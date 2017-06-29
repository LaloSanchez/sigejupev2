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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/configuracionesjuzgadores/ConfiguracionesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/configuracionesjuzgadores/ConfiguracionesjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ConfiguracionesjuzgadoresController {
    private $proveedor;
    public function __construct() {
    }
    public function validarConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto){
        $ConfiguracionesjuzgadoresDto->setidConfiguracionJuzgador(strtoupper(str_ireplace("'","",trim($ConfiguracionesjuzgadoresDto->getidConfiguracionJuzgador()))));
        $ConfiguracionesjuzgadoresDto->setIdHorarioJuzgador(strtoupper(str_ireplace("'","",trim($ConfiguracionesjuzgadoresDto->getIdHorarioJuzgador()))));
        $ConfiguracionesjuzgadoresDto->setIdJuzgador(strtoupper(str_ireplace("'","",trim($ConfiguracionesjuzgadoresDto->getIdJuzgador()))));
        $ConfiguracionesjuzgadoresDto->setactivo(strtoupper(str_ireplace("'","",trim($ConfiguracionesjuzgadoresDto->getactivo()))));
        $ConfiguracionesjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ConfiguracionesjuzgadoresDto->getfechaRegistro()))));
        $ConfiguracionesjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ConfiguracionesjuzgadoresDto->getfechaActualizacion()))));
        return $ConfiguracionesjuzgadoresDto;
    }
    public function selectConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto,$proveedor=null){
        $ConfiguracionesjuzgadoresDto=$this->validarConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        $ConfiguracionesjuzgadoresDao = new ConfiguracionesjuzgadoresDAO();
        $ConfiguracionesjuzgadoresDto = $ConfiguracionesjuzgadoresDao->selectConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto,$proveedor);
        return $ConfiguracionesjuzgadoresDto;
    }
    public function insertConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto,$proveedor=null){
        $ConfiguracionesjuzgadoresDto=$this->validarConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        $ConfiguracionesjuzgadoresDao = new ConfiguracionesjuzgadoresDAO();
        $ConfiguracionesjuzgadoresDto = $ConfiguracionesjuzgadoresDao->insertConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto,$proveedor);
        return $ConfiguracionesjuzgadoresDto;
    }
    public function updateConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto,$proveedor=null){
        $ConfiguracionesjuzgadoresDto=$this->validarConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        $ConfiguracionesjuzgadoresDao = new ConfiguracionesjuzgadoresDAO();
        //$tmpDto = new ConfiguracionesjuzgadoresDTO();
        //$tmpDto = $ConfiguracionesjuzgadoresDao->selectConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto,$proveedor);
        //if($tmpDto!=""){//$ConfiguracionesjuzgadoresDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $ConfiguracionesjuzgadoresDto = $ConfiguracionesjuzgadoresDao->updateConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto,$proveedor);
        return $ConfiguracionesjuzgadoresDto;
        //}
        //return "";
    }
    public function deleteConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto,$proveedor=null){
        $ConfiguracionesjuzgadoresDto=$this->validarConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        $ConfiguracionesjuzgadoresDao = new ConfiguracionesjuzgadoresDAO();
        $ConfiguracionesjuzgadoresDto = $ConfiguracionesjuzgadoresDao->deleteConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto,$proveedor);
        return $ConfiguracionesjuzgadoresDto;
    }
    //borrado logico de configuracion juzgadores por id de horario
    public function deleteLogicConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto,$proveedor=null){
        $ConfiguracionesjuzgadoresDto=$this->validarConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        $ConfiguracionesjuzgadoresDao = new ConfiguracionesjuzgadoresDAO();
        $ConfiguracionesjuzgadoresDto = $ConfiguracionesjuzgadoresDao->deleteLogicConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto,$proveedor);
        return $ConfiguracionesjuzgadoresDto;
    }
}
?>