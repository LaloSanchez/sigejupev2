<?php

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/audiencias/AudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/audiencias/AudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/salas/SalasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/salas/SalasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatusaudiencias/EstatusaudienciasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatusaudiencias/EstatusaudienciasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/resumensolicitudaudiencia/ResumensolicitudaudienciaController.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/validacion/Validacion.Class.php");
include_once(dirname(__FILE__) . "/../../../2Helpers/TranscodeClass.php");

class VideoaudienciasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function getConsultaVideoAudiencias($param) {
        $result = array();
        $idJuzgado = $_SESSION["cveAdscripcion"];
        $error = false;

        #Obtenemos todas las audiencias
        $audienciasDto = new AudienciasDTO();
        $audienciasDao = new AudienciasDAO();

        $audienciasDto->setCveJuzgado($idJuzgado);
        $aux = " ORDER BY fechaInicial DESC";
        $audienciasDto = $audienciasDao->selectAudienciasPaginacion($audienciasDto, $param, $aux);

        if ($audienciasDto != "") {
            $result = $this->getInformation($audienciasDto);

            $audienciasDto = new AudienciasDTO();
            $audienciasDto->setCveJuzgado($idJuzgado);
            $param["fields"] = " count(idAudiencia) ";
            $audienciasDto = $audienciasDao->selectAudienciasPaginacion($audienciasDto, $param);
            $paginas = $this->getPaginas($audienciasDto, $param);
            $result["paginas"] = $paginas;
        } else {
            $error = true;
        }

