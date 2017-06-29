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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/convivencias/ConvivenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/convivencias/ConvivenciasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ConvivenciasController {
private $proveedor;
public function __construct() {
}
public function validarConvivencias($ConvivenciasDto){
$ConvivenciasDto->setcveConvivencia(strtoupper(str_ireplace("'","",trim($ConvivenciasDto->getcveConvivencia()))));
$ConvivenciasDto->setdesConvivencia(strtoupper(str_ireplace("'","",trim($ConvivenciasDto->getdesConvivencia()))));
$ConvivenciasDto->setactivo(strtoupper(str_ireplace("'","",trim($ConvivenciasDto->getactivo()))));
$ConvivenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ConvivenciasDto->getfechaRegistro()))));
$ConvivenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ConvivenciasDto->getfechaActualizacion()))));
return $ConvivenciasDto;
}
public function selectConvivencias($ConvivenciasDto,$proveedor=null){
$ConvivenciasDto=$this->validarConvivencias($ConvivenciasDto);
$ConvivenciasDao = new ConvivenciasDAO();
$ConvivenciasDto = $ConvivenciasDao->selectConvivencias($ConvivenciasDto,$proveedor);
return $ConvivenciasDto;
}
public function insertConvivencias($ConvivenciasDto,$proveedor=null){
$ConvivenciasDto=$this->validarConvivencias($ConvivenciasDto);
$ConvivenciasDao = new ConvivenciasDAO();
$ConvivenciasDto = $ConvivenciasDao->insertConvivencias($ConvivenciasDto,$proveedor);
return $ConvivenciasDto;
}
public function updateConvivencias($ConvivenciasDto,$proveedor=null){
$ConvivenciasDto=$this->validarConvivencias($ConvivenciasDto);
$ConvivenciasDao = new ConvivenciasDAO();
//$tmpDto = new ConvivenciasDTO();
//$tmpDto = $ConvivenciasDao->selectConvivencias($ConvivenciasDto,$proveedor);
//if($tmpDto!=""){//$ConvivenciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ConvivenciasDto = $ConvivenciasDao->updateConvivencias($ConvivenciasDto,$proveedor);
return $ConvivenciasDto;
//}
//return "";
}
public function deleteConvivencias($ConvivenciasDto,$proveedor=null){
$ConvivenciasDto=$this->validarConvivencias($ConvivenciasDto);
$ConvivenciasDao = new ConvivenciasDAO();
$ConvivenciasDto = $ConvivenciasDao->deleteConvivencias($ConvivenciasDto,$proveedor);
return $ConvivenciasDto;
}
}
?>