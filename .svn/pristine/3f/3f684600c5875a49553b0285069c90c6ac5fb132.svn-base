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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitosordenes/DelitosordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/delitosordenes/DelitosordenesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class DelitosordenesFacade {
private $proveedor;
public function __construct() {
}
public function validarDelitosordenes($DelitosordenesDto){
$DelitosordenesDto->setidDelitoOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosordenesDto->getidDelitoOrden(),"utf8"):strtoupper($DelitosordenesDto->getidDelitoOrden()))))));
if($this->esFecha($DelitosordenesDto->getidDelitoOrden())){
$DelitosordenesDto->setidDelitoOrden($this->fechaMysql($DelitosordenesDto->getidDelitoOrden()));
}
$DelitosordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosordenesDto->getidSolicitudOrden(),"utf8"):strtoupper($DelitosordenesDto->getidSolicitudOrden()))))));
if($this->esFecha($DelitosordenesDto->getidSolicitudOrden())){
$DelitosordenesDto->setidSolicitudOrden($this->fechaMysql($DelitosordenesDto->getidSolicitudOrden()));
}
$DelitosordenesDto->setcveDelito(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosordenesDto->getcveDelito(),"utf8"):strtoupper($DelitosordenesDto->getcveDelito()))))));
if($this->esFecha($DelitosordenesDto->getcveDelito())){
$DelitosordenesDto->setcveDelito($this->fechaMysql($DelitosordenesDto->getcveDelito()));
}
$DelitosordenesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosordenesDto->getactivo(),"utf8"):strtoupper($DelitosordenesDto->getactivo()))))));
if($this->esFecha($DelitosordenesDto->getactivo())){
$DelitosordenesDto->setactivo($this->fechaMysql($DelitosordenesDto->getactivo()));
}
$DelitosordenesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosordenesDto->getfechaRegistro(),"utf8"):strtoupper($DelitosordenesDto->getfechaRegistro()))))));
if($this->esFecha($DelitosordenesDto->getfechaRegistro())){
$DelitosordenesDto->setfechaRegistro($this->fechaMysql($DelitosordenesDto->getfechaRegistro()));
}
$DelitosordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosordenesDto->getfechaActualizacion(),"utf8"):strtoupper($DelitosordenesDto->getfechaActualizacion()))))));
if($this->esFecha($DelitosordenesDto->getfechaActualizacion())){
$DelitosordenesDto->setfechaActualizacion($this->fechaMysql($DelitosordenesDto->getfechaActualizacion()));
}
return $DelitosordenesDto;
}
public function selectDelitosordenes($DelitosordenesDto){
$DelitosordenesDto=$this->validarDelitosordenes($DelitosordenesDto);
$DelitosordenesController = new DelitosordenesController();
$DelitosordenesDto = $DelitosordenesController->selectDelitosordenes($DelitosordenesDto);
if($DelitosordenesDto!=""){
$dtoToJson = new DtoToJson($DelitosordenesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertDelitosordenes($DelitosordenesDto){
$DelitosordenesDto=$this->validarDelitosordenes($DelitosordenesDto);
$DelitosordenesController = new DelitosordenesController();
$DelitosordenesDto = $DelitosordenesController->insertDelitosordenes($DelitosordenesDto);
if($DelitosordenesDto!=""){
$dtoToJson = new DtoToJson($DelitosordenesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateDelitosordenes($DelitosordenesDto){
$DelitosordenesDto=$this->validarDelitosordenes($DelitosordenesDto);
$DelitosordenesController = new DelitosordenesController();
$DelitosordenesDto = $DelitosordenesController->updateDelitosordenes($DelitosordenesDto);
if($DelitosordenesDto!=""){
$dtoToJson = new DtoToJson($DelitosordenesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteDelitosordenes($DelitosordenesDto){
$DelitosordenesDto=$this->validarDelitosordenes($DelitosordenesDto);
$DelitosordenesController = new DelitosordenesController();
$DelitosordenesDto = $DelitosordenesController->deleteDelitosordenes($DelitosordenesDto);
if($DelitosordenesDto==true){
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



@$idDelitoOrden=$_POST["idDelitoOrden"];
@$idSolicitudOrden=$_POST["idSolicitudOrden"];
@$cveDelito=$_POST["cveDelito"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$delitosordenesFacade = new DelitosordenesFacade();
$delitosordenesDto = new DelitosordenesDTO();

$delitosordenesDto->setIdDelitoOrden($idDelitoOrden);
$delitosordenesDto->setIdSolicitudOrden($idSolicitudOrden);
$delitosordenesDto->setCveDelito($cveDelito);
$delitosordenesDto->setActivo($activo);
$delitosordenesDto->setFechaRegistro($fechaRegistro);
$delitosordenesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idDelitoOrden=="") ){
$delitosordenesDto=$delitosordenesFacade->insertDelitosordenes($delitosordenesDto);
echo $delitosordenesDto;
} else if(($accion=="guardar") && ($idDelitoOrden!="")){
$delitosordenesDto=$delitosordenesFacade->updateDelitosordenes($delitosordenesDto);
echo $delitosordenesDto;
} else if($accion=="consultar"){
$delitosordenesDto=$delitosordenesFacade->selectDelitosordenes($delitosordenesDto);
echo $delitosordenesDto;
} else if( ($accion=="baja") && ($idDelitoOrden!="") ){
$delitosordenesDto=$delitosordenesFacade->deleteDelitosordenes($delitosordenesDto);
echo $delitosordenesDto;
} else if( ($accion=="seleccionar") && ($idDelitoOrden!="") ){
$delitosordenesDto=$delitosordenesFacade->selectDelitosordenes($delitosordenesDto);
echo $delitosordenesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>