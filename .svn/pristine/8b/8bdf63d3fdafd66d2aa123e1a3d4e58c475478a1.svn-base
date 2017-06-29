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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/sexuales/SexualesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/sexuales/SexualesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class SexualesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarSexuales($SexualesDto) {
        $SexualesDto->setidSexual(strtoupper(str_ireplace("'", "", trim($SexualesDto->getidSexual()))));
        $SexualesDto->setcveModalidadAcoso(strtoupper(str_ireplace("'", "", trim($SexualesDto->getcveModalidadAcoso()))));
        $SexualesDto->setcveAmbitoAcoso(strtoupper(str_ireplace("'", "", trim($SexualesDto->getcveAmbitoAcoso()))));
        $SexualesDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'", "", trim($SexualesDto->getidImpOfeDelSolicitud()))));
        $SexualesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($SexualesDto->getfechaRegistro()))));
        $SexualesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($SexualesDto->getfechaActualizacion()))));
        return $SexualesDto;
    }

    public function selectSexuales($SexualesDto, $proveedor = null) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $SexualesDao = new SexualesDAO();
        $SexualesDto = $SexualesDao->selectSexuales($SexualesDto, $proveedor);
        return $SexualesDto;
    }

    public function insertSexuales($SexualesDto, $proveedor = null) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $SexualesDao = new SexualesDAO();
        $SexualesDto = $SexualesDao->insertSexuales($SexualesDto, $proveedor);
        return $SexualesDto;
    }

    public function updateSexuales($SexualesDto, $proveedor = null) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $SexualesDao = new SexualesDAO();
//$tmpDto = new SexualesDTO();
//$tmpDto = $SexualesDao->selectSexuales($SexualesDto,$proveedor);
//if($tmpDto!=""){//$SexualesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $SexualesDto = $SexualesDao->updateSexuales($SexualesDto, $proveedor);
        return $SexualesDto;
//}
//return "";
    }

    public function deleteSexuales($SexualesDto, $proveedor = null) {
        $SexualesDto = $this->validarSexuales($SexualesDto);
        $SexualesDao = new SexualesDAO();
        $SexualesDto = $SexualesDao->deleteSexuales($SexualesDto, $proveedor);
        return $SexualesDto;
    }

}

?>