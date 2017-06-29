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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/sentenciasapeladas/SentenciasapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/sentenciasapeladas/SentenciasapeladasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class SentenciasapeladasController {
private $proveedor;
public function __construct() {
}
public function validarSentenciasapeladas($SentenciasapeladasDto){
$SentenciasapeladasDto->setidSentenciaApelada(strtoupper(str_ireplace("'","",trim($SentenciasapeladasDto->getidSentenciaApelada()))));
$SentenciasapeladasDto->setidImputadoSentencia(strtoupper(str_ireplace("'","",trim($SentenciasapeladasDto->getidImputadoSentencia()))));
$SentenciasapeladasDto->setcveSentido(strtoupper(str_ireplace("'","",trim($SentenciasapeladasDto->getcveSentido()))));
$SentenciasapeladasDto->setNumToca(strtoupper(str_ireplace("'","",trim($SentenciasapeladasDto->getNumToca()))));
$SentenciasapeladasDto->setAnioToca(strtoupper(str_ireplace("'","",trim($SentenciasapeladasDto->getAnioToca()))));
$SentenciasapeladasDto->setCveSala(strtoupper(str_ireplace("'","",trim($SentenciasapeladasDto->getCveSala()))));
$SentenciasapeladasDto->setactivo(strtoupper(str_ireplace("'","",trim($SentenciasapeladasDto->getactivo()))));
$SentenciasapeladasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($SentenciasapeladasDto->getfechaRegistro()))));
$SentenciasapeladasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($SentenciasapeladasDto->getfechaActualizacion()))));
return $SentenciasapeladasDto;
}
public function selectSentenciasapeladas($SentenciasapeladasDto,$proveedor=null){
$SentenciasapeladasDto=$this->validarSentenciasapeladas($SentenciasapeladasDto);
$SentenciasapeladasDao = new SentenciasapeladasDAO();
$SentenciasapeladasDto = $SentenciasapeladasDao->selectSentenciasapeladas($SentenciasapeladasDto,$proveedor);
return $SentenciasapeladasDto;
}
public function insertSentenciasapeladas($SentenciasapeladasDto,$proveedor=null){
$SentenciasapeladasDto=$this->validarSentenciasapeladas($SentenciasapeladasDto);
$SentenciasapeladasDao = new SentenciasapeladasDAO();
$SentenciasapeladasDto = $SentenciasapeladasDao->insertSentenciasapeladas($SentenciasapeladasDto,$proveedor);
return $SentenciasapeladasDto;
}
public function updateSentenciasapeladas($SentenciasapeladasDto,$proveedor=null){
$SentenciasapeladasDto=$this->validarSentenciasapeladas($SentenciasapeladasDto);
$SentenciasapeladasDao = new SentenciasapeladasDAO();
//$tmpDto = new SentenciasapeladasDTO();
//$tmpDto = $SentenciasapeladasDao->selectSentenciasapeladas($SentenciasapeladasDto,$proveedor);
//if($tmpDto!=""){//$SentenciasapeladasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$SentenciasapeladasDto = $SentenciasapeladasDao->updateSentenciasapeladas($SentenciasapeladasDto,$proveedor);
return $SentenciasapeladasDto;
//}
//return "";
}
public function deleteSentenciasapeladas($SentenciasapeladasDto,$proveedor=null){
$SentenciasapeladasDto=$this->validarSentenciasapeladas($SentenciasapeladasDto);
$SentenciasapeladasDao = new SentenciasapeladasDAO();
$SentenciasapeladasDto = $SentenciasapeladasDao->deleteSentenciasapeladas($SentenciasapeladasDto,$proveedor);
return $SentenciasapeladasDto;
}
}
?>