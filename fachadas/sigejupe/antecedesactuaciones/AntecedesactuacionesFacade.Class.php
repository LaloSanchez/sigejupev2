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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/antecedesactuaciones/AntecedesactuacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/antecedesactuaciones/AntecedesactuacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class AntecedesactuacionesFacade {
private $proveedor;
public function __construct() {
}
public function validarAntecedesactuaciones($AntecedesactuacionesDto){
$AntecedesactuacionesDto->setidAntecedesActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AntecedesactuacionesDto->getidAntecedesActuacion(),"utf8"):strtoupper($AntecedesactuacionesDto->getidAntecedesActuacion()))))));
if($this->esFecha($AntecedesactuacionesDto->getidAntecedesActuacion())){
$AntecedesactuacionesDto->setidAntecedesActuacion($this->fechaMysql($AntecedesactuacionesDto->getidAntecedesActuacion()));
}
$AntecedesactuacionesDto->setidActuacionPadre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AntecedesactuacionesDto->getidActuacionPadre(),"utf8"):strtoupper($AntecedesactuacionesDto->getidActuacionPadre()))))));
if($this->esFecha($AntecedesactuacionesDto->getidActuacionPadre())){
$AntecedesactuacionesDto->setidActuacionPadre($this->fechaMysql($AntecedesactuacionesDto->getidActuacionPadre()));
}
$AntecedesactuacionesDto->setidActuacionHija(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AntecedesactuacionesDto->getidActuacionHija(),"utf8"):strtoupper($AntecedesactuacionesDto->getidActuacionHija()))))));
if($this->esFecha($AntecedesactuacionesDto->getidActuacionHija())){
$AntecedesactuacionesDto->setidActuacionHija($this->fechaMysql($AntecedesactuacionesDto->getidActuacionHija()));
}
$AntecedesactuacionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AntecedesactuacionesDto->getactivo(),"utf8"):strtoupper($AntecedesactuacionesDto->getactivo()))))));
if($this->esFecha($AntecedesactuacionesDto->getactivo())){
$AntecedesactuacionesDto->setactivo($this->fechaMysql($AntecedesactuacionesDto->getactivo()));
}
$AntecedesactuacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AntecedesactuacionesDto->getfechaRegistro(),"utf8"):strtoupper($AntecedesactuacionesDto->getfechaRegistro()))))));
if($this->esFecha($AntecedesactuacionesDto->getfechaRegistro())){
$AntecedesactuacionesDto->setfechaRegistro($this->fechaMysql($AntecedesactuacionesDto->getfechaRegistro()));
}
$AntecedesactuacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AntecedesactuacionesDto->getfechaActualizacion(),"utf8"):strtoupper($AntecedesactuacionesDto->getfechaActualizacion()))))));
if($this->esFecha($AntecedesactuacionesDto->getfechaActualizacion())){
$AntecedesactuacionesDto->setfechaActualizacion($this->fechaMysql($AntecedesactuacionesDto->getfechaActualizacion()));
}
return $AntecedesactuacionesDto;
}
public function selectAntecedesactuaciones($AntecedesactuacionesDto){
$AntecedesactuacionesDto=$this->validarAntecedesactuaciones($AntecedesactuacionesDto);
$AntecedesactuacionesController = new AntecedesactuacionesController();
$AntecedesactuacionesDto = $AntecedesactuacionesController->selectAntecedesactuaciones($AntecedesactuacionesDto);
if($AntecedesactuacionesDto!=""){
$dtoToJson = new DtoToJson($AntecedesactuacionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertAntecedesactuaciones($AntecedesactuacionesDto){
$AntecedesactuacionesDto=$this->validarAntecedesactuaciones($AntecedesactuacionesDto);
$AntecedesactuacionesController = new AntecedesactuacionesController();
$AntecedesactuacionesDto = $AntecedesactuacionesController->insertAntecedesactuaciones($AntecedesactuacionesDto);
if($AntecedesactuacionesDto!=""){
$dtoToJson = new DtoToJson($AntecedesactuacionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateAntecedesactuaciones($AntecedesactuacionesDto){
$AntecedesactuacionesDto=$this->validarAntecedesactuaciones($AntecedesactuacionesDto);
$AntecedesactuacionesController = new AntecedesactuacionesController();
$AntecedesactuacionesDto = $AntecedesactuacionesController->updateAntecedesactuaciones($AntecedesactuacionesDto);
if($AntecedesactuacionesDto!=""){
$dtoToJson = new DtoToJson($AntecedesactuacionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteAntecedesactuaciones($AntecedesactuacionesDto){
$AntecedesactuacionesDto=$this->validarAntecedesactuaciones($AntecedesactuacionesDto);
$AntecedesactuacionesController = new AntecedesactuacionesController();
$AntecedesactuacionesDto = $AntecedesactuacionesController->deleteAntecedesactuaciones($AntecedesactuacionesDto);
if($AntecedesactuacionesDto==true){
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



@$idAntecedesActuacion=$_POST["idAntecedesActuacion"];
@$idActuacionPadre=$_POST["idActuacionPadre"];
@$idActuacionHija=$_POST["idActuacionHija"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$antecedesactuacionesFacade = new AntecedesactuacionesFacade();
$antecedesactuacionesDto = new AntecedesactuacionesDTO();

$antecedesactuacionesDto->setIdAntecedesActuacion($idAntecedesActuacion);
$antecedesactuacionesDto->setIdActuacionPadre($idActuacionPadre);
$antecedesactuacionesDto->setIdActuacionHija($idActuacionHija);
$antecedesactuacionesDto->setActivo($activo);
$antecedesactuacionesDto->setFechaRegistro($fechaRegistro);
$antecedesactuacionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idAntecedesActuacion=="") ){
$antecedesactuacionesDto=$antecedesactuacionesFacade->insertAntecedesactuaciones($antecedesactuacionesDto);
echo $antecedesactuacionesDto;
} else if(($accion=="guardar") && ($idAntecedesActuacion!="")){
$antecedesactuacionesDto=$antecedesactuacionesFacade->updateAntecedesactuaciones($antecedesactuacionesDto);
echo $antecedesactuacionesDto;
} else if($accion=="consultar"){
$antecedesactuacionesDto=$antecedesactuacionesFacade->selectAntecedesactuaciones($antecedesactuacionesDto);
echo $antecedesactuacionesDto;
} else if( ($accion=="baja") && ($idAntecedesActuacion!="") ){
$antecedesactuacionesDto=$antecedesactuacionesFacade->deleteAntecedesactuaciones($antecedesactuacionesDto);
echo $antecedesactuacionesDto;
} else if( ($accion=="seleccionar") && ($idAntecedesActuacion!="") ){
$antecedesactuacionesDto=$antecedesactuacionesFacade->selectAntecedesactuaciones($antecedesactuacionesDto);
echo $antecedesactuacionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>