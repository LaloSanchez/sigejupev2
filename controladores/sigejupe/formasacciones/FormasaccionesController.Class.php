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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/formasacciones/FormasaccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/formasacciones/FormasaccionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class FormasaccionesController {
private $proveedor;
public function __construct() {
}
public function validarFormasacciones($FormasaccionesDto){
$FormasaccionesDto->setcveFormaAccion(strtoupper(str_ireplace("'","",trim($FormasaccionesDto->getcveFormaAccion()))));
$FormasaccionesDto->setdesFormaAccion(strtoupper(str_ireplace("'","",trim($FormasaccionesDto->getdesFormaAccion()))));
$FormasaccionesDto->setactivo(strtoupper(str_ireplace("'","",trim($FormasaccionesDto->getactivo()))));
$FormasaccionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($FormasaccionesDto->getfechaRegistro()))));
$FormasaccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($FormasaccionesDto->getfechaActualizacion()))));
return $FormasaccionesDto;
}
public function selectFormasacciones($FormasaccionesDto,$proveedor=null){
$FormasaccionesDto=$this->validarFormasacciones($FormasaccionesDto);
$FormasaccionesDao = new FormasaccionesDAO();
$FormasaccionesDto = $FormasaccionesDao->selectFormasacciones($FormasaccionesDto," ORDER BY desFormaAccion ASC",$proveedor);
return $FormasaccionesDto;
}
public function insertFormasacciones($FormasaccionesDto,$proveedor=null){
$FormasaccionesDto=$this->validarFormasacciones($FormasaccionesDto);
$FormasaccionesDao = new FormasaccionesDAO();
$FormasaccionesDto = $FormasaccionesDao->insertFormasacciones($FormasaccionesDto,$proveedor);
return $FormasaccionesDto;
}
public function updateFormasacciones($FormasaccionesDto,$proveedor=null){
$FormasaccionesDto=$this->validarFormasacciones($FormasaccionesDto);
$FormasaccionesDao = new FormasaccionesDAO();
//$tmpDto = new FormasaccionesDTO();
//$tmpDto = $FormasaccionesDao->selectFormasacciones($FormasaccionesDto,$proveedor);
//if($tmpDto!=""){//$FormasaccionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$FormasaccionesDto = $FormasaccionesDao->updateFormasacciones($FormasaccionesDto,$proveedor);
return $FormasaccionesDto;
//}
//return "";
}
public function deleteFormasacciones($FormasaccionesDto,$proveedor=null){
$FormasaccionesDto=$this->validarFormasacciones($FormasaccionesDto);
$FormasaccionesDao = new FormasaccionesDAO();
$FormasaccionesDto = $FormasaccionesDao->deleteFormasacciones($FormasaccionesDto,$proveedor);
return $FormasaccionesDto;
}
}
?>