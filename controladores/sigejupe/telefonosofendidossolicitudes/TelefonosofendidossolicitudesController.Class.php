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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosofendidossolicitudes/TelefonosofendidossolicitudesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ofendidossolicitudes/ValidaSolicitudOfendido.php");

class TelefonosofendidossolicitudesController extends ValidaSolicitudOfendido {

    private $proveedor;

    public function validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto) {
        $TelefonosofendidossolicitudesDto->setidTelefonoOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getidTelefonoOfendidoSolicitud()))));
        $TelefonosofendidossolicitudesDto->setidOfendidoSolicitud(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getidOfendidoSolicitud()))));
        $TelefonosofendidossolicitudesDto->settelefono(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->gettelefono()))));
        $TelefonosofendidossolicitudesDto->setcelular(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getcelular()))));
        $TelefonosofendidossolicitudesDto->setemail(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getemail()))));
        $TelefonosofendidossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getactivo()))));
        $TelefonosofendidossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getfechaRegistro()))));
        $TelefonosofendidossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TelefonosofendidossolicitudesDto->getfechaActualizacion()))));

        return $TelefonosofendidossolicitudesDto;
    }

    public function validaTelefono($TelefonosofendidossolicitudesDto) {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];

        if ($TelefonosofendidossolicitudesDto->getIdOfendidoSolicitud() == "") {
            $estatus = 'error';
            $msg[] = '* Tienes que ingresar el ofensor';
        }

        if ($TelefonosofendidossolicitudesDto->getTelefono() == '' && $TelefonosofendidossolicitudesDto->getCelular() == '' && $TelefonosofendidossolicitudesDto->getEmail() == '') {
            $estatus = 'error';
            $msg[] = '* Tienes que ingresar el número de teléfono, celular o email';
        }


        if ($TelefonosofendidossolicitudesDto->getTelefono() != "") {
            if (!$validacion->num(9, 9, $TelefonosofendidossolicitudesDto->getTelefono())) {
                $estatus = 'error';
                $msg[] = '* El teléfono debe ser numérico y contener 10 digitos';
            }
        }


        if ($TelefonosofendidossolicitudesDto->getCelular() != "") {
            if (!$validacion->num(9, 9, $TelefonosofendidossolicitudesDto->getCelular())) {
                $estatus = 'error';
                $msg[] = '* El celular debe ser numérico y contener 10 digitos';
            }
        }

        if ($TelefonosofendidossolicitudesDto->getEmail() != '') {
            if (strlen($TelefonosofendidossolicitudesDto->getEmail()) > 100) {
                $estatus = 'error';
                $msg[] = '* El email debe contener maximo 100 caracteres';
            }
        }

        $response = [
            'status' => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }

    public function agregarTelefonoOfendido($TelefonosofendidossolicitudesDto, $proveedor = '', $usaBitacora = true) {

        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

//        valida si puede agregar telefono
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($TelefonosofendidossolicitudesDto->getIdOfendidoSolicitud(), 'agregar', 'tel&eacute;fono, celular, email', $this->proveedor);
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => [
                    $validaSolicitudAudiencia['mensaje']
                ]
            ];
        }

        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);


        $validate = $this->validaTelefono($TelefonosofendidossolicitudesDto);

        if ($validate['status'] == 'error')
            return $validate;

        if ($TelefonosofendidossolicitudesDto->getTelefono() == '')
            $TelefonosofendidossolicitudesDto->setTelefono(' ');
        if ($TelefonosofendidossolicitudesDto->getCelular() == '')
            $TelefonosofendidossolicitudesDto->setCelular(' ');


        if ($proveedor == null) {
            $this->proveedor->execute('BEGIN');
        }


        try {

            $TelefonosofendidossolicitudesDao = new TelefonosofendidossolicitudesDAO();

            $telefonoResponse = $TelefonosofendidossolicitudesDao->insertTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto, $this->proveedor);

            if (!count($telefonoResponse))
                throw new Exception('no se pudo guardar el teléfono del ofendido');

            if ($usaBitacora) {

                $bitacora = new BitacoramovimientosController();

                $bitacoraTelefono = $bitacora->agregar(61, 'INSERCION tbltelefonosofendidossolicitudes', 'txt', serialize($telefonoResponse[0]), '', $this->proveedor);

                if (!count($bitacoraTelefono))
                    throw new Exception('no se pudo guardar la accion agregar teléfono en bitacora');
            }


            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            $response = [
                'status' => 'ok',
                'mensaje' => 'Teléfono del Ofendido guardado correctamente!',
                'data' => [
                    'idTelefonoOfendidoSolicitud' => $telefonoResponse[0]->getIdTelefonoOfendidoSolicitud(),
                    'idOfendidoSolicitud' => $telefonoResponse[0]->getIdOfendidoSolicitud(),
                    'telefono' => $telefonoResponse[0]->getTelefono(),
                    'celular' => $telefonoResponse[0]->getCelular(),
                    'email' => $telefonoResponse[0]->getEmail(),
                    'activo' => $telefonoResponse[0]->getActivo(),
                    'fechaRegistro' => $telefonoResponse[0]->getFechaRegistro(),
                    'fechaActualizacion' => $telefonoResponse[0]->getFechaActualizacion()
                ]
            ];
        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }

            $response = [
                'status' => 'error',
                'mensaje' => 'No se pudo guardar el Teléfono del Ofendido.'
            ];
        }

        return $response;
    }

    public function modificarTelefonoOfendido($TelefonosofendidossolicitudesDto, $proveedor = '', $usaBitacora = false) {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }


        //valida si puede editar telefono
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($TelefonosofendidossolicitudesDto->getIdOfendidoSolicitud(), 'editar', 'tel&eacute;fono, celular, email');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => [
                    $validaSolicitudAudiencia['mensaje']
                ]
            ];
        }

        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);

        $validate = $this->validaTelefono($TelefonosofendidossolicitudesDto);

        if ($validate['status'] == 'error')
            return $validate;

        if ($proveedor == null) {
            $this->proveedor->execute('BEGIN');
        }


        try {

            $TelefonosofendidossolicitudesDao = new TelefonosofendidossolicitudesDAO();
            $TelefonosofendidossolicitudesDto->setFechaActualizacion('NOW');
            $telefonoResponse = $TelefonosofendidossolicitudesDao->updateTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto, $this->proveedor);

            if (!count($telefonoResponse))
                throw new Exception('no se pudo actualizar el teléfono del ofendido');

            $selectTelefonoDto = new TelefonosofendidossolicitudesDTO();
            $selectTelefonoDto->setIdTelefonoOfendidoSolicitud($TelefonosofendidossolicitudesDto->getIdTelefonoOfendidoSolicitud());
            $selectTelefono = $TelefonosofendidossolicitudesDao->selectTelefonosofendidossolicitudes($selectTelefonoDto, '', $this->proveedor);

            if ($usaBitacora) {
                $bitacora = new BitacoramovimientosController();
                $bitacoraTelefono = $bitacora->agregar(62, 'ACTUALIZACIÓN tbltelefonosofendidossolicitudes', 'txt', 'DATOS ANTES DE ACTUALIZAR >>> ' . serialize($selectTelefono[0]) . ' DATOS DESPUES DE ACTUALIZAR >>>' . serialize($telefonoResponse[0]), '', $this->proveedor);
                if (!count($bitacoraTelefono))
                    throw new Exception('no se pudo guardar la accion actualizar teléfono en bitacora');
            }



            if ($proveedor == null) {
                $this->proveedor->execute('COMMIT');
            }


            return [
                'status' => 'ok',
                'mensaje' => 'Teléfono del Ofendido editado correctamente!',
                'data' => [
                    'idTelefonoOfendidoSolicitud' => $telefonoResponse[0]->getIdTelefonoOfendidoSolicitud(),
                    'idOfendidoSolicitud' => $telefonoResponse[0]->getIdOfendidoSolicitud(),
                    'telefono' => $telefonoResponse[0]->getTelefono(),
                    'celular' => $telefonoResponse[0]->getCelular(),
                    'email' => $telefonoResponse[0]->getEmail(),
                    'activo' => $telefonoResponse[0]->getActivo(),
                    'fechaRegistro' => $telefonoResponse[0]->getFechaRegistro(),
                    'fechaActualizacion' => $telefonoResponse[0]->getFechaActualizacion()
                ]
            ];
        } catch (Exception $e) {

            if ($proveedor == null) {
                $this->proveedor->execute('ROLLBACK');
            }


            return [
                'status' => 'error',
                'mensaje' => 'No se pudo editar el Teléfono del Ofendido.'
            ];
        }
    }

    public function eliminarTelefonoOfendido($TelefonosofendidossolicitudesDto, $proveedor = '') {
        if ($proveedor == null) {

            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {

            $this->proveedor = $proveedor;
        }

        //valida si puede eliminar telefono
        $validaSolicitudAudiencia = $this->validarEstatusSolicitudByIdOfendido($TelefonosofendidossolicitudesDto->getIdOfendidoSolicitud(), 'eliminar', 'tel&eacute;fono, celular, email');
        if ($validaSolicitudAudiencia['estatus'] == 'error') {
            return [
                'status' => 'error',
                'mensaje' => $validaSolicitudAudiencia['mensaje']
            ];
        }


        $this->proveedor->execute('BEGIN');

        try {

            $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);

            $TelefonosofendidossolicitudesDao = new TelefonosofendidossolicitudesDAO();
            $telefonoResponse = $TelefonosofendidossolicitudesDao->eliminarTelefonosOfendido($TelefonosofendidossolicitudesDto, $this->proveedor, 'idTelefonoOfendidoSolicitud');

            if (!$telefonoResponse)
                throw new Exception('no se pudo eliminar el teléfono del ofendido');

            $bitacora = new BitacoramovimientosController();
            $bitacoraTelefono = $bitacora->agregar(63, 'ELIMINAR tbltelefonosofendidossolicitudes', 'txt', serialize($TelefonosofendidossolicitudesDto), '', $this->proveedor);

            if (!count($bitacoraTelefono))
                throw new Exception('no se pudo guardar la accion eliminar teléfono en bitacora');


            $this->proveedor->execute('COMMIT');

            return [
                'status' => 'ok',
                'mensaje' => 'Teléfono del Ofendido eliminado correctamente!',
                'data' => []
            ];
        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return [
                'status' => 'error',
                'mensaje' => 'No se pudo eliminar el Teléfono del Ofendido.'
            ];
        }
    }

    public function selectTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto, $proveedor = null) {
        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        $TelefonosofendidossolicitudesDao = new TelefonosofendidossolicitudesDAO();
        $TelefonosofendidossolicitudesDto = $TelefonosofendidossolicitudesDao->selectTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto, $proveedor);

        return $TelefonosofendidossolicitudesDto;
    }

    public function insertTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto, $proveedor = null) {
        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        $TelefonosofendidossolicitudesDao = new TelefonosofendidossolicitudesDAO();
        $TelefonosofendidossolicitudesDto = $TelefonosofendidossolicitudesDao->insertTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto, $proveedor);

        return $TelefonosofendidossolicitudesDto;
    }

    public function updateTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto, $proveedor = null) {
        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        $TelefonosofendidossolicitudesDao = new TelefonosofendidossolicitudesDAO();
        $TelefonosofendidossolicitudesDto = $TelefonosofendidossolicitudesDao->updateTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto, $proveedor);

        return $TelefonosofendidossolicitudesDto;
    }

    public function deleteTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto, $proveedor = null) {
        $TelefonosofendidossolicitudesDto = $this->validarTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto);
        $TelefonosofendidossolicitudesDao = new TelefonosofendidossolicitudesDAO();
        $TelefonosofendidossolicitudesDto = $TelefonosofendidossolicitudesDao->deleteTelefonosofendidossolicitudes($TelefonosofendidossolicitudesDto, $proveedor);

        return $TelefonosofendidossolicitudesDto;
    }

}
