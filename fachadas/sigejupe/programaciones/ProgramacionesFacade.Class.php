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
ini_set('max_execution_time', 500);
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programaciones/ProgramacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programaciones/ProgramacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/bitacoramovimientos/BitacoramovimientosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionsalas/ProgramacionsalasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionsalas/ProgramacionsalasController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ultimoroljuzgador/UltimoroljuzgadorDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ultimoroljuzgador/UltimoroljuzgadorController.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

class ProgramacionesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarProgramaciones($ProgramacionesDto) {
        $ProgramacionesDto->setidProgramacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionesDto->getidProgramacion(), "utf8") : strtoupper($ProgramacionesDto->getidProgramacion()))))));
        if ($this->esFecha($ProgramacionesDto->getidProgramacion())) {
            $ProgramacionesDto->setidProgramacion($this->fechaMysql($ProgramacionesDto->getidProgramacion()));
        }
        $ProgramacionesDto->setcveMes(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionesDto->getcveMes(), "utf8") : strtoupper($ProgramacionesDto->getcveMes()))))));
        if ($this->esFecha($ProgramacionesDto->getcveMes())) {
            $ProgramacionesDto->setcveMes($this->fechaMysql($ProgramacionesDto->getcveMes()));
        }
        $ProgramacionesDto->setanio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionesDto->getanio(), "utf8") : strtoupper($ProgramacionesDto->getanio()))))));
        if ($this->esFecha($ProgramacionesDto->getanio())) {
            $ProgramacionesDto->setanio($this->fechaMysql($ProgramacionesDto->getanio()));
        }
        $ProgramacionesDto->setfechaInicial(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionesDto->getfechaInicial(), "utf8") : strtoupper($ProgramacionesDto->getfechaInicial()))))));
        if ($this->esFecha($ProgramacionesDto->getfechaInicial())) {
            $ProgramacionesDto->setfechaInicial($this->fechaMysql($ProgramacionesDto->getfechaInicial()));
        }
        $ProgramacionesDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionesDto->getfechaFinal(), "utf8") : strtoupper($ProgramacionesDto->getfechaFinal()))))));
        if ($this->esFecha($ProgramacionesDto->getfechaFinal())) {
            $ProgramacionesDto->setfechaFinal($this->fechaMysql($ProgramacionesDto->getfechaFinal()));
        }
        $ProgramacionesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionesDto->getfechaRegistro(), "utf8") : strtoupper($ProgramacionesDto->getfechaRegistro()))))));
        if ($this->esFecha($ProgramacionesDto->getfechaRegistro())) {
            $ProgramacionesDto->setfechaRegistro($this->fechaMysql($ProgramacionesDto->getfechaRegistro()));
        }
        $ProgramacionesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionesDto->getfechaActualizacion(), "utf8") : strtoupper($ProgramacionesDto->getfechaActualizacion()))))));
        if ($this->esFecha($ProgramacionesDto->getfechaActualizacion())) {
            $ProgramacionesDto->setfechaActualizacion($this->fechaMysql($ProgramacionesDto->getfechaActualizacion()));
        }
        $ProgramacionesDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionesDto->getcveJuzgado(), "utf8") : strtoupper($ProgramacionesDto->getcveJuzgado()))))));
        if ($this->esFecha($ProgramacionesDto->getcveJuzgado())) {
            $ProgramacionesDto->setcveJuzgado($this->fechaMysql($ProgramacionesDto->getcveJuzgado()));
        }
        return $ProgramacionesDto;
    }

    public function selectProgramaciones($ProgramacionesDto, $param) {
        $ProgramacionesDto = $this->validarProgramaciones($ProgramacionesDto);
        $ProgramacionesController = new ProgramacionesController();
        $ProgramacionesDto = $ProgramacionesController->selectProgramaciones($ProgramacionesDto, $param);
        if ($ProgramacionesDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    //invocar al método para obtener la fecha inicial y final de un mes 
    public function selectFechasProgramaciones($ProgramacionesDto) {
        $ProgramacionesDto = $this->validarProgramaciones($ProgramacionesDto);
        $ProgramacionesController = new ProgramacionesController();
        $ProgramacionesDto = $ProgramacionesController->ObtenerFechas($ProgramacionesDto);
        if ($ProgramacionesDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertProgramaciones($ProgramacionesDto) {
        $ProgramacionesDto = $this->validarProgramaciones($ProgramacionesDto);
        $ProgramacionesController = new ProgramacionesController();
        $ProgramacionesDto = $ProgramacionesController->insertProgramaciones($ProgramacionesDto);
        if ($ProgramacionesDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionesDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateProgramaciones($ProgramacionesDto) {
        $ProgramacionesDto = $this->validarProgramaciones($ProgramacionesDto);
        $ProgramacionesController = new ProgramacionesController();
        $ProgramacionesDto = $ProgramacionesController->updateProgramaciones($ProgramacionesDto);
        if ($ProgramacionesDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteProgramaciones($ProgramacionesDto) {
        $ProgramacionesDto = $this->validarProgramaciones($ProgramacionesDto);
        $ProgramacionesController = new ProgramacionesController();
        $ProgramacionesDto = $ProgramacionesController->deleteProgramaciones($ProgramacionesDto);
        if ($ProgramacionesDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    public function agregarProgramacionMensual($ProgramacionesDto){
        $ProgramacionesDto = $this->validarProgramaciones($ProgramacionesDto);
        $ProgramacionesController = new ProgramacionesController();
        $ProgramacionesDto = $ProgramacionesController->agregarProgramacionMensual($ProgramacionesDto);
        return $ProgramacionesDto;
    }
    
    public function getPaginasProgramaciones($programacionesDto,$param) {
        $programacionesDto = $this->validarProgramaciones($programacionesDto);
        $ProgramacionesController = new ProgramacionesController();
        $programacionesDto = $ProgramacionesController->getPaginasProgramaciones($programacionesDto,$param);
        return $programacionesDto;
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

    //funcion que valida que los campos cvemes, Anio, CveJuzgado, fechaInicial y fechaFinal
    //no estén vacios
    public function validarCampos($ProgramacionesDto) {
        if ($ProgramacionesDto->getCveMes() == "") {
            return false;
        } else if ($ProgramacionesDto->getAnio() == "") {
            return false;
        } else if ($ProgramacionesDto->getCveJuzgado() == "") {
            return false;
        } else if ($ProgramacionesDto->getFechaInicial() == "") {
            return false;
        } else if ($ProgramacionesDto->getFechaFinal() == "") {
            return false;
        } else {
            return true;
        }
    }

}

@$idProgramacion = $_POST["idProgramacion"];
@$cveMes = $_POST["cveMes"];
@$anio = $_POST["anio"];
@$fechaInicial = $_POST["fechaInicial"];
@$fechaFinal = $_POST["fechaFinal"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$accion = $_POST["accion"];

$programacionesFacade = new ProgramacionesFacade();
$programacionesDto = new ProgramacionesDTO();

$programacionesDto->setidProgramacion($idProgramacion);
$programacionesDto->setCveMes($cveMes);
$programacionesDto->setAnio($anio);
$programacionesDto->setFechaInicial($fechaInicial);
$programacionesDto->setFechaFinal($fechaFinal);
$programacionesDto->setFechaRegistro($fechaRegistro);
$programacionesDto->setFechaActualizacion($fechaActualizacion);
$programacionesDto->setCveJuzgado($cveJuzgado);

if (($accion == "guardar") && ($idProgramacion == "")) {
    //validar que los campos no est�n vacios, si est�n vacios notificar al usuario
    $msg = array();
    if ($programacionesFacade->validarCampos($programacionesDto)) {
        $programacionesDto = $programacionesFacade->agregarProgramacionMensual($programacionesDto);
        echo $programacionesDto;
    } else {
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount" => "0", "text" => "TODOS LOS CAMPOS SON REQUERIDOS, FAVOR DE VERIFICAR!"));
    }
    
} else if (($accion == "guardar") && ($idProgramacion != "")) {
    //validar que los campos no est�n vacios, si est�n vacios notificar al usuario
    if ($programacionesFacade->validarCampos($programacionesDto)) {
        //creamos un nuevo dto con los datos anio, cveMes y cveJuzgado para
        //evitar que se registre m�s de una programaci�n para el juzgado en un mes y a�o
        //indicados por el usuario
        $dto = new ProgramacionesDTO();
        $dto->setAnio($programacionesDto->getAnio());
        $dto->setCveJuzgado($programacionesDto->getCveJuzgado());
        $dto->setCveMes($programacionesDto->getCveMes());

        $controller = new ProgramacionesController();
        $datos = $controller->selectProgramaciones($dto);
        //verificar si existe la programaci�n para el juzgado en el mes y a�o enviados por el usuario
        //si existe, enviar un mensaje al usuario indicando que los datos ya existen
        if (!$datos) {
            $programacionesDto = $programacionesFacade->updateProgramaciones($programacionesDto);
            echo $programacionesDto;
            //registrar en bitacora la modificacion del registro
            $bitacoramovimientosDto = new BitacoramovimientosDTO();
            $cveAccion = 16;
            //print_r($programacionesDto);
            $observaciones = "UPDATE TABLA: tblprogramaciones, idProgramacion: " . $idProgramacion;
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
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "YA EXISTE LA PROGRAMACION PARA EL MES Y JUZGADO SELECCIONADOS, NO SE PUEDE ACTUALIZAR EL REGISTRO"));
        }
    } else {
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount" => "0", "text" => "TODOS LOS CAMPOS SON REQUERIDOS, FAVOR DE VERIFICAR!"));
    }
} else if ($accion == "consultar") {
    @$param["paginacion"] = $_POST["paginacion"];
    @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
    @$param["pagina"] = $_POST["pagina"];
    $programacionesDto = $programacionesFacade->selectProgramaciones($programacionesDto, $param);
    echo $programacionesDto;
} else if (($accion == "baja") && ($idProgramacion != "")) {
    $banderaSalas = false;
    $banderaJuzgadores = false;
    //obtener los datos de la programacion seleccionada
    $programaciones = new ProgramacionesController();
    $camposProgramacion = new ProgramacionesDTO();
    $camposProgramacion->setidProgramacion($idProgramacion);
    $eliminar = $programaciones->eliminarProgramaciones($camposProgramacion);
    if($eliminar){
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount" => "1", "text" => "REGISTROS ELIMINADOS CORRECTAMENTE"));
    } else {
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ELIMINAR LOS REGISTROS"));
    }
    
} else if (($accion == "seleccionar") && ($idProgramacion != "")) {
    @$param["paginacion"] = $_POST["paginacion"];
    @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
    @$param["pagina"] = $_POST["pagina"];
    $programacionesDto = $programacionesFacade->selectProgramaciones($programacionesDto, $param);
    echo $programacionesDto;
} else if ($accion == "consultarFechas") {
    $programacionesDto = $programacionesFacade->selectFechasProgramaciones($programacionesDto);
    echo $programacionesDto;
} else if($accion == "bajaRegistros"){
    /*
     * Eliminar las programaciones seleccionadas por el usuario y los registros
     * relacionados (tblultimojuzgador, tblprogramacionjuzgadores, tblprogramacionsalas)
     */
    if(isset($_POST['eliminar']) && count($_POST['eliminar']) > 0){
        $bandera = false;
        for($n = 0; $n < count($_POST['eliminar']); $n++){
            $programacionesDto = new ProgramacionesDTO();
            $programacionesDto->setidProgramacion($_POST['eliminar'][$n]);
            $programacionesController = new ProgramacionesController();
            $eliminar = $programacionesController->eliminarProgramaciones($programacionesDto);
            if($eliminar){
                $bandera = true;
            } else {
                $bandera = false;
                break;
            }
        }
        if($bandera){
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "1", "text" => "REGISTROS ELIMINADOS CORRECTAMENTE"));
        } else {
            $jsonDto = new Encode_JSON();
            echo $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL ELIMINAR LOS REGISTROS"));
        }
    }
} else if ($accion == "getPaginas") {
    @$param["paginacion"] = true;
    @$param["cantidadPorPagina"] = $_POST["cantidadRegistros"];
    $programacionesDto = $programacionesFacade->getPaginasProgramaciones($programacionesDto,$param);
    echo $programacionesDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>