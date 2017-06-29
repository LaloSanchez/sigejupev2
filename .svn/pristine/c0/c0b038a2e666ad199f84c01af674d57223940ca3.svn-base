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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/medidasprotecciones/MedidasproteccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/medidasprotecciones/MedidasproteccionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class MedidasproteccionesFacade {
private $proveedor;
public function __construct() {
}
public function validarMedidasprotecciones($MedidasproteccionesDto){
$MedidasproteccionesDto->setidMedidaProteccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproteccionesDto->getidMedidaProteccion(),"utf8"):strtoupper($MedidasproteccionesDto->getidMedidaProteccion()))))));
if($this->esFecha($MedidasproteccionesDto->getidMedidaProteccion())){
$MedidasproteccionesDto->setidMedidaProteccion($this->fechaMysql($MedidasproteccionesDto->getidMedidaProteccion()));
}
$MedidasproteccionesDto->setcveTipoProteccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproteccionesDto->getcveTipoProteccion(),"utf8"):strtoupper($MedidasproteccionesDto->getcveTipoProteccion()))))));
if($this->esFecha($MedidasproteccionesDto->getcveTipoProteccion())){
$MedidasproteccionesDto->setcveTipoProteccion($this->fechaMysql($MedidasproteccionesDto->getcveTipoProteccion()));
}
$MedidasproteccionesDto->setidActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproteccionesDto->getidActuacion(),"utf8"):strtoupper($MedidasproteccionesDto->getidActuacion()))))));
if($this->esFecha($MedidasproteccionesDto->getidActuacion())){
$MedidasproteccionesDto->setidActuacion($this->fechaMysql($MedidasproteccionesDto->getidActuacion()));
}
$MedidasproteccionesDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproteccionesDto->getidOfendidoCarpeta(),"utf8"):strtoupper($MedidasproteccionesDto->getidOfendidoCarpeta()))))));
if($this->esFecha($MedidasproteccionesDto->getidOfendidoCarpeta())){
$MedidasproteccionesDto->setidOfendidoCarpeta($this->fechaMysql($MedidasproteccionesDto->getidOfendidoCarpeta()));
}
$MedidasproteccionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproteccionesDto->getactivo(),"utf8"):strtoupper($MedidasproteccionesDto->getactivo()))))));
if($this->esFecha($MedidasproteccionesDto->getactivo())){
$MedidasproteccionesDto->setactivo($this->fechaMysql($MedidasproteccionesDto->getactivo()));
}
$MedidasproteccionesDto->setfechaInicio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproteccionesDto->getfechaInicio(),"utf8"):strtoupper($MedidasproteccionesDto->getfechaInicio()))))));
if($this->esFecha($MedidasproteccionesDto->getfechaInicio())){
$MedidasproteccionesDto->setfechaInicio($this->fechaMysql($MedidasproteccionesDto->getfechaInicio()));
}
$MedidasproteccionesDto->setfechaTermino(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproteccionesDto->getfechaTermino(),"utf8"):strtoupper($MedidasproteccionesDto->getfechaTermino()))))));
if($this->esFecha($MedidasproteccionesDto->getfechaTermino())){
$MedidasproteccionesDto->setfechaTermino($this->fechaMysql($MedidasproteccionesDto->getfechaTermino()));
}
$MedidasproteccionesDto->setcveAutoridadEmisora(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproteccionesDto->getcveAutoridadEmisora(),"utf8"):strtoupper($MedidasproteccionesDto->getcveAutoridadEmisora()))))));
if($this->esFecha($MedidasproteccionesDto->getcveAutoridadEmisora())){
$MedidasproteccionesDto->setcveAutoridadEmisora($this->fechaMysql($MedidasproteccionesDto->getcveAutoridadEmisora()));
}
$MedidasproteccionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproteccionesDto->getfechaRegistro(),"utf8"):strtoupper($MedidasproteccionesDto->getfechaRegistro()))))));
if($this->esFecha($MedidasproteccionesDto->getfechaRegistro())){
$MedidasproteccionesDto->setfechaRegistro($this->fechaMysql($MedidasproteccionesDto->getfechaRegistro()));
}
$MedidasproteccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproteccionesDto->getfechaActualizacion(),"utf8"):strtoupper($MedidasproteccionesDto->getfechaActualizacion()))))));
if($this->esFecha($MedidasproteccionesDto->getfechaActualizacion())){
$MedidasproteccionesDto->setfechaActualizacion($this->fechaMysql($MedidasproteccionesDto->getfechaActualizacion()));
}
return $MedidasproteccionesDto;
}
public function selectMedidasprotecciones($MedidasproteccionesDto){
$MedidasproteccionesDto=$this->validarMedidasprotecciones($MedidasproteccionesDto);
$MedidasproteccionesController = new MedidasproteccionesController();
$MedidasproteccionesDto = $MedidasproteccionesController->selectMedidasprotecciones($MedidasproteccionesDto);
if($MedidasproteccionesDto!=""){
$dtoToJson = new DtoToJson($MedidasproteccionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertMedidasprotecciones($MedidasproteccionesDto){
$MedidasproteccionesDto=$this->validarMedidasprotecciones($MedidasproteccionesDto);
$MedidasproteccionesController = new MedidasproteccionesController();
$MedidasproteccionesDto = $MedidasproteccionesController->insertMedidasprotecciones($MedidasproteccionesDto);
if($MedidasproteccionesDto!=""){
$dtoToJson = new DtoToJson($MedidasproteccionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateMedidasprotecciones($MedidasproteccionesDto){
$MedidasproteccionesDto=$this->validarMedidasprotecciones($MedidasproteccionesDto);
$MedidasproteccionesController = new MedidasproteccionesController();
$MedidasproteccionesDto = $MedidasproteccionesController->updateMedidasprotecciones($MedidasproteccionesDto);
if($MedidasproteccionesDto!=""){
$dtoToJson = new DtoToJson($MedidasproteccionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteMedidasprotecciones($MedidasproteccionesDto){
$MedidasproteccionesDto=$this->validarMedidasprotecciones($MedidasproteccionesDto);
$MedidasproteccionesController = new MedidasproteccionesController();
$MedidasproteccionesDto = $MedidasproteccionesController->deleteMedidasprotecciones($MedidasproteccionesDto);
if($MedidasproteccionesDto==true){
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



@$idMedidaProteccion=$_POST["idMedidaProteccion"];
@$cveTipoProteccion=$_POST["cveTipoProteccion"];
@$idActuacion=$_POST["idActuacion"];
@$idOfendidoCarpeta=$_POST["idOfendidoCarpeta"];
@$activo=$_POST["activo"];
@$fechaInicio=$_POST["fechaInicio"];
@$fechaTermino=$_POST["fechaTermino"];
@$cveAutoridadEmisora=$_POST["cveAutoridadEmisora"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$medidasproteccionesFacade = new MedidasproteccionesFacade();
$medidasproteccionesDto = new MedidasproteccionesDTO();

$medidasproteccionesDto->setIdMedidaProteccion($idMedidaProteccion);
$medidasproteccionesDto->setCveTipoProteccion($cveTipoProteccion);
$medidasproteccionesDto->setIdActuacion($idActuacion);
$medidasproteccionesDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
$medidasproteccionesDto->setActivo($activo);
$medidasproteccionesDto->setFechaInicio($fechaInicio);
$medidasproteccionesDto->setFechaTermino($fechaTermino);
$medidasproteccionesDto->setCveAutoridadEmisora($cveAutoridadEmisora);
$medidasproteccionesDto->setFechaRegistro($fechaRegistro);
$medidasproteccionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idMedidaProteccion=="") ){
$medidasproteccionesDto=$medidasproteccionesFacade->insertMedidasprotecciones($medidasproteccionesDto);
echo $medidasproteccionesDto;
} else if(($accion=="guardar") && ($idMedidaProteccion!="")){
$medidasproteccionesDto=$medidasproteccionesFacade->updateMedidasprotecciones($medidasproteccionesDto);
echo $medidasproteccionesDto;
} else if($accion=="consultar"){
$medidasproteccionesDto=$medidasproteccionesFacade->selectMedidasprotecciones($medidasproteccionesDto);
echo $medidasproteccionesDto;
} else if( ($accion=="baja") && ($idMedidaProteccion!="") ){
$medidasproteccionesDto=$medidasproteccionesFacade->deleteMedidasprotecciones($medidasproteccionesDto);
echo $medidasproteccionesDto;
} else if( ($accion=="seleccionar") && ($idMedidaProteccion!="") ){
$medidasproteccionesDto=$medidasproteccionesFacade->selectMedidasprotecciones($medidasproteccionesDto);
echo $medidasproteccionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>