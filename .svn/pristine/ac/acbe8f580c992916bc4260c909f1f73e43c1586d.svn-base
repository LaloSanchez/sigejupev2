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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/muestras/MuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/muestras/MuestrasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class MuestrasFacade {
private $proveedor;
public function __construct() {
}
public function validarMuestras($MuestrasDto){
$MuestrasDto->setcveMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MuestrasDto->getcveMuestra(),"utf8"):strtoupper($MuestrasDto->getcveMuestra()))))));
if($this->esFecha($MuestrasDto->getcveMuestra())){
$MuestrasDto->setcveMuestra($this->fechaMysql($MuestrasDto->getcveMuestra()));
}
$MuestrasDto->setdesMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MuestrasDto->getdesMuestra(),"utf8"):strtoupper($MuestrasDto->getdesMuestra()))))));
if($this->esFecha($MuestrasDto->getdesMuestra())){
$MuestrasDto->setdesMuestra($this->fechaMysql($MuestrasDto->getdesMuestra()));
}
$MuestrasDto->setTipo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MuestrasDto->getTipo(),"utf8"):strtoupper($MuestrasDto->getTipo()))))));
if($this->esFecha($MuestrasDto->getTipo())){
$MuestrasDto->setTipo($this->fechaMysql($MuestrasDto->getTipo()));
}
$MuestrasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MuestrasDto->getactivo(),"utf8"):strtoupper($MuestrasDto->getactivo()))))));
if($this->esFecha($MuestrasDto->getactivo())){
$MuestrasDto->setactivo($this->fechaMysql($MuestrasDto->getactivo()));
}
$MuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MuestrasDto->getfechaRegistro(),"utf8"):strtoupper($MuestrasDto->getfechaRegistro()))))));
if($this->esFecha($MuestrasDto->getfechaRegistro())){
$MuestrasDto->setfechaRegistro($this->fechaMysql($MuestrasDto->getfechaRegistro()));
}
$MuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MuestrasDto->getfechaActualizacion(),"utf8"):strtoupper($MuestrasDto->getfechaActualizacion()))))));
if($this->esFecha($MuestrasDto->getfechaActualizacion())){
$MuestrasDto->setfechaActualizacion($this->fechaMysql($MuestrasDto->getfechaActualizacion()));
}
return $MuestrasDto;
}
public function selectMuestras($MuestrasDto){
$MuestrasDto=$this->validarMuestras($MuestrasDto);
$MuestrasController = new MuestrasController();
$MuestrasDto = $MuestrasController->selectMuestras($MuestrasDto);
if($MuestrasDto!=""){
$dtoToJson = new DtoToJson($MuestrasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertMuestras($MuestrasDto){
$MuestrasDto=$this->validarMuestras($MuestrasDto);
$MuestrasController = new MuestrasController();
$MuestrasDto = $MuestrasController->insertMuestras($MuestrasDto);
if($MuestrasDto!=""){
$dtoToJson = new DtoToJson($MuestrasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateMuestras($MuestrasDto){
$MuestrasDto=$this->validarMuestras($MuestrasDto);
$MuestrasController = new MuestrasController();
$MuestrasDto = $MuestrasController->updateMuestras($MuestrasDto);
if($MuestrasDto!=""){
$dtoToJson = new DtoToJson($MuestrasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteMuestras($MuestrasDto){
$MuestrasDto=$this->validarMuestras($MuestrasDto);
$MuestrasController = new MuestrasController();
$MuestrasDto = $MuestrasController->deleteMuestras($MuestrasDto);
if($MuestrasDto==true){
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



@$cveMuestra=$_POST["cveMuestra"];
@$desMuestra=$_POST["desMuestra"];
@$Tipo=$_POST["Tipo"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$muestrasFacade = new MuestrasFacade();
$muestrasDto = new MuestrasDTO();

$muestrasDto->setCveMuestra($cveMuestra);
$muestrasDto->setDesMuestra($desMuestra);
$muestrasDto->setTipo($Tipo);
$muestrasDto->setActivo($activo);
$muestrasDto->setFechaRegistro($fechaRegistro);
$muestrasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveMuestra=="") ){
$muestrasDto=$muestrasFacade->insertMuestras($muestrasDto);
echo $muestrasDto;
} else if(($accion=="guardar") && ($cveMuestra!="")){
$muestrasDto=$muestrasFacade->updateMuestras($muestrasDto);
echo $muestrasDto;
} else if($accion=="consultar"){
$muestrasDto=$muestrasFacade->selectMuestras($muestrasDto);
echo $muestrasDto;
} else if( ($accion=="baja") && ($cveMuestra!="") ){
$muestrasDto=$muestrasFacade->deleteMuestras($muestrasDto);
echo $muestrasDto;
} else if( ($accion=="seleccionar") && ($cveMuestra!="") ){
$muestrasDto=$muestrasFacade->selectMuestras($muestrasDto);
echo $muestrasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>