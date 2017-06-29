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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/actuacionesestatusrad/ActuacionesestatusradDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/actuacionesestatusrad/ActuacionesestatusradDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ActuacionesestatusradController {
private $proveedor;
public function __construct() {
}
public function validarActuacionesestatusrad($ActuacionesestatusradDto){
$ActuacionesestatusradDto->setidActuacionesEstatusRad(strtoupper(str_ireplace("'","",trim($ActuacionesestatusradDto->getidActuacionesEstatusRad()))));
$ActuacionesestatusradDto->setidActuacion(strtoupper(str_ireplace("'","",trim($ActuacionesestatusradDto->getidActuacion()))));
$ActuacionesestatusradDto->setcveTipoEstatusRadicacion(strtoupper(str_ireplace("'","",trim($ActuacionesestatusradDto->getcveTipoEstatusRadicacion()))));
$ActuacionesestatusradDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ActuacionesestatusradDto->getfechaRegistro()))));
$ActuacionesestatusradDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ActuacionesestatusradDto->getfechaActualizacion()))));
$ActuacionesestatusradDto->setactivo(strtoupper(str_ireplace("'","",trim($ActuacionesestatusradDto->getactivo()))));
return $ActuacionesestatusradDto;
}
public function selectActuacionesestatusrad($ActuacionesestatusradDto,$proveedor=null){
$ActuacionesestatusradDto=$this->validarActuacionesestatusrad($ActuacionesestatusradDto);
$ActuacionesestatusradDao = new ActuacionesestatusradDAO();
$ActuacionesestatusradDto = $ActuacionesestatusradDao->selectActuacionesestatusrad($ActuacionesestatusradDto,$proveedor);
return $ActuacionesestatusradDto;
}
public function insertActuacionesestatusrad($ActuacionesestatusradDto,$proveedor=null){
$ActuacionesestatusradDto=$this->validarActuacionesestatusrad($ActuacionesestatusradDto);
$ActuacionesestatusradDao = new ActuacionesestatusradDAO();
$ActuacionesestatusradDto = $ActuacionesestatusradDao->insertActuacionesestatusrad($ActuacionesestatusradDto,$proveedor);
return $ActuacionesestatusradDto;
}
public function updateActuacionesestatusrad($ActuacionesestatusradDto,$proveedor=null){
$ActuacionesestatusradDto=$this->validarActuacionesestatusrad($ActuacionesestatusradDto);
$ActuacionesestatusradDao = new ActuacionesestatusradDAO();
//$tmpDto = new ActuacionesestatusradDTO();
//$tmpDto = $ActuacionesestatusradDao->selectActuacionesestatusrad($ActuacionesestatusradDto,$proveedor);
//if($tmpDto!=""){//$ActuacionesestatusradDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ActuacionesestatusradDto = $ActuacionesestatusradDao->updateActuacionesestatusrad($ActuacionesestatusradDto,$proveedor);
return $ActuacionesestatusradDto;
//}
//return "";
}
public function deleteActuacionesestatusrad($ActuacionesestatusradDto,$proveedor=null){
$ActuacionesestatusradDto=$this->validarActuacionesestatusrad($ActuacionesestatusradDto);
$ActuacionesestatusradDao = new ActuacionesestatusradDAO();
$ActuacionesestatusradDto = $ActuacionesestatusradDao->deleteActuacionesestatusrad($ActuacionesestatusradDto,$proveedor);
return $ActuacionesestatusradDto;
}
}
?>