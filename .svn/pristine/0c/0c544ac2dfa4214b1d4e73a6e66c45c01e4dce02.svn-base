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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ordenes/OrdenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ordenes/OrdenesDAO.Class.php");

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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/chatmessages/ChatMessagesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/chatmessages/ChatMessagesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/chatcerrados/ChatCerradosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/chatcerrados/ChatCerradosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudesordenes/EstatussolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudesordenes/EstatussolicitudesordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoranotificaciones/BitacoranotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoranotificaciones/BitacoranotificacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/distritos/DistritosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/correo/EmailHELPER.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/sigippem/ConnectWS.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/cateos/numerosaletras.php");

class OrdenesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarOrdenes($OrdenesDto) {
        $OrdenesDto->setidOrden(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getidOrden()))));
        $OrdenesDto->setidSolicitudOrden(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getidSolicitudOrden()))));
        $OrdenesDto->setcveRespuestaSolicitudOrden(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getcveRespuestaSolicitudOrden()))));
        $OrdenesDto->setnumeroOrden(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getnumeroOrden()))));
        $OrdenesDto->setanioOrden(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getanioOrden()))));
        $OrdenesDto->setsolicitud(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getsolicitud()))));
        $OrdenesDto->setnegada(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getnegada()))));
        $OrdenesDto->setconcedida(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getconcedida()))));
        $OrdenesDto->setfechaPractica(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getfechaPractica()))));
        $OrdenesDto->sethoraPractica(strtoupper(str_ireplace("'", "", trim($OrdenesDto->gethoraPractica()))));
        $OrdenesDto->sethorasPractica(strtoupper(str_ireplace("'", "", trim($OrdenesDto->gethorasPractica()))));
        $OrdenesDto->setfechaInforme(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getfechaInforme()))));
        $OrdenesDto->sethoraInforme(strtoupper(str_ireplace("'", "", trim($OrdenesDto->gethoraInforme()))));
        $OrdenesDto->sethorasInforme(strtoupper(str_ireplace("'", "", trim($OrdenesDto->gethorasInforme()))));
        $OrdenesDto->setfechaRespuesta(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getfechaRespuesta()))));
        $OrdenesDto->setqr(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getqr()))));
        $OrdenesDto->setfirmaDigital(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getfirmaDigital()))));
        $OrdenesDto->setselloDigital(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getselloDigital()))));
        $OrdenesDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getfechaRegistro()))));
        $OrdenesDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getfechaActualizacion()))));
        $OrdenesDto->setemail(strtoupper(str_ireplace("'", "", trim($OrdenesDto->getemail()))));
        return $OrdenesDto;
    }

    public function selectOrdenes($OrdenesDto, $proveedor = null) {
        $OrdenesDto = $this->validarOrdenes($OrdenesDto);
        $OrdenesDao = new OrdenesDAO();
        $OrdenesDto = $OrdenesDao->selectOrdenes($OrdenesDto, $proveedor);
        return $OrdenesDto;
    }

    public function insertOrdenes($OrdenesDto, $proveedor = null) {
        $OrdenesDto = $this->validarOrdenes($OrdenesDto);
        $OrdenesDao = new OrdenesDAO();
        $OrdenesDto = $OrdenesDao->insertOrdenes($OrdenesDto, $proveedor);
        return $OrdenesDto;
    }

    public function updateOrdenes($OrdenesDto, $proveedor = null) {
        $OrdenesDto = $this->validarOrdenes($OrdenesDto);
        $OrdenesDao = new OrdenesDAO();
//$tmpDto = new OrdenesDTO();
//$tmpDto = $OrdenesDao->selectOrdenes($OrdenesDto,$proveedor);
//if($tmpDto!=""){//$OrdenesDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $OrdenesDto = $OrdenesDao->updateOrdenes($OrdenesDto, $proveedor);
        return $OrdenesDto;
//}
//return "";
    }

    public function deleteOrdenes($OrdenesDto, $proveedor = null) {
        $OrdenesDto = $this->validarOrdenes($OrdenesDto);
        $OrdenesDao = new OrdenesDAO();
        $OrdenesDto = $OrdenesDao->deleteOrdenes($OrdenesDto, $proveedor);
        return $OrdenesDto;
    }

    public function insertRespuestaOrden($param = "", $proveedor = null) {
        $tmp = "";
        if ($param != "") {
            ###
            #CAMPOS REQUERIDOS PARA CADA PASO DE LA RESPUESTA DE CATEO
            ###
            #Paso 1: selecciona la orden de aprehension a contestar
            $idOrden = $param["idOrden"];
//            $idSolicitudCateo = $param["idSolicitudCateo"];
            #Paso 2: Datos objetos y personas
            #NO NECESITA VALIDAR INFORMACION
            #Paso 3: Datos imputados, victimas y delitos
            $respuestaOrden = $param["respuestaOrden"];
            $personasArray = $param["personasArray"];
            $fechaPractica = $param["fechaPractica"];
            $horaPractica = $param["horaPractica"];
            $horasPractica = $param["horasPractica"];
            $fechaInforme = $param["fechaInforme"];
            $horaInforme = $param["horaInforme"];
            $horasInforme = $param["horasInforme"];

            $ordenWS = array();
            $ordenWS["id_referencia"] = "";

            #Paso 4: detalle de la negacion de la solicitud
            $negada = $param["detalleNegacion"];

            #Paso 5: detalle de la resolucion de la solicitud
            $concedida = $param["detalleResolucion"];
            $oficio = $param["detalleOficio"];

            ###
            #VALIDA INFORMACION GENERAL DE LA SOLICITUD
            ###
            $errorDatos = false;
            $mensage = "";

            #VALIDA QUE LOS ID DEL CATEO Y LA SOLICITUD NO VAYAN VACIOS - PASO 1
            if (($idOrden == "") || ($idOrden == "0")) {
                $errorDatos = true;
                $mensage .= " IDENTIFICADOR DE ORDEN O IDENTIFICADOR DE SOLICITUD NO VALIDOS\n";
            }


            #VALIDA QUE SE CUENTE CON LA INFORMACION Y SE CONTENGA POR LO MENOS 1 REGISTRO DE LOS ARREGLOS OBLIGATORIOS - PASO 3
            if (($respuestaOrden == "")) {
                $errorDatos = true;
                $mensage .= " RESPUESTA A LA SOLICITUD DE ORDEN NO VALIDA \n";
            }

            $personasArray = json_decode($personasArray, true);
            $ordenWS["personas"] = $personasArray;
            if ($respuestaOrden != "1") {
                if ((count($personasArray) <= 0)) {
                    $errorDatos = true;
                    $mensage .= " ESPECIFIQUE POR LO MENOS UNA PERSONA O UN OBJETO \n";
                }

                if (($horasPractica == "")) {
                    if (($fechaPractica == "") || ($horaPractica == "")) {
                        $errorDatos = true;
                        $mensage .= " ESPECIFIQUE EL DIA Y HORA DE LA PRACTICO O BIEN EL NUMERO DE HORAS \n";
                    }
                }
            }

            #VALIDA SI LA RESPESTA ES NEGADA TRAIGA EL DETALLE DE LA NEGACION - PASO 4
            if (($respuestaOrden == "1")) {
                $ordenWS["autorizada"] = 'N';
                if (($negada == "")) {
                    $mensage .= " ESPECIFIQUE INFORMACION DE LA NEGACION \n";
                    $errorDatos = true;
                }
            }

            #VALIDA SI LA RESPESTA ES CONCEDIA TRAIGA EL DETALLE DE LA RESOLUCION - PASO 5
            if (($respuestaOrden == "2")) {
                $ordenWS["autorizada"] = 'S';
                if (($concedida == "")) {
                    $mensage .= " ESPECIFIQUE INFORMACION DE LA RESOLUCION \n";
                    $errorDatos = true;
                }

                if (($oficio == "")) {
                    $mensage .= " ESPECIFIQUE INFORMACION DEL OFICIO \n";
                    $errorDatos = true;
                }
            }

            #VALIDA SI LA RESPESTA ES CONCEDIA TRAIGA EL DETALLE DE LA RESOLUCION - PASO 5
            if (($respuestaOrden == "3")) {
                $ordenWS["autorizada"] = 'P';
                if (($concedida == "") || ($negada == "")) {
                    $mensage .= " ESPECIFIQUE INFORMACION DE LA NEGACION Y DE LA NEGACION Y DE LA RESOLUCION ";
                    $errorDatos = true;
                }

                if (($oficio == "")) {
                    $mensage .= " ESPECIFIQUE INFORMACION DEL OFICIO \n";
                    $errorDatos = true;
                }
            }

            if (!$errorDatos) {
                $error = false;
                $emailAdministrador = "";
                $adminJuzgados = "";
                $bolStatusMailAdm = false;
                $bolStatusMailMP = false;
                ###
                #INICIAMOS PROCESO DE GURADADO DE INFORMACION
                ###
                #INICIAMOS TRANSACCION DE LA BASE DE DATOS
                $proveedor = new Proveedor('mysql', 'sigejupe');
                $proveedor->connect();
                $proveedor->execute("BEGIN");

                #CONSULTAMOS LA INFORMACION DEL CATEO
                if (!$error) {
                    $OrdenesDto = new OrdenesDTO();
                    $OrdenesDao = new OrdenesDAO();
                    $OrdenesDto->setIdOrden($idOrden);
//                    $OrdenesDto->setIdSolicitudOrden($idSolicitudCateo);
                    $OrdenesDto = $OrdenesDao->selectOrdenes($OrdenesDto, "", "", $proveedor);
                    if ($OrdenesDto != "" && count($OrdenesDto) > 0) {
                        $OrdenesDto = $OrdenesDto[0];
                        $ordenWS["id_orden"] = (int) $OrdenesDto->getIdOrden();
                        $ordenWS["num_orden"] = (int) $OrdenesDto->getNumeroOrden();
                        $fechaRegistro = $this->setFechaUTC($OrdenesDto->getFechaRegistro());
                        $ordenWS["fecha_registro"] = $fechaRegistro;
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL NO ENCONTRAR INFORMACION DE LA ORDEN DE APREHENSION SELECCIONADO");
                    }
                }

                #CONSULTAMOS LA INFORMACION DE LA SOLICITUD DE ORDEN DE APREHENSION
                if (!$error) {
                    $SolicitudesordenesDto = new SolicitudesordenesDTO();
                    $SolicitudesordenesDao = new SolicitudesordenesDAO();
                    $SolicitudesordenesDto->setIdSolicitudOrden($OrdenesDto->getIdSolicitudOrden());
                    $SolicitudesordenesDto = $SolicitudesordenesDao->selectSolicitudesordenes($SolicitudesordenesDto, "", $proveedor);
                    if ($SolicitudesordenesDto != "" && count($SolicitudesordenesDto) > 0) {
                        $SolicitudesordenesDto = $SolicitudesordenesDto[0];
                        $ordenWS["id_solicitud"] = (int) $SolicitudesordenesDto->getIdSolicitudOrden();

                        #Obtenemos relacion JUez
                        $juzgadorOrdenesDTO = new JuzgadoresordenesDTO();
                        $juzgadorOrdenesDAO = new JuzgadoresordenesDAO();
                        $juzgadorOrdenesDTO->setActivo("S");
                        $juzgadorOrdenesDTO->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden());
                        $juzgadorOrdenesDTO = $juzgadorOrdenesDAO->selectJuzgadoresordenes($juzgadorOrdenesDTO);
                        if ($juzgadorOrdenesDTO != "") {
                            $juzgadorOrdenesDTO = $juzgadorOrdenesDTO[0];
                            #Obtenemos el Juez
                            $juzgadoresDto = new JuzgadoresDTO();
                            $juzgadoresDao = new JuzgadoresDAO();
                            $juzgadoresDto->setActivo("S");
                            $juzgadoresDto->setIdJuzgador($juzgadorOrdenesDTO->getIdJuzgador());
                            $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto);
                            if ($juzgadoresDto != "") {
                                $juzgadoresDto = $juzgadoresDto[0];
                                $nombre = $juzgadoresDto->getNombre() . " " . $juzgadoresDto->getPaterno() . " " . $juzgadoresDto->getMaterno();
                                $ordenWS["juez"] = ["nombre" => utf8_encode($nombre)];
                            }
                        } else {
                            $ordenWS["juez"]["nombre"] = array();
                        }
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL NO ENCONTRAR INFORMACION DE LA SOLICITUD DE LA ORDEN DE APREHENSION SELECCIONADA");
                    }
                }

                #CONSULTAMOS FECHA Y HORA DEL SERVIDOR DE BASE DE DATOS
                if (!$error) {
                    $SolicitudesordenesDao = new SolicitudesordenesDAO();
                    $FechaHora = $SolicitudesordenesDao->selectFechaHoraMySql($proveedor);
                    if ($FechaHora != "") {
                        
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "NO SE PUDO OBTENER LA FECHA Y HORA DEL SERVIDOR");
                    }
                }

                #ACTUALIZAMOS INFORMACION DEL ORDEN
                if (!$error) {
                    $OrdenesDto = new OrdenesDTO();
                    $OrdenesDao = new OrdenesDAO();
                    $OrdenesDto->setIdOrden($idOrden);
                    $OrdenesDto->setCveRespuestaSolicitudOrden($respuestaOrden);
                    $OrdenesDto->setNegada(utf8_decode(preg_replace("/\'/", "\"", $negada)));
                    $OrdenesDto->setConcedida(utf8_decode(preg_replace("/\'/", "\"", $concedida)));
                    $OrdenesDto->setConcedida(utf8_decode(preg_replace("/\'/", "\"", $concedida)));
                    $OrdenesDto->setOficio(utf8_decode(preg_replace("/\'/", "\"", $oficio)));
                    $OrdenesDto->setOficio(utf8_decode(preg_replace("/\'/", "\"", $oficio)));
                    $OrdenesDto->setFechaPractica($fechaPractica);
                    $OrdenesDto->setHoraPractica($horaPractica);
                    $OrdenesDto->setHorasPractica($horasPractica);
                    $OrdenesDto->setFechaInforme($fechaInforme);
                    $OrdenesDto->setHoraInforme($horaInforme);
                    $OrdenesDto->setHorasInforme($horasInforme);
                    $OrdenesDto->setFechaRespuesta($FechaHora);
                    $OrdenesDto->setFechaActualizacion($FechaHora);
                    $OrdenesDto = $OrdenesDao->updateOrdenes($OrdenesDto, $proveedor);
                    if ($OrdenesDto != "" && count($OrdenesDto) > 0) {
                        $OrdenesDto = $OrdenesDto[0];
                        $fechaRespuesta = $this->setFechaUTC($OrdenesDto->getFechaRespuesta());
                        $ordenWS["fecha_respuesta"] = $fechaRespuesta;
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL ACTUALIZAR LA INFORMACION DE LA ORDEN DE APREHENSION");
                    }
                }

                #ACTUALIZAMOS INFORMACION DE LA SOLICITUD DE ORDEN
                if (!$error) {
                    $SolicitudesordenesDto = new SolicitudesordenesDTO();
                    $SolicitudesordenesDao = new SolicitudesordenesDAO();
                    $SolicitudesordenesDto->setIdSolicitudOrden($OrdenesDto->getIdSolicitudOrden());
                    $SolicitudesordenesDto->setCveEstatusSolicitudOrden("3");
                    $SolicitudesordenesDto = $SolicitudesordenesDao->updateSolicitudesordenes($SolicitudesordenesDto, "", $proveedor);
                    if ($SolicitudesordenesDto != "" && count($SolicitudesordenesDto) > 0) {
                        $SolicitudesordenesDto = $SolicitudesordenesDto[0];
//                        print_r($OrdenesDto);
//                        echo "<br><br>";
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL ACTUALIZAR LA INFORMACION DE LA ORDEN DE APREHENSION");
                    }
                }

                #INSERTAMOS PERSONAS
                if (!$error) {
                    if (count($personasArray) > 0 && $personasArray != "") {
                        $PersonasDao = new PersonasordenesDAO();
                        $count = 1;
                        $pArray = array();
                        foreach ($personasArray as $persona) {
                            $PersonasDto = new PersonasordenesDTO();
                            $PersonasDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden()); #Id de la solicitud de la orden de aprehension
                            $PersonasDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $persona["Paterno"])));
                            $PersonasDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $persona["Materno"])));
                            $PersonasDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $persona["Nombre"])));
                            $PersonasDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $persona["Domicilio"])));
                            $PersonasDto->setCveMunicipio("0"); #opcional - se recomienda cero por defaul
                            $PersonasDto->setCveGenero($persona["Genero"]);
                            $PersonasDto->setCveOrigen("2"); #2-origen respuesta de la orden de aprehension

                            $PersonasDto = $PersonasDao->insertPersonasordenes($PersonasDto, $proveedor);
                            if ($PersonasDto != "" && count($PersonasDto) > 0) {
                                $pArray[$count - 1]["nombre"] = utf8_encode($PersonasDto[0]->getNombre());
                                $pArray[$count - 1]["a_paterno"] = utf8_encode($PersonasDto[0]->getPaterno());
                                $pArray[$count - 1]["a_materno"] = utf8_encode($PersonasDto[0]->getMaterno());
                                $pArray[$count - 1]["cve_genero"] = utf8_encode($PersonasDto[0]->getCveGenero());
                                $count++;
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR LA PERSONA:" . $count);
                                break;
                            }
                        }
                        $ordenWS["personas"] = $pArray;
                    }
                }

                if (!$error) {
                    #OBTENEMOS INFORMACIÓN DEL JUZGADO
                    $JuzgadosDao = new JuzgadosDAO();
                    $JuzgadosDto = new JuzgadosDTO();
                    $JuzgadosDto->setCveJuzgado($SolicitudesordenesDto->getCveJuzgadoDesahoga());
                    $JuzgadosDto->setActivo("S");
                    $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, "", $proveedor);
                    if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                        $JuzgadosDto = $JuzgadosDto[0];
                        #Obtenemos el Distrito
                        $DistritoDto = new DistritosDTO();
                        $DistritoDao = new DistritosDAO();
                        $DistritoDto->setActivo("S");
                        $DistritoDto->setCveDistrito($JuzgadosDto->getCveDistrito());
                        $DistritoDto = $DistritoDao->selectDistritos($DistritoDto);
                        $distritoArray = array();
                        if ($DistritoDto != "") {
                            $DistritoDto = $DistritoDto[0];
                            $distritoArray["clave"] = (int) $DistritoDto->getCveDistrito();
                            $distritoArray["nombre"] = $DistritoDto->getDesDistrito();
                        } else {
                            $distritoArray["clave"] = (int) "0";
                            $distritoArray["nombre"] = "";
                        }
                        $ordenWS["juzgado"] = [
                            "clave" => (int) $JuzgadosDto->getCveJuzgado(),
                            "nombre" => $JuzgadosDto->getDesJuzgado(),
                            "distrito" => $distritoArray
                        ];
                        $ordenWS["juzgadoEspecializado"] = [
                            "clave" => (int) 10322,
                            "nombre" => "JUZGADO DE CONTROL ESPECIALIZADO EN CATEOS Y ORDENES DE APREHENSION EN LINEA",
                            "distrito" => $distritoArray
                        ];
                        #OBTENEMOS INFORMACION DEL ADMINISTRADOR DEL JUZGADO
                        $file = dirname(__FILE__) . "/../../../archivos/adminjuzgadosordenesrespuesta" . $JuzgadosDto->getCveJuzgado() . ".json";
                        $adminJuzgados = json_decode(file_get_contents($file), true);
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO A SOLICITAR");
                    }
                }

                #INSERTAMOS REGISTRO A CHAT
                if (!$error) {
                    $numeroAnioOrden = md5($OrdenesDto->getIdOrden() . "-2");
                    $chatMessagesJuezDto = new ChatMessagesDTO();
                    $chatMessagesDao = new ChatMessagesDAO();
                    $chatMessagesJuezDto->setChatId($numeroAnioOrden);
                    $chatMessagesJuezDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                    $chatMessagesJuezDto->setMensaje("ORDEN DE APREHENSION CONTESTADA... SE CIERRA CHAT");
                    $chatMessagesJuezDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $chatMessagesJuezDto->setNombreUsuario($_SESSION['Nombre']);
                    $chatMessagesJuezDto->setCveNumero($OrdenesDto->getIdOrden());
                    $chatMessagesJuezDto->setTipoChat("2"); # tipo chat 2 = orden de aprehension
                    $chatMessagesJuezDto = $chatMessagesDao->insertChatMessages($chatMessagesJuezDto, $proveedor);
                    if ($chatMessagesJuezDto != "" && count($chatMessagesJuezDto) > 0) {
                        $chatMessagesJuezDto = $chatMessagesJuezDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL INSERTAR ULTIMO MENSAJE EN CHAT DE LA ORDEN DE APREHENSION");
                    }
                }

                #INSERTAMOS REGISTRO PARA CERRAR EL CHAT 
                if (!$error) {
                    $numeroAnioOrden = md5($OrdenesDto->getIdOrden() . "-2");
                    $chatCerradosDto = new ChatCerradosDTO();
                    $chatCerradosDao = new ChatCerradosDAO();
                    $chatCerradosDto->setChatId($numeroAnioOrden);
                    $chatCerradosDto = $chatCerradosDao->insertChatCerrados($chatCerradosDto, $proveedor);
                    if ($chatCerradosDto != "" && count($chatCerradosDto) > 0) {
                        $chatCerradosDto = $chatCerradosDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL INSERTAR CIERRE DE CHAT DE LA RDEN DE APREHENSION");
                    }
                }

                #PROCESO PARA ENVIAR CORREO ELECTRONICO AL ADMINISTRADOR DEL JUZGADO
                if (!$error) {
                    if ($adminJuzgados != "") {
                        if (isset($adminJuzgados["type"]) == "OK") {
                            $EnLetras = new EnLetras();
                            $fechaRespuesta = explode(" ", $OrdenesDto->getFechaRespuesta());
                            $fecha = explode("-", $fechaRespuesta[0]);
                            $hora = explode(":", $fechaRespuesta[1]);
                            $objDatCorreo = $this->plantillaCorreo("ordenes");
                            foreach ($adminJuzgados["usuarios"] as $usuarios) {
                                if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
//                                    $emailAdministrador = "ricardo.ortiz@pjedomex.gob.mx";
                                    $emailAdministrador = $usuarios["email"];
                                    $cveUsuario = $usuarios["CveUsuario"];
                                    if ((trim($emailAdministrador) != "") && (strlen($emailAdministrador) > 1)) {
                                        $correoAdministrador = new EmailHELPER();
                                        $correoAdministrador->setSenderAddress($objDatCorreo->CorreoRemite);
                                        $correoAdministrador->setToAddress(trim($emailAdministrador));
                                        $correoAdministrador->setToName("NotificaciÃ³n de respuesta a solicitud de orden de aprehension - ADMINISTRADOR");
                                        $correoAdministrador->setSubject($objDatCorreo->Subject);
                                        $correoAdministrador->setHostSmtp($objDatCorreo->IpSMTP);
                                        $correoAdministrador->setPortSmtp($objDatCorreo->PortSMTP);
                                        $correoAdministrador->setIsHTMLFormat(true);
                                        $strCuerpoEmailAdm = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                        $strCuerpoEmailAdm .= "NOTIFICACI&Oacute;N. <br/><br/> En Toluca, M&eacute;xico, siendo las <strong>" . strtolower($EnLetras->ValorEnLetras($hora[0])) . " horas con " . strtolower($EnLetras->ValorEnLetras($hora[1])) . " minutos del d&iacute;a " . strtolower($EnLetras->ValorEnLetras($fecha[2])) . " de " . strtolower($this->MesLetra($OrdenesDto->getFechaRegistro())) . " del " . strtolower($EnLetras->ValorEnLetras($fecha[0])) . "</strong>. <br/><br/>";
                                        $strCuerpoEmailAdm .= "En el correo electr&oacute;nico <strong>" . $OrdenesDto->getEmail() . "</strong>, se&ntilde;alado por el Agente del Ministerio P&uacute;blico solicitante, se notifica que la respuesta a la solicitud de orden de aprehension n&uacute;mero <strong>" . str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . "</strong>, ante el Juzgado de Control del Distrito Judicial de <strong>" . ucfirst(strtolower($JuzgadosDto->getDesJuzgado())) . "</strong>, se encuentra incorporada en el Sistema Inform&aacute;tico (SIGEJUPE)</b>";
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
                                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - CATEO
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                            $BitacoranotificacionesDto->setIdReferencia($OrdenesDto->getIdOrden()); #ID DEL CATEO
                                            $BitacoranotificacionesDto->setNumero($OrdenesDto->getNumeroOrden()); #NUMERO DE CATEO
                                            $BitacoranotificacionesDto->setAnio($OrdenesDto->getAnioOrden()); #AÑO DEL CATEO
                                            $BitacoranotificacionesDto->setCvejuzgado($SolicitudesordenesDto->getCveJuzgadoDesahoga()); #JUZGADO QUE RESUELVE
                                            $BitacoranotificacionesDto->setCveUsuario($cveUsuario); #Id de el usuario al que se le envio el correo
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
                                        $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                                        $BitacoranotificacionesDto = new BitacoranotificacionesDTO();
                                        $BitacoranotificacionesDto->setCveMedioNotificacion("1"); #1 - CORREO ELECTRONICO
                                        $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                        $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - CATEO
                                        $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                        $BitacoranotificacionesDto->setIdReferencia($OrdenesDto->getIdOrden()); #ID DEL CATEO
                                        $BitacoranotificacionesDto->setNumero($OrdenesDto->getNumeroOrden()); #NUMERO DE CATEO
                                        $BitacoranotificacionesDto->setAnio($OrdenesDto->getAnioOrden()); #AÑO DEL CATEO
                                        $BitacoranotificacionesDto->setCvejuzgado($SolicitudesordenesDto->getCveJuzgado()); #JUZGADO A SOLICITAR
                                        $BitacoranotificacionesDto->setCveUsuario($cveUsuario); #Id de el usuario al que se le envio el correo
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
                    } else {
                        $mensageCorreos = "NO SE ENCONTRARON ADMINISTRADORES DE JUZGADO";
                    }
                }

                #PROCESO PARA ENVIAR CORREO ELECTRONICO M.P.
                if (!$error) {
                    $EnLetras = new EnLetras();
                    $fechaRespuesta = explode(" ", $OrdenesDto->getFechaRespuesta());
                    $fecha = explode("-", $fechaRespuesta[0]);
                    $hora = explode(":", $fechaRespuesta[1]);
                    $objDatCorreo = $this->plantillaCorreo("ordenes");
                    if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                        $cveUsuario = 80;
                        if ((trim($OrdenesDto->getEmail()) != "") && (strlen($OrdenesDto->getEmail()) > 1)) {
                            $correoMP = new EmailHELPER();
                            $correoMP->setSenderAddress($objDatCorreo->CorreoRemite);
                            $correoMP->setToAddress(trim($OrdenesDto->getEmail()));
                            $correoMP->setToName("NotificaciÃ³n de respuesta a solicitud de orden de aprehension - M.P.");
                            $correoMP->setSubject($objDatCorreo->Subject);
                            $correoMP->setHostSmtp($objDatCorreo->IpSMTP);
                            $correoMP->setPortSmtp($objDatCorreo->PortSMTP);
                            $correoMP->setIsHTMLFormat(true);
                            $strCuerpoEmailMP = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                            $strCuerpoEmailMP .= "NOTIFICACI&Oacute;N. <br/><br/> En Toluca, M&eacute;xico, siendo las <strong>" . strtolower($EnLetras->ValorEnLetras($hora[0])) . " horas con " . strtolower($EnLetras->ValorEnLetras($hora[1])) . " minutos del d&iacute;a " . strtolower($EnLetras->ValorEnLetras($fecha[2])) . " de " . strtolower($this->MesLetra($OrdenesDto->getFechaRegistro())) . " del " . strtolower($EnLetras->ValorEnLetras($fecha[0])) . "</strong>. <br/><br/>";
                            $strCuerpoEmailMP .= "En el correo electr&oacute;nico <strong>" . $OrdenesDto->getEmail() . "</strong>, se&ntilde;alado por el Agente del Ministerio P&uacute;blico solicitante, se notifica que la respuesta a la solicitud de orden de aprehension n&uacute;mero <strong>" . str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . "</strong>, ante el Juzgado de Control del Distrito Judicial de <strong>" . ucfirst(strtolower($JuzgadosDto->getDesJuzgado())) . "</strong>, se encuentra incorporada en el Sistema Inform&aacute;tico (SIGEJUPE)</b>";
                            $strCuerpoEmailMP .= "</body>\n</html>\n\n";


                            $correoMP->setBody($strCuerpoEmailMP);
                            $intentos = 1;
                            $BitacoranotificacionesDao = new BitacoranotificacionesDAO();
                            while ($intentos <= 5) {
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
                                $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                                $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - CATEO
                                $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                $BitacoranotificacionesDto->setIdReferencia($OrdenesDto->getIdOrden()); #ID DEL CATEO
                                $BitacoranotificacionesDto->setNumero($OrdenesDto->getNumeroOrden()); #NUMERO DE CATEO
                                $BitacoranotificacionesDto->setAnio($OrdenesDto->getAnioOrden()); #AÑO DEL CATEO
                                $BitacoranotificacionesDto->setCvejuzgado($SolicitudesordenesDto->getCveJuzgadoDesahoga()); #JUZGADO QUE RESUELVE
                                $BitacoranotificacionesDto->setCveUsuario($SolicitudesordenesDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                $BitacoranotificacionesDto->setMedio($OrdenesDto->getEmail());
                                $BitacoranotificacionesDto->setMovimiento($movimiento);
                                $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                                if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
//                                    print_r($BitacoranotificacionesDto);
//                                    echo "<br><br>";
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
                            $BitacoranotificacionesDto->setCveTipoCarpeta("10"); #VACIO - NO ES CARPETA
                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #15 - CATEO
                            $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                            $BitacoranotificacionesDto->setIdReferencia($OrdenesDto->getIdOrden()); #ID DEL CATEO
                            $BitacoranotificacionesDto->setNumero($OrdenesDto->getNumeroOrden()); #NUMERO DE CATEO
                            $BitacoranotificacionesDto->setAnio($OrdenesDto->getAnioOrden()); #AÑO DEL CATEO
                            $BitacoranotificacionesDto->setCvejuzgado($SolicitudesordenesDto->getCveJuzgado()); #JUZGADO A SOLICITAR
                            $BitacoranotificacionesDto->setCveUsuario($SolicitudesordenesDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                            $BitacoranotificacionesDto->setMedio($OrdenesDto->getEmail());
                            $BitacoranotificacionesDto->setMovimiento("NO TIENE CORREO ELECTRONICO REGISTRADO");
                            $BitacoranotificacionesDto = $BitacoranotificacionesDao->insertBitacoranotificaciones($BitacoranotificacionesDto, $proveedor);
                            if ($BitacoranotificacionesDto != "" && count($BitacoranotificacionesDto) > 0) {
//                                print_r($BitacoranotificacionesDto);
//                                echo "<br><br>";
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
                    $BitacoramovimientosDto->setCveAccion("37"); #37 - CONTESTA SOLICITUD CATEO
                    $BitacoramovimientosDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
                    $BitacoramovimientosDto->setCvePerfil($OrdenesDto->getIdOrden()); #ID DEL CATEO
                    $BitacoramovimientosDto->setCveAdscripcion($SolicitudesordenesDto->getCveJuzgadoDesahoga()); #NUMERO DE CATEO
                    if (($bolStatusMailMP == true) && ($bolStatusMailAdm == true)) {
                        $BitacoramovimientosDto->setObservaciones("AGREGO RESPUESTA DE ORDEN NUMERO: " . $OrdenesDto->getNumeroOrden() . " AÑO: " . $OrdenesDto->getAnioOrden() . " ENVIO CORREO ELECTRONICO A EL M.P. Y EL ADMINISTRADOR DEL JUZGADO");
                    } else {
                        $observaciones = "AGREGO SOLICITUD DE ORDEN NUMERO: " . $OrdenesDto->getNumeroOrden() . " AÑO: " . $OrdenesDto->getAnioOrden();
                        $observaciones.=($bolStatusMailMP == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                        $observaciones.=$OrdenesDto->getEmail();
                        $observaciones.=($bolStatusMailAdm == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                        $observaciones.=$emailAdministrador;
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

                #TERMINAMOS TRANSACCION DE LA BASE DE DATOS Y SE CIERRA LA CONEXION
                if (!$error) {
//                    $proveedor->execute("ROLLBACK");
                    $proveedor->execute("COMMIT");
                    if (($bolStatusMailMP == true) && ($bolStatusMailAdm == true)) {
                        $tmp = array("type" => "OK",
                            "text" => "REGISTRO DE LA RESPUESTA DE LA ORDEN DE FORMA EXITOSA Y A SU VEZ SE REMITE CORREO ELECTRONICO",
                            "idOrden" => $OrdenesDto->getIdOrden(),
                            "idSolicitudCateo" => $OrdenesDto->getIdSolicitudOrden()
                        );
                    } else {
                        $tmp = array("type" => "OK",
                            "text" => "REGISTRO DE LA RESPUESTA DE LA ORDEN DE FORMA EXITOSA, NO SE LOGRO ENVIAR EL CORREO ELECTRONICO",
                            "type" => "OK",
                            "idOrden" => $OrdenesDto->getIdOrden(),
                            "idSolicitudCateo" => $OrdenesDto->getIdSolicitudOrden()
                        );
                    }

                    $comprobante = new ComprobanteOrdenesController();
                    $resultadoComprobante = $comprobante->generaComprobante($OrdenesDto->getIdOrden());
                    if ($resultadoComprobante["type"] == "OK") {

                        $path = dirname(__FILE__) . "/../../../solicitudespdf/" . $resultadoComprobante["file"];
                        $fileB64 = chunk_split(base64_encode(file_get_contents($path)));
                        $ordenWS["archivo"] = $fileB64;
                    } else {
                        $ordenWS["archivo"] = "";
                    }

                    $comprobanteOficio = new OficioOrdenesController();
                    $resultadoComprobanteOficio = $comprobanteOficio->generaComprobante($OrdenesDto->getIdOrden());
                    if ($resultadoComprobanteOficio["type"] == "OK") {

                        $path = dirname(__FILE__) . "/../../../solicitudespdf/" . $resultadoComprobanteOficio["file"];
                        $fileB64 = chunk_split(base64_encode(file_get_contents($path)));
                        $ordenWS["oficio"] = $fileB64;
                    } else {
                        $ordenWS["oficio"] = "";
                    }

                    $this->enviarRespuestaOrdenWS(json_encode($ordenWS));
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

    public function getOrdenesPendientes() {
        $cveGrupo = (isset($_SESSION["cveGrupo"]) ? $_SESSION["cveGrupo"] : 0);
        $adscripcion = (isset($_SESSION["cveAdscripcion"]) ? $_SESSION["cveAdscripcion"] : 0);
        $error = false;
        $result = array();
        $juzgadosDto = new JuzgadosDTO();
        $juzgadosDto->setActivo("S");

        switch ($cveGrupo) {
            case 91:
            case 133:
                $error = false;
                break;
            case 97 :
            case 102 :
            case 110:
            case 129:
                $juzgadosDto->setCveJuzgado($adscripcion);
                $error = false;
                break;
            default :
                $error = true;
                break;
        }

        if (!$error) {
            $juzgadosDao = new JuzgadosDAO();
            $juzgadosDto = $juzgadosDao->selectJuzgados($juzgadosDto);
            if ($juzgadosDto != "") {
                $datos = array();
                $countJuzgado = 0;
                foreach ($juzgadosDto as $juzgado) {
                    $solicitudOrden = new SolicitudesordenesDTO();
                    $solicitudOrden->setCveJuzgadoDesahoga($juzgado->getCveJuzgado());
                    $orden = " AND cveEstatusSolicitudOrden in (1,2) ";
                    $solicitudOrdenDao = new SolicitudesordenesDAO();
                    $solicitudOrden = $solicitudOrdenDao->selectSolicitudesordenes($solicitudOrden, $orden);
                    if ($solicitudOrden != "") {
                        $datos[$countJuzgado]["total"] = count($solicitudOrden);
                        $datos[$countJuzgado]["desJuzgado"] = $juzgado->getDesJuzgado();
                        $countJuzgado++;
                    }
                }
                if ($countJuzgado != 0) {
                    $result["type"] = "OK";
                    $result["data"] = $datos;
                } else {
                    $result["type"] = "Error";
                    $result["text"] = "NO SE ENCONTRARON REGISTROS";
                }
            } else {
                $result["type"] = "Error";
                $result["text"] = "NO SE ENCONTRARON REGISTROS";
            }
        } else {
            $result["type"] = "Error";
            $result["text"] = "NO SE ENCONTRARON REGISTROS";
        }

        return json_encode($result);
    }

    public function getInfoJuzgadorWS($juzgado) {
        try {
            if ($juzgado != "") {
                $usuariosCliente = new UsuarioCliente();
                $admons = $usuariosCliente->selectUsuariosGrupoSistema(97, 38, $juzgado);
                if ($admons != "") {
                    $file = fopen(dirname(__FILE__) . "/../../../archivos/adminjuzgadosordenesrespuesta$juzgado.json", "w");
                    fwrite($file, $admons);
                    fclose($file);
                } else {
                    
                }
            }
        } catch (Exception $e) {
            
        }
    }

    /**
     * Envia la respuesta de la solicitud de orden de Aprehension a traves del WebService
     * @param string $sessionKey Clave de Autentificacion del WebService
     * @param array $param Datos Datos que seran enviados
     * @return void
     */
    public function enviarRespuestaOrdenWS($orden) {
        $requestWS = new ConnectWS();
        if ($requestWS->secure_key != "") {
            $timestamp = $requestWS->fechaUTC();
            $ruta = "/plugins/tribunal_edomex/respuesta_orden_aprehension";
            $digest = $requestWS->method . "|" . $ruta . "|" . $timestamp . "|" . $requestWS->app_Secret . "|" . $orden;
            $digest = hash('sha256', $digest);
            $authorization = "WRT " . $requestWS->secure_key . ":" . $digest;
            $url = $requestWS->base_WS . $ruta;
            #Guarmos en Bitacora La solicitud Entrante
            $bitacoraWsDto = new BitacorawsDTO();
            $BitacoraWsRespDto = new BitacorawsDTO();
            $bitacoraWsDao = new BitacorawsDAO();
            $fechaRegistro = date("Y-m-d H:i:s");

            $bitacoraWsDto->setCveAccionws(13);
            $bitacoraWsDto->setObservacionesOrigen($orden);
            $bitacoraWsDto->setHrefOrigen("RESPUESTA DE ORDEN DE APREHENSION");
            $bitacoraWsDto->setFechaRegistro($fechaRegistro);
            $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);

            $respuesta = $requestWS->sendRequest($url, $orden, $timestamp, $authorization);
            
            if ($rsBitacoraWsDto != "") {
                $BitacoraWsRespDto->setIdBitacoraws($rsBitacoraWsDto[0]->getIdBitacoraws());
                $BitacoraWsRespDto->setDescEstatusBitacoraws($respuesta["meta"]["status"]);
                $BitacoraWsRespDto->setObservacionesDestino(json_encode($respuesta));
                $rsRespuestaBitacora = $bitacoraWsDao->updateBitacoraws($BitacoraWsRespDto);
            }
        }
    }

    public function setFechaUTC($fecha) {
        $fecha = strtotime($fecha);
        date_default_timezone_set("UTC");
        $fecha = date("Y-m-d\TH:i:s.z\Z", $fecha);
        return $fecha;
    }

}

?>