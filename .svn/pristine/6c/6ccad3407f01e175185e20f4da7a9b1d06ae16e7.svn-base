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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cateos/CateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/cateos/CateosFirmaController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/cateos/ComprobanteCateosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/dtotojson/DtoToJson.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonEncod.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class CateosFirmaFacade {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarCateos($CateosDto) {
        $CateosDto->setidCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getidCateo(), "utf8") : strtoupper($CateosDto->getidCateo()))))));
        if ($this->esFecha($CateosDto->getidCateo())) {
            $CateosDto->setidCateo($this->fechaMysql($CateosDto->getidCateo()));
        }
        $CateosDto->setidSolicitudCateo(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getidSolicitudCateo(), "utf8") : strtoupper($CateosDto->getidSolicitudCateo()))))));
        if ($this->esFecha($CateosDto->getidSolicitudCateo())) {
            $CateosDto->setidSolicitudCateo($this->fechaMysql($CateosDto->getidSolicitudCateo()));
        }
        $CateosDto->setsolicitud(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getsolicitud(), "utf8") : strtoupper($CateosDto->getsolicitud()))))));
        if ($this->esFecha($CateosDto->getsolicitud())) {
            $CateosDto->setsolicitud($this->fechaMysql($CateosDto->getsolicitud()));
        }
        $CateosDto->setnegada(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getnegada(), "utf8") : strtoupper($CateosDto->getnegada()))))));
        if ($this->esFecha($CateosDto->getnegada())) {
            $CateosDto->setnegada($this->fechaMysql($CateosDto->getnegada()));
        }
        $CateosDto->setconcedida(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getconcedida(), "utf8") : strtoupper($CateosDto->getconcedida()))))));
        if ($this->esFecha($CateosDto->getconcedida())) {
            $CateosDto->setconcedida($this->fechaMysql($CateosDto->getconcedida()));
        }
        $CateosDto->setfechaPractica(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getfechaPractica(), "utf8") : strtoupper($CateosDto->getfechaPractica()))))));
        if ($this->esFecha($CateosDto->getfechaPractica())) {
            $CateosDto->setfechaPractica($this->fechaMysql($CateosDto->getfechaPractica()));
        }
        $CateosDto->sethoraPractica(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->gethoraPractica(), "utf8") : strtoupper($CateosDto->gethoraPractica()))))));
        if ($this->esFecha($CateosDto->gethoraPractica())) {
            $CateosDto->sethoraPractica($this->fechaMysql($CateosDto->gethoraPractica()));
        }
        $CateosDto->sethorasPractica(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->gethorasPractica(), "utf8") : strtoupper($CateosDto->gethorasPractica()))))));
        if ($this->esFecha($CateosDto->gethorasPractica())) {
            $CateosDto->sethorasPractica($this->fechaMysql($CateosDto->gethorasPractica()));
        }
        $CateosDto->setfechaInforme(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getfechaInforme(), "utf8") : strtoupper($CateosDto->getfechaInforme()))))));
        if ($this->esFecha($CateosDto->getfechaInforme())) {
            $CateosDto->setfechaInforme($this->fechaMysql($CateosDto->getfechaInforme()));
        }
        $CateosDto->sethoraInforme(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->gethoraInforme(), "utf8") : strtoupper($CateosDto->gethoraInforme()))))));
        if ($this->esFecha($CateosDto->gethoraInforme())) {
            $CateosDto->sethoraInforme($this->fechaMysql($CateosDto->gethoraInforme()));
        }
        $CateosDto->sethorasInforme(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->gethorasInforme(), "utf8") : strtoupper($CateosDto->gethorasInforme()))))));
        if ($this->esFecha($CateosDto->gethorasInforme())) {
            $CateosDto->sethorasInforme($this->fechaMysql($CateosDto->gethorasInforme()));
        }
        $CateosDto->setfechaRespuesta(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getfechaRespuesta(), "utf8") : strtoupper($CateosDto->getfechaRespuesta()))))));
        if ($this->esFecha($CateosDto->getfechaRespuesta())) {
            $CateosDto->setfechaRespuesta($this->fechaMysql($CateosDto->getfechaRespuesta()));
        }
        $CateosDto->setqr(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getqr(), "utf8") : strtoupper($CateosDto->getqr()))))));
        if ($this->esFecha($CateosDto->getqr())) {
            $CateosDto->setqr($this->fechaMysql($CateosDto->getqr()));
        }
        $CateosDto->setfirmaDigital(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getfirmaDigital(), "utf8") : strtoupper($CateosDto->getfirmaDigital()))))));
        if ($this->esFecha($CateosDto->getfirmaDigital())) {
            $CateosDto->setfirmaDigital($this->fechaMysql($CateosDto->getfirmaDigital()));
        }
        $CateosDto->setselloDigital(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getselloDigital(), "utf8") : strtoupper($CateosDto->getselloDigital()))))));
        if ($this->esFecha($CateosDto->getselloDigital())) {
            $CateosDto->setselloDigital($this->fechaMysql($CateosDto->getselloDigital()));
        }
        $CateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getfechaRegistro(), "utf8") : strtoupper($CateosDto->getfechaRegistro()))))));
        if ($this->esFecha($CateosDto->getfechaRegistro())) {
            $CateosDto->setfechaRegistro($this->fechaMysql($CateosDto->getfechaRegistro()));
        }
        $CateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getfechaActualizacion(), "utf8") : strtoupper($CateosDto->getfechaActualizacion()))))));
        if ($this->esFecha($CateosDto->getfechaActualizacion())) {
            $CateosDto->setfechaActualizacion($this->fechaMysql($CateosDto->getfechaActualizacion()));
        }
        $CateosDto->setemail(strtoupper(str_ireplace("'", "", trim(utf8_decode((phpversion() <= 5.5) ? mb_strtoupper($CateosDto->getemail(), "utf8") : strtoupper($CateosDto->getemail()))))));
        if ($this->esFecha($CateosDto->getemail())) {
            $CateosDto->setemail($this->fechaMysql($CateosDto->getemail()));
        }
        return $CateosDto;
    }

    public function selectCateos($CateosDto) {
        $CateosDto = $this->validarCateos($CateosDto);
        $CateosFirmaController = new CateosFirmaController();
        $CateosDto = $CateosFirmaController->selectCateos($CateosDto);
        if ($CateosDto != "") {
            $dtoToJson = new DtoToJson($CateosDto);
            return $dtoToJson->toJson("RESULTADOS DE LA CONSULTA");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "SIN RESULTADOS A MOSTRAR"));
    }

    public function insertCateos($param = "") {
        $CateosFirmaController = new CateosFirmaController();
        return $CateosDto = $CateosFirmaController->insertRespuestaCateo($param);
        /* $CateosDto = $this->validarCateos($CateosDto);
          $CateosFirmaController = new CateosFirmaController();
          $CateosDto = $CateosFirmaController->insertCateos($CateosDto);
          if ($CateosDto != "") {
          $dtoToJson = new DtoToJson($CateosDto);
          return $dtoToJson->toJson("REGISTRO REALIZADO DE FORMA CORRECTA");
          }
          $jsonDto = new Encode_JSON();
          return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL REGISTRO")); */
    }

    public function updateCateos($CateosDto) {
        $CateosDto = $this->validarCateos($CateosDto);
        $CateosFirmaController = new CateosFirmaController();
        $CateosDto = $CateosFirmaController->updateCateos($CateosDto);
        if ($CateosDto != "") {
            $dtoToJson = new DtoToJson($CateosDto);
            return $dtoToJson->toJson("REGISTRO ACTUALIZADO");
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR LA ACTUALIZACION"));
    }

    public function deleteCateos($CateosDto) {
        $CateosDto = $this->validarCateos($CateosDto);
        $CateosFirmaController = new CateosFirmaController();
        $CateosDto = $CateosFirmaController->deleteCateos($CateosDto);
        if ($CateosDto == true) {
            $jsonDto = new Encode_JSON();
            return $jsonDto->encode(array("totalCount" => "0", "text" => "REGISTRO ELIMINADO DE FORMA CORRECTA"));
        }
        $jsonDto = new Encode_JSON();
        return $jsonDto->encode(array("totalCount" => "0", "text" => "OCURRIO UN ERROR AL REALIZAR EL LA BAJA"));
    }

    public function descargaRespuestaCateo($idCateo) {
        if ($idCateo != "" && $idCateo != "0") {
            $ComprobanteCateosController = new ComprobanteCateosController();
            $resultado = $ComprobanteCateosController->generaComprobante($idCateo);
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

    public function descargaSolicitudCateo($idCateo) {
        if ($idCateo != "" && $idCateo != "0") {
            $ComprobanteSolicitudescateosController = new ComprobanteCateosController();
            $resultado = $ComprobanteSolicitudescateosController->generaComprobante($idCateo);
            if ($resultado != "") {
                if (!$resultado["type"] == "OK") {
//                    #DESCARGA LA SOLICITUD GENERADA
//                    header("Content-disposition: attachment; filename=" . $resultado["fileName"]);
//                    header("Content-type: application/octet-stream");
//                    readfile("./../../../solicitudespdf/" . $resultado["file"]);
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

    public function getCateosPendientes() {
        $ctrCateos = new CateosFirmaController();
        $result = "";
        return $result = $ctrCateos->getCateosPendientes();
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
        $ctrCateos = new CateosFirmaController();
        $result = "";
        return $result = $ctrCateos->getInfoJuzgadorWS($idJuzgado);
    }

}

@$idCateo = $_POST["idCateo"];
@$idSolicitudCateo = $_POST["idSolicitudCateo"];
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

@$respuestaCateo = $_POST["respuestaCateo"];
@$personasArray = $_POST["personasArray"];
@$objetosArray = $_POST["objetosArray"];
@$detalleNegacion = $_POST["detalleNegacion"];
@$detalleResolucion = $_POST["detalleResolucion"];

$cateosFirmaFacade = new CateosFirmaFacade();
$cateosDto = new CateosDTO();

$cateosDto->setIdCateo($idCateo);
$cateosDto->setIdSolicitudCateo($idSolicitudCateo);
$cateosDto->setSolicitud($solicitud);
$cateosDto->setNegada($negada);
$cateosDto->setConcedida($concedida);
$cateosDto->setFechaPractica($fechaPractica);
$cateosDto->setHoraPractica($horaPractica);
$cateosDto->setHorasPractica($horasPractica);
$cateosDto->setFechaInforme($fechaInforme);
$cateosDto->setHoraInforme($horaInforme);
$cateosDto->setHorasInforme($horasInforme);
$cateosDto->setFechaRespuesta($fechaRespuesta);
$cateosDto->setQr($qr);
$cateosDto->setFirmaDigital($firmaDigital);
$cateosDto->setSelloDigital($selloDigital);
$cateosDto->setFechaRegistro($fechaRegistro);
$cateosDto->setFechaActualizacion($fechaActualizacion);
$cateosDto->setEmail($email);

if (($accion == "guardar") && ($idCateo == "")) {
    $cateosDto = $cateosFirmaFacade->insertCateos($cateosDto);
    echo $cateosDto;
} else if (($accion == "guardar") && ($idCateo != "")) {
    $cateosDto = $cateosFirmaFacade->updateCateos($cateosDto);
    echo $cateosDto;
} else if ($accion == "consultar") {
    $cateosDto = $cateosFirmaFacade->selectCateos($cateosDto);
    echo $cateosDto;
    exit;
} else if (($accion == "baja") && ($idCateo != "")) {
    $cateosDto = $cateosFirmaFacade->deleteCateos($cateosDto);
    echo $cateosDto;
} else if (($accion == "seleccionar") && ($idCateo != "")) {
    $cateosDto = $cateosFirmaFacade->selectCateos($cateosDto);
    echo $cateosDto;
} else if (($accion == "guardarCateos")) {
    /*
     * Paso 1: selecciona el cateo a contestar
     */
    $param = array();
    $param["idCateo"] = $idCateo;
    $param["idSolicitudCateo"] = $idSolicitudCateo;

    /*
     * Paso 2: informacion de la solicitud de cateo
     */
    #NO SE REALIZA CAPTURA DE INFORMACION

    /*
     * Paso 3: respuesta del juez
     */
    $param["respuestaCateo"] = $respuestaCateo;
    $param["personasArray"] = $personasArray;
    $param["objetosArray"] = $objetosArray;
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
    $cateosDto = $cateosFirmaFacade->insertCateos($param);
    echo json_encode($cateosDto);
} else if (($accion == "descargaSolicitudCateo")) {
    $solicitudescateosDto = $cateosFirmaFacade->descargaSolicitudCateo($idCateo);
    echo $solicitudescateosDto;
} else if ($action == "descargaRespuestaCateo") {
    echo $idCateo = $_GET['idCateo'];
    $cateosFirmaFacade->descargaRespuestaCateo($idCateo);
    exit;
} else if ($accion == "getCateosPendientes") {
    echo $cateosFirmaFacade->getCateosPendientes();
} else if ($accion == "getInfoJuzgadorWS") {
    $idJuzgado = $_POST["juzgado"];
    echo $cateosFirmaFacade->getInfoJuzgadorWS($idJuzgado);
}
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}