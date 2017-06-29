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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/quejosos/QuejososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/quejosos/QuejososController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class QuejososFacade {
private $proveedor;
public function __construct() {
}
public function validarQuejosos($QuejososDto){
$QuejososDto->setidQuejoso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejososDto->getidQuejoso(),"utf8"):strtoupper($QuejososDto->getidQuejoso()))))));
if($this->esFecha($QuejososDto->getidQuejoso())){
$QuejososDto->setidQuejoso($this->fechaMysql($QuejososDto->getidQuejoso()));
}
$QuejososDto->setidAmparo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejososDto->getidAmparo(),"utf8"):strtoupper($QuejososDto->getidAmparo()))))));
if($this->esFecha($QuejososDto->getidAmparo())){
$QuejososDto->setidAmparo($this->fechaMysql($QuejososDto->getidAmparo()));
}
$QuejososDto->setpaternoQ(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejososDto->getpaternoQ(),"utf8"):strtoupper($QuejososDto->getpaternoQ()))))));
if($this->esFecha($QuejososDto->getpaternoQ())){
$QuejososDto->setpaternoQ($this->fechaMysql($QuejososDto->getpaternoQ()));
}
$QuejososDto->setmaternoQ(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejososDto->getmaternoQ(),"utf8"):strtoupper($QuejososDto->getmaternoQ()))))));
if($this->esFecha($QuejososDto->getmaternoQ())){
$QuejososDto->setmaternoQ($this->fechaMysql($QuejososDto->getmaternoQ()));
}
$QuejososDto->setnombreQ(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejososDto->getnombreQ(),"utf8"):strtoupper($QuejososDto->getnombreQ()))))));
if($this->esFecha($QuejososDto->getnombreQ())){
$QuejososDto->setnombreQ($this->fechaMysql($QuejososDto->getnombreQ()));
}
$QuejososDto->setNombreMoral(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejososDto->getNombreMoral(),"utf8"):strtoupper($QuejososDto->getNombreMoral()))))));
if($this->esFecha($QuejososDto->getNombreMoral())){
$QuejososDto->setNombreMoral($this->fechaMysql($QuejososDto->getNombreMoral()));
}
$QuejososDto->setdomicilio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejososDto->getdomicilio(),"utf8"):strtoupper($QuejososDto->getdomicilio()))))));
if($this->esFecha($QuejososDto->getdomicilio())){
$QuejososDto->setdomicilio($this->fechaMysql($QuejososDto->getdomicilio()));
}
$QuejososDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejososDto->getcveTipoPersona(),"utf8"):strtoupper($QuejososDto->getcveTipoPersona()))))));
if($this->esFecha($QuejososDto->getcveTipoPersona())){
$QuejososDto->setcveTipoPersona($this->fechaMysql($QuejososDto->getcveTipoPersona()));
}
$QuejososDto->setemail(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejososDto->getemail(),"utf8"):strtoupper($QuejososDto->getemail()))))));
if($this->esFecha($QuejososDto->getemail())){
$QuejososDto->setemail($this->fechaMysql($QuejososDto->getemail()));
}
$QuejososDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejososDto->getcveMunicipio(),"utf8"):strtoupper($QuejososDto->getcveMunicipio()))))));
if($this->esFecha($QuejososDto->getcveMunicipio())){
$QuejososDto->setcveMunicipio($this->fechaMysql($QuejososDto->getcveMunicipio()));
}
$QuejososDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejososDto->getcveGenero(),"utf8"):strtoupper($QuejososDto->getcveGenero()))))));
if($this->esFecha($QuejososDto->getcveGenero())){
$QuejososDto->setcveGenero($this->fechaMysql($QuejososDto->getcveGenero()));
}
return $QuejososDto;
}
public function selectQuejosos($QuejososDto){
$QuejososDto=$this->validarQuejosos($QuejososDto);
$QuejososController = new QuejososController();
$QuejososDto = $QuejososController->selectQuejosos($QuejososDto);
if($QuejososDto!=""){
$dtoToJson = new DtoToJson($QuejososDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertQuejosos($QuejososDto){
$QuejososDto=$this->validarQuejosos($QuejososDto);
$QuejososController = new QuejososController();
$QuejososDto = $QuejososController->insertQuejosos($QuejososDto);
if($QuejososDto!=""){
$dtoToJson = new DtoToJson($QuejososDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateQuejosos($QuejososDto){
$QuejososDto=$this->validarQuejosos($QuejososDto);
$QuejososController = new QuejososController();
$QuejososDto = $QuejososController->updateQuejosos($QuejososDto);
if($QuejososDto!=""){
$dtoToJson = new DtoToJson($QuejososDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteQuejosos($QuejososDto){
$QuejososDto=$this->validarQuejosos($QuejososDto);
$QuejososController = new QuejososController();
$QuejososDto = $QuejososController->deleteQuejosos($QuejososDto);
if($QuejososDto==true){
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



@$idQuejoso=$_POST["idQuejoso"];
@$idAmparo=$_POST["idAmparo"];
@$paternoQ=$_POST["paternoQ"];
@$maternoQ=$_POST["maternoQ"];
@$nombreQ=$_POST["nombreQ"];
@$NombreMoral=$_POST["NombreMoral"];
@$domicilio=$_POST["domicilio"];
@$cveTipoPersona=$_POST["cveTipoPersona"];
@$email=$_POST["email"];
@$cveMunicipio=$_POST["cveMunicipio"];
@$cveGenero=$_POST["cveGenero"];
@$accion=$_POST["accion"];
@$activo=$_POST["activo"];

$quejososFacade = new QuejososFacade();
$quejososDto = new QuejososDTO();

$quejososDto->setIdQuejoso($idQuejoso);
$quejososDto->setIdAmparo($idAmparo);
$quejososDto->setPaternoQ($paternoQ);
$quejososDto->setMaternoQ($maternoQ);
$quejososDto->setNombreQ($nombreQ);
$quejososDto->setNombreMoral($NombreMoral);
$quejososDto->setDomicilio($domicilio);
$quejososDto->setCveTipoPersona($cveTipoPersona);
$quejososDto->setEmail($email);
$quejososDto->setCveMunicipio($cveMunicipio);
$quejososDto->setCveGenero($cveGenero);
$quejososDto->setActivo($activo);

if( ($accion=="guardar") && ($idQuejoso=="") ){
$quejososDto=$quejososFacade->insertQuejosos($quejososDto);
echo $quejososDto;
} else if(($accion=="guardar") && ($idQuejoso!="")){
$quejososDto=$quejososFacade->updateQuejosos($quejososDto);
echo $quejososDto;
} else if($accion=="consultar"){
$quejososDto=$quejososFacade->selectQuejosos($quejososDto);
echo $quejososDto;
} else if( ($accion=="baja") && ($idQuejoso!="") ){
$quejososDto=$quejososFacade->deleteQuejosos($quejososDto);
echo $quejososDto;
} else if( ($accion=="seleccionar") && ($idQuejoso!="") ){
$quejososDto=$quejososFacade->selectQuejosos($quejososDto);
echo $quejososDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>