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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/quejapromociones/QuejapromocionesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/quejapromociones/QuejapromocionesController.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/quejapromociones/QuejainterpuestaController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class QuejapromocionesFacade {
private $proveedor;
public function __construct() {
}
public function validarQuejapromociones($QuejapromocionesDto){
$QuejapromocionesDto->setidQuejaProm(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejapromocionesDto->getidQuejaProm(),"utf8"):strtoupper($QuejapromocionesDto->getidQuejaProm()))))));
if($this->esFecha($QuejapromocionesDto->getidQuejaProm())){
$QuejapromocionesDto->setidQuejaProm($this->fechaMysql($QuejapromocionesDto->getidQuejaProm()));
}
$QuejapromocionesDto->setidActuacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejapromocionesDto->getidActuacion(),"utf8"):strtoupper($QuejapromocionesDto->getidActuacion()))))));
if($this->esFecha($QuejapromocionesDto->getidActuacion())){
$QuejapromocionesDto->setidActuacion($this->fechaMysql($QuejapromocionesDto->getidActuacion()));
}
$QuejapromocionesDto->setidJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejapromocionesDto->getidJuzgador(),"utf8"):strtoupper($QuejapromocionesDto->getidJuzgador()))))));
if($this->esFecha($QuejapromocionesDto->getidJuzgador())){
$QuejapromocionesDto->setidJuzgador($this->fechaMysql($QuejapromocionesDto->getidJuzgador()));
}
$QuejapromocionesDto->setacuerdo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejapromocionesDto->getacuerdo(),"utf8"):strtoupper($QuejapromocionesDto->getacuerdo()))))));
if($this->esFecha($QuejapromocionesDto->getacuerdo())){
$QuejapromocionesDto->setacuerdo($this->fechaMysql($QuejapromocionesDto->getacuerdo()));
}
$QuejapromocionesDto->setfechaAcuerdo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejapromocionesDto->getfechaAcuerdo(),"utf8"):strtoupper($QuejapromocionesDto->getfechaAcuerdo()))))));
if($this->esFecha($QuejapromocionesDto->getfechaAcuerdo())){
$QuejapromocionesDto->setfechaAcuerdo($this->fechaMysql($QuejapromocionesDto->getfechaAcuerdo()));
}
$QuejapromocionesDto->setresolucion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejapromocionesDto->getresolucion(),"utf8"):strtoupper($QuejapromocionesDto->getresolucion()))))));
if($this->esFecha($QuejapromocionesDto->getresolucion())){
$QuejapromocionesDto->setresolucion($this->fechaMysql($QuejapromocionesDto->getresolucion()));
}
$QuejapromocionesDto->setfechaResolucion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejapromocionesDto->getfechaResolucion(),"utf8"):strtoupper($QuejapromocionesDto->getfechaResolucion()))))));
if($this->esFecha($QuejapromocionesDto->getfechaResolucion())){
$QuejapromocionesDto->setfechaResolucion($this->fechaMysql($QuejapromocionesDto->getfechaResolucion()));
}
$QuejapromocionesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($QuejapromocionesDto->getactivo(),"utf8"):strtoupper($QuejapromocionesDto->getactivo()))))));
if($this->esFecha($QuejapromocionesDto->getactivo())){
$QuejapromocionesDto->setactivo($this->fechaMysql($QuejapromocionesDto->getactivo()));
}
return $QuejapromocionesDto;
}
public function selectQuejapromociones($QuejapromocionesDto){
$QuejapromocionesDto=$this->validarQuejapromociones($QuejapromocionesDto);
$QuejapromocionesController = new QuejapromocionesController();
$QuejapromocionesDto = $QuejapromocionesController->selectQuejapromociones($QuejapromocionesDto);
if($QuejapromocionesDto!=""){
$dtoToJson = new DtoToJson($QuejapromocionesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertQuejapromociones($QuejapromocionesDto){
$QuejapromocionesDto=$this->validarQuejapromociones($QuejapromocionesDto);
$QuejapromocionesController = new QuejapromocionesController();
$QuejapromocionesDto = $QuejapromocionesController->insertQuejapromociones($QuejapromocionesDto);
if($QuejapromocionesDto!=""){
$dtoToJson = new DtoToJson($QuejapromocionesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateQuejapromociones($QuejapromocionesDto){
$QuejapromocionesDto=$this->validarQuejapromociones($QuejapromocionesDto);
$QuejapromocionesController = new QuejapromocionesController();
$QuejapromocionesDto = $QuejapromocionesController->updateQuejapromociones($QuejapromocionesDto);
if($QuejapromocionesDto!=""){
$dtoToJson = new DtoToJson($QuejapromocionesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteQuejapromociones($QuejapromocionesDto){
$QuejapromocionesDto=$this->validarQuejapromociones($QuejapromocionesDto);
$QuejapromocionesController = new QuejapromocionesController();
$QuejapromocionesDto = $QuejapromocionesController->deleteQuejapromociones($QuejapromocionesDto);
if($QuejapromocionesDto==true){
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
}

    public function consultarJuzgadoresQuejas() {
        $QuejapromocionesController = new QuejapromocionesController();
        $JuzgadoresDto = $QuejapromocionesController->consultarJuzgadoresQuejas();
        return $JuzgadoresDto;
    }

	public function buscaRelacionParaQueja($QuejapromocionesDto,$params){
		$QuejapromocionesDto=$this->validarQuejapromociones($QuejapromocionesDto);
		$QuejapromocionesController = new QuejapromocionesController();
		return $QuejapromocionesController->buscaRelacionParaQueja($QuejapromocionesDto,$params);
	}

	public function buscaQuejasInterpuestasJuez($QuejapromocionesDto,$params){
		$QuejainterpuestaController = new QuejainterpuestaController();
		return $QuejainterpuestaController->buscaQuejasInterpuestasJuez($QuejapromocionesDto,$params);
	}

	public function buscaQuejasInterpuestas($QuejapromocionesDto,$params){
		$QuejainterpuestaController = new QuejainterpuestaController();
		return $QuejainterpuestaController->buscaQuejasInterpuestas($QuejapromocionesDto,$params);
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



@$idQuejaProm=$_POST["idQuejaProm"];
@$idActuacion=$_POST["idActuacion"];
@$idJuzgador=$_POST["idJuzgador"];
@$acuerdo=$_POST["acuerdo"];
@$fechaAcuerdo=$_POST["fechaAcuerdo"];
@$resolucion=$_POST["resolucion"];
@$fechaResolucion=$_POST["fechaResolucion"];
@$activo=$_POST["activo"];
@$accion=$_POST["accion"];

$params['numEmpleado'] = (isset($_POST['numEmpleado'])) ? $_POST['numEmpleado'] : '';
$params["cveJuzgado"] = (isset($_POST["cveJuzgado"])) ? $_POST["cveJuzgado"] : '';
$params['cveTipoCarpeta'] = (isset($_POST['cveTipoCarpeta'])) ? $_POST['cveTipoCarpeta'] : '';
$params['numero'] = (isset($_POST['numero'])) ? $_POST['numero'] : '';
$params['anio'] = (isset($_POST['anio'])) ? $_POST['anio'] : '';
$params["numActuacion"] = (isset($_POST["numActuacion"])) ? $_POST["numActuacion"] : '';
$params["aniActuacion"] = (isset($_POST["aniActuacion"])) ? $_POST["aniActuacion"] : '';
$params["fechaDesde"] = (isset($_POST["fechaDesde"])) ? $_POST["fechaDesde"] : '';
$params["fechaHasta"] = (isset($_POST["fechaHasta"])) ? $_POST["fechaHasta"] : '';
$params["paginacion"] = (isset($_POST["paginacion"])) ? $_POST["paginacion"] : '';
$params["cantxPag"] = (isset($_POST["cantxPag"])) ? $_POST["cantxPag"] : '';
$params["pag"] = (isset($_POST["pag"])) ? $_POST["pag"] : '';

$quejapromocionesFacade = new QuejapromocionesFacade();
$quejapromocionesDto = new QuejapromocionesDTO();

$quejapromocionesDto->setIdQuejaProm($idQuejaProm);
$quejapromocionesDto->setIdActuacion($idActuacion);
$quejapromocionesDto->setIdJuzgador($idJuzgador);
$quejapromocionesDto->setAcuerdo($acuerdo);
$quejapromocionesDto->setFechaAcuerdo($fechaAcuerdo);
$quejapromocionesDto->setResolucion($resolucion);
$quejapromocionesDto->setFechaResolucion($fechaResolucion);
$quejapromocionesDto->setActivo($activo);

if( ($accion=="guardar") && ($idQuejaProm=="") ){
$quejapromocionesDto=$quejapromocionesFacade->insertQuejapromociones($quejapromocionesDto);
echo $quejapromocionesDto;
} else if(($accion=="guardar") && ($idQuejaProm!="")){
$quejapromocionesDto=$quejapromocionesFacade->updateQuejapromociones($quejapromocionesDto);
echo $quejapromocionesDto;
} else if($accion=="consultar"){
$quejapromocionesDto=$quejapromocionesFacade->selectQuejapromociones($quejapromocionesDto);
echo $quejapromocionesDto;
} else if( ($accion=="baja") && ($idQuejaProm!="") ){
$quejapromocionesDto=$quejapromocionesFacade->deleteQuejapromociones($quejapromocionesDto);
echo $quejapromocionesDto;
} else if( ($accion=="seleccionar") && ($idQuejaProm!="") ){
$quejapromocionesDto=$quejapromocionesFacade->selectQuejapromociones($quejapromocionesDto);
echo $quejapromocionesDto;
} else if ($accion == 'consultarJuzgadoresQuejas') {
    $juzgadoresDto = $quejapromocionesFacade->consultarJuzgadoresQuejas();
    echo $juzgadoresDto;
} else if( $accion=="buscaRelacionParaQueja" ){
	$quejapromocionesDto=$quejapromocionesFacade->buscaRelacionParaQueja($quejapromocionesDto,$params);
	echo $quejapromocionesDto;
} else if( $accion=="buscaQuejasInterpuestasJuez" ){
	$quejapromocionesDto=$quejapromocionesFacade->buscaQuejasInterpuestasJuez($quejapromocionesDto,$params);
	echo $quejapromocionesDto;
} else if( $accion=="buscaQuejasInterpuestas" ){
	$quejapromocionesDto=$quejapromocionesFacade->buscaQuejasInterpuestas($quejapromocionesDto,$params);
	echo $quejapromocionesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>