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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/terminos/TerminosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/terminos/TerminosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class TerminosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTerminos($TerminosDto) {
        $TerminosDto->setIdTermino(strtoupper(str_ireplace("'", "", trim($TerminosDto->getIdTermino()))));
        $TerminosDto->setTexto(strtoupper(str_ireplace("'", "", trim($TerminosDto->getTexto()))));
        $TerminosDto->setActivo(strtoupper(str_ireplace("'", "", trim($TerminosDto->getActivo()))));
        $TerminosDto->setCveTipoTermino(strtoupper(str_ireplace("'", "", trim($TerminosDto->getCveTipoTermino()))));
        
        return $TerminosDto;
    }

    public function selectTerminos($TerminosDto, $proveedor = null) {
        $TerminosDto = $this->validarTerminos($TerminosDto);
        $TerminosDao = new TerminosDAO();
        $TerminosDto = $TerminosDao->selectTerminos($TerminosDto, $proveedor);
        return $TerminosDto;
    }

}

?>