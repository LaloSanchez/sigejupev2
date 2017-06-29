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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposestatusradicacion/TiposestatusradicacionDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposestatusradicacion/TiposestatusradicacionDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class TiposestatusradicacionController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTiposestatusradicacion($TiposestatusradicacionDto) {
        $TiposestatusradicacionDto->setcveTipoEstatusRadicacion(strtoupper(str_ireplace("'", "", trim($TiposestatusradicacionDto->getcveTipoEstatusRadicacion()))));
        $TiposestatusradicacionDto->setdesTipoEstatusRadicacion(strtoupper(str_ireplace("'", "", trim($TiposestatusradicacionDto->getdesTipoEstatusRadicacion()))));
        $TiposestatusradicacionDto->setactivo(strtoupper(str_ireplace("'", "", trim($TiposestatusradicacionDto->getactivo()))));
        $TiposestatusradicacionDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TiposestatusradicacionDto->getfechaRegistro()))));
        $TiposestatusradicacionDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TiposestatusradicacionDto->getfechaActualizacion()))));
        return $TiposestatusradicacionDto;
    }

    public function selectTiposestatusradicacion($TiposestatusradicacionDto, $proveedor = null) {
        $TiposestatusradicacionDto = $this->validarTiposestatusradicacion($TiposestatusradicacionDto);
        $TiposestatusradicacionDao = new TiposestatusradicacionDAO();
        $TiposestatusradicacionDto = $TiposestatusradicacionDao->selectTiposestatusradicacion($TiposestatusradicacionDto, $proveedor);
        return $TiposestatusradicacionDto;
    }

    public function insertTiposestatusradicacion($TiposestatusradicacionDto, $proveedor = null) {
        $TiposestatusradicacionDto = $this->validarTiposestatusradicacion($TiposestatusradicacionDto);
        $TiposestatusradicacionDao = new TiposestatusradicacionDAO();
        $TiposestatusradicacionDto = $TiposestatusradicacionDao->insertTiposestatusradicacion($TiposestatusradicacionDto, $proveedor);
        return $TiposestatusradicacionDto;
    }

    public function updateTiposestatusradicacion($TiposestatusradicacionDto, $proveedor = null) {
        $TiposestatusradicacionDto = $this->validarTiposestatusradicacion($TiposestatusradicacionDto);
        $TiposestatusradicacionDao = new TiposestatusradicacionDAO();
//$tmpDto = new TiposestatusradicacionDTO();
//$tmpDto = $TiposestatusradicacionDao->selectTiposestatusradicacion($TiposestatusradicacionDto,$proveedor);
//if($tmpDto!=""){//$TiposestatusradicacionDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $TiposestatusradicacionDto = $TiposestatusradicacionDao->updateTiposestatusradicacion($TiposestatusradicacionDto, $proveedor);
        return $TiposestatusradicacionDto;
//}
//return "";
    }

    public function deleteTiposestatusradicacion($TiposestatusradicacionDto, $proveedor = null) {
        $TiposestatusradicacionDto = $this->validarTiposestatusradicacion($TiposestatusradicacionDto);
        $TiposestatusradicacionDao = new TiposestatusradicacionDAO();
        $TiposestatusradicacionDto = $TiposestatusradicacionDao->deleteTiposestatusradicacion($TiposestatusradicacionDto, $proveedor);
        return $TiposestatusradicacionDto;
    }

}

?>