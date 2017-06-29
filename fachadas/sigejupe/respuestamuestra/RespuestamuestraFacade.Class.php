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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/respuestamuestra/RespuestamuestraDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/respuestamuestra/RespuestamuestraController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/respuestamuestra/ComprobanteMuestrasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class RespuestamuestraFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarRespuestamuestra($RespuestamuestraDto) {
        $RespuestamuestraDto->setidMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getidMuestra(), "utf8") : strtoupper($RespuestamuestraDto->getidMuestra()))))));
        if ($this->esFecha($RespuestamuestraDto->getidMuestra())) {
            $RespuestamuestraDto->setidMuestra($this->fechaMysql($RespuestamuestraDto->getidMuestra()));
        }
        $RespuestamuestraDto->setidSolicitudMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getidSolicitudMuestra(), "utf8") : strtoupper($RespuestamuestraDto->getidSolicitudMuestra()))))));
        if ($this->esFecha($RespuestamuestraDto->getidSolicitudMuestra())) {
            $RespuestamuestraDto->setidSolicitudMuestra($this->fechaMysql($RespuestamuestraDto->getidSolicitudMuestra()));
        }
        $RespuestamuestraDto->setcveRespuestaSolicitudMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getcveRespuestaSolicitudMuestra(), "utf8") : strtoupper($RespuestamuestraDto->getcveRespuestaSolicitudMuestra()))))));
        if ($this->esFecha($RespuestamuestraDto->getcveRespuestaSolicitudMuestra())) {
            $RespuestamuestraDto->setcveRespuestaSolicitudMuestra($this->fechaMysql($RespuestamuestraDto->getcveRespuestaSolicitudMuestra()));
        }
        $RespuestamuestraDto->setnumeroMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getnumeroMuestra(), "utf8") : strtoupper($RespuestamuestraDto->getnumeroMuestra()))))));
        if ($this->esFecha($RespuestamuestraDto->getnumeroMuestra())) {
            $RespuestamuestraDto->setnumeroMuestra($this->fechaMysql($RespuestamuestraDto->getnumeroMuestra()));
        }
        $RespuestamuestraDto->setanioMuestra(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getanioMuestra(), "utf8") : strtoupper($RespuestamuestraDto->getanioMuestra()))))));
        if ($this->esFecha($RespuestamuestraDto->getanioMuestra())) {
            $RespuestamuestraDto->setanioMuestra($this->fechaMysql($RespuestamuestraDto->getanioMuestra()));
        }
        $RespuestamuestraDto->setsolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getsolicitud(), "utf8") : strtoupper($RespuestamuestraDto->getsolicitud()))))));
        if ($this->esFecha($RespuestamuestraDto->getsolicitud())) {
            $RespuestamuestraDto->setsolicitud($this->fechaMysql($RespuestamuestraDto->getsolicitud()));
        }
        $RespuestamuestraDto->setnegada(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getnegada(), "utf8") : strtoupper($RespuestamuestraDto->getnegada()))))));
        if ($this->esFecha($RespuestamuestraDto->getnegada())) {
            $RespuestamuestraDto->setnegada($this->fechaMysql($RespuestamuestraDto->getnegada()));
        }
        $RespuestamuestraDto->setconcedida(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getconcedida(), "utf8") : strtoupper($RespuestamuestraDto->getconcedida()))))));
        if ($this->esFecha($RespuestamuestraDto->getconcedida())) {
            $RespuestamuestraDto->setconcedida($this->fechaMysql($RespuestamuestraDto->getconcedida()));
        }
        $RespuestamuestraDto->setfechaPractica(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getfechaPractica(), "utf8") : strtoupper($RespuestamuestraDto->getfechaPractica()))))));
        if ($this->esFecha($RespuestamuestraDto->getfechaPractica())) {
            $RespuestamuestraDto->setfechaPractica($this->fechaMysql($RespuestamuestraDto->getfechaPractica()));
        }
        $RespuestamuestraDto->sethoraPractica(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->gethoraPractica(), "utf8") : strtoupper($RespuestamuestraDto->gethoraPractica()))))));
        if ($this->esFecha($RespuestamuestraDto->gethoraPractica())) {
            $RespuestamuestraDto->sethoraPractica($this->fechaMysql($RespuestamuestraDto->gethoraPractica()));
        }
        $RespuestamuestraDto->sethorasPractica(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->gethorasPractica(), "utf8") : strtoupper($RespuestamuestraDto->gethorasPractica()))))));
        if ($this->esFecha($RespuestamuestraDto->gethorasPractica())) {
            $RespuestamuestraDto->sethorasPractica($this->fechaMysql($RespuestamuestraDto->gethorasPractica()));
        }
        $RespuestamuestraDto->setfechaInforme(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getfechaInforme(), "utf8") : strtoupper($RespuestamuestraDto->getfechaInforme()))))));
        if ($this->esFecha($RespuestamuestraDto->getfechaInforme())) {
            $RespuestamuestraDto->setfechaInforme($this->fechaMysql($RespuestamuestraDto->getfechaInforme()));
        }
        $RespuestamuestraDto->sethoraInforme(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->gethoraInforme(), "utf8") : strtoupper($RespuestamuestraDto->gethoraInforme()))))));
        if ($this->esFecha($RespuestamuestraDto->gethoraInforme())) {
            $RespuestamuestraDto->sethoraInforme($this->fechaMysql($RespuestamuestraDto->gethoraInforme()));
        }
        $RespuestamuestraDto->sethorasInforme(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->gethorasInforme(), "utf8") : strtoupper($RespuestamuestraDto->gethorasInforme()))))));
        if ($this->esFecha($RespuestamuestraDto->gethorasInforme())) {
            $RespuestamuestraDto->sethorasInforme($this->fechaMysql($RespuestamuestraDto->gethorasInforme()));
        }
        $RespuestamuestraDto->setfechaRespuesta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getfechaRespuesta(), "utf8") : strtoupper($RespuestamuestraDto->getfechaRespuesta()))))));
        if ($this->esFecha($RespuestamuestraDto->getfechaRespuesta())) {
            $RespuestamuestraDto->setfechaRespuesta($this->fechaMysql($RespuestamuestraDto->getfechaRespuesta()));
        }
        $RespuestamuestraDto->setqr(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getqr(), "utf8") : strtoupper($RespuestamuestraDto->getqr()))))));
        if ($this->esFecha($RespuestamuestraDto->getqr())) {
            $RespuestamuestraDto->setqr($this->fechaMysql($RespuestamuestraDto->getqr()));
        }
        $RespuestamuestraDto->setfirmaDigital(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getfirmaDigital(), "utf8") : strtoupper($RespuestamuestraDto->getfirmaDigital()))))));
        if ($this->esFecha($RespuestamuestraDto->getfirmaDigital())) {
            $RespuestamuestraDto->setfirmaDigital($this->fechaMysql($RespuestamuestraDto->getfirmaDigital()));
        }
        $RespuestamuestraDto->setselloDigital(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getselloDigital(), "utf8") : strtoupper($RespuestamuestraDto->getselloDigital()))))));
        if ($this->esFecha($RespuestamuestraDto->getselloDigital())) {
            $RespuestamuestraDto->setselloDigital($this->fechaMysql($RespuestamuestraDto->getselloDigital()));
        }
        $RespuestamuestraDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getfechaRegistro(), "utf8") : strtoupper($RespuestamuestraDto->getfechaRegistro()))))));
        if ($this->esFecha($RespuestamuestraDto->getfechaRegistro())) {
            $RespuestamuestraDto->setfechaRegistro($this->fechaMysql($RespuestamuestraDto->getfechaRegistro()));
        }
        $RespuestamuestraDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getfechaActualizacion(), "utf8") : strtoupper($RespuestamuestraDto->getfechaActualizacion()))))));
        if ($this->esFecha($RespuestamuestraDto->getfechaActualizacion())) {
            $RespuestamuestraDto->setfechaActualizacion($this->fechaMysql($RespuestamuestraDto->getfechaActualizacion()));
        }
        $RespuestamuestraDto->setemail(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getemail(), "utf8") : strtoupper($RespuestamuestraDto->getemail()))))));
        if ($this->esFecha($RespuestamuestraDto->getemail())) {
            $RespuestamuestraDto->setemail($this->fechaMysql($RespuestamuestraDto->getemail()));
        }
        $RespuestamuestraDto->setmotivoCancelacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($RespuestamuestraDto->getmotivoCancelacion(), "utf8") : strtoupper($RespuestamuestraDto->getmotivoCancelacion()))))));
        if ($this->esFecha($RespuestamuestraDto->getmotivoCancelacion())) {
            $RespuestamuestraDto->setmotivoCancelacion($this->fechaMysql($RespuestamuestraDto->getmotivoCancelacion()));
        }
        return $RespuestamuestraDto;
    }

    public function selectRespuestamuestra($RespuestamuestraDto) {
        $RespuestamuestraDto = $this->validarRespuestamuestra($RespuestamuestraDto);
        $RespuestamuestraController = new RespuestamuestraController();
        $RespuestamuestraDto = $RespuestamuestraController->selectRespuestamuestra($RespuestamuestraDto);
        if ($RespuestamuestraDto != "") {
            $dtoToJson = new DtoToJson($RespuestamuestraDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertRespuestamuestra($param) {
        $controller = new RespuestamuestraController();
        return $controller->insertRespuestamuestra($param);
    }

    public function updateRespuestamuestra($RespuestamuestraDto) {
        $RespuestamuestraDto = $this->validarRespuestamuestra($RespuestamuestraDto);
        $RespuestamuestraController = new RespuestamuestraController();
        $RespuestamuestraDto = $RespuestamuestraController->updateRespuestamuestra($RespuestamuestraDto);
        if ($RespuestamuestraDto != "") {
            $dtoToJson = new DtoToJson($RespuestamuestraDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteRespuestamuestra($RespuestamuestraDto) {
        $RespuestamuestraDto = $this->validarRespuestamuestra($RespuestamuestraDto);
        $RespuestamuestraController = new RespuestamuestraController();
        $RespuestamuestraDto = $RespuestamuestraController->deleteRespuestamuestra($RespuestamuestraDto);
        if ($RespuestamuestraDto == true) {
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

    public function getInfoJuzgadorWS($idJuzgado) {
        $RespuestamuestraController = new RespuestamuestraController();
        $result = "";
        return $result = $RespuestamuestraController->getInfoJuzgadorWS($idJuzgado);
    }

    public function descargaSolicitudMuestra($idMuestra) {
        if ($idMuestra != "" && $idMuestra != "0") {
            $ComprobanteSolicitudesmuestrasController = new ComprobanteMuestrasController();
            $resultado = $ComprobanteSolicitudesmuestrasController->generaComprobante($idMuestra);
            if ($resultado != "") {
                if (!$resultado["type"] == "OK") {
                    $resultado = array("type" => "Error",
                        "text" => $resultado["text"],
                        "file" => "");
                }
            } else {
                $resultado = array("type" => "Error",
                    "text" => "ERROR AL GENERAL EL PDF DE LA  SOLICITUD",
                    "file" => "");
            }
        } else {
            $resultado = array("type" => "Error",
                "text" => "LA TOMA DE MUESTRA SELECCIONADA NO ES VALIDO",
                "file" => "");
        }
        return json_encode($resultado);
    }
    
    public function descargaRespuestaMuestra($idMuestra) {
        if ($idMuestra != "" && $idMuestra != "0") {
            $ComprobanteMuestrasController = new ComprobanteMuestrasController();
            $resultado = $ComprobanteMuestrasController->generaComprobante($idMuestra);
            if ($resultado != "") {
                if ($resultado["type"] == "OK") {
                    #DESCARGA LA SOLICITUD GENERADA
                    header("Content-disposition: attachment; filename=" . $resultado["file"]);
                    header("Content-type: application/octet-stream");
                    readfile("./../../../solicitudespdf/" . $resultado["file"]);
                } else {
                    $resultado = array("type" => "Error",
                        "text" => $resultado["text"],
                        "file" => "");
                }
            } else {
                $resultado = array("type" => "Error",
                    "text" => "ERROR AL GENERAL EL PDF DE LA  SOLICITUD",
                    "file" => "");
            }
        } else {
            $resultado = array("type" => "Error",
                "text" => "EL CATEO SELECCIONADO NO ES VALIDO",
                "file" => "");
        }
        return json_encode($resultado);
    }

}

@$idMuestra = $_POST["idMuestra"];
@$idSolicitudMuestra = $_POST["idSolicitudMuestra"];
@$cveRespuestaSolicitudMuestra = $_POST["cveRespuestaSolicitudMuestra"];
@$numeroMuestra = $_POST["numeroMuestra"];
@$anioMuestra = $_POST["anioMuestra"];
@$solicitud = $_POST["solicitud"];
@$negada = $_POST["negada"];
@$concedida = $_POST["concedida"];
@$fechaPractica = $_POST["fechaPractica"];
@$horaPractica = $_POST["horaPractica"];
@$horasPractica = $_POST["horasPractica"];
@$fechaInforme = $_POST["fechaInforme"];
@$horaInforme = $_POST["horaInforme"];
@$horasInforme = $_POST["horasInforme"];
@$fechaRespuesta = $_POST["fechaRespuesta"];
@$qr = $_POST["qr"];
@$firmaDigital = $_POST["firmaDigital"];
@$selloDigital = $_POST["selloDigital"];
@$fechaRegistro = $_POST["fechaRegistro"];
@$fechaActualizacion = $_POST["fechaActualizacion"];
@$email = $_POST["email"];
@$motivoCancelacion = $_POST["motivoCancelacion"];
@$accion = $_POST["accion"];
@$action = $_GET['action'];

$respuestamuestraFacade = new RespuestamuestraFacade();
$respuestamuestraDto = new RespuestamuestraDTO();

$respuestamuestraDto->setIdMuestra($idMuestra);
$respuestamuestraDto->setIdSolicitudMuestra($idSolicitudMuestra);
$respuestamuestraDto->setCveRespuestaSolicitudMuestra($cveRespuestaSolicitudMuestra);
$respuestamuestraDto->setNumeroMuestra($numeroMuestra);
$respuestamuestraDto->setAnioMuestra($anioMuestra);
$respuestamuestraDto->setSolicitud($solicitud);
$respuestamuestraDto->setNegada($negada);
$respuestamuestraDto->setConcedida($concedida);
$respuestamuestraDto->setFechaPractica($fechaPractica);
$respuestamuestraDto->setHoraPractica($horaPractica);
$respuestamuestraDto->setHorasPractica($horasPractica);
$respuestamuestraDto->setFechaInforme($fechaInforme);
$respuestamuestraDto->setHoraInforme($horaInforme);
$respuestamuestraDto->setHorasInforme($horasInforme);
$respuestamuestraDto->setFechaRespuesta($fechaRespuesta);
$respuestamuestraDto->setQr($qr);
$respuestamuestraDto->setFirmaDigital($firmaDigital);
$respuestamuestraDto->setSelloDigital($selloDigital);
$respuestamuestraDto->setFechaRegistro($fechaRegistro);
$respuestamuestraDto->setFechaActualizacion($fechaActualizacion);
$respuestamuestraDto->setEmail($email);
$respuestamuestraDto->setMotivoCancelacion($motivoCancelacion);

@$respuestaMuestra = $_POST["respuestaMuestra"];
@$imputadosArray = $_POST["imputadosArray"];
@$victimasArray = $_POST["victimasArray"];
@$tutoresArray = $_POST["tutoresArray"];
@$examensArray = $_POST["examenesArray"];
@$muestrasArray = $_POST["muestrasArray"];
@$detalleNegacion = $_POST["detalleNegacion"];
@$detalleResolucion = $_POST["detalleResolucion"];

if (($accion == "guardarMuestras")) {
    /*
     * Paso 1: seleccion la toma de muestra
     */
    $param = array();
    $param["idMuestra"] = $idMuestra;
    $param["idSolicitudMuestra"] = $idSolicitudMuestra;

    /*
     * Paso 2: informacion de la solicitud de muestra
     */
    #NO SE REALIZA CAPTURA DE INFORMACION

    /*
     * Paso 3: respuesta del juez
     */
    $param["respuestaMuestra"] = $respuestaMuestra;
    $param["imputadosArray"] = $imputadosArray;
    $param["victimasArray"] = $victimasArray;
    $param["tutoresArray"] = $tutoresArray;
    $param["examensArray"] = $examensArray;
    $param["muestrasArray"] = $muestrasArray;
    $param["fechaPractica"] = $fechaPractica;
    $param["horaPractica"] = $horaPractica;
    $param["horasPractica"] = $horasPractica;
    $param["fechaInforme"] = $fechaInforme;
    $param["horaInforme"] = $horaInforme;
    $param["horasInforme"] = $horasInforme;

    /*
     * Paso 4: detalle de la negacion(total o parcial)
     */
    $param["detalleNegacion"] = $detalleNegacion;


    /*
     * Paso 5: detalle de la resolucion (concedida, negada, parcial)
     */
    $param["detalleResolucion"] = $detalleResolucion;
    $muestraDto = $respuestamuestraFacade->insertRespuestamuestra($param);
    echo json_encode($muestraDto);
} else if ($accion == "getInfoJuzgadorWS") {
    $idJuzgado = $_POST["juzgado"];
    echo $respuestamuestraFacade->getInfoJuzgadorWS($idJuzgado);
} else if (($accion == "descargaSolicitudMuestra")) {
    $solicitudesmuestrasDto = $respuestamuestraFacade->descargaSolicitudMuestra($idMuestra);
    echo $solicitudesmuestrasDto;
} else if ($action == "descargaRespuestaMuestra") {
    $idMuestra = $_GET['idMuestra'];
    $respuestamuestraFacade->descargaRespuestaMuestra($idMuestra);
    exit;
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>