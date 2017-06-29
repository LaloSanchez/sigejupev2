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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/medidasproapeladas/MedidasproapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/medidasproapeladas/MedidasproapeladasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class MedidasproapeladasController {
private $proveedor;
public function __construct() {
}
public function validarMedidasproapeladas($MedidasproapeladasDto){
$MedidasproapeladasDto->setidMedidaProApelada(strtoupper(str_ireplace("'","",trim($MedidasproapeladasDto->getidMedidaProApelada()))));
$MedidasproapeladasDto->setidMedidaProteccion(strtoupper(str_ireplace("'","",trim($MedidasproapeladasDto->getidMedidaProteccion()))));
$MedidasproapeladasDto->setcveSentido(strtoupper(str_ireplace("'","",trim($MedidasproapeladasDto->getcveSentido()))));
$MedidasproapeladasDto->setNumToca(strtoupper(str_ireplace("'","",trim($MedidasproapeladasDto->getNumToca()))));
$MedidasproapeladasDto->setAnioToca(strtoupper(str_ireplace("'","",trim($MedidasproapeladasDto->getAnioToca()))));
$MedidasproapeladasDto->setCveSala(strtoupper(str_ireplace("'","",trim($MedidasproapeladasDto->getCveSala()))));
$MedidasproapeladasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($MedidasproapeladasDto->getfechaRegistro()))));
$MedidasproapeladasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($MedidasproapeladasDto->getfechaActualizacion()))));
return $MedidasproapeladasDto;
}
public function selectMedidasproapeladas($MedidasproapeladasDto,$proveedor=null){
$MedidasproapeladasDto=$this->validarMedidasproapeladas($MedidasproapeladasDto);
$MedidasproapeladasDao = new MedidasproapeladasDAO();
$MedidasproapeladasDto = $MedidasproapeladasDao->selectMedidasproapeladas($MedidasproapeladasDto,$proveedor);
return $MedidasproapeladasDto;
}
public function insertMedidasproapeladas($MedidasproapeladasDto,$proveedor=null){
$MedidasproapeladasDto=$this->validarMedidasproapeladas($MedidasproapeladasDto);
$MedidasproapeladasDao = new MedidasproapeladasDAO();
$MedidasproapeladasDto = $MedidasproapeladasDao->insertMedidasproapeladas($MedidasproapeladasDto,$proveedor);
return $MedidasproapeladasDto;
}
public function updateMedidasproapeladas($MedidasproapeladasDto,$proveedor=null){
$MedidasproapeladasDto=$this->validarMedidasproapeladas($MedidasproapeladasDto);
$MedidasproapeladasDao = new MedidasproapeladasDAO();
//$tmpDto = new MedidasproapeladasDTO();
//$tmpDto = $MedidasproapeladasDao->selectMedidasproapeladas($MedidasproapeladasDto,$proveedor);
//if($tmpDto!=""){//$MedidasproapeladasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$MedidasproapeladasDto = $MedidasproapeladasDao->updateMedidasproapeladas($MedidasproapeladasDto,$proveedor);
return $MedidasproapeladasDto;
//}
//return "";
}
public function deleteMedidasproapeladas($MedidasproapeladasDto,$proveedor=null){
$MedidasproapeladasDto=$this->validarMedidasproapeladas($MedidasproapeladasDto);
$MedidasproapeladasDao = new MedidasproapeladasDAO();
$MedidasproapeladasDto = $MedidasproapeladasDao->deleteMedidasproapeladas($MedidasproapeladasDto,$proveedor);
return $MedidasproapeladasDto;
}
}
?>