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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/alfabetismo/AlfabetismoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/alfabetismo/AlfabetismoDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class AlfabetismoController {
private $proveedor;
public function __construct() {
}
public function validarAlfabetismo($AlfabetismoDto){
$AlfabetismoDto->setcveAlfabetismo(strtoupper(str_ireplace("'","",trim($AlfabetismoDto->getcveAlfabetismo()))));
$AlfabetismoDto->setdesAlfabetismo(strtoupper(str_ireplace("'","",trim($AlfabetismoDto->getdesAlfabetismo()))));
$AlfabetismoDto->setactivo(strtoupper(str_ireplace("'","",trim($AlfabetismoDto->getactivo()))));
$AlfabetismoDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($AlfabetismoDto->getfechaRegistro()))));
$AlfabetismoDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($AlfabetismoDto->getfechaActualizacion()))));
return $AlfabetismoDto;
}
public function selectAlfabetismo($AlfabetismoDto,$proveedor=null){
$AlfabetismoDto=$this->validarAlfabetismo($AlfabetismoDto);
$AlfabetismoDao = new AlfabetismoDAO();
$AlfabetismoDto = $AlfabetismoDao->selectAlfabetismo($AlfabetismoDto,$proveedor);
return $AlfabetismoDto;
}
public function insertAlfabetismo($AlfabetismoDto,$proveedor=null){
$AlfabetismoDto=$this->validarAlfabetismo($AlfabetismoDto);
$AlfabetismoDao = new AlfabetismoDAO();
$AlfabetismoDto = $AlfabetismoDao->insertAlfabetismo($AlfabetismoDto,$proveedor);
return $AlfabetismoDto;
}
public function updateAlfabetismo($AlfabetismoDto,$proveedor=null){
$AlfabetismoDto=$this->validarAlfabetismo($AlfabetismoDto);
$AlfabetismoDao = new AlfabetismoDAO();
//$tmpDto = new AlfabetismoDTO();
//$tmpDto = $AlfabetismoDao->selectAlfabetismo($AlfabetismoDto,$proveedor);
//if($tmpDto!=""){//$AlfabetismoDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$AlfabetismoDto = $AlfabetismoDao->updateAlfabetismo($AlfabetismoDto,$proveedor);
return $AlfabetismoDto;
//}
//return "";
}
public function deleteAlfabetismo($AlfabetismoDto,$proveedor=null){
$AlfabetismoDto=$this->validarAlfabetismo($AlfabetismoDto);
$AlfabetismoDao = new AlfabetismoDAO();
$AlfabetismoDto = $AlfabetismoDao->deleteAlfabetismo($AlfabetismoDto,$proveedor);
return $AlfabetismoDto;
}
}
?>