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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/efectosofendidoscarpetas/EfectosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/efectosofendidoscarpetas/EfectosofendidoscarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class EfectosofendidoscarpetasFacade {
private $proveedor;
public function __construct() {
}
public function validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto){
$EfectosofendidoscarpetasDto->setidEfectoOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosofendidoscarpetasDto->getidEfectoOfendidoCarpeta(),"utf8"):strtoupper($EfectosofendidoscarpetasDto->getidEfectoOfendidoCarpeta()))))));
if($this->esFecha($EfectosofendidoscarpetasDto->getidEfectoOfendidoCarpeta())){
$EfectosofendidoscarpetasDto->setidEfectoOfendidoCarpeta($this->fechaMysql($EfectosofendidoscarpetasDto->getidEfectoOfendidoCarpeta()));
}
$EfectosofendidoscarpetasDto->setcveDetalleEfecto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosofendidoscarpetasDto->getcveDetalleEfecto(),"utf8"):strtoupper($EfectosofendidoscarpetasDto->getcveDetalleEfecto()))))));
if($this->esFecha($EfectosofendidoscarpetasDto->getcveDetalleEfecto())){
$EfectosofendidoscarpetasDto->setcveDetalleEfecto($this->fechaMysql($EfectosofendidoscarpetasDto->getcveDetalleEfecto()));
}
$EfectosofendidoscarpetasDto->setidImpOfeDelCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosofendidoscarpetasDto->getidImpOfeDelCarpeta(),"utf8"):strtoupper($EfectosofendidoscarpetasDto->getidImpOfeDelCarpeta()))))));
if($this->esFecha($EfectosofendidoscarpetasDto->getidImpOfeDelCarpeta())){
$EfectosofendidoscarpetasDto->setidImpOfeDelCarpeta($this->fechaMysql($EfectosofendidoscarpetasDto->getidImpOfeDelCarpeta()));
}
$EfectosofendidoscarpetasDto->setIdReferencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosofendidoscarpetasDto->getIdReferencia(),"utf8"):strtoupper($EfectosofendidoscarpetasDto->getIdReferencia()))))));
if($this->esFecha($EfectosofendidoscarpetasDto->getIdReferencia())){
$EfectosofendidoscarpetasDto->setIdReferencia($this->fechaMysql($EfectosofendidoscarpetasDto->getIdReferencia()));
}
$EfectosofendidoscarpetasDto->setorigen(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosofendidoscarpetasDto->getorigen(),"utf8"):strtoupper($EfectosofendidoscarpetasDto->getorigen()))))));
if($this->esFecha($EfectosofendidoscarpetasDto->getorigen())){
$EfectosofendidoscarpetasDto->setorigen($this->fechaMysql($EfectosofendidoscarpetasDto->getorigen()));
}
$EfectosofendidoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosofendidoscarpetasDto->getactivo(),"utf8"):strtoupper($EfectosofendidoscarpetasDto->getactivo()))))));
if($this->esFecha($EfectosofendidoscarpetasDto->getactivo())){
$EfectosofendidoscarpetasDto->setactivo($this->fechaMysql($EfectosofendidoscarpetasDto->getactivo()));
}
$EfectosofendidoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosofendidoscarpetasDto->getfechaRegistro(),"utf8"):strtoupper($EfectosofendidoscarpetasDto->getfechaRegistro()))))));
if($this->esFecha($EfectosofendidoscarpetasDto->getfechaRegistro())){
$EfectosofendidoscarpetasDto->setfechaRegistro($this->fechaMysql($EfectosofendidoscarpetasDto->getfechaRegistro()));
}
$EfectosofendidoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EfectosofendidoscarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($EfectosofendidoscarpetasDto->getfechaActualizacion()))))));
if($this->esFecha($EfectosofendidoscarpetasDto->getfechaActualizacion())){
$EfectosofendidoscarpetasDto->setfechaActualizacion($this->fechaMysql($EfectosofendidoscarpetasDto->getfechaActualizacion()));
}
return $EfectosofendidoscarpetasDto;
}
public function selectEfectosofendidoscarpetas($EfectosofendidoscarpetasDto){
$EfectosofendidoscarpetasDto=$this->validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
$EfectosofendidoscarpetasController = new EfectosofendidoscarpetasController();
$EfectosofendidoscarpetasDto = $EfectosofendidoscarpetasController->selectEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
if($EfectosofendidoscarpetasDto!=""){
$dtoToJson = new DtoToJson($EfectosofendidoscarpetasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertEfectosofendidoscarpetas($EfectosofendidoscarpetasDto){
$EfectosofendidoscarpetasDto=$this->validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
$EfectosofendidoscarpetasController = new EfectosofendidoscarpetasController();
$EfectosofendidoscarpetasDto = $EfectosofendidoscarpetasController->insertEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
if($EfectosofendidoscarpetasDto!=""){
$dtoToJson = new DtoToJson($EfectosofendidoscarpetasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateEfectosofendidoscarpetas($EfectosofendidoscarpetasDto){
$EfectosofendidoscarpetasDto=$this->validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
$EfectosofendidoscarpetasController = new EfectosofendidoscarpetasController();
$EfectosofendidoscarpetasDto = $EfectosofendidoscarpetasController->updateEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
if($EfectosofendidoscarpetasDto!=""){
$dtoToJson = new DtoToJson($EfectosofendidoscarpetasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteEfectosofendidoscarpetas($EfectosofendidoscarpetasDto){
$EfectosofendidoscarpetasDto=$this->validarEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
$EfectosofendidoscarpetasController = new EfectosofendidoscarpetasController();
$EfectosofendidoscarpetasDto = $EfectosofendidoscarpetasController->deleteEfectosofendidoscarpetas($EfectosofendidoscarpetasDto);
if($EfectosofendidoscarpetasDto==true){
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



@$idEfectoOfendidoCarpeta=$_POST["idEfectoOfendidoCarpeta"];
@$cveDetalleEfecto=$_POST["cveDetalleEfecto"];
@$idImpOfeDelCarpeta=$_POST["idImpOfeDelCarpeta"];
@$IdReferencia=$_POST["IdReferencia"];
@$origen=$_POST["origen"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$efectosofendidoscarpetasFacade = new EfectosofendidoscarpetasFacade();
$efectosofendidoscarpetasDto = new EfectosofendidoscarpetasDTO();

$efectosofendidoscarpetasDto->setIdEfectoOfendidoCarpeta($idEfectoOfendidoCarpeta);
$efectosofendidoscarpetasDto->setCveDetalleEfecto($cveDetalleEfecto);
$efectosofendidoscarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
$efectosofendidoscarpetasDto->setIdReferencia($IdReferencia);
$efectosofendidoscarpetasDto->setOrigen($origen);
$efectosofendidoscarpetasDto->setActivo($activo);
$efectosofendidoscarpetasDto->setFechaRegistro($fechaRegistro);
$efectosofendidoscarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idEfectoOfendidoCarpeta=="") ){
$efectosofendidoscarpetasDto=$efectosofendidoscarpetasFacade->insertEfectosofendidoscarpetas($efectosofendidoscarpetasDto);
echo $efectosofendidoscarpetasDto;
} else if(($accion=="guardar") && ($idEfectoOfendidoCarpeta!="")){
$efectosofendidoscarpetasDto=$efectosofendidoscarpetasFacade->updateEfectosofendidoscarpetas($efectosofendidoscarpetasDto);
echo $efectosofendidoscarpetasDto;
} else if($accion=="consultar"){
$efectosofendidoscarpetasDto=$efectosofendidoscarpetasFacade->selectEfectosofendidoscarpetas($efectosofendidoscarpetasDto);
echo $efectosofendidoscarpetasDto;
} else if( ($accion=="baja") && ($idEfectoOfendidoCarpeta!="") ){
$efectosofendidoscarpetasDto=$efectosofendidoscarpetasFacade->deleteEfectosofendidoscarpetas($efectosofendidoscarpetasDto);
echo $efectosofendidoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idEfectoOfendidoCarpeta!="") ){
$efectosofendidoscarpetasDto=$efectosofendidoscarpetasFacade->selectEfectosofendidoscarpetas($efectosofendidoscarpetasDto);
echo $efectosofendidoscarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>