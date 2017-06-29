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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/personasnotificar/PersonasnotificarDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/personasnotificar/PersonasnotificarController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class PersonasnotificarFacade {
private $proveedor;
public function __construct() {
}
public function validarPersonasnotificar($PersonasnotificarDto){
$PersonasnotificarDto->setidtblPersonasNotificar(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getidtblPersonasNotificar(),"utf8"):strtoupper($PersonasnotificarDto->getidtblPersonasNotificar()))))));
if($this->esFecha($PersonasnotificarDto->getidtblPersonasNotificar())){
$PersonasnotificarDto->setidtblPersonasNotificar($this->fechaMysql($PersonasnotificarDto->getidtblPersonasNotificar()));
}
$PersonasnotificarDto->setidNotificacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getidNotificacion(),"utf8"):strtoupper($PersonasnotificarDto->getidNotificacion()))))));
if($this->esFecha($PersonasnotificarDto->getidNotificacion())){
$PersonasnotificarDto->setidNotificacion($this->fechaMysql($PersonasnotificarDto->getidNotificacion()));
}
$PersonasnotificarDto->setidRelacionExpedienteJuzgado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getidRelacionExpedienteJuzgado(),"utf8"):strtoupper($PersonasnotificarDto->getidRelacionExpedienteJuzgado()))))));
if($this->esFecha($PersonasnotificarDto->getidRelacionExpedienteJuzgado())){
$PersonasnotificarDto->setidRelacionExpedienteJuzgado($this->fechaMysql($PersonasnotificarDto->getidRelacionExpedienteJuzgado()));
}
$PersonasnotificarDto->setActivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getActivo(),"utf8"):strtoupper($PersonasnotificarDto->getActivo()))))));
if($this->esFecha($PersonasnotificarDto->getActivo())){
$PersonasnotificarDto->setActivo($this->fechaMysql($PersonasnotificarDto->getActivo()));
}
$PersonasnotificarDto->setFechaAlta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getFechaAlta(),"utf8"):strtoupper($PersonasnotificarDto->getFechaAlta()))))));
if($this->esFecha($PersonasnotificarDto->getFechaAlta())){
$PersonasnotificarDto->setFechaAlta($this->fechaMysql($PersonasnotificarDto->getFechaAlta()));
}
$PersonasnotificarDto->setFechaModificacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getFechaModificacion(),"utf8"):strtoupper($PersonasnotificarDto->getFechaModificacion()))))));
if($this->esFecha($PersonasnotificarDto->getFechaModificacion())){
$PersonasnotificarDto->setFechaModificacion($this->fechaMysql($PersonasnotificarDto->getFechaModificacion()));
}
$PersonasnotificarDto->setCadOriginal(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getCadOriginal(),"utf8"):strtoupper($PersonasnotificarDto->getCadOriginal()))))));
if($this->esFecha($PersonasnotificarDto->getCadOriginal())){
$PersonasnotificarDto->setCadOriginal($this->fechaMysql($PersonasnotificarDto->getCadOriginal()));
}
$PersonasnotificarDto->setSelloDigital(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getSelloDigital(),"utf8"):strtoupper($PersonasnotificarDto->getSelloDigital()))))));
if($this->esFecha($PersonasnotificarDto->getSelloDigital())){
$PersonasnotificarDto->setSelloDigital($this->fechaMysql($PersonasnotificarDto->getSelloDigital()));
}
$PersonasnotificarDto->setInstructivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getInstructivo(),"utf8"):strtoupper($PersonasnotificarDto->getInstructivo()))))));
if($this->esFecha($PersonasnotificarDto->getInstructivo())){
$PersonasnotificarDto->setInstructivo($this->fechaMysql($PersonasnotificarDto->getInstructivo()));
}
$PersonasnotificarDto->setDestinatario(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getDestinatario(),"utf8"):strtoupper($PersonasnotificarDto->getDestinatario()))))));
if($this->esFecha($PersonasnotificarDto->getDestinatario())){
$PersonasnotificarDto->setDestinatario($this->fechaMysql($PersonasnotificarDto->getDestinatario()));
}
$PersonasnotificarDto->setCorreoCopia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getCorreoCopia(),"utf8"):strtoupper($PersonasnotificarDto->getCorreoCopia()))))));
if($this->esFecha($PersonasnotificarDto->getCorreoCopia())){
$PersonasnotificarDto->setCorreoCopia($this->fechaMysql($PersonasnotificarDto->getCorreoCopia()));
}
$PersonasnotificarDto->setidAcuerdo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getidAcuerdo(),"utf8"):strtoupper($PersonasnotificarDto->getidAcuerdo()))))));
if($this->esFecha($PersonasnotificarDto->getidAcuerdo())){
$PersonasnotificarDto->setidAcuerdo($this->fechaMysql($PersonasnotificarDto->getidAcuerdo()));
}
$PersonasnotificarDto->setEncabezado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonasnotificarDto->getEncabezado(),"utf8"):strtoupper($PersonasnotificarDto->getEncabezado()))))));
if($this->esFecha($PersonasnotificarDto->getEncabezado())){
$PersonasnotificarDto->setEncabezado($this->fechaMysql($PersonasnotificarDto->getEncabezado()));
}
return $PersonasnotificarDto;
}
public function selectPersonasnotificar($PersonasnotificarDto){
$PersonasnotificarDto=$this->validarPersonasnotificar($PersonasnotificarDto);
$PersonasnotificarController = new PersonasnotificarController();
$PersonasnotificarDto = $PersonasnotificarController->selectPersonasnotificar($PersonasnotificarDto);
if($PersonasnotificarDto!=""){
$dtoToJson = new DtoToJson($PersonasnotificarDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertPersonasnotificar($PersonasnotificarDto){
$PersonasnotificarDto=$this->validarPersonasnotificar($PersonasnotificarDto);
$PersonasnotificarController = new PersonasnotificarController();
$PersonasnotificarDto = $PersonasnotificarController->insertPersonasnotificar($PersonasnotificarDto);
if($PersonasnotificarDto!=""){
$dtoToJson = new DtoToJson($PersonasnotificarDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updatePersonasnotificar($PersonasnotificarDto){
$PersonasnotificarDto=$this->validarPersonasnotificar($PersonasnotificarDto);
$PersonasnotificarController = new PersonasnotificarController();
$PersonasnotificarDto = $PersonasnotificarController->updatePersonasnotificar($PersonasnotificarDto);
if($PersonasnotificarDto!=""){
$dtoToJson = new DtoToJson($PersonasnotificarDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deletePersonasnotificar($PersonasnotificarDto){
$PersonasnotificarDto=$this->validarPersonasnotificar($PersonasnotificarDto);
$PersonasnotificarController = new PersonasnotificarController();
$PersonasnotificarDto = $PersonasnotificarController->deletePersonasnotificar($PersonasnotificarDto);
if($PersonasnotificarDto==true){
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



@$idtblPersonasNotificar=$_POST["idtblPersonasNotificar"];
@$idNotificacion=$_POST["idNotificacion"];
@$idRelacionExpedienteJuzgado=$_POST["idRelacionExpedienteJuzgado"];
@$Activo=$_POST["Activo"];
@$FechaAlta=$_POST["FechaAlta"];
@$FechaModificacion=$_POST["FechaModificacion"];
@$CadOriginal=$_POST["CadOriginal"];
@$SelloDigital=$_POST["SelloDigital"];
@$Instructivo=$_POST["Instructivo"];
@$Destinatario=$_POST["Destinatario"];
@$CorreoCopia=$_POST["CorreoCopia"];
@$idAcuerdo=$_POST["idAcuerdo"];
@$Encabezado=$_POST["Encabezado"];
@$accion=$_POST["accion"];

$personasnotificarFacade = new PersonasnotificarFacade();
$personasnotificarDto = new PersonasnotificarDTO();

$personasnotificarDto->setIdtblPersonasNotificar($idtblPersonasNotificar);
$personasnotificarDto->setIdNotificacion($idNotificacion);
$personasnotificarDto->setIdRelacionExpedienteJuzgado($idRelacionExpedienteJuzgado);
$personasnotificarDto->setActivo($Activo);
$personasnotificarDto->setFechaAlta($FechaAlta);
$personasnotificarDto->setFechaModificacion($FechaModificacion);
$personasnotificarDto->setCadOriginal($CadOriginal);
$personasnotificarDto->setSelloDigital($SelloDigital);
$personasnotificarDto->setInstructivo($Instructivo);
$personasnotificarDto->setDestinatario($Destinatario);
$personasnotificarDto->setCorreoCopia($CorreoCopia);
$personasnotificarDto->setIdAcuerdo($idAcuerdo);
$personasnotificarDto->setEncabezado($Encabezado);

if( ($accion=="guardar") && ($idImputadoSentencia=="") ){
$personasnotificarDto=$personasnotificarFacade->insertPersonasnotificar($personasnotificarDto);
echo $personasnotificarDto;
} else if(($accion=="guardar") && ($idImputadoSentencia!="")){
$personasnotificarDto=$personasnotificarFacade->updatePersonasnotificar($personasnotificarDto);
echo $personasnotificarDto;
} else if($accion=="consultar"){
$personasnotificarDto=$personasnotificarFacade->selectPersonasnotificar($personasnotificarDto);
echo $personasnotificarDto;
} else if( ($accion=="baja") && ($idImputadoSentencia!="") ){
$personasnotificarDto=$personasnotificarFacade->deletePersonasnotificar($personasnotificarDto);
echo $personasnotificarDto;
} else if( ($accion=="seleccionar") && ($idImputadoSentencia!="") ){
$personasnotificarDto=$personasnotificarFacade->selectPersonasnotificar($personasnotificarDto);
echo $personasnotificarDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>