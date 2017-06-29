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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/remisionapelacionesimputados/RemisionapelacionesimputadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/remisionapelacionesimputados/RemisionapelacionesimputadosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class RemisionapelacionesimputadosFacade {
private $proveedor;
public function __construct() {
}
public function validarRemisionapelacionesimputados($RemisionapelacionesimputadosDto){
$RemisionapelacionesimputadosDto->setidRemisionApelacionImp(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RemisionapelacionesimputadosDto->getidRemisionApelacionImp(),"utf8"):strtoupper($RemisionapelacionesimputadosDto->getidRemisionApelacionImp()))))));
if($this->esFecha($RemisionapelacionesimputadosDto->getidRemisionApelacionImp())){
$RemisionapelacionesimputadosDto->setidRemisionApelacionImp($this->fechaMysql($RemisionapelacionesimputadosDto->getidRemisionApelacionImp()));
}
$RemisionapelacionesimputadosDto->setidRemisionApelacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RemisionapelacionesimputadosDto->getidRemisionApelacion(),"utf8"):strtoupper($RemisionapelacionesimputadosDto->getidRemisionApelacion()))))));
if($this->esFecha($RemisionapelacionesimputadosDto->getidRemisionApelacion())){
$RemisionapelacionesimputadosDto->setidRemisionApelacion($this->fechaMysql($RemisionapelacionesimputadosDto->getidRemisionApelacion()));
}
$RemisionapelacionesimputadosDto->setidimpOfeDelCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RemisionapelacionesimputadosDto->getidimpOfeDelCarpeta(),"utf8"):strtoupper($RemisionapelacionesimputadosDto->getidimpOfeDelCarpeta()))))));
if($this->esFecha($RemisionapelacionesimputadosDto->getidimpOfeDelCarpeta())){
$RemisionapelacionesimputadosDto->setidimpOfeDelCarpeta($this->fechaMysql($RemisionapelacionesimputadosDto->getidimpOfeDelCarpeta()));
}
$RemisionapelacionesimputadosDto->setcveConsignacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RemisionapelacionesimputadosDto->getcveConsignacion(),"utf8"):strtoupper($RemisionapelacionesimputadosDto->getcveConsignacion()))))));
if($this->esFecha($RemisionapelacionesimputadosDto->getcveConsignacion())){
$RemisionapelacionesimputadosDto->setcveConsignacion($this->fechaMysql($RemisionapelacionesimputadosDto->getcveConsignacion()));
}
$RemisionapelacionesimputadosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RemisionapelacionesimputadosDto->getactivo(),"utf8"):strtoupper($RemisionapelacionesimputadosDto->getactivo()))))));
if($this->esFecha($RemisionapelacionesimputadosDto->getactivo())){
$RemisionapelacionesimputadosDto->setactivo($this->fechaMysql($RemisionapelacionesimputadosDto->getactivo()));
}
$RemisionapelacionesimputadosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RemisionapelacionesimputadosDto->getfechaRegistro(),"utf8"):strtoupper($RemisionapelacionesimputadosDto->getfechaRegistro()))))));
if($this->esFecha($RemisionapelacionesimputadosDto->getfechaRegistro())){
$RemisionapelacionesimputadosDto->setfechaRegistro($this->fechaMysql($RemisionapelacionesimputadosDto->getfechaRegistro()));
}
$RemisionapelacionesimputadosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RemisionapelacionesimputadosDto->getfechaActualizacion(),"utf8"):strtoupper($RemisionapelacionesimputadosDto->getfechaActualizacion()))))));
if($this->esFecha($RemisionapelacionesimputadosDto->getfechaActualizacion())){
$RemisionapelacionesimputadosDto->setfechaActualizacion($this->fechaMysql($RemisionapelacionesimputadosDto->getfechaActualizacion()));
}
return $RemisionapelacionesimputadosDto;
}
public function selectRemisionapelacionesimputados($RemisionapelacionesimputadosDto){
$RemisionapelacionesimputadosDto=$this->validarRemisionapelacionesimputados($RemisionapelacionesimputadosDto);
$RemisionapelacionesimputadosController = new RemisionapelacionesimputadosController();
$RemisionapelacionesimputadosDto = $RemisionapelacionesimputadosController->selectRemisionapelacionesimputados($RemisionapelacionesimputadosDto);
if($RemisionapelacionesimputadosDto!=""){
$dtoToJson = new DtoToJson($RemisionapelacionesimputadosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertRemisionapelacionesimputados($RemisionapelacionesimputadosDto){
$RemisionapelacionesimputadosDto=$this->validarRemisionapelacionesimputados($RemisionapelacionesimputadosDto);
$RemisionapelacionesimputadosController = new RemisionapelacionesimputadosController();
$RemisionapelacionesimputadosDto = $RemisionapelacionesimputadosController->insertRemisionapelacionesimputados($RemisionapelacionesimputadosDto);
if($RemisionapelacionesimputadosDto!=""){
$dtoToJson = new DtoToJson($RemisionapelacionesimputadosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateRemisionapelacionesimputados($RemisionapelacionesimputadosDto){
$RemisionapelacionesimputadosDto=$this->validarRemisionapelacionesimputados($RemisionapelacionesimputadosDto);
$RemisionapelacionesimputadosController = new RemisionapelacionesimputadosController();
$RemisionapelacionesimputadosDto = $RemisionapelacionesimputadosController->updateRemisionapelacionesimputados($RemisionapelacionesimputadosDto);
if($RemisionapelacionesimputadosDto!=""){
$dtoToJson = new DtoToJson($RemisionapelacionesimputadosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteRemisionapelacionesimputados($RemisionapelacionesimputadosDto){
$RemisionapelacionesimputadosDto=$this->validarRemisionapelacionesimputados($RemisionapelacionesimputadosDto);
$RemisionapelacionesimputadosController = new RemisionapelacionesimputadosController();
$RemisionapelacionesimputadosDto = $RemisionapelacionesimputadosController->deleteRemisionapelacionesimputados($RemisionapelacionesimputadosDto);
if($RemisionapelacionesimputadosDto==true){
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



@$idRemisionApelacionImp=$_POST["idRemisionApelacionImp"];
@$idRemisionApelacion=$_POST["idRemisionApelacion"];
@$idimpOfeDelCarpeta=$_POST["idimpOfeDelCarpeta"];
@$cveConsignacion=$_POST["cveConsignacion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$remisionapelacionesimputadosFacade = new RemisionapelacionesimputadosFacade();
$remisionapelacionesimputadosDto = new RemisionapelacionesimputadosDTO();

$remisionapelacionesimputadosDto->setIdRemisionApelacionImp($idRemisionApelacionImp);
$remisionapelacionesimputadosDto->setIdRemisionApelacion($idRemisionApelacion);
$remisionapelacionesimputadosDto->setIdimpOfeDelCarpeta($idimpOfeDelCarpeta);
$remisionapelacionesimputadosDto->setCveConsignacion($cveConsignacion);
$remisionapelacionesimputadosDto->setActivo($activo);
$remisionapelacionesimputadosDto->setFechaRegistro($fechaRegistro);
$remisionapelacionesimputadosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idRemisionApelacionImp=="") ){
$remisionapelacionesimputadosDto=$remisionapelacionesimputadosFacade->insertRemisionapelacionesimputados($remisionapelacionesimputadosDto);
echo $remisionapelacionesimputadosDto;
} else if(($accion=="guardar") && ($idRemisionApelacionImp!="")){
$remisionapelacionesimputadosDto=$remisionapelacionesimputadosFacade->updateRemisionapelacionesimputados($remisionapelacionesimputadosDto);
echo $remisionapelacionesimputadosDto;
} else if($accion=="consultar"){
$remisionapelacionesimputadosDto=$remisionapelacionesimputadosFacade->selectRemisionapelacionesimputados($remisionapelacionesimputadosDto);
echo $remisionapelacionesimputadosDto;
} else if( ($accion=="baja") && ($idRemisionApelacionImp!="") ){
$remisionapelacionesimputadosDto=$remisionapelacionesimputadosFacade->deleteRemisionapelacionesimputados($remisionapelacionesimputadosDto);
echo $remisionapelacionesimputadosDto;
} else if( ($accion=="seleccionar") && ($idRemisionApelacionImp!="") ){
$remisionapelacionesimputadosDto=$remisionapelacionesimputadosFacade->selectRemisionapelacionesimputados($remisionapelacionesimputadosDto);
echo $remisionapelacionesimputadosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>