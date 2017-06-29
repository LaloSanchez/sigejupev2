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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposdetenciones/TiposdetencionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposdetenciones/TiposdetencionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposdetencionesFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposdetenciones($TiposdetencionesDto){
$TiposdetencionesDto->setcveTipoDetencion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdetencionesDto->getcveTipoDetencion(),"utf8"):strtoupper($TiposdetencionesDto->getcveTipoDetencion()))))));
if($this->esFecha($TiposdetencionesDto->getcveTipoDetencion())){
$TiposdetencionesDto->setcveTipoDetencion($this->fechaMysql($TiposdetencionesDto->getcveTipoDetencion()));
}
$TiposdetencionesDto->setdesTipoDetencion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdetencionesDto->getdesTipoDetencion(),"utf8"):strtoupper($TiposdetencionesDto->getdesTipoDetencion()))))));
if($this->esFecha($TiposdetencionesDto->getdesTipoDetencion())){
$TiposdetencionesDto->setdesTipoDetencion($this->fechaMysql($TiposdetencionesDto->getdesTipoDetencion()));
}
$TiposdetencionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdetencionesDto->getactivo(),"utf8"):strtoupper($TiposdetencionesDto->getactivo()))))));
if($this->esFecha($TiposdetencionesDto->getactivo())){
$TiposdetencionesDto->setactivo($this->fechaMysql($TiposdetencionesDto->getactivo()));
}
$TiposdetencionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdetencionesDto->getfechaRegistro(),"utf8"):strtoupper($TiposdetencionesDto->getfechaRegistro()))))));
if($this->esFecha($TiposdetencionesDto->getfechaRegistro())){
$TiposdetencionesDto->setfechaRegistro($this->fechaMysql($TiposdetencionesDto->getfechaRegistro()));
}
$TiposdetencionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdetencionesDto->getfechaActualizacion(),"utf8"):strtoupper($TiposdetencionesDto->getfechaActualizacion()))))));
if($this->esFecha($TiposdetencionesDto->getfechaActualizacion())){
$TiposdetencionesDto->setfechaActualizacion($this->fechaMysql($TiposdetencionesDto->getfechaActualizacion()));
}
return $TiposdetencionesDto;
}
public function selectTiposdetenciones($TiposdetencionesDto){
$TiposdetencionesDto=$this->validarTiposdetenciones($TiposdetencionesDto);
$TiposdetencionesController = new TiposdetencionesController();
$TiposdetencionesDto = $TiposdetencionesController->selectTiposdetenciones($TiposdetencionesDto);
if($TiposdetencionesDto!=""){
$dtoToJson = new DtoToJson($TiposdetencionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposdetenciones($TiposdetencionesDto){
$TiposdetencionesDto=$this->validarTiposdetenciones($TiposdetencionesDto);
$TiposdetencionesController = new TiposdetencionesController();
$TiposdetencionesDto = $TiposdetencionesController->insertTiposdetenciones($TiposdetencionesDto);
if($TiposdetencionesDto!=""){
$dtoToJson = new DtoToJson($TiposdetencionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposdetenciones($TiposdetencionesDto){
$TiposdetencionesDto=$this->validarTiposdetenciones($TiposdetencionesDto);
$TiposdetencionesController = new TiposdetencionesController();
$TiposdetencionesDto = $TiposdetencionesController->updateTiposdetenciones($TiposdetencionesDto);
if($TiposdetencionesDto!=""){
$dtoToJson = new DtoToJson($TiposdetencionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposdetenciones($TiposdetencionesDto){
$TiposdetencionesDto=$this->validarTiposdetenciones($TiposdetencionesDto);
$TiposdetencionesController = new TiposdetencionesController();
$TiposdetencionesDto = $TiposdetencionesController->deleteTiposdetenciones($TiposdetencionesDto);
if($TiposdetencionesDto==true){
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



@$cveTipoDetencion=$_POST["cveTipoDetencion"];
@$desTipoDetencion=$_POST["desTipoDetencion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposdetencionesFacade = new TiposdetencionesFacade();
$tiposdetencionesDto = new TiposdetencionesDTO();

$tiposdetencionesDto->setCveTipoDetencion($cveTipoDetencion);
$tiposdetencionesDto->setDesTipoDetencion($desTipoDetencion);
$tiposdetencionesDto->setActivo($activo);
$tiposdetencionesDto->setFechaRegistro($fechaRegistro);
$tiposdetencionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoDetencion=="") ){
$tiposdetencionesDto=$tiposdetencionesFacade->insertTiposdetenciones($tiposdetencionesDto);
echo $tiposdetencionesDto;
} else if(($accion=="guardar") && ($cveTipoDetencion!="")){
$tiposdetencionesDto=$tiposdetencionesFacade->updateTiposdetenciones($tiposdetencionesDto);
echo $tiposdetencionesDto;
} else if($accion=="consultar"){
$tiposdetencionesDto=$tiposdetencionesFacade->selectTiposdetenciones($tiposdetencionesDto);
echo $tiposdetencionesDto;
} else if( ($accion=="baja") && ($cveTipoDetencion!="") ){
$tiposdetencionesDto=$tiposdetencionesFacade->deleteTiposdetenciones($tiposdetencionesDto);
echo $tiposdetencionesDto;
} else if( ($accion=="seleccionar") && ($cveTipoDetencion!="") ){
$tiposdetencionesDto=$tiposdetencionesFacade->selectTiposdetenciones($tiposdetencionesDto);
echo $tiposdetencionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>