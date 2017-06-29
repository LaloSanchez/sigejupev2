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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipostratas/TipostratasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tipostratas/TipostratasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TipostratasController {
private $proveedor;
public function __construct() {
}
public function validarTipostratas($TipostratasDto){
$TipostratasDto->setcveTipoTrata(strtoupper(str_ireplace("'","",trim($TipostratasDto->getcveTipoTrata()))));
$TipostratasDto->setdesTipoTrata(strtoupper(str_ireplace("'","",trim($TipostratasDto->getdesTipoTrata()))));
$TipostratasDto->setactivo(strtoupper(str_ireplace("'","",trim($TipostratasDto->getactivo()))));
$TipostratasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TipostratasDto->getfechaRegistro()))));
$TipostratasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TipostratasDto->getfechaActualizacion()))));
return $TipostratasDto;
}
public function selectTipostratas($TipostratasDto,$proveedor=null){
$TipostratasDto=$this->validarTipostratas($TipostratasDto);
$TipostratasDao = new TipostratasDAO();
$TipostratasDto = $TipostratasDao->selectTipostratas($TipostratasDto,$proveedor);
return $TipostratasDto;
}
public function insertTipostratas($TipostratasDto,$proveedor=null){
$TipostratasDto=$this->validarTipostratas($TipostratasDto);
$TipostratasDao = new TipostratasDAO();
$TipostratasDto = $TipostratasDao->insertTipostratas($TipostratasDto,$proveedor);
return $TipostratasDto;
}
public function updateTipostratas($TipostratasDto,$proveedor=null){
$TipostratasDto=$this->validarTipostratas($TipostratasDto);
$TipostratasDao = new TipostratasDAO();
//$tmpDto = new TipostratasDTO();
//$tmpDto = $TipostratasDao->selectTipostratas($TipostratasDto,$proveedor);
//if($tmpDto!=""){//$TipostratasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TipostratasDto = $TipostratasDao->updateTipostratas($TipostratasDto,$proveedor);
return $TipostratasDto;
//}
//return "";
}
public function deleteTipostratas($TipostratasDto,$proveedor=null){
$TipostratasDto=$this->validarTipostratas($TipostratasDto);
$TipostratasDao = new TipostratasDAO();
$TipostratasDto = $TipostratasDao->deleteTipostratas($TipostratasDto,$proveedor);
return $TipostratasDto;
}
}
?>