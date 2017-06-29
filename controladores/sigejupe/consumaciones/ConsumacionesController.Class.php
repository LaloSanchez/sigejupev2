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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/consumaciones/ConsumacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/consumaciones/ConsumacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ConsumacionesController {
private $proveedor;
public function __construct() {
}
public function validarConsumaciones($ConsumacionesDto){
$ConsumacionesDto->setcveConsumacion(strtoupper(str_ireplace("'","",trim($ConsumacionesDto->getcveConsumacion()))));
$ConsumacionesDto->setdesConsumacion(strtoupper(str_ireplace("'","",trim($ConsumacionesDto->getdesConsumacion()))));
$ConsumacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($ConsumacionesDto->getactivo()))));
$ConsumacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ConsumacionesDto->getfechaRegistro()))));
$ConsumacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ConsumacionesDto->getfechaActualizacion()))));
return $ConsumacionesDto;
}
public function selectConsumaciones($ConsumacionesDto,$proveedor=null){
$ConsumacionesDto=$this->validarConsumaciones($ConsumacionesDto);
$ConsumacionesDao = new ConsumacionesDAO();
$ConsumacionesDto = $ConsumacionesDao->selectConsumaciones($ConsumacionesDto," ORDER BY desConsumacion ASC",$proveedor);
return $ConsumacionesDto;
}
public function insertConsumaciones($ConsumacionesDto,$proveedor=null){
$ConsumacionesDto=$this->validarConsumaciones($ConsumacionesDto);
$ConsumacionesDao = new ConsumacionesDAO();
$ConsumacionesDto = $ConsumacionesDao->insertConsumaciones($ConsumacionesDto,$proveedor);
return $ConsumacionesDto;
}
public function updateConsumaciones($ConsumacionesDto,$proveedor=null){
$ConsumacionesDto=$this->validarConsumaciones($ConsumacionesDto);
$ConsumacionesDao = new ConsumacionesDAO();
//$tmpDto = new ConsumacionesDTO();
//$tmpDto = $ConsumacionesDao->selectConsumaciones($ConsumacionesDto,$proveedor);
//if($tmpDto!=""){//$ConsumacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ConsumacionesDto = $ConsumacionesDao->updateConsumaciones($ConsumacionesDto,$proveedor);
return $ConsumacionesDto;
//}
//return "";
}
public function deleteConsumaciones($ConsumacionesDto,$proveedor=null){
$ConsumacionesDto=$this->validarConsumaciones($ConsumacionesDto);
$ConsumacionesDao = new ConsumacionesDAO();
$ConsumacionesDto = $ConsumacionesDao->deleteConsumaciones($ConsumacionesDto,$proveedor);
return $ConsumacionesDto;
}
}
?>