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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ordenesimputados/OrdenesimputadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ordenesimputados/OrdenesimputadosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class OrdenesimputadosFacade {
private $proveedor;
public function __construct() {
}
public function validarOrdenesimputados($OrdenesimputadosDto){
$OrdenesimputadosDto->setidOrdenImputado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesimputadosDto->getidOrdenImputado(),"utf8"):strtoupper($OrdenesimputadosDto->getidOrdenImputado()))))));
if($this->esFecha($OrdenesimputadosDto->getidOrdenImputado())){
$OrdenesimputadosDto->setidOrdenImputado($this->fechaMysql($OrdenesimputadosDto->getidOrdenImputado()));
}
$OrdenesimputadosDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesimputadosDto->getidImputadoCarpeta(),"utf8"):strtoupper($OrdenesimputadosDto->getidImputadoCarpeta()))))));
if($this->esFecha($OrdenesimputadosDto->getidImputadoCarpeta())){
$OrdenesimputadosDto->setidImputadoCarpeta($this->fechaMysql($OrdenesimputadosDto->getidImputadoCarpeta()));
}
$OrdenesimputadosDto->setidActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesimputadosDto->getidActuacion(),"utf8"):strtoupper($OrdenesimputadosDto->getidActuacion()))))));
if($this->esFecha($OrdenesimputadosDto->getidActuacion())){
$OrdenesimputadosDto->setidActuacion($this->fechaMysql($OrdenesimputadosDto->getidActuacion()));
}
$OrdenesimputadosDto->setcveTipoOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesimputadosDto->getcveTipoOrden(),"utf8"):strtoupper($OrdenesimputadosDto->getcveTipoOrden()))))));
if($this->esFecha($OrdenesimputadosDto->getcveTipoOrden())){
$OrdenesimputadosDto->setcveTipoOrden($this->fechaMysql($OrdenesimputadosDto->getcveTipoOrden()));
}
$OrdenesimputadosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesimputadosDto->getfechaRegistro(),"utf8"):strtoupper($OrdenesimputadosDto->getfechaRegistro()))))));
if($this->esFecha($OrdenesimputadosDto->getfechaRegistro())){
$OrdenesimputadosDto->setfechaRegistro($this->fechaMysql($OrdenesimputadosDto->getfechaRegistro()));
}
$OrdenesimputadosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesimputadosDto->getfechaActualizacion(),"utf8"):strtoupper($OrdenesimputadosDto->getfechaActualizacion()))))));
if($this->esFecha($OrdenesimputadosDto->getfechaActualizacion())){
$OrdenesimputadosDto->setfechaActualizacion($this->fechaMysql($OrdenesimputadosDto->getfechaActualizacion()));
}
return $OrdenesimputadosDto;
}
public function selectOrdenesimputados($OrdenesimputadosDto){
$OrdenesimputadosDto=$this->validarOrdenesimputados($OrdenesimputadosDto);
$OrdenesimputadosController = new OrdenesimputadosController();
$OrdenesimputadosDto = $OrdenesimputadosController->selectOrdenesimputados($OrdenesimputadosDto);
if($OrdenesimputadosDto!=""){
$dtoToJson = new DtoToJson($OrdenesimputadosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertOrdenesimputados($OrdenesimputadosDto){
$OrdenesimputadosDto=$this->validarOrdenesimputados($OrdenesimputadosDto);
$OrdenesimputadosController = new OrdenesimputadosController();
$OrdenesimputadosDto = $OrdenesimputadosController->insertOrdenesimputados($OrdenesimputadosDto);
if($OrdenesimputadosDto!=""){
$dtoToJson = new DtoToJson($OrdenesimputadosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateOrdenesimputados($OrdenesimputadosDto){
$OrdenesimputadosDto=$this->validarOrdenesimputados($OrdenesimputadosDto);
$OrdenesimputadosController = new OrdenesimputadosController();
$OrdenesimputadosDto = $OrdenesimputadosController->updateOrdenesimputados($OrdenesimputadosDto);
if($OrdenesimputadosDto!=""){
$dtoToJson = new DtoToJson($OrdenesimputadosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteOrdenesimputados($OrdenesimputadosDto){
$OrdenesimputadosDto=$this->validarOrdenesimputados($OrdenesimputadosDto);
$OrdenesimputadosController = new OrdenesimputadosController();
$OrdenesimputadosDto = $OrdenesimputadosController->deleteOrdenesimputados($OrdenesimputadosDto);
if($OrdenesimputadosDto==true){
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



@$idOrdenImputado=$_POST["idOrdenImputado"];
@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
@$idActuacion=$_POST["idActuacion"];
@$cveTipoOrden=$_POST["cveTipoOrden"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$ordenesimputadosFacade = new OrdenesimputadosFacade();
$ordenesimputadosDto = new OrdenesimputadosDTO();

$ordenesimputadosDto->setIdOrdenImputado($idOrdenImputado);
$ordenesimputadosDto->setIdImputadoCarpeta($idImputadoCarpeta);
$ordenesimputadosDto->setIdActuacion($idActuacion);
$ordenesimputadosDto->setCveTipoOrden($cveTipoOrden);
$ordenesimputadosDto->setFechaRegistro($fechaRegistro);
$ordenesimputadosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idOrdenImputado=="") ){
$ordenesimputadosDto=$ordenesimputadosFacade->insertOrdenesimputados($ordenesimputadosDto);
echo $ordenesimputadosDto;
} else if(($accion=="guardar") && ($idOrdenImputado!="")){
$ordenesimputadosDto=$ordenesimputadosFacade->updateOrdenesimputados($ordenesimputadosDto);
echo $ordenesimputadosDto;
} else if($accion=="consultar"){
$ordenesimputadosDto=$ordenesimputadosFacade->selectOrdenesimputados($ordenesimputadosDto);
echo $ordenesimputadosDto;
} else if( ($accion=="baja") && ($idOrdenImputado!="") ){
$ordenesimputadosDto=$ordenesimputadosFacade->deleteOrdenesimputados($ordenesimputadosDto);
echo $ordenesimputadosDto;
} else if( ($accion=="seleccionar") && ($idOrdenImputado!="") ){
$ordenesimputadosDto=$ordenesimputadosFacade->selectOrdenesimputados($ordenesimputadosDto);
echo $ordenesimputadosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>