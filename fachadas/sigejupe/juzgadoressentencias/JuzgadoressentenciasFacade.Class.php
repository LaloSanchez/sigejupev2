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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadoressentencias/JuzgadoressentenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/juzgadoressentencias/JuzgadoressentenciasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class JuzgadoressentenciasFacade {
private $proveedor;
public function __construct() {
}
public function validarJuzgadoressentencias($JuzgadoressentenciasDto){
$JuzgadoressentenciasDto->setidJuzgadorSentencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoressentenciasDto->getidJuzgadorSentencia(),"utf8"):strtoupper($JuzgadoressentenciasDto->getidJuzgadorSentencia()))))));
if($this->esFecha($JuzgadoressentenciasDto->getidJuzgadorSentencia())){
$JuzgadoressentenciasDto->setidJuzgadorSentencia($this->fechaMysql($JuzgadoressentenciasDto->getidJuzgadorSentencia()));
}
$JuzgadoressentenciasDto->setidActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoressentenciasDto->getidActuacion(),"utf8"):strtoupper($JuzgadoressentenciasDto->getidActuacion()))))));
if($this->esFecha($JuzgadoressentenciasDto->getidActuacion())){
$JuzgadoressentenciasDto->setidActuacion($this->fechaMysql($JuzgadoressentenciasDto->getidActuacion()));
}
$JuzgadoressentenciasDto->setidJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoressentenciasDto->getidJuzgador(),"utf8"):strtoupper($JuzgadoressentenciasDto->getidJuzgador()))))));
if($this->esFecha($JuzgadoressentenciasDto->getidJuzgador())){
$JuzgadoressentenciasDto->setidJuzgador($this->fechaMysql($JuzgadoressentenciasDto->getidJuzgador()));
}
$JuzgadoressentenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoressentenciasDto->getfechaRegistro(),"utf8"):strtoupper($JuzgadoressentenciasDto->getfechaRegistro()))))));
if($this->esFecha($JuzgadoressentenciasDto->getfechaRegistro())){
$JuzgadoressentenciasDto->setfechaRegistro($this->fechaMysql($JuzgadoressentenciasDto->getfechaRegistro()));
}
$JuzgadoressentenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoressentenciasDto->getfechaActualizacion(),"utf8"):strtoupper($JuzgadoressentenciasDto->getfechaActualizacion()))))));
if($this->esFecha($JuzgadoressentenciasDto->getfechaActualizacion())){
$JuzgadoressentenciasDto->setfechaActualizacion($this->fechaMysql($JuzgadoressentenciasDto->getfechaActualizacion()));
}
return $JuzgadoressentenciasDto;
}
public function selectJuzgadoressentencias($JuzgadoressentenciasDto){
$JuzgadoressentenciasDto=$this->validarJuzgadoressentencias($JuzgadoressentenciasDto);
$JuzgadoressentenciasController = new JuzgadoressentenciasController();
$JuzgadoressentenciasDto = $JuzgadoressentenciasController->selectJuzgadoressentencias($JuzgadoressentenciasDto);
if($JuzgadoressentenciasDto!=""){
$dtoToJson = new DtoToJson($JuzgadoressentenciasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function selectJuzgadoresnombres($JuzgadoressentenciasDto){
$JuzgadoressentenciasDto=$this->validarJuzgadoressentencias($JuzgadoressentenciasDto);
$JuzgadoressentenciasController = new JuzgadoressentenciasController();
$JuzgadoressentenciasDto = $JuzgadoressentenciasController->selectJuzgadoresnombres($JuzgadoressentenciasDto);
return json_encode($JuzgadoressentenciasDto);
}

public function eliminacionlogica($JuzgadoressentenciasDto){
$JuzgadoressentenciasDto=$this->validarJuzgadoressentencias($JuzgadoressentenciasDto);
$JuzgadoressentenciasController = new JuzgadoressentenciasController();
$JuzgadoressentenciasDto = $JuzgadoressentenciasController->eliminacionlogica($JuzgadoressentenciasDto);
return json_encode($JuzgadoressentenciasDto);
}



public function insertJuzgadoressentencias($JuzgadoressentenciasDto){
$JuzgadoressentenciasDto=$this->validarJuzgadoressentencias($JuzgadoressentenciasDto);
$JuzgadoressentenciasController = new JuzgadoressentenciasController();
$JuzgadoressentenciasDto = $JuzgadoressentenciasController->insertJuzgadoressentencias($JuzgadoressentenciasDto);
if($JuzgadoressentenciasDto!=""){
$dtoToJson = new DtoToJson($JuzgadoressentenciasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateJuzgadoressentencias($JuzgadoressentenciasDto){
$JuzgadoressentenciasDto=$this->validarJuzgadoressentencias($JuzgadoressentenciasDto);
$JuzgadoressentenciasController = new JuzgadoressentenciasController();
$JuzgadoressentenciasDto = $JuzgadoressentenciasController->updateJuzgadoressentencias($JuzgadoressentenciasDto);
if($JuzgadoressentenciasDto!=""){
$dtoToJson = new DtoToJson($JuzgadoressentenciasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteJuzgadoressentencias($JuzgadoressentenciasDto){
$JuzgadoressentenciasDto=$this->validarJuzgadoressentencias($JuzgadoressentenciasDto);
$JuzgadoressentenciasController = new JuzgadoressentenciasController();
$JuzgadoressentenciasDto = $JuzgadoressentenciasController->deleteJuzgadoressentencias($JuzgadoressentenciasDto);
if($JuzgadoressentenciasDto==true){
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



@$idJuzgadorSentencia=$_POST["idJuzgadorSentencia"];
@$idActuacion=$_POST["idActuacion"];
@$idJuzgador=$_POST["idJuzgador"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$juzgadoressentenciasFacade = new JuzgadoressentenciasFacade();
$juzgadoressentenciasDto = new JuzgadoressentenciasDTO();

$juzgadoressentenciasDto->setIdJuzgadorSentencia($idJuzgadorSentencia);
$juzgadoressentenciasDto->setIdActuacion($idActuacion);
$juzgadoressentenciasDto->setIdJuzgador($idJuzgador);
$juzgadoressentenciasDto->setFechaRegistro($fechaRegistro);
$juzgadoressentenciasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idJuzgadorSentencia=="") ){
$juzgadoressentenciasDto=$juzgadoressentenciasFacade->insertJuzgadoressentencias($juzgadoressentenciasDto);
echo $juzgadoressentenciasDto;
} else if(($accion=="guardar") && ($idJuzgadorSentencia!="")){
$juzgadoressentenciasDto=$juzgadoressentenciasFacade->updateJuzgadoressentencias($juzgadoressentenciasDto);
echo $juzgadoressentenciasDto;
} else if($accion=="consultar"){
$juzgadoressentenciasDto=$juzgadoressentenciasFacade->selectJuzgadoressentencias($juzgadoressentenciasDto);
echo $juzgadoressentenciasDto;
} else if( ($accion=="baja") && ($idJuzgadorSentencia!="") ){
$juzgadoressentenciasDto=$juzgadoressentenciasFacade->deleteJuzgadoressentencias($juzgadoressentenciasDto);
echo $juzgadoressentenciasDto;
} else if( ($accion=="seleccionar") && ($idJuzgadorSentencia!="") ){
$juzgadoressentenciasDto=$juzgadoressentenciasFacade->selectJuzgadoressentencias($juzgadoressentenciasDto);
echo $juzgadoressentenciasDto;
} else if($accion=="consultarconjuzgador"){
$juzgadoressentenciasDto=$juzgadoressentenciasFacade->selectJuzgadoresnombres($juzgadoressentenciasDto);
echo $juzgadoressentenciasDto;
}
else if($accion=="eliminacionlogica"){
$juzgadoressentenciasDto=$juzgadoressentenciasFacade->eliminacionlogica($juzgadoressentenciasDto);
echo $juzgadoressentenciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}


?>