        if ($error) {
            $result["type"] = "Error";
            $result["text"] = "NO SE ENCONTRARON AUDIENCIAS";
        }
        return json_encode($result);
    }

    private function getInformation($audienciasDto) {
        $result = array();
        if ($audienciasDto != "") {
            $audienciasArray = array();
            $count = 0;
            foreach ($audienciasDto as $audiencia) {
                $audienciasArray[$count]["idAudiencia"] = $audiencia->getIdAudiencia();
                $audienciasArray[$count]["numero"] = $audiencia->getNumero();
                $audienciasArray[$count]["anio"] = $audiencia->getAnio();
                $fechaSql = $audiencia->getFechaInicial();
                $fechaSql = explode(" ", $fechaSql);
                $audienciasArray[$count]["fecha"] = $this->fecha($fechaSql[0]) . " " . $fechaSql[1];

                if ($audiencia->getCveTipoCarpeta() == 1) {
                    $audienciasArray[$count]["numAuxiliar"] = $audiencia->getNumero() . "/" . $audiencia->getAnio();
                    $audienciasArray[$count]["numCausa"] = "";
                } else if ($audiencia->getCveTipoCarpeta() == 2 ||
                        $audiencia->getCveTipoCarpeta() == 3 || $audiencia->getCveTipoCarpeta() == 4) {
                    $audienciasArray[$count]["numCausa"] = $audiencia->getNumero() . "/" . $audiencia->getAnio();
                    $audienciasArray[$count]["numAuxiliar"] = "";
                }

                #OBTENEMOS LA SALA
                $salaDTO = new SalasDTO();
                $salaDTO->setActivo("S");
                $salaDTO->setCveSala($audiencia->getCveSala());
                $salaDAO = new SalasDAO();
                $salaDTO = $salaDAO->selectSalas($salaDTO);
                if ($salaDTO != "") {
                    $audienciasArray[$count]["sala"] = $salaDTO[0]->getDesSala();
                } else {
                    $audienciasArray[$count]["sala"] = "";
                }

                #OBTENEMOS EL ESTATUS DE LA AUDIENCIA
                $estatusDTO = new EstatusaudienciasDTO();
                $estatusDTO->setActivo("S");
                $estatusDTO->setCveEstatusAudiencia($audiencia->getCveEstatusAudiencia());
                $estatusDAO = new EstatusaudienciasDAO();
                $estatusDTO = $estatusDAO->selectEstatusaudiencias($estatusDTO);
                if ($estatusDTO != "") {
                    $audienciasArray[$count]["estatus"] = $estatusDTO[0]->getDesEstatusAudiencia();
                    $audienciasArray[$count]["idEstatus"] = $audiencia->getCveEstatusAudiencia();
                } else {
                    $audienciasArray[$count]["estatus"] = "";
                    $audienciasArray[$count]["idEstatus"] = $audiencia->getCveEstatusAudiencia();
                }

                #OBTENEMOS EL CATALOGO DE AUDIENCIA
                $catalogoDTO = new CataudienciasDTO();
                $catalogoDTO->setActivo("S");
                $catalogoDTO->setCveCatAudiencia($audiencia->getCveCatAudiencia());
                $catalogoDAO = new CataudienciasDAO();
                $catalogoDTO = $catalogoDAO->selectCataudiencias($catalogoDTO);
                if ($catalogoDTO != "") {
                    $audienciasArray[$count]["catalago"] = $catalogoDTO[0]->getDesCatAudiencia();
                } else {
                    $audienciasArray[$count]["catalago"] = "";
                }

                $count++;
            }

            $result["type"] = "OK";
            $result["data"] = $audienciasArray;
        } else {
            $result["type"] = "Error";
            $result["data"] = "NO SE ENCONTRARON AUDIENCIAS";
        }
        return $result;
    }

    public function getVideoAudiencias($idAudiencia) {
        $encontroError = false;
        $mensajeReturn = "";
        $arrayReturn = array("type" => "", "text" => "");

        #Obtenemos todas las audiencias
        $audienciasDto = new AudienciasDTO();
        $audienciasDao = new AudienciasDAO();

        $audienciasDto->setIdAudiencia($idAudiencia);
        $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto);
        if ($audienciasDto == "" || count($audienciasDto) == 0) {
            $encontroError = true;
            $mensajeReturn .= " NO SE ENCONTRO INFORMACION DE LA AUDIENCIA SOLICITADA";
        }

        /**
         * Consume WebService de auronix.
         * Se asume que regresa la siguiente lista de videos
         */
        if (!$encontroError) {
//            if ($audienciasDto[0]->getIdAudiencia() == "22299") {
//                $audienciasVideos = array(
//                    "0" => array(
//                        "rutaVideo" => "/database/html/sigejupev2/mobile/CAUSA_225_16_FECHA_08_MAR_16.mp4",
//                        "idVideoAudiencia" => "456789"
//                    ),
//                    "1" => array(
//                        "rutaVideo" => "/database/html/sigejupev2/mobile/CAUSA_225_16_FECHA_08_MAR_16_SEGUNDA_PARTE.mp4",
//                        "idVideoAudiencia" => "456790"
//                    )
//                );
//            } else {
            if ($audienciasDto[0]->getIdAudienciaAuronix() != "" && $audienciasDto[0]->getIdAudienciaAuronix() != "0") {
                #buscamos la ruta del juzgado de auronix
                $juzgadosDao = new JuzgadosDAO();
                $juzgadosDto = new JuzgadosDTO();
                $juzgadosDto->setCveJuzgado($audienciasDto[0]->getCveJuzgado());
                $juzgadosDto->setActivo("S");
                $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                if ($juzgadosDto != "" && count($juzgadosDto) != "") {
                    #buscamos las videoaudiencias de la audiencia en auronix
                    try {
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, $juzgadosDto[0]->getUrlAuronix() . "index.php?r=api/records&id=" . $audienciasDto[0]->getIdAudienciaAuronix() . "");
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        curl_setopt($ch, CURLOPT_USERPWD, "sigejupe:BsKfxi2REvKS");
                        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                        $outputJson = curl_exec($ch);
                        curl_close($ch);
                        $videoAudiencias = json_decode($outputJson, true);
                    } catch (Exception $e) {
                        $audienciasVideos = array();
                        echo "error al obtener informacion del WS de auronix";
                    }

                    if ($videoAudiencias != "" && count($videoAudiencias) > 0) {
                        $audienciasVideos = array();
                        foreach ($videoAudiencias["records"] as $videoAudiencia) {
                            $videoAudienciaArray = explode("/", $videoAudiencia);
                            $videoAudienciaNombre = explode(".", $videoAudienciaArray[1]);
                            $audienciasVideos[] = array(
                                "idAudienciaAuronix" => $videoAudienciaArray[0],
                                "idVideoAudiencia" => $videoAudienciaNombre[0],
                                "rutaVideo" => $videoAudiencia
                            );
                        }
//                        } else {
//                            echo "informacion del WS viene vacia o en otro formato";
//                            $audienciasVideos = array();
                    }
                } else {
                    $audienciasVideos = array();
//                    echo "no se encontro cveJuzgado";
                }
            } else {
                $audienciasVideos = array();
//                echo "no tiene IDAURONIX";
            }
