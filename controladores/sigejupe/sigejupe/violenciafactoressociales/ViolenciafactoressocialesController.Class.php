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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/violenciafactoressociales/ViolenciafactoressocialesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/violenciafactoressociales/ViolenciafactoressocialesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ViolenciafactoressocialesController {
private $proveedor;
public function __construct() {
}
public function validarViolenciafactoressociales($ViolenciafactoressocialesDto){
$ViolenciafactoressocialesDto->setidViolenciaFactorSocial(strtoupper(str_ireplace("'","",trim($ViolenciafactoressocialesDto->getidViolenciaFactorSocial()))));
$ViolenciafactoressocialesDto->setcveFactorCultural(strtoupper(str_ireplace("'","",trim($ViolenciafactoressocialesDto->getcveFactorCultural()))));
$ViolenciafactoressocialesDto->setidViolenciaDeGenero(strtoupper(str_ireplace("'","",trim($ViolenciafactoressocialesDto->getidViolenciaDeGenero()))));
$ViolenciafactoressocialesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ViolenciafactoressocialesDto->getfechaRegistro()))));
$ViolenciafactoressocialesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ViolenciafactoressocialesDto->getfechaActualizacion()))));
return $ViolenciafactoressocialesDto;
}
public function selectViolenciafactoressociales($ViolenciafactoressocialesDto,$proveedor=null){
$ViolenciafactoressocialesDto=$this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
$ViolenciafactoressocialesDao = new ViolenciafactoressocialesDAO();
$ViolenciafactoressocialesDto = $ViolenciafactoressocialesDao->selectViolenciafactoressociales($ViolenciafactoressocialesDto,$proveedor);
return $ViolenciafactoressocialesDto;
}
public function insertViolenciafactoressociales($ViolenciafactoressocialesDto,$proveedor=null){
$ViolenciafactoressocialesDto=$this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
$ViolenciafactoressocialesDao = new ViolenciafactoressocialesDAO();
$ViolenciafactoressocialesDto = $ViolenciafactoressocialesDao->insertViolenciafactoressociales($ViolenciafactoressocialesDto,$proveedor);
return $ViolenciafactoressocialesDto;
}
public function updateViolenciafactoressociales($ViolenciafactoressocialesDto,$proveedor=null){
$ViolenciafactoressocialesDto=$this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
$ViolenciafactoressocialesDao = new ViolenciafactoressocialesDAO();
//$tmpDto = new ViolenciafactoressocialesDTO();
//$tmpDto = $ViolenciafactoressocialesDao->selectViolenciafactoressociales($ViolenciafactoressocialesDto,$proveedor);
//if($tmpDto!=""){//$ViolenciafactoressocialesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ViolenciafactoressocialesDto = $ViolenciafactoressocialesDao->updateViolenciafactoressociales($ViolenciafactoressocialesDto,$proveedor);
return $ViolenciafactoressocialesDto;
//}
//return "";
}
public function deleteViolenciafactoressociales($ViolenciafactoressocialesDto,$proveedor=null){
$ViolenciafactoressocialesDto=$this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
$ViolenciafactoressocialesDao = new ViolenciafactoressocialesDAO();
$ViolenciafactoressocialesDto = $ViolenciafactoressocialesDao->deleteViolenciafactoressociales($ViolenciafactoressocialesDto,$proveedor);
return $ViolenciafactoressocialesDto;
}
}
?>