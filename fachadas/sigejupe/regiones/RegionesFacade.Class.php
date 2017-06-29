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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/regiones/RegionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/regiones/RegionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class RegionesFacade {
private $proveedor;
public function __construct() {
}
public function validarRegiones($RegionesDto){
$RegionesDto->setcveRegion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RegionesDto->getcveRegion(),"utf8"):strtoupper($RegionesDto->getcveRegion()))))));
if($this->esFecha($RegionesDto->getcveRegion())){
$RegionesDto->setcveRegion($this->fechaMysql($RegionesDto->getcveRegion()));
}
$RegionesDto->setdesRegion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RegionesDto->getdesRegion(),"utf8"):strtoupper($RegionesDto->getdesRegion()))))));
if($this->esFecha($RegionesDto->getdesRegion())){
$RegionesDto->setdesRegion($this->fechaMysql($RegionesDto->getdesRegion()));
}
$RegionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RegionesDto->getactivo(),"utf8"):strtoupper($RegionesDto->getactivo()))))));
if($this->esFecha($RegionesDto->getactivo())){
$RegionesDto->setactivo($this->fechaMysql($RegionesDto->getactivo()));
}
$RegionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RegionesDto->getfechaRegistro(),"utf8"):strtoupper($RegionesDto->getfechaRegistro()))))));
if($this->esFecha($RegionesDto->getfechaRegistro())){
$RegionesDto->setfechaRegistro($this->fechaMysql($RegionesDto->getfechaRegistro()));
}
$RegionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RegionesDto->getfechaActualizacion(),"utf8"):strtoupper($RegionesDto->getfechaActualizacion()))))));
if($this->esFecha($RegionesDto->getfechaActualizacion())){
$RegionesDto->setfechaActualizacion($this->fechaMysql($RegionesDto->getfechaActualizacion()));
}
return $RegionesDto;
}
public function selectRegiones($RegionesDto){
$RegionesDto=$this->validarRegiones($RegionesDto);
$RegionesController = new RegionesController();
$RegionesDto = $RegionesController->selectRegiones($RegionesDto);
if($RegionesDto!=""){
$dtoToJson = new DtoToJson($RegionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertRegiones($RegionesDto){
$RegionesDto=$this->validarRegiones($RegionesDto);
$RegionesController = new RegionesController();
$RegionesDto = $RegionesController->insertRegiones($RegionesDto);
if($RegionesDto!=""){
$dtoToJson = new DtoToJson($RegionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateRegiones($RegionesDto){
$RegionesDto=$this->validarRegiones($RegionesDto);
$RegionesController = new RegionesController();
$RegionesDto = $RegionesController->updateRegiones($RegionesDto);
if($RegionesDto!=""){
$dtoToJson = new DtoToJson($RegionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteRegiones($RegionesDto){
$RegionesDto=$this->validarRegiones($RegionesDto);
$RegionesController = new RegionesController();
$RegionesDto = $RegionesController->deleteRegiones($RegionesDto);
if($RegionesDto==true){
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



@$cveRegion=$_POST["cveRegion"];
@$desRegion=$_POST["desRegion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$regionesFacade = new RegionesFacade();
$regionesDto = new RegionesDTO();

$regionesDto->setCveRegion($cveRegion);
$regionesDto->setDesRegion($desRegion);
$regionesDto->setActivo($activo);
$regionesDto->setFechaRegistro($fechaRegistro);
$regionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveRegion=="") ){
$regionesDto=$regionesFacade->insertRegiones($regionesDto);
echo $regionesDto;
} else if(($accion=="guardar") && ($cveRegion!="")){
$regionesDto=$regionesFacade->updateRegiones($regionesDto);
echo $regionesDto;
} else if($accion=="consultar"){
$regionesDto=$regionesFacade->selectRegiones($regionesDto);
echo $regionesDto;
} else if( ($accion=="baja") && ($cveRegion!="") ){
$regionesDto=$regionesFacade->deleteRegiones($regionesDto);
echo $regionesDto;
} else if( ($accion=="seleccionar") && ($cveRegion!="") ){
$regionesDto=$regionesFacade->selectRegiones($regionesDto);
echo $regionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>