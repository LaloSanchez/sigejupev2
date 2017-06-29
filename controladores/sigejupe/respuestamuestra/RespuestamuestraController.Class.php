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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/respuestamuestra/RespuestamuestraDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/respuestamuestra/RespuestamuestraDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesmuestras/SolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesmuestras/SolicitudesmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/respuestamuestra/RespuestamuestraDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/respuestamuestra/RespuestamuestraDAO.Class.php");

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

//include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionrespmuestras/ProgramacionrespmuestrasController.Class.php");
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionrespmuestras/ProgramacionrespmuestrasDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosjuzgadores/TelefonosjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosjuzgadores/TelefonosjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidosmuestras/TutoresofendidosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidosmuestras/TutoresofendidosmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");
include_once(dirname(__FILE__) . "/../../../tribunal/correo/EmailHELPER.Class.php");
include_once(dirname(__FILE__) . "/../cateos/numerosaletras.php");

class RespuestamuestraController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarRespuestamuestra($RespuestamuestraDto) {
        $RespuestamuestraDto->setidMuestra(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getidMuestra()))));
        $RespuestamuestraDto->setidSolicitudMuestra(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getidSolicitudMuestra()))));
        $RespuestamuestraDto->setcveRespuestaSolicitudMuestra(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getcveRespuestaSolicitudMuestra()))));
        $RespuestamuestraDto->setnumeroMuestra(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getnumeroMuestra()))));
        $RespuestamuestraDto->setanioMuestra(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getanioMuestra()))));
        $RespuestamuestraDto->setsolicitud(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getsolicitud()))));
        $RespuestamuestraDto->setnegada(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getnegada()))));
        $RespuestamuestraDto->setconcedida(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getconcedida()))));
        $RespuestamuestraDto->setfechaPractica(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getfechaPractica()))));
        $RespuestamuestraDto->sethoraPractica(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->gethoraPractica()))));
        $RespuestamuestraDto->sethorasPractica(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->gethorasPractica()))));
        $RespuestamuestraDto->setfechaInforme(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getfechaInforme()))));
        $RespuestamuestraDto->sethoraInforme(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->gethoraInforme()))));
        $RespuestamuestraDto->sethorasInforme(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->gethorasInforme()))));
        $RespuestamuestraDto->setfechaRespuesta(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getfechaRespuesta()))));
        $RespuestamuestraDto->setqr(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getqr()))));
        $RespuestamuestraDto->setfirmaDigital(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getfirmaDigital()))));
        $RespuestamuestraDto->setselloDigital(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getselloDigital()))));
        $RespuestamuestraDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getfechaRegistro()))));
        $RespuestamuestraDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getfechaActualizacion()))));
        $RespuestamuestraDto->setemail(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getemail()))));
        $RespuestamuestraDto->setmotivoCancelacion(strtoupper(str_ireplace("'", "", trim($RespuestamuestraDto->getmotivoCancelacion()))));
        return $RespuestamuestraDto;
    }

    public function selectRespuestamuestra($RespuestamuestraDto, $proveedor = null) {
        $RespuestamuestraDto = $this->validarRespuestamuestra($RespuestamuestraDto);
        $RespuestamuestraDao = new RespuestamuestraDAO();
        $RespuestamuestraDto = $RespuestamuestraDao->selectRespuestamuestra($RespuestamuestraDto, $proveedor);
        return $RespuestamuestraDto;
    }

    public function insertRespuestamuestra($param) {
        $tmp = "";
        if ($param != "") {
            ###
            #CAMPOS REQUERIDOS PARA CADA PASO DE LA RESPUESTA DE TOMA DE MUESTRAS
            ###
            #Paso 1: selecciona la toma de muestra a contestar
            $idMuestra = $param["idMuestra"];

            #Paso 2: Datos objetos y personas
            #NO NECESITA VALIDAR INFORMACION
            #Paso 3: Datos imputados, victimas y delitos
            $respuestaMuestra = $param["respuestaMuestra"];
            $imputadosArray = $param["imputadosArray"];
            $victimasArray = $param["victimasArray"];
            $tutoresArray = $param["tutoresArray"];
            $examensArray = $param["examensArray"];
            $muestrasArray = $param["muestrasArray"];
            $fechaPractica = $param["fechaPractica"];
            $horaPractica = $param["horaPractica"];
            $horasPractica = $param["horasPractica"];
            $fechaInforme = $param["fechaInforme"];
            $horaInforme = $param["horaInforme"];
            $horasInforme = $param["horasInforme"];

            #Paso 4: detalle de la negacion de la solicitud
            $negada = $param["detalleNegacion"];

            #Paso 5: detalle de la resolucion de la solicitud
            $concedida = $param["detalleResolucion"];

            ###
            #VALIDA INFORMACION GENERAL DE LA SOLICITUD
            ###
            $errorDatos = false;
            $mensage = "";

            #VALIDA QUE LOS ID DE LA TOMA DE MUESTRA Y LA SOLICITUD NO VAYAN VACIOS - PASO 1
            if (($idMuestra == "") || ($idMuestra == "0")) {
                $errorDatos = true;
                $mensage .= " IDENTIFICADOR DE TOMA DE MUESTRA O IDENTIFICADOR DE SOLICITUD NO VALIDOS\n";
            }


            #VALIDA QUE SE CUENTE CON LA INFORMACION Y SE CONTENGA POR LO MENOS 1 REGISTRO DE LOS ARREGLOS OBLIGATORIOS - PASO 3
            if (($respuestaMuestra == "")) {
                $errorDatos = true;
                $mensage .= " RESPUESTA A LA SOLICITUD DE TOMA DE MUESTRAS NO VALIDA \n";
            }

            #VALIDA SI LA RESPESTA ES NEGADA TRAIGA EL DETALLE DE LA NEGACION - PASO 4
            if (($respuestaMuestra == "1")) {
                if (($negada == "")) {
                    $mensage .= " ESPECIFIQUE INFORMACION DE LA NEGACION \n";
                    $errorDatos = true;
                }
            }

            #VALIDA SI LA RESPESTA ES CONCEDIA TRAIGA EL DETALLE DE LA RESOLUCION - PASO 5
            if (($respuestaMuestra == "2")) {
                if (($concedida == "")) {
                    $mensage .= " ESPECIFIQUE INFORMACION DE LA RESOLUCION \n";
                    $errorDatos = true;
                }
            }

            #VALIDA SI LA RESPESTA ES CONCEDIA TRAIGA EL DETALLE DE LA RESOLUCION - PASO 5
            if (($respuestaMuestra == "3")) {
                if (($concedida == "") || ($negada == "")) {
                    $mensage .= " ESPECIFIQUE INFORMACION DE LA NEGACION Y DE LA NEGACION Y DE LA RESOLUCION ";
                    $errorDatos = true;
                }
            }

            if (!$errorDatos) {
                $error = false;
                $adminJuzgados = "";
                $bolStatusMailAdm = false;
                $bolStatusMailMP = false;
                $emailAdministrador = "";
                ###
                #INICIAMOS PROCESO DE GURADADO DE INFORMACION
                ###
                #INICIAMOS TRANSACCION DE LA BASE DE DATOS
                $proveedor = new Proveedor('mysql', 'sigejupe');
                $proveedor->connect();
                $proveedor->execute("BEGIN");

                #CONSULTAMOS LA INFORMACION DE LA TOMA DE MUESTRAS
                if (!$error) {
                    $RespMuestraDto = new RespuestamuestraDTO();
                    $RespMuestraDao = new RespuestamuestraDAO();
                    $RespMuestraDto->setIdMuestra($idMuestra);
                    $RespMuestraDto = $RespMuestraDao->selectRespuestamuestra($RespMuestraDto, "", "", $proveedor);
                    if ($RespMuestraDto != "" && count($RespMuestraDto) > 0) {
                        $RespMuestraDto = $RespMuestraDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL NO ENCONTRAR INFORMACION DE LA TOMA DE MUESTRAS SELECCIONADA");
                    }
                }

                #CONSULTAMOS LA INFORMACION DE LA SOLICITUD 
                if (!$error) {
                    $SolicitudesmuestrasDto = new SolicitudesmuestrasDTO();
                    $SolicitudesmuestrasDao = new SolicitudesmuestrasDAO();
                    $SolicitudesmuestrasDto->setIdSolicitudMuestra($RespMuestraDto->getIdSolicitudMuestra());
                    $SolicitudesmuestrasDto = $SolicitudesmuestrasDao->selectSolicitudesmuestras($SolicitudesmuestrasDto, "", "", $proveedor);
                    if ($SolicitudesmuestrasDto != "" && count($SolicitudesmuestrasDto) > 0) {
                        $SolicitudesmuestrasDto = $SolicitudesmuestrasDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL NO ENCONTRAR INFORMACION DE LA SOLICITUD DE TOMA DE MUESTRAS SELECCIONADA");
                    }
                }
                #CONSULTAMOS FECHA Y HORA DEL SERVIDOR DE BASE DE DATOS
                if (!$error) {
                    $SolicitudesmuestrasDao = new SolicitudesmuestrasDAO();
                    $FechaHora = $SolicitudesmuestrasDao->selectFechaHoraMySql($proveedor);
                    if ($FechaHora != "") {
                        
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "NO SE PUDO OBTENER LA FECHA Y HORA DEL SERVIDOR");
                    }
                }

                #ACTUALIZAMOS INFORMACION DE LA RESPUESTA DE LA TOMA DE MUESTRAS
                if (!$error) {
                    $RespMuestraDto = new RespuestamuestraDTO();
                    $RespMuestraDao = new RespuestamuestraDAO();
                    $RespMuestraDto->setIdMuestra($idMuestra);
                    $RespMuestraDto->setCveRespuestaSolicitudMuestra($respuestaMuestra);
                    $RespMuestraDto->setNegada(utf8_decode(preg_replace("/\'/", "\"", $negada)));
                    $RespMuestraDto->setConcedida(utf8_decode(preg_replace("/\'/", "\"", $concedida)));
                    $RespMuestraDto->setConcedida(utf8_decode(preg_replace("/\'/", "\"", $concedida)));
                    $RespMuestraDto->setFechaPractica($fechaPractica);
                    $RespMuestraDto->setHoraPractica($horaPractica);
                    $RespMuestraDto->setHorasPractica($horasPractica);
                    $RespMuestraDto->setFechaInforme($fechaInforme);
                    $RespMuestraDto->setHoraInforme($horaInforme);
                    $RespMuestraDto->setHorasInforme($horasInforme);
                    $RespMuestraDto->setFechaRespuesta($FechaHora);
                    $RespMuestraDto->setFechaActualizacion($FechaHora);
                    $RespMuestraDto = $RespMuestraDao->updateRespuestamuestra($RespMuestraDto, $proveedor);
                    if ($RespMuestraDto != "" && count($RespMuestraDto) > 0) {
                        $RespMuestraDto = $RespMuestraDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL ACTUALIZAR LA INFORMACION DEL LA RESPUESTA DE LA SOLICITUD DE TOMA DE MUESTRAS");
                    }
                }

                #ACTUALIZAMOS INFORMACION DE LA SOLICITUD
                if (!$error) {
                    $SolicitudesmuestrasDto = new SolicitudesmuestrasDTO();
                    $SolicitudesmuestrasDao = new SolicitudesmuestrasDAO();
                    $SolicitudesmuestrasDto->setIdSolicitudMuestra($RespMuestraDto->getIdSolicitudMuestra());
                    $SolicitudesmuestrasDto->setCveEstatusSolicitudMuestra("3");
                    $SolicitudesmuestrasDto = $SolicitudesmuestrasDao->updateSolicitudesmuestras($SolicitudesmuestrasDto, "", $proveedor);
                    if ($SolicitudesmuestrasDto != "" && count($SolicitudesmuestrasDto) > 0) {
                        $SolicitudesmuestrasDto = $SolicitudesmuestrasDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL ACTUALIZAR LA INFORMACION DE LA RESPUESTA DE LA SOLICITUD DE TOMA DE MUESTRAS");
                    }
                }

                #INSERTAMOS IMPUTADOS 
                $imputadosArray = json_decode($imputadosArray, true);
                $muestrasArray = json_decode($muestrasArray, true);
                $examenesArray = json_decode($examensArray, true);

                if (!$error) {
                    if (count($imputadosArray) > 0 && $imputadosArray != "") {
                        $tomaMuestrasDao = new TomamuestrasDAO();
                        $ImputadosmuestrasDao = new ImputadosmuestrasDAO;
                        $count = 0;
                        foreach ($imputadosArray as $imputado) {
                            $ImputadosmuestrasDto = new ImputadosmuestrasDTO();
                            $ImputadosmuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra()); #Id de la solicitud
                            $ImputadosmuestrasDto->setActivo("S");
                            $ImputadosmuestrasDto->setCveOrigen("2");
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
                $victimasArray = json_decode($victimasArray, true);
                $tutoresArray = json_decode($tutoresArray, true);
                if (!$error) {
                    if (count($victimasArray) > 0 && $victimasArray != "") {
                        $OfendidosmuestrasDao = new OfendidosmuestrasDAO();
                        $count = 0;
                        foreach ($victimasArray as $victima) {
                            $OfendidosmuestrasDto = new OfendidosmuestrasDTO();
                            $OfendidosmuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra()); #Id de la solicitud
                            $OfendidosmuestrasDto->setActivo("S");
                            $OfendidosmuestrasDto->setCveOrigen("2");
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

                if (!$error) {
                    #OBTENEMOS INFORMACIÓN DEL JUZGADO
                    $JuzgadosDao = new JuzgadosDAO();
                    $JuzgadosDto = new JuzgadosDTO();
                    $JuzgadosDto->setCveJuzgado($SolicitudesmuestrasDto->getCveJuzgadoDesahoga());
                    $JuzgadosDto->setActivo("S");
                    $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, "", $proveedor);
                    if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                        $JuzgadosDto = $JuzgadosDto[0];
                        #OBTENEMOS INFORMACION DEL ADMINISTRADOR DEL JUZGADO
                        $file = dirname(__FILE__) . "/../../../archivos/adminjuzgadosmuestrasrespuesta" . $JuzgadosDto->getCveJuzgado() . ".json";
                        $adminJuzgados = json_decode(file_get_contents($file), true);
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO A SOLICITAR");
                    }
                }

                #INSERTAMOS REGISTRO A CHAT
                if (!$error) {
                    $numeroAnioMuestra = md5($RespMuestraDto->getIdMuestra() . "-4");
                    $chatMessagesJuezDto = new ChatMessagesDTO();
                    $chatMessagesDao = new ChatMessagesDAO();
                    $chatMessagesJuezDto->setChatId($numeroAnioMuestra);
                    $chatMessagesJuezDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                    $chatMessagesJuezDto->setMensaje("SOLICITUD DE TOMA DE MUESTRAS CONTESTADO... SE CIERRA CHAT");
                    $chatMessagesJuezDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $chatMessagesJuezDto->setNombreUsuario($_SESSION['Nombre']);
                    $chatMessagesJuezDto->setCveNumero($RespMuestraDto->getIdMuestra());
                    $chatMessagesJuezDto->setTipoChat("4"); # tipo chat 4 = toma de muestras
                    $chatMessagesJuezDto = $chatMessagesDao->insertChatMessages($chatMessagesJuezDto, $proveedor);
                    if ($chatMessagesJuezDto != "" && count($chatMessagesJuezDto) > 0) {
                        $chatMessagesJuezDto = $chatMessagesJuezDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL INSERTAR ULTIMO MENSAJE EN CHAT DE LA SOLICITUD DE TOMA DE MUESTRAS");
                    }
                }

                #INSERTAMOS REGISTRO PARA CERRAR EL CHAT DE LA TOMA DE MUESTRAS
                if (!$error) {
                    $numeroAnioMuestra = md5($RespMuestraDto->getIdMuestra() . "-4");
                    $chatCerradosDto = new ChatCerradosDTO();
                    $chatCerradosDao = new ChatCerradosDAO();
                    $chatCerradosDto->setChatId($numeroAnioMuestra);
                    $chatCerradosDto = $chatCerradosDao->insertChatCerrados($chatCerradosDto, $proveedor);
                    if ($chatCerradosDto != "" && count($chatCerradosDto) > 0) {
                        $chatCerradosDto = $chatCerradosDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL INSERTAR CIERRE DE CHAT DEL CATEO");
                    }
                }

                #PROCESO PARA ENVIAR CORREO ELECTRONICO AL ADMINISTRADOR DEL JUZGADO
                if (!$error) {
                    if ($adminJuzgados != "") {
                        if (isset($adminJuzgados["type"]) == "OK") {
                            $EnLetras = new EnLetras();
                            $fechaRespuesta = explode(" ", $RespMuestraDto->getFechaRespuesta());
                            $fecha = explode("-", $fechaRespuesta[0]);
                            $hora = explode(":", $fechaRespuesta[1]);
                            $objDatCorreo = $this->plantillaCorreo("muestras");
                            foreach ($adminJuzgados["usuarios"] as $usuarios) {
                                if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
//                                    $emailAdministrador = "ricardo.ortiz@pjedomex.gob.mx";
                                    $emailAdministrador = $usuarios["email"];
                                    $cveUsuario = $usuarios["CveUsuario"];
                                    if ((trim($emailAdministrador) != "") && (strlen($emailAdministrador) > 1)) {
                                        $correoAdministrador = new EmailHELPER();
                                        $correoAdministrador->setSenderAddress($objDatCorreo->CorreoRemite);
                                        $correoAdministrador->setToAddress(trim($emailAdministrador));
                                        $correoAdministrador->setToName("NotificaciÃ³n de respuesta a solicitud de toma de muestras - ADMINISTRADOR");
                                        $correoAdministrador->setSubject($objDatCorreo->Subject);
                                        $correoAdministrador->setHostSmtp($objDatCorreo->IpSMTP);
                                        $correoAdministrador->setPortSmtp($objDatCorreo->PortSMTP);
                                        $correoAdministrador->setIsHTMLFormat(true);
                                        $strCuerpoEmailAdm = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                        $strCuerpoEmailAdm .= "NOTIFICACI&Oacute;N. <br/><br/> En Toluca, M&eacute;xico, siendo las <strong>" . strtolower($EnLetras->ValorEnLetras($hora[0])) . " horas con " . strtolower($EnLetras->ValorEnLetras($hora[1])) . " minutos del d&iacute;a " . strtolower($EnLetras->ValorEnLetras($fecha[2])) . " de " . strtolower($this->MesLetra($RespMuestraDto->getFechaRegistro())) . " del " . strtolower($EnLetras->ValorEnLetras($fecha[0])) . "</strong>. <br/><br/>";
                                        $strCuerpoEmailAdm .= "En el correo electr&oacute;nico <strong>" . $RespMuestraDto->getEmail() . "</strong>, se&ntilde;alado por el Agente del Ministerio P&uacute;blico solicitante, se notifica que la respuesta a la solicitud de Actos de investigaci&oacute;n que Requieren autorizaci&oacute;n Judicial (Toma de MUestras) n&uacute;mero <strong>" . str_pad($RespMuestraDto->getNumeroMuestra(), 6, '0', STR_PAD_LEFT) . "/" . $RespMuestraDto->getAnioMuestra() . "</strong>, ante el Juzgado de Control del Distrito Judicial de <strong>" . ucfirst(strtolower($JuzgadosDto->getDesJuzgado())) . "</strong>, se encuentra incorporada en el Sistema Inform&aacute;tico (SIGEJUPE)</b>";
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
                                            $BitacoranotificacionesDto->setCveTipoActuacion("25"); #25 - TOMA DE MUESTRAS
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                            $BitacoranotificacionesDto->setIdReferencia($RespMuestraDto->getIdMuestra()); #ID DEL CATEO
                                            $BitacoranotificacionesDto->setNumero($RespMuestraDto->getNumeroMuestra()); #NUMERO DE CATEO
                                            $BitacoranotificacionesDto->setAnio($RespMuestraDto->getAnioMuestra()); #AÑO DEL CATEO
                                            $BitacoranotificacionesDto->setCvejuzgado($SolicitudesmuestrasDto->getCveJuzgadoDesahoga()); #JUZGADO QUE RESUELVE
                                            $BitacoranotificacionesDto->setCveUsuario($cveUsuario); #Id de el usuario al que se le envio el correo
                                            $BitacoranotificacionesDto->setMedio($emailAdministrador);
                                            $BitacoranotificacionesDto->setMovimiento($movimiento);
                                            $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                            if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                                
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
                                        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                        $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                        $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                        $BitacoranotificacionesDto->setCveTipoCarpeta(""); #VACIO - NO ES CARPETA
                                        $BitacoranotificacionesDto->setCveTipoActuacion("25"); #25 - TOMA DE MUESTRAS
                                        $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                        $BitacoranotificacionesDto->setIdReferencia($RespMuestraDto->getIdMuestra()); #ID DEL CATEO
                                        $BitacoranotificacionesDto->setNumero($RespMuestraDto->getNumeroMuestra()); #NUMERO DE CATEO
                                        $BitacoranotificacionesDto->setAnio($RespMuestraDto->getAnioMuestra()); #AÑO DEL CATEO
                                        $BitacoranotificacionesDto->setCvejuzgado($SolicitudesmuestrasDto->getCveJuzgado()); #JUZGADO A SOLICITAR
                                        $BitacoranotificacionesDto->setCveUsuario($cveUsuario); #Id de el usuario al que se le envio el correo
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
                    } else {
                        $mensageCorreos = "NO SE ENCONTRARON ADMINISTRADORES DE JUZGADO";
                    }
                }

                #PROCESO PARA ENVIAR CORREO ELECTRONICO M.P.
                if (!$error) {
                    $EnLetras = new EnLetras();
                    $fechaRespuesta = explode(" ", $RespMuestraDto->getFechaRespuesta());
                    $fecha = explode("-", $fechaRespuesta[0]);
                    $hora = explode(":", $fechaRespuesta[1]);
                    $objDatCorreo = $this->plantillaCorreo("muestras");
                    if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                        if ((trim($RespMuestraDto->getEmail()) != "") && (strlen($RespMuestraDto->getEmail()) > 1)) {
                            $correoMP = new EmailHELPER();
                            $correoMP->setSenderAddress($objDatCorreo->CorreoRemite);
                            $correoMP->setToAddress(trim($RespMuestraDto->getEmail()));
                            $correoMP->setToName("NotificaciÃ³n de respuesta a solicitud de toma de muestras - M.P.");
                            $correoMP->setSubject($objDatCorreo->Subject);
                            $correoMP->setHostSmtp($objDatCorreo->IpSMTP);
                            $correoMP->setPortSmtp($objDatCorreo->PortSMTP);
                            $correoMP->setIsHTMLFormat(true);
                            $strCuerpoEmailMP = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                            $strCuerpoEmailMP .= "NOTIFICACI&Oacute;N. <br/><br/> En Toluca, M&eacute;xico, siendo las <strong>" . strtolower($EnLetras->ValorEnLetras($hora[0])) . " horas con " . strtolower($EnLetras->ValorEnLetras($hora[1])) . " minutos del d&iacute;a " . strtolower($EnLetras->ValorEnLetras($fecha[2])) . " de " . strtolower($this->MesLetra($RespMuestraDto->getFechaRegistro())) . " del " . strtolower($EnLetras->ValorEnLetras($fecha[0])) . "</strong>. <br/><br/>";
                            $strCuerpoEmailMP .= "En el correo electr&oacute;nico <strong>" . $RespMuestraDto->getEmail() . "</strong>, se&ntilde;alado por el Agente del Ministerio P&uacute;blico solicitante, se notifica que la respuesta a la solicitud de Actos de investigaci&oacute;n que Requieren autorizaci&oacute;n Judicial (Toma de MUestras) n&uacute;mero <strong>" . str_pad($RespMuestraDto->getNumeroMuestra(), 6, '0', STR_PAD_LEFT) . "/" . $RespMuestraDto->getAnioMuestra() . "</strong>, ante el Juzgado de Control del Distrito Judicial de <strong>" . ucfirst(strtolower($JuzgadosDto->getDesJuzgado())) . "</strong>, se encuentra incorporada en el Sistema Inform&aacute;tico (SIGEJUPE)</b>";
                            $strCuerpoEmailMP .= "</body>\n</html>\n\n";
                            $correoMP->setBody($strCuerpoEmailMP);
                            $intentos = 1;
                            $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                            while ($intentos <= 20) {
                                $bolStatusMailMP = $correoMP->send();
                                $cveEstatusNotificacion = "1";
                                $movimiento = "";
                                if ($bolStatusMailMP == true) {
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
                                $BitacoranotificacionesDto->setIdReferencia($RespMuestraDto->getIdMuestra()); #ID DEL CATEO
                                $BitacoranotificacionesDto->setNumero($RespMuestraDto->getNumeroMuestra()); #NUMERO DE CATEO
                                $BitacoranotificacionesDto->setAnio($RespMuestraDto->getAnioMuestra()); #AÑO DEL CATEO
                                $BitacoranotificacionesDto->setCvejuzgado($SolicitudesmuestrasDto->getCveJuzgadoDesahoga()); #JUZGADO QUE RESUELVE
                                $BitacoranotificacionesDto->setCveUsuario($SolicitudesmuestrasDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                $BitacoranotificacionesDto->setMedio($RespMuestraDto->getEmail());
                                $BitacoranotificacionesDto->setMovimiento($movimiento);
                                $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                    
                                } else {
                                    $error = true;
                                    $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO M.P.");
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
                            $BitacoranotificacionesDto->setCveTipoActuacion("25"); #12 - TOMA DE MUESTRAS
                            $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                            $BitacoranotificacionesDto->setIdReferencia($RespMuestraDto->getIdMuestra()); #ID DEL CATEO
                            $BitacoranotificacionesDto->setNumero($RespMuestraDto->getNumeroMuestra()); #NUMERO DE CATEO
                            $BitacoranotificacionesDto->setAnio($RespMuestraDto->getAnioMuestra()); #AÑO DEL CATEO
                            $BitacoranotificacionesDto->setCvejuzgado($SolicitudesmuestrasDto->getCveJuzgado()); #JUZGADO A SOLICITAR
                            $BitacoranotificacionesDto->setCveUsuario($SolicitudesmuestrasDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                            $BitacoranotificacionesDto->setMedio($RespMuestraDto->getEmail());
                            $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO");
                            $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                            if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - M-P.");
                            }
                        }
                    } else {
                        $mensageCorreos = "ERROR AL OBTENER CONFIGURACION DE CORREOS";
                    }
                }
                #GUARDAMOS EN BITACORA EL REGISTRO DEL CATEO
                if (!$error) {
                    $BitacoramovimientosDao = new BitacoramovimientosDAO();
                    $BitacoramovimientosDto = new BitacoramovimientosDTO();
                    $BitacoramovimientosDto->setCveAccion("326"); #326 - CONTESTA TOMA DE MUESTRAS
                    $BitacoramovimientosDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
                    $BitacoramovimientosDto->setCvePerfil($RespMuestraDto->getIdMuestra()); #ID DEL CATEO
                    $BitacoramovimientosDto->setCveAdscripcion($SolicitudesmuestrasDto->getCveJuzgadoDesahoga()); #NUMERO DE CATEO
                    if (($bolStatusMailMP == true) && ($bolStatusMailAdm == true)) {
                        $BitacoramovimientosDto->setObservaciones("AGREGO RESPUESTA DE CATEO NUMERO: " . $RespMuestraDto->getNumeroMuestra() . " AÑO: " . $RespMuestraDto->getAnioMuestra() . " ENVIO CORREO ELECTRONICO A EL M.P. Y EL ADMINISTRADOR DEL JUZGADO");
                    } else {
                        $observaciones = "AGREGO SOLICITUD DE TOMA DE UESTRAS NUMERO: " . $RespMuestraDto->getNumeroMuestra() . " AÑO: " . $RespMuestraDto->getAnioMuestra();
                        $observaciones.=($bolStatusMailMP == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                        $observaciones.=$RespMuestraDto->getEmail();
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
                    if (($bolStatusMailMP == true) && ($bolStatusMailAdm == true)) {
                        $tmp = array("type" => "OK",
                            "text" => "REGISTRO DE LA RESPUESTA DEL CATEO DE FORMA EXITOSA Y A SU VEZ SE REMITE CORREO ELECTRONICO",
                            "idMuestra" => $RespMuestraDto->getIdMuestra(),
                            "idSolicitudMuestra" => $RespMuestraDto->getIdSolicitudMuestra()
                        );
                    } else {
                        $tmp = array("type" => "OK",
                            "text" => "REGISTRO DE LA RESPUESTA DE LA SOLICITUD DE TOMA DE MUESTRAS DE FORMA EXITOSA",
                            "type" => "OK",
                            "idMuestra" => $RespMuestraDto->getIdMuestra(),
                            "idSolicitudMuestra" => $RespMuestraDto->getIdSolicitudMuestra()
                        );
                    }
                } else {
                    $proveedor->execute("ROLLBACK");
                }
                $proveedor->close();
            } else {
                $tmp = array("type" => "Error", "text" => "INFORMACION INCOMPLETA:" . $mensage);
            }
        } else {
            $tmp = array("type" => "Error", "text" => "INFORMACION INCOMPLETA - PARAM");
        }
        return $tmp;
    }

    public function updateRespuestamuestra($RespuestamuestraDto, $proveedor = null) {
        $RespuestamuestraDto = $this->validarRespuestamuestra($RespuestamuestraDto);
        $RespuestamuestraDao = new RespuestamuestraDAO();
//$tmpDto = new RespuestamuestraDTO();
//$tmpDto = $RespuestamuestraDao->selectRespuestamuestra($RespuestamuestraDto,$proveedor);
//if($tmpDto!=""){//$RespuestamuestraDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $RespuestamuestraDto = $RespuestamuestraDao->updateRespuestamuestra($RespuestamuestraDto, $proveedor);
        return $RespuestamuestraDto;
//}
//return "";
    }

    public function deleteRespuestamuestra($RespuestamuestraDto, $proveedor = null) {
        $RespuestamuestraDto = $this->validarRespuestamuestra($RespuestamuestraDto);
        $RespuestamuestraDao = new RespuestamuestraDAO();
        $RespuestamuestraDto = $RespuestamuestraDao->deleteRespuestamuestra($RespuestamuestraDto, $proveedor);
        return $RespuestamuestraDto;
    }

    public function getInfoJuzgadorWS($juzgado) {
        try {
            if ($juzgado != "") {
                $usuariosCliente = new UsuarioCliente();
                $admons = $usuariosCliente->selectUsuariosGrupoSistema(97, 38, $juzgado);
                if ($admons != "") {
                    $file = fopen(dirname(__FILE__) . "/../../../archivos/adminjuzgadosmuestrasrespuesta$juzgado.json", "w");
                    fwrite($file, $admons);
                    fclose($file);
                } else {
                    
                }
            }
        } catch (Exception $e) {
            
        }
    }

    function plantillaCorreo($attNom) {
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

    public function MesLetra($fecha) {
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

        return $mes;
    }

}

?>