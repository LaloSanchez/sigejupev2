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
include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/tutoresimputadoscarpetas/TutoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/tutoresimputadoscarpetas/TutoresimputadoscarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipostutores/TipostutoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipostutores/TipostutoresController.Class.php");
class TutoresimputadoscarpetasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto){
        $TutoresimputadoscarpetasDto->setidTutorImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getidTutorImputadoCarpeta(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getidTutorImputadoCarpeta()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getidTutorImputadoCarpeta())){
            $TutoresimputadoscarpetasDto->setidTutorImputadoCarpeta($this->fechaMysql($TutoresimputadoscarpetasDto->getidTutorImputadoCarpeta()));
        }
        $TutoresimputadoscarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getidImputadoCarpeta(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getidImputadoCarpeta()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getidImputadoCarpeta())){
            $TutoresimputadoscarpetasDto->setidImputadoCarpeta($this->fechaMysql($TutoresimputadoscarpetasDto->getidImputadoCarpeta()));
        }
        $TutoresimputadoscarpetasDto->setcveTipoTutor(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getcveTipoTutor(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getcveTipoTutor()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getcveTipoTutor())){
            $TutoresimputadoscarpetasDto->setcveTipoTutor($this->fechaMysql($TutoresimputadoscarpetasDto->getcveTipoTutor()));
        }
        $TutoresimputadoscarpetasDto->setProvDef(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getProvDef(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getProvDef()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getProvDef())){
            $TutoresimputadoscarpetasDto->setProvDef($this->fechaMysql($TutoresimputadoscarpetasDto->getProvDef()));
        }
        $TutoresimputadoscarpetasDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getcveGenero(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getcveGenero()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getcveGenero())){
            $TutoresimputadoscarpetasDto->setcveGenero($this->fechaMysql($TutoresimputadoscarpetasDto->getcveGenero()));
        }
        $TutoresimputadoscarpetasDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getnombre(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getnombre()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getnombre())){
            $TutoresimputadoscarpetasDto->setnombre($this->fechaMysql($TutoresimputadoscarpetasDto->getnombre()));
        }
        $TutoresimputadoscarpetasDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getpaterno(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getpaterno()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getpaterno())){
            $TutoresimputadoscarpetasDto->setpaterno($this->fechaMysql($TutoresimputadoscarpetasDto->getpaterno()));
        }
        $TutoresimputadoscarpetasDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getmaterno(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getmaterno()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getmaterno())){
            $TutoresimputadoscarpetasDto->setmaterno($this->fechaMysql($TutoresimputadoscarpetasDto->getmaterno()));
        }
        $TutoresimputadoscarpetasDto->setfechaNacimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getfechaNacimiento(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getfechaNacimiento()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getfechaNacimiento())){
            $TutoresimputadoscarpetasDto->setfechaNacimiento($this->fechaMysql($TutoresimputadoscarpetasDto->getfechaNacimiento()));
        }
        $TutoresimputadoscarpetasDto->setedad(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getedad(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getedad()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getedad())){
            $TutoresimputadoscarpetasDto->setedad($this->fechaMysql($TutoresimputadoscarpetasDto->getedad()));
        }
        $TutoresimputadoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getactivo(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getactivo()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getactivo())){
            $TutoresimputadoscarpetasDto->setactivo($this->fechaMysql($TutoresimputadoscarpetasDto->getactivo()));
        }
        $TutoresimputadoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getfechaRegistro(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getfechaRegistro()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getfechaRegistro())){
            $TutoresimputadoscarpetasDto->setfechaRegistro($this->fechaMysql($TutoresimputadoscarpetasDto->getfechaRegistro()));
        }
        $TutoresimputadoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresimputadoscarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($TutoresimputadoscarpetasDto->getfechaActualizacion()))))));
        if($this->esFecha($TutoresimputadoscarpetasDto->getfechaActualizacion())){
            $TutoresimputadoscarpetasDto->setfechaActualizacion($this->fechaMysql($TutoresimputadoscarpetasDto->getfechaActualizacion()));
        }
        return $TutoresimputadoscarpetasDto;
    }
    public function selectTutoresimputadoscarpetas($TutoresimputadoscarpetasDto){
        $TutoresimputadoscarpetasDto=$this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $TutoresimputadoscarpetasController = new TutoresimputadoscarpetasController();
        $TutoresimputadoscarpetasDto = $TutoresimputadoscarpetasController->selectTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $json = "";
        $x = 1;
        $TiposTutoresDto = new TipostutoresDTO();
        $TiposTutoresDao = new TipostutoresDAO();
        if($TutoresimputadoscarpetasDto!=""){
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($TutoresimputadoscarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($TutoresimputadoscarpetasDto as $Tutorimputado) {
                $TiposTutoresDto->setCveTipoTutor($Tutorimputado->getCveTipoTutor());
                $rsTutores = $TiposTutoresDao->selectTipostutores($TiposTutoresDto);
                $json .= "{";
                $json .= '"idTutorImputadoCarpeta":' . json_encode(utf8_encode($Tutorimputado->getIdTutorImputadoCarpeta())) . ",";
                $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($Tutorimputado->getIdImputadoCarpeta())) . ",";
                $json .= '"cveTipoTutor":' . json_encode(utf8_encode($Tutorimputado->getCveTipoTutor())) . ",";
                if ($rsTutores != "") {
                    $json .= '"desTipoTutor":' . json_encode(utf8_encode($rsTutores[0]->getDesTipoTutor())) . ",";
                } else {
                    $json .= '"desTipoTutor": "N/A",';
                }
                $json .= '"ProvDef":' . json_encode(utf8_encode($Tutorimputado->getProvDef())) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($Tutorimputado->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($Tutorimputado->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($Tutorimputado->getMaterno())) . ",";
                $json .= '"fechaNacimiento":' . json_encode(utf8_encode($Tutorimputado->getFechaNacimiento())) . ",";
                $json .= '"edad":' . json_encode(utf8_encode($Tutorimputado->getEdad())) . ",";
                $json .= '"cveGenero":' . json_encode(utf8_encode($Tutorimputado->getCveGenero())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($Tutorimputado->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($TutoresimputadoscarpetasDto)) {
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
    
    public function  agregarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto){
        $TutoresimputadoscarpetasDto = $this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $TutoresimputadoscarpetasController = new TutoresimputadoscarpetasController();
        $rs = $TutoresimputadoscarpetasController->agregarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        return $rs;
    }
    
    public function modificarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto){
        $TutoresimputadoscarpetasDto = $this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $TutoresimputadoscarpetasController = new TutoresimputadoscarpetasController();
        $rs = $TutoresimputadoscarpetasController->modificarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        return $rs;
    }
    
    public function eliminarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto){
        $TutoresimputadoscarpetasDto = $this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $TutoresimputadoscarpetasController = new TutoresimputadoscarpetasController();
        $rs = $TutoresimputadoscarpetasController->eliminarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        return $rs;
    }
    
    public function insertTutoresimputadoscarpetas($TutoresimputadoscarpetasDto){
        $TutoresimputadoscarpetasDto=$this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $TutoresimputadoscarpetasController = new TutoresimputadoscarpetasController();
        $TutoresimputadoscarpetasDto = $TutoresimputadoscarpetasController->insertTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        if($TutoresimputadoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($TutoresimputadoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    
    public function updateTutoresimputadoscarpetas($TutoresimputadoscarpetasDto){
        $TutoresimputadoscarpetasDto=$this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $TutoresimputadoscarpetasController = new TutoresimputadoscarpetasController();
        $TutoresimputadoscarpetasDto = $TutoresimputadoscarpetasController->updateTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        if($TutoresimputadoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($TutoresimputadoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    
    public function deleteTutoresimputadoscarpetas($TutoresimputadoscarpetasDto){
        $TutoresimputadoscarpetasDto=$this->validarTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        $TutoresimputadoscarpetasController = new TutoresimputadoscarpetasController();
        $TutoresimputadoscarpetasDto = $TutoresimputadoscarpetasController->deleteTutoresimputadoscarpetas($TutoresimputadoscarpetasDto);
        if($TutoresimputadoscarpetasDto==true){
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



@$idTutorImputadoCarpeta=$_POST["idTutorImputadoCarpeta"];
@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
@$cveTipoTutor=$_POST["cveTipoTutor"];
@$ProvDef=$_POST["ProvDef"];
@$cveGenero=$_POST["cveGenero"];
@$nombre=$_POST["nombre"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$fechaNacimiento=$_POST["fechaNacimiento"];
@$edad=$_POST["edad"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$accion=$_POST["accion"];

$tutoresimputadoscarpetasFacade = new TutoresimputadoscarpetasFacade();
$tutoresimputadoscarpetasDto = new TutoresimputadoscarpetasDTO();

$tutoresimputadoscarpetasDto->setIdTutorImputadoCarpeta($idTutorImputadoCarpeta);
$tutoresimputadoscarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);
$tutoresimputadoscarpetasDto->setCveTipoTutor($cveTipoTutor);
$tutoresimputadoscarpetasDto->setProvDef($ProvDef);
$tutoresimputadoscarpetasDto->setCveGenero($cveGenero);
$tutoresimputadoscarpetasDto->setNombre($nombre);
$tutoresimputadoscarpetasDto->setPaterno($paterno);
$tutoresimputadoscarpetasDto->setMaterno($materno);
$tutoresimputadoscarpetasDto->setFechaNacimiento($fechaNacimiento);
$tutoresimputadoscarpetasDto->setEdad($edad);
$tutoresimputadoscarpetasDto->setActivo($activo);
$tutoresimputadoscarpetasDto->setFechaRegistro($fechaRegistro);
$tutoresimputadoscarpetasDto->setFechaActualizacion($fechaActualizacion);

if( ($accion=="guardar") && ($idTutorImputadoCarpeta=="") ){
    $tutoresimputadoscarpetasDto=$tutoresimputadoscarpetasFacade->insertTutoresimputadoscarpetas($tutoresimputadoscarpetasDto);
    echo $tutoresimputadoscarpetasDto;
} else if(($accion=="guardar") && ($idTutorImputadoCarpeta!="")){
    $tutoresimputadoscarpetasDto=$tutoresimputadoscarpetasFacade->updateTutoresimputadoscarpetas($tutoresimputadoscarpetasDto);
    echo $tutoresimputadoscarpetasDto;
} else if($accion=="consultar"){
    $tutoresimputadoscarpetasDto=$tutoresimputadoscarpetasFacade->selectTutoresimputadoscarpetas($tutoresimputadoscarpetasDto);
    echo $tutoresimputadoscarpetasDto;
} else if( ($accion=="baja") && ($idTutorImputadoCarpeta!="") ){
    $tutoresimputadoscarpetasDto=$tutoresimputadoscarpetasFacade->deleteTutoresimputadoscarpetas($tutoresimputadoscarpetasDto);
    echo $tutoresimputadoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idTutorImputadoCarpeta!="") ){
    $tutoresimputadoscarpetasDto=$tutoresimputadoscarpetasFacade->selectTutoresimputadoscarpetas($tutoresimputadoscarpetasDto);
    echo $tutoresimputadoscarpetasDto;
} else if ( ($accion=="guarda") && ($idTutorImputadoCarpeta=="") ) {
    $tutoresimputadoscarpetasDto=$tutoresimputadoscarpetasFacade->agregarTutoresimputadoscarpetas($tutoresimputadoscarpetasDto);
    echo $tutoresimputadoscarpetasDto;
} else if ( ($accion=="guarda") && ($idTutorImputadoCarpeta!="") ) {
    $tutoresimputadoscarpetasDto=$tutoresimputadoscarpetasFacade->modificarTutoresimputadoscarpetas($tutoresimputadoscarpetasDto);
    echo $tutoresimputadoscarpetasDto;
} else if ( ($accion=="eliminar") && ($idTutorImputadoCarpeta!="") ) {
    $tutoresimputadoscarpetasDto=$tutoresimputadoscarpetasFacade->eliminarTutoresimputadoscarpetas($tutoresimputadoscarpetasDto);
    echo $tutoresimputadoscarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>