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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/terminaciones/TerminacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/terminaciones/TerminacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TerminacionesFacade {
private $proveedor;
public function __construct() {
}
public function validarTerminaciones($TerminacionesDto){
$TerminacionesDto->setcveTerminacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TerminacionesDto->getcveTerminacion(),"utf8"):strtoupper($TerminacionesDto->getcveTerminacion()))))));
if($this->esFecha($TerminacionesDto->getcveTerminacion())){
$TerminacionesDto->setcveTerminacion($this->fechaMysql($TerminacionesDto->getcveTerminacion()));
}
$TerminacionesDto->setdesTerminacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TerminacionesDto->getdesTerminacion(),"utf8"):strtoupper($TerminacionesDto->getdesTerminacion()))))));
if($this->esFecha($TerminacionesDto->getdesTerminacion())){
$TerminacionesDto->setdesTerminacion($this->fechaMysql($TerminacionesDto->getdesTerminacion()));
}
$TerminacionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TerminacionesDto->getactivo(),"utf8"):strtoupper($TerminacionesDto->getactivo()))))));
if($this->esFecha($TerminacionesDto->getactivo())){
$TerminacionesDto->setactivo($this->fechaMysql($TerminacionesDto->getactivo()));
}
$TerminacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TerminacionesDto->getfechaRegistro(),"utf8"):strtoupper($TerminacionesDto->getfechaRegistro()))))));
if($this->esFecha($TerminacionesDto->getfechaRegistro())){
$TerminacionesDto->setfechaRegistro($this->fechaMysql($TerminacionesDto->getfechaRegistro()));
}
$TerminacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TerminacionesDto->getfechaActualizacion(),"utf8"):strtoupper($TerminacionesDto->getfechaActualizacion()))))));
if($this->esFecha($TerminacionesDto->getfechaActualizacion())){
$TerminacionesDto->setfechaActualizacion($this->fechaMysql($TerminacionesDto->getfechaActualizacion()));
}
return $TerminacionesDto;
}
public function selectTerminaciones($TerminacionesDto){
$TerminacionesDto=$this->validarTerminaciones($TerminacionesDto);
$TerminacionesController = new TerminacionesController();
$TerminacionesDto = $TerminacionesController->selectTerminaciones($TerminacionesDto);
if($TerminacionesDto!=""){
$dtoToJson = new DtoToJson($TerminacionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTerminaciones($TerminacionesDto){
$TerminacionesDto=$this->validarTerminaciones($TerminacionesDto);
$TerminacionesController = new TerminacionesController();
$TerminacionesDto = $TerminacionesController->insertTerminaciones($TerminacionesDto);
if($TerminacionesDto!=""){
$dtoToJson = new DtoToJson($TerminacionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTerminaciones($TerminacionesDto){
$TerminacionesDto=$this->validarTerminaciones($TerminacionesDto);
$TerminacionesController = new TerminacionesController();
$TerminacionesDto = $TerminacionesController->updateTerminaciones($TerminacionesDto);
if($TerminacionesDto!=""){
$dtoToJson = new DtoToJson($TerminacionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTerminaciones($TerminacionesDto){
$TerminacionesDto=$this->validarTerminaciones($TerminacionesDto);
$TerminacionesController = new TerminacionesController();
$TerminacionesDto = $TerminacionesController->deleteTerminaciones($TerminacionesDto);
if($TerminacionesDto==true){
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



@$cveTerminacion=$_POST["cveTerminacion"];
@$desTerminacion=$_POST["desTerminacion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$terminacionesFacade = new TerminacionesFacade();
$terminacionesDto = new TerminacionesDTO();

$terminacionesDto->setCveTerminacion($cveTerminacion);
$terminacionesDto->setDesTerminacion($desTerminacion);
$terminacionesDto->setActivo($activo);
$terminacionesDto->setFechaRegistro($fechaRegistro);
$terminacionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTerminacion=="") ){
$terminacionesDto=$terminacionesFacade->insertTerminaciones($terminacionesDto);
echo $terminacionesDto;
} else if(($accion=="guardar") && ($cveTerminacion!="")){
$terminacionesDto=$terminacionesFacade->updateTerminaciones($terminacionesDto);
echo $terminacionesDto;
} else if($accion=="consultar"){
$terminacionesDto=$terminacionesFacade->selectTerminaciones($terminacionesDto);
echo $terminacionesDto;
} else if( ($accion=="baja") && ($cveTerminacion!="") ){
$terminacionesDto=$terminacionesFacade->deleteTerminaciones($terminacionesDto);
echo $terminacionesDto;
} else if( ($accion=="seleccionar") && ($cveTerminacion!="") ){
$terminacionesDto=$terminacionesFacade->selectTerminaciones($terminacionesDto);
echo $terminacionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>