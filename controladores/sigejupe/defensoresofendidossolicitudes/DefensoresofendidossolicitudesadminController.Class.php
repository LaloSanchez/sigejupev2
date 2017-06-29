<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ofendidossolicitudes/ValidaSolicitudadminOfendido.php");

class DefensoresofendidossolicitudesController extends ValidaSolicitudOfendido {

    private $proveedor;

    public function validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto) {
        $DefensoresofendidossolicitudesDto->setidDefensorOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud()))));
        $DefensoresofendidossolicitudesDto->setidOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getidOfendidoSolicitud()))));
        $DefensoresofendidossolicitudesDto->setcveTipoAsesor(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getcveTipoAsesor()))));
        $DefensoresofendidossolicitudesDto->setnombre(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getnombre()))));
        $DefensoresofendidossolicitudesDto->settelefono(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->gettelefono()))));
        $DefensoresofendidossolicitudesDto->setcelular(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getcelular()))));
        $DefensoresofendidossolicitudesDto->setemail(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getemail()))));
        $DefensoresofendidossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getactivo()))));
        $DefensoresofendidossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getfechaRegistro()))));
        $DefensoresofendidossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($DefensoresofendidossolicitudesDto->getfechaActualizacion()))));

        return $DefensoresofendidossolicitudesDto;
    }

    public function validarDefensor($DefensoresofendidossolicitudesDto) {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];

        if (!$validacion->num(1, 2, $DefensoresofendidossolicitudesDto->getCveTipoAsesor())) {
            if ($DefensoresofendidossolicitudesDto->getCveTipoAsesor() <= 0) {
                $estatus = 'error';
                $msg[] = '* El tipo de defensor no es válido';
            }
        }

        if (!$validacion->between(1, 500, $DefensoresofendidossolicitudesDto->getNombre())) {
            $estatus = 'error';
            $msg[] = '* El nombre debe contener entre 1 y 500 caracteres y ser un texto';
        }

        if ($DefensoresofendidossolicitudesDto->getTelefono() != '') {
            if (!$validacion->num(9, 9, $DefensoresofendidossolicitudesDto->getTelefono())) {
                $estatus = 'error';
                $msg[] = '* El teléfono debe ser numerico y contener 10 digitos';
            }
        }

        if ($DefensoresofendidossolicitudesDto->getCelular() != '') {
            if (!$validacion->num(9, 9, $DefensoresofendidossolicitudesDto->getCelular())) {
                $estatus = 'error';
                $msg[] = '* El celular debe ser numerico y contener 10 digitos';
            }
        }


        //validaciones a la base de datos
        if ($estatus == "ok" && $DefensoresofendidossolicitudesDto->getIdOfendidoSolicitud() == "") {
            $defensorValidateDto = new DefensoresofendidossolicitudesDTO();
            $defensorValidateDto->setIdOfendidoSolicitud($DefensoresofendidossolicitudesDto->getIdOfendidoSolicitud());
            $defensorValidateDto->setNombre($DefensoresofendidossolicitudesDto->getNombre());
            $defensorValidateDto->setActivo('S');

            $selectDefensores = $this->selectDefensoresofendidossolicitudes($defensorValidateDto);

            if (count($selectDefensores)) {
                $estatus = "error";
                $msg[] = '* El nombre del defensor ya esta registrado para el Ofendido';
            }
        }

        $response = [
            'status' => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }

    public function agregarDefensorOfendido($DefensoresofendidossolicitudesDto, $proveedor = '', $usaBitacora = true) {

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        //valida si puede agregar defensor
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($DefensoresofendidossolicitudesDto->getIdOfendidoSolicitud(), 'agregar', 'representante');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => [
                    $validaSolicitudAudiencia['mensaje']
                ]
            ];
        }

        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $validate = $this->validarDefensor($DefensoresofendidossolicitudesDto);
        if ($validate['status'] == 'error')
            return $validate;

        if ($proveedor == null) {
            $this->proveedor->execute('BEGIN');
        }


        try {

            $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
            $defensorResponse = $DefensoresofendidossolicitudesDao->insertDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $this->proveedor);

            if (!count($defensorResponse)) {

                throw new Exception('no se pudo guardar el defensor del ofendido');
            }

            if ($usaBitacora) {

                $bitacora = new BitacoramovimientosController();

                $bitacoraDefensor = $bitacora->agregar(64, 'INSERCION tbldefensoresofendidossolicitudes', 'txt', serialize($defensorResponse[0]), '', $this->proveedor);

                if (!count($bitacoraDefensor)) {

                    throw new Exception('no se pudo guardar la accion agregar defensor en bitacora');
                }
            }


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            return [
                'status' => 'ok',
                'mensaje' => 'Defensor del Ofendido guardado correctamente!',
                'data' => [
                    'idDefensorOfendidoSolicitud' => $defensorResponse[0]->getIdDefensorOfendidoSolicitud(),
                    'idOfendidoSolicitud' => $defensorResponse[0]->getIdOfendidoSolicitud(),
                    'cveTipoAsesor' => $defensorResponse[0]->getCveTipoAsesor(),
                    'nombre' => $defensorResponse[0]->getNombre(),
                    'telefono' => $defensorResponse[0]->getTelefono(),
                    'celular' => $defensorResponse[0]->getCelular(),
                    'email' => $defensorResponse[0]->getEmail(),
                    'activo' => $defensorResponse[0]->getActivo(),
                    'fechaRegistro' => $defensorResponse[0]->getFechaRegistro(),
                    'fechaActualizacion' => $defensorResponse[0]->getFechaActualizacion()
                ]
            ];
        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }


            return [
                'status' => 'error',
                'mensaje' => 'No se pudo guardar el Defensor del Ofendido.'
            ];
        }
    }

    public function modificarDefensorOfendido($DefensoresofendidossolicitudesDto, $proveedor = '', $usaBitacora = true) {

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        //valida si puede modificar defensor
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($DefensoresofendidossolicitudesDto->getIdOfendidoSolicitud(), 'modificar', 'representante');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => [
                    $validaSolicitudAudiencia['mensaje']
                ]
            ];
        }

        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);

        $validate = $this->validarDefensor($DefensoresofendidossolicitudesDto);

        if ($validate['status'] == 'error')
            return $validate;

        if ($proveedor == null) {
            $this->proveedor->execute('BEGIN');
        }


        try {

            $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();

            $defensorResponse = $DefensoresofendidossolicitudesDao->updateDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $this->proveedor);

            if (!count($defensorResponse))
                throw new Exception('no se pudo modificar el defensor del ofendido');

            $selectDefensorDto = new DefensoresofendidossolicitudesDTO();

            $selectDefensorDto->setIdDefensorOfendidoSolicitud($DefensoresofendidossolicitudesDto->getIdDefensorOfendidoSolicitud());

            $selectDefensor = $DefensoresofendidossolicitudesDao->selectDefensoresofendidossolicitudes($selectDefensorDto, '', $this->proveedor);

            if ($usaBitacora) {
                $bitacora = new BitacoramovimientosController();

                $bitacoraDefensor = $bitacora->agregar(65, 'ACTUALIZACION tbldefensoresofendidossolicitudes', 'txt', 'Datos antes de editar >>> ' . serialize($selectDefensor[0]) . '    Datos despues de editar>>>' . serialize($defensorResponse[0]), '', $this->proveedor);

                if (!count($bitacoraDefensor))
                    throw new Exception('no se pudo guardar la accion editar tutor ofendido en bitacora');
            }


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            return [
                'status' => 'ok',
                'mensaje' => 'Defensor del Ofendido editado correctamente!',
                'data' => [
                    'idDefensorOfendidoSolicitud' => $defensorResponse[0]->getIdDefensorOfendidoSolicitud(),
                    'idOfendidoSolicitud' => $defensorResponse[0]->getIdOfendidoSolicitud(),
                    'cveTipoAsesor' => $defensorResponse[0]->getCveTipoAsesor(),
                    'nombre' => $defensorResponse[0]->getNombre(),
                    'telefono' => $defensorResponse[0]->getTelefono(),
                    'celular' => $defensorResponse[0]->getCelular(),
                    'email' => $defensorResponse[0]->getEmail(),
                    'activo' => $defensorResponse[0]->getActivo(),
                    'fechaRegistro' => $defensorResponse[0]->getFechaRegistro(),
                    'fechaActualizacion' => $defensorResponse[0]->getFechaActualizacion()
                ]
            ];
        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }


            return [
                'status' => 'error',
                'mensaje' => ['No se pudo editar el Defensor del Ofendido, intenta nuevamente.']
            ];
        }
    }

    public function eliminarDefensor($DefensoresofendidossolicitudesDto, $proveedor = '') {
        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }


        //valida si puede eliminar defensor
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($DefensoresofendidossolicitudesDto->getIdOfendidoSolicitud(), 'eliminar', 'representante');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => $validaSolicitudAudiencia['mensaje']
            ];
        }

        $this->proveedor->execute('BEGIN');

        try {

            $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();

            $defensorResponse = $DefensoresofendidossolicitudesDao->eliminarDefensoresOfendido($DefensoresofendidossolicitudesDto, '', 'idDefensorOfendidoSolicitud');

            if (!$defensorResponse)
                throw new Exception('no se pudo eliminar el defensor');

            $bitacora = new BitacoramovimientosController();

            $bitacoraDefensor = $bitacora->agregar(66, 'ELIMINACION tbldefensoresofendidossolicitudes', 'txt', serialize($DefensoresofendidossolicitudesDto), '', $this->proveedor);

            if (!count($bitacoraDefensor))
                throw new Exception('no se pudo guardar la accion editar tutor ofendido en bitacora');


            $this->proveedor->execute('COMMIT');

            return [
                'status' => 'ok',
                'mensaje' => 'Defensor del Ofendido eliminado correctamente!',
                'data' => []
            ];
        } catch (Exception $e) {

            $this->proveedor->execute('ROLLBACK');

            return [
                'status' => 'error',
                'mensaje' => 'No se pudo eliminar el Defensor del Ofendido.'
            ];
        }
    }

    public function selectDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor = null) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
        $DefensoresofendidossolicitudesDto = $DefensoresofendidossolicitudesDao->selectDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor);

        return $DefensoresofendidossolicitudesDto;
    }

    public function insertDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor = null) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
        $DefensoresofendidossolicitudesDto = $DefensoresofendidossolicitudesDao->insertDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor);

        return $DefensoresofendidossolicitudesDto;
    }

    public function updateDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor = null) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
        $DefensoresofendidossolicitudesDto = $DefensoresofendidossolicitudesDao->updateDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor);

        return $DefensoresofendidossolicitudesDto;
    }

    public function deleteDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor = null) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesDao = new DefensoresofendidossolicitudesDAO();
        $DefensoresofendidossolicitudesDto = $DefensoresofendidossolicitudesDao->deleteDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto, $proveedor);

        return $DefensoresofendidossolicitudesDto;
    }

}
