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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/telefonosofendidoscarpetas/TelefonosofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/telefonosofendidoscarpetas/TelefonosofendidoscarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TelefonosofendidoscarpetasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto){
        $TelefonosofendidoscarpetasDto->setidTelefonoOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta(),"utf8"):strtoupper($TelefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta()))))));
        if($this->esFecha($TelefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta())){
            $TelefonosofendidoscarpetasDto->setidTelefonoOfendidoCarpeta($this->fechaMysql($TelefonosofendidoscarpetasDto->getidTelefonoOfendidoCarpeta()));
        }
        $TelefonosofendidoscarpetasDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosofendidoscarpetasDto->getidOfendidoCarpeta(),"utf8"):strtoupper($TelefonosofendidoscarpetasDto->getidOfendidoCarpeta()))))));
        if($this->esFecha($TelefonosofendidoscarpetasDto->getidOfendidoCarpeta())){
            $TelefonosofendidoscarpetasDto->setidOfendidoCarpeta($this->fechaMysql($TelefonosofendidoscarpetasDto->getidOfendidoCarpeta()));
        }
        $TelefonosofendidoscarpetasDto->settelefono(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosofendidoscarpetasDto->gettelefono(),"utf8"):strtoupper($TelefonosofendidoscarpetasDto->gettelefono()))))));
        if($this->esFecha($TelefonosofendidoscarpetasDto->gettelefono())){
            $TelefonosofendidoscarpetasDto->settelefono($this->fechaMysql($TelefonosofendidoscarpetasDto->gettelefono()));
        }
        $TelefonosofendidoscarpetasDto->setcelular(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosofendidoscarpetasDto->getcelular(),"utf8"):strtoupper($TelefonosofendidoscarpetasDto->getcelular()))))));
        if($this->esFecha($TelefonosofendidoscarpetasDto->getcelular())){
            $TelefonosofendidoscarpetasDto->setcelular($this->fechaMysql($TelefonosofendidoscarpetasDto->getcelular()));
        }
        $TelefonosofendidoscarpetasDto->setemail(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosofendidoscarpetasDto->getemail(),"utf8"):strtoupper($TelefonosofendidoscarpetasDto->getemail()))))));
        if($this->esFecha($TelefonosofendidoscarpetasDto->getemail())){
            $TelefonosofendidoscarpetasDto->setemail($this->fechaMysql($TelefonosofendidoscarpetasDto->getemail()));
        }
        $TelefonosofendidoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosofendidoscarpetasDto->getactivo(),"utf8"):strtoupper($TelefonosofendidoscarpetasDto->getactivo()))))));
        if($this->esFecha($TelefonosofendidoscarpetasDto->getactivo())){
            $TelefonosofendidoscarpetasDto->setactivo($this->fechaMysql($TelefonosofendidoscarpetasDto->getactivo()));
        }
        $TelefonosofendidoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosofendidoscarpetasDto->getfechaRegistro(),"utf8"):strtoupper($TelefonosofendidoscarpetasDto->getfechaRegistro()))))));
        if($this->esFecha($TelefonosofendidoscarpetasDto->getfechaRegistro())){
            $TelefonosofendidoscarpetasDto->setfechaRegistro($this->fechaMysql($TelefonosofendidoscarpetasDto->getfechaRegistro()));
        }
        $TelefonosofendidoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosofendidoscarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($TelefonosofendidoscarpetasDto->getfechaActualizacion()))))));
        if($this->esFecha($TelefonosofendidoscarpetasDto->getfechaActualizacion())){
            $TelefonosofendidoscarpetasDto->setfechaActualizacion($this->fechaMysql($TelefonosofendidoscarpetasDto->getfechaActualizacion()));
        }
        return $TelefonosofendidoscarpetasDto;
    }
    
    public function selectTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto){
        $TelefonosofendidoscarpetasDto=$this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        $TelefonosofendidoscarpetasController = new TelefonosofendidoscarpetasController();
        $TelefonosofendidoscarpetasDto = $TelefonosofendidoscarpetasController->selectTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        if($TelefonosofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($TelefonosofendidoscarpetasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));
    }
    
    /*
     * Para actualizar carpetas judiciales
     */
    public function agregarTelefonoOfendido($TelefonosofendidoscarpetasDto)
    {
        $TelefonosofendidoscarpetasDto = $this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        $TelefonosofendidoscarpetasController = new TelefonosofendidoscarpetasController();
        $telefonosResponse = $TelefonosofendidoscarpetasController->agregarTelefonoOfendido($TelefonosofendidoscarpetasDto);

        return json_encode($telefonosResponse);
    }

    public function modificarTelefonoOfendido($TelefonosofendidoscarpetasDto)
    {
        $TelefonosofendidoscarpetasDto = $this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        $TelefonosofendidoscarpetasController = new TelefonosofendidoscarpetasController();
        $telefonosResponse = $TelefonosofendidoscarpetasController->modificarTelefonoOfendido($TelefonosofendidoscarpetasDto);

        return json_encode($telefonosResponse);
    }

    public function eliminarTelefonoOfendido($TelefonosofendidoscarpetasDto)
    {
        $TelefonosofendidoscarpetasDto = $this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        $TelefonosofendidoscarpetasController = new TelefonosofendidoscarpetasController();
        $telefonosResponse = $TelefonosofendidoscarpetasController->eliminarTelefonoOfendido($TelefonosofendidoscarpetasDto);

        return json_encode($telefonosResponse);
    }
    
    public function insertTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto){
        $TelefonosofendidoscarpetasDto=$this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        $TelefonosofendidoscarpetasController = new TelefonosofendidoscarpetasController();
        $TelefonosofendidoscarpetasDto = $TelefonosofendidoscarpetasController->insertTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        if($TelefonosofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($TelefonosofendidoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    
    public function updateTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto){
        $TelefonosofendidoscarpetasDto=$this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        $TelefonosofendidoscarpetasController = new TelefonosofendidoscarpetasController();
        $TelefonosofendidoscarpetasDto = $TelefonosofendidoscarpetasController->updateTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        if($TelefonosofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($TelefonosofendidoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    
    public function deleteTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto){
        $TelefonosofendidoscarpetasDto=$this->validarTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        $TelefonosofendidoscarpetasController = new TelefonosofendidoscarpetasController();
        $TelefonosofendidoscarpetasDto = $TelefonosofendidoscarpetasController->deleteTelefonosofendidoscarpetas($TelefonosofendidoscarpetasDto);
        if($TelefonosofendidoscarpetasDto==true){
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



@$idTelefonoOfendidoCarpeta=$_POST["idTelefonoOfendidoCarpeta"];
@$idOfendidoCarpeta=$_POST["idOfendidoCarpeta"];
@$telefono=$_POST["telefono"];
@$celular=$_POST["celular"];
@$email=$_POST["email"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$telefonosofendidoscarpetasFacade = new TelefonosofendidoscarpetasFacade();
$telefonosofendidoscarpetasDto = new TelefonosofendidoscarpetasDTO();

$telefonosofendidoscarpetasDto->setIdTelefonoOfendidoCarpeta($idTelefonoOfendidoCarpeta);
$telefonosofendidoscarpetasDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
$telefonosofendidoscarpetasDto->setTelefono($telefono);
$telefonosofendidoscarpetasDto->setCelular($celular);
$telefonosofendidoscarpetasDto->setEmail($email);
$telefonosofendidoscarpetasDto->setActivo($activo);
$telefonosofendidoscarpetasDto->setFechaRegistro($fechaRegistro);
$telefonosofendidoscarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idTelefonoOfendidoCarpeta=="") ){
    $telefonosofendidoscarpetasDto=$telefonosofendidoscarpetasFacade->insertTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto);
    echo $telefonosofendidoscarpetasDto;
} else if(($accion=="guardar") && ($idTelefonoOfendidoCarpeta!="")){
    $telefonosofendidoscarpetasDto=$telefonosofendidoscarpetasFacade->updateTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto);
    echo $telefonosofendidoscarpetasDto;
} else if($accion=="consultar"){
    $telefonosofendidoscarpetasDto=$telefonosofendidoscarpetasFacade->selectTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto);
    echo $telefonosofendidoscarpetasDto;
} else if( ($accion=="baja") && ($idTelefonoOfendidoCarpeta!="") ){
    $telefonosofendidoscarpetasDto=$telefonosofendidoscarpetasFacade->deleteTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto);
    echo $telefonosofendidoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idTelefonoOfendidoCarpeta!="") ){
    $telefonosofendidoscarpetasDto=$telefonosofendidoscarpetasFacade->selectTelefonosofendidoscarpetas($telefonosofendidoscarpetasDto);
    echo $telefonosofendidoscarpetasDto;
} else if ($accion == "agregar" && $idTelefonoOfendidoCarpeta == "") {
    $telefonosofendidoscarpetasDto = $telefonosofendidoscarpetasFacade->agregarTelefonoOfendido($telefonosofendidoscarpetasDto);
    echo $telefonosofendidoscarpetasDto;
} else if ($accion == "agregar" && $idTelefonoOfendidoCarpeta != "") {
    $telefonosofendidoscarpetasDto = $telefonosofendidoscarpetasFacade->modificarTelefonoOfendido($telefonosofendidoscarpetasDto);
    echo $telefonosofendidoscarpetasDto;
} else if ($accion == "eliminar" && $idTelefonoOfendidoCarpeta != "") {
    $telefonosofendidoscarpetasDto = $telefonosofendidoscarpetasFacade->eliminarTelefonoOfendido($telefonosofendidoscarpetasDto);
    echo $telefonosofendidoscarpetasDto;
}

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>