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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidossolicitudes/NacionalidadesofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ofendidossolicitudes/ValidaSolicitudadminOfendido.php");

class NacionalidadesofendidossolicitudesController extends ValidaSolicitudOfendido {

    private $proveedor;

    public function validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto) {
        $NacionalidadesofendidossolicitudesDto->setidNacionalidadOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($NacionalidadesofendidossolicitudesDto->getidNacionalidadOfendidoSolicitud()))));
        $NacionalidadesofendidossolicitudesDto->setcvePais(strtoupper(str_ireplace("'", "", trim($NacionalidadesofendidossolicitudesDto->getcvePais()))));
        $NacionalidadesofendidossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($NacionalidadesofendidossolicitudesDto->getactivo()))));
        $NacionalidadesofendidossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($NacionalidadesofendidossolicitudesDto->getfechaRegistro()))));
        $NacionalidadesofendidossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($NacionalidadesofendidossolicitudesDto->getfechaActualizacion()))));
        $NacionalidadesofendidossolicitudesDto->setidOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($NacionalidadesofendidossolicitudesDto->getidOfendidoSolicitud()))));

        return $NacionalidadesofendidossolicitudesDto;
    }

    public function validaNacionalidadOfendido($NacionalidadesofendidossolicitudesDto) {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];

        if (!$validacion->num(1, 2, (int) $NacionalidadesofendidossolicitudesDto->getCvePais())) {
            if ($NacionalidadesofendidossolicitudesDto->getCvePais() <= 0) {
                $estatus = true;
                $msg[] = '* El país seleccionado no es válido';
            }
        }

        if ($NacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() == "" || $NacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud() == 0) {
            $estatus = 'error';
            $msg[] = '* El id del ofendido es requerido';
        }

        if (!($NacionalidadesofendidossolicitudesDto->getActivo() == "S" || $NacionalidadesofendidossolicitudesDto->getActivo() == "N")) {
            $estatus = 'error';
            $msg[] = '* El estatus tiene que ser S o N';
        }

        if ($estatus == 'ok') {

            $NacionalidadValidateDto = new NacionalidadesofendidossolicitudesDTO();
            $NacionalidadValidateDto->setCvePais($NacionalidadesofendidossolicitudesDto->getCvePais());
            $NacionalidadValidateDto->setIdOfendidoSolicitud($NacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud());
            $NacionalidadValidateDto->setActivo('S');
            $selectNacionalidad = $this->selectNacionalidadesofendidossolicitudes($NacionalidadValidateDto);

            if (count($selectNacionalidad)) {
                $estatus = 'error';
                $msg[] = '* La nacionalidad ingresada ya existe para el ofendido';
            }
        }


        $response = [
            'status' => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }

    public function agregarNacionalidadOfendido($NacionalidadesofendidossolicitudesDto, $proveedor = null, $usaBitacora = true) {

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }


        //valida si puede agregar domicilio
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($NacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud(), 'agregar', 'nacionalidad');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => [
                    $validaSolicitudAudiencia['mensaje']
                ]
            ];
        }


        if ($proveedor == null) {
            $this->proveedor->execute('BEGIN');
        }


        try {

            $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
            $validate = $this->validaNacionalidadOfendido($NacionalidadesofendidossolicitudesDto);

            if ($validate['status'] == "error")
                return $validate;

            $NacionalidadesofendidossolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
            $nacionalidadResponse = $NacionalidadesofendidossolicitudesDao->insertNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto, $this->proveedor);


            if (!count($nacionalidadResponse)) {

                throw new Exception('No se pudo guardar la nacionalidad');
            }

            if ($usaBitacora) {

                $bitacora = new BitacoramovimientosController();
                $bitacoraNacionalidad = $bitacora->agregar(70, 'INSERCION tblnacionalidades', 'txt', serialize($nacionalidadResponse[0]), '', $this->proveedor);

                if (!count($bitacoraNacionalidad)) {

                    throw new Exception('No se pudo guardar en bitacora la acción de la nacionalidad');
                }
            }


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            $response = [
                'status' => 'ok',
                'mensaje' => 'Nacionalidad del Ofendido guardada correctamente!',
                'data' => [
                    'idNacionalidadOfendidoSolicitud' => $nacionalidadResponse[0]->getIdNacionalidadOfendidoSolicitud(),
                    'cvePais' => $nacionalidadResponse[0]->getCvePais(),
                    'desPais' => $nacionalidadResponse[0]->getDesPais(),
                    'activo' => $nacionalidadResponse[0]->getActivo(),
                    'fechaRegistro' => $nacionalidadResponse[0]->getFechaRegistro(),
                    'fechaActualizacion' => $nacionalidadResponse[0]->getFechaActualizacion(),
                    'idOfendidoSolicitud' => $nacionalidadResponse[0]->getIdOfendidoSolicitud()
                ]
            ];
        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }


            $response = [
                'status' => 'error',
                'mensaje' => 'No se pudo guardar la nacionalidad del Ofendido.'
            ];
        }

        return $response;
    }

    public function modificarNacionalidadOfendido($NacionalidadesofendidossolicitudesDto, $proveedor, $usaBitacora = true) {

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        //valida si puede modificar nacionalidad
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($NacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud(), 'modificar', 'nacionalidad');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => [
                    $validaSolicitudAudiencia['mensaje']
                ]
            ];
        }


        $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);

        $validate = $this->validaNacionalidadOfendido($NacionalidadesofendidossolicitudesDto);

        if ($validate['status'] == "error")
            return $validate;


        try {

            if ($proveedor == null) {
                $this->proveedor->execute('BEGIN');
            }


            $NacionalidadesofendidossolicitudesDao = new NacionalidadesofendidossolicitudesDAO();

            $nacionalidadResponse = $NacionalidadesofendidossolicitudesDao->updateNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto, $this->proveedor);


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            $response = [
                'status' => 'ok',
                'mensaje' => 'Nacionalidad del Ofendido editada correctamente!',
                'data' => [
                    'idNacionalidadOfendidoSolicitud' => $nacionalidadResponse[0]->getIdNacionalidadOfendidoSolicitud(),
                    'cvePais' => $nacionalidadResponse[0]->getCvePais(),
                    'desPais' => $nacionalidadResponse[0]->getDesPais(),
                    'activo' => $nacionalidadResponse[0]->getActivo(),
                    'fechaRegistro' => $nacionalidadResponse[0]->getFechaRegistro(),
                    'fechaActualizacion' => $nacionalidadResponse[0]->getFechaActualizacion(),
                    'idOfendidoSolicitud' => $nacionalidadResponse[0]->getIdOfendidoSolicitud()
                ]
            ];
        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }


            $response = [
                'status' => 'error',
                'mensaje' => 'No se pudo editada la nacionalidad del Ofendido.'
            ];
        }

        return $response;
    }

    public function eliminarNacionalidadOfendido($NacionalidadesofendidossolicitudesDto, $proveedor = null) {

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        //valida si puede eliminar nacionalidad
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($NacionalidadesofendidossolicitudesDto->getIdOfendidoSolicitud(), 'eliminar', 'nacionalidad');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => $validaSolicitudAudiencia['mensaje']
            ];
        }

        $this->proveedor->execute('BEGIN');

        try {

            $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);

            $NacionalidadesofendidossolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
            $nacionalidadResponse = $NacionalidadesofendidossolicitudesDao->updateNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);

            if (!count($nacionalidadResponse)) {
                $this->proveedor->execute('ROLLBACK');
                throw new Exception('no se pudo eliminar la nacionalidad');
            }

            $bitacora = new BitacoramovimientosController();
            $bitacoraNacionalidad = $bitacora->agregar(71, 'BORRADO LOGICO tblnacionalidades', 'txt', serialize($nacionalidadResponse[0]), '');

            if (!count($bitacoraNacionalidad)) {
                throw new Exception('No se pudo insertar en bitacora accion eliminar de nacionalidad');
            }

            return [
                'status' => 'ok',
                'mensaje' => 'Nacionalidad del Ofendido eliminada correctamente!',
                'data' => [
                    'idNacionalidadOfendidoSolicitud' => $nacionalidadResponse[0]->getIdNacionalidadOfendidoSolicitud(),
                    'cvePais' => $nacionalidadResponse[0]->getCvePais(),
                    'desPais' => $nacionalidadResponse[0]->getDesPais(),
                    'activo' => $nacionalidadResponse[0]->getActivo(),
                    'fechaRegistro' => $nacionalidadResponse[0]->getFechaRegistro(),
                    'fechaActualizacion' => $nacionalidadResponse[0]->getFechaActualizacion(),
                    'idOfendidoSolicitud' => $nacionalidadResponse[0]->getIdOfendidoSolicitud()
                ]
            ];
        } catch (Exception $e) {
            return [
                'status' => 'error',
                'mensaje' => 'No se pudo eliminar la nacionalidad del Ofendido.'
            ];
        }
    }

    public function selectNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto, $proveedor = null) {
        $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        $NacionalidadesofendidossolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
        $NacionalidadesofendidossolicitudesDto = $NacionalidadesofendidossolicitudesDao->selectNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto, $proveedor);

        return $NacionalidadesofendidossolicitudesDto;
    }

    public function insertNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto, $proveedor = null) {
        $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        $NacionalidadesofendidossolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
        $NacionalidadesofendidossolicitudesDto = $NacionalidadesofendidossolicitudesDao->insertNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto, $proveedor);

        return $NacionalidadesofendidossolicitudesDto;
    }

    public function updateNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto, $proveedor = null) {
        $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        $NacionalidadesofendidossolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
        $NacionalidadesofendidossolicitudesDto = $NacionalidadesofendidossolicitudesDao->updateNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto, $proveedor);

        return $NacionalidadesofendidossolicitudesDto;
    }

    public function deleteNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto, $proveedor = null) {
        $NacionalidadesofendidossolicitudesDto = $this->validarNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto);
        $NacionalidadesofendidossolicitudesDao = new NacionalidadesofendidossolicitudesDAO();
        $NacionalidadesofendidossolicitudesDto = $NacionalidadesofendidossolicitudesDao->deleteNacionalidadesofendidossolicitudes($NacionalidadesofendidossolicitudesDto, $proveedor);

        return $NacionalidadesofendidossolicitudesDto;
    }

}
