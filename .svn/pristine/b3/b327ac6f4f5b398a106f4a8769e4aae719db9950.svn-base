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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposreligiones/TiposreligionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposreligiones/TiposreligionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposreligionesFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposreligiones($TiposreligionesDto){
$TiposreligionesDto->setcveTipoReligion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposreligionesDto->getcveTipoReligion(),"utf8"):strtoupper($TiposreligionesDto->getcveTipoReligion()))))));
if($this->esFecha($TiposreligionesDto->getcveTipoReligion())){
$TiposreligionesDto->setcveTipoReligion($this->fechaMysql($TiposreligionesDto->getcveTipoReligion()));
}
$TiposreligionesDto->setdesTipoReligion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposreligionesDto->getdesTipoReligion(),"utf8"):strtoupper($TiposreligionesDto->getdesTipoReligion()))))));
if($this->esFecha($TiposreligionesDto->getdesTipoReligion())){
$TiposreligionesDto->setdesTipoReligion($this->fechaMysql($TiposreligionesDto->getdesTipoReligion()));
}
$TiposreligionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposreligionesDto->getactivo(),"utf8"):strtoupper($TiposreligionesDto->getactivo()))))));
if($this->esFecha($TiposreligionesDto->getactivo())){
$TiposreligionesDto->setactivo($this->fechaMysql($TiposreligionesDto->getactivo()));
}
$TiposreligionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposreligionesDto->getfechaRegistro(),"utf8"):strtoupper($TiposreligionesDto->getfechaRegistro()))))));
if($this->esFecha($TiposreligionesDto->getfechaRegistro())){
$TiposreligionesDto->setfechaRegistro($this->fechaMysql($TiposreligionesDto->getfechaRegistro()));
}
$TiposreligionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposreligionesDto->getfechaActualizacion(),"utf8"):strtoupper($TiposreligionesDto->getfechaActualizacion()))))));
if($this->esFecha($TiposreligionesDto->getfechaActualizacion())){
$TiposreligionesDto->setfechaActualizacion($this->fechaMysql($TiposreligionesDto->getfechaActualizacion()));
}
return $TiposreligionesDto;
}
public function selectTiposreligiones($TiposreligionesDto){
$TiposreligionesDto=$this->validarTiposreligiones($TiposreligionesDto);
$TiposreligionesController = new TiposreligionesController();
$TiposreligionesDto = $TiposreligionesController->selectTiposreligiones($TiposreligionesDto);
if($TiposreligionesDto!=""){
$dtoToJson = new DtoToJson($TiposreligionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposreligiones($TiposreligionesDto){
$TiposreligionesDto=$this->validarTiposreligiones($TiposreligionesDto);
$TiposreligionesController = new TiposreligionesController();
$TiposreligionesDto = $TiposreligionesController->insertTiposreligiones($TiposreligionesDto);
if($TiposreligionesDto!=""){
$dtoToJson = new DtoToJson($TiposreligionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposreligiones($TiposreligionesDto){
$TiposreligionesDto=$this->validarTiposreligiones($TiposreligionesDto);
$TiposreligionesController = new TiposreligionesController();
$TiposreligionesDto = $TiposreligionesController->updateTiposreligiones($TiposreligionesDto);
if($TiposreligionesDto!=""){
$dtoToJson = new DtoToJson($TiposreligionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposreligiones($TiposreligionesDto){
$TiposreligionesDto=$this->validarTiposreligiones($TiposreligionesDto);
$TiposreligionesController = new TiposreligionesController();
$TiposreligionesDto = $TiposreligionesController->deleteTiposreligiones($TiposreligionesDto);
if($TiposreligionesDto==true){
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



@$cveTipoReligion=$_POST["cveTipoReligion"];
@$desTipoReligion=$_POST["desTipoReligion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposreligionesFacade = new TiposreligionesFacade();
$tiposreligionesDto = new TiposreligionesDTO();

$tiposreligionesDto->setCveTipoReligion($cveTipoReligion);
$tiposreligionesDto->setDesTipoReligion($desTipoReligion);
$tiposreligionesDto->setActivo($activo);
$tiposreligionesDto->setFechaRegistro($fechaRegistro);
$tiposreligionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoReligion=="") ){
$tiposreligionesDto=$tiposreligionesFacade->insertTiposreligiones($tiposreligionesDto);
echo $tiposreligionesDto;
} else if(($accion=="guardar") && ($cveTipoReligion!="")){
$tiposreligionesDto=$tiposreligionesFacade->updateTiposreligiones($tiposreligionesDto);
echo $tiposreligionesDto;
} else if($accion=="consultar"){
$tiposreligionesDto=$tiposreligionesFacade->selectTiposreligiones($tiposreligionesDto);
echo $tiposreligionesDto;
} else if( ($accion=="baja") && ($cveTipoReligion!="") ){
$tiposreligionesDto=$tiposreligionesFacade->deleteTiposreligiones($tiposreligionesDto);
echo $tiposreligionesDto;
} else if( ($accion=="seleccionar") && ($cveTipoReligion!="") ){
$tiposreligionesDto=$tiposreligionesFacade->selectTiposreligiones($tiposreligionesDto);
echo $tiposreligionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>