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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipossentencias/TipossentenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tipossentencias/TipossentenciasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TipossentenciasFacade {
private $proveedor;
public function __construct() {
}
public function validarTipossentencias($TipossentenciasDto){
$TipossentenciasDto->setcveTipoSentencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossentenciasDto->getcveTipoSentencia(),"utf8"):strtoupper($TipossentenciasDto->getcveTipoSentencia()))))));
if($this->esFecha($TipossentenciasDto->getcveTipoSentencia())){
$TipossentenciasDto->setcveTipoSentencia($this->fechaMysql($TipossentenciasDto->getcveTipoSentencia()));
}
$TipossentenciasDto->setdesTipoSentencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossentenciasDto->getdesTipoSentencia(),"utf8"):strtoupper($TipossentenciasDto->getdesTipoSentencia()))))));
if($this->esFecha($TipossentenciasDto->getdesTipoSentencia())){
$TipossentenciasDto->setdesTipoSentencia($this->fechaMysql($TipossentenciasDto->getdesTipoSentencia()));
}
$TipossentenciasDto->setcveInstancia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossentenciasDto->getcveInstancia(),"utf8"):strtoupper($TipossentenciasDto->getcveInstancia()))))));
if($this->esFecha($TipossentenciasDto->getcveInstancia())){
$TipossentenciasDto->setcveInstancia($this->fechaMysql($TipossentenciasDto->getcveInstancia()));
}
$TipossentenciasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossentenciasDto->getactivo(),"utf8"):strtoupper($TipossentenciasDto->getactivo()))))));
if($this->esFecha($TipossentenciasDto->getactivo())){
$TipossentenciasDto->setactivo($this->fechaMysql($TipossentenciasDto->getactivo()));
}
$TipossentenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossentenciasDto->getfechaRegistro(),"utf8"):strtoupper($TipossentenciasDto->getfechaRegistro()))))));
if($this->esFecha($TipossentenciasDto->getfechaRegistro())){
$TipossentenciasDto->setfechaRegistro($this->fechaMysql($TipossentenciasDto->getfechaRegistro()));
}
$TipossentenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipossentenciasDto->getfechaActualizacion(),"utf8"):strtoupper($TipossentenciasDto->getfechaActualizacion()))))));
if($this->esFecha($TipossentenciasDto->getfechaActualizacion())){
$TipossentenciasDto->setfechaActualizacion($this->fechaMysql($TipossentenciasDto->getfechaActualizacion()));
}
return $TipossentenciasDto;
}
public function selectTipossentencias($TipossentenciasDto){
$TipossentenciasDto=$this->validarTipossentencias($TipossentenciasDto);
$TipossentenciasController = new TipossentenciasController();
$TipossentenciasDto = $TipossentenciasController->selectTipossentencias($TipossentenciasDto);
if($TipossentenciasDto!=""){
$dtoToJson = new DtoToJson($TipossentenciasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTipossentencias($TipossentenciasDto){
$TipossentenciasDto=$this->validarTipossentencias($TipossentenciasDto);
$TipossentenciasController = new TipossentenciasController();
$TipossentenciasDto = $TipossentenciasController->insertTipossentencias($TipossentenciasDto);
if($TipossentenciasDto!=""){
$dtoToJson = new DtoToJson($TipossentenciasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTipossentencias($TipossentenciasDto){
$TipossentenciasDto=$this->validarTipossentencias($TipossentenciasDto);
$TipossentenciasController = new TipossentenciasController();
$TipossentenciasDto = $TipossentenciasController->updateTipossentencias($TipossentenciasDto);
if($TipossentenciasDto!=""){
$dtoToJson = new DtoToJson($TipossentenciasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTipossentencias($TipossentenciasDto){
$TipossentenciasDto=$this->validarTipossentencias($TipossentenciasDto);
$TipossentenciasController = new TipossentenciasController();
$TipossentenciasDto = $TipossentenciasController->deleteTipossentencias($TipossentenciasDto);
if($TipossentenciasDto==true){
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



@$cveTipoSentencia=$_POST["cveTipoSentencia"];
@$desTipoSentencia=$_POST["desTipoSentencia"];
@$cveInstancia=$_POST["cveInstancia"];
if($cveInstancia == "" || $cveInstancia == "0" || $cveInstancia == "1"){
    $cveInstancia = "1";
}
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tipossentenciasFacade = new TipossentenciasFacade();
$tipossentenciasDto = new TipossentenciasDTO();

$tipossentenciasDto->setCveTipoSentencia($cveTipoSentencia);
$tipossentenciasDto->setDesTipoSentencia($desTipoSentencia);
$tipossentenciasDto->setCveInstancia($cveInstancia);
$tipossentenciasDto->setActivo($activo);
$tipossentenciasDto->setFechaRegistro($fechaRegistro);
$tipossentenciasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoSentencia=="") ){
$tipossentenciasDto=$tipossentenciasFacade->insertTipossentencias($tipossentenciasDto);
echo $tipossentenciasDto;
} else if(($accion=="guardar") && ($cveTipoSentencia!="")){
$tipossentenciasDto=$tipossentenciasFacade->updateTipossentencias($tipossentenciasDto);
echo $tipossentenciasDto;
} else if($accion=="consultar"){
$tipossentenciasDto=$tipossentenciasFacade->selectTipossentencias($tipossentenciasDto);
echo $tipossentenciasDto;
} else if( ($accion=="baja") && ($cveTipoSentencia!="") ){
$tipossentenciasDto=$tipossentenciasFacade->deleteTipossentencias($tipossentenciasDto);
echo $tipossentenciasDto;
} else if( ($accion=="seleccionar") && ($cveTipoSentencia!="") ){
$tipossentenciasDto=$tipossentenciasFacade->selectTipossentencias($tipossentenciasDto);
echo $tipossentenciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>