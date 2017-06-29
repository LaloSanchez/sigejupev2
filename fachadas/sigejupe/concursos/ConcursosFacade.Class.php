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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/concursos/ConcursosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/concursos/ConcursosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ConcursosFacade {
private $proveedor;
public function __construct() {
}
public function validarConcursos($ConcursosDto){
$ConcursosDto->setcveConcurso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConcursosDto->getcveConcurso(),"utf8"):strtoupper($ConcursosDto->getcveConcurso()))))));
if($this->esFecha($ConcursosDto->getcveConcurso())){
$ConcursosDto->setcveConcurso($this->fechaMysql($ConcursosDto->getcveConcurso()));
}
$ConcursosDto->setdesConcurso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConcursosDto->getdesConcurso(),"utf8"):strtoupper($ConcursosDto->getdesConcurso()))))));
if($this->esFecha($ConcursosDto->getdesConcurso())){
$ConcursosDto->setdesConcurso($this->fechaMysql($ConcursosDto->getdesConcurso()));
}
$ConcursosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConcursosDto->getactivo(),"utf8"):strtoupper($ConcursosDto->getactivo()))))));
if($this->esFecha($ConcursosDto->getactivo())){
$ConcursosDto->setactivo($this->fechaMysql($ConcursosDto->getactivo()));
}
$ConcursosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConcursosDto->getfechaRegistro(),"utf8"):strtoupper($ConcursosDto->getfechaRegistro()))))));
if($this->esFecha($ConcursosDto->getfechaRegistro())){
$ConcursosDto->setfechaRegistro($this->fechaMysql($ConcursosDto->getfechaRegistro()));
}
$ConcursosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConcursosDto->getfechaActualizacion(),"utf8"):strtoupper($ConcursosDto->getfechaActualizacion()))))));
if($this->esFecha($ConcursosDto->getfechaActualizacion())){
$ConcursosDto->setfechaActualizacion($this->fechaMysql($ConcursosDto->getfechaActualizacion()));
}
return $ConcursosDto;
}
public function selectConcursos($ConcursosDto){
$ConcursosDto=$this->validarConcursos($ConcursosDto);
$ConcursosController = new ConcursosController();
$ConcursosDto = $ConcursosController->selectConcursos($ConcursosDto);
if($ConcursosDto!=""){
$dtoToJson = new DtoToJson($ConcursosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertConcursos($ConcursosDto){
$ConcursosDto=$this->validarConcursos($ConcursosDto);
$ConcursosController = new ConcursosController();
$ConcursosDto = $ConcursosController->insertConcursos($ConcursosDto);
if($ConcursosDto!=""){
$dtoToJson = new DtoToJson($ConcursosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateConcursos($ConcursosDto){
$ConcursosDto=$this->validarConcursos($ConcursosDto);
$ConcursosController = new ConcursosController();
$ConcursosDto = $ConcursosController->updateConcursos($ConcursosDto);
if($ConcursosDto!=""){
$dtoToJson = new DtoToJson($ConcursosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteConcursos($ConcursosDto){
$ConcursosDto=$this->validarConcursos($ConcursosDto);
$ConcursosController = new ConcursosController();
$ConcursosDto = $ConcursosController->deleteConcursos($ConcursosDto);
if($ConcursosDto==true){
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



@$cveConcurso=$_POST["cveConcurso"];
@$desConcurso=$_POST["desConcurso"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$concursosFacade = new ConcursosFacade();
$concursosDto = new ConcursosDTO();

$concursosDto->setCveConcurso($cveConcurso);
$concursosDto->setDesConcurso($desConcurso);
$concursosDto->setActivo($activo);
$concursosDto->setFechaRegistro($fechaRegistro);
$concursosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveConcurso=="") ){
$concursosDto=$concursosFacade->insertConcursos($concursosDto);
echo $concursosDto;
} else if(($accion=="guardar") && ($cveConcurso!="")){
$concursosDto=$concursosFacade->updateConcursos($concursosDto);
echo $concursosDto;
} else if($accion=="consultar"){
$concursosDto=$concursosFacade->selectConcursos($concursosDto);
echo $concursosDto;
} else if( ($accion=="baja") && ($cveConcurso!="") ){
$concursosDto=$concursosFacade->deleteConcursos($concursosDto);
echo $concursosDto;
} else if( ($accion=="seleccionar") && ($cveConcurso!="") ){
$concursosDto=$concursosFacade->selectConcursos($concursosDto);
echo $concursosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>