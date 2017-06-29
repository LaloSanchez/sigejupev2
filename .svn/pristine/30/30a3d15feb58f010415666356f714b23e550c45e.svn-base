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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/homicidiosdolosos/HomicidiosdolososDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/homicidiosdolosos/HomicidiosdolososController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class HomicidiosdolososFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarHomicidiosdolosos($HomicidiosdolososDto) {
            $HomicidiosdolososDto->setcveHomicidioDoloso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HomicidiosdolososDto->getcveHomicidioDoloso(), "utf8") : strtoupper($HomicidiosdolososDto->getcveHomicidioDoloso()))))));
            if ($this->esFecha($HomicidiosdolososDto->getcveHomicidioDoloso())) {
                $HomicidiosdolososDto->setcveHomicidioDoloso($this->fechaMysql($HomicidiosdolososDto->getcveHomicidioDoloso()));
            }
            $HomicidiosdolososDto->setdesHomicidioDoloso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HomicidiosdolososDto->getdesHomicidioDoloso(), "utf8") : strtoupper($HomicidiosdolososDto->getdesHomicidioDoloso()))))));
            if ($this->esFecha($HomicidiosdolososDto->getdesHomicidioDoloso())) {
                $HomicidiosdolososDto->setdesHomicidioDoloso($this->fechaMysql($HomicidiosdolososDto->getdesHomicidioDoloso()));
            }
            $HomicidiosdolososDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HomicidiosdolososDto->getactivo(), "utf8") : strtoupper($HomicidiosdolososDto->getactivo()))))));
            if ($this->esFecha($HomicidiosdolososDto->getactivo())) {
                $HomicidiosdolososDto->setactivo($this->fechaMysql($HomicidiosdolososDto->getactivo()));
            }
            $HomicidiosdolososDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HomicidiosdolososDto->getfechaRegistro(), "utf8") : strtoupper($HomicidiosdolososDto->getfechaRegistro()))))));
            if ($this->esFecha($HomicidiosdolososDto->getfechaRegistro())) {
                $HomicidiosdolososDto->setfechaRegistro($this->fechaMysql($HomicidiosdolososDto->getfechaRegistro()));
            }
            $HomicidiosdolososDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HomicidiosdolososDto->getfechaActualizacion(), "utf8") : strtoupper($HomicidiosdolososDto->getfechaActualizacion()))))));
            if ($this->esFecha($HomicidiosdolososDto->getfechaActualizacion())) {
                $HomicidiosdolososDto->setfechaActualizacion($this->fechaMysql($HomicidiosdolososDto->getfechaActualizacion()));
            }
            return $HomicidiosdolososDto;
        }

        public function selectHomicidiosdolosos($HomicidiosdolososDto) {
            $HomicidiosdolososDto = $this->validarHomicidiosdolosos($HomicidiosdolososDto);
            $HomicidiosdolososController = new HomicidiosdolososController();
            $HomicidiosdolososDto = $HomicidiosdolososController->selectHomicidiosdolosos($HomicidiosdolososDto);
            if ($HomicidiosdolososDto != "") {
                $dtoToJson = new DtoToJson($HomicidiosdolososDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertHomicidiosdolosos($HomicidiosdolososDto) {
            $HomicidiosdolososDto = $this->validarHomicidiosdolosos($HomicidiosdolososDto);
            $HomicidiosdolososController = new HomicidiosdolososController();
            $HomicidiosdolososDto = $HomicidiosdolososController->insertHomicidiosdolosos($HomicidiosdolososDto);
            if ($HomicidiosdolososDto != "") {
                $dtoToJson = new DtoToJson($HomicidiosdolososDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateHomicidiosdolosos($HomicidiosdolososDto) {
            $HomicidiosdolososDto = $this->validarHomicidiosdolosos($HomicidiosdolososDto);
            $HomicidiosdolososController = new HomicidiosdolososController();
            $HomicidiosdolososDto = $HomicidiosdolososController->updateHomicidiosdolosos($HomicidiosdolososDto);
            if ($HomicidiosdolososDto != "") {
                $dtoToJson = new DtoToJson($HomicidiosdolososDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteHomicidiosdolosos($HomicidiosdolososDto) {
            $HomicidiosdolososDto = $this->validarHomicidiosdolosos($HomicidiosdolososDto);
            $HomicidiosdolososController = new HomicidiosdolososController();
            $HomicidiosdolososDto = $HomicidiosdolososController->deleteHomicidiosdolosos($HomicidiosdolososDto);
            if ($HomicidiosdolososDto == true) {
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

    @$cveHomicidioDoloso = $_POST["cveHomicidioDoloso"];
    @$desHomicidioDoloso = $_POST["desHomicidioDoloso"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $homicidiosdolososFacade = new HomicidiosdolososFacade();
    $homicidiosdolososDto = new HomicidiosdolososDTO();

    $homicidiosdolososDto->setCveHomicidioDoloso($cveHomicidioDoloso);
    $homicidiosdolososDto->setDesHomicidioDoloso($desHomicidioDoloso);
    $homicidiosdolososDto->setActivo($activo);
    $homicidiosdolososDto->setFechaRegistro($fechaRegistro);
    $homicidiosdolososDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($cveHomicidioDoloso == "")) {
        $homicidiosdolososDto = $homicidiosdolososFacade->insertHomicidiosdolosos($homicidiosdolososDto);
        echo $homicidiosdolososDto;
    } else if (($accion == "guardar") && ($cveHomicidioDoloso != "")) {
        $homicidiosdolososDto = $homicidiosdolososFacade->updateHomicidiosdolosos($homicidiosdolososDto);
        echo $homicidiosdolososDto;
    } else if ($accion == "consultar") {
        $homicidiosdolososDto = $homicidiosdolososFacade->selectHomicidiosdolosos($homicidiosdolososDto);
        echo $homicidiosdolososDto;
    } else if (($accion == "baja") && ($cveHomicidioDoloso != "")) {
        $homicidiosdolososDto = $homicidiosdolososFacade->deleteHomicidiosdolosos($homicidiosdolososDto);
        echo $homicidiosdolososDto;
    } else if (($accion == "seleccionar") && ($cveHomicidioDoloso != "")) {
        $homicidiosdolososDto = $homicidiosdolososFacade->selectHomicidiosdolosos($homicidiosdolososDto);
        echo $homicidiosdolososDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>