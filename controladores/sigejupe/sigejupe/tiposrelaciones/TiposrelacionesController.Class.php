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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposrelaciones/TiposrelacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposrelaciones/TiposrelacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposrelacionesController {
private $proveedor;
public function __construct() {
}
public function validarTiposrelaciones($TiposrelacionesDto){
$TiposrelacionesDto->setcveTipoRelacion(strtoupper(str_ireplace("'","",trim($TiposrelacionesDto->getcveTipoRelacion()))));
$TiposrelacionesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'","",trim($TiposrelacionesDto->getcveTipoCarpeta()))));
$TiposrelacionesDto->setdesTipoRelacion(strtoupper(str_ireplace("'","",trim($TiposrelacionesDto->getdesTipoRelacion()))));
$TiposrelacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposrelacionesDto->getactivo()))));
$TiposrelacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposrelacionesDto->getfechaRegistro()))));
$TiposrelacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposrelacionesDto->getfechaActualizacion()))));
return $TiposrelacionesDto;
}
public function selectTiposrelaciones($TiposrelacionesDto,$proveedor=null){
$TiposrelacionesDto=$this->validarTiposrelaciones($TiposrelacionesDto);
$TiposrelacionesDao = new TiposrelacionesDAO();
$TiposrelacionesDto = $TiposrelacionesDao->selectTiposrelaciones($TiposrelacionesDto,"ORDER BY desTipoRelacion ASC",$proveedor);
return $TiposrelacionesDto;
}
public function insertTiposrelaciones($TiposrelacionesDto,$proveedor=null){
$TiposrelacionesDto=$this->validarTiposrelaciones($TiposrelacionesDto);
$TiposrelacionesDao = new TiposrelacionesDAO();
$TiposrelacionesDto = $TiposrelacionesDao->insertTiposrelaciones($TiposrelacionesDto,$proveedor);
return $TiposrelacionesDto;
}
public function updateTiposrelaciones($TiposrelacionesDto,$proveedor=null){
$TiposrelacionesDto=$this->validarTiposrelaciones($TiposrelacionesDto);
$TiposrelacionesDao = new TiposrelacionesDAO();
//$tmpDto = new TiposrelacionesDTO();
//$tmpDto = $TiposrelacionesDao->selectTiposrelaciones($TiposrelacionesDto,$proveedor);
//if($tmpDto!=""){//$TiposrelacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposrelacionesDto = $TiposrelacionesDao->updateTiposrelaciones($TiposrelacionesDto,$proveedor);
return $TiposrelacionesDto;
//}
//return "";
}
public function deleteTiposrelaciones($TiposrelacionesDto,$proveedor=null){
$TiposrelacionesDto=$this->validarTiposrelaciones($TiposrelacionesDto);
$TiposrelacionesDao = new TiposrelacionesDAO();
$TiposrelacionesDto = $TiposrelacionesDao->deleteTiposrelaciones($TiposrelacionesDto,$proveedor);
return $TiposrelacionesDto;
}
}
?>