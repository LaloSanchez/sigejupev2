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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosjuzgadores/TelefonosjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosjuzgadores/TelefonosjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class TelefonosjuzgadoresController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTelefonosjuzgadores($TelefonosjuzgadoresDto) {
        $TelefonosjuzgadoresDto->setidTelefonJuzgador(strtoupper(str_ireplace("'", "", trim($TelefonosjuzgadoresDto->getidTelefonJuzgador()))));
        $TelefonosjuzgadoresDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($TelefonosjuzgadoresDto->getidJuzgador()))));
        $TelefonosjuzgadoresDto->setcveTipoLada(strtoupper(str_ireplace("'", "", trim($TelefonosjuzgadoresDto->getcveTipoLada()))));
        $TelefonosjuzgadoresDto->settelefono(strtoupper(str_ireplace("'", "", trim($TelefonosjuzgadoresDto->gettelefono()))));
        $TelefonosjuzgadoresDto->setcelular(strtoupper(str_ireplace("'", "", trim($TelefonosjuzgadoresDto->getcelular()))));
        $TelefonosjuzgadoresDto->setemail(strtolower(str_ireplace("'", "", trim($TelefonosjuzgadoresDto->getemail()))));
        $TelefonosjuzgadoresDto->setactivo(strtoupper(str_ireplace("'", "", trim($TelefonosjuzgadoresDto->getactivo()))));
        $TelefonosjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TelefonosjuzgadoresDto->getfechaRegistro()))));
        $TelefonosjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TelefonosjuzgadoresDto->getfechaActualizacion()))));
        return $TelefonosjuzgadoresDto;
    }

    public function selectTelefonosjuzgadores($TelefonosjuzgadoresDto, $proveedor = null) {
        $TelefonosjuzgadoresDto = $this->validarTelefonosjuzgadores($TelefonosjuzgadoresDto);
        $TelefonosjuzgadoresDao = new TelefonosjuzgadoresDAO();
        $TelefonosjuzgadoresDto = $TelefonosjuzgadoresDao->selectTelefonosjuzgadores($TelefonosjuzgadoresDto, $proveedor);
        return $TelefonosjuzgadoresDto;
    }

    public function insertTelefonosjuzgadores($TelefonosjuzgadoresDto, $proveedor = null) {
        $TelefonosjuzgadoresDto = $this->validarTelefonosjuzgadores($TelefonosjuzgadoresDto);
        $TelefonosjuzgadoresDao = new TelefonosjuzgadoresDAO();
        $TelefonosjuzgadoresDto = $TelefonosjuzgadoresDao->insertTelefonosjuzgadores($TelefonosjuzgadoresDto, $proveedor);
        return $TelefonosjuzgadoresDto;
    }

    public function updateTelefonosjuzgadores($TelefonosjuzgadoresDto, $proveedor = null) {
        $TelefonosjuzgadoresDto = $this->validarTelefonosjuzgadores($TelefonosjuzgadoresDto);
        $TelefonosjuzgadoresDao = new TelefonosjuzgadoresDAO();
//$tmpDto = new TelefonosjuzgadoresDTO();
//$tmpDto = $TelefonosjuzgadoresDao->selectTelefonosjuzgadores($TelefonosjuzgadoresDto,$proveedor);
//if($tmpDto!=""){//$TelefonosjuzgadoresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $TelefonosjuzgadoresDto = $TelefonosjuzgadoresDao->updateTelefonosjuzgadores($TelefonosjuzgadoresDto, $proveedor);
        return $TelefonosjuzgadoresDto;
//}
//return "";
    }

    public function elimar($TelefonosjuzgadoresDto, $proveedor = null) {
        $TelefonosjuzgadoresDto = $this->validarTelefonosjuzgadores($TelefonosjuzgadoresDto);
        $TelefonosjuzgadoresDao = new TelefonosjuzgadoresDAO();
//$tmpDto = new TelefonosjuzgadoresDTO();
//$tmpDto = $TelefonosjuzgadoresDao->selectTelefonosjuzgadores($TelefonosjuzgadoresDto,$proveedor);
//if($tmpDto!=""){//$TelefonosjuzgadoresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $TelefonosjuzgadoresDto = $TelefonosjuzgadoresDao->updateTelefonosjuzgadoresRSP($TelefonosjuzgadoresDto, $proveedor);
        return $TelefonosjuzgadoresDto;
//}
//return "";
    }

    public function deleteTelefonosjuzgadores($TelefonosjuzgadoresDto, $proveedor = null) {
        $TelefonosjuzgadoresDto = $this->validarTelefonosjuzgadores($TelefonosjuzgadoresDto);
        $TelefonosjuzgadoresDao = new TelefonosjuzgadoresDAO();
        $TelefonosjuzgadoresDto = $TelefonosjuzgadoresDao->deleteTelefonosjuzgadores($TelefonosjuzgadoresDto, $proveedor);
        return $TelefonosjuzgadoresDto;
    }

}

?>