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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposactuaciones/TiposactuacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposactuaciones/TiposactuacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposactuacionesController {
private $proveedor;
public function __construct() {
}
public function validarTiposactuaciones($TiposactuacionesDto){
$TiposactuacionesDto->setcveTipoActuacion(strtoupper(str_ireplace("'","",trim($TiposactuacionesDto->getcveTipoActuacion()))));
$TiposactuacionesDto->setdesTipoActuacion(strtoupper(str_ireplace("'","",trim($TiposactuacionesDto->getdesTipoActuacion()))));
$TiposactuacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposactuacionesDto->getactivo()))));
$TiposactuacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposactuacionesDto->getfechaRegistro()))));
$TiposactuacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposactuacionesDto->getfechaActualizacion()))));
return $TiposactuacionesDto;
}
public function selectTiposactuaciones($TiposactuacionesDto,$proveedor=null){
$TiposactuacionesDto=$this->validarTiposactuaciones($TiposactuacionesDto);
$TiposactuacionesDao = new TiposactuacionesDAO();
$TiposactuacionesDto = $TiposactuacionesDao->selectTiposactuaciones($TiposactuacionesDto,$proveedor);
return $TiposactuacionesDto;
}
public function insertTiposactuaciones($TiposactuacionesDto,$proveedor=null){
$TiposactuacionesDto=$this->validarTiposactuaciones($TiposactuacionesDto);
$TiposactuacionesDao = new TiposactuacionesDAO();
$TiposactuacionesDto = $TiposactuacionesDao->insertTiposactuaciones($TiposactuacionesDto,$proveedor);
return $TiposactuacionesDto;
}
public function updateTiposactuaciones($TiposactuacionesDto,$proveedor=null){
$TiposactuacionesDto=$this->validarTiposactuaciones($TiposactuacionesDto);
$TiposactuacionesDao = new TiposactuacionesDAO();
//$tmpDto = new TiposactuacionesDTO();
//$tmpDto = $TiposactuacionesDao->selectTiposactuaciones($TiposactuacionesDto,$proveedor);
//if($tmpDto!=""){//$TiposactuacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposactuacionesDto = $TiposactuacionesDao->updateTiposactuaciones($TiposactuacionesDto,$proveedor);
return $TiposactuacionesDto;
//}
//return "";
}
public function deleteTiposactuaciones($TiposactuacionesDto,$proveedor=null){
$TiposactuacionesDto=$this->validarTiposactuaciones($TiposactuacionesDto);
$TiposactuacionesDao = new TiposactuacionesDAO();
$TiposactuacionesDto = $TiposactuacionesDao->deleteTiposactuaciones($TiposactuacionesDto,$proveedor);
return $TiposactuacionesDto;
}
}
?>