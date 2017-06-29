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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/factoresculturales/FactoresculturalesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/factoresculturales/FactoresculturalesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class FactoresculturalesController {
private $proveedor;
public function __construct() {
}
public function validarFactoresculturales($FactoresculturalesDto){
$FactoresculturalesDto->setcveFactorCultural(strtoupper(str_ireplace("'","",trim($FactoresculturalesDto->getcveFactorCultural()))));
$FactoresculturalesDto->setdesFactorCultural(strtoupper(str_ireplace("'","",trim($FactoresculturalesDto->getdesFactorCultural()))));
$FactoresculturalesDto->setactivo(strtoupper(str_ireplace("'","",trim($FactoresculturalesDto->getactivo()))));
$FactoresculturalesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($FactoresculturalesDto->getfechaRegistro()))));
$FactoresculturalesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($FactoresculturalesDto->getfechaActualizacion()))));
return $FactoresculturalesDto;
}
public function selectFactoresculturales($FactoresculturalesDto,$proveedor=null){
$FactoresculturalesDto=$this->validarFactoresculturales($FactoresculturalesDto);
$FactoresculturalesDao = new FactoresculturalesDAO();
$FactoresculturalesDto = $FactoresculturalesDao->selectFactoresculturales($FactoresculturalesDto,$proveedor);
return $FactoresculturalesDto;
}
public function insertFactoresculturales($FactoresculturalesDto,$proveedor=null){
$FactoresculturalesDto=$this->validarFactoresculturales($FactoresculturalesDto);
$FactoresculturalesDao = new FactoresculturalesDAO();
$FactoresculturalesDto = $FactoresculturalesDao->insertFactoresculturales($FactoresculturalesDto,$proveedor);
return $FactoresculturalesDto;
}
public function updateFactoresculturales($FactoresculturalesDto,$proveedor=null){
$FactoresculturalesDto=$this->validarFactoresculturales($FactoresculturalesDto);
$FactoresculturalesDao = new FactoresculturalesDAO();
//$tmpDto = new FactoresculturalesDTO();
//$tmpDto = $FactoresculturalesDao->selectFactoresculturales($FactoresculturalesDto,$proveedor);
//if($tmpDto!=""){//$FactoresculturalesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$FactoresculturalesDto = $FactoresculturalesDao->updateFactoresculturales($FactoresculturalesDto,$proveedor);
return $FactoresculturalesDto;
//}
//return "";
}
public function deleteFactoresculturales($FactoresculturalesDto,$proveedor=null){
$FactoresculturalesDto=$this->validarFactoresculturales($FactoresculturalesDto);
$FactoresculturalesDao = new FactoresculturalesDAO();
$FactoresculturalesDto = $FactoresculturalesDao->deleteFactoresculturales($FactoresculturalesDto,$proveedor);
return $FactoresculturalesDto;
}
}
?>