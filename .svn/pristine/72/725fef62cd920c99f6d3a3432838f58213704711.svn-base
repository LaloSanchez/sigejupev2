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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ofendidoscateos/OfendidoscateosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ofendidoscateos/OfendidoscateosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class OfendidoscateosFacade {
private $proveedor;
public function __construct() {
}
public function validarOfendidoscateos($OfendidoscateosDto){
$OfendidoscateosDto->setidOfendidoCateo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidoscateosDto->getidOfendidoCateo(),"utf8"):strtoupper($OfendidoscateosDto->getidOfendidoCateo()))))));
if($this->esFecha($OfendidoscateosDto->getidOfendidoCateo())){
$OfendidoscateosDto->setidOfendidoCateo($this->fechaMysql($OfendidoscateosDto->getidOfendidoCateo()));
}
$OfendidoscateosDto->setidSolicitudCateo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidoscateosDto->getidSolicitudCateo(),"utf8"):strtoupper($OfendidoscateosDto->getidSolicitudCateo()))))));
if($this->esFecha($OfendidoscateosDto->getidSolicitudCateo())){
$OfendidoscateosDto->setidSolicitudCateo($this->fechaMysql($OfendidoscateosDto->getidSolicitudCateo()));
}
$OfendidoscateosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidoscateosDto->getactivo(),"utf8"):strtoupper($OfendidoscateosDto->getactivo()))))));
if($this->esFecha($OfendidoscateosDto->getactivo())){
$OfendidoscateosDto->setactivo($this->fechaMysql($OfendidoscateosDto->getactivo()));
}
$OfendidoscateosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidoscateosDto->getfechaRegistro(),"utf8"):strtoupper($OfendidoscateosDto->getfechaRegistro()))))));
if($this->esFecha($OfendidoscateosDto->getfechaRegistro())){
$OfendidoscateosDto->setfechaRegistro($this->fechaMysql($OfendidoscateosDto->getfechaRegistro()));
}
$OfendidoscateosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidoscateosDto->getfechaActualizacion(),"utf8"):strtoupper($OfendidoscateosDto->getfechaActualizacion()))))));
if($this->esFecha($OfendidoscateosDto->getfechaActualizacion())){
$OfendidoscateosDto->setfechaActualizacion($this->fechaMysql($OfendidoscateosDto->getfechaActualizacion()));
}
$OfendidoscateosDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidoscateosDto->getnombre(),"utf8"):strtoupper($OfendidoscateosDto->getnombre()))))));
if($this->esFecha($OfendidoscateosDto->getnombre())){
$OfendidoscateosDto->setnombre($this->fechaMysql($OfendidoscateosDto->getnombre()));
}
$OfendidoscateosDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidoscateosDto->getpaterno(),"utf8"):strtoupper($OfendidoscateosDto->getpaterno()))))));
if($this->esFecha($OfendidoscateosDto->getpaterno())){
$OfendidoscateosDto->setpaterno($this->fechaMysql($OfendidoscateosDto->getpaterno()));
}
$OfendidoscateosDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidoscateosDto->getmaterno(),"utf8"):strtoupper($OfendidoscateosDto->getmaterno()))))));
if($this->esFecha($OfendidoscateosDto->getmaterno())){
$OfendidoscateosDto->setmaterno($this->fechaMysql($OfendidoscateosDto->getmaterno()));
}
$OfendidoscateosDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidoscateosDto->getcveTipoPersona(),"utf8"):strtoupper($OfendidoscateosDto->getcveTipoPersona()))))));
if($this->esFecha($OfendidoscateosDto->getcveTipoPersona())){
$OfendidoscateosDto->setcveTipoPersona($this->fechaMysql($OfendidoscateosDto->getcveTipoPersona()));
}
$OfendidoscateosDto->setnombreMoral(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidoscateosDto->getnombreMoral(),"utf8"):strtoupper($OfendidoscateosDto->getnombreMoral()))))));
if($this->esFecha($OfendidoscateosDto->getnombreMoral())){
$OfendidoscateosDto->setnombreMoral($this->fechaMysql($OfendidoscateosDto->getnombreMoral()));
}
$OfendidoscateosDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidoscateosDto->getcveGenero(),"utf8"):strtoupper($OfendidoscateosDto->getcveGenero()))))));
if($this->esFecha($OfendidoscateosDto->getcveGenero())){
$OfendidoscateosDto->setcveGenero($this->fechaMysql($OfendidoscateosDto->getcveGenero()));
}
return $OfendidoscateosDto;
}
public function selectOfendidoscateos($OfendidoscateosDto){
$OfendidoscateosDto=$this->validarOfendidoscateos($OfendidoscateosDto);
$OfendidoscateosController = new OfendidoscateosController();
$OfendidoscateosDto = $OfendidoscateosController->selectOfendidoscateos($OfendidoscateosDto);
if($OfendidoscateosDto!=""){
$dtoToJson = new DtoToJson($OfendidoscateosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertOfendidoscateos($OfendidoscateosDto){
$OfendidoscateosDto=$this->validarOfendidoscateos($OfendidoscateosDto);
$OfendidoscateosController = new OfendidoscateosController();
$OfendidoscateosDto = $OfendidoscateosController->insertOfendidoscateos($OfendidoscateosDto);
if($OfendidoscateosDto!=""){
$dtoToJson = new DtoToJson($OfendidoscateosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateOfendidoscateos($OfendidoscateosDto){
$OfendidoscateosDto=$this->validarOfendidoscateos($OfendidoscateosDto);
$OfendidoscateosController = new OfendidoscateosController();
$OfendidoscateosDto = $OfendidoscateosController->updateOfendidoscateos($OfendidoscateosDto);
if($OfendidoscateosDto!=""){
$dtoToJson = new DtoToJson($OfendidoscateosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteOfendidoscateos($OfendidoscateosDto){
$OfendidoscateosDto=$this->validarOfendidoscateos($OfendidoscateosDto);
$OfendidoscateosController = new OfendidoscateosController();
$OfendidoscateosDto = $OfendidoscateosController->deleteOfendidoscateos($OfendidoscateosDto);
if($OfendidoscateosDto==true){
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



@$idOfendidoCateo=$_POST["idOfendidoCateo"];
@$idSolicitudCateo=$_POST["idSolicitudCateo"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$nombre=$_POST["nombre"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$cveTipoPersona=$_POST["cveTipoPersona"];
@$nombreMoral=$_POST["nombreMoral"];
@$cveGenero=$_POST["cveGenero"];
@$accion=$_POST["accion"];

$ofendidoscateosFacade = new OfendidoscateosFacade();
$ofendidoscateosDto = new OfendidoscateosDTO();

$ofendidoscateosDto->setIdOfendidoCateo($idOfendidoCateo);
$ofendidoscateosDto->setIdSolicitudCateo($idSolicitudCateo);
$ofendidoscateosDto->setActivo($activo);
$ofendidoscateosDto->setFechaRegistro($fechaRegistro);
$ofendidoscateosDto->setFechaActualizacion($fechaActualizacion);
$ofendidoscateosDto->setNombre($nombre);
$ofendidoscateosDto->setPaterno($paterno);
$ofendidoscateosDto->setMaterno($materno);
$ofendidoscateosDto->setCveTipoPersona($cveTipoPersona);
$ofendidoscateosDto->setNombreMoral($nombreMoral);
$ofendidoscateosDto->setCveGenero($cveGenero);

if( ($accion=="guardar") && ($idOfendidoCateo=="") ){
$ofendidoscateosDto=$ofendidoscateosFacade->insertOfendidoscateos($ofendidoscateosDto);
echo $ofendidoscateosDto;
} else if(($accion=="guardar") && ($idOfendidoCateo!="")){
$ofendidoscateosDto=$ofendidoscateosFacade->updateOfendidoscateos($ofendidoscateosDto);
echo $ofendidoscateosDto;
} else if($accion=="consultar"){
$ofendidoscateosDto=$ofendidoscateosFacade->selectOfendidoscateos($ofendidoscateosDto);
echo $ofendidoscateosDto;
} else if( ($accion=="baja") && ($idOfendidoCateo!="") ){
$ofendidoscateosDto=$ofendidoscateosFacade->deleteOfendidoscateos($ofendidoscateosDto);
echo $ofendidoscateosDto;
} else if( ($accion=="seleccionar") && ($idOfendidoCateo!="") ){
$ofendidoscateosDto=$ofendidoscateosFacade->selectOfendidoscateos($ofendidoscateosDto);
echo $ofendidoscateosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>