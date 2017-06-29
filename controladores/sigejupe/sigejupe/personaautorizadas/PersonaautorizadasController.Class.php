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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/personaautorizadas/PersonaautorizadasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/personaautorizadas/PersonaautorizadasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class PersonaautorizadasController {
private $proveedor;
public function __construct() {
}
public function validarPersonaautorizadas($PersonaautorizadasDto){
$PersonaautorizadasDto->setIdPersonaAutorizada(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getIdPersonaAutorizada()))));
$PersonaautorizadasDto->setNombre(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getNombre()))));
$PersonaautorizadasDto->setPaterno(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getPaterno()))));
$PersonaautorizadasDto->setMaterno(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getMaterno()))));
$PersonaautorizadasDto->setCedula(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getCedula()))));
$PersonaautorizadasDto->setemail(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getemail()))));
$PersonaautorizadasDto->setFechaAlta(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getFechaAlta()))));
$PersonaautorizadasDto->setFechaBaja(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getFechaBaja()))));
$PersonaautorizadasDto->setFechaModificacion(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getFechaModificacion()))));
$PersonaautorizadasDto->setActivo(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getActivo()))));
$PersonaautorizadasDto->setemailAlternativo(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getemailAlternativo()))));
$PersonaautorizadasDto->setCveTipoAbogado(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getCveTipoAbogado()))));
$PersonaautorizadasDto->setUsuario(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getUsuario()))));
$PersonaautorizadasDto->setPassword(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getPassword()))));
$PersonaautorizadasDto->setDireccion(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getDireccion()))));
$PersonaautorizadasDto->setTelefono(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getTelefono()))));
$PersonaautorizadasDto->setUsuarioRegistro(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getUsuarioRegistro()))));
$PersonaautorizadasDto->setJuzgadoRegistro(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getJuzgadoRegistro()))));
$PersonaautorizadasDto->setCiudad(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getCiudad()))));
$PersonaautorizadasDto->setCveEstado(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getCveEstado()))));
$PersonaautorizadasDto->setCveEstatusRegistro(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getCveEstatusRegistro()))));
$PersonaautorizadasDto->setCveUsuario(strtoupper(str_ireplace("'","",trim($PersonaautorizadasDto->getCveUsuario()))));
return $PersonaautorizadasDto;
}
public function selectPersonaautorizadas($PersonaautorizadasDto,$proveedor=null){
$PersonaautorizadasDto=$this->validarPersonaautorizadas($PersonaautorizadasDto);
$PersonaautorizadasDao = new PersonaautorizadasDAO();
$PersonaautorizadasDto = $PersonaautorizadasDao->selectPersonaautorizadas($PersonaautorizadasDto,$proveedor);
return $PersonaautorizadasDto;
}
public function insertPersonaautorizadas($PersonaautorizadasDto,$proveedor=null){
$PersonaautorizadasDto=$this->validarPersonaautorizadas($PersonaautorizadasDto);
$PersonaautorizadasDao = new PersonaautorizadasDAO();
$PersonaautorizadasDto = $PersonaautorizadasDao->insertPersonaautorizadas($PersonaautorizadasDto,$proveedor);
return $PersonaautorizadasDto;
}
public function updatePersonaautorizadas($PersonaautorizadasDto,$proveedor=null){
$PersonaautorizadasDto=$this->validarPersonaautorizadas($PersonaautorizadasDto);
$PersonaautorizadasDao = new PersonaautorizadasDAO();
//$tmpDto = new PersonaautorizadasDTO();
//$tmpDto = $PersonaautorizadasDao->selectPersonaautorizadas($PersonaautorizadasDto,$proveedor);
//if($tmpDto!=""){//$PersonaautorizadasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$PersonaautorizadasDto = $PersonaautorizadasDao->updatePersonaautorizadas($PersonaautorizadasDto,$proveedor);
return $PersonaautorizadasDto;
//}
//return "";
}
public function deletePersonaautorizadas($PersonaautorizadasDto,$proveedor=null){
$PersonaautorizadasDto=$this->validarPersonaautorizadas($PersonaautorizadasDto);
$PersonaautorizadasDao = new PersonaautorizadasDAO();
$PersonaautorizadasDto = $PersonaautorizadasDao->deletePersonaautorizadas($PersonaautorizadasDto,$proveedor);
return $PersonaautorizadasDto;
}
}
?>