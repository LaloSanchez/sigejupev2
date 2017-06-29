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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/policiasministeriales/PoliciasministerialesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/policiasministeriales/PoliciasministerialesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class PoliciasministerialesController {
private $proveedor;
public function __construct() {
}
public function validarPoliciasministeriales($PoliciasministerialesDto){
$PoliciasministerialesDto->setidPoliciaMinisterial(strtoupper(str_ireplace("'","",trim($PoliciasministerialesDto->getidPoliciaMinisterial()))));
$PoliciasministerialesDto->setidIngresoCereso(strtoupper(str_ireplace("'","",trim($PoliciasministerialesDto->getidIngresoCereso()))));
$PoliciasministerialesDto->setnombre(strtoupper(str_ireplace("'","",trim($PoliciasministerialesDto->getnombre()))));
$PoliciasministerialesDto->setpaterno(strtoupper(str_ireplace("'","",trim($PoliciasministerialesDto->getpaterno()))));
$PoliciasministerialesDto->setmaterno(strtoupper(str_ireplace("'","",trim($PoliciasministerialesDto->getmaterno()))));
$PoliciasministerialesDto->setactivo(strtoupper(str_ireplace("'","",trim($PoliciasministerialesDto->getactivo()))));
$PoliciasministerialesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($PoliciasministerialesDto->getfechaRegistro()))));
$PoliciasministerialesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($PoliciasministerialesDto->getfechaActualizacion()))));
return $PoliciasministerialesDto;
}
public function selectPoliciasministeriales($PoliciasministerialesDto,$proveedor=null){
$PoliciasministerialesDto=$this->validarPoliciasministeriales($PoliciasministerialesDto);
$PoliciasministerialesDao = new PoliciasministerialesDAO();
$PoliciasministerialesDto = $PoliciasministerialesDao->selectPoliciasministeriales($PoliciasministerialesDto,$proveedor);
return $PoliciasministerialesDto;
}
public function insertPoliciasministeriales($PoliciasministerialesDto,$proveedor=null){
$PoliciasministerialesDto=$this->validarPoliciasministeriales($PoliciasministerialesDto);
$PoliciasministerialesDao = new PoliciasministerialesDAO();
$PoliciasministerialesDto = $PoliciasministerialesDao->insertPoliciasministeriales($PoliciasministerialesDto,$proveedor);
return $PoliciasministerialesDto;
}
public function updatePoliciasministeriales($PoliciasministerialesDto,$proveedor=null){
$PoliciasministerialesDto=$this->validarPoliciasministeriales($PoliciasministerialesDto);
$PoliciasministerialesDao = new PoliciasministerialesDAO();
//$tmpDto = new PoliciasministerialesDTO();
//$tmpDto = $PoliciasministerialesDao->selectPoliciasministeriales($PoliciasministerialesDto,$proveedor);
//if($tmpDto!=""){//$PoliciasministerialesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$PoliciasministerialesDto = $PoliciasministerialesDao->updatePoliciasministeriales($PoliciasministerialesDto,$proveedor);
return $PoliciasministerialesDto;
//}
//return "";
}
public function deletePoliciasministeriales($PoliciasministerialesDto,$proveedor=null){
$PoliciasministerialesDto=$this->validarPoliciasministeriales($PoliciasministerialesDto);
$PoliciasministerialesDao = new PoliciasministerialesDAO();
$PoliciasministerialesDto = $PoliciasministerialesDao->deletePoliciasministeriales($PoliciasministerialesDto,$proveedor);
return $PoliciasministerialesDto;
}
}
?>