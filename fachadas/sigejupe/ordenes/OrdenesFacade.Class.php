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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenes/OrdenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ordenes/OrdenesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ordenes/ComprobanteOrdenesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ordenes/OficioOrdenesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class OrdenesFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarOrdenes($OrdenesDto) {
        $OrdenesDto->setidOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getidOrden(), "utf8") : strtoupper($OrdenesDto->getidOrden()))))));
        if ($this->esFecha($OrdenesDto->getidOrden())) {
            $OrdenesDto->setidOrden($this->fechaMysql($OrdenesDto->getidOrden()));
        }
        $OrdenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getidSolicitudOrden(), "utf8") : strtoupper($OrdenesDto->getidSolicitudOrden()))))));
        if ($this->esFecha($OrdenesDto->getidSolicitudOrden())) {
            $OrdenesDto->setidSolicitudOrden($this->fechaMysql($OrdenesDto->getidSolicitudOrden()));
        }
        $OrdenesDto->setcveRespuestaSolicitudOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getcveRespuestaSolicitudOrden(), "utf8") : strtoupper($OrdenesDto->getcveRespuestaSolicitudOrden()))))));
        if ($this->esFecha($OrdenesDto->getcveRespuestaSolicitudOrden())) {
            $OrdenesDto->setcveRespuestaSolicitudOrden($this->fechaMysql($OrdenesDto->getcveRespuestaSolicitudOrden()));
        }
        $OrdenesDto->setnumeroOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getnumeroOrden(), "utf8") : strtoupper($OrdenesDto->getnumeroOrden()))))));
        if ($this->esFecha($OrdenesDto->getnumeroOrden())) {
            $OrdenesDto->setnumeroOrden($this->fechaMysql($OrdenesDto->getnumeroOrden()));
        }
        $OrdenesDto->setanioOrden(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getanioOrden(), "utf8") : strtoupper($OrdenesDto->getanioOrden()))))));
        if ($this->esFecha($OrdenesDto->getanioOrden())) {
            $OrdenesDto->setanioOrden($this->fechaMysql($OrdenesDto->getanioOrden()));
        }
        $OrdenesDto->setsolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getsolicitud(), "utf8") : strtoupper($OrdenesDto->getsolicitud()))))));
        if ($this->esFecha($OrdenesDto->getsolicitud())) {
            $OrdenesDto->setsolicitud($this->fechaMysql($OrdenesDto->getsolicitud()));
        }
        $OrdenesDto->setnegada(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getnegada(), "utf8") : strtoupper($OrdenesDto->getnegada()))))));
        if ($this->esFecha($OrdenesDto->getnegada())) {
            $OrdenesDto->setnegada($this->fechaMysql($OrdenesDto->getnegada()));
        }
        $OrdenesDto->setconcedida(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getconcedida(), "utf8") : strtoupper($OrdenesDto->getconcedida()))))));
        if ($this->esFecha($OrdenesDto->getconcedida())) {
            $OrdenesDto->setconcedida($this->fechaMysql($OrdenesDto->getconcedida()));
        }
        $OrdenesDto->setfechaPractica(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getfechaPractica(), "utf8") : strtoupper($OrdenesDto->getfechaPractica()))))));
        if ($this->esFecha($OrdenesDto->getfechaPractica())) {
            $OrdenesDto->setfechaPractica($this->fechaMysql($OrdenesDto->getfechaPractica()));
        }
        $OrdenesDto->sethoraPractica(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->gethoraPractica(), "utf8") : strtoupper($OrdenesDto->gethoraPractica()))))));
        if ($this->esFecha($OrdenesDto->gethoraPractica())) {
            $OrdenesDto->sethoraPractica($this->fechaMysql($OrdenesDto->gethoraPractica()));
        }
        $OrdenesDto->sethorasPractica(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->gethorasPractica(), "utf8") : strtoupper($OrdenesDto->gethorasPractica()))))));
        if ($this->esFecha($OrdenesDto->gethorasPractica())) {
            $OrdenesDto->sethorasPractica($this->fechaMysql($OrdenesDto->gethorasPractica()));
        }
        $OrdenesDto->setfechaInforme(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getfechaInforme(), "utf8") : strtoupper($OrdenesDto->getfechaInforme()))))));
        if ($this->esFecha($OrdenesDto->getfechaInforme())) {
            $OrdenesDto->setfechaInforme($this->fechaMysql($OrdenesDto->getfechaInforme()));
        }
        $OrdenesDto->sethoraInforme(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->gethoraInforme(), "utf8") : strtoupper($OrdenesDto->gethoraInforme()))))));
        if ($this->esFecha($OrdenesDto->gethoraInforme())) {
            $OrdenesDto->sethoraInforme($this->fechaMysql($OrdenesDto->gethoraInforme()));
        }
        $OrdenesDto->sethorasInforme(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->gethorasInforme(), "utf8") : strtoupper($OrdenesDto->gethorasInforme()))))));
        if ($this->esFecha($OrdenesDto->gethorasInforme())) {
            $OrdenesDto->sethorasInforme($this->fechaMysql($OrdenesDto->gethorasInforme()));
        }
        $OrdenesDto->setfechaRespuesta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getfechaRespuesta(), "utf8") : strtoupper($OrdenesDto->getfechaRespuesta()))))));
        if ($this->esFecha($OrdenesDto->getfechaRespuesta())) {
            $OrdenesDto->setfechaRespuesta($this->fechaMysql($OrdenesDto->getfechaRespuesta()));
        }
        $OrdenesDto->setqr(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getqr(), "utf8") : strtoupper($OrdenesDto->getqr()))))));
        if ($this->esFecha($OrdenesDto->getqr())) {
            $OrdenesDto->setqr($this->fechaMysql($OrdenesDto->getqr()));
        }
        $OrdenesDto->setfirmaDigital(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getfirmaDigital(), "utf8") : strtoupper($OrdenesDto->getfirmaDigital()))))));
        if ($this->esFecha($OrdenesDto->getfirmaDigital())) {
            $OrdenesDto->setfirmaDigital($this->fechaMysql($OrdenesDto->getfirmaDigital()));
        }
        $OrdenesDto->setselloDigital(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getselloDigital(), "utf8") : strtoupper($OrdenesDto->getselloDigital()))))));
        if ($this->esFecha($OrdenesDto->getselloDigital())) {
            $OrdenesDto->setselloDigital($this->fechaMysql($OrdenesDto->getselloDigital()));
        }
        $OrdenesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getfechaRegistro(), "utf8") : strtoupper($OrdenesDto->getfechaRegistro()))))));
        if ($this->esFecha($OrdenesDto->getfechaRegistro())) {
            $OrdenesDto->setfechaRegistro($this->fechaMysql($OrdenesDto->getfechaRegistro()));
        }
        $OrdenesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getfechaActualizacion(), "utf8") : strtoupper($OrdenesDto->getfechaActualizacion()))))));
        if ($this->esFecha($OrdenesDto->getfechaActualizacion())) {
            $OrdenesDto->setfechaActualizacion($this->fechaMysql($OrdenesDto->getfechaActualizacion()));
        }
        $OrdenesDto->setemail(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($OrdenesDto->getemail(), "utf8") : strtoupper($OrdenesDto->getemail()))))));
        if ($this->esFecha($OrdenesDto->getemail())) {
            $OrdenesDto->setemail($this->fechaMysql($OrdenesDto->getemail()));
        }
        return $OrdenesDto;
    }

    public function selectOrdenes($OrdenesDto) {
        $OrdenesDto = $this->validarOrdenes($OrdenesDto);
        $OrdenesController = new OrdenesController();
        $OrdenesDto = $OrdenesController->selectOrdenes($OrdenesDto);
        if ($OrdenesDto != "") {
            $dtoToJson = new DtoToJson($OrdenesDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertOrdenes($param) {
        $OrdenesController = new OrdenesController();
        return $ordenesDto = $OrdenesController->insertRespuestaOrden($param);
    }

    public function updateOrdenes($OrdenesDto) {
        $OrdenesDto = $this->validarOrdenes($OrdenesDto);
        $OrdenesController = new OrdenesController();
        $OrdenesDto = $OrdenesController->updateOrdenes($OrdenesDto);
        if ($OrdenesDto != "") {
            $dtoToJson = new DtoToJson($OrdenesDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteOrdenes($OrdenesDto) {
        $OrdenesDto = $this->validarOrdenes($OrdenesDto);
        $OrdenesController = new OrdenesController();
        $OrdenesDto = $OrdenesController->deleteOrdenes($OrdenesDto);
        if ($OrdenesDto == true) {
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

    public function descargaSolicitudOrden($idOrden) {
        if ($idOrden != "" && $idOrden != "0") {
            $resultado = array();
            if (isset($_GET["opcion"]) && $_GET["opcion"] == 'Oficio') {
                $comprobanteOficio = new OficioOrdenesController();
                $resultado = $comprobanteOficio->generaComprobante($idOrden);
            } else {
                $ComprobanteSolicitudesordenesController = new ComprobanteOrdenesController();
                $resultado = $ComprobanteSolicitudesordenesController->generaComprobante($idOrden);
            }
            if ($resultado != "") {
                if (!$resultado["type"] == "OK") {
//                    #DESCARGA LA SOLICITUD GENERADA
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
                "text" => "LA ORDEN DE APREHENSION SELECCIONADA NO ES VALIDO",
                "file" => "");
        }
        return json_encode($resultado);
    }

    public function descargaRespuestaOrden($idOrden) {
        if ($idOrden != "" && $idOrden != "0") {
            $resultado = array();
            if (isset($_GET["opcion"]) && $_GET["opcion"] == 'Oficio') {
                $comprobanteOficio = new OficioOrdenesController();
                $resultado = $comprobanteOficio->generaComprobante($idOrden);
            } else {
                $ComprobanteOrdenesController = new ComprobanteOrdenesController();
                $resultado = $ComprobanteOrdenesController->generaComprobante($idOrden);
            }
            if ($resultado != "") {
                if ($resultado["type"] == "OK") {
                    #DESCARGA LA SOLICITUD GENERADA
                    header("Content-disposition: attachment; filename=" . $resultado["fileName"]);
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
                "text" => "LA ORDEN DE APREHENSION SELECCIONADA NO ES VALIDO",
                "file" => "");
        }
        return json_encode($resultado);
    }

    public function getCateosPendientes() {
        $ctrOrdenes = new OrdenesController();
        $result = "";
        return $result = $ctrOrdenes->getOrdenesPendientes();
    }

    public function getInfoJuzgadorWS($idJuzgado) {
        $ctrOrdenes = new OrdenesController();
        $result = "";
        return $result = $ctrOrdenes->getInfoJuzgadorWS($idJuzgado);
    }

}

@$idOrden = $_POST["idOrden"];
@$idSolicitudOrden = $_POST["idSolicitudOrden"];
@$cveRespuestaSolicitudOrden = $_POST["cveRespuestaSolicitudOrden"];
@$numeroOrden = $_POST["numeroOrden"];
@$anioOrden = $_POST["anioOrden"];
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
@$accion = $_POST["accion"];
@$action = $_GET['action'];

@$respuestaOrden = $_POST["respuestaOrden"];
@$personasArray = $_POST["personasArray"];
@$detalleNegacion = $_POST["detalleNegacion"];
@$detalleResolucion = $_POST["detalleResolucion"];
@$detalleOficio = $_POST["detalleOficio"];

$ordenesFacade = new OrdenesFacade();
$ordenesDto = new OrdenesDTO();

$ordenesDto->setIdOrden($idOrden);
$ordenesDto->setIdSolicitudOrden($idSolicitudOrden);
$ordenesDto->setCveRespuestaSolicitudOrden($cveRespuestaSolicitudOrden);
$ordenesDto->setNumeroOrden($numeroOrden);
$ordenesDto->setAnioOrden($anioOrden);
$ordenesDto->setSolicitud($solicitud);
$ordenesDto->setNegada($negada);
$ordenesDto->setConcedida($concedida);
$ordenesDto->setFechaPractica($fechaPractica);
$ordenesDto->setHoraPractica($horaPractica);
$ordenesDto->setHorasPractica($horasPractica);
$ordenesDto->setFechaInforme($fechaInforme);
$ordenesDto->setHoraInforme($horaInforme);
$ordenesDto->setHorasInforme($horasInforme);
$ordenesDto->setFechaRespuesta($fechaRespuesta);
$ordenesDto->setQr($qr);
$ordenesDto->setFirmaDigital($firmaDigital);
$ordenesDto->setSelloDigital($selloDigital);
$ordenesDto->setFechaRegistro($fechaRegistro);
$ordenesDto->setFechaActualizacion($fechaActualizacion);
$ordenesDto->setEmail($email);

if (isset($_SESSION["cveUsuarioSistema"])) {
    if (($accion == "guardar") && ($idOrden == "")) {
        $ordenesDto = $ordenesFacade->insertOrdenes($ordenesDto);
        echo $ordenesDto;
    } else if (($accion == "guardar") && ($idOrden != "")) {
        $ordenesDto = $ordenesFacade->updateOrdenes($ordenesDto);
        echo $ordenesDto;
    } else if ($accion == "consultar") {
        $ordenesDto = $ordenesFacade->selectOrdenes($ordenesDto);
        echo $ordenesDto;
    } else if (($accion == "baja") && ($idOrden != "")) {
        $ordenesDto = $ordenesFacade->deleteOrdenes($ordenesDto);
        echo $ordenesDto;
    } else if (($accion == "seleccionar") && ($idOrden != "")) {
        $ordenesDto = $ordenesFacade->selectOrdenes($ordenesDto);
        echo $ordenesDto;
    } else if (($accion == "guardarOrdenes")) {
        /*
         * Paso 1: selecciona el cateo a contestar
         */
        $param = array();
        $param["idOrden"] = $idOrden;
        $param["idSolicitudOrden"] = $idSolicitudOrden;

        /*
         * Paso 2: informacion de la solicitud de cateo
         */
        #NO SE REALIZA CAPTURA DE INFORMACION

        /*
         * Paso 3: respuesta del juez
         */
        $param["respuestaOrden"] = $respuestaOrden;
        $param["personasArray"] = $personasArray;
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
        $param["detalleOficio"] = $detalleOficio;
        $ordenesDto = $ordenesFacade->insertOrdenes($param);
        echo json_encode($ordenesDto);
    } else if (($accion == "descargaSolicitudOrden")) {
        $solicitudescateosDto = $ordenesFacade->descargaSolicitudOrden($idOrden);
        echo $solicitudescateosDto;
    } else if ($action == "descargaRespuestaOrden") {
        $idOrden = $_GET['idOrden'];
        $ordenesFacade->descargaRespuestaOrden($idOrden);
        exit;
    } else if ($accion == "getCateosPendientes") {
        echo $ordenesFacade->getCateosPendientes();
    } else if ($accion == "getInfoJuzgadorWS") {
        $idJuzgado = $_POST["juzgado"];
        echo $ordenesFacade->getInfoJuzgadorWS($idJuzgado);
    }
} else {
    echo json_encode(array("type" => "Error", "text" => "SU SESSION A FINALIZADO, INGRESE NUEVAMENTE AL SISTEMA"));
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
?>