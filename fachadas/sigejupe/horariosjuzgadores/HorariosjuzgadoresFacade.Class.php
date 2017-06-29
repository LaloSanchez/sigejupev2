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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/horariosjuzgadores/HorariosjuzgadoresDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/configuracionesjuzgadores/ConfiguracionesjuzgadoresDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/horariosjuzgadores/HorariosjuzgadoresController.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/configuracionesjuzgadores/ConfiguracionesjuzgadoresController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");

    class HorariosjuzgadoresFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarHorariosjuzgadores($HorariosjuzgadoresDto) {
            $HorariosjuzgadoresDto->setidHorarioJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosjuzgadoresDto->getidHorarioJuzgador(), "utf8") : strtoupper($HorariosjuzgadoresDto->getidHorarioJuzgador()))))));
            if ($this->esFecha($HorariosjuzgadoresDto->getidHorarioJuzgador())) {
                $HorariosjuzgadoresDto->setidHorarioJuzgador($this->fechaMysql($HorariosjuzgadoresDto->getidHorarioJuzgador()));
            }
            $HorariosjuzgadoresDto->setdesHorario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosjuzgadoresDto->getdesHorario(), "utf8") : strtoupper($HorariosjuzgadoresDto->getdesHorario()))))));
            if ($this->esFecha($HorariosjuzgadoresDto->getdesHorario())) {
                $HorariosjuzgadoresDto->setdesHorario($this->fechaMysql($HorariosjuzgadoresDto->getdesHorario()));
            }
            $HorariosjuzgadoresDto->sethorarioInicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosjuzgadoresDto->gethorarioInicial(), "utf8") : strtoupper($HorariosjuzgadoresDto->gethorarioInicial()))))));
            if ($this->esFecha($HorariosjuzgadoresDto->gethorarioInicial())) {
                $HorariosjuzgadoresDto->sethorarioInicial($this->fechaMysql($HorariosjuzgadoresDto->gethorarioInicial()));
            }
            $HorariosjuzgadoresDto->sethorarioFinal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosjuzgadoresDto->gethorarioFinal(), "utf8") : strtoupper($HorariosjuzgadoresDto->gethorarioFinal()))))));
            if ($this->esFecha($HorariosjuzgadoresDto->gethorarioFinal())) {
                $HorariosjuzgadoresDto->sethorarioFinal($this->fechaMysql($HorariosjuzgadoresDto->gethorarioFinal()));
            }
            $HorariosjuzgadoresDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosjuzgadoresDto->getcveJuzgado(), "utf8") : strtoupper($HorariosjuzgadoresDto->getcveJuzgado()))))));
            if ($this->esFecha($HorariosjuzgadoresDto->getcveJuzgado())) {
                $HorariosjuzgadoresDto->setcveJuzgado($this->fechaMysql($HorariosjuzgadoresDto->getcveJuzgado()));
            }
            $HorariosjuzgadoresDto->setcveTipoJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosjuzgadoresDto->getcveTipoJuzgador(), "utf8") : strtoupper($HorariosjuzgadoresDto->getcveTipoJuzgador()))))));
            if ($this->esFecha($HorariosjuzgadoresDto->getcveTipoJuzgador())) {
                $HorariosjuzgadoresDto->setcveTipoJuzgador($this->fechaMysql($HorariosjuzgadoresDto->getcveTipoJuzgador()));
            }
            $HorariosjuzgadoresDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosjuzgadoresDto->getactivo(), "utf8") : strtoupper($HorariosjuzgadoresDto->getactivo()))))));
            if ($this->esFecha($HorariosjuzgadoresDto->getactivo())) {
                $HorariosjuzgadoresDto->setactivo($this->fechaMysql($HorariosjuzgadoresDto->getactivo()));
            }
            $HorariosjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosjuzgadoresDto->getfechaRegistro(), "utf8") : strtoupper($HorariosjuzgadoresDto->getfechaRegistro()))))));
            if ($this->esFecha($HorariosjuzgadoresDto->getfechaRegistro())) {
                $HorariosjuzgadoresDto->setfechaRegistro($this->fechaMysql($HorariosjuzgadoresDto->getfechaRegistro()));
            }
            $HorariosjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosjuzgadoresDto->getfechaActualizacion(), "utf8") : strtoupper($HorariosjuzgadoresDto->getfechaActualizacion()))))));
            if ($this->esFecha($HorariosjuzgadoresDto->getfechaActualizacion())) {
                $HorariosjuzgadoresDto->setfechaActualizacion($this->fechaMysql($HorariosjuzgadoresDto->getfechaActualizacion()));
            }
            return $HorariosjuzgadoresDto;
        }

        public function selectHorariosjuzgadores($HorariosjuzgadoresDto, $param) {
            $HorariosjuzgadoresDto = $this->validarHorariosjuzgadores($HorariosjuzgadoresDto);
            $HorariosjuzgadoresController = new HorariosjuzgadoresController();
            $HorariosjuzgadoresDto = $HorariosjuzgadoresController->selectHorariosjuzgadores($HorariosjuzgadoresDto, $param);
            if ($HorariosjuzgadoresDto != "") {
                $dtoToJson = new DtoToJson($HorariosjuzgadoresDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertHorariosjuzgadores($HorariosjuzgadoresDto) {
            $HorariosjuzgadoresDto = $this->validarHorariosjuzgadores($HorariosjuzgadoresDto);
            $HorariosjuzgadoresController = new HorariosjuzgadoresController();
            $HorariosjuzgadoresDto = $HorariosjuzgadoresController->insertHorariosjuzgadores($HorariosjuzgadoresDto);
            if ($HorariosjuzgadoresDto != "") {
                $dtoToJson = new DtoToJson($HorariosjuzgadoresDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateHorariosjuzgadores($HorariosjuzgadoresDto) {
            $HorariosjuzgadoresDto = $this->validarHorariosjuzgadores($HorariosjuzgadoresDto);
            $HorariosjuzgadoresController = new HorariosjuzgadoresController();
            $HorariosjuzgadoresDto = $HorariosjuzgadoresController->updateHorariosjuzgadores($HorariosjuzgadoresDto);
            if ($HorariosjuzgadoresDto != "") {
                $dtoToJson = new DtoToJson($HorariosjuzgadoresDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteHorariosjuzgadores($HorariosjuzgadoresDto) {
            $HorariosjuzgadoresDto = $this->validarHorariosjuzgadores($HorariosjuzgadoresDto);
            $HorariosjuzgadoresController = new HorariosjuzgadoresController();
            $HorariosjuzgadoresDto = $HorariosjuzgadoresController->deleteHorariosjuzgadores($HorariosjuzgadoresDto);
            if ($HorariosjuzgadoresDto == true) {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
        }

        public function selectJuzgadores($HorariosjuzgadoresDto) {
            $HorariosjuzgadoresDto = $this->validarHorariosjuzgadores($HorariosjuzgadoresDto);
            $HorariosjuzgadoresController = new HorariosjuzgadoresController();
            $juzgadoresDto = new JuzgadoresDTO();
            $juzgadoresDto = $HorariosjuzgadoresController->selectJuzgadores($HorariosjuzgadoresDto);
            if ($juzgadoresDto != "") {
                $dtoToJson = new DtoToJson($juzgadoresDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function getPaginasHorariosJuzgadores($horariosjuzgadoresDto, $param) {
            $horariosjuzgadoresDto = $this->validarHorariosjuzgadores($horariosjuzgadoresDto);
            $HorariosjuzgadoresController = new HorariosjuzgadoresController();
            $horariosjuzgadoresDto = $HorariosjuzgadoresController->getPaginasHorariosJuzgadores($horariosjuzgadoresDto, $param);
            return $horariosjuzgadoresDto;
        }

        public function modificarHorariosJuzgadores($horariosjuzgadoresDto, $param) {
            $horariosjuzgadoresDto = $this->validarHorariosjuzgadores($horariosjuzgadoresDto);
            $HorariosjuzgadoresController = new HorariosjuzgadoresController();
            $horariosjuzgadoresDto = $HorariosjuzgadoresController->modificarHorariosJuzgadores($horariosjuzgadoresDto, $param);
            return $horariosjuzgadoresDto;
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

        public function limpiarCadena($string, $invalido = '', $permitidos = '') {
            $string = str_replace(
                    array("\\", "¨", "º", "~", "'",
                "#", "|", "\"", "/",
                "#", "@", "|", "\"", "/",
                "·", "$", "%", "&",
                "(", ")", "¿", "?", "!", "¡",
                "[", "^", "`", "]", "*",
                "+", "}", "{", "¨", "´",
                ">", "<", ";", ",", ":", "_", "-"), $invalido, $string
            );
            return $string;
        }

    }

    @$idHorarioJuzgador = $_POST["idHorarioJuzgador"];
    @$desHorario = $_POST["desHorario"];
    @$horarioInicial = $_POST["horarioInicial"];
    @$horarioFinal = $_POST["horarioFinal"];
    @$cveJuzgado = $_POST["cveJuzgado"];
    @$cveTipoJuzgador = $_POST["cveTipoJuzgador"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$accion = $_POST["accion"];

    $horariosjuzgadoresFacade = new HorariosjuzgadoresFacade();
    $horariosjuzgadoresDto = new HorariosjuzgadoresDTO();
    $desHorario = $horariosjuzgadoresFacade->limpiarCadena($desHorario);
    $desHorario = strtoupper($desHorario);
    $horariosjuzgadoresDto->setIdHorarioJuzgador($idHorarioJuzgador);
    $horariosjuzgadoresDto->setDesHorario($desHorario);
    $horariosjuzgadoresDto->setHorarioInicial($horarioInicial);
    $horariosjuzgadoresDto->setHorarioFinal($horarioFinal);
    $horariosjuzgadoresDto->setCveJuzgado($cveJuzgado);
    $horariosjuzgadoresDto->setCveTipoJuzgador($cveTipoJuzgador);
    $horariosjuzgadoresDto->setActivo($activo);
    $horariosjuzgadoresDto->setFechaRegistro($fechaRegistro);
    $horariosjuzgadoresDto->setFechaActualizacion($fechaActualizacion);

    if (($accion == "guardar") && ($idHorarioJuzgador == "")) {
        //$horariosjuzgadoresDto=$horariosjuzgadoresFacade->insertHorariosjuzgadores($horariosjuzgadoresDto);
        //echo $horariosjuzgadoresDto;
        $horariosjuzgadoresControler = new HorariosjuzgadoresController();
        $horariojuzgadorDto = new HorariosjuzgadoresDTO();
        $horariojuzgadorDto->setCveJuzgado($cveJuzgado);
        $horariojuzgadorDto->setCveTipoJuzgador($cveTipoJuzgador);
        $horariojuzgadorDto->setActivo($activo);
        $horarios = $horariosjuzgadoresControler->selectHorariosjuzgadores($horariojuzgadorDto);
        $bandera = array();
        if (!$horarios) {
            $horariosjuzgadoresDto = $horariosjuzgadoresFacade->insertHorariosjuzgadores($horariosjuzgadoresDto);
            echo $horariosjuzgadoresDto;
            $datosHorario = json_decode($horariosjuzgadoresDto);
            //print_r($datosHorario);
            $idHorario = $datosHorario->data[0]->idHorarioJuzgador;
            //echo $idHorario . "<br>";
            if ($datosHorario->totalCount == 1) {
                //$cveSala = explode(",", $salas);
                for ($s = 0; $s < count($_POST["idJuzgador"]); $s++) {
                    $configuracionesjuzgadoresDto = new ConfiguracionesjuzgadoresDTO();
                    $configuracionesjuzgadoresControler = new ConfiguracionesjuzgadoresController();
                    $configuracionesjuzgadoresDto->setIdHorarioJuzgador($idHorario);
                    $configuracionesjuzgadoresDto->setIdJuzgador($_POST["idJuzgador"][$s]);
                    $configuracionesjuzgadoresDto->setActivo("S");
                    $configuracion = $configuracionesjuzgadoresControler->insertConfiguracionesjuzgadores($configuracionesjuzgadoresDto);
                }
                //guardar en bitacora el registro guardado en tblhorarios
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $cveAccion = 42;
                $observaciones = "INSERT TABLA tblhorariosjuzgadores id: " . $idHorario;
                $fecha = date("Y-m-d H:i:s");
                $bitacoramovimientosDto->setCveAccion($cveAccion);
                $bitacoramovimientosDto->setFechaMovimiento($fecha);
                $bitacoramovimientosDto->setObservaciones($observaciones);
                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $controllerBitacora = new BitacoramovimientosController();
                $insertar = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto);
            }
        } else {
            $horaInicio = (int) substr($horarioInicial, 0, 2);
            //echo $horaInicio."<br>";
            for ($n = 0; $n < count($horarios); $n ++) {
                $inicio = (int) substr($horarios[$n]->getHorarioInicial(), 0, 2);
                //echo $inicio."<br>";
                $fin = (int) substr($horarios[$n]->getHorarioFinal(), 0, 2);
                //echo $fin."<br>";
                if ($horaInicio >= $inicio && $horaInicio < $fin
                ) {
                    $bandera[] = false;
                } else {
                    $bandera[] = true;
                }
            }
            //print_r($bandera);
            if (in_array(false, $bandera)) {
                $jsonDto = new Encode_JSON();
                echo $jsonDto->encode(array("totalCount" => "0", "text" => "No se puede registrar el horario debido a que hay un horario entre el horario seleccionado favor de verificar"));
            } else {
                $horariosjuzgadoresDto = $horariosjuzgadoresFacade->insertHorariosjuzgadores($horariosjuzgadoresDto);
                echo $horariosjuzgadoresDto;
                $datosHorario = json_decode($horariosjuzgadoresDto);
                //print_r($datosHorario);
                $idHorario = $datosHorario->data[0]->idHorarioJuzgador;
                //echo $idHorario;
                if ($datosHorario->totalCount == 1) {
                    //$cveSala = explode(",", $salas);
                    for ($s = 0; $s < count($_POST["idJuzgador"]); $s++) {
                        $configuracionesjuzgadoresDto = new ConfiguracionesjuzgadoresDTO();
                        $configuracionesjuzgadoresControler = new ConfiguracionesjuzgadoresController();
                        $configuracionesjuzgadoresDto->setIdHorarioJuzgador($idHorario);
                        $configuracionesjuzgadoresDto->setIdJuzgador($_POST["idJuzgador"][$s]);
                        $configuracionesjuzgadoresDto->setActivo("S");
                        $configuracion = $configuracionesjuzgadoresControler->insertConfiguracionesjuzgadores($configuracionesjuzgadoresDto);
                    }
                    //guardar en bitacora el registro guardado en tblhorarios
                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
                    $cveAccion = 42;
                    $observaciones = "INSERT TABLA tblhorariosjuzgadores id: " . $idHorario;
                    $fecha = date("Y-m-d H:i:s");
                    $bitacoramovimientosDto->setCveAccion($cveAccion);
                    $bitacoramovimientosDto->setFechaMovimiento($fecha);
                    $bitacoramovimientosDto->setObservaciones($observaciones);
                    $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                    $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                    $controllerBitacora = new BitacoramovimientosController();
                    $insertar = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto);
                }
            }
        }
    } else if (($accion == "guardar") && ($idHorarioJuzgador != "")) {
        @$param["idJuzgador"] = $_POST["idJuzgador"];
        $horariosjuzgadoresDto = $horariosjuzgadoresFacade->modificarHorariosJuzgadores($horariosjuzgadoresDto, $param);
        echo $horariosjuzgadoresDto;
    } else if ($accion == "consultar") {
        @$param["paginacion"] = $_POST["paginacion"];
        @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
        @$param["pagina"] = $_POST["pagina"];
        $horariosjuzgadoresDto = $horariosjuzgadoresFacade->selectHorariosjuzgadores($horariosjuzgadoresDto, $param);
        echo $horariosjuzgadoresDto;
    } else if (($accion == "baja") && ($idHorarioJuzgador != "")) {
        $horariosjuzgadoresDto = $horariosjuzgadoresFacade->deleteHorariosjuzgadores($horariosjuzgadoresDto);
        //echo $horariosjuzgadoresDto;
        $datosHorario = json_decode($horariosjuzgadoresDto);
        if ($datosHorario->text == "REGISTRO ELIMINADO DE FORMA CORRECTA") {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "1", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            $configuraciones = new ConfiguracionesjuzgadoresDTO();
            $config = new ConfiguracionesjuzgadoresController();
            $configuraciones->setIdHorarioJuzgador($idHorarioJuzgador);
            $baja = $config->deleteLogicConfiguracionesjuzgadores($configuraciones);
            //guardar en bitacora el registro borrado logicamente en tblhorarios
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $cveAccion = 44;
            $observaciones = "BORRADO LOGICO EN tblhorariosjuzgadores id: " . $idHorarioJuzgador;
            $fecha = date("Y-m-d H:i:s");
            $bitacoramovimientosDto->setCveAccion($cveAccion);
            $bitacoramovimientosDto->setFechaMovimiento($fecha);
            $bitacoramovimientosDto->setObservaciones($observaciones);
            $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
            $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
            $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
            $controllerBitacora = new BitacoramovimientosController();
            $insertar = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto);
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ELIMINAR EL REGISTRO"));
        }
    } else if (($accion == "seleccionar") && ($idHorarioJuzgador != "")) {
        @$param["paginacion"] = $_POST["paginacion"];
        @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
        @$param["pagina"] = $_POST["pagina"];
        $horariosjuzgadoresDto = $horariosjuzgadoresFacade->selectHorariosjuzgadores($horariosjuzgadoresDto, $param);
        echo $horariosjuzgadoresDto;
    } else if ($accion == "consultarJuzgadores") {
        $juzgadoresDto = new JuzgadoresDTO();
        $juzgadoresDto = $horariosjuzgadoresFacade->selectJuzgadores($horariosjuzgadoresDto);
        echo $juzgadoresDto;
    } else if ($accion == "bajaRegistros") {
        /*
         * Eliminar los horarios seleccionados por el usuario y los registros
         * relacionados (tblconfiguracionesjuzgadores)
         */
        if (isset($_POST['eliminar']) && count($_POST['eliminar']) > 0) {
            $bandera = false;
            $idHorarios = array();
            for ($n = 0; $n < count($_POST['eliminar']); $n++) {
                $horariosjuzgadoresDto = new HorariosjuzgadoresDTO();
                $horariosjuzgadoresDto->setIdHorarioJuzgador($_POST['eliminar'][$n]);
                $horariosjuzgadoresDto = $horariosjuzgadoresFacade->deleteHorariosjuzgadores($horariosjuzgadoresDto);
                $datosHorario = json_decode($horariosjuzgadoresDto);
                //print_r($datos);
                if ($datosHorario->text == "REGISTRO ELIMINADO DE FORMA CORRECTA") {
                    $configuraciones = new ConfiguracionesjuzgadoresDTO();
                    $config = new ConfiguracionesjuzgadoresController();
                    $configuraciones->setIdHorarioJuzgador($_POST['eliminar'][$n]);
                    $baja = $config->deleteLogicConfiguracionesjuzgadores($configuraciones);
                    $bandera = true;
                    $idHorarios[] = $_POST['eliminar'][$n];
                } else {
                    $bandera = false;
                }

                if ($bandera == false) {
                    break;
                } else {
                    continue;
                }
            }

            if ($bandera) {
                $jsonDto = new Encode_JSON();
                echo $jsonDto->encode(array("totalCount" => "1", "text" => "REGISTROS ELIMINADOS CORRECTAMENTE"));
                //guardar en bitacora el registro borrado logicamente en tblhorariosjuzgadores
                $horarios = implode(",", $idHorarios);
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $cveAccion = 44;
                $observaciones = "BORRADO LOGICO EN tblhorariosjuzgadores id: " . $horarios;
                $fecha = date("Y-m-d H:i:s");
                $bitacoramovimientosDto->setCveAccion($cveAccion);
                $bitacoramovimientosDto->setFechaMovimiento($fecha);
                $bitacoramovimientosDto->setObservaciones($observaciones);
                $bitacoramovimientosDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                $bitacoramovimientosDto->setCvePerfil($_SESSION['cvePerfil']);
                $bitacoramovimientosDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
                $controllerBitacora = new BitacoramovimientosController();
                $insertar = $controllerBitacora->insertBitacoramovimientos($bitacoramovimientosDto);
            } else {
                $jsonDto = new Encode_JSON();
                echo $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ELIMINAR LOS REGISTROS"));
            }
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE RECIBIERON DATOS!"));
        }
    } else if ($accion == "getPaginas") {
        @$param["paginacion"] = true;
        @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
        $horariosjuzgadoresDto = $horariosjuzgadoresFacade->getPaginasHorariosJuzgadores($horariosjuzgadoresDto, $param);
        echo $horariosjuzgadoresDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>