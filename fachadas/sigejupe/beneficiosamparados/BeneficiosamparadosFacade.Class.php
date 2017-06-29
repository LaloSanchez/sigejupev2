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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/beneficiosamparados/BeneficiosamparadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/beneficiosamparados/BeneficiosamparadosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class BeneficiosamparadosFacade {
private $proveedor;
public function __construct() {
}
public function validarBeneficiosamparados($BeneficiosamparadosDto){
$BeneficiosamparadosDto->setidBeneficioAmparado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BeneficiosamparadosDto->getidBeneficioAmparado(),"utf8"):strtoupper($BeneficiosamparadosDto->getidBeneficioAmparado()))))));
if($this->esFecha($BeneficiosamparadosDto->getidBeneficioAmparado())){
$BeneficiosamparadosDto->setidBeneficioAmparado($this->fechaMysql($BeneficiosamparadosDto->getidBeneficioAmparado()));
}
$BeneficiosamparadosDto->setidBeneficioES(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BeneficiosamparadosDto->getidBeneficioES(),"utf8"):strtoupper($BeneficiosamparadosDto->getidBeneficioES()))))));
if($this->esFecha($BeneficiosamparadosDto->getidBeneficioES())){
$BeneficiosamparadosDto->setidBeneficioES($this->fechaMysql($BeneficiosamparadosDto->getidBeneficioES()));
}
$BeneficiosamparadosDto->setNumAmparo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BeneficiosamparadosDto->getNumAmparo(),"utf8"):strtoupper($BeneficiosamparadosDto->getNumAmparo()))))));
if($this->esFecha($BeneficiosamparadosDto->getNumAmparo())){
$BeneficiosamparadosDto->setNumAmparo($this->fechaMysql($BeneficiosamparadosDto->getNumAmparo()));
}
$BeneficiosamparadosDto->setAniAmparo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BeneficiosamparadosDto->getAniAmparo(),"utf8"):strtoupper($BeneficiosamparadosDto->getAniAmparo()))))));
if($this->esFecha($BeneficiosamparadosDto->getAniAmparo())){
$BeneficiosamparadosDto->setAniAmparo($this->fechaMysql($BeneficiosamparadosDto->getAniAmparo()));
}
$BeneficiosamparadosDto->setCveJuzgado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BeneficiosamparadosDto->getCveJuzgado(),"utf8"):strtoupper($BeneficiosamparadosDto->getCveJuzgado()))))));
if($this->esFecha($BeneficiosamparadosDto->getCveJuzgado())){
$BeneficiosamparadosDto->setCveJuzgado($this->fechaMysql($BeneficiosamparadosDto->getCveJuzgado()));
}
$BeneficiosamparadosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BeneficiosamparadosDto->getfechaRegistro(),"utf8"):strtoupper($BeneficiosamparadosDto->getfechaRegistro()))))));
if($this->esFecha($BeneficiosamparadosDto->getfechaRegistro())){
$BeneficiosamparadosDto->setfechaRegistro($this->fechaMysql($BeneficiosamparadosDto->getfechaRegistro()));
}
$BeneficiosamparadosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($BeneficiosamparadosDto->getfechaActualizacion(),"utf8"):strtoupper($BeneficiosamparadosDto->getfechaActualizacion()))))));
if($this->esFecha($BeneficiosamparadosDto->getfechaActualizacion())){
$BeneficiosamparadosDto->setfechaActualizacion($this->fechaMysql($BeneficiosamparadosDto->getfechaActualizacion()));
}
return $BeneficiosamparadosDto;
}
public function selectBeneficiosamparados($BeneficiosamparadosDto){
$BeneficiosamparadosDto=$this->validarBeneficiosamparados($BeneficiosamparadosDto);
$BeneficiosamparadosController = new BeneficiosamparadosController();
$BeneficiosamparadosDto = $BeneficiosamparadosController->selectBeneficiosamparados($BeneficiosamparadosDto);
if($BeneficiosamparadosDto!=""){
$dtoToJson = new DtoToJson($BeneficiosamparadosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertBeneficiosamparados($BeneficiosamparadosDto){
$BeneficiosamparadosDto=$this->validarBeneficiosamparados($BeneficiosamparadosDto);
$BeneficiosamparadosController = new BeneficiosamparadosController();
$BeneficiosamparadosDto = $BeneficiosamparadosController->insertBeneficiosamparados($BeneficiosamparadosDto);
if($BeneficiosamparadosDto!=""){
$dtoToJson = new DtoToJson($BeneficiosamparadosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateBeneficiosamparados($BeneficiosamparadosDto){
$BeneficiosamparadosDto=$this->validarBeneficiosamparados($BeneficiosamparadosDto);
$BeneficiosamparadosController = new BeneficiosamparadosController();
$BeneficiosamparadosDto = $BeneficiosamparadosController->updateBeneficiosamparados($BeneficiosamparadosDto);
if($BeneficiosamparadosDto!=""){
$dtoToJson = new DtoToJson($BeneficiosamparadosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteBeneficiosamparados($BeneficiosamparadosDto){
$BeneficiosamparadosDto=$this->validarBeneficiosamparados($BeneficiosamparadosDto);
$BeneficiosamparadosController = new BeneficiosamparadosController();
$BeneficiosamparadosDto = $BeneficiosamparadosController->deleteBeneficiosamparados($BeneficiosamparadosDto);
if($BeneficiosamparadosDto==true){
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



@$idBeneficioAmparado=$_POST["idBeneficioAmparado"];
@$idBeneficioES=$_POST["idBeneficioES"];
@$NumAmparo=$_POST["NumAmparo"];
@$AniAmparo=$_POST["AniAmparo"];
@$CveJuzgado=$_POST["CveJuzgado"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$beneficiosamparadosFacade = new BeneficiosamparadosFacade();
$beneficiosamparadosDto = new BeneficiosamparadosDTO();

$beneficiosamparadosDto->setIdBeneficioAmparado($idBeneficioAmparado);
$beneficiosamparadosDto->setIdBeneficioES($idBeneficioES);
$beneficiosamparadosDto->setNumAmparo($NumAmparo);
$beneficiosamparadosDto->setAniAmparo($AniAmparo);
$beneficiosamparadosDto->setCveJuzgado($CveJuzgado);
$beneficiosamparadosDto->setFechaRegistro($fechaRegistro);
$beneficiosamparadosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idBeneficioAmparado=="") ){
$beneficiosamparadosDto=$beneficiosamparadosFacade->insertBeneficiosamparados($beneficiosamparadosDto);
echo $beneficiosamparadosDto;
} else if(($accion=="guardar") && ($idBeneficioAmparado!="")){
$beneficiosamparadosDto=$beneficiosamparadosFacade->updateBeneficiosamparados($beneficiosamparadosDto);
echo $beneficiosamparadosDto;
} else if($accion=="consultar"){
$beneficiosamparadosDto=$beneficiosamparadosFacade->selectBeneficiosamparados($beneficiosamparadosDto);
echo $beneficiosamparadosDto;
} else if( ($accion=="baja") && ($idBeneficioAmparado!="") ){
$beneficiosamparadosDto=$beneficiosamparadosFacade->deleteBeneficiosamparados($beneficiosamparadosDto);
echo $beneficiosamparadosDto;
} else if( ($accion=="seleccionar") && ($idBeneficioAmparado!="") ){
$beneficiosamparadosDto=$beneficiosamparadosFacade->selectBeneficiosamparados($beneficiosamparadosDto);
echo $beneficiosamparadosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>