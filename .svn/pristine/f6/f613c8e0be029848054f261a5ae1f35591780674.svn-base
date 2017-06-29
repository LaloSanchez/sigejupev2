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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/sexualescarpetas/SexualescarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/sexualescarpetas/SexualescarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class SexualescarpetasFacade {
private $proveedor;
public function __construct() {
}
public function validarSexualescarpetas($SexualescarpetasDto){
$SexualescarpetasDto->setidSexualCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SexualescarpetasDto->getidSexualCarpeta(),"utf8"):strtoupper($SexualescarpetasDto->getidSexualCarpeta()))))));
if($this->esFecha($SexualescarpetasDto->getidSexualCarpeta())){
$SexualescarpetasDto->setidSexualCarpeta($this->fechaMysql($SexualescarpetasDto->getidSexualCarpeta()));
}
$SexualescarpetasDto->setcveModalidadAcoso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SexualescarpetasDto->getcveModalidadAcoso(),"utf8"):strtoupper($SexualescarpetasDto->getcveModalidadAcoso()))))));
if($this->esFecha($SexualescarpetasDto->getcveModalidadAcoso())){
$SexualescarpetasDto->setcveModalidadAcoso($this->fechaMysql($SexualescarpetasDto->getcveModalidadAcoso()));
}
$SexualescarpetasDto->setcveAmbitoAcoso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SexualescarpetasDto->getcveAmbitoAcoso(),"utf8"):strtoupper($SexualescarpetasDto->getcveAmbitoAcoso()))))));
if($this->esFecha($SexualescarpetasDto->getcveAmbitoAcoso())){
$SexualescarpetasDto->setcveAmbitoAcoso($this->fechaMysql($SexualescarpetasDto->getcveAmbitoAcoso()));
}
$SexualescarpetasDto->setidImpOfeDelCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SexualescarpetasDto->getidImpOfeDelCarpeta(),"utf8"):strtoupper($SexualescarpetasDto->getidImpOfeDelCarpeta()))))));
if($this->esFecha($SexualescarpetasDto->getidImpOfeDelCarpeta())){
$SexualescarpetasDto->setidImpOfeDelCarpeta($this->fechaMysql($SexualescarpetasDto->getidImpOfeDelCarpeta()));
}
$SexualescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SexualescarpetasDto->getfechaRegistro(),"utf8"):strtoupper($SexualescarpetasDto->getfechaRegistro()))))));
if($this->esFecha($SexualescarpetasDto->getfechaRegistro())){
$SexualescarpetasDto->setfechaRegistro($this->fechaMysql($SexualescarpetasDto->getfechaRegistro()));
}
$SexualescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SexualescarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($SexualescarpetasDto->getfechaActualizacion()))))));
if($this->esFecha($SexualescarpetasDto->getfechaActualizacion())){
$SexualescarpetasDto->setfechaActualizacion($this->fechaMysql($SexualescarpetasDto->getfechaActualizacion()));
}
return $SexualescarpetasDto;
}
public function selectSexualescarpetas($SexualescarpetasDto){
$SexualescarpetasDto=$this->validarSexualescarpetas($SexualescarpetasDto);
$SexualescarpetasController = new SexualescarpetasController();
$SexualescarpetasDto = $SexualescarpetasController->selectSexualescarpetas($SexualescarpetasDto);
if($SexualescarpetasDto!=""){
$dtoToJson = new DtoToJson($SexualescarpetasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertSexualescarpetas($SexualescarpetasDto){
$SexualescarpetasDto=$this->validarSexualescarpetas($SexualescarpetasDto);
$SexualescarpetasController = new SexualescarpetasController();
$SexualescarpetasDto = $SexualescarpetasController->insertSexualescarpetas($SexualescarpetasDto);
if($SexualescarpetasDto!=""){
$dtoToJson = new DtoToJson($SexualescarpetasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateSexualescarpetas($SexualescarpetasDto){
$SexualescarpetasDto=$this->validarSexualescarpetas($SexualescarpetasDto);
$SexualescarpetasController = new SexualescarpetasController();
$SexualescarpetasDto = $SexualescarpetasController->updateSexualescarpetas($SexualescarpetasDto);
if($SexualescarpetasDto!=""){
$dtoToJson = new DtoToJson($SexualescarpetasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteSexualescarpetas($SexualescarpetasDto){
$SexualescarpetasDto=$this->validarSexualescarpetas($SexualescarpetasDto);
$SexualescarpetasController = new SexualescarpetasController();
$SexualescarpetasDto = $SexualescarpetasController->deleteSexualescarpetas($SexualescarpetasDto);
if($SexualescarpetasDto==true){
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



@$idSexualCarpeta=$_POST["idSexualCarpeta"];
@$cveModalidadAcoso=$_POST["cveModalidadAcoso"];
@$cveAmbitoAcoso=$_POST["cveAmbitoAcoso"];
@$idImpOfeDelCarpeta=$_POST["idImpOfeDelCarpeta"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$sexualescarpetasFacade = new SexualescarpetasFacade();
$sexualescarpetasDto = new SexualescarpetasDTO();

$sexualescarpetasDto->setIdSexualCarpeta($idSexualCarpeta);
$sexualescarpetasDto->setCveModalidadAcoso($cveModalidadAcoso);
$sexualescarpetasDto->setCveAmbitoAcoso($cveAmbitoAcoso);
$sexualescarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
$sexualescarpetasDto->setFechaRegistro($fechaRegistro);
$sexualescarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idSexualCarpeta=="") ){
$sexualescarpetasDto=$sexualescarpetasFacade->insertSexualescarpetas($sexualescarpetasDto);
echo $sexualescarpetasDto;
} else if(($accion=="guardar") && ($idSexualCarpeta!="")){
$sexualescarpetasDto=$sexualescarpetasFacade->updateSexualescarpetas($sexualescarpetasDto);
echo $sexualescarpetasDto;
} else if($accion=="consultar"){
$sexualescarpetasDto=$sexualescarpetasFacade->selectSexualescarpetas($sexualescarpetasDto);
echo $sexualescarpetasDto;
} else if( ($accion=="baja") && ($idSexualCarpeta!="") ){
$sexualescarpetasDto=$sexualescarpetasFacade->deleteSexualescarpetas($sexualescarpetasDto);
echo $sexualescarpetasDto;
} else if( ($accion=="seleccionar") && ($idSexualCarpeta!="") ){
$sexualescarpetasDto=$sexualescarpetasFacade->selectSexualescarpetas($sexualescarpetasDto);
echo $sexualescarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>