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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/conductas/ConductasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/conductas/ConductasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ConductasFacade {
private $proveedor;
public function __construct() {
}
public function validarConductas($ConductasDto){
$ConductasDto->setcveConducta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConductasDto->getcveConducta(),"utf8"):strtoupper($ConductasDto->getcveConducta()))))));
if($this->esFecha($ConductasDto->getcveConducta())){
$ConductasDto->setcveConducta($this->fechaMysql($ConductasDto->getcveConducta()));
}
$ConductasDto->setdesConducta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConductasDto->getdesConducta(),"utf8"):strtoupper($ConductasDto->getdesConducta()))))));
if($this->esFecha($ConductasDto->getdesConducta())){
$ConductasDto->setdesConducta($this->fechaMysql($ConductasDto->getdesConducta()));
}
$ConductasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConductasDto->getactivo(),"utf8"):strtoupper($ConductasDto->getactivo()))))));
if($this->esFecha($ConductasDto->getactivo())){
$ConductasDto->setactivo($this->fechaMysql($ConductasDto->getactivo()));
}
$ConductasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConductasDto->getfechaRegistro(),"utf8"):strtoupper($ConductasDto->getfechaRegistro()))))));
if($this->esFecha($ConductasDto->getfechaRegistro())){
$ConductasDto->setfechaRegistro($this->fechaMysql($ConductasDto->getfechaRegistro()));
}
$ConductasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConductasDto->getfechaActualizacion(),"utf8"):strtoupper($ConductasDto->getfechaActualizacion()))))));
if($this->esFecha($ConductasDto->getfechaActualizacion())){
$ConductasDto->setfechaActualizacion($this->fechaMysql($ConductasDto->getfechaActualizacion()));
}
return $ConductasDto;
}
public function selectConductas($ConductasDto){
$ConductasDto=$this->validarConductas($ConductasDto);
$ConductasController = new ConductasController();
$ConductasDto = $ConductasController->selectConductas($ConductasDto);
if($ConductasDto!=""){
$dtoToJson = new DtoToJson($ConductasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertConductas($ConductasDto){
$ConductasDto=$this->validarConductas($ConductasDto);
$ConductasController = new ConductasController();
$ConductasDto = $ConductasController->insertConductas($ConductasDto);
if($ConductasDto!=""){
$dtoToJson = new DtoToJson($ConductasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateConductas($ConductasDto){
$ConductasDto=$this->validarConductas($ConductasDto);
$ConductasController = new ConductasController();
$ConductasDto = $ConductasController->updateConductas($ConductasDto);
if($ConductasDto!=""){
$dtoToJson = new DtoToJson($ConductasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteConductas($ConductasDto){
$ConductasDto=$this->validarConductas($ConductasDto);
$ConductasController = new ConductasController();
$ConductasDto = $ConductasController->deleteConductas($ConductasDto);
if($ConductasDto==true){
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



@$cveConducta=$_POST["cveConducta"];
@$desConducta=$_POST["desConducta"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$conductasFacade = new ConductasFacade();
$conductasDto = new ConductasDTO();

$conductasDto->setCveConducta($cveConducta);
$conductasDto->setDesConducta($desConducta);
$conductasDto->setActivo($activo);
$conductasDto->setFechaRegistro($fechaRegistro);
$conductasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveConducta=="") ){
$conductasDto=$conductasFacade->insertConductas($conductasDto);
echo $conductasDto;
} else if(($accion=="guardar") && ($cveConducta!="")){
$conductasDto=$conductasFacade->updateConductas($conductasDto);
echo $conductasDto;
} else if($accion=="consultar"){
$conductasDto=$conductasFacade->selectConductas($conductasDto);
echo $conductasDto;
} else if( ($accion=="baja") && ($cveConducta!="") ){
$conductasDto=$conductasFacade->deleteConductas($conductasDto);
echo $conductasDto;
} else if( ($accion=="seleccionar") && ($cveConducta!="") ){
$conductasDto=$conductasFacade->selectConductas($conductasDto);
echo $conductasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>