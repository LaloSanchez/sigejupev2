<?php
/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 CONTROLLER
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/configuracionessalas/ConfiguracionessalasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/configuracionessalas/ConfiguracionessalasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ConfiguracionessalasController {
    private $proveedor;
    public function __construct() {
    }
    public function validarConfiguracionessalas($ConfiguracionessalasDto){
        $ConfiguracionessalasDto->setidConfiguracionSala(strtoupper(str_ireplace("'","",trim($ConfiguracionessalasDto->getidConfiguracionSala()))));
        $ConfiguracionessalasDto->setcveHorario(strtoupper(str_ireplace("'","",trim($ConfiguracionessalasDto->getcveHorario()))));
        $ConfiguracionessalasDto->setcveSala(strtoupper(str_ireplace("'","",trim($ConfiguracionessalasDto->getcveSala()))));
        $ConfiguracionessalasDto->setactivo(strtoupper(str_ireplace("'","",trim($ConfiguracionessalasDto->getactivo()))));
        $ConfiguracionessalasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ConfiguracionessalasDto->getfechaRegistro()))));
        $ConfiguracionessalasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ConfiguracionessalasDto->getfechaActualizacion()))));
        return $ConfiguracionessalasDto;
    }
    public function selectConfiguracionessalas($ConfiguracionessalasDto,$proveedor=null){
        $ConfiguracionessalasDto=$this->validarConfiguracionessalas($ConfiguracionessalasDto);
        $ConfiguracionessalasDao = new ConfiguracionessalasDAO();
        $ConfiguracionessalasDto = $ConfiguracionessalasDao->selectConfiguracionessalas($ConfiguracionessalasDto,$proveedor);
        return $ConfiguracionessalasDto;
    }
    //seleccionar salas por cveHorario
    public function selecSalasByHorario($ConfiguracionessalasDto,$proveedor=null){
        $ConfiguracionessalasDto=$this->validarConfiguracionessalas($ConfiguracionessalasDto);
        $ConfiguracionessalasDao = new ConfiguracionessalasDAO();
        $ConfiguracionessalasDto = $ConfiguracionessalasDao->selectSalasByHorario($ConfiguracionessalasDto,$proveedor);
        return $ConfiguracionessalasDto;
    }
    public function insertConfiguracionessalas($ConfiguracionessalasDto,$proveedor=null){
        $ConfiguracionessalasDto=$this->validarConfiguracionessalas($ConfiguracionessalasDto);
        $ConfiguracionessalasDao = new ConfiguracionessalasDAO();
        $ConfiguracionessalasDto = $ConfiguracionessalasDao->insertConfiguracionessalas($ConfiguracionessalasDto,$proveedor);
        return $ConfiguracionessalasDto;
    }
    public function updateConfiguracionessalas($ConfiguracionessalasDto,$proveedor=null){
        $ConfiguracionessalasDto=$this->validarConfiguracionessalas($ConfiguracionessalasDto);
        $ConfiguracionessalasDao = new ConfiguracionessalasDAO();
        //$tmpDto = new ConfiguracionessalasDTO();
        //$tmpDto = $ConfiguracionessalasDao->selectConfiguracionessalas($ConfiguracionessalasDto,$proveedor);
        //if($tmpDto!=""){//$ConfiguracionessalasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ConfiguracionessalasDto = $ConfiguracionessalasDao->updateConfiguracionessalas($ConfiguracionessalasDto,$proveedor);
        return $ConfiguracionessalasDto;
        //}
        //return "";
    }
    public function deleteConfiguracionessalas($ConfiguracionessalasDto,$proveedor=null){
        $ConfiguracionessalasDto=$this->validarConfiguracionessalas($ConfiguracionessalasDto);
        $ConfiguracionessalasDao = new ConfiguracionessalasDAO();
        $ConfiguracionessalasDto = $ConfiguracionessalasDao->deleteConfiguracionessalas($ConfiguracionessalasDto,$proveedor);
        return $ConfiguracionessalasDto;
    }
    //borrado logico de configuracion salas por cveHorario
    public function deleteLogicConfiguracionessalas($ConfiguracionessalasDto,$proveedor=null){
        $ConfiguracionessalasDto=$this->validarConfiguracionessalas($ConfiguracionessalasDto);
        $ConfiguracionessalasDao = new ConfiguracionessalasDAO();
        $ConfiguracionessalasDto = $ConfiguracionessalasDao->deleteLogicConfiguracionessalas($ConfiguracionessalasDto,$proveedor);
        return $ConfiguracionessalasDto;
    }
}
?>