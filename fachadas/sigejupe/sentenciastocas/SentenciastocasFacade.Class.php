<?php

/*
*************************************************
*FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
*Copyright 2009-2015 FACADES
* Licensed under the MIT license 
* Autor: *
* Departamento de Desarrollo de Software
* Subdireccion de Ingenieria de Software
* Direccion de Teclogias de Informacion
* Poder Judicial del Estado de Mexico
*************************************************
*/

session_start();
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/sentenciastocas/SentenciastocasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/sentenciastocas/SentenciastocasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class SentenciastocasFacade {
private $proveedor;
public function __construct() {
}
public function validarSentenciastocas($SentenciastocasDto){
$SentenciastocasDto->setidsentenciatoca(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciastocasDto->getidsentenciatoca(),"utf8"):strtoupper($SentenciastocasDto->getidsentenciatoca()))))));
if($this->esFecha($SentenciastocasDto->getidsentenciatoca())){
$SentenciastocasDto->setidsentenciatoca($this->fechaMysql($SentenciastocasDto->getidsentenciatoca()));
}
$SentenciastocasDto->setidToca(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciastocasDto->getidToca(),"utf8"):strtoupper($SentenciastocasDto->getidToca()))))));
if($this->esFecha($SentenciastocasDto->getidToca())){
$SentenciastocasDto->setidToca($this->fechaMysql($SentenciastocasDto->getidToca()));
}
$SentenciastocasDto->setcveTipoSentencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciastocasDto->getcveTipoSentencia(),"utf8"):strtoupper($SentenciastocasDto->getcveTipoSentencia()))))));
if($this->esFecha($SentenciastocasDto->getcveTipoSentencia())){
$SentenciastocasDto->setcveTipoSentencia($this->fechaMysql($SentenciastocasDto->getcveTipoSentencia()));
}
$SentenciastocasDto->setidActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciastocasDto->getidActuacion(),"utf8"):strtoupper($SentenciastocasDto->getidActuacion()))))));
if($this->esFecha($SentenciastocasDto->getidActuacion())){
$SentenciastocasDto->setidActuacion($this->fechaMysql($SentenciastocasDto->getidActuacion()));
}
$SentenciastocasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciastocasDto->getactivo(),"utf8"):strtoupper($SentenciastocasDto->getactivo()))))));
if($this->esFecha($SentenciastocasDto->getactivo())){
$SentenciastocasDto->setactivo($this->fechaMysql($SentenciastocasDto->getactivo()));
}
$SentenciastocasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciastocasDto->getfechaRegistro(),"utf8"):strtoupper($SentenciastocasDto->getfechaRegistro()))))));
if($this->esFecha($SentenciastocasDto->getfechaRegistro())){
$SentenciastocasDto->setfechaRegistro($this->fechaMysql($SentenciastocasDto->getfechaRegistro()));
}
$SentenciastocasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciastocasDto->getfechaActualizacion(),"utf8"):strtoupper($SentenciastocasDto->getfechaActualizacion()))))));
if($this->esFecha($SentenciastocasDto->getfechaActualizacion())){
$SentenciastocasDto->setfechaActualizacion($this->fechaMysql($SentenciastocasDto->getfechaActualizacion()));
}
return $SentenciastocasDto;
}
public function selectSentenciastocas($SentenciastocasDto){
$SentenciastocasDto=$this->validarSentenciastocas($SentenciastocasDto);
$SentenciastocasController = new SentenciastocasController();
$SentenciastocasDto = $SentenciastocasController->selectSentenciastocas($SentenciastocasDto);
if($SentenciastocasDto!=""){
$dtoToJson = new DtoToJson($SentenciastocasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertSentenciastocas($SentenciastocasDto){
$SentenciastocasDto=$this->validarSentenciastocas($SentenciastocasDto);
$SentenciastocasController = new SentenciastocasController();
$SentenciastocasDto = $SentenciastocasController->insertSentenciastocas($SentenciastocasDto);
if($SentenciastocasDto!=""){
$dtoToJson = new DtoToJson($SentenciastocasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateSentenciastocas($SentenciastocasDto){
$SentenciastocasDto=$this->validarSentenciastocas($SentenciastocasDto);
$SentenciastocasController = new SentenciastocasController();
$SentenciastocasDto = $SentenciastocasController->updateSentenciastocas($SentenciastocasDto);
if($SentenciastocasDto!=""){
$dtoToJson = new DtoToJson($SentenciastocasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteSentenciastocas($SentenciastocasDto){
$SentenciastocasDto=$this->validarSentenciastocas($SentenciastocasDto);
$SentenciastocasController = new SentenciastocasController();
$SentenciastocasDto = $SentenciastocasController->deleteSentenciastocas($SentenciastocasDto);
if($SentenciastocasDto==true){
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
}
private function esFecha($fecha) {
if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
return true;
}
return false;
}
private function esFechaMysql($fecha) {
if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
return true;
}
return false;
}
private function fechaMysql($fecha) {
list($dia, $mes, $year) = explode("/", $fecha);
return $year . "-" . $mes . "-" . $dia;
}
private function fechaNormal($fecha) {
list($dia, $mes, $year) = explode("/", $fecha);
return $year . "-" . $mes . "-" . $dia;
}
}



@$idsentenciatoca=$_POST["idsentenciatoca"];
@$idToca=$_POST["idToca"];
@$cveTipoSentencia=$_POST["cveTipoSentencia"];
@$idActuacion=$_POST["idActuacion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$sentenciastocasFacade = new SentenciastocasFacade();
$sentenciastocasDto = new SentenciastocasDTO();

$sentenciastocasDto->setIdsentenciatoca($idsentenciatoca);
$sentenciastocasDto->setIdToca($idToca);
$sentenciastocasDto->setCveTipoSentencia($cveTipoSentencia);
$sentenciastocasDto->setIdActuacion($idActuacion);
$sentenciastocasDto->setActivo($activo);
$sentenciastocasDto->setFechaRegistro($fechaRegistro);
$sentenciastocasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idsentenciatoca=="") ){
$sentenciastocasDto=$sentenciastocasFacade->insertSentenciastocas($sentenciastocasDto);
echo $sentenciastocasDto;
} else if(($accion=="guardar") && ($idsentenciatoca!="")){
$sentenciastocasDto=$sentenciastocasFacade->updateSentenciastocas($sentenciastocasDto);
echo $sentenciastocasDto;
} else if($accion=="consultar"){
$sentenciastocasDto=$sentenciastocasFacade->selectSentenciastocas($sentenciastocasDto);
echo $sentenciastocasDto;
} else if( ($accion=="baja") && ($idsentenciatoca!="") ){
$sentenciastocasDto=$sentenciastocasFacade->deleteSentenciastocas($sentenciastocasDto);
echo $sentenciastocasDto;
} else if( ($accion=="seleccionar") && ($idsentenciatoca!="") ){
$sentenciastocasDto=$sentenciastocasFacade->selectSentenciastocas($sentenciastocasDto);
echo $sentenciastocasDto;
}


?>