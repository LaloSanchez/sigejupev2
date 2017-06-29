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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ofenfendidosexhortos/OfenfendidosexhortosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ofenfendidosexhortos/OfenfendidosexhortosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class OfenfendidosexhortosController {
private $proveedor;
public function __construct() {
}
public function validarOfenfendidosexhortos($OfenfendidosexhortosDto){
$OfenfendidosexhortosDto->setidOfenfendidoExhorto(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getidOfenfendidoExhorto()))));
$OfenfendidosexhortosDto->setidExhorto(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getidExhorto()))));
$OfenfendidosexhortosDto->setpaterno(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getpaterno()))));
$OfenfendidosexhortosDto->setmaterno(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getmaterno()))));
$OfenfendidosexhortosDto->setnombre(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getnombre()))));
$OfenfendidosexhortosDto->setdomicilio(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getdomicilio()))));
$OfenfendidosexhortosDto->settelefono(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->gettelefono()))));
$OfenfendidosexhortosDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getcveTipoPersona()))));
$OfenfendidosexhortosDto->setnombreMoral(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getnombreMoral()))));
$OfenfendidosexhortosDto->setactivo(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getactivo()))));
$OfenfendidosexhortosDto->setcveEstado(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getcveEstado()))));
$OfenfendidosexhortosDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getcveMunicipio()))));
$OfenfendidosexhortosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getfechaRegistro()))));
$OfenfendidosexhortosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getfechaActualizacion()))));
$OfenfendidosexhortosDto->setcveGenero(strtoupper(str_ireplace("'","",trim($OfenfendidosexhortosDto->getcveGenero()))));
return $OfenfendidosexhortosDto;
}
public function selectOfenfendidosexhortos($OfenfendidosexhortosDto,$proveedor=null){
$OfenfendidosexhortosDto=$this->validarOfenfendidosexhortos($OfenfendidosexhortosDto);
$OfenfendidosexhortosDao = new OfenfendidosexhortosDAO();
$OfenfendidosexhortosDto = $OfenfendidosexhortosDao->selectOfenfendidosexhortos($OfenfendidosexhortosDto,$proveedor);
return $OfenfendidosexhortosDto;
}
public function insertOfenfendidosexhortos($OfenfendidosexhortosDto,$proveedor=null){
$OfenfendidosexhortosDto=$this->validarOfenfendidosexhortos($OfenfendidosexhortosDto);
$OfenfendidosexhortosDao = new OfenfendidosexhortosDAO();
$OfenfendidosexhortosDto = $OfenfendidosexhortosDao->insertOfenfendidosexhortos($OfenfendidosexhortosDto,$proveedor);
return $OfenfendidosexhortosDto;
}
public function updateOfenfendidosexhortos($OfenfendidosexhortosDto,$proveedor=null){
$OfenfendidosexhortosDto=$this->validarOfenfendidosexhortos($OfenfendidosexhortosDto);
$OfenfendidosexhortosDao = new OfenfendidosexhortosDAO();
//$tmpDto = new OfenfendidosexhortosDTO();
//$tmpDto = $OfenfendidosexhortosDao->selectOfenfendidosexhortos($OfenfendidosexhortosDto,$proveedor);
//if($tmpDto!=""){//$OfenfendidosexhortosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$OfenfendidosexhortosDto = $OfenfendidosexhortosDao->updateOfenfendidosexhortos($OfenfendidosexhortosDto,$proveedor);
return $OfenfendidosexhortosDto;
//}
//return "";
}
public function deleteOfenfendidosexhortos($OfenfendidosexhortosDto,$proveedor=null){
$OfenfendidosexhortosDto=$this->validarOfenfendidosexhortos($OfenfendidosexhortosDto);
$OfenfendidosexhortosDao = new OfenfendidosexhortosDAO();
$OfenfendidosexhortosDto = $OfenfendidosexhortosDao->deleteOfenfendidosexhortos($OfenfendidosexhortosDto,$proveedor);
return $OfenfendidosexhortosDto;
}
}
?>