<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/salas/SalasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

include_once(dirname(__FILE__) . "/../../../webservice/cliente/edificios/EdificiosCliente.php");

global $rsEdificios;

class SalasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarSalas($SalasDto) {
        $SalasDto->setcveSala(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasDto->getcveSala(), "utf8") : strtoupper($SalasDto->getcveSala()))))));
        if ($this->esFecha($SalasDto->getcveSala())) {
            $SalasDto->setcveSala($this->fechaMysql($SalasDto->getcveSala()));
        }
        $SalasDto->setdesSala(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasDto->getdesSala(), "utf8") : strtoupper($SalasDto->getdesSala()))))));
        if ($this->esFecha($SalasDto->getdesSala())) {
            $SalasDto->setdesSala($this->fechaMysql($SalasDto->getdesSala()));
        }
        $SalasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasDto->getactivo(), "utf8") : strtoupper($SalasDto->getactivo()))))));
        if ($this->esFecha($SalasDto->getactivo())) {
            $SalasDto->setactivo($this->fechaMysql($SalasDto->getactivo()));
        }
        $SalasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasDto->getfechaRegistro(), "utf8") : strtoupper($SalasDto->getfechaRegistro()))))));
        if ($this->esFecha($SalasDto->getfechaRegistro())) {
            $SalasDto->setfechaRegistro($this->fechaMysql($SalasDto->getfechaRegistro()));
        }
        $SalasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasDto->getfechaActualizacion(), "utf8") : strtoupper($SalasDto->getfechaActualizacion()))))));
        if ($this->esFecha($SalasDto->getfechaActualizacion())) {
            $SalasDto->setfechaActualizacion($this->fechaMysql($SalasDto->getfechaActualizacion()));
        }
        $SalasDto->setsorteo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasDto->getsorteo(), "utf8") : strtoupper($SalasDto->getsorteo()))))));
        if ($this->esFecha($SalasDto->getsorteo())) {
            $SalasDto->setsorteo($this->fechaMysql($SalasDto->getsorteo()));
        }
        $SalasDto->setcveEdificio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasDto->getcveEdificio(), "utf8") : strtoupper($SalasDto->getcveEdificio()))))));
        if ($this->esFecha($SalasDto->getcveEdificio())) {
            $SalasDto->setcveEdificio($this->fechaMysql($SalasDto->getcveEdificio()));
        }
        $SalasDto->setcomodin(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasDto->getcomodin(), "utf8") : strtoupper($SalasDto->getcomodin()))))));
        if ($this->esFecha($SalasDto->getcomodin())) {
            $SalasDto->setcomodin($this->fechaMysql($SalasDto->getcomodin()));
        }
        $SalasDto->setvariable(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasDto->getvariable(), "utf8") : strtoupper($SalasDto->getvariable()))))));
        if ($this->esFecha($SalasDto->getvariable())) {
            $SalasDto->setvariable($this->fechaMysql($SalasDto->getvariable()));
        }
        return $SalasDto;
    }

    public function selectSalas($SalasDto) {
        global $rsEdificios;
        $this->initializeEdificios();

        $SalasDto = $this->validarSalas($SalasDto);
        $SalasController = new SalasController();
        $SalasDto = $SalasController->selectSalas($SalasDto);
        $totalSalas = count($SalasDto);
        $json = "";
        $x = 1;
        if ($SalasDto != "") {
            $totalSalas = count($SalasDto);
            if ($totalSalas > 0) {
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($SalasDto) . '",';
                $json .= '"data":[';
                foreach ($SalasDto as $edificio) {
                    $rs = $this->getEdificioNombre($edificio->getCveEdificio());
                    if ($rs != "") {
                        $desEdificio = $rs[0];
                    } else {
                        $desEdificio = "NO SE ENCONTRO EDIFICIO";
                    }
                    $json .= "{";
                    $json .= '"desSala":' . json_encode(($edificio->getDesSala())) . ",";
                    $json .= '"cveSala":' . json_encode(($edificio->getCveSala())) . ",";
                    $json .= '"cveEdificio":' . json_encode(($edificio->getCveEdificio())) . ",";
                    $json .= '"edificio":' . json_encode(($desEdificio)) . ",";
                    $json .= '"sorteo":' . json_encode(($edificio->getSorteo())) . ",";
                    $json .= '"comodin":' . json_encode(($edificio->getComodin())) . ",";
                    $json .= '"activo":' . json_encode(($edificio->getActivo())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($SalasDto)) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
            }
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }

    public function selectSalasGeneral($SalasDto, $param) {
        global $rsEdificios;
        $this->initializeEdificios();

        $SalasDto = $this->validarSalas($SalasDto);
        $SalasController = new SalasController();
        $SalasDto = $SalasController->selectSalasGeneral($SalasDto, $param);
        $totalSalas = count($SalasDto);
        $json = "";
        $x = 1;
        if ($SalasDto != "") {
            $totalSalas = count($SalasDto);
            if ($totalSalas > 0) {
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($SalasDto) . '",';
                $json .= '"data":[';
                foreach ($SalasDto as $edificio) {
                    $rs = $this->getEdificioNombre($edificio->getCveEdificio());
                    if ($rs != "") {
                        $desEdificio = $rs[0];
                    } else {
                        $desEdificio = "NO SE ENCONTRO EDIFICIO";
                    }
                    $json .= "{";
                    $json .= '"desSala":' . json_encode(($edificio->getDesSala())) . ",";
                    $json .= '"cveSala":' . json_encode(($edificio->getCveSala())) . ",";
                    $json .= '"cveEdificio":' . json_encode(($edificio->getCveEdificio())) . ",";
                    $json .= '"edificio":' . json_encode(($desEdificio)) . ",";
                    $json .= '"sorteo":' . json_encode(($edificio->getSorteo())) . ",";
                    $json .= '"comodin":' . json_encode(($edificio->getComodin())) . ",";
                    $json .= '"activo":' . json_encode(($edificio->getActivo())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($SalasDto)) {
                        $json .= ",";
                    }
                }
                $json .= "],";
                $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
                $json .= '"total":"' . count($SalasDto) . '"';
                $json .= "}";
//                $json .= "]";
//                $json .= "}";
            }
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }

    public function getPaginas($SalasDto, $param) {
        $SalasDto = $this->validarSalas($SalasDto);
        $SalasController = new SalasController();
        $SalasDto = $SalasController->getPaginas($SalasDto, $param);
        if ($SalasDto != "") {
            return $SalasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function selectSalasEdificio($SalasDto, $param) {

        $SalasDto = $this->validarSalas($SalasDto);
        $SalasController = new SalasController();
        $rs = $SalasController->selectSalasEdificio($SalasDto, $param);
        return $rs;
    }

    public function selectSalasJuzgado($SalasDto, $param) {

        $SalasDto = $this->validarSalas($SalasDto);
        $SalasController = new SalasController();
        $rs = $SalasController->selectSalasJuzgado($SalasDto, $param);
        return $rs;
    }

    public function initializeEdificios() {
        global $rsEdificios;
        $EdificiosCliente = new EdificiosCliente();
        $rsEdificios = $EdificiosCliente->getEdificios();
    }

    public function insertSalas($SalasDto) {
        global $rsEdificios;
        $this->initializeEdificios();

        $SalasDto = $this->validarSalas($SalasDto);
        $SalasController = new SalasController();
        $SalasDto = $SalasController->insertSalas($SalasDto);

        $totalSalas = count($SalasDto);
        $json = "";
        $x = 1;
        if ($SalasDto != "") {
            $totalSalas = count($SalasDto);
            if ($totalSalas > 0) {
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($SalasDto) . '",';
                $json .= '"data":[';
                foreach ($SalasDto as $edificio) {
                    $rs = $this->getEdificioNombre($edificio->getCveEdificio());
                    $json .= "{";
                    $json .= '"desSala":' . json_encode(($edificio->getDesSala())) . ",";
                    $json .= '"cveSala":' . json_encode(($edificio->getCveSala())) . ",";
                    $json .= '"cveEdificio":' . json_encode(($edificio->getCveEdificio())) . ",";
                    $json .= '"edificio":' . json_encode(($rs[0])) . ",";
                    $json .= '"sorteo":' . json_encode(($edificio->getSorteo())) . ",";
                    $json .= '"comodin":' . json_encode($edificio->getComodin()) . ",";
                    $json .= '"activo":' . json_encode(($edificio->getActivo())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($SalasDto)) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
            }
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }

    public function updateSalas($SalasDto) {
        global $rsEdificios;
        $this->initializeEdificios();

        $SalasDto = $this->validarSalas($SalasDto);
        $SalasController = new SalasController();
        $SalasDto = $SalasController->updateSalas($SalasDto);
        $totalSalas = count($SalasDto);
        $json = "";
        $x = 1;
        if ($SalasDto != "") {
            $totalSalas = count($SalasDto);
            if ($totalSalas > 0) {
                $json .= "{";
                $json .= '"status":"Ok",';
                $json .= '"totalCount":"' . count($SalasDto) . '",';
                $json .= '"data":[';
                foreach ($SalasDto as $edificio) {
                    $rs = $this->getEdificioNombre($edificio->getCveEdificio());
                    $json .= "{";
                    $json .= '"desSala":' . json_encode(($edificio->getDesSala())) . ",";
                    $json .= '"cveSala":' . json_encode(($edificio->getCveSala())) . ",";
                    $json .= '"cveEdificio":' . json_encode(($edificio->getCveEdificio())) . ",";
                    $json .= '"edificio":' . json_encode(($rs[0])) . ",";
                    $json .= '"sorteo":' . json_encode(($edificio->getSorteo())) . ",";
                    $json .= '"comodin":' . json_encode($edificio->getComodin()) . ",";
                    $json .= '"activo":' . json_encode(($edificio->getActivo())) . "";
                    $json .= "}" . "\n";
                    $x ++;
                    if ($x <= count($SalasDto)) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
            }
        } else {
            $json .= '{"estatus":"Fail",';
            $json .= '"mnj":"No se encontraron resultados."}';
        }
        return $json;
    }

    public function selectSalasRelacion($SalasDto) {
        $SalasDto = $this->validarSalas($SalasDto);
        $SalasController = new SalasController();
        $SalasDto = $SalasController->selectSalasRelacion($SalasDto);
        if ($SalasDto == true) {
            return $SalasDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA BAJA"));
    }

    public function deleteSalas($SalasDto) {
        $SalasDto = $this->validarSalas($SalasDto);
        $SalasController = new SalasController();
        $SalasDto = $SalasController->deleteSalas($SalasDto);
        if ($SalasDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA BAJA"));
    }

    public function getEdificioNombre($cveEdificio) {
        global $rsEdificios;
        $descEdificio = "";
        $nombre = "";
        if ($rsEdificios != "") {
            $json = json_decode($rsEdificios);
            $totalCount = $json->totalCount;
            for ($i = 0; $i < $totalCount; $i++) {
                if ($json->data[$i]->CveEdificio == $cveEdificio) {
                    $descEdificio = $json->data[$i]->CveEdificio;
                    $nombre = $json->data[$i]->NomEdificio;
                    $array = array($nombre);
//                    print_r($array);
                    return $array;
                }
            }
        }
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

@$cveSala = $_POST["cveSala"];
@$desSala = $_POST["desSala"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$sorteo = $_POST["sorteo"];
@$cveEdificio = $_POST["cveEdificio"];
@$comodin = $_POST["comodin"];
@$variable = $_POST["variable"];
@$accion = $_POST["accion"];

$param = array();
@$param["cveJuzgado"] = $_POST["cveJuzgado"];

@$param["pag"] = $_POST['pag'];
@$param["cantxPag"] = $_POST['cantxPag'];
@$param["paginacion"] = $_POST['paginacion'];
@$param["generico"] = $_POST['generico'];


$salasFacade = new SalasFacade();
$salasDto = new SalasDTO();

$salasDto->setCveSala($cveSala);
$salasDto->setDesSala(($desSala));
//utf8_encode
$salasDto->setActivo($activo);
$salasDto->setFechaRegistro($fechaRegistro);
$salasDto->setFechaActualizacion($fechaActualizacion);
$salasDto->setSorteo($sorteo);
$salasDto->setCveEdificio($cveEdificio);
$salasDto->setComodin($comodin);
$salasDto->setVariable($variable);

if (($accion == "guardar") && ($cveSala == "")) {
    $salasDto = $salasFacade->insertSalas($salasDto);
    echo $salasDto;
} else if (($accion == "update") && ($cveSala != "")) {
    $salasDto = $salasFacade->updateSalas($salasDto);
    echo $salasDto;
} else if ($accion == "consultar") {
    $salasDto = $salasFacade->selectSalas($salasDto);
    echo $salasDto;
} else if ($accion == "selectSalasGeneral") {
    $param["paginacion"] = true;
    $salasDto = $salasFacade->selectSalasGeneral($salasDto, $param);
    echo $salasDto;
} else if ($accion == "getPaginas") {
    $param["paginacion"] = true;
    $salasDto = $salasFacade->getPaginas($salasDto, $param);
    echo $salasDto;
} else if ($accion == "consultarRelacion") {
    $salasDto = $salasFacade->selectSalasRelacion($salasDto);
    echo $salasDto;
} else if (($accion == "baja") && ($cveSala != "")) {
    $salasDto = $salasFacade->deleteSalas($salasDto);
    echo $salasDto;
} else if (($accion == "seleccionar") && ($cveSala != "")) {
    $salasDto = $salasFacade->selectSalas($salasDto);
    echo $salasDto;
} else if ($accion == "selectSalasEdificio") {
    $salasDto = $salasFacade->selectSalasEdificio($salasDto, $param);
    echo $salasDto;
} else if ($accion == "selectSalasJuzgado") {
    $salasDto = $salasFacade->selectSalasJuzgado($salasDto, $param);
    echo $salasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>
