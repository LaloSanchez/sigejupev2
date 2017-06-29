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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ofendidoscateos/OfendidoscateosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ofendidoscateos/OfendidoscateosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class OfendidoscateosController {
private $proveedor;
public function __construct() {
}
public function validarOfendidoscateos($OfendidoscateosDto){
$OfendidoscateosDto->setidOfendidoCateo(strtoupper(str_ireplace("'","",trim($OfendidoscateosDto->getidOfendidoCateo()))));
$OfendidoscateosDto->setidSolicitudCateo(strtoupper(str_ireplace("'","",trim($OfendidoscateosDto->getidSolicitudCateo()))));
$OfendidoscateosDto->setactivo(strtoupper(str_ireplace("'","",trim($OfendidoscateosDto->getactivo()))));
$OfendidoscateosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($OfendidoscateosDto->getfechaRegistro()))));
$OfendidoscateosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($OfendidoscateosDto->getfechaActualizacion()))));
$OfendidoscateosDto->setnombre(strtoupper(str_ireplace("'","",trim($OfendidoscateosDto->getnombre()))));
$OfendidoscateosDto->setpaterno(strtoupper(str_ireplace("'","",trim($OfendidoscateosDto->getpaterno()))));
$OfendidoscateosDto->setmaterno(strtoupper(str_ireplace("'","",trim($OfendidoscateosDto->getmaterno()))));
$OfendidoscateosDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim($OfendidoscateosDto->getcveTipoPersona()))));
$OfendidoscateosDto->setnombreMoral(strtoupper(str_ireplace("'","",trim($OfendidoscateosDto->getnombreMoral()))));
$OfendidoscateosDto->setcveGenero(strtoupper(str_ireplace("'","",trim($OfendidoscateosDto->getcveGenero()))));
return $OfendidoscateosDto;
}
public function selectOfendidoscateos($OfendidoscateosDto,$proveedor=null){
$OfendidoscateosDto=$this->validarOfendidoscateos($OfendidoscateosDto);
$OfendidoscateosDao = new OfendidoscateosDAO();
$OfendidoscateosDto = $OfendidoscateosDao->selectOfendidoscateos($OfendidoscateosDto,$proveedor);
return $OfendidoscateosDto;
}
public function insertOfendidoscateos($OfendidoscateosDto,$proveedor=null){
$OfendidoscateosDto=$this->validarOfendidoscateos($OfendidoscateosDto);
$OfendidoscateosDao = new OfendidoscateosDAO();
$OfendidoscateosDto = $OfendidoscateosDao->insertOfendidoscateos($OfendidoscateosDto,$proveedor);
return $OfendidoscateosDto;
}
public function updateOfendidoscateos($OfendidoscateosDto,$proveedor=null){
$OfendidoscateosDto=$this->validarOfendidoscateos($OfendidoscateosDto);
$OfendidoscateosDao = new OfendidoscateosDAO();
//$tmpDto = new OfendidoscateosDTO();
//$tmpDto = $OfendidoscateosDao->selectOfendidoscateos($OfendidoscateosDto,$proveedor);
//if($tmpDto!=""){//$OfendidoscateosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$OfendidoscateosDto = $OfendidoscateosDao->updateOfendidoscateos($OfendidoscateosDto,$proveedor);
return $OfendidoscateosDto;
//}
//return "";
}
public function deleteOfendidoscateos($OfendidoscateosDto,$proveedor=null){
$OfendidoscateosDto=$this->validarOfendidoscateos($OfendidoscateosDto);
$OfendidoscateosDao = new OfendidoscateosDAO();
$OfendidoscateosDto = $OfendidoscateosDao->deleteOfendidoscateos($OfendidoscateosDto,$proveedor);
return $OfendidoscateosDto;
}
}
?>