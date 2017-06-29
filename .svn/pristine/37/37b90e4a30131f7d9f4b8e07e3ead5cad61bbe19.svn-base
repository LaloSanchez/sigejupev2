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

session_start();
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/accionesws/AccioneswsDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/accionesws/AccioneswsController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class AccioneswsFacade {
private $proveedor;
public function __construct() {
}
public function validarAccionesws($AccioneswsDto){
$AccioneswsDto->setidAccionwa(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AccioneswsDto->getidAccionwa(),"utf8"):strtoupper($AccioneswsDto->getidAccionwa()))))));
if($this->esFecha($AccioneswsDto->getidAccionwa())){
$AccioneswsDto->setidAccionwa($this->fechaMysql($AccioneswsDto->getidAccionwa()));
}
$AccioneswsDto->setdescAccionws(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AccioneswsDto->getdescAccionws(),"utf8"):strtoupper($AccioneswsDto->getdescAccionws()))))));
if($this->esFecha($AccioneswsDto->getdescAccionws())){
$AccioneswsDto->setdescAccionws($this->fechaMysql($AccioneswsDto->getdescAccionws()));
}
$AccioneswsDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AccioneswsDto->getactivo(),"utf8"):strtoupper($AccioneswsDto->getactivo()))))));
if($this->esFecha($AccioneswsDto->getactivo())){
$AccioneswsDto->setactivo($this->fechaMysql($AccioneswsDto->getactivo()));
}
$AccioneswsDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AccioneswsDto->getfechaRegistro(),"utf8"):strtoupper($AccioneswsDto->getfechaRegistro()))))));
if($this->esFecha($AccioneswsDto->getfechaRegistro())){
$AccioneswsDto->setfechaRegistro($this->fechaMysql($AccioneswsDto->getfechaRegistro()));
}
return $AccioneswsDto;
}
public function selectAccionesws($AccioneswsDto){
$AccioneswsDto=$this->validarAccionesws($AccioneswsDto);
$AccioneswsController = new AccioneswsController();
$AccioneswsDto = $AccioneswsController->selectAccionesws($AccioneswsDto);
if($AccioneswsDto!=""){
$dtoToJson = new DtoToJson($AccioneswsDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertAccionesws($AccioneswsDto){
$AccioneswsDto=$this->validarAccionesws($AccioneswsDto);
$AccioneswsController = new AccioneswsController();
$AccioneswsDto = $AccioneswsController->insertAccionesws($AccioneswsDto);
if($AccioneswsDto!=""){
$dtoToJson = new DtoToJson($AccioneswsDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateAccionesws($AccioneswsDto){
$AccioneswsDto=$this->validarAccionesws($AccioneswsDto);
$AccioneswsController = new AccioneswsController();
$AccioneswsDto = $AccioneswsController->updateAccionesws($AccioneswsDto);
if($AccioneswsDto!=""){
$dtoToJson = new DtoToJson($AccioneswsDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteAccionesws($AccioneswsDto){
$AccioneswsDto=$this->validarAccionesws($AccioneswsDto);
$AccioneswsController = new AccioneswsController();
$AccioneswsDto = $AccioneswsController->deleteAccionesws($AccioneswsDto);
if($AccioneswsDto==true){
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



@$idAccionwa=$_POST["idAccionwa"];
@$descAccionws=$_POST["descAccionws"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$accion=$_POST["accion"];

$accioneswsFacade = new AccioneswsFacade();
$accioneswsDto = new AccioneswsDTO();

$accioneswsDto->setIdAccionwa($idAccionwa);
$accioneswsDto->setDescAccionws($descAccionws);
$accioneswsDto->setActivo($activo);
$accioneswsDto->setFechaRegistro($fechaRegistro);

if( ($accion=="guardar") && ($idAccionwa=="") ){
$accioneswsDto=$accioneswsFacade->insertAccionesws($accioneswsDto);
echo $accioneswsDto;
} else if(($accion=="guardar") && ($idAccionwa!="")){
$accioneswsDto=$accioneswsFacade->updateAccionesws($accioneswsDto);
echo $accioneswsDto;
} else if($accion=="consultar"){
$accioneswsDto=$accioneswsFacade->selectAccionesws($accioneswsDto);
echo $accioneswsDto;
} else if( ($accion=="baja") && ($idAccionwa!="") ){
$accioneswsDto=$accioneswsFacade->deleteAccionesws($accioneswsDto);
echo $accioneswsDto;
} else if( ($accion=="seleccionar") && ($idAccionwa!="") ){
$accioneswsDto=$accioneswsFacade->selectAccionesws($accioneswsDto);
echo $accioneswsDto;
}


?>