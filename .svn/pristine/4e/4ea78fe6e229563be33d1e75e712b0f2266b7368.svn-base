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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/objetos/ObjetosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/objetos/ObjetosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ObjetosFacade {
private $proveedor;
public function __construct() {
}
public function validarObjetos($ObjetosDto){
$ObjetosDto->setidObjeto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ObjetosDto->getidObjeto(),"utf8"):strtoupper($ObjetosDto->getidObjeto()))))));
if($this->esFecha($ObjetosDto->getidObjeto())){
$ObjetosDto->setidObjeto($this->fechaMysql($ObjetosDto->getidObjeto()));
}
$ObjetosDto->setidSolicitudCateo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ObjetosDto->getidSolicitudCateo(),"utf8"):strtoupper($ObjetosDto->getidSolicitudCateo()))))));
if($this->esFecha($ObjetosDto->getidSolicitudCateo())){
$ObjetosDto->setidSolicitudCateo($this->fechaMysql($ObjetosDto->getidSolicitudCateo()));
}
$ObjetosDto->setdesObjeto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ObjetosDto->getdesObjeto(),"utf8"):strtoupper($ObjetosDto->getdesObjeto()))))));
if($this->esFecha($ObjetosDto->getdesObjeto())){
$ObjetosDto->setdesObjeto($this->fechaMysql($ObjetosDto->getdesObjeto()));
}
$ObjetosDto->setdomicilio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ObjetosDto->getdomicilio(),"utf8"):strtoupper($ObjetosDto->getdomicilio()))))));
if($this->esFecha($ObjetosDto->getdomicilio())){
$ObjetosDto->setdomicilio($this->fechaMysql($ObjetosDto->getdomicilio()));
}
$ObjetosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ObjetosDto->getfechaRegistro(),"utf8"):strtoupper($ObjetosDto->getfechaRegistro()))))));
if($this->esFecha($ObjetosDto->getfechaRegistro())){
$ObjetosDto->setfechaRegistro($this->fechaMysql($ObjetosDto->getfechaRegistro()));
}
$ObjetosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ObjetosDto->getfechaActualizacion(),"utf8"):strtoupper($ObjetosDto->getfechaActualizacion()))))));
if($this->esFecha($ObjetosDto->getfechaActualizacion())){
$ObjetosDto->setfechaActualizacion($this->fechaMysql($ObjetosDto->getfechaActualizacion()));
}
return $ObjetosDto;
}
public function selectObjetos($ObjetosDto){
$ObjetosDto=$this->validarObjetos($ObjetosDto);
$ObjetosController = new ObjetosController();
$ObjetosDto = $ObjetosController->selectObjetos($ObjetosDto);
if($ObjetosDto!=""){
$dtoToJson = new DtoToJson($ObjetosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertObjetos($ObjetosDto){
$ObjetosDto=$this->validarObjetos($ObjetosDto);
$ObjetosController = new ObjetosController();
$ObjetosDto = $ObjetosController->insertObjetos($ObjetosDto);
if($ObjetosDto!=""){
$dtoToJson = new DtoToJson($ObjetosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateObjetos($ObjetosDto){
$ObjetosDto=$this->validarObjetos($ObjetosDto);
$ObjetosController = new ObjetosController();
$ObjetosDto = $ObjetosController->updateObjetos($ObjetosDto);
if($ObjetosDto!=""){
$dtoToJson = new DtoToJson($ObjetosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteObjetos($ObjetosDto){
$ObjetosDto=$this->validarObjetos($ObjetosDto);
$ObjetosController = new ObjetosController();
$ObjetosDto = $ObjetosController->deleteObjetos($ObjetosDto);
if($ObjetosDto==true){
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



@$idObjeto=$_POST["idObjeto"];
@$idSolicitudCateo=$_POST["idSolicitudCateo"];
@$desObjeto=$_POST["desObjeto"];
@$domicilio=$_POST["domicilio"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$objetosFacade = new ObjetosFacade();
$objetosDto = new ObjetosDTO();

$objetosDto->setIdObjeto($idObjeto);
$objetosDto->setIdSolicitudCateo($idSolicitudCateo);
$objetosDto->setDesObjeto($desObjeto);
$objetosDto->setDomicilio($domicilio);
$objetosDto->setFechaRegistro($fechaRegistro);
$objetosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idObjeto=="") ){
$objetosDto=$objetosFacade->insertObjetos($objetosDto);
echo $objetosDto;
} else if(($accion=="guardar") && ($idObjeto!="")){
$objetosDto=$objetosFacade->updateObjetos($objetosDto);
echo $objetosDto;
} else if($accion=="consultar"){
$objetosDto=$objetosFacade->selectObjetos($objetosDto);
echo $objetosDto;
} else if( ($accion=="baja") && ($idObjeto!="") ){
$objetosDto=$objetosFacade->deleteObjetos($objetosDto);
echo $objetosDto;
} else if( ($accion=="seleccionar") && ($idObjeto!="") ){
$objetosDto=$objetosFacade->selectObjetos($objetosDto);
echo $objetosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>