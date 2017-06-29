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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/numerosdefensores/NumerosdefensoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/numerosdefensores/NumerosdefensoresController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class NumerosdefensoresFacade {
private $proveedor;
public function __construct() {
}
public function validarNumerosdefensores($NumerosdefensoresDto){
$NumerosdefensoresDto->setidnumerosdefensores(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NumerosdefensoresDto->getidnumerosdefensores(),"utf8"):strtoupper($NumerosdefensoresDto->getidnumerosdefensores()))))));
if($this->esFecha($NumerosdefensoresDto->getidnumerosdefensores())){
$NumerosdefensoresDto->setidnumerosdefensores($this->fechaMysql($NumerosdefensoresDto->getidnumerosdefensores()));
}
$NumerosdefensoresDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NumerosdefensoresDto->getidImputadoCarpeta(),"utf8"):strtoupper($NumerosdefensoresDto->getidImputadoCarpeta()))))));
if($this->esFecha($NumerosdefensoresDto->getidImputadoCarpeta())){
$NumerosdefensoresDto->setidImputadoCarpeta($this->fechaMysql($NumerosdefensoresDto->getidImputadoCarpeta()));
}
$NumerosdefensoresDto->setidCarpetaJudicial(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NumerosdefensoresDto->getidCarpetaJudicial(),"utf8"):strtoupper($NumerosdefensoresDto->getidCarpetaJudicial()))))));
if($this->esFecha($NumerosdefensoresDto->getidCarpetaJudicial())){
$NumerosdefensoresDto->setidCarpetaJudicial($this->fechaMysql($NumerosdefensoresDto->getidCarpetaJudicial()));
}
$NumerosdefensoresDto->setidDefensorImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NumerosdefensoresDto->getidDefensorImputadoCarpeta(),"utf8"):strtoupper($NumerosdefensoresDto->getidDefensorImputadoCarpeta()))))));
if($this->esFecha($NumerosdefensoresDto->getidDefensorImputadoCarpeta())){
$NumerosdefensoresDto->setidDefensorImputadoCarpeta($this->fechaMysql($NumerosdefensoresDto->getidDefensorImputadoCarpeta()));
}
$NumerosdefensoresDto->setnumeroDefensor(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NumerosdefensoresDto->getnumeroDefensor(),"utf8"):strtoupper($NumerosdefensoresDto->getnumeroDefensor()))))));
if($this->esFecha($NumerosdefensoresDto->getnumeroDefensor())){
$NumerosdefensoresDto->setnumeroDefensor($this->fechaMysql($NumerosdefensoresDto->getnumeroDefensor()));
}
return $NumerosdefensoresDto;
}
public function selectNumerosdefensores($NumerosdefensoresDto){
$NumerosdefensoresDto=$this->validarNumerosdefensores($NumerosdefensoresDto);
$NumerosdefensoresController = new NumerosdefensoresController();
$NumerosdefensoresDto = $NumerosdefensoresController->selectNumerosdefensores($NumerosdefensoresDto);
if($NumerosdefensoresDto!=""){
$dtoToJson = new DtoToJson($NumerosdefensoresDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertNumerosdefensores($NumerosdefensoresDto){
$NumerosdefensoresDto=$this->validarNumerosdefensores($NumerosdefensoresDto);
$NumerosdefensoresController = new NumerosdefensoresController();
$NumerosdefensoresDto = $NumerosdefensoresController->insertNumerosdefensores($NumerosdefensoresDto);
if($NumerosdefensoresDto!=""){
$dtoToJson = new DtoToJson($NumerosdefensoresDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateNumerosdefensores($NumerosdefensoresDto){
$NumerosdefensoresDto=$this->validarNumerosdefensores($NumerosdefensoresDto);
$NumerosdefensoresController = new NumerosdefensoresController();
$NumerosdefensoresDto = $NumerosdefensoresController->updateNumerosdefensores($NumerosdefensoresDto);
if($NumerosdefensoresDto!=""){
$dtoToJson = new DtoToJson($NumerosdefensoresDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteNumerosdefensores($NumerosdefensoresDto){
$NumerosdefensoresDto=$this->validarNumerosdefensores($NumerosdefensoresDto);
$NumerosdefensoresController = new NumerosdefensoresController();
$NumerosdefensoresDto = $NumerosdefensoresController->deleteNumerosdefensores($NumerosdefensoresDto);
if($NumerosdefensoresDto==true){
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



@$idnumerosdefensores=$_POST["idnumerosdefensores"];
@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
@$idCarpetaJudicial=$_POST["idCarpetaJudicial"];
@$idDefensorImputadoCarpeta=$_POST["idDefensorImputadoCarpeta"];
@$numeroDefensor=$_POST["numeroDefensor"];
@$accion=$_POST["accion"];

$numerosdefensoresFacade = new NumerosdefensoresFacade();
$numerosdefensoresDto = new NumerosdefensoresDTO();

$numerosdefensoresDto->setIdnumerosdefensores($idnumerosdefensores);
$numerosdefensoresDto->setIdImputadoCarpeta($idImputadoCarpeta);
$numerosdefensoresDto->setIdCarpetaJudicial($idCarpetaJudicial);
$numerosdefensoresDto->setIdDefensorImputadoCarpeta($idDefensorImputadoCarpeta);
$numerosdefensoresDto->setNumeroDefensor($numeroDefensor);

if( ($accion=="guardar") && ($idnumerosdefensores=="") ){
$numerosdefensoresDto=$numerosdefensoresFacade->insertNumerosdefensores($numerosdefensoresDto);
echo $numerosdefensoresDto;
} else if(($accion=="guardar") && ($idnumerosdefensores!="")){
$numerosdefensoresDto=$numerosdefensoresFacade->updateNumerosdefensores($numerosdefensoresDto);
echo $numerosdefensoresDto;
} else if($accion=="consultar"){
$numerosdefensoresDto=$numerosdefensoresFacade->selectNumerosdefensores($numerosdefensoresDto);
echo $numerosdefensoresDto;
} else if( ($accion=="baja") && ($idnumerosdefensores!="") ){
$numerosdefensoresDto=$numerosdefensoresFacade->deleteNumerosdefensores($numerosdefensoresDto);
echo $numerosdefensoresDto;
} else if( ($accion=="seleccionar") && ($idnumerosdefensores!="") ){
$numerosdefensoresDto=$numerosdefensoresFacade->selectNumerosdefensores($numerosdefensoresDto);
echo $numerosdefensoresDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>