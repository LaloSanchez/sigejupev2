<?php

class SolicitudesMuestrasServer {

    public function __construct() {
        
    }

    public function insertSolicitudMuestra($u, $p, $jsonSolicitudMuestra) {
        require_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesmuestras/SolicitudesmuestrasController.Class.php");
        #USUARIO CONTRASEÑA: 3lectronic0_Poder2014--2014Poder_3lectronic0
//        if ($this->isValid(sha1($u), sha1($p))) {            
//        } else {
        if ($jsonSolicitudMuestra != "") {
            if ($this->isJSON($jsonSolicitudMuestra)) {
                $arraySolicitudMuestra = json_decode($jsonSolicitudMuestra, true);

                $errorGeneral = false;
                $mensajeError = "";
                $error = array();

                #VALIDAMOS QUE CONTENGA LOS CAMPOS OBLIGATORIOS EN LA ESTRUCTURA DEL JSON Y VALIDAMOS QUE LA INFORMACION DEL CAMPO SEA VALIDA
                $mensajeErrorArray = " Los siguientes campos no son validos por venir vacios o en cero: ";


                if (!array_key_exists("juzgadoSolicitar", $arraySolicitudMuestra)) {
                    $errorGeneral = true;
                    $error[] = $mensajeErrorArray . " juzgadoSolicitar.";
                } else {
                    if ($arraySolicitudMuestra["juzgadoSolicitar"] == "" || $arraySolicitudMuestra["juzgadoSolicitar"] == "0") {
                        $errorGeneral = true;
                        $error[] = $mensajeErrorArray . " juzgadoSolicitar.";
                    }
                }

                if (!array_key_exists("cveTipoCarpeta", $arraySolicitudMuestra)) {
                    $errorGeneral = true;
                    $error[] = $mensajeErrorArray . " cveTipoCarpeta.";
                }

                if (!array_key_exists("numeroCarpeta", $arraySolicitudMuestra)) {
                    $errorGeneral = true;
                    $error[] = $mensajeErrorArray . " numeroCarpeta.";
                }

                if (!array_key_exists("anioCarpeta", $arraySolicitudMuestra)) {
                    $errorGeneral = true;
                    $error[] = $mensajeErrorArray . " anioCarpeta.";
                }

                if (!array_key_exists("juzgadoProcedencia", $arraySolicitudMuestra)) {
                    $errorGeneral = true;
                    $error[] = $mensajeErrorArray . " juzgadoProcedencia.";
                }

                if (!array_key_exists("carpetaInvestigacion", $arraySolicitudMuestra)) {
                    $errorGeneral = true;
                    $error[] = $mensajeErrorArray . " carpetaInvestigacion.";
                }

                if (!array_key_exists("nuc", $arraySolicitudMuestra)) {
                    $errorGeneral = true;
                    $error[] = $mensajeErrorArray . " nuc";
                }

                if (!array_key_exists("eMailMP", $arraySolicitudMuestra)) {
                    $errorGeneral = true;
                    $error[] = $mensajeErrorArray . " eMailMP.";
                } else {
                    if ($arraySolicitudMuestra["eMailMP"] == "" || $arraySolicitudMuestra["eMailMP"] == "0") {
                        $errorGeneral = true;
                        $error[] = $mensajeErrorArray . " eMailMP";
                    }
                }

                if (!array_key_exists("cveUsuario", $arraySolicitudMuestra)) {
                    $errorGeneral = true;
                    $error[] = $mensajeErrorArray . " cveUsuario.";
                } else {
                    if ($arraySolicitudMuestra["cveUsuario"] == "" || $arraySolicitudMuestra["cveUsuario"] == "0") {
                        $errorGeneral = true;
                        $error[] = $mensajeErrorArray . " cveUsuario.";
                    }
                }

                if (!array_key_exists("imputadosArray", $arraySolicitudMuestra)) {
                    $errorGeneral = true;
                    $error[] = $mensajeErrorArray . " imputadosArray.";
                } else {
                    if (count($arraySolicitudMuestra["imputadosArray"]) > 0) {
                        $posicion = 0;
                        foreach ($arraySolicitudMuestra["imputadosArray"] as $imputadosArray) {
                            if (!array_key_exists("TipoPersona", $arraySolicitudMuestra["imputadosArray"][$posicion])) {
                                $errorGeneral = true;
                                $error[] = $mensajeErrorArray . " TipoPersona en imputadosArray posicioin " . $posicion . ".";
                            } else {
                                if ($arraySolicitudMuestra["imputadosArray"][$posicion]["TipoPersona"] == "" || $arraySolicitudMuestra["imputadosArray"][$posicion]["TipoPersona"] == "0") {
                                    $errorGeneral = true;
                                    $error[] = $mensajeErrorArray . " TipoPersona en imputadosArray posicioin " . $posicion . ".";
                                } else {
                                    if ($arraySolicitudMuestra["imputadosArray"][$posicion]["TipoPersona"] == 1) {
                                        if (!array_key_exists("Nombre", $arraySolicitudMuestra["imputadosArray"][$posicion])) {
                                            $errorGeneral = true;
                                            $error[] = $mensajeErrorArray . " Nombre en imputadosArray posicioin " . $posicion . ".";
                                        } else {
                                            if ($arraySolicitudMuestra["imputadosArray"][$posicion]["Nombre"] == "" || $arraySolicitudMuestra["imputadosArray"][$posicion]["Nombre"] == "0") {
                                                $errorGeneral = true;
                                                $error[] = $mensajeErrorArray . " Nombre en imputadosArray posicioin " . $posicion . ".";
                                            }
                                        }

                                        if (!array_key_exists("Paterno", $arraySolicitudMuestra["imputadosArray"][$posicion])) {
                                            $errorGeneral = true;
                                            $error[] = $mensajeErrorArray . " Paterno en imputadosArray posicioin " . $posicion . ".";
                                        } else {
                                            if ($arraySolicitudMuestra["imputadosArray"][$posicion]["Paterno"] == "" || $arraySolicitudMuestra["imputadosArray"][$posicion]["Paterno"] == "0") {
                                                $errorGeneral = true;
                                                $error[] = $mensajeErrorArray . " Paterno en imputadosArray posicioin " . $posicion . ".";
                                            }
                                        }

                                        if (!array_key_exists("Materno", $arraySolicitudMuestra["imputadosArray"][$posicion])) {
                                            $errorGeneral = true;
                                            $error[] = $mensajeErrorArray . " Materno en imputadosArray posicioin " . $posicion . ".";
                                        } else {
                                            if ($arraySolicitudMuestra["imputadosArray"][$posicion]["Materno"] == "" || $arraySolicitudMuestra["imputadosArray"][$posicion]["Materno"] == "0") {
                                                $errorGeneral = true;
                                                $error[] = $mensajeErrorArray . " Materno en imputadosArray posicioin " . $posicion . ".";
                                            }
                                        }

                                        if (!array_key_exists("Domicilio", $arraySolicitudMuestra["imputadosArray"][$posicion])) {
                                            $errorGeneral = true;
                                            $error[] = $mensajeErrorArray . " Domicilio en imputadosArray posicioin " . $posicion . ".";
                                        } else {
                                            if ($arraySolicitudMuestra["imputadosArray"][$posicion]["Domicilio"] == "" || $arraySolicitudMuestra["imputadosArray"][$posicion]["Domicilio"] == "0") {
                                                $errorGeneral = true;
                                                $error[] = $mensajeErrorArray . " Domicilio en imputadosArray posicioin " . $posicion . ".";
                                            }
                                        }

                                        if (!array_key_exists("Genero", $arraySolicitudMuestra["imputadosArray"][$posicion])) {
                                            $errorGeneral = true;
                                            $error[] = $mensajeErrorArray . " Genero en imputadosArray posicioin " . $posicion . ".";
                                        } else {
                                            if ($arraySolicitudMuestra["imputadosArray"][$posicion]["Genero"] == "" || $arraySolicitudMuestra["imputadosArray"][$posicion]["Genero"] == "0") {
                                                $errorGeneral = true;
                                                $error[] = $mensajeErrorArray . " Genero en imputadosArray posicioin " . $posicion . ".";
                                            }
                                        }
                                    } else {
                                        
                                    }
                                }
                            }

                            $posicion++;
                        }
                    } else {
                        $errorGeneral = true;
                        $error[] = " INGRESA ALMENOS UN IMPUTADO";
                    }
                }

                if (!$errorGeneral) {
                    $arraySolicitudMuestra["imputadosArray"] = json_encode($arraySolicitudMuestra["imputadosArray"]);
                    $arraySolicitudMuestra["victimasArray"] = json_encode($arraySolicitudMuestra["victimasArray"]);
                    $arraySolicitudMuestra["delitosArray"] = json_encode($arraySolicitudMuestra["delitosArray"]);
                    $arraySolicitudMuestra["tutoresArray"] = json_encode($arraySolicitudMuestra["tutoresArray"]);
                    $arraySolicitudMuestra["examensArray"] = json_encode($arraySolicitudMuestra["examensArray"]);
                    $arraySolicitudMuestra["muestrasArray"] = json_encode($arraySolicitudMuestra["muestrasArray"]);
                    $arraySolicitudMuestra["mpsResponsablesArray"] = json_encode($arraySolicitudMuestra["mpsResponsablesArray"]);

                    $SolicitudesMuestrasController = new SolicitudesMuestrasController();
                    $SolicitudesMuestrasDto = $SolicitudesMuestrasController->insertSolicitudesMuestras($arraySolicitudMuestra, null, "webService");
                    return json_encode($SolicitudesMuestrasDto);
                } else {
                    return json_encode(["type" => "Error", "text" => $error]);
                }
            }
            return json_encode(["type" => "Error", "text" => "ERROR: JSON INCORRECTO"]);
        } else {
            return json_encode(["type" => "Error", "text" => "ERROR: JSON VACIO"]);
        }
//            return utf8_encode($json->convert(array("totalCount" => 1, "data" => array("type" => "Error", "text" => "Usuario y contraseña incorrectos, verifica con informatica"))));
//        }
    }

