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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ofenfendidosexhortos/OfenfendidosexhortosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ofenfendidosexhortos/OfenfendidosexhortosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class OfenfendidosexhortosFacade {
private $proveedor;
public function __construct() {
}
public function validarOfenfendidosexhortos($OfenfendidosexhortosDto){
$OfenfendidosexhortosDto->setidOfenfendidoExhorto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getidOfenfendidoExhorto(),"utf8"):strtoupper($OfenfendidosexhortosDto->getidOfenfendidoExhorto()))))));
if($this->esFecha($OfenfendidosexhortosDto->getidOfenfendidoExhorto())){
$OfenfendidosexhortosDto->setidOfenfendidoExhorto($this->fechaMysql($OfenfendidosexhortosDto->getidOfenfendidoExhorto()));
}
$OfenfendidosexhortosDto->setidExhorto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getidExhorto(),"utf8"):strtoupper($OfenfendidosexhortosDto->getidExhorto()))))));
if($this->esFecha($OfenfendidosexhortosDto->getidExhorto())){
$OfenfendidosexhortosDto->setidExhorto($this->fechaMysql($OfenfendidosexhortosDto->getidExhorto()));
}
$OfenfendidosexhortosDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getpaterno(),"utf8"):strtoupper($OfenfendidosexhortosDto->getpaterno()))))));
if($this->esFecha($OfenfendidosexhortosDto->getpaterno())){
$OfenfendidosexhortosDto->setpaterno($this->fechaMysql($OfenfendidosexhortosDto->getpaterno()));
}
$OfenfendidosexhortosDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getmaterno(),"utf8"):strtoupper($OfenfendidosexhortosDto->getmaterno()))))));
if($this->esFecha($OfenfendidosexhortosDto->getmaterno())){
$OfenfendidosexhortosDto->setmaterno($this->fechaMysql($OfenfendidosexhortosDto->getmaterno()));
}
$OfenfendidosexhortosDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getnombre(),"utf8"):strtoupper($OfenfendidosexhortosDto->getnombre()))))));
if($this->esFecha($OfenfendidosexhortosDto->getnombre())){
$OfenfendidosexhortosDto->setnombre($this->fechaMysql($OfenfendidosexhortosDto->getnombre()));
}
$OfenfendidosexhortosDto->setdomicilio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getdomicilio(),"utf8"):strtoupper($OfenfendidosexhortosDto->getdomicilio()))))));
if($this->esFecha($OfenfendidosexhortosDto->getdomicilio())){
$OfenfendidosexhortosDto->setdomicilio($this->fechaMysql($OfenfendidosexhortosDto->getdomicilio()));
}
$OfenfendidosexhortosDto->settelefono(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->gettelefono(),"utf8"):strtoupper($OfenfendidosexhortosDto->gettelefono()))))));
if($this->esFecha($OfenfendidosexhortosDto->gettelefono())){
$OfenfendidosexhortosDto->settelefono($this->fechaMysql($OfenfendidosexhortosDto->gettelefono()));
}
$OfenfendidosexhortosDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getcveTipoPersona(),"utf8"):strtoupper($OfenfendidosexhortosDto->getcveTipoPersona()))))));
if($this->esFecha($OfenfendidosexhortosDto->getcveTipoPersona())){
$OfenfendidosexhortosDto->setcveTipoPersona($this->fechaMysql($OfenfendidosexhortosDto->getcveTipoPersona()));
}
$OfenfendidosexhortosDto->setnombreMoral(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getnombreMoral(),"utf8"):strtoupper($OfenfendidosexhortosDto->getnombreMoral()))))));
if($this->esFecha($OfenfendidosexhortosDto->getnombreMoral())){
$OfenfendidosexhortosDto->setnombreMoral($this->fechaMysql($OfenfendidosexhortosDto->getnombreMoral()));
}
$OfenfendidosexhortosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getactivo(),"utf8"):strtoupper($OfenfendidosexhortosDto->getactivo()))))));
if($this->esFecha($OfenfendidosexhortosDto->getactivo())){
$OfenfendidosexhortosDto->setactivo($this->fechaMysql($OfenfendidosexhortosDto->getactivo()));
}
$OfenfendidosexhortosDto->setcveEstado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getcveEstado(),"utf8"):strtoupper($OfenfendidosexhortosDto->getcveEstado()))))));
if($this->esFecha($OfenfendidosexhortosDto->getcveEstado())){
$OfenfendidosexhortosDto->setcveEstado($this->fechaMysql($OfenfendidosexhortosDto->getcveEstado()));
}
$OfenfendidosexhortosDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getcveMunicipio(),"utf8"):strtoupper($OfenfendidosexhortosDto->getcveMunicipio()))))));
if($this->esFecha($OfenfendidosexhortosDto->getcveMunicipio())){
$OfenfendidosexhortosDto->setcveMunicipio($this->fechaMysql($OfenfendidosexhortosDto->getcveMunicipio()));
}
$OfenfendidosexhortosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getfechaRegistro(),"utf8"):strtoupper($OfenfendidosexhortosDto->getfechaRegistro()))))));
if($this->esFecha($OfenfendidosexhortosDto->getfechaRegistro())){
$OfenfendidosexhortosDto->setfechaRegistro($this->fechaMysql($OfenfendidosexhortosDto->getfechaRegistro()));
}
$OfenfendidosexhortosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getfechaActualizacion(),"utf8"):strtoupper($OfenfendidosexhortosDto->getfechaActualizacion()))))));
if($this->esFecha($OfenfendidosexhortosDto->getfechaActualizacion())){
$OfenfendidosexhortosDto->setfechaActualizacion($this->fechaMysql($OfenfendidosexhortosDto->getfechaActualizacion()));
}
$OfenfendidosexhortosDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfenfendidosexhortosDto->getcveGenero(),"utf8"):strtoupper($OfenfendidosexhortosDto->getcveGenero()))))));
if($this->esFecha($OfenfendidosexhortosDto->getcveGenero())){
$OfenfendidosexhortosDto->setcveGenero($this->fechaMysql($OfenfendidosexhortosDto->getcveGenero()));
}
return $OfenfendidosexhortosDto;
}
public function selectOfenfendidosexhortos($OfenfendidosexhortosDto){
$OfenfendidosexhortosDto=$this->validarOfenfendidosexhortos($OfenfendidosexhortosDto);
$OfenfendidosexhortosController = new OfenfendidosexhortosController();
$OfenfendidosexhortosDto = $OfenfendidosexhortosController->selectOfenfendidosexhortos($OfenfendidosexhortosDto);
if($OfenfendidosexhortosDto!=""){
$dtoToJson = new DtoToJson($OfenfendidosexhortosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertOfenfendidosexhortos($OfenfendidosexhortosDto){
$OfenfendidosexhortosDto=$this->validarOfenfendidosexhortos($OfenfendidosexhortosDto);
$OfenfendidosexhortosController = new OfenfendidosexhortosController();
$OfenfendidosexhortosDto = $OfenfendidosexhortosController->insertOfenfendidosexhortos($OfenfendidosexhortosDto);
if($OfenfendidosexhortosDto!=""){
$dtoToJson = new DtoToJson($OfenfendidosexhortosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateOfenfendidosexhortos($OfenfendidosexhortosDto){
$OfenfendidosexhortosDto=$this->validarOfenfendidosexhortos($OfenfendidosexhortosDto);
$OfenfendidosexhortosController = new OfenfendidosexhortosController();
$OfenfendidosexhortosDto = $OfenfendidosexhortosController->updateOfenfendidosexhortos($OfenfendidosexhortosDto);
if($OfenfendidosexhortosDto!=""){
$dtoToJson = new DtoToJson($OfenfendidosexhortosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteOfenfendidosexhortos($OfenfendidosexhortosDto){
$OfenfendidosexhortosDto=$this->validarOfenfendidosexhortos($OfenfendidosexhortosDto);
$OfenfendidosexhortosController = new OfenfendidosexhortosController();
$OfenfendidosexhortosDto = $OfenfendidosexhortosController->deleteOfenfendidosexhortos($OfenfendidosexhortosDto);
if($OfenfendidosexhortosDto==true){
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



@$idOfenfendidoExhorto=$_POST["idOfenfendidoExhorto"];
@$idExhorto=$_POST["idExhorto"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$nombre=$_POST["nombre"];
@$domicilio=$_POST["domicilio"];
@$telefono=$_POST["telefono"];
@$cveTipoPersona=$_POST["cveTipoPersona"];
@$nombreMoral=$_POST["nombreMoral"];
@$activo=$_POST["activo"];
@$cveEstado=$_POST["cveEstado"];
@$cveMunicipio=$_POST["cveMunicipio"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$cveGenero=$_POST["cveGenero"];
@$accion=$_POST["accion"];

$ofenfendidosexhortosFacade = new OfenfendidosexhortosFacade();
$ofenfendidosexhortosDto = new OfenfendidosexhortosDTO();

$ofenfendidosexhortosDto->setIdOfenfendidoExhorto($idOfenfendidoExhorto);
$ofenfendidosexhortosDto->setIdExhorto($idExhorto);
$ofenfendidosexhortosDto->setPaterno($paterno);
$ofenfendidosexhortosDto->setMaterno($materno);
$ofenfendidosexhortosDto->setNombre($nombre);
$ofenfendidosexhortosDto->setDomicilio($domicilio);
$ofenfendidosexhortosDto->setTelefono($telefono);
$ofenfendidosexhortosDto->setCveTipoPersona($cveTipoPersona);
$ofenfendidosexhortosDto->setNombreMoral($nombreMoral);
$ofenfendidosexhortosDto->setActivo($activo);
$ofenfendidosexhortosDto->setCveEstado($cveEstado);
$ofenfendidosexhortosDto->setCveMunicipio($cveMunicipio);
$ofenfendidosexhortosDto->setFechaRegistro($fechaRegistro);
$ofenfendidosexhortosDto->setFechaActualizacion($fechaActualizacion);
$ofenfendidosexhortosDto->setCveGenero($cveGenero);

if( ($accion=="guardar") && ($idOfenfendidoExhorto=="") ){
$ofenfendidosexhortosDto=$ofenfendidosexhortosFacade->insertOfenfendidosexhortos($ofenfendidosexhortosDto);
echo $ofenfendidosexhortosDto;
} else if(($accion=="guardar") && ($idOfenfendidoExhorto!="")){
$ofenfendidosexhortosDto=$ofenfendidosexhortosFacade->updateOfenfendidosexhortos($ofenfendidosexhortosDto);
echo $ofenfendidosexhortosDto;
} else if($accion=="consultar"){
$ofenfendidosexhortosDto=$ofenfendidosexhortosFacade->selectOfenfendidosexhortos($ofenfendidosexhortosDto);
echo $ofenfendidosexhortosDto;
} else if( ($accion=="baja") && ($idOfenfendidoExhorto!="") ){
$ofenfendidosexhortosDto=$ofenfendidosexhortosFacade->deleteOfenfendidosexhortos($ofenfendidosexhortosDto);
echo $ofenfendidosexhortosDto;
} else if( ($accion=="seleccionar") && ($idOfenfendidoExhorto!="") ){
$ofenfendidosexhortosDto=$ofenfendidosexhortosFacade->selectOfenfendidosexhortos($ofenfendidosexhortosDto);
echo $ofenfendidosexhortosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>