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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/autosimputados/AutosimputadosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/autosimputados/AutosimputadosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class AutosimputadosFacade {
private $proveedor;
public function __construct() {
}
public function validarAutosimputados($AutosimputadosDto){
$AutosimputadosDto->setidAutoImputado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutosimputadosDto->getidAutoImputado(),"utf8"):strtoupper($AutosimputadosDto->getidAutoImputado()))))));
if($this->esFecha($AutosimputadosDto->getidAutoImputado())){
$AutosimputadosDto->setidAutoImputado($this->fechaMysql($AutosimputadosDto->getidAutoImputado()));
}
$AutosimputadosDto->setidActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutosimputadosDto->getidActuacion(),"utf8"):strtoupper($AutosimputadosDto->getidActuacion()))))));
if($this->esFecha($AutosimputadosDto->getidActuacion())){
$AutosimputadosDto->setidActuacion($this->fechaMysql($AutosimputadosDto->getidActuacion()));
}
$AutosimputadosDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutosimputadosDto->getidImputadoCarpeta(),"utf8"):strtoupper($AutosimputadosDto->getidImputadoCarpeta()))))));
if($this->esFecha($AutosimputadosDto->getidImputadoCarpeta())){
$AutosimputadosDto->setidImputadoCarpeta($this->fechaMysql($AutosimputadosDto->getidImputadoCarpeta()));
}
$AutosimputadosDto->setApelacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutosimputadosDto->getApelacion(),"utf8"):strtoupper($AutosimputadosDto->getApelacion()))))));
if($this->esFecha($AutosimputadosDto->getApelacion())){
$AutosimputadosDto->setApelacion($this->fechaMysql($AutosimputadosDto->getApelacion()));
}
return $AutosimputadosDto;
}
public function selectAutosimputados($AutosimputadosDto){
$AutosimputadosDto=$this->validarAutosimputados($AutosimputadosDto);
$AutosimputadosController = new AutosimputadosController();
$AutosimputadosDto = $AutosimputadosController->selectAutosimputados($AutosimputadosDto);
if($AutosimputadosDto!=""){
$dtoToJson = new DtoToJson($AutosimputadosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertAutosimputados($AutosimputadosDto){
$AutosimputadosDto=$this->validarAutosimputados($AutosimputadosDto);
$AutosimputadosController = new AutosimputadosController();
$AutosimputadosDto = $AutosimputadosController->insertAutosimputados($AutosimputadosDto);
if($AutosimputadosDto!=""){
$dtoToJson = new DtoToJson($AutosimputadosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateAutosimputados($AutosimputadosDto){
$AutosimputadosDto=$this->validarAutosimputados($AutosimputadosDto);
$AutosimputadosController = new AutosimputadosController();
$AutosimputadosDto = $AutosimputadosController->updateAutosimputados($AutosimputadosDto);
if($AutosimputadosDto!=""){
$dtoToJson = new DtoToJson($AutosimputadosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteAutosimputados($AutosimputadosDto){
$AutosimputadosDto=$this->validarAutosimputados($AutosimputadosDto);
$AutosimputadosController = new AutosimputadosController();
$AutosimputadosDto = $AutosimputadosController->deleteAutosimputados($AutosimputadosDto);
if($AutosimputadosDto==true){
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
}

/*********************** INICIO NUEVAS FUNCIONES *****************/
public function deleteAutosimputadosFull($AutosimputadosDto){
	$AutosimputadosDto=$this->validarAutosimputados($AutosimputadosDto);
	$AutosimputadosController = new AutosimputadosController();
	$AutosimputadosDto = $AutosimputadosController->deleteAutosimputadosFull($AutosimputadosDto);
	if($AutosimputadosDto==true){
		$jsonDto = new Encode_JSON();
		return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
	}
	$jsonDto = new Encode_JSON();
	return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
}
/*********************** INICIO NUEVAS FUNCIONES *****************/


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



@$idAutoImputado=$_POST["idAutoImputado"];
@$idActuacion=$_POST["idActuacion"];
@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
@$Apelacion=$_POST["Apelacion"];
@$accion=$_POST["accion"];

$autosimputadosFacade = new AutosimputadosFacade();
$autosimputadosDto = new AutosimputadosDTO();

$autosimputadosDto->setIdAutoImputado($idAutoImputado);
$autosimputadosDto->setIdActuacion($idActuacion);
$autosimputadosDto->setIdImputadoCarpeta($idImputadoCarpeta);
$autosimputadosDto->setApelacion($Apelacion);

if( ($accion=="guardar") && ($idAutoImputado=="") ){
$autosimputadosDto=$autosimputadosFacade->insertAutosimputados($autosimputadosDto);
echo $autosimputadosDto;
} else if(($accion=="guardar") && ($idAutoImputado!="")){
$autosimputadosDto=$autosimputadosFacade->updateAutosimputados($autosimputadosDto);
echo $autosimputadosDto;
} else if($accion=="consultar"){
$autosimputadosDto=$autosimputadosFacade->selectAutosimputados($autosimputadosDto);
echo $autosimputadosDto;
} else if( ($accion=="baja") && ($idAutoImputado!="") ){
$autosimputadosDto=$autosimputadosFacade->deleteAutosimputados($autosimputadosDto);
echo $autosimputadosDto;
} else if( ($accion=="seleccionar") && ($idAutoImputado!="") ){
$autosimputadosDto=$autosimputadosFacade->selectAutosimputados($autosimputadosDto);
echo $autosimputadosDto;
} else if($accion=="borrarFull"){
	$autosimputadosDto=$autosimputadosFacade->deleteAutosimputadosFull($autosimputadosDto);
	echo $autosimputadosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>