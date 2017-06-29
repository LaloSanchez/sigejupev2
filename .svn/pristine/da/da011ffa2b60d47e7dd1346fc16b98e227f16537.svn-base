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

session_start();
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/reasignaciontocas/ReasignaciontocasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/reasignaciontocas/ReasignaciontocasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ReasignaciontocasFacade {
private $proveedor;
public function __construct() {
}
public function validarReasignaciontocas($ReasignaciontocasDto){
$ReasignaciontocasDto->setidReasignacionToca(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ReasignaciontocasDto->getidReasignacionToca(),"utf8"):strtoupper($ReasignaciontocasDto->getidReasignacionToca()))))));
if($this->esFecha($ReasignaciontocasDto->getidReasignacionToca())){
$ReasignaciontocasDto->setidReasignacionToca($this->fechaMysql($ReasignaciontocasDto->getidReasignacionToca()));
}
$ReasignaciontocasDto->setidReferenciaOrigen(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ReasignaciontocasDto->getidReferenciaOrigen(),"utf8"):strtoupper($ReasignaciontocasDto->getidReferenciaOrigen()))))));
if($this->esFecha($ReasignaciontocasDto->getidReferenciaOrigen())){
$ReasignaciontocasDto->setidReferenciaOrigen($this->fechaMysql($ReasignaciontocasDto->getidReferenciaOrigen()));
}
$ReasignaciontocasDto->setidReferenciaDestino(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ReasignaciontocasDto->getidReferenciaDestino(),"utf8"):strtoupper($ReasignaciontocasDto->getidReferenciaDestino()))))));
if($this->esFecha($ReasignaciontocasDto->getidReferenciaDestino())){
$ReasignaciontocasDto->setidReferenciaDestino($this->fechaMysql($ReasignaciontocasDto->getidReferenciaDestino()));
}
$ReasignaciontocasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ReasignaciontocasDto->getactivo(),"utf8"):strtoupper($ReasignaciontocasDto->getactivo()))))));
if($this->esFecha($ReasignaciontocasDto->getactivo())){
$ReasignaciontocasDto->setactivo($this->fechaMysql($ReasignaciontocasDto->getactivo()));
}
$ReasignaciontocasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ReasignaciontocasDto->getfechaRegistro(),"utf8"):strtoupper($ReasignaciontocasDto->getfechaRegistro()))))));
if($this->esFecha($ReasignaciontocasDto->getfechaRegistro())){
$ReasignaciontocasDto->setfechaRegistro($this->fechaMysql($ReasignaciontocasDto->getfechaRegistro()));
}
$ReasignaciontocasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ReasignaciontocasDto->getfechaActualizacion(),"utf8"):strtoupper($ReasignaciontocasDto->getfechaActualizacion()))))));
if($this->esFecha($ReasignaciontocasDto->getfechaActualizacion())){
$ReasignaciontocasDto->setfechaActualizacion($this->fechaMysql($ReasignaciontocasDto->getfechaActualizacion()));
}
return $ReasignaciontocasDto;
}
public function selectReasignaciontocas($ReasignaciontocasDto){
$ReasignaciontocasDto=$this->validarReasignaciontocas($ReasignaciontocasDto);
$ReasignaciontocasController = new ReasignaciontocasController();
$ReasignaciontocasDto = $ReasignaciontocasController->selectReasignaciontocas($ReasignaciontocasDto);
if($ReasignaciontocasDto!=""){
$dtoToJson = new DtoToJson($ReasignaciontocasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertReasignaciontocas($ReasignaciontocasDto){
$ReasignaciontocasDto=$this->validarReasignaciontocas($ReasignaciontocasDto);
$ReasignaciontocasController = new ReasignaciontocasController();
$ReasignaciontocasDto = $ReasignaciontocasController->insertReasignaciontocas($ReasignaciontocasDto);
if($ReasignaciontocasDto!=""){
$dtoToJson = new DtoToJson($ReasignaciontocasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateReasignaciontocas($ReasignaciontocasDto){
$ReasignaciontocasDto=$this->validarReasignaciontocas($ReasignaciontocasDto);
$ReasignaciontocasController = new ReasignaciontocasController();
$ReasignaciontocasDto = $ReasignaciontocasController->updateReasignaciontocas($ReasignaciontocasDto);
if($ReasignaciontocasDto!=""){
$dtoToJson = new DtoToJson($ReasignaciontocasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteReasignaciontocas($ReasignaciontocasDto){
$ReasignaciontocasDto=$this->validarReasignaciontocas($ReasignaciontocasDto);
$ReasignaciontocasController = new ReasignaciontocasController();
$ReasignaciontocasDto = $ReasignaciontocasController->deleteReasignaciontocas($ReasignaciontocasDto);
if($ReasignaciontocasDto==true){
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



@$idReasignacionToca=$_POST["idReasignacionToca"];
@$idReferenciaOrigen=$_POST["idReferenciaOrigen"];
@$idReferenciaDestino=$_POST["idReferenciaDestino"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$reasignaciontocasFacade = new ReasignaciontocasFacade();
$reasignaciontocasDto = new ReasignaciontocasDTO();

$reasignaciontocasDto->setIdReasignacionToca($idReasignacionToca);
$reasignaciontocasDto->setIdReferenciaOrigen($idReferenciaOrigen);
$reasignaciontocasDto->setIdReferenciaDestino($idReferenciaDestino);
$reasignaciontocasDto->setActivo($activo);
$reasignaciontocasDto->setFechaRegistro($fechaRegistro);
$reasignaciontocasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idReasignacionToca=="") ){
$reasignaciontocasDto=$reasignaciontocasFacade->insertReasignaciontocas($reasignaciontocasDto);
echo $reasignaciontocasDto;
} else if(($accion=="guardar") && ($idReasignacionToca!="")){
$reasignaciontocasDto=$reasignaciontocasFacade->updateReasignaciontocas($reasignaciontocasDto);
echo $reasignaciontocasDto;
} else if($accion=="consultar"){
$reasignaciontocasDto=$reasignaciontocasFacade->selectReasignaciontocas($reasignaciontocasDto);
echo $reasignaciontocasDto;
} else if( ($accion=="baja") && ($idReasignacionToca!="") ){
$reasignaciontocasDto=$reasignaciontocasFacade->deleteReasignaciontocas($reasignaciontocasDto);
echo $reasignaciontocasDto;
} else if( ($accion=="seleccionar") && ($idReasignacionToca!="") ){
$reasignaciontocasDto=$reasignaciontocasFacade->selectReasignaciontocas($reasignaciontocasDto);
echo $reasignaciontocasDto;
}


?>