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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/medidasapeladas/MedidasapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/medidasapeladas/MedidasapeladasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class MedidasapeladasController {
private $proveedor;
public function __construct() {
}
public function validarMedidasapeladas($MedidasapeladasDto){
$MedidasapeladasDto->setidMedidaApelada(strtoupper(str_ireplace("'","",trim($MedidasapeladasDto->getidMedidaApelada()))));
$MedidasapeladasDto->setidMedidaCautelar(strtoupper(str_ireplace("'","",trim($MedidasapeladasDto->getidMedidaCautelar()))));
$MedidasapeladasDto->setcveSentido(strtoupper(str_ireplace("'","",trim($MedidasapeladasDto->getcveSentido()))));
$MedidasapeladasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($MedidasapeladasDto->getfechaRegistro()))));
$MedidasapeladasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($MedidasapeladasDto->getfechaActualizacion()))));
return $MedidasapeladasDto;
}
public function selectMedidasapeladas($MedidasapeladasDto,$proveedor=null){
$MedidasapeladasDto=$this->validarMedidasapeladas($MedidasapeladasDto);
$MedidasapeladasDao = new MedidasapeladasDAO();
$MedidasapeladasDto = $MedidasapeladasDao->selectMedidasapeladas($MedidasapeladasDto,$proveedor);
return $MedidasapeladasDto;
}
public function insertMedidasapeladas($MedidasapeladasDto,$proveedor=null){
$MedidasapeladasDto=$this->validarMedidasapeladas($MedidasapeladasDto);
$MedidasapeladasDao = new MedidasapeladasDAO();
$MedidasapeladasDto = $MedidasapeladasDao->insertMedidasapeladas($MedidasapeladasDto,$proveedor);
return $MedidasapeladasDto;
}
public function updateMedidasapeladas($MedidasapeladasDto,$proveedor=null){
$MedidasapeladasDto=$this->validarMedidasapeladas($MedidasapeladasDto);
$MedidasapeladasDao = new MedidasapeladasDAO();
//$tmpDto = new MedidasapeladasDTO();
//$tmpDto = $MedidasapeladasDao->selectMedidasapeladas($MedidasapeladasDto,$proveedor);
//if($tmpDto!=""){//$MedidasapeladasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$MedidasapeladasDto = $MedidasapeladasDao->updateMedidasapeladas($MedidasapeladasDto,$proveedor);
return $MedidasapeladasDto;
//}
//return "";
}
public function deleteMedidasapeladas($MedidasapeladasDto,$proveedor=null){
$MedidasapeladasDto=$this->validarMedidasapeladas($MedidasapeladasDto);
$MedidasapeladasDao = new MedidasapeladasDAO();
$MedidasapeladasDto = $MedidasapeladasDao->deleteMedidasapeladas($MedidasapeladasDto,$proveedor);
return $MedidasapeladasDto;
}
}
?>