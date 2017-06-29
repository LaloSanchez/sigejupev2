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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipostratas/TipostratasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tipostratas/TipostratasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TipostratasFacade {
private $proveedor;
public function __construct() {
}
public function validarTipostratas($TipostratasDto){
$TipostratasDto->setcveTipoTrata(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipostratasDto->getcveTipoTrata(),"utf8"):strtoupper($TipostratasDto->getcveTipoTrata()))))));
if($this->esFecha($TipostratasDto->getcveTipoTrata())){
$TipostratasDto->setcveTipoTrata($this->fechaMysql($TipostratasDto->getcveTipoTrata()));
}
$TipostratasDto->setdesTipoTrata(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipostratasDto->getdesTipoTrata(),"utf8"):strtoupper($TipostratasDto->getdesTipoTrata()))))));
if($this->esFecha($TipostratasDto->getdesTipoTrata())){
$TipostratasDto->setdesTipoTrata($this->fechaMysql($TipostratasDto->getdesTipoTrata()));
}
$TipostratasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipostratasDto->getactivo(),"utf8"):strtoupper($TipostratasDto->getactivo()))))));
if($this->esFecha($TipostratasDto->getactivo())){
$TipostratasDto->setactivo($this->fechaMysql($TipostratasDto->getactivo()));
}
$TipostratasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipostratasDto->getfechaRegistro(),"utf8"):strtoupper($TipostratasDto->getfechaRegistro()))))));
if($this->esFecha($TipostratasDto->getfechaRegistro())){
$TipostratasDto->setfechaRegistro($this->fechaMysql($TipostratasDto->getfechaRegistro()));
}
$TipostratasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipostratasDto->getfechaActualizacion(),"utf8"):strtoupper($TipostratasDto->getfechaActualizacion()))))));
if($this->esFecha($TipostratasDto->getfechaActualizacion())){
$TipostratasDto->setfechaActualizacion($this->fechaMysql($TipostratasDto->getfechaActualizacion()));
}
return $TipostratasDto;
}
public function selectTipostratas($TipostratasDto){
$TipostratasDto=$this->validarTipostratas($TipostratasDto);
$TipostratasController = new TipostratasController();
$TipostratasDto = $TipostratasController->selectTipostratas($TipostratasDto);
if($TipostratasDto!=""){
$dtoToJson = new DtoToJson($TipostratasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTipostratas($TipostratasDto){
$TipostratasDto=$this->validarTipostratas($TipostratasDto);
$TipostratasController = new TipostratasController();
$TipostratasDto = $TipostratasController->insertTipostratas($TipostratasDto);
if($TipostratasDto!=""){
$dtoToJson = new DtoToJson($TipostratasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTipostratas($TipostratasDto){
$TipostratasDto=$this->validarTipostratas($TipostratasDto);
$TipostratasController = new TipostratasController();
$TipostratasDto = $TipostratasController->updateTipostratas($TipostratasDto);
if($TipostratasDto!=""){
$dtoToJson = new DtoToJson($TipostratasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTipostratas($TipostratasDto){
$TipostratasDto=$this->validarTipostratas($TipostratasDto);
$TipostratasController = new TipostratasController();
$TipostratasDto = $TipostratasController->deleteTipostratas($TipostratasDto);
if($TipostratasDto==true){
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



@$cveTipoTrata=$_POST["cveTipoTrata"];
@$desTipoTrata=$_POST["desTipoTrata"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tipostratasFacade = new TipostratasFacade();
$tipostratasDto = new TipostratasDTO();

$tipostratasDto->setCveTipoTrata($cveTipoTrata);
$tipostratasDto->setDesTipoTrata($desTipoTrata);
$tipostratasDto->setActivo($activo);
$tipostratasDto->setFechaRegistro($fechaRegistro);
$tipostratasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoTrata=="") ){
$tipostratasDto=$tipostratasFacade->insertTipostratas($tipostratasDto);
echo $tipostratasDto;
} else if(($accion=="guardar") && ($cveTipoTrata!="")){
$tipostratasDto=$tipostratasFacade->updateTipostratas($tipostratasDto);
echo $tipostratasDto;
} else if($accion=="consultar"){
$tipostratasDto=$tipostratasFacade->selectTipostratas($tipostratasDto);
echo $tipostratasDto;
} else if( ($accion=="baja") && ($cveTipoTrata!="") ){
$tipostratasDto=$tipostratasFacade->deleteTipostratas($tipostratasDto);
echo $tipostratasDto;
} else if( ($accion=="seleccionar") && ($cveTipoTrata!="") ){
$tipostratasDto=$tipostratasFacade->selectTipostratas($tipostratasDto);
echo $tipostratasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>