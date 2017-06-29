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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/efectosofendidos/EfectosofendidosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/efectosofendidos/EfectosofendidosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class EfectosofendidosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarEfectosofendidos($EfectosofendidosDto) {
        $EfectosofendidosDto->setidEfectoOfendido(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EfectosofendidosDto->getidEfectoOfendido(), "utf8") : strtoupper($EfectosofendidosDto->getidEfectoOfendido()))))));
        if ($this->esFecha($EfectosofendidosDto->getidEfectoOfendido())) {
            $EfectosofendidosDto->setidEfectoOfendido($this->fechaMysql($EfectosofendidosDto->getidEfectoOfendido()));
        }
        $EfectosofendidosDto->setcveDetalleEfecto(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EfectosofendidosDto->getcveDetalleEfecto(), "utf8") : strtoupper($EfectosofendidosDto->getcveDetalleEfecto()))))));
        if ($this->esFecha($EfectosofendidosDto->getcveDetalleEfecto())) {
            $EfectosofendidosDto->setcveDetalleEfecto($this->fechaMysql($EfectosofendidosDto->getcveDetalleEfecto()));
        }
        $EfectosofendidosDto->setidImpOfeDelSolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EfectosofendidosDto->getidImpOfeDelSolicitud(), "utf8") : strtoupper($EfectosofendidosDto->getidImpOfeDelSolicitud()))))));
        if ($this->esFecha($EfectosofendidosDto->getidImpOfeDelSolicitud())) {
            $EfectosofendidosDto->setidImpOfeDelSolicitud($this->fechaMysql($EfectosofendidosDto->getidImpOfeDelSolicitud()));
        }
        $EfectosofendidosDto->setIdReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EfectosofendidosDto->getIdReferencia(), "utf8") : strtoupper($EfectosofendidosDto->getIdReferencia()))))));
        if ($this->esFecha($EfectosofendidosDto->getIdReferencia())) {
            $EfectosofendidosDto->setIdReferencia($this->fechaMysql($EfectosofendidosDto->getIdReferencia()));
        }
        $EfectosofendidosDto->setorigen(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EfectosofendidosDto->getorigen(), "utf8") : strtoupper($EfectosofendidosDto->getorigen()))))));
        if ($this->esFecha($EfectosofendidosDto->getorigen())) {
            $EfectosofendidosDto->setorigen($this->fechaMysql($EfectosofendidosDto->getorigen()));
        }
        $EfectosofendidosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EfectosofendidosDto->getactivo(), "utf8") : strtoupper($EfectosofendidosDto->getactivo()))))));
        if ($this->esFecha($EfectosofendidosDto->getactivo())) {
            $EfectosofendidosDto->setactivo($this->fechaMysql($EfectosofendidosDto->getactivo()));
        }
        $EfectosofendidosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EfectosofendidosDto->getfechaRegistro(), "utf8") : strtoupper($EfectosofendidosDto->getfechaRegistro()))))));
        if ($this->esFecha($EfectosofendidosDto->getfechaRegistro())) {
            $EfectosofendidosDto->setfechaRegistro($this->fechaMysql($EfectosofendidosDto->getfechaRegistro()));
        }
        $EfectosofendidosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($EfectosofendidosDto->getfechaActualizacion(), "utf8") : strtoupper($EfectosofendidosDto->getfechaActualizacion()))))));
        if ($this->esFecha($EfectosofendidosDto->getfechaActualizacion())) {
            $EfectosofendidosDto->setfechaActualizacion($this->fechaMysql($EfectosofendidosDto->getfechaActualizacion()));
        }
        return $EfectosofendidosDto;
    }

    public function selectEfectosofendidos($EfectosofendidosDto) {
        $EfectosofendidosDto = $this->validarEfectosofendidos($EfectosofendidosDto);
        $EfectosofendidosController = new EfectosofendidosController();
        $EfectosofendidosDto = $EfectosofendidosController->selectEfectosofendidos($EfectosofendidosDto);
        if ($EfectosofendidosDto != "") {
            $dtoToJson = new DtoToJson($EfectosofendidosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertEfectosofendidos($EfectosofendidosDto) {
        $EfectosofendidosDto = $this->validarEfectosofendidos($EfectosofendidosDto);
        $EfectosofendidosController = new EfectosofendidosController();
        $EfectosofendidosDto = $EfectosofendidosController->insertEfectosofendidos($EfectosofendidosDto);
        if ($EfectosofendidosDto != "") {
            $dtoToJson = new DtoToJson($EfectosofendidosDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateEfectosofendidos($EfectosofendidosDto) {
        $EfectosofendidosDto = $this->validarEfectosofendidos($EfectosofendidosDto);
        $EfectosofendidosController = new EfectosofendidosController();
        $EfectosofendidosDto = $EfectosofendidosController->updateEfectosofendidos($EfectosofendidosDto);
        if ($EfectosofendidosDto != "") {
            $dtoToJson = new DtoToJson($EfectosofendidosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteEfectosofendidos($EfectosofendidosDto) {
        $EfectosofendidosDto = $this->validarEfectosofendidos($EfectosofendidosDto);
        $EfectosofendidosController = new EfectosofendidosController();
        $EfectosofendidosDto = $EfectosofendidosController->deleteEfectosofendidos($EfectosofendidosDto);
        if ($EfectosofendidosDto == true) {
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

@$idEfectoOfendido = $_POST["idEfectoOfendido"];
@$cveDetalleEfecto = $_POST["cveDetalleEfecto"];
@$idImpOfeDelSolicitud = $_POST["idImpOfeDelSolicitud"];
@$IdReferencia = $_POST["IdReferencia"];
@$origen = $_POST["origen"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$efectosofendidosFacade = new EfectosofendidosFacade();
$efectosofendidosDto = new EfectosofendidosDTO();

$efectosofendidosDto->setIdEfectoOfendido($idEfectoOfendido);
$efectosofendidosDto->setCveDetalleEfecto($cveDetalleEfecto);
$efectosofendidosDto->setIdImpOfeDelSolicitud($idImpOfeDelSolicitud);
$efectosofendidosDto->setIdReferencia($IdReferencia);
$efectosofendidosDto->setOrigen($origen);
$efectosofendidosDto->setActivo($activo);
$efectosofendidosDto->setFechaRegistro($fechaRegistro);
$efectosofendidosDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idEfectoOfendido == "")) {
    $efectosofendidosDto = $efectosofendidosFacade->insertEfectosofendidos($efectosofendidosDto);
    echo $efectosofendidosDto;
} else if (($accion == "guardar") && ($idEfectoOfendido != "")) {
    $efectosofendidosDto = $efectosofendidosFacade->updateEfectosofendidos($efectosofendidosDto);
    echo $efectosofendidosDto;
} else if ($accion == "consultar") {
    $efectosofendidosDto = $efectosofendidosFacade->selectEfectosofendidos($efectosofendidosDto);
    echo $efectosofendidosDto;
} else if (($accion == "baja") && ($idEfectoOfendido != "")) {
    $efectosofendidosDto = $efectosofendidosFacade->deleteEfectosofendidos($efectosofendidosDto);
    echo $efectosofendidosDto;
} else if (($accion == "seleccionar") && ($idEfectoOfendido != "")) {
    $efectosofendidosDto = $efectosofendidosFacade->selectEfectosofendidos($efectosofendidosDto);
    echo $efectosofendidosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>