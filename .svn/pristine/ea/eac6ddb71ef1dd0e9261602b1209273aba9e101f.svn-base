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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/certificaciones/CertificacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/certificaciones/CertificacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class CertificacionesFacade {
private $proveedor;
public function __construct() {
}
public function validarCertificaciones($CertificacionesDto){
$CertificacionesDto->setIdCertificacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CertificacionesDto->getIdCertificacion(),"utf8"):strtoupper($CertificacionesDto->getIdCertificacion()))))));
if($this->esFecha($CertificacionesDto->getIdCertificacion())){
$CertificacionesDto->setIdCertificacion($this->fechaMysql($CertificacionesDto->getIdCertificacion()));
}
$CertificacionesDto->setIdActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CertificacionesDto->getIdActuacion(),"utf8"):strtoupper($CertificacionesDto->getIdActuacion()))))));
if($this->esFecha($CertificacionesDto->getIdActuacion())){
$CertificacionesDto->setIdActuacion($this->fechaMysql($CertificacionesDto->getIdActuacion()));
}
$CertificacionesDto->setNumEmpleadoAutCertificacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CertificacionesDto->getNumEmpleadoAutCertificacion(),"utf8"):strtoupper($CertificacionesDto->getNumEmpleadoAutCertificacion()))))));
if($this->esFecha($CertificacionesDto->getNumEmpleadoAutCertificacion())){
$CertificacionesDto->setNumEmpleadoAutCertificacion($this->fechaMysql($CertificacionesDto->getNumEmpleadoAutCertificacion()));
}
$CertificacionesDto->setLugarCertificacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CertificacionesDto->getLugarCertificacion(),"utf8"):strtoupper($CertificacionesDto->getLugarCertificacion()))))));
if($this->esFecha($CertificacionesDto->getLugarCertificacion())){
$CertificacionesDto->setLugarCertificacion($this->fechaMysql($CertificacionesDto->getLugarCertificacion()));
}
$CertificacionesDto->setHoraCertificacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CertificacionesDto->getHoraCertificacion(),"utf8"):strtoupper($CertificacionesDto->getHoraCertificacion()))))));
if($this->esFecha($CertificacionesDto->getHoraCertificacion())){
$CertificacionesDto->setHoraCertificacion($this->fechaMysql($CertificacionesDto->getHoraCertificacion()));
}
return $CertificacionesDto;
}
public function selectCertificaciones($CertificacionesDto){
$CertificacionesDto=$this->validarCertificaciones($CertificacionesDto);
$CertificacionesController = new CertificacionesController();
$CertificacionesDto = $CertificacionesController->selectCertificaciones($CertificacionesDto);
if($CertificacionesDto!=""){
$dtoToJson = new DtoToJson($CertificacionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertCertificaciones($CertificacionesDto){
$CertificacionesDto=$this->validarCertificaciones($CertificacionesDto);
$CertificacionesController = new CertificacionesController();
$CertificacionesDto = $CertificacionesController->insertCertificaciones($CertificacionesDto);
if($CertificacionesDto!=""){
$dtoToJson = new DtoToJson($CertificacionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateCertificaciones($CertificacionesDto){
$CertificacionesDto=$this->validarCertificaciones($CertificacionesDto);
$CertificacionesController = new CertificacionesController();
$CertificacionesDto = $CertificacionesController->updateCertificaciones($CertificacionesDto);
if($CertificacionesDto!=""){
$dtoToJson = new DtoToJson($CertificacionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteCertificaciones($CertificacionesDto){
$CertificacionesDto=$this->validarCertificaciones($CertificacionesDto);
$CertificacionesController = new CertificacionesController();
$CertificacionesDto = $CertificacionesController->deleteCertificaciones($CertificacionesDto);
if($CertificacionesDto==true){
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



@$IdCertificacion=$_POST["idCertificacion"];
@$IdActuacion=$_POST["idActuacion"];
@$NumEmpleadoAutCertificacion=$_POST["numEmpleadoAutCertificacion"];
@$LugarCertificacion=$_POST["lugarCertificacion"];
@$HoraCertificacion=$_POST["horaCertificacion"];
@$accion=$_POST["accion"];

$CertificacionesFacade = new CertificacionesFacade();
$CertificacionesDto = new CertificacionesDTO();

$CertificacionesDto->setIdCertificacion($IdCertificacion);
$CertificacionesDto->setIdActuacion($IdActuacion);
$CertificacionesDto->setNumEmpleadoAutCertificacion($NumEmpleadoAutCertificacion);
$CertificacionesDto->setLugarCertificacion($LugarCertificacion);
$CertificacionesDto->setHoraCertificacion($HoraCertificacion);

if( ($accion=="guardar") && ($IdCertificacion=="") ){
$CertificacionesDto=$CertificacionesFacade->insertCertificaciones($CertificacionesDto);
echo $CertificacionesDto;
} else if(($accion=="guardar") && ($IdCertificacion!="")){
$CertificacionesDto=$CertificacionesFacade->updateCertificaciones($CertificacionesDto);
echo $CertificacionesDto;
} else if($accion=="consultar"){
$CertificacionesDto=$CertificacionesFacade->selectCertificaciones($CertificacionesDto);
echo $CertificacionesDto;
} else if( ($accion=="baja") && ($IdCertificacion!="") ){
$CertificacionesDto=$CertificacionesFacade->deleteCertificaciones($CertificacionesDto);
echo $CertificacionesDto;
} else if( ($accion=="seleccionar") && ($IdCertificacion!="") ){
$CertificacionesDto=$CertificacionesFacade->selectCertificaciones($CertificacionesDto);
echo $CertificacionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>