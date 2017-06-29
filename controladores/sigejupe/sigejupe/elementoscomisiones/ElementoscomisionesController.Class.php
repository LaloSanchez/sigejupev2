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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/elementoscomisiones/ElementoscomisionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/elementoscomisiones/ElementoscomisionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ElementoscomisionesController {
private $proveedor;
public function __construct() {
}
public function validarElementoscomisiones($ElementoscomisionesDto){
$ElementoscomisionesDto->setcveElementoComision(strtoupper(str_ireplace("'","",trim($ElementoscomisionesDto->getcveElementoComision()))));
$ElementoscomisionesDto->setdesElementoComision(strtoupper(str_ireplace("'","",trim($ElementoscomisionesDto->getdesElementoComision()))));
$ElementoscomisionesDto->setactivo(strtoupper(str_ireplace("'","",trim($ElementoscomisionesDto->getactivo()))));
$ElementoscomisionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ElementoscomisionesDto->getfechaRegistro()))));
$ElementoscomisionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ElementoscomisionesDto->getfechaActualizacion()))));
return $ElementoscomisionesDto;
}
public function selectElementoscomisiones($ElementoscomisionesDto,$proveedor=null){
$ElementoscomisionesDto=$this->validarElementoscomisiones($ElementoscomisionesDto);
$ElementoscomisionesDao = new ElementoscomisionesDAO();
$ElementoscomisionesDto = $ElementoscomisionesDao->selectElementoscomisiones($ElementoscomisionesDto," ORDER BY desElementoComision ASC",$proveedor);
return $ElementoscomisionesDto;
}
public function insertElementoscomisiones($ElementoscomisionesDto,$proveedor=null){
$ElementoscomisionesDto=$this->validarElementoscomisiones($ElementoscomisionesDto);
$ElementoscomisionesDao = new ElementoscomisionesDAO();
$ElementoscomisionesDto = $ElementoscomisionesDao->insertElementoscomisiones($ElementoscomisionesDto,$proveedor);
return $ElementoscomisionesDto;
}
public function updateElementoscomisiones($ElementoscomisionesDto,$proveedor=null){
$ElementoscomisionesDto=$this->validarElementoscomisiones($ElementoscomisionesDto);
$ElementoscomisionesDao = new ElementoscomisionesDAO();
//$tmpDto = new ElementoscomisionesDTO();
//$tmpDto = $ElementoscomisionesDao->selectElementoscomisiones($ElementoscomisionesDto,$proveedor);
//if($tmpDto!=""){//$ElementoscomisionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ElementoscomisionesDto = $ElementoscomisionesDao->updateElementoscomisiones($ElementoscomisionesDto,$proveedor);
return $ElementoscomisionesDto;
//}
//return "";
}
public function deleteElementoscomisiones($ElementoscomisionesDto,$proveedor=null){
$ElementoscomisionesDto=$this->validarElementoscomisiones($ElementoscomisionesDto);
$ElementoscomisionesDao = new ElementoscomisionesDAO();
$ElementoscomisionesDto = $ElementoscomisionesDao->deleteElementoscomisiones($ElementoscomisionesDto,$proveedor);
return $ElementoscomisionesDto;
}
}
?>