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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/efectossexuales/EfectossexualesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/efectossexuales/EfectossexualesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class EfectossexualesFacade {
private $proveedor;
public function __construct() {
}
public function validarEfectossexuales($EfectossexualesDto){
$EfectossexualesDto->setidEfectoSexual(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectossexualesDto->getidEfectoSexual(),"utf8"):strtoupper($EfectossexualesDto->getidEfectoSexual()))))));
if($this->esFecha($EfectossexualesDto->getidEfectoSexual())){
$EfectossexualesDto->setidEfectoSexual($this->fechaMysql($EfectossexualesDto->getidEfectoSexual()));
}
$EfectossexualesDto->setcveDetalleEfecto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectossexualesDto->getcveDetalleEfecto(),"utf8"):strtoupper($EfectossexualesDto->getcveDetalleEfecto()))))));
if($this->esFecha($EfectossexualesDto->getcveDetalleEfecto())){
$EfectossexualesDto->setcveDetalleEfecto($this->fechaMysql($EfectossexualesDto->getcveDetalleEfecto()));
}
$EfectossexualesDto->setidSexual(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectossexualesDto->getidSexual(),"utf8"):strtoupper($EfectossexualesDto->getidSexual()))))));
if($this->esFecha($EfectossexualesDto->getidSexual())){
$EfectossexualesDto->setidSexual($this->fechaMysql($EfectossexualesDto->getidSexual()));
}
$EfectossexualesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectossexualesDto->getfechaRegistro(),"utf8"):strtoupper($EfectossexualesDto->getfechaRegistro()))))));
if($this->esFecha($EfectossexualesDto->getfechaRegistro())){
$EfectossexualesDto->setfechaRegistro($this->fechaMysql($EfectossexualesDto->getfechaRegistro()));
}
$EfectossexualesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectossexualesDto->getfechaActualizacion(),"utf8"):strtoupper($EfectossexualesDto->getfechaActualizacion()))))));
if($this->esFecha($EfectossexualesDto->getfechaActualizacion())){
$EfectossexualesDto->setfechaActualizacion($this->fechaMysql($EfectossexualesDto->getfechaActualizacion()));
}
return $EfectossexualesDto;
}
public function selectEfectossexuales($EfectossexualesDto){
$EfectossexualesDto=$this->validarEfectossexuales($EfectossexualesDto);
$EfectossexualesController = new EfectossexualesController();
$EfectossexualesDto = $EfectossexualesController->selectEfectossexuales($EfectossexualesDto);
if($EfectossexualesDto!=""){
$dtoToJson = new DtoToJson($EfectossexualesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertEfectossexuales($EfectossexualesDto){
$EfectossexualesDto=$this->validarEfectossexuales($EfectossexualesDto);
$EfectossexualesController = new EfectossexualesController();
$EfectossexualesDto = $EfectossexualesController->insertEfectossexuales($EfectossexualesDto);
if($EfectossexualesDto!=""){
$dtoToJson = new DtoToJson($EfectossexualesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateEfectossexuales($EfectossexualesDto){
$EfectossexualesDto=$this->validarEfectossexuales($EfectossexualesDto);
$EfectossexualesController = new EfectossexualesController();
$EfectossexualesDto = $EfectossexualesController->updateEfectossexuales($EfectossexualesDto);
if($EfectossexualesDto!=""){
$dtoToJson = new DtoToJson($EfectossexualesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteEfectossexuales($EfectossexualesDto){
$EfectossexualesDto=$this->validarEfectossexuales($EfectossexualesDto);
$EfectossexualesController = new EfectossexualesController();
$EfectossexualesDto = $EfectossexualesController->deleteEfectossexuales($EfectossexualesDto);
if($EfectossexualesDto==true){
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



@$idEfectoSexual=$_POST["idEfectoSexual"];
@$cveDetalleEfecto=$_POST["cveDetalleEfecto"];
@$idSexual=$_POST["idSexual"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$efectossexualesFacade = new EfectossexualesFacade();
$efectossexualesDto = new EfectossexualesDTO();

$efectossexualesDto->setIdEfectoSexual($idEfectoSexual);
$efectossexualesDto->setCveDetalleEfecto($cveDetalleEfecto);
$efectossexualesDto->setIdSexual($idSexual);
$efectossexualesDto->setFechaRegistro($fechaRegistro);
$efectossexualesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idEfectoSexual=="") ){
$efectossexualesDto=$efectossexualesFacade->insertEfectossexuales($efectossexualesDto);
echo $efectossexualesDto;
} else if(($accion=="guardar") && ($idEfectoSexual!="")){
$efectossexualesDto=$efectossexualesFacade->updateEfectossexuales($efectossexualesDto);
echo $efectossexualesDto;
} else if($accion=="consultar"){
$efectossexualesDto=$efectossexualesFacade->selectEfectossexuales($efectossexualesDto);
echo $efectossexualesDto;
} else if( ($accion=="baja") && ($idEfectoSexual!="") ){
$efectossexualesDto=$efectossexualesFacade->deleteEfectossexuales($efectossexualesDto);
echo $efectossexualesDto;
} else if( ($accion=="seleccionar") && ($idEfectoSexual!="") ){
$efectossexualesDto=$efectossexualesFacade->selectEfectossexuales($efectossexualesDto);
echo $efectossexualesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>