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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/telefonosimputadoscarpetas/TelefonosimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/telefonosimputadoscarpetas/TelefonosimputadoscarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
class TelefonosimputadoscarpetasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto){
        $TelefonosimputadoscarpetasDto->setidTelefonoImputadosCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosimputadoscarpetasDto->getidTelefonoImputadosCarpeta(),"utf8"):strtoupper($TelefonosimputadoscarpetasDto->getidTelefonoImputadosCarpeta()))))));
        if($this->esFecha($TelefonosimputadoscarpetasDto->getidTelefonoImputadosCarpeta())){
            $TelefonosimputadoscarpetasDto->setidTelefonoImputadosCarpeta($this->fechaMysql($TelefonosimputadoscarpetasDto->getidTelefonoImputadosCarpeta()));
        }
        $TelefonosimputadoscarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosimputadoscarpetasDto->getidImputadoCarpeta(),"utf8"):strtoupper($TelefonosimputadoscarpetasDto->getidImputadoCarpeta()))))));
        if($this->esFecha($TelefonosimputadoscarpetasDto->getidImputadoCarpeta())){
            $TelefonosimputadoscarpetasDto->setidImputadoCarpeta($this->fechaMysql($TelefonosimputadoscarpetasDto->getidImputadoCarpeta()));
        }
        $TelefonosimputadoscarpetasDto->settelefono(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosimputadoscarpetasDto->gettelefono(),"utf8"):strtoupper($TelefonosimputadoscarpetasDto->gettelefono()))))));
        if($this->esFecha($TelefonosimputadoscarpetasDto->gettelefono())){
            $TelefonosimputadoscarpetasDto->settelefono($this->fechaMysql($TelefonosimputadoscarpetasDto->gettelefono()));
        }
        $TelefonosimputadoscarpetasDto->setcelular(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosimputadoscarpetasDto->getcelular(),"utf8"):strtoupper($TelefonosimputadoscarpetasDto->getcelular()))))));
        if($this->esFecha($TelefonosimputadoscarpetasDto->getcelular())){
            $TelefonosimputadoscarpetasDto->setcelular($this->fechaMysql($TelefonosimputadoscarpetasDto->getcelular()));
        }
        $TelefonosimputadoscarpetasDto->setemail(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosimputadoscarpetasDto->getemail(),"utf8"):strtoupper($TelefonosimputadoscarpetasDto->getemail()))))));
        if($this->esFecha($TelefonosimputadoscarpetasDto->getemail())){
            $TelefonosimputadoscarpetasDto->setemail($this->fechaMysql($TelefonosimputadoscarpetasDto->getemail()));
        }
        $TelefonosimputadoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosimputadoscarpetasDto->getactivo(),"utf8"):strtoupper($TelefonosimputadoscarpetasDto->getactivo()))))));
        if($this->esFecha($TelefonosimputadoscarpetasDto->getactivo())){
            $TelefonosimputadoscarpetasDto->setactivo($this->fechaMysql($TelefonosimputadoscarpetasDto->getactivo()));
        }
        $TelefonosimputadoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosimputadoscarpetasDto->getfechaRegistro(),"utf8"):strtoupper($TelefonosimputadoscarpetasDto->getfechaRegistro()))))));
        if($this->esFecha($TelefonosimputadoscarpetasDto->getfechaRegistro())){
            $TelefonosimputadoscarpetasDto->setfechaRegistro($this->fechaMysql($TelefonosimputadoscarpetasDto->getfechaRegistro()));
        }
        $TelefonosimputadoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TelefonosimputadoscarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($TelefonosimputadoscarpetasDto->getfechaActualizacion()))))));
        if($this->esFecha($TelefonosimputadoscarpetasDto->getfechaActualizacion())){
            $TelefonosimputadoscarpetasDto->setfechaActualizacion($this->fechaMysql($TelefonosimputadoscarpetasDto->getfechaActualizacion()));
        }
        return $TelefonosimputadoscarpetasDto;
    }
    public function selectTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto){
        $TelefonosimputadoscarpetasDto=$this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasController = new TelefonosimputadoscarpetasController();
        $TelefonosimputadoscarpetasDto = $TelefonosimputadoscarpetasController->selectTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $json = "";
        $x = 1;
        if($TelefonosimputadoscarpetasDto!=""){
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($TelefonosimputadoscarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($TelefonosimputadoscarpetasDto as $TelefonoImputado) {
                $json .= "{";
                $json .= '"idTelefonoImputadosCarpeta":' . json_encode(utf8_encode($TelefonoImputado->getIdTelefonoImputadosCarpeta())) . ",";
                $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($TelefonoImputado->getIdImputadoCarpeta())) . ",";
                $json .= '"telefono":' . json_encode(utf8_encode($TelefonoImputado->getTelefono())) . ",";
                $json .= '"celular":' . json_encode(utf8_encode($TelefonoImputado->getCelular())) . ",";
                $json .= '"email":' . json_encode(utf8_encode($TelefonoImputado->getEmail())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($TelefonoImputado->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($TelefonosimputadoscarpetasDto)) {
                    $json .= ",";
                }
            }
            $json .= "]";
            $json .= "}";
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        echo $json;
    }
    public function insertTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto){
        $TelefonosimputadoscarpetasDto=$this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasController = new TelefonosimputadoscarpetasController();
        $TelefonosimputadoscarpetasDto = $TelefonosimputadoscarpetasController->insertTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        if($TelefonosimputadoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($TelefonosimputadoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    
    public function updateTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto){
        $TelefonosimputadoscarpetasDto=$this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasController = new TelefonosimputadoscarpetasController();
        $TelefonosimputadoscarpetasDto = $TelefonosimputadoscarpetasController->updateTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        if($TelefonosimputadoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($TelefonosimputadoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    
    public function deleteTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto){
        $TelefonosimputadoscarpetasDto=$this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasController = new TelefonosimputadoscarpetasController();
        $TelefonosimputadoscarpetasDto = $TelefonosimputadoscarpetasController->deleteTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        if($TelefonosimputadoscarpetasDto==true){
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    /*
     * Para actualizar carpetas judiciales
     */
    public function agregarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto){
        $TelefonosimputadoscarpetasDto = $this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasController = new TelefonosimputadoscarpetasController();
        $rs = $TelefonosimputadoscarpetasController->agregarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        return $rs;
    }
    
    public function modificarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto){
        $TelefonosimputadoscarpetasDto = $this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasController = new TelefonosimputadoscarpetasController();
        $rs = $TelefonosimputadoscarpetasController->modificarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        return $rs;
    }
    
    public function eliminarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto){
        $TelefonosimputadoscarpetasDto = $this->validarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        $TelefonosimputadoscarpetasController = new TelefonosimputadoscarpetasController();
        $rs = $TelefonosimputadoscarpetasController->eliminarTelefonosimputadoscarpetas($TelefonosimputadoscarpetasDto);
        return $rs;
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



@$idTelefonoImputadosCarpeta=$_POST["idTelefonoImputadosCarpeta"];
@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
@$telefono=$_POST["telefono"];
@$celular=$_POST["celular"];
@$email=$_POST["email"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$telefonosimputadoscarpetasFacade = new TelefonosimputadoscarpetasFacade();
$telefonosimputadoscarpetasDto = new TelefonosimputadoscarpetasDTO();

$telefonosimputadoscarpetasDto->setIdTelefonoImputadosCarpeta($idTelefonoImputadosCarpeta);
$telefonosimputadoscarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
$telefonosimputadoscarpetasDto->setTelefono($telefono);
$telefonosimputadoscarpetasDto->setCelular($celular);
$telefonosimputadoscarpetasDto->setEmail($email);
$telefonosimputadoscarpetasDto->setActivo($activo);
$telefonosimputadoscarpetasDto->setFechaRegistro($fechaRegistro);
$telefonosimputadoscarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idTelefonoImputadosCarpeta=="") ){
    $telefonosimputadoscarpetasDto=$telefonosimputadoscarpetasFacade->insertTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto);
    echo $telefonosimputadoscarpetasDto;
} else if(($accion=="guardar") && ($idTelefonoImputadosCarpeta!="")){
    $telefonosimputadoscarpetasDto=$telefonosimputadoscarpetasFacade->updateTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto);
    echo $telefonosimputadoscarpetasDto;
} else if($accion=="consultar"){
    $telefonosimputadoscarpetasDto=$telefonosimputadoscarpetasFacade->selectTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto);
    echo $telefonosimputadoscarpetasDto;
} else if( ($accion=="baja") && ($idTelefonoImputadosCarpeta!="") ){
    $telefonosimputadoscarpetasDto=$telefonosimputadoscarpetasFacade->deleteTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto);
    echo $telefonosimputadoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idTelefonoImputadosCarpeta!="") ){
    $telefonosimputadoscarpetasDto=$telefonosimputadoscarpetasFacade->selectTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto);
    echo $telefonosimputadoscarpetasDto;
} else if( ($accion=="guarda") && ($idTelefonoImputadosCarpeta=="") ){
    $telefonosimputadoscarpetasDto=$telefonosimputadoscarpetasFacade->agregarTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto);
    echo $telefonosimputadoscarpetasDto;
} else if(($accion=="guarda") && ($idTelefonoImputadosCarpeta!="")){
    $telefonosimputadoscarpetasDto=$telefonosimputadoscarpetasFacade->modificarTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto);
    echo $telefonosimputadoscarpetasDto;
} else if( ($accion=="eliminar") && ($idTelefonoImputadosCarpeta!="") ){
    $telefonosimputadoscarpetasDto=$telefonosimputadoscarpetasFacade->eliminarTelefonosimputadoscarpetas($telefonosimputadoscarpetasDto);
    echo $telefonosimputadoscarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>