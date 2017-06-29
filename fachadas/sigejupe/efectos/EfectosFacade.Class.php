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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/efectos/EfectosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/efectos/EfectosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class EfectosFacade {
private $proveedor;
public function __construct() {
}
public function validarEfectos($EfectosDto){
$EfectosDto->setcveEfecto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosDto->getcveEfecto(),"utf8"):strtoupper($EfectosDto->getcveEfecto()))))));
if($this->esFecha($EfectosDto->getcveEfecto())){
$EfectosDto->setcveEfecto($this->fechaMysql($EfectosDto->getcveEfecto()));
}
$EfectosDto->setdesEfecto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosDto->getdesEfecto(),"utf8"):strtoupper($EfectosDto->getdesEfecto()))))));
if($this->esFecha($EfectosDto->getdesEfecto())){
$EfectosDto->setdesEfecto($this->fechaMysql($EfectosDto->getdesEfecto()));
}
$EfectosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosDto->getactivo(),"utf8"):strtoupper($EfectosDto->getactivo()))))));
if($this->esFecha($EfectosDto->getactivo())){
$EfectosDto->setactivo($this->fechaMysql($EfectosDto->getactivo()));
}
$EfectosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosDto->getfechaRegistro(),"utf8"):strtoupper($EfectosDto->getfechaRegistro()))))));
if($this->esFecha($EfectosDto->getfechaRegistro())){
$EfectosDto->setfechaRegistro($this->fechaMysql($EfectosDto->getfechaRegistro()));
}
$EfectosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosDto->getfechaActualizacion(),"utf8"):strtoupper($EfectosDto->getfechaActualizacion()))))));
if($this->esFecha($EfectosDto->getfechaActualizacion())){
$EfectosDto->setfechaActualizacion($this->fechaMysql($EfectosDto->getfechaActualizacion()));
}
return $EfectosDto;
}
public function selectEfectos($EfectosDto){
$EfectosDto=$this->validarEfectos($EfectosDto);
$EfectosController = new EfectosController();
$EfectosDto = $EfectosController->selectEfectos($EfectosDto);
if($EfectosDto!=""){
$dtoToJson = new DtoToJson($EfectosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertEfectos($EfectosDto){
$EfectosDto=$this->validarEfectos($EfectosDto);
$EfectosController = new EfectosController();
$EfectosDto = $EfectosController->insertEfectos($EfectosDto);
if($EfectosDto!=""){
$dtoToJson = new DtoToJson($EfectosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateEfectos($EfectosDto){
$EfectosDto=$this->validarEfectos($EfectosDto);
$EfectosController = new EfectosController();
$EfectosDto = $EfectosController->updateEfectos($EfectosDto);
if($EfectosDto!=""){
$dtoToJson = new DtoToJson($EfectosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteEfectos($EfectosDto){
$EfectosDto=$this->validarEfectos($EfectosDto);
$EfectosController = new EfectosController();
$EfectosDto = $EfectosController->deleteEfectos($EfectosDto);
if($EfectosDto==true){
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



@$cveEfecto=$_POST["cveEfecto"];
@$desEfecto=$_POST["desEfecto"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$efectosFacade = new EfectosFacade();
$efectosDto = new EfectosDTO();

$efectosDto->setCveEfecto($cveEfecto);
$efectosDto->setDesEfecto($desEfecto);
$efectosDto->setActivo($activo);
$efectosDto->setFechaRegistro($fechaRegistro);
$efectosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveEfecto=="") ){
$efectosDto=$efectosFacade->insertEfectos($efectosDto);
echo $efectosDto;
} else if(($accion=="guardar") && ($cveEfecto!="")){
$efectosDto=$efectosFacade->updateEfectos($efectosDto);
echo $efectosDto;
} else if($accion=="consultar"){
$efectosDto=$efectosFacade->selectEfectos($efectosDto);
echo $efectosDto;
} else if( ($accion=="baja") && ($cveEfecto!="") ){
$efectosDto=$efectosFacade->deleteEfectos($efectosDto);
echo $efectosDto;
} else if( ($accion=="seleccionar") && ($cveEfecto!="") ){
$efectosDto=$efectosFacade->selectEfectos($efectosDto);
echo $efectosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>