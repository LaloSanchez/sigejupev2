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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipossanciones/TipossancionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tipossanciones/TipossancionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TipossancionesFacade {
private $proveedor;
public function __construct() {
}
public function validarTipossanciones($TipossancionesDto){
$TipossancionesDto->setcveTipoSancion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossancionesDto->getcveTipoSancion(),"utf8"):strtoupper($TipossancionesDto->getcveTipoSancion()))))));
if($this->esFecha($TipossancionesDto->getcveTipoSancion())){
$TipossancionesDto->setcveTipoSancion($this->fechaMysql($TipossancionesDto->getcveTipoSancion()));
}
$TipossancionesDto->setdesTipoSancion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossancionesDto->getdesTipoSancion(),"utf8"):strtoupper($TipossancionesDto->getdesTipoSancion()))))));
if($this->esFecha($TipossancionesDto->getdesTipoSancion())){
$TipossancionesDto->setdesTipoSancion($this->fechaMysql($TipossancionesDto->getdesTipoSancion()));
}
$TipossancionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossancionesDto->getactivo(),"utf8"):strtoupper($TipossancionesDto->getactivo()))))));
if($this->esFecha($TipossancionesDto->getactivo())){
$TipossancionesDto->setactivo($this->fechaMysql($TipossancionesDto->getactivo()));
}
$TipossancionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossancionesDto->getfechaRegistro(),"utf8"):strtoupper($TipossancionesDto->getfechaRegistro()))))));
if($this->esFecha($TipossancionesDto->getfechaRegistro())){
$TipossancionesDto->setfechaRegistro($this->fechaMysql($TipossancionesDto->getfechaRegistro()));
}
$TipossancionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossancionesDto->getfechaActualizacion(),"utf8"):strtoupper($TipossancionesDto->getfechaActualizacion()))))));
if($this->esFecha($TipossancionesDto->getfechaActualizacion())){
$TipossancionesDto->setfechaActualizacion($this->fechaMysql($TipossancionesDto->getfechaActualizacion()));
}
return $TipossancionesDto;
}


public function seleccionarsanciones($TipossancionesDto){
$TipossancionesDto=$this->validarTipossanciones($TipossancionesDto);
$TipossancionesController = new TipossancionesController();
$TipossancionesDto = $TipossancionesController->seleccionarsanciones($TipossancionesDto);
if($TipossancionesDto!=""){
$dtoToJson = new DtoToJson($TipossancionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function selectTipossanciones($TipossancionesDto){
$TipossancionesDto=$this->validarTipossanciones($TipossancionesDto);
$TipossancionesController = new TipossancionesController();
$TipossancionesDto = $TipossancionesController->selectTipossanciones($TipossancionesDto);
if($TipossancionesDto!=""){
$dtoToJson = new DtoToJson($TipossancionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTipossanciones($TipossancionesDto){
$TipossancionesDto=$this->validarTipossanciones($TipossancionesDto);
$TipossancionesController = new TipossancionesController();
$TipossancionesDto = $TipossancionesController->insertTipossanciones($TipossancionesDto);
if($TipossancionesDto!=""){
$dtoToJson = new DtoToJson($TipossancionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTipossanciones($TipossancionesDto){
$TipossancionesDto=$this->validarTipossanciones($TipossancionesDto);
$TipossancionesController = new TipossancionesController();
$TipossancionesDto = $TipossancionesController->updateTipossanciones($TipossancionesDto);
if($TipossancionesDto!=""){
$dtoToJson = new DtoToJson($TipossancionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTipossanciones($TipossancionesDto){
$TipossancionesDto=$this->validarTipossanciones($TipossancionesDto);
$TipossancionesController = new TipossancionesController();
$TipossancionesDto = $TipossancionesController->deleteTipossanciones($TipossancionesDto);
if($TipossancionesDto==true){
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



@$cveTipoSancion=$_POST["cveTipoSancion"];
@$desTipoSancion=$_POST["desTipoSancion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];
@$Beneficio=$_POST["Beneficio"];

$tipossancionesFacade = new TipossancionesFacade();
$tipossancionesDto = new TipossancionesDTO();

$tipossancionesDto->setBeneficio($Beneficio);
$tipossancionesDto->setCveTipoSancion($cveTipoSancion);
$tipossancionesDto->setDesTipoSancion($desTipoSancion);
$tipossancionesDto->setActivo($activo);
$tipossancionesDto->setFechaRegistro($fechaRegistro);
$tipossancionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoSancion=="") ){
$tipossancionesDto=$tipossancionesFacade->insertTipossanciones($tipossancionesDto);
echo $tipossancionesDto;
} else if(($accion=="guardar") && ($cveTipoSancion!="")){
$tipossancionesDto=$tipossancionesFacade->updateTipossanciones($tipossancionesDto);
echo $tipossancionesDto;
} else if($accion=="consultar"){
$tipossancionesDto=$tipossancionesFacade->selectTipossanciones($tipossancionesDto);
echo $tipossancionesDto;
} else if( ($accion=="baja") && ($cveTipoSancion!="") ){
$tipossancionesDto=$tipossancionesFacade->deleteTipossanciones($tipossancionesDto);
echo $tipossancionesDto;
} else if( ($accion=="seleccionar") && ($cveTipoSancion!="") ){
$tipossancionesDto=$tipossancionesFacade->selectTipossanciones($tipossancionesDto);
echo $tipossancionesDto;
}else if( ($accion=="seleccionarsanciones") ){
$tipossancionesDto=$tipossancionesFacade->seleccionarsanciones($tipossancionesDto);
echo $tipossancionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>