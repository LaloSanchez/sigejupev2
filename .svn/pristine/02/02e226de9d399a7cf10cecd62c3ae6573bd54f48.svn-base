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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/violenciafactoressocialescarpetas/ViolenciafactoressocialescarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ViolenciafactoressocialescarpetasFacade {
private $proveedor;
public function __construct() {
}
public function validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto){
$ViolenciafactoressocialescarpetasDto->setidViolenciaFactorSocialCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciafactoressocialescarpetasDto->getidViolenciaFactorSocialCarpeta(),"utf8"):strtoupper($ViolenciafactoressocialescarpetasDto->getidViolenciaFactorSocialCarpeta()))))));
if($this->esFecha($ViolenciafactoressocialescarpetasDto->getidViolenciaFactorSocialCarpeta())){
$ViolenciafactoressocialescarpetasDto->setidViolenciaFactorSocialCarpeta($this->fechaMysql($ViolenciafactoressocialescarpetasDto->getidViolenciaFactorSocialCarpeta()));
}
$ViolenciafactoressocialescarpetasDto->setcveFactorCultural(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciafactoressocialescarpetasDto->getcveFactorCultural(),"utf8"):strtoupper($ViolenciafactoressocialescarpetasDto->getcveFactorCultural()))))));
if($this->esFecha($ViolenciafactoressocialescarpetasDto->getcveFactorCultural())){
$ViolenciafactoressocialescarpetasDto->setcveFactorCultural($this->fechaMysql($ViolenciafactoressocialescarpetasDto->getcveFactorCultural()));
}
$ViolenciafactoressocialescarpetasDto->setidViolenciaDeGeneroCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciafactoressocialescarpetasDto->getidViolenciaDeGeneroCarpeta(),"utf8"):strtoupper($ViolenciafactoressocialescarpetasDto->getidViolenciaDeGeneroCarpeta()))))));
if($this->esFecha($ViolenciafactoressocialescarpetasDto->getidViolenciaDeGeneroCarpeta())){
$ViolenciafactoressocialescarpetasDto->setidViolenciaDeGeneroCarpeta($this->fechaMysql($ViolenciafactoressocialescarpetasDto->getidViolenciaDeGeneroCarpeta()));
}
$ViolenciafactoressocialescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciafactoressocialescarpetasDto->getfechaRegistro(),"utf8"):strtoupper($ViolenciafactoressocialescarpetasDto->getfechaRegistro()))))));
if($this->esFecha($ViolenciafactoressocialescarpetasDto->getfechaRegistro())){
$ViolenciafactoressocialescarpetasDto->setfechaRegistro($this->fechaMysql($ViolenciafactoressocialescarpetasDto->getfechaRegistro()));
}
$ViolenciafactoressocialescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciafactoressocialescarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($ViolenciafactoressocialescarpetasDto->getfechaActualizacion()))))));
if($this->esFecha($ViolenciafactoressocialescarpetasDto->getfechaActualizacion())){
$ViolenciafactoressocialescarpetasDto->setfechaActualizacion($this->fechaMysql($ViolenciafactoressocialescarpetasDto->getfechaActualizacion()));
}
return $ViolenciafactoressocialescarpetasDto;
}
public function selectViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto){
$ViolenciafactoressocialescarpetasDto=$this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
$ViolenciafactoressocialescarpetasController = new ViolenciafactoressocialescarpetasController();
$ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasController->selectViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
if($ViolenciafactoressocialescarpetasDto!=""){
$dtoToJson = new DtoToJson($ViolenciafactoressocialescarpetasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto){
$ViolenciafactoressocialescarpetasDto=$this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
$ViolenciafactoressocialescarpetasController = new ViolenciafactoressocialescarpetasController();
$ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasController->insertViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
if($ViolenciafactoressocialescarpetasDto!=""){
$dtoToJson = new DtoToJson($ViolenciafactoressocialescarpetasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto){
$ViolenciafactoressocialescarpetasDto=$this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
$ViolenciafactoressocialescarpetasController = new ViolenciafactoressocialescarpetasController();
$ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasController->updateViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
if($ViolenciafactoressocialescarpetasDto!=""){
$dtoToJson = new DtoToJson($ViolenciafactoressocialescarpetasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto){
$ViolenciafactoressocialescarpetasDto=$this->validarViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
$ViolenciafactoressocialescarpetasController = new ViolenciafactoressocialescarpetasController();
$ViolenciafactoressocialescarpetasDto = $ViolenciafactoressocialescarpetasController->deleteViolenciafactoressocialescarpetas($ViolenciafactoressocialescarpetasDto);
if($ViolenciafactoressocialescarpetasDto==true){
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



@$idViolenciaFactorSocialCarpeta=$_POST["idViolenciaFactorSocialCarpeta"];
@$cveFactorCultural=$_POST["cveFactorCultural"];
@$idViolenciaDeGeneroCarpeta=$_POST["idViolenciaDeGeneroCarpeta"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$violenciafactoressocialescarpetasFacade = new ViolenciafactoressocialescarpetasFacade();
$violenciafactoressocialescarpetasDto = new ViolenciafactoressocialescarpetasDTO();

$violenciafactoressocialescarpetasDto->setIdViolenciaFactorSocialCarpeta($idViolenciaFactorSocialCarpeta);
$violenciafactoressocialescarpetasDto->setCveFactorCultural($cveFactorCultural);
$violenciafactoressocialescarpetasDto->setIdViolenciaDeGeneroCarpeta($idViolenciaDeGeneroCarpeta);
$violenciafactoressocialescarpetasDto->setFechaRegistro($fechaRegistro);
$violenciafactoressocialescarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idViolenciaFactorSocialCarpeta=="") ){
$violenciafactoressocialescarpetasDto=$violenciafactoressocialescarpetasFacade->insertViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto);
echo $violenciafactoressocialescarpetasDto;
} else if(($accion=="guardar") && ($idViolenciaFactorSocialCarpeta!="")){
$violenciafactoressocialescarpetasDto=$violenciafactoressocialescarpetasFacade->updateViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto);
echo $violenciafactoressocialescarpetasDto;
} else if($accion=="consultar"){
$violenciafactoressocialescarpetasDto=$violenciafactoressocialescarpetasFacade->selectViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto);
echo $violenciafactoressocialescarpetasDto;
} else if( ($accion=="baja") && ($idViolenciaFactorSocialCarpeta!="") ){
$violenciafactoressocialescarpetasDto=$violenciafactoressocialescarpetasFacade->deleteViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto);
echo $violenciafactoressocialescarpetasDto;
} else if( ($accion=="seleccionar") && ($idViolenciaFactorSocialCarpeta!="") ){
$violenciafactoressocialescarpetasDto=$violenciafactoressocialescarpetasFacade->selectViolenciafactoressocialescarpetas($violenciafactoressocialescarpetasDto);
echo $violenciafactoressocialescarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>