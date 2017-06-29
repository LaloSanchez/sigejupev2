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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipopersonaasunto/TipopersonaasuntoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tipopersonaasunto/TipopersonaasuntoController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TipopersonaasuntoFacade {
private $proveedor;
public function __construct() {
}
public function validarTipopersonaasunto($TipopersonaasuntoDto){
$TipopersonaasuntoDto->setcveTipoPersonaAsunto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipopersonaasuntoDto->getcveTipoPersonaAsunto(),"utf8"):strtoupper($TipopersonaasuntoDto->getcveTipoPersonaAsunto()))))));
if($this->esFecha($TipopersonaasuntoDto->getcveTipoPersonaAsunto())){
$TipopersonaasuntoDto->setcveTipoPersonaAsunto($this->fechaMysql($TipopersonaasuntoDto->getcveTipoPersonaAsunto()));
}
$TipopersonaasuntoDto->setDescripcion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipopersonaasuntoDto->getDescripcion(),"utf8"):strtoupper($TipopersonaasuntoDto->getDescripcion()))))));
if($this->esFecha($TipopersonaasuntoDto->getDescripcion())){
$TipopersonaasuntoDto->setDescripcion($this->fechaMysql($TipopersonaasuntoDto->getDescripcion()));
}
$TipopersonaasuntoDto->setActivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipopersonaasuntoDto->getActivo(),"utf8"):strtoupper($TipopersonaasuntoDto->getActivo()))))));
if($this->esFecha($TipopersonaasuntoDto->getActivo())){
$TipopersonaasuntoDto->setActivo($this->fechaMysql($TipopersonaasuntoDto->getActivo()));
}
return $TipopersonaasuntoDto;
}
public function selectTipopersonaasunto($TipopersonaasuntoDto){
$TipopersonaasuntoDto=$this->validarTipopersonaasunto($TipopersonaasuntoDto);
$TipopersonaasuntoController = new TipopersonaasuntoController();
$TipopersonaasuntoDto = $TipopersonaasuntoController->selectTipopersonaasunto($TipopersonaasuntoDto);
if($TipopersonaasuntoDto!=""){
$dtoToJson = new DtoToJson($TipopersonaasuntoDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTipopersonaasunto($TipopersonaasuntoDto){
$TipopersonaasuntoDto=$this->validarTipopersonaasunto($TipopersonaasuntoDto);
$TipopersonaasuntoController = new TipopersonaasuntoController();
$TipopersonaasuntoDto = $TipopersonaasuntoController->insertTipopersonaasunto($TipopersonaasuntoDto);
if($TipopersonaasuntoDto!=""){
$dtoToJson = new DtoToJson($TipopersonaasuntoDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTipopersonaasunto($TipopersonaasuntoDto){
$TipopersonaasuntoDto=$this->validarTipopersonaasunto($TipopersonaasuntoDto);
$TipopersonaasuntoController = new TipopersonaasuntoController();
$TipopersonaasuntoDto = $TipopersonaasuntoController->updateTipopersonaasunto($TipopersonaasuntoDto);
if($TipopersonaasuntoDto!=""){
$dtoToJson = new DtoToJson($TipopersonaasuntoDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTipopersonaasunto($TipopersonaasuntoDto){
$TipopersonaasuntoDto=$this->validarTipopersonaasunto($TipopersonaasuntoDto);
$TipopersonaasuntoController = new TipopersonaasuntoController();
$TipopersonaasuntoDto = $TipopersonaasuntoController->deleteTipopersonaasunto($TipopersonaasuntoDto);
if($TipopersonaasuntoDto==true){
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



@$cveTipoPersonaAsunto=$_POST["cveTipoPersonaAsunto"];
@$Descripcion=$_POST["Descripcion"];
@$Activo=$_POST["Activo"];
@$accion=$_POST["accion"];

$tipopersonaasuntoFacade = new TipopersonaasuntoFacade();
$tipopersonaasuntoDto = new TipopersonaasuntoDTO();

$tipopersonaasuntoDto->setCveTipoPersonaAsunto($cveTipoPersonaAsunto);
$tipopersonaasuntoDto->setDescripcion($Descripcion);
$tipopersonaasuntoDto->setActivo($Activo);

if( ($accion=="guardar") && ($cveTipoPersonaAsunto=="") ){
$tipopersonaasuntoDto=$tipopersonaasuntoFacade->insertTipopersonaasunto($tipopersonaasuntoDto);
echo $tipopersonaasuntoDto;
} else if(($accion=="guardar") && ($cveTipoPersonaAsunto!="")){
$tipopersonaasuntoDto=$tipopersonaasuntoFacade->updateTipopersonaasunto($tipopersonaasuntoDto);
echo $tipopersonaasuntoDto;
} else if($accion=="consultar"){
$tipopersonaasuntoDto=$tipopersonaasuntoFacade->selectTipopersonaasunto($tipopersonaasuntoDto);
echo $tipopersonaasuntoDto;
} else if( ($accion=="baja") && ($cveTipoPersonaAsunto!="") ){
$tipopersonaasuntoDto=$tipopersonaasuntoFacade->deleteTipopersonaasunto($tipopersonaasuntoDto);
echo $tipopersonaasuntoDto;
} else if( ($accion=="seleccionar") && ($cveTipoPersonaAsunto!="") ){
$tipopersonaasuntoDto=$tipopersonaasuntoFacade->selectTipopersonaasunto($tipopersonaasuntoDto);
echo $tipopersonaasuntoDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>