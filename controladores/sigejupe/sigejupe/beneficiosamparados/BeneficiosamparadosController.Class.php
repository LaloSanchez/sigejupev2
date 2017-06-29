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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/beneficiosamparados/BeneficiosamparadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/beneficiosamparados/BeneficiosamparadosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class BeneficiosamparadosController {
private $proveedor;
public function __construct() {
}
public function validarBeneficiosamparados($BeneficiosamparadosDto){
$BeneficiosamparadosDto->setidBeneficioAmparado(strtoupper(str_ireplace("'","",trim($BeneficiosamparadosDto->getidBeneficioAmparado()))));
$BeneficiosamparadosDto->setidBeneficioES(strtoupper(str_ireplace("'","",trim($BeneficiosamparadosDto->getidBeneficioES()))));
$BeneficiosamparadosDto->setNumAmparo(strtoupper(str_ireplace("'","",trim($BeneficiosamparadosDto->getNumAmparo()))));
$BeneficiosamparadosDto->setAniAmparo(strtoupper(str_ireplace("'","",trim($BeneficiosamparadosDto->getAniAmparo()))));
$BeneficiosamparadosDto->setCveJuzgado(strtoupper(str_ireplace("'","",trim($BeneficiosamparadosDto->getCveJuzgado()))));
$BeneficiosamparadosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($BeneficiosamparadosDto->getfechaRegistro()))));
$BeneficiosamparadosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($BeneficiosamparadosDto->getfechaActualizacion()))));
return $BeneficiosamparadosDto;
}
public function selectBeneficiosamparados($BeneficiosamparadosDto,$proveedor=null){
$BeneficiosamparadosDto=$this->validarBeneficiosamparados($BeneficiosamparadosDto);
$BeneficiosamparadosDao = new BeneficiosamparadosDAO();
$BeneficiosamparadosDto = $BeneficiosamparadosDao->selectBeneficiosamparados($BeneficiosamparadosDto,$proveedor);
return $BeneficiosamparadosDto;
}
public function insertBeneficiosamparados($BeneficiosamparadosDto,$proveedor=null){
$BeneficiosamparadosDto=$this->validarBeneficiosamparados($BeneficiosamparadosDto);
$BeneficiosamparadosDao = new BeneficiosamparadosDAO();
$BeneficiosamparadosDto = $BeneficiosamparadosDao->insertBeneficiosamparados($BeneficiosamparadosDto,$proveedor);
return $BeneficiosamparadosDto;
}
public function updateBeneficiosamparados($BeneficiosamparadosDto,$proveedor=null){
$BeneficiosamparadosDto=$this->validarBeneficiosamparados($BeneficiosamparadosDto);
$BeneficiosamparadosDao = new BeneficiosamparadosDAO();
//$tmpDto = new BeneficiosamparadosDTO();
//$tmpDto = $BeneficiosamparadosDao->selectBeneficiosamparados($BeneficiosamparadosDto,$proveedor);
//if($tmpDto!=""){//$BeneficiosamparadosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$BeneficiosamparadosDto = $BeneficiosamparadosDao->updateBeneficiosamparados($BeneficiosamparadosDto,$proveedor);
return $BeneficiosamparadosDto;
//}
//return "";
}
public function deleteBeneficiosamparados($BeneficiosamparadosDto,$proveedor=null){
$BeneficiosamparadosDto=$this->validarBeneficiosamparados($BeneficiosamparadosDto);
$BeneficiosamparadosDao = new BeneficiosamparadosDAO();
$BeneficiosamparadosDto = $BeneficiosamparadosDao->deleteBeneficiosamparados($BeneficiosamparadosDto,$proveedor);
return $BeneficiosamparadosDto;
}
}
?>