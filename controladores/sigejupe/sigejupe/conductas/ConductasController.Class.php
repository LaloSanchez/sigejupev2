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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/conductas/ConductasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/conductas/ConductasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ConductasController {
private $proveedor;
public function __construct() {
}
public function validarConductas($ConductasDto){
$ConductasDto->setcveConducta(strtoupper(str_ireplace("'","",trim($ConductasDto->getcveConducta()))));
$ConductasDto->setdesConducta(strtoupper(str_ireplace("'","",trim($ConductasDto->getdesConducta()))));
$ConductasDto->setactivo(strtoupper(str_ireplace("'","",trim($ConductasDto->getactivo()))));
$ConductasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ConductasDto->getfechaRegistro()))));
$ConductasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ConductasDto->getfechaActualizacion()))));
return $ConductasDto;
}
public function selectConductas($ConductasDto,$proveedor=null){
$ConductasDto=$this->validarConductas($ConductasDto);
$ConductasDao = new ConductasDAO();
$ConductasDto = $ConductasDao->selectConductas($ConductasDto,$proveedor);
return $ConductasDto;
}
public function insertConductas($ConductasDto,$proveedor=null){
$ConductasDto=$this->validarConductas($ConductasDto);
$ConductasDao = new ConductasDAO();
$ConductasDto = $ConductasDao->insertConductas($ConductasDto,$proveedor);
return $ConductasDto;
}
public function updateConductas($ConductasDto,$proveedor=null){
$ConductasDto=$this->validarConductas($ConductasDto);
$ConductasDao = new ConductasDAO();
//$tmpDto = new ConductasDTO();
//$tmpDto = $ConductasDao->selectConductas($ConductasDto,$proveedor);
//if($tmpDto!=""){//$ConductasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ConductasDto = $ConductasDao->updateConductas($ConductasDto,$proveedor);
return $ConductasDto;
//}
//return "";
}
public function deleteConductas($ConductasDto,$proveedor=null){
$ConductasDto=$this->validarConductas($ConductasDto);
$ConductasDao = new ConductasDAO();
$ConductasDto = $ConductasDao->deleteConductas($ConductasDto,$proveedor);
return $ConductasDto;
}
}
?>