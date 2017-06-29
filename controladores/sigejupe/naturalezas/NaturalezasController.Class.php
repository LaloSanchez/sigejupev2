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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/naturalezas/NaturalezasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/naturalezas/NaturalezasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class NaturalezasController {
private $proveedor;
public function __construct() {
}
public function validarNaturalezas($NaturalezasDto){
$NaturalezasDto->setcveNaturaleza(strtoupper(str_ireplace("'","",trim($NaturalezasDto->getcveNaturaleza()))));
$NaturalezasDto->setdesNaturaleza(strtoupper(str_ireplace("'","",trim($NaturalezasDto->getdesNaturaleza()))));
$NaturalezasDto->setactivo(strtoupper(str_ireplace("'","",trim($NaturalezasDto->getactivo()))));
$NaturalezasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($NaturalezasDto->getfechaRegistro()))));
$NaturalezasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($NaturalezasDto->getfechaActualizacion()))));
return $NaturalezasDto;
}
public function selectNaturalezas($NaturalezasDto,$proveedor=null){
$NaturalezasDto=$this->validarNaturalezas($NaturalezasDto);
$NaturalezasDao = new NaturalezasDAO();
$NaturalezasDto = $NaturalezasDao->selectNaturalezas($NaturalezasDto,$proveedor);
return $NaturalezasDto;
}
public function insertNaturalezas($NaturalezasDto,$proveedor=null){
$NaturalezasDto=$this->validarNaturalezas($NaturalezasDto);
$NaturalezasDao = new NaturalezasDAO();
$NaturalezasDto = $NaturalezasDao->insertNaturalezas($NaturalezasDto,$proveedor);
return $NaturalezasDto;
}
public function updateNaturalezas($NaturalezasDto,$proveedor=null){
$NaturalezasDto=$this->validarNaturalezas($NaturalezasDto);
$NaturalezasDao = new NaturalezasDAO();
//$tmpDto = new NaturalezasDTO();
//$tmpDto = $NaturalezasDao->selectNaturalezas($NaturalezasDto,$proveedor);
//if($tmpDto!=""){//$NaturalezasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$NaturalezasDto = $NaturalezasDao->updateNaturalezas($NaturalezasDto,$proveedor);
return $NaturalezasDto;
//}
//return "";
}
public function deleteNaturalezas($NaturalezasDto,$proveedor=null){
$NaturalezasDto=$this->validarNaturalezas($NaturalezasDto);
$NaturalezasDao = new NaturalezasDAO();
$NaturalezasDto = $NaturalezasDao->deleteNaturalezas($NaturalezasDto,$proveedor);
return $NaturalezasDto;
}
}
?>