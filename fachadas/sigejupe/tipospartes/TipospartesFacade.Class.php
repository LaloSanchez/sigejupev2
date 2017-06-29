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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipospartes/TipospartesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tipospartes/TipospartesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TipospartesFacade {
private $proveedor;
public function __construct() {
}
public function validarTipospartes($TipospartesDto){
$TipospartesDto->setcveTipoParte(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipospartesDto->getcveTipoParte(),"utf8"):strtoupper($TipospartesDto->getcveTipoParte()))))));
if($this->esFecha($TipospartesDto->getcveTipoParte())){
$TipospartesDto->setcveTipoParte($this->fechaMysql($TipospartesDto->getcveTipoParte()));
}
$TipospartesDto->setdescTipoParte(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipospartesDto->getdescTipoParte(),"utf8"):strtoupper($TipospartesDto->getdescTipoParte()))))));
if($this->esFecha($TipospartesDto->getdescTipoParte())){
$TipospartesDto->setdescTipoParte($this->fechaMysql($TipospartesDto->getdescTipoParte()));
}
$TipospartesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipospartesDto->getactivo(),"utf8"):strtoupper($TipospartesDto->getactivo()))))));
if($this->esFecha($TipospartesDto->getactivo())){
$TipospartesDto->setactivo($this->fechaMysql($TipospartesDto->getactivo()));
}
$TipospartesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipospartesDto->getfechaRegistro(),"utf8"):strtoupper($TipospartesDto->getfechaRegistro()))))));
if($this->esFecha($TipospartesDto->getfechaRegistro())){
$TipospartesDto->setfechaRegistro($this->fechaMysql($TipospartesDto->getfechaRegistro()));
}
$TipospartesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipospartesDto->getfechaActualizacion(),"utf8"):strtoupper($TipospartesDto->getfechaActualizacion()))))));
if($this->esFecha($TipospartesDto->getfechaActualizacion())){
$TipospartesDto->setfechaActualizacion($this->fechaMysql($TipospartesDto->getfechaActualizacion()));
}
return $TipospartesDto;
}
public function selectTipospartes($TipospartesDto){
$TipospartesDto=$this->validarTipospartes($TipospartesDto);
$TipospartesController = new TipospartesController();
$TipospartesDto = $TipospartesController->selectTipospartes($TipospartesDto);
if($TipospartesDto!=""){
$dtoToJson = new DtoToJson($TipospartesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTipospartes($TipospartesDto){
$TipospartesDto=$this->validarTipospartes($TipospartesDto);
$TipospartesController = new TipospartesController();
$TipospartesDto = $TipospartesController->insertTipospartes($TipospartesDto);
if($TipospartesDto!=""){
$dtoToJson = new DtoToJson($TipospartesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTipospartes($TipospartesDto){
$TipospartesDto=$this->validarTipospartes($TipospartesDto);
$TipospartesController = new TipospartesController();
$TipospartesDto = $TipospartesController->updateTipospartes($TipospartesDto);
if($TipospartesDto!=""){
$dtoToJson = new DtoToJson($TipospartesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTipospartes($TipospartesDto){
$TipospartesDto=$this->validarTipospartes($TipospartesDto);
$TipospartesController = new TipospartesController();
$TipospartesDto = $TipospartesController->deleteTipospartes($TipospartesDto);
if($TipospartesDto==true){
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



@$cveTipoParte=$_POST["cveTipoParte"];
@$descTipoParte=$_POST["descTipoParte"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tipospartesFacade = new TipospartesFacade();
$tipospartesDto = new TipospartesDTO();

$tipospartesDto->setCveTipoParte($cveTipoParte);
$tipospartesDto->setDescTipoParte($descTipoParte);
$tipospartesDto->setActivo($activo);
$tipospartesDto->setFechaRegistro($fechaRegistro);
$tipospartesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoParte=="") ){
$tipospartesDto=$tipospartesFacade->insertTipospartes($tipospartesDto);
echo $tipospartesDto;
} else if(($accion=="guardar") && ($cveTipoParte!="")){
$tipospartesDto=$tipospartesFacade->updateTipospartes($tipospartesDto);
echo $tipospartesDto;
} else if($accion=="consultar"){
$tipospartesDto=$tipospartesFacade->selectTipospartes($tipospartesDto);
echo $tipospartesDto;
} else if( ($accion=="baja") && ($cveTipoParte!="") ){
$tipospartesDto=$tipospartesFacade->deleteTipospartes($tipospartesDto);
echo $tipospartesDto;
} else if( ($accion=="seleccionar") && ($cveTipoParte!="") ){
$tipospartesDto=$tipospartesFacade->selectTipospartes($tipospartesDto);
echo $tipospartesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>