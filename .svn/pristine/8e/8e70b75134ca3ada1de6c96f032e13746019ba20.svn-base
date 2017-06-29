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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/quejosospromociones/QuejosospromocionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/quejosospromociones/QuejosospromocionesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class QuejosospromocionesFacade {
private $proveedor;
public function __construct() {
}
public function validarQuejosospromociones($QuejosospromocionesDto){
$QuejosospromocionesDto->setIdQuejosoPromociones(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getidQuejosoProm(),"utf8"):strtoupper($QuejosospromocionesDto->getidQuejosoProm()))))));
if($this->esFecha($QuejosospromocionesDto->getidQuejosoProm())){
$QuejosospromocionesDto->setIdQuejosoPromociones($this->fechaMysql($QuejosospromocionesDto->getidQuejosoProm()));
}
$QuejosospromocionesDto->setidActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getidActuacion(),"utf8"):strtoupper($QuejosospromocionesDto->getidActuacion()))))));
if($this->esFecha($QuejosospromocionesDto->getidActuacion())){
$QuejosospromocionesDto->setidActuacion($this->fechaMysql($QuejosospromocionesDto->getidActuacion()));
}
$QuejosospromocionesDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getidImputadoCarpeta(),"utf8"):strtoupper($QuejosospromocionesDto->getidImputadoCarpeta()))))));
if($this->esFecha($QuejosospromocionesDto->getidImputadoCarpeta())){
$QuejosospromocionesDto->setidImputadoCarpeta($this->fechaMysql($QuejosospromocionesDto->getidImputadoCarpeta()));
}
$QuejosospromocionesDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getidOfendidoCarpeta(),"utf8"):strtoupper($QuejosospromocionesDto->getidOfendidoCarpeta()))))));
if($this->esFecha($QuejosospromocionesDto->getidOfendidoCarpeta())){
$QuejosospromocionesDto->setidOfendidoCarpeta($this->fechaMysql($QuejosospromocionesDto->getidOfendidoCarpeta()));
}
$QuejosospromocionesDto->setpaternoQ(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getpaternoQ(),"utf8"):strtoupper($QuejosospromocionesDto->getpaternoQ()))))));
if($this->esFecha($QuejosospromocionesDto->getpaternoQ())){
$QuejosospromocionesDto->setpaternoQ($this->fechaMysql($QuejosospromocionesDto->getpaternoQ()));
}
$QuejosospromocionesDto->setmaternoQ(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getmaternoQ(),"utf8"):strtoupper($QuejosospromocionesDto->getmaternoQ()))))));
if($this->esFecha($QuejosospromocionesDto->getmaternoQ())){
$QuejosospromocionesDto->setmaternoQ($this->fechaMysql($QuejosospromocionesDto->getmaternoQ()));
}
$QuejosospromocionesDto->setnombreQ(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getnombreQ(),"utf8"):strtoupper($QuejosospromocionesDto->getnombreQ()))))));
if($this->esFecha($QuejosospromocionesDto->getnombreQ())){
$QuejosospromocionesDto->setnombreQ($this->fechaMysql($QuejosospromocionesDto->getnombreQ()));
}
$QuejosospromocionesDto->setNombreMoral(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getNombreMoral(),"utf8"):strtoupper($QuejosospromocionesDto->getNombreMoral()))))));
if($this->esFecha($QuejosospromocionesDto->getNombreMoral())){
$QuejosospromocionesDto->setNombreMoral($this->fechaMysql($QuejosospromocionesDto->getNombreMoral()));
}
$QuejosospromocionesDto->setcveTipoPersona(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getcveTipoPersona(),"utf8"):strtoupper($QuejosospromocionesDto->getcveTipoPersona()))))));
if($this->esFecha($QuejosospromocionesDto->getcveTipoPersona())){
$QuejosospromocionesDto->setcveTipoPersona($this->fechaMysql($QuejosospromocionesDto->getcveTipoPersona()));
}
$QuejosospromocionesDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getcveGenero(),"utf8"):strtoupper($QuejosospromocionesDto->getcveGenero()))))));
if($this->esFecha($QuejosospromocionesDto->getcveGenero())){
$QuejosospromocionesDto->setcveGenero($this->fechaMysql($QuejosospromocionesDto->getcveGenero()));
}
$QuejosospromocionesDto->setdomicilio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getdomicilio(),"utf8"):strtoupper($QuejosospromocionesDto->getdomicilio()))))));
if($this->esFecha($QuejosospromocionesDto->getdomicilio())){
$QuejosospromocionesDto->setdomicilio($this->fechaMysql($QuejosospromocionesDto->getdomicilio()));
}
$QuejosospromocionesDto->setemail(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getemail(),"utf8"):strtoupper($QuejosospromocionesDto->getemail()))))));
if($this->esFecha($QuejosospromocionesDto->getemail())){
$QuejosospromocionesDto->setemail($this->fechaMysql($QuejosospromocionesDto->getemail()));
}
$QuejosospromocionesDto->settelefono(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->gettelefono(),"utf8"):strtoupper($QuejosospromocionesDto->gettelefono()))))));
if($this->esFecha($QuejosospromocionesDto->gettelefono())){
$QuejosospromocionesDto->settelefono($this->fechaMysql($QuejosospromocionesDto->gettelefono()));
}
$QuejosospromocionesDto->setcveMunicipio(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getcveMunicipio(),"utf8"):strtoupper($QuejosospromocionesDto->getcveMunicipio()))))));
if($this->esFecha($QuejosospromocionesDto->getcveMunicipio())){
$QuejosospromocionesDto->setcveMunicipio($this->fechaMysql($QuejosospromocionesDto->getcveMunicipio()));
}
$QuejosospromocionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejosospromocionesDto->getactivo(),"utf8"):strtoupper($QuejosospromocionesDto->getactivo()))))));
if($this->esFecha($QuejosospromocionesDto->getactivo())){
$QuejosospromocionesDto->setactivo($this->fechaMysql($QuejosospromocionesDto->getactivo()));
}
return $QuejosospromocionesDto;
}
public function selectQuejosospromociones($QuejosospromocionesDto){
$QuejosospromocionesDto=$this->validarQuejosospromociones($QuejosospromocionesDto);
$QuejosospromocionesController = new QuejosospromocionesController();
$QuejosospromocionesDto = $QuejosospromocionesController->selectQuejosospromociones($QuejosospromocionesDto);
if($QuejosospromocionesDto!=""){
$dtoToJson = new DtoToJson($QuejosospromocionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertQuejosospromociones($QuejosospromocionesDto){
$QuejosospromocionesDto=$this->validarQuejosospromociones($QuejosospromocionesDto);
$QuejosospromocionesController = new QuejosospromocionesController();
$QuejosospromocionesDto = $QuejosospromocionesController->insertQuejosospromociones($QuejosospromocionesDto);
if($QuejosospromocionesDto!=""){
$dtoToJson = new DtoToJson($QuejosospromocionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateQuejosospromociones($QuejosospromocionesDto){
$QuejosospromocionesDto=$this->validarQuejosospromociones($QuejosospromocionesDto);
$QuejosospromocionesController = new QuejosospromocionesController();
$QuejosospromocionesDto = $QuejosospromocionesController->updateQuejosospromociones($QuejosospromocionesDto);
if($QuejosospromocionesDto!=""){
$dtoToJson = new DtoToJson($QuejosospromocionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteQuejosospromociones($QuejosospromocionesDto){
$QuejosospromocionesDto=$this->validarQuejosospromociones($QuejosospromocionesDto);
$QuejosospromocionesController = new QuejosospromocionesController();
$QuejosospromocionesDto = $QuejosospromocionesController->deleteQuejosospromociones($QuejosospromocionesDto);
if($QuejosospromocionesDto==true){
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
}

	public function guardaQueja($QuejosospromocionesDto, $params){
		$QuejosospromocionesController = new QuejosospromocionesController();
		return $QuejosospromocionesController->guardaQueja($QuejosospromocionesDto, $params);
	}
	public function actualizaQueja($QuejosospromocionesDto, $params){
		$QuejosospromocionesController = new QuejosospromocionesController();
		return $QuejosospromocionesController->actualizaQueja($QuejosospromocionesDto, $params);
	}

	public function buscarQuejas($QuejosospromocionesDto, $params){
		$QuejosospromocionesController = new QuejosospromocionesController();
		return $QuejosospromocionesController->buscarQuejas($QuejosospromocionesDto, $params);
	}

	public function eliminaQueja($QuejosospromocionesDto){
		$QuejosospromocionesController = new QuejosospromocionesController();
		return $QuejosospromocionesController->eliminaQueja($QuejosospromocionesDto);
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



@$idQuejosoProm=$_POST["idQuejosoProm"];
@$idActuacion=$_POST["idActuacion"];
@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
@$idOfendidoCarpeta=$_POST["idOfendidoCarpeta"];
@$paternoQ=$_POST["paternoQ"];
@$maternoQ=$_POST["maternoQ"];
@$nombreQ=$_POST["nombreQ"];
@$NombreMoral=$_POST["NombreMoral"];
@$cveTipoPersona=$_POST["cveTipoPersona"];
@$cveGenero=$_POST["cveGenero"];
@$domicilio=$_POST["domicilio"];
@$email=$_POST["email"];
@$telefono=$_POST["telefono"];
@$cveMunicipio=$_POST["cveMunicipio"];
@$activo=$_POST["activo"];
@$accion=$_POST["accion"];

$params["numActuacionManual"] = (isset($_POST["numActuacionManual"])) ? $_POST["numActuacionManual"] : '';
$params["anioActuacionManual"] = (isset($_POST["anioActuacionManual"])) ? $_POST["anioActuacionManual"] : '';
$params["numActuacion"] = (isset($_POST["numActuacion"])) ? $_POST["numActuacion"] : '';
$params["aniActuacion"] = (isset($_POST["aniActuacion"])) ? $_POST["aniActuacion"] : '';
$params["idReferencia"] = (isset($_POST["idReferencia"])) ? $_POST["idReferencia"] : '';
$params["idAsignacionNumero"] = (isset($_POST["idAsignacionNumero"])) ? $_POST["idAsignacionNumero"] : '';
$params["cveJuzgado"] = (isset($_POST["cveJuzgado"])) ? $_POST["cveJuzgado"] : '';
$params["cveCarpeta"] = (isset($_POST["cveCarpeta"])) ? $_POST["cveCarpeta"] : '';
$params["numero"] = (isset($_POST["numero"])) ? $_POST["numero"] : '';
$params["anio"] = (isset($_POST["anio"])) ? $_POST["anio"] : '';
$params["fojas"] = (isset($_POST["fojas"])) ? $_POST["fojas"] : '';
$params["sintesis"] = (isset($_POST["sintesis"])) ? $_POST["sintesis"] : '';
$params["idQuienEmiteQueja"] = (isset($_POST["idQuienEmiteQueja"])) ? $_POST["idQuienEmiteQueja"] : '';
$params["emailNotificacion"] = (isset($_POST["emailNotificacion"])) ? $_POST["emailNotificacion"] : '';
$params["idJuzgador"] = (isset($_POST["cmbJuzgadores"])) ? $_POST["cmbJuzgadores"] : '';
$params["txtQueja"] = (isset($_POST["txtQueja"])) ? $_POST["txtQueja"] : '';
$params["idsQuejosos"] = (isset($_POST["idsQuejosos"])) ? $_POST["idsQuejosos"] : '';
$params["datosQuejosos"] = (isset($_POST["datosQuejosos"])) ? $_POST["datosQuejosos"] : '';
$params["fechaDesde"] = (isset($_POST["fechaDesde"])) ? $_POST["fechaDesde"] : '';
$params["fechaHasta"] = (isset($_POST["fechaHasta"])) ? $_POST["fechaHasta"] : '';
$params["paginacion"] = (isset($_POST["paginacion"])) ? $_POST["paginacion"] : '';
$params["cantxPag"] = (isset($_POST["cantxPag"])) ? $_POST["cantxPag"] : '';
$params["pag"] = (isset($_POST["pag"])) ? $_POST["pag"] : '';

$quejosospromocionesFacade = new QuejosospromocionesFacade();
$quejosospromocionesDto = new QuejosospromocionesDTO();

$quejosospromocionesDto->setIdQuejosoProm($idQuejosoProm);
$quejosospromocionesDto->setIdActuacion($idActuacion);
$quejosospromocionesDto->setIdImputadoCarpeta($idImputadoCarpeta);
$quejosospromocionesDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
$quejosospromocionesDto->setPaternoQ($paternoQ);
$quejosospromocionesDto->setMaternoQ($maternoQ);
$quejosospromocionesDto->setNombreQ($nombreQ);
$quejosospromocionesDto->setNombreMoral($NombreMoral);
$quejosospromocionesDto->setCveTipoPersona($cveTipoPersona);
$quejosospromocionesDto->setCveGenero($cveGenero);
$quejosospromocionesDto->setDomicilio($domicilio);
$quejosospromocionesDto->setEmail($email);
$quejosospromocionesDto->setTelefono($telefono);
$quejosospromocionesDto->setCveMunicipio($cveMunicipio);
$quejosospromocionesDto->setActivo($activo);

if( ($accion=="guardar") && ($idQuejosoProm=="") ){
$quejosospromocionesDto=$quejosospromocionesFacade->insertQuejosospromociones($quejosospromocionesDto);
echo $quejosospromocionesDto;
} else if(($accion=="guardar") && ($idQuejosoProm!="")){
$quejosospromocionesDto=$quejosospromocionesFacade->updateQuejosospromociones($quejosospromocionesDto);
echo $quejosospromocionesDto;
} else if($accion=="consultar"){
$quejosospromocionesDto=$quejosospromocionesFacade->selectQuejosospromociones($quejosospromocionesDto);
echo $quejosospromocionesDto;
} else if( ($accion=="baja") && ($idQuejosoProm!="") ){
$quejosospromocionesDto=$quejosospromocionesFacade->deleteQuejosospromociones($quejosospromocionesDto);
echo $quejosospromocionesDto;
} else if( ($accion=="seleccionar") && ($idQuejosoProm!="") ){
$quejosospromocionesDto=$quejosospromocionesFacade->selectQuejosospromociones($quejosospromocionesDto);
echo $quejosospromocionesDto;
} else if( $accion=="guardaQueja" ){
$quejosospromocionesDto=$quejosospromocionesFacade->guardaQueja($quejosospromocionesDto, $params);
echo $quejosospromocionesDto;
} else if( $accion=="actualizaQueja" ){
$quejosospromocionesDto=$quejosospromocionesFacade->actualizaQueja($quejosospromocionesDto, $params);
echo $quejosospromocionesDto;
} else if( $accion=="buscarQuejas" ){
$quejosospromocionesDto=$quejosospromocionesFacade->buscarQuejas($quejosospromocionesDto, $params);
echo $quejosospromocionesDto;
} else if( $accion=="eliminaQueja" ){
$quejosospromocionesDto=$quejosospromocionesFacade->eliminaQueja($quejosospromocionesDto);
echo $quejosospromocionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>