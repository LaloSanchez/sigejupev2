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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/violenciadegenerocarpetas/ViolenciadegenerocarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/violenciadegenerocarpetas/ViolenciadegenerocarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ViolenciadegenerocarpetasFacade {
private $proveedor;
public function __construct() {
}
public function validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto){
$ViolenciadegenerocarpetasDto->setidViolenciaDeGeneroCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciadegenerocarpetasDto->getidViolenciaDeGeneroCarpeta(),"utf8"):strtoupper($ViolenciadegenerocarpetasDto->getidViolenciaDeGeneroCarpeta()))))));
if($this->esFecha($ViolenciadegenerocarpetasDto->getidViolenciaDeGeneroCarpeta())){
$ViolenciadegenerocarpetasDto->setidViolenciaDeGeneroCarpeta($this->fechaMysql($ViolenciadegenerocarpetasDto->getidViolenciaDeGeneroCarpeta()));
}
$ViolenciadegenerocarpetasDto->setcveEfecto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciadegenerocarpetasDto->getcveEfecto(),"utf8"):strtoupper($ViolenciadegenerocarpetasDto->getcveEfecto()))))));
if($this->esFecha($ViolenciadegenerocarpetasDto->getcveEfecto())){
$ViolenciadegenerocarpetasDto->setcveEfecto($this->fechaMysql($ViolenciadegenerocarpetasDto->getcveEfecto()));
}
$ViolenciadegenerocarpetasDto->setidImpOfeDelCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciadegenerocarpetasDto->getidImpOfeDelCarpeta(),"utf8"):strtoupper($ViolenciadegenerocarpetasDto->getidImpOfeDelCarpeta()))))));
if($this->esFecha($ViolenciadegenerocarpetasDto->getidImpOfeDelCarpeta())){
$ViolenciadegenerocarpetasDto->setidImpOfeDelCarpeta($this->fechaMysql($ViolenciadegenerocarpetasDto->getidImpOfeDelCarpeta()));
}
$ViolenciadegenerocarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciadegenerocarpetasDto->getfechaRegistro(),"utf8"):strtoupper($ViolenciadegenerocarpetasDto->getfechaRegistro()))))));
if($this->esFecha($ViolenciadegenerocarpetasDto->getfechaRegistro())){
$ViolenciadegenerocarpetasDto->setfechaRegistro($this->fechaMysql($ViolenciadegenerocarpetasDto->getfechaRegistro()));
}
$ViolenciadegenerocarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciadegenerocarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($ViolenciadegenerocarpetasDto->getfechaActualizacion()))))));
if($this->esFecha($ViolenciadegenerocarpetasDto->getfechaActualizacion())){
$ViolenciadegenerocarpetasDto->setfechaActualizacion($this->fechaMysql($ViolenciadegenerocarpetasDto->getfechaActualizacion()));
}
return $ViolenciadegenerocarpetasDto;
}
public function selectViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto){
$ViolenciadegenerocarpetasDto=$this->validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
$ViolenciadegenerocarpetasController = new ViolenciadegenerocarpetasController();
$ViolenciadegenerocarpetasDto = $ViolenciadegenerocarpetasController->selectViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
if($ViolenciadegenerocarpetasDto!=""){
$dtoToJson = new DtoToJson($ViolenciadegenerocarpetasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto){
$ViolenciadegenerocarpetasDto=$this->validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
$ViolenciadegenerocarpetasController = new ViolenciadegenerocarpetasController();
$ViolenciadegenerocarpetasDto = $ViolenciadegenerocarpetasController->insertViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
if($ViolenciadegenerocarpetasDto!=""){
$dtoToJson = new DtoToJson($ViolenciadegenerocarpetasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto){
$ViolenciadegenerocarpetasDto=$this->validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
$ViolenciadegenerocarpetasController = new ViolenciadegenerocarpetasController();
$ViolenciadegenerocarpetasDto = $ViolenciadegenerocarpetasController->updateViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
if($ViolenciadegenerocarpetasDto!=""){
$dtoToJson = new DtoToJson($ViolenciadegenerocarpetasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto){
$ViolenciadegenerocarpetasDto=$this->validarViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
$ViolenciadegenerocarpetasController = new ViolenciadegenerocarpetasController();
$ViolenciadegenerocarpetasDto = $ViolenciadegenerocarpetasController->deleteViolenciadegenerocarpetas($ViolenciadegenerocarpetasDto);
if($ViolenciadegenerocarpetasDto==true){
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



@$idViolenciaDeGeneroCarpeta=$_POST["idViolenciaDeGeneroCarpeta"];
@$cveEfecto=$_POST["cveEfecto"];
@$idImpOfeDelCarpeta=$_POST["idImpOfeDelCarpeta"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$violenciadegenerocarpetasFacade = new ViolenciadegenerocarpetasFacade();
$violenciadegenerocarpetasDto = new ViolenciadegenerocarpetasDTO();

$violenciadegenerocarpetasDto->setIdViolenciaDeGeneroCarpeta($idViolenciaDeGeneroCarpeta);
$violenciadegenerocarpetasDto->setCveEfecto($cveEfecto);
$violenciadegenerocarpetasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
$violenciadegenerocarpetasDto->setFechaRegistro($fechaRegistro);
$violenciadegenerocarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idViolenciaDeGeneroCarpeta=="") ){
$violenciadegenerocarpetasDto=$violenciadegenerocarpetasFacade->insertViolenciadegenerocarpetas($violenciadegenerocarpetasDto);
echo $violenciadegenerocarpetasDto;
} else if(($accion=="guardar") && ($idViolenciaDeGeneroCarpeta!="")){
$violenciadegenerocarpetasDto=$violenciadegenerocarpetasFacade->updateViolenciadegenerocarpetas($violenciadegenerocarpetasDto);
echo $violenciadegenerocarpetasDto;
} else if($accion=="consultar"){
$violenciadegenerocarpetasDto=$violenciadegenerocarpetasFacade->selectViolenciadegenerocarpetas($violenciadegenerocarpetasDto);
echo $violenciadegenerocarpetasDto;
} else if( ($accion=="baja") && ($idViolenciaDeGeneroCarpeta!="") ){
$violenciadegenerocarpetasDto=$violenciadegenerocarpetasFacade->deleteViolenciadegenerocarpetas($violenciadegenerocarpetasDto);
echo $violenciadegenerocarpetasDto;
} else if( ($accion=="seleccionar") && ($idViolenciaDeGeneroCarpeta!="") ){
$violenciadegenerocarpetasDto=$violenciadegenerocarpetasFacade->selectViolenciadegenerocarpetas($violenciadegenerocarpetasDto);
echo $violenciadegenerocarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>