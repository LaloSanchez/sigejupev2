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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposautos/TiposautosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposautos/TiposautosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposautosFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposautos($TiposautosDto){
$TiposautosDto->setcveTipoAuto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposautosDto->getcveTipoAuto(),"utf8"):strtoupper($TiposautosDto->getcveTipoAuto()))))));
if($this->esFecha($TiposautosDto->getcveTipoAuto())){
$TiposautosDto->setcveTipoAuto($this->fechaMysql($TiposautosDto->getcveTipoAuto()));
}
$TiposautosDto->setdesTipoAuto(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposautosDto->getdesTipoAuto(),"utf8"):strtoupper($TiposautosDto->getdesTipoAuto()))))));
if($this->esFecha($TiposautosDto->getdesTipoAuto())){
$TiposautosDto->setdesTipoAuto($this->fechaMysql($TiposautosDto->getdesTipoAuto()));
}
$TiposautosDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposautosDto->getactivo(),"utf8"):strtoupper($TiposautosDto->getactivo()))))));
if($this->esFecha($TiposautosDto->getactivo())){
$TiposautosDto->setactivo($this->fechaMysql($TiposautosDto->getactivo()));
}
$TiposautosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposautosDto->getfechaRegistro(),"utf8"):strtoupper($TiposautosDto->getfechaRegistro()))))));
if($this->esFecha($TiposautosDto->getfechaRegistro())){
$TiposautosDto->setfechaRegistro($this->fechaMysql($TiposautosDto->getfechaRegistro()));
}
$TiposautosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposautosDto->getfechaActualizacion(),"utf8"):strtoupper($TiposautosDto->getfechaActualizacion()))))));
if($this->esFecha($TiposautosDto->getfechaActualizacion())){
$TiposautosDto->setfechaActualizacion($this->fechaMysql($TiposautosDto->getfechaActualizacion()));
}
return $TiposautosDto;
}
public function selectTiposautos($TiposautosDto){
$TiposautosDto=$this->validarTiposautos($TiposautosDto);
$TiposautosController = new TiposautosController();
$TiposautosDto = $TiposautosController->selectTiposautos($TiposautosDto);
if($TiposautosDto!=""){
$dtoToJson = new DtoToJson($TiposautosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposautos($TiposautosDto){
$TiposautosDto=$this->validarTiposautos($TiposautosDto);
$TiposautosController = new TiposautosController();
$TiposautosDto = $TiposautosController->insertTiposautos($TiposautosDto);
if($TiposautosDto!=""){
$dtoToJson = new DtoToJson($TiposautosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposautos($TiposautosDto){
$TiposautosDto=$this->validarTiposautos($TiposautosDto);
$TiposautosController = new TiposautosController();
$TiposautosDto = $TiposautosController->updateTiposautos($TiposautosDto);
if($TiposautosDto!=""){
$dtoToJson = new DtoToJson($TiposautosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposautos($TiposautosDto){
$TiposautosDto=$this->validarTiposautos($TiposautosDto);
$TiposautosController = new TiposautosController();
$TiposautosDto = $TiposautosController->deleteTiposautos($TiposautosDto);
if($TiposautosDto==true){
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



@$cveTipoAuto=$_POST["cveTipoAuto"];
@$desTipoAuto=$_POST["desTipoAuto"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposautosFacade = new TiposautosFacade();
$tiposautosDto = new TiposautosDTO();

$tiposautosDto->setCveTipoAuto($cveTipoAuto);
$tiposautosDto->setDesTipoAuto($desTipoAuto);
$tiposautosDto->setActivo($activo);
$tiposautosDto->setFechaRegistro($fechaRegistro);
$tiposautosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoAuto=="") ){
$tiposautosDto=$tiposautosFacade->insertTiposautos($tiposautosDto);
echo $tiposautosDto;
} else if(($accion=="guardar") && ($cveTipoAuto!="")){
$tiposautosDto=$tiposautosFacade->updateTiposautos($tiposautosDto);
echo $tiposautosDto;
} else if($accion=="consultar"){
$tiposautosDto=$tiposautosFacade->selectTiposautos($tiposautosDto);
echo $tiposautosDto;
} else if( ($accion=="baja") && ($cveTipoAuto!="") ){
$tiposautosDto=$tiposautosFacade->deleteTiposautos($tiposautosDto);
echo $tiposautosDto;
} else if( ($accion=="seleccionar") && ($cveTipoAuto!="") ){
$tiposautosDto=$tiposautosFacade->selectTiposautos($tiposautosDto);
echo $tiposautosDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>