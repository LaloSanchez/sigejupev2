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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/respuestasolicitudmuestra/RespuestasolicitudmuestraDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/respuestasolicitudmuestra/RespuestasolicitudmuestraController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class RespuestasolicitudmuestraFacade {
private $proveedor;
public function __construct() {
}
public function validarRespuestasolicitudmuestra($RespuestasolicitudmuestraDto){
$RespuestasolicitudmuestraDto->setcveRespuestaSolicitudMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudmuestraDto->getcveRespuestaSolicitudMuestra(),"utf8"):strtoupper($RespuestasolicitudmuestraDto->getcveRespuestaSolicitudMuestra()))))));
if($this->esFecha($RespuestasolicitudmuestraDto->getcveRespuestaSolicitudMuestra())){
$RespuestasolicitudmuestraDto->setcveRespuestaSolicitudMuestra($this->fechaMysql($RespuestasolicitudmuestraDto->getcveRespuestaSolicitudMuestra()));
}
$RespuestasolicitudmuestraDto->setdesRespuestaSolicitudMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudmuestraDto->getdesRespuestaSolicitudMuestra(),"utf8"):strtoupper($RespuestasolicitudmuestraDto->getdesRespuestaSolicitudMuestra()))))));
if($this->esFecha($RespuestasolicitudmuestraDto->getdesRespuestaSolicitudMuestra())){
$RespuestasolicitudmuestraDto->setdesRespuestaSolicitudMuestra($this->fechaMysql($RespuestasolicitudmuestraDto->getdesRespuestaSolicitudMuestra()));
}
$RespuestasolicitudmuestraDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudmuestraDto->getactivo(),"utf8"):strtoupper($RespuestasolicitudmuestraDto->getactivo()))))));
if($this->esFecha($RespuestasolicitudmuestraDto->getactivo())){
$RespuestasolicitudmuestraDto->setactivo($this->fechaMysql($RespuestasolicitudmuestraDto->getactivo()));
}
$RespuestasolicitudmuestraDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudmuestraDto->getfechaRegistro(),"utf8"):strtoupper($RespuestasolicitudmuestraDto->getfechaRegistro()))))));
if($this->esFecha($RespuestasolicitudmuestraDto->getfechaRegistro())){
$RespuestasolicitudmuestraDto->setfechaRegistro($this->fechaMysql($RespuestasolicitudmuestraDto->getfechaRegistro()));
}
$RespuestasolicitudmuestraDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RespuestasolicitudmuestraDto->getfechaActualizacion(),"utf8"):strtoupper($RespuestasolicitudmuestraDto->getfechaActualizacion()))))));
if($this->esFecha($RespuestasolicitudmuestraDto->getfechaActualizacion())){
$RespuestasolicitudmuestraDto->setfechaActualizacion($this->fechaMysql($RespuestasolicitudmuestraDto->getfechaActualizacion()));
}
return $RespuestasolicitudmuestraDto;
}
public function selectRespuestasolicitudmuestra($RespuestasolicitudmuestraDto){
$RespuestasolicitudmuestraDto=$this->validarRespuestasolicitudmuestra($RespuestasolicitudmuestraDto);
$RespuestasolicitudmuestraController = new RespuestasolicitudmuestraController();
$RespuestasolicitudmuestraDto = $RespuestasolicitudmuestraController->selectRespuestasolicitudmuestra($RespuestasolicitudmuestraDto);
if($RespuestasolicitudmuestraDto!=""){
$dtoToJson = new DtoToJson($RespuestasolicitudmuestraDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertRespuestasolicitudmuestra($RespuestasolicitudmuestraDto){
$RespuestasolicitudmuestraDto=$this->validarRespuestasolicitudmuestra($RespuestasolicitudmuestraDto);
$RespuestasolicitudmuestraController = new RespuestasolicitudmuestraController();
$RespuestasolicitudmuestraDto = $RespuestasolicitudmuestraController->insertRespuestasolicitudmuestra($RespuestasolicitudmuestraDto);
if($RespuestasolicitudmuestraDto!=""){
$dtoToJson = new DtoToJson($RespuestasolicitudmuestraDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateRespuestasolicitudmuestra($RespuestasolicitudmuestraDto){
$RespuestasolicitudmuestraDto=$this->validarRespuestasolicitudmuestra($RespuestasolicitudmuestraDto);
$RespuestasolicitudmuestraController = new RespuestasolicitudmuestraController();
$RespuestasolicitudmuestraDto = $RespuestasolicitudmuestraController->updateRespuestasolicitudmuestra($RespuestasolicitudmuestraDto);
if($RespuestasolicitudmuestraDto!=""){
$dtoToJson = new DtoToJson($RespuestasolicitudmuestraDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteRespuestasolicitudmuestra($RespuestasolicitudmuestraDto){
$RespuestasolicitudmuestraDto=$this->validarRespuestasolicitudmuestra($RespuestasolicitudmuestraDto);
$RespuestasolicitudmuestraController = new RespuestasolicitudmuestraController();
$RespuestasolicitudmuestraDto = $RespuestasolicitudmuestraController->deleteRespuestasolicitudmuestra($RespuestasolicitudmuestraDto);
if($RespuestasolicitudmuestraDto==true){
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



@$cveRespuestaSolicitudMuestra=$_POST["cveRespuestaSolicitudMuestra"];
@$desRespuestaSolicitudMuestra=$_POST["desRespuestaSolicitudMuestra"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$respuestasolicitudmuestraFacade = new RespuestasolicitudmuestraFacade();
$respuestasolicitudmuestraDto = new RespuestasolicitudmuestraDTO();

$respuestasolicitudmuestraDto->setCveRespuestaSolicitudMuestra($cveRespuestaSolicitudMuestra);
$respuestasolicitudmuestraDto->setDesRespuestaSolicitudMuestra($desRespuestaSolicitudMuestra);
$respuestasolicitudmuestraDto->setActivo($activo);
$respuestasolicitudmuestraDto->setFechaRegistro($fechaRegistro);
$respuestasolicitudmuestraDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveRespuestaSolicitudMuestra=="") ){
$respuestasolicitudmuestraDto=$respuestasolicitudmuestraFacade->insertRespuestasolicitudmuestra($respuestasolicitudmuestraDto);
echo $respuestasolicitudmuestraDto;
} else if(($accion=="guardar") && ($cveRespuestaSolicitudMuestra!="")){
$respuestasolicitudmuestraDto=$respuestasolicitudmuestraFacade->updateRespuestasolicitudmuestra($respuestasolicitudmuestraDto);
echo $respuestasolicitudmuestraDto;
} else if($accion=="consultar"){
$respuestasolicitudmuestraDto=$respuestasolicitudmuestraFacade->selectRespuestasolicitudmuestra($respuestasolicitudmuestraDto);
echo $respuestasolicitudmuestraDto;
} else if( ($accion=="baja") && ($cveRespuestaSolicitudMuestra!="") ){
$respuestasolicitudmuestraDto=$respuestasolicitudmuestraFacade->deleteRespuestasolicitudmuestra($respuestasolicitudmuestraDto);
echo $respuestasolicitudmuestraDto;
} else if( ($accion=="seleccionar") && ($cveRespuestaSolicitudMuestra!="") ){
$respuestasolicitudmuestraDto=$respuestasolicitudmuestraFacade->selectRespuestasolicitudmuestra($respuestasolicitudmuestraDto);
echo $respuestasolicitudmuestraDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");

?>