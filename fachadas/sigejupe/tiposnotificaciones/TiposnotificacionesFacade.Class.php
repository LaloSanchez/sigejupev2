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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposnotificaciones/TiposnotificacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposnotificaciones/TiposnotificacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposnotificacionesFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposnotificaciones($TiposnotificacionesDto){
$TiposnotificacionesDto->setcveTipoNotificacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposnotificacionesDto->getcveTipoNotificacion(),"utf8"):strtoupper($TiposnotificacionesDto->getcveTipoNotificacion()))))));
if($this->esFecha($TiposnotificacionesDto->getcveTipoNotificacion())){
$TiposnotificacionesDto->setcveTipoNotificacion($this->fechaMysql($TiposnotificacionesDto->getcveTipoNotificacion()));
}
$TiposnotificacionesDto->setdesTipoNotificacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposnotificacionesDto->getdesTipoNotificacion(),"utf8"):strtoupper($TiposnotificacionesDto->getdesTipoNotificacion()))))));
if($this->esFecha($TiposnotificacionesDto->getdesTipoNotificacion())){
$TiposnotificacionesDto->setdesTipoNotificacion($this->fechaMysql($TiposnotificacionesDto->getdesTipoNotificacion()));
}
$TiposnotificacionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposnotificacionesDto->getactivo(),"utf8"):strtoupper($TiposnotificacionesDto->getactivo()))))));
if($this->esFecha($TiposnotificacionesDto->getactivo())){
$TiposnotificacionesDto->setactivo($this->fechaMysql($TiposnotificacionesDto->getactivo()));
}
$TiposnotificacionesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposnotificacionesDto->getfechaRegistro(),"utf8"):strtoupper($TiposnotificacionesDto->getfechaRegistro()))))));
if($this->esFecha($TiposnotificacionesDto->getfechaRegistro())){
$TiposnotificacionesDto->setfechaRegistro($this->fechaMysql($TiposnotificacionesDto->getfechaRegistro()));
}
$TiposnotificacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposnotificacionesDto->getfechaActualizacion(),"utf8"):strtoupper($TiposnotificacionesDto->getfechaActualizacion()))))));
if($this->esFecha($TiposnotificacionesDto->getfechaActualizacion())){
$TiposnotificacionesDto->setfechaActualizacion($this->fechaMysql($TiposnotificacionesDto->getfechaActualizacion()));
}
return $TiposnotificacionesDto;
}
public function selectTiposnotificaciones($TiposnotificacionesDto){
$TiposnotificacionesDto=$this->validarTiposnotificaciones($TiposnotificacionesDto);
$TiposnotificacionesController = new TiposnotificacionesController();
$TiposnotificacionesDto = $TiposnotificacionesController->selectTiposnotificaciones($TiposnotificacionesDto);
if($TiposnotificacionesDto!=""){
$dtoToJson = new DtoToJson($TiposnotificacionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposnotificaciones($TiposnotificacionesDto){
$TiposnotificacionesDto=$this->validarTiposnotificaciones($TiposnotificacionesDto);
$TiposnotificacionesController = new TiposnotificacionesController();
$TiposnotificacionesDto = $TiposnotificacionesController->insertTiposnotificaciones($TiposnotificacionesDto);
if($TiposnotificacionesDto!=""){
$dtoToJson = new DtoToJson($TiposnotificacionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposnotificaciones($TiposnotificacionesDto){
$TiposnotificacionesDto=$this->validarTiposnotificaciones($TiposnotificacionesDto);
$TiposnotificacionesController = new TiposnotificacionesController();
$TiposnotificacionesDto = $TiposnotificacionesController->updateTiposnotificaciones($TiposnotificacionesDto);
if($TiposnotificacionesDto!=""){
$dtoToJson = new DtoToJson($TiposnotificacionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposnotificaciones($TiposnotificacionesDto){
$TiposnotificacionesDto=$this->validarTiposnotificaciones($TiposnotificacionesDto);
$TiposnotificacionesController = new TiposnotificacionesController();
$TiposnotificacionesDto = $TiposnotificacionesController->deleteTiposnotificaciones($TiposnotificacionesDto);
if($TiposnotificacionesDto==true){
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



@$cveTipoNotificacion=$_POST["cveTipoNotificacion"];
@$desTipoNotificacion=$_POST["desTipoNotificacion"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposnotificacionesFacade = new TiposnotificacionesFacade();
$tiposnotificacionesDto = new TiposnotificacionesDTO();

$tiposnotificacionesDto->setCveTipoNotificacion($cveTipoNotificacion);
$tiposnotificacionesDto->setDesTipoNotificacion($desTipoNotificacion);
$tiposnotificacionesDto->setActivo($activo);
$tiposnotificacionesDto->setFechaRegistro($fechaRegistro);
$tiposnotificacionesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoNotificacion=="") ){
$tiposnotificacionesDto=$tiposnotificacionesFacade->insertTiposnotificaciones($tiposnotificacionesDto);
echo $tiposnotificacionesDto;
} else if(($accion=="guardar") && ($cveTipoNotificacion!="")){
$tiposnotificacionesDto=$tiposnotificacionesFacade->updateTiposnotificaciones($tiposnotificacionesDto);
echo $tiposnotificacionesDto;
} else if($accion=="consultar"){
$tiposnotificacionesDto=$tiposnotificacionesFacade->selectTiposnotificaciones($tiposnotificacionesDto);
echo $tiposnotificacionesDto;
} else if( ($accion=="baja") && ($cveTipoNotificacion!="") ){
$tiposnotificacionesDto=$tiposnotificacionesFacade->deleteTiposnotificaciones($tiposnotificacionesDto);
echo $tiposnotificacionesDto;
} else if( ($accion=="seleccionar") && ($cveTipoNotificacion!="") ){
$tiposnotificacionesDto=$tiposnotificacionesFacade->selectTiposnotificaciones($tiposnotificacionesDto);
echo $tiposnotificacionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>