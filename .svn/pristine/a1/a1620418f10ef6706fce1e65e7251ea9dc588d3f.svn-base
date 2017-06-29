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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/clasificacionesdelitosorden/ClasificacionesdelitosordenDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/clasificacionesdelitosorden/ClasificacionesdelitosordenController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ClasificacionesdelitosordenFacade {
private $proveedor;
public function __construct() {
}
public function validarClasificacionesdelitosorden($ClasificacionesdelitosordenDto){
$ClasificacionesdelitosordenDto->setcveClasificacionDelitoOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ClasificacionesdelitosordenDto->getcveClasificacionDelitoOrden(),"utf8"):strtoupper($ClasificacionesdelitosordenDto->getcveClasificacionDelitoOrden()))))));
if($this->esFecha($ClasificacionesdelitosordenDto->getcveClasificacionDelitoOrden())){
$ClasificacionesdelitosordenDto->setcveClasificacionDelitoOrden($this->fechaMysql($ClasificacionesdelitosordenDto->getcveClasificacionDelitoOrden()));
}
$ClasificacionesdelitosordenDto->setdesClasificacionDelitoOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ClasificacionesdelitosordenDto->getdesClasificacionDelitoOrden(),"utf8"):strtoupper($ClasificacionesdelitosordenDto->getdesClasificacionDelitoOrden()))))));
if($this->esFecha($ClasificacionesdelitosordenDto->getdesClasificacionDelitoOrden())){
$ClasificacionesdelitosordenDto->setdesClasificacionDelitoOrden($this->fechaMysql($ClasificacionesdelitosordenDto->getdesClasificacionDelitoOrden()));
}
$ClasificacionesdelitosordenDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ClasificacionesdelitosordenDto->getactivo(),"utf8"):strtoupper($ClasificacionesdelitosordenDto->getactivo()))))));
if($this->esFecha($ClasificacionesdelitosordenDto->getactivo())){
$ClasificacionesdelitosordenDto->setactivo($this->fechaMysql($ClasificacionesdelitosordenDto->getactivo()));
}
$ClasificacionesdelitosordenDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ClasificacionesdelitosordenDto->getfechaRegistro(),"utf8"):strtoupper($ClasificacionesdelitosordenDto->getfechaRegistro()))))));
if($this->esFecha($ClasificacionesdelitosordenDto->getfechaRegistro())){
$ClasificacionesdelitosordenDto->setfechaRegistro($this->fechaMysql($ClasificacionesdelitosordenDto->getfechaRegistro()));
}
$ClasificacionesdelitosordenDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ClasificacionesdelitosordenDto->getfechaActualizacion(),"utf8"):strtoupper($ClasificacionesdelitosordenDto->getfechaActualizacion()))))));
if($this->esFecha($ClasificacionesdelitosordenDto->getfechaActualizacion())){
$ClasificacionesdelitosordenDto->setfechaActualizacion($this->fechaMysql($ClasificacionesdelitosordenDto->getfechaActualizacion()));
}
return $ClasificacionesdelitosordenDto;
}
public function selectClasificacionesdelitosorden($ClasificacionesdelitosordenDto){
$ClasificacionesdelitosordenDto=$this->validarClasificacionesdelitosorden($ClasificacionesdelitosordenDto);
$ClasificacionesdelitosordenController = new ClasificacionesdelitosordenController();
$ClasificacionesdelitosordenDto = $ClasificacionesdelitosordenController->selectClasificacionesdelitosorden($ClasificacionesdelitosordenDto);
if($ClasificacionesdelitosordenDto!=""){
$dtoToJson = new DtoToJson($ClasificacionesdelitosordenDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertClasificacionesdelitosorden($ClasificacionesdelitosordenDto){
$ClasificacionesdelitosordenDto=$this->validarClasificacionesdelitosorden($ClasificacionesdelitosordenDto);
$ClasificacionesdelitosordenController = new ClasificacionesdelitosordenController();
$ClasificacionesdelitosordenDto = $ClasificacionesdelitosordenController->insertClasificacionesdelitosorden($ClasificacionesdelitosordenDto);
if($ClasificacionesdelitosordenDto!=""){
$dtoToJson = new DtoToJson($ClasificacionesdelitosordenDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateClasificacionesdelitosorden($ClasificacionesdelitosordenDto){
$ClasificacionesdelitosordenDto=$this->validarClasificacionesdelitosorden($ClasificacionesdelitosordenDto);
$ClasificacionesdelitosordenController = new ClasificacionesdelitosordenController();
$ClasificacionesdelitosordenDto = $ClasificacionesdelitosordenController->updateClasificacionesdelitosorden($ClasificacionesdelitosordenDto);
if($ClasificacionesdelitosordenDto!=""){
$dtoToJson = new DtoToJson($ClasificacionesdelitosordenDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteClasificacionesdelitosorden($ClasificacionesdelitosordenDto){
$ClasificacionesdelitosordenDto=$this->validarClasificacionesdelitosorden($ClasificacionesdelitosordenDto);
$ClasificacionesdelitosordenController = new ClasificacionesdelitosordenController();
$ClasificacionesdelitosordenDto = $ClasificacionesdelitosordenController->deleteClasificacionesdelitosorden($ClasificacionesdelitosordenDto);
if($ClasificacionesdelitosordenDto==true){
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



@$cveClasificacionDelitoOrden=$_POST["cveClasificacionDelitoOrden"];
@$desClasificacionDelitoOrden=$_POST["desClasificacionDelitoOrden"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$clasificacionesdelitosordenFacade = new ClasificacionesdelitosordenFacade();
$clasificacionesdelitosordenDto = new ClasificacionesdelitosordenDTO();

$clasificacionesdelitosordenDto->setCveClasificacionDelitoOrden($cveClasificacionDelitoOrden);
$clasificacionesdelitosordenDto->setDesClasificacionDelitoOrden($desClasificacionDelitoOrden);
$clasificacionesdelitosordenDto->setActivo($activo);
$clasificacionesdelitosordenDto->setFechaRegistro($fechaRegistro);
$clasificacionesdelitosordenDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveClasificacionDelitoOrden=="") ){
$clasificacionesdelitosordenDto=$clasificacionesdelitosordenFacade->insertClasificacionesdelitosorden($clasificacionesdelitosordenDto);
echo $clasificacionesdelitosordenDto;
} else if(($accion=="guardar") && ($cveClasificacionDelitoOrden!="")){
$clasificacionesdelitosordenDto=$clasificacionesdelitosordenFacade->updateClasificacionesdelitosorden($clasificacionesdelitosordenDto);
echo $clasificacionesdelitosordenDto;
} else if($accion=="consultar"){
$clasificacionesdelitosordenDto=$clasificacionesdelitosordenFacade->selectClasificacionesdelitosorden($clasificacionesdelitosordenDto);
echo $clasificacionesdelitosordenDto;
} else if( ($accion=="baja") && ($cveClasificacionDelitoOrden!="") ){
$clasificacionesdelitosordenDto=$clasificacionesdelitosordenFacade->deleteClasificacionesdelitosorden($clasificacionesdelitosordenDto);
echo $clasificacionesdelitosordenDto;
} else if( ($accion=="seleccionar") && ($cveClasificacionDelitoOrden!="") ){
$clasificacionesdelitosordenDto=$clasificacionesdelitosordenFacade->selectClasificacionesdelitosorden($clasificacionesdelitosordenDto);
echo $clasificacionesdelitosordenDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>