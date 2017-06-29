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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposaudiencias/TiposaudienciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposaudiencias/TiposaudienciasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposaudienciasFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposaudiencias($TiposaudienciasDto){
$TiposaudienciasDto->setcveTipoAudiencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposaudienciasDto->getcveTipoAudiencia(),"utf8"):strtoupper($TiposaudienciasDto->getcveTipoAudiencia()))))));
if($this->esFecha($TiposaudienciasDto->getcveTipoAudiencia())){
$TiposaudienciasDto->setcveTipoAudiencia($this->fechaMysql($TiposaudienciasDto->getcveTipoAudiencia()));
}
$TiposaudienciasDto->setdesTipoAudiencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposaudienciasDto->getdesTipoAudiencia(),"utf8"):strtoupper($TiposaudienciasDto->getdesTipoAudiencia()))))));
if($this->esFecha($TiposaudienciasDto->getdesTipoAudiencia())){
$TiposaudienciasDto->setdesTipoAudiencia($this->fechaMysql($TiposaudienciasDto->getdesTipoAudiencia()));
}
$TiposaudienciasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposaudienciasDto->getactivo(),"utf8"):strtoupper($TiposaudienciasDto->getactivo()))))));
if($this->esFecha($TiposaudienciasDto->getactivo())){
$TiposaudienciasDto->setactivo($this->fechaMysql($TiposaudienciasDto->getactivo()));
}
$TiposaudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposaudienciasDto->getfechaRegistro(),"utf8"):strtoupper($TiposaudienciasDto->getfechaRegistro()))))));
if($this->esFecha($TiposaudienciasDto->getfechaRegistro())){
$TiposaudienciasDto->setfechaRegistro($this->fechaMysql($TiposaudienciasDto->getfechaRegistro()));
}
$TiposaudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposaudienciasDto->getfechaActualizacion(),"utf8"):strtoupper($TiposaudienciasDto->getfechaActualizacion()))))));
if($this->esFecha($TiposaudienciasDto->getfechaActualizacion())){
$TiposaudienciasDto->setfechaActualizacion($this->fechaMysql($TiposaudienciasDto->getfechaActualizacion()));
}
return $TiposaudienciasDto;
}
public function selectTiposaudiencias($TiposaudienciasDto){
$TiposaudienciasDto=$this->validarTiposaudiencias($TiposaudienciasDto);
$TiposaudienciasController = new TiposaudienciasController();
$TiposaudienciasDto = $TiposaudienciasController->selectTiposaudiencias($TiposaudienciasDto);
if($TiposaudienciasDto!=""){
$dtoToJson = new DtoToJson($TiposaudienciasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposaudiencias($TiposaudienciasDto){
$TiposaudienciasDto=$this->validarTiposaudiencias($TiposaudienciasDto);
$TiposaudienciasController = new TiposaudienciasController();
$TiposaudienciasDto = $TiposaudienciasController->insertTiposaudiencias($TiposaudienciasDto);
if($TiposaudienciasDto!=""){
$dtoToJson = new DtoToJson($TiposaudienciasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposaudiencias($TiposaudienciasDto){
$TiposaudienciasDto=$this->validarTiposaudiencias($TiposaudienciasDto);
$TiposaudienciasController = new TiposaudienciasController();
$TiposaudienciasDto = $TiposaudienciasController->updateTiposaudiencias($TiposaudienciasDto);
if($TiposaudienciasDto!=""){
$dtoToJson = new DtoToJson($TiposaudienciasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposaudiencias($TiposaudienciasDto){
$TiposaudienciasDto=$this->validarTiposaudiencias($TiposaudienciasDto);
$TiposaudienciasController = new TiposaudienciasController();
$TiposaudienciasDto = $TiposaudienciasController->deleteTiposaudiencias($TiposaudienciasDto);
if($TiposaudienciasDto==true){
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



@$cveTipoAudiencia=$_POST["cveTipoAudiencia"];
@$desTipoAudiencia=$_POST["desTipoAudiencia"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposaudienciasFacade = new TiposaudienciasFacade();
$tiposaudienciasDto = new TiposaudienciasDTO();

$tiposaudienciasDto->setCveTipoAudiencia($cveTipoAudiencia);
$tiposaudienciasDto->setDesTipoAudiencia($desTipoAudiencia);
$tiposaudienciasDto->setActivo($activo);
$tiposaudienciasDto->setFechaRegistro($fechaRegistro);
$tiposaudienciasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoAudiencia=="") ){
$tiposaudienciasDto=$tiposaudienciasFacade->insertTiposaudiencias($tiposaudienciasDto);
echo $tiposaudienciasDto;
} else if(($accion=="guardar") && ($cveTipoAudiencia!="")){
$tiposaudienciasDto=$tiposaudienciasFacade->updateTiposaudiencias($tiposaudienciasDto);
echo $tiposaudienciasDto;
} else if($accion=="consultar"){
$tiposaudienciasDto=$tiposaudienciasFacade->selectTiposaudiencias($tiposaudienciasDto);
echo $tiposaudienciasDto;
} else if( ($accion=="baja") && ($cveTipoAudiencia!="") ){
$tiposaudienciasDto=$tiposaudienciasFacade->deleteTiposaudiencias($tiposaudienciasDto);
echo $tiposaudienciasDto;
} else if( ($accion=="seleccionar") && ($cveTipoAudiencia!="") ){
$tiposaudienciasDto=$tiposaudienciasFacade->selectTiposaudiencias($tiposaudienciasDto);
echo $tiposaudienciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>