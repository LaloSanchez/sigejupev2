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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/nacionalidadesimputadossolicitudes/NacionalidadesimputadossolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/paises/PaisesController.Class.php");

class NacionalidadesimputadossolicitudesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto) {
        $NacionalidadesimputadossolicitudesDto->setidNacionalidadImputadoSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($NacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud(), "utf8") : strtoupper($NacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()))))));
        if ($this->esFecha($NacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud())) {
            $NacionalidadesimputadossolicitudesDto->setidNacionalidadImputadoSolicitud($this->fechaMysql($NacionalidadesimputadossolicitudesDto->getidNacionalidadImputadoSolicitud()));
        }
        $NacionalidadesimputadossolicitudesDto->setcvePais(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($NacionalidadesimputadossolicitudesDto->getcvePais(), "utf8") : strtoupper($NacionalidadesimputadossolicitudesDto->getcvePais()))))));
        if ($this->esFecha($NacionalidadesimputadossolicitudesDto->getcvePais())) {
            $NacionalidadesimputadossolicitudesDto->setcvePais($this->fechaMysql($NacionalidadesimputadossolicitudesDto->getcvePais()));
        }
        $NacionalidadesimputadossolicitudesDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($NacionalidadesimputadossolicitudesDto->getactivo(), "utf8") : strtoupper($NacionalidadesimputadossolicitudesDto->getactivo()))))));
        if ($this->esFecha($NacionalidadesimputadossolicitudesDto->getactivo())) {
            $NacionalidadesimputadossolicitudesDto->setactivo($this->fechaMysql($NacionalidadesimputadossolicitudesDto->getactivo()));
        }
        $NacionalidadesimputadossolicitudesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($NacionalidadesimputadossolicitudesDto->getfechaRegistro(), "utf8") : strtoupper($NacionalidadesimputadossolicitudesDto->getfechaRegistro()))))));
        if ($this->esFecha($NacionalidadesimputadossolicitudesDto->getfechaRegistro())) {
            $NacionalidadesimputadossolicitudesDto->setfechaRegistro($this->fechaMysql($NacionalidadesimputadossolicitudesDto->getfechaRegistro()));
        }
        $NacionalidadesimputadossolicitudesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($NacionalidadesimputadossolicitudesDto->getfechaActualizacion(), "utf8") : strtoupper($NacionalidadesimputadossolicitudesDto->getfechaActualizacion()))))));
        if ($this->esFecha($NacionalidadesimputadossolicitudesDto->getfechaActualizacion())) {
            $NacionalidadesimputadossolicitudesDto->setfechaActualizacion($this->fechaMysql($NacionalidadesimputadossolicitudesDto->getfechaActualizacion()));
        }
        $NacionalidadesimputadossolicitudesDto->setidImputadoSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($NacionalidadesimputadossolicitudesDto->getidImputadoSolicitud(), "utf8") : strtoupper($NacionalidadesimputadossolicitudesDto->getidImputadoSolicitud()))))));
        if ($this->esFecha($NacionalidadesimputadossolicitudesDto->getidImputadoSolicitud())) {
            $NacionalidadesimputadossolicitudesDto->setidImputadoSolicitud($this->fechaMysql($NacionalidadesimputadossolicitudesDto->getidImputadoSolicitud()));
        }
        return $NacionalidadesimputadossolicitudesDto;
    }

    public function selectNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto) {
        $NacionalidadesimputadossolicitudesDto = $this->validarNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto);
        $NacionalidadesimputadossolicitudesController = new NacionalidadesimputadossolicitudesController();
        $NacionalidadesimputadossolicitudesDto = $NacionalidadesimputadossolicitudesController->selectNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto);
        $json = "";
        $x = 1;
        $PaisesDto = new PaisesDTO();
        $PaisesDao = new PaisesDAO();
        if ($NacionalidadesimputadossolicitudesDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($NacionalidadesimputadossolicitudesDto) . '",';
            $json .= '"data":[';
            foreach ($NacionalidadesimputadossolicitudesDto as $NacionalidadImputado) {
                $PaisesDto->setCvePais($NacionalidadImputado->getCvePais());
                $rsPais = $PaisesDao->selectPaises($PaisesDto);
                $json .= "{";
                $json .= '"idNacionalidadImputadoSolicitud":' . json_encode(utf8_encode($NacionalidadImputado->getIdNacionalidadImputadoSolicitud())) . ",";
                $json .= '"idImputadoSolicitud":' . json_encode(utf8_encode($NacionalidadImputado->getIdImputadoSolicitud())) . ",";
                $json .= '"cvePais":' . json_encode(utf8_encode($NacionalidadImputado->getCvePais())) . ",";
                if ($rsPais != "") {
                    $json .= '"desPais":' . json_encode(utf8_encode($rsPais[0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPais": "N/A",';
                }
                $json .= '"activo":' . json_encode(utf8_encode($NacionalidadImputado->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($NacionalidadesimputadossolicitudesDto)) {
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

    public function insertNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto) {
        $NacionalidadesimputadossolicitudesDto = $this->validarNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto);
        $NacionalidadesimputadossolicitudesController = new NacionalidadesimputadossolicitudesController();
        $rs = $NacionalidadesimputadossolicitudesController->insertNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto);
        return $rs;
    }

    public function updateNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto) {
        $NacionalidadesimputadossolicitudesDto = $this->validarNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto);
        $NacionalidadesimputadossolicitudesController = new NacionalidadesimputadossolicitudesController();
        $rs = $NacionalidadesimputadossolicitudesController->updateNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto);
        return $rs;
    }

    public function deleteNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto) {
        $NacionalidadesimputadossolicitudesDto = $this->validarNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto);
        $NacionalidadesimputadossolicitudesController = new NacionalidadesimputadossolicitudesController();
        $rs = $NacionalidadesimputadossolicitudesController->deleteNacionalidadesimputadossolicitudes($NacionalidadesimputadossolicitudesDto);
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

