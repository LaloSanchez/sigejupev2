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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/regionesmundiales/RegionesmundialesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/regionesmundiales/RegionesmundialesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class RegionesmundialesController {
private $proveedor;
public function __construct() {
}
public function validarRegionesmundiales($RegionesmundialesDto){
$RegionesmundialesDto->setcveRegionMundial(strtoupper(str_ireplace("'","",trim($RegionesmundialesDto->getcveRegionMundial()))));
$RegionesmundialesDto->setdesRegionMundial(strtoupper(str_ireplace("'","",trim($RegionesmundialesDto->getdesRegionMundial()))));
$RegionesmundialesDto->setactivo(strtoupper(str_ireplace("'","",trim($RegionesmundialesDto->getactivo()))));
$RegionesmundialesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($RegionesmundialesDto->getfechaRegistro()))));
$RegionesmundialesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($RegionesmundialesDto->getfechaActualizacion()))));
return $RegionesmundialesDto;
}
public function selectRegionesmundiales($RegionesmundialesDto,$proveedor=null){
$RegionesmundialesDto=$this->validarRegionesmundiales($RegionesmundialesDto);
$RegionesmundialesDao = new RegionesmundialesDAO();
$RegionesmundialesDto = $RegionesmundialesDao->selectRegionesmundiales($RegionesmundialesDto,$proveedor);
return $RegionesmundialesDto;
}
public function insertRegionesmundiales($RegionesmundialesDto,$proveedor=null){
$RegionesmundialesDto=$this->validarRegionesmundiales($RegionesmundialesDto);
$RegionesmundialesDao = new RegionesmundialesDAO();
$RegionesmundialesDto = $RegionesmundialesDao->insertRegionesmundiales($RegionesmundialesDto,$proveedor);
return $RegionesmundialesDto;
}
public function updateRegionesmundiales($RegionesmundialesDto,$proveedor=null){
$RegionesmundialesDto=$this->validarRegionesmundiales($RegionesmundialesDto);
$RegionesmundialesDao = new RegionesmundialesDAO();
//$tmpDto = new RegionesmundialesDTO();
//$tmpDto = $RegionesmundialesDao->selectRegionesmundiales($RegionesmundialesDto,$proveedor);
//if($tmpDto!=""){//$RegionesmundialesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$RegionesmundialesDto = $RegionesmundialesDao->updateRegionesmundiales($RegionesmundialesDto,$proveedor);
return $RegionesmundialesDto;
//}
//return "";
}
public function deleteRegionesmundiales($RegionesmundialesDto,$proveedor=null){
$RegionesmundialesDto=$this->validarRegionesmundiales($RegionesmundialesDto);
$RegionesmundialesDao = new RegionesmundialesDAO();
$RegionesmundialesDto = $RegionesmundialesDao->deleteRegionesmundiales($RegionesmundialesDto,$proveedor);
return $RegionesmundialesDto;
}
}
?>