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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/bienesjuridicosafectados/BienesjuridicosafectadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/bienesjuridicosafectados/BienesjuridicosafectadosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class BienesjuridicosafectadosFacade {
private $proveedor;
public function __construct() {
}
public function validarBienesjuridicosafectados($BienesjuridicosafectadosDto){
$BienesjuridicosafectadosDto->setcveBienJuridicoAfectado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BienesjuridicosafectadosDto->getcveBienJuridicoAfectado(),"utf8"):strtoupper($BienesjuridicosafectadosDto->getcveBienJuridicoAfectado()))))));
if($this->esFecha($BienesjuridicosafectadosDto->getcveBienJuridicoAfectado())){
$BienesjuridicosafectadosDto->setcveBienJuridicoAfectado($this->fechaMysql($BienesjuridicosafectadosDto->getcveBienJuridicoAfectado()));
}
$BienesjuridicosafectadosDto->setdesBienJuridicoAfectado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BienesjuridicosafectadosDto->getdesBienJuridicoAfectado(),"utf8"):strtoupper($BienesjuridicosafectadosDto->getdesBienJuridicoAfectado()))))));
if($this->esFecha($BienesjuridicosafectadosDto->getdesBienJuridicoAfectado())){
$BienesjuridicosafectadosDto->setdesBienJuridicoAfectado($this->fechaMysql($BienesjuridicosafectadosDto->getdesBienJuridicoAfectado()));
}
$BienesjuridicosafectadosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BienesjuridicosafectadosDto->getactivo(),"utf8"):strtoupper($BienesjuridicosafectadosDto->getactivo()))))));
if($this->esFecha($BienesjuridicosafectadosDto->getactivo())){
$BienesjuridicosafectadosDto->setactivo($this->fechaMysql($BienesjuridicosafectadosDto->getactivo()));
}
$BienesjuridicosafectadosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BienesjuridicosafectadosDto->getfechaRegistro(),"utf8"):strtoupper($BienesjuridicosafectadosDto->getfechaRegistro()))))));
if($this->esFecha($BienesjuridicosafectadosDto->getfechaRegistro())){
$BienesjuridicosafectadosDto->setfechaRegistro($this->fechaMysql($BienesjuridicosafectadosDto->getfechaRegistro()));
}
$BienesjuridicosafectadosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BienesjuridicosafectadosDto->getfechaActualizacion(),"utf8"):strtoupper($BienesjuridicosafectadosDto->getfechaActualizacion()))))));
if($this->esFecha($BienesjuridicosafectadosDto->getfechaActualizacion())){
$BienesjuridicosafectadosDto->setfechaActualizacion($this->fechaMysql($BienesjuridicosafectadosDto->getfechaActualizacion()));
}
return $BienesjuridicosafectadosDto;
}
public function selectBienesjuridicosafectados($BienesjuridicosafectadosDto){
$BienesjuridicosafectadosDto=$this->validarBienesjuridicosafectados($BienesjuridicosafectadosDto);
$BienesjuridicosafectadosController = new BienesjuridicosafectadosController();
$BienesjuridicosafectadosDto = $BienesjuridicosafectadosController->selectBienesjuridicosafectados($BienesjuridicosafectadosDto);
if($BienesjuridicosafectadosDto!=""){
$dtoToJson = new DtoToJson($BienesjuridicosafectadosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertBienesjuridicosafectados($BienesjuridicosafectadosDto){
$BienesjuridicosafectadosDto=$this->validarBienesjuridicosafectados($BienesjuridicosafectadosDto);
$BienesjuridicosafectadosController = new BienesjuridicosafectadosController();
$BienesjuridicosafectadosDto = $BienesjuridicosafectadosController->insertBienesjuridicosafectados($BienesjuridicosafectadosDto);
if($BienesjuridicosafectadosDto!=""){
$dtoToJson = new DtoToJson($BienesjuridicosafectadosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateBienesjuridicosafectados($BienesjuridicosafectadosDto){
$BienesjuridicosafectadosDto=$this->validarBienesjuridicosafectados($BienesjuridicosafectadosDto);
$BienesjuridicosafectadosController = new BienesjuridicosafectadosController();
$BienesjuridicosafectadosDto = $BienesjuridicosafectadosController->updateBienesjuridicosafectados($BienesjuridicosafectadosDto);
if($BienesjuridicosafectadosDto!=""){
$dtoToJson = new DtoToJson($BienesjuridicosafectadosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteBienesjuridicosafectados($BienesjuridicosafectadosDto){
$BienesjuridicosafectadosDto=$this->validarBienesjuridicosafectados($BienesjuridicosafectadosDto);
$BienesjuridicosafectadosController = new BienesjuridicosafectadosController();
$BienesjuridicosafectadosDto = $BienesjuridicosafectadosController->deleteBienesjuridicosafectados($BienesjuridicosafectadosDto);
if($BienesjuridicosafectadosDto==true){
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



@$cveBienJuridicoAfectado=$_POST["cveBienJuridicoAfectado"];
@$desBienJuridicoAfectado=$_POST["desBienJuridicoAfectado"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$bienesjuridicosafectadosFacade = new BienesjuridicosafectadosFacade();
$bienesjuridicosafectadosDto = new BienesjuridicosafectadosDTO();

$bienesjuridicosafectadosDto->setCveBienJuridicoAfectado($cveBienJuridicoAfectado);
$bienesjuridicosafectadosDto->setDesBienJuridicoAfectado($desBienJuridicoAfectado);
$bienesjuridicosafectadosDto->setActivo($activo);
$bienesjuridicosafectadosDto->setFechaRegistro($fechaRegistro);
$bienesjuridicosafectadosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveBienJuridicoAfectado=="") ){
$bienesjuridicosafectadosDto=$bienesjuridicosafectadosFacade->insertBienesjuridicosafectados($bienesjuridicosafectadosDto);
echo $bienesjuridicosafectadosDto;
} else if(($accion=="guardar") && ($cveBienJuridicoAfectado!="")){
$bienesjuridicosafectadosDto=$bienesjuridicosafectadosFacade->updateBienesjuridicosafectados($bienesjuridicosafectadosDto);
echo $bienesjuridicosafectadosDto;
} else if($accion=="consultar"){
$bienesjuridicosafectadosDto=$bienesjuridicosafectadosFacade->selectBienesjuridicosafectados($bienesjuridicosafectadosDto);
echo $bienesjuridicosafectadosDto;
} else if( ($accion=="baja") && ($cveBienJuridicoAfectado!="") ){
$bienesjuridicosafectadosDto=$bienesjuridicosafectadosFacade->deleteBienesjuridicosafectados($bienesjuridicosafectadosDto);
echo $bienesjuridicosafectadosDto;
} else if( ($accion=="seleccionar") && ($cveBienJuridicoAfectado!="") ){
$bienesjuridicosafectadosDto=$bienesjuridicosafectadosFacade->selectBienesjuridicosafectados($bienesjuridicosafectadosDto);
echo $bienesjuridicosafectadosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>