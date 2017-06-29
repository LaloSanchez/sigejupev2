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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tomamuestras/TomamuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tomamuestras/TomamuestrasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TomamuestrasFacade {
private $proveedor;
public function __construct() {
}
public function validarTomamuestras($TomamuestrasDto){
$TomamuestrasDto->setidTomaMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TomamuestrasDto->getidTomaMuestra(),"utf8"):strtoupper($TomamuestrasDto->getidTomaMuestra()))))));
if($this->esFecha($TomamuestrasDto->getidTomaMuestra())){
$TomamuestrasDto->setidTomaMuestra($this->fechaMysql($TomamuestrasDto->getidTomaMuestra()));
}
$TomamuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TomamuestrasDto->getidSolicitudMuestra(),"utf8"):strtoupper($TomamuestrasDto->getidSolicitudMuestra()))))));
if($this->esFecha($TomamuestrasDto->getidSolicitudMuestra())){
$TomamuestrasDto->setidSolicitudMuestra($this->fechaMysql($TomamuestrasDto->getidSolicitudMuestra()));
}
$TomamuestrasDto->setidImputadoMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TomamuestrasDto->getidImputadoMuestra(),"utf8"):strtoupper($TomamuestrasDto->getidImputadoMuestra()))))));
if($this->esFecha($TomamuestrasDto->getidImputadoMuestra())){
$TomamuestrasDto->setidImputadoMuestra($this->fechaMysql($TomamuestrasDto->getidImputadoMuestra()));
}
$TomamuestrasDto->setidOfendidoMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TomamuestrasDto->getidOfendidoMuestra(),"utf8"):strtoupper($TomamuestrasDto->getidOfendidoMuestra()))))));
if($this->esFecha($TomamuestrasDto->getidOfendidoMuestra())){
$TomamuestrasDto->setidOfendidoMuestra($this->fechaMysql($TomamuestrasDto->getidOfendidoMuestra()));
}
$TomamuestrasDto->setcveMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TomamuestrasDto->getcveMuestra(),"utf8"):strtoupper($TomamuestrasDto->getcveMuestra()))))));
if($this->esFecha($TomamuestrasDto->getcveMuestra())){
$TomamuestrasDto->setcveMuestra($this->fechaMysql($TomamuestrasDto->getcveMuestra()));
}
return $TomamuestrasDto;
}
public function selectTomamuestras($TomamuestrasDto){
$TomamuestrasDto=$this->validarTomamuestras($TomamuestrasDto);
$TomamuestrasController = new TomamuestrasController();
$TomamuestrasDto = $TomamuestrasController->selectTomamuestras($TomamuestrasDto);
if($TomamuestrasDto!=""){
$dtoToJson = new DtoToJson($TomamuestrasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTomamuestras($TomamuestrasDto){
$TomamuestrasDto=$this->validarTomamuestras($TomamuestrasDto);
$TomamuestrasController = new TomamuestrasController();
$TomamuestrasDto = $TomamuestrasController->insertTomamuestras($TomamuestrasDto);
if($TomamuestrasDto!=""){
$dtoToJson = new DtoToJson($TomamuestrasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTomamuestras($TomamuestrasDto){
$TomamuestrasDto=$this->validarTomamuestras($TomamuestrasDto);
$TomamuestrasController = new TomamuestrasController();
$TomamuestrasDto = $TomamuestrasController->updateTomamuestras($TomamuestrasDto);
if($TomamuestrasDto!=""){
$dtoToJson = new DtoToJson($TomamuestrasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTomamuestras($TomamuestrasDto){
$TomamuestrasDto=$this->validarTomamuestras($TomamuestrasDto);
$TomamuestrasController = new TomamuestrasController();
$TomamuestrasDto = $TomamuestrasController->deleteTomamuestras($TomamuestrasDto);
if($TomamuestrasDto==true){
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



@$idTomaMuestra=$_POST["idTomaMuestra"];
@$idSolicitudMuestra=$_POST["idSolicitudMuestra"];
@$idImputadoMuestra=$_POST["idImputadoMuestra"];
@$idOfendidoMuestra=$_POST["idOfendidoMuestra"];
@$cveMuestra=$_POST["cveMuestra"];
@$accion=$_POST["accion"];

$tomamuestrasFacade = new TomamuestrasFacade();
$tomamuestrasDto = new TomamuestrasDTO();

$tomamuestrasDto->setIdTomaMuestra($idTomaMuestra);
$tomamuestrasDto->setIdSolicitudMuestra($idSolicitudMuestra);
$tomamuestrasDto->setIdImputadoMuestra($idImputadoMuestra);
$tomamuestrasDto->setIdOfendidoMuestra($idOfendidoMuestra);
$tomamuestrasDto->setCveMuestra($cveMuestra);

if( ($accion=="guardar") && ($idTomaMuestra=="") ){
$tomamuestrasDto=$tomamuestrasFacade->insertTomamuestras($tomamuestrasDto);
echo $tomamuestrasDto;
} else if(($accion=="guardar") && ($idTomaMuestra!="")){
$tomamuestrasDto=$tomamuestrasFacade->updateTomamuestras($tomamuestrasDto);
echo $tomamuestrasDto;
} else if($accion=="consultar"){
$tomamuestrasDto=$tomamuestrasFacade->selectTomamuestras($tomamuestrasDto);
echo $tomamuestrasDto;
} else if( ($accion=="baja") && ($idTomaMuestra!="") ){
$tomamuestrasDto=$tomamuestrasFacade->deleteTomamuestras($tomamuestrasDto);
echo $tomamuestrasDto;
} else if( ($accion=="seleccionar") && ($idTomaMuestra!="") ){
$tomamuestrasDto=$tomamuestrasFacade->selectTomamuestras($tomamuestrasDto);
echo $tomamuestrasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>