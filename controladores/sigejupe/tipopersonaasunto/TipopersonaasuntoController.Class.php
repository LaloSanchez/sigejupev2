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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipopersonaasunto/TipopersonaasuntoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tipopersonaasunto/TipopersonaasuntoDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TipopersonaasuntoController {
private $proveedor;
public function __construct() {
}
public function validarTipopersonaasunto($TipopersonaasuntoDto){
$TipopersonaasuntoDto->setcveTipoPersonaAsunto(strtoupper(str_ireplace("'","",trim($TipopersonaasuntoDto->getcveTipoPersonaAsunto()))));
$TipopersonaasuntoDto->setDescripcion(strtoupper(str_ireplace("'","",trim($TipopersonaasuntoDto->getDescripcion()))));
$TipopersonaasuntoDto->setActivo(strtoupper(str_ireplace("'","",trim($TipopersonaasuntoDto->getActivo()))));
return $TipopersonaasuntoDto;
}
public function selectTipopersonaasunto($TipopersonaasuntoDto,$proveedor=null){
$TipopersonaasuntoDto=$this->validarTipopersonaasunto($TipopersonaasuntoDto);
$TipopersonaasuntoDao = new TipopersonaasuntoDAO();
$TipopersonaasuntoDto = $TipopersonaasuntoDao->selectTipopersonaasunto($TipopersonaasuntoDto,$proveedor);
return $TipopersonaasuntoDto;
}
public function insertTipopersonaasunto($TipopersonaasuntoDto,$proveedor=null){
$TipopersonaasuntoDto=$this->validarTipopersonaasunto($TipopersonaasuntoDto);
$TipopersonaasuntoDao = new TipopersonaasuntoDAO();
$TipopersonaasuntoDto = $TipopersonaasuntoDao->insertTipopersonaasunto($TipopersonaasuntoDto,$proveedor);
return $TipopersonaasuntoDto;
}
public function updateTipopersonaasunto($TipopersonaasuntoDto,$proveedor=null){
$TipopersonaasuntoDto=$this->validarTipopersonaasunto($TipopersonaasuntoDto);
$TipopersonaasuntoDao = new TipopersonaasuntoDAO();
//$tmpDto = new TipopersonaasuntoDTO();
//$tmpDto = $TipopersonaasuntoDao->selectTipopersonaasunto($TipopersonaasuntoDto,$proveedor);
//if($tmpDto!=""){//$TipopersonaasuntoDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TipopersonaasuntoDto = $TipopersonaasuntoDao->updateTipopersonaasunto($TipopersonaasuntoDto,$proveedor);
return $TipopersonaasuntoDto;
//}
//return "";
}
public function deleteTipopersonaasunto($TipopersonaasuntoDto,$proveedor=null){
$TipopersonaasuntoDto=$this->validarTipopersonaasunto($TipopersonaasuntoDto);
$TipopersonaasuntoDao = new TipopersonaasuntoDAO();
$TipopersonaasuntoDto = $TipopersonaasuntoDao->deleteTipopersonaasunto($TipopersonaasuntoDto,$proveedor);
return $TipopersonaasuntoDto;
}
}
?>