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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/medidascautelares/MedidascautelaresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/medidascautelares/MedidascautelaresController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class MedidascautelaresFacade {
private $proveedor;
public function __construct() {
}
public function validarMedidascautelares($MedidascautelaresDto){
$MedidascautelaresDto->setidMedidaCautelar(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidascautelaresDto->getidMedidaCautelar(),"utf8"):strtoupper($MedidascautelaresDto->getidMedidaCautelar()))))));
if($this->esFecha($MedidascautelaresDto->getidMedidaCautelar())){
$MedidascautelaresDto->setidMedidaCautelar($this->fechaMysql($MedidascautelaresDto->getidMedidaCautelar()));
}
$MedidascautelaresDto->setidActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidascautelaresDto->getidActuacion(),"utf8"):strtoupper($MedidascautelaresDto->getidActuacion()))))));
if($this->esFecha($MedidascautelaresDto->getidActuacion())){
$MedidascautelaresDto->setidActuacion($this->fechaMysql($MedidascautelaresDto->getidActuacion()));
}
$MedidascautelaresDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidascautelaresDto->getidImputadoCarpeta(),"utf8"):strtoupper($MedidascautelaresDto->getidImputadoCarpeta()))))));
if($this->esFecha($MedidascautelaresDto->getidImputadoCarpeta())){
$MedidascautelaresDto->setidImputadoCarpeta($this->fechaMysql($MedidascautelaresDto->getidImputadoCarpeta()));
}
$MedidascautelaresDto->setApelada(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidascautelaresDto->getApelada(),"utf8"):strtoupper($MedidascautelaresDto->getApelada()))))));
if($this->esFecha($MedidascautelaresDto->getApelada())){
$MedidascautelaresDto->setApelada($this->fechaMysql($MedidascautelaresDto->getApelada()));
}
$MedidascautelaresDto->setfechaInicio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidascautelaresDto->getfechaInicio(),"utf8"):strtoupper($MedidascautelaresDto->getfechaInicio()))))));
if($this->esFecha($MedidascautelaresDto->getfechaInicio())){
$MedidascautelaresDto->setfechaInicio($this->fechaMysql($MedidascautelaresDto->getfechaInicio()));
}
$MedidascautelaresDto->setfechaTermina(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidascautelaresDto->getfechaTermina(),"utf8"):strtoupper($MedidascautelaresDto->getfechaTermina()))))));
if($this->esFecha($MedidascautelaresDto->getfechaTermina())){
$MedidascautelaresDto->setfechaTermina($this->fechaMysql($MedidascautelaresDto->getfechaTermina()));
}
$MedidascautelaresDto->setcveTipoMedidaCautelar(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidascautelaresDto->getcveTipoMedidaCautelar(),"utf8"):strtoupper($MedidascautelaresDto->getcveTipoMedidaCautelar()))))));
if($this->esFecha($MedidascautelaresDto->getcveTipoMedidaCautelar())){
$MedidascautelaresDto->setcveTipoMedidaCautelar($this->fechaMysql($MedidascautelaresDto->getcveTipoMedidaCautelar()));
}
$MedidascautelaresDto->setcveAutoridadEmisora(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MedidascautelaresDto->getcveAutoridadEmisora(),"utf8"):strtoupper($MedidascautelaresDto->getcveAutoridadEmisora()))))));
if($this->esFecha($MedidascautelaresDto->getcveAutoridadEmisora())){
$MedidascautelaresDto->setcveAutoridadEmisora($this->fechaMysql($MedidascautelaresDto->getcveAutoridadEmisora()));
}
return $MedidascautelaresDto;
}
public function selectMedidascautelares($MedidascautelaresDto){
$MedidascautelaresDto=$this->validarMedidascautelares($MedidascautelaresDto);
$MedidascautelaresController = new MedidascautelaresController();
$MedidascautelaresDto = $MedidascautelaresController->selectMedidascautelares($MedidascautelaresDto);
if($MedidascautelaresDto!=""){
$dtoToJson = new DtoToJson($MedidascautelaresDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertMedidascautelares($MedidascautelaresDto){
$MedidascautelaresDto=$this->validarMedidascautelares($MedidascautelaresDto);
$MedidascautelaresController = new MedidascautelaresController();
$MedidascautelaresDto = $MedidascautelaresController->insertMedidascautelares($MedidascautelaresDto);
if($MedidascautelaresDto!=""){
$dtoToJson = new DtoToJson($MedidascautelaresDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateMedidascautelares($MedidascautelaresDto){
$MedidascautelaresDto=$this->validarMedidascautelares($MedidascautelaresDto);
$MedidascautelaresController = new MedidascautelaresController();
$MedidascautelaresDto = $MedidascautelaresController->updateMedidascautelares($MedidascautelaresDto);
if($MedidascautelaresDto!=""){
$dtoToJson = new DtoToJson($MedidascautelaresDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteMedidascautelares($MedidascautelaresDto){
$MedidascautelaresDto=$this->validarMedidascautelares($MedidascautelaresDto);
$MedidascautelaresController = new MedidascautelaresController();
$MedidascautelaresDto = $MedidascautelaresController->deleteMedidascautelares($MedidascautelaresDto);
if($MedidascautelaresDto==true){
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



@$idMedidaCautelar=$_POST["idMedidaCautelar"];
@$idActuacion=$_POST["idActuacion"];
@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
@$apelada=$_POST["apelada"];
@$fechaInicio=$_POST["fechaInicio"];
@$fechaTermina=$_POST["fechaTermina"];
@$cveTipoMedidaCautelar=$_POST["cveTipoMedidaCautelar"];
@$cveAutoridadEmisora=$_POST["cveAutoridadEmisora"];
@$accion=$_POST["accion"];

$medidascautelaresFacade = new MedidascautelaresFacade();
$medidascautelaresDto = new MedidascautelaresDTO();

$medidascautelaresDto->setIdMedidaCautelar($idMedidaCautelar);
$medidascautelaresDto->setIdActuacion($idActuacion);
$medidascautelaresDto->setIdImputadoCarpeta($idImputadoCarpeta);
$medidascautelaresDto->setApelada($apelada);
$medidascautelaresDto->setFechaInicio($fechaInicio);
$medidascautelaresDto->setFechaTermina($fechaTermina);
$medidascautelaresDto->setCveTipoMedidaCautelar($cveTipoMedidaCautelar);
$medidascautelaresDto->setCveAutoridadEmisora($cveAutoridadEmisora);

if( ($accion=="guardar") && ($idMedidaCautelar=="") ){
$medidascautelaresDto=$medidascautelaresFacade->insertMedidascautelares($medidascautelaresDto);
echo $medidascautelaresDto;
} else if(($accion=="guardar") && ($idMedidaCautelar!="")){
$medidascautelaresDto=$medidascautelaresFacade->updateMedidascautelares($medidascautelaresDto);
echo $medidascautelaresDto;
} else if($accion=="consultar"){
$medidascautelaresDto=$medidascautelaresFacade->selectMedidascautelares($medidascautelaresDto);
echo $medidascautelaresDto;
} else if( ($accion=="baja") && ($idMedidaCautelar!="") ){
$medidascautelaresDto=$medidascautelaresFacade->deleteMedidascautelares($medidascautelaresDto);
echo $medidascautelaresDto;
} else if( ($accion=="seleccionar") && ($idMedidaCautelar!="") ){
$medidascautelaresDto=$medidascautelaresFacade->selectMedidascautelares($medidascautelaresDto);
echo $medidascautelaresDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>