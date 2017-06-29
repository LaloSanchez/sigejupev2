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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/actuacionesfirmantes/ActuacionesfirmantesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/actuacionesfirmantes/ActuacionesfirmantesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ActuacionesfirmantesFacade {
private $proveedor;
public function __construct() {
}
public function validarActuacionesfirmantes($ActuacionesfirmantesDto){
$ActuacionesfirmantesDto->setidActuacionFirmante(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesfirmantesDto->getidActuacionFirmante(),"utf8"):strtoupper($ActuacionesfirmantesDto->getidActuacionFirmante()))))));
if($this->esFecha($ActuacionesfirmantesDto->getidActuacionFirmante())){
$ActuacionesfirmantesDto->setidActuacionFirmante($this->fechaMysql($ActuacionesfirmantesDto->getidActuacionFirmante()));
}
$ActuacionesfirmantesDto->setcveTipoActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesfirmantesDto->getcveTipoActuacion(),"utf8"):strtoupper($ActuacionesfirmantesDto->getcveTipoActuacion()))))));
if($this->esFecha($ActuacionesfirmantesDto->getcveTipoActuacion())){
$ActuacionesfirmantesDto->setcveTipoActuacion($this->fechaMysql($ActuacionesfirmantesDto->getcveTipoActuacion()));
}
$ActuacionesfirmantesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesfirmantesDto->getcveTipoCarpeta(),"utf8"):strtoupper($ActuacionesfirmantesDto->getcveTipoCarpeta()))))));
if($this->esFecha($ActuacionesfirmantesDto->getcveTipoCarpeta())){
$ActuacionesfirmantesDto->setcveTipoCarpeta($this->fechaMysql($ActuacionesfirmantesDto->getcveTipoCarpeta()));
}
$ActuacionesfirmantesDto->setcveGrupo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesfirmantesDto->getcveGrupo(),"utf8"):strtoupper($ActuacionesfirmantesDto->getcveGrupo()))))));
if($this->esFecha($ActuacionesfirmantesDto->getcveGrupo())){
$ActuacionesfirmantesDto->setcveGrupo($this->fechaMysql($ActuacionesfirmantesDto->getcveGrupo()));
}
$ActuacionesfirmantesDto->setorden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesfirmantesDto->getorden(),"utf8"):strtoupper($ActuacionesfirmantesDto->getorden()))))));
if($this->esFecha($ActuacionesfirmantesDto->getorden())){
$ActuacionesfirmantesDto->setorden($this->fechaMysql($ActuacionesfirmantesDto->getorden()));
}
$ActuacionesfirmantesDto->setrelacionado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesfirmantesDto->getrelacionado(),"utf8"):strtoupper($ActuacionesfirmantesDto->getrelacionado()))))));
if($this->esFecha($ActuacionesfirmantesDto->getrelacionado())){
$ActuacionesfirmantesDto->setrelacionado($this->fechaMysql($ActuacionesfirmantesDto->getrelacionado()));
}
$ActuacionesfirmantesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesfirmantesDto->getactivo(),"utf8"):strtoupper($ActuacionesfirmantesDto->getactivo()))))));
if($this->esFecha($ActuacionesfirmantesDto->getactivo())){
$ActuacionesfirmantesDto->setactivo($this->fechaMysql($ActuacionesfirmantesDto->getactivo()));
}
$ActuacionesfirmantesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesfirmantesDto->getfechaActualizacion(),"utf8"):strtoupper($ActuacionesfirmantesDto->getfechaActualizacion()))))));
if($this->esFecha($ActuacionesfirmantesDto->getfechaActualizacion())){
$ActuacionesfirmantesDto->setfechaActualizacion($this->fechaMysql($ActuacionesfirmantesDto->getfechaActualizacion()));
}
$ActuacionesfirmantesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ActuacionesfirmantesDto->getfechaRegistro(),"utf8"):strtoupper($ActuacionesfirmantesDto->getfechaRegistro()))))));
if($this->esFecha($ActuacionesfirmantesDto->getfechaRegistro())){
$ActuacionesfirmantesDto->setfechaRegistro($this->fechaMysql($ActuacionesfirmantesDto->getfechaRegistro()));
}
return $ActuacionesfirmantesDto;
}
public function selectActuacionesfirmantes($ActuacionesfirmantesDto){
$ActuacionesfirmantesDto=$this->validarActuacionesfirmantes($ActuacionesfirmantesDto);
$ActuacionesfirmantesController = new ActuacionesfirmantesController();
$ActuacionesfirmantesDto = $ActuacionesfirmantesController->selectActuacionesfirmantes($ActuacionesfirmantesDto);
if($ActuacionesfirmantesDto!=""){
$dtoToJson = new DtoToJson($ActuacionesfirmantesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertActuacionesfirmantes($ActuacionesfirmantesDto){
$ActuacionesfirmantesDto=$this->validarActuacionesfirmantes($ActuacionesfirmantesDto);
$ActuacionesfirmantesController = new ActuacionesfirmantesController();
$ActuacionesfirmantesDto = $ActuacionesfirmantesController->insertActuacionesfirmantes($ActuacionesfirmantesDto);
if($ActuacionesfirmantesDto!=""){
$dtoToJson = new DtoToJson($ActuacionesfirmantesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateActuacionesfirmantes($ActuacionesfirmantesDto){
$ActuacionesfirmantesDto=$this->validarActuacionesfirmantes($ActuacionesfirmantesDto);
$ActuacionesfirmantesController = new ActuacionesfirmantesController();
$ActuacionesfirmantesDto = $ActuacionesfirmantesController->updateActuacionesfirmantes($ActuacionesfirmantesDto);
if($ActuacionesfirmantesDto!=""){
$dtoToJson = new DtoToJson($ActuacionesfirmantesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteActuacionesfirmantes($ActuacionesfirmantesDto){
$ActuacionesfirmantesDto=$this->validarActuacionesfirmantes($ActuacionesfirmantesDto);
$ActuacionesfirmantesController = new ActuacionesfirmantesController();
$ActuacionesfirmantesDto = $ActuacionesfirmantesController->deleteActuacionesfirmantes($ActuacionesfirmantesDto);
if($ActuacionesfirmantesDto==true){
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



@$idActuacionFirmante=$_POST["idActuacionFirmante"];
@$cveTipoActuacion=$_POST["cveTipoActuacion"];
@$cveTipoCarpeta=$_POST["cveTipoCarpeta"];
@$cveGrupo=$_POST["cveGrupo"];
@$orden=$_POST["orden"];
@$relacionado=$_POST["relacionado"];
@$activo=$_POST["activo"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$accion=$_POST["accion"];

$actuacionesfirmantesFacade = new ActuacionesfirmantesFacade();
$actuacionesfirmantesDto = new ActuacionesfirmantesDTO();

$actuacionesfirmantesDto->setIdActuacionFirmante($idActuacionFirmante);
$actuacionesfirmantesDto->setCveTipoActuacion($cveTipoActuacion);
$actuacionesfirmantesDto->setCveTipoCarpeta($cveTipoCarpeta);
$actuacionesfirmantesDto->setCveGrupo($cveGrupo);
$actuacionesfirmantesDto->setOrden($orden);
$actuacionesfirmantesDto->setRelacionado($relacionado);
$actuacionesfirmantesDto->setActivo($activo);
$actuacionesfirmantesDto->setFechaActualizacion($fechaActualizacion);
$actuacionesfirmantesDto->setFechaRegistro($fechaRegistro);

if( ($accion=="guardar") && ($idActuacionFirmante=="") ){
$actuacionesfirmantesDto=$actuacionesfirmantesFacade->insertActuacionesfirmantes($actuacionesfirmantesDto);
echo $actuacionesfirmantesDto;
} else if(($accion=="guardar") && ($idActuacionFirmante!="")){
$actuacionesfirmantesDto=$actuacionesfirmantesFacade->updateActuacionesfirmantes($actuacionesfirmantesDto);
echo $actuacionesfirmantesDto;
} else if($accion=="consultar"){
$actuacionesfirmantesDto=$actuacionesfirmantesFacade->selectActuacionesfirmantes($actuacionesfirmantesDto);
echo $actuacionesfirmantesDto;
} else if( ($accion=="baja") && ($idActuacionFirmante!="") ){
$actuacionesfirmantesDto=$actuacionesfirmantesFacade->deleteActuacionesfirmantes($actuacionesfirmantesDto);
echo $actuacionesfirmantesDto;
} else if( ($accion=="seleccionar") && ($idActuacionFirmante!="") ){
$actuacionesfirmantesDto=$actuacionesfirmantesFacade->selectActuacionesfirmantes($actuacionesfirmantesDto);
echo $actuacionesfirmantesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>