<?php

date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenes/OrdenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenes/OrdenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesordenes/SolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesordenes/SolicitudesordenesDAO.Class.php");


class SolicitudesOrdenesServer {

    public function __construct() {
        
    }

    public function insertSolicitudOrden($u, $p, $jsonSolicitudOrden) {
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesordenes/SolicitudesordenesController.Class.php");
        #USUARIO CONTRASEÑA: 3lectronic0_Poder2014--2014Poder_3lectronic0
//        if ($this->isValid(sha1($u), sha1($p))) {            
//        } else {
        if ($jsonSolicitudOrden != "") {
            if ($this->isJSON($jsonSolicitudOrden)) {
                $arraySolicitudOrden = json_decode($jsonSolicitudOrden, true);

                $errorGeneral = false;
                $mensajeError = "";

                #VALIDAMOS QUE CONTENGA LOS CAMPOS OBLIGATORIOS EN LA ESTRUCTURA DEL JSON Y VALIDAMOS QUE LA INFORMACION DEL CAMPO SEA VALIDA
                $mensajeErrorArray = " No se encontraron los siguientes campos en el JSON enviado: ";
                $mensajeErrorArray = " Los siguientes campos no son validos por venir vacios o en cero: ";


                if (!array_key_exists("juzgadoSolicitar", $arraySolicitudOrden)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " juzgadoSolicitar, ";
                } else {
                    if ($arraySolicitudOrden["juzgadoSolicitar"] == "" || $arraySolicitudOrden["juzgadoSolicitar"] == "0") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " juzgadoSolicitar, ";
                    }
                }
                if (!array_key_exists("caseProceedingId", $arraySolicitudOrden)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " caseProceedingId, ";
                }
                
                if (!array_key_exists("cveTipoCarpeta", $arraySolicitudOrden)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " cveTipoCarpeta, ";
                }

                if (!array_key_exists("numeroCarpeta", $arraySolicitudOrden)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " numeroCarpeta, ";
                }

                if (!array_key_exists("anioCarpeta", $arraySolicitudOrden)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " anioCarpeta, ";
                }

                if (!array_key_exists("juzgadoProcedencia", $arraySolicitudOrden)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " juzgadoProcedencia, ";
                }

                if (!array_key_exists("carpetaInvestigacion", $arraySolicitudOrden)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " carpetaInvestigacion, ";
                }

                if (!array_key_exists("nuc", $arraySolicitudOrden)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " nuc, ";
                }

                if (!array_key_exists("eMailMP", $arraySolicitudOrden)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " eMailMP, ";
                } else {
                    if ($arraySolicitudOrden["eMailMP"] == "" || $arraySolicitudOrden["eMailMP"] == "0") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " eMailMP, ";
                    }
                }

                if (!array_key_exists("cveUsuario", $arraySolicitudOrden)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " cveUsuario, ";
                } else {
                    if ($arraySolicitudOrden["cveUsuario"] == "" || $arraySolicitudOrden["cveUsuario"] == "0") {
                        $errorGeneral = true;
                        $mensajeErrorArray .= " cveUsuario, ";
                    }
                }

                if (!array_key_exists("personasArray", $arraySolicitudOrden)) {
                    $errorGeneral = true;
                    $mensajeErrorArray .= " personasArray, ";
                } else {
                    if (count($arraySolicitudOrden["personasArray"]) > 0) {
                        $posicion = 0;
                        foreach ($arraySolicitudOrden["personasArray"] as $personasArray) {
                            if (!array_key_exists("Nombre", $arraySolicitudOrden["personasArray"][$posicion])) {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " Nombre en personasArray posicioin " . $posicion . ", ";
                            } else {
                                if ($arraySolicitudOrden["personasArray"][$posicion]["Nombre"] == "" || $arraySolicitudOrden["personasArray"][$posicion]["Nombre"] == "0") {
                                    $errorGeneral = true;
                                    $mensajeErrorArray .= " Nombre en personasArray posicioin " . $posicion . ", ";
                                }
                            }

                            if (!array_key_exists("Paterno", $arraySolicitudOrden["personasArray"][$posicion])) {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " Paterno en personasArray posicioin " . $posicion . ", ";
                            } else {
                                if ($arraySolicitudOrden["personasArray"][$posicion]["Paterno"] == "" || $arraySolicitudOrden["personasArray"][$posicion]["Paterno"] == "0") {
                                    $errorGeneral = true;
                                    $mensajeErrorArray .= " Paterno en personasArray posicioin " . $posicion . ", ";
                                }
                            }

                            if (!array_key_exists("Materno", $arraySolicitudOrden["personasArray"][$posicion])) {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " Materno en personasArray posicioin " . $posicion . ", ";
                            } else {
                                if ($arraySolicitudOrden["personasArray"][$posicion]["Materno"] == "" || $arraySolicitudOrden["personasArray"][$posicion]["Materno"] == "0") {
                                    $errorGeneral = true;
                                    $mensajeErrorArray .= " Materno en personasArray posicioin " . $posicion . ", ";
                                }
                            }

                            if (!array_key_exists("Domicilio", $arraySolicitudOrden["personasArray"][$posicion])) {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " Domicilio en personasArray posicioin " . $posicion . ", ";
                            } else {
                                if ($arraySolicitudOrden["personasArray"][$posicion]["Domicilio"] == "" || $arraySolicitudOrden["personasArray"][$posicion]["Domicilio"] == "0") {
                                    $errorGeneral = true;
                                    $mensajeErrorArray .= " Domicilio en personasArray posicioin " . $posicion . ", ";
                                }
                            }

                            if (!array_key_exists("Genero", $arraySolicitudOrden["personasArray"][$posicion])) {
                                $errorGeneral = true;
                                $mensajeErrorArray .= " Genero en personasArray posicioin " . $posicion . ", ";
                            } else {
                                if ($arraySolicitudOrden["personasArray"][$posicion]["Genero"] == "" || $arraySolicitudOrden["personasArray"][$posicion]["Genero"] == "0") {
                                    $errorGeneral = true;
                                    $mensajeErrorArray .= " Genero en personasArray posicioin " . $posicion . ", ";
                                }
                            }
                            $posicion++;
                        }
                    }
                }

                if ($errorGeneral) {
                    $mensajeError .= substr($mensajeErrorArray, 0, -2);
                }

                if (!$errorGeneral) {

                    if (array_key_exists("caseProceedingId", $arraySolicitudOrden)) {
                        $solicitudesordenessDto = new SolicitudesordenesDTO();
                        $solicitudesordenesDao = new SolicitudesordenesDAO();
                        $solicitudesordenessDto->setCaseProceedingId($arraySolicitudOrden["caseProceedingId"]);
                        $solicitudesordenessDto = $solicitudesordenesDao->selectSolicitudesordenes($solicitudesordenessDto);
                        if ($solicitudesordenessDto != "" && count($solicitudesordenessDto) > 0) {
                            $ordenesDto = new OrdenesDTO();
                            $ordenesDao = new OrdenesDAO();
                            $ordenesDto->setIdSolicitudOrden($solicitudesordenessDto[0]->getIdSolicitudOrden());
                            $ordenesDto = $ordenesDao->selectOrdenes($ordenesDto);
                            if ($ordenesDto != "" && count($ordenesDto) > 0) {
                                #Guarmos en Bitacora La solicitud Entrante
                                $bitacoraWssDto = new BitacorawsDTO();
                                $BitacoraWssRespDto = new BitacorawsDTO();
                                $bitacoraWssDao = new BitacorawsDAO();
                                $fechaRegistro = date("Y-m-d H:i:s");

                                $bitacoraWssDto->setCveAccionws(12);
                                $bitacoraWssDto->setObservacionesOrigen(json_encode($arraySolicitudOrden));
                                $bitacoraWssDto->setHrefOrigen("SOLICITUD DE ORDEN DE APREHENSION M.P.");
                                $bitacoraWssDto->setFechaRegistro($fechaRegistro);
                                $rsBitacoraWsDto = $bitacoraWssDao->insertBitacoraws($bitacoraWssDto);

                                $tmp = array("type" => "OK",
                                    "text" => "REGISTRO GUARDADO CON ANTERIORIDAD",
                                    "idOrden" => $ordenesDto[0]->getIdOrden(),
                                    "idSolicitudOrden" => $ordenesDto[0]->getIdSolicitudOrden(),
                                    "numeroOrden" => $ordenesDto[0]->getNumeroOrden() . "/" . $ordenesDto[0]->getAnioOrden()
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

                    $arraySolicitudOrden["personasArray"] = json_encode($arraySolicitudOrden["personasArray"]);

                    $arraySolicitudOrden["imputadosArray"] = json_encode($arraySolicitudOrden["imputadosArray"]);
                    $arraySolicitudOrden["victimasArray"] = json_encode($arraySolicitudOrden["victimasArray"]);
                    $arraySolicitudOrden["delitosArray"] = json_encode($arraySolicitudOrden["delitosArray"]);

                    $arraySolicitudOrden["mpsResponsablesArray"] = json_encode($arraySolicitudOrden["mpsResponsablesArray"]);

                    #Guarmos en Bitacora La solicitud Entrante
                    $bitacoraWsDto = new BitacorawsDTO();
                    $BitacoraWsRespDto = new BitacorawsDTO();
                    $bitacoraWsDao = new BitacorawsDAO();
                    $fechaRegistro = date("Y-m-d H:i:s");

                    $bitacoraWsDto->setCveAccionws(12);
                    $bitacoraWsDto->setObservacionesOrigen(json_encode($arraySolicitudOrden));
                    $bitacoraWsDto->setHrefOrigen("SOLICITUD DE ORDEN DE APREHENSION M.P.");
                    $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                    $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);

                    $SolicitudesordenesController = new SolicitudesordenesController();
                    $SolicitudesordenesDto = $SolicitudesordenesController->insertSolicitudesordenes($arraySolicitudOrden, null, "webService");
                    if ($rsBitacoraWsDto != "") {
                        $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                        $BitacoraWsRespDto->setDescEstatusBitacoraws($SolicitudesordenesDto['type']);
                        $BitacoraWsRespDto->setObservacionesDestino(json_encode($SolicitudesordenesDto));
                        $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                    }
                    return $SolicitudesordenesDto;
                } else {
                    return "ERROR: " . $mensajeError;
                }
            }
            return "ERROR: JSON INCORRECTO";
        } else {
            return "ERROR: JSON VACIO";
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

    public function descargaSolicitudOrden($u, $p, $idOrden) {
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesordenes/ComprobanteSolicitudesordenesController.Class.php");
        if ($idOrden != "" && $idOrden != "0") {
            $ComprobanteSolicitudesordenesController = new ComprobanteSolicitudesordenesController();
            $resultado = $ComprobanteSolicitudesordenesController->generaComprobante($idOrden);
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
                "text" => "LA ORDEN DE APREHENSION SELECCIONADO NO ES VALIDO",
                "file" => "");
        }
        return json_encode($resultado);
    }

    public function descargaSolicitudOrdenRespuesta($u, $p, $idOrden) {
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ordenes/ComprobanteOrdenesController.Class.php");
        if ($idOrden != "" && $idOrden != "0") {
            $comprobanteOrden = new ComprobanteOrdenesController();
            $resultado = $comprobanteOrden->generaComprobante($idOrden);
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
                "text" => "LA ORDEN DE APREHENSION SELECCIONADO NO ES VALIDO",
                "file" => "");
        }
        return json_encode($resultado);
    }

    public function consultaOrden($u, $p, $json) {
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
                include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesordenes/SolicitudesordenesController.Class.php");
                include_once(dirname(__FILE__) . "/../../../modelos/s/sigejupe/dto/solicitudesordenes/SolicitudesordenesDTO.Class.php");

                $consultaOrdenesDto = new SolicitudesordenesDTO();
                $consultaOrdenesDto->setNumero($numero);
                $consultaOrdenesDto->setAnio($anio);
                $consultaOrdenesDto->setCveJuzgado($cveJuzgado);
                $consultaOrdenesDto->setCveUsuario($cveUsuario);

                $consultaCtr = new SolicitudesordenesController();
                $return = $consultaCtr->consultaOrdenInformacion(1, $consultaOrdenesDto);
            }
        } else {
            $return["type"] = "Error";
            $return["mensaje"] = "EL FORMATO JSON NO ES VALIDO";
        }
        return json_encode($return);
    }

}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("SolicitudesOrdenesServerScramble.wsdl");
$server->setClass("SolicitudesOrdenesServer");
$server->handle();
#EJEMPLO ESTRUCTURA CORRECTA DE EL JSON QUE DEBE ENVIAR EL MP
/*
  {
  "juzgadoSolicitar": "807",
  "cveTipoCarpeta": "0",
  "numeroCarpeta": "",
  "anioCarpeta": "",
  "juzgadoProcedencia": "0",
  "carpetaInvestigacion": "123",
  "nuc": "123",
  "eMailMP": "ricardo.ortiz@pjedomex.gob.mx",
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
//$SolicitudesOrdenesServer = new SolicitudesOrdenesServer();
//print_r($SolicitudesOrdenesServer->insertSolicitudCateo("", "", $json));
?>

