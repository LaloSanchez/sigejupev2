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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/elementoscomisiones/ElementoscomisionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/elementoscomisiones/ElementoscomisionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ElementoscomisionesFacade {
private $proveedor;
public function __construct() {
}
public function validarElementoscomisiones($ElementoscomisionesDto){
$ElementoscomisionesDto->setcveElementoComision(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ElementoscomisionesDto->getcveElementoComision(),"utf8"):strtoupper($ElementoscomisionesDto->getcveElementoComision()))))));
if($this->esFecha($ElementoscomisionesDto->getcveElementoComision())){
$ElementoscomisionesDto->setcveElementoComision($this->fechaMysql($ElementoscomisionesDto->getcveElementoComision()));
}
$ElementoscomisionesDto->setdesElementoComision(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ElementoscomisionesDto->getdesElementoComision(),"utf8"):strtoupper($ElementoscomisionesDto->getdesElementoComision()))))));
if($this->esFecha($ElementoscomisionesDto->getdesElementoComision())){
$ElementoscomisionesDto->setdesElementoComision($this->fechaMysql($ElementoscomisionesDto->getdesElementoComision()));
}
$ElementoscomisionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ElementoscomisionesDto->getactivo(),"utf8"):strtoupper($ElementoscomisionesDto->getactivo()))))));
if($this->esFecha($ElementoscomisionesDto->getactivo())){
$ElementoscomisionesDto->setactivo($this->fechaMysql($ElementoscomisionesDto->getactivo()));
}
$ElementoscomisionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ElementoscomisionesDto->getfechaRegistro(),"utf8"):strtoupper($ElementoscomisionesDto->getfechaRegistro()))))));
if($this->esFecha($ElementoscomisionesDto->getfechaRegistro())){
$ElementoscomisionesDto->setfechaRegistro($this->fechaMysql($ElementoscomisionesDto->getfechaRegistro()));
}
$ElementoscomisionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ElementoscomisionesDto->getfechaActualizacion(),"utf8"):strtoupper($ElementoscomisionesDto->getfechaActualizacion()))))));
if($this->esFecha($ElementoscomisionesDto->getfechaActualizacion())){
$ElementoscomisionesDto->setfechaActualizacion($this->fechaMysql($ElementoscomisionesDto->getfechaActualizacion()));
}
return $ElementoscomisionesDto;
}
public function selectElementoscomisiones($ElementoscomisionesDto){
$ElementoscomisionesDto=$this->validarElementoscomisiones($ElementoscomisionesDto);
$ElementoscomisionesController = new ElementoscomisionesController();
$ElementoscomisionesDto = $ElementoscomisionesController->selectElementoscomisiones($ElementoscomisionesDto);
if($ElementoscomisionesDto!=""){
$dtoToJson = new DtoToJson($ElementoscomisionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertElementoscomisiones($ElementoscomisionesDto){
$ElementoscomisionesDto=$this->validarElementoscomisiones($ElementoscomisionesDto);
$ElementoscomisionesController = new ElementoscomisionesController();
$ElementoscomisionesDto = $ElementoscomisionesController->insertElementoscomisiones($ElementoscomisionesDto);
if($ElementoscomisionesDto!=""){
$dtoToJson = new DtoToJson($ElementoscomisionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateElementoscomisiones($ElementoscomisionesDto){
$ElementoscomisionesDto=$this->validarElementoscomisiones($ElementoscomisionesDto);
$ElementoscomisionesController = new ElementoscomisionesController();
$ElementoscomisionesDto = $ElementoscomisionesController->updateElementoscomisiones($ElementoscomisionesDto);
if($ElementoscomisionesDto!=""){
$dtoToJson = new DtoToJson($ElementoscomisionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteElementoscomisiones($ElementoscomisionesDto){
$ElementoscomisionesDto=$this->validarElementoscomisiones($ElementoscomisionesDto);
$ElementoscomisionesController = new ElementoscomisionesController();
$ElementoscomisionesDto = $ElementoscomisionesController->deleteElementoscomisiones($ElementoscomisionesDto);
if($ElementoscomisionesDto==true){
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



@$cveElementoComision=$_POST["cveElementoComision"];
@$desElementoComision=$_POST["desElementoComision"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$elementoscomisionesFacade = new ElementoscomisionesFacade();
$elementoscomisionesDto = new ElementoscomisionesDTO();

$elementoscomisionesDto->setCveElementoComision($cveElementoComision);
$elementoscomisionesDto->setDesElementoComision($desElementoComision);
$elementoscomisionesDto->setActivo($activo);
$elementoscomisionesDto->setFechaRegistro($fechaRegistro);
$elementoscomisionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveElementoComision=="") ){
$elementoscomisionesDto=$elementoscomisionesFacade->insertElementoscomisiones($elementoscomisionesDto);
echo $elementoscomisionesDto;
} else if(($accion=="guardar") && ($cveElementoComision!="")){
$elementoscomisionesDto=$elementoscomisionesFacade->updateElementoscomisiones($elementoscomisionesDto);
echo $elementoscomisionesDto;
} else if($accion=="consultar"){
$elementoscomisionesDto=$elementoscomisionesFacade->selectElementoscomisiones($elementoscomisionesDto);
echo $elementoscomisionesDto;
} else if( ($accion=="baja") && ($cveElementoComision!="") ){
$elementoscomisionesDto=$elementoscomisionesFacade->deleteElementoscomisiones($elementoscomisionesDto);
echo $elementoscomisionesDto;
} else if( ($accion=="seleccionar") && ($cveElementoComision!="") ){
$elementoscomisionesDto=$elementoscomisionesFacade->selectElementoscomisiones($elementoscomisionesDto);
echo $elementoscomisionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>