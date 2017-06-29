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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/terminaciones/TerminacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/terminaciones/TerminacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TerminacionesController {
private $proveedor;
public function __construct() {
}
public function validarTerminaciones($TerminacionesDto){
$TerminacionesDto->setcveTerminacion(strtoupper(str_ireplace("'","",trim($TerminacionesDto->getcveTerminacion()))));
$TerminacionesDto->setdesTerminacion(strtoupper(str_ireplace("'","",trim($TerminacionesDto->getdesTerminacion()))));
$TerminacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($TerminacionesDto->getactivo()))));
$TerminacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TerminacionesDto->getfechaRegistro()))));
$TerminacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TerminacionesDto->getfechaActualizacion()))));
return $TerminacionesDto;
}
public function selectTerminaciones($TerminacionesDto,$proveedor=null){
$TerminacionesDto=$this->validarTerminaciones($TerminacionesDto);
$TerminacionesDao = new TerminacionesDAO();
$TerminacionesDto = $TerminacionesDao->selectTerminaciones($TerminacionesDto,$proveedor);
return $TerminacionesDto;
}
public function insertTerminaciones($TerminacionesDto,$proveedor=null){
$TerminacionesDto=$this->validarTerminaciones($TerminacionesDto);
$TerminacionesDao = new TerminacionesDAO();
$TerminacionesDto = $TerminacionesDao->insertTerminaciones($TerminacionesDto,$proveedor);
return $TerminacionesDto;
}
public function updateTerminaciones($TerminacionesDto,$proveedor=null){
$TerminacionesDto=$this->validarTerminaciones($TerminacionesDto);
$TerminacionesDao = new TerminacionesDAO();
//$tmpDto = new TerminacionesDTO();
//$tmpDto = $TerminacionesDao->selectTerminaciones($TerminacionesDto,$proveedor);
//if($tmpDto!=""){//$TerminacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TerminacionesDto = $TerminacionesDao->updateTerminaciones($TerminacionesDto,$proveedor);
return $TerminacionesDto;
//}
//return "";
}
public function deleteTerminaciones($TerminacionesDto,$proveedor=null){
$TerminacionesDto=$this->validarTerminaciones($TerminacionesDto);
$TerminacionesDao = new TerminacionesDAO();
$TerminacionesDto = $TerminacionesDao->deleteTerminaciones($TerminacionesDto,$proveedor);
return $TerminacionesDto;
}
}
?>