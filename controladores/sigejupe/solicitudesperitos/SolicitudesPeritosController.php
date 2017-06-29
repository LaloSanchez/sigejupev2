<?php

//ini_set("error_log", dirname(__FILE__) . "/../SolicitudesPeritosController.log");
//ini_set("log_errors", 1);
//ini_set('display_errors', 1);
session_start();
//header('Content-type: application/json; charset=iso-8859-1');
include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/SolicitudPeritoCliente.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/solicitudperito/DiasFestivos.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../contadores/ContadoresController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesperitos/SolicitudesperitosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesperitos/SolicitudesperitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuacionesestatus/ActuacionesestatusDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuacionesestatus/ActuacionesestatusDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedesactuaciones/AntecedesactuacionesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedesactuaciones/AntecedesactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/relacionexpedientejuzgado/RelacionexpedientejuzgadoDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/relacionexpedientejuzgado/RelacionexpedientejuzgadoDTO.Class.php");

class SolicitudesPeritosController {

    private function consultaCalendario($Dias) {
        $strJSON = "{";
        $strJSON .= "\"type\": \"countDays\",";
        $strJSON .= "\"calendario\": {";
        $strJSON .= "\"idDiasFestivos\": \"\",";
        $strJSON .= "\"Tipo\": \"\",";
        $strJSON .= "\"Fecha\": \"\",";
        $strJSON .= "\"Descripcion\": \"\"";
        $strJSON .= "},";
        $strJSON .= "\"params\": {";
        $strJSON .= "\"fechaInicio\": \"\","; // ejem. 2015-07-01, fecha inicial, si va vacia toma la fecha de hoy
        $strJSON .= "\"numeroDias\": \"$Dias\","; // N�mero de d�as a contabilizar. Si va vacio o cero, cuenta un (1) d�a
        $strJSON .= "\"contarSabados\": \"false\","; // Si se quiere que cuente los s�bados. Si va vacio es false
        $strJSON .= "\"contarDomingos\": \"false\","; // Si se quiere que cuente los domingos. Si va vacio es false
        $strJSON .= "\"contarFestivos\": \"false\","; // Si se quiere que cuente los d�as festivos. Si va vacio es false
        $strJSON .= "\"Orden\": \"Fecha ASC\""; // Fecha ASC
        $strJSON .= "}";
        $strJSON .= "}";
        $calendario = new Calendario();
        $login = $calendario->getCalendario($strJSON);
        $login = json_decode($login);
        return $login->fechaLimite;
    }

    public function obtenerDiasProtesta($diasProtesta) {
        @$fechaDiasProtesta = $this->consultaCalendario(trim($diasProtesta));
        if ($fechaDiasProtesta != "") {
            $fechaDiasProtesta = explode("/", $fechaDiasProtesta);
            @$fechaDiasProtesta = $fechaDiasProtesta[2] . "-" . $fechaDiasProtesta[1] . "-" . $fechaDiasProtesta[0];
        }
        return $fechaDiasProtesta;
    }

