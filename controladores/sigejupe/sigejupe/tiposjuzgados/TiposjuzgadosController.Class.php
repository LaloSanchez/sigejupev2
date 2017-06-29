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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgados/TiposjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgados/TiposjuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class TiposjuzgadosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTiposjuzgados($TiposjuzgadosDto) {
        $TiposjuzgadosDto->setcveTipoJuzgado(strtoupper(str_ireplace("'", "", trim($TiposjuzgadosDto->getcveTipoJuzgado()))));
        $TiposjuzgadosDto->setdesTipoJuzgado(strtoupper(str_ireplace("'", "", trim($TiposjuzgadosDto->getdesTipoJuzgado()))));
        $TiposjuzgadosDto->setactivo(strtoupper(str_ireplace("'", "", trim($TiposjuzgadosDto->getactivo()))));
        $TiposjuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TiposjuzgadosDto->getfechaRegistro()))));
        $TiposjuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TiposjuzgadosDto->getfechaActualizacion()))));
        return $TiposjuzgadosDto;
    }

    public function selectTiposjuzgados($TiposjuzgadosDto, $proveedor = null) {
        $TiposjuzgadosDto = $this->validarTiposjuzgados($TiposjuzgadosDto);
        $TiposjuzgadosDao = new TiposjuzgadosDAO();
        $TiposjuzgadosDto = $TiposjuzgadosDao->selectTiposjuzgados($TiposjuzgadosDto, $proveedor);
        return $TiposjuzgadosDto;
    }

    public function selectTiposjuzgadosOrden($TiposjuzgadosDto, $orden = "",$proveedor=null) {
        $TiposjuzgadosDto = $this->validarTiposjuzgados($TiposjuzgadosDto);
        $TiposjuzgadosDao = new TiposjuzgadosDAO();
        $TiposjuzgadosDto = $TiposjuzgadosDao->selectTiposjuzgados($TiposjuzgadosDto, $orden, $proveedor);
        return $TiposjuzgadosDto;
    }

    public function insertTiposjuzgados($TiposjuzgadosDto, $proveedor = null) {
        $TiposjuzgadosDto = $this->validarTiposjuzgados($TiposjuzgadosDto);
        $TiposjuzgadosDao = new TiposjuzgadosDAO();
        $TiposjuzgadosDto = $TiposjuzgadosDao->insertTiposjuzgados($TiposjuzgadosDto, $proveedor);
        return $TiposjuzgadosDto;
    }

    public function updateTiposjuzgados($TiposjuzgadosDto, $proveedor = null) {
        $TiposjuzgadosDto = $this->validarTiposjuzgados($TiposjuzgadosDto);
        $TiposjuzgadosDao = new TiposjuzgadosDAO();
//$tmpDto = new TiposjuzgadosDTO();
//$tmpDto = $TiposjuzgadosDao->selectTiposjuzgados($TiposjuzgadosDto,$proveedor);
//if($tmpDto!=""){//$TiposjuzgadosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $TiposjuzgadosDto = $TiposjuzgadosDao->updateTiposjuzgados($TiposjuzgadosDto, $proveedor);
        return $TiposjuzgadosDto;
//}
//return "";
    }

    public function deleteTiposjuzgados($TiposjuzgadosDto, $proveedor = null) {
        $TiposjuzgadosDto = $this->validarTiposjuzgados($TiposjuzgadosDto);
        $TiposjuzgadosDao = new TiposjuzgadosDAO();
        $TiposjuzgadosDto = $TiposjuzgadosDao->deleteTiposjuzgados($TiposjuzgadosDto, $proveedor);
        return $TiposjuzgadosDto;
    }

}

?>
