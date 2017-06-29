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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class GenerosController {
private $proveedor;
public function __construct() {
}
public function validarGeneros($GenerosDto){
$GenerosDto->setcveGenero(strtoupper(str_ireplace("'","",trim($GenerosDto->getcveGenero()))));
$GenerosDto->setdesGenero(strtoupper(str_ireplace("'","",trim($GenerosDto->getdesGenero()))));
$GenerosDto->setactivo(strtoupper(str_ireplace("'","",trim($GenerosDto->getactivo()))));
$GenerosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($GenerosDto->getfechaRegistro()))));
$GenerosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($GenerosDto->getfechaActualizacion()))));
return $GenerosDto;
}
public function selectGeneros($GenerosDto,$proveedor=null){
$GenerosDto=$this->validarGeneros($GenerosDto);
$GenerosDao = new GenerosDAO();
$GenerosDto = $GenerosDao->selectGeneros($GenerosDto,$proveedor);
return $GenerosDto;
}
public function insertGeneros($GenerosDto,$proveedor=null){
$GenerosDto=$this->validarGeneros($GenerosDto);
$GenerosDao = new GenerosDAO();
$GenerosDto = $GenerosDao->insertGeneros($GenerosDto,$proveedor);
return $GenerosDto;
}
public function updateGeneros($GenerosDto,$proveedor=null){
$GenerosDto=$this->validarGeneros($GenerosDto);
$GenerosDao = new GenerosDAO();
//$tmpDto = new GenerosDTO();
//$tmpDto = $GenerosDao->selectGeneros($GenerosDto,$proveedor);
//if($tmpDto!=""){//$GenerosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$GenerosDto = $GenerosDao->updateGeneros($GenerosDto,$proveedor);
return $GenerosDto;
//}
//return "";
}
public function deleteGeneros($GenerosDto,$proveedor=null){
$GenerosDto=$this->validarGeneros($GenerosDto);
$GenerosDao = new GenerosDAO();
$GenerosDto = $GenerosDao->deleteGeneros($GenerosDto,$proveedor);
return $GenerosDto;
}
}
?>