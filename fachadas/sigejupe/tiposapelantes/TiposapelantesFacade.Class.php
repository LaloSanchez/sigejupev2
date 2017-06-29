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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposapelantes/TiposapelantesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposapelantes/TiposapelantesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposapelantesFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposapelantes($TiposapelantesDto){
$TiposapelantesDto->setcveTipoApelante(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposapelantesDto->getcveTipoApelante(),"utf8"):strtoupper($TiposapelantesDto->getcveTipoApelante()))))));
if($this->esFecha($TiposapelantesDto->getcveTipoApelante())){
$TiposapelantesDto->setcveTipoApelante($this->fechaMysql($TiposapelantesDto->getcveTipoApelante()));
}
$TiposapelantesDto->setdesTipoApelante(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposapelantesDto->getdesTipoApelante(),"utf8"):strtoupper($TiposapelantesDto->getdesTipoApelante()))))));
if($this->esFecha($TiposapelantesDto->getdesTipoApelante())){
$TiposapelantesDto->setdesTipoApelante($this->fechaMysql($TiposapelantesDto->getdesTipoApelante()));
}
$TiposapelantesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposapelantesDto->getactivo(),"utf8"):strtoupper($TiposapelantesDto->getactivo()))))));
if($this->esFecha($TiposapelantesDto->getactivo())){
$TiposapelantesDto->setactivo($this->fechaMysql($TiposapelantesDto->getactivo()));
}
$TiposapelantesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposapelantesDto->getfechaRegistro(),"utf8"):strtoupper($TiposapelantesDto->getfechaRegistro()))))));
if($this->esFecha($TiposapelantesDto->getfechaRegistro())){
$TiposapelantesDto->setfechaRegistro($this->fechaMysql($TiposapelantesDto->getfechaRegistro()));
}
$TiposapelantesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposapelantesDto->getfechaActualizacion(),"utf8"):strtoupper($TiposapelantesDto->getfechaActualizacion()))))));
if($this->esFecha($TiposapelantesDto->getfechaActualizacion())){
$TiposapelantesDto->setfechaActualizacion($this->fechaMysql($TiposapelantesDto->getfechaActualizacion()));
}
return $TiposapelantesDto;
}
public function selectTiposapelantes($TiposapelantesDto,$orden=""){
$TiposapelantesDto=$this->validarTiposapelantes($TiposapelantesDto);
$TiposapelantesController = new TiposapelantesController();
$TiposapelantesDto = $TiposapelantesController->selectTiposapelantes($TiposapelantesDto,$orden);
if($TiposapelantesDto!=""){
$dtoToJson = new DtoToJson($TiposapelantesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposapelantes($TiposapelantesDto){
$TiposapelantesDto=$this->validarTiposapelantes($TiposapelantesDto);
$TiposapelantesController = new TiposapelantesController();
$TiposapelantesDto = $TiposapelantesController->insertTiposapelantes($TiposapelantesDto);
if($TiposapelantesDto!=""){
$dtoToJson = new DtoToJson($TiposapelantesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposapelantes($TiposapelantesDto){
$TiposapelantesDto=$this->validarTiposapelantes($TiposapelantesDto);
$TiposapelantesController = new TiposapelantesController();
$TiposapelantesDto = $TiposapelantesController->updateTiposapelantes($TiposapelantesDto);
if($TiposapelantesDto!=""){
$dtoToJson = new DtoToJson($TiposapelantesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposapelantes($TiposapelantesDto){
$TiposapelantesDto=$this->validarTiposapelantes($TiposapelantesDto);
$TiposapelantesController = new TiposapelantesController();
$TiposapelantesDto = $TiposapelantesController->deleteTiposapelantes($TiposapelantesDto);
if($TiposapelantesDto==true){
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



@$cveTipoApelante=$_POST["cveTipoApelante"];
@$desTipoApelante=$_POST["desTipoApelante"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposapelantesFacade = new TiposapelantesFacade();
$tiposapelantesDto = new TiposapelantesDTO();

$tiposapelantesDto->setCveTipoApelante($cveTipoApelante);
$tiposapelantesDto->setDesTipoApelante($desTipoApelante);
$tiposapelantesDto->setActivo($activo);
$tiposapelantesDto->setFechaRegistro($fechaRegistro);
$tiposapelantesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoApelante=="") ){
$tiposapelantesDto=$tiposapelantesFacade->insertTiposapelantes($tiposapelantesDto);
echo $tiposapelantesDto;
} else if(($accion=="guardar") && ($cveTipoApelante!="")){
$tiposapelantesDto=$tiposapelantesFacade->updateTiposapelantes($tiposapelantesDto);
echo $tiposapelantesDto;
} else if($accion=="consultar"){
$tiposapelantesDto=$tiposapelantesFacade->selectTiposapelantes($tiposapelantesDto);
echo $tiposapelantesDto;
} else if( ($accion=="baja") && ($cveTipoApelante!="") ){
$tiposapelantesDto=$tiposapelantesFacade->deleteTiposapelantes($tiposapelantesDto);
echo $tiposapelantesDto;
} else if( ($accion=="seleccionar") && ($cveTipoApelante!="") ){
$tiposapelantesDto=$tiposapelantesFacade->selectTiposapelantes($tiposapelantesDto);
echo $tiposapelantesDto;
} else if($accion=="consultarOrden"){
    $orden = "order by desTipoApelante";
$tiposapelantesDto=$tiposapelantesFacade->selectTiposapelantes($tiposapelantesDto,$orden);
echo $tiposapelantesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>