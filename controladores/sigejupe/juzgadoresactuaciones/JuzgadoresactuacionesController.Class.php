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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadoresactuaciones/JuzgadoresactuacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgadoresactuaciones/JuzgadoresactuacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class JuzgadoresactuacionesController {
private $proveedor;
public function __construct() {
}
public function validarJuzgadoresactuaciones($JuzgadoresactuacionesDto){
$JuzgadoresactuacionesDto->setidJuzgadorActuacion(strtoupper(str_ireplace("'","",trim($JuzgadoresactuacionesDto->getidJuzgadorActuacion()))));
$JuzgadoresactuacionesDto->setidActuacion(strtoupper(str_ireplace("'","",trim($JuzgadoresactuacionesDto->getidActuacion()))));
$JuzgadoresactuacionesDto->setidJuzgador(strtoupper(str_ireplace("'","",trim($JuzgadoresactuacionesDto->getidJuzgador()))));
$JuzgadoresactuacionesDto->setcveFuncionJuzgador(strtoupper(str_ireplace("'","",trim($JuzgadoresactuacionesDto->getcveFuncionJuzgador()))));
$JuzgadoresactuacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($JuzgadoresactuacionesDto->getactivo()))));
$JuzgadoresactuacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($JuzgadoresactuacionesDto->getfechaRegistro()))));
$JuzgadoresactuacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($JuzgadoresactuacionesDto->getfechaActualizacion()))));
return $JuzgadoresactuacionesDto;
}
public function selectJuzgadoresactuaciones($JuzgadoresactuacionesDto,$proveedor=null){
$JuzgadoresactuacionesDto=$this->validarJuzgadoresactuaciones($JuzgadoresactuacionesDto);
$JuzgadoresactuacionesDao = new JuzgadoresactuacionesDAO();
$JuzgadoresactuacionesDto = $JuzgadoresactuacionesDao->selectJuzgadoresactuaciones($JuzgadoresactuacionesDto,$proveedor);
return $JuzgadoresactuacionesDto;
}
public function insertJuzgadoresactuaciones($JuzgadoresactuacionesDto,$proveedor=null){
$JuzgadoresactuacionesDto=$this->validarJuzgadoresactuaciones($JuzgadoresactuacionesDto);
$JuzgadoresactuacionesDao = new JuzgadoresactuacionesDAO();
$JuzgadoresactuacionesDto = $JuzgadoresactuacionesDao->insertJuzgadoresactuaciones($JuzgadoresactuacionesDto,$proveedor);
return $JuzgadoresactuacionesDto;
}
public function updateJuzgadoresactuaciones($JuzgadoresactuacionesDto,$proveedor=null){
$JuzgadoresactuacionesDto=$this->validarJuzgadoresactuaciones($JuzgadoresactuacionesDto);
$JuzgadoresactuacionesDao = new JuzgadoresactuacionesDAO();
//$tmpDto = new JuzgadoresactuacionesDTO();
//$tmpDto = $JuzgadoresactuacionesDao->selectJuzgadoresactuaciones($JuzgadoresactuacionesDto,$proveedor);
//if($tmpDto!=""){//$JuzgadoresactuacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$JuzgadoresactuacionesDto = $JuzgadoresactuacionesDao->updateJuzgadoresactuaciones($JuzgadoresactuacionesDto,$proveedor);
return $JuzgadoresactuacionesDto;
//}
//return "";
}
public function deleteJuzgadoresactuaciones($JuzgadoresactuacionesDto,$proveedor=null){
$JuzgadoresactuacionesDto=$this->validarJuzgadoresactuaciones($JuzgadoresactuacionesDto);
$JuzgadoresactuacionesDao = new JuzgadoresactuacionesDAO();
$JuzgadoresactuacionesDto = $JuzgadoresactuacionesDao->deleteJuzgadoresactuaciones($JuzgadoresactuacionesDto,$proveedor);
return $JuzgadoresactuacionesDto;
}
}
?>