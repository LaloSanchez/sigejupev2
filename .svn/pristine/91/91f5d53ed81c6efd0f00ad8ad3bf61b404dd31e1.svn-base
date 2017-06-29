<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/videoaudiencias/VideoaudienciasController.Class.php");

    class VideoaudienciasFacade {

        private $proveedor;

        public function __construct() {
            
        }

        public function getConsultaVideoAudiencias($param) {
            if ($param != "") {
                $videoAudienciasController = new VideoaudienciasController();
                return $videoAudienciasController->getConsultaVideoAudiencias($param);
            } else {
                return json_encode(array("type" => "Error", "text" => "SELECCIONA UN RANGO DE FECHAS"));
            }
        }
        
        public function getConsultaVideoAudienciasGral($param) {
            if ($param != "") {
                $videoAudienciasController = new VideoaudienciasController();
                return $videoAudienciasController->getConsultaVideoAudienciasGral($param);
            } else {
                return json_encode(array("type" => "Error", "text" => "SELECCIONA UN RANGO DE FECHAS"));
            }
        }

        public function getVideoAudiencias($idAudiencia) {
            if ($idAudiencia != "") {
                $videoAudienciasController = new VideoaudienciasController();
                return $videoAudienciasController->getVideoAudiencias($idAudiencia);
            } else {
                return json_encode(array("type" => "Error", "text" => "NO SE ENCONTRO LA AUDIENCIA"));
            }
        }

        public function descargavideoaudiencia($idvideo) {
            if ($idvideo != "") {
                $videoAudienciasController = new VideoaudienciasController();
                return $videoAudienciasController->descargavideoaudiencia($idvideo);
            } else {
                return json_encode(array("type" => "Error", "text" => "NO SE ENCONTRO EL VIDEO DE LA AUDIENCIA"));
            }
        }

        public function generaStream($idAudienciaAuronix, $idVideo, $rutaVideo) {
            $videoAudienciasController = new VideoaudienciasController();
            return $videoAudienciasController->generaStream($idAudienciaAuronix, $idVideo, $rutaVideo);
        }

        public function descargavideoaudienciadownload($idvideo) {
            if ($idvideo != "") {
                $audiencias = array(
                    "0" => array(
                        "path" => "/usr/local/nginx/html/mobile/022516/CAUSA_225_16_08032016.mp4",
                        "name" => "CAUSA_225_16_08032016.mp4"
                    ),
                    "1" => array(
                        "path" => "/usr/local/nginx/html/mobile/117515/CAUSA_117515_09032016_vespertino.mp4",
                        "name" => "CAUSA_117515_09032016_vespertino.mp4"
                    ),
                    "2" => array(
                        "path" => "/usr/local/nginx/html/mobile/190314/CAUSA_1903_14_17022016_vespertino.mp4",
                        "name" => "CAUSA_1903_14_17022016_vespertino.mp4"
                    ),
                    "3" => array(
                        "path" => "/usr/local/nginx/html/mobile/220814/CAUSA_2208_14_09032016_vespertino.mp4",
                        "name" => "CAUSA_2208_14_09032016_vespertino.mp4"
                    ),
                );
                $videoDownload = $audiencias[$idvideo]["path"];
                $name = $audiencias[$idvideo]["name"];

                $pathToFile = $videoDownload;
                $actualFilename = $name;
                $documentMIME = "video/mp4";

                #$modules = apache_get_modules();
                // Otherwise, use the traditional PHP way..
//            header('Content-Type: ' . $documentMIME);
//            header('Content-Disposition: attachment; filename="' . $actualFilename . '"');
//

                $file = "original.pdf";
                $size = filesize($pathToFile);
                header('Content-type: ' . $documentMIME);
                header("Content-length: $size");
                header('Content-Disposition: attachment; filename="' . $actualFilename . '"');


                @ob_end_clean();
                @ob_end_flush();
                readfile($pathToFile);
                exit;
            } else {
                return json_encode(array("type" => "Error", "text" => "NO SE ENCONTRO EL VIDEO DE LA AUDIENCIA"));
            }
        }

        public function fechaMysql($fecha) {
            list($dia, $mes, $year) = explode("-", $fecha);
            return $year . "-" . $mes . "-" . $dia;
        }

    }

    @$idAudiencia = $_POST["idAudiencia"];
    @$fechaInicial = $_POST["fechaInicial"];
    @$fechaFinal = $_POST["fechaFinal"];
    @$cmbJuzgados = $_POST["cmbJuzgados"];
    @$cmbTipoCarpeta = $_POST["cmbTipoCarpeta"];
    @$txtNumero = $_POST["txtNumero"];
    @$txtAnio = $_POST["txtAnio"];
    @$cmbJuez = $_POST["cmbJuez"];
    @$accion = $_POST["accion"];
    @$pag = $_POST["pag"];
    @$cantxPag = $_POST["cantxPag"];
    @$idvideo = $_POST["idvideo"];
    @$action = $_GET["action"];
// Creamos instancia de VideoaudienciasFcade
    $videoaudienciasFacade = new VideoaudienciasFacade();



    if ($accion == "consultar") {
        $param = array(
            "fechaInicial" => $fechaInicial,
            "fechaFinal" => $fechaFinal,
            "pag" => $pag,
            "paginacion" => true,
            "cantxPag" => $cantxPag
        );
        echo $videoaudienciasFacade->getConsultaVideoAudiencias($param);
    } else if ($accion == "consultarAudiencia") {
        if ($idAudiencia != "") {
            echo $videoaudienciasFacade->getVideoAudiencias($idAudiencia);
        } else {
            echo json_encode(array("type" => "Error", "NO SE ENCONTRO LA AUDIENCIA"));
        }
    } else if ($accion == "descargavideoaudiencia") {
        if ($idvideo != "") {
            echo $videoaudienciasFacade->descargavideoaudiencia($idvideo);
        } else {
            echo json_encode(array("type" => "Error", "NO SE ENCONTRO EL VIDEO DE LA AUDIENCIA"));
        }
    } else if ($action == "descargavideoaudienciadownload") {
        $idvideo = $_GET["idvideo"];
        $videoaudienciasFacade->descargavideoaudienciadownload($idvideo);
        exit;
    } else if ($accion == "generaStream") {
        $idVideo = $_POST["idVideo"];
        $rutaVideo = $_POST["rutaVideo"];
        $idAudienciaAuronix = $_POST["idAudienciaAuronix"];
        echo $videoaudienciasFacade->generaStream($idAudienciaAuronix, $idVideo, $rutaVideo);
    } else if ($accion == 'consultarGral') {
        $param = array(
            "fechaInicial" => $fechaInicial,
            "fechaFinal" => $fechaFinal,
            "cmbJuzgados" => $cmbJuzgados,
            "cmbTipoCarpeta" => $cmbTipoCarpeta,
            "txtNumero" => $txtNumero,
            "txtAnio" => $txtAnio,
            "cmbJuez" => $cmbJuez,
            "pag" => $pag,
            "paginacion" => true,
            "cantxPag" => $cantxPag
        );
        echo $videoaudienciasFacade->getConsultaVideoAudienciasGral($param);
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
