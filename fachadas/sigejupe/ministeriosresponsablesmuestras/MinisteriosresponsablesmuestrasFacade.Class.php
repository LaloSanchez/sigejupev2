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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ministeriosresponsablesmuestras/MinisteriosresponsablesmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ministeriosresponsablesmuestras/MinisteriosresponsablesmuestrasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class MinisteriosresponsablesmuestrasFacade {
private $proveedor;
public function __construct() {
}
public function validarMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto){
$MinisteriosresponsablesmuestrasDto->setidMinisterioResponsableMuestras(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesmuestrasDto->getidMinisterioResponsableMuestras(),"utf8"):strtoupper($MinisteriosresponsablesmuestrasDto->getidMinisterioResponsableMuestras()))))));
if($this->esFecha($MinisteriosresponsablesmuestrasDto->getidMinisterioResponsableMuestras())){
$MinisteriosresponsablesmuestrasDto->setidMinisterioResponsableMuestras($this->fechaMysql($MinisteriosresponsablesmuestrasDto->getidMinisterioResponsableMuestras()));
}
$MinisteriosresponsablesmuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesmuestrasDto->getidSolicitudMuestra(),"utf8"):strtoupper($MinisteriosresponsablesmuestrasDto->getidSolicitudMuestra()))))));
if($this->esFecha($MinisteriosresponsablesmuestrasDto->getidSolicitudMuestra())){
$MinisteriosresponsablesmuestrasDto->setidSolicitudMuestra($this->fechaMysql($MinisteriosresponsablesmuestrasDto->getidSolicitudMuestra()));
}
$MinisteriosresponsablesmuestrasDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesmuestrasDto->getnombre(),"utf8"):strtoupper($MinisteriosresponsablesmuestrasDto->getnombre()))))));
if($this->esFecha($MinisteriosresponsablesmuestrasDto->getnombre())){
$MinisteriosresponsablesmuestrasDto->setnombre($this->fechaMysql($MinisteriosresponsablesmuestrasDto->getnombre()));
}
$MinisteriosresponsablesmuestrasDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesmuestrasDto->getpaterno(),"utf8"):strtoupper($MinisteriosresponsablesmuestrasDto->getpaterno()))))));
if($this->esFecha($MinisteriosresponsablesmuestrasDto->getpaterno())){
$MinisteriosresponsablesmuestrasDto->setpaterno($this->fechaMysql($MinisteriosresponsablesmuestrasDto->getpaterno()));
}
$MinisteriosresponsablesmuestrasDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesmuestrasDto->getmaterno(),"utf8"):strtoupper($MinisteriosresponsablesmuestrasDto->getmaterno()))))));
if($this->esFecha($MinisteriosresponsablesmuestrasDto->getmaterno())){
$MinisteriosresponsablesmuestrasDto->setmaterno($this->fechaMysql($MinisteriosresponsablesmuestrasDto->getmaterno()));
}
$MinisteriosresponsablesmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesmuestrasDto->getfechaRegistro(),"utf8"):strtoupper($MinisteriosresponsablesmuestrasDto->getfechaRegistro()))))));
if($this->esFecha($MinisteriosresponsablesmuestrasDto->getfechaRegistro())){
$MinisteriosresponsablesmuestrasDto->setfechaRegistro($this->fechaMysql($MinisteriosresponsablesmuestrasDto->getfechaRegistro()));
}
$MinisteriosresponsablesmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesmuestrasDto->getfechaActualizacion(),"utf8"):strtoupper($MinisteriosresponsablesmuestrasDto->getfechaActualizacion()))))));
if($this->esFecha($MinisteriosresponsablesmuestrasDto->getfechaActualizacion())){
$MinisteriosresponsablesmuestrasDto->setfechaActualizacion($this->fechaMysql($MinisteriosresponsablesmuestrasDto->getfechaActualizacion()));
}
return $MinisteriosresponsablesmuestrasDto;
}
public function selectMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto){
$MinisteriosresponsablesmuestrasDto=$this->validarMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto);
$MinisteriosresponsablesmuestrasController = new MinisteriosresponsablesmuestrasController();
$MinisteriosresponsablesmuestrasDto = $MinisteriosresponsablesmuestrasController->selectMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto);
if($MinisteriosresponsablesmuestrasDto!=""){
$dtoToJson = new DtoToJson($MinisteriosresponsablesmuestrasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto){
$MinisteriosresponsablesmuestrasDto=$this->validarMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto);
$MinisteriosresponsablesmuestrasController = new MinisteriosresponsablesmuestrasController();
$MinisteriosresponsablesmuestrasDto = $MinisteriosresponsablesmuestrasController->insertMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto);
if($MinisteriosresponsablesmuestrasDto!=""){
$dtoToJson = new DtoToJson($MinisteriosresponsablesmuestrasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto){
$MinisteriosresponsablesmuestrasDto=$this->validarMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto);
$MinisteriosresponsablesmuestrasController = new MinisteriosresponsablesmuestrasController();
$MinisteriosresponsablesmuestrasDto = $MinisteriosresponsablesmuestrasController->updateMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto);
if($MinisteriosresponsablesmuestrasDto!=""){
$dtoToJson = new DtoToJson($MinisteriosresponsablesmuestrasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto){
$MinisteriosresponsablesmuestrasDto=$this->validarMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto);
$MinisteriosresponsablesmuestrasController = new MinisteriosresponsablesmuestrasController();
$MinisteriosresponsablesmuestrasDto = $MinisteriosresponsablesmuestrasController->deleteMinisteriosresponsablesmuestras($MinisteriosresponsablesmuestrasDto);
if($MinisteriosresponsablesmuestrasDto==true){
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



@$idMinisterioResponsableMuestras=$_POST["idMinisterioResponsableMuestras"];
@$idSolicitudMuestra=$_POST["idSolicitudMuestra"];
@$nombre=$_POST["nombre"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$ministeriosresponsablesmuestrasFacade = new MinisteriosresponsablesmuestrasFacade();
$ministeriosresponsablesmuestrasDto = new MinisteriosresponsablesmuestrasDTO();

$ministeriosresponsablesmuestrasDto->setIdMinisterioResponsableMuestras($idMinisterioResponsableMuestras);
$ministeriosresponsablesmuestrasDto->setIdSolicitudMuestra($idSolicitudMuestra);
$ministeriosresponsablesmuestrasDto->setNombre($nombre);
$ministeriosresponsablesmuestrasDto->setPaterno($paterno);
$ministeriosresponsablesmuestrasDto->setMaterno($materno);
$ministeriosresponsablesmuestrasDto->setFechaRegistro($fechaRegistro);
$ministeriosresponsablesmuestrasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idMinisterioResponsableMuestras=="") ){
$ministeriosresponsablesmuestrasDto=$ministeriosresponsablesmuestrasFacade->insertMinisteriosresponsablesmuestras($ministeriosresponsablesmuestrasDto);
echo $ministeriosresponsablesmuestrasDto;
} else if(($accion=="guardar") && ($idMinisterioResponsableMuestras!="")){
$ministeriosresponsablesmuestrasDto=$ministeriosresponsablesmuestrasFacade->updateMinisteriosresponsablesmuestras($ministeriosresponsablesmuestrasDto);
echo $ministeriosresponsablesmuestrasDto;
} else if($accion=="consultar"){
$ministeriosresponsablesmuestrasDto=$ministeriosresponsablesmuestrasFacade->selectMinisteriosresponsablesmuestras($ministeriosresponsablesmuestrasDto);
echo $ministeriosresponsablesmuestrasDto;
} else if( ($accion=="baja") && ($idMinisterioResponsableMuestras!="") ){
$ministeriosresponsablesmuestrasDto=$ministeriosresponsablesmuestrasFacade->deleteMinisteriosresponsablesmuestras($ministeriosresponsablesmuestrasDto);
echo $ministeriosresponsablesmuestrasDto;
} else if( ($accion=="seleccionar") && ($idMinisterioResponsableMuestras!="") ){
$ministeriosresponsablesmuestrasDto=$ministeriosresponsablesmuestrasFacade->selectMinisteriosresponsablesmuestras($ministeriosresponsablesmuestrasDto);
echo $ministeriosresponsablesmuestrasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>