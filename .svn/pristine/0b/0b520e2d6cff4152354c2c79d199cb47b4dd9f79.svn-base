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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/especialidades/EspecialidadesDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/especialidades/EspecialidadesController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class EspecialidadesFacade {
private $proveedor;
public function __construct() {
}
public function validarEspecialidades($EspecialidadesDto){
$EspecialidadesDto->setcveEspecialidad(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EspecialidadesDto->getcveEspecialidad(),"utf8"):strtoupper($EspecialidadesDto->getcveEspecialidad()))))));
if($this->esFecha($EspecialidadesDto->getcveEspecialidad())){
$EspecialidadesDto->setcveEspecialidad($this->fechaMysql($EspecialidadesDto->getcveEspecialidad()));
}
$EspecialidadesDto->setdesSala(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EspecialidadesDto->getdesSala(),"utf8"):strtoupper($EspecialidadesDto->getdesSala()))))));
if($this->esFecha($EspecialidadesDto->getdesSala())){
$EspecialidadesDto->setdesSala($this->fechaMysql($EspecialidadesDto->getdesSala()));
}
$EspecialidadesDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EspecialidadesDto->getactivo(),"utf8"):strtoupper($EspecialidadesDto->getactivo()))))));
if($this->esFecha($EspecialidadesDto->getactivo())){
$EspecialidadesDto->setactivo($this->fechaMysql($EspecialidadesDto->getactivo()));
}
$EspecialidadesDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EspecialidadesDto->getfechaRegistro(),"utf8"):strtoupper($EspecialidadesDto->getfechaRegistro()))))));
if($this->esFecha($EspecialidadesDto->getfechaRegistro())){
$EspecialidadesDto->setfechaRegistro($this->fechaMysql($EspecialidadesDto->getfechaRegistro()));
}
$EspecialidadesDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($EspecialidadesDto->getfechaActualizacion(),"utf8"):strtoupper($EspecialidadesDto->getfechaActualizacion()))))));
if($this->esFecha($EspecialidadesDto->getfechaActualizacion())){
$EspecialidadesDto->setfechaActualizacion($this->fechaMysql($EspecialidadesDto->getfechaActualizacion()));
}
return $EspecialidadesDto;
}
public function selectEspecialidades($EspecialidadesDto){
$EspecialidadesDto=$this->validarEspecialidades($EspecialidadesDto);
$EspecialidadesController = new EspecialidadesController();
$EspecialidadesDto = $EspecialidadesController->selectEspecialidades($EspecialidadesDto);
if($EspecialidadesDto!=""){
$dtoToJson = new DtoToJson($EspecialidadesDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
}
public function insertEspecialidades($EspecialidadesDto){
$EspecialidadesDto=$this->validarEspecialidades($EspecialidadesDto);
$EspecialidadesController = new EspecialidadesController();
$EspecialidadesDto = $EspecialidadesController->insertEspecialidades($EspecialidadesDto);
if($EspecialidadesDto!=""){
$dtoToJson = new DtoToJson($EspecialidadesDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
}
public function updateEspecialidades($EspecialidadesDto){
$EspecialidadesDto=$this->validarEspecialidades($EspecialidadesDto);
$EspecialidadesController = new EspecialidadesController();
$EspecialidadesDto = $EspecialidadesController->updateEspecialidades($EspecialidadesDto);
if($EspecialidadesDto!=""){
$dtoToJson = new DtoToJson($EspecialidadesDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
}
public function deleteEspecialidades($EspecialidadesDto){
$EspecialidadesDto=$this->validarEspecialidades($EspecialidadesDto);
$EspecialidadesController = new EspecialidadesController();
$EspecialidadesDto = $EspecialidadesController->deleteEspecialidades($EspecialidadesDto);
if($EspecialidadesDto==true){
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



@$cveEspecialidad=$_POST["cveEspecialidad"];
@$desSala=$_POST["desSala"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$especialidadesFacade = new EspecialidadesFacade();
$especialidadesDto = new EspecialidadesDTO();

$especialidadesDto->setCveEspecialidad($cveEspecialidad);
$especialidadesDto->setDesSala($desSala);
$especialidadesDto->setActivo($activo);
$especialidadesDto->setFechaRegistro($fechaRegistro);
$especialidadesDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($cveEspecialidad=="") ){
$especialidadesDto=$especialidadesFacade->insertEspecialidades($especialidadesDto);
echo $especialidadesDto;
} else if(($accion=="guardar") && ($cveEspecialidad!="")){
$especialidadesDto=$especialidadesFacade->updateEspecialidades($especialidadesDto);
echo $especialidadesDto;
} else if($accion=="consultar"){
$especialidadesDto=$especialidadesFacade->selectEspecialidades($especialidadesDto);
echo $especialidadesDto;
} else if( ($accion=="baja") && ($cveEspecialidad!="") ){
$especialidadesDto=$especialidadesFacade->deleteEspecialidades($especialidadesDto);
echo $especialidadesDto;
} else if( ($accion=="seleccionar") && ($cveEspecialidad!="") ){
$especialidadesDto=$especialidadesFacade->selectEspecialidades($especialidadesDto);
echo $especialidadesDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>