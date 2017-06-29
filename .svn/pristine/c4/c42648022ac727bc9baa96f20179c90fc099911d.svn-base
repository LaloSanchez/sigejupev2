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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitoscateos/DelitoscateosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/delitoscateos/DelitoscateosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class DelitoscateosFacade {
private $proveedor;
public function __construct() {
}
public function validarDelitoscateos($DelitoscateosDto){
$DelitoscateosDto->setidDelitoCateo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitoscateosDto->getidDelitoCateo(),"utf8"):strtoupper($DelitoscateosDto->getidDelitoCateo()))))));
if($this->esFecha($DelitoscateosDto->getidDelitoCateo())){
$DelitoscateosDto->setidDelitoCateo($this->fechaMysql($DelitoscateosDto->getidDelitoCateo()));
}
$DelitoscateosDto->setidSolicitudCateo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitoscateosDto->getidSolicitudCateo(),"utf8"):strtoupper($DelitoscateosDto->getidSolicitudCateo()))))));
if($this->esFecha($DelitoscateosDto->getidSolicitudCateo())){
$DelitoscateosDto->setidSolicitudCateo($this->fechaMysql($DelitoscateosDto->getidSolicitudCateo()));
}
$DelitoscateosDto->setcveDelito(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitoscateosDto->getcveDelito(),"utf8"):strtoupper($DelitoscateosDto->getcveDelito()))))));
if($this->esFecha($DelitoscateosDto->getcveDelito())){
$DelitoscateosDto->setcveDelito($this->fechaMysql($DelitoscateosDto->getcveDelito()));
}
$DelitoscateosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitoscateosDto->getactivo(),"utf8"):strtoupper($DelitoscateosDto->getactivo()))))));
if($this->esFecha($DelitoscateosDto->getactivo())){
$DelitoscateosDto->setactivo($this->fechaMysql($DelitoscateosDto->getactivo()));
}
$DelitoscateosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitoscateosDto->getfechaRegistro(),"utf8"):strtoupper($DelitoscateosDto->getfechaRegistro()))))));
if($this->esFecha($DelitoscateosDto->getfechaRegistro())){
$DelitoscateosDto->setfechaRegistro($this->fechaMysql($DelitoscateosDto->getfechaRegistro()));
}
$DelitoscateosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitoscateosDto->getfechaActualizacion(),"utf8"):strtoupper($DelitoscateosDto->getfechaActualizacion()))))));
if($this->esFecha($DelitoscateosDto->getfechaActualizacion())){
$DelitoscateosDto->setfechaActualizacion($this->fechaMysql($DelitoscateosDto->getfechaActualizacion()));
}
return $DelitoscateosDto;
}
public function selectDelitoscateos($DelitoscateosDto){
$DelitoscateosDto=$this->validarDelitoscateos($DelitoscateosDto);
$DelitoscateosController = new DelitoscateosController();
$DelitoscateosDto = $DelitoscateosController->selectDelitoscateos($DelitoscateosDto);
if($DelitoscateosDto!=""){
$dtoToJson = new DtoToJson($DelitoscateosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertDelitoscateos($DelitoscateosDto){
$DelitoscateosDto=$this->validarDelitoscateos($DelitoscateosDto);
$DelitoscateosController = new DelitoscateosController();
$DelitoscateosDto = $DelitoscateosController->insertDelitoscateos($DelitoscateosDto);
if($DelitoscateosDto!=""){
$dtoToJson = new DtoToJson($DelitoscateosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateDelitoscateos($DelitoscateosDto){
$DelitoscateosDto=$this->validarDelitoscateos($DelitoscateosDto);
$DelitoscateosController = new DelitoscateosController();
$DelitoscateosDto = $DelitoscateosController->updateDelitoscateos($DelitoscateosDto);
if($DelitoscateosDto!=""){
$dtoToJson = new DtoToJson($DelitoscateosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteDelitoscateos($DelitoscateosDto){
$DelitoscateosDto=$this->validarDelitoscateos($DelitoscateosDto);
$DelitoscateosController = new DelitoscateosController();
$DelitoscateosDto = $DelitoscateosController->deleteDelitoscateos($DelitoscateosDto);
if($DelitoscateosDto==true){
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



@$idDelitoCateo=$_POST["idDelitoCateo"];
@$idSolicitudCateo=$_POST["idSolicitudCateo"];
@$cveDelito=$_POST["cveDelito"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$delitoscateosFacade = new DelitoscateosFacade();
$delitoscateosDto = new DelitoscateosDTO();

$delitoscateosDto->setIdDelitoCateo($idDelitoCateo);
$delitoscateosDto->setIdSolicitudCateo($idSolicitudCateo);
$delitoscateosDto->setCveDelito($cveDelito);
$delitoscateosDto->setActivo($activo);
$delitoscateosDto->setFechaRegistro($fechaRegistro);
$delitoscateosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idDelitoCateo=="") ){
$delitoscateosDto=$delitoscateosFacade->insertDelitoscateos($delitoscateosDto);
echo $delitoscateosDto;
} else if(($accion=="guardar") && ($idDelitoCateo!="")){
$delitoscateosDto=$delitoscateosFacade->updateDelitoscateos($delitoscateosDto);
echo $delitoscateosDto;
} else if($accion=="consultar"){
$delitoscateosDto=$delitoscateosFacade->selectDelitoscateos($delitoscateosDto);
echo $delitoscateosDto;
} else if( ($accion=="baja") && ($idDelitoCateo!="") ){
$delitoscateosDto=$delitoscateosFacade->deleteDelitoscateos($delitoscateosDto);
echo $delitoscateosDto;
} else if( ($accion=="seleccionar") && ($idDelitoCateo!="") ){
$delitoscateosDto=$delitoscateosFacade->selectDelitoscateos($delitoscateosDto);
echo $delitoscateosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>