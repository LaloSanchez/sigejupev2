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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipospersonas/TipospersonasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tipospersonas/TipospersonasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TipospersonasController {
private $proveedor;
public function __construct() {
}
public function validarTipospersonas($TipospersonasDto){
$TipospersonasDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim($TipospersonasDto->getcveTipoPersona()))));
$TipospersonasDto->setdesTipoPersona(strtoupper(str_ireplace("'","",trim($TipospersonasDto->getdesTipoPersona()))));
$TipospersonasDto->setactivo(strtoupper(str_ireplace("'","",trim($TipospersonasDto->getactivo()))));
$TipospersonasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TipospersonasDto->getfechaRegistro()))));
$TipospersonasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TipospersonasDto->getfechaActualizacion()))));
return $TipospersonasDto;
}
public function selectTipospersonas($TipospersonasDto,$proveedor=null){
$TipospersonasDto=$this->validarTipospersonas($TipospersonasDto);
$TipospersonasDao = new TipospersonasDAO();
$TipospersonasDto = $TipospersonasDao->selectTipospersonas($TipospersonasDto,$proveedor);
return $TipospersonasDto;
}
public function insertTipospersonas($TipospersonasDto,$proveedor=null){
$TipospersonasDto=$this->validarTipospersonas($TipospersonasDto);
$TipospersonasDao = new TipospersonasDAO();
$TipospersonasDto = $TipospersonasDao->insertTipospersonas($TipospersonasDto,$proveedor);
return $TipospersonasDto;
}
public function updateTipospersonas($TipospersonasDto,$proveedor=null){
$TipospersonasDto=$this->validarTipospersonas($TipospersonasDto);
$TipospersonasDao = new TipospersonasDAO();
//$tmpDto = new TipospersonasDTO();
//$tmpDto = $TipospersonasDao->selectTipospersonas($TipospersonasDto,$proveedor);
//if($tmpDto!=""){//$TipospersonasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TipospersonasDto = $TipospersonasDao->updateTipospersonas($TipospersonasDto,$proveedor);
return $TipospersonasDto;
//}
//return "";
}
public function deleteTipospersonas($TipospersonasDto,$proveedor=null){
$TipospersonasDto=$this->validarTipospersonas($TipospersonasDto);
$TipospersonasDao = new TipospersonasDAO();
$TipospersonasDto = $TipospersonasDao->deleteTipospersonas($TipospersonasDto,$proveedor);
return $TipospersonasDto;
}
}
?>