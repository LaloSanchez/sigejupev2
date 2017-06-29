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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/detallesefectos/DetallesefectosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/detallesefectos/DetallesefectosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class DetallesefectosController {
private $proveedor;
public function __construct() {
}
public function validarDetallesefectos($DetallesefectosDto){
$DetallesefectosDto->setcveDetalleEfecto(strtoupper(str_ireplace("'","",trim($DetallesefectosDto->getcveDetalleEfecto()))));
$DetallesefectosDto->setcveEfecto(strtoupper(str_ireplace("'","",trim($DetallesefectosDto->getcveEfecto()))));
$DetallesefectosDto->setcveDelito(strtoupper(str_ireplace("'","",trim($DetallesefectosDto->getcveDelito()))));
$DetallesefectosDto->setdesDetalleEfecto(strtoupper(str_ireplace("'","",trim($DetallesefectosDto->getdesDetalleEfecto()))));
$DetallesefectosDto->setactivo(strtoupper(str_ireplace("'","",trim($DetallesefectosDto->getactivo()))));
$DetallesefectosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($DetallesefectosDto->getfechaRegistro()))));
$DetallesefectosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($DetallesefectosDto->getfechaActualizacion()))));
return $DetallesefectosDto;
}
public function selectDetallesefectos($DetallesefectosDto,$proveedor=null){
$DetallesefectosDto=$this->validarDetallesefectos($DetallesefectosDto);
$DetallesefectosDao = new DetallesefectosDAO();
$DetallesefectosDto = $DetallesefectosDao->selectDetallesefectos($DetallesefectosDto,$proveedor);
return $DetallesefectosDto;
}
public function insertDetallesefectos($DetallesefectosDto,$proveedor=null){
$DetallesefectosDto=$this->validarDetallesefectos($DetallesefectosDto);
$DetallesefectosDao = new DetallesefectosDAO();
$DetallesefectosDto = $DetallesefectosDao->insertDetallesefectos($DetallesefectosDto,$proveedor);
return $DetallesefectosDto;
}
public function updateDetallesefectos($DetallesefectosDto,$proveedor=null){
$DetallesefectosDto=$this->validarDetallesefectos($DetallesefectosDto);
$DetallesefectosDao = new DetallesefectosDAO();
//$tmpDto = new DetallesefectosDTO();
//$tmpDto = $DetallesefectosDao->selectDetallesefectos($DetallesefectosDto,$proveedor);
//if($tmpDto!=""){//$DetallesefectosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$DetallesefectosDto = $DetallesefectosDao->updateDetallesefectos($DetallesefectosDto,$proveedor);
return $DetallesefectosDto;
//}
//return "";
}
public function deleteDetallesefectos($DetallesefectosDto,$proveedor=null){
$DetallesefectosDto=$this->validarDetallesefectos($DetallesefectosDto);
$DetallesefectosDao = new DetallesefectosDAO();
$DetallesefectosDto = $DetallesefectosDao->deleteDetallesefectos($DetallesefectosDto,$proveedor);
return $DetallesefectosDto;
}
}
?>