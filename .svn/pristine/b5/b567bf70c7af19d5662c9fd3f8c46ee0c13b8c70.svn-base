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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/paises/PaisesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class PaisesController {
private $proveedor;
public function __construct() {
}
public function validarPaises($PaisesDto){
$PaisesDto->setcvePais(strtoupper(str_ireplace("'","",trim($PaisesDto->getcvePais()))));
$PaisesDto->setcveRegionMundial(strtoupper(str_ireplace("'","",trim($PaisesDto->getcveRegionMundial()))));
$PaisesDto->setdesPais(strtoupper(str_ireplace("'","",trim($PaisesDto->getdesPais()))));
$PaisesDto->setactivo(strtoupper(str_ireplace("'","",trim($PaisesDto->getactivo()))));
$PaisesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($PaisesDto->getfechaRegistro()))));
$PaisesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($PaisesDto->getfechaActualizacion()))));
return $PaisesDto;
}
public function selectPaises($PaisesDto,$proveedor=null){
$PaisesDto=$this->validarPaises($PaisesDto);
$PaisesDao = new PaisesDAO();
$PaisesDto = $PaisesDao->selectPaises($PaisesDto,$proveedor);
return $PaisesDto;
}
public function insertPaises($PaisesDto,$proveedor=null){
$PaisesDto=$this->validarPaises($PaisesDto);
$PaisesDao = new PaisesDAO();
$PaisesDto = $PaisesDao->insertPaises($PaisesDto,$proveedor);
return $PaisesDto;
}
public function updatePaises($PaisesDto,$proveedor=null){
$PaisesDto=$this->validarPaises($PaisesDto);
$PaisesDao = new PaisesDAO();
//$tmpDto = new PaisesDTO();
//$tmpDto = $PaisesDao->selectPaises($PaisesDto,$proveedor);
//if($tmpDto!=""){//$PaisesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$PaisesDto = $PaisesDao->updatePaises($PaisesDto,$proveedor);
return $PaisesDto;
//}
//return "";
}
public function deletePaises($PaisesDto,$proveedor=null){
$PaisesDto=$this->validarPaises($PaisesDto);
$PaisesDao = new PaisesDAO();
$PaisesDto = $PaisesDao->deletePaises($PaisesDto,$proveedor);
return $PaisesDto;
}
}
?>