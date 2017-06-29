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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/reclusosdelitos/ReclusosdelitosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/reclusosdelitos/ReclusosdelitosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ReclusosdelitosFacade {
private $proveedor;
public function __construct() {
}
public function validarReclusosdelitos($ReclusosdelitosDto){
$ReclusosdelitosDto->setidReclusoDelito(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ReclusosdelitosDto->getidReclusoDelito(),"utf8"):strtoupper($ReclusosdelitosDto->getidReclusoDelito()))))));
if($this->esFecha($ReclusosdelitosDto->getidReclusoDelito())){
$ReclusosdelitosDto->setidReclusoDelito($this->fechaMysql($ReclusosdelitosDto->getidReclusoDelito()));
}
$ReclusosdelitosDto->setcveDelito(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ReclusosdelitosDto->getcveDelito(),"utf8"):strtoupper($ReclusosdelitosDto->getcveDelito()))))));
if($this->esFecha($ReclusosdelitosDto->getcveDelito())){
$ReclusosdelitosDto->setcveDelito($this->fechaMysql($ReclusosdelitosDto->getcveDelito()));
}
$ReclusosdelitosDto->setidRecluso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ReclusosdelitosDto->getidRecluso(),"utf8"):strtoupper($ReclusosdelitosDto->getidRecluso()))))));
if($this->esFecha($ReclusosdelitosDto->getidRecluso())){
$ReclusosdelitosDto->setidRecluso($this->fechaMysql($ReclusosdelitosDto->getidRecluso()));
}
$ReclusosdelitosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ReclusosdelitosDto->getactivo(),"utf8"):strtoupper($ReclusosdelitosDto->getactivo()))))));
if($this->esFecha($ReclusosdelitosDto->getactivo())){
$ReclusosdelitosDto->setactivo($this->fechaMysql($ReclusosdelitosDto->getactivo()));
}
$ReclusosdelitosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ReclusosdelitosDto->getfechaRegistro(),"utf8"):strtoupper($ReclusosdelitosDto->getfechaRegistro()))))));
if($this->esFecha($ReclusosdelitosDto->getfechaRegistro())){
$ReclusosdelitosDto->setfechaRegistro($this->fechaMysql($ReclusosdelitosDto->getfechaRegistro()));
}
$ReclusosdelitosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ReclusosdelitosDto->getfechaActualizacion(),"utf8"):strtoupper($ReclusosdelitosDto->getfechaActualizacion()))))));
if($this->esFecha($ReclusosdelitosDto->getfechaActualizacion())){
$ReclusosdelitosDto->setfechaActualizacion($this->fechaMysql($ReclusosdelitosDto->getfechaActualizacion()));
}
return $ReclusosdelitosDto;
}
public function selectReclusosdelitos($ReclusosdelitosDto){
$ReclusosdelitosDto=$this->validarReclusosdelitos($ReclusosdelitosDto);
$ReclusosdelitosController = new ReclusosdelitosController();
$ReclusosdelitosDto = $ReclusosdelitosController->selectReclusosdelitos($ReclusosdelitosDto);
if($ReclusosdelitosDto!=""){
$dtoToJson = new DtoToJson($ReclusosdelitosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertReclusosdelitos($ReclusosdelitosDto){
$ReclusosdelitosDto=$this->validarReclusosdelitos($ReclusosdelitosDto);
$ReclusosdelitosController = new ReclusosdelitosController();
$ReclusosdelitosDto = $ReclusosdelitosController->insertReclusosdelitos($ReclusosdelitosDto);
if($ReclusosdelitosDto!=""){
$dtoToJson = new DtoToJson($ReclusosdelitosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateReclusosdelitos($ReclusosdelitosDto){
$ReclusosdelitosDto=$this->validarReclusosdelitos($ReclusosdelitosDto);
$ReclusosdelitosController = new ReclusosdelitosController();
$ReclusosdelitosDto = $ReclusosdelitosController->updateReclusosdelitos($ReclusosdelitosDto);
if($ReclusosdelitosDto!=""){
$dtoToJson = new DtoToJson($ReclusosdelitosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteReclusosdelitos($ReclusosdelitosDto){
$ReclusosdelitosDto=$this->validarReclusosdelitos($ReclusosdelitosDto);
$ReclusosdelitosController = new ReclusosdelitosController();
$ReclusosdelitosDto = $ReclusosdelitosController->deleteReclusosdelitos($ReclusosdelitosDto);
if($ReclusosdelitosDto==true){
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



@$idReclusoDelito=$_POST["idReclusoDelito"];
@$cveDelito=$_POST["cveDelito"];
@$idRecluso=$_POST["idRecluso"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$reclusosdelitosFacade = new ReclusosdelitosFacade();
$reclusosdelitosDto = new ReclusosdelitosDTO();

$reclusosdelitosDto->setIdReclusoDelito($idReclusoDelito);
$reclusosdelitosDto->setCveDelito($cveDelito);
$reclusosdelitosDto->setIdRecluso($idRecluso);
$reclusosdelitosDto->setActivo($activo);
$reclusosdelitosDto->setFechaRegistro($fechaRegistro);
$reclusosdelitosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idReclusoDelito=="") ){
$reclusosdelitosDto=$reclusosdelitosFacade->insertReclusosdelitos($reclusosdelitosDto);
echo $reclusosdelitosDto;
} else if(($accion=="guardar") && ($idReclusoDelito!="")){
$reclusosdelitosDto=$reclusosdelitosFacade->updateReclusosdelitos($reclusosdelitosDto);
echo $reclusosdelitosDto;
} else if($accion=="consultar"){
$reclusosdelitosDto=$reclusosdelitosFacade->selectReclusosdelitos($reclusosdelitosDto);
echo $reclusosdelitosDto;
} else if( ($accion=="baja") && ($idReclusoDelito!="") ){
$reclusosdelitosDto=$reclusosdelitosFacade->deleteReclusosdelitos($reclusosdelitosDto);
echo $reclusosdelitosDto;
} else if( ($accion=="seleccionar") && ($idReclusoDelito!="") ){
$reclusosdelitosDto=$reclusosdelitosFacade->selectReclusosdelitos($reclusosdelitosDto);
echo $reclusosdelitosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>