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

session_start();
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadoresactuaciones/JuzgadoresactuacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/juzgadoresactuaciones/JuzgadoresactuacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class JuzgadoresactuacionesFacade {
private $proveedor;
public function __construct() {
}
public function validarJuzgadoresactuaciones($JuzgadoresactuacionesDto){
$JuzgadoresactuacionesDto->setidJuzgadorActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresactuacionesDto->getidJuzgadorActuacion(),"utf8"):strtoupper($JuzgadoresactuacionesDto->getidJuzgadorActuacion()))))));
if($this->esFecha($JuzgadoresactuacionesDto->getidJuzgadorActuacion())){
$JuzgadoresactuacionesDto->setidJuzgadorActuacion($this->fechaMysql($JuzgadoresactuacionesDto->getidJuzgadorActuacion()));
}
$JuzgadoresactuacionesDto->setidActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresactuacionesDto->getidActuacion(),"utf8"):strtoupper($JuzgadoresactuacionesDto->getidActuacion()))))));
if($this->esFecha($JuzgadoresactuacionesDto->getidActuacion())){
$JuzgadoresactuacionesDto->setidActuacion($this->fechaMysql($JuzgadoresactuacionesDto->getidActuacion()));
}
$JuzgadoresactuacionesDto->setidJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresactuacionesDto->getidJuzgador(),"utf8"):strtoupper($JuzgadoresactuacionesDto->getidJuzgador()))))));
if($this->esFecha($JuzgadoresactuacionesDto->getidJuzgador())){
$JuzgadoresactuacionesDto->setidJuzgador($this->fechaMysql($JuzgadoresactuacionesDto->getidJuzgador()));
}
$JuzgadoresactuacionesDto->setcveFuncionJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresactuacionesDto->getcveFuncionJuzgador(),"utf8"):strtoupper($JuzgadoresactuacionesDto->getcveFuncionJuzgador()))))));
if($this->esFecha($JuzgadoresactuacionesDto->getcveFuncionJuzgador())){
$JuzgadoresactuacionesDto->setcveFuncionJuzgador($this->fechaMysql($JuzgadoresactuacionesDto->getcveFuncionJuzgador()));
}
$JuzgadoresactuacionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresactuacionesDto->getactivo(),"utf8"):strtoupper($JuzgadoresactuacionesDto->getactivo()))))));
if($this->esFecha($JuzgadoresactuacionesDto->getactivo())){
$JuzgadoresactuacionesDto->setactivo($this->fechaMysql($JuzgadoresactuacionesDto->getactivo()));
}
$JuzgadoresactuacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresactuacionesDto->getfechaRegistro(),"utf8"):strtoupper($JuzgadoresactuacionesDto->getfechaRegistro()))))));
if($this->esFecha($JuzgadoresactuacionesDto->getfechaRegistro())){
$JuzgadoresactuacionesDto->setfechaRegistro($this->fechaMysql($JuzgadoresactuacionesDto->getfechaRegistro()));
}
$JuzgadoresactuacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresactuacionesDto->getfechaActualizacion(),"utf8"):strtoupper($JuzgadoresactuacionesDto->getfechaActualizacion()))))));
if($this->esFecha($JuzgadoresactuacionesDto->getfechaActualizacion())){
$JuzgadoresactuacionesDto->setfechaActualizacion($this->fechaMysql($JuzgadoresactuacionesDto->getfechaActualizacion()));
}
return $JuzgadoresactuacionesDto;
}
public function selectJuzgadoresactuaciones($JuzgadoresactuacionesDto){
$JuzgadoresactuacionesDto=$this->validarJuzgadoresactuaciones($JuzgadoresactuacionesDto);
$JuzgadoresactuacionesController = new JuzgadoresactuacionesController();
$JuzgadoresactuacionesDto = $JuzgadoresactuacionesController->selectJuzgadoresactuaciones($JuzgadoresactuacionesDto);
if($JuzgadoresactuacionesDto!=""){
$dtoToJson = new DtoToJson($JuzgadoresactuacionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertJuzgadoresactuaciones($JuzgadoresactuacionesDto){
$JuzgadoresactuacionesDto=$this->validarJuzgadoresactuaciones($JuzgadoresactuacionesDto);
$JuzgadoresactuacionesController = new JuzgadoresactuacionesController();
$JuzgadoresactuacionesDto = $JuzgadoresactuacionesController->insertJuzgadoresactuaciones($JuzgadoresactuacionesDto);
if($JuzgadoresactuacionesDto!=""){
$dtoToJson = new DtoToJson($JuzgadoresactuacionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateJuzgadoresactuaciones($JuzgadoresactuacionesDto){
$JuzgadoresactuacionesDto=$this->validarJuzgadoresactuaciones($JuzgadoresactuacionesDto);
$JuzgadoresactuacionesController = new JuzgadoresactuacionesController();
$JuzgadoresactuacionesDto = $JuzgadoresactuacionesController->updateJuzgadoresactuaciones($JuzgadoresactuacionesDto);
if($JuzgadoresactuacionesDto!=""){
$dtoToJson = new DtoToJson($JuzgadoresactuacionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteJuzgadoresactuaciones($JuzgadoresactuacionesDto){
$JuzgadoresactuacionesDto=$this->validarJuzgadoresactuaciones($JuzgadoresactuacionesDto);
$JuzgadoresactuacionesController = new JuzgadoresactuacionesController();
$JuzgadoresactuacionesDto = $JuzgadoresactuacionesController->deleteJuzgadoresactuaciones($JuzgadoresactuacionesDto);
if($JuzgadoresactuacionesDto==true){
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



@$idJuzgadorActuacion=$_POST["idJuzgadorActuacion"];
@$idActuacion=$_POST["idActuacion"];
@$idJuzgador=$_POST["idJuzgador"];
@$cveFuncionJuzgador=$_POST["cveFuncionJuzgador"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$juzgadoresactuacionesFacade = new JuzgadoresactuacionesFacade();
$juzgadoresactuacionesDto = new JuzgadoresactuacionesDTO();

$juzgadoresactuacionesDto->setIdJuzgadorActuacion($idJuzgadorActuacion);
$juzgadoresactuacionesDto->setIdActuacion($idActuacion);
$juzgadoresactuacionesDto->setIdJuzgador($idJuzgador);
$juzgadoresactuacionesDto->setCveFuncionJuzgador($cveFuncionJuzgador);
$juzgadoresactuacionesDto->setActivo($activo);
$juzgadoresactuacionesDto->setFechaRegistro($fechaRegistro);
$juzgadoresactuacionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idJuzgadorActuacion=="") ){
$juzgadoresactuacionesDto=$juzgadoresactuacionesFacade->insertJuzgadoresactuaciones($juzgadoresactuacionesDto);
echo $juzgadoresactuacionesDto;
} else if(($accion=="guardar") && ($idJuzgadorActuacion!="")){
$juzgadoresactuacionesDto=$juzgadoresactuacionesFacade->updateJuzgadoresactuaciones($juzgadoresactuacionesDto);
echo $juzgadoresactuacionesDto;
} else if($accion=="consultar"){
$juzgadoresactuacionesDto=$juzgadoresactuacionesFacade->selectJuzgadoresactuaciones($juzgadoresactuacionesDto);
echo $juzgadoresactuacionesDto;
} else if( ($accion=="baja") && ($idJuzgadorActuacion!="") ){
$juzgadoresactuacionesDto=$juzgadoresactuacionesFacade->deleteJuzgadoresactuaciones($juzgadoresactuacionesDto);
echo $juzgadoresactuacionesDto;
} else if( ($accion=="seleccionar") && ($idJuzgadorActuacion!="") ){
$juzgadoresactuacionesDto=$juzgadoresactuacionesFacade->selectJuzgadoresactuaciones($juzgadoresactuacionesDto);
echo $juzgadoresactuacionesDto;
}


?>