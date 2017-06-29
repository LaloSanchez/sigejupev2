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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitoscateos/DelitoscateosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/delitoscateos/DelitoscateosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DelitoscateosController {
private $proveedor;
public function __construct() {
}
public function validarDelitoscateos($DelitoscateosDto){
$DelitoscateosDto->setidDelitoCateo(strtoupper(str_ireplace("'","",trim($DelitoscateosDto->getidDelitoCateo()))));
$DelitoscateosDto->setidSolicitudCateo(strtoupper(str_ireplace("'","",trim($DelitoscateosDto->getidSolicitudCateo()))));
$DelitoscateosDto->setcveDelito(strtoupper(str_ireplace("'","",trim($DelitoscateosDto->getcveDelito()))));
$DelitoscateosDto->setactivo(strtoupper(str_ireplace("'","",trim($DelitoscateosDto->getactivo()))));
$DelitoscateosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DelitoscateosDto->getfechaRegistro()))));
$DelitoscateosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DelitoscateosDto->getfechaActualizacion()))));
return $DelitoscateosDto;
}
public function selectDelitoscateos($DelitoscateosDto,$proveedor=null){
$DelitoscateosDto=$this->validarDelitoscateos($DelitoscateosDto);
$DelitoscateosDao = new DelitoscateosDAO();
$DelitoscateosDto = $DelitoscateosDao->selectDelitoscateos($DelitoscateosDto,$proveedor);
return $DelitoscateosDto;
}
public function insertDelitoscateos($DelitoscateosDto,$proveedor=null){
$DelitoscateosDto=$this->validarDelitoscateos($DelitoscateosDto);
$DelitoscateosDao = new DelitoscateosDAO();
$DelitoscateosDto = $DelitoscateosDao->insertDelitoscateos($DelitoscateosDto,$proveedor);
return $DelitoscateosDto;
}
public function updateDelitoscateos($DelitoscateosDto,$proveedor=null){
$DelitoscateosDto=$this->validarDelitoscateos($DelitoscateosDto);
$DelitoscateosDao = new DelitoscateosDAO();
//$tmpDto = new DelitoscateosDTO();
//$tmpDto = $DelitoscateosDao->selectDelitoscateos($DelitoscateosDto,$proveedor);
//if($tmpDto!=""){//$DelitoscateosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DelitoscateosDto = $DelitoscateosDao->updateDelitoscateos($DelitoscateosDto,$proveedor);
return $DelitoscateosDto;
//}
//return "";
}
public function deleteDelitoscateos($DelitoscateosDto,$proveedor=null){
$DelitoscateosDto=$this->validarDelitoscateos($DelitoscateosDto);
$DelitoscateosDao = new DelitoscateosDAO();
$DelitoscateosDto = $DelitoscateosDao->deleteDelitoscateos($DelitoscateosDto,$proveedor);
return $DelitoscateosDto;
}
}
?>