<?php

date_default_timezone_set('America/Mexico_City');
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesaudiencias/SolicitudesaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesaudiencias/SolicitudesaudienciasController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/resumensolicitudaudiencia/ResumensolicitudaudienciaController.Class.php");

//para valitad tipo de carpeta
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/autoresaudiencias/AutoresaudienciasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/autoresaudiencias/AutoresaudienciasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");

class SolicitudesServer {

    public function validarSolicitudesaudiencias($SolicitudesaudienciasDto) {
        $SolicitudesaudienciasDto->setidSolicitudAudiencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getidSolicitudAudiencia())))));
        $SolicitudesaudienciasDto->setcveCatAudiencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveCatAudiencia())))));
        $SolicitudesaudienciasDto->setcveJuzgadoDesahoga(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveJuzgadoDesahoga())))));
        $SolicitudesaudienciasDto->setcveJuzgado(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveJuzgado())))));
        $SolicitudesaudienciasDto->setcveConsignacion(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveConsignacion())))));
        $SolicitudesaudienciasDto->setcveEtapaProcesal(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveEtapaProcesal())))));
        $SolicitudesaudienciasDto->setidReferencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getidReferencia())))));
        $SolicitudesaudienciasDto->setfechaEnvio(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getfechaEnvio())))));
        $SolicitudesaudienciasDto->setcveTipoCarpeta(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveTipoCarpeta())))));
        $SolicitudesaudienciasDto->setnumero(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getnumero())))));
        $SolicitudesaudienciasDto->setanio(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getanio())))));
        $SolicitudesaudienciasDto->setactivo(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getactivo())))));
        $SolicitudesaudienciasDto->setcarpetaInv(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcarpetaInv())))));
        $SolicitudesaudienciasDto->setnuc(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getnuc())))));
        $SolicitudesaudienciasDto->setcveUsuario(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveUsuario())))));
        $SolicitudesaudienciasDto->setcveAdscripcionSolicita(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveAdscripcionSolicita())))));
        $SolicitudesaudienciasDto->setmismoJuzgador(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getmismoJuzgador())))));
        $SolicitudesaudienciasDto->setcveEstatusSolicitud(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveEstatusSolicitud())))));
        $SolicitudesaudienciasDto->setobservaciones(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getobservaciones())))));
        $SolicitudesaudienciasDto->setnumImputados(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getnumImputados())))));
        $SolicitudesaudienciasDto->setnumDelitos(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getnumDelitos())))));
        $SolicitudesaudienciasDto->setnumOfendidos(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getnumOfendidos())))));
        $SolicitudesaudienciasDto->setcveNaturaleza(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveNaturaleza())))));
        $SolicitudesaudienciasDto->setcveTipoAudiencia(trim(mb_strtoupper(utf8_decode(str_replace("'", "", $SolicitudesaudienciasDto->getcveTipoAudiencia())))));

        return $SolicitudesaudienciasDto;
    }

    public function creaSolicitud($json, $u = '', $p = '') {
        if ($json != '' && $this->isJSON($json)) {

            /*
             * $this->isValid('0889b998962b6baddd35266eb5a5c0aa0ce71e48', '6c4b54ef3da28a144e82c5631b6160840c78d571')
             */
            if (true) {

                $data = json_decode($json, true);

                $autoresAudienciasDto = new AutoresaudienciasDTO();
                $autoresAudienciasDao = new AutoresaudienciasDAO();

                $autoresAudienciasDto->setActivo("S");
                $autoresAudienciasDto->setCveCatAudiencia($data['cveCatAudiencia']);
                $autoresAudienciasDto->setCveGrupo(103);

                $autoresAudienciasDto = $autoresAudienciasDao->selectAutoresaudiencias($autoresAudienciasDto);
                if ($autoresAudienciasDto != "") {


                    $solicitudesaudienciasDto = new SolicitudesaudienciasDTO();

                    $valida = $this->validaData($data);

                    if ($valida['estatus'] == 'error') {
                        $response = [
                            'estatus' => 'error',
                            'mensaje' => json_encode($valida['mensaje'])
                        ];

                        return json_encode($response);
                    }


                    $bitacoraWsDto = new BitacorawsDTO();
                    $BitacoraWsRespDto = new BitacorawsDTO();
                    $bitacoraWsDao = new BitacorawsDAO();

                    $fechaRegistro = date("Y-m-d H:i:s");


                    $bitacoraWsDto->setCveAccionws(2); //cREA SOLICITUD AUDIENCIA
                    $bitacoraWsDto->setObservacionesOrigen($json);
                    $bitacoraWsDto->setHrefOrigen("SOLICITUD DE AUDIENICA M.P.");
                    $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                    $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);

                    $solicitudesaudienciasDto->setCveJuzgado(@$data['cveJuzgado']);
                    $solicitudesaudienciasDto->setCveTipoCarpeta(@$data['cveTipoCarpeta']);
                    $solicitudesaudienciasDto->setNumero(@$data['numero']);
                    $solicitudesaudienciasDto->setAnio(@$data['anio']);
                    $solicitudesaudienciasDto->setCarpetaInv(@$data['carpetaInv']);
                    $solicitudesaudienciasDto->setNuc(@$data['nuc']);
                    $solicitudesaudienciasDto->setNumImputados(@$data['numImputados']);
                    $solicitudesaudienciasDto->setNumOfendidos(@$data['numOfendidos']);
                    $solicitudesaudienciasDto->setNumDelitos(@$data['numDelitos']);
                    $solicitudesaudienciasDto->setCveConsignacion(@$data['cveConsignacion']);
                    $solicitudesaudienciasDto->setCveCatAudiencia(@$data['cveCatAudiencia']);
                    $solicitudesaudienciasDto->setObservaciones(@$data['observaciones']);
                    $solicitudesaudienciasDto->setCveUsuario(@$data['cveUsuario']);
                    $solicitudesaudienciasDto->setActivo('S');

                    $solicitudesaudienciasDto = $this->validarSolicitudesaudiencias($solicitudesaudienciasDto);

                    $solicitudAudienciaController = new SolicitudesaudienciasController();

                    $response = $solicitudAudienciaController->guardarSolicitudDeAudiencia($solicitudesaudienciasDto);
                    $jsonRespuesta = $response;

                    $response = json_decode($response, true);

                    if ($rsBitacoraWsDto != "") {
                        $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                        $BitacoraWsRespDto->setDescEstatusBitacoraws($response['status']);
                        $BitacoraWsRespDto->setObservacionesDestino($jsonRespuesta);
                        $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                    }

                    if ($response['status'] == 'Ok') {

                        $response = [
                            'estatus' => 'ok',
                            'mensaje' => utf8_encode($response['msj']),
                            'datos' => $response['resultado']
                        ];
                    } else {
                        $response = [
                            'estatus' => 'error',
                            'mensaje' => $response['Error']
                        ];
                    }
                } else {
                    $response = [
                        'estatus' => 'error',
                        'mensaje' => utf8_encode('El tipo de audiencia no puede ser solicitada por un M.P.')
                    ];
                }
            } else {

                $response = [
                    'estatus' => 'error',
                    'mensaje' => utf8_encode('Usuario y/o contraseña incorrectos, verifica con informatica')
                ];
            }
        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => utf8_encode('el parámetro de entrada no puede estar vacío y tiene que ser un json válido')
            ];
        }

        return json_encode($response);
    }

    public function actualizaSolicitud($json, $u = '', $p = '') {
        if ($json != '' && $this->isJSON($json)) {

            /*
             * validar usuario y contraseña
             */

            if (true) {

                $data = json_decode($json, true);

                $solicitudesaudienciasDto = new SolicitudesaudienciasDTO();

                $solicitudesaudienciasDto->setIdSolicitudAudiencia(@$data['idSolicitudAudiencia']);
                $solicitudesaudienciasDto->setCveJuzgado(@$data['cveJuzgado']);
                $solicitudesaudienciasDto->setCveTipoCarpeta(@$data['cveTipoCarpeta']);
                $solicitudesaudienciasDto->setNumero(@$data['numero']);
                $solicitudesaudienciasDto->setAnio(@$data['anio']);
                $solicitudesaudienciasDto->setCarpetaInv(@$data['carpetaInv']);
                $solicitudesaudienciasDto->setNuc(@$data['nuc']);
                $solicitudesaudienciasDto->setNumImputados(@$data['numImputados']);
                $solicitudesaudienciasDto->setNumOfendidos(@$data['numOfendidos']);
                $solicitudesaudienciasDto->setNumDelitos(@$data['numDelitos']);
                $solicitudesaudienciasDto->setCveConsignacion(@$data['cveConsignacion']);
                $solicitudesaudienciasDto->setCveCatAudiencia(@$data['cveCatAudiencia']);
                $solicitudesaudienciasDto->setObservaciones(@$data['observaciones']);
                $solicitudesaudienciasDto->setActivo('S');

                $solicitudAudienciaController = new SolicitudesaudienciasController();

                $response = $solicitudAudienciaController->guardarSolicitudDeAudiencia($solicitudesaudienciasDto);

                $response = json_decode($response, true);


                if ($response['status'] == 'Ok') {

                    $response = [
                        'estatus' => 'ok',
                        'mensaje' => utf8_encode($response['msj']),
                        'datos' => $response['resultado']
                    ];
                } else {
                    $response = [
                        'estatus' => 'error',
                        'mensaje' => $response['msj']
                    ];
                }
            } else {

                $response = [
                    'estatus' => 'error',
                    'mensaje' => utf8_encode('el usuario y/o contraseña no son válidos')
                ];
            }
        } else {
            $response = [
                'estatus' => 'error',
                'mensaje' => utf8_encode('el parámetro de entrada no es un json válido')
            ];
        }

        return json_encode($response);
    }

    public function consultaSolicitudes($json, $u = '', $p = '') {

        if ($json != '' && $this->isJSON($json)) {

            /*
             * validar si el usuario y contraseña con correctos.
             * $this->isValid('0889b998962b6baddd35266eb5a5c0aa0ce71e48', '6c4b54ef3da28a144e82c5631b6160840c78d571')
             */
            if (true) {

                $data = json_decode($json, true);

                /*
                 * asignar los valores de entrada al dto de solicitud de audiencia
                 */
                @$cveJuzgado = $data['cveJuzgado'];
                @$cveTipoCarpeta = $data['cveTipoCarpeta'];
                @$numero = $data['numero'];
                @$anio = $data['anio'];
                @$carpetaInv = $data['carpetaInv'];
                @$nuc = $data['nuc'];
                @$fechaInicio = $this->fechaMysql($data['fechaInicio']);
                @$fechaFin = $this->fechaMysql($data['fechaFin']);

                $param = array();
                $param["paginacion"] = false;

                if ($fechaInicio != "") {
                    @$param["fechaInicialConsulta"] = $fechaInicio;
                } else {
                    @$param["fechaInicialConsulta"] = ("");
                }
                if ($fechaFin != "") {
                    @$param["fechaFinalConsulta"] = $fechaFin;
                } else {
                    @$param["fechaFinalConsulta"] = ("");
                }
                @$param["pag"] = '';
                @$param["cantxPag"] = '10';
                @$param["paginacion"] = '';
                @$param["generico"] = '';

                $solicitudesaudienciasDto = new SolicitudesaudienciasDTO();

                $solicitudesaudienciasDto->setCveJuzgado($cveJuzgado);
                $solicitudesaudienciasDto->setCveTipoCarpeta($cveTipoCarpeta);
                $solicitudesaudienciasDto->setNumero($numero);
                $solicitudesaudienciasDto->setAnio($anio);
                $solicitudesaudienciasDto->setCarpetaInv($carpetaInv);
                $solicitudesaudienciasDto->setNuc($nuc);
                $solicitudesaudienciasDto->setActivo('S');

                $f1 = $param["fechaInicialConsulta"];
                $f2 = $param["fechaFinalConsulta"];
                $detenido = false;
                if ($f1 > $f2) {
                    $mensaje = array("estatus" => "error", "mensaje" => "La Fecha Inicial no puede ser mayor a la Fecha Final");

                    return json_encode($mensaje);
                }
                $SolicitudesaudienciasDto = $this->validarSolicitudesaudiencias($solicitudesaudienciasDto);
                $SolicitudesaudienciasController = new SolicitudesaudienciasController();
                $SolicitudesaudienciasDto = $SolicitudesaudienciasController->selectSolicitudesaudiencias($SolicitudesaudienciasDto, $param);

                $juzgadosDto = new JuzgadosDTO ();
                $juzgadosDao = new JuzgadosDAO ();
                $catAudienciasDto = new CataudienciasDTO();
                $catAudienciasDao = new CataudienciasDAO();

                $imputadossolicitudesDto = new ImputadossolicitudesDTO();
                $imputadossolicitudesDao = new ImputadossolicitudesDAO();

                $json = "";
                $x = 1;
                if ($SolicitudesaudienciasDto != "") {
                    $json .= "{";
                    $json .= '"estatus":"Ok",';
                    $json .= '"mensaje":"consulta realizada con exito",';
                    $json .= '"total":"' . count($SolicitudesaudienciasDto) . '",';
                    $json .= '"datos":[';
                    foreach ($SolicitudesaudienciasDto as $Solicitudaudiencia) {
                        $juzgadosDto->setCveJuzgado($Solicitudaudiencia->getCveJuzgado());
                        $rsJuzgado = $juzgadosDao->selectJuzgados($juzgadosDto);

                        $catAudienciasDto->setCveCatAudiencia($Solicitudaudiencia->getCveCatAudiencia());
                        $rsCatAudiencias = $catAudienciasDao->selectCataudiencias($catAudienciasDto);

                        $imputadossolicitudesDto->setIdSolicitudAudiencia($Solicitudaudiencia->getIdSolicitudAudiencia());
                        $rsimputadosSolicitudes = $imputadossolicitudesDao->selectimputadossolicitudes($imputadossolicitudesDto);
                        if ($rsimputadosSolicitudes != "") {
                            foreach ($rsimputadosSolicitudes as $rsimputadoSolicitud) {
                                if ($rsimputadoSolicitud->getDetenido() == "S") {
                                    $detenido = true;
                                }
                            }
                        }

                        $json .= "{";
                        $json .= '"idSolicitudAudiencia":' . json_encode(utf8_encode($Solicitudaudiencia->getIdSolicitudAudiencia())) . ",";
                        $json .= '"cveCatAudiencia":' . json_encode(utf8_encode($Solicitudaudiencia->getCveCatAudiencia())) . ",";
                        if ($rsCatAudiencias != "") {
                            $json .= '"desAudiencia":' . json_encode(utf8_encode($rsCatAudiencias[0]->getDesCatAudiencia())) . ",";
                        } else {
                            $json .= '"desAudiencia": "",';
                        }
                        $json .= '"cveJuzgadoDesahoga":' . json_encode(utf8_encode($Solicitudaudiencia->getCveJuzgadoDesahoga())) . ",";
                        $json .= '"cveJuzgado":' . json_encode(utf8_encode($Solicitudaudiencia->getCveJuzgado())) . ",";
                        if ($rsJuzgado != "") {
                            $json .= '"desJuzgado":' . json_encode(utf8_encode($rsJuzgado[0]->getDesJuzgado())) . ",";
                        } else {
                            $json .= '"desJuzgado": "",';
                        }

                        if ($detenido == true) {
                            $json .= '"detenido":' . json_encode(utf8_encode("S")) . ",";
                        } else {
                            $json .= '"detenido":' . json_encode(utf8_encode("N")) . ",";
                        }

                        $json .= '"cveConsignacion":' . json_encode(utf8_encode($Solicitudaudiencia->getCveConsignacion())) . ",";
                        $json .= '"cveEtapaProcesal":' . json_encode(utf8_encode($Solicitudaudiencia->getCveEtapaProcesal())) . ",";
                        $json .= '"idReferencia":' . json_encode(utf8_encode($Solicitudaudiencia->getIdReferencia())) . ",";
                        $fecha = explode(" ", $Solicitudaudiencia->getFechaRegistro());
                        $json .= '"fechaRegistro":' . json_encode(utf8_encode($this->fechaNormal($fecha[0]))) . ",";
                        $json .= '"fechaActualizacion":' . json_encode(utf8_encode($Solicitudaudiencia->getFechaActualizacion())) . ",";
                        $json .= '"fechaEnvio":' . json_encode(utf8_encode($Solicitudaudiencia->getFechaEnvio())) . ",";
                        $json .= '"cveTipoCarpeta":' . json_encode(utf8_encode($Solicitudaudiencia->getCveTipoCarpeta())) . ",";
                        $json .= '"numero":' . json_encode(utf8_encode($Solicitudaudiencia->getNumero())) . ",";
                        $json .= '"anio":' . json_encode(utf8_encode($Solicitudaudiencia->getAnio())) . ",";
                        $json .= '"activo":' . json_encode(utf8_encode($Solicitudaudiencia->getActivo())) . ",";
                        $json .= '"carpetaInv":' . json_encode(utf8_encode($Solicitudaudiencia->getCarpetaInv())) . ",";
                        $json .= '"nuc":' . json_encode(utf8_encode($Solicitudaudiencia->getNuc())) . ",";
                        $json .= '"cveUsuario":' . json_encode(utf8_encode($Solicitudaudiencia->getCveUsuario())) . ",";
                        $json .= '"cveAdscripcionSolicita":' . json_encode(utf8_encode($Solicitudaudiencia->getCveAdscripcionSolicita())) . ",";
                        $json .= '"mismoJuzgador":' . json_encode(utf8_encode($Solicitudaudiencia->getMismoJuzgador())) . ",";
                        $json .= '"cveEstatusSolicitud":' . json_encode(utf8_encode($Solicitudaudiencia->getCveEstatusSolicitud())) . ",";
                        $json .= '"observaciones":' . json_encode(utf8_encode($Solicitudaudiencia->getObservaciones())) . ",";
                        $json .= '"numImputados":' . json_encode(utf8_encode($Solicitudaudiencia->getNumImputados())) . ",";
                        $json .= '"numOfendidos":' . json_encode(utf8_encode($Solicitudaudiencia->getNumOfendidos())) . ",";
                        $json .= '"numDelitos":' . json_encode(utf8_encode($Solicitudaudiencia->getNumDelitos())) . ",";
                        $json .= '"cveNaturaleza":' . json_encode(utf8_encode($Solicitudaudiencia->getCveNaturaleza())) . ",";
                        $json .= '"cveTipoAudiencia":' . json_encode(utf8_encode($Solicitudaudiencia->getCveTipoAudiencia())) . "";

                        $json .= "}" . "\n";
                        $x ++;
                        if ($x <= count($SolicitudesaudienciasDto)) {
                            $json .= ",";
                        }
                    }

                    $json .= "],";
                    $json .= '"pagina":' . json_encode(utf8_encode($param["pag"])) . ",";
                    $json .= '"total":"' . count($SolicitudesaudienciasDto) . '"';
                    $json .= "}";
                } else {
                    $json .= '{"estatus":"error",';
                    $json .= '"mensaje":"No se encontraron resultados."}';
                }

                return $json;
            } else {
                $response = [
                    'estatus' => 'error',
                    'mensaje' => utf8_encode('el usuario y/o contraseña no son válidos')
                ];

                return $response;
            }
        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => utf8_encode('el parametro de entrada no es un json valido')
            ];

            return json_encode($response);
        }
    }

    public function consultarResumen($json, $u = '', $p = '') {


        if ($json != '' && $this->isJSON($json)) {

            /*
             * validar si el usuario y contraseña con correctos.
             * $this->isValid('0889b998962b6baddd35266eb5a5c0aa0ce71e48', '6c4b54ef3da28a144e82c5631b6160840c78d571')
             */
            if (true) {

                $data = json_decode($json, true);

                /*
                 * asignar los valores de entrada al array para realizar la consulta
                 */
                @$idSolicitudAudiencia = $data['idSolicitud'];

//                return $idSolicitudAudiencia;

                $ResumensolicitudaudienciaController = new ResumensolicitudaudienciaController();
                $response = $ResumensolicitudaudienciaController->consultarResumen($idSolicitudAudiencia);
                $response = json_encode($response);

                return $response;
            } else {
                $response = [
                    'estatus' => 'error',
                    'mensaje' => utf8_encode('el usuario y/o contraseña no son válidos')
                ];

                return $response;
            }
        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => utf8_encode('el parametro de entrada no es un json valido')
            ];

            return json_encode($response);
        }
    }

    public function envio($json, $u = '', $p = '') {


        if ($json != '' && $this->isJSON($json)) {

            /*
             * validar si el usuario y contraseña con correctos.
             * $this->isValid('0889b998962b6baddd35266eb5a5c0aa0ce71e48', '6c4b54ef3da28a144e82c5631b6160840c78d571')
             */
            if (true) {

                $data = json_decode($json, true);




                $bitacoraWsDto = new BitacorawsDTO();
                $BitacoraWsRespDto = new BitacorawsDTO();
                $bitacoraWsDao = new BitacorawsDAO();

                $fechaRegistro = date("Y-m-d H:i:s");


                $bitacoraWsDto->setCveAccionws(7); //ENVIO SOLICITUD DE AUDIENCIA
                $bitacoraWsDto->setObservacionesOrigen($json);
                $bitacoraWsDto->setHrefOrigen("ENVIO SOLICITUD DE AUDIENCIA");
                $bitacoraWsDto->setFechaRegistro($fechaRegistro);
                $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);



                /*
                 * asignar los valores de entrada al array para realizar la consulta
                 */
                @$param = array();
                $param["idSolicitudAudienca"] = $data['idSolicitud'];
                @$param["mismoJuzgador"] = "N"; //(isset($data['mismoJuzgador']) ? "N":$data['mismoJuzgador']);
                @$param["tribunal"] = "N"; //$data['tribunal'];



                $ResumensolicitudaudienciaController = new ResumensolicitudaudienciaController();
                $response = $ResumensolicitudaudienciaController->enviarSolicitudAudiencia($param, "");

                if ($rsBitacoraWsDto != "") {
                    $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                    $BitacoraWsRespDto->setDescEstatusBitacoraws("");
                    $BitacoraWsRespDto->setObservacionesDestino(json_encode($response));
                    $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
                }


                $response = json_encode($response);
            } else {
                $response = [
                    'estatus' => 'error',
                    'mensaje' => utf8_encode('el usuario y/o contraseña no son válidos')
                ];

                $response;
            }
        } else {

            $response = [
                'estatus' => 'error',
                'mensaje' => utf8_encode('el parametro de entrada no es un json valido')
            ];
        }
        return $response;
    }

    private function isValid($user = "", $password = "") {
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

    private function fechaNormal($fecha) {
        list($year, $mes, $dia) = explode("-", $fecha);

        return $dia . "/" . $mes . "/" . $year;
    }

    private function fechaMysql($fecha) {
        list($dia, $mes, $year) = explode("/", $fecha);

        return $year . "-" . $mes . "-" . $dia;
    }

    private function validaData($data) {
        try {

            //valida el tipo de carpeta si existe
            if (isset($data['cveTipoCarpeta'])) {
                $tiposCarpetasDao = new TiposcarpetasDAO();
                $tiposCarpetasDto = new TiposcarpetasDTO();

                $tiposCarpetasDto->setCveTipoCarpeta($data['cveTipoCarpeta']);
                $tiposCarpetasDto->setActivo('S');

                $selectTipoCarpeta = $tiposCarpetasDao->selectTiposcarpetas($tiposCarpetasDto);

                if ($selectTipoCarpeta == '')
                    throw new Exception('No existe el tipo de carpeta especificado');
            }

            $response = [
                'estatus' => 'ok',
                'mensaje' => 'ok'
            ];
        } catch (Exception $e) {

            $response = [
                'estatus' => 'error',
                'mensaje' => $e->getMessage()
            ];
        }

        return $response;
    }

}

//$u = "3lectronic0_Poder2014";
//$p = "2014Poder_3lectronic0";
//$pasoUno = new SolicitudesServer();
//$json = '{"idSolicitudAudiencia": "1109350", "idSolicitud": "1109350"}';
//$rsno = $pasoUno->envio($json, $u, $p);
////echo $rsno;

ini_set("soap.wsdl_cache_enabled", "0");
$server = new SoapServer("SolicitudesScramble.wsdl");
$server->setClass("SolicitudesServer");
$server->handle();
