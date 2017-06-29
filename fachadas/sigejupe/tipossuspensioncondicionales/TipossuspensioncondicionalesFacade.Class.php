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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipossuspensioncondicionales/TipossuspensioncondicionalesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tipossuspensioncondicionales/TipossuspensioncondicionalesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TipossuspensioncondicionalesFacade {
private $proveedor;
public function __construct() {
}
public function validarTipossuspensioncondicionales($TipossuspensioncondicionalesDto){
$TipossuspensioncondicionalesDto->setcveTipoSuspensionCondicional(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossuspensioncondicionalesDto->getcveTipoSuspensionCondicional(),"utf8"):strtoupper($TipossuspensioncondicionalesDto->getcveTipoSuspensionCondicional()))))));
if($this->esFecha($TipossuspensioncondicionalesDto->getcveTipoSuspensionCondicional())){
$TipossuspensioncondicionalesDto->setcveTipoSuspensionCondicional($this->fechaMysql($TipossuspensioncondicionalesDto->getcveTipoSuspensionCondicional()));
}
$TipossuspensioncondicionalesDto->setdesTipoSuspensionCondicional(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossuspensioncondicionalesDto->getdesTipoSuspensionCondicional(),"utf8"):strtoupper($TipossuspensioncondicionalesDto->getdesTipoSuspensionCondicional()))))));
if($this->esFecha($TipossuspensioncondicionalesDto->getdesTipoSuspensionCondicional())){
$TipossuspensioncondicionalesDto->setdesTipoSuspensionCondicional($this->fechaMysql($TipossuspensioncondicionalesDto->getdesTipoSuspensionCondicional()));
}
$TipossuspensioncondicionalesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossuspensioncondicionalesDto->getactivo(),"utf8"):strtoupper($TipossuspensioncondicionalesDto->getactivo()))))));
if($this->esFecha($TipossuspensioncondicionalesDto->getactivo())){
$TipossuspensioncondicionalesDto->setactivo($this->fechaMysql($TipossuspensioncondicionalesDto->getactivo()));
}
$TipossuspensioncondicionalesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossuspensioncondicionalesDto->getfechaRegistro(),"utf8"):strtoupper($TipossuspensioncondicionalesDto->getfechaRegistro()))))));
if($this->esFecha($TipossuspensioncondicionalesDto->getfechaRegistro())){
$TipossuspensioncondicionalesDto->setfechaRegistro($this->fechaMysql($TipossuspensioncondicionalesDto->getfechaRegistro()));
}
$TipossuspensioncondicionalesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossuspensioncondicionalesDto->getfechaActualizacion(),"utf8"):strtoupper($TipossuspensioncondicionalesDto->getfechaActualizacion()))))));
if($this->esFecha($TipossuspensioncondicionalesDto->getfechaActualizacion())){
$TipossuspensioncondicionalesDto->setfechaActualizacion($this->fechaMysql($TipossuspensioncondicionalesDto->getfechaActualizacion()));
}
return $TipossuspensioncondicionalesDto;
}
public function selectTipossuspensioncondicionales($TipossuspensioncondicionalesDto){
$TipossuspensioncondicionalesDto=$this->validarTipossuspensioncondicionales($TipossuspensioncondicionalesDto);
$TipossuspensioncondicionalesController = new TipossuspensioncondicionalesController();
$TipossuspensioncondicionalesDto = $TipossuspensioncondicionalesController->selectTipossuspensioncondicionales($TipossuspensioncondicionalesDto);
if($TipossuspensioncondicionalesDto!=""){
$dtoToJson = new DtoToJson($TipossuspensioncondicionalesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTipossuspensioncondicionales($TipossuspensioncondicionalesDto){
$TipossuspensioncondicionalesDto=$this->validarTipossuspensioncondicionales($TipossuspensioncondicionalesDto);
$TipossuspensioncondicionalesController = new TipossuspensioncondicionalesController();
$TipossuspensioncondicionalesDto = $TipossuspensioncondicionalesController->insertTipossuspensioncondicionales($TipossuspensioncondicionalesDto);
if($TipossuspensioncondicionalesDto!=""){
$dtoToJson = new DtoToJson($TipossuspensioncondicionalesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTipossuspensioncondicionales($TipossuspensioncondicionalesDto){
$TipossuspensioncondicionalesDto=$this->validarTipossuspensioncondicionales($TipossuspensioncondicionalesDto);
$TipossuspensioncondicionalesController = new TipossuspensioncondicionalesController();
$TipossuspensioncondicionalesDto = $TipossuspensioncondicionalesController->updateTipossuspensioncondicionales($TipossuspensioncondicionalesDto);
if($TipossuspensioncondicionalesDto!=""){
$dtoToJson = new DtoToJson($TipossuspensioncondicionalesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTipossuspensioncondicionales($TipossuspensioncondicionalesDto){
$TipossuspensioncondicionalesDto=$this->validarTipossuspensioncondicionales($TipossuspensioncondicionalesDto);
$TipossuspensioncondicionalesController = new TipossuspensioncondicionalesController();
$TipossuspensioncondicionalesDto = $TipossuspensioncondicionalesController->deleteTipossuspensioncondicionales($TipossuspensioncondicionalesDto);
if($TipossuspensioncondicionalesDto==true){
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



@$cveTipoSuspensionCondicional=$_POST["cveTipoSuspensionCondicional"];
@$desTipoSuspensionCondicional=$_POST["desTipoSuspensionCondicional"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tipossuspensioncondicionalesFacade = new TipossuspensioncondicionalesFacade();
$tipossuspensioncondicionalesDto = new TipossuspensioncondicionalesDTO();

$tipossuspensioncondicionalesDto->setCveTipoSuspensionCondicional($cveTipoSuspensionCondicional);
$tipossuspensioncondicionalesDto->setDesTipoSuspensionCondicional($desTipoSuspensionCondicional);
$tipossuspensioncondicionalesDto->setActivo($activo);
$tipossuspensioncondicionalesDto->setFechaRegistro($fechaRegistro);
$tipossuspensioncondicionalesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoSuspensionCondicional=="") ){
$tipossuspensioncondicionalesDto=$tipossuspensioncondicionalesFacade->insertTipossuspensioncondicionales($tipossuspensioncondicionalesDto);
echo $tipossuspensioncondicionalesDto;
} else if(($accion=="guardar") && ($cveTipoSuspensionCondicional!="")){
$tipossuspensioncondicionalesDto=$tipossuspensioncondicionalesFacade->updateTipossuspensioncondicionales($tipossuspensioncondicionalesDto);
echo $tipossuspensioncondicionalesDto;
} else if($accion=="consultar"){
$tipossuspensioncondicionalesDto=$tipossuspensioncondicionalesFacade->selectTipossuspensioncondicionales($tipossuspensioncondicionalesDto);
echo $tipossuspensioncondicionalesDto;
} else if( ($accion=="baja") && ($cveTipoSuspensionCondicional!="") ){
$tipossuspensioncondicionalesDto=$tipossuspensioncondicionalesFacade->deleteTipossuspensioncondicionales($tipossuspensioncondicionalesDto);
echo $tipossuspensioncondicionalesDto;
} else if( ($accion=="seleccionar") && ($cveTipoSuspensionCondicional!="") ){
$tipossuspensioncondicionalesDto=$tipossuspensioncondicionalesFacade->selectTipossuspensioncondicionales($tipossuspensioncondicionalesDto);
echo $tipossuspensioncondicionalesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>