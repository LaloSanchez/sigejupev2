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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/actuacionesfirmantes/ActuacionesfirmantesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/actuacionesfirmantes/ActuacionesfirmantesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ActuacionesfirmantesController {
private $proveedor;
public function __construct() {
}
public function validarActuacionesfirmantes($ActuacionesfirmantesDto){
$ActuacionesfirmantesDto->setidActuacionFirmante(strtoupper(str_ireplace("'","",trim($ActuacionesfirmantesDto->getidActuacionFirmante()))));
$ActuacionesfirmantesDto->setcveTipoActuacion(strtoupper(str_ireplace("'","",trim($ActuacionesfirmantesDto->getcveTipoActuacion()))));
$ActuacionesfirmantesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'","",trim($ActuacionesfirmantesDto->getcveTipoCarpeta()))));
$ActuacionesfirmantesDto->setcveGrupo(strtoupper(str_ireplace("'","",trim($ActuacionesfirmantesDto->getcveGrupo()))));
$ActuacionesfirmantesDto->setorden(strtoupper(str_ireplace("'","",trim($ActuacionesfirmantesDto->getorden()))));
$ActuacionesfirmantesDto->setrelacionado(strtoupper(str_ireplace("'","",trim($ActuacionesfirmantesDto->getrelacionado()))));
$ActuacionesfirmantesDto->setactivo(strtoupper(str_ireplace("'","",trim($ActuacionesfirmantesDto->getactivo()))));
$ActuacionesfirmantesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ActuacionesfirmantesDto->getfechaActualizacion()))));
$ActuacionesfirmantesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ActuacionesfirmantesDto->getfechaRegistro()))));
return $ActuacionesfirmantesDto;
}
public function selectActuacionesfirmantes($ActuacionesfirmantesDto,$proveedor=null){
$ActuacionesfirmantesDto=$this->validarActuacionesfirmantes($ActuacionesfirmantesDto);
$ActuacionesfirmantesDao = new ActuacionesfirmantesDAO();
$ActuacionesfirmantesDto = $ActuacionesfirmantesDao->selectActuacionesfirmantes($ActuacionesfirmantesDto,$proveedor);
return $ActuacionesfirmantesDto;
}
public function insertActuacionesfirmantes($ActuacionesfirmantesDto,$proveedor=null){
$ActuacionesfirmantesDto=$this->validarActuacionesfirmantes($ActuacionesfirmantesDto);
$ActuacionesfirmantesDao = new ActuacionesfirmantesDAO();
$ActuacionesfirmantesDto = $ActuacionesfirmantesDao->insertActuacionesfirmantes($ActuacionesfirmantesDto,$proveedor);
return $ActuacionesfirmantesDto;
}
public function updateActuacionesfirmantes($ActuacionesfirmantesDto,$proveedor=null){
$ActuacionesfirmantesDto=$this->validarActuacionesfirmantes($ActuacionesfirmantesDto);
$ActuacionesfirmantesDao = new ActuacionesfirmantesDAO();
//$tmpDto = new ActuacionesfirmantesDTO();
//$tmpDto = $ActuacionesfirmantesDao->selectActuacionesfirmantes($ActuacionesfirmantesDto,$proveedor);
//if($tmpDto!=""){//$ActuacionesfirmantesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ActuacionesfirmantesDto = $ActuacionesfirmantesDao->updateActuacionesfirmantes($ActuacionesfirmantesDto,$proveedor);
return $ActuacionesfirmantesDto;
//}
//return "";
}
public function deleteActuacionesfirmantes($ActuacionesfirmantesDto,$proveedor=null){
$ActuacionesfirmantesDto=$this->validarActuacionesfirmantes($ActuacionesfirmantesDto);
$ActuacionesfirmantesDao = new ActuacionesfirmantesDAO();
$ActuacionesfirmantesDto = $ActuacionesfirmantesDao->deleteActuacionesfirmantes($ActuacionesfirmantesDto,$proveedor);
return $ActuacionesfirmantesDto;
}
}
?>