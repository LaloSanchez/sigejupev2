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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitosexhortos/DelitosexhortosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/delitosexhortos/DelitosexhortosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class DelitosexhortosFacade {
private $proveedor;
public function __construct() {
}
public function validarDelitosexhortos($DelitosexhortosDto){
$DelitosexhortosDto->setidDelitoExhorto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosexhortosDto->getidDelitoExhorto(),"utf8"):strtoupper($DelitosexhortosDto->getidDelitoExhorto()))))));
if($this->esFecha($DelitosexhortosDto->getidDelitoExhorto())){
$DelitosexhortosDto->setidDelitoExhorto($this->fechaMysql($DelitosexhortosDto->getidDelitoExhorto()));
}
$DelitosexhortosDto->setidExhorto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosexhortosDto->getidExhorto(),"utf8"):strtoupper($DelitosexhortosDto->getidExhorto()))))));
if($this->esFecha($DelitosexhortosDto->getidExhorto())){
$DelitosexhortosDto->setidExhorto($this->fechaMysql($DelitosexhortosDto->getidExhorto()));
}
$DelitosexhortosDto->setcveDelito(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosexhortosDto->getcveDelito(),"utf8"):strtoupper($DelitosexhortosDto->getcveDelito()))))));
if($this->esFecha($DelitosexhortosDto->getcveDelito())){
$DelitosexhortosDto->setcveDelito($this->fechaMysql($DelitosexhortosDto->getcveDelito()));
}
$DelitosexhortosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosexhortosDto->getfechaRegistro(),"utf8"):strtoupper($DelitosexhortosDto->getfechaRegistro()))))));
if($this->esFecha($DelitosexhortosDto->getfechaRegistro())){
$DelitosexhortosDto->setfechaRegistro($this->fechaMysql($DelitosexhortosDto->getfechaRegistro()));
}
$DelitosexhortosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosexhortosDto->getfechaActualizacion(),"utf8"):strtoupper($DelitosexhortosDto->getfechaActualizacion()))))));
if($this->esFecha($DelitosexhortosDto->getfechaActualizacion())){
$DelitosexhortosDto->setfechaActualizacion($this->fechaMysql($DelitosexhortosDto->getfechaActualizacion()));
}
return $DelitosexhortosDto;
}
public function selectDelitosexhortos($DelitosexhortosDto){
$DelitosexhortosDto=$this->validarDelitosexhortos($DelitosexhortosDto);
$DelitosexhortosController = new DelitosexhortosController();
$DelitosexhortosDto = $DelitosexhortosController->selectDelitosexhortos($DelitosexhortosDto);
if($DelitosexhortosDto!=""){
$dtoToJson = new DtoToJson($DelitosexhortosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertDelitosexhortos($DelitosexhortosDto){
$DelitosexhortosDto=$this->validarDelitosexhortos($DelitosexhortosDto);
$DelitosexhortosController = new DelitosexhortosController();
$DelitosexhortosDto = $DelitosexhortosController->insertDelitosexhortos($DelitosexhortosDto);
if($DelitosexhortosDto!=""){
$dtoToJson = new DtoToJson($DelitosexhortosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateDelitosexhortos($DelitosexhortosDto){
$DelitosexhortosDto=$this->validarDelitosexhortos($DelitosexhortosDto);
$DelitosexhortosController = new DelitosexhortosController();
$DelitosexhortosDto = $DelitosexhortosController->updateDelitosexhortos($DelitosexhortosDto);
if($DelitosexhortosDto!=""){
$dtoToJson = new DtoToJson($DelitosexhortosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteDelitosexhortos($DelitosexhortosDto){
$DelitosexhortosDto=$this->validarDelitosexhortos($DelitosexhortosDto);
$DelitosexhortosController = new DelitosexhortosController();
$DelitosexhortosDto = $DelitosexhortosController->deleteDelitosexhortos($DelitosexhortosDto);
if($DelitosexhortosDto==true){
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



@$idDelitoExhorto=$_POST["idDelitoExhorto"];
@$idExhorto=$_POST["idExhorto"];
@$cveDelito=$_POST["cveDelito"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$delitosexhortosFacade = new DelitosexhortosFacade();
$delitosexhortosDto = new DelitosexhortosDTO();

$delitosexhortosDto->setIdDelitoExhorto($idDelitoExhorto);
$delitosexhortosDto->setIdExhorto($idExhorto);
$delitosexhortosDto->setCveDelito($cveDelito);
$delitosexhortosDto->setFechaRegistro($fechaRegistro);
$delitosexhortosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idDelitoExhorto=="") ){
$delitosexhortosDto=$delitosexhortosFacade->insertDelitosexhortos($delitosexhortosDto);
echo $delitosexhortosDto;
} else if(($accion=="guardar") && ($idDelitoExhorto!="")){
$delitosexhortosDto=$delitosexhortosFacade->updateDelitosexhortos($delitosexhortosDto);
echo $delitosexhortosDto;
} else if($accion=="consultar"){
$delitosexhortosDto=$delitosexhortosFacade->selectDelitosexhortos($delitosexhortosDto);
echo $delitosexhortosDto;
} else if( ($accion=="baja") && ($idDelitoExhorto!="") ){
$delitosexhortosDto=$delitosexhortosFacade->deleteDelitosexhortos($delitosexhortosDto);
echo $delitosexhortosDto;
} else if( ($accion=="seleccionar") && ($idDelitoExhorto!="") ){
$delitosexhortosDto=$delitosexhortosFacade->selectDelitosexhortos($delitosexhortosDto);
echo $delitosexhortosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>