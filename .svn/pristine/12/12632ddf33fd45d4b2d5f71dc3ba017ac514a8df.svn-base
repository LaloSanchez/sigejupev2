<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 CONTROLLER
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
class TelefonosofendidoscarpetasController {
    private $proveedor;
    public function __construct() {
    }
    public function validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto){
        $TelefonosofendidoscarpetasDto->setidTelefonoOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($TelefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta()))));
        $TelefonosofendidoscarpetasDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($TelefonosofendidoscarpetasDto->getidOfendidoCarpeta()))));
        $TelefonosofendidoscarpetasDto->settelefono(strtoupper(str_ireplace("'","",trim($TelefonosofendidoscarpetasDto->gettelefono()))));
        $TelefonosofendidoscarpetasDto->setcelular(strtoupper(str_ireplace("'","",trim($TelefonosofendidoscarpetasDto->getcelular()))));
        $TelefonosofendidoscarpetasDto->setemail(strtoupper(str_ireplace("'","",trim($TelefonosofendidoscarpetasDto->getemail()))));
        $TelefonosofendidoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($TelefonosofendidoscarpetasDto->getactivo()))));
        $TelefonosofendidoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TelefonosofendidoscarpetasDto->getfechaRegistro()))));
        $TelefonosofendidoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TelefonosofendidoscarpetasDto->getfechaActualizacion()))));
        return $TelefonosofendidoscarpetasDto;
    }
    
    public function validaTelefono($TelefonosofendidoscarpetasDto)
    {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];

        if ($TelefonosofendidoscarpetasDto->getIdOfendidoCarpeta() == "") {
            $estatus = 'error';
            $msg[] = '* Tienes que ingresar el sujeto pasivo del delito';
        }

        if ($TelefonosofendidoscarpetasDto->getTelefono() == '' && $TelefonosofendidoscarpetasDto->getCelular() == '' && $TelefonosofendidoscarpetasDto->getEmail() == '') {
            $estatus = 'error';
            $msg[] = '* Tienes que ingresar el número de teléfono, celular o email';
        }


        if ($TelefonosofendidoscarpetasDto->getTelefono() != "") {
            if (!$validacion->num(9, 9, $TelefonosofendidoscarpetasDto->getTelefono())) {
                $estatus = 'error';
                $msg[] = '* El teléfono debe ser numérico y contener 10 digitos';
            }
        }


        if ($TelefonosofendidoscarpetasDto->getCelular() != "") {
            if (!$validacion->num(9, 9, $TelefonosofendidoscarpetasDto->getCelular())) {
                $estatus = 'error';
                $msg[] = '* El celular debe ser numérico y contener 10 digitos';
            }
        }

        if ($TelefonosofendidoscarpetasDto->getEmail() != '') {
            if (strlen($TelefonosofendidoscarpetasDto->getEmail()) > 100) {
                $estatus = 'error';
                $msg[] = '* El email debe contener maximo 100 caracteres';
            }
        }

        $response = [
            'status'  => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }
    
    public function selectTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto,$proveedor=null){
        $TelefonosofendidoscarpetasDto=$this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        $TelefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();
        $TelefonosofendidoscarpetasDto = $TelefonosofendidoscarpetasDao->selectTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto,$proveedor);
        return $TelefonosofendidoscarpetasDto;
    }
    
    public function agregarTelefonoOfendido($TelefonosofendidoscarpetasDto, $proveedor = '')
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $TelefonosofendidoscarpetasDto = $this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);

        $validate = $this->validaTelefono($TelefonosofendidoscarpetasDto);

        if ($validate['status'] == 'error') return $validate;

        $this->proveedor->execute('BEGIN');

        try {

            $TelefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();

            $telefonoResponse = $TelefonosofendidoscarpetasDao->insertTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto, $this->proveedor);

            if (!count($telefonoResponse)) throw new Exception('no se pudo guardar el teléfono');

            $bitacora = new BitacoramovimientosController();
            $bitacoraTelefono = $bitacora->agregar(195, 'INSERCION tbltelefonosofendidoscarpetas', 'txt', serialize($telefonoResponse[0]), '', $this->proveedor);

            if (!count($bitacoraTelefono)) throw new Exception('no se pudo guardar la accion agregar teléfono en bitacora');

            $this->proveedor->execute('COMMIT');

            return [
                'status'  => 'ok',
                'mensaje' => 'Teléfono guardado correctamente!',
                'data'    => [
                    'idTelefonoOfendidoCarpeta' => $telefonoResponse[0]->getIdTelefonoOfendidoCarpeta(),
                    'idOfendidoCarpeta'         => $telefonoResponse[0]->getIdOfendidoCarpeta(),
                    'telefono'                  => $telefonoResponse[0]->getTelefono(),
                    'celular'                   => $telefonoResponse[0]->getCelular(),
                    'email'                     => $telefonoResponse[0]->getEmail(),
                    'activo'                    => $telefonoResponse[0]->getActivo(),
                    'fechaRegistro'             => $telefonoResponse[0]->getFechaRegistro(),
                    'fechaActualizacion'        => $telefonoResponse[0]->getFechaActualizacion()
                ]
            ];

        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => 'No se pudo guardar el Teléfono.'
            ];
        }
    }

    public function modificarTelefonoOfendido($TelefonosofendidoscarpetasDto, $proveedor = '')
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $TelefonosofendidoscarpetasDto = $this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);

        $validate = $this->validaTelefono($TelefonosofendidoscarpetasDto);

        if ($validate['status'] == 'error') return $validate;

        $this->proveedor->execute('BEGIN');

        try {

            $TelefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();
            //$TelefonosofendidoscarpetasDto->setFechaActualizacion('NOW');
            $telefonoResponse = $TelefonosofendidoscarpetasDao->modificarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto, $this->proveedor);

            if (!count($telefonoResponse)) throw new Exception('no se pudo actualizar el teléfono');

            $selectTelefonoDto = new TelefonosofendidoscarpetasDTO();
            $selectTelefonoDto->setIdTelefonoOfendidoCarpeta($TelefonosofendidoscarpetasDto->getIdTelefonoOfendidoCarpeta());
            $selectTelefono = $TelefonosofendidoscarpetasDao->selectTelefonosofendidoscarpetas($selectTelefonoDto, "", $this->proveedor);

            $bitacora = new BitacoramovimientosController();
            $bitacoraTelefono = $bitacora->agregar(196, 'ACTUALIZACIÓN tbltelefonosofendidoscarpetas', 'txt', 'DATOS ANTES DE ACTUALIZAR >>> ' . serialize($selectTelefono[0]) . ' DATOS DESPUES DE ACTUALIZAR >>>' . serialize($telefonoResponse[0]), '', $this->proveedor);

            if (!count($bitacoraTelefono)) throw new Exception('no se pudo guardar la accion actualizar teléfono en bitacora');


            $this->proveedor->execute('COMMIT');

            return [
                'status'  => 'ok',
                'mensaje' => 'Teléfono editado correctamente!',
                'data'    => [
                    'idTelefonoOfendidoCarpeta' => $telefonoResponse[0]->getIdTelefonoOfendidoCarpeta(),
                    'idOfendidoCarpeta'         => $telefonoResponse[0]->getIdOfendidoCarpeta(),
                    'telefono'                  => $telefonoResponse[0]->getTelefono(),
                    'celular'                   => $telefonoResponse[0]->getCelular(),
                    'email'                     => $telefonoResponse[0]->getEmail(),
                    'activo'                    => $telefonoResponse[0]->getActivo(),
                    'fechaRegistro'             => $telefonoResponse[0]->getFechaRegistro(),
                    'fechaActualizacion'        => $telefonoResponse[0]->getFechaActualizacion()
                ]
            ];


        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => 'No se pudo editar el Teléfono.'
            ];
        }


    }

    public function eliminarTelefonoOfendido($TelefonosofendidoscarpetasDto, $proveedor = '')
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute('BEGIN');

        try {

            $TelefonosofendidoscarpetasDto = $this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);

            $TelefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();
            $TelefonosofendidoscarpetasDto->setActivo('N');
            $telefonoResponse = $TelefonosofendidoscarpetasDao->eliminarTelefonoOfendidoByIdOfendidoCarpeta($TelefonosofendidoscarpetasDto, $this->proveedor);
            if (!$telefonoResponse) throw new Exception('no se pudo eliminar el teléfono');

            $bitacora = new BitacoramovimientosController();
            $bitacoraTelefono = $bitacora->agregar(197, 'ELIMINAR tbltelefonosofendidoscarpetas', 'txt', serialize($TelefonosofendidoscarpetasDto), '', $this->proveedor);

            if (!count($bitacoraTelefono)) throw new Exception('no se pudo guardar la accion eliminar teléfono en bitacora');


            $this->proveedor->execute('COMMIT');

            return [
                'status'  => 'ok',
                'mensaje' => 'Teléfono eliminado correctamente!',
                'data'    => []
            ];


        } catch (Exception $e) {
            $this->proveedor->execute('ROLLBACK');

            return [
                'status'  => 'error',
                'mensaje' => 'No se pudo eliminar el Teléfono.'
            ];
        }


    }
    
    public function insertTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto,$proveedor=null){
        $TelefonosofendidoscarpetasDto=$this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        $TelefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();
        $TelefonosofendidoscarpetasDto = $TelefonosofendidoscarpetasDao->insertTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto,$proveedor);
        return $TelefonosofendidoscarpetasDto;
    }
    
    public function updateTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto,$proveedor=null){
        $TelefonosofendidoscarpetasDto=$this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        $TelefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();
        //$tmpDto = new TelefonosofendidoscarpetasDTO();
        //$tmpDto = $TelefonosofendidoscarpetasDao->selectTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$TelefonosofendidoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $TelefonosofendidoscarpetasDto = $TelefonosofendidoscarpetasDao->updateTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto,$proveedor);
        return $TelefonosofendidoscarpetasDto;
        //}
        //return "";
    }
    
    public function deleteTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto,$proveedor=null){
        $TelefonosofendidoscarpetasDto=$this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        $TelefonosofendidoscarpetasDao = new TelefonosofendidoscarpetasDAO();
        $TelefonosofendidoscarpetasDto = $TelefonosofendidoscarpetasDao->deleteTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto,$proveedor);
        return $TelefonosofendidoscarpetasDto;
    }
}
?>