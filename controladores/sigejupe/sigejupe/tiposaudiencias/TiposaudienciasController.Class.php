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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposaudiencias/TiposaudienciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposaudiencias/TiposaudienciasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposaudienciasController {
private $proveedor;
public function __construct() {
}
public function validarTiposaudiencias($TiposaudienciasDto){
$TiposaudienciasDto->setcveTipoAudiencia(strtoupper(str_ireplace("'","",trim($TiposaudienciasDto->getcveTipoAudiencia()))));
$TiposaudienciasDto->setdesTipoAudiencia(strtoupper(str_ireplace("'","",trim($TiposaudienciasDto->getdesTipoAudiencia()))));
$TiposaudienciasDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposaudienciasDto->getactivo()))));
$TiposaudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposaudienciasDto->getfechaRegistro()))));
$TiposaudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposaudienciasDto->getfechaActualizacion()))));
return $TiposaudienciasDto;
}
public function selectTiposaudiencias($TiposaudienciasDto,$proveedor=null){
$TiposaudienciasDto=$this->validarTiposaudiencias($TiposaudienciasDto);
$TiposaudienciasDao = new TiposaudienciasDAO();
$orden="ORDER BY desTipoAudiencia ASC";
$TiposaudienciasDto = $TiposaudienciasDao->selectTiposaudiencias($TiposaudienciasDto,$orden,$proveedor);
return $TiposaudienciasDto;
}
public function insertTiposaudiencias($TiposaudienciasDto,$proveedor=null){
$TiposaudienciasDto=$this->validarTiposaudiencias($TiposaudienciasDto);
$TiposaudienciasDao = new TiposaudienciasDAO();
$TiposaudienciasDto = $TiposaudienciasDao->insertTiposaudiencias($TiposaudienciasDto,$proveedor);
return $TiposaudienciasDto;
}
public function updateTiposaudiencias($TiposaudienciasDto,$proveedor=null){
$TiposaudienciasDto=$this->validarTiposaudiencias($TiposaudienciasDto);
$TiposaudienciasDao = new TiposaudienciasDAO();
//$tmpDto = new TiposaudienciasDTO();
//$tmpDto = $TiposaudienciasDao->selectTiposaudiencias($TiposaudienciasDto,$proveedor);
//if($tmpDto!=""){//$TiposaudienciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposaudienciasDto = $TiposaudienciasDao->updateTiposaudiencias($TiposaudienciasDto,$proveedor);
return $TiposaudienciasDto;
//}
//return "";
}
public function deleteTiposaudiencias($TiposaudienciasDto,$proveedor=null){
$TiposaudienciasDto=$this->validarTiposaudiencias($TiposaudienciasDto);
$TiposaudienciasDao = new TiposaudienciasDAO();
$TiposaudienciasDto = $TiposaudienciasDao->deleteTiposaudiencias($TiposaudienciasDto,$proveedor);
return $TiposaudienciasDto;
}
}
?>