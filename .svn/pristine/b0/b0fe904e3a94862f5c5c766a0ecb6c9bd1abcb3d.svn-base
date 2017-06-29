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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/clasificacionesdelitos/ClasificacionesdelitosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/clasificacionesdelitos/ClasificacionesdelitosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ClasificacionesdelitosController {
private $proveedor;
public function __construct() {
}
public function validarClasificacionesdelitos($ClasificacionesdelitosDto){
$ClasificacionesdelitosDto->setcveClasificacionDelito(strtoupper(str_ireplace("'","",trim($ClasificacionesdelitosDto->getcveClasificacionDelito()))));
$ClasificacionesdelitosDto->setdesClasificacionDelito(strtoupper(str_ireplace("'","",trim($ClasificacionesdelitosDto->getdesClasificacionDelito()))));
$ClasificacionesdelitosDto->setactivo(strtoupper(str_ireplace("'","",trim($ClasificacionesdelitosDto->getactivo()))));
$ClasificacionesdelitosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ClasificacionesdelitosDto->getfechaRegistro()))));
$ClasificacionesdelitosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ClasificacionesdelitosDto->getfechaActualizacion()))));
return $ClasificacionesdelitosDto;
}
public function selectClasificacionesdelitos($ClasificacionesdelitosDto,$proveedor=null){
$ClasificacionesdelitosDto=$this->validarClasificacionesdelitos($ClasificacionesdelitosDto);
$ClasificacionesdelitosDao = new ClasificacionesdelitosDAO();
$ClasificacionesdelitosDto = $ClasificacionesdelitosDao->selectClasificacionesdelitos($ClasificacionesdelitosDto," ORDER BY desClasificacionDelito ASC",$proveedor);
return $ClasificacionesdelitosDto;
}
public function insertClasificacionesdelitos($ClasificacionesdelitosDto,$proveedor=null){
$ClasificacionesdelitosDto=$this->validarClasificacionesdelitos($ClasificacionesdelitosDto);
$ClasificacionesdelitosDao = new ClasificacionesdelitosDAO();
$ClasificacionesdelitosDto = $ClasificacionesdelitosDao->insertClasificacionesdelitos($ClasificacionesdelitosDto,$proveedor);
return $ClasificacionesdelitosDto;
}
public function updateClasificacionesdelitos($ClasificacionesdelitosDto,$proveedor=null){
$ClasificacionesdelitosDto=$this->validarClasificacionesdelitos($ClasificacionesdelitosDto);
$ClasificacionesdelitosDao = new ClasificacionesdelitosDAO();
//$tmpDto = new ClasificacionesdelitosDTO();
//$tmpDto = $ClasificacionesdelitosDao->selectClasificacionesdelitos($ClasificacionesdelitosDto,$proveedor);
//if($tmpDto!=""){//$ClasificacionesdelitosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ClasificacionesdelitosDto = $ClasificacionesdelitosDao->updateClasificacionesdelitos($ClasificacionesdelitosDto,$proveedor);
return $ClasificacionesdelitosDto;
//}
//return "";
}
public function deleteClasificacionesdelitos($ClasificacionesdelitosDto,$proveedor=null){
$ClasificacionesdelitosDto=$this->validarClasificacionesdelitos($ClasificacionesdelitosDto);
$ClasificacionesdelitosDao = new ClasificacionesdelitosDAO();
$ClasificacionesdelitosDto = $ClasificacionesdelitosDao->deleteClasificacionesdelitos($ClasificacionesdelitosDto,$proveedor);
return $ClasificacionesdelitosDto;
}
}
?>