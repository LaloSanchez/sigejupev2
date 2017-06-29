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

 include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/sentenciastocas/SentenciastocasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dao/sentenciastocas/SentenciastocasDAO.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
class SentenciastocasController {
private $proveedor;
public function __construct() {
}
public function validarSentenciastocas($SentenciastocasDto){
$SentenciastocasDto->setidsentenciatoca(strtoupper(str_ireplace("'","",trim($SentenciastocasDto->getidsentenciatoca()))));
$SentenciastocasDto->setidToca(strtoupper(str_ireplace("'","",trim($SentenciastocasDto->getidToca()))));
$SentenciastocasDto->setcveTipoSentencia(strtoupper(str_ireplace("'","",trim($SentenciastocasDto->getcveTipoSentencia()))));
$SentenciastocasDto->setidActuacion(strtoupper(str_ireplace("'","",trim($SentenciastocasDto->getidActuacion()))));
$SentenciastocasDto->setactivo(strtoupper(str_ireplace("'","",trim($SentenciastocasDto->getactivo()))));
$SentenciastocasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim($SentenciastocasDto->getfechaRegistro()))));
$SentenciastocasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim($SentenciastocasDto->getfechaActualizacion()))));
return $SentenciastocasDto;
}
public function selectSentenciastocas($SentenciastocasDto,$proveedor=null){
$SentenciastocasDto=$this->validarSentenciastocas($SentenciastocasDto);
$SentenciastocasDao = new SentenciastocasDAO();
$SentenciastocasDto = $SentenciastocasDao->selectSentenciastocas($SentenciastocasDto,$proveedor);
return $SentenciastocasDto;
}
public function insertSentenciastocas($SentenciastocasDto,$proveedor=null){
$SentenciastocasDto=$this->validarSentenciastocas($SentenciastocasDto);
$SentenciastocasDao = new SentenciastocasDAO();
$SentenciastocasDto = $SentenciastocasDao->insertSentenciastocas($SentenciastocasDto,$proveedor);
return $SentenciastocasDto;
}
public function updateSentenciastocas($SentenciastocasDto,$proveedor=null){
$SentenciastocasDto=$this->validarSentenciastocas($SentenciastocasDto);
$SentenciastocasDao = new SentenciastocasDAO();
//$tmpDto = new SentenciastocasDTO();
//$tmpDto = $SentenciastocasDao->selectSentenciastocas($SentenciastocasDto,$proveedor);
//if($tmpDto!=""){//$SentenciastocasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
$SentenciastocasDto = $SentenciastocasDao->updateSentenciastocas($SentenciastocasDto,$proveedor);
return $SentenciastocasDto;
//}
//return "";
}
public function deleteSentenciastocas($SentenciastocasDto,$proveedor=null){
$SentenciastocasDto=$this->validarSentenciastocas($SentenciastocasDto);
$SentenciastocasDao = new SentenciastocasDAO();
$SentenciastocasDto = $SentenciastocasDao->deleteSentenciastocas($SentenciastocasDto,$proveedor);
return $SentenciastocasDto;
}
}
?>