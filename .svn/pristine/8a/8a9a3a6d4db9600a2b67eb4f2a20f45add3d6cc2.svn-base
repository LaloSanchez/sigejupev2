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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposincompetencias/TiposincompetenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposincompetencias/TiposincompetenciasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposincompetenciasFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposincompetencias($TiposincompetenciasDto){
$TiposincompetenciasDto->setcveTipoIncompetencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposincompetenciasDto->getcveTipoIncompetencia(),"utf8"):strtoupper($TiposincompetenciasDto->getcveTipoIncompetencia()))))));
if($this->esFecha($TiposincompetenciasDto->getcveTipoIncompetencia())){
$TiposincompetenciasDto->setcveTipoIncompetencia($this->fechaMysql($TiposincompetenciasDto->getcveTipoIncompetencia()));
}
$TiposincompetenciasDto->setdesTipoIncompetencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposincompetenciasDto->getdesTipoIncompetencia(),"utf8"):strtoupper($TiposincompetenciasDto->getdesTipoIncompetencia()))))));
if($this->esFecha($TiposincompetenciasDto->getdesTipoIncompetencia())){
$TiposincompetenciasDto->setdesTipoIncompetencia($this->fechaMysql($TiposincompetenciasDto->getdesTipoIncompetencia()));
}
$TiposincompetenciasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposincompetenciasDto->getactivo(),"utf8"):strtoupper($TiposincompetenciasDto->getactivo()))))));
if($this->esFecha($TiposincompetenciasDto->getactivo())){
$TiposincompetenciasDto->setactivo($this->fechaMysql($TiposincompetenciasDto->getactivo()));
}
$TiposincompetenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposincompetenciasDto->getfechaRegistro(),"utf8"):strtoupper($TiposincompetenciasDto->getfechaRegistro()))))));
if($this->esFecha($TiposincompetenciasDto->getfechaRegistro())){
$TiposincompetenciasDto->setfechaRegistro($this->fechaMysql($TiposincompetenciasDto->getfechaRegistro()));
}
$TiposincompetenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposincompetenciasDto->getfechaActualizacion(),"utf8"):strtoupper($TiposincompetenciasDto->getfechaActualizacion()))))));
if($this->esFecha($TiposincompetenciasDto->getfechaActualizacion())){
$TiposincompetenciasDto->setfechaActualizacion($this->fechaMysql($TiposincompetenciasDto->getfechaActualizacion()));
}
return $TiposincompetenciasDto;
}
public function selectTiposincompetencias($TiposincompetenciasDto){
$TiposincompetenciasDto=$this->validarTiposincompetencias($TiposincompetenciasDto);
$TiposincompetenciasController = new TiposincompetenciasController();
$TiposincompetenciasDto = $TiposincompetenciasController->selectTiposincompetencias($TiposincompetenciasDto);
if($TiposincompetenciasDto!=""){
$dtoToJson = new DtoToJson($TiposincompetenciasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposincompetencias($TiposincompetenciasDto){
$TiposincompetenciasDto=$this->validarTiposincompetencias($TiposincompetenciasDto);
$TiposincompetenciasController = new TiposincompetenciasController();
$TiposincompetenciasDto = $TiposincompetenciasController->insertTiposincompetencias($TiposincompetenciasDto);
if($TiposincompetenciasDto!=""){
$dtoToJson = new DtoToJson($TiposincompetenciasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposincompetencias($TiposincompetenciasDto){
$TiposincompetenciasDto=$this->validarTiposincompetencias($TiposincompetenciasDto);
$TiposincompetenciasController = new TiposincompetenciasController();
$TiposincompetenciasDto = $TiposincompetenciasController->updateTiposincompetencias($TiposincompetenciasDto);
if($TiposincompetenciasDto!=""){
$dtoToJson = new DtoToJson($TiposincompetenciasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposincompetencias($TiposincompetenciasDto){
$TiposincompetenciasDto=$this->validarTiposincompetencias($TiposincompetenciasDto);
$TiposincompetenciasController = new TiposincompetenciasController();
$TiposincompetenciasDto = $TiposincompetenciasController->deleteTiposincompetencias($TiposincompetenciasDto);
if($TiposincompetenciasDto==true){
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



@$cveTipoIncompetencia=$_POST["cveTipoIncompetencia"];
@$desTipoIncompetencia=$_POST["desTipoIncompetencia"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposincompetenciasFacade = new TiposincompetenciasFacade();
$tiposincompetenciasDto = new TiposincompetenciasDTO();

$tiposincompetenciasDto->setCveTipoIncompetencia($cveTipoIncompetencia);
$tiposincompetenciasDto->setDesTipoIncompetencia($desTipoIncompetencia);
$tiposincompetenciasDto->setActivo($activo);
$tiposincompetenciasDto->setFechaRegistro($fechaRegistro);
$tiposincompetenciasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoIncompetencia=="") ){
$tiposincompetenciasDto=$tiposincompetenciasFacade->insertTiposincompetencias($tiposincompetenciasDto);
echo $tiposincompetenciasDto;
} else if(($accion=="guardar") && ($cveTipoIncompetencia!="")){
$tiposincompetenciasDto=$tiposincompetenciasFacade->updateTiposincompetencias($tiposincompetenciasDto);
echo $tiposincompetenciasDto;
} else if($accion=="consultar"){
$tiposincompetenciasDto=$tiposincompetenciasFacade->selectTiposincompetencias($tiposincompetenciasDto);
echo $tiposincompetenciasDto;
} else if( ($accion=="baja") && ($cveTipoIncompetencia!="") ){
$tiposincompetenciasDto=$tiposincompetenciasFacade->deleteTiposincompetencias($tiposincompetenciasDto);
echo $tiposincompetenciasDto;
} else if( ($accion=="seleccionar") && ($cveTipoIncompetencia!="") ){
$tiposincompetenciasDto=$tiposincompetenciasFacade->selectTiposincompetencias($tiposincompetenciasDto);
echo $tiposincompetenciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>