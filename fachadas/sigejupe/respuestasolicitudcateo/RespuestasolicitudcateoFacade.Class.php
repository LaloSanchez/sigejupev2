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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/respuestasolicitudcateo/RespuestasolicitudcateoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/respuestasolicitudcateo/RespuestasolicitudcateoController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class RespuestasolicitudcateoFacade {
private $proveedor;
public function __construct() {
}
public function validarRespuestasolicitudcateo($RespuestasolicitudcateoDto){
$RespuestasolicitudcateoDto->setcveRespuestaSolicitudCateo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudcateoDto->getcveRespuestaSolicitudCateo(),"utf8"):strtoupper($RespuestasolicitudcateoDto->getcveRespuestaSolicitudCateo()))))));
if($this->esFecha($RespuestasolicitudcateoDto->getcveRespuestaSolicitudCateo())){
$RespuestasolicitudcateoDto->setcveRespuestaSolicitudCateo($this->fechaMysql($RespuestasolicitudcateoDto->getcveRespuestaSolicitudCateo()));
}
$RespuestasolicitudcateoDto->setdesRespuestaSolicitudCateo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudcateoDto->getdesRespuestaSolicitudCateo(),"utf8"):strtoupper($RespuestasolicitudcateoDto->getdesRespuestaSolicitudCateo()))))));
if($this->esFecha($RespuestasolicitudcateoDto->getdesRespuestaSolicitudCateo())){
$RespuestasolicitudcateoDto->setdesRespuestaSolicitudCateo($this->fechaMysql($RespuestasolicitudcateoDto->getdesRespuestaSolicitudCateo()));
}
$RespuestasolicitudcateoDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudcateoDto->getactivo(),"utf8"):strtoupper($RespuestasolicitudcateoDto->getactivo()))))));
if($this->esFecha($RespuestasolicitudcateoDto->getactivo())){
$RespuestasolicitudcateoDto->setactivo($this->fechaMysql($RespuestasolicitudcateoDto->getactivo()));
}
$RespuestasolicitudcateoDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudcateoDto->getfechaRegistro(),"utf8"):strtoupper($RespuestasolicitudcateoDto->getfechaRegistro()))))));
if($this->esFecha($RespuestasolicitudcateoDto->getfechaRegistro())){
$RespuestasolicitudcateoDto->setfechaRegistro($this->fechaMysql($RespuestasolicitudcateoDto->getfechaRegistro()));
}
$RespuestasolicitudcateoDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudcateoDto->getfechaActualizacion(),"utf8"):strtoupper($RespuestasolicitudcateoDto->getfechaActualizacion()))))));
if($this->esFecha($RespuestasolicitudcateoDto->getfechaActualizacion())){
$RespuestasolicitudcateoDto->setfechaActualizacion($this->fechaMysql($RespuestasolicitudcateoDto->getfechaActualizacion()));
}
return $RespuestasolicitudcateoDto;
}
public function selectRespuestasolicitudcateo($RespuestasolicitudcateoDto){
$RespuestasolicitudcateoDto=$this->validarRespuestasolicitudcateo($RespuestasolicitudcateoDto);
$RespuestasolicitudcateoController = new RespuestasolicitudcateoController();
$RespuestasolicitudcateoDto = $RespuestasolicitudcateoController->selectRespuestasolicitudcateo($RespuestasolicitudcateoDto);
if($RespuestasolicitudcateoDto!=""){
$dtoToJson = new DtoToJson($RespuestasolicitudcateoDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertRespuestasolicitudcateo($RespuestasolicitudcateoDto){
$RespuestasolicitudcateoDto=$this->validarRespuestasolicitudcateo($RespuestasolicitudcateoDto);
$RespuestasolicitudcateoController = new RespuestasolicitudcateoController();
$RespuestasolicitudcateoDto = $RespuestasolicitudcateoController->insertRespuestasolicitudcateo($RespuestasolicitudcateoDto);
if($RespuestasolicitudcateoDto!=""){
$dtoToJson = new DtoToJson($RespuestasolicitudcateoDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateRespuestasolicitudcateo($RespuestasolicitudcateoDto){
$RespuestasolicitudcateoDto=$this->validarRespuestasolicitudcateo($RespuestasolicitudcateoDto);
$RespuestasolicitudcateoController = new RespuestasolicitudcateoController();
$RespuestasolicitudcateoDto = $RespuestasolicitudcateoController->updateRespuestasolicitudcateo($RespuestasolicitudcateoDto);
if($RespuestasolicitudcateoDto!=""){
$dtoToJson = new DtoToJson($RespuestasolicitudcateoDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteRespuestasolicitudcateo($RespuestasolicitudcateoDto){
$RespuestasolicitudcateoDto=$this->validarRespuestasolicitudcateo($RespuestasolicitudcateoDto);
$RespuestasolicitudcateoController = new RespuestasolicitudcateoController();
$RespuestasolicitudcateoDto = $RespuestasolicitudcateoController->deleteRespuestasolicitudcateo($RespuestasolicitudcateoDto);
if($RespuestasolicitudcateoDto==true){
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



@$cveRespuestaSolicitudCateo=$_POST["cveRespuestaSolicitudCateo"];
@$desRespuestaSolicitudCateo=$_POST["desRespuestaSolicitudCateo"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$respuestasolicitudcateoFacade = new RespuestasolicitudcateoFacade();
$respuestasolicitudcateoDto = new RespuestasolicitudcateoDTO();

$respuestasolicitudcateoDto->setCveRespuestaSolicitudCateo($cveRespuestaSolicitudCateo);
$respuestasolicitudcateoDto->setDesRespuestaSolicitudCateo($desRespuestaSolicitudCateo);
$respuestasolicitudcateoDto->setActivo($activo);
$respuestasolicitudcateoDto->setFechaRegistro($fechaRegistro);
$respuestasolicitudcateoDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveRespuestaSolicitudCateo=="") ){
$respuestasolicitudcateoDto=$respuestasolicitudcateoFacade->insertRespuestasolicitudcateo($respuestasolicitudcateoDto);
echo $respuestasolicitudcateoDto;
} else if(($accion=="guardar") && ($cveRespuestaSolicitudCateo!="")){
$respuestasolicitudcateoDto=$respuestasolicitudcateoFacade->updateRespuestasolicitudcateo($respuestasolicitudcateoDto);
echo $respuestasolicitudcateoDto;
} else if($accion=="consultar"){
$respuestasolicitudcateoDto=$respuestasolicitudcateoFacade->selectRespuestasolicitudcateo($respuestasolicitudcateoDto);
echo $respuestasolicitudcateoDto;
} else if( ($accion=="baja") && ($cveRespuestaSolicitudCateo!="") ){
$respuestasolicitudcateoDto=$respuestasolicitudcateoFacade->deleteRespuestasolicitudcateo($respuestasolicitudcateoDto);
echo $respuestasolicitudcateoDto;
} else if( ($accion=="seleccionar") && ($cveRespuestaSolicitudCateo!="") ){
$respuestasolicitudcateoDto=$respuestasolicitudcateoFacade->selectRespuestasolicitudcateo($respuestasolicitudcateoDto);
echo $respuestasolicitudcateoDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>