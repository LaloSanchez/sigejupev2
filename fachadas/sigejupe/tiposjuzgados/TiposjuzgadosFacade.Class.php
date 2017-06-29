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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposjuzgados/TiposjuzgadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposjuzgados/TiposjuzgadosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposjuzgadosFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposjuzgados($TiposjuzgadosDto){
$TiposjuzgadosDto->setcveTipoJuzgado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposjuzgadosDto->getcveTipoJuzgado(),"utf8"):strtoupper($TiposjuzgadosDto->getcveTipoJuzgado()))))));
if($this->esFecha($TiposjuzgadosDto->getcveTipoJuzgado())){
$TiposjuzgadosDto->setcveTipoJuzgado($this->fechaMysql($TiposjuzgadosDto->getcveTipoJuzgado()));
}
$TiposjuzgadosDto->setdesTipoJuzgado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposjuzgadosDto->getdesTipoJuzgado(),"utf8"):strtoupper($TiposjuzgadosDto->getdesTipoJuzgado()))))));
if($this->esFecha($TiposjuzgadosDto->getdesTipoJuzgado())){
$TiposjuzgadosDto->setdesTipoJuzgado($this->fechaMysql($TiposjuzgadosDto->getdesTipoJuzgado()));
}
$TiposjuzgadosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposjuzgadosDto->getactivo(),"utf8"):strtoupper($TiposjuzgadosDto->getactivo()))))));
if($this->esFecha($TiposjuzgadosDto->getactivo())){
$TiposjuzgadosDto->setactivo($this->fechaMysql($TiposjuzgadosDto->getactivo()));
}
$TiposjuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposjuzgadosDto->getfechaRegistro(),"utf8"):strtoupper($TiposjuzgadosDto->getfechaRegistro()))))));
if($this->esFecha($TiposjuzgadosDto->getfechaRegistro())){
$TiposjuzgadosDto->setfechaRegistro($this->fechaMysql($TiposjuzgadosDto->getfechaRegistro()));
}
$TiposjuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposjuzgadosDto->getfechaActualizacion(),"utf8"):strtoupper($TiposjuzgadosDto->getfechaActualizacion()))))));
if($this->esFecha($TiposjuzgadosDto->getfechaActualizacion())){
$TiposjuzgadosDto->setfechaActualizacion($this->fechaMysql($TiposjuzgadosDto->getfechaActualizacion()));
}
return $TiposjuzgadosDto;
}
public function selectTiposjuzgados($TiposjuzgadosDto){
$TiposjuzgadosDto=$this->validarTiposjuzgados($TiposjuzgadosDto);
$TiposjuzgadosController = new TiposjuzgadosController();
$TiposjuzgadosDto = $TiposjuzgadosController->selectTiposjuzgados($TiposjuzgadosDto);
if($TiposjuzgadosDto!=""){
$dtoToJson = new DtoToJson($TiposjuzgadosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function selectTiposjuzgadosOrden($TiposjuzgadosDto,$orden){
$TiposjuzgadosDto=$this->validarTiposjuzgados($TiposjuzgadosDto);
$TiposjuzgadosController = new TiposjuzgadosController();
$TiposjuzgadosDto = $TiposjuzgadosController->selectTiposjuzgadosOrden($TiposjuzgadosDto,$orden,null);
if($TiposjuzgadosDto!=""){
$dtoToJson = new DtoToJson($TiposjuzgadosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}

public function insertTiposjuzgados($TiposjuzgadosDto){
$TiposjuzgadosDto=$this->validarTiposjuzgados($TiposjuzgadosDto);
$TiposjuzgadosController = new TiposjuzgadosController();
$TiposjuzgadosDto = $TiposjuzgadosController->insertTiposjuzgados($TiposjuzgadosDto);
if($TiposjuzgadosDto!=""){
$dtoToJson = new DtoToJson($TiposjuzgadosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposjuzgados($TiposjuzgadosDto){
$TiposjuzgadosDto=$this->validarTiposjuzgados($TiposjuzgadosDto);
$TiposjuzgadosController = new TiposjuzgadosController();
$TiposjuzgadosDto = $TiposjuzgadosController->updateTiposjuzgados($TiposjuzgadosDto);
if($TiposjuzgadosDto!=""){
$dtoToJson = new DtoToJson($TiposjuzgadosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposjuzgados($TiposjuzgadosDto){
$TiposjuzgadosDto=$this->validarTiposjuzgados($TiposjuzgadosDto);
$TiposjuzgadosController = new TiposjuzgadosController();
$TiposjuzgadosDto = $TiposjuzgadosController->deleteTiposjuzgados($TiposjuzgadosDto);
if($TiposjuzgadosDto==true){
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



@$cveTipoJuzgado=$_POST["cveTipoJuzgado"];
@$desTipoJuzgado=$_POST["desTipoJuzgado"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];
@$orden=$_POST["orden"];
$tiposjuzgadosFacade = new TiposjuzgadosFacade();
$tiposjuzgadosDto = new TiposjuzgadosDTO();

$tiposjuzgadosDto->setCveTipoJuzgado($cveTipoJuzgado);
$tiposjuzgadosDto->setDesTipoJuzgado($desTipoJuzgado);
$tiposjuzgadosDto->setActivo($activo);
$tiposjuzgadosDto->setFechaRegistro($fechaRegistro);
$tiposjuzgadosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoJuzgado=="") ){
$tiposjuzgadosDto=$tiposjuzgadosFacade->insertTiposjuzgados($tiposjuzgadosDto);
echo $tiposjuzgadosDto;
} else if(($accion=="guardar") && ($cveTipoJuzgado!="")){
$tiposjuzgadosDto=$tiposjuzgadosFacade->updateTiposjuzgados($tiposjuzgadosDto);
echo $tiposjuzgadosDto;
} else if($accion=="consultar"){
$tiposjuzgadosDto=$tiposjuzgadosFacade->selectTiposjuzgados($tiposjuzgadosDto);
echo $tiposjuzgadosDto;
} else if( ($accion=="baja") && ($cveTipoJuzgado!="") ){
$tiposjuzgadosDto=$tiposjuzgadosFacade->deleteTiposjuzgados($tiposjuzgadosDto);
echo $tiposjuzgadosDto;
} else if( ($accion=="seleccionar") && ($cveTipoJuzgado!="") ){
$tiposjuzgadosDto=$tiposjuzgadosFacade->selectTiposjuzgados($tiposjuzgadosDto);
echo $tiposjuzgadosDto;
}else if($accion=="consultarOrdenado"){
$tiposjuzgadosDto=$tiposjuzgadosFacade->selectTiposjuzgadosOrden($tiposjuzgadosDto,$orden);
echo $tiposjuzgadosDto;
} 
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>
