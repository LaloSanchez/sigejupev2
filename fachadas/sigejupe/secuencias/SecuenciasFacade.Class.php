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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/secuencias/SecuenciasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/secuencias/SecuenciasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class SecuenciasFacade {
	private $proveedor;
	public function __construct() {
	}
	public function validarSecuencias($SecuenciasDto){
		$SecuenciasDto->setidSecuencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SecuenciasDto->getidSecuencia(),"utf8"):strtoupper($SecuenciasDto->getidSecuencia()))))));
		if($this->esFecha($SecuenciasDto->getidSecuencia())){
			$SecuenciasDto->setidSecuencia($this->fechaMysql($SecuenciasDto->getidSecuencia()));
		}
		$SecuenciasDto->setcveRolJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SecuenciasDto->getcveRolJuzgador(),"utf8"):strtoupper($SecuenciasDto->getcveRolJuzgador()))))));
		if($this->esFecha($SecuenciasDto->getcveRolJuzgador())){
			$SecuenciasDto->setcveRolJuzgador($this->fechaMysql($SecuenciasDto->getcveRolJuzgador()));
		}
		$SecuenciasDto->setcveJuzgado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SecuenciasDto->getcveJuzgado(),"utf8"):strtoupper($SecuenciasDto->getcveJuzgado()))))));
		if($this->esFecha($SecuenciasDto->getcveJuzgado())){
			$SecuenciasDto->setcveJuzgado($this->fechaMysql($SecuenciasDto->getcveJuzgado()));
		}
		$SecuenciasDto->setaparicion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SecuenciasDto->getaparicion(),"utf8"):strtoupper($SecuenciasDto->getaparicion()))))));
		if($this->esFecha($SecuenciasDto->getaparicion())){
			$SecuenciasDto->setaparicion($this->fechaMysql($SecuenciasDto->getaparicion()));
		}
		$SecuenciasDto->setorden(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SecuenciasDto->getorden(),"utf8"):strtoupper($SecuenciasDto->getorden()))))));
		if($this->esFecha($SecuenciasDto->getorden())){
			$SecuenciasDto->setorden($this->fechaMysql($SecuenciasDto->getorden()));
		}
		$SecuenciasDto->setdescansaFinSemana(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SecuenciasDto->getdescansaFinSemana(),"utf8"):strtoupper($SecuenciasDto->getdescansaFinSemana()))))));
		if($this->esFecha($SecuenciasDto->getdescansaFinSemana())){
			$SecuenciasDto->setdescansaFinSemana($this->fechaMysql($SecuenciasDto->getdescansaFinSemana()));
		}
		$SecuenciasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SecuenciasDto->getactivo(),"utf8"):strtoupper($SecuenciasDto->getactivo()))))));
		if($this->esFecha($SecuenciasDto->getactivo())){
			$SecuenciasDto->setactivo($this->fechaMysql($SecuenciasDto->getactivo()));
		}
		$SecuenciasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SecuenciasDto->getfechaRegistro(),"utf8"):strtoupper($SecuenciasDto->getfechaRegistro()))))));
		if($this->esFecha($SecuenciasDto->getfechaRegistro())){
			$SecuenciasDto->setfechaRegistro($this->fechaMysql($SecuenciasDto->getfechaRegistro()));
		}
		$SecuenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SecuenciasDto->getfechaActualizacion(),"utf8"):strtoupper($SecuenciasDto->getfechaActualizacion()))))));
		if($this->esFecha($SecuenciasDto->getfechaActualizacion())){
			$SecuenciasDto->setfechaActualizacion($this->fechaMysql($SecuenciasDto->getfechaActualizacion()));
		}
		$SecuenciasDto->setpagina(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($SecuenciasDto->getpagina(),"utf8"):strtoupper($SecuenciasDto->getpagina()))))));
		if($this->esFecha($SecuenciasDto->getpagina())){
			$SecuenciasDto->setpagina($this->fechaMysql($SecuenciasDto->getpagina()));
		}
		return $SecuenciasDto;
	}
	public function selectSecuencias($SecuenciasDto){
		$SecuenciasDto=$this->validarSecuencias($SecuenciasDto);
		$SecuenciasController = new SecuenciasController();
		$SecuenciasDto = $SecuenciasController->selectSecuencias($SecuenciasDto);
		if($SecuenciasDto!=""){
			$dtoToJson = new DtoToJson($SecuenciasDto);
			return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
		}
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
	}
	public function selectSecuenciasGenerico($SecuenciasDto){
		$SecuenciasDto=$this->validarSecuencias($SecuenciasDto);
		$SecuenciasController = new SecuenciasController();
		$SecuenciasDto = $SecuenciasController->selectSecuenciasGenerico($SecuenciasDto);
		if($SecuenciasDto!=""){
			$dtoToJson = new DtoToJson($SecuenciasDto);
			return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
		}
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
	}
	public function insertSecuencias($SecuenciasDto){
		$SecuenciasDto=$this->validarSecuencias($SecuenciasDto);
		$SecuenciasController = new SecuenciasController();
		$SecuenciasDto = $SecuenciasController->insertSecuencias($SecuenciasDto);
		if($SecuenciasDto!=""){
			$dtoToJson = new DtoToJson($SecuenciasDto);
			return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
		}
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
	}
	public function updateSecuencias($SecuenciasDto){
		$SecuenciasDto=$this->validarSecuencias($SecuenciasDto);
		$SecuenciasController = new SecuenciasController();
		$SecuenciasDto = $SecuenciasController->updateSecuencias($SecuenciasDto);
		if($SecuenciasDto!=""){
			$dtoToJson = new DtoToJson($SecuenciasDto);
			return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
		}
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
	}
	public function deleteSecuencias($SecuenciasDto){
		$SecuenciasDto=$this->validarSecuencias($SecuenciasDto);
		$SecuenciasController = new SecuenciasController();
		$SecuenciasDto = $SecuenciasController->deleteSecuencias($SecuenciasDto);
		if($SecuenciasDto==true){
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



@$idSecuencia=$_POST["idSecuencia"];
@$cveRolJuzgador=$_POST["cveRolJuzgador"];
@$cveJuzgado=$_POST["cveJuzgado"];
@$aparicion=$_POST["aparicion"];
@$orden=$_POST["orden"];
@$descansaFinSemana=$_POST["descansaFinSemana"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$pagina=$_POST["pagina"];
@$accion=$_POST["accion"];

$secuenciasFacade = new SecuenciasFacade();
$secuenciasDto = new SecuenciasDTO();

$secuenciasDto->setIdSecuencia($idSecuencia);
$secuenciasDto->setCveRolJuzgador($cveRolJuzgador);
$secuenciasDto->setCveJuzgado($cveJuzgado);
$secuenciasDto->setAparicion($aparicion);
$secuenciasDto->setOrden($orden);
$secuenciasDto->setDescansaFinSemana($descansaFinSemana);
$secuenciasDto->setActivo($activo);
$secuenciasDto->setFechaRegistro($fechaRegistro);
$secuenciasDto->setFechaActualizacion($fechaActualizacion);
$secuenciasDto->setPagina($pagina);

if( ($accion=="guardar") && ($idSecuencia=="") ){
	$secuenciasDto=$secuenciasFacade->insertSecuencias($secuenciasDto);
	echo $secuenciasDto;
} else if(($accion=="guardar") && ($idSecuencia!="")){
	$secuenciasDto=$secuenciasFacade->updateSecuencias($secuenciasDto);
	echo $secuenciasDto;
} else if($accion=="consultar"){
	$secuenciasDto=$secuenciasFacade->selectSecuencias($secuenciasDto);
	echo $secuenciasDto;
} else if($accion=="consultarGenerico"){
	$secuenciasDto=$secuenciasFacade->selectSecuenciasGenerico($secuenciasDto);
	echo $secuenciasDto;
} else if( ($accion=="baja") && ($idSecuencia!="") ){
	$secuenciasDto=$secuenciasFacade->deleteSecuencias($secuenciasDto);
	echo $secuenciasDto;
} else if( ($accion=="seleccionar") && ($idSecuencia!="") ){
	$secuenciasDto=$secuenciasFacade->selectSecuencias($secuenciasDto);
	echo $secuenciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>