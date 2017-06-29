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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/comisiones/ComisionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/comisiones/ComisionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ComisionesFacade {
private $proveedor;
public function __construct() {
}
public function validarComisiones($ComisionesDto){
$ComisionesDto->setcveComision(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ComisionesDto->getcveComision(),"utf8"):strtoupper($ComisionesDto->getcveComision()))))));
if($this->esFecha($ComisionesDto->getcveComision())){
$ComisionesDto->setcveComision($this->fechaMysql($ComisionesDto->getcveComision()));
}
$ComisionesDto->setdesComision(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ComisionesDto->getdesComision(),"utf8"):strtoupper($ComisionesDto->getdesComision()))))));
if($this->esFecha($ComisionesDto->getdesComision())){
$ComisionesDto->setdesComision($this->fechaMysql($ComisionesDto->getdesComision()));
}
$ComisionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ComisionesDto->getactivo(),"utf8"):strtoupper($ComisionesDto->getactivo()))))));
if($this->esFecha($ComisionesDto->getactivo())){
$ComisionesDto->setactivo($this->fechaMysql($ComisionesDto->getactivo()));
}
$ComisionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ComisionesDto->getfechaRegistro(),"utf8"):strtoupper($ComisionesDto->getfechaRegistro()))))));
if($this->esFecha($ComisionesDto->getfechaRegistro())){
$ComisionesDto->setfechaRegistro($this->fechaMysql($ComisionesDto->getfechaRegistro()));
}
$ComisionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ComisionesDto->getfechaActualizacion(),"utf8"):strtoupper($ComisionesDto->getfechaActualizacion()))))));
if($this->esFecha($ComisionesDto->getfechaActualizacion())){
$ComisionesDto->setfechaActualizacion($this->fechaMysql($ComisionesDto->getfechaActualizacion()));
}
return $ComisionesDto;
}
public function selectComisiones($ComisionesDto){
$ComisionesDto=$this->validarComisiones($ComisionesDto);
$ComisionesController = new ComisionesController();
$ComisionesDto = $ComisionesController->selectComisiones($ComisionesDto);
if($ComisionesDto!=""){
$dtoToJson = new DtoToJson($ComisionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertComisiones($ComisionesDto){
$ComisionesDto=$this->validarComisiones($ComisionesDto);
$ComisionesController = new ComisionesController();
$ComisionesDto = $ComisionesController->insertComisiones($ComisionesDto);
if($ComisionesDto!=""){
$dtoToJson = new DtoToJson($ComisionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateComisiones($ComisionesDto){
$ComisionesDto=$this->validarComisiones($ComisionesDto);
$ComisionesController = new ComisionesController();
$ComisionesDto = $ComisionesController->updateComisiones($ComisionesDto);
if($ComisionesDto!=""){
$dtoToJson = new DtoToJson($ComisionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteComisiones($ComisionesDto){
$ComisionesDto=$this->validarComisiones($ComisionesDto);
$ComisionesController = new ComisionesController();
$ComisionesDto = $ComisionesController->deleteComisiones($ComisionesDto);
if($ComisionesDto==true){
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



@$cveComision=$_POST["cveComision"];
@$desComision=$_POST["desComision"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$comisionesFacade = new ComisionesFacade();
$comisionesDto = new ComisionesDTO();

$comisionesDto->setCveComision($cveComision);
$comisionesDto->setDesComision($desComision);
$comisionesDto->setActivo($activo);
$comisionesDto->setFechaRegistro($fechaRegistro);
$comisionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveComision=="") ){
$comisionesDto=$comisionesFacade->insertComisiones($comisionesDto);
echo $comisionesDto;
} else if(($accion=="guardar") && ($cveComision!="")){
$comisionesDto=$comisionesFacade->updateComisiones($comisionesDto);
echo $comisionesDto;
} else if($accion=="consultar"){
$comisionesDto=$comisionesFacade->selectComisiones($comisionesDto);
echo $comisionesDto;
} else if( ($accion=="baja") && ($cveComision!="") ){
$comisionesDto=$comisionesFacade->deleteComisiones($comisionesDto);
echo $comisionesDto;
} else if( ($accion=="seleccionar") && ($cveComision!="") ){
$comisionesDto=$comisionesFacade->selectComisiones($comisionesDto);
echo $comisionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>