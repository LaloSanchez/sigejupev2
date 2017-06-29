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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposdeviviendas/TiposdeviviendasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposdeviviendas/TiposdeviviendasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposdeviviendasController {
private $proveedor;
public function __construct() {
}
public function validarTiposdeviviendas($TiposdeviviendasDto){
$TiposdeviviendasDto->setcveTipoDeVivienda(strtoupper(str_ireplace("'","",trim($TiposdeviviendasDto->getcveTipoDeVivienda()))));
$TiposdeviviendasDto->setdesTipoDeVivienda(strtoupper(str_ireplace("'","",trim($TiposdeviviendasDto->getdesTipoDeVivienda()))));
$TiposdeviviendasDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposdeviviendasDto->getactivo()))));
$TiposdeviviendasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposdeviviendasDto->getfechaRegistro()))));
$TiposdeviviendasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposdeviviendasDto->getfechaActualizacion()))));
return $TiposdeviviendasDto;
}
public function selectTiposdeviviendas($TiposdeviviendasDto,$proveedor=null){
$TiposdeviviendasDto=$this->validarTiposdeviviendas($TiposdeviviendasDto);
$TiposdeviviendasDao = new TiposdeviviendasDAO();
$TiposdeviviendasDto = $TiposdeviviendasDao->selectTiposdeviviendas($TiposdeviviendasDto,$proveedor);
return $TiposdeviviendasDto;
}
public function insertTiposdeviviendas($TiposdeviviendasDto,$proveedor=null){
$TiposdeviviendasDto=$this->validarTiposdeviviendas($TiposdeviviendasDto);
$TiposdeviviendasDao = new TiposdeviviendasDAO();
$TiposdeviviendasDto = $TiposdeviviendasDao->insertTiposdeviviendas($TiposdeviviendasDto,$proveedor);
return $TiposdeviviendasDto;
}
public function updateTiposdeviviendas($TiposdeviviendasDto,$proveedor=null){
$TiposdeviviendasDto=$this->validarTiposdeviviendas($TiposdeviviendasDto);
$TiposdeviviendasDao = new TiposdeviviendasDAO();
//$tmpDto = new TiposdeviviendasDTO();
//$tmpDto = $TiposdeviviendasDao->selectTiposdeviviendas($TiposdeviviendasDto,$proveedor);
//if($tmpDto!=""){//$TiposdeviviendasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposdeviviendasDto = $TiposdeviviendasDao->updateTiposdeviviendas($TiposdeviviendasDto,$proveedor);
return $TiposdeviviendasDto;
//}
//return "";
}
public function deleteTiposdeviviendas($TiposdeviviendasDto,$proveedor=null){
$TiposdeviviendasDto=$this->validarTiposdeviviendas($TiposdeviviendasDto);
$TiposdeviviendasDao = new TiposdeviviendasDAO();
$TiposdeviviendasDto = $TiposdeviviendasDao->deleteTiposdeviviendas($TiposdeviviendasDto,$proveedor);
return $TiposdeviviendasDto;
}
}
?>