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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/imputadosexhortos/ImputadosexhortosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/imputadosexhortos/ImputadosexhortosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ImputadosexhortosController {
private $proveedor;
public function __construct() {
}
public function validarImputadosexhortos($ImputadosexhortosDto){
$ImputadosexhortosDto->setidImputadoExhorto(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getidImputadoExhorto()))));
$ImputadosexhortosDto->setidExhorto(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getidExhorto()))));
$ImputadosexhortosDto->setcveConsignacion(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getcveConsignacion()))));
$ImputadosexhortosDto->setpaterno(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getpaterno()))));
$ImputadosexhortosDto->setmaterno(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getmaterno()))));
$ImputadosexhortosDto->setnombre(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getnombre()))));
$ImputadosexhortosDto->setcveGenero(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getcveGenero()))));
$ImputadosexhortosDto->setcveEstado(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getcveEstado()))));
$ImputadosexhortosDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getcveMunicipio()))));
$ImputadosexhortosDto->setdomicilio(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getdomicilio()))));
$ImputadosexhortosDto->setalias(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getalias()))));
$ImputadosexhortosDto->settelefono(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->gettelefono()))));
$ImputadosexhortosDto->setcveCereso(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getcveCereso()))));
$ImputadosexhortosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getfechaRegistro()))));
$ImputadosexhortosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getfechaActualizacion()))));
$ImputadosexhortosDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getcveTipoPersona()))));
$ImputadosexhortosDto->setnombreMoral(strtoupper(str_ireplace("'","",trim($ImputadosexhortosDto->getnombreMoral()))));
return $ImputadosexhortosDto;
}
public function selectImputadosexhortos($ImputadosexhortosDto,$proveedor=null){
$ImputadosexhortosDto=$this->validarImputadosexhortos($ImputadosexhortosDto);
$ImputadosexhortosDao = new ImputadosexhortosDAO();
$ImputadosexhortosDto = $ImputadosexhortosDao->selectImputadosexhortos($ImputadosexhortosDto,$proveedor);
return $ImputadosexhortosDto;
}
public function insertImputadosexhortos($ImputadosexhortosDto,$proveedor=null){
$ImputadosexhortosDto=$this->validarImputadosexhortos($ImputadosexhortosDto);
$ImputadosexhortosDao = new ImputadosexhortosDAO();
$ImputadosexhortosDto = $ImputadosexhortosDao->insertImputadosexhortos($ImputadosexhortosDto,$proveedor);
return $ImputadosexhortosDto;
}
public function updateImputadosexhortos($ImputadosexhortosDto,$proveedor=null){
$ImputadosexhortosDto=$this->validarImputadosexhortos($ImputadosexhortosDto);
$ImputadosexhortosDao = new ImputadosexhortosDAO();
//$tmpDto = new ImputadosexhortosDTO();
//$tmpDto = $ImputadosexhortosDao->selectImputadosexhortos($ImputadosexhortosDto,$proveedor);
//if($tmpDto!=""){//$ImputadosexhortosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ImputadosexhortosDto = $ImputadosexhortosDao->updateImputadosexhortos($ImputadosexhortosDto,$proveedor);
return $ImputadosexhortosDto;
//}
//return "";
}
public function deleteImputadosexhortos($ImputadosexhortosDto,$proveedor=null){
$ImputadosexhortosDto=$this->validarImputadosexhortos($ImputadosexhortosDto);
$ImputadosexhortosDao = new ImputadosexhortosDAO();
$ImputadosexhortosDto = $ImputadosexhortosDao->deleteImputadosexhortos($ImputadosexhortosDto,$proveedor);
return $ImputadosexhortosDto;
}
}
?>