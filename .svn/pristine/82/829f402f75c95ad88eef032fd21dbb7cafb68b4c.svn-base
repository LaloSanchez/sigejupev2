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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class BitacoramovimientosFacade {
private $proveedor;
public function __construct() {
}
public function validarBitacoramovimientos($BitacoramovimientosDto){
$BitacoramovimientosDto->setidBitacoraMovimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoramovimientosDto->getidBitacoraMovimiento(),"utf8"):strtoupper($BitacoramovimientosDto->getidBitacoraMovimiento()))))));
if($this->esFecha($BitacoramovimientosDto->getidBitacoraMovimiento())){
$BitacoramovimientosDto->setidBitacoraMovimiento($this->fechaMysql($BitacoramovimientosDto->getidBitacoraMovimiento()));
}
$BitacoramovimientosDto->setcveAccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoramovimientosDto->getcveAccion(),"utf8"):strtoupper($BitacoramovimientosDto->getcveAccion()))))));
if($this->esFecha($BitacoramovimientosDto->getcveAccion())){
$BitacoramovimientosDto->setcveAccion($this->fechaMysql($BitacoramovimientosDto->getcveAccion()));
}
$BitacoramovimientosDto->setfechaMovimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoramovimientosDto->getfechaMovimiento(),"utf8"):strtoupper($BitacoramovimientosDto->getfechaMovimiento()))))));
if($this->esFecha($BitacoramovimientosDto->getfechaMovimiento())){
$BitacoramovimientosDto->setfechaMovimiento($this->fechaMysql($BitacoramovimientosDto->getfechaMovimiento()));
}
$BitacoramovimientosDto->setobservaciones(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoramovimientosDto->getobservaciones(),"utf8"):strtoupper($BitacoramovimientosDto->getobservaciones()))))));
if($this->esFecha($BitacoramovimientosDto->getobservaciones())){
$BitacoramovimientosDto->setobservaciones($this->fechaMysql($BitacoramovimientosDto->getobservaciones()));
}
$BitacoramovimientosDto->setcveUsuario(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoramovimientosDto->getcveUsuario(),"utf8"):strtoupper($BitacoramovimientosDto->getcveUsuario()))))));
if($this->esFecha($BitacoramovimientosDto->getcveUsuario())){
$BitacoramovimientosDto->setcveUsuario($this->fechaMysql($BitacoramovimientosDto->getcveUsuario()));
}
$BitacoramovimientosDto->setcvePerfil(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoramovimientosDto->getcvePerfil(),"utf8"):strtoupper($BitacoramovimientosDto->getcvePerfil()))))));
if($this->esFecha($BitacoramovimientosDto->getcvePerfil())){
$BitacoramovimientosDto->setcvePerfil($this->fechaMysql($BitacoramovimientosDto->getcvePerfil()));
}
$BitacoramovimientosDto->setcveAdscripcion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoramovimientosDto->getcveAdscripcion(),"utf8"):strtoupper($BitacoramovimientosDto->getcveAdscripcion()))))));
if($this->esFecha($BitacoramovimientosDto->getcveAdscripcion())){
$BitacoramovimientosDto->setcveAdscripcion($this->fechaMysql($BitacoramovimientosDto->getcveAdscripcion()));
}
return $BitacoramovimientosDto;
}
public function selectBitacoramovimientos($BitacoramovimientosDto){
$BitacoramovimientosDto=$this->validarBitacoramovimientos($BitacoramovimientosDto);
$BitacoramovimientosController = new BitacoramovimientosController();
$BitacoramovimientosDto = $BitacoramovimientosController->selectBitacoramovimientos($BitacoramovimientosDto);
if($BitacoramovimientosDto!=""){
$dtoToJson = new DtoToJson($BitacoramovimientosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertBitacoramovimientos($BitacoramovimientosDto){
$BitacoramovimientosDto=$this->validarBitacoramovimientos($BitacoramovimientosDto);
$BitacoramovimientosController = new BitacoramovimientosController();
$BitacoramovimientosDto = $BitacoramovimientosController->insertBitacoramovimientos($BitacoramovimientosDto);
if($BitacoramovimientosDto!=""){
$dtoToJson = new DtoToJson($BitacoramovimientosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateBitacoramovimientos($BitacoramovimientosDto){
$BitacoramovimientosDto=$this->validarBitacoramovimientos($BitacoramovimientosDto);
$BitacoramovimientosController = new BitacoramovimientosController();
$BitacoramovimientosDto = $BitacoramovimientosController->updateBitacoramovimientos($BitacoramovimientosDto);
if($BitacoramovimientosDto!=""){
$dtoToJson = new DtoToJson($BitacoramovimientosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteBitacoramovimientos($BitacoramovimientosDto){
$BitacoramovimientosDto=$this->validarBitacoramovimientos($BitacoramovimientosDto);
$BitacoramovimientosController = new BitacoramovimientosController();
$BitacoramovimientosDto = $BitacoramovimientosController->deleteBitacoramovimientos($BitacoramovimientosDto);
if($BitacoramovimientosDto==true){
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



@$idBitacoraMovimiento=$_POST["idBitacoraMovimiento"];
@$cveAccion=$_POST["cveAccion"];
@$fechaMovimiento=$_POST["fechaMovimiento"];
@$observaciones=$_POST["observaciones"];
@$cveUsuario=$_POST["cveUsuario"];
@$cvePerfil=$_POST["cvePerfil"];
@$cveAdscripcion=$_POST["cveAdscripcion"];
@$accion=$_POST["accion"];

$bitacoramovimientosFacade = new BitacoramovimientosFacade();
$bitacoramovimientosDto = new BitacoramovimientosDTO();

$bitacoramovimientosDto->setIdBitacoraMovimiento($idBitacoraMovimiento);
$bitacoramovimientosDto->setCveAccion($cveAccion);
$bitacoramovimientosDto->setFechaMovimiento($fechaMovimiento);
$bitacoramovimientosDto->setObservaciones($observaciones);
$bitacoramovimientosDto->setCveUsuario($cveUsuario);
$bitacoramovimientosDto->setCvePerfil($cvePerfil);
$bitacoramovimientosDto->setCveAdscripcion($cveAdscripcion);

if( ($accion=="guardar") && ($idBitacoraMovimiento=="") ){
$bitacoramovimientosDto=$bitacoramovimientosFacade->insertBitacoramovimientos($bitacoramovimientosDto);
echo $bitacoramovimientosDto;
} else if(($accion=="guardar") && ($idBitacoraMovimiento!="")){
$bitacoramovimientosDto=$bitacoramovimientosFacade->updateBitacoramovimientos($bitacoramovimientosDto);
echo $bitacoramovimientosDto;
} else if($accion=="consultar"){
$bitacoramovimientosDto=$bitacoramovimientosFacade->selectBitacoramovimientos($bitacoramovimientosDto);
echo $bitacoramovimientosDto;
} else if( ($accion=="baja") && ($idBitacoraMovimiento!="") ){
$bitacoramovimientosDto=$bitacoramovimientosFacade->deleteBitacoramovimientos($bitacoramovimientosDto);
echo $bitacoramovimientosDto;
} else if( ($accion=="seleccionar") && ($idBitacoraMovimiento!="") ){
$bitacoramovimientosDto=$bitacoramovimientosFacade->selectBitacoramovimientos($bitacoramovimientosDto);
echo $bitacoramovimientosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
