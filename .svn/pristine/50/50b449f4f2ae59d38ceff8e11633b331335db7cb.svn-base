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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidoscarpetas/TutoresofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tutoresofendidoscarpetas/TutoresofendidoscarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tipostutores/TipostutoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tipostutores/TipostutoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");
class TutoresofendidoscarpetasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarTutoresofendidoscarpetas($TutoresofendidoscarpetasDto){
        $TutoresofendidoscarpetasDto->setidTutorOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getidTutorOfendidoCarpeta(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getidTutorOfendidoCarpeta()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getidTutorOfendidoCarpeta())){
            $TutoresofendidoscarpetasDto->setidTutorOfendidoCarpeta($this->fechaMysql($TutoresofendidoscarpetasDto->getidTutorOfendidoCarpeta()));
        }
        $TutoresofendidoscarpetasDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getidOfendidoCarpeta(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getidOfendidoCarpeta()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getidOfendidoCarpeta())){
            $TutoresofendidoscarpetasDto->setidOfendidoCarpeta($this->fechaMysql($TutoresofendidoscarpetasDto->getidOfendidoCarpeta()));
        }
        $TutoresofendidoscarpetasDto->setcveTipoTutor(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getcveTipoTutor(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getcveTipoTutor()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getcveTipoTutor())){
            $TutoresofendidoscarpetasDto->setcveTipoTutor($this->fechaMysql($TutoresofendidoscarpetasDto->getcveTipoTutor()));
        }
        $TutoresofendidoscarpetasDto->setProvDef(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getProvDef(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getProvDef()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getProvDef())){
            $TutoresofendidoscarpetasDto->setProvDef($this->fechaMysql($TutoresofendidoscarpetasDto->getProvDef()));
        }
        $TutoresofendidoscarpetasDto->setnombre(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getnombre(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getnombre()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getnombre())){
            $TutoresofendidoscarpetasDto->setnombre($this->fechaMysql($TutoresofendidoscarpetasDto->getnombre()));
        }
        $TutoresofendidoscarpetasDto->setpaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getpaterno(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getpaterno()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getpaterno())){
            $TutoresofendidoscarpetasDto->setpaterno($this->fechaMysql($TutoresofendidoscarpetasDto->getpaterno()));
        }
        $TutoresofendidoscarpetasDto->setmaterno(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getmaterno(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getmaterno()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getmaterno())){
            $TutoresofendidoscarpetasDto->setmaterno($this->fechaMysql($TutoresofendidoscarpetasDto->getmaterno()));
        }
        $TutoresofendidoscarpetasDto->setfechaNacimiento(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getfechaNacimiento(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getfechaNacimiento()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getfechaNacimiento())){
            $TutoresofendidoscarpetasDto->setfechaNacimiento($this->fechaMysql($TutoresofendidoscarpetasDto->getfechaNacimiento()));
        }
        $TutoresofendidoscarpetasDto->setedad(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getedad(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getedad()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getedad())){
            $TutoresofendidoscarpetasDto->setedad($this->fechaMysql($TutoresofendidoscarpetasDto->getedad()));
        }
        $TutoresofendidoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getactivo(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getactivo()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getactivo())){
            $TutoresofendidoscarpetasDto->setactivo($this->fechaMysql($TutoresofendidoscarpetasDto->getactivo()));
        }
        $TutoresofendidoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getfechaRegistro(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getfechaRegistro()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getfechaRegistro())){
            $TutoresofendidoscarpetasDto->setfechaRegistro($this->fechaMysql($TutoresofendidoscarpetasDto->getfechaRegistro()));
        }
        $TutoresofendidoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getfechaActualizacion()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getfechaActualizacion())){
            $TutoresofendidoscarpetasDto->setfechaActualizacion($this->fechaMysql($TutoresofendidoscarpetasDto->getfechaActualizacion()));
        }
        $TutoresofendidoscarpetasDto->setcveGenero(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($TutoresofendidoscarpetasDto->getcveGenero(),"utf8"):strtoupper($TutoresofendidoscarpetasDto->getcveGenero()))))));
        if($this->esFecha($TutoresofendidoscarpetasDto->getcveGenero())){
            $TutoresofendidoscarpetasDto->setcveGenero($this->fechaMysql($TutoresofendidoscarpetasDto->getcveGenero()));
        }
        return $TutoresofendidoscarpetasDto;
    }
    
    public function selectTutoresofendidoscarpetas($TutoresofendidoscarpetasDto){
        /*$TutoresofendidoscarpetasDto=$this->validarTutoresofendidoscarpetascarpetas($TutoresofendidoscarpetasDto);
        $TutoresofendidoscarpetasController = new TutoresofendidoscarpetasController();
        $TutoresofendidoscarpetasDto = $TutoresofendidoscarpetasController->selectTutoresofendidoscarpetas($TutoresofendidoscarpetasDto);
        if($TutoresofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($TutoresofendidoscarpetasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));*/
        $TutoresofendidoscarpetasDto=$this->validarTutoresofendidoscarpetas($TutoresofendidoscarpetasDto);
        $TutoresofendidoscarpetasController = new TutoresofendidoscarpetasController();
        $TutoresofendidoscarpetasDto = $TutoresofendidoscarpetasController->selectTutoresofendidoscarpetas($TutoresofendidoscarpetasDto);
        $json = "";
        $x = 1;
        $TiposTutoresDto = new TipostutoresDTO();
        $TiposTutoresDao = new TipostutoresDAO();
        $generosDto = new GenerosDTO();
        $generosDao = new GenerosDAO();
        if($TutoresofendidoscarpetasDto!=""){
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($TutoresofendidoscarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($TutoresofendidoscarpetasDto as $TutorOfendido) {
                $TiposTutoresDto->setCveTipoTutor($TutorOfendido->getCveTipoTutor());
                $rsTutores = $TiposTutoresDao->selectTipostutores($TiposTutoresDto);
                $generosDto->setCveGenero($TutorOfendido->getCveGenero());
                $rsGeneros = $generosDao->selectGeneros($generosDto);
                $json .= "{";
                $json .= '"idTutorOfendidoCarpeta":' . json_encode(utf8_encode($TutorOfendido->getIdTutorOfendidoCarpeta())) . ",";
                $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($TutorOfendido->getIdOfendidoCarpeta())) . ",";
                $json .= '"cveTipoTutor":' . json_encode(utf8_encode($TutorOfendido->getCveTipoTutor())) . ",";
                if ($rsTutores != "") {
                    $json .= '"desTipoTutor":' . json_encode(utf8_encode($rsTutores[0]->getDesTipoTutor())) . ",";
                } else {
                    $json .= '"desTipoTutor": "N/A",';
                }
                if ($rsGeneros != "") {
                    $json .= '"desGenero":' . json_encode(utf8_encode($rsGeneros[0]->getDesGenero())) . ",";
                } else {
                    $json .= '"desGenero": "N/A",';
                }
                $json .= '"ProvDef":' . json_encode(utf8_encode($TutorOfendido->getProvDef())) . ",";
                $json .= '"nombre":' . json_encode(utf8_encode($TutorOfendido->getNombre())) . ",";
                $json .= '"paterno":' . json_encode(utf8_encode($TutorOfendido->getPaterno())) . ",";
                $json .= '"materno":' . json_encode(utf8_encode($TutorOfendido->getMaterno())) . ",";
                $json .= '"fechaNacimiento":' . json_encode(utf8_encode($TutorOfendido->getFechaNacimiento())) . ",";
                $json .= '"edad":' . json_encode(utf8_encode($TutorOfendido->getEdad())) . ",";
                $json .= '"cveGenero":' . json_encode(utf8_encode($TutorOfendido->getCveGenero())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($TutorOfendido->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($TutoresofendidoscarpetasDto)) {
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
    
    public function agregarTutorOfendido($TutoresofendidoscarpetasDto)
    {
        $TutoresofendidoscarpetasDto = $this->validarTutoresofendidoscarpetas($TutoresofendidoscarpetasDto);
        $TutoresofendidoscarpetasController = new TutoresofendidoscarpetasController();
        $TutoresofendidoscarpetasDto = $TutoresofendidoscarpetasController->agregarTutorOfendido($TutoresofendidoscarpetasDto);

        return json_encode($TutoresofendidoscarpetasDto);
    }

    public function modificarTutorOfendido($TutoresofendidoscarpetasDto)
    {
        $TutoresofendidoscarpetasDto = $this->validarTutoresofendidoscarpetas($TutoresofendidoscarpetasDto);
        $TutoresofendidoscarpetasController = new TutoresofendidoscarpetasController();
        $TutoresofendidoscarpetasDto = $TutoresofendidoscarpetasController->modificarTutorOfendido($TutoresofendidoscarpetasDto);

        return json_encode($TutoresofendidoscarpetasDto);
    }

    public function eliminarTutorOfendido($TutoresofendidoscarpetasDto)
    {
        $TutoresofendidoscarpetasDto = $this->validarTutoresofendidoscarpetas($TutoresofendidoscarpetasDto);
        $TutoresofendidoscarpetasController = new TutoresofendidoscarpetasController();
        $TutoresofendidoscarpetasDto = $TutoresofendidoscarpetasController->eliminarTutorOfendido($TutoresofendidoscarpetasDto);

        return json_encode($TutoresofendidoscarpetasDto);
    }
    
    public function insertTutoresofendidoscarpetas($TutoresofendidoscarpetasDto){
        $TutoresofendidoscarpetasDto=$this->validarTutoresofendidoscarpetascarpetas($TutoresofendidoscarpetasDto);
        $TutoresofendidoscarpetasController = new TutoresofendidoscarpetasController();
        $TutoresofendidoscarpetasDto = $TutoresofendidoscarpetasController->insertTutoresofendidoscarpetas($TutoresofendidoscarpetasDto);
        if($TutoresofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($TutoresofendidoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    
    public function updateTutoresofendidoscarpetas($TutoresofendidoscarpetasDto){
        $TutoresofendidoscarpetasDto=$this->validarTutoresofendidoscarpetascarpetas($TutoresofendidoscarpetasDto);
        $TutoresofendidoscarpetasController = new TutoresofendidoscarpetasController();
        $TutoresofendidoscarpetasDto = $TutoresofendidoscarpetasController->updateTutoresofendidoscarpetas($TutoresofendidoscarpetasDto);
        if($TutoresofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($TutoresofendidoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    
    public function deleteTutoresofendidoscarpetas($TutoresofendidoscarpetasDto){
        $TutoresofendidoscarpetasDto=$this->validarTutoresofendidoscarpetascarpetas($TutoresofendidoscarpetasDto);
        $TutoresofendidoscarpetasController = new TutoresofendidoscarpetasController();
        $TutoresofendidoscarpetasDto = $TutoresofendidoscarpetasController->deleteTutoresofendidoscarpetas($TutoresofendidoscarpetasDto);
        if($TutoresofendidoscarpetasDto==true){
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



@$idTutorOfendidoCarpeta=$_POST["idTutorOfendidoCarpeta"];
@$idOfendidoCarpeta=$_POST["idOfendidoCarpeta"];
@$cveTipoTutor=$_POST["cveTipoTutor"];
@$ProvDef=$_POST["ProvDef"];
@$nombre=$_POST["nombre"];
@$paterno=$_POST["paterno"];
@$materno=$_POST["materno"];
@$fechaNacimiento=$_POST["fechaNacimiento"];
@$edad=$_POST["edad"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$cveGenero=$_POST["cveGenero"];
@$accion=$_POST["accion"];

$tutoresofendidoscarpetasFacade = new TutoresofendidoscarpetasFacade();
$tutoresofendidoscarpetasDto = new TutoresofendidoscarpetasDTO();

$tutoresofendidoscarpetasDto->setIdTutorOfendidoCarpeta($idTutorOfendidoCarpeta);
$tutoresofendidoscarpetasDto->setIdOfendidoCarpeta($idOfendidoCarpeta);
$tutoresofendidoscarpetasDto->setCveTipoTutor($cveTipoTutor);
$tutoresofendidoscarpetasDto->setProvDef($ProvDef);
$tutoresofendidoscarpetasDto->setNombre($nombre);
$tutoresofendidoscarpetasDto->setPaterno($paterno);
$tutoresofendidoscarpetasDto->setMaterno($materno);
$tutoresofendidoscarpetasDto->setFechaNacimiento($fechaNacimiento);
$tutoresofendidoscarpetasDto->setEdad($edad);
$tutoresofendidoscarpetasDto->setActivo($activo);
$tutoresofendidoscarpetasDto->setFechaRegistro($fechaRegistro);
$tutoresofendidoscarpetasDto->setFechaActualizacion($fechaActualizacion);
$tutoresofendidoscarpetasDto->setCveGenero($cveGenero);

if( ($accion=="guardar") && ($idTutorOfendidoCarpeta=="") ){
    $tutoresofendidoscarpetasDto=$tutoresofendidoscarpetasFacade->insertTutoresofendidoscarpetas($tutoresofendidoscarpetasDto);
    echo $tutoresofendidoscarpetasDto;
} else if(($accion=="guardar") && ($idTutorOfendidoCarpeta!="")){
    $tutoresofendidoscarpetasDto=$tutoresofendidoscarpetasFacade->updateTutoresofendidoscarpetas($tutoresofendidoscarpetasDto);
    echo $tutoresofendidoscarpetasDto;
} else if($accion=="consultar"){
    $tutoresofendidoscarpetasDto=$tutoresofendidoscarpetasFacade->selectTutoresofendidoscarpetas($tutoresofendidoscarpetasDto);
    echo $tutoresofendidoscarpetasDto;
} else if( ($accion=="baja") && ($idTutorOfendidoCarpeta!="") ){
    $tutoresofendidoscarpetasDto=$tutoresofendidoscarpetasFacade->deleteTutoresofendidoscarpetas($tutoresofendidoscarpetasDto);
    echo $tutoresofendidoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idTutorOfendidoCarpeta!="") ){
    $tutoresofendidoscarpetasDto=$tutoresofendidoscarpetasFacade->selectTutoresofendidoscarpetas($tutoresofendidoscarpetasDto);
    echo $tutoresofendidoscarpetasDto;
} else if ($accion == "agregar" && $idTutorOfendidoCarpeta == "") {
    $tutoresofendidoscarpetasDto = $tutoresofendidoscarpetasFacade->agregarTutorOfendido($tutoresofendidoscarpetasDto);
    echo $tutoresofendidoscarpetasDto;
} else if ($accion == "agregar" && $idTutorOfendidoCarpeta != "") {
    $tutoresofendidoscarpetasDto = $tutoresofendidoscarpetasFacade->modificarTutorOfendido($tutoresofendidoscarpetasDto);
    echo $tutoresofendidoscarpetasDto;
} else if ($accion == "eliminar" && $idTutorOfendidoCarpeta != "") {
    $tutoresofendidoscarpetasDto = $tutoresofendidoscarpetasFacade->eliminarTutorOfendido($tutoresofendidoscarpetasDto);
    echo $tutoresofendidoscarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>