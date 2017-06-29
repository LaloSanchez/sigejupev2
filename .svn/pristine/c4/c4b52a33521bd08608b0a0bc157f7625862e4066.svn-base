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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/paises/PaisesController.Class.php");
class NacionalidadesofendidoscarpetasFacade {
    private $proveedor;
    public function __construct() {
    }
    public function validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto){
        $NacionalidadesofendidoscarpetasDto->setidNacionalidadOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NacionalidadesofendidoscarpetasDto->getidNacionalidadOfendidoCarpeta(),"utf8"):strtoupper($NacionalidadesofendidoscarpetasDto->getidNacionalidadOfendidoCarpeta()))))));
        if($this->esFecha($NacionalidadesofendidoscarpetasDto->getidNacionalidadOfendidoCarpeta())){
            $NacionalidadesofendidoscarpetasDto->setidNacionalidadOfendidoCarpeta($this->fechaMysql($NacionalidadesofendidoscarpetasDto->getidNacionalidadOfendidoCarpeta()));
        }
        $NacionalidadesofendidoscarpetasDto->setcvePais(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NacionalidadesofendidoscarpetasDto->getcvePais(),"utf8"):strtoupper($NacionalidadesofendidoscarpetasDto->getcvePais()))))));
        if($this->esFecha($NacionalidadesofendidoscarpetasDto->getcvePais())){
            $NacionalidadesofendidoscarpetasDto->setcvePais($this->fechaMysql($NacionalidadesofendidoscarpetasDto->getcvePais()));
        }
        $NacionalidadesofendidoscarpetasDto->setactivo(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NacionalidadesofendidoscarpetasDto->getactivo(),"utf8"):strtoupper($NacionalidadesofendidoscarpetasDto->getactivo()))))));
        if($this->esFecha($NacionalidadesofendidoscarpetasDto->getactivo())){
            $NacionalidadesofendidoscarpetasDto->setactivo($this->fechaMysql($NacionalidadesofendidoscarpetasDto->getactivo()));
        }
        $NacionalidadesofendidoscarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NacionalidadesofendidoscarpetasDto->getfechaRegistro(),"utf8"):strtoupper($NacionalidadesofendidoscarpetasDto->getfechaRegistro()))))));
        if($this->esFecha($NacionalidadesofendidoscarpetasDto->getfechaRegistro())){
            $NacionalidadesofendidoscarpetasDto->setfechaRegistro($this->fechaMysql($NacionalidadesofendidoscarpetasDto->getfechaRegistro()));
        }
        $NacionalidadesofendidoscarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NacionalidadesofendidoscarpetasDto->getfechaActualizacion(),"utf8"):strtoupper($NacionalidadesofendidoscarpetasDto->getfechaActualizacion()))))));
        if($this->esFecha($NacionalidadesofendidoscarpetasDto->getfechaActualizacion())){
            $NacionalidadesofendidoscarpetasDto->setfechaActualizacion($this->fechaMysql($NacionalidadesofendidoscarpetasDto->getfechaActualizacion()));
        }
        $NacionalidadesofendidoscarpetasDto->setidOfendidoCarpeta(strtoupper(str_ireplace("'","",trim(utf8_decode((phpversion()<=5.5) ? mb_strtoupper($NacionalidadesofendidoscarpetasDto->getidOfendidoCarpeta(),"utf8"):strtoupper($NacionalidadesofendidoscarpetasDto->getidOfendidoCarpeta()))))));
        if($this->esFecha($NacionalidadesofendidoscarpetasDto->getidOfendidoCarpeta())){
            $NacionalidadesofendidoscarpetasDto->setidOfendidoCarpeta($this->fechaMysql($NacionalidadesofendidoscarpetasDto->getidOfendidoCarpeta()));
        }
        return $NacionalidadesofendidoscarpetasDto;
    }
    
    public function selectNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto){
        /*$NacionalidadesofendidoscarpetasDto=$this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $NacionalidadesofendidoscarpetasController = new NacionalidadesofendidoscarpetasController();
        $NacionalidadesofendidoscarpetasDto = $NacionalidadesofendidoscarpetasController->selectNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        if($NacionalidadesofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($NacionalidadesofendidoscarpetasDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"SIN RESULTADOS A MOSTRAR"));*/
        $NacionalidadesofendidoscarpetasDto=$this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $NacionalidadesofendidoscarpetasController = new NacionalidadesofendidoscarpetasController();
        $NacionalidadesofendidoscarpetasDto = $NacionalidadesofendidoscarpetasController->selectNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $json = "";
        $x = 1;
        $PaisesDto = new PaisesDTO();
        $PaisesDao = new PaisesDAO();
        if($NacionalidadesofendidoscarpetasDto!=""){
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($NacionalidadesofendidoscarpetasDto) . '",';
            $json .= '"data":[';
            foreach ($NacionalidadesofendidoscarpetasDto as $NacionalidadOfendido) {
                $PaisesDto->setCvePais($NacionalidadOfendido->getCvePais());
                $rsPais = $PaisesDao->selectPaises($PaisesDto);
                $json .= "{";
                $json .= '"idNacionalidadOfendidoCarpeta":' . json_encode(utf8_encode($NacionalidadOfendido->getIdNacionalidadOfendidoCarpeta())) . ",";
                $json .= '"idOfendidoCarpeta":' . json_encode(utf8_encode($NacionalidadOfendido->getIdOfendidoCarpeta())) . ",";
                $json .= '"cvePais":' . json_encode(utf8_encode($NacionalidadOfendido->getCvePais())) . ",";
                if ($rsPais != "") {
                    $json .= '"desPais":' . json_encode(utf8_encode($rsPais[0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPais": "N/A",';
                }
                $json .= '"activo":' . json_encode(utf8_encode($NacionalidadOfendido->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($NacionalidadesofendidoscarpetasDto)) {
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
    
    /**
     * @param $NacionalidadesofendidoscarpetasDto
     * @return string
     */
    public function agregarNacionalidadOfendido($NacionalidadesofendidoscarpetasDto)
    {
        $NacionalidadesofendidoscarpetasDto = $this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $NacionalidadesofendidoscarpetasController = new NacionalidadesofendidoscarpetasController();
        $NacionalidadesofendidoscarpetasDto = $NacionalidadesofendidoscarpetasController->agregarNacionalidadOfendido($NacionalidadesofendidoscarpetasDto);

        return json_encode($NacionalidadesofendidoscarpetasDto);
    }

    /**
     * @param $NacionalidadesofendidoscarpetasDto
     * @return string
     */
    public function modificarNacionalidadOfendido($NacionalidadesofendidoscarpetasDto)
    {
        $NacionalidadesofendidoscarpetasDto = $this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $NacionalidadesofendidoscarpetasController = new NacionalidadesofendidoscarpetasController();
        $NacionalidadesofendidoscarpetasDto = $NacionalidadesofendidoscarpetasController->modificarNacionalidadOfendido($NacionalidadesofendidoscarpetasDto);

        return json_encode($NacionalidadesofendidoscarpetasDto);
    }

    /**
     * eliminado logico = cambia el estatus a N
     * @param $NacionalidadesofendidoscarpetasDto
     * @return string
     */
    public function eliminarNacionalidadOfendido($NacionalidadesofendidoscarpetasDto)
    {
        $NacionalidadesofendidoscarpetasDto = $this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $NacionalidadesofendidoscarpetasController = new NacionalidadesofendidoscarpetasController();
        $NacionalidadesofendidoscarpetasDto = $NacionalidadesofendidoscarpetasController->eliminarNacionalidadOfendido($NacionalidadesofendidoscarpetasDto);

        return json_encode($NacionalidadesofendidoscarpetasDto);
    }
    
    public function insertNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto){
        $NacionalidadesofendidoscarpetasDto=$this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $NacionalidadesofendidoscarpetasController = new NacionalidadesofendidoscarpetasController();
        $NacionalidadesofendidoscarpetasDto = $NacionalidadesofendidoscarpetasController->insertNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        if($NacionalidadesofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($NacionalidadesofendidoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }
    
    public function updateNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto){
        $NacionalidadesofendidoscarpetasDto=$this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $NacionalidadesofendidoscarpetasController = new NacionalidadesofendidoscarpetasController();
        $NacionalidadesofendidoscarpetasDto = $NacionalidadesofendidoscarpetasController->updateNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        if($NacionalidadesofendidoscarpetasDto!=""){
            $dtoToJson = new DtoToJson($NacionalidadesofendidoscarpetasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    
    public function deleteNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto){
        $NacionalidadesofendidoscarpetasDto=$this->validarNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        $NacionalidadesofendidoscarpetasController = new NacionalidadesofendidoscarpetasController();
        $NacionalidadesofendidoscarpetasDto = $NacionalidadesofendidoscarpetasController->deleteNacionalidadesofendidoscarpetas($NacionalidadesofendidoscarpetasDto);
        if($NacionalidadesofendidoscarpetasDto==true){
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



@$idNacionalidadOfendidoCarpeta=$_POST["idNacionalidadOfendidoCarpeta"];
@$cvePais=$_POST["cvePais"];
@$activo=$_POST["activo"];
@$fechaRegistro=$_POST["fechaRegistro"];
@$fechaActualizacion=$_POST["fechaActualizacion"];
@$idOfendidoCarpeta=$_POST["idOfendidoCarpeta"];
@$accion=$_POST["accion"];

$nacionalidadesofendidoscarpetasFacade = new NacionalidadesofendidoscarpetasFacade();
$nacionalidadesofendidoscarpetasDto = new NacionalidadesofendidoscarpetasDTO();

$nacionalidadesofendidoscarpetasDto->setIdNacionalidadOfendidoCarpeta($idNacionalidadOfendidoCarpeta);
$nacionalidadesofendidoscarpetasDto->setCvePais($cvePais);
$nacionalidadesofendidoscarpetasDto->setActivo($activo);
$nacionalidadesofendidoscarpetasDto->setFechaRegistro($fechaRegistro);
$nacionalidadesofendidoscarpetasDto->setFechaActualizacion($fechaActualizacion);
$nacionalidadesofendidoscarpetasDto->setIdOfendidoCarpeta($idOfendidoCarpeta);

if( ($accion=="guardar") && ($idNacionalidadOfendidoCarpeta=="") ){
    $nacionalidadesofendidoscarpetasDto=$nacionalidadesofendidoscarpetasFacade->insertNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto);
    echo $nacionalidadesofendidoscarpetasDto;
} else if(($accion=="guardar") && ($idNacionalidadOfendidoCarpeta!="")){
    $nacionalidadesofendidoscarpetasDto=$nacionalidadesofendidoscarpetasFacade->updateNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto);
    echo $nacionalidadesofendidoscarpetasDto;
} else if($accion=="consultar"){
    $nacionalidadesofendidoscarpetasDto=$nacionalidadesofendidoscarpetasFacade->selectNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto);
    echo $nacionalidadesofendidoscarpetasDto;
} else if( ($accion=="baja") && ($idNacionalidadOfendidoCarpeta!="") ){
    $nacionalidadesofendidoscarpetasDto=$nacionalidadesofendidoscarpetasFacade->deleteNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto);
    echo $nacionalidadesofendidoscarpetasDto;
} else if( ($accion=="seleccionar") && ($idNacionalidadOfendidoCarpeta!="") ){
    $nacionalidadesofendidoscarpetasDto=$nacionalidadesofendidoscarpetasFacade->selectNacionalidadesofendidoscarpetas($nacionalidadesofendidoscarpetasDto);
    echo $nacionalidadesofendidoscarpetasDto;
} else if ($accion == "agregar" && $idNacionalidadOfendidoCarpeta == "") {
    $nacionalidadesofendidoscarpetasDto = $nacionalidadesofendidoscarpetasFacade->agregarNacionalidadOfendido($nacionalidadesofendidoscarpetasDto);
    echo $nacionalidadesofendidoscarpetasDto;
} else if ($accion == "agregar" && $idNacionalidadOfendidoCarpeta != "") {
    $nacionalidadesofendidoscarpetasDto = $nacionalidadesofendidoscarpetasFacade->modificarNacionalidadOfendido($nacionalidadesofendidoscarpetasDto);
    echo $nacionalidadesofendidoscarpetasDto;
} else if ($accion == "eliminar" && $idNacionalidadOfendidoCarpeta != "") {
    $nacionalidadesofendidoscarpetasDto = $nacionalidadesofendidoscarpetasFacade->eliminarNacionalidadOfendido($nacionalidadesofendidoscarpetasDto);
    echo $nacionalidadesofendidoscarpetasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}

?>