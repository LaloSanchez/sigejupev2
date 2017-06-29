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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposefectos/TiposefectosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposefectos/TiposefectosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposefectosController {
private $proveedor;
public function __construct() {
}
public function validarTiposefectos($TiposefectosDto){
$TiposefectosDto->setcveEfecto(strtoupper(str_ireplace("'","",trim($TiposefectosDto->getcveEfecto()))));
$TiposefectosDto->setdesEfecto(strtoupper(str_ireplace("'","",trim($TiposefectosDto->getdesEfecto()))));
$TiposefectosDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposefectosDto->getactivo()))));
$TiposefectosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposefectosDto->getfechaRegistro()))));
$TiposefectosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposefectosDto->getfechaActualizacion()))));
return $TiposefectosDto;
}
public function selectTiposefectos($TiposefectosDto,$orden,$proveedor=null){
$TiposefectosDto=$this->validarTiposefectos($TiposefectosDto);
$TiposefectosDao = new TiposefectosDAO();
$TiposefectosDto = $TiposefectosDao->selectTiposefectos($TiposefectosDto,$orden,$proveedor);
return $TiposefectosDto;
}
public function insertTiposefectos($TiposefectosDto,$proveedor=null){
$TiposefectosDto=$this->validarTiposefectos($TiposefectosDto);
$TiposefectosDao = new TiposefectosDAO();
$TiposefectosDto = $TiposefectosDao->insertTiposefectos($TiposefectosDto,$proveedor);
return $TiposefectosDto;
}
public function updateTiposefectos($TiposefectosDto,$proveedor=null){
$TiposefectosDto=$this->validarTiposefectos($TiposefectosDto);
$TiposefectosDao = new TiposefectosDAO();
//$tmpDto = new TiposefectosDTO();
//$tmpDto = $TiposefectosDao->selectTiposefectos($TiposefectosDto,$proveedor);
//if($tmpDto!=""){//$TiposefectosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposefectosDto = $TiposefectosDao->updateTiposefectos($TiposefectosDto,$proveedor);
return $TiposefectosDto;
//}
//return "";
}
public function deleteTiposefectos($TiposefectosDto,$proveedor=null){
$TiposefectosDto=$this->validarTiposefectos($TiposefectosDto);
$TiposefectosDao = new TiposefectosDAO();
$TiposefectosDto = $TiposefectosDao->deleteTiposefectos($TiposefectosDto,$proveedor);
return $TiposefectosDto;
}
}
?>