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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/modalidadesacosos/ModalidadesacososDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/modalidadesacosos/ModalidadesacososController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ModalidadesacososFacade {
private $proveedor;
public function __construct() {
}
public function validarModalidadesacosos($ModalidadesacososDto){
$ModalidadesacososDto->setcveModalidadAcoso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ModalidadesacososDto->getcveModalidadAcoso(),"utf8"):strtoupper($ModalidadesacososDto->getcveModalidadAcoso()))))));
if($this->esFecha($ModalidadesacososDto->getcveModalidadAcoso())){
$ModalidadesacososDto->setcveModalidadAcoso($this->fechaMysql($ModalidadesacososDto->getcveModalidadAcoso()));
}
$ModalidadesacososDto->setdesModalidadAcoso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ModalidadesacososDto->getdesModalidadAcoso(),"utf8"):strtoupper($ModalidadesacososDto->getdesModalidadAcoso()))))));
if($this->esFecha($ModalidadesacososDto->getdesModalidadAcoso())){
$ModalidadesacososDto->setdesModalidadAcoso($this->fechaMysql($ModalidadesacososDto->getdesModalidadAcoso()));
}
$ModalidadesacososDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ModalidadesacososDto->getactivo(),"utf8"):strtoupper($ModalidadesacososDto->getactivo()))))));
if($this->esFecha($ModalidadesacososDto->getactivo())){
$ModalidadesacososDto->setactivo($this->fechaMysql($ModalidadesacososDto->getactivo()));
}
$ModalidadesacososDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ModalidadesacososDto->getfechaRegistro(),"utf8"):strtoupper($ModalidadesacososDto->getfechaRegistro()))))));
if($this->esFecha($ModalidadesacososDto->getfechaRegistro())){
$ModalidadesacososDto->setfechaRegistro($this->fechaMysql($ModalidadesacososDto->getfechaRegistro()));
}
$ModalidadesacososDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ModalidadesacososDto->getfechaActualizacion(),"utf8"):strtoupper($ModalidadesacososDto->getfechaActualizacion()))))));
if($this->esFecha($ModalidadesacososDto->getfechaActualizacion())){
$ModalidadesacososDto->setfechaActualizacion($this->fechaMysql($ModalidadesacososDto->getfechaActualizacion()));
}
return $ModalidadesacososDto;
}
public function selectModalidadesacosos($ModalidadesacososDto){
$ModalidadesacososDto=$this->validarModalidadesacosos($ModalidadesacososDto);
$ModalidadesacososController = new ModalidadesacososController();
$ModalidadesacososDto = $ModalidadesacososController->selectModalidadesacosos($ModalidadesacososDto);
if($ModalidadesacososDto!=""){
$dtoToJson = new DtoToJson($ModalidadesacososDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertModalidadesacosos($ModalidadesacososDto){
$ModalidadesacososDto=$this->validarModalidadesacosos($ModalidadesacososDto);
$ModalidadesacososController = new ModalidadesacososController();
$ModalidadesacososDto = $ModalidadesacososController->insertModalidadesacosos($ModalidadesacososDto);
if($ModalidadesacososDto!=""){
$dtoToJson = new DtoToJson($ModalidadesacososDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateModalidadesacosos($ModalidadesacososDto){
$ModalidadesacososDto=$this->validarModalidadesacosos($ModalidadesacososDto);
$ModalidadesacososController = new ModalidadesacososController();
$ModalidadesacososDto = $ModalidadesacososController->updateModalidadesacosos($ModalidadesacososDto);
if($ModalidadesacososDto!=""){
$dtoToJson = new DtoToJson($ModalidadesacososDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteModalidadesacosos($ModalidadesacososDto){
$ModalidadesacososDto=$this->validarModalidadesacosos($ModalidadesacososDto);
$ModalidadesacososController = new ModalidadesacososController();
$ModalidadesacososDto = $ModalidadesacososController->deleteModalidadesacosos($ModalidadesacososDto);
if($ModalidadesacososDto==true){
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



@$cveModalidadAcoso=$_POST["cveModalidadAcoso"];
@$desModalidadAcoso=$_POST["desModalidadAcoso"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$modalidadesacososFacade = new ModalidadesacososFacade();
$modalidadesacososDto = new ModalidadesacososDTO();

$modalidadesacososDto->setCveModalidadAcoso($cveModalidadAcoso);
$modalidadesacososDto->setDesModalidadAcoso($desModalidadAcoso);
$modalidadesacososDto->setActivo($activo);
$modalidadesacososDto->setFechaRegistro($fechaRegistro);
$modalidadesacososDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveModalidadAcoso=="") ){
$modalidadesacososDto=$modalidadesacososFacade->insertModalidadesacosos($modalidadesacososDto);
echo $modalidadesacososDto;
} else if(($accion=="guardar") && ($cveModalidadAcoso!="")){
$modalidadesacososDto=$modalidadesacososFacade->updateModalidadesacosos($modalidadesacososDto);
echo $modalidadesacososDto;
} else if($accion=="consultar"){
$modalidadesacososDto=$modalidadesacososFacade->selectModalidadesacosos($modalidadesacososDto);
echo $modalidadesacososDto;
} else if( ($accion=="baja") && ($cveModalidadAcoso!="") ){
$modalidadesacososDto=$modalidadesacososFacade->deleteModalidadesacosos($modalidadesacososDto);
echo $modalidadesacososDto;
} else if( ($accion=="seleccionar") && ($cveModalidadAcoso!="") ){
$modalidadesacososDto=$modalidadesacososFacade->selectModalidadesacosos($modalidadesacososDto);
echo $modalidadesacososDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>