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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadoresordenes/JuzgadoresordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/juzgadoresordenes/JuzgadoresordenesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class JuzgadoresordenesFacade {
private $proveedor;
public function __construct() {
}
public function validarJuzgadoresordenes($JuzgadoresordenesDto){
$JuzgadoresordenesDto->setidJuzgadorOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresordenesDto->getidJuzgadorOrden(),"utf8"):strtoupper($JuzgadoresordenesDto->getidJuzgadorOrden()))))));
if($this->esFecha($JuzgadoresordenesDto->getidJuzgadorOrden())){
$JuzgadoresordenesDto->setidJuzgadorOrden($this->fechaMysql($JuzgadoresordenesDto->getidJuzgadorOrden()));
}
$JuzgadoresordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresordenesDto->getidSolicitudOrden(),"utf8"):strtoupper($JuzgadoresordenesDto->getidSolicitudOrden()))))));
if($this->esFecha($JuzgadoresordenesDto->getidSolicitudOrden())){
$JuzgadoresordenesDto->setidSolicitudOrden($this->fechaMysql($JuzgadoresordenesDto->getidSolicitudOrden()));
}
$JuzgadoresordenesDto->setidJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresordenesDto->getidJuzgador(),"utf8"):strtoupper($JuzgadoresordenesDto->getidJuzgador()))))));
if($this->esFecha($JuzgadoresordenesDto->getidJuzgador())){
$JuzgadoresordenesDto->setidJuzgador($this->fechaMysql($JuzgadoresordenesDto->getidJuzgador()));
}
$JuzgadoresordenesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresordenesDto->getactivo(),"utf8"):strtoupper($JuzgadoresordenesDto->getactivo()))))));
if($this->esFecha($JuzgadoresordenesDto->getactivo())){
$JuzgadoresordenesDto->setactivo($this->fechaMysql($JuzgadoresordenesDto->getactivo()));
}
$JuzgadoresordenesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresordenesDto->getfechaRegistro(),"utf8"):strtoupper($JuzgadoresordenesDto->getfechaRegistro()))))));
if($this->esFecha($JuzgadoresordenesDto->getfechaRegistro())){
$JuzgadoresordenesDto->setfechaRegistro($this->fechaMysql($JuzgadoresordenesDto->getfechaRegistro()));
}
$JuzgadoresordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresordenesDto->getfechaActualizacion(),"utf8"):strtoupper($JuzgadoresordenesDto->getfechaActualizacion()))))));
if($this->esFecha($JuzgadoresordenesDto->getfechaActualizacion())){
$JuzgadoresordenesDto->setfechaActualizacion($this->fechaMysql($JuzgadoresordenesDto->getfechaActualizacion()));
}
return $JuzgadoresordenesDto;
}
public function selectJuzgadoresordenes($JuzgadoresordenesDto){
$JuzgadoresordenesDto=$this->validarJuzgadoresordenes($JuzgadoresordenesDto);
$JuzgadoresordenesController = new JuzgadoresordenesController();
$JuzgadoresordenesDto = $JuzgadoresordenesController->selectJuzgadoresordenes($JuzgadoresordenesDto);
if($JuzgadoresordenesDto!=""){
$dtoToJson = new DtoToJson($JuzgadoresordenesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertJuzgadoresordenes($JuzgadoresordenesDto){
$JuzgadoresordenesDto=$this->validarJuzgadoresordenes($JuzgadoresordenesDto);
$JuzgadoresordenesController = new JuzgadoresordenesController();
$JuzgadoresordenesDto = $JuzgadoresordenesController->insertJuzgadoresordenes($JuzgadoresordenesDto);
if($JuzgadoresordenesDto!=""){
$dtoToJson = new DtoToJson($JuzgadoresordenesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateJuzgadoresordenes($JuzgadoresordenesDto){
$JuzgadoresordenesDto=$this->validarJuzgadoresordenes($JuzgadoresordenesDto);
$JuzgadoresordenesController = new JuzgadoresordenesController();
$JuzgadoresordenesDto = $JuzgadoresordenesController->updateJuzgadoresordenes($JuzgadoresordenesDto);
if($JuzgadoresordenesDto!=""){
$dtoToJson = new DtoToJson($JuzgadoresordenesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteJuzgadoresordenes($JuzgadoresordenesDto){
$JuzgadoresordenesDto=$this->validarJuzgadoresordenes($JuzgadoresordenesDto);
$JuzgadoresordenesController = new JuzgadoresordenesController();
$JuzgadoresordenesDto = $JuzgadoresordenesController->deleteJuzgadoresordenes($JuzgadoresordenesDto);
if($JuzgadoresordenesDto==true){
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



@$idJuzgadorOrden=$_POST["idJuzgadorOrden"];
@$idSolicitudOrden=$_POST["idSolicitudOrden"];
@$idJuzgador=$_POST["idJuzgador"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$juzgadoresordenesFacade = new JuzgadoresordenesFacade();
$juzgadoresordenesDto = new JuzgadoresordenesDTO();

$juzgadoresordenesDto->setIdJuzgadorOrden($idJuzgadorOrden);
$juzgadoresordenesDto->setIdSolicitudOrden($idSolicitudOrden);
$juzgadoresordenesDto->setIdJuzgador($idJuzgador);
$juzgadoresordenesDto->setActivo($activo);
$juzgadoresordenesDto->setFechaRegistro($fechaRegistro);
$juzgadoresordenesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idJuzgadorOrden=="") ){
$juzgadoresordenesDto=$juzgadoresordenesFacade->insertJuzgadoresordenes($juzgadoresordenesDto);
echo $juzgadoresordenesDto;
} else if(($accion=="guardar") && ($idJuzgadorOrden!="")){
$juzgadoresordenesDto=$juzgadoresordenesFacade->updateJuzgadoresordenes($juzgadoresordenesDto);
echo $juzgadoresordenesDto;
} else if($accion=="consultar"){
$juzgadoresordenesDto=$juzgadoresordenesFacade->selectJuzgadoresordenes($juzgadoresordenesDto);
echo $juzgadoresordenesDto;
} else if( ($accion=="baja") && ($idJuzgadorOrden!="") ){
$juzgadoresordenesDto=$juzgadoresordenesFacade->deleteJuzgadoresordenes($juzgadoresordenesDto);
echo $juzgadoresordenesDto;
} else if( ($accion=="seleccionar") && ($idJuzgadorOrden!="") ){
$juzgadoresordenesDto=$juzgadoresordenesFacade->selectJuzgadoresordenes($juzgadoresordenesDto);
echo $juzgadoresordenesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>