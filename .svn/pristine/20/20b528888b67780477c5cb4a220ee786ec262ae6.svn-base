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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipoamparo/TipoamparoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tipoamparo/TipoamparoDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class TipoamparoController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTipoamparo($TipoamparoDto) {
        $TipoamparoDto->setCveTipoAmparo(strtoupper(str_ireplace("'", "", trim($TipoamparoDto->getCveTipoAmparo()))));
        $TipoamparoDto->setDesTipoAmparo(strtoupper(str_ireplace("'", "", trim($TipoamparoDto->getDesTipoAmparo()))));
        return $TipoamparoDto;
    }

    public function selectTipoamparo($TipoamparoDto, $proveedor = null) {
        $TipoamparoDto = $this->validarTipoamparo($TipoamparoDto);
        $TipoamparoDao = new TipoamparoDAO();
        $TipoamparoDto = $TipoamparoDao->selectTipoamparo($TipoamparoDto, $proveedor);
        return $TipoamparoDto;
    }

    public function selectTipoamparoOrden($TipoamparoDto, $orden = "", $proveedor = null) {
        $TipoamparoDto = $this->validarTipoamparo($TipoamparoDto);
        $TipoamparoDao = new TipoamparoDAO();
        $TipoamparoDto = $TipoamparoDao->selectTipoamparo($TipoamparoDto, $orden, $proveedor);
        return $TipoamparoDto;
    }

    public function insertTipoamparo($TipoamparoDto, $proveedor = null) {
        $TipoamparoDto = $this->validarTipoamparo($TipoamparoDto);
        $TipoamparoDao = new TipoamparoDAO();
        $TipoamparoDto = $TipoamparoDao->insertTipoamparo($TipoamparoDto, $proveedor);
        return $TipoamparoDto;
    }

    public function updateTipoamparo($TipoamparoDto, $proveedor = null) {
        $TipoamparoDto = $this->validarTipoamparo($TipoamparoDto);
        $TipoamparoDao = new TipoamparoDAO();
//$tmpDto = new TipoamparoDTO();
//$tmpDto = $TipoamparoDao->selectTipoamparo($TipoamparoDto,$proveedor);
//if($tmpDto!=""){//$TipoamparoDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $TipoamparoDto = $TipoamparoDao->updateTipoamparo($TipoamparoDto, $proveedor);
        return $TipoamparoDto;
//}
//return "";
    }

    public function deleteTipoamparo($TipoamparoDto, $proveedor = null) {
        $TipoamparoDto = $this->validarTipoamparo($TipoamparoDto);
        $TipoamparoDao = new TipoamparoDAO();
        $TipoamparoDto = $TipoamparoDao->deleteTipoamparo($TipoamparoDto, $proveedor);
        return $TipoamparoDto;
    }

}

?>