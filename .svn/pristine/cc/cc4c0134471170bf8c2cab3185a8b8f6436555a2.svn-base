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
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/horarios/HorariosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/configuracionessalas/ConfiguracionessalasDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/horarios/HorariosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgados/JuzgadosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/configuracionessalas/ConfiguracionessalasController.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
    include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
    include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");

    class HorariosFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function validarHorarios($HorariosDto) {
            $HorariosDto->setcveHorario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosDto->getcveHorario(), "utf8") : strtoupper($HorariosDto->getcveHorario()))))));
            if ($this->esFecha($HorariosDto->getcveHorario())) {
                $HorariosDto->setcveHorario($this->fechaMysql($HorariosDto->getcveHorario()));
            }
            $HorariosDto->setdesHorario(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosDto->getdesHorario(), "utf8") : strtoupper($HorariosDto->getdesHorario()))))));
            if ($this->esFecha($HorariosDto->getdesHorario())) {
                $HorariosDto->setdesHorario($this->fechaMysql($HorariosDto->getdesHorario()));
            }
            $HorariosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosDto->getactivo(), "utf8") : strtoupper($HorariosDto->getactivo()))))));
            if ($this->esFecha($HorariosDto->getactivo())) {
                $HorariosDto->setactivo($this->fechaMysql($HorariosDto->getactivo()));
            }
            $HorariosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosDto->getfechaRegistro(), "utf8") : strtoupper($HorariosDto->getfechaRegistro()))))));
            if ($this->esFecha($HorariosDto->getfechaRegistro())) {
                $HorariosDto->setfechaRegistro($this->fechaMysql($HorariosDto->getfechaRegistro()));
            }
            $HorariosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosDto->getfechaActualizacion(), "utf8") : strtoupper($HorariosDto->getfechaActualizacion()))))));
            if ($this->esFecha($HorariosDto->getfechaActualizacion())) {
                $HorariosDto->setfechaActualizacion($this->fechaMysql($HorariosDto->getfechaActualizacion()));
            }
            $HorariosDto->sethorarioInicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosDto->gethorarioInicial(), "utf8") : strtoupper($HorariosDto->gethorarioInicial()))))));
            if ($this->esFecha($HorariosDto->gethorarioInicial())) {
                $HorariosDto->sethorarioInicial($this->fechaMysql($HorariosDto->gethorarioInicial()));
            }
            $HorariosDto->sethorarioFinal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosDto->gethorarioFinal(), "utf8") : strtoupper($HorariosDto->gethorarioFinal()))))));
            if ($this->esFecha($HorariosDto->gethorarioFinal())) {
                $HorariosDto->sethorarioFinal($this->fechaMysql($HorariosDto->gethorarioFinal()));
            }
            $HorariosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($HorariosDto->getcveJuzgado(), "utf8") : strtoupper($HorariosDto->getcveJuzgado()))))));
            if ($this->esFecha($HorariosDto->getcveJuzgado())) {
                $HorariosDto->setcveJuzgado($this->fechaMysql($HorariosDto->getcveJuzgado()));
            }
            return $HorariosDto;
        }

        public function selectHorarios($HorariosDto, $param) {
            $HorariosDto = $this->validarHorarios($HorariosDto);
            $HorariosController = new HorariosController();
            $HorariosDto = $HorariosController->selectHorarios($HorariosDto, $param);
            if ($HorariosDto != "") {
                $dtoToJson = new DtoToJson($HorariosDto);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectJuzgados($juzgadoDto) {
            $juzgadoController = new JuzgadosController();
            $juzgados = $juzgadoController->selectJuzgados($juzgadoDto);
            if ($juzgados != "") {
                $dtoToJson = new DtoToJson($juzgados);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function selectSalasJuzgado($horariosDto) {
            $HorariosController = new HorariosController();
            $salas = new SalasDTO();
            $salas = $HorariosController->selectSalasJuzgado($horariosDto);
            if ($salas != "") {
                $dtoToJson = new DtoToJson($salas);
                return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
        }

        public function insertHorarios($HorariosDto) {
            $HorariosDto = $this->validarHorarios($HorariosDto);
            $HorariosController = new HorariosController();
            $HorariosDto = $HorariosController->insertHorarios($HorariosDto);
            if ($HorariosDto != "") {
                $dtoToJson = new DtoToJson($HorariosDto);
                return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
        }

        public function updateHorarios($HorariosDto) {
            $HorariosDto = $this->validarHorarios($HorariosDto);
            $HorariosController = new HorariosController();
            $HorariosDto = $HorariosController->updateHorarios($HorariosDto);
            if ($HorariosDto != "") {
                $dtoToJson = new DtoToJson($HorariosDto);
                return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
        }

        public function deleteHorarios($HorariosDto) {
            $HorariosDto = $this->validarHorarios($HorariosDto);
            $HorariosController = new HorariosController();
            $HorariosDto = $HorariosController->deleteHorarios($HorariosDto);
            if ($HorariosDto == true) {
                $jsonDto = new Encode_JSON();
                return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            }
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
        }

        public function getPaginasHorarios($horariosDto, $param) {
            $horariosDto = $this->validarHorarios($horariosDto);
            $HorariosController = new HorariosController();
            $horariosDto = $HorariosController->getPaginasHorarios($horariosDto, $param);
            return $horariosDto;
        }

        public function modificarHorarios($horariosDto, $param) {
            $horariosDto = $this->validarHorarios($horariosDto);
            $HorariosController = new HorariosController();
            $horariosDto = $HorariosController->modificarHorarios($horariosDto, $param);
            return $horariosDto;
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

        public function limpiarCadena($string, $invalido = "", $permitidos = "") {
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

    @$cveHorario = $_POST["cveHorario"];
    @$desHorario = $_POST["desHorario"];
    @$activo = $_POST["activo"];
    @$fechaRegistro = $_POST["fechaRegistro"];
    @$fechaActualizacion = $_POST["fechaActualizacion"];
    @$horarioInicial = $_POST["horarioInicial"];
    @$horarioFinal = $_POST["horarioFinal"];
    @$cveJuzgado = $_POST["cveJuzgado"];
    @$accion = $_POST["accion"];
    @$salas = $_POST["cveSala"];

    $horariosFacade = new HorariosFacade();
    $horariosDto = new HorariosDTO();
    $juzgadosDto = new JuzgadosDTO();
    $desHorario = $horariosFacade->limpiarCadena($desHorario);
//var_dump($desHorario);
    $desHorario = strtoupper($desHorario);
    $horariosDto->setCveHorario($cveHorario);
    $horariosDto->setDesHorario($desHorario);
    $horariosDto->setActivo($activo);
    $horariosDto->setFechaRegistro($fechaRegistro);
    $horariosDto->setFechaActualizacion($fechaActualizacion);
    $horariosDto->setHorarioInicial($horarioInicial);
    $horariosDto->setHorarioFinal($horarioFinal);
    $horariosDto->setCveJuzgado($cveJuzgado);

    if (($accion == "guardar") && ($cveHorario == "")) {
        $horariosControler = new HorariosController();
        $horarioDto = new HorariosDTO();
        $horarioDto->setCveJuzgado($cveJuzgado);
        $horarioDto->setActivo($activo);
        $horarios = $horariosControler->selectHorarios($horarioDto);
        $bandera = array();
        if (!$horarios) {
            $horariosDto = $horariosFacade->insertHorarios($horariosDto);
            echo $horariosDto;
            $datosHorario = json_decode($horariosDto);
            //print_r($datosHorario);
            $idHorario = $datosHorario->data[0]->cveHorario;
            //echo $idHorario . "<br>";
            if ($datosHorario->totalCount == 1) {
                //$cveSala = explode(",", $salas);
                for ($s = 0; $s < count($_POST["cveSala"]); $s++) {
                    $configuracionessalasDto = new ConfiguracionessalasDTO();
                    $configuracionessalasController = new ConfiguracionessalasController();
                    $configuracionessalasDto->setCveHorario($idHorario);
                    $configuracionessalasDto->setCveSala($_POST["cveSala"][$s]);
                    $configuracionessalasDto->setActivo("S");
                    $configuracion = $configuracionessalasController->insertConfiguracionessalas($configuracionessalasDto);
                }
                //guardar en bitacora el registro guardado en tblhorarios
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $cveAccion = 21;
                $observaciones = "INSERT TABLA tblhorarios id: " . $idHorario;
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
                $horariosDto = $horariosFacade->insertHorarios($horariosDto);
                echo $horariosDto;
                $datosHorario = json_decode($horariosDto);
                //print_r($datosHorario);
                $idHorario = $datosHorario->data[0]->cveHorario;
                //echo $idHorario;
                if ($datosHorario->totalCount == 1) {
                    //$cveSala = explode(",", $salas);
                    for ($s = 0; $s < count($_POST["cveSala"]); $s++) {
                        $configuracionessalasDto = new ConfiguracionessalasDTO();
                        $configuracionessalasController = new ConfiguracionessalasController();
                        $configuracionessalasDto->setCveHorario($idHorario);
                        $configuracionessalasDto->setCveSala($_POST["cveSala"][$s]);
                        $configuracionessalasDto->setActivo("S");
                        $configuracion = $configuracionessalasController->insertConfiguracionessalas($configuracionessalasDto);
                    }
                    //guardar en bitacora el registro guardado en tblhorarios
                    $bitacoramovimientosDto = new BitacoramovimientosDTO();
                    $cveAccion = 21;
                    $observaciones = "INSERT TABLA tblhorarios id: " . $idHorario;
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
    } else if (($accion == "guardar") && ($cveHorario != "")) {
        @$param['cveSala'] = $_POST["cveSala"];
        $horariosDto = $horariosFacade->modificarHorarios($horariosDto, $param);
        echo $horariosDto;

        /* } else {
          $jsonDto = new Encode_JSON();
          echo $jsonDto->encode(array("totalCount"=>"0","text"=>"No se puede registrar el horario debido a que hay un horario entre el horario seleccionado favor de verificar"));
          } */
    } else if ($accion == "consultar") {
        @$param["paginacion"] = $_POST["paginacion"];
        @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
        @$param["pagina"] = $_POST["pagina"];
        $horariosDto = $horariosFacade->selectHorarios($horariosDto, $param);
        echo $horariosDto;
    } else if ($accion == "consultarSalas") {
        $salas = new SalasDTO();
        $salas = $horariosFacade->selectSalasJuzgado($horariosDto);
        echo $salas;
    } else if (($accion == "baja") && ($cveHorario != "")) {
        $configuraciones = new ConfiguracionessalasDTO();
        $config = new ConfiguracionessalasController();
        $configuraciones->setCveHorario($cveHorario);
        $datos = $config->selecSalasByHorario($configuraciones);
        //print_r($datos);
        if (!$datos) {
            $horariosDto = $horariosFacade->deleteHorarios($horariosDto);
            //echo $horariosDto;
            $datosHorario = json_decode($horariosDto);
            if ($datosHorario->text == "REGISTRO ELIMINADO DE FORMA CORRECTA") {
                $configuraciones = new ConfiguracionessalasDTO();
                $config = new ConfiguracionessalasController();
                $configuraciones->setCveHorario($cveHorario);
                $baja = $config->deleteLogicConfiguracionessalas($configuraciones);
                $jsonDto = new Encode_JSON();
                echo $jsonDto->encode(array("totalCount" => "1", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
            } else {
                $jsonDto = new Encode_JSON();
                echo $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ELIMINAR EL REGISTRO"));
            }
            //guardar en bitacora el registro borrado logicamente en tblhorarios
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $cveAccion = 23;
            $observaciones = "BORRADO LOGICO EN tblhorarios id: " . $cveHorario;
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
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "No se puede eliminar el horario debido a que hay salas activas con el horario seleccionado, favor de verificar"));
        }
    } else if (($accion == "seleccionar") && ($cveHorario != "")) {
        @$param["paginacion"] = $_POST["paginacion"];
        @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
        @$param["pagina"] = $_POST["pagina"];
        $horariosDto = $horariosFacade->selectHorarios($horariosDto, $param);
        echo $horariosDto;
    } else if ($accion == "seleccionarJuzgado") {
        $juzgadosDto = new JuzgadosDTO();
        $juzgadosDto->setActivo("S");
        $juzgados = $horariosFacade->selectJuzgados($juzgadosDto);
        echo $juzgados;
    } else if ($accion == "bajaRegistros") {
        /*
         * Eliminar los horarios seleccionados por el usuario y los registros
         * relacionados (tblconfiguracionessalas)
         */
        if (isset($_POST['eliminar']) && count($_POST['eliminar']) > 0) {
            $bandera = false;
            $idHorarios = array();
            for ($n = 0; $n < count($_POST['eliminar']); $n++) {
                $horariosDto = new HorariosDTO();
                $horariosDto->setCveHorario($_POST['eliminar'][$n]);
                $configuraciones = new ConfiguracionessalasDTO();
                $config = new ConfiguracionessalasController();
                $configuraciones->setCveHorario($_POST['eliminar'][$n]);
                $datos = $config->selecSalasByHorario($configuraciones);
                //print_r($datos);
                if (!$datos) {
                    $horariosDto = $horariosFacade->deleteHorarios($horariosDto);
                    //echo $horariosDto;
                    $datosHorario = json_decode($horariosDto);
                    if ($datosHorario->text == "REGISTRO ELIMINADO DE FORMA CORRECTA") {
                        $bandera = true;
                        $configuraciones = new ConfiguracionessalasDTO();
                        $config = new ConfiguracionessalasController();
                        $configuraciones->setCveHorario($_POST['eliminar'][$n]);
                        $baja = $config->deleteLogicConfiguracionessalas($configuraciones);
                        $idHorarios[] = $_POST['eliminar'][$n];
                    } else {
                        $bandera = false;
                    }
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
                //guardar en bitacora el registro borrado logicamente en tblhorarios
                $horarios = implode(",", $idHorarios);
                $bitacoramovimientosDto = new BitacoramovimientosDTO();
                $cveAccion = 23;
                $observaciones = "BORRADO LOGICO EN tblhorarios id: " . $horarios;
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
                echo $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ELIMINAR LOS REGISTROS, ES POSIBLE QUE EXISTAN SALAS ACTIVAS CON ALGUNO DE LOS HORARIOS SELECCIONADOS, FAVOR DE VERIFICAR"));
            }
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE RECIBIERON DATOS!"));
        }
    } else if ($accion == "getPaginas") {
        @$param["paginacion"] = true;
        @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
        $horariosDto = $horariosFacade->getPaginasHorarios($horariosDto, $param);
        echo $horariosDto;
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>