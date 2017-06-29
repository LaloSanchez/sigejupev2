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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tutoresofendidosmuestras/TutoresofendidosmuestrasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tutoresofendidosmuestras/TutoresofendidosmuestrasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TutoresofendidosmuestrasFacade {
private $proveedor;
public function __construct() {
}
public function validarTutoresofendidosmuestras($TutoresofendidosmuestrasDto){
$TutoresofendidosmuestrasDto->setidTutorOfendidoMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getidTutorOfendidoMuestra(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getidTutorOfendidoMuestra()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getidTutorOfendidoMuestra())){
$TutoresofendidosmuestrasDto->setidTutorOfendidoMuestra($this->fechaMysql($TutoresofendidosmuestrasDto->getidTutorOfendidoMuestra()));
}
$TutoresofendidosmuestrasDto->setidOfendidoMuestra(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getidOfendidoMuestra(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getidOfendidoMuestra()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getidOfendidoMuestra())){
$TutoresofendidosmuestrasDto->setidOfendidoMuestra($this->fechaMysql($TutoresofendidosmuestrasDto->getidOfendidoMuestra()));
}
$TutoresofendidosmuestrasDto->setcveTipoTutor(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getcveTipoTutor(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getcveTipoTutor()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getcveTipoTutor())){
$TutoresofendidosmuestrasDto->setcveTipoTutor($this->fechaMysql($TutoresofendidosmuestrasDto->getcveTipoTutor()));
}
$TutoresofendidosmuestrasDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getnombre(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getnombre()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getnombre())){
$TutoresofendidosmuestrasDto->setnombre($this->fechaMysql($TutoresofendidosmuestrasDto->getnombre()));
}
$TutoresofendidosmuestrasDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getpaterno(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getpaterno()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getpaterno())){
$TutoresofendidosmuestrasDto->setpaterno($this->fechaMysql($TutoresofendidosmuestrasDto->getpaterno()));
}
$TutoresofendidosmuestrasDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getmaterno(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getmaterno()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getmaterno())){
$TutoresofendidosmuestrasDto->setmaterno($this->fechaMysql($TutoresofendidosmuestrasDto->getmaterno()));
}
$TutoresofendidosmuestrasDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getcveGenero(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getcveGenero()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getcveGenero())){
$TutoresofendidosmuestrasDto->setcveGenero($this->fechaMysql($TutoresofendidosmuestrasDto->getcveGenero()));
}
$TutoresofendidosmuestrasDto->setfechaNacimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getfechaNacimiento(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getfechaNacimiento()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getfechaNacimiento())){
$TutoresofendidosmuestrasDto->setfechaNacimiento($this->fechaMysql($TutoresofendidosmuestrasDto->getfechaNacimiento()));
}
$TutoresofendidosmuestrasDto->setdomicilio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getdomicilio(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getdomicilio()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getdomicilio())){
$TutoresofendidosmuestrasDto->setdomicilio($this->fechaMysql($TutoresofendidosmuestrasDto->getdomicilio()));
}
$TutoresofendidosmuestrasDto->settelefono(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->gettelefono(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->gettelefono()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->gettelefono())){
$TutoresofendidosmuestrasDto->settelefono($this->fechaMysql($TutoresofendidosmuestrasDto->gettelefono()));
}
$TutoresofendidosmuestrasDto->setemail(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getemail(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getemail()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getemail())){
$TutoresofendidosmuestrasDto->setemail($this->fechaMysql($TutoresofendidosmuestrasDto->getemail()));
}
$TutoresofendidosmuestrasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getactivo(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getactivo()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getactivo())){
$TutoresofendidosmuestrasDto->setactivo($this->fechaMysql($TutoresofendidosmuestrasDto->getactivo()));
}
$TutoresofendidosmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getfechaRegistro(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getfechaRegistro()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getfechaRegistro())){
$TutoresofendidosmuestrasDto->setfechaRegistro($this->fechaMysql($TutoresofendidosmuestrasDto->getfechaRegistro()));
}
$TutoresofendidosmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidosmuestrasDto->getfechaActualizacion(),"utf8"):strtoupper($TutoresofendidosmuestrasDto->getfechaActualizacion()))))));
if($this->esFecha($TutoresofendidosmuestrasDto->getfechaActualizacion())){
$TutoresofendidosmuestrasDto->setfechaActualizacion($this->fechaMysql($TutoresofendidosmuestrasDto->getfechaActualizacion()));
}
return $TutoresofendidosmuestrasDto;
}
public function selectTutoresofendidosmuestras($TutoresofendidosmuestrasDto){
$TutoresofendidosmuestrasDto=$this->validarTutoresofendidosmuestras($TutoresofendidosmuestrasDto);
$TutoresofendidosmuestrasController = new TutoresofendidosmuestrasController();
$TutoresofendidosmuestrasDto = $TutoresofendidosmuestrasController->selectTutoresofendidosmuestras($TutoresofendidosmuestrasDto);
if($TutoresofendidosmuestrasDto!=""){
$dtoToJson = new DtoToJson($TutoresofendidosmuestrasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTutoresofendidosmuestras($TutoresofendidosmuestrasDto){
$TutoresofendidosmuestrasDto=$this->validarTutoresofendidosmuestras($TutoresofendidosmuestrasDto);
$TutoresofendidosmuestrasController = new TutoresofendidosmuestrasController();
$TutoresofendidosmuestrasDto = $TutoresofendidosmuestrasController->insertTutoresofendidosmuestras($TutoresofendidosmuestrasDto);
if($TutoresofendidosmuestrasDto!=""){
$dtoToJson = new DtoToJson($TutoresofendidosmuestrasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTutoresofendidosmuestras($TutoresofendidosmuestrasDto){
$TutoresofendidosmuestrasDto=$this->validarTutoresofendidosmuestras($TutoresofendidosmuestrasDto);
$TutoresofendidosmuestrasController = new TutoresofendidosmuestrasController();
$TutoresofendidosmuestrasDto = $TutoresofendidosmuestrasController->updateTutoresofendidosmuestras($TutoresofendidosmuestrasDto);
if($TutoresofendidosmuestrasDto!=""){
$dtoToJson = new DtoToJson($TutoresofendidosmuestrasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTutoresofendidosmuestras($TutoresofendidosmuestrasDto){
$TutoresofendidosmuestrasDto=$this->validarTutoresofendidosmuestras($TutoresofendidosmuestrasDto);
$TutoresofendidosmuestrasController = new TutoresofendidosmuestrasController();
$TutoresofendidosmuestrasDto = $TutoresofendidosmuestrasController->deleteTutoresofendidosmuestras($TutoresofendidosmuestrasDto);
if($TutoresofendidosmuestrasDto==true){
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



@$idTutorOfendidoMuestra=$_POST["idTutorOfendidoMuestra"];
@$idOfendidoMuestra=$_POST["idOfendidoMuestra"];
@$cveTipoTutor=$_POST["cveTipoTutor"];
@$nombre=$_POST["nombre"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$cveGenero=$_POST["cveGenero"];
@$fechaNacimiento=$_POST["fechaNacimiento"];
@$domicilio=$_POST["domicilio"];
@$telefono=$_POST["telefono"];
@$email=$_POST["email"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tutoresofendidosmuestrasFacade = new TutoresofendidosmuestrasFacade();
$tutoresofendidosmuestrasDto = new TutoresofendidosmuestrasDTO();

$tutoresofendidosmuestrasDto->setIdTutorOfendidoMuestra($idTutorOfendidoMuestra);
$tutoresofendidosmuestrasDto->setIdOfendidoMuestra($idOfendidoMuestra);
$tutoresofendidosmuestrasDto->setCveTipoTutor($cveTipoTutor);
$tutoresofendidosmuestrasDto->setNombre($nombre);
$tutoresofendidosmuestrasDto->setPaterno($paterno);
$tutoresofendidosmuestrasDto->setMaterno($materno);
$tutoresofendidosmuestrasDto->setCveGenero($cveGenero);
$tutoresofendidosmuestrasDto->setFechaNacimiento($fechaNacimiento);
$tutoresofendidosmuestrasDto->setDomicilio($domicilio);
$tutoresofendidosmuestrasDto->setTelefono($telefono);
$tutoresofendidosmuestrasDto->setEmail($email);
$tutoresofendidosmuestrasDto->setActivo($activo);
$tutoresofendidosmuestrasDto->setFechaRegistro($fechaRegistro);
$tutoresofendidosmuestrasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idTutorOfendidoMuestra=="") ){
$tutoresofendidosmuestrasDto=$tutoresofendidosmuestrasFacade->insertTutoresofendidosmuestras($tutoresofendidosmuestrasDto);
echo $tutoresofendidosmuestrasDto;
} else if(($accion=="guardar") && ($idTutorOfendidoMuestra!="")){
$tutoresofendidosmuestrasDto=$tutoresofendidosmuestrasFacade->updateTutoresofendidosmuestras($tutoresofendidosmuestrasDto);
echo $tutoresofendidosmuestrasDto;
} else if($accion=="consultar"){
$tutoresofendidosmuestrasDto=$tutoresofendidosmuestrasFacade->selectTutoresofendidosmuestras($tutoresofendidosmuestrasDto);
echo $tutoresofendidosmuestrasDto;
} else if( ($accion=="baja") && ($idTutorOfendidoMuestra!="") ){
$tutoresofendidosmuestrasDto=$tutoresofendidosmuestrasFacade->deleteTutoresofendidosmuestras($tutoresofendidosmuestrasDto);
echo $tutoresofendidosmuestrasDto;
} else if( ($accion=="seleccionar") && ($idTutorOfendidoMuestra!="") ){
$tutoresofendidosmuestrasDto=$tutoresofendidosmuestrasFacade->selectTutoresofendidosmuestras($tutoresofendidosmuestrasDto);
echo $tutoresofendidosmuestrasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>