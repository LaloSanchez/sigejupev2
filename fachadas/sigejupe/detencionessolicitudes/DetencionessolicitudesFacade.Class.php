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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/detencionessolicitudes/DetencionessolicitudesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/detencionessolicitudes/DetencionessolicitudesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class DetencionessolicitudesFacade {
private $proveedor;
public function __construct() {
}
public function validarDetencionessolicitudes($DetencionessolicitudesDto){
$DetencionessolicitudesDto->setidDetencionSolicitud(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionessolicitudesDto->getidDetencionSolicitud(),"utf8"):strtoupper($DetencionessolicitudesDto->getidDetencionSolicitud()))))));
if($this->esFecha($DetencionessolicitudesDto->getidDetencionSolicitud())){
$DetencionessolicitudesDto->setidDetencionSolicitud($this->fechaMysql($DetencionessolicitudesDto->getidDetencionSolicitud()));
}
$DetencionessolicitudesDto->setidImputadoSolicitud(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionessolicitudesDto->getidImputadoSolicitud(),"utf8"):strtoupper($DetencionessolicitudesDto->getidImputadoSolicitud()))))));
if($this->esFecha($DetencionessolicitudesDto->getidImputadoSolicitud())){
$DetencionessolicitudesDto->setidImputadoSolicitud($this->fechaMysql($DetencionessolicitudesDto->getidImputadoSolicitud()));
}
$DetencionessolicitudesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionessolicitudesDto->getactivo(),"utf8"):strtoupper($DetencionessolicitudesDto->getactivo()))))));
if($this->esFecha($DetencionessolicitudesDto->getactivo())){
$DetencionessolicitudesDto->setactivo($this->fechaMysql($DetencionessolicitudesDto->getactivo()));
}
$DetencionessolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionessolicitudesDto->getfechaRegistro(),"utf8"):strtoupper($DetencionessolicitudesDto->getfechaRegistro()))))));
if($this->esFecha($DetencionessolicitudesDto->getfechaRegistro())){
$DetencionessolicitudesDto->setfechaRegistro($this->fechaMysql($DetencionessolicitudesDto->getfechaRegistro()));
}
$DetencionessolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionessolicitudesDto->getfechaActualizacion(),"utf8"):strtoupper($DetencionessolicitudesDto->getfechaActualizacion()))))));
if($this->esFecha($DetencionessolicitudesDto->getfechaActualizacion())){
$DetencionessolicitudesDto->setfechaActualizacion($this->fechaMysql($DetencionessolicitudesDto->getfechaActualizacion()));
}
$DetencionessolicitudesDto->setfechaDetencion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionessolicitudesDto->getfechaDetencion(),"utf8"):strtoupper($DetencionessolicitudesDto->getfechaDetencion()))))));
if($this->esFecha($DetencionessolicitudesDto->getfechaDetencion())){
$DetencionessolicitudesDto->setfechaDetencion($this->fechaMysql($DetencionessolicitudesDto->getfechaDetencion()));
}
$DetencionessolicitudesDto->setnumOficio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionessolicitudesDto->getnumOficio(),"utf8"):strtoupper($DetencionessolicitudesDto->getnumOficio()))))));
if($this->esFecha($DetencionessolicitudesDto->getnumOficio())){
$DetencionessolicitudesDto->setnumOficio($this->fechaMysql($DetencionessolicitudesDto->getnumOficio()));
}
$DetencionessolicitudesDto->setcveCereso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionessolicitudesDto->getcveCereso(),"utf8"):strtoupper($DetencionessolicitudesDto->getcveCereso()))))));
if($this->esFecha($DetencionessolicitudesDto->getcveCereso())){
$DetencionessolicitudesDto->setcveCereso($this->fechaMysql($DetencionessolicitudesDto->getcveCereso()));
}
$DetencionessolicitudesDto->setnombreAgente(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionessolicitudesDto->getnombreAgente(),"utf8"):strtoupper($DetencionessolicitudesDto->getnombreAgente()))))));
if($this->esFecha($DetencionessolicitudesDto->getnombreAgente())){
$DetencionessolicitudesDto->setnombreAgente($this->fechaMysql($DetencionessolicitudesDto->getnombreAgente()));
}
$DetencionessolicitudesDto->setobservaciones(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetencionessolicitudesDto->getobservaciones(),"utf8"):strtoupper($DetencionessolicitudesDto->getobservaciones()))))));
if($this->esFecha($DetencionessolicitudesDto->getobservaciones())){
$DetencionessolicitudesDto->setobservaciones($this->fechaMysql($DetencionessolicitudesDto->getobservaciones()));
}
return $DetencionessolicitudesDto;
}
public function selectDetencionessolicitudes($DetencionessolicitudesDto){
$DetencionessolicitudesDto=$this->validarDetencionessolicitudes($DetencionessolicitudesDto);
$DetencionessolicitudesController = new DetencionessolicitudesController();
$DetencionessolicitudesDto = $DetencionessolicitudesController->selectDetencionessolicitudes($DetencionessolicitudesDto);
if($DetencionessolicitudesDto!=""){
$dtoToJson = new DtoToJson($DetencionessolicitudesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertDetencionessolicitudes($DetencionessolicitudesDto){
$DetencionessolicitudesDto=$this->validarDetencionessolicitudes($DetencionessolicitudesDto);
$DetencionessolicitudesController = new DetencionessolicitudesController();
$DetencionessolicitudesDto = $DetencionessolicitudesController->insertDetencionessolicitudes($DetencionessolicitudesDto);
if($DetencionessolicitudesDto!=""){
$dtoToJson = new DtoToJson($DetencionessolicitudesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateDetencionessolicitudes($DetencionessolicitudesDto){
$DetencionessolicitudesDto=$this->validarDetencionessolicitudes($DetencionessolicitudesDto);
$DetencionessolicitudesController = new DetencionessolicitudesController();
$DetencionessolicitudesDto = $DetencionessolicitudesController->updateDetencionessolicitudes($DetencionessolicitudesDto);
if($DetencionessolicitudesDto!=""){
$dtoToJson = new DtoToJson($DetencionessolicitudesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteDetencionessolicitudes($DetencionessolicitudesDto){
$DetencionessolicitudesDto=$this->validarDetencionessolicitudes($DetencionessolicitudesDto);
$DetencionessolicitudesController = new DetencionessolicitudesController();
$DetencionessolicitudesDto = $DetencionessolicitudesController->deleteDetencionessolicitudes($DetencionessolicitudesDto);
if($DetencionessolicitudesDto==true){
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



@$idDetencionSolicitud=$_POST["idDetencionSolicitud"];
@$idImputadoSolicitud=$_POST["idImputadoSolicitud"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$fechaDetencion=$_POST["fechaDetencion"];
@$numOficio=$_POST["numOficio"];
@$cveCereso=$_POST["cveCereso"];
@$nombreAgente=$_POST["nombreAgente"];
@$observaciones=$_POST["observaciones"];
@$accion=$_POST["accion"];

$detencionessolicitudesFacade = new DetencionessolicitudesFacade();
$detencionessolicitudesDto = new DetencionessolicitudesDTO();

$detencionessolicitudesDto->setIdDetencionSolicitud($idDetencionSolicitud);
$detencionessolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
$detencionessolicitudesDto->setActivo($activo);
$detencionessolicitudesDto->setFechaRegistro($fechaRegistro);
$detencionessolicitudesDto->setFechaActualizacion($fechaActualizacion);
$detencionessolicitudesDto->setFechaDetencion($fechaDetencion);
$detencionessolicitudesDto->setNumOficio($numOficio);
$detencionessolicitudesDto->setCveCereso($cveCereso);
$detencionessolicitudesDto->setNombreAgente($nombreAgente);
$detencionessolicitudesDto->setObservaciones($observaciones);

if( ($accion=="guardar") && ($idDetencionSolicitud=="") ){
$detencionessolicitudesDto=$detencionessolicitudesFacade->insertDetencionessolicitudes($detencionessolicitudesDto);
echo $detencionessolicitudesDto;
} else if(($accion=="guardar") && ($idDetencionSolicitud!="")){
$detencionessolicitudesDto=$detencionessolicitudesFacade->updateDetencionessolicitudes($detencionessolicitudesDto);
echo $detencionessolicitudesDto;
} else if($accion=="consultar"){
$detencionessolicitudesDto=$detencionessolicitudesFacade->selectDetencionessolicitudes($detencionessolicitudesDto);
echo $detencionessolicitudesDto;
} else if( ($accion=="baja") && ($idDetencionSolicitud!="") ){
$detencionessolicitudesDto=$detencionessolicitudesFacade->deleteDetencionessolicitudes($detencionessolicitudesDto);
echo $detencionessolicitudesDto;
} else if( ($accion=="seleccionar") && ($idDetencionSolicitud!="") ){
$detencionessolicitudesDto=$detencionessolicitudesFacade->selectDetencionessolicitudes($detencionessolicitudesDto);
echo $detencionessolicitudesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>