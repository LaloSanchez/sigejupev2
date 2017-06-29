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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/controlsalas/ControlsalasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/controlsalas/ControlsalasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ControlsalasFacade {
private $proveedor;
public function __construct() {
}
public function validarControlsalas($ControlsalasDto){
$ControlsalasDto->setidControlSala(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ControlsalasDto->getidControlSala(),"utf8"):strtoupper($ControlsalasDto->getidControlSala()))))));
if($this->esFecha($ControlsalasDto->getidControlSala())){
$ControlsalasDto->setidControlSala($this->fechaMysql($ControlsalasDto->getidControlSala()));
}
$ControlsalasDto->setanio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ControlsalasDto->getanio(),"utf8"):strtoupper($ControlsalasDto->getanio()))))));
if($this->esFecha($ControlsalasDto->getanio())){
$ControlsalasDto->setanio($this->fechaMysql($ControlsalasDto->getanio()));
}
$ControlsalasDto->setcveMes(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ControlsalasDto->getcveMes(),"utf8"):strtoupper($ControlsalasDto->getcveMes()))))));
if($this->esFecha($ControlsalasDto->getcveMes())){
$ControlsalasDto->setcveMes($this->fechaMysql($ControlsalasDto->getcveMes()));
}
$ControlsalasDto->setcveSala(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ControlsalasDto->getcveSala(),"utf8"):strtoupper($ControlsalasDto->getcveSala()))))));
if($this->esFecha($ControlsalasDto->getcveSala())){
$ControlsalasDto->setcveSala($this->fechaMysql($ControlsalasDto->getcveSala()));
}
$ControlsalasDto->settotalHoras(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ControlsalasDto->gettotalHoras(),"utf8"):strtoupper($ControlsalasDto->gettotalHoras()))))));
if($this->esFecha($ControlsalasDto->gettotalHoras())){
$ControlsalasDto->settotalHoras($this->fechaMysql($ControlsalasDto->gettotalHoras()));
}
$ControlsalasDto->setcontrol(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ControlsalasDto->getcontrol(),"utf8"):strtoupper($ControlsalasDto->getcontrol()))))));
if($this->esFecha($ControlsalasDto->getcontrol())){
$ControlsalasDto->setcontrol($this->fechaMysql($ControlsalasDto->getcontrol()));
}
$ControlsalasDto->settotalAsignados(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ControlsalasDto->gettotalAsignados(),"utf8"):strtoupper($ControlsalasDto->gettotalAsignados()))))));
if($this->esFecha($ControlsalasDto->gettotalAsignados())){
$ControlsalasDto->settotalAsignados($this->fechaMysql($ControlsalasDto->gettotalAsignados()));
}
$ControlsalasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ControlsalasDto->getfechaRegistro(),"utf8"):strtoupper($ControlsalasDto->getfechaRegistro()))))));
if($this->esFecha($ControlsalasDto->getfechaRegistro())){
$ControlsalasDto->setfechaRegistro($this->fechaMysql($ControlsalasDto->getfechaRegistro()));
}
$ControlsalasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ControlsalasDto->getfechaActualizacion(),"utf8"):strtoupper($ControlsalasDto->getfechaActualizacion()))))));
if($this->esFecha($ControlsalasDto->getfechaActualizacion())){
$ControlsalasDto->setfechaActualizacion($this->fechaMysql($ControlsalasDto->getfechaActualizacion()));
}
return $ControlsalasDto;
}
public function selectControlsalas($ControlsalasDto){
$ControlsalasDto=$this->validarControlsalas($ControlsalasDto);
$ControlsalasController = new ControlsalasController();
$ControlsalasDto = $ControlsalasController->selectControlsalas($ControlsalasDto);
if($ControlsalasDto!=""){
$dtoToJson = new DtoToJson($ControlsalasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertControlsalas($ControlsalasDto){
$ControlsalasDto=$this->validarControlsalas($ControlsalasDto);
$ControlsalasController = new ControlsalasController();
$ControlsalasDto = $ControlsalasController->insertControlsalas($ControlsalasDto);
if($ControlsalasDto!=""){
$dtoToJson = new DtoToJson($ControlsalasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateControlsalas($ControlsalasDto){
$ControlsalasDto=$this->validarControlsalas($ControlsalasDto);
$ControlsalasController = new ControlsalasController();
$ControlsalasDto = $ControlsalasController->updateControlsalas($ControlsalasDto);
if($ControlsalasDto!=""){
$dtoToJson = new DtoToJson($ControlsalasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteControlsalas($ControlsalasDto){
$ControlsalasDto=$this->validarControlsalas($ControlsalasDto);
$ControlsalasController = new ControlsalasController();
$ControlsalasDto = $ControlsalasController->deleteControlsalas($ControlsalasDto);
if($ControlsalasDto==true){
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



@$idControlSala=$_POST["idControlSala"];
@$anio=$_POST["anio"];
@$cveMes=$_POST["cveMes"];
@$cveSala=$_POST["cveSala"];
@$totalHoras=$_POST["totalHoras"];
@$control=$_POST["control"];
@$totalAsignados=$_POST["totalAsignados"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$controlsalasFacade = new ControlsalasFacade();
$controlsalasDto = new ControlsalasDTO();

$controlsalasDto->setIdControlSala($idControlSala);
$controlsalasDto->setAnio($anio);
$controlsalasDto->setCveMes($cveMes);
$controlsalasDto->setCveSala($cveSala);
$controlsalasDto->setTotalHoras($totalHoras);
$controlsalasDto->setControl($control);
$controlsalasDto->setTotalAsignados($totalAsignados);
$controlsalasDto->setFechaRegistro($fechaRegistro);
$controlsalasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idControlSala=="") ){
$controlsalasDto=$controlsalasFacade->insertControlsalas($controlsalasDto);
echo $controlsalasDto;
} else if(($accion=="guardar") && ($idControlSala!="")){
$controlsalasDto=$controlsalasFacade->updateControlsalas($controlsalasDto);
echo $controlsalasDto;
} else if($accion=="consultar"){
$controlsalasDto=$controlsalasFacade->selectControlsalas($controlsalasDto);
echo $controlsalasDto;
} else if( ($accion=="baja") && ($idControlSala!="") ){
$controlsalasDto=$controlsalasFacade->deleteControlsalas($controlsalasDto);
echo $controlsalasDto;
} else if( ($accion=="seleccionar") && ($idControlSala!="") ){
$controlsalasDto=$controlsalasFacade->selectControlsalas($controlsalasDto);
echo $controlsalasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>