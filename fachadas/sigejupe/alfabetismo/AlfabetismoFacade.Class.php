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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/alfabetismo/AlfabetismoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/alfabetismo/AlfabetismoController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class AlfabetismoFacade {
private $proveedor;
public function __construct() {
}
public function validarAlfabetismo($AlfabetismoDto){
$AlfabetismoDto->setcveAlfabetismo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AlfabetismoDto->getcveAlfabetismo(),"utf8"):strtoupper($AlfabetismoDto->getcveAlfabetismo()))))));
if($this->esFecha($AlfabetismoDto->getcveAlfabetismo())){
$AlfabetismoDto->setcveAlfabetismo($this->fechaMysql($AlfabetismoDto->getcveAlfabetismo()));
}
$AlfabetismoDto->setdesAlfabetismo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AlfabetismoDto->getdesAlfabetismo(),"utf8"):strtoupper($AlfabetismoDto->getdesAlfabetismo()))))));
if($this->esFecha($AlfabetismoDto->getdesAlfabetismo())){
$AlfabetismoDto->setdesAlfabetismo($this->fechaMysql($AlfabetismoDto->getdesAlfabetismo()));
}
$AlfabetismoDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AlfabetismoDto->getactivo(),"utf8"):strtoupper($AlfabetismoDto->getactivo()))))));
if($this->esFecha($AlfabetismoDto->getactivo())){
$AlfabetismoDto->setactivo($this->fechaMysql($AlfabetismoDto->getactivo()));
}
$AlfabetismoDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AlfabetismoDto->getfechaRegistro(),"utf8"):strtoupper($AlfabetismoDto->getfechaRegistro()))))));
if($this->esFecha($AlfabetismoDto->getfechaRegistro())){
$AlfabetismoDto->setfechaRegistro($this->fechaMysql($AlfabetismoDto->getfechaRegistro()));
}
$AlfabetismoDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AlfabetismoDto->getfechaActualizacion(),"utf8"):strtoupper($AlfabetismoDto->getfechaActualizacion()))))));
if($this->esFecha($AlfabetismoDto->getfechaActualizacion())){
$AlfabetismoDto->setfechaActualizacion($this->fechaMysql($AlfabetismoDto->getfechaActualizacion()));
}
return $AlfabetismoDto;
}
public function selectAlfabetismo($AlfabetismoDto){
$AlfabetismoDto=$this->validarAlfabetismo($AlfabetismoDto);
$AlfabetismoController = new AlfabetismoController();
$AlfabetismoDto = $AlfabetismoController->selectAlfabetismo($AlfabetismoDto);
if($AlfabetismoDto!=""){
$dtoToJson = new DtoToJson($AlfabetismoDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertAlfabetismo($AlfabetismoDto){
$AlfabetismoDto=$this->validarAlfabetismo($AlfabetismoDto);
$AlfabetismoController = new AlfabetismoController();
$AlfabetismoDto = $AlfabetismoController->insertAlfabetismo($AlfabetismoDto);
if($AlfabetismoDto!=""){
$dtoToJson = new DtoToJson($AlfabetismoDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateAlfabetismo($AlfabetismoDto){
$AlfabetismoDto=$this->validarAlfabetismo($AlfabetismoDto);
$AlfabetismoController = new AlfabetismoController();
$AlfabetismoDto = $AlfabetismoController->updateAlfabetismo($AlfabetismoDto);
if($AlfabetismoDto!=""){
$dtoToJson = new DtoToJson($AlfabetismoDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteAlfabetismo($AlfabetismoDto){
$AlfabetismoDto=$this->validarAlfabetismo($AlfabetismoDto);
$AlfabetismoController = new AlfabetismoController();
$AlfabetismoDto = $AlfabetismoController->deleteAlfabetismo($AlfabetismoDto);
if($AlfabetismoDto==true){
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



@$cveAlfabetismo=$_POST["cveAlfabetismo"];
@$desAlfabetismo=$_POST["desAlfabetismo"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$alfabetismoFacade = new AlfabetismoFacade();
$alfabetismoDto = new AlfabetismoDTO();

$alfabetismoDto->setCveAlfabetismo($cveAlfabetismo);
$alfabetismoDto->setDesAlfabetismo($desAlfabetismo);
$alfabetismoDto->setActivo($activo);
$alfabetismoDto->setFechaRegistro($fechaRegistro);
$alfabetismoDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveAlfabetismo=="") ){
$alfabetismoDto=$alfabetismoFacade->insertAlfabetismo($alfabetismoDto);
echo $alfabetismoDto;
} else if(($accion=="guardar") && ($cveAlfabetismo!="")){
$alfabetismoDto=$alfabetismoFacade->updateAlfabetismo($alfabetismoDto);
echo $alfabetismoDto;
} else if($accion=="consultar"){
$alfabetismoDto=$alfabetismoFacade->selectAlfabetismo($alfabetismoDto);
echo $alfabetismoDto;
} else if( ($accion=="baja") && ($cveAlfabetismo!="") ){
$alfabetismoDto=$alfabetismoFacade->deleteAlfabetismo($alfabetismoDto);
echo $alfabetismoDto;
} else if( ($accion=="seleccionar") && ($cveAlfabetismo!="") ){
$alfabetismoDto=$alfabetismoFacade->selectAlfabetismo($alfabetismoDto);
echo $alfabetismoDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>