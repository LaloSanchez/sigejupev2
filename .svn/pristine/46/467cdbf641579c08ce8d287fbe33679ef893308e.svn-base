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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/codigos/CodigosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/codigos/CodigosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class CodigosFacade {
private $proveedor;
public function __construct() {
}
public function validarCodigos($CodigosDto){
$CodigosDto->setcveCodigo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CodigosDto->getcveCodigo(),"utf8"):strtoupper($CodigosDto->getcveCodigo()))))));
if($this->esFecha($CodigosDto->getcveCodigo())){
$CodigosDto->setcveCodigo($this->fechaMysql($CodigosDto->getcveCodigo()));
}
$CodigosDto->setdesCodigo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CodigosDto->getdesCodigo(),"utf8"):strtoupper($CodigosDto->getdesCodigo()))))));
if($this->esFecha($CodigosDto->getdesCodigo())){
$CodigosDto->setdesCodigo($this->fechaMysql($CodigosDto->getdesCodigo()));
}
$CodigosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CodigosDto->getactivo(),"utf8"):strtoupper($CodigosDto->getactivo()))))));
if($this->esFecha($CodigosDto->getactivo())){
$CodigosDto->setactivo($this->fechaMysql($CodigosDto->getactivo()));
}
$CodigosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CodigosDto->getfechaRegistro(),"utf8"):strtoupper($CodigosDto->getfechaRegistro()))))));
if($this->esFecha($CodigosDto->getfechaRegistro())){
$CodigosDto->setfechaRegistro($this->fechaMysql($CodigosDto->getfechaRegistro()));
}
$CodigosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CodigosDto->getfechaActualizacion(),"utf8"):strtoupper($CodigosDto->getfechaActualizacion()))))));
if($this->esFecha($CodigosDto->getfechaActualizacion())){
$CodigosDto->setfechaActualizacion($this->fechaMysql($CodigosDto->getfechaActualizacion()));
}
return $CodigosDto;
}
public function selectCodigos($CodigosDto){
$CodigosDto=$this->validarCodigos($CodigosDto);
$CodigosController = new CodigosController();
$CodigosDto = $CodigosController->selectCodigos($CodigosDto);
if($CodigosDto!=""){
$dtoToJson = new DtoToJson($CodigosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertCodigos($CodigosDto){
$CodigosDto=$this->validarCodigos($CodigosDto);
$CodigosController = new CodigosController();
$CodigosDto = $CodigosController->insertCodigos($CodigosDto);
if($CodigosDto!=""){
$dtoToJson = new DtoToJson($CodigosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateCodigos($CodigosDto){
$CodigosDto=$this->validarCodigos($CodigosDto);
$CodigosController = new CodigosController();
$CodigosDto = $CodigosController->updateCodigos($CodigosDto);
if($CodigosDto!=""){
$dtoToJson = new DtoToJson($CodigosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteCodigos($CodigosDto){
$CodigosDto=$this->validarCodigos($CodigosDto);
$CodigosController = new CodigosController();
$CodigosDto = $CodigosController->deleteCodigos($CodigosDto);
if($CodigosDto==true){
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



@$cveCodigo=$_POST["cveCodigo"];
@$desCodigo=$_POST["desCodigo"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$codigosFacade = new CodigosFacade();
$codigosDto = new CodigosDTO();

$codigosDto->setCveCodigo($cveCodigo);
$codigosDto->setDesCodigo($desCodigo);
$codigosDto->setActivo($activo);
$codigosDto->setFechaRegistro($fechaRegistro);
$codigosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveCodigo=="") ){
$codigosDto=$codigosFacade->insertCodigos($codigosDto);
echo $codigosDto;
} else if(($accion=="guardar") && ($cveCodigo!="")){
$codigosDto=$codigosFacade->updateCodigos($codigosDto);
echo $codigosDto;
} else if($accion=="consultar"){
$codigosDto=$codigosFacade->selectCodigos($codigosDto);
echo $codigosDto;
} else if( ($accion=="baja") && ($cveCodigo!="") ){
$codigosDto=$codigosFacade->deleteCodigos($codigosDto);
echo $codigosDto;
} else if( ($accion=="seleccionar") && ($cveCodigo!="") ){
$codigosDto=$codigosFacade->selectCodigos($codigosDto);
echo $codigosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>