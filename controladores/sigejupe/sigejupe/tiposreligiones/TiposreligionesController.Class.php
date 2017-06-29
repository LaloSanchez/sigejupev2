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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposreligiones/TiposreligionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposreligiones/TiposreligionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposreligionesController {
private $proveedor;
public function __construct() {
}
public function validarTiposreligiones($TiposreligionesDto){
$TiposreligionesDto->setcveTipoReligion(strtoupper(str_ireplace("'","",trim($TiposreligionesDto->getcveTipoReligion()))));
$TiposreligionesDto->setdesTipoReligion(strtoupper(str_ireplace("'","",trim($TiposreligionesDto->getdesTipoReligion()))));
$TiposreligionesDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposreligionesDto->getactivo()))));
$TiposreligionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposreligionesDto->getfechaRegistro()))));
$TiposreligionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposreligionesDto->getfechaActualizacion()))));
return $TiposreligionesDto;
}
public function selectTiposreligiones($TiposreligionesDto,$proveedor=null){
$TiposreligionesDto=$this->validarTiposreligiones($TiposreligionesDto);
$TiposreligionesDao = new TiposreligionesDAO();
$TiposreligionesDto = $TiposreligionesDao->selectTiposreligiones($TiposreligionesDto,$proveedor);
return $TiposreligionesDto;
}
public function insertTiposreligiones($TiposreligionesDto,$proveedor=null){
$TiposreligionesDto=$this->validarTiposreligiones($TiposreligionesDto);
$TiposreligionesDao = new TiposreligionesDAO();
$TiposreligionesDto = $TiposreligionesDao->insertTiposreligiones($TiposreligionesDto,$proveedor);
return $TiposreligionesDto;
}
public function updateTiposreligiones($TiposreligionesDto,$proveedor=null){
$TiposreligionesDto=$this->validarTiposreligiones($TiposreligionesDto);
$TiposreligionesDao = new TiposreligionesDAO();
//$tmpDto = new TiposreligionesDTO();
//$tmpDto = $TiposreligionesDao->selectTiposreligiones($TiposreligionesDto,$proveedor);
//if($tmpDto!=""){//$TiposreligionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposreligionesDto = $TiposreligionesDao->updateTiposreligiones($TiposreligionesDto,$proveedor);
return $TiposreligionesDto;
//}
//return "";
}
public function deleteTiposreligiones($TiposreligionesDto,$proveedor=null){
$TiposreligionesDto=$this->validarTiposreligiones($TiposreligionesDto);
$TiposreligionesDao = new TiposreligionesDAO();
$TiposreligionesDto = $TiposreligionesDao->deleteTiposreligiones($TiposreligionesDto,$proveedor);
return $TiposreligionesDto;
}
}
?>