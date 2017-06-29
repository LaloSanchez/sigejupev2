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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/trataspersonas/TrataspersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/trataspersonas/TrataspersonasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class TrataspersonasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTrataspersonas($TrataspersonasDto) {
        $TrataspersonasDto->setidTrataPersona(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getidTrataPersona()))));
        $TrataspersonasDto->setcveEstadoDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcveEstadoDestino()))));
        $TrataspersonasDto->setcveMunicipioDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcveMunicipioDestino()))));
        $TrataspersonasDto->setcvePaisDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcvePaisDestino()))));
        $TrataspersonasDto->setestadoDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getestadoDestino()))));
        $TrataspersonasDto->setmunicipioDestino(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getmunicipioDestino()))));
        $TrataspersonasDto->setcveEstadoOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcveEstadoOrigen()))));
        $TrataspersonasDto->setcveMunicipioOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcveMunicipioOrigen()))));
        $TrataspersonasDto->setcvePaisOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcvePaisOrigen()))));
        $TrataspersonasDto->setestadoOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getestadoOrigen()))));
        $TrataspersonasDto->setmunicipioOrigen(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getmunicipioOrigen()))));
        $TrataspersonasDto->setcveTipoTrata(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcveTipoTrata()))));
        $TrataspersonasDto->setcveTrasportacion(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getcveTrasportacion()))));
        $TrataspersonasDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'", "", trim($TrataspersonasDto->getidImpOfeDelSolicitud()))));
        return $TrataspersonasDto;
    }

    public function selectTrataspersonas($TrataspersonasDto, $proveedor = null) {
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $TrataspersonasDao = new TrataspersonasDAO();
        $TrataspersonasDto = $TrataspersonasDao->selectTrataspersonas($TrataspersonasDto, $proveedor);
        return $TrataspersonasDto;
    }

    public function insertTrataspersonas($TrataspersonasDto, $proveedor = null) {
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $TrataspersonasDao = new TrataspersonasDAO();
        $TrataspersonasDto = $TrataspersonasDao->insertTrataspersonas($TrataspersonasDto, $proveedor);
        return $TrataspersonasDto;
    }

    public function updateTrataspersonas($TrataspersonasDto, $proveedor = null) {
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $TrataspersonasDao = new TrataspersonasDAO();
//$tmpDto = new TrataspersonasDTO();
//$tmpDto = $TrataspersonasDao->selectTrataspersonas($TrataspersonasDto,$proveedor);
//if($tmpDto!=""){//$TrataspersonasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $TrataspersonasDto = $TrataspersonasDao->updateTrataspersonas($TrataspersonasDto, $proveedor);
        return $TrataspersonasDto;
//}
//return "";
    }

    public function deleteTrataspersonas($TrataspersonasDto, $proveedor = null) {
        $TrataspersonasDto = $this->validarTrataspersonas($TrataspersonasDto);
        $TrataspersonasDao = new TrataspersonasDAO();
        $TrataspersonasDto = $TrataspersonasDao->deleteTrataspersonas($TrataspersonasDto, $proveedor);
        return $TrataspersonasDto;
    }

}

?>