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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/trataspersonascarpetas/TrataspersonascarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/trataspersonascarpetas/TrataspersonascarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TrataspersonascarpetasFacade {
private $proveedor;
public function __construct() {
}
public function validarTrataspersonascarpetas($TrataspersonascarpetasDto){
$TrataspersonascarpetasDto->setidTrataPersonaCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getidTrataPersonaCarpeta(),"utf8"):strtoupper($TrataspersonascarpetasDto->getidTrataPersonaCarpeta()))))));
if($this->esFecha($TrataspersonascarpetasDto->getidTrataPersonaCarpeta())){
$TrataspersonascarpetasDto->setidTrataPersonaCarpeta($this->fechaMysql($TrataspersonascarpetasDto->getidTrataPersonaCarpeta()));
}
$TrataspersonascarpetasDto->setcveEstadoDestino(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getcveEstadoDestino(),"utf8"):strtoupper($TrataspersonascarpetasDto->getcveEstadoDestino()))))));
if($this->esFecha($TrataspersonascarpetasDto->getcveEstadoDestino())){
$TrataspersonascarpetasDto->setcveEstadoDestino($this->fechaMysql($TrataspersonascarpetasDto->getcveEstadoDestino()));
}
$TrataspersonascarpetasDto->setcveMunicipioDestino(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getcveMunicipioDestino(),"utf8"):strtoupper($TrataspersonascarpetasDto->getcveMunicipioDestino()))))));
if($this->esFecha($TrataspersonascarpetasDto->getcveMunicipioDestino())){
$TrataspersonascarpetasDto->setcveMunicipioDestino($this->fechaMysql($TrataspersonascarpetasDto->getcveMunicipioDestino()));
}
$TrataspersonascarpetasDto->setcvePaisDestino(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getcvePaisDestino(),"utf8"):strtoupper($TrataspersonascarpetasDto->getcvePaisDestino()))))));
if($this->esFecha($TrataspersonascarpetasDto->getcvePaisDestino())){
$TrataspersonascarpetasDto->setcvePaisDestino($this->fechaMysql($TrataspersonascarpetasDto->getcvePaisDestino()));
}
$TrataspersonascarpetasDto->setestadoDestino(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getestadoDestino(),"utf8"):strtoupper($TrataspersonascarpetasDto->getestadoDestino()))))));
if($this->esFecha($TrataspersonascarpetasDto->getestadoDestino())){
$TrataspersonascarpetasDto->setestadoDestino($this->fechaMysql($TrataspersonascarpetasDto->getestadoDestino()));
}
$TrataspersonascarpetasDto->setmunicipioDestino(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getmunicipioDestino(),"utf8"):strtoupper($TrataspersonascarpetasDto->getmunicipioDestino()))))));
if($this->esFecha($TrataspersonascarpetasDto->getmunicipioDestino())){
$TrataspersonascarpetasDto->setmunicipioDestino($this->fechaMysql($TrataspersonascarpetasDto->getmunicipioDestino()));
}
$TrataspersonascarpetasDto->setcveEstadoOrigen(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getcveEstadoOrigen(),"utf8"):strtoupper($TrataspersonascarpetasDto->getcveEstadoOrigen()))))));
if($this->esFecha($TrataspersonascarpetasDto->getcveEstadoOrigen())){
$TrataspersonascarpetasDto->setcveEstadoOrigen($this->fechaMysql($TrataspersonascarpetasDto->getcveEstadoOrigen()));
}
$TrataspersonascarpetasDto->setcveMunicipioOrigen(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getcveMunicipioOrigen(),"utf8"):strtoupper($TrataspersonascarpetasDto->getcveMunicipioOrigen()))))));
if($this->esFecha($TrataspersonascarpetasDto->getcveMunicipioOrigen())){
$TrataspersonascarpetasDto->setcveMunicipioOrigen($this->fechaMysql($TrataspersonascarpetasDto->getcveMunicipioOrigen()));
}
$TrataspersonascarpetasDto->setcvePaisOrigen(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getcvePaisOrigen(),"utf8"):strtoupper($TrataspersonascarpetasDto->getcvePaisOrigen()))))));
if($this->esFecha($TrataspersonascarpetasDto->getcvePaisOrigen())){
$TrataspersonascarpetasDto->setcvePaisOrigen($this->fechaMysql($TrataspersonascarpetasDto->getcvePaisOrigen()));
}
$TrataspersonascarpetasDto->setestadoOrigen(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getestadoOrigen(),"utf8"):strtoupper($TrataspersonascarpetasDto->getestadoOrigen()))))));
if($this->esFecha($TrataspersonascarpetasDto->getestadoOrigen())){
$TrataspersonascarpetasDto->setestadoOrigen($this->fechaMysql($TrataspersonascarpetasDto->getestadoOrigen()));
}
$TrataspersonascarpetasDto->setmunicipioOrigen(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getmunicipioOrigen(),"utf8"):strtoupper($TrataspersonascarpetasDto->getmunicipioOrigen()))))));
if($this->esFecha($TrataspersonascarpetasDto->getmunicipioOrigen())){
$TrataspersonascarpetasDto->setmunicipioOrigen($this->fechaMysql($TrataspersonascarpetasDto->getmunicipioOrigen()));
}
$TrataspersonascarpetasDto->setcveTipoTrata(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getcveTipoTrata(),"utf8"):strtoupper($TrataspersonascarpetasDto->getcveTipoTrata()))))));
if($this->esFecha($TrataspersonascarpetasDto->getcveTipoTrata())){
$TrataspersonascarpetasDto->setcveTipoTrata($this->fechaMysql($TrataspersonascarpetasDto->getcveTipoTrata()));
}
$TrataspersonascarpetasDto->setcveTrasportacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getcveTrasportacion(),"utf8"):strtoupper($TrataspersonascarpetasDto->getcveTrasportacion()))))));
if($this->esFecha($TrataspersonascarpetasDto->getcveTrasportacion())){
$TrataspersonascarpetasDto->setcveTrasportacion($this->fechaMysql($TrataspersonascarpetasDto->getcveTrasportacion()));
}
$TrataspersonascarpetasDto->setidImpOfeDelCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TrataspersonascarpetasDto->getidImpOfeDelCarpeta(),"utf8"):strtoupper($TrataspersonascarpetasDto->getidImpOfeDelCarpeta()))))));
if($this->esFecha($TrataspersonascarpetasDto->getidImpOfeDelCarpeta())){
$TrataspersonascarpetasDto->setidImpOfeDelCarpeta($this->fechaMysql($TrataspersonascarpetasDto->getidImpOfeDelCarpeta()));
}
return $TrataspersonascarpetasDto;
}
public function selectTrataspersonascarpetas($TrataspersonascarpetasDto){
$TrataspersonascarpetasDto=$this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
$TrataspersonascarpetasController = new TrataspersonascarpetasController();
$TrataspersonascarpetasDto = $TrataspersonascarpetasController->selectTrataspersonascarpetas($TrataspersonascarpetasDto);
if($TrataspersonascarpetasDto!=""){
$dtoToJson = new DtoToJson($TrataspersonascarpetasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTrataspersonascarpetas($TrataspersonascarpetasDto){
$TrataspersonascarpetasDto=$this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
$TrataspersonascarpetasController = new TrataspersonascarpetasController();
$TrataspersonascarpetasDto = $TrataspersonascarpetasController->insertTrataspersonascarpetas($TrataspersonascarpetasDto);
if($TrataspersonascarpetasDto!=""){
$dtoToJson = new DtoToJson($TrataspersonascarpetasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTrataspersonascarpetas($TrataspersonascarpetasDto){
$TrataspersonascarpetasDto=$this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
$TrataspersonascarpetasController = new TrataspersonascarpetasController();
$TrataspersonascarpetasDto = $TrataspersonascarpetasController->updateTrataspersonascarpetas($TrataspersonascarpetasDto);
if($TrataspersonascarpetasDto!=""){
$dtoToJson = new DtoToJson($TrataspersonascarpetasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTrataspersonascarpetas($TrataspersonascarpetasDto){
$TrataspersonascarpetasDto=$this->validarTrataspersonascarpetas($TrataspersonascarpetasDto);
$TrataspersonascarpetasController = new TrataspersonascarpetasController();
$TrataspersonascarpetasDto = $TrataspersonascarpetasController->deleteTrataspersonascarpetas($TrataspersonascarpetasDto);
if($TrataspersonascarpetasDto==true){
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



@$idTrataPersonaCarpeta=$_POST["idTrataPersonaCarpeta"];
@$cveEstadoDestino=$_POST["cveEstadoDestino"];
@$cveMunicipioDestino=$_POST["cveMunicipioDestino"];
@$cvePaisDestino=$_POST["cvePaisDestino"];
@$estadoDestino=$_POST["estadoDestino"];
@$municipioDestino=$_POST["municipioDestino"];
@$cveEstadoOrigen=$_POST["cveEstadoOrigen"];
@$cveMunicipioOrigen=$_POST["cveMunicipioOrigen"];
@$cvePaisOrigen=$_POST["cvePaisOrigen"];
@$estadoOrigen=$_POST["estadoOrigen"];
@$municipioOrigen=$_POST["municipioOrigen"];
@$cveTipoTrata=$_POST["cveTipoTrata"];
@$cveTrasportacion=$_POST["cveTrasportacion"];
@$idImpOfeDelCarpeta=$_POST["idImpOfeDelCarpeta"];
@$accion=$_POST["accion"];

$trataspersonascarpetasFacade = new TrataspersonascarpetasFacade();
$trataspersonascarpetasDto = new TrataspersonascarpetasDTO();

$trataspersonascarpetasDto->setIdTrataPersonaCarpeta($idTrataPersonaCarpeta);
$trataspersonascarpetasDto->setCveEstadoDestino($cveEstadoDestino);
$trataspersonascarpetasDto->setCveMunicipioDestino($cveMunicipioDestino);
$trataspersonascarpetasDto->setCvePaisDestino($cvePaisDestino);
$trataspersonascarpetasDto->setEstadoDestino($estadoDestino);
$trataspersonascarpetasDto->setMunicipioDestino($municipioDestino);
$trataspersonascarpetasDto->setCveEstadoOrigen($cveEstadoOrigen);
$trataspersonascarpetasDto->setCveMunicipioOrigen($cveMunicipioOrigen);
$trataspersonascarpetasDto->setCvePaisOrigen($cvePaisOrigen);
$trataspersonascarpetasDto->setEstadoOrigen($estadoOrigen);
$trataspersonascarpetasDto->setMunicipioOrigen($municipioOrigen);
$trataspersonascarpetasDto->setCveTipoTrata($cveTipoTrata);
$trataspersonascarpetasDto->setCveTrasportacion($cveTrasportacion);
$trataspersonascarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);

if( ($accion=="guardar") && ($idTrataPersonaCarpeta=="") ){
$trataspersonascarpetasDto=$trataspersonascarpetasFacade->insertTrataspersonascarpetas($trataspersonascarpetasDto);
echo $trataspersonascarpetasDto;
} else if(($accion=="guardar") && ($idTrataPersonaCarpeta!="")){
$trataspersonascarpetasDto=$trataspersonascarpetasFacade->updateTrataspersonascarpetas($trataspersonascarpetasDto);
echo $trataspersonascarpetasDto;
} else if($accion=="consultar"){
$trataspersonascarpetasDto=$trataspersonascarpetasFacade->selectTrataspersonascarpetas($trataspersonascarpetasDto);
echo $trataspersonascarpetasDto;
} else if( ($accion=="baja") && ($idTrataPersonaCarpeta!="") ){
$trataspersonascarpetasDto=$trataspersonascarpetasFacade->deleteTrataspersonascarpetas($trataspersonascarpetasDto);
echo $trataspersonascarpetasDto;
} else if( ($accion=="seleccionar") && ($idTrataPersonaCarpeta!="") ){
$trataspersonascarpetasDto=$trataspersonascarpetasFacade->selectTrataspersonascarpetas($trataspersonascarpetasDto);
echo $trataspersonascarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>