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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesordenes/SolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesordenes/SolicitudesordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenes/OrdenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenes/OrdenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/personasordenes/PersonasordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/personasordenes/PersonasordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosordenes/ImputadosordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosordenes/ImputadosordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidosordenes/OfendidosordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidosordenes/OfendidosordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitosordenes/DelitosordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitosordenes/DelitosordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/contadores/ContadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../contadores/ContadoresController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresordenes/JuzgadoresordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresordenes/JuzgadoresordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ministeriosresponsablesordenes/MinisteriosresponsablesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ministeriosresponsablesordenes/MinisteriosresponsablesordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudesordenes/EstatussolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudesordenes/EstatussolicitudesordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoranotificaciones/BitacoranotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoranotificaciones/BitacoranotificacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosjuzgadores/TelefonosjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosjuzgadores/TelefonosjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/chatmessages/ChatMessagesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/chatmessages/ChatMessagesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/chatcerrados/ChatCerradosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/chatcerrados/ChatCerradosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidosordenes/TutoresofendidosordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidosordenes/TutoresofendidosordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../fachadas/sigejupe/imagenes/ImagenesFacade.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacionordenes/ProgramacionordenesController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacionordenes/ProgramacionordenesDTO.Class.php");

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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/nipsolicitudes/NipsolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/nipsolicitudes/NipsolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiemposesperasolicitudes/TiemposesperasolicitudesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiemposesperasolicitudes/TiemposesperasolicitudesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/selloDigital/Encryption.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/ssh/asterisk.php");
include_once(dirname(__FILE__) . "/../../../tribunal/correo/EmailHELPER.Class.php");
include_once(dirname(__FILE__) . "/../../../Helpers/chatapi/sendwhats.php");

class SolicitudesordenesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarSolicitudesordenes($SolicitudesordenesDto) {
        $SolicitudesordenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getidSolicitudOrden()))));
        $SolicitudesordenesDto->setnumero(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getnumero()))));
        $SolicitudesordenesDto->setanio(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getanio()))));
        $SolicitudesordenesDto->setcveJuzgado(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getcveJuzgado()))));
        $SolicitudesordenesDto->setcveCatAudiencia(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getcveCatAudiencia()))));
        $SolicitudesordenesDto->setcveJuzgadoDesahoga(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getcveJuzgadoDesahoga()))));
        $SolicitudesordenesDto->setidReferencia(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getidReferencia()))));
        $SolicitudesordenesDto->setfechaEnvio(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getfechaEnvio()))));
        $SolicitudesordenesDto->setcveTipoCarpeta(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getcveTipoCarpeta()))));
        $SolicitudesordenesDto->setcarpetaInv(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getcarpetaInv()))));
        $SolicitudesordenesDto->setnuc(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getnuc()))));
        $SolicitudesordenesDto->setcveUsuario(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getcveUsuario()))));
        $SolicitudesordenesDto->setcveAdscripcionSolicita(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getcveAdscripcionSolicita()))));
        $SolicitudesordenesDto->setcveEstatusSolicitudOrden(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getcveEstatusSolicitudOrden()))));
        $SolicitudesordenesDto->setobservaciones(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getobservaciones()))));
        $SolicitudesordenesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getfechaRegistro()))));
        $SolicitudesordenesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($SolicitudesordenesDto->getfechaActualizacion()))));
        return $SolicitudesordenesDto;
    }

    public function selectSolicitudesordenes($SolicitudesordenesDto, $proveedor = null) {
        $SolicitudesordenesDto = $this->validarSolicitudesordenes($SolicitudesordenesDto);
        $SolicitudesordenesDao = new SolicitudesordenesDAO();
        $SolicitudesordenesDto = $SolicitudesordenesDao->selectSolicitudesordenes($SolicitudesordenesDto, $proveedor);
        return $SolicitudesordenesDto;
    }

    public function insertSolicitudesordenes($param = "", $proveedor = null, $origenFacade = "sistema") {
        $emailJuez = "";
        $bolStatusMailJuez = false;
        $bolStatusMailAdm = false;
        $emailAdministrador = "";
        $movimientoExtra = "";
        $idreferencia = "";
        $tmp = "";
        if ($param != "") {
            ###
            #CAMPOS REQUERIDOS PARA CADA PASO DE LA SOLICITUD DE ORDEN DE APREHENSION
            ###
            #Paso 1: Datos 
            $juzgadoSolicitar = $param["juzgadoSolicitar"];
            $numeroCarpeta = (isset($param["numeroCarpeta"])) ? $param["numeroCarpeta"] : "";
            $anioCarpeta = (isset($param["anioCarpeta"])) ? $param["anioCarpeta"] : "";
            $cveTipoCarpeta = (isset($param["cveTipoCarpeta"])) ? $param["cveTipoCarpeta"] : "";
            $juzgadoProcedencia = $param["juzgadoSolicitar"];
//            $juzgadoProcedencia = $param["juzgadoProcedencia"];
            $carpetaInvestigacion = $param["carpetaInvestigacion"];
            $nuc = $param["carpetaInvestigacion"];
            $eMailMP = $param["eMailMP"];
            $paramCarpeta = array();
            $nip = $param['nip'];

            #Paso 2: Datos personas
            $personasArray = $param["personasArray"];

            #Paso 3: Datos imputados, victimas y delitos
            $imputadosArray = $param["imputadosArray"];
            $victimasArray = $param["victimasArray"];
            $tutoresArray = $param["tutoresArray"];
            $delitosArray = $param["delitosArray"];

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


            #VALIDA QUE SE CONTENGA POR LO MENOS 1 REGISTRO DE LOS ARREGLOS OBLIGATORIOS - PASO 2
            /* $personasArray = json_decode($personasArray, true);
              if ((count($personasArray) <= 0 || $personasArray == "")) {
              $errorDatos = true;
              $mensajeErrorDatos .= " ESPECIFIQUE POR LO MENOS UNA PERSONA A APREHENDERSE \n";
              } */

            #Validacion del NIP
            if (($nip != "")) {
                if (strlen($nip) < 6) {
                    $errorDatos = true;
                    $mensajeErrorDatos .= " EL NIP DEBE SER DE 6 O MAS CARACTERES \n";
                }
            }

            #VALIDA QUE SE CONTENGA POR LO MENOS 1 REGISTRO DE LOS ARREGLOS OBLIGATORIOS - PASO 3
            $imputadosArray = json_decode($imputadosArray, true);
            if ((count($imputadosArray) <= 0 || $imputadosArray == "")) {
                $errorDatos = true;
                $mensajeErrorDatos .= " ESPECIFIQUE POR LO MENOS UN IMPUTADO \n";
            }

            #VALIDA QUE SE CONTENGA POR LO MENOS 1 REGISTRO DE LOS ARREGLOS OBLIGATORIOS - PASO 3
            $delitosArray = json_decode($delitosArray, true);
            if ((count($delitosArray) <= 0 || $delitosArray == "")) {
                $errorDatos = true;
                $mensajeErrorDatos .= " ESPECIFIQUE POR LO MENOS UN DELITO \n";
            }

            #CONVERTIMOS A ARRAY LOS JSON - PASO 3
            $victimasArray = json_decode($victimasArray, true);
            $tutoresArray = json_decode($tutoresArray, true);

            #VALIDA INFORMACION DE LA CARPETA JUDICIAL /CARPETA DE INVESTIGACION - PASO 4
            if (($solicitud == "") && ($fileSolicitud == "")) {
                $errorDatos = true;
                $mensajeErrorDatos .= " SOLICITUD DE ORDEN DE APREHENSION NO VLIDA \n";
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
                $mensajeErrorDatos .= " DEBE ESPECIFICAR POR LO MENOS UN MP RESPONSABLE PARA LA ORDEN DE APREHENSION \n";
            }

            if (!$errorDatos) {
                $error = false;
                ###
                #INICIAMOS PROCESO DE GURADADO DE INFORMACION
                ###
                #INICIAMOS TRANSACCION DE LA BASE DE DATOS
                $proveedor = new Proveedor('mysql', 'sigejupe');
                $proveedor->connect();
                $proveedor->execute("BEGIN");

                #CONSULTAMOS INFORMACION DE LA CARPETA JUDICIAL
                $resultadoCarpeta = $this->buscaCarpeta($numeroCarpeta, $anioCarpeta, $juzgadoProcedencia, $cveTipoCarpeta, $carpetaInvestigacion, $nuc);
                if ($resultadoCarpeta["type"] == "OK") {
                    $numeroCarpeta = $resultadoCarpeta["info"]["numero"];
                    $anioCarpeta = $resultadoCarpeta["info"]["anio"];
                    $cveTipoCarpeta = $resultadoCarpeta["info"]["cveTipoCarpeta"];
                    $juzgadoProcedencia = $resultadoCarpeta["info"]["cveJuzgado"];
                    $carpetaInvestigacion = $resultadoCarpeta["info"]["carpetaInv"];
                    $nuc = $resultadoCarpeta["info"]["nuc"];
                    $idreferencia = $resultadoCarpeta["info"]["idCarpetaJudicial"];
                    $param["datos"]["numero"] = $resultadoCarpeta["info"]["numero"];
                    $param["datos"]["anio"] = $resultadoCarpeta["info"]["anio"];
                    $param["datos"]["idReferencia"] = $resultadoCarpeta["info"]["idCarpetaJudicial"];
                    $paramCarpeta["nueva"] = 0;
                    $auxiliar = $this->buscarAuxiliar("", "", $juzgadoProcedencia, $cveTipoCarpeta, $carpetaInvestigacion, $nuc, 2);
//                    if ($auxiliar["type"] == "OK") {
//                        #Buscamos el Antecede
//                        $antecedesDto = new AntecedescarpetasDTO();
//                        $antecedesDao = new AntecedescarpetasDAO();
//                        $antecedesDto->setActivo("S");
//                        $antecedesDto->setCveTipoCarpeta(2);
//                        $antecedesDto->setIdCarpetaPadre($auxiliar["info"]["idCarpetaJudicial"]);
//                        $antecedesDto->setIdCarpetaHija($idreferencia);
//                        $antecedessDto = $antecedesDao->selectAntecedescarpetas($antecedesDto);
//                        if ($antecedessDto == "") {
//                            #Guardamos el antecede
//                            $antecedesDto = $antecedesDao->insertAntecedescarpetas($antecedesDto, $proveedor);
//                            if ($antecedesDto != "") {
//                                $antecedesDto = $antecedesDto[0];
//                            } else {
//                                $error = true;
//                                $tmp["type"] = "Error";
//                                $tmp["text"] = "NO SE GUARDO EL ANTECEDE";
//                            }
//                        }
//                    }
                } else {
                    #No existe Carpeta de Control Buscamos Numero Auxiliar
                    $auxiliar = $this->buscarAuxiliar($numeroCarpeta, $anioCarpeta, $juzgadoProcedencia, 1, $carpetaInvestigacion, $nuc, 1);
                    $numeroCarpeta = "";
                    $anioCarpeta = "";
                    $cveTipoCarpeta = "";
                    $juzgadoProcedencia = $juzgadoSolicitar;
                    if ($auxiliar["type"] == "Error") {
                        $paramCarpeta["nueva"] = 1;
                    } else {
                        #Genera la Carpeta no Existe
                        $carpteasJudiciales = $this->generaCarpeta($auxiliar["info"], $proveedor);
                        if ($carpteasJudiciales["type"] == "OK") {
                            $paramCarpeta["imputados"] = $auxiliar["info"]["imputados"];
                            $paramCarpeta["victimas"] = $auxiliar["info"]["ofendidos"];
                            $paramCarpeta["delitos"] = $auxiliar["info"]["delitos"];
                            $paramCarpeta["numImptutado"] = count($auxiliar["info"]["imputados"]);
                            $paramCarpeta["numOfendido"] = count($auxiliar["info"]["ofendidos"]);
                            $paramCarpeta["numdelito"] = count($auxiliar["info"]["delitos"]);
                            $paramCarpeta["idReferencia"] = $carpteasJudiciales["datos"]["idCarpetaJudicial"];
                            $paramCarpeta["carpetas"] = $carpteasJudiciales["datos"];
                            $generaPartes = $this->guardaPartesCarpeta($paramCarpeta, $proveedor);
                            if ($generaPartes["type"] == "OK") {
                                $param["datos"]["numero"] = $carpteasJudiciales["datos"]["numero"];
                                $param["datos"]["anio"] = $carpteasJudiciales["datos"]["anio"];
                                $param["datos"]["idReferencia"] = $carpteasJudiciales["datos"]["idCarpetaJudicial"];
                                $numeroCarpeta = $carpteasJudiciales["datos"]["numero"];
                                $anioCarpeta = $carpteasJudiciales["datos"]["anio"];
                                $cveTipoCarpeta = $carpteasJudiciales["datos"]["cveTipoCarpeta"];
                                $juzgadoProcedencia = $carpteasJudiciales["datos"]["cveJuzgado"];
                                $carpetaInvestigacion = $carpteasJudiciales["datos"]["carpetaInv"];
                                $nuc = $carpteasJudiciales["datos"]["nuc"];
                                $idreferencia = $carpteasJudiciales["datos"]["idCarpetaJudicial"];

                                #Guardamos en la tabla de antecedes
                                $antecedesDto = new AntecedescarpetasDTO();
                                $antecedesDto->setActivo("S");
                                $antecedesDto->setCveTipoCarpeta(2);
                                $antecedesDto->setIdCarpetaPadre($auxiliar["info"]["idCarpetaJudicial"]);
                                $antecedesDto->setIdCarpetaHija($idreferencia);
                                $antecedesDao = new AntecedescarpetasDAO();
                                $antecedesDto = $antecedesDao->insertAntecedescarpetas($antecedesDto, $proveedor);
                                if ($antecedesDto != "") {
                                    $antecedesDto = $antecedesDto[0];
                                } else {
                                    $error = true;
                                    $tmp["type"] = "Error";
                                    $tmp["text"] = "NO SE GUARDO EL ANTECEDE";
                                }
                            } else {
                                $param["datos"]["numero"] = "";
                                $param["datos"]["anio"] = "";
                                $tmp = $generaPartes;
                                $error = true;
                            }
                        } else {
                            $param["datos"]["numero"] = "";
                            $param["datos"]["anio"] = "";
                            $tmp = $carpteasJudiciales;
                            $error = true;
                        }
                    }
                }

                #INSERTAMOS SOLICITUD DE ORDEN DE APREHENSION
                if (!$error) {
                    if ($origenFacade == "sistema") {
                        $cveUsuario = $_SESSION["cveUsuarioSistema"];
                    } else {
                        $cveUsuario = $param["cveUsuario"];
                    }

                    $SolicitudesordenesDao = new SolicitudesordenesDAO();
                    $SolicitudesordenesDto = new SolicitudesordenesDTO();

                    if ($origenFacade == "sistema") {
                        $SolicitudesordenesDto->setCaseProceedingId("0");
                    } else {
                        $SolicitudesordenesDto->setCaseProceedingId($param["caseProceedingId"]); #numero Carpeta Judicial
                    }

                    $SolicitudesordenesDto->setNumero($numeroCarpeta); #numero Carpeta Judicial
                    $SolicitudesordenesDto->setAnio($anioCarpeta); #a�o Carpeta Judicial
                    $SolicitudesordenesDto->setCveJuzgado($juzgadoProcedencia); #juzgado en el que radica la carpeta judicial
                    $SolicitudesordenesDto->setCveCatAudiencia("58"); #58 - AUDIENCIA PARA SOLICITAR ORDEN DE APREHENSION
                    $SolicitudesordenesDto->setCveJuzgadoDesahoga($juzgadoSolicitar); #juzgado al que se solicita la audicencia(donde se va a buscar el juez)
                    $SolicitudesordenesDto->setIdReferencia(""); #No requerido
                    $SolicitudesordenesDto->setFechaEnvio(""); #se define al consetastar orden de Aprehension
                    $SolicitudesordenesDto->setCveTipoCarpeta($cveTipoCarpeta);
                    $SolicitudesordenesDto->setCarpetaInv($carpetaInvestigacion);
                    $SolicitudesordenesDto->setNuc($nuc);
                    $SolicitudesordenesDto->setCveUsuario($cveUsuario); #clave del usuario que solicta el orden
                    $SolicitudesordenesDto->setCveAdscripcionSolicita(""); #opcional-clave de la adscripcion que solicta el orden
                    $SolicitudesordenesDto->setCveEstatusSolicitudOrden("1"); #1 - REGISTRADA POR MP
                    $SolicitudesordenesDto->setObservaciones(""); #opcionales
                    $SolicitudesordenesDto = $SolicitudesordenesDao->insertSolicitudesordenes($SolicitudesordenesDto, $proveedor);
                    if ($SolicitudesordenesDto != "" && count($SolicitudesordenesDto) > 0) {
                        $SolicitudesordenesDto = $SolicitudesordenesDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR LA INFORMACION DE LA ORDEN DE APREHENSION");
                    }
                }

                #Obtenemos el Contador
                if (!$error) {
                    $contadoresUDto = new ContadoresDTO();
                    $contadoresUDto->setCveJuzgado(10322);
                    $contadoresUDto->setCveTipoActuacion("");
                    $contadoresUDto->setCveTipoCarpeta(10);
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

                #INSERTAMOS Orden
                if (!$error) {
                    if ($SolicitudesordenesDto->getIdSolicitudOrden() != "" && $SolicitudesordenesDto->getIdSolicitudOrden() > 0) {
                        $OrdenesDao = new OrdenesDAO();
                        $OrdenesDto = new OrdenesDTO();
                        $OrdenesDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden()); #Id de la solicitud del orden
                        $OrdenesDto->setSolicitud(utf8_decode(preg_replace("/\'/", "\"", $solicitud))); #descripcion de la solicitud
                        $OrdenesDto->setCveRespuestaSolicitudOrden(""); #respuesta nulla
                        $OrdenesDto->setQr("PJ");
                        $OrdenesDto->setEmail($eMailMP);
                        $OrdenesDto->setNumeroEspecializadoOrden($contadoresUDto->getNumero());
                        $OrdenesDto = $OrdenesDao->insertOrdenes($OrdenesDto, $proveedor);
                        if ($OrdenesDto != "" && count($OrdenesDto) > 0) {
                            $OrdenesDto = $OrdenesDto[0];
                        } else {
                            $error = true;
                            $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR LA INFORMACION LA ORDEN DE APREHENSION");
                        }
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR: EL IDENTIFICADOR DE LA SOLICITUD VACIO O IGUAL A CERO");
                    }
                }

                #INSERTAMOS PERSONAS
                if (!$error) {
                    if (count($personasArray) > 0 && $personasArray != "") {
                        $PersonasOrdenesDao = new PersonasordenesDAO();
                        $count = 1;
                        //foreach ($personasArray as $persona) {
                        foreach ($imputadosArray as $imputado) {
                            $PersonasOrdenesDto = new PersonasordenesDTO();
                            $PersonasOrdenesDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden()); #Id de la solicitud del orden
                            $PersonasOrdenesDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $imputado["Paterno"])));
                            $PersonasOrdenesDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $imputado["Materno"])));
                            if ($imputado["Nombre"] != "") {
                                $PersonasOrdenesDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $imputado["Nombre"])));
                            } else {
                                $PersonasOrdenesDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $imputado["NombreMoral"])));
                            }
                            $PersonasOrdenesDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $imputado["Domicilio"])));
                            $PersonasOrdenesDto->setCveMunicipio("0"); #opcional - se recomienda cero por defaul
                            $PersonasOrdenesDto->setCveGenero($imputado["Genero"]);
                            $PersonasOrdenesDto->setCveOrigen("1"); #1-origen solicitud de orden

                            $PersonasOrdenesDto = $PersonasOrdenesDao->insertPersonasordenes($PersonasOrdenesDto, $proveedor);
                            if ($PersonasOrdenesDto != "" && count($PersonasOrdenesDto) > 0) {
                                
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR LA PERSONA:" . $count);
                                break;
                            }
                        }
                    }
                }

                #INSERTAMOS IMPUTADOS ORDENES
                if (!$error) {
                    if (count($imputadosArray) > 0 && $imputadosArray != "") {
                        $ImputadosOrdenesDao = new ImputadosordenesDAO();
                        $count = 1;
                        $paramCarpeta["imputados"] = $imputadosArray;
                        foreach ($imputadosArray as $imputado) {
                            $ImputadosordenesDto = new ImputadosordenesDTO();
                            $ImputadosordenesDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden()); #Id de la solicitud de la Orden
                            $ImputadosordenesDto->setActivo("S");
                            $ImputadosordenesDto->setCveTipoPersona($imputado["TipoPersona"]); #1 - PERSONA FISICA
                            if ($imputado["TipoPersona"] == "1") {
                                $ImputadosordenesDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $imputado["Nombre"])));
                                $ImputadosordenesDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $imputado["Paterno"])));
                                $ImputadosordenesDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $imputado["Materno"])));
                                $ImputadosordenesDto->setAlias(utf8_decode(preg_replace("/\'/", "\"", $imputado["Alias"])));
                                $ImputadosordenesDto->setCveGenero($imputado["Genero"]);
                                $ImputadosordenesDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $imputado["Domicilio"])));
                                $ImputadosordenesDto->setTelefono($imputado["Telefono"]);
                                $ImputadosordenesDto->setEmail($imputado["Email"]);
                                $ImputadosordenesDto->setDetenido($imputado["Detenido"]);
                            } else {
                                $ImputadosordenesDto->setNombreMoral(utf8_decode(preg_replace("/\'/", "\"", $imputado["NombreMoral"])));
                            }

                            $ImputadosordenesDto = $ImputadosOrdenesDao->insertImputadosordenes($ImputadosordenesDto, $proveedor);
                            if ($ImputadosordenesDto != "" && count($ImputadosordenesDto) > 0) {
                                
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EL IMPUTADO:" . $count);
                                break;
                            }
                            $count++;
                        }
                    }
                }

                #INSERTAMOS OFENDIDOS Ofendidos
                if (!$error) {
                    if (count($victimasArray) > 0 && $victimasArray != "") {
                        $OfendidosordenesDao = new OfendidosordenesDAO();
                        $count = 0;
                        $paramCarpeta["victimas"] = $victimasArray;
                        foreach ($victimasArray as $victima) {
                            $OfendidosordenesDto = new OfendidosordenesDTO();
                            $OfendidosordenesDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden()); #Id de la solicitud del orden
                            $OfendidosordenesDto->setActivo("S");
                            $OfendidosordenesDto->setCveTipoPersona($victima["TipoPersona"]); #1 -  PERSONA FISICA
                            if ($victima["TipoPersona"] == "1" || $victima["TipoPersona"] == "4" || $victima["TipoPersona"] == "5") {
                                $OfendidosordenesDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $victima["Nombre"])));
                                $OfendidosordenesDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $victima["Paterno"])));
                                $OfendidosordenesDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $victima["Materno"])));
                                $OfendidosordenesDto->setCveGenero($victima["Genero"]);
                                $OfendidosordenesDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $victima["Domicilio"])));
                                $OfendidosordenesDto->setTelefono($victima["Telefono"]);
                                $OfendidosordenesDto->setEmail($victima["Email"]);
                            } else {
                                $OfendidosordenesDto->setNombreMoral(utf8_decode(preg_replace("/\'/", "\"", $victima["NombreMoral"])));
                            }

                            $OfendidosordenesDto = $OfendidosordenesDao->insertOfendidosordenes($OfendidosordenesDto, $proveedor);
                            if ($OfendidosordenesDto != "" && count($OfendidosordenesDto) > 0) {
                                foreach ($tutoresArray as $tutor) {
                                    if ($tutor["IdOfendido"] == $count) {
                                        // Guardamos el tutor del ofendido
                                        $tutorVictimaDto = new TutoresofendidosordenesDTO();
                                        $tutorVictimaDao = new TutoresofendidosordenesDAO();
                                        $tutorVictimaDto->setActivo("S");
                                        $tutorVictimaDto->setCveGenero(utf8_decode(preg_replace("/\'/", "\"", $tutor["Genero"])));
                                        $tutorVictimaDto->setCveTipoTutor(utf8_decode(preg_replace("/\'/", "\"", $tutor["TipoTutor"])));
                                        $tutorVictimaDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $tutor["Domicilio"])));
                                        $tutorVictimaDto->setEmail(utf8_decode(preg_replace("/\'/", "\"", $tutor["Email"])));
                                        $tutorVictimaDto->setFechaNacimiento(utf8_decode(preg_replace("/\'/", "\"", $tutor["FechaNacimiento"])));
                                        $tutorVictimaDto->setIdOfendidoOrden(utf8_decode(preg_replace("/\'/", "\"", $OfendidosordenesDto[0]->getIdOfendidoOrden())));
                                        $tutorVictimaDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $tutor["Materno"])));
                                        $tutorVictimaDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $tutor["Nombre"])));
                                        $tutorVictimaDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $tutor["Paterno"])));
                                        $tutorVictimaDto->setTelefono(utf8_decode(preg_replace("/\'/", "\"", $tutor["Telefono"])));
                                        $tutorVictimaDto = $tutorVictimaDao->insertTutoresofendidosordenes($tutorVictimaDto, $proveedor);
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
                        $paramCarpeta["victimas"][0]["Genero"] = "1";
                        $paramCarpeta["victimas"][0]["Municipio"] = "";
                        $paramCarpeta["victimas"][0]["Telefono"] = "";
                        $paramCarpeta["victimas"][0]["Email"] = "";
                        $paramCarpeta["victimas"][0]["TipoPersona"] = "2";
                        $paramCarpeta["victimas"][0]["NombreMoral"] = "Actualizame";
                    }
                }

                #INSERTAMOS DELITOS ORDENES
                if (!$error) {
                    if (count($delitosArray) > 0 && $delitosArray != "") {
                        $DelitosordenesDao = new DelitosordenesDAO();
                        $count = 1;
                        $paramCarpeta["delitos"] = $delitosArray;
                        foreach ($delitosArray as $delito) {
                            $DelitosordenesDto = new DelitosordenesDTO();
                            $DelitosordenesDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden()); #Id de la solicitud del orden
                            $DelitosordenesDto->setActivo("S");
                            $DelitosordenesDto->setCveDelito($delito["cveDelito"]);
                            $DelitosordenesDto = $DelitosordenesDao->insertDelitosordenes($DelitosordenesDto, $proveedor);
                            if ($DelitosordenesDto != "" && count($DelitosordenesDto) > 0) {
//                                print_r($DelitosordenesDto);
//                                echo "<br><br>";
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EL DELITO:" . $count);
                                break;
                            }
                            $count++;
                        }
                    } else {
                        $paramCarpeta["delitos"] = "";
                    }
                }

                #OBTENERMOS EL NUMERO DEL CONTADOR DE LA ORDEN
                if (!$error) {
                    $contadoresDto = new ContadoresDTO();
                    $contadoresDto->setCveJuzgado($juzgadoSolicitar);
                    $contadoresDto->setCveTipoActuacion("");
                    $contadoresDto->setCveTipoCarpeta(10);
                    $contadoresDto->setAnio(date("Y"));
                    $DelitosordenesDto = new ContadoresController();
                    $contadoresDto = $DelitosordenesDto->getContador($contadoresDto, $proveedor);
                    if ($contadoresDto != "" && count($contadoresDto) > 0) {
                        $contadoresDto = $contadoresDto[0];
//                        print_r($contadoresDto);
//                        echo "<br><br>";
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER EL NUMERO DE ORDEN DEL JUZGADO");
                    }
                }

                #OBTENEMOS FECHA Y HORA DE MYSQL
                if (!$error) {
                    $fecha = $SolicitudesordenesDao->selectFecha($proveedor);
                    if ($fecha != "") {
                        
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER LA FECHA DEL SERVIDOR");
                    }

                    $hora = $SolicitudesordenesDao->selectHora($proveedor);
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
                    $fechaHora = $SolicitudesordenesDao->selectFechaHoraMySql($proveedor);
                    $fechaHora = str_replace(array(":", " ", "-"), "", $fechaHora);
                    $qrOrden = "PJ" . str_pad($contadoresDto->getNumero(), 6, '0', STR_PAD_LEFT) . $contadoresDto->getAnio() . "C" . str_pad($carpetaInvestigacion, 17, '0', STR_PAD_LEFT) . str_pad($fechaHora, 15, '0', STR_PAD_LEFT) . str_pad($cveUsuario, 6, '0', STR_PAD_LEFT);

                    #GENERAMOS SELLO DIGITAL
                    $cadenaOri = "||" . $qrOrden;
                    $cadenaOri .= "|" . "PODER JUDICIAL DEL ESTADO DE MEXICO";
                    $cadenaOri .= "|" . "SISTEMA DE GESTION JUDICIAL PENAL Y ORAL";
                    $cadenaOri .= "|" . "ANIO " . $contadoresDto->getAnio();
                    $cadenaOri .= "|" . $fecha . $hora . "||";
                    $cadenaOri = utf8_encode($cadenaOri);
                    $converter = new Encryption;
                    $converter->setPrivateKey($this->extraeLlavePrivada("./../../../tribunal/selloDigital/keystoreTSJEDOMEX.key.pem"));
                    $strSelloDig = $converter->encode($cadenaOri);

                    if ($qrOrden != "" && $cadenaOri != "" && $strSelloDig != "") {
                        
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL GENERAL LOS CODIGOS DE VERIFICACION(QR o SELLO DIGITAL)");
                    }
                }

                #BUSCA/REGISTRA JUZGADOR PARA CONTESTAR LA SOLICITUD
                if (!$error) {
                    $idJuezOrden = 0;
                    $JuzgadoresordenesDao = new JuzgadoresordenesDAO();
                    if ($nip == '') {
                        $programacionordenesController = new ProgramacionordenesController();
                        $arrayJuzgador = array();
                        $juzgadoJuezDto = new JuzgadosDTO();
//                    $fechac = (int)$SolicitudesordenesDao->selectFecha();
//                    if ($fechac >= 20160620) {
                        $idJuzgadop = "10322";
//                    } else {
//                        $idJuzgadop = $juzgadoSolicitar;
//                    }
                        $juzgadoJuezDto->setCveJuzgado($idJuzgadop);
                        $programacionordenesDto = new ProgramacionordenesDTO();
                        $programacionordenesDto->setFechaInicio(date("Y-m-d H:i:s"));
                        $arrayJuzgador = $programacionordenesController->juezOrden($juzgadoJuezDto, $programacionordenesDto, $proveedor);
                        if ($arrayJuzgador != "" && $arrayJuzgador["estatus"] == "ok") {
                            $idJuezOrden = $arrayJuzgador["data"]["idJuzgador"];
                            if ((int) $idJuezOrden >= 1) {
                                $JuzgadorUlti = new JuzgadoresordenesDTO();
                                $JuzgadorUlti->setActivo("S");
                                $JuzgadorUlti->setIdJuzgador($idJuezOrden);
                                $orden = ' ORDER BY idJuzgadorOrden DESC limit 1 ';
                                $JuzgadorUlti = $JuzgadoresordenesDao->selectJuzgadoresordenes($JuzgadorUlti, $orden, $proveedor);
                                $fechaRegistro != "";
                                $sinAntecedentes = false;

                                if ($JuzgadorUlti != "") {
                                    $fechaRegistro = $JuzgadorUlti[0]->getFechaRegistro();
                                } else {
                                    $sinAntecedentes = true;
                                }
                                if (!$sinAntecedentes) {
                                    if ($fechaRegistro != "") {
                                        /* Obtenemos el Tiempo de Vigencia */
                                        $tiempo = 0;
                                        $tiempoSolicitudDto = new TiemposesperasolicitudesDTO();
                                        $tiempoSolicitudDao = new TiemposesperasolicitudesDAO();
                                        $tiempoSolicitudDto->setActivo('S');
                                        $tiempoSolicitudDto->setCveTipoSolicitud(2);

                                        $tiempoSolicitudDto = $tiempoSolicitudDao->selectTiemposesperasolicitudes($tiempoSolicitudDto);
                                        if ($tiempoSolicitudDto != '') {
                                            $tiempo = $tiempoSolicitudDto['0']->getMunitosEspera();
                                        }
                                        $fechaActual = $SolicitudesordenesDao->selectFechaHoraMySql($proveedor);
                                        $fechaSolicitudStr = strtotime('+' . $tiempo . ' minutes', strtotime($fechaRegistro));
                                        $fechaActualStr = strtotime($fechaActual);
                                        if ($fechaActualStr <= $fechaSolicitudStr) {
                                            $error = true;
                                            $tmp = array("type" => "Error", "text" => "EL JUEZ NO SE ENCUENTRA DISPONIBLE INTENTELO A LAS " . date('d/m/Y H:i:s', $fechaSolicitudStr));
                                        }
                                    }
                                }
                            } else if ((int) $idJuezOrden == 0) {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR NO EXISTEN LOS HORARIOS DE ORDEN DEFINIDOS PARA EL JUZGADO");
                            } else if ((int) $idJuezOrden == -1) {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR NO EXISTEN JUEZ DISPONLIBLE PARA DICHA SOLICITUD DE ORDEN DE APREHENSION");
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
                        $nipSolicitudDto->setCveTipoCarpeta('10');
                        $nipSolicitudDto->setNip($nip);
                        $orden = ' AND fechaFinal >= "' . date('Y-m-d H:m:s') . '" ORDER BY idNipSolicitud DESC';
                        $nipSolicitudDto = $nipSolicitudDao->selectNipsolicitudes($nipSolicitudDto, $orden, $proveedor);
                        if ($nipSolicitudDto != '') {
                            $nipSolicitudDto = $nipSolicitudDto[0];
                            $idJuezOrden = $nipSolicitudDto->getIdJuzgador();
                        } else {
                            $error = true;
                            $tmp = array("type" => "Error", "text" => "EL NIP QUE INTENTAS UTILIZAR NO ES VALIDO");
                        }
                    }
                }

                if (!$error) {
                    $JuzgadoresordenesDto = new JuzgadoresordenesDTO();
                    $JuzgadoresordenesDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden()); #Id de la solicitud del Orden
                    $JuzgadoresordenesDto->setIdJuzgador($idJuezOrden); #Id de el juzgador seleccionado en l programacion
                    $JuzgadoresordenesDto->setActivo("S");
                    $JuzgadoresordenesDto = $JuzgadoresordenesDao->insertJuzgadoresordenes($JuzgadoresordenesDto, $proveedor);
                    if ($JuzgadoresordenesDto != "" && count($JuzgadoresordenesDto) > 0) {
                        
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR LA RELACION JUZGADOR - ORDEN DE APREHENSION");
                    }
                }

                #INSERTAMOS MPS RESPONSABLES
                if (!$error) {
                    if (count($mpsResponsablesArray) > 0 && $mpsResponsablesArray != "") {
                        $MinisteriosresponsablesOrdenesDao = new MinisteriosresponsablesordenesDAO();
                        $count = 1;
                        foreach ($mpsResponsablesArray as $mpResponsable) {
                            $MinisteriosresponsablesDto = new MinisteriosresponsablesordenesDTO();
                            $MinisteriosresponsablesDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden()); #Id de la solicitud de la Orden
                            $MinisteriosresponsablesDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $mpResponsable["Nombre"])));
                            $MinisteriosresponsablesDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $mpResponsable["Paterno"])));
                            $MinisteriosresponsablesDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $mpResponsable["Materno"])));
                            $MinisteriosresponsablesDto = $MinisteriosresponsablesOrdenesDao->insertMinisteriosresponsablesordenes($MinisteriosresponsablesDto, $proveedor);
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

                #ACTUALIZAMOS INFORMACI�N DE LA SOLICITUD
                if (!$error) {
                    $OrdenesUpdateDto = new OrdenesDTO();
                    $OrdenesUpdateDto->setIdOrden($OrdenesDto->getIdOrden()); #Id de la orden
                    $OrdenesUpdateDto->setNumeroOrden($contadoresDto->getNumero());
                    $OrdenesUpdateDto->setAnioOrden($contadoresDto->getAnio());
                    $OrdenesUpdateDto->setQr($qrOrden);
                    $OrdenesUpdateDto->setSelloDigital($strSelloDig);
                    $OrdenesDto = $OrdenesDao->updateOrdenes($OrdenesUpdateDto, $proveedor);
                    if ($OrdenesDto != "" && count($OrdenesDto) > 0) {
                        $OrdenesDto = $OrdenesDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL ACTUALIZAR DATOS DE LA ORDEN DE APREHENSION");
                    }
                }

                #Actualizamos la informacion del Nip
                if (!$error) {
                    if ($nip != '') {
                        if ($nipSolicitudDto != '') {
                            $nipUpdateDto = new NipsolicitudesDTO();
                            $nipUpdateDto->setActivo('N');
                            $nipUpdateDto->setCveTipoCarpeta('10');
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
                    if ($origenFacade == "sistema") {
                        ////pendiente: cuando se deefinan las tablas para subir archivos
                        $totalArchivos = count($fileSolicitud["name"]);

                        if (($totalArchivos >= 1) && ($fileSolicitud["name"][0] != "")) {
                            $imagenesfachada = new ImagenesFacade();
                            $paramImagenes = array();
                            $paramImagenes["cveTipoDocumento"] = 18; //->Ordenes de Aprehension
                            $paramImagenes["idCarpetaJudicial"] = $OrdenesDto->getIdOrden();
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
                            $documentosImgDto = new DocumentosimgDTO();
                            $documentosImgDao = new DocumentosimgDAO();
                            $documentosImgDto->setActivo("S");
                            $documentosImgDto->setIdActuacion("0");
                            $documentosImgDto->setCveTipoDocumento("18");
                            $documentosImgDto->setCveUsuario($cveUsuario);
                            $documentosImgDto->setIdCarpetaJudicial($OrdenesDto->getIdOrden());
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
                                $nombreArchivo = "ORDENDEAPREHENSION_" . $OrdenesDto->getAnioOrden() . $OrdenesDto->getNumeroOrden() . ".pdf";
                                $pdf = fopen($nombreArchivo, 'w');
                                fwrite($pdf, $pdf_decoded);
                                fclose($pdf);

                                $path = "../../../imagenes"; //Nodo Raiz
                                $ruta = $path . '/' . $juzgadoSolicitar . '/' . $OrdenesDto->getAnioOrden() . '/ORDEN_DE_APREHENSION/' . $OrdenesDto->getNumeroOrden() . "/";
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
                            }
                        }
                    }
                }

                #OBTENEMOS INFORMACI�N PARA ENVIAR CORREO Y REALIZAR LLAMADAS AL JUEZ Y ADMINISTRADOR
                $adminJuzgados = "";
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
                        $file = dirname(__FILE__) . "/../../../archivos/administradoresjuzgadosordenes" . $JuzgadosDto->getCveJuzgado() . ".json";
                        $adminJuzgados = json_decode(file_get_contents($file), true);
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO A SOLICITAR");
                    }

                    #OBTENEMOS INFORMACI�N DEL JUZGADOR
                    $JuzgadoresDao = new JuzgadoresDAO();
                    $JuzgadoresDto = new JuzgadoresDTO();
                    $JuzgadoresDto->setIdJuzgador($idJuezOrden); #Id del juzgador turnado a resolver la orden
                    $JuzgadoresDto->setActivo("S");
                    $JuzgadoresDto = $JuzgadoresDao->selectJuzgadores($JuzgadoresDto, "", $proveedor);
                    if ($JuzgadoresDto != "" && count($JuzgadoresDto) > 0) {
                        $JuzgadoresDto = $JuzgadoresDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADOR A RESOLVER LA SOLICITUD DE LA ORDEN DE APREHENSION");
                    }

                    #OBTENEMOS INFORMACION DEL M.P. QUE ESTA SOLICITANDO LA ORDEN
                    $xNombre = strtoupper(utf8_encode($_SESSION["Nombre"]));
                }

                #INSERTAMOS REGISTRO A CHAT
                if (!$error) {
                    $numeroAnioOrden = md5($OrdenesDto->getIdOrden() . "-2");
                    $chatMessagesMPDto = new ChatMessagesDTO(); //INVITACI�N A MINISTERIO PUBLICO
                    $chatMessagesDao = new ChatMessagesDAO();
                    $chatMessagesMPDto->setChatId($numeroAnioOrden);
                    $chatMessagesMPDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                    $chatMessagesMPDto->setMensaje("SE AGREGO A MP:" . $_SESSION["Nombre"] . " AL CHAT DE ORDEN DE APREHENSION: " . $OrdenesDto->getNumeroOrden() . "/" . $OrdenesDto->getAnioOrden());
                    $chatMessagesMPDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $chatMessagesMPDto->setNombreUsuario($_SESSION['Nombre']);
                    $chatMessagesMPDto->setCveNumero($OrdenesDto->getIdOrden());
                    $chatMessagesMPDto->setTipoChat("2"); # tipo chat 2 =  orden de aprehension
                    $chatMessagesMPDto = $chatMessagesDao->insertChatMessages($chatMessagesMPDto, $proveedor);
                    if ($chatMessagesMPDto != "" && count($chatMessagesMPDto) > 0) {
                        $chatMessagesMPDto = $chatMessagesMPDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL AGREGAR AL MINISTERIO PUBLICO A LA SALA DE CHAT DE ORDEN DE APREHENSION");
                    }
                }

                if (!$error) {
                    $chatMessagesJuezDto = new ChatMessagesDTO(); //INVITACI�N A MINISTERIO JUEZ
                    $chatMessagesDao = new ChatMessagesDAO();
                    $chatMessagesJuezDto->setChatId($numeroAnioOrden);
                    $chatMessagesJuezDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                    $chatMessagesJuezDto->setMensaje("SE AGREGO A JUEZ: " . $JuzgadoresDto->getTitulo() . " " . $JuzgadoresDto->getNombre() . " " . $JuzgadoresDto->getPaterno() . " " . $JuzgadoresDto->getMaterno() . " " . " AL CHAT DE ORDEN DE APREHENSION: " . $OrdenesDto->getNumeroOrden() . "/" . $OrdenesDto->getAnioOrden());
                    $chatMessagesJuezDto->setCveUsuario($JuzgadoresDto->getCveUsuario());
                    $chatMessagesJuezDto->setNombreUsuario($JuzgadoresDto->getTitulo() . " " . $JuzgadoresDto->getNombre() . " " . $JuzgadoresDto->getPaterno() . " " . $JuzgadoresDto->getMaterno());
                    $chatMessagesJuezDto->setCveNumero($OrdenesDto->getIdOrden());
                    $chatMessagesJuezDto->setTipoChat("2"); # tipo chat 2 = orden de aprehension
                    $chatMessagesJuezDto = $chatMessagesDao->insertChatMessages($chatMessagesJuezDto, $proveedor);
                    if ($chatMessagesJuezDto != "" && count($chatMessagesJuezDto) > 0) {
                        $chatMessagesJuezDto = $chatMessagesJuezDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL AGREGAR AL MINISTERIO PUBLICO A LA SALA DE CHAT DE ORDEN DE APREHENSION");
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
                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - LLAMADA JUEZ");
                    }

//                    $celulares = "7226491761"; #PENDIENTE: QUITAR EN PRODUCCION
//                    $emailJuzgador = "ricardo.ortiz@pjedomex.gob.mx"; #PENDIENTE: QUITAR EN PRODUCCION
                    if (!$error) {
                        $celulares = substr($celulares, 0, strlen($celulares) - 1);
                        $celulares = explode(',', $celulares);
                        $contadorError = 0;
                        $numberWhats = "";
                        foreach ($celulares as $celular) {
                            if ($celular != "") {
                                if (substr($celular, 0, 3) == "722") {
                                    // --> Numero para enviar mensaje de WhatsApp
                                    $numberWhats = "521" . $celular;
                                    $celular = "044" . $celular;
                                } else {
                                    $celular = "045" . $celular;
                                }

                                $nombrearchivo = "orden_" . $OrdenesDto->getIdOrden() . "_" . $celular . "_" . $JuzgadoresDto->getCveUsuario() . "_" . date("YmdHis") . ".txt";
                                $fechaOrden = $OrdenesDto->getFechaRegistro();
                                $horaOrden = explode(' ', $fechaOrden);
                                $horaOrden = $horaOrden[1];

                                $asterisk2 = new asterisk2();
                                #comentar en caso de que sea en el localhost 
                                //$e = $asterisk2->llamar("189.197.63.36", $celular, "./../../../llamadas/", $nombrearchivo, "outboundmsg3");
                                $e = "";
                                $cveEstatusNotificacion = 1; #EN ESPERA
                                if (preg_match("/problema/", $e)) {
                                    $cveEstatusNotificacion = 3; #ERROR
                                } else {
                                    $cveEstatusNotificacion = 2; #ENVIADO CORRECTO
                                }

//                                $resultWhats = array();
//                                if ($numberWhats) {
//                                    $message = "NOTIFICACI�N. En Toluca, M�xico, siendo las " . $horaOrden . " horas del d�a " . $this->FechaLarga($fechaOrden) . ", mediante el sistema inform�tico (SIGEJUPE),  el C. " . $xNombre . ", Agente del Ministerio P�blico, ";
//                                    $message .= "formul� ante el " . $JuzgadosDto->getDesJuzgado() . ", la solicitud de orden de aprehensi�n n�mero " . str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . ", ";
//                                    $message .= "la cual se encuentra en el referido sistema inform�tico para su consulta y atenci�n respectiva.";
//                                    $message = utf8_encode($message);
//                                    $resultWhats = sendWhatsAppMessage($numberWhats, $message);
//                                    if ($resultWhats["type"] == "OK") {
//                                        
//                                    }
//                                }

                                $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                $BitacoranotificacionesDto->setCveMedioNotificacion("2"); #1 - LLAMADA
                                $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - ORDEN
                                $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion); #ESTADO DEL ENVIO DE LA LLAMADA
                                $BitacoranotificacionesDto->setIdReferencia($OrdenesDto->getIdOrden()); #ID DEL ORDEN
                                $BitacoranotificacionesDto->setNumero($OrdenesDto->getNumeroOrden()); #NUMERO DE ORDEN
                                $BitacoranotificacionesDto->setAnio($OrdenesDto->getAnioOrden()); #A�O DEL ORDEN
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
                        $objDatCorreo = $this->plantillaCorreo("ordenes");
                        if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                            foreach ($emailJuzgadores as $emailJuzgador) {
                                $emailJuez = $emailJuzgador;
//                        $xNombre = "ilhuitemoc ricardo ortiz";
                                if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                                    $correoJuez = new EmailHELPER();
                                    $correoJuez->setSenderAddress($objDatCorreo->CorreoRemite);
                                    $correoJuez->setToAddress(trim($emailJuez));
                                    $correoJuez->setToName("Solicitud de Orden de Aprehension - JUEZ");
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
                                    $strCuerpoEmailJuez = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaOrden . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaOrden) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),  el <b>C. " . $xNombre . "</b>, Agente del Ministerio P&uacute;blico, 
                                           formul&oacute; ante el <b>" . $JuzgadosDto->getDesJuzgado() . "</b>, la solicitud de orden de aprehensi&oacute;n n&uacute;mero <b>" . str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . "</b>, 
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
                                            $movimientoExtra = ", NO SE LOGRO ENVIAR CORREO ELECTRONICO AL JUEZ";
                                        }
                                        $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                        $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                        $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                        $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - ORDEN
                                        $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                        $BitacoranotificacionesDto->setIdReferencia($OrdenesDto->getIdOrden()); #ID DEL ORDEN
                                        $BitacoranotificacionesDto->setNumero($OrdenesDto->getNumeroOrden()); #NUMERO DE ORDEN
                                        $BitacoranotificacionesDto->setAnio($OrdenesDto->getAnioOrden()); #A�O DEL ORDEN
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
                                    $movimientoExtra = ", NO SE LOGRO ENVIAR CORREO ELECTRONICO AL JUEZ";
                                    $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                    $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                    $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                    $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                    $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - ORDEN
                                    $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                    $BitacoranotificacionesDto->setIdReferencia($OrdenesDto->getIdOrden()); #ID DEL ORDEN
                                    $BitacoranotificacionesDto->setNumero($OrdenesDto->getNumeroOrden()); #NUMERO DE ORDEN
                                    $BitacoranotificacionesDto->setAnio($OrdenesDto->getAnioOrden()); #A�O DEL ORDEN
                                    $BitacoranotificacionesDto->setCvejuzgado($juzgadoSolicitar); #JUZGADO A SOLICITAR
                                    $BitacoranotificacionesDto->setCveUsuario($JuzgadoresDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                    $BitacoranotificacionesDto->setMedio($emailJuez);
                                    $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO");
                                    $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                    if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
                                        
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
                if (!$error) {
                    if ($adminJuzgados != "") {
                        if (isset($adminJuzgados["type"]) == "OK") {
                            $objDatCorreo = $this->plantillaCorreo("ordenes");
                            foreach ($adminJuzgados["usuarios"] as $usuarios) {
                                if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
//                                    $emailAdministrador = "ricardo.ortiz@pjedomex.gob.mx"; #PENDIENTE: QUITAR EN PRODUCCION
//                                    $xNombre = "ilhuitemoc ricardo ortiz";
                                    $emailAdministrador = $usuarios["email"];
                                    $xNombre = strtoupper(utf8_decode($usuarios["Nombre"] . " " . $usuarios["Paterno"] . " " . $usuarios["Materno"]));
                                    if ((trim($emailAdministrador) != "") && (strlen($emailAdministrador) > 1)) {
                                        $correoAdministrador = new EmailHELPER();
                                        $correoAdministrador->setSenderAddress($objDatCorreo->CorreoRemite);
                                        $correoAdministrador->setToAddress(trim($emailAdministrador));
                                        $correoAdministrador->setToName("Solicitud de Orden de Aprehension - ADMINISTRADOR");
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
                                        $strCuerpoEmailAdm = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaOrden . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaOrden) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),  el <b>C. " . $xNombre . "</b>, Agente del Ministerio P&uacute;blico, 
                                           formul&oacute; ante el <b>" . $JuzgadosDto->getDesJuzgado() . "</b>, la solicitud de orden de aprehensi&oacute;n n&uacute;mero <b>" . str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . "</b>, 
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
                                                $movimientoExtra .= ", NO SE LOGRO ENVIAR CORREO ELECTRONICO AL ADMINISTRADOR DE JUZGADO: $xNombre";
                                            }
                                            $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                            $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                            $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - ORDEN
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                            $BitacoranotificacionesDto->setIdReferencia($OrdenesDto->getIdOrden()); #ID DEL ORDEN
                                            $BitacoranotificacionesDto->setNumero($OrdenesDto->getNumeroOrden()); #NUMERO DE ORDEN
                                            $BitacoranotificacionesDto->setAnio($OrdenesDto->getAnioOrden()); #A�O DEL ORDEN
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
                                        $movimientoExtra .= ", NO SE LOGRO ENVIAR CORREO ELECTRONICO AL ADMINISTRADOR DE JUZGADO: $xNombre";
                                        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                        $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                        $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                        $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                        $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - ORDEN
                                        $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                        $BitacoranotificacionesDto->setIdReferencia($OrdenesDto->getIdOrden()); #ID DEL ORDEN
                                        $BitacoranotificacionesDto->setNumero($OrdenesDto->getNumeroOrden()); #NUMERO DE ORDEN
                                        $BitacoranotificacionesDto->setAnio($OrdenesDto->getAnioOrden()); #A�O DEL ORDEN
                                        $BitacoranotificacionesDto->setCvejuzgado($juzgadoSolicitar); #JUZGADO A SOLICITAR
                                        $BitacoranotificacionesDto->setCveUsuario($usuarios["CveUsuario"]); #Id de el usuario al que se le envio el correo
                                        $BitacoranotificacionesDto->setMedio($emailAdministrador);
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
                                } else {
                                    $mensageCorreos = "ERROR AL OBTENER CONFIGURACION DE CORREOS";
                                }
                            }
                        }
                    }
                }

                ##GUARDAMOS EN BITACORA EL REGISTRO DEL ORDEN
                if (!$error) {
                    $BitacoramovimientosDao = new BitacoramovimientosDAO();
                    $BitacoramovimientosDto = new BitacoramovimientosDTO();
                    $BitacoramovimientosDto->setCveAccion("36"); #36 - REGISTRO DE SOLICITUD DE ORDEN
                    $BitacoramovimientosDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
                    $BitacoramovimientosDto->setCvePerfil($OrdenesDto->getIdOrden()); #ID DEL ORDEN
                    $BitacoramovimientosDto->setCveAdscripcion($SolicitudesordenesDto->getCveJuzgadoDesahoga());
                    if (($bolStatusMailJuez == true) && ($bolStatusMailAdm == true)) {
                        $BitacoramovimientosDto->setObservaciones("AGREGO SOLICITUD DE ORDEN DE APREHENSION NUMERO: " . $OrdenesDto->getNumeroOrden() . " A�O: " . $OrdenesDto->getAnioOrden() . " JUEZ" . $idJuezOrden . " ENVIO CORREO ELECTRONICO A EL JUEZ Y EL ADMINISTRADOR DEL JUZGADO");
                    } else {
                        $observaciones = "AGREGO SOLICITUD DE ORDEN DE APREHENSION NUMERO: " . $OrdenesDto->getNumeroOrden() . " A�O: " . $OrdenesDto->getAnioOrden() . " JUEZ" . $idJuezOrden . " ";
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
                        $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EN BITACORA MOVIMIENTOS");
                    }
                }

                #Generamos la Carpeta de investigacion
                if (!$error) {
                    if ($paramCarpeta["nueva"] == 1) {
                        #Genera la Carpeta no Existe
                        $paramCarpeta["numero"] = $OrdenesDto->getNumeroOrden();
                        $paramCarpeta["anio"] = $OrdenesDto->getAnioOrden();
                        $paramCarpeta["cveJuzgado"] = $SolicitudesordenesDto->getCveJuzgadoDesahoga();
                        $paramCarpeta["carpetaInv"] = $SolicitudesordenesDto->getCarpetaInv();
                        $paramCarpeta["nuc"] = $SolicitudesordenesDto->getNuc();
                        $paramCarpeta["cveUsuario"] = $cveUsuario;
                        $paramCarpeta["numImptutado"] = count($paramCarpeta["imputados"]);
                        $paramCarpeta["numOfendido"] = count($paramCarpeta["victimas"]);
                        $paramCarpeta["numdelito"] = count($delitosArray);
                        $carpteasJudiciales = $this->generaCarpeta($paramCarpeta, $proveedor);
                        if ($carpteasJudiciales["type"] == "OK") {
                            $paramCarpeta["idReferencia"] = $carpteasJudiciales["datos"]["idCarpetaJudicial"];
                            $paramCarpeta["carpetas"] = $carpteasJudiciales["datos"];
                            $generaPartes = $this->guardaPartesCarpeta($paramCarpeta, $proveedor);
                            if ($generaPartes["type"] == "OK") {
                                $param["datos"]["numero"] = $carpteasJudiciales["datos"]["numero"];
                                $param["datos"]["anio"] = $carpteasJudiciales["datos"]["anio"];
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
//                                $antecedesDto->setCveTipoCarpeta(10);
//                                $antecedesDto->setIdCarpetaPadre($paramCarpeta["idReferencia"]);
//                                $antecedesDto->setIdCarpetaHija($SolicitudesordenesDto->getIdSolicitudOrden());
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
                                $param["datos"]["numero"] = "";
                                $param["datos"]["anio"] = "";
                                $tmp = $generaPartes;
                                $error = true;
                            }
                        } else {
                            $param["datos"]["numero"] = "";
                            $param["datos"]["anio"] = "";
                            $tmp = $carpteasJudiciales;
                            $error = true;
                        }
                    } else {
                        #Se genera la tabla de Antecedes
                        #Guardamos en la tabla de antecedes
//                        $antecedesDto = new AntecedescarpetasDTO();
//                        $antecedesDto->setActivo("S");
//                        $antecedesDto->setCveTipoCarpeta(10);
//                        $antecedesDto->setIdCarpetaPadre($param["datos"]["idReferencia"]);
//                        $antecedesDto->setIdCarpetaHija($SolicitudesordenesDto->getIdSolicitudOrden());
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

                #Actualizamos la Solicitud de Orden
                if (!$error) {
                    $updateSolicitudDto = new SolicitudesordenesDTO();
                    $updateSolicitudDao = new SolicitudesordenesDAO();
                    $updateSolicitudDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden());
                    $updateSolicitudDto->setNumero($numeroCarpeta);
                    $updateSolicitudDto->setAnio($anioCarpeta);
                    $updateSolicitudDto->setCveJuzgado($juzgadoProcedencia);
                    $updateSolicitudDto->setCveTipoCarpeta($cveTipoCarpeta);
                    $updateSolicitudDto->setCarpetaInv($carpetaInvestigacion);
                    $updateSolicitudDto->setNuc($nuc);
                    $updateSolicitudDto->setIdReferencia($idreferencia);
                    $updateSolicitudDto->setNip($nip);
                    $updateSolicitudDto = $updateSolicitudDao->updateSolicitudesordenes($updateSolicitudDto, $proveedor);
                    if ($updateSolicitudDto != "") {
                        
                    } else {
                        $error = true;
                        $tmp = ["type" => "Error", "text" => "NO SE ACTUALIZO LA INFORMACION DE LA SOLICITUD DE ORDEN DE APREHENSION"];
                    }
                }

                #TERMINAMOS TRANSACCION DE LA BASE DE DATOS Y SE CIERRA LA CONEXION

                if (!$error) {
                    $proveedor->execute("COMMIT");
                    if (($bolStatusMailJuez == true) && ($bolStatusMailAdm == true)) {
                        $tmp = array("type" => "OK",
                            "text" => "REGISTRO DE SOLICITUD DE FORMA EXITOSA Y A SU VEZ SE REMITE CORREO ELECTRONICO",
                            "idOrden" => $OrdenesDto->getIdOrden(),
                            "idSolicitudOrden" => $OrdenesDto->getIdSolicitudOrden(),
                            "numeroOrden" => $OrdenesDto->getNumeroEspecializadoOrden() . "/" . $OrdenesDto->getAnioOrden(),
                            "numeroCarpeta" => $param["datos"]["numero"] . "/" . $param["datos"]["anio"]
                        );
                    } else {
                        $tmp = array("type" => "OK",
                            "text" => "REGISTRO DE SOLICITUD DE FORMA EXITOSA $movimientoExtra",
                            "type" => "OK",
                            "idOrden" => $OrdenesDto->getIdOrden(),
                            "idSolicitudOrden" => $OrdenesDto->getIdSolicitudOrden(),
                            "numeroOrden" => $OrdenesDto->getNumeroEspecializadoOrden() . "/" . $OrdenesDto->getAnioOrden(),
                            "numeroCarpeta" => $param["datos"]["numero"] . "/" . $param["datos"]["anio"]
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

    public function updateSolicitudesordenes($SolicitudesordenesDto, $proveedor = null) {
        $SolicitudesordenesDto = $this->validarSolicitudesordenes($SolicitudesordenesDto);
        $SolicitudesordenesDao = new SolicitudesordenesDAO();
        $SolicitudesordenesDto = $SolicitudesordenesDao->updateSolicitudesordenes($SolicitudesordenesDto, $proveedor);
        return $SolicitudesordenesDto;
    }

    public function deleteSolicitudesordenes($SolicitudesordenesDto, $proveedor = null) {
        $SolicitudesordenesDto = $this->validarSolicitudesordenes($SolicitudesordenesDto);
        $SolicitudesordenesDao = new SolicitudesordenesDAO();
        $SolicitudesordenesDto = $SolicitudesordenesDao->deleteSolicitudesordenes($SolicitudesordenesDto, $proveedor);
        return $SolicitudesordenesDto;
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
                        $cad .= 'veintiun ';
                    break;
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
                        $cad .= 'un ';
                    break;
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

    public function consultaOrden($idJuzgador, $param, $proveedor = null) {
        if ($idJuzgador != 0 && $idJuzgador != "") {
            #INSTANCIAMOS DAOS
            $arrayJuzgadoresSolicitudes = "";
            $countGeneral = 0;

            $solicitudesordenesDao = new SolicitudesordenesDAO();
            $ordenesDao = new OrdenesDAO();
            $personasordenesDao = new PersonasordenesDAO();
            $juzgadoresDAO = new JuzgadoresDAO();

            $solicitudesordenesDto = new SolicitudesordenesDTO();
            $solicitudesordenesDto->setCveEstatusSolicitudOrden("1,2");
            $ordenesDto = new OrdenesDTO();
            $solicitudesordenesDto = $solicitudesordenesDao->selectSolicitudesOrdenesJuzgadores($solicitudesordenesDto, $ordenesDto, $idJuzgador, $param);

            if ($solicitudesordenesDto != "" && count($solicitudesordenesDto) > 0) {
                foreach ($solicitudesordenesDto as $solicitudesordenes) {

                    $arrayJuzgadoresSolicitudes[$countGeneral]["solicitudOrden"] = $solicitudesordenes;

                    #CONSULTAMOS INFORMACION DEL CATEO
                    $ordenesDto = new OrdenesDTO();
                    $ordenesDto->setIdSolicitudOrden($solicitudesordenes->getIdSolicitudOrden());
                    $ordenesDto = $ordenesDao->selectOrdenesNoSolicitud($ordenesDto);
                    $arrayJuzgadoresSolicitudes[$countGeneral]["orden"] = array();
                    if ($ordenesDto != "" && count($ordenesDto) > 0) {
                        $ordenesDto = $ordenesDto[0];
                        $arrayJuzgadoresSolicitudes[$countGeneral]["orden"] = $ordenesDto;
                    }

                    #CONSULTAMOS INFORMACION DE LAS PERSONAS
                    $personasDTO = new PersonasordenesDTO();
                    $personasDTO->setIdSolicitudOrden($solicitudesordenes->getIdSolicitudOrden());
                    $personasDTO = $personasordenesDao->selectPersonasordenes($personasDTO);
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
                    $solicitudesordenesDto = new SolicitudesordenesDTO();
                    $solicitudesordenesDto->setCveEstatusSolicitudOrden("1,2");
                    $ordenesDto = new OrdenesDTO();
                    $param["fields"] = " count(idOrden) as totalCount ";
                    $solicitudesordenesDto = $solicitudesordenesDao->selectSolicitudesOrdenesJuzgadores($solicitudesordenesDto, $ordenesDto, $idJuzgador, $param, "", null);

                    $arrayAux["data"] = $arrayJuzgadoresSolicitudes;
                    $arrayAux["total"] = (int) $solicitudesordenesDto[0];
                    $pagina = array();
                    $param["fields"] = "true";
                    $paginas = $this->getPaginas($solicitudesordenesDto, $param);
                    $arrayAux["paginas"] = $paginas;
                    $arrayAux["type"] = "OK";
                    return $arrayAux;
                } else {
                    return array("type" => "Error", "text" => "NO SE ENCONTRARON SOLICITUDES PARA EL JUZGADOR");
                }
            } else {
                return array("type" => "Error", "text" => "NO SE ENCONTRARON SOLICITUDES PARA EL JUZGADOR");
            }
            //$juzgadosDao = new JuzgadosDAO();
            #OBTENEMOS LAS SOLICITUDES QUE ESTAN ASIGNADAS A UN JUEZ
            /* $juzgadoresordenesDto = new JuzgadoresordenesDTO();
              $juzgadoresordenesDto->setIdJuzgador($idJuzgador);
              $juzgadoresordenesDto = $juzgadoresordenesDao->selectJuzgadoresordenes($juzgadoresordenesDto, " order by idSolicitudOrden desc ");
              if ($juzgadoresordenesDto != "" && count($juzgadoresordenesDto) > 0) {
              foreach ($juzgadoresordenesDto as $juzgadorOrden) {
              $solicitudesordenesDto = new SolicitudesordenesDTO();
              $solicitudesordenesDto->setIdSolicitudOrden($juzgadorOrden->getIdSolicitudOrden());
              $solicitudesordenesDto = $solicitudesordenesDao->selectSolicitudesordenes($solicitudesordenesDto);
              if ($solicitudesordenesDto != "" && count($solicitudesordenesDto) > 0) {
              $solicitudesordenesDto = $solicitudesordenesDto[0];
              if ($solicitudesordenesDto->getCveEstatusSolicitudOrden() == "1" || $solicitudesordenesDto->getCveEstatusSolicitudOrden() == "2") {
              $arrayJuzgadoresSolicitudes[$countGeneral]["solicitudOrden"] = $solicitudesordenesDto;

              #CONSULTAMOS INFORMACION DEL ORDEN DE APREHENSION
              $ordenDto = new OrdenesDTO();
              $ordenDto->setIdSolicitudOrden($solicitudesordenesDto->getIdSolicitudOrden());
              $ordenDto = $ordenesDao->selectOrdenesNoSolicitud($ordenDto);
              $arrayJuzgadoresSolicitudes[$countGeneral]["orden"] = array();
              if ($ordenDto != "" && count($ordenDto) > 0) {
              $ordenDto = $ordenDto[0];
              $arrayJuzgadoresSolicitudes[$countGeneral]["orden"] = $ordenDto;
              }

              #CONSULTAMOS INFORMACION DE LAS PERSONAS
              $personasDTO = new PersonasordenesDTO();
              $personasDTO->setIdSolicitudOrden($solicitudesordenesDto->getIdSolicitudOrden());
              $personasDTO = $personasordenesDao->selectPersonasordenes($personasDTO);
              $arrayJuzgadoresSolicitudes[$countGeneral]["personas"] = array();
              if ($personasDTO != "" && count($personasDTO) > 0) {
              $arrayJuzgadoresSolicitudes[$countGeneral]["personas"] = $personasDTO;
              }

              #CONSULTAMOS INFORMACION DE EL JUEZ ASIGNADO AL ORDEN DE APREHENSION
              $juzgadoresDTO = new JuzgadoresDTO();
              $juzgadoresDTO->setIdJuzgador($juzgadorOrden->getIdJuzgador());
              $juzgadoresDTO = $juzgadoresDAO->selectJuzgadores($juzgadoresDTO);
              $arrayJuzgadoresSolicitudes[$countGeneral]["juzgador"] = array();
              if ($juzgadoresDTO != "" && count($juzgadoresDTO) > 0) {
              $juzgadoresDTO = $juzgadoresDTO[0];
              $arrayJuzgadoresSolicitudes[$countGeneral]["juzgador"] = $juzgadoresDTO;
              }
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
              } */
        } else {
            return array("type" => "Error", "text" => "ERROR NO SE ESPECIFICO EL JUZGADOR");
        }
    }

    public function consultaOrdenDetalle($idOrden, $proveedor = null) {
        if ($idOrden != 0 && $idOrden != "") {
            #INSTANCIAMOS DAOS
            $arrayJuzgadoresSolicitudes = "";
            $countGeneral = 0;

            $juzgadoresordenesDao = new JuzgadoresordenesDAO();
            $solicitudesordenesDao = new SolicitudesordenesDAO();
            $ordenesDao = new OrdenesDAO();
            $personasordenesDao = new PersonasordenesDAO();
            $imputadosordenesDao = new ImputadosordenesDAO();
            $ofendidosordenesDao = new OfendidosordenesDAO();
            $delitosordenesDao = new DelitosordenesDAO();
            $ministeriosresponsablesordenesDao = new MinisteriosresponsablesordenesDAO();


            $juzgadosDao = new JuzgadosDAO();
            $juzgadoresDao = new JuzgadoresDAO();

            #CONSULTAMOS INFORMACION DEL ORDEN DE APREHENSION
            $ordenDto = new OrdenesDTO();
            $ordenDto->setIdOrden($idOrden);
            $ordenDto = $ordenesDao->selectOrdenes($ordenDto);
            if ($ordenDto != "" && count($ordenDto) > 0) {
                $ordenDto = $ordenDto[0];
                $arrayJuzgadoresSolicitudes[$countGeneral]["orden"] = $ordenDto;

                #OBTENEMOS LAS SOLICITUDES QUE ESTAN ASIGNADAS A UN JUEZ
                $juzgadoresordenesDto = new JuzgadoresordenesDTO();
                $juzgadoresordenesDto->setIdSolicitudOrden($ordenDto->getIdSolicitudOrden());
                $juzgadoresordenesDto = $juzgadoresordenesDao->selectJuzgadoresordenes($juzgadoresordenesDto);
                if ($juzgadoresordenesDto != "" && count($juzgadoresordenesDto) > 0) {
                    foreach ($juzgadoresordenesDto as $juzgadorOrden) {
                        $solicitudesordenesDto = new SolicitudesordenesDTO();
                        $solicitudesordenesDto->setIdSolicitudOrden($juzgadorOrden->getIdSolicitudOrden());
                        $solicitudesordenesDto = $solicitudesordenesDao->selectSolicitudesordenes($solicitudesordenesDto);
                        if ($solicitudesordenesDto != "" && count($solicitudesordenesDto) > 0) {
                            $solicitudesordenesDto = $solicitudesordenesDto[0];
//                        $arrayJuzgadoresSolicitudes[$countGeneral]["solicitudOrden"] = array();
                            $arrayJuzgadoresSolicitudes[$countGeneral]["solicitudOrden"] = $solicitudesordenesDto;

                            #CONSULTAMOS INFORMACION DE LAS PERSONAS
                            $personasDTO = new PersonasordenesDTO();
                            $personasDTO->setIdSolicitudOrden($solicitudesordenesDto->getIdSolicitudOrden());
                            $personasDTO = $personasordenesDao->selectPersonasordenes($personasDTO);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["personas"] = array();
                            if ($personasDTO != "" && count($personasDTO) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["personas"] = $personasDTO;
                            }

                            #CONSULTAMOS INFORMACION DE LOS IMPUTADOS
                            $imputadosordenesDto = new ImputadosordenesDTO();
                            $imputadosordenesDto->setIdSolicitudOrden($solicitudesordenesDto->getIdSolicitudOrden());
                            $imputadosordenesDto = $imputadosordenesDao->selectImputadosordenes($imputadosordenesDto);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["imputados"] = array();
                            if ($imputadosordenesDto != "" && count($imputadosordenesDto) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["imputados"] = $imputadosordenesDto;
                            }

                            #CONSULTAMOS INFORMACION DE LOS OFENDIDOS
                            $ofendidosordenesDto = new OfendidosordenesDTO();
                            $ofendidosordenesDto->setIdSolicitudOrden($solicitudesordenesDto->getIdSolicitudOrden());
                            $ofendidosordenesDto = $ofendidosordenesDao->selectOfendidosordenes($ofendidosordenesDto);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["ofendidos"] = array();
                            if ($ofendidosordenesDto != "" && count($ofendidosordenesDto) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["ofendidos"] = $ofendidosordenesDto;
                            }

                            #CONSULTAMOS INFORMACION DE LOS DELITOS
                            $delitosordenesDto = new DelitosordenesDTO();
                            $delitosordenesDto->setIdSolicitudOrden($solicitudesordenesDto->getIdSolicitudOrden());
                            $delitosordenesDto = $delitosordenesDao->selectDelitosordenes($delitosordenesDto);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["delitos"] = array();
                            if ($delitosordenesDto != "" && count($delitosordenesDto) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["delitos"] = $delitosordenesDto;
                            }

                            #CONSULTAMOS INFORMACION DE MINISTERIOS PUBLICOS
                            $ministeriosresponsablesDto = new MinisteriosresponsablesordenesDTO();
                            $ministeriosresponsablesDto->setIdSolicitudOrden($solicitudesordenesDto->getIdSolicitudOrden());
                            $ministeriosresponsablesDto = $ministeriosresponsablesordenesDao->selectMinisteriosresponsablesordenes($ministeriosresponsablesDto);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["ministeriosPublicos"] = array();
                            if ($ministeriosresponsablesDto != "" && count($ministeriosresponsablesDto) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["ministeriosPublicos"] = $ministeriosresponsablesDto;
                            }

                            #CONSULTAMOS INFORMACION DE EL JUEZ ASIGNADO AL ORDEN DE APREHENSION
                            $juzgadoresDTO = new JuzgadoresDTO();
                            $juzgadoresDTO->setIdJuzgador($juzgadorOrden->getIdJuzgador());
                            $juzgadoresDTO = $juzgadoresDao->selectJuzgadores($juzgadoresDTO);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["juzgador"] = array();
                            if ($juzgadoresDTO != "" && count($juzgadoresDTO) > 0) {
                                $juzgadoresDTO = $juzgadoresDTO[0];
                                $arrayJuzgadoresSolicitudes[$countGeneral]["juzgador"] = $juzgadoresDTO;
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
                return array("type" => "Error", "text" => "NO SE ENCONTRO EL ORDEN DE APREHENSION");
            }
        } else {
            return array("type" => "Error", "text" => "ERROR NO SE ESPECIFICO EL JUZGADOR");
        }
    }

    public function cancelarSolicitudOrden($idSolicitudOrden = "", $motivoCancelacion, $proveedor = null) {
        $errorDatos = false;
        $mensajeErrorDatos = false;

        if (($idSolicitudOrden == "") || ($idSolicitudOrden == "0")) {
            $errorDatos = true;
            $mensajeErrorDatos .= " SOLICITUD DE ORDEN DE APREHENSION NO VALIDA \n";
        }

        if (!$errorDatos) {
            $error = false;

            #CONSULTAMOS INFORMACION DE LA ORDEN
            $solicitudesordenesDao = new SolicitudesordenesDAO();
            $solicitudesordenesDto = new SolicitudesordenesDTO();
            $solicitudesordenesDto->setIdSolicitudOrden($idSolicitudOrden);
            $solicitudesordenesDto = $solicitudesordenesDao->selectSolicitudesordenes($solicitudesordenesDto);
            if ($solicitudesordenesDto != "" && count($solicitudesordenesDto) > 0) {
                $solicitudesordenesDto = $solicitudesordenesDto[0];

                #VERIFICAMOS QUE EL ESTATUS DE LA ORDEN SEA REGISTRADO O CONSULTADO
                if ($solicitudesordenesDto->getCveEstatusSolicitudOrden() == "1" || $solicitudesordenesDto->getCveEstatusSolicitudOrden() == "2") {
                    $errorCancelacion = false;
                    $mensajeErrorCancelacion = "";

                    #INICIAMOS TRANSACCION DE LA BASE DE DATOS
                    $proveedor = new Proveedor('mysql', 'sigejupe');
                    $proveedor->connect();
                    $proveedor->execute("BEGIN");

                    #SI ENCUENTRA TODA LA INFORMACION, SE ACTUALIZARA LA INFORMACION DEL JUEZ
                    $solicitudesordenesCancelDto = new SolicitudesordenesDTO();
                    $solicitudesordenesCancelDto->setIdSolicitudOrden($solicitudesordenesDto->getIdSolicitudOrden());
                    $solicitudesordenesCancelDto->setCveEstatusSolicitudOrden("4");
                    $solicitudesordenesCancelDto = $solicitudesordenesDao->updateSolicitudesordenes($solicitudesordenesCancelDto, $proveedor);

                    if ($solicitudesordenesCancelDto != "" && count($solicitudesordenesCancelDto) > 0) {
                        $solicitudesordenesCancelDto = $solicitudesordenesCancelDto[0];
                        if ($solicitudesordenesCancelDto->getCveEstatusSolicitudOrden() != "4") {
                            $errorCancelacion = true;
                            $mensajeErrorUpdate = " ERROR AL CANCELAR LA SOLICITUD DE ORDEN DE APREHENSION";
                        }
                    } else {
                        $errorCancelacion = true;
                        $mensajeErrorUpdate = " ERROR AL CANCELAR LA SOLICITUD DE ORDEN DE APREHENSION";
                    }


                    if (!$errorCancelacion) {
                        $ordenesDto = new OrdenesDTO();
                        $ordenesDao = new OrdenesDAO();
                        $ordenesDto->setIdSolicitudOrden($solicitudesordenesDto->getIdSolicitudOrden());
                        $ordenesDto = $ordenesDao->selectOrdenes($ordenesDto, "", "", $proveedor);
                        if ($ordenesDto != "" && count($ordenesDto) > 0) {
                            $ordenesDto = $ordenesDto[0];
                        } else {
                            $errorCancelacion = true;
                            $mensajeErrorUpdate = " ERROR AL NO ENCONTRAR INFORMACION DE LA ORDEN";
                        }
                    }

                    if (!$errorCancelacion) {
                        $ordnesUpdateDto = new OrdenesDTO();
                        $ordenesDao = new OrdenesDAO();
                        $ordnesUpdateDto->setIdOrden($ordenesDto->getIdOrden());
                        $ordnesUpdateDto->setMotivoCancelacion($motivoCancelacion);
                        $ordnesUpdateDto = $ordenesDao->updateOrdenes($ordnesUpdateDto, "", "", $proveedor);
                        if ($ordnesUpdateDto != "" && count($ordnesUpdateDto) > 0) {
                            $ordnesUpdateDto = $ordnesUpdateDto[0];
                        } else {
                            $errorCancelacion = true;
                            $mensajeErrorUpdate = " ERROR AL ACTUALIZAR EL MOTIVO DE LA CANCELACI�N";
                        }
                    }

                    #OBTENEMOS INFORMACI�N DEL JUZGADO A SOLICITAR 
                    if (!$errorCancelacion) {
                        $JuzgadosDao = new JuzgadosDAO();
                        $JuzgadosDto = new JuzgadosDTO();
                        $JuzgadosDto->setCveJuzgado($solicitudesordenesDto->getCveJuzgadoDesahoga()); #Id del juzgado a solicitar
                        $JuzgadosDto->setActivo("S");
                        $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, "", $proveedor);
                        if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                            $JuzgadosDto = $JuzgadosDto[0];
                        } else {
                            $errorCancelacion = true;
                            $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO A SOLICITAR");
                        }
                    }

                    #OBTNEMOS LA RELACION JUZGADOR - ORDEN DE APREHENSION
                    if (!$errorCancelacion) {
                        $ordenJuez = new JuzgadoresordenesDTO();
                        $ordenJuez->setActivo("S");
                        $ordenJuez->setIdSolicitudOrden($ordenesDto->getIdSolicitudOrden());
                        $ordenJuezDao = new JuzgadoresordenesDAO();
                        $ordenJuez = $ordenJuezDao->selectJuzgadoresordenes($ordenJuez);
                        if ($ordenJuez != "" && count($ordenJuez) > 0) {
                            $ordenJuez = $ordenJuez[0];
                        } else {
                            $errorCancelacion = true;
                            $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO - ORDEN");
                        }
                    }

                    #OBTENEMOS LA INFORMACION DEL JUZGADOR
                    if (!$errorCancelacion) {
                        $juzgadoresDto = new JuzgadoresDTO();
                        $juzgadoresDto->setActivo("S");
                        $juzgadoresDto->setIdJuzgador($ordenJuez->getIdJuzgador());
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
                        $fechaSolicitud = $solicitudesordenesDto->getFechaRegistro();
                        $horaSolicitud = explode(' ', $fechaSolicitud);
                        $horaSolicitud = $horaSolicitud[1];

                        #PROCESO PARA ENVIAR CORREO ELECTRONICO AL JUEZ NOTIFICANDO LA CANCELACI�N DE LA AOLICITUD DE LA ORDEN DE APREHENSION
                        $objDatCorreo = $this->plantillaCorreo("ordenes");
                        if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                            if ($emails != "") {
                                foreach ($emails as $email) {
                                    $emailJuez = $email;

                                    if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                                        $correoJuez = new EmailHELPER();
                                        $correoJuez->setSenderAddress($objDatCorreo->CorreoRemite);
                                        $correoJuez->setToAddress(trim($emailJuez));
                                        $correoJuez->setToName("Cancelacion - Solicitud de Orden de Aprehension - Juez");
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
                                        $strCuerpoEmailJuez = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaSolicitud . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaSolicitud) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE), la solicitud de orden de apehensi&oacute;n n&uacute;mero <b>" . str_pad($ordenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $ordenesDto->getAnioOrden() . "</b>,
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
                                            $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - ORDEN DE  APREHENSION
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                            $BitacoranotificacionesDto->setIdReferencia($ordenesDto->getIdOrden()); #ID DE LA ORDEN
                                            $BitacoranotificacionesDto->setNumero($ordenesDto->getNumeroOrden()); #NUMERO DE LA ORDEN
                                            $BitacoranotificacionesDto->setAnio($ordenesDto->getAnioOrden()); #A�O DE LA ORDEN
                                            $BitacoranotificacionesDto->setCvejuzgado($solicitudesordenesDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
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
                                        $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                        $BitacoranotificacionesDto->setCveTipoActuacion(""); #12 - ORDENES
                                        $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                        $BitacoranotificacionesDto->setIdReferencia($ordenesDto->getIdOrden()); #ID DE LA ORDEN
                                        $BitacoranotificacionesDto->setNumero($ordenesDto->getNumeroOrden()); #NUMERO DE LA ORDEN
                                        $BitacoranotificacionesDto->setAnio($ordenesDto->getAnioOrden()); #A�O DE LA ORDEN
                                        $BitacoranotificacionesDto->setCvejuzgado($solicitudesordenesDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
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
                        $objDatCorreo = $this->plantillaCorreo("ordenes");
                        if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                            if ((trim($ordenesDto->getEmail()) != "") && (strlen($ordenesDto->getEmail()) > 1)) {
                                $correoMp = new EmailHELPER();
                                $correoMp->setSenderAddress($objDatCorreo->CorreoRemite);
                                $correoMp->setToAddress(trim($ordenesDto->getEmail()));
                                $correoMp->setToName("Cancelacion - Solicitud de Orden de Aprehension - MINISTERIO PUBLICO");
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
                                $strCuerpoEmailMP = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaSolicitud . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaSolicitud) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE), la solicitud de orden de aprehnsi&oacute;n n&uacute;mero <b>" . str_pad($ordenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $ordenesDto->getAnioOrden() . "</b>,
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
                                    $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                    $BitacoranotificacionesDto->setCveTipoActuacion(""); #12 - ORDEN APEHENSION
                                    $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                    $BitacoranotificacionesDto->setIdReferencia($ordenesDto->getIdOrden()); #ID DE LA ORDEN
                                    $BitacoranotificacionesDto->setNumero($ordenesDto->getNumeroOrden()); #NUMERO DE LA ORDEN
                                    $BitacoranotificacionesDto->setAnio($ordenesDto->getAnioOrden()); #A�O DE LA ORDEN
                                    $BitacoranotificacionesDto->setCvejuzgado($solicitudesordenesDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                    $BitacoranotificacionesDto->setCveUsuario($solicitudesordenesDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                    $BitacoranotificacionesDto->setMedio($ordenesDto->getEmail());
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
                                $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                $BitacoranotificacionesDto->setCveTipoActuacion(""); #12 - ORDEN
                                $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                $BitacoranotificacionesDto->setIdReferencia($ordenesDto->getIdOrden()); #ID DE LA ORDEN
                                $BitacoranotificacionesDto->setNumero($ordenesDto->getNumeroOrden()); #NUMERO DE LA ORDEN
                                $BitacoranotificacionesDto->setAnio($ordenesDto->getAnioOrden()); #A�O DEL LA ORDEN
                                $BitacoranotificacionesDto->setCvejuzgado($solicitudesordenesDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                $BitacoranotificacionesDto->setCveUsuario($solicitudesordenesDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                $BitacoranotificacionesDto->setMedio($ordenesDto->getEmail());
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
                        $numeroAnioOrden = md5($ordenesDto->getIdOrden() . "-2");
                        $chatCerradosDto = new ChatCerradosDTO();
                        $chatCerradosDao = new ChatCerradosDAO();
                        $chatCerradosDto->setChatId($numeroAnioOrden);
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
                    if ($solicitudesordenesDto->getCveEstatusSolicitudOrden() == "3") {
                        return array("type" => "Error", "text" => "NO SE CANCELO LA SOLICITUD POR QUE LA ORDEN DE APREHENSION SE ENCUENTRA CONTESTADA");
                    }
                    if ($solicitudesordenesDto->getCveEstatusSolicitudOrden() == "4") {
                        return array("type" => "Error", "text" => "ORDEN DE APREHENSION CANCELADA ANTERIORMENTE");
                    }
                }
            } else {
                return array("type" => "Error", "text" => "NO SE ENCONTRO LA ORDEN DE APREHENSION ESPECIFICADA");
            }
        } else {
            return array("type" => "Error", "text" => "INFORMACION INCOMPLETA: " . $mensajeErrorDatos);
        }
    }

    public function consultaOrdenInformacion($type, $solicitudesordenesDto, $param) {
        $datos = [];
        if ($type != 0 && $type != "") {
            $idUsuario = $_SESSION['cveUsuarioSistema'];
            $numeroOrden = $solicitudesordenesDto->getNumero();
            $anioOrden = $solicitudesordenesDto->getAnio();
            $fechaRegistro = $solicitudesordenesDto->getFechaRegistro();
            $idJuzgadoT = 0;
            if ($solicitudesordenesDto->getCveJuzgado() != "") {
                $idJuzgadoT = $solicitudesordenesDto->getCveJuzgado();
            }
            $filtros["numeroOrden"] = $numeroOrden;
            $filtros["anioOrden"] = $anioOrden;
            $filtros["idJuzgadoT"] = $idJuzgadoT;
            $solicitudesordenesDto = new solicitudesordenesDto();
            $solOrdenesDAO = new SolicitudesordenesDAO();
            switch ($type) {
                case "1": // --> Busuqeda General
                    $ordenesDto = new OrdenesDTO();
                    $ordenesDao = new OrdenesDAO();
                    $ordenesDto->setAnioOrden($anioOrden);
                    $ordenesDto->setNumeroOrden($numeroOrden);
                    $ordenesDto = $ordenesDao->selectOrdenes($ordenesDto, $param, "ORDER BY fechaRegistro DESC");
                    if ($ordenesDto != "") {
                        $datos = [];
                        $i = 0;
                        foreach ($ordenesDto as $index => $value) {
                            $filtros["idSolicitudOrden"] = $value->getIdSolicitudOrden();
                            $resultado = $this->infoOrdenDetalle($filtros);
                            if ($resultado != "" && count($resultado) != 0) {
                                $datos["datos"][$i] = $resultado;
                                $i++;
                            }
                        }
                        $ordenesDto = new OrdenesDTO();
                        $ordenesDto->setNumeroOrden($numeroOrden);
                        $ordenesDto->setAnioOrden($anioOrden);
                        $param["fields"] = " count(idOrden) as totalCount ";
                        $ordenesDto = $ordenesDao->selectOrdenes($ordenesDto, $param);
                        $datos["total"] = (int) $ordenesDto[0];
                        $paginas = $this->getPaginas($ordenesDto, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return array("type" => "ERROR", "mensaje" => "NO SE ENCONTRARON RESULTADOS");
                    }
                    break;
                case "2": // --> Busuqeda MP
                    $ordenesDto = new OrdenesDTO();
                    $ordenesDto->setAnioOrden($anioOrden);
                    $ordenesDto->setNumeroOrden($numeroOrden);
                    $solicitudesordenesDto->setCveUsuario($idUsuario);

                    $solicitudesordenesDto = $solOrdenesDAO->selectSolicitudesOrdenmp($solicitudesordenesDto, $ordenesDto, $param, "ORDER BY fechaRegistro DESC");
                    if ($solicitudesordenesDto != "") {
                        $datos = [];
                        $i = 0;
                        foreach ($solicitudesordenesDto as $index => $value) {
                            $filtros["idSolicitudOrden"] = $value->getIdSolicitudOrden();
                            $resultado = $this->infoOrdenDetalle($filtros);
                            if ($resultado != "" && count($resultado) != 0) {
                                $datos["datos"][$i] = $resultado;
                                $i++;
                            }
                        }
                        // Obtenemos el numero de paginas
                        $ordenesDto = new OrdenesDTO();
                        $ordenesDto->setAnioOrden($anioOrden);
                        $ordenesDto->setNumeroOrden($numeroOrden);
                        $solicitudesordenesDtos = new SolicitudesordenesDTO();
                        $solicitudesordenesDtos->setCveUsuario($idUsuario);
                        $param["fields"] = " count(idSolicitudCateo) as totalCount ";
                        $solicitudesordenesDtos = $solOrdenesDAO->selectSolicitudesOrdenmp($solicitudesordenesDtos, $ordenesDto, $param);
                        $datos["total"] = (int) $solicitudesordenesDtos[0];
                        $paginas = $this->getPaginas($solicitudesordenesDtos, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return array("type" => "ERROR", "mensaje" => "NO SE ENCONTRARON RESULTADOS");
                    }
                    break;
                case "3": // --> Busuqeda Juzgador
                    $juzgadorDto = new JuzgadoresDTO();
                    $juzgadorDao = new JuzgadoresDAO();

                    $juzgadorDto->setCveUsuario($idUsuario);
                    $juzgadorDto = $juzgadorDao->selectJuzgadores($juzgadorDto);

                    if ($juzgadorDto != "") {
                        $idUsuario = $juzgadorDto[0]->getIdJuzgador();

                        $ordenesDto = new OrdenesDTO();
                        $ordenesDto->setAnioOrden($anioOrden);
                        $ordenesDto->setNumeroOrden($numeroOrden);
                        $solicitudesordenesDto = $solOrdenesDAO->selectSolicitudesOrdenesJuzgadores($solicitudesordenesDto, $ordenesDto, $idUsuario, $param);

                        if ($solicitudesordenesDto != "") {
                            $datos = [];
                            $i = 0;
                            foreach ($solicitudesordenesDto as $index => $value) {
                                $filtros["idSolicitudOrden"] = $value->getIdSolicitudOrden();
                                $resultado = $this->infoOrdenDetalle($filtros);
                                if ($resultado != "" && count($resultado) != 0) {
                                    $datos["datos"][$i] = $resultado;
                                    $i++;
                                }
                            }
                            $ordenesDto = new OrdenesDTO();
                            $ordenesDto->setAnioOrden($anioOrden);
                            $ordenesDto->setNumeroOrden($numeroOrden);
                            $solicitudesordenesDtos = new SolicitudesordenesDTO();
                            $param["fields"] = " count(idOrden) as totalCount ";
                            $solicitudesordenesDtos = $solOrdenesDAO->selectSolicitudesOrdenesJuzgadores($solicitudesordenesDtos, $ordenesDto, $idUsuario, $param);
                            $datos["total"] = (int) $solicitudesordenesDtos[0];
                            $paginas = $this->getPaginas($solicitudesordenesDtos, $param);
                            $datos["paginas"] = $paginas;
                        } else {
                            return array("type" => "ERROR", "mensaje" => "NO SE ENCONTRARON RESULTADOS");
                        }
                    }
                    break;
                case "4": // --> Busqueda AdminJuzgador
//                    if (isset($_SEScSION['cveAdscripcion'])) {
                    $idJuzgadoDesahoga = $_SESSION['cveAdscripcion'];
//                    }
//                    $idJuzgadoDesahoga = 762;

                    $ordenesDto = new OrdenesDTO();
                    $ordenesDao = new OrdenesDAO();
                    $ordenesDto->setNumeroOrden($numeroOrden);
                    $ordenesDto->setAnioOrden($anioOrden);
                    $ordenesDto = $solOrdenesDAO->consultaDetalleOrdenesJuzgado($ordenesDto, $idJuzgadoDesahoga, "ORDER BY fechaRegistro DESC", $param);

                    if ($ordenesDto != "") {
                        $datos = [];
                        $i = 0;
                        foreach ($ordenesDto as $index => $value) {
                            $filtros["idSolicitudOrden"] = $value->getIdSolicitudOrden();
                            $resultado = $this->infoOrdenDetalle($filtros);
                            if ($resultado != "" && count($resultado) != 0) {
                                $datos["datos"][$i] = $resultado;
                                $i++;
                            }
                        }
                        // Obtenemos el numero de paginas
                        $ordenesDto = new OrdenesDTO();
                        $ordenesDto->setNumeroOrden($numeroOrden);
                        $ordenesDto->setAnioOrden($anioOrden);
                        $param["fields"] = " count(idOrden) as totalCount ";
                        $ordenesDto = $solOrdenesDAO->consultaDetalleOrdenesJuzgado($ordenesDto, $idJuzgadoDesahoga, "ORDER BY fechaRegistro DESC", $param);
                        $datos["total"] = (int) $ordenesDto[0];
                        $paginas = $this->getPaginas($ordenesDto, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return array("type" => "ERROR", "mensaje" => "NO SE ENCONTRARON RESULTADOS");
                    }
                    break;
                case "5" : // --> Bitacora
                    $ordenDto = new OrdenesDTO();
                    if ($idJuzgadoT == 0)
                        $param["numJuzgado"] = "";
                    else
                        $param["numJuzgado"] = $idJuzgadoT;

                    $ordenDto = $solOrdenesDAO->selectBitacora($param);

                    if ($ordenDto != "") {
                        $datos = [];
                        $i = 0;
                        foreach ($ordenDto as $index => $value) {
                            $filtros["idSolicitudOrden"] = $value->getIdSolicitudOrden();
                            $resultado = $this->infoOrdenDetalle($filtros);
                            if ($resultado != "" && count($resultado) != 0) {
                                $datos["datos"][$i] = $resultado;
                                $i++;
                            }
                        }
                        // Obtenemos el numero de paginas
                        $ordenDtos = new OrdenesDTO();
                        $ordenDtos->setNumeroOrden($numeroOrden);
                        $ordenDtos->setAnioOrden($anioOrden);
                        $param["fields"] = " count(idOrden) as totalCount ";
                        $ordenDtos = $solOrdenesDAO->selectBitacora($param);
                        $datos["total"] = (int) $ordenDtos[0];
                        $paginas = $this->getPaginas($ordenDtos, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return array("status" => "Error");
                    }
                    break;
                default :  // --> Busuqeda General
                    break;
            }
            if (count($datos) >= 1) {
                $datos["type"] = "OK";
                $datos["pagina"] = $param["pag"];
            } else {
                $datos["type"] = "Error";
                $datos["mensaje"] = "NO SE ENCONTRARON RESULTADOS";
            }
            return $datos;
        }
    }

    private function infoOrdenDetalle($filtros) {
        $resultados = [];
        $solOrdenesDAO = new SolicitudesordenesDAO();
        $juzgadoDto = new JuzgadosDTO();
        $juzgadoDAO = new JuzgadosDAO();
        $ordenesDto = new OrdenesDTO();
        $ordenesDao = new OrdenesDAO();
        $statusDto = new EstatussolicitudesordenesDto();
        $statusDAO = new EstatusSolicitudesordenesDAO();
        $personDto = new PersonasordenesDTO();
        $personDAO = new PersonasordenesDAO();

        $numeroOrden = $filtros["numeroOrden"];
        $anioOrden = $filtros["anioOrden"];
        $idJuzgadoT = $filtros["idJuzgadoT"];
        if ($idJuzgadoT == "") {
            $idJuzgadoT = "";
        }
        if ($filtros["idSolicitudOrden"] != "") {
            $filtros["idSolicitudOrden"];
            $ordenesDto->setIdSolicitudOrden($filtros["idSolicitudOrden"]);
        }
        $ordenesDto->setanioOrden($anioOrden);
        $ordenesDto->setnumeroOrden($numeroOrden);
        $ordenesDto = $ordenesDao->selectOrdenes($ordenesDto);
        $i = 0;
        if ($ordenesDto != "") {
            foreach ($ordenesDto as $indexCat => $valueCat) {
                $idSolicitudOrden = $valueCat->getIdSolicitudOrden();
                $solicitudesordenesDto = new solicitudesordenesDto();
                $solicitudesordenesDto->setIdSolicitudOrden($idSolicitudOrden);
                if ($idJuzgadoT != 0) {
                    $solicitudesordenesDto->setCveJuzgado($idJuzgadoT);
                }
                $resultado = $solOrdenesDAO->selectSolicitudesordenes($solicitudesordenesDto);
                if ($resultado != "") {
                    foreach ($resultado as $index => $value) {
                        $resultados['IdSolicitudOrden'] = $value->getIdSolicitudOrden();
                        $juzgadorordenesDto = new JuzgadoresOrdenesDTO();
                        $juzgadorordenesDao = new JuzgadoresOrdenesDAO();
                        $juzgadorDto = new JuzgadoresDTO();
                        $juzgadorDAO = new JuzgadoresDAO();
                        $juzgadorordenesDto->setIdSolicitudOrden($value->getIdSolicitudOrden());
                        $juzgadorordenesDto = $juzgadorordenesDao->selectJuzgadoresordenes($juzgadorordenesDto);
                        if ($juzgadorordenesDto != "") {
                            $idJuzgador = $juzgadorordenesDto[0]->getIdJuzgador();
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
                        $idJuzgado = $value->getCveJuzgado();
                        $idSolicitudOrden = $value->getIdSolicitudOrden();

                        // Obtenemos el Juzgado            
                        $juzgadoDto->setCveJuzgado($idJuzgado);
                        $juzgados = $juzgadoDAO->selectJuzgados($juzgadoDto);
                        if ($juzgados != "") {
                            $resultados['juzgado'] = $juzgados[0]->getDesJuzgado();
                        } else {
                            $resultados['juzgado'] = "";
                        }

                        // Obtenemos la informacion de la Orden de aprehension
                        if ($idSolicitudOrden != "") {
                            $ordenesDto = new OrdenesDTO();
                        }
                        $ordenesDto->setIdSolicitudOrden($idSolicitudOrden);
                        $ordenes = $ordenesDao->selectOrdenes($ordenesDto);
                        if ($ordenes != "") {
                            $resultados['idOrden'] = $ordenes[0]->getIdOrden();
                            $resultados['numOrden'] = $ordenes[0]->getnumeroOrden();
                            $resultados['numEspecializadoOrden'] = $ordenes[0]->getNumeroEspecializadoOrden();
                            $resultados['anioOrden'] = $ordenes[0]->getanioOrden();
                            $fechaHoraRegistro = explode(" ", utf8_encode($ordenes[0]->getFechaRegistro()));
                            $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                            $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                            $horaRegistro = $fechaHoraRegistro[1];
                            $resultados['fechaRegistro'] = $fechaRegistro . " " . $horaRegistro;

                            if ($ordenes[0]->getFechaRespuesta() != "") {
                                $fechaHoraRegistro = explode(" ", utf8_encode($ordenes[0]->getFechaRespuesta()));
                                $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                                $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                                $horaRegistro = $fechaHoraRegistro[1];
                                $fechaRespuesta = $fechaRegistro . " " . $horaRegistro;
                            } else {
                                $fechaRespuesta = "Sin Respuesta";
                            }

                            $resultados['fechaRespuesta'] = $fechaRespuesta;
                            //echo $ordenes[0]->getFechaRespuesta();
                            if ($ordenes[0]->getFechaRespuesta() != "") {
                                $espera = $this->longDate($ordenes[0]->getFechaRegistro(), $ordenes[0]->getFechaRespuesta());
                            } else {
                                $espera = "Sin Respuesta";
                            }
                            $resultados["tiempoRespuesta"] = utf8_encode("$espera");
                        } else {
                            $resultados['numOrden'] = "";
                            $resultados['fechaRegistro'] = "";
                            $resultados['fechaRespuesta'] = "";
                            $resultados["tiempoRespuesta"] = "";
                        }

                        // Obtenemos informacion de Estatus
                        $resultados['cveEstatusSolicitudOrden'] = $value->getCveEstatusSolicitudOrden();
                        $statusDto->setCveEstatusSolicitudOrdenes($value->getCveEstatusSolicitudOrden());
                        $estatusOrdens = $statusDAO->selectEstatussolicitudesordenes($statusDto);
                        if ($estatusOrdens != "") {
                            $resultados['estatusOrden'] = $estatusOrdens[0]->getDesEstatusSolicitudOrdenes();
                        } else {
                            $resultados['estatusOrden'] = "";
                        }

                        // Obtenemos las Personas
                        $personDto->setIdSolicitudOrden($idSolicitudOrden);
                        $personas = $personDAO->selectPersonasordenes($personDto);
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

    public function actualizaJuzgadorOrden($idJuzgador = "", $idOrden = "", $proveedor = null) {
        $errorDatos = false;
        $mensajeErrorDatos = false;

        if (($idJuzgador == "") || ($idJuzgador == "0")) {
            $errorDatos = true;
            $mensajeErrorDatos .= " JUZGADOR NO VALIDO \n";
        }

        if (($idOrden == "") || ($idOrden == "0")) {
            $errorDatos = true;
            $mensajeErrorDatos .= " ORDEN DE APREHENSION NO VALIDO \n";
        }

        if (!$errorDatos) {
            $error = false;

            #CONSULTAMOS INFORMACION DEL ORDEN DE APREHENSION
            $ordenesDao = new OrdenesDAO();
            $ordenesDto = new OrdenesDTO();
            $ordenesDto->setIdOrden($idOrden);
            $ordenesDto = $ordenesDao->selectOrdenes($ordenesDto);
            if ($ordenesDto != "" && count($ordenesDto) > 0) {
                $ordenesDto = $ordenesDto[0];

                #CONSULTAMOS INFORMACION DE LA SOLICITUD
                $solicitudesordenesDao = new SolicitudesordenesDAO();
                $solicitudesordenesDto = new SolicitudesordenesDTO();
                $solicitudesordenesDto->setIdSolicitudOrden($ordenesDto->getIdSolicitudOrden());
                $solicitudesordenesDto = $solicitudesordenesDao->selectSolicitudesordenes($solicitudesordenesDto);
                if ($solicitudesordenesDto != "" && count($solicitudesordenesDto) > 0) {
                    $solicitudesordenesDto = $solicitudesordenesDto[0];

                    if ($solicitudesordenesDto->getCveEstatusSolicitudOrden() == "3") {
                        return array("type" => "Error", "text" => "LA ORDEN DE APREHENSI&OACUTE;N YA SE ENCUENTRA CONTESTADO");
                    }
                    if ($solicitudesordenesDto->getCveEstatusSolicitudOrden() == "4") {
                        return array("type" => "Error", "text" => utf8_encode("LA ORDEN DE APREHENSI�N SE ENCUENTRA CANCELADO"));
                    }

                    #OBTENEMOS LAS SOLICITUDES QUE ESTAN ASIGNADAS A UN JUEZ
                    $juzgadoresordenesDto = new JuzgadoresordenesDTO();
                    $juzgadoresordenesDao = new JuzgadoresordenesDAO();
                    $juzgadoresordenesDto->setIdSolicitudOrden($ordenesDto->getIdSolicitudOrden());
                    $juzgadoresordenesDto = $juzgadoresordenesDao->selectJuzgadoresordenes($juzgadoresordenesDto);
                    if ($juzgadoresordenesDto != "" && count($juzgadoresordenesDto) > 0) {
                        $juzgadoresordenesDto = $juzgadoresordenesDto[0];

                        $juezAnterior = $juzgadoresordenesDto->getIdJuzgador();
                        $errorUpdate = false;
                        $mensajeErrorUpdate = "";

                        #INICIAMOS TRANSACCION DE LA BASE DE DATOS
                        $proveedor = new Proveedor('mysql', 'sigejupe');
                        $proveedor->connect();
                        $proveedor->execute("BEGIN");

                        #SI ENCUENTRA TODA LA INFORMACION, SE ACTUALIZARA LA INFORMACION DEL JUEZ
                        $juzgadoresordenesUpdateDto = new JuzgadoresordenesDTO();
                        $juzgadoresordenesDao = new JuzgadoresordenesDAO();
                        $juzgadoresordenesUpdateDto->setIdJuzgador($idJuzgador);
                        $juzgadoresordenesUpdateDto->setIdJuzgadorOrden($juzgadoresordenesDto->getIdJuzgadorOrden());
                        $juzgadoresordenesUpdateDto = $juzgadoresordenesDao->updateJuzgadoresordenes($juzgadoresordenesUpdateDto);
                        if ($juzgadoresordenesUpdateDto != "" && count($juzgadoresordenesUpdateDto) > 0) {
                            $juzgadoresordenesUpdateDto = $juzgadoresordenesUpdateDto[0];
                        } else {
                            $errorUpdate = true;
                            $mensajeErrorUpdate = " ERROR AL ACTUALIZAR LA INFORMACION DE EL JUZGADOR DE LA ORDEN DE APREHENSI&OACUTE;N ";
                        }

                        #OBTENEMOS INFORMACI�N DEL JUZGADO A SOLICITAR 
                        if (!$errorUpdate) {
                            $JuzgadosDao = new JuzgadosDAO();
                            $JuzgadosDto = new JuzgadosDTO();
                            $JuzgadosDto->setCveJuzgado($solicitudesordenesDto->getCveJuzgadoDesahoga()); #Id del juzgado a solicitar
                            $JuzgadosDto->setActivo("S");
                            $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, "", $proveedor);
                            if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                                $JuzgadosDto = $JuzgadosDto[0];
                                $file = dirname(__FILE__) . "/../../../archivos/actadminjuzgadosordenes" . $JuzgadosDto->getCveJuzgado() . ".json";
                                $adminJuzgados = json_decode(file_get_contents($file), true);
                            } else {
                                $errorUpdate = true;
                                $mensajeErrorUpdate = "ERROR AL OBTENER INFORMACION DEL JUZGADO A SOLICITAR";
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
                                $numeroAnioOrden = md5($ordenesDto->getIdOrden() . "-2");
                                $chatMessageDto = new ChatMessagesDTO(); //NOTIFICACION DE CAMBIO DE JUEZ
                                $chatMessagesDao = new ChatMessagesDAO();
                                $chatMessageDto->setChatId($numeroAnioOrden);
                                $chatMessageDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                                $chatMessageDto->setMensaje("SE REALIZO CAMBIO DEL JUEZ:" . $juzgadorAnteriorDto->getTitulo() . " " . $juzgadorAnteriorDto->getNombre() . "  " . $juzgadorAnteriorDto->getPaterno() . " " . $juzgadorAnteriorDto->getMaterno() . " DE LA ORDEN DE APREHENSION: " . $ordenesDto->getNumeroOrden() . "/" . $ordenesDto->getAnioOrden());
                                $chatMessageDto->setCveUsuario($juzgadorAnteriorDto->getCveUsuario());
                                $chatMessageDto->setNombreUsuario($juzgadorAnteriorDto->getTitulo() . " " . $juzgadorAnteriorDto->getNombre() . "  " . $juzgadorAnteriorDto->getPaterno());
                                $chatMessageDto->setCveNumero($ordenesDto->getIdOrden());
                                $chatMessageDto->setTipoChat("2"); # tipo chat 2 = orden de aprehension
                                $chatMessageDto = $chatMessagesDao->insertChatMessages($chatMessageDto, $proveedor);
                                if ($chatMessageDto != "" && count($chatMessageDto) > 0) {
                                    $chatMessageDto = $chatMessageDto[0];
                                } else {
                                    $errorUpdate = true;
                                    $mensajeErrorUpdate = "ERROR AL AGREGAR ULTIMO MENSAJE DEL JUEZ ORIGINAL A LA SALA DE CHAT DE LA ORDEN DE APREHENSION";
                                    $tmp = array("type" => "Error", "text" => "ERROR AL AGREGAR ULTIMO MENSAJE DEL JUEZ ORIGINAL A LA SALA DE CHAT DE LA ORDEN DE APREHENSION");
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
                                $numeroAnioOrden = md5($ordenesDto->getIdOrden() . "-2");
                                $chatMessageDto = new ChatMessagesDTO(); //INVITACI�N A NUEVO JUEZ
                                $chatMessagesDao = new ChatMessagesDAO();
                                $chatMessageDto->setChatId($numeroAnioOrden);
                                $chatMessageDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                                $chatMessageDto->setMensaje("SE AGREGO A JUEZ:" . $juzgadorNuevoDto->getTitulo() . " " . $juzgadorNuevoDto->getNombre() . "  " . $juzgadorNuevoDto->getPaterno() . " " . $juzgadorNuevoDto->getMaterno() . "AL CHAT DE LA ORDEN DE APREHENSION: " . $ordenesDto->getNumeroOrden() . "/" . $ordenesDto->getAnioOrden());
                                $chatMessageDto->setCveUsuario($juzgadorNuevoDto->getCveUsuario());
                                $chatMessageDto->setNombreUsuario($juzgadorNuevoDto->getTitulo() . " " . $juzgadorNuevoDto->getNombre() . "  " . $juzgadorNuevoDto->getPaterno() . " " . $juzgadorNuevoDto->getMaterno());
                                $chatMessageDto->setCveNumero($ordenesDto->getIdOrden());
                                $chatMessageDto->setTipoChat("2"); # tipo chat 2 =  orden de aprehension
                                $chatMessageDto = $chatMessagesDao->insertChatMessages($chatMessageDto, $proveedor);
                                if ($chatMessageDto != "" && count($chatMessageDto) > 0) {
                                    $chatMessageDto = $chatMessageDto[0];
                                } else {
                                    $errorUpdate = true;
                                    $mensajeErrorUpdate = "ERROR AL AGREGAR AL NUEVO JUEZ A LA SALA DE CHAT DE LA ORDEN DE APREHENSION";
                                    $tmp = array("type" => "Error", "text" => "ERROR AL AGREGAR AL NUEVO JUEZ A LA SALA DE CHAT DE LA ORDEN DE APREHENSION");
                                }
                            } else {
                                $errorUpdate = true;
                                $mensajeErrorUpdate = "ERROR AL OBTENER INFORMACION DEL JUEZ NUEVO";
                                $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUEZ NUEVO");
                            }
                        }

                        #CAMBIAMOS LA CLAVE DEL JUZGADOR VIEJO POR PA DEL JUZGADOR NUEVO PARA QUE EL VIEJO YA NO VEA EL CHAT 
                        if (!$errorUpdate) {
                            $juzgadorAnterior = $juzgadorAnteriorDto->getCveUsuario();
                            $juzgadorNuevo = $juzgadorNuevoDto->getCveUsuario();
                            $numeroAnioOrden = md5($ordenesDto->getIdOrden() . "-2");
                            $chatMessagesDao = new ChatMessagesDAO();
                            $chatMessageDto = $chatMessagesDao->updateChatmessagesJuzgadores($juzgadorAnterior, $juzgadorNuevo, $numeroAnioOrden, $proveedor);
                            if ($chatMessageDto != "" && count($chatMessageDto) > 0) {
                                $chatMessageDto = $chatMessageDto[0];
                            } else {
                                $errorUpdate = true;
                                $mensajeErrorUpdate = "ERROR AL ACTUALIZARLA CLAVE DEL NUEVO JUEZ EN LA SALA DE CHAT DE LA ORDEN DE APREHENSION";
                                $tmp = array("type" => "Error", "text" => "ERROR AL ACTUALIZARLA CLAVE DEL NUEVO JUEZ EN LA SALA DE CHAT DE LA ORDEN DE APREHENSION");
                            }
                        }

                        #OBTENEMOS MEDIOS DE COMUNICACION DEL NUEVO JUEZ
                        $mediosDao = new TelefonosjuzgadoresDAO();
                        if (!$errorUpdate) {
                            $mediosNuevoJuez = new TelefonosjuzgadoresDTO();
                            $mediosNuevoJuez->setActivo("S");
                            $mediosNuevoJuez->setIdJuzgador($juzgadorNuevoDto->getIdJuzgador());
                            $mediosNuevoJuez = $mediosDao->selectTelefonosjuzgadores($mediosNuevoJuez);
                            $emailsNvoJuez = array();
                            if ($mediosNuevoJuez != "") {
                                foreach ($mediosNuevoJuez as $medionvo) {
                                    if ($medionvo->getEmail() != "") {
                                        $emailsNvoJuez[] = $medionvo->getEmail();
                                    }
                                }
                            } else {
                                $errorUpdate = true;
                                $mensajeErrorUpdate = "ERROR NUEVO JUEZ NO TIENE MEDIOS DE NOTIFICACION";
                                $tmp = array("type" => "Error", "text" => "ERROR NUEVO JUEZ NO TIENE MEDIOS DE NOTIFICACION");
                            }
                        }

                        #PROCESO PARA ENVIAR CORREO ELECTRONICO AL JUEZ
                        if (!$errorUpdate) {
                            $fechaOrden = $ordenesDto->getFechaRegistro();
                            $horaOrden = explode(' ', $fechaOrden);
                            $horaOrden = $horaOrden[1];
                            if ($emailsNvoJuez != "") {
                                $objDatCorreo = $this->plantillaCorreo("ordenes");
                                foreach ($emailsNvoJuez as $emailnvojuez) {
                                    if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                                        $emailJuez = $emailnvojuez;
                                        $nombrenvo = $juzgadorNuevoDto->getNombre() . " " . $juzgadorNuevoDto->getPaterno() . " " . $juzgadorNuevoDto->getMaterno();
                                        $xNombre = strtoupper(utf8_encode($nombrenvo));
                                        if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                                            $correoJuez = new EmailHELPER();
                                            $correoJuez->setSenderAddress($objDatCorreo->CorreoRemite);
                                            $correoJuez->setToAddress(trim($emailJuez));
                                            $correoJuez->setToName("Solicitud de Orden de Aprehension - SUSTITUTO");
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
                                            $strCuerpoEmailJuez = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaOrden . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaOrden) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),  
                                           se realiz&oacute; el cambio de juzgador del <b>" . $JuzgadosDto->getDesJuzgado() . "</b> de  la solicitud de orden de aprehensi&oacute;n n&uacute;mero <b>" . str_pad($ordenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $ordenesDto->getAnioOrden() . "</b>, 
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
                                                $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                                $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - ORDEN DE APREHENSION
                                                $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                                $BitacoranotificacionesDto->setIdReferencia($ordenesDto->getIdOrden()); #ID DEL ORDEN DE APREHENSION
                                                $BitacoranotificacionesDto->setNumero($ordenesDto->getNumeroOrden()); #NUMERO DE ORDEN DE APREHENSION
                                                $BitacoranotificacionesDto->setAnio($ordenesDto->getAnioOrden()); #A�O DEL ORDEN DE APREHENSION
                                                $BitacoranotificacionesDto->setCvejuzgado($solicitudesordenesDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
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
                                            $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - ORDEN DE APREHENSION
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                            $BitacoranotificacionesDto->setIdReferencia($ordenesDto->getIdOrden()); #ID DEL ORDEN DE APREHENSION
                                            $BitacoranotificacionesDto->setNumero($ordenesDto->getNumeroOrden()); #NUMERO DE ORDEN DE APREHENSION
                                            $BitacoranotificacionesDto->setAnio($ordenesDto->getAnioOrden()); #A�O DEL ORDEN DE APREHENSION
                                            $BitacoranotificacionesDto->setCvejuzgado($solicitudesordenesDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
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
                                        $mensajeErrorUpdate = "ERROR AL OBTENER CONFIGURACION DE CORREOS";
                                        $mensageCorreos = "ERROR AL OBTENER CONFIGURACION DE CORREOS";
                                    }
                                }
                            } else {
                                $errorUpdate = true;
                                $mensajeErrorUpdate = "NO SE ENCONTRARON DATOS DE NOTIFICACION DEL NUEVO JUEZ";
                            }
                        }

                        #PROCESO PARA ENVIAR CORREO ELECTRONICO AL ADMINISTRADOR DEL JUZGADO
                        if (!$errorUpdate) {
                            if (isset($adminJuzgados["type"]) == "OK") {
                                $objDatCorreo = $this->plantillaCorreo("ordenes");
                                foreach ($adminJuzgados["usuarios"] as $usuarios) {
                                    if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                                        $emailAdministrador = $usuarios["email"];
                                        $xNombre = strtoupper(utf8_decode($usuarios["Nombre"] . " " . $usuarios["Paterno"] . " " . $usuarios["Materno"]));
                                        if ((trim($emailAdministrador) != "") && (strlen($emailAdministrador) > 1)) {
                                            $correoAdministrador = new EmailHELPER();
                                            $correoAdministrador->setSenderAddress($objDatCorreo->CorreoRemite);
                                            $correoAdministrador->setToAddress(trim($emailAdministrador));
                                            $correoAdministrador->setToName("Solicitud de Ordenes de Aprehension - ADMINISTRADOR");
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
                                            $strCuerpoEmailAdm = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaOrden . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaOrden) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),  
                                           se realiz&oacute; el cambio de juzgador del <b>" . $JuzgadosDto->getDesJuzgado() . "</b> de  la solicitud de orden de aprehensi&oacute;n n&uacute;mero <b>" . str_pad($ordenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $ordenesDto->getAnioOrden() . "</b>, 
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
                                                $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                                $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - ORDEN DE APREHENSION
                                                $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                                $BitacoranotificacionesDto->setIdReferencia($ordenesDto->getIdOrden()); #ID DEL ORDEN DE APREHENSION
                                                $BitacoranotificacionesDto->setNumero($ordenesDto->getNumeroOrden()); #NUMERO DE ORDEN DE APREHENSION
                                                $BitacoranotificacionesDto->setAnio($ordenesDto->getAnioOrden()); #A�O DEL ORDEN DE APREHENSION
                                                $BitacoranotificacionesDto->setCvejuzgado($solicitudesordenesDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
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
                                            $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - ORDEN DE APREHENSION
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                            $BitacoranotificacionesDto->setIdReferencia($ordenesDto->getIdOrden()); #ID DEL ORDEN DE APREHENSION
                                            $BitacoranotificacionesDto->setNumero($ordenesDto->getNumeroOrden()); #NUMERO DE ORDEN DE APREHENSION
                                            $BitacoranotificacionesDto->setAnio($ordenesDto->getAnioOrden()); #A�O DEL ORDEN DE APREHENSION
                                            $BitacoranotificacionesDto->setCvejuzgado($solicitudesordenesDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
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
                                $mensajeErrorUpdate = "ERROR NO SE ENCONTRARON DATOS DE NOTIFICACION DEL JUEZ ANTERIOR";
                                $tmp = array("type" => "Error", "text" => "ERROR NO SE ENCONTRARON DATOS DE NOTIFICACION DEL JUEZ ANTERIOR");
                            }
                        }

                        #PROCESO PARA ENVIAR CORREO ELECTRONICO AL JUEZ ANTERIOR
                        if (!$errorUpdate) {
                            if ($mailsantJuez != "") {
                                $objDatCorreo = $this->plantillaCorreo("ordenes");
                                foreach ($mailsantJuez as $mailantJuez) {
                                    if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                                        $emailJuezAnterior = $mailantJuez;
                                        $nombreAnt = $juzgadorAnteriorDto->getNombre() . " " . $juzgadorAnteriorDto->getPaterno() . " " . $juzgadorAnteriorDto->getMaterno();
                                        $xNombre = strtoupper(utf8_encode($nombreAnt));
                                        if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                                            $correoJuezAnterior = new EmailHELPER();
                                            $correoJuezAnterior->setSenderAddress($objDatCorreo->CorreoRemite);
                                            $correoJuezAnterior->setToAddress(trim($emailJuez));
                                            $correoJuezAnterior->setToName("Solicitud de Ordenes de Aprehension - REMPLAZO");
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
                                            $strCuerpoEmailJuez = "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaOrden . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaOrden) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),  
                                           se realiz&oacute; el cambio de juzgador del <b>" . $JuzgadosDto->getDesJuzgado() . "</b> de  la solicitud de orden de aprehensi&oacute;n n&uacute;mero <b>" . str_pad($ordenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $ordenesDto->getAnioOrden() . "</b>, 
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
                                                $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                                $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - ORDEN DE APREHENSION
                                                $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                                $BitacoranotificacionesDto->setIdReferencia($ordenesDto->getIdOrden()); #ID DEL ORDEN DE APREHENSION
                                                $BitacoranotificacionesDto->setNumero($ordenesDto->getNumeroOrden()); #NUMERO DE ORDEN DE APREHENSION
                                                $BitacoranotificacionesDto->setAnio($ordenesDto->getAnioOrden()); #A�O DEL ORDEN DE APREHENSION
                                                $BitacoranotificacionesDto->setCvejuzgado($solicitudesordenesDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                                $BitacoranotificacionesDto->setCveUsuario($juzgadorAnteriorDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                                $BitacoranotificacionesDto->setMedio($emailJuezAnterior);
                                                $BitacoranotificacionesDto->setMovimiento($movimiento);
                                                $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                                if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
//                                    print_r($BitacoranotificacionesDto);
//                                    echo "<br><br>";
                                                } else {
                                                    $errorUpdate = true;
                                                    $mensajeErrorUpdate = "ERROR AL GUARDAR EN BITACORA DE NOTIFICACION - CORREO JUEZ ANTERIOR";
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
                                            $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - ORDEN DE APREHENSION
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                            $BitacoranotificacionesDto->setIdReferencia($ordenesDto->getIdOrden()); #ID DEL ORDEN DE APREHENSION
                                            $BitacoranotificacionesDto->setNumero($ordenesDto->getNumeroOrden()); #NUMERO DE ORDEN DE APREHENSION
                                            $BitacoranotificacionesDto->setAnio($ordenesDto->getAnioOrden()); #A�O DEL ORDEN DE APREHENSION
                                            $BitacoranotificacionesDto->setCvejuzgado($solicitudesordenesDto->getCveJuzgadoDesahoga()); #JUZGADO A SOLICITAR
                                            $BitacoranotificacionesDto->setCveUsuario($juzgadorAnteriorDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                            $BitacoranotificacionesDto->setMedio($emailJuezAnterior);
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
                                    }
                                }
                            } else {
                                $errorUpdate = true;
                                $mensajeErrorUpdate = "NO SE ENCONTRARON MEDIOS DE COMUNICACION DEL JUEZ ANTERIOR";
                            }
                        }

                        ##GUARDAMOS EN BITACORA EL REGISTRO DEL ORDEN DE APREHENSION
                        if (!$errorUpdate) {
                            $BitacoramovimientosDao = new BitacoramovimientosDAO();
                            $BitacoramovimientosDto = new BitacoramovimientosDTO();
                            $BitacoramovimientosDto->setCveAccion("75"); #75 - CAMBIA JUEZ ORDEN DE APREHENSION
                            $BitacoramovimientosDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
                            $BitacoramovimientosDto->setCvePerfil($ordenesDto->getIdOrden()); #ID DEL ORDEN DE APREHENSION
                            $BitacoramovimientosDto->setCveAdscripcion($solicitudesordenesDto->getCveJuzgadoDesahoga());
                            if (($bolStatusMailJuezAnterior == true) && ($bolStatusMailJuez == true) && ($bolStatusMailAdm == true)) {
                                $BitacoramovimientosDto->setObservaciones("MODIFICO JUEZ DE LA SOLICITUD DE ORDEN DE APREHENSION: JUEZ ANTERIOR: " . $juezAnterior . " JUEZ NUEVO: " . $idJuzgador);
                            } else {
                                $observaciones = "MODIFICO JUEZ DE LA SOLICITUD DE ORDEN DE APREHENSION: JUEZ ANTERIOR: " . $juezAnterior . " JUEZ NUEVO: " . $idJuzgador;
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
                    return array("type" => "Error", "text" => "NO SE ENCONTRO LA SOLICITUD DEL ORDEN DE APREHENSION");
                }
            } else {
                return array("type" => "Error", "text" => "NO SE ENCONTRO EL ORDEN DE APREHENSION ESPECIFICADO");
            }
        } else {
            return array("type" => "Error", "text" => "INFORMACION INCOMPLETA: " . $mensajeErrorDatos);
        }
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
                    $file = fopen(dirname(__FILE__) . "/../../../archivos/administradoresjuzgadosordenes$juzgado.json", "w");
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
                    $file = fopen(dirname(__FILE__) . "/../../../archivos/actadminjuzgadosordenes$juzgado.json", "w");
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

    private function generaCarpeta($paramCarpeta, $proveedor) {
        $result = array();
        $fecha_actual = $proveedor->getfechaActual();
        $partes_fecha = explode("-", $fecha_actual);

        $contadoresDto = new ContadoresDTO();
        $contadoresDto->setActivo("S");
        $contadoresDto->setCveJuzgado($paramCarpeta["cveJuzgado"]);
        $contadoresDto->setCveTipoCarpeta(2);
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
        $carpetasDto->setCveTipoCarpeta("2");
        $carpetasDto->setCveEstatusCarpeta("1");
        $carpetasDto->setFechaRadicacion($fecha_actual);
        $carpetasDto->setNumero($contadoresDto->getNumero());
        $carpetasDto->setAnio($contadoresDto->getAnio());
        $carpetasDto->setCveJuzgado($paramCarpeta["cveJuzgado"]);
        $carpetasDto->setCarpetaInv($paramCarpeta["carpetaInv"]);
        $carpetasDto->setNuc($paramCarpeta["nuc"]);
        $carpetasDto->setCveUsuario($paramCarpeta["cveUsuario"]);
        $carpetasDto->setNumImputados($paramCarpeta["numImptutado"]);
        $carpetasDto->setNumOfendidos($paramCarpeta["numOfendido"]);
        $carpetasDto->setNumDelitos($paramCarpeta["numdelito"]);
        $carpetasDto->setObservaciones("Radicada desde Ordenes de Aprehension");
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
            $municipiocve = (isset($imputado["cveMunicipioNacimiento"])) ? $imputado["cveMunicipioNacimiento"] : 9997;
            $ednico = (isset($imputado["cveGrupoEdnico"])) ? $imputado["cveGrupoEdnico"] : 72;
            $estado = (isset($imputado["cveEstadoNacimiento"])) ? $imputado["cveEstadoNacimiento"] : 15;
            $municipio = (isset($imputado["municipioNacimiento"])) ? $imputado["municipioNacimiento"] : "ACTUALIZAME";
            $rfc = (isset($imputado["rfc"])) ? $imputado["rfc"] : "";
            $curp = (isset($imputado["curp"])) ? $imputado["curp"] : "";
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
            $ImputadoCDto->setCvePaisNacimiento($pais);
            $ImputadoCDto->setCveGrupoEdnico($ednico);
            $ImputadoCDto->setcveEstadoNacimiento($estado);
            $ImputadoCDto->setMunicipioNacimiento($municipio);
            $ImputadoCDto->setCveMunicipioNacimiento($municipiocve);
            $ImputadoCDto->setRfc($rfc);
            $ImputadoCDto->setCurp($curp);
            $ImputadoCDto->setCveTipoReligion($religion);
            $ImputadoCDto->setActivo($activo);
            $ImputadoCDto->setIngresoMensual("0");
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
            $municipiocve = (isset($ofendido["cveMunicipioNacimiento"])) ? $ofendido["cveMunicipioNacimiento"] : 9997;
            $municipio = (isset($ofendido["municipioNacimiento"])) ? $ofendido["municipioNacimiento"] : "ACTUALIZAME";
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
            $OfendidosDto->setCveMunicipioNacimiento($municipiocve);
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
            $genero = (isset($ofendido["Genero"])) ? $ofendido["Genero"] : $ofendido["cveGenero"];
            if ($genero != "") {
                $genero = $ofendido["Genero"];
            } else {
                $genero = 3;
            }
            $OfendidosDto->setCveGenero($genero);

            $tipoPersona = (isset($ofendido["TipoPersona"])) ? $ofendido["TipoPersona"] : $ofendido["cveTipoPersona"];
            if ($tipoPersona > 3) {
                $cveTipoPersona = 3;
            } else {
                $cveTipoPersona = $tipoPersona;
            }
            $OfendidosDto->setCveTipoPersona($cveTipoPersona);
            $domicilio = (isset($ofendido["Domicilio"])) ? $ofendido["Domicilio"] : "ACTUALIZAME";
            $OfendidosDto->setEstadoNacimiento($domicilio);

            if ($ofendido["TipoPersona"] != 1) {
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

    private function buscarAuxiliar($numeroCarpeta, $anioCarpeta, $juzgadoProcedencia, $cveTipoCarpeta, $carpetaInvestigacion, $nuc, $tipo = 1) {
        $result = array();
        $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
        $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
        $CarpetasjudicialesDto->setCveJuzgado($juzgadoProcedencia);
        if ($tipo == 1) {
            if (($numeroCarpeta != "") && ($anioCarpeta != "") && ($juzgadoProcedencia != "") && ($cveTipoCarpeta != "")) {
                $CarpetasjudicialesDto->setCveTipoCarpeta($cveTipoCarpeta);
                $CarpetasjudicialesDto->setNumero($numeroCarpeta);
                $CarpetasjudicialesDto->setAnio($anioCarpeta);
            } else {
                $CarpetasjudicialesDto->setCarpetaInv($carpetaInvestigacion);
            }
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
            $CarpetasjudicialesDto->setCveJuzgado($juzgadoProcedencia);
            if ($tipo == 1) {
                if (($numeroCarpeta != "") && ($anioCarpeta != "") && ($juzgadoProcedencia != "") && ($cveTipoCarpeta != "")) {
                    $CarpetasjudicialesDto->setNumero($numeroCarpeta);
                    $CarpetasjudicialesDto->setAnio($anioCarpeta);
                    $CarpetasjudicialesDto->setCveTipoCarpeta($cveTipoCarpeta);
                } else {
                    $CarpetasjudicialesDto->setNuc($nuc);
                }
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
                $result["info"]["numImptutado"] = count($imputados);
            } else {
                $result["info"]["imputados"] = "";
                $result["info"]["numImptutado"] = 0;
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
                $result["info"]["numOfendido"] = count($ofendidos);
            } else {
                $result["info"]["ofendidos"] = "";
                $result["info"]["ofendidos"] = 0;
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
                $result["info"]["numdelito"] = count($delitos);
            } else {
                $result["info"]["delitos"] = "";
                $result["info"]["numdelito"] = 0;
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

    private function buscaCarpeta($numeroCarpeta, $anioCarpeta, $juzgadoProcedencia, $cveTipoCarpeta, $carpetaInvestigacion, $nuc) {
        $result = array();
        $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
        $CarpetasjudicialesDao = new CarpetasjudicialesDAO();
        $CarpetasjudicialesDto->setCveJuzgado($juzgadoProcedencia);
        if (($numeroCarpeta != "") && ($anioCarpeta != "") && ($juzgadoProcedencia != "") && ($cveTipoCarpeta != "")) {
            $CarpetasjudicialesDto->setNumero($numeroCarpeta);
            $CarpetasjudicialesDto->setAnio($anioCarpeta);
        } else {
            $CarpetasjudicialesDto->setCarpetaInv($carpetaInvestigacion);
        }
        $CarpetasjudicialesDto->setActivo("S");
        $CarpetasjudicialesDto->setCveTipoCarpeta(2);
        $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto);
        if ($CarpetasjudicialesDto != "") {
            $result["type"] = "OK";
            $result["info"] = $CarpetasjudicialesDto[0]->toString();
        } else {
            $CarpetasjudicialesDto = new CarpetasjudicialesDTO();
            $CarpetasjudicialesDto->setCveJuzgado($juzgadoProcedencia);
            if (($numeroCarpeta != "") && ($anioCarpeta != "") && ($juzgadoProcedencia != "") && ($cveTipoCarpeta != "")) {
                $CarpetasjudicialesDto->setNumero($numeroCarpeta);
                $CarpetasjudicialesDto->setAnio($anioCarpeta);
            } else {
                $CarpetasjudicialesDto->setNuc($nuc);
            }
            $CarpetasjudicialesDto->setActivo("S");
            $CarpetasjudicialesDto->setCveTipoCarpeta(2);
            $CarpetasjudicialesDto = $CarpetasjudicialesDao->selectCarpetasjudiciales($CarpetasjudicialesDto);
            if ($CarpetasjudicialesDto != "") {
                $result["type"] = "OK";
                $result["info"] = $CarpetasjudicialesDto[0]->toString();
            } else {
                $result["type"] = "Error";
            }
        }
        return $result;
    }

    public function cambioStatus($idSolicitudOrden, $cambiarStatus, $motivo) {
        $tmp = array();
        if (($idSolicitudOrden != "") && ($cambiarStatus != "") && ($motivo != "")) {
            $solicitudDto = new SolicitudesordenesDTO();
            $solicitudDao = new SolicitudesordenesDAO();
            $movimiento = ' Cambio de Estatus Ordenes de Aprehension ';
            $solicitudDto->setIdSolicitudOrden($idSolicitudOrden);
            $movimiento .= ' 1.- Se busca la solicitud de orden de aprehension ';
            $movimiento .= ' IdSolicitudOrden: ' . $idSolicitudOrden;
            $solicitudDto = $solicitudDao->selectSolicitudesordenes($solicitudDto);
            if ($solicitudDto != "") {
                $movimiento .= ' Datos Encontrados: ' . json_encode($solicitudDto[0]->toString());
                // Busca que exista el estatus 
                $estatusDto = new EstatussolicitudesordenesDTO();
                $estatusDao = new EstatussolicitudesordenesDAO();
                $estatusDto->setActivo('S');
                $estatusDto->setCveEstatusSolicitudOrdenes($cambiarStatus);
                $movimiento .= '2.- Busca el Estatus de la solicitud seleccionado';
                $movimiento .= ' Id Estatus: ' . $cambiarStatus;
                $estatusDto = $estatusDao->selectEstatussolicitudesordenes($estatusDto);
                if ($estatusDto != '') {
                    $movimiento .= ' Datos Encontrados: ' . json_encode($estatusDto[0]->toString());
                    $solicitudUpdateDto = new SolicitudesordenesDTO();
                    $solicitudUpdateDto->setIdSolicitudOrden($idSolicitudOrden);
                    $solicitudUpdateDto->setCveEstatusSolicitudOrden($cambiarStatus);
                    $movimiento .= ' 3.- Actualizacion de la solicitud de orden de aprehension ';
                    $movimiento .= ' Nuevo Estatus: ' . $cambiarStatus;
                    $movimiento .= ' Motivo de la cancelacion: ' . $motivo;
                    $solicitudUpdateDto = $solicitudDao->updateSolicitudesordenes($solicitudUpdateDto);
                    if ($solicitudUpdateDto != '') {
                        $movimiento .= ' Resultado: ' . json_encode($solicitudUpdateDto[0]->toString());
                        $movimiento .= ' Se actualizo la solicitud de orden de aprehension ';
                        $tmp['type'] = 'OK';
                        $tmp['text'] = 'SE ACTUALIZO EL ESTATUS DE LA ORDEN DE APREHENSION';
                    } else {
                        $movimiento .= ' NO SE ACTUALIZO LA SOLICITUD DE ORDEN DE APREHENSION ';
                        $tmp['type'] = 'Error';
                        $tmp['text'] = 'NO SE ACTUALIZO LA SOLICITUD DE ORDEN DE APREHENSION';
                    }
                } else {
                    $movimiento .= ' NO SE ENCONTRO EL ESTATUS DE LA SOLICITUD ';
                    $tmp['type'] = 'Error';
                    $tmp['text'] = 'NO SE ENCONTRO EL ESTATUS DE LA SOLICTUD';
                }
            } else {
                $movimiento .= ' NO SE ENCONTRO LA SOLICITUD DE LA ORDEN DE APREHENSION ';
                $tmp['type'] = 'Error';
                $tmp['text'] = 'NO SE ENCONTRO LA SOLICITUD';
            }
        } else {
            $movimiento .= ' NO SE ESCRIBIERON TODOS LOS PARAMETROS ';
            $tmp['type'] = 'Error';
            $tmp['text'] = 'NO SE ENCONTRO EL IDENTIFICADOR';
        }
        /**
         * Se guarda en Bitacora
         */
        $bitacoraDto = new BitacoramovimientosDTO();
        $bitacoraDao = new BitacoramovimientosDAO();
        $bitacoraDto->setCveAccion(394);
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
