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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ViolenciafactoressocialescarpetasController {
private $proveedor;
public function __construct() {
}
public function validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto){
$ViolenciafactoressocialescarpetasDto->setidViolenciaFactorSocialCarpeta(strtoupper(str_ireplace("'","",trim($ViolenciafactoressocialescarpetasDto->getidViolenciaFactorSocialCarpeta()))));
$ViolenciafactoressocialescarpetasDto->setcveFactorCultural(strtoupper(str_ireplace("'","",trim($ViolenciafactoressocialescarpetasDto->getcveFactorCultural()))));
$ViolenciafactoressocialescarpetasDto->setidViolenciaDeGeneroCarpeta(strtoupper(str_ireplace("'","",trim($ViolenciafactoressocialescarpetasDto->getidViolenciaDeGeneroCarpeta()))));
$ViolenciafactoressocialescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ViolenciafactoressocialescarpetasDto->getfechaRegistro()))));
$ViolenciafactoressocialescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ViolenciafactoressocialescarpetasDto->getfechaActualizacion()))));
return $ViolenciafactoressocialescarpetasDto;
}
public function selectViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto,$proveedor=null){
$ViolenciafactoressocialescarpetasDto=$this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
$ViolenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
$ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasDao->selectViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto,$proveedor);
return $ViolenciafactoressocialescarpetasDto;
}
public function insertViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto,$proveedor=null){
$ViolenciafactoressocialescarpetasDto=$this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
$ViolenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
$ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasDao->insertViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto,$proveedor);
return $ViolenciafactoressocialescarpetasDto;
}
public function updateViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto,$proveedor=null){
$ViolenciafactoressocialescarpetasDto=$this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
$ViolenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
//$tmpDto = new ViolenciafactoressocialescarpetasDTO();
//$tmpDto = $ViolenciafactoressocialescarpetasDao->selectViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto,$proveedor);
//if($tmpDto!=""){//$ViolenciafactoressocialescarpetasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasDao->updateViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto,$proveedor);
return $ViolenciafactoressocialescarpetasDto;
//}
//return "";
}
public function deleteViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto,$proveedor=null){
$ViolenciafactoressocialescarpetasDto=$this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
$ViolenciafactoressocialescarpetasDao = new ViolenciafactoressocialescarpetasDAO();
$ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasDao->deleteViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto,$proveedor);
return $ViolenciafactoressocialescarpetasDto;
}
}
?>