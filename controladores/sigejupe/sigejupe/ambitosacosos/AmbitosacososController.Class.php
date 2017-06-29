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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ambitosacosos/AmbitosacososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/ambitosacosos/AmbitosacososDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class AmbitosacososController {
private $proveedor;
public function __construct() {
}
public function validarAmbitosacosos($AmbitosacososDto){
$AmbitosacososDto->setcveAmbitoAcoso(strtoupper(str_ireplace("'","",trim($AmbitosacososDto->getcveAmbitoAcoso()))));
$AmbitosacososDto->setdesAmbitoAcoso(strtoupper(str_ireplace("'","",trim($AmbitosacososDto->getdesAmbitoAcoso()))));
$AmbitosacososDto->setactivo(strtoupper(str_ireplace("'","",trim($AmbitosacososDto->getactivo()))));
$AmbitosacososDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($AmbitosacososDto->getfechaRegistro()))));
$AmbitosacososDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($AmbitosacososDto->getfechaActualizacion()))));
return $AmbitosacososDto;
}
public function selectAmbitosacosos($AmbitosacososDto,$proveedor=null){
$AmbitosacososDto=$this->validarAmbitosacosos($AmbitosacososDto);
$AmbitosacososDao = new AmbitosacososDAO();
$AmbitosacososDto = $AmbitosacososDao->selectAmbitosacosos($AmbitosacososDto,$proveedor);
return $AmbitosacososDto;
}
public function insertAmbitosacosos($AmbitosacososDto,$proveedor=null){
$AmbitosacososDto=$this->validarAmbitosacosos($AmbitosacososDto);
$AmbitosacososDao = new AmbitosacososDAO();
$AmbitosacososDto = $AmbitosacososDao->insertAmbitosacosos($AmbitosacososDto,$proveedor);
return $AmbitosacososDto;
}
public function updateAmbitosacosos($AmbitosacososDto,$proveedor=null){
$AmbitosacososDto=$this->validarAmbitosacosos($AmbitosacososDto);
$AmbitosacososDao = new AmbitosacososDAO();
//$tmpDto = new AmbitosacososDTO();
//$tmpDto = $AmbitosacososDao->selectAmbitosacosos($AmbitosacososDto,$proveedor);
//if($tmpDto!=""){//$AmbitosacososDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$AmbitosacososDto = $AmbitosacososDao->updateAmbitosacosos($AmbitosacososDto,$proveedor);
return $AmbitosacososDto;
//}
//return "";
}
public function deleteAmbitosacosos($AmbitosacososDto,$proveedor=null){
$AmbitosacososDto=$this->validarAmbitosacosos($AmbitosacososDto);
$AmbitosacososDao = new AmbitosacososDAO();
$AmbitosacososDto = $AmbitosacososDao->deleteAmbitosacosos($AmbitosacososDto,$proveedor);
return $AmbitosacososDto;
}
}
?>