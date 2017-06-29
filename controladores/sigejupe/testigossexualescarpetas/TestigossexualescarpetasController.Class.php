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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/testigossexualescarpetas/TestigossexualescarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TestigossexualescarpetasController {
private $proveedor;
public function __construct() {
}
public function validarTestigossexualescarpetas($TestigossexualescarpetasDto){
$TestigossexualescarpetasDto->setidTestigoSexualCarpeta(strtoupper(str_ireplace("'","",trim($TestigossexualescarpetasDto->getidTestigoSexualCarpeta()))));
$TestigossexualescarpetasDto->setidSexualCarpeta(strtoupper(str_ireplace("'","",trim($TestigossexualescarpetasDto->getidSexualCarpeta()))));
$TestigossexualescarpetasDto->setpaterno(strtoupper(str_ireplace("'","",trim($TestigossexualescarpetasDto->getpaterno()))));
$TestigossexualescarpetasDto->setmaterno(strtoupper(str_ireplace("'","",trim($TestigossexualescarpetasDto->getmaterno()))));
$TestigossexualescarpetasDto->setnombre(strtoupper(str_ireplace("'","",trim($TestigossexualescarpetasDto->getnombre()))));
$TestigossexualescarpetasDto->setcveGenero(strtoupper(str_ireplace("'","",trim($TestigossexualescarpetasDto->getcveGenero()))));
$TestigossexualescarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim($TestigossexualescarpetasDto->getactivo()))));
$TestigossexualescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TestigossexualescarpetasDto->getfechaRegistro()))));
$TestigossexualescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TestigossexualescarpetasDto->getfechaActualizacion()))));
return $TestigossexualescarpetasDto;
}
public function selectTestigossexualescarpetas($TestigossexualescarpetasDto,$proveedor=null){
$TestigossexualescarpetasDto=$this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
$TestigossexualescarpetasDao = new TestigossexualescarpetasDAO();
$TestigossexualescarpetasDto = $TestigossexualescarpetasDao->selectTestigossexualescarpetas($TestigossexualescarpetasDto,$proveedor);
return $TestigossexualescarpetasDto;
}
public function insertTestigossexualescarpetas($TestigossexualescarpetasDto,$proveedor=null){
$TestigossexualescarpetasDto=$this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
$TestigossexualescarpetasDao = new TestigossexualescarpetasDAO();
$TestigossexualescarpetasDto = $TestigossexualescarpetasDao->insertTestigossexualescarpetas($TestigossexualescarpetasDto,$proveedor);
return $TestigossexualescarpetasDto;
}
public function updateTestigossexualescarpetas($TestigossexualescarpetasDto,$proveedor=null){
$TestigossexualescarpetasDto=$this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
$TestigossexualescarpetasDao = new TestigossexualescarpetasDAO();
//$tmpDto = new TestigossexualescarpetasDTO();
//$tmpDto = $TestigossexualescarpetasDao->selectTestigossexualescarpetas($TestigossexualescarpetasDto,$proveedor);
//if($tmpDto!=""){//$TestigossexualescarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TestigossexualescarpetasDto = $TestigossexualescarpetasDao->updateTestigossexualescarpetas($TestigossexualescarpetasDto,$proveedor);
return $TestigossexualescarpetasDto;
//}
//return "";
}
public function deleteTestigossexualescarpetas($TestigossexualescarpetasDto,$proveedor=null){
$TestigossexualescarpetasDto=$this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
$TestigossexualescarpetasDao = new TestigossexualescarpetasDAO();
$TestigossexualescarpetasDto = $TestigossexualescarpetasDao->deleteTestigossexualescarpetas($TestigossexualescarpetasDto,$proveedor);
return $TestigossexualescarpetasDto;
}
}
?>