@$idNacionalidadImputadoSolicitud = $_POST["idNacionalidadImputadoSolicitud"];
@$cvePais = $_POST["cvePais"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$idImputadoSolicitud = $_POST["idImputadoSolicitud"];
@$accion = $_POST["accion"];

$nacionalidadesimputadossolicitudesFacade = new NacionalidadesimputadossolicitudesFacade();
$nacionalidadesimputadossolicitudesDto = new NacionalidadesimputadossolicitudesDTO();

$nacionalidadesimputadossolicitudesDto->setIdNacionalidadImputadoSolicitud($idNacionalidadImputadoSolicitud);
$nacionalidadesimputadossolicitudesDto->setCvePais($cvePais);
$nacionalidadesimputadossolicitudesDto->setActivo($activo);
$nacionalidadesimputadossolicitudesDto->setFechaRegistro($fechaRegistro);
$nacionalidadesimputadossolicitudesDto->setFechaActualizacion($fechaActualizacion);
$nacionalidadesimputadossolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);

if (($accion == "guardar") && ($idNacionalidadImputadoSolicitud == "")) {
    $nacionalidadesimputadossolicitudesDto = $nacionalidadesimputadossolicitudesFacade->insertNacionalidadesimputadossolicitudes($nacionalidadesimputadossolicitudesDto);
    echo $nacionalidadesimputadossolicitudesDto;
} else if (($accion == "guardar") && ($idNacionalidadImputadoSolicitud != "")) {
    $nacionalidadesimputadossolicitudesDto = $nacionalidadesimputadossolicitudesFacade->updateNacionalidadesimputadossolicitudes($nacionalidadesimputadossolicitudesDto);
    echo $nacionalidadesimputadossolicitudesDto;
} else if ($accion == "consultar") {
    $nacionalidadesimputadossolicitudesDto = $nacionalidadesimputadossolicitudesFacade->selectNacionalidadesimputadossolicitudes($nacionalidadesimputadossolicitudesDto);
    echo $nacionalidadesimputadossolicitudesDto;
} else if (($accion == "eliminar") && ($idNacionalidadImputadoSolicitud != "")) {
    $nacionalidadesimputadossolicitudesDto = $nacionalidadesimputadossolicitudesFacade->deleteNacionalidadesimputadossolicitudes($nacionalidadesimputadossolicitudesDto);
    echo $nacionalidadesimputadossolicitudesDto;
} else if (($accion == "seleccionar") && ($idNacionalidadImputadoSolicitud != "")) {
    $nacionalidadesimputadossolicitudesDto = $nacionalidadesimputadossolicitudesFacade->selectNacionalidadesimputadossolicitudes($nacionalidadesimputadossolicitudesDto);
    echo $nacionalidadesimputadossolicitudesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>