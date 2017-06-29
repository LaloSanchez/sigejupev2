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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/violenciafactoressociales/ViolenciafactoressocialesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/violenciafactoressociales/ViolenciafactoressocialesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ViolenciafactoressocialesFacade {
private $proveedor;
public function __construct() {
}
public function validarViolenciafactoressociales($ViolenciafactoressocialesDto){
$ViolenciafactoressocialesDto->setidViolenciaFactorSocial(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciafactoressocialesDto->getidViolenciaFactorSocial(),"utf8"):strtoupper($ViolenciafactoressocialesDto->getidViolenciaFactorSocial()))))));
if($this->esFecha($ViolenciafactoressocialesDto->getidViolenciaFactorSocial())){
$ViolenciafactoressocialesDto->setidViolenciaFactorSocial($this->fechaMysql($ViolenciafactoressocialesDto->getidViolenciaFactorSocial()));
}
$ViolenciafactoressocialesDto->setcveFactorCultural(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciafactoressocialesDto->getcveFactorCultural(),"utf8"):strtoupper($ViolenciafactoressocialesDto->getcveFactorCultural()))))));
if($this->esFecha($ViolenciafactoressocialesDto->getcveFactorCultural())){
$ViolenciafactoressocialesDto->setcveFactorCultural($this->fechaMysql($ViolenciafactoressocialesDto->getcveFactorCultural()));
}
$ViolenciafactoressocialesDto->setidViolenciaDeGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciafactoressocialesDto->getidViolenciaDeGenero(),"utf8"):strtoupper($ViolenciafactoressocialesDto->getidViolenciaDeGenero()))))));
if($this->esFecha($ViolenciafactoressocialesDto->getidViolenciaDeGenero())){
$ViolenciafactoressocialesDto->setidViolenciaDeGenero($this->fechaMysql($ViolenciafactoressocialesDto->getidViolenciaDeGenero()));
}
$ViolenciafactoressocialesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciafactoressocialesDto->getfechaRegistro(),"utf8"):strtoupper($ViolenciafactoressocialesDto->getfechaRegistro()))))));
if($this->esFecha($ViolenciafactoressocialesDto->getfechaRegistro())){
$ViolenciafactoressocialesDto->setfechaRegistro($this->fechaMysql($ViolenciafactoressocialesDto->getfechaRegistro()));
}
$ViolenciafactoressocialesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciafactoressocialesDto->getfechaActualizacion(),"utf8"):strtoupper($ViolenciafactoressocialesDto->getfechaActualizacion()))))));
if($this->esFecha($ViolenciafactoressocialesDto->getfechaActualizacion())){
$ViolenciafactoressocialesDto->setfechaActualizacion($this->fechaMysql($ViolenciafactoressocialesDto->getfechaActualizacion()));
}
return $ViolenciafactoressocialesDto;
}
public function selectViolenciafactoressociales($ViolenciafactoressocialesDto){
$ViolenciafactoressocialesDto=$this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
$ViolenciafactoressocialesController = new ViolenciafactoressocialesController();
$ViolenciafactoressocialesDto = $ViolenciafactoressocialesController->selectViolenciafactoressociales($ViolenciafactoressocialesDto);
if($ViolenciafactoressocialesDto!=""){
$dtoToJson = new DtoToJson($ViolenciafactoressocialesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertViolenciafactoressociales($ViolenciafactoressocialesDto){
$ViolenciafactoressocialesDto=$this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
$ViolenciafactoressocialesController = new ViolenciafactoressocialesController();
$ViolenciafactoressocialesDto = $ViolenciafactoressocialesController->insertViolenciafactoressociales($ViolenciafactoressocialesDto);
if($ViolenciafactoressocialesDto!=""){
$dtoToJson = new DtoToJson($ViolenciafactoressocialesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateViolenciafactoressociales($ViolenciafactoressocialesDto){
$ViolenciafactoressocialesDto=$this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
$ViolenciafactoressocialesController = new ViolenciafactoressocialesController();
$ViolenciafactoressocialesDto = $ViolenciafactoressocialesController->updateViolenciafactoressociales($ViolenciafactoressocialesDto);
if($ViolenciafactoressocialesDto!=""){
$dtoToJson = new DtoToJson($ViolenciafactoressocialesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteViolenciafactoressociales($ViolenciafactoressocialesDto){
$ViolenciafactoressocialesDto=$this->validarViolenciafactoressociales($ViolenciafactoressocialesDto);
$ViolenciafactoressocialesController = new ViolenciafactoressocialesController();
$ViolenciafactoressocialesDto = $ViolenciafactoressocialesController->deleteViolenciafactoressociales($ViolenciafactoressocialesDto);
if($ViolenciafactoressocialesDto==true){
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



@$idViolenciaFactorSocial=$_POST["idViolenciaFactorSocial"];
@$cveFactorCultural=$_POST["cveFactorCultural"];
@$idViolenciaDeGenero=$_POST["idViolenciaDeGenero"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$violenciafactoressocialesFacade = new ViolenciafactoressocialesFacade();
$violenciafactoressocialesDto = new ViolenciafactoressocialesDTO();

$violenciafactoressocialesDto->setIdViolenciaFactorSocial($idViolenciaFactorSocial);
$violenciafactoressocialesDto->setCveFactorCultural($cveFactorCultural);
$violenciafactoressocialesDto->setIdViolenciaDeGenero($idViolenciaDeGenero);
$violenciafactoressocialesDto->setFechaRegistro($fechaRegistro);
$violenciafactoressocialesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idViolenciaFactorSocial=="") ){
$violenciafactoressocialesDto=$violenciafactoressocialesFacade->insertViolenciafactoressociales($violenciafactoressocialesDto);
echo $violenciafactoressocialesDto;
} else if(($accion=="guardar") && ($idViolenciaFactorSocial!="")){
$violenciafactoressocialesDto=$violenciafactoressocialesFacade->updateViolenciafactoressociales($violenciafactoressocialesDto);
echo $violenciafactoressocialesDto;
} else if($accion=="consultar"){
$violenciafactoressocialesDto=$violenciafactoressocialesFacade->selectViolenciafactoressociales($violenciafactoressocialesDto);
echo $violenciafactoressocialesDto;
} else if( ($accion=="baja") && ($idViolenciaFactorSocial!="") ){
$violenciafactoressocialesDto=$violenciafactoressocialesFacade->deleteViolenciafactoressociales($violenciafactoressocialesDto);
echo $violenciafactoressocialesDto;
} else if( ($accion=="seleccionar") && ($idViolenciaFactorSocial!="") ){
$violenciafactoressocialesDto=$violenciafactoressocialesFacade->selectViolenciafactoressociales($violenciafactoressocialesDto);
echo $violenciafactoressocialesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>