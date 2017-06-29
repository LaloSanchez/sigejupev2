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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposrecursos/TiposrecursosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposrecursos/TiposrecursosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposrecursosFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposrecursos($TiposrecursosDto){
$TiposrecursosDto->setcveRecurso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposrecursosDto->getcveRecurso(),"utf8"):strtoupper($TiposrecursosDto->getcveRecurso()))))));
if($this->esFecha($TiposrecursosDto->getcveRecurso())){
$TiposrecursosDto->setcveRecurso($this->fechaMysql($TiposrecursosDto->getcveRecurso()));
}
$TiposrecursosDto->setdesRecurso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposrecursosDto->getdesRecurso(),"utf8"):strtoupper($TiposrecursosDto->getdesRecurso()))))));
if($this->esFecha($TiposrecursosDto->getdesRecurso())){
$TiposrecursosDto->setdesRecurso($this->fechaMysql($TiposrecursosDto->getdesRecurso()));
}
$TiposrecursosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposrecursosDto->getactivo(),"utf8"):strtoupper($TiposrecursosDto->getactivo()))))));
if($this->esFecha($TiposrecursosDto->getactivo())){
$TiposrecursosDto->setactivo($this->fechaMysql($TiposrecursosDto->getactivo()));
}
$TiposrecursosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposrecursosDto->getfechaRegistro(),"utf8"):strtoupper($TiposrecursosDto->getfechaRegistro()))))));
if($this->esFecha($TiposrecursosDto->getfechaRegistro())){
$TiposrecursosDto->setfechaRegistro($this->fechaMysql($TiposrecursosDto->getfechaRegistro()));
}
$TiposrecursosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposrecursosDto->getfechaActualizacion(),"utf8"):strtoupper($TiposrecursosDto->getfechaActualizacion()))))));
if($this->esFecha($TiposrecursosDto->getfechaActualizacion())){
$TiposrecursosDto->setfechaActualizacion($this->fechaMysql($TiposrecursosDto->getfechaActualizacion()));
}
return $TiposrecursosDto;
}
public function selectTiposrecursos($TiposrecursosDto,$orden=""){
$TiposrecursosDto=$this->validarTiposrecursos($TiposrecursosDto);
$TiposrecursosController = new TiposrecursosController();
$TiposrecursosDto = $TiposrecursosController->selectTiposrecursos($TiposrecursosDto,$orden);
if($TiposrecursosDto!=""){
$dtoToJson = new DtoToJson($TiposrecursosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposrecursos($TiposrecursosDto){
$TiposrecursosDto=$this->validarTiposrecursos($TiposrecursosDto);
$TiposrecursosController = new TiposrecursosController();
$TiposrecursosDto = $TiposrecursosController->insertTiposrecursos($TiposrecursosDto);
if($TiposrecursosDto!=""){
$dtoToJson = new DtoToJson($TiposrecursosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposrecursos($TiposrecursosDto){
$TiposrecursosDto=$this->validarTiposrecursos($TiposrecursosDto);
$TiposrecursosController = new TiposrecursosController();
$TiposrecursosDto = $TiposrecursosController->updateTiposrecursos($TiposrecursosDto);
if($TiposrecursosDto!=""){
$dtoToJson = new DtoToJson($TiposrecursosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposrecursos($TiposrecursosDto){
$TiposrecursosDto=$this->validarTiposrecursos($TiposrecursosDto);
$TiposrecursosController = new TiposrecursosController();
$TiposrecursosDto = $TiposrecursosController->deleteTiposrecursos($TiposrecursosDto);
if($TiposrecursosDto==true){
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



@$cveRecurso=$_POST["cveRecurso"];
@$desRecurso=$_POST["desRecurso"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposrecursosFacade = new TiposrecursosFacade();
$tiposrecursosDto = new TiposrecursosDTO();

$tiposrecursosDto->setCveRecurso($cveRecurso);
$tiposrecursosDto->setDesRecurso($desRecurso);
$tiposrecursosDto->setActivo($activo);
$tiposrecursosDto->setFechaRegistro($fechaRegistro);
$tiposrecursosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveRecurso=="") ){
$tiposrecursosDto=$tiposrecursosFacade->insertTiposrecursos($tiposrecursosDto);
echo $tiposrecursosDto;
} else if(($accion=="guardar") && ($cveRecurso!="")){
$tiposrecursosDto=$tiposrecursosFacade->updateTiposrecursos($tiposrecursosDto);
echo $tiposrecursosDto;
} else if($accion=="consultar"){
$tiposrecursosDto=$tiposrecursosFacade->selectTiposrecursos($tiposrecursosDto);
echo $tiposrecursosDto;
} else if( ($accion=="baja") && ($cveRecurso!="") ){
$tiposrecursosDto=$tiposrecursosFacade->deleteTiposrecursos($tiposrecursosDto);
echo $tiposrecursosDto;
} else if( ($accion=="seleccionar") && ($cveRecurso!="") ){
$tiposrecursosDto=$tiposrecursosFacade->selectTiposrecursos($tiposrecursosDto);
echo $tiposrecursosDto;
} else if($accion=="consultarOrdenado"){
    $orden = "order by desRecurso";
$tiposrecursosDto=$tiposrecursosFacade->selectTiposrecursos($tiposrecursosDto,$orden);
echo $tiposrecursosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>