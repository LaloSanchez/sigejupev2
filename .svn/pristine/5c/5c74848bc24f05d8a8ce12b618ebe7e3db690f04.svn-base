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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/trasportaciones/TrasportacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/trasportaciones/TrasportacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TrasportacionesController {
private $proveedor;
public function __construct() {
}
public function validarTrasportaciones($TrasportacionesDto){
$TrasportacionesDto->setcveTrasportacion(strtoupper(str_ireplace("'","",trim($TrasportacionesDto->getcveTrasportacion()))));
$TrasportacionesDto->setdesTrasportacion(strtoupper(str_ireplace("'","",trim($TrasportacionesDto->getdesTrasportacion()))));
$TrasportacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($TrasportacionesDto->getactivo()))));
$TrasportacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TrasportacionesDto->getfechaRegistro()))));
$TrasportacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TrasportacionesDto->getfechaActualizacion()))));
return $TrasportacionesDto;
}
public function selectTrasportaciones($TrasportacionesDto,$proveedor=null){
$TrasportacionesDto=$this->validarTrasportaciones($TrasportacionesDto);
$TrasportacionesDao = new TrasportacionesDAO();
$TrasportacionesDto = $TrasportacionesDao->selectTrasportaciones($TrasportacionesDto,$proveedor);
return $TrasportacionesDto;
}
public function insertTrasportaciones($TrasportacionesDto,$proveedor=null){
$TrasportacionesDto=$this->validarTrasportaciones($TrasportacionesDto);
$TrasportacionesDao = new TrasportacionesDAO();
$TrasportacionesDto = $TrasportacionesDao->insertTrasportaciones($TrasportacionesDto,$proveedor);
return $TrasportacionesDto;
}
public function updateTrasportaciones($TrasportacionesDto,$proveedor=null){
$TrasportacionesDto=$this->validarTrasportaciones($TrasportacionesDto);
$TrasportacionesDao = new TrasportacionesDAO();
//$tmpDto = new TrasportacionesDTO();
//$tmpDto = $TrasportacionesDao->selectTrasportaciones($TrasportacionesDto,$proveedor);
//if($tmpDto!=""){//$TrasportacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TrasportacionesDto = $TrasportacionesDao->updateTrasportaciones($TrasportacionesDto,$proveedor);
return $TrasportacionesDto;
//}
//return "";
}
public function deleteTrasportaciones($TrasportacionesDto,$proveedor=null){
$TrasportacionesDto=$this->validarTrasportaciones($TrasportacionesDto);
$TrasportacionesDao = new TrasportacionesDAO();
$TrasportacionesDto = $TrasportacionesDao->deleteTrasportaciones($TrasportacionesDto,$proveedor);
return $TrasportacionesDto;
}
}
?>