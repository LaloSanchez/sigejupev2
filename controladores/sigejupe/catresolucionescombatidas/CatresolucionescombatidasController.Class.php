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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/catresolucionescombatidas/CatresolucionescombatidasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/catresolucionescombatidas/CatresolucionescombatidasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class CatresolucionescombatidasController {
private $proveedor;
public function __construct() {
}
public function validarCatresolucionescombatidas($CatresolucionescombatidasDto){
$CatresolucionescombatidasDto->setcveCatResolucionCombatida(strtoupper(str_ireplace("'","",trim($CatresolucionescombatidasDto->getcveCatResolucionCombatida()))));
$CatresolucionescombatidasDto->setdesResolucionCombatida(strtoupper(str_ireplace("'","",trim($CatresolucionescombatidasDto->getdesResolucionCombatida()))));
$CatresolucionescombatidasDto->setcveTipoActuacion(strtoupper(str_ireplace("'","",trim($CatresolucionescombatidasDto->getcveTipoActuacion()))));
$CatresolucionescombatidasDto->setactivo(strtoupper(str_ireplace("'","",trim($CatresolucionescombatidasDto->getactivo()))));
$CatresolucionescombatidasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($CatresolucionescombatidasDto->getfechaRegistro()))));
$CatresolucionescombatidasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($CatresolucionescombatidasDto->getfechaActualizacion()))));
return $CatresolucionescombatidasDto;
}
public function selectCatresolucionescombatidas($CatresolucionescombatidasDto,$orden,$proveedor=null){
$CatresolucionescombatidasDto=$this->validarCatresolucionescombatidas($CatresolucionescombatidasDto);
$CatresolucionescombatidasDao = new CatresolucionescombatidasDAO();
$CatresolucionescombatidasDto = $CatresolucionescombatidasDao->selectCatresolucionescombatidas($CatresolucionescombatidasDto,$orden,$proveedor);
return $CatresolucionescombatidasDto;
}
public function insertCatresolucionescombatidas($CatresolucionescombatidasDto,$proveedor=null){
$CatresolucionescombatidasDto=$this->validarCatresolucionescombatidas($CatresolucionescombatidasDto);
$CatresolucionescombatidasDao = new CatresolucionescombatidasDAO();
$CatresolucionescombatidasDto = $CatresolucionescombatidasDao->insertCatresolucionescombatidas($CatresolucionescombatidasDto,$proveedor);
return $CatresolucionescombatidasDto;
}
public function updateCatresolucionescombatidas($CatresolucionescombatidasDto,$proveedor=null){
$CatresolucionescombatidasDto=$this->validarCatresolucionescombatidas($CatresolucionescombatidasDto);
$CatresolucionescombatidasDao = new CatresolucionescombatidasDAO();
//$tmpDto = new CatresolucionescombatidasDTO();
//$tmpDto = $CatresolucionescombatidasDao->selectCatresolucionescombatidas($CatresolucionescombatidasDto,$proveedor);
//if($tmpDto!=""){//$CatresolucionescombatidasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$CatresolucionescombatidasDto = $CatresolucionescombatidasDao->updateCatresolucionescombatidas($CatresolucionescombatidasDto,$proveedor);
return $CatresolucionescombatidasDto;
//}
//return "";
}
public function deleteCatresolucionescombatidas($CatresolucionescombatidasDto,$proveedor=null){
$CatresolucionescombatidasDto=$this->validarCatresolucionescombatidas($CatresolucionescombatidasDto);
$CatresolucionescombatidasDao = new CatresolucionescombatidasDAO();
$CatresolucionescombatidasDto = $CatresolucionescombatidasDao->deleteCatresolucionescombatidas($CatresolucionescombatidasDto,$proveedor);
return $CatresolucionescombatidasDto;
}
}
?>