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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/autosapelados/AutosapeladosDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/autosapelados/AutosapeladosController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class AutosapeladosFacade {
private $proveedor;
public function __construct() {
}
public function validarAutosapelados($AutosapeladosDto){
$AutosapeladosDto->setidAutoApelado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutosapeladosDto->getidAutoApelado(),"utf8"):strtoupper($AutosapeladosDto->getidAutoApelado()))))));
if($this->esFecha($AutosapeladosDto->getidAutoApelado())){
$AutosapeladosDto->setidAutoApelado($this->fechaMysql($AutosapeladosDto->getidAutoApelado()));
}
$AutosapeladosDto->setidAutoImputado(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutosapeladosDto->getidAutoImputado(),"utf8"):strtoupper($AutosapeladosDto->getidAutoImputado()))))));
if($this->esFecha($AutosapeladosDto->getidAutoImputado())){
$AutosapeladosDto->setidAutoImputado($this->fechaMysql($AutosapeladosDto->getidAutoImputado()));
}
$AutosapeladosDto->setcveSentido(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutosapeladosDto->getcveSentido(),"utf8"):strtoupper($AutosapeladosDto->getcveSentido()))))));
if($this->esFecha($AutosapeladosDto->getcveSentido())){
$AutosapeladosDto->setcveSentido($this->fechaMysql($AutosapeladosDto->getcveSentido()));
}
$AutosapeladosDto->setNumToca(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutosapeladosDto->getNumToca(),"utf8"):strtoupper($AutosapeladosDto->getNumToca()))))));
if($this->esFecha($AutosapeladosDto->getNumToca())){
$AutosapeladosDto->setNumToca($this->fechaMysql($AutosapeladosDto->getNumToca()));
}
$AutosapeladosDto->setAnioToca(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutosapeladosDto->getAnioToca(),"utf8"):strtoupper($AutosapeladosDto->getAnioToca()))))));
if($this->esFecha($AutosapeladosDto->getAnioToca())){
$AutosapeladosDto->setAnioToca($this->fechaMysql($AutosapeladosDto->getAnioToca()));
}
$AutosapeladosDto->setCveSala(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutosapeladosDto->getCveSala(),"utf8"):strtoupper($AutosapeladosDto->getCveSala()))))));
if($this->esFecha($AutosapeladosDto->getCveSala())){
$AutosapeladosDto->setCveSala($this->fechaMysql($AutosapeladosDto->getCveSala()));
}
$AutosapeladosDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutosapeladosDto->getfechaRegistro(),"utf8"):strtoupper($AutosapeladosDto->getfechaRegistro()))))));
if($this->esFecha($AutosapeladosDto->getfechaRegistro())){
$AutosapeladosDto->setfechaRegistro($this->fechaMysql($AutosapeladosDto->getfechaRegistro()));
}
$AutosapeladosDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($AutosapeladosDto->getfechaActualizacion(),"utf8"):strtoupper($AutosapeladosDto->getfechaActualizacion()))))));
if($this->esFecha($AutosapeladosDto->getfechaActualizacion())){
$AutosapeladosDto->setfechaActualizacion($this->fechaMysql($AutosapeladosDto->getfechaActualizacion()));
}
return $AutosapeladosDto;
}
public function selectAutosapelados($AutosapeladosDto){
$AutosapeladosDto=$this->validarAutosapelados($AutosapeladosDto);
$AutosapeladosController = new AutosapeladosController();
$AutosapeladosDto = $AutosapeladosController->selectAutosapelados($AutosapeladosDto);
if($AutosapeladosDto!=""){
$dtoToJson = new DtoToJson($AutosapeladosDto);
return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA - AUTOSAPELADOS");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR - AUTOSAPELADOS"));
}
public function insertAutosapelados($AutosapeladosDto){
$AutosapeladosDto=$this->validarAutosapelados($AutosapeladosDto);
$AutosapeladosController = new AutosapeladosController();
$AutosapeladosDto = $AutosapeladosController->insertAutosapelados($AutosapeladosDto);
if($AutosapeladosDto!=""){
$dtoToJson = new DtoToJson($AutosapeladosDto);
return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA - AUTOSAPELADOS");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO - AUTOSAPELADOS"));
}
public function updateAutosapelados($AutosapeladosDto){
$AutosapeladosDto=$this->validarAutosapelados($AutosapeladosDto);
$AutosapeladosController = new AutosapeladosController();
$AutosapeladosDto = $AutosapeladosController->updateAutosapelados($AutosapeladosDto);
if($AutosapeladosDto!=""){
$dtoToJson = new DtoToJson($AutosapeladosDto);
return $dtoToJson->toJson("REGISTRO ACTUALIZADO - AUTOSAPELADOS");
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION - AUTOSAPELADOS"));
}
public function deleteAutosapelados($AutosapeladosDto){
$AutosapeladosDto=$this->validarAutosapelados($AutosapeladosDto);
$AutosapeladosController = new AutosapeladosController();
$AutosapeladosDto = $AutosapeladosController->deleteAutosapelados($AutosapeladosDto);
if($AutosapeladosDto==true){
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA - AUTOSAPELADOS"));
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA - AUTOSAPELADOS"));
}
/************** FUNCIONES NUEVAS *********************/

public function deleteAutosapeladosImputado($AutosapeladosDto){
$AutosapeladosDto=$this->validarAutosapelados($AutosapeladosDto);
$AutosapeladosController = new AutosapeladosController();
$AutosapeladosDto = $AutosapeladosController->deleteAutosapeladosImputado($AutosapeladosDto);
if($AutosapeladosDto==true){
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA - AUTOSAPELADOS"));
}
$jsonDto = new Encode_JSON();
return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA - AUTOSAPELADOS"));
}
/************* FIN FUNCIONES NUEVAS *******************/
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



@$idAutoApelado=$_POST["idAutoApelado"];
@$idAutoImputado=$_POST["idAutoImputado"];
@$cveSentido=$_POST["cveSentido"];
@$NumToca=$_POST["NumToca"];
@$AnioToca=$_POST["AnioToca"];
@$CveSala=$_POST["CveSala"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$autosapeladosFacade = new AutosapeladosFacade();
$autosapeladosDto = new AutosapeladosDTO();
$autosapeladosDto->setIdAutoApelado($idAutoApelado);
$autosapeladosDto->setIdAutoImputado($idAutoImputado);
$autosapeladosDto->setCveSentido($cveSentido);
$autosapeladosDto->setNumToca($NumToca);
$autosapeladosDto->setAnioToca($AnioToca);
$autosapeladosDto->setCveSala($CveSala);
$autosapeladosDto->setFechaRegistro($fechaRegistro);
$autosapeladosDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idAutoApelado=="") ){
$autosapeladosDto=$autosapeladosFacade->insertAutosapelados($autosapeladosDto);
echo $autosapeladosDto;
} else if(($accion=="guardar") && ($idAutoApelado!="")){
$autosapeladosDto=$autosapeladosFacade->updateAutosapelados($autosapeladosDto);
echo $autosapeladosDto;
} else if($accion=="consultar"){
$autosapeladosDto=$autosapeladosFacade->selectAutosapelados($autosapeladosDto);
echo $autosapeladosDto;
} else if( ($accion=="baja") && ($idAutoApelado!="") ){
$autosapeladosDto=$autosapeladosFacade->deleteAutosapelados($autosapeladosDto);
echo $autosapeladosDto;
} else if( ($accion=="seleccionar") && ($idAutoApelado!="") ){
$autosapeladosDto=$autosapeladosFacade->selectAutosapelados($autosapeladosDto);
echo $autosapeladosDto;
} else if($accion == "bajaAutoImputado"){
$autosapeladosDto=$autosapeladosFacade->deleteAutosapeladosImputado($autosapeladosDto);
echo $autosapeladosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>