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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatusnotificaciones/EstatusnotificacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/estatusnotificaciones/EstatusnotificacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class EstatusnotificacionesController {
private $proveedor;
public function __construct() {
}
public function validarEstatusnotificaciones($EstatusnotificacionesDto){
$EstatusnotificacionesDto->setcveEstatusNotificacion(strtoupper(str_ireplace("'","",trim($EstatusnotificacionesDto->getcveEstatusNotificacion()))));
$EstatusnotificacionesDto->setdesEstatusNotificacion(strtoupper(str_ireplace("'","",trim($EstatusnotificacionesDto->getdesEstatusNotificacion()))));
$EstatusnotificacionesDto->setactivo(strtoupper(str_ireplace("'","",trim($EstatusnotificacionesDto->getactivo()))));
$EstatusnotificacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($EstatusnotificacionesDto->getfechaRegistro()))));
$EstatusnotificacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($EstatusnotificacionesDto->getfechaActualizacion()))));
return $EstatusnotificacionesDto;
}
public function selectEstatusnotificaciones($EstatusnotificacionesDto,$proveedor=null){
$EstatusnotificacionesDto=$this->validarEstatusnotificaciones($EstatusnotificacionesDto);
$EstatusnotificacionesDao = new EstatusnotificacionesDAO();
$EstatusnotificacionesDto = $EstatusnotificacionesDao->selectEstatusnotificaciones($EstatusnotificacionesDto,$proveedor);
return $EstatusnotificacionesDto;
}
public function insertEstatusnotificaciones($EstatusnotificacionesDto,$proveedor=null){
$EstatusnotificacionesDto=$this->validarEstatusnotificaciones($EstatusnotificacionesDto);
$EstatusnotificacionesDao = new EstatusnotificacionesDAO();
$EstatusnotificacionesDto = $EstatusnotificacionesDao->insertEstatusnotificaciones($EstatusnotificacionesDto,$proveedor);
return $EstatusnotificacionesDto;
}
public function updateEstatusnotificaciones($EstatusnotificacionesDto,$proveedor=null){
$EstatusnotificacionesDto=$this->validarEstatusnotificaciones($EstatusnotificacionesDto);
$EstatusnotificacionesDao = new EstatusnotificacionesDAO();
//$tmpDto = new EstatusnotificacionesDTO();
//$tmpDto = $EstatusnotificacionesDao->selectEstatusnotificaciones($EstatusnotificacionesDto,$proveedor);
//if($tmpDto!=""){//$EstatusnotificacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$EstatusnotificacionesDto = $EstatusnotificacionesDao->updateEstatusnotificaciones($EstatusnotificacionesDto,$proveedor);
return $EstatusnotificacionesDto;
//}
//return "";
}
public function deleteEstatusnotificaciones($EstatusnotificacionesDto,$proveedor=null){
$EstatusnotificacionesDto=$this->validarEstatusnotificaciones($EstatusnotificacionesDto);
$EstatusnotificacionesDao = new EstatusnotificacionesDAO();
$EstatusnotificacionesDto = $EstatusnotificacionesDao->deleteEstatusnotificaciones($EstatusnotificacionesDto,$proveedor);
return $EstatusnotificacionesDto;
}
}
?>