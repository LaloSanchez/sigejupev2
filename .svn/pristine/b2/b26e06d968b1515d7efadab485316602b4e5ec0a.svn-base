<?php

date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");

class SolicitudesCateosServer {

    public function __construct() {
        
    }

    public function insertSolicitudCateo($u, $p, $jsonSolicitudCateo) {
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudescateos/SolicitudescateosController.Class.php");
        #USUARIO CONTRASEÑA: 3lectronic0_Poder2014--2014Poder_3lectronic0
//        if ($this->isValid(sha1($u), sha1($p))) {            
//        } else {
        if ($jsonSolicitudCateo != "") {
            if ($this->isJSON($jsonSolicitudCateo)) {
                $arraySolicitudCateo = json_decode($jsonSolicitudCateo, true);

                $errorGeneral = false;
                $mensajeError = "";

                #VALIDAMOS QUE CONTENGA LOS CAMPOS OBLIGATORIOS EN LA ESTRUCTURA DEL JSON Y VALIDAMOS QUE LA INFORMACION DEL CAMPO SEA VALIDA
                $mensajeErrorArray = " No se encontraron los siguientes campos en el JSON enviado: ";
                $mensajeErrorArray = " Los siguientes campos no son validos por venir vacios o en cero: ";

                if (!array_key_exists("caseProceedingId", $arraySolicitudCateo)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " caseProceedingId, ";
                }

                if (!array_key_exists("juzgadoSolicitar", $arraySolicitudCateo)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " juzgadoSolicitar, ";
                } else {
                    if ($arraySolicitudCateo["juzgadoSolicitar"] == "" || $arraySolicitudCateo["juzgadoSolicitar"] == "0") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " juzgadoSolicitar, ";
                    }
                }

                if (!array_key_exists("cveTipoCarpeta", $arraySolicitudCateo)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " cveTipoCarpeta, ";
                }

                if (!array_key_exists("numeroCarpeta", $arraySolicitudCateo)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " numeroCarpeta, ";
                }

                if (!array_key_exists("anioCarpeta", $arraySolicitudCateo)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " anioCarpeta, ";
                }

                if (!array_key_exists("juzgadoProcedencia", $arraySolicitudCateo)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " juzgadoProcedencia, ";
                }

                if (!array_key_exists("carpetaInvestigacion", $arraySolicitudCateo)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " carpetaInvestigacion, ";
                }

                if (!array_key_exists("nuc", $arraySolicitudCateo)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " nuc, ";
                }

                if (!array_key_exists("eMailMP", $arraySolicitudCateo)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " eMailMP, ";
                } else {
                    if ($arraySolicitudCateo["eMailMP"] == "" || $arraySolicitudCateo["eMailMP"] == "0") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " eMailMP, ";
                    }
                }

                if (!array_key_exists("cveUsuario", $arraySolicitudCateo)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " cveUsuario, ";
                } else {
                    if ($arraySolicitudCateo["cveUsuario"] == "" || $arraySolicitudCateo["cveUsuario"] == "0") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " cveUsuario, ";
                    }
                }

