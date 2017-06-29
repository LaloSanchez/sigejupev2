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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estadospsicofisicos/EstadospsicofisicosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estadospsicofisicos/EstadospsicofisicosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstadospsicofisicosController {
private $proveedor;
public function __construct() {
}
public function validarEstadospsicofisicos($EstadospsicofisicosDto){
$EstadospsicofisicosDto->setcveEstadoPsicofisico(strtoupper(str_ireplace("'","",trim($EstadospsicofisicosDto->getcveEstadoPsicofisico()))));
$EstadospsicofisicosDto->setdesEstadoPsicofisico(strtoupper(str_ireplace("'","",trim($EstadospsicofisicosDto->getdesEstadoPsicofisico()))));
$EstadospsicofisicosDto->setactivo(strtoupper(str_ireplace("'","",trim($EstadospsicofisicosDto->getactivo()))));
$EstadospsicofisicosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstadospsicofisicosDto->getfechaRegistro()))));
$EstadospsicofisicosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstadospsicofisicosDto->getfechaActualizacion()))));
return $EstadospsicofisicosDto;
}
public function selectEstadospsicofisicos($EstadospsicofisicosDto,$proveedor=null){
$EstadospsicofisicosDto=$this->validarEstadospsicofisicos($EstadospsicofisicosDto);
$EstadospsicofisicosDao = new EstadospsicofisicosDAO();
$EstadospsicofisicosDto = $EstadospsicofisicosDao->selectEstadospsicofisicos($EstadospsicofisicosDto,$proveedor);
return $EstadospsicofisicosDto;
}
public function insertEstadospsicofisicos($EstadospsicofisicosDto,$proveedor=null){
$EstadospsicofisicosDto=$this->validarEstadospsicofisicos($EstadospsicofisicosDto);
$EstadospsicofisicosDao = new EstadospsicofisicosDAO();
$EstadospsicofisicosDto = $EstadospsicofisicosDao->insertEstadospsicofisicos($EstadospsicofisicosDto,$proveedor);
return $EstadospsicofisicosDto;
}
public function updateEstadospsicofisicos($EstadospsicofisicosDto,$proveedor=null){
$EstadospsicofisicosDto=$this->validarEstadospsicofisicos($EstadospsicofisicosDto);
$EstadospsicofisicosDao = new EstadospsicofisicosDAO();
//$tmpDto = new EstadospsicofisicosDTO();
//$tmpDto = $EstadospsicofisicosDao->selectEstadospsicofisicos($EstadospsicofisicosDto,$proveedor);
//if($tmpDto!=""){//$EstadospsicofisicosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstadospsicofisicosDto = $EstadospsicofisicosDao->updateEstadospsicofisicos($EstadospsicofisicosDto,$proveedor);
return $EstadospsicofisicosDto;
//}
//return "";
}
public function deleteEstadospsicofisicos($EstadospsicofisicosDto,$proveedor=null){
$EstadospsicofisicosDto=$this->validarEstadospsicofisicos($EstadospsicofisicosDto);
$EstadospsicofisicosDao = new EstadospsicofisicosDAO();
$EstadospsicofisicosDto = $EstadospsicofisicosDao->deleteEstadospsicofisicos($EstadospsicofisicosDto,$proveedor);
return $EstadospsicofisicosDto;
}
}
?>