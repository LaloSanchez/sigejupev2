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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/respuestasolicitudcateo/RespuestasolicitudcateoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/respuestasolicitudcateo/RespuestasolicitudcateoDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class RespuestasolicitudcateoController {
private $proveedor;
public function __construct() {
}
public function validarRespuestasolicitudcateo($RespuestasolicitudcateoDto){
$RespuestasolicitudcateoDto->setcveRespuestaSolicitudCateo(strtoupper(str_ireplace("'","",trim($RespuestasolicitudcateoDto->getcveRespuestaSolicitudCateo()))));
$RespuestasolicitudcateoDto->setdesRespuestaSolicitudCateo(strtoupper(str_ireplace("'","",trim($RespuestasolicitudcateoDto->getdesRespuestaSolicitudCateo()))));
$RespuestasolicitudcateoDto->setactivo(strtoupper(str_ireplace("'","",trim($RespuestasolicitudcateoDto->getactivo()))));
$RespuestasolicitudcateoDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($RespuestasolicitudcateoDto->getfechaRegistro()))));
$RespuestasolicitudcateoDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($RespuestasolicitudcateoDto->getfechaActualizacion()))));
return $RespuestasolicitudcateoDto;
}
public function selectRespuestasolicitudcateo($RespuestasolicitudcateoDto,$proveedor=null){
$RespuestasolicitudcateoDto=$this->validarRespuestasolicitudcateo($RespuestasolicitudcateoDto);
$RespuestasolicitudcateoDao = new RespuestasolicitudcateoDAO();
$RespuestasolicitudcateoDto = $RespuestasolicitudcateoDao->selectRespuestasolicitudcateo($RespuestasolicitudcateoDto,$proveedor);
return $RespuestasolicitudcateoDto;
}
public function insertRespuestasolicitudcateo($RespuestasolicitudcateoDto,$proveedor=null){
$RespuestasolicitudcateoDto=$this->validarRespuestasolicitudcateo($RespuestasolicitudcateoDto);
$RespuestasolicitudcateoDao = new RespuestasolicitudcateoDAO();
$RespuestasolicitudcateoDto = $RespuestasolicitudcateoDao->insertRespuestasolicitudcateo($RespuestasolicitudcateoDto,$proveedor);
return $RespuestasolicitudcateoDto;
}
public function updateRespuestasolicitudcateo($RespuestasolicitudcateoDto,$proveedor=null){
$RespuestasolicitudcateoDto=$this->validarRespuestasolicitudcateo($RespuestasolicitudcateoDto);
$RespuestasolicitudcateoDao = new RespuestasolicitudcateoDAO();
//$tmpDto = new RespuestasolicitudcateoDTO();
//$tmpDto = $RespuestasolicitudcateoDao->selectRespuestasolicitudcateo($RespuestasolicitudcateoDto,$proveedor);
//if($tmpDto!=""){//$RespuestasolicitudcateoDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$RespuestasolicitudcateoDto = $RespuestasolicitudcateoDao->updateRespuestasolicitudcateo($RespuestasolicitudcateoDto,$proveedor);
return $RespuestasolicitudcateoDto;
//}
//return "";
}
public function deleteRespuestasolicitudcateo($RespuestasolicitudcateoDto,$proveedor=null){
$RespuestasolicitudcateoDto=$this->validarRespuestasolicitudcateo($RespuestasolicitudcateoDto);
$RespuestasolicitudcateoDao = new RespuestasolicitudcateoDAO();
$RespuestasolicitudcateoDto = $RespuestasolicitudcateoDao->deleteRespuestasolicitudcateo($RespuestasolicitudcateoDto,$proveedor);
return $RespuestasolicitudcateoDto;
}
}
?>