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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tipofamilialinguistica/TipofamilialinguisticaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tipofamilialinguistica/TipofamilialinguisticaController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TipofamilialinguisticaFacade {
private $proveedor;
public function __construct() {
}
public function validarTipofamilialinguistica($TipofamilialinguisticaDto){
$TipofamilialinguisticaDto->setcveTipoFamiliaLinguistica(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipofamilialinguisticaDto->getcveTipoFamiliaLinguistica(),"utf8"):strtoupper($TipofamilialinguisticaDto->getcveTipoFamiliaLinguistica()))))));
if($this->esFecha($TipofamilialinguisticaDto->getcveTipoFamiliaLinguistica())){
$TipofamilialinguisticaDto->setcveTipoFamiliaLinguistica($this->fechaMysql($TipofamilialinguisticaDto->getcveTipoFamiliaLinguistica()));
}
$TipofamilialinguisticaDto->setdesTipoFamiliaLinguistica(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipofamilialinguisticaDto->getdesTipoFamiliaLinguistica(),"utf8"):strtoupper($TipofamilialinguisticaDto->getdesTipoFamiliaLinguistica()))))));
if($this->esFecha($TipofamilialinguisticaDto->getdesTipoFamiliaLinguistica())){
$TipofamilialinguisticaDto->setdesTipoFamiliaLinguistica($this->fechaMysql($TipofamilialinguisticaDto->getdesTipoFamiliaLinguistica()));
}
$TipofamilialinguisticaDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipofamilialinguisticaDto->getactivo(),"utf8"):strtoupper($TipofamilialinguisticaDto->getactivo()))))));
if($this->esFecha($TipofamilialinguisticaDto->getactivo())){
$TipofamilialinguisticaDto->setactivo($this->fechaMysql($TipofamilialinguisticaDto->getactivo()));
}
$TipofamilialinguisticaDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipofamilialinguisticaDto->getfechaRegistro(),"utf8"):strtoupper($TipofamilialinguisticaDto->getfechaRegistro()))))));
if($this->esFecha($TipofamilialinguisticaDto->getfechaRegistro())){
$TipofamilialinguisticaDto->setfechaRegistro($this->fechaMysql($TipofamilialinguisticaDto->getfechaRegistro()));
}
$TipofamilialinguisticaDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TipofamilialinguisticaDto->getfechaActualizacion(),"utf8"):strtoupper($TipofamilialinguisticaDto->getfechaActualizacion()))))));
if($this->esFecha($TipofamilialinguisticaDto->getfechaActualizacion())){
$TipofamilialinguisticaDto->setfechaActualizacion($this->fechaMysql($TipofamilialinguisticaDto->getfechaActualizacion()));
}
return $TipofamilialinguisticaDto;
}
public function selectTipofamilialinguistica($TipofamilialinguisticaDto){
$TipofamilialinguisticaDto=$this->validarTipofamilialinguistica($TipofamilialinguisticaDto);
$TipofamilialinguisticaController = new TipofamilialinguisticaController();
$TipofamilialinguisticaDto = $TipofamilialinguisticaController->selectTipofamilialinguistica($TipofamilialinguisticaDto);
if($TipofamilialinguisticaDto!=""){
$dtoToJson = new DtoToJson($TipofamilialinguisticaDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTipofamilialinguistica($TipofamilialinguisticaDto){
$TipofamilialinguisticaDto=$this->validarTipofamilialinguistica($TipofamilialinguisticaDto);
$TipofamilialinguisticaController = new TipofamilialinguisticaController();
$TipofamilialinguisticaDto = $TipofamilialinguisticaController->insertTipofamilialinguistica($TipofamilialinguisticaDto);
if($TipofamilialinguisticaDto!=""){
$dtoToJson = new DtoToJson($TipofamilialinguisticaDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTipofamilialinguistica($TipofamilialinguisticaDto){
$TipofamilialinguisticaDto=$this->validarTipofamilialinguistica($TipofamilialinguisticaDto);
$TipofamilialinguisticaController = new TipofamilialinguisticaController();
$TipofamilialinguisticaDto = $TipofamilialinguisticaController->updateTipofamilialinguistica($TipofamilialinguisticaDto);
if($TipofamilialinguisticaDto!=""){
$dtoToJson = new DtoToJson($TipofamilialinguisticaDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTipofamilialinguistica($TipofamilialinguisticaDto){
$TipofamilialinguisticaDto=$this->validarTipofamilialinguistica($TipofamilialinguisticaDto);
$TipofamilialinguisticaController = new TipofamilialinguisticaController();
$TipofamilialinguisticaDto = $TipofamilialinguisticaController->deleteTipofamilialinguistica($TipofamilialinguisticaDto);
if($TipofamilialinguisticaDto==true){
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



@$cveTipoFamiliaLinguistica=$_POST["cveTipoFamiliaLinguistica"];
@$desTipoFamiliaLinguistica=$_POST["desTipoFamiliaLinguistica"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tipofamilialinguisticaFacade = new TipofamilialinguisticaFacade();
$tipofamilialinguisticaDto = new TipofamilialinguisticaDTO();

$tipofamilialinguisticaDto->setCveTipoFamiliaLinguistica($cveTipoFamiliaLinguistica);
$tipofamilialinguisticaDto->setDesTipoFamiliaLinguistica($desTipoFamiliaLinguistica);
$tipofamilialinguisticaDto->setActivo($activo);
$tipofamilialinguisticaDto->setFechaRegistro($fechaRegistro);
$tipofamilialinguisticaDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoFamiliaLinguistica=="") ){
$tipofamilialinguisticaDto=$tipofamilialinguisticaFacade->insertTipofamilialinguistica($tipofamilialinguisticaDto);
echo $tipofamilialinguisticaDto;
} else if(($accion=="guardar") && ($cveTipoFamiliaLinguistica!="")){
$tipofamilialinguisticaDto=$tipofamilialinguisticaFacade->updateTipofamilialinguistica($tipofamilialinguisticaDto);
echo $tipofamilialinguisticaDto;
} else if($accion=="consultar"){
$tipofamilialinguisticaDto=$tipofamilialinguisticaFacade->selectTipofamilialinguistica($tipofamilialinguisticaDto);
echo $tipofamilialinguisticaDto;
} else if( ($accion=="baja") && ($cveTipoFamiliaLinguistica!="") ){
$tipofamilialinguisticaDto=$tipofamilialinguisticaFacade->deleteTipofamilialinguistica($tipofamilialinguisticaDto);
echo $tipofamilialinguisticaDto;
} else if( ($accion=="seleccionar") && ($cveTipoFamiliaLinguistica!="") ){
$tipofamilialinguisticaDto=$tipofamilialinguisticaFacade->selectTipofamilialinguistica($tipofamilialinguisticaDto);
echo $tipofamilialinguisticaDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>