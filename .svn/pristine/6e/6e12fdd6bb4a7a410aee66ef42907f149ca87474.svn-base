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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/respuestasolicitudorden/RespuestasolicitudordenDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/respuestasolicitudorden/RespuestasolicitudordenDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class RespuestasolicitudordenController {
private $proveedor;
public function __construct() {
}
public function validarRespuestasolicitudorden($RespuestasolicitudordenDto){
$RespuestasolicitudordenDto->setcveRespuestaSolicitudOrden(strtoupper(str_ireplace("'","",trim($RespuestasolicitudordenDto->getcveRespuestaSolicitudOrden()))));
$RespuestasolicitudordenDto->setdesRespuestaSolicitudOrden(strtoupper(str_ireplace("'","",trim($RespuestasolicitudordenDto->getdesRespuestaSolicitudOrden()))));
$RespuestasolicitudordenDto->setactivo(strtoupper(str_ireplace("'","",trim($RespuestasolicitudordenDto->getactivo()))));
$RespuestasolicitudordenDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($RespuestasolicitudordenDto->getfechaRegistro()))));
$RespuestasolicitudordenDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($RespuestasolicitudordenDto->getfechaActualizacion()))));
return $RespuestasolicitudordenDto;
}
public function selectRespuestasolicitudorden($RespuestasolicitudordenDto,$proveedor=null){
$RespuestasolicitudordenDto=$this->validarRespuestasolicitudorden($RespuestasolicitudordenDto);
$RespuestasolicitudordenDao = new RespuestasolicitudordenDAO();
$RespuestasolicitudordenDto = $RespuestasolicitudordenDao->selectRespuestasolicitudorden($RespuestasolicitudordenDto,$proveedor);
return $RespuestasolicitudordenDto;
}
public function insertRespuestasolicitudorden($RespuestasolicitudordenDto,$proveedor=null){
$RespuestasolicitudordenDto=$this->validarRespuestasolicitudorden($RespuestasolicitudordenDto);
$RespuestasolicitudordenDao = new RespuestasolicitudordenDAO();
$RespuestasolicitudordenDto = $RespuestasolicitudordenDao->insertRespuestasolicitudorden($RespuestasolicitudordenDto,$proveedor);
return $RespuestasolicitudordenDto;
}
public function updateRespuestasolicitudorden($RespuestasolicitudordenDto,$proveedor=null){
$RespuestasolicitudordenDto=$this->validarRespuestasolicitudorden($RespuestasolicitudordenDto);
$RespuestasolicitudordenDao = new RespuestasolicitudordenDAO();
//$tmpDto = new RespuestasolicitudordenDTO();
//$tmpDto = $RespuestasolicitudordenDao->selectRespuestasolicitudorden($RespuestasolicitudordenDto,$proveedor);
//if($tmpDto!=""){//$RespuestasolicitudordenDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$RespuestasolicitudordenDto = $RespuestasolicitudordenDao->updateRespuestasolicitudorden($RespuestasolicitudordenDto,$proveedor);
return $RespuestasolicitudordenDto;
//}
//return "";
}
public function deleteRespuestasolicitudorden($RespuestasolicitudordenDto,$proveedor=null){
$RespuestasolicitudordenDto=$this->validarRespuestasolicitudorden($RespuestasolicitudordenDto);
$RespuestasolicitudordenDao = new RespuestasolicitudordenDAO();
$RespuestasolicitudordenDto = $RespuestasolicitudordenDao->deleteRespuestasolicitudorden($RespuestasolicitudordenDto,$proveedor);
return $RespuestasolicitudordenDto;
}
}
?>