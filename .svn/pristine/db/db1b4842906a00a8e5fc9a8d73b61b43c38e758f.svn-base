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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/medidasapeladas/MedidasapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/medidasapeladas/MedidasapeladasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class MedidasapeladasFacade {
private $proveedor;
public function __construct() {
}
public function validarMedidasapeladas($MedidasapeladasDto){
$MedidasapeladasDto->setidMedidaApelada(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasapeladasDto->getidMedidaApelada(),"utf8"):strtoupper($MedidasapeladasDto->getidMedidaApelada()))))));
if($this->esFecha($MedidasapeladasDto->getidMedidaApelada())){
$MedidasapeladasDto->setidMedidaApelada($this->fechaMysql($MedidasapeladasDto->getidMedidaApelada()));
}
$MedidasapeladasDto->setidMedidaCautelar(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasapeladasDto->getidMedidaCautelar(),"utf8"):strtoupper($MedidasapeladasDto->getidMedidaCautelar()))))));
if($this->esFecha($MedidasapeladasDto->getidMedidaCautelar())){
$MedidasapeladasDto->setidMedidaCautelar($this->fechaMysql($MedidasapeladasDto->getidMedidaCautelar()));
}
$MedidasapeladasDto->setcveSentido(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasapeladasDto->getcveSentido(),"utf8"):strtoupper($MedidasapeladasDto->getcveSentido()))))));
if($this->esFecha($MedidasapeladasDto->getcveSentido())){
$MedidasapeladasDto->setcveSentido($this->fechaMysql($MedidasapeladasDto->getcveSentido()));
}
$MedidasapeladasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasapeladasDto->getfechaRegistro(),"utf8"):strtoupper($MedidasapeladasDto->getfechaRegistro()))))));
if($this->esFecha($MedidasapeladasDto->getfechaRegistro())){
$MedidasapeladasDto->setfechaRegistro($this->fechaMysql($MedidasapeladasDto->getfechaRegistro()));
}
$MedidasapeladasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasapeladasDto->getfechaActualizacion(),"utf8"):strtoupper($MedidasapeladasDto->getfechaActualizacion()))))));
if($this->esFecha($MedidasapeladasDto->getfechaActualizacion())){
$MedidasapeladasDto->setfechaActualizacion($this->fechaMysql($MedidasapeladasDto->getfechaActualizacion()));
}
return $MedidasapeladasDto;
}
public function selectMedidasapeladas($MedidasapeladasDto){
$MedidasapeladasDto=$this->validarMedidasapeladas($MedidasapeladasDto);
$MedidasapeladasController = new MedidasapeladasController();
$MedidasapeladasDto = $MedidasapeladasController->selectMedidasapeladas($MedidasapeladasDto);
if($MedidasapeladasDto!=""){
$dtoToJson = new DtoToJson($MedidasapeladasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertMedidasapeladas($MedidasapeladasDto){
$MedidasapeladasDto=$this->validarMedidasapeladas($MedidasapeladasDto);
$MedidasapeladasController = new MedidasapeladasController();
$MedidasapeladasDto = $MedidasapeladasController->insertMedidasapeladas($MedidasapeladasDto);
if($MedidasapeladasDto!=""){
$dtoToJson = new DtoToJson($MedidasapeladasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateMedidasapeladas($MedidasapeladasDto){
$MedidasapeladasDto=$this->validarMedidasapeladas($MedidasapeladasDto);
$MedidasapeladasController = new MedidasapeladasController();
$MedidasapeladasDto = $MedidasapeladasController->updateMedidasapeladas($MedidasapeladasDto);
if($MedidasapeladasDto!=""){
$dtoToJson = new DtoToJson($MedidasapeladasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteMedidasapeladas($MedidasapeladasDto){
$MedidasapeladasDto=$this->validarMedidasapeladas($MedidasapeladasDto);
$MedidasapeladasController = new MedidasapeladasController();
$MedidasapeladasDto = $MedidasapeladasController->deleteMedidasapeladas($MedidasapeladasDto);
if($MedidasapeladasDto==true){
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



@$idMedidaApelada=$_POST["idMedidaApelada"];
@$idMedidaCautelar=$_POST["idMedidaCautelar"];
@$cveSentido=$_POST["cveSentido"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$medidasapeladasFacade = new MedidasapeladasFacade();
$medidasapeladasDto = new MedidasapeladasDTO();

$medidasapeladasDto->setIdMedidaApelada($idMedidaApelada);
$medidasapeladasDto->setIdMedidaCautelar($idMedidaCautelar);
$medidasapeladasDto->setCveSentido($cveSentido);
$medidasapeladasDto->setFechaRegistro($fechaRegistro);
$medidasapeladasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idMedidaApelada=="") ){
$medidasapeladasDto=$medidasapeladasFacade->insertMedidasapeladas($medidasapeladasDto);
echo $medidasapeladasDto;
} else if(($accion=="guardar") && ($idMedidaApelada!="")){
$medidasapeladasDto=$medidasapeladasFacade->updateMedidasapeladas($medidasapeladasDto);
echo $medidasapeladasDto;
} else if($accion=="consultar"){
$medidasapeladasDto=$medidasapeladasFacade->selectMedidasapeladas($medidasapeladasDto);
echo $medidasapeladasDto;
} else if( ($accion=="baja") && ($idMedidaApelada!="") ){
$medidasapeladasDto=$medidasapeladasFacade->deleteMedidasapeladas($medidasapeladasDto);
echo $medidasapeladasDto;
} else if( ($accion=="seleccionar") && ($idMedidaApelada!="") ){
$medidasapeladasDto=$medidasapeladasFacade->selectMedidasapeladas($medidasapeladasDto);
echo $medidasapeladasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>