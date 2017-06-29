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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/testigossexuales/TestigossexualesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/testigossexuales/TestigossexualesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TestigossexualesController {
private $proveedor;
public function __construct() {
}
public function validarTestigossexuales($TestigossexualesDto){
$TestigossexualesDto->setidTestigoSexual(strtoupper(str_ireplace("'","",trim($TestigossexualesDto->getidTestigoSexual()))));
$TestigossexualesDto->setidSexual(strtoupper(str_ireplace("'","",trim($TestigossexualesDto->getidSexual()))));
$TestigossexualesDto->setpaterno(strtoupper(str_ireplace("'","",trim($TestigossexualesDto->getpaterno()))));
$TestigossexualesDto->setmaterno(strtoupper(str_ireplace("'","",trim($TestigossexualesDto->getmaterno()))));
$TestigossexualesDto->setnombre(strtoupper(str_ireplace("'","",trim($TestigossexualesDto->getnombre()))));
$TestigossexualesDto->setcveGenero(strtoupper(str_ireplace("'","",trim($TestigossexualesDto->getcveGenero()))));
$TestigossexualesDto->setactivo(strtoupper(str_ireplace("'","",trim($TestigossexualesDto->getactivo()))));
$TestigossexualesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TestigossexualesDto->getfechaRegistro()))));
$TestigossexualesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TestigossexualesDto->getfechaActualizacion()))));
return $TestigossexualesDto;
}
public function selectTestigossexuales($TestigossexualesDto,$proveedor=null){
$TestigossexualesDto=$this->validarTestigossexuales($TestigossexualesDto);
$TestigossexualesDao = new TestigossexualesDAO();
$TestigossexualesDto = $TestigossexualesDao->selectTestigossexuales($TestigossexualesDto,$proveedor);
return $TestigossexualesDto;
}
public function insertTestigossexuales($TestigossexualesDto,$proveedor=null){
$TestigossexualesDto=$this->validarTestigossexuales($TestigossexualesDto);
$TestigossexualesDao = new TestigossexualesDAO();
$TestigossexualesDto = $TestigossexualesDao->insertTestigossexuales($TestigossexualesDto,$proveedor);
return $TestigossexualesDto;
}
public function updateTestigossexuales($TestigossexualesDto,$proveedor=null){
$TestigossexualesDto=$this->validarTestigossexuales($TestigossexualesDto);
$TestigossexualesDao = new TestigossexualesDAO();
//$tmpDto = new TestigossexualesDTO();
//$tmpDto = $TestigossexualesDao->selectTestigossexuales($TestigossexualesDto,$proveedor);
//if($tmpDto!=""){//$TestigossexualesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TestigossexualesDto = $TestigossexualesDao->updateTestigossexuales($TestigossexualesDto,$proveedor);
return $TestigossexualesDto;
//}
//return "";
}
public function deleteTestigossexuales($TestigossexualesDto,$proveedor=null){
$TestigossexualesDto=$this->validarTestigossexuales($TestigossexualesDto);
$TestigossexualesDao = new TestigossexualesDAO();
$TestigossexualesDto = $TestigossexualesDao->deleteTestigossexuales($TestigossexualesDto,$proveedor);
return $TestigossexualesDto;
}
}
?>