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
    date_default_timezone_set('America/Mexico_City');
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescarpetas/JuzgadorescarpetasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadorescarpetas/JuzgadorescarpetasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadorescarpetas/JuzgadorescarpetasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");

    class JuzgadorescarpetasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarJuzgadorescarpetas($JuzgadorescarpetasDto) {
            $JuzgadorescarpetasDto->setidJuzgadorCarpeta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadorescarpetasDto->getidJuzgadorCarpeta(), "utf8") : strtoupper($JuzgadorescarpetasDto->getidJuzgadorCarpeta()))))));
            if ($this->esFecha($JuzgadorescarpetasDto->getidJuzgadorCarpeta())) {
                $JuzgadorescarpetasDto->setidJuzgadorCarpeta($this->fechaMysql($JuzgadorescarpetasDto->getidJuzgadorCarpeta()));
            }
            $JuzgadorescarpetasDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadorescarpetasDto->getidJuzgador(), "utf8") : strtoupper($JuzgadorescarpetasDto->getidJuzgador()))))));
            if ($this->esFecha($JuzgadorescarpetasDto->getidJuzgador())) {
                $JuzgadorescarpetasDto->setidJuzgador($this->fechaMysql($JuzgadorescarpetasDto->getidJuzgador()));
            }
            $JuzgadorescarpetasDto->setidCarpetaJudicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadorescarpetasDto->getidCarpetaJudicial(), "utf8") : strtoupper($JuzgadorescarpetasDto->getidCarpetaJudicial()))))));
            if ($this->esFecha($JuzgadorescarpetasDto->getidCarpetaJudicial())) {
                $JuzgadorescarpetasDto->setidCarpetaJudicial($this->fechaMysql($JuzgadorescarpetasDto->getidCarpetaJudicial()));
            }
            $JuzgadorescarpetasDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadorescarpetasDto->getactivo(), "utf8") : strtoupper($JuzgadorescarpetasDto->getactivo()))))));
            if ($this->esFecha($JuzgadorescarpetasDto->getactivo())) {
                $JuzgadorescarpetasDto->setactivo($this->fechaMysql($JuzgadorescarpetasDto->getactivo()));
            }
            $JuzgadorescarpetasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadorescarpetasDto->getfechaRegistro(), "utf8") : strtoupper($JuzgadorescarpetasDto->getfechaRegistro()))))));
            if ($this->esFecha($JuzgadorescarpetasDto->getfechaRegistro())) {
                $JuzgadorescarpetasDto->setfechaRegistro($this->fechaMysql($JuzgadorescarpetasDto->getfechaRegistro()));
            }
            $JuzgadorescarpetasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($JuzgadorescarpetasDto->getfechaActualizacion(), "utf8") : strtoupper($JuzgadorescarpetasDto->getfechaActualizacion()))))));
            if ($this->esFecha($JuzgadorescarpetasDto->getfechaActualizacion())) {
                $JuzgadorescarpetasDto->setfechaActualizacion($this->fechaMysql($JuzgadorescarpetasDto->getfechaActualizacion()));
            }
            return $JuzgadorescarpetasDto;
        }

        public function selectJuzgadorescarpetas($JuzgadorescarpetasDto) {
            $JuzgadorescarpetasDto = $this->validarJuzgadorescarpetas($JuzgadorescarpetasDto);
            $JuzgadorescarpetasController = new JuzgadorescarpetasController();
            $JuzgadorescarpetasDto = $JuzgadorescarpetasController->selectJuzgadorescarpetas($JuzgadorescarpetasDto);
            if ($JuzgadorescarpetasDto != "") {
                $dtoToJson = new DtoToJson($JuzgadorescarpetasDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertJuzgadorescarpetas($JuzgadorescarpetasDto) {
            $JuzgadorescarpetasDto = $this->validarJuzgadorescarpetas($JuzgadorescarpetasDto);
            $JuzgadorescarpetasController = new JuzgadorescarpetasController();
            $JuzgadorescarpetasDto = $JuzgadorescarpetasController->insertJuzgadorescarpetas($JuzgadorescarpetasDto);
            if ($JuzgadorescarpetasDto != "") {
                $dtoToJson = new DtoToJson($JuzgadorescarpetasDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateJuzgadorescarpetas($JuzgadorescarpetasDto) {
            $JuzgadorescarpetasDto = $this->validarJuzgadorescarpetas($JuzgadorescarpetasDto);
            $JuzgadorescarpetasController = new JuzgadorescarpetasController();
            $JuzgadorescarpetasDto = $JuzgadorescarpetasController->updateJuzgadorescarpetas($JuzgadorescarpetasDto);
            if ($JuzgadorescarpetasDto != "") {
                $fecha = date("Y-m-d H:i:s");
                $cveAccion = 96;
                $descripcion = "Actualizacion en tbljuzgadorescarpetas id: " . $JuzgadorescarpetasDto[0]->getIdJuzgadorCarpeta();
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $bitacoramovimientosDto->setCveAccion($cveAccion);
                $bitacoramovimientosDto->setFechaMovimiento($fecha);
                $bitacoramovimientosDto->setObservaciones($descripcion);
                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                //$bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                //$bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $controllerBitacora = new BitacoramovimientosController();
                $insertarBitacora = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto);
                $dtoToJson = new DtoToJson($JuzgadorescarpetasDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteJuzgadorescarpetas($JuzgadorescarpetasDto) {
            $JuzgadorescarpetasDto = $this->validarJuzgadorescarpetas($JuzgadorescarpetasDto);
            $JuzgadorescarpetasController = new JuzgadorescarpetasController();
            $JuzgadorescarpetasDto = $JuzgadorescarpetasController->deleteJuzgadorescarpetas($JuzgadorescarpetasDto);
            if ($JuzgadorescarpetasDto == true) {
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

    @$idJuzgadorCarpeta = $_POST["idJuzgadorCarpeta"];
    @$idJuzgador = $_POST["idJuzgador"];
    @$idCarpetaJudicial = $_POST["idCarpetaJudicial"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $juzgadorescarpetasFacade = new JuzgadorescarpetasFacade();
    $juzgadorescarpetasDto = new JuzgadorescarpetasDTO();

    $juzgadorescarpetasDto->setIdJuzgadorCarpeta($idJuzgadorCarpeta);
    $juzgadorescarpetasDto->setIdJuzgador($idJuzgador);
    $juzgadorescarpetasDto->setIdCarpetaJudicial($idCarpetaJudicial);
    $juzgadorescarpetasDto->setActivo($activo);
    $juzgadorescarpetasDto->setFechaRegistro($fechaRegistro);
    $juzgadorescarpetasDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($idJuzgadorCarpeta == "")) {
        $juzgadorescarpetasDto = $juzgadorescarpetasFacade->insertJuzgadorescarpetas($juzgadorescarpetasDto);
        echo $juzgadorescarpetasDto;
    } else if (($accion == "guardar") && ($idJuzgadorCarpeta != "")) {
        $juzgadorescarpetasDto = $juzgadorescarpetasFacade->updateJuzgadorescarpetas($juzgadorescarpetasDto);
        echo $juzgadorescarpetasDto;
    } else if ($accion == "consultar") {
        $juzgadorescarpetasDto = $juzgadorescarpetasFacade->selectJuzgadorescarpetas($juzgadorescarpetasDto);
        echo $juzgadorescarpetasDto;
    } else if (($accion == "baja") && ($idJuzgadorCarpeta != "")) {
        $juzgadorescarpetasDto = $juzgadorescarpetasFacade->deleteJuzgadorescarpetas($juzgadorescarpetasDto);
        echo $juzgadorescarpetasDto;
    } else if (($accion == "seleccionar") && ($idJuzgadorCarpeta != "")) {
        $juzgadorescarpetasDto = $juzgadorescarpetasFacade->selectJuzgadorescarpetas($juzgadorescarpetasDto);
        echo $juzgadorescarpetasDto;
    } else if ($accion == "buscarCarpetasJuzgadores") {
        $cvetipoCarpeta = @$_POST['cveTipoCarpeta'];
        $numero = @$_POST['numero'];
        $anio = @$_POST['anio'];
        $cveJuzgado = @$_POST['cveJuzgado'];
        @$param["paginacion"] = true;
        @$param["cantxPag"] = $_POST["cantidadRegistros"];
        @$param["pag"] = $_POST["pagina"];
        @$param["fechaInicio"] = $_POST["fechaInicio"];
        @$param["fechaFin"] = $_POST["fechaFin"];
        @$param["porRegion"] = $_POST["porRegion"];
        $resultado = array();
        $carpetasjudicialesDto = new CarpetasjudicialesDTO();
        $carpetasjudicialesDto->setAnio($anio);
        $carpetasjudicialesDto->setNumero($numero);
        $carpetasjudicialesDto->setCveJuzgado($cveJuzgado);
        $carpetasjudicialesDto->setCveTipoCarpeta($cvetipoCarpeta);
        $carpetasjudicialesDto->setActivo("S");
        $juzgadorescarpetasController = new JuzgadorescarpetasController();
        $resultado = $juzgadorescarpetasController->carpetasJuzgadores($carpetasjudicialesDto, $param);
        //echo json_encode($resultado);
        if (count($resultado) > 0) {
            $jsonDto = "{\"totalCount\":\"" . count($resultado) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($resultado as $dto) {
                if ($dto != "") {
                    $jsonDto.=json_encode($dto);
                    $jsonDto.= ",";
                }
            }
            $jsonDto = substr($jsonDto, 0, (strlen($jsonDto) - 1));
            $jsonDto.="]}";
            echo $jsonDto;
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE ENCONTRARON RESULTADOS"));
        }
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>