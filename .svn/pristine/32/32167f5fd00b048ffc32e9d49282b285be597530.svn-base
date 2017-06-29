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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ultimoroljuzgador/UltimoroljuzgadorDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ultimoroljuzgador/UltimoroljuzgadorController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/secuencias/SecuenciasDTO.Class.php");
class UltimoroljuzgadorFacade {
	private $proveedor;
	public function __construct() {
	}
	public function validarUltimoroljuzgador($UltimoroljuzgadorDto){
		$UltimoroljuzgadorDto->setidUltimoRolJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($UltimoroljuzgadorDto->getidUltimoRolJuzgador(),"utf8"):strtoupper($UltimoroljuzgadorDto->getidUltimoRolJuzgador()))))));
		if($this->esFecha($UltimoroljuzgadorDto->getidUltimoRolJuzgador())){
			$UltimoroljuzgadorDto->setidUltimoRolJuzgador($this->fechaMysql($UltimoroljuzgadorDto->getidUltimoRolJuzgador()));
		}
		$UltimoroljuzgadorDto->setidProgramacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($UltimoroljuzgadorDto->getidProgramacion(),"utf8"):strtoupper($UltimoroljuzgadorDto->getidProgramacion()))))));
		if($this->esFecha($UltimoroljuzgadorDto->getidProgramacion())){
			$UltimoroljuzgadorDto->setidProgramacion($this->fechaMysql($UltimoroljuzgadorDto->getidProgramacion()));
		}
		$UltimoroljuzgadorDto->setcveRolJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($UltimoroljuzgadorDto->getcveRolJuzgador(),"utf8"):strtoupper($UltimoroljuzgadorDto->getcveRolJuzgador()))))));
		if($this->esFecha($UltimoroljuzgadorDto->getcveRolJuzgador())){
			$UltimoroljuzgadorDto->setcveRolJuzgador($this->fechaMysql($UltimoroljuzgadorDto->getcveRolJuzgador()));
		}
		$UltimoroljuzgadorDto->setaparicion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($UltimoroljuzgadorDto->getaparicion(),"utf8"):strtoupper($UltimoroljuzgadorDto->getaparicion()))))));
		if($this->esFecha($UltimoroljuzgadorDto->getaparicion())){
			$UltimoroljuzgadorDto->setaparicion($this->fechaMysql($UltimoroljuzgadorDto->getaparicion()));
		}
		$UltimoroljuzgadorDto->setidJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($UltimoroljuzgadorDto->getidJuzgador(),"utf8"):strtoupper($UltimoroljuzgadorDto->getidJuzgador()))))));
		if($this->esFecha($UltimoroljuzgadorDto->getidJuzgador())){
			$UltimoroljuzgadorDto->setidJuzgador($this->fechaMysql($UltimoroljuzgadorDto->getidJuzgador()));
		}
		$UltimoroljuzgadorDto->setnumSemana(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($UltimoroljuzgadorDto->getnumSemana(),"utf8"):strtoupper($UltimoroljuzgadorDto->getnumSemana()))))));
		if($this->esFecha($UltimoroljuzgadorDto->getnumSemana())){
			$UltimoroljuzgadorDto->setnumSemana($this->fechaMysql($UltimoroljuzgadorDto->getnumSemana()));
		}
		$UltimoroljuzgadorDto->setcveJuzgado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($UltimoroljuzgadorDto->getcveJuzgado(),"utf8"):strtoupper($UltimoroljuzgadorDto->getcveJuzgado()))))));
		if($this->esFecha($UltimoroljuzgadorDto->getcveJuzgado())){
			$UltimoroljuzgadorDto->setcveJuzgado($this->fechaMysql($UltimoroljuzgadorDto->getcveJuzgado()));
		}
		$UltimoroljuzgadorDto->setIdSecuencia(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($UltimoroljuzgadorDto->getIdSecuencia(),"utf8"):strtoupper($UltimoroljuzgadorDto->getIdSecuencia()))))));
		if($this->esFecha($UltimoroljuzgadorDto->getIdSecuencia())){
			$UltimoroljuzgadorDto->setIdSecuencia($this->fechaMysql($UltimoroljuzgadorDto->getIdSecuencia()));
		}
		return $UltimoroljuzgadorDto;
	}
	public function selectUltimoroljuzgador($UltimoroljuzgadorDto){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorController = new UltimoroljuzgadorController();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorController->selectUltimoroljuzgador($UltimoroljuzgadorDto);
		if($UltimoroljuzgadorDto!=""){
			$dtoToJson = new DtoToJson($UltimoroljuzgadorDto);
			return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
		}
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
	}
	public function selectUltimoroljuzgadorSecuencia($UltimoroljuzgadorDto){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorController = new UltimoroljuzgadorController();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorController->selectUltimoroljuzgadorSecuencia($UltimoroljuzgadorDto);
		if($UltimoroljuzgadorDto!=""){
			$dtoToJson = new DtoToJson($UltimoroljuzgadorDto);
			return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
		}
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
	}
	public function selectSecuenciasRoles($UltimoroljuzgadorDto){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorController = new UltimoroljuzgadorController();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorController->selectSecuenciasRoles($UltimoroljuzgadorDto);
		if($UltimoroljuzgadorDto!=""){
			$dtoToJson = new DtoToJson($UltimoroljuzgadorDto);
			return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
		}
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
	}
	public function insertUltimoroljuzgador($UltimoroljuzgadorDto){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorController = new UltimoroljuzgadorController();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorController->insertUltimoroljuzgador($UltimoroljuzgadorDto);
		if($UltimoroljuzgadorDto!=""){
			$dtoToJson = new DtoToJson($UltimoroljuzgadorDto);
			return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
		}
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
	}
	public function updateUltimoroljuzgador($UltimoroljuzgadorDto){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorController = new UltimoroljuzgadorController();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorController->updateUltimoroljuzgador($UltimoroljuzgadorDto);
		if($UltimoroljuzgadorDto!=""){
			$dtoToJson = new DtoToJson($UltimoroljuzgadorDto);
			return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
		}
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
	}
	public function deleteUltimoroljuzgador($UltimoroljuzgadorDto){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorController = new UltimoroljuzgadorController();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorController->deleteUltimoroljuzgador($UltimoroljuzgadorDto);
		if($UltimoroljuzgadorDto==true){
			$jsonDto = new Encode_JSON();
			return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
		}
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
	}
	public function borraUltimoRol($UltimoroljuzgadorDto){
		$UltimoroljuzgadorDto=$this->validarUltimoroljuzgador($UltimoroljuzgadorDto);
		$UltimoroljuzgadorController = new UltimoroljuzgadorController();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorController->borraUltimoRol($UltimoroljuzgadorDto);
		if($UltimoroljuzgadorDto==true){
			$jsonDto = new Encode_JSON();
			return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
		}
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
	}
	public function guardaUltimoRol($parametros){
		$UltimoroljuzgadorController = new UltimoroljuzgadorController();
		$UltimoroljuzgadorDto = $UltimoroljuzgadorController->guardaUltimoRol($parametros);
		if($UltimoroljuzgadorDto==true){
			return $UltimoroljuzgadorDto;
		}
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
	}
        
        public function rolJuzgadorSecuencias($secuenciasDto){
            $UltimoroljuzgadorController = new UltimoroljuzgadorController();
            $secuenciasDto = $UltimoroljuzgadorController->rolJuzgadorSecuencias($secuenciasDto);
            return json_encode($secuenciasDto);
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



@$idUltimoRolJuzgador=$_POST["idUltimoRolJuzgador"];
@$idProgramacion=$_POST["idProgramacion"];
@$cveRolJuzgador=$_POST["cveRolJuzgador"];
@$aparicion=$_POST["aparicion"];
@$idJuzgador=$_POST["idJuzgador"];
@$numSemana=$_POST["numSemana"];
@$cveJuzgado=$_POST["cveJuzgado"];
@$idSecuencia=$_POST["idSecuencia"];
@$parametros=$_POST["parametros"];
@$accion=$_POST["accion"];

$ultimoroljuzgadorFacade = new UltimoroljuzgadorFacade();
$ultimoroljuzgadorDto = new UltimoroljuzgadorDTO();

$ultimoroljuzgadorDto->setIdUltimoRolJuzgador($idUltimoRolJuzgador);
$ultimoroljuzgadorDto->setIdProgramacion($idProgramacion);
$ultimoroljuzgadorDto->setCveRolJuzgador($cveRolJuzgador);
$ultimoroljuzgadorDto->setAparicion($aparicion);
$ultimoroljuzgadorDto->setIdJuzgador($idJuzgador);
$ultimoroljuzgadorDto->setNumSemana($numSemana);
$ultimoroljuzgadorDto->setCveJuzgado($cveJuzgado);
$ultimoroljuzgadorDto->setIdSecuencia($idSecuencia);

if( ($accion=="guardar") && ($idUltimoRolJuzgador=="") ){
	$ultimoroljuzgadorDto=$ultimoroljuzgadorFacade->insertUltimoroljuzgador($ultimoroljuzgadorDto);
	echo $ultimoroljuzgadorDto;
} else if(($accion=="guardar") && ($idUltimoRolJuzgador!="")){
	$ultimoroljuzgadorDto=$ultimoroljuzgadorFacade->updateUltimoroljuzgador($ultimoroljuzgadorDto);
	echo $ultimoroljuzgadorDto;
} else if($accion=="consultar"){
	$ultimoroljuzgadorDto=$ultimoroljuzgadorFacade->selectUltimoroljuzgador($ultimoroljuzgadorDto);
	echo $ultimoroljuzgadorDto;
} else if($accion=="consultarRolJuzgador"){
	$ultimoroljuzgadorDto=$ultimoroljuzgadorFacade->selectUltimoroljuzgadorSecuencia($ultimoroljuzgadorDto);
	echo utf8_encode($ultimoroljuzgadorDto);
} else if($accion=="consultarSecuenciasRoles"){
	$ultimoroljuzgadorDto=$ultimoroljuzgadorFacade->selectSecuenciasRoles($ultimoroljuzgadorDto);
	echo $ultimoroljuzgadorDto;
} else if( ($accion=="baja") && ($idUltimoRolJuzgador!="") ){
	$ultimoroljuzgadorDto=$ultimoroljuzgadorFacade->deleteUltimoroljuzgador($ultimoroljuzgadorDto);
	echo $ultimoroljuzgadorDto;
} else if( $accion=="borraUltimoRol" ){
	$ultimoroljuzgadorDto=$ultimoroljuzgadorFacade->borraUltimoRol($ultimoroljuzgadorDto);
	echo $ultimoroljuzgadorDto;
} else if( $accion=="guardaUltimoRol" ){
	$ultimoroljuzgadorDto=$ultimoroljuzgadorFacade->guardaUltimoRol($parametros);
	echo $ultimoroljuzgadorDto;
} else if( ($accion=="seleccionar") && ($idUltimoRolJuzgador!="") ){
	$ultimoroljuzgadorDto=$ultimoroljuzgadorFacade->selectUltimoroljuzgador($ultimoroljuzgadorDto);
	echo $ultimoroljuzgadorDto;
} else if ( $accion == "rolJuzgadorSecuencias" ) {
    $secuenciasDto = new SecuenciasDTO();
    $secuenciasDto->setCveJuzgado($cveJuzgado);
    $secuenciasDto = $ultimoroljuzgadorFacade->rolJuzgadorSecuencias($secuenciasDto);
    echo $secuenciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>