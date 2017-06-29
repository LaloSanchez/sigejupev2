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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/asignarecursos/AsignarecursosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/asignarecursos/AsignarecursosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class AsignarecursosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarAsignarecursos($AsignarecursosDto) {
            $AsignarecursosDto->setidAsignaRecurso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AsignarecursosDto->getidAsignaRecurso(), "utf8") : strtoupper($AsignarecursosDto->getidAsignaRecurso()))))));
            if ($this->esFecha($AsignarecursosDto->getidAsignaRecurso())) {
                $AsignarecursosDto->setidAsignaRecurso($this->fechaMysql($AsignarecursosDto->getidAsignaRecurso()));
            }
            $AsignarecursosDto->setidReferencia(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AsignarecursosDto->getidReferencia(), "utf8") : strtoupper($AsignarecursosDto->getidReferencia()))))));
            if ($this->esFecha($AsignarecursosDto->getidReferencia())) {
                $AsignarecursosDto->setidReferencia($this->fechaMysql($AsignarecursosDto->getidReferencia()));
            }
            $AsignarecursosDto->setnumDiscos(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AsignarecursosDto->getnumDiscos(), "utf8") : strtoupper($AsignarecursosDto->getnumDiscos()))))));
            if ($this->esFecha($AsignarecursosDto->getnumDiscos())) {
                $AsignarecursosDto->setnumDiscos($this->fechaMysql($AsignarecursosDto->getnumDiscos()));
            }
            $AsignarecursosDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AsignarecursosDto->getidJuzgador(), "utf8") : strtoupper($AsignarecursosDto->getidJuzgador()))))));
            if ($this->esFecha($AsignarecursosDto->getidJuzgador())) {
                $AsignarecursosDto->setidJuzgador($this->fechaMysql($AsignarecursosDto->getidJuzgador()));
            }
            $AsignarecursosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AsignarecursosDto->getactivo(), "utf8") : strtoupper($AsignarecursosDto->getactivo()))))));
            if ($this->esFecha($AsignarecursosDto->getactivo())) {
                $AsignarecursosDto->setactivo($this->fechaMysql($AsignarecursosDto->getactivo()));
            }
            $AsignarecursosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AsignarecursosDto->getfechaRegistro(), "utf8") : strtoupper($AsignarecursosDto->getfechaRegistro()))))));
            if ($this->esFecha($AsignarecursosDto->getfechaRegistro())) {
                $AsignarecursosDto->setfechaRegistro($this->fechaMysql($AsignarecursosDto->getfechaRegistro()));
            }
            $AsignarecursosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($AsignarecursosDto->getfechaActualizacion(), "utf8") : strtoupper($AsignarecursosDto->getfechaActualizacion()))))));
            if ($this->esFecha($AsignarecursosDto->getfechaActualizacion())) {
                $AsignarecursosDto->setfechaActualizacion($this->fechaMysql($AsignarecursosDto->getfechaActualizacion()));
            }
            return $AsignarecursosDto;
        }

        public function selectAsignarecursos($AsignarecursosDto) {
            $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
            $AsignarecursosController = new AsignarecursosController();
            $AsignarecursosDto = $AsignarecursosController->selectAsignarecursos($AsignarecursosDto);
            if ($AsignarecursosDto != "") {
                $dtoToJson = new DtoToJson($AsignarecursosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertAsignarecursos($AsignarecursosDto) {
            $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
            $AsignarecursosController = new AsignarecursosController();
            $AsignarecursosDto = $AsignarecursosController->insertAsignarecursos($AsignarecursosDto);
            if ($AsignarecursosDto != "") {
                $dtoToJson = new DtoToJson($AsignarecursosDto);
                return $dtoToJson->toJson("REGISTRO INSERTADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA INSERCION"));
        }

        public function updateAsignarecursos($AsignarecursosDto) {
            $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
            $AsignarecursosController = new AsignarecursosController();
            $AsignarecursosDto = $AsignarecursosController->updateAsignarecursos($AsignarecursosDto);
            if ($AsignarecursosDto != "") {
                $dtoToJson = new DtoToJson($AsignarecursosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteAsignarecursos($AsignarecursosDto) {
            $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
            $AsignarecursosController = new AsignarecursosController();
            $AsignarecursosDto = $AsignarecursosController->deleteAsignarecursos($AsignarecursosDto);
            if ($AsignarecursosDto == true) {
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

        public function consultarTocasAsignar($AsignarecursosDto, $params, $paginacion, $proveedor = null) {
            $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
            $AsignarecursosController = new AsignarecursosController();
            $AsignarecursosDto = $AsignarecursosController->consultarTocasAsignar($AsignarecursosDto, $params, $paginacion, $proveedor);

            return $AsignarecursosDto;
        }

        public function obtenerPaginasAsignar($AsignarecursosDto, $params, $paginacion, $proveedor = null) {
            $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
            $AsignarecursosController = new AsignarecursosController();
            $AsignarecursosDto = $AsignarecursosController->obtenerPaginasAsignar($AsignarecursosDto, $params, $paginacion, $proveedor);

            return $AsignarecursosDto;
        }

        public function borrarAsigancionRecurso($AsignarecursosDto, $idjuzgadorcarpeta) {
            $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
            $AsignarecursosController = new AsignarecursosController();
            $AsignarecursosDto = $AsignarecursosController->updateAsignarecursos($AsignarecursosDto, $idjuzgadorcarpeta);
            if ($idjuzgadorcarpeta == "") {
                if ($AsignarecursosDto != "") {
                    $dtoToJson = new DtoToJson($AsignarecursosDto);
                    return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
                }
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
            } else {
                return $AsignarecursosDto;
            }
        }

        public function agregarAsigancionRecurso($AsignarecursosDto) {
            $AsignarecursosDto = $this->validarAsignarecursos($AsignarecursosDto);
            $AsignarecursosController = new AsignarecursosController();
            $AsignarecursosDto = $AsignarecursosController->agregarAsigancionRecurso($AsignarecursosDto);
            return $AsignarecursosDto;
        }

    }

    @$idAsignaRecurso = $_POST["idAsignaRecurso"];
    @$idReferencia = $_POST["idReferencia"];
    @$numDiscos = $_POST["numDiscos"];
    @$idJuzgador = $_POST["idJuzgador"];
    @$idjuzgadorcarpeta = $_POST["idJuzgadorCarpeta"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $asignarecursosFacade = new AsignarecursosFacade();
    $asignarecursosDto = new AsignarecursosDTO();

    $asignarecursosDto->setIdAsignaRecurso($idAsignaRecurso);
    $asignarecursosDto->setIdReferencia($idReferencia);
    $asignarecursosDto->setNumDiscos($numDiscos);
    $asignarecursosDto->setIdJuzgador($idJuzgador);
    $asignarecursosDto->setActivo($activo);
    $asignarecursosDto->setFechaRegistro($fechaRegistro);
    $asignarecursosDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($idAsignaRecurso == "")) {
        $asignarecursosDto = $asignarecursosFacade->insertAsignarecursos($asignarecursosDto);
        echo $asignarecursosDto;
    } else if (($accion == "guardar") && ($idAsignaRecurso != "")) {
        $asignarecursosDto = $asignarecursosFacade->updateAsignarecursos($asignarecursosDto);
        echo $asignarecursosDto;
    } else if ($accion == "consultar") {
        $asignarecursosDto = $asignarecursosFacade->selectAsignarecursos($asignarecursosDto);
        echo $asignarecursosDto;
    } else if (($accion == "baja") && ($idAsignaRecurso != "")) {
        $asignarecursosDto = $asignarecursosFacade->deleteAsignarecursos($asignarecursosDto);
        echo $asignarecursosDto;
    } else if (($accion == "seleccionar") && ($idAsignaRecurso != "")) {
        $asignarecursosDto = $asignarecursosFacade->selectAsignarecursos($asignarecursosDto);
        echo $asignarecursosDto;
    } else if ($accion == "consultarTocasAsignar") {
        $params['cveJuzgado'] = $_POST['cveJuzgado'];
        $params['cveTipoCarpeta'] = $_POST['cveTipoCarpeta'];
        $params['numero'] = $_POST['numero'];
        $params['anio'] = $_POST['anio'];
        $params['fechaInicial'] = $_POST['fechaInicial'];
        $params['fechaFinal'] = $_POST['fechaFinal'];
        //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
        $paginacion = array();
        $paginacion["pag"] = $_POST["pag"];
        $paginacion["cantxPag"] = $_POST["cantxPag"];
        $paginacion["paginacion"] = $_POST["paginacion"];
        $asignarecursosDto = $asignarecursosFacade->consultarTocasAsignar($asignarecursosDto, $params, $paginacion);
        echo $asignarecursosDto;
    } else if ($accion == "obtenerPaginasAsignar") {
        $params['cveJuzgado'] = $_POST['cveJuzgado'];
        $params['cveTipoCarpeta'] = $_POST['cveTipoCarpeta'];
        $params['numero'] = $_POST['numero'];
        $params['anio'] = $_POST['anio'];
        $params['fechaInicial'] = $_POST['fechaInicial'];
        $params['fechaFinal'] = $_POST['fechaFinal'];
        //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
        $paginacion = array();
        $paginacion["pag"] = $_POST["pag"];
        $paginacion["cantxPag"] = $_POST["cantxPag"];
        $paginacion["paginacion"] = $_POST["paginacion"];
        $asignarecursosDto = $asignarecursosFacade->obtenerPaginasAsignar($asignarecursosDto, $params, $paginacion);
        echo $asignarecursosDto;
    } else if ($accion == "borrarAsigancionRecurso") {
        $asignarecursosDto->setActivo("N");
        $asignarecursosDto = $asignarecursosFacade->borrarAsigancionRecurso($asignarecursosDto, $idjuzgadorcarpeta);
        echo $asignarecursosDto;
    } else if ($accion == "agregarAsigancionRecurso") {
        $asignarecursosDto = $asignarecursosFacade->agregarAsigancionRecurso($asignarecursosDto);
        echo $asignarecursosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>