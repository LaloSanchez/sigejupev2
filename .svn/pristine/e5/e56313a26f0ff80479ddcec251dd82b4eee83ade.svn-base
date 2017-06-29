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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposresoluciones/TiposresolucionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposresoluciones/TiposresolucionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposresolucionesFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposresoluciones($TiposresolucionesDto){
$TiposresolucionesDto->setcveTipoResolucion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposresolucionesDto->getcveTipoResolucion(),"utf8"):strtoupper($TiposresolucionesDto->getcveTipoResolucion()))))));
if($this->esFecha($TiposresolucionesDto->getcveTipoResolucion())){
$TiposresolucionesDto->setcveTipoResolucion($this->fechaMysql($TiposresolucionesDto->getcveTipoResolucion()));
}
$TiposresolucionesDto->setdesTipoResolucion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposresolucionesDto->getdesTipoResolucion(),"utf8"):strtoupper($TiposresolucionesDto->getdesTipoResolucion()))))));
if($this->esFecha($TiposresolucionesDto->getdesTipoResolucion())){
$TiposresolucionesDto->setdesTipoResolucion($this->fechaMysql($TiposresolucionesDto->getdesTipoResolucion()));
}
$TiposresolucionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposresolucionesDto->getactivo(),"utf8"):strtoupper($TiposresolucionesDto->getactivo()))))));
if($this->esFecha($TiposresolucionesDto->getactivo())){
$TiposresolucionesDto->setactivo($this->fechaMysql($TiposresolucionesDto->getactivo()));
}
$TiposresolucionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposresolucionesDto->getfechaRegistro(),"utf8"):strtoupper($TiposresolucionesDto->getfechaRegistro()))))));
if($this->esFecha($TiposresolucionesDto->getfechaRegistro())){
$TiposresolucionesDto->setfechaRegistro($this->fechaMysql($TiposresolucionesDto->getfechaRegistro()));
}
$TiposresolucionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposresolucionesDto->getfechaActualizacion(),"utf8"):strtoupper($TiposresolucionesDto->getfechaActualizacion()))))));
if($this->esFecha($TiposresolucionesDto->getfechaActualizacion())){
$TiposresolucionesDto->setfechaActualizacion($this->fechaMysql($TiposresolucionesDto->getfechaActualizacion()));
}
return $TiposresolucionesDto;
}
public function selectTiposresoluciones($TiposresolucionesDto){
$TiposresolucionesDto=$this->validarTiposresoluciones($TiposresolucionesDto);
$TiposresolucionesController = new TiposresolucionesController();
$TiposresolucionesDto = $TiposresolucionesController->selectTiposresoluciones($TiposresolucionesDto);
if($TiposresolucionesDto!=""){
$dtoToJson = new DtoToJson($TiposresolucionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposresoluciones($TiposresolucionesDto){
$TiposresolucionesDto=$this->validarTiposresoluciones($TiposresolucionesDto);
$TiposresolucionesController = new TiposresolucionesController();
$TiposresolucionesDto = $TiposresolucionesController->insertTiposresoluciones($TiposresolucionesDto);
if($TiposresolucionesDto!=""){
$dtoToJson = new DtoToJson($TiposresolucionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposresoluciones($TiposresolucionesDto){
$TiposresolucionesDto=$this->validarTiposresoluciones($TiposresolucionesDto);
$TiposresolucionesController = new TiposresolucionesController();
$TiposresolucionesDto = $TiposresolucionesController->updateTiposresoluciones($TiposresolucionesDto);
if($TiposresolucionesDto!=""){
$dtoToJson = new DtoToJson($TiposresolucionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposresoluciones($TiposresolucionesDto){
$TiposresolucionesDto=$this->validarTiposresoluciones($TiposresolucionesDto);
$TiposresolucionesController = new TiposresolucionesController();
$TiposresolucionesDto = $TiposresolucionesController->deleteTiposresoluciones($TiposresolucionesDto);
if($TiposresolucionesDto==true){
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



@$cveTipoResolucion=$_POST["cveTipoResolucion"];
@$desTipoResolucion=$_POST["desTipoResolucion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposresolucionesFacade = new TiposresolucionesFacade();
$tiposresolucionesDto = new TiposresolucionesDTO();

$tiposresolucionesDto->setCveTipoResolucion($cveTipoResolucion);
$tiposresolucionesDto->setDesTipoResolucion($desTipoResolucion);
$tiposresolucionesDto->setActivo($activo);
$tiposresolucionesDto->setFechaRegistro($fechaRegistro);
$tiposresolucionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoResolucion=="") ){
$tiposresolucionesDto=$tiposresolucionesFacade->insertTiposresoluciones($tiposresolucionesDto);
echo $tiposresolucionesDto;
} else if(($accion=="guardar") && ($cveTipoResolucion!="")){
$tiposresolucionesDto=$tiposresolucionesFacade->updateTiposresoluciones($tiposresolucionesDto);
echo $tiposresolucionesDto;
} else if($accion=="consultar"){
$tiposresolucionesDto=$tiposresolucionesFacade->selectTiposresoluciones($tiposresolucionesDto);
echo $tiposresolucionesDto;
} else if( ($accion=="baja") && ($cveTipoResolucion!="") ){
$tiposresolucionesDto=$tiposresolucionesFacade->deleteTiposresoluciones($tiposresolucionesDto);
echo $tiposresolucionesDto;
} else if( ($accion=="seleccionar") && ($cveTipoResolucion!="") ){
$tiposresolucionesDto=$tiposresolucionesFacade->selectTiposresoluciones($tiposresolucionesDto);
echo $tiposresolucionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>