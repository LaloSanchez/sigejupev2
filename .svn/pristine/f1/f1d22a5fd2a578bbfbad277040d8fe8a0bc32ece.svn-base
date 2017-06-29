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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/personaautorizadas/PersonaautorizadasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/personaautorizadas/PersonaautorizadasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class PersonaautorizadasFacade {
private $proveedor;
public function __construct() {
}
public function validarPersonaautorizadas($PersonaautorizadasDto){
$PersonaautorizadasDto->setIdPersonaAutorizada(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getIdPersonaAutorizada(),"utf8"):strtoupper($PersonaautorizadasDto->getIdPersonaAutorizada()))))));
if($this->esFecha($PersonaautorizadasDto->getIdPersonaAutorizada())){
$PersonaautorizadasDto->setIdPersonaAutorizada($this->fechaMysql($PersonaautorizadasDto->getIdPersonaAutorizada()));
}
$PersonaautorizadasDto->setNombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getNombre(),"utf8"):strtoupper($PersonaautorizadasDto->getNombre()))))));
if($this->esFecha($PersonaautorizadasDto->getNombre())){
$PersonaautorizadasDto->setNombre($this->fechaMysql($PersonaautorizadasDto->getNombre()));
}
$PersonaautorizadasDto->setPaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getPaterno(),"utf8"):strtoupper($PersonaautorizadasDto->getPaterno()))))));
if($this->esFecha($PersonaautorizadasDto->getPaterno())){
$PersonaautorizadasDto->setPaterno($this->fechaMysql($PersonaautorizadasDto->getPaterno()));
}
$PersonaautorizadasDto->setMaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getMaterno(),"utf8"):strtoupper($PersonaautorizadasDto->getMaterno()))))));
if($this->esFecha($PersonaautorizadasDto->getMaterno())){
$PersonaautorizadasDto->setMaterno($this->fechaMysql($PersonaautorizadasDto->getMaterno()));
}
$PersonaautorizadasDto->setCedula(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getCedula(),"utf8"):strtoupper($PersonaautorizadasDto->getCedula()))))));
if($this->esFecha($PersonaautorizadasDto->getCedula())){
$PersonaautorizadasDto->setCedula($this->fechaMysql($PersonaautorizadasDto->getCedula()));
}
$PersonaautorizadasDto->setemail(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getemail(),"utf8"):strtoupper($PersonaautorizadasDto->getemail()))))));
if($this->esFecha($PersonaautorizadasDto->getemail())){
$PersonaautorizadasDto->setemail($this->fechaMysql($PersonaautorizadasDto->getemail()));
}
$PersonaautorizadasDto->setFechaAlta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getFechaAlta(),"utf8"):strtoupper($PersonaautorizadasDto->getFechaAlta()))))));
if($this->esFecha($PersonaautorizadasDto->getFechaAlta())){
$PersonaautorizadasDto->setFechaAlta($this->fechaMysql($PersonaautorizadasDto->getFechaAlta()));
}
$PersonaautorizadasDto->setFechaBaja(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getFechaBaja(),"utf8"):strtoupper($PersonaautorizadasDto->getFechaBaja()))))));
if($this->esFecha($PersonaautorizadasDto->getFechaBaja())){
$PersonaautorizadasDto->setFechaBaja($this->fechaMysql($PersonaautorizadasDto->getFechaBaja()));
}
$PersonaautorizadasDto->setFechaModificacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getFechaModificacion(),"utf8"):strtoupper($PersonaautorizadasDto->getFechaModificacion()))))));
if($this->esFecha($PersonaautorizadasDto->getFechaModificacion())){
$PersonaautorizadasDto->setFechaModificacion($this->fechaMysql($PersonaautorizadasDto->getFechaModificacion()));
}
$PersonaautorizadasDto->setActivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getActivo(),"utf8"):strtoupper($PersonaautorizadasDto->getActivo()))))));
if($this->esFecha($PersonaautorizadasDto->getActivo())){
$PersonaautorizadasDto->setActivo($this->fechaMysql($PersonaautorizadasDto->getActivo()));
}
$PersonaautorizadasDto->setemailAlternativo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getemailAlternativo(),"utf8"):strtoupper($PersonaautorizadasDto->getemailAlternativo()))))));
if($this->esFecha($PersonaautorizadasDto->getemailAlternativo())){
$PersonaautorizadasDto->setemailAlternativo($this->fechaMysql($PersonaautorizadasDto->getemailAlternativo()));
}
$PersonaautorizadasDto->setCveTipoAbogado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getCveTipoAbogado(),"utf8"):strtoupper($PersonaautorizadasDto->getCveTipoAbogado()))))));
if($this->esFecha($PersonaautorizadasDto->getCveTipoAbogado())){
$PersonaautorizadasDto->setCveTipoAbogado($this->fechaMysql($PersonaautorizadasDto->getCveTipoAbogado()));
}
$PersonaautorizadasDto->setUsuario(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getUsuario(),"utf8"):strtoupper($PersonaautorizadasDto->getUsuario()))))));
if($this->esFecha($PersonaautorizadasDto->getUsuario())){
$PersonaautorizadasDto->setUsuario($this->fechaMysql($PersonaautorizadasDto->getUsuario()));
}
$PersonaautorizadasDto->setPassword(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getPassword(),"utf8"):strtoupper($PersonaautorizadasDto->getPassword()))))));
if($this->esFecha($PersonaautorizadasDto->getPassword())){
$PersonaautorizadasDto->setPassword($this->fechaMysql($PersonaautorizadasDto->getPassword()));
}
$PersonaautorizadasDto->setDireccion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getDireccion(),"utf8"):strtoupper($PersonaautorizadasDto->getDireccion()))))));
if($this->esFecha($PersonaautorizadasDto->getDireccion())){
$PersonaautorizadasDto->setDireccion($this->fechaMysql($PersonaautorizadasDto->getDireccion()));
}
$PersonaautorizadasDto->setTelefono(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getTelefono(),"utf8"):strtoupper($PersonaautorizadasDto->getTelefono()))))));
if($this->esFecha($PersonaautorizadasDto->getTelefono())){
$PersonaautorizadasDto->setTelefono($this->fechaMysql($PersonaautorizadasDto->getTelefono()));
}
$PersonaautorizadasDto->setUsuarioRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getUsuarioRegistro(),"utf8"):strtoupper($PersonaautorizadasDto->getUsuarioRegistro()))))));
if($this->esFecha($PersonaautorizadasDto->getUsuarioRegistro())){
$PersonaautorizadasDto->setUsuarioRegistro($this->fechaMysql($PersonaautorizadasDto->getUsuarioRegistro()));
}
$PersonaautorizadasDto->setJuzgadoRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getJuzgadoRegistro(),"utf8"):strtoupper($PersonaautorizadasDto->getJuzgadoRegistro()))))));
if($this->esFecha($PersonaautorizadasDto->getJuzgadoRegistro())){
$PersonaautorizadasDto->setJuzgadoRegistro($this->fechaMysql($PersonaautorizadasDto->getJuzgadoRegistro()));
}
$PersonaautorizadasDto->setCiudad(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getCiudad(),"utf8"):strtoupper($PersonaautorizadasDto->getCiudad()))))));
if($this->esFecha($PersonaautorizadasDto->getCiudad())){
$PersonaautorizadasDto->setCiudad($this->fechaMysql($PersonaautorizadasDto->getCiudad()));
}
$PersonaautorizadasDto->setCveEstado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getCveEstado(),"utf8"):strtoupper($PersonaautorizadasDto->getCveEstado()))))));
if($this->esFecha($PersonaautorizadasDto->getCveEstado())){
$PersonaautorizadasDto->setCveEstado($this->fechaMysql($PersonaautorizadasDto->getCveEstado()));
}
$PersonaautorizadasDto->setCveEstatusRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getCveEstatusRegistro(),"utf8"):strtoupper($PersonaautorizadasDto->getCveEstatusRegistro()))))));
if($this->esFecha($PersonaautorizadasDto->getCveEstatusRegistro())){
$PersonaautorizadasDto->setCveEstatusRegistro($this->fechaMysql($PersonaautorizadasDto->getCveEstatusRegistro()));
}
$PersonaautorizadasDto->setCveUsuario(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($PersonaautorizadasDto->getCveUsuario(),"utf8"):strtoupper($PersonaautorizadasDto->getCveUsuario()))))));
if($this->esFecha($PersonaautorizadasDto->getCveUsuario())){
$PersonaautorizadasDto->setCveUsuario($this->fechaMysql($PersonaautorizadasDto->getCveUsuario()));
}
return $PersonaautorizadasDto;
}
public function selectPersonaautorizadas($PersonaautorizadasDto){
$PersonaautorizadasDto=$this->validarPersonaautorizadas($PersonaautorizadasDto);
$PersonaautorizadasController = new PersonaautorizadasController();
$PersonaautorizadasDto = $PersonaautorizadasController->selectPersonaautorizadas($PersonaautorizadasDto);
if($PersonaautorizadasDto!=""){
$dtoToJson = new DtoToJson($PersonaautorizadasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertPersonaautorizadas($PersonaautorizadasDto){
$PersonaautorizadasDto=$this->validarPersonaautorizadas($PersonaautorizadasDto);
$PersonaautorizadasController = new PersonaautorizadasController();
$PersonaautorizadasDto = $PersonaautorizadasController->insertPersonaautorizadas($PersonaautorizadasDto);
if($PersonaautorizadasDto!=""){
$dtoToJson = new DtoToJson($PersonaautorizadasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updatePersonaautorizadas($PersonaautorizadasDto){
$PersonaautorizadasDto=$this->validarPersonaautorizadas($PersonaautorizadasDto);
$PersonaautorizadasController = new PersonaautorizadasController();
$PersonaautorizadasDto = $PersonaautorizadasController->updatePersonaautorizadas($PersonaautorizadasDto);
if($PersonaautorizadasDto!=""){
$dtoToJson = new DtoToJson($PersonaautorizadasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deletePersonaautorizadas($PersonaautorizadasDto){
$PersonaautorizadasDto=$this->validarPersonaautorizadas($PersonaautorizadasDto);
$PersonaautorizadasController = new PersonaautorizadasController();
$PersonaautorizadasDto = $PersonaautorizadasController->deletePersonaautorizadas($PersonaautorizadasDto);
if($PersonaautorizadasDto==true){
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



@$IdPersonaAutorizada=$_POST["IdPersonaAutorizada"];
@$Nombre=$_POST["Nombre"];
@$Paterno=$_POST["Paterno"];
@$Materno=$_POST["Materno"];
@$Cedula=$_POST["Cedula"];
@$email=$_POST["email"];
@$FechaAlta=$_POST["FechaAlta"];
@$FechaBaja=$_POST["FechaBaja"];
@$FechaModificacion=$_POST["FechaModificacion"];
@$Activo=$_POST["Activo"];
@$emailAlternativo=$_POST["emailAlternativo"];
@$CveTipoAbogado=$_POST["CveTipoAbogado"];
@$Usuario=$_POST["Usuario"];
@$Password=$_POST["Password"];
@$Direccion=$_POST["Direccion"];
@$Telefono=$_POST["Telefono"];
@$UsuarioRegistro=$_POST["UsuarioRegistro"];
@$JuzgadoRegistro=$_POST["JuzgadoRegistro"];
@$Ciudad=$_POST["Ciudad"];
@$CveEstado=$_POST["CveEstado"];
@$CveEstatusRegistro=$_POST["CveEstatusRegistro"];
@$CveUsuario=$_POST["CveUsuario"];
@$accion=$_POST["accion"];

$personaautorizadasFacade = new PersonaautorizadasFacade();
$personaautorizadasDto = new PersonaautorizadasDTO();

$personaautorizadasDto->setIdPersonaAutorizada($IdPersonaAutorizada);
$personaautorizadasDto->setNombre($Nombre);
$personaautorizadasDto->setPaterno($Paterno);
$personaautorizadasDto->setMaterno($Materno);
$personaautorizadasDto->setCedula($Cedula);
$personaautorizadasDto->setEmail($email);
$personaautorizadasDto->setFechaAlta($FechaAlta);
$personaautorizadasDto->setFechaBaja($FechaBaja);
$personaautorizadasDto->setFechaModificacion($FechaModificacion);
$personaautorizadasDto->setActivo($Activo);
$personaautorizadasDto->setEmailAlternativo($emailAlternativo);
$personaautorizadasDto->setCveTipoAbogado($CveTipoAbogado);
$personaautorizadasDto->setUsuario($Usuario);
$personaautorizadasDto->setPassword($Password);
$personaautorizadasDto->setDireccion($Direccion);
$personaautorizadasDto->setTelefono($Telefono);
$personaautorizadasDto->setUsuarioRegistro($UsuarioRegistro);
$personaautorizadasDto->setJuzgadoRegistro($JuzgadoRegistro);
$personaautorizadasDto->setCiudad($Ciudad);
$personaautorizadasDto->setCveEstado($CveEstado);
$personaautorizadasDto->setCveEstatusRegistro($CveEstatusRegistro);
$personaautorizadasDto->setCveUsuario($CveUsuario);

if( ($accion=="guardar") && ($idImputadoSentencia=="") ){
$personaautorizadasDto=$personaautorizadasFacade->insertPersonaautorizadas($personaautorizadasDto);
echo $personaautorizadasDto;
} else if(($accion=="guardar") && ($idImputadoSentencia!="")){
$personaautorizadasDto=$personaautorizadasFacade->updatePersonaautorizadas($personaautorizadasDto);
echo $personaautorizadasDto;
} else if($accion=="consultar"){
$personaautorizadasDto=$personaautorizadasFacade->selectPersonaautorizadas($personaautorizadasDto);
echo $personaautorizadasDto;
} else if( ($accion=="baja") && ($idImputadoSentencia!="") ){
$personaautorizadasDto=$personaautorizadasFacade->deletePersonaautorizadas($personaautorizadasDto);
echo $personaautorizadasDto;
} else if( ($accion=="seleccionar") && ($idImputadoSentencia!="") ){
$personaautorizadasDto=$personaautorizadasFacade->selectPersonaautorizadas($personaautorizadasDto);
echo $personaautorizadasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>