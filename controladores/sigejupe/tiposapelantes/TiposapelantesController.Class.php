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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposapelantes/TiposapelantesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposapelantes/TiposapelantesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposapelantesController {
private $proveedor;
public function __construct() {
}
public function validarTiposapelantes($TiposapelantesDto){
$TiposapelantesDto->setcveTipoApelante(strtoupper(str_ireplace("'","",trim($TiposapelantesDto->getcveTipoApelante()))));
$TiposapelantesDto->setdesTipoApelante(strtoupper(str_ireplace("'","",trim($TiposapelantesDto->getdesTipoApelante()))));
$TiposapelantesDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposapelantesDto->getactivo()))));
$TiposapelantesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposapelantesDto->getfechaRegistro()))));
$TiposapelantesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposapelantesDto->getfechaActualizacion()))));
return $TiposapelantesDto;
}
public function selectTiposapelantes($TiposapelantesDto,$orden="",$proveedor=null){
$TiposapelantesDto=$this->validarTiposapelantes($TiposapelantesDto);
$TiposapelantesDao = new TiposapelantesDAO();
$TiposapelantesDto = $TiposapelantesDao->selectTiposapelantes($TiposapelantesDto,$orden,$proveedor);
return $TiposapelantesDto;
}
public function insertTiposapelantes($TiposapelantesDto,$proveedor=null){
$TiposapelantesDto=$this->validarTiposapelantes($TiposapelantesDto);
$TiposapelantesDao = new TiposapelantesDAO();
$TiposapelantesDto = $TiposapelantesDao->insertTiposapelantes($TiposapelantesDto,$proveedor);
return $TiposapelantesDto;
}
public function updateTiposapelantes($TiposapelantesDto,$proveedor=null){
$TiposapelantesDto=$this->validarTiposapelantes($TiposapelantesDto);
$TiposapelantesDao = new TiposapelantesDAO();
//$tmpDto = new TiposapelantesDTO();
//$tmpDto = $TiposapelantesDao->selectTiposapelantes($TiposapelantesDto,$proveedor);
//if($tmpDto!=""){//$TiposapelantesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposapelantesDto = $TiposapelantesDao->updateTiposapelantes($TiposapelantesDto,$proveedor);
return $TiposapelantesDto;
//}
//return "";
}
public function deleteTiposapelantes($TiposapelantesDto,$proveedor=null){
$TiposapelantesDto=$this->validarTiposapelantes($TiposapelantesDto);
$TiposapelantesDao = new TiposapelantesDAO();
$TiposapelantesDto = $TiposapelantesDao->deleteTiposapelantes($TiposapelantesDto,$proveedor);
return $TiposapelantesDto;
}
}
?>