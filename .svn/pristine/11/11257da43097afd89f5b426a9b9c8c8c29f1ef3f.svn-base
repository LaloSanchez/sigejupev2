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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ambitosacosos/AmbitosacososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ambitosacosos/AmbitosacososController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class AmbitosacososFacade {
private $proveedor;
public function __construct() {
}
public function validarAmbitosacosos($AmbitosacososDto){
$AmbitosacososDto->setcveAmbitoAcoso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AmbitosacososDto->getcveAmbitoAcoso(),"utf8"):strtoupper($AmbitosacososDto->getcveAmbitoAcoso()))))));
if($this->esFecha($AmbitosacososDto->getcveAmbitoAcoso())){
$AmbitosacososDto->setcveAmbitoAcoso($this->fechaMysql($AmbitosacososDto->getcveAmbitoAcoso()));
}
$AmbitosacososDto->setdesAmbitoAcoso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AmbitosacososDto->getdesAmbitoAcoso(),"utf8"):strtoupper($AmbitosacososDto->getdesAmbitoAcoso()))))));
if($this->esFecha($AmbitosacososDto->getdesAmbitoAcoso())){
$AmbitosacososDto->setdesAmbitoAcoso($this->fechaMysql($AmbitosacososDto->getdesAmbitoAcoso()));
}
$AmbitosacososDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AmbitosacososDto->getactivo(),"utf8"):strtoupper($AmbitosacososDto->getactivo()))))));
if($this->esFecha($AmbitosacososDto->getactivo())){
$AmbitosacososDto->setactivo($this->fechaMysql($AmbitosacososDto->getactivo()));
}
$AmbitosacososDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AmbitosacososDto->getfechaRegistro(),"utf8"):strtoupper($AmbitosacososDto->getfechaRegistro()))))));
if($this->esFecha($AmbitosacososDto->getfechaRegistro())){
$AmbitosacososDto->setfechaRegistro($this->fechaMysql($AmbitosacososDto->getfechaRegistro()));
}
$AmbitosacososDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AmbitosacososDto->getfechaActualizacion(),"utf8"):strtoupper($AmbitosacososDto->getfechaActualizacion()))))));
if($this->esFecha($AmbitosacososDto->getfechaActualizacion())){
$AmbitosacososDto->setfechaActualizacion($this->fechaMysql($AmbitosacososDto->getfechaActualizacion()));
}
return $AmbitosacososDto;
}
public function selectAmbitosacosos($AmbitosacososDto){
$AmbitosacososDto=$this->validarAmbitosacosos($AmbitosacososDto);
$AmbitosacososController = new AmbitosacososController();
$AmbitosacososDto = $AmbitosacososController->selectAmbitosacosos($AmbitosacososDto);
if($AmbitosacososDto!=""){
$dtoToJson = new DtoToJson($AmbitosacososDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertAmbitosacosos($AmbitosacososDto){
$AmbitosacososDto=$this->validarAmbitosacosos($AmbitosacososDto);
$AmbitosacososController = new AmbitosacososController();
$AmbitosacososDto = $AmbitosacososController->insertAmbitosacosos($AmbitosacososDto);
if($AmbitosacososDto!=""){
$dtoToJson = new DtoToJson($AmbitosacososDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateAmbitosacosos($AmbitosacososDto){
$AmbitosacososDto=$this->validarAmbitosacosos($AmbitosacososDto);
$AmbitosacososController = new AmbitosacososController();
$AmbitosacososDto = $AmbitosacososController->updateAmbitosacosos($AmbitosacososDto);
if($AmbitosacososDto!=""){
$dtoToJson = new DtoToJson($AmbitosacososDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteAmbitosacosos($AmbitosacososDto){
$AmbitosacososDto=$this->validarAmbitosacosos($AmbitosacososDto);
$AmbitosacososController = new AmbitosacososController();
$AmbitosacososDto = $AmbitosacososController->deleteAmbitosacosos($AmbitosacososDto);
if($AmbitosacososDto==true){
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



@$cveAmbitoAcoso=$_POST["cveAmbitoAcoso"];
@$desAmbitoAcoso=$_POST["desAmbitoAcoso"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$ambitosacososFacade = new AmbitosacososFacade();
$ambitosacososDto = new AmbitosacososDTO();

$ambitosacososDto->setCveAmbitoAcoso($cveAmbitoAcoso);
$ambitosacososDto->setDesAmbitoAcoso($desAmbitoAcoso);
$ambitosacososDto->setActivo($activo);
$ambitosacososDto->setFechaRegistro($fechaRegistro);
$ambitosacososDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveAmbitoAcoso=="") ){
$ambitosacososDto=$ambitosacososFacade->insertAmbitosacosos($ambitosacososDto);
echo $ambitosacososDto;
} else if(($accion=="guardar") && ($cveAmbitoAcoso!="")){
$ambitosacososDto=$ambitosacososFacade->updateAmbitosacosos($ambitosacososDto);
echo $ambitosacososDto;
} else if($accion=="consultar"){
$ambitosacososDto=$ambitosacososFacade->selectAmbitosacosos($ambitosacososDto);
echo $ambitosacososDto;
} else if( ($accion=="baja") && ($cveAmbitoAcoso!="") ){
$ambitosacososDto=$ambitosacososFacade->deleteAmbitosacosos($ambitosacososDto);
echo $ambitosacososDto;
} else if( ($accion=="seleccionar") && ($cveAmbitoAcoso!="") ){
$ambitosacososDto=$ambitosacososFacade->selectAmbitosacosos($ambitosacososDto);
echo $ambitosacososDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>