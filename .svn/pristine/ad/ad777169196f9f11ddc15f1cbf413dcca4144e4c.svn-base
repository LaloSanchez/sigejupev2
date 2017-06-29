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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/medidasproapeladas/MedidasproapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/medidasproapeladas/MedidasproapeladasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class MedidasproapeladasFacade {
private $proveedor;
public function __construct() {
}
public function validarMedidasproapeladas($MedidasproapeladasDto){
$MedidasproapeladasDto->setidMedidaProApelada(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproapeladasDto->getidMedidaProApelada(),"utf8"):strtoupper($MedidasproapeladasDto->getidMedidaProApelada()))))));
if($this->esFecha($MedidasproapeladasDto->getidMedidaProApelada())){
$MedidasproapeladasDto->setidMedidaProApelada($this->fechaMysql($MedidasproapeladasDto->getidMedidaProApelada()));
}
$MedidasproapeladasDto->setidMedidaProteccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproapeladasDto->getidMedidaProteccion(),"utf8"):strtoupper($MedidasproapeladasDto->getidMedidaProteccion()))))));
if($this->esFecha($MedidasproapeladasDto->getidMedidaProteccion())){
$MedidasproapeladasDto->setidMedidaProteccion($this->fechaMysql($MedidasproapeladasDto->getidMedidaProteccion()));
}
$MedidasproapeladasDto->setcveSentido(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproapeladasDto->getcveSentido(),"utf8"):strtoupper($MedidasproapeladasDto->getcveSentido()))))));
if($this->esFecha($MedidasproapeladasDto->getcveSentido())){
$MedidasproapeladasDto->setcveSentido($this->fechaMysql($MedidasproapeladasDto->getcveSentido()));
}
$MedidasproapeladasDto->setNumToca(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproapeladasDto->getNumToca(),"utf8"):strtoupper($MedidasproapeladasDto->getNumToca()))))));
if($this->esFecha($MedidasproapeladasDto->getNumToca())){
$MedidasproapeladasDto->setNumToca($this->fechaMysql($MedidasproapeladasDto->getNumToca()));
}
$MedidasproapeladasDto->setAnioToca(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproapeladasDto->getAnioToca(),"utf8"):strtoupper($MedidasproapeladasDto->getAnioToca()))))));
if($this->esFecha($MedidasproapeladasDto->getAnioToca())){
$MedidasproapeladasDto->setAnioToca($this->fechaMysql($MedidasproapeladasDto->getAnioToca()));
}
$MedidasproapeladasDto->setCveSala(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproapeladasDto->getCveSala(),"utf8"):strtoupper($MedidasproapeladasDto->getCveSala()))))));
if($this->esFecha($MedidasproapeladasDto->getCveSala())){
$MedidasproapeladasDto->setCveSala($this->fechaMysql($MedidasproapeladasDto->getCveSala()));
}
$MedidasproapeladasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproapeladasDto->getfechaRegistro(),"utf8"):strtoupper($MedidasproapeladasDto->getfechaRegistro()))))));
if($this->esFecha($MedidasproapeladasDto->getfechaRegistro())){
$MedidasproapeladasDto->setfechaRegistro($this->fechaMysql($MedidasproapeladasDto->getfechaRegistro()));
}
$MedidasproapeladasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidasproapeladasDto->getfechaActualizacion(),"utf8"):strtoupper($MedidasproapeladasDto->getfechaActualizacion()))))));
if($this->esFecha($MedidasproapeladasDto->getfechaActualizacion())){
$MedidasproapeladasDto->setfechaActualizacion($this->fechaMysql($MedidasproapeladasDto->getfechaActualizacion()));
}
return $MedidasproapeladasDto;
}
public function selectMedidasproapeladas($MedidasproapeladasDto){
$MedidasproapeladasDto=$this->validarMedidasproapeladas($MedidasproapeladasDto);
$MedidasproapeladasController = new MedidasproapeladasController();
$MedidasproapeladasDto = $MedidasproapeladasController->selectMedidasproapeladas($MedidasproapeladasDto);
if($MedidasproapeladasDto!=""){
$dtoToJson = new DtoToJson($MedidasproapeladasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertMedidasproapeladas($MedidasproapeladasDto){
$MedidasproapeladasDto=$this->validarMedidasproapeladas($MedidasproapeladasDto);
$MedidasproapeladasController = new MedidasproapeladasController();
$MedidasproapeladasDto = $MedidasproapeladasController->insertMedidasproapeladas($MedidasproapeladasDto);
if($MedidasproapeladasDto!=""){
$dtoToJson = new DtoToJson($MedidasproapeladasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateMedidasproapeladas($MedidasproapeladasDto){
$MedidasproapeladasDto=$this->validarMedidasproapeladas($MedidasproapeladasDto);
$MedidasproapeladasController = new MedidasproapeladasController();
$MedidasproapeladasDto = $MedidasproapeladasController->updateMedidasproapeladas($MedidasproapeladasDto);
if($MedidasproapeladasDto!=""){
$dtoToJson = new DtoToJson($MedidasproapeladasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteMedidasproapeladas($MedidasproapeladasDto){
$MedidasproapeladasDto=$this->validarMedidasproapeladas($MedidasproapeladasDto);
$MedidasproapeladasController = new MedidasproapeladasController();
$MedidasproapeladasDto = $MedidasproapeladasController->deleteMedidasproapeladas($MedidasproapeladasDto);
if($MedidasproapeladasDto==true){
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



@$idMedidaProApelada=$_POST["idMedidaProApelada"];
@$idMedidaProteccion=$_POST["idMedidaProteccion"];
@$cveSentido=$_POST["cveSentido"];
@$NumToca=$_POST["NumToca"];
@$AnioToca=$_POST["AnioToca"];
@$CveSala=$_POST["CveSala"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$medidasproapeladasFacade = new MedidasproapeladasFacade();
$medidasproapeladasDto = new MedidasproapeladasDTO();

$medidasproapeladasDto->setIdMedidaProApelada($idMedidaProApelada);
$medidasproapeladasDto->setIdMedidaProteccion($idMedidaProteccion);
$medidasproapeladasDto->setCveSentido($cveSentido);
$medidasproapeladasDto->setNumToca($NumToca);
$medidasproapeladasDto->setAnioToca($AnioToca);
$medidasproapeladasDto->setCveSala($CveSala);
$medidasproapeladasDto->setFechaRegistro($fechaRegistro);
$medidasproapeladasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idJuzgadorCateo=="") ){
$medidasproapeladasDto=$medidasproapeladasFacade->insertMedidasproapeladas($medidasproapeladasDto);
echo $medidasproapeladasDto;
} else if(($accion=="guardar") && ($idJuzgadorCateo!="")){
$medidasproapeladasDto=$medidasproapeladasFacade->updateMedidasproapeladas($medidasproapeladasDto);
echo $medidasproapeladasDto;
} else if($accion=="consultar"){
$medidasproapeladasDto=$medidasproapeladasFacade->selectMedidasproapeladas($medidasproapeladasDto);
echo $medidasproapeladasDto;
} else if( ($accion=="baja") && ($idJuzgadorCateo!="") ){
$medidasproapeladasDto=$medidasproapeladasFacade->deleteMedidasproapeladas($medidasproapeladasDto);
echo $medidasproapeladasDto;
} else if( ($accion=="seleccionar") && ($idJuzgadorCateo!="") ){
$medidasproapeladasDto=$medidasproapeladasFacade->selectMedidasproapeladas($medidasproapeladasDto);
echo $medidasproapeladasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>