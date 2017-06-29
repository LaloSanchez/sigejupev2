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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/meses/MesesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/meses/MesesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class MesesFacade {
private $proveedor;
public function __construct() {
}
public function validarMeses($MesesDto){
$MesesDto->setcveMes(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MesesDto->getcveMes(),"utf8"):strtoupper($MesesDto->getcveMes()))))));
if($this->esFecha($MesesDto->getcveMes())){
$MesesDto->setcveMes($this->fechaMysql($MesesDto->getcveMes()));
}
$MesesDto->setdesMes(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MesesDto->getdesMes(),"utf8"):strtoupper($MesesDto->getdesMes()))))));
if($this->esFecha($MesesDto->getdesMes())){
$MesesDto->setdesMes($this->fechaMysql($MesesDto->getdesMes()));
}
$MesesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MesesDto->getfechaRegistro(),"utf8"):strtoupper($MesesDto->getfechaRegistro()))))));
if($this->esFecha($MesesDto->getfechaRegistro())){
$MesesDto->setfechaRegistro($this->fechaMysql($MesesDto->getfechaRegistro()));
}
$MesesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($MesesDto->getfechaActualizacion(),"utf8"):strtoupper($MesesDto->getfechaActualizacion()))))));
if($this->esFecha($MesesDto->getfechaActualizacion())){
$MesesDto->setfechaActualizacion($this->fechaMysql($MesesDto->getfechaActualizacion()));
}
return $MesesDto;
}
public function selectMeses($MesesDto){
$MesesDto=$this->validarMeses($MesesDto);
$MesesController = new MesesController();
$MesesDto = $MesesController->selectMeses($MesesDto);
if($MesesDto!=""){
$dtoToJson = new DtoToJson($MesesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertMeses($MesesDto){
$MesesDto=$this->validarMeses($MesesDto);
$MesesController = new MesesController();
$MesesDto = $MesesController->insertMeses($MesesDto);
if($MesesDto!=""){
$dtoToJson = new DtoToJson($MesesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateMeses($MesesDto){
$MesesDto=$this->validarMeses($MesesDto);
$MesesController = new MesesController();
$MesesDto = $MesesController->updateMeses($MesesDto);
if($MesesDto!=""){
$dtoToJson = new DtoToJson($MesesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteMeses($MesesDto){
$MesesDto=$this->validarMeses($MesesDto);
$MesesController = new MesesController();
$MesesDto = $MesesController->deleteMeses($MesesDto);
if($MesesDto==true){
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



@$cveMes=$_POST["cveMes"];
@$desMes=$_POST["desMes"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$mesesFacade = new MesesFacade();
$mesesDto = new MesesDTO();

$mesesDto->setCveMes($cveMes);
$mesesDto->setDesMes($desMes);
$mesesDto->setFechaRegistro($fechaRegistro);
$mesesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveMes=="") ){
$mesesDto=$mesesFacade->insertMeses($mesesDto);
echo $mesesDto;
} else if(($accion=="guardar") && ($cveMes!="")){
$mesesDto=$mesesFacade->updateMeses($mesesDto);
echo $mesesDto;
} else if($accion=="consultar"){
$mesesDto=$mesesFacade->selectMeses($mesesDto);
echo $mesesDto;
} else if( ($accion=="baja") && ($cveMes!="") ){
$mesesDto=$mesesFacade->deleteMeses($mesesDto);
echo $mesesDto;
} else if( ($accion=="seleccionar") && ($cveMes!="") ){
$mesesDto=$mesesFacade->selectMeses($mesesDto);
echo $mesesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>