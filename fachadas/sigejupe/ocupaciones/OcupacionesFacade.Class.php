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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ocupaciones/OcupacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ocupaciones/OcupacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class OcupacionesFacade {
private $proveedor;
public function __construct() {
}
public function validarOcupaciones($OcupacionesDto){
$OcupacionesDto->setcveOcupacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OcupacionesDto->getcveOcupacion(),"utf8"):strtoupper($OcupacionesDto->getcveOcupacion()))))));
if($this->esFecha($OcupacionesDto->getcveOcupacion())){
$OcupacionesDto->setcveOcupacion($this->fechaMysql($OcupacionesDto->getcveOcupacion()));
}
$OcupacionesDto->setdesOcupacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OcupacionesDto->getdesOcupacion(),"utf8"):strtoupper($OcupacionesDto->getdesOcupacion()))))));
if($this->esFecha($OcupacionesDto->getdesOcupacion())){
$OcupacionesDto->setdesOcupacion($this->fechaMysql($OcupacionesDto->getdesOcupacion()));
}
$OcupacionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OcupacionesDto->getactivo(),"utf8"):strtoupper($OcupacionesDto->getactivo()))))));
if($this->esFecha($OcupacionesDto->getactivo())){
$OcupacionesDto->setactivo($this->fechaMysql($OcupacionesDto->getactivo()));
}
$OcupacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OcupacionesDto->getfechaRegistro(),"utf8"):strtoupper($OcupacionesDto->getfechaRegistro()))))));
if($this->esFecha($OcupacionesDto->getfechaRegistro())){
$OcupacionesDto->setfechaRegistro($this->fechaMysql($OcupacionesDto->getfechaRegistro()));
}
$OcupacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OcupacionesDto->getfechaActualizacion(),"utf8"):strtoupper($OcupacionesDto->getfechaActualizacion()))))));
if($this->esFecha($OcupacionesDto->getfechaActualizacion())){
$OcupacionesDto->setfechaActualizacion($this->fechaMysql($OcupacionesDto->getfechaActualizacion()));
}
return $OcupacionesDto;
}
public function selectOcupaciones($OcupacionesDto){
$OcupacionesDto=$this->validarOcupaciones($OcupacionesDto);
$OcupacionesController = new OcupacionesController();
$OcupacionesDto = $OcupacionesController->selectOcupaciones($OcupacionesDto);
if($OcupacionesDto!=""){
$dtoToJson = new DtoToJson($OcupacionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertOcupaciones($OcupacionesDto){
$OcupacionesDto=$this->validarOcupaciones($OcupacionesDto);
$OcupacionesController = new OcupacionesController();
$OcupacionesDto = $OcupacionesController->insertOcupaciones($OcupacionesDto);
if($OcupacionesDto!=""){
$dtoToJson = new DtoToJson($OcupacionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateOcupaciones($OcupacionesDto){
$OcupacionesDto=$this->validarOcupaciones($OcupacionesDto);
$OcupacionesController = new OcupacionesController();
$OcupacionesDto = $OcupacionesController->updateOcupaciones($OcupacionesDto);
if($OcupacionesDto!=""){
$dtoToJson = new DtoToJson($OcupacionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteOcupaciones($OcupacionesDto){
$OcupacionesDto=$this->validarOcupaciones($OcupacionesDto);
$OcupacionesController = new OcupacionesController();
$OcupacionesDto = $OcupacionesController->deleteOcupaciones($OcupacionesDto);
if($OcupacionesDto==true){
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



@$cveOcupacion=$_POST["cveOcupacion"];
@$desOcupacion=$_POST["desOcupacion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$ocupacionesFacade = new OcupacionesFacade();
$ocupacionesDto = new OcupacionesDTO();

$ocupacionesDto->setCveOcupacion($cveOcupacion);
$ocupacionesDto->setDesOcupacion($desOcupacion);
$ocupacionesDto->setActivo($activo);
$ocupacionesDto->setFechaRegistro($fechaRegistro);
$ocupacionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveOcupacion=="") ){
$ocupacionesDto=$ocupacionesFacade->insertOcupaciones($ocupacionesDto);
echo $ocupacionesDto;
} else if(($accion=="guardar") && ($cveOcupacion!="")){
$ocupacionesDto=$ocupacionesFacade->updateOcupaciones($ocupacionesDto);
echo $ocupacionesDto;
} else if($accion=="consultar"){
$ocupacionesDto=$ocupacionesFacade->selectOcupaciones($ocupacionesDto);
echo $ocupacionesDto;
} else if( ($accion=="baja") && ($cveOcupacion!="") ){
$ocupacionesDto=$ocupacionesFacade->deleteOcupaciones($ocupacionesDto);
echo $ocupacionesDto;
} else if( ($accion=="seleccionar") && ($cveOcupacion!="") ){
$ocupacionesDto=$ocupacionesFacade->selectOcupaciones($ocupacionesDto);
echo $ocupacionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>