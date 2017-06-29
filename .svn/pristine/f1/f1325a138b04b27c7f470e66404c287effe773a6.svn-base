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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadossolicitudes/DefensoresimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/defensoresimputadossolicitudes/DefensoresimputadossolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposdefensores/TiposdefensoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/tiposdefensores/TiposdefensoresController.Class.php");

class DefensoresimputadossolicitudesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto) {
        $DefensoresimputadossolicitudesDto->setidDefensorImputadoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresimputadossolicitudesDto->getidDefensorImputadoSolicitud())))));
        $DefensoresimputadossolicitudesDto->setidImputadoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresimputadossolicitudesDto->getidImputadoSolicitud())))));
        $DefensoresimputadossolicitudesDto->setcveTipoDefensor(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresimputadossolicitudesDto->getcveTipoDefensor())))));
        $DefensoresimputadossolicitudesDto->setnombre(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresimputadossolicitudesDto->getnombre())))));
        $DefensoresimputadossolicitudesDto->settelefono(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresimputadossolicitudesDto->gettelefono())))));
        $DefensoresimputadossolicitudesDto->setcelular(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresimputadossolicitudesDto->getcelular())))));
        $DefensoresimputadossolicitudesDto->setemail(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresimputadossolicitudesDto->getemail())))));
        return $DefensoresimputadossolicitudesDto;
    }

    public function selectDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto) {
        $DefensoresimputadossolicitudesDto = $this->validarDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto);
        $DefensoresimputadossolicitudesController = new DefensoresimputadossolicitudesController();
        $DefensoresimputadossolicitudesDto = $DefensoresimputadossolicitudesController->selectDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto);
        $json = "";
        $x = 1;
        $tiposDefensoresDto = new TiposdefensoresDTO();
        $tiposDefensoresDao = new TiposdefensoresDAO();
        if ($DefensoresimputadossolicitudesDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($DefensoresimputadossolicitudesDto) . '",';
            $json .= '"data":[';
            foreach ($DefensoresimputadossolicitudesDto as $DefensorImputados) {
                $tiposDefensoresDto->setCveTipoDefensor($DefensorImputados->getCveTipoDefensor());
                $rsDefensor = $tiposDefensoresDao->selectTiposdefensores($tiposDefensoresDto);
                $json .= "{";
                $json .= '"idDefensorImputadoSolicitud":' . json_encode(utf8_encode($DefensorImputados->getIdDefensorImputadoSolicitud())) . ",";
                $json .= '"idImputadoSolicitud":' . json_encode(utf8_encode($DefensorImputados->getIdImputadoSolicitud())) . ",";
                $json .= '"cveTipoDefensor":' . json_encode(utf8_encode($DefensorImputados->getCveTipoDefensor())) . ",";
                if ($rsDefensor != "") {
                    $json .= '"desDefensor":' . json_encode(utf8_encode($rsDefensor[0]->getDesTipoDefensor())) . ",";
                } else {
                    $json .= '"desDefensor": "",';
                }
                $json .= '"nombre":' . json_encode(utf8_encode($DefensorImputados->getNombre())) . ",";


                $tel = explode("|", $DefensorImputados->getTelefono());

                $json .= '"telefono":' . json_encode(utf8_encode($tel[0])) . ",";
                $json .= '"celular":' . json_encode(utf8_encode($DefensorImputados->getCelular())) . ",";
                $json .= '"email":' . json_encode(utf8_encode($DefensorImputados->getEmail())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($DefensorImputados->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($DefensoresimputadossolicitudesDto)) {
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

    public function insertDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto) {
        $DefensoresimputadossolicitudesDto = $this->validarDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto);
        $DefensoresimputadossolicitudesController = new DefensoresimputadossolicitudesController();
        $rs = $DefensoresimputadossolicitudesController->insertDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto);
        return $rs;
    }

    public function updateDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto) {
        $DefensoresimputadossolicitudesDto = $this->validarDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto);
        $DefensoresimputadossolicitudesController = new DefensoresimputadossolicitudesController();
        $rs = $DefensoresimputadossolicitudesController->updateDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto);
        return $rs;
    }

    public function deleteDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto) {
        $DefensoresimputadossolicitudesDto = $this->validarDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto);
        $DefensoresimputadossolicitudesController = new DefensoresimputadossolicitudesController();
        $rs = $DefensoresimputadossolicitudesController->deleteDefensoresimputadossolicitudes($DefensoresimputadossolicitudesDto);
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

@$idDefensorImputadoSolicitud = $_POST["idDefensorImputadoSolicitud"];
@$idImputadoSolicitud = $_POST["idImputadoSolicitud"];
@$cveTipoDefensor = $_POST["cveTipoDefensor"];
@$nombre = $_POST["nombre"];
@$telefono = $_POST["telefono"];
@$celular = $_POST["celular"];
@$email = $_POST["email"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$defensoresimputadossolicitudesFacade = new DefensoresimputadossolicitudesFacade();
$defensoresimputadossolicitudesDto = new DefensoresimputadossolicitudesDTO();

$defensoresimputadossolicitudesDto->setIdDefensorImputadoSolicitud($idDefensorImputadoSolicitud);
$defensoresimputadossolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
$defensoresimputadossolicitudesDto->setCveTipoDefensor($cveTipoDefensor);
$defensoresimputadossolicitudesDto->setNombre($nombre);
$defensoresimputadossolicitudesDto->setTelefono($telefono);
$defensoresimputadossolicitudesDto->setCelular($celular);
$defensoresimputadossolicitudesDto->setEmail($email);
$defensoresimputadossolicitudesDto->setActivo($activo);
$defensoresimputadossolicitudesDto->setFechaRegistro($fechaRegistro);
$defensoresimputadossolicitudesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idDefensorImputadoSolicitud == "")) {
    $defensoresimputadossolicitudesDto = $defensoresimputadossolicitudesFacade->insertDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto);
    echo $defensoresimputadossolicitudesDto;
} else if (($accion == "guardar") && ($idDefensorImputadoSolicitud != "")) {
    $defensoresimputadossolicitudesDto = $defensoresimputadossolicitudesFacade->updateDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto);
    echo $defensoresimputadossolicitudesDto;
} else if ($accion == "consultar") {
    $defensoresimputadossolicitudesDto = $defensoresimputadossolicitudesFacade->selectDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto);
    echo $defensoresimputadossolicitudesDto;
} else if (($accion == "eliminar") && ($idDefensorImputadoSolicitud != "")) {
    $defensoresimputadossolicitudesDto = $defensoresimputadossolicitudesFacade->deleteDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto);
    echo $defensoresimputadossolicitudesDto;
} else if (($accion == "seleccionar") && ($idDefensorImputadoSolicitud != "")) {
    $defensoresimputadossolicitudesDto = $defensoresimputadossolicitudesFacade->selectDefensoresimputadossolicitudes($defensoresimputadossolicitudesDto);
    echo $defensoresimputadossolicitudesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>