    public function guardarSolicitudePerito($SolicitudesPeritosActuacionesDTO, $datos) {
        $SolicitudPeritoCliente = new SolicitudPeritoCliente();
        //error_log("COMENZO EL PROCESO DE ELIMINACION DE SOLICITUD DE PERITAJE");
        $proveedor = new Proveedor("mysql", "sigejupe");
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $params = array();
        $params["fields"] = "now() as fecha";
        $selectDao = new SelectDAO();
        $resultados = $selectDao->selectDAOv2($params, $proveedor);
        $resultados = json_decode($resultados);
        if (!isset($resultados->resultados)) {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO OBTENER LA FECHA DE SOLICITUD ACTUAL"}';
        }
        $fechaSolicitud = $resultados->resultados[0]->fecha;
        $SolicitudesPeritosActuacionesDAO = new SolicitudesperitosDAO();
        $actuacionesDao = new ActuacionesDAO();
        $actuacionesDto = new ActuacionesDTO();
        $actuacionesDto->setCveJuzgado($SolicitudesPeritosActuacionesDTO->getCveJuzgado());
        $actuacionesDto->setSintesis("SOLICITUD DE PERITO");
        $actuacionesDto->setCveTipoActuacion("18"); //solicitud de perito
        $actuacionesDto->setIdReferencia($datos["idActuacion"]); // es el id del expediente origen (carpeta judicial, exhorto o amparo)
        $actuacionesDto->setObservaciones($SolicitudesPeritosActuacionesDTO->getObservaciones());
        $actuacionesDto->setCveUsuario($datos['cveUsuarioSistema']);
        $actuacionesDto->setActivo("S");
        $rs = $actuacionesDao->insertActuaciones($actuacionesDto, $proveedor);
        if ($rs == "") {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO AL INTENTAR REGISTRAR LA ACTUACION"}';
        }
        $actuacionEstatusDao = new ActuacionesestatusDAO();
        $actuacionEstatusDto = new ActuacionesestatusDTO();
        $actuacionEstatusDto->setActivo("S");
        $actuacionEstatusDto->setIdActuacion($rs[0]->getIdActuacion());
        $actuacionEstatusDto->setCveEstatus(50); //50 = registrada (solicitud de perito)
        if ($actuacionEstatusDao->insertActuacionesestatus($actuacionEstatusDto, $proveedor) == "") {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO AL INTENTAR REGISTRAR EL ESTATUS DE LA ACTUACION (SOLICITUD DE PERITO)"}';
        }
        $antecedesDao = new AntecedesactuacionesDAO();
        $antecedesDto = new AntecedesactuacionesDTO();
        $antecedesDto->setIdActuacionPadre($datos["idActuacionAcuerdo"]);
        $antecedesDto->setIdActuacionHija($rs[0]->getIdActuacion());
        $idActuacionPerito = $rs[0]->getIdActuacion();
        //$SolicitudesPeritosActuacionesDTO->setIdReferenciaActuacionHija($rs[0]->getIdActuacion());
        $SolicitudesPeritosActuacionesDTO->setIdActuacion($rs[0]->getIdActuacion());
        $rs = $antecedesDao->insertAntecedesactuaciones($antecedesDto, $proveedor);
        if ($rs == "") {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO AL INTENTAR REGISTRAR EL ANTECEDES DE LA ACTUACION"}';
        }
        $rs = $SolicitudesPeritosActuacionesDAO->insertSolicitudesperitos($SolicitudesPeritosActuacionesDTO, $proveedor);

        if ($rs == "") {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO AL INTENTAR REGISTRAR LA SOLICITUD DE PERITAJE}';
        }//obtenemos la fecha de dias de protesta
        $diasProtesta = $this->obtenerDiasProtesta($datos["diasProtesta"]);
        $json = '{"type": "insertSolicitud",
                  "data": [{
                  "idSolicitudePerito": "",
                  "numeroSolicitud": "",
                  "anioSolicitud": "",
                  "numero": "' . utf8_encode($datos["numero"]) . '",
                  "anio": "' . utf8_encode($datos["anio"]) . '",
                  "cveAdscripcion": "' . utf8_encode($SolicitudesPeritosActuacionesDTO->getCveJuzgado()) . '",
                  "cveMateria": "' . utf8_encode($datos["cveMateria"]) . '",
                  "nvaInstancia": "' . utf8_encode($datos["nvaInstancia"]) . '",
                  "idReferencia": "' . $idActuacionPerito . '",
                  "cveUsuarioSolicitante": "' . utf8_encode($datos["cveUsuarioSolicitante"]) . '",
                  "cvePerfil": "' . $datos["cvePerfil"] . '",
                  "cveSistema": "' . $datos["cveSistema"] . '",
                  "nomSolicitante": "' . utf8_encode($datos["PersonaSolicitante"]) . '",
                  "cveTipoNumero": "' . utf8_encode($datos["cveTipoNumero"]) . '",
                  "cveMateriaPericial": "' . utf8_encode($datos["cveMateriaPericial"]) . '",
                  "materiaPericial": "' . utf8_encode($datos["materiaPericial"]) . '",
                  "diasProtesta": "' . utf8_encode($datos["diasProtesta"]) . '",
                  "fechaDiasProtesta": "' . utf8_encode($diasProtesta) . '",
                  "idActuacionAcuerdo": "' . utf8_encode($datos["idActuacionAcuerdo"]) . '",      
                  "idPerito": "' . utf8_encode($datos["idPerito"]) . '",      
                  "nomPerito": "",
                  "observaciones": ' . json_encode($datos["observaciones"]) . ',
                  "Estatus": "",
                  "fechaSolicitud": "' . utf8_encode($fechaSolicitud) . '",
                  "fechaSolicitudOri": "",
                  "fechaNotificacion": "",
                  "fechaNotificacionOri": "",
                  "fechaProtesta": "",
                  "fechaProtestaOri": "",
                  "fechaConclusion": "",
                  "fechaConclusionOri": "",
                  "Peritos": "' . utf8_encode($datos["Peritos"]) . '",
                  "activo": "S",
                  "fechaRegistro": "",
                  "fechaHora": "",
                  "fechaActualizacion": "" }]}';
        /** SE REALIZA LA PETICION AL SERVICIO WEB DE PERITOS, EL PROCESO REGISTRARA EN EL SISTEMA DE PERITOS
          LA SOLICITUD DE PERITAJE */
        $json = $SolicitudPeritoCliente->ServiceSolicitudesPeritos($json);
        //error_log("antes del json decode del servicio json:" . print_r($json, true));
        $json = json_decode($json);
        //error_log("despues del servicio json:" . print_r($json, true));
        if ($json == null) {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO LA RESPUESTA DEL SERVICIO WEB. INTENTELO NUEVAMENTE"}';
        }
        if ($json->estatus != "ok") {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            $json->msj = "SERVICIO WEB: " . $json->msj;
            return json_encode($json);
        }
        $SolicitudesPeritosActuacionesDTO->setIdSolicitudPertioActuacion($rs[0]->getIdSolicitudPertioActuacion());
        $SolicitudesPeritosActuacionesDTO->setIdReferencia($json->resultados[0]->idSolicitudePerito);
        $SolicitudesPeritosActuacionesDTO->setNumeroSolicitud($json->resultados[0]->numeroSolicitud);
        $SolicitudesPeritosActuacionesDTO->setAniSolicitud($json->resultados[0]->anioSolicitud);
        $SolicitudesPeritosActuacionesDTO->setFechaSolicitud($json->resultados[0]->fechaSolicitud);
        //$SolicitudesPeritosActuacionesDTO->setImagen($json->resultados[0]->imagen);
        $SolicitudesPeritosActuacionesDTO->setIdPerito(utf8_decode($json->resultados[0]->idPerito));
        $SolicitudesPeritosActuacionesDTO->setNombrePerito(utf8_decode($json->resultados[0]->nomPerito));
        $SolicitudesPeritosActuacionesDTO->setCveRegionPericial($json->resultados[0]->cveRegionPericial);
        $SolicitudesPeritosActuacionesDTO->setCveMateriaPericial($json->resultados[0]->cveMateriaPericial);
        $SolicitudesPeritosActuacionesDTO->setMateriaPericial(utf8_decode($json->resultados[0]->MateriaPericial));
        $SolicitudesPeritosActuacionesDTO->setCveJuzgado($json->resultados[0]->cveAdscripcion);

        $rs = $SolicitudesPeritosActuacionesDAO->updateSolicitudesperitos($SolicitudesPeritosActuacionesDTO, $proveedor);
        //error_log("aaaaaaaaaaaaaaaaa: " . print_r($rs, true));
        if ($rs == "") {
            $proveedor->execute("ROLLBACK");
            $proveedor->close(); //el error es grave, ya que el servicio web de peritos confirmo la transaccion exitosa 
            //(aun no esta programado "webservice-rollback" para revertir los cambios producidos en el sistema de peritos)
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR GRAVE. FALLO AL INTENTAR ACTUALIZAR LA SOLICITUD DE PERITAJE"}';
        }
        $json->resultados[0]->idSolicitudePeritoActuacion = $rs[0]->getIdSolicitudPertioActuacion();
        $actuacionesDto->setIdActuacion($idActuacionPerito);
        $actuacionesDto->setNumActuacion($json->resultados[0]->numeroSolicitud);
        $actuacionesDto->setAniActuacion($json->resultados[0]->anioSolicitud);
        $actuacionesDto->setNumero($json->resultados[0]->numero);
        $actuacionesDto->setAnio($json->resultados[0]->anio);
        $actuacionesDto->setCveTipoCarpeta($json->resultados[0]->cveTipoNumero);
        $rs = $actuacionesDao->updateActuaciones($actuacionesDto, $proveedor);
        if ($rs == "") {
            $proveedor->execute("ROLLBACK");
            $proveedor->close(); //el error es grave, ya que el servicio web de peritos confirmo la transaccion exitosa 
            //(aun no esta programado "webservice-rollback" para revertir los cambios producidos en el sistema de peritos)
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR GRAVE. FALLO AL INTENTAR ACTUALIZAR LA ACTUALICION DE LA SOLICITUD DE PERITO"}';
        }
        $proveedor->execute("COMMIT");
        $proveedor->close();
        //error_log("josn: " . print_r($json, true));
        $json->resultados[0]->idActuacionPerito = $idActuacionPerito;
        $resultados = json_encode($json->resultados);
        $notificacion = json_encode($json->notificacion);
        return '{"estatus":"ok","msj":"SOLICITUD DE PERITAJE REGISTRADA EXITOSAMENTE","resultados":' . $resultados . ',"notificacion":' . $notificacion . '}';
    }

    public function autorizarPermisoWeb($datos, $proveedor) {
        /*         * OTORGA PERMISOS AL PERITO PARA QUE PUEDA VER EL EXPEDIENTE COMPLETO DESDE EL SISTEMA DE CONSULTA WEB */
        if ($datos["cedula"] == "") {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. EL PERITO NO POSEE CEDULA, COMUNIQUESE CON LA DIRECCION DE PERITOS."}';
        }
        ini_set("default_socket_timeout", 600);
        ini_set("soap.wsdl_cache_enabled", "0");
        $consultarElectronico = new SoapClient("http://dticursos.pjedomex.gob.mx/electronico/webservice/servidor/indicadores/IndicadoresServerScramble.wsdl");
        $json = '{"fields":"idtblPersonasAutorizadas,Usuario,Password",';
        $json .= '"tables":"tblpersonasautorizadas",';
        $json .= '"conditions":"Activo=1 AND Cedula=' . $datos["cedula"] . '"}';
        try {
            $respuesta = $consultarElectronico->selectDAO($json);
        } catch (Exception $e) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR AL CONSULTAR AL PERITO. SE PERDIO LA COMUNICACION CON EL SERVICIO WEB DEL SISTEMA DEL EXPEDIENTE ELECTRONICO. INTENTELO NUEVAMENTE"}';
        }
        $respuesta = json_decode($respuesta);
        $idPersonaAutorizada = 0;
        $passwordPerito = '';
        $usuarioPerito = '';
        if (isset($respuesta->resultados)) {
            $idPersonaAutorizada = $respuesta->resultados[0]->idtblPersonasAutorizadas;
            $passwordPerito = $respuesta->resultados[0]->Password;
            $usuarioPerito = $respuesta->resultados[0]->Usuario;
        }
        //consultamos los datos del perito (SISTEMA DE PERITOS)
        ini_set("default_socket_timeout", 500);
        ini_set("soap.wsdl_cache_enabled", "0");
        $consultarPerito = new SoapClient("http://dticursos.pjedomex.gob.mx/peritos/webservice/servidor/indicadores/IndicadoresServerScramble.wsdl");
        $json = '{"fields":"*",';
        $json .= '"tables":"tblperitos",';
        $json .= '"conditions":"idPerito=' . $datos["idPerito"] . '"}';
        try {
            $respuesta = $consultarPerito->selectDAO($json);
        } catch (Exception $e) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. SE PERDIO LA COMUNICACION CON EL SERVICIO WEB DEL SISTEMA DE PERITOS. INTENTELO NUEVAMENTE"}';
        }
        $respuesta = json_decode($respuesta);
        if (!isset($respuesta->resultados)) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE ENCONTRO EL PERITO (idPerito=' . $datos["idPerito"] . ') EN EL SISTEMA DE PERITOS."}';
        }
        $respuesta = $respuesta->resultados[0];
        if ($idPersonaAutorizada == 0) {//en caso de que no exista el registro, lo guardamos en la base de datos del sistema del expediente electronico (tblpersonasautorizadas)
            $pass = $this->crearLlave();
            $passwordPerito = $pass;
            $pwdCifrado = crypt($pass); //se realiza un hash a la llave
            ini_set("default_socket_timeout", 500);
            ini_set("soap.wsdl_cache_enabled", "0");
            $soapClient = new SoapClient("http://dticursos.pjedomex.gob.mx/electronico/webservice/servidor/personasautorizadassigejupe/PersonasautorizadasServer.php?wsdl");
            $json = '{"personaAutorizada":{';
            $json .= '"activo":"1",';
            $json .= '"curp":"' . $respuesta->CURP . '",';
            $json .= '"cedula":"' . $respuesta->cedula . '",';
            $json .= '"ciudad":' . json_encode($respuesta->ciudadPerito) . ',';
            $json .= '"cveEstado":"15",';
            $json .= '"cveEstatusRegistro":"2",'; //significa que el perito ya esta registrado de manera correcta
            $json .= '"cveRegistroComprobante":"",';
            $json .= '"cveTipoAbogado":"5",'; //perito
            $json .= '"direccion":' . json_encode($respuesta->direccionPerito) . ',';
            $json .= '"email":"' . $respuesta->email . '",';
            $json .= '"emailAlternativo":"' . $respuesta->email . '",';
            $json .= '"fechaBaja":"",';
            $json .= '"fechaNacimiento":"",';
            $json .= '"idtblPersonasAutorizadas":"",';
            $json .= '"materno":' . json_encode($respuesta->maternoPerito) . ',';
            $json .= '"nombre":' . json_encode($respuesta->nombrePerito) . ',';
            $json .= '"password":"' . $pass . '",';
            $json .= '"passwordCifrado":"' . $pwdCifrado . '",';
            $json .= '"paterno":' . json_encode($respuesta->paternoPerito) . ',';
            $json .= '"perito":"S",';
            $json .= '"selloDigital":"actualizame",';
            $json .= '"statusGenercionCorreo":"2",'; //Significa que se ha generado correctamente el correo del perito
            $json .= '"telefono":"' . $respuesta->telefono2 . '",';
            $json .= '"titulo":' . json_encode($respuesta->titulo) . ',';
            $json .= '"usuario":"' . $respuesta->cedula . '"}}';
            $usuarioPerito = $respuesta->cedula;
            try {
                $respuesta = $soapClient->guardarPersonaAutorizada($json);
            } catch (Exception $e) {
                return '{"estatus":"fail","totalCount":"0","msj":"ERROR AL REGISTRAR EL PERITO. SE PERDIO LA COMUNICACION CON EL SERVICIO WEB DEL SISTEMA DEL EXPEDIENTE ELECTRONICO. INTENTELO NUEVAMENTE"}';
            }
            $respuesta = json_decode($respuesta);
            if (!isset($respuesta->resultados)) {
                return '{"estatus":"fail","totalCount":"0","msj":"SERVICIO WEB (SISTEMA ELECTRONICO): ' . $respuesta->msj . '"}';
            }
            $idPersonaAutorizada = $respuesta->resultados[0]->idtblPersonasAutorizadas;
        }
        //otrogamos el permiso del perito para que pueda consultar el expediente en el sistema de consulta web
        $relacionExpedienteJuzgadoDao = new RelacionexpedientejuzgadoDAO();
        $relacionExpedienteJuzgadoDto = new RelacionexpedientejuzgadoDTO();
        $relacionExpedienteJuzgadoDto->setActivo("S");
        $relacionExpedienteJuzgadoDto->setIdPersonaAutorizada($idPersonaAutorizada);
        $relacionExpedienteJuzgadoDto->setIdCarpetajudicial($datos["idReferencia"]);
        $relacionExpedienteJuzgadoDto->setCveTipoParte("15"); //cveTipoParte = 15 = perito
        $relacionExpedienteJuzgadoDto->setCveTipoCarpeta($datos["cveTipoCarpeta"]);
        $respuesta = $relacionExpedienteJuzgadoDao->selectRelacionexpedientejuzgado($relacionExpedienteJuzgadoDto, "", $proveedor);
        $registro = 'S';
        if ($respuesta == "") {//si no posse el permiso
            $respuesta = $relacionExpedienteJuzgadoDao->insertRelacionexpedientejuzgado($relacionExpedienteJuzgadoDto, $proveedor);
            if ($respuesta == "") {
                return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO OTORGAR EL PERMISO AL PERITO, PARA QUE PUEDA CONSULTAR EL EXPEDIENTE"}';
            }
        } else {
            $registro = 'N';
        }
        $respuesta = $respuesta[0];
        $json = '{"estatus":"ok","totalCount":"1","msj":"PERMISO OTORGADO EXITOSAMENTE AL PERITO (idPerito=' . $datos["idPerito"] . ')","resultados":[{';
        $json .= '"registroNuevo":"' . $registro . '",';
        $json .= '"usuarioPerito":"' . $usuarioPerito . '",';
        $json .= '"passwordPerito":"' . $passwordPerito . '",';
        $json .= '"idRelacionExpedienteJuzgado":"' . $respuesta->getIdRelacionExpedienteJuzgado() . '",';
        $json .= '"idPersonaAutorizada":"' . $respuesta->getIdPersonaAutorizada() . '",';
        $json .= '"idCarpetaJudicial":"' . $respuesta->getIdCarpetajudicial() . '",';
        $json .= '"cveTipoCarpeta":"' . $respuesta->getCveTipoCarpeta() . '",';
        $json .= '"cveTipoParte":"' . $respuesta->getCveTipoParte() . '",';
        $json .= '"fechaRegistro":"' . $respuesta->getFechaRegistro() . '"}]}';
        return $json;
    }

    private function crearLlave() {//genera una cadena aleatoria de longitud 10
        $str = "ABCDEFGHJKLMNOPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz1234567890";
        $intNumCar = 10;
        $cad = "";
        for ($i = 0; $i < $intNumCar; $i++) {
            $cad .= substr($str, rand(0, strlen($str)), 1);
        }
        return $cad;
    }

    public function enviarDocumentoFirmadoAperito($datos) {
        if ($datos["archivoPdf"] == "S") {//debemos obtener la direccion del archivo pdf
            include_once(dirname(__FILE__) . "/../firmaelectronicahtml5/FirmaElectronicaController.php");
            $firmaElectronica = new FirmaElectronicaController();
            if (!isset($datos["idReferencia"]) || !isset($datos["cveTipoDocumentoFirma"]) || $datos["cveTipoDocumentoFirma"] == "" || $datos["idReferencia"] == "") {
                return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE ESPECIFICO LA REFERENCIA O EL TIPO DOCUMENTO DE LA FIRMA ELECTRONICA."}';
            }
            $respuesta = json_decode($firmaElectronica->obtenerUrlPdf($datos));
            if ($respuesta->estatus != "ok") {
                return json_encode($respuesta);
            }
            $datos["archivoPdf"] = $respuesta->imagen->ruta;
        }
        $aux = explode("/", $datos["archivoPdf"]);
        $archivoPdf = $this->comprimirDocumento($datos["archivoPdf"]);
        if ($archivoPdf["estatus"] == "fail") {
            return '{"estatus":"fail","totalCount":"0","msj":"' . $archivoPdf["mensaje"] . '"}';
        }
        $json = '{"data":[{
                    "idSeguimientoSolicitud": "' . $datos["idSeguimientoSolicitud"] . '",
                    "nombreArchivo":"' . $aux[count($aux)-1] . '",
                    "archivoPdf": "' . $archivoPdf["archivoB64"] . '"}]}';
        $SolicitudPeritoCliente = new SolicitudPeritoCliente();
        $respuesta = json_decode($SolicitudPeritoCliente->guardarProtestaPerito($json));
        if ($respuesta == null || $respuesta == "") {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO LA RESPUESTA DEL SERVICIO WEB (PERDIDA DE LA CONEXIÓN). INTENTELO NUEVAMENTE"}';
        }
        return json_encode($respuesta);
    }

    private function comprimirDocumento($pdf) {//comprime el documento pdf en zip y lo codifica en base-64
        $inf = array();
        $inf["estatus"] = "fail";
        $inf["mensaje"] = "";
        $inf["archivoB64"] = "";
        if (file_exists($pdf)) {
            $rutaPdf = explode("/", $pdf);
            $archivo = $rutaPdf[count($rutaPdf) - 1];//obtenemos el nombre del archivo
            $destination = '../../../imagenes/ac-' . $archivo . '.zip';
            $zip = new ZipArchive();
            @$respZip = $zip->open($destination, ZIPARCHIVE::OVERWRITE | ZIPARCHIVE::CREATE);
            if ($respZip !== true) {
                $inf["mensaje"] = "ERROR. NO SE LOGRO COMPRIMIR EL ARCHIVO";
                return $inf;
            }
            if ($zip->addFile($pdf, $archivo)) {
                $zip->close();
                $inf["estatus"] = "ok";
                $inf["archivoB64"] = base64_encode(file_get_contents($destination));
                unlink($destination);//borramos el zip temporal
            }
        } else {
            $inf["mensaje"] = "ERROR. NO SE LOCALIZO EL ARCHIVO EN EL DIRECTORIO: " . $pdf;
        }
        return $inf;
    }

    public function guardarProtesta($datos, $borrar = null) {
        /*         * ESTE PROCESO ES CAPAZ DE INSERTAR, GUARDAR Y BORRAR LA PROTESTA */
        $proveedor = new Proveedor("mysql", "sigejupe");
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $actuacionesDao = new ActuacionesDAO();
        $actuacionesDto = new ActuacionesDTO();
        $activo = "S";
        $idPromocion = "";
        $numeroPromocion = "";
        $anioPromocion = "";
        if ($borrar) {
            $activo = 'N';
            $actuacionesDto->setIdActuacion($datos["idPromocion"]);
            $respuesta = $actuacionesDao->selectActuaciones($actuacionesDto, $proveedor);
            if ($respuesta == "") {
                $proveedor->execute("ROLLBACK");
                $proveedor->close();
                return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOCALIZO LA PROMOCION"}';
            }
            $respuesta[0]->setFechaRegistro("");
            $respuesta[0]->setFechaActualizacion("");
            $respuesta[0]->setActivo($activo);
            $respuesta = $actuacionesDao->updateActuaciones($respuesta[0], $proveedor);
            if ($respuesta == "") {
                $proveedor->execute("ROLLBACK");
                $proveedor->close();
                return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOCALIZO LA PROMOCION"}';
            }
        } else {
            if ($datos["idSeguimientoSolicitud"] == "") {//registrar  la promocion
                $actuacionesDto->setCveJuzgado($datos["cveAdscripcion"]);
                $actuacionesDto->setActivo($activo);
                $params = array();
                $params["fields"] = "now() as fecha";
                $selectDao = new SelectDAO();
                $respuesta = $selectDao->selectDAOv2($params, $proveedor);
                $respuesta = json_decode($respuesta);
                if (!isset($respuesta->resultados)) {
                    $proveedor->execute("ROLLBACK");
                    $proveedor->close();
                    return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO OBTENER LA FECHA DE SOLICITUD ACTUAL"}';
                }
                $fechaActual = $respuesta->resultados[0]->fecha;
                $arrayFecha = explode("-", $fechaActual);
                //obtenemos los contadores de la promocion
                $contadorCrl = new ContadoresController();
                $contadoresDto = new ContadoresDTO();
                $contadoresDto->setCveJuzgado($datos["cveAdscripcion"]);
                $contadoresDto->setCveTipoActuacion("1"); //promocion
                $contadoresDto->setAnio($arrayFecha[0]);
                $contadoresDto->setCveTipoCarpeta("");
                $respuesta = $contadorCrl->getContador($contadoresDto, $proveedor);
                if ($respuesta == "") {
                    $proveedor->execute("ROLLBACK");
                    $proveedor->close();
                    return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO OBTENER LOS CONTADORES DE LA PROMOCION"}';
                }
                $actuacionesDto->setNumActuacion($respuesta[0]->getNumero());
                $actuacionesDto->setAniActuacion($respuesta[0]->getAnio());
                $actuacionesDto->setCveTipoActuacion("1"); //promocion
                $actuacionesDto->setIdReferencia($datos["idReferencia"]); //dato del expediente
                $actuacionesDto->setNumero($datos["numero"]); //dato del expediente
                $actuacionesDto->setAnio($datos["anio"]); //dato del expediente
                $actuacionesDto->setCveTipoCarpeta($datos["cveTipoCarpeta"]); //dato del expediente
                $actuacionesDto->setNoFojas(1);
                $actuacionesDto->setCveUsuario($datos["cveUsuarioSolicitante"]);
                $protestaConclusion = "TOMA DE PROTESTA";
                if ($datos["cveEstatusSolicitud"] == "4") {
                    $protestaConclusion = "PRESENTACIÓN DE DICTAMEN";
                }
                if ($datos["cveEstatusSolicitud"] == "10") {//promocion capturada por el usuario (no es generada automaticamente)
                    $actuacionesDto->setSintesis(utf8_decode($datos["sintesis"]));
                } else {
                    $actuacionesDto->setSintesis(utf8_decode("PROMOCIÓN GENERADO POR SOLICITUD DE PERITO. " . $protestaConclusion . " EN MATERIA DE " . $datos["desMateriaPericial"]));
                }
                $actuacionesDto->setObservaciones(utf8_decode($datos["observaciones"]));
                $actuacionesDto->setCveUsuario($datos["cveUsuarioSolicitante"]);
                $respuesta = $actuacionesDao->insertActuaciones($actuacionesDto, $proveedor);
                if ($respuesta == "") {
                    $proveedor->execute("ROLLBACK");
                    $proveedor->close();
                    return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO REGISTRAR LA PROMOCION"}';
                }
                $actuacionEstatusDao = new ActuacionesestatusDAO();
                $actuacionEstatusDto = new ActuacionesestatusDTO();
                $actuacionEstatusDto->setActivo("S");
                $actuacionEstatusDto->setIdActuacion($respuesta[0]->getIdActuacion());
                $actuacionEstatusDto->setCveEstatus(7); //7 = registrada (promocion)
                if ($actuacionEstatusDao->insertActuacionesestatus($actuacionEstatusDto, $proveedor) == "") {
                    $proveedor->execute("ROLLBACK");
                    $proveedor->close();
                    return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO AL INTENTAR REGISTRAR EL ESTATUS DE LA ACTUACION (PROMOCION)"}';
                }
                $numeroPromocion = $respuesta[0]->getNumActuacion();
                $anioPromocion = $respuesta[0]->getAniActuacion();
                $idPromocion = $respuesta[0]->getIdActuacion();
                include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/promoventesactuaciones/PromoventesactuacionesDAO.Class.php");
                include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/promoventesactuaciones/PromoventesactuacionesDTO.Class.php");
                $promoventesDao = new PromoventesactuacionesDAO();
                $promoventesDto = new PromoventesactuacionesDTO();
                $promoventesDto->setNombrePersonaMoral(utf8_decode($datos["nombrePerito"]));
                $promoventesDto->setActivo("S");
                $promoventesDto->setCveGenero("3");
                $promoventesDto->setCveTipoParte("5");
                $promoventesDto->setIdActuacion($idPromocion);
                $promoventesDto->setCveTipoPersona("3");
                $respuesta = $promoventesDao->insertPromoventesactuaciones($promoventesDto, $proveedor);
                if ($respuesta == "") {
                    $proveedor->execute("ROLLBACK");
                    $proveedor->close();
                    return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO REGISTRAR AL PROMOVENTE DE LA PROMOCION"}';
                }
                /* $antecedesDao = new AntecedescarpetasDAO(); //se guarda el antecede promocion, para que sea hija del expediente
                  $antecedesDto = new AntecedescarpetasDTO();
                  $antecedesDto->setIdCarpetaPadre($datos["idReferencia"]); //id del expediente origen
                  $antecedesDto->setIdCarpetaHija($idPromocion);
                  $antecedesDto->setCveTipoCarpeta($datos["cveTipoCarpeta"]);
                  $antecedesDto->setActivo($activo);
                  $respuesta = $antecedesDao->insertAntecedescarpetas($antecedesDto, $proveedor);
                  if ($respuesta == "") {
                  $proveedor->execute("ROLLBACK");
                  $proveedor->close();
                  return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO AL INTENTAR REGISTRAR EL ANTECEDES DE LA PROMOCION"}';
                  } */
                if ($datos["cveEstatusSolicitud"] == "10") {//promocion que capturo el usuario
                    if ($datos["solicitudTerminada"] == "S") {
                        $respuesta = json_decode($this->terminarSolicitudPeritoPorPromocion($datos["idSolicitudePerito"], "S"));
                        if (!isset($respuesta->resultados)) {
                            $proveedor->execute("ROLLBACK");
                            $proveedor->close();
                            return '{"estatus":"fail","totalCount":"0","msj":"' . $respuesta->msj . '"}';
                        }
                    }
                    $proveedor->execute("COMMIT");
                    $proveedor->close();
                    $pdf = $this->generarPDF($idPromocion, 13);
                    $json = '{"estatus":"ok","totalCount":"1","msj":"PROMOCION GUARDADA EXITOSAMENTE"';
                    $json .= ',"fechaActual":"' . $this->obtenerFechaBD() . '","resultados":[{';
                    $json .= '"idReferenciaPromocion":"' . $idPromocion . '",';
                    $json .= '"idSeguimientoSolicitud":"' . $datos["idSeguimientoSolicitud"] . '",';
                    $json .= '"numeroPromocion":"' . $numeroPromocion . '",';
                    $json .= '"anioPromocion":"' . $anioPromocion . '"';
                    return $json . '}],"pdf":' . $pdf . '}';
                }
            } else {//actualizar la promocion
                $actuacionesDto->setIdActuacion($datos["idPromocion"]);
                $actuacionesDto->setActivo("S");
                $respuesta = $actuacionesDao->selectActuaciones($actuacionesDto, $proveedor);
                if ($respuesta == "") {
                    $proveedor->execute("ROLLBACK");
                    $proveedor->close();
                    return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO AL INTENTAR LOCALIZAR LA PROMOCION"}';
                }
                $respuesta[0]->setFechaActualizacion("");
                $respuesta[0]->setFechaRegistro("");
                $respuesta[0]->setObservaciones(utf8_decode($datos["observaciones"]));
                $respuesta = $actuacionesDao->updateActuaciones($respuesta[0], $proveedor);
                if ($respuesta == "") {
                    $proveedor->execute("ROLLBACK");
                    $proveedor->close();
                    return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO AL INTENTAR ACTUALIZAR LA PROMOCION"}';
                }
                $idPromocion = $respuesta[0]->getIdActuacion();
                $numeroPromocion = $respuesta[0]->getNumActuacion();
                $anioPromocion = $respuesta[0]->getAniActuacion();
            }
        }
        $notificar = 'N'; //S=se notificara al perito que tiene permiso al expediente
        $passwordPerito = '';
        $usuarioPerito = '';
        if ($datos["ningunSeguimiento"] == "N") {//si no posee ningun seguimiento, significa que es una toma de protesta y se debe proporcionar el permiso al perito
            $permiso = $this->autorizarPermisoWeb($datos, $proveedor);
            $permiso = json_decode($permiso);
            if (!isset($permiso->resultados)) {
                $proveedor->execute("ROLLBACK");
                $proveedor->close();
                return '{"estatus":"fail","totalCount":"0","msj":"' . $permiso->msj . '"}';
            }
            $notificar = $permiso->resultados[0]->registroNuevo;
            $passwordPerito = $permiso->resultados[0]->passwordPerito;
            $usuarioPerito = $permiso->resultados[0]->usuarioPerito;
        }
        //error_log("guardar: " . print_r($datos, true));
        if ($datos["fechaTipoDocumento"] != "") {
            $aux = explode("/", $datos["fechaTipoDocumento"]);
            $datos["fechaTipoDocumento"] = $aux[2] . "-" . $aux[1] . "-" . $aux[0];
        }
        $json = '{"data": [{
                      "idSeguimientoSolicitud": "' . $datos["idSeguimientoSolicitud"] . '",
                      "idSolicitudePerito": "' . $datos["idSolicitudePerito"] . '",
                      "cveEstatusSolicitud": "' . $datos["cveEstatusSolicitud"] . '",
                      "idReferenciaPromocion": "' . $idPromocion . '",
                      "cveAdscripcion": "' . $datos["cveAdscripcion"] . '",
                      "fechaTipoDocumento": "' . $datos["fechaTipoDocumento"] . '",
                      "descJuzgado": "' . $datos["descJuzgado"] . '",
                      "numeroPromocion": "' . $numeroPromocion . '",
                      "anioPromocion": "' . $anioPromocion . '",
                      "cvePerfil": "' . $datos["cvePerfil"] . '",
                      "cveSistema": "' . $datos["cveSistema"] . '",
                      "cveUsuarioSolicitante": "' . $datos["cveUsuarioSolicitante"] . '",
                      "observaciones": ' . json_encode($datos["observaciones"]) . ',
                      "notificar": "' . $notificar . '",
                      "usuarioPerito": "' . $usuarioPerito . '",
                      "passwordPerito": "' . $passwordPerito . '",
                      "solicitudTerminada": "' . $datos["solicitudTerminada"] . '",
                      "activo": "' . $activo . '"}]}';
        //error_log("jsonWEB: " . print_r($json, true));
        /** SE REALIZA LA PETICION AL SERVICIO WEB DE PERITOS, CONSULTAMOS LAS PROTESTAS
          L(SEGUIMIENTOS) */
        $SolicitudPeritoCliente = new SolicitudPeritoCliente();
        $respuesta = $SolicitudPeritoCliente->guardarProtestaPerito($json);
        $respuesta = json_decode($respuesta);
        if ($respuesta == null) {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO LA RESPUESTA DEL SERVICIO WEB."}';
        }
        if (!isset($respuesta->resultados)) {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return '{"estatus":"fail","totalCount":"0","msj":"FALLO LA RESPUESTA DEL SERVICIO WEB. ' . $respuesta->msj . '"}';
        }
        /* $accionBitacora = "51"; //registra protesta desde el juzgado
          $movimiento = "PROTESTA: " . $json;
          $bitacorasDto = new BitacorasDTO();
          $bitacorasDao = new BitacorasDAO();
          $bitacorasDto->setCveAccion($accionBitacora);
          $bitacorasDto->setCveUsuario($datos["cveUsuarioSolicitante"]);
          $bitacorasDto->setCvePerfil($datos["cvePerfil"]);
          $bitacorasDto->setFechaMovimiento($fechaActual);
          $bitacorasDto->setMovimiento(strtoupper($movimiento));
          $bitacorasDto->setCveSistema($datos["cveSistema"]);
          $bitacorasDto->setCveAdscripcion($datos["cveAdscripcion"]);
          if ($bitacorasDao->insertBitacora($bitacorasDto, $proveedor) == "") {
          $proveedor->execute("ROLLBACK");
          $proveedor->close();
          return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO REGISTRAR LA TRANSACCION EN LA BITACORA"}';
          } */
        $proveedor->execute("COMMIT");
        $proveedor->close();
        $pdf = $this->generarPDF($idPromocion, 13);
        $pdf = json_decode($pdf);
        $respuesta->fechaActual = $this->obtenerFechaBD();
        $respuesta->resultados[0]->idReferenciaPromocion = $idPromocion;
        if ($datos["ningunSeguimiento"] == "N") {
            $respuesta->permisoWeb = $permiso->resultados;
        }
        $respuesta->pdf = $pdf;
        return json_encode($respuesta);
    }

    public function terminarSolicitudPeritoPorPromocion($idSolicitudePerito, $solicitudTerminada) {
        if ($solicitudTerminada != "S") {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. ARGUMENTO NO VALIDO."}';
        }
        $json = '{"idSolicitudePerito": "' . $idSolicitudePerito . '",
                  "terminarSolicitud": "' . $solicitudTerminada . '"}';
        $SolicitudPeritoCliente = new SolicitudPeritoCliente();
        try {
            $respuesta = json_decode($SolicitudPeritoCliente->terminarProtestaPerito($json));
        } catch (Exception $e) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO LA RESPUESTA DEL SERVICIO WEB. INTENTELO NUEVAMENTE"}';
        }
        if ($respuesta == null) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO LA RESPUESTA DEL SERVICIO WEB. INTENTELO NUEVAMENTE"}';
        }
        if (!isset($respuesta->resultados)) {
            return '{"estatus":"fail","totalCount":"0","msj":"FALLO LA RESPUESTA DEL SERVICIO WEB. ' . $respuesta->msj . '"}';
        }
        return '{"estatus":"ok","totalCount":"1","msj":"SOLICITUD TERMINADA EXITOSAMENTE","resultados":' . json_encode($respuesta->resultados) . '}';
    }

    private function generarPDF($idActuacion, $tipoActuacion) {//genera el pdf de la actuacion
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/firmapdf/FirmaPdfController.Class.php");
        include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/actuaciones/ActuacionesController.Class.php");
        $dtoAux = new ActuacionesDTO();
        $actuacionesController = new ActuacionesController();
        $dtoAux->setIdActuacion($idActuacion);
        $generarPDF = $actuacionesController->generarJson($dtoAux, $tipoActuacion, 2);
        $firmaPdfFacade = new FirmaPdfController();
        @$params = json_decode($generarPDF, true);
        if (array_key_exists('type', $params)) {
            if ($params["type"] == "generaPdf") {
                return json_encode($firmaPdfFacade->generaPdf($params, false));
            }
        }
        return '{"estatus":"fail","mesnaje":"FALLO AL INTENTAR GENERAR EL PDF."}';
    }

    public function consultarProtestas($datos, $paginacion) {
        $json = '{"data": [{
                      "idSolicitudePerito": "' . $datos["idSolicitudePerito"] . '",
                      "idSeguimientoSolicitud": "' . $datos["idSeguimientoSolicitud"] . '",
                      "cveEstatusSolicitud": "",
                      "cvesEstatusSolicitud": "' . $datos["cvesEstatusSolicitud"] . '",
                      "activo": "S"}],
                  "paginacion": [{
                      "paginacion": "' . $paginacion["paginacion"] . '",
                      "pag": "' . $paginacion["pag"] . '",
                      "cantxPag": "' . $paginacion["cantxPag"] . '"}],
                  "consultarPlantilla": [{
                      "cveMateria": "' . $datos["cveMateria"] . '",
                      "cveMateriaPericial": "' . $datos["cveMateriaPericial"] . '"
                      }]}';
        /** SE REALIZA LA PETICION AL SERVICIO WEB DE PERITOS, CONSULTAMOS LAS PROTESTAS
          (SEGUIMIENTOS) */
        $SolicitudPeritoCliente = new SolicitudPeritoCliente();
        $respuesta = $SolicitudPeritoCliente->consultarProtestasPeritos($json);
        $respuesta = json_decode($respuesta);
        if ($respuesta == null) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALLO LA RESPUESTA DEL SERVICIO WEB"}';
        }
        if (isset($respuesta->resultados)) {
            $params = array();
            $selectDao = new SelectDAO(); //consultamos la promocion que este asociada
            $params["fields"] = "idActuacion as idPromocion,numActuacion as numPromocion,aniActuacion as anioPromocion,Sintesis as sintesis,observaciones,fechaRegistro";
            $params["tables"] = "tblactuaciones";
            for ($i = 0; $i < $respuesta->totalCount; $i++) {
                $params["conditions"] = "activo='S' AND idActuacion=" . $respuesta->resultados[$i]->idReferenciaPromocion;
                $resultados = json_decode($selectDao->selectDAOv2($params));
                if (isset($resultados->resultados)) {
                    $respuesta->resultados[$i]->promocion = $resultados->resultados[0];
                } else {
                    $respuesta->resultados[$i]->promocion = '';
                }
            }
        }
        $respuesta->expediente = $this->consultarExpediente($datos);
        $respuesta->fechaActual = $this->obtenerFechaBD();
        return json_encode($respuesta);
    }

    private function consultarExpediente($datos) {
        $tipoCarpeta = intval($datos["cveTipoCarpeta"]);
        $params = array();
        $select = new SelectDAO();
        $respuesta = array();
        $respuesta["ofendidos"] = '';
        $respuesta["imputados"] = '';
        $respuesta["delitos"] = '';
        if ($tipoCarpeta < 7) {// buscar en carpetasJudiciales
            //consultamos a los ofendidos de la carpeta
            $params["fields"] = "concat(oc.nombre,' ',oc.paterno,' ',oc.materno) as nombreCompleto,oc.nombreMoral,oc.cveTipoPersona";
            $params["tables"] = "tblcarpetasjudiciales as cj,tblimpofedelcarpetas as iodc,tblofendidoscarpetas as oc";
            $params["conditions"] = "cj.activo='S' AND iodc.activo='S' AND iodc.idCarpetaJudicial=cj.idCarpetaJudicial AND oc.activo='S'
               AND oc.idOfendidoCarpeta=iodc.idOfendidoCarpeta";
            $params["conditions"] .= " AND cj.cveJuzgado=" . $datos["cveAdscripcion"];
            $params["conditions"] .= " AND cj.numero=" . $datos["numero"];
            $params["conditions"] .= " AND cj.anio=" . $datos["anio"];
            $params["conditions"] .= " AND cj.cveTipoCarpeta=" . $datos["cveTipoCarpeta"];
            $params["groups"] = "iodc.idOfendidoCarpeta";
            $ofendidos = json_decode($select->selectDAOv2($params));
            //consultamos a los imputados de la carpeta
            $params["fields"] = "concat(ic.nombre,' ',ic.paterno,' ',ic.materno) as nombreCompleto,ic.nombreMoral,ic.cveTipoPersona";
            $params["tables"] = "tblcarpetasjudiciales as cj,tblimpofedelcarpetas as iodc,tblimputadoscarpetas as ic";
            $params["conditions"] = "cj.activo='S' AND iodc.activo='S' AND iodc.idCarpetaJudicial=cj.idCarpetaJudicial AND ic.activo='S'
               AND ic.idImputadoCarpeta=iodc.idImputadoCarpeta";
            $params["conditions"] .= " AND cj.cveJuzgado=" . $datos["cveAdscripcion"];
            $params["conditions"] .= " AND cj.numero=" . $datos["numero"];
            $params["conditions"] .= " AND cj.anio=" . $datos["anio"];
            $params["conditions"] .= " AND cj.cveTipoCarpeta=" . $datos["cveTipoCarpeta"];
            $params["groups"] = "iodc.idImputadoCarpeta";
            $imputados = json_decode($select->selectDAOv2($params));
            //consultamos los delitos de la carpeta
            $params["fields"] = "d.desDelito";
            $params["tables"] = "tblcarpetasjudiciales as cj,tblimpofedelcarpetas as iodc,tbldelitoscarpetas as dc,tbldelitos as d";
            $params["conditions"] = "cj.activo='S' AND iodc.activo='S' AND iodc.idCarpetaJudicial=cj.idCarpetaJudicial AND dc.activo='S'
               AND dc.idDelitoCarpeta=iodc.idDelitoCarpeta AND d.activo='S' AND d.cveDelito=dc.cveDelito";
            $params["conditions"] .= " AND cj.cveJuzgado=" . $datos["cveAdscripcion"];
            $params["conditions"] .= " AND cj.numero=" . $datos["numero"];
            $params["conditions"] .= " AND cj.anio=" . $datos["anio"];
            $params["conditions"] .= " AND cj.cveTipoCarpeta=" . $datos["cveTipoCarpeta"];
            $params["groups"] = "d.cveDelito";
            $delitos = json_decode($select->selectDAOv2($params));
            if (isset($ofendidos->resultados)) {
                $respuesta["ofendidos"] = $ofendidos->resultados;
            }
            if (isset($imputados->resultados)) {
                $respuesta["imputados"] = $imputados->resultados;
            }
            if (isset($delitos->resultados)) {
                $respuesta["delitos"] = $delitos->resultados;
            }
        } else if ($tipoCarpeta == 7) {//exhorto
        } else if ($tipoCarpeta == 8) {//amparo
        }
        return $respuesta;
    }

    private function obtenerFechaBD() {
        $params = array();
        $params["fields"] = "now() as fecha";
        $selectDao = new SelectDAO();
        $resultados = $selectDao->selectDAOv2($params);
        $resultados = json_decode($resultados);
        if (!isset($resultados->resultados)) {
            return '';
        }
        return $resultados->resultados[0]->fecha;
    }

}

