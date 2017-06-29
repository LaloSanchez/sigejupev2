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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/gruposednicos/GruposednicosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/gruposednicos/GruposednicosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class GruposednicosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarGruposednicos($GruposednicosDto) {
            $GruposednicosDto->setcveGrupoEdnico(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposednicosDto->getcveGrupoEdnico(), "utf8") : strtoupper($GruposednicosDto->getcveGrupoEdnico()))))));
            if ($this->esFecha($GruposednicosDto->getcveGrupoEdnico())) {
                $GruposednicosDto->setcveGrupoEdnico($this->fechaMysql($GruposednicosDto->getcveGrupoEdnico()));
            }
            $GruposednicosDto->setdesGrupoEdnico(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposednicosDto->getdesGrupoEdnico(), "utf8") : strtoupper($GruposednicosDto->getdesGrupoEdnico()))))));
            if ($this->esFecha($GruposednicosDto->getdesGrupoEdnico())) {
                $GruposednicosDto->setdesGrupoEdnico($this->fechaMysql($GruposednicosDto->getdesGrupoEdnico()));
            }
            $GruposednicosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposednicosDto->getactivo(), "utf8") : strtoupper($GruposednicosDto->getactivo()))))));
            if ($this->esFecha($GruposednicosDto->getactivo())) {
                $GruposednicosDto->setactivo($this->fechaMysql($GruposednicosDto->getactivo()));
            }
            $GruposednicosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposednicosDto->getfechaRegistro(), "utf8") : strtoupper($GruposednicosDto->getfechaRegistro()))))));
            if ($this->esFecha($GruposednicosDto->getfechaRegistro())) {
                $GruposednicosDto->setfechaRegistro($this->fechaMysql($GruposednicosDto->getfechaRegistro()));
            }
            $GruposednicosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($GruposednicosDto->getfechaActualizacion(), "utf8") : strtoupper($GruposednicosDto->getfechaActualizacion()))))));
            if ($this->esFecha($GruposednicosDto->getfechaActualizacion())) {
                $GruposednicosDto->setfechaActualizacion($this->fechaMysql($GruposednicosDto->getfechaActualizacion()));
            }
            return $GruposednicosDto;
        }

        public function selectGruposednicos($GruposednicosDto) {
            $GruposednicosDto = $this->validarGruposednicos($GruposednicosDto);
            $GruposednicosController = new GruposednicosController();
            $GruposednicosDto = $GruposednicosController->selectGruposednicos($GruposednicosDto);
            if ($GruposednicosDto != "") {
                $dtoToJson = new DtoToJson($GruposednicosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertGruposednicos($GruposednicosDto) {
            $GruposednicosDto = $this->validarGruposednicos($GruposednicosDto);
            $GruposednicosController = new GruposednicosController();
            $GruposednicosDto = $GruposednicosController->insertGruposednicos($GruposednicosDto);
            if ($GruposednicosDto != "") {
                $dtoToJson = new DtoToJson($GruposednicosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateGruposednicos($GruposednicosDto) {
            $GruposednicosDto = $this->validarGruposednicos($GruposednicosDto);
            $GruposednicosController = new GruposednicosController();
            $GruposednicosDto = $GruposednicosController->updateGruposednicos($GruposednicosDto);
            if ($GruposednicosDto != "") {
                $dtoToJson = new DtoToJson($GruposednicosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteGruposednicos($GruposednicosDto) {
            $GruposednicosDto = $this->validarGruposednicos($GruposednicosDto);
            $GruposednicosController = new GruposednicosController();
            $GruposednicosDto = $GruposednicosController->deleteGruposednicos($GruposednicosDto);
            if ($GruposednicosDto == true) {
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

    @$cveGrupoEdnico = $_POST["cveGrupoEdnico"];
    @$desGrupoEdnico = $_POST["desGrupoEdnico"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $gruposednicosFacade = new GruposednicosFacade();
    $gruposednicosDto = new GruposednicosDTO();

    $gruposednicosDto->setCveGrupoEdnico($cveGrupoEdnico);
    $gruposednicosDto->setDesGrupoEdnico($desGrupoEdnico);
    $gruposednicosDto->setActivo($activo);
    $gruposednicosDto->setFechaRegistro($fechaRegistro);
    $gruposednicosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveGrupoEdnico == "")) {
        $gruposednicosDto = $gruposednicosFacade->insertGruposednicos($gruposednicosDto);
        echo $gruposednicosDto;
    } else if (($accion == "guardar") && ($cveGrupoEdnico != "")) {
        $gruposednicosDto = $gruposednicosFacade->updateGruposednicos($gruposednicosDto);
        echo $gruposednicosDto;
    } else if ($accion == "consultar") {
        $gruposednicosDto = $gruposednicosFacade->selectGruposednicos($gruposednicosDto);
        echo utf8_encode($gruposednicosDto);
    } else if (($accion == "baja") && ($cveGrupoEdnico != "")) {
        $gruposednicosDto = $gruposednicosFacade->deleteGruposednicos($gruposednicosDto);
        echo $gruposednicosDto;
    } else if (($accion == "seleccionar") && ($cveGrupoEdnico != "")) {
        $gruposednicosDto = $gruposednicosFacade->selectGruposednicos($gruposednicosDto);
        echo $gruposednicosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>