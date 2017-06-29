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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bitacoraasignaciones/BitacoraasignacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/bitacoraasignaciones/BitacoraasignacionesDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class BitacoraasignacionesController {
private $proveedor;
public function __construct() {
}
public function validarBitacoraasignaciones($BitacoraasignacionesDto){
$BitacoraasignacionesDto->setidBitacoraAsignacion(strtoupper(str_ireplace("'","",trim($BitacoraasignacionesDto->getidBitacoraAsignacion()))));
$BitacoraasignacionesDto->setcveJuzgado(strtoupper(str_ireplace("'","",trim($BitacoraasignacionesDto->getcveJuzgado()))));
$BitacoraasignacionesDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'","",trim($BitacoraasignacionesDto->getidSolicitudAudiencia()))));
$BitacoraasignacionesDto->setfechaMovimiento(strtoupper(str_ireplace("'","",trim($BitacoraasignacionesDto->getfechaMovimiento()))));
$BitacoraasignacionesDto->setobservaciones(strtoupper(str_ireplace("'","",trim($BitacoraasignacionesDto->getobservaciones()))));
$BitacoraasignacionesDto->setfechaInicial(strtoupper(str_ireplace("'","",trim($BitacoraasignacionesDto->getfechaInicial()))));
$BitacoraasignacionesDto->setfechaFInal(strtoupper(str_ireplace("'","",trim($BitacoraasignacionesDto->getfechaFInal()))));
$BitacoraasignacionesDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'","",trim($BitacoraasignacionesDto->getcveAdscripcionSolicita()))));
$BitacoraasignacionesDto->setidJuzgador(strtoupper(str_ireplace("'","",trim($BitacoraasignacionesDto->getidJuzgador()))));
$BitacoraasignacionesDto->setcveSala(strtoupper(str_ireplace("'","",trim($BitacoraasignacionesDto->getcveSala()))));
return $BitacoraasignacionesDto;
}
public function selectBitacoraasignaciones($BitacoraasignacionesDto,$proveedor=null){
$BitacoraasignacionesDto=$this->validarBitacoraasignaciones($BitacoraasignacionesDto);
$BitacoraasignacionesDao = new BitacoraasignacionesDAO();
$BitacoraasignacionesDto = $BitacoraasignacionesDao->selectBitacoraasignaciones($BitacoraasignacionesDto,$proveedor);
return $BitacoraasignacionesDto;
}
public function insertBitacoraasignaciones($BitacoraasignacionesDto,$proveedor=null){
$BitacoraasignacionesDto=$this->validarBitacoraasignaciones($BitacoraasignacionesDto);
$BitacoraasignacionesDao = new BitacoraasignacionesDAO();
$BitacoraasignacionesDto = $BitacoraasignacionesDao->insertBitacoraasignaciones($BitacoraasignacionesDto,$proveedor);
return $BitacoraasignacionesDto;
}
public function updateBitacoraasignaciones($BitacoraasignacionesDto,$proveedor=null){
$BitacoraasignacionesDto=$this->validarBitacoraasignaciones($BitacoraasignacionesDto);
$BitacoraasignacionesDao = new BitacoraasignacionesDAO();
//$tmpDto = new BitacoraasignacionesDTO();
//$tmpDto = $BitacoraasignacionesDao->selectBitacoraasignaciones($BitacoraasignacionesDto,$proveedor);
//if($tmpDto!=""){//$BitacoraasignacionesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$BitacoraasignacionesDto = $BitacoraasignacionesDao->updateBitacoraasignaciones($BitacoraasignacionesDto,$proveedor);
return $BitacoraasignacionesDto;
//}
//return "";
}
public function deleteBitacoraasignaciones($BitacoraasignacionesDto,$proveedor=null){
$BitacoraasignacionesDto=$this->validarBitacoraasignaciones($BitacoraasignacionesDto);
$BitacoraasignacionesDao = new BitacoraasignacionesDAO();
$BitacoraasignacionesDto = $BitacoraasignacionesDao->deleteBitacoraasignaciones($BitacoraasignacionesDto,$proveedor);
return $BitacoraasignacionesDto;
}
}
?>