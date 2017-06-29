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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/instancias/InstanciasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/instancias/InstanciasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class InstanciasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarInstancias($InstanciasDto) {
            $InstanciasDto->setcveInstancia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($InstanciasDto->getcveInstancia(), "utf8") : strtoupper($InstanciasDto->getcveInstancia()))))));
            if ($this->esFecha($InstanciasDto->getcveInstancia())) {
                $InstanciasDto->setcveInstancia($this->fechaMysql($InstanciasDto->getcveInstancia()));
            }
            $InstanciasDto->setdesInstancia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($InstanciasDto->getdesInstancia(), "utf8") : strtoupper($InstanciasDto->getdesInstancia()))))));
            if ($this->esFecha($InstanciasDto->getdesInstancia())) {
                $InstanciasDto->setdesInstancia($this->fechaMysql($InstanciasDto->getdesInstancia()));
            }
            $InstanciasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($InstanciasDto->getactivo(), "utf8") : strtoupper($InstanciasDto->getactivo()))))));
            if ($this->esFecha($InstanciasDto->getactivo())) {
                $InstanciasDto->setactivo($this->fechaMysql($InstanciasDto->getactivo()));
            }
            $InstanciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($InstanciasDto->getfechaRegistro(), "utf8") : strtoupper($InstanciasDto->getfechaRegistro()))))));
            if ($this->esFecha($InstanciasDto->getfechaRegistro())) {
                $InstanciasDto->setfechaRegistro($this->fechaMysql($InstanciasDto->getfechaRegistro()));
            }
            $InstanciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($InstanciasDto->getfechaActualizacion(), "utf8") : strtoupper($InstanciasDto->getfechaActualizacion()))))));
            if ($this->esFecha($InstanciasDto->getfechaActualizacion())) {
                $InstanciasDto->setfechaActualizacion($this->fechaMysql($InstanciasDto->getfechaActualizacion()));
            }
            return $InstanciasDto;
        }

        public function selectInstancias($InstanciasDto) {
            $InstanciasDto = $this->validarInstancias($InstanciasDto);
            $InstanciasController = new InstanciasController();
            $InstanciasDto = $InstanciasController->selectInstancias($InstanciasDto);
            if ($InstanciasDto != "") {
                $dtoToJson = new DtoToJson($InstanciasDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertInstancias($InstanciasDto) {
            $InstanciasDto = $this->validarInstancias($InstanciasDto);
            $InstanciasController = new InstanciasController();
            $InstanciasDto = $InstanciasController->insertInstancias($InstanciasDto);
            if ($InstanciasDto != "") {
                $dtoToJson = new DtoToJson($InstanciasDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateInstancias($InstanciasDto) {
            $InstanciasDto = $this->validarInstancias($InstanciasDto);
            $InstanciasController = new InstanciasController();
            $InstanciasDto = $InstanciasController->updateInstancias($InstanciasDto);
            if ($InstanciasDto != "") {
                $dtoToJson = new DtoToJson($InstanciasDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteInstancias($InstanciasDto) {
            $InstanciasDto = $this->validarInstancias($InstanciasDto);
            $InstanciasController = new InstanciasController();
            $InstanciasDto = $InstanciasController->deleteInstancias($InstanciasDto);
            if ($InstanciasDto == true) {
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

    @$cveInstancia = $_POST["cveInstancia"];
    @$desInstancia = $_POST["desInstancia"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $instanciasFacade = new InstanciasFacade();
    $instanciasDto = new InstanciasDTO();

    $instanciasDto->setCveInstancia($cveInstancia);
    $instanciasDto->setDesInstancia($desInstancia);
    $instanciasDto->setActivo($activo);
    $instanciasDto->setFechaRegistro($fechaRegistro);
    $instanciasDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveInstancia == "")) {
        $instanciasDto = $instanciasFacade->insertInstancias($instanciasDto);
        echo $instanciasDto;
    } else if (($accion == "guardar") && ($cveInstancia != "")) {
        $instanciasDto = $instanciasFacade->updateInstancias($instanciasDto);
        echo $instanciasDto;
    } else if ($accion == "consultar") {
        $instanciasDto = $instanciasFacade->selectInstancias($instanciasDto);
        echo $instanciasDto;
    } else if (($accion == "baja") && ($cveInstancia != "")) {
        $instanciasDto = $instanciasFacade->deleteInstancias($instanciasDto);
        echo $instanciasDto;
    } else if (($accion == "seleccionar") && ($cveInstancia != "")) {
        $instanciasDto = $instanciasFacade->selectInstancias($instanciasDto);
        echo $instanciasDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>