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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ViolenciahomicidiosdolososController {
private $proveedor;
public function __construct() {
}
public function validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto){
$ViolenciahomicidiosdolososDto->setidViolenciaHomicidioDoloso(strtoupper(str_ireplace("'","",trim($ViolenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()))));
$ViolenciahomicidiosdolososDto->setidViolenciaDeGenero(strtoupper(str_ireplace("'","",trim($ViolenciahomicidiosdolososDto->getidViolenciaDeGenero()))));
$ViolenciahomicidiosdolososDto->setcveHomicidioDoloso(strtoupper(str_ireplace("'","",trim($ViolenciahomicidiosdolososDto->getcveHomicidioDoloso()))));
$ViolenciahomicidiosdolososDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ViolenciahomicidiosdolososDto->getfechaRegistro()))));
$ViolenciahomicidiosdolososDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ViolenciahomicidiosdolososDto->getfechaActualizacion()))));
return $ViolenciahomicidiosdolososDto;
}
public function selectViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto,$proveedor=null){
$ViolenciahomicidiosdolososDto=$this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
$ViolenciahomicidiosdolososDao = new ViolenciahomicidiosdolososDAO();
$ViolenciahomicidiosdolososDto = $ViolenciahomicidiosdolososDao->selectViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto,$proveedor);
return $ViolenciahomicidiosdolososDto;
}
public function insertViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto,$proveedor=null){
$ViolenciahomicidiosdolososDto=$this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
$ViolenciahomicidiosdolososDao = new ViolenciahomicidiosdolososDAO();
$ViolenciahomicidiosdolososDto = $ViolenciahomicidiosdolososDao->insertViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto,$proveedor);
return $ViolenciahomicidiosdolososDto;
}
public function updateViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto,$proveedor=null){
$ViolenciahomicidiosdolososDto=$this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
$ViolenciahomicidiosdolososDao = new ViolenciahomicidiosdolososDAO();
//$tmpDto = new ViolenciahomicidiosdolososDTO();
//$tmpDto = $ViolenciahomicidiosdolososDao->selectViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto,$proveedor);
//if($tmpDto!=""){//$ViolenciahomicidiosdolososDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ViolenciahomicidiosdolososDto = $ViolenciahomicidiosdolososDao->updateViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto,$proveedor);
return $ViolenciahomicidiosdolososDto;
//}
//return "";
}
public function deleteViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto,$proveedor=null){
$ViolenciahomicidiosdolososDto=$this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
$ViolenciahomicidiosdolososDao = new ViolenciahomicidiosdolososDAO();
$ViolenciahomicidiosdolososDto = $ViolenciahomicidiosdolososDao->deleteViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto,$proveedor);
return $ViolenciahomicidiosdolososDto;
}
}
?>