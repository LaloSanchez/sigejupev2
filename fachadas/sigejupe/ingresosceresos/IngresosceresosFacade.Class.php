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
// version 17/02/2016
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ingresosceresos/IngresosceresosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ingresosceresos/IngresosceresosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class IngresosceresosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarIngresosceresos($IngresosceresosDto) {
            $IngresosceresosDto->setidIngresoCereso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($IngresosceresosDto->getidIngresoCereso(), "utf8") : strtoupper($IngresosceresosDto->getidIngresoCereso()))))));
            if ($this->esFecha($IngresosceresosDto->getidIngresoCereso())) {
                $IngresosceresosDto->setidIngresoCereso($this->fechaMysql($IngresosceresosDto->getidIngresoCereso()));
            }
            $IngresosceresosDto->setoficio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($IngresosceresosDto->getoficio(), "utf8") : strtoupper($IngresosceresosDto->getoficio()))))));
            if ($this->esFecha($IngresosceresosDto->getoficio())) {
                $IngresosceresosDto->setoficio($this->fechaMysql($IngresosceresosDto->getoficio()));
            }
            $IngresosceresosDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($IngresosceresosDto->getcarpetaInv(), "utf8") : strtoupper($IngresosceresosDto->getcarpetaInv()))))));
            if ($this->esFecha($IngresosceresosDto->getcarpetaInv())) {
                $IngresosceresosDto->setcarpetaInv($this->fechaMysql($IngresosceresosDto->getcarpetaInv()));
            }
            $IngresosceresosDto->setnuc(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($IngresosceresosDto->getnuc(), "utf8") : strtoupper($IngresosceresosDto->getnuc()))))));
            if ($this->esFecha($IngresosceresosDto->getnuc())) {
                $IngresosceresosDto->setnuc($this->fechaMysql($IngresosceresosDto->getnuc()));
            }
            $IngresosceresosDto->setcveCereso(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($IngresosceresosDto->getcveCereso(), "utf8") : strtoupper($IngresosceresosDto->getcveCereso()))))));
            if ($this->esFecha($IngresosceresosDto->getcveCereso())) {
                $IngresosceresosDto->setcveCereso($this->fechaMysql($IngresosceresosDto->getcveCereso()));
            }
            $IngresosceresosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($IngresosceresosDto->getfechaRegistro(), "utf8") : strtoupper($IngresosceresosDto->getfechaRegistro()))))));
            if ($this->esFecha($IngresosceresosDto->getfechaRegistro())) {
                $IngresosceresosDto->setfechaRegistro($this->fechaMysql($IngresosceresosDto->getfechaRegistro()));
            }
            $IngresosceresosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($IngresosceresosDto->getfechaActualizacion(), "utf8") : strtoupper($IngresosceresosDto->getfechaActualizacion()))))));
            if ($this->esFecha($IngresosceresosDto->getfechaActualizacion())) {
                $IngresosceresosDto->setfechaActualizacion($this->fechaMysql($IngresosceresosDto->getfechaActualizacion()));
            }
            $IngresosceresosDto->setObservaciones(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($IngresosceresosDto->getObservaciones(), "utf8") : strtoupper($IngresosceresosDto->getObservaciones()))))));
            if ($this->esFecha($IngresosceresosDto->getObservaciones())) {
                $IngresosceresosDto->setObservaciones($this->fechaMysql($IngresosceresosDto->getObservaciones()));
            }
            return $IngresosceresosDto;
        }

        public function selectIngresosceresos($IngresosceresosDto) {
            $IngresosceresosDto = $this->validarIngresosceresos($IngresosceresosDto);
            $IngresosceresosController = new IngresosceresosController();
            $IngresosceresosDto = $IngresosceresosController->selectIngresosceresos($IngresosceresosDto);
            if ($IngresosceresosDto != "") {
                $dtoToJson = new DtoToJson($IngresosceresosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertIngresosceresos($IngresosceresosDto) {
            $IngresosceresosDto = $this->validarIngresosceresos($IngresosceresosDto);
            $IngresosceresosController = new IngresosceresosController();
            $IngresosceresosDto = $IngresosceresosController->insertIngresosceresos($IngresosceresosDto);
            if ($IngresosceresosDto != "") {
                $dtoToJson = new DtoToJson($IngresosceresosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateIngresosceresos($IngresosceresosDto) {
            $IngresosceresosDto = $this->validarIngresosceresos($IngresosceresosDto);
            $IngresosceresosController = new IngresosceresosController();
            $IngresosceresosDto = $IngresosceresosController->updateIngresosceresos($IngresosceresosDto);
            if ($IngresosceresosDto != "") {
                $dtoToJson = new DtoToJson($IngresosceresosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteIngresosceresos($IngresosceresosDto) {
            $IngresosceresosDto = $this->validarIngresosceresos($IngresosceresosDto);
            $IngresosceresosController = new IngresosceresosController();
            $IngresosceresosDto = $IngresosceresosController->deleteIngresosceresos($IngresosceresosDto);
            if ($IngresosceresosDto == true) {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
        }

        public function selectAdscripciones() {
//    $IngresosceresosDto=$this->validarIngresosceresos($IngresosceresosDto);
            $IngresosceresosController = new IngresosceresosController();
            $IngresosceresosDto = $IngresosceresosController->selectAdscripciones();
            if ($IngresosceresosDto != "") {
                //$dtoToJson = new DtoToJson($IngresosceresosDto);
                return $IngresosceresosDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function guardarIngresoCereso($IngresosceresosDto, $paramRecluso, $paramPoliM, $paramSession, $cveAccion) {
            $IngresosceresosDto = $this->validarIngresosceresos($IngresosceresosDto);
            $IngresosceresosController = new IngresosceresosController();
            $IngresosceresosDto = $IngresosceresosController->guardarIngresoCereso($IngresosceresosDto, $paramRecluso, $paramPoliM, $paramSession, $cveAccion);
            if ($IngresosceresosDto != "") {
                $dtoToJson = new DtoToJson($IngresosceresosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function actualizarIngresoCereso($IngresosceresosDto, $paramRecluso, $paramPoliM, $paramSession, $cveAccion) {
            $IngresosceresosDto = $this->validarIngresosceresos($IngresosceresosDto);
            $IngresosceresosController = new IngresosceresosController();
            $IngresosceresosDto = $IngresosceresosController->actualizarIngresoCereso($IngresosceresosDto, $paramRecluso, $paramPoliM, $paramSession, $cveAccion);
            if ($IngresosceresosDto != "") {
                $dtoToJson = new DtoToJson($IngresosceresosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function consultarImputadosCereso($ingresosceresosDto, $param) {
            $IngresosceresosController = new IngresosceresosController();
            $IngresosceresosDto = $IngresosceresosController->consultarImputadosCereso($ingresosceresosDto, $param);
            if ($IngresosceresosDto != "") {
                //$dtoToJson = new DtoToJson($IngresosceresosDto);
                return $IngresosceresosDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function getPaginas($ingresosceresosDto, $param) {
            //$ActuacionesDto = $this->validarActuaciones($ActuacionesDto);
            $IngresosceresosController = new IngresosceresosController();
            $IngresosceresosDto = $IngresosceresosController->getPaginas($ingresosceresosDto, $param);
            if ($IngresosceresosDto != "") {
//            $dtoToJson = new DtoToJson($ActuacionesDto);
                return $IngresosceresosDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function bajaIngresoCereso($IngresosceresosDto, $cveAccion, $paramSession) {
            $IngresosceresosDto = $this->validarIngresosceresos($IngresosceresosDto);
            $IngresosceresosController = new IngresosceresosController();
            $IngresosceresosDto = $IngresosceresosController->bajaIngresoCereso($IngresosceresosDto, $cveAccion, $paramSession);
            if ($IngresosceresosDto != "") {
                $dtoToJson = new DtoToJson($IngresosceresosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function cambiarReclusoDeCereso($IngresosceresosDto, $datos) {
            $IngresosceresosDto = $this->validarIngresosceresos($IngresosceresosDto);
            $IngresosceresosController = new IngresosceresosController();
            $IngresosceresosDto = $IngresosceresosController->cambiarSentenciadoDeCereso($IngresosceresosDto, $datos);
            return $IngresosceresosDto;
        }

        public function listarAdscripcionesTodas() {
//    $IngresosceresosDto=$this->validarIngresosceresos($IngresosceresosDto); 
            $IngresosceresosController = new IngresosceresosController();
            $IngresosceresosDto = $IngresosceresosController->listarAdscripcionesTodas();
            if ($IngresosceresosDto != "") {
                //$dtoToJson = new DtoToJson($IngresosceresosDto);
                return $IngresosceresosDto;
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
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

    @$idIngresoCereso = $_POST["idIngresoCereso"];
    @$oficio = $_POST["oficio"];
    @$carpetaInv = $_POST["carpetaInv"];
    @$nuc = $_POST["nuc"];
    @$cveCereso = $_POST["cveCereso"];
    @$FechaHoraIngreso = $_POST["FechaHoraIngreso"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$observaciones = $_POST["observaciones"];
    @$accion = $_POST["accion"];

    $param = array();
    @$param["pag"] = $_POST['pag'];
    @$param["cantxPag"] = $_POST['cantxPag'];
    @$param["paginacion"] = $_POST['paginacion'];
    @$param["fechaDesde"] = $_POST['txtFecInicialBusqueda'];
    @$param["fechaHasta"] = $_POST['txtFecFinalBusqueda'];
    @$param["generico"] = $_POST['generico'];
    @$param["asigNumero"] = $_POST['asigNumero'];

    $paramSession = array();
    @$paramSession["cveUsuarioSesion"] = $_POST['cveUsuarioSesion'];
    @$paramSession["cvePerfilSesion"] = $_POST['cvePerfilSesion'];
    @$paramSession["juzgadoSesion"] = $_POST['juzgadoSesion'];

    $ingresosceresosFacade = new IngresosceresosFacade();
    $ingresosceresosDto = new IngresosceresosDTO();

    $ingresosceresosDto->setIdIngresoCereso($idIngresoCereso);
    $ingresosceresosDto->setOficio($oficio);
    $ingresosceresosDto->setCarpetaInv($carpetaInv);
    $ingresosceresosDto->setNuc($nuc);
    $ingresosceresosDto->setCveCereso($cveCereso);
    $ingresosceresosDto->setFechaHoraIngreso($FechaHoraIngreso);
    $ingresosceresosDto->setFechaRegistro($fechaRegistro);
    $ingresosceresosDto->setFechaActualizacion($fechaActualizacion);
    $ingresosceresosDto->setObservaciones($observaciones);

    if (($accion == "guardar") && ($idIngresoCereso == "")) {
        $ingresosceresosDto = $ingresosceresosFacade->insertIngresosceresos($ingresosceresosDto);
        echo $ingresosceresosDto;
    } else if (($accion == "guardar") && ($idIngresoCereso != "")) {
        $ingresosceresosDto = $ingresosceresosFacade->updateIngresosceresos($ingresosceresosDto);
        echo $ingresosceresosDto;
    } else if ($accion == "consultar") {
        $ingresosceresosDto = $ingresosceresosFacade->selectIngresosceresos($ingresosceresosDto);
        echo $ingresosceresosDto;
    } else if (($accion == "baja") && ($idIngresoCereso != "")) {
        $ingresosceresosDto = $ingresosceresosFacade->deleteIngresosceresos($ingresosceresosDto);
        echo $ingresosceresosDto;
    } else if (($accion == "seleccionar") && ($idIngresoCereso != "")) {
        $ingresosceresosDto = $ingresosceresosFacade->selectIngresosceresos($ingresosceresosDto);
        echo $ingresosceresosDto;
    } else if ($accion == "listarAdscripciones") {
        $ingresosceresosDto = $ingresosceresosFacade->selectAdscripciones($ingresosceresosDto);
        echo $ingresosceresosDto;
    } else if (($accion == "guardarIngresoCereso") && ($idIngresoCereso == "")) {
        // recibe valores para la tabla reclusos
        $paramRecluso = array();
        @$paramRecluso["idRecluso"] = $_POST["idRecluso"];
        @$paramRecluso["idIngresoCereso"] = $_POST["idIngresoCereso"];
        @$paramRecluso["nombre"] = $_POST["nombreRecluso"];
        @$paramRecluso["paterno"] = $_POST["paternoRecluso"];
        @$paramRecluso["materno"] = $_POST["maternoRecluso"];
        @$paramRecluso["alias"] = $_POST["alias"];
        @$paramRecluso["detenido"] = $_POST["detenido"];
        @$paramRecluso["cveGenero"] = $_POST["generoRecluso"];
        @$paramRecluso["cveEstadoPsicofisico"] = $_POST["edoRecluso"];
        @$paramRecluso["conjuntodelitos"] = $_POST["conjuntodelitos"];

        // recibe valores de la tabla policias ministeriales
        $paramPoliM = array();
        @$paramPoliM["idPoliciaMinisterial"] = $_POST["idPoliciaMinisterial"];
        @$paramPoliM["idIngresoCereso"] = $_POST["idIngresoCereso"];
        @$paramPoliM["nombre"] = $_POST["nombre"];
        @$paramPoliM["paterno"] = $_POST["paterno"];
        @$paramPoliM["materno"] = $_POST["materno"];
        @$paramPoliM["cveAdscripcionMP"] = $_POST["cveAdscripcionMP"];
//    print_r(@$paramPoliM);
        // BITACORA
        @$cveAccion = $_POST["cveAccion"]; // bitacora

        $ingresosceresosDto = $ingresosceresosFacade->guardarIngresoCereso($ingresosceresosDto, $paramRecluso, $paramPoliM, $paramSession, $cveAccion);
        echo $ingresosceresosDto;
    } else if ($accion == "consultarImputadosCereso") {
        $param["paginacion"] = true;
        $ingresosceresosDto = $ingresosceresosFacade->consultarImputadosCereso($ingresosceresosDto, $param);
        echo $ingresosceresosDto;
    } else if ($accion == "getPaginas") {
        $param["paginacion"] = true;
        $ingresosceresosDto = $ingresosceresosFacade->getPaginas($ingresosceresosDto, $param);
        echo $ingresosceresosDto;
    } else if ($accion == "bajaIngresoCereso") {
        @$cveAccion = $_POST["cveAccion"]; // bitacora
        $ingresosceresosDto = $ingresosceresosFacade->bajaIngresoCereso($ingresosceresosDto, $cveAccion, $paramSession);
        echo $ingresosceresosDto;
    } else if ($accion == "actualizarRecluso") {
        $datos = array();
        @$datos["origen"] = $_POST["origen"];
        @$datos["idRecluso"] = $_POST["idRecluso"]; //o idCarpetaJudicial
        @$datos["idImputadoCarpeta"] = $_POST["idImputadoCarpeta"];
        $reclusosDto = $ingresosceresosFacade->cambiarReclusoDeCereso($ingresosceresosDto, $datos);
        echo $reclusosDto;
    } else if (($accion == "guardarIngresoCereso") && ($idIngresoCereso != "")) {
        // recibe valores para la tabla reclusos
        $paramRecluso = array();
        @$paramRecluso["idRecluso"] = $_POST["idRecluso"];
        @$paramRecluso["idIngresoCereso"] = $_POST["idIngresoCereso"];
        @$paramRecluso["nombre"] = $_POST["nombreRecluso"];
        @$paramRecluso["paterno"] = $_POST["paternoRecluso"];
        @$paramRecluso["materno"] = $_POST["maternoRecluso"];
        @$paramRecluso["alias"] = $_POST["alias"];
        @$paramRecluso["detenido"] = $_POST["detenido"];
        @$paramRecluso["cveGenero"] = $_POST["generoRecluso"];
        @$paramRecluso["cveEstadoPsicofisico"] = $_POST["edoRecluso"];
        @$paramRecluso["conjuntodelitos"] = $_POST["conjuntodelitos"];

//    print_r(@$paramPoliM);
        // recibe valores de la tabla policias ministeriales
        $paramPoliM = array();
        @$paramPoliM["idPoliciaMinisterial"] = $_POST["idPoliciaMinisterial"];
        @$paramPoliM["idIngresoCereso"] = $_POST["idIngresoCereso"];
        @$paramPoliM["nombre"] = $_POST["nombre"];
        @$paramPoliM["paterno"] = $_POST["paterno"];
        @$paramPoliM["materno"] = $_POST["materno"];
        @$paramPoliM["cveAdscripcionMP"] = $_POST["cveAdscripcionMP"];

//    print_r(@$paramPoliM);
        // BITACORA
        @$cveAccion = $_POST["cveAccion"]; // bitacora

        $ingresosceresosDto = $ingresosceresosFacade->actualizarIngresoCereso($ingresosceresosDto, $paramRecluso, $paramPoliM, $paramSession, $cveAccion);
        echo $ingresosceresosDto;
    } else if ($accion == "listarAdscripcionesTodas") {
        $ingresosceresosDto = $ingresosceresosFacade->listarAdscripcionesTodas($ingresosceresosDto);
        echo $ingresosceresosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>