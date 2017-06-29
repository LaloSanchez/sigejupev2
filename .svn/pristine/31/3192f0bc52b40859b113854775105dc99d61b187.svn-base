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
                $fechaSql = $audiencia->getFechaRegistro();
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
        if ($idAudiencia != "") {
            $result = array();
//            $idJuzgado = $_SESSION["cveAdscripcion"];
            $error = false;

            #Obtenemos todas las audiencias
            $audienciasDto = new AudienciasDTO();
            $audienciasDao = new AudienciasDAO();

//            $audienciasDto->setCveJuzgado($idJuzgado);
            $audienciasDto->setIdAudiencia($idAudiencia);
//            print_r($audienciasDto);
            $audienciasDto = $audienciasDao->selectAudiencias($audienciasDto);
            /**
             * Consume WebService de auronix.
             * Se asume que regresa la siguiente lista de videos
             */
            $audienciasVideos = array(
                "audiencia" => "1",
                "videos" => array(
                    "0" => array(
                        "path" => "/var/www/html/sigejupe/mobile/CAUSA_225_16_FECHA_08_MAR_16.mp4",
                        "uuid" => "456789"
                    )
                )
            );

            // --> Se codifica el primer video de la lista
            $sourcepath = "/var/www/html/sigejupe/mobile/CAUSA_225_16_FECHA_08_MAR_16.mp4"; #$audienciasVideos["videos"][0]["path"];
            $uuid = $audienciasVideos["videos"][0]["uuid"];

            $transcode = new TranscodeClass($sourcepath, $uuid);
            $resultadostreaming = $transcode->transcode();

            if ($audienciasDto != "") {
                $result = $this->getInformation($audienciasDto);
                if ($audienciasDto[0]->getIdAudiencia() == "22299") {
                    $result = array_merge($result, array("videoslist" => $audienciasVideos));
                    $result = array_merge($result, array("streaming" => $resultadostreaming));
                } else {
                    $result = array_merge($result, array("videoslist" => array()));
                    $result = array_merge($result, array("streaming" => array()));
                }
            } else {
                $error = true;
            }

            if ($error) {
                $result["type"] = "Error";
                $result["text"] = "NO SE ENCONTRARON AUDIENCIAS";
            }
            return json_encode($result);
        } else {
            return json_encode(array("type" => "Error", "text" => "NO SE ENCONTRO LA AUDIENCIA"));
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

}
