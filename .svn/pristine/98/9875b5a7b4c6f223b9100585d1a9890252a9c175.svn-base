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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/victimadeacoso/VictimadeacosoDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/victimadeacoso/VictimadeacosoController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class VictimadeacosoFacade {
private $proveedor;
public function __construct() {
}
public function validarVictimadeacoso($VictimadeacosoDto){
$VictimadeacosoDto->setcveVictimaDeAcoso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeacosoDto->getcveVictimaDeAcoso(),"utf8"):strtoupper($VictimadeacosoDto->getcveVictimaDeAcoso()))))));
if($this->esFecha($VictimadeacosoDto->getcveVictimaDeAcoso())){
$VictimadeacosoDto->setcveVictimaDeAcoso($this->fechaMysql($VictimadeacosoDto->getcveVictimaDeAcoso()));
}
$VictimadeacosoDto->setdesVictimaDeAcoso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeacosoDto->getdesVictimaDeAcoso(),"utf8"):strtoupper($VictimadeacosoDto->getdesVictimaDeAcoso()))))));
if($this->esFecha($VictimadeacosoDto->getdesVictimaDeAcoso())){
$VictimadeacosoDto->setdesVictimaDeAcoso($this->fechaMysql($VictimadeacosoDto->getdesVictimaDeAcoso()));
}
$VictimadeacosoDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeacosoDto->getactivo(),"utf8"):strtoupper($VictimadeacosoDto->getactivo()))))));
if($this->esFecha($VictimadeacosoDto->getactivo())){
$VictimadeacosoDto->setactivo($this->fechaMysql($VictimadeacosoDto->getactivo()));
}
$VictimadeacosoDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeacosoDto->getfechaRegistro(),"utf8"):strtoupper($VictimadeacosoDto->getfechaRegistro()))))));
if($this->esFecha($VictimadeacosoDto->getfechaRegistro())){
$VictimadeacosoDto->setfechaRegistro($this->fechaMysql($VictimadeacosoDto->getfechaRegistro()));
}
$VictimadeacosoDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($VictimadeacosoDto->getfechaActualizacion(),"utf8"):strtoupper($VictimadeacosoDto->getfechaActualizacion()))))));
if($this->esFecha($VictimadeacosoDto->getfechaActualizacion())){
$VictimadeacosoDto->setfechaActualizacion($this->fechaMysql($VictimadeacosoDto->getfechaActualizacion()));
}
return $VictimadeacosoDto;
}
public function selectVictimadeacoso($VictimadeacosoDto){
$VictimadeacosoDto=$this->validarVictimadeacoso($VictimadeacosoDto);
$VictimadeacosoController = new VictimadeacosoController();
$VictimadeacosoDto = $VictimadeacosoController->selectVictimadeacoso($VictimadeacosoDto);
if($VictimadeacosoDto!=""){
$dtoToJson = new DtoToJson($VictimadeacosoDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertVictimadeacoso($VictimadeacosoDto){
$VictimadeacosoDto=$this->validarVictimadeacoso($VictimadeacosoDto);
$VictimadeacosoController = new VictimadeacosoController();
$VictimadeacosoDto = $VictimadeacosoController->insertVictimadeacoso($VictimadeacosoDto);
if($VictimadeacosoDto!=""){
$dtoToJson = new DtoToJson($VictimadeacosoDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateVictimadeacoso($VictimadeacosoDto){
$VictimadeacosoDto=$this->validarVictimadeacoso($VictimadeacosoDto);
$VictimadeacosoController = new VictimadeacosoController();
$VictimadeacosoDto = $VictimadeacosoController->updateVictimadeacoso($VictimadeacosoDto);
if($VictimadeacosoDto!=""){
$dtoToJson = new DtoToJson($VictimadeacosoDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteVictimadeacoso($VictimadeacosoDto){
$VictimadeacosoDto=$this->validarVictimadeacoso($VictimadeacosoDto);
$VictimadeacosoController = new VictimadeacosoController();
$VictimadeacosoDto = $VictimadeacosoController->deleteVictimadeacoso($VictimadeacosoDto);
if($VictimadeacosoDto==true){
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



@$cveVictimaDeAcoso=$_POST["cveVictimaDeAcoso"];
@$desVictimaDeAcoso=$_POST["desVictimaDeAcoso"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$victimadeacosoFacade = new VictimadeacosoFacade();
$victimadeacosoDto = new VictimadeacosoDTO();

$victimadeacosoDto->setCveVictimaDeAcoso($cveVictimaDeAcoso);
$victimadeacosoDto->setDesVictimaDeAcoso($desVictimaDeAcoso);
$victimadeacosoDto->setActivo($activo);
$victimadeacosoDto->setFechaRegistro($fechaRegistro);
$victimadeacosoDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveVictimaDeAcoso=="") ){
$victimadeacosoDto=$victimadeacosoFacade->insertVictimadeacoso($victimadeacosoDto);
echo $victimadeacosoDto;
} else if(($accion=="guardar") && ($cveVictimaDeAcoso!="")){
$victimadeacosoDto=$victimadeacosoFacade->updateVictimadeacoso($victimadeacosoDto);
echo $victimadeacosoDto;
} else if($accion=="consultar"){
$victimadeacosoDto=$victimadeacosoFacade->selectVictimadeacoso($victimadeacosoDto);
echo $victimadeacosoDto;
} else if( ($accion=="baja") && ($cveVictimaDeAcoso!="") ){
$victimadeacosoDto=$victimadeacosoFacade->deleteVictimadeacoso($victimadeacosoDto);
echo $victimadeacosoDto;
} else if( ($accion=="seleccionar") && ($cveVictimaDeAcoso!="") ){
$victimadeacosoDto=$victimadeacosoFacade->selectVictimadeacoso($victimadeacosoDto);
echo $victimadeacosoDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>