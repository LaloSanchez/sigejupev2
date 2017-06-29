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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/remisionapelacionesimputados/RemisionapelacionesimputadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/remisionapelacionesimputados/RemisionapelacionesimputadosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class RemisionapelacionesimputadosController {
private $proveedor;
public function __construct() {
}
public function validarRemisionapelacionesimputados($RemisionapelacionesimputadosDto){
$RemisionapelacionesimputadosDto->setidRemisionApelacionImp(strtoupper(str_ireplace("'","",trim($RemisionapelacionesimputadosDto->getidRemisionApelacionImp()))));
$RemisionapelacionesimputadosDto->setidRemisionApelacion(strtoupper(str_ireplace("'","",trim($RemisionapelacionesimputadosDto->getidRemisionApelacion()))));
$RemisionapelacionesimputadosDto->setidimpOfeDelCarpeta(strtoupper(str_ireplace("'","",trim($RemisionapelacionesimputadosDto->getidimpOfeDelCarpeta()))));
$RemisionapelacionesimputadosDto->setcveConsignacion(strtoupper(str_ireplace("'","",trim($RemisionapelacionesimputadosDto->getcveConsignacion()))));
$RemisionapelacionesimputadosDto->setactivo(strtoupper(str_ireplace("'","",trim($RemisionapelacionesimputadosDto->getactivo()))));
$RemisionapelacionesimputadosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($RemisionapelacionesimputadosDto->getfechaRegistro()))));
$RemisionapelacionesimputadosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($RemisionapelacionesimputadosDto->getfechaActualizacion()))));
return $RemisionapelacionesimputadosDto;
}
public function selectRemisionapelacionesimputados($RemisionapelacionesimputadosDto,$proveedor=null){
$RemisionapelacionesimputadosDto=$this->validarRemisionapelacionesimputados($RemisionapelacionesimputadosDto);
$RemisionapelacionesimputadosDao = new RemisionapelacionesimputadosDAO();
$RemisionapelacionesimputadosDto = $RemisionapelacionesimputadosDao->selectRemisionapelacionesimputados($RemisionapelacionesimputadosDto,$proveedor);
return $RemisionapelacionesimputadosDto;
}
public function insertRemisionapelacionesimputados($RemisionapelacionesimputadosDto,$proveedor=null){
$RemisionapelacionesimputadosDto=$this->validarRemisionapelacionesimputados($RemisionapelacionesimputadosDto);
$RemisionapelacionesimputadosDao = new RemisionapelacionesimputadosDAO();
$RemisionapelacionesimputadosDto = $RemisionapelacionesimputadosDao->insertRemisionapelacionesimputados($RemisionapelacionesimputadosDto,$proveedor);
return $RemisionapelacionesimputadosDto;
}
public function updateRemisionapelacionesimputados($RemisionapelacionesimputadosDto,$proveedor=null){
$RemisionapelacionesimputadosDto=$this->validarRemisionapelacionesimputados($RemisionapelacionesimputadosDto);
$RemisionapelacionesimputadosDao = new RemisionapelacionesimputadosDAO();
//$tmpDto = new RemisionapelacionesimputadosDTO();
//$tmpDto = $RemisionapelacionesimputadosDao->selectRemisionapelacionesimputados($RemisionapelacionesimputadosDto,$proveedor);
//if($tmpDto!=""){//$RemisionapelacionesimputadosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$RemisionapelacionesimputadosDto = $RemisionapelacionesimputadosDao->updateRemisionapelacionesimputados($RemisionapelacionesimputadosDto,$proveedor);
return $RemisionapelacionesimputadosDto;
//}
//return "";
}
public function deleteRemisionapelacionesimputados($RemisionapelacionesimputadosDto,$proveedor=null){
$RemisionapelacionesimputadosDto=$this->validarRemisionapelacionesimputados($RemisionapelacionesimputadosDto);
$RemisionapelacionesimputadosDao = new RemisionapelacionesimputadosDAO();
$RemisionapelacionesimputadosDto = $RemisionapelacionesimputadosDao->deleteRemisionapelacionesimputados($RemisionapelacionesimputadosDto,$proveedor);
return $RemisionapelacionesimputadosDto;
}
}
?>