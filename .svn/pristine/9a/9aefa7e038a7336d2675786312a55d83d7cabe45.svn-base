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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadorescateos/JuzgadorescateosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgadorescateos/JuzgadorescateosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class JuzgadorescateosController {
private $proveedor;
public function __construct() {
}
public function validarJuzgadorescateos($JuzgadorescateosDto){
$JuzgadorescateosDto->setidJuzgadorCateo(strtoupper(str_ireplace("'","",trim($JuzgadorescateosDto->getidJuzgadorCateo()))));
$JuzgadorescateosDto->setidSolicitudCateo(strtoupper(str_ireplace("'","",trim($JuzgadorescateosDto->getidSolicitudCateo()))));
$JuzgadorescateosDto->setidJuzgador(strtoupper(str_ireplace("'","",trim($JuzgadorescateosDto->getidJuzgador()))));
$JuzgadorescateosDto->setactivo(strtoupper(str_ireplace("'","",trim($JuzgadorescateosDto->getactivo()))));
$JuzgadorescateosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($JuzgadorescateosDto->getfechaRegistro()))));
$JuzgadorescateosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($JuzgadorescateosDto->getfechaActualizacion()))));
return $JuzgadorescateosDto;
}
public function selectJuzgadorescateos($JuzgadorescateosDto,$proveedor=null){
$JuzgadorescateosDto=$this->validarJuzgadorescateos($JuzgadorescateosDto);
$JuzgadorescateosDao = new JuzgadorescateosDAO();
$JuzgadorescateosDto = $JuzgadorescateosDao->selectJuzgadorescateos($JuzgadorescateosDto,$proveedor);
return $JuzgadorescateosDto;
}
public function insertJuzgadorescateos($JuzgadorescateosDto,$proveedor=null){
$JuzgadorescateosDto=$this->validarJuzgadorescateos($JuzgadorescateosDto);
$JuzgadorescateosDao = new JuzgadorescateosDAO();
$JuzgadorescateosDto = $JuzgadorescateosDao->insertJuzgadorescateos($JuzgadorescateosDto,$proveedor);
return $JuzgadorescateosDto;
}
public function updateJuzgadorescateos($JuzgadorescateosDto,$proveedor=null){
$JuzgadorescateosDto=$this->validarJuzgadorescateos($JuzgadorescateosDto);
$JuzgadorescateosDao = new JuzgadorescateosDAO();
//$tmpDto = new JuzgadorescateosDTO();
//$tmpDto = $JuzgadorescateosDao->selectJuzgadorescateos($JuzgadorescateosDto,$proveedor);
//if($tmpDto!=""){//$JuzgadorescateosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$JuzgadorescateosDto = $JuzgadorescateosDao->updateJuzgadorescateos($JuzgadorescateosDto,$proveedor);
return $JuzgadorescateosDto;
//}
//return "";
}
public function deleteJuzgadorescateos($JuzgadorescateosDto,$proveedor=null){
$JuzgadorescateosDto=$this->validarJuzgadorescateos($JuzgadorescateosDto);
$JuzgadorescateosDao = new JuzgadorescateosDAO();
$JuzgadorescateosDto = $JuzgadorescateosDao->deleteJuzgadorescateos($JuzgadorescateosDto,$proveedor);
return $JuzgadorescateosDto;
}
}
?>