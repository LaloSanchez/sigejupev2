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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/ordenesapeladas/OrdenesapeladasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/ordenesapeladas/OrdenesapeladasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class OrdenesapeladasFacade {
private $proveedor;
public function __construct() {
}
public function validarOrdenesapeladas($OrdenesapeladasDto){
$OrdenesapeladasDto->setidOrdenApelada(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesapeladasDto->getidOrdenApelada(),"utf8"):strtoupper($OrdenesapeladasDto->getidOrdenApelada()))))));
if($this->esFecha($OrdenesapeladasDto->getidOrdenApelada())){
$OrdenesapeladasDto->setidOrdenApelada($this->fechaMysql($OrdenesapeladasDto->getidOrdenApelada()));
}
$OrdenesapeladasDto->setidOrdenImputado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesapeladasDto->getidOrdenImputado(),"utf8"):strtoupper($OrdenesapeladasDto->getidOrdenImputado()))))));
if($this->esFecha($OrdenesapeladasDto->getidOrdenImputado())){
$OrdenesapeladasDto->setidOrdenImputado($this->fechaMysql($OrdenesapeladasDto->getidOrdenImputado()));
}
$OrdenesapeladasDto->setcveSentido(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesapeladasDto->getcveSentido(),"utf8"):strtoupper($OrdenesapeladasDto->getcveSentido()))))));
if($this->esFecha($OrdenesapeladasDto->getcveSentido())){
$OrdenesapeladasDto->setcveSentido($this->fechaMysql($OrdenesapeladasDto->getcveSentido()));
}
$OrdenesapeladasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesapeladasDto->getfechaRegistro(),"utf8"):strtoupper($OrdenesapeladasDto->getfechaRegistro()))))));
if($this->esFecha($OrdenesapeladasDto->getfechaRegistro())){
$OrdenesapeladasDto->setfechaRegistro($this->fechaMysql($OrdenesapeladasDto->getfechaRegistro()));
}
$OrdenesapeladasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($OrdenesapeladasDto->getfechaActualizacion(),"utf8"):strtoupper($OrdenesapeladasDto->getfechaActualizacion()))))));
if($this->esFecha($OrdenesapeladasDto->getfechaActualizacion())){
$OrdenesapeladasDto->setfechaActualizacion($this->fechaMysql($OrdenesapeladasDto->getfechaActualizacion()));
}
return $OrdenesapeladasDto;
}
public function selectOrdenesapeladas($OrdenesapeladasDto){
$OrdenesapeladasDto=$this->validarOrdenesapeladas($OrdenesapeladasDto);
$OrdenesapeladasController = new OrdenesapeladasController();
$OrdenesapeladasDto = $OrdenesapeladasController->selectOrdenesapeladas($OrdenesapeladasDto);
if($OrdenesapeladasDto!=""){
$dtoToJson = new DtoToJson($OrdenesapeladasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertOrdenesapeladas($OrdenesapeladasDto){
$OrdenesapeladasDto=$this->validarOrdenesapeladas($OrdenesapeladasDto);
$OrdenesapeladasController = new OrdenesapeladasController();
$OrdenesapeladasDto = $OrdenesapeladasController->insertOrdenesapeladas($OrdenesapeladasDto);
if($OrdenesapeladasDto!=""){
$dtoToJson = new DtoToJson($OrdenesapeladasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateOrdenesapeladas($OrdenesapeladasDto){
$OrdenesapeladasDto=$this->validarOrdenesapeladas($OrdenesapeladasDto);
$OrdenesapeladasController = new OrdenesapeladasController();
$OrdenesapeladasDto = $OrdenesapeladasController->updateOrdenesapeladas($OrdenesapeladasDto);
if($OrdenesapeladasDto!=""){
$dtoToJson = new DtoToJson($OrdenesapeladasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteOrdenesapeladas($OrdenesapeladasDto){
$OrdenesapeladasDto=$this->validarOrdenesapeladas($OrdenesapeladasDto);
$OrdenesapeladasController = new OrdenesapeladasController();
$OrdenesapeladasDto = $OrdenesapeladasController->deleteOrdenesapeladas($OrdenesapeladasDto);
if($OrdenesapeladasDto==true){
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



@$idOrdenApelada=$_POST["idOrdenApelada"];
@$idOrdenImputado=$_POST["idOrdenImputado"];
@$cveSentido=$_POST["cveSentido"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$ordenesapeladasFacade = new OrdenesapeladasFacade();
$ordenesapeladasDto = new OrdenesapeladasDTO();

$ordenesapeladasDto->setIdOrdenApelada($idOrdenApelada);
$ordenesapeladasDto->setIdOrdenImputado($idOrdenImputado);
$ordenesapeladasDto->setCveSentido($cveSentido);
$ordenesapeladasDto->setFechaRegistro($fechaRegistro);
$ordenesapeladasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idOrdenApelada=="") ){
$ordenesapeladasDto=$ordenesapeladasFacade->insertOrdenesapeladas($ordenesapeladasDto);
echo $ordenesapeladasDto;
} else if(($accion=="guardar") && ($idOrdenApelada!="")){
$ordenesapeladasDto=$ordenesapeladasFacade->updateOrdenesapeladas($ordenesapeladasDto);
echo $ordenesapeladasDto;
} else if($accion=="consultar"){
$ordenesapeladasDto=$ordenesapeladasFacade->selectOrdenesapeladas($ordenesapeladasDto);
echo $ordenesapeladasDto;
} else if( ($accion=="baja") && ($idOrdenApelada!="") ){
$ordenesapeladasDto=$ordenesapeladasFacade->deleteOrdenesapeladas($ordenesapeladasDto);
echo $ordenesapeladasDto;
} else if( ($accion=="seleccionar") && ($idOrdenApelada!="") ){
$ordenesapeladasDto=$ordenesapeladasFacade->selectOrdenesapeladas($ordenesapeladasDto);
echo $ordenesapeladasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>