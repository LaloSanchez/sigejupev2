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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/estatustocasbandejas/EstatustocasbandejasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/estatustocasbandejas/EstatustocasbandejasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class EstatustocasbandejasFacade {
private $proveedor;
public function __construct() {
}
public function validarEstatustocasbandejas($EstatustocasbandejasDto){
$EstatustocasbandejasDto->setidEstatusTocaBandeja(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EstatustocasbandejasDto->getidEstatusTocaBandeja(),"utf8"):strtoupper($EstatustocasbandejasDto->getidEstatusTocaBandeja()))))));
if($this->esFecha($EstatustocasbandejasDto->getidEstatusTocaBandeja())){
$EstatustocasbandejasDto->setidEstatusTocaBandeja($this->fechaMysql($EstatustocasbandejasDto->getidEstatusTocaBandeja()));
}
$EstatustocasbandejasDto->setidCarpetaJudicial(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EstatustocasbandejasDto->getidCarpetaJudicial(),"utf8"):strtoupper($EstatustocasbandejasDto->getidCarpetaJudicial()))))));
if($this->esFecha($EstatustocasbandejasDto->getidCarpetaJudicial())){
$EstatustocasbandejasDto->setidCarpetaJudicial($this->fechaMysql($EstatustocasbandejasDto->getidCarpetaJudicial()));
}
$EstatustocasbandejasDto->setrecibido(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EstatustocasbandejasDto->getrecibido(),"utf8"):strtoupper($EstatustocasbandejasDto->getrecibido()))))));
if($this->esFecha($EstatustocasbandejasDto->getrecibido())){
$EstatustocasbandejasDto->setrecibido($this->fechaMysql($EstatustocasbandejasDto->getrecibido()));
}
$EstatustocasbandejasDto->setcveUsuario(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EstatustocasbandejasDto->getcveUsuario(),"utf8"):strtoupper($EstatustocasbandejasDto->getcveUsuario()))))));
if($this->esFecha($EstatustocasbandejasDto->getcveUsuario())){
$EstatustocasbandejasDto->setcveUsuario($this->fechaMysql($EstatustocasbandejasDto->getcveUsuario()));
}
$EstatustocasbandejasDto->setorigen(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EstatustocasbandejasDto->getorigen(),"utf8"):strtoupper($EstatustocasbandejasDto->getorigen()))))));
if($this->esFecha($EstatustocasbandejasDto->getorigen())){
$EstatustocasbandejasDto->setorigen($this->fechaMysql($EstatustocasbandejasDto->getorigen()));
}
$EstatustocasbandejasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EstatustocasbandejasDto->getcveTipoCarpeta(),"utf8"):strtoupper($EstatustocasbandejasDto->getcveTipoCarpeta()))))));
if($this->esFecha($EstatustocasbandejasDto->getcveTipoCarpeta())){
$EstatustocasbandejasDto->setcveTipoCarpeta($this->fechaMysql($EstatustocasbandejasDto->getcveTipoCarpeta()));
}
$EstatustocasbandejasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EstatustocasbandejasDto->getactivo(),"utf8"):strtoupper($EstatustocasbandejasDto->getactivo()))))));
if($this->esFecha($EstatustocasbandejasDto->getactivo())){
$EstatustocasbandejasDto->setactivo($this->fechaMysql($EstatustocasbandejasDto->getactivo()));
}
$EstatustocasbandejasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EstatustocasbandejasDto->getfechaRegistro(),"utf8"):strtoupper($EstatustocasbandejasDto->getfechaRegistro()))))));
if($this->esFecha($EstatustocasbandejasDto->getfechaRegistro())){
$EstatustocasbandejasDto->setfechaRegistro($this->fechaMysql($EstatustocasbandejasDto->getfechaRegistro()));
}
$EstatustocasbandejasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EstatustocasbandejasDto->getfechaActualizacion(),"utf8"):strtoupper($EstatustocasbandejasDto->getfechaActualizacion()))))));
if($this->esFecha($EstatustocasbandejasDto->getfechaActualizacion())){
$EstatustocasbandejasDto->setfechaActualizacion($this->fechaMysql($EstatustocasbandejasDto->getfechaActualizacion()));
}
return $EstatustocasbandejasDto;
}
public function selectEstatustocasbandejas($EstatustocasbandejasDto){
$EstatustocasbandejasDto=$this->validarEstatustocasbandejas($EstatustocasbandejasDto);
$EstatustocasbandejasController = new EstatustocasbandejasController();
$EstatustocasbandejasDto = $EstatustocasbandejasController->selectEstatustocasbandejas($EstatustocasbandejasDto);
if($EstatustocasbandejasDto!=""){
$dtoToJson = new DtoToJson($EstatustocasbandejasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertEstatustocasbandejas($EstatustocasbandejasDto){
$EstatustocasbandejasDto=$this->validarEstatustocasbandejas($EstatustocasbandejasDto);
$EstatustocasbandejasController = new EstatustocasbandejasController();
$EstatustocasbandejasDto = $EstatustocasbandejasController->insertEstatustocasbandejas($EstatustocasbandejasDto);
if($EstatustocasbandejasDto!=""){
$dtoToJson = new DtoToJson($EstatustocasbandejasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateEstatustocasbandejas($EstatustocasbandejasDto){
$EstatustocasbandejasDto=$this->validarEstatustocasbandejas($EstatustocasbandejasDto);
$EstatustocasbandejasController = new EstatustocasbandejasController();
$EstatustocasbandejasDto = $EstatustocasbandejasController->updateEstatustocasbandejas($EstatustocasbandejasDto);
if($EstatustocasbandejasDto!=""){
$dtoToJson = new DtoToJson($EstatustocasbandejasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteEstatustocasbandejas($EstatustocasbandejasDto){
$EstatustocasbandejasDto=$this->validarEstatustocasbandejas($EstatustocasbandejasDto);
$EstatustocasbandejasController = new EstatustocasbandejasController();
$EstatustocasbandejasDto = $EstatustocasbandejasController->deleteEstatustocasbandejas($EstatustocasbandejasDto);
if($EstatustocasbandejasDto==true){
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



@$idEstatusTocaBandeja=$_POST["idEstatusTocaBandeja"];
@$idCarpetaJudicial=$_POST["idCarpetaJudicial"];
@$recibido=$_POST["recibido"];
@$cveUsuario=$_POST["cveUsuario"];
@$origen=$_POST["origen"];
@$cveTipoCarpeta=$_POST["cveTipoCarpeta"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$estatustocasbandejasFacade = new EstatustocasbandejasFacade();
$estatustocasbandejasDto = new EstatustocasbandejasDTO();

$estatustocasbandejasDto->setIdEstatusTocaBandeja($idEstatusTocaBandeja);
$estatustocasbandejasDto->setIdCarpetaJudicial($idCarpetaJudicial);
$estatustocasbandejasDto->setRecibido($recibido);
$estatustocasbandejasDto->setCveUsuario($cveUsuario);
$estatustocasbandejasDto->setOrigen($origen);
$estatustocasbandejasDto->setCveTipoCarpeta($cveTipoCarpeta);
$estatustocasbandejasDto->setActivo($activo);
$estatustocasbandejasDto->setFechaRegistro($fechaRegistro);
$estatustocasbandejasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idEstatusTocaBandeja=="") ){
$estatustocasbandejasDto=$estatustocasbandejasFacade->insertEstatustocasbandejas($estatustocasbandejasDto);
echo $estatustocasbandejasDto;
} else if(($accion=="guardar") && ($idEstatusTocaBandeja!="")){
$estatustocasbandejasDto=$estatustocasbandejasFacade->updateEstatustocasbandejas($estatustocasbandejasDto);
echo $estatustocasbandejasDto;
} else if($accion=="consultar"){
$estatustocasbandejasDto=$estatustocasbandejasFacade->selectEstatustocasbandejas($estatustocasbandejasDto);
echo $estatustocasbandejasDto;
} else if( ($accion=="baja") && ($idEstatusTocaBandeja!="") ){
$estatustocasbandejasDto=$estatustocasbandejasFacade->deleteEstatustocasbandejas($estatustocasbandejasDto);
echo $estatustocasbandejasDto;
} else if( ($accion=="seleccionar") && ($idEstatusTocaBandeja!="") ){
$estatustocasbandejasDto=$estatustocasbandejasFacade->selectEstatustocasbandejas($estatustocasbandejasDto);
echo $estatustocasbandejasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>