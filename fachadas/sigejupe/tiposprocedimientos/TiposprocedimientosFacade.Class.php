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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposprocedimientos/TiposprocedimientosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposprocedimientos/TiposprocedimientosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposprocedimientosFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposprocedimientos($TiposprocedimientosDto){
$TiposprocedimientosDto->setcveTipoProcedimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposprocedimientosDto->getcveTipoProcedimiento(),"utf8"):strtoupper($TiposprocedimientosDto->getcveTipoProcedimiento()))))));
if($this->esFecha($TiposprocedimientosDto->getcveTipoProcedimiento())){
$TiposprocedimientosDto->setcveTipoProcedimiento($this->fechaMysql($TiposprocedimientosDto->getcveTipoProcedimiento()));
}
$TiposprocedimientosDto->setdesTipoProcedimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposprocedimientosDto->getdesTipoProcedimiento(),"utf8"):strtoupper($TiposprocedimientosDto->getdesTipoProcedimiento()))))));
if($this->esFecha($TiposprocedimientosDto->getdesTipoProcedimiento())){
$TiposprocedimientosDto->setdesTipoProcedimiento($this->fechaMysql($TiposprocedimientosDto->getdesTipoProcedimiento()));
}
$TiposprocedimientosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposprocedimientosDto->getactivo(),"utf8"):strtoupper($TiposprocedimientosDto->getactivo()))))));
if($this->esFecha($TiposprocedimientosDto->getactivo())){
$TiposprocedimientosDto->setactivo($this->fechaMysql($TiposprocedimientosDto->getactivo()));
}
$TiposprocedimientosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposprocedimientosDto->getfechaRegistro(),"utf8"):strtoupper($TiposprocedimientosDto->getfechaRegistro()))))));
if($this->esFecha($TiposprocedimientosDto->getfechaRegistro())){
$TiposprocedimientosDto->setfechaRegistro($this->fechaMysql($TiposprocedimientosDto->getfechaRegistro()));
}
$TiposprocedimientosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposprocedimientosDto->getfechaActualizacion(),"utf8"):strtoupper($TiposprocedimientosDto->getfechaActualizacion()))))));
if($this->esFecha($TiposprocedimientosDto->getfechaActualizacion())){
$TiposprocedimientosDto->setfechaActualizacion($this->fechaMysql($TiposprocedimientosDto->getfechaActualizacion()));
}
return $TiposprocedimientosDto;
}
public function selectTiposprocedimientos($TiposprocedimientosDto){
$TiposprocedimientosDto=$this->validarTiposprocedimientos($TiposprocedimientosDto);
$TiposprocedimientosController = new TiposprocedimientosController();
$TiposprocedimientosDto = $TiposprocedimientosController->selectTiposprocedimientos($TiposprocedimientosDto);
if($TiposprocedimientosDto!=""){
$dtoToJson = new DtoToJson($TiposprocedimientosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposprocedimientos($TiposprocedimientosDto){
$TiposprocedimientosDto=$this->validarTiposprocedimientos($TiposprocedimientosDto);
$TiposprocedimientosController = new TiposprocedimientosController();
$TiposprocedimientosDto = $TiposprocedimientosController->insertTiposprocedimientos($TiposprocedimientosDto);
if($TiposprocedimientosDto!=""){
$dtoToJson = new DtoToJson($TiposprocedimientosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposprocedimientos($TiposprocedimientosDto){
$TiposprocedimientosDto=$this->validarTiposprocedimientos($TiposprocedimientosDto);
$TiposprocedimientosController = new TiposprocedimientosController();
$TiposprocedimientosDto = $TiposprocedimientosController->updateTiposprocedimientos($TiposprocedimientosDto);
if($TiposprocedimientosDto!=""){
$dtoToJson = new DtoToJson($TiposprocedimientosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposprocedimientos($TiposprocedimientosDto){
$TiposprocedimientosDto=$this->validarTiposprocedimientos($TiposprocedimientosDto);
$TiposprocedimientosController = new TiposprocedimientosController();
$TiposprocedimientosDto = $TiposprocedimientosController->deleteTiposprocedimientos($TiposprocedimientosDto);
if($TiposprocedimientosDto==true){
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



@$cveTipoProcedimiento=$_POST["cveTipoProcedimiento"];
@$desTipoProcedimiento=$_POST["desTipoProcedimiento"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposprocedimientosFacade = new TiposprocedimientosFacade();
$tiposprocedimientosDto = new TiposprocedimientosDTO();

$tiposprocedimientosDto->setCveTipoProcedimiento($cveTipoProcedimiento);
$tiposprocedimientosDto->setDesTipoProcedimiento($desTipoProcedimiento);
$tiposprocedimientosDto->setActivo($activo);
$tiposprocedimientosDto->setFechaRegistro($fechaRegistro);
$tiposprocedimientosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoProcedimiento=="") ){
$tiposprocedimientosDto=$tiposprocedimientosFacade->insertTiposprocedimientos($tiposprocedimientosDto);
echo $tiposprocedimientosDto;
} else if(($accion=="guardar") && ($cveTipoProcedimiento!="")){
$tiposprocedimientosDto=$tiposprocedimientosFacade->updateTiposprocedimientos($tiposprocedimientosDto);
echo $tiposprocedimientosDto;
} else if($accion=="consultar"){
$tiposprocedimientosDto=$tiposprocedimientosFacade->selectTiposprocedimientos($tiposprocedimientosDto);
echo $tiposprocedimientosDto;
} else if( ($accion=="baja") && ($cveTipoProcedimiento!="") ){
$tiposprocedimientosDto=$tiposprocedimientosFacade->deleteTiposprocedimientos($tiposprocedimientosDto);
echo $tiposprocedimientosDto;
} else if( ($accion=="seleccionar") && ($cveTipoProcedimiento!="") ){
$tiposprocedimientosDto=$tiposprocedimientosFacade->selectTiposprocedimientos($tiposprocedimientosDto);
echo $tiposprocedimientosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>