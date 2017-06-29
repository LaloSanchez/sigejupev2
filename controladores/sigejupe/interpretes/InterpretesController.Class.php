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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/interpretes/InterpretesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/interpretes/InterpretesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class InterpretesController {
private $proveedor;
public function __construct() {
}
public function validarInterpretes($InterpretesDto){
$InterpretesDto->setcveInterprete(strtoupper(str_ireplace("'","",trim($InterpretesDto->getcveInterprete()))));
$InterpretesDto->setdesInterprete(strtoupper(str_ireplace("'","",trim($InterpretesDto->getdesInterprete()))));
$InterpretesDto->setactivo(strtoupper(str_ireplace("'","",trim($InterpretesDto->getactivo()))));
$InterpretesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($InterpretesDto->getfechaRegistro()))));
$InterpretesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($InterpretesDto->getfechaActualizacion()))));
return $InterpretesDto;
}
public function selectInterpretes($InterpretesDto,$proveedor=null){
$InterpretesDto=$this->validarInterpretes($InterpretesDto);
$InterpretesDao = new InterpretesDAO();
$InterpretesDto = $InterpretesDao->selectInterpretes($InterpretesDto,$proveedor);
return $InterpretesDto;
}
public function insertInterpretes($InterpretesDto,$proveedor=null){
$InterpretesDto=$this->validarInterpretes($InterpretesDto);
$InterpretesDao = new InterpretesDAO();
$InterpretesDto = $InterpretesDao->insertInterpretes($InterpretesDto,$proveedor);
return $InterpretesDto;
}
public function updateInterpretes($InterpretesDto,$proveedor=null){
$InterpretesDto=$this->validarInterpretes($InterpretesDto);
$InterpretesDao = new InterpretesDAO();
//$tmpDto = new InterpretesDTO();
//$tmpDto = $InterpretesDao->selectInterpretes($InterpretesDto,$proveedor);
//if($tmpDto!=""){//$InterpretesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$InterpretesDto = $InterpretesDao->updateInterpretes($InterpretesDto,$proveedor);
return $InterpretesDto;
//}
//return "";
}
public function deleteInterpretes($InterpretesDto,$proveedor=null){
$InterpretesDto=$this->validarInterpretes($InterpretesDto);
$InterpretesDao = new InterpretesDAO();
$InterpretesDto = $InterpretesDao->deleteInterpretes($InterpretesDto,$proveedor);
return $InterpretesDto;
}
}
?>