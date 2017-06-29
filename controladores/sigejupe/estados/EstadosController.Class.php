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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estados/EstadosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstadosController {
private $proveedor;
public function __construct() {
}
public function validarEstados($EstadosDto){
$EstadosDto->setcveEstado(strtoupper(str_ireplace("'","",trim($EstadosDto->getcveEstado()))));
$EstadosDto->setdesEstado(strtoupper(str_ireplace("'","",trim($EstadosDto->getdesEstado()))));
$EstadosDto->setactivo(strtoupper(str_ireplace("'","",trim($EstadosDto->getactivo()))));
$EstadosDto->setcvePais(strtoupper(str_ireplace("'","",trim($EstadosDto->getcvePais()))));
$EstadosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstadosDto->getfechaRegistro()))));
$EstadosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstadosDto->getfechaActualizacion()))));
return $EstadosDto;
}
public function selectEstados($EstadosDto,$proveedor=null){
$EstadosDto=$this->validarEstados($EstadosDto);
$EstadosDao = new EstadosDAO();
$EstadosDto = $EstadosDao->selectEstados($EstadosDto," ORDER BY desEstado ASC",$proveedor);
return $EstadosDto;
}
public function insertEstados($EstadosDto,$proveedor=null){
$EstadosDto=$this->validarEstados($EstadosDto);
$EstadosDao = new EstadosDAO();
$EstadosDto = $EstadosDao->insertEstados($EstadosDto,$proveedor);
return $EstadosDto;
}
public function updateEstados($EstadosDto,$proveedor=null){
$EstadosDto=$this->validarEstados($EstadosDto);
$EstadosDao = new EstadosDAO();
//$tmpDto = new EstadosDTO();
//$tmpDto = $EstadosDao->selectEstados($EstadosDto,$proveedor);
//if($tmpDto!=""){//$EstadosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstadosDto = $EstadosDao->updateEstados($EstadosDto,$proveedor);
return $EstadosDto;
//}
//return "";
}
public function deleteEstados($EstadosDto,$proveedor=null){
$EstadosDto=$this->validarEstados($EstadosDto);
$EstadosDao = new EstadosDAO();
$EstadosDto = $EstadosDao->deleteEstados($EstadosDto,$proveedor);
return $EstadosDto;
}
}
?>