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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/sexualesconductascarpetas/SexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/sexualesconductascarpetas/SexualesconductascarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class SexualesconductascarpetasFacade {
private $proveedor;
public function __construct() {
}
public function validarSexualesconductascarpetas($SexualesconductascarpetasDto){
$SexualesconductascarpetasDto->setidSexualConductaCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SexualesconductascarpetasDto->getidSexualConductaCarpeta(),"utf8"):strtoupper($SexualesconductascarpetasDto->getidSexualConductaCarpeta()))))));
if($this->esFecha($SexualesconductascarpetasDto->getidSexualConductaCarpeta())){
$SexualesconductascarpetasDto->setidSexualConductaCarpeta($this->fechaMysql($SexualesconductascarpetasDto->getidSexualConductaCarpeta()));
}
$SexualesconductascarpetasDto->setidSexualCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SexualesconductascarpetasDto->getidSexualCarpeta(),"utf8"):strtoupper($SexualesconductascarpetasDto->getidSexualCarpeta()))))));
if($this->esFecha($SexualesconductascarpetasDto->getidSexualCarpeta())){
$SexualesconductascarpetasDto->setidSexualCarpeta($this->fechaMysql($SexualesconductascarpetasDto->getidSexualCarpeta()));
}
$SexualesconductascarpetasDto->setcveConducta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SexualesconductascarpetasDto->getcveConducta(),"utf8"):strtoupper($SexualesconductascarpetasDto->getcveConducta()))))));
if($this->esFecha($SexualesconductascarpetasDto->getcveConducta())){
$SexualesconductascarpetasDto->setcveConducta($this->fechaMysql($SexualesconductascarpetasDto->getcveConducta()));
}
$SexualesconductascarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SexualesconductascarpetasDto->getfechaRegistro(),"utf8"):strtoupper($SexualesconductascarpetasDto->getfechaRegistro()))))));
if($this->esFecha($SexualesconductascarpetasDto->getfechaRegistro())){
$SexualesconductascarpetasDto->setfechaRegistro($this->fechaMysql($SexualesconductascarpetasDto->getfechaRegistro()));
}
$SexualesconductascarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SexualesconductascarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($SexualesconductascarpetasDto->getfechaActualizacion()))))));
if($this->esFecha($SexualesconductascarpetasDto->getfechaActualizacion())){
$SexualesconductascarpetasDto->setfechaActualizacion($this->fechaMysql($SexualesconductascarpetasDto->getfechaActualizacion()));
}
return $SexualesconductascarpetasDto;
}
public function selectSexualesconductascarpetas($SexualesconductascarpetasDto){
$SexualesconductascarpetasDto=$this->validarSexualesconductascarpetas($SexualesconductascarpetasDto);
$SexualesconductascarpetasController = new SexualesconductascarpetasController();
$SexualesconductascarpetasDto = $SexualesconductascarpetasController->selectSexualesconductascarpetas($SexualesconductascarpetasDto);
if($SexualesconductascarpetasDto!=""){
$dtoToJson = new DtoToJson($SexualesconductascarpetasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertSexualesconductascarpetas($SexualesconductascarpetasDto){
$SexualesconductascarpetasDto=$this->validarSexualesconductascarpetas($SexualesconductascarpetasDto);
$SexualesconductascarpetasController = new SexualesconductascarpetasController();
$SexualesconductascarpetasDto = $SexualesconductascarpetasController->insertSexualesconductascarpetas($SexualesconductascarpetasDto);
if($SexualesconductascarpetasDto!=""){
$dtoToJson = new DtoToJson($SexualesconductascarpetasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateSexualesconductascarpetas($SexualesconductascarpetasDto){
$SexualesconductascarpetasDto=$this->validarSexualesconductascarpetas($SexualesconductascarpetasDto);
$SexualesconductascarpetasController = new SexualesconductascarpetasController();
$SexualesconductascarpetasDto = $SexualesconductascarpetasController->updateSexualesconductascarpetas($SexualesconductascarpetasDto);
if($SexualesconductascarpetasDto!=""){
$dtoToJson = new DtoToJson($SexualesconductascarpetasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteSexualesconductascarpetas($SexualesconductascarpetasDto){
$SexualesconductascarpetasDto=$this->validarSexualesconductascarpetas($SexualesconductascarpetasDto);
$SexualesconductascarpetasController = new SexualesconductascarpetasController();
$SexualesconductascarpetasDto = $SexualesconductascarpetasController->deleteSexualesconductascarpetas($SexualesconductascarpetasDto);
if($SexualesconductascarpetasDto==true){
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



@$idSexualConductaCarpeta=$_POST["idSexualConductaCarpeta"];
@$idSexualCarpeta=$_POST["idSexualCarpeta"];
@$cveConducta=$_POST["cveConducta"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$sexualesconductascarpetasFacade = new SexualesconductascarpetasFacade();
$sexualesconductascarpetasDto = new SexualesconductascarpetasDTO();

$sexualesconductascarpetasDto->setIdSexualConductaCarpeta($idSexualConductaCarpeta);
$sexualesconductascarpetasDto->setIdSexualCarpeta($idSexualCarpeta);
$sexualesconductascarpetasDto->setCveConducta($cveConducta);
$sexualesconductascarpetasDto->setFechaRegistro($fechaRegistro);
$sexualesconductascarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idSexualConductaCarpeta=="") ){
$sexualesconductascarpetasDto=$sexualesconductascarpetasFacade->insertSexualesconductascarpetas($sexualesconductascarpetasDto);
echo $sexualesconductascarpetasDto;
} else if(($accion=="guardar") && ($idSexualConductaCarpeta!="")){
$sexualesconductascarpetasDto=$sexualesconductascarpetasFacade->updateSexualesconductascarpetas($sexualesconductascarpetasDto);
echo $sexualesconductascarpetasDto;
} else if($accion=="consultar"){
$sexualesconductascarpetasDto=$sexualesconductascarpetasFacade->selectSexualesconductascarpetas($sexualesconductascarpetasDto);
echo $sexualesconductascarpetasDto;
} else if( ($accion=="baja") && ($idSexualConductaCarpeta!="") ){
$sexualesconductascarpetasDto=$sexualesconductascarpetasFacade->deleteSexualesconductascarpetas($sexualesconductascarpetasDto);
echo $sexualesconductascarpetasDto;
} else if( ($accion=="seleccionar") && ($idSexualConductaCarpeta!="") ){
$sexualesconductascarpetasDto=$sexualesconductascarpetasFacade->selectSexualesconductascarpetas($sexualesconductascarpetasDto);
echo $sexualesconductascarpetasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>