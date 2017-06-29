<?php

/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 FACADES
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

 if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresjuzgados/JuzgadoresjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class JuzgadoresjuzgadosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarJuzgadoresjuzgados($JuzgadoresjuzgadosDto) {
        $JuzgadoresjuzgadosDto->setidJuzgadorJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresjuzgadosDto->getidJuzgadorJuzgado(), "utf8") : strtoupper($JuzgadoresjuzgadosDto->getidJuzgadorJuzgado()))))));
        if ($this->esFecha($JuzgadoresjuzgadosDto->getidJuzgadorJuzgado())) {
            $JuzgadoresjuzgadosDto->setidJuzgadorJuzgado($this->fechaMysql($JuzgadoresjuzgadosDto->getidJuzgadorJuzgado()));
        }
        $JuzgadoresjuzgadosDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresjuzgadosDto->getidJuzgador(), "utf8") : strtoupper($JuzgadoresjuzgadosDto->getidJuzgador()))))));
        if ($this->esFecha($JuzgadoresjuzgadosDto->getidJuzgador())) {
            $JuzgadoresjuzgadosDto->setidJuzgador($this->fechaMysql($JuzgadoresjuzgadosDto->getidJuzgador()));
        }
        $JuzgadoresjuzgadosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresjuzgadosDto->getcveJuzgado(), "utf8") : strtoupper($JuzgadoresjuzgadosDto->getcveJuzgado()))))));
        if ($this->esFecha($JuzgadoresjuzgadosDto->getcveJuzgado())) {
            $JuzgadoresjuzgadosDto->setcveJuzgado($this->fechaMysql($JuzgadoresjuzgadosDto->getcveJuzgado()));
        }
        $JuzgadoresjuzgadosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresjuzgadosDto->getactivo(), "utf8") : strtoupper($JuzgadoresjuzgadosDto->getactivo()))))));
        if ($this->esFecha($JuzgadoresjuzgadosDto->getactivo())) {
            $JuzgadoresjuzgadosDto->setactivo($this->fechaMysql($JuzgadoresjuzgadosDto->getactivo()));
        }
        $JuzgadoresjuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresjuzgadosDto->getfechaRegistro(), "utf8") : strtoupper($JuzgadoresjuzgadosDto->getfechaRegistro()))))));
        if ($this->esFecha($JuzgadoresjuzgadosDto->getfechaRegistro())) {
            $JuzgadoresjuzgadosDto->setfechaRegistro($this->fechaMysql($JuzgadoresjuzgadosDto->getfechaRegistro()));
        }
        $JuzgadoresjuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresjuzgadosDto->getfechaActualizacion(), "utf8") : strtoupper($JuzgadoresjuzgadosDto->getfechaActualizacion()))))));
        if ($this->esFecha($JuzgadoresjuzgadosDto->getfechaActualizacion())) {
            $JuzgadoresjuzgadosDto->setfechaActualizacion($this->fechaMysql($JuzgadoresjuzgadosDto->getfechaActualizacion()));
        }
        return $JuzgadoresjuzgadosDto;
    }

    public function selectJuzgadoresjuzgados($JuzgadoresjuzgadosDto) {
        $JuzgadoresjuzgadosDto = $this->validarJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $JuzgadoresjuzgadosDto = $JuzgadoresjuzgadosController->selectJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        if ($JuzgadoresjuzgadosDto != "") {
            $dtoToJson = new DtoToJson($JuzgadoresjuzgadosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertJuzgadoresjuzgados($JuzgadoresjuzgadosDto) {
        $JuzgadoresjuzgadosDto = $this->validarJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $JuzgadoresjuzgadosDto = $JuzgadoresjuzgadosController->insertJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        if ($JuzgadoresjuzgadosDto != "") {
            $dtoToJson = new DtoToJson($JuzgadoresjuzgadosDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateJuzgadoresjuzgados($JuzgadoresjuzgadosDto) {
        $JuzgadoresjuzgadosDto = $this->validarJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $JuzgadoresjuzgadosDto = $JuzgadoresjuzgadosController->updateJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        if ($JuzgadoresjuzgadosDto != "") {
            $dtoToJson = new DtoToJson($JuzgadoresjuzgadosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteJuzgadoresjuzgados($JuzgadoresjuzgadosDto) {
        $JuzgadoresjuzgadosDto = $this->validarJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $JuzgadoresjuzgadosDto = $JuzgadoresjuzgadosController->deleteJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        if ($JuzgadoresjuzgadosDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function detalleJuzgadores($JuzgadoresjuzgadosDto) {
        $JuzgadoresjuzgadosDto = $this->validarJuzgadoresjuzgados($JuzgadoresjuzgadosDto);
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $JuzgadoresjuzgadosDto = $JuzgadoresjuzgadosController->detalleJuzgadores($JuzgadoresjuzgadosDto);
        return $JuzgadoresjuzgadosDto;
    }

    public function getinfojuzgadores($param) {
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $result = $JuzgadoresjuzgadosController->getinfojuzgadores($param);
        return $result;
    }

    public function changeInfoJuzgador($param) {
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $result = $JuzgadoresjuzgadosController->changeInfoJuzgador($param);
        return $result;
    }

    public function consultaJuzgadoresAdmin($juzgadoresjuzgadosDto) {
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $result = $JuzgadoresjuzgadosController->consultaJuzgadoresAdmin($juzgadoresjuzgadosDto);
        return $result;
    }

    public function guardaJuzgadoreJuzgado($juzgadoresjuzgadosDto) {
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $result = $JuzgadoresjuzgadosController->guardaJuzgadoreJuzgado($juzgadoresjuzgadosDto);
        return $result;
    }

    public function consultarJuzgadoresJuz($juzgadoresjuzgadosDto, $param) {
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $result = $JuzgadoresjuzgadosController->consultarJuzgadoresJuz($juzgadoresjuzgadosDto, $param);
        return $result;
    }

    public function consultarJuzgadores($juzgadoresjuzgadosDto, $param) {
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $result = $JuzgadoresjuzgadosController->consultarJuzgadores($juzgadoresjuzgadosDto, $param);
        return $result;
    }

    public function getPaginas($juzgadoresjuzgadosDto, $param) {
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $result = $JuzgadoresjuzgadosController->getPaginas($juzgadoresjuzgadosDto, $param);
        return $result;
    }

    public function getPaginasJuzgador($juzgadoresjuzgadosDto, $param) {
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $result = $JuzgadoresjuzgadosController->getPaginasJuzgador($juzgadoresjuzgadosDto, $param);
        return $result;
    }
    public function detalleJuzgados($juzgadoresjuzgadosDto) {
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $result = $JuzgadoresjuzgadosController->detalleJuzgados($juzgadoresjuzgadosDto);
        return $result;
    }
    public function eliminar($juzgadoresjuzgadosDto) {
        $JuzgadoresjuzgadosController = new JuzgadoresjuzgadosController();
        $result = $JuzgadoresjuzgadosController->eliminar($juzgadoresjuzgadosDto);
        return $result;
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

@$idJuzgadorJuzgado = $_POST["idJuzgadorJuzgado"];
@$idJuzgador = $_POST["idJuzgador"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];
@$cveJuzgados = $_POST["cveJuzgados"];

$param = array();
@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["generico"] = $_POST['generico'];

$juzgadoresjuzgadosFacade = new JuzgadoresjuzgadosFacade();
$juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();

$juzgadoresjuzgadosDto->setIdJuzgadorJuzgado($idJuzgadorJuzgado);
$juzgadoresjuzgadosDto->setIdJuzgador($idJuzgador);
$juzgadoresjuzgadosDto->setCveJuzgado($cveJuzgado);
$juzgadoresjuzgadosDto->setActivo($activo);
$juzgadoresjuzgadosDto->setFechaRegistro($fechaRegistro);
$juzgadoresjuzgadosDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idJuzgadorJuzgado == "")) {
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->insertJuzgadoresjuzgados($juzgadoresjuzgadosDto);
    echo $juzgadoresjuzgadosDto;
} else if (($accion == "guardar") && ($idJuzgadorJuzgado != "")) {
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->updateJuzgadoresjuzgados($juzgadoresjuzgadosDto);
    echo $juzgadoresjuzgadosDto;
} else if ($accion == "consultar") {
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto);
    echo $juzgadoresjuzgadosDto;
} else if (($accion == "baja") && ($idJuzgadorJuzgado != "")) {
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->deleteJuzgadoresjuzgados($juzgadoresjuzgadosDto);
    echo $juzgadoresjuzgadosDto;
} else if (($accion == "seleccionar") && ($idJuzgadorJuzgado != "")) {
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->selectJuzgadoresjuzgados($juzgadoresjuzgadosDto);
    echo $juzgadoresjuzgadosDto;
} else if ($accion == "detalleJuzgadores") {
    echo $juzgadoresjuzgadosFacade->detalleJuzgadores($juzgadoresjuzgadosDto);
} else if ($accion == "getinfojuzgadores") {
    $param = array();
    $param["juzgadores"] = $_POST["juzgadores"];
    $param["juzgado"] = $_POST["juzgados"];
    echo $juzgadoresjuzgadosFacade->getinfojuzgadores($param);
} else if ($accion == "changeInfoJuzgador") {
    $param = array();
    $param["juzgadoOrigen"] = $_POST["juzgadoOrigen"];
    $param["juzgadoDestino"] = $_POST["juzgadoDestino"];
    $param["juzgadorDestino"] = $_POST["juzgadorDestino"];
    $param["juzgadorOrigen"] = $_POST["juzgadorOrigen"];
    $param["carpetasDestino"] = $_POST["carpetasDestino"];
    $param["carpetasOrigen"] = $_POST["carpetasOrigen"];
    $param["audienciasDestino"] = $_POST["audienciasDestino"];
    $param["audienciasOrigen"] = $_POST["audienciasOrigen"];
    echo $juzgadoresjuzgadosFacade->changeInfoJuzgador($param);
} else if ($accion == "consultaJuzgadoresAdmin") {
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->consultaJuzgadoresAdmin($juzgadoresjuzgadosDto);
    echo $juzgadoresjuzgadosDto;
} else if ($accion == "guardaJuzgadoreJuzgado") {
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->guardaJuzgadoreJuzgado($juzgadoresjuzgadosDto);
    echo $juzgadoresjuzgadosDto;
} else if ($accion == "consultarJuzgadoresJuz") {
    $param["paginacion"] = true;
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->consultarJuzgadoresJuz($juzgadoresjuzgadosDto, $param);
    echo $juzgadoresjuzgadosDto;
} else if ($accion == "getPaginas") {
    $param["paginacion"] = true;
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->getPaginas($juzgadoresjuzgadosDto, $param);
    echo $juzgadoresjuzgadosDto;
} else if ($accion == "consultarJuzgadores") {
    $param["paginacion"] = true;
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->consultarJuzgadores($juzgadoresjuzgadosDto, $param);
    echo $juzgadoresjuzgadosDto;
} else if ($accion == "getPaginasJuzgador") {
    $param["paginacion"] = true;
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->getPaginasJuzgador($juzgadoresjuzgadosDto, $param);
    echo $juzgadoresjuzgadosDto;
} else if ($accion == "detalleJuzgados") {
    $param["paginacion"] = true;
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->detalleJuzgados($juzgadoresjuzgadosDto);
    echo $juzgadoresjuzgadosDto;
} else if ($accion == "eliminar") {
    $juzgadoresjuzgadosDto = $juzgadoresjuzgadosFacade->eliminar($juzgadoresjuzgadosDto);
    echo $juzgadoresjuzgadosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>