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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/calendario/CalendarioDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/calendario/CalendarioController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class CalendarioFacade {
private $proveedor;
public function __construct() {
}
public function validarCalendario($CalendarioDto){
$CalendarioDto->setidCalendario(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CalendarioDto->getidCalendario(),"utf8"):strtoupper($CalendarioDto->getidCalendario()))))));
if($this->esFecha($CalendarioDto->getidCalendario())){
$CalendarioDto->setidCalendario($this->fechaMysql($CalendarioDto->getidCalendario()));
}
$CalendarioDto->settipo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CalendarioDto->gettipo(),"utf8"):strtoupper($CalendarioDto->gettipo()))))));
if($this->esFecha($CalendarioDto->gettipo())){
$CalendarioDto->settipo($this->fechaMysql($CalendarioDto->gettipo()));
}
$CalendarioDto->setfecha(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CalendarioDto->getfecha(),"utf8"):strtoupper($CalendarioDto->getfecha()))))));
if($this->esFecha($CalendarioDto->getfecha())){
$CalendarioDto->setfecha($this->fechaMysql($CalendarioDto->getfecha()));
}
$CalendarioDto->setdescripcion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CalendarioDto->getdescripcion(),"utf8"):strtoupper($CalendarioDto->getdescripcion()))))));
if($this->esFecha($CalendarioDto->getdescripcion())){
$CalendarioDto->setdescripcion($this->fechaMysql($CalendarioDto->getdescripcion()));
}
$CalendarioDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CalendarioDto->getactivo(),"utf8"):strtoupper($CalendarioDto->getactivo()))))));
if($this->esFecha($CalendarioDto->getactivo())){
$CalendarioDto->setactivo($this->fechaMysql($CalendarioDto->getactivo()));
}
$CalendarioDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CalendarioDto->getfechaRegistro(),"utf8"):strtoupper($CalendarioDto->getfechaRegistro()))))));
if($this->esFecha($CalendarioDto->getfechaRegistro())){
$CalendarioDto->setfechaRegistro($this->fechaMysql($CalendarioDto->getfechaRegistro()));
}
$CalendarioDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CalendarioDto->getfechaActualizacion(),"utf8"):strtoupper($CalendarioDto->getfechaActualizacion()))))));
if($this->esFecha($CalendarioDto->getfechaActualizacion())){
$CalendarioDto->setfechaActualizacion($this->fechaMysql($CalendarioDto->getfechaActualizacion()));
}
return $CalendarioDto;
}
public function selectCalendario($CalendarioDto){
$CalendarioDto=$this->validarCalendario($CalendarioDto);
$CalendarioController = new CalendarioController();
$CalendarioDto = $CalendarioController->selectCalendario($CalendarioDto);
if($CalendarioDto!=""){
$dtoToJson = new DtoToJson($CalendarioDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertCalendario($CalendarioDto){
$CalendarioDto=$this->validarCalendario($CalendarioDto);
$CalendarioController = new CalendarioController();
$CalendarioDto = $CalendarioController->insertCalendario($CalendarioDto);
if($CalendarioDto!=""){
$dtoToJson = new DtoToJson($CalendarioDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateCalendario($CalendarioDto){
$CalendarioDto=$this->validarCalendario($CalendarioDto);
$CalendarioController = new CalendarioController();
$CalendarioDto = $CalendarioController->updateCalendario($CalendarioDto);
if($CalendarioDto!=""){
$dtoToJson = new DtoToJson($CalendarioDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteCalendario($CalendarioDto){
$CalendarioDto=$this->validarCalendario($CalendarioDto);
$CalendarioController = new CalendarioController();
$CalendarioDto = $CalendarioController->deleteCalendario($CalendarioDto);
if($CalendarioDto==true){
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



@$idCalendario=$_POST["idCalendario"];
@$tipo=$_POST["tipo"];
@$fecha=$_POST["fecha"];
@$descripcion=$_POST["descripcion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$calendarioFacade = new CalendarioFacade();
$calendarioDto = new CalendarioDTO();

$calendarioDto->setIdCalendario($idCalendario);
$calendarioDto->setTipo($tipo);
$calendarioDto->setFecha($fecha);
$calendarioDto->setDescripcion($descripcion);
$calendarioDto->setActivo($activo);
$calendarioDto->setFechaRegistro($fechaRegistro);
$calendarioDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idCalendario=="") ){
$calendarioDto=$calendarioFacade->insertCalendario($calendarioDto);
echo $calendarioDto;
} else if(($accion=="guardar") && ($idCalendario!="")){
$calendarioDto=$calendarioFacade->updateCalendario($calendarioDto);
echo $calendarioDto;
} else if($accion=="consultar"){
$calendarioDto=$calendarioFacade->selectCalendario($calendarioDto);
echo $calendarioDto;
} else if( ($accion=="baja") && ($idCalendario!="") ){
$calendarioDto=$calendarioFacade->deleteCalendario($calendarioDto);
echo $calendarioDto;
} else if( ($accion=="seleccionar") && ($idCalendario!="") ){
$calendarioDto=$calendarioFacade->selectCalendario($calendarioDto);
echo $calendarioDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>