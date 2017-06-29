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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposrelimpofe/TiposrelimpofeDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposrelimpofe/TiposrelimpofeController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposrelimpofeFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposrelimpofe($TiposrelimpofeDto){
$TiposrelimpofeDto->setcveRelacionImpOfe(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposrelimpofeDto->getcveRelacionImpOfe(),"utf8"):strtoupper($TiposrelimpofeDto->getcveRelacionImpOfe()))))));
if($this->esFecha($TiposrelimpofeDto->getcveRelacionImpOfe())){
$TiposrelimpofeDto->setcveRelacionImpOfe($this->fechaMysql($TiposrelimpofeDto->getcveRelacionImpOfe()));
}
$TiposrelimpofeDto->setdesRelacionImpOfe(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposrelimpofeDto->getdesRelacionImpOfe(),"utf8"):strtoupper($TiposrelimpofeDto->getdesRelacionImpOfe()))))));
if($this->esFecha($TiposrelimpofeDto->getdesRelacionImpOfe())){
$TiposrelimpofeDto->setdesRelacionImpOfe($this->fechaMysql($TiposrelimpofeDto->getdesRelacionImpOfe()));
}
$TiposrelimpofeDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposrelimpofeDto->getactivo(),"utf8"):strtoupper($TiposrelimpofeDto->getactivo()))))));
if($this->esFecha($TiposrelimpofeDto->getactivo())){
$TiposrelimpofeDto->setactivo($this->fechaMysql($TiposrelimpofeDto->getactivo()));
}
$TiposrelimpofeDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposrelimpofeDto->getfechaRegistro(),"utf8"):strtoupper($TiposrelimpofeDto->getfechaRegistro()))))));
if($this->esFecha($TiposrelimpofeDto->getfechaRegistro())){
$TiposrelimpofeDto->setfechaRegistro($this->fechaMysql($TiposrelimpofeDto->getfechaRegistro()));
}
$TiposrelimpofeDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposrelimpofeDto->getfechaActualizacion(),"utf8"):strtoupper($TiposrelimpofeDto->getfechaActualizacion()))))));
if($this->esFecha($TiposrelimpofeDto->getfechaActualizacion())){
$TiposrelimpofeDto->setfechaActualizacion($this->fechaMysql($TiposrelimpofeDto->getfechaActualizacion()));
}
return $TiposrelimpofeDto;
}
public function selectTiposrelimpofe($TiposrelimpofeDto){
$TiposrelimpofeDto=$this->validarTiposrelimpofe($TiposrelimpofeDto);
$TiposrelimpofeController = new TiposrelimpofeController();
$TiposrelimpofeDto = $TiposrelimpofeController->selectTiposrelimpofe($TiposrelimpofeDto);
if($TiposrelimpofeDto!=""){
$dtoToJson = new DtoToJson($TiposrelimpofeDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposrelimpofe($TiposrelimpofeDto){
$TiposrelimpofeDto=$this->validarTiposrelimpofe($TiposrelimpofeDto);
$TiposrelimpofeController = new TiposrelimpofeController();
$TiposrelimpofeDto = $TiposrelimpofeController->insertTiposrelimpofe($TiposrelimpofeDto);
if($TiposrelimpofeDto!=""){
$dtoToJson = new DtoToJson($TiposrelimpofeDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposrelimpofe($TiposrelimpofeDto){
$TiposrelimpofeDto=$this->validarTiposrelimpofe($TiposrelimpofeDto);
$TiposrelimpofeController = new TiposrelimpofeController();
$TiposrelimpofeDto = $TiposrelimpofeController->updateTiposrelimpofe($TiposrelimpofeDto);
if($TiposrelimpofeDto!=""){
$dtoToJson = new DtoToJson($TiposrelimpofeDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposrelimpofe($TiposrelimpofeDto){
$TiposrelimpofeDto=$this->validarTiposrelimpofe($TiposrelimpofeDto);
$TiposrelimpofeController = new TiposrelimpofeController();
$TiposrelimpofeDto = $TiposrelimpofeController->deleteTiposrelimpofe($TiposrelimpofeDto);
if($TiposrelimpofeDto==true){
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



@$cveRelacionImpOfe=$_POST["cveRelacionImpOfe"];
@$desRelacionImpOfe=$_POST["desRelacionImpOfe"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposrelimpofeFacade = new TiposrelimpofeFacade();
$tiposrelimpofeDto = new TiposrelimpofeDTO();

$tiposrelimpofeDto->setCveRelacionImpOfe($cveRelacionImpOfe);
$tiposrelimpofeDto->setDesRelacionImpOfe($desRelacionImpOfe);
$tiposrelimpofeDto->setActivo($activo);
$tiposrelimpofeDto->setFechaRegistro($fechaRegistro);
$tiposrelimpofeDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveRelacionImpOfe=="") ){
$tiposrelimpofeDto=$tiposrelimpofeFacade->insertTiposrelimpofe($tiposrelimpofeDto);
echo $tiposrelimpofeDto;
} else if(($accion=="guardar") && ($cveRelacionImpOfe!="")){
$tiposrelimpofeDto=$tiposrelimpofeFacade->updateTiposrelimpofe($tiposrelimpofeDto);
echo $tiposrelimpofeDto;
} else if($accion=="consultar"){
$tiposrelimpofeDto=$tiposrelimpofeFacade->selectTiposrelimpofe($tiposrelimpofeDto);
echo $tiposrelimpofeDto;
} else if( ($accion=="baja") && ($cveRelacionImpOfe!="") ){
$tiposrelimpofeDto=$tiposrelimpofeFacade->deleteTiposrelimpofe($tiposrelimpofeDto);
echo $tiposrelimpofeDto;
} else if( ($accion=="seleccionar") && ($cveRelacionImpOfe!="") ){
$tiposrelimpofeDto=$tiposrelimpofeFacade->selectTiposrelimpofe($tiposrelimpofeDto);
echo $tiposrelimpofeDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>