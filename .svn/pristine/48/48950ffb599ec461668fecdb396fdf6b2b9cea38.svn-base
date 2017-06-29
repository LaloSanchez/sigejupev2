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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/violenciahomicidiosdolososcarpetas/ViolenciahomicidiosdolososcarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ViolenciahomicidiosdolososcarpetasFacade {
private $proveedor;
public function __construct() {
}
public function validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto){
$ViolenciahomicidiosdolososcarpetasDto->setidViolenciaHomicidioDolosoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciahomicidiosdolososcarpetasDto->getidViolenciaHomicidioDolosoCarpeta(),"utf8"):strtoupper($ViolenciahomicidiosdolososcarpetasDto->getidViolenciaHomicidioDolosoCarpeta()))))));
if($this->esFecha($ViolenciahomicidiosdolososcarpetasDto->getidViolenciaHomicidioDolosoCarpeta())){
$ViolenciahomicidiosdolososcarpetasDto->setidViolenciaHomicidioDolosoCarpeta($this->fechaMysql($ViolenciahomicidiosdolososcarpetasDto->getidViolenciaHomicidioDolosoCarpeta()));
}
$ViolenciahomicidiosdolososcarpetasDto->setidViolenciaDeGeneroCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciahomicidiosdolososcarpetasDto->getidViolenciaDeGeneroCarpeta(),"utf8"):strtoupper($ViolenciahomicidiosdolososcarpetasDto->getidViolenciaDeGeneroCarpeta()))))));
if($this->esFecha($ViolenciahomicidiosdolososcarpetasDto->getidViolenciaDeGeneroCarpeta())){
$ViolenciahomicidiosdolososcarpetasDto->setidViolenciaDeGeneroCarpeta($this->fechaMysql($ViolenciahomicidiosdolososcarpetasDto->getidViolenciaDeGeneroCarpeta()));
}
$ViolenciahomicidiosdolososcarpetasDto->setcveHomicidioDoloso(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciahomicidiosdolososcarpetasDto->getcveHomicidioDoloso(),"utf8"):strtoupper($ViolenciahomicidiosdolososcarpetasDto->getcveHomicidioDoloso()))))));
if($this->esFecha($ViolenciahomicidiosdolososcarpetasDto->getcveHomicidioDoloso())){
$ViolenciahomicidiosdolososcarpetasDto->setcveHomicidioDoloso($this->fechaMysql($ViolenciahomicidiosdolososcarpetasDto->getcveHomicidioDoloso()));
}
$ViolenciahomicidiosdolososcarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciahomicidiosdolososcarpetasDto->getfechaRegistro(),"utf8"):strtoupper($ViolenciahomicidiosdolososcarpetasDto->getfechaRegistro()))))));
if($this->esFecha($ViolenciahomicidiosdolososcarpetasDto->getfechaRegistro())){
$ViolenciahomicidiosdolososcarpetasDto->setfechaRegistro($this->fechaMysql($ViolenciahomicidiosdolososcarpetasDto->getfechaRegistro()));
}
$ViolenciahomicidiosdolososcarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ViolenciahomicidiosdolososcarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($ViolenciahomicidiosdolososcarpetasDto->getfechaActualizacion()))))));
if($this->esFecha($ViolenciahomicidiosdolososcarpetasDto->getfechaActualizacion())){
$ViolenciahomicidiosdolososcarpetasDto->setfechaActualizacion($this->fechaMysql($ViolenciahomicidiosdolososcarpetasDto->getfechaActualizacion()));
}
return $ViolenciahomicidiosdolososcarpetasDto;
}
public function selectViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto){
$ViolenciahomicidiosdolososcarpetasDto=$this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
$ViolenciahomicidiosdolososcarpetasController = new ViolenciahomicidiosdolososcarpetasController();
$ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasController->selectViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
if($ViolenciahomicidiosdolososcarpetasDto!=""){
$dtoToJson = new DtoToJson($ViolenciahomicidiosdolososcarpetasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto){
$ViolenciahomicidiosdolososcarpetasDto=$this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
$ViolenciahomicidiosdolososcarpetasController = new ViolenciahomicidiosdolososcarpetasController();
$ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasController->insertViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
if($ViolenciahomicidiosdolososcarpetasDto!=""){
$dtoToJson = new DtoToJson($ViolenciahomicidiosdolososcarpetasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto){
$ViolenciahomicidiosdolososcarpetasDto=$this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
$ViolenciahomicidiosdolososcarpetasController = new ViolenciahomicidiosdolososcarpetasController();
$ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasController->updateViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
if($ViolenciahomicidiosdolososcarpetasDto!=""){
$dtoToJson = new DtoToJson($ViolenciahomicidiosdolososcarpetasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto){
$ViolenciahomicidiosdolososcarpetasDto=$this->validarViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
$ViolenciahomicidiosdolososcarpetasController = new ViolenciahomicidiosdolososcarpetasController();
$ViolenciahomicidiosdolososcarpetasDto = $ViolenciahomicidiosdolososcarpetasController->deleteViolenciahomicidiosdolososcarpetas($ViolenciahomicidiosdolososcarpetasDto);
if($ViolenciahomicidiosdolososcarpetasDto==true){
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



@$idViolenciaHomicidioDolosoCarpeta=$_POST["idViolenciaHomicidioDolosoCarpeta"];
@$idViolenciaDeGeneroCarpeta=$_POST["idViolenciaDeGeneroCarpeta"];
@$cveHomicidioDoloso=$_POST["cveHomicidioDoloso"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$violenciahomicidiosdolososcarpetasFacade = new ViolenciahomicidiosdolososcarpetasFacade();
$violenciahomicidiosdolososcarpetasDto = new ViolenciahomicidiosdolososcarpetasDTO();

$violenciahomicidiosdolososcarpetasDto->setIdViolenciaHomicidioDolosoCarpeta($idViolenciaHomicidioDolosoCarpeta);
$violenciahomicidiosdolososcarpetasDto->setIdViolenciaDeGeneroCarpeta($idViolenciaDeGeneroCarpeta);
$violenciahomicidiosdolososcarpetasDto->setCveHomicidioDoloso($cveHomicidioDoloso);
$violenciahomicidiosdolososcarpetasDto->setFechaRegistro($fechaRegistro);
$violenciahomicidiosdolososcarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idViolenciaHomicidioDolosoCarpeta=="") ){
$violenciahomicidiosdolososcarpetasDto=$violenciahomicidiosdolososcarpetasFacade->insertViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto);
echo $violenciahomicidiosdolososcarpetasDto;
} else if(($accion=="guardar") && ($idViolenciaHomicidioDolosoCarpeta!="")){
$violenciahomicidiosdolososcarpetasDto=$violenciahomicidiosdolososcarpetasFacade->updateViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto);
echo $violenciahomicidiosdolososcarpetasDto;
} else if($accion=="consultar"){
$violenciahomicidiosdolososcarpetasDto=$violenciahomicidiosdolososcarpetasFacade->selectViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto);
echo $violenciahomicidiosdolososcarpetasDto;
} else if( ($accion=="baja") && ($idViolenciaHomicidioDolosoCarpeta!="") ){
$violenciahomicidiosdolososcarpetasDto=$violenciahomicidiosdolososcarpetasFacade->deleteViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto);
echo $violenciahomicidiosdolososcarpetasDto;
} else if( ($accion=="seleccionar") && ($idViolenciaHomicidioDolosoCarpeta!="") ){
$violenciahomicidiosdolososcarpetasDto=$violenciahomicidiosdolososcarpetasFacade->selectViolenciahomicidiosdolososcarpetas($violenciahomicidiosdolososcarpetasDto);
echo $violenciahomicidiosdolososcarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>