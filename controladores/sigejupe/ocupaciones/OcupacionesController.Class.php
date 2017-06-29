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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ocupaciones/OcupacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ocupaciones/OcupacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class OcupacionesController {
private $proveedor;
public function __construct() {
}
public function validarOcupaciones($OcupacionesDto){
$OcupacionesDto->setcveOcupacion(strtoupper(str_ireplace("'","",trim($OcupacionesDto->getcveOcupacion()))));
$OcupacionesDto->setdesOcupacion(strtoupper(str_ireplace("'","",trim($OcupacionesDto->getdesOcupacion()))));
$OcupacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($OcupacionesDto->getactivo()))));
$OcupacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($OcupacionesDto->getfechaRegistro()))));
$OcupacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($OcupacionesDto->getfechaActualizacion()))));
return $OcupacionesDto;
}
public function selectOcupaciones($OcupacionesDto,$proveedor=null){
$OcupacionesDto=$this->validarOcupaciones($OcupacionesDto);
$OcupacionesDao = new OcupacionesDAO();
$OcupacionesDto = $OcupacionesDao->selectOcupaciones($OcupacionesDto,$proveedor);
return $OcupacionesDto;
}
public function insertOcupaciones($OcupacionesDto,$proveedor=null){
$OcupacionesDto=$this->validarOcupaciones($OcupacionesDto);
$OcupacionesDao = new OcupacionesDAO();
$OcupacionesDto = $OcupacionesDao->insertOcupaciones($OcupacionesDto,$proveedor);
return $OcupacionesDto;
}
public function updateOcupaciones($OcupacionesDto,$proveedor=null){
$OcupacionesDto=$this->validarOcupaciones($OcupacionesDto);
$OcupacionesDao = new OcupacionesDAO();
//$tmpDto = new OcupacionesDTO();
//$tmpDto = $OcupacionesDao->selectOcupaciones($OcupacionesDto,$proveedor);
//if($tmpDto!=""){//$OcupacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$OcupacionesDto = $OcupacionesDao->updateOcupaciones($OcupacionesDto,$proveedor);
return $OcupacionesDto;
//}
//return "";
}
public function deleteOcupaciones($OcupacionesDto,$proveedor=null){
$OcupacionesDto=$this->validarOcupaciones($OcupacionesDto);
$OcupacionesDao = new OcupacionesDAO();
$OcupacionesDto = $OcupacionesDao->deleteOcupaciones($OcupacionesDto,$proveedor);
return $OcupacionesDto;
}
}
?>