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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposefectos/TiposefectosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposefectos/TiposefectosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposefectosFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposefectos($TiposefectosDto){
$TiposefectosDto->setcveEfecto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposefectosDto->getcveEfecto(),"utf8"):strtoupper($TiposefectosDto->getcveEfecto()))))));
if($this->esFecha($TiposefectosDto->getcveEfecto())){
$TiposefectosDto->setcveEfecto($this->fechaMysql($TiposefectosDto->getcveEfecto()));
}
$TiposefectosDto->setdesEfecto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposefectosDto->getdesEfecto(),"utf8"):strtoupper($TiposefectosDto->getdesEfecto()))))));
if($this->esFecha($TiposefectosDto->getdesEfecto())){
$TiposefectosDto->setdesEfecto($this->fechaMysql($TiposefectosDto->getdesEfecto()));
}
$TiposefectosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposefectosDto->getactivo(),"utf8"):strtoupper($TiposefectosDto->getactivo()))))));
if($this->esFecha($TiposefectosDto->getactivo())){
$TiposefectosDto->setactivo($this->fechaMysql($TiposefectosDto->getactivo()));
}
$TiposefectosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposefectosDto->getfechaRegistro(),"utf8"):strtoupper($TiposefectosDto->getfechaRegistro()))))));
if($this->esFecha($TiposefectosDto->getfechaRegistro())){
$TiposefectosDto->setfechaRegistro($this->fechaMysql($TiposefectosDto->getfechaRegistro()));
}
$TiposefectosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposefectosDto->getfechaActualizacion(),"utf8"):strtoupper($TiposefectosDto->getfechaActualizacion()))))));
if($this->esFecha($TiposefectosDto->getfechaActualizacion())){
$TiposefectosDto->setfechaActualizacion($this->fechaMysql($TiposefectosDto->getfechaActualizacion()));
}
return $TiposefectosDto;
}
public function selectTiposefectos($TiposefectosDto,$orden=""){
$TiposefectosDto=$this->validarTiposefectos($TiposefectosDto);
$TiposefectosController = new TiposefectosController();
$TiposefectosDto = $TiposefectosController->selectTiposefectos($TiposefectosDto,$orden);
if($TiposefectosDto!=""){
$dtoToJson = new DtoToJson($TiposefectosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposefectos($TiposefectosDto){
$TiposefectosDto=$this->validarTiposefectos($TiposefectosDto);
$TiposefectosController = new TiposefectosController();
$TiposefectosDto = $TiposefectosController->insertTiposefectos($TiposefectosDto);
if($TiposefectosDto!=""){
$dtoToJson = new DtoToJson($TiposefectosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposefectos($TiposefectosDto){
$TiposefectosDto=$this->validarTiposefectos($TiposefectosDto);
$TiposefectosController = new TiposefectosController();
$TiposefectosDto = $TiposefectosController->updateTiposefectos($TiposefectosDto);
if($TiposefectosDto!=""){
$dtoToJson = new DtoToJson($TiposefectosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposefectos($TiposefectosDto){
$TiposefectosDto=$this->validarTiposefectos($TiposefectosDto);
$TiposefectosController = new TiposefectosController();
$TiposefectosDto = $TiposefectosController->deleteTiposefectos($TiposefectosDto);
if($TiposefectosDto==true){
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



@$cveEfecto=$_POST["cveEfecto"];
@$desEfecto=$_POST["desEfecto"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposefectosFacade = new TiposefectosFacade();
$tiposefectosDto = new TiposefectosDTO();

$tiposefectosDto->setCveEfecto($cveEfecto);
$tiposefectosDto->setDesEfecto($desEfecto);
$tiposefectosDto->setActivo($activo);
$tiposefectosDto->setFechaRegistro($fechaRegistro);
$tiposefectosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveEfecto=="") ){
$tiposefectosDto=$tiposefectosFacade->insertTiposefectos($tiposefectosDto);
echo $tiposefectosDto;
} else if(($accion=="guardar") && ($cveEfecto!="")){
$tiposefectosDto=$tiposefectosFacade->updateTiposefectos($tiposefectosDto);
echo $tiposefectosDto;
} else if($accion=="consultar"){
$tiposefectosDto=$tiposefectosFacade->selectTiposefectos($tiposefectosDto);
echo $tiposefectosDto;
} else if( ($accion=="baja") && ($cveEfecto!="") ){
$tiposefectosDto=$tiposefectosFacade->deleteTiposefectos($tiposefectosDto);
echo $tiposefectosDto;
} else if( ($accion=="seleccionar") && ($cveEfecto!="") ){
$tiposefectosDto=$tiposefectosFacade->selectTiposefectos($tiposefectosDto);
echo $tiposefectosDto;
}else if($accion=="consultarOrden"){
    $orden="order by desEfecto";
$tiposefectosDto=$tiposefectosFacade->selectTiposefectos($tiposefectosDto,$orden);
echo $tiposefectosDto;
} 
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>