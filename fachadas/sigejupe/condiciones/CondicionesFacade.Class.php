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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/condiciones/CondicionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/condiciones/CondicionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class CondicionesFacade {
private $proveedor;
public function __construct() {
}
public function validarCondiciones($CondicionesDto){
$CondicionesDto->setcveCondicion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CondicionesDto->getcveCondicion(),"utf8"):strtoupper($CondicionesDto->getcveCondicion()))))));
if($this->esFecha($CondicionesDto->getcveCondicion())){
$CondicionesDto->setcveCondicion($this->fechaMysql($CondicionesDto->getcveCondicion()));
}
$CondicionesDto->setdesCondicion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CondicionesDto->getdesCondicion(),"utf8"):strtoupper($CondicionesDto->getdesCondicion()))))));
if($this->esFecha($CondicionesDto->getdesCondicion())){
$CondicionesDto->setdesCondicion($this->fechaMysql($CondicionesDto->getdesCondicion()));
}
$CondicionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CondicionesDto->getfechaRegistro(),"utf8"):strtoupper($CondicionesDto->getfechaRegistro()))))));
if($this->esFecha($CondicionesDto->getfechaRegistro())){
$CondicionesDto->setfechaRegistro($this->fechaMysql($CondicionesDto->getfechaRegistro()));
}
$CondicionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CondicionesDto->getfechaActualizacion(),"utf8"):strtoupper($CondicionesDto->getfechaActualizacion()))))));
if($this->esFecha($CondicionesDto->getfechaActualizacion())){
$CondicionesDto->setfechaActualizacion($this->fechaMysql($CondicionesDto->getfechaActualizacion()));
}
return $CondicionesDto;
}
public function selectCondiciones($CondicionesDto){
$CondicionesDto=$this->validarCondiciones($CondicionesDto);
$CondicionesController = new CondicionesController();
$CondicionesDto = $CondicionesController->selectCondiciones($CondicionesDto);
if($CondicionesDto!=""){
$dtoToJson = new DtoToJson($CondicionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertCondiciones($CondicionesDto){
$CondicionesDto=$this->validarCondiciones($CondicionesDto);
$CondicionesController = new CondicionesController();
$CondicionesDto = $CondicionesController->insertCondiciones($CondicionesDto);
if($CondicionesDto!=""){
$dtoToJson = new DtoToJson($CondicionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateCondiciones($CondicionesDto){
$CondicionesDto=$this->validarCondiciones($CondicionesDto);
$CondicionesController = new CondicionesController();
$CondicionesDto = $CondicionesController->updateCondiciones($CondicionesDto);
if($CondicionesDto!=""){
$dtoToJson = new DtoToJson($CondicionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteCondiciones($CondicionesDto){
$CondicionesDto=$this->validarCondiciones($CondicionesDto);
$CondicionesController = new CondicionesController();
$CondicionesDto = $CondicionesController->deleteCondiciones($CondicionesDto);
if($CondicionesDto==true){
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



@$cveCondicion=$_POST["cveCondicion"];
@$desCondicion=$_POST["desCondicion"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$condicionesFacade = new CondicionesFacade();
$condicionesDto = new CondicionesDTO();

$condicionesDto->setCveCondicion($cveCondicion);
$condicionesDto->setDesCondicion($desCondicion);
$condicionesDto->setFechaRegistro($fechaRegistro);
$condicionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveCondicion=="") ){
$condicionesDto=$condicionesFacade->insertCondiciones($condicionesDto);
echo $condicionesDto;
} else if(($accion=="guardar") && ($cveCondicion!="")){
$condicionesDto=$condicionesFacade->updateCondiciones($condicionesDto);
echo $condicionesDto;
} else if($accion=="consultar"){
$condicionesDto=$condicionesFacade->selectCondiciones($condicionesDto);
echo $condicionesDto;
} else if( ($accion=="baja") && ($cveCondicion!="") ){
$condicionesDto=$condicionesFacade->deleteCondiciones($condicionesDto);
echo $condicionesDto;
} else if( ($accion=="seleccionar") && ($cveCondicion!="") ){
$condicionesDto=$condicionesFacade->selectCondiciones($condicionesDto);
echo $condicionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>