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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadoresmuestras/JuzgadoresmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgadoresmuestras/JuzgadoresmuestrasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class JuzgadoresmuestrasController {
private $proveedor;
public function __construct() {
}
public function validarJuzgadoresmuestras($JuzgadoresmuestrasDto){
$JuzgadoresmuestrasDto->setidJuzgadorMuestra(strtoupper(str_ireplace("'","",trim($JuzgadoresmuestrasDto->getidJuzgadorMuestra()))));
$JuzgadoresmuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'","",trim($JuzgadoresmuestrasDto->getidSolicitudMuestra()))));
$JuzgadoresmuestrasDto->setidJuzgador(strtoupper(str_ireplace("'","",trim($JuzgadoresmuestrasDto->getidJuzgador()))));
$JuzgadoresmuestrasDto->setactivo(strtoupper(str_ireplace("'","",trim($JuzgadoresmuestrasDto->getactivo()))));
$JuzgadoresmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($JuzgadoresmuestrasDto->getfechaRegistro()))));
$JuzgadoresmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($JuzgadoresmuestrasDto->getfechaActualizacion()))));
return $JuzgadoresmuestrasDto;
}
public function selectJuzgadoresmuestras($JuzgadoresmuestrasDto,$proveedor=null){
$JuzgadoresmuestrasDto=$this->validarJuzgadoresmuestras($JuzgadoresmuestrasDto);
$JuzgadoresmuestrasDao = new JuzgadoresmuestrasDAO();
$JuzgadoresmuestrasDto = $JuzgadoresmuestrasDao->selectJuzgadoresmuestras($JuzgadoresmuestrasDto,$proveedor);
return $JuzgadoresmuestrasDto;
}
public function insertJuzgadoresmuestras($JuzgadoresmuestrasDto,$proveedor=null){
$JuzgadoresmuestrasDto=$this->validarJuzgadoresmuestras($JuzgadoresmuestrasDto);
$JuzgadoresmuestrasDao = new JuzgadoresmuestrasDAO();
$JuzgadoresmuestrasDto = $JuzgadoresmuestrasDao->insertJuzgadoresmuestras($JuzgadoresmuestrasDto,$proveedor);
return $JuzgadoresmuestrasDto;
}
public function updateJuzgadoresmuestras($JuzgadoresmuestrasDto,$proveedor=null){
$JuzgadoresmuestrasDto=$this->validarJuzgadoresmuestras($JuzgadoresmuestrasDto);
$JuzgadoresmuestrasDao = new JuzgadoresmuestrasDAO();
//$tmpDto = new JuzgadoresmuestrasDTO();
//$tmpDto = $JuzgadoresmuestrasDao->selectJuzgadoresmuestras($JuzgadoresmuestrasDto,$proveedor);
//if($tmpDto!=""){//$JuzgadoresmuestrasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$JuzgadoresmuestrasDto = $JuzgadoresmuestrasDao->updateJuzgadoresmuestras($JuzgadoresmuestrasDto,$proveedor);
return $JuzgadoresmuestrasDto;
//}
//return "";
}
public function deleteJuzgadoresmuestras($JuzgadoresmuestrasDto,$proveedor=null){
$JuzgadoresmuestrasDto=$this->validarJuzgadoresmuestras($JuzgadoresmuestrasDto);
$JuzgadoresmuestrasDao = new JuzgadoresmuestrasDAO();
$JuzgadoresmuestrasDto = $JuzgadoresmuestrasDao->deleteJuzgadoresmuestras($JuzgadoresmuestrasDto,$proveedor);
return $JuzgadoresmuestrasDto;
}
}
?>