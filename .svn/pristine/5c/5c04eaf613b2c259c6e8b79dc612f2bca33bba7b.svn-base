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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposnotificaciones/TiposnotificacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/tiposnotificaciones/TiposnotificacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class TiposnotificacionesController {
private $proveedor;
public function __construct() {
}
public function validarTiposnotificaciones($TiposnotificacionesDto){
$TiposnotificacionesDto->setcveTipoNotificacion(strtoupper(str_ireplace("'","",trim($TiposnotificacionesDto->getcveTipoNotificacion()))));
$TiposnotificacionesDto->setdesTipoNotificacion(strtoupper(str_ireplace("'","",trim($TiposnotificacionesDto->getdesTipoNotificacion()))));
$TiposnotificacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($TiposnotificacionesDto->getactivo()))));
$TiposnotificacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($TiposnotificacionesDto->getfechaRegistro()))));
$TiposnotificacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($TiposnotificacionesDto->getfechaActualizacion()))));
return $TiposnotificacionesDto;
}
public function selectTiposnotificaciones($TiposnotificacionesDto,$proveedor=null){
$TiposnotificacionesDto=$this->validarTiposnotificaciones($TiposnotificacionesDto);
$TiposnotificacionesDao = new TiposnotificacionesDAO();
$TiposnotificacionesDto = $TiposnotificacionesDao->selectTiposnotificaciones($TiposnotificacionesDto," order by desTipoNotificacion ",$proveedor);
return $TiposnotificacionesDto;
}
public function insertTiposnotificaciones($TiposnotificacionesDto,$proveedor=null){
$TiposnotificacionesDto=$this->validarTiposnotificaciones($TiposnotificacionesDto);
$TiposnotificacionesDao = new TiposnotificacionesDAO();
$TiposnotificacionesDto = $TiposnotificacionesDao->insertTiposnotificaciones($TiposnotificacionesDto,$proveedor);
return $TiposnotificacionesDto;
}
public function updateTiposnotificaciones($TiposnotificacionesDto,$proveedor=null){
$TiposnotificacionesDto=$this->validarTiposnotificaciones($TiposnotificacionesDto);
$TiposnotificacionesDao = new TiposnotificacionesDAO();
//$tmpDto = new TiposnotificacionesDTO();
//$tmpDto = $TiposnotificacionesDao->selectTiposnotificaciones($TiposnotificacionesDto,$proveedor);
//if($tmpDto!=""){//$TiposnotificacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$TiposnotificacionesDto = $TiposnotificacionesDao->updateTiposnotificaciones($TiposnotificacionesDto,$proveedor);
return $TiposnotificacionesDto;
//}
//return "";
}
public function deleteTiposnotificaciones($TiposnotificacionesDto,$proveedor=null){
$TiposnotificacionesDto=$this->validarTiposnotificaciones($TiposnotificacionesDto);
$TiposnotificacionesDao = new TiposnotificacionesDAO();
$TiposnotificacionesDto = $TiposnotificacionesDao->deleteTiposnotificaciones($TiposnotificacionesDto,$proveedor);
return $TiposnotificacionesDto;
}
}
?>