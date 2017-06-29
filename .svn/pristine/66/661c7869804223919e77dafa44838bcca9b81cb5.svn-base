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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/configuracionessalas/ConfiguracionessalasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/configuracionessalas/ConfiguracionessalasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class ConfiguracionessalasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarConfiguracionessalas($ConfiguracionessalasDto){
        $ConfiguracionessalasDto->setidConfiguracionSala(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConfiguracionessalasDto->getidConfiguracionSala(),"utf8"):strtoupper($ConfiguracionessalasDto->getidConfiguracionSala()))))));
        if($this->esFecha($ConfiguracionessalasDto->getidConfiguracionSala())){
            $ConfiguracionessalasDto->setidConfiguracionSala($this->fechaMysql($ConfiguracionessalasDto->getidConfiguracionSala()));
        }
        $ConfiguracionessalasDto->setcveHorario(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConfiguracionessalasDto->getcveHorario(),"utf8"):strtoupper($ConfiguracionessalasDto->getcveHorario()))))));
        if($this->esFecha($ConfiguracionessalasDto->getcveHorario())){
            $ConfiguracionessalasDto->setcveHorario($this->fechaMysql($ConfiguracionessalasDto->getcveHorario()));
        }
        $ConfiguracionessalasDto->setcveSala(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConfiguracionessalasDto->getcveSala(),"utf8"):strtoupper($ConfiguracionessalasDto->getcveSala()))))));
        if($this->esFecha($ConfiguracionessalasDto->getcveSala())){
            $ConfiguracionessalasDto->setcveSala($this->fechaMysql($ConfiguracionessalasDto->getcveSala()));
        }
        $ConfiguracionessalasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConfiguracionessalasDto->getactivo(),"utf8"):strtoupper($ConfiguracionessalasDto->getactivo()))))));
        if($this->esFecha($ConfiguracionessalasDto->getactivo())){
            $ConfiguracionessalasDto->setactivo($this->fechaMysql($ConfiguracionessalasDto->getactivo()));
        }
        $ConfiguracionessalasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConfiguracionessalasDto->getfechaRegistro(),"utf8"):strtoupper($ConfiguracionessalasDto->getfechaRegistro()))))));
        if($this->esFecha($ConfiguracionessalasDto->getfechaRegistro())){
            $ConfiguracionessalasDto->setfechaRegistro($this->fechaMysql($ConfiguracionessalasDto->getfechaRegistro()));
        }
        $ConfiguracionessalasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($ConfiguracionessalasDto->getfechaActualizacion(),"utf8"):strtoupper($ConfiguracionessalasDto->getfechaActualizacion()))))));
        if($this->esFecha($ConfiguracionessalasDto->getfechaActualizacion())){
            $ConfiguracionessalasDto->setfechaActualizacion($this->fechaMysql($ConfiguracionessalasDto->getfechaActualizacion()));
        }
        return $ConfiguracionessalasDto;
    }
    public function selectConfiguracionessalas($ConfiguracionessalasDto){
        $ConfiguracionessalasDto=$this->validarConfiguracionessalas($ConfiguracionessalasDto);
        $ConfiguracionessalasController = new ConfiguracionessalasController();
        $ConfiguracionessalasDto = $ConfiguracionessalasController->selectConfiguracionessalas($ConfiguracionessalasDto);
        if($ConfiguracionessalasDto!=""){
            $dtoToJson = new DtoToJson($ConfiguracionessalasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
    }
    public function insertConfiguracionessalas($ConfiguracionessalasDto){
        $ConfiguracionessalasDto=$this->validarConfiguracionessalas($ConfiguracionessalasDto);
        $ConfiguracionessalasController = new ConfiguracionessalasController();
        $ConfiguracionessalasDto = $ConfiguracionessalasController->insertConfiguracionessalas($ConfiguracionessalasDto);
        if($ConfiguracionessalasDto!=""){
            $dtoToJson = new DtoToJson($ConfiguracionessalasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    public function updateConfiguracionessalas($ConfiguracionessalasDto){
        $ConfiguracionessalasDto=$this->validarConfiguracionessalas($ConfiguracionessalasDto);
        $ConfiguracionessalasController = new ConfiguracionessalasController();
        $ConfiguracionessalasDto = $ConfiguracionessalasController->updateConfiguracionessalas($ConfiguracionessalasDto);
        if($ConfiguracionessalasDto!=""){
            $dtoToJson = new DtoToJson($ConfiguracionessalasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    public function deleteConfiguracionessalas($ConfiguracionessalasDto){
        $ConfiguracionessalasDto=$this->validarConfiguracionessalas($ConfiguracionessalasDto);
        $ConfiguracionessalasController = new ConfiguracionessalasController();
        $ConfiguracionessalasDto = $ConfiguracionessalasController->deleteConfiguracionessalas($ConfiguracionessalasDto);
        if($ConfiguracionessalasDto==true){
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



@$idConfiguracionSala=$_POST["idConfiguracionSala"];
@$cveHorario=$_POST["cveHorario"];
@$cveSala=$_POST["cveSala"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$configuracionessalasFacade = new ConfiguracionessalasFacade();
$configuracionessalasDto = new ConfiguracionessalasDTO();

$configuracionessalasDto->setIdConfiguracionSala($idConfiguracionSala);
$configuracionessalasDto->setCveHorario($cveHorario);
$configuracionessalasDto->setCveSala($cveSala);
$configuracionessalasDto->setActivo($activo);
$configuracionessalasDto->setFechaRegistro($fechaRegistro);
$configuracionessalasDto->setFechaActualizacion($fechaActualizacion);
//acciones
if( ($accion=="guardar") && ($idConfiguracionSala=="") ){
    $configuracionessalasDto=$configuracionessalasFacade->insertConfiguracionessalas($configuracionessalasDto);
    echo $configuracionessalasDto;
} else if(($accion=="guardar") && ($idConfiguracionSala!="")){
    $configuracionessalasDto=$configuracionessalasFacade->updateConfiguracionessalas($configuracionessalasDto);
    echo $configuracionessalasDto;
} else if($accion=="consultar"){
    $configuracionessalasDto=$configuracionessalasFacade->selectConfiguracionessalas($configuracionessalasDto);
    echo $configuracionessalasDto;
} else if( ($accion=="baja") && ($idConfiguracionSala!="") ){
    $configuracionessalasDto=$configuracionessalasFacade->deleteConfiguracionessalas($configuracionessalasDto);
    echo $configuracionessalasDto;
} else if( ($accion=="seleccionar") && ($idConfiguracionSala!="") ){
    $configuracionessalasDto=$configuracionessalasFacade->selectConfiguracionessalas($configuracionessalasDto);
    echo $configuracionessalasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>