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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/clasificacionesdelitosorden/ClasificacionesdelitosordenDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/clasificacionesdelitosorden/ClasificacionesdelitosordenDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ClasificacionesdelitosordenController {
private $proveedor;
public function __construct() {
}
public function validarClasificacionesdelitosorden($ClasificacionesdelitosordenDto){
$ClasificacionesdelitosordenDto->setcveClasificacionDelitoOrden(strtoupper(str_ireplace("'","",trim($ClasificacionesdelitosordenDto->getcveClasificacionDelitoOrden()))));
$ClasificacionesdelitosordenDto->setdesClasificacionDelitoOrden(strtoupper(str_ireplace("'","",trim($ClasificacionesdelitosordenDto->getdesClasificacionDelitoOrden()))));
$ClasificacionesdelitosordenDto->setactivo(strtoupper(str_ireplace("'","",trim($ClasificacionesdelitosordenDto->getactivo()))));
$ClasificacionesdelitosordenDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ClasificacionesdelitosordenDto->getfechaRegistro()))));
$ClasificacionesdelitosordenDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ClasificacionesdelitosordenDto->getfechaActualizacion()))));
return $ClasificacionesdelitosordenDto;
}
public function selectClasificacionesdelitosorden($ClasificacionesdelitosordenDto,$proveedor=null){
$ClasificacionesdelitosordenDto=$this->validarClasificacionesdelitosorden($ClasificacionesdelitosordenDto);
$ClasificacionesdelitosordenDao = new ClasificacionesdelitosordenDAO();
$ClasificacionesdelitosordenDto = $ClasificacionesdelitosordenDao->selectClasificacionesdelitosorden($ClasificacionesdelitosordenDto," ORDER BY desClasificacionDelitoOrden ASC",$proveedor);
return $ClasificacionesdelitosordenDto;
}
public function insertClasificacionesdelitosorden($ClasificacionesdelitosordenDto,$proveedor=null){
$ClasificacionesdelitosordenDto=$this->validarClasificacionesdelitosorden($ClasificacionesdelitosordenDto);
$ClasificacionesdelitosordenDao = new ClasificacionesdelitosordenDAO();
$ClasificacionesdelitosordenDto = $ClasificacionesdelitosordenDao->insertClasificacionesdelitosorden($ClasificacionesdelitosordenDto,$proveedor);
return $ClasificacionesdelitosordenDto;
}
public function updateClasificacionesdelitosorden($ClasificacionesdelitosordenDto,$proveedor=null){
$ClasificacionesdelitosordenDto=$this->validarClasificacionesdelitosorden($ClasificacionesdelitosordenDto);
$ClasificacionesdelitosordenDao = new ClasificacionesdelitosordenDAO();
//$tmpDto = new ClasificacionesdelitosordenDTO();
//$tmpDto = $ClasificacionesdelitosordenDao->selectClasificacionesdelitosorden($ClasificacionesdelitosordenDto,$proveedor);
//if($tmpDto!=""){//$ClasificacionesdelitosordenDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ClasificacionesdelitosordenDto = $ClasificacionesdelitosordenDao->updateClasificacionesdelitosorden($ClasificacionesdelitosordenDto,$proveedor);
return $ClasificacionesdelitosordenDto;
//}
//return "";
}
public function deleteClasificacionesdelitosorden($ClasificacionesdelitosordenDto,$proveedor=null){
$ClasificacionesdelitosordenDto=$this->validarClasificacionesdelitosorden($ClasificacionesdelitosordenDto);
$ClasificacionesdelitosordenDao = new ClasificacionesdelitosordenDAO();
$ClasificacionesdelitosordenDto = $ClasificacionesdelitosordenDao->deleteClasificacionesdelitosorden($ClasificacionesdelitosordenDto,$proveedor);
return $ClasificacionesdelitosordenDto;
}
}
?>