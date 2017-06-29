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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/respuestasolicitudmuestra/RespuestasolicitudmuestraDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/respuestasolicitudmuestra/RespuestasolicitudmuestraDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class RespuestasolicitudmuestraController {
private $proveedor;
public function __construct() {
}
public function validarRespuestasolicitudmuestra($RespuestasolicitudmuestraDto){
$RespuestasolicitudmuestraDto->setcveRespuestaSolicitudMuestra(strtoupper(str_ireplace("'","",trim($RespuestasolicitudmuestraDto->getcveRespuestaSolicitudMuestra()))));
$RespuestasolicitudmuestraDto->setdesRespuestaSolicitudMuestra(strtoupper(str_ireplace("'","",trim($RespuestasolicitudmuestraDto->getdesRespuestaSolicitudMuestra()))));
$RespuestasolicitudmuestraDto->setactivo(strtoupper(str_ireplace("'","",trim($RespuestasolicitudmuestraDto->getactivo()))));
$RespuestasolicitudmuestraDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($RespuestasolicitudmuestraDto->getfechaRegistro()))));
$RespuestasolicitudmuestraDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($RespuestasolicitudmuestraDto->getfechaActualizacion()))));
return $RespuestasolicitudmuestraDto;
}
public function selectRespuestasolicitudmuestra($RespuestasolicitudmuestraDto,$proveedor=null){
$RespuestasolicitudmuestraDto=$this->validarRespuestasolicitudmuestra($RespuestasolicitudmuestraDto);
$RespuestasolicitudmuestraDao = new RespuestasolicitudmuestraDAO();
$RespuestasolicitudmuestraDto = $RespuestasolicitudmuestraDao->selectRespuestasolicitudmuestra($RespuestasolicitudmuestraDto,$proveedor);
return $RespuestasolicitudmuestraDto;
}
public function insertRespuestasolicitudmuestra($RespuestasolicitudmuestraDto,$proveedor=null){
$RespuestasolicitudmuestraDto=$this->validarRespuestasolicitudmuestra($RespuestasolicitudmuestraDto);
$RespuestasolicitudmuestraDao = new RespuestasolicitudmuestraDAO();
$RespuestasolicitudmuestraDto = $RespuestasolicitudmuestraDao->insertRespuestasolicitudmuestra($RespuestasolicitudmuestraDto,$proveedor);
return $RespuestasolicitudmuestraDto;
}
public function updateRespuestasolicitudmuestra($RespuestasolicitudmuestraDto,$proveedor=null){
$RespuestasolicitudmuestraDto=$this->validarRespuestasolicitudmuestra($RespuestasolicitudmuestraDto);
$RespuestasolicitudmuestraDao = new RespuestasolicitudmuestraDAO();
//$tmpDto = new RespuestasolicitudmuestraDTO();
//$tmpDto = $RespuestasolicitudmuestraDao->selectRespuestasolicitudmuestra($RespuestasolicitudmuestraDto,$proveedor);
//if($tmpDto!=""){//$RespuestasolicitudmuestraDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$RespuestasolicitudmuestraDto = $RespuestasolicitudmuestraDao->updateRespuestasolicitudmuestra($RespuestasolicitudmuestraDto,$proveedor);
return $RespuestasolicitudmuestraDto;
//}
//return "";
}
public function deleteRespuestasolicitudmuestra($RespuestasolicitudmuestraDto,$proveedor=null){
$RespuestasolicitudmuestraDto=$this->validarRespuestasolicitudmuestra($RespuestasolicitudmuestraDto);
$RespuestasolicitudmuestraDao = new RespuestasolicitudmuestraDAO();
$RespuestasolicitudmuestraDto = $RespuestasolicitudmuestraDao->deleteRespuestasolicitudmuestra($RespuestasolicitudmuestraDto,$proveedor);
return $RespuestasolicitudmuestraDto;
}
}
?>