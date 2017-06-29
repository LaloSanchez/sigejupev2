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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/violenciadegenero/ViolenciadegeneroDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/violenciadegenero/ViolenciadegeneroController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ViolenciadegeneroFacade {
private $proveedor;
public function __construct() {
}
public function validarViolenciadegenero($ViolenciadegeneroDto){
$ViolenciadegeneroDto->setidViolenciaDeGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciadegeneroDto->getidViolenciaDeGenero(),"utf8"):strtoupper($ViolenciadegeneroDto->getidViolenciaDeGenero()))))));
if($this->esFecha($ViolenciadegeneroDto->getidViolenciaDeGenero())){
$ViolenciadegeneroDto->setidViolenciaDeGenero($this->fechaMysql($ViolenciadegeneroDto->getidViolenciaDeGenero()));
}
$ViolenciadegeneroDto->setcveEfecto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciadegeneroDto->getcveEfecto(),"utf8"):strtoupper($ViolenciadegeneroDto->getcveEfecto()))))));
if($this->esFecha($ViolenciadegeneroDto->getcveEfecto())){
$ViolenciadegeneroDto->setcveEfecto($this->fechaMysql($ViolenciadegeneroDto->getcveEfecto()));
}
$ViolenciadegeneroDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciadegeneroDto->getidImpOfeDelSolicitud(),"utf8"):strtoupper($ViolenciadegeneroDto->getidImpOfeDelSolicitud()))))));
if($this->esFecha($ViolenciadegeneroDto->getidImpOfeDelSolicitud())){
$ViolenciadegeneroDto->setidImpOfeDelSolicitud($this->fechaMysql($ViolenciadegeneroDto->getidImpOfeDelSolicitud()));
}
$ViolenciadegeneroDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciadegeneroDto->getfechaRegistro(),"utf8"):strtoupper($ViolenciadegeneroDto->getfechaRegistro()))))));
if($this->esFecha($ViolenciadegeneroDto->getfechaRegistro())){
$ViolenciadegeneroDto->setfechaRegistro($this->fechaMysql($ViolenciadegeneroDto->getfechaRegistro()));
}
$ViolenciadegeneroDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciadegeneroDto->getfechaActualizacion(),"utf8"):strtoupper($ViolenciadegeneroDto->getfechaActualizacion()))))));
if($this->esFecha($ViolenciadegeneroDto->getfechaActualizacion())){
$ViolenciadegeneroDto->setfechaActualizacion($this->fechaMysql($ViolenciadegeneroDto->getfechaActualizacion()));
}
return $ViolenciadegeneroDto;
}
public function selectViolenciadegenero($ViolenciadegeneroDto){
$ViolenciadegeneroDto=$this->validarViolenciadegenero($ViolenciadegeneroDto);
$ViolenciadegeneroController = new ViolenciadegeneroController();
$ViolenciadegeneroDto = $ViolenciadegeneroController->selectViolenciadegenero($ViolenciadegeneroDto);
if($ViolenciadegeneroDto!=""){
$dtoToJson = new DtoToJson($ViolenciadegeneroDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertViolenciadegenero($ViolenciadegeneroDto){
$ViolenciadegeneroDto=$this->validarViolenciadegenero($ViolenciadegeneroDto);
$ViolenciadegeneroController = new ViolenciadegeneroController();
$ViolenciadegeneroDto = $ViolenciadegeneroController->insertViolenciadegenero($ViolenciadegeneroDto);
if($ViolenciadegeneroDto!=""){
$dtoToJson = new DtoToJson($ViolenciadegeneroDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateViolenciadegenero($ViolenciadegeneroDto){
$ViolenciadegeneroDto=$this->validarViolenciadegenero($ViolenciadegeneroDto);
$ViolenciadegeneroController = new ViolenciadegeneroController();
$ViolenciadegeneroDto = $ViolenciadegeneroController->updateViolenciadegenero($ViolenciadegeneroDto);
if($ViolenciadegeneroDto!=""){
$dtoToJson = new DtoToJson($ViolenciadegeneroDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteViolenciadegenero($ViolenciadegeneroDto){
$ViolenciadegeneroDto=$this->validarViolenciadegenero($ViolenciadegeneroDto);
$ViolenciadegeneroController = new ViolenciadegeneroController();
$ViolenciadegeneroDto = $ViolenciadegeneroController->deleteViolenciadegenero($ViolenciadegeneroDto);
if($ViolenciadegeneroDto==true){
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



@$idViolenciaDeGenero=$_POST["idViolenciaDeGenero"];
@$cveEfecto=$_POST["cveEfecto"];
@$idImpOfeDelSolicitud=$_POST["idImpOfeDelSolicitud"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$violenciadegeneroFacade = new ViolenciadegeneroFacade();
$violenciadegeneroDto = new ViolenciadegeneroDTO();

$violenciadegeneroDto->setIdViolenciaDeGenero($idViolenciaDeGenero);
$violenciadegeneroDto->setCveEfecto($cveEfecto);
$violenciadegeneroDto->setIdImpOfeDelSolicitud($idImpOfeDelSolicitud);
$violenciadegeneroDto->setFechaRegistro($fechaRegistro);
$violenciadegeneroDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idViolenciaDeGenero=="") ){
$violenciadegeneroDto=$violenciadegeneroFacade->insertViolenciadegenero($violenciadegeneroDto);
echo $violenciadegeneroDto;
} else if(($accion=="guardar") && ($idViolenciaDeGenero!="")){
$violenciadegeneroDto=$violenciadegeneroFacade->updateViolenciadegenero($violenciadegeneroDto);
echo $violenciadegeneroDto;
} else if($accion=="consultar"){
$violenciadegeneroDto=$violenciadegeneroFacade->selectViolenciadegenero($violenciadegeneroDto);
echo $violenciadegeneroDto;
} else if( ($accion=="baja") && ($idViolenciaDeGenero!="") ){
$violenciadegeneroDto=$violenciadegeneroFacade->deleteViolenciadegenero($violenciadegeneroDto);
echo $violenciadegeneroDto;
} else if( ($accion=="seleccionar") && ($idViolenciaDeGenero!="") ){
$violenciadegeneroDto=$violenciadegeneroFacade->selectViolenciadegenero($violenciadegeneroDto);
echo $violenciadegeneroDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}


?>