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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/controlcargas/ControlcargasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/controlcargas/ControlcargasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresjuzgados/JuzgadoresjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresjuzgados/JuzgadoresjuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescarpetas/JuzgadorescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadorescarpetas/JuzgadorescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/meses/MesesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/meses/MesesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/funcionesjuzgadores/FuncionesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/funcionesjuzgadores/FuncionesjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class ControlcargasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarControlcargas($ControlcargasDto) {
        $ControlcargasDto->setidControlCarga(strtoupper(str_ireplace("'", "", trim($ControlcargasDto->getidControlCarga()))));
        $ControlcargasDto->setanioCarga(strtoupper(str_ireplace("'", "", trim($ControlcargasDto->getanioCarga()))));
        $ControlcargasDto->setcveMes(strtoupper(str_ireplace("'", "", trim($ControlcargasDto->getcveMes()))));
        $ControlcargasDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($ControlcargasDto->getcveJuzgado()))));
        $ControlcargasDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim($ControlcargasDto->getidJuzgador()))));
        $ControlcargasDto->setcveFuncionJuzgador(strtoupper(str_ireplace("'", "", trim($ControlcargasDto->getcveFuncionJuzgador()))));
        $ControlcargasDto->settotalPuntaje(strtoupper(str_ireplace("'", "", trim($ControlcargasDto->gettotalPuntaje()))));
        $ControlcargasDto->settotalAsignado(strtoupper(str_ireplace("'", "", trim($ControlcargasDto->gettotalAsignado()))));
        $ControlcargasDto->setcontrol(strtoupper(str_ireplace("'", "", trim($ControlcargasDto->getcontrol()))));
        $ControlcargasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($ControlcargasDto->getfechaRegistro()))));
        $ControlcargasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($ControlcargasDto->getfechaActualizacion()))));
        return $ControlcargasDto;
    }

    public function selectControlcargas($ControlcargasDto, $proveedor = null) {
        $ControlcargasDto = $this->validarControlcargas($ControlcargasDto);
        $ControlcargasDao = new ControlcargasDAO();
        $ControlcargasDto = $ControlcargasDao->selectControlcargas($ControlcargasDto, $proveedor);
        return $ControlcargasDto;
    }

    public function insertControlcargas($ControlcargasDto, $proveedor = null) {
        $ControlcargasDto = $this->validarControlcargas($ControlcargasDto);
        $ControlcargasDao = new ControlcargasDAO();
        $ControlcargasDto = $ControlcargasDao->insertControlcargas($ControlcargasDto, $proveedor);
        return $ControlcargasDto;
    }

    public function updateControlcargas($ControlcargasDto, $proveedor = null) {
        $ControlcargasDto = $this->validarControlcargas($ControlcargasDto);
        $ControlcargasDao = new ControlcargasDAO();
        $ControlcargasDto = $ControlcargasDao->updateControlcargas($ControlcargasDto, $proveedor);
        return $ControlcargasDto;
    }

    public function obtenerJuzgador($proveedor) {
        $error = false;
        
        $juzgadoresArray = array();
        
        if ($proveedor == null) {
            $this->proveedor = new Proveedor('mysql', 'sigejupe');
            $this->proveedor->connect();
            $this->proveedor->execute("BEGIN");
        } else {
            $this->proveedor = $proveedor;
        }

        $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
        $juzgadoresjuzgadosDto->setCveJuzgado(762);
        $juzgadoresjuzgadosDto->setActivo("S");
        
        
        $juzgadoresjuzgadosDao = new JuzgadoresjuzgadosDAO();
        $juzgadoresjuzgadosDto = $juzgadoresjuzgadosDao->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto, "", $this->proveedor);
        
        if($juzgadoresjuzgadosDto){
           var_dump($juzgadoresjuzgadosDto); 
        }else{
            
        }
        

        if ($proveedor == null) {
            $this->proveedor->close();
        }
    }

    public function deleteControlcargas($ControlcargasDto, $proveedor = null) {
        $ControlcargasDto = $this->validarControlcargas($ControlcargasDto);
        $ControlcargasDao = new ControlcargasDAO();
        $ControlcargasDto = $ControlcargasDao->deleteControlcargas($ControlcargasDto, $proveedor);
        return $ControlcargasDto;
    }

}

$proveedor = new Proveedor('mysql', 'sigejupe');
$proveedor->connect();
$proveedor->execute("BEGIN");

$controlcargasController = new ControlcargasController();
$controlcargasController->obtenerJuzgador($proveedor);

$proveedor->execute("COMMIT");
?>