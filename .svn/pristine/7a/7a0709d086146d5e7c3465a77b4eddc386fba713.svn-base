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

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/sentenciasapeladas/SentenciasapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/sentenciasapeladas/SentenciasapeladasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class SentenciasapeladasFacade {
private $proveedor;
public function __construct() {
}
public function validarSentenciasapeladas($SentenciasapeladasDto){
$SentenciasapeladasDto->setidSentenciaApelada(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciasapeladasDto->getidSentenciaApelada(),"utf8"):strtoupper($SentenciasapeladasDto->getidSentenciaApelada()))))));
if($this->esFecha($SentenciasapeladasDto->getidSentenciaApelada())){
$SentenciasapeladasDto->setidSentenciaApelada($this->fechaMysql($SentenciasapeladasDto->getidSentenciaApelada()));
}
$SentenciasapeladasDto->setidImputadoSentencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciasapeladasDto->getidImputadoSentencia(),"utf8"):strtoupper($SentenciasapeladasDto->getidImputadoSentencia()))))));
if($this->esFecha($SentenciasapeladasDto->getidImputadoSentencia())){
$SentenciasapeladasDto->setidImputadoSentencia($this->fechaMysql($SentenciasapeladasDto->getidImputadoSentencia()));
}
$SentenciasapeladasDto->setcveSentido(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciasapeladasDto->getcveSentido(),"utf8"):strtoupper($SentenciasapeladasDto->getcveSentido()))))));
if($this->esFecha($SentenciasapeladasDto->getcveSentido())){
$SentenciasapeladasDto->setcveSentido($this->fechaMysql($SentenciasapeladasDto->getcveSentido()));
}
$SentenciasapeladasDto->setNumToca(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciasapeladasDto->getNumToca(),"utf8"):strtoupper($SentenciasapeladasDto->getNumToca()))))));
if($this->esFecha($SentenciasapeladasDto->getNumToca())){
$SentenciasapeladasDto->setNumToca($this->fechaMysql($SentenciasapeladasDto->getNumToca()));
}
$SentenciasapeladasDto->setAnioToca(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciasapeladasDto->getAnioToca(),"utf8"):strtoupper($SentenciasapeladasDto->getAnioToca()))))));
if($this->esFecha($SentenciasapeladasDto->getAnioToca())){
$SentenciasapeladasDto->setAnioToca($this->fechaMysql($SentenciasapeladasDto->getAnioToca()));
}
$SentenciasapeladasDto->setCveSala(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciasapeladasDto->getCveSala(),"utf8"):strtoupper($SentenciasapeladasDto->getCveSala()))))));
if($this->esFecha($SentenciasapeladasDto->getCveSala())){
$SentenciasapeladasDto->setCveSala($this->fechaMysql($SentenciasapeladasDto->getCveSala()));
}
$SentenciasapeladasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciasapeladasDto->getactivo(),"utf8"):strtoupper($SentenciasapeladasDto->getactivo()))))));
if($this->esFecha($SentenciasapeladasDto->getactivo())){
$SentenciasapeladasDto->setactivo($this->fechaMysql($SentenciasapeladasDto->getactivo()));
}
$SentenciasapeladasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciasapeladasDto->getfechaRegistro(),"utf8"):strtoupper($SentenciasapeladasDto->getfechaRegistro()))))));
if($this->esFecha($SentenciasapeladasDto->getfechaRegistro())){
$SentenciasapeladasDto->setfechaRegistro($this->fechaMysql($SentenciasapeladasDto->getfechaRegistro()));
}
$SentenciasapeladasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentenciasapeladasDto->getfechaActualizacion(),"utf8"):strtoupper($SentenciasapeladasDto->getfechaActualizacion()))))));
if($this->esFecha($SentenciasapeladasDto->getfechaActualizacion())){
$SentenciasapeladasDto->setfechaActualizacion($this->fechaMysql($SentenciasapeladasDto->getfechaActualizacion()));
}
return $SentenciasapeladasDto;
}
public function selectSentenciasapeladas($SentenciasapeladasDto){
$SentenciasapeladasDto=$this->validarSentenciasapeladas($SentenciasapeladasDto);
$SentenciasapeladasController = new SentenciasapeladasController();
$SentenciasapeladasDto = $SentenciasapeladasController->selectSentenciasapeladas($SentenciasapeladasDto);
if($SentenciasapeladasDto!=""){
$dtoToJson = new DtoToJson($SentenciasapeladasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertSentenciasapeladas($SentenciasapeladasDto){
$SentenciasapeladasDto=$this->validarSentenciasapeladas($SentenciasapeladasDto);
$SentenciasapeladasController = new SentenciasapeladasController();
$SentenciasapeladasDto = $SentenciasapeladasController->insertSentenciasapeladas($SentenciasapeladasDto);
if($SentenciasapeladasDto!=""){
$dtoToJson = new DtoToJson($SentenciasapeladasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateSentenciasapeladas($SentenciasapeladasDto){
$SentenciasapeladasDto=$this->validarSentenciasapeladas($SentenciasapeladasDto);
$SentenciasapeladasController = new SentenciasapeladasController();
$SentenciasapeladasDto = $SentenciasapeladasController->updateSentenciasapeladas($SentenciasapeladasDto);
if($SentenciasapeladasDto!=""){
$dtoToJson = new DtoToJson($SentenciasapeladasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteSentenciasapeladas($SentenciasapeladasDto){
$SentenciasapeladasDto=$this->validarSentenciasapeladas($SentenciasapeladasDto);
$SentenciasapeladasController = new SentenciasapeladasController();
$SentenciasapeladasDto = $SentenciasapeladasController->deleteSentenciasapeladas($SentenciasapeladasDto);
if($SentenciasapeladasDto==true){
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



@$idSentenciaApelada=$_POST["idSentenciaApelada"];
@$idImputadoSentencia=$_POST["idImputadoSentencia"];
@$cveSentido=$_POST["cveSentido"];
@$NumToca=$_POST["NumToca"];
@$AnioToca=$_POST["AnioToca"];
@$CveSala=$_POST["CveSala"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$sentenciasapeladasFacade = new SentenciasapeladasFacade();
$sentenciasapeladasDto = new SentenciasapeladasDTO();

$sentenciasapeladasDto->setIdSentenciaApelada($idSentenciaApelada);
$sentenciasapeladasDto->setIdImputadoSentencia($idImputadoSentencia);
$sentenciasapeladasDto->setCveSentido($cveSentido);
$sentenciasapeladasDto->setNumToca($NumToca);
$sentenciasapeladasDto->setAnioToca($AnioToca);
$sentenciasapeladasDto->setCveSala($CveSala);
$sentenciasapeladasDto->setActivo($activo);
$sentenciasapeladasDto->setFechaRegistro($fechaRegistro);
$sentenciasapeladasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idSentenciaApelada=="") ){
$sentenciasapeladasDto=$sentenciasapeladasFacade->insertSentenciasapeladas($sentenciasapeladasDto);
echo $sentenciasapeladasDto;
} else if(($accion=="guardar") && ($idSentenciaApelada!="")){
$sentenciasapeladasDto=$sentenciasapeladasFacade->updateSentenciasapeladas($sentenciasapeladasDto);
echo $sentenciasapeladasDto;
} else if($accion=="consultar"){
$sentenciasapeladasDto=$sentenciasapeladasFacade->selectSentenciasapeladas($sentenciasapeladasDto);
echo $sentenciasapeladasDto;
} else if( ($accion=="baja") && ($idSentenciaApelada!="") ){
$sentenciasapeladasDto=$sentenciasapeladasFacade->deleteSentenciasapeladas($sentenciasapeladasDto);
echo $sentenciasapeladasDto;
} else if( ($accion=="seleccionar") && ($idSentenciaApelada!="") ){
$sentenciasapeladasDto=$sentenciasapeladasFacade->selectSentenciasapeladas($sentenciasapeladasDto);
echo $sentenciasapeladasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>