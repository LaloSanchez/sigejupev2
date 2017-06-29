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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposordenes/TiposordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposordenes/TiposordenesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposordenesFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposordenes($TiposordenesDto){
$TiposordenesDto->setcveTipoOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposordenesDto->getcveTipoOrden(),"utf8"):strtoupper($TiposordenesDto->getcveTipoOrden()))))));
if($this->esFecha($TiposordenesDto->getcveTipoOrden())){
$TiposordenesDto->setcveTipoOrden($this->fechaMysql($TiposordenesDto->getcveTipoOrden()));
}
$TiposordenesDto->setdesTipoOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposordenesDto->getdesTipoOrden(),"utf8"):strtoupper($TiposordenesDto->getdesTipoOrden()))))));
if($this->esFecha($TiposordenesDto->getdesTipoOrden())){
$TiposordenesDto->setdesTipoOrden($this->fechaMysql($TiposordenesDto->getdesTipoOrden()));
}
$TiposordenesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposordenesDto->getactivo(),"utf8"):strtoupper($TiposordenesDto->getactivo()))))));
if($this->esFecha($TiposordenesDto->getactivo())){
$TiposordenesDto->setactivo($this->fechaMysql($TiposordenesDto->getactivo()));
}
$TiposordenesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposordenesDto->getfechaRegistro(),"utf8"):strtoupper($TiposordenesDto->getfechaRegistro()))))));
if($this->esFecha($TiposordenesDto->getfechaRegistro())){
$TiposordenesDto->setfechaRegistro($this->fechaMysql($TiposordenesDto->getfechaRegistro()));
}
$TiposordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposordenesDto->getfechaActualizacion(),"utf8"):strtoupper($TiposordenesDto->getfechaActualizacion()))))));
if($this->esFecha($TiposordenesDto->getfechaActualizacion())){
$TiposordenesDto->setfechaActualizacion($this->fechaMysql($TiposordenesDto->getfechaActualizacion()));
}
return $TiposordenesDto;
}
public function selectTiposordenes($TiposordenesDto){
$TiposordenesDto=$this->validarTiposordenes($TiposordenesDto);
$TiposordenesController = new TiposordenesController();
$TiposordenesDto = $TiposordenesController->selectTiposordenes($TiposordenesDto);
if($TiposordenesDto!=""){
$dtoToJson = new DtoToJson($TiposordenesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposordenes($TiposordenesDto){
$TiposordenesDto=$this->validarTiposordenes($TiposordenesDto);
$TiposordenesController = new TiposordenesController();
$TiposordenesDto = $TiposordenesController->insertTiposordenes($TiposordenesDto);
if($TiposordenesDto!=""){
$dtoToJson = new DtoToJson($TiposordenesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposordenes($TiposordenesDto){
$TiposordenesDto=$this->validarTiposordenes($TiposordenesDto);
$TiposordenesController = new TiposordenesController();
$TiposordenesDto = $TiposordenesController->updateTiposordenes($TiposordenesDto);
if($TiposordenesDto!=""){
$dtoToJson = new DtoToJson($TiposordenesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposordenes($TiposordenesDto){
$TiposordenesDto=$this->validarTiposordenes($TiposordenesDto);
$TiposordenesController = new TiposordenesController();
$TiposordenesDto = $TiposordenesController->deleteTiposordenes($TiposordenesDto);
if($TiposordenesDto==true){
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



@$cveTipoOrden=$_POST["cveTipoOrden"];
@$desTipoOrden=$_POST["desTipoOrden"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposordenesFacade = new TiposordenesFacade();
$tiposordenesDto = new TiposordenesDTO();

$tiposordenesDto->setCveTipoOrden($cveTipoOrden);
$tiposordenesDto->setDesTipoOrden($desTipoOrden);
$tiposordenesDto->setActivo($activo);
$tiposordenesDto->setFechaRegistro($fechaRegistro);
$tiposordenesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoOrden=="") ){
$tiposordenesDto=$tiposordenesFacade->insertTiposordenes($tiposordenesDto);
echo $tiposordenesDto;
} else if(($accion=="guardar") && ($cveTipoOrden!="")){
$tiposordenesDto=$tiposordenesFacade->updateTiposordenes($tiposordenesDto);
echo $tiposordenesDto;
} else if($accion=="consultar"){
$tiposordenesDto=$tiposordenesFacade->selectTiposordenes($tiposordenesDto);
echo $tiposordenesDto;
} else if( ($accion=="baja") && ($cveTipoOrden!="") ){
$tiposordenesDto=$tiposordenesFacade->deleteTiposordenes($tiposordenesDto);
echo $tiposordenesDto;
} else if( ($accion=="seleccionar") && ($cveTipoOrden!="") ){
$tiposordenesDto=$tiposordenesFacade->selectTiposordenes($tiposordenesDto);
echo $tiposordenesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>