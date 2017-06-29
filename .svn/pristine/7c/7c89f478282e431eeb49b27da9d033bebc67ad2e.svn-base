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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cateos/CateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cateos/CateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudescateos/SolicitudescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/objetos/ObjetosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/objetos/ObjetosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/personas/PersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/personas/PersonasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/distritos/DistritosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/distritos/DistritosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescateos/JuzgadorescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadorescateos/JuzgadorescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/chatmessages/ChatMessagesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/chatmessages/ChatMessagesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/chatcerrados/ChatCerradosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/chatcerrados/ChatCerradosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoranotificaciones/BitacoranotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoranotificaciones/BitacoranotificacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoraws/BitacorawsDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoraws/BitacorawsDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/correo/EmailHELPER.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/sigippem/ConnectWS.Class.php");
include_once(dirname(__FILE__) . "/numerosaletras.php");

class CateosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function validarCateos($CateosDto) {
        $CateosDto->setidCateo(strtoupper(str_ireplace("'", "", trim($CateosDto->getidCateo()))));
        $CateosDto->setidSolicitudCateo(strtoupper(str_ireplace("'", "", trim($CateosDto->getidSolicitudCateo()))));
        $CateosDto->setsolicitud(strtoupper(str_ireplace("'", "", trim($CateosDto->getsolicitud()))));
        $CateosDto->setnegada(strtoupper(str_ireplace("'", "", trim($CateosDto->getnegada()))));
        $CateosDto->setconcedida(strtoupper(str_ireplace("'", "", trim($CateosDto->getconcedida()))));
        $CateosDto->setfechaPractica(strtoupper(str_ireplace("'", "", trim($CateosDto->getfechaPractica()))));
        $CateosDto->sethoraPractica(strtoupper(str_ireplace("'", "", trim($CateosDto->gethoraPractica()))));
        $CateosDto->sethorasPractica(strtoupper(str_ireplace("'", "", trim($CateosDto->gethorasPractica()))));
        $CateosDto->setfechaInforme(strtoupper(str_ireplace("'", "", trim($CateosDto->getfechaInforme()))));
        $CateosDto->sethoraInforme(strtoupper(str_ireplace("'", "", trim($CateosDto->gethoraInforme()))));
        $CateosDto->sethorasInforme(strtoupper(str_ireplace("'", "", trim($CateosDto->gethorasInforme()))));
        $CateosDto->setfechaRespuesta(strtoupper(str_ireplace("'", "", trim($CateosDto->getfechaRespuesta()))));
        $CateosDto->setqr(strtoupper(str_ireplace("'", "", trim($CateosDto->getqr()))));
        $CateosDto->setfirmaDigital(strtoupper(str_ireplace("'", "", trim($CateosDto->getfirmaDigital()))));
        $CateosDto->setselloDigital(strtoupper(str_ireplace("'", "", trim($CateosDto->getselloDigital()))));
        $CateosDto->setfechaRegistro(strtoupper(str_ireplace("'", "", trim($CateosDto->getfechaRegistro()))));
        $CateosDto->setfechaActualizacion(strtoupper(str_ireplace("'", "", trim($CateosDto->getfechaActualizacion()))));
        $CateosDto->setemail(strtoupper(str_ireplace("'", "", trim($CateosDto->getemail()))));
        return $CateosDto;
    }

    public function selectCateos($CateosDto, $proveedor = null) {
        $CateosDto = $this->validarCateos($CateosDto);
        $CateosDao = new CateosDAO();
        $CateosDto = $CateosDao->selectCateos($CateosDto, "", "", $proveedor);
        return $CateosDto;
    }

    public function insertCateos($CateosDto, $proveedor = null) {
        $CateosDto = $this->validarCateos($CateosDto);
        $CateosDao = new CateosDAO();
        $CateosDto = $CateosDao->insertCateos($CateosDto, $proveedor);
        return $CateosDto;
    }

    public function updateCateos($CateosDto, $proveedor = null) {
        $CateosDto = $this->validarCateos($CateosDto);
        $CateosDao = new CateosDAO();
//$tmpDto = new CateosDTO();
//$tmpDto = $CateosDao->selectCateos($CateosDto,$proveedor);
//if($tmpDto!=""){//$CateosDto->setFechaRegistro($tmpDto[0]->getFechaRegistro());
        $CateosDto = $CateosDao->updateCateos($CateosDto, $proveedor);
        return $CateosDto;
//}
//return "";
    }

    public function deleteCateos($CateosDto, $proveedor = null) {
        $CateosDto = $this->validarCateos($CateosDto);
        $CateosDao = new CateosDAO();
        $CateosDto = $CateosDao->deleteCateos($CateosDto, $proveedor);
        return $CateosDto;
    }

    public function insertRespuestaCateo($param = "", $proveedor = null) {
        $tmp = "";
        if ($param != "") {
            ###
            #CAMPOS REQUERIDOS PARA CADA PASO DE LA RESPUESTA DE CATEO
            ###
            #Paso 1: selecciona el cateo a contestar
            $idCateo = $param["idCateo"];
//            $idSolicitudCateo = $param["idSolicitudCateo"];
            #Paso 2: Datos objetos y personas
            #NO NECESITA VALIDAR INFORMACION
            #Paso 3: Datos imputados, victimas y delitos
            $respuestaCateo = $param["respuestaCateo"];
            $personasArray = $param["personasArray"];
            $objetosArray = $param["objetosArray"];
            $fechaPractica = $param["fechaPractica"];
            $horaPractica = $param["horaPractica"];
            $horasPractica = $param["horasPractica"];
            $fechaInforme = $param["fechaInforme"];
            $horaInforme = $param["horaInforme"];
            $horasInforme = $param["horasInforme"];

            #Se usa para el envio de la respuesta a traves del WS
            $cateoWS = array();
            $cateoWS["id_referencia"] = "";

            #Paso 4: detalle de la negacion de la solicitud
            $negada = $param["detalleNegacion"];

            #Paso 5: detalle de la resolucion de la solicitud
            $concedida = $param["detalleResolucion"];

            ###
            #VALIDA INFORMACION GENERAL DE LA SOLICITUD
            ###
            $errorDatos = false;
            $mensage = "";

            #VALIDA QUE LOS ID DEL CATEO Y LA SOLICITUD NO VAYAN VACIOS - PASO 1
            if (($idCateo == "") || ($idCateo == "0")) {
                $errorDatos = true;
                $mensage .= " IDENTIFICADOR DE CATEO O IDENTIFICADOR DE SOLICITUD NO VALIDOS\n";
            }


            #VALIDA QUE SE CUENTE CON LA INFORMACION Y SE CONTENGA POR LO MENOS 1 REGISTRO DE LOS ARREGLOS OBLIGATORIOS - PASO 3
            if (($respuestaCateo == "")) {
                $errorDatos = true;
                $mensage .= " RESPUESTA A LA SOLICITUD DE CATEO NO VALIDA \n";
            }

            $personasArray = json_decode($personasArray, true);
            $objetosArray = json_decode($objetosArray, true);
            $cateoWS["objetos"] = $objetosArray;
            $cateoWS["personas"] = $personasArray;
            if ($respuestaCateo != "1") {
                if ((count($personasArray) <= 0 ) && (count($objetosArray) <= 0 )) {
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
            if (($respuestaCateo == "1")) {
                $cateoWS["autorizada"] = 'N';
                if (($negada == "")) {
                    $mensage .= " ESPECIFIQUE INFORMACION DE LA NEGACION \n";
                    $errorDatos = true;
                }
            }

            #VALIDA SI LA RESPESTA ES CONCEDIA TRAIGA EL DETALLE DE LA RESOLUCION - PASO 5
            if (($respuestaCateo == "2")) {
                $cateoWS["autorizada"] = 'S';
                if (($concedida == "")) {
                    $mensage .= " ESPECIFIQUE INFORMACION DE LA RESOLUCION \n";
                    $errorDatos = true;
                }
            }

            #VALIDA SI LA RESPESTA ES CONCEDIA TRAIGA EL DETALLE DE LA RESOLUCION - PASO 5
            if (($respuestaCateo == "3")) {
                $cateoWS["autorizada"] = 'P';
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

                #CONSULTAMOS LA INFORMACION DEL CATEO
                if (!$error) {
                    $CateosDto = new CateosDTO();
                    $CateosDao = new CateosDAO();
                    $CateosDto->setIdCateo($idCateo);
                    $CateosDto = $CateosDao->selectCateos($CateosDto, "", "", $proveedor);
                    if ($CateosDto != "" && count($CateosDto) > 0) {
                        $CateosDto = $CateosDto[0];
                        $cateoWS["id_orden"] = (int) $CateosDto->getIdCateo();
                        $cateoWS["num_orden"] = (int) $CateosDto->getNumeroCateo();
                        $fechaRegistro = $this->setFechaUTC($CateosDto->getFechaRegistro());
                        $cateoWS["fecha_registro"] = $fechaRegistro;
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL NO ENCONTRAR INFORMACION DEL CATEO SELECCIONADO");
                    }
                }

                #CONSULTAMOS LA INFORMACION DE LA SOLICITUD DE CATEO
                if (!$error) {
                    $SolicitudescateosDto = new SolicitudescateosDTO();
                    $SolicitudescateosDao = new SolicitudescateosDAO();
                    $SolicitudescateosDto->setIdSolicitudCateo($CateosDto->getIdSolicitudCateo());
                    $SolicitudescateosDto = $SolicitudescateosDao->selectSolicitudescateos($SolicitudescateosDto, "", "", $proveedor);
                    if ($SolicitudescateosDto != "" && count($SolicitudescateosDto) > 0) {
                        $SolicitudescateosDto = $SolicitudescateosDto[0];
                        $cateoWS["id_solicitud"] = (int) $SolicitudescateosDto->getIdSolicitudCateo();

                        #Obtenemos relacion JUez
                        $juzgadorCateoDTO = new JuzgadorescateosDTO();
                        $juzgadorCateoDAO = new JuzgadorescateosDAO();
                        $juzgadorCateoDTO->setActivo("S");
                        $juzgadorCateoDTO->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                        $juzgadorCateoDTO = $juzgadorCateoDAO->selectJuzgadorescateos($juzgadorCateoDTO);
                        if ($juzgadorCateoDTO != "") {
                            $juzgadorCateoDTO = $juzgadorCateoDTO[0];
                            #Obtenemos el Juez
                            $juzgadoresDto = new JuzgadoresDTO();
                            $juzgadoresDao = new JuzgadoresDAO();
                            $juzgadoresDto->setActivo("S");
                            $juzgadoresDto->setIdJuzgador($juzgadorCateoDTO->getIdJuzgador());
                            $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto);
                            if ($juzgadoresDto != "") {
                                $juzgadoresDto = $juzgadoresDto[0];
                                $nombre = $juzgadoresDto->getNombre() . " " . $juzgadoresDto->getPaterno() . " " . $juzgadoresDto->getMaterno();
                                $cateoWS["juez"] = ["nombre" => utf8_encode($nombre)];
                            }
                        } else {
                            $cateoWS["juez"]["nombre"] = array();
                        }
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL NO ENCONTRAR INFORMACION DE LA SOLICITUD DE CATEO SELECCIONADA");
                    }
                }

                #CONSULTAMOS FECHA Y HORA DEL SERVIDOR DE BASE DE DATOS
                if (!$error) {
                    $SolicitudescateosDao = new SolicitudescateosDAO();
                    $FechaHora = $SolicitudescateosDao->selectFechaHoraMySql($proveedor);
                    if ($FechaHora != "") {
//                        print_r($FechaHora);
//                        echo "<br><br>";
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "NO SE PUDO OBTENER LA FECHA Y HORA DEL SERVIDOR");
                    }
                }

                #ACTUALIZAMOS INFORMACION DEL CATEO
                if (!$error) {
                    $CateosDto = new CateosDTO();
                    $CateosDao = new CateosDAO();
                    $CateosDto->setIdCateo($idCateo);
                    $CateosDto->setCveRespuestaSolicitudCateo($respuestaCateo);
                    $CateosDto->setNegada(utf8_decode(preg_replace("/\'/", "\"", $negada)));
                    $CateosDto->setConcedida(utf8_decode(preg_replace("/\'/", "\"", $concedida)));
                    $CateosDto->setConcedida(utf8_decode(preg_replace("/\'/", "\"", $concedida)));
                    $CateosDto->setFechaPractica($fechaPractica);
                    $CateosDto->setHoraPractica($horaPractica);
                    $CateosDto->setHorasPractica($horasPractica);
                    $CateosDto->setFechaInforme($fechaInforme);
                    $CateosDto->setHoraInforme($horaInforme);
                    $CateosDto->setHorasInforme($horasInforme);
                    $CateosDto->setFechaRespuesta($FechaHora);
                    $CateosDto->setFechaActualizacion($FechaHora);
                    $CateosDto = $CateosDao->updateCateos($CateosDto, $proveedor);
                    if ($CateosDto != "" && count($CateosDto) > 0) {
                        $CateosDto = $CateosDto[0];
                        $fechaRespuesta = $this->setFechaUTC($CateosDto->getFechaRespuesta());
                        $cateoWS["fecha_respuesta"] = $fechaRespuesta;
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL ACTUALIZAR LA INFORMACION DEL CATEO");
                    }
                }

                #ACTUALIZAMOS INFORMACION DE LA SOLICITUD DE CATEO
                if (!$error) {
                    $SolicitudescateosDto = new SolicitudescateosDTO();
                    $SolicitudescateosDao = new SolicitudescateosDAO();
                    $SolicitudescateosDto->setIdSolicitudCateo($CateosDto->getIdSolicitudCateo());
                    $SolicitudescateosDto->setCveEstatusSolicitudCateo("3");
                    $SolicitudescateosDto = $SolicitudescateosDao->updateSolicitudescateos($SolicitudescateosDto, $proveedor);
                    if ($SolicitudescateosDto != "" && count($SolicitudescateosDto) > 0) {
                        $SolicitudescateosDto = $SolicitudescateosDto[0];
//                        print_r($CateosDto);
//                        echo "<br><br>";
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL ACTUALIZAR LA INFORMACION DE LA SOLICITUD DE CATEO");
                    }
                }

                #INSERTAMOS OBJETOS
                if (!$error) {
                    if (count($objetosArray) > 0 && $objetosArray != "") {
                        $ObjetosDao = new ObjetosDAO();
                        $count = 1;
                        $pobjetos = array();
                        foreach ($objetosArray as $objeto) {
                            $ObjetosDto = new ObjetosDTO();
                            $ObjetosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo()); #Id de la solicitud del cateo
                            $ObjetosDto->setDesObjeto(utf8_decode(preg_replace("/\'/", "\"", $objeto["Nombre"])));
                            $ObjetosDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $objeto["domicilio"])));
                            $ObjetosDto->setCveOrigen("2"); #2-origen respuesta del cateo

                            $ObjetosDto = $ObjetosDao->insertObjetos($ObjetosDto, $proveedor);
                            if ($ObjetosDto != "" && count($ObjetosDto) > 0) {
                                $pobjetos[$count - 1]["descripcion"] = utf8_encode($ObjetosDto[0]->getDesObjeto());
                                $pobjetos[$count - 1]["domicilio"] = utf8_encode($ObjetosDto[0]->getDomicilio());
                                $count++;
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL GUARDAR EL OBJETO:" . $count);
                                break;
                            }
                        }
                        $cateoWS["objetos"] = $pobjetos;
                    }
                }

                #INSERTAMOS PERSONAS
                if (!$error) {
                    if (count($personasArray) > 0 && $personasArray != "") {
                        $PersonasDao = new PersonasDAO();
                        $count = 1;
                        $pArray = array();
                        foreach ($personasArray as $persona) {
                            $PersonasDto = new PersonasDTO();
                            $PersonasDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo()); #Id de la solicitud del cateo
                            $PersonasDto->setPaterno(utf8_decode(preg_replace("/\'/", "\"", $persona["Paterno"])));
                            $PersonasDto->setMaterno(utf8_decode(preg_replace("/\'/", "\"", $persona["Materno"])));
                            $PersonasDto->setNombre(utf8_decode(preg_replace("/\'/", "\"", $persona["Nombre"])));
                            $PersonasDto->setDomicilio(utf8_decode(preg_replace("/\'/", "\"", $persona["Domicilio"])));
                            $PersonasDto->setCveMunicipio("0"); #opcional - se recomienda cero por defaul
                            $PersonasDto->setCveGenero($persona["Genero"]);
                            $PersonasDto->setCveOrigen("2"); #2-origen respuesta del cateo

                            $PersonasDto = $PersonasDao->insertPersonas($PersonasDto, $proveedor);
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
                        $cateoWS["personas"] = $pArray;
                    }
                }

                if (!$error) {
                    #OBTENEMOS INFORMACIÓN DEL JUZGADO
                    $JuzgadosDao = new JuzgadosDAO();
                    $JuzgadosDto = new JuzgadosDTO();
                    $JuzgadosDto->setCveJuzgado($SolicitudescateosDto->getCveJuzgadoDesahoga());
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
                            $distritoArray["clave"] = '';
                            $distritoArray["nombre"] = "";
                        }
                        $cateoWS["juzgado"] = [
                            "clave" => (int) $JuzgadosDto->getCveJuzgado(),
                            "nombre" => $JuzgadosDto->getDesJuzgado(),
                            "distrito" => $distritoArray
                        ];

                        $cateoWS["juzgadoEspecializado"] = [
                            "clave" => (int) 10322,
                            "nombre" => "JUZGADO DE CONTROL ESPECIALIZADO EN CATEOS Y ORDENES DE APREHENSION EN LINEA",
                            "distrito" => $distritoArray
                        ];


                        #OBTENEMOS INFORMACION DEL ADMINISTRADOR DEL JUZGADO
                        $file = dirname(__FILE__) . "/../../../archivos/adminjuzgadoscateosrespuesta" . $JuzgadosDto->getCveJuzgado() . ".json";
                        $adminJuzgados = json_decode(file_get_contents($file), true);
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO A SOLICITAR");
                    }
                }

                #INSERTAMOS REGISTRO A CHAT
                if (!$error) {
                    $numeroAnioCateo = md5($CateosDto->getIdCateo() . "-1");
                    $chatMessagesJuezDto = new ChatMessagesDTO();
                    $chatMessagesDao = new ChatMessagesDAO();
                    $chatMessagesJuezDto->setChatId($numeroAnioCateo);
                    $chatMessagesJuezDto->setIpUsuario($_SERVER['REMOTE_ADDR']);
                    $chatMessagesJuezDto->setMensaje("CATEO CONTESTADO... SE CIERRA CHAT");
                    $chatMessagesJuezDto->setCveUsuario($_SESSION['cveUsuarioSistema']);
                    $chatMessagesJuezDto->setNombreUsuario($_SESSION['Nombre']);
                    $chatMessagesJuezDto->setCveNumero($CateosDto->getIdCateo());
                    $chatMessagesJuezDto->setTipoChat("1"); # tipo chat 1 = cateo
                    $chatMessagesJuezDto = $chatMessagesDao->insertChatMessages($chatMessagesJuezDto, $proveedor);
                    if ($chatMessagesJuezDto != "" && count($chatMessagesJuezDto) > 0) {
                        $chatMessagesJuezDto = $chatMessagesJuezDto[0];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL INSERTAR ULTIMO MENSAJE EN CHAT DEL CATEO");
                    }
                }

                #INSERTAMOS REGISTRO PARA CERRAR EL CHAT DEL CATEO
                if (!$error) {
                    $numeroAnioCateo = md5($CateosDto->getIdCateo() . "-1");
                    $chatCerradosDto = new ChatCerradosDTO();
                    $chatCerradosDao = new ChatCerradosDAO();
                    $chatCerradosDto->setChatId($numeroAnioCateo);
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
                            $fechaRespuesta = explode(" ", $CateosDto->getFechaRespuesta());
                            $fecha = explode("-", $fechaRespuesta[0]);
                            $hora = explode(":", $fechaRespuesta[1]);
                            $objDatCorreo = $this->plantillaCorreo("cateos");
                            foreach ($adminJuzgados["usuarios"] as $usuarios) {
                                if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
//                                    $emailAdministrador = "ricardo.ortiz@pjedomex.gob.mx";
                                    $emailAdministrador = $usuarios["email"];
                                    $cveUsuario = $usuarios["CveUsuario"];
                                    if ((trim($emailAdministrador) != "") && (strlen($emailAdministrador) > 1)) {
                                        $correoAdministrador = new EmailHELPER();
                                        $correoAdministrador->setSenderAddress($objDatCorreo->CorreoRemite);
                                        $correoAdministrador->setToAddress(trim($emailAdministrador));
                                        $correoAdministrador->setToName("NotificaciÃ³n de respuesta a solicitud de cateo - ADMINISTRADOR");
                                        $correoAdministrador->setSubject($objDatCorreo->Subject);
                                        $correoAdministrador->setHostSmtp($objDatCorreo->IpSMTP);
                                        $correoAdministrador->setPortSmtp($objDatCorreo->PortSMTP);
                                        $correoAdministrador->setIsHTMLFormat(true);
                                        $strCuerpoEmailAdm = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                                        $strCuerpoEmailAdm .= "NOTIFICACI&Oacute;N. <br/><br/> En Toluca, M&eacute;xico, siendo las <strong>" . strtolower($EnLetras->ValorEnLetras($hora[0])) . " horas con " . strtolower($EnLetras->ValorEnLetras($hora[1])) . " minutos del d&iacute;a " . strtolower($EnLetras->ValorEnLetras($fecha[2])) . " de " . strtolower($this->MesLetra($CateosDto->getFechaRegistro())) . " del " . strtolower($EnLetras->ValorEnLetras($fecha[0])) . "</strong>. <br/><br/>";
                                        $strCuerpoEmailAdm .= "En el correo electr&oacute;nico <strong>" . $CateosDto->getEmail() . "</strong>, se&ntilde;alado por el Agente del Ministerio P&uacute;blico solicitante, se notifica que la respuesta a la solicitud de cateo n&uacute;mero <strong>" . str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . "</strong>, ante el Juzgado de Control del Distrito Judicial de <strong>" . ucfirst(strtolower($JuzgadosDto->getDesJuzgado())) . "</strong>, se encuentra incorporada en el Sistema Inform&aacute;tico (SIGEJUPE)</b>";
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
                                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #12 - CATEO
                                            $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                            $BitacoranotificacionesDto->setIdReferencia($CateosDto->getIdCateo()); #ID DEL CATEO
                                            $BitacoranotificacionesDto->setNumero($CateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                            $BitacoranotificacionesDto->setAnio($CateosDto->getAnioCateo()); #AÑO DEL CATEO
                                            $BitacoranotificacionesDto->setCvejuzgado($SolicitudescateosDto->getCveJuzgadoDesahoga()); #JUZGADO QUE RESUELVE
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
                                        $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                        $BitacoranotificacionesDto->setCveTipoActuacion(""); #12 - CATEO
                                        $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                                        $BitacoranotificacionesDto->setIdReferencia($CateosDto->getIdCateo()); #ID DEL CATEO
                                        $BitacoranotificacionesDto->setNumero($CateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                        $BitacoranotificacionesDto->setAnio($CateosDto->getAnioCateo()); #AÑO DEL CATEO
                                        $BitacoranotificacionesDto->setCvejuzgado($SolicitudescateosDto->getCveJuzgado()); #JUZGADO A SOLICITAR
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
                    $fechaRespuesta = explode(" ", $CateosDto->getFechaRespuesta());
                    $fecha = explode("-", $fechaRespuesta[0]);
                    $hora = explode(":", $fechaRespuesta[1]);
                    $objDatCorreo = $this->plantillaCorreo("cateos");
                    if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                        if ((trim($CateosDto->getEmail()) != "") && (strlen($CateosDto->getEmail()) > 1)) {
                            $correoMP = new EmailHELPER();
                            $correoMP->setSenderAddress($objDatCorreo->CorreoRemite);
                            $correoMP->setToAddress(trim($CateosDto->getEmail()));
                            $correoMP->setToName("NotificaciÃ³n de respuesta a solicitud de cateo - M.P.");
                            $correoMP->setSubject($objDatCorreo->Subject);
                            $correoMP->setHostSmtp($objDatCorreo->IpSMTP);
                            $correoMP->setPortSmtp($objDatCorreo->PortSMTP);
                            $correoMP->setIsHTMLFormat(true);
                            $strCuerpoEmailMP = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                            $strCuerpoEmailMP .= "NOTIFICACI&Oacute;N. <br/><br/> En Toluca, M&eacute;xico, siendo las <strong>" . strtolower($EnLetras->ValorEnLetras($hora[0])) . " horas con " . strtolower($EnLetras->ValorEnLetras($hora[1])) . " minutos del d&iacute;a " . strtolower($EnLetras->ValorEnLetras($fecha[2])) . " de " . strtolower($this->MesLetra($CateosDto->getFechaRegistro())) . " del " . strtolower($EnLetras->ValorEnLetras($fecha[0])) . "</strong>. <br/><br/>";
                            $strCuerpoEmailMP .= "En el correo electr&oacute;nico <strong>" . $CateosDto->getEmail() . "</strong>, se&ntilde;alado por el Agente del Ministerio P&uacute;blico solicitante, se notifica que la respuesta a la solicitud de cateo n&uacute;mero <strong>" . str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . "</strong>, ante el Juzgado de Control del Distrito Judicial de <strong>" . ucfirst(strtolower($JuzgadosDto->getDesJuzgado())) . "</strong>, se encuentra incorporada en el Sistema Inform&aacute;tico (SIGEJUPE)</b>";
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
                                $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                                $BitacoranotificacionesDto->setCveTipoActuacion(""); #12 - CATEO
                                $BitacoranotificacionesDto->setCveEstatusNotificacion($cveEstatusNotificacion);
                                $BitacoranotificacionesDto->setIdReferencia($CateosDto->getIdCateo()); #ID DEL CATEO
                                $BitacoranotificacionesDto->setNumero($CateosDto->getNumeroCateo()); #NUMERO DE CATEO
                                $BitacoranotificacionesDto->setAnio($CateosDto->getAnioCateo()); #AÑO DEL CATEO
                                $BitacoranotificacionesDto->setCvejuzgado($SolicitudescateosDto->getCveJuzgadoDesahoga()); #JUZGADO QUE RESUELVE
                                $BitacoranotificacionesDto->setCveUsuario($SolicitudescateosDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                                $BitacoranotificacionesDto->setMedio($CateosDto->getEmail());
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
                            $BitacoranotificacionesDto->setCveTipoCarpeta("9"); #VACIO - NO ES CARPETA
                            $BitacoranotificacionesDto->setCveTipoActuacion(""); #12 - CATEO
                            $BitacoranotificacionesDto->setCveEstatusNotificacion("2"); #FALLO ENVIO DE CORREO
                            $BitacoranotificacionesDto->setIdReferencia($CateosDto->getIdCateo()); #ID DEL CATEO
                            $BitacoranotificacionesDto->setNumero($CateosDto->getNumeroCateo()); #NUMERO DE CATEO
                            $BitacoranotificacionesDto->setAnio($CateosDto->getAnioCateo()); #AÑO DEL CATEO
                            $BitacoranotificacionesDto->setCvejuzgado($SolicitudescateosDto->getCveJuzgado()); #JUZGADO A SOLICITAR
                            $BitacoranotificacionesDto->setCveUsuario($SolicitudescateosDto->getCveUsuario()); #Id de el usuario al que se le envio el correo
                            $BitacoranotificacionesDto->setMedio($CateosDto->getEmail());
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
                    $BitacoramovimientosDto->setCvePerfil($CateosDto->getIdCateo()); #ID DEL CATEO
                    $BitacoramovimientosDto->setCveAdscripcion($SolicitudescateosDto->getCveJuzgadoDesahoga()); #NUMERO DE CATEO
                    if (($bolStatusMailMP == true) && ($bolStatusMailAdm == true)) {
                        $BitacoramovimientosDto->setObservaciones("AGREGO RESPUESTA DE CATEO NUMERO: " . $CateosDto->getNumeroCateo() . " AÑO: " . $CateosDto->getAnioCateo() . " ENVIO CORREO ELECTRONICO A EL M.P. Y EL ADMINISTRADOR DEL JUZGADO");
                    } else {
                        $observaciones = "AGREGO SOLICITUD DE CATEO NUMERO: " . $CateosDto->getNumeroCateo() . " AÑO: " . $CateosDto->getAnioCateo();
                        $observaciones.=($bolStatusMailMP == true) ? " ENVIO CORREO ELECTRONICO A " : " FALLO ENVIO DE CORREO A ";
                        $observaciones.=$CateosDto->getEmail();
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
                            "text" => "REGISTRO DE LA RESPUESTA DEL CATEO DE FORMA EXITOSA Y A SU VEZ SE REMITE CORREO ELECTRONICO",
                            "idCateo" => $CateosDto->getIdCateo(),
                            "idSolicitudCateo" => $CateosDto->getIdSolicitudCateo()
                        );
                    } else {
                        $tmp = array("type" => "OK",
                            "text" => "REGISTRO DE LA RESPUESTA DEL CATEO DE FORMA EXITOSA, NO SE LOGRO ENVIAR EL CORREO ELECTRONICO",
                            "type" => "OK",
                            "idCateo" => $CateosDto->getIdCateo(),
                            "idSolicitudCateo" => $CateosDto->getIdSolicitudCateo()
                        );
                    }

                    $comprobante = new ComprobanteCateosController();
                    $resultadoComprobante = $comprobante->generaComprobante($CateosDto->getIdCateo());

                    if ($resultadoComprobante["type"] == "OK") {
                        $path = dirname(__FILE__) . "/../../../solicitudespdf/" . $resultadoComprobante["file"];
                        $fileB64 = chunk_split(base64_encode(file_get_contents($path)));
                        $cateoWS["archivo"] = $fileB64;
                    } else {
                        $cateoWS["archivo"] = "";
                    }
                    $this->enviarRespuestaCateoWS(json_encode($cateoWS));
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

    public function getCateosPendientes() {
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
                    $solicitudCateo = new SolicitudescateosDTO();
                    $solicitudCateo->setCveJuzgadoDesahoga($juzgado->getCveJuzgado());
                    $orden = " AND cveEstatusSolicitudCateo in (1,2) ";
                    $solicitudCateoDao = new SolicitudescateosDAO();
                    $solicitudCateo = $solicitudCateoDao->selectSolicitudescateos($solicitudCateo, "", $orden);
                    if ($solicitudCateo != "") {
                        $datos[$countJuzgado]["total"] = count($solicitudCateo);
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
                    $file = fopen(dirname(__FILE__) . "/../../../archivos/adminjuzgadoscateosrespuesta$juzgado.json", "w");
                    fwrite($file, $admons);
                    fclose($file);
                } else {
                    
                }
            }
        } catch (Exception $e) {
            
        }
    }

    /**
     * Envia la respuesta de la solicitud de cateo a traves del WebService
     * @param string $sessionKey Clave de Autentificacion del WebService
     * @param array $param Datos Datos que seran enviados
     * @return void
     */
    public function enviarRespuestaCateoWS($cateo) {
        $requestWS = new ConnectWS();
        if ($requestWS->secure_key != "") {
            $timestamp = $requestWS->fechaUTC();
            $ruta = "/plugins/tribunal_edomex/respuesta_orden_cateo";
            $digest = $requestWS->method . "|" . $ruta . "|" . $timestamp . "|" . $requestWS->app_Secret . "|" . $cateo;
            $digest = hash('sha256', $digest);
            $authorization = "WRT " . $requestWS->secure_key . ":" . $digest;
            $url = $requestWS->base_WS . $ruta;

            #Guarmos en Bitacora La solicitud Entrante
            $bitacoraWsDto = new BitacorawsDTO();
            $BitacoraWsRespDto = new BitacorawsDTO();
            $bitacoraWsDao = new BitacorawsDAO();
            $fechaRegistro = date("Y-m-d H:i:s");

            $bitacoraWsDto->setCveAccionws(9);
            $bitacoraWsDto->setObservacionesOrigen($cateo);
            $bitacoraWsDto->setHrefOrigen("RESPUESTA DE CATEOS");
            $bitacoraWsDto->setFechaRegistro($fechaRegistro);
            $rsBitacoraWsDto = $bitacoraWsDao->insertBitacoraws($bitacoraWsDto);

            $respuesta = $requestWS->sendRequest($url, $cateo, $timestamp, $authorization);

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