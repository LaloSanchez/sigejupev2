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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
class NacionalidadesofendidoscarpetasController {
    private $proveedor;
    public function __construct() {
    }
    
    public function validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto){
        $NacionalidadesofendidoscarpetasDto->setidNacionalidadOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($NacionalidadesofendidoscarpetasDto->getidNacionalidadOfendidoCarpeta()))));
        $NacionalidadesofendidoscarpetasDto->setcvePais(strtoupper(str_ireplace("'","",trim($NacionalidadesofendidoscarpetasDto->getcvePais()))));
        $NacionalidadesofendidoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($NacionalidadesofendidoscarpetasDto->getactivo()))));
        $NacionalidadesofendidoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($NacionalidadesofendidoscarpetasDto->getfechaRegistro()))));
        $NacionalidadesofendidoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($NacionalidadesofendidoscarpetasDto->getfechaActualizacion()))));
        $NacionalidadesofendidoscarpetasDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim($NacionalidadesofendidoscarpetasDto->getidOfendidoCarpeta()))));
        return $NacionalidadesofendidoscarpetasDto;
    }
    
    public function validaNacionalidadOfendido($NacionalidadesofendidoscarpetasDto)
    {
        $validacion = new Validacion();
        $estatus = 'ok';
        $msg = [];

        if (!$validacion->num(1, 2, (int) $NacionalidadesofendidoscarpetasDto->getCvePais())) {
            if ($NacionalidadesofendidoscarpetasDto->getCvePais() <= 0) {
                $estatus = true;
                $msg[] = '* El país seleccionado no es válido';
            }
        }

        if ($NacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() == "" || $NacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta() == 0) {
            $estatus = 'error';
            $msg[] = '* El id del sujeto pasivo del delito es requerido';
        }

        if (!($NacionalidadesofendidoscarpetasDto->getActivo() == "S" || $NacionalidadesofendidoscarpetasDto->getActivo() == "N")) {
            $estatus = 'error';
            $msg[] = '* El estatus tiene que ser S o N';
        }

        if ($estatus == 'ok') {

            $NacionalidadValidateDto = new NacionalidadesofendidoscarpetasDTO();
            $NacionalidadValidateDto->setCvePais($NacionalidadesofendidoscarpetasDto->getCvePais());
            $NacionalidadValidateDto->setIdOfendidoCarpeta($NacionalidadesofendidoscarpetasDto->getIdOfendidoCarpeta());
            $NacionalidadValidateDto->setActivo('S');
            $selectNacionalidad = $this->selectNacionalidadesofendidoscarpetas($NacionalidadValidateDto);
            //var_dump($selectNacionalidad);
            if (count($selectNacionalidad)) {
                $estatus = 'error';
                $msg[] = '* La nacionalidad ingresada ya existe';
            }
        }


        $response = [
            'status'  => $estatus,
            'mensaje' => $msg
        ];

        return $response;
    }
    
    public function selectNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto,$proveedor=null){
        $NacionalidadesofendidoscarpetasDto=$this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $NacionalidadesofendidoscarpetasDao = new NacionalidadesofendidoscarpetasDAO();
        $NacionalidadesofendidoscarpetasDto = $NacionalidadesofendidoscarpetasDao->selectNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto,$proveedor);
        return $NacionalidadesofendidoscarpetasDto;
    }
    
    public function agregarNacionalidadOfendido($NacionalidadesofendidoscarpetasDto, $proveedor = null)
    {
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute('BEGIN');

        try {

            $NacionalidadesofendidoscarpetasDto = $this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
            $validate = $this->validaNacionalidadOfendido($NacionalidadesofendidoscarpetasDto);

            if ($validate['status'] == "error") return $validate;
            $NacionalidadesofendidoscarpetasDao = new NacionalidadesofendidoscarpetasDAO();
            $nacionalidadResponse = $NacionalidadesofendidoscarpetasDao->insertNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto, $this->proveedor);


            if (!count($nacionalidadResponse)) {
                $this->proveedor->execute('ROLLBACK');
                throw new Exception('No se pudo guardar la nacionalidad');
            }

            $bitacora = new BitacoramovimientosController();
            $bitacoraNacionalidad = $bitacora->agregar(204, 'INSERCION tblnacionalidadesofendidoscarpetas', 'txt', serialize($nacionalidadResponse[0]), '', $this->proveedor);

            if (!count($bitacoraNacionalidad)) {
                $this->proveedor->execute('ROLLBACK');
                throw new Exception('No se pudo guardar en bitacora la acción de la nacionalidad');
            }

            $this->proveedor->execute('COMMIT');

            return [
                'status'  => 'ok',
                'mensaje' => 'Nacionalidad guardada correctamente!',
                'data'    => [
                    'idNacionalidadOfendidoCarpeta' => $nacionalidadResponse[0]->getIdNacionalidadOfendidoCarpeta(),
                    'cvePais'                       => $nacionalidadResponse[0]->getCvePais(),
                    'activo'                        => $nacionalidadResponse[0]->getActivo(),
                    'fechaRegistro'                 => $nacionalidadResponse[0]->getFechaRegistro(),
                    'fechaActualizacion'            => $nacionalidadResponse[0]->getFechaActualizacion(),
                    'idOfendidoCarpeta'             => $nacionalidadResponse[0]->getIdOfendidoCarpeta()
                ]
            ];


        } catch (Exception $e) {
            return [
                'status'  => 'error',
                'mensaje' => 'No se pudo guardar la nacionalidad.'
            ];
        }


    }

    public function modificarNacionalidadOfendido($NacionalidadesofendidoscarpetasDto)
    {
        $NacionalidadesofendidoscarpetasDto = $this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $validate = $this->validaNacionalidadOfendido($NacionalidadesofendidoscarpetasDto);

        if ($validate['status'] == "error") return $validate;
        $NacionalidadesofendidoscarpetasDao = new NacionalidadesofendidoscarpetasDAO();
        $nacionalidadResponse = $NacionalidadesofendidoscarpetasDao->updateNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $bitacora = new BitacoramovimientosController();
        $bitacoraNacionalidad = $bitacora->agregar(205, 'MODIFICACION tblnacionalidadesofendidoscarpetas', 'txt', serialize($nacionalidadResponse[0]), '');

        if (!count($bitacoraNacionalidad)) {
            //$this->proveedor->execute('ROLLBACK');
            throw new Exception('No se pudo guardar la acción de la nacionalidad');
        }
        if (count($nacionalidadResponse)) {
            return [
                'status'  => 'ok',
                'mensaje' => 'Nacionalidad editada correctamente!',
                'data'    => [
                    'idNacionalidadOfendidoCarpeta' => $nacionalidadResponse[0]->getIdNacionalidadOfendidoCarpeta(),
                    'cvePais'                       => $nacionalidadResponse[0]->getCvePais(),
                    'activo'                        => $nacionalidadResponse[0]->getActivo(),
                    'fechaRegistro'                 => $nacionalidadResponse[0]->getFechaRegistro(),
                    'fechaActualizacion'            => $nacionalidadResponse[0]->getFechaActualizacion(),
                    'idOfendidoCarpeta'             => $nacionalidadResponse[0]->getIdOfendidoCarpeta()
                ]
            ];

        }

        return [
            'status'  => 'error',
            'mensaje' => 'No se pudo editada la nacionalidad.'
        ];
    }

    public function eliminarNacionalidadOfendido($NacionalidadesofendidoscarpetasDto, $proveedor = null)
    {

        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
        } else {
            $this->proveedor = $proveedor;
        }

        $this->proveedor->execute('BEGIN');

        try {

            $NacionalidadesofendidoscarpetasDto = $this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
            $NacionalidadesofendidoscarpetasDto->setActivo('N');
            $NacionalidadesofendidoscarpetasDao = new NacionalidadesofendidoscarpetasDAO();
            $nacionalidadResponse = $NacionalidadesofendidoscarpetasDao->updateNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto, $this->proveedor);

            if (!count($nacionalidadResponse)) {
                $this->proveedor->execute('ROLLBACK');
                throw new Exception('no se pudo eliminar la nacionalidad');
            }

            $bitacora = new BitacoramovimientosController();
            $bitacoraNacionalidad = $bitacora->agregar(206, 'BORRADO LOGICO tblnacionalidadesofendidoscarpetas', 'txt', serialize($nacionalidadResponse[0]), '', $this->proveedor);

            if (!count($bitacoraNacionalidad)) {
                throw new Exception('No se pudo insertar en bitacora accion eliminar de nacionalidad');
            }
            $this->proveedor->execute('COMMIT');
            return [
                'status'  => 'ok',
                'mensaje' => 'Nacionalidad eliminada correctamente!',
                'data'    => [
                    'idNacionalidadOfendidoCarpeta' => $nacionalidadResponse[0]->getIdNacionalidadOfendidoCarpeta(),
                    'cvePais'                       => $nacionalidadResponse[0]->getCvePais(),
                    'activo'                        => $nacionalidadResponse[0]->getActivo(),
                    'fechaRegistro'                 => $nacionalidadResponse[0]->getFechaRegistro(),
                    'fechaActualizacion'            => $nacionalidadResponse[0]->getFechaActualizacion(),
                    'idOfendidoCarpeta'             => $nacionalidadResponse[0]->getIdOfendidoCarpeta()
                ]
            ];


        } catch (Exception $e) {
            return [
                'status'  => 'error',
                'mensaje' => 'No se pudo eliminar la nacionalidad.'
            ];
        }


    }
    
    public function insertNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto,$proveedor=null){
        $NacionalidadesofendidoscarpetasDto=$this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $NacionalidadesofendidoscarpetasDao = new NacionalidadesofendidoscarpetasDAO();
        $NacionalidadesofendidoscarpetasDto = $NacionalidadesofendidoscarpetasDao->insertNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto,$proveedor);
        return $NacionalidadesofendidoscarpetasDto;
    }
    
    public function updateNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto,$proveedor=null){
        $NacionalidadesofendidoscarpetasDto=$this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $NacionalidadesofendidoscarpetasDao = new NacionalidadesofendidoscarpetasDAO();
        //$tmpDto = new NacionalidadesofendidoscarpetasDTO();
        //$tmpDto = $NacionalidadesofendidoscarpetasDao->selectNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto,$proveedor);
        //if($tmpDto!=""){//$NacionalidadesofendidoscarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $NacionalidadesofendidoscarpetasDto = $NacionalidadesofendidoscarpetasDao->updateNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto,$proveedor);
        return $NacionalidadesofendidoscarpetasDto;
        //}
        //return "";
    }
    
    public function deleteNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto,$proveedor=null){
        $NacionalidadesofendidoscarpetasDto=$this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $NacionalidadesofendidoscarpetasDao = new NacionalidadesofendidoscarpetasDAO();
        $NacionalidadesofendidoscarpetasDto = $NacionalidadesofendidoscarpetasDao->deleteNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto,$proveedor);
        return $NacionalidadesofendidoscarpetasDto;
    }
}
?>