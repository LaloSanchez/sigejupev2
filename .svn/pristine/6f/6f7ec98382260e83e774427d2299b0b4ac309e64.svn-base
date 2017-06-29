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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/efectossexualescarpetas/EfectossexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/efectossexualescarpetas/EfectossexualescarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class EfectossexualescarpetasFacade {
private $proveedor;
public function __construct() {
}
public function validarEfectossexualescarpetas($EfectossexualescarpetasDto){
$EfectossexualescarpetasDto->setidEfectoSexualCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectossexualescarpetasDto->getidEfectoSexualCarpeta(),"utf8"):strtoupper($EfectossexualescarpetasDto->getidEfectoSexualCarpeta()))))));
if($this->esFecha($EfectossexualescarpetasDto->getidEfectoSexualCarpeta())){
$EfectossexualescarpetasDto->setidEfectoSexualCarpeta($this->fechaMysql($EfectossexualescarpetasDto->getidEfectoSexualCarpeta()));
}
$EfectossexualescarpetasDto->setcveDetalleEfecto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectossexualescarpetasDto->getcveDetalleEfecto(),"utf8"):strtoupper($EfectossexualescarpetasDto->getcveDetalleEfecto()))))));
if($this->esFecha($EfectossexualescarpetasDto->getcveDetalleEfecto())){
$EfectossexualescarpetasDto->setcveDetalleEfecto($this->fechaMysql($EfectossexualescarpetasDto->getcveDetalleEfecto()));
}
$EfectossexualescarpetasDto->setidSexualCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectossexualescarpetasDto->getidSexualCarpeta(),"utf8"):strtoupper($EfectossexualescarpetasDto->getidSexualCarpeta()))))));
if($this->esFecha($EfectossexualescarpetasDto->getidSexualCarpeta())){
$EfectossexualescarpetasDto->setidSexualCarpeta($this->fechaMysql($EfectossexualescarpetasDto->getidSexualCarpeta()));
}
$EfectossexualescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectossexualescarpetasDto->getfechaRegistro(),"utf8"):strtoupper($EfectossexualescarpetasDto->getfechaRegistro()))))));
if($this->esFecha($EfectossexualescarpetasDto->getfechaRegistro())){
$EfectossexualescarpetasDto->setfechaRegistro($this->fechaMysql($EfectossexualescarpetasDto->getfechaRegistro()));
}
$EfectossexualescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectossexualescarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($EfectossexualescarpetasDto->getfechaActualizacion()))))));
if($this->esFecha($EfectossexualescarpetasDto->getfechaActualizacion())){
$EfectossexualescarpetasDto->setfechaActualizacion($this->fechaMysql($EfectossexualescarpetasDto->getfechaActualizacion()));
}
return $EfectossexualescarpetasDto;
}
public function selectEfectossexualescarpetas($EfectossexualescarpetasDto){
$EfectossexualescarpetasDto=$this->validarEfectossexualescarpetas($EfectossexualescarpetasDto);
$EfectossexualescarpetasController = new EfectossexualescarpetasController();
$EfectossexualescarpetasDto = $EfectossexualescarpetasController->selectEfectossexualescarpetas($EfectossexualescarpetasDto);
if($EfectossexualescarpetasDto!=""){
$dtoToJson = new DtoToJson($EfectossexualescarpetasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertEfectossexualescarpetas($EfectossexualescarpetasDto){
$EfectossexualescarpetasDto=$this->validarEfectossexualescarpetas($EfectossexualescarpetasDto);
$EfectossexualescarpetasController = new EfectossexualescarpetasController();
$EfectossexualescarpetasDto = $EfectossexualescarpetasController->insertEfectossexualescarpetas($EfectossexualescarpetasDto);
if($EfectossexualescarpetasDto!=""){
$dtoToJson = new DtoToJson($EfectossexualescarpetasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateEfectossexualescarpetas($EfectossexualescarpetasDto){
$EfectossexualescarpetasDto=$this->validarEfectossexualescarpetas($EfectossexualescarpetasDto);
$EfectossexualescarpetasController = new EfectossexualescarpetasController();
$EfectossexualescarpetasDto = $EfectossexualescarpetasController->updateEfectossexualescarpetas($EfectossexualescarpetasDto);
if($EfectossexualescarpetasDto!=""){
$dtoToJson = new DtoToJson($EfectossexualescarpetasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteEfectossexualescarpetas($EfectossexualescarpetasDto){
$EfectossexualescarpetasDto=$this->validarEfectossexualescarpetas($EfectossexualescarpetasDto);
$EfectossexualescarpetasController = new EfectossexualescarpetasController();
$EfectossexualescarpetasDto = $EfectossexualescarpetasController->deleteEfectossexualescarpetas($EfectossexualescarpetasDto);
if($EfectossexualescarpetasDto==true){
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



@$idEfectoSexualCarpeta=$_POST["idEfectoSexualCarpeta"];
@$cveDetalleEfecto=$_POST["cveDetalleEfecto"];
@$idSexualCarpeta=$_POST["idSexualCarpeta"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$efectossexualescarpetasFacade = new EfectossexualescarpetasFacade();
$efectossexualescarpetasDto = new EfectossexualescarpetasDTO();

$efectossexualescarpetasDto->setIdEfectoSexualCarpeta($idEfectoSexualCarpeta);
$efectossexualescarpetasDto->setCveDetalleEfecto($cveDetalleEfecto);
$efectossexualescarpetasDto->setIdSexualCarpeta($idSexualCarpeta);
$efectossexualescarpetasDto->setFechaRegistro($fechaRegistro);
$efectossexualescarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idEfectoSexualCarpeta=="") ){
$efectossexualescarpetasDto=$efectossexualescarpetasFacade->insertEfectossexualescarpetas($efectossexualescarpetasDto);
echo $efectossexualescarpetasDto;
} else if(($accion=="guardar") && ($idEfectoSexualCarpeta!="")){
$efectossexualescarpetasDto=$efectossexualescarpetasFacade->updateEfectossexualescarpetas($efectossexualescarpetasDto);
echo $efectossexualescarpetasDto;
} else if($accion=="consultar"){
$efectossexualescarpetasDto=$efectossexualescarpetasFacade->selectEfectossexualescarpetas($efectossexualescarpetasDto);
echo $efectossexualescarpetasDto;
} else if( ($accion=="baja") && ($idEfectoSexualCarpeta!="") ){
$efectossexualescarpetasDto=$efectossexualescarpetasFacade->deleteEfectossexualescarpetas($efectossexualescarpetasDto);
echo $efectossexualescarpetasDto;
} else if( ($accion=="seleccionar") && ($idEfectoSexualCarpeta!="") ){
$efectossexualescarpetasDto=$efectossexualescarpetasFacade->selectEfectossexualescarpetas($efectossexualescarpetasDto);
echo $efectossexualescarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>