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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ministeriosresponsables/MinisteriosresponsablesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ministeriosresponsables/MinisteriosresponsablesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class MinisteriosresponsablesFacade {
private $proveedor;
public function __construct() {
}
public function validarMinisteriosresponsables($MinisteriosresponsablesDto){
$MinisteriosresponsablesDto->setidMinisterioResponsable(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesDto->getidMinisterioResponsable(),"utf8"):strtoupper($MinisteriosresponsablesDto->getidMinisterioResponsable()))))));
if($this->esFecha($MinisteriosresponsablesDto->getidMinisterioResponsable())){
$MinisteriosresponsablesDto->setidMinisterioResponsable($this->fechaMysql($MinisteriosresponsablesDto->getidMinisterioResponsable()));
}
$MinisteriosresponsablesDto->setidSolicitudCateo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesDto->getidSolicitudCateo(),"utf8"):strtoupper($MinisteriosresponsablesDto->getidSolicitudCateo()))))));
if($this->esFecha($MinisteriosresponsablesDto->getidSolicitudCateo())){
$MinisteriosresponsablesDto->setidSolicitudCateo($this->fechaMysql($MinisteriosresponsablesDto->getidSolicitudCateo()));
}
$MinisteriosresponsablesDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesDto->getnombre(),"utf8"):strtoupper($MinisteriosresponsablesDto->getnombre()))))));
if($this->esFecha($MinisteriosresponsablesDto->getnombre())){
$MinisteriosresponsablesDto->setnombre($this->fechaMysql($MinisteriosresponsablesDto->getnombre()));
}
$MinisteriosresponsablesDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesDto->getpaterno(),"utf8"):strtoupper($MinisteriosresponsablesDto->getpaterno()))))));
if($this->esFecha($MinisteriosresponsablesDto->getpaterno())){
$MinisteriosresponsablesDto->setpaterno($this->fechaMysql($MinisteriosresponsablesDto->getpaterno()));
}
$MinisteriosresponsablesDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesDto->getmaterno(),"utf8"):strtoupper($MinisteriosresponsablesDto->getmaterno()))))));
if($this->esFecha($MinisteriosresponsablesDto->getmaterno())){
$MinisteriosresponsablesDto->setmaterno($this->fechaMysql($MinisteriosresponsablesDto->getmaterno()));
}
$MinisteriosresponsablesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesDto->getfechaRegistro(),"utf8"):strtoupper($MinisteriosresponsablesDto->getfechaRegistro()))))));
if($this->esFecha($MinisteriosresponsablesDto->getfechaRegistro())){
$MinisteriosresponsablesDto->setfechaRegistro($this->fechaMysql($MinisteriosresponsablesDto->getfechaRegistro()));
}
$MinisteriosresponsablesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesDto->getfechaActualizacion(),"utf8"):strtoupper($MinisteriosresponsablesDto->getfechaActualizacion()))))));
if($this->esFecha($MinisteriosresponsablesDto->getfechaActualizacion())){
$MinisteriosresponsablesDto->setfechaActualizacion($this->fechaMysql($MinisteriosresponsablesDto->getfechaActualizacion()));
}
return $MinisteriosresponsablesDto;
}
public function selectMinisteriosresponsables($MinisteriosresponsablesDto){
$MinisteriosresponsablesDto=$this->validarMinisteriosresponsables($MinisteriosresponsablesDto);
$MinisteriosresponsablesController = new MinisteriosresponsablesController();
$MinisteriosresponsablesDto = $MinisteriosresponsablesController->selectMinisteriosresponsables($MinisteriosresponsablesDto);
if($MinisteriosresponsablesDto!=""){
$dtoToJson = new DtoToJson($MinisteriosresponsablesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertMinisteriosresponsables($MinisteriosresponsablesDto){
$MinisteriosresponsablesDto=$this->validarMinisteriosresponsables($MinisteriosresponsablesDto);
$MinisteriosresponsablesController = new MinisteriosresponsablesController();
$MinisteriosresponsablesDto = $MinisteriosresponsablesController->insertMinisteriosresponsables($MinisteriosresponsablesDto);
if($MinisteriosresponsablesDto!=""){
$dtoToJson = new DtoToJson($MinisteriosresponsablesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateMinisteriosresponsables($MinisteriosresponsablesDto){
$MinisteriosresponsablesDto=$this->validarMinisteriosresponsables($MinisteriosresponsablesDto);
$MinisteriosresponsablesController = new MinisteriosresponsablesController();
$MinisteriosresponsablesDto = $MinisteriosresponsablesController->updateMinisteriosresponsables($MinisteriosresponsablesDto);
if($MinisteriosresponsablesDto!=""){
$dtoToJson = new DtoToJson($MinisteriosresponsablesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteMinisteriosresponsables($MinisteriosresponsablesDto){
$MinisteriosresponsablesDto=$this->validarMinisteriosresponsables($MinisteriosresponsablesDto);
$MinisteriosresponsablesController = new MinisteriosresponsablesController();
$MinisteriosresponsablesDto = $MinisteriosresponsablesController->deleteMinisteriosresponsables($MinisteriosresponsablesDto);
if($MinisteriosresponsablesDto==true){
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



@$idMinisterioResponsable=$_POST["idMinisterioResponsable"];
@$idSolicitudCateo=$_POST["idSolicitudCateo"];
@$nombre=$_POST["nombre"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$ministeriosresponsablesFacade = new MinisteriosresponsablesFacade();
$ministeriosresponsablesDto = new MinisteriosresponsablesDTO();

$ministeriosresponsablesDto->setIdMinisterioResponsable($idMinisterioResponsable);
$ministeriosresponsablesDto->setIdSolicitudCateo($idSolicitudCateo);
$ministeriosresponsablesDto->setNombre($nombre);
$ministeriosresponsablesDto->setPaterno($paterno);
$ministeriosresponsablesDto->setMaterno($materno);
$ministeriosresponsablesDto->setFechaRegistro($fechaRegistro);
$ministeriosresponsablesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idMinisterioResponsable=="") ){
$ministeriosresponsablesDto=$ministeriosresponsablesFacade->insertMinisteriosresponsables($ministeriosresponsablesDto);
echo $ministeriosresponsablesDto;
} else if(($accion=="guardar") && ($idMinisterioResponsable!="")){
$ministeriosresponsablesDto=$ministeriosresponsablesFacade->updateMinisteriosresponsables($ministeriosresponsablesDto);
echo $ministeriosresponsablesDto;
} else if($accion=="consultar"){
$ministeriosresponsablesDto=$ministeriosresponsablesFacade->selectMinisteriosresponsables($ministeriosresponsablesDto);
echo $ministeriosresponsablesDto;
} else if( ($accion=="baja") && ($idMinisterioResponsable!="") ){
$ministeriosresponsablesDto=$ministeriosresponsablesFacade->deleteMinisteriosresponsables($ministeriosresponsablesDto);
echo $ministeriosresponsablesDto;
} else if( ($accion=="seleccionar") && ($idMinisterioResponsable!="") ){
$ministeriosresponsablesDto=$ministeriosresponsablesFacade->selectMinisteriosresponsables($ministeriosresponsablesDto);
echo $ministeriosresponsablesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>