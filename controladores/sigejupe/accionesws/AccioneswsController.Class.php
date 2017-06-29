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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/accionesws/AccioneswsDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/accionesws/AccioneswsDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class AccioneswsController {
private $proveedor;
public function __construct() {
}
public function validarAccionesws($AccioneswsDto){
$AccioneswsDto->setidAccionwa(strtoupper(str_ireplace("'","",trim($AccioneswsDto->getidAccionwa()))));
$AccioneswsDto->setdescAccionws(strtoupper(str_ireplace("'","",trim($AccioneswsDto->getdescAccionws()))));
$AccioneswsDto->setactivo(strtoupper(str_ireplace("'","",trim($AccioneswsDto->getactivo()))));
$AccioneswsDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($AccioneswsDto->getfechaRegistro()))));
return $AccioneswsDto;
}
public function selectAccionesws($AccioneswsDto,$proveedor=null){
$AccioneswsDto=$this->validarAccionesws($AccioneswsDto);
$AccioneswsDao = new AccioneswsDAO();
$AccioneswsDto = $AccioneswsDao->selectAccionesws($AccioneswsDto,$proveedor);
return $AccioneswsDto;
}
public function insertAccionesws($AccioneswsDto,$proveedor=null){
$AccioneswsDto=$this->validarAccionesws($AccioneswsDto);
$AccioneswsDao = new AccioneswsDAO();
$AccioneswsDto = $AccioneswsDao->insertAccionesws($AccioneswsDto,$proveedor);
return $AccioneswsDto;
}
public function updateAccionesws($AccioneswsDto,$proveedor=null){
$AccioneswsDto=$this->validarAccionesws($AccioneswsDto);
$AccioneswsDao = new AccioneswsDAO();
//$tmpDto = new AccioneswsDTO();
//$tmpDto = $AccioneswsDao->selectAccionesws($AccioneswsDto,$proveedor);
//if($tmpDto!=""){//$AccioneswsDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$AccioneswsDto = $AccioneswsDao->updateAccionesws($AccioneswsDto,$proveedor);
return $AccioneswsDto;
//}
//return "";
}
public function deleteAccionesws($AccioneswsDto,$proveedor=null){
$AccioneswsDto=$this->validarAccionesws($AccioneswsDto);
$AccioneswsDao = new AccioneswsDAO();
$AccioneswsDto = $AccioneswsDao->deleteAccionesws($AccioneswsDto,$proveedor);
return $AccioneswsDto;
}
}
?>