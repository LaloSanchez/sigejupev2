<?php

date_default_timezone_set("America/Mexico_City");
/*
 * ************************************************
 * FRAMEWORK V1.0.0 (http://www.pjedomex.gob.mx)
 * Copyright 2009-2015 CONTROLLER
 * Licensed under the MIT license 
 * Autor: *
 * Departamento de Desarrollo de Software
 * Subdireccion de Ingenieria de Software
 * Direccion de Teclogias de Informacion
 * Poder Judicial del Estado de Mexico
 * ************************************************
 */

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudescateos/SolicitudescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cateos/CateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cateos/CateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/objetos/ObjetosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/objetos/ObjetosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/personas/PersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/personas/PersonasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscateos/ImputadoscateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscateos/ImputadoscateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscateos/OfendidoscateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscateos/OfendidoscateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscateos/DelitoscateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscateos/DelitoscateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../contadores/ContadoresController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescateos/JuzgadorescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadorescateos/JuzgadorescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresordenes/JuzgadoresordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresordenes/JuzgadoresordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ministeriosresponsables/MinisteriosresponsablesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ministeriosresponsables/MinisteriosresponsablesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudescateos/EstatussolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudescateos/EstatussolicitudescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudesordenes/EstatussolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudesordenes/EstatussolicitudesordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoranotificaciones/BitacoranotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoranotificaciones/BitacoranotificacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/chatmessages/ChatMessagesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/chatmessages/ChatMessagesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/chatcerrados/ChatCerradosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/chatcerrados/ChatCerradosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../fachadas/sigejupe/imagenes/ImagenesFacade.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacioncateos/ProgramacioncateosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacioncateos/ProgramacioncateosDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosjuzgadores/TelefonosjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosjuzgadores/TelefonosjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidoscateos/TutoresofendidoscateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidoscateos/TutoresofendidoscateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresapelacateos/JuzgadoresapelacateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresapelacateos/JuzgadoresapelacateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelacioncateos/ApelacioncateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/apelacioncateos/ApelacioncateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitoscarpetas/DelitoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitoscarpetas/DelitoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadoscarpetas/ImputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadoscarpetas/ImputadoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidoscarpetas/OfendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidoscarpetas/OfendidoscarpetasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresimputadoscarpetas/DefensoresimputadoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/defensoresofendidoscarpetas/DefensoresofendidoscarpetasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesimputadoscarpetas/NacionalidadesimputadoscarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nacionalidadesofendidoscarpetas/NacionalidadesofendidoscarpetasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/impofedelcarpetas/ImpofedelcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/impofedelcarpetas/ImpofedelcarpetasDAO.Class.php");

//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudes/EstatussolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudes/EstatussolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/respuestasolicitudcateo/RespuestasolicitudcateoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/respuestasolicitudcateo/RespuestasolicitudcateoDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nipsolicitudes/NipsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nipsolicitudes/NipsolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiemposesperasolicitudes/TiemposesperasolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiemposesperasolicitudes/TiemposesperasolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/selloDigital/Encryption.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/ssh/asterisk.php");
include_once(dirname(__FILE__) . "/../../../tribunal/correo/EmailHELPER.Class.php");
include_once(dirname(__FILE__) . "/../../../Helpers/chatapi/sendwhats.php");

include_once(dirname(__FILE__) . "/../../../tribunal/logger/Logger.Class.php");

#QUITAR LAS CLAVES DE USUARIO 46 ASIGNADAS A LOS DTO DE NOTIFICACIONES

class SolicitudescateosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarSolicitudescateos($SolicitudescateosDto) {
        $SolicitudescateosDto->setidSolicitudCateo(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getIdSolicitudCateo()))));
        $SolicitudescateosDto->setnumero(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getnumero()))));
        $SolicitudescateosDto->setanio(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getanio()))));
        $SolicitudescateosDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getcveJuzgado()))));
        $SolicitudescateosDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getcveCatAudiencia()))));
        $SolicitudescateosDto->setcveJuzgadoDesahoga(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getcveJuzgadoDesahoga()))));
        $SolicitudescateosDto->setidReferencia(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getidReferencia()))));
        $SolicitudescateosDto->setfechaEnvio(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getfechaEnvio()))));
        $SolicitudescateosDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getcveTipoCarpeta()))));
        $SolicitudescateosDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getcarpetaInv()))));
        $SolicitudescateosDto->setnuc(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getnuc()))));
        $SolicitudescateosDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getcveUsuario()))));
        $SolicitudescateosDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getcveAdscripcionSolicita()))));
        $SolicitudescateosDto->setcveEstatusSolicitudCateo(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getcveEstatusSolicitudCateo()))));
        $SolicitudescateosDto->setobservaciones(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getobservaciones()))));
        $SolicitudescateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getfechaRegistro()))));
        $SolicitudescateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($SolicitudescateosDto->getfechaActualizacion()))));
        return $SolicitudescateosDto;
    }

    public function selectSolicitudescateos($SolicitudescateosDto, $proveedor = null) {
        $SolicitudescateosDto = $this->validarSolicitudescateos($SolicitudescateosDto);
        $SolicitudescateosDao = new SolicitudescateosDAO();
        $SolicitudescateosDto = $SolicitudescateosDao->selectSolicitudescateos($SolicitudescateosDto, $proveedor);
        return $SolicitudescateosDto;
    }

    public function insertSolicitudescateos($param = "", $proveedor = null, $origenFacade = "sistema") {
        $emailJuez = "";
        $bolStatusMailJuez = false;
        $bolStatusMailAdm = false;
        $emailAdministrador = "";
        $movimientoExtra = "";
        $tmp = "";
        $idreferencia = 0;
        if ($param != "") {
            ###
            #CAMPOS REQUERIDOS PARA CADA PASO DE LA SOLICITUD DE CATEO
            ###
            #Paso 1: Datos 
            $juzgadoSolicitar = $param["juzgadoSolicitar"];
            $numeroCarpeta = (isset($param["numeroCarpeta"])) ? $param["numeroCarpeta"] : "";
            $anioCarpeta = (isset($param["anioCarpeta"])) ? $param["anioCarpeta"] : "";
            $cveTipoCarpeta = (isset($param["cveTipoCarpeta"])) ? $param["cveTipoCarpeta"] : "";
            $juzgadoProcedencia = $param["juzgadoProcedencia"];
            $carpetaInvestigacion = $param["carpetaInvestigacion"];
            $nuc = $param["carpetaInvestigacion"];
            $eMailMP = $param["eMailMP"];
            $paramCarpeta = array();


            #Paso 2: Datos objetos y personas
            $personasArray = $param["personasArray"];
            $objetosArray = $param["objetosArray"];


            #Paso 3: Datos imputados, victimas y delitos
            $imputadosArray = $param["imputadosArray"];
            $victimasArray = $param["victimasArray"];
            $tutoresArray = $param["tutoresArray"];
            $delitosArray = $param["delitosArray"];
            $nip = $param['nip'];

            #Paso 4: Datos solicitud escrita y archivo adjunto
            $solicitud = $param["solicitud"];
            $fileSolicitud = $param["fileSolicitud"];

            #Paso 5: Datos acepta los terminos
            $mpsResponsablesArray = $param["mpsResponsablesArray"];

            ###
            #VALIDA INFORMACION GENERAL DE LA SOLICITUD
            ###
            $errorDatos = false;
            $mensajeErrorDatos = false;

            #VALIDA INFORMACION DE LA CARPETA JUDICIAL /CARPETA DE INVESTIGACION - PASO 1
            if (($numeroCarpeta == "") && ($anioCarpeta == "") && ($juzgadoProcedencia == "") && ($cveTipoCarpeta == "")) {
                if (($carpetaInvestigacion == "") && ($nuc == "")) {
                    $errorDatos = true;
                    $mensajeErrorDatos .= " INFORMACION DE LA CARPETA JUDICIAL RELACIONADA INCOMPLETA \n";
                }
            }

            #Validacion del NIP
            if (($nip != "")) {
                if (strlen($nip) < 6) {
                    $errorDatos = true;
                    $mensajeErrorDatos .= " EL NIP DEBE SER DE 6 O MAS CARACTERES \n";
                }
            }

            #VALIDA QUE SE CONTENGA POR LO MENOS 1 REGISTRO DE LOS ARREGLOS OBLIGATORIOS - PASO 2
            $personasArray = json_decode($personasArray, true);
            $objetosArray = json_decode($objetosArray, true);
            if ((count($personasArray) <= 0 || $personasArray == "") && (count($objetosArray) <= 0 || $objetosArray == "")) {
                $errorDatos = true;
                $mensajeErrorDatos .= " ESPECIFIQUE POR LO MENOS UNA PERSONA A APREHENDERSE O UN OBJETO A BUSCAR \n";
            }

            #CONVERTIMOS A ARRAY LOS JSON - PASO 3
            $imputadosArray = json_decode($imputadosArray, true);
            $victimasArray = json_decode($victimasArray, true);
            $tutoresArray = json_decode($tutoresArray, true);
            $delitosArray = json_decode($delitosArray, true);

            #VALIDA INFORMACION DE LA CARPETA JUDICIAL /CARPETA DE INVESTIGACION - PASO 4
            //if (($solicitud == "")) {
            if (($solicitud == "") && ($fileSolicitud == "")) {
                $errorDatos = true;
                $mensajeErrorDatos .= " SOLICITUD DE CATEO NO VALIDA \n";
            } else {
                if (strlen($solicitud) > 16777000) {
                    $errorDatos = true;
                    $mensajeErrorDatos .= " SE EXCEDIO LA LONGITUD DE LA SOLICITUD  \n";
                }
            }

            #VALIDA QUE SE CONTENGA POR LO MENOS 1 MP RESPONSABLE - PASO 5
            $mpsResponsablesArray = json_decode($mpsResponsablesArray, true);
            if ((count($mpsResponsablesArray) <= 0 || $mpsResponsablesArray == "")) {
                $errorDatos = true;
                $mensajeErrorDatos .= " DEBE ESPECIFICAR POR LO MENOS UN MP RESPONSABLE PARA LA SOLICITUD DE CATEO  \n";
            }

            if (!$errorDatos) {

                $logger = new Logger("/../../logs/", "CateosController");
                $logger->w_onError("**********COMIENZA EL PROGRAMA PARA GENERAR EL CATEO**********");


                $error = false;
                $adminJuzgados = "";
                ###
                #INICIAMOS PROCESO DE GURADADO DE INFORMACION
                ###
                #INICIAMOS TRANSACCION DE LA BASE DE DATOS
                $proveedor = new Proveedor('mysql', 'sigejupe');
                $proveedor->connect();
                $proveedor->execute("BEGIN");
                $bolStatusMailJuez = false;
                $bolStatusMailAdm = false;

                #CONSULTAMOS INFORMACION DE LA CARPETA JUDICIAL
                $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
                $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
                if (($numeroCarpeta != "") && ($anioCarpeta != "") && ($juzgadoProcedencia != "") && ($cveTipoCarpeta != "")) {
                    $CarpetasjudicialesDto->setNumero($numeroCarpeta);
                    $CarpetasjudicialesDto->setAnio($anioCarpeta);
                    $CarpetasjudicialesDto->setCveJuzgado($juzgadoProcedencia);
                } else {
                    $CarpetasjudicialesDto->setCarpetaInv($carpetaInvestigacion);
                }
                $CarpetasjudicialesDto->setCveTipoCarpeta(2);
                $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto, "", $proveedor);
                if ($CarpetasjudicialesDto != "" && count($CarpetasjudicialesDto) > 0) {
                    $CarpetasjudicialesDto = $CarpetasjudicialesDto[0];
                } else {
                    $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
                    if (($numeroCarpeta != "") && ($anioCarpeta != "") && ($juzgadoProcedencia != "") && ($cveTipoCarpeta != "")) {
                        $CarpetasjudicialesDto->setNumero($numeroCarpeta);
                        $CarpetasjudicialesDto->setAnio($anioCarpeta);
                        $CarpetasjudicialesDto->setCveJuzgado($juzgadoProcedencia);
                    } else {
                        $CarpetasjudicialesDto->setNuc($nuc);
                    }
                    $CarpetasjudicialesDto->setCveTipoCarpeta(2);
                    $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto, "", $proveedor);
                    if ($CarpetasjudicialesDto != "" && count($CarpetasjudicialesDto) > 0) {
                        $CarpetasjudicialesDto = $CarpetasjudicialesDto[0];
                    }
                }

                if ($CarpetasjudicialesDto != "" && count($CarpetasjudicialesDto) > 0) {
                    $numeroCarpeta = $CarpetasjudicialesDto->getNumero();
                    $anioCarpeta = $CarpetasjudicialesDto->getAnio();
                    $cveTipoCarpeta = $CarpetasjudicialesDto->getCveTipoCarpeta();
                    $juzgadoProcedencia = $CarpetasjudicialesDto->getCveJuzgado();
                    $carpetaInvestigacion = $CarpetasjudicialesDto->getCarpetaInv();
                    $nuc = $CarpetasjudicialesDto->getNuc();
                    $idreferencia = $CarpetasjudicialesDto->getIdCarpetaJudicial();
                    $param["datos"]["numero"] = $numeroCarpeta;
                    $param["datos"]["anio"] = $anioCarpeta;
                    $paramCarpeta["nueva"] = 0;
                    if ($juzgadoSolicitar != $CarpetasjudicialesDto->getCveJuzgado()) {
                        $error = true;
                        $tmp["type"] = "Error";
                        $tmp["text"] = "ESTA CARPETA SE ENCUENTRA RADICADA EN OTRO JUZGADO";
                    }
                } else {
                    #Si no se encuentra la carpeta Buscamos el Auxiliar
                    $auxiliar = $this->buscarAuxiliar($numeroCarpeta, $anioCarpeta, $juzgadoProcedencia, $carpetaInvestigacion, $nuc);
                    if ($auxiliar["type"] == "Error") {
                        $paramCarpeta["nueva"] = 1;
                    } else {
                        if ($auxiliar["info"]["cveJuzgado"] == $juzgadoSolicitar) {
                            $paramCarpeta["nueva"] = 2; #Genera el Antecede de Auxiliar con Solicitud Cateo
                            $numeroCarpeta = $auxiliar["info"]["numero"];
                            $anioCarpeta = $auxiliar["info"]["anio"];
                            $cveTipoCarpeta = $auxiliar["info"]["cveTipoCarpeta"];
                            $juzgadoProcedencia = $auxiliar["info"]["cveJuzgado"];
                            $carpetaInvestigacion = $auxiliar["info"]["carpetaInv"];
                            $nuc = $auxiliar["info"]["nuc"];
                            $idreferencia = $auxiliar["info"]["idCarpetaJudicial"];
                            $param["datosA"]["numero"] = $numeroCarpeta;
                            $param["datosA"]["anio"] = $anioCarpeta;
                        } else {
                            $error = true;
                            $tmp["type"] = "Error";
                            $tmp["text"] = "NUMERO AUXILIAR SE ENCUENTRA RADICADO EN OTRO JUZGADO";
                        }
                    }
                }

//                echo "<br><br>";
                #VALIDA SI LA SESSION ESTA ACTIVA
                /////pendiente
                #INSERTAMOS SOLICITUD DE CATEO
                if (!$error) {
                    $logger->w_onError("->se guarda solicitud");
                    if ($origenFacade == "sistema") {
                        $cveUsuario = $_SESSION["cveUsuarioSistema"];
                    } else {
                        $cveUsuario = $param["cveUsuario"];
                    }

                    $SolicitudescateosDao = new SolicitudescateosDAO();
                    $SolicitudescateosDto = new SolicitudescateosDTO();

                    if ($origenFacade == "sistema") {
                        $SolicitudescateosDto->setCaseProceedingId("0"); #numero Carpeta Judicial
                    } else {
                        $SolicitudescateosDto->setCaseProceedingId($param["caseProceedingId"]); #numero Carpeta Judicial
                    }
                    $SolicitudescateosDto->setNumero($numeroCarpeta); #numero Carpeta Judicial
                    $SolicitudescateosDto->setAnio($anioCarpeta); #a�o Carpeta Judicial
                    $SolicitudescateosDto->setCveJuzgado($juzgadoProcedencia); #juzgado en el que radica la carpeta judicial
                    $SolicitudescateosDto->setCveCatAudiencia("58"); #58 - AUDIENCIA PARA SOLICITAR CATEO
                    $SolicitudescateosDto->setCveJuzgadoDesahoga($juzgadoSolicitar); #juzgado al que se solicita la audicencia(donde se va a buscar el juez)
                    $SolicitudescateosDto->setIdReferencia(""); #No requerido
                    $SolicitudescateosDto->setFechaEnvio(""); #se define al consetastar cateo
                    $SolicitudescateosDto->setCveTipoCarpeta($cveTipoCarpeta);
                    $SolicitudescateosDto->setCarpetaInv($carpetaInvestigacion);
                    $SolicitudescateosDto->setNuc($nuc);
                    $SolicitudescateosDto->setCveUsuario($cveUsuario); #clave del usuario que solicta el cateo
                    $SolicitudescateosDto->setCveAdscripcionSolicita(""); #opcional-clave de la adscripcion que solicta el cateo
                    $SolicitudescateosDto->setCveEstatusSolicitudCateo("1"); #1 - REGISTRADA POR MP
                    $SolicitudescateosDto->setObservaciones(""); #opcionales
                    $SolicitudescateosDto = $SolicitudescateosDao->insertSolicitudescateos($SolicitudescateosDto, $proveedor);
                    if ($SolicitudescateosDto != "" && count($SolicitudescateosDto) > 0) {
                        $SolicitudescateosDto = $SolicitudescateosDto[0];
//                        print_r($SolicitudescateosDto);
//                        echo "<br><br>";
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR LA INFORMACION DE LA SOLICITUD DE CATEO");
                    }
                }

                #Obtenemos el Contador
                if (!$error) {
                    $logger->w_onError("->se obtiene contador");
                    $contadoresUDto = new ContadoresDTO();
                    $contadoresUDto->setCveJuzgado(10322);
                    $contadoresUDto->setCveTipoActuacion("");
                    $contadoresUDto->setCveTipoCarpeta(9);
                    $contadoresUDto->setAnio(date("Y"));
                    $ContadoresUCDto = new ContadoresController();
                    $contadoresUDto = $ContadoresUCDto->getContador($contadoresUDto, $proveedor);
                    if ($contadoresUDto != "" && count($contadoresUDto) > 0) {
                        $contadoresUDto = $contadoresUDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER EL NUMERO DE ORDEN DEL JUZGADO");
                    }
                }

                #INSERTAMOS CATEO
                if (!$error) {
                    $logger->w_onError("->insertamos cateo");
                    if ($SolicitudescateosDto->getIdSolicitudCateo() != "" && $SolicitudescateosDto->getIdSolicitudCateo() > 0) {
                        $CateosDao = new CateosDAO();
                        $CateosDto = new CateosDTO();
                        $CateosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo()); #Id de la solicitud del cateo
                        $CateosDto->setSolicitud(utf8_decode(preg_replace("/\'/", "\"", $solicitud))); #descripcion de la solicitud
                        $CateosDto->setCveRespuestaSolicitudCateo(""); #respuesta nulla
                        $CateosDto->setQr("PJ");
                        $CateosDto->setNumeroEspecializadoCateo($contadoresUDto->getNumero());
                        $CateosDto->setEmail($eMailMP);
                        $CateosDto = $CateosDao->insertCateos($CateosDto, $proveedor);
                        if ($CateosDto != "" && count($CateosDto) > 0) {
                            $CateosDto = $CateosDto[0];
//                            print_r($CateosDto);
//                            echo "<br><br>";
                        } else {
                            $error = true;
                            $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR LA INFORMACION DE CATEO");
                        }
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR: EL IDENTIFICADOR DE LA SOLICITUD VACIO O IGUAL A CERO");
                    }
                }

                #INSERTAMOS PERSONAS
                if (!$error) {
                    $logger->w_onError("->insertamos personas");
                    if (count($personasArray) > 0 && $personasArray != "") {
                        $PersonasDao = new PersonasDAO();
                        $count = 1;
                        foreach ($personasArray as $persona) {
                            $PersonasDto = new PersonasDTO();
                            $PersonasDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo()); #Id de la solicitud del cateo
                            $PersonasDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $persona["Paterno"])));
                            $PersonasDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $persona["Materno"])));
                            $PersonasDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $persona["Nombre"])));
                            $PersonasDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $persona["Domicilio"])));
                            $PersonasDto->setCveMunicipio("0"); #opcional - se recomienda cero por defaul
                            $PersonasDto->setCveGenero($persona["Genero"]);
                            $PersonasDto->setCveOrigen("1"); #1-origen solicitud de cateo

                            $PersonasDto = $PersonasDao->insertPersonas($PersonasDto, $proveedor);
                            if ($PersonasDto != "" && count($PersonasDto) > 0) {
                                $paramCarpeta["imputados"][$count - 1]["Nombre"] = $persona["Nombre"];
                                $paramCarpeta["imputados"][$count - 1]["Paterno"] = $persona["Paterno"];
                                $paramCarpeta["imputados"][$count - 1]["Materno"] = $persona["Materno"];
                                $paramCarpeta["imputados"][$count - 1]["Domicilio"] = $persona["Domicilio"];
                                $paramCarpeta["imputados"][$count - 1]["Genero"] = $persona["Genero"];
                                $paramCarpeta["imputados"][$count - 1]["Municipio"] = "";
                                $paramCarpeta["imputados"][$count - 1]["Telefono"] = "";
                                $paramCarpeta["imputados"][$count - 1]["Email"] = "";
                                $paramCarpeta["imputados"][$count - 1]["TipoPersona"] = "1";
                                $paramCarpeta["imputados"][$count - 1]["NombreMoral"] = "ACTUALIZAME";
                                $count++;
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR LA PERSONA:" . $count);
                                break;
                            }
                        }
                    }
                }

                #INSERTAMOS OBJETOS
                if (!$error) {
                    $logger->w_onError("->insertamos objetos");
                    if (count($objetosArray) > 0 && $objetosArray != "") {
                        $ObjetosDao = new ObjetosDAO();
                        $count = 1;
                        foreach ($objetosArray as $objeto) {
                            $ObjetosDto = new ObjetosDTO();
                            $ObjetosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo()); #Id de la solicitud del cateo
                            $ObjetosDto->setDesObjeto(utf8_decode(preg_replace("/\'/", "\"", $objeto["Descripcion"])));
                            $ObjetosDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $objeto["Domicilio"])));
                            $ObjetosDto->setCveOrigen("1"); #1-origen solicitud de cateo

                            $ObjetosDto = $ObjetosDao->insertObjetos($ObjetosDto, $proveedor);
                            if ($ObjetosDto != "" && count($ObjetosDto) > 0) {
//                                print_r($ObjetosDto);
//                                echo "<br><br>";
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EL OBJETO:" . $count);
                                break;
                            }
                            $count++;
                        }
                    }
                }

                #INSERTAMOS IMPUTADOS CATEOS
                if (!$error) {
                    $logger->w_onError("->insertamos imputados");
                    if (count($imputadosArray) > 0 && $imputadosArray != "") {
                        $ImputadoscateosDao = new ImputadoscateosDAO();
                        $count = 1;
                        $paramCarpeta["imputados"] = $imputadosArray;
                        foreach ($imputadosArray as $imputado) {
                            $ImputadoscateosDto = new ImputadoscateosDTO();
                            $ImputadoscateosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo()); #Id de la solicitud del cateo
                            $ImputadoscateosDto->setActivo("S");
                            $ImputadoscateosDto->setCveTipoPersona($imputado["TipoPersona"]); #1 - PERSONA FISICA
                            if ($imputado["TipoPersona"] == "1") {
                                $ImputadoscateosDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $imputado["Nombre"])));
                                $ImputadoscateosDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $imputado["Paterno"])));
                                $ImputadoscateosDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $imputado["Materno"])));
                                $ImputadoscateosDto->setAlias(utf8_decode(preg_replace("/\'/", "\"", $imputado["Alias"])));
                                $ImputadoscateosDto->setCveGenero($imputado["Genero"]);
                                $ImputadoscateosDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $imputado["Domicilio"])));
                                $ImputadoscateosDto->setTelefono($imputado["Telefono"]);
                                $ImputadoscateosDto->setEmail($imputado["Email"]);
                                $ImputadoscateosDto->setDetenido($imputado["Detenido"]);
                            } else {
                                $ImputadoscateosDto->setNombreMoral(utf8_decode(preg_replace("/\'/", "\"", $imputado["NombreMoral"])));
                            }

                            $ImputadoscateosDto = $ImputadoscateosDao->insertImputadoscateos($ImputadoscateosDto, $proveedor);
                            if ($ImputadoscateosDto != "" && count($ImputadoscateosDto) > 0) {
//                                print_r($ImputadoscateosDto);
//                                echo "<br><br>";
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EL IMPUTADO:" . $count);
                                break;
                            }
                            $count++;
                        }
                    } else {
                        if (count($personasArray) == 0) {
                            $paramCarpeta["imputados"][0]["Nombre"] = "ACTUALIZAME";
                            $paramCarpeta["imputados"][0]["Paterno"] = "ACTUALIZAME";
                            $paramCarpeta["imputados"][0]["Materno"] = "ACTUALIZAME";
                            $paramCarpeta["imputados"][0]["Domicilio"] = "ACTUALIZAME";
                            $paramCarpeta["imputados"][0]["Genero"] = "3";
                            $paramCarpeta["imputados"][0]["Municipio"] = "";
                            $paramCarpeta["imputados"][0]["Telefono"] = "";
                            $paramCarpeta["imputados"][0]["Email"] = "";
                            $paramCarpeta["imputados"][0]["TipoPersona"] = "1";
                            $paramCarpeta["imputados"][0]["NombreMoral"] = "ACTUALIZAME";
                        }
                    }
                }

                #INSERTAMOS OFENDIDOS CATEOS
                if (!$error) {
                    $logger->w_onError("->insertamos ofendidos");
                    if (count($victimasArray) > 0 && $victimasArray != "") {
                        $OfendidoscateosDao = new OfendidoscateosDAO();
                        $count = 0;
                        $paramCarpeta["victimas"] = $victimasArray;
                        foreach ($victimasArray as $victima) {
                            $OfendidoscateosDto = new OfendidoscateosDTO();
                            $OfendidoscateosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo()); #Id de la solicitud del cateo
                            $OfendidoscateosDto->setActivo("S");
                            $OfendidoscateosDto->setCveTipoPersona($victima["TipoPersona"]); #1 - PERSONA FISICA
                            if ($victima["TipoPersona"] == "1" || $victima["TipoPersona"] == "4" || $victima["TipoPersona"] == "5") {
                                $OfendidoscateosDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $victima["Nombre"])));
                                $OfendidoscateosDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $victima["Paterno"])));
                                $OfendidoscateosDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $victima["Materno"])));
                                $OfendidoscateosDto->setCveGenero($victima["Genero"]);
                                $OfendidoscateosDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $victima["Domicilio"])));
                                $OfendidoscateosDto->setTelefono($victima["Telefono"]);
                                $OfendidoscateosDto->setEmail($victima["Email"]);
                            } else {
                                $OfendidoscateosDto->setNombreMoral(utf8_decode(preg_replace("/\'/", "\"", $victima["NombreMoral"])));
                            }
                            $OfendidoscateosDto = $OfendidoscateosDao->insertOfendidoscateos($OfendidoscateosDto, $proveedor);

                            if ($OfendidoscateosDto != "" && count($OfendidoscateosDto) > 0) {
                                foreach ($tutoresArray as $tutor) {
                                    if ($tutor["IdOfendido"] == $count) {
                                        // Guardamos el tutor del ofendido
                                        $tutorVictimaDto = new TutoresofendidoscateosDTO();
                                        $tutorVictimaDao = new TutoresofendidoscateosDAO();
                                        $tutorVictimaDto->setActivo("S");
                                        $tutorVictimaDto->setCveGenero(utf8_decode(preg_replace("/\'/", "\"", $tutor["Genero"])));
                                        $tutorVictimaDto->setCveTipoTutor(utf8_decode(preg_replace("/\'/", "\"", $tutor["TipoTutor"])));
                                        $tutorVictimaDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $tutor["Domicilio"])));
                                        $tutorVictimaDto->setEmail(utf8_decode(preg_replace("/\'/", "\"", $tutor["Email"])));
                                        $tutorVictimaDto->setFechaNacimiento(utf8_decode(preg_replace("/\'/", "\"", $tutor["FechaNacimiento"])));
                                        $tutorVictimaDto->setIdOfendidoCateo(utf8_decode(preg_replace("/\'/", "\"", $OfendidoscateosDto[0]->getIdOfendidoCateo())));
                                        $tutorVictimaDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $tutor["Materno"])));
                                        $tutorVictimaDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $tutor["Nombre"])));
                                        $tutorVictimaDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $tutor["Paterno"])));
                                        $tutorVictimaDto->setTelefono(utf8_decode(preg_replace("/\'/", "\"", $tutor["Telefono"])));

                                        $tutorVictimaDto = $tutorVictimaDao->insertTutoresofendidoscateos($tutorVictimaDto, $proveedor);
                                        if ($tutorVictimaDto != "" && count($tutorVictimaDto) > 0) {
                                            
                                        }
                                    }
                                }
                                $count ++;
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EL OFENDIDO:" . $count);
                                break;
                            }
                        }
                    } else {
                        $paramCarpeta["victimas"][0]["Nombre"] = "ACTUALIZAME";
                        $paramCarpeta["victimas"][0]["Paterno"] = "ACTUALIZAME";
                        $paramCarpeta["victimas"][0]["Materno"] = "ACTUALIZAME";
                        $paramCarpeta["victimas"][0]["Domicilio"] = "ACTUALIZAME";
                        $paramCarpeta["victimas"][0]["Genero"] = "3";
                        $paramCarpeta["victimas"][0]["Municipio"] = "";
                        $paramCarpeta["victimas"][0]["Telefono"] = "";
                        $paramCarpeta["victimas"][0]["Email"] = "";
                        $paramCarpeta["victimas"][0]["TipoPersona"] = "2";
                        $paramCarpeta["victimas"][0]["NombreMoral"] = "Actualizame";
                    }
                }

                #INSERTAMOS DELITOS CATEOS
                if (!$error) {
                    $logger->w_onError("->insertamos delitos");
                    if (count($delitosArray) > 0 && $delitosArray != "") {
                        $DelitoscateosDao = new DelitoscateosDAO();
                        $count = 1;
                        $paramCarpeta["delitos"] = $delitosArray;
                        foreach ($delitosArray as $delito) {
                            $DelitoscateosDto = new DelitoscateosDTO();
                            $DelitoscateosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo()); #Id de la solicitud del cateo
                            $DelitoscateosDto->setActivo("S");
                            $DelitoscateosDto->setCveDelito($delito["cveDelito"]);
                            $DelitoscateosDto = $DelitoscateosDao->insertDelitoscateos($DelitoscateosDto, $proveedor);
                            if ($DelitoscateosDto != "" && count($DelitoscateosDto) > 0) {
//                                print_r($DelitoscateosDto);
//                                echo "<br><br>";
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EL DELITO:" . $count);
                                break;
                            }
                            $count++;
                        }
                    } else {
                        $paramCarpeta["delitos"][0]["cveDelito"] = 120;
                    }
                }

                #OBTENERMOS EL NUMERO DEL CONTADOR DEL CATEO
                if (!$error) {
                    $logger->w_onError("->insertamos contador");
                    $contadoresDto = new ContadoresDTO();
                    $contadoresDto->setCveJuzgado($juzgadoSolicitar);
                    $contadoresDto->setCveTipoActuacion("");
                    $contadoresDto->setCveTipoCarpeta("9");
                    $contadoresDto->setAnio(date("Y"));
                    $DelitoscateosDto = new ContadoresController();
                    $contadoresDto = $DelitoscateosDto->getContador($contadoresDto, $proveedor);
                    if ($contadoresDto != "" && count($contadoresDto) > 0) {
                        $contadoresDto = $contadoresDto[0];
//                        print_r($contadoresDto);
//                        echo "<br><br>";
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER EL NUMERO DE CATEO DEL JUZGADO");
                    }
                }

                #OBTENEMOS FECHA Y HORA DE MYSQL
                if (!$error) {
                    $fecha = $SolicitudescateosDao->selectFecha($proveedor);
                    if ($fecha != "") {
//                        echo "FECHA:" . $fecha;
//                        echo "<br><br>";
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER LA FECHA DEL SERVIDOR");
                    }

                    $hora = $SolicitudescateosDao->selectHora($proveedor);
                    if ($hora != "") {
//                        echo "HORA:" . $hora;
//                        echo "<br><br>";
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER LA HORA DEL SERVIDOR");
                    }
                }

                #GENERAMOS QR Y SELLO DIGITAL
                if (!$error) {
                    #GENERAMOS QR
//                    $_SESSION['CveUsuarioSistema'] = "80";
                    $fechaHora = $SolicitudescateosDao->selectFechaHoraMySql($proveedor);
                    $fechaHora = str_replace(array(":", " ", "-"), "", $fechaHora);
                    $qrCateo = "PJ" . str_pad($contadoresDto->getNumero(), 6, '0', STR_PAD_LEFT) . $contadoresDto->getAnio() . "C" . str_pad($carpetaInvestigacion, 17, '0', STR_PAD_LEFT) . str_pad($fechaHora, 19, '0', STR_PAD_LEFT) . str_pad($_SESSION['cveUsuarioSistema'], 6, '0', STR_PAD_LEFT);

                    #GENERAMOS SELLO DIGITAL
                    $cadenaOri = "||" . $qrCateo;
                    $cadenaOri .= "|" . "PODER JUDICIAL DEL ESTADO DE MEXICO";
                    $cadenaOri .= "|" . "SISTEMA DE GESTION JUDICIAL PENAL Y ORAL";
                    $cadenaOri .= "|" . "ANIO " . $contadoresDto->getAnio();
                    $cadenaOri .= "|" . $fecha . $hora . "||";
                    $cadenaOri = utf8_encode($cadenaOri);
                    $converter = new Encryption;
                    $converter->setPrivateKey($this->extraeLlavePrivada("./../../../tribunal/selloDigital/keystoreTSJEDOMEX.key.pem"));
                    $strSelloDig = $converter->encode($cadenaOri);
                    if ($qrCateo != "" && $cadenaOri != "" && $strSelloDig != "") {
//                        echo "QR:" . $qrCateo;
//                        echo "<br><br>";
//                        echo "CADENA ORIGINAL:" . $cadenaOri;
//                        echo "<br><br>";
//                        echo "SELLO DIGITAL:" . $strSelloDig;
//                        echo "<br><br>";
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL GENERAL LOS CODIGOS DE VERIFICACION(QR o SELLO DIGITAL)");
                    }
                }

                #BUSCA/REGISTRA JUZGADOR PARA CONTESTAR LA SOLICITUD
                if (!$error) {
                    $idJuezCateo = 0;
                    $JuzgadorescateosDao = new JuzgadorescateosDAO();
                    if ($nip == '') {
                        $programacioncateosController = new ProgramacioncateosController();
                        $arrayJuzgador = array();
                        $juzgadoJuezDto = new JuzgadosDTO();
                        $idJuzgadop = "10322";
                        $juzgadoJuezDto->setCveJuzgado($idJuzgadop);
                        $programacionCateosDto = new ProgramacioncateosDTO();
                        $programacionCateosDto->setFechaInicio(date("Y-m-d H:i:s"));
                        $arrayJuzgador = $programacioncateosController->juezCateo($juzgadoJuezDto, $programacionCateosDto, $proveedor);
                        if ($arrayJuzgador != "" && $arrayJuzgador["estatus"] == "ok") {
                            $idJuezCateo = $arrayJuzgador["data"]["idJuzgador"];
                            if ((int) $idJuezCateo >= 1) {
                                #Buscamos el Ultimo cateo
                                $JuzgadorUlti = new JuzgadorescateosDTO();
                                $JuzgadorUlti->setActivo("S");
                                $JuzgadorUlti->setIdJuzgador($idJuezCateo);
                                $orden = ' ORDER BY idJuzgadorCateo DESC limit 1 ';
                                $JuzgadorUlti = $JuzgadorescateosDao->selectJuzgadorescateos($JuzgadorUlti, '', $orden, $proveedor);
                                $fechaRegistro != "";
                                $sinAntecedentes = false;
                                if ($JuzgadorUlti != "") {
                                    $fechaRegistro = $JuzgadorUlti[0]->getFechaRegistro();
                                } else {
                                    $sinAntecedentes = true;
//                                $error = true;
//                                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO EL JUEZ");
                                }
                                if (!$sinAntecedentes) {
                                    if ($fechaRegistro != "") {
                                        /* Obtenemos el Tiempo de Vigencia */
                                        $tiempo = 0;
                                        $tiempoSolicitudDto = new TiemposesperasolicitudesDTO();
                                        $tiempoSolicitudDao = new TiemposesperasolicitudesDAO();
                                        $tiempoSolicitudDto->setActivo('S');
                                        $tiempoSolicitudDto->setCveTipoSolicitud(1);

                                        $tiempoSolicitudDto = $tiempoSolicitudDao->selectTiemposesperasolicitudes($tiempoSolicitudDto);
                                        if ($tiempoSolicitudDto != '') {
                                            $tiempo = $tiempoSolicitudDto['0']->getMunitosEspera();
                                        }

                                        $fechaActual = $SolicitudescateosDao->selectFechaHoraMySql($proveedor);
                                        $fechaSolicitudStr = strtotime('+' . $tiempo . ' minutes', strtotime($fechaRegistro));
                                        $fechaActualStr = strtotime($fechaActual);
                                        if ($fechaActualStr <= $fechaSolicitudStr) {
                                            $error = true;
                                            $tmp = array("type" => "Error", "text" => "EL JUEZ NO SE ENCUENTRA DISPONIBLE INTENTELO A LAS " . date('d/m/Y H:i:s', $fechaSolicitudStr));
                                        }
                                    }
                                }
                            } else if ((int) $idJuezCateo == 0) {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR NO EXISTEN LOS HORARIOS DE CATEO DEFINIDOS PARA EL JUZGADO");
                            } else if ((int) $idJuezCateo == -1) {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR NO EXISTEN JUEZ DISPONLIBLE PARA DICHA SOLICITUD DE CATEO");
                            }
                        } else {
                            $error = true;
                            $tmp = array("type" => "Error", "text" => utf8_encode($arrayJuzgador["text"]));
                        }
                    } else {
                        #Valida que sea un NIP vigente
                        $nipSolicitudDto = new NipsolicitudesDTO();
                        $nipSolicitudDao = new NipsolicitudesDAO();
                        $nipSolicitudDto->setActivo('S');
                        $nipSolicitudDto->setCveTipoCarpeta('9');
                        $nipSolicitudDto->setNip($nip);
                        $orden = ' AND fechaFinal >= "' . date('Y-m-d H:m:s') . '" ORDER BY idNipSolicitud DESC';
                        $nipSolicitudDto = $nipSolicitudDao->selectNipsolicitudes($nipSolicitudDto, $orden, $proveedor);
                        if ($nipSolicitudDto != '') {
                            $nipSolicitudDto = $nipSolicitudDto[0];
                            $idJuezCateo = $nipSolicitudDto->getIdJuzgador();
                        } else {
                            $error = true;
                            $tmp = array("type" => "Error", "text" => "EL NIP QUE INTENTAS UTILIZAR NO ES VALIDO");
                        }
                    }
                }

                if (!$error) {
                    $JuzgadorescateosDto = new JuzgadorescateosDTO();
                    $JuzgadorescateosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo()); #Id de la solicitud del cateo
                    $JuzgadorescateosDto->setIdJuzgador($idJuezCateo); #Id de el juzgador seleccionado en l programacion
                    $JuzgadorescateosDto->setActivo("S");
                    $JuzgadorescateosDto = $JuzgadorescateosDao->insertJuzgadorescateos($JuzgadorescateosDto, $proveedor);
                    if ($JuzgadorescateosDto != "" && count($JuzgadorescateosDto) > 0) {
                        
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR LA RELACION JUZGADOR - SOLICITUD DE CATEO");
                    }
                }

                #INSERTAMOS MPS RESPONSABLES
                if (!$error) {
                    if (count($mpsResponsablesArray) > 0 && $mpsResponsablesArray != "") {
                        $MinisteriosresponsablesDao = new MinisteriosresponsablesDAO();
                        $count = 1;
                        foreach ($mpsResponsablesArray as $mpResponsable) {
                            $MinisteriosresponsablesDto = new MinisteriosresponsablesDTO();
                            $MinisteriosresponsablesDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo()); #Id de la solicitud del cateo
                            $MinisteriosresponsablesDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $mpResponsable["Nombre"])));
                            $MinisteriosresponsablesDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $mpResponsable["Paterno"])));
                            $MinisteriosresponsablesDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $mpResponsable["Materno"])));
                            $MinisteriosresponsablesDto = $MinisteriosresponsablesDao->insertMinisteriosresponsables($MinisteriosresponsablesDto, $proveedor);
                            if ($MinisteriosresponsablesDto != "" && count($MinisteriosresponsablesDto) > 0) {
//                                print_r($MinisteriosresponsablesDto);
//                                echo "<br><br>";
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EL MINISTERIO PUBLICO:" . $count);
                                break;
                            }
                            $count++;
                        }
                    }
                }

                #ACTUALIZAMOS INFORMACI�N DEL CATEO
                if (!$error) {
                    $CateosUpdateDto = new CateosDTO();
                    $CateosUpdateDto->setIdCateo($CateosDto->getIdCateo()); #Id del cateo
                    $CateosUpdateDto->setNumeroCateo($contadoresDto->getNumero());
                    $CateosUpdateDto->setAnioCateo($contadoresDto->getAnio());
                    $CateosUpdateDto->setQr($qrCateo);
                    $CateosUpdateDto->setSelloDigital($strSelloDig);
                    $CateosDto = $CateosDao->updateCateos($CateosUpdateDto, $proveedor);
                    if ($CateosDto != "" && count($CateosDto) > 0) {
                        $CateosDto = $CateosDto[0];
//                        print_r($CateosDto);
//                        echo "<br><br>";
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL ACTUALIZAR DATOS DEL CATEO");
                    }
                }

                #Actualizamos la informacion del Nip
                if (!$error) {
                    if ($nip != '') {
                        if ($nipSolicitudDto != '') {
                            $nipUpdateDto = new NipsolicitudesDTO();
                            $nipUpdateDto->setActivo('N');
                            $nipUpdateDto->setIdNipSolicitud($nipSolicitudDto->getIdNipSolicitud());
                            $nipUpdateDto = $nipSolicitudDao->updateNipsolicitudes($nipUpdateDto, $proveedor);
                            if ($nipUpdateDto != '') {
                                
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "NO SE ACTUALIZO LA INFORMACION DEL NIP");
                            }
                        }
                    }
                }

                #COPIAMOS ARCHIVO ADJUNTO DE LA SOLICITUD
                if (!$error) {
                    $logger->w_onError("LLEGA HASTA LA CARGA DE ARCHIVO");
                    if ($origenFacade == "sistema") {
                        $logger->w_onError("ES POR SISTEMA");
                        ////pendiente: cuando se deefinan las tablas para subir archivos
                        $totalArchivos = count($fileSolicitud["name"]);
                        if (($totalArchivos >= 1) && ($fileSolicitud["name"][0] != "")) {
                            $imagenesfachada = new ImagenesFacade();
                            $paramImagenes = array();
                            $paramImagenes["cveTipoDocumento"] = 19; //->Cateo
                            $paramImagenes["idCarpetaJudicial"] = $CateosDto->getIdCateo();
                            $paramImagenes["idActuacion"] = 0;
                            $paramImagenes["archivo"] = $fileSolicitud;
                            $imagenes = $imagenesfachada->insertImagenes($paramImagenes, $proveedor);
                            $imagenes = json_decode($imagenes, true);
                            if (isset($imagenes["data"]["type"]) != "" && isset($imagenes["data"]["type"]) == "OK") {
                                
                            } else {
                                $tmp = array("type" => "Error", "text" => $imagenes["text"]);
                                $error = true;
                            }
                        }
                    } else {
                        if ($fileSolicitud != "") {
                            $logger->w_onError("NO ES POR SISTEMA Y VIENE ARCHIVO");
                            $documentosImgDto = new DocumentosimgDTO();
                            $documentosImgDao = new DocumentosimgDAO();
                            $documentosImgDto->setActivo("S");
                            $documentosImgDto->setIdActuacion("0");
                            $documentosImgDto->setCveTipoDocumento("19");
                            $documentosImgDto->setCveUsuario($cveUsuario);
                            $documentosImgDto->setIdCarpetaJudicial($CateosDto->getIdCateo());
                            $documentosImgDto = $documentosImgDao->insertDocumentosimg($documentosImgDto, $proveedor);
                            if ($documentosImgDto != "") {
                                $file = fopen("archivo.txt", "a+");
                                fwrite($file, $fileSolicitud);
                                fclose($file);
                                $pdf_base64 = "archivo.txt";
                                $pdf_base64_handler = fopen($pdf_base64, 'r');
                                $pdf_content = fread($pdf_base64_handler, filesize($pdf_base64));
                                fclose($pdf_base64_handler);
                                $pdf_decoded = base64_decode($pdf_content);
                                $nombreArchivo = "CATEO_" . $CateosDto->getAnioCateo() . "" . $CateosDto->getNumeroCateo() . ".pdf";
                                $pdf = fopen($nombreArchivo, 'w');
                                fwrite($pdf, $pdf_decoded);
                                fclose($pdf);

                                $path = "../../../imagenes"; //Nodo Raiz
                                $ruta = $path . '/' . $juzgadoSolicitar . '/' . $CateosDto->getAnioCateo() . '/CATEO/' . $CateosDto->getNumeroCateo() . "/";
                                if (!is_dir($ruta)) {
                                    mkdir($ruta, 0777, true);
                                }
                                $ruta .= $nombreArchivo;
                                rename($nombreArchivo, $ruta);
                                $documentosImgDto = $documentosImgDto[0];
                                $imagenesDto = new ImagenesDTO();
                                $imagenesDao = new ImagenesDAO();
                                $imagenesDto->setActivo("S");
                                $imagenesDto->setBase64($fileSolicitud);
                                $imagenesDto->setRuta($ruta);
                                $imagenesDto->setAdjunto("S");
                                $imagenesDto->setFojas("0");
                                $imagenesDto->setIdDocumentoImg($documentosImgDto->getIdDocumentoImg());
                                $imagenesDto = $imagenesDao->insertImagenes($imagenesDto, $proveedor);
                                if ($imagenesDto != "") {
                                    
                                } else {
                                    $error = true;
                                    $tmp = array("type" => "Error", "text" => "NO SE PUDO GUARDAR EL ARCHIVO");
                                }
                                @unlink($nombreArchivo);
                                @unlink("archivo.txt");
                            }
                        }
                    }
                }

                #OBTENEMOS INFORMACI�N PARA ENVIAR CORREO Y REALIZAR LLAMADAS AL JUEZ Y ADMINISTRADOR
                if (!$error) {
                    #OBTENEMOS INFORMACI�N DEL JUZGADO A SOLICITAR 
                    $JuzgadosDao = new JuzgadosDAO();
                    $JuzgadosDto = new JuzgadosDTO();
                    $JuzgadosDto->setCveJuzgado($juzgadoSolicitar); #Id del juzgado a solicitar
                    $JuzgadosDto->setActivo("S");
                    $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, "", $proveedor);
                    if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                        $JuzgadosDto = $JuzgadosDto[0];
                        #OBTENEMOS INFORMACION DEL ADMINISTRADOR DEL JUZGADO
                        $file = dirname(__FILE__) . "/../../../archivos/administradoresjuzgados" . $JuzgadosDto->getCveJuzgado() . ".json";
                        $adminJuzgados = json_decode(file_get_contents($file), true);
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO A SOLICITAR");
                    }

                    #OBTENEMOS INFORMACI�N DEL JUZGADOR
                    $JuzgadoresDao = new JuzgadoresDAO();
                    $JuzgadoresDto = new JuzgadoresDTO();
                    $JuzgadoresDto->setIdJuzgador($idJuezCateo); #Id del juzgador turnado a resolver el cateo
                    $JuzgadoresDto->setActivo("S");
                    $JuzgadoresDto = $JuzgadoresDao->selectJuzgadores($JuzgadoresDto, "", $proveedor);
                    if ($JuzgadoresDto != "" && count($JuzgadoresDto) > 0) {
                        $JuzgadoresDto = $JuzgadoresDto[0];
//                        print_r($JuzgadoresDto);
//                        echo "<br><br>";
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADOR A RESOLVER LA SOLICITUD DE CATEO");
                    }

                    #OBTENEMOS INFORMACION DEL M.P. QUE ESTA SOLICITANDO EL CATEO
                    $xNombre = strtoupper(utf8_encode($_SESSION["Nombre"]));
                }

                #INSERTAMOS REGISTRO A CHAT
                if (!$error) {
                    $numeroAnioCateo = md5($CateosDto->getIdCateo() . "-1");
                    $chatMessagesMPDto = new ChatMessagesDTO(); //INVITACI�N A MINISTERIO PUBLICO
                    $chatMessagesDao = new ChatMessagesDAO();
                    $chatMessagesMPDto->setChatId($numeroAnioCateo);
                    $chatMessagesMPDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                    $chatMessagesMPDto->setMensaje("SE AGREGO A MP:" . $_SESSION["Nombre"] . " AL CHAT DEL CATEO: " . $CateosDto->getNumeroCateo() . "/" . $CateosDto->getAnioCateo());
                    $chatMessagesMPDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $chatMessagesMPDto->setNombreUsuario($_SESSION['Nombre']);
                    $chatMessagesMPDto->setCveNumero($CateosDto->getIdCateo());
                    $chatMessagesMPDto->setTipoChat("1"); # tipo chat 1 = cateo
                    $chatMessagesMPDto = $chatMessagesDao->insertChatMessages($chatMessagesMPDto, $proveedor);
                    if ($chatMessagesMPDto != "" && count($chatMessagesMPDto) > 0) {
                        $chatMessagesMPDto = $chatMessagesMPDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL AGREGAR AL MINISTERIO PUBLICO A LA SALA DE CHAT DEL CATEO");
                    }
                }

                if (!$error) {
                    $chatMessagesJuezDto = new ChatMessagesDTO(); //INVITACI�N A MINISTERIO JUEZ
                    $chatMessagesDao = new ChatMessagesDAO();
                    $chatMessagesJuezDto->setChatId($numeroAnioCateo);
                    $chatMessagesJuezDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                    $chatMessagesJuezDto->setMensaje("SE AGREGO A JUEZ: " . $JuzgadoresDto->getTitulo() . " " . $JuzgadoresDto->getNombre() . " " . $JuzgadoresDto->getPaterno() . " " . $JuzgadoresDto->getMaterno() . " " . " AL CHAT DEL CATEO: " . $CateosDto->getNumeroCateo() . "/" . $CateosDto->getAnioCateo());
                    $chatMessagesJuezDto->setCveUsuario($JuzgadoresDto->getCveUsuario());
                    $chatMessagesJuezDto->setNombreUsuario($JuzgadoresDto->getTitulo() . " " . $JuzgadoresDto->getNombre() . " " . $JuzgadoresDto->getPaterno() . " " . $JuzgadoresDto->getMaterno());
                    $chatMessagesJuezDto->setCveNumero($CateosDto->getIdCateo());
                    $chatMessagesJuezDto->setTipoChat("1"); # tipo chat 1 = cateo
                    $chatMessagesJuezDto = $chatMessagesDao->insertChatMessages($chatMessagesJuezDto, $proveedor);
                    if ($chatMessagesJuezDto != "" && count($chatMessagesJuezDto) > 0) {
                        $chatMessagesJuezDto = $chatMessagesJuezDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL AGREGAR AL MINISTERIO PUBLICO A LA SALA DE CHAT DEL CATEO");
                    }
                }

                #POPROCESO PARA REALIZAR LA LLAMADA AL JUEZ
                if (!$error) {
                    $celulares = "";
                    $emailJuzgadores = "";
                    $telefonosDto = new TelefonosjuzgadoresDTO();
                    $telefonosDto->setIdJuzgador($JuzgadoresDto->getIdJuzgador());
                    $telefonosDto->setActivo("S");
                    $telefonosDao = new TelefonosjuzgadoresDAO();
                    $telefonosDto = $telefonosDao->selectTelefonosjuzgadores($telefonosDto);

                    if ($telefonosDto != "") {
                        foreach ($telefonosDto as $telefono) {
                            $numeroTelefono = $telefono->getTelefono();
                            $numeroCelular = $telefono->getCelular();
                            if ($telefono->getEmail() != "") {
                                $emailJuzgadores .= $telefono->getEmail() . ",";
                            }

                            if ($numeroTelefono != "") {
                                $celulares .= $numeroTelefono . ",";
                            }

                            if ($numeroCelular != "") {
                                $celulares .= $numeroCelular . ",";
                            }
                        }
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - LLAMADA JUEZ:" . $JuzgadoresDto->getTitulo() . " " . $JuzgadoresDto->getNombre() . " " . $JuzgadoresDto->getPaterno() . " " . $JuzgadoresDto->getMaterno());
                    }

//                    $celulares = "7226491761"; #PENDIENTE: QUITAR EN PRODUCCION
//                    $emailJuzgador = "ricardo.ortiz@pjedomex.gob.mx"; #PENDIENTE: QUITAR EN PRODUCCION
                    if (!$error) {
                        $celulares = substr($celulares, 0, strlen($celulares) - 1);
                        $celulares = explode(',', $celulares);
                        $contadorError = 0;
                        $numeroWhats = "";
                        foreach ($celulares as $celular) {
                            if ($celular != "") {
                                if (substr($celular, 0, 3) == "722") {
                                    $numeroWhats = "521" . $celular;
                                    $celular = "044" . $celular;
                                } else {
                                    $celular = "045" . $celular;
                                }
                                $nombrearchivo = "cateo_" . $CateosDto->getIdCateo() . "_" . $celular . "_" . $JuzgadoresDto->getCveUsuario() . "_" . date("YmdHis") . ".txt";
                                $fechaCateo = $CateosDto->getFechaRegistro();
                                $horaCateo = explode(' ', $fechaCateo);
                                $horaCateo = $horaCateo[1];

                                $asterisk2 = new asterisk2();
                                #comentar en caso de que sea en el localhost 
                                //$e = $asterisk2->llamar("189.197.63.36", $celular, "./../../../llamadas/", $nombrearchivo, "outboundmsg2");
                                $e = "";
                                $cveEstatusNotificacion = 1; #EN ESPERA
                                if (preg_match("/problema/", $e)) {
                                    $cveEstatusNotificacion = 3; #ERROR
                                } else {
                                    $cveEstatusNotificacion = 2; #ENVIADO CORRECTO
                                }

                                // --> Envia el Mensaje WhatsApp
//                        $resultWhats = array();
//                        if ($numeroWhats != "") {
//                            $message = "NOTIFICACI�N. En Toluca, M�xico, siendo las " . $horaCateo . " horas del d�a " . $this->FechaLarga($fechaCateo) . ", mediante el sistema inform�tico (SIGEJUPE),  el C. " . $xNombre . ", Agente del Ministerio P�blico, ";
//                            $message .= "formul�; ante el " . $JuzgadosDto->getDesJuzgado() . ", la solicitud de cateo n�mero " . str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . ", ";
//                            $message .= "la cual se encuentra en el referido sistema inform�tico para su consulta y atenci�n respectiva.";
//                            $message = utf8_encode($message);
//                            $resultWhats = sendWhatsAppMessage($numeroWhats, $message);
//                            if ($resultWhats["type"] == "OK") {
//                                
//                            }
//                        }

                                $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                $BitacoranotificacionesDto->setCveMedioNotificacion("2"); #1 - LLAMADA
                                $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion); #ESTADO DEL ENVIO DE LA LLAMADA
                                $BitacoranotificacionesDto->setIdReferencia($CateosDto->getIdCateo()); #ID DEL CATEO
                                $BitacoranotificacionesDto->setNumero($CateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                $BitacoranotificacionesDto->setAnio($CateosDto->getAnioCateo()); #A�O DEL CATEO
                                $BitacoranotificacionesDto->setCvejuzgado($juzgadoSolicitar); #JUZGADO A SOLICITAR
                                $BitacoranotificacionesDto->setCveUsuario($JuzgadoresDto->getCveUsuario()); #Id de el usuario al que se le envio la llamada
                                $BitacoranotificacionesDto->setMedio($celular); #archivo generado txt
                                $BitacoranotificacionesDto->setMovimiento("Archivo:" . $nombrearchivo . "<br>Respuesta:" . $e); #nombre del archivo concatenado con el detalle de la respuesta de asterix
                                $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                    $contadorError++;
                                } else {
                                    if ($contadorError == count($celulares)) {
                                        $error = true;
                                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - LLAMADA JUEZ");
                                    }
                                    $contadorError++;
                                }
                            }
                        }
                    }
                }

                #PROCESO PARA ENVIAR CORREO ELECTRONICO AL JUEZ
                if (!$error) {
                    if ($emailJuzgadores != "") {
                        $emailJuzgadores = substr($emailJuzgadores, 0, strlen($emailJuzgadores) - 1);
                        $emailJuzgadores = explode(",", $emailJuzgadores);
                        $objDatCorreo = $this->plantillaCorreo("cateos");
                        if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
//                        $emailJuez = "ricardo.ortiz@pjedomex.gob.mx";
                            foreach ($emailJuzgadores as $emailJuzgador) {
                                $emailJuez = $emailJuzgador;
//                        $xNombre = "ilhuitemoc ricardo ortiz";
                                if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                                    $correoJuez = new EmailHELPER();
                                    $correoJuez->setSenderAddress($objDatCorreo->CorreoRemite);
                                    $correoJuez->setToAddress(trim($emailJuez));
                                    $correoJuez->setToName("Solicitud de Cateo - JUEZ");
                                    $correoJuez->setSubject($objDatCorreo->Subject);
                                    $correoJuez->setHostSmtp($objDatCorreo->IpSMTP);
                                    $correoJuez->setPortSmtp($objDatCorreo->PortSMTP);
                                    #AUTENTICACION
                                    $correoJuez->setAuth($objDatCorreo->aut);
//                                    $correoJuez->setSmtpSecure($objDatCorreo->typeAut);
                                    $correoJuez->setLoginUser($objDatCorreo->login);
                                    $correoJuez->setLoginPass($objDatCorreo->password);
                                    #AUTENTICACION
                                    $correoJuez->setIsHTMLFormat(true);
                                    $strCuerpoEmailJuez = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                    $strCuerpoEmailJuez = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaCateo . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaCateo) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),  el <b>C. " . $xNombre . "</b>, Agente del Ministerio P&uacute;blico, 
                                           formul&oacute; ante el <b>" . $JuzgadosDto->getDesJuzgado() . "</b>, la solicitud de cateo n&uacute;mero <b>" . str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . "</b>, 
                                           la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                                    $strCuerpoEmailJuez .= "</body>\n</html>\n\n";
                                    $correoJuez->setBody($strCuerpoEmailJuez);
                                    $intentos = 1;
                                    $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                    while ($intentos <= 5) {
                                        $bolStatusMailJuez = $correoJuez->send();
                                        $cveEstatusNotificacion = "1";
                                        $movimiento = "";
                                        if ($bolStatusMailJuez == true) {
                                            $cveEstatusNotificacion = "2";
                                            $movimiento = "SE LOGRO ENVIAR CORREO ELECTRONICO";
                                        } else {
                                            $cveEstatusNotificacion = "3";
                                            $movimiento = "NO SE LOGRO ENVIAR CORREO ELECTRONICO";
                                            $movimientoExtra = ", NO SE LOGRO ENVIAR CORREO ELECTRONICO AL JUEZ ";
                                        }
                                        $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                        $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                        $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                        $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                        $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                        $BitacoranotificacionesDto->setIdReferencia($CateosDto->getIdCateo()); #ID DEL CATEO
                                        $BitacoranotificacionesDto->setNumero($CateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                        $BitacoranotificacionesDto->setAnio($CateosDto->getAnioCateo()); #A�O DEL CATEO
                                        $BitacoranotificacionesDto->setCvejuzgado($juzgadoSolicitar); #JUZGADO A SOLICITAR
                                        $BitacoranotificacionesDto->setCveUsuario($JuzgadoresDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                        $BitacoranotificacionesDto->setMedio($emailJuez);
                                        $BitacoranotificacionesDto->setMovimiento($movimiento);
                                        $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                        if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
//                                    print_r($BitacoranotificacionesDto);
//                                    echo "<br><br>";
                                        } else {
                                            $error = true;
                                            $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ");
                                        }

                                        #SI EL ENVIO DE CORREO FUE EXITOSO CORTA EL CICLO
                                        if ($bolStatusMailJuez == true) {
                                            break;
                                        }

                                        $intentos = $intentos + 1;
                                    }
                                } else {
                                    $movimientoExtra = ", NO SE LOGRO ENVIAR CORREO ELECTRONICO AL JUEZ ";
                                    $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                    $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                    $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                    $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                    $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                    $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                    $BitacoranotificacionesDto->setIdReferencia($CateosDto->getIdCateo()); #ID DEL CATEO
                                    $BitacoranotificacionesDto->setNumero($CateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                    $BitacoranotificacionesDto->setAnio($CateosDto->getAnioCateo()); #A�O DEL CATEO
                                    $BitacoranotificacionesDto->setCvejuzgado($juzgadoSolicitar); #JUZGADO A SOLICITAR
                                    $BitacoranotificacionesDto->setCveUsuario($JuzgadoresDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                    $BitacoranotificacionesDto->setMedio($emailJuez);
                                    $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO");
                                    $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                    if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
//                                print_r($BitacoranotificacionesDto);
//                                echo "<br><br>";
                                    } else {
                                        $error = true;
                                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ");
                                    }
                                }
                            }
                        } else {
                            $mensageCorreos = "ERROR AL OBTENER CONFIGURACION DE CORREOS";
                        }
                    }
                }

                #PROCESO PARA ENVIAR CORREO ELECTRONICO AL ADMINISTRADOR DEL JUZGADO
                $emailAdministrador = "";
                if (!$error) {
                    if ($adminJuzgados != "") {
                        if (isset($adminJuzgados["type"]) == "OK") {
                            $objDatCorreo = $this->plantillaCorreo("cateos");
                            foreach ($adminJuzgados["usuarios"] as $usuarios) {
                                $xNombre = strtoupper(utf8_decode($usuarios["Nombre"] . " " . $usuarios["Paterno"] . " " . $usuarios["Materno"]));
                                if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                                    $emailAdministrador = $usuarios["email"];
                                    if ((trim($emailAdministrador) != "") && (strlen($emailAdministrador) > 1)) {
                                        $correoAdministrador = new EmailHELPER();
                                        $correoAdministrador->setSenderAddress($objDatCorreo->CorreoRemite);
                                        $correoAdministrador->setToAddress(trim($emailAdministrador));
                                        $correoAdministrador->setToName("Solicitud de Cateo - ADMINISTRADOR");
                                        $correoAdministrador->setSubject($objDatCorreo->Subject);
                                        $correoAdministrador->setHostSmtp($objDatCorreo->IpSMTP);
                                        $correoAdministrador->setPortSmtp($objDatCorreo->PortSMTP);
                                        #AUTENTICACION
                                        $correoAdministrador->setAuth($objDatCorreo->aut);
                                        $correoAdministrador->setSmtpSecure($objDatCorreo->typeAut);
                                        $correoAdministrador->setLoginUser($objDatCorreo->login);
                                        $correoAdministrador->setLoginPass($objDatCorreo->password);
                                        #AUTENTICACION
                                        $correoAdministrador->setIsHTMLFormat(true);
                                        $strCuerpoEmailAdm = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                        $strCuerpoEmailAdm = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaCateo . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaCateo) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),  el <b>C. " . $xNombre . "</b>, Agente del Ministerio P&uacute;blico, 
                                           formul&oacute; ante el <b>" . $JuzgadosDto->getDesJuzgado() . "</b>, la solicitud de cateo n&uacute;mero <b>" . str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . "</b>, 
                                           la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                                        $strCuerpoEmailAdm .= "</body>\n</html>\n\n";
                                        $correoAdministrador->setBody($strCuerpoEmailAdm);
                                        $intentos = 1;
                                        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                        while ($intentos <= 5) {
                                            $bolStatusMailAdm = $correoAdministrador->send();
                                            $cveEstatusNotificacion = "1";
                                            $movimiento = "";
                                            if ($bolStatusMailAdm == true) {
                                                $cveEstatusNotificacion = "2";
                                                $movimiento = "SE LOGRO ENVIAR CORREO ELECTRONICO";
                                            } else {
                                                $cveEstatusNotificacion = "3";
                                                $movimiento = "NO SE LOGRO ENVIAR CORREO ELECTRONICO";
                                                $movimientoExtra .= ", NO SE LOGRO ENVIAR CORREO ELECTRONICO AL ADMINISTRADOR DE JUZGADO $xNombre";
                                            }
                                            $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                            $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                            $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                            $BitacoranotificacionesDto->setIdReferencia($CateosDto->getIdCateo()); #ID DEL CATEO
                                            $BitacoranotificacionesDto->setNumero($CateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                            $BitacoranotificacionesDto->setAnio($CateosDto->getAnioCateo()); #A�O DEL CATEO
                                            $BitacoranotificacionesDto->setCvejuzgado($juzgadoSolicitar); #JUZGADO A SOLICITAR
                                            $BitacoranotificacionesDto->setCveUsuario($usuarios["CveUsuario"]); #Id de el usuario al que se le envio el correo
                                            $BitacoranotificacionesDto->setMedio($emailAdministrador);
                                            $BitacoranotificacionesDto->setMovimiento($movimiento);
                                            $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                            if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
//                                    print_r($BitacoranotificacionesDto);
//                                    echo "<br><br>";
                                            } else {
                                                $error = true;
                                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO ADMINISTRADOR");
                                            }

                                            #SI EL ENVIO DE CORREO FUE EXITOSO CORTA EL CICLO
                                            if ($bolStatusMailAdm == true) {
                                                break;
                                            }

                                            $intentos = $intentos + 1;
                                        }
                                    } else {
                                        $movimientoExtra .= ", NO SE LOGRO ENVIAR CORREO ELECTRONICO AL ADMINISTRADOR DE JUZGADO $xNombre";
                                        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                        $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                        $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                        $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                        $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                        $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                        $BitacoranotificacionesDto->setIdReferencia($CateosDto->getIdCateo()); #ID DEL CATEO
                                        $BitacoranotificacionesDto->setNumero($CateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                        $BitacoranotificacionesDto->setAnio($CateosDto->getAnioCateo()); #A�O DEL CATEO
                                        $BitacoranotificacionesDto->setCvejuzgado($juzgadoSolicitar); #JUZGADO A SOLICITAR
                                        $BitacoranotificacionesDto->setCveUsuario($usuarios["CveUsuario"]); #Id de el usuario al que se le envio el correo
                                        $BitacoranotificacionesDto->setMedio($emailAdministrador);
                                        $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO");
                                        $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                        if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                            
                                        } else {
                                            $error = true;
                                            $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ");
                                        }
                                    }
                                } else {
                                    $mensageCorreos = "ERROR AL OBTENER CONFIGURACION DE CORREOS";
                                }
                            }
                        }
                    }
                }

                ##GUARDAMOS EN BITACORA EL REGISTRO DEL CATEO
                if (!$error) {
                    $BitacoramovimientosDao = new BitacoramovimientosDAO();
                    $BitacoramovimientosDto = new BitacoramovimientosDTO();
                    $BitacoramovimientosDto->setCveAccion("36"); #36 - REGISTRO DE SOLICITUD DE CATEO
                    $BitacoramovimientosDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
                    $BitacoramovimientosDto->setCvePerfil($CateosDto->getIdCateo()); #ID DEL CATEO
                    $BitacoramovimientosDto->setCveAdscripcion($SolicitudescateosDto->getCveJuzgadoDesahoga());
                    if (($bolStatusMailJuez == true) && ($bolStatusMailAdm == true)) {
                        $BitacoramovimientosDto->setObservaciones("AGREGO SOLICITUD DE CATEO NUMERO: " . $CateosDto->getNumeroCateo() . " A�O: " . $CateosDto->getAnioCateo() . " JUEZ" . $idJuezCateo . " ENVIO CORREO ELECTRONICO A EL JUEZ Y EL ADMINISTRADOR DEL JUZGADO");
                    } else {
                        $observaciones = "AGREGO SOLICITUD DE CATEO NUMERO: " . $CateosDto->getNumeroCateo() . " A�O: " . $CateosDto->getAnioCateo() . " JUEZ" . $idJuezCateo . " ";
                        $observaciones .= ($bolStatusMailJuez == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                        $observaciones .= $emailJuez;
                        $observaciones .= ($bolStatusMailAdm == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                        $observaciones .= $emailAdministrador;
                        $BitacoramovimientosDto->setObservaciones($observaciones);
                    }
                    $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                    if ($BitacoramovimientosDto != "" && count($BitacoramovimientosDto) > 0) {
//                                print_r($BitacoranotificacionesDto);
//                                echo "<br><br>";
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA MOVIMIENTOS");
                    }
                }

                #Generamos el numero Auxiliar

                if (!$error) {
                    if ($paramCarpeta["nueva"] == 1) {
                        #Genera la Carpeta no Existe
                        $paramCarpeta["numero"] = $CateosDto->getNumeroCateo();
                        $paramCarpeta["anio"] = $CateosDto->getAnioCateo();
                        $paramCarpeta["cveJuzgado"] = $SolicitudescateosDto->getCveJuzgadoDesahoga();
                        $paramCarpeta["carpetaInv"] = $SolicitudescateosDto->getCarpetaInv();
                        $paramCarpeta["nuc"] = $SolicitudescateosDto->getNuc();
                        $paramCarpeta["cveUsuario"] = $cveUsuario;
                        $paramCarpeta["numImptutado"] = count($paramCarpeta["imputados"]);
                        $paramCarpeta["numOfendido"] = count($paramCarpeta["victimas"]);
                        $paramCarpeta["numdelito"] = count($paramCarpeta["delitos"]);
                        $carpteasJudiciales = $this->generaCarpeta($paramCarpeta, $proveedor);
                        if ($carpteasJudiciales["type"] == "OK") {
                            $paramCarpeta["idReferencia"] = $carpteasJudiciales["datos"]["idCarpetaJudicial"];
                            $paramCarpeta["carpetas"] = $carpteasJudiciales["datos"];
                            $generaPartes = $this->guardaPartesCarpeta($paramCarpeta, $proveedor);
                            if ($generaPartes["type"] == "OK") {
                                $param["datosA"]["numero"] = $carpteasJudiciales["datos"]["numero"];
                                $param["datosA"]["anio"] = $carpteasJudiciales["datos"]["anio"];
                                $numeroCarpeta = $carpteasJudiciales["datos"]["numero"];
                                $anioCarpeta = $carpteasJudiciales["datos"]["anio"];
                                $cveTipoCarpeta = $carpteasJudiciales["datos"]["cveTipoCarpeta"];
                                $juzgadoProcedencia = $carpteasJudiciales["datos"]["cveJuzgado"];
                                $carpetaInvestigacion = $carpteasJudiciales["datos"]["carpetaInv"];
                                $nuc = $carpteasJudiciales["datos"]["nuc"];
                                $idreferencia = $carpteasJudiciales["datos"]["idCarpetaJudicial"];

                                #Guardamos en la tabla de antecedes
//                                $antecedesDto = new AntecedescarpetasDTO();
//                                $antecedesDto->setActivo("S");
//                                $antecedesDto->setCveTipoCarpeta(9);
//                                $antecedesDto->setIdCarpetaPadre($paramCarpeta["idReferencia"]);
//                                $antecedesDto->setIdCarpetaHija($SolicitudescateosDto->getIdSolicitudCateo());
//                                $antecedesDao = new AntecedescarpetasDAO();
//                                $antecedesDto = $antecedesDao->insertAntecedescarpetas($antecedesDto, $proveedor);
//                                if ($antecedesDto != "") {
//                                    $antecedesDto = $antecedesDto[0];
//                                } else {
//                                    $error = true;
//                                    $tmp["type"] = "Error";
//                                    $tmp["text"] = "NO SE GUARDO EL ANTECEDE";
//                                }
                            } else {
                                $param["datosA"]["numero"] = "";
                                $param["datosA"]["anio"] = "";
                                $tmp = $generaPartes;
                                $error = true;
                            }
                        } else {
                            $param["datosA"]["numero"] = "";
                            $param["datosA"]["anio"] = "";
                            $tmp = $carpteasJudiciales;
                            $error = true;
                        }
                    } else if ($paramCarpeta["nueva"] == 2) {
                        #Se genera la tabla de Antecedes
//                        $antecedesDto = new AntecedescarpetasDTO();
//                        $antecedesDto->setActivo("S");
//                        $antecedesDto->setCveTipoCarpeta(9);
//                        $antecedesDto->setIdCarpetaPadre($idreferencia);
//                        $antecedesDto->setIdCarpetaHija($SolicitudescateosDto->getIdSolicitudCateo());
//                        $antecedesDao = new AntecedescarpetasDAO();
//                        $antecedesDto = $antecedesDao->insertAntecedescarpetas($antecedesDto, $proveedor);
//                        if ($antecedesDto != "") {
//                            $antecedesDto = $antecedesDto[0];
//                        } else {
//                            $error = true;
//                            $tmp["type"] = "Error";
//                            $tmp["text"] = "NO SE GUARDO EL ANTECEDE";
//                        }
                    }
                }
                #Actualiza la informacion con el auxiliar o carpeta

                if (!$error) {
                    $updateSol = new SolicitudescateosDTO();
                    $updateSolDao = new SolicitudescateosDAO();
                    $updateSol->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                    $updateSol->setNuc($nuc);
                    $updateSol->setNumero($numeroCarpeta);
                    $updateSol->setAnio($anioCarpeta);
                    $updateSol->setCveTipoCarpeta($cveTipoCarpeta);
                    $updateSol->setCveJuzgado($juzgadoProcedencia);
                    $updateSol->setCarpetaInv($carpetaInvestigacion);
                    $updateSol->setIdReferencia($idreferencia);
                    $updateSol->setNip($nip);
                    $updateSol = $updateSolDao->updateSolicitudescateos($updateSol, $proveedor);
                    if ($updateSol != "") {
                        
                    } else {
                        $error = true;
                        $tmp["type"] = "Error";
                        $tmp["text"] = "ERROR AL ACTUALIZAR LA SOLICITUD CON LA INFORMACION DE LA CARPETA";
                    }
                }

                #TERMINAMOS TRANSACCION DE LA BASE DE DATOS Y SE CIERRA LA CONEXION
                if (!$error) {
                    $proveedor->execute("COMMIT");
                    if (($bolStatusMailJuez == true) && ($bolStatusMailAdm == true)) {
                        $tmp = array("type" => "OK",
                            "text" => "REGISTRO DE SOLICITUD DE FORMA EXITOSA Y A SU VEZ SE REMITE CORREO ELECTRONICO",
                            "idCateo" => $CateosDto->getIdCateo(),
                            "idSolicitudCateo" => $CateosDto->getIdSolicitudCateo(),
                            "numeroCateo" => $CateosDto->getNumeroCateo() . "/" . $CateosDto->getAnioCateo(),
                            "numeroCarpeta" => $param["datos"]["numero"] . "/" . $param["datos"]["anio"],
                            "numeroAuxiliar" => $param["datosA"]["numero"] . "/" . $param["datosA"]["anio"]
                        );
                    } else {
                        $tmp = array("type" => "OK",
                            "text" => "REGISTRO DE SOLICITUD DE FORMA EXITOSA" . $movimientoExtra,
                            "type" => "OK",
                            "idCateo" => $CateosDto->getIdCateo(),
                            "idSolicitudCateo" => $CateosDto->getIdSolicitudCateo(),
                            "numeroCateo" => $CateosDto->getNumeroCateo() . "/" . $CateosDto->getAnioCateo(),
                            "numeroCarpeta" => $param["datos"]["numero"] . "/" . $param["datos"]["anio"],
                            "numeroAuxiliar" => $param["datosA"]["numero"] . "/" . $param["datosA"]["anio"]
                        );
                    }
                } else {
                    $logger->w_onError("LLEGA AL FINAL CON ERROR");
                    $proveedor->execute("ROLLBACK");
                }
                $proveedor->close();
            } else {
                $tmp = array("type" => "Error", "text" => "INFORMACION INCOMPLETA: " . $mensajeErrorDatos);
            }
        } else {
            $tmp = array("type" => "Error", "text" => "INFORMACION INCOMPLETA");
        }
        return $tmp;
    }

    function extraeLlavePrivada($archivo) {
        $fp = fopen($archivo, "r");
        $privKey = fread($fp, 8192);
        fclose($fp);

        return $privKey;
    }

    function plantillaCorreo($attNom) {
        $objPlantilla = "";
        $xml = simplexml_load_file("./../../../tribunal/correo/servidorCorreo.xml");

        for ($i = 0; $i < count($xml->Correo); $i++) {
            $planNombre = $xml->Correo[$i]->attributes()->nombre;
            if ($planNombre == $attNom) {
                $objPlantilla = $xml->Correo[$i];
                break;
            }
        }
        return $objPlantilla;
    }

    function FechaLarga($fecha) {
        $anio = substr($fecha, 0, 4);
        if (substr($fecha, 5, 2) == "01") {
            $mes = "Enero";
        }
        if (substr($fecha, 5, 2) == "02") {
            $mes = "Febrero";
        }
        if (substr($fecha, 5, 2) == "03") {
            $mes = "Marzo";
        }
        if (substr($fecha, 5, 2) == "04") {
            $mes = "Abril";
        }
        if (substr($fecha, 5, 2) == "05") {
            $mes = "Mayo";
        }
        if (substr($fecha, 5, 2) == "06") {
            $mes = "Junio";
        }
        if (substr($fecha, 5, 2) == "07") {
            $mes = "Julio";
        }
        if (substr($fecha, 5, 2) == "08") {
            $mes = "Agosto";
        }
        if (substr($fecha, 5, 2) == "09") {
            $mes = "Septiembre";
        }
        if (substr($fecha, 5, 2) == "10") {
            $mes = "Octubre";
        }
        if (substr($fecha, 5, 2) == "11") {
            $mes = "Noviembre";
        }
        if (substr($fecha, 5, 2) == "12") {
            $mes = "Diciembre";
        }
        $dia = substr($fecha, 8, 2);
        $hora = substr($fecha, 11, 5);
        return $this->traducir($dia) . " de " . $mes . " de " . $this->traducir($anio); //" a las: " . $hora . " hrs."
    }

    function traducir($num) {
        $partes = explode('.', $num);
        $s = $partes[0];
        if (strlen($s) > 12)
            die('Hasta 12 d�gitos');
        $entera = $this->traduccionParcial($s);
        if (count($partes) > 1) {
            $entera = $entera . ' con ' . $partes[1];
        }
        return ucfirst($entera);
    }

    function traduccionParcial($s) {
        settype($s, 'string');
        $faltan = strlen($s) % 3;
        $cad = '';
        if ($faltan != 0)
            $faltan = 3 - $faltan;
        for ($f = 1; $f <= $faltan; $f++) {
            $cad .= '0';
        }
        $s = $cad . $s;
        if (strlen($s) <= 3 && $s[0] == 0 && $s[1] == 0 && $s[2] == 0)
            $resu = 'cero';
        else {
            $cad1 = substr($s, strlen($s) - 3, 3);
            $resu = $this->convertir($cad1);
        }
        if (strlen($s) > 3) {
            $resu2 = '';
            $cad2 = substr($s, strlen($s) - 6, 3);
            if ($cad2[0] == 0 && $cad2[1] == 0 && $cad2[2] == 1)
                $resu2 = 'mil ';
            else
            if ($cad2[0] != 0 || $cad2[1] != 0 || $cad2[2] != 0)
                $resu2 = $this->convertir($cad2, 2) . 'mil ';
            $resu = $resu2 . $resu;
        }
        if (strlen($s) > 6) {
            $resu2 = '';
            $cad3 = substr($s, strlen($s) - 9, 3);
            if ($cad3[0] == '0' && $cad3[1] == '0' && $cad3[2] == 1)
                $resu2 = 'un mill&oacute;n ';
            else
            if ($cad3[0] != 0 || $cad3[1] != 0 || $cad3[2] != 0)
                $resu2 = $this->convertir($cad3, 2) . 'millones ';
            $resu = $resu2 . $resu;
        }

        if (strlen($s) > 9) {
            $resu2 = '';
            $cad4 = substr($s, strlen($s) - 12, 3);

            if ($cad4[0] == '0' && $cad4[1] == '0' && $cad4[2] == 1) {
                if ($cad3[0] == 0 && $cad3[1] == 0 && $cad3[2] == 0)
                    $resu2 = 'mil millones ';
                else
                    $resu2 = 'mil ';
            } else
                $resu2 = $this->convertir($cad4, 2) . 'mil millones ';
            $resu = $resu2 . $resu;
        }
        return trim($resu);
    }

    function convertir($num, $ind = 1) {
        $cad = '';
        if ($num[0] == 1 && $num[1] == 0 && $num[2] == 0) {
            return 'cien ';
        }
        switch ($num[0]) {
            case 1:$cad .= 'ciento ';
                break;
            case 2:$cad .= 'doscientos ';
                break;
            case 3:$cad .= 'trescientos ';
                break;
            case 4:$cad .= 'cuatrocientos ';
                break;
            case 5:$cad .= 'quinientos ';
                break;
            case 6:$cad .= 'seiscientos ';
                break;
            case 7:$cad .= 'setecientos ';
                break;
            case 8:$cad .= 'ochocientos ';
                break;
            case 9:$cad .= 'novecientos ';
                break;
        }
        switch ($num[1]) {
            case 3:$cad .= 'treinta ';
                break;
            case 4:$cad .= 'cuarenta ';
                break;
            case 5:$cad .= 'cincuenta ';
                break;
            case 6:$cad .= 'sesenta ';
                break;
            case 7:$cad .= 'setenta ';
                break;
            case 8:$cad .= 'ochenta ';
                break;
            case 9:$cad .= 'noventa ';
                break;
        }
        if ($num[2] >= 0 && $num[1] == 1) {
            switch ($num[1] . $num[2]) {
                case 10:$cad .= 'diez ';
                    break;
                case 11:$cad .= 'once ';
                    break;
                case 12:$cad .= 'doce ';
                    break;
                case 13:$cad .= 'trece ';
                    break;
                case 14:$cad .= 'catorce ';
                    break;
                case 15:$cad .= 'quince ';
                    break;
                case 16:$cad .= 'dieciseis ';
                    break;
                case 17:$cad .= 'diecisiete ';
                    break;
                case 18:$cad .= 'dieciocho ';
                    break;
                case 19:$cad .= 'diecinueve ';
                    break;
            }
            return $cad;
        }
        if ($num[2] >= 0 && $num[1] == 2) {
            switch ($num[1] . $num[2]) {
                case 20:$cad .= 'veinte ';
                    break;
                case 21:if ($ind == 1)
                        $cad .= 'veintiuno ';
                    else
                        $cad .= 'veintiun ';break;
                case 22:$cad .= 'veintidos ';
                    break;
                case 23:$cad .= 'veintitr&eacute;s ';
                    break;
                case 24:$cad .= 'veinticuatro ';
                    break;
                case 25:$cad .= 'veinticinco ';
                    break;
                case 26:$cad .= 'veintiseis ';
                    break;
                case 27:$cad .= 'veintisiete ';
                    break;
                case 28:$cad .= 'veintiocho ';
                    break;
                case 29:$cad .= 'veintinueve ';
                    break;
            }
            return $cad;
        }
        if ($num[2] != 0 && $num[1] != 0) {
            if ($num[0] > 0 || $num[1] > 0)
                $cad .= 'y ';
        }
        if ($num[1] != 1) {
            switch ($num[2]) {
                case 1:if ($ind == 1)
                        $cad .= 'uno ';
                    else
                        $cad .= 'un ';break;
                case 2:$cad .= 'dos ';
                    break;
                case 3:$cad .= 'tres ';
                    break;
                case 4:$cad .= 'cuatro ';
                    break;
                case 5:$cad .= 'cinco ';
                    break;
                case 6:$cad .= 'seis ';
                    break;
                case 7:$cad .= 'siete ';
                    break;
                case 8:$cad .= 'ocho ';
                    break;
                case 9:$cad .= 'nueve ';
                    break;
            }
        }
        return $cad;
    }

    public function updateSolicitudescateos($SolicitudescateosDto, $proveedor = null) {
        $SolicitudescateosDto = $this->validarSolicitudescateos($SolicitudescateosDto);
        $SolicitudescateosDao = new SolicitudescateosDAO();
//$tmpDto = new SolicitudescateosDTO();
//$tmpDto = $SolicitudescateosDao->selectSolicitudescateos($SolicitudescateosDto,$proveedor);
//if($tmpDto!=""){//$SolicitudescateosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $SolicitudescateosDto = $SolicitudescateosDao->updateSolicitudescateos($SolicitudescateosDto, $proveedor);
        return $SolicitudescateosDto;
//}
//return "";
    }

    public function deleteSolicitudescateos($SolicitudescateosDto, $proveedor = null) {
        $SolicitudescateosDto = $this->validarSolicitudescateos($SolicitudescateosDto);
        $SolicitudescateosDao = new SolicitudescateosDAO();
        $SolicitudescateosDto = $SolicitudescateosDao->deleteSolicitudescateos($SolicitudescateosDto, $proveedor);
        return $SolicitudescateosDto;
    }

    public function consultaCateos($idJuzgador, $param, $proveedor = null) {
        if ($idJuzgador != 0 && $idJuzgador != "") {
            #INSTANCIAMOS DAOS
            $arrayJuzgadoresSolicitudes = "";
            $countGeneral = 0;

            $solicitudescateosDao = new SolicitudescateosDAO();
            $cateosDao = new CateosDAO();
            $objetosDao = new ObjetosDAO();
            $personasDao = new PersonasDAO();
            $juzgadoresDAO = new JuzgadoresDAO();

            $solicitudescateosDto = new SolicitudescateosDTO();
            $solicitudescateosDto->setCveEstatusSolicitudCateo("1,2");
            $cateosDto = new CateosDTO();
            $solicitudescateosDto = $solicitudescateosDao->selectSolicitudesCateosJuzgadores($solicitudescateosDto, $cateosDto, $idJuzgador, $param, "", null);

            if ($solicitudescateosDto != "" && count($solicitudescateosDto) > 0) {
                foreach ($solicitudescateosDto as $solicitudescateos) {

                    $arrayJuzgadoresSolicitudes[$countGeneral]["solicitudCateo"] = $solicitudescateos;

                    #CONSULTAMOS INFORMACION DEL CATEO
                    $cateosDto = new CateosDTO();
                    $cateosDto->setIdSolicitudCateo($solicitudescateos->getIdSolicitudCateo());
                    $cateosDto = $cateosDao->selectCateosNoSolicitud($cateosDto);
                    $arrayJuzgadoresSolicitudes[$countGeneral]["cateo"] = array();
                    if ($cateosDto != "" && count($cateosDto) > 0) {
                        $cateosDto = $cateosDto[0];
                        $arrayJuzgadoresSolicitudes[$countGeneral]["cateo"] = $cateosDto;
                    }

                    #CONSULTAMOS INFORMACION DE LOS OBJETOS
                    $objetosDTO = new ObjetosDTO();
                    $objetosDTO->setIdSolicitudCateo($solicitudescateos->getIdSolicitudCateo());
                    $objetosDTO = $objetosDao->selectObjetos($objetosDTO);
                    $arrayJuzgadoresSolicitudes[$countGeneral]["objetos"] = array();
                    if ($objetosDTO != "" && count($objetosDTO) > 0) {
                        $arrayJuzgadoresSolicitudes[$countGeneral]["objetos"] = $objetosDTO;
                    }

                    #CONSULTAMOS INFORMACION DE LAS PERSONAS
                    $personasDTO = new PersonasDTO();
                    $personasDTO->setIdSolicitudCateo($solicitudescateos->getIdSolicitudCateo());
                    $personasDTO = $personasDao->selectPersonas($personasDTO);
                    $arrayJuzgadoresSolicitudes[$countGeneral]["personas"] = array();
                    if ($personasDTO != "" && count($personasDTO) > 0) {
                        $arrayJuzgadoresSolicitudes[$countGeneral]["personas"] = $personasDTO;
                    }

                    #CONSULTAMOS INFORMACION DE EL JUEZ ASIGNADO AL CATEO
                    $juzgadoresDTO = new JuzgadoresDTO();
                    $juzgadoresDTO->setIdJuzgador($idJuzgador);
                    $juzgadoresDTO = $juzgadoresDAO->selectJuzgadores($juzgadoresDTO);
                    $arrayJuzgadoresSolicitudes[$countGeneral]["juzgador"] = array();
                    if ($juzgadoresDTO != "" && count($juzgadoresDTO) > 0) {
                        $juzgadoresDTO = $juzgadoresDTO[0];
                        $arrayJuzgadoresSolicitudes[$countGeneral]["juzgador"] = $juzgadoresDTO;
                    }
                    $countGeneral++;
                }

                if (count($arrayJuzgadoresSolicitudes) > 0) {
                    $solicitudescateosDto = new SolicitudescateosDTO();
                    $solicitudescateosDto->setCveEstatusSolicitudCateo("1,2");
                    $cateosDto = new CateosDTO();
                    $param["fields"] = " count(idCateo) as totalCount ";
                    $solicitudescateosDto = $solicitudescateosDao->selectSolicitudesCateosJuzgadores($solicitudescateosDto, $cateosDto, $idJuzgador, $param, "", null);

                    $arrayAux["data"] = $arrayJuzgadoresSolicitudes;
                    $arrayAux["total"] = (int) $solicitudescateosDto[0];
                    $pagina = array();
                    $param["fields"] = "true";
                    $paginas = $this->getPaginas($solicitudescateosDto, $param);
                    $arrayAux["paginas"] = $paginas;
                    $arrayAux["type"] = "OK";
                    return $arrayAux;
                } else {
                    return array("type" => "Error", "text" => "NO SE ENCONTRARON SOLICITUDES PARA EL JUZGADOR");
                }
            } else {
                return array("type" => "Error", "text" => "NO SE ENCONTRARON SOLICITUDES PARA EL JUZGADOR");
            }
        } else {
            return array("type" => "Error", "text" => "ERROR NO SE ESPECIFICO EL JUZGADOR");
        }
    }

    public function consultaCateosDetalle($idCateo, $proveedor = null) {
        if ($idCateo != 0 && $idCateo != "") {
            #INSTANCIAMOS DAOS
            $arrayJuzgadoresSolicitudes = "";
            $countGeneral = 0;

            $juzgadorescateosDao = new JuzgadorescateosDAO();
            $solicitudescateosDao = new SolicitudescateosDAO();
            $cateosDao = new CateosDAO();
            $objetosDao = new ObjetosDAO();
            $personasDao = new PersonasDAO();
            $imputadoscateosDao = new ImputadoscateosDAO();
            $ofendidoscateosDao = new OfendidoscateosDAO();
            $delitoscateosDao = new DelitoscateosDAO();
            $ministeriosresponsablesDao = new MinisteriosresponsablesDAO();


            $juzgadosDao = new JuzgadosDAO();
            $juzgadoresDao = new JuzgadoresDAO();

            #CONSULTAMOS INFORMACION DEL CATEO
            $cateosDto = new CateosDTO();
            $cateosDto->setIdCateo($idCateo);
            $cateosDto = $cateosDao->selectCateos($cateosDto);
            if ($cateosDto != "" && count($cateosDto) > 0) {
                $cateosDto = $cateosDto[0];
                $arrayJuzgadoresSolicitudes[$countGeneral]["cateo"] = $cateosDto;

                #OBTENEMOS LAS SOLICITUDES QUE ESTAN ASIGNADAS A UN JUEZ
                $juzgadorescateosDto = new JuzgadorescateosDTO();
                $juzgadorescateosDto->setIdSolicitudCateo($cateosDto->getIdSolicitudCateo());
                $juzgadorescateosDto = $juzgadorescateosDao->selectJuzgadorescateos($juzgadorescateosDto);
                if ($juzgadorescateosDto != "" && count($juzgadorescateosDto) > 0) {
                    foreach ($juzgadorescateosDto as $juzgadorCateo) {
                        $solicitudescateosDto = new SolicitudescateosDTO();
                        $solicitudescateosDto->setIdSolicitudCateo($juzgadorCateo->getIdSolicitudCateo());
                        $solicitudescateosDto = $solicitudescateosDao->selectSolicitudescateos($solicitudescateosDto);
                        if ($solicitudescateosDto != "" && count($solicitudescateosDto) > 0) {
                            $solicitudescateosDto = $solicitudescateosDto[0];
//                        $arrayJuzgadoresSolicitudes[$countGeneral]["solicitudCateo"] = array();
                            $arrayJuzgadoresSolicitudes[$countGeneral]["solicitudCateo"] = $solicitudescateosDto;

                            #CONSULTAMOS INFORMACION DE LOS OBJETOS
                            $objetosDTO = new ObjetosDTO();
                            $objetosDTO->setIdSolicitudCateo($solicitudescateosDto->getIdSolicitudCateo());
                            $objetosDTO = $objetosDao->selectObjetos($objetosDTO);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["objetos"] = array();
                            if ($objetosDTO != "" && count($objetosDTO) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["objetos"] = $objetosDTO;
                            }

                            #CONSULTAMOS INFORMACION DE LAS PERSONAS
                            $personasDTO = new PersonasDTO();
                            $personasDTO->setIdSolicitudCateo($solicitudescateosDto->getIdSolicitudCateo());
                            $personasDTO = $personasDao->selectPersonas($personasDTO);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["personas"] = array();
                            if ($personasDTO != "" && count($personasDTO) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["personas"] = $personasDTO;
                            }

                            #CONSULTAMOS INFORMACION DE LOS IMPUTADOS
                            $imputadoscateosDto = new ImputadoscateosDTO();
                            $imputadoscateosDto->setIdSolicitudCateo($solicitudescateosDto->getIdSolicitudCateo());
                            $imputadoscateosDto = $imputadoscateosDao->selectImputadoscateos($imputadoscateosDto);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["imputados"] = array();
                            if ($imputadoscateosDto != "" && count($imputadoscateosDto) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["imputados"] = $imputadoscateosDto;
                            }

                            #CONSULTAMOS INFORMACION DE LOS OFENDIDOS
                            $ofendidoscateosDto = new OfendidoscateosDTO();
                            $ofendidoscateosDto->setIdSolicitudCateo($solicitudescateosDto->getIdSolicitudCateo());
                            $ofendidoscateosDto = $ofendidoscateosDao->selectOfendidoscateos($ofendidoscateosDto);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["ofendidos"] = array();
                            if ($ofendidoscateosDto != "" && count($ofendidoscateosDto) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["ofendidos"] = $ofendidoscateosDto;
                            }

                            #CONSULTAMOS INFORMACION DE LOS DELITOS
                            $delitoscateosDto = new DelitoscateosDTO();
                            $delitoscateosDto->setIdSolicitudCateo($solicitudescateosDto->getIdSolicitudCateo());
                            $delitoscateosDto = $delitoscateosDao->selectDelitoscateos($delitoscateosDto);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["delitos"] = array();
                            if ($delitoscateosDto != "" && count($delitoscateosDto) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["delitos"] = $delitoscateosDto;
                            }

                            #CONSULTAMOS INFORMACION DE MINISTERIOS PUBLICOS
                            $ministeriosresponsablesDto = new MinisteriosresponsablesDTO();
                            $ministeriosresponsablesDto->setIdSolicitudCateo($solicitudescateosDto->getIdSolicitudCateo());
                            $ministeriosresponsablesDto = $ministeriosresponsablesDao->selectMinisteriosresponsables($ministeriosresponsablesDto);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["ministeriosPublicos"] = array();
                            if ($ministeriosresponsablesDto != "" && count($ministeriosresponsablesDto) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["ministeriosPublicos"] = $ministeriosresponsablesDto;
                            }

                            #CONSULTAMOS INFORMACION DE EL JUEZ ASIGNADO AL CATEO
                            $juzgadoresDTO = new JuzgadoresDTO();
                            $juzgadoresDTO->setIdJuzgador($juzgadorCateo->getIdJuzgador());
                            $juzgadoresDTO = $juzgadoresDao->selectJuzgadores($juzgadoresDTO);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["juzgador"] = array();
                            if ($juzgadoresDTO != "" && count($juzgadoresDTO) > 0) {
                                $juzgadoresDTO = $juzgadoresDTO[0];
                                $arrayJuzgadoresSolicitudes[$countGeneral]["juzgador"] = $juzgadoresDTO;
                            }

                            #CONSULTAMOS INFORMACION DE LOS OBJETOS DE LA RESPUESTA
                            $RespobjetosDTO = new ObjetosDTO();
                            $RespobjetosDTO->setIdSolicitudCateo($solicitudescateosDto->getIdSolicitudCateo());
                            $RespobjetosDTO->setCveOrigen(2);
                            $RespobjetosDTO = $objetosDao->selectObjetos($RespobjetosDTO);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["objetosRespuesta"] = array();
                            if ($RespobjetosDTO != "" && count($RespobjetosDTO) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["objetosRespuesta"] = $RespobjetosDTO;
                            }

                            #CONSULTAMOS INFORMACION DE LAS PERSONAS DE LA RESPUESTA
                            $ResppersonasDTO = new PersonasDTO();
                            $ResppersonasDTO->setIdSolicitudCateo($solicitudescateosDto->getIdSolicitudCateo());
                            $ResppersonasDTO->setCveOrigen(2);
                            $ResppersonasDTO = $personasDao->selectPersonas($ResppersonasDTO);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["personasRespuesta"] = array();
                            if ($ResppersonasDTO != "" && count($ResppersonasDTO) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["personasRespuesta"] = $ResppersonasDTO;
                            }

                            #Obtenemos las Apelaciones
                            $ApelacionesDto = new ApelacioncateosDTO();
                            $ApelacionesDao = new ApelacioncateosDAO();

                            $ApelacionesDto->setIdCateo($cateosDto->getIdCateo());
                            $ApelacionesDto = $ApelacionesDao->selectApelacioncateos($ApelacionesDto);
                            if ($ApelacionesDto != "") {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["apelacion"] = $ApelacionesDto[0];
                            }

                            $countGeneral++;
                            break;
                        }
                    }
                    if (count($arrayJuzgadoresSolicitudes) > 0) {
                        $arrayAux["data"] = $arrayJuzgadoresSolicitudes;
                        $arrayAux["type"] = "OK";
                        return $arrayAux;
                    } else {
                        return array("type" => "Error", "text" => "NO SE ENCONTRARON SOLICITUDES PARA EL JUZGADOR");
                    }
                } else {
                    return array("type" => "Error", "text" => "NO SE ENCONTRARON SOLICITUDES PARA EL JUZGADOR");
                }
            } else {
                return array("type" => "Error", "text" => "NO SE ENCONTRO EL CATEO");
            }
        } else {
            return array("type" => "Error", "text" => "ERROR NO SE ESPECIFICO EL JUZGADOR");
        }
    }

    public function consultaDetalleCateos($SolicitudescateosDto, $proveedor = null) {
        $SolicitudescateosDto = $this->validarSolicitudescateos($SolicitudescateosDto);
        $SolicitudescateosDao = new SolicitudescateosDAO();
        $resultado = $SolicitudescateosDao->consultaDetalleCateos($SolicitudescateosDto, $proveedor);
        return $resultado;
    }

    public function actualizaJuzgadorCateo($idJuzgador = "", $idCateo = "", $proveedor = null) {
        $errorDatos = false;
        $mensajeErrorDatos = false;
        $bolStatusMailJuezAnterior = false;
        $bolStatusMailJuez = false;
        $bolStatusMailAdm = false;

        if (($idJuzgador == "") || ($idJuzgador == "0")) {
            $errorDatos = true;
            $mensajeErrorDatos .= " JUZGADOR NO VALIDO \n";
        }

        if (($idCateo == "") || ($idCateo == "0")) {
            $errorDatos = true;
            $mensajeErrorDatos .= " CATEO NO VALIDO \n";
        }

        if (!$errorDatos) {
            $error = false;

            #CONSULTAMOS INFORMACION DEL CATEO
            $cateosDao = new CateosDAO();
            $cateosDto = new CateosDTO();
            $cateosDto->setIdCateo($idCateo);
            $cateosDto = $cateosDao->selectCateos($cateosDto);
            if ($cateosDto != "" && count($cateosDto) > 0) {
                $cateosDto = $cateosDto[0];

                #CONSULTAMOS INFORMACION DE LA SOLICITUD
                $solicitudescateosDao = new SolicitudescateosDAO();
                $solicitudescateosDto = new SolicitudescateosDTO();
                $solicitudescateosDto->setIdSolicitudCateo($cateosDto->getIdSolicitudCateo());
                $solicitudescateosDto = $solicitudescateosDao->selectSolicitudescateos($solicitudescateosDto);
                if ($solicitudescateosDto != "" && count($solicitudescateosDto) > 0) {
                    $solicitudescateosDto = $solicitudescateosDto[0];

                    if ($solicitudescateosDto->getCveEstatusSolicitudCateo() == "3") {
                        return array("type" => "Error", "text" => "EL CATEO YA SE ENCUENTRA CONTESTADO");
                    }
                    if ($solicitudescateosDto->getCveEstatusSolicitudCateo() == "4") {
                        return array("type" => "Error", "text" => "EL CATEO SE ENCUENTRA CANCELADO");
                    }

                    #OBTENEMOS LAS SOLICITUDES QUE ESTAN ASIGNADAS A UN JUEZ
                    $juzgadorescateosDto = new JuzgadorescateosDTO();
                    $juzgadorescateosDao = new JuzgadorescateosDAO();
                    $juzgadorescateosDto->setIdSolicitudCateo($cateosDto->getIdSolicitudCateo());
                    $juzgadorescateosDto = $juzgadorescateosDao->selectJuzgadorescateos($juzgadorescateosDto, "", "", null);
                    if ($juzgadorescateosDto != "" && count($juzgadorescateosDto) > 0) {
                        $juzgadorescateosDto = $juzgadorescateosDto[0];

                        $juezAnterior = $juzgadorescateosDto->getIdJuzgador();
                        $errorUpdate = false;
                        $mensajeErrorUpdate = "";

                        #INICIAMOS TRANSACCION DE LA BASE DE DATOS
                        $proveedor = new Proveedor('mysql', 'sigejupe');
                        $proveedor->connect();
                        $proveedor->execute("BEGIN");

                        #SI ENCUENTRA TODA LA INFORMACION, SE ACTUALIZARA LA INFORMACION DEL JUEZ
                        $juzgadorescateosUpdateDto = new JuzgadorescateosDTO();
                        $juzgadorescateosDao = new JuzgadorescateosDAO();
                        $juzgadorescateosUpdateDto->setIdJuzgador($idJuzgador);
                        $juzgadorescateosUpdateDto->setIdJuzgadorCateo($juzgadorescateosDto->getIdJuzgadorCateo());
                        $juzgadorescateosUpdateDto = $juzgadorescateosDao->updateJuzgadorescateos($juzgadorescateosUpdateDto);
                        if ($juzgadorescateosUpdateDto != "" && count($juzgadorescateosUpdateDto) > 0) {
                            $juzgadorescateosUpdateDto = $juzgadorescateosUpdateDto[0];
                        } else {
                            $errorUpdate = true;
                            $mensajeErrorUpdate = " ERROR AL ACTUALIZAR LA INFORMACION DE EL JUZGADOR CATEO ";
                        }

                        #OBTENEMOS INFORMACI�N DEL JUZGADO A SOLICITAR 
                        if (!$errorUpdate) {
                            $JuzgadosDao = new JuzgadosDAO();
                            $JuzgadosDto = new JuzgadosDTO();
                            $JuzgadosDto->setCveJuzgado($solicitudescateosDto->getCveJuzgadoDesahoga()); #Id del juzgado a solicitar
                            $JuzgadosDto->setActivo("S");
                            $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, "", $proveedor);
                            if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                                $JuzgadosDto = $JuzgadosDto[0];
                                #OBTENEMOS INFORMACION DEL ADMINISTRADOR DEL JUZGADO
                                $file = dirname(__FILE__) . "/../../../archivos/actadminjuzgados" . $JuzgadosDto->getCveJuzgado() . ".json";
                                $adminJuzgados = json_decode(file_get_contents($file), true);
                            } else {
                                $errorUpdate = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO A SOLICITAR");
                            }
                        }

                        #OBTENEMOS INFORMACION DEL JUZGADOR ORIGINAL Y NITIFICAMOS EN EL CHAT QUE SE REALIZO UN CAMBIO DE JUZGADOR
                        if (!$errorUpdate) {
                            #$juezAnterior = ANTERIOR
                            $juzgadorAnteriorDto = new JuzgadoresDTO();
                            $juzgadorDao = new JuzgadoresDAO();
                            $juzgadorAnteriorDto->setIdJuzgador($juezAnterior);
                            $juzgadorAnteriorDto = $juzgadorDao->selectJuzgadores($juzgadorAnteriorDto);
                            if ($juzgadorAnteriorDto != "") {
                                $juzgadorAnteriorDto = $juzgadorAnteriorDto[0];
                                #INSERTAMOS REGISTRO A CHAT
                                $numeroAnioCateo = md5($cateosDto->getIdCateo() . "-1");
                                $chatMessageDto = new ChatMessagesDTO(); //NOTIFICACION DE CAMBIO DE JUEZ
                                $chatMessagesDao = new ChatMessagesDAO();
                                $chatMessageDto->setChatId($numeroAnioCateo);
                                $chatMessageDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                                $chatMessageDto->setMensaje("SE REALIZO CAMBIO DEL JUEZ:" . $juzgadorAnteriorDto->getTitulo() . " " . $juzgadorAnteriorDto->getNombre() . "  " . $juzgadorAnteriorDto->getPaterno() . " " . $juzgadorAnteriorDto->getMaterno() . " DEL CATEO: " . $cateosDto->getNumeroCateo() . "/" . $cateosDto->getAnioCateo());
                                $chatMessageDto->setCveUsuario($juzgadorAnteriorDto->getCveUsuario());
                                $chatMessageDto->setNombreUsuario($juzgadorAnteriorDto->getTitulo() . " " . $juzgadorAnteriorDto->getNombre() . "  " . $juzgadorAnteriorDto->getPaterno());
                                $chatMessageDto->setCveNumero($cateosDto->getIdCateo());
                                $chatMessageDto->setTipoChat("1"); # tipo chat 1 = cateo
                                $chatMessageDto = $chatMessagesDao->insertChatMessages($chatMessageDto, $proveedor);
                                if ($chatMessageDto != "" && count($chatMessageDto) > 0) {
                                    $chatMessageDto = $chatMessageDto[0];
                                } else {
                                    $errorUpdate = true;
                                    $tmp = array("type" => "Error", "text" => "ERROR AL AGREGAR ULTIMO MENSAJE DEL JUEZ ORIGINAL A LA SALA DE CHAT DEL CATEO");
                                }
                            } else {
                                $errorUpdate = true;
                                $mensajeErrorUpdate = "ERROR AL OBTENER INFORMACION DEL JUEZ ORIGINAL";
                            }
                        }
                        #OBTENEMOS INFORMACION DEL JUZGADOR NUEVO Y NITIFICAMOS EN EL CHAT QUE SE REALIZO UN CAMBIO DE JUZGADOR
                        if (!$errorUpdate) {
                            #$idJuzgador = NUEVO
                            $juzgadorNuevoDto = new JuzgadoresDTO();
                            $juzgadorDao = new JuzgadoresDAO();
                            $juzgadorNuevoDto->setIdJuzgador($idJuzgador);
                            $juzgadorNuevoDto = $juzgadorDao->selectJuzgadores($juzgadorNuevoDto);
                            if ($juzgadorNuevoDto != "") {
                                $juzgadorNuevoDto = $juzgadorNuevoDto[0];
                                #INSERTAMOS REGISTRO A CHAT
                                $numeroAnioCateo = md5($cateosDto->getIdCateo() . "-1");
                                $chatMessageDto = new ChatMessagesDTO(); //INVITACI�N A NUEVO JUEZ
                                $chatMessagesDao = new ChatMessagesDAO();
                                $chatMessageDto->setChatId($numeroAnioCateo);
                                $chatMessageDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                                $chatMessageDto->setMensaje("SE AGREGO A JUEZ:" . $juzgadorNuevoDto->getTitulo() . " " . $juzgadorNuevoDto->getNombre() . "  " . $juzgadorNuevoDto->getPaterno() . " " . $juzgadorNuevoDto->getMaterno() . "AL CHAT DEL CATEO: " . $cateosDto->getNumeroCateo() . "/" . $cateosDto->getAnioCateo());
                                $chatMessageDto->setCveUsuario($juzgadorNuevoDto->getCveUsuario());
                                $chatMessageDto->setNombreUsuario($juzgadorNuevoDto->getTitulo() . " " . $juzgadorNuevoDto->getNombre() . "  " . $juzgadorNuevoDto->getPaterno() . " " . $juzgadorNuevoDto->getMaterno());
                                $chatMessageDto->setCveNumero($cateosDto->getIdCateo());
                                $chatMessageDto->setTipoChat("1"); # tipo chat 1 = cateo
                                $chatMessageDto = $chatMessagesDao->insertChatMessages($chatMessageDto, $proveedor);
                                if ($chatMessageDto != "" && count($chatMessageDto) > 0) {
                                    $chatMessageDto = $chatMessageDto[0];
                                } else {
                                    $errorUpdate = true;
                                    $tmp = array("type" => "Error", "text" => "ERROR AL AGREGAR AL NUEVO JUEZ A LA SALA DE CHAT DEL CATEO");
                                }
                            } else {
                                $errorUpdate = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUEZ NUEVO");
                            }
                        }
                        #CAMBIAMOS LA CLAVE DEL JUZGADOR VIEJO POR PA DEL JUZGADOR NUEVO PARA QUE EL VIEJO YA NO VEA EL CHAT 
                        if (!$errorUpdate) {
                            $juzgadorAnterior = $juzgadorAnteriorDto->getCveUsuario();
                            $juzgadorNuevo = $juzgadorNuevoDto->getCveUsuario();
                            $numeroAnioCateo = md5($cateosDto->getIdCateo() . "-1");
                            $chatMessagesDao = new ChatMessagesDAO();
                            $chatMessageDto = $chatMessagesDao->updateChatmessagesJuzgadores($juzgadorAnterior, $juzgadorNuevo, $numeroAnioCateo, $proveedor);
                            if ($chatMessageDto != "" && count($chatMessageDto) > 0) {
                                $chatMessageDto = $chatMessageDto[0];
                            } else {
                                $errorUpdate = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL ACTUALIZARLA CLAVE DEL NUEVO JUEZ EN LA SALA DE CHAT DEL CATEO");
                            }
                        }

                        #OBTENEMOS LOS MEDIOS DE CONTACTO DEL JUEZ
                        $mediosDao = new TelefonosjuzgadoresDAO();
                        if (!$errorUpdate) {
                            $mediosnuevoJuez = new TelefonosjuzgadoresDTO();
                            $mediosnuevoJuez->setActivo("S");
                            $mediosnuevoJuez->setIdJuzgador($juzgadorNuevoDto->getIdJuzgador());
                            $mediosnuevoJuez = $mediosDao->selectTelefonosjuzgadores($mediosnuevoJuez);
                            $mailsnuevoJuez = array();
                            if ($mediosnuevoJuez != "") {
                                foreach ($mediosnuevoJuez as $medionvojuez) {
                                    if ($medionvojuez->getEmail() != "") {
                                        $mailsnuevoJuez[] = $medionvojuez->getEmail();
                                    }
                                }
                            } else {
                                $errorUpdate = true;
                                $mensajeErrorUpdate = "ERROR NO SE ENCONTRARON DATOS DE NOTIFICACION DEL NUEVO JUEZ";
                                $tmp = array("type" => "Error", "text" => "ERROR NO SE ENCONTRARON DATOS DE NOTIFICACION DEL NUEVO JUEZ");
                            }
                        }

                        #PROCESO PARA ENVIAR CORREO ELECTRONICO AL NUEVO JUEZ
                        if (!$errorUpdate) {
                            $fechaCateo = $cateosDto->getFechaRegistro();
                            $horaCateo = explode(' ', $fechaCateo);
                            $horaCateo = $horaCateo[1];

                            if ($mailsnuevoJuez != "") {
                                $objDatCorreo = $this->plantillaCorreo("cateos");
                                foreach ($mailsnuevoJuez as $emailnvoJuez) {
                                    if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                                        $emailJuez = $emailnvoJuez;
                                        $nombrenvoJuez = $juzgadorNuevoDto->getNombre() . " " . $juzgadorNuevoDto->getPaterno() . " " . $juzgadorNuevoDto->getMaterno();
                                        $xNombre = utf8_encode($nombrenvoJuez);
                                        if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                                            $correoJuez = new EmailHELPER();
                                            $correoJuez->setSenderAddress($objDatCorreo->CorreoRemite);
                                            $correoJuez->setToAddress(trim($emailJuez));
                                            $correoJuez->setToName("Solicitud de Cateo - SUSTITUTO");
                                            $correoJuez->setSubject($objDatCorreo->Subject);
                                            $correoJuez->setHostSmtp($objDatCorreo->IpSMTP);
                                            $correoJuez->setPortSmtp($objDatCorreo->PortSMTP);
                                            #AUTENTICACION
                                            $correoJuez->setAuth($objDatCorreo->aut);
                                            $correoJuez->setSmtpSecure($objDatCorreo->typeAut);
                                            $correoJuez->setLoginUser($objDatCorreo->login);
                                            $correoJuez->setLoginPass($objDatCorreo->password);
                                            #AUTENTICACION
                                            $correoJuez->setIsHTMLFormat(true);
                                            $strCuerpoEmailJuez = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                            $strCuerpoEmailJuez = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaCateo . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaCateo) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),
                                           se realiz&oacute; el cambio de juzgador del <b>" . $JuzgadosDto->getDesJuzgado() . "</b> de la solicitud de cateo n&uacute;mero <b>" . str_pad($cateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $cateosDto->getAnioCateo() . "</b>, 
                                           la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                                            $strCuerpoEmailJuez .= "</body>\n</html>\n\n";
                                            $correoJuez->setBody($strCuerpoEmailJuez);
                                            $intentos = 1;
                                            $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                            while ($intentos <= 5) {
                                                $bolStatusMailJuez = $correoJuez->send();
                                                $cveEstatusNotificacion = "1";
                                                $movimiento = "";
                                                if ($bolStatusMailJuez == true) {
                                                    $cveEstatusNotificacion = "2";
                                                    $movimiento = "SE LOGRO ENVIAR CORREO ELECTRONICO";
                                                } else {
                                                    $cveEstatusNotificacion = "3";
                                                    $movimiento = "NO SE LOGRO ENVIAR CORREO ELECTRONICO";
                                                }
                                                $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                                $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                                $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                                $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                                $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                                $BitacoranotificacionesDto->setIdReferencia($cateosDto->getIdCateo()); #ID DEL CATEO
                                                $BitacoranotificacionesDto->setNumero($cateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                                $BitacoranotificacionesDto->setAnio($cateosDto->getAnioCateo()); #A�O DEL CATEO
                                                $BitacoranotificacionesDto->setCvejuzgado($solicitudescateosDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                                $BitacoranotificacionesDto->setCveUsuario($juzgadorNuevoDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                                $BitacoranotificacionesDto->setMedio($emailJuez);
                                                $BitacoranotificacionesDto->setMovimiento($movimiento);
                                                $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                                if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
//                                                    print_r($BitacoranotificacionesDto);
//                                                    echo "<br><br>";
                                                } else {
                                                    $errorUpdate = true;
                                                    $mensajeErrorUpdate = "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ";
                                                    $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ");
                                                }

                                                #SI EL ENVIO DE CORREO FUE EXITOSO CORTA EL CICLO
                                                if ($bolStatusMailJuez == true) {
                                                    break;
                                                }

                                                $intentos = $intentos + 1;
                                            }
                                        } else {
                                            $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                            $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                            $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                            $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                            $BitacoranotificacionesDto->setIdReferencia($cateosDto->getIdCateo()); #ID DEL CATEO
                                            $BitacoranotificacionesDto->setNumero($cateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                            $BitacoranotificacionesDto->setAnio($cateosDto->getAnioCateo()); #A�O DEL CATEO
                                            $BitacoranotificacionesDto->setCvejuzgado($solicitudescateosDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                            $BitacoranotificacionesDto->setCveUsuario($juzgadorNuevoDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                            $BitacoranotificacionesDto->setMedio($emailJuez);
                                            $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO");
                                            $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                            if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
//                                                print_r($BitacoranotificacionesDto);
//                                                echo "<br><br>";
                                            } else {
                                                $errorUpdate = true;
                                                $mensajeErrorUpdate = "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ";
                                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ");
                                            }
                                        }
                                    } else {
                                        $mensageCorreos = "ERROR AL OBTENER CONFIGURACION DE CORREOS";
                                        $mensajeErrorUpdate = "ERROR AL OBTENER CONFIGURACION DE CORREOS";
                                    }
                                }
                            } else {
                                $errorUpdate = true;
                                $mensajeErrorUpdate = "NO SE ENCONTRARON MEDIOS DE COMUNICACION DEL NUEVO JUEZ";
                            }
                        }

                        #PROCESO PARA ENVIAR CORREO ELECTRONICO AL ADMINISTRADOR DEL JUZGADO
                        if (!$errorUpdate) {
                            if ($adminJuzgados != "") {
                                if (isset($adminJuzgados["type"]) == "OK") {
                                    $objDatCorreo = $this->plantillaCorreo("cateos");
                                    foreach ($adminJuzgados["usuarios"] as $usuarios) {
                                        if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                                            $emailAdministrador = $usuarios["email"];
                                            $xNombre = strtoupper(utf8_decode($usuarios["Nombre"] . " " . $usuarios["Paterno"] . " " . $usuarios["Materno"]));
                                            if ((trim($emailAdministrador) != "") && (strlen($emailAdministrador) > 1)) {
                                                $correoAdministrador = new EmailHELPER();
                                                $correoAdministrador->setSenderAddress($objDatCorreo->CorreoRemite);
                                                $correoAdministrador->setToAddress(trim($emailAdministrador));
                                                $correoAdministrador->setToName("Solicitud de Cateo - ADMINISTRADOR");
                                                $correoAdministrador->setSubject($objDatCorreo->Subject);
                                                $correoAdministrador->setHostSmtp($objDatCorreo->IpSMTP);
                                                $correoAdministrador->setPortSmtp($objDatCorreo->PortSMTP);
                                                #AUTENTICACION
                                                $correoAdministrador->setAuth($objDatCorreo->aut);
                                                $correoAdministrador->setSmtpSecure($objDatCorreo->typeAut);
                                                $correoAdministrador->setLoginUser($objDatCorreo->login);
                                                $correoAdministrador->setLoginPass($objDatCorreo->password);
                                                #AUTENTICACION
                                                $correoAdministrador->setIsHTMLFormat(true);
                                                $strCuerpoEmailAdm = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                                $strCuerpoEmailAdm = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaCateo . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaCateo) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),
                                                        se realiz&oacute; el cambio de juzgador del <b>" . $JuzgadosDto->getDesJuzgado() . "</b> de la solicitud de cateo n&uacute;mero <b>" . str_pad($cateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $cateosDto->getAnioCateo() . "</b>, 
                                                        la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                                                $strCuerpoEmailAdm .= "</body>\n</html>\n\n";
                                                $correoAdministrador->setBody($strCuerpoEmailAdm);
                                                $intentos = 1;
                                                $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                                while ($intentos <= 5) {
                                                    $bolStatusMailAdm = $correoAdministrador->send();
                                                    $cveEstatusNotificacion = "1";
                                                    $movimiento = "";
                                                    if ($bolStatusMailAdm == true) {
                                                        $cveEstatusNotificacion = "2";
                                                        $movimiento = "SE LOGRO ENVIAR CORREO ELECTRONICO";
                                                    } else {
                                                        $cveEstatusNotificacion = "3";
                                                        $movimiento = "NO SE LOGRO ENVIAR CORREO ELECTRONICO";
                                                    }
                                                    $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                                    $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                                    $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                                    $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                                    $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                                    $BitacoranotificacionesDto->setIdReferencia($cateosDto->getIdCateo()); #ID DEL CATEO
                                                    $BitacoranotificacionesDto->setNumero($cateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                                    $BitacoranotificacionesDto->setAnio($cateosDto->getAnioCateo()); #A�O DEL CATEO
                                                    $BitacoranotificacionesDto->setCvejuzgado($solicitudescateosDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                                    $BitacoranotificacionesDto->setCveUsuario($usuarios["CveUsuario"]); #Id de el usuario al que se le envio el correo
                                                    $BitacoranotificacionesDto->setMedio($emailAdministrador);
                                                    $BitacoranotificacionesDto->setMovimiento($movimiento);
                                                    $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                                    if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
//                                    print_r($BitacoranotificacionesDto);
//                                    echo "<br><br>";
                                                    } else {
                                                        $errorUpdate = true;
                                                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO ADMINISTRADOR");
                                                    }

                                                    #SI EL ENVIO DE CORREO FUE EXITOSO CORTA EL CICLO
                                                    if ($bolStatusMailAdm == true) {
                                                        break;
                                                    }

                                                    $intentos = $intentos + 1;
                                                }
                                            } else {
                                                $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                                $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                                $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                                $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                                $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                                $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                                $BitacoranotificacionesDto->setIdReferencia($cateosDto->getIdCateo()); #ID DEL CATEO
                                                $BitacoranotificacionesDto->setNumero($cateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                                $BitacoranotificacionesDto->setAnio($cateosDto->getAnioCateo()); #A�O DEL CATEO
                                                $BitacoranotificacionesDto->setCvejuzgado($solicitudescateosDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                                $BitacoranotificacionesDto->setCveUsuario($usuarios["CveUsuario"]); #Id de el usuario al que se le envio el correo
                                                $BitacoranotificacionesDto->setMedio($emailAdministrador);
                                                $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO");
                                                $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                                if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
//                                print_r($BitacoranotificacionesDto);
//                                echo "<br><br>";
                                                } else {
                                                    $errorUpdate = true;
                                                    $mensajeErrorUpdate = "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ";
                                                    $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ");
                                                }
                                            }
                                        } else {
                                            $mensajeErrorUpdate = "ERROR AL OBTENER CONFIGURACION DE CORREOS";
                                            $mensageCorreos = "ERROR AL OBTENER CONFIGURACION DE CORREOS";
                                        }
                                    }
                                }
                            }
                        }

                        #OBTENEMOS LOS MEDIOS DE NOTFICACION DEL JUEZ ANTERIOR
                        if (!$errorUpdate) {
                            $mediosantJuez = new TelefonosjuzgadoresDTO();
                            $mediosantJuez->setActivo("S");
                            $mediosantJuez->setIdJuzgador($juzgadorAnteriorDto->getIdJuzgador());
                            $mediosantJuez = $mediosDao->selectTelefonosjuzgadores($mediosantJuez);
                            $mailsantJuez = array();
                            if ($mediosantJuez != "") {
                                foreach ($mediosantJuez as $medioantjuez) {
                                    if ($medioantjuez->getEmail() != "") {
                                        $mailsantJuez[] = $medioantjuez->getEmail();
                                    }
                                }
                            } else {
                                $errorUpdate = true;
                                $tmp = array("type" => "Error", "text" => "ERROR NO SE ENCONTRARON DATOS DE NOTIFICACION DEL JUEZ ANTERIOR");
                                $mensajeErrorUpdate = "ERROR NO SE ENCONTRARON DATOS DE NOTIFICACION DEL JUEZ ANTERIOR";
                            }
                        }

                        #PROCESO PARA ENVIAR CORREO ELECTRONICO AL JUEZ ANTERIOR
                        if (!$errorUpdate) {
                            if ($mailsantJuez != "") {
                                $objDatCorreo = $this->plantillaCorreo("cateos");
                                foreach ($mailsantJuez as $mailantJuez) {
                                    if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                                        $emailJuezAnterior = $mailantJuez;
                                        $nombreAnt = $juzgadorAnteriorDto->getNombre() . " " . $juzgadorAnteriorDto->getPaterno() . " " . $juzgadorAnteriorDto->getMaterno();
                                        $xNombre = strtoupper(utf8_encode($nombreAnt));
                                        if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                                            $correoJuezAnterior = new EmailHELPER();
                                            $correoJuezAnterior->setSenderAddress($objDatCorreo->CorreoRemite);
                                            $correoJuezAnterior->setToAddress(trim($emailJuez));
                                            $correoJuezAnterior->setToName("Solicitud de Cateo - REMPLAZO");
                                            $correoJuezAnterior->setSubject($objDatCorreo->Subject);
                                            $correoJuezAnterior->setHostSmtp($objDatCorreo->IpSMTP);
                                            $correoJuezAnterior->setPortSmtp($objDatCorreo->PortSMTP);
                                            #AUTENTICACION
                                            $correoJuezAnterior->setAuth($objDatCorreo->aut);
                                            $correoJuezAnterior->setSmtpSecure($objDatCorreo->typeAut);
                                            $correoJuezAnterior->setLoginUser($objDatCorreo->login);
                                            $correoJuezAnterior->setLoginPass($objDatCorreo->password);
                                            #AUTENTICACION
                                            $correoJuezAnterior->setIsHTMLFormat(true);
                                            $strCuerpoEmailJuez = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                            $strCuerpoEmailJuez = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaCateo . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaCateo) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),
                                           se realiz&oacute; el cambio de juzgador del <b>" . $JuzgadosDto->getDesJuzgado() . "</b> de la solicitud de cateo n&uacute;mero <b>" . str_pad($cateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $cateosDto->getAnioCateo() . "</b>, 
                                           la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                                            $strCuerpoEmailJuez .= "</body>\n</html>\n\n";
                                            $correoJuezAnterior->setBody($strCuerpoEmailJuez);
                                            $intentos = 1;
                                            $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                            while ($intentos <= 5) {
                                                $bolStatusMailJuezAnterior = $correoJuezAnterior->send();
                                                $cveEstatusNotificacion = "1";
                                                $movimiento = "";
                                                if ($bolStatusMailJuezAnterior == true) {
                                                    $cveEstatusNotificacion = "2";
                                                    $movimiento = "SE LOGRO ENVIAR CORREO ELECTRONICO";
                                                } else {
                                                    $cveEstatusNotificacion = "3";
                                                    $movimiento = "NO SE LOGRO ENVIAR CORREO ELECTRONICO";
                                                }
                                                $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                                $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                                $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                                $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                                $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                                $BitacoranotificacionesDto->setIdReferencia($cateosDto->getIdCateo()); #ID DEL CATEO
                                                $BitacoranotificacionesDto->setNumero($cateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                                $BitacoranotificacionesDto->setAnio($cateosDto->getAnioCateo()); #A�O DEL CATEO
                                                $BitacoranotificacionesDto->setCvejuzgado($solicitudescateosDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                                $BitacoranotificacionesDto->setCveUsuario($juzgadorAnteriorDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                                $BitacoranotificacionesDto->setMedio($emailJuezAnterior);
                                                $BitacoranotificacionesDto->setMovimiento($movimiento);
                                                $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                                if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
//                                                    print_r($BitacoranotificacionesDto);
//                                                    echo "<br><br>";
                                                } else {
                                                    $errorUpdate = true;
                                                    $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ ANTERIOR");
                                                }

                                                #SI EL ENVIO DE CORREO FUE EXITOSO CORTA EL CICLO
                                                if ($bolStatusMailJuezAnterior == true) {
                                                    break;
                                                }

                                                $intentos = $intentos + 1;
                                            }
                                        } else {
                                            $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                            $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                            $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                            $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                            $BitacoranotificacionesDto->setIdReferencia($cateosDto->getIdCateo()); #ID DEL CATEO
                                            $BitacoranotificacionesDto->setNumero($cateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                            $BitacoranotificacionesDto->setAnio($cateosDto->getAnioCateo()); #A�O DEL CATEO
                                            $BitacoranotificacionesDto->setCvejuzgado($solicitudescateosDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                            $BitacoranotificacionesDto->setCveUsuario($juzgadorAnteriorDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                            $BitacoranotificacionesDto->setMedio($emailJuezAnterior);
                                            $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO");
                                            $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                            if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
//                                                print_r($BitacoranotificacionesDto);
//                                                echo "<br><br>";
                                            } else {
                                                $errorUpdate = true;
                                                $mensajeErrorUpdate = "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ";
                                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ");
                                            }
                                        }
                                    }
                                }
                            } else {
                                $errorUpdate = true;
                                $mensajeErrorUpdate = "NO SE ENCONTRARON MEDIOS DE COMUNICACION DEL JUEZ ANTERIOR";
                            }
                        }

                        ##GUARDAMOS EN BITACORA EL REGISTRO DEL CATEO
                        if (!$errorUpdate) {
                            $BitacoramovimientosDao = new BitacoramovimientosDAO();
                            $BitacoramovimientosDto = new BitacoramovimientosDTO();
                            $BitacoramovimientosDto->setCveAccion("75"); #75 - CAMBIA JUEZ CATEO
                            $BitacoramovimientosDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
                            $BitacoramovimientosDto->setCvePerfil($cateosDto->getIdCateo()); #ID DEL CATEO
                            $BitacoramovimientosDto->setCveAdscripcion($solicitudescateosDto->getCveJuzgadoDesahoga());
                            if (($bolStatusMailJuezAnterior == true) && ($bolStatusMailJuez == true) && ($bolStatusMailAdm == true)) {
                                $BitacoramovimientosDto->setObservaciones("MODIFICO JUEZ DE LA SOLICITUD DE CATEO: JUEZ ANTERIOR: " . $juezAnterior . " JUEZ NUEVO: " . $idJuzgador);
                            } else {
                                $observaciones = "MODIFICO JUEZ DE LA SOLICITUD DE CATEO: JUEZ ANTERIOR: " . $juezAnterior . " JUEZ NUEVO: " . $idJuzgador;
                                $observaciones .= ($bolStatusMailJuezAnterior == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                                $observaciones .= $emailJuezAnterior;
                                $observaciones .= ($bolStatusMailJuez == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                                $observaciones .= $emailJuez;
                                $observaciones .= ($bolStatusMailAdm == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                                $observaciones .= $emailAdministrador;
                                $BitacoramovimientosDto->setObservaciones($observaciones);
                            }
                            $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                            if ($BitacoramovimientosDto != "" && count($BitacoramovimientosDto) > 0) {
                                
                            } else {
                                $error = true;
                                $mensajeErrorUpdate = "ERROR AL GUARDAR EN BITACORA MOVIMIENTOS";
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA MOVIMIENTOS");
                            }
                        }
                        #TERMINAMOS TRANSACCION DE LA BASE DE DATOS Y SE CIERRA LA CONEXION
                        if (!$errorUpdate) {
                            $proveedor->execute("COMMIT");
                            if (($bolStatusMailJuezAnterior == true) && ($bolStatusMailJuez == true) && ($bolStatusMailAdm == true)) {
                                $tmp = array("type" => "OK",
                                    "text" => "REGISTRO DE SOLICITUD DE FORMA EXITOSA Y A SU VEZ SE REMITE CORREO ELECTRONICO");
                            } else {
                                $tmp = array("type" => "OK",
                                    "text" => "REGISTRO DE SOLICITUD DE FORMA EXITOSA, NO SE LOGRO ENVIAR EL CORREO ELECTRONICO");
                            }
                            return $tmp;
                            $proveedor->close();
                        } else {
                            $proveedor->execute("ROLLBACK");
                            $proveedor->close();
                            return array("type" => "Error", "text" => $mensajeErrorUpdate);
                        }
                    } else {
                        return array("type" => "Error", "text" => "NO SE ENCONTRO SOLICITUD PARA EL JUZGADOR");
                    }
                } else {
                    return array("type" => "Error", "text" => "NO SE ENCONTRO LA SOLICITUD DEL CATEO");
                }
            } else {
                return array("type" => "Error", "text" => "NO SE ENCONTRO EL CATEO ESPECIFICADO");
            }
        } else {
            return array("type" => "Error", "text" => "INFORMACION INCOMPLETA: " . $mensajeErrorDatos);
        }
    }

    public function cancelarSolicitudCateo($idSolicitudCateo = "", $motivoCancelacion, $proveedor = null) {
        $errorDatos = false;
        $mensajeErrorDatos = false;

        if (($idSolicitudCateo == "") || ($idSolicitudCateo == "0")) {
            $errorDatos = true;
            $mensajeErrorDatos .= " SOLICITUD DE CATEO NO VALIDA \n";
        }

        if (!$errorDatos) {
            $error = false;

            #CONSULTAMOS INFORMACION DEL CATEO
            $solicitudescateosDao = new SolicitudescateosDAO();
            $solicitudescateosDto = new SolicitudescateosDTO();
            $solicitudescateosDto->setIdSolicitudCateo($idSolicitudCateo);
            $SolicitudescateosDto = $solicitudescateosDao->selectSolicitudescateos($solicitudescateosDto);
            if ($SolicitudescateosDto != "" && count($SolicitudescateosDto) > 0) {
                $SolicitudescateosDto = $SolicitudescateosDto[0];

                #VERIFICAMOS QUE EL ESTATUS DE EL CATEO SEA REGISTRADO O CONSULTADO
                if ($SolicitudescateosDto->getCveEstatusSolicitudCateo() == "1" || $SolicitudescateosDto->getCveEstatusSolicitudCateo() == "2") {
                    $errorCancelacion = false;
                    $mensajeErrorCancelacion = "";

                    #INICIAMOS TRANSACCION DE LA BASE DE DATOS
                    $proveedor = new Proveedor('mysql', 'sigejupe');
                    $proveedor->connect();
                    $proveedor->execute("BEGIN");

                    #SI ENCUENTRA TODA LA INFORMACION, SE ACTUALIZARA LA INFORMACION DEL JUEZ
                    $solicitudescateosCancelDto = new SolicitudescateosDTO();
                    $solicitudescateosCancelDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                    $solicitudescateosCancelDto->setCveEstatusSolicitudCateo("4");
                    $solicitudescateosCancelDto = $solicitudescateosDao->updateSolicitudescateos($solicitudescateosCancelDto, $proveedor);

                    if ($solicitudescateosCancelDto != "" && count($solicitudescateosCancelDto) > 0) {
                        $solicitudescateosCancelDto = $solicitudescateosCancelDto[0];
                        if ($solicitudescateosCancelDto->getCveEstatusSolicitudCateo() != "4") {
                            $errorCancelacion = true;
                            $mensajeErrorUpdate = " ERROR AL CANCELAR LA SOLICITUD DE CATEO";
                        }
                    } else {
                        $errorCancelacion = true;
                        $mensajeErrorUpdate = " ERROR AL CANCELAR LA SOLICITUD DE CATEO";
                    }


                    if (!$errorCancelacion) {
                        $cateosDto = new CateosDTO();
                        $cateosDao = new CateosDAO();
                        $cateosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                        $cateosDto = $cateosDao->selectCateos($cateosDto, "", "", $proveedor);
                        if ($solicitudescateosCancelDto != "" && count($solicitudescateosCancelDto) > 0) {
                            $cateosDto = $cateosDto[0];
                        } else {
                            $errorCancelacion = true;
                            $mensajeErrorUpdate = " ERROR AL NO ENCONTRAR INFORMACION DE EL CATEO";
                        }
                    }

                    if (!$errorCancelacion) {
                        $cateosUpdateDto = new CateosDTO();
                        $cateosDao = new CateosDAO();
                        $cateosUpdateDto->setIdCateo($cateosDto->getIdCateo());
                        $cateosUpdateDto->setMotivoCancelacion($motivoCancelacion);
                        $cateosUpdateDto = $cateosDao->updateCateos($cateosUpdateDto, "", "", $proveedor);
                        if ($solicitudescateosCancelDto != "" && count($solicitudescateosCancelDto) > 0) {
                            $cateosUpdateDto = $cateosUpdateDto[0];
                        } else {
                            $errorCancelacion = true;
                            $mensajeErrorUpdate = " ERROR AL ACTUALIZAR EL MOTIVO DE LA CANCELACI�N";
                        }
                    }

                    #OBTENEMOS INFORMACI�N DEL JUZGADO A SOLICITAR 
                    if (!$errorCancelacion) {
                        $JuzgadosDao = new JuzgadosDAO();
                        $JuzgadosDto = new JuzgadosDTO();
                        $JuzgadosDto->setCveJuzgado($solicitudescateosDto->getCveJuzgadoDesahoga()); #Id del juzgado a solicitar
                        $JuzgadosDto->setActivo("S");
                        $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, "", $proveedor);
                        if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                            $JuzgadosDto = $JuzgadosDto[0];
                        } else {
                            $errorCancelacion = true;
                            $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO A SOLICITAR");
                        }
                    }

                    #OBTNEMOS LA RELACION JUZGADOR - CATEO
                    if (!$errorCancelacion) {
                        $cateoJuez = new JuzgadorescateosDTO();
                        $cateoJuez->setActivo("S");
                        $cateoJuez->setIdSolicitudCateo($cateosDto->getIdSolicitudCateo());
                        $cateoJuezDao = new JuzgadorescateosDAO();
                        $cateoJuez = $cateoJuezDao->selectJuzgadorescateos($cateoJuez);
                        if ($cateoJuez != "" && count($cateoJuez) > 0) {
                            $cateoJuez = $cateoJuez[0];
                        } else {
                            $errorCancelacion = true;
                            $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO - CATEO");
                        }
                    }

                    #OBTENEMOS LA INFORMACION DEL JUZGADOR
                    if (!$errorCancelacion) {
                        $juzgadoresDto = new JuzgadoresDTO();
                        $juzgadoresDto->setActivo("S");
                        $juzgadoresDto->setIdJuzgador($cateoJuez->getIdJuzgador());
                        $juzgadoresDao = new JuzgadoresDAO();
                        $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto);
                        if ($juzgadoresDto != "" && count($juzgadoresDto) > 0) {
                            $juzgadoresDto = $juzgadoresDto[0];
                        } else {
                            $errorCancelacion = true;
                            $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADOR");
                        }
                    }

                    #OBTENEMOS LOS MEDIOS DE COMUNICACION DEL JUZGADOR
                    if (!$errorCancelacion) {
                        $mediosJuez = new TelefonosjuzgadoresDTO();
                        $mediosJuez->setIdJuzgador($juzgadoresDto->getIdJuzgador());
                        $mediosJuez->setActivo("S");
                        $mediosJuezDao = new TelefonosjuzgadoresDAO();
                        $mediosJuez = $mediosJuezDao->selectTelefonosjuzgadores($mediosJuez);
                        $emails = array();
                        if ($mediosJuez != "" && count($mediosJuez) > 0) {
                            foreach ($mediosJuez as $medio) {
                                if ($medio->getEmail() != "") {
                                    $emails[] = $medio->getEmail();
                                }
                            }
                        } else {
                            $errorCancelacion = true;
                            $tmp = array("type" => "Error", "text" => "ERROR AL NO HAY MEDIOS DE COMUNICACION");
                        }
                    }

                    if (!$errorCancelacion) {
                        $fechaSolicitud = $SolicitudescateosDto->getFechaRegistro();
                        $horaSolicitud = explode(' ', $fechaSolicitud);
                        $horaSolicitud = $horaSolicitud[1];

                        #PROCESO PARA ENVIAR CORREO ELECTRONICO AL JUEZ NOTIFICANDO LA CANCELACI�N DE LA AOLICITUD DEL CATEO
                        $objDatCorreo = $this->plantillaCorreo("cateos");
                        if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
//                            $emailJuez = "ricardo.ortiz@pjedomex.gob.mx";
                            if ($emails != "") {
                                foreach ($emails as $email) {
                                    $emailJuez = $email;
                                    if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                                        $correoJuez = new EmailHELPER();
                                        $correoJuez->setSenderAddress($objDatCorreo->CorreoRemite);
                                        $correoJuez->setToAddress(trim($emailJuez));
                                        $correoJuez->setToName("Cancelacion - Solicitud de Cateo - Juez");
                                        $correoJuez->setSubject($objDatCorreo->Subject);
                                        $correoJuez->setHostSmtp($objDatCorreo->IpSMTP);
                                        $correoJuez->setPortSmtp($objDatCorreo->PortSMTP);
                                        #AUTENTICACION
                                        $correoJuez->setAuth($objDatCorreo->aut);
                                        $correoJuez->setSmtpSecure($objDatCorreo->typeAut);
                                        $correoJuez->setLoginUser($objDatCorreo->login);
                                        $correoJuez->setLoginPass($objDatCorreo->password);
                                        #AUTENTICACION
                                        $correoJuez->setIsHTMLFormat(true);
                                        $strCuerpoEmailJuez = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                        $strCuerpoEmailJuez = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaSolicitud . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaSolicitud) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE), la solicitud de cateo n&uacute;mero <b>" . str_pad($cateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $cateosDto->getAnioCateo() . "</b>,
                                        formulado ante el <b>" . $JuzgadosDto->getDesJuzgado() . "</b>, 
                                        se encuentra <b>CANCELADA</b>.";
                                        $strCuerpoEmailJuez .= "</body>\n</html>\n\n";
                                        $correoJuez->setBody($strCuerpoEmailJuez);
                                        $intentos = 1;
                                        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                        while ($intentos <= 5) {
                                            $bolStatusMailJuez = $correoJuez->send();
                                            $cveEstatusNotificacion = "1";
                                            $movimiento = "";
                                            if ($bolStatusMailJuez == true) {
                                                $cveEstatusNotificacion = "2";
                                                $movimiento = "SE LOGRO ENVIAR CORREO ELECTRONICO - CANCELACI�N DE SOLICITUD";
                                            } else {
                                                $cveEstatusNotificacion = "3";
                                                $movimiento = "NO SE LOGRO ENVIAR CORREO ELECTRONICO - CANCELACI�N DE SOLICITUD";
                                            }
                                            $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                            $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                            $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                            $BitacoranotificacionesDto->setIdReferencia($cateosDto->getIdCateo()); #ID DEL CATEO
                                            $BitacoranotificacionesDto->setNumero($cateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                            $BitacoranotificacionesDto->setAnio($cateosDto->getAnioCateo()); #A�O DEL CATEO
                                            $BitacoranotificacionesDto->setCvejuzgado($SolicitudescateosDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                            $BitacoranotificacionesDto->setCveUsuario($juzgadoresDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                            $BitacoranotificacionesDto->setMedio($emailJuez);
                                            $BitacoranotificacionesDto->setMovimiento($movimiento);
                                            $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                            if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                                //                                    print_r($BitacoranotificacionesDto);
                                                //                                    echo "<br><br>";
                                            } else {
                                                $errorCancelacion = true;
                                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ");
                                            }

                                            #SI EL ENVIO DE CORREO FUE EXITOSO CORTA EL CICLO
                                            if ($bolStatusMailJuez == true) {
                                                break;
                                            }

                                            $intentos = $intentos + 1;
                                        }
                                    } else {
                                        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                        $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                        $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                        $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                        $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                        $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                        $BitacoranotificacionesDto->setIdReferencia($cateosDto->getIdCateo()); #ID DEL CATEO
                                        $BitacoranotificacionesDto->setNumero($cateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                        $BitacoranotificacionesDto->setAnio($cateosDto->getAnioCateo()); #A�O DEL CATEO
                                        $BitacoranotificacionesDto->setCvejuzgado($SolicitudescateosDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                        $BitacoranotificacionesDto->setCveUsuario($juzgadoresDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                        $BitacoranotificacionesDto->setMedio($emailJuez);
                                        $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO - CANCELACI�N DE SOLICITUD");
                                        $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                        if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                            
                                        } else {
                                            $errorCancelacion = true;
                                            $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ");
                                        }
                                    }
                                }
                            } else {
                                $errorCancelacion = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ");
                            }
                        } else {
                            $mensageCorreos = "ERROR AL OBTENER CONFIGURACION DE CORREOS";
                        }
                    }

                    #PROCESO PARA ENVIAR CORREO ELECTRONICO AL MINISTERIO PUBLICO
                    if (!$errorCancelacion) {
                        $objDatCorreo = $this->plantillaCorreo("cateos");
                        if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                            if ((trim($cateosDto->getEmail()) != "") && (strlen($cateosDto->getEmail()) > 1)) {
                                $correoMp = new EmailHELPER();
                                $correoMp->setSenderAddress($objDatCorreo->CorreoRemite);
                                $correoMp->setToAddress(trim($cateosDto->getEmail()));
                                $correoMp->setToName("Cancelacion - Solicitud de Cateo - MINISTERIO PUBLICO");
                                $correoMp->setSubject($objDatCorreo->Subject);
                                $correoMp->setHostSmtp($objDatCorreo->IpSMTP);
                                $correoMp->setPortSmtp($objDatCorreo->PortSMTP);
                                #AUTENTICACION
                                $correoMp->setAuth($objDatCorreo->aut);
                                $correoMp->setSmtpSecure($objDatCorreo->typeAut);
                                $correoMp->setLoginUser($objDatCorreo->login);
                                $correoMp->setLoginPass($objDatCorreo->password);
                                #AUTENTICACION
                                $correoMp->setIsHTMLFormat(true);
                                $strCuerpoEmailMP = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                $strCuerpoEmailMP = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaSolicitud . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaSolicitud) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE), la solicitud de cateo n&uacute;mero <b>" . str_pad($cateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $cateosDto->getAnioCateo() . "</b>,
                      formulado ante el <b>" . $JuzgadosDto->getDesJuzgado() . "</b>, 
                      se encuentra <b>CANCELADA</b>.";
                                $correoMp->setBody($strCuerpoEmailMP);
                                $intentos = 1;
                                $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                while ($intentos <= 5) {
                                    $bolStatusMailMP = $correoMp->send();
                                    $cveEstatusNotificacion = "1";
                                    $movimiento = "";
                                    if ($bolStatusMailMP == true) {
                                        $cveEstatusNotificacion = "2";
                                        $movimiento = "SE LOGRO ENVIAR CORREO ELECTRONICO - CANCELACI�N DE SOLICITUD";
                                    } else {
                                        $cveEstatusNotificacion = "3";
                                        $movimiento = "NO SE LOGRO ENVIAR CORREO ELECTRONICO - CANCELACI�N DE SOLICITUD";
                                    }
                                    $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                    $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                    $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                    $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                    $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                    $BitacoranotificacionesDto->setIdReferencia($cateosDto->getIdCateo()); #ID DEL CATEO
                                    $BitacoranotificacionesDto->setNumero($cateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                    $BitacoranotificacionesDto->setAnio($cateosDto->getAnioCateo()); #A�O DEL CATEO
                                    $BitacoranotificacionesDto->setCvejuzgado($SolicitudescateosDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                    $BitacoranotificacionesDto->setCveUsuario($SolicitudescateosDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                    $BitacoranotificacionesDto->setMedio($cateosDto->getEmail());
                                    $BitacoranotificacionesDto->setMovimiento($movimiento);
                                    $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                    if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                        //                                    print_r($BitacoranotificacionesDto);
                                        //                                    echo "<br><br>";
                                    } else {
                                        $errorCancelacion = true;
                                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO ADMINISTRADOR");
                                    }

                                    #SI EL ENVIO DE CORREO FUE EXITOSO CORTA EL CICLO
                                    if ($bolStatusMailMP == true) {
                                        break;
                                    }

                                    $intentos = $intentos + 1;
                                }
                            } else {
                                $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                $BitacoranotificacionesDto->setCveTipoActuacion(""); #9 - CATEO
                                $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                $BitacoranotificacionesDto->setIdReferencia($cateosDto->getIdCateo()); #ID DEL CATEO
                                $BitacoranotificacionesDto->setNumero($cateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                $BitacoranotificacionesDto->setAnio($cateosDto->getAnioCateo()); #A�O DEL CATEO
                                $BitacoranotificacionesDto->setCvejuzgado($SolicitudescateosDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                $BitacoranotificacionesDto->setCveUsuario($SolicitudescateosDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                $BitacoranotificacionesDto->setMedio($cateosDto->getEmail());
                                $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO - CANCELACI�N DE SOLICITUD");
                                $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                    //                                print_r($BitacoranotificacionesDto);
                                    //                                echo "<br><br>";
                                } else {
                                    $errorCancelacion = true;
                                    $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - MINISTERIO PUBLICO");
                                }
                            }
                        } else {
                            $mensageCorreos = "ERROR AL OBTENER CONFIGURACION DE CORREOS";
                        }
                    }

                    #CANCELAMOS EL CHAT DEL CATEO
                    if (!$errorCancelacion) {
                        $numeroAnioCateo = md5($cateosDto->getIdCateo() . "-1");
                        $chatCerradosDto = new ChatCerradosDTO();
                        $chatCerradosDao = new ChatCerradosDAO();
                        $chatCerradosDto->setChatId($numeroAnioCateo);
                        $chatCerradosDto = $chatCerradosDao->insertChatCerrados($chatCerradosDto, $proveedor);
                        if ($chatCerradosDto != "" && count($chatCerradosDto) > 0) {
                            $chatCerradosDto = $chatCerradosDto[0];
                        } else {
                            $errorCancelacion = true;
                            $tmp = array("type" => "Error", "text" => "ERROR AL INSERTAR CIERRE DE CHAT DEL CATEO");
                        }
                    }

                    #TERMINAMOS TRANSACCION DE LA BASE DE DATOS Y SE CIERRA LA CONEXION
                    if (!$errorCancelacion) {
                        $proveedor->execute("COMMIT");
                        if (($bolStatusMailJuez == true) && ($bolStatusMailMP == true)) {
                            $tmp = array("type" => "OK",
                                "text" => "CANCELACION DE SOLICITUD DE FORMA EXITOSA Y A SU VEZ SE REMITE CORREO ELECTRONICO");
                        } else {
                            $tmp = array("type" => "OK",
                                "text" => " CANCELACION DE SOLICITUD DE FORMA EXITOSA, NO SE LOGRO ENVIAR EL CORREO ELECTRONICO");
                        }
                        return $tmp;
                        $proveedor->close();
                    } else {
                        $proveedor->execute("ROLLBACK");
                        $proveedor->close();
                        return array("type" => "Error", "text" => $mensajeErrorUpdate);
                    }
                } else {
                    if ($SolicitudescateosDto->getCveEstatusSolicitudCateo() == "3") {
                        return array("type" => "Error", "text" => "NO SE CANCELO LA SOLICITUD POR QUE EL CATEO SE ENCUENTRA CONTESTADO");
                    }
                    if ($SolicitudescateosDto->getCveEstatusSolicitudCateo() == "4") {
                        return array("type" => "Error", "text" => "CATEO CANCELADO ANTERIORMENTE");
                    }
                }
            } else {
                return array("type" => "Error", "text" => "NO SE ENCONTRO EL CATEO ESPECIFICADO");
            }
        } else {
            return array("type" => "Error", "text" => "INFORMACION INCOMPLETA: " . $mensajeErrorDatos);
        }
    }

    public function consultaCateosInformacion($type, $solicitudescateosDto, $param = "") {

        $datos = [];
        if ($type != 0 && $type != "") {
            $idUsuario = $_SESSION['cveUsuarioSistema'];
            $numeroCateo = $param["numeroCateo"];
            $anioCateo = $param["anioCateo"];

            $fechaRegistro = $solicitudescateosDto->getFechaRegistro();
            $idJuzgadoT = 0;
            if ($solicitudescateosDto->getCveJuzgado() != "") {
                $idJuzgadoT = $solicitudescateosDto->getCveJuzgado();
            }
            $filtros["numeroCateo"] = $numeroCateo;
            $filtros["anioCateo"] = $anioCateo;
            $fechaEnd = $param["fechaEnd"];
            if ($fechaEnd != "") {
                $filtros["fechaRegistro"] = "";
            } else {
                $filtros["fechaRegistro"] = $fechaRegistro;
            }
            $filtros["idJuzgadoT"] = $idJuzgadoT;
            $solicitudescateosDto = new SolicitudescateosDTO();
            $solCateosDAO = new SolicitudescateosDAO();
            switch ($type) {
                case "1": // --> Busuqeda General
                    $cateoDto = new CateosDTO();
                    $cateoDao = new CateosDAO();
                    $cateoDto->setNumeroCateo($numeroCateo);
                    $cateoDto->setAnioCateo($anioCateo);
                    $cateoDto = $cateoDao->selectCateos($cateoDto, $param, "ORDER BY fechaRegistro DESC");
                    if ($cateoDto != "") {
                        $datos = [];
                        $i = 0;
                        foreach ($cateoDto as $index => $value) {
                            $filtros["idSolicitudCateo"] = $value->getIdSolicitudCateo();
                            $resultado = $this->infoCateoDetalle($filtros);
                            if ($resultado != "" && count($resultado) != 0) {
                                $datos["datos"][$i] = $resultado;
                                $i++;
                            }
                        }
                        // Obtenemos el numero de paginas
                        $cateoDto = new CateosDTO();
                        $cateoDto->setNumeroCateo($numeroCateo);
                        $cateoDto->setAnioCateo($anioCateo);
                        $param["fields"] = " count(idCateo) as totalCount ";
                        $cateoDto = $cateoDao->selectCateos($cateoDto, $param);
                        $datos["total"] = (int) $cateoDto[0];
                        $paginas = $this->getPaginas($cateoDto, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return array("status" => "Error");
                    }
                    break;
                case "2": // --> Busuqeda MP
                    $cateosDto = new CateosDTO();
                    $cateosDto->setAnioCateo($anioCateo);
                    $cateosDto->setNumeroCateo($numeroCateo);
                    $solicitudescateosDto->setCveUsuario($idUsuario);
                    $solicitudescateosDto = $solCateosDAO->selectSolicitudesCateosmp($solicitudescateosDto, $cateosDto, $param, "ORDER BY fechaRegistro DESC");
                    if ($solicitudescateosDto != "") {
                        $datos = [];
                        $i = 0;
                        foreach ($solicitudescateosDto as $index => $value) {
                            $filtros["idSolicitudCateo"] = $value->getIdSolicitudCateo();
                            $resultado = $this->infoCateoDetalle($filtros);
                            if ($resultado != "" && count($resultado) != 0) {
                                $datos["datos"][$i] = $resultado;
                                $i++;
                            }
                        }
                        // Obtenemos el numero de paginas
                        $cateosDto = new CateosDTO();
                        $cateosDto->setAnioCateo($anioCateo);
                        $cateosDto->setNumeroCateo($numeroCateo);
                        $solicitudescateosDtos = new SolicitudescateosDTO();
                        $solicitudescateosDtos->setCveUsuario($idUsuario);
                        $param["fields"] = " count(idSolicitudCateo) as totalCount ";
                        $solicitudescateosDtos = $solCateosDAO->selectSolicitudesCateosmp($solicitudescateosDtos, $cateosDto, $param);
                        $datos["total"] = (int) $solicitudescateosDtos[0];
                        $paginas = $this->getPaginas($solicitudescateosDtos, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return "";
                    }
                    break;
                case "3": // --> Busuqeda Juzgador
                    $juzgadorDto = new JuzgadoresDTO();
                    $juzgadorDao = new JuzgadoresDAO();
//                    $idUsuario = 1521;
                    $juzgadorDto->setCveUsuario($idUsuario);
                    $juzgadorDto = $juzgadorDao->selectJuzgadores($juzgadorDto);
                    if ($juzgadorDto != "") {
                        $idUsuario = $juzgadorDto[0]->getIdJuzgador();
                    }
                    if ($idUsuario != "" && $idUsuario > 0) {
                        $cateosDto = new CateosDTO();
                        $cateosDto->setAnioCateo($anioCateo);
                        $cateosDto->setNumeroCateo($numeroCateo);
                        $solicitudescateosDto = $solCateosDAO->selectSolicitudesCateosJuzgadores($solicitudescateosDto, $cateosDto, $idUsuario, $param);
                        $i = 0;
                        if ($solicitudescateosDto != "" && count($solicitudescateosDto) > 0) {
                            foreach ($solicitudescateosDto as $solicitudCateo) {
                                $filtros["idSolicitudCateo"] = $solicitudCateo->getIdSolicitudCateo();
                                $resultado = $this->infoCateoDetalle($filtros);
                                if ($resultado != "" && count($resultado) != 0) {
                                    $datos["datos"][$i] = $resultado;
                                    $i++;
                                }
                            }
                            $cateosDto = new CateosDTO();
                            $cateosDto->setAnioCateo($anioCateo);
                            $cateosDto->setNumeroCateo($numeroCateo);
                            $solicitudescateosDtos = new SolicitudescateosDTO();
                            $param["fields"] = " count(idCateo) as totalCount ";
                            $solicitudescateosDtos = $solCateosDAO->selectSolicitudesCateosJuzgadores($solicitudescateosDtos, $cateosDto, $idUsuario, $param);
                            $datos["total"] = (int) $solicitudescateosDtos[0];
                            $paginas = $this->getPaginas($solicitudescateosDtos, $param);
                            $datos["paginas"] = $paginas;
                        } else {
                            return "";
                        }
                    } else {
                        return "";
                    }
                    break;
                case "4": // --> Busqueda AdminJuzgador
//                    if (isset($_SESSION['cveAdscripcion'])) {
                    $idJuzgadoDesahoga = $_SESSION['cveAdscripcion'];
//                    }
//                    $idJuzgadoDesahoga = 762;

                    $cateoDto = new CateosDTO();
                    $cateoDao = new CateosDAO();
                    $cateoDto->setNumeroCateo($numeroCateo);
                    $cateoDto->setAnioCateo($anioCateo);
                    $cateoDto = $solCateosDAO->consultaDetalleCateosJuzgado($cateoDto, $idJuzgadoDesahoga, "ORDER BY fechaRegistro DESC", null, $param);
                    if ($cateoDto != "") {
                        $datos = [];
                        $i = 0;
                        foreach ($cateoDto as $index => $value) {
                            $filtros["idSolicitudCateo"] = $value->getIdSolicitudCateo();
                            $resultado = $this->infoCateoDetalle($filtros);
                            if ($resultado != "" && count($resultado) != 0) {
                                $datos["datos"][$i] = $resultado;
                                $i++;
                            }
                        }
                        // Obtenemos el numero de paginas
                        $cateoDto = new CateosDTO();
                        $cateoDto->setNumeroCateo($numeroCateo);
                        $cateoDto->setAnioCateo($anioCateo);
                        $param["fields"] = " count(idCateo) as totalCount ";
                        $cateoDto = $solCateosDAO->consultaDetalleCateosJuzgado($cateoDto, $idJuzgadoDesahoga, "ORDER BY fechaRegistro DESC", null, $param);
                        $datos["total"] = (int) $cateoDto[0];
                        $paginas = $this->getPaginas($cateoDto, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return array("status" => "Error");
                    }
                    break;
                case "5" : // --> Bitacora
                    $cateoDto = new CateosDTO();
                    if ($idJuzgadoT == 0)
                        $param["numJuzgado"] = "";
                    else
                        $param["numJuzgado"] = $idJuzgadoT;

                    $cateoDto = $solCateosDAO->selectBitacora($param);
                    if ($cateoDto != "") {
                        $datos = [];
                        $i = 0;
                        foreach ($cateoDto as $index => $value) {
                            $filtros["idSolicitudCateo"] = $value->getIdSolicitudCateo();
                            $resultado = $this->infoCateoDetalle($filtros);
                            if ($resultado != "" && count($resultado) != 0) {
                                $datos["datos"][$i] = $resultado;
                                $i++;
                            }
                        }
                        // Obtenemos el numero de paginas
                        $cateoDto = new CateosDTO();
                        $cateoDto->setNumeroCateo($numeroCateo);
                        $cateoDto->setAnioCateo($anioCateo);
                        $param["fields"] = " count(idCateo) as totalCount ";
                        $cateoDto = $solCateosDAO->selectBitacora($param);
                        $datos["total"] = (int) $cateoDto[0];
                        $paginas = $this->getPaginas($cateoDto, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return array("status" => "Error");
                    }
                    break;
                case "6": // --> Busuqeda Secretario
                    //$idUsuario = 221;
                    $tbljuzgadoresDto = new JuzgadoresDTO();
                    $tbljuzgadoresDao = new JuzgadoresDAO();
                    $tbljuzgadoresDto->setActivo("S");
                    $tbljuzgadoresDto->setCveUsuario($idUsuario);
                    $tbljuzgadoresDto = $tbljuzgadoresDao->selectJuzgadores($tbljuzgadoresDto);
                    if ($tbljuzgadoresDto != "") {
                        $idUsuario = $tbljuzgadoresDto[0]->getIdJuzgador();
                    }
                    $cateoDto = new CateosDTO();
                    $cateoDto->setNumeroCateo($numeroCateo);
                    $cateoDto->setAnioCateo($anioCateo);
                    if ($idUsuario != "" && $idUsuario > 0) {
                        $cateoDto = $solCateosDAO->selectSolicitudesCateosSecretario($cateoDto, $idUsuario, $param);

                        if ($cateoDto != "") {
                            $datos = [];
                            $i = 0;
                            foreach ($cateoDto as $index => $value) {
                                $filtros["idSolicitudCateo"] = $value->getIdSolicitudCateo();
                                $resultado = $this->infoCateoDetalle($filtros);
                                if ($resultado != "" && count($resultado) != 0) {
                                    $datos["datos"][$i] = $resultado;
                                    $i++;
                                }
                            }
                            // Obtenemos el numero de paginas
                            $cateoDto = new CateosDTO();
                            $cateoDto->setNumeroCateo($numeroCateo);
                            $cateoDto->setAnioCateo($anioCateo);
                            $param["fields"] = " count(idCateo) as totalCount ";
                            $cateoDto = $solCateosDAO->selectSolicitudesCateosSecretario($cateoDto, $idUsuario, $param);
                            $datos["total"] = (int) $cateoDto[0];
                            $paginas = $this->getPaginas($cateoDto, $param);
                            $datos["paginas"] = $paginas;
                        } else {
                            return $datos["status"] = "Error";
                        }
                    } else {
                        return $datos["status"] = "Error";
                    }
                    break;
                default :  // --> Busuqeda General
                    break;
            }
            if (count($datos) >= 1) {
                $datos["status"] = "OK";
                $datos["pagina"] = $param["pag"];
            } else {
                $datos["status"] = "Error";
            }
            return $datos;
        }
    }

    private function infoCateoDetalle($filtros) {
        $resultados = [];
        $solCateosDAO = new SolicitudescateosDAO();
        $juzgadoDto = new JuzgadosDTO();
        $juzgadoDAO = new JuzgadosDAO();
        $cateoDto = new CateosDTO();
        $cateoDAO = new CateosDAO();
        $statusDto = new EstatussolicitudescateosDTO();
        $statusDAO = new EstatussolicitudescateosDAO();
        $personDto = new PersonasDTO();
        $personDAO = new PersonasDAO();
        $objetosDto = new ObjetosDTO();
        $objetosDAO = new ObjetosDAO();

        $numeroCateo = $filtros["numeroCateo"];
        $anioCateo = $filtros["anioCateo"];
        $fechaRegistro = $filtros["fechaRegistro"];
        $idJuzgadoT = $filtros["idJuzgadoT"];
        if ($idJuzgadoT == "") {
            $idJuzgadoT = "";
        }
        if ($filtros["idSolicitudCateo"] != "") {
            $filtros["idSolicitudCateo"];
            $cateoDto->setIdSolicitudCateo($filtros["idSolicitudCateo"]);
        }
        $cateoDto->setAnioCateo($anioCateo);
        $cateoDto->setNumeroCateo($numeroCateo);
        $cateoDto->setFechaRegistro($fechaRegistro);
        $cateoDto = $cateoDAO->selectCateos($cateoDto);
        $i = 0;
        if ($cateoDto != "") {
            foreach ($cateoDto as $indexCat => $valueCat) {
                $idSolicitudCateo = $valueCat->getIdSolicitudCateo();
                $solicitudescateosDto = new SolicitudescateosDTO();
                $solicitudescateosDto->setIdSolicitudCateo($idSolicitudCateo);
                if ($idJuzgadoT != 0) {
                    $solicitudescateosDto->setCveJuzgado($idJuzgadoT);
                }
                $resultado = $solCateosDAO->selectSolicitudescateos($solicitudescateosDto);
                if ($resultado != "") {
                    foreach ($resultado as $index => $value) {
                        $resultados['IdSolicitudCateo'] = $value->getIdSolicitudCateo();
                        $juzgadorCateoDto = new JuzgadorescateosDTO();
                        $juzgadorCateoDAO = new JuzgadorescateosDAO();
                        $juzgadorDto = new JuzgadoresDTO();
                        $juzgadorDAO = new JuzgadoresDAO();
                        $juzgadorCateoDto->setIdSolicitudCateo($value->getIdSolicitudCateo());
                        $juzgadorCateoDto = $juzgadorCateoDAO->selectJuzgadorescateos($juzgadorCateoDto);
                        if ($juzgadorCateoDto != "") {
                            $idJuzgador = $juzgadorCateoDto[0]->getIdJuzgador();
                            $juzgadorDto->setIdJuzgador($idJuzgador);
                            $juzgadorDto = $juzgadorDAO->selectJuzgadores($juzgadorDto);
                            if ($juzgadorDto != "") {
                                $nombre = utf8_encode($juzgadorDto[0]->getTitulo() . " "
                                        . $juzgadorDto[0]->getNombre() .
                                        " " . $juzgadorDto[0]->getPaterno() . " "
                                        . $juzgadorDto[0]->getMaterno());
                                $resultados['juez'] = $nombre;
                            } else {
                                $resultados['juez'] = "";
                            }
                        } else {
                            $resultados['juez'] = "";
                        }
                        $resultados['carpetaInv'] = $value->getCarpetaInv();
                        $resultados['numero'] = $value->getNumero();
                        $resultados['anio'] = $value->getAnio();
                        $idJuzgado = $value->getCveJuzgadoDesahoga();
                        $idSolicitudCateo = $value->getIdSolicitudCateo();

                        // Obtenemos el Juzgado            
                        $juzgadoDto->setCveJuzgado($idJuzgado);
                        $juzgados = $juzgadoDAO->selectJuzgados($juzgadoDto);
                        if ($juzgados != "") {
                            $resultados['juzgado'] = $juzgados[0]->getDesJuzgado();
                        } else {
                            $resultados['juzgado'] = "";
                        }

                        // Obtenemos la informacion del Cateo
                        if ($idSolicitudCateo != "") {
                            $cateoDto = new CateosDTO();
                        }
                        $cateoDto->setIdSolicitudCateo($idSolicitudCateo);
                        $cateos = $cateoDAO->selectCateos($cateoDto);
                        if ($cateos != "") {
                            $resultados['idCateo'] = $cateos[0]->getIdCateo();
                            $resultados['numCateo'] = $cateos[0]->getNumeroCateo();
                            $resultados['numEspecializadoCateo'] = $cateos[0]->getNumeroEspecializadoCateo();
                            $resultados['anioCateo'] = $cateos[0]->getAnioCateo();
                            $fechaHoraRegistro = explode(" ", utf8_encode($cateos[0]->getFechaRegistro()));
                            $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                            $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                            $horaRegistro = $fechaHoraRegistro[1];
                            $resultados['fechaRegistro'] = $fechaRegistro . " " . $horaRegistro;

                            if ($cateos[0]->getFechaRespuesta() != "") {
                                $fechaHoraRegistro = explode(" ", utf8_encode($cateos[0]->getFechaRespuesta()));
                                $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                                $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                                $horaRegistro = $fechaHoraRegistro[1];
                                $fechaRespuesta = $fechaRegistro . " " . $horaRegistro;
                            } else {
                                $fechaRespuesta = "Sin Respuesta";
                            }

                            $resultados['fechaRespuesta'] = $fechaRespuesta;
                            //echo $cateos[0]->getFechaRespuesta();
                            if ($cateos[0]->getFechaRespuesta() != "") {
                                $espera = $this->longDate($cateos[0]->getFechaRegistro(), $cateos[0]->getFechaRespuesta());
                            } else {
                                $espera = "Sin Respuesta";
                            }
                            $resultados["tiempoRespuesta"] = utf8_encode("$espera");

                            #Obtenemos la apelacion 
                            $apelacionDto = new ApelacioncateosDTO();
                            $apelacionDao = new ApelacioncateosDAO();
                            $apelacionDto->setIdCateo($cateos[0]->getIdCateo());
                            $apelacionDto = $apelacionDao->selectApelacioncateos($apelacionDto);
                            if ($apelacionDto != "") {
                                $apelacionDto = $apelacionDto[0];
                                #Obtenemos al Juez
                                $juezApelacionDto = new JuzgadoresapelacateosDTO();
                                $juezApelacionDao = new JuzgadoresapelacateosDAO();
                                $juezApelacionDto->setIdApelacionCateo($apelacionDto->getIdApelacionCateo());
                                $juezApelacionDto->setActivo("S");
                                $juezApelacionDto = $juezApelacionDao->selectJuzgadoresapelacateos($juezApelacionDto);
                                if ($juezApelacionDto != "") {
                                    $juezApelacionDto = $juezApelacionDto[0];
                                    #Obtenemos al Juez
                                    $juezADto = new JuzgadoresDTO();
                                    $juezADao = new JuzgadoresDAO();
                                    $juezADto->setActivo("S");
                                    $juezADto->setIdJuzgador($juezApelacionDto->getIdJuzgador());
                                    $juezADto = $juezADao->selectJuzgadores($juezADto);
                                    if ($juezADto) {
                                        $juezADto = $juezADto[0];
                                        $nombre = utf8_encode($juezADto->getNombre() . " " . $juezADto->getPaterno() . " " . $juezADto->getMaterno());
                                        $resultados['juezApelacion'] = $nombre;
                                    } else {
                                        $resultados['juezApelacion'] = "";
                                    }

                                    #Obtenemos al Secretario
                                    if ($apelacionDto->getCveUsuarioSecretario() != "") {
                                        $juezASto = new JuzgadoresDTO();
                                        $juezASto->setActivo("S");
                                        $juezASto->setIdJuzgador($apelacionDto->getCveUsuarioSecretario());
                                        $juezASto = $juezADao->selectJuzgadores($juezASto);

                                        if ($juezADto) {
                                            $juezASto = $juezASto[0];
                                            $nombre = utf8_encode($juezASto->getNombre() . " " . $juezASto->getPaterno() . " " . $juezASto->getMaterno());
                                            $resultados['secretario'] = $nombre;
                                        } else {
                                            $resultados['secretario'] = "";
                                            $resultados['juezApelacion'] = "";
                                        }
                                    } else {
                                        $resultados['secretario'] = "";
                                    }
                                } else {
                                    $resultados['secretario'] = "";
                                    $resultados['juezApelacion'] = "";
                                }
                            } else {
                                $resultados['secretario'] = "";
                                $resultados['juezApelacion'] = "";
                            }
                        } else {
                            $resultados['numCateo'] = "";
                            $resultados['fechaRegistro'] = "";
                            $resultados['fechaRespuesta'] = "";
                            $resultados["tiempoRespuesta"] = "";
                        }

                        // Obtenemos informacion de Estatus
                        $resultados['cveEstatusCateo'] = $value->getCveEstatusSolicitudCateo();
                        $statusDto->setCveEstatusSolicitudCateo($value->getCveEstatusSolicitudCateo());
                        $estatusCateos = $statusDAO->selectEstatussolicitudescateos($statusDto);
                        if ($estatusCateos != "") {
                            $resultados['estatusCateo'] = $estatusCateos[0]->getDesEstatusSolicitudCateo();
                        } else {
                            $resultados['estatusCateo'] = "";
                        }

                        // Obtenemos las Personas
                        $personDto->setIdSolicitudCateo($idSolicitudCateo);
                        $personas = $personDAO->selectPersonas($personDto);
                        if ($personas != 0) {
                            $personasConcat = "";
                            foreach ($personas as $indexPerson => $rowPerson) {
                                $personasConcat .= utf8_encode($rowPerson->getNombre()) . " " .
                                        utf8_encode($rowPerson->getPaterno()) . " " .
                                        utf8_encode($rowPerson->getMaterno() . ", ");
                            }
                            $personasConcat = substr($personasConcat, 0, strlen($personasConcat) - 2);
                            $resultados['Personas'] = $personasConcat;
                        } else {
                            $resultados['Personas'] = "";
                        }

                        // Obtenemos los Objetos
                        $objetosDto->setIdSolicitudCateo($idSolicitudCateo);
                        $objetos = $objetosDAO->selectObjetos($objetosDto);
                        if ($objetos != "") {
                            $objetosConcat = "";
                            foreach ($objetos as $indexObject => $rowObjet) {
                                $objetosConcat .= utf8_encode($rowObjet->getDesObjeto()) . ", ";
                            }
                            $objetosConcat = substr($objetosConcat, 0, strlen($objetosConcat) - 2);
                            $resultados['Objetos'] = $objetosConcat;
                        } else {
                            $resultados['Objetos'] = "";
                        }
                    }
                }
                $i++;
            }
            //$resultados["status"] = "OK";
            return $resultados;
        }
        return "";
    }

    public function longDate($start_time, $end_time) {

        if ($start_time == $end_time) {
            return "sin diferencia";
        }
        $diff = abs(strtotime($end_time) - strtotime($start_time));

        $years = floor($diff / (365 * 60 * 60 * 24));
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));
        $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));
        $minuts = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60) / 60);
        $seconds = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60 - $minuts * 60));
        $result = "";
        if ($years > 0) {
            if ($years == 1) {
                $result .= $years . " A�o ";
            } else {
                $result .= $years . " A�os ";
            }
        }
        if ($months > 0) {
            if ($months == 1) {
                $result .= $months . " Mes ";
            } else {
                $result .= $months . " Meses ";
            }
        }
        if ($days > 0) {
            if ($days == 1) {
                $result .= $days . " D�a ";
            } else {
                $result .= $days . " Dias ";
            }
        }
        if ($hours > 0) {
            if ($hours == 1) {
                $result .= $hours . " Hora ";
            } else {
                $result .= $hours . " Horas ";
            }
        }
        if ($minuts > 0) {
            if ($minuts == 1) {
                $result .= $minuts . " Minuto ";
            } else {
                $result .= $minuts . " Minutos ";
            }
        }
        if ($seconds > 0) {
            if ($seconds == 1) {
                $result .= $seconds . " Segundo ";
            } else {
                $result .= $seconds . " Segundos ";
            }
        }
        return $result;
    }

    public function getPaginas($dto, $param) {
        $paginas = array();
        $Pages = (int) $dto[0] / $param["cantxPag"];
        $restoPages = (int) $dto[0] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        if ($totPages >= 1) {
            for ($index = 1; $index <= $totPages; $index++) {
                $paginas[] = utf8_encode($index);
            }
        }
        return $paginas;
    }

    public function getInfoWS($juzgado) {
        try {
            if ($juzgado != "") {
                $usuariosCliente = new UsuarioCliente();
                $admons = $usuariosCliente->selectUsuariosGrupoSistema(97, 38, $juzgado);
                if ($admons != "") {
                    $file = fopen(dirname(__FILE__) . "/../../../archivos/administradoresjuzgados$juzgado.json", "w");
                    fwrite($file, $admons);
                    fclose($file);
                } else {
                    
                }
            }
        } catch (Exception $e) {
            
        }
    }

    public function getAdminInfoJuzgadorWS($juzgado) {
        try {
            if ($juzgado != "") {
                $usuariosCliente = new UsuarioCliente();
                $admons = $usuariosCliente->selectUsuariosGrupoSistema(97, 38, $juzgado);
                if ($admons != "") {
                    $file = fopen(dirname(__FILE__) . "/../../../archivos/actadminjuzgados$juzgado.json", "w");
                    fwrite($file, $admons);
                    fclose($file);
                } else {
                    
                }
            }
        } catch (Exception $e) {
            
        }
    }

    private function curl_get_contents($url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    private function buscarAuxiliar($numeroCarpeta, $anioCarpeta, $juzgadoProcedencia, $carpetaInvestigacion, $nuc) {
        $result = array();
        $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
        $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
        if (($numeroCarpeta != "") && ($anioCarpeta != "") && ($juzgadoProcedencia != "") && ($cveTipoCarpeta != "")) {
            $CarpetasjudicialesDto->setNumero($numeroCarpeta);
            $CarpetasjudicialesDto->setAnio($anioCarpeta);
            $CarpetasjudicialesDto->setCveJuzgado($juzgadoProcedencia);
        } else {
            $CarpetasjudicialesDto->setCarpetaInv($carpetaInvestigacion);
        }
        $CarpetasjudicialesDto->setActivo("S");
        $CarpetasjudicialesDto->setCveTipoCarpeta(1);
        $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto);

        if ($CarpetasjudicialesDto != "") {
            $result["type"] = "OK";
            $result["info"] = $CarpetasjudicialesDto[0]->toString();
        } else {
            $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
            if (($numeroCarpeta != "") && ($anioCarpeta != "") && ($juzgadoProcedencia != "") && ($cveTipoCarpeta != "")) {
                $CarpetasjudicialesDto->setNumero($numeroCarpeta);
                $CarpetasjudicialesDto->setAnio($anioCarpeta);
                $CarpetasjudicialesDto->setCveJuzgado($juzgadoProcedencia);
            } else {
                $CarpetasjudicialesDto->setNuc($nuc);
            }
            $CarpetasjudicialesDto->setActivo("S");
            $CarpetasjudicialesDto->setCveTipoCarpeta(1);
            $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto);
            if ($CarpetasjudicialesDto != "") {
                $result["type"] = "OK";
                $result["info"] = $CarpetasjudicialesDto[0]->toString();
            }
        }

        if ($CarpetasjudicialesDto != "") {
            #Obtenemos los imputados 
            $imputadosDto = new ImputadoscarpetasDTO();
            $imputadosDao = new ImputadoscarpetasDAO();
            $imputadosDto->setActivo("S");
            $imputadosDto->setIdCarpetaJudicial($CarpetasjudicialesDto[0]->getIdCarpetaJudicial());
            $imputadosDto = $imputadosDao->selectImputadoscarpetas($imputadosDto);
            if ($imputadosDto != "") {
                $imputados = array();
                foreach ($imputadosDto as $imputadoC) {
                    $imputados[] = $imputadoC->toString();
                }
                $result["info"]["imputados"] = $imputados;
            } else {
                $result["info"]["imputados"] = "";
            }
            #Obtenemos los Ofendidos
            $ofendidosDto = new OfendidoscarpetasDTO();
            $ofendidosDao = new OfendidoscarpetasDAO();
            $ofendidosDto->setActivo("S");
            $ofendidosDto->setIdCarpetaJudicial($CarpetasjudicialesDto[0]->getIdCarpetaJudicial());
            $ofendidosDto = $ofendidosDao->selectOfendidoscarpetas($ofendidosDto);
            if ($ofendidosDto != "") {
                $ofendidos = array();
                foreach ($ofendidosDto as $ofendidosC) {
                    $ofendidos[] = $ofendidosC->toString();
                }
                $result["info"]["ofendidos"] = $ofendidos;
            } else {
                $result["info"]["ofendidos"] = "";
            }

            #Obtenemos los delitos
            $delitosDto = new DelitoscarpetasDTO();
            $delitosDao = new DelitoscarpetasDAO();
            $delitosDto->setActivo("S");
            $delitosDto->setIdCarpetaJudicial($CarpetasjudicialesDto[0]->getIdCarpetaJudicial());
            $delitosDto = $delitosDao->selectDelitoscarpetas($delitosDto);
            if ($delitosDto != "") {
                $delitos = array();
                foreach ($delitosDto as $delitosC) {
                    $delitos[] = $delitosC->toString();
                }
                $result["info"]["delitos"] = $delitos;
            } else {
                $result["info"]["delitos"] = "";
            }

            #Obtenemso la relacion de Ofendidos
            $relacionDto = new ImpofedelcarpetasDTO();
            $relacionDAo = new ImpofedelcarpetasDAO();
            $relacionDto->setActivo("S");
            $relacionDto->setIdCarpetaJudicial($CarpetasjudicialesDto[0]->getIdCarpetaJudicial());
            $relacionDto = $relacionDAo->selectImpofedelcarpetas($relacionDto);
            if ($relacionDto != "") {
                $relacion = array();
                foreach ($relacionDto as $relacionC) {
                    $relacion[] = $relacionC->toString();
                }
                $result["info"]["relacion"] = $relacion;
            } else {
                $result["info"]["relacion"] = "";
            }
        } else {
            $result["type"] = "Error";
            $result["text"] = "NO SE ENCONTRO EL NUMERO AUXILIAR";
        }

        return $result;
    }

    private function generaCarpeta($paramCarpeta, $proveedor) {
        $result = array();
        $fecha_actual = $proveedor->getfechaActual();
        $partes_fecha = explode("-", $fecha_actual);

        $contadoresDto = new ContadoresDTO();
        $contadoresDto->setActivo("S");
        $contadoresDto->setCveJuzgado($paramCarpeta["cveJuzgado"]);
        $contadoresDto->setCveTipoCarpeta(1);
        $contadoresDto->setAnio($partes_fecha[0]);

        $ContadorCt = new ContadoresController();
        $contadoresDto = $ContadorCt->getContador($contadoresDto, $proveedor);
        if ($contadoresDto != "" && count($contadoresDto) > 0) {
            $contadoresDto = $contadoresDto[0];
        }

        $carpetasDto = new CarpetasjudicialesDTO();
        $carpetasDao = new CarpetasjudicialesDAO();
        $carpetasDto->setActivo("S");
        $carpetasDto->setCveEtapaProcesal("1");
        $carpetasDto->setCveConsignacion("4");
        $carpetasDto->setCveTipoCarpeta("1");
        $carpetasDto->setCveEstatusCarpeta("1");
        $carpetasDto->setFechaRadicacion($fecha_actual);
        $carpetasDto->setNumero($contadoresDto->getNumero());
        $carpetasDto->setAnio($contadoresDto->getAnio());
        $carpetasDto->setCveJuzgado($paramCarpeta["cveJuzgado"]);
        if ($paramCarpeta["carpetaInv"] != "") {
            $carpetasDto->setCarpetaInv($paramCarpeta["carpetaInv"]);
        } else {
            $carpetasDto->setCarpetaInv($paramCarpeta["nuc"]);
        }
        if ($paramCarpeta["nuc"] != "") {
            $carpetasDto->setNuc($paramCarpeta["nuc"]);
        } else {
            $carpetasDto->setNuc($paramCarpeta["carpetaInv"]);
        }
        $carpetasDto->setCveUsuario($paramCarpeta["cveUsuario"]);
        $carpetasDto->setNumImputados($paramCarpeta["numImptutado"]);
        $carpetasDto->setNumOfendidos($paramCarpeta["numOfendido"]);
        $carpetasDto->setNumDelitos($paramCarpeta["numdelito"]);
        $carpetasDto->setObservaciones("Radicada desde Solicitud de Cateos");
        $carpetasDto = $carpetasDao->insertCarpetasjudiciales($carpetasDto, $proveedor);

        if ($carpetasDto != "") {
            $result["type"] = "OK";
            $result["datos"] = $carpetasDto[0]->toString();
        } else {
            $result["type"] = "Error";
            $result["text"] = "NO SE GENERO LA CARPETA";
        }
        return $result;
    }

    private function guardaPartesCarpeta($paramCarpetas, $proveedor) {
        $result = array();
        if ($paramCarpetas["numImptutado"] != "0" && $paramCarpetas["numdelito"] != "0" && $paramCarpetas["numOfendido"] && $paramCarpetas["idReferencia"]) {
            $error = false;
            if (!$error) {
                #Guardamos Imputados
                $imputado = $this->guardaImputado($paramCarpetas["imputados"], $paramCarpetas["idReferencia"], $proveedor);
                if ($imputado["status"] != "OK") {
                    $result = $imputado;
                    $error = true;
                }
            }

            if (!$error) {
                #Guardamos Ofendidos
                $ofendido = $this->guardaOfendido($paramCarpetas["victimas"], $paramCarpetas["idReferencia"], $proveedor);
                if ($ofendido["status"] != "OK") {
                    $result = $ofendido;
                    $error = true;
                }
            }

            if (!$error) {
                #Guardamos los delitos
                $delito = $this->guardaDelitos($paramCarpetas["delitos"], $paramCarpetas["idReferencia"], $proveedor);
                if ($delito["status"] != "OK") {
                    $result = $delito;
                    $error = true;
                }
            }

            if (!$error) {
                #Guardamos Relacion Imputado - Delito - Ofendido
                $relacion = $this->guardaRelacion($imputado, $ofendido, $delito, $paramCarpetas["idReferencia"], $proveedor);
                if ($relacion["type"] != "OK") {
                    $result = $relacion;
                    $error = true;
                }
            }
            if (!$error) {
                return ["type" => "OK", "data" => "Guardado de Informacion"];
            }
        }
        return ["type" => "Error", "text" => json_encode($result["text"])];
    }

    private function guardaImputado($imputados, $idreferencia, $proveedor) {
        $ImputadoCDao = new ImputadoscarpetasDAO();
        $error = false;
        $result = array();
        $numeroImputados = array();
        #Ingresamos los Imputados
        foreach ($imputados as $imputado) {
            $ImputadoCDto = new ImputadoscarpetasDTO();
            $ImputadoCDto->setIdCarpetaJudicial($idreferencia);
            $etapaProcesal = (isset($imputado["cveEtapaProcesal"])) ? $imputado["cveEtapaProcesal"] : 1;
            $detenido = (isset($imputado["detenido"])) ? $imputado["detenido"] : "N";
            $tipoDetencion = (isset($imputado["cveTipoDetencion"])) ? $imputado["cveTipoDetencion"] : 4;
            $nivelI = (isset($imputado["cveNivelInstruccion"])) ? $imputado["cveNivelInstruccion"] : 11;
            $civil = (isset($imputado["cveEstadoCivil"])) ? $imputado["cveEstadoCivil"] : 3;
            $espanol = (isset($imputado["cveEspanol"])) ? $imputado["cveEspanol"] : 4;
            $alfabetismo = (isset($imputado["cveAlfabetismo"])) ? $imputado["cveAlfabetismo"] : 4;
            $dialecto = (isset($imputado["cveDialectoIndigena"])) ? $imputado["cveDialectoIndigena"] : 3;
            $familiaL = (isset($imputado["cveTipoFamiliaLinguistica"])) ? $imputado["cveTipoFamiliaLinguistica"] : 15;
            $ocupacion = (isset($imputado["cveOcupacion"])) ? $imputado["cveOcupacion"] : 15;
            $interprete = (isset($imputado["cveInterprete"])) ? $imputado["cveInterprete"] : 3;
            $fisico = (isset($imputado["cveEstadoPsicofisico"])) ? $imputado["cveEstadoPsicofisico"] : 6;
            $cereso = (isset($imputado["cveCereso"])) ? $imputado["cveCereso"] : 1;
            $residencia = (isset($imputado["cveTipoReincidencia"])) ? $imputado["cveTipoReincidencia"] : 5;
            $sobreseimiento = (isset($imputado["TieneSobreseimiento"])) ? $imputado["TieneSobreseimiento"] : "N";
            $pais = (isset($imputado["cvePaisNacimiento"])) ? $imputado["cvePaisNacimiento"] : 119;
            $ednico = (isset($imputado["cveGrupoEdnico"])) ? $imputado["cveGrupoEdnico"] : 72;
            $estado = (isset($imputado["cveEstadoNacimiento"])) ? $imputado["cveEstadoNacimiento"] : 15;
            $municipio = (isset($imputado["cveMunicipioNacimiento"])) ? $imputado["cveMunicipioNacimiento"] : "9997";
            $rfc = (isset($imputado["rfc"])) ? $imputado["rfc"] : "ACTUALIZAME";
            $curp = (isset($imputado["curp"])) ? $imputado["curp"] : "ACTUALIZAME";
            $religion = (isset($imputado["cveTipoReligion"])) ? $imputado["cveTipoReligion"] : 8;
            $activo = (isset($imputado["activo"])) ? $imputado["activo"] : "S";

            $ImputadoCDto->setCveEtapaProcesal($etapaProcesal);
            $ImputadoCDto->setDetenido($detenido);
            $ImputadoCDto->setCveTipoDetencion($tipoDetencion);
            $ImputadoCDto->setCveNivelInstruccion($nivelI);
            $ImputadoCDto->setCveEstadoCivil($civil);
            $ImputadoCDto->setCveEspanol($espanol);
            $ImputadoCDto->setCveAlfabetismo($alfabetismo);
            $ImputadoCDto->setCveDialectoIndigena($dialecto);
            $ImputadoCDto->setCveTipoFamiliaLinguistica($familiaL);
            $ImputadoCDto->setCveOcupacion($ocupacion);
            $ImputadoCDto->setCveInterprete($interprete);
            $ImputadoCDto->setCveEstadoPsicofisico($fisico);
            $ImputadoCDto->setCveCereso($cereso);
            $ImputadoCDto->setCveTipoReincidencia($residencia);
            $ImputadoCDto->setTieneSobreseimiento($sobreseimiento);
            $ImputadoCDto->setCveGrupoEdnico($ednico);
            if ($pais == 119) {
                $ImputadoCDto->setCvePaisNacimiento($pais);
                $ImputadoCDto->setcveEstadoNacimiento($estado);
                $ImputadoCDto->setCveMunicipioNacimiento($municipio);
            } else {
                $ImputadoCDto->setMunicipioNacimiento("ACTUALIZAME");
            }
            $ImputadoCDto->setRfc("");
            $ImputadoCDto->setCurp("");
            $ImputadoCDto->setIngresoMensual("0");
            $ImputadoCDto->setAlias("ACTUALIZAME");
            $ImputadoCDto->setCveTipoReligion($religion);
            $ImputadoCDto->setActivo($activo);
            $tipoPersona = (isset($imputado["TipoPersona"])) ? $imputado["TipoPersona"] : $imputado["cveTipoPersona"];
            $ImputadoCDto->setCveTipoPersona($tipoPersona);
            $genero = (isset($imputado["Genero"])) ? $imputado["Genero"] : $imputado["cveGenero"];
            $ImputadoCDto->setCveGenero($genero);
            $domicilio = (isset($imputado["Domicilio"])) ? $imputado["Domicilio"] : "ACTUALIZAME";
            $ImputadoCDto->setEstadoNacimiento($domicilio);
            $alias = (isset($imputado["Alias"])) ? $imputado["Alias"] : "ACTUALIZAME";
            $ImputadoCDto->setAlias($alias);

            if ($tipoPersona != 1) {
                $nombre = (isset($imputado["NombreMoral"])) ? utf8_decode($imputado["NombreMoral"]) : utf8_encode($imputado["nombreMoral"]);
                $ImputadoCDto->setNombreMoral($nombre);
                $ImputadoCDto->setNombre('');
                $ImputadoCDto->setPaterno('');
                $ImputadoCDto->setMaterno('');
            } else {
                $nombre = (isset($imputado["Nombre"])) ? utf8_decode($imputado["Nombre"]) : utf8_encode($imputado["nombre"]);
                $paterno = (isset($imputado["Paterno"])) ? utf8_decode($imputado["Paterno"]) : utf8_encode($imputado["paterno"]);
                $materno = (isset($imputado["Materno"])) ? utf8_decode($imputado["Materno"]) : utf8_encode($imputado["materno"]);
                $ImputadoCDto->setNombre($nombre);
                $ImputadoCDto->setPaterno($paterno);
                $ImputadoCDto->setMaterno($materno);
                $ImputadoCDto->setNombreMoral("");
            }

            $ImputadoCDto = $ImputadoCDao->insertImputadoscarpetas($ImputadoCDto, $proveedor);
            if ($ImputadoCDto != "") {
                $numeroImputados[] = $ImputadoCDto[0]->getIdImputadoCarpeta();
                #Guardamos al defensor Ofendido
                $defensorDto = new DefensoresimputadoscarpetasDTO();
                $defensorDao = new DefensoresimputadoscarpetasDAO();
                $defensorDto->setActivo("S");
                $defensorDto->setCveTipoDefensor(5);
                $defensorDto->setIdImputadoCarpeta($ImputadoCDto[0]->getIdImputadoCarpeta());
                $defensorDto->setNombre("ACTUALIZAME");
                $defensorDto = $defensorDao->insertDefensoresimputadoscarpetas($defensorDto, $proveedor);

                #Guardamos la nacionalidad
                $nacionalidadDto = new NacionalidadesimputadoscarpetasDTO();
                $nacionalidadDao = new NacionalidadesimputadoscarpetasDAO();
                $nacionalidadDto->setActivo("S");
                $nacionalidadDto->setCvePais($pais);
                $nacionalidadDto->setIdImputadoCarpeta($ImputadoCDto[0]->getIdImputadoCarpeta());
                $nacionalidadDto = $nacionalidadDao->insertNacionalidadesimputadoscarpetas($nacionalidadDto, $proveedor);
            } else {
                $error = true;
                $result["status"] = "Error";
                $result["text"] = "NO SE GENERO EL IMPUTADO DE LA CARPETA JUDICIAL";
                break;
            }
        }

        if (!$error) {
            $result["status"] = "OK";
            $result["numeros"] = $numeroImputados;
        }

        return $result;
    }

    private function guardaOfendido($ofendidos, $idreferencia, $proveedor) {
        $OfendidoCDao = new OfendidoscarpetasDAO();
        $error = false;
        $result = array();
        $numeroOfendido = array();
        #Ingresamos los Imputados
        foreach ($ofendidos as $ofendido) {
            $OfendidosDto = new OfendidoscarpetasDTO();
            $OfendidosDto->setIdCarpetaJudicial($idreferencia);
            $nivelI = (isset($ofendido["cveNivelInstruccion"])) ? $ofendido["cveNivelInstruccion"] : 11;
            $civil = (isset($ofendido["cveEstadoCivil"])) ? $ofendido["cveEstadoCivil"] : 3;
            $espanol = (isset($ofendido["cveEspanol"])) ? $ofendido["cveEspanol"] : 4;
            $alfabetismo = (isset($ofendido["cveAlfabetismo"])) ? $ofendido["cveAlfabetismo"] : 4;
            $dialecto = (isset($ofendido["cveDialectoIndigena"])) ? $ofendido["cveDialectoIndigena"] : 3;
            $familiaL = (isset($ofendido["cveTipoFamiliaLinguistica"])) ? $ofendido["cveTipoFamiliaLinguistica"] : 15;
            $ocupacion = (isset($ofendido["cveOcupacion"])) ? $ofendido["cveOcupacion"] : 15;
            $interprete = (isset($ofendido["cveInterprete"])) ? $ofendido["cveInterprete"] : 3;
            $fisico = (isset($ofendido["cveEstadoPsicofisico"])) ? $ofendido["cveEstadoPsicofisico"] : 6;
            $pais = (isset($ofendido["cvePaisNacimiento"])) ? $ofendido["cvePaisNacimiento"] : 119;
            $estado = (isset($ofendido["cveEstadoNacimiento"])) ? $ofendido["cveEstadoNacimiento"] : 15;
            $municipio = (isset($ofendido["municipioNacimiento"])) ? $ofendido["municipioNacimiento"] : "ACTUALIZAME";
            $cvemunicipio = (isset($ofendido["cveMunicipioNacimiento"])) ? $ofendido["cveMunicipioNacimiento"] : "9997";
            $rfc = (isset($ofendido["rfc"])) ? $ofendido["rfc"] : "";
            $curp = (isset($ofendido["curp"])) ? $ofendido["curp"] : "";
            $activo = (isset($ofendido["activo"])) ? $ofendido["activo"] : "S";

            $proteccion = (isset($ofendido["cveOrdenProteccion"])) ? $ofendido["cveOrdenProteccion"] : 8;
            $organizada = (isset($ofendido["cveVictimaDeLaDelincuenciaOrganizada"])) ? $ofendido["cveVictimaDeLaDelincuenciaOrganizada"] : 3;
            $generoviolencia = (isset($ofendido["cveVictimaDeViolenciaDeGenero"])) ? $ofendido["cveVictimaDeViolenciaDeGenero"] : 3;
            $trata = (isset($ofendido["cveVictimaDeTrata"])) ? $ofendido["cveVictimaDeTrata"] : 3;
            $grupo = (isset($ofendido["cveGrupoEdnico"])) ? $ofendido["cveGrupoEdnico"] : 72;
            $acoso = (isset($ofendido["cveVictimaDeAcoso"])) ? $ofendido["cveVictimaDeAcoso"] : 3;
            $religion = (isset($ofendido["cveTipoReligion"])) ? $ofendido["cveTipoReligion"] : 8;
            $parte = (isset($ofendido["cveTipoParte"])) ? $ofendido["cveTipoParte"] : 2;
            $OfendidosDto->setActivo($activo);
            $OfendidosDto->setMunicipioNacimiento($municipio);
            $OfendidosDto->setRfc($rfc);
            $OfendidosDto->setCurp($curp);
            $OfendidosDto->setCvePaisNacimiento($pais);
            $OfendidosDto->setCveEstadoNacimiento($estado);
            $OfendidosDto->setCveEspanol($espanol);
            $OfendidosDto->setCveNivelInstruccion($nivelI);
            $OfendidosDto->setCveEstadoCivil($civil);
            $OfendidosDto->setCveOcupacion($ocupacion);
            $OfendidosDto->setCveDialectoIndigena($dialecto);
            $OfendidosDto->setCveTipoFamiliaLinguistica($familiaL);
            $OfendidosDto->setCveEstadoPsicofisico($fisico);
            $OfendidosDto->setCveAlfabetismo($alfabetismo);
            $OfendidosDto->setCveInterprete($interprete);
            $OfendidosDto->setCveOrdenProteccion($proteccion);
            $OfendidosDto->setCveVictimaDeLaDelincuenciaOrganizada($organizada);
            $OfendidosDto->setCveVictimaDeViolenciaDeGenero($generoviolencia);
            $OfendidosDto->setCveVictimaDeTrata($trata);
            $OfendidosDto->setCveGrupoEdnico($grupo);
            $OfendidosDto->setCveVictimaDeAcoso($acoso);
            $OfendidosDto->setCveTipoReligion($religion);
            $OfendidosDto->setCveTipoParte($parte);
            $OfendidosDto->setCveMunicipioNacimiento($cvemunicipio);
            $genero = (isset($ofendido["Genero"])) ? $ofendido["Genero"] : $ofendido["cveGenero"];
            if ($genero != "") {
                $genero = $ofendido["Genero"];
            } else {
                $genero = 3;
            }
            $OfendidosDto->setCveGenero($genero);

            $tipoPersona = (isset($ofendido["TipoPersona"])) ? $ofendido["TipoPersona"] : $ofendido["cveTipoPersona"];
//            if ($tipoPersona > 3) {
//                $cveTipoPersona = 3;
//            } else {
            $cveTipoPersona = $tipoPersona;
//            }
            $OfendidosDto->setCveTipoPersona($cveTipoPersona);
            $domicilio = (isset($ofendido["Domicilio"])) ? $ofendido["Domicilio"] : "ACTUALIZAME";
            $OfendidosDto->setEstadoNacimiento($domicilio);

            if ($ofendido["TipoPersona"] == 3 || $ofendido["TipoPersona"] == 2) {
                $nombre = (isset($ofendido["NombreMoral"])) ? utf8_decode($ofendido["NombreMoral"]) : utf8_encode($ofendido["nombreMoral"]);
                if ($nombre == "") {
                    $nombre = (isset($ofendido["Nombre"])) ? utf8_decode($ofendido["Nombre"]) : utf8_encode($ofendido["nombre"]);
                    $paterno = (isset($ofendido["Paterno"])) ? utf8_decode($ofendido["Paterno"]) : utf8_encode($ofendido["paterno"]);
                    $materno = (isset($ofendido["Materno"])) ? utf8_decode($ofendido["Materno"]) : utf8_encode($ofendido["materno"]);
                    $nombre = $nombre . " " . $paterno . " " . $materno;
                }

                $OfendidosDto->setNombreMoral($nombre);
                $OfendidosDto->setNombre('');
                $OfendidosDto->setPaterno('');
                $OfendidosDto->setMaterno('');
            } else {
                $nombre = (isset($ofendido["Nombre"])) ? utf8_decode($ofendido["Nombre"]) : utf8_encode($ofendido["nombre"]);
                $paterno = (isset($ofendido["Paterno"])) ? utf8_decode($ofendido["Paterno"]) : utf8_encode($ofendido["paterno"]);
                $materno = (isset($ofendido["Materno"])) ? utf8_decode($ofendido["Materno"]) : utf8_encode($ofendido["materno"]);
                $OfendidosDto->setNombre($nombre);
                $OfendidosDto->setPaterno($paterno);
                $OfendidosDto->setMaterno($materno);
                $OfendidosDto->setNombreMoral("");
            }

            $OfendidosDto = $OfendidoCDao->insertOfendidoscarpetas($OfendidosDto, $proveedor);
            if ($OfendidosDto != "") {
                $numeroOfendido[] = $OfendidosDto[0]->getIdOfendidoCarpeta();
                #Guardamos al defensor Ofendido
                $defensorDto = new DefensoresofendidoscarpetasDTO();
                $defensorDao = new DefensoresofendidoscarpetasDAO();
                $defensorDto->setActivo("S");
                $defensorDto->setIdOfendidoCarpeta($OfendidosDto[0]->getIdOfendidoCarpeta());
                $defensorDto->setCveTipoDefensor(5);
                $defensorDto->setNombre("ACTUALIZAME");
                $defensorDto = $defensorDao->insertDefensoresofendidoscarpetas($defensorDto, $proveedor);

                #Guardamos la nacionalidad
                $nacionalidadDto = new NacionalidadesofendidoscarpetasDTO();
                $nacionalidadDao = new NacionalidadesofendidoscarpetasDAO();
                $nacionalidadDto->setActivo("S");
                $nacionalidadDto->setCvePais($pais);
                $nacionalidadDto->setIdOfendidoCarpeta($OfendidosDto[0]->getIdOfendidoCarpeta());
                $nacionalidadDto = $nacionalidadDao->insertNacionalidadesofendidoscarpetas($nacionalidadDto, $proveedor);
            } else {
                $error = true;
                $result["status"] = "Error";
                $result["text"] = "NO SE GENERO EL OFENDIDO DE LA CARPETA JUDICIAL";
                break;
            }
        }

        if (!$error) {
            $result["status"] = "OK";
            $result["numeros"] = $numeroOfendido;
        }

        return $result;
    }

    private function guardaDelitos($delitos, $idreferencia, $proveedor) {
        $DelitoCDao = new DelitoscarpetasDAO();
        $error = false;
        $result = array();
        $numeroDelito = array();
        #Ingresamos los Imputados
        foreach ($delitos as $delito) {
            $DelitoCDto = new DelitoscarpetasDTO();
            $DelitoCDto->setActivo("S");
            $DelitoCDto->setCveDelito($delito["cveDelito"]);
            $DelitoCDto->setIdCarpetaJudicial($idreferencia);
            $DelitoCDto = $DelitoCDao->insertDelitoscarpetas($DelitoCDto, $proveedor);
            if ($DelitoCDto != "") {
                $numeroDelito[] = $DelitoCDto[0]->getIdDelitoCarpeta();
            } else {
                $error = true;
                $result["status"] = "Error";
                $result["text"] = "NO SE GENERO EL DELITO DE LA CARPETA JUDICIAL";
                break;
            }
        }

        if (!$error) {
            $result["status"] = "OK";
            $result["numeros"] = $numeroDelito;
        }

        return $result;
    }

    private function guardaRelacion($imputado, $ofendido, $delito, $idReferencia, $proveedor) {
        $impofedelDao = new ImpofedelcarpetasDAO();
        $error = false;
        $result = array();
        $idsRelacion = array();
        #Guardamos la relacion
        for ($i = 0; $i < count($imputado["numeros"]); $i++) {
            for ($y = 0; $y < count($delito["numeros"]); $y++) {
                for ($z = 0; $z < count($ofendido["numeros"]); $z++) {
                    $Relacionesimpofedel = new ImpofedelcarpetasDTO();
                    $Relacionesimpofedel->setIdCarpetaJudicial($idReferencia);
                    $Relacionesimpofedel->setIdImputadoCarpeta($imputado["numeros"][$i]);
                    $Relacionesimpofedel->setIdOfendidoCarpeta($ofendido["numeros"][$z]);
                    $Relacionesimpofedel->setIdDelitoCarpeta($delito["numeros"][$y]);
                    $Relacionesimpofedel->setDireccion('Actualizame');
                    $Relacionesimpofedel->setColonia('Actualizame');
                    $Relacionesimpofedel->setActivo('S');
                    $Relacionesimpofedel->setCveClasificacionDelito(4);
                    $Relacionesimpofedel->setCveRelacionImpOfe(10);
                    $Relacionesimpofedel->setCveGradoParticipacion(10);
                    $Relacionesimpofedel->setCveClasificacionDelitoOrden(5);
                    $Relacionesimpofedel->setCveConsumacion(4);
                    $Relacionesimpofedel->setCveFormaAccion(4);
                    $Relacionesimpofedel->setCveModalidad(7);
                    $Relacionesimpofedel->setCveComision(4);
                    $Relacionesimpofedel->setCveConcurso(4);
                    $Relacionesimpofedel->setCveElementoComision(6);
                    $Relacionesimpofedel->setCveTerminacion(1);
                    $Relacionesimpofedel->setFechaDelito("0000-00-00 00:00:00");

                    $Relacionesimpofedel = $impofedelDao->insertImpofedelcarpetas($Relacionesimpofedel, $proveedor);

                    if ($Relacionesimpofedel != "") {
                        $idsRelacion[] = $Relacionesimpofedel[0]->getIdImpOfeDelCarpeta();
                    } else {
                        $error = true;
                        $result["type"] = "Error";
                        $result["text"] = "NO SE GENERO LA RELACION IMPUTADO - DELITO - OFENDIDO DE LA CARPETA JUDICIAL";
                        break;
                    }
                }
            }
        }
        if (!$error) {
            $result["type"] = "OK";
            $result["ids"] = $idsRelacion;
        }
        return $result;
    }

    public function consultaCateoDetalleWS($idCateo, $juez = "") {
        if ($idCateo != "" && $idCateo != 0) {
            $resultados = $this->consultaCateosDetalle($idCateo);
            if ($resultados["type"] == "OK") {
                $juzgadosDao = new JuzgadosDAO();
                $estatussolicitudesDao = new EstatussolicitudesDAO();
                $estatussolicitudesDto = new EstatussolicitudesDTO();
                $estatussolicitudesDto = $estatussolicitudesDao->selectEstatussolicitudes($estatussolicitudesDto);

                $tiposjuzgadoresDao = new TiposjuzgadoresDAO();
                $tiposjuzgadoresDto = new TiposjuzgadoresDTO();
                $tiposjuzgadoresDto = $tiposjuzgadoresDao->selectTiposjuzgadores($tiposjuzgadoresDto);
                $json = "";
                $json .= '{"type":"OK",';
                $json .= '"data":[';
                $x = 1;
                foreach ($resultados["data"] as $resultado) {
                    // --> Actualizamo la solicitud
                    $json .= '{';
                    $json .= '"solicitudCateo":{';
                    $json .= '"idSolicitudCateo":"' . utf8_encode($resultado["solicitudCateo"]->getIdSolicitudCateo()) . '",';
                    $json .= '"caseProceedingId":"' . utf8_encode($resultado["solicitudCateo"]->getCaseProceedingId()) . '",';
                    $json .= '"numero":"' . utf8_encode($resultado["solicitudCateo"]->getNumero()) . '",';
                    $json .= '"anio":"' . utf8_encode($resultado["solicitudCateo"]->getAnio()) . '",';
                    $json .= '"cveJuzgado":"' . utf8_encode($resultado["solicitudCateo"]->getCveJuzgado()) . '",';
                    if ($resultado["solicitudCateo"]->getCveJuzgado() != "" && $resultado["solicitudCateo"]->getCveJuzgado() != 0) {
                        $juzgadosDto = new JuzgadosDTO();
                        $juzgadosDto->setCveJuzgado($resultado["solicitudCateo"]->getCveJuzgado());
                        $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                        if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                            $juzgadosDto = $juzgadosDto[0];
                            $json .= '"desJuzgado":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
                        } else {
                            $json .= '"desJuzgadoDesahoga":"",';
                        }
                    } else {
                        $json .= '"desJuzgadoDesahoga":"",';
                    }
                    $json .= '"cveCatAudiencia":"' . utf8_encode($resultado["solicitudCateo"]->getCveCatAudiencia()) . '",';
                    $json .= '"cveJuzgadoDesahoga":"' . utf8_encode($resultado["solicitudCateo"]->getCveJuzgadoDesahoga()) . '",';
                    $juzgadosDto = new JuzgadosDTO();
                    $juzgadosDto->setCveJuzgado($resultado["solicitudCateo"]->getCveJuzgadoDesahoga());
                    $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
                    if ($juzgadosDto != "" && count($juzgadosDto) > 0) {
                        $juzgadosDto = $juzgadosDto[0];
                        $json .= '"desJuzgadoDesahoga":' . json_encode(utf8_encode($juzgadosDto->getDesJuzgado())) . ',';
                    } else {
                        $json .= '"desJuzgadoDesahoga":"",';
                    }
                    $json .= '"idReferencia":"' . utf8_encode($resultado["solicitudCateo"]->getIdReferencia()) . '",';
                    $json .= '"fechaEnvio":"' . utf8_encode($resultado["solicitudCateo"]->getFechaEnvio()) . '",';
                    $json .= '"cveTipoCarpeta":"' . utf8_encode($resultado["solicitudCateo"]->getCveTipoCarpeta()) . '",';
                    $json .= '"carpetaInv":"' . utf8_encode($resultado["solicitudCateo"]->getCarpetaInv()) . '",';
                    $json .= '"nuc":"' . utf8_encode($resultado["solicitudCateo"]->getNuc()) . '",';
                    $json .= '"cveUsuario":"' . utf8_encode($resultado["solicitudCateo"]->getCveUsuario()) . '",';
                    $listaUsuarios = "";
                    try {
                        $UsuarioCliente = new UsuarioCliente();
                        $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($resultado["solicitudCateo"]->getCveUsuario()), true);
                        ob_end_clean();
                    } catch (Exception $ex) {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL CONSUMIR WEB SERVICE DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
                    }
                    $nombreMP = "NO ENCONTRADO EN GESTION";
                    if ($listaUsuarios != "") {
                        $nombreMP = $listaUsuarios["data"][0]["nombre"] . " " . $listaUsuarios["data"][0]["paterno"] . " " . $listaUsuarios["data"][0]["materno"];
                    }
                    $json .= '"nombreUsuario":"' . utf8_encode($nombreMP) . '",';
                    $json .= '"cveAdscripcionSolicita":"' . utf8_encode($resultado["solicitudCateo"]->getCveAdscripcionSolicita()) . '",';
                    $json .= '"cveEstatusSolicitudCateo":"' . utf8_encode($resultado["solicitudCateo"]->getCveEstatusSolicitudCateo()) . '",';
                    $desEstatusSolicitud = "";
                    foreach ($estatussolicitudesDto as $estatusSolicitud) {
                        if ($estatusSolicitud->getCveEstatusSolicitud() == $resultado["solicitudCateo"]->getCveEstatusSolicitudCateo()) {
                            $desEstatusSolicitud = $estatusSolicitud->getDesEstatusSolicitud();
                            break;
                        }
                    }
                    $json .= '"descEstatusSolicitudCateo":"' . utf8_encode($desEstatusSolicitud) . '",';
                    $json .= '"observaciones":' . json_encode(utf8_encode($resultado["solicitudCateo"]->getObservaciones())) . ',';
                    $fechaHoraRegistro = explode(" ", utf8_encode($resultado["solicitudCateo"]->getFechaRegistro()));
                    $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                    $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                    $horaRegistro = $fechaHoraRegistro[1];
                    $json .= '"fechaRegistro":"' . $fechaRegistro . " " . $horaRegistro . '",';
                    $json .= '"fechaActualizacion":"' . utf8_encode($resultado["solicitudCateo"]->getFechaActualizacion()) . '"';
                    $json .= '}';
                    $json .= ',"cateo":{';
                    $json .= '"idCateo":"' . utf8_encode($resultado["cateo"]->getIdCateo()) . '",';
                    $json .= '"idSolicitudCateo":"' . utf8_encode($resultado["cateo"]->getIdSolicitudCateo()) . '",';
                    $json .= '"cveRespuestaSolicitudCateo":"' . utf8_encode($resultado["cateo"]->getCveRespuestaSolicitudCateo()) . '",';
                    #Obtenemos la Descripcion de la Respuesta
                    $respSolicitudCateoDTO = new RespuestasolicitudcateoDTO();
                    $respSolicitudCateoDAO = new RespuestasolicitudcateoDAO();
                    $respSolicitudCateoDTO->setActivo("S");
                    $respSolicitudCateoDTO->setCveRespuestaSolicitudCateo($resultado["cateo"]->getCveRespuestaSolicitudCateo());
                    $respSolicitudCateoDTO = $respSolicitudCateoDAO->selectRespuestasolicitudcateo($respSolicitudCateoDTO);
                    if ($respSolicitudCateoDTO != "") {
                        $json .= '"desRespuestaSolicitudCateo":"' . utf8_encode($respSolicitudCateoDTO[0]->getDesRespuestaSolicitudCateo()) . '",';
                    } else {
                        $json .= '"desRespuestaSolicitudCateo":"",';
                    }
                    $json .= '"numeroCateo":"' . utf8_encode($resultado["cateo"]->getNumeroCateo()) . '",';
                    $json .= '"anioCateo":"' . utf8_encode($resultado["cateo"]->getAnioCateo()) . '",';
                    $json .= '"solicitud":' . json_encode(utf8_encode(preg_replace("/\n/", "<br>", $resultado["cateo"]->getSolicitud()))) . ',';
                    $json .= '"negada":' . json_encode(utf8_encode($resultado["cateo"]->getNegada())) . ',';
                    $json .= '"concedida":' . json_encode(utf8_encode($resultado["cateo"]->getConcedida())) . ',';
                    $json .= '"fechaPractica":"' . utf8_encode($resultado["cateo"]->getFechaPractica()) . '",';
                    $json .= '"horaPractica":"' . utf8_encode($resultado["cateo"]->getHoraPractica()) . '",';
                    $json .= '"horasPractica":"' . utf8_encode($resultado["cateo"]->getHorasPractica()) . '",';
                    $json .= '"fechaInforme":"' . utf8_encode($resultado["cateo"]->getFechaInforme()) . '",';
                    $json .= '"horaInforme":"' . utf8_encode($resultado["cateo"]->getHoraInforme()) . '",';
                    $json .= '"horasInforme":"' . utf8_encode($resultado["cateo"]->getHorasInforme()) . '",';
                    $json .= '"fechaRespuesta":"' . utf8_encode($resultado["cateo"]->getFechaRespuesta()) . '",';
                    $json .= '"qr":"' . utf8_encode($resultado["cateo"]->getQr()) . '",';
                    $json .= '"firmaDigital":"' . utf8_encode($resultado["cateo"]->getFirmaDigital()) . '",';
                    $json .= '"selloDigital":"' . utf8_encode($resultado["cateo"]->getSelloDigital()) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($resultado["cateo"]->getFechaRegistro()) . '",';
                    $json .= '"fechaActualizacion":"' . utf8_encode($resultado["cateo"]->getFechaActualizacion()) . '",';
                    $json .= '"email":"' . utf8_encode($resultado["cateo"]->getEmail()) . '",';
                    $json .= '"motivoCancelacion":"' . utf8_encode($resultado["cateo"]->getMotivoCancelacion()) . '"';
                    $json .= '}';
                    $json .= ',"apelacion":{';
                    if ($resultado["apelacion"] != "") {
                        $json .= '"idApelacionCateo":"' . utf8_encode($resultado["apelacion"]->getIdApelacionCateo()) . '",';
                        $json .= '"idCateo":"' . utf8_encode($resultado["apelacion"]->getIdCateo()) . '",';
                        $json .= '"agravios":' . json_encode(utf8_encode($resultado["apelacion"]->getAgravios())) . ',';
                        $json .= '"escritoApelacion":' . json_encode(utf8_encode($resultado["apelacion"]->getEscritoApelacion())) . ',';
                        $json .= '"acuerdo":' . json_encode(utf8_encode($resultado["apelacion"]->getAcuerdo())) . ',';
                        $json .= '"resolucionSala":' . json_encode(utf8_encode($resultado["apelacion"]->getResolucionSala())) . '';
                    }
                    $json .= '}';
                    $countObjetos = 1;
                    $json .= ',"objetos":[';
                    if (count($resultado["objetos"]) > 0 && $resultado["objetos"] != "") {
                        foreach ($resultado["objetos"] as $objeto) {
                            $json .= '{';
                            $json .= '"idObjeto":"' . ($objeto->getIdObjeto()) . '",';
                            $json .= '"idSolicitudCateo":"' . ($objeto->getIdSolicitudCateo()) . '",';
                            $json .= '"desObjeto":' . json_encode(utf8_encode(($objeto->getDesObjeto()))) . ',';
                            $json .= '"domicilio":' . json_encode(utf8_encode(($objeto->getDomicilio()))) . ',';
                            $json .= '"fechaRegistro":"' . ($objeto->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . ($objeto->getFechaActualizacion()) . '",';
                            $json .= '"cveOrigen":"' . ($objeto->getCveOrigen()) . '"';
                            $json .= '}';
                            $countObjetos++;
                            if ($countObjetos <= count($resultado["objetos"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';
                    $countPersonas = 1;
                    $json .= ',"personas":[';
                    if (count($resultado["personas"]) > 0 && $resultado["personas"] != "") {
                        foreach ($resultado["personas"] as $persona) {
                            $json .= '{';
                            $json .= '"idPersona":' . json_encode(utf8_encode(($persona->getIdPersona()))) . ',';
                            $json .= '"idSolicitudCateo":' . json_encode(utf8_encode(($persona->getIdSolicitudCateo()))) . ',';
                            $json .= '"paterno":' . json_encode(utf8_encode(($persona->getPaterno()))) . ',';
                            $json .= '"materno":' . json_encode(utf8_encode(($persona->getMaterno()))) . ',';
                            $json .= '"nombre":' . json_encode(utf8_encode(($persona->getNombre()))) . ',';
                            $json .= '"domicilio":' . json_encode(utf8_encode(($persona->getDomicilio()))) . ',';
                            $json .= '"cveMunicipio":' . json_encode(utf8_encode(($persona->getCveMunicipio()))) . ',';
                            $json .= '"cveGenero":' . json_encode(utf8_encode(($persona->getCveGenero()))) . ',';
                            $json .= '"cveOrigen":' . json_encode(utf8_encode(($persona->getCveOrigen()))) . '';
                            $json .= '}';
                            $countPersonas++;
                            if ($countPersonas <= count($resultado["personas"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';
                    $countImputados = 1;
                    $json .= ',"imputados":[';
                    if (count($resultado["imputados"]) > 0 && $resultado["imputados"] != "") {
                        foreach ($resultado["imputados"] as $imputado) {
                            $json .= '{';
                            $json .= '"idImputadoCateo":"' . ($imputado->getIdImputadoCateo()) . '",';
                            $json .= '"idSolicitudCateo":"' . ($imputado->getIdSolicitudCateo()) . '",';
                            $json .= '"activo":"' . ($imputado->getActivo()) . '",';
                            $json .= '"nombre":' . json_encode(utf8_encode($imputado->getNombre())) . ',';
                            $json .= '"paterno":' . json_encode(utf8_encode($imputado->getPaterno())) . ',';
                            $json .= '"materno":' . json_encode(utf8_encode($imputado->getMaterno())) . ',';
                            $json .= '"alias":' . json_encode(utf8_encode($imputado->getAlias())) . ',';
                            $json .= '"cveGenero":"' . ($imputado->getCveGenero()) . '",';
                            $json .= '"detenido":"' . ($imputado->getDetenido()) . '",';
                            $json .= '"cveTipoPersona":"' . ($imputado->getCveTipoPersona()) . '",';
                            $json .= '"nombreMoral":' . json_encode(utf8_encode($imputado->getNombreMoral())) . ',';
                            $json .= '"fechaRegistro":"' . ($imputado->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . ($imputado->getFechaActualizacion()) . '",';
                            $json .= '"domicilio":' . json_encode(utf8_encode($imputado->getDomicilio())) . ',';
                            $json .= '"telefono":' . json_encode(utf8_encode($imputado->getTelefono())) . ',';
                            $json .= '"email":' . json_encode(utf8_encode($imputado->getEmail())) . '';
                            $json .= '}';
                            $countImputados++;
                            if ($countImputados <= count($resultado["imputados"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';

                    $countOfendidos = 1;
                    $json .= ',"ofendidos":[';
                    if (count($resultado["ofendidos"]) > 0 && $resultado["ofendidos"] != "") {
                        foreach ($resultado["ofendidos"] as $ofendido) {
                            $json .= '{';
                            $json .= '"idOfendidoCateo":"' . ($ofendido->getIdOfendidoCateo()) . '",';
                            $json .= '"idSolicitudCateo":"' . ($ofendido->getIdSolicitudCateo()) . '",';
                            $json .= '"activo":"' . ($ofendido->getActivo()) . '",';
                            $json .= '"fechaRegistro":"' . ($ofendido->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . ($ofendido->getFechaActualizacion()) . '",';
                            $json .= '"nombre":' . json_encode(utf8_encode($ofendido->getNombre())) . ',';
                            $json .= '"paterno":' . json_encode(utf8_encode($ofendido->getPaterno())) . ',';
                            $json .= '"materno":' . json_encode(utf8_encode($ofendido->getMaterno())) . ',';
                            $json .= '"cveTipoPersona":"' . ($ofendido->getCveTipoPersona()) . '",';
                            $json .= '"nombreMoral":' . json_encode(utf8_encode($ofendido->getNombreMoral())) . ',';
                            $json .= '"cveGenero":"' . ($ofendido->getCveGenero()) . '",';
                            $json .= '"domicilio":' . json_encode(utf8_encode($ofendido->getDomicilio())) . ',';
                            $json .= '"telefono":' . json_encode(utf8_encode($ofendido->getTelefono())) . '';
                            $json .= '}';
                            $countOfendidos++;
                            if ($countOfendidos <= count($resultado["ofendidos"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';

                    $countDelitos = 1;
                    $json .= ',"delitos":[';
                    if (count($resultado["delitos"]) > 0 && $resultado["delitos"] != "") {
                        foreach ($resultado["delitos"] as $delito) {
                            $json .= '{';
                            $json .= '"idDelitoCateo":"' . ($delito->getIdDelitoCateo()) . '",';
                            $json .= '"idSolicitudCateo":"' . ($delito->getIdSolicitudCateo()) . '",';
                            $json .= '"cveDelito":"' . ($delito->getCveDelito()) . '",';
                            $json .= '"activo":"' . ($delito->getActivo()) . '",';
                            $json .= '"fechaRegistro":"' . ($delito->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . ($delito->getFechaActualizacion()) . '"';
                            $json .= '}';
                            $countDelitos++;
                            if ($countDelitos <= count($resultado["delitos"])) {
                                $json .= ",";
                            }
                        }
                    }

                    $json .= ']';
                    $countMinisteriosPublicos = 1;
                    $json .= ',"ministeriosPublicos":[';
                    if (count($resultado["ministeriosPublicos"]) > 0 && $resultado["ministeriosPublicos"] != "") {
                        foreach ($resultado["ministeriosPublicos"] as $ministerioPublico) {
                            $json .= '{';
                            $json .= '"idMinisterioResponsable":"' . ($ministerioPublico->getIdMinisterioResponsable()) . '",';
                            $json .= '"idSolicitudCateo":"' . ($ministerioPublico->getIdSolicitudCateo()) . '",';
                            $json .= '"nombre":' . json_encode(utf8_encode($ministerioPublico->getNombre())) . ',';
                            $json .= '"paterno":' . json_encode(utf8_encode($ministerioPublico->getPaterno())) . ',';
                            $json .= '"materno":' . json_encode(utf8_encode($ministerioPublico->getMaterno())) . ',';
                            $json .= '"fechaRegistro":"' . ($ministerioPublico->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . ($ministerioPublico->getFechaActualizacion()) . '"';
                            $json .= '}';
                            $countMinisteriosPublicos++;
                            if ($countMinisteriosPublicos <= count($resultado["ministeriosPublicos"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';

                    $countObjetosRespuesta = 1;
                    $json .= ',"objetosRespuesta":[';
                    if (count($resultado["objetosRespuesta"]) > 0 && $resultado["objetosRespuesta"] != "") {
                        foreach ($resultado["objetosRespuesta"] as $objetoRespuesta) {
                            $json .= '{';
                            $json .= '"idObjeto":"' . ($objetoRespuesta->getIdObjeto()) . '",';
                            $json .= '"idSolicitudCateo":"' . ($objetoRespuesta->getIdSolicitudCateo()) . '",';
                            $json .= '"desObjeto":' . json_encode(utf8_encode(($objetoRespuesta->getDesObjeto()))) . ',';
                            $json .= '"domicilio":' . json_encode(utf8_encode(($objetoRespuesta->getDomicilio()))) . ',';
                            $json .= '"fechaRegistro":"' . ($objetoRespuesta->getFechaRegistro()) . '",';
                            $json .= '"fechaActualizacion":"' . ($objetoRespuesta->getFechaActualizacion()) . '",';
                            $json .= '"cveOrigen":"' . ($objetoRespuesta->getCveOrigen()) . '"';
                            $json .= '}';
                            $countObjetosRespuesta++;
                            if ($countObjetosRespuesta <= count($resultado["objetosRespuesta"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';
                    $countPersonasRespuesta = 1;
                    $json .= ',"personasRespuesta":[';
                    if (count($resultado["personasRespuesta"]) > 0 && $resultado["personasRespuesta"] != "") {
                        foreach ($resultado["personasRespuesta"] as $personasRespuesta) {
                            $json .= '{';
                            $json .= '"idPersona":' . json_encode(utf8_encode(($personasRespuesta->getIdPersona()))) . ',';
                            $json .= '"idSolicitudCateo":' . json_encode(utf8_encode(($personasRespuesta->getIdSolicitudCateo()))) . ',';
                            $json .= '"paterno":' . json_encode(utf8_encode(($personasRespuesta->getPaterno()))) . ',';
                            $json .= '"materno":' . json_encode(utf8_encode(($personasRespuesta->getMaterno()))) . ',';
                            $json .= '"nombre":' . json_encode(utf8_encode(($personasRespuesta->getNombre()))) . ',';
                            $json .= '"domicilio":' . json_encode(utf8_encode(($personasRespuesta->getDomicilio()))) . ',';
                            $json .= '"cveMunicipio":' . json_encode(utf8_encode(($personasRespuesta->getCveMunicipio()))) . ',';
                            $json .= '"cveGenero":' . json_encode(utf8_encode(($personasRespuesta->getCveGenero()))) . ',';
                            $json .= '"cveOrigen":' . json_encode(utf8_encode(($personasRespuesta->getCveOrigen()))) . '';
                            $json .= '}';
                            $countPersonasRespuesta++;
                            if ($countPersonasRespuesta <= count($resultado["personasRespuesta"])) {
                                $json .= ",";
                            }
                        }
                    }
                    $json .= ']';

                    $json .= ',"juzgador":{';
                    if (count($resultado["juzgador"]) > 0 && $resultado["juzgador"] != "") {
                        $json .= '"idJuzgador":"' . utf8_encode($resultado["juzgador"]->getIdJuzgador()) . '",';
                        $json .= '"cveUsuario":"' . utf8_encode($resultado["juzgador"]->getCveUsuario()) . '",';
                        $json .= '"numEmpleado":' . json_encode(utf8_encode($resultado["juzgador"]->getNumEmpleado())) . ',';
                        $json .= '"titulo":' . json_encode(utf8_encode($resultado["juzgador"]->getTitulo())) . ',';
                        $json .= '"paterno":' . json_encode(utf8_encode($resultado["juzgador"]->getPaterno())) . ',';
                        $json .= '"materno":' . json_encode(utf8_encode($resultado["juzgador"]->getMaterno())) . ',';
                        $json .= '"nombre":"' . utf8_encode($resultado["juzgador"]->getNombre()) . '",';
                        $json .= '"cveTipoJuzgador":"' . utf8_encode($resultado["juzgador"]->getCveTipoJuzgador()) . '",';
                        $desTipoJuzgador = "";
                        foreach ($tiposjuzgadoresDto as $tipojuzgador) {
                            if ($tipojuzgador->getCveTipoJuzgador() == $resultado["juzgador"]->getCveTipoJuzgador()) {
                                $desTipoJuzgador = $tipojuzgador->getDesTipoJuzgador();
                                break;
                            }
                        }
                        $json .= '"desTipoJuzgador":"' . utf8_encode($desTipoJuzgador) . '",';
                        $json .= '"sorteo":"' . utf8_encode($resultado["juzgador"]->getSorteo()) . '",';
                        $json .= '"programable":"' . utf8_encode($resultado["juzgador"]->getProgramable()) . '",';
                        $json .= '"activo":"' . utf8_encode($resultado["juzgador"]->getActivo()) . '",';
                        $json .= '"fechaRegistro":"' . utf8_encode($resultado["juzgador"]->getFechaRegistro()) . '",';
                        $json .= '"fechaActualizacion":"' . utf8_encode($resultado["juzgador"]->getFechaActualizacion()) . '"';
                    }
                    $json .= '}';
                    // --> Obtenemos el Documento Si es que existe
                    $documentosdto = new DocumentosimgDTO();
                    $documentosdto->setIdCarpetaJudicial($resultado["cateo"]->getIdCateo());
                    $documentosdto->setCveTipoDocumento(19);
                    $documentosDAO = new DocumentosimgDAO();
                    $documentosdto = $documentosDAO->selectDocumentosimg($documentosdto);
                    if ($documentosdto != "") {
                        $documentosdto = $documentosdto[0];
                        $imagenesDto = new ImagenesDTO();
                        $imagenesDto->setActivo("S");
                        $imagenesDto->setIdDocumentoImg($documentosdto->getIdDocumentoImg());
                        $imagenesDao = new ImagenesDAO();
                        $imagenesDto = $imagenesDao->selectImagenes($imagenesDto);
                        if ($imagenesDto != "") {
                            $imagenesDto = $imagenesDto[0];
                            if (trim($imagenesDto->getRuta()) != "") {
                                $json .= ', "documento":"' . $imagenesDto->getRuta() . '"';
                                $json .= ', "tipodocumento":"1"';
                            } else if (trim($imagenesDto->getBase64())) {
                                $json .= ', "documento":"./fachadas/sigejupe/solicitudescateos/descargarArchivo.php?idComprobante=' . $resultado["cateo"]->getIdCateo() . '"';
                                $json .= ', "tipodocumento":"2"';
                            } else {
                                $json .= ', "documento":""';
                                $json .= ', "tipodocumento":"0"';
                            }
                        } else {
                            $json .= ', "documento":""';
                            $json .= ', "tipodocumento":"0"';
                        }
                    } else {
                        $json .= ', "documento":""';
                        $json .= ', "tipodocumento":"0"';
                    }
                    // --> Obtenemos el Documento SolicitudApelacion MP
                    $idApelacion = (isset($resultado["apelacion"]) ? $resultado["apelacion"]->getIdApelacionCateo() : 0);
                    $documentosdto = new DocumentosimgDTO();
                    $documentosdto->setIdCarpetaJudicial($idApelacion);
                    $documentosdto->setCveTipoDocumento(29);
                    $documentosDAO = new DocumentosimgDAO();
                    $documentosdto = $documentosDAO->selectDocumentosimg($documentosdto);
                    if ($documentosdto != "") {
                        $documentosdto = $documentosdto[0];
                        $imagenesDto = new ImagenesDTO();
                        $imagenesDto->setActivo("S");
                        $imagenesDto->setIdDocumentoImg($documentosdto->getIdDocumentoImg());
                        $imagenesDao = new ImagenesDAO();
                        $imagenesDto = $imagenesDao->selectImagenes($imagenesDto);
                        if ($imagenesDto != "") {
                            $imagenesDto = $imagenesDto[0];
                            $json .= ', "documentoMP":"' . $imagenesDto->getRuta() . '"';
                        } else {
                            $json .= ', "documentoMP":""';
                        }
                    } else {
                        $json .= ', "documentoMP":""';
                    }
                    // --> Obtenemos el Documento SolicitudApelacion Juez
                    $documentosdto = new DocumentosimgDTO();
                    $documentosdto->setIdCarpetaJudicial($idApelacion);
                    $documentosdto->setCveTipoDocumento(30);
                    $documentosDAO = new DocumentosimgDAO();
                    $documentosdto = $documentosDAO->selectDocumentosimg($documentosdto);
                    if ($documentosdto != "") {
                        $documentosdto = $documentosdto[0];
                        $imagenesDto = new ImagenesDTO();
                        $imagenesDto->setActivo("S");
                        $imagenesDto->setIdDocumentoImg($documentosdto->getIdDocumentoImg());
                        $imagenesDao = new ImagenesDAO();
                        $imagenesDto = $imagenesDao->selectImagenes($imagenesDto);
                        if ($imagenesDto != "") {
                            $imagenesDto = $imagenesDto[0];
                            $json .= ', "documentoJuez":"' . $imagenesDto->getRuta() . '"';
                        } else {
                            $json .= ', "documentoJuez":""';
                        }
                    } else {
                        $json .= ', "documentoJuez":""';
                    }
                    // --> Obtenemos el Documento SolicitudApelacion Secretario
                    $documentosdto = new DocumentosimgDTO();
                    $documentosdto->setIdCarpetaJudicial($idApelacion);
                    $documentosdto->setCveTipoDocumento(31);
                    $documentosDAO = new DocumentosimgDAO();
                    $documentosdto = $documentosDAO->selectDocumentosimg($documentosdto);
                    if ($documentosdto != "") {
                        $documentosdto = $documentosdto[0];
                        $imagenesDto = new ImagenesDTO();
                        $imagenesDto->setActivo("S");
                        $imagenesDto->setIdDocumentoImg($documentosdto->getIdDocumentoImg());
                        $imagenesDao = new ImagenesDAO();
                        $imagenesDto = $imagenesDao->selectImagenes($imagenesDto);
                        if ($imagenesDto != "") {
                            $imagenesDto = $imagenesDto[0];
                            $json .= ', "documentoSec":"' . $imagenesDto->getRuta() . '"';
                        } else {
                            $json .= ', "documentoSec":""';
                        }
                    } else {
                        $json .= ', "documentoSec":""';
                    }
                    $json .= '}';
                    $x++;
                    if ($x < count($resultados["data"])) {
                        $json .= ",";
                    }
                }
                $json .= "]";
                $json .= "}";
                return $json;
            } else {
                $resultado["status"] = "Error";
                $resultado["text"] = "NO SE ENCONTRARON RESULTADOS";
                return json_encode($resultado);
            }
        }
        $resultado["status"] = "Error";
        $resultado["text"] = "OCURRIO UN ERROR AL REALIZAR LA CONSULTA";
        return json_encode($resultado);
    }

    public function consultaImputadosCateos($param) {
        if (isset($param["imputados"]) || ($param["imputados"] != "") || isset($param['calle']) || ($param['calle'] != '') || isset($param['municipio']) || ($param['municipio'])) {
            $error = false;
            $text = "";
            $imputados = array();
            $result = array();
            try {
                $param["edicion"] = false;
                $imputados = $this->busquedaImputado($param);
                if ($imputados == "" || count($imputados) == 0) {
                    $error = true;
                }

                if (!$error) {
                    #Obteemos los Datos de la Solicitud
                    $count = 0;
                    foreach ($imputados as $imp) {
                        if ($imp["typeR"] == 'cateo' || $imp["typeR"] == "persona" || $imp['typeR'] == 'objeto') {
                            $result[$count] = $imp;
                            $result[$count]["info"] = $this->getCateo($imp["idSolicitudCateo"]);
                        } else if ($imp["typeR"] == 'orden') {
                            $result[$count] = $imp;
                            $result[$count]["info"] = $this->getOrden($imp["idSolicitudCateo"]);
                        } else if ($imp["typeR"] == 'orden') {
                            $result[$count] = $imp;
                            $result[$count]["info"] = $this->getOrden($imp["idSolicitudCateo"]);
                        } else {
                            $result["type"] = "Error";
                            $result["text"] = "NO HAY INFORMACI&Oacute;N";
                            break;
                        }
                        $count++;
                    }
                }

                if (!$error) {
                    #Obtenemos el Numero de Paginas
                    $param["edicion"] = true;
                    $total = 0;
                    $pagina = $param["pag"];
                    $param["pag"] = 1;
                    $imputados = $this->busquedaImputado($param);
                    if ($imputados != "") {
                        foreach ($imputados as $imp) {
                            $total = $total + $imp["Total"];
                        }
                    }
                    $param["pag"] = $pagina;
                    $paginas = $this->getPaginas(["0" => $total], $param);
                    $result["type"] = "OK";
                    $result["paginas"] = $paginas;
                    $result["pagina"] = $param["pag"];
                } else {
                    $result["type"] = "Error";
                    $result["text"] = "NO HAY INFORMACI&Oacute;N";
                }
            } catch (Exception $e) {
                $e->getMessage();
            }
            return $result;
        } else {
            return array("type" => "Error", "text" => "Ingresa almenos un Imputado");
        }
    }

    private function busquedaImputado($param) {
        $edicion = $param["edicion"];
        $cadena = $param["imputados"];
        $municipio = $param['municipio'];
        $calle = $param['calle'];
        $nombres = explode(" ", trim($param["imputados"]));
        $long = count($nombres);
        $nombre = trim($nombres[0]);
        if ($long > 1) {
            $paterno = trim($nombres[1]);
        } else {
            $paterno = '';
        }
        if ($long > 2) {
            $materno = trim($nombres[2]);
        } else {
            $materno = '';
        }

        $sql = '';
        $orden = "";
        $minpt = "";
        if ($edicion) {
            $param["fields"] = " count(*) AS Total ";
        } else {
            $param["fields"] = " i.nombre, i.paterno, i.materno, i.idImputadoCateo, i.idSolicitudCateo, concat_ws('','cateo') as typeR, i.nombreMoral ";
        }
        $sql .= " as i WHERE activo='S' ";
        if (($cadena != '') || ($calle != '') || ($municipio != '')) {
            $minpt .= ' AND ';
        }

        if ($cadena != '') {
            $minpt .= " (nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $nombre . "% %" . $paterno . "% %" . $materno . "%' ";
            $minpt .= " OR nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $cadena . "%' ";
            $minpt .= " OR nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $nombre . "% %" . $materno . "% %" . $paterno . "%' ";
            $minpt .= " OR nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $paterno . "% %" . $materno . "% %" . $nombre . "%' ";
            $minpt .= " OR nombreMoral COLLATE utf8_spanish_ci LIKE '%" . $materno . "% %" . $paterno . "% %" . $nombre . "%') ";
        }

        if ($cadena != '') {
            if (($calle != '') || ($municipio != '')) {
                $minpt .= ' AND ';
            } else {
                $minpt .= ' OR ';
            }
        }

        if ($calle != '') {
            $minpt .= " domicilio COLLATE utf8_spanish_ci LIKE '%" . $calle . "%'";
            if ($municipio != '') {
                $minpt .= ' AND ';
            } else {
                $minpt .= ' OR ';
            }
        }

        if ($municipio != '') {
            $minpt .= " domicilio COLLATE utf8_spanish_ci LIKE '%" . $municipio . "%' OR ";
        }

        if ($cadena != '') {
            $orden .= " (CONCAT_WS(' ', nombre, paterno, materno) COLLATE utf8_spanish_ci LIKE '%" . $cadena . "%'";
            $orden .= " OR CONCAT_WS(' ', nombre, paterno, materno) COLLATE utf8_spanish_ci LIKE '%" . $nombre . "% %" . $paterno . "% %" . $materno . "%'";
            $orden .= " OR CONCAT_WS(' ', nombre, materno, paterno) COLLATE utf8_spanish_ci LIKE '%" . $nombre . "% %" . $materno . "% %" . $paterno . "%'";
            $orden .= " OR CONCAT_WS(' ', paterno, materno, nombre) COLLATE utf8_spanish_ci LIKE '%" . $paterno . "% %" . $materno . "% %" . $nombre . "%'";
            $orden .= " OR CONCAT_WS(' ', materno, paterno, nombre) COLLATE utf8_spanish_ci LIKE '%" . $materno . "% %" . $paterno . "% %" . $nombre . "%')";
        }
        if ($calle != '') {
            if ($cadena != '') {
                $orden .= ' AND ';
            }
            $orden .= " domicilio COLLATE utf8_spanish_ci LIKE '%" . $calle . "%'";
        }

        if ($municipio != '') {
            if ($cadena != '' || $calle != '')
                $orden .= ' AND ';
            $orden .= " domicilio COLLATE utf8_spanish_ci LIKE '%" . $municipio . "%'";
        }

        $sql .= $minpt . $orden;
        $sql .= " UNION ALL ";
        if ($edicion) {
            $sql .= " SELECT count(*) as Total ";
        } else {
            $sql .= " SELECT p.nombre, p.materno, p.paterno, p.idPersona, p.idSolicitudCateo, concat_ws('','persona') as typeR, concat_ws('','') as nombreMoral ";
        }
        $sql .= " FROM tblpersonas as p ";
        $sql .= " WHERE  p.cveOrigen = 1 AND (";
        $sql .= $orden;
        $sql .= ") UNION ALL ";
        if ($edicion) {
            $sql .= " SELECT count(*) as Total ";
        } else {
            $sql .= " SELECT o.nombre, o.paterno, o.materno, o.idImputadoOrden, o.idSolicitudOrden, concat_ws('','orden') as typeR, o.nombreMoral ";
        }
        $sql .= " FROM tblimputadosordenes as o ";
        $sql .= " WHERE activo='S' ";
        $sql .= $minpt . $orden;
        if (($calle != '') || ($municipio != '')) {
            $sql .= ' UNION ALL ';
            if ($edicion) {
                $sql .= " SELECT count(*) as Total ";
            } else {
                $sql .= " SELECT concat_ws(' ',' ') as nombre,concat_ws(' ',' ') as paterno,concat_ws(' ',' ') as materno,concat_ws(' ',' ') as idImputadoCateo, ob.idSolicitudCateo, concat_ws('','objeto') as typeR, concat_ws('',' ') as nombreMoral ";
            }
            $sql .= ' FROM tblobjetos as ob where ob.cveorigen=1';
            if (($calle != '')) {
                $sql .= " AND ob.domicilio LIKE '%" . $calle . "%'";
            }
            if (($municipio != '')) {
                $sql .= " AND ob.domicilio LIKE '%" . $municipio . "%'";
            }
        }
        if ($edicion) {
            $sql .= " ORDER BY Total ASC ";
        } else {
            $sql .= " ORDER BY nombre ASC ";
        }
        #Buscamos Imputados
        $ImputadosDto = new ImputadoscateosDTO();
        $ImputadosDao = new ImputadoscateosDAO();
        $imputados = $ImputadosDao->selectImputadoscateos($ImputadosDto, $sql, null, $param);
        return $imputados;
    }

    private function getCateo($idSolicitud) {
        $result = array();
        $error = false;
        if ($idSolicitud) {
            $cateoDto = new CateosDTO();
            $cateoDao = new CateosDAO();
            $cateoDto->setIdSolicitudCateo($idSolicitud);
            $cateoDto = $cateoDao->selectCateos($cateoDto);
            #Informacion del Cateo
            if ($cateoDto != "") {
                $cateoDto = $cateoDto[0];
                $result["cateo"] = array_map('utf8_encode', $cateoDto->toString());
            } else {
                $error = true;
            }

            #Informacion de la Solicitud de Cateo
            if (!$error) {
                $solicitudDto = new SolicitudescateosDTO();
                $solicitudDao = new SolicitudescateosDAO();
                $solicitudDto->setIdSolicitudCateo($cateoDto->getIdSolicitudCateo());
                $solicitudDto = $solicitudDao->selectSolicitudescateos($solicitudDto);
                if ($solicitudDto != "") {
                    $solicitudDto = $solicitudDto[0];
                    $result["solicitud"] = array_map('utf8_encode', $solicitudDto->toString());
                } else {
                    $error = true;
                }
            }

            #Informacion del Juzgado del Cateo
            if (!$error) {
                $juzgadoDto = new JuzgadosDTO();
                $juzgadoDao = new JuzgadosDAO();
                $juzgadoDto->setActivo("S");
                $juzgadoDto->setCveJuzgado($solicitudDto->getCveJuzgadoDesahoga());
                $juzgadoDto = $juzgadoDao->selectJuzgados($juzgadoDto);
                if ($juzgadoDto != "") {
                    $juzgadoDto = $juzgadoDto[0];
                    $result["juzgado"] = array_map('utf8_encode', $juzgadoDto->toString());
                } else {
                    $error = true;
                }
            }

            #Obtenemos el Estatus del Cateo
            if (!$error) {
                $estatusDto = new EstatussolicitudescateosDTO();
                $estatusDao = new EstatussolicitudescateosDAO();
                $estatusDto->setActivo("S");
                $estatusDto->setCveEstatusSolicitudCateo($solicitudDto->getCveEstatusSolicitudCateo());
                $estatusDto = $estatusDao->selectEstatussolicitudescateos($estatusDto);
                if ($estatusDto != "") {
                    $result["etstaus"] = array_map('utf8_encode', $estatusDto[0]->toString());
                } else {
                    $error = true;
                }
            }

            #Obtenemos el Juez
            if (!$error) {
                $juezcateoDto = new JuzgadorescateosDTO();
                $juezcateoDao = new JuzgadorescateosDAO();
                $juezcateoDto->setActivo("S");
                $juezcateoDto->setIdSolicitudCateo($solicitudDto->getIdSolicitudCateo());
                $juezcateoDto = $juezcateoDao->selectJuzgadorescateos($juezcateoDto);
                if ($juezcateoDto != "") {
                    $juzgadorDto = new JuzgadoresDTO();
                    $juzgadorDao = new JuzgadoresDAO();
                    $juzgadorDto->setActivo("S");
                    $juzgadorDto->setIdJuzgador($juezcateoDto[0]->getIdJuzgador());
                    $juzgadorDto = $juzgadorDao->selectJuzgadores($juzgadorDto);
                    if ($juzgadorDto != "") {
                        $result["juez"] = array_map('utf8_encode', $juzgadorDto[0]->toString());
                    }
                } else {
                    $error = true;
                }
            }
        } else {
            $error = true;
        }

        if ($error) {
            $result["type"] = "Error";
        }
        return $result;
    }

    private function getOrden($idSolicitud) {
        $result = array();
        $error = false;
        if ($idSolicitud) {
            $ordenDto = new OrdenesDTO();
            $ordenDao = new OrdenesDAO();
            $ordenDto->setIdSolicitudOrden($idSolicitud);
            $ordenDto = $ordenDao->selectOrdenes($ordenDto);
            #Informacion de la Orden
            if ($ordenDto != "") {
                $ordenDto = $ordenDto[0];
                $result["orden"] = array_map('utf8_encode', $ordenDto->toString());
            } else {
                $error = true;
            }
            #Informacion de la Solicitud de Orden
            if (!$error) {
                $solicitudDto = new SolicitudesordenesDTO();
                $solicitudDao = new SolicitudesordenesDAO();
                $solicitudDto->setIdSolicitudOrden($ordenDto->getIdSolicitudOrden());
                $solicitudDto = $solicitudDao->selectSolicitudesordenes($solicitudDto);
                if ($solicitudDto != "") {
                    $solicitudDto = $solicitudDto[0];
                    $result["solicitud"] = array_map('utf8_encode', $solicitudDto->toString());
                } else {
                    $error = true;
                }
            }

            #Informacion del Juzgado de la Orden
            if (!$error) {
                $juzgadoDto = new JuzgadosDTO();
                $juzgadoDao = new JuzgadosDAO();
                $juzgadoDto->setActivo("S");
                $juzgadoDto->setCveJuzgado($solicitudDto->getCveJuzgadoDesahoga());
                $juzgadoDto = $juzgadoDao->selectJuzgados($juzgadoDto);
                if ($juzgadoDto != "") {
                    $juzgadoDto = $juzgadoDto[0];
                    $result["juzgado"] = array_map('utf8_encode', $juzgadoDto->toString());
                } else {
                    $error = true;
                }
            }


            #Obtenemos el Estatus de la Orden
            if (!$error) {
                $estatusDto = new EstatussolicitudesordenesDTO();
                $estatusDao = new EstatussolicitudesordenesDAO();
                $estatusDto->setActivo("S");
                $estatusDto->setCveEstatusSolicitudOrdenes($solicitudDto->getCveEstatusSolicitudOrden());
                $estatusDto = $estatusDao->selectEstatussolicitudesordenes($estatusDto);
                if ($estatusDto != "") {
                    $result["etstaus"] = array_map('utf8_encode', $estatusDto[0]->toString());
                } else {
                    $error = true;
                }
            }

            #Obtenemos el Juez
            if (!$error) {
                $juezordenDto = new JuzgadoresordenesDTO();
                $juezordenDao = new JuzgadoresordenesDAO();
                $juezordenDto->setActivo("S");
                $juezordenDto->setIdSolicitudOrden($solicitudDto->getIdSolicitudOrden());
                $juezordenDto = $juezordenDao->selectJuzgadoresordenes($juezordenDto);
                if ($juezordenDto != "") {
                    $juzgadorDto = new JuzgadoresDTO();
                    $juzgadorDao = new JuzgadoresDAO();
                    $juzgadorDto->setActivo("S");
                    $juzgadorDto->setIdJuzgador($juezordenDto[0]->getIdJuzgador());
                    $juzgadorDto = $juzgadorDao->selectJuzgadores($juzgadorDto);
                    if ($juzgadorDto != "") {
                        $result["juez"] = array_map('utf8_encode', $juzgadorDto[0]->toString());
                    }
                } else {
                    $error = true;
                }
            }
        } else {
            $error = true;
        }

        if ($error) {
            $result["type"] = "Error";
        }
        return $result;
    }

    public function cambioStatus($idSolicitudCateo, $cambiarStatus, $motivo) {
        $tmp = array();
        if (($idSolicitudCateo != "") && ($cambiarStatus != "") && ($motivo != '')) {
            $solicitudDto = new SolicitudescateosDTO();
            $solicitudDao = new SolicitudescateosDAO();
            $movimiento = ' Cambio de Estatus Cateos ';
            $solicitudDto->setIdSolicitudCateo($idSolicitudCateo);
            $movimiento .= ' 1.-Busca SolicitudCateo IdSolicitudCateo: ' . $idSolicitudCateo;
            $solicitudDto = $solicitudDao->selectSolicitudescateos($solicitudDto);
            if ($solicitudDto != "") {
                $movimiento .= ' Datos Encotrados: ' . json_encode($solicitudDto[0]->toString());
                // Busca que exista el estatus 
                $estatusDto = new EstatussolicitudescateosDTO();
                $estatusDao = new EstatussolicitudescateosDAO();
                $estatusDto->setActivo('S');
                $estatusDto->setCveEstatusSolicitudCateo($cambiarStatus);
                $movimiento .= ' 2.- Busca el Estatus Seleccionado: ' . $cambiarStatus;
                $estatusDto = $estatusDao->selectEstatussolicitudescateos($estatusDto);
                if ($estatusDto != '') {
                    $movimiento .= ' Datos Encontrados: ' . json_encode($estatusDto[0]->toString());
                    $solicitudUpdateDto = new SolicitudescateosDTO();
                    $solicitudUpdateDto->setIdSolicitudCateo($idSolicitudCateo);
                    $solicitudUpdateDto->setCveEstatusSolicitudCateo($cambiarStatus);
                    $movimiento .= ' 3.- Actualiza el Estatus de la Solicitud de Cateo: ' . $cambiarStatus;
                    $solicitudUpdateDto = $solicitudDao->updateSolicitudescateos($solicitudUpdateDto);
                    $movimiento .= ' Motivo de la cancelacion: ' . $motivo;
                    if ($solicitudUpdateDto != '') {
                        $movimiento .= ' Resultado: ' . json_encode($solicitudUpdateDto[0]->toString());
                        $movimiento .= ' 4.- Se actializo la solicitud de cateo';
                        $tmp['type'] = 'OK';
                        $tmp['text'] = 'SE ACTUALIZO EL ESTATUS DEL CATEO';
                    } else {
                        $movimiento .= ' NO se Actualizo la solicitud de cateo';
                        $tmp['type'] = 'Error';
                        $tmp['text'] = 'NO SE ENCONTRO ACTUALIZO LA SOLICITUD DEL CATEO';
                    }
                } else {
                    $movimiento .= ' No se encontro el Estatus de la Solicitud de Cateo ';
                    $tmp['type'] = 'Error';
                    $tmp['text'] = 'NO SE ENCONTRO EL ESTATUS DE LA SOLICTUD';
                }
            } else {
                $movimiento .= ' No se encontro la solicitud del cateo ';
                $tmp['type'] = 'Error';
                $tmp['text'] = 'NO SE ENCONTRO LA SOLICITUD';
            }
        } else {
            $movimiento .= ' No se ingresaron todos los datos ';
            $tmp['type'] = 'Error';
            $tmp['text'] = 'NO SE ENCONTRO EL IDENTIFICADOR';
        }
        /**
         * Se guarda en Bitacora
         */
        $bitacoraDto = new BitacoramovimientosDTO();
        $bitacoraDao = new BitacoramovimientosDAO();
        $bitacoraDto->setCveAccion(393);
        $bitacoraDto->setCveAdscripcion($_SESSION['cveAdscripcion']);
        $bitacoraDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
        $bitacoraDto->setFechaMovimiento(date('Y-m-d H:i:s'));
        $bitacoraDto->setObservaciones(utf8_decode($movimiento));
        $bitacoraDto->setCvePerfil($_SESSION['cvePerfil']);
        $bitacoraDto = $bitacoraDao->insertBitacoramovimientos($bitacoraDto);
        if ($bitacoraDto == '') {
            $tmp['type'] = 'Error';
            $tmp['text'] = 'No se guardo en Bitacora';
        }
        return $tmp;
    }

}

?>
