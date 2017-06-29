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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/arbol/ArbolDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/arbol/ArbolDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class ArbolController {
private $proveedor;
public function __construct() {
}
public function validarArbol($ArbolDto){
$ArbolDto->setidArbol(strtoupper(str_ireplace("'","",trim($ArbolDto->getidArbol()))));
$ArbolDto->setidPadre(strtoupper(str_ireplace("'","",trim($ArbolDto->getidPadre()))));
$ArbolDto->setidHijo(strtoupper(str_ireplace("'","",trim($ArbolDto->getidHijo()))));
$ArbolDto->setcveTipoCarpeta(strtoupper(str_ireplace("'","",trim($ArbolDto->getcveTipoCarpeta()))));
$ArbolDto->setcveTipoActuacion(strtoupper(str_ireplace("'","",trim($ArbolDto->getcveTipoActuacion()))));
$ArbolDto->setactivo(strtoupper(str_ireplace("'","",trim($ArbolDto->getactivo()))));
$ArbolDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($ArbolDto->getfechaRegistro()))));
$ArbolDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($ArbolDto->getfechaActualizacion()))));
return $ArbolDto;
}
public function selectArbol($ArbolDto,$proveedor=null){
$ArbolDto=$this->validarArbol($ArbolDto);
$ArbolDao = new ArbolDAO();
$ArbolDto = $ArbolDao->selectArbol($ArbolDto,$proveedor);
return $ArbolDto;
}
public function insertArbol($ArbolDto,$proveedor=null){
$ArbolDto=$this->validarArbol($ArbolDto);
$ArbolDao = new ArbolDAO();
$ArbolDto = $ArbolDao->insertArbol($ArbolDto,$proveedor);
return $ArbolDto;
}
public function updateArbol($ArbolDto,$proveedor=null){
$ArbolDto=$this->validarArbol($ArbolDto);
$ArbolDao = new ArbolDAO();
//$tmpDto = new ArbolDTO();
//$tmpDto = $ArbolDao->selectArbol($ArbolDto,$proveedor);
//if($tmpDto!=""){//$ArbolDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$ArbolDto = $ArbolDao->updateArbol($ArbolDto,$proveedor);
return $ArbolDto;
//}
//return "";
}
public function deleteArbol($ArbolDto,$proveedor=null){
$ArbolDto=$this->validarArbol($ArbolDto);
$ArbolDao = new ArbolDAO();
$ArbolDto = $ArbolDao->deleteArbol($ArbolDto,$proveedor);
return $ArbolDto;
}
}
?>