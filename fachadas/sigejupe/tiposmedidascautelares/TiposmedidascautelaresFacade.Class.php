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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tiposmedidascautelares/TiposmedidascautelaresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tiposmedidascautelares/TiposmedidascautelaresController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TiposmedidascautelaresFacade {
private $proveedor;
public function __construct() {
}
public function validarTiposmedidascautelares($TiposmedidascautelaresDto){
$TiposmedidascautelaresDto->setcveTipoMedidaCautelar(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposmedidascautelaresDto->getcveTipoMedidaCautelar(),"utf8"):strtoupper($TiposmedidascautelaresDto->getcveTipoMedidaCautelar()))))));
if($this->esFecha($TiposmedidascautelaresDto->getcveTipoMedidaCautelar())){
$TiposmedidascautelaresDto->setcveTipoMedidaCautelar($this->fechaMysql($TiposmedidascautelaresDto->getcveTipoMedidaCautelar()));
}
$TiposmedidascautelaresDto->setdesTipoMedidaCautelar(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposmedidascautelaresDto->getdesTipoMedidaCautelar(),"utf8"):strtoupper($TiposmedidascautelaresDto->getdesTipoMedidaCautelar()))))));
if($this->esFecha($TiposmedidascautelaresDto->getdesTipoMedidaCautelar())){
$TiposmedidascautelaresDto->setdesTipoMedidaCautelar($this->fechaMysql($TiposmedidascautelaresDto->getdesTipoMedidaCautelar()));
}
$TiposmedidascautelaresDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposmedidascautelaresDto->getactivo(),"utf8"):strtoupper($TiposmedidascautelaresDto->getactivo()))))));
if($this->esFecha($TiposmedidascautelaresDto->getactivo())){
$TiposmedidascautelaresDto->setactivo($this->fechaMysql($TiposmedidascautelaresDto->getactivo()));
}
$TiposmedidascautelaresDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposmedidascautelaresDto->getfechaRegistro(),"utf8"):strtoupper($TiposmedidascautelaresDto->getfechaRegistro()))))));
if($this->esFecha($TiposmedidascautelaresDto->getfechaRegistro())){
$TiposmedidascautelaresDto->setfechaRegistro($this->fechaMysql($TiposmedidascautelaresDto->getfechaRegistro()));
}
$TiposmedidascautelaresDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TiposmedidascautelaresDto->getfechaActualizacion(),"utf8"):strtoupper($TiposmedidascautelaresDto->getfechaActualizacion()))))));
if($this->esFecha($TiposmedidascautelaresDto->getfechaActualizacion())){
$TiposmedidascautelaresDto->setfechaActualizacion($this->fechaMysql($TiposmedidascautelaresDto->getfechaActualizacion()));
}
return $TiposmedidascautelaresDto;
}
public function selectTiposmedidascautelares($TiposmedidascautelaresDto){
$TiposmedidascautelaresDto=$this->validarTiposmedidascautelares($TiposmedidascautelaresDto);
$TiposmedidascautelaresController = new TiposmedidascautelaresController();
$TiposmedidascautelaresDto = $TiposmedidascautelaresController->selectTiposmedidascautelares($TiposmedidascautelaresDto);
if($TiposmedidascautelaresDto!=""){
$dtoToJson = new DtoToJson($TiposmedidascautelaresDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertTiposmedidascautelares($TiposmedidascautelaresDto){
$TiposmedidascautelaresDto=$this->validarTiposmedidascautelares($TiposmedidascautelaresDto);
$TiposmedidascautelaresController = new TiposmedidascautelaresController();
$TiposmedidascautelaresDto = $TiposmedidascautelaresController->insertTiposmedidascautelares($TiposmedidascautelaresDto);
if($TiposmedidascautelaresDto!=""){
$dtoToJson = new DtoToJson($TiposmedidascautelaresDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateTiposmedidascautelares($TiposmedidascautelaresDto){
$TiposmedidascautelaresDto=$this->validarTiposmedidascautelares($TiposmedidascautelaresDto);
$TiposmedidascautelaresController = new TiposmedidascautelaresController();
$TiposmedidascautelaresDto = $TiposmedidascautelaresController->updateTiposmedidascautelares($TiposmedidascautelaresDto);
if($TiposmedidascautelaresDto!=""){
$dtoToJson = new DtoToJson($TiposmedidascautelaresDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteTiposmedidascautelares($TiposmedidascautelaresDto){
$TiposmedidascautelaresDto=$this->validarTiposmedidascautelares($TiposmedidascautelaresDto);
$TiposmedidascautelaresController = new TiposmedidascautelaresController();
$TiposmedidascautelaresDto = $TiposmedidascautelaresController->deleteTiposmedidascautelares($TiposmedidascautelaresDto);
if($TiposmedidascautelaresDto==true){
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



@$cveTipoMedidaCautelar=$_POST["cveTipoMedidaCautelar"];
@$desTipoMedidaCautelar=$_POST["desTipoMedidaCautelar"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tiposmedidascautelaresFacade = new TiposmedidascautelaresFacade();
$tiposmedidascautelaresDto = new TiposmedidascautelaresDTO();

$tiposmedidascautelaresDto->setCveTipoMedidaCautelar($cveTipoMedidaCautelar);
$tiposmedidascautelaresDto->setDesTipoMedidaCautelar($desTipoMedidaCautelar);
$tiposmedidascautelaresDto->setActivo($activo);
$tiposmedidascautelaresDto->setFechaRegistro($fechaRegistro);
$tiposmedidascautelaresDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveTipoMedidaCautelar=="") ){
$tiposmedidascautelaresDto=$tiposmedidascautelaresFacade->insertTiposmedidascautelares($tiposmedidascautelaresDto);
echo $tiposmedidascautelaresDto;
} else if(($accion=="guardar") && ($cveTipoMedidaCautelar!="")){
$tiposmedidascautelaresDto=$tiposmedidascautelaresFacade->updateTiposmedidascautelares($tiposmedidascautelaresDto);
echo $tiposmedidascautelaresDto;
} else if($accion=="consultar"){
$tiposmedidascautelaresDto=$tiposmedidascautelaresFacade->selectTiposmedidascautelares($tiposmedidascautelaresDto);
echo $tiposmedidascautelaresDto;
} else if( ($accion=="baja") && ($cveTipoMedidaCautelar!="") ){
$tiposmedidascautelaresDto=$tiposmedidascautelaresFacade->deleteTiposmedidascautelares($tiposmedidascautelaresDto);
echo $tiposmedidascautelaresDto;
} else if( ($accion=="seleccionar") && ($cveTipoMedidaCautelar!="") ){
$tiposmedidascautelaresDto=$tiposmedidascautelaresFacade->selectTiposmedidascautelares($tiposmedidascautelaresDto);
echo $tiposmedidascautelaresDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>