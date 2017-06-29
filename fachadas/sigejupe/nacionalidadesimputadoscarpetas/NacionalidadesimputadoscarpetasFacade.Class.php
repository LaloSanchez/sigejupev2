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

include_once(dirname(__FILE__)."/../../../modelos/sigejupe/dto/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__)."/../../../controladores/sigejupe/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasController.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__)."/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/paises/PaisesController.Class.php");
class NacionalidadesimputadoscarpetasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto){
        $NacionalidadesimputadoscarpetasDto->setidNacionalidadImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NacionalidadesimputadoscarpetasDto->getidNacionalidadImputadoCarpeta(),"utf8"):strtoupper($NacionalidadesimputadoscarpetasDto->getidNacionalidadImputadoCarpeta()))))));
        if($this->esFecha($NacionalidadesimputadoscarpetasDto->getidNacionalidadImputadoCarpeta())){
            $NacionalidadesimputadoscarpetasDto->setidNacionalidadImputadoCarpeta($this->fechaMysql($NacionalidadesimputadoscarpetasDto->getidNacionalidadImputadoCarpeta()));
        }
        $NacionalidadesimputadoscarpetasDto->setcvePais(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NacionalidadesimputadoscarpetasDto->getcvePais(),"utf8"):strtoupper($NacionalidadesimputadoscarpetasDto->getcvePais()))))));
        if($this->esFecha($NacionalidadesimputadoscarpetasDto->getcvePais())){
            $NacionalidadesimputadoscarpetasDto->setcvePais($this->fechaMysql($NacionalidadesimputadoscarpetasDto->getcvePais()));
        }
        $NacionalidadesimputadoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NacionalidadesimputadoscarpetasDto->getactivo(),"utf8"):strtoupper($NacionalidadesimputadoscarpetasDto->getactivo()))))));
        if($this->esFecha($NacionalidadesimputadoscarpetasDto->getactivo())){
            $NacionalidadesimputadoscarpetasDto->setactivo($this->fechaMysql($NacionalidadesimputadoscarpetasDto->getactivo()));
        }
        $NacionalidadesimputadoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NacionalidadesimputadoscarpetasDto->getfechaRegistro(),"utf8"):strtoupper($NacionalidadesimputadoscarpetasDto->getfechaRegistro()))))));
        if($this->esFecha($NacionalidadesimputadoscarpetasDto->getfechaRegistro())){
            $NacionalidadesimputadoscarpetasDto->setfechaRegistro($this->fechaMysql($NacionalidadesimputadoscarpetasDto->getfechaRegistro()));
        }
        $NacionalidadesimputadoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NacionalidadesimputadoscarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($NacionalidadesimputadoscarpetasDto->getfechaActualizacion()))))));
        if($this->esFecha($NacionalidadesimputadoscarpetasDto->getfechaActualizacion())){
            $NacionalidadesimputadoscarpetasDto->setfechaActualizacion($this->fechaMysql($NacionalidadesimputadoscarpetasDto->getfechaActualizacion()));
        }
        $NacionalidadesimputadoscarpetasDto->setidImputadoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NacionalidadesimputadoscarpetasDto->getidImputadoCarpeta(),"utf8"):strtoupper($NacionalidadesimputadoscarpetasDto->getidImputadoCarpeta()))))));
        if($this->esFecha($NacionalidadesimputadoscarpetasDto->getidImputadoCarpeta())){
            $NacionalidadesimputadoscarpetasDto->setidImputadoCarpeta($this->fechaMysql($NacionalidadesimputadoscarpetasDto->getidImputadoCarpeta()));
        }
        return $NacionalidadesimputadoscarpetasDto;
    }
    public function selectNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto){
        $NacionalidadesimputadoscarpetasDto=$this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $NacionalidadesimputadoscarpetasController = new NacionalidadesimputadoscarpetasController();
        $NacionalidadesimputadoscarpetasDto = $NacionalidadesimputadoscarpetasController->selectNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $json = "";
        $x = 1;
        $PaisesDto = new PaisesDTO();
        $PaisesDao = new PaisesDAO();
        if($NacionalidadesimputadoscarpetasDto!=""){
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($NacionalidadesimputadoscarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($NacionalidadesimputadoscarpetasDto as $NacionalidadImputado) {
                $PaisesDto->setCvePais($NacionalidadImputado->getCvePais());
                $rsPais = $PaisesDao->selectPaises($PaisesDto);
                $json .= "{";
                $json .= '"idNacionalidadImputadoCarpeta":' . json_encode(utf8_encode($NacionalidadImputado->getIdNacionalidadImputadoCarpeta())) . ",";
                $json .= '"idImputadoCarpeta":' . json_encode(utf8_encode($NacionalidadImputado->getIdImputadoCarpeta())) . ",";
                $json .= '"cvePais":' . json_encode(utf8_encode($NacionalidadImputado->getCvePais())) . ",";
                if ($rsPais != "") {
                    $json .= '"desPais":' . json_encode(utf8_encode($rsPais[0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPais": "N/A",';
                }
                $json .= '"activo":' . json_encode(utf8_encode($NacionalidadImputado->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($NacionalidadesimputadoscarpetasDto)) {
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
    public function insertNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto){
        /*$NacionalidadesimputadoscarpetasDto=$this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $NacionalidadesimputadoscarpetasController = new NacionalidadesimputadoscarpetasController();
        $NacionalidadesimputadoscarpetasDto = $NacionalidadesimputadoscarpetasController->insertNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        if($NacionalidadesimputadoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($NacionalidadesimputadoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));*/
        $NacionalidadesimputadoscarpetasDto = $this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $NacionalidadesimputadoscarpetasController = new NacionalidadesimputadoscarpetasController();
        $rs = $NacionalidadesimputadoscarpetasController->insertNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        return $rs;
    }
    
    public function updateNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto){
        /*$NacionalidadesimputadoscarpetasDto=$this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $NacionalidadesimputadoscarpetasController = new NacionalidadesimputadoscarpetasController();
        $NacionalidadesimputadoscarpetasDto = $NacionalidadesimputadoscarpetasController->updateNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        if($NacionalidadesimputadoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($NacionalidadesimputadoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));*/
        $NacionalidadesimputadoscarpetasDto = $this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $NacionalidadesimputadoscarpetasController = new NacionalidadesimputadoscarpetasController();
        $rs = $NacionalidadesimputadoscarpetasController->updateNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        return $rs;
    }
    
    public function deleteNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto){
        /*$NacionalidadesimputadoscarpetasDto=$this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $NacionalidadesimputadoscarpetasController = new NacionalidadesimputadoscarpetasController();
        $NacionalidadesimputadoscarpetasDto = $NacionalidadesimputadoscarpetasController->deleteNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        if($NacionalidadesimputadoscarpetasDto==true){
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount"=>"0","text"=>"REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));*/
        $NacionalidadesimputadoscarpetasDto = $this->validarNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
        $NacionalidadesimputadoscarpetasController = new NacionalidadesimputadoscarpetasController();
        $rs = $NacionalidadesimputadoscarpetasController->deleteNacionalidadesimputadoscarpetas($NacionalidadesimputadoscarpetasDto);
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



@$idNacionalidadImputadoCarpeta=$_POST["idNacionalidadImputadoCarpeta"];
@$cvePais=$_POST["cvePais"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$idImputadoCarpeta=$_POST["idImputadoCarpeta"];
@$accion=$_POST["accion"];

$nacionalidadesimputadoscarpetasFacade = new NacionalidadesimputadoscarpetasFacade();
$nacionalidadesimputadoscarpetasDto = new NacionalidadesimputadoscarpetasDTO();

$nacionalidadesimputadoscarpetasDto->setIdNacionalidadImputadoCarpeta($idNacionalidadImputadoCarpeta);
$nacionalidadesimputadoscarpetasDto->setCvePais($cvePais);
$nacionalidadesimputadoscarpetasDto->setActivo($activo);
$nacionalidadesimputadoscarpetasDto->setFechaRegistro($fechaRegistro);
$nacionalidadesimputadoscarpetasDto->setFechaActualizacion($fechaActualizacion);
$nacionalidadesimputadoscarpetasDto->setIdImputadoCarpeta($idImputadoCarpeta);

if( ($accion=="guardar") && ($idNacionalidadImputadoCarpeta=="") ){
    $nacionalidadesimputadoscarpetasDto=$nacionalidadesimputadoscarpetasFacade->insertNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto);
    echo $nacionalidadesimputadoscarpetasDto;
} else if(($accion=="guardar") && ($idNacionalidadImputadoCarpeta!="")){
    $nacionalidadesimputadoscarpetasDto=$nacionalidadesimputadoscarpetasFacade->updateNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto);
    echo $nacionalidadesimputadoscarpetasDto;
} else if($accion=="consultar"){
    $nacionalidadesimputadoscarpetasDto=$nacionalidadesimputadoscarpetasFacade->selectNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto);
    echo $nacionalidadesimputadoscarpetasDto;
} else if( ($accion=="baja") && ($idNacionalidadImputadoCarpeta!="") ){
    $nacionalidadesimputadoscarpetasDto=$nacionalidadesimputadoscarpetasFacade->deleteNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto);
    echo $nacionalidadesimputadoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idNacionalidadImputadoCarpeta!="") ){
    $nacionalidadesimputadoscarpetasDto=$nacionalidadesimputadoscarpetasFacade->selectNacionalidadesimputadoscarpetas($nacionalidadesimputadoscarpetasDto);
    echo $nacionalidadesimputadoscarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>