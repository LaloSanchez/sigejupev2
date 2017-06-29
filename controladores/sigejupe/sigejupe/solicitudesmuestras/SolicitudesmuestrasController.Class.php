<?php

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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesmuestras/SolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesmuestras/SolicitudesmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/respuestamuestra/RespuestamuestraDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/respuestamuestra/RespuestamuestraDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/respuestasolicitudmuestra/RespuestasolicitudmuestraDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/respuestasolicitudmuestra/RespuestasolicitudmuestraDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosmuestras/ImputadosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosmuestras/ImputadosmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidosmuestras/OfendidosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidosmuestras/OfendidosmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitosmuestras/DelitosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitosmuestras/DelitosmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../contadores/ContadoresController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresmuestras/JuzgadoresmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresmuestras/JuzgadoresmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ministeriosresponsablesmuestras/MinisteriosresponsablesmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ministeriosresponsablesmuestras/MinisteriosresponsablesmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudesmuestras/EstatussolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudesmuestras/EstatussolicitudesmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tomamuestras/TomamuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tomamuestras/TomamuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoranotificaciones/BitacoranotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoranotificaciones/BitacoranotificacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/chatmessages/ChatMessagesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/chatmessages/ChatMessagesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/chatcerrados/ChatCerradosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/chatcerrados/ChatCerradosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../fachadas/sigejupe/imagenes/ImagenesFacade.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionmuestras/ProgramacionmuestrasController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionmuestras/ProgramacionmuestrasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosjuzgadores/TelefonosjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosjuzgadores/TelefonosjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidosmuestras/TutoresofendidosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidosmuestras/TutoresofendidosmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/selloDigital/Encryption.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/ssh/asterisk.php");
include_once(dirname(__FILE__) . "/../../../tribunal/correo/EmailHELPER.Class.php");
include_once(dirname(__FILE__) . "/../../../Helpers/chatapi/sendwhats.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");
include_once(dirname(__FILE__) . "/../../../tribunal/json/JsonDecod.Class.php");

class SolicitudesmuestrasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarSolicitudesmuestras($SolicitudesmuestrasDto) {
        $SolicitudesmuestrasDto->setidSolicitudMuestra(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getidSolicitudMuestra()))));
        $SolicitudesmuestrasDto->setnumero(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getnumero()))));
        $SolicitudesmuestrasDto->setanio(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getanio()))));
        $SolicitudesmuestrasDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getcveJuzgado()))));
        $SolicitudesmuestrasDto->setcveJuzgadoDesahoga(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getcveJuzgadoDesahoga()))));
        $SolicitudesmuestrasDto->setidReferencia(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getidReferencia()))));
        $SolicitudesmuestrasDto->setfechaEnvio(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getfechaEnvio()))));
        $SolicitudesmuestrasDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getcveTipoCarpeta()))));
        $SolicitudesmuestrasDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getcarpetaInv()))));
        $SolicitudesmuestrasDto->setnuc(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getnuc()))));
        $SolicitudesmuestrasDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getcveUsuario()))));
        $SolicitudesmuestrasDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getcveAdscripcionSolicita()))));
        $SolicitudesmuestrasDto->setcveEstatusSolicitudMuestra(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getcveEstatusSolicitudMuestra()))));
        $SolicitudesmuestrasDto->setobservaciones(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getobservaciones()))));
        $SolicitudesmuestrasDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getfechaRegistro()))));
        $SolicitudesmuestrasDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($SolicitudesmuestrasDto->getfechaActualizacion()))));
        return $SolicitudesmuestrasDto;
    }

    public function selectSolicitudesmuestras($SolicitudesmuestrasDto, $proveedor = null) {
        $SolicitudesmuestrasDto = $this->validarSolicitudesmuestras($SolicitudesmuestrasDto);
        $SolicitudesmuestrasDao = new SolicitudesmuestrasDAO();
        $SolicitudesmuestrasDto = $SolicitudesmuestrasDao->selectSolicitudesmuestras($SolicitudesmuestrasDto, $proveedor);
        return $SolicitudesmuestrasDto;
    }

    public function insertSolicitudesmuestras($param = "", $proveedor = null, $origenFacade = "sistema") {
        $emailJuez = "";
        $bolStatusMailJuez = false;
        $bolStatusMailAdm = false;
        $emailAdministrador = "";
        $movimientoExtra = "";
        $tmp = "";

        if ($param != "") {
            ###
            #CAMPOS REQUERIDOS PARA CADA PASO DE LA SOLICITUD DE TOMA DE MUESTRAS
            ###
            #Paso 1: Datos 
            $juzgadoSolicitar = $param["juzgadoSolicitar"];
            $numeroCarpeta = (isset($param["numeroCarpeta"])) ? $param["numeroCarpeta"] : "";
            $anioCarpeta = (isset($param["anioCarpeta"])) ? $param["anioCarpeta"] : "";
            $cveTipoCarpeta = (isset($param["cveTipoCarpeta"])) ? $param["cveTipoCarpeta"] : "";
            $juzgadoProcedencia = $param["juzgadoProcedencia"];
            $carpetaInvestigacion = $param["carpetaInvestigacion"];
            $nuc = $param["nuc"];
            $eMailMP = $param["eMailMP"];

            #Paso 2: Datos imputados, victimas y delitos
            $imputadosArray = $param["imputadosArray"];
            $victimasArray = $param["victimasArray"];
            $tutoresArray = $param["tutoresArray"];
            $delitosArray = $param["delitosArray"];

            #Paso 3: Relacion Examens Fisicos y Toma de Muestras
            $examenesArray = $param["examensArray"];
            $muestrasArray = $param["muestrasArray"];


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

            #CONVERTIMOS A ARRAY LOS JSON - PASO 3
            $imputadosArray = json_decode($imputadosArray, true);
            $victimasArray = json_decode($victimasArray, true);
            $tutoresArray = json_decode($tutoresArray, true);
            $delitosArray = json_decode($delitosArray, true);

            $examenesArray = json_decode($examenesArray, true);
            $muestrasArray = json_decode($muestrasArray, true);

            #VALIDA INFORMACION DE LA CARPETA JUDICIAL /CARPETA DE INVESTIGACION - PASO 4
            //if (($solicitud == "")) {
            if (($solicitud == "") && ($fileSolicitud == "")) {
                $errorDatos = true;
                $mensajeErrorDatos .= " SOLICITUD DE TOMA DE MUESTRAS NO VALIDA \n";
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
                $mensajeErrorDatos .= " DEBE ESPECIFICAR POR LO MENOS UN MP RESPONSABLE PARA LA SOLICITUD DE TOMA DE MUESTRA  \n";
            }

            if (!$errorDatos) {
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
                    $CarpetasjudicialesDto->setCveTipoCarpeta($cveTipoCarpeta);
                } else {
                    if (($carpetaInvestigacion != "")) {
                        $CarpetasjudicialesDto->setCarpetaInv($carpetaInvestigacion);
                    }
                    if (($nuc != "")) {
                        $CarpetasjudicialesDto->setNuc($nuc);
                    }
                }
                $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto, "", $proveedor);
                if ($CarpetasjudicialesDto != "" && count($CarpetasjudicialesDto) > 0) {
                    $CarpetasjudicialesDto = $CarpetasjudicialesDto[0];
                    $numeroCarpeta = $CarpetasjudicialesDto->getNumero();
                    $anioCarpeta = $CarpetasjudicialesDto->getAnio();
                    $cveTipoCarpeta = $CarpetasjudicialesDto->getCveTipoCarpeta();
                    $juzgadoProcedencia = $CarpetasjudicialesDto->getCveJuzgado();
                    $carpetaInvestigacion = $CarpetasjudicialesDto->getCarpetaInv();
                    $nuc = $CarpetasjudicialesDto->getNuc();
                } else {
                    $numeroCarpeta = "";
                    $anioCarpeta = "";
                    $cveTipoCarpeta = "";
                    $juzgadoProcedencia = $juzgadoSolicitar;
                }

                #INSERTAMOS SOLICITUD DE TOMA DE MUESTRA
                if (!$error) {
                    if ($origenFacade == "sistema") {
                        $cveUsuario = $_SESSION["cveUsuarioSistema"];
                    } else {
                        $cveUsuario = $param["cveUsuario"];
                    }

                    $SolicitudesmuestrasDao = new SolicitudesmuestrasDAO();
                    $SolicitudesmuestrasDto = new SolicitudesmuestrasDTO();
                    $SolicitudesmuestrasDto->setNumero($numeroCarpeta); #numero Carpeta Judicial
                    $SolicitudesmuestrasDto->setAnio($anioCarpeta); #año Carpeta Judicial
                    $SolicitudesmuestrasDto->setCveJuzgado($juzgadoProcedencia); #juzgado en el que radica la carpeta judicial
                    $SolicitudesmuestrasDto->setCveJuzgadoDesahoga($juzgadoSolicitar); #juzgado al que se solicita la audicencia(donde se va a buscar el juez)
                    $SolicitudesmuestrasDto->setIdReferencia(""); #No requerido
                    $SolicitudesmuestrasDto->setFechaEnvio(""); #se define al contestar la toma de muestra
                    $SolicitudesmuestrasDto->setCveTipoCarpeta($cveTipoCarpeta);
                    $SolicitudesmuestrasDto->setCarpetaInv($carpetaInvestigacion);
                    $SolicitudesmuestrasDto->setNuc($nuc);
                    $SolicitudesmuestrasDto->setCveUsuario($cveUsuario); #clave del usuario que solicta la toma de muestra
                    $SolicitudesmuestrasDto->setCveAdscripcionSolicita(""); #opcional-clave de la adscripcion que solicta la toma de muestra
                    $SolicitudesmuestrasDto->setCveEstatusSolicitudMuestra("1"); #1 - REGISTRADA POR MP
                    $SolicitudesmuestrasDto->setObservaciones(""); #opcionales
                    $SolicitudesmuestrasDto = $SolicitudesmuestrasDao->insertSolicitudesmuestras($SolicitudesmuestrasDto, $proveedor);
                    if ($SolicitudesmuestrasDto != "" && count($SolicitudesmuestrasDto) > 0) {
                        $SolicitudesmuestrasDto = $SolicitudesmuestrasDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR LA INFORMACION DE LA SOLICITUD DE TOMA DE MUESTRAS");
                    }
                }

                #INSERTAMOS LA SOLICITUD
                if (!$error) {
                    if ($SolicitudesmuestrasDto->getIdSolicitudMuestra() != "" && $SolicitudesmuestrasDto->getIdSolicitudMuestra() > 0) {
                        $RMuestra = new RespuestamuestraDAO();
                        $RMuestraDto = new RespuestamuestraDTO();
                        $RMuestraDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra()); #Id de la solicitud de la toma de muestra
                        $RMuestraDto->setSolicitud(utf8_decode(preg_replace("/\'/", "\"", $solicitud))); #descripcion de la solicitud
                        $RMuestraDto->setCveRespuestaSolicitudMuestra(""); #respuesta nulla
                        $RMuestraDto->setQr("PJ");
                        $RMuestraDto->setEmail($eMailMP);
                        $RMuestraDto = $RMuestra->insertRespuestamuestra($RMuestraDto, $proveedor);
                        if ($RMuestraDto != "" && count($RMuestraDto) > 0) {
                            $RMuestraDto = $RMuestraDto[0];
                        } else {
                            $error = true;
                            $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR LA INFORMACION DE LA TOMA DE MUESTRAS");
                        }
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR: EL IDENTIFICADOR DE LA SOLICITUD VACIO O IGUAL A CERO");
                    }
                }

                #INSERTAMOS IMPUTADOS 
                if (!$error) {
                    if (count($imputadosArray) > 0 && $imputadosArray != "") {
                        $tomaMuestrasDao = new TomamuestrasDAO();
                        $ImputadosmuestrasDao = new ImputadosmuestrasDAO;
                        $count = 0;
                        foreach ($imputadosArray as $imputado) {
                            $ImputadosmuestrasDto = new ImputadosmuestrasDTO();
                            $ImputadosmuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra()); #Id de la solicitud
                            $ImputadosmuestrasDto->setActivo("S");
                            $ImputadosmuestrasDto->setCveOrigen("1");
                            $ImputadosmuestrasDto->setCveTipoPersona($imputado["TipoPersona"]); #1 - PERSONA FISICA
                            if ($imputado["TipoPersona"] == "1") {
                                $ImputadosmuestrasDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $imputado["Nombre"])));
                                $ImputadosmuestrasDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $imputado["Paterno"])));
                                $ImputadosmuestrasDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $imputado["Materno"])));
                                $ImputadosmuestrasDto->setAlias(utf8_decode(preg_replace("/\'/", "\"", $imputado["Alias"])));
                                $ImputadosmuestrasDto->setCveGenero($imputado["Genero"]);
                                $ImputadosmuestrasDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $imputado["Domicilio"])));
                                $ImputadosmuestrasDto->setTelefono($imputado["Telefono"]);
                                $ImputadosmuestrasDto->setEmail($imputado["Email"]);
                                $ImputadosmuestrasDto->setDetenido($imputado["Detenido"]);
                            } else {
                                $ImputadosmuestrasDto->setNombreMoral(utf8_decode(preg_replace("/\'/", "\"", $imputado["NombreMoral"])));
                            }

                            $ImputadosmuestrasDto = $ImputadosmuestrasDao->insertImputadosmuestras($ImputadosmuestrasDto, $proveedor);
                            if ($ImputadosmuestrasDto != "" && count($ImputadosmuestrasDto) > 0) {
                                $ImputadosmuestrasDto = $ImputadosmuestrasDto[0];
                                #Guardamos las Tomas de Muestra de Este Imputado
                                if (count($muestrasArray) > 0 && $muestrasArray != "") {
                                    foreach ($muestrasArray as $muestras) {
                                        if ($count == $muestras["id"] && $muestras["tipo"] == "tblImputados") {
                                            $tomaMuestrasDto = new TomamuestrasDTO();
                                            $tomaMuestrasDto->setCveMuestra($muestras["idItem"]);
                                            $tomaMuestrasDto->setIdImputadoMuestra($ImputadosmuestrasDto->getIdImputadoMuestra());
                                            $tomaMuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra());
                                            $tomaMuestrasDto = $tomaMuestrasDao->insertTomamuestras($tomaMuestrasDto, $proveedor);
                                            if ($tomaMuestrasDto != "") {
                                                
                                            }
                                        }
                                    }
                                }

                                #Guardamos los Examenes Fisicos
                                if (count($examenesArray) > 0 && $examenesArray != "") {
                                    foreach ($examenesArray as $examenes) {
                                        if ($count == $examenes["id"] && $examenes["tipo"] == "tblImputados") {
                                            $tomaMuestrasDto = new TomamuestrasDTO();
                                            $tomaMuestrasDto->setCveMuestra($examenes["idItem"]);
                                            $tomaMuestrasDto->setIdImputadoMuestra($ImputadosmuestrasDto->getIdImputadoMuestra());
                                            $tomaMuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra());
                                            $tomaMuestrasDto = $tomaMuestrasDao->insertTomamuestras($tomaMuestrasDto, $proveedor);
                                            if ($tomaMuestrasDto != "") {
                                                
                                            }
                                        }
                                    }
                                }
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EL IMPUTADO:" . ($count + 1));
                                break;
                            }
                            $count++;
                        }
                    }
                }

                #INSERTAMOS OFENDIDOS
                if (!$error) {
                    if (count($victimasArray) > 0 && $victimasArray != "") {
                        $OfendidosmuestrasDao = new OfendidosmuestrasDAO();
                        $count = 0;
                        foreach ($victimasArray as $victima) {
                            $OfendidosmuestrasDto = new OfendidosmuestrasDTO();
                            $OfendidosmuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra()); #Id de la solicitud
                            $OfendidosmuestrasDto->setActivo("S");
                            $OfendidosmuestrasDto->setCveOrigen("1");
                            $OfendidosmuestrasDto->setCveTipoPersona($victima["TipoPersona"]); #1 - PERSONA FISICA
                            if ($victima["TipoPersona"] == "1" || $victima["TipoPersona"] == "4" || $victima["TipoPersona"] == "5") {
                                $OfendidosmuestrasDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $victima["Nombre"])));
                                $OfendidosmuestrasDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $victima["Paterno"])));
                                $OfendidosmuestrasDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $victima["Materno"])));
                                $OfendidosmuestrasDto->setCveGenero($victima["Genero"]);
                                $OfendidosmuestrasDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $victima["Domicilio"])));
                                $OfendidosmuestrasDto->setTelefono($victima["Telefono"]);
                                $OfendidosmuestrasDto->setEmail($victima["Email"]);
                            } else {
                                $OfendidosmuestrasDto->setNombreMoral(utf8_decode(preg_replace("/\'/", "\"", $victima["NombreMoral"])));
                            }

                            $OfendidosmuestrasDto = $OfendidosmuestrasDao->insertOfendidosmuestras($OfendidosmuestrasDto, $proveedor);

                            if ($OfendidosmuestrasDto != "" && count($OfendidosmuestrasDto) > 0) {
                                #Guardamos las Tomas de Muestra del Ofendido
                                if (count($muestrasArray) > 0 && $muestrasArray != "") {
                                    foreach ($muestrasArray as $muestras) {
                                        if ($count == $muestras["id"] && $muestras["tipo"] == "tblVictimas") {
                                            $tomaMuestrasDto = new TomamuestrasDTO();
                                            $tomaMuestrasDto->setCveMuestra($muestras["idItem"]);
                                            $tomaMuestrasDto->setIdOfendidoMuestra($OfendidosmuestrasDto[0]->getIdOfendidoMuestra());
                                            $tomaMuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra());
                                            $tomaMuestrasDto = $tomaMuestrasDao->insertTomamuestras($tomaMuestrasDto, $proveedor);
                                            if ($tomaMuestrasDto != "") {
                                                
                                            }
                                        }
                                    }
                                }

                                #Guardamos los Examenes Fisicos
                                if (count($examenesArray) > 0 && $examenesArray != "") {
                                    foreach ($examenesArray as $examenes) {
                                        if ($count == $examenes["id"] && $examenes["tipo"] == "tblVictimas") {
                                            $tomaMuestrasDto = new TomamuestrasDTO();
                                            $tomaMuestrasDto->setCveMuestra($examenes["idItem"]);
                                            $tomaMuestrasDto->setIdOfendidoMuestra($OfendidosmuestrasDto[0]->getIdOfendidoMuestra());
                                            $tomaMuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra());
                                            $tomaMuestrasDto = $tomaMuestrasDao->insertTomamuestras($tomaMuestrasDto, $proveedor);
                                            if ($tomaMuestrasDto != "") {
                                                
                                            }
                                        }
                                    }
                                }

                                foreach ($tutoresArray as $tutor) {
                                    if ($tutor["IdOfendido"] == $count) {
                                        // Guardamos el tutor del ofendido
                                        $tutorVictimaDto = new TutoresofendidosmuestrasDTO();
                                        $tutorVictimaDao = new TutoresofendidosmuestrasDAO();
                                        $tutorVictimaDto->setActivo("S");
                                        $tutorVictimaDto->setCveGenero(utf8_decode(preg_replace("/\'/", "\"", $tutor["Genero"])));
                                        $tutorVictimaDto->setCveTipoTutor(utf8_decode(preg_replace("/\'/", "\"", $tutor["TipoTutor"])));
                                        $tutorVictimaDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $tutor["Domicilio"])));
                                        $tutorVictimaDto->setEmail(utf8_decode(preg_replace("/\'/", "\"", $tutor["Email"])));
                                        $tutorVictimaDto->setFechaNacimiento(utf8_decode(preg_replace("/\'/", "\"", $tutor["FechaNacimiento"])));
                                        $tutorVictimaDto->setIdOfendidoMuestra(utf8_decode(preg_replace("/\'/", "\"", $OfendidosmuestrasDto[0]->getIdOfendidoMuestra())));
                                        $tutorVictimaDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $tutor["Materno"])));
                                        $tutorVictimaDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $tutor["Nombre"])));
                                        $tutorVictimaDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $tutor["Paterno"])));
                                        $tutorVictimaDto->setTelefono(utf8_decode(preg_replace("/\'/", "\"", $tutor["Telefono"])));
                                        $tutorVictimaDto = $tutorVictimaDao->insertTutoresofendidosmuestras($tutorVictimaDto, $proveedor);
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
                    }
                }

                #INSERTAMOS DELITOS
                if (!$error) {
                    if (count($delitosArray) > 0 && $delitosArray != "") {
                        $DelitosmuestrasDao = new DelitosmuestrasDAO();
                        $count = 1;
                        foreach ($delitosArray as $delito) {
                            $DelitosmuestrasDto = new DelitosmuestrasDTO();
                            $DelitosmuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra()); #Id de la solicitud
                            $DelitosmuestrasDto->setActivo("S");
                            $DelitosmuestrasDto->setCveDelito($delito["cveDelito"]);
                            $DelitosmuestrasDto = $DelitosmuestrasDao->insertDelitosmuestras($DelitosmuestrasDto, $proveedor);
                            if ($DelitosmuestrasDto != "" && count($DelitosmuestrasDto) > 0) {
                                
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EL DELITO:" . $count);
                                break;
                            }
                            $count++;
                        }
                    }
                }

                #OBTENERMOS EL NUMERO DEL CONTADOR
                if (!$error) {
                    $contadoresDto = new ContadoresDTO();
                    $contadoresDto->setCveJuzgado($juzgadoSolicitar);
                    $contadoresDto->setCveTipoActuacion(25);
                    $contadoresDto->setCveTipoCarpeta("");
                    $contadoresDto->setAnio(date("Y"));
                    $DelitosmuestrasDto = new ContadoresController();
                    $contadoresDto = $DelitosmuestrasDto->getContador($contadoresDto, $proveedor);
                    if ($contadoresDto != "" && count($contadoresDto) > 0) {
                        $contadoresDto = $contadoresDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER EL NUMERO DE TOMA DE MUESTRA DEL JUZGADO");
                    }
                }

                #OBTENEMOS FECHA Y HORA DE MYSQL
                if (!$error) {
                    $fecha = $SolicitudesmuestrasDao->selectFecha($proveedor);
                    if ($fecha != "") {
                        
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER LA FECHA DEL SERVIDOR");
                    }

                    $hora = $SolicitudesmuestrasDao->selectHora($proveedor);
                    if ($hora != "") {
                        
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER LA HORA DEL SERVIDOR");
                    }
                }

                #GENERAMOS QR Y SELLO DIGITAL
                if (!$error) {
                    #GENERAMOS QR
//                    $_SESSION['CveUsuarioSistema'] = "80";
                    $fechaHora = $SolicitudesmuestrasDao->selectFechaHoraMySql($proveedor);
                    $fechaHora = str_replace(array(":", " ", "-"), "", $fechaHora);
                    $qrMuestra = "PJ" . str_pad($contadoresDto->getNumero(), 6, '0', STR_PAD_LEFT) . $contadoresDto->getAnio() . "C" . str_pad($carpetaInvestigacion, 17, '0', STR_PAD_LEFT) . str_pad($fechaHora, 19, '0', STR_PAD_LEFT) . str_pad($_SESSION['cveUsuarioSistema'], 6, '0', STR_PAD_LEFT);

                    #GENERAMOS SELLO DIGITAL
                    $cadenaOri = "||" . $qrMuestra;
                    $cadenaOri.="|" . "PODER JUDICIAL DEL ESTADO DE MEXICO";
                    $cadenaOri.="|" . "SISTEMA DE GESTION JUDICIAL PENAL Y ORAL";
                    $cadenaOri.="|" . "ANIO " . $contadoresDto->getAnio();
                    $cadenaOri.="|" . $fecha . $hora . "||";
                    $cadenaOri = utf8_encode($cadenaOri);
                    $converter = new Encryption;
                    $converter->setPrivateKey($this->extraeLlavePrivada("./../../../tribunal/selloDigital/keystoreTSJEDOMEX.key.pem"));
                    $strSelloDig = $converter->encode($cadenaOri);

                    if ($qrMuestra != "" && $cadenaOri != "" && $strSelloDig != "") {
                        
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL GENERAL LOS CODIGOS DE VERIFICACION(QR o SELLO DIGITAL)");
                    }
                }
                #BUSCA/REGISTRA JUZGADOR PARA CONTESTAR LA SOLICITUD
                if (!$error) {
                    $idJuezMuestra = 0;
                    $programacionmuestrasController = new ProgramacionmuestrasController();
                    $arrayJuzgador = array();
                    $juzgadoJuezDto = new JuzgadosDTO();
                    $juzgadoJuezDto->setCveJuzgado($juzgadoSolicitar);
                    $programacionCateosDto = new ProgramacionmuestrasDTO();
                    $programacionCateosDto->setFechaInicio(date("Y-m-d H:i:s"));
                    $arrayJuzgador = $programacionmuestrasController->juezTomaDeMuestra($juzgadoJuezDto, $programacionCateosDto, $proveedor);
                    if ($arrayJuzgador != "" && $arrayJuzgador["estatus"] == "ok") {
                        $idJuezMuestra = $arrayJuzgador["data"]["idJuzgador"];
                        if ((int) $idJuezMuestra >= 1) {
                            $JuzgadoresrespmuestrasDao = new JuzgadoresmuestrasDAO();
                            $JuzgadoresrespmuestrasDto = new JuzgadoresmuestrasDTO();
                            $JuzgadoresrespmuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra());
                            $JuzgadoresrespmuestrasDto->setIdJuzgador($idJuezMuestra);
                            $JuzgadoresrespmuestrasDto->setActivo("S");
                            $JuzgadoresrespmuestrasDto = $JuzgadoresrespmuestrasDao->insertJuzgadoresmuestras($JuzgadoresrespmuestrasDto, $proveedor);
                            if ($JuzgadoresrespmuestrasDto != "" && count($JuzgadoresrespmuestrasDto) > 0) {
                                
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR LA RELACION JUZGADOR - SOLICITUD DE CATEO");
                            }
                        } else if ((int) $idJuezMuestra == 0) {
                            $error = true;
                            $tmp = array("type" => "Error", "text" => "ERROR NO EXISTEN LOS HORARIOS DE CATEO DEFINIDOS PARA EL JUZGADO");
                        } else if ((int) $idJuezMuestra == -1) {
                            $error = true;
                            $tmp = array("type" => "Error", "text" => "ERROR NO EXISTEN JUEZ DISPONLIBLE PARA DICHA SOLICITUD DE CATEO");
                        }
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => utf8_encode($arrayJuzgador["text"]));
                    }
                }

                #INSERTAMOS MPS RESPONSABLES
                if (!$error) {
                    if (count($mpsResponsablesArray) > 0 && $mpsResponsablesArray != "") {
                        $MinisteriosresponsablesDao = new MinisteriosresponsablesmuestrasDAO();
                        $count = 1;
                        foreach ($mpsResponsablesArray as $mpResponsable) {
                            $MinisteriosresponsablesDto = new MinisteriosresponsablesmuestrasDTO();
                            $MinisteriosresponsablesDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra()); #Id de la solicitud
                            $MinisteriosresponsablesDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $mpResponsable["Nombre"])));
                            $MinisteriosresponsablesDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $mpResponsable["Paterno"])));
                            $MinisteriosresponsablesDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $mpResponsable["Materno"])));
                            $MinisteriosresponsablesDto = $MinisteriosresponsablesDao->insertMinisteriosresponsablesmuestras($MinisteriosresponsablesDto, $proveedor);
                            if ($MinisteriosresponsablesDto != "" && count($MinisteriosresponsablesDto) > 0) {
                                
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EL MINISTERIO PUBLICO:" . $count);
                                break;
                            }
                            $count++;
                        }
                    }
                }

                #ACTUALIZAMOS INFORMACIÓN DE LA SOLICITUD DE LA TOMA DE MUESTRA
                if (!$error) {
                    $RespMuestraUpdateDto = new RespuestamuestraDTO();
                    $RespMuestraUpdateDto->setIdMuestra($RMuestraDto->getIdMuestra()); #Id de la toma de muestras
                    $RespMuestraUpdateDto->setNumeroMuestra($contadoresDto->getNumero());
                    $RespMuestraUpdateDto->setAnioMuestra($contadoresDto->getAnio());
                    $RespMuestraUpdateDto->setQr($qrMuestra);
                    $RespMuestraUpdateDto->setSelloDigital($strSelloDig);
                    $RMuestraDto = $RMuestra->updateRespuestamuestra($RespMuestraUpdateDto, $proveedor);
                    if ($RMuestraDto != "" && count($RMuestraDto) > 0) {
                        $RMuestraDto = $RMuestraDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL ACTUALIZAR DATOS DE LA SOLICITUD DE TOMA DE MUESTRAS");
                    }
                }

                #COPIAMOS ARCHIVO ADJUNTO DE LA SOLICITUD
                if (!$error) {
                    $totalArchivos = count($fileSolicitud["name"]);
                    if (($totalArchivos >= 1) && ($fileSolicitud["name"][0] != "")) {
                        $imagenesfachada = new ImagenesFacade();
                        $paramImagenes = array();
                        $paramImagenes["cveTipoDocumento"] = 25; //->Toma de Muestras
                        $paramImagenes["idCarpetaJudicial"] = $SolicitudesmuestrasDto->getIdSolicitudMuestra();
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
                }

                #OBTENEMOS INFORMACIÓN PARA ENVIAR CORREO Y REALIZAR LLAMADAS AL JUEZ Y ADMINISTRADOR
                if (!$error) {
                    #OBTENEMOS INFORMACIÓN DEL JUZGADO A SOLICITAR 
                    $JuzgadosDao = new JuzgadosDAO();
                    $JuzgadosDto = new JuzgadosDTO();
                    $JuzgadosDto->setCveJuzgado($juzgadoSolicitar); #Id del juzgado a solicitar
                    $JuzgadosDto->setActivo("S");
                    $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, "", $proveedor);
                    if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                        $JuzgadosDto = $JuzgadosDto[0];
                        #OBTENEMOS INFORMACION DEL ADMINISTRADOR DEL JUZGADO
                        $file = dirname(__FILE__) . "/../../../archivos/administradoresjuzgadosmuestras" . $JuzgadosDto->getCveJuzgado() . ".json";
                        $adminJuzgados = json_decode(file_get_contents($file), true);
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO A SOLICITAR");
                    }

                    #OBTENEMOS INFORMACIÓN DEL JUZGADOR
                    # Temporal
                    $JuzgadoresDao = new JuzgadoresDAO();
                    $JuzgadoresDto = new JuzgadoresDTO();
                    $JuzgadoresDto->setIdJuzgador($idJuezMuestra); #Id del juzgador turnado a resolver la solicitud de Muestras
                    $JuzgadoresDto->setActivo("S");
                    $JuzgadoresDto = $JuzgadoresDao->selectJuzgadores($JuzgadoresDto, "", $proveedor);
                    if ($JuzgadoresDto != "" && count($JuzgadoresDto) > 0) {
                        $JuzgadoresDto = $JuzgadoresDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADOR A RESOLVER LA SOLICITUD DE TOMA DE MUESTRAS");
                    }

                    #OBTENEMOS INFORMACION DEL M.P. QUE ESTA SOLICITANDO LA TOMA DE MUESTRAS
                    $xNombre = strtoupper(utf8_encode($_SESSION["Nombre"]));
                }

                #INSERTAMOS REGISTRO A CHAT
                if (!$error) {
                    $numeroAnioMuestra = md5($RMuestraDto->getIdMuestra() . "-4");
                    $chatMessagesMPDto = new ChatMessagesDTO(); //INVITACIÓN A MINISTERIO PUBLICO
                    $chatMessagesDao = new ChatMessagesDAO();
                    $chatMessagesMPDto->setChatId($numeroAnioMuestra);
                    $chatMessagesMPDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                    $chatMessagesMPDto->setMensaje("SE AGREGO A MP:" . $_SESSION["Nombre"] . " AL CHAT DE LA TOMA DE MUESTRAS: " . $RMuestraDto->getNumeroMuestra() . "/" . $RMuestraDto->getAnioMuestra());
                    $chatMessagesMPDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $chatMessagesMPDto->setNombreUsuario($_SESSION['Nombre']);
                    $chatMessagesMPDto->setCveNumero($RMuestraDto->getIdMuestra());
                    $chatMessagesMPDto->setTipoChat("4"); # tipo chat 4 = toma de muestras
                    $chatMessagesMPDto = $chatMessagesDao->insertChatMessages($chatMessagesMPDto, $proveedor);
                    if ($chatMessagesMPDto != "" && count($chatMessagesMPDto) > 0) {
                        $chatMessagesMPDto = $chatMessagesMPDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL AGREGAR AL MINISTERIO PUBLICO A LA SALA DE CHAT DE LA TOMA DE MUESTRAS");
                    }
                }


                if (!$error) {
                    $chatMessagesJuezDto = new ChatMessagesDTO(); //INVITACIÓN A MINISTERIO JUEZ
                    $chatMessagesDao = new ChatMessagesDAO();
                    $chatMessagesJuezDto->setChatId($numeroAnioMuestra);
                    $chatMessagesJuezDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                    $chatMessagesJuezDto->setMensaje("SE AGREGO A JUEZ: " . $JuzgadoresDto->getTitulo() . " " . $JuzgadoresDto->getNombre() . " " . $JuzgadoresDto->getPaterno() . " " . $JuzgadoresDto->getMaterno() . " " . " AL CHAT DE TOMA DE MUESTRAS: " . $RMuestraDto->getNumeroMuestra() . "/" . $RMuestraDto->getAnioMuestra());
                    $chatMessagesJuezDto->setCveUsuario($JuzgadoresDto->getCveUsuario());
                    $chatMessagesJuezDto->setNombreUsuario($JuzgadoresDto->getTitulo() . " " . $JuzgadoresDto->getNombre() . " " . $JuzgadoresDto->getPaterno() . " " . $JuzgadoresDto->getMaterno());
                    $chatMessagesJuezDto->setCveNumero($RMuestraDto->getIdMuestra());
                    $chatMessagesJuezDto->setTipoChat("4"); # tipo chat 4 = toma de muestras
                    $chatMessagesJuezDto = $chatMessagesDao->insertChatMessages($chatMessagesJuezDto, $proveedor);
                    if ($chatMessagesJuezDto != "" && count($chatMessagesJuezDto) > 0) {
                        $chatMessagesJuezDto = $chatMessagesJuezDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL AGREGAR AL MINISTERIO PUBLICO A LA SALA DE CHAT DE TOMA DE MUESTRAS");
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
                        $tmp = array("type" => "Error", "text" => "NO SE ENCONTRARON MEDIOS DE NOTIFICACION JUEZ:" . $JuzgadoresDto->getTitulo() . " " . $JuzgadoresDto->getNombre() . " " . $JuzgadoresDto->getPaterno() . " " . $JuzgadoresDto->getMaterno());
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
                                $nombrearchivo = "toma_muestras_" . $RMuestraDto->getIdMuestra() . "_" . $celular . "_" . $JuzgadoresDto->getCveUsuario() . "_" . date("YmdHis") . ".txt";
                                $fechaMuestra = $RMuestraDto->getFechaRegistro();
                                $horaMuestra = explode(' ', $fechaMuestra);
                                $horaMuestra = $horaMuestra[1];

                                $asterisk2 = new asterisk2();
                                #comentar en caso de que sea en el localhost 
                                $e = $asterisk2->llamar("10.22.157.61", $celular, "./../../../llamadas/", $nombrearchivo, "outboundmsg4");
                                //$e = "";
                                $cveEstatusNotificacion = 1; #EN ESPERA
                                if (preg_match("/problema/", $e)) {
                                    $cveEstatusNotificacion = 3; #ERROR
                                } else {
                                    $cveEstatusNotificacion = 2; #ENVIADO CORRECTO
                                }

                                // --> Envia el Mensaje WhatsApp
//                        $resultWhats = array();
//                        if ($numeroWhats != "") {
//                            $message = "NOTIFICACIÓN. En Toluca, México, siendo las " . $horaMuestra . " horas del día " . $this->FechaLarga($fechaMuestra) . ", mediante el sistema informático (SIGEJUPE),  el C. " . $xNombre . ", Agente del Ministerio Público, ";
//                            $message .= "formuló; ante el " . $JuzgadosDto->getDesJuzgado() . ", la solicitud de respmuestra número " . str_pad($RMuestraDto->getNumeroMuestra(), 6, '0', STR_PAD_LEFT) . "/" . $RMuestraDto->getAnioMuestra() . ", ";
//                            $message .= "la cual se encuentra en el referido sistema informático para su consulta y atención respectiva.";
//                            $message = utf8_encode($message);
//                            $resultWhats = sendWhatsAppMessage($numeroWhats, $message);
//                            if ($resultWhats["type"] == "OK") {
//                                
//                            }
//                        }

                                $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                $BitacoranotificacionesDto->setCveMedioNotificacion("2"); #1 - LLAMADA
                                $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                $BitacoranotificacionesDto->setCveTipoActuacion("25"); #25 - TOMA DE MUESTRAS
                                $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion); #ESTADO DEL ENVIO DE LA LLAMADA
                                $BitacoranotificacionesDto->setIdReferencia($RMuestraDto->getIdMuestra()); #ID DE LA SOLICITUD
                                $BitacoranotificacionesDto->setNumero($RMuestraDto->getNumeroMuestra()); #NUMERO DE LA SOLICITUD
                                $BitacoranotificacionesDto->setAnio($RMuestraDto->getAnioMuestra()); #AÑO DE LA SOLICITUD
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
                        $objDatCorreo = $this->plantillaCorreo("muestras");
                        if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                            foreach ($emailJuzgadores as $emailJuzgador) {
                                $emailJuez = $emailJuzgador;
                                if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                                    $correoJuez = new EmailHELPER();
                                    $correoJuez->setSenderAddress($objDatCorreo->CorreoRemite);
                                    $correoJuez->setToAddress(trim($emailJuez));
                                    $correoJuez->setToName("Solicitud de Toma de Muestras - JUEZ");
                                    $correoJuez->setSubject($objDatCorreo->Subject);
                                    $correoJuez->setHostSmtp($objDatCorreo->IpSMTP);
                                    $correoJuez->setPortSmtp($objDatCorreo->PortSMTP);
                                    $correoJuez->setIsHTMLFormat(true);
                                    $strCuerpoEmailJuez = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                    $strCuerpoEmailJuez = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaMuestra . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaMuestra) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),  el <b>C. " . $xNombre . "</b>, Agente del Ministerio P&uacute;blico, 
                                           formul&oacute; ante el <b>" . $JuzgadosDto->getDesJuzgado() . "</b>, la solicitud de Actos de Investigaci&oacute;n que requieren autorizaci&oacute:n judicial (Toma de Muestras) n&uacute;mero <b>" . str_pad($RMuestraDto->getNumeroMuestra(), 6, '0', STR_PAD_LEFT) . "/" . $RMuestraDto->getAnioMuestra() . "</b>, 
                                           la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                                    $strCuerpoEmailJuez .= "</body>\n</html>\n\n";
                                    $correoJuez->setBody($strCuerpoEmailJuez);
                                    $intentos = 1;
                                    $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                    while ($intentos <= 20) {
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
                                        $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                        $BitacoranotificacionesDto->setCveTipoActuacion("25"); #25 - TOMA DE MUESTRAS
                                        $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                        $BitacoranotificacionesDto->setIdReferencia($RMuestraDto->getIdMuestra()); #ID DE LA SOLICITUD
                                        $BitacoranotificacionesDto->setNumero($RMuestraDto->getNumeroMuestra()); #NUMERO DE LA SOLICITUD
                                        $BitacoranotificacionesDto->setAnio($RMuestraDto->getAnioMuestra()); #AÑO DE LA SOLICITUD
                                        $BitacoranotificacionesDto->setCvejuzgado($juzgadoSolicitar); #JUZGADO A SOLICITAR
                                        $BitacoranotificacionesDto->setCveUsuario($JuzgadoresDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                        $BitacoranotificacionesDto->setMedio($emailJuez);
                                        $BitacoranotificacionesDto->setMovimiento($movimiento);
                                        $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                        if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                            
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
                                    $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                    $BitacoranotificacionesDto->setCveTipoActuacion("25"); #25 - TOMA DE MUESTRAS
                                    $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                    $BitacoranotificacionesDto->setIdReferencia($RMuestraDto->getIdMuestra()); #ID DE LA SOLICITUD
                                    $BitacoranotificacionesDto->setNumero($RMuestraDto->getNumeroMuestra()); #NUMERO DE LA SOLICITUD
                                    $BitacoranotificacionesDto->setAnio($RMuestraDto->getAnioMuestra()); #AÑO DE LA SOLICITUD
                                    $BitacoranotificacionesDto->setCvejuzgado($juzgadoSolicitar); #JUZGADO A SOLICITAR
                                    $BitacoranotificacionesDto->setCveUsuario($JuzgadoresDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                    $BitacoranotificacionesDto->setMedio($emailJuez);
                                    $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO");
                                    $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                    if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                        print_r($BitacoranotificacionesDto);
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
                            $objDatCorreo = $this->plantillaCorreo("muestras");
                            foreach ($adminJuzgados["usuarios"] as $usuarios) {
                                $xNombre = strtoupper(utf8_decode($usuarios["Nombre"] . " " . $usuarios["Paterno"] . " " . $usuarios["Materno"]));
                                if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                                    $emailAdministrador = $usuarios["email"];
                                    if ((trim($emailAdministrador) != "") && (strlen($emailAdministrador) > 1)) {
                                        $correoAdministrador = new EmailHELPER();
                                        $correoAdministrador->setSenderAddress($objDatCorreo->CorreoRemite);
                                        $correoAdministrador->setToAddress(trim($emailAdministrador));
                                        $correoAdministrador->setToName("Solicitud de Toma de Muestras - ADMINISTRADOR");
                                        $correoAdministrador->setSubject($objDatCorreo->Subject);
                                        $correoAdministrador->setHostSmtp($objDatCorreo->IpSMTP);
                                        $correoAdministrador->setPortSmtp($objDatCorreo->PortSMTP);
                                        $correoAdministrador->setIsHTMLFormat(true);
                                        $strCuerpoEmailAdm = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                        $strCuerpoEmailAdm = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaMuestra . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaMuestra) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),  el <b>C. " . $xNombre . "</b>, Agente del Ministerio P&uacute;blico, 
                                           formul&oacute; ante el <b>" . $JuzgadosDto->getDesJuzgado() . "</b>, la solicitud de Actos de Investigaci&oacute;n que requieren autorizaci&oacute;n judicial (Toma de Muestras) n&uacute;mero <b>" . str_pad($RMuestraDto->getNumeroMuestra(), 6, '0', STR_PAD_LEFT) . "/" . $RMuestraDto->getAnioMuestra() . "</b>, 
                                           la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                                        $strCuerpoEmailAdm .= "</body>\n</html>\n\n";
                                        $correoAdministrador->setBody($strCuerpoEmailAdm);
                                        $intentos = 1;
                                        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                        while ($intentos <= 20) {
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
                                            $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion("25"); #25 - TOMA DE MUESTRAS
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                            $BitacoranotificacionesDto->setIdReferencia($RMuestraDto->getIdMuestra()); #ID DE LA SOLICITUD
                                            $BitacoranotificacionesDto->setNumero($RMuestraDto->getNumeroMuestra()); #NUMERO DE LA SOLICITUD
                                            $BitacoranotificacionesDto->setAnio($RMuestraDto->getAnioMuestra()); #AÑO DE LA SOLICITUD
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
                                        $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                        $BitacoranotificacionesDto->setCveTipoActuacion("25"); #25 - TOMA DE MUESTRAS
                                        $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                        $BitacoranotificacionesDto->setIdReferencia($RMuestraDto->getIdMuestra()); #ID DE LA SOLICITUD
                                        $BitacoranotificacionesDto->setNumero($RMuestraDto->getNumeroMuestra()); #NUMERO DE LA SOLICITUD
                                        $BitacoranotificacionesDto->setAnio($RMuestraDto->getAnioMuestra()); #AÑO DE LA SOLICITUD
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

                ##GUARDAMOS EN BITACORA EL REGISTRO DE LA TOMA DE MUESTRAS 
                if (!$error) {
                    $BitacoramovimientosDao = new BitacoramovimientosDAO();
                    $BitacoramovimientosDto = new BitacoramovimientosDTO();
                    $BitacoramovimientosDto->setCveAccion("325"); #325 - TOMA DE MUESTARS
                    $BitacoramovimientosDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
                    $BitacoramovimientosDto->setCvePerfil($RMuestraDto->getIdMuestra()); #ID DE LA TOMA DE MUESTRAS
                    $BitacoramovimientosDto->setCveAdscripcion($SolicitudesmuestrasDto->getCveJuzgadoDesahoga());
                    if (($bolStatusMailJuez == true) && ($bolStatusMailAdm == true)) {
                        $BitacoramovimientosDto->setObservaciones("AGREGO SOLICITUD DE TOMA DE MUESTRAS NUMERO: " . $RMuestraDto->getNumeroMuestra() . " AÑO: " . $RMuestraDto->getAnioMuestra() . " JUEZ" . $idJuezMuestra . " ENVIO CORREO ELECTRONICO A EL JUEZ Y EL ADMINISTRADOR DEL JUZGADO");
                    } else {
                        $observaciones = "AGREGO SOLICITUD DE TOMA DE MUESTRAS NUMERO: " . $RMuestraDto->getNumeroMuestra() . " AÑO: " . $RMuestraDto->getAnioMuestra() . " JUEZ" . $idJuezMuestra . " ";
                        $observaciones.=($bolStatusMailJuez == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                        $observaciones.=$emailJuez;
                        $observaciones.=($bolStatusMailAdm == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                        $observaciones.=$emailAdministrador;
                        $BitacoramovimientosDto->setObservaciones($observaciones);
                    }
                    $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
                    if ($BitacoramovimientosDto != "" && count($BitacoramovimientosDto) > 0) {
                        
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA MOVIMIENTOS");
                    }
                }

                #TERMINAMOS TRANSACCION DE LA BASE DE DATOS Y SE CIERRA LA CONEXION
                if (!$error) {
                    $proveedor->execute("COMMIT");
                    if (($bolStatusMailJuez == true) && ($bolStatusMailAdm == true)) {
                        $tmp = array("type" => "OK",
                            "text" => "REGISTRO DE SOLICITUD DE FORMA EXITOSA Y A SU VEZ SE REMITE CORREO ELECTRONICO",
                            "idMuestra" => $RMuestraDto->getIdMuestra(),
                            "idSolicitudMuestra" => $RMuestraDto->getIdSolicitudMuestra(),
                            "numeroMuestra" => $RMuestraDto->getNumeroMuestra() . "/" . $RMuestraDto->getAnioMuestra()
                        );
                    } else {
                        $tmp = array("type" => "OK",
                            "text" => "REGISTRO DE SOLICITUD DE FORMA EXITOSA" . $movimientoExtra,
                            "type" => "OK",
                            "idMuestra" => $RMuestraDto->getIdMuestra(),
                            "idSolicitudMuestra" => $RMuestraDto->getIdSolicitudMuestra(),
                            "numeroMuestra" => $RMuestraDto->getNumeroMuestra() . "/" . $RMuestraDto->getAnioMuestra()
                        );
                    }
                } else {
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

    public function updateSolicitudesmuestras($SolicitudesmuestrasDto, $proveedor = null) {
        $SolicitudesmuestrasDto = $this->validarSolicitudesmuestras($SolicitudesmuestrasDto);
        $SolicitudesmuestrasDao = new SolicitudesmuestrasDAO();
//$tmpDto = new SolicitudesmuestrasDTO();
//$tmpDto = $SolicitudesmuestrasDao->selectSolicitudesmuestras($SolicitudesmuestrasDto,$proveedor);
//if($tmpDto!=""){//$SolicitudesmuestrasDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $SolicitudesmuestrasDto = $SolicitudesmuestrasDao->updateSolicitudesmuestras($SolicitudesmuestrasDto, $proveedor);
        return $SolicitudesmuestrasDto;
//}
//return "";
    }

    public function deleteSolicitudesmuestras($SolicitudesmuestrasDto, $proveedor = null) {
        $SolicitudesmuestrasDto = $this->validarSolicitudesmuestras($SolicitudesmuestrasDto);
        $SolicitudesmuestrasDao = new SolicitudesmuestrasDAO();
        $SolicitudesmuestrasDto = $SolicitudesmuestrasDao->deleteSolicitudesmuestras($SolicitudesmuestrasDto, $proveedor);
        return $SolicitudesmuestrasDto;
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
        return $this->traducir($dia) . " de " . $mes . " de " . $this->traducir($anio);
    }

    function traducir($num) {
        $partes = explode('.', $num);
        $s = $partes[0];
        if (strlen($s) > 12)
            die('Hasta 12 dígitos');
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
            $cad.='0';
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
            case 1:$cad.='ciento ';
                break;
            case 2:$cad.='doscientos ';
                break;
            case 3:$cad.='trescientos ';
                break;
            case 4:$cad.='cuatrocientos ';
                break;
            case 5:$cad.='quinientos ';
                break;
            case 6:$cad.='seiscientos ';
                break;
            case 7:$cad.='setecientos ';
                break;
            case 8:$cad.='ochocientos ';
                break;
            case 9:$cad.='novecientos ';
                break;
        }
        switch ($num[1]) {
            case 3:$cad.='treinta ';
                break;
            case 4:$cad.='cuarenta ';
                break;
            case 5:$cad.='cincuenta ';
                break;
            case 6:$cad.='sesenta ';
                break;
            case 7:$cad.='setenta ';
                break;
            case 8:$cad.='ochenta ';
                break;
            case 9:$cad.='noventa ';
                break;
        }
        if ($num[2] >= 0 && $num[1] == 1) {
            switch ($num[1] . $num[2]) {
                case 10:$cad.='diez ';
                    break;
                case 11:$cad.='once ';
                    break;
                case 12:$cad.='doce ';
                    break;
                case 13:$cad.='trece ';
                    break;
                case 14:$cad.='catorce ';
                    break;
                case 15:$cad.='quince ';
                    break;
                case 16:$cad.='dieciseis ';
                    break;
                case 17:$cad.='diecisiete ';
                    break;
                case 18:$cad.='dieciocho ';
                    break;
                case 19:$cad.='diecinueve ';
                    break;
            }
            return $cad;
        }
        if ($num[2] >= 0 && $num[1] == 2) {
            switch ($num[1] . $num[2]) {
                case 20:$cad.='veinte ';
                    break;
                case 21:if ($ind == 1)
                        $cad.='veintiuno ';
                    else
                        $cad.='veintiun ';break;
                case 22:$cad.='veintidos ';
                    break;
                case 23:$cad.='veintitr&eacute;s ';
                    break;
                case 24:$cad.='veinticuatro ';
                    break;
                case 25:$cad.='veinticinco ';
                    break;
                case 26:$cad.='veintiseis ';
                    break;
                case 27:$cad.='veintisiete ';
                    break;
                case 28:$cad.='veintiocho ';
                    break;
                case 29:$cad.='veintinueve ';
                    break;
            }
            return $cad;
        }
        if ($num[2] != 0 && $num[1] != 0) {
            if ($num[0] > 0 || $num[1] > 0)
                $cad.='y ';
        }
        if ($num[1] != 1) {
            switch ($num[2]) {
                case 1:if ($ind == 1)
                        $cad.='uno ';
                    else
                        $cad.='un ';break;
                case 2:$cad.='dos ';
                    break;
                case 3:$cad.='tres ';
                    break;
                case 4:$cad.='cuatro ';
                    break;
                case 5:$cad.='cinco ';
                    break;
                case 6:$cad.='seis ';
                    break;
                case 7:$cad.='siete ';
                    break;
                case 8:$cad.='ocho ';
                    break;
                case 9:$cad.='nueve ';
                    break;
            }
        }
        return $cad;
    }

    public function getInfoWS($juzgado) {
        try {
            if ($juzgado != "") {
                $usuariosCliente = new UsuarioCliente();
                $admons = $usuariosCliente->selectUsuariosGrupoSistema(97, 38, $juzgado);
                if ($admons != "") {
                    $file = fopen(dirname(__FILE__) . "/../../../archivos/administradoresjuzgadosmuestras$juzgado.json", "w");
                    fwrite($file, $admons);
                    fclose($file);
                } else {
                    
                }
            }
        } catch (Exception $e) {
            
        }
    }

    public function consultaMuestras($idJuzgador, $param, $proveedor = null) {
        if ($idJuzgador != 0 && $idJuzgador != "") {
            #INSTANCIAMOS DAOS
            $arrayJuzgadoresSolicitudes = "";
            $countGeneral = 0;

            $solicitudesmuestrasDao = new SolicitudesmuestrasDAO();
            $RespMuestraDao = new RespuestaMuestraDAO();
            $ImputadosDao = new ImputadosmuestrasDAO();
            $OfendidosDao = new OfendidosmuestrasDAO();
            $juzgadoresDAO = new JuzgadoresDAO();

            $solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
            $solicitudesmuestrasDto->setCveEstatusSolicitudMuestra("1,2");
            $RespMuestraDto = new RespuestamuestraDTO();
            $solicitudesmuestrasDto = $solicitudesmuestrasDao->selectSolicitudesMuestraJuzgadores($solicitudesmuestrasDto, $RespMuestraDto, $idJuzgador, $param, "", null);

            if ($solicitudesmuestrasDto != "" && count($solicitudesmuestrasDto) > 0) {
                foreach ($solicitudesmuestrasDto as $solicitudesmuestras) {

                    $arrayJuzgadoresSolicitudes[$countGeneral]["solicitudMuestra"] = $solicitudesmuestras;
                    #CONSULTAMOS INFORMACION DE LA TOMA DE MUESTRA
                    $RespMuestraDto = new RespuestamuestraDTO();
                    $RespMuestraDto->setIdSolicitudMuestra($solicitudesmuestras->getIdSolicitudMuestra());
                    $RespMuestraDto = $RespMuestraDao->selectMuestrasNoSolicitud($RespMuestraDto);
                    $arrayJuzgadoresSolicitudes[$countGeneral]["respmuestra"] = array();
                    if ($RespMuestraDto != "" && count($RespMuestraDto) > 0) {
                        $RespMuestraDto = $RespMuestraDto[0];
                        $arrayJuzgadoresSolicitudes[$countGeneral]["respmuestra"] = $RespMuestraDto;
                    }

                    #CONSULTAMOS LOS IMPUTADOS
                    $ImputadosDto = new ImputadosmuestrasDTO();
                    $ImputadosDto->setIdSolicitudMuestra($solicitudesmuestras->getIdSolicitudMuestra());
                    $ImputadosDto = $ImputadosDao->selectImputadosmuestras($ImputadosDto);
                    if ($ImputadosDto != "") {
                        $arrayJuzgadoresSolicitudes[$countGeneral]["imputados"] = $ImputadosDto;
                    }

                    #CONSULTAMOS LOS Ofendidos
                    $OfendiosDto = new OfendidosmuestrasDTO();
                    $OfendiosDto->setIdSolicitudMuestra($solicitudesmuestras->getIdSolicitudMuestra());
                    $OfendiosDto = $OfendidosDao->selectOfendidosmuestras($OfendiosDto);
                    if ($OfendiosDto != "") {
                        $arrayJuzgadoresSolicitudes[$countGeneral]["ofendidos"] = $OfendiosDto;
                    }

                    #CONSULTAMOS INFORMACION DE EL JUEZ ASIGNADO A LA TOA DE MUESTRA
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
                    $solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
                    $solicitudesmuestrasDto->setCveEstatusSolicitudMuestra("1,2");
                    $RespMuestraDto = new RespuestamuestraDTO();
                    $param["fields"] = " count(idMuestra) as totalCount ";
                    $solicitudesmuestrasDto = $solicitudesmuestrasDao->selectSolicitudesMuestrasJuzgadores($solicitudesmuestrasDto, $RespMuestraDto, $idJuzgador, $param, "", null);

                    $arrayAux["data"] = $arrayJuzgadoresSolicitudes;
                    $arrayAux["total"] = (int) $solicitudesmuestrasDto[0];
                    $pagina = array();
                    $param["fields"] = "true";
                    $paginas = $this->getPaginas($solicitudesmuestrasDto, $param);
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

    public function consultaMuestrasDetalle($idMuestra, $proveedor = null) {
        if ($idMuestra != 0 && $idMuestra != "") {
            #INSTANCIAMOS DAOS
            $arrayJuzgadoresSolicitudes = "";
            $countGeneral = 0;
            $juzgadoresmuestrasDao = new JuzgadoresmuestrasDAO();
            $solicitudesmuestrasDao = new SolicitudesmuestrasDAO();
            $RespMuestrasDao = new RespuestamuestraDAO();
            $imputadosmuestrasDao = new ImputadosmuestrasDAO();
            $ofendidosmuestrasDao = new OfendidosmuestrasDAO();
            $delitosmuestrasDao = new DelitosmuestrasDAO();
            $ministeriosresponsablesmuestrasDao = new MinisteriosresponsablesmuestrasDAO();

            $juzgadosDao = new JuzgadosDAO();
            $juzgadoresDao = new JuzgadoresDAO();

            #CONSULTAMOS INFORMACION DEL CATEO
            $RespMuestrasto = new RespuestamuestraDTO();
            $RespMuestrasto->setIdMuestra($idMuestra);
            $RespMuestrasto = $RespMuestrasDao->selectRespuestamuestra($RespMuestrasto);
            if ($RespMuestrasto != "" && count($RespMuestrasto) > 0) {
                $RespMuestrasto = $RespMuestrasto[0];
                $arrayJuzgadoresSolicitudes[$countGeneral]["respmuestra"] = $RespMuestrasto;

                #OBTENEMOS LAS SOLICITUDES QUE ESTAN ASIGNADAS A UN JUEZ
                $juzgadoresmuestrasDto = new JuzgadoresmuestrasDTO();
                $juzgadoresmuestrasDto->setIdSolicitudMuestra($RespMuestrasto->getIdSolicitudMuestra());
                $juzgadoresmuestrasDto = $juzgadoresmuestrasDao->selectJuzgadoresmuestras($juzgadoresmuestrasDto);
                if ($juzgadoresmuestrasDto != "" && count($juzgadoresmuestrasDto) > 0) {
                    foreach ($juzgadoresmuestrasDto as $juzgadorMuestra) {
                        $solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
                        $solicitudesmuestrasDto->setIdSolicitudMuestra($juzgadorMuestra->getIdSolicitudMuestra());
                        $solicitudesmuestrasDto = $solicitudesmuestrasDao->selectSolicitudesmuestras($solicitudesmuestrasDto);
                        if ($solicitudesmuestrasDto != "" && count($solicitudesmuestrasDto) > 0) {
                            $solicitudesmuestrasDto = $solicitudesmuestrasDto[0];
                            $arrayJuzgadoresSolicitudes[$countGeneral]["solicitudMuestra"] = $solicitudesmuestrasDto;

                            #CONSULTAMOS INFORMACION DE LOS IMPUTADOS
                            $imputadosmuestrasDto = new ImputadosmuestrasDTO();
                            $imputadosmuestrasDto->setIdSolicitudMuestra($solicitudesmuestrasDto->getIdSolicitudMuestra());
                            $imputadosmuestrasDto = $imputadosmuestrasDao->selectImputadosmuestras($imputadosmuestrasDto);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["imputados"] = array();
                            if ($imputadosmuestrasDto != "" && count($imputadosmuestrasDto) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["imputados"] = $imputadosmuestrasDto;
                            }

                            #CONSULTAMOS INFORMACION DE LOS OFENDIDOS
                            $ofendidosmuestrasDto = new OfendidosmuestrasDTO();
                            $ofendidosmuestrasDto->setIdSolicitudMuestra($solicitudesmuestrasDto->getIdSolicitudMuestra());
                            $ofendidosmuestrasDto = $ofendidosmuestrasDao->selectOfendidosmuestras($ofendidosmuestrasDto);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["ofendidos"] = array();
                            if ($ofendidosmuestrasDto != "" && count($ofendidosmuestrasDto) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["ofendidos"] = $ofendidosmuestrasDto;
                            }

                            #CONSULTAMOS INFORMACION DE LOS DELITOS
                            $delitosmuestrasDto = new DelitosmuestrasDTO();
                            $delitosmuestrasDto->setIdSolicitudMuestra($solicitudesmuestrasDto->getIdSolicitudMuestra());
                            $delitosmuestrasDto = $delitosmuestrasDao->selectDelitosmuestras($delitosmuestrasDto);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["delitos"] = array();
                            if ($delitosmuestrasDto != "" && count($delitosmuestrasDto) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["delitos"] = $delitosmuestrasDto;
                            }

                            #CONSULTAMOS INFORMACION DE MINISTERIOS PUBLICOS
                            $ministeriosresponsablesmuestrasDto = new MinisteriosresponsablesmuestrasDTO();
                            $ministeriosresponsablesmuestrasDto->setIdSolicitudMuestra($solicitudesmuestrasDto->getIdSolicitudMuestra());
                            $ministeriosresponsablesmuestrasDto = $ministeriosresponsablesmuestrasDao->selectMinisteriosresponsablesmuestras($ministeriosresponsablesmuestrasDto);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["ministeriosPublicos"] = array();
                            if ($ministeriosresponsablesmuestrasDto != "" && count($ministeriosresponsablesmuestrasDto) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["ministeriosPublicos"] = $ministeriosresponsablesmuestrasDto;
                            }

                            #CONSULTAMOS INFORMACION DE EL JUEZ ASIGNADO AL CATEO
                            $juzgadoresDTO = new JuzgadoresDTO();
                            $juzgadoresDTO->setIdJuzgador($juzgadorMuestra->getIdJuzgador());
                            $juzgadoresDTO = $juzgadoresDao->selectJuzgadores($juzgadoresDTO);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["juzgador"] = array();
                            if ($juzgadoresDTO != "" && count($juzgadoresDTO) > 0) {
                                $juzgadoresDTO = $juzgadoresDTO[0];
                                $arrayJuzgadoresSolicitudes[$countGeneral]["juzgador"] = $juzgadoresDTO;
                            }

                            $countGeneral++;
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

    public function getPaginas($dto, $param) {

        return range(1, ceil($dto[0] / $param["cantxPag"]));
        /*
          $paginas = array();
          $Pages = (int) count($dto) / $param["cantxPag"];
          $restoPages = (int) count($dto) % $param["cantxPag"];
          $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
          if ($totPages > 1) {
          for ($index = 1; $index <= $totPages; $index++) {
          $paginas[] = utf8_encode($index);
          }
          }
          return $paginas;
         */
    }

    /**
     * @param obj solicitudesmuestras $solicitudMuestra 
     * @return array información de juzgado, juez, status
     * @author e-israel
     * 
     */
    public function getInformacionMuestra($solicitudMuestra) {
        $data = [];

        $juzgadoresmuestrasDto = new JuzgadoresmuestrasDTO();
        $juzgadoresmuestrasDao = new JuzgadoresmuestrasDAO();
        $juzgadoresDto = new JuzgadoresDTO();
        $juzgadoresDao = new JuzgadoresDAO();
        $juzgadosDto = new JuzgadosDTO();
        $juzgadosDao = new JuzgadosDAO();
        $imputadosmuestrasDto = new ImputadosmuestrasDTO();
        $imputadosmuestrasDao = new ImputadosmuestrasDAO();
        $ofendidosmuestrasDto = new OfendidosmuestrasDTO();
        $ofendidosmuestrasDao = new OfendidosmuestrasDAO();
        $respuestamuestraDto = new RespuestamuestraDTO();
        $respuestamuestraDao = new RespuestamuestraDAO();
        $statusDto = new EstatussolicitudesmuestrasDTO();
        $statusDAO = new EstatussolicitudesmuestrasDAO();
        $delitosDto = new DelitosDTO();
        $delitosDao = new DelitosDAO();
        $delitosmuestrasDto = new DelitosmuestrasDTO();
        $delitosmuestrasDao = new DelitosmuestrasDAO();
        $respuestamuestraDto = new RespuestamuestraDTO();
        $respuestamuestraDao = new RespuestamuestraDAO();

        $data['cveEstatusSolicitudMuestra'] = $solicitudMuestra->getCveEstatusSolicitudMuestra();

        #obtiene datos de juzgado
        $juzgadosDto->setCveJuzgado($solicitudMuestra->getCveJuzgado());
        $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
        $data['juzgado'] = utf8_encode($juzgadosDto[0]->getDesJuzgado());

        # obtiene datos de Juez
        $juzgadoresmuestrasDto->setIdSolicitudMuestra($solicitudMuestra->getIdSolicitudMuestra());
        $juzgadoresmuestrasDto = $juzgadoresmuestrasDao->selectJuzgadoresmuestras($juzgadoresmuestrasDto);
        $juzgadoresDto->setIdJuzgador($juzgadoresmuestrasDto[0]->getIdJuzgador());
        $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto);
        $data['juez'] = utf8_encode($juzgadoresDto[0]->getPaterno() . ' ' . $juzgadoresDto[0]->getMaterno() . ' ' . $juzgadoresDto[0]->getNombre());

        #obtiene delitos
        $delitosmuestrasDto->setIdSolicitudMuestra($solicitudMuestra->getIdSolicitudMuestra());
        $delitosmuestrasDto = $delitosmuestrasDao->selectDelitosmuestras($delitosmuestrasDto);

        foreach ($delitosmuestrasDto as $deli) {
            $delitosDto = new DelitosDTO();
            $delitosDto->setCveDelito($deli->getCveDelito());
            $delitosDto = $delitosDao->selectDelitos($delitosDto);
            $data['delitos'][] = $this->dto2array($delitosDto[0], 'DelitosDTO');
        }

        # obtiene imputados
        $imputadosmuestrasDto->setIdSolicitudMuestra($solicitudMuestra->getIdSolicitudMuestra());
        $imputadosmuestrasDto = $imputadosmuestrasDao->selectImputadosmuestras($imputadosmuestrasDto);
        foreach ($imputadosmuestrasDto as $i) {
            $tmp = [];
            if ($i->getCveTipoPersona() == 1) {# física
                $tmp = [
                    'tipo' => 'Persona f&iacute;sica',
                    'paterno' => utf8_encode($i->getPaterno()),
                    'materno' => utf8_encode($i->getMaterno()),
                    'nombre' => utf8_encode($i->getNombre())
                ];
            } else { #moral
                $tmp = [
                    'tipo' => 'Persona moral',
                    'paterno' => '',
                    'materno' => '',
                    'nombre' => utf8_encode($i->getNombreMoral()),
                ];
            }
            $data['imputados'][] = $tmp;
        }

        # obtiene ofendidos
        $ofendidosmuestrasDto->setIdSolicitudMuestra($solicitudMuestra->getIdSolicitudMuestra());
        $ofendidosmuestrasDto = $ofendidosmuestrasDao->selectOfendidosmuestras($ofendidosmuestrasDto);
        foreach ($ofendidosmuestrasDto as $o) {
            $tmp = [];
            if ($o->getCveTipoPersona() == 1 || $o->getCveTipoPersona() == 4 || $o->getCveTipoPersona() == 5) {# física
                $tmp = [
                    'tipo' => 'Persona f&iacute;sica',
                    'paterno' => utf8_encode($o->getPaterno()),
                    'materno' => utf8_encode($o->getMaterno()),
                    'nombre' => utf8_encode($o->getNombre())
                ];
            } else { #moral
                $tmp = [
                    'tipo' => 'Persona moral',
                    'paterno' => '',
                    'materno' => '',
                    'nombre' => utf8_encode($o->getNombreMoral()),
                ];
            }
            $data['ofendidos'][] = $tmp;
        }

        # obtiene respuesta muestra
        $respuestamuestraDto->setIdSolicitudMuestra($solicitudMuestra->getIdSolicitudMuestra());
        $respuestamuestraDto = $respuestamuestraDao->selectRespuestamuestra($respuestamuestraDto);
        $data['fechaRespuesta'] = $respuestamuestraDto[0]->getFechaRespuesta();

        # obtiene status
        $statusDto->setCveEstatusSolicitudMuestra($solicitudMuestra->getCveEstatusSolicitudMuestra());
        $statusDto = $statusDAO->selectEstatussolicitudesmuestras($statusDto);
        $data['estatus'] = $statusDto[0]->getDesEstatusSolicitudMuestra();

        # tiempo de respuesta
        $data['tiempoRespuesta'] = utf8_encode($this->longDate($solicitudMuestra->getFechaRegistro(), $data['fechaRespuesta']));

        # ministerio público
        $listaUsuarios = '';
        try {
            $UsuarioCliente = new UsuarioCliente();
            $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($solicitudMuestra->getCveUsuario()), true);
        } catch (Exception $ex) {
            return array('type' => 'ERROR', 'mensaje' => 'ERROR En webservice al consultar el MP. ' . $ex->getMessage());
            #$tmp = array("type" => "Error", "text" => "ERROR AL CONSUMIR WEB SERVICE DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
        }
        $nombreMP = 'NO ENCONTRADO EN GESTION';
        if ($listaUsuarios != '') {
            $nombreMP = utf8_encode($listaUsuarios['data'][0]['nombre'] . ' ' . $listaUsuarios['data'][0]['paterno'] . ' ' . $listaUsuarios['data'][0]['materno']);
        }
        $data['nombreUsuario'] = utf8_encode($nombreMP);

        # datos de solicitud
        $data['solicitud'] = $this->dto2array($solicitudMuestra, 'SolicitudesmuestrasDTO');

        #datos de respuesta
        $respuestamuestraDto = new RespuestamuestraDTO();
        $respuestamuestraDto->setIdSolicitudMuestra($solicitudMuestra->getIdSolicitudMuestra());
        $respuestamuestraDao = new RespuestamuestraDAO();
        $respuestamuestraDto = $respuestamuestraDao->selectRespuestamuestra($respuestamuestraDto);

        $respuestasolicitudmuestraDto = new RespuestasolicitudmuestraDTO();
        $respuestasolicitudmuestraDao = new RespuestasolicitudmuestraDAO();
        $respuestasolicitudmuestraDto->setCveRespuestaSolicitudMuestra($respuestamuestraDto[0]->getCveRespuestaSolicitudMuestra());
        $respuestasolicitudmuestraDto = $respuestasolicitudmuestraDao->selectRespuestasolicitudmuestra($respuestasolicitudmuestraDto);

        $data['respuesta'] = $this->dto2array($respuestamuestraDto[0], 'RespuestamuestraDTO');
        $data['respuesta']['respuestasolicitudmuestra'] = $this->dto2array($respuestasolicitudmuestraDto[0], 'RespuestasolicitudmuestraDTO');

        # imputados y sus muestras
        $tomamuestrasDto = new TomamuestrasDTO();
        $tomamuestrasDao = new TomamuestrasDAO();
        $tomamuestrasDto->setIdSolicitudMuestra($solicitudMuestra->getIdSolicitudMuestra());
        $tomamuestrasDto = $tomamuestrasDao->selectTomamuestras($tomamuestrasDto);

        $data['imputadosMuestras'] = NULL;
        if ($tomamuestrasDto != "") {
            foreach ($tomamuestrasDto as $toma) {
                $imputadoTmp = [];
                $imputadosmuestrasDto = new ImputadosmuestrasDTO();
                $imputadosmuestrasDto->setIdImputadoMuestra($toma->getIdImputadoMuestra());
                $imputados = $imputadosmuestrasDao->selectImputadosmuestras($imputadosmuestrasDto);

                $muestrasDto = new MuestrasDTO();
                $muestrasDao = new MuestrasDAO();
                $muestrasDto->setCveMuestra($toma->getCveMuestra());
                $muestrasDto = $muestrasDao->selectMuestras($muestrasDto);
                $cm = 0; # contador para muestras
                if ($imputados != "") {
                    foreach ($imputados as $i) {
                        if ($i->getCveTipoPersona() == 1) {# física
                            $imputadoTmp = [
                                'tipo' => 'Persona f&iacute;sica',
                                'paterno' => utf8_encode($i->getPaterno()),
                                'materno' => utf8_encode($i->getMaterno()),
                                'nombre' => utf8_encode($i->getNombre())
                            ];
                        } else { #moral
                            $imputadoTmp = [
                                'tipo' => 'Persona moral',
                                'paterno' => '',
                                'materno' => '',
                                'nombre' => utf8_encode($i->getNombreMoral()),
                            ];
                        }
                        $imputadoTmp['domicilio'] = utf8_encode($i->getDomicilio());
                        $imputadoTmp['cveGenero'] = utf8_encode($i->getCveGenero());
                        $imputadoTmp['muestra'] = utf8_encode($muestrasDto[$cm]->getDesMuestra());
                        $cm++;
                    }

                    $data['imputadosMuestras'][] = $imputadoTmp;
                }
            }
        }

        # ofendidos y sus muestras
        $data['ofendidosMuestras'] = NULL;
        if ($tomamuestrasDto != "") {
            foreach ($tomamuestrasDto as $toma) {
                $ofendidoTmp = [];
                $ofendidosmuestrasDto = new OfendidosmuestrasDTO();
                $ofendidosmuestrasDto->setIdOfendidoMuestra($toma->getIdOfendidoMuestra());
                $ofendidos = $ofendidosmuestrasDao->selectOfendidosmuestras($ofendidosmuestrasDto);

                $muestrasDto = new MuestrasDTO();
                $muestrasDao = new MuestrasDAO();
                $muestrasDto->setCveMuestra($toma->getCveMuestra());
                $muestrasDto = $muestrasDao->selectMuestras($muestrasDto);
                $cm = 0; # contador para muestras
                if ($ofendidos != "") {
                    foreach ($ofendidos as $o) {
                        if ($o->getCveTipoPersona() == 1 || $o->getCveTipoPersona() == 4 || $o->getCveTipoPersona() == 5) {# física
                            $ofendidoTmp = [
                                'tipo' => 'Persona f&iacute;sica',
                                'paterno' => utf8_encode($o->getPaterno()),
                                'materno' => utf8_encode($o->getMaterno()),
                                'nombre' => utf8_encode($o->getNombre())
                            ];
                        } else { #moral
                            $ofendidoTmp = [
                                'tipo' => 'Persona moral',
                                'paterno' => '',
                                'materno' => '',
                                'nombre' => utf8_encode($o->getNombreMoral()),
                            ];
                        }
                        $ofendidoTmp['domicilio'] = utf8_encode($o->getDomicilio());
                        $ofendidoTmp['cveGenero'] = utf8_encode($o->getCveGenero());
                        $ofendidoTmp['muestra'] = utf8_encode($muestrasDto[$cm]->getDesMuestra());
                        $cm++;
                    }

                    $data['ofendidosMuestras'][] = $ofendidoTmp;
                }
            }
        }
#        print_r($data);
        return $data;
    }

    /**
     * 
     * @author e-israel
     */
    public function consultaMuestrasInformacion($type, $solicitudesmuestrasDto, $param = "") {
        $datos = [];
        if ($type != 0 && $type != "") {
            $idUsuario = $_SESSION['cveUsuarioSistema'];
            $numeroMuestra = $param["numeroMuestra"];
            $anioMuestra = $param["anioMuestra"];

            $fechaRegistro = $solicitudesmuestrasDto->getFechaRegistro();
            $idJuzgadoT = 0;
            if ($solicitudesmuestrasDto->getCveJuzgado() != "") {
                $idJuzgadoT = $solicitudesmuestrasDto->getCveJuzgado();
            }
            $filtros["numeroMuestra"] = $numeroMuestra;
            $filtros["anioMuestra"] = $anioMuestra;
            $fechaEnd = $param["fechaEnd"];
            if ($fechaEnd != "") {
                $filtros["fechaRegistro"] = "";
            } else {
                $filtros["fechaRegistro"] = $fechaRegistro;
            }
            $filtros["idJuzgadoT"] = $idJuzgadoT;
            $solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
            $solicitudesMuestrasDAO = new SolicitudesmuestrasDAO();
            $respuestamuestraDto = new RespuestamuestraDTO();
            $respuestamuestraDao = new RespuestamuestraDAO();

            switch ($type) {
                case "1": // --> Búsqueda General Ok
                    $respuestamuestraDto->setAnioMuestra($anioMuestra);
                    $respuestamuestraDto->setNumeroMuestra($numeroMuestra);
                    $respuestasDto = $respuestamuestraDao->selectRespuestamuestra($respuestamuestraDto, $param, "ORDER BY fechaRegistro DESC");
                    if ($respuestasDto != "") {
                        $datos = array();
                        foreach ($respuestasDto as $respuesta) {
                            $solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
                            $solicitudesmuestrasDao = new SolicitudesmuestrasDAO();
                            $solicitudesmuestrasDto->setIdSolicitudMuestra($respuesta->getIdSolicitudMuestra());
                            $muestra = $solicitudesmuestrasDao->selectSolicitudesmuestras($solicitudesmuestrasDto, '');
                            $datos["datos"][] = array_merge($this->dto2array($respuesta, 'RespuestamuestraDTO'), $this->getInformacionMuestra($muestra[0], $filtros));
                        }
                        // Obtenemos el numero de paginas
                        $respuestaCount = new RespuestamuestraDTO();
                        $respuestaCount->setAnioMuestra($anioMuestra);
                        $respuestaCount->setNumeroMuestra($numeroMuestra);
                        $param["fields"] = " count(idMuestra) as totalCount ";
                        $respuestaCount = $respuestamuestraDao->selectRespuestamuestra($respuestaCount, $param);
                        $datos["total"] = (int) $respuestaCount[0];
                        $paginas = $this->getPaginas($respuestaCount, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return array("status" => "Error");
                    }
                    break;
                case "2": // --> Búsqueda MP OK
                    $solicitudesmuestrasDto->setCveUsuario($idUsuario);
                    $solicitudesmuestrasDto->setAnio($anioMuestra);
                    $solicitudesmuestrasDto->setNumero($numeroMuestra);
                    $solicitudesmuestrasDto = $solicitudesMuestrasDAO->selectSolicitudesmuestras($solicitudesmuestrasDto, $param);
                    if ($solicitudesmuestrasDto != "") {
                        $datos = [];
                        foreach ($solicitudesmuestrasDto as $muestra) {
                            $respuestamuestraDto = new RespuestamuestraDTO();
                            $respuestamuestraDao = new RespuestamuestraDAO();
                            $respuestamuestraDto->setIdSolicitudMuestra($muestra->getIdSolicitudMuestra());
                            $respuestamuestraDto = $respuestamuestraDao->selectRespuestamuestra($respuestamuestraDto);
                            $datos["datos"][] = array_merge($this->dto2array($respuestamuestraDto[0], 'RespuestamuestraDTO'), $this->getInformacionMuestra($muestra));
                        }
                        // Obtenemos el numero de paginas
                        $solicitudesmuestrasCountDto = new SolicitudesmuestrasDTO();
                        $solicitudesmuestrasCountDto->setCveUsuario($idUsuario);
                        $solicitudesmuestrasCountDto->setAnio($anioMuestra);
                        $solicitudesmuestrasCountDto->setNumero($numeroMuestra);
                        $param["fields"] = " count(idSolicitudMuestra) as totalCount ";
                        $solicitudesmuestrasCountDto = $solicitudesMuestrasDAO->selectSolicitudesmuestras($solicitudesmuestrasCountDto, $param);
                        $datos["total"] = (int) $solicitudesmuestrasCountDto[0];
                        $paginas = $this->getPaginas($solicitudesmuestrasCountDto, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return "";
                    }
                    break;
                case "3": // --> Búsqueda Juzgador 
                    $juzgadorDto = new JuzgadoresDTO();
                    $juzgadorDao = new JuzgadoresDAO();
                    $juzgadorDto->setCveUsuario($idUsuario);
                    $juzgadorDto = $juzgadorDao->selectJuzgadores($juzgadorDto);
                    if ($juzgadorDto == NULL)
                        return '';

                    $juzgadoresmuestrasDto = new JuzgadoresmuestrasDTO();
                    $juzgadoresmuestrasDao = new JuzgadoresmuestrasDAO();
                    $juzgadoresmuestrasDto->setIdJuzgador($juzgadorDto[0]->getIdJuzgador());
                    $juzgadoresmuestrasDto = $juzgadoresmuestrasDao->selectJuzgadoresmuestras($juzgadoresmuestrasDto, $param);

                    $solicitudes = [];
                    foreach ($juzgadoresmuestrasDto as $j) {
                        $solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
                        $solicitudesmuestrasDao = new SolicitudesmuestrasDAO();
                        $solicitudesmuestrasDto->setIdSolicitudMuestra($j->getIdSolicitudMuestra());
                        $solicitudesmuestrasDto->setAnio($anioMuestra);
                        $solicitudesmuestrasDto->setNumero($numeroMuestra);
                        $solicitudesmuestrasDto = $solicitudesMuestrasDAO->selectSolicitudesmuestras($solicitudesmuestrasDto);
                        $solicitudes[] = $solicitudesmuestrasDto[0];
                    }

                    if ($solicitudes != "") {
                        $datos = [];
                        foreach ($solicitudes as $muestra) {
                            $respuestamuestraDto = new RespuestamuestraDTO();
                            $respuestamuestraDao = new RespuestamuestraDAO();
                            $respuestamuestraDto->setIdSolicitudMuestra($muestra->getIdSolicitudMuestra());
                            $respuestamuestraDto = $respuestamuestraDao->selectRespuestamuestra($respuestamuestraDto);
                            $datos["datos"][] = array_merge($this->dto2array($respuestamuestraDto[0], 'RespuestamuestraDTO'), $this->getInformacionMuestra($muestra));
                        }

                        // Obtenemos el numero de paginas
                        $juzgadoresmuestrasCountDto = new JuzgadoresmuestrasDTO();
                        $juzgadoresmuestrasCountDto->setIdJuzgador($juzgadorDto[0]->getIdJuzgador());
                        $param["fields"] = " count(idJuzgadorMuestra) as totalCount ";
                        $juzgadoresmuestrasCountDto = $juzgadoresmuestrasDao->selectJuzgadoresmuestras($juzgadoresmuestrasCountDto, $param);
                        $datos["total"] = (int) $juzgadoresmuestrasCountDto[0];
                        $paginas = $this->getPaginas($juzgadoresmuestrasCountDto, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return "";
                    }

                    break;
                case "4": // --> Búsqueda AdminJuzgador OK
                    $idJuzgadoDesahoga = $_SESSION['cveAdscripcion'];
                    $solicitudesmuestrasDto->setCveJuzgadoDesahoga($idJuzgadoDesahoga);
                    $solicitudesmuestrasDto->setAnio($anioMuestra);
                    $solicitudesmuestrasDto->setNumero($numeroMuestra);
                    #$solicitudesmuestrasDto->setFechaRegistro($fechaRegistro);
                    $solicitudesmuestrasDto = $solicitudesMuestrasDAO->selectSolicitudesmuestras($solicitudesmuestrasDto, $param);

                    if ($solicitudesmuestrasDto != "") {
                        $datos = [];
                        foreach ($solicitudesmuestrasDto as $muestra) {
                            $respuestamuestraDto = new RespuestamuestraDTO();
                            $respuestamuestraDao = new RespuestamuestraDAO();
                            $respuestamuestraDto->setIdSolicitudMuestra($muestra->getIdSolicitudMuestra());
                            $respuestamuestraDto = $respuestamuestraDao->selectRespuestamuestra($respuestamuestraDto);
                            $datos["datos"][] = array_merge($this->dto2array($respuestamuestraDto[0], 'RespuestamuestraDTO'), $this->getInformacionMuestra($muestra));
                        }
                        $datos["total"] = (int) count($solicitudesmuestrasDto);
                        $paginas = $this->getPaginas($solicitudesmuestrasDto, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return "";
                    }
                    break;
                case "5" : // --> Bitacora
                    /*
                      $muestraDto = new MuestrasDTO();
                      if ($idJuzgadoT == 0)
                      $param["numJuzgado"] = "";
                      else
                      $param["numJuzgado"] = $idJuzgadoT;

                      $muestraDto = $solicitudesMuestrasDAO->selectBitacora($param);
                      if ($muestraDto != "") {
                      $datos = [];
                      $i = 0;
                      foreach ($muestraDto as $index => $value) {
                      $filtros["idSolicitudMuestra"] = $value->getIdSolicitudMuestra();
                      $resultado = $this->infoCateoDetalle($filtros);
                      if ($resultado != "" && count($resultado) != 0) {
                      $datos["datos"][$i] = $resultado;
                      $i++;
                      }
                      }
                      // Obtenemos el numero de paginas
                      $muestraDto = new MuestrasDTO();
                      $muestraDto->setCveMuestra($numeroMuestra);
                      $muestraDto->setAnioCateo($anioMuestra);
                      $param["fields"] = " count(idCateo) as totalCount ";
                      $muestraDto = $solicitudesMuestrasDAO->selectBitacora($param);
                      $datos["total"] = (int) $muestraDto[0];
                      $paginas = $this->getPaginas($muestraDto, $param);
                      $datos["paginas"] = $paginas;
                      } else {
                      return array("status" => "Error");
                      }
                     */
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
                $result .= $years . " Año ";
            } else {
                $result .= $years . " Años ";
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
                $result .= $days . " Día ";
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

    /**
     * 
     * @author e-israel
     */
    public function dto2array($dto, $class) {
        $dtoTmp = (array) $dto;
        $tmp = array();
        foreach ($dtoTmp as $key => $val) {
            $tmp[trim(str_replace($class, '', $key))] = utf8_encode($val);
        }
        return $tmp;
    }

    public function consultaMuestrasInformacionAdmon($type, $solicitudesmuestrasDto, $param = "") {
        $datos = [];
        if ($type != 0 && $type != "") {
            $idUsuario = $_SESSION['cveUsuarioSistema'];
            $numeroMuestra = $param["numeroMuestra"];
            $anioMuestra = $param["anioMuestra"];

            $fechaRegistro = $solicitudesmuestrasDto->getFechaRegistro();
            $idJuzgadoT = 0;
            if ($solicitudesmuestrasDto->getCveJuzgado() != "") {
                $idJuzgadoT = $solicitudesmuestrasDto->getCveJuzgado();
            }
            $filtros["numeroMuestra"] = $numeroMuestra;
            $filtros["anioMuestra"] = $anioMuestra;
            $fechaEnd = $param["fechaEnd"];
            if ($fechaEnd != "") {
                $filtros["fechaRegistro"] = "";
            } else {
                $filtros["fechaRegistro"] = $fechaRegistro;
            }
            $filtros["idJuzgadoT"] = $idJuzgadoT;
            $solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
            $solMuestrasDAO = new SolicitudesmuestrasDAO();
            $idJuzgadoDesahoga = $_SESSION['cveAdscripcion'];

            $RespMuestraDto = new RespuestamuestraDTO();
            $cateoDao = new RespuestamuestraDAO();
            $RespMuestraDto->setNumeroMuestra($numeroMuestra);
            $RespMuestraDto->setAnioMuestra($anioMuestra);
            $RespMuestraDto = $solMuestrasDAO->consultaDetalleMuestrasJuzgadoAdmon($RespMuestraDto, $idJuzgadoDesahoga, "ORDER BY fechaRegistro DESC", null, $param);
            if ($RespMuestraDto != "") {
                $datos = [];
                $i = 0;
                foreach ($RespMuestraDto as $index => $value) {
                    $filtros["idSolicitudMuestra"] = $value->getIdSolicitudMuestra();
                    $resultado = $this->infoMuestrasDetalle($filtros);
                    if ($resultado != "" && count($resultado) != 0) {
                        $datos["datos"][$i] = $resultado;
                        $i++;
                    }
                }
                // Obtenemos el numero de paginas
                $RespMuestraDto = new RespuestamuestraDTO();
                $RespMuestraDto->setNumeroMuestra($numeroMuestra);
                $RespMuestraDto->setAnioMuestra($anioMuestra);
                $param["fields"] = " count(idMuestra) as totalCount ";
                $RespMuestraDto = $solMuestrasDAO->consultaDetalleMuestrasJuzgadoAdmon($RespMuestraDto, $idJuzgadoDesahoga, "ORDER BY fechaRegistro DESC", null, $param);
                $datos["total"] = (int) $RespMuestraDto[0];
                $paginas = $this->getPaginas($RespMuestraDto, $param);
                $datos["paginas"] = $paginas;
            } else {
                return array("status" => "Error");
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

    private function infoMuestrasDetalle($filtros) {
        $resultados = [];
        $solMuestrasDAO = new SolicitudesmuestrasDAO();
        $juzgadoDto = new JuzgadosDTO();
        $juzgadoDAO = new JuzgadosDAO();
        $RespMuestraDto = new RespuestamuestraDTO();
        $RespMuestraDao = new RespuestamuestraDAO();
        $statusDto = new EstatussolicitudesmuestrasDTO();
        $statusDAO = new EstatussolicitudesmuestrasDAO();

        $numeroMuestra = $filtros["numeroMuestra"];
        $anioMuestra = $filtros["anioMuestra"];
        $fechaRegistro = $filtros["fechaRegistro"];
        $idJuzgadoT = $filtros["idJuzgadoT"];
        if ($idJuzgadoT == "") {
            $idJuzgadoT = "";
        }
        if ($filtros["idSolicitudMuestra"] != "") {
            $filtros["idSolicitudMuestra"];
            $RespMuestraDto->setIdSolicitudMuestra($filtros["idSolicitudMuestra"]);
        }
        $RespMuestraDto->setAnioMuestra($anioMuestra);
        $RespMuestraDto->setNumeroMuestra($numeroMuestra);
        $RespMuestraDto->setFechaRegistro($fechaRegistro);
        $RespMuestraDto = $RespMuestraDao->selectRespuestamuestra($RespMuestraDto);
        $i = 0;
        if ($RespMuestraDto != "") {
            foreach ($RespMuestraDto as $indexMuestra => $valueMuestra) {
                $idSolicitudMuestra = $valueMuestra->getIdSolicitudMuestra();
                $solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
                $solicitudesmuestrasDto->setIdSolicitudMuestra($idSolicitudMuestra);
                if ($idJuzgadoT != 0) {
                    $solicitudesmuestrasDto->setCveJuzgado($idJuzgadoT);
                }
                $resultado = $solMuestrasDAO->selectSolicitudesmuestras($solicitudesmuestrasDto);
                if ($resultado != "") {
                    foreach ($resultado as $index => $value) {
                        $resultados['IdSolicitudMuestra'] = $value->getIdSolicitudMuestra();
                        $juzgadorMuestrasDto = new JuzgadoresmuestrasDTO();
                        $juzgadorMuestrasDao = new JuzgadoresmuestrasDAO();
                        $juzgadorDto = new JuzgadoresDTO();
                        $juzgadorDAO = new JuzgadoresDAO();
                        $juzgadorMuestrasDto->setIdSolicitudMuestra($value->getIdSolicitudMuestra());
                        $juzgadorMuestrasDto = $juzgadorMuestrasDao->selectJuzgadoresmuestras($juzgadorMuestrasDto);
                        if ($juzgadorMuestrasDto != "") {
                            $idJuzgador = $juzgadorMuestrasDto[0]->getIdJuzgador();
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
                        $idSolicitudMuestra = $value->getIdSolicitudMuestra();

                        // Obtenemos el Juzgado            
                        $juzgadoDto->setCveJuzgado($idJuzgado);
                        $juzgados = $juzgadoDAO->selectJuzgados($juzgadoDto);
                        if ($juzgados != "") {
                            $resultados['juzgado'] = $juzgados[0]->getDesJuzgado();
                        } else {
                            $resultados['juzgado'] = "";
                        }

                        // Obtenemos la informacion del Cateo
                        if ($idSolicitudMuestra != "") {
                            $RespMuestraDto = new RespuestamuestraDTO();
                        }
                        $RespMuestraDto->setIdSolicitudMuestra($idSolicitudMuestra);
                        $rmuestras = $RespMuestraDao->selectRespuestamuestra($RespMuestraDto);

                        if ($rmuestras != "") {
                            $resultados['idMuestra'] = $rmuestras[0]->getIdMuestra();
                            $resultados['numMuestra'] = $rmuestras[0]->getNumeroMuestra();
                            $resultados['anioMuestra'] = $rmuestras[0]->getAnioMuestra();
                            $fechaHoraRegistro = explode(" ", utf8_encode($rmuestras[0]->getFechaRegistro()));
                            $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                            $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                            $horaRegistro = $fechaHoraRegistro[1];
                            $resultados['fechaRegistro'] = $fechaRegistro . " " . $horaRegistro;
                            if ($rmuestras[0]->getFechaRespuesta() != "") {
                                $fechaHoraRegistro = explode(" ", utf8_encode($rmuestras[0]->getFechaRespuesta()));
                                $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                                $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                                $horaRegistro = $fechaHoraRegistro[1];
                                $fechaRespuesta = $fechaRegistro . " " . $horaRegistro;
                            } else {
                                $fechaRespuesta = "Sin Respuesta";
                            }

                            $resultados['fechaRespuesta'] = $fechaRespuesta;
                            if ($rmuestras[0]->getFechaRespuesta() != "") {
                                $espera = $this->longDate($rmuestras[0]->getFechaRegistro(), $rmuestras[0]->getFechaRespuesta());
                            } else {
                                $espera = "Sin Respuesta";
                            }
                            $resultados["tiempoRespuesta"] = utf8_encode("$espera");
                        } else {
                            $resultados['numMuestra'] = "";
                            $resultados['fechaRegistro'] = "";
                            $resultados['fechaRespuesta'] = "";
                            $resultados["tiempoRespuesta"] = "";
                        }

                        // Obtenemos informacion de Estatus
                        $resultados['cveEstatusMuestra'] = $value->getCveEstatusSolicitudMuestra();
                        $statusDto->setCveEstatusSolicitudMuestra($value->getCveEstatusSolicitudMuestra());
                        $estatusMuestras = $statusDAO->selectEstatussolicitudesmuestras($statusDto);
                        if ($estatusMuestras != "") {
                            $resultados['estatusMuestra'] = $estatusMuestras[0]->getDesEstatusSolicitudMuestra();
                        } else {
                            $resultados['estatusMuestra'] = "";
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

    public function actualizaJuzgadorMuestra($idJuzgador = "", $idMuestra = "", $proveedor = null) {
        $errorDatos = false;
        $mensajeErrorDatos = false;
        $bolStatusMailJuezAnterior = false;
        $bolStatusMailJuez = false;
        $bolStatusMailAdm = false;

        if (($idJuzgador == "") || ($idJuzgador == "0")) {
            $errorDatos = true;
            $mensajeErrorDatos .= " JUZGADOR NO VALIDO \n";
        }

        if (($idMuestra == "") || ($idMuestra == "0")) {
            $errorDatos = true;
            $mensajeErrorDatos .= " SOLICITUD DE TOMA DE MUESTRA NO VALIDA \n";
        }

        if (!$errorDatos) {
            $error = false;

            #CONSULTAMOS INFORMACION DEL TOMA DE MUESTRAS
            $RespMuestraDao = new RespuestamuestraDAO();
            $RespMuestraDto = new RespuestamuestraDTO();
            $RespMuestraDto->setIdMuestra($idMuestra);
            $RespMuestraDto = $RespMuestraDao->selectRespuestamuestra($RespMuestraDto);
            if ($RespMuestraDto != "" && count($RespMuestraDto) > 0) {
                $RespMuestraDto = $RespMuestraDto[0];

                #CONSULTAMOS INFORMACION DE LA SOLICITUD
                $solicitudesmuestrasDao = new SolicitudesmuestrasDAO();
                $solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
                $solicitudesmuestrasDto->setIdSolicitudMuestra($RespMuestraDto->getIdSolicitudMuestra());
                $solicitudesmuestrasDto = $solicitudesmuestrasDao->selectSolicitudesmuestras($solicitudesmuestrasDto);
                if ($solicitudesmuestrasDto != "" && count($solicitudesmuestrasDto) > 0) {
                    $solicitudesmuestrasDto = $solicitudesmuestrasDto[0];

                    if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() == "3") {
                        return array("type" => "Error", "text" => "LA SOLICITUD DE LA TOMA DE MUESTRAS YA SE ENCUENTRA CONTESTADA");
                    }
                    if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() == "4") {
                        return array("type" => "Error", "text" => "LA SOLICITUD DE LA TOMA DE MUESTRAS SE ENCUENTRA CANCELADA");
                    }

                    #OBTENEMOS LAS SOLICITUDES QUE ESTAN ASIGNADAS A UN JUEZ
                    $juzgadoresmuestrasDto = new JuzgadoresmuestrasDTO();
                    $juzgadoresmuestrasDao = new JuzgadoresmuestrasDAO();
                    $juzgadoresmuestrasDto->setIdSolicitudMuestra($RespMuestraDto->getIdSolicitudMuestra());
                    $juzgadoresmuestrasDto = $juzgadoresmuestrasDao->selectJuzgadoresmuestras($juzgadoresmuestrasDto, "", "", null);
                    if ($juzgadoresmuestrasDto != "" && count($juzgadoresmuestrasDto) > 0) {
                        $juzgadoresmuestrasDto = $juzgadoresmuestrasDto[0];

                        $juezAnterior = $juzgadoresmuestrasDto->getIdJuzgador();
                        $errorUpdate = false;
                        $mensajeErrorUpdate = "";

                        #INICIAMOS TRANSACCION DE LA BASE DE DATOS
                        $proveedor = new Proveedor('mysql', 'sigejupe');
                        $proveedor->connect();
                        $proveedor->execute("BEGIN");

                        #SI ENCUENTRA TODA LA INFORMACION, SE ACTUALIZARA LA INFORMACION DEL JUEZ
                        $juzgadoresmuestrasUpdateDto = new JuzgadoresmuestrasDTO();
                        $juzgadoresmuestrasDao = new JuzgadoresmuestrasDAO();
                        $juzgadoresmuestrasUpdateDto->setIdJuzgador($idJuzgador);
                        $juzgadoresmuestrasUpdateDto->setIdJuzgadorMuestra($juzgadoresmuestrasDto->getIdJuzgadorMuestra());
                        $juzgadoresmuestrasUpdateDto = $juzgadoresmuestrasDao->updateJuzgadoresmuestras($juzgadoresmuestrasUpdateDto);
                        if ($juzgadoresmuestrasUpdateDto != "" && count($juzgadoresmuestrasUpdateDto) > 0) {
                            $juzgadoresmuestrasUpdateDto = $juzgadoresmuestrasUpdateDto[0];
                        } else {
                            $errorUpdate = true;
                            $mensajeErrorUpdate = " ERROR AL ACTUALIZAR LA INFORMACION DE EL JUZGADOR DE LA TOMA DE MUESTRAS ";
                        }

                        #OBTENEMOS INFORMACIÓN DEL JUZGADO A SOLICITAR 
                        if (!$errorUpdate) {
                            $JuzgadosDao = new JuzgadosDAO();
                            $JuzgadosDto = new JuzgadosDTO();
                            $JuzgadosDto->setCveJuzgado($solicitudesmuestrasDto->getCveJuzgadoDesahoga()); #Id del juzgado a solicitar
                            $JuzgadosDto->setActivo("S");
                            $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, "", $proveedor);
                            if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                                $JuzgadosDto = $JuzgadosDto[0];
                                #OBTENEMOS INFORMACION DEL ADMINISTRADOR DEL JUZGADO
                                $file = dirname(__FILE__) . "/../../../archivos/actadminjuzgadosmuestras" . $JuzgadosDto->getCveJuzgado() . ".json";
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
                                $numeroAnioMuestra = md5($RespMuestraDto->getIdMuestra() . "-4");
                                $chatMessageDto = new ChatMessagesDTO(); //NOTIFICACION DE CAMBIO DE JUEZ
                                $chatMessagesDao = new ChatMessagesDAO();
                                $chatMessageDto->setChatId($numeroAnioMuestra);
                                $chatMessageDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                                $chatMessageDto->setMensaje("SE REALIZO CAMBIO DEL JUEZ:" . $juzgadorAnteriorDto->getTitulo() . " " . $juzgadorAnteriorDto->getNombre() . "  " . $juzgadorAnteriorDto->getPaterno() . " " . $juzgadorAnteriorDto->getMaterno() . " DE LA TOMA DE MUESTRAS: " . $RespMuestraDto->getNumeroMuestra() . "/" . $RespMuestraDto->getAnioMuestra());
                                $chatMessageDto->setCveUsuario($juzgadorAnteriorDto->getCveUsuario());
                                $chatMessageDto->setNombreUsuario($juzgadorAnteriorDto->getTitulo() . " " . $juzgadorAnteriorDto->getNombre() . "  " . $juzgadorAnteriorDto->getPaterno());
                                $chatMessageDto->setCveNumero($RespMuestraDto->getIdMuestra());
                                $chatMessageDto->setTipoChat("4"); # tipo chat 1 = cateo
                                $chatMessageDto = $chatMessagesDao->insertChatMessages($chatMessageDto, $proveedor);
                                if ($chatMessageDto != "" && count($chatMessageDto) > 0) {
                                    $chatMessageDto = $chatMessageDto[0];
                                } else {
                                    $errorUpdate = true;
                                    $tmp = array("type" => "Error", "text" => "ERROR AL AGREGAR ULTIMO MENSAJE DEL JUEZ ORIGINAL A LA SALA DE CHAT DE TOMA DE MUESTRAS");
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
                                $numeroAnioMuestra = md5($RespMuestraDto->getIdMuestra() . "-4");
                                $chatMessageDto = new ChatMessagesDTO(); //INVITACIÓN A NUEVO JUEZ
                                $chatMessagesDao = new ChatMessagesDAO();
                                $chatMessageDto->setChatId($numeroAnioMuestra);
                                $chatMessageDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                                $chatMessageDto->setMensaje("SE AGREGO A JUEZ:" . $juzgadorNuevoDto->getTitulo() . " " . $juzgadorNuevoDto->getNombre() . "  " . $juzgadorNuevoDto->getPaterno() . " " . $juzgadorNuevoDto->getMaterno() . "AL CHAT DE TOMA DE MUESTRAS: " . $RespMuestraDto->getNumeroMuestra() . "/" . $RespMuestraDto->getAnioMuestra());
                                $chatMessageDto->setCveUsuario($juzgadorNuevoDto->getCveUsuario());
                                $chatMessageDto->setNombreUsuario($juzgadorNuevoDto->getTitulo() . " " . $juzgadorNuevoDto->getNombre() . "  " . $juzgadorNuevoDto->getPaterno() . " " . $juzgadorNuevoDto->getMaterno());
                                $chatMessageDto->setCveNumero($RespMuestraDto->getIdMuestra());
                                $chatMessageDto->setTipoChat("1"); # tipo chat 1 = cateo
                                $chatMessageDto = $chatMessagesDao->insertChatMessages($chatMessageDto, $proveedor);
                                if ($chatMessageDto != "" && count($chatMessageDto) > 0) {
                                    $chatMessageDto = $chatMessageDto[0];
                                } else {
                                    $errorUpdate = true;
                                    $tmp = array("type" => "Error", "text" => "ERROR AL AGREGAR AL NUEVO JUEZ A LA SALA DE CHAT DE TOMA DE MUESTRAS");
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
                            $numeroAnioMuestra = md5($RespMuestraDto->getIdMuestra() . "-4");
                            $chatMessagesDao = new ChatMessagesDAO();
                            $chatMessageDto = $chatMessagesDao->updateChatmessagesJuzgadores($juzgadorAnterior, $juzgadorNuevo, $numeroAnioMuestra, $proveedor);
                            if ($chatMessageDto != "" && count($chatMessageDto) > 0) {
                                $chatMessageDto = $chatMessageDto[0];
                            } else {
                                $errorUpdate = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL ACTUALIZARLA CLAVE DEL NUEVO JUEZ EN LA SALA DE CHAT DE TOMA DE MUESTRAS");
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
                                $mensajeErrorUpdate = utf8_encode("ERROR NO SE ENCONTRARON DATOS DE NOTIFICACI&Oacute;N DEL NUEVO JUEZ");
                                $tmp = array("type" => "Error", "text" => utf8_encode("ERROR NO SE ENCONTRARON DATOS DE NOTIFICACI&Oacute;N DEL NUEVO JUEZ"));
                            }
                        }

                        #PROCESO PARA ENVIAR CORREO ELECTRONICO AL NUEVO JUEZ
                        if (!$errorUpdate) {
                            $fechaMuestra = $RespMuestraDto->getFechaRegistro();
                            $horaMuestra = explode(' ', $fechaMuestra);
                            $horaMuestra = $horaMuestra[1];

                            if ($mailsnuevoJuez != "") {
                                $objDatCorreo = $this->plantillaCorreo("muestras");
                                foreach ($mailsnuevoJuez as $emailnvoJuez) {
                                    if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                                        $emailJuez = $emailnvoJuez;
                                        $nombrenvoJuez = $juzgadorNuevoDto->getNombre() . " " . $juzgadorNuevoDto->getPaterno() . " " . $juzgadorNuevoDto->getMaterno();
                                        $xNombre = utf8_encode($nombrenvoJuez);
                                        if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                                            $correoJuez = new EmailHELPER();
                                            $correoJuez->setSenderAddress($objDatCorreo->CorreoRemite);
                                            $correoJuez->setToAddress(trim($emailJuez));
                                            $correoJuez->setToName("Solicitud de Toma de Muestras - SUSTITUTO");
                                            $correoJuez->setSubject($objDatCorreo->Subject);
                                            $correoJuez->setHostSmtp($objDatCorreo->IpSMTP);
                                            $correoJuez->setPortSmtp($objDatCorreo->PortSMTP);
                                            $correoJuez->setIsHTMLFormat(true);
                                            $strCuerpoEmailJuez = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                            $strCuerpoEmailJuez = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaMuestra . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaMuestra) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),
                                           se realiz&oacute; el cambio de juzgador del <b>" . $JuzgadosDto->getDesJuzgado() . "</b> de la solicitud de Actos de Investigaci&oacute;n que requieren autorizaci&oacute;n judicial (Toma de Muestras) n&uacute;mero <b>" . str_pad($RespMuestraDto->getNumeroMuestra(), 6, '0', STR_PAD_LEFT) . "/" . $RespMuestraDto->getAnioMuestra() . "</b>, 
                                           la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                                            $strCuerpoEmailJuez .= "</body>\n</html>\n\n";
                                            $correoJuez->setBody($strCuerpoEmailJuez);
                                            $intentos = 1;
                                            $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                            while ($intentos <= 20) {
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
                                                $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                                $BitacoranotificacionesDto->setCveTipoActuacion("25"); #12 - TOMA DE MUESTRAS
                                                $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                                $BitacoranotificacionesDto->setIdReferencia($RespMuestraDto->getIdMuestra()); #ID DEL TOMA DE MUESTRAS
                                                $BitacoranotificacionesDto->setNumero($RespMuestraDto->getNumeroMuestra()); #NUMERO DE TOMA DE MUESTRAS
                                                $BitacoranotificacionesDto->setAnio($RespMuestraDto->getAnioMuestra()); #AÑO DEL TOMA DE MUESTRAS
                                                $BitacoranotificacionesDto->setCvejuzgado($solicitudesmuestrasDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                                $BitacoranotificacionesDto->setCveUsuario($juzgadorNuevoDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                                $BitacoranotificacionesDto->setMedio($emailJuez);
                                                $BitacoranotificacionesDto->setMovimiento($movimiento);
                                                $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                                if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                                    
                                                } else {
                                                    $errorUpdate = true;
                                                    $mensajeErrorUpdate = utf8_encode("ERROR AL GUARDAR EN BITACORA DE NOTIFICACI&Oacute;N - CORREO JUEZ");
                                                    $tmp = array("type" => "Error", "text" => utf8_encode("ERROR AL GUARDAR EN BITACORA DE NOTIFICACI&Oacute;N - CORREO JUEZ"));
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
                                            $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion("25"); #12 - TOMA DE MUESTRAS
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                            $BitacoranotificacionesDto->setIdReferencia($RespMuestraDto->getIdMuestra()); #ID DEL TOMA DE MUESTRAS
                                            $BitacoranotificacionesDto->setNumero($RespMuestraDto->getNumeroMuestra()); #NUMERO DE TOMA DE MUESTRAS
                                            $BitacoranotificacionesDto->setAnio($RespMuestraDto->getAnioMuestra()); #AÑO DEL TOMA DE MUESTRAS
                                            $BitacoranotificacionesDto->setCvejuzgado($solicitudesmuestrasDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                            $BitacoranotificacionesDto->setCveUsuario($juzgadorNuevoDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                            $BitacoranotificacionesDto->setMedio($emailJuez);
                                            $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO");
                                            $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                            if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                                
                                            } else {
                                                $errorUpdate = true;
                                                $mensajeErrorUpdate = utf8_encode("ERROR AL GUARDAR EN BITACORA DE NOTIFICACI&Oacute;N - CORREO JUEZ");
                                                $tmp = array("type" => "Error", "text" => utf8_encode("ERROR AL GUARDAR EN BITACORA DE NOTIFICACI&Oacute;N - CORREO JUEZ"));
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
                                    $objDatCorreo = $this->plantillaCorreo("muestras");
                                    foreach ($adminJuzgados["usuarios"] as $usuarios) {
                                        if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                                            $emailAdministrador = $usuarios["email"];
                                            $xNombre = strtoupper(utf8_decode($usuarios["Nombre"] . " " . $usuarios["Paterno"] . " " . $usuarios["Materno"]));
                                            if ((trim($emailAdministrador) != "") && (strlen($emailAdministrador) > 1)) {
                                                $correoAdministrador = new EmailHELPER();
                                                $correoAdministrador->setSenderAddress($objDatCorreo->CorreoRemite);
                                                $correoAdministrador->setToAddress(trim($emailAdministrador));
                                                $correoAdministrador->setToName("Solicitud de Toma de MUestras - ADMINISTRADOR");
                                                $correoAdministrador->setSubject($objDatCorreo->Subject);
                                                $correoAdministrador->setHostSmtp($objDatCorreo->IpSMTP);
                                                $correoAdministrador->setPortSmtp($objDatCorreo->PortSMTP);
                                                $correoAdministrador->setIsHTMLFormat(true);
                                                $strCuerpoEmailAdm = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                                $strCuerpoEmailAdm = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaMuestra . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaMuestra) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),
                                                        se realiz&oacute; el cambio de juzgador del <b>" . $JuzgadosDto->getDesJuzgado() . "</b> de la solicitud de Actos de Investigaci&oacute;n que requieren autorizaci&oacute;n judicial (Toma de Muestras) n&uacute;mero <b>" . str_pad($RespMuestraDto->getNumeroMuestra(), 6, '0', STR_PAD_LEFT) . "/" . $RespMuestraDto->getAnioMuestra() . "</b>, 
                                                        la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                                                $strCuerpoEmailAdm .= "</body>\n</html>\n\n";
                                                $correoAdministrador->setBody($strCuerpoEmailAdm);
                                                $intentos = 1;
                                                $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                                while ($intentos <= 20) {
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
                                                    $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                                    $BitacoranotificacionesDto->setCveTipoActuacion("25"); #12 - TOMA DE MUESTRAS
                                                    $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                                    $BitacoranotificacionesDto->setIdReferencia($RespMuestraDto->getIdMuestra()); #ID DEL TOMA DE MUESTRAS
                                                    $BitacoranotificacionesDto->setNumero($RespMuestraDto->getNumeroMuestra()); #NUMERO DE TOMA DE MUESTRAS
                                                    $BitacoranotificacionesDto->setAnio($RespMuestraDto->getAnioMuestra()); #AÑO DEL TOMA DE MUESTRAS
                                                    $BitacoranotificacionesDto->setCvejuzgado($solicitudesmuestrasDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                                    $BitacoranotificacionesDto->setCveUsuario($usuarios["CveUsuario"]); #Id de el usuario al que se le envio el correo
                                                    $BitacoranotificacionesDto->setMedio($emailAdministrador);
                                                    $BitacoranotificacionesDto->setMovimiento($movimiento);
                                                    $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                                    if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                                        
                                                    } else {
                                                        $errorUpdate = true;
                                                        $tmp = array("type" => "Error", "text" => utf8_encode("ERROR AL GUARDAR EN BITACORA DE NOTIFICACI&Oacute;N - CORREO ADMINISTRADOR"));
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
                                                $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                                $BitacoranotificacionesDto->setCveTipoActuacion("25"); #12 - TOMA DE MUESTRAS
                                                $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                                $BitacoranotificacionesDto->setIdReferencia($RespMuestraDto->getIdMuestra()); #ID DEL TOMA DE MUESTRAS
                                                $BitacoranotificacionesDto->setNumero($RespMuestraDto->getNumeroMuestra()); #NUMERO DE TOMA DE MUESTRAS
                                                $BitacoranotificacionesDto->setAnio($RespMuestraDto->getAnioMuestra()); #AÑO DEL TOMA DE MUESTRAS
                                                $BitacoranotificacionesDto->setCvejuzgado($solicitudesmuestrasDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                                $BitacoranotificacionesDto->setCveUsuario($usuarios["CveUsuario"]); #Id de el usuario al que se le envio el correo
                                                $BitacoranotificacionesDto->setMedio($emailAdministrador);
                                                $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO");
                                                $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                                if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                                    
                                                } else {
                                                    $errorUpdate = true;
                                                    $mensajeErrorUpdate = utf8_encode("ERROR AL GUARDAR EN BITACORA DE NOTIFICACI&Oacute;N - CORREO JUEZ");
                                                    $tmp = array("type" => "Error", "text" => utf8_encode("ERROR AL GUARDAR EN BITACORA DE NOTIFICACI&Oacute;N - CORREO JUEZ"));
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
                                $tmp = array("type" => "Error", "text" => utf8_encode("ERROR NO SE ENCONTRARON DATOS DE NOTIFICACI&Oacute;N DEL JUEZ ANTERIOR"));
                                $mensajeErrorUpdate = utf8_encode("ERROR NO SE ENCONTRARON DATOS DE NOTIFICACI&Oacute;N DEL JUEZ ANTERIOR");
                            }
                        }

                        #PROCESO PARA ENVIAR CORREO ELECTRONICO AL JUEZ ANTERIOR
                        if (!$errorUpdate) {
                            if ($mailsantJuez != "") {
                                $objDatCorreo = $this->plantillaCorreo("muestras");
                                foreach ($mailsantJuez as $mailantJuez) {
                                    if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                                        $emailJuezAnterior = $mailantJuez;
                                        $nombreAnt = $juzgadorAnteriorDto->getNombre() . " " . $juzgadorAnteriorDto->getPaterno() . " " . $juzgadorAnteriorDto->getMaterno();
                                        $xNombre = strtoupper(utf8_encode($nombreAnt));
                                        if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                                            $correoJuezAnterior = new EmailHELPER();
                                            $correoJuezAnterior->setSenderAddress($objDatCorreo->CorreoRemite);
                                            $correoJuezAnterior->setToAddress(trim($emailJuez));
                                            $correoJuezAnterior->setToName("Solicitud de TOMA DE MUESTRAS - REMPLAZO");
                                            $correoJuezAnterior->setSubject($objDatCorreo->Subject);
                                            $correoJuezAnterior->setHostSmtp($objDatCorreo->IpSMTP);
                                            $correoJuezAnterior->setPortSmtp($objDatCorreo->PortSMTP);
                                            $correoJuezAnterior->setIsHTMLFormat(true);
                                            $strCuerpoEmailJuez = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                            $strCuerpoEmailJuez = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaMuestra . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaMuestra) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),
                                           se realiz&oacute; el cambio de juzgador del <b>" . $JuzgadosDto->getDesJuzgado() . "</b> de la solicitud de Actos de Investigaci&oacute;n que requieren autorizaci&oacute;n judicial (Toma de Muestras) n&uacute;mero <b>" . str_pad($RespMuestraDto->getNumeroMuestra(), 6, '0', STR_PAD_LEFT) . "/" . $RespMuestraDto->getAnioMuestra() . "</b>, 
                                           la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                                            $strCuerpoEmailJuez .= "</body>\n</html>\n\n";
                                            $correoJuezAnterior->setBody($strCuerpoEmailJuez);
                                            $intentos = 1;
                                            $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                            while ($intentos <= 20) {
                                                $bolStatusMailJuezAnterior = $correoJuezAnterior->send();
                                                $cveEstatusNotificacion = "1";
                                                $movimiento = "";
                                                if ($bolStatusMailJuezAnterior == true) {
                                                    $cveEstatusNotificacion = "2";
                                                    $movimiento = "SE LOGRO ENVIAR CORREO ELECTRONICO A: $nombreAnt";
                                                } else {
                                                    $cveEstatusNotificacion = "3";
                                                    $movimiento = "NO SE LOGRO ENVIAR CORREO ELECTRONICO A: $nombreAnt";
                                                }
                                                $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                                $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                                $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                                $BitacoranotificacionesDto->setCveTipoActuacion("25"); #12 - TOMA DE MUESTRAS
                                                $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                                $BitacoranotificacionesDto->setIdReferencia($RespMuestraDto->getIdMuestra()); #ID DEL TOMA DE MUESTRAS
                                                $BitacoranotificacionesDto->setNumero($RespMuestraDto->getNumeroMuestra()); #NUMERO DE TOMA DE MUESTRAS
                                                $BitacoranotificacionesDto->setAnio($RespMuestraDto->getAnioMuestra()); #AÑO DEL TOMA DE MUESTRAS
                                                $BitacoranotificacionesDto->setCvejuzgado($solicitudesmuestrasDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                                $BitacoranotificacionesDto->setCveUsuario($juzgadorAnteriorDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                                $BitacoranotificacionesDto->setMedio($emailJuezAnterior);
                                                $BitacoranotificacionesDto->setMovimiento($movimiento);
                                                $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                                if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                                    
                                                } else {
                                                    $errorUpdate = true;
                                                    $tmp = array("type" => "Error", "text" => utf8_encode("ERROR AL GUARDAR EN BITACORA DE NOTIFICACI&Oacute;N - CORREO JUEZ ANTERIOR"));
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
                                            $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion("25"); #12 - TOMA DE MUESTRAS
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                            $BitacoranotificacionesDto->setIdReferencia($RespMuestraDto->getIdMuestra()); #ID DEL TOMA DE MUESTRAS
                                            $BitacoranotificacionesDto->setNumero($RespMuestraDto->getNumeroMuestra()); #NUMERO DE TOMA DE MUESTRAS
                                            $BitacoranotificacionesDto->setAnio($RespMuestraDto->getAnioMuestra()); #AÑO DEL TOMA DE MUESTRAS
                                            $BitacoranotificacionesDto->setCvejuzgado($solicitudesmuestrasDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                            $BitacoranotificacionesDto->setCveUsuario($juzgadorAnteriorDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                            $BitacoranotificacionesDto->setMedio($emailJuezAnterior);
                                            $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO");
                                            $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                            if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                                
                                            } else {
                                                $errorUpdate = true;
                                                $mensajeErrorUpdate = utf8_encode("ERROR AL GUARDAR EN BITACORA DE NOTIFICACI&Oacute;N - CORREO JUEZ");
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
                        ##GUARDAMOS EN BITACORA EL REGISTRO DEL TOMA DE MUESTRAS
                        if (!$errorUpdate) {
                            $BitacoramovimientosDao = new BitacoramovimientosDAO();
                            $BitacoramovimientosDto = new BitacoramovimientosDTO();
                            $BitacoramovimientosDto->setCveAccion("75"); #75 - CAMBIA JUEZ TOMA DE MUESTRAS
                            $BitacoramovimientosDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
                            $BitacoramovimientosDto->setCvePerfil($RespMuestraDto->getIdMuestra()); #ID DEL TOMA DE MUESTRAS
                            $BitacoramovimientosDto->setCveAdscripcion($solicitudesmuestrasDto->getCveJuzgadoDesahoga());
                            if (($bolStatusMailJuezAnterior == true) && ($bolStatusMailJuez == true) && ($bolStatusMailAdm == true)) {
                                $BitacoramovimientosDto->setObservaciones("MODIFICO JUEZ DE LA SOLICITUD DE TOMA DE MUESTRAS: JUEZ ANTERIOR: " . $juezAnterior . " JUEZ NUEVO: " . $idJuzgador);
                            } else {
                                $observaciones = "MODIFICO JUEZ DE LA SOLICITUD DE TOMA DE MUESTRAS: JUEZ ANTERIOR: " . $juezAnterior . " JUEZ NUEVO: " . $idJuzgador;
                                $observaciones.=($bolStatusMailJuezAnterior == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                                $observaciones.=$emailJuezAnterior;
                                $observaciones.=($bolStatusMailJuez == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                                $observaciones.=$emailJuez;
                                $observaciones.=($bolStatusMailAdm == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                                $observaciones.=$emailAdministrador;
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
                                    "text" => "CAMBIO DE JUEZ DE FORMA EXITOSA Y A SU VEZ SE REMITE CORREO ELECTRONICO");
                            } else {
                                if ($movimiento != "") {
                                    $movimiento .= ", " . $movimiento;
                                }
                                $tmp = array("type" => "OK",
                                    "text" => "CAMBIO DE JUEZ DE FORMA EXITOSA" . $movimiento);
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
                    return array("type" => "Error", "text" => "NO SE ENCONTRO LA SOLICITUD DE LA TOMA DE MUESTRAS");
                }
            } else {
                return array("type" => "Error", "text" => "NO SE ENCONTRO LA SOLICITUD DE TOMA DE MUESTRAS ESPECIFICADA");
            }
        } else {
            return array("type" => "Error", "text" => "INFORMACION INCOMPLETA: " . $mensajeErrorDatos);
        }
    }

    public function consultarMuestraInformacionBitacora($type, $solicitudesmuestrasDto, $param = "") {
        $datos = [];
        if ($type != 0 && $type != "") {
            $idUsuario = $_SESSION['cveUsuarioSistema'];
            $numeroMuestra = $param["numeroMuestra"];
            $anioMuestra = $param["anioMuestra"];

            $fechaRegistro = $solicitudesmuestrasDto->getFechaRegistro();
            $idJuzgadoT = 0;
            if ($solicitudesmuestrasDto->getCveJuzgado() != "") {
                $idJuzgadoT = $solicitudesmuestrasDto->getCveJuzgado();
            }
            $filtros["numeroMuestra"] = $numeroMuestra;
            $filtros["anioMuestra"] = $anioMuestra;
            $fechaEnd = $param["fechaEnd"];
            if ($fechaEnd != "") {
                $filtros["fechaRegistro"] = "";
            } else {
                $filtros["fechaRegistro"] = $fechaRegistro;
            }
            $filtros["idJuzgadoT"] = $idJuzgadoT;
            $solicitudesmuestrasDto = new SolicitudesmuestrasDTO();
            $solMuestrasDAO = new SolicitudesmuestrasDAO();
            $idJuzgadoDesahoga = $_SESSION['cveAdscripcion'];

            $RespMuestraDto = new RespuestamuestraDTO();
            $cateoDao = new RespuestamuestraDAO();
            $RespMuestraDto->setNumeroMuestra($numeroMuestra);
            $RespMuestraDto->setAnioMuestra($anioMuestra);
            $RespMuestraDto = $solMuestrasDAO->consultaDetalleMuestrasJuzgadoAdmon($RespMuestraDto, $idJuzgadoDesahoga, "ORDER BY fechaRegistro DESC", null, $param);
            if ($RespMuestraDto != "") {
                $datos = [];
                $i = 0;
                foreach ($RespMuestraDto as $index => $value) {
                    $filtros["idSolicitudMuestra"] = $value->getIdSolicitudMuestra();
                    $resultado = $this->infoMuestrasDetalle($filtros);
                    if ($resultado != "" && count($resultado) != 0) {
                        $datos["datos"][$i] = $resultado;
                        $i++;
                    }
                }
                // Obtenemos el numero de paginas
                $RespMuestraDto = new RespuestamuestraDTO();
                $RespMuestraDto->setNumeroMuestra($numeroMuestra);
                $RespMuestraDto->setAnioMuestra($anioMuestra);
                $param["fields"] = " count(idMuestra) as totalCount ";
                $RespMuestraDto = $solMuestrasDAO->consultaDetalleMuestrasJuzgadoAdmon($RespMuestraDto, $idJuzgadoDesahoga, "ORDER BY fechaRegistro DESC", null, $param);
                $datos["total"] = (int) $RespMuestraDto[0];
                $paginas = $this->getPaginas($RespMuestraDto, $param);
                $datos["paginas"] = $paginas;
            } else {
                return array("status" => "Error");
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

    public function getAdminInfoJuzgadorWS($juzgado) {
        try {
            if ($juzgado != "") {
                $usuariosCliente = new UsuarioCliente();
                $admons = $usuariosCliente->selectUsuariosGrupoSistema(97, 38, $juzgado);
                if ($admons != "") {
                    $file = fopen(dirname(__FILE__) . "/../../../archivos/actadminjuzgadosmuestras$juzgado.json", "w");
                    fwrite($file, $admons);
                    fclose($file);
                } else {
                    
                }
            }
        } catch (Exception $e) {
            
        }
    }

    /**
     * 
     * @param type $idSolicitudMuestra
     * @param type $motivoCancelacion
     * @param Proveedor $proveedor
     * @return stringe-israel
     */
    public function cancelarSolicitudMuestra($idSolicitudMuestra, $motivoCancelacion) {
        $errorDatos = false;
        $mensajeErrorDatos = false;

        if (($idSolicitudMuestra == "") || ($idSolicitudMuestra == "0")) {
            $errorDatos = true;
            $mensajeErrorDatos .= " SOLICITUD DE MUESTRA NO VALIDA \n";
        }

        if (!$errorDatos) {
            $error = false;

            #CONSULTAMOS INFORMACION DEL CATEO
            $solicitudesmuestrasDto = new solicitudesmuestrasDTO();
            $solicitudesmuestrasDao = new solicitudesmuestrasDAO();
            $solicitudesmuestrasDto->setIdSolicitudMuestra($idSolicitudMuestra);
            $solicitudesmuestrasDto = $solicitudesmuestrasDao->selectSolicitudesmuestras($solicitudesmuestrasDto);

            if ($solicitudesmuestrasDto != "" && count($solicitudesmuestrasDto) > 0) {
                $solicitudesmuestrasDto = $solicitudesmuestrasDto[0];

                #VERIFICAMOS QUE EL ESTATUS DE EL CATEO SEA REGISTRADO O CONSULTADO
                if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() == "1" || $solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() == "2") {
                    $errorCancelacion = false;
                    $mensajeErrorCancelacion = "";

                    #INICIAMOS TRANSACCION DE LA BASE DE DATOS
                    $proveedor = new Proveedor('mysql', 'sigejupe');
                    $proveedor->connect();
                    $proveedor->execute("BEGIN");

                    #SI ENCUENTRA TODA LA INFORMACION, SE ACTUALIZARA LA INFORMACION DEL JUEZ
                    $solicitudesmuestrasCancelDto = new SolicitudesmuestrasDTO();
                    $solicitudesmuestrasCancelDto->setIdSolicitudMuestra($solicitudesmuestrasDto->getIdSolicitudMuestra());
                    $solicitudesmuestrasCancelDto->setCveEstatusSolicitudMuestra("4");
                    $solicitudesmuestrasCancelDto = $solicitudesmuestrasDao->updateSolicitudesmuestras($solicitudesmuestrasCancelDto, $proveedor);

                    if ($solicitudesmuestrasCancelDto != "" && count($solicitudesmuestrasCancelDto) > 0) {
                        $solicitudesmuestrasCancelDto = $solicitudesmuestrasCancelDto[0];
                        if ($solicitudesmuestrasCancelDto->getCveEstatusSolicitudMuestra() != "4") {
                            $errorCancelacion = true;
                            $mensajeErrorUpdate = " ERROR AL CANCELAR LA SOLICITUD DE MUESTRA";
                        }
                    } else {
                        $errorCancelacion = true;
                        $mensajeErrorUpdate = " ERROR AL CANCELAR LA SOLICITUD DE MUESTRA";
                    }


                    if (!$errorCancelacion) {
                        $respuestamuestraDto = new RespuestamuestraDTO();
                        $respuestamuestraDao = new RespuestamuestraDAO();
                        $respuestamuestraDto->setIdSolicitudMuestra($solicitudesmuestrasDto->getIdSolicitudMuestra());
                        $respuestamuestraDto = $respuestamuestraDao->selectRespuestamuestra($respuestamuestraDto);
                        if ($solicitudesmuestrasCancelDto != "" && count($solicitudesmuestrasCancelDto) > 0) {
                            $respuestamuestraDto = $respuestamuestraDto[0];
                        } else {
                            $errorCancelacion = true;
                            $mensajeErrorUpdate = " ERROR AL NO ENCONTRAR INFORMACION DE LA MUESTRA";
                        }
                    }

                    if (!$errorCancelacion) {
                        $respuestamuestraUpdateDto = new RespuestamuestraDTO();
                        $respuestamuestraDao = new RespuestamuestraDAO();
                        $respuestamuestraUpdateDto->setIdMuestra($respuestamuestraDto->getIdMuestra());
                        $respuestamuestraUpdateDto->setMotivoCancelacion($motivoCancelacion);
                        $respuestamuestraUpdateDto = $respuestamuestraDao->updateRespuestamuestra($respuestamuestraUpdateDto);
                        if ($solicitudesmuestrasCancelDto != "" && count($solicitudesmuestrasCancelDto) > 0) {
                            $respuestamuestraUpdateDto = $respuestamuestraUpdateDto[0];
                        } else {
                            $errorCancelacion = true;
                            $mensajeErrorUpdate = " ERROR AL ACTUALIZAR EL MOTIVO DE LA CANCELACIÓN";
                        }
                    }

                    #OBTENEMOS INFORMACIÓN DEL JUZGADO A SOLICITAR 
                    if (!$errorCancelacion) {
                        $JuzgadosDao = new JuzgadosDAO();
                        $JuzgadosDto = new JuzgadosDTO();
                        $JuzgadosDto->setCveJuzgado($solicitudesmuestrasDto->getCveJuzgadoDesahoga()); #Id del juzgado a solicitar
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
                        $muestraJuez = new JuzgadoresmuestrasDTO();
                        $muestraJuez->setActivo("S");
                        $muestraJuez->setIdSolicitudMuestra($solicitudesmuestrasDto->getIdSolicitudMuestra());
                        $muestraJuezDao = new JuzgadoresmuestrasDAO();
                        $muestraJuez = $muestraJuezDao->selectJuzgadoresmuestras($muestraJuez);
                        if ($muestraJuez != "" && count($muestraJuez) > 0) {
                            $muestraJuez = $muestraJuez[0];
                        } else {
                            $errorCancelacion = true;
                            $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO - CATEO");
                        }
                    }

                    #OBTENEMOS LA INFORMACION DEL JUZGADOR
                    if (!$errorCancelacion) {
                        $juzgadoresDto = new JuzgadoresDTO();
                        $juzgadoresDto->setActivo("S");
                        $juzgadoresDto->setIdJuzgador($muestraJuez->getIdJuzgador());
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
                        $fechaSolicitud = $solicitudesmuestrasDto->getFechaRegistro();
                        $horaSolicitud = explode(' ', $fechaSolicitud);
                        $horaSolicitud = $horaSolicitud[1];

                        #PROCESO PARA ENVIAR CORREO ELECTRONICO AL JUEZ NOTIFICANDO LA CANCELACIÓN DE LA AOLICITUD DEL CATEO
                        /**
                         * @todo verificar que exista plantilla
                         */
                        $objDatCorreo = $this->plantillaCorreo("muestras");
                        if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
//                            $emailJuez = "ricardo.ortiz@pjedomex.gob.mx";
                            if ($emails != "") {
                                foreach ($emails as $email) {
                                    $emailJuez = $email;
                                    if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                                        $correoJuez = new EmailHELPER();
                                        $correoJuez->setSenderAddress($objDatCorreo->CorreoRemite);
                                        $correoJuez->setToAddress(trim($emailJuez));
                                        $correoJuez->setToName("Cancelación - Solicitud de toma de muestra - Juez");
                                        $correoJuez->setSubject($objDatCorreo->Subject);
                                        $correoJuez->setHostSmtp($objDatCorreo->IpSMTP);
                                        $correoJuez->setPortSmtp($objDatCorreo->PortSMTP);
                                        $correoJuez->setIsHTMLFormat(true);
                                        $strCuerpoEmailJuez = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                        $strCuerpoEmailJuez = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaSolicitud . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaSolicitud) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE), la solicitud de toma de muestra n&uacute;mero <b>" . str_pad($solicitudesmuestrasDto->getNumero(), 6, '0', STR_PAD_LEFT) . "/" . $solicitudesmuestrasDto->getAnio() . "</b>,
                                        formulado ante el <b>" . $JuzgadosDto->getDesJuzgado() . "</b>, 
                                        se encuentra <b>CANCELADA</b>.";
                                        $strCuerpoEmailJuez .= "</body>\n</html>\n\n";
                                        $correoJuez->setBody($strCuerpoEmailJuez);
                                        $intentos = 1;
                                        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                        while ($intentos <= 20) {
                                            $bolStatusMailJuez = $correoJuez->send();
                                            $cveEstatusNotificacion = "1";
                                            $movimiento = "";
                                            if ($bolStatusMailJuez == true) {
                                                $cveEstatusNotificacion = "2";
                                                $movimiento = "SE LOGRÓ ENVIAR CORREO ELECTRONICO - CANCELACIÓN DE SOLICITUD DE TOMA DE MUESTRA";
                                            } else {
                                                $cveEstatusNotificacion = "3";
                                                $movimiento = "NO SE LOGRÓ ENVIAR CORREO ELECTRONICO - CANCELACIÓN DE SOLICITUD DE TOMA DE MUESTRA";
                                            }
                                            $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                            $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                            $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion("25"); #12 - TOMA DE MUESTRAS
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                            $BitacoranotificacionesDto->setIdReferencia($solicitudesmuestrasDto->getIdSolicitudMuestra()); #ID DE SOLICITUD MUESTRA
                                            $BitacoranotificacionesDto->setNumero($solicitudesmuestrasDto->getNumero()); #NUMERO DE SOLICITUD MUESTRA
                                            $BitacoranotificacionesDto->setAnio($solicitudesmuestrasDto->getAnio()); #AÑO SOLICITUD MUESTRA
                                            $BitacoranotificacionesDto->setCvejuzgado($solicitudesmuestrasDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
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
                                        $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                        $BitacoranotificacionesDto->setCveTipoActuacion("25"); #12 - TOMA DE MUESTRAS
                                        $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                        $BitacoranotificacionesDto->setIdReferencia($solicitudesmuestrasDto->getIdSolicitudMuestra()); #ID DE SOLICITUD MUESTRA
                                        $BitacoranotificacionesDto->setNumero($solicitudesmuestrasDto->getNumero()); #NUMERO DE SOLICITUD MUESTRA
                                        $BitacoranotificacionesDto->setAnio($solicitudesmuestrasDto->getAnio()); #AÑO DE SOLICITUD MUESTRA
                                        $BitacoranotificacionesDto->setCvejuzgado($solicitudesmuestrasDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                        $BitacoranotificacionesDto->setCveUsuario($juzgadoresDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                        $BitacoranotificacionesDto->setMedio($emailJuez);
                                        $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO - CANCELACIÓN DE SOLICITUD DE TOMA DE MUESTRA");
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
                    /**
                     * @todo verificar que exsta plantilla
                     */
                    if (!$errorCancelacion) {
                        $objDatCorreo = $this->plantillaCorreo("muestras");
                        if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                            if ((trim($respuestamuestraDto->getEmail()) != "") && (strlen($respuestamuestraDto->getEmail()) > 1)) {
                                $correoMp = new EmailHELPER();
                                $correoMp->setSenderAddress($objDatCorreo->CorreoRemite);
                                $correoMp->setToAddress(trim($respuestamuestraDto->getEmail()));
                                $correoMp->setToName("Cancelación - Solicitud de toma de muestra - MINISTERIO PUBLICO");
                                $correoMp->setSubject($objDatCorreo->Subject);
                                $correoMp->setHostSmtp($objDatCorreo->IpSMTP);
                                $correoMp->setPortSmtp($objDatCorreo->PortSMTP);
                                $correoMp->setIsHTMLFormat(true);
                                $strCuerpoEmailMP = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                $strCuerpoEmailMP = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaSolicitud . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaSolicitud) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE), la solicitud de toma de muestra n&uacute;mero <b>" . str_pad($solicitudesmuestrasDto->getNumero(), 6, '0', STR_PAD_LEFT) . "/" . $solicitudesmuestrasDto->getAnio() . "</b>,
                      formulado ante el <b>" . $JuzgadosDto->getDesJuzgado() . "</b>, 
                      se encuentra <b>CANCELADA</b>.";
                                $correoMp->setBody($strCuerpoEmailMP);
                                $intentos = 1;
                                $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                while ($intentos <= 20) {
                                    $bolStatusMailMP = $correoMp->send();
                                    $cveEstatusNotificacion = "1";
                                    $movimiento = "";
                                    if ($bolStatusMailMP == true) {
                                        $cveEstatusNotificacion = "2";
                                        $movimiento = "SE LOGRO ENVIAR CORREO ELECTRONICO - CANCELACIÓN DE SOLICITUD DE TOMA DE MUESTRA";
                                    } else {
                                        $cveEstatusNotificacion = "3";
                                        $movimiento = "NO SE LOGRO ENVIAR CORREO ELECTRONICO - CANCELACIÓN DE SOLICITUD DE TOMA DE MUESTRA";
                                    }
                                    $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                    $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                    $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                    $BitacoranotificacionesDto->setCveTipoActuacion("25"); #12 - TOMA DE MUESTRA
                                    $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                    $BitacoranotificacionesDto->setIdReferencia($solicitudesmuestrasDto->getIdSolicitudMuestra()); #ID DE SOLICITUD TOMA DE MUESTRA
                                    $BitacoranotificacionesDto->setNumero($solicitudesmuestrasDto->getNumero()); #NUMERO DE SOLICITUD DE MUESTRA
                                    $BitacoranotificacionesDto->setAnio($solicitudesmuestrasDto->getAnio()); #AÑO DE SOLICITUD TOMA DE MUESTRA
                                    $BitacoranotificacionesDto->setCvejuzgado($solicitudesmuestrasDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                    $BitacoranotificacionesDto->setCveUsuario($solicitudesmuestrasDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                    $BitacoranotificacionesDto->setMedio($respuestamuestraDto->getEmail());
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
                                $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                $BitacoranotificacionesDto->setCveTipoActuacion("25"); #12 - TOMA DE MUESTRA
                                $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                $BitacoranotificacionesDto->setIdReferencia($solicitudesmuestrasDto->getIdSolicitudMuestra()); #ID DE SOLICITUD MUESTRA
                                $BitacoranotificacionesDto->setNumero($solicitudesmuestrasDto->getNumero()); #NUMERO DE SOLICITUD MUESTRA
                                $BitacoranotificacionesDto->setAnio($solicitudesmuestrasDto->getAnio()); #AÑO DE SOLICITUD MUESTRA
                                $BitacoranotificacionesDto->setCvejuzgado($solicitudesmuestrasDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                $BitacoranotificacionesDto->setCveUsuario($solicitudesmuestrasDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                $BitacoranotificacionesDto->setMedio($respuestamuestraDto->getEmail());
                                $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO - CANCELACIÓN DE SOLICITUD");
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
                    /**
                     * @todo Pendiente
                     */
                    /*
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
                     * 
                     */

                    #TERMINAMOS TRANSACCION DE LA BASE DE DATOS Y SE CIERRA LA CONEXION
                    if (!$errorCancelacion) {
                        $proveedor->execute("COMMIT");
                        if (($bolStatusMailJuez == true) && ($bolStatusMailMP == true)) {
                            $tmp = array("type" => "OK",
                                "text" => "CANCELACION DE SOLICITUD DE TOMA DE MUESTRA DE FORMA EXITOSA Y A SU VEZ SE REMITE CORREO ELECTRONICO");
                        } else {
                            $tmp = array("type" => "OK",
                                "text" => " CANCELACION DE SOLICITUD DE TOMA DE MUESTRA DE FORMA EXITOSA, NO SE LOGRO ENVIAR EL CORREO ELECTRONICO");
                        }
                        return $tmp;
                        $proveedor->close();
                    } else {
                        $proveedor->execute("ROLLBACK");
                        $proveedor->close();
                        return array("type" => "Error", "text" => $mensajeErrorUpdate);
                    }
                } else {
                    if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() == "3") {
                        return array("type" => "Error", "text" => "NO SE CANCELO LA SOLICITUD POR QUE LA MUESTRA SE ENCUENTRA CONTESTADA");
                    }
                    if ($solicitudesmuestrasDto->getCveEstatusSolicitudMuestra() == "4") {
                        return array("type" => "Error", "text" => "SOLICITUD DE TOMA DE MUESTRA CANCELADA ANTERIORMENTE");
                    }
                }
            } else {
                return array("type" => "Error", "text" => "NO SE ENCONTRO LA SOLICITUD DE TOMA DE MUESTRA ESPECIFICADA");
            }
        } else {
            return array("type" => "Error", "text" => "INFORMACION INCOMPLETA: " . $mensajeErrorDatos);
        }
    }

}

?>