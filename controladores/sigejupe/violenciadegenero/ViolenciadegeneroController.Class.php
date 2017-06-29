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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/violenciadegenero/ViolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/violenciadegenero/ViolenciadegeneroDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ViolenciadegeneroController {
private $proveedor;
public function __construct() {
}
public function validarViolenciadegenero($ViolenciadegeneroDto){
$ViolenciadegeneroDto->setidViolenciaDeGenero(strtoupper(str_ireplace("'","",trim($ViolenciadegeneroDto->getidViolenciaDeGenero()))));
$ViolenciadegeneroDto->setcveEfecto(strtoupper(str_ireplace("'","",trim($ViolenciadegeneroDto->getcveEfecto()))));
$ViolenciadegeneroDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'","",trim($ViolenciadegeneroDto->getidImpOfeDelSolicitud()))));
$ViolenciadegeneroDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ViolenciadegeneroDto->getfechaRegistro()))));
$ViolenciadegeneroDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ViolenciadegeneroDto->getfechaActualizacion()))));
return $ViolenciadegeneroDto;
}
public function selectViolenciadegenero($ViolenciadegeneroDto,$proveedor=null){
$ViolenciadegeneroDto=$this->validarViolenciadegenero($ViolenciadegeneroDto);
$ViolenciadegeneroDao = new ViolenciadegeneroDAO();
$ViolenciadegeneroDto = $ViolenciadegeneroDao->selectViolenciadegenero($ViolenciadegeneroDto,$proveedor);
return $ViolenciadegeneroDto;
}
public function insertViolenciadegenero($ViolenciadegeneroDto,$proveedor=null){
$ViolenciadegeneroDto=$this->validarViolenciadegenero($ViolenciadegeneroDto);
$ViolenciadegeneroDao = new ViolenciadegeneroDAO();
$ViolenciadegeneroDto = $ViolenciadegeneroDao->insertViolenciadegenero($ViolenciadegeneroDto,$proveedor);
return $ViolenciadegeneroDto;
}
public function updateViolenciadegenero($ViolenciadegeneroDto,$proveedor=null){
$ViolenciadegeneroDto=$this->validarViolenciadegenero($ViolenciadegeneroDto);
$ViolenciadegeneroDao = new ViolenciadegeneroDAO();
//$tmpDto = new ViolenciadegeneroDTO();
//$tmpDto = $ViolenciadegeneroDao->selectViolenciadegenero($ViolenciadegeneroDto,$proveedor);
//if($tmpDto!=""){//$ViolenciadegeneroDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ViolenciadegeneroDto = $ViolenciadegeneroDao->updateViolenciadegenero($ViolenciadegeneroDto,$proveedor);
return $ViolenciadegeneroDto;
//}
//return "";
}
public function deleteViolenciadegenero($ViolenciadegeneroDto,$proveedor=null){
$ViolenciadegeneroDto=$this->validarViolenciadegenero($ViolenciadegeneroDto);
$ViolenciadegeneroDao = new ViolenciadegeneroDAO();
$ViolenciadegeneroDto = $ViolenciadegeneroDao->deleteViolenciadegenero($ViolenciadegeneroDto,$proveedor);
return $ViolenciadegeneroDto;
}
}
?>