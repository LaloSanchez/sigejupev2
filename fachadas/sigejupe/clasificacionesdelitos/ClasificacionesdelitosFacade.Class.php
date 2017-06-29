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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/clasificacionesdelitos/ClasificacionesdelitosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/clasificacionesdelitos/ClasificacionesdelitosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ClasificacionesdelitosFacade {
private $proveedor;
public function __construct() {
}
public function validarClasificacionesdelitos($ClasificacionesdelitosDto){
$ClasificacionesdelitosDto->setcveClasificacionDelito(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ClasificacionesdelitosDto->getcveClasificacionDelito(),"utf8"):strtoupper($ClasificacionesdelitosDto->getcveClasificacionDelito()))))));
if($this->esFecha($ClasificacionesdelitosDto->getcveClasificacionDelito())){
$ClasificacionesdelitosDto->setcveClasificacionDelito($this->fechaMysql($ClasificacionesdelitosDto->getcveClasificacionDelito()));
}
$ClasificacionesdelitosDto->setdesClasificacionDelito(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ClasificacionesdelitosDto->getdesClasificacionDelito(),"utf8"):strtoupper($ClasificacionesdelitosDto->getdesClasificacionDelito()))))));
if($this->esFecha($ClasificacionesdelitosDto->getdesClasificacionDelito())){
$ClasificacionesdelitosDto->setdesClasificacionDelito($this->fechaMysql($ClasificacionesdelitosDto->getdesClasificacionDelito()));
}
$ClasificacionesdelitosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ClasificacionesdelitosDto->getactivo(),"utf8"):strtoupper($ClasificacionesdelitosDto->getactivo()))))));
if($this->esFecha($ClasificacionesdelitosDto->getactivo())){
$ClasificacionesdelitosDto->setactivo($this->fechaMysql($ClasificacionesdelitosDto->getactivo()));
}
$ClasificacionesdelitosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ClasificacionesdelitosDto->getfechaRegistro(),"utf8"):strtoupper($ClasificacionesdelitosDto->getfechaRegistro()))))));
if($this->esFecha($ClasificacionesdelitosDto->getfechaRegistro())){
$ClasificacionesdelitosDto->setfechaRegistro($this->fechaMysql($ClasificacionesdelitosDto->getfechaRegistro()));
}
$ClasificacionesdelitosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ClasificacionesdelitosDto->getfechaActualizacion(),"utf8"):strtoupper($ClasificacionesdelitosDto->getfechaActualizacion()))))));
if($this->esFecha($ClasificacionesdelitosDto->getfechaActualizacion())){
$ClasificacionesdelitosDto->setfechaActualizacion($this->fechaMysql($ClasificacionesdelitosDto->getfechaActualizacion()));
}
return $ClasificacionesdelitosDto;
}
public function selectClasificacionesdelitos($ClasificacionesdelitosDto){
$ClasificacionesdelitosDto=$this->validarClasificacionesdelitos($ClasificacionesdelitosDto);
$ClasificacionesdelitosController = new ClasificacionesdelitosController();
$ClasificacionesdelitosDto = $ClasificacionesdelitosController->selectClasificacionesdelitos($ClasificacionesdelitosDto);
if($ClasificacionesdelitosDto!=""){
$dtoToJson = new DtoToJson($ClasificacionesdelitosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertClasificacionesdelitos($ClasificacionesdelitosDto){
$ClasificacionesdelitosDto=$this->validarClasificacionesdelitos($ClasificacionesdelitosDto);
$ClasificacionesdelitosController = new ClasificacionesdelitosController();
$ClasificacionesdelitosDto = $ClasificacionesdelitosController->insertClasificacionesdelitos($ClasificacionesdelitosDto);
if($ClasificacionesdelitosDto!=""){
$dtoToJson = new DtoToJson($ClasificacionesdelitosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateClasificacionesdelitos($ClasificacionesdelitosDto){
$ClasificacionesdelitosDto=$this->validarClasificacionesdelitos($ClasificacionesdelitosDto);
$ClasificacionesdelitosController = new ClasificacionesdelitosController();
$ClasificacionesdelitosDto = $ClasificacionesdelitosController->updateClasificacionesdelitos($ClasificacionesdelitosDto);
if($ClasificacionesdelitosDto!=""){
$dtoToJson = new DtoToJson($ClasificacionesdelitosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteClasificacionesdelitos($ClasificacionesdelitosDto){
$ClasificacionesdelitosDto=$this->validarClasificacionesdelitos($ClasificacionesdelitosDto);
$ClasificacionesdelitosController = new ClasificacionesdelitosController();
$ClasificacionesdelitosDto = $ClasificacionesdelitosController->deleteClasificacionesdelitos($ClasificacionesdelitosDto);
if($ClasificacionesdelitosDto==true){
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



@$cveClasificacionDelito=$_POST["cveClasificacionDelito"];
@$desClasificacionDelito=$_POST["desClasificacionDelito"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$clasificacionesdelitosFacade = new ClasificacionesdelitosFacade();
$clasificacionesdelitosDto = new ClasificacionesdelitosDTO();

$clasificacionesdelitosDto->setCveClasificacionDelito($cveClasificacionDelito);
$clasificacionesdelitosDto->setDesClasificacionDelito($desClasificacionDelito);
$clasificacionesdelitosDto->setActivo($activo);
$clasificacionesdelitosDto->setFechaRegistro($fechaRegistro);
$clasificacionesdelitosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveClasificacionDelito=="") ){
$clasificacionesdelitosDto=$clasificacionesdelitosFacade->insertClasificacionesdelitos($clasificacionesdelitosDto);
echo $clasificacionesdelitosDto;
} else if(($accion=="guardar") && ($cveClasificacionDelito!="")){
$clasificacionesdelitosDto=$clasificacionesdelitosFacade->updateClasificacionesdelitos($clasificacionesdelitosDto);
echo $clasificacionesdelitosDto;
} else if($accion=="consultar"){
$clasificacionesdelitosDto=$clasificacionesdelitosFacade->selectClasificacionesdelitos($clasificacionesdelitosDto);
echo $clasificacionesdelitosDto;
} else if( ($accion=="baja") && ($cveClasificacionDelito!="") ){
$clasificacionesdelitosDto=$clasificacionesdelitosFacade->deleteClasificacionesdelitos($clasificacionesdelitosDto);
echo $clasificacionesdelitosDto;
} else if( ($accion=="seleccionar") && ($cveClasificacionDelito!="") ){
$clasificacionesdelitosDto=$clasificacionesdelitosFacade->selectClasificacionesdelitos($clasificacionesdelitosDto);
echo $clasificacionesdelitosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>