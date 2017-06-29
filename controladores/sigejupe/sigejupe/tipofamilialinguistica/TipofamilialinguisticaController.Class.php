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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipofamilialinguistica/TipofamilialinguisticaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tipofamilialinguistica/TipofamilialinguisticaDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TipofamilialinguisticaController {
private $proveedor;
public function __construct() {
}
public function validarTipofamilialinguistica($TipofamilialinguisticaDto){
$TipofamilialinguisticaDto->setcveTipoFamiliaLinguistica(strtoupper(str_ireplace("'","",trim($TipofamilialinguisticaDto->getcveTipoFamiliaLinguistica()))));
$TipofamilialinguisticaDto->setdesTipoFamiliaLinguistica(strtoupper(str_ireplace("'","",trim($TipofamilialinguisticaDto->getdesTipoFamiliaLinguistica()))));
$TipofamilialinguisticaDto->setactivo(strtoupper(str_ireplace("'","",trim($TipofamilialinguisticaDto->getactivo()))));
$TipofamilialinguisticaDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TipofamilialinguisticaDto->getfechaRegistro()))));
$TipofamilialinguisticaDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TipofamilialinguisticaDto->getfechaActualizacion()))));
return $TipofamilialinguisticaDto;
}
public function selectTipofamilialinguistica($TipofamilialinguisticaDto,$proveedor=null){
$TipofamilialinguisticaDto=$this->validarTipofamilialinguistica($TipofamilialinguisticaDto);
$TipofamilialinguisticaDao = new TipofamilialinguisticaDAO();
$TipofamilialinguisticaDto = $TipofamilialinguisticaDao->selectTipofamilialinguistica($TipofamilialinguisticaDto,$proveedor);
return $TipofamilialinguisticaDto;
}
public function insertTipofamilialinguistica($TipofamilialinguisticaDto,$proveedor=null){
$TipofamilialinguisticaDto=$this->validarTipofamilialinguistica($TipofamilialinguisticaDto);
$TipofamilialinguisticaDao = new TipofamilialinguisticaDAO();
$TipofamilialinguisticaDto = $TipofamilialinguisticaDao->insertTipofamilialinguistica($TipofamilialinguisticaDto,$proveedor);
return $TipofamilialinguisticaDto;
}
public function updateTipofamilialinguistica($TipofamilialinguisticaDto,$proveedor=null){
$TipofamilialinguisticaDto=$this->validarTipofamilialinguistica($TipofamilialinguisticaDto);
$TipofamilialinguisticaDao = new TipofamilialinguisticaDAO();
//$tmpDto = new TipofamilialinguisticaDTO();
//$tmpDto = $TipofamilialinguisticaDao->selectTipofamilialinguistica($TipofamilialinguisticaDto,$proveedor);
//if($tmpDto!=""){//$TipofamilialinguisticaDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TipofamilialinguisticaDto = $TipofamilialinguisticaDao->updateTipofamilialinguistica($TipofamilialinguisticaDto,$proveedor);
return $TipofamilialinguisticaDto;
//}
//return "";
}
public function deleteTipofamilialinguistica($TipofamilialinguisticaDto,$proveedor=null){
$TipofamilialinguisticaDto=$this->validarTipofamilialinguistica($TipofamilialinguisticaDto);
$TipofamilialinguisticaDao = new TipofamilialinguisticaDAO();
$TipofamilialinguisticaDto = $TipofamilialinguisticaDao->deleteTipofamilialinguistica($TipofamilialinguisticaDto,$proveedor);
return $TipofamilialinguisticaDto;
}
}
?>