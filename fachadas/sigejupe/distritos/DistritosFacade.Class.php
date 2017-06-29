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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/distritos/DistritosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class DistritosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarDistritos($DistritosDto) {
        $DistritosDto->setcveDistrito(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DistritosDto->getcveDistrito(), "utf8") : strtoupper($DistritosDto->getcveDistrito()))))));
        if ($this->esFecha($DistritosDto->getcveDistrito())) {
            $DistritosDto->setcveDistrito($this->fechaMysql($DistritosDto->getcveDistrito()));
        }
        $DistritosDto->setcveRegion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DistritosDto->getcveRegion(), "utf8") : strtoupper($DistritosDto->getcveRegion()))))));
        if ($this->esFecha($DistritosDto->getcveRegion())) {
            $DistritosDto->setcveRegion($this->fechaMysql($DistritosDto->getcveRegion()));
        }
        $DistritosDto->setdesDistrito(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DistritosDto->getdesDistrito(), "utf8") : strtoupper($DistritosDto->getdesDistrito()))))));
        if ($this->esFecha($DistritosDto->getdesDistrito())) {
            $DistritosDto->setdesDistrito($this->fechaMysql($DistritosDto->getdesDistrito()));
        }
        $DistritosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DistritosDto->getactivo(), "utf8") : strtoupper($DistritosDto->getactivo()))))));
        if ($this->esFecha($DistritosDto->getactivo())) {
            $DistritosDto->setactivo($this->fechaMysql($DistritosDto->getactivo()));
        }
        $DistritosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DistritosDto->getfechaRegistro(), "utf8") : strtoupper($DistritosDto->getfechaRegistro()))))));
        if ($this->esFecha($DistritosDto->getfechaRegistro())) {
            $DistritosDto->setfechaRegistro($this->fechaMysql($DistritosDto->getfechaRegistro()));
        }
        $DistritosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($DistritosDto->getfechaActualizacion(), "utf8") : strtoupper($DistritosDto->getfechaActualizacion()))))));
        if ($this->esFecha($DistritosDto->getfechaActualizacion())) {
            $DistritosDto->setfechaActualizacion($this->fechaMysql($DistritosDto->getfechaActualizacion()));
        }
        return $DistritosDto;
    }

    public function selectDistritos($DistritosDto) {
        $DistritosDto = $this->validarDistritos($DistritosDto);
        $DistritosController = new DistritosController();
        $DistritosDto = $DistritosController->selectDistritos($DistritosDto);
        if ($DistritosDto != "") {
            $dtoToJson = new DtoToJson($DistritosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertDistritos($DistritosDto) {
        $DistritosDto = $this->validarDistritos($DistritosDto);
        $DistritosController = new DistritosController();
        $DistritosDto = $DistritosController->insertDistritos($DistritosDto);
        if ($DistritosDto != "") {
            $dtoToJson = new DtoToJson($DistritosDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateDistritos($DistritosDto) {
        $DistritosDto = $this->validarDistritos($DistritosDto);
        $DistritosController = new DistritosController();
        $DistritosDto = $DistritosController->updateDistritos($DistritosDto);
        if ($DistritosDto != "") {
            $dtoToJson = new DtoToJson($DistritosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }
    
    public function consaudienciasdistritos($DistritosDto,$paramcataudiencia){
        $DistritosDto=$this->validarDistritos($DistritosDto);
        $DistritosController = new DistritosController();
        $DistritosDto = $DistritosController->consaudienciasdistritos($DistritosDto,$paramcataudiencia);

        //print_r(json_encode($CarpetasjudicialesDto));

        return json_encode($DistritosDto);
    }

    public function deleteDistritos($DistritosDto) {
        $DistritosDto = $this->validarDistritos($DistritosDto);
        $DistritosController = new DistritosController();
        $DistritosDto = $DistritosController->deleteDistritos($DistritosDto);
        if ($DistritosDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
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

    public function selectDistritosActivos($DistritosDto) {
        $DistritosDto = $this->validarDistritos($DistritosDto);

        $DistritosController= new DistritosController();
        $ListaDistritos = $DistritosController->selectDistritosActivos($DistritosDto);
        //print_r($ListaDistritos);
        return json_encode($ListaDistritos);
    }

}

@$cveDistrito = $_POST["cveDistrito"];
@$cveRegion = $_POST["cveRegion"];
@$desDistrito = $_POST["desDistrito"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$paramcataudiencia = array();
@$paramcataudiencia["idCatAudiencia"]= $_POST['idCatAudiencia'];

$distritosFacade = new DistritosFacade();
$distritosDto = new DistritosDTO();

$distritosDto->setCveDistrito($cveDistrito);
$distritosDto->setCveRegion($cveRegion);
$distritosDto->setDesDistrito($desDistrito);
$distritosDto->setActivo($activo);
$distritosDto->setFechaRegistro($fechaRegistro);
$distritosDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($cveDistrito == "")) {
    $distritosDto = $distritosFacade->insertDistritos($distritosDto);
    echo $distritosDto;
} else if (($accion == "guardar") && ($cveDistrito != "")) {
    $distritosDto = $distritosFacade->updateDistritos($distritosDto);
    echo $distritosDto;
} else if ($accion == "consultar") {
    $distritosDto = $distritosFacade->selectDistritos($distritosDto);
    echo $distritosDto;
} else if (($accion == "baja") && ($cveDistrito != "")) {
    $distritosDto = $distritosFacade->deleteDistritos($distritosDto);
    echo $distritosDto;
} else if (($accion == "seleccionar") && ($cveDistrito != "")) {
    $distritosDto = $distritosFacade->selectDistritos($distritosDto);
    echo $distritosDto;
} else if ($accion == "consultarDistritosActivos") {
    $distritosDto = $distritosFacade->selectDistritosActivos($distritosDto);
    echo $distritosDto;
} else if($accion=="consaudienciasdistritos"){
    $distritosDto= $distritosFacade->consaudienciasdistritos($distritosDto,$paramcataudiencia);
    echo $distritosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>