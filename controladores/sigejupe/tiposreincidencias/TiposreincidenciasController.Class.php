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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposreincidencias/TiposreincidenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposreincidencias/TiposreincidenciasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposreincidenciasController {
private $proveedor;
public function __construct() {
}
public function validarTiposreincidencias($TiposreincidenciasDto){
$TiposreincidenciasDto->setcveTipoReincidencia(strtoupper(str_ireplace("'","",trim($TiposreincidenciasDto->getcveTipoReincidencia()))));
$TiposreincidenciasDto->setdesTipoReincidencia(strtoupper(str_ireplace("'","",trim($TiposreincidenciasDto->getdesTipoReincidencia()))));
$TiposreincidenciasDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposreincidenciasDto->getactivo()))));
$TiposreincidenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposreincidenciasDto->getfechaRegistro()))));
$TiposreincidenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposreincidenciasDto->getfechaActualizacion()))));
return $TiposreincidenciasDto;
}
public function selectTiposreincidencias($TiposreincidenciasDto,$proveedor=null){
$TiposreincidenciasDto=$this->validarTiposreincidencias($TiposreincidenciasDto);
$TiposreincidenciasDao = new TiposreincidenciasDAO();
$TiposreincidenciasDto = $TiposreincidenciasDao->selectTiposreincidencias($TiposreincidenciasDto,$proveedor);
return $TiposreincidenciasDto;
}
public function insertTiposreincidencias($TiposreincidenciasDto,$proveedor=null){
$TiposreincidenciasDto=$this->validarTiposreincidencias($TiposreincidenciasDto);
$TiposreincidenciasDao = new TiposreincidenciasDAO();
$TiposreincidenciasDto = $TiposreincidenciasDao->insertTiposreincidencias($TiposreincidenciasDto,$proveedor);
return $TiposreincidenciasDto;
}
public function updateTiposreincidencias($TiposreincidenciasDto,$proveedor=null){
$TiposreincidenciasDto=$this->validarTiposreincidencias($TiposreincidenciasDto);
$TiposreincidenciasDao = new TiposreincidenciasDAO();
//$tmpDto = new TiposreincidenciasDTO();
//$tmpDto = $TiposreincidenciasDao->selectTiposreincidencias($TiposreincidenciasDto,$proveedor);
//if($tmpDto!=""){//$TiposreincidenciasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposreincidenciasDto = $TiposreincidenciasDao->updateTiposreincidencias($TiposreincidenciasDto,$proveedor);
return $TiposreincidenciasDto;
//}
//return "";
}
public function deleteTiposreincidencias($TiposreincidenciasDto,$proveedor=null){
$TiposreincidenciasDto=$this->validarTiposreincidencias($TiposreincidenciasDto);
$TiposreincidenciasDao = new TiposreincidenciasDAO();
$TiposreincidenciasDto = $TiposreincidenciasDao->deleteTiposreincidencias($TiposreincidenciasDto,$proveedor);
return $TiposreincidenciasDto;
}
}
?>