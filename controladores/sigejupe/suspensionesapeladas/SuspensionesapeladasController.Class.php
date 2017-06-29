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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/suspensionesapeladas/SuspensionesapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/suspensionesapeladas/SuspensionesapeladasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class SuspensionesapeladasController {
private $proveedor;
public function __construct() {
}
public function validarSuspensionesapeladas($SuspensionesapeladasDto){
$SuspensionesapeladasDto->setidSuspensionApelada(strtoupper(str_ireplace("'","",trim($SuspensionesapeladasDto->getidSuspensionApelada()))));
$SuspensionesapeladasDto->setidSuspensionCondicional(strtoupper(str_ireplace("'","",trim($SuspensionesapeladasDto->getidSuspensionCondicional()))));
$SuspensionesapeladasDto->setcveSentido(strtoupper(str_ireplace("'","",trim($SuspensionesapeladasDto->getcveSentido()))));
$SuspensionesapeladasDto->setNumToca(strtoupper(str_ireplace("'","",trim($SuspensionesapeladasDto->getNumToca()))));
$SuspensionesapeladasDto->setAnioToca(strtoupper(str_ireplace("'","",trim($SuspensionesapeladasDto->getAnioToca()))));
$SuspensionesapeladasDto->setCveSala(strtoupper(str_ireplace("'","",trim($SuspensionesapeladasDto->getCveSala()))));
$SuspensionesapeladasDto->setactivo(strtoupper(str_ireplace("'","",trim($SuspensionesapeladasDto->getactivo()))));
$SuspensionesapeladasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($SuspensionesapeladasDto->getfechaRegistro()))));
$SuspensionesapeladasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($SuspensionesapeladasDto->getfechaActualizacion()))));
return $SuspensionesapeladasDto;
}
public function selectSuspensionesapeladas($SuspensionesapeladasDto,$proveedor=null){
$SuspensionesapeladasDto=$this->validarSuspensionesapeladas($SuspensionesapeladasDto);
$SuspensionesapeladasDao = new SuspensionesapeladasDAO();
$SuspensionesapeladasDto = $SuspensionesapeladasDao->selectSuspensionesapeladas($SuspensionesapeladasDto,$proveedor);
return $SuspensionesapeladasDto;
}
public function insertSuspensionesapeladas($SuspensionesapeladasDto,$proveedor=null){
$SuspensionesapeladasDto=$this->validarSuspensionesapeladas($SuspensionesapeladasDto);
$SuspensionesapeladasDao = new SuspensionesapeladasDAO();
$SuspensionesapeladasDto = $SuspensionesapeladasDao->insertSuspensionesapeladas($SuspensionesapeladasDto,$proveedor);
return $SuspensionesapeladasDto;
}
public function updateSuspensionesapeladas($SuspensionesapeladasDto,$proveedor=null){
$SuspensionesapeladasDto=$this->validarSuspensionesapeladas($SuspensionesapeladasDto);
$SuspensionesapeladasDao = new SuspensionesapeladasDAO();
//$tmpDto = new SuspensionesapeladasDTO();
//$tmpDto = $SuspensionesapeladasDao->selectSuspensionesapeladas($SuspensionesapeladasDto,$proveedor);
//if($tmpDto!=""){//$SuspensionesapeladasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$SuspensionesapeladasDto = $SuspensionesapeladasDao->updateSuspensionesapeladas($SuspensionesapeladasDto,$proveedor);
return $SuspensionesapeladasDto;
//}
//return "";
}
public function deleteSuspensionesapeladas($SuspensionesapeladasDto,$proveedor=null){
$SuspensionesapeladasDto=$this->validarSuspensionesapeladas($SuspensionesapeladasDto);
$SuspensionesapeladasDao = new SuspensionesapeladasDAO();
$SuspensionesapeladasDto = $SuspensionesapeladasDao->deleteSuspensionesapeladas($SuspensionesapeladasDto,$proveedor);
return $SuspensionesapeladasDto;
}
}
?>