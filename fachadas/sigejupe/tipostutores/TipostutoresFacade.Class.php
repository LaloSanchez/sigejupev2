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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipostutores/TipostutoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tipostutores/TipostutoresController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TipostutoresFacade {
private $proveedor;
public function __construct() {
}
public function validarTipostutores($TipostutoresDto){
$TipostutoresDto->setcveTipoTutor(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipostutoresDto->getcveTipoTutor(),"utf8"):strtoupper($TipostutoresDto->getcveTipoTutor()))))));
if($this->esFecha($TipostutoresDto->getcveTipoTutor())){
$TipostutoresDto->setcveTipoTutor($this->fechaMysql($TipostutoresDto->getcveTipoTutor()));
}
$TipostutoresDto->setdesTipoTutor(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipostutoresDto->getdesTipoTutor(),"utf8"):strtoupper($TipostutoresDto->getdesTipoTutor()))))));
if($this->esFecha($TipostutoresDto->getdesTipoTutor())){
$TipostutoresDto->setdesTipoTutor($this->fechaMysql($TipostutoresDto->getdesTipoTutor()));
}
$TipostutoresDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipostutoresDto->getactivo(),"utf8"):strtoupper($TipostutoresDto->getactivo()))))));
if($this->esFecha($TipostutoresDto->getactivo())){
$TipostutoresDto->setactivo($this->fechaMysql($TipostutoresDto->getactivo()));
}
$TipostutoresDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipostutoresDto->getfechaRegistro(),"utf8"):strtoupper($TipostutoresDto->getfechaRegistro()))))));
if($this->esFecha($TipostutoresDto->getfechaRegistro())){
$TipostutoresDto->setfechaRegistro($this->fechaMysql($TipostutoresDto->getfechaRegistro()));
}
$TipostutoresDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipostutoresDto->getfechaActualizacion(),"utf8"):strtoupper($TipostutoresDto->getfechaActualizacion()))))));
if($this->esFecha($TipostutoresDto->getfechaActualizacion())){
$TipostutoresDto->setfechaActualizacion($this->fechaMysql($TipostutoresDto->getfechaActualizacion()));
}
return $TipostutoresDto;
}
public function selectTipostutores($TipostutoresDto){
$TipostutoresDto=$this->validarTipostutores($TipostutoresDto);
$TipostutoresController = new TipostutoresController();
$TipostutoresDto = $TipostutoresController->selectTipostutores($TipostutoresDto);
if($TipostutoresDto!=""){
$dtoToJson = new DtoToJson($TipostutoresDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTipostutores($TipostutoresDto){
$TipostutoresDto=$this->validarTipostutores($TipostutoresDto);
$TipostutoresController = new TipostutoresController();
$TipostutoresDto = $TipostutoresController->insertTipostutores($TipostutoresDto);
if($TipostutoresDto!=""){
$dtoToJson = new DtoToJson($TipostutoresDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTipostutores($TipostutoresDto){
$TipostutoresDto=$this->validarTipostutores($TipostutoresDto);
$TipostutoresController = new TipostutoresController();
$TipostutoresDto = $TipostutoresController->updateTipostutores($TipostutoresDto);
if($TipostutoresDto!=""){
$dtoToJson = new DtoToJson($TipostutoresDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTipostutores($TipostutoresDto){
$TipostutoresDto=$this->validarTipostutores($TipostutoresDto);
$TipostutoresController = new TipostutoresController();
$TipostutoresDto = $TipostutoresController->deleteTipostutores($TipostutoresDto);
if($TipostutoresDto==true){
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



@$cveTipoTutor=$_POST["cveTipoTutor"];
@$desTipoTutor=$_POST["desTipoTutor"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tipostutoresFacade = new TipostutoresFacade();
$tipostutoresDto = new TipostutoresDTO();

$tipostutoresDto->setCveTipoTutor($cveTipoTutor);
$tipostutoresDto->setDesTipoTutor($desTipoTutor);
$tipostutoresDto->setActivo($activo);
$tipostutoresDto->setFechaRegistro($fechaRegistro);
$tipostutoresDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoTutor=="") ){
$tipostutoresDto=$tipostutoresFacade->insertTipostutores($tipostutoresDto);
echo $tipostutoresDto;
} else if(($accion=="guardar") && ($cveTipoTutor!="")){
$tipostutoresDto=$tipostutoresFacade->updateTipostutores($tipostutoresDto);
echo $tipostutoresDto;
} else if($accion=="consultar"){
$tipostutoresDto=$tipostutoresFacade->selectTipostutores($tipostutoresDto);
echo $tipostutoresDto;
} else if( ($accion=="baja") && ($cveTipoTutor!="") ){
$tipostutoresDto=$tipostutoresFacade->deleteTipostutores($tipostutoresDto);
echo $tipostutoresDto;
} else if( ($accion=="seleccionar") && ($cveTipoTutor!="") ){
$tipostutoresDto=$tipostutoresFacade->selectTipostutores($tipostutoresDto);
echo $tipostutoresDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>