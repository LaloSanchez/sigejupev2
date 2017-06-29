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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tercerosperjudicados/TercerosperjudicadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tercerosperjudicados/TercerosperjudicadosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TercerosperjudicadosFacade {
private $proveedor;
public function __construct() {
}
public function validarTercerosperjudicados($TercerosperjudicadosDto){
$TercerosperjudicadosDto->setidTercero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TercerosperjudicadosDto->getidTercero(),"utf8"):strtoupper($TercerosperjudicadosDto->getidTercero()))))));
if($this->esFecha($TercerosperjudicadosDto->getidTercero())){
$TercerosperjudicadosDto->setidTercero($this->fechaMysql($TercerosperjudicadosDto->getidTercero()));
}
$TercerosperjudicadosDto->setidAmparo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TercerosperjudicadosDto->getidAmparo(),"utf8"):strtoupper($TercerosperjudicadosDto->getidAmparo()))))));
if($this->esFecha($TercerosperjudicadosDto->getidAmparo())){
$TercerosperjudicadosDto->setidAmparo($this->fechaMysql($TercerosperjudicadosDto->getidAmparo()));
}
$TercerosperjudicadosDto->setpaternoT(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TercerosperjudicadosDto->getpaternoT(),"utf8"):strtoupper($TercerosperjudicadosDto->getpaternoT()))))));
if($this->esFecha($TercerosperjudicadosDto->getpaternoT())){
$TercerosperjudicadosDto->setpaternoT($this->fechaMysql($TercerosperjudicadosDto->getpaternoT()));
}
$TercerosperjudicadosDto->setmaternoT(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TercerosperjudicadosDto->getmaternoT(),"utf8"):strtoupper($TercerosperjudicadosDto->getmaternoT()))))));
if($this->esFecha($TercerosperjudicadosDto->getmaternoT())){
$TercerosperjudicadosDto->setmaternoT($this->fechaMysql($TercerosperjudicadosDto->getmaternoT()));
}
$TercerosperjudicadosDto->setnombreT(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TercerosperjudicadosDto->getnombreT(),"utf8"):strtoupper($TercerosperjudicadosDto->getnombreT()))))));
if($this->esFecha($TercerosperjudicadosDto->getnombreT())){
$TercerosperjudicadosDto->setnombreT($this->fechaMysql($TercerosperjudicadosDto->getnombreT()));
}
$TercerosperjudicadosDto->setNombreMoral(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TercerosperjudicadosDto->getNombreMoral(),"utf8"):strtoupper($TercerosperjudicadosDto->getNombreMoral()))))));
if($this->esFecha($TercerosperjudicadosDto->getNombreMoral())){
$TercerosperjudicadosDto->setNombreMoral($this->fechaMysql($TercerosperjudicadosDto->getNombreMoral()));
}
$TercerosperjudicadosDto->setdomicilio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TercerosperjudicadosDto->getdomicilio(),"utf8"):strtoupper($TercerosperjudicadosDto->getdomicilio()))))));
if($this->esFecha($TercerosperjudicadosDto->getdomicilio())){
$TercerosperjudicadosDto->setdomicilio($this->fechaMysql($TercerosperjudicadosDto->getdomicilio()));
}
$TercerosperjudicadosDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TercerosperjudicadosDto->getcveTipoPersona(),"utf8"):strtoupper($TercerosperjudicadosDto->getcveTipoPersona()))))));
if($this->esFecha($TercerosperjudicadosDto->getcveTipoPersona())){
$TercerosperjudicadosDto->setcveTipoPersona($this->fechaMysql($TercerosperjudicadosDto->getcveTipoPersona()));
}
$TercerosperjudicadosDto->setemail(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TercerosperjudicadosDto->getemail(),"utf8"):strtoupper($TercerosperjudicadosDto->getemail()))))));
if($this->esFecha($TercerosperjudicadosDto->getemail())){
$TercerosperjudicadosDto->setemail($this->fechaMysql($TercerosperjudicadosDto->getemail()));
}
$TercerosperjudicadosDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TercerosperjudicadosDto->getcveMunicipio(),"utf8"):strtoupper($TercerosperjudicadosDto->getcveMunicipio()))))));
if($this->esFecha($TercerosperjudicadosDto->getcveMunicipio())){
$TercerosperjudicadosDto->setcveMunicipio($this->fechaMysql($TercerosperjudicadosDto->getcveMunicipio()));
}
$TercerosperjudicadosDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TercerosperjudicadosDto->getcveGenero(),"utf8"):strtoupper($TercerosperjudicadosDto->getcveGenero()))))));
if($this->esFecha($TercerosperjudicadosDto->getcveGenero())){
$TercerosperjudicadosDto->setcveGenero($this->fechaMysql($TercerosperjudicadosDto->getcveGenero()));
}
return $TercerosperjudicadosDto;
}
public function selectTercerosperjudicados($TercerosperjudicadosDto){
$TercerosperjudicadosDto=$this->validarTercerosperjudicados($TercerosperjudicadosDto);
$TercerosperjudicadosController = new TercerosperjudicadosController();
$TercerosperjudicadosDto = $TercerosperjudicadosController->selectTercerosperjudicados($TercerosperjudicadosDto);
if($TercerosperjudicadosDto!=""){
$dtoToJson = new DtoToJson($TercerosperjudicadosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTercerosperjudicados($TercerosperjudicadosDto){
$TercerosperjudicadosDto=$this->validarTercerosperjudicados($TercerosperjudicadosDto);
$TercerosperjudicadosController = new TercerosperjudicadosController();
$TercerosperjudicadosDto = $TercerosperjudicadosController->insertTercerosperjudicados($TercerosperjudicadosDto);
if($TercerosperjudicadosDto!=""){
$dtoToJson = new DtoToJson($TercerosperjudicadosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTercerosperjudicados($TercerosperjudicadosDto){
$TercerosperjudicadosDto=$this->validarTercerosperjudicados($TercerosperjudicadosDto);
$TercerosperjudicadosController = new TercerosperjudicadosController();
$TercerosperjudicadosDto = $TercerosperjudicadosController->updateTercerosperjudicados($TercerosperjudicadosDto);
if($TercerosperjudicadosDto!=""){
$dtoToJson = new DtoToJson($TercerosperjudicadosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTercerosperjudicados($TercerosperjudicadosDto){
$TercerosperjudicadosDto=$this->validarTercerosperjudicados($TercerosperjudicadosDto);
$TercerosperjudicadosController = new TercerosperjudicadosController();
$TercerosperjudicadosDto = $TercerosperjudicadosController->deleteTercerosperjudicados($TercerosperjudicadosDto);
if($TercerosperjudicadosDto==true){
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



@$idTercero=$_POST["idTercero"];
@$idAmparo=$_POST["idAmparo"];
@$paternoT=$_POST["paternoT"];
@$maternoT=$_POST["maternoT"];
@$nombreT=$_POST["nombreT"];
@$NombreMoral=$_POST["NombreMoral"];
@$domicilio=$_POST["domicilio"];
@$cveTipoPersona=$_POST["cveTipoPersona"];
@$email=$_POST["email"];
@$cveMunicipio=$_POST["cveMunicipio"];
@$cveGenero=$_POST["cveGenero"];
@$accion=$_POST["accion"];
@$activo=$_POST["activo"];

$tercerosperjudicadosFacade = new TercerosperjudicadosFacade();
$tercerosperjudicadosDto = new TercerosperjudicadosDTO();

$tercerosperjudicadosDto->setIdTercero($idTercero);
$tercerosperjudicadosDto->setIdAmparo($idAmparo);
$tercerosperjudicadosDto->setPaternoT($paternoT);
$tercerosperjudicadosDto->setMaternoT($maternoT);
$tercerosperjudicadosDto->setNombreT($nombreT);
$tercerosperjudicadosDto->setNombreMoral($NombreMoral);
$tercerosperjudicadosDto->setDomicilio($domicilio);
$tercerosperjudicadosDto->setCveTipoPersona($cveTipoPersona);
$tercerosperjudicadosDto->setEmail($email);
$tercerosperjudicadosDto->setCveMunicipio($cveMunicipio);
$tercerosperjudicadosDto->setCveGenero($cveGenero);
$tercerosperjudicadosDto->setActivo($activo);

if( ($accion=="guardar") && ($idTercero=="") ){
$tercerosperjudicadosDto=$tercerosperjudicadosFacade->insertTercerosperjudicados($tercerosperjudicadosDto);
echo $tercerosperjudicadosDto;
} else if(($accion=="guardar") && ($idTercero!="")){
$tercerosperjudicadosDto=$tercerosperjudicadosFacade->updateTercerosperjudicados($tercerosperjudicadosDto);
echo $tercerosperjudicadosDto;
} else if($accion=="consultar"){
$tercerosperjudicadosDto=$tercerosperjudicadosFacade->selectTercerosperjudicados($tercerosperjudicadosDto);
echo $tercerosperjudicadosDto;
} else if( ($accion=="baja") && ($idTercero!="") ){
$tercerosperjudicadosDto=$tercerosperjudicadosFacade->deleteTercerosperjudicados($tercerosperjudicadosDto);
echo $tercerosperjudicadosDto;
} else if( ($accion=="seleccionar") && ($idTercero!="") ){
$tercerosperjudicadosDto=$tercerosperjudicadosFacade->selectTercerosperjudicados($tercerosperjudicadosDto);
echo $tercerosperjudicadosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>