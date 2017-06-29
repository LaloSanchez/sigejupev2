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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/detallessexualesconductascarpetas/DetallessexualesconductascarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/detallessexualesconductascarpetas/DetallessexualesconductascarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class DetallessexualesconductascarpetasFacade {
private $proveedor;
public function __construct() {
}
public function validarDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto){
$DetallessexualesconductascarpetasDto->setidDetalleSexualConductaCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallessexualesconductascarpetasDto->getidDetalleSexualConductaCarpeta(),"utf8"):strtoupper($DetallessexualesconductascarpetasDto->getidDetalleSexualConductaCarpeta()))))));
if($this->esFecha($DetallessexualesconductascarpetasDto->getidDetalleSexualConductaCarpeta())){
$DetallessexualesconductascarpetasDto->setidDetalleSexualConductaCarpeta($this->fechaMysql($DetallessexualesconductascarpetasDto->getidDetalleSexualConductaCarpeta()));
}
$DetallessexualesconductascarpetasDto->setcveDetalleConducta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallessexualesconductascarpetasDto->getcveDetalleConducta(),"utf8"):strtoupper($DetallessexualesconductascarpetasDto->getcveDetalleConducta()))))));
if($this->esFecha($DetallessexualesconductascarpetasDto->getcveDetalleConducta())){
$DetallessexualesconductascarpetasDto->setcveDetalleConducta($this->fechaMysql($DetallessexualesconductascarpetasDto->getcveDetalleConducta()));
}
$DetallessexualesconductascarpetasDto->setidSexualConductaCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallessexualesconductascarpetasDto->getidSexualConductaCarpeta(),"utf8"):strtoupper($DetallessexualesconductascarpetasDto->getidSexualConductaCarpeta()))))));
if($this->esFecha($DetallessexualesconductascarpetasDto->getidSexualConductaCarpeta())){
$DetallessexualesconductascarpetasDto->setidSexualConductaCarpeta($this->fechaMysql($DetallessexualesconductascarpetasDto->getidSexualConductaCarpeta()));
}
$DetallessexualesconductascarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallessexualesconductascarpetasDto->getfechaRegistro(),"utf8"):strtoupper($DetallessexualesconductascarpetasDto->getfechaRegistro()))))));
if($this->esFecha($DetallessexualesconductascarpetasDto->getfechaRegistro())){
$DetallessexualesconductascarpetasDto->setfechaRegistro($this->fechaMysql($DetallessexualesconductascarpetasDto->getfechaRegistro()));
}
$DetallessexualesconductascarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($DetallessexualesconductascarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($DetallessexualesconductascarpetasDto->getfechaActualizacion()))))));
if($this->esFecha($DetallessexualesconductascarpetasDto->getfechaActualizacion())){
$DetallessexualesconductascarpetasDto->setfechaActualizacion($this->fechaMysql($DetallessexualesconductascarpetasDto->getfechaActualizacion()));
}
return $DetallessexualesconductascarpetasDto;
}
public function selectDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto){
$DetallessexualesconductascarpetasDto=$this->validarDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto);
$DetallessexualesconductascarpetasController = new DetallessexualesconductascarpetasController();
$DetallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasController->selectDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto);
if($DetallessexualesconductascarpetasDto!=""){
$dtoToJson = new DtoToJson($DetallessexualesconductascarpetasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto){
$DetallessexualesconductascarpetasDto=$this->validarDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto);
$DetallessexualesconductascarpetasController = new DetallessexualesconductascarpetasController();
$DetallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasController->insertDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto);
if($DetallessexualesconductascarpetasDto!=""){
$dtoToJson = new DtoToJson($DetallessexualesconductascarpetasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto){
$DetallessexualesconductascarpetasDto=$this->validarDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto);
$DetallessexualesconductascarpetasController = new DetallessexualesconductascarpetasController();
$DetallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasController->updateDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto);
if($DetallessexualesconductascarpetasDto!=""){
$dtoToJson = new DtoToJson($DetallessexualesconductascarpetasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto){
$DetallessexualesconductascarpetasDto=$this->validarDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto);
$DetallessexualesconductascarpetasController = new DetallessexualesconductascarpetasController();
$DetallessexualesconductascarpetasDto = $DetallessexualesconductascarpetasController->deleteDetallessexualesconductascarpetas($DetallessexualesconductascarpetasDto);
if($DetallessexualesconductascarpetasDto==true){
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



@$idDetalleSexualConductaCarpeta=$_POST["idDetalleSexualConductaCarpeta"];
@$cveDetalleConducta=$_POST["cveDetalleConducta"];
@$idSexualConductaCarpeta=$_POST["idSexualConductaCarpeta"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$detallessexualesconductascarpetasFacade = new DetallessexualesconductascarpetasFacade();
$detallessexualesconductascarpetasDto = new DetallessexualesconductascarpetasDTO();

$detallessexualesconductascarpetasDto->setIdDetalleSexualConductaCarpeta($idDetalleSexualConductaCarpeta);
$detallessexualesconductascarpetasDto->setCveDetalleConducta($cveDetalleConducta);
$detallessexualesconductascarpetasDto->setIdSexualConductaCarpeta($idSexualConductaCarpeta);
$detallessexualesconductascarpetasDto->setFechaRegistro($fechaRegistro);
$detallessexualesconductascarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idDetalleSexualConductaCarpeta=="") ){
$detallessexualesconductascarpetasDto=$detallessexualesconductascarpetasFacade->insertDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);
echo $detallessexualesconductascarpetasDto;
} else if(($accion=="guardar") && ($idDetalleSexualConductaCarpeta!="")){
$detallessexualesconductascarpetasDto=$detallessexualesconductascarpetasFacade->updateDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);
echo $detallessexualesconductascarpetasDto;
} else if($accion=="consultar"){
$detallessexualesconductascarpetasDto=$detallessexualesconductascarpetasFacade->selectDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);
echo $detallessexualesconductascarpetasDto;
} else if( ($accion=="baja") && ($idDetalleSexualConductaCarpeta!="") ){
$detallessexualesconductascarpetasDto=$detallessexualesconductascarpetasFacade->deleteDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);
echo $detallessexualesconductascarpetasDto;
} else if( ($accion=="seleccionar") && ($idDetalleSexualConductaCarpeta!="") ){
$detallessexualesconductascarpetasDto=$detallessexualesconductascarpetasFacade->selectDetallessexualesconductascarpetas($detallessexualesconductascarpetasDto);
echo $detallessexualesconductascarpetasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>