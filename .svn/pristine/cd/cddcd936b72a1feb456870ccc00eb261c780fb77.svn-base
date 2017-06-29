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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/trasportaciones/TrasportacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/trasportaciones/TrasportacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TrasportacionesFacade {
private $proveedor;
public function __construct() {
}
public function validarTrasportaciones($TrasportacionesDto){
$TrasportacionesDto->setcveTrasportacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrasportacionesDto->getcveTrasportacion(),"utf8"):strtoupper($TrasportacionesDto->getcveTrasportacion()))))));
if($this->esFecha($TrasportacionesDto->getcveTrasportacion())){
$TrasportacionesDto->setcveTrasportacion($this->fechaMysql($TrasportacionesDto->getcveTrasportacion()));
}
$TrasportacionesDto->setdesTrasportacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrasportacionesDto->getdesTrasportacion(),"utf8"):strtoupper($TrasportacionesDto->getdesTrasportacion()))))));
if($this->esFecha($TrasportacionesDto->getdesTrasportacion())){
$TrasportacionesDto->setdesTrasportacion($this->fechaMysql($TrasportacionesDto->getdesTrasportacion()));
}
$TrasportacionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrasportacionesDto->getactivo(),"utf8"):strtoupper($TrasportacionesDto->getactivo()))))));
if($this->esFecha($TrasportacionesDto->getactivo())){
$TrasportacionesDto->setactivo($this->fechaMysql($TrasportacionesDto->getactivo()));
}
$TrasportacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrasportacionesDto->getfechaRegistro(),"utf8"):strtoupper($TrasportacionesDto->getfechaRegistro()))))));
if($this->esFecha($TrasportacionesDto->getfechaRegistro())){
$TrasportacionesDto->setfechaRegistro($this->fechaMysql($TrasportacionesDto->getfechaRegistro()));
}
$TrasportacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrasportacionesDto->getfechaActualizacion(),"utf8"):strtoupper($TrasportacionesDto->getfechaActualizacion()))))));
if($this->esFecha($TrasportacionesDto->getfechaActualizacion())){
$TrasportacionesDto->setfechaActualizacion($this->fechaMysql($TrasportacionesDto->getfechaActualizacion()));
}
return $TrasportacionesDto;
}
public function selectTrasportaciones($TrasportacionesDto){
$TrasportacionesDto=$this->validarTrasportaciones($TrasportacionesDto);
$TrasportacionesController = new TrasportacionesController();
$TrasportacionesDto = $TrasportacionesController->selectTrasportaciones($TrasportacionesDto);
if($TrasportacionesDto!=""){
$dtoToJson = new DtoToJson($TrasportacionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTrasportaciones($TrasportacionesDto){
$TrasportacionesDto=$this->validarTrasportaciones($TrasportacionesDto);
$TrasportacionesController = new TrasportacionesController();
$TrasportacionesDto = $TrasportacionesController->insertTrasportaciones($TrasportacionesDto);
if($TrasportacionesDto!=""){
$dtoToJson = new DtoToJson($TrasportacionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTrasportaciones($TrasportacionesDto){
$TrasportacionesDto=$this->validarTrasportaciones($TrasportacionesDto);
$TrasportacionesController = new TrasportacionesController();
$TrasportacionesDto = $TrasportacionesController->updateTrasportaciones($TrasportacionesDto);
if($TrasportacionesDto!=""){
$dtoToJson = new DtoToJson($TrasportacionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTrasportaciones($TrasportacionesDto){
$TrasportacionesDto=$this->validarTrasportaciones($TrasportacionesDto);
$TrasportacionesController = new TrasportacionesController();
$TrasportacionesDto = $TrasportacionesController->deleteTrasportaciones($TrasportacionesDto);
if($TrasportacionesDto==true){
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



@$cveTrasportacion=$_POST["cveTrasportacion"];
@$desTrasportacion=$_POST["desTrasportacion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$trasportacionesFacade = new TrasportacionesFacade();
$trasportacionesDto = new TrasportacionesDTO();

$trasportacionesDto->setCveTrasportacion($cveTrasportacion);
$trasportacionesDto->setDesTrasportacion($desTrasportacion);
$trasportacionesDto->setActivo($activo);
$trasportacionesDto->setFechaRegistro($fechaRegistro);
$trasportacionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTrasportacion=="") ){
$trasportacionesDto=$trasportacionesFacade->insertTrasportaciones($trasportacionesDto);
echo $trasportacionesDto;
} else if(($accion=="guardar") && ($cveTrasportacion!="")){
$trasportacionesDto=$trasportacionesFacade->updateTrasportaciones($trasportacionesDto);
echo $trasportacionesDto;
} else if($accion=="consultar"){
$trasportacionesDto=$trasportacionesFacade->selectTrasportaciones($trasportacionesDto);
echo $trasportacionesDto;
} else if( ($accion=="baja") && ($cveTrasportacion!="") ){
$trasportacionesDto=$trasportacionesFacade->deleteTrasportaciones($trasportacionesDto);
echo $trasportacionesDto;
} else if( ($accion=="seleccionar") && ($cveTrasportacion!="") ){
$trasportacionesDto=$trasportacionesFacade->selectTrasportaciones($trasportacionesDto);
echo $trasportacionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>