@$numero = $_POST["numero"];
@$anio = $_POST["anio"];
@$numerox = $_POST["numerox"];
@$aniox = $_POST["aniox"];
@$cveTipoCarpeta = $_POST["cveTipoCarpeta"];
@$cveAdscripcion = $_POST["cveAdscripcion"];
@$descJuzgado = $_POST["descJuzgado"];
@$cveMateria = $_POST["cveMateria"];
@$nvaInstancia = $_POST["nvaInstancia"];
@$PersonaSolicitante = strtoupper($_POST["PersonaSolicitante"]);
@$cveUsuarioSolicitante = $_POST["cveUsuarioSolicitante"];
@$cveUsuarioSistema = $_SESSION["cveUsuarioSistema"];
@$cvePerfil = $_SESSION["cvePerfil"];
@$cveSistema = $_SESSION["cveSistema"];
@$cveTipoNumero = $_POST["cveTipoNumero"];
@$idActuacion = $_POST["idActuacion"];
@$cveMateriaPericial = $_POST["cveMateriaPericial"];
@$desMateriaPericial = $_POST["desMateriaPericial"];
@$observaciones = utf8_decode($_POST["observaciones"]);
@$fechaProtesta = utf8_decode($_POST["fechaProtesta"]);
//@$fechaSolicitud = $_POST["fechaSolicitud"];
@$materiaPericial = $_POST["materiaPericial"];
@$diasProtesta = $_POST["diasProtesta"];
@$Peritos = $_POST["Peritos"];
@$idReferencia = $_POST["idReferencia"];
@$idActuacionAcuerdo = $_POST["idActuacionAcuerdo"];
@$idPerito = $_POST["idPerito"];
@$idSolicitudePerito = $_POST["idSolicitudePerito"]; //es el id de la tabla de solicitudesPeritos del sistema de peritos
//paginacion
$paginacion = array();
@$paginacion["paginacion"] = $_POST["paginacion"];
@$paginacion["pag"] = $_POST["pag"];
@$paginacion["cantxPag"] = $_POST["cantxPag"];

