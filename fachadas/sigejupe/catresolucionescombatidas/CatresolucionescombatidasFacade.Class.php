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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/catresolucionescombatidas/CatresolucionescombatidasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/catresolucionescombatidas/CatresolucionescombatidasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class CatresolucionescombatidasFacade {
private $proveedor;
public function __construct() {
}
public function validarCatresolucionescombatidas($CatresolucionescombatidasDto){
$CatresolucionescombatidasDto->setcveCatResolucionCombatida(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CatresolucionescombatidasDto->getcveCatResolucionCombatida(),"utf8"):strtoupper($CatresolucionescombatidasDto->getcveCatResolucionCombatida()))))));
if($this->esFecha($CatresolucionescombatidasDto->getcveCatResolucionCombatida())){
$CatresolucionescombatidasDto->setcveCatResolucionCombatida($this->fechaMysql($CatresolucionescombatidasDto->getcveCatResolucionCombatida()));
}
$CatresolucionescombatidasDto->setdesResolucionCombatida(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CatresolucionescombatidasDto->getdesResolucionCombatida(),"utf8"):strtoupper($CatresolucionescombatidasDto->getdesResolucionCombatida()))))));
if($this->esFecha($CatresolucionescombatidasDto->getdesResolucionCombatida())){
$CatresolucionescombatidasDto->setdesResolucionCombatida($this->fechaMysql($CatresolucionescombatidasDto->getdesResolucionCombatida()));
}
$CatresolucionescombatidasDto->setcveTipoActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CatresolucionescombatidasDto->getcveTipoActuacion(),"utf8"):strtoupper($CatresolucionescombatidasDto->getcveTipoActuacion()))))));
if($this->esFecha($CatresolucionescombatidasDto->getcveTipoActuacion())){
$CatresolucionescombatidasDto->setcveTipoActuacion($this->fechaMysql($CatresolucionescombatidasDto->getcveTipoActuacion()));
}
$CatresolucionescombatidasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CatresolucionescombatidasDto->getactivo(),"utf8"):strtoupper($CatresolucionescombatidasDto->getactivo()))))));
if($this->esFecha($CatresolucionescombatidasDto->getactivo())){
$CatresolucionescombatidasDto->setactivo($this->fechaMysql($CatresolucionescombatidasDto->getactivo()));
}
$CatresolucionescombatidasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CatresolucionescombatidasDto->getfechaRegistro(),"utf8"):strtoupper($CatresolucionescombatidasDto->getfechaRegistro()))))));
if($this->esFecha($CatresolucionescombatidasDto->getfechaRegistro())){
$CatresolucionescombatidasDto->setfechaRegistro($this->fechaMysql($CatresolucionescombatidasDto->getfechaRegistro()));
}
$CatresolucionescombatidasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CatresolucionescombatidasDto->getfechaActualizacion(),"utf8"):strtoupper($CatresolucionescombatidasDto->getfechaActualizacion()))))));
if($this->esFecha($CatresolucionescombatidasDto->getfechaActualizacion())){
$CatresolucionescombatidasDto->setfechaActualizacion($this->fechaMysql($CatresolucionescombatidasDto->getfechaActualizacion()));
}
return $CatresolucionescombatidasDto;
}
public function selectCatresolucionescombatidas($CatresolucionescombatidasDto,$orden=""){
$CatresolucionescombatidasDto=$this->validarCatresolucionescombatidas($CatresolucionescombatidasDto);
$CatresolucionescombatidasController = new CatresolucionescombatidasController();
$CatresolucionescombatidasDto = $CatresolucionescombatidasController->selectCatresolucionescombatidas($CatresolucionescombatidasDto,$orden);
if($CatresolucionescombatidasDto!=""){
$dtoToJson = new DtoToJson($CatresolucionescombatidasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertCatresolucionescombatidas($CatresolucionescombatidasDto){
$CatresolucionescombatidasDto=$this->validarCatresolucionescombatidas($CatresolucionescombatidasDto);
$CatresolucionescombatidasController = new CatresolucionescombatidasController();
$CatresolucionescombatidasDto = $CatresolucionescombatidasController->insertCatresolucionescombatidas($CatresolucionescombatidasDto);
if($CatresolucionescombatidasDto!=""){
$dtoToJson = new DtoToJson($CatresolucionescombatidasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateCatresolucionescombatidas($CatresolucionescombatidasDto){
$CatresolucionescombatidasDto=$this->validarCatresolucionescombatidas($CatresolucionescombatidasDto);
$CatresolucionescombatidasController = new CatresolucionescombatidasController();
$CatresolucionescombatidasDto = $CatresolucionescombatidasController->updateCatresolucionescombatidas($CatresolucionescombatidasDto);
if($CatresolucionescombatidasDto!=""){
$dtoToJson = new DtoToJson($CatresolucionescombatidasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteCatresolucionescombatidas($CatresolucionescombatidasDto){
$CatresolucionescombatidasDto=$this->validarCatresolucionescombatidas($CatresolucionescombatidasDto);
$CatresolucionescombatidasController = new CatresolucionescombatidasController();
$CatresolucionescombatidasDto = $CatresolucionescombatidasController->deleteCatresolucionescombatidas($CatresolucionescombatidasDto);
if($CatresolucionescombatidasDto==true){
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



@$cveCatResolucionCombatida=$_POST["cveCatResolucionCombatida"];
@$desResolucionCombatida=$_POST["desResolucionCombatida"];
@$cveTipoActuacion=$_POST["cveTipoActuacion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$catresolucionescombatidasFacade = new CatresolucionescombatidasFacade();
$catresolucionescombatidasDto = new CatresolucionescombatidasDTO();

$catresolucionescombatidasDto->setCveCatResolucionCombatida($cveCatResolucionCombatida);
$catresolucionescombatidasDto->setDesResolucionCombatida($desResolucionCombatida);
$catresolucionescombatidasDto->setCveTipoActuacion($cveTipoActuacion);
$catresolucionescombatidasDto->setActivo($activo);
$catresolucionescombatidasDto->setFechaRegistro($fechaRegistro);
$catresolucionescombatidasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveCatResolucionCombatida=="") ){
$catresolucionescombatidasDto=$catresolucionescombatidasFacade->insertCatresolucionescombatidas($catresolucionescombatidasDto);
echo $catresolucionescombatidasDto;
} else if(($accion=="guardar") && ($cveCatResolucionCombatida!="")){
$catresolucionescombatidasDto=$catresolucionescombatidasFacade->updateCatresolucionescombatidas($catresolucionescombatidasDto);
echo $catresolucionescombatidasDto;
} else if($accion=="consultar"){
$catresolucionescombatidasDto=$catresolucionescombatidasFacade->selectCatresolucionescombatidas($catresolucionescombatidasDto);
echo $catresolucionescombatidasDto;
} else if( ($accion=="baja") && ($cveCatResolucionCombatida!="") ){
$catresolucionescombatidasDto=$catresolucionescombatidasFacade->deleteCatresolucionescombatidas($catresolucionescombatidasDto);
echo $catresolucionescombatidasDto;
} else if( ($accion=="seleccionar") && ($cveCatResolucionCombatida!="") ){
$catresolucionescombatidasDto=$catresolucionescombatidasFacade->selectCatresolucionescombatidas($catresolucionescombatidasDto);
echo $catresolucionescombatidasDto;
}else if($accion=="consultarOrdenado"){
    $orden="order by desResolucionCombatida";
$catresolucionescombatidasDto=$catresolucionescombatidasFacade->selectCatresolucionescombatidas($catresolucionescombatidasDto,$orden);
echo $catresolucionescombatidasDto;
} 

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>