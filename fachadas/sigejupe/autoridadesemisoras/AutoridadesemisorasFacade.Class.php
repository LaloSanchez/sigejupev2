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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/autoridadesemisoras/AutoridadesemisorasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/autoridadesemisoras/AutoridadesemisorasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class AutoridadesemisorasFacade {
private $proveedor;
public function __construct() {
}
public function validarAutoridadesemisoras($AutoridadesemisorasDto){
$AutoridadesemisorasDto->setcveAutoridadEmisora(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutoridadesemisorasDto->getcveAutoridadEmisora(),"utf8"):strtoupper($AutoridadesemisorasDto->getcveAutoridadEmisora()))))));
if($this->esFecha($AutoridadesemisorasDto->getcveAutoridadEmisora())){
$AutoridadesemisorasDto->setcveAutoridadEmisora($this->fechaMysql($AutoridadesemisorasDto->getcveAutoridadEmisora()));
}
$AutoridadesemisorasDto->setdesAutoridadEmisora(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutoridadesemisorasDto->getdesAutoridadEmisora(),"utf8"):strtoupper($AutoridadesemisorasDto->getdesAutoridadEmisora()))))));
if($this->esFecha($AutoridadesemisorasDto->getdesAutoridadEmisora())){
$AutoridadesemisorasDto->setdesAutoridadEmisora($this->fechaMysql($AutoridadesemisorasDto->getdesAutoridadEmisora()));
}
$AutoridadesemisorasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutoridadesemisorasDto->getactivo(),"utf8"):strtoupper($AutoridadesemisorasDto->getactivo()))))));
if($this->esFecha($AutoridadesemisorasDto->getactivo())){
$AutoridadesemisorasDto->setactivo($this->fechaMysql($AutoridadesemisorasDto->getactivo()));
}
$AutoridadesemisorasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutoridadesemisorasDto->getfechaRegistro(),"utf8"):strtoupper($AutoridadesemisorasDto->getfechaRegistro()))))));
if($this->esFecha($AutoridadesemisorasDto->getfechaRegistro())){
$AutoridadesemisorasDto->setfechaRegistro($this->fechaMysql($AutoridadesemisorasDto->getfechaRegistro()));
}
$AutoridadesemisorasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutoridadesemisorasDto->getfechaActualizacion(),"utf8"):strtoupper($AutoridadesemisorasDto->getfechaActualizacion()))))));
if($this->esFecha($AutoridadesemisorasDto->getfechaActualizacion())){
$AutoridadesemisorasDto->setfechaActualizacion($this->fechaMysql($AutoridadesemisorasDto->getfechaActualizacion()));
}
return $AutoridadesemisorasDto;
}
public function selectAutoridadesemisoras($AutoridadesemisorasDto){
$AutoridadesemisorasDto=$this->validarAutoridadesemisoras($AutoridadesemisorasDto);
$AutoridadesemisorasController = new AutoridadesemisorasController();
$AutoridadesemisorasDto = $AutoridadesemisorasController->selectAutoridadesemisoras($AutoridadesemisorasDto);
if($AutoridadesemisorasDto!=""){
$dtoToJson = new DtoToJson($AutoridadesemisorasDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertAutoridadesemisoras($AutoridadesemisorasDto){
$AutoridadesemisorasDto=$this->validarAutoridadesemisoras($AutoridadesemisorasDto);
$AutoridadesemisorasController = new AutoridadesemisorasController();
$AutoridadesemisorasDto = $AutoridadesemisorasController->insertAutoridadesemisoras($AutoridadesemisorasDto);
if($AutoridadesemisorasDto!=""){
$dtoToJson = new DtoToJson($AutoridadesemisorasDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateAutoridadesemisoras($AutoridadesemisorasDto){
$AutoridadesemisorasDto=$this->validarAutoridadesemisoras($AutoridadesemisorasDto);
$AutoridadesemisorasController = new AutoridadesemisorasController();
$AutoridadesemisorasDto = $AutoridadesemisorasController->updateAutoridadesemisoras($AutoridadesemisorasDto);
if($AutoridadesemisorasDto!=""){
$dtoToJson = new DtoToJson($AutoridadesemisorasDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteAutoridadesemisoras($AutoridadesemisorasDto){
$AutoridadesemisorasDto=$this->validarAutoridadesemisoras($AutoridadesemisorasDto);
$AutoridadesemisorasController = new AutoridadesemisorasController();
$AutoridadesemisorasDto = $AutoridadesemisorasController->deleteAutoridadesemisoras($AutoridadesemisorasDto);
if($AutoridadesemisorasDto==true){
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



@$cveAutoridadEmisora=$_POST["cveAutoridadEmisora"];
@$desAutoridadEmisora=$_POST["desAutoridadEmisora"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$autoridadesemisorasFacade = new AutoridadesemisorasFacade();
$autoridadesemisorasDto = new AutoridadesemisorasDTO();

$autoridadesemisorasDto->setCveAutoridadEmisora($cveAutoridadEmisora);
$autoridadesemisorasDto->setDesAutoridadEmisora($desAutoridadEmisora);
$autoridadesemisorasDto->setActivo($activo);
$autoridadesemisorasDto->setFechaRegistro($fechaRegistro);
$autoridadesemisorasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveAutoridadEmisora=="") ){
$autoridadesemisorasDto=$autoridadesemisorasFacade->insertAutoridadesemisoras($autoridadesemisorasDto);
echo $autoridadesemisorasDto;
} else if(($accion=="guardar") && ($cveAutoridadEmisora!="")){
$autoridadesemisorasDto=$autoridadesemisorasFacade->updateAutoridadesemisoras($autoridadesemisorasDto);
echo $autoridadesemisorasDto;
} else if($accion=="consultar"){
$autoridadesemisorasDto=$autoridadesemisorasFacade->selectAutoridadesemisoras($autoridadesemisorasDto);
echo $autoridadesemisorasDto;
} else if( ($accion=="baja") && ($cveAutoridadEmisora!="") ){
$autoridadesemisorasDto=$autoridadesemisorasFacade->deleteAutoridadesemisoras($autoridadesemisorasDto);
echo $autoridadesemisorasDto;
} else if( ($accion=="seleccionar") && ($cveAutoridadEmisora!="") ){
$autoridadesemisorasDto=$autoridadesemisorasFacade->selectAutoridadesemisoras($autoridadesemisorasDto);
echo $autoridadesemisorasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>