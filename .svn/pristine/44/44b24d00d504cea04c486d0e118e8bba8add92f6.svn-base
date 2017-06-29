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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/rolesjuzgadores/RolesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/rolesjuzgadores/RolesjuzgadoresController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class RolesjuzgadoresFacade {
private $proveedor;
public function __construct() {
}
public function validarRolesjuzgadores($RolesjuzgadoresDto){
$RolesjuzgadoresDto->setcveRolJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RolesjuzgadoresDto->getcveRolJuzgador(),"utf8"):strtoupper($RolesjuzgadoresDto->getcveRolJuzgador()))))));
if($this->esFecha($RolesjuzgadoresDto->getcveRolJuzgador())){
$RolesjuzgadoresDto->setcveRolJuzgador($this->fechaMysql($RolesjuzgadoresDto->getcveRolJuzgador()));
}
$RolesjuzgadoresDto->setdesRolJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RolesjuzgadoresDto->getdesRolJuzgador(),"utf8"):strtoupper($RolesjuzgadoresDto->getdesRolJuzgador()))))));
if($this->esFecha($RolesjuzgadoresDto->getdesRolJuzgador())){
$RolesjuzgadoresDto->setdesRolJuzgador($this->fechaMysql($RolesjuzgadoresDto->getdesRolJuzgador()));
}
$RolesjuzgadoresDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RolesjuzgadoresDto->getactivo(),"utf8"):strtoupper($RolesjuzgadoresDto->getactivo()))))));
if($this->esFecha($RolesjuzgadoresDto->getactivo())){
$RolesjuzgadoresDto->setactivo($this->fechaMysql($RolesjuzgadoresDto->getactivo()));
}
$RolesjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RolesjuzgadoresDto->getfechaRegistro(),"utf8"):strtoupper($RolesjuzgadoresDto->getfechaRegistro()))))));
if($this->esFecha($RolesjuzgadoresDto->getfechaRegistro())){
$RolesjuzgadoresDto->setfechaRegistro($this->fechaMysql($RolesjuzgadoresDto->getfechaRegistro()));
}
$RolesjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($RolesjuzgadoresDto->getfechaActualizacion(),"utf8"):strtoupper($RolesjuzgadoresDto->getfechaActualizacion()))))));
if($this->esFecha($RolesjuzgadoresDto->getfechaActualizacion())){
$RolesjuzgadoresDto->setfechaActualizacion($this->fechaMysql($RolesjuzgadoresDto->getfechaActualizacion()));
}
return $RolesjuzgadoresDto;
}
public function selectRolesjuzgadores($RolesjuzgadoresDto){
$RolesjuzgadoresDto=$this->validarRolesjuzgadores($RolesjuzgadoresDto);
$RolesjuzgadoresController = new RolesjuzgadoresController();
$RolesjuzgadoresDto = $RolesjuzgadoresController->selectRolesjuzgadores($RolesjuzgadoresDto);
if($RolesjuzgadoresDto!=""){
$dtoToJson = new DtoToJson($RolesjuzgadoresDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertRolesjuzgadores($RolesjuzgadoresDto){
$RolesjuzgadoresDto=$this->validarRolesjuzgadores($RolesjuzgadoresDto);
$RolesjuzgadoresController = new RolesjuzgadoresController();
$RolesjuzgadoresDto = $RolesjuzgadoresController->insertRolesjuzgadores($RolesjuzgadoresDto);
if($RolesjuzgadoresDto!=""){
$dtoToJson = new DtoToJson($RolesjuzgadoresDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateRolesjuzgadores($RolesjuzgadoresDto){
$RolesjuzgadoresDto=$this->validarRolesjuzgadores($RolesjuzgadoresDto);
$RolesjuzgadoresController = new RolesjuzgadoresController();
$RolesjuzgadoresDto = $RolesjuzgadoresController->updateRolesjuzgadores($RolesjuzgadoresDto);
if($RolesjuzgadoresDto!=""){
$dtoToJson = new DtoToJson($RolesjuzgadoresDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteRolesjuzgadores($RolesjuzgadoresDto){
$RolesjuzgadoresDto=$this->validarRolesjuzgadores($RolesjuzgadoresDto);
$RolesjuzgadoresController = new RolesjuzgadoresController();
$RolesjuzgadoresDto = $RolesjuzgadoresController->deleteRolesjuzgadores($RolesjuzgadoresDto);
if($RolesjuzgadoresDto==true){
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



@$cveRolJuzgador=$_POST["cveRolJuzgador"];
@$desRolJuzgador=$_POST["desRolJuzgador"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$rolesjuzgadoresFacade = new RolesjuzgadoresFacade();
$rolesjuzgadoresDto = new RolesjuzgadoresDTO();

$rolesjuzgadoresDto->setCveRolJuzgador($cveRolJuzgador);
$rolesjuzgadoresDto->setDesRolJuzgador($desRolJuzgador);
$rolesjuzgadoresDto->setActivo($activo);
$rolesjuzgadoresDto->setFechaRegistro($fechaRegistro);
$rolesjuzgadoresDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveRolJuzgador=="") ){
$rolesjuzgadoresDto=$rolesjuzgadoresFacade->insertRolesjuzgadores($rolesjuzgadoresDto);
echo $rolesjuzgadoresDto;
} else if(($accion=="guardar") && ($cveRolJuzgador!="")){
$rolesjuzgadoresDto=$rolesjuzgadoresFacade->updateRolesjuzgadores($rolesjuzgadoresDto);
echo $rolesjuzgadoresDto;
} else if($accion=="consultar"){
$rolesjuzgadoresDto=$rolesjuzgadoresFacade->selectRolesjuzgadores($rolesjuzgadoresDto);
echo $rolesjuzgadoresDto;
} else if( ($accion=="baja") && ($cveRolJuzgador!="") ){
$rolesjuzgadoresDto=$rolesjuzgadoresFacade->deleteRolesjuzgadores($rolesjuzgadoresDto);
echo $rolesjuzgadoresDto;
} else if( ($accion=="seleccionar") && ($cveRolJuzgador!="") ){
$rolesjuzgadoresDto=$rolesjuzgadoresFacade->selectRolesjuzgadores($rolesjuzgadoresDto);
echo $rolesjuzgadoresDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>