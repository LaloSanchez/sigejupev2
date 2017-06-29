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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class TiposcarpetasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarTiposcarpetas($TiposcarpetasDto) {
        $TiposcarpetasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($TiposcarpetasDto->getcveTipoCarpeta()))));
        $TiposcarpetasDto->setdesTipoCarpeta(strtoupper(str_ireplace("'", "", trim($TiposcarpetasDto->getdesTipoCarpeta()))));
        $TiposcarpetasDto->setactivo(strtoupper(str_ireplace("'", "", trim($TiposcarpetasDto->getactivo()))));
        $TiposcarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($TiposcarpetasDto->getfechaRegistro()))));
        $TiposcarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($TiposcarpetasDto->getfechaActualizacion()))));
        return $TiposcarpetasDto;
    }

    public function selectTiposcarpetas($TiposcarpetasDto, $proveedor = null) {
        $TiposcarpetasDto = $this->validarTiposcarpetas($TiposcarpetasDto);
        $TiposcarpetasDao = new TiposcarpetasDAO();
        $TiposcarpetasDto = $TiposcarpetasDao->selectTiposcarpetas($TiposcarpetasDto, $proveedor);
        return $TiposcarpetasDto;
    }

    public function insertTiposcarpetas($TiposcarpetasDto, $proveedor = null) {
        $TiposcarpetasDto = $this->validarTiposcarpetas($TiposcarpetasDto);
        $TiposcarpetasDao = new TiposcarpetasDAO();
        $TiposcarpetasDto = $TiposcarpetasDao->insertTiposcarpetas($TiposcarpetasDto, $proveedor);
        return $TiposcarpetasDto;
    }

    public function updateTiposcarpetas($TiposcarpetasDto, $proveedor = null) {
        $TiposcarpetasDto = $this->validarTiposcarpetas($TiposcarpetasDto);
        $TiposcarpetasDao = new TiposcarpetasDAO();
//$tmpDto = new TiposcarpetasDTO();
//$tmpDto = $TiposcarpetasDao->selectTiposcarpetas($TiposcarpetasDto,$proveedor);
//if($tmpDto!=""){//$TiposcarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $TiposcarpetasDto = $TiposcarpetasDao->updateTiposcarpetas($TiposcarpetasDto, $proveedor);
        return $TiposcarpetasDto;
//}
//return "";
    }

    public function deleteTiposcarpetas($TiposcarpetasDto, $proveedor = null) {
        $TiposcarpetasDto = $this->validarTiposcarpetas($TiposcarpetasDto);
        $TiposcarpetasDao = new TiposcarpetasDAO();
        $TiposcarpetasDto = $TiposcarpetasDao->deleteTiposcarpetas($TiposcarpetasDto, $proveedor);
        return $TiposcarpetasDto;
    }

    public function selectTiposCarpetasActivadas($tiposcarpetasDto, $proveedor = null) {
        $resultado = "";
        $respuesta = "";
        $registro = "";

        $resultado = array();
        $respuesta = array();
        $registro = array();

        $tiposcarpetasDto->setActivo("S");
        $tiposDeCarpetas = $this->selectTiposcarpetas($tiposcarpetasDto);
        $clave = "";
        $Descripcion = "";
        if ($tiposDeCarpetas != "") {
            foreach ($tiposDeCarpetas as $tipoCarpeta) {
                $clave = $tipoCarpeta->getcveTipoCarpeta();
                $Descripcion = $tipoCarpeta->getdesTipoCarpeta();

                $registro = array("clave" => $clave, "Descripcion" => $Descripcion);
                array_push($resultado, $registro);
            }
            $respuesta = array("totalCount" => count($resultado), "datos" => $resultado);
        }
        return $respuesta;
    }

    public function getTipoCarpeta() {
        $tiposCarpetasDto = new TiposcarpetasDTO();
        $tiposCarpetasDao = new TiposcarpetasDAO();

        $tiposCarpetasDto = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto, ' WHERE cveTipoCarpeta IN (8,2,7,1) ');
        $tmpA = array();
        $tmp = array();
        if ($tiposCarpetasDto != '') {
            foreach ($tiposCarpetasDto as $tc) {
                $tmpA[] = $tc->toString();
            }
            $tmp['type'] = 'OK';
            $tmp['data'] = $tmpA;
        } else {
            $tmp['type'] = 'Error';
            $tmp['type'] = 'No hay carpetas';
        }

        return $tmp;
    }

}

?>