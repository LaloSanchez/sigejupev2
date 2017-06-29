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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ministeriosresponsablesordenes/MinisteriosresponsablesordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ministeriosresponsablesordenes/MinisteriosresponsablesordenesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class MinisteriosresponsablesordenesFacade {
private $proveedor;
public function __construct() {
}
public function validarMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto){
$MinisteriosresponsablesordenesDto->setidMinisterioResponsableOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesordenesDto->getidMinisterioResponsableOrden(),"utf8"):strtoupper($MinisteriosresponsablesordenesDto->getidMinisterioResponsableOrden()))))));
if($this->esFecha($MinisteriosresponsablesordenesDto->getidMinisterioResponsableOrden())){
$MinisteriosresponsablesordenesDto->setidMinisterioResponsableOrden($this->fechaMysql($MinisteriosresponsablesordenesDto->getidMinisterioResponsableOrden()));
}
$MinisteriosresponsablesordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesordenesDto->getidSolicitudOrden(),"utf8"):strtoupper($MinisteriosresponsablesordenesDto->getidSolicitudOrden()))))));
if($this->esFecha($MinisteriosresponsablesordenesDto->getidSolicitudOrden())){
$MinisteriosresponsablesordenesDto->setidSolicitudOrden($this->fechaMysql($MinisteriosresponsablesordenesDto->getidSolicitudOrden()));
}
$MinisteriosresponsablesordenesDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesordenesDto->getnombre(),"utf8"):strtoupper($MinisteriosresponsablesordenesDto->getnombre()))))));
if($this->esFecha($MinisteriosresponsablesordenesDto->getnombre())){
$MinisteriosresponsablesordenesDto->setnombre($this->fechaMysql($MinisteriosresponsablesordenesDto->getnombre()));
}
$MinisteriosresponsablesordenesDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesordenesDto->getpaterno(),"utf8"):strtoupper($MinisteriosresponsablesordenesDto->getpaterno()))))));
if($this->esFecha($MinisteriosresponsablesordenesDto->getpaterno())){
$MinisteriosresponsablesordenesDto->setpaterno($this->fechaMysql($MinisteriosresponsablesordenesDto->getpaterno()));
}
$MinisteriosresponsablesordenesDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesordenesDto->getmaterno(),"utf8"):strtoupper($MinisteriosresponsablesordenesDto->getmaterno()))))));
if($this->esFecha($MinisteriosresponsablesordenesDto->getmaterno())){
$MinisteriosresponsablesordenesDto->setmaterno($this->fechaMysql($MinisteriosresponsablesordenesDto->getmaterno()));
}
$MinisteriosresponsablesordenesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesordenesDto->getfechaRegistro(),"utf8"):strtoupper($MinisteriosresponsablesordenesDto->getfechaRegistro()))))));
if($this->esFecha($MinisteriosresponsablesordenesDto->getfechaRegistro())){
$MinisteriosresponsablesordenesDto->setfechaRegistro($this->fechaMysql($MinisteriosresponsablesordenesDto->getfechaRegistro()));
}
$MinisteriosresponsablesordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MinisteriosresponsablesordenesDto->getfechaActualizacion(),"utf8"):strtoupper($MinisteriosresponsablesordenesDto->getfechaActualizacion()))))));
if($this->esFecha($MinisteriosresponsablesordenesDto->getfechaActualizacion())){
$MinisteriosresponsablesordenesDto->setfechaActualizacion($this->fechaMysql($MinisteriosresponsablesordenesDto->getfechaActualizacion()));
}
return $MinisteriosresponsablesordenesDto;
}
public function selectMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto){
$MinisteriosresponsablesordenesDto=$this->validarMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto);
$MinisteriosresponsablesordenesController = new MinisteriosresponsablesordenesController();
$MinisteriosresponsablesordenesDto = $MinisteriosresponsablesordenesController->selectMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto);
if($MinisteriosresponsablesordenesDto!=""){
$dtoToJson = new DtoToJson($MinisteriosresponsablesordenesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto){
$MinisteriosresponsablesordenesDto=$this->validarMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto);
$MinisteriosresponsablesordenesController = new MinisteriosresponsablesordenesController();
$MinisteriosresponsablesordenesDto = $MinisteriosresponsablesordenesController->insertMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto);
if($MinisteriosresponsablesordenesDto!=""){
$dtoToJson = new DtoToJson($MinisteriosresponsablesordenesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto){
$MinisteriosresponsablesordenesDto=$this->validarMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto);
$MinisteriosresponsablesordenesController = new MinisteriosresponsablesordenesController();
$MinisteriosresponsablesordenesDto = $MinisteriosresponsablesordenesController->updateMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto);
if($MinisteriosresponsablesordenesDto!=""){
$dtoToJson = new DtoToJson($MinisteriosresponsablesordenesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto){
$MinisteriosresponsablesordenesDto=$this->validarMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto);
$MinisteriosresponsablesordenesController = new MinisteriosresponsablesordenesController();
$MinisteriosresponsablesordenesDto = $MinisteriosresponsablesordenesController->deleteMinisteriosresponsablesordenes($MinisteriosresponsablesordenesDto);
if($MinisteriosresponsablesordenesDto==true){
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



@$idMinisterioResponsableOrden=$_POST["idMinisterioResponsableOrden"];
@$idSolicitudOrden=$_POST["idSolicitudOrden"];
@$nombre=$_POST["nombre"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$ministeriosresponsablesordenesFacade = new MinisteriosresponsablesordenesFacade();
$ministeriosresponsablesordenesDto = new MinisteriosresponsablesordenesDTO();

$ministeriosresponsablesordenesDto->setIdMinisterioResponsableOrden($idMinisterioResponsableOrden);
$ministeriosresponsablesordenesDto->setIdSolicitudOrden($idSolicitudOrden);
$ministeriosresponsablesordenesDto->setNombre($nombre);
$ministeriosresponsablesordenesDto->setPaterno($paterno);
$ministeriosresponsablesordenesDto->setMaterno($materno);
$ministeriosresponsablesordenesDto->setFechaRegistro($fechaRegistro);
$ministeriosresponsablesordenesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idMinisterioResponsableOrden=="") ){
$ministeriosresponsablesordenesDto=$ministeriosresponsablesordenesFacade->insertMinisteriosresponsablesordenes($ministeriosresponsablesordenesDto);
echo $ministeriosresponsablesordenesDto;
} else if(($accion=="guardar") && ($idMinisterioResponsableOrden!="")){
$ministeriosresponsablesordenesDto=$ministeriosresponsablesordenesFacade->updateMinisteriosresponsablesordenes($ministeriosresponsablesordenesDto);
echo $ministeriosresponsablesordenesDto;
} else if($accion=="consultar"){
$ministeriosresponsablesordenesDto=$ministeriosresponsablesordenesFacade->selectMinisteriosresponsablesordenes($ministeriosresponsablesordenesDto);
echo $ministeriosresponsablesordenesDto;
} else if( ($accion=="baja") && ($idMinisterioResponsableOrden!="") ){
$ministeriosresponsablesordenesDto=$ministeriosresponsablesordenesFacade->deleteMinisteriosresponsablesordenes($ministeriosresponsablesordenesDto);
echo $ministeriosresponsablesordenesDto;
} else if( ($accion=="seleccionar") && ($idMinisterioResponsableOrden!="") ){
$ministeriosresponsablesordenesDto=$ministeriosresponsablesordenesFacade->selectMinisteriosresponsablesordenes($ministeriosresponsablesordenesDto);
echo $ministeriosresponsablesordenesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>