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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/violenciahomicidiosdolosos/ViolenciahomicidiosdolososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/violenciahomicidiosdolosos/ViolenciahomicidiosdolososController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ViolenciahomicidiosdolososFacade {
private $proveedor;
public function __construct() {
}
public function validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto){
$ViolenciahomicidiosdolososDto->setidViolenciaHomicidioDoloso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso(),"utf8"):strtoupper($ViolenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()))))));
if($this->esFecha($ViolenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso())){
$ViolenciahomicidiosdolososDto->setidViolenciaHomicidioDoloso($this->fechaMysql($ViolenciahomicidiosdolososDto->getidViolenciaHomicidioDoloso()));
}
$ViolenciahomicidiosdolososDto->setidViolenciaDeGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciahomicidiosdolososDto->getidViolenciaDeGenero(),"utf8"):strtoupper($ViolenciahomicidiosdolososDto->getidViolenciaDeGenero()))))));
if($this->esFecha($ViolenciahomicidiosdolososDto->getidViolenciaDeGenero())){
$ViolenciahomicidiosdolososDto->setidViolenciaDeGenero($this->fechaMysql($ViolenciahomicidiosdolososDto->getidViolenciaDeGenero()));
}
$ViolenciahomicidiosdolososDto->setcveHomicidioDoloso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciahomicidiosdolososDto->getcveHomicidioDoloso(),"utf8"):strtoupper($ViolenciahomicidiosdolososDto->getcveHomicidioDoloso()))))));
if($this->esFecha($ViolenciahomicidiosdolososDto->getcveHomicidioDoloso())){
$ViolenciahomicidiosdolososDto->setcveHomicidioDoloso($this->fechaMysql($ViolenciahomicidiosdolososDto->getcveHomicidioDoloso()));
}
$ViolenciahomicidiosdolososDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciahomicidiosdolososDto->getfechaRegistro(),"utf8"):strtoupper($ViolenciahomicidiosdolososDto->getfechaRegistro()))))));
if($this->esFecha($ViolenciahomicidiosdolososDto->getfechaRegistro())){
$ViolenciahomicidiosdolososDto->setfechaRegistro($this->fechaMysql($ViolenciahomicidiosdolososDto->getfechaRegistro()));
}
$ViolenciahomicidiosdolososDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciahomicidiosdolososDto->getfechaActualizacion(),"utf8"):strtoupper($ViolenciahomicidiosdolososDto->getfechaActualizacion()))))));
if($this->esFecha($ViolenciahomicidiosdolososDto->getfechaActualizacion())){
$ViolenciahomicidiosdolososDto->setfechaActualizacion($this->fechaMysql($ViolenciahomicidiosdolososDto->getfechaActualizacion()));
}
return $ViolenciahomicidiosdolososDto;
}
public function selectViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto){
$ViolenciahomicidiosdolososDto=$this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
$ViolenciahomicidiosdolososController = new ViolenciahomicidiosdolososController();
$ViolenciahomicidiosdolososDto = $ViolenciahomicidiosdolososController->selectViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
if($ViolenciahomicidiosdolososDto!=""){
$dtoToJson = new DtoToJson($ViolenciahomicidiosdolososDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto){
$ViolenciahomicidiosdolososDto=$this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
$ViolenciahomicidiosdolososController = new ViolenciahomicidiosdolososController();
$ViolenciahomicidiosdolososDto = $ViolenciahomicidiosdolososController->insertViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
if($ViolenciahomicidiosdolososDto!=""){
$dtoToJson = new DtoToJson($ViolenciahomicidiosdolososDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto){
$ViolenciahomicidiosdolososDto=$this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
$ViolenciahomicidiosdolososController = new ViolenciahomicidiosdolososController();
$ViolenciahomicidiosdolososDto = $ViolenciahomicidiosdolososController->updateViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
if($ViolenciahomicidiosdolososDto!=""){
$dtoToJson = new DtoToJson($ViolenciahomicidiosdolososDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto){
$ViolenciahomicidiosdolososDto=$this->validarViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
$ViolenciahomicidiosdolososController = new ViolenciahomicidiosdolososController();
$ViolenciahomicidiosdolososDto = $ViolenciahomicidiosdolososController->deleteViolenciahomicidiosdolosos($ViolenciahomicidiosdolososDto);
if($ViolenciahomicidiosdolososDto==true){
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



@$idViolenciaHomicidioDoloso=$_POST["idViolenciaHomicidioDoloso"];
@$idViolenciaDeGenero=$_POST["idViolenciaDeGenero"];
@$cveHomicidioDoloso=$_POST["cveHomicidioDoloso"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$violenciahomicidiosdolososFacade = new ViolenciahomicidiosdolososFacade();
$violenciahomicidiosdolososDto = new ViolenciahomicidiosdolososDTO();

$violenciahomicidiosdolososDto->setIdViolenciaHomicidioDoloso($idViolenciaHomicidioDoloso);
$violenciahomicidiosdolososDto->setIdViolenciaDeGenero($idViolenciaDeGenero);
$violenciahomicidiosdolososDto->setCveHomicidioDoloso($cveHomicidioDoloso);
$violenciahomicidiosdolososDto->setFechaRegistro($fechaRegistro);
$violenciahomicidiosdolososDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idViolenciaHomicidioDoloso=="") ){
$violenciahomicidiosdolososDto=$violenciahomicidiosdolososFacade->insertViolenciahomicidiosdolosos($violenciahomicidiosdolososDto);
echo $violenciahomicidiosdolososDto;
} else if(($accion=="guardar") && ($idViolenciaHomicidioDoloso!="")){
$violenciahomicidiosdolososDto=$violenciahomicidiosdolososFacade->updateViolenciahomicidiosdolosos($violenciahomicidiosdolososDto);
echo $violenciahomicidiosdolososDto;
} else if($accion=="consultar"){
$violenciahomicidiosdolososDto=$violenciahomicidiosdolososFacade->selectViolenciahomicidiosdolosos($violenciahomicidiosdolososDto);
echo $violenciahomicidiosdolososDto;
} else if( ($accion=="baja") && ($idViolenciaHomicidioDoloso!="") ){
$violenciahomicidiosdolososDto=$violenciahomicidiosdolososFacade->deleteViolenciahomicidiosdolosos($violenciahomicidiosdolososDto);
echo $violenciahomicidiosdolososDto;
} else if( ($accion=="seleccionar") && ($idViolenciaHomicidioDoloso!="") ){
$violenciahomicidiosdolososDto=$violenciahomicidiosdolososFacade->selectViolenciahomicidiosdolosos($violenciahomicidiosdolososDto);
echo $violenciahomicidiosdolososDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>