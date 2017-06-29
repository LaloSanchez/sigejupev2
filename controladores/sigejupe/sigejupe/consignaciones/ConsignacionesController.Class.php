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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/consignaciones/ConsignacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/consignaciones/ConsignacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ConsignacionesController {
private $proveedor;
public function __construct() {
}
public function validarConsignaciones($ConsignacionesDto){
$ConsignacionesDto->setcveConsignacion(strtoupper(str_ireplace("'","",trim($ConsignacionesDto->getcveConsignacion()))));
$ConsignacionesDto->setdesConsignacion(strtoupper(str_ireplace("'","",trim($ConsignacionesDto->getdesConsignacion()))));
$ConsignacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($ConsignacionesDto->getactivo()))));
$ConsignacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ConsignacionesDto->getfechaRegistro()))));
$ConsignacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ConsignacionesDto->getfechaActualizacion()))));
return $ConsignacionesDto;
}
public function selectConsignaciones($ConsignacionesDto,$proveedor=null){
$ConsignacionesDto=$this->validarConsignaciones($ConsignacionesDto);
$ConsignacionesDao = new ConsignacionesDAO();
$ConsignacionesDto = $ConsignacionesDao->selectConsignaciones($ConsignacionesDto,$proveedor);
return $ConsignacionesDto;
}
public function insertConsignaciones($ConsignacionesDto,$proveedor=null){
$ConsignacionesDto=$this->validarConsignaciones($ConsignacionesDto);
$ConsignacionesDao = new ConsignacionesDAO();
$ConsignacionesDto = $ConsignacionesDao->insertConsignaciones($ConsignacionesDto,$proveedor);
return $ConsignacionesDto;
}
public function updateConsignaciones($ConsignacionesDto,$proveedor=null){
$ConsignacionesDto=$this->validarConsignaciones($ConsignacionesDto);
$ConsignacionesDao = new ConsignacionesDAO();
//$tmpDto = new ConsignacionesDTO();
//$tmpDto = $ConsignacionesDao->selectConsignaciones($ConsignacionesDto,$proveedor);
//if($tmpDto!=""){//$ConsignacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ConsignacionesDto = $ConsignacionesDao->updateConsignaciones($ConsignacionesDto,$proveedor);
return $ConsignacionesDto;
//}
//return "";
}
public function deleteConsignaciones($ConsignacionesDto,$proveedor=null){
$ConsignacionesDto=$this->validarConsignaciones($ConsignacionesDto);
$ConsignacionesDao = new ConsignacionesDAO();
$ConsignacionesDto = $ConsignacionesDao->deleteConsignaciones($ConsignacionesDto,$proveedor);
return $ConsignacionesDto;
}
}
?>