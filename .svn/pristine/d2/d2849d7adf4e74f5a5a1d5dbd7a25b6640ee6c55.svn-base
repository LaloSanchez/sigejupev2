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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossentencias/ImputadossentenciasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imputadossentencias/ImputadossentenciasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class ImputadossentenciasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarImputadossentencias($ImputadossentenciasDto) {
            $ImputadossentenciasDto->setidImputadoSentencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossentenciasDto->getidImputadoSentencia(), "utf8") : strtoupper($ImputadossentenciasDto->getidImputadoSentencia()))))));
            if ($this->esFecha($ImputadossentenciasDto->getidImputadoSentencia())) {
                $ImputadossentenciasDto->setidImputadoSentencia($this->fechaMysql($ImputadossentenciasDto->getidImputadoSentencia()));
            }
            $ImputadossentenciasDto->setidActuacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossentenciasDto->getidActuacion(), "utf8") : strtoupper($ImputadossentenciasDto->getidActuacion()))))));
            if ($this->esFecha($ImputadossentenciasDto->getidActuacion())) {
                $ImputadossentenciasDto->setidActuacion($this->fechaMysql($ImputadossentenciasDto->getidActuacion()));
            }
            $ImputadossentenciasDto->setidImpOfeDelCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossentenciasDto->getidImpOfeDelCarpeta(), "utf8") : strtoupper($ImputadossentenciasDto->getidImpOfeDelCarpeta()))))));
            if ($this->esFecha($ImputadossentenciasDto->getidImpOfeDelCarpeta())) {
                $ImputadossentenciasDto->setidImpOfeDelCarpeta($this->fechaMysql($ImputadossentenciasDto->getidImpOfeDelCarpeta()));
            }
            $ImputadossentenciasDto->setApelacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossentenciasDto->getApelacion(), "utf8") : strtoupper($ImputadossentenciasDto->getApelacion()))))));
            if ($this->esFecha($ImputadossentenciasDto->getApelacion())) {
                $ImputadossentenciasDto->setApelacion($this->fechaMysql($ImputadossentenciasDto->getApelacion()));
            }
            $ImputadossentenciasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossentenciasDto->getactivo(), "utf8") : strtoupper($ImputadossentenciasDto->getactivo()))))));
            if ($this->esFecha($ImputadossentenciasDto->getactivo())) {
                $ImputadossentenciasDto->setactivo($this->fechaMysql($ImputadossentenciasDto->getactivo()));
            }
            $ImputadossentenciasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossentenciasDto->getfechaRegistro(), "utf8") : strtoupper($ImputadossentenciasDto->getfechaRegistro()))))));
            if ($this->esFecha($ImputadossentenciasDto->getfechaRegistro())) {
                $ImputadossentenciasDto->setfechaRegistro($this->fechaMysql($ImputadossentenciasDto->getfechaRegistro()));
            }
            $ImputadossentenciasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ImputadossentenciasDto->getfechaActualizacion(), "utf8") : strtoupper($ImputadossentenciasDto->getfechaActualizacion()))))));
            if ($this->esFecha($ImputadossentenciasDto->getfechaActualizacion())) {
                $ImputadossentenciasDto->setfechaActualizacion($this->fechaMysql($ImputadossentenciasDto->getfechaActualizacion()));
            }
            return $ImputadossentenciasDto;
        }

        public function getSalas($ImputadossentenciasDto) {
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->getSalas();
            return $ImputadossentenciasDto;
        }

        public function consultarsentenciasconsanciones($ImputadossentenciasDto) {
            $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->consultarsentenciasconsanciones($ImputadossentenciasDto);
            return json_encode($ImputadossentenciasDto);
        }

        public function eliminarsentencia($ImputadossentenciasDto) {
            $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->eliminarsentencia($ImputadossentenciasDto);
            if ($ImputadossentenciasDto != "") {
                return json_encode(array("totalCount" => "1", "text" => "REGISTRO ELIMINADO"));
            }

            return json_encode(array("totalCount" => "0", "text" => "NO SE ELIMINO REGISTRO"));
        }

        public function consultarsentencias($ImputadossentenciasDto, $criterios) {
            $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->consultarsentencias($ImputadossentenciasDto, $criterios);
            return json_encode($ImputadossentenciasDto);
        }

        public function selectImputadossentencias($ImputadossentenciasDto) {
            $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->selectImputadossentencias($ImputadossentenciasDto);
            if ($ImputadossentenciasDto != "") {
                $dtoToJson = new DtoToJson($ImputadossentenciasDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertImputadossentencias($ImputadossentenciasDto) {
            $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->insertImputadossentencias($ImputadossentenciasDto);
            if ($ImputadossentenciasDto != "") {
                $dtoToJson = new DtoToJson($ImputadossentenciasDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateImputadossentencias($ImputadossentenciasDto) {
            $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->updateImputadossentencias($ImputadossentenciasDto);
            if ($ImputadossentenciasDto != "") {
                $dtoToJson = new DtoToJson($ImputadossentenciasDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteImputadossentencias($ImputadossentenciasDto) {
            $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->deleteImputadossentencias($ImputadossentenciasDto);
            if ($ImputadossentenciasDto == true) {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
        }

        //************************************ reporte sentenciados en el estado de mexico ****************************************
        public function sentenciadosEdoMexico($ImputadossentenciasDto, $paramBusqueda) {
            $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->sentenciadosEdoMexico($ImputadossentenciasDto, $paramBusqueda);
            if ($ImputadossentenciasDto != "") {
//            $jsonDto = new Encode_JSON();
                return $ImputadossentenciasDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function sentenciadosEdoMexicoDetalle2($ImputadossentenciasDto, $paramBusqueda) {
            $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->sentenciadosEdoMexicoDetalle2($ImputadossentenciasDto, $paramBusqueda);
            if ($ImputadossentenciasDto != "") {
//            $jsonDto = new Encode_JSON();
                return $ImputadossentenciasDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function sentenciadosEdoMexicoDetalle3($ImputadossentenciasDto, $paramBusqueda) {
            $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->sentenciadosEdoMexicoDetalle3($ImputadossentenciasDto, $paramBusqueda);
            if ($ImputadossentenciasDto != "") {
//            $jsonDto = new Encode_JSON();
                return $ImputadossentenciasDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function sentenciadosEdoMexicoDetalle4($ImputadossentenciasDto, $paramBusqueda) {
            $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->sentenciadosEdoMexicoDetalle4($ImputadossentenciasDto, $paramBusqueda);
            if ($ImputadossentenciasDto != "") {
//            $jsonDto = new Encode_JSON();
                return $ImputadossentenciasDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function sentenciadosEdoMexicoDetalle5($ImputadossentenciasDto, $paramBusqueda) {
            $ImputadossentenciasDto = $this->validarImputadossentencias($ImputadossentenciasDto);
            $ImputadossentenciasController = new ImputadossentenciasController();
            $ImputadossentenciasDto = $ImputadossentenciasController->sentenciadosEdoMexicoDetalle5($ImputadossentenciasDto, $paramBusqueda);
            if ($ImputadossentenciasDto != "") {
//            $jsonDto = new Encode_JSON();
                return $ImputadossentenciasDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        //************************************ reporte sentenciados en el estado de mexico ****************************************
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

    @$idImputadoSentencia = $_POST["idImputadoSentencia"];
    @$idActuacion = $_POST["idActuacion"];
    @$idImpOfeDelCarpeta = $_POST["idImpOfeDelCarpeta"];
    @$Apelacion = $_POST["Apelacion"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    @$paramBusqueda["anio"] = $_POST['anio'];
    @$paramBusqueda["cveRegion"] = $_POST['cveRegion'];
    @$paramBusqueda["cveDistrito"] = $_POST['cveDistrito'];
    @$paramBusqueda["cveJuzgado"] = $_POST['cveJuzgado'];

    $imputadossentenciasFacade = new ImputadossentenciasFacade();
    $imputadossentenciasDto = new ImputadossentenciasDTO();

    $imputadossentenciasDto->setIdImputadoSentencia($idImputadoSentencia);
    $imputadossentenciasDto->setIdActuacion($idActuacion);
    $imputadossentenciasDto->setIdImpOfeDelCarpeta($idImpOfeDelCarpeta);
    $imputadossentenciasDto->setApelacion($Apelacion);
    $imputadossentenciasDto->setActivo($activo);
    $imputadossentenciasDto->setFechaRegistro($fechaRegistro);
    $imputadossentenciasDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($idImputadoSentencia == "")) {
        $imputadossentenciasDto = $imputadossentenciasFacade->insertImputadossentencias($imputadossentenciasDto);
        echo $imputadossentenciasDto;
    } else if (($accion == "guardar") && ($idImputadoSentencia != "")) {
        $imputadossentenciasDto = $imputadossentenciasFacade->updateImputadossentencias($imputadossentenciasDto);
        echo $imputadossentenciasDto;
    } else if ($accion == "consultar") {
        $imputadossentenciasDto = $imputadossentenciasFacade->selectImputadossentencias($imputadossentenciasDto);
        echo $imputadossentenciasDto;
    } else if (($accion == "baja") && ($idImputadoSentencia != "")) {
        $imputadossentenciasDto = $imputadossentenciasFacade->deleteImputadossentencias($imputadossentenciasDto);
        echo $imputadossentenciasDto;
    } else if (($accion == "seleccionar") && ($idImputadoSentencia != "")) {
        $imputadossentenciasDto = $imputadossentenciasFacade->selectImputadossentencias($imputadossentenciasDto);
        echo $imputadossentenciasDto;
    } else if (($accion == "consultarsentencias")) {
        $criterios = $_POST;
        $imputadossentenciasDto = $imputadossentenciasFacade->consultarsentencias($imputadossentenciasDto, $criterios);
        echo $imputadossentenciasDto;
    } else if (($accion == "eliminacionlogia")) {
        $imputadossentenciasDto = $imputadossentenciasFacade->eliminarsentencia($imputadossentenciasDto);
        echo $imputadossentenciasDto;
    } else if (($accion == "consultarsentenciasconsanciones")) {
        $imputadossentenciasDto = $imputadossentenciasFacade->consultarsentenciasconsanciones($imputadossentenciasDto);
        echo $imputadossentenciasDto;
    } else if ($accion == "getSalas") {
        $actuacionesDto = $imputadossentenciasFacade->getSalas($imputadossentenciasDto);
        echo $actuacionesDto;
    } else if ($accion == "sentenciadosEdoMexico") {
        $imputadossentenciasDto = $imputadossentenciasFacade->sentenciadosEdoMexico($imputadossentenciasDto, $paramBusqueda);
        echo $imputadossentenciasDto;
    } else if ($accion == "sentenciadosEdoMexicoDetalle2") {
        $imputadossentenciasDto = $imputadossentenciasFacade->sentenciadosEdoMexicoDetalle2($imputadossentenciasDto, $paramBusqueda);
        echo $imputadossentenciasDto;
    } else if ($accion == "sentenciadosEdoMexicoDetalle3") {
        $imputadossentenciasDto = $imputadossentenciasFacade->sentenciadosEdoMexicoDetalle3($imputadossentenciasDto, $paramBusqueda);
        echo $imputadossentenciasDto;
    } else if ($accion == "sentenciadosEdoMexicoDetalle4") {
        $imputadossentenciasDto = $imputadossentenciasFacade->sentenciadosEdoMexicoDetalle4($imputadossentenciasDto, $paramBusqueda);
        echo $imputadossentenciasDto;
    } else if ($accion == "sentenciadosEdoMexicoDetalle5") {
        $imputadossentenciasDto = $imputadossentenciasFacade->sentenciadosEdoMexicoDetalle5($imputadossentenciasDto, $paramBusqueda);
        echo $imputadossentenciasDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>