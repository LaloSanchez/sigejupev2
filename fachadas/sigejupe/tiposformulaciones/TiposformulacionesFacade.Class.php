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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposformulaciones/TiposformulacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposformulaciones/TiposformulacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposformulacionesFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposformulaciones($TiposformulacionesDto){
$TiposformulacionesDto->setcveTipoFormulacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposformulacionesDto->getcveTipoFormulacion(),"utf8"):strtoupper($TiposformulacionesDto->getcveTipoFormulacion()))))));
if($this->esFecha($TiposformulacionesDto->getcveTipoFormulacion())){
$TiposformulacionesDto->setcveTipoFormulacion($this->fechaMysql($TiposformulacionesDto->getcveTipoFormulacion()));
}
$TiposformulacionesDto->setdesTipoFormulacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposformulacionesDto->getdesTipoFormulacion(),"utf8"):strtoupper($TiposformulacionesDto->getdesTipoFormulacion()))))));
if($this->esFecha($TiposformulacionesDto->getdesTipoFormulacion())){
$TiposformulacionesDto->setdesTipoFormulacion($this->fechaMysql($TiposformulacionesDto->getdesTipoFormulacion()));
}
$TiposformulacionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposformulacionesDto->getactivo(),"utf8"):strtoupper($TiposformulacionesDto->getactivo()))))));
if($this->esFecha($TiposformulacionesDto->getactivo())){
$TiposformulacionesDto->setactivo($this->fechaMysql($TiposformulacionesDto->getactivo()));
}
$TiposformulacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposformulacionesDto->getfechaRegistro(),"utf8"):strtoupper($TiposformulacionesDto->getfechaRegistro()))))));
if($this->esFecha($TiposformulacionesDto->getfechaRegistro())){
$TiposformulacionesDto->setfechaRegistro($this->fechaMysql($TiposformulacionesDto->getfechaRegistro()));
}
$TiposformulacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposformulacionesDto->getfechaActualizacion(),"utf8"):strtoupper($TiposformulacionesDto->getfechaActualizacion()))))));
if($this->esFecha($TiposformulacionesDto->getfechaActualizacion())){
$TiposformulacionesDto->setfechaActualizacion($this->fechaMysql($TiposformulacionesDto->getfechaActualizacion()));
}
return $TiposformulacionesDto;
}
public function selectTiposformulaciones($TiposformulacionesDto){
$TiposformulacionesDto=$this->validarTiposformulaciones($TiposformulacionesDto);
$TiposformulacionesController = new TiposformulacionesController();
$TiposformulacionesDto = $TiposformulacionesController->selectTiposformulaciones($TiposformulacionesDto);
if($TiposformulacionesDto!=""){
$dtoToJson = new DtoToJson($TiposformulacionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposformulaciones($TiposformulacionesDto){
$TiposformulacionesDto=$this->validarTiposformulaciones($TiposformulacionesDto);
$TiposformulacionesController = new TiposformulacionesController();
$TiposformulacionesDto = $TiposformulacionesController->insertTiposformulaciones($TiposformulacionesDto);
if($TiposformulacionesDto!=""){
$dtoToJson = new DtoToJson($TiposformulacionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposformulaciones($TiposformulacionesDto){
$TiposformulacionesDto=$this->validarTiposformulaciones($TiposformulacionesDto);
$TiposformulacionesController = new TiposformulacionesController();
$TiposformulacionesDto = $TiposformulacionesController->updateTiposformulaciones($TiposformulacionesDto);
if($TiposformulacionesDto!=""){
$dtoToJson = new DtoToJson($TiposformulacionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposformulaciones($TiposformulacionesDto){
$TiposformulacionesDto=$this->validarTiposformulaciones($TiposformulacionesDto);
$TiposformulacionesController = new TiposformulacionesController();
$TiposformulacionesDto = $TiposformulacionesController->deleteTiposformulaciones($TiposformulacionesDto);
if($TiposformulacionesDto==true){
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



@$cveTipoFormulacion=$_POST["cveTipoFormulacion"];
@$desTipoFormulacion=$_POST["desTipoFormulacion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposformulacionesFacade = new TiposformulacionesFacade();
$tiposformulacionesDto = new TiposformulacionesDTO();

$tiposformulacionesDto->setCveTipoFormulacion($cveTipoFormulacion);
$tiposformulacionesDto->setDesTipoFormulacion($desTipoFormulacion);
$tiposformulacionesDto->setActivo($activo);
$tiposformulacionesDto->setFechaRegistro($fechaRegistro);
$tiposformulacionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoFormulacion=="") ){
$tiposformulacionesDto=$tiposformulacionesFacade->insertTiposformulaciones($tiposformulacionesDto);
echo $tiposformulacionesDto;
} else if(($accion=="guardar") && ($cveTipoFormulacion!="")){
$tiposformulacionesDto=$tiposformulacionesFacade->updateTiposformulaciones($tiposformulacionesDto);
echo $tiposformulacionesDto;
} else if($accion=="consultar"){
$tiposformulacionesDto=$tiposformulacionesFacade->selectTiposformulaciones($tiposformulacionesDto);
echo $tiposformulacionesDto;
} else if( ($accion=="baja") && ($cveTipoFormulacion!="") ){
$tiposformulacionesDto=$tiposformulacionesFacade->deleteTiposformulaciones($tiposformulacionesDto);
echo $tiposformulacionesDto;
} else if( ($accion=="seleccionar") && ($cveTipoFormulacion!="") ){
$tiposformulacionesDto=$tiposformulacionesFacade->selectTiposformulaciones($tiposformulacionesDto);
echo $tiposformulacionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>