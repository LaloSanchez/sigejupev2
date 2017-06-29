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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/regiones/RegionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/regiones/RegionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class RegionesController {
private $proveedor;
public function __construct() {
}
public function validarRegiones($RegionesDto){
$RegionesDto->setcveRegion(strtoupper(str_ireplace("'","",trim($RegionesDto->getcveRegion()))));
$RegionesDto->setdesRegion(strtoupper(str_ireplace("'","",trim($RegionesDto->getdesRegion()))));
$RegionesDto->setactivo(strtoupper(str_ireplace("'","",trim($RegionesDto->getactivo()))));
$RegionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($RegionesDto->getfechaRegistro()))));
$RegionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($RegionesDto->getfechaActualizacion()))));
return $RegionesDto;
}
public function selectRegiones($RegionesDto,$proveedor=null){
$RegionesDto=$this->validarRegiones($RegionesDto);
$RegionesDao = new RegionesDAO();
$RegionesDto = $RegionesDao->selectRegiones($RegionesDto,$proveedor);
return $RegionesDto;
}
public function insertRegiones($RegionesDto,$proveedor=null){
$RegionesDto=$this->validarRegiones($RegionesDto);
$RegionesDao = new RegionesDAO();
$RegionesDto = $RegionesDao->insertRegiones($RegionesDto,$proveedor);
return $RegionesDto;
}
public function updateRegiones($RegionesDto,$proveedor=null){
$RegionesDto=$this->validarRegiones($RegionesDto);
$RegionesDao = new RegionesDAO();
//$tmpDto = new RegionesDTO();
//$tmpDto = $RegionesDao->selectRegiones($RegionesDto,$proveedor);
//if($tmpDto!=""){//$RegionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$RegionesDto = $RegionesDao->updateRegiones($RegionesDto,$proveedor);
return $RegionesDto;
//}
//return "";
}
public function deleteRegiones($RegionesDto,$proveedor=null){
$RegionesDto=$this->validarRegiones($RegionesDto);
$RegionesDao = new RegionesDAO();
$RegionesDto = $RegionesDao->deleteRegiones($RegionesDto,$proveedor);
return $RegionesDto;
}
}
?>