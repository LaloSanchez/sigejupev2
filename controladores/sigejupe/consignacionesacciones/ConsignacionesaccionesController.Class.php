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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/consignacionesacciones/ConsignacionesaccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/consignacionesacciones/ConsignacionesaccionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ConsignacionesaccionesController {
private $proveedor;
public function __construct() {
}
public function validarConsignacionesacciones($ConsignacionesaccionesDto){
$ConsignacionesaccionesDto->setcveConsignacionA(strtoupper(str_ireplace("'","",trim($ConsignacionesaccionesDto->getcveConsignacionA()))));
$ConsignacionesaccionesDto->setdesConsignacionA(strtoupper(str_ireplace("'","",trim($ConsignacionesaccionesDto->getdesConsignacionA()))));
$ConsignacionesaccionesDto->setactivo(strtoupper(str_ireplace("'","",trim($ConsignacionesaccionesDto->getactivo()))));
$ConsignacionesaccionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ConsignacionesaccionesDto->getfechaRegistro()))));
$ConsignacionesaccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ConsignacionesaccionesDto->getfechaActualizacion()))));
return $ConsignacionesaccionesDto;
}
public function selectConsignacionesacciones($ConsignacionesaccionesDto,$proveedor=null){
$ConsignacionesaccionesDto=$this->validarConsignacionesacciones($ConsignacionesaccionesDto);
$ConsignacionesaccionesDao = new ConsignacionesaccionesDAO();
$ConsignacionesaccionesDto = $ConsignacionesaccionesDao->selectConsignacionesacciones($ConsignacionesaccionesDto,$proveedor);
return $ConsignacionesaccionesDto;
}
public function insertConsignacionesacciones($ConsignacionesaccionesDto,$proveedor=null){
$ConsignacionesaccionesDto=$this->validarConsignacionesacciones($ConsignacionesaccionesDto);
$ConsignacionesaccionesDao = new ConsignacionesaccionesDAO();
$ConsignacionesaccionesDto = $ConsignacionesaccionesDao->insertConsignacionesacciones($ConsignacionesaccionesDto,$proveedor);
return $ConsignacionesaccionesDto;
}
public function updateConsignacionesacciones($ConsignacionesaccionesDto,$proveedor=null){
$ConsignacionesaccionesDto=$this->validarConsignacionesacciones($ConsignacionesaccionesDto);
$ConsignacionesaccionesDao = new ConsignacionesaccionesDAO();
//$tmpDto = new ConsignacionesaccionesDTO();
//$tmpDto = $ConsignacionesaccionesDao->selectConsignacionesacciones($ConsignacionesaccionesDto,$proveedor);
//if($tmpDto!=""){//$ConsignacionesaccionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ConsignacionesaccionesDto = $ConsignacionesaccionesDao->updateConsignacionesacciones($ConsignacionesaccionesDto,$proveedor);
return $ConsignacionesaccionesDto;
//}
//return "";
}
public function deleteConsignacionesacciones($ConsignacionesaccionesDto,$proveedor=null){
$ConsignacionesaccionesDto=$this->validarConsignacionesacciones($ConsignacionesaccionesDto);
$ConsignacionesaccionesDao = new ConsignacionesaccionesDAO();
$ConsignacionesaccionesDto = $ConsignacionesaccionesDao->deleteConsignacionesacciones($ConsignacionesaccionesDto,$proveedor);
return $ConsignacionesaccionesDto;
}
}
?>