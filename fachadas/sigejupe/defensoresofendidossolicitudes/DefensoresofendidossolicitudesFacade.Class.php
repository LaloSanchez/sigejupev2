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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidossolicitudes/DefensoresofendidossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/defensoresofendidossolicitudes/DefensoresofendidossolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class DefensoresofendidossolicitudesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto) {
        $DefensoresofendidossolicitudesDto->setidDefensorOfendidoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresofendidossolicitudesDto->getidDefensorOfendidoSolicitud())))));
        $DefensoresofendidossolicitudesDto->setidOfendidoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresofendidossolicitudesDto->getidOfendidoSolicitud())))));
        $DefensoresofendidossolicitudesDto->setcveTipoAsesor(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresofendidossolicitudesDto->getcveTipoAsesor())))));
        $DefensoresofendidossolicitudesDto->setnombre(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresofendidossolicitudesDto->getnombre())))));
        $DefensoresofendidossolicitudesDto->settelefono(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresofendidossolicitudesDto->gettelefono())))));
        $DefensoresofendidossolicitudesDto->setcelular(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresofendidossolicitudesDto->getcelular())))));
        $DefensoresofendidossolicitudesDto->setemail(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresofendidossolicitudesDto->getemail())))));
        $DefensoresofendidossolicitudesDto->setactivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresofendidossolicitudesDto->getactivo())))));
        $DefensoresofendidossolicitudesDto->setfechaRegistro(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresofendidossolicitudesDto->getfechaRegistro())))));
        if ($this->esFecha($DefensoresofendidossolicitudesDto->getfechaRegistro())) {
            $DefensoresofendidossolicitudesDto->setfechaRegistro($this->fechaMysql($DefensoresofendidossolicitudesDto->getfechaRegistro()));
        }
        $DefensoresofendidossolicitudesDto->setfechaActualizacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DefensoresofendidossolicitudesDto->getfechaActualizacion())))));
        if ($this->esFecha($DefensoresofendidossolicitudesDto->getfechaActualizacion())) {
            $DefensoresofendidossolicitudesDto->setfechaActualizacion($this->fechaMysql($DefensoresofendidossolicitudesDto->getfechaActualizacion()));
        }

        return $DefensoresofendidossolicitudesDto;
    }

    public function agregarDefensorOfendido($DefensoresofendidossolicitudesDto) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesController = new DefensoresofendidossolicitudesController();
        $defensoresResponse = $DefensoresofendidossolicitudesController->agregarDefensorOfendido($DefensoresofendidossolicitudesDto);

        return json_encode($defensoresResponse);
    }

    public function modificarDefensorOfendido($DefensoresofendidossolicitudesDto) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesController = new DefensoresofendidossolicitudesController();
        $defensoresResponse = $DefensoresofendidossolicitudesController->modificarDefensorOfendido($DefensoresofendidossolicitudesDto);

        return json_encode($defensoresResponse);
    }

    public function eliminarDefensor($DefensoresofendidossolicitudesDto) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesController = new DefensoresofendidossolicitudesController();
        $defensoresResponse = $DefensoresofendidossolicitudesController->eliminarDefensor($DefensoresofendidossolicitudesDto);

        return json_encode($defensoresResponse);
    }

    public function selectDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesController = new DefensoresofendidossolicitudesController();
        $json = "";
        $x = 1;
        $DefensoresofendidossolicitudesDto = $DefensoresofendidossolicitudesController->selectDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        if (count($DefensoresofendidossolicitudesDto)) {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($DefensoresofendidossolicitudesDto) . '",';
            $json .= '"data":[';
            foreach ($DefensoresofendidossolicitudesDto as $Defensoresofendidos) {
                $json .= "{";
                $json .= '"idDefensorOfendidoSolicitud":' . json_encode(utf8_encode($Defensoresofendidos->getIdDefensorofendidosolicitud())) . ",";
                $json .= '"idOfendidoSolicitud":' . json_encode(utf8_encode($Defensoresofendidos->getIdOfendidoSolicitud())) . ",";
                $json .= '"cveTipoAsesor":' . json_encode(utf8_encode($Defensoresofendidos->getCveTipoAsesor())) . ",";
                $json .= '"desTipoDefensor":' . json_encode(($Defensoresofendidos->getDesTipoDefensor())) . ",";
                $json .= '"nombre":' . json_encode(($Defensoresofendidos->getNombre())) . ",";
                $tel = explode("|", $Defensoresofendidos->getTelefono());
                $json .= '"telefono":' . json_encode(utf8_encode($tel[0])) . ",";
                $json .= '"celular":' . json_encode(utf8_encode($Defensoresofendidos->getCelular())) . ",";
                $json .= '"email":' . json_encode(utf8_encode($Defensoresofendidos->getEmail())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($Defensoresofendidos->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($DefensoresofendidossolicitudesDto)) {
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

    public function insertDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesController = new DefensoresofendidossolicitudesController();
        $DefensoresofendidossolicitudesDto = $DefensoresofendidossolicitudesController->insertDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        if (count($DefensoresofendidossolicitudesDto)) {
            $dtoToJson = new DtoToJson($DefensoresofendidossolicitudesDto);

            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesController = new DefensoresofendidossolicitudesController();
        $DefensoresofendidossolicitudesDto = $DefensoresofendidossolicitudesController->updateDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        if ($DefensoresofendidossolicitudesDto != "") {
            $dtoToJson = new DtoToJson($DefensoresofendidossolicitudesDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto) {
        $DefensoresofendidossolicitudesDto = $this->validarDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        $DefensoresofendidossolicitudesController = new DefensoresofendidossolicitudesController();
        $DefensoresofendidossolicitudesDto = $DefensoresofendidossolicitudesController->deleteDefensoresofendidossolicitudes($DefensoresofendidossolicitudesDto);
        if ($DefensoresofendidossolicitudesDto == true) {
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "status" => "ok", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "status" => "error", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
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
@$idDefensorOfendidoSolicitud = $_POST["idDefensorOfendidoSolicitud"];
@$idOfendidoSolicitud = $_POST["idOfendidoSolicitud"];
@$cveTipoAsesor = $_POST["cmbTipoDefensorOfendido"];
@$nombre = $_POST["nombreDefensor"];
@$telefono = $_POST["telDefensor"];
@$celular = $_POST["celDefensor"];
@$email = $_POST["emailDefensor"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$defensoresofendidossolicitudesFacade = new DefensoresofendidossolicitudesFacade();
$defensoresofendidossolicitudesDto = new DefensoresofendidossolicitudesDTO();

$defensoresofendidossolicitudesDto->setIdDefensorOfendidoSolicitud($idDefensorOfendidoSolicitud);
$defensoresofendidossolicitudesDto->setIdOfendidoSolicitud($idOfendidoSolicitud);
$defensoresofendidossolicitudesDto->setCveTipoAsesor($cveTipoAsesor);
$defensoresofendidossolicitudesDto->setNombre($nombre);
$defensoresofendidossolicitudesDto->setTelefono($telefono);
$defensoresofendidossolicitudesDto->setCelular($celular);
$defensoresofendidossolicitudesDto->setEmail($email);
$defensoresofendidossolicitudesDto->setActivo($activo);
$defensoresofendidossolicitudesDto->setFechaRegistro($fechaRegistro);
$defensoresofendidossolicitudesDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idDefensorOfendidoSolicitud == "")) {
    $defensoresofendidossolicitudesDto = $defensoresofendidossolicitudesFacade->insertDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto);
    echo $defensoresofendidossolicitudesDto;
} else if (($accion == "guardar") && ($idDefensorOfendidoSolicitud != "")) {
    $defensoresofendidossolicitudesDto = $defensoresofendidossolicitudesFacade->updateDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto);
    echo $defensoresofendidossolicitudesDto;
} else if ($accion == "consultar") {
    $defensoresofendidossolicitudesDto = $defensoresofendidossolicitudesFacade->selectDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto);
    echo $defensoresofendidossolicitudesDto;
} else if (($accion == "baja") && ($idDefensorOfendidoSolicitud != "")) {
    $defensoresofendidossolicitudesDto = $defensoresofendidossolicitudesFacade->deleteDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto);
    echo $defensoresofendidossolicitudesDto;
} else if (($accion == "seleccionar") && ($idDefensorOfendidoSolicitud != "")) {
    $defensoresofendidossolicitudesDto = $defensoresofendidossolicitudesFacade->selectDefensoresofendidossolicitudes($defensoresofendidossolicitudesDto);
    echo $defensoresofendidossolicitudesDto;
} else if ($accion == "agregar" && $idDefensorOfendidoSolicitud == "") {
    $defensoresofendidossolicitudesDto = $defensoresofendidossolicitudesFacade->agregarDefensorOfendido($defensoresofendidossolicitudesDto);
    echo $defensoresofendidossolicitudesDto;
} else if ($accion == "agregar" && $idDefensorOfendidoSolicitud != "") {
    $defensoresofendidossolicitudesDto = $defensoresofendidossolicitudesFacade->modificarDefensorOfendido($defensoresofendidossolicitudesDto);
    echo $defensoresofendidossolicitudesDto;
} else if ($accion == "eliminar" && $idDefensorOfendidoSolicitud != "") {    
    $defensoresofendidossolicitudesDto = $defensoresofendidossolicitudesFacade->eliminarDefensor($defensoresofendidossolicitudesDto);
    echo $defensoresofendidossolicitudesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}