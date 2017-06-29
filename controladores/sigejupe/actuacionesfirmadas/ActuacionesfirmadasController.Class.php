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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/actuacionesfirmadas/ActuacionesfirmadasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/actuacionesfirmadas/ActuacionesfirmadasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ActuacionesfirmadasController {
private $proveedor;
public function __construct() {
}
public function validarActuacionesfirmadas($ActuacionesfirmadasDto){
$ActuacionesfirmadasDto->setidActuacionFirmada(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->getidActuacionFirmada()))));
$ActuacionesfirmadasDto->setidReferencia(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->getidReferencia()))));
$ActuacionesfirmadasDto->setcveTipoActuacion(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->getcveTipoActuacion()))));
$ActuacionesfirmadasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->getcveTipoCarpeta()))));
$ActuacionesfirmadasDto->setcveUsuario(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->getcveUsuario()))));
$ActuacionesfirmadasDto->setcveGrupo(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->getcveGrupo()))));
$ActuacionesfirmadasDto->setfileNameFirma(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->getfileNameFirma()))));
$ActuacionesfirmadasDto->settransferenciaFirma(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->gettransferenciaFirma()))));
$ActuacionesfirmadasDto->settokenFirma(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->gettokenFirma()))));
$ActuacionesfirmadasDto->setidRegistroFirma(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->getidRegistroFirma()))));
$ActuacionesfirmadasDto->setactivo(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->getactivo()))));
$ActuacionesfirmadasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->getfechaActualizacion()))));
$ActuacionesfirmadasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ActuacionesfirmadasDto->getfechaRegistro()))));
return $ActuacionesfirmadasDto;
}
public function selectActuacionesfirmadas($ActuacionesfirmadasDto,$proveedor=null){
$ActuacionesfirmadasDto=$this->validarActuacionesfirmadas($ActuacionesfirmadasDto);
$ActuacionesfirmadasDao = new ActuacionesfirmadasDAO();
$ActuacionesfirmadasDto = $ActuacionesfirmadasDao->selectActuacionesfirmadas($ActuacionesfirmadasDto,$proveedor);
return $ActuacionesfirmadasDto;
}
public function insertActuacionesfirmadas($ActuacionesfirmadasDto,$proveedor=null){
$ActuacionesfirmadasDto=$this->validarActuacionesfirmadas($ActuacionesfirmadasDto);
$ActuacionesfirmadasDao = new ActuacionesfirmadasDAO();
$ActuacionesfirmadasDto = $ActuacionesfirmadasDao->insertActuacionesfirmadas($ActuacionesfirmadasDto,$proveedor);
return $ActuacionesfirmadasDto;
}
public function updateActuacionesfirmadas($ActuacionesfirmadasDto,$proveedor=null){
$ActuacionesfirmadasDto=$this->validarActuacionesfirmadas($ActuacionesfirmadasDto);
$ActuacionesfirmadasDao = new ActuacionesfirmadasDAO();
//$tmpDto = new ActuacionesfirmadasDTO();
//$tmpDto = $ActuacionesfirmadasDao->selectActuacionesfirmadas($ActuacionesfirmadasDto,$proveedor);
//if($tmpDto!=""){//$ActuacionesfirmadasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ActuacionesfirmadasDto = $ActuacionesfirmadasDao->updateActuacionesfirmadas($ActuacionesfirmadasDto,$proveedor);
return $ActuacionesfirmadasDto;
//}
//return "";
}
public function deleteActuacionesfirmadas($ActuacionesfirmadasDto,$proveedor=null){
$ActuacionesfirmadasDto=$this->validarActuacionesfirmadas($ActuacionesfirmadasDto);
$ActuacionesfirmadasDao = new ActuacionesfirmadasDAO();
$ActuacionesfirmadasDto = $ActuacionesfirmadasDao->deleteActuacionesfirmadas($ActuacionesfirmadasDto,$proveedor);
return $ActuacionesfirmadasDto;
}
}
?>