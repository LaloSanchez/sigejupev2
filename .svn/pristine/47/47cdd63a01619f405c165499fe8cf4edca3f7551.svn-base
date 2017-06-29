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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/detencionescarpetas/DetencionescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/detencionescarpetas/DetencionescarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class DetencionescarpetasFacade {
private $proveedor;
public function __construct() {
}
public function validarDetencionescarpetas($DetencionescarpetasDto){
$DetencionescarpetasDto->setidDetencionCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionescarpetasDto->getidDetencionCarpeta(),"utf8"):strtoupper($DetencionescarpetasDto->getidDetencionCarpeta()))))));
if($this->esFecha($DetencionescarpetasDto->getidDetencionCarpeta())){
$DetencionescarpetasDto->setidDetencionCarpeta($this->fechaMysql($DetencionescarpetasDto->getidDetencionCarpeta()));
}
$DetencionescarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionescarpetasDto->getidImputadoCarpeta(),"utf8"):strtoupper($DetencionescarpetasDto->getidImputadoCarpeta()))))));
if($this->esFecha($DetencionescarpetasDto->getidImputadoCarpeta())){
$DetencionescarpetasDto->setidImputadoCarpeta($this->fechaMysql($DetencionescarpetasDto->getidImputadoCarpeta()));
}
$DetencionescarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionescarpetasDto->getactivo(),"utf8"):strtoupper($DetencionescarpetasDto->getactivo()))))));
if($this->esFecha($DetencionescarpetasDto->getactivo())){
$DetencionescarpetasDto->setactivo($this->fechaMysql($DetencionescarpetasDto->getactivo()));
}
$DetencionescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionescarpetasDto->getfechaRegistro(),"utf8"):strtoupper($DetencionescarpetasDto->getfechaRegistro()))))));
if($this->esFecha($DetencionescarpetasDto->getfechaRegistro())){
$DetencionescarpetasDto->setfechaRegistro($this->fechaMysql($DetencionescarpetasDto->getfechaRegistro()));
}
$DetencionescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionescarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($DetencionescarpetasDto->getfechaActualizacion()))))));
if($this->esFecha($DetencionescarpetasDto->getfechaActualizacion())){
$DetencionescarpetasDto->setfechaActualizacion($this->fechaMysql($DetencionescarpetasDto->getfechaActualizacion()));
}
$DetencionescarpetasDto->setfechaDetencion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionescarpetasDto->getfechaDetencion(),"utf8"):strtoupper($DetencionescarpetasDto->getfechaDetencion()))))));
if($this->esFecha($DetencionescarpetasDto->getfechaDetencion())){
$DetencionescarpetasDto->setfechaDetencion($this->fechaMysql($DetencionescarpetasDto->getfechaDetencion()));
}
$DetencionescarpetasDto->setnumOficio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionescarpetasDto->getnumOficio(),"utf8"):strtoupper($DetencionescarpetasDto->getnumOficio()))))));
if($this->esFecha($DetencionescarpetasDto->getnumOficio())){
$DetencionescarpetasDto->setnumOficio($this->fechaMysql($DetencionescarpetasDto->getnumOficio()));
}
$DetencionescarpetasDto->setcveCereso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionescarpetasDto->getcveCereso(),"utf8"):strtoupper($DetencionescarpetasDto->getcveCereso()))))));
if($this->esFecha($DetencionescarpetasDto->getcveCereso())){
$DetencionescarpetasDto->setcveCereso($this->fechaMysql($DetencionescarpetasDto->getcveCereso()));
}
$DetencionescarpetasDto->setnombreAgente(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionescarpetasDto->getnombreAgente(),"utf8"):strtoupper($DetencionescarpetasDto->getnombreAgente()))))));
if($this->esFecha($DetencionescarpetasDto->getnombreAgente())){
$DetencionescarpetasDto->setnombreAgente($this->fechaMysql($DetencionescarpetasDto->getnombreAgente()));
}
$DetencionescarpetasDto->setobservaciones(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionescarpetasDto->getobservaciones(),"utf8"):strtoupper($DetencionescarpetasDto->getobservaciones()))))));
if($this->esFecha($DetencionescarpetasDto->getobservaciones())){
$DetencionescarpetasDto->setobservaciones($this->fechaMysql($DetencionescarpetasDto->getobservaciones()));
}
return $DetencionescarpetasDto;
}
public function selectDetencionescarpetas($DetencionescarpetasDto){
$DetencionescarpetasDto=$this->validarDetencionescarpetas($DetencionescarpetasDto);
$DetencionescarpetasController = new DetencionescarpetasController();
$DetencionescarpetasDto = $DetencionescarpetasController->selectDetencionescarpetas($DetencionescarpetasDto);
if($DetencionescarpetasDto!=""){
$dtoToJson = new DtoToJson($DetencionescarpetasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertDetencionescarpetas($DetencionescarpetasDto){
$DetencionescarpetasDto=$this->validarDetencionescarpetas($DetencionescarpetasDto);
$DetencionescarpetasController = new DetencionescarpetasController();
$DetencionescarpetasDto = $DetencionescarpetasController->insertDetencionescarpetas($DetencionescarpetasDto);
if($DetencionescarpetasDto!=""){
$dtoToJson = new DtoToJson($DetencionescarpetasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateDetencionescarpetas($DetencionescarpetasDto){
$DetencionescarpetasDto=$this->validarDetencionescarpetas($DetencionescarpetasDto);
$DetencionescarpetasController = new DetencionescarpetasController();
$DetencionescarpetasDto = $DetencionescarpetasController->updateDetencionescarpetas($DetencionescarpetasDto);
if($DetencionescarpetasDto!=""){
$dtoToJson = new DtoToJson($DetencionescarpetasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteDetencionescarpetas($DetencionescarpetasDto){
$DetencionescarpetasDto=$this->validarDetencionescarpetas($DetencionescarpetasDto);
$DetencionescarpetasController = new DetencionescarpetasController();
$DetencionescarpetasDto = $DetencionescarpetasController->deleteDetencionescarpetas($DetencionescarpetasDto);
if($DetencionescarpetasDto==true){
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



@$idDetencionCarpeta=$_POST["idDetencionCarpeta"];
@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$fechaDetencion=$_POST["fechaDetencion"];
@$numOficio=$_POST["numOficio"];
@$cveCereso=$_POST["cveCereso"];
@$nombreAgente=$_POST["nombreAgente"];
@$observaciones=$_POST["observaciones"];
@$accion=$_POST["accion"];

$detencionescarpetasFacade = new DetencionescarpetasFacade();
$detencionescarpetasDto = new DetencionescarpetasDTO();

$detencionescarpetasDto->setIdDetencionCarpeta($idDetencionCarpeta);
$detencionescarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
$detencionescarpetasDto->setActivo($activo);
$detencionescarpetasDto->setFechaRegistro($fechaRegistro);
$detencionescarpetasDto->setFechaActualizacion($fechaActualizacion);
$detencionescarpetasDto->setFechaDetencion($fechaDetencion);
$detencionescarpetasDto->setNumOficio($numOficio);
$detencionescarpetasDto->setCveCereso($cveCereso);
$detencionescarpetasDto->setNombreAgente($nombreAgente);
$detencionescarpetasDto->setObservaciones($observaciones);

if( ($accion=="guardar") && ($idDetencionCarpeta=="") ){
$detencionescarpetasDto=$detencionescarpetasFacade->insertDetencionescarpetas($detencionescarpetasDto);
echo $detencionescarpetasDto;
} else if(($accion=="guardar") && ($idDetencionCarpeta!="")){
$detencionescarpetasDto=$detencionescarpetasFacade->updateDetencionescarpetas($detencionescarpetasDto);
echo $detencionescarpetasDto;
} else if($accion=="consultar"){
$detencionescarpetasDto=$detencionescarpetasFacade->selectDetencionescarpetas($detencionescarpetasDto);
echo $detencionescarpetasDto;
} else if( ($accion=="baja") && ($idDetencionCarpeta!="") ){
$detencionescarpetasDto=$detencionescarpetasFacade->deleteDetencionescarpetas($detencionescarpetasDto);
echo $detencionescarpetasDto;
} else if( ($accion=="seleccionar") && ($idDetencionCarpeta!="") ){
$detencionescarpetasDto=$detencionescarpetasFacade->selectDetencionescarpetas($detencionescarpetasDto);
echo $detencionescarpetasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>