                if (!array_key_exists("personasArray", $arraySolicitudCateo)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " personasArray, ";
                } else {
                    if (count($arraySolicitudCateo["personasArray"]) > 0) {
                        $posicion = 0;
                        foreach ($arraySolicitudCateo["personasArray"] as $personasArray) {
                            if (!array_key_exists("Nombre", $arraySolicitudCateo["personasArray"][$posicion])) {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " Nombre en personasArray posicioin " . $posicion . ", ";
                            } else {
                                if ($arraySolicitudCateo["personasArray"][$posicion]["Nombre"] == "" || $arraySolicitudCateo["personasArray"][$posicion]["Nombre"] == "0") {
                                    $errorGeneral = true;
                                    $mensajeErrorArray .= " Nombre en personasArray posicioin " . $posicion . ", ";
                                }
                            }

                            if (!array_key_exists("Paterno", $arraySolicitudCateo["personasArray"][$posicion])) {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " Paterno en personasArray posicioin " . $posicion . ", ";
                            } else {
                                if ($arraySolicitudCateo["personasArray"][$posicion]["Paterno"] == "" || $arraySolicitudCateo["personasArray"][$posicion]["Paterno"] == "0") {
                                    $errorGeneral = true;
                                    $mensajeErrorArray .= " Paterno en personasArray posicioin " . $posicion . ", ";
                                }
                            }

                            if (!array_key_exists("Materno", $arraySolicitudCateo["personasArray"][$posicion])) {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " Materno en personasArray posicioin " . $posicion . ", ";
                            } else {
                                if ($arraySolicitudCateo["personasArray"][$posicion]["Materno"] == "" || $arraySolicitudCateo["personasArray"][$posicion]["Materno"] == "0") {
                                    $errorGeneral = true;
                                    $mensajeErrorArray .= " Materno en personasArray posicioin " . $posicion . ", ";
                                }
                            }

                            if (!array_key_exists("Domicilio", $arraySolicitudCateo["personasArray"][$posicion])) {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " Domicilio en personasArray posicioin " . $posicion . ", ";
                            } else {
                                if ($arraySolicitudCateo["personasArray"][$posicion]["Domicilio"] == "" || $arraySolicitudCateo["personasArray"][$posicion]["Domicilio"] == "0") {
                                    $errorGeneral = true;
                                    $mensajeErrorArray .= " Domicilio en personasArray posicioin " . $posicion . ", ";
                                }
                            }

                            if (!array_key_exists("Genero", $arraySolicitudCateo["personasArray"][$posicion])) {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " Genero en personasArray posicioin " . $posicion . ", ";
                            } else {
                                if ($arraySolicitudCateo["personasArray"][$posicion]["Genero"] == "" || $arraySolicitudCateo["personasArray"][$posicion]["Genero"] == "0") {
                                    $errorGeneral = true;
                                    $mensajeErrorArray .= " Genero en personasArray posicioin " . $posicion . ", ";
                                }
                            }
                            $posicion++;
                        }
                    }
                }

                if (!array_key_exists("objetosArray", $arraySolicitudCateo)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " objetosArray, ";
                } else {
                    if (count($arraySolicitudCateo["objetosArray"]) > 0) {
                        $posicion = 0;
                        foreach ($arraySolicitudCateo["objetosArray"] as $objetosArray) {
                            if (!array_key_exists("Descripcion", $arraySolicitudCateo["objetosArray"][$posicion])) {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " Descripcion en objetosArray posicioin " . $posicion . ", ";
                            } else {
                                
                            }

                            if (!array_key_exists("Domicilio", $arraySolicitudCateo["objetosArray"][$posicion])) {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " Domicilio en objetosArray posicioin " . $posicion . ", ";
                            } else {
                                
                            }
                            $posicion++;
                        }
                    }
                }

                if ($errorGeneral) {
                    $mensajeError .= substr($mensajeErrorArray, 0, -2);
                }

                if (!$errorGeneral) {

                    #VALIDA SI EXISTE EL ID DEL SIGGIPEM EN EL SIGEJUPE - SI EXISTE REGRESA LA INFORMACIÓN DEL CATEO
                    if (array_key_exists("caseProceedingId", $arraySolicitudCateo)) {
                        $solicitudescateosDto = new SolicitudescateosDTO();
                        $solicitudescateosDao = new SolicitudescateosDAO();
                        $solicitudescateosDto->setCaseProceedingId($arraySolicitudCateo["caseProceedingId"]);
                        $solicitudescateosDto = $solicitudescateosDao->selectSolicitudescateos($solicitudescateosDto);
                        if ($solicitudescateosDto != "" && count($solicitudescateosDto) > 0) {
                            $cateosDto = new CateosDTO();
                            $cateosDao = new CateosDAO();
                            $cateosDto->setIdSolicitudCateo($solicitudescateosDto[0]->getIdSolicitudCateo());
                            $cateosDto = $cateosDao->selectCateos($cateosDto);
                            if ($cateosDto != "" && count($cateosDto) > 0) {
                                #Guarmos en Bitacora La solicitud Entrante
                                $bitacoraWssDto = new BitacorawsDTO();
                                $BitacoraWssRespDto = new BitacorawsDTO();
                                $bitacoraWssDao = new BitacorawsDAO();
                                $fechaRegistro = date("Y-m-d H:i:s");

                                $bitacoraWssDto->setCveAccionws(8);
                                $bitacoraWssDto->setObservacionesOrigen(json_encode($arraySolicitudCateo));
                                $bitacoraWssDto->setHrefOrigen("SOLICITUD DE CATEO M.P.");
                                $bitacoraWssDto->setFechaRegistro($fechaRegistro);
                                $rsBitacoraWsDto = $bitacoraWssDao->insertBitacoraws($bitacoraWssDto);
                                
                                $tmp = array("type" => "OK",
                                    "text" => "REGISTRO GUARDADO CON ANTERIORIDAD",
                                    "idCateo" => $cateosDto[0]->getIdCateo(),
                                    "idSolicitudCateo" => $cateosDto[0]->getIdSolicitudCateo(),
                                    "numeroCateo" => $cateosDto[0]->getNumeroCateo() . "/" . $cateosDto[0]->getAnioCateo()
                                );
                                
                                if ($rsBitacoraWsDto != "") {
                                    $BitacoraWssRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                                    $BitacoraWssRespDto->setDescEstatusBitacoraws($tmp['type']);
                                    $BitacoraWssRespDto->setObservacionesDestino(json_encode($tmp));
                                    $rsRespuestaBitacora = $bitacoraWssDao->updateBitacoraws($BitacoraWssRespDto);
                                }
                                return $tmp;
                            }
                        }
                    }

                    $arraySolicitudCateo["personasArray"] = json_encode($arraySolicitudCateo["personasArray"]);
                    $arraySolicitudCateo["objetosArray"] = json_encode($arraySolicitudCateo["objetosArray"]);

                    $arraySolicitudCateo["imputadosArray"] = json_encode($arraySolicitudCateo["imputadosArray"]);
                    $arraySolicitudCateo["victimasArray"] = json_encode($arraySolicitudCateo["victimasArray"]);
                    $arraySolicitudCateo["delitosArray"] = json_encode($arraySolicitudCateo["delitosArray"]);

                    $arraySolicitudCateo["mpsResponsablesArray"] = json_encode($arraySolicitudCateo["mpsResponsablesArray"]);
                    #Guarmos en Bitacora La solicitud Entrante
                    $bitacoraWsDto = new BitacorawsDTO();
                    $BitacoraWsRespDto = new BitacorawsDTO();
                    $bitacoraWsDao = new BitacorawsDAO();
                    $fechaRegistro = date("Y-m-d H:i:s");

                    $bitacoraWsDto->setCveAccionws(8);
                    $bitacoraWsDto->setObservacionesOrigen(json_encode($arraySolicitudCateo));
                    $bitacoraWsDto->setHrefOrigen("SOLICITUD DE CATEO M.P.");
                    $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                    $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);

                    $SolicitudescateosController = new SolicitudescateosController();
                    $SolicitudescateosDto = $SolicitudescateosController->insertSolicitudescateos($arraySolicitudCateo, null, "webService");
                    if ($rsBitacoraWsDto != "") {
                        $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                        $BitacoraWsRespDto->setDescEstatusBitacoraws($SolicitudescateosDto['type']);
                        $BitacoraWsRespDto->setObservacionesDestino(json_encode($SolicitudescateosDto));
                        $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                    }
                    return $SolicitudescateosDto;
                } else {
                    return json_encode(["type" => "ERROR", "text" => $mensajeError]);
                }
            }
            return json_encode(["type" => "ERROR", "text" => "JSON INCORRECTO"]);
        } else {
            return json_encode(["type" => "ERROR", "text" => "JSON VACIO"]);
        }
//            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
//        }
    }

    private function isValid($user = "", $password = "") {
        $valido = false;
        if (is_dir("../" . $user) == true) {
            if (is_file("../" . $user . "/" . $password . ".pwsd") == true) {
                $valido = true;
            } else {
                $valido = false;
            }
        } else {
            $valido = false;
        }
        return $valido;
    }

    private function isJSON($string) {
        return is_string($string) && is_array(json_decode($string, true)) && (json_last_error() == JSON_ERROR_NONE) ? true : false;
    }

    public function descargaSolicitudCateo($u, $p, $idCateo) {
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudescateos/ComprobanteSolicitudescateosController.Class.php");
        if ($idCateo != "" && $idCateo != "0") {
            $ComprobanteSolicitudescateosController = new ComprobanteSolicitudescateosController();
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

    public function descargaSolicitudCateoRespuesta($u, $p, $idCateo) {
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/cateos/ComprobanteCateosController.Class.php");
        if ($idCateo != "" && $idCateo != "0") {
            $comprobanteCateo = new ComprobanteCateosController();
            $resultado = $comprobanteCateo->generaComprobante($idCateo);
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
                "text" => "EL CATEO SELECCIONADO NO ES VALIDO",
                "file" => "");
        }
        return json_encode($resultado);
    }

    public function consultaCateo($u, $p, $json) {
        $return = array();
        if ($this->isJSON($json)) {
            $json = json_decode($json, true);
            $numero = $json["numero"];
            $anio = $json["anio"];
            $cveJuzgado = $json["cveJuzgado"];
            $cveUsuario = $json["cveUsuario"];

            if (empty($numero) && empty($anio) && empty($cveJuzgado) && empty($cveUsuario)) {
                $return["type"] = "Error";
                $return["mensaje"] = "NO SE ENCONTRARON RESULTADOS";
            } else {
                include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudescateos/SolicitudescateosController.Class.php");
                include_once(dirname(__FILE__) . "/../../../modelos/s/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");

                $consultaCateosDto = new SolicitudescateosDTO();
                $consultaCateosDto->setNumero($numero);
                $consultaCateosDto->setAnio($anio);
                $consultaCateosDto->setCveJuzgado($cveJuzgado);
                $consultaCateosDto->setCveUsuario($cveUsuario);

                $consultaCtr = new SolicitudescateosController();
                $return = $consultaCtr->consultaCateosInformacion(1, $consultaCateosDto);
            }
        }
    }

    public function consultaCateoDetalle($u, $p, $json) {
        $return = array();
        if ($this->isJSON($json)) {
            $json = json_decode($json, true);

            if (empty($json["idCateo"]) && empty($json["cveUsuario"])) {
                $return["type"] = "Error";
                $return["mensaje"] = "NO SE ENCONTRO EL IDENTIFICADOR DE CATEO";
            } else {
                include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudescateos/SolicitudescateosController.Class.php");
                include_once(dirname(__FILE__) . "/../../../modelos/s/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");

                $consultaCtr = new SolicitudescateosController();
                #Guarmos en Bitacora La solicitud Entrante
                $bitacoraWsDto = new BitacorawsDTO();
                $BitacoraWsRespDto = new BitacorawsDTO();
                $bitacoraWsDao = new BitacorawsDAO();
                $fechaRegistro = date("Y-m-d H:i:s");

                $bitacoraWsDto->setCveAccionws(8);
                $bitacoraWsDto->setObservacionesOrigen(json_encode($json));
                $bitacoraWsDto->setHrefOrigen("BUSQUEDA DETALLE DE CATEO");
                $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);

                $return = $consultaCtr->consultaCateoDetalleWS($json["idCateo"], "");
                $respuesta = json_decode($return, true);
                if ($rsBitacoraWsDto != "") {
                    $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                    $BitacoraWsRespDto->setDescEstatusBitacoraws($respuesta['type']);
                    $BitacoraWsRespDto->setObservacionesDestino(json_encode($respuesta));
                    $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                }
                $return = $respuesta;
            }
        } else {
            $return["type"] = "Error";
            $return["mensaje"] = "EL FORMATO JSON NO ES VALIDO";
        }
        return json_encode($return);
    }

}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("SolicitudesCateosServerScramble.wsdl");
$server->setClass("SolicitudesCateosServer");
$server->handle();
#EJEMPLO ESTRUCTURA CORRECTA DE EL JSON QUE DEBE ENVIAR EL MP
/*
  {
  "caseProceedingId": "123456789qwer",
  "juzgadoSolicitar": "807",
  "cveTipoCarpeta": "0",
  "numeroCarpeta": "",
  "anioCarpeta": "",
  "juzgadoProcedencia": "0",
  "carpetaInvestigacion": "123",
  "nuc": "123",
  "eMailMP": "ricardo.ortiz@pjedomex.gob.mx",
  "cveUsuario": "46",
  "personasArray": [
  {
  "Nombre": "QEWQWE",
  "Paterno": "QWE WE",
  "Materno": "QWEEQWE",
  "Domicilio": "QW EWQEQWE",
  "Genero": "1",
  "Municipio": "0"
  },
  {
  "Nombre": "WQE EWQ",
  "Paterno": "EWQ E WEWQ",
  "Materno": "EWQ EWE WQE",
  "Domicilio": "EWQEWQ E",
  "Genero": "2",
  "Municipio": "0"
  }
  ],
  "objetosArray": [
  {
  "Descripcion": "WQEWE WEWQ E",
  "Domicilio": "WEQ WEWQ EQWE WE"
  },
  {
  "Descripcion": "SADSA DSA DSA",
  "Domicilio": "D SAD SADA DSDSA"
  }
  ],
  "imputadosArray": [
  {
  "Nombre": "SADAS DSDA SA",
  "Paterno": "DAS DSAD ASSA DSA",
  "Materno": "D SAD AS DA SDAS",
  "Domicilio": "SAD SDSA DA DAD",
  "Genero": "1",
  "Alias": "SADSA DSADA SD",
  "Municipio": "0",
  "Telefono": "1323232131",
  "Email": "asdasdsada@asdasdas.com",
  "Detenido": "S",
  "TipoPersona": "1",
  "NombreMoral": ""
  },
  {
  "Nombre": "SAD DSAD",
  "Paterno": "D SAD AS",
  "Materno": "D ASD",
  "Domicilio": "A SDDA",
  "Genero": "2",
  "Alias": "SDA DSA DA",
  "Municipio": "0",
  "Telefono": "1232323213",
  "Email": "",
  "Detenido": "S",
  "TipoPersona": "1",
  "NombreMoral": ""
  },
  {
  "Nombre": "",
  "Paterno": "",
  "Materno": "",
  "Domicilio": "",
  "Genero": "",
  "Alias": "",
  "Municipio": "0",
  "Telefono": "",
  "Email": "",
  "Detenido": "N",
  "TipoPersona": "2",
  "NombreMoral": "D ASDSAD SAD AS D"
  }
  ],
  "victimasArray": [
  {
  "Nombre": "AS DAS DAS D",
  "Paterno": "DASD AS DAS D",
  "Materno": "DAS DSA DSA D",
  "Domicilio": "SADSA DSA DA",
  "Genero": "1",
  "Municipio": "0",
  "Telefono": "2323211231",
  "Email": "asasdasd@sadsadasd.com",
  "TipoPersona": "1",
  "NombreMoral": ""
  },
  {
  "Nombre": "DASDSADSA ASD",
  "Paterno": "DSAD AS D SD",
  "Materno": "ASD SADAS",
  "Domicilio": "SAD SA DSA DSA SAD",
  "Genero": "1",
  "Municipio": "0",
  "Telefono": "2131223213",
  "Email": "",
  "TipoPersona": "1",
  "NombreMoral": ""
  },
  {
  "Nombre": "",
  "Paterno": "",
  "Materno": "",
  "Domicilio": "",
  "Genero": "",
  "Municipio": "0",
  "Telefono": "",
  "Email": "",
  "TipoPersona": "2",
  "NombreMoral": "SAD SADSA DSAD SA DSA"
  }
  ],
  "delitosArray": [
  {
  "cveDelito": "73"
  },
  {
  "cveDelito": "4"
  },
  {
  "cveDelito": "85"
  }
  ],
  "solicitud": " sad sa dsa dsa das dsa dsa sadsa ds dd as dsads dsa dsa d sa dsdsad dsad sa dsa d sadsa sa dsa dsa ds adsa ",
  "fileSolicitud": "",
  "mpsResponsablesArray": [
  {
  "Nombre": "SAD ASD SA DDSA",
  "Paterno": "ASDSADS SA D SA D",
  "Materno": "DSA DSA DSAD SA D"
  },
  {
  "Nombre": "CXVCVX VC VX",
  "Paterno": "VXCVXCVXCV CX",
  "Materno": "XVC CXV VXCVCXV"
  }
  ]
  } */
//
//$json = '{
//  "juzgadoSolicitar": "807",
//  "cveTipoCarpeta": "0",
//  "numeroCarpeta": "",
//  "anioCarpeta": "",
//  "juzgadoProcedencia": "0",
//  "carpetaInvestigacion": "123",
//  "nuc": "123",
//  "eMailMP": "ricardo.ortiz@pjedomex.gob.mx",
//  "cveUsuario": "46",
//  "personasArray": [
//  {
//  "Nombre": "QEWQWE",
//  "Paterno": "QWE WE",
//  "Materno": "QWEEQWE",
//  "Domicilio": "QW EWQEQWE",
//  "Genero": "1",
//  "Municipio": "0"
//  },
//  {
//  "Nombre": "WQE EWQ",
//  "Paterno": "EWQ E WEWQ",
//  "Materno": "EWQ EWE WQE",
//  "Domicilio": "EWQEWQ E",
//  "Genero": "2",
//  "Municipio": "0"
//  }
//  ],
//  "objetosArray": [
//  {
//  "Descripcion": "WQEWE WEWQ E",
//  "Domicilio": "WEQ WEWQ EQWE WE"
//  },
//  {
//  "Descripcion": "SADSA DSA DSA",
//  "Domicilio": "D SAD SADA DSDSA"
//  }
//  ],
//  "imputadosArray": [
//  {
//  "Nombre": "SADAS DSDA SA",
//  "Paterno": "DAS DSAD ASSA DSA",
//  "Materno": "D SAD AS DA SDAS",
//  "Domicilio": "SAD SDSA DA DAD",
//  "Genero": "1",
//  "Alias": "SADSA DSADA SD",
//  "Municipio": "0",
//  "Telefono": "1323232131",
//  "Email": "asdasdsada@asdasdas.com",
//  "Detenido": "S",
//  "TipoPersona": "1",
//  "NombreMoral": ""
//  },
//  {
//  "Nombre": "SAD DSAD",
//  "Paterno": "D SAD AS",
//  "Materno": "D ASD",
//  "Domicilio": "A SDDA",
//  "Genero": "2",
//  "Alias": "SDA DSA DA",
//  "Municipio": "0",
//  "Telefono": "1232323213",
//  "Email": "",
//  "Detenido": "S",
//  "TipoPersona": "1",
//  "NombreMoral": ""
//  },
//  {
//  "Nombre": "",
//  "Paterno": "",
//  "Materno": "",
//  "Domicilio": "",
//  "Genero": "",
//  "Alias": "",
//  "Municipio": "0",
//  "Telefono": "",
//  "Email": "",
//  "Detenido": "N",
//  "TipoPersona": "2",
//  "NombreMoral": "D ASDSAD SAD AS D"
//  }
//  ],
//  "victimasArray": [
//  {
//  "Nombre": "AS DAS DAS D",
//  "Paterno": "DASD AS DAS D",
//  "Materno": "DAS DSA DSA D",
//  "Domicilio": "SADSA DSA DA",
//  "Genero": "1",
//  "Municipio": "0",
//  "Telefono": "2323211231",
//  "Email": "asasdasd@sadsadasd.com",
//  "TipoPersona": "1",
//  "NombreMoral": ""
//  },
//  {
//  "Nombre": "DASDSADSA ASD",
//  "Paterno": "DSAD AS D SD",
//  "Materno": "ASD SADAS",
//  "Domicilio": "SAD SA DSA DSA SAD",
//  "Genero": "1",
//  "Municipio": "0",
//  "Telefono": "2131223213",
//  "Email": "",
//  "TipoPersona": "1",
//  "NombreMoral": ""
//  },
//  {
//  "Nombre": "",
//  "Paterno": "",
//  "Materno": "",
//  "Domicilio": "",
//  "Genero": "",
//  "Municipio": "0",
//  "Telefono": "",
//  "Email": "",
//  "TipoPersona": "2",
//  "NombreMoral": "SAD SADSA DSAD SA DSA"
//  }
//  ],
//  "delitosArray": [
//  {
//  "cveDelito": "73"
//  },
//  {
//  "cveDelito": "4"
//  },
//  {
//  "cveDelito": "85"
//  }
//  ],
//  "solicitud": " sad sa dsa dsa das dsa dsa sadsa ds dd as dsads dsa dsa d sa dsdsad dsad sa dsa d sadsa sa dsa dsa ds adsa ",
//  "fileSolicitud": "",
//  "mpsResponsablesArray": [
//  {
//  "Nombre": "SAD ASD SA DDSA",
//  "Paterno": "ASDSADS SA D SA D",
//  "Materno": "DSA DSA DSAD SA D"
//  },
//  {
//  "Nombre": "CXVCVX VC VX",
//  "Paterno": "VXCVXCVXCV CX",
//  "Materno": "XVC CXV VXCVCXV"
//  }
//  ]
//  }';
//$SolicitudesCateosServer = new SolicitudesCateosServer();
//print_r($SolicitudesCateosServer->insertSolicitudCateo("", "", $json));
?>

