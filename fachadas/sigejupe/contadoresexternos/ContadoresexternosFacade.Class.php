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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/contadoresexternos/ContadoresexternosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/contadoresexternos/ContadoresexternosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ContadoresexternosFacade {
private $proveedor;
public function __construct() {
}
public function validarContadoresexternos($ContadoresexternosDto){
$ContadoresexternosDto->setidContadorExterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ContadoresexternosDto->getidContadorExterno(),"utf8"):strtoupper($ContadoresexternosDto->getidContadorExterno()))))));
if($this->esFecha($ContadoresexternosDto->getidContadorExterno())){
$ContadoresexternosDto->setidContadorExterno($this->fechaMysql($ContadoresexternosDto->getidContadorExterno()));
}
$ContadoresexternosDto->setnumero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ContadoresexternosDto->getnumero(),"utf8"):strtoupper($ContadoresexternosDto->getnumero()))))));
if($this->esFecha($ContadoresexternosDto->getnumero())){
$ContadoresexternosDto->setnumero($this->fechaMysql($ContadoresexternosDto->getnumero()));
}
$ContadoresexternosDto->setanio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ContadoresexternosDto->getanio(),"utf8"):strtoupper($ContadoresexternosDto->getanio()))))));
if($this->esFecha($ContadoresexternosDto->getanio())){
$ContadoresexternosDto->setanio($this->fechaMysql($ContadoresexternosDto->getanio()));
}
$ContadoresexternosDto->setcveTipoActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ContadoresexternosDto->getcveTipoActuacion(),"utf8"):strtoupper($ContadoresexternosDto->getcveTipoActuacion()))))));
if($this->esFecha($ContadoresexternosDto->getcveTipoActuacion())){
$ContadoresexternosDto->setcveTipoActuacion($this->fechaMysql($ContadoresexternosDto->getcveTipoActuacion()));
}
$ContadoresexternosDto->setcveAdscripcion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ContadoresexternosDto->getcveAdscripcion(),"utf8"):strtoupper($ContadoresexternosDto->getcveAdscripcion()))))));
if($this->esFecha($ContadoresexternosDto->getcveAdscripcion())){
$ContadoresexternosDto->setcveAdscripcion($this->fechaMysql($ContadoresexternosDto->getcveAdscripcion()));
}
$ContadoresexternosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ContadoresexternosDto->getactivo(),"utf8"):strtoupper($ContadoresexternosDto->getactivo()))))));
if($this->esFecha($ContadoresexternosDto->getactivo())){
$ContadoresexternosDto->setactivo($this->fechaMysql($ContadoresexternosDto->getactivo()));
}
$ContadoresexternosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ContadoresexternosDto->getfechaRegistro(),"utf8"):strtoupper($ContadoresexternosDto->getfechaRegistro()))))));
if($this->esFecha($ContadoresexternosDto->getfechaRegistro())){
$ContadoresexternosDto->setfechaRegistro($this->fechaMysql($ContadoresexternosDto->getfechaRegistro()));
}
$ContadoresexternosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ContadoresexternosDto->getfechaActualizacion(),"utf8"):strtoupper($ContadoresexternosDto->getfechaActualizacion()))))));
if($this->esFecha($ContadoresexternosDto->getfechaActualizacion())){
$ContadoresexternosDto->setfechaActualizacion($this->fechaMysql($ContadoresexternosDto->getfechaActualizacion()));
}
return $ContadoresexternosDto;
}
public function selectContadoresexternos($ContadoresexternosDto){
$ContadoresexternosDto=$this->validarContadoresexternos($ContadoresexternosDto);
$ContadoresexternosController = new ContadoresexternosController();
$ContadoresexternosDto = $ContadoresexternosController->selectContadoresexternos($ContadoresexternosDto);
if($ContadoresexternosDto!=""){
$dtoToJson = new DtoToJson($ContadoresexternosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertContadoresexternos($ContadoresexternosDto){
$ContadoresexternosDto=$this->validarContadoresexternos($ContadoresexternosDto);
$ContadoresexternosController = new ContadoresexternosController();
$ContadoresexternosDto = $ContadoresexternosController->insertContadoresexternos($ContadoresexternosDto);
if($ContadoresexternosDto!=""){
$dtoToJson = new DtoToJson($ContadoresexternosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateContadoresexternos($ContadoresexternosDto){
$ContadoresexternosDto=$this->validarContadoresexternos($ContadoresexternosDto);
$ContadoresexternosController = new ContadoresexternosController();
$ContadoresexternosDto = $ContadoresexternosController->updateContadoresexternos($ContadoresexternosDto);
if($ContadoresexternosDto!=""){
$dtoToJson = new DtoToJson($ContadoresexternosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteContadoresexternos($ContadoresexternosDto){
$ContadoresexternosDto=$this->validarContadoresexternos($ContadoresexternosDto);
$ContadoresexternosController = new ContadoresexternosController();
$ContadoresexternosDto = $ContadoresexternosController->deleteContadoresexternos($ContadoresexternosDto);
if($ContadoresexternosDto==true){
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



@$idContadorExterno=$_POST["idContadorExterno"];
@$numero=$_POST["numero"];
@$anio=$_POST["anio"];
@$cveTipoActuacion=$_POST["cveTipoActuacion"];
@$cveAdscripcion=$_POST["cveAdscripcion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$contadoresexternosFacade = new ContadoresexternosFacade();
$contadoresexternosDto = new ContadoresexternosDTO();

$contadoresexternosDto->setIdContadorExterno($idContadorExterno);
$contadoresexternosDto->setNumero($numero);
$contadoresexternosDto->setAnio($anio);
$contadoresexternosDto->setCveTipoActuacion($cveTipoActuacion);
$contadoresexternosDto->setCveAdscripcion($cveAdscripcion);
$contadoresexternosDto->setActivo($activo);
$contadoresexternosDto->setFechaRegistro($fechaRegistro);
$contadoresexternosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idContadorExterno=="") ){
$contadoresexternosDto=$contadoresexternosFacade->insertContadoresexternos($contadoresexternosDto);
echo $contadoresexternosDto;
} else if(($accion=="guardar") && ($idContadorExterno!="")){
$contadoresexternosDto=$contadoresexternosFacade->updateContadoresexternos($contadoresexternosDto);
echo $contadoresexternosDto;
} else if($accion=="consultar"){
$contadoresexternosDto=$contadoresexternosFacade->selectContadoresexternos($contadoresexternosDto);
echo $contadoresexternosDto;
} else if( ($accion=="baja") && ($idContadorExterno!="") ){
$contadoresexternosDto=$contadoresexternosFacade->deleteContadoresexternos($contadoresexternosDto);
echo $contadoresexternosDto;
} else if( ($accion=="seleccionar") && ($idContadorExterno!="") ){
$contadoresexternosDto=$contadoresexternosFacade->selectContadoresexternos($contadoresexternosDto);
echo $contadoresexternosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>