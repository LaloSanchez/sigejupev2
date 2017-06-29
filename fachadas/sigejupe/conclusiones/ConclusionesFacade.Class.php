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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/conclusiones/ConclusionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/conclusiones/ConclusionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ConclusionesFacade {
private $proveedor;
public function __construct() {
}
public function validarConclusiones($ConclusionesDto){
$ConclusionesDto->setcveConclusion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConclusionesDto->getcveConclusion(),"utf8"):strtoupper($ConclusionesDto->getcveConclusion()))))));
if($this->esFecha($ConclusionesDto->getcveConclusion())){
$ConclusionesDto->setcveConclusion($this->fechaMysql($ConclusionesDto->getcveConclusion()));
}
$ConclusionesDto->setdesConclusion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConclusionesDto->getdesConclusion(),"utf8"):strtoupper($ConclusionesDto->getdesConclusion()))))));
if($this->esFecha($ConclusionesDto->getdesConclusion())){
$ConclusionesDto->setdesConclusion($this->fechaMysql($ConclusionesDto->getdesConclusion()));
}
$ConclusionesDto->setjuicio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConclusionesDto->getjuicio(),"utf8"):strtoupper($ConclusionesDto->getjuicio()))))));
if($this->esFecha($ConclusionesDto->getjuicio())){
$ConclusionesDto->setjuicio($this->fechaMysql($ConclusionesDto->getjuicio()));
}
$ConclusionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConclusionesDto->getactivo(),"utf8"):strtoupper($ConclusionesDto->getactivo()))))));
if($this->esFecha($ConclusionesDto->getactivo())){
$ConclusionesDto->setactivo($this->fechaMysql($ConclusionesDto->getactivo()));
}
$ConclusionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConclusionesDto->getfechaRegistro(),"utf8"):strtoupper($ConclusionesDto->getfechaRegistro()))))));
if($this->esFecha($ConclusionesDto->getfechaRegistro())){
$ConclusionesDto->setfechaRegistro($this->fechaMysql($ConclusionesDto->getfechaRegistro()));
}
$ConclusionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConclusionesDto->getfechaActualizacion(),"utf8"):strtoupper($ConclusionesDto->getfechaActualizacion()))))));
if($this->esFecha($ConclusionesDto->getfechaActualizacion())){
$ConclusionesDto->setfechaActualizacion($this->fechaMysql($ConclusionesDto->getfechaActualizacion()));
}
return $ConclusionesDto;
}
public function selectConclusiones($ConclusionesDto){
$ConclusionesDto=$this->validarConclusiones($ConclusionesDto);
$ConclusionesController = new ConclusionesController();
$ConclusionesDto = $ConclusionesController->selectConclusiones($ConclusionesDto);
if($ConclusionesDto!=""){
$dtoToJson = new DtoToJson($ConclusionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function selectConclusionesOrden($ConclusionesDto,$orden){
$ConclusionesDto=$this->validarConclusiones($ConclusionesDto);
$ConclusionesController = new ConclusionesController();
$ConclusionesDto = $ConclusionesController->selectConclusionesOrden($ConclusionesDto,$orden);
if($ConclusionesDto!=""){
$dtoToJson = new DtoToJson($ConclusionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertConclusiones($ConclusionesDto){
$ConclusionesDto=$this->validarConclusiones($ConclusionesDto);
$ConclusionesController = new ConclusionesController();
$ConclusionesDto = $ConclusionesController->insertConclusiones($ConclusionesDto);
if($ConclusionesDto!=""){
$dtoToJson = new DtoToJson($ConclusionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateConclusiones($ConclusionesDto){
$ConclusionesDto=$this->validarConclusiones($ConclusionesDto);
$ConclusionesController = new ConclusionesController();
$ConclusionesDto = $ConclusionesController->updateConclusiones($ConclusionesDto);
if($ConclusionesDto!=""){
$dtoToJson = new DtoToJson($ConclusionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteConclusiones($ConclusionesDto){
$ConclusionesDto=$this->validarConclusiones($ConclusionesDto);
$ConclusionesController = new ConclusionesController();
$ConclusionesDto = $ConclusionesController->deleteConclusiones($ConclusionesDto);
if($ConclusionesDto==true){
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



@$cveConclusion=$_POST["cveConclusion"];
@$desConclusion=$_POST["desConclusion"];
@$juicio=$_POST["juicio"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];
@$orden=$_POST["orden"];

$conclusionesFacade = new ConclusionesFacade();
$conclusionesDto = new ConclusionesDTO();

$conclusionesDto->setCveConclusion($cveConclusion);
$conclusionesDto->setDesConclusion($desConclusion);
$conclusionesDto->setJuicio($juicio);
$conclusionesDto->setActivo($activo);
$conclusionesDto->setFechaRegistro($fechaRegistro);
$conclusionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveConclusion=="") ){
$conclusionesDto=$conclusionesFacade->insertConclusiones($conclusionesDto);
echo $conclusionesDto;
} else if(($accion=="guardar") && ($cveConclusion!="")){
$conclusionesDto=$conclusionesFacade->updateConclusiones($conclusionesDto);
echo $conclusionesDto;
} else if($accion=="consultar"){
$conclusionesDto=$conclusionesFacade->selectConclusiones($conclusionesDto);
echo $conclusionesDto;
} else if( ($accion=="baja") && ($cveConclusion!="") ){
$conclusionesDto=$conclusionesFacade->deleteConclusiones($conclusionesDto);
echo $conclusionesDto;
} else if( ($accion=="seleccionar") && ($cveConclusion!="") ){
$conclusionesDto=$conclusionesFacade->selectConclusiones($conclusionesDto);
echo $conclusionesDto;
}else if($accion=="consultarOrdenado"){
$conclusionesDto=$conclusionesFacade->selectConclusionesOrden($conclusionesDto,$orden);
echo $conclusionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>