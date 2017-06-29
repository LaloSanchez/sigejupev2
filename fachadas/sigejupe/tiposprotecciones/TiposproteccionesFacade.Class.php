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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposprotecciones/TiposproteccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposprotecciones/TiposproteccionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposproteccionesFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposprotecciones($TiposproteccionesDto){
$TiposproteccionesDto->setcveTipoProteccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposproteccionesDto->getcveTipoProteccion(),"utf8"):strtoupper($TiposproteccionesDto->getcveTipoProteccion()))))));
if($this->esFecha($TiposproteccionesDto->getcveTipoProteccion())){
$TiposproteccionesDto->setcveTipoProteccion($this->fechaMysql($TiposproteccionesDto->getcveTipoProteccion()));
}
$TiposproteccionesDto->setdesTipoProteccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposproteccionesDto->getdesTipoProteccion(),"utf8"):strtoupper($TiposproteccionesDto->getdesTipoProteccion()))))));
if($this->esFecha($TiposproteccionesDto->getdesTipoProteccion())){
$TiposproteccionesDto->setdesTipoProteccion($this->fechaMysql($TiposproteccionesDto->getdesTipoProteccion()));
}
$TiposproteccionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposproteccionesDto->getactivo(),"utf8"):strtoupper($TiposproteccionesDto->getactivo()))))));
if($this->esFecha($TiposproteccionesDto->getactivo())){
$TiposproteccionesDto->setactivo($this->fechaMysql($TiposproteccionesDto->getactivo()));
}
$TiposproteccionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposproteccionesDto->getfechaRegistro(),"utf8"):strtoupper($TiposproteccionesDto->getfechaRegistro()))))));
if($this->esFecha($TiposproteccionesDto->getfechaRegistro())){
$TiposproteccionesDto->setfechaRegistro($this->fechaMysql($TiposproteccionesDto->getfechaRegistro()));
}
$TiposproteccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposproteccionesDto->getfechaActualizacion(),"utf8"):strtoupper($TiposproteccionesDto->getfechaActualizacion()))))));
if($this->esFecha($TiposproteccionesDto->getfechaActualizacion())){
$TiposproteccionesDto->setfechaActualizacion($this->fechaMysql($TiposproteccionesDto->getfechaActualizacion()));
}
return $TiposproteccionesDto;
}
public function selectTiposprotecciones($TiposproteccionesDto){
$TiposproteccionesDto=$this->validarTiposprotecciones($TiposproteccionesDto);
$TiposproteccionesController = new TiposproteccionesController();
$TiposproteccionesDto = $TiposproteccionesController->selectTiposprotecciones($TiposproteccionesDto);
if($TiposproteccionesDto!=""){
$dtoToJson = new DtoToJson($TiposproteccionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposprotecciones($TiposproteccionesDto){
$TiposproteccionesDto=$this->validarTiposprotecciones($TiposproteccionesDto);
$TiposproteccionesController = new TiposproteccionesController();
$TiposproteccionesDto = $TiposproteccionesController->insertTiposprotecciones($TiposproteccionesDto);
if($TiposproteccionesDto!=""){
$dtoToJson = new DtoToJson($TiposproteccionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposprotecciones($TiposproteccionesDto){
$TiposproteccionesDto=$this->validarTiposprotecciones($TiposproteccionesDto);
$TiposproteccionesController = new TiposproteccionesController();
$TiposproteccionesDto = $TiposproteccionesController->updateTiposprotecciones($TiposproteccionesDto);
if($TiposproteccionesDto!=""){
$dtoToJson = new DtoToJson($TiposproteccionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposprotecciones($TiposproteccionesDto){
$TiposproteccionesDto=$this->validarTiposprotecciones($TiposproteccionesDto);
$TiposproteccionesController = new TiposproteccionesController();
$TiposproteccionesDto = $TiposproteccionesController->deleteTiposprotecciones($TiposproteccionesDto);
if($TiposproteccionesDto==true){
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



@$cveTipoProteccion=$_POST["cveTipoProteccion"];
@$desTipoProteccion=$_POST["desTipoProteccion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposproteccionesFacade = new TiposproteccionesFacade();
$tiposproteccionesDto = new TiposproteccionesDTO();

$tiposproteccionesDto->setCveTipoProteccion($cveTipoProteccion);
$tiposproteccionesDto->setDesTipoProteccion($desTipoProteccion);
$tiposproteccionesDto->setActivo($activo);
$tiposproteccionesDto->setFechaRegistro($fechaRegistro);
$tiposproteccionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoProteccion=="") ){
$tiposproteccionesDto=$tiposproteccionesFacade->insertTiposprotecciones($tiposproteccionesDto);
echo $tiposproteccionesDto;
} else if(($accion=="guardar") && ($cveTipoProteccion!="")){
$tiposproteccionesDto=$tiposproteccionesFacade->updateTiposprotecciones($tiposproteccionesDto);
echo $tiposproteccionesDto;
} else if($accion=="consultar"){
$tiposproteccionesDto=$tiposproteccionesFacade->selectTiposprotecciones($tiposproteccionesDto);
echo $tiposproteccionesDto;
} else if( ($accion=="baja") && ($cveTipoProteccion!="") ){
$tiposproteccionesDto=$tiposproteccionesFacade->deleteTiposprotecciones($tiposproteccionesDto);
echo $tiposproteccionesDto;
} else if( ($accion=="seleccionar") && ($cveTipoProteccion!="") ){
$tiposproteccionesDto=$tiposproteccionesFacade->selectTiposprotecciones($tiposproteccionesDto);
echo $tiposproteccionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>