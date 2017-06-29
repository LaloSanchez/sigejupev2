<?php

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/ofendidossolicitudes/OfendidossolicitudesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");

class PasoTresServer {

    public function insertarOfendidos($data = '', $u = '', $p = '') {
        $u = isset($u) ? $u : '3lectronic0_Poder2014';
        $p = isset($p) ? $p : '2014Poder_3lectronic0';

        /*
         * validar usuario y contraseña
         * $this->isValid(sha1($u), sha1($p)
         */
        if (true) {

            if ($data != '') {

//                if ($this->isJSON($data)) {



                $bitacoraWsDto = new BitacorawsDTO();
                $BitacoraWsRespDto = new BitacorawsDTO();
                $bitacoraWsDao = new BitacorawsDAO();

                $fechaRegistro = date("Y-m-d H:i:s");


                $bitacoraWsDto->setCveAccionws(4); //INSERTA IMPUTADO SOLICITUD DE AUDIENCIA
                $bitacoraWsDto->setObservacionesOrigen($data);
                $bitacoraWsDto->setHrefOrigen("INSERTA OFENDIDO SOLICITUD DE AUDIENCIA");
                $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);


                $ofendidoSolicitudController = new OfendidossolicitudesController();
                $response = $ofendidoSolicitudController->creaOfendido($data);
                    //$response = $ofendidoSolicitudController->insertOfendidossolicitudes($data);
//                } else {
//
//                    $response = [
//                        'status' => 'Error',
//                        'mensaje' => 'El json recibido no tiene un formato válido'
//                    ];
//                }

                $estatusBitacora = ($response['estatus'] == 'ok') ? 'Ok' : 'Error';


                if ($rsBitacoraWsDto != "") {
                    $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                    $BitacoraWsRespDto->setDescEstatusBitacoraws($estatusBitacora);
                    $BitacoraWsRespDto->setObservacionesDestino(json_encode($response));
                    $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
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

    public function editarOfendidos($data = '', $u = '', $p = '') {
        $u = isset($u) ? $u : '3lectronic0_Poder2014';
        $p = isset($p) ? $p : '2014Poder_3lectronic0';

        /*
         * validar usuario y contraseña
         * $this->isValid(sha1($u), sha1($p))
         */
        if (true) {

            if ($data != '') {

                if ($this->isJSON($data)) {

                    $ofendidoSolicitudController = new OfendidossolicitudesController();
                    $response = $ofendidoSolicitudController->insertOfendidossolicitudes($data);
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

    public function eliminarOfendidos($data, $u = '', $p = '') {

        $u = isset($u) ? $u : '3lectronic0_Poder2014';
        $p = isset($p) ? $p : '2014Poder_3lectronic0';

        /*
         * valida si el usuario y contraseña coinciden
         * $this->isValid(sha1($u), sha1($p))
         */
        if (true) {

            if ($this->isJSON($data)) {

                $ofendidoSolicitudController = new OfendidossolicitudesController();
                $response = $ofendidoSolicitudController->deleteOfendidossolicitudes($data);

                if ($response['status'] == 'ok') {

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

    public function obtenerOfendidos($data, $u = '', $p = '') {
        /*
         * valida si el usuario y contraseña coinciden
         * $this->isValid(sha1($u), sha1($p))
         */
        if (true) {

            if ($data != '') {
                if ($this->isJSON($data)) {

                    $ofendidoSolicitudController = new OfendidossolicitudesController();
                    $response = $ofendidoSolicitudController->selectOfendidossolicitudes($data);

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
        json_decode($string);

        return (json_last_error() == JSON_ERROR_NONE);
    }

}




//$u ="3lectronic0_Poder2014";
//$p = "2014Poder_3lectronic0";
//$json = '[{
//	"ofendido": {
//		"nombreMoral": "Elisa",
//		"fechaActualizacion": "",
//		"embarazada": "S",
//		"desaparecido": "S",
//		"cveEstadoCivil": "1",
//		"cveInterprete": "3",
//		"Rfc": null,
//		"cveEstadoNacimiento": "15",
//		"cveOcupacion": "4",
//		"ingresoMensual": "0",
//		"cveOrdenProteccion": "1",
//		"tutores": [],
//		"edad": "34",
//		"cveVictimaDeLaDelincuenciaOrganizada": "2",
//		"idSolicitudAudiencia": "1109347",
//		"cveTipoFamiliaLinguistica": "10",
//		"cveGenero": "2",
//		"cveDialectoIndigena": "2",
//		"estadoNacimiento": null,
//		"domicilios": [{
//			"latitud": null,
//			"cvePais": "119",
//			"numInterior": "6",
//			"numExterior": "56",
//			"colonia": "Centro",
//			"cveEstado": "15",
//			"cveTipoDeVivienda": "1",
//			"direccion": "calle 5",
//			"recidenciaHabitual": "N",
//			"cveMunicipio": "106",
//			"municipio": null,
//			"DomicilioProcesal": "S",
//			"cp": "50000",
//			"estado": null,
//			"longitud": null,
//			"cveConvivencia": "2"
//		}],
//		"cveVictimaDeViolenciaDeGenero": "2",
//		"faseActual": "",
//		"curp": null,
//		"numHijos": "4",
//		"cveEstadoPsicofisico": "4",
//		"CveTipoReligion": "2",
//		"defensores": [],
//		"fechaRegistro": "",
//		"cveAlfabetismo": "2",
//		"cveEspanol": "4",
//		"municipioNacimiento": null,
//		"cveVictimaDeAcoso": 3,
//		"cveMunicipioNacimiento": "55",
//		"nombre": "Elisa",
//		"paterno": "Rosas",
//		"activo": "S",
//		"fecCierreInv": "",
//		"cveTipoParte": 4,
//		"telefonos": [{
//			"activo": "S",
//			"telefono": "3878734523",
//			"celular": "3878734523",
//			"email": "victima@gmail.com"
//		}],
//		"materno": "Perez",
//		"cveGrupoEdnico": "20",
//		"cveNivelInstruccion": "1",
//		"cvePaisNacimiento": "119",
//		"alias": "N/A",
//		"cveVictimaDeTrata": "2",
//		"cveTipoPersona": "1",
//		"nacionalidades": [{
//			"cvePais": "119"
//		}],
//		"fechaNacimiento": null
//	}
//}]' ;
//
//$rs = new PasoTresServer();
//$rs = $rs->insertarOfendidos($json, $u, $p);
//print_r($rs);

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("PasoTresScramble.wsdl");
$server->setClass("PasoTresServer");
$server->handle();
