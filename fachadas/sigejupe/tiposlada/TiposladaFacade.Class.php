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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposlada/TiposladaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposlada/TiposladaController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposladaFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposlada($TiposladaDto){
$TiposladaDto->setcveTipoLada(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposladaDto->getcveTipoLada(),"utf8"):strtoupper($TiposladaDto->getcveTipoLada()))))));
if($this->esFecha($TiposladaDto->getcveTipoLada())){
$TiposladaDto->setcveTipoLada($this->fechaMysql($TiposladaDto->getcveTipoLada()));
}
$TiposladaDto->setdesTipoLada(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposladaDto->getdesTipoLada(),"utf8"):strtoupper($TiposladaDto->getdesTipoLada()))))));
if($this->esFecha($TiposladaDto->getdesTipoLada())){
$TiposladaDto->setdesTipoLada($this->fechaMysql($TiposladaDto->getdesTipoLada()));
}
$TiposladaDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposladaDto->getactivo(),"utf8"):strtoupper($TiposladaDto->getactivo()))))));
if($this->esFecha($TiposladaDto->getactivo())){
$TiposladaDto->setactivo($this->fechaMysql($TiposladaDto->getactivo()));
}
$TiposladaDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposladaDto->getfechaRegistro(),"utf8"):strtoupper($TiposladaDto->getfechaRegistro()))))));
if($this->esFecha($TiposladaDto->getfechaRegistro())){
$TiposladaDto->setfechaRegistro($this->fechaMysql($TiposladaDto->getfechaRegistro()));
}
$TiposladaDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposladaDto->getfechaActualizacion(),"utf8"):strtoupper($TiposladaDto->getfechaActualizacion()))))));
if($this->esFecha($TiposladaDto->getfechaActualizacion())){
$TiposladaDto->setfechaActualizacion($this->fechaMysql($TiposladaDto->getfechaActualizacion()));
}
return $TiposladaDto;
}
public function selectTiposlada($TiposladaDto){
$TiposladaDto=$this->validarTiposlada($TiposladaDto);
$TiposladaController = new TiposladaController();
$TiposladaDto = $TiposladaController->selectTiposlada($TiposladaDto);
if($TiposladaDto!=""){
$dtoToJson = new DtoToJson($TiposladaDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposlada($TiposladaDto){
$TiposladaDto=$this->validarTiposlada($TiposladaDto);
$TiposladaController = new TiposladaController();
$TiposladaDto = $TiposladaController->insertTiposlada($TiposladaDto);
if($TiposladaDto!=""){
$dtoToJson = new DtoToJson($TiposladaDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposlada($TiposladaDto){
$TiposladaDto=$this->validarTiposlada($TiposladaDto);
$TiposladaController = new TiposladaController();
$TiposladaDto = $TiposladaController->updateTiposlada($TiposladaDto);
if($TiposladaDto!=""){
$dtoToJson = new DtoToJson($TiposladaDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposlada($TiposladaDto){
$TiposladaDto=$this->validarTiposlada($TiposladaDto);
$TiposladaController = new TiposladaController();
$TiposladaDto = $TiposladaController->deleteTiposlada($TiposladaDto);
if($TiposladaDto==true){
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



@$cveTipoLada=$_POST["cveTipoLada"];
@$desTipoLada=$_POST["desTipoLada"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposladaFacade = new TiposladaFacade();
$tiposladaDto = new TiposladaDTO();

$tiposladaDto->setCveTipoLada($cveTipoLada);
$tiposladaDto->setDesTipoLada($desTipoLada);
$tiposladaDto->setActivo($activo);
$tiposladaDto->setFechaRegistro($fechaRegistro);
$tiposladaDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoLada=="") ){
$tiposladaDto=$tiposladaFacade->insertTiposlada($tiposladaDto);
echo $tiposladaDto;
} else if(($accion=="guardar") && ($cveTipoLada!="")){
$tiposladaDto=$tiposladaFacade->updateTiposlada($tiposladaDto);
echo $tiposladaDto;
} else if($accion=="consultar"){
$tiposladaDto=$tiposladaFacade->selectTiposlada($tiposladaDto);
echo $tiposladaDto;
} else if( ($accion=="baja") && ($cveTipoLada!="") ){
$tiposladaDto=$tiposladaFacade->deleteTiposlada($tiposladaDto);
echo $tiposladaDto;
} else if( ($accion=="seleccionar") && ($cveTipoLada!="") ){
$tiposladaDto=$tiposladaFacade->selectTiposlada($tiposladaDto);
echo $tiposladaDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>