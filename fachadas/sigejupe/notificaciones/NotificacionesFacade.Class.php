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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/notificaciones/NotificacionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/notificaciones/NotificacionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class NotificacionesFacade {
private $proveedor;
public function __construct() {
}
public function validarNotificaciones($NotificacionesDto){
$NotificacionesDto->setidNotificacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getidNotificacion(),"utf8"):strtoupper($NotificacionesDto->getidNotificacion()))))));
if($this->esFecha($NotificacionesDto->getidNotificacion())){
$NotificacionesDto->setidNotificacion($this->fechaMysql($NotificacionesDto->getidNotificacion()));
}
$NotificacionesDto->setidJuzgadoGestion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getidJuzgadoGestion(),"utf8"):strtoupper($NotificacionesDto->getidJuzgadoGestion()))))));
if($this->esFecha($NotificacionesDto->getidJuzgadoGestion())){
$NotificacionesDto->setidJuzgadoGestion($this->fechaMysql($NotificacionesDto->getidJuzgadoGestion()));
}
$NotificacionesDto->setidAcuerdo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getidAcuerdo(),"utf8"):strtoupper($NotificacionesDto->getidAcuerdo()))))));
if($this->esFecha($NotificacionesDto->getidAcuerdo())){
$NotificacionesDto->setidAcuerdo($this->fechaMysql($NotificacionesDto->getidAcuerdo()));
}
$NotificacionesDto->setFechaNotificacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getFechaNotificacion(),"utf8"):strtoupper($NotificacionesDto->getFechaNotificacion()))))));
if($this->esFecha($NotificacionesDto->getFechaNotificacion())){
$NotificacionesDto->setFechaNotificacion($this->fechaMysql($NotificacionesDto->getFechaNotificacion()));
}
$NotificacionesDto->setidNotificador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getidNotificador(),"utf8"):strtoupper($NotificacionesDto->getidNotificador()))))));
if($this->esFecha($NotificacionesDto->getidNotificador())){
$NotificacionesDto->setidNotificador($this->fechaMysql($NotificacionesDto->getidNotificador()));
}
$NotificacionesDto->setNotificador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getNotificador(),"utf8"):strtoupper($NotificacionesDto->getNotificador()))))));
if($this->esFecha($NotificacionesDto->getNotificador())){
$NotificacionesDto->setNotificador($this->fechaMysql($NotificacionesDto->getNotificador()));
}
$NotificacionesDto->setTipoDoc(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getTipoDoc(),"utf8"):strtoupper($NotificacionesDto->getTipoDoc()))))));
if($this->esFecha($NotificacionesDto->getTipoDoc())){
$NotificacionesDto->setTipoDoc($this->fechaMysql($NotificacionesDto->getTipoDoc()));
}
$NotificacionesDto->setAcuerdo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getAcuerdo(),"utf8"):strtoupper($NotificacionesDto->getAcuerdo()))))));
if($this->esFecha($NotificacionesDto->getAcuerdo())){
$NotificacionesDto->setAcuerdo($this->fechaMysql($NotificacionesDto->getAcuerdo()));
}
$NotificacionesDto->setNumCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getNumCarpeta(),"utf8"):strtoupper($NotificacionesDto->getNumCarpeta()))))));
if($this->esFecha($NotificacionesDto->getNumCarpeta())){
$NotificacionesDto->setNumCarpeta($this->fechaMysql($NotificacionesDto->getNumCarpeta()));
}
$NotificacionesDto->setTipoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getTipoCarpeta(),"utf8"):strtoupper($NotificacionesDto->getTipoCarpeta()))))));
if($this->esFecha($NotificacionesDto->getTipoCarpeta())){
$NotificacionesDto->setTipoCarpeta($this->fechaMysql($NotificacionesDto->getTipoCarpeta()));
}
$NotificacionesDto->setTipoJuzgado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getTipoJuzgado(),"utf8"):strtoupper($NotificacionesDto->getTipoJuzgado()))))));
if($this->esFecha($NotificacionesDto->getTipoJuzgado())){
$NotificacionesDto->setTipoJuzgado($this->fechaMysql($NotificacionesDto->getTipoJuzgado()));
}
$NotificacionesDto->setAnexo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getAnexo(),"utf8"):strtoupper($NotificacionesDto->getAnexo()))))));
if($this->esFecha($NotificacionesDto->getAnexo())){
$NotificacionesDto->setAnexo($this->fechaMysql($NotificacionesDto->getAnexo()));
}
$NotificacionesDto->setidsDocumentos(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NotificacionesDto->getidsDocumentos(),"utf8"):strtoupper($NotificacionesDto->getidsDocumentos()))))));
if($this->esFecha($NotificacionesDto->getidsDocumentos())){
$NotificacionesDto->setidsDocumentos($this->fechaMysql($NotificacionesDto->getidsDocumentos()));
}
return $NotificacionesDto;
}
public function selectNotificaciones($NotificacionesDto){
$NotificacionesDto=$this->validarNotificaciones($NotificacionesDto);
$NotificacionesController = new NotificacionesController();
$NotificacionesDto = $NotificacionesController->selectNotificaciones($NotificacionesDto);
if($NotificacionesDto!=""){
$dtoToJson = new DtoToJson($NotificacionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertNotificaciones($NotificacionesDto){
$NotificacionesDto=$this->validarNotificaciones($NotificacionesDto);
$NotificacionesController = new NotificacionesController();
$NotificacionesDto = $NotificacionesController->insertNotificaciones($NotificacionesDto);
if($NotificacionesDto!=""){
$dtoToJson = new DtoToJson($NotificacionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateNotificaciones($NotificacionesDto){
$NotificacionesDto=$this->validarNotificaciones($NotificacionesDto);
$NotificacionesController = new NotificacionesController();
$NotificacionesDto = $NotificacionesController->updateNotificaciones($NotificacionesDto);
if($NotificacionesDto!=""){
$dtoToJson = new DtoToJson($NotificacionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteNotificaciones($NotificacionesDto){
$NotificacionesDto=$this->validarNotificaciones($NotificacionesDto);
$NotificacionesController = new NotificacionesController();
$NotificacionesDto = $NotificacionesController->deleteNotificaciones($NotificacionesDto);
if($NotificacionesDto==true){
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



@$idNotificacion=$_POST["idNotificacion"];
@$idJuzgadoGestion=$_POST["idJuzgadoGestion"];
@$idAcuerdo=$_POST["idAcuerdo"];
@$FechaNotificacion=$_POST["FechaNotificacion"];
@$idNotificador=$_POST["idNotificador"];
@$Notificador=$_POST["Notificador"];
@$TipoDoc=$_POST["TipoDoc"];
@$Acuerdo=$_POST["Acuerdo"];
@$NumCarpeta=$_POST["NumCarpeta"];
@$TipoCarpeta=$_POST["TipoCarpeta"];
@$TipoJuzgado=$_POST["TipoJuzgado"];
@$Anexo=$_POST["Anexo"];
@$idsDocumentos=$_POST["idsDocumentos"];
@$accion=$_POST["accion"];

$notificacionesFacade = new NotificacionesFacade();
$notificacionesDto = new NotificacionesDTO();

$notificacionesDto->setIdNotificacion($idNotificacion);
$notificacionesDto->setIdJuzgadoGestion($idJuzgadoGestion);
$notificacionesDto->setIdAcuerdo($idAcuerdo);
$notificacionesDto->setFechaNotificacion($FechaNotificacion);
$notificacionesDto->setIdNotificador($idNotificador);
$notificacionesDto->setNotificador($Notificador);
$notificacionesDto->setTipoDoc($TipoDoc);
$notificacionesDto->setAcuerdo($Acuerdo);
$notificacionesDto->setNumCarpeta($NumCarpeta);
$notificacionesDto->setTipoCarpeta($TipoCarpeta);
$notificacionesDto->setTipoJuzgado($TipoJuzgado);
$notificacionesDto->setAnexo($Anexo);
$notificacionesDto->setIdsDocumentos($idsDocumentos);

if( ($accion=="guardar") && ($idImputadoSentencia=="") ){
$notificacionesDto=$notificacionesFacade->insertNotificaciones($notificacionesDto);
echo $notificacionesDto;
} else if(($accion=="guardar") && ($idImputadoSentencia!="")){
$notificacionesDto=$notificacionesFacade->updateNotificaciones($notificacionesDto);
echo $notificacionesDto;
} else if($accion=="consultar"){
$notificacionesDto=$notificacionesFacade->selectNotificaciones($notificacionesDto);
echo $notificacionesDto;
} else if( ($accion=="baja") && ($idImputadoSentencia!="") ){
$notificacionesDto=$notificacionesFacade->deleteNotificaciones($notificacionesDto);
echo $notificacionesDto;
} else if( ($accion=="seleccionar") && ($idImputadoSentencia!="") ){
$notificacionesDto=$notificacionesFacade->selectNotificaciones($notificacionesDto);
echo $notificacionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>