$SolicitudesPeritosActuacionesDTO = new SolicitudesperitosDTO();
$SolicitudesPeritosActuacionesDTO->setActivo("S");
$SolicitudesPeritosActuacionesDTO->setNumero($numerox);
$SolicitudesPeritosActuacionesDTO->setAnio($aniox);
$SolicitudesPeritosActuacionesDTO->setCveJuzgado($cveAdscripcion);
$SolicitudesPeritosActuacionesDTO->setCveTipoCarpeta($cveTipoCarpeta);
$SolicitudesPeritosActuacionesDTO->setObservaciones($observaciones);
@$accion = $_POST["accion"];
if ($accion == "insert") {
    $datos = array();
    $datos["idActuacionAcuerdo"] = $idActuacionAcuerdo;
    @$datos["observaciones"] = $_POST["observaciones"];
    $datos["idActuacion"] = $idActuacion;
    $datos["cveUsuarioSistema"] = $cveUsuarioSistema;
    $datos["cveSistema"] = $cveSistema;
    $datos["nvaInstancia"] = $nvaInstancia;
    $datos["cveMateria"] = $cveMateria;
    $datos["numero"] = $numero;
    $datos["anio"] = $anio;
    $datos["cveUsuarioSolicitante"] = $cveUsuarioSolicitante;
    $datos["cvePerfil"] = $cvePerfil;
    $datos["PersonaSolicitante"] = $PersonaSolicitante;
    $datos["cveTipoNumero"] = $cveTipoNumero;
    $datos["cveMateriaPericial"] = $cveMateriaPericial;
    $datos["materiaPericial"] = $materiaPericial;
    $datos["idPerito"] = $idPerito;
    $datos["Peritos"] = $Peritos;
    $datos["diasProtesta"] = $diasProtesta;
    $solicitudePeritoController = new SolicitudesPeritosController();
    echo $solicitudePeritoController->guardarSolicitudePerito($SolicitudesPeritosActuacionesDTO, $datos);
    exit;
} else if ($accion == "consultarProtestas") {//obtiene las protestas o conclusiones sobre una solicitud de perito en especifico
    $datos = array();
    $datos["idSeguimientoSolicitud"] = "";
    $datos["idSolicitudePerito"] = $_POST["idSolicitudePerito"];
    $datos["cvesEstatusSolicitud"] = $_POST["cvesEstatusSolicitud"];
    $datos["cveMateria"] = $cveMateria;
    $datos["cveMateriaPericial"] = $cveMateriaPericial;
    //datos del expediente
    $datos["numero"] = $numero;
    $datos["anio"] = $anio;
    $datos["nvaInstancia"] = $nvaInstancia;
    $datos["cveAdscripcion"] = $cveAdscripcion;
    $datos["cveTipoCarpeta"] = $cveTipoCarpeta;
    $solicitudePeritoController = new SolicitudesPeritosController();
    echo $solicitudePeritoController->consultarProtestas($datos, $paginacion);
    exit;
} else if ($accion == "guardarProtesta") {//guarda la protesta o conclusions, tanto en sigejupe como en el sistema de peritos
    $datos = array();
    @$datos["idSeguimientoSolicitud"] = $_POST["idSeguimientoSolicitud"];
    $datos["idSolicitudePerito"] = $_POST["idSolicitudePerito"];
    $datos["cveEstatusSolicitud"] = $_POST["cveEstatusSolicitud"];
    @$datos["observaciones"] = $_POST["observaciones"];
    @$datos["sintesis"] = $_POST["sintesis"];
    @$datos["nombrePerito"] = $_POST["nombrePerito"];
    @$datos["ningunSeguimiento"] = $_POST["ningunSeguimiento"];
    @$datos["idPerito"] = $_POST["idPerito"];
    @$datos["cedula"] = $_POST["cedulaPerito"];
    $datos["cveUsuarioSolicitante"] = $cveUsuarioSolicitante;
    $datos["desMateriaPericial"] = $desMateriaPericial;
    $datos["cvePerfil"] = $cvePerfil;
    $datos["cveAdscripcion"] = $cveAdscripcion;
    $datos["descJuzgado"] = $descJuzgado;
    $datos["cveSistema"] = $cveSistema;
    $datos["fechaTipoDocumento"] = $fechaProtesta;
    @$datos["idPromocion"] = $_POST["idPromocion"]; // es el ide de la promocion, que se genero a la hora de registrar la protesta
    $datos["idReferencia"] = $idReferencia;
    $datos["numero"] = $numero;
    $datos["anio"] = $anio;
    $datos["cveTipoCarpeta"] = $cveTipoCarpeta;
    $datos["solicitudTerminada"] = $_POST["solicitudTerminada"];
    $solicitudePeritoController = new SolicitudesPeritosController();
    echo $solicitudePeritoController->guardarProtesta($datos);
    exit;
} else if ($accion == "borrarProtesta") {//borra la protesta o conclusions, tanto en sigejupe como en el sistema de peritos
    $datos = array();
    @$datos["idSeguimientoSolicitud"] = $_POST["idSeguimientoSolicitud"];
    $datos["idSolicitudePerito"] = "";
    $datos["cveEstatusSolicitud"] = "";
    @$datos["observaciones"] = $_POST["observaciones"];
    @$datos["sintesis"] = $_POST["sintesis"];
    @$datos["nombrePerito"] = $_POST["nombrePerito"];
    @$datos["ningunSeguimiento"] = $_POST["ningunSeguimiento"];
    $datos["idPerito"] = "";
    $datos["cedula"] = "";
    $datos["cveUsuarioSolicitante"] = $cveUsuarioSolicitante;
    $datos["desMateriaPericial"] = $desMateriaPericial;
    $datos["cvePerfil"] = $cvePerfil;
    $datos["cveAdscripcion"] = $cveAdscripcion;
    $datos["descJuzgado"] = $descJuzgado;
    $datos["cveSistema"] = $cveSistema;
    $datos["fechaTipoDocumento"] = $fechaProtesta;
    @$datos["idPromocion"] = $_POST["idPromocion"]; // es el ide de la promocion, que se genero a la hora de registrar la protesta
    $datos["idReferencia"] = $idReferencia;
    $datos["numero"] = $numero;
    $datos["anio"] = $anio;
    $datos["cveTipoCarpeta"] = $cveTipoCarpeta;
    $solicitudePeritoController = new SolicitudesPeritosController();
    echo $solicitudePeritoController->guardarProtesta($datos, true);
    exit;
} else if ($accion == "enviarArchivoFirmado") {
    $datos = array();
    $datos["idSeguimientoSolicitud"] = $_POST["idSeguimientoSolicitud"];
    $datos["archivoPdf"] = $_POST["rutaPdf"];
    @$datos["idReferencia"] = $_POST["idReferencia"];
    @$datos["cveTipoDocumentoFirma"] = $_POST["cveTipoDocumentoFirma"];
    $solicitudePeritoController = new SolicitudesPeritosController();
    echo $solicitudePeritoController->enviarDocumentoFirmadoAperito($datos);
    exit;
}
?>
