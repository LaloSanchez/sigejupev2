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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposautos/TiposautosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposautos/TiposautosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposautosController {
private $proveedor;
public function __construct() {
}
public function validarTiposautos($TiposautosDto){
$TiposautosDto->setcveTipoAuto(strtoupper(str_ireplace("'","",trim($TiposautosDto->getcveTipoAuto()))));
$TiposautosDto->setdesTipoAuto(strtoupper(str_ireplace("'","",trim($TiposautosDto->getdesTipoAuto()))));
$TiposautosDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposautosDto->getactivo()))));
$TiposautosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposautosDto->getfechaRegistro()))));
$TiposautosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposautosDto->getfechaActualizacion()))));
return $TiposautosDto;
}
public function selectTiposautos($TiposautosDto,$proveedor=null){
$TiposautosDto=$this->validarTiposautos($TiposautosDto);
$TiposautosDao = new TiposautosDAO();
$TiposautosDto = $TiposautosDao->selectTiposautos($TiposautosDto,$proveedor);
return $TiposautosDto;
}
public function insertTiposautos($TiposautosDto,$proveedor=null){
$TiposautosDto=$this->validarTiposautos($TiposautosDto);
$TiposautosDao = new TiposautosDAO();
$TiposautosDto = $TiposautosDao->insertTiposautos($TiposautosDto,$proveedor);
return $TiposautosDto;
}
public function updateTiposautos($TiposautosDto,$proveedor=null){
$TiposautosDto=$this->validarTiposautos($TiposautosDto);
$TiposautosDao = new TiposautosDAO();
//$tmpDto = new TiposautosDTO();
//$tmpDto = $TiposautosDao->selectTiposautos($TiposautosDto,$proveedor);
//if($tmpDto!=""){//$TiposautosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposautosDto = $TiposautosDao->updateTiposautos($TiposautosDto,$proveedor);
return $TiposautosDto;
//}
//return "";
}
public function deleteTiposautos($TiposautosDto,$proveedor=null){
$TiposautosDto=$this->validarTiposautos($TiposautosDto);
$TiposautosDao = new TiposautosDAO();
$TiposautosDto = $TiposautosDao->deleteTiposautos($TiposautosDto,$proveedor);
return $TiposautosDto;
}
}
?>