//            }
        }

        if (!$encontroError) {
            $resumensolicitudaudienciaController = new ResumensolicitudaudienciaController();
            $param["idAudiencia"] = $idAudiencia;
            $result = array();
            $result = $resumensolicitudaudienciaController->consultaInfoAudiencia($param);
            $result = json_decode($result, true);
            $result = array_merge($result, array("videoslist" => $audienciasVideos));
            $arrayReturn = $result;
        }

        if ($encontroError) {
            $arrayReturn["type"] = "ERROR";
            $arrayReturn["text"] = $mensajeReturn;
        }

        return json_encode($arrayReturn);
    }

    public function generaStream($idAudienciaAuronix, $idVideo, $rutaVideo) {
        try {
//        $host = "http://dticursos.pjedomex.gob.mx/";
            ini_set("default_socket_timeout", 200);
            ini_set("soap.wsdl_cache_enabled", "0");
//            $generaStream = new SoapClient($host . "stream/StreamingScramble.wsdl");
            $generaStream = new SoapClient("http://187.210.39.117/stream/Streaming.php?wsdl");
            $generaStreamResult = $generaStream->codecStreaming($idAudienciaAuronix, $idVideo, $rutaVideo);
            return $generaStreamResult;
//            if (is_soap_fault($edificios)) {
//                trigger_error("SOAP Fault: (faultcode: {$edificios->faultcode}, faultstring: {$edificios->faultstring})", E_USER_ERROR);
//            }
        } catch (Exception $e) {
            print_r($e);
        }
    }

    private function getPaginas($dto, $param) {
        $paginas = array();
        $Pages = (int) $dto[0] / $param["cantxPag"];
        $restoPages = (int) $dto[0] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        if ($totPages > 1) {
            for ($index = 1; $index <= $totPages; $index++) {
                $paginas[] = utf8_encode($index);
            }
        }
        return $paginas;
    }

    public function descargavideoaudiencia($idvideo) {
        if ($idvideo != "") {
            $audiencias = array(
                "0" => "http://10.22.165.204:81/mobile/22516/CAUSA_225_16_FECHA_08_MAR_16.mp4",
                "1" => "http://10.22.165.204:81/mobile/2208/CAUSA_2208_14_FECHA_09_03_2016_(turno_vespertino).mp4",
                "2" => "http://10.22.165.204:81/mobile/190314/CAUSA_1903_14_FECHA_17_02_2016_(turno_vespertino).mp4",
                "3" => "http://10.22.165.204:81/mobile/17515/causa__1_jo_175_15_fecha_09_mar_16_(turno_vespertino).mp4",
            );
            $videoDownload = $audiencias[$idvideo];
            if ($videoDownload != "") {
                return json_encode(array("type" => "OK", "urlDownload" => urlencode($videoDownload), "idvideo" => $idvideo));
            } else {
                return json_encode(array("type" => "Error", "text" => "NO SE ENCONTRO EL VIDEO DE LA AUDIENCIA"));
            }
        } else {
            return json_encode(array("type" => "Error", "text" => "NO SE ENCONTRO EL VIDEO DE LA AUDIENCIA"));
        }
    }

    private function fecha($fecha) {
        list($year, $mes, $dia) = explode("-", $fecha);
        return $dia . "/" . $mes . "/" . $year;
    }

    public function getConsultaVideoAudienciasGral($param) {
        $result = array();
        $idJuzgado = $param['cmbJuzgados'];
        $error = false;

        #Obtenemos todas las audiencias
        $audienciasDto = new AudienciasDTO();
        $audienciasDao = new AudienciasDAO();

        $audienciasDto->setCveJuzgado($idJuzgado);
        $audienciasDto->setCveTipoCarpeta($param['cmbTipoCarpeta']);
        $audienciasDto->setNumero($param['txtNumero']);
        $audienciasDto->setAnio($param['txtAnio']);
        $audienciasDto->setCveEstatusAudiencia(2);
        $aux = " ORDER BY fechaInicial DESC";
        $audienciasDto = $audienciasDao->selectAudienciasPaginacionGral($audienciasDto, $param, $aux);

        if ($audienciasDto != "") {
            $result = $this->getInformation($audienciasDto);

            $audienciasDto = new AudienciasDTO();
            $audienciasDto->setCveJuzgado($idJuzgado);
            $audienciasDto->setCveTipoCarpeta($param['cmbTipoCarpeta']);
            $audienciasDto->setNumero($param['txtNumero']);
            $audienciasDto->setAnio($param['txtAnio']);
            $audienciasDto->setCveEstatusAudiencia(2);
            $param["fields"] = " count(idAudiencia) ";
            $audienciasDto = $audienciasDao->selectAudienciasPaginacionGral($audienciasDto, $param);
            $paginas = $this->getPaginas($audienciasDto, $param);
            $result["paginas"] = $paginas;
        } else {
            $error = true;
        }

        if ($error) {
            $result["type"] = "Error";
            $result["text"] = "NO SE ENCONTRARON AUDIENCIAS";
        }
        return json_encode($result);
    }

}
