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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/respuestasolicitudorden/RespuestasolicitudordenDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/respuestasolicitudorden/RespuestasolicitudordenController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class RespuestasolicitudordenFacade {
private $proveedor;
public function __construct() {
}
public function validarRespuestasolicitudorden($RespuestasolicitudordenDto){
$RespuestasolicitudordenDto->setcveRespuestaSolicitudOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudordenDto->getcveRespuestaSolicitudOrden(),"utf8"):strtoupper($RespuestasolicitudordenDto->getcveRespuestaSolicitudOrden()))))));
if($this->esFecha($RespuestasolicitudordenDto->getcveRespuestaSolicitudOrden())){
$RespuestasolicitudordenDto->setcveRespuestaSolicitudOrden($this->fechaMysql($RespuestasolicitudordenDto->getcveRespuestaSolicitudOrden()));
}
$RespuestasolicitudordenDto->setdesRespuestaSolicitudOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudordenDto->getdesRespuestaSolicitudOrden(),"utf8"):strtoupper($RespuestasolicitudordenDto->getdesRespuestaSolicitudOrden()))))));
if($this->esFecha($RespuestasolicitudordenDto->getdesRespuestaSolicitudOrden())){
$RespuestasolicitudordenDto->setdesRespuestaSolicitudOrden($this->fechaMysql($RespuestasolicitudordenDto->getdesRespuestaSolicitudOrden()));
}
$RespuestasolicitudordenDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudordenDto->getactivo(),"utf8"):strtoupper($RespuestasolicitudordenDto->getactivo()))))));
if($this->esFecha($RespuestasolicitudordenDto->getactivo())){
$RespuestasolicitudordenDto->setactivo($this->fechaMysql($RespuestasolicitudordenDto->getactivo()));
}
$RespuestasolicitudordenDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudordenDto->getfechaRegistro(),"utf8"):strtoupper($RespuestasolicitudordenDto->getfechaRegistro()))))));
if($this->esFecha($RespuestasolicitudordenDto->getfechaRegistro())){
$RespuestasolicitudordenDto->setfechaRegistro($this->fechaMysql($RespuestasolicitudordenDto->getfechaRegistro()));
}
$RespuestasolicitudordenDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudordenDto->getfechaActualizacion(),"utf8"):strtoupper($RespuestasolicitudordenDto->getfechaActualizacion()))))));
if($this->esFecha($RespuestasolicitudordenDto->getfechaActualizacion())){
$RespuestasolicitudordenDto->setfechaActualizacion($this->fechaMysql($RespuestasolicitudordenDto->getfechaActualizacion()));
}
return $RespuestasolicitudordenDto;
}
public function selectRespuestasolicitudorden($RespuestasolicitudordenDto){
$RespuestasolicitudordenDto=$this->validarRespuestasolicitudorden($RespuestasolicitudordenDto);
$RespuestasolicitudordenController = new RespuestasolicitudordenController();
$RespuestasolicitudordenDto = $RespuestasolicitudordenController->selectRespuestasolicitudorden($RespuestasolicitudordenDto);
if($RespuestasolicitudordenDto!=""){
$dtoToJson = new DtoToJson($RespuestasolicitudordenDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertRespuestasolicitudorden($RespuestasolicitudordenDto){
$RespuestasolicitudordenDto=$this->validarRespuestasolicitudorden($RespuestasolicitudordenDto);
$RespuestasolicitudordenController = new RespuestasolicitudordenController();
$RespuestasolicitudordenDto = $RespuestasolicitudordenController->insertRespuestasolicitudorden($RespuestasolicitudordenDto);
if($RespuestasolicitudordenDto!=""){
$dtoToJson = new DtoToJson($RespuestasolicitudordenDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateRespuestasolicitudorden($RespuestasolicitudordenDto){
$RespuestasolicitudordenDto=$this->validarRespuestasolicitudorden($RespuestasolicitudordenDto);
$RespuestasolicitudordenController = new RespuestasolicitudordenController();
$RespuestasolicitudordenDto = $RespuestasolicitudordenController->updateRespuestasolicitudorden($RespuestasolicitudordenDto);
if($RespuestasolicitudordenDto!=""){
$dtoToJson = new DtoToJson($RespuestasolicitudordenDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteRespuestasolicitudorden($RespuestasolicitudordenDto){
$RespuestasolicitudordenDto=$this->validarRespuestasolicitudorden($RespuestasolicitudordenDto);
$RespuestasolicitudordenController = new RespuestasolicitudordenController();
$RespuestasolicitudordenDto = $RespuestasolicitudordenController->deleteRespuestasolicitudorden($RespuestasolicitudordenDto);
if($RespuestasolicitudordenDto==true){
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



@$cveRespuestaSolicitudOrden=$_POST["cveRespuestaSolicitudOrden"];
@$desRespuestaSolicitudOrden=$_POST["desRespuestaSolicitudOrden"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$respuestasolicitudordenFacade = new RespuestasolicitudordenFacade();
$respuestasolicitudordenDto = new RespuestasolicitudordenDTO();

$respuestasolicitudordenDto->setCveRespuestaSolicitudOrden($cveRespuestaSolicitudOrden);
$respuestasolicitudordenDto->setDesRespuestaSolicitudOrden($desRespuestaSolicitudOrden);
$respuestasolicitudordenDto->setActivo($activo);
$respuestasolicitudordenDto->setFechaRegistro($fechaRegistro);
$respuestasolicitudordenDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveRespuestaSolicitudOrden=="") ){
$respuestasolicitudordenDto=$respuestasolicitudordenFacade->insertRespuestasolicitudorden($respuestasolicitudordenDto);
echo $respuestasolicitudordenDto;
} else if(($accion=="guardar") && ($cveRespuestaSolicitudOrden!="")){
$respuestasolicitudordenDto=$respuestasolicitudordenFacade->updateRespuestasolicitudorden($respuestasolicitudordenDto);
echo $respuestasolicitudordenDto;
} else if($accion=="consultar"){
$respuestasolicitudordenDto=$respuestasolicitudordenFacade->selectRespuestasolicitudorden($respuestasolicitudordenDto);
echo $respuestasolicitudordenDto;
} else if( ($accion=="baja") && ($cveRespuestaSolicitudOrden!="") ){
$respuestasolicitudordenDto=$respuestasolicitudordenFacade->deleteRespuestasolicitudorden($respuestasolicitudordenDto);
echo $respuestasolicitudordenDto;
} else if( ($accion=="seleccionar") && ($cveRespuestaSolicitudOrden!="") ){
$respuestasolicitudordenDto=$respuestasolicitudordenFacade->selectRespuestasolicitudorden($respuestasolicitudordenDto);
echo $respuestasolicitudordenDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>