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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadoresapelacateos/JuzgadoresapelacateosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgadoresapelacateos/JuzgadoresapelacateosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class JuzgadoresapelacateosController {
private $proveedor;
public function __construct() {
}
public function validarJuzgadoresapelacateos($JuzgadoresapelacateosDto){
$JuzgadoresapelacateosDto->setidJuzgadorApelaCateo(strtoupper(str_ireplace("'","",trim($JuzgadoresapelacateosDto->getidJuzgadorApelaCateo()))));
$JuzgadoresapelacateosDto->setidApelacionCateo(strtoupper(str_ireplace("'","",trim($JuzgadoresapelacateosDto->getidApelacionCateo()))));
$JuzgadoresapelacateosDto->setidJuzgador(strtoupper(str_ireplace("'","",trim($JuzgadoresapelacateosDto->getidJuzgador()))));
$JuzgadoresapelacateosDto->setactivo(strtoupper(str_ireplace("'","",trim($JuzgadoresapelacateosDto->getactivo()))));
$JuzgadoresapelacateosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($JuzgadoresapelacateosDto->getfechaRegistro()))));
$JuzgadoresapelacateosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($JuzgadoresapelacateosDto->getfechaActualizacion()))));
return $JuzgadoresapelacateosDto;
}
public function selectJuzgadoresapelacateos($JuzgadoresapelacateosDto,$proveedor=null){
$JuzgadoresapelacateosDto=$this->validarJuzgadoresapelacateos($JuzgadoresapelacateosDto);
$JuzgadoresapelacateosDao = new JuzgadoresapelacateosDAO();
$JuzgadoresapelacateosDto = $JuzgadoresapelacateosDao->selectJuzgadoresapelacateos($JuzgadoresapelacateosDto,$proveedor);
return $JuzgadoresapelacateosDto;
}
public function insertJuzgadoresapelacateos($JuzgadoresapelacateosDto,$proveedor=null){
$JuzgadoresapelacateosDto=$this->validarJuzgadoresapelacateos($JuzgadoresapelacateosDto);
$JuzgadoresapelacateosDao = new JuzgadoresapelacateosDAO();
$JuzgadoresapelacateosDto = $JuzgadoresapelacateosDao->insertJuzgadoresapelacateos($JuzgadoresapelacateosDto,$proveedor);
return $JuzgadoresapelacateosDto;
}
public function updateJuzgadoresapelacateos($JuzgadoresapelacateosDto,$proveedor=null){
$JuzgadoresapelacateosDto=$this->validarJuzgadoresapelacateos($JuzgadoresapelacateosDto);
$JuzgadoresapelacateosDao = new JuzgadoresapelacateosDAO();
//$tmpDto = new JuzgadoresapelacateosDTO();
//$tmpDto = $JuzgadoresapelacateosDao->selectJuzgadoresapelacateos($JuzgadoresapelacateosDto,$proveedor);
//if($tmpDto!=""){//$JuzgadoresapelacateosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$JuzgadoresapelacateosDto = $JuzgadoresapelacateosDao->updateJuzgadoresapelacateos($JuzgadoresapelacateosDto,$proveedor);
return $JuzgadoresapelacateosDto;
//}
//return "";
}
public function deleteJuzgadoresapelacateos($JuzgadoresapelacateosDto,$proveedor=null){
$JuzgadoresapelacateosDto=$this->validarJuzgadoresapelacateos($JuzgadoresapelacateosDto);
$JuzgadoresapelacateosDao = new JuzgadoresapelacateosDAO();
$JuzgadoresapelacateosDto = $JuzgadoresapelacateosDao->deleteJuzgadoresapelacateos($JuzgadoresapelacateosDto,$proveedor);
return $JuzgadoresapelacateosDto;
}
}
?>