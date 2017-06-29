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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposdeviviendas/TiposdeviviendasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposdeviviendas/TiposdeviviendasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposdeviviendasFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposdeviviendas($TiposdeviviendasDto){
$TiposdeviviendasDto->setcveTipoDeVivienda(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdeviviendasDto->getcveTipoDeVivienda(),"utf8"):strtoupper($TiposdeviviendasDto->getcveTipoDeVivienda()))))));
if($this->esFecha($TiposdeviviendasDto->getcveTipoDeVivienda())){
$TiposdeviviendasDto->setcveTipoDeVivienda($this->fechaMysql($TiposdeviviendasDto->getcveTipoDeVivienda()));
}
$TiposdeviviendasDto->setdesTipoDeVivienda(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdeviviendasDto->getdesTipoDeVivienda(),"utf8"):strtoupper($TiposdeviviendasDto->getdesTipoDeVivienda()))))));
if($this->esFecha($TiposdeviviendasDto->getdesTipoDeVivienda())){
$TiposdeviviendasDto->setdesTipoDeVivienda($this->fechaMysql($TiposdeviviendasDto->getdesTipoDeVivienda()));
}
$TiposdeviviendasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdeviviendasDto->getactivo(),"utf8"):strtoupper($TiposdeviviendasDto->getactivo()))))));
if($this->esFecha($TiposdeviviendasDto->getactivo())){
$TiposdeviviendasDto->setactivo($this->fechaMysql($TiposdeviviendasDto->getactivo()));
}
$TiposdeviviendasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdeviviendasDto->getfechaRegistro(),"utf8"):strtoupper($TiposdeviviendasDto->getfechaRegistro()))))));
if($this->esFecha($TiposdeviviendasDto->getfechaRegistro())){
$TiposdeviviendasDto->setfechaRegistro($this->fechaMysql($TiposdeviviendasDto->getfechaRegistro()));
}
$TiposdeviviendasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdeviviendasDto->getfechaActualizacion(),"utf8"):strtoupper($TiposdeviviendasDto->getfechaActualizacion()))))));
if($this->esFecha($TiposdeviviendasDto->getfechaActualizacion())){
$TiposdeviviendasDto->setfechaActualizacion($this->fechaMysql($TiposdeviviendasDto->getfechaActualizacion()));
}
return $TiposdeviviendasDto;
}
public function selectTiposdeviviendas($TiposdeviviendasDto){
$TiposdeviviendasDto=$this->validarTiposdeviviendas($TiposdeviviendasDto);
$TiposdeviviendasController = new TiposdeviviendasController();
$TiposdeviviendasDto = $TiposdeviviendasController->selectTiposdeviviendas($TiposdeviviendasDto);
if($TiposdeviviendasDto!=""){
$dtoToJson = new DtoToJson($TiposdeviviendasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposdeviviendas($TiposdeviviendasDto){
$TiposdeviviendasDto=$this->validarTiposdeviviendas($TiposdeviviendasDto);
$TiposdeviviendasController = new TiposdeviviendasController();
$TiposdeviviendasDto = $TiposdeviviendasController->insertTiposdeviviendas($TiposdeviviendasDto);
if($TiposdeviviendasDto!=""){
$dtoToJson = new DtoToJson($TiposdeviviendasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposdeviviendas($TiposdeviviendasDto){
$TiposdeviviendasDto=$this->validarTiposdeviviendas($TiposdeviviendasDto);
$TiposdeviviendasController = new TiposdeviviendasController();
$TiposdeviviendasDto = $TiposdeviviendasController->updateTiposdeviviendas($TiposdeviviendasDto);
if($TiposdeviviendasDto!=""){
$dtoToJson = new DtoToJson($TiposdeviviendasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposdeviviendas($TiposdeviviendasDto){
$TiposdeviviendasDto=$this->validarTiposdeviviendas($TiposdeviviendasDto);
$TiposdeviviendasController = new TiposdeviviendasController();
$TiposdeviviendasDto = $TiposdeviviendasController->deleteTiposdeviviendas($TiposdeviviendasDto);
if($TiposdeviviendasDto==true){
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



@$cveTipoDeVivienda=$_POST["cveTipoDeVivienda"];
@$desTipoDeVivienda=$_POST["desTipoDeVivienda"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposdeviviendasFacade = new TiposdeviviendasFacade();
$tiposdeviviendasDto = new TiposdeviviendasDTO();

$tiposdeviviendasDto->setCveTipoDeVivienda($cveTipoDeVivienda);
$tiposdeviviendasDto->setDesTipoDeVivienda($desTipoDeVivienda);
$tiposdeviviendasDto->setActivo($activo);
$tiposdeviviendasDto->setFechaRegistro($fechaRegistro);
$tiposdeviviendasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoDeVivienda=="") ){
$tiposdeviviendasDto=$tiposdeviviendasFacade->insertTiposdeviviendas($tiposdeviviendasDto);
echo $tiposdeviviendasDto;
} else if(($accion=="guardar") && ($cveTipoDeVivienda!="")){
$tiposdeviviendasDto=$tiposdeviviendasFacade->updateTiposdeviviendas($tiposdeviviendasDto);
echo $tiposdeviviendasDto;
} else if($accion=="consultar"){
$tiposdeviviendasDto=$tiposdeviviendasFacade->selectTiposdeviviendas($tiposdeviviendasDto);
echo $tiposdeviviendasDto;
} else if( ($accion=="baja") && ($cveTipoDeVivienda!="") ){
$tiposdeviviendasDto=$tiposdeviviendasFacade->deleteTiposdeviviendas($tiposdeviviendasDto);
echo $tiposdeviviendasDto;
} else if( ($accion=="seleccionar") && ($cveTipoDeVivienda!="") ){
$tiposdeviviendasDto=$tiposdeviviendasFacade->selectTiposdeviviendas($tiposdeviviendasDto);
echo $tiposdeviviendasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>