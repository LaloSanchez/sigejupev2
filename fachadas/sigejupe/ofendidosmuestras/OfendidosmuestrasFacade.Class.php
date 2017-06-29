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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ofendidosmuestras/OfendidosmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ofendidosmuestras/OfendidosmuestrasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class OfendidosmuestrasFacade {
private $proveedor;
public function __construct() {
}
public function validarOfendidosmuestras($OfendidosmuestrasDto){
$OfendidosmuestrasDto->setidOfendidoMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getidOfendidoMuestra(),"utf8"):strtoupper($OfendidosmuestrasDto->getidOfendidoMuestra()))))));
if($this->esFecha($OfendidosmuestrasDto->getidOfendidoMuestra())){
$OfendidosmuestrasDto->setidOfendidoMuestra($this->fechaMysql($OfendidosmuestrasDto->getidOfendidoMuestra()));
}
$OfendidosmuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getidSolicitudMuestra(),"utf8"):strtoupper($OfendidosmuestrasDto->getidSolicitudMuestra()))))));
if($this->esFecha($OfendidosmuestrasDto->getidSolicitudMuestra())){
$OfendidosmuestrasDto->setidSolicitudMuestra($this->fechaMysql($OfendidosmuestrasDto->getidSolicitudMuestra()));
}
$OfendidosmuestrasDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getnombre(),"utf8"):strtoupper($OfendidosmuestrasDto->getnombre()))))));
if($this->esFecha($OfendidosmuestrasDto->getnombre())){
$OfendidosmuestrasDto->setnombre($this->fechaMysql($OfendidosmuestrasDto->getnombre()));
}
$OfendidosmuestrasDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getpaterno(),"utf8"):strtoupper($OfendidosmuestrasDto->getpaterno()))))));
if($this->esFecha($OfendidosmuestrasDto->getpaterno())){
$OfendidosmuestrasDto->setpaterno($this->fechaMysql($OfendidosmuestrasDto->getpaterno()));
}
$OfendidosmuestrasDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getmaterno(),"utf8"):strtoupper($OfendidosmuestrasDto->getmaterno()))))));
if($this->esFecha($OfendidosmuestrasDto->getmaterno())){
$OfendidosmuestrasDto->setmaterno($this->fechaMysql($OfendidosmuestrasDto->getmaterno()));
}
$OfendidosmuestrasDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getcveTipoPersona(),"utf8"):strtoupper($OfendidosmuestrasDto->getcveTipoPersona()))))));
if($this->esFecha($OfendidosmuestrasDto->getcveTipoPersona())){
$OfendidosmuestrasDto->setcveTipoPersona($this->fechaMysql($OfendidosmuestrasDto->getcveTipoPersona()));
}
$OfendidosmuestrasDto->setnombreMoral(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getnombreMoral(),"utf8"):strtoupper($OfendidosmuestrasDto->getnombreMoral()))))));
if($this->esFecha($OfendidosmuestrasDto->getnombreMoral())){
$OfendidosmuestrasDto->setnombreMoral($this->fechaMysql($OfendidosmuestrasDto->getnombreMoral()));
}
$OfendidosmuestrasDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getcveGenero(),"utf8"):strtoupper($OfendidosmuestrasDto->getcveGenero()))))));
if($this->esFecha($OfendidosmuestrasDto->getcveGenero())){
$OfendidosmuestrasDto->setcveGenero($this->fechaMysql($OfendidosmuestrasDto->getcveGenero()));
}
$OfendidosmuestrasDto->setdomicilio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getdomicilio(),"utf8"):strtoupper($OfendidosmuestrasDto->getdomicilio()))))));
if($this->esFecha($OfendidosmuestrasDto->getdomicilio())){
$OfendidosmuestrasDto->setdomicilio($this->fechaMysql($OfendidosmuestrasDto->getdomicilio()));
}
$OfendidosmuestrasDto->settelefono(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->gettelefono(),"utf8"):strtoupper($OfendidosmuestrasDto->gettelefono()))))));
if($this->esFecha($OfendidosmuestrasDto->gettelefono())){
$OfendidosmuestrasDto->settelefono($this->fechaMysql($OfendidosmuestrasDto->gettelefono()));
}
$OfendidosmuestrasDto->setemail(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getemail(),"utf8"):strtoupper($OfendidosmuestrasDto->getemail()))))));
if($this->esFecha($OfendidosmuestrasDto->getemail())){
$OfendidosmuestrasDto->setemail($this->fechaMysql($OfendidosmuestrasDto->getemail()));
}
$OfendidosmuestrasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getactivo(),"utf8"):strtoupper($OfendidosmuestrasDto->getactivo()))))));
if($this->esFecha($OfendidosmuestrasDto->getactivo())){
$OfendidosmuestrasDto->setactivo($this->fechaMysql($OfendidosmuestrasDto->getactivo()));
}
$OfendidosmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getfechaRegistro(),"utf8"):strtoupper($OfendidosmuestrasDto->getfechaRegistro()))))));
if($this->esFecha($OfendidosmuestrasDto->getfechaRegistro())){
$OfendidosmuestrasDto->setfechaRegistro($this->fechaMysql($OfendidosmuestrasDto->getfechaRegistro()));
}
$OfendidosmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OfendidosmuestrasDto->getfechaActualizacion(),"utf8"):strtoupper($OfendidosmuestrasDto->getfechaActualizacion()))))));
if($this->esFecha($OfendidosmuestrasDto->getfechaActualizacion())){
$OfendidosmuestrasDto->setfechaActualizacion($this->fechaMysql($OfendidosmuestrasDto->getfechaActualizacion()));
}
return $OfendidosmuestrasDto;
}
public function selectOfendidosmuestras($OfendidosmuestrasDto){
$OfendidosmuestrasDto=$this->validarOfendidosmuestras($OfendidosmuestrasDto);
$OfendidosmuestrasController = new OfendidosmuestrasController();
$OfendidosmuestrasDto = $OfendidosmuestrasController->selectOfendidosmuestras($OfendidosmuestrasDto);
if($OfendidosmuestrasDto!=""){
$dtoToJson = new DtoToJson($OfendidosmuestrasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertOfendidosmuestras($OfendidosmuestrasDto){
$OfendidosmuestrasDto=$this->validarOfendidosmuestras($OfendidosmuestrasDto);
$OfendidosmuestrasController = new OfendidosmuestrasController();
$OfendidosmuestrasDto = $OfendidosmuestrasController->insertOfendidosmuestras($OfendidosmuestrasDto);
if($OfendidosmuestrasDto!=""){
$dtoToJson = new DtoToJson($OfendidosmuestrasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateOfendidosmuestras($OfendidosmuestrasDto){
$OfendidosmuestrasDto=$this->validarOfendidosmuestras($OfendidosmuestrasDto);
$OfendidosmuestrasController = new OfendidosmuestrasController();
$OfendidosmuestrasDto = $OfendidosmuestrasController->updateOfendidosmuestras($OfendidosmuestrasDto);
if($OfendidosmuestrasDto!=""){
$dtoToJson = new DtoToJson($OfendidosmuestrasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteOfendidosmuestras($OfendidosmuestrasDto){
$OfendidosmuestrasDto=$this->validarOfendidosmuestras($OfendidosmuestrasDto);
$OfendidosmuestrasController = new OfendidosmuestrasController();
$OfendidosmuestrasDto = $OfendidosmuestrasController->deleteOfendidosmuestras($OfendidosmuestrasDto);
if($OfendidosmuestrasDto==true){
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



@$idOfendidoMuestra=$_POST["idOfendidoMuestra"];
@$idSolicitudMuestra=$_POST["idSolicitudMuestra"];
@$nombre=$_POST["nombre"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$cveTipoPersona=$_POST["cveTipoPersona"];
@$nombreMoral=$_POST["nombreMoral"];
@$cveGenero=$_POST["cveGenero"];
@$domicilio=$_POST["domicilio"];
@$telefono=$_POST["telefono"];
@$email=$_POST["email"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$ofendidosmuestrasFacade = new OfendidosmuestrasFacade();
$ofendidosmuestrasDto = new OfendidosmuestrasDTO();

$ofendidosmuestrasDto->setIdOfendidoMuestra($idOfendidoMuestra);
$ofendidosmuestrasDto->setIdSolicitudMuestra($idSolicitudMuestra);
$ofendidosmuestrasDto->setNombre($nombre);
$ofendidosmuestrasDto->setPaterno($paterno);
$ofendidosmuestrasDto->setMaterno($materno);
$ofendidosmuestrasDto->setCveTipoPersona($cveTipoPersona);
$ofendidosmuestrasDto->setNombreMoral($nombreMoral);
$ofendidosmuestrasDto->setCveGenero($cveGenero);
$ofendidosmuestrasDto->setDomicilio($domicilio);
$ofendidosmuestrasDto->setTelefono($telefono);
$ofendidosmuestrasDto->setEmail($email);
$ofendidosmuestrasDto->setActivo($activo);
$ofendidosmuestrasDto->setFechaRegistro($fechaRegistro);
$ofendidosmuestrasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idOfendidoMuestra=="") ){
$ofendidosmuestrasDto=$ofendidosmuestrasFacade->insertOfendidosmuestras($ofendidosmuestrasDto);
echo $ofendidosmuestrasDto;
} else if(($accion=="guardar") && ($idOfendidoMuestra!="")){
$ofendidosmuestrasDto=$ofendidosmuestrasFacade->updateOfendidosmuestras($ofendidosmuestrasDto);
echo $ofendidosmuestrasDto;
} else if($accion=="consultar"){
$ofendidosmuestrasDto=$ofendidosmuestrasFacade->selectOfendidosmuestras($ofendidosmuestrasDto);
echo $ofendidosmuestrasDto;
} else if( ($accion=="baja") && ($idOfendidoMuestra!="") ){
$ofendidosmuestrasDto=$ofendidosmuestrasFacade->deleteOfendidosmuestras($ofendidosmuestrasDto);
echo $ofendidosmuestrasDto;
} else if( ($accion=="seleccionar") && ($idOfendidoMuestra!="") ){
$ofendidosmuestrasDto=$ofendidosmuestrasFacade->selectOfendidosmuestras($ofendidosmuestrasDto);
echo $ofendidosmuestrasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>