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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salasjuzgadores/SalasjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/salasjuzgadores/SalasjuzgadoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class SalasjuzgadoresFacade {

    private $proveedor;

    public function __construct()
    {
    }

    public function validarSalasjuzgadores($SalasjuzgadoresDto)
    {
        $SalasjuzgadoresDto->setidSalasJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasjuzgadoresDto->getidSalasJuzgador(), "utf8") : strtoupper($SalasjuzgadoresDto->getidSalasJuzgador()))))));
        if ($this->esFecha($SalasjuzgadoresDto->getidSalasJuzgador())) {
            $SalasjuzgadoresDto->setidSalasJuzgador($this->fechaMysql($SalasjuzgadoresDto->getidSalasJuzgador()));
        }
        $SalasjuzgadoresDto->setcveSala(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasjuzgadoresDto->getcveSala(), "utf8") : strtoupper($SalasjuzgadoresDto->getcveSala()))))));
        if ($this->esFecha($SalasjuzgadoresDto->getcveSala())) {
            $SalasjuzgadoresDto->setcveSala($this->fechaMysql($SalasjuzgadoresDto->getcveSala()));
        }
        $SalasjuzgadoresDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasjuzgadoresDto->getidJuzgador(), "utf8") : strtoupper($SalasjuzgadoresDto->getidJuzgador()))))));
        if ($this->esFecha($SalasjuzgadoresDto->getidJuzgador())) {
            $SalasjuzgadoresDto->setidJuzgador($this->fechaMysql($SalasjuzgadoresDto->getidJuzgador()));
        }
        $SalasjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasjuzgadoresDto->getfechaRegistro(), "utf8") : strtoupper($SalasjuzgadoresDto->getfechaRegistro()))))));
        if ($this->esFecha($SalasjuzgadoresDto->getfechaRegistro())) {
            $SalasjuzgadoresDto->setfechaRegistro($this->fechaMysql($SalasjuzgadoresDto->getfechaRegistro()));
        }
        $SalasjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasjuzgadoresDto->getfechaActualizacion(), "utf8") : strtoupper($SalasjuzgadoresDto->getfechaActualizacion()))))));
        if ($this->esFecha($SalasjuzgadoresDto->getfechaActualizacion())) {
            $SalasjuzgadoresDto->setfechaActualizacion($this->fechaMysql($SalasjuzgadoresDto->getfechaActualizacion()));
        }
        $SalasjuzgadoresDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasjuzgadoresDto->getactivo(), "utf8") : strtoupper($SalasjuzgadoresDto->getactivo()))))));
        if ($this->esFecha($SalasjuzgadoresDto->getactivo())) {
            $SalasjuzgadoresDto->setactivo($this->fechaMysql($SalasjuzgadoresDto->getactivo()));
        }
        $SalasjuzgadoresDto->setcveCondicion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($SalasjuzgadoresDto->getcveCondicion(), "utf8") : strtoupper($SalasjuzgadoresDto->getcveCondicion()))))));
        if ($this->esFecha($SalasjuzgadoresDto->getcveCondicion())) {
            $SalasjuzgadoresDto->setcveCondicion($this->fechaMysql($SalasjuzgadoresDto->getcveCondicion()));
        }

        return $SalasjuzgadoresDto;
    }

    public function procesar($idJuzgado)
    {
        $salasJuzgadoresController = new SalasjuzgadoresController();
        $response = $salasJuzgadoresController->procesar($idJuzgado);

        return html_entity_decode(json_encode($response));
    }

    public function guardar($data)
    {
        $salasJuzgadoresController = new SalasjuzgadoresController();
        $response = $salasJuzgadoresController->guardar($data);

        return json_encode($response);
    }

    public function selectSalasjuzgadores($SalasjuzgadoresDto)
    {
        $SalasjuzgadoresDto = $this->validarSalasjuzgadores($SalasjuzgadoresDto);
        $SalasjuzgadoresController = new SalasjuzgadoresController();
        $SalasjuzgadoresDto = $SalasjuzgadoresController->selectSalasjuzgadores($SalasjuzgadoresDto);
        if ($SalasjuzgadoresDto != "") {
            $dtoToJson = new DtoToJson($SalasjuzgadoresDto);

            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertSalasjuzgadores($SalasjuzgadoresDto)
    {
        $SalasjuzgadoresDto = $this->validarSalasjuzgadores($SalasjuzgadoresDto);
        $SalasjuzgadoresController = new SalasjuzgadoresController();
        $SalasjuzgadoresDto = $SalasjuzgadoresController->insertSalasjuzgadores($SalasjuzgadoresDto);
        if ($SalasjuzgadoresDto != "") {
            $dtoToJson = new DtoToJson($SalasjuzgadoresDto);

            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateSalasjuzgadores($SalasjuzgadoresDto)
    {
        $SalasjuzgadoresDto = $this->validarSalasjuzgadores($SalasjuzgadoresDto);
        $SalasjuzgadoresController = new SalasjuzgadoresController();
        $SalasjuzgadoresDto = $SalasjuzgadoresController->updateSalasjuzgadores($SalasjuzgadoresDto);
        if ($SalasjuzgadoresDto != "") {
            $dtoToJson = new DtoToJson($SalasjuzgadoresDto);

            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();

        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteSalasjuzgadores($SalasjuzgadoresDto)
    {
        $SalasjuzgadoresDto = $this->validarSalasjuzgadores($SalasjuzgadoresDto);
        $SalasjuzgadoresController = new SalasjuzgadoresController();
        $SalasjuzgadoresDto = $SalasjuzgadoresController->deleteSalasjuzgadores($SalasjuzgadoresDto);
        if ($SalasjuzgadoresDto == true) {
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


@$idSalasJuzgador = $_POST["idSalasJuzgador"];
@$cveSala = $_POST["cveSala"];
@$idJuzgador = $_POST["idJuzgador"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$activo = $_POST["activo"];
@$cveCondicion = $_POST["cveCondicion"];
@$accion = $_POST["accion"];

$salasjuzgadoresFacade = new SalasjuzgadoresFacade();
$salasjuzgadoresDto = new SalasjuzgadoresDTO();

$salasjuzgadoresDto->setIdSalasJuzgador($idSalasJuzgador);
$salasjuzgadoresDto->setCveSala($cveSala);
$salasjuzgadoresDto->setIdJuzgador($idJuzgador);
$salasjuzgadoresDto->setFechaRegistro($fechaRegistro);
$salasjuzgadoresDto->setFechaActualizacion($fechaActualizacion);
$salasjuzgadoresDto->setActivo($activo);
$salasjuzgadoresDto->setCveCondicion($cveCondicion);

if ($accion === 'procesar') {
    $idJuzgado = $_POST['idJuzgado'];
    $salasjuzgadores = $salasjuzgadoresFacade->procesar($idJuzgado);

    echo $salasjuzgadores;
}

if ($accion === 'guardar') {
    $data = $_POST;
    $salasjuzgadores = $salasjuzgadoresFacade->guardar($data);

    echo $salasjuzgadores;
}

/*if (($accion == "guardar") && ($idSalasJuzgador == "")) {
    $salasjuzgadoresDto = $salasjuzgadoresFacade->insertSalasjuzgadores($salasjuzgadoresDto);
    echo $salasjuzgadoresDto;
} else if (($accion == "guardar") && ($idSalasJuzgador != "")) {
    $salasjuzgadoresDto = $salasjuzgadoresFacade->updateSalasjuzgadores($salasjuzgadoresDto);
    echo $salasjuzgadoresDto;
} else if ($accion == "consultar") {
    $salasjuzgadoresDto = $salasjuzgadoresFacade->selectSalasjuzgadores($salasjuzgadoresDto);
    echo $salasjuzgadoresDto;
} else if (($accion == "baja") && ($idSalasJuzgador != "")) {
    $salasjuzgadoresDto = $salasjuzgadoresFacade->deleteSalasjuzgadores($salasjuzgadoresDto);
    echo $salasjuzgadoresDto;
} else if (($accion == "seleccionar") && ($idSalasJuzgador != "")) {
    $salasjuzgadoresDto = $salasjuzgadoresFacade->selectSalasjuzgadores($salasjuzgadoresDto);
    echo $salasjuzgadoresDto;
}*/

} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>