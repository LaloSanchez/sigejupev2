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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadoresordenes/JuzgadoresordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/juzgadoresordenes/JuzgadoresordenesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class JuzgadoresordenesController {
private $proveedor;
public function __construct() {
}
public function validarJuzgadoresordenes($JuzgadoresordenesDto){
$JuzgadoresordenesDto->setidJuzgadorOrden(strtoupper(str_ireplace("'","",trim($JuzgadoresordenesDto->getidJuzgadorOrden()))));
$JuzgadoresordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'","",trim($JuzgadoresordenesDto->getidSolicitudOrden()))));
$JuzgadoresordenesDto->setidJuzgador(strtoupper(str_ireplace("'","",trim($JuzgadoresordenesDto->getidJuzgador()))));
$JuzgadoresordenesDto->setactivo(strtoupper(str_ireplace("'","",trim($JuzgadoresordenesDto->getactivo()))));
$JuzgadoresordenesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($JuzgadoresordenesDto->getfechaRegistro()))));
$JuzgadoresordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($JuzgadoresordenesDto->getfechaActualizacion()))));
return $JuzgadoresordenesDto;
}
public function selectJuzgadoresordenes($JuzgadoresordenesDto,$proveedor=null){
$JuzgadoresordenesDto=$this->validarJuzgadoresordenes($JuzgadoresordenesDto);
$JuzgadoresordenesDao = new JuzgadoresordenesDAO();
$JuzgadoresordenesDto = $JuzgadoresordenesDao->selectJuzgadoresordenes($JuzgadoresordenesDto,$proveedor);
return $JuzgadoresordenesDto;
}
public function insertJuzgadoresordenes($JuzgadoresordenesDto,$proveedor=null){
$JuzgadoresordenesDto=$this->validarJuzgadoresordenes($JuzgadoresordenesDto);
$JuzgadoresordenesDao = new JuzgadoresordenesDAO();
$JuzgadoresordenesDto = $JuzgadoresordenesDao->insertJuzgadoresordenes($JuzgadoresordenesDto,$proveedor);
return $JuzgadoresordenesDto;
}
public function updateJuzgadoresordenes($JuzgadoresordenesDto,$proveedor=null){
$JuzgadoresordenesDto=$this->validarJuzgadoresordenes($JuzgadoresordenesDto);
$JuzgadoresordenesDao = new JuzgadoresordenesDAO();
//$tmpDto = new JuzgadoresordenesDTO();
//$tmpDto = $JuzgadoresordenesDao->selectJuzgadoresordenes($JuzgadoresordenesDto,$proveedor);
//if($tmpDto!=""){//$JuzgadoresordenesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$JuzgadoresordenesDto = $JuzgadoresordenesDao->updateJuzgadoresordenes($JuzgadoresordenesDto,$proveedor);
return $JuzgadoresordenesDto;
//}
//return "";
}
public function deleteJuzgadoresordenes($JuzgadoresordenesDto,$proveedor=null){
$JuzgadoresordenesDto=$this->validarJuzgadoresordenes($JuzgadoresordenesDto);
$JuzgadoresordenesDao = new JuzgadoresordenesDAO();
$JuzgadoresordenesDto = $JuzgadoresordenesDao->deleteJuzgadoresordenes($JuzgadoresordenesDto,$proveedor);
return $JuzgadoresordenesDto;
}
}
?>