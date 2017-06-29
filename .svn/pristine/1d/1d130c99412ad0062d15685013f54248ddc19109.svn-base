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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/autoresaudiencias/AutoresaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/autoresaudiencias/AutoresaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class AutoresaudienciasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAutoresaudiencias($AutoresaudienciasDto) {
        $AutoresaudienciasDto->setidAutorAudiencia(strtoupper(str_ireplace("'", "", trim($AutoresaudienciasDto->getidAutorAudiencia()))));
        $AutoresaudienciasDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim($AutoresaudienciasDto->getcveCatAudiencia()))));
        $AutoresaudienciasDto->setcveGrupo(strtoupper(str_ireplace("'", "", trim($AutoresaudienciasDto->getcveGrupo()))));
        $AutoresaudienciasDto->setactivo(strtoupper(str_ireplace("'", "", trim($AutoresaudienciasDto->getactivo()))));
        $AutoresaudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($AutoresaudienciasDto->getfechaRegistro()))));
        $AutoresaudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($AutoresaudienciasDto->getfechaActualizacion()))));
        return $AutoresaudienciasDto;
    }

    public function selectAutoresaudiencias($AutoresaudienciasDto, $proveedor = null) {
        $AutoresaudienciasDto = $this->validarAutoresaudiencias($AutoresaudienciasDto);
        $AutoresaudienciasDao = new AutoresaudienciasDAO();
        $AutoresaudienciasDto = $AutoresaudienciasDao->selectAutoresaudiencias($AutoresaudienciasDto, $proveedor);
        return $AutoresaudienciasDto;
    }

    public function insertAutoresaudiencias($AutoresaudienciasDto, $proveedor = null) {
        $AutoresaudienciasDto = $this->validarAutoresaudiencias($AutoresaudienciasDto);
        $AutoresaudienciasDao = new AutoresaudienciasDAO();
        $AutoresaudienciasDto = $AutoresaudienciasDao->insertAutoresaudiencias($AutoresaudienciasDto, $proveedor);
        return $AutoresaudienciasDto;
    }

    public function updateAutoresaudiencias($AutoresaudienciasDto, $proveedor = null) {
        $AutoresaudienciasDto = $this->validarAutoresaudiencias($AutoresaudienciasDto);
        $AutoresaudienciasDao = new AutoresaudienciasDAO();
//$tmpDto = new AutoresaudienciasDTO();
//$tmpDto = $AutoresaudienciasDao->selectAutoresaudiencias($AutoresaudienciasDto,$proveedor);
//if($tmpDto!=""){//$AutoresaudienciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $AutoresaudienciasDto = $AutoresaudienciasDao->updateAutoresaudiencias($AutoresaudienciasDto, $proveedor);
        return $AutoresaudienciasDto;
//}
//return "";
    }

    public function deleteAutoresaudiencias($AutoresaudienciasDto, $proveedor = null) {
        $AutoresaudienciasDto = $this->validarAutoresaudiencias($AutoresaudienciasDto);
        $AutoresaudienciasDao = new AutoresaudienciasDAO();
        $AutoresaudienciasDto = $AutoresaudienciasDao->deleteAutoresaudiencias($AutoresaudienciasDto, $proveedor);
        return $AutoresaudienciasDto;
    }
    public function autoresAudienciasOrden($AutoresaudienciasDto, $proveedor = null) {
        $AutoresaudienciasDto = $this->validarAutoresaudiencias($AutoresaudienciasDto);
        $AutoresaudienciasDao = new AutoresaudienciasDAO();
        $AutoresaudienciasDto = $AutoresaudienciasDao->autoresAudienciasOrden($AutoresaudienciasDto, $proveedor);
        return $AutoresaudienciasDto;
    }

}

?>