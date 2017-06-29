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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/drogas/DrogasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/drogas/DrogasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class DrogasFacade {
private $proveedor;
public function __construct() {
}
public function validarDrogas($DrogasDto){
$DrogasDto->setcveDroga(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DrogasDto->getcveDroga(),"utf8"):strtoupper($DrogasDto->getcveDroga()))))));
if($this->esFecha($DrogasDto->getcveDroga())){
$DrogasDto->setcveDroga($this->fechaMysql($DrogasDto->getcveDroga()));
}
$DrogasDto->setdesDroga(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DrogasDto->getdesDroga(),"utf8"):strtoupper($DrogasDto->getdesDroga()))))));
if($this->esFecha($DrogasDto->getdesDroga())){
$DrogasDto->setdesDroga($this->fechaMysql($DrogasDto->getdesDroga()));
}
$DrogasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DrogasDto->getactivo(),"utf8"):strtoupper($DrogasDto->getactivo()))))));
if($this->esFecha($DrogasDto->getactivo())){
$DrogasDto->setactivo($this->fechaMysql($DrogasDto->getactivo()));
}
$DrogasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DrogasDto->getfechaRegistro(),"utf8"):strtoupper($DrogasDto->getfechaRegistro()))))));
if($this->esFecha($DrogasDto->getfechaRegistro())){
$DrogasDto->setfechaRegistro($this->fechaMysql($DrogasDto->getfechaRegistro()));
}
$DrogasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DrogasDto->getfechaActualizacion(),"utf8"):strtoupper($DrogasDto->getfechaActualizacion()))))));
if($this->esFecha($DrogasDto->getfechaActualizacion())){
$DrogasDto->setfechaActualizacion($this->fechaMysql($DrogasDto->getfechaActualizacion()));
}
return $DrogasDto;
}
public function selectDrogas($DrogasDto){
$DrogasDto=$this->validarDrogas($DrogasDto);
$DrogasController = new DrogasController();
$DrogasDto = $DrogasController->selectDrogas($DrogasDto);
if($DrogasDto!=""){
$dtoToJson = new DtoToJson($DrogasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertDrogas($DrogasDto){
$DrogasDto=$this->validarDrogas($DrogasDto);
$DrogasController = new DrogasController();
$DrogasDto = $DrogasController->insertDrogas($DrogasDto);
if($DrogasDto!=""){
$dtoToJson = new DtoToJson($DrogasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateDrogas($DrogasDto){
$DrogasDto=$this->validarDrogas($DrogasDto);
$DrogasController = new DrogasController();
$DrogasDto = $DrogasController->updateDrogas($DrogasDto);
if($DrogasDto!=""){
$dtoToJson = new DtoToJson($DrogasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteDrogas($DrogasDto){
$DrogasDto=$this->validarDrogas($DrogasDto);
$DrogasController = new DrogasController();
$DrogasDto = $DrogasController->deleteDrogas($DrogasDto);
if($DrogasDto==true){
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



@$cveDroga=$_POST["cveDroga"];
@$desDroga=$_POST["desDroga"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$drogasFacade = new DrogasFacade();
$drogasDto = new DrogasDTO();

$drogasDto->setCveDroga($cveDroga);
$drogasDto->setDesDroga($desDroga);
$drogasDto->setActivo($activo);
$drogasDto->setFechaRegistro($fechaRegistro);
$drogasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveDroga=="") ){
$drogasDto=$drogasFacade->insertDrogas($drogasDto);
echo $drogasDto;
} else if(($accion=="guardar") && ($cveDroga!="")){
$drogasDto=$drogasFacade->updateDrogas($drogasDto);
echo $drogasDto;
} else if($accion=="consultar"){
$drogasDto=$drogasFacade->selectDrogas($drogasDto);
echo $drogasDto;
} else if( ($accion=="baja") && ($cveDroga!="") ){
$drogasDto=$drogasFacade->deleteDrogas($drogasDto);
echo $drogasDto;
} else if( ($accion=="seleccionar") && ($cveDroga!="") ){
$drogasDto=$drogasFacade->selectDrogas($drogasDto);
echo $drogasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>