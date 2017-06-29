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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/victimadetrata/VictimadetrataDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/victimadetrata/VictimadetrataController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class VictimadetrataFacade {
private $proveedor;
public function __construct() {
}
public function validarVictimadetrata($VictimadetrataDto){
$VictimadetrataDto->setcveVictimaDeTrata(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadetrataDto->getcveVictimaDeTrata(),"utf8"):strtoupper($VictimadetrataDto->getcveVictimaDeTrata()))))));
if($this->esFecha($VictimadetrataDto->getcveVictimaDeTrata())){
$VictimadetrataDto->setcveVictimaDeTrata($this->fechaMysql($VictimadetrataDto->getcveVictimaDeTrata()));
}
$VictimadetrataDto->setdesVictimaDeTrata(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadetrataDto->getdesVictimaDeTrata(),"utf8"):strtoupper($VictimadetrataDto->getdesVictimaDeTrata()))))));
if($this->esFecha($VictimadetrataDto->getdesVictimaDeTrata())){
$VictimadetrataDto->setdesVictimaDeTrata($this->fechaMysql($VictimadetrataDto->getdesVictimaDeTrata()));
}
$VictimadetrataDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadetrataDto->getactivo(),"utf8"):strtoupper($VictimadetrataDto->getactivo()))))));
if($this->esFecha($VictimadetrataDto->getactivo())){
$VictimadetrataDto->setactivo($this->fechaMysql($VictimadetrataDto->getactivo()));
}
$VictimadetrataDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadetrataDto->getfechaRegistro(),"utf8"):strtoupper($VictimadetrataDto->getfechaRegistro()))))));
if($this->esFecha($VictimadetrataDto->getfechaRegistro())){
$VictimadetrataDto->setfechaRegistro($this->fechaMysql($VictimadetrataDto->getfechaRegistro()));
}
$VictimadetrataDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadetrataDto->getfechaActualizacion(),"utf8"):strtoupper($VictimadetrataDto->getfechaActualizacion()))))));
if($this->esFecha($VictimadetrataDto->getfechaActualizacion())){
$VictimadetrataDto->setfechaActualizacion($this->fechaMysql($VictimadetrataDto->getfechaActualizacion()));
}
return $VictimadetrataDto;
}
public function selectVictimadetrata($VictimadetrataDto){
$VictimadetrataDto=$this->validarVictimadetrata($VictimadetrataDto);
$VictimadetrataController = new VictimadetrataController();
$VictimadetrataDto = $VictimadetrataController->selectVictimadetrata($VictimadetrataDto);
if($VictimadetrataDto!=""){
$dtoToJson = new DtoToJson($VictimadetrataDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertVictimadetrata($VictimadetrataDto){
$VictimadetrataDto=$this->validarVictimadetrata($VictimadetrataDto);
$VictimadetrataController = new VictimadetrataController();
$VictimadetrataDto = $VictimadetrataController->insertVictimadetrata($VictimadetrataDto);
if($VictimadetrataDto!=""){
$dtoToJson = new DtoToJson($VictimadetrataDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateVictimadetrata($VictimadetrataDto){
$VictimadetrataDto=$this->validarVictimadetrata($VictimadetrataDto);
$VictimadetrataController = new VictimadetrataController();
$VictimadetrataDto = $VictimadetrataController->updateVictimadetrata($VictimadetrataDto);
if($VictimadetrataDto!=""){
$dtoToJson = new DtoToJson($VictimadetrataDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteVictimadetrata($VictimadetrataDto){
$VictimadetrataDto=$this->validarVictimadetrata($VictimadetrataDto);
$VictimadetrataController = new VictimadetrataController();
$VictimadetrataDto = $VictimadetrataController->deleteVictimadetrata($VictimadetrataDto);
if($VictimadetrataDto==true){
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



@$cveVictimaDeTrata=$_POST["cveVictimaDeTrata"];
@$desVictimaDeTrata=$_POST["desVictimaDeTrata"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$victimadetrataFacade = new VictimadetrataFacade();
$victimadetrataDto = new VictimadetrataDTO();

$victimadetrataDto->setCveVictimaDeTrata($cveVictimaDeTrata);
$victimadetrataDto->setDesVictimaDeTrata($desVictimaDeTrata);
$victimadetrataDto->setActivo($activo);
$victimadetrataDto->setFechaRegistro($fechaRegistro);
$victimadetrataDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveVictimaDeTrata=="") ){
$victimadetrataDto=$victimadetrataFacade->insertVictimadetrata($victimadetrataDto);
echo $victimadetrataDto;
} else if(($accion=="guardar") && ($cveVictimaDeTrata!="")){
$victimadetrataDto=$victimadetrataFacade->updateVictimadetrata($victimadetrataDto);
echo $victimadetrataDto;
} else if($accion=="consultar"){
$victimadetrataDto=$victimadetrataFacade->selectVictimadetrata($victimadetrataDto);
echo $victimadetrataDto;
} else if( ($accion=="baja") && ($cveVictimaDeTrata!="") ){
$victimadetrataDto=$victimadetrataFacade->deleteVictimadetrata($victimadetrataDto);
echo $victimadetrataDto;
} else if( ($accion=="seleccionar") && ($cveVictimaDeTrata!="") ){
$victimadetrataDto=$victimadetrataFacade->selectVictimadetrata($victimadetrataDto);
echo $victimadetrataDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>