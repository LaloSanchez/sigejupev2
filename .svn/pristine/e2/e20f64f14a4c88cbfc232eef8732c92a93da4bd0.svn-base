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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/personasordenes/PersonasordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/personasordenes/PersonasordenesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class PersonasordenesController {
private $proveedor;
public function __construct() {
}
public function validarPersonasordenes($PersonasordenesDto){
$PersonasordenesDto->setidPersonaOrden(strtoupper(str_ireplace("'","",trim($PersonasordenesDto->getidPersonaOrden()))));
$PersonasordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'","",trim($PersonasordenesDto->getidSolicitudOrden()))));
$PersonasordenesDto->setpaterno(strtoupper(str_ireplace("'","",trim($PersonasordenesDto->getpaterno()))));
$PersonasordenesDto->setmaterno(strtoupper(str_ireplace("'","",trim($PersonasordenesDto->getmaterno()))));
$PersonasordenesDto->setnombre(strtoupper(str_ireplace("'","",trim($PersonasordenesDto->getnombre()))));
$PersonasordenesDto->setdomicilio(strtoupper(str_ireplace("'","",trim($PersonasordenesDto->getdomicilio()))));
$PersonasordenesDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim($PersonasordenesDto->getcveMunicipio()))));
$PersonasordenesDto->setcveGenero(strtoupper(str_ireplace("'","",trim($PersonasordenesDto->getcveGenero()))));
$PersonasordenesDto->setcveOrigen(strtoupper(str_ireplace("'","",trim($PersonasordenesDto->getcveOrigen()))));
return $PersonasordenesDto;
}
public function selectPersonasordenes($PersonasordenesDto,$proveedor=null){
$PersonasordenesDto=$this->validarPersonasordenes($PersonasordenesDto);
$PersonasordenesDao = new PersonasordenesDAO();
$PersonasordenesDto = $PersonasordenesDao->selectPersonasordenes($PersonasordenesDto,$proveedor);
return $PersonasordenesDto;
}
public function insertPersonasordenes($PersonasordenesDto,$proveedor=null){
$PersonasordenesDto=$this->validarPersonasordenes($PersonasordenesDto);
$PersonasordenesDao = new PersonasordenesDAO();
$PersonasordenesDto = $PersonasordenesDao->insertPersonasordenes($PersonasordenesDto,$proveedor);
return $PersonasordenesDto;
}
public function updatePersonasordenes($PersonasordenesDto,$proveedor=null){
$PersonasordenesDto=$this->validarPersonasordenes($PersonasordenesDto);
$PersonasordenesDao = new PersonasordenesDAO();
//$tmpDto = new PersonasordenesDTO();
//$tmpDto = $PersonasordenesDao->selectPersonasordenes($PersonasordenesDto,$proveedor);
//if($tmpDto!=""){//$PersonasordenesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$PersonasordenesDto = $PersonasordenesDao->updatePersonasordenes($PersonasordenesDto,$proveedor);
return $PersonasordenesDto;
//}
//return "";
}
public function deletePersonasordenes($PersonasordenesDto,$proveedor=null){
$PersonasordenesDto=$this->validarPersonasordenes($PersonasordenesDto);
$PersonasordenesDao = new PersonasordenesDAO();
$PersonasordenesDto = $PersonasordenesDao->deletePersonasordenes($PersonasordenesDto,$proveedor);
return $PersonasordenesDto;
}
}
?>