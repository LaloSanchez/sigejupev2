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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatusamparos/EstatusamparosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatusamparos/EstatusamparosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class EstatusamparosController {

    private $proveedor;

    public function __construct() {
        
    }
    public function validarEstatusamparos($EstatusamparosDto) {
        $EstatusamparosDto->setcveEstatusAmparo(strtoupper(str_ireplace("'", "", trim($EstatusamparosDto->getcveEstatusAmparo()))));
        $EstatusamparosDto->setdesEstatus(strtoupper(str_ireplace("'", "", trim($EstatusamparosDto->getdesEstatus()))));
        $EstatusamparosDto->setactivo(strtoupper(str_ireplace("'", "", trim($EstatusamparosDto->getactivo()))));
        $EstatusamparosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($EstatusamparosDto->getfechaRegistro()))));
        $EstatusamparosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($EstatusamparosDto->getfechaActualizacion()))));
        return $EstatusamparosDto;
    }

    public function selectEstatusamparos($EstatusamparosDto, $proveedor = null) {
        $EstatusamparosDto = $this->validarEstatusamparos($EstatusamparosDto);
        $EstatusamparosDao = new EstatusamparosDAO();
        $EstatusamparosDto = $EstatusamparosDao->selectEstatusamparos($EstatusamparosDto, $proveedor);
        return $EstatusamparosDto;
    }
    public function selectEstatusamparosOrden($EstatusamparosDto,$orden="", $proveedor = null) {
        $EstatusamparosDto = $this->validarEstatusamparos($EstatusamparosDto);
        $EstatusamparosDao = new EstatusamparosDAO();
        $EstatusamparosDto = $EstatusamparosDao->selectEstatusamparos($EstatusamparosDto, $orden,$proveedor);
        return $EstatusamparosDto;
    }

    public function insertEstatusamparos($EstatusamparosDto, $proveedor = null) {
        $EstatusamparosDto = $this->validarEstatusamparos($EstatusamparosDto);
        $EstatusamparosDao = new EstatusamparosDAO();
        $EstatusamparosDto = $EstatusamparosDao->insertEstatusamparos($EstatusamparosDto, $proveedor);
        return $EstatusamparosDto;
    }

    public function updateEstatusamparos($EstatusamparosDto, $proveedor = null) {
        $EstatusamparosDto = $this->validarEstatusamparos($EstatusamparosDto);
        $EstatusamparosDao = new EstatusamparosDAO();
//$tmpDto = new EstatusamparosDTO();
//$tmpDto = $EstatusamparosDao->selectEstatusamparos($EstatusamparosDto,$proveedor);
//if($tmpDto!=""){//$EstatusamparosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $EstatusamparosDto = $EstatusamparosDao->updateEstatusamparos($EstatusamparosDto, $proveedor);
        return $EstatusamparosDto;
//}
//return "";
    }

    public function deleteEstatusamparos($EstatusamparosDto, $proveedor = null) {
        $EstatusamparosDto = $this->validarEstatusamparos($EstatusamparosDto);
        $EstatusamparosDao = new EstatusamparosDAO();
        $EstatusamparosDto = $EstatusamparosDao->deleteEstatusamparos($EstatusamparosDto, $proveedor);
        return $EstatusamparosDto;
    }

}

?>