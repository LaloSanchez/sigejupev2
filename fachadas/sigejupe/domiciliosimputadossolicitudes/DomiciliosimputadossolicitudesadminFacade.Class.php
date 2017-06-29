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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/domiciliosimputadossolicitudes/DomiciliosimputadossolicitudesadminController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/paises/PaisesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estados/EstadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/municipios/MunicipiosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/paises/PaisesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/estados/EstadosController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/municipios/MunicipiosController.Class.php");

class DomiciliosimputadossolicitudesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto) {
        $DomiciliosimputadossolicitudesDto->setidDomicilioImputadoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getidDomicilioImputadoSolicitud())))));
        $DomiciliosimputadossolicitudesDto->setidImputadoSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getidImputadoSolicitud())))));
        $DomiciliosimputadossolicitudesDto->setDomicilioProcesal(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getDomicilioProcesal())))));
        $DomiciliosimputadossolicitudesDto->setcvePais(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getcvePais())))));
        $DomiciliosimputadossolicitudesDto->setcveEstado(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getcveEstado())))));
        $DomiciliosimputadossolicitudesDto->setcveMunicipio(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getcveMunicipio())))));
        $DomiciliosimputadossolicitudesDto->setdireccion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getdireccion())))));
        $DomiciliosimputadossolicitudesDto->setcolonia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getcolonia())))));
        $DomiciliosimputadossolicitudesDto->setnumInterior(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getnumInterior())))));
        $DomiciliosimputadossolicitudesDto->setnumExterior(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getnumExterior())))));
        $DomiciliosimputadossolicitudesDto->setcp(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getcp())))));
        $DomiciliosimputadossolicitudesDto->setlatitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getlatitud())))));
        $DomiciliosimputadossolicitudesDto->setlongitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getlongitud())))));
        $DomiciliosimputadossolicitudesDto->setrecidenciaHabitual(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getrecidenciaHabitual())))));
        $DomiciliosimputadossolicitudesDto->setestado(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getestado())))));
        $DomiciliosimputadossolicitudesDto->setmunicipio(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getmunicipio())))));
        $DomiciliosimputadossolicitudesDto->setcveConvivencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getcveConvivencia())))));
        $DomiciliosimputadossolicitudesDto->setcveTipoDeVivienda(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $DomiciliosimputadossolicitudesDto->getcveTipoDeVivienda())))));

        return $DomiciliosimputadossolicitudesDto;
    }

    public function selectDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto) {
        $DomiciliosimputadossolicitudesDto = $this->validarDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto);
        $DomiciliosimputadossolicitudesController = new DomiciliosimputadossolicitudesController();
        $DomiciliosimputadossolicitudesDto->setActivo('S');
        $DomiciliosimputadossolicitudesDto = $DomiciliosimputadossolicitudesController->selectDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto);
        $json = "";
        $x = 1;
        $paisesDto = new PaisesDTO ();
        $paisesDao = new PaisesDAO ();
        $estadosDto = new EstadosDTO ();
        $estadosDao = new EstadosDAO ();
        $municipiosDto = new MunicipiosDTO ();
        $municipiosDao = new MunicipiosDAO ();

        if ($DomiciliosimputadossolicitudesDto != "") {
            $json .= "{";
            $json .= '"status":"Ok",';
            $json .= '"totalCount":"' . count($DomiciliosimputadossolicitudesDto) . '",';
            $json .= '"data":[';
            foreach ($DomiciliosimputadossolicitudesDto as $DomicilioImputado) {
                $paisesDto->setCvePais($DomicilioImputado->getCvePais());
                $rsPais = $paisesDao->selectPaises($paisesDto);
                if ($DomicilioImputado->getCveEstado() != "" && $DomicilioImputado->getCveEstado() != null) {
                    $estadosDto->setCveEstado($DomicilioImputado->getCveEstado());
                    $rsEstados = $estadosDao->selectEstados($estadosDto);
                }
                if ($DomicilioImputado->getCveMunicipio() != "" && $DomicilioImputado->getCveMunicipio() != null) {
                    $municipiosDto->setCveMunicipio($DomicilioImputado->getCveMunicipio());
                    $rsMunicipios = $municipiosDao->selectMunicipios($municipiosDto);
                }
                $json .= "{";
                $json .= '"idDomicilioImputadoSolicitud":' . json_encode(utf8_encode($DomicilioImputado->getIdDomicilioImputadoSolicitud())) . ",";
                $json .= '"idImputadoSolicitud":' . json_encode(utf8_encode($DomicilioImputado->getIdImputadoSolicitud())) . ",";
                $json .= '"DomicilioProcesal":' . json_encode(utf8_encode($DomicilioImputado->getDomicilioProcesal())) . ",";
                $json .= '"cvePais":' . json_encode(utf8_encode($DomicilioImputado->getCvePais())) . ",";
                if ($rsPais != "") {
                    $json .= '"desPais":' . json_encode(utf8_encode($rsPais[0]->getDesPais())) . ",";
                } else {
                    $json .= '"desPais": "N/A",';
                }
                $json .= '"cveEstado":' . json_encode(utf8_encode($DomicilioImputado->getCveEstado())) . ",";
                if ($DomicilioImputado->getCveEstado() != "" && $DomicilioImputado->getCveEstado() != null && $DomicilioImputado->getCveEstado() != 0) {
                    $json .= '"desEstado":' . json_encode(utf8_encode($rsEstados[0]->getDesEstado())) . ",";
                } else {
                    $json .= '"desEstado": "0",';
                }
                $json .= '"cveMunicipio":' . json_encode(utf8_encode($DomicilioImputado->getCveMunicipio())) . ",";
                if ($DomicilioImputado->getCveMunicipio() != "" && $DomicilioImputado->getCveMunicipio() != null && $DomicilioImputado->getCveMunicipio() != 0) {
                    $json .= '"desMunicipio":' . json_encode(utf8_encode($rsMunicipios[0]->getDesMunicipio())) . ",";
                } else {
                    $json .= '"desMunicipio": "0",';
                }
                $json .= '"direccion":' . json_encode(utf8_encode($DomicilioImputado->getDireccion())) . ",";
                $json .= '"colonia":' . json_encode(utf8_encode($DomicilioImputado->getColonia())) . ",";
                $json .= '"numInterior":' . json_encode(utf8_encode($DomicilioImputado->getNumInterior())) . ",";
                $json .= '"numExterior":' . json_encode(utf8_encode($DomicilioImputado->getNumExterior())) . ",";
                $json .= '"cp":' . json_encode(utf8_encode($DomicilioImputado->getCp())) . ",";
                $json .= '"latitud":' . json_encode(utf8_encode($DomicilioImputado->getLatitud())) . ",";
                $json .= '"longitud":' . json_encode(utf8_encode($DomicilioImputado->getLongitud())) . ",";
                $json .= '"recidenciaHabitual":' . json_encode(utf8_encode($DomicilioImputado->getRecidenciaHabitual())) . ",";
                $json .= '"estado":' . json_encode(utf8_encode($DomicilioImputado->getEstado())) . ",";
                $json .= '"municipio":' . json_encode(utf8_encode($DomicilioImputado->getMunicipio())) . ",";
                $json .= '"cveConvivencia":' . json_encode(utf8_encode($DomicilioImputado->getCveConvivencia())) . ",";
                $json .= '"cveTipoDeVivienda":' . json_encode(utf8_encode($DomicilioImputado->getCveTipoDeVivienda())) . ",";
                $json .= '"activo":' . json_encode(utf8_encode($DomicilioImputado->getActivo())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($DomiciliosimputadossolicitudesDto)) {
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

    public function insertDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto) {
        $DomiciliosimputadossolicitudesDto = $this->validarDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto);
        $DomiciliosimputadossolicitudesController = new DomiciliosimputadossolicitudesController();
        $rs = $DomiciliosimputadossolicitudesController->insertDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto);
        return $rs;
    }

    public function updateDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto) {
        $DomiciliosimputadossolicitudesDto = $this->validarDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto);
        $DomiciliosimputadossolicitudesController = new DomiciliosimputadossolicitudesController();
        $rs = $DomiciliosimputadossolicitudesController->updateDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto);
        return $rs;
    }

    public function deleteDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto) {
        $DomiciliosimputadossolicitudesDto = $this->validarDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto);
        $DomiciliosimputadossolicitudesController = new DomiciliosimputadossolicitudesController();
        $rs = $DomiciliosimputadossolicitudesController->deleteDomiciliosimputadossolicitudes($DomiciliosimputadossolicitudesDto);
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

@$idDomicilioImputadoSolicitud = $_POST["idDomicilioImputadoSolicitud"];
@$idImputadoSolicitud = $_POST["idImputadoSolicitud"];
@$DomicilioProcesal = $_POST["DomicilioProcesal"];
@$cvePais = $_POST["cvePais"];
@$cveEstado = $_POST["cveEstado"];
@$cveMunicipio = $_POST["cveMunicipio"];
@$direccion = $_POST["direccion"];
@$colonia = $_POST["colonia"];
@$numInterior = $_POST["numInterior"];
@$numExterior = $_POST["numExterior"];
@$cp = $_POST["cp"];
@$latitud = $_POST["latitud"];
@$longitud = $_POST["longitud"];
@$recidenciaHabitual = $_POST["recidenciaHabitual"];
@$estado = $_POST["estado"];
@$municipio = $_POST["municipio"];
@$cveConvivencia = $_POST["cveConvivencia"];
@$cveTipoDeVivienda = $_POST["cveTipoDeVivienda"];
@$accion = $_POST["accion"];

$domiciliosimputadossolicitudesFacade = new DomiciliosimputadossolicitudesFacade();
$domiciliosimputadossolicitudesDto = new DomiciliosimputadossolicitudesDTO();

$domiciliosimputadossolicitudesDto->setIdDomicilioImputadoSolicitud($idDomicilioImputadoSolicitud);
$domiciliosimputadossolicitudesDto->setIdImputadoSolicitud($idImputadoSolicitud);
$domiciliosimputadossolicitudesDto->setDomicilioProcesal($DomicilioProcesal);
$domiciliosimputadossolicitudesDto->setCvePais($cvePais);
$domiciliosimputadossolicitudesDto->setCveEstado($cveEstado);
$domiciliosimputadossolicitudesDto->setCveMunicipio($cveMunicipio);
$domiciliosimputadossolicitudesDto->setDireccion($direccion);
$domiciliosimputadossolicitudesDto->setColonia($colonia);
$domiciliosimputadossolicitudesDto->setNumInterior($numInterior);
$domiciliosimputadossolicitudesDto->setNumExterior($numExterior);
$domiciliosimputadossolicitudesDto->setCp($cp);
$domiciliosimputadossolicitudesDto->setLatitud($latitud);
$domiciliosimputadossolicitudesDto->setLongitud($longitud);
$domiciliosimputadossolicitudesDto->setRecidenciaHabitual($recidenciaHabitual);
$domiciliosimputadossolicitudesDto->setEstado($estado);
$domiciliosimputadossolicitudesDto->setMunicipio($municipio);
$domiciliosimputadossolicitudesDto->setCveConvivencia($cveConvivencia);
$domiciliosimputadossolicitudesDto->setCveTipoDeVivienda($cveTipoDeVivienda);

if (($accion == "guardar") && ($idDomicilioImputadoSolicitud == "")) {
    $domiciliosimputadossolicitudesDto = $domiciliosimputadossolicitudesFacade->insertDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto);
    echo $domiciliosimputadossolicitudesDto;
} else if (($accion == "guardar") && ($idDomicilioImputadoSolicitud != "")) {
    $domiciliosimputadossolicitudesDto = $domiciliosimputadossolicitudesFacade->updateDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto);
    echo $domiciliosimputadossolicitudesDto;
} else if ($accion == "consultar") {
    $domiciliosimputadossolicitudesDto = $domiciliosimputadossolicitudesFacade->selectDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto);
    echo $domiciliosimputadossolicitudesDto;
} else if (($accion == "eliminar") && ($idDomicilioImputadoSolicitud != "")) {
    $domiciliosimputadossolicitudesDto = $domiciliosimputadossolicitudesFacade->deleteDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto);
    echo $domiciliosimputadossolicitudesDto;
} else if (($accion == "seleccionar") && ($idDomicilioImputadoSolicitud != "")) {
    $domiciliosimputadossolicitudesDto = $domiciliosimputadossolicitudesFacade->selectDomiciliosimputadossolicitudes($domiciliosimputadossolicitudesDto);
    echo $domiciliosimputadossolicitudesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>