    public function getCatalogos($u, $p) {
        require_once(dirname(__FILE__) . "/../../../controladores/sigejupe/muestras/MuestrasController.Class.php");
        require_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/muestras/MuestrasDTO.Class.php");

        $muestrasDto = new MuestrasDTO();
        $muestrasDto->setActivo("S");

        $muestrasController = new MuestrasController();
        $muestrasDto = $muestrasController->selectMuestras($muestrasDto);
        $respuesta = [];
        if ($muestrasDto != "") {
            $examenesArray = [];
            $muestrasArray = [];
            $countm = 0;
            $counte = 0;
            foreach ($muestrasDto as $muestras) {
                if ($muestras->getTipo() == "M") {
                    $respuesta["Muestras"][$countm]["idMuestra"] = $muestras->getCveMuestra();
                    $respuesta["Muestras"][$countm]["Muestra"] = utf8_encode($muestras->getDesMuestra());
                    $countm++;
                } else if ($muestras->getTipo() == "F") {
                    $respuesta["Examenes"][$counte]["idExamen"] = $muestras->getCveMuestra();
                    $respuesta["Examenes"][$counte]["Examen"] = utf8_encode($muestras->getDesMuestra());
                    $counte++;
                }
            }
            if (count($respuesta) != 0) {
                $respuesta["type"] = "OK";
            }
        } else {
            $respuesta = ["type" => "Error", "text" => "NO HAY REGISTROS EN EL CATALOGO TOMA DE MUESTRAS"];
        }

        return json_encode($respuesta);
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

}

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("SolicitudesMuestrasServerScramble.wsdl");
$server->setClass("SolicitudesMuestrasServer");
$server->handle();

/*
  -"juzgadoSolicitar"
  762

  -"cveTipoCarpeta"
  0

  -"numeroCarpeta"


  -"anioCarpeta"


  -"juzgadoProcedencia"
  0

  -"carpetaInv"
  123

  -"nuc"


  -"eMailMP"
  ricardo.ortiz@pjedomex.gob.mx

  -"examensArray"
  [{"id":"0","tipo":"tblImputados","desItem":"DAÑOS CORPORALES","idItem":"3"},{"id":"0","tipo":"tblImputados"
  ,"desItem":"AMPUTACIONES","idItem":"4"},{"id":"1","tipo":"tblImputados","desItem":"AMPUTACIONES","idItem"
  :"4"},{"id":"0","tipo":"tblVictimas","desItem":"AMPUTACIONES","idItem":"4"}]

  -"muestrasArray"
  [{"id":"0","tipo":"tblImputados","desItem":"TOMA DE CABELLO","idItem":"1"},{"id":"0","tipo":"tblImputados"
  ,"desItem":"FLUIDOS","idItem":"2"},{"id":"1","tipo":"tblImputados","desItem":"TOMA DE CABELLO","idItem"
  :"1"},{"id":"0","tipo":"tblVictimas","desItem":"TOMA DE CABELLO","idItem":"1"}]

  -"imputadosArray"
  [{"Nombre":"PERONA 1","Paterno":"APELLIDO PAT 1","Materno":"APELLIDO MAT 1","Domicilio":"DOMICILIO 1"
  ,"Genero":"1","Alias":"ALIAS 1","Municipio":"0","Telefono":"1234567890","Email":"mail1@mail1.com","Detenido"
  :"S","TipoPersona":"1","NombreMoral":""},{"Nombre":"PERSONA 2","Paterno":"APELLIDO PAT 2","Materno":"APELLIDO
  MAT 2","Domicilio":"DOMICILIO 2","Genero":"2","Alias":"ALIAS 2","Municipio":"0","Telefono":"0123456789"
  ,"Email":"mail2@mail2.com","Detenido":"S","TipoPersona":"1","NombreMoral":""}]

  -"victimasArray"
  [{"Nombre":"VITIMA 1","Paterno":"APELLIDO PAT VICTIMA 1","Materno":"APELLIDO MAT VICTIMA 1","Domicilio"
  :"DOMICILIO VICTIMA 1","Genero":"1","Municipio":"0","Telefono":"0123456789","Email":"mail2@mail2.com"
  ,"TipoPersona":"1","NombreMoral":""}]

  -"delitosArray"
  [{"cveDelito":"74"},{"cveDelito":"149"}]

  -"solicitud"
  <p>detalle de la solicitud por parte del m.p.<br/></p>

  -"mpsResponsablesArray"
  [{"Nombre":"PRUEBA","Paterno":"PRUEBA","Materno":"PRUEBA"},{"Nombre":"MP2","Paterno":"APE PAT MP2","Materno"
  :"APE MAT MP2"}]

  -"tutoresArray"
  []

  -"fileSolicitud"
  undefined
 */

#EJEMPLO ESTRUCTURA CORRECTA DE EL JSON QUE DEBE ENVIAR EL MP
/*
  {
  "juzgadoSolicitar": "762",
  "cveTipoCarpeta": "0",
  "numeroCarpeta": "",
  "anioCarpeta": "",
  "juzgadoProcedencia": "0",
  "carpetaInvestigacion": "123",
  "nuc": "",
  "eMailMP": "ricardo.ortiz@pjedomex.gob.mx",
  "examensArray": [
  {
  "id":"0",
  "tipo":"tblImputados",
  "desItem":"DAÑOS CORPORALES",
  "idItem":"3"
  },{
  "id":"0",
  "tipo":"tblImputados",
  "desItem":"AMPUTACIONES",
  "idItem":"4"
  },{
  "id":"1",
  "tipo":"tblImputados",
  "desItem":"AMPUTACIONES",
  "idItem":"4"
  },{
  "id":"0",
  "tipo":"tblVictimas",
  "desItem":"AMPUTACIONES",
  "idItem":"4"
  }
  ],
  "muestrasArray": [
  {
 * "id":"0",
 * "tipo":"tblImputados",
 * "desItem":"TOMA DE CABELLO",
 * "idItem":"1"
 * },{
 * "id":"0",
 * "tipo":"tblImputados"
  ,"desItem":"FLUIDOS","idItem":"2"},{"id":"1","tipo":"tblImputados","desItem":"TOMA DE CABELLO","idItem"
  :"1"},{"id":"0","tipo":"tblVictimas","desItem":"TOMA DE CABELLO","idItem":"1"}
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
//  "imputadosArray": [
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
//$SolicitudesMuestrasServer = new SolicitudesMuestrasServer();
//print_r($SolicitudesMuestrasServer->insertSolicitudMuestra("", "", $json));
?>

