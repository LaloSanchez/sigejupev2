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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposdetenciones/TiposdetencionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposdetenciones/TiposdetencionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposdetencionesController {
private $proveedor;
public function __construct() {
}
public function validarTiposdetenciones($TiposdetencionesDto){
$TiposdetencionesDto->setcveTipoDetencion(strtoupper(str_ireplace("'","",trim($TiposdetencionesDto->getcveTipoDetencion()))));
$TiposdetencionesDto->setdesTipoDetencion(strtoupper(str_ireplace("'","",trim($TiposdetencionesDto->getdesTipoDetencion()))));
$TiposdetencionesDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposdetencionesDto->getactivo()))));
$TiposdetencionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposdetencionesDto->getfechaRegistro()))));
$TiposdetencionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposdetencionesDto->getfechaActualizacion()))));
return $TiposdetencionesDto;
}
public function selectTiposdetenciones($TiposdetencionesDto,$proveedor=null){
$TiposdetencionesDto=$this->validarTiposdetenciones($TiposdetencionesDto);
$TiposdetencionesDao = new TiposdetencionesDAO();
$TiposdetencionesDto = $TiposdetencionesDao->selectTiposdetenciones($TiposdetencionesDto,$proveedor);
return $TiposdetencionesDto;
}
public function insertTiposdetenciones($TiposdetencionesDto,$proveedor=null){
$TiposdetencionesDto=$this->validarTiposdetenciones($TiposdetencionesDto);
$TiposdetencionesDao = new TiposdetencionesDAO();
$TiposdetencionesDto = $TiposdetencionesDao->insertTiposdetenciones($TiposdetencionesDto,$proveedor);
return $TiposdetencionesDto;
}
public function updateTiposdetenciones($TiposdetencionesDto,$proveedor=null){
$TiposdetencionesDto=$this->validarTiposdetenciones($TiposdetencionesDto);
$TiposdetencionesDao = new TiposdetencionesDAO();
//$tmpDto = new TiposdetencionesDTO();
//$tmpDto = $TiposdetencionesDao->selectTiposdetenciones($TiposdetencionesDto,$proveedor);
//if($tmpDto!=""){//$TiposdetencionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposdetencionesDto = $TiposdetencionesDao->updateTiposdetenciones($TiposdetencionesDto,$proveedor);
return $TiposdetencionesDto;
//}
//return "";
}
public function deleteTiposdetenciones($TiposdetencionesDto,$proveedor=null){
$TiposdetencionesDto=$this->validarTiposdetenciones($TiposdetencionesDto);
$TiposdetencionesDao = new TiposdetencionesDAO();
$TiposdetencionesDto = $TiposdetencionesDao->deleteTiposdetenciones($TiposdetencionesDto,$proveedor);
return $TiposdetencionesDto;
}
}
?>