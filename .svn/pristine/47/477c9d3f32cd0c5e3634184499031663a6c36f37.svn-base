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

date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/configuracionesjuzgadores/ConfiguracionesjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/configuracionesjuzgadores/ConfiguracionesjuzgadoresController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ConfiguracionesjuzgadoresFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto){
        $ConfiguracionesjuzgadoresDto->setIdConfiguracionJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConfiguracionesjuzgadoresDto->getIdConfiguracionJuzgador(),"utf8"):strtoupper($ConfiguracionesjuzgadoresDto->getIdConfiguracionJuzgador()))))));
        if($this->esFecha($ConfiguracionesjuzgadoresDto->getIdConfiguracionJuzgador())){
            $ConfiguracionesjuzgadoresDto->setIdConfiguracionJuzgador($this->fechaMysql($ConfiguracionesjuzgadoresDto->getIdConfiguracionJuzgador()));
        }
        $ConfiguracionesjuzgadoresDto->setIdHorarioJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConfiguracionesjuzgadoresDto->getIdHorarioJuzgador(),"utf8"):strtoupper($ConfiguracionesjuzgadoresDto->getIdHorarioJuzgador()))))));
        if($this->esFecha($ConfiguracionesjuzgadoresDto->getIdHorarioJuzgador())){
            $ConfiguracionesjuzgadoresDto->setIdHorarioJuzgador($this->fechaMysql($ConfiguracionesjuzgadoresDto->getIdHorarioJuzgador()));
        }
        $ConfiguracionesjuzgadoresDto->setIdJuzgador(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConfiguracionesjuzgadoresDto->getIdJuzgador(),"utf8"):strtoupper($ConfiguracionesjuzgadoresDto->getIdJuzgador()))))));
        if($this->esFecha($ConfiguracionesjuzgadoresDto->getIdJuzgador())){
            $ConfiguracionesjuzgadoresDto->setIdJuzgador($this->fechaMysql($ConfiguracionesjuzgadoresDto->getIdJuzgador()));
        }
        $ConfiguracionesjuzgadoresDto->setActivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConfiguracionesjuzgadoresDto->getActivo(),"utf8"):strtoupper($ConfiguracionesjuzgadoresDto->getActivo()))))));
        if($this->esFecha($ConfiguracionesjuzgadoresDto->getActivo())){
            $ConfiguracionesjuzgadoresDto->setActivo($this->fechaMysql($ConfiguracionesjuzgadoresDto->getActivo()));
        }
        $ConfiguracionesjuzgadoresDto->setFechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConfiguracionesjuzgadoresDto->getFechaRegistro(),"utf8"):strtoupper($ConfiguracionesjuzgadoresDto->getFechaRegistro()))))));
        if($this->esFecha($ConfiguracionesjuzgadoresDto->getFechaRegistro())){
            $ConfiguracionesjuzgadoresDto->setFechaRegistro($this->fechaMysql($ConfiguracionesjuzgadoresDto->getFechaRegistro()));
        }
        $ConfiguracionesjuzgadoresDto->setFechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConfiguracionesjuzgadoresDto->getFechaActualizacion(),"utf8"):strtoupper($ConfiguracionesjuzgadoresDto->getFechaActualizacion()))))));
        if($this->esFecha($ConfiguracionesjuzgadoresDto->getFechaActualizacion())){
            $ConfiguracionesjuzgadoresDto->setFechaActualizacion($this->fechaMysql($ConfiguracionesjuzgadoresDto->getFechaActualizacion()));
        }
        return $ConfiguracionesjuzgadoresDto;
    }
    public function selectConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto){
        $ConfiguracionesjuzgadoresDto=$this->validarConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        $ConfiguracionesjuzgadoresController = new ConfiguracionesjuzgadoresController();
        $ConfiguracionesjuzgadoresDto = $ConfiguracionesjuzgadoresController->selectConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        if($ConfiguracionesjuzgadoresDto!=""){
            $dtoToJson = new DtoToJson($ConfiguracionesjuzgadoresDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
    }
    public function insertConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto){
        $ConfiguracionesjuzgadoresDto=$this->validarConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        $ConfiguracionesjuzgadoresController = new ConfiguracionesjuzgadoresController();
        $ConfiguracionesjuzgadoresDto = $ConfiguracionesjuzgadoresController->insertConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        if($ConfiguracionesjuzgadoresDto!=""){
            $dtoToJson = new DtoToJson($ConfiguracionesjuzgadoresDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    public function updateConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto){
        $ConfiguracionesjuzgadoresDto=$this->validarConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        $ConfiguracionesjuzgadoresController = new ConfiguracionesjuzgadoresController();
        $ConfiguracionesjuzgadoresDto = $ConfiguracionesjuzgadoresController->updateConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        if($ConfiguracionesjuzgadoresDto!=""){
            $dtoToJson = new DtoToJson($ConfiguracionesjuzgadoresDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    public function deleteConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto){
        $ConfiguracionesjuzgadoresDto=$this->validarConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        $ConfiguracionesjuzgadoresController = new ConfiguracionesjuzgadoresController();
        $ConfiguracionesjuzgadoresDto = $ConfiguracionesjuzgadoresController->deleteConfiguracionesjuzgadores($ConfiguracionesjuzgadoresDto);
        if($ConfiguracionesjuzgadoresDto==true){
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



@$idConfiguracionJuzgador=$_POST["idConfiguracionJuzgador"];
@$IdHorarioJuzgador=$_POST["IdHorarioJuzgador"];
@$IdJuzgador=$_POST["IdJuzgador"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$configuracionesjuzgadoresFacade = new ConfiguracionesjuzgadoresFacade();
$configuracionesjuzgadoresDto = new ConfiguracionesjuzgadoresDTO();

$configuracionesjuzgadoresDto->setIdConfiguracionJuzgador($idConfiguracionJuzgador);
$configuracionesjuzgadoresDto->setIdHorarioJuzgador($IdHorarioJuzgador);
$configuracionesjuzgadoresDto->setIdJuzgador($IdJuzgador);
$configuracionesjuzgadoresDto->setActivo($activo);
$configuracionesjuzgadoresDto->setFechaRegistro($fechaRegistro);
$configuracionesjuzgadoresDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idConfiguracionJuzgador=="") ){
    $configuracionesjuzgadoresDto=$configuracionesjuzgadoresFacade->insertConfiguracionesjuzgadores($configuracionesjuzgadoresDto);
    echo $configuracionesjuzgadoresDto;
} else if(($accion=="guardar") && ($idConfiguracionJuzgador!="")){
    $configuracionesjuzgadoresDto=$configuracionesjuzgadoresFacade->updateConfiguracionesjuzgadores($configuracionesjuzgadoresDto);
    echo $configuracionesjuzgadoresDto;
} else if($accion=="consultar"){
    $configuracionesjuzgadoresDto=$configuracionesjuzgadoresFacade->selectConfiguracionesjuzgadores($configuracionesjuzgadoresDto);
    echo $configuracionesjuzgadoresDto;
} else if( ($accion=="baja") && ($idConfiguracionJuzgador!="") ){
    $configuracionesjuzgadoresDto=$configuracionesjuzgadoresFacade->deleteConfiguracionesjuzgadores($configuracionesjuzgadoresDto);
    echo $configuracionesjuzgadoresDto;
} else if( ($accion=="seleccionar") && ($idConfiguracionJuzgador!="") ){
    $configuracionesjuzgadoresDto=$configuracionesjuzgadoresFacade->selectConfiguracionesjuzgadores($configuracionesjuzgadoresDto);
    echo $configuracionesjuzgadoresDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>