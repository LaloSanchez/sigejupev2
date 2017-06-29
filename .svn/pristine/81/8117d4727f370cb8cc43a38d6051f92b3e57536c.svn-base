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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/dialectoindigena/DialectoindigenaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/dialectoindigena/DialectoindigenaDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DialectoindigenaController {
private $proveedor;
public function __construct() {
}
public function validarDialectoindigena($DialectoindigenaDto){
$DialectoindigenaDto->setcveDialectoIndigena(strtoupper(str_ireplace("'","",trim($DialectoindigenaDto->getcveDialectoIndigena()))));
$DialectoindigenaDto->setdesDialectoIndigena(strtoupper(str_ireplace("'","",trim($DialectoindigenaDto->getdesDialectoIndigena()))));
$DialectoindigenaDto->setactivo(strtoupper(str_ireplace("'","",trim($DialectoindigenaDto->getactivo()))));
$DialectoindigenaDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DialectoindigenaDto->getfechaRegistro()))));
$DialectoindigenaDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DialectoindigenaDto->getfechaActualizacion()))));
return $DialectoindigenaDto;
}
public function selectDialectoindigena($DialectoindigenaDto,$proveedor=null){
$DialectoindigenaDto=$this->validarDialectoindigena($DialectoindigenaDto);
$DialectoindigenaDao = new DialectoindigenaDAO();
$DialectoindigenaDto = $DialectoindigenaDao->selectDialectoindigena($DialectoindigenaDto,$proveedor);
return $DialectoindigenaDto;
}
public function insertDialectoindigena($DialectoindigenaDto,$proveedor=null){
$DialectoindigenaDto=$this->validarDialectoindigena($DialectoindigenaDto);
$DialectoindigenaDao = new DialectoindigenaDAO();
$DialectoindigenaDto = $DialectoindigenaDao->insertDialectoindigena($DialectoindigenaDto,$proveedor);
return $DialectoindigenaDto;
}
public function updateDialectoindigena($DialectoindigenaDto,$proveedor=null){
$DialectoindigenaDto=$this->validarDialectoindigena($DialectoindigenaDto);
$DialectoindigenaDao = new DialectoindigenaDAO();
//$tmpDto = new DialectoindigenaDTO();
//$tmpDto = $DialectoindigenaDao->selectDialectoindigena($DialectoindigenaDto,$proveedor);
//if($tmpDto!=""){//$DialectoindigenaDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DialectoindigenaDto = $DialectoindigenaDao->updateDialectoindigena($DialectoindigenaDto,$proveedor);
return $DialectoindigenaDto;
//}
//return "";
}
public function deleteDialectoindigena($DialectoindigenaDto,$proveedor=null){
$DialectoindigenaDto=$this->validarDialectoindigena($DialectoindigenaDto);
$DialectoindigenaDao = new DialectoindigenaDAO();
$DialectoindigenaDto = $DialectoindigenaDao->deleteDialectoindigena($DialectoindigenaDto,$proveedor);
return $DialectoindigenaDto;
}
}
?>