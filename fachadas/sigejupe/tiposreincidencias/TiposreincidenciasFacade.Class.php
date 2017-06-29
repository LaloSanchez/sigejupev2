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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposreincidencias/TiposreincidenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposreincidencias/TiposreincidenciasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposreincidenciasFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposreincidencias($TiposreincidenciasDto){
$TiposreincidenciasDto->setcveTipoReincidencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposreincidenciasDto->getcveTipoReincidencia(),"utf8"):strtoupper($TiposreincidenciasDto->getcveTipoReincidencia()))))));
if($this->esFecha($TiposreincidenciasDto->getcveTipoReincidencia())){
$TiposreincidenciasDto->setcveTipoReincidencia($this->fechaMysql($TiposreincidenciasDto->getcveTipoReincidencia()));
}
$TiposreincidenciasDto->setdesTipoReincidencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposreincidenciasDto->getdesTipoReincidencia(),"utf8"):strtoupper($TiposreincidenciasDto->getdesTipoReincidencia()))))));
if($this->esFecha($TiposreincidenciasDto->getdesTipoReincidencia())){
$TiposreincidenciasDto->setdesTipoReincidencia($this->fechaMysql($TiposreincidenciasDto->getdesTipoReincidencia()));
}
$TiposreincidenciasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposreincidenciasDto->getactivo(),"utf8"):strtoupper($TiposreincidenciasDto->getactivo()))))));
if($this->esFecha($TiposreincidenciasDto->getactivo())){
$TiposreincidenciasDto->setactivo($this->fechaMysql($TiposreincidenciasDto->getactivo()));
}
$TiposreincidenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposreincidenciasDto->getfechaRegistro(),"utf8"):strtoupper($TiposreincidenciasDto->getfechaRegistro()))))));
if($this->esFecha($TiposreincidenciasDto->getfechaRegistro())){
$TiposreincidenciasDto->setfechaRegistro($this->fechaMysql($TiposreincidenciasDto->getfechaRegistro()));
}
$TiposreincidenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposreincidenciasDto->getfechaActualizacion(),"utf8"):strtoupper($TiposreincidenciasDto->getfechaActualizacion()))))));
if($this->esFecha($TiposreincidenciasDto->getfechaActualizacion())){
$TiposreincidenciasDto->setfechaActualizacion($this->fechaMysql($TiposreincidenciasDto->getfechaActualizacion()));
}
return $TiposreincidenciasDto;
}
public function selectTiposreincidencias($TiposreincidenciasDto){
$TiposreincidenciasDto=$this->validarTiposreincidencias($TiposreincidenciasDto);
$TiposreincidenciasController = new TiposreincidenciasController();
$TiposreincidenciasDto = $TiposreincidenciasController->selectTiposreincidencias($TiposreincidenciasDto);
if($TiposreincidenciasDto!=""){
$dtoToJson = new DtoToJson($TiposreincidenciasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposreincidencias($TiposreincidenciasDto){
$TiposreincidenciasDto=$this->validarTiposreincidencias($TiposreincidenciasDto);
$TiposreincidenciasController = new TiposreincidenciasController();
$TiposreincidenciasDto = $TiposreincidenciasController->insertTiposreincidencias($TiposreincidenciasDto);
if($TiposreincidenciasDto!=""){
$dtoToJson = new DtoToJson($TiposreincidenciasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposreincidencias($TiposreincidenciasDto){
$TiposreincidenciasDto=$this->validarTiposreincidencias($TiposreincidenciasDto);
$TiposreincidenciasController = new TiposreincidenciasController();
$TiposreincidenciasDto = $TiposreincidenciasController->updateTiposreincidencias($TiposreincidenciasDto);
if($TiposreincidenciasDto!=""){
$dtoToJson = new DtoToJson($TiposreincidenciasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposreincidencias($TiposreincidenciasDto){
$TiposreincidenciasDto=$this->validarTiposreincidencias($TiposreincidenciasDto);
$TiposreincidenciasController = new TiposreincidenciasController();
$TiposreincidenciasDto = $TiposreincidenciasController->deleteTiposreincidencias($TiposreincidenciasDto);
if($TiposreincidenciasDto==true){
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



@$cveTipoReincidencia=$_POST["cveTipoReincidencia"];
@$desTipoReincidencia=$_POST["desTipoReincidencia"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposreincidenciasFacade = new TiposreincidenciasFacade();
$tiposreincidenciasDto = new TiposreincidenciasDTO();

$tiposreincidenciasDto->setCveTipoReincidencia($cveTipoReincidencia);
$tiposreincidenciasDto->setDesTipoReincidencia($desTipoReincidencia);
$tiposreincidenciasDto->setActivo($activo);
$tiposreincidenciasDto->setFechaRegistro($fechaRegistro);
$tiposreincidenciasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoReincidencia=="") ){
$tiposreincidenciasDto=$tiposreincidenciasFacade->insertTiposreincidencias($tiposreincidenciasDto);
echo $tiposreincidenciasDto;
} else if(($accion=="guardar") && ($cveTipoReincidencia!="")){
$tiposreincidenciasDto=$tiposreincidenciasFacade->updateTiposreincidencias($tiposreincidenciasDto);
echo $tiposreincidenciasDto;
} else if($accion=="consultar"){
$tiposreincidenciasDto=$tiposreincidenciasFacade->selectTiposreincidencias($tiposreincidenciasDto);
echo $tiposreincidenciasDto;
} else if( ($accion=="baja") && ($cveTipoReincidencia!="") ){
$tiposreincidenciasDto=$tiposreincidenciasFacade->deleteTiposreincidencias($tiposreincidenciasDto);
echo $tiposreincidenciasDto;
} else if( ($accion=="seleccionar") && ($cveTipoReincidencia!="") ){
$tiposreincidenciasDto=$tiposreincidenciasFacade->selectTiposreincidencias($tiposreincidenciasDto);
echo $tiposreincidenciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>