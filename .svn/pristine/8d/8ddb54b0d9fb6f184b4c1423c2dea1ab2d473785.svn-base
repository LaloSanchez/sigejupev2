<?php //ihs
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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/sentidosresoluciones/SentidosresolucionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/sentidosresoluciones/SentidosresolucionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class SentidosresolucionesFacade {
private $proveedor;
public function __construct() {
}
public function validarSentidosresoluciones($SentidosresolucionesDto){
$SentidosresolucionesDto->setcveSentido(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentidosresolucionesDto->getcveSentido(),"utf8"):strtoupper($SentidosresolucionesDto->getcveSentido()))))));
if($this->esFecha($SentidosresolucionesDto->getcveSentido())){
$SentidosresolucionesDto->setcveSentido($this->fechaMysql($SentidosresolucionesDto->getcveSentido()));
}
$SentidosresolucionesDto->setdesSentido(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentidosresolucionesDto->getdesSentido(),"utf8"):strtoupper($SentidosresolucionesDto->getdesSentido()))))));
if($this->esFecha($SentidosresolucionesDto->getdesSentido())){
$SentidosresolucionesDto->setdesSentido($this->fechaMysql($SentidosresolucionesDto->getdesSentido()));
}
$SentidosresolucionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentidosresolucionesDto->getactivo(),"utf8"):strtoupper($SentidosresolucionesDto->getactivo()))))));
if($this->esFecha($SentidosresolucionesDto->getactivo())){
$SentidosresolucionesDto->setactivo($this->fechaMysql($SentidosresolucionesDto->getactivo()));
}
$SentidosresolucionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentidosresolucionesDto->getfechaRegistro(),"utf8"):strtoupper($SentidosresolucionesDto->getfechaRegistro()))))));
if($this->esFecha($SentidosresolucionesDto->getfechaRegistro())){
$SentidosresolucionesDto->setfechaRegistro($this->fechaMysql($SentidosresolucionesDto->getfechaRegistro()));
}
$SentidosresolucionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SentidosresolucionesDto->getfechaActualizacion(),"utf8"):strtoupper($SentidosresolucionesDto->getfechaActualizacion()))))));
if($this->esFecha($SentidosresolucionesDto->getfechaActualizacion())){
$SentidosresolucionesDto->setfechaActualizacion($this->fechaMysql($SentidosresolucionesDto->getfechaActualizacion()));
}
return $SentidosresolucionesDto;
}
public function selectSentidosresoluciones($SentidosresolucionesDto){
$SentidosresolucionesDto=$this->validarSentidosresoluciones($SentidosresolucionesDto);
$SentidosresolucionesController = new SentidosresolucionesController();
$SentidosresolucionesDto = $SentidosresolucionesController->selectSentidosresoluciones($SentidosresolucionesDto);
if($SentidosresolucionesDto!=""){
$dtoToJson = new DtoToJson($SentidosresolucionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertSentidosresoluciones($SentidosresolucionesDto){
$SentidosresolucionesDto=$this->validarSentidosresoluciones($SentidosresolucionesDto);
$SentidosresolucionesController = new SentidosresolucionesController();
$SentidosresolucionesDto = $SentidosresolucionesController->insertSentidosresoluciones($SentidosresolucionesDto);
if($SentidosresolucionesDto!=""){
$dtoToJson = new DtoToJson($SentidosresolucionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateSentidosresoluciones($SentidosresolucionesDto){
$SentidosresolucionesDto=$this->validarSentidosresoluciones($SentidosresolucionesDto);
$SentidosresolucionesController = new SentidosresolucionesController();
$SentidosresolucionesDto = $SentidosresolucionesController->updateSentidosresoluciones($SentidosresolucionesDto);
if($SentidosresolucionesDto!=""){
$dtoToJson = new DtoToJson($SentidosresolucionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteSentidosresoluciones($SentidosresolucionesDto){
$SentidosresolucionesDto=$this->validarSentidosresoluciones($SentidosresolucionesDto);
$SentidosresolucionesController = new SentidosresolucionesController();
$SentidosresolucionesDto = $SentidosresolucionesController->deleteSentidosresoluciones($SentidosresolucionesDto);
if($SentidosresolucionesDto==true){
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



@$cveSentido=$_POST["cveSentido"];
@$desSentido=$_POST["desSentido"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$sentidosresolucionesFacade = new SentidosresolucionesFacade();
$sentidosresolucionesDto = new SentidosresolucionesDTO();

$sentidosresolucionesDto->setCveSentido($cveSentido);
$sentidosresolucionesDto->setDesSentido($desSentido);
$sentidosresolucionesDto->setActivo($activo);
$sentidosresolucionesDto->setFechaRegistro($fechaRegistro);
$sentidosresolucionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveSentido=="") ){
$sentidosresolucionesDto=$sentidosresolucionesFacade->insertSentidosresoluciones($sentidosresolucionesDto);
echo $sentidosresolucionesDto;
} else if(($accion=="guardar") && ($cveSentido!="")){
$sentidosresolucionesDto=$sentidosresolucionesFacade->updateSentidosresoluciones($sentidosresolucionesDto);
echo $sentidosresolucionesDto;
} else if($accion=="consultar"){
$sentidosresolucionesDto=$sentidosresolucionesFacade->selectSentidosresoluciones($sentidosresolucionesDto);
echo $sentidosresolucionesDto;
} else if( ($accion=="baja") && ($cveSentido!="") ){
$sentidosresolucionesDto=$sentidosresolucionesFacade->deleteSentidosresoluciones($sentidosresolucionesDto);
echo $sentidosresolucionesDto;
} else if( ($accion=="seleccionar") && ($cveSentido!="") ){
$sentidosresolucionesDto=$sentidosresolucionesFacade->selectSentidosresoluciones($sentidosresolucionesDto);
echo $sentidosresolucionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>