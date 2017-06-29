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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionjuzgadores/ProgramacionjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programaciones/ProgramacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programaciones/ProgramacionesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresjuzgados/JuzgadoresjuzgadosDTO.Class.php");

class ProgramacionjuzgadoresFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarProgramacionjuzgadores($ProgramacionjuzgadoresDto) {
        $ProgramacionjuzgadoresDto->setidProgramacionJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionjuzgadoresDto->getidProgramacionJuzgador(), "utf8") : strtoupper($ProgramacionjuzgadoresDto->getidProgramacionJuzgador()))))));
        if ($this->esFecha($ProgramacionjuzgadoresDto->getidProgramacionJuzgador())) {
            $ProgramacionjuzgadoresDto->setidProgramacionJuzgador($this->fechaMysql($ProgramacionjuzgadoresDto->getidProgramacionJuzgador()));
        }
        $ProgramacionjuzgadoresDto->setidJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionjuzgadoresDto->getidJuzgador(), "utf8") : strtoupper($ProgramacionjuzgadoresDto->getidJuzgador()))))));
        if ($this->esFecha($ProgramacionjuzgadoresDto->getidJuzgador())) {
            $ProgramacionjuzgadoresDto->setidJuzgador($this->fechaMysql($ProgramacionjuzgadoresDto->getidJuzgador()));
        }
        $ProgramacionjuzgadoresDto->setcveRolJuzgador(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionjuzgadoresDto->getcveRolJuzgador(), "utf8") : strtoupper($ProgramacionjuzgadoresDto->getcveRolJuzgador()))))));
        if ($this->esFecha($ProgramacionjuzgadoresDto->getcveRolJuzgador())) {
            $ProgramacionjuzgadoresDto->setcveRolJuzgador($this->fechaMysql($ProgramacionjuzgadoresDto->getcveRolJuzgador()));
        }
        $ProgramacionjuzgadoresDto->setfechaInicio(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionjuzgadoresDto->getfechaInicio(), "utf8") : strtoupper($ProgramacionjuzgadoresDto->getfechaInicio()))))));
        if ($this->esFecha($ProgramacionjuzgadoresDto->getfechaInicio())) {
            $ProgramacionjuzgadoresDto->setfechaInicio($this->fechaMysql($ProgramacionjuzgadoresDto->getfechaInicio()));
        }
        $ProgramacionjuzgadoresDto->setfechaFinal(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionjuzgadoresDto->getfechaFinal(), "utf8") : strtoupper($ProgramacionjuzgadoresDto->getfechaFinal()))))));
        if ($this->esFecha($ProgramacionjuzgadoresDto->getfechaFinal())) {
            $ProgramacionjuzgadoresDto->setfechaFinal($this->fechaMysql($ProgramacionjuzgadoresDto->getfechaFinal()));
        }
        $ProgramacionjuzgadoresDto->setactivo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionjuzgadoresDto->getactivo(), "utf8") : strtoupper($ProgramacionjuzgadoresDto->getactivo()))))));
        if ($this->esFecha($ProgramacionjuzgadoresDto->getactivo())) {
            $ProgramacionjuzgadoresDto->setactivo($this->fechaMysql($ProgramacionjuzgadoresDto->getactivo()));
        }
        $ProgramacionjuzgadoresDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionjuzgadoresDto->getfechaRegistro(), "utf8") : strtoupper($ProgramacionjuzgadoresDto->getfechaRegistro()))))));
        if ($this->esFecha($ProgramacionjuzgadoresDto->getfechaRegistro())) {
            $ProgramacionjuzgadoresDto->setfechaRegistro($this->fechaMysql($ProgramacionjuzgadoresDto->getfechaRegistro()));
        }
        $ProgramacionjuzgadoresDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionjuzgadoresDto->getfechaActualizacion(), "utf8") : strtoupper($ProgramacionjuzgadoresDto->getfechaActualizacion()))))));
        if ($this->esFecha($ProgramacionjuzgadoresDto->getfechaActualizacion())) {
            $ProgramacionjuzgadoresDto->setfechaActualizacion($this->fechaMysql($ProgramacionjuzgadoresDto->getfechaActualizacion()));
        }
        $ProgramacionjuzgadoresDto->setidProgramacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($ProgramacionjuzgadoresDto->getidProgramacion(), "utf8") : strtoupper($ProgramacionjuzgadoresDto->getidProgramacion()))))));
        if ($this->esFecha($ProgramacionjuzgadoresDto->getidProgramacion())) {
            $ProgramacionjuzgadoresDto->setidProgramacion($this->fechaMysql($ProgramacionjuzgadoresDto->getidProgramacion()));
        }
        return $ProgramacionjuzgadoresDto;
    }

    public function selectProgramacionjuzgadoresindividual($ProgramacionjuzgadoresDto) {
        $ProgramacionjuzgadoresDto = $this->validarProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        $ProgramacionjuzgadoresController = new ProgramacionjuzgadoresController();
        $ProgramacionjuzgadoresDto = $ProgramacionjuzgadoresController->selectProgramacionjuzgadoresindividual($ProgramacionjuzgadoresDto, $_SESSION['cveUsuarioSistema'], @$_POST['anio'], @$_POST['mes'], @$_POST['tipo'], @$_POST['fini'], @$_POST['ffin'], @$_SESSION['cveAdscripcion']);
        return json_encode($ProgramacionjuzgadoresDto);
    }

    public function selectProgramacionjuzgadores($ProgramacionjuzgadoresDto) {
        $ProgramacionjuzgadoresDto = $this->validarProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        $ProgramacionjuzgadoresController = new ProgramacionjuzgadoresController();
        $ProgramacionjuzgadoresDto = $ProgramacionjuzgadoresController->selectProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        if ($ProgramacionjuzgadoresDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionjuzgadoresDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertProgramacionjuzgadores($ProgramacionjuzgadoresDto) {
        $ProgramacionjuzgadoresDto = $this->validarProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        $ProgramacionjuzgadoresController = new ProgramacionjuzgadoresController();
        $ProgramacionjuzgadoresDto = $ProgramacionjuzgadoresController->insertProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        if ($ProgramacionjuzgadoresDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionjuzgadoresDto);
            return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO"));
    }

    public function updateProgramacionjuzgadores($ProgramacionjuzgadoresDto) {
        $ProgramacionjuzgadoresDto = $this->validarProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        $ProgramacionjuzgadoresController = new ProgramacionjuzgadoresController();
        $ProgramacionjuzgadoresDto = $ProgramacionjuzgadoresController->updateProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        if ($ProgramacionjuzgadoresDto != "") {
            $dtoToJson = new DtoToJson($ProgramacionjuzgadoresDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteProgramacionjuzgadores($ProgramacionjuzgadoresDto) {
        $ProgramacionjuzgadoresDto = $this->validarProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        $ProgramacionjuzgadoresController = new ProgramacionjuzgadoresController();
        $ProgramacionjuzgadoresDto = $ProgramacionjuzgadoresController->deleteProgramacionjuzgadores($ProgramacionjuzgadoresDto);
        if ($ProgramacionjuzgadoresDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function reporteProgramacionJuzgadores($programacionesDto, $programacionjuzgadoresDto) {
        $ProgramacionjuzgadoresController = new ProgramacionjuzgadoresController();
        $programacionJuzgadores = $ProgramacionjuzgadoresController->reporteProgramacionJuzgadores($programacionesDto, $programacionjuzgadoresDto);
        if (count($programacionJuzgadores) > 0) {
            $jsonDto = "{\"totalCount\":\"" . count($programacionJuzgadores) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($programacionJuzgadores as $dto) {
                if ($dto != "") {
                    $jsonDto.=json_encode($dto);
                    $jsonDto.= ",";
                }
            }
            $jsonDto = substr($jsonDto, 0, (strlen($jsonDto) - 1));
            $jsonDto.="]}";
            return $jsonDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE ENCONTRARON DATOS"));
    }

    public function listaJuzgadores($juzgadoresjuzgadosDto, $esSecretario = '') {
        $programacionJuzgadoresController = new ProgramacionjuzgadoresController();
        $juzgadores = $programacionJuzgadoresController->listaJuzgadores($juzgadoresjuzgadosDto, $esSecretario);
        if (count($juzgadores) > 0) {
            $jsonDto = "{\"totalCount\":\"" . count($juzgadores) . "\",\"mensaje\":\"RESULTADOS DE LA CONSULTA\",\"data\":[";
            foreach ($juzgadores as $dto) {
                $jsonDto.=json_encode($dto);
                $jsonDto.= ",";
            }
            $jsonDto = substr($jsonDto, 0, (strlen($jsonDto) - 1));
            $jsonDto.="]}";
            return $jsonDto;
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE ENCONTRARON DATOS"));
    }

    public function permutarJuzgadores($programacionjuzgadoresDto, $programacionesDto, $param) {
        $programacionjuzgadoresDto = $this->validarProgramacionjuzgadores($programacionjuzgadoresDto);
        $ProgramacionjuzgadoresController = new ProgramacionjuzgadoresController();
        $programacionjuzgadoresDto = $ProgramacionjuzgadoresController->permutarJuzgadores($programacionjuzgadoresDto, $programacionesDto, $param);
        return json_encode($programacionjuzgadoresDto);
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

@$idProgramacionJuzgador = $_POST["idProgramacionJuzgador"];
@$idJuzgador = $_POST["idJuzgador"];
@$cveRolJuzgador = $_POST["cveRolJuzgador"];
@$fechaInicio = $_POST["fechaInicio"];
@$fechaFinal = $_POST["fechaFinal"];
@$activo = $_POST["activo"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$idProgramacion = $_POST["idProgramacion"];
@$accion = $_POST["accion"];

$programacionjuzgadoresFacade = new ProgramacionjuzgadoresFacade();
$programacionjuzgadoresDto = new ProgramacionjuzgadoresDTO();

$programacionjuzgadoresDto->setIdProgramacionJuzgador($idProgramacionJuzgador);
$programacionjuzgadoresDto->setIdJuzgador($idJuzgador);
$programacionjuzgadoresDto->setCveRolJuzgador($cveRolJuzgador);
$programacionjuzgadoresDto->setFechaInicio($fechaInicio);
$programacionjuzgadoresDto->setFechaFinal($fechaFinal);
$programacionjuzgadoresDto->setActivo($activo);
$programacionjuzgadoresDto->setFechaRegistro($fechaRegistro);
$programacionjuzgadoresDto->setFechaActualizacion($fechaActualizacion);
$programacionjuzgadoresDto->setIdProgramacion($idProgramacion);

if (($accion == "guardar") && ($idProgramacionJuzgador == "")) {
    $programacionjuzgadoresDto = $programacionjuzgadoresFacade->insertProgramacionjuzgadores($programacionjuzgadoresDto);
    echo $programacionjuzgadoresDto;
} else if (($accion == "guardar") && ($idProgramacionJuzgador != "")) {
    $programacionjuzgadoresDto = $programacionjuzgadoresFacade->updateProgramacionjuzgadores($programacionjuzgadoresDto);
    echo $programacionjuzgadoresDto;
} else if ($accion == "consultar") {
    $programacionjuzgadoresDto = $programacionjuzgadoresFacade->selectProgramacionjuzgadores($programacionjuzgadoresDto);
    echo $programacionjuzgadoresDto;
} else if (($accion == "baja") && ($idProgramacionJuzgador != "")) {
    $programacionjuzgadoresDto = $programacionjuzgadoresFacade->deleteProgramacionjuzgadores($programacionjuzgadoresDto);
    echo $programacionjuzgadoresDto;
} else if (($accion == "seleccionar") && ($idProgramacionJuzgador != "")) {
    $programacionjuzgadoresDto = $programacionjuzgadoresFacade->selectProgramacionjuzgadores($programacionjuzgadoresDto);
    echo $programacionjuzgadoresDto;
} else if ($accion == "consultarProgramacionJuzgadores") {
    $programacionesDto = new ProgramacionesDTO();
    $programacionesDto->setAnio($_POST['anio']);
    $programacionesDto->setCveJuzgado($_POST['cveJuzgado']);
    $programacionesDto->setCveMes($_POST['cveMes']);
    $programacionjuzgadoresDto = new ProgramacionjuzgadoresDTO();
    if (isset($_POST['idJuzgador']) && strlen($_POST['idJuzgador']) > 0) {
        $programacionjuzgadoresDto->setIdJuzgador($_POST['idJuzgador']);
    }
    if (isset($_POST['cveRol']) && strlen($_POST['cveRol']) > 0) {
        $programacionjuzgadoresDto->setCveRolJuzgador($_POST['cveRol']);
    }
    if (isset($_POST['fechaInicio']) && strlen($_POST['fechaInicio']) > 0) {
        $fechaInicioTmp = explode("/", $_POST['fechaInicio']);
        $fechaInicio = $fechaInicioTmp[2] . "-" . $fechaInicioTmp[1] . "-" . $fechaInicioTmp[0];
        $programacionjuzgadoresDto->setFechaInicio($fechaInicio);
    }
    if (isset($_POST['fechaFin']) && strlen($_POST['fechaFin']) > 0) {
        $fechaFinTmp = explode("/", $_POST['fechaFin']);
        $fechaFin = $fechaFinTmp[2] . "-" . $fechaFinTmp[1] . "-" . $fechaFinTmp[0];
        $programacionjuzgadoresDto->setFechaFinal($fechaFin);
    }
    //$programacionJuzgadoresController = new ProgramacionjuzgadoresController();
    $datos = $programacionjuzgadoresFacade->reporteProgramacionJuzgadores($programacionesDto, $programacionjuzgadoresDto);
    echo $datos;
} else if ($accion == "exportar") {
    //echo "inicia";
    $content = $_POST['contenido'];
    $nombre = "../../../solicitudespdf/reporteProgramacionJuzgadores.pdf";
    require_once(dirname(__FILE__) . '/../../../tribunal/pdf/html2pdf.class.php');
    try {
        $pdf = new HTML2PDF('P', 'A4', 'fr');
        $pdf->WriteHTML($content);
        $pdf->Output($nombre, 'F');
        echo $nombre;
    } catch (HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
} else if ($accion == "listaJuzgadores") {
    $juzgadoresjuzgadosDto = new JuzgadoresjuzgadosDTO();
    $juzgadoresjuzgadosDto->setCveJuzgado($_POST['cveJuzgado']);
    $juzgadoresjuzgadosDto->setActivo($_POST['activo']);
    $esSecretario = isset($_POST["esSecretario"]) ? $_POST['esSecretario'] : '';
    $datos = $programacionjuzgadoresFacade->listaJuzgadores($juzgadoresjuzgadosDto, $esSecretario);
    echo $datos;
} else if ($accion == "guardarTodo") {
    $programacionesDto = new ProgramacionesDTO();
    $programacionesDto->setAnio($_POST['anio']);
    $programacionesDto->setCveJuzgado($_POST['cveJuzgado']);
    $programacionesDto->setCveMes($_POST['cveMes']);
    $inicio = explode("/", $_POST['fechaInicial']);
    $fin = explode("/", $_POST['fechaFinal']);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFin = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    if ($fechaInicio > $fechaFin) {
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE PUEDEN REGISTRAR LOS DATOS ENTRE LAS FECHAS SELECCIONADAS, FAVOR DE VERIFICAR"));
    } else {
        $fechaInicio .= " " . $_POST['horaInicial'];
        $fechaFin .= " " . $_POST['horaFinal'];
        $programacionJuzgadoresDto = new ProgramacionjuzgadoresDTO();
        $programacionJuzgadoresDto->setCveRolJuzgador($_POST['cveRolJuzgador']);
        $programacionJuzgadoresDto->setIdJuzgador($_POST['idJuzgador']);
        $programacionJuzgadoresDto->setFechaInicio($fechaInicio);
        $programacionJuzgadoresDto->setFechaFinal($fechaFin);
        $programacionJuzgadoresController = new ProgramacionjuzgadoresController();
        $programacionesDto = $programacionJuzgadoresController->altaProgramacionJuzgadoresManual($programacionesDto, $programacionJuzgadoresDto);
        echo $programacionesDto;
    }
} else if ($accion == "borrarTodo") {
    $programacionesDto = new ProgramacionesDTO();
    $programacionesDto->setAnio($_POST['anio']);
    $programacionesDto->setCveJuzgado($_POST['cveJuzgado']);
    $programacionesDto->setCveMes($_POST['cveMes']);
    $inicio = explode("/", $_POST['fechaInicial']);
    $fin = explode("/", $_POST['fechaFinal']);
    $fechaInicio = $inicio[2] . "-" . $inicio[1] . "-" . $inicio[0];
    $fechaFin = $fin[2] . "-" . $fin[1] . "-" . $fin[0];
    if ($fechaInicio > $fechaFin) {
        $jsonDto = new Encode_JSON();
        echo $jsonDto->encode(array("totalCount" => "0", "text" => "NO SE PUEDEN ELIMINAR LOS REGISTROS ENTRE LAS FECHAS SELECCIONADAS, FAVOR DE VERIFICAR"));
    } else {
        $programacionJuzgadoresDto = new ProgramacionjuzgadoresDTO();
        $programacionJuzgadoresDto->setCveRolJuzgador($_POST['cveRolJuzgador']);
        $programacionJuzgadoresDto->setIdJuzgador($_POST['idJuzgador']);
        $programacionJuzgadoresDto->setFechaInicio($fechaInicio);
        $programacionJuzgadoresDto->setFechaFinal($fechaFin);

        $programacionJuzgadoresController = new ProgramacionjuzgadoresController();
        $programacionesDto = $programacionJuzgadoresController->bajaProgramacionJuzgadoresManual($programacionesDto, $programacionJuzgadoresDto);
        echo $programacionesDto;
    }
} else if ($accion == "consulta_individual") {
    $programacionjuzgadoresDto = $programacionjuzgadoresFacade->selectProgramacionjuzgadoresindividual($programacionjuzgadoresDto);
    print_r($programacionjuzgadoresDto);
} else if ($accion == "permutarJuzgadores") {
    $programacionesDto = new ProgramacionesDTO();
    $programacionesDto->setCveJuzgado($_POST['cveJuzgado']);
    @$param['idJuzgadorDestino'] = $_POST['idJuzgadorDestino'];
    @$param['transferirAudiencias'] = $_POST['transferirAudiencias'];
    $programacionjuzgadoresDto = $programacionjuzgadoresFacade->permutarJuzgadores($programacionjuzgadoresDto, $programacionesDto, $param);
    echo $programacionjuzgadoresDto;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>