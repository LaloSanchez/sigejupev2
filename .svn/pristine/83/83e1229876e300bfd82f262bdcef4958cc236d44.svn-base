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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposjuzgadores/TiposjuzgadoresController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposjuzgadoresFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposjuzgadores($TiposjuzgadoresDto){
$TiposjuzgadoresDto->setcveTipoJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposjuzgadoresDto->getcveTipoJuzgador(),"utf8"):strtoupper($TiposjuzgadoresDto->getcveTipoJuzgador()))))));
if($this->esFecha($TiposjuzgadoresDto->getcveTipoJuzgador())){
$TiposjuzgadoresDto->setcveTipoJuzgador($this->fechaMysql($TiposjuzgadoresDto->getcveTipoJuzgador()));
}
$TiposjuzgadoresDto->setdesTipoJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposjuzgadoresDto->getdesTipoJuzgador(),"utf8"):strtoupper($TiposjuzgadoresDto->getdesTipoJuzgador()))))));
if($this->esFecha($TiposjuzgadoresDto->getdesTipoJuzgador())){
$TiposjuzgadoresDto->setdesTipoJuzgador($this->fechaMysql($TiposjuzgadoresDto->getdesTipoJuzgador()));
}
$TiposjuzgadoresDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposjuzgadoresDto->getactivo(),"utf8"):strtoupper($TiposjuzgadoresDto->getactivo()))))));
if($this->esFecha($TiposjuzgadoresDto->getactivo())){
$TiposjuzgadoresDto->setactivo($this->fechaMysql($TiposjuzgadoresDto->getactivo()));
}
$TiposjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposjuzgadoresDto->getfechaRegistro(),"utf8"):strtoupper($TiposjuzgadoresDto->getfechaRegistro()))))));
if($this->esFecha($TiposjuzgadoresDto->getfechaRegistro())){
$TiposjuzgadoresDto->setfechaRegistro($this->fechaMysql($TiposjuzgadoresDto->getfechaRegistro()));
}
$TiposjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposjuzgadoresDto->getfechaActualizacion(),"utf8"):strtoupper($TiposjuzgadoresDto->getfechaActualizacion()))))));
if($this->esFecha($TiposjuzgadoresDto->getfechaActualizacion())){
$TiposjuzgadoresDto->setfechaActualizacion($this->fechaMysql($TiposjuzgadoresDto->getfechaActualizacion()));
}
return $TiposjuzgadoresDto;
}
public function selectTiposjuzgadores($TiposjuzgadoresDto){
$TiposjuzgadoresDto=$this->validarTiposjuzgadores($TiposjuzgadoresDto);
$TiposjuzgadoresController = new TiposjuzgadoresController();
$TiposjuzgadoresDto = $TiposjuzgadoresController->selectTiposjuzgadores($TiposjuzgadoresDto);
if($TiposjuzgadoresDto!=""){
$dtoToJson = new DtoToJson($TiposjuzgadoresDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposjuzgadores($TiposjuzgadoresDto){
$TiposjuzgadoresDto=$this->validarTiposjuzgadores($TiposjuzgadoresDto);
$TiposjuzgadoresController = new TiposjuzgadoresController();
$TiposjuzgadoresDto = $TiposjuzgadoresController->insertTiposjuzgadores($TiposjuzgadoresDto);
if($TiposjuzgadoresDto!=""){
$dtoToJson = new DtoToJson($TiposjuzgadoresDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposjuzgadores($TiposjuzgadoresDto){
$TiposjuzgadoresDto=$this->validarTiposjuzgadores($TiposjuzgadoresDto);
$TiposjuzgadoresController = new TiposjuzgadoresController();
$TiposjuzgadoresDto = $TiposjuzgadoresController->updateTiposjuzgadores($TiposjuzgadoresDto);
if($TiposjuzgadoresDto!=""){
$dtoToJson = new DtoToJson($TiposjuzgadoresDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposjuzgadores($TiposjuzgadoresDto){
$TiposjuzgadoresDto=$this->validarTiposjuzgadores($TiposjuzgadoresDto);
$TiposjuzgadoresController = new TiposjuzgadoresController();
$TiposjuzgadoresDto = $TiposjuzgadoresController->deleteTiposjuzgadores($TiposjuzgadoresDto);
if($TiposjuzgadoresDto==true){
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



@$cveTipoJuzgador=$_POST["cveTipoJuzgador"];
@$desTipoJuzgador=$_POST["desTipoJuzgador"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposjuzgadoresFacade = new TiposjuzgadoresFacade();
$tiposjuzgadoresDto = new TiposjuzgadoresDTO();

$tiposjuzgadoresDto->setCveTipoJuzgador($cveTipoJuzgador);
$tiposjuzgadoresDto->setDesTipoJuzgador($desTipoJuzgador);
$tiposjuzgadoresDto->setActivo($activo);
$tiposjuzgadoresDto->setFechaRegistro($fechaRegistro);
$tiposjuzgadoresDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoJuzgador=="") ){
$tiposjuzgadoresDto=$tiposjuzgadoresFacade->insertTiposjuzgadores($tiposjuzgadoresDto);
echo $tiposjuzgadoresDto;
} else if(($accion=="guardar") && ($cveTipoJuzgador!="")){
$tiposjuzgadoresDto=$tiposjuzgadoresFacade->updateTiposjuzgadores($tiposjuzgadoresDto);
echo $tiposjuzgadoresDto;
} else if($accion=="consultar"){
$tiposjuzgadoresDto=$tiposjuzgadoresFacade->selectTiposjuzgadores($tiposjuzgadoresDto);
echo $tiposjuzgadoresDto;
} else if( ($accion=="baja") && ($cveTipoJuzgador!="") ){
$tiposjuzgadoresDto=$tiposjuzgadoresFacade->deleteTiposjuzgadores($tiposjuzgadoresDto);
echo $tiposjuzgadoresDto;
} else if( ($accion=="seleccionar") && ($cveTipoJuzgador!="") ){
$tiposjuzgadoresDto=$tiposjuzgadoresFacade->selectTiposjuzgadores($tiposjuzgadoresDto);
echo $tiposjuzgadoresDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>