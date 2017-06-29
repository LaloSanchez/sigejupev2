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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionapelacateos/ProgramacionapelacateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionapelacateos/ProgramacionapelacateosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class ProgramacionapelacateosFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarProgramacionapelacateos($ProgramacionapelacateosDto) {
        $ProgramacionapelacateosDto->setidProgramacionApelaCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionapelacateosDto->getidProgramacionApelaCateo(), "utf8") : strtoupper($ProgramacionapelacateosDto->getidProgramacionApelaCateo()))))));
        if ($this->esFecha($ProgramacionapelacateosDto->getidProgramacionApelaCateo())) {
            $ProgramacionapelacateosDto->setidProgramacionApelaCateo($this->fechaMysql($ProgramacionapelacateosDto->getidProgramacionApelaCateo()));
        }
        $ProgramacionapelacateosDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionapelacateosDto->getidJuzgador(), "utf8") : strtoupper($ProgramacionapelacateosDto->getidJuzgador()))))));
        if ($this->esFecha($ProgramacionapelacateosDto->getidJuzgador())) {
            $ProgramacionapelacateosDto->setidJuzgador($this->fechaMysql($ProgramacionapelacateosDto->getidJuzgador()));
        }
        $ProgramacionapelacateosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionapelacateosDto->getcveJuzgado(), "utf8") : strtoupper($ProgramacionapelacateosDto->getcveJuzgado()))))));
        if ($this->esFecha($ProgramacionapelacateosDto->getcveJuzgado())) {
            $ProgramacionapelacateosDto->setcveJuzgado($this->fechaMysql($ProgramacionapelacateosDto->getcveJuzgado()));
        }
        $ProgramacionapelacateosDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionapelacateosDto->getfechaInicio(), "utf8") : strtoupper($ProgramacionapelacateosDto->getfechaInicio()))))));
        if ($this->esFecha($ProgramacionapelacateosDto->getfechaInicio())) {
            $ProgramacionapelacateosDto->setfechaInicio($this->fechaMysql($ProgramacionapelacateosDto->getfechaInicio()));
        }
        $ProgramacionapelacateosDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionapelacateosDto->getfechaFinal(), "utf8") : strtoupper($ProgramacionapelacateosDto->getfechaFinal()))))));
        if ($this->esFecha($ProgramacionapelacateosDto->getfechaFinal())) {
            $ProgramacionapelacateosDto->setfechaFinal($this->fechaMysql($ProgramacionapelacateosDto->getfechaFinal()));
        }
        $ProgramacionapelacateosDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionapelacateosDto->getactivo(), "utf8") : strtoupper($ProgramacionapelacateosDto->getactivo()))))));
        if ($this->esFecha($ProgramacionapelacateosDto->getactivo())) {
            $ProgramacionapelacateosDto->setactivo($this->fechaMysql($ProgramacionapelacateosDto->getactivo()));
        }
        $ProgramacionapelacateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionapelacateosDto->getfechaRegistro(), "utf8") : strtoupper($ProgramacionapelacateosDto->getfechaRegistro()))))));
        if ($this->esFecha($ProgramacionapelacateosDto->getfechaRegistro())) {
            $ProgramacionapelacateosDto->setfechaRegistro($this->fechaMysql($ProgramacionapelacateosDto->getfechaRegistro()));
        }
        $ProgramacionapelacateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionapelacateosDto->getfechaActualizacion(), "utf8") : strtoupper($ProgramacionapelacateosDto->getfechaActualizacion()))))));
        if ($this->esFecha($ProgramacionapelacateosDto->getfechaActualizacion())) {
            $ProgramacionapelacateosDto->setfechaActualizacion($this->fechaMysql($ProgramacionapelacateosDto->getfechaActualizacion()));
        }
        return $ProgramacionapelacateosDto;
    }

    public function selectProgramacionapelacateos($ProgramacionapelacateosDto) {
        $ProgramacionapelacateosDto = $this->validarProgramacionapelacateos($ProgramacionapelacateosDto);
        $ProgramacionapelacateosController = new ProgramacionapelacateosController();
        $ProgramacionapelacateosDto = $ProgramacionapelacateosController->selectProgramacionapelacateos($ProgramacionapelacateosDto);
        if ($ProgramacionapelacateosDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionapelacateosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertProgramacionapelacateos($ProgramacionapelacateosDto) {
        $ProgramacionapelacateosDto = $this->validarProgramacionapelacateos($ProgramacionapelacateosDto);
        $ProgramacionapelacateosController = new ProgramacionapelacateosController();
        $ProgramacionapelacateosDto = $ProgramacionapelacateosController->insertProgramacionapelacateos($ProgramacionapelacateosDto);
        if ($ProgramacionapelacateosDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionapelacateosDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateProgramacionapelacateos($ProgramacionapelacateosDto) {
        $ProgramacionapelacateosDto = $this->validarProgramacionapelacateos($ProgramacionapelacateosDto);
        $ProgramacionapelacateosController = new ProgramacionapelacateosController();
        $ProgramacionapelacateosDto = $ProgramacionapelacateosController->updateProgramacionapelacateos($ProgramacionapelacateosDto);
        if ($ProgramacionapelacateosDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionapelacateosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteProgramacionapelacateos($ProgramacionapelacateosDto) {
        $ProgramacionapelacateosDto = $this->validarProgramacionapelacateos($ProgramacionapelacateosDto);
        $ProgramacionapelacateosController = new ProgramacionapelacateosController();
        $ProgramacionapelacateosDto = $ProgramacionapelacateosController->deleteProgramacionapelacateos($ProgramacionapelacateosDto);
        if ($ProgramacionapelacateosDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }
    
    public function selectProgramacionApelaCateosReporte($ProgramacionApelaCateosDto, $cveUsuario, $mes, $anio, $tipo) {
        $ProgramacionApelaCateosDto = $this->validarProgramacionapelacateos($ProgramacionApelaCateosDto);
        $ProgramacionApelaCateosController = new ProgramacionapelacateosController();
        $ProgramacionApelaCateosDto = $ProgramacionApelaCateosController->selectProgramacionApelaCateosReporte($ProgramacionApelaCateosDto, $cveUsuario, $mes, $anio, $tipo);
        if ($ProgramacionApelaCateosDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionApelaCateosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }
    
    public function reporteProgramacionApelaCateos($programacionApelaCateosDto, $porDistrito){
        //var_dump($programacionApelaCateosDto);
        $ProgramacionApelaCateosController = new ProgramacionapelacateosController();
        $programacionApelaCateosDto = $ProgramacionApelaCateosController->reporteProgramacionApelaCateos($programacionApelaCateosDto, $porDistrito);
        if(count($programacionApelaCateosDto) > 0){
            $jsonDto = "{\"totalCount\":\"" . count($programacionApelaCateosDto) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($programacionApelaCateosDto as $dto) {
                if($dto != ""){
                    $jsonDto.=json_encode($dto);
                    $jsonDto.= ",";
                }
            }
            $jsonDto = substr($jsonDto, 0, (strlen($jsonDto) - 1));
            $jsonDto.="]}";
            return $jsonDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE ENCONTRARON DATOS"));
    }
    
    public function modificarProgramacionApelaCateos($programacionApelaCateosDto){
        $programacionApelaCateosDto = $this->validarProgramacionapelacateos($programacionApelaCateosDto);
        $programacionApelaCateosController = new ProgramacionapelacateosController();
        $programacionApelaCateosDto = $programacionApelaCateosController->modificarProgramacionApelaCateos($programacionApelaCateosDto);
        return $programacionApelaCateosDto;
    }
    
    public function eliminarProgramacionApelaCateos($programacionApelaCateosDto) {
        $programacionApelaCateosDto = $this->validarProgramacionapelacateos($programacionApelaCateosDto);
        $ProgramacionApelacateosController = new ProgramacionapelacateosController();
        $programacionApelaCateosDto = $ProgramacionApelacateosController->eliminarProgramacionApelaCateos($programacionApelaCateosDto);
        return $programacionApelaCateosDto;
    }
    
    public function simuladorApelaCateos($programacionApelaCateosDto){
        $programacionApelaCateosDto = $this->validarProgramacionapelacateos($programacionApelaCateosDto);
        $ProgramacionApelaCateosController = new ProgramacionapelacateosController();
        $programacionApelaCateosDto = $ProgramacionApelaCateosController->simuladorApelaCateos($programacionApelaCateosDto);
        //var_dump($programacioncateosDto);
        if(count($programacionApelaCateosDto) > 0){
            $jsonDto = "{\"totalCount\":\"" . count($programacionApelaCateosDto) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($programacionApelaCateosDto as $dto) {
                if($dto != ""){
                    $jsonDto.=json_encode($dto);
                    $jsonDto.= ",";
                }
            }
            $jsonDto = substr($jsonDto, 0, (strlen($jsonDto) - 1));
            $jsonDto.="]}";
            return $jsonDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE ENCONTRARON DATOS"));
    }
    
    public function eliminarSeleccionados($programacionApelaCateosDto, $param) {
        $programacionApelaCateosDto = $this->validarProgramacionapelacateos($programacionApelaCateosDto);
        $ProgramacionApelacateosController = new ProgramacionapelacateosController();
        $programacionApelaCateosDto = $ProgramacionApelacateosController->eliminarSeleccionados($programacionApelaCateosDto, $param);
        return $programacionApelaCateosDto;
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

@$idProgramacionApelaCateo = $_POST["idProgramacionApelaCateo"];
@$idJuzgador = $_POST["idJuzgador"];
@$cveJuzgado = $_POST["cveJuzgado"];
@$fechaInicio = $_POST["fechaInicio"];
@$fechaFinal = $_POST["fechaFinal"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$accion = $_POST["accion"];

$programacionapelacateosFacade = new ProgramacionapelacateosFacade();
$programacionapelacateosDto = new ProgramacionapelacateosDTO();

$programacionapelacateosDto->setIdProgramacionApelaCateo($idProgramacionApelaCateo);
$programacionapelacateosDto->setIdJuzgador($idJuzgador);
$programacionapelacateosDto->setCveJuzgado($cveJuzgado);
$programacionapelacateosDto->setFechaInicio($fechaInicio);
$programacionapelacateosDto->setFechaFinal($fechaFinal);
$programacionapelacateosDto->setActivo($activo);
$programacionapelacateosDto->setFechaRegistro($fechaRegistro);
$programacionapelacateosDto->setFechaActualizacion($fechaActualizacion);

if (($accion == "guardar") && ($idProgramacionApelaCateo == "")) {
    $programacionapelacateosDto = $programacionapelacateosFacade->insertProgramacionapelacateos($programacionapelacateosDto);
    echo $programacionapelacateosDto;
} else if (($accion == "guardar") && ($idProgramacionApelaCateo != "")) {
    $programacionapelacateosDto = $programacionapelacateosFacade->updateProgramacionapelacateos($programacionapelacateosDto);
    echo $programacionapelacateosDto;
} else if ($accion == "consultar") {
    $programacionapelacateosDto = $programacionapelacateosFacade->selectProgramacionapelacateos($programacionapelacateosDto);
    echo $programacionapelacateosDto;
} else if (($accion == "baja") && ($idProgramacionApelaCateo != "")) {
    $programacionapelacateosDto = $programacionapelacateosFacade->deleteProgramacionapelacateos($programacionapelacateosDto);
    echo $programacionapelacateosDto;
} else if (($accion == "seleccionar") && ($idProgramacionApelaCateo != "")) {
    $programacionapelacateosDto = $programacionapelacateosFacade->selectProgramacionapelacateos($programacionapelacateosDto);
    echo $programacionapelacateosDto;
} else if ( ($accion == "guarda") && ($idProgramacionApelaCateo == "")) {
    
    $inicio = explode("/", $fechaInicio);
    $fin = explode("/", $fechaFinal);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFin = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    if($fechaInicio > $fechaFin){
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE PUEDEN REGISTRAR LOS DATOS ENTRE LAS FECHAS SELECCIONADAS, FAVOR DE VERIFICAR"));
    } else {
        $fechaInicio .= " " . @$_POST['horaInicial'];
        $fechaFin .= " " . @$_POST['horaFinal'];
        $programacionApelaCateosDto = new ProgramacionapelacateosDTO();
        $programacionApelaCateosDto->setIdJuzgador($idJuzgador);
        $programacionApelaCateosDto->setCveJuzgado($cveJuzgado);
        $programacionApelaCateosDto->setFechaInicio($fechaInicio);
        $programacionApelaCateosDto->setFechaFinal($fechaFin);
        $programacionApelaCateosDto->setActivo($activo);
        $programacionApelaCateosController = new ProgramacionapelacateosController();
        $programacionApelaCateosDto = $programacionApelaCateosController->programacionApelaCateosManual($programacionApelaCateosDto);
        echo $programacionApelaCateosDto;
    }
} else if ( ($accion == "guarda") && ($idProgramacionApelaCateo != "")) {
    $inicio = explode("/", $fechaInicio);
    $fin = explode("/", $fechaFinal);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFinal = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    $fechaInicio .= " " . @$_POST['horaInicial'];
    $fechaFinal .= " " . @$_POST['horaFinal'];
    $programacionapelacateosDto->setFechaInicio($fechaInicio);
    $programacionapelacateosDto->setFechaFinal($fechaFinal);
    $programacionapelacateosDto = $programacionapelacateosFacade->modificarProgramacionApelaCateos($programacionapelacateosDto);
    echo $programacionapelacateosDto;
} else if ( $accion == "consultarProgramacionApelaCateo" ) {
    $programacionesDto = new ProgramacionapelacateosDTO();
    $programacionesDto->setCveJuzgado($cveJuzgado);
    @$porDistrito = $_POST['porDistrito'];
    if( isset($_POST['idJuzgador']) && strlen($_POST['idJuzgador']) > 0 ){
        $programacionesDto->setIdJuzgador($_POST['idJuzgador']);
    }
    if( isset($_POST['fechaInicio']) && strlen($_POST['fechaInicio']) > 0 ){
        $fechaInicioTmp = explode("/", $_POST['fechaInicio']);
        $fechaInicio = $fechaInicioTmp[2] . "-" . $fechaInicioTmp[1] . "-" . $fechaInicioTmp[0];
        $programacionesDto->setFechaInicio($fechaInicio);
    }
    if( isset($_POST['fechaFin']) && strlen($_POST['fechaFin']) > 0 ){
        $fechaFinTmp = explode("/", $_POST['fechaFin']);
        $fechaFin = $fechaFinTmp[2] . "-" . $fechaFinTmp[1] . "-" . $fechaFinTmp[0];
        $programacionesDto->setFechaFinal($fechaFin);
    }
    $datos = $programacionapelacateosFacade->reporteProgramacionApelaCateos($programacionesDto, $porDistrito);
    echo $datos;
} else if ( ($accion == "eliminar") && ($idProgramacionApelaCateo == "") ) {
    $inicio = explode("/", $fechaInicio);
    $fin = explode("/", $fechaFinal);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFin = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    if($fechaInicio > $fechaFin){
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount"=>"0","text"=>"NO SE PUEDEN ELIMINAR LOS REGISTROS ENTRE LAS FECHAS SELECCIONADAS, FAVOR DE VERIFICAR"));
    } else {
        $programacionApelaCateosDto = new ProgramacionapelacateosDTO();
        $programacionApelaCateosDto->setCveJuzgado($cveJuzgado);
        $programacionApelaCateosDto->setIdJuzgador($idJuzgador);
        $programacionApelaCateosDto->setFechaInicio($fechaInicio);
        $programacionApelaCateosDto->setFechaFinal($fechaFin);

        $programacionApelaCateosController = new ProgramacionapelacateosController();
        $programacionApelaCateosDto = $programacionApelaCateosController->bajaProgramacionApelaCateosManual($programacionApelaCateosDto);
        echo $programacionApelaCateosDto;
    }
} else if ( ($accion == "eliminar") && ($idProgramacionApelaCateo != "") ) {
    $programacionapelacateosDto = $programacionapelacateosFacade->eliminarProgramacionApelaCateos($programacionapelacateosDto);
    echo $programacionapelacateosDto;
} else if ( $accion == "consultarSimulacionApelaCateos" ) {
    //var_dump($programacionapelacateosDto);
    $programacionapelacateosDto = $programacionapelacateosFacade->simuladorApelaCateos($programacionapelacateosDto);
    echo $programacionapelacateosDto;
} else if($accion == "exportar"){
    
    $content = $_POST['contenido'];
    //echo $content;
    $nombre = "../../../solicitudespdf/reporteProgramacionApelaCateos.pdf";
    require_once(dirname(__FILE__) . '/../../../tribunal/pdf/html2pdf.class.php');
    try
    {
        $pdf = new HTML2PDF('P', 'A4', 'fr');
        $pdf->WriteHTML($content);
        $pdf->Output($nombre, 'F');
        echo $nombre;
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
} else if($accion == "consultaApelaCateosReporte"){
    if(isset($_POST['tipo'])){
        $tipo = $_POST['tipo'];
        $cveUsuario = $_POST['cveUsuario'];
        $fini = $_POST['fini'];
        $ffin = $_POST['ffin'];
        $programacionapelacateosDto = $programacionapelacateosFacade->selectProgramacionApelaCateosReporte($programacionapelacateosDto, $cveUsuario, $fini, $ffin, $tipo);
        echo $programacionapelacateosDto;
    }else{
        $tipo = 1;
        $cveUsuario = $_POST['cveUsuario'];
        $mes = $_POST['mes'];
        $anio = $_POST['anio'];
        $programacionapelacateosDto = $programacionapelacateosFacade->selectProgramacionApelaCateosReporte($programacionapelacateosDto, $cveUsuario, $mes, $anio, $tipo);
        echo $programacionapelacateosDto;
    }
} else if ( $accion == "eliminarSeleccionados" ) {
    @$param['idProgramacionesApelaCateos'] = $_POST['idProgramacionesApelaCateos'];
    $programacionapelacateosDto = $programacionapelacateosFacade->eliminarSeleccionados($programacionapelacateosDto, $param);
    echo $programacionapelacateosDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>