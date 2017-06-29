<?php

//solicitud de audiencia
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesaudiencias/SolicitudesaudienciasDAO.Class.php");
//cataudiencias
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cataudiencias/CataudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cataudiencias/CataudienciasDAO.Class.php");
//juzgados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");
//imputados
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadossolicitudes/ImputadossolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadossolicitudes/ImputadossolicitudesDAO.Class.php");
/*
 * controlador de solicitud de audiencia para enviar la solicitud
 */
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesaudiencias/SolicitudesaudienciasController.Class.php");
//webService
include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");


include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/distritos/DistritosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/distritos/DistritosDAO.Class.php");

date_default_timezone_set('America/Mexico_City');

class ResumensolicitudaudienciaController {

    public function peticionDefensorWebService($resultWebSerice) {
        $textError = "";
        ob_start();
        try {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_PORT => "9000",
                CURLOPT_URL => "http://sigedepu.idpedomex.gob.mx:9000/ws/solicitud/save",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "POST",
                CURLOPT_POSTFIELDS => $resultWebSerice,
                CURLOPT_HTTPHEADER => array(
                    "Authorization: Basic cmVjZXB0b3Iuc29saWNpdHVkLnBqZTo5Qmc4WjloYU5vTW9XMmlR",
                    "cache-control: no-cache",
                    "content-type: application/x-www-form-urlencoded"
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);
            json_decode($response);
            if (json_last_error() == JSON_ERROR_SYNTAX) {
                throw new Exception("{error:Los parametros no son correctos}");
            } else {
                $textError = $response;
            }
        } catch (Exception $e) {
//            ob_end_clean();
            $response = "{\"error\":\"" . $e->getMessage() . "\"}";
            $textError = $response;
        } /* finally { */
        $bitacoraWsDto = new BitacorawsDTO();
        $BitacoraWsRespDto = new BitacorawsDTO();
        $bitacoraWsDao = new BitacorawsDAO();
        $fechaRegistro = date("Y-m-d H:i:s");
        $bitacoraWsDto->setCveAccionws(16);
        $bitacoraWsDto->setObservacionesOrigen($resultWebSerice);
        json_decode($textError);
        if (json_last_error() == JSON_ERROR_SYNTAX) {
            $bitacoraWsDto->setDescEstatusBitacoraws("Error. Respuesta invalida - proceso desde cron");
            $bitacoraWsDto->setObservacionesDestino(base64_encode($textError));
            $bitacoraWsDto->setHrefOrigen("SOLICITUD A DEFENSORIA DE OFICIO REGRESO ALGO DIFERENTE A UN JSON");
        } else {
            $bitacoraWsDto->setDescEstatusBitacoraws("Respuesta valida - proceso desde cron");
            $bitacoraWsDto->setObservacionesDestino($textError);
            $bitacoraWsDto->setHrefOrigen("SOLICITUD A DEFENSORIA DE OFICIO REGRESO UN JSON VALIDO");
        }
        $bitacoraWsDto->setFechaRegistro($fechaRegistro);
        $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);
        /* } */
        return $response;
    }

    public function enviarSolicitudAudiencia() {

        $defensoresImputadosDto = new DefensoresimputadossolicitudesDTO();
        $defensoresImputadosDao = new DefensoresimputadossolicitudesDAO();


        $defensoresImputadosDto->setActivo("S");

        $defensoresImputadosDto = $defensoresImputadosDao->selectDefensoresimputadossolicitudes($defensoresImputadosDto, " AND cveTipoDefensor in (5,6) AND fechaRegistro > '2016-09-07 11:00:00'");

        if ($defensoresImputadosDto != "") {
            $imputadosSolicitudesDto = new ImputadossolicitudesDTO();
            $imputadosSolicitudesDao = new ImputadossolicitudesDAO();

            $audienciasDto = new AudienciasDTO();
            $audienciasDao = new AudienciasDAO();

            $solicitudesAudienciasDto = new SolicitudesaudienciasDTO();
            $solicitudesAudienciasDao = new SolicitudesaudienciasDAO();

            $defensoresimputadossolicitudesAuxDto = new DefensoresimputadossolicitudesDTO();
            $defensoresDao = new DefensoresimputadossolicitudesDAO();

            foreach ($defensoresImputadosDto as $defensorImputado) {
                $valido = false;
                if ($defensorImputado->getTelefono() != "") {
                    $aux = explode("|", $defensorImputado->getTelefono());
                    if (count($aux) <= 1) {
                        $valido = true;
                    }
                } else {
                    $valido = true;
                }
                if ($valido) {
                    $imputadosSolicitudesDto->setIdImputadoSolicitud($defensorImputado->getIdImputadoSolicitud());
                    $rsImputadosSolicitudes = $imputadosSolicitudesDao->selectImputadossolicitudes($imputadosSolicitudesDto);
                    if ($rsImputadosSolicitudes != "") {
                        $audienciasDto->setIdSolicitudAudiencia($rsImputadosSolicitudes[0]->getIdSolicitudAudiencia());
                        $audienciasDto->setActivo("S");
                        $rsAudienciasDto = $audienciasDao->selectAudiencias($audienciasDto);
                        if ($rsAudienciasDto != "") {
                            $solicitudesAudienciasDto->setIdSolicitudAudiencia($rsImputadosSolicitudes[0]->getIdSolicitudAudiencia());
                            $rsSolicitudesAudienciasDto = $solicitudesAudienciasDao->selectSolicitudesaudiencias($solicitudesAudienciasDto);
                            if ($rsSolicitudesAudienciasDto != "") {
                                $fechaSolicitud = date("d/m/Y");
                                $horaSolicitud = date("H:i:s");


                                if ($rsAudienciasDto[0]->getFechaInicial() != "") {
                                    $div = explode(" ", $rsAudienciasDto[0]->getFechaInicial());
                                    $fechaIn = $this->fecha($div[0]);
                                    $horaIn = $div[1];
                                } else {
                                    $fechaIn = "";
                                    $horaIn = "";
                                }

                                $juzgadosDto = new JuzgadosDTO();
                                $juzgadosDao = new JuzgadosDAO();

                                $juzgadosDto->setCveJuzgado($rsAudienciasDto[0]->getCveJuzgado());
                                $juzgadosAuxDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                                if ($juzgadosAuxDto != "") {
                                    $desJuzgado = utf8_encode($juzgadosAuxDto[0]->getDesJuzgado());
                                } else {
                                    $desJuzgado = "N/A";
                                }
                                /////Descripcion del distrito
                                $distritosDto = new DistritosDTO();
                                $distritosDao = new DistritosDAO();

                                $distritosDto->setCveDistrito($juzgadosAuxDto[0]->getCveDistrito());
                                $rsDistritosDto = $distritosDao->selectDistritos($distritosDto);
                                if ($rsDistritosDto != "") {
                                    $desDistrito = utf8_encode($rsDistritosDto[0]->getDesDistrito());
                                } else {
                                    $desDistrito = "";
                                }

                                if ($rsImputadosSolicitudes[0]->getCveTipoPersona() == 1) {
                                    $nombre = utf8_encode($rsImputadosSolicitudes[0]->getNombre());
                                    $paterno = utf8_encode($rsImputadosSolicitudes[0]->getPaterno());
                                    $materno = utf8_encode($rsImputadosSolicitudes[0]->getMaterno());
                                } else {
                                    $nombre = utf8_encode($rsImputadosSolicitudes[0]->getNombreMoral());
                                    $paterno = "";
                                    $materno = "";
                                }



                                if ($rsSolicitudesAudienciasDto[0]->getCveUsuario() == "7137") {
                                    $resultWebSerice = "idReferencia=" . $defensorImputado->getIdDefensorImputadoSolicitud() .
                                            "&tipoPeticion=nuevo" .
                                            "&nombreRemite=" . "pj" .
                                            "&procedencia=" . "PJE" .
                                            "&cargoSolicita=" . "" .
                                            "&fechaSolicitud=" . $fechaSolicitud .
                                            "&horaLlegada=" . $horaSolicitud .
                                            "&fechaAudiencia=" . $fechaIn .
                                            "&horaAudiencia=" . $horaIn .
                                            "&nombre=" . $nombre .
                                            "&paterno=" . $paterno .
                                            "&materno=" . $materno .
                                            "&NUC=" . $rsSolicitudesAudienciasDto[0]->getNuc() .
                                            "&distritoJudicial=" . $desDistrito .
                                            "&juzgado=" . $desJuzgado .
                                            "&curp=" . "" .
                                            "&sexo=" . "";
                                } else {
                                    $resultWebSerice = "idReferencia=" . $defensorImputado->getIdDefensorImputadoSolicitud() .
                                            "&tipoPeticion=nuevo" .
                                            "&nombreRemite=" . "ADMINISTRADOR DE SISTEMAS" .
                                            "&procedencia=" . "PJE" .
                                            "&cargoSolicita=" . 91 .
                                            "&fechaSolicitud=" . $fechaSolicitud .
                                            "&horaLlegada=" . $horaSolicitud .
                                            "&fechaAudiencia=" . $fechaIn .
                                            "&horaAudiencia=" . $horaIn .
                                            "&nombre=" . $nombre .
                                            "&paterno=" . $paterno .
                                            "&materno=" . $materno .
                                            "&NUC=" . $rsSolicitudesAudienciasDto[0]->getNuc() .
                                            "&distritoJudicial=" . $desDistrito .
                                            "&juzgado=" . $desJuzgado .
                                            "&curp=" . "" .
                                            "&sexo=" . "";
                                }


                                $respuestaWebService = ($this->peticionDefensorWebService($resultWebSerice));

                                if (json_last_error() == JSON_ERROR_NONE) {
                                    $rs = json_decode($respuestaWebService, true);
                                    if (array_key_exists("error", $rs)) {
                                        
                                    } else {
                                        $respuesta = "|";
                                        $respuestaWebService = json_decode($respuestaWebService);
                                        foreach ($respuestaWebService as $respuestaWeb) {
                                            $respuesta .= $respuestaWeb . "|";
                                        }

                                        $respuesta = substr($respuesta, 0, -1);
                                        $defensoresimputadossolicitudesAuxDto->setIdDefensorImputadoSolicitud($defensorImputado->getIdDefensorImputadoSolicitud());
                                        $defensoresimputadossolicitudesAuxDto->setTelefono(utf8_decode($respuesta));
                                        $rsDefensor = $defensoresDao->updateDefensoresimputadossolicitudesRSP($defensoresimputadossolicitudesAuxDto);
                                    }
                                }
                            }
                        }////
                    }
                }
            }
        }
    }

    private function fecha($fecha) {
        list($year, $mes, $dia) = explode("-", $fecha);
        return $dia . "/" . $mes . "/" . $year;
    }

    public function fechaHoraNormal($fecha) {
        list ($fechaAux, $hora) = explode(" ", $fecha);
        list($year, $mes, $dia) = explode("-", $fechaAux);

        return $dia . "/" . $mes . "/" . $year . " " . $hora;
    }

    public function fechaNormal($fecha) {
        list($year, $mes, $dia) = explode("-", $fecha);

        return $dia . "/" . $mes . "/" . $year;
    }

}

$resumensolicitudaudienciaController = new ResumensolicitudaudienciaController();
$rs = $resumensolicitudaudienciaController->enviarSolicitudAudiencia();
