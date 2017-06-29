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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/detallesefectos/DetallesefectosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/detallesefectos/DetallesefectosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class DetallesefectosFacade {
private $proveedor;
public function __construct() {
}
public function validarDetallesefectos($DetallesefectosDto){
$DetallesefectosDto->setcveDetalleEfecto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesefectosDto->getcveDetalleEfecto(),"utf8"):strtoupper($DetallesefectosDto->getcveDetalleEfecto()))))));
if($this->esFecha($DetallesefectosDto->getcveDetalleEfecto())){
$DetallesefectosDto->setcveDetalleEfecto($this->fechaMysql($DetallesefectosDto->getcveDetalleEfecto()));
}
$DetallesefectosDto->setcveEfecto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesefectosDto->getcveEfecto(),"utf8"):strtoupper($DetallesefectosDto->getcveEfecto()))))));
if($this->esFecha($DetallesefectosDto->getcveEfecto())){
$DetallesefectosDto->setcveEfecto($this->fechaMysql($DetallesefectosDto->getcveEfecto()));
}
$DetallesefectosDto->setcveDelito(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesefectosDto->getcveDelito(),"utf8"):strtoupper($DetallesefectosDto->getcveDelito()))))));
if($this->esFecha($DetallesefectosDto->getcveDelito())){
$DetallesefectosDto->setcveDelito($this->fechaMysql($DetallesefectosDto->getcveDelito()));
}
$DetallesefectosDto->setdesDetalleEfecto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesefectosDto->getdesDetalleEfecto(),"utf8"):strtoupper($DetallesefectosDto->getdesDetalleEfecto()))))));
if($this->esFecha($DetallesefectosDto->getdesDetalleEfecto())){
$DetallesefectosDto->setdesDetalleEfecto($this->fechaMysql($DetallesefectosDto->getdesDetalleEfecto()));
}
$DetallesefectosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesefectosDto->getactivo(),"utf8"):strtoupper($DetallesefectosDto->getactivo()))))));
if($this->esFecha($DetallesefectosDto->getactivo())){
$DetallesefectosDto->setactivo($this->fechaMysql($DetallesefectosDto->getactivo()));
}
$DetallesefectosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesefectosDto->getfechaRegistro(),"utf8"):strtoupper($DetallesefectosDto->getfechaRegistro()))))));
if($this->esFecha($DetallesefectosDto->getfechaRegistro())){
$DetallesefectosDto->setfechaRegistro($this->fechaMysql($DetallesefectosDto->getfechaRegistro()));
}
$DetallesefectosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesefectosDto->getfechaActualizacion(),"utf8"):strtoupper($DetallesefectosDto->getfechaActualizacion()))))));
if($this->esFecha($DetallesefectosDto->getfechaActualizacion())){
$DetallesefectosDto->setfechaActualizacion($this->fechaMysql($DetallesefectosDto->getfechaActualizacion()));
}
return $DetallesefectosDto;
}
public function selectDetallesefectos($DetallesefectosDto){
$DetallesefectosDto=$this->validarDetallesefectos($DetallesefectosDto);
$DetallesefectosController = new DetallesefectosController();
$DetallesefectosDto = $DetallesefectosController->selectDetallesefectos($DetallesefectosDto);
if($DetallesefectosDto!=""){
$dtoToJson = new DtoToJson($DetallesefectosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertDetallesefectos($DetallesefectosDto){
$DetallesefectosDto=$this->validarDetallesefectos($DetallesefectosDto);
$DetallesefectosController = new DetallesefectosController();
$DetallesefectosDto = $DetallesefectosController->insertDetallesefectos($DetallesefectosDto);
if($DetallesefectosDto!=""){
$dtoToJson = new DtoToJson($DetallesefectosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateDetallesefectos($DetallesefectosDto){
$DetallesefectosDto=$this->validarDetallesefectos($DetallesefectosDto);
$DetallesefectosController = new DetallesefectosController();
$DetallesefectosDto = $DetallesefectosController->updateDetallesefectos($DetallesefectosDto);
if($DetallesefectosDto!=""){
$dtoToJson = new DtoToJson($DetallesefectosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteDetallesefectos($DetallesefectosDto){
$DetallesefectosDto=$this->validarDetallesefectos($DetallesefectosDto);
$DetallesefectosController = new DetallesefectosController();
$DetallesefectosDto = $DetallesefectosController->deleteDetallesefectos($DetallesefectosDto);
if($DetallesefectosDto==true){
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



@$cveDetalleEfecto=$_POST["cveDetalleEfecto"];
@$cveEfecto=$_POST["cveEfecto"];
@$cveDelito=$_POST["cveDelito"];
@$desDetalleEfecto=$_POST["desDetalleEfecto"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$detallesefectosFacade = new DetallesefectosFacade();
$detallesefectosDto = new DetallesefectosDTO();

$detallesefectosDto->setCveDetalleEfecto($cveDetalleEfecto);
$detallesefectosDto->setCveEfecto($cveEfecto);
$detallesefectosDto->setCveDelito($cveDelito);
$detallesefectosDto->setDesDetalleEfecto($desDetalleEfecto);
$detallesefectosDto->setActivo($activo);
$detallesefectosDto->setFechaRegistro($fechaRegistro);
$detallesefectosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveDetalleEfecto=="") ){
$detallesefectosDto=$detallesefectosFacade->insertDetallesefectos($detallesefectosDto);
echo $detallesefectosDto;
} else if(($accion=="guardar") && ($cveDetalleEfecto!="")){
$detallesefectosDto=$detallesefectosFacade->updateDetallesefectos($detallesefectosDto);
echo $detallesefectosDto;
} else if($accion=="consultar"){
$detallesefectosDto=$detallesefectosFacade->selectDetallesefectos($detallesefectosDto);
echo $detallesefectosDto;
} else if( ($accion=="baja") && ($cveDetalleEfecto!="") ){
$detallesefectosDto=$detallesefectosFacade->deleteDetallesefectos($detallesefectosDto);
echo $detallesefectosDto;
} else if( ($accion=="seleccionar") && ($cveDetalleEfecto!="") ){
$detallesefectosDto=$detallesefectosFacade->selectDetallesefectos($detallesefectosDto);
echo $detallesefectosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>