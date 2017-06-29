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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposbeneficioses/TiposbeneficiosesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposbeneficioses/TiposbeneficiosesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class TiposbeneficiosesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTiposbeneficioses($TiposbeneficiosesDto) {
        $TiposbeneficiosesDto->setcveTipoBeneficioES(strtoupper(str_ireplace("'", "", trim($TiposbeneficiosesDto->getcveTipoBeneficioES()))));
        $TiposbeneficiosesDto->setdesTipoBeneficioES(strtoupper(str_ireplace("'", "", trim($TiposbeneficiosesDto->getdesTipoBeneficioES()))));
        $TiposbeneficiosesDto->setactivo(strtoupper(str_ireplace("'", "", trim($TiposbeneficiosesDto->getactivo()))));
        $TiposbeneficiosesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TiposbeneficiosesDto->getfechaRegistro()))));
        $TiposbeneficiosesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TiposbeneficiosesDto->getfechaActualizacion()))));
        return $TiposbeneficiosesDto;
    }

    public function selectTiposbeneficioses($TiposbeneficiosesDto, $proveedor = null) {
        $TiposbeneficiosesDto = $this->validarTiposbeneficioses($TiposbeneficiosesDto);
        $TiposbeneficiosesDao = new TiposbeneficiosesDAO();
        $TiposbeneficiosesDto = $TiposbeneficiosesDao->selectTiposbeneficioses($TiposbeneficiosesDto, $proveedor);
        return $TiposbeneficiosesDto;
    }

    public function insertTiposbeneficioses($TiposbeneficiosesDto, $proveedor = null) {
        $TiposbeneficiosesDto = $this->validarTiposbeneficioses($TiposbeneficiosesDto);
        $TiposbeneficiosesDao = new TiposbeneficiosesDAO();
        $TiposbeneficiosesDto = $TiposbeneficiosesDao->insertTiposbeneficioses($TiposbeneficiosesDto, $proveedor);
        return $TiposbeneficiosesDto;
    }

    public function updateTiposbeneficioses($TiposbeneficiosesDto, $proveedor = null) {
        $TiposbeneficiosesDto = $this->validarTiposbeneficioses($TiposbeneficiosesDto);
        $TiposbeneficiosesDao = new TiposbeneficiosesDAO();
//$tmpDto = new TiposbeneficiosesDTO();
//$tmpDto = $TiposbeneficiosesDao->selectTiposbeneficioses($TiposbeneficiosesDto,$proveedor);
//if($tmpDto!=""){//$TiposbeneficiosesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $TiposbeneficiosesDto = $TiposbeneficiosesDao->updateTiposbeneficioses($TiposbeneficiosesDto, $proveedor);
        return $TiposbeneficiosesDto;
//}
//return "";
    }

    public function deleteTiposbeneficioses($TiposbeneficiosesDto, $proveedor = null) {
        $TiposbeneficiosesDto = $this->validarTiposbeneficioses($TiposbeneficiosesDto);
        $TiposbeneficiosesDao = new TiposbeneficiosesDAO();
        $TiposbeneficiosesDto = $TiposbeneficiosesDao->deleteTiposbeneficioses($TiposbeneficiosesDto, $proveedor);
        return $TiposbeneficiosesDto;
    }

    public function selectTiposBeneficiosActivos($TiposbeneficiosesDto) {
        $tiposdeBeneficiosDto = new TiposbeneficiosesDTO();

        $tiposdeBeneficiosDto->setActivo("S");
        $beneficios = $this->selectTiposbeneficioses($tiposdeBeneficiosDto);

        $claveBeneficio = "";
        $descripcionBeneficio = "";
        
        $beneficiosTipos="";
        $beneficiosTipos=array();
        
        $beneficiosEnvia="";
        $beneficiosEnvia=array();
        foreach ($beneficios as $beneficio) {
            $claveBeneficio = $beneficio->getCveTipoBeneficioES();
            $descripcionBeneficio = $beneficio->getDesTipoBeneficioES();

            $beneficiosTipos = array("cveBeneficio" => $claveBeneficio,"desBeneficio"=>$descripcionBeneficio );
            array_push($beneficiosEnvia, $beneficiosTipos);
        }
        $respuesta=array("TotalCount"=>count($beneficiosEnvia),"datos"=>$beneficiosEnvia);
        return($respuesta);
    }

}

?>