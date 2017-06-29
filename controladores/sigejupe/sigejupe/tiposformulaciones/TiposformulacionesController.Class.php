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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposformulaciones/TiposformulacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposformulaciones/TiposformulacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposformulacionesController {
private $proveedor;
public function __construct() {
}
public function validarTiposformulaciones($TiposformulacionesDto){
$TiposformulacionesDto->setcveTipoFormulacion(strtoupper(str_ireplace("'","",trim($TiposformulacionesDto->getcveTipoFormulacion()))));
$TiposformulacionesDto->setdesTipoFormulacion(strtoupper(str_ireplace("'","",trim($TiposformulacionesDto->getdesTipoFormulacion()))));
$TiposformulacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposformulacionesDto->getactivo()))));
$TiposformulacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposformulacionesDto->getfechaRegistro()))));
$TiposformulacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposformulacionesDto->getfechaActualizacion()))));
return $TiposformulacionesDto;
}
public function selectTiposformulaciones($TiposformulacionesDto,$proveedor=null){
$TiposformulacionesDto=$this->validarTiposformulaciones($TiposformulacionesDto);
$TiposformulacionesDao = new TiposformulacionesDAO();
$TiposformulacionesDto = $TiposformulacionesDao->selectTiposformulaciones($TiposformulacionesDto,$proveedor);
return $TiposformulacionesDto;
}
public function insertTiposformulaciones($TiposformulacionesDto,$proveedor=null){
$TiposformulacionesDto=$this->validarTiposformulaciones($TiposformulacionesDto);
$TiposformulacionesDao = new TiposformulacionesDAO();
$TiposformulacionesDto = $TiposformulacionesDao->insertTiposformulaciones($TiposformulacionesDto,$proveedor);
return $TiposformulacionesDto;
}
public function updateTiposformulaciones($TiposformulacionesDto,$proveedor=null){
$TiposformulacionesDto=$this->validarTiposformulaciones($TiposformulacionesDto);
$TiposformulacionesDao = new TiposformulacionesDAO();
//$tmpDto = new TiposformulacionesDTO();
//$tmpDto = $TiposformulacionesDao->selectTiposformulaciones($TiposformulacionesDto,$proveedor);
//if($tmpDto!=""){//$TiposformulacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposformulacionesDto = $TiposformulacionesDao->updateTiposformulaciones($TiposformulacionesDto,$proveedor);
return $TiposformulacionesDto;
//}
//return "";
}
public function deleteTiposformulaciones($TiposformulacionesDto,$proveedor=null){
$TiposformulacionesDto=$this->validarTiposformulaciones($TiposformulacionesDto);
$TiposformulacionesDao = new TiposformulacionesDAO();
$TiposformulacionesDto = $TiposformulacionesDao->deleteTiposformulaciones($TiposformulacionesDto,$proveedor);
return $TiposformulacionesDto;
}
}
?>