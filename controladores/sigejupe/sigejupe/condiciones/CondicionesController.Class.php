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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/condiciones/CondicionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/condiciones/CondicionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class CondicionesController {
private $proveedor;
public function __construct() {
}
public function validarCondiciones($CondicionesDto){
$CondicionesDto->setcveCondicion(strtoupper(str_ireplace("'","",trim($CondicionesDto->getcveCondicion()))));
$CondicionesDto->setdesCondicion(strtoupper(str_ireplace("'","",trim($CondicionesDto->getdesCondicion()))));
$CondicionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($CondicionesDto->getfechaRegistro()))));
$CondicionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($CondicionesDto->getfechaActualizacion()))));
return $CondicionesDto;
}
public function selectCondiciones($CondicionesDto,$proveedor=null){
$CondicionesDto=$this->validarCondiciones($CondicionesDto);
$CondicionesDao = new CondicionesDAO();
$CondicionesDto = $CondicionesDao->selectCondiciones($CondicionesDto,$proveedor);
return $CondicionesDto;
}
public function insertCondiciones($CondicionesDto,$proveedor=null){
$CondicionesDto=$this->validarCondiciones($CondicionesDto);
$CondicionesDao = new CondicionesDAO();
$CondicionesDto = $CondicionesDao->insertCondiciones($CondicionesDto,$proveedor);
return $CondicionesDto;
}
public function updateCondiciones($CondicionesDto,$proveedor=null){
$CondicionesDto=$this->validarCondiciones($CondicionesDto);
$CondicionesDao = new CondicionesDAO();
//$tmpDto = new CondicionesDTO();
//$tmpDto = $CondicionesDao->selectCondiciones($CondicionesDto,$proveedor);
//if($tmpDto!=""){//$CondicionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$CondicionesDto = $CondicionesDao->updateCondiciones($CondicionesDto,$proveedor);
return $CondicionesDto;
//}
//return "";
}
public function deleteCondiciones($CondicionesDto,$proveedor=null){
$CondicionesDto=$this->validarCondiciones($CondicionesDto);
$CondicionesDao = new CondicionesDAO();
$CondicionesDto = $CondicionesDao->deleteCondiciones($CondicionesDto,$proveedor);
return $CondicionesDto;
}
}
?>