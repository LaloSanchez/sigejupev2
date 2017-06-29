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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitosexhortos/DelitosexhortosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/delitosexhortos/DelitosexhortosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DelitosexhortosController {
private $proveedor;
public function __construct() {
}
public function validarDelitosexhortos($DelitosexhortosDto){
$DelitosexhortosDto->setidDelitoExhorto(strtoupper(str_ireplace("'","",trim($DelitosexhortosDto->getidDelitoExhorto()))));
$DelitosexhortosDto->setidExhorto(strtoupper(str_ireplace("'","",trim($DelitosexhortosDto->getidExhorto()))));
$DelitosexhortosDto->setcveDelito(strtoupper(str_ireplace("'","",trim($DelitosexhortosDto->getcveDelito()))));
$DelitosexhortosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DelitosexhortosDto->getfechaRegistro()))));
$DelitosexhortosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DelitosexhortosDto->getfechaActualizacion()))));
return $DelitosexhortosDto;
}
public function selectDelitosexhortos($DelitosexhortosDto,$proveedor=null){
$DelitosexhortosDto=$this->validarDelitosexhortos($DelitosexhortosDto);
$DelitosexhortosDao = new DelitosexhortosDAO();
$DelitosexhortosDto = $DelitosexhortosDao->selectDelitosexhortos($DelitosexhortosDto,$proveedor);
return $DelitosexhortosDto;
}
public function insertDelitosexhortos($DelitosexhortosDto,$proveedor=null){
$DelitosexhortosDto=$this->validarDelitosexhortos($DelitosexhortosDto);
$DelitosexhortosDao = new DelitosexhortosDAO();
$DelitosexhortosDto = $DelitosexhortosDao->insertDelitosexhortos($DelitosexhortosDto,$proveedor);
return $DelitosexhortosDto;
}
public function updateDelitosexhortos($DelitosexhortosDto,$proveedor=null){
$DelitosexhortosDto=$this->validarDelitosexhortos($DelitosexhortosDto);
$DelitosexhortosDao = new DelitosexhortosDAO();
//$tmpDto = new DelitosexhortosDTO();
//$tmpDto = $DelitosexhortosDao->selectDelitosexhortos($DelitosexhortosDto,$proveedor);
//if($tmpDto!=""){//$DelitosexhortosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DelitosexhortosDto = $DelitosexhortosDao->updateDelitosexhortos($DelitosexhortosDto,$proveedor);
return $DelitosexhortosDto;
//}
//return "";
}
public function deleteDelitosexhortos($DelitosexhortosDto,$proveedor=null){
$DelitosexhortosDto=$this->validarDelitosexhortos($DelitosexhortosDto);
$DelitosexhortosDao = new DelitosexhortosDAO();
$DelitosexhortosDto = $DelitosexhortosDao->deleteDelitosexhortos($DelitosexhortosDto,$proveedor);
return $DelitosexhortosDto;
}
}
?>