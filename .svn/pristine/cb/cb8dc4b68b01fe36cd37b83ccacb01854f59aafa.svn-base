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
#$_SESSION['cveGrupo'] = 91;
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/autoresaudiencias/AutoresaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/autoresaudiencias/AutoresaudienciasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/cataudiencias/CataudienciasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class AutoresaudienciasFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarAutoresaudiencias($AutoresaudienciasDto) {
        $AutoresaudienciasDto->setidAutorAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AutoresaudienciasDto->getidAutorAudiencia(), "utf8") : strtoupper($AutoresaudienciasDto->getidAutorAudiencia()))))));
        if ($this->esFecha($AutoresaudienciasDto->getidAutorAudiencia())) {
            $AutoresaudienciasDto->setidAutorAudiencia($this->fechaMysql($AutoresaudienciasDto->getidAutorAudiencia()));
        }
        $AutoresaudienciasDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AutoresaudienciasDto->getcveCatAudiencia(), "utf8") : strtoupper($AutoresaudienciasDto->getcveCatAudiencia()))))));
        if ($this->esFecha($AutoresaudienciasDto->getcveCatAudiencia())) {
            $AutoresaudienciasDto->setcveCatAudiencia($this->fechaMysql($AutoresaudienciasDto->getcveCatAudiencia()));
        }
        $AutoresaudienciasDto->setcveGrupo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AutoresaudienciasDto->getcveGrupo(), "utf8") : strtoupper($AutoresaudienciasDto->getcveGrupo()))))));
        if ($this->esFecha($AutoresaudienciasDto->getcveGrupo())) {
            $AutoresaudienciasDto->setcveGrupo($this->fechaMysql($AutoresaudienciasDto->getcveGrupo()));
        }
        $AutoresaudienciasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AutoresaudienciasDto->getactivo(), "utf8") : strtoupper($AutoresaudienciasDto->getactivo()))))));
        if ($this->esFecha($AutoresaudienciasDto->getactivo())) {
            $AutoresaudienciasDto->setactivo($this->fechaMysql($AutoresaudienciasDto->getactivo()));
        }
        $AutoresaudienciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AutoresaudienciasDto->getfechaRegistro(), "utf8") : strtoupper($AutoresaudienciasDto->getfechaRegistro()))))));
        if ($this->esFecha($AutoresaudienciasDto->getfechaRegistro())) {
            $AutoresaudienciasDto->setfechaRegistro($this->fechaMysql($AutoresaudienciasDto->getfechaRegistro()));
        }
        $AutoresaudienciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AutoresaudienciasDto->getfechaActualizacion(), "utf8") : strtoupper($AutoresaudienciasDto->getfechaActualizacion()))))));
        if ($this->esFecha($AutoresaudienciasDto->getfechaActualizacion())) {
            $AutoresaudienciasDto->setfechaActualizacion($this->fechaMysql($AutoresaudienciasDto->getfechaActualizacion()));
        }
        return $AutoresaudienciasDto;
    }

    public function selectAutoresaudiencias($AutoresaudienciasDto) {
        $x = 1;
        $json = "";

        $AutoresaudienciasDto = $this->validarAutoresaudiencias($AutoresaudienciasDto);
        $AutoresaudienciasController = new AutoresaudienciasController();
        $catAudienciasDTO = new CataudienciasDTO();
        $catAudienciasController = new CataudienciasController();
        $AutoresaudienciasDto->setCveGrupo($_SESSION['cveGrupo']);
        $AutoresaudienciasDto = $AutoresaudienciasController->selectAutoresaudiencias($AutoresaudienciasDto);
        if ($AutoresaudienciasDto != "") {
            $json .= "{";
            $json .= '"status":"OK",';
            $json .= '"totalCount":"' . count($AutoresaudienciasDto) . '",';
            $json .= '"data":[';
            foreach ($AutoresaudienciasDto as $Autoresaudiencia) {
                $catAudienciasDTO->setCveCatAudiencia($Autoresaudiencia->getCveCatAudiencia());
                $catAudiencias = $catAudienciasController->selectCataudiencias($catAudienciasDTO);
                $json .= "{";
                $json .= '"cveCatAudiencia":' . json_encode(($catAudiencias[0]->getCveCatAudiencia())) . ",";
                $json .= '"desCatAudiencia":' . json_encode(utf8_encode($catAudiencias[0]->getDesCatAudiencia())) . ",";
                $json .= '"cveEstapaProcesal":' . json_encode(($catAudiencias[0]->getCveEtapaProcesal())) . "";
                $json .= "}" . "\n";
                $x++;
                if ($x <= count($AutoresaudienciasDto)) {
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

    public function autoresAudienciasOrden($AutoresaudienciasDto, $proveedor = null) {
        $x = 1;
        $json = "";
        $AutoresaudienciasDto = $this->validarAutoresaudiencias($AutoresaudienciasDto);
        $AutoresaudienciasController = new AutoresaudienciasController();
        $AutoresaudienciasDto->setCveGrupo($_SESSION['cveGrupo']);
        $AutoresaudienciasDto = $AutoresaudienciasController->autoresAudienciasOrden($AutoresaudienciasDto);
        if ($AutoresaudienciasDto != "") {
            $json .= "{";
            $json .= '"status":"OK",';
            $json .= '"totalCount":"' . count($AutoresaudienciasDto) . '",';
            $json .= '"data":[';
            foreach ($AutoresaudienciasDto as $Autoresaudiencia) {
                $json .= "{";
                $json .= '"cveCatAudiencia":' . json_encode(($Autoresaudiencia["cveCatAudiencia"])) . ",";
                $json .= '"desCatAudiencia":' . json_encode(utf8_encode($Autoresaudiencia["desCatAudiencia"])) . ",";
                $json .= '"cveEstapaProcesal":' . json_encode(($Autoresaudiencia["cveEtapaProcesal"])) . "";
                $json .= "}" . "\n";
                $x++;
                if ($x <= count($AutoresaudienciasDto)) {
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

    public function insertAutoresaudiencias($AutoresaudienciasDto) {
        $AutoresaudienciasDto = $this->validarAutoresaudiencias($AutoresaudienciasDto);
        $AutoresaudienciasController = new AutoresaudienciasController();
        $AutoresaudienciasDto = $AutoresaudienciasController->insertAutoresaudiencias($AutoresaudienciasDto);
        if ($AutoresaudienciasDto != "") {
            $dtoToJson = new DtoToJson($AutoresaudienciasDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateAutoresaudiencias($AutoresaudienciasDto) {
        $AutoresaudienciasDto = $this->validarAutoresaudiencias($AutoresaudienciasDto);
        $AutoresaudienciasController = new AutoresaudienciasController();
        $AutoresaudienciasDto = $AutoresaudienciasController->updateAutoresaudiencias($AutoresaudienciasDto);
        if ($AutoresaudienciasDto != "") {
            $dtoToJson = new DtoToJson($AutoresaudienciasDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteAutoresaudiencias($AutoresaudienciasDto) {
        $AutoresaudienciasDto = $this->validarAutoresaudiencias($AutoresaudienciasDto);
        $AutoresaudienciasController = new AutoresaudienciasController();
        $AutoresaudienciasDto = $AutoresaudienciasController->deleteAutoresaudiencias($AutoresaudienciasDto);
        if ($AutoresaudienciasDto == true) {
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

}

@$idAutorAudiencia = $_POST["idAutorAudiencia"];
@$cveCatAudiencia = $_POST["cveCatAudiencia"];
@$cveGrupo = $_POST["cveGrupo"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$autoresaudienciasFacade = new AutoresaudienciasFacade();
$autoresaudienciasDto = new AutoresaudienciasDTO();

$autoresaudienciasDto->setIdAutorAudiencia($idAutorAudiencia);
$autoresaudienciasDto->setCveCatAudiencia($cveCatAudiencia);
$autoresaudienciasDto->setCveGrupo($cveGrupo);
$autoresaudienciasDto->setActivo($activo);
$autoresaudienciasDto->setFechaRegistro($fechaRegistro);
$autoresaudienciasDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idAutorAudiencia == "")) {
    $autoresaudienciasDto = $autoresaudienciasFacade->insertAutoresaudiencias($autoresaudienciasDto);
    echo $autoresaudienciasDto;
} else if (($accion == "guardar") && ($idAutorAudiencia != "")) {
    $autoresaudienciasDto = $autoresaudienciasFacade->updateAutoresaudiencias($autoresaudienciasDto);
    echo $autoresaudienciasDto;
} else if ($accion == "consultar") {
    $autoresaudienciasDto = $autoresaudienciasFacade->selectAutoresaudiencias($autoresaudienciasDto);
    echo $autoresaudienciasDto;
} else if (($accion == "baja") && ($idAutorAudiencia != "")) {
    $autoresaudienciasDto = $autoresaudienciasFacade->deleteAutoresaudiencias($autoresaudienciasDto);
    echo $autoresaudienciasDto;
} else if (($accion == "seleccionar") && ($idAutorAudiencia != "")) {
    $autoresaudienciasDto = $autoresaudienciasFacade->selectAutoresaudiencias($autoresaudienciasDto);
    echo $autoresaudienciasDto;
} else if (($accion == "autoresAudienciasOrden") ) {
    $autoresaudienciasDto = $autoresaudienciasFacade->autoresAudienciasOrden($autoresaudienciasDto);
    echo $autoresaudienciasDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>