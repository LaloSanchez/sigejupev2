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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadores/JuzgadoresController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

    class JuzgadoresFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarJuzgadores($JuzgadoresDto) {
            $JuzgadoresDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getidJuzgador(), "utf8") : strtoupper($JuzgadoresDto->getidJuzgador()))))));
            if ($this->esFecha($JuzgadoresDto->getidJuzgador())) {
                $JuzgadoresDto->setidJuzgador($this->fechaMysql($JuzgadoresDto->getidJuzgador()));
            }
            $JuzgadoresDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getcveUsuario(), "utf8") : strtoupper($JuzgadoresDto->getcveUsuario()))))));
            if ($this->esFecha($JuzgadoresDto->getcveUsuario())) {
                $JuzgadoresDto->setcveUsuario($this->fechaMysql($JuzgadoresDto->getcveUsuario()));
            }
            $JuzgadoresDto->setnumEmpleado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getnumEmpleado(), "utf8") : strtoupper($JuzgadoresDto->getnumEmpleado()))))));
            if ($this->esFecha($JuzgadoresDto->getnumEmpleado())) {
                $JuzgadoresDto->setnumEmpleado($this->fechaMysql($JuzgadoresDto->getnumEmpleado()));
            }
            $JuzgadoresDto->settitulo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->gettitulo(), "utf8") : strtoupper($JuzgadoresDto->gettitulo()))))));
            if ($this->esFecha($JuzgadoresDto->gettitulo())) {
                $JuzgadoresDto->settitulo($this->fechaMysql($JuzgadoresDto->gettitulo()));
            }
            $JuzgadoresDto->setpaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getpaterno(), "utf8") : strtoupper($JuzgadoresDto->getpaterno()))))));
            if ($this->esFecha($JuzgadoresDto->getpaterno())) {
                $JuzgadoresDto->setpaterno($this->fechaMysql($JuzgadoresDto->getpaterno()));
            }
            $JuzgadoresDto->setmaterno(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getmaterno(), "utf8") : strtoupper($JuzgadoresDto->getmaterno()))))));
            if ($this->esFecha($JuzgadoresDto->getmaterno())) {
                $JuzgadoresDto->setmaterno($this->fechaMysql($JuzgadoresDto->getmaterno()));
            }
            $JuzgadoresDto->setnombre(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getnombre(), "utf8") : strtoupper($JuzgadoresDto->getnombre()))))));
            if ($this->esFecha($JuzgadoresDto->getnombre())) {
                $JuzgadoresDto->setnombre($this->fechaMysql($JuzgadoresDto->getnombre()));
            }
            $JuzgadoresDto->setcveTipoJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getcveTipoJuzgador(), "utf8") : strtoupper($JuzgadoresDto->getcveTipoJuzgador()))))));
            if ($this->esFecha($JuzgadoresDto->getcveTipoJuzgador())) {
                $JuzgadoresDto->setcveTipoJuzgador($this->fechaMysql($JuzgadoresDto->getcveTipoJuzgador()));
            }
            $JuzgadoresDto->setsorteo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getsorteo(), "utf8") : strtoupper($JuzgadoresDto->getsorteo()))))));
            if ($this->esFecha($JuzgadoresDto->getsorteo())) {
                $JuzgadoresDto->setsorteo($this->fechaMysql($JuzgadoresDto->getsorteo()));
            }
            $JuzgadoresDto->setprogramable(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getprogramable(), "utf8") : strtoupper($JuzgadoresDto->getprogramable()))))));
            if ($this->esFecha($JuzgadoresDto->getprogramable())) {
                $JuzgadoresDto->setprogramable($this->fechaMysql($JuzgadoresDto->getprogramable()));
            }
            $JuzgadoresDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getactivo(), "utf8") : strtoupper($JuzgadoresDto->getactivo()))))));
            if ($this->esFecha($JuzgadoresDto->getactivo())) {
                $JuzgadoresDto->setactivo($this->fechaMysql($JuzgadoresDto->getactivo()));
            }
            $JuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getfechaRegistro(), "utf8") : strtoupper($JuzgadoresDto->getfechaRegistro()))))));
            if ($this->esFecha($JuzgadoresDto->getfechaRegistro())) {
                $JuzgadoresDto->setfechaRegistro($this->fechaMysql($JuzgadoresDto->getfechaRegistro()));
            }
            $JuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getfechaActualizacion(), "utf8") : strtoupper($JuzgadoresDto->getfechaActualizacion()))))));
            if ($this->esFecha($JuzgadoresDto->getfechaActualizacion())) {
                $JuzgadoresDto->setfechaActualizacion($this->fechaMysql($JuzgadoresDto->getfechaActualizacion()));
            }
            $JuzgadoresDto->setjuzgados(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getjuzgados(), "utf8") : strtoupper($JuzgadoresDto->getjuzgados()))))));
            if ($this->esFecha($JuzgadoresDto->getjuzgados())) {
                $JuzgadoresDto->setjuzgados($this->fechaMysql($JuzgadoresDto->getjuzgados()));
            }
            $JuzgadoresDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getcveJuzgado(), "utf8") : strtoupper($JuzgadoresDto->getcveJuzgado()))))));
            if ($this->esFecha($JuzgadoresDto->getcveJuzgado())) {
                $JuzgadoresDto->setcveJuzgado($this->fechaMysql($JuzgadoresDto->getcveJuzgado()));
            }
            $JuzgadoresDto->setpagina(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadoresDto->getpagina(), "utf8") : strtoupper($JuzgadoresDto->getpagina()))))));
            if ($this->esFecha($JuzgadoresDto->getpagina())) {
                $JuzgadoresDto->setpagina($this->fechaMysql($JuzgadoresDto->getpagina()));
            }

            return $JuzgadoresDto;
        }

        public function selectJuzgadores($JuzgadoresDto) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->selectJuzgadores($JuzgadoresDto);
            if ($JuzgadoresDto != "") {
                $dtoToJson = new DtoToJson($JuzgadoresDto);

                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectJuzgados($JuzgadoresDto) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->selectJuzgados($JuzgadoresDto);
            if ($JuzgadoresDto != "") {
                return $JuzgadoresDto;
            }
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectJuzgadoresGenerico($JuzgadoresDto) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->selectJuzgadoresGenerico($JuzgadoresDto);
            if ($JuzgadoresDto != "") {
                $dtoToJson = new DtoToJson($JuzgadoresDto);

                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectJuzgadoresGenericoJuzgado($JuzgadoresDto) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->selectJuzgadoresGenericoJuzgado($JuzgadoresDto);
            if ($JuzgadoresDto != "") {
                $dtoToJson = new DtoToJson($JuzgadoresDto);

                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectJuzgadoresLike($JuzgadoresDto) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->selectJuzgadoresLike($JuzgadoresDto);
            if ($JuzgadoresDto != "") {
                $dtoToJson = new DtoToJson($JuzgadoresDto);

                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR", "data" => ""));
        }

        public function insertJuzgadores($JuzgadoresDto) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->insertJuzgadores($JuzgadoresDto);
            if ($JuzgadoresDto != "") {
                return $JuzgadoresDto;
            }
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateJuzgadores($JuzgadoresDto) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->updateJuzgadores($JuzgadoresDto);
            if ($JuzgadoresDto != "") {
                $dtoToJson = new DtoToJson($JuzgadoresDto);

                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function updateBaja($JuzgadoresDto) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->updateBaja($JuzgadoresDto);
            if ($JuzgadoresDto != "") {
                $dtoToJson = new DtoToJson($JuzgadoresDto);

                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteJuzgadores($JuzgadoresDto) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->deleteJuzgadores($JuzgadoresDto);
            if ($JuzgadoresDto == true) {
                $jsonDto = new Encode_JSON();

                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();

            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
        }

        /**
         * seleccciona los juzgadores que esten en la tabla tbljuzgadores
         * y el cveJuzgado = al de la solicitud de la audiencia
         * @param $JuzgadoresDto
         * @param $idSolicitudAudiencia
         * @return string
         */
        public function getJuzgadoresByCveJuzgado($JuzgadoresDto, $idSolicitudAudiencia) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->getJuzgadoresByCveJuzgado($JuzgadoresDto, $idSolicitudAudiencia);

            return json_encode($JuzgadoresDto);
        }

        public function guardaJuzgador($JuzgadoresDto) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->guardaJuzgador($JuzgadoresDto);
            return $JuzgadoresDto;
        }

        public function modificaJuzgadores($JuzgadoresDto) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->modificaJuzgadores($JuzgadoresDto);
            return $JuzgadoresDto;
        }

        public function consultarJuzgadores($JuzgadoresDto) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->consultarJuzgadores($JuzgadoresDto);
            return $JuzgadoresDto;
        }

        public function consultarJuzgadoresMagistradosPorAdscripcion($JuzgadoresDto, $cveJuzgado = null) {
            $JuzgadoresDto = $this->validarJuzgadores($JuzgadoresDto);
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->consultarJuzgadoresMagistradosPorAdscripcion($JuzgadoresDto, $cveJuzgado);
            return $JuzgadoresDto;
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

        public function getJuzgadores($cveJuzgado) {
            $JuzgadoresController = new JuzgadoresController();
            $JuzgadoresDto = $JuzgadoresController->getJuzgadores($cveJuzgado);
            return json_encode($JuzgadoresDto);
        }

    }

    @$idJuzgador = addslashes($_POST["idJuzgador"]);
    @$cveUsuario = addslashes($_POST["cveUsuario"]);
    @$numEmpleado = addslashes($_POST["numEmpleado"]);
    @$titulo = addslashes($_POST["titulo"]);
    @$paterno = addslashes($_POST["paterno"]);
    @$materno = addslashes($_POST["materno"]);
    @$nombre = addslashes($_POST["nombre"]);
    @$cveTipoJuzgador = addslashes($_POST["cveTipoJuzgador"]);
    @$sorteo = addslashes($_POST["sorteo"]);
    @$programable = addslashes($_POST["programable"]);
    @$activo = addslashes($_POST["activo"]);
    @$fechaRegistro = addslashes($_POST["fechaRegistro"]);
    @$fechaActualizacion = addslashes($_POST["fechaActualizacion"]);
    @$pagina = addslashes($_POST["pagina"]);
    @$juzgados = $_POST["juzgados"];
    @$criterio = addslashes($_POST["term"]);
    @$criterioCve = addslashes($_POST["termCve"]);
    @$cveJuzgado = addslashes($_POST["cveJuzgado"]);
    @$param = $_POST["param"];
    @$accion = addslashes($_POST["accion"]);
    @$idSolicitudAudiencia = addslashes($_POST['idSolicitudAudiencia']);
    $juzgadoresFacade = new JuzgadoresFacade();
    $juzgadoresDto = new JuzgadoresDTO();

    $juzgadoresDto->setIdJuzgador($idJuzgador);
    $juzgadoresDto->setCveUsuario($cveUsuario);
    $juzgadoresDto->setNumEmpleado($numEmpleado);
    $juzgadoresDto->setTitulo($titulo);
    $juzgadoresDto->setPaterno($paterno);
    $juzgadoresDto->setMaterno($materno);
    $juzgadoresDto->setNombre($nombre);
    $juzgadoresDto->setCveTipoJuzgador($cveTipoJuzgador);
    $juzgadoresDto->setSorteo($sorteo);
    $juzgadoresDto->setProgramable($programable);
    $juzgadoresDto->setActivo($activo);
    $juzgadoresDto->setFechaRegistro($fechaRegistro);
    $juzgadoresDto->setFechaActualizacion($fechaActualizacion);
    $juzgadoresDto->setJuzgados($juzgados);
    $juzgadoresDto->setCveJuzgado($cveJuzgado);
    $juzgadoresDto->setPagina($pagina);
    $juzgadoresDto->setParam($param);

    if (($accion == "guardar") && ($idJuzgador == "")) {
        $juzgadoresDto = $juzgadoresFacade->insertJuzgadores($juzgadoresDto);
        echo utf8_encode($juzgadoresDto);
    } else if (($accion == "guardar") && ($idJuzgador != "")) {
        $juzgadoresDto = $juzgadoresFacade->updateJuzgadores($juzgadoresDto);
        echo utf8_encode($juzgadoresDto);
    } else if (($accion == "baja") && ($idJuzgador != "")) {
        $juzgadoresDto = $juzgadoresFacade->updateBaja($juzgadoresDto);
        echo utf8_encode($juzgadoresDto);
    } else if ($accion == "consultar") {
        $juzgadoresDto = $juzgadoresFacade->selectJuzgadores($juzgadoresDto);
        echo utf8_encode($juzgadoresDto);
    } else if ($accion == "consultarJuzgados") {
        $juzgadoresDto = $juzgadoresFacade->selectJuzgados($juzgadoresDto);
        echo utf8_encode($juzgadoresDto);
    } else if ($accion == "consultarGenerico") {
        $juzgadoresDto = $juzgadoresFacade->selectJuzgadoresGenerico($juzgadoresDto);
        echo utf8_encode($juzgadoresDto);
    } else if ($accion == "consultarGenericoJuzgado") {
        $juzgadoresDto = $juzgadoresFacade->selectJuzgadoresGenericoJuzgado($juzgadoresDto);
        echo utf8_encode($juzgadoresDto);
    } else if ($accion == "consultarLike") {
        $juzgadoresDto = $juzgadoresFacade->selectJuzgadoresLike($juzgadoresDto);
        echo utf8_encode($juzgadoresDto);
    } else if ($accion == "consultaJuez") {
        $JuzgadoresController = new JuzgadoresController();
        echo utf8_encode($juzgadoresList = $JuzgadoresController->getJuzgadoresWebservice($criterio, $criterioCve));
    } else if (($accion == "baja") && ($idJuzgador != "")) {
        $juzgadoresDto = $juzgadoresFacade->deleteJuzgadores($juzgadoresDto);
        echo utf8_encode($juzgadoresDto);
    } else if (($accion == "seleccionar") && ($idJuzgador != "")) {
        $juzgadoresDto = $juzgadoresFacade->selectJuzgadores($juzgadoresDto);
        echo utf8_decode($juzgadoresDto);
    } else if ($accion == 'getJuzgadoresByCveJuzgado') {
        $juzgadoresDto = $juzgadoresFacade->getJuzgadoresByCveJuzgado($juzgadoresDto, $idSolicitudAudiencia);
        echo $juzgadoresDto;
    } else if (($accion == 'guardaJuzgador') && ($idJuzgador == "")) {
        $juzgadoresDto = $juzgadoresFacade->guardaJuzgador($juzgadoresDto);
        echo $juzgadoresDto;
    } else if (($accion == 'guardaJuzgador') && ($idJuzgador != "")) {
        $juzgadoresDto = $juzgadoresFacade->modificaJuzgadores($juzgadoresDto);
        echo $juzgadoresDto;
    } else if ($accion == 'consultarJuzgadores') {
        $juzgadoresDto = $juzgadoresFacade->consultarJuzgadores($juzgadoresDto);
        echo $juzgadoresDto;
    } else if ($accion == 'consultarJuzgadoresMagistradosPorAdscripcion') {
        $juzgadoresDto = $juzgadoresFacade->consultarJuzgadoresMagistradosPorAdscripcion($juzgadoresDto, $cveJuzgado);
        echo $juzgadoresDto;
    } else if (($accion == 'getJuzgadores')) {
        $juzgadoresDto = $juzgadoresFacade->getJuzgadores($cveJuzgado);
        echo $juzgadoresDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>