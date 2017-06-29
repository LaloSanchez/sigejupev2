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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/detallesconductas/DetallesconductasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/detallesconductas/DetallesconductasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class DetallesconductasFacade {
private $proveedor;
public function __construct() {
}
public function validarDetallesconductas($DetallesconductasDto){
$DetallesconductasDto->setcveDetalleConducta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesconductasDto->getcveDetalleConducta(),"utf8"):strtoupper($DetallesconductasDto->getcveDetalleConducta()))))));
if($this->esFecha($DetallesconductasDto->getcveDetalleConducta())){
$DetallesconductasDto->setcveDetalleConducta($this->fechaMysql($DetallesconductasDto->getcveDetalleConducta()));
}
$DetallesconductasDto->setcveConducta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesconductasDto->getcveConducta(),"utf8"):strtoupper($DetallesconductasDto->getcveConducta()))))));
if($this->esFecha($DetallesconductasDto->getcveConducta())){
$DetallesconductasDto->setcveConducta($this->fechaMysql($DetallesconductasDto->getcveConducta()));
}
$DetallesconductasDto->setdesDetalleConducta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesconductasDto->getdesDetalleConducta(),"utf8"):strtoupper($DetallesconductasDto->getdesDetalleConducta()))))));
if($this->esFecha($DetallesconductasDto->getdesDetalleConducta())){
$DetallesconductasDto->setdesDetalleConducta($this->fechaMysql($DetallesconductasDto->getdesDetalleConducta()));
}
$DetallesconductasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesconductasDto->getactivo(),"utf8"):strtoupper($DetallesconductasDto->getactivo()))))));
if($this->esFecha($DetallesconductasDto->getactivo())){
$DetallesconductasDto->setactivo($this->fechaMysql($DetallesconductasDto->getactivo()));
}
$DetallesconductasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesconductasDto->getfechaRegistro(),"utf8"):strtoupper($DetallesconductasDto->getfechaRegistro()))))));
if($this->esFecha($DetallesconductasDto->getfechaRegistro())){
$DetallesconductasDto->setfechaRegistro($this->fechaMysql($DetallesconductasDto->getfechaRegistro()));
}
$DetallesconductasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallesconductasDto->getfechaActualizacion(),"utf8"):strtoupper($DetallesconductasDto->getfechaActualizacion()))))));
if($this->esFecha($DetallesconductasDto->getfechaActualizacion())){
$DetallesconductasDto->setfechaActualizacion($this->fechaMysql($DetallesconductasDto->getfechaActualizacion()));
}
return $DetallesconductasDto;
}
public function selectDetallesconductas($DetallesconductasDto){
$DetallesconductasDto=$this->validarDetallesconductas($DetallesconductasDto);
$DetallesconductasController = new DetallesconductasController();
$DetallesconductasDto = $DetallesconductasController->selectDetallesconductas($DetallesconductasDto);
if($DetallesconductasDto!=""){
$dtoToJson = new DtoToJson($DetallesconductasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertDetallesconductas($DetallesconductasDto){
$DetallesconductasDto=$this->validarDetallesconductas($DetallesconductasDto);
$DetallesconductasController = new DetallesconductasController();
$DetallesconductasDto = $DetallesconductasController->insertDetallesconductas($DetallesconductasDto);
if($DetallesconductasDto!=""){
$dtoToJson = new DtoToJson($DetallesconductasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateDetallesconductas($DetallesconductasDto){
$DetallesconductasDto=$this->validarDetallesconductas($DetallesconductasDto);
$DetallesconductasController = new DetallesconductasController();
$DetallesconductasDto = $DetallesconductasController->updateDetallesconductas($DetallesconductasDto);
if($DetallesconductasDto!=""){
$dtoToJson = new DtoToJson($DetallesconductasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteDetallesconductas($DetallesconductasDto){
$DetallesconductasDto=$this->validarDetallesconductas($DetallesconductasDto);
$DetallesconductasController = new DetallesconductasController();
$DetallesconductasDto = $DetallesconductasController->deleteDetallesconductas($DetallesconductasDto);
if($DetallesconductasDto==true){
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



@$cveDetalleConducta=$_POST["cveDetalleConducta"];
@$cveConducta=$_POST["cveConducta"];
@$desDetalleConducta=$_POST["desDetalleConducta"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$detallesconductasFacade = new DetallesconductasFacade();
$detallesconductasDto = new DetallesconductasDTO();

$detallesconductasDto->setCveDetalleConducta($cveDetalleConducta);
$detallesconductasDto->setCveConducta($cveConducta);
$detallesconductasDto->setDesDetalleConducta($desDetalleConducta);
$detallesconductasDto->setActivo($activo);
$detallesconductasDto->setFechaRegistro($fechaRegistro);
$detallesconductasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveDetalleConducta=="") ){
$detallesconductasDto=$detallesconductasFacade->insertDetallesconductas($detallesconductasDto);
echo $detallesconductasDto;
} else if(($accion=="guardar") && ($cveDetalleConducta!="")){
$detallesconductasDto=$detallesconductasFacade->updateDetallesconductas($detallesconductasDto);
echo $detallesconductasDto;
} else if($accion=="consultar"){
$detallesconductasDto=$detallesconductasFacade->selectDetallesconductas($detallesconductasDto);
echo $detallesconductasDto;
} else if( ($accion=="baja") && ($cveDetalleConducta!="") ){
$detallesconductasDto=$detallesconductasFacade->deleteDetallesconductas($detallesconductasDto);
echo $detallesconductasDto;
} else if( ($accion=="seleccionar") && ($cveDetalleConducta!="") ){
$detallesconductasDto=$detallesconductasFacade->selectDetallesconductas($detallesconductasDto);
echo $detallesconductasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>