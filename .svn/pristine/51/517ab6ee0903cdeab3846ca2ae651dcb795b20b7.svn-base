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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/testigossexualescarpetas/TestigossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/testigossexualescarpetas/TestigossexualescarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TestigossexualescarpetasFacade {
private $proveedor;
public function __construct() {
}
public function validarTestigossexualescarpetas($TestigossexualescarpetasDto){
$TestigossexualescarpetasDto->setidTestigoSexualCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TestigossexualescarpetasDto->getidTestigoSexualCarpeta(),"utf8"):strtoupper($TestigossexualescarpetasDto->getidTestigoSexualCarpeta()))))));
if($this->esFecha($TestigossexualescarpetasDto->getidTestigoSexualCarpeta())){
$TestigossexualescarpetasDto->setidTestigoSexualCarpeta($this->fechaMysql($TestigossexualescarpetasDto->getidTestigoSexualCarpeta()));
}
$TestigossexualescarpetasDto->setidSexualCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TestigossexualescarpetasDto->getidSexualCarpeta(),"utf8"):strtoupper($TestigossexualescarpetasDto->getidSexualCarpeta()))))));
if($this->esFecha($TestigossexualescarpetasDto->getidSexualCarpeta())){
$TestigossexualescarpetasDto->setidSexualCarpeta($this->fechaMysql($TestigossexualescarpetasDto->getidSexualCarpeta()));
}
$TestigossexualescarpetasDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TestigossexualescarpetasDto->getpaterno(),"utf8"):strtoupper($TestigossexualescarpetasDto->getpaterno()))))));
if($this->esFecha($TestigossexualescarpetasDto->getpaterno())){
$TestigossexualescarpetasDto->setpaterno($this->fechaMysql($TestigossexualescarpetasDto->getpaterno()));
}
$TestigossexualescarpetasDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TestigossexualescarpetasDto->getmaterno(),"utf8"):strtoupper($TestigossexualescarpetasDto->getmaterno()))))));
if($this->esFecha($TestigossexualescarpetasDto->getmaterno())){
$TestigossexualescarpetasDto->setmaterno($this->fechaMysql($TestigossexualescarpetasDto->getmaterno()));
}
$TestigossexualescarpetasDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TestigossexualescarpetasDto->getnombre(),"utf8"):strtoupper($TestigossexualescarpetasDto->getnombre()))))));
if($this->esFecha($TestigossexualescarpetasDto->getnombre())){
$TestigossexualescarpetasDto->setnombre($this->fechaMysql($TestigossexualescarpetasDto->getnombre()));
}
$TestigossexualescarpetasDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TestigossexualescarpetasDto->getcveGenero(),"utf8"):strtoupper($TestigossexualescarpetasDto->getcveGenero()))))));
if($this->esFecha($TestigossexualescarpetasDto->getcveGenero())){
$TestigossexualescarpetasDto->setcveGenero($this->fechaMysql($TestigossexualescarpetasDto->getcveGenero()));
}
$TestigossexualescarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TestigossexualescarpetasDto->getactivo(),"utf8"):strtoupper($TestigossexualescarpetasDto->getactivo()))))));
if($this->esFecha($TestigossexualescarpetasDto->getactivo())){
$TestigossexualescarpetasDto->setactivo($this->fechaMysql($TestigossexualescarpetasDto->getactivo()));
}
$TestigossexualescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TestigossexualescarpetasDto->getfechaRegistro(),"utf8"):strtoupper($TestigossexualescarpetasDto->getfechaRegistro()))))));
if($this->esFecha($TestigossexualescarpetasDto->getfechaRegistro())){
$TestigossexualescarpetasDto->setfechaRegistro($this->fechaMysql($TestigossexualescarpetasDto->getfechaRegistro()));
}
$TestigossexualescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TestigossexualescarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($TestigossexualescarpetasDto->getfechaActualizacion()))))));
if($this->esFecha($TestigossexualescarpetasDto->getfechaActualizacion())){
$TestigossexualescarpetasDto->setfechaActualizacion($this->fechaMysql($TestigossexualescarpetasDto->getfechaActualizacion()));
}
return $TestigossexualescarpetasDto;
}
public function selectTestigossexualescarpetas($TestigossexualescarpetasDto){
$TestigossexualescarpetasDto=$this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
$TestigossexualescarpetasController = new TestigossexualescarpetasController();
$TestigossexualescarpetasDto = $TestigossexualescarpetasController->selectTestigossexualescarpetas($TestigossexualescarpetasDto);
if($TestigossexualescarpetasDto!=""){
$dtoToJson = new DtoToJson($TestigossexualescarpetasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTestigossexualescarpetas($TestigossexualescarpetasDto){
$TestigossexualescarpetasDto=$this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
$TestigossexualescarpetasController = new TestigossexualescarpetasController();
$TestigossexualescarpetasDto = $TestigossexualescarpetasController->insertTestigossexualescarpetas($TestigossexualescarpetasDto);
if($TestigossexualescarpetasDto!=""){
$dtoToJson = new DtoToJson($TestigossexualescarpetasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTestigossexualescarpetas($TestigossexualescarpetasDto){
$TestigossexualescarpetasDto=$this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
$TestigossexualescarpetasController = new TestigossexualescarpetasController();
$TestigossexualescarpetasDto = $TestigossexualescarpetasController->updateTestigossexualescarpetas($TestigossexualescarpetasDto);
if($TestigossexualescarpetasDto!=""){
$dtoToJson = new DtoToJson($TestigossexualescarpetasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTestigossexualescarpetas($TestigossexualescarpetasDto){
$TestigossexualescarpetasDto=$this->validarTestigossexualescarpetas($TestigossexualescarpetasDto);
$TestigossexualescarpetasController = new TestigossexualescarpetasController();
$TestigossexualescarpetasDto = $TestigossexualescarpetasController->deleteTestigossexualescarpetas($TestigossexualescarpetasDto);
if($TestigossexualescarpetasDto==true){
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



@$idTestigoSexualCarpeta=$_POST["idTestigoSexualCarpeta"];
@$idSexualCarpeta=$_POST["idSexualCarpeta"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$nombre=$_POST["nombre"];
@$cveGenero=$_POST["cveGenero"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$testigossexualescarpetasFacade = new TestigossexualescarpetasFacade();
$testigossexualescarpetasDto = new TestigossexualescarpetasDTO();

$testigossexualescarpetasDto->setIdTestigoSexualCarpeta($idTestigoSexualCarpeta);
$testigossexualescarpetasDto->setIdSexualCarpeta($idSexualCarpeta);
$testigossexualescarpetasDto->setPaterno($paterno);
$testigossexualescarpetasDto->setMaterno($materno);
$testigossexualescarpetasDto->setNombre($nombre);
$testigossexualescarpetasDto->setCveGenero($cveGenero);
$testigossexualescarpetasDto->setActivo($activo);
$testigossexualescarpetasDto->setFechaRegistro($fechaRegistro);
$testigossexualescarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idTestigoSexualCarpeta=="") ){
$testigossexualescarpetasDto=$testigossexualescarpetasFacade->insertTestigossexualescarpetas($testigossexualescarpetasDto);
echo $testigossexualescarpetasDto;
} else if(($accion=="guardar") && ($idTestigoSexualCarpeta!="")){
$testigossexualescarpetasDto=$testigossexualescarpetasFacade->updateTestigossexualescarpetas($testigossexualescarpetasDto);
echo $testigossexualescarpetasDto;
} else if($accion=="consultar"){
$testigossexualescarpetasDto=$testigossexualescarpetasFacade->selectTestigossexualescarpetas($testigossexualescarpetasDto);
echo $testigossexualescarpetasDto;
} else if( ($accion=="baja") && ($idTestigoSexualCarpeta!="") ){
$testigossexualescarpetasDto=$testigossexualescarpetasFacade->deleteTestigossexualescarpetas($testigossexualescarpetasDto);
echo $testigossexualescarpetasDto;
} else if( ($accion=="seleccionar") && ($idTestigoSexualCarpeta!="") ){
$testigossexualescarpetasDto=$testigossexualescarpetasFacade->selectTestigossexualescarpetas($testigossexualescarpetasDto);
echo $testigossexualescarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>