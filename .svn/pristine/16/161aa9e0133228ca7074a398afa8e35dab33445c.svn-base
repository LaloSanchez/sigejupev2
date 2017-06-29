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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ordenesprotecciones/OrdenesproteccionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ordenesprotecciones/OrdenesproteccionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class OrdenesproteccionesFacade {
private $proveedor;
public function __construct() {
}
public function validarOrdenesprotecciones($OrdenesproteccionesDto){
$OrdenesproteccionesDto->setcveOrdenProteccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesproteccionesDto->getcveOrdenProteccion(),"utf8"):strtoupper($OrdenesproteccionesDto->getcveOrdenProteccion()))))));
if($this->esFecha($OrdenesproteccionesDto->getcveOrdenProteccion())){
$OrdenesproteccionesDto->setcveOrdenProteccion($this->fechaMysql($OrdenesproteccionesDto->getcveOrdenProteccion()));
}
$OrdenesproteccionesDto->setdesOrdenProteccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesproteccionesDto->getdesOrdenProteccion(),"utf8"):strtoupper($OrdenesproteccionesDto->getdesOrdenProteccion()))))));
if($this->esFecha($OrdenesproteccionesDto->getdesOrdenProteccion())){
$OrdenesproteccionesDto->setdesOrdenProteccion($this->fechaMysql($OrdenesproteccionesDto->getdesOrdenProteccion()));
}
$OrdenesproteccionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesproteccionesDto->getactivo(),"utf8"):strtoupper($OrdenesproteccionesDto->getactivo()))))));
if($this->esFecha($OrdenesproteccionesDto->getactivo())){
$OrdenesproteccionesDto->setactivo($this->fechaMysql($OrdenesproteccionesDto->getactivo()));
}
$OrdenesproteccionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesproteccionesDto->getfechaRegistro(),"utf8"):strtoupper($OrdenesproteccionesDto->getfechaRegistro()))))));
if($this->esFecha($OrdenesproteccionesDto->getfechaRegistro())){
$OrdenesproteccionesDto->setfechaRegistro($this->fechaMysql($OrdenesproteccionesDto->getfechaRegistro()));
}
$OrdenesproteccionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesproteccionesDto->getfechaActualizacion(),"utf8"):strtoupper($OrdenesproteccionesDto->getfechaActualizacion()))))));
if($this->esFecha($OrdenesproteccionesDto->getfechaActualizacion())){
$OrdenesproteccionesDto->setfechaActualizacion($this->fechaMysql($OrdenesproteccionesDto->getfechaActualizacion()));
}
return $OrdenesproteccionesDto;
}
public function selectOrdenesprotecciones($OrdenesproteccionesDto){
$OrdenesproteccionesDto=$this->validarOrdenesprotecciones($OrdenesproteccionesDto);
$OrdenesproteccionesController = new OrdenesproteccionesController();
$OrdenesproteccionesDto = $OrdenesproteccionesController->selectOrdenesprotecciones($OrdenesproteccionesDto);
if($OrdenesproteccionesDto!=""){
$dtoToJson = new DtoToJson($OrdenesproteccionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertOrdenesprotecciones($OrdenesproteccionesDto){
$OrdenesproteccionesDto=$this->validarOrdenesprotecciones($OrdenesproteccionesDto);
$OrdenesproteccionesController = new OrdenesproteccionesController();
$OrdenesproteccionesDto = $OrdenesproteccionesController->insertOrdenesprotecciones($OrdenesproteccionesDto);
if($OrdenesproteccionesDto!=""){
$dtoToJson = new DtoToJson($OrdenesproteccionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateOrdenesprotecciones($OrdenesproteccionesDto){
$OrdenesproteccionesDto=$this->validarOrdenesprotecciones($OrdenesproteccionesDto);
$OrdenesproteccionesController = new OrdenesproteccionesController();
$OrdenesproteccionesDto = $OrdenesproteccionesController->updateOrdenesprotecciones($OrdenesproteccionesDto);
if($OrdenesproteccionesDto!=""){
$dtoToJson = new DtoToJson($OrdenesproteccionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteOrdenesprotecciones($OrdenesproteccionesDto){
$OrdenesproteccionesDto=$this->validarOrdenesprotecciones($OrdenesproteccionesDto);
$OrdenesproteccionesController = new OrdenesproteccionesController();
$OrdenesproteccionesDto = $OrdenesproteccionesController->deleteOrdenesprotecciones($OrdenesproteccionesDto);
if($OrdenesproteccionesDto==true){
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



@$cveOrdenProteccion=$_POST["cveOrdenProteccion"];
@$desOrdenProteccion=$_POST["desOrdenProteccion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$ordenesproteccionesFacade = new OrdenesproteccionesFacade();
$ordenesproteccionesDto = new OrdenesproteccionesDTO();

$ordenesproteccionesDto->setCveOrdenProteccion($cveOrdenProteccion);
$ordenesproteccionesDto->setDesOrdenProteccion($desOrdenProteccion);
$ordenesproteccionesDto->setActivo($activo);
$ordenesproteccionesDto->setFechaRegistro($fechaRegistro);
$ordenesproteccionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveOrdenProteccion=="") ){
$ordenesproteccionesDto=$ordenesproteccionesFacade->insertOrdenesprotecciones($ordenesproteccionesDto);
echo $ordenesproteccionesDto;
} else if(($accion=="guardar") && ($cveOrdenProteccion!="")){
$ordenesproteccionesDto=$ordenesproteccionesFacade->updateOrdenesprotecciones($ordenesproteccionesDto);
echo $ordenesproteccionesDto;
} else if($accion=="consultar"){
$ordenesproteccionesDto=$ordenesproteccionesFacade->selectOrdenesprotecciones($ordenesproteccionesDto);
echo $ordenesproteccionesDto;
} else if( ($accion=="baja") && ($cveOrdenProteccion!="") ){
$ordenesproteccionesDto=$ordenesproteccionesFacade->deleteOrdenesprotecciones($ordenesproteccionesDto);
echo $ordenesproteccionesDto;
} else if( ($accion=="seleccionar") && ($cveOrdenProteccion!="") ){
$ordenesproteccionesDto=$ordenesproteccionesFacade->selectOrdenesprotecciones($ordenesproteccionesDto);
echo $ordenesproteccionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>