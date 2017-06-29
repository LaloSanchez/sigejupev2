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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/delitosmuestras/DelitosmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/delitosmuestras/DelitosmuestrasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class DelitosmuestrasFacade {
private $proveedor;
public function __construct() {
}
public function validarDelitosmuestras($DelitosmuestrasDto){
$DelitosmuestrasDto->setidDelitoMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosmuestrasDto->getidDelitoMuestra(),"utf8"):strtoupper($DelitosmuestrasDto->getidDelitoMuestra()))))));
if($this->esFecha($DelitosmuestrasDto->getidDelitoMuestra())){
$DelitosmuestrasDto->setidDelitoMuestra($this->fechaMysql($DelitosmuestrasDto->getidDelitoMuestra()));
}
$DelitosmuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosmuestrasDto->getidSolicitudMuestra(),"utf8"):strtoupper($DelitosmuestrasDto->getidSolicitudMuestra()))))));
if($this->esFecha($DelitosmuestrasDto->getidSolicitudMuestra())){
$DelitosmuestrasDto->setidSolicitudMuestra($this->fechaMysql($DelitosmuestrasDto->getidSolicitudMuestra()));
}
$DelitosmuestrasDto->setcveDelito(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosmuestrasDto->getcveDelito(),"utf8"):strtoupper($DelitosmuestrasDto->getcveDelito()))))));
if($this->esFecha($DelitosmuestrasDto->getcveDelito())){
$DelitosmuestrasDto->setcveDelito($this->fechaMysql($DelitosmuestrasDto->getcveDelito()));
}
$DelitosmuestrasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosmuestrasDto->getactivo(),"utf8"):strtoupper($DelitosmuestrasDto->getactivo()))))));
if($this->esFecha($DelitosmuestrasDto->getactivo())){
$DelitosmuestrasDto->setactivo($this->fechaMysql($DelitosmuestrasDto->getactivo()));
}
$DelitosmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosmuestrasDto->getfechaRegistro(),"utf8"):strtoupper($DelitosmuestrasDto->getfechaRegistro()))))));
if($this->esFecha($DelitosmuestrasDto->getfechaRegistro())){
$DelitosmuestrasDto->setfechaRegistro($this->fechaMysql($DelitosmuestrasDto->getfechaRegistro()));
}
$DelitosmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DelitosmuestrasDto->getfechaActualizacion(),"utf8"):strtoupper($DelitosmuestrasDto->getfechaActualizacion()))))));
if($this->esFecha($DelitosmuestrasDto->getfechaActualizacion())){
$DelitosmuestrasDto->setfechaActualizacion($this->fechaMysql($DelitosmuestrasDto->getfechaActualizacion()));
}
return $DelitosmuestrasDto;
}
public function selectDelitosmuestras($DelitosmuestrasDto){
$DelitosmuestrasDto=$this->validarDelitosmuestras($DelitosmuestrasDto);
$DelitosmuestrasController = new DelitosmuestrasController();
$DelitosmuestrasDto = $DelitosmuestrasController->selectDelitosmuestras($DelitosmuestrasDto);
if($DelitosmuestrasDto!=""){
$dtoToJson = new DtoToJson($DelitosmuestrasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertDelitosmuestras($DelitosmuestrasDto){
$DelitosmuestrasDto=$this->validarDelitosmuestras($DelitosmuestrasDto);
$DelitosmuestrasController = new DelitosmuestrasController();
$DelitosmuestrasDto = $DelitosmuestrasController->insertDelitosmuestras($DelitosmuestrasDto);
if($DelitosmuestrasDto!=""){
$dtoToJson = new DtoToJson($DelitosmuestrasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateDelitosmuestras($DelitosmuestrasDto){
$DelitosmuestrasDto=$this->validarDelitosmuestras($DelitosmuestrasDto);
$DelitosmuestrasController = new DelitosmuestrasController();
$DelitosmuestrasDto = $DelitosmuestrasController->updateDelitosmuestras($DelitosmuestrasDto);
if($DelitosmuestrasDto!=""){
$dtoToJson = new DtoToJson($DelitosmuestrasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteDelitosmuestras($DelitosmuestrasDto){
$DelitosmuestrasDto=$this->validarDelitosmuestras($DelitosmuestrasDto);
$DelitosmuestrasController = new DelitosmuestrasController();
$DelitosmuestrasDto = $DelitosmuestrasController->deleteDelitosmuestras($DelitosmuestrasDto);
if($DelitosmuestrasDto==true){
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



@$idDelitoMuestra=$_POST["idDelitoMuestra"];
@$idSolicitudMuestra=$_POST["idSolicitudMuestra"];
@$cveDelito=$_POST["cveDelito"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$delitosmuestrasFacade = new DelitosmuestrasFacade();
$delitosmuestrasDto = new DelitosmuestrasDTO();

$delitosmuestrasDto->setIdDelitoMuestra($idDelitoMuestra);
$delitosmuestrasDto->setIdSolicitudMuestra($idSolicitudMuestra);
$delitosmuestrasDto->setCveDelito($cveDelito);
$delitosmuestrasDto->setActivo($activo);
$delitosmuestrasDto->setFechaRegistro($fechaRegistro);
$delitosmuestrasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($=="") ){
$delitosmuestrasDto=$delitosmuestrasFacade->insertDelitosmuestras($delitosmuestrasDto);
echo $delitosmuestrasDto;
} else if(($accion=="guardar") && ($!="")){
$delitosmuestrasDto=$delitosmuestrasFacade->updateDelitosmuestras($delitosmuestrasDto);
echo $delitosmuestrasDto;
} else if($accion=="consultar"){
$delitosmuestrasDto=$delitosmuestrasFacade->selectDelitosmuestras($delitosmuestrasDto);
echo $delitosmuestrasDto;
} else if( ($accion=="baja") && ($!="") ){
$delitosmuestrasDto=$delitosmuestrasFacade->deleteDelitosmuestras($delitosmuestrasDto);
echo $delitosmuestrasDto;
} else if( ($accion=="seleccionar") && ($!="") ){
$delitosmuestrasDto=$delitosmuestrasFacade->selectDelitosmuestras($delitosmuestrasDto);
echo $delitosmuestrasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>