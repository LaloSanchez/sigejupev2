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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/imputadoscateos/ImputadoscateosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/imputadoscateos/ImputadoscateosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ImputadoscateosController {
private $proveedor;
public function __construct() {
}
public function validarImputadoscateos($ImputadoscateosDto){
$ImputadoscateosDto->setidImputadoCateo(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getidImputadoCateo()))));
$ImputadoscateosDto->setidSolicitudCateo(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getidSolicitudCateo()))));
$ImputadoscateosDto->setactivo(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getactivo()))));
$ImputadoscateosDto->setnombre(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getnombre()))));
$ImputadoscateosDto->setpaterno(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getpaterno()))));
$ImputadoscateosDto->setmaterno(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getmaterno()))));
$ImputadoscateosDto->setalias(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getalias()))));
$ImputadoscateosDto->setcveGenero(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getcveGenero()))));
$ImputadoscateosDto->setdetenido(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getdetenido()))));
$ImputadoscateosDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getcveTipoPersona()))));
$ImputadoscateosDto->setnombreMoral(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getnombreMoral()))));
$ImputadoscateosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getfechaRegistro()))));
$ImputadoscateosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ImputadoscateosDto->getfechaActualizacion()))));
return $ImputadoscateosDto;
}
public function selectImputadoscateos($ImputadoscateosDto,$proveedor=null){
$ImputadoscateosDto=$this->validarImputadoscateos($ImputadoscateosDto);
$ImputadoscateosDao = new ImputadoscateosDAO();
$ImputadoscateosDto = $ImputadoscateosDao->selectImputadoscateos($ImputadoscateosDto,$proveedor);
return $ImputadoscateosDto;
}
public function insertImputadoscateos($ImputadoscateosDto,$proveedor=null){
$ImputadoscateosDto=$this->validarImputadoscateos($ImputadoscateosDto);
$ImputadoscateosDao = new ImputadoscateosDAO();
$ImputadoscateosDto = $ImputadoscateosDao->insertImputadoscateos($ImputadoscateosDto,$proveedor);
return $ImputadoscateosDto;
}
public function updateImputadoscateos($ImputadoscateosDto,$proveedor=null){
$ImputadoscateosDto=$this->validarImputadoscateos($ImputadoscateosDto);
$ImputadoscateosDao = new ImputadoscateosDAO();
//$tmpDto = new ImputadoscateosDTO();
//$tmpDto = $ImputadoscateosDao->selectImputadoscateos($ImputadoscateosDto,$proveedor);
//if($tmpDto!=""){//$ImputadoscateosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ImputadoscateosDto = $ImputadoscateosDao->updateImputadoscateos($ImputadoscateosDto,$proveedor);
return $ImputadoscateosDto;
//}
//return "";
}
public function deleteImputadoscateos($ImputadoscateosDto,$proveedor=null){
$ImputadoscateosDto=$this->validarImputadoscateos($ImputadoscateosDto);
$ImputadoscateosDao = new ImputadoscateosDAO();
$ImputadoscateosDto = $ImputadoscateosDao->deleteImputadoscateos($ImputadoscateosDto,$proveedor);
return $ImputadoscateosDto;
}
}
?>