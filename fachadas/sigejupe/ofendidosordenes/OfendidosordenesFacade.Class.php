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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ofendidosordenes/OfendidosordenesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ofendidosordenes/OfendidosordenesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class OfendidosordenesFacade {
private $proveedor;
public function __construct() {
}
public function validarOfendidosordenes($OfendidosordenesDto){
$OfendidosordenesDto->setidOfendidoOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getidOfendidoOrden(),"utf8"):strtoupper($OfendidosordenesDto->getidOfendidoOrden()))))));
if($this->esFecha($OfendidosordenesDto->getidOfendidoOrden())){
$OfendidosordenesDto->setidOfendidoOrden($this->fechaMysql($OfendidosordenesDto->getidOfendidoOrden()));
}
$OfendidosordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getidSolicitudOrden(),"utf8"):strtoupper($OfendidosordenesDto->getidSolicitudOrden()))))));
if($this->esFecha($OfendidosordenesDto->getidSolicitudOrden())){
$OfendidosordenesDto->setidSolicitudOrden($this->fechaMysql($OfendidosordenesDto->getidSolicitudOrden()));
}
$OfendidosordenesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getactivo(),"utf8"):strtoupper($OfendidosordenesDto->getactivo()))))));
if($this->esFecha($OfendidosordenesDto->getactivo())){
$OfendidosordenesDto->setactivo($this->fechaMysql($OfendidosordenesDto->getactivo()));
}
$OfendidosordenesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getfechaRegistro(),"utf8"):strtoupper($OfendidosordenesDto->getfechaRegistro()))))));
if($this->esFecha($OfendidosordenesDto->getfechaRegistro())){
$OfendidosordenesDto->setfechaRegistro($this->fechaMysql($OfendidosordenesDto->getfechaRegistro()));
}
$OfendidosordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getfechaActualizacion(),"utf8"):strtoupper($OfendidosordenesDto->getfechaActualizacion()))))));
if($this->esFecha($OfendidosordenesDto->getfechaActualizacion())){
$OfendidosordenesDto->setfechaActualizacion($this->fechaMysql($OfendidosordenesDto->getfechaActualizacion()));
}
$OfendidosordenesDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getnombre(),"utf8"):strtoupper($OfendidosordenesDto->getnombre()))))));
if($this->esFecha($OfendidosordenesDto->getnombre())){
$OfendidosordenesDto->setnombre($this->fechaMysql($OfendidosordenesDto->getnombre()));
}
$OfendidosordenesDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getpaterno(),"utf8"):strtoupper($OfendidosordenesDto->getpaterno()))))));
if($this->esFecha($OfendidosordenesDto->getpaterno())){
$OfendidosordenesDto->setpaterno($this->fechaMysql($OfendidosordenesDto->getpaterno()));
}
$OfendidosordenesDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getmaterno(),"utf8"):strtoupper($OfendidosordenesDto->getmaterno()))))));
if($this->esFecha($OfendidosordenesDto->getmaterno())){
$OfendidosordenesDto->setmaterno($this->fechaMysql($OfendidosordenesDto->getmaterno()));
}
$OfendidosordenesDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getcveTipoPersona(),"utf8"):strtoupper($OfendidosordenesDto->getcveTipoPersona()))))));
if($this->esFecha($OfendidosordenesDto->getcveTipoPersona())){
$OfendidosordenesDto->setcveTipoPersona($this->fechaMysql($OfendidosordenesDto->getcveTipoPersona()));
}
$OfendidosordenesDto->setnombreMoral(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getnombreMoral(),"utf8"):strtoupper($OfendidosordenesDto->getnombreMoral()))))));
if($this->esFecha($OfendidosordenesDto->getnombreMoral())){
$OfendidosordenesDto->setnombreMoral($this->fechaMysql($OfendidosordenesDto->getnombreMoral()));
}
$OfendidosordenesDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getcveGenero(),"utf8"):strtoupper($OfendidosordenesDto->getcveGenero()))))));
if($this->esFecha($OfendidosordenesDto->getcveGenero())){
$OfendidosordenesDto->setcveGenero($this->fechaMysql($OfendidosordenesDto->getcveGenero()));
}
$OfendidosordenesDto->setdomicilio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getdomicilio(),"utf8"):strtoupper($OfendidosordenesDto->getdomicilio()))))));
if($this->esFecha($OfendidosordenesDto->getdomicilio())){
$OfendidosordenesDto->setdomicilio($this->fechaMysql($OfendidosordenesDto->getdomicilio()));
}
$OfendidosordenesDto->settelefono(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->gettelefono(),"utf8"):strtoupper($OfendidosordenesDto->gettelefono()))))));
if($this->esFecha($OfendidosordenesDto->gettelefono())){
$OfendidosordenesDto->settelefono($this->fechaMysql($OfendidosordenesDto->gettelefono()));
}
$OfendidosordenesDto->setemail(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosordenesDto->getemail(),"utf8"):strtoupper($OfendidosordenesDto->getemail()))))));
if($this->esFecha($OfendidosordenesDto->getemail())){
$OfendidosordenesDto->setemail($this->fechaMysql($OfendidosordenesDto->getemail()));
}
return $OfendidosordenesDto;
}
public function selectOfendidosordenes($OfendidosordenesDto){
$OfendidosordenesDto=$this->validarOfendidosordenes($OfendidosordenesDto);
$OfendidosordenesController = new OfendidosordenesController();
$OfendidosordenesDto = $OfendidosordenesController->selectOfendidosordenes($OfendidosordenesDto);
if($OfendidosordenesDto!=""){
$dtoToJson = new DtoToJson($OfendidosordenesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertOfendidosordenes($OfendidosordenesDto){
$OfendidosordenesDto=$this->validarOfendidosordenes($OfendidosordenesDto);
$OfendidosordenesController = new OfendidosordenesController();
$OfendidosordenesDto = $OfendidosordenesController->insertOfendidosordenes($OfendidosordenesDto);
if($OfendidosordenesDto!=""){
$dtoToJson = new DtoToJson($OfendidosordenesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateOfendidosordenes($OfendidosordenesDto){
$OfendidosordenesDto=$this->validarOfendidosordenes($OfendidosordenesDto);
$OfendidosordenesController = new OfendidosordenesController();
$OfendidosordenesDto = $OfendidosordenesController->updateOfendidosordenes($OfendidosordenesDto);
if($OfendidosordenesDto!=""){
$dtoToJson = new DtoToJson($OfendidosordenesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteOfendidosordenes($OfendidosordenesDto){
$OfendidosordenesDto=$this->validarOfendidosordenes($OfendidosordenesDto);
$OfendidosordenesController = new OfendidosordenesController();
$OfendidosordenesDto = $OfendidosordenesController->deleteOfendidosordenes($OfendidosordenesDto);
if($OfendidosordenesDto==true){
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



@$idOfendidoOrden=$_POST["idOfendidoOrden"];
@$idSolicitudOrden=$_POST["idSolicitudOrden"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$nombre=$_POST["nombre"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$cveTipoPersona=$_POST["cveTipoPersona"];
@$nombreMoral=$_POST["nombreMoral"];
@$cveGenero=$_POST["cveGenero"];
@$domicilio=$_POST["domicilio"];
@$telefono=$_POST["telefono"];
@$email=$_POST["email"];
@$accion=$_POST["accion"];

$ofendidosordenesFacade = new OfendidosordenesFacade();
$ofendidosordenesDto = new OfendidosordenesDTO();

$ofendidosordenesDto->setIdOfendidoOrden($idOfendidoOrden);
$ofendidosordenesDto->setIdSolicitudOrden($idSolicitudOrden);
$ofendidosordenesDto->setActivo($activo);
$ofendidosordenesDto->setFechaRegistro($fechaRegistro);
$ofendidosordenesDto->setFechaActualizacion($fechaActualizacion);
$ofendidosordenesDto->setNombre($nombre);
$ofendidosordenesDto->setPaterno($paterno);
$ofendidosordenesDto->setMaterno($materno);
$ofendidosordenesDto->setCveTipoPersona($cveTipoPersona);
$ofendidosordenesDto->setNombreMoral($nombreMoral);
$ofendidosordenesDto->setCveGenero($cveGenero);
$ofendidosordenesDto->setDomicilio($domicilio);
$ofendidosordenesDto->setTelefono($telefono);
$ofendidosordenesDto->setEmail($email);

if( ($accion=="guardar") && ($idOfendidoOrden=="") ){
$ofendidosordenesDto=$ofendidosordenesFacade->insertOfendidosordenes($ofendidosordenesDto);
echo $ofendidosordenesDto;
} else if(($accion=="guardar") && ($idOfendidoOrden!="")){
$ofendidosordenesDto=$ofendidosordenesFacade->updateOfendidosordenes($ofendidosordenesDto);
echo $ofendidosordenesDto;
} else if($accion=="consultar"){
$ofendidosordenesDto=$ofendidosordenesFacade->selectOfendidosordenes($ofendidosordenesDto);
echo $ofendidosordenesDto;
} else if( ($accion=="baja") && ($idOfendidoOrden!="") ){
$ofendidosordenesDto=$ofendidosordenesFacade->deleteOfendidosordenes($ofendidosordenesDto);
echo $ofendidosordenesDto;
} else if( ($accion=="seleccionar") && ($idOfendidoOrden!="") ){
$ofendidosordenesDto=$ofendidosordenesFacade->selectOfendidosordenes($ofendidosordenesDto);
echo $ofendidosordenesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>