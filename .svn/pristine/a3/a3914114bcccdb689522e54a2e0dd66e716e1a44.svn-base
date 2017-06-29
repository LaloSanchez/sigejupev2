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
//print_r($_SESSION);
//$_SESSION['cveAdscripcion'] = 885;
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/atencionjuzgados/AtencionjuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/atencionjuzgados/AtencionjuzgadosController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class AtencionjuzgadosFacade {

    private $proveedor;

    public function __construct()
    {

    }

    public function validarAtencionjuzgados($AtencionjuzgadosDto)
    {
        $AtencionjuzgadosDto->setidAtencionJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionjuzgadosDto->getidAtencionJuzgado(), "utf8") : strtoupper($AtencionjuzgadosDto->getidAtencionJuzgado()))))));
        if ($this->esFecha($AtencionjuzgadosDto->getidAtencionJuzgado())) {
            $AtencionjuzgadosDto->setidAtencionJuzgado($this->fechaMysql($AtencionjuzgadosDto->getidAtencionJuzgado()));
        }
        $AtencionjuzgadosDto->setcveAdscripcion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionjuzgadosDto->getcveAdscripcion(), "utf8") : strtoupper($AtencionjuzgadosDto->getcveAdscripcion()))))));
        if ($this->esFecha($AtencionjuzgadosDto->getcveAdscripcion())) {
            $AtencionjuzgadosDto->setcveAdscripcion($this->fechaMysql($AtencionjuzgadosDto->getcveAdscripcion()));
        }
        $AtencionjuzgadosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionjuzgadosDto->getcveJuzgado(), "utf8") : strtoupper($AtencionjuzgadosDto->getcveJuzgado()))))));
        if ($this->esFecha($AtencionjuzgadosDto->getcveJuzgado())) {
            $AtencionjuzgadosDto->setcveJuzgado($this->fechaMysql($AtencionjuzgadosDto->getcveJuzgado()));
        }
        $AtencionjuzgadosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionjuzgadosDto->getfechaRegistro(), "utf8") : strtoupper($AtencionjuzgadosDto->getfechaRegistro()))))));
        if ($this->esFecha($AtencionjuzgadosDto->getfechaRegistro())) {
            $AtencionjuzgadosDto->setfechaRegistro($this->fechaMysql($AtencionjuzgadosDto->getfechaRegistro()));
        }
        $AtencionjuzgadosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionjuzgadosDto->getfechaActualizacion(), "utf8") : strtoupper($AtencionjuzgadosDto->getfechaActualizacion()))))));
        if ($this->esFecha($AtencionjuzgadosDto->getfechaActualizacion())) {
            $AtencionjuzgadosDto->setfechaActualizacion($this->fechaMysql($AtencionjuzgadosDto->getfechaActualizacion()));
        }
        $AtencionjuzgadosDto->setcveCondicion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AtencionjuzgadosDto->getcveCondicion(), "utf8") : strtoupper($AtencionjuzgadosDto->getcveCondicion()))))));
        if ($this->esFecha($AtencionjuzgadosDto->getcveCondicion())) {
            $AtencionjuzgadosDto->setcveCondicion($this->fechaMysql($AtencionjuzgadosDto->getcveCondicion()));
        }

        return $AtencionjuzgadosDto;
    }

    public function procesar($idAdscripcion, $tipoAdscripcion)
    {
        $atencionJuzgadosController = new AtencionjuzgadosController();
        $response = $atencionJuzgadosController->procesar($idAdscripcion, $tipoAdscripcion);

        return json_encode($response);
    }

    public function guardar($data)
    {
        $atencionJuzgadosController = new AtencionjuzgadosController();
        $response = $atencionJuzgadosController->guardar($data);

        return json_encode($response);
    }

    public function selectAtencionjuzgados($AtencionjuzgadosDto)
    {
        $x = 1;
        $json = "";
        $AtencionjuzgadosDto = $this->validarAtencionjuzgados($AtencionjuzgadosDto);
        $AtencionjuzgadosController = new AtencionjuzgadosController();
        $JuzgadosController = new JuzgadosController();
        $juzgadosDTO = new JuzgadosDTO();
        $AtencionjuzgadosDto = $AtencionjuzgadosController->selectAtencionjuzgados($AtencionjuzgadosDto);
        if ($AtencionjuzgadosDto != "") {
            $json .= "{";
            $json .= '"status":"OK",';
            $json .= '"totalCount":"' . count($AtencionjuzgadosDto) . '",';
            $json .= '"data":[';
            foreach ($AtencionjuzgadosDto as $Atencionjuzgado) {
                $juzgadosDTO->setCveJuzgado($Atencionjuzgado->getCveJuzgado());
                $rsJuzgado = $JuzgadosController->selectJuzgados($juzgadosDTO);
                $json .= "{";
                $json .= '"idAtencionJuzgado":' . json_encode(utf8_encode($Atencionjuzgado->getIdAtencionJuzgado())) . ",";
                $json .= '"cveAdscripcion":' . json_encode(utf8_encode($Atencionjuzgado->getCveAdscripcion())) . ",";
                $json .= '"cveJuzgado":' . json_encode(utf8_encode($Atencionjuzgado->getCveJuzgado())) . ",";
                if ($rsJuzgado != "") {
                    $json .= '"desJuzgado":' . json_encode(utf8_encode($rsJuzgado[0]->getDesJuzgado())) . ",";
                    $json .= '"cveTipoJuzgado":' . json_encode($rsJuzgado[0]->getCveTipoJuzgado()) . ",";
                }
                $json .= '"cveCondicion":' . json_encode(utf8_encode($Atencionjuzgado->getCveCondicion())) . "";
                $json .= "}" . "\n";
                $x ++;
                if ($x <= count($AtencionjuzgadosDto)) {
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

    public function insertAtencionjuzgados($AtencionjuzgadosDto)
    {
        $AtencionjuzgadosDto = $this->validarAtencionjuzgados($AtencionjuzgadosDto);
        $AtencionjuzgadosController = new AtencionjuzgadosController();
        $AtencionjuzgadosDto = $AtencionjuzgadosController->insertAtencionjuzgados($AtencionjuzgadosDto);
        if ($AtencionjuzgadosDto != "") {
            $dtoToJson = new DtoToJson($AtencionjuzgadosDto);

            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateAtencionjuzgados($AtencionjuzgadosDto)
    {
        $AtencionjuzgadosDto = $this->validarAtencionjuzgados($AtencionjuzgadosDto);
        $AtencionjuzgadosController = new AtencionjuzgadosController();
        $AtencionjuzgadosDto = $AtencionjuzgadosController->updateAtencionjuzgados($AtencionjuzgadosDto);
        if ($AtencionjuzgadosDto != "") {
            $dtoToJson = new DtoToJson($AtencionjuzgadosDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteAtencionjuzgados($AtencionjuzgadosDto)
    {
        $AtencionjuzgadosDto = $this->validarAtencionjuzgados($AtencionjuzgadosDto);
        $AtencionjuzgadosController = new AtencionjuzgadosController();
        $AtencionjuzgadosDto = $AtencionjuzgadosController->deleteAtencionjuzgados($AtencionjuzgadosDto);
        if ($AtencionjuzgadosDto == true) {
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    private function esFecha($fecha)
    {
        if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $fecha)) {
            return true;
        }

        return false;
    }

    private function esFechaMysql($fecha)
    {
        if (preg_match('/^\d{4}\-\d{1,2}\-\d{1,2}$/', $fecha)) {
            return true;
        }

        return false;
    }

    private function fechaMysql($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }

    private function fechaNormal($fecha)
    {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }

}

@$idAtencionJuzgado = $_POST["idAtencionJuzgado"];
@$cveAdscripcion = $_POST["cveAdscripcion"];
@$tipoAdscripcion = $_POST['tipoAdscripcion'];
@$cveJuzgado = $_POST["cveJuzgado"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$cveCondicion = $_POST["cveCondicion"];
@$cveTipoUsuario = 2;
@$accion = $_POST["accion"];

$atencionjuzgadosFacade = new AtencionjuzgadosFacade();
$atencionjuzgadosDto = new AtencionjuzgadosDTO();

$atencionjuzgadosDto->setIdAtencionJuzgado($idAtencionJuzgado);
$atencionjuzgadosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
$atencionjuzgadosDto->setCveJuzgado($cveJuzgado);
$atencionjuzgadosDto->setFechaRegistro($fechaRegistro);
$atencionjuzgadosDto->setFechaActualizacion($fechaActualizacion);
$atencionjuzgadosDto->setCveCondicion($cveCondicion);
$atencionjuzgadosDto->setCveTipoUsuario($cveTipoUsuario);

if ($accion === 'procesar') {
    $idAdscripcion = $_POST['adscripcion'];
    $atencionjuzgados = $atencionjuzgadosFacade->procesar($idAdscripcion, $tipoAdscripcion);

    echo $atencionjuzgados;
}

if (($accion == "guardar") && ($idAtencionJuzgado == "")) {
    $atencionjuzgados = $atencionjuzgadosFacade->guardar($_POST);

    echo $atencionjuzgados;
    //$atencionjuzgadosDto = $atencionjuzgadosFacade->insertAtencionjuzgados($atencionjuzgadosDto);
    //echo $atencionjuzgadosDto;
} else if (($accion == "guardar") && ($idAtencionJuzgado != "")) {
    $atencionjuzgadosDto = $atencionjuzgadosFacade->updateAtencionjuzgados($atencionjuzgadosDto);
    echo $atencionjuzgadosDto;
} else if ($accion == "consultar") {
    $atencionjuzgadosDto = $atencionjuzgadosFacade->selectAtencionjuzgados($atencionjuzgadosDto);
    echo $atencionjuzgadosDto;
} else if ($accion == "consultarCombo") {
    $atencionjuzgadosDto->setCveTipoUsuario($_SESSION['tipoUsuario']);
    $atencionjuzgadosDto = $atencionjuzgadosFacade->selectAtencionjuzgados($atencionjuzgadosDto);
    echo $atencionjuzgadosDto;
} else if (($accion == "baja") && ($idAtencionJuzgado != "")) {
    $atencionjuzgadosDto = $atencionjuzgadosFacade->deleteAtencionjuzgados($atencionjuzgadosDto);
    echo $atencionjuzgadosDto;
} else if (($accion == "seleccionar") && ($idAtencionJuzgado != "")) {
    $atencionjuzgadosDto = $atencionjuzgadosFacade->selectAtencionjuzgados($atencionjuzgadosDto);
    echo $atencionjuzgadosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}