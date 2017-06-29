<?php

date_default_timezone_set('America/Mexico_City');

require_once("../../../controladores/sigejupe/imputadossolicitudes/ImputadossolicitudesController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");

class ImputadosSolicitudesServer {

    /**
     *  Valida si la informacion que se esta enviando es un json
     * @param json $json
     * @return boolean
     */
    public function isArray($json) {
        $json = json_decode($json, true);
        return (is_array($json)) ? true : true;
    }

    /**
     * Validacion De datos
     * @param json $jsonRequest
     * @return true
     */
    public function validarInformacion($informacion) {
        if (count($informacion) > 0) {
            foreach ($informacion as $arreglo) {
                if (count($arreglo["imputado"]) != 0)
                    return array("type" => "Error", "mensaje" => utf8_encode("No hay Informaci&oacute;n del Imputado"));
                else if (cout($arreglo["telefonos"]) != 0)
                    return array("type" => "Error", "mensaje" => utf8_encode("No hay Informaci&oacute;n de tel&eacute;fonos del Imputado"));
                else if (count($arreglo["tutores"]) != 0)
                    return array("type" => "Error", "mensaje" => utf8_encode("No hay Informaci&oacute;n de Tutores del Imputado"));
            }
        } else {
            return false;
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    public function consultarImputadoSolicitud($data, $u = '', $p = '') {
        $u = isset($u) ? $u : '3lectronic0_Poder2014';
        $p = isset($p) ? $p : '2014Poder_3lectronic0';

        if (true) {

            if ($data != '') {
                if ($this->isJSON($data)) {

                    $imputadoSolicitudController = new ImputadossolicitudesController();
                    $response = $imputadoSolicitudController->selectImputadossolicitudesWebService($data);

                    if ($response['estatus'] == 'Ok') {
                        $response = [
                            'estatus' => 'ok',
                            'mensaje' => $response['mensaje'],
                            'datos' => $response['data']
                        ];
                    } else {

                        $response = [
                            'estatus' => 'error',
                            'mensaje' => $response['mensaje']
                        ];
                    }
                } else {

                    $response = [
                        'estatus' => 'Error',
                        'mensaje' => 'El json recibido no tiene un formato válido'
                    ];
                }
            } else {
                $response = [
                    'estatus' => 'error',
                    'mensaje' => 'El json a recibir se encuentra vacío'
                ];
            }
        } else {
            $response = [
                'estatus' => 'error',
                'text' => utf8_encode('Usuario y/o contraseña incorrectos, verifica con informatica')
            ];
        }
        return json_encode($response);
    }

    public function guardarImputadoSolicitud($data = '', $u = '', $p = '') {
        $u = isset($u) ? $u : '3lectronic0_Poder2014';
        $p = isset($p) ? $p : '2014Poder_3lectronic0';

        /*
         * validar usuario y contraseña
         * $this->isValid(sha1($u), sha1($p)
         */
        if (true) {

            if ($data != '') {

                if ($this->isJSON($data)) {

                    $bitacoraWsDto = new BitacorawsDTO();
                    $BitacoraWsRespDto = new BitacorawsDTO();
                    $bitacoraWsDao = new BitacorawsDAO();

                    $fechaRegistro = date("Y-m-d H:i:s");


                    $bitacoraWsDto->setCveAccionws(3); //INSERTA IMPUTADO SOLICITUD DE AUDIENCIA
                    $bitacoraWsDto->setObservacionesOrigen($data);
                    $bitacoraWsDto->setHrefOrigen("INSERTA IMPUTADO SOLICITUD DE AUDIENCIA");
                    $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                    $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);



                    $imputadoSolicitudController = new ImputadossolicitudesController();
                    $response = $imputadoSolicitudController->crearImputadoWebService($data);
                    
                    print_R($response);

                    if ($rsBitacoraWsDto != "") {
                        $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                        $BitacoraWsRespDto->setDescEstatusBitacoraws("");
                        $BitacoraWsRespDto->setObservacionesDestino(json_encode($response));
                        $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                    }
                } else {

                    $response = [
                        'status' => 'Error',
                        'mensaje' => 'El json recibido no tiene un formato válido'
                    ];
                }
            } else {

                $response = [
                    'status' => 'Error',
                    'mensaje' => 'El json a recibir se encuentra vacío'
                ];
            }
        } else {
            $response = [
                'estatus' => 'error',
                'mensaje' => utf8_encode('Usuario y/o contraseña incorrectos, verifica con informatica')
            ];
        }


        return json_encode($response);
    }

    public function eliminarImputadoSolicitud($data, $u = '', $p = '') {

        $u = isset($u) ? $u : '3lectronic0_Poder2014';
        $p = isset($p) ? $p : '2014Poder_3lectronic0';

        /*
         * valida si el usuario y contraseña coinciden
         * $this->isValid(sha1($u), sha1($p))
         */
        if (true) {

            if ($this->isJSON($data)) {

                $imputadoSolicitudController = new ImputadossolicitudesController();
                $response = $imputadoSolicitudController->deleteImputadossolicitudesWebService($data);
            } else {

                $response = [
                    'estatus' => 'error',
                    'mensaje' => 'El json recibido no tiene un formato válido'
                ];
            }
        } else {
            $response = [
                'estatus' => 'error',
                'text' => utf8_encode('Usuario y/o contraseña incorrectos, verifica con informatica')
            ];
        }

        return json_encode($response);
    }

    public function editarImputadoSolicitud($data = '', $u = '', $p = '') {
        $u = isset($u) ? $u : '3lectronic0_Poder2014';
        $p = isset($p) ? $p : '2014Poder_3lectronic0';

        /*
         * validar usuario y contraseña
         * $this->isValid(sha1($u), sha1($p))
         */
        if (true) {

            if ($data != '') {

                if ($this->isJSON($data)) {

                    $imputadoSolicitudController = new ImputadossolicitudesController();
                    $response = $imputadoSolicitudController->ModificaImputadoWebService($data);
                } else {

                    $response = [
                        'status' => 'Error',
                        'mensaje' => 'El json recibido no tiene un formato válido'
                    ];
                }
            } else {

                $response = [
                    'status' => 'Error',
                    'mensaje' => 'El json a recibir se encuentra vacío'
                ];
            }
        } else {
            $response = [
                'totalCount' => 1,
                'data' => [
                    'type' => 'Error',
                    'text' => utf8_encode('Usuario y/o contraseña incorrectos, verifica con informatica')
                ]
            ];
        }


        return json_encode($response);
    }

    private function isJSON($string) {
        json_decode($string);

        return (json_last_error() == JSON_ERROR_NONE);
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

}
//
//$data = '[
//  {
//    "drogas": [
//      {
//        "cveDroga": "6",
//        "activo": "S"
//      }
//    ],
//    "telefonos": [
//      {
//        "activo": "S",
//        "telefono": "5989565608",
//        "celular": "5989565608",
//        "email": "yo@hotmail.com"
//      }
//    ],
//    "defensores": [
//      {
//        "cveTipoDefensor": "2",
//        "email": null,
//        "telefono": "9874936344",
//        "celular": "9874936344",
//        "nombre": "Fernando Lopez Peña"
//      }
//    ],
//    "imputado": {
//      "fechaControlDet": "20170206T202646",
//      "nombreMoral": "",
//      "fechaActualizacion": "",
//      "fechaImputacion": "19/02/2017",
//      "fechaDeclaracion": "20170215",
//      "cveEstadoCivil": "2",
//      "fecTerminoCons": "",
//      "cveInterprete": "2",
//      "cveCereso": "3",
//      "cveEstadoNacimiento": "9",
//      "cveOcupacion": "4",
//      "ingresoMensual": "5000",
//      "edad": "45",
//      "idSolicitudAudiencia": "1109342",
//      "cveTipoFamiliaLinguistica": "4",
//      "cveGenero": "1",
//      "cveDialectoIndigena": "2",
//      "estadoNacimiento": null,
//      "faseActual": "1",
//      "curp": null,
//      "detenido": "S",
//      "cveEstadoPsicofisico": "2",
//      "CveTipoReligion": "5",
//      "fechaRegistro": "",
//      "cveAlfabetismo": "1",
//      "rfc": "RORE910601YRK",
//      "cveEspanol": "1",
//      "personaMoral": "",
//      "municipioNacimiento": null,
//      "cveMunicipioNacimiento": "11",
//      "nombre": "Pedro",
//      "paterno": "Ramirez",
//      "fecCierreInv": "",
//      "cveTipoDetencion": "2",
//      "cveTipoReincidencia": "5",
//      "materno": "Arteaga",
//      "cveGrupoEdnico": "23",
//      "cveNivelInstruccion": "1",
//      "cvePaisNacimiento": "245",
//      "alias": "el pecas",
//      "relacionMoral": "N",
//      "cveTipoPersona": "1",
//      "fechaNacimiento": null
//    },
//    "nacionalidad": [
//      {
//        "cvePais": "260"
//      }
//    ],
//    "domicilios": [
//      {
//        "latitud": null,
//        "cvePais": "260",
//        "numInterior": "44",
//        "numExterior": "56",
//        "colonia": "Zona Centro",
//        "cveEstado": "1",
//        "cveTipoDeVivienda": "3",
//        "direccion": "calle 5",
//        "recidenciaHabitual": "N",
//        "cveMunicipio": "6",
//        "municipio": null,
//        "DomicilioProcesal": "S",
//        "cp": "20670",
//        "estado": null,
//        "longitud": null,
//        "cveConvivencia": "9"
//      }
//    ],
//    "tutores": []
//  }
//]';
//$u = "";
//$p = "";
//
//$pasoDos = new ImputadosSolicitudesServer();
//$pasoDos = $pasoDos->guardarImputadoSolicitud($data, $u, $p);

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("ImputadosSolicitudesServerScramble.wsdl");
$server->setClass("ImputadosSolicitudesServer");
$server->handle();
?>
