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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/audienciasdistritos/AudienciasdistritosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/audienciasdistritos/AudienciasdistritosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class AudienciasdistritosFacade {
private $proveedor;
public function __construct() {
}
public function validarAudienciasdistritos($AudienciasdistritosDto){
$AudienciasdistritosDto->setidAudienciaDistrito(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AudienciasdistritosDto->getidAudienciaDistrito(),"utf8"):strtoupper($AudienciasdistritosDto->getidAudienciaDistrito()))))));
if($this->esFecha($AudienciasdistritosDto->getidAudienciaDistrito())){
$AudienciasdistritosDto->setidAudienciaDistrito($this->fechaMysql($AudienciasdistritosDto->getidAudienciaDistrito()));
}
$AudienciasdistritosDto->setcveDistrito(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AudienciasdistritosDto->getcveDistrito(),"utf8"):strtoupper($AudienciasdistritosDto->getcveDistrito()))))));
if($this->esFecha($AudienciasdistritosDto->getcveDistrito())){
$AudienciasdistritosDto->setcveDistrito($this->fechaMysql($AudienciasdistritosDto->getcveDistrito()));
}
$AudienciasdistritosDto->setcveCatAudiencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AudienciasdistritosDto->getcveCatAudiencia(),"utf8"):strtoupper($AudienciasdistritosDto->getcveCatAudiencia()))))));
if($this->esFecha($AudienciasdistritosDto->getcveCatAudiencia())){
$AudienciasdistritosDto->setcveCatAudiencia($this->fechaMysql($AudienciasdistritosDto->getcveCatAudiencia()));
}
$AudienciasdistritosDto->setholgura(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AudienciasdistritosDto->getholgura(),"utf8"):strtoupper($AudienciasdistritosDto->getholgura()))))));
if($this->esFecha($AudienciasdistritosDto->getholgura())){
$AudienciasdistritosDto->setholgura($this->fechaMysql($AudienciasdistritosDto->getholgura()));
}
$AudienciasdistritosDto->setminDuracion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AudienciasdistritosDto->getminDuracion(),"utf8"):strtoupper($AudienciasdistritosDto->getminDuracion()))))));
if($this->esFecha($AudienciasdistritosDto->getminDuracion())){
$AudienciasdistritosDto->setminDuracion($this->fechaMysql($AudienciasdistritosDto->getminDuracion()));
}
$AudienciasdistritosDto->setmaxDuracion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AudienciasdistritosDto->getmaxDuracion(),"utf8"):strtoupper($AudienciasdistritosDto->getmaxDuracion()))))));
if($this->esFecha($AudienciasdistritosDto->getmaxDuracion())){
$AudienciasdistritosDto->setmaxDuracion($this->fechaMysql($AudienciasdistritosDto->getmaxDuracion()));
}
$AudienciasdistritosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AudienciasdistritosDto->getactivo(),"utf8"):strtoupper($AudienciasdistritosDto->getactivo()))))));
if($this->esFecha($AudienciasdistritosDto->getactivo())){
$AudienciasdistritosDto->setactivo($this->fechaMysql($AudienciasdistritosDto->getactivo()));
}
$AudienciasdistritosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AudienciasdistritosDto->getfechaRegistro(),"utf8"):strtoupper($AudienciasdistritosDto->getfechaRegistro()))))));
if($this->esFecha($AudienciasdistritosDto->getfechaRegistro())){
$AudienciasdistritosDto->setfechaRegistro($this->fechaMysql($AudienciasdistritosDto->getfechaRegistro()));
}
$AudienciasdistritosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AudienciasdistritosDto->getfechaActualizacion(),"utf8"):strtoupper($AudienciasdistritosDto->getfechaActualizacion()))))));
if($this->esFecha($AudienciasdistritosDto->getfechaActualizacion())){
$AudienciasdistritosDto->setfechaActualizacion($this->fechaMysql($AudienciasdistritosDto->getfechaActualizacion()));
}
return $AudienciasdistritosDto;
}
public function selectAudienciasdistritos($AudienciasdistritosDto){
$AudienciasdistritosDto=$this->validarAudienciasdistritos($AudienciasdistritosDto);
$AudienciasdistritosController = new AudienciasdistritosController();
$AudienciasdistritosDto = $AudienciasdistritosController->selectAudienciasdistritos($AudienciasdistritosDto);
if($AudienciasdistritosDto!=""){
$dtoToJson = new DtoToJson($AudienciasdistritosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertAudienciasdistritos($AudienciasdistritosDto){
$AudienciasdistritosDto=$this->validarAudienciasdistritos($AudienciasdistritosDto);
$AudienciasdistritosController = new AudienciasdistritosController();
$AudienciasdistritosDto = $AudienciasdistritosController->insertAudienciasdistritos($AudienciasdistritosDto);
if($AudienciasdistritosDto!=""){
$dtoToJson = new DtoToJson($AudienciasdistritosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateAudienciasdistritos($AudienciasdistritosDto){
$AudienciasdistritosDto=$this->validarAudienciasdistritos($AudienciasdistritosDto);
$AudienciasdistritosController = new AudienciasdistritosController();
$AudienciasdistritosDto = $AudienciasdistritosController->updateAudienciasdistritos($AudienciasdistritosDto);
if($AudienciasdistritosDto!=""){
$dtoToJson = new DtoToJson($AudienciasdistritosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteAudienciasdistritos($AudienciasdistritosDto){
$AudienciasdistritosDto=$this->validarAudienciasdistritos($AudienciasdistritosDto);
$AudienciasdistritosController = new AudienciasdistritosController();
$AudienciasdistritosDto = $AudienciasdistritosController->deleteAudienciasdistritos($AudienciasdistritosDto);
if($AudienciasdistritosDto==true){
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



@$idAudienciaDistrito=$_POST["idAudienciaDistrito"];
@$cveDistrito=$_POST["cveDistrito"];
@$cveCatAudiencia=$_POST["cveCatAudiencia"];
@$holgura=$_POST["holgura"];
@$minDuracion=$_POST["minDuracion"];
@$maxDuracion=$_POST["maxDuracion"];
@$minHorasDesahogar=$_POST["minHorasDesahogar"];
@$maxHorasDesahogar=$_POST["maxHorasDesahogar"];
@$finSemana=$_POST["finSemana"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$audienciasdistritosFacade = new AudienciasdistritosFacade();
$audienciasdistritosDto = new AudienciasdistritosDTO();

$audienciasdistritosDto->setIdAudienciaDistrito($idAudienciaDistrito);
$audienciasdistritosDto->setCveDistrito($cveDistrito);
$audienciasdistritosDto->setCveCatAudiencia($cveCatAudiencia);
$audienciasdistritosDto->setHolgura($holgura);
$audienciasdistritosDto->setMinDuracion($minDuracion);
$audienciasdistritosDto->setMaxDuracion($maxDuracion);
$audienciasdistritosDto->setMinHorasDesahogar($minHorasDesahogar);
$audienciasdistritosDto->setMaxHorasDesahogar($maxHorasDesahogar);
$audienciasdistritosDto->setFinSemana($finSemana);
$audienciasdistritosDto->setActivo($activo);
$audienciasdistritosDto->setFechaRegistro($fechaRegistro);
$audienciasdistritosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idAudienciaDistrito=="") ){
$audienciasdistritosDto=$audienciasdistritosFacade->insertAudienciasdistritos($audienciasdistritosDto);
echo $audienciasdistritosDto;
} else if(($accion=="guardar") && ($idAudienciaDistrito!="")){
$audienciasdistritosDto=$audienciasdistritosFacade->updateAudienciasdistritos($audienciasdistritosDto);
echo $audienciasdistritosDto;
} else if($accion=="consultar"){
$audienciasdistritosDto=$audienciasdistritosFacade->selectAudienciasdistritos($audienciasdistritosDto);
echo $audienciasdistritosDto;
} else if( ($accion=="baja") && ($idAudienciaDistrito!="") ){
$audienciasdistritosDto=$audienciasdistritosFacade->deleteAudienciasdistritos($audienciasdistritosDto);
echo $audienciasdistritosDto;
} else if( ($accion=="seleccionar") && ($idAudienciaDistrito!="") ){
$audienciasdistritosDto=$audienciasdistritosFacade->selectAudienciasdistritos($audienciasdistritosDto);
echo $audienciasdistritosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>