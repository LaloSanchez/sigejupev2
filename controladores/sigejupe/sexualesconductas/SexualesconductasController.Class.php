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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/sexualesconductas/SexualesconductasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/sexualesconductas/SexualesconductasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class SexualesconductasController {
private $proveedor;
public function __construct() {
}
public function validarSexualesconductas($SexualesconductasDto){
$SexualesconductasDto->setidSexualConducta(strtoupper(str_ireplace("'","",trim($SexualesconductasDto->getidSexualConducta()))));
$SexualesconductasDto->setidSexual(strtoupper(str_ireplace("'","",trim($SexualesconductasDto->getidSexual()))));
$SexualesconductasDto->setcveConducta(strtoupper(str_ireplace("'","",trim($SexualesconductasDto->getcveConducta()))));
$SexualesconductasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($SexualesconductasDto->getfechaRegistro()))));
$SexualesconductasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($SexualesconductasDto->getfechaActualizacion()))));
return $SexualesconductasDto;
}
public function selectSexualesconductas($SexualesconductasDto,$proveedor=null){
$SexualesconductasDto=$this->validarSexualesconductas($SexualesconductasDto);
$SexualesconductasDao = new SexualesconductasDAO();
$SexualesconductasDto = $SexualesconductasDao->selectSexualesconductas($SexualesconductasDto,$proveedor);
return $SexualesconductasDto;
}
public function insertSexualesconductas($SexualesconductasDto,$proveedor=null){
$SexualesconductasDto=$this->validarSexualesconductas($SexualesconductasDto);
$SexualesconductasDao = new SexualesconductasDAO();
$SexualesconductasDto = $SexualesconductasDao->insertSexualesconductas($SexualesconductasDto,$proveedor);
return $SexualesconductasDto;
}
public function updateSexualesconductas($SexualesconductasDto,$proveedor=null){
$SexualesconductasDto=$this->validarSexualesconductas($SexualesconductasDto);
$SexualesconductasDao = new SexualesconductasDAO();
//$tmpDto = new SexualesconductasDTO();
//$tmpDto = $SexualesconductasDao->selectSexualesconductas($SexualesconductasDto,$proveedor);
//if($tmpDto!=""){//$SexualesconductasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$SexualesconductasDto = $SexualesconductasDao->updateSexualesconductas($SexualesconductasDto,$proveedor);
return $SexualesconductasDto;
//}
//return "";
}
public function deleteSexualesconductas($SexualesconductasDto,$proveedor=null){
$SexualesconductasDto=$this->validarSexualesconductas($SexualesconductasDto);
$SexualesconductasDao = new SexualesconductasDAO();
$SexualesconductasDto = $SexualesconductasDao->deleteSexualesconductas($SexualesconductasDto,$proveedor);
return $SexualesconductasDto;
}
}
?>