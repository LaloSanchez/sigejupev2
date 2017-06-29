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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/convivencias/ConvivenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/convivencias/ConvivenciasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ConvivenciasFacade {
private $proveedor;
public function __construct() {
}
public function validarConvivencias($ConvivenciasDto){
$ConvivenciasDto->setcveConvivencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConvivenciasDto->getcveConvivencia(),"utf8"):strtoupper($ConvivenciasDto->getcveConvivencia()))))));
if($this->esFecha($ConvivenciasDto->getcveConvivencia())){
$ConvivenciasDto->setcveConvivencia($this->fechaMysql($ConvivenciasDto->getcveConvivencia()));
}
$ConvivenciasDto->setdesConvivencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConvivenciasDto->getdesConvivencia(),"utf8"):strtoupper($ConvivenciasDto->getdesConvivencia()))))));
if($this->esFecha($ConvivenciasDto->getdesConvivencia())){
$ConvivenciasDto->setdesConvivencia($this->fechaMysql($ConvivenciasDto->getdesConvivencia()));
}
$ConvivenciasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConvivenciasDto->getactivo(),"utf8"):strtoupper($ConvivenciasDto->getactivo()))))));
if($this->esFecha($ConvivenciasDto->getactivo())){
$ConvivenciasDto->setactivo($this->fechaMysql($ConvivenciasDto->getactivo()));
}
$ConvivenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConvivenciasDto->getfechaRegistro(),"utf8"):strtoupper($ConvivenciasDto->getfechaRegistro()))))));
if($this->esFecha($ConvivenciasDto->getfechaRegistro())){
$ConvivenciasDto->setfechaRegistro($this->fechaMysql($ConvivenciasDto->getfechaRegistro()));
}
$ConvivenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConvivenciasDto->getfechaActualizacion(),"utf8"):strtoupper($ConvivenciasDto->getfechaActualizacion()))))));
if($this->esFecha($ConvivenciasDto->getfechaActualizacion())){
$ConvivenciasDto->setfechaActualizacion($this->fechaMysql($ConvivenciasDto->getfechaActualizacion()));
}
return $ConvivenciasDto;
}
public function selectConvivencias($ConvivenciasDto){
$ConvivenciasDto=$this->validarConvivencias($ConvivenciasDto);
$ConvivenciasController = new ConvivenciasController();
$ConvivenciasDto = $ConvivenciasController->selectConvivencias($ConvivenciasDto);
if($ConvivenciasDto!=""){
$dtoToJson = new DtoToJson($ConvivenciasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertConvivencias($ConvivenciasDto){
$ConvivenciasDto=$this->validarConvivencias($ConvivenciasDto);
$ConvivenciasController = new ConvivenciasController();
$ConvivenciasDto = $ConvivenciasController->insertConvivencias($ConvivenciasDto);
if($ConvivenciasDto!=""){
$dtoToJson = new DtoToJson($ConvivenciasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateConvivencias($ConvivenciasDto){
$ConvivenciasDto=$this->validarConvivencias($ConvivenciasDto);
$ConvivenciasController = new ConvivenciasController();
$ConvivenciasDto = $ConvivenciasController->updateConvivencias($ConvivenciasDto);
if($ConvivenciasDto!=""){
$dtoToJson = new DtoToJson($ConvivenciasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteConvivencias($ConvivenciasDto){
$ConvivenciasDto=$this->validarConvivencias($ConvivenciasDto);
$ConvivenciasController = new ConvivenciasController();
$ConvivenciasDto = $ConvivenciasController->deleteConvivencias($ConvivenciasDto);
if($ConvivenciasDto==true){
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



@$cveConvivencia=$_POST["cveConvivencia"];
@$desConvivencia=$_POST["desConvivencia"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$convivenciasFacade = new ConvivenciasFacade();
$convivenciasDto = new ConvivenciasDTO();

$convivenciasDto->setCveConvivencia($cveConvivencia);
$convivenciasDto->setDesConvivencia($desConvivencia);
$convivenciasDto->setActivo($activo);
$convivenciasDto->setFechaRegistro($fechaRegistro);
$convivenciasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveConvivencia=="") ){
$convivenciasDto=$convivenciasFacade->insertConvivencias($convivenciasDto);
echo $convivenciasDto;
} else if(($accion=="guardar") && ($cveConvivencia!="")){
$convivenciasDto=$convivenciasFacade->updateConvivencias($convivenciasDto);
echo $convivenciasDto;
} else if($accion=="consultar"){
$convivenciasDto=$convivenciasFacade->selectConvivencias($convivenciasDto);
echo $convivenciasDto;
} else if( ($accion=="baja") && ($cveConvivencia!="") ){
$convivenciasDto=$convivenciasFacade->deleteConvivencias($convivenciasDto);
echo $convivenciasDto;
} else if( ($accion=="seleccionar") && ($cveConvivencia!="") ){
$convivenciasDto=$convivenciasFacade->selectConvivencias($convivenciasDto);
echo $convivenciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>