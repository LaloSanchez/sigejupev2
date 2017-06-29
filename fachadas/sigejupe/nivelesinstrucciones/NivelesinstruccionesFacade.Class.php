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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/nivelesinstrucciones/NivelesinstruccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/nivelesinstrucciones/NivelesinstruccionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class NivelesinstruccionesFacade {
private $proveedor;
public function __construct() {
}
public function validarNivelesinstrucciones($NivelesinstruccionesDto){
$NivelesinstruccionesDto->setcveNivelInstruccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NivelesinstruccionesDto->getcveNivelInstruccion(),"utf8"):strtoupper($NivelesinstruccionesDto->getcveNivelInstruccion()))))));
if($this->esFecha($NivelesinstruccionesDto->getcveNivelInstruccion())){
$NivelesinstruccionesDto->setcveNivelInstruccion($this->fechaMysql($NivelesinstruccionesDto->getcveNivelInstruccion()));
}
$NivelesinstruccionesDto->setdesNivelInstruccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NivelesinstruccionesDto->getdesNivelInstruccion(),"utf8"):strtoupper($NivelesinstruccionesDto->getdesNivelInstruccion()))))));
if($this->esFecha($NivelesinstruccionesDto->getdesNivelInstruccion())){
$NivelesinstruccionesDto->setdesNivelInstruccion($this->fechaMysql($NivelesinstruccionesDto->getdesNivelInstruccion()));
}
$NivelesinstruccionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NivelesinstruccionesDto->getactivo(),"utf8"):strtoupper($NivelesinstruccionesDto->getactivo()))))));
if($this->esFecha($NivelesinstruccionesDto->getactivo())){
$NivelesinstruccionesDto->setactivo($this->fechaMysql($NivelesinstruccionesDto->getactivo()));
}
$NivelesinstruccionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NivelesinstruccionesDto->getfechaRegistro(),"utf8"):strtoupper($NivelesinstruccionesDto->getfechaRegistro()))))));
if($this->esFecha($NivelesinstruccionesDto->getfechaRegistro())){
$NivelesinstruccionesDto->setfechaRegistro($this->fechaMysql($NivelesinstruccionesDto->getfechaRegistro()));
}
$NivelesinstruccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NivelesinstruccionesDto->getfechaActualizacion(),"utf8"):strtoupper($NivelesinstruccionesDto->getfechaActualizacion()))))));
if($this->esFecha($NivelesinstruccionesDto->getfechaActualizacion())){
$NivelesinstruccionesDto->setfechaActualizacion($this->fechaMysql($NivelesinstruccionesDto->getfechaActualizacion()));
}
return $NivelesinstruccionesDto;
}
public function selectNivelesinstrucciones($NivelesinstruccionesDto){
$NivelesinstruccionesDto=$this->validarNivelesinstrucciones($NivelesinstruccionesDto);
$NivelesinstruccionesController = new NivelesinstruccionesController();
$NivelesinstruccionesDto = $NivelesinstruccionesController->selectNivelesinstrucciones($NivelesinstruccionesDto);
if($NivelesinstruccionesDto!=""){
$dtoToJson = new DtoToJson($NivelesinstruccionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertNivelesinstrucciones($NivelesinstruccionesDto){
$NivelesinstruccionesDto=$this->validarNivelesinstrucciones($NivelesinstruccionesDto);
$NivelesinstruccionesController = new NivelesinstruccionesController();
$NivelesinstruccionesDto = $NivelesinstruccionesController->insertNivelesinstrucciones($NivelesinstruccionesDto);
if($NivelesinstruccionesDto!=""){
$dtoToJson = new DtoToJson($NivelesinstruccionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateNivelesinstrucciones($NivelesinstruccionesDto){
$NivelesinstruccionesDto=$this->validarNivelesinstrucciones($NivelesinstruccionesDto);
$NivelesinstruccionesController = new NivelesinstruccionesController();
$NivelesinstruccionesDto = $NivelesinstruccionesController->updateNivelesinstrucciones($NivelesinstruccionesDto);
if($NivelesinstruccionesDto!=""){
$dtoToJson = new DtoToJson($NivelesinstruccionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteNivelesinstrucciones($NivelesinstruccionesDto){
$NivelesinstruccionesDto=$this->validarNivelesinstrucciones($NivelesinstruccionesDto);
$NivelesinstruccionesController = new NivelesinstruccionesController();
$NivelesinstruccionesDto = $NivelesinstruccionesController->deleteNivelesinstrucciones($NivelesinstruccionesDto);
if($NivelesinstruccionesDto==true){
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



@$cveNivelInstruccion=$_POST["cveNivelInstruccion"];
@$desNivelInstruccion=$_POST["desNivelInstruccion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$nivelesinstruccionesFacade = new NivelesinstruccionesFacade();
$nivelesinstruccionesDto = new NivelesinstruccionesDTO();

$nivelesinstruccionesDto->setCveNivelInstruccion($cveNivelInstruccion);
$nivelesinstruccionesDto->setDesNivelInstruccion($desNivelInstruccion);
$nivelesinstruccionesDto->setActivo($activo);
$nivelesinstruccionesDto->setFechaRegistro($fechaRegistro);
$nivelesinstruccionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveNivelInstruccion=="") ){
$nivelesinstruccionesDto=$nivelesinstruccionesFacade->insertNivelesinstrucciones($nivelesinstruccionesDto);
echo $nivelesinstruccionesDto;
} else if(($accion=="guardar") && ($cveNivelInstruccion!="")){
$nivelesinstruccionesDto=$nivelesinstruccionesFacade->updateNivelesinstrucciones($nivelesinstruccionesDto);
echo $nivelesinstruccionesDto;
} else if($accion=="consultar"){
$nivelesinstruccionesDto=$nivelesinstruccionesFacade->selectNivelesinstrucciones($nivelesinstruccionesDto);
echo $nivelesinstruccionesDto;
} else if( ($accion=="baja") && ($cveNivelInstruccion!="") ){
$nivelesinstruccionesDto=$nivelesinstruccionesFacade->deleteNivelesinstrucciones($nivelesinstruccionesDto);
echo $nivelesinstruccionesDto;
} else if( ($accion=="seleccionar") && ($cveNivelInstruccion!="") ){
$nivelesinstruccionesDto=$nivelesinstruccionesFacade->selectNivelesinstrucciones($nivelesinstruccionesDto);
echo $nivelesinstruccionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>