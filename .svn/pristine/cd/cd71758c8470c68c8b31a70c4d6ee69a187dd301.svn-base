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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/victimadeladelincuenciaorganizada/VictimadeladelincuenciaorganizadaDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/victimadeladelincuenciaorganizada/VictimadeladelincuenciaorganizadaController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class VictimadeladelincuenciaorganizadaFacade {
private $proveedor;
public function __construct() {
}
public function validarVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto){
$VictimadeladelincuenciaorganizadaDto->setcveVictimaDeLaDelincuenciaOrganizada(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada(),"utf8"):strtoupper($VictimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada()))))));
if($this->esFecha($VictimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada())){
$VictimadeladelincuenciaorganizadaDto->setcveVictimaDeLaDelincuenciaOrganizada($this->fechaMysql($VictimadeladelincuenciaorganizadaDto->getcveVictimaDeLaDelincuenciaOrganizada()));
}
$VictimadeladelincuenciaorganizadaDto->setdesVictimaDeLaDelincuenciaOrganizada(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeladelincuenciaorganizadaDto->getdesVictimaDeLaDelincuenciaOrganizada(),"utf8"):strtoupper($VictimadeladelincuenciaorganizadaDto->getdesVictimaDeLaDelincuenciaOrganizada()))))));
if($this->esFecha($VictimadeladelincuenciaorganizadaDto->getdesVictimaDeLaDelincuenciaOrganizada())){
$VictimadeladelincuenciaorganizadaDto->setdesVictimaDeLaDelincuenciaOrganizada($this->fechaMysql($VictimadeladelincuenciaorganizadaDto->getdesVictimaDeLaDelincuenciaOrganizada()));
}
$VictimadeladelincuenciaorganizadaDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeladelincuenciaorganizadaDto->getactivo(),"utf8"):strtoupper($VictimadeladelincuenciaorganizadaDto->getactivo()))))));
if($this->esFecha($VictimadeladelincuenciaorganizadaDto->getactivo())){
$VictimadeladelincuenciaorganizadaDto->setactivo($this->fechaMysql($VictimadeladelincuenciaorganizadaDto->getactivo()));
}
$VictimadeladelincuenciaorganizadaDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeladelincuenciaorganizadaDto->getfechaRegistro(),"utf8"):strtoupper($VictimadeladelincuenciaorganizadaDto->getfechaRegistro()))))));
if($this->esFecha($VictimadeladelincuenciaorganizadaDto->getfechaRegistro())){
$VictimadeladelincuenciaorganizadaDto->setfechaRegistro($this->fechaMysql($VictimadeladelincuenciaorganizadaDto->getfechaRegistro()));
}
$VictimadeladelincuenciaorganizadaDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeladelincuenciaorganizadaDto->getfechaActualizacion(),"utf8"):strtoupper($VictimadeladelincuenciaorganizadaDto->getfechaActualizacion()))))));
if($this->esFecha($VictimadeladelincuenciaorganizadaDto->getfechaActualizacion())){
$VictimadeladelincuenciaorganizadaDto->setfechaActualizacion($this->fechaMysql($VictimadeladelincuenciaorganizadaDto->getfechaActualizacion()));
}
return $VictimadeladelincuenciaorganizadaDto;
}
public function selectVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto){
$VictimadeladelincuenciaorganizadaDto=$this->validarVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto);
$VictimadeladelincuenciaorganizadaController = new VictimadeladelincuenciaorganizadaController();
$VictimadeladelincuenciaorganizadaDto = $VictimadeladelincuenciaorganizadaController->selectVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto);
if($VictimadeladelincuenciaorganizadaDto!=""){
$dtoToJson = new DtoToJson($VictimadeladelincuenciaorganizadaDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto){
$VictimadeladelincuenciaorganizadaDto=$this->validarVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto);
$VictimadeladelincuenciaorganizadaController = new VictimadeladelincuenciaorganizadaController();
$VictimadeladelincuenciaorganizadaDto = $VictimadeladelincuenciaorganizadaController->insertVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto);
if($VictimadeladelincuenciaorganizadaDto!=""){
$dtoToJson = new DtoToJson($VictimadeladelincuenciaorganizadaDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto){
$VictimadeladelincuenciaorganizadaDto=$this->validarVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto);
$VictimadeladelincuenciaorganizadaController = new VictimadeladelincuenciaorganizadaController();
$VictimadeladelincuenciaorganizadaDto = $VictimadeladelincuenciaorganizadaController->updateVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto);
if($VictimadeladelincuenciaorganizadaDto!=""){
$dtoToJson = new DtoToJson($VictimadeladelincuenciaorganizadaDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto){
$VictimadeladelincuenciaorganizadaDto=$this->validarVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto);
$VictimadeladelincuenciaorganizadaController = new VictimadeladelincuenciaorganizadaController();
$VictimadeladelincuenciaorganizadaDto = $VictimadeladelincuenciaorganizadaController->deleteVictimadeladelincuenciaorganizada($VictimadeladelincuenciaorganizadaDto);
if($VictimadeladelincuenciaorganizadaDto==true){
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



@$cveVictimaDeLaDelincuenciaOrganizada=$_POST["cveVictimaDeLaDelincuenciaOrganizada"];
@$desVictimaDeLaDelincuenciaOrganizada=$_POST["desVictimaDeLaDelincuenciaOrganizada"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$victimadeladelincuenciaorganizadaFacade = new VictimadeladelincuenciaorganizadaFacade();
$victimadeladelincuenciaorganizadaDto = new VictimadeladelincuenciaorganizadaDTO();

$victimadeladelincuenciaorganizadaDto->setCveVictimaDeLaDelincuenciaOrganizada($cveVictimaDeLaDelincuenciaOrganizada);
$victimadeladelincuenciaorganizadaDto->setDesVictimaDeLaDelincuenciaOrganizada($desVictimaDeLaDelincuenciaOrganizada);
$victimadeladelincuenciaorganizadaDto->setActivo($activo);
$victimadeladelincuenciaorganizadaDto->setFechaRegistro($fechaRegistro);
$victimadeladelincuenciaorganizadaDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveVictimaDeLaDelincuenciaOrganizada=="") ){
$victimadeladelincuenciaorganizadaDto=$victimadeladelincuenciaorganizadaFacade->insertVictimadeladelincuenciaorganizada($victimadeladelincuenciaorganizadaDto);
echo $victimadeladelincuenciaorganizadaDto;
} else if(($accion=="guardar") && ($cveVictimaDeLaDelincuenciaOrganizada!="")){
$victimadeladelincuenciaorganizadaDto=$victimadeladelincuenciaorganizadaFacade->updateVictimadeladelincuenciaorganizada($victimadeladelincuenciaorganizadaDto);
echo $victimadeladelincuenciaorganizadaDto;
} else if($accion=="consultar"){
$victimadeladelincuenciaorganizadaDto=$victimadeladelincuenciaorganizadaFacade->selectVictimadeladelincuenciaorganizada($victimadeladelincuenciaorganizadaDto);
echo $victimadeladelincuenciaorganizadaDto;
} else if( ($accion=="baja") && ($cveVictimaDeLaDelincuenciaOrganizada!="") ){
$victimadeladelincuenciaorganizadaDto=$victimadeladelincuenciaorganizadaFacade->deleteVictimadeladelincuenciaorganizada($victimadeladelincuenciaorganizadaDto);
echo $victimadeladelincuenciaorganizadaDto;
} else if( ($accion=="seleccionar") && ($cveVictimaDeLaDelincuenciaOrganizada!="") ){
$victimadeladelincuenciaorganizadaDto=$victimadeladelincuenciaorganizadaFacade->selectVictimadeladelincuenciaorganizada($victimadeladelincuenciaorganizadaDto);
echo $victimadeladelincuenciaorganizadaDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>