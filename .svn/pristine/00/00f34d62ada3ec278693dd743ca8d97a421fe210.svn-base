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

session_start();
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionesestatusrad/ActuacionesestatusradDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuacionesestatusrad/ActuacionesestatusradController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ActuacionesestatusradFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarActuacionesestatusrad($ActuacionesestatusradDto) {
        $ActuacionesestatusradDto->setidActuacionesEstatusRad(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesestatusradDto->getidActuacionesEstatusRad(), "utf8") : strtoupper($ActuacionesestatusradDto->getidActuacionesEstatusRad()))))));
        if ($this->esFecha($ActuacionesestatusradDto->getidActuacionesEstatusRad())) {
            $ActuacionesestatusradDto->setidActuacionesEstatusRad($this->fechaMysql($ActuacionesestatusradDto->getidActuacionesEstatusRad()));
        }
        $ActuacionesestatusradDto->setidActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesestatusradDto->getidActuacion(), "utf8") : strtoupper($ActuacionesestatusradDto->getidActuacion()))))));
        if ($this->esFecha($ActuacionesestatusradDto->getidActuacion())) {
            $ActuacionesestatusradDto->setidActuacion($this->fechaMysql($ActuacionesestatusradDto->getidActuacion()));
        }
        $ActuacionesestatusradDto->setcveTipoEstatusRadicacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesestatusradDto->getcveTipoEstatusRadicacion(), "utf8") : strtoupper($ActuacionesestatusradDto->getcveTipoEstatusRadicacion()))))));
        if ($this->esFecha($ActuacionesestatusradDto->getcveTipoEstatusRadicacion())) {
            $ActuacionesestatusradDto->setcveTipoEstatusRadicacion($this->fechaMysql($ActuacionesestatusradDto->getcveTipoEstatusRadicacion()));
        }
        $ActuacionesestatusradDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesestatusradDto->getfechaRegistro(), "utf8") : strtoupper($ActuacionesestatusradDto->getfechaRegistro()))))));
        if ($this->esFecha($ActuacionesestatusradDto->getfechaRegistro())) {
            $ActuacionesestatusradDto->setfechaRegistro($this->fechaMysql($ActuacionesestatusradDto->getfechaRegistro()));
        }
        $ActuacionesestatusradDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesestatusradDto->getfechaActualizacion(), "utf8") : strtoupper($ActuacionesestatusradDto->getfechaActualizacion()))))));
        if ($this->esFecha($ActuacionesestatusradDto->getfechaActualizacion())) {
            $ActuacionesestatusradDto->setfechaActualizacion($this->fechaMysql($ActuacionesestatusradDto->getfechaActualizacion()));
        }
        $ActuacionesestatusradDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ActuacionesestatusradDto->getactivo(), "utf8") : strtoupper($ActuacionesestatusradDto->getactivo()))))));
        if ($this->esFecha($ActuacionesestatusradDto->getactivo())) {
            $ActuacionesestatusradDto->setactivo($this->fechaMysql($ActuacionesestatusradDto->getactivo()));
        }
        return $ActuacionesestatusradDto;
    }

    public function selectActuacionesestatusrad($ActuacionesestatusradDto) {
        $ActuacionesestatusradDto = $this->validarActuacionesestatusrad($ActuacionesestatusradDto);
        $ActuacionesestatusradController = new ActuacionesestatusradController();
        $ActuacionesestatusradDto = $ActuacionesestatusradController->selectActuacionesestatusrad($ActuacionesestatusradDto);
        if ($ActuacionesestatusradDto != "") {
            $dtoToJson = new DtoToJson($ActuacionesestatusradDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertActuacionesestatusrad($ActuacionesestatusradDto) {
        $ActuacionesestatusradDto = $this->validarActuacionesestatusrad($ActuacionesestatusradDto);
        $ActuacionesestatusradController = new ActuacionesestatusradController();
        $ActuacionesestatusradDto = $ActuacionesestatusradController->insertActuacionesestatusrad($ActuacionesestatusradDto);
        if ($ActuacionesestatusradDto != "") {
            $dtoToJson = new DtoToJson($ActuacionesestatusradDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateActuacionesestatusrad($ActuacionesestatusradDto) {
        $ActuacionesestatusradDto = $this->validarActuacionesestatusrad($ActuacionesestatusradDto);
        $ActuacionesestatusradController = new ActuacionesestatusradController();
        $ActuacionesestatusradDto = $ActuacionesestatusradController->updateActuacionesestatusrad($ActuacionesestatusradDto);
        if ($ActuacionesestatusradDto != "") {
            $dtoToJson = new DtoToJson($ActuacionesestatusradDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteActuacionesestatusrad($ActuacionesestatusradDto) {
        $ActuacionesestatusradDto = $this->validarActuacionesestatusrad($ActuacionesestatusradDto);
        $ActuacionesestatusradController = new ActuacionesestatusradController();
        $ActuacionesestatusradDto = $ActuacionesestatusradController->deleteActuacionesestatusrad($ActuacionesestatusradDto);
        if ($ActuacionesestatusradDto == true) {
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

@$idActuacionesEstatusRad = $_POST["idActuacionesEstatusRad"];
@$idActuacion = $_POST["idActuacion"];
@$cveTipoEstatusRadicacion = $_POST["cveTipoEstatusRadicacion"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$activo = $_POST["activo"];
@$accion = $_POST["accion"];

$actuacionesestatusradFacade = new ActuacionesestatusradFacade();
$actuacionesestatusradDto = new ActuacionesestatusradDTO();

$actuacionesestatusradDto->setIdActuacionesEstatusRad($idActuacionesEstatusRad);
$actuacionesestatusradDto->setIdActuacion($idActuacion);
$actuacionesestatusradDto->setCveTipoEstatusRadicacion($cveTipoEstatusRadicacion);
$actuacionesestatusradDto->setFechaRegistro($fechaRegistro);
$actuacionesestatusradDto->setFechaActualizacion($fechaActualizacion);
$actuacionesestatusradDto->setActivo($activo);

if (($accion == "guardar") && ($idActuacionesEstatusRad == "")) {
    $actuacionesestatusradDto = $actuacionesestatusradFacade->insertActuacionesestatusrad($actuacionesestatusradDto);
    echo $actuacionesestatusradDto;
} else if (($accion == "guardar") && ($idActuacionesEstatusRad != "")) {
    $actuacionesestatusradDto = $actuacionesestatusradFacade->updateActuacionesestatusrad($actuacionesestatusradDto);
    echo $actuacionesestatusradDto;
} else if ($accion == "consultar") {
    $actuacionesestatusradDto = $actuacionesestatusradFacade->selectActuacionesestatusrad($actuacionesestatusradDto);
    echo $actuacionesestatusradDto;
} else if (($accion == "baja") && ($idActuacionesEstatusRad != "")) {
    $actuacionesestatusradDto = $actuacionesestatusradFacade->deleteActuacionesestatusrad($actuacionesestatusradDto);
    echo $actuacionesestatusradDto;
} else if (($accion == "seleccionar") && ($idActuacionesEstatusRad != "")) {
    $actuacionesestatusradDto = $actuacionesestatusradFacade->selectActuacionesestatusrad($actuacionesestatusradDto);
    echo $actuacionesestatusradDto;
}
?>