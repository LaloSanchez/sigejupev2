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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/modalidades/ModalidadesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/modalidades/ModalidadesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ModalidadesFacade {
private $proveedor;
public function __construct() {
}
public function validarModalidades($ModalidadesDto){
$ModalidadesDto->setcveModalidad(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ModalidadesDto->getcveModalidad(),"utf8"):strtoupper($ModalidadesDto->getcveModalidad()))))));
if($this->esFecha($ModalidadesDto->getcveModalidad())){
$ModalidadesDto->setcveModalidad($this->fechaMysql($ModalidadesDto->getcveModalidad()));
}
$ModalidadesDto->setdesModalidad(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ModalidadesDto->getdesModalidad(),"utf8"):strtoupper($ModalidadesDto->getdesModalidad()))))));
if($this->esFecha($ModalidadesDto->getdesModalidad())){
$ModalidadesDto->setdesModalidad($this->fechaMysql($ModalidadesDto->getdesModalidad()));
}
$ModalidadesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ModalidadesDto->getactivo(),"utf8"):strtoupper($ModalidadesDto->getactivo()))))));
if($this->esFecha($ModalidadesDto->getactivo())){
$ModalidadesDto->setactivo($this->fechaMysql($ModalidadesDto->getactivo()));
}
$ModalidadesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ModalidadesDto->getfechaRegistro(),"utf8"):strtoupper($ModalidadesDto->getfechaRegistro()))))));
if($this->esFecha($ModalidadesDto->getfechaRegistro())){
$ModalidadesDto->setfechaRegistro($this->fechaMysql($ModalidadesDto->getfechaRegistro()));
}
$ModalidadesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ModalidadesDto->getfechaActualizacion(),"utf8"):strtoupper($ModalidadesDto->getfechaActualizacion()))))));
if($this->esFecha($ModalidadesDto->getfechaActualizacion())){
$ModalidadesDto->setfechaActualizacion($this->fechaMysql($ModalidadesDto->getfechaActualizacion()));
}
return $ModalidadesDto;
}
public function selectModalidades($ModalidadesDto){
$ModalidadesDto=$this->validarModalidades($ModalidadesDto);
$ModalidadesController = new ModalidadesController();
$ModalidadesDto = $ModalidadesController->selectModalidades($ModalidadesDto);
if($ModalidadesDto!=""){
$dtoToJson = new DtoToJson($ModalidadesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertModalidades($ModalidadesDto){
$ModalidadesDto=$this->validarModalidades($ModalidadesDto);
$ModalidadesController = new ModalidadesController();
$ModalidadesDto = $ModalidadesController->insertModalidades($ModalidadesDto);
if($ModalidadesDto!=""){
$dtoToJson = new DtoToJson($ModalidadesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateModalidades($ModalidadesDto){
$ModalidadesDto=$this->validarModalidades($ModalidadesDto);
$ModalidadesController = new ModalidadesController();
$ModalidadesDto = $ModalidadesController->updateModalidades($ModalidadesDto);
if($ModalidadesDto!=""){
$dtoToJson = new DtoToJson($ModalidadesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteModalidades($ModalidadesDto){
$ModalidadesDto=$this->validarModalidades($ModalidadesDto);
$ModalidadesController = new ModalidadesController();
$ModalidadesDto = $ModalidadesController->deleteModalidades($ModalidadesDto);
if($ModalidadesDto==true){
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



@$cveModalidad=$_POST["cveModalidad"];
@$desModalidad=$_POST["desModalidad"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$modalidadesFacade = new ModalidadesFacade();
$modalidadesDto = new ModalidadesDTO();

$modalidadesDto->setCveModalidad($cveModalidad);
$modalidadesDto->setDesModalidad($desModalidad);
$modalidadesDto->setActivo($activo);
$modalidadesDto->setFechaRegistro($fechaRegistro);
$modalidadesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveModalidad=="") ){
$modalidadesDto=$modalidadesFacade->insertModalidades($modalidadesDto);
echo $modalidadesDto;
} else if(($accion=="guardar") && ($cveModalidad!="")){
$modalidadesDto=$modalidadesFacade->updateModalidades($modalidadesDto);
echo $modalidadesDto;
} else if($accion=="consultar"){
$modalidadesDto=$modalidadesFacade->selectModalidades($modalidadesDto);
echo $modalidadesDto;
} else if( ($accion=="baja") && ($cveModalidad!="") ){
$modalidadesDto=$modalidadesFacade->deleteModalidades($modalidadesDto);
echo $modalidadesDto;
} else if( ($accion=="seleccionar") && ($cveModalidad!="") ){
$modalidadesDto=$modalidadesFacade->selectModalidades($modalidadesDto);
echo $modalidadesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>