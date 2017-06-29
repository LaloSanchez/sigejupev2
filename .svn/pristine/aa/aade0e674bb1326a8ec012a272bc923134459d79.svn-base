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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ceresos/CeresosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ceresos/CeresosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class CeresosFacade {
private $proveedor;
public function __construct() {
}
public function validarCeresos($CeresosDto){
$CeresosDto->setcveCereso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CeresosDto->getcveCereso(),"utf8"):strtoupper($CeresosDto->getcveCereso()))))));
if($this->esFecha($CeresosDto->getcveCereso())){
$CeresosDto->setcveCereso($this->fechaMysql($CeresosDto->getcveCereso()));
}
$CeresosDto->setdesCereso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CeresosDto->getdesCereso(),"utf8"):strtoupper($CeresosDto->getdesCereso()))))));
if($this->esFecha($CeresosDto->getdesCereso())){
$CeresosDto->setdesCereso($this->fechaMysql($CeresosDto->getdesCereso()));
}
$CeresosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CeresosDto->getactivo(),"utf8"):strtoupper($CeresosDto->getactivo()))))));
if($this->esFecha($CeresosDto->getactivo())){
$CeresosDto->setactivo($this->fechaMysql($CeresosDto->getactivo()));
}
$CeresosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CeresosDto->getfechaRegistro(),"utf8"):strtoupper($CeresosDto->getfechaRegistro()))))));
if($this->esFecha($CeresosDto->getfechaRegistro())){
$CeresosDto->setfechaRegistro($this->fechaMysql($CeresosDto->getfechaRegistro()));
}
$CeresosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($CeresosDto->getfechaActualizacion(),"utf8"):strtoupper($CeresosDto->getfechaActualizacion()))))));
if($this->esFecha($CeresosDto->getfechaActualizacion())){
$CeresosDto->setfechaActualizacion($this->fechaMysql($CeresosDto->getfechaActualizacion()));
}
return $CeresosDto;
}
public function selectCeresos($CeresosDto){
$CeresosDto=$this->validarCeresos($CeresosDto);
$CeresosController = new CeresosController();
$CeresosDto = $CeresosController->selectCeresos($CeresosDto);
if($CeresosDto!=""){
$dtoToJson = new DtoToJson($CeresosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertCeresos($CeresosDto){
$CeresosDto=$this->validarCeresos($CeresosDto);
$CeresosController = new CeresosController();
$CeresosDto = $CeresosController->insertCeresos($CeresosDto);
if($CeresosDto!=""){
$dtoToJson = new DtoToJson($CeresosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateCeresos($CeresosDto){
$CeresosDto=$this->validarCeresos($CeresosDto);
$CeresosController = new CeresosController();
$CeresosDto = $CeresosController->updateCeresos($CeresosDto);
if($CeresosDto!=""){
$dtoToJson = new DtoToJson($CeresosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteCeresos($CeresosDto){
$CeresosDto=$this->validarCeresos($CeresosDto);
$CeresosController = new CeresosController();
$CeresosDto = $CeresosController->deleteCeresos($CeresosDto);
if($CeresosDto==true){
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



@$cveCereso=$_POST["cveCereso"];
@$desCereso=$_POST["desCereso"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$ceresosFacade = new CeresosFacade();
$ceresosDto = new CeresosDTO();

$ceresosDto->setCveCereso($cveCereso);
$ceresosDto->setDesCereso($desCereso);
$ceresosDto->setActivo($activo);
$ceresosDto->setFechaRegistro($fechaRegistro);
$ceresosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveCereso=="") ){
$ceresosDto=$ceresosFacade->insertCeresos($ceresosDto);
echo $ceresosDto;
} else if(($accion=="guardar") && ($cveCereso!="")){
$ceresosDto=$ceresosFacade->updateCeresos($ceresosDto);
echo $ceresosDto;
} else if($accion=="consultar"){
$ceresosDto=$ceresosFacade->selectCeresos($ceresosDto);
echo $ceresosDto;
} else if( ($accion=="baja") && ($cveCereso!="") ){
$ceresosDto=$ceresosFacade->deleteCeresos($ceresosDto);
echo $ceresosDto;
} else if( ($accion=="seleccionar") && ($cveCereso!="") ){
$ceresosDto=$ceresosFacade->selectCeresos($ceresosDto);
echo $ceresosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>