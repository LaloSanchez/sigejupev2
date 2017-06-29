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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/audienciasdistritos/AudienciasdistritosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/audienciasdistritos/AudienciasdistritosDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class AudienciasdistritosController {
private $proveedor;
public function __construct() {
}
public function validarAudienciasdistritos($AudienciasdistritosDto){
$AudienciasdistritosDto->setidAudienciaDistrito(strtoupper(str_ireplace("'","",trim($AudienciasdistritosDto->getidAudienciaDistrito()))));
$AudienciasdistritosDto->setcveDistrito(strtoupper(str_ireplace("'","",trim($AudienciasdistritosDto->getcveDistrito()))));
$AudienciasdistritosDto->setcveCatAudiencia(strtoupper(str_ireplace("'","",trim($AudienciasdistritosDto->getcveCatAudiencia()))));
$AudienciasdistritosDto->setholgura(strtoupper(str_ireplace("'","",trim($AudienciasdistritosDto->getholgura()))));
$AudienciasdistritosDto->setminDuracion(strtoupper(str_ireplace("'","",trim($AudienciasdistritosDto->getminDuracion()))));
$AudienciasdistritosDto->setmaxDuracion(strtoupper(str_ireplace("'","",trim($AudienciasdistritosDto->getmaxDuracion()))));
$AudienciasdistritosDto->setactivo(strtoupper(str_ireplace("'","",trim($AudienciasdistritosDto->getactivo()))));
$AudienciasdistritosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($AudienciasdistritosDto->getfechaRegistro()))));
$AudienciasdistritosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($AudienciasdistritosDto->getfechaActualizacion()))));
return $AudienciasdistritosDto;
}
public function selectAudienciasdistritos($AudienciasdistritosDto,$proveedor=null){
$AudienciasdistritosDto=$this->validarAudienciasdistritos($AudienciasdistritosDto);
$AudienciasdistritosDao = new AudienciasdistritosDAO();
$AudienciasdistritosDto = $AudienciasdistritosDao->selectAudienciasdistritos($AudienciasdistritosDto,$proveedor);
return $AudienciasdistritosDto;
}
public function insertAudienciasdistritos($AudienciasdistritosDto,$proveedor=null){
$AudienciasdistritosDto=$this->validarAudienciasdistritos($AudienciasdistritosDto);
$AudienciasdistritosDao = new AudienciasdistritosDAO();
$AudienciasdistritosDto = $AudienciasdistritosDao->insertAudienciasdistritos($AudienciasdistritosDto,$proveedor);
return $AudienciasdistritosDto;
}
public function updateAudienciasdistritos($AudienciasdistritosDto,$proveedor=null){
$AudienciasdistritosDto=$this->validarAudienciasdistritos($AudienciasdistritosDto);
$AudienciasdistritosDao = new AudienciasdistritosDAO();
//$tmpDto = new AudienciasdistritosDTO();
//$tmpDto = $AudienciasdistritosDao->selectAudienciasdistritos($AudienciasdistritosDto,$proveedor);
//if($tmpDto!=""){//$AudienciasdistritosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$AudienciasdistritosDto = $AudienciasdistritosDao->updateAudienciasdistritos($AudienciasdistritosDto,$proveedor);
return $AudienciasdistritosDto;
//}
//return "";
}
public function deleteAudienciasdistritos($AudienciasdistritosDto,$proveedor=null){
$AudienciasdistritosDto=$this->validarAudienciasdistritos($AudienciasdistritosDto);
$AudienciasdistritosDao = new AudienciasdistritosDAO();
$AudienciasdistritosDto = $AudienciasdistritosDao->deleteAudienciasdistritos($AudienciasdistritosDto,$proveedor);
return $AudienciasdistritosDto;
}
}
?>