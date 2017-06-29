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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/personas/PersonasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/personas/PersonasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class PersonasController {
private $proveedor;
public function __construct() {
}
public function validarPersonas($PersonasDto){
$PersonasDto->setidPersona(strtoupper(str_ireplace("'","",trim($PersonasDto->getidPersona()))));
$PersonasDto->setidSolicitudCateo(strtoupper(str_ireplace("'","",trim($PersonasDto->getidSolicitudCateo()))));
$PersonasDto->setpaterno(strtoupper(str_ireplace("'","",trim($PersonasDto->getpaterno()))));
$PersonasDto->setmaterno(strtoupper(str_ireplace("'","",trim($PersonasDto->getmaterno()))));
$PersonasDto->setnombre(strtoupper(str_ireplace("'","",trim($PersonasDto->getnombre()))));
$PersonasDto->setdomicilio(strtoupper(str_ireplace("'","",trim($PersonasDto->getdomicilio()))));
$PersonasDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim($PersonasDto->getcveMunicipio()))));
$PersonasDto->setcveGenero(strtoupper(str_ireplace("'","",trim($PersonasDto->getcveGenero()))));
return $PersonasDto;
}
public function selectPersonas($PersonasDto,$proveedor=null){
$PersonasDto=$this->validarPersonas($PersonasDto);
$PersonasDao = new PersonasDAO();
$PersonasDto = $PersonasDao->selectPersonas($PersonasDto,$proveedor);
return $PersonasDto;
}
public function insertPersonas($PersonasDto,$proveedor=null){
$PersonasDto=$this->validarPersonas($PersonasDto);
$PersonasDao = new PersonasDAO();
$PersonasDto = $PersonasDao->insertPersonas($PersonasDto,$proveedor);
return $PersonasDto;
}
public function updatePersonas($PersonasDto,$proveedor=null){
$PersonasDto=$this->validarPersonas($PersonasDto);
$PersonasDao = new PersonasDAO();
//$tmpDto = new PersonasDTO();
//$tmpDto = $PersonasDao->selectPersonas($PersonasDto,$proveedor);
//if($tmpDto!=""){//$PersonasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$PersonasDto = $PersonasDao->updatePersonas($PersonasDto,$proveedor);
return $PersonasDto;
//}
//return "";
}
public function deletePersonas($PersonasDto,$proveedor=null){
$PersonasDto=$this->validarPersonas($PersonasDto);
$PersonasDao = new PersonasDAO();
$PersonasDto = $PersonasDao->deletePersonas($PersonasDto,$proveedor);
return $PersonasDto;
}
}
?>