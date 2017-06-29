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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/calendario/CalendarioDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/calendario/CalendarioDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class CalendarioController {
private $proveedor;
public function __construct() {
}
public function validarCalendario($CalendarioDto){
$CalendarioDto->setidCalendario(strtoupper(str_ireplace("'","",trim($CalendarioDto->getidCalendario()))));
$CalendarioDto->settipo(strtoupper(str_ireplace("'","",trim($CalendarioDto->gettipo()))));
$CalendarioDto->setfecha(strtoupper(str_ireplace("'","",trim($CalendarioDto->getfecha()))));
$CalendarioDto->setdescripcion(strtoupper(str_ireplace("'","",trim($CalendarioDto->getdescripcion()))));
$CalendarioDto->setactivo(strtoupper(str_ireplace("'","",trim($CalendarioDto->getactivo()))));
$CalendarioDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($CalendarioDto->getfechaRegistro()))));
$CalendarioDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($CalendarioDto->getfechaActualizacion()))));
return $CalendarioDto;
}
public function selectCalendario($CalendarioDto,$proveedor=null){
$CalendarioDto=$this->validarCalendario($CalendarioDto);
$CalendarioDao = new CalendarioDAO();
$CalendarioDto = $CalendarioDao->selectCalendario($CalendarioDto,$proveedor);
return $CalendarioDto;
}
public function insertCalendario($CalendarioDto,$proveedor=null){
$CalendarioDto=$this->validarCalendario($CalendarioDto);
$CalendarioDao = new CalendarioDAO();
$CalendarioDto = $CalendarioDao->insertCalendario($CalendarioDto,$proveedor);
return $CalendarioDto;
}
public function updateCalendario($CalendarioDto,$proveedor=null){
$CalendarioDto=$this->validarCalendario($CalendarioDto);
$CalendarioDao = new CalendarioDAO();
//$tmpDto = new CalendarioDTO();
//$tmpDto = $CalendarioDao->selectCalendario($CalendarioDto,$proveedor);
//if($tmpDto!=""){//$CalendarioDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$CalendarioDto = $CalendarioDao->updateCalendario($CalendarioDto,$proveedor);
return $CalendarioDto;
//}
//return "";
}
public function deleteCalendario($CalendarioDto,$proveedor=null){
$CalendarioDto=$this->validarCalendario($CalendarioDto);
$CalendarioDao = new CalendarioDAO();
$CalendarioDto = $CalendarioDao->deleteCalendario($CalendarioDto,$proveedor);
return $CalendarioDto;
}
}
?>