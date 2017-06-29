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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposestatus/TiposestatusDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposestatus/TiposestatusController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposestatusFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposestatus($TiposestatusDto){
$TiposestatusDto->setcveTipoEstatus(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposestatusDto->getcveTipoEstatus(),"utf8"):strtoupper($TiposestatusDto->getcveTipoEstatus()))))));
if($this->esFecha($TiposestatusDto->getcveTipoEstatus())){
$TiposestatusDto->setcveTipoEstatus($this->fechaMysql($TiposestatusDto->getcveTipoEstatus()));
}
$TiposestatusDto->setdescTipoEstatus(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposestatusDto->getdescTipoEstatus(),"utf8"):strtoupper($TiposestatusDto->getdescTipoEstatus()))))));
if($this->esFecha($TiposestatusDto->getdescTipoEstatus())){
$TiposestatusDto->setdescTipoEstatus($this->fechaMysql($TiposestatusDto->getdescTipoEstatus()));
}
$TiposestatusDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposestatusDto->getactivo(),"utf8"):strtoupper($TiposestatusDto->getactivo()))))));
if($this->esFecha($TiposestatusDto->getactivo())){
$TiposestatusDto->setactivo($this->fechaMysql($TiposestatusDto->getactivo()));
}
$TiposestatusDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposestatusDto->getfechaActualizacion(),"utf8"):strtoupper($TiposestatusDto->getfechaActualizacion()))))));
if($this->esFecha($TiposestatusDto->getfechaActualizacion())){
$TiposestatusDto->setfechaActualizacion($this->fechaMysql($TiposestatusDto->getfechaActualizacion()));
}
$TiposestatusDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposestatusDto->getfechaRegistro(),"utf8"):strtoupper($TiposestatusDto->getfechaRegistro()))))));
if($this->esFecha($TiposestatusDto->getfechaRegistro())){
$TiposestatusDto->setfechaRegistro($this->fechaMysql($TiposestatusDto->getfechaRegistro()));
}
return $TiposestatusDto;
}
public function selectTiposestatus($TiposestatusDto){
$TiposestatusDto=$this->validarTiposestatus($TiposestatusDto);
$TiposestatusController = new TiposestatusController();
$TiposestatusDto = $TiposestatusController->selectTiposestatus($TiposestatusDto);
if($TiposestatusDto!=""){
$dtoToJson = new DtoToJson($TiposestatusDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposestatus($TiposestatusDto){
$TiposestatusDto=$this->validarTiposestatus($TiposestatusDto);
$TiposestatusController = new TiposestatusController();
$TiposestatusDto = $TiposestatusController->insertTiposestatus($TiposestatusDto);
if($TiposestatusDto!=""){
$dtoToJson = new DtoToJson($TiposestatusDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposestatus($TiposestatusDto){
$TiposestatusDto=$this->validarTiposestatus($TiposestatusDto);
$TiposestatusController = new TiposestatusController();
$TiposestatusDto = $TiposestatusController->updateTiposestatus($TiposestatusDto);
if($TiposestatusDto!=""){
$dtoToJson = new DtoToJson($TiposestatusDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposestatus($TiposestatusDto){
$TiposestatusDto=$this->validarTiposestatus($TiposestatusDto);
$TiposestatusController = new TiposestatusController();
$TiposestatusDto = $TiposestatusController->deleteTiposestatus($TiposestatusDto);
if($TiposestatusDto==true){
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



@$cveTipoEstatus=$_POST["cveTipoEstatus"];
@$descTipoEstatus=$_POST["descTipoEstatus"];
@$activo=$_POST["activo"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$accion=$_POST["accion"];

$tiposestatusFacade = new TiposestatusFacade();
$tiposestatusDto = new TiposestatusDTO();

$tiposestatusDto->setCveTipoEstatus($cveTipoEstatus);
$tiposestatusDto->setDescTipoEstatus($descTipoEstatus);
$tiposestatusDto->setActivo($activo);
$tiposestatusDto->setFechaActualizacion($fechaActualizacion);
$tiposestatusDto->setFechaRegistro($fechaRegistro);

if( ($accion=="guardar") && ($cveTipoEstatus=="") ){
$tiposestatusDto=$tiposestatusFacade->insertTiposestatus($tiposestatusDto);
echo $tiposestatusDto;
} else if(($accion=="guardar") && ($cveTipoEstatus!="")){
$tiposestatusDto=$tiposestatusFacade->updateTiposestatus($tiposestatusDto);
echo $tiposestatusDto;
} else if($accion=="consultar"){
$tiposestatusDto=$tiposestatusFacade->selectTiposestatus($tiposestatusDto);
echo $tiposestatusDto;
} else if( ($accion=="baja") && ($cveTipoEstatus!="") ){
$tiposestatusDto=$tiposestatusFacade->deleteTiposestatus($tiposestatusDto);
echo $tiposestatusDto;
} else if( ($accion=="seleccionar") && ($cveTipoEstatus!="") ){
$tiposestatusDto=$tiposestatusFacade->selectTiposestatus($tiposestatusDto);
echo $tiposestatusDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>