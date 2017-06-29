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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposdefensores/TiposdefensoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposdefensores/TiposdefensoresController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposdefensoresFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposdefensores($TiposdefensoresDto){
$TiposdefensoresDto->setcveTipoDefensor(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdefensoresDto->getcveTipoDefensor(),"utf8"):strtoupper($TiposdefensoresDto->getcveTipoDefensor()))))));
if($this->esFecha($TiposdefensoresDto->getcveTipoDefensor())){
$TiposdefensoresDto->setcveTipoDefensor($this->fechaMysql($TiposdefensoresDto->getcveTipoDefensor()));
}
$TiposdefensoresDto->setdesTipoDefensor(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdefensoresDto->getdesTipoDefensor(),"utf8"):strtoupper($TiposdefensoresDto->getdesTipoDefensor()))))));
if($this->esFecha($TiposdefensoresDto->getdesTipoDefensor())){
$TiposdefensoresDto->setdesTipoDefensor($this->fechaMysql($TiposdefensoresDto->getdesTipoDefensor()));
}
$TiposdefensoresDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdefensoresDto->getactivo(),"utf8"):strtoupper($TiposdefensoresDto->getactivo()))))));
if($this->esFecha($TiposdefensoresDto->getactivo())){
$TiposdefensoresDto->setactivo($this->fechaMysql($TiposdefensoresDto->getactivo()));
}
$TiposdefensoresDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdefensoresDto->getfechaRegistro(),"utf8"):strtoupper($TiposdefensoresDto->getfechaRegistro()))))));
if($this->esFecha($TiposdefensoresDto->getfechaRegistro())){
$TiposdefensoresDto->setfechaRegistro($this->fechaMysql($TiposdefensoresDto->getfechaRegistro()));
}
$TiposdefensoresDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposdefensoresDto->getfechaActualizacion(),"utf8"):strtoupper($TiposdefensoresDto->getfechaActualizacion()))))));
if($this->esFecha($TiposdefensoresDto->getfechaActualizacion())){
$TiposdefensoresDto->setfechaActualizacion($this->fechaMysql($TiposdefensoresDto->getfechaActualizacion()));
}
return $TiposdefensoresDto;
}
public function selectTiposdefensores($TiposdefensoresDto){
$TiposdefensoresDto=$this->validarTiposdefensores($TiposdefensoresDto);
$TiposdefensoresController = new TiposdefensoresController();
$TiposdefensoresDto = $TiposdefensoresController->selectTiposdefensores($TiposdefensoresDto);
if($TiposdefensoresDto!=""){
$dtoToJson = new DtoToJson($TiposdefensoresDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposdefensores($TiposdefensoresDto){
$TiposdefensoresDto=$this->validarTiposdefensores($TiposdefensoresDto);
$TiposdefensoresController = new TiposdefensoresController();
$TiposdefensoresDto = $TiposdefensoresController->insertTiposdefensores($TiposdefensoresDto);
if($TiposdefensoresDto!=""){
$dtoToJson = new DtoToJson($TiposdefensoresDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposdefensores($TiposdefensoresDto){
$TiposdefensoresDto=$this->validarTiposdefensores($TiposdefensoresDto);
$TiposdefensoresController = new TiposdefensoresController();
$TiposdefensoresDto = $TiposdefensoresController->updateTiposdefensores($TiposdefensoresDto);
if($TiposdefensoresDto!=""){
$dtoToJson = new DtoToJson($TiposdefensoresDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposdefensores($TiposdefensoresDto){
$TiposdefensoresDto=$this->validarTiposdefensores($TiposdefensoresDto);
$TiposdefensoresController = new TiposdefensoresController();
$TiposdefensoresDto = $TiposdefensoresController->deleteTiposdefensores($TiposdefensoresDto);
if($TiposdefensoresDto==true){
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



@$cveTipoDefensor=$_POST["cveTipoDefensor"];
@$desTipoDefensor=$_POST["desTipoDefensor"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposdefensoresFacade = new TiposdefensoresFacade();
$tiposdefensoresDto = new TiposdefensoresDTO();

$tiposdefensoresDto->setCveTipoDefensor($cveTipoDefensor);
$tiposdefensoresDto->setDesTipoDefensor($desTipoDefensor);
$tiposdefensoresDto->setActivo($activo);
$tiposdefensoresDto->setFechaRegistro($fechaRegistro);
$tiposdefensoresDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoDefensor=="") ){
$tiposdefensoresDto=$tiposdefensoresFacade->insertTiposdefensores($tiposdefensoresDto);
echo $tiposdefensoresDto;
} else if(($accion=="guardar") && ($cveTipoDefensor!="")){
$tiposdefensoresDto=$tiposdefensoresFacade->updateTiposdefensores($tiposdefensoresDto);
echo $tiposdefensoresDto;
} else if($accion=="consultar"){
$tiposdefensoresDto=$tiposdefensoresFacade->selectTiposdefensores($tiposdefensoresDto);
echo $tiposdefensoresDto;
} else if( ($accion=="baja") && ($cveTipoDefensor!="") ){
$tiposdefensoresDto=$tiposdefensoresFacade->deleteTiposdefensores($tiposdefensoresDto);
echo $tiposdefensoresDto;
} else if( ($accion=="seleccionar") && ($cveTipoDefensor!="") ){
$tiposdefensoresDto=$tiposdefensoresFacade->selectTiposdefensores($tiposdefensoresDto);
echo $tiposdefensoresDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>