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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/acciones/AccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/acciones/AccionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class AccionesFacade {
private $proveedor;
public function __construct() {
}
public function validarAcciones($AccionesDto){
$AccionesDto->setcveAccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AccionesDto->getcveAccion(),"utf8"):strtoupper($AccionesDto->getcveAccion()))))));
if($this->esFecha($AccionesDto->getcveAccion())){
$AccionesDto->setcveAccion($this->fechaMysql($AccionesDto->getcveAccion()));
}
$AccionesDto->setdesAccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AccionesDto->getdesAccion(),"utf8"):strtoupper($AccionesDto->getdesAccion()))))));
if($this->esFecha($AccionesDto->getdesAccion())){
$AccionesDto->setdesAccion($this->fechaMysql($AccionesDto->getdesAccion()));
}
$AccionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AccionesDto->getactivo(),"utf8"):strtoupper($AccionesDto->getactivo()))))));
if($this->esFecha($AccionesDto->getactivo())){
$AccionesDto->setactivo($this->fechaMysql($AccionesDto->getactivo()));
}
$AccionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AccionesDto->getfechaRegistro(),"utf8"):strtoupper($AccionesDto->getfechaRegistro()))))));
if($this->esFecha($AccionesDto->getfechaRegistro())){
$AccionesDto->setfechaRegistro($this->fechaMysql($AccionesDto->getfechaRegistro()));
}
$AccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AccionesDto->getfechaActualizacion(),"utf8"):strtoupper($AccionesDto->getfechaActualizacion()))))));
if($this->esFecha($AccionesDto->getfechaActualizacion())){
$AccionesDto->setfechaActualizacion($this->fechaMysql($AccionesDto->getfechaActualizacion()));
}
return $AccionesDto;
}
public function selectAcciones($AccionesDto){
$AccionesDto=$this->validarAcciones($AccionesDto);
$AccionesController = new AccionesController();
$AccionesDto = $AccionesController->selectAcciones($AccionesDto);
if($AccionesDto!=""){
$dtoToJson = new DtoToJson($AccionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertAcciones($AccionesDto){
$AccionesDto=$this->validarAcciones($AccionesDto);
$AccionesController = new AccionesController();
$AccionesDto = $AccionesController->insertAcciones($AccionesDto);
if($AccionesDto!=""){
$dtoToJson = new DtoToJson($AccionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateAcciones($AccionesDto){
$AccionesDto=$this->validarAcciones($AccionesDto);
$AccionesController = new AccionesController();
$AccionesDto = $AccionesController->updateAcciones($AccionesDto);
if($AccionesDto!=""){
$dtoToJson = new DtoToJson($AccionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteAcciones($AccionesDto){
$AccionesDto=$this->validarAcciones($AccionesDto);
$AccionesController = new AccionesController();
$AccionesDto = $AccionesController->deleteAcciones($AccionesDto);
if($AccionesDto==true){
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



@$cveAccion=$_POST["cveAccion"];
@$desAccion=$_POST["desAccion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$accionesFacade = new AccionesFacade();
$accionesDto = new AccionesDTO();

$accionesDto->setCveAccion($cveAccion);
$accionesDto->setDesAccion($desAccion);
$accionesDto->setActivo($activo);
$accionesDto->setFechaRegistro($fechaRegistro);
$accionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveAccion=="") ){
$accionesDto=$accionesFacade->insertAcciones($accionesDto);
echo $accionesDto;
} else if(($accion=="guardar") && ($cveAccion!="")){
$accionesDto=$accionesFacade->updateAcciones($accionesDto);
echo $accionesDto;
} else if($accion=="consultar"){
$accionesDto=$accionesFacade->selectAcciones($accionesDto);
echo $accionesDto;
} else if( ($accion=="baja") && ($cveAccion!="") ){
$accionesDto=$accionesFacade->deleteAcciones($accionesDto);
echo $accionesDto;
} else if( ($accion=="seleccionar") && ($cveAccion!="") ){
$accionesDto=$accionesFacade->selectAcciones($accionesDto);
echo $accionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>