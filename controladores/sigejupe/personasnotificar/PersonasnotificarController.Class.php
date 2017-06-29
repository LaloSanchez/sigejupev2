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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/personasnotificar/PersonasnotificarDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/personasnotificar/PersonasnotificarDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class PersonasnotificarController {
private $proveedor;
public function __construct() {
}
public function validarPersonasnotificar($PersonasnotificarDto){
$PersonasnotificarDto->setidtblPersonasNotificar(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getidtblPersonasNotificar()))));
$PersonasnotificarDto->setidNotificacion(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getidNotificacion()))));
$PersonasnotificarDto->setidRelacionExpedienteJuzgado(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getidRelacionExpedienteJuzgado()))));
$PersonasnotificarDto->setActivo(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getActivo()))));
$PersonasnotificarDto->setFechaAlta(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getFechaAlta()))));
$PersonasnotificarDto->setFechaModificacion(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getFechaModificacion()))));
$PersonasnotificarDto->setCadOriginal(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getCadOriginal()))));
$PersonasnotificarDto->setSelloDigital(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getSelloDigital()))));
$PersonasnotificarDto->setInstructivo(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getInstructivo()))));
$PersonasnotificarDto->setDestinatario(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getDestinatario()))));
$PersonasnotificarDto->setCorreoCopia(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getCorreoCopia()))));
$PersonasnotificarDto->setidAcuerdo(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getidAcuerdo()))));
$PersonasnotificarDto->setEncabezado(strtoupper(str_ireplace("'","",trim($PersonasnotificarDto->getEncabezado()))));
return $PersonasnotificarDto;
}
public function selectPersonasnotificar($PersonasnotificarDto,$proveedor=null){
$PersonasnotificarDto=$this->validarPersonasnotificar($PersonasnotificarDto);
$PersonasnotificarDao = new PersonasnotificarDAO();
$PersonasnotificarDto = $PersonasnotificarDao->selectPersonasnotificar($PersonasnotificarDto,$proveedor);
return $PersonasnotificarDto;
}
public function insertPersonasnotificar($PersonasnotificarDto,$proveedor=null){
$PersonasnotificarDto=$this->validarPersonasnotificar($PersonasnotificarDto);
$PersonasnotificarDao = new PersonasnotificarDAO();
$PersonasnotificarDto = $PersonasnotificarDao->insertPersonasnotificar($PersonasnotificarDto,$proveedor);
return $PersonasnotificarDto;
}
public function updatePersonasnotificar($PersonasnotificarDto,$proveedor=null){
$PersonasnotificarDto=$this->validarPersonasnotificar($PersonasnotificarDto);
$PersonasnotificarDao = new PersonasnotificarDAO();
//$tmpDto = new PersonasnotificarDTO();
//$tmpDto = $PersonasnotificarDao->selectPersonasnotificar($PersonasnotificarDto,$proveedor);
//if($tmpDto!=""){//$PersonasnotificarDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$PersonasnotificarDto = $PersonasnotificarDao->updatePersonasnotificar($PersonasnotificarDto,$proveedor);
return $PersonasnotificarDto;
//}
//return "";
}
public function deletePersonasnotificar($PersonasnotificarDto,$proveedor=null){
$PersonasnotificarDto=$this->validarPersonasnotificar($PersonasnotificarDto);
$PersonasnotificarDao = new PersonasnotificarDAO();
$PersonasnotificarDto = $PersonasnotificarDao->deletePersonasnotificar($PersonasnotificarDto,$proveedor);
return $PersonasnotificarDto;
}
}
?>