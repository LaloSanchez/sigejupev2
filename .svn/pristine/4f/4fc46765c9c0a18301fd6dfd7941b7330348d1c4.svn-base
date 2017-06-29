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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/juzgadoresmuestras/JuzgadoresmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/juzgadoresmuestras/JuzgadoresmuestrasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class JuzgadoresmuestrasFacade {
private $proveedor;
public function __construct() {
}
public function validarJuzgadoresmuestras($JuzgadoresmuestrasDto){
$JuzgadoresmuestrasDto->setidJuzgadorMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresmuestrasDto->getidJuzgadorMuestra(),"utf8"):strtoupper($JuzgadoresmuestrasDto->getidJuzgadorMuestra()))))));
if($this->esFecha($JuzgadoresmuestrasDto->getidJuzgadorMuestra())){
$JuzgadoresmuestrasDto->setidJuzgadorMuestra($this->fechaMysql($JuzgadoresmuestrasDto->getidJuzgadorMuestra()));
}
$JuzgadoresmuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresmuestrasDto->getidSolicitudMuestra(),"utf8"):strtoupper($JuzgadoresmuestrasDto->getidSolicitudMuestra()))))));
if($this->esFecha($JuzgadoresmuestrasDto->getidSolicitudMuestra())){
$JuzgadoresmuestrasDto->setidSolicitudMuestra($this->fechaMysql($JuzgadoresmuestrasDto->getidSolicitudMuestra()));
}
$JuzgadoresmuestrasDto->setidJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresmuestrasDto->getidJuzgador(),"utf8"):strtoupper($JuzgadoresmuestrasDto->getidJuzgador()))))));
if($this->esFecha($JuzgadoresmuestrasDto->getidJuzgador())){
$JuzgadoresmuestrasDto->setidJuzgador($this->fechaMysql($JuzgadoresmuestrasDto->getidJuzgador()));
}
$JuzgadoresmuestrasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresmuestrasDto->getactivo(),"utf8"):strtoupper($JuzgadoresmuestrasDto->getactivo()))))));
if($this->esFecha($JuzgadoresmuestrasDto->getactivo())){
$JuzgadoresmuestrasDto->setactivo($this->fechaMysql($JuzgadoresmuestrasDto->getactivo()));
}
$JuzgadoresmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresmuestrasDto->getfechaRegistro(),"utf8"):strtoupper($JuzgadoresmuestrasDto->getfechaRegistro()))))));
if($this->esFecha($JuzgadoresmuestrasDto->getfechaRegistro())){
$JuzgadoresmuestrasDto->setfechaRegistro($this->fechaMysql($JuzgadoresmuestrasDto->getfechaRegistro()));
}
$JuzgadoresmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($JuzgadoresmuestrasDto->getfechaActualizacion(),"utf8"):strtoupper($JuzgadoresmuestrasDto->getfechaActualizacion()))))));
if($this->esFecha($JuzgadoresmuestrasDto->getfechaActualizacion())){
$JuzgadoresmuestrasDto->setfechaActualizacion($this->fechaMysql($JuzgadoresmuestrasDto->getfechaActualizacion()));
}
return $JuzgadoresmuestrasDto;
}
public function selectJuzgadoresmuestras($JuzgadoresmuestrasDto){
$JuzgadoresmuestrasDto=$this->validarJuzgadoresmuestras($JuzgadoresmuestrasDto);
$JuzgadoresmuestrasController = new JuzgadoresmuestrasController();
$JuzgadoresmuestrasDto = $JuzgadoresmuestrasController->selectJuzgadoresmuestras($JuzgadoresmuestrasDto);
if($JuzgadoresmuestrasDto!=""){
$dtoToJson = new DtoToJson($JuzgadoresmuestrasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertJuzgadoresmuestras($JuzgadoresmuestrasDto){
$JuzgadoresmuestrasDto=$this->validarJuzgadoresmuestras($JuzgadoresmuestrasDto);
$JuzgadoresmuestrasController = new JuzgadoresmuestrasController();
$JuzgadoresmuestrasDto = $JuzgadoresmuestrasController->insertJuzgadoresmuestras($JuzgadoresmuestrasDto);
if($JuzgadoresmuestrasDto!=""){
$dtoToJson = new DtoToJson($JuzgadoresmuestrasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateJuzgadoresmuestras($JuzgadoresmuestrasDto){
$JuzgadoresmuestrasDto=$this->validarJuzgadoresmuestras($JuzgadoresmuestrasDto);
$JuzgadoresmuestrasController = new JuzgadoresmuestrasController();
$JuzgadoresmuestrasDto = $JuzgadoresmuestrasController->updateJuzgadoresmuestras($JuzgadoresmuestrasDto);
if($JuzgadoresmuestrasDto!=""){
$dtoToJson = new DtoToJson($JuzgadoresmuestrasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteJuzgadoresmuestras($JuzgadoresmuestrasDto){
$JuzgadoresmuestrasDto=$this->validarJuzgadoresmuestras($JuzgadoresmuestrasDto);
$JuzgadoresmuestrasController = new JuzgadoresmuestrasController();
$JuzgadoresmuestrasDto = $JuzgadoresmuestrasController->deleteJuzgadoresmuestras($JuzgadoresmuestrasDto);
if($JuzgadoresmuestrasDto==true){
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



@$idJuzgadorMuestra=$_POST["idJuzgadorMuestra"];
@$idSolicitudMuestra=$_POST["idSolicitudMuestra"];
@$idJuzgador=$_POST["idJuzgador"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$juzgadoresmuestrasFacade = new JuzgadoresmuestrasFacade();
$juzgadoresmuestrasDto = new JuzgadoresmuestrasDTO();

$juzgadoresmuestrasDto->setIdJuzgadorMuestra($idJuzgadorMuestra);
$juzgadoresmuestrasDto->setIdSolicitudMuestra($idSolicitudMuestra);
$juzgadoresmuestrasDto->setIdJuzgador($idJuzgador);
$juzgadoresmuestrasDto->setActivo($activo);
$juzgadoresmuestrasDto->setFechaRegistro($fechaRegistro);
$juzgadoresmuestrasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idJuzgadorMuestra=="") ){
$juzgadoresmuestrasDto=$juzgadoresmuestrasFacade->insertJuzgadoresmuestras($juzgadoresmuestrasDto);
echo $juzgadoresmuestrasDto;
} else if(($accion=="guardar") && ($idJuzgadorMuestra!="")){
$juzgadoresmuestrasDto=$juzgadoresmuestrasFacade->updateJuzgadoresmuestras($juzgadoresmuestrasDto);
echo $juzgadoresmuestrasDto;
} else if($accion=="consultar"){
$juzgadoresmuestrasDto=$juzgadoresmuestrasFacade->selectJuzgadoresmuestras($juzgadoresmuestrasDto);
echo $juzgadoresmuestrasDto;
} else if( ($accion=="baja") && ($idJuzgadorMuestra!="") ){
$juzgadoresmuestrasDto=$juzgadoresmuestrasFacade->deleteJuzgadoresmuestras($juzgadoresmuestrasDto);
echo $juzgadoresmuestrasDto;
} else if( ($accion=="seleccionar") && ($idJuzgadorMuestra!="") ){
$juzgadoresmuestrasDto=$juzgadoresmuestrasFacade->selectJuzgadoresmuestras($juzgadoresmuestrasDto);
echo $juzgadoresmuestrasDto;
}
}else{
   header("HTTP/1.0 440 la sesion caduco");
   header("Status: 440 Login Timeout");
}

?>