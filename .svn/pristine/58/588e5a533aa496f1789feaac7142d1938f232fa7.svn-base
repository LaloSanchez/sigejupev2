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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bitacoraasignaciones/BitacoraasignacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/bitacoraasignaciones/BitacoraasignacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class BitacoraasignacionesFacade {
private $proveedor;
public function __construct() {
}
public function validarBitacoraasignaciones($BitacoraasignacionesDto){
$BitacoraasignacionesDto->setidBitacoraAsignacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoraasignacionesDto->getidBitacoraAsignacion(),"utf8"):strtoupper($BitacoraasignacionesDto->getidBitacoraAsignacion()))))));
if($this->esFecha($BitacoraasignacionesDto->getidBitacoraAsignacion())){
$BitacoraasignacionesDto->setidBitacoraAsignacion($this->fechaMysql($BitacoraasignacionesDto->getidBitacoraAsignacion()));
}
$BitacoraasignacionesDto->setcveJuzgado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoraasignacionesDto->getcveJuzgado(),"utf8"):strtoupper($BitacoraasignacionesDto->getcveJuzgado()))))));
if($this->esFecha($BitacoraasignacionesDto->getcveJuzgado())){
$BitacoraasignacionesDto->setcveJuzgado($this->fechaMysql($BitacoraasignacionesDto->getcveJuzgado()));
}
$BitacoraasignacionesDto->setidSolicitudAudiencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoraasignacionesDto->getidSolicitudAudiencia(),"utf8"):strtoupper($BitacoraasignacionesDto->getidSolicitudAudiencia()))))));
if($this->esFecha($BitacoraasignacionesDto->getidSolicitudAudiencia())){
$BitacoraasignacionesDto->setidSolicitudAudiencia($this->fechaMysql($BitacoraasignacionesDto->getidSolicitudAudiencia()));
}
$BitacoraasignacionesDto->setfechaMovimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoraasignacionesDto->getfechaMovimiento(),"utf8"):strtoupper($BitacoraasignacionesDto->getfechaMovimiento()))))));
if($this->esFecha($BitacoraasignacionesDto->getfechaMovimiento())){
$BitacoraasignacionesDto->setfechaMovimiento($this->fechaMysql($BitacoraasignacionesDto->getfechaMovimiento()));
}
$BitacoraasignacionesDto->setobservaciones(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoraasignacionesDto->getobservaciones(),"utf8"):strtoupper($BitacoraasignacionesDto->getobservaciones()))))));
if($this->esFecha($BitacoraasignacionesDto->getobservaciones())){
$BitacoraasignacionesDto->setobservaciones($this->fechaMysql($BitacoraasignacionesDto->getobservaciones()));
}
$BitacoraasignacionesDto->setfechaInicial(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoraasignacionesDto->getfechaInicial(),"utf8"):strtoupper($BitacoraasignacionesDto->getfechaInicial()))))));
if($this->esFecha($BitacoraasignacionesDto->getfechaInicial())){
$BitacoraasignacionesDto->setfechaInicial($this->fechaMysql($BitacoraasignacionesDto->getfechaInicial()));
}
$BitacoraasignacionesDto->setfechaFInal(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoraasignacionesDto->getfechaFInal(),"utf8"):strtoupper($BitacoraasignacionesDto->getfechaFInal()))))));
if($this->esFecha($BitacoraasignacionesDto->getfechaFInal())){
$BitacoraasignacionesDto->setfechaFInal($this->fechaMysql($BitacoraasignacionesDto->getfechaFInal()));
}
$BitacoraasignacionesDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoraasignacionesDto->getcveAdscripcionSolicita(),"utf8"):strtoupper($BitacoraasignacionesDto->getcveAdscripcionSolicita()))))));
if($this->esFecha($BitacoraasignacionesDto->getcveAdscripcionSolicita())){
$BitacoraasignacionesDto->setcveAdscripcionSolicita($this->fechaMysql($BitacoraasignacionesDto->getcveAdscripcionSolicita()));
}
$BitacoraasignacionesDto->setidJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoraasignacionesDto->getidJuzgador(),"utf8"):strtoupper($BitacoraasignacionesDto->getidJuzgador()))))));
if($this->esFecha($BitacoraasignacionesDto->getidJuzgador())){
$BitacoraasignacionesDto->setidJuzgador($this->fechaMysql($BitacoraasignacionesDto->getidJuzgador()));
}
$BitacoraasignacionesDto->setcveSala(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BitacoraasignacionesDto->getcveSala(),"utf8"):strtoupper($BitacoraasignacionesDto->getcveSala()))))));
if($this->esFecha($BitacoraasignacionesDto->getcveSala())){
$BitacoraasignacionesDto->setcveSala($this->fechaMysql($BitacoraasignacionesDto->getcveSala()));
}
return $BitacoraasignacionesDto;
}
public function selectBitacoraasignaciones($BitacoraasignacionesDto){
$BitacoraasignacionesDto=$this->validarBitacoraasignaciones($BitacoraasignacionesDto);
$BitacoraasignacionesController = new BitacoraasignacionesController();
$BitacoraasignacionesDto = $BitacoraasignacionesController->selectBitacoraasignaciones($BitacoraasignacionesDto);
if($BitacoraasignacionesDto!=""){
$dtoToJson = new DtoToJson($BitacoraasignacionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertBitacoraasignaciones($BitacoraasignacionesDto){
$BitacoraasignacionesDto=$this->validarBitacoraasignaciones($BitacoraasignacionesDto);
$BitacoraasignacionesController = new BitacoraasignacionesController();
$BitacoraasignacionesDto = $BitacoraasignacionesController->insertBitacoraasignaciones($BitacoraasignacionesDto);
if($BitacoraasignacionesDto!=""){
$dtoToJson = new DtoToJson($BitacoraasignacionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateBitacoraasignaciones($BitacoraasignacionesDto){
$BitacoraasignacionesDto=$this->validarBitacoraasignaciones($BitacoraasignacionesDto);
$BitacoraasignacionesController = new BitacoraasignacionesController();
$BitacoraasignacionesDto = $BitacoraasignacionesController->updateBitacoraasignaciones($BitacoraasignacionesDto);
if($BitacoraasignacionesDto!=""){
$dtoToJson = new DtoToJson($BitacoraasignacionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteBitacoraasignaciones($BitacoraasignacionesDto){
$BitacoraasignacionesDto=$this->validarBitacoraasignaciones($BitacoraasignacionesDto);
$BitacoraasignacionesController = new BitacoraasignacionesController();
$BitacoraasignacionesDto = $BitacoraasignacionesController->deleteBitacoraasignaciones($BitacoraasignacionesDto);
if($BitacoraasignacionesDto==true){
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



@$idBitacoraAsignacion=$_POST["idBitacoraAsignacion"];
@$cveJuzgado=$_POST["cveJuzgado"];
@$idSolicitudAudiencia=$_POST["idSolicitudAudiencia"];
@$fechaMovimiento=$_POST["fechaMovimiento"];
@$observaciones=$_POST["observaciones"];
@$fechaInicial=$_POST["fechaInicial"];
@$fechaFInal=$_POST["fechaFInal"];
@$cveAdscripcionSolicita=$_POST["cveAdscripcionSolicita"];
@$idJuzgador=$_POST["idJuzgador"];
@$cveSala=$_POST["cveSala"];
@$accion=$_POST["accion"];

$bitacoraasignacionesFacade = new BitacoraasignacionesFacade();
$bitacoraasignacionesDto = new BitacoraasignacionesDTO();

$bitacoraasignacionesDto->setIdBitacoraAsignacion($idBitacoraAsignacion);
$bitacoraasignacionesDto->setCveJuzgado($cveJuzgado);
$bitacoraasignacionesDto->setIdSolicitudAudiencia($idSolicitudAudiencia);
$bitacoraasignacionesDto->setFechaMovimiento($fechaMovimiento);
$bitacoraasignacionesDto->setObservaciones($observaciones);
$bitacoraasignacionesDto->setFechaInicial($fechaInicial);
$bitacoraasignacionesDto->setFechaFInal($fechaFInal);
$bitacoraasignacionesDto->setCveAdscripcionSolicita($cveAdscripcionSolicita);
$bitacoraasignacionesDto->setIdJuzgador($idJuzgador);
$bitacoraasignacionesDto->setCveSala($cveSala);

if( ($accion=="guardar") && ($idBitacoraAsignacion=="") ){
$bitacoraasignacionesDto=$bitacoraasignacionesFacade->insertBitacoraasignaciones($bitacoraasignacionesDto);
echo $bitacoraasignacionesDto;
} else if(($accion=="guardar") && ($idBitacoraAsignacion!="")){
$bitacoraasignacionesDto=$bitacoraasignacionesFacade->updateBitacoraasignaciones($bitacoraasignacionesDto);
echo $bitacoraasignacionesDto;
} else if($accion=="consultar"){
$bitacoraasignacionesDto=$bitacoraasignacionesFacade->selectBitacoraasignaciones($bitacoraasignacionesDto);
echo $bitacoraasignacionesDto;
} else if( ($accion=="baja") && ($idBitacoraAsignacion!="") ){
$bitacoraasignacionesDto=$bitacoraasignacionesFacade->deleteBitacoraasignaciones($bitacoraasignacionesDto);
echo $bitacoraasignacionesDto;
} else if( ($accion=="seleccionar") && ($idBitacoraAsignacion!="") ){
$bitacoraasignacionesDto=$bitacoraasignacionesFacade->selectBitacoraasignaciones($bitacoraasignacionesDto);
echo $bitacoraasignacionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>