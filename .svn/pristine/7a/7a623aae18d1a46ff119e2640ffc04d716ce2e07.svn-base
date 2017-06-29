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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelacioncateos/ApelacioncateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/apelacioncateos/ApelacioncateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cateos/CateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cateos/CateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudescateos/EstatussolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudescateos/EstatussolicitudescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudescateos/SolicitudescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescateos/JuzgadorescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadorescateos/JuzgadorescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/telefonosjuzgadores/TelefonosjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/telefonosjuzgadores/TelefonosjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresapelacateos/JuzgadoresapelacateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresapelacateos/JuzgadoresapelacateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ministeriosresponsables/MinisteriosresponsablesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ministeriosresponsables/MinisteriosresponsablesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoranotificaciones/BitacoranotificacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoranotificaciones/BitacoranotificacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/bitacoramovimientos/BitacoramovimientosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/bitacoramovimientos/BitacoramovimientosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/respuestasolicitudcateo/RespuestasolicitudcateoDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/respuestasolicitudcateo/RespuestasolicitudcateoDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/programacioncateos/ProgramacioncateosController.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/programacioncateos/ProgramacioncateosDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesaudiencias/BuscarJuzgadoresApelacionCateos.Class.php");

include_once(dirname(__FILE__) . "/../../../fachadas/sigejupe/imagenes/ImagenesFacade.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/ssh/asterisk.php");
include_once(dirname(__FILE__) . "/../../../tribunal/correo/EmailHELPER.Class.php");
include_once(dirname(__FILE__) . "/../../../Helpers/chatapi/sendwhats.php");

class ApelacioncateosController {

    private $proveedor;
    protected $_asterisk;

    public function __construct() {
        $this->_asterisk = new asterisk2();
    }

    public function insertApelacioncateos($ApelacioncateosDto, $file, $origen = "sistema") {
        if ($ApelacioncateosDto->getIdCateo() != "") {
            #Validamos que los agravios esten llenos
            if ($ApelacioncateosDto->getAgravios() == "") {
                $resultado = ["type" => "Error", "text" => "NO SE ENCONTRARON AGRAVIOS REGISTRADOS"];
                $error = true;
            }

            if ($ApelacioncateosDto->getEscritoApelacion() == "") {
                $resultado = ["type" => "Error", "text" => utf8_encode("NO SE INGRESO LA APELACIÓN DEL CATEO")];
                $error = true;
            }

            if (!$error) {

                $proveedor = new Proveedor('mysql', 'sigejupe');
                $proveedor->connect();
                $proveedor->execute("BEGIN");
                $resultado = array();
                $resultadoLlamada = array();
                $param = array();
                $param["actuacion"] = 28;
                if ($origen == "sistema") {
                    $idUsuario = $_SESSION["cveUsuarioSistema"];
                } else {
                    $idUsuario = $_SESSION["cveUsuario"];
                }
                $param["usuario"] = $idUsuario;
                $error = false;

                $cateos = new CateosDTO();
                $cateosDao = new CateosDAO();
                $cateos->setIdCateo($ApelacioncateosDto->getIdCateo());
                $cateos = $cateosDao->selectCateos($cateos);
                # Obtenemos el Cateo que se solicita para la apelacion
                if ($cateos != "") {
                    $telefonos = array();
                    $emailJuez = array();
                    $cateos = $cateos[0];
                    $param["numero"] = $cateos->getNumeroCateo();
                    $param["anio"] = $cateos->getAnioCateo();
                    $param["fechaRegistro"] = $cateos->getFechaRegistro();
                    $agravios = $ApelacioncateosDto->getAgravios();
                    $apelacion = $ApelacioncateosDto->getEscritoApelacion();

                    #Obtenemos la solicitud relacionada al cateo
                    $solicitudCateoDto = new SolicitudescateosDTO();
                    $solicitudCateoDao = new SolicitudescateosDAO();
                    $solicitudCateoDto->setIdSolicitudCateo($cateos->getIdSolicitudCateo());
                    $solicitudCateoDto = $solicitudCateoDao->selectSolicitudescateos($solicitudCateoDto, "", "");
                    if ($solicitudCateoDto != "") {
                        $solicitudCateoDto = $solicitudCateoDto[0];
                        $param["juzgado"] = $solicitudCateoDto->getCveJuzgadoDesahoga();
                        $param["adscripcion"] = $solicitudCateoDto->getCveJuzgadoDesahoga();
                    } else {
                        $error = true;
                        $resultado = ["type" => "Error", "text" => "NO SE ENCOTRO LA SOLICITUD RELACIONADA AL CATEO"];
                    }

                    #Obtenemos el Juzgado 
                    $JuzgadosDao = new JuzgadosDAO();
                    $JuzgadosDto = new JuzgadosDTO();
                    $JuzgadosDto->setCveJuzgado($solicitudCateoDto->getCveJuzgadoDesahoga()); #Id del juzgado a solicitar
                    $JuzgadosDto->setActivo("S");
                    $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, "", $proveedor);
                    if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                        $JuzgadosDto = $JuzgadosDto[0];
                    } else {
                        $error = true;
                        $result = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO A SOLICITAR");
                    }

                    #Obtenemos la Informacion del Juez
                    if (!$error) {
                        $programacioncateosController = new ProgramacioncateosController();
                        $arrayJuzgador = array();
                        $juzgadoJuezDto = new JuzgadosDTO();
                        $fechac = (int) $solicitudCateoDao->selectFecha($proveedor);

                        //if ($fechac >= "20160620") {
                        $idJuzgadop = "10322";
                        /* } else {
                          $idJuzgadop = $solicitudCateoDto->getCveJuzgadoDesahoga();
                          } */
                        $juzgadoJuezDto->setCveJuzgado($idJuzgadop);
                        $programacionCateosDto = new ProgramacioncateosDTO();
                        $programacionCateosDto->setFechaInicio(date("Y-m-d H:i:s"));
                        $arrayJuzgador = $programacioncateosController->juezCateo($juzgadoJuezDto, $programacionCateosDto, $proveedor);
                        if ($arrayJuzgador != "" && $arrayJuzgador["estatus"] == "ok") {
                            $idJuezCateo = $arrayJuzgador["data"]["idJuzgador"];
                            if ((int) $idJuezCateo >= 1) {
                                
                            } else if ((int) $idJuezCateo == 0) {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR NO EXISTEN LOS HORARIOS DE CATEO DEFINIDOS PARA EL JUZGADO");
                            } else if ((int) $idJuezCateo == -1) {
                                $error = true;
                                $resultado = array("type" => "Error", "text" => "ERROR NO EXISTEN JUEZ DISPONLIBLE PARA DICHA SOLICITUD DE CATEO");
                            }
                        } else {
                            $error = true;
                            $resultado = array("type" => "Error", "text" => utf8_encode($arrayJuzgador["text"]));
                        }
                    }

                    if (!$error) {
                        $juzgadorcateoDto = new JuzgadorescateosDTO();
                        $juzgadorcateoDao = new JuzgadorescateosDAO();
                        $juzgadorcateoDto->setIdSolicitudCateo($cateos->getIdSolicitudCateo());
                        $juzgadorcateoDto->setActivo("S");
                        $juzgadorcateoDto = $juzgadorcateoDao->selectJuzgadorescateos($juzgadorcateoDto, "", "", $proveedor);

                        if ($juzgadorcateoDto != "") {
                            $juzgadorcateoDto = $juzgadorcateoDto[0];
                            #Obtenemos los medios de cominicacion del Juez
                            $telefonosjuezDto = new TelefonosjuzgadoresDTO();
                            $telefonosjuezDao = new TelefonosjuzgadoresDAO();

                            $telefonosjuezDto->setIdJuzgador($idJuezCateo);
                            $telefonosjuezDto->setActivo("S");
                            $telefonosjuezDto = $telefonosjuezDao->selectTelefonosjuzgadores($telefonosjuezDto, "", $proveedor);
                            if ($telefonosjuezDto != "") {
                                foreach ($telefonosjuezDto as $telJuez) {
                                    if ($telJuez->getEmail() != "") {
                                        $emailJuez[] = $telJuez->getEmail();
                                    }
                                    if ($telJuez->getCelular() != "") {
                                        $telefonos[] = $telJuez->getCelular();
                                    }
                                    if ($telJuez->getTelefono() != "") {
                                        $telefonos[] = $telJuez->getTelefono();
                                    }
                                }
                            } else {
                                $error = true;
                                $resultado = ["type" => "Error", "text" => utf8_encode("NO SE ENCOTRARON MEDIOS DE COMUNICACIÓN DEL JUEZ")];
                            }
                        } else {
                            $error = true;
                            $resultado = ["type" => "Error", "text" => "NO SE ENCOTRO AL JUEZ DEL CATEO"];
                        }
                    }

                    #Iniciamos con el Guardado de la Informacion
                    if (!$error) {
                        $bolStatusMailJuez = false;

                        $ApelacioncateoDto = new ApelacioncateosDTO();
                        $ApelacioncateoDao = new ApelacioncateosDAO();

                        #Guardamos la informacion de la Apelacion de Cateo
                        $ApelacioncateoDto->setAgravios(utf8_decode($agravios));
                        $ApelacioncateoDto->setEscritoApelacion(utf8_decode($apelacion));
                        $ApelacioncateoDto->setCveEstatusSolicitudCateo(7);
                        $ApelacioncateoDto->setIdCateo($cateos->getIdCateo());
                        $ApelacioncateoDto->setFechaEscritoApelacion($solicitudCateoDao->selectFechaHoraMySql($proveedor));
                        $ApelacioncateoDto->setCveUsuarioMP($idUsuario);
                        $ApelacioncateoDto = $ApelacioncateoDao->insertApelacioncateos($ApelacioncateoDto, $proveedor);

                        if ($ApelacioncateoDto != "" && count($ApelacioncateoDto) > 0) {
                            $ApelacioncateoDto = $ApelacioncateoDto[0];
                            $param["referencia"] = $ApelacioncateoDto->getIdApelacionCateo();

                            #Actualizamos la Soliitud de Cateo
                            $updateSolCateo = new SolicitudescateosDTO();
                            $updateSolCateo->setIdSolicitudCateo($solicitudCateoDto->getIdSolicitudCateo());
                            $updateSolCateo->setCveEstatusSolicitudCateo(7);
                            $updateSolCateo = $solicitudCateoDao->updateSolicitudescateos($updateSolCateo, $proveedor);
                            if ($updateSolCateo != "") {
                                
                            } else {
                                $error = true;
                                $resultado = ["type" => "Error", "text" => utf8_encode("ERROR AL ACTUAIZAR LA SOLICITUD DE CATEO")];
                            }
                        } else {
                            $error = true;
                            $resultado = ["type" => "Error", "text" => utf8_encode("NO SE GUARDO LA APELACIÓN DEL CATEO")];
                        }
                    }

                    #Insertamos a el juez que respondera la apelacion
                    if (!$error) {
                        $juezApelacionDto = new JuzgadoresapelacateosDTO();
                        $juezApelacionDao = new JuzgadoresapelacateosDAO();

                        $juezApelacionDto->setActivo("S");
                        $juezApelacionDto->setIdJuzgador($idJuezCateo);
                        $juezApelacionDto->setIdApelacionCateo($ApelacioncateoDto->getIdApelacionCateo());
                        $juezApelacionDto = $juezApelacionDao->insertJuzgadoresapelacateos($juezApelacionDto, $proveedor);

                        if ($juezApelacionDto != "" && count($juezApelacionDto) > 0) {
                            $param["juzgadorUsuario"] = $juzgadorcateoDto->getIdJuzgador();
                            $param["usuario"] = $juezApelacionDto[0]->getIdJuzgador();
                        } else {
                            $error = true;
                            $resultado = ["type" => "Error", "text" => utf8_encode("NO SE GUARDO EL JUEZ QUE RESOLVERA LA APELACIÓN DE CATEO")];
                        }
                    }

                    #Insertamos a el juez en 
                    if (!$error) {
                        $juzgadorCateoDto = new JuzgadorescateosDTO();
                        $juzgadorCateoDao = new JuzgadorescateosDAO();
                        $juzgadorCateoDto->setActivo("S");
                        $juzgadorCateoDto->setIdJuzgador($idJuezCateo);
                        $juzgadorCateoDto->setIdSolicitudCateo($solicitudCateoDto->getIdSolicitudCateo());
                        $juzgadorCateoDto = $juzgadorCateoDao->insertJuzgadorescateos($juzgadorCateoDto, $proveedor);
                        if ($juzgadorCateoDao != "") {
                            
                        } else {
                            $error = true;
                            $resultado = ["type" => "Error", "text" => utf8_encode("NO SE GUARDO AL JUEZ EN JUZGADORES CATEOS")];
                        }
                    }

                    #Guardamos el Documento Adjunto
                    if (!$error) {
                        $totalArchivos = count($file["name"]);
                        if (($totalArchivos >= 1) && ($file["name"][0] != "")) {
                            $imagenesfachada = new ImagenesFacade();
                            $paramImagenes = array();
                            $paramImagenes["cveTipoDocumento"] = 29;
                            $paramImagenes["idCarpetaJudicial"] = $ApelacioncateoDto->getIdApelacionCateo();
                            $paramImagenes["idActuacion"] = 0;
                            $paramImagenes["archivo"] = $file;
                            $imagenes = $imagenesfachada->insertImagenes($paramImagenes, $proveedor);
                            $imagenes = json_decode($imagenes, true);
                            if (isset($imagenes["data"]["type"]) != "" && isset($imagenes["data"]["type"]) == "OK") {
                                
                            } else {
                                $resultado = ["type" => "Error", "text" => $imagenes["text"]];
                                $error = true;
                            }
                        }
                    }

                    #Se realiza la llamada al Juez
                    if (!$error) {
                        $fechaCateo = $ApelacioncateoDto->getFechaRegistro();
                        $horaCateo = explode(' ', $fechaCateo);
                        $horaCateo = $horaCateo[1];
                        $xNombre = strtoupper(utf8_encode($_SESSION["Nombre"]));

                        $mensaje = "NOTIFICACIÓN: En Toluca, México, siendo las " . $horaCateo . " horas del día " . $this->FechaLarga($fechaCateo) . ", mediante el sistema informático (SIGEJUPE),  el C. " . $xNombre . ", Agente del Ministerio Público, 
                                    formuló; ante el " . $JuzgadosDto->getDesJuzgado() . ", la solicitud de apelación de cateo número " . str_pad($cateos->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $cateos->getAnioCateo() . ", 
                                    la cual se encuentra en el referido sistema informático para su consulta y atención respectiva.";
                        $param["mensaje"] = $mensaje;
                        $param["audio"] = "outboundmsg5";
                        $resultadoLlamada = $this->llamada($telefonos, $param, $proveedor);
                        if ($resultadoLlamada["type"] == "Error") {
                            $error = true;
                            $resultado = ["type" => "Error", "text" => "NO SE REALIZO LA LLAMADA"];
                        }
                    }

                    #Se realiza el envio de Correo Electronico
                    if (!$error) {
                        $fechaCateo = $ApelacioncateoDto->getFechaRegistro();
                        $horaCateo = explode(' ', $fechaCateo);
                        $horaCateo = $horaCateo[1];
                        $xNombre = strtoupper(utf8_encode($_SESSION["Nombre"]));

                        $param["toName"] = "Solicitud de Apelacion Cateo";
                        $cuerpoEmail = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                        $cuerpoEmail .= "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaCateo . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaCateo) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),  el <b>C. " . $xNombre . "</b>, Agente del Ministerio P&uacute;blico, ";
                        $cuerpoEmail .= " formul&oacute; ante el <b>" . $JuzgadosDto->getDesJuzgado() . "</b>, la solicitud de apelaci&oacute;n cateo n&uacute;mero <b>" . str_pad($cateos->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $cateos->getAnioCateo() . "</b>, ";
                        $cuerpoEmail .= " la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                        $cuerpoEmail .= " </body>\n</html>\n\n";
                        $param["cuerpoEmail"] = $cuerpoEmail;
                        $resultadoEmail = $this->Email($emailJuez, $param, $proveedor);
                        if ($resultadoEmail["type"] == "Error") {
                            $error = true;
                            $resultado = $resultadoEmail;
                        }
                    }
                    #Guardamos en la Bitacora de Movimientos
                    if (!$error) {
                        $param["accion"] = 354;
                        $param["observaciones"] = "AGREGO SOLICITUD DE APELACION DE CATEO NUMERO: " . $ApelacioncateoDto->getIdApelacionCateo() . " ENVIO CORREO ELECTRONICO A EL JUEZ";
                        $this->BitacoraMovimientos($param, $proveedor);
                    }

                    #Terminamos la Transaccion y se emite una respuesta
                    if (!$error) {
                        $proveedor->execute("COMMIT");
                        $resultado = array("type" => "OK",
                            "text" => "REGISTRO DE SOLICITUD DE FORMA EXITOSA",
                            "type" => "OK",
                            "idApelacion" => $ApelacioncateoDto->getIdApelacionCateo(),
                            "idCateo" => $cateos->getIdCateo()
                        );
                    } else {
                        $proveedor->execute("ROLLBACK");
                    }
                    $proveedor->close();
                } else {
                    $resultado = ["type" => "Error", "text" => "NO SE ENCOTRO LA SOLICITUD DE CATEO"];
                }
            }
        }
        return $resultado;
    }

    /**
     * Guarda la Informacion en la Bitacora de NOtificaciones
     * @param array $param Contiene la informacion de la Bitacora
     * @param Proveedor $proveedor Instancia de la conexion a la BD
     * @return boolean
     */
    private function BitacoraNotificacion($param, $proveedor) {
        if ($param != "") {
            $bitacoraNotificaDto = new BitacoranotificacionesDTO();
            $bitacoraNotificaDao = new BitacoranotificacionesDAO();

            $bitacoraNotificaDto->setCveMedioNotificacion($param["medioNotificacion"]);
            $bitacoraNotificaDto->setCveTipoActuacion($param["actuacion"]); #Por Definir
            $bitacoraNotificaDto->setCveEstatusNotificacion($param["estatus"]);
            $bitacoraNotificaDto->setIdReferencia($param["referencia"]);
            $bitacoraNotificaDto->setNumero($param["numero"]);
            $bitacoraNotificaDto->setAnio($param["anio"]);
            $bitacoraNotificaDto->setCvejuzgado($param["juzgado"]);
            $bitacoraNotificaDto->setCveUsuario($param["usuario"]);
            $bitacoraNotificaDto->setMedio($param["medio"]);
            $bitacoraNotificaDto->setMovimiento($param["movimiento"]);

            $bitacoraNotificaDto = $bitacoraNotificaDao->insertBitacoranotificaciones($bitacoraNotificaDto, $proveedor);
            if ($bitacoraNotificaDto != "" && count($bitacoraNotificaDto) > 0) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    /**
     * Realiza una llamada a un determinado numero telefonico
     * @param array $telefonos Arreglo de los numeros telefonicos
     * @param array $param Parametros Extra para la llamada y el envio de mensajes de WatsAPp
     * @return void
     */
    private function llamada($telefonos, $param, $proveedor) {
        $resultado = array();
        if (count($telefonos) > 0) {
            $numerosWatsApp = array();
            $cveEstatusNotificacion = 1;
            $contadorError = 0;
            foreach ($telefonos as $celular) {
                if ($celular != "") {
                    if (substr($celular, 0, 3) == "722") {
                        $numerosWatsApp[] = "521" . $celular;
                        $celular = "044" . $celular;
                    } else {
                        $celular = "045" . $celular;
                    }

                    $nombrearchivo = "cateo_apelacion_" . $param["referencia"] . "_" . $celular . "_" . $param["juzgadorUsuario"] . "_" . date("YmdHis") . ".txt";
                    $fechaCateo = $param["fechaApelacion"];
                    $horaCateo = explode(' ', $fechaCateo);
                    $horaCateo = $horaCateo[1];

                    $e = $this->_asterisk->llamar("10.22.157.61", $celular, "./../../../llamadas/", $nombrearchivo, $param["audio"]);
                    //$e = '';
                    $cveEstatusNotificacion = 1; #EN ESPERA
                    if (preg_match("/problema/", $e)) {
                        $cveEstatusNotificacion = 3; #ERROR
                    } else {
                        $cveEstatusNotificacion = 2; #ENVIADO CORRECTO
                    }

                    $param["medioNotificacion"] = 2;
                    $param["estatus"] = $cveEstatusNotificacion;
                    $param["medio"] = $celular;
                    $param["movimiento"] = "Archivo:" . $nombrearchivo . "<br>Respuesta:" . $e;

                    $resultadoBitacora = $this->BitacoraNotificacion($param, $proveedor);
                    if (!$resultadoBitacora) {
                        if ($contadorError == count($celulares)) {
                            $resultado = ["type" => "Error", "text" => utf8_encode("ERROR AL GUARDAR EN BITACORA DE NOTIFICACIÓN - LLAMADA JUEZ")];
                        }
                        $contadorError++;
                    } else {
                        $resultado = ["type" => "OK"];
                        $contadorError++;
                    }
                }
            }

            if ($numerosWatsApp != "" || count($numerosWatsApp) > 0) {
                #$this->mensajeWatsApp($param["mensaje"], $numerosWatsApp);
            }
        } else {
            $resultado = ["type" => "Error", "text" => utf8_encode("ERROR NO HAY MEDIOS DE NOTIFICACION")];
        }
    }

    /**
     * Envia el mensaje de WatsApp
     * @param string $mensaje El mensaje que se enviara
     * @param array $telefonos Los telefonos que recibiral el mensaje de WatsAPp
     * @return boolean
     */
    private function mensajeWatsApp($mensaje, $telefonos) {
        $resultWhats = array();
        $resultWhats = sendWhatsAppMessage($telefonos, $mensaje);
    }

    /**
     * Envia el correo electronico
     * @param array $emailJuzgadores Correos Electronicos
     * @param array $param Parametros del Envio del Email
     * @param Proveedor $proveedor Instancia de la conexion a la BD
     */
    private function Email($emailJuzgadores, $param, $proveedor) {
        $resultado = array();
        if ($emailJuzgadores != "" && count($emailJuzgadores) > 0) {
            $objDatCorreo = $this->plantillaCorreo("apelaciones");
            if ($objDatCorreo != "" && count($objDatCorreo) > 0) {
                foreach ($emailJuzgadores as $emailJuzgador) {
                    $emailJuez = $emailJuzgador;

                    $param["medioNotificacion"] = 1;
                    $param["medio"] = $emailJuez;
                    $param["email"] = $emailJuez;
                    $param["emailNotificacion"] = $param["cuerpoEmail"];

                    if ((trim($emailJuez) != "") && (strlen($emailJuez) > 1)) {
                        $resultado = $this->EmailEnviar($objDatCorreo, $param, $proveedor);
                    } else {
                        $param["estatus"] = 1;
                        $param["movimiento"] = "NO SE LOGRO ENVIAR CORREO ELECTRONICO";
                        $this->BitacoraNotificacion($param, $proveedor);
                    }
                }
            } else {
                $resultado = ["type" => "Error", "text" => utf8_encode("ERROR AL OBTENER LA CONFIGURACION DE CORREO")];
            }
        } else {
            $resultado = ["type" => "Error", "text" => utf8_encode("ERROR NO HAY MEDIOS DE NOTIFICACION CORREO ELECTRONICO")];
        }
        return $resultado;
    }

    /**
     * Envia el Correo Electronico 
     * @param type $objDatCorreo Configuracion de la PLantilla
     * @param type $param Parametros para el envio de correo
     * @return boolean
     */
    private function EmailEnviar($objDatCorreo, $param, $proveedor) {
        $correo = new EmailHELPER();
        $correo->setSenderAddress($objDatCorreo->CorreoRemite);
        $correo->setToAddress(trim($param["email"]));
        $correo->setToName($param["toName"]);
        $correo->setSubject($param["toName"]);
//        $correo->setSubject($objDatCorreo->Subject);
        $correo->setHostSmtp($objDatCorreo->IpSMTP);
        $correo->setPortSmtp($objDatCorreo->PortSMTP);
        $correo->setIsHTMLFormat(true);
        $strCuerpoEmailJuez = $param["emailNotificacion"];
        $correo->setBody($strCuerpoEmailJuez);
        $intentos = 1;
        $resultado = false;
        while ($intentos <= 5) {
            $bolStatusMailJuez = $correo->send();
            $cveEstatusNotificacion = "1";
            $movimiento = "";
            if ($bolStatusMailJuez == true) {
                $cveEstatusNotificacion = "2";
                $movimiento = "SE LOGRO ENVIAR CORREO ELECTRONICO";
            } else {
                $cveEstatusNotificacion = "3";
                $movimiento = "NO SE LOGRO ENVIAR CORREO ELECTRONICO";
            }

            $param["estatus"] = $cveEstatusNotificacion;
            $param["movimiento"] = $movimiento;
            #SI EL ENVIO DE CORREO FUE EXITOSO CORTA EL CICLO
            if ($bolStatusMailJuez == true) {
                $resultado = $this->BitacoraNotificacion($param, $proveedor);
                break;
            }
            $intentos = $intentos + 1;
            $resultado = $this->BitacoraNotificacion($param, $proveedor);
        }
        return $resultado;
    }

    /**
     * 
     * @param string $attNom Nombre de la configuracion
     * @return object
     */
    private function plantillaCorreo($attNom) {
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

    /**
     * Guarda la Informacion en la Bitacora de Movimientos
     * @param array $param Contiene la informacion de la Bitacora
     * @param Proveedor $proveedor Instancia de la conexion a la BD
     * @return boolean
     */
    private function BitacoraMovimientos($param, $proveedor) {
        $BitacoramovimientosDao = new BitacoramovimientosDAO();
        $BitacoramovimientosDto = new BitacoramovimientosDTO();
        $BitacoramovimientosDto->setCveAccion($param["accion"]);
        $BitacoramovimientosDto->setCveUsuario($_SESSION["cveUsuarioSistema"]);
        $BitacoramovimientosDto->setCvePerfil($param["referencia"]);
        $BitacoramovimientosDto->setCveAdscripcion($param["adscripcion"]);
        $BitacoramovimientosDto->setObservaciones($param["observaciones"]);
        $BitacoramovimientosDto = $BitacoramovimientosDao->insertBitacoramovimientos($BitacoramovimientosDto, $proveedor);
        if ($BitacoramovimientosDto != "" && count($BitacoramovimientosDto) > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function guardarApelacionResolucion($ApelacioncateosDto, $file) {
        if ($ApelacioncateosDto->getIdCateo() != "") {
            $resultado = array();
            $resultadoLlamada = array();
            $param = array();
            $param["actuacion"] = 30;
            $param["usuario"] = $_SESSION["cveUsuarioSistema"];
            $emailJuez = array();
            $error = false;

            #Validamos que la Resolucion
            if ($ApelacioncateosDto->getResolucionSala() == "") {
                $resultado = ["type" => "Error", "text" => "ESCRIBE LA RESOLUCION"];
                $error = true;
            }

            #Validamos El Estatus de la resolucion
            if ($ApelacioncateosDto->getAceptada() == "S") {
                if ($ApelacioncateosDto->getCveSentido() == "0") {
                    $resultado = ["type" => "Error", "text" => "SELECCIONA UN ESTATUS"];
                    $error = true;
                }
            } else {
                $ApelacioncateosDto->setCveSentido("");
            }

            if (!$error) {
                $cateos = new CateosDTO();
                $cateosDao = new CateosDAO();
                $cateos->setIdCateo($ApelacioncateosDto->getIdCateo());
                $cateos = $cateosDao->selectCateos($cateos);

                # Obtenemos el Cateo que se solicita para la apelacion
                if ($cateos != "") {
                    $cateos = $cateos[0];
                    #Iniciamos con el Guardado de la Informacion
                    $proveedor = new Proveedor('mysql', 'sigejupe');
                    $proveedor->connect();
                    $proveedor->execute("BEGIN");
                    $bolStatusMailJuez = false;

                    #Obtenemos la solicitud relacionada al cateo
                    $solicitudCateoDto = new SolicitudescateosDTO();
                    $solicitudCateoDao = new SolicitudescateosDAO();
                    $solicitudCateoDto->setIdSolicitudCateo($cateos->getIdSolicitudCateo());
                    $solicitudCateoDto = $solicitudCateoDao->selectSolicitudescateos($solicitudCateoDto, "", "");
                    if ($solicitudCateoDto != "") {
                        $solicitudCateoDto = $solicitudCateoDto[0];
                        $param["juzgado"] = $solicitudCateoDto->getCveJuzgadoDesahoga();
                        $param["adscripcion"] = $solicitudCateoDto->getCveJuzgadoDesahoga();
                    } else {
                        $error = true;
                        $resultado = ["type" => "Error", "text" => "NO SE ENCOTRO LA SOLICITUD RELACIONADA AL CATEO"];
                    }

                    #Obtenemos el Juzgado 
                    $JuzgadosDao = new JuzgadosDAO();
                    $JuzgadosDto = new JuzgadosDTO();
                    $JuzgadosDto->setCveJuzgado($solicitudCateoDto->getCveJuzgadoDesahoga()); #Id del juzgado a solicitar
                    $JuzgadosDto->setActivo("S");
                    $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto, "", $proveedor);
                    if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                        $JuzgadosDto = $JuzgadosDto[0];
                    } else {
                        $error = true;
                        $resultado = array("type" => "Error", "text" => "ERROR AL OBTENER INFORMACION DEL JUZGADO A SOLICITAR");
                    }

                    #Obtenemos la Apelacion
                    $apelacionUpdateDto = new ApelacioncateosDTO();
                    $apelacionDao = new ApelacioncateosDAO();
                    $apelacionUpdateDto->setIdCateo($ApelacioncateosDto->getIdCateo());
                    $apelacionUpdateDto = $apelacionDao->selectApelacioncateos($apelacionUpdateDto);
                    if ($apelacionUpdateDto != "") {
                        $apelacionUpdateDto = $apelacionUpdateDto[0];
                    } else {
                        $error = true;
                        $resultado = ["type" => "Error", "text" => "NO SE ENCONTRO LA SOLICITUD DE APELACION"];
                    }

                    #Obtenemos la Informacion de la Apelacion
                    if (!$error) {
                        $apelacionDto = new ApelacioncateosDTO();
                        $apelacionDto->setCveSentido($ApelacioncateosDto->getCveSentido());
                        $apelacionDto->setAceptada($ApelacioncateosDto->getAceptada());
                        $apelacionDto->setCveEstatusSolicitudCateo(11);
                        $apelacionDto->setFechaResolucion($solicitudCateoDao->selectFechaHoraMySql());
                        $apelacionDto->setResolucionSala(utf8_decode($ApelacioncateosDto->getResolucionSala()));
                        $apelacionDto->setIdApelacionCateo($apelacionUpdateDto->getIdApelacionCateo());
                        $apelacionDto = $apelacionDao->updateApelacioncateos($apelacionDto, $proveedor);

                        if ($apelacionDto != "") {
                            $ApelacioncateoDto = $apelacionDto[0];
                            $param["referencia"] = $ApelacioncateoDto->getIdApelacionCateo();
                            $param["usuario"] = $ApelacioncateoDto->getCveUsuarioMP();
                            #Actualizamos la Solicitud de Cateo
                            $updateSolCateo = new SolicitudescateosDTO();
                            $updateSolCateo->setIdSolicitudCateo($cateos->getIdSolicitudCateo());
                            $updateSolCateo->setCveEstatusSolicitudCateo(11);
                            $updateSolCateo = $solicitudCateoDao->updateSolicitudescateos($updateSolCateo, $proveedor);
                            if ($updateSolCateo != "") {
                                $emailJuez[] = $cateos->getEmail();
                            } else {
                                $error = true;
                                $resultado = ["type" => "Error", "text" => utf8_encode("ERROR AL ACTUAIZAR LA SOLICITUD DE CATEO")];
                            }
                        } else {
                            $error = true;
                            $resultado = ["type" => "Error", "text" => "ERROR AL ACTUALIZAR LA APELACION DE CATEO"];
                        }
                    }

                    #Guardamos el Documento Adjunto
                    if (!$error) {
                        $totalArchivos = count($file["name"]);
                        if (($totalArchivos >= 1) && ($file["name"][0] != "")) {
                            $imagenesfachada = new ImagenesFacade();
                            $paramImagenes = array();
                            $paramImagenes["cveTipoDocumento"] = 31;
                            $paramImagenes["idCarpetaJudicial"] = $ApelacioncateoDto->getIdApelacionCateo();
                            $paramImagenes["idActuacion"] = 0;
                            $paramImagenes["archivo"] = $file;
                            $imagenes = $imagenesfachada->insertImagenes($paramImagenes, $proveedor);
                            if (!$error) {
                                $imagenes = json_decode($imagenes, true);
                                if (isset($imagenes["data"]["type"]) != "" && isset($imagenes["data"]["type"]) == "OK") {
                                    
                                } else {
                                    $resultado = ["type" => "Error", "text" => $imagenes["text"]];
                                    $error = true;
                                }
                            }
                        }
                    }

                    #Se realiza el envio de Correo Electronico
                    if (!$error) {
                        if ($ApelacioncateoDto->getAceptada() == "S")
                            $param["toName"] = "Resolucion Apelacion Cateo";
                        else
                            $param["toName"] = "Apelacion de Cateo Calificada como Negada";

                        $fechaCateo = $ApelacioncateoDto->getFechaActualizacion();
                        $horaCateo = explode(' ', $fechaCateo);
                        $horaCateo = $horaCateo[1];
                        $xNombre = strtoupper(utf8_encode($_SESSION["Nombre"]));

                        $cuerpoEmail = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                        $cuerpoEmail .= "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaCateo . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaCateo) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),  el Secretario <b>C. " . $xNombre . "</b>, ";
                        $cuerpoEmail .= " formul&oacute; ante el <b>" . $JuzgadosDto->getDesJuzgado() . "</b>, la resoluci&oacute;n de la solicitud de apelaci&oacute;n de cateo n&uacute;mero <b>" . str_pad($cateos->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $cateos->getAnioCateo() . "</b>, ";
                        $cuerpoEmail .= " la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                        $cuerpoEmail .= " </body>\n</html>\n\n";
                        $param["cuerpoEmail"] = $cuerpoEmail;
                        $resultadoEmail = $this->Email($emailJuez, $param, $proveedor);
                        if ($resultadoEmail["type"] == "Error") {
                            $error = true;
                            $resultado = $resultadoEmail;
                        }
                    }
                    #Guardamos en la Bitacora de Movimientos
                    if (!$error) {
                        $param["accion"] = 356;
                        $param["observaciones"] = "AGREGO SOLICITUD DE APELACION DE CATEO NUMERO: " . $ApelacioncateoDto->getIdApelacionCateo() . " ENVIO CORREO ELECTRONICO A EL JUEZ";
                        $this->BitacoraMovimientos($param, $proveedor);
                    }

                    #Terminamos la Transaccion y se emite una respuesta
                    if (!$error) {
                        $proveedor->execute("COMMIT");
                        $resultado = array("type" => "OK",
                            "text" => "REGISTRO DE SOLICITUD DE FORMA EXITOSA",
                            "type" => "OK",
                            "idApelacion" => $ApelacioncateoDto->getIdApelacionCateo(),
                            "idCateo" => $cateos->getIdCateo()
                        );
                        return json_encode($resultado);
                    } else {
                        $proveedor->execute("ROLLBACK");
                        return json_encode($resultado);
                    }
                    $proveedor->close();
                } else {
                    return json_encode(["type" => "Error", "text" => "NO SE ENCOTRO LA SOLICITUD DE CATEO"]);
                }
            } else {
                return json_encode($resultado);
            }
        }
        return json_encode(["type" => "Error", "text" => "NO SE ENCOTRO LA SOLICITUD DE CATEO"]);
    }

    public function guardarApelacionJuez($ApelacioncateosDto, $file) {
        if ($ApelacioncateosDto->getIdCateo() != "") {
            $resultado = array();
            $resultadoLlamada = array();
            $param = array();
            $param["actuacion"] = 29;
            $param["usuario"] = $_SESSION["cveUsuarioSistema"];
            $emailJuez = array();
            $telefonos = array();
            $error = false;

            #Validamos que la Resolucion
            if ($ApelacioncateosDto->getAcuerdo() == "") {
                $resultado = ["type" => "Error", "text" => "ESCRIBE EL ACUERDO"];
                $error = true;
            }

            #Validamos que exista la apelacion 
            $apelacionUpdateDto = new ApelacioncateosDTO();
            $apelacionDao = new ApelacioncateosDAO();
            $apelacionUpdateDto->setIdCateo($ApelacioncateosDto->getIdCateo());
            $apelacionUpdateDto = $apelacionDao->selectApelacioncateos($apelacionUpdateDto);
            if ($apelacionUpdateDto != "") {
                $apelacionUpdateDto = $apelacionUpdateDto[0];
            } else {
                $error = true;
                $resultado = ["type" => "Error", "text" => "NO SE ENCONTRO LA SOLICITUD DE APELACION"];
            }

            if (!$error) {
                $cateos = new CateosDTO();
                $cateosDao = new CateosDAO();
                $cateos->setIdCateo($ApelacioncateosDto->getIdCateo());
                $cateos = $cateosDao->selectCateos($cateos);

                # Obtenemos el Cateo que se solicita para la apelacion
                if ($cateos != "") {
                    #Iniciamos con el Guardado de la Informacion
                    $proveedor = new Proveedor('mysql', 'sigejupe');
                    $proveedor->connect();
                    $proveedor->execute("BEGIN");
                    $bolStatusMailJuez = false;

                    $cateos = $cateos[0];
                    #Obtenemos la solicitud relacionada al cateo
                    $solicitudCateoDto = new SolicitudescateosDTO();
                    $solicitudCateoDao = new SolicitudescateosDAO();
                    $solicitudCateoDto->setIdSolicitudCateo($cateos->getIdSolicitudCateo());

                    $solicitudCateoDto = $solicitudCateoDao->selectSolicitudescateos($solicitudCateoDto, "", "");
                    if ($solicitudCateoDto != "") {
                        $solicitudCateoDto = $solicitudCateoDto[0];
                        $param["juzgado"] = $solicitudCateoDto->getCveJuzgadoDesahoga();
                        $param["adscripcion"] = $solicitudCateoDto->getCveJuzgadoDesahoga();
                    } else {
                        $error = true;
                        $resultado = ["type" => "Error", "text" => "NO SE ENCOTRO LA SOLICITUD RELACIONADA AL CATEO"];
                    }

                    #Obtenemos el Secretario
                    if (!$error) {
                        $juzgadoDto = new JuzgadosDTO();
                        $juzgadoDao = new JuzgadosDAO();
                        $juzgadoDto->setActivo("S");
                        $juzgadoDto->setCveJuzgado($solicitudCateoDto->getCveJuzgado());
                        $secApelacion = new BuscarJuzgadoresApelacionCateo();
                        $salas = $secApelacion->obtenerSecretario($juzgadoDto, "", "", $proveedor);
                    }

                    $juzgadoDto = $juzgadoDao->selectJuzgados($juzgadoDto);
                    if ($juzgadoDto != "") {
                        $juzgadoDto = $juzgadoDto[0];
                    }

                    if ($salas["estatus"] == "error") {
                        $error = true;
                        $resultado = ["type" => "Error", "text" => "NO SE ENCONTRO SECRETARIO"];
                    } else {
                        $juzgadorSecretario = new JuzgadoresDTO();
                        $juzgadorSecretarioDAO = new JuzgadoresDAO();
                        $juzgadorSecretario->setCveTipoJuzgador(6);
                        $juzgadorSecretario->setIdJuzgador($salas["idSecretario"]);
                        $param["usuario"] = $salas["idSecretario"];
                        $juzgadorSecretario = $juzgadorSecretarioDAO->selectJuzgadores($juzgadorSecretario);
                        if ($juzgadorSecretario != "") {
                            $juzgadorSecretario = $juzgadorSecretario[0];
                            #Obtenemos los medios de comunicacion de Secretario
                            $telefonosSecretario = new TelefonosjuzgadoresDTO();
                            $telefonosSecretarioDao = new TelefonosjuzgadoresDAO();
                            $telefonosSecretario->setIdJuzgador($juzgadorSecretario->getIdJuzgador());
                            $telefonosSecretario->setActivo("S");
                            $telefonosSecretario = $telefonosSecretarioDao->selectTelefonosjuzgadores($telefonosSecretario);
                            if ($telefonosSecretario != "") {
                                foreach ($telefonosSecretario as $telJuez) {
                                    if ($telJuez->getEmail() != "") {
                                        $emailJuez[] = $telJuez->getEmail();
                                    }
                                    if ($telJuez->getCelular() != "") {
                                        $telefonos[] = $telJuez->getCelular();
                                    }
                                    if ($telJuez->getTelefono() != "") {
                                        $telefonos[] = $telJuez->getTelefono();
                                    }
                                }
                            } else {
                                $error = true;
                                $resultado = ["type" => "Error", "text" => "NO HAY MEDIOS DE COMUNICACION DEL SECRETARIO"];
                            }
                        } else {
                            $error = true;
                            $resultado = ["type" => "Error", "text" => "NO HAY SECRETARIO DISPONIBLE"];
                        }
                    }

                    #Actualizamos la inforacion de la Apelacion
                    if (!$error) {
                        $apelacionDto = new ApelacioncateosDTO();
                        $apelacionDto->setFechaAcuerdo($solicitudCateoDao->selectFechaHoraMySql());
                        $apelacionDto->setAcuerdo(utf8_decode($ApelacioncateosDto->getAcuerdo()));
                        $apelacionDto->setCveSala($salas["cveSala"]);
                        $apelacionDto->setCveUsuarioSecretario($salas["idSecretario"]);
                        $apelacionDto->setIdApelacionCateo($apelacionUpdateDto->getIdApelacionCateo());
                        $apelacionDto->setCveEstatusSolicitudCateo(9);
                        $apelacionDto = $apelacionDao->updateApelacioncateos($apelacionDto, $proveedor);
                        if ($apelacionDto != "") {
                            $apelacionDto = $apelacionDto[0];
                            $ApelacioncateoDto = $ApelacioncateoDto[0];
                            $param["referencia"] = $apelacionDto->getIdApelacionCateo();
                            #Actualizamos la Solicitud de Cateo
                            $updateSolCateo = new SolicitudescateosDTO();
                            $updateSolCateo->setIdSolicitudCateo($solicitudCateoDto->getIdSolicitudCateo());
                            $updateSolCateo->setCveEstatusSolicitudCateo(9);
                            $updateSolCateo = $solicitudCateoDao->updateSolicitudescateos($updateSolCateo, $proveedor);

                            if ($updateSolCateo != "") {
                                
                            } else {
                                $error = true;
                                $resultado = ["type" => "Error", "text" => utf8_encode("ERROR AL ACTUAIZAR LA SOLICITUD DE CATEO")];
                            }
                        } else {
                            $error = true;
                            $resultado = ["type" => "Error", "text" => "ERROR AL ACTUALIZAR LA APELACION DE CATEO"];
                        }
                    }

                    #Guardamos el Documento Adjunto
                    if (!$error) {
                        $totalArchivos = count($file["name"]);
                        if (($totalArchivos >= 1) && ($file["name"][0] != "")) {
                            $imagenesfachada = new ImagenesFacade();
                            $paramImagenes = array();
                            $paramImagenes["cveTipoDocumento"] = 30;
                            $paramImagenes["idCarpetaJudicial"] = $apelacionDto->getIdApelacionCateo();
                            $paramImagenes["idActuacion"] = 0;
                            $paramImagenes["archivo"] = $file;
                            $imagenes = $imagenesfachada->insertImagenes($paramImagenes, $proveedor);
                            if (!$error) {
                                $imagenes = json_decode($imagenes, true);
                                if (isset($imagenes["data"]["type"]) != "" && isset($imagenes["data"]["type"]) == "OK") {
                                    
                                } else {
                                    $resultado = ["type" => "Error", "text" => $imagenes["text"]];
                                    $error = true;
                                }
                            }
                        }
                    }

                    #Se realiza La llamada
                    if (!$error) {
                        $fechaCateo = $apelacionDto->getFechaActualizacion();
                        $horaCateo = explode(' ', $fechaCateo);
                        $horaCateo = $horaCateo[1];
                        $xNombre = strtoupper(utf8_encode($_SESSION["Nombre"]));

                        $mensaje = "NOTIFICACIÓN: En Toluca, México, siendo las " . $horaCateo . " horas del día " . $this->FechaLarga($fechaCateo) . ", mediante el sistema informático (SIGEJUPE),  el Juez C. " . $xNombre . ",  
                                    formuló; ante el " . $juzgadoDto->getDesJuzgado() . ", el acuerdo de la solicitud de apelación de apelación de cateo número " . str_pad($cateos->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $cateos->getAnioCateo() . ", 
                                    la cual se encuentra en el referido sistema informático para su consulta y atención respectiva.";
                        $param["mensaje"] = $mensaje;
                        $param["audio"] = "outboundmsg6";

                        $resultadoLlamada = $this->llamada($telefonos, $param, $proveedor);
                        if ($resultadoLlamada["type"] == "Error") {
                            $error = true;
                            $resultado = $resultadoLlamada;
                        }
                    }

                    #Se realiza el envio de Correo Electronico
                    if (!$error) {
                        $fechaCateo = $apelacionDto->getFechaActualizacion();
                        $horaCateo = explode(' ', $fechaCateo);
                        $horaCateo = $horaCateo[1];

                        $param["toName"] = "Acuerdo Apelacion Cateo - SECRETARIO";
                        $cuerpoEmail = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                        $cuerpoEmail .= "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaCateo . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaCateo) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),  el Juez <b>C. " . $xNombre . "</b>, ";
                        $cuerpoEmail .= " formul&oacute; ante el <b>" . $juzgadoDto->getDesJuzgado() . "</b>, el acuerdo de la solicitud de apelaci&oacute;n de cateo n&uacute;mero <b>" . str_pad($cateos->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $cateos->getAnioCateo() . "</b>, ";
                        $cuerpoEmail .= " la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.";
                        $cuerpoEmail .= " </body>\n</html>\n\n";
                        $param["cuerpoEmail"] = $cuerpoEmail;
                        $resultadoEmail = $this->Email($emailJuez, $param, $proveedor);
                        if (isset($resultadoEmail["type"])) {
                            $error = true;
                            $resultado = $resultadoEmail;
                        }
                    }
                    #Guardamos en la Bitacora de Movimientos
                    if (!$error) {
                        $param["accion"] = 357;
                        $param["observaciones"] = "AGREGO ACUERDO DE APELACION DE CATEO NUMERO: " . $apelacionDto->getIdApelacionCateo() . " ENVIO CORREO ELECTRONICO A EL SECRETARIO";
                        $this->BitacoraMovimientos($param, $proveedor);
                    }

                    #Terminamos la Transaccion y se emite una respuesta
                    if (!$error) {
                        $proveedor->execute("COMMIT");
                        $resultado = array("type" => "OK",
                            "text" => "REGISTRO DE SOLICITUD DE FORMA EXITOSA",
                            "type" => "OK",
                            "idApelacion" => $apelacionDto->getIdApelacionCateo(),
                            "idCateo" => $cateos->getIdCateo()
                        );
                    } else {
                        $proveedor->execute("ROLLBACK");
                    }
                    $proveedor->close();
                } else {
                    $resultado = ["type" => "Error", "text" => "NO SE ENCOTRO LA SOLICITUD DE CATEO"];
                }
            }
        }
        return json_encode($resultado);
    }

    public function consultaCateosInformacionApelacion($type, $param = "", $origen = "sistema") {
        $datos = [];
        if ($type != 0 && $type != "") {
            $idUsuario = 0;
            if ($origen == "sistema") {
                $idUsuario = $_SESSION['cveUsuarioSistema'];
            } else {
                $idUsuario = $param['cveUsuario'];
            }
            $numeroCateo = $param["numeroCateo"];
            $anioCateo = $param["anioCateo"];
            $cveJuzgado = $param["cveJuzgado"];

            $fechaRegistro = $param["fechaInicial"];
            $idJuzgadoT = 0;
            if ($param["cveJuzgado"] != "" || $param["cveJuzgado"] != 0) {
                $idJuzgadoT = $param["cveJuzgado"];
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
            $apelacionesDao = new ApelacioncateosDAO();
            switch ($type) {
                case "1": // --> Busuqeda MP
                    $cateosDto = new CateosDTO();
                    $cateosDto->setAnioCateo($anioCateo);
                    $cateosDto->setNumeroCateo($numeroCateo);
                    $solicitudescateosDto->setCveUsuario($idUsuario);
                    $orden = " AND C.cveRespuestaSolicitudCateo in (1,3) AND SC.cveEstatusSolicitudCateo = 3 ";
                    if ($cveJuzgado != "" && $cveJuzgado > 0) {
                        $orden .= " AND SC.cveJuzgadoDesahoga='" . $cveJuzgado . "' ";
                    }
                    $solicitudescateosDto = $apelacionesDao->selectSolicitudesCateosmp($solicitudescateosDto, $cateosDto, $param, $orden);
                    if ($solicitudescateosDto != "") {
                        $datos = [];
                        $i = 0;
                        foreach ($solicitudescateosDto as $index => $value) {
                            $filtros["idSolicitudCateo"] = $value->getIdSolicitudCateo();
                            $resultado = $this->infoCateoDetalleApelacion($filtros);
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
                        $solicitudescateosDtos = $apelacionesDao->selectSolicitudesCateosmp($solicitudescateosDtos, $cateosDto, $param, $orden);
                        $datos["total"] = (int) $solicitudescateosDtos[0];
                        $paginas = $this->getPaginas($solicitudescateosDtos, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return array("type" => "Error", "text" => "NO SE ENCONTRARON SOLICITUDES");
                    }
                    break;
                case "2": // --> Busuqeda Juzgador
                    $cateosDto = new CateosDTO();
                    $cateosDto->setAnioCateo($anioCateo);
                    $cateosDto->setNumeroCateo($numeroCateo);
                    $juzgadorcateoDto = new JuzgadoresDTO();
                    $juzgadorcateoDao = new JuzgadoresDAO();
                    $juzgadorcateoDto->setCveUsuario($idUsuario);
                    $juzgadorcateoDto->setActivo("S");
                    $juzgadorcateoDto = $juzgadorcateoDao->selectJuzgadores($juzgadorcateoDto);
                    $orden = " AND C.cveRespuestaSolicitudCateo in (1,3) AND SC.cveEstatusSolicitudCateo in (7,8) AND AC.cveEstatusSolicitudCateo=7 AND JC.idJuzgador=" . $juzgadorcateoDto[0]->getIdJuzgador();
                    if ($cveJuzgado != "" && $cveJuzgado > 0) {
                        $orden .= " AND SC.cveJuzgadoDesahoga='" . $cveJuzgado . "' ";
                    }
                    $solicitudescateosDto = $apelacionesDao->selectSolicitudesCateosApelacion($solicitudescateosDto, $cateosDto, $param, $orden);
                    if ($solicitudescateosDto != "") {
                        $datos = [];
                        $i = 0;
                        foreach ($solicitudescateosDto as $index => $value) {
                            $filtros["idSolicitudCateo"] = $value->getIdSolicitudCateo();
                            $filtros["option"] = 3;
                            $resultado = $this->infoCateoDetalleApelacion($filtros);
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
                        $param["fields"] = " count(idSolicitudCateo) as totalCount ";
                        $solicitudescateosDtos = $apelacionesDao->selectSolicitudesCateosApelacion($solicitudescateosDtos, $cateosDto, $param, $orden);
                        $datos["total"] = (int) $solicitudescateosDtos[0];
                        $paginas = $this->getPaginas($solicitudescateosDtos, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return array("type" => "Error", "text" => "NO SE ENCONTRARON SOLICITUDES");
                    }
                    break;
                case "3": // --> Busqueda Secretario
                    $cateosDto = new CateosDTO();
                    $cateosDto->setAnioCateo($anioCateo);
                    $cateosDto->setNumeroCateo($numeroCateo);
                    $juzgadorcateoDto = new JuzgadoresDTO();
                    $juzgadorcateoDao = new JuzgadoresDAO();
                    $juzgadorcateoDto->setCveUsuario($idUsuario);
                    $juzgadorcateoDto->setActivo("S");
                    $juzgadorcateoDto = $juzgadorcateoDao->selectJuzgadores($juzgadorcateoDto);
                    $orden = " AND C.cveRespuestaSolicitudCateo in (1,3) AND SC.cveEstatusSolicitudCateo in (9,10) AND AC.cveEstatusSolicitudCateo=9 AND AC.cveUsuarioSecretario=" . $juzgadorcateoDto[0]->getIdJuzgador();
                    $solicitudescateosDto = $apelacionesDao->selectSolicitudesCateosApelacion($solicitudescateosDto, $cateosDto, $param, $orden);
                    if ($solicitudescateosDto != "") {
                        $datos = [];
                        $i = 0;
                        foreach ($solicitudescateosDto as $index => $value) {
                            $filtros["idSolicitudCateo"] = $value->getIdSolicitudCateo();
                            $resultado = $this->infoCateoDetalleApelacion($filtros);
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
                        #$solicitudescateosDtos->setCveUsuario($idUsuario);
                        $param["fields"] = " count(idSolicitudCateo) as totalCount ";
                        $solicitudescateosDtos = $apelacionesDao->selectSolicitudesCateosApelacion($solicitudescateosDtos, $cateosDto, $param, $orden);
                        $datos["total"] = (int) $solicitudescateosDtos[0];
                        $paginas = $this->getPaginas($solicitudescateosDtos, $param);
                        $datos["paginas"] = $paginas;
                    } else {
                        return "";
                    }
                    break;
                default :
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

    private function infoCateoDetalleApelacion($filtros) {
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
                        $idJuzgado = $value->getCveJuzgado();
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
                            if ($cateos[0]->getFechaRespuesta() != "") {
                                $espera = $this->longDate($cateos[0]->getFechaRegistro(), $cateos[0]->getFechaRespuesta());
                            } else {
                                $espera = "Sin Respuesta";
                            }
                            $resultados["tiempoRespuesta"] = utf8_encode("$espera");
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

    public function consultaCateosDetalleApelacion($idCateo, $proveedor = null) {
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
                            $arrayJuzgadoresSolicitudes[$countGeneral]["solicitudCateo"] = $solicitudescateosDto;

                            #CONSULTAMOS INFORMACION DE LOS OBJETOS
                            $objetosDTO = new ObjetosDTO();
                            $objetosDTO->setIdSolicitudCateo($solicitudescateosDto->getIdSolicitudCateo());
                            $objetosDTO->setCveOrigen(1);
                            $objetosDTO = $objetosDao->selectObjetos($objetosDTO);
                            $arrayJuzgadoresSolicitudes[$countGeneral]["objetos"] = array();
                            if ($objetosDTO != "" && count($objetosDTO) > 0) {
                                $arrayJuzgadoresSolicitudes[$countGeneral]["objetos"] = $objetosDTO;
                            }

                            #CONSULTAMOS INFORMACION DE LAS PERSONAS
                            $personasDTO = new PersonasDTO();
                            $personasDTO->setIdSolicitudCateo($solicitudescateosDto->getIdSolicitudCateo());
                            $personasDTO->setCveOrigen(1);
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

    public function getPaginas($dto, $param) {
        $paginas = array();
        $Pages = (int) $dto[0] / $param["cantxPag"];
        $restoPages = (int) $dto[0] % $param["cantxPag"];
        $totPages = $Pages + (($restoPages > 0) ? 1 : 0);
        if ($totPages > 1) {
            for ($index = 1; $index <= $totPages; $index++) {
                $paginas[] = utf8_encode($index);
            }
        }
        return $paginas;
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

    public function getApelacionesPendientes() {
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
                $datos[$i] = array();
                $countJuzgado = 0;
                foreach ($juzgadosDto as $juzgado) {
                    $solicitudCateo = new SolicitudescateosDTO();
                    $solicitudCateo->setCveJuzgadoDesahoga($juzgado->getCveJuzgado());
                    $orden = " AND cveEstatusSolicitudCateo in (7,8) ";
                    $solicitudCateoDao = new SolicitudescateosDAO();
                    $solicitudCateo = $solicitudCateoDao->selectSolicitudescateos($solicitudCateo, "", $orden);
                    if ($solicitudCateo != "") {
                        $datos[$i][$countJuzgado]["total"] = count($solicitudCateo);
                        $datos[$i][$countJuzgado]["desJuzgado"] = $juzgado->getDesJuzgado();
                        $countJuzgado++;
                    }
                }
                if ($countJuzgado != 0) {
                    $result["type"] = "OK";
                    $result["data"] = $datos[$i];
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

    public function consultarApelacionInformacionBitacora($param = "") {
        $datos = [];
        if ($param != "" && is_array($param)) {
            $idUsuario = $_SESSION['cveUsuarioSistema'];
            $numeroCateo = $param["numeroCateo"];
            $anioCateo = $param["anioCateo"];

            $fechaRegistro = $param["fechaInicial"];
            if ($param["juzgadoProcedencia"] != "") {
                $param["idJuzgado"] = $param["juzgadoProcedencia"];
            } 
            if ($param["type"] == "0") {
                $param["in"] = "7,8,9,10,11";
            } else if ($param["type"] == "1") {
                $param["in"] = "7,8";
            } else if ($param["type"] == 2) {
                $param["in"] = "9,10";
            } else {
                $param["in"] = "7,8,9,10,11";
            }

            $apelacionDto = new ApelacioncateosDTO();
            $apelacionDao = new ApelacioncateosDAO();
            $resultados = $apelacionDao->consultaDetalleApelacionJuzgadoAdmon($param);
            if ($resultados != "") {
                $i = 0;
                foreach ($resultados as $value) {
                    $resultado = array();
                    #Obtenemos la Apelacion
                    $apelacionDto = new ApelacioncateosDTO();
                    $apelacionDao = new ApelacioncateosDAO();
                    $apelacionDto->setIdCateo($value);
                    $apelacionDto = $apelacionDao->selectApelacioncateos($apelacionDto);
                    if ($apelacionDto != "") {

                        $apelacionDto = $apelacionDto[0];

                        #Obtenemos el cateo
                        $cateoDto = new CateosDTO();
                        $cateoDao = new CateosDAO();
                        $cateoDto->setIdCateo($apelacionDto->getIdCateo());
                        $cateoDto = $cateoDao->selectCateos($cateoDto);
                        if ($cateoDto != "") {

                            $cateoDto = $cateoDto[0];
                            $datos[$i]["status"] = "OK";

                            $solCateoDto = new SolicitudescateosDTO();
                            $solCateoDao = new SolicitudescateosDAO();
                            $solCateoDto->setIdSolicitudCateo($cateoDto->getIdSolicitudCateo());
                            $solCateoDto = $solCateoDao->selectSolicitudescateos($solCateoDto);
                            if ($solCateoDto != "") {

                                $solCateoDto = $solCateoDto[0];

                                #Obtenemos el Juzgado
                                $juzgadoDto = new JuzgadosDTO();
                                $juzgadoDao = new JuzgadosDAO();
                                $juzgadoDto->setActivo("S");
                                $juzgadoDto->setCveJuzgado($solCateoDto->getCveJuzgadoDesahoga());
                                $juzgadoDto = $juzgadoDao->selectJuzgados($juzgadoDto);
                                if ($juzgadoDto != "") {

                                    $juzgadoDto = $juzgadoDto[0];

                                    $datos[$i]["IdSolicitudCateo"] = $solCateoDto->getIdSolicitudCateo();
                                    $juzgadorApelaDto = new JuzgadoresapelacateosDTO();
                                    $juzgadorApelaDao = new JuzgadoresapelacateosDAO();
                                    $juzgadorDto = new JuzgadoresDTO();
                                    $juzgadorDAO = new JuzgadoresDAO();
                                    $juzgadorApelaDto->setIdApelacionCateo($apelacionDto->getIdApelacionCateo());
                                    $juzgadorApelaDto->setActivo("S");
                                    $juzgadorApelaDto = $juzgadorApelaDao->selectJuzgadoresapelacateos($juzgadorApelaDto);
                                    if ($juzgadorApelaDto != "") {

                                        $idJuzgador = $juzgadorApelaDto[0]->getIdJuzgador();
                                        $juzgadorDto->setIdJuzgador($idJuzgador);
                                        $juzgadorDto = $juzgadorDAO->selectJuzgadores($juzgadorDto);
                                        if ($juzgadorDto != "") {

                                            $nombre = utf8_encode($juzgadorDto[0]->getTitulo() . " "
                                                    . $juzgadorDto[0]->getNombre() .
                                                    " " . $juzgadorDto[0]->getPaterno() . " "
                                                    . $juzgadorDto[0]->getMaterno());
                                            $datos[$i]['juez'] = $nombre;
                                        } else {
                                            $resultados['juez'] = "";
                                        }
                                    } else {
                                        $resultados['juez'] = "";
                                    }

                                    $datos[$i]["juzgado"] = $juzgadoDto->getDesJuzgado();
                                    $datos[$i]['idCateo'] = $apelacionDto->getIdApelacionCateo();
                                    $datos[$i]['idCateos'] = $apelacionDto->getIdCateo();
                                    $datos[$i]['carpetaInv'] = $solCateoDto->getCarpetaInv();
                                    $datos[$i]['numCateo'] = $cateoDto->getNumeroCateo();
                                    $datos[$i]['anioCateo'] = $cateoDto->getAnioCateo();
                                    $datos[$i]['numero'] = $solCateoDto->getNumero();
                                    $datos[$i]['anio'] = $solCateoDto->getAnio();

                                    $fechaHoraRegistro = explode(" ", utf8_encode($apelacionDto->getFechaRegistro()));
                                    $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                                    $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                                    $horaRegistro = $fechaHoraRegistro[1];
                                    $datos[$i]['fechaRegistro'] = $fechaRegistro . " " . $horaRegistro;
                                    if ($apelacionDto->getFechaAcuerdo() != "") {
                                        $fechaHoraRegistro = explode(" ", utf8_encode($apelacionDto->getFechaAcuerdo()));
                                        $fechaRegistro = explode("-", $fechaHoraRegistro[0]);
                                        $fechaRegistro = $fechaRegistro[2] . "/" . $fechaRegistro[1] . "/" . $fechaRegistro[0];
                                        $horaRegistro = $fechaHoraRegistro[1];
                                        $fechaRespuesta = $fechaRegistro . " " . $horaRegistro;
                                        $datos[$i]['fechaRespuesta'] = $fechaRespuesta;
                                        $espera = $this->longDate($apelacionDto->getFechaRegistro(), $apelacionDto->getFechaAcuerdo());
                                    } else {
                                        $datos[$i]['fechaRespuesta'] = "Sin Respuesta";
                                        $espera = "Sin Respuesta";
                                    }
                                    $datos[$i]["tiempoRespuesta"] = utf8_encode("$espera");
                                    $datos[$i]['cveEstatusCateo'] = $solCateoDto->getCveEstatusSolicitudCateo();

                                    $estatusDto = new EstatussolicitudescateosDTO();
                                    $estatusDao = new EstatussolicitudescateosDAO();
                                    $estatusDto->setCveEstatusSolicitudCateo($solCateoDto->getCveEstatusSolicitudCateo());
                                    $estatusDto = $estatusDao->selectEstatussolicitudescateos($estatusDto);

                                    if ($estatusDto != "") {
                                        $datos[$i]['estatusCateo'] = $estatusDto[0]->getDesEstatusSolicitudCateo();
                                    } else {
                                        $datos[$i]['estatusCateo'] = "";
                                    }
                                } else {
                                    $datos = ["status" => "Error"];
                                }
                            } else {
                                $datos = ["status" => "Error"];
                            }
                        } else {
                            $datos = ["status" => "Error"];
                        }

                        $i++;
                    } else {
                        $datos = ["status" => "Error"];
                    }
                }

                if ($datos["status"] != "Error") {
                    $resultado["datos"] = $datos;

                    $param["fields"] = " count(idCateo) as totalCount ";
                    $paginasDto = $apelacionDao->consultaDetalleApelacionJuzgadoAdmon($param);
                    $resultado["total"] = (int) $paginasDto[0];
                    $paginas = $this->getPaginas($paginasDto, $param);
                    $resultado["paginas"] = $paginas;
                    $resultado["status"] = "OK";
                } else {
                    $resultado = $datos;
                }
            } else {
                $resultado = ["status" => "Error"];
            }

            return $resultado;
        }
    }

    public function actualizarJuzgadorApelacion($idJuzgador, $idCateo, $type) {
        $mensajeErrorDatos = false;

        if (($idJuzgador == "") || ($idJuzgador == "0")) {
            $errorDatos = true;
            $mensajeErrorDatos .= " JUZGADOR NO VALIDO \n";
        }

        if (($idCateo == "") || ($idCateo == "0")) {
            $errorDatos = true;
            $mensajeErrorDatos .= " CATEO NO VALIDO \n";
        }

        if (($type == "") || ($type == "0")) {
            $errorDatos = true;
            $mensajeErrorDatos .= " TIPO DE SOLICITUD NO ESPECIFICA \n";
        }

        if (!$errorDatos) {
            $error = false;
            $resultado = array();

            #OBTENEMOS LA APELACION DE CATEO
            $solCateoDao = new SolicitudescateosDAO();
            $apelacionDto = new ApelacioncateosDTO();
            $apelacionDao = new ApelacioncateosDAO();
            $apelacionDto->setIdCateo($idCateo);
            $apelacionDto = $apelacionDao->selectApelacioncateos($apelacionDto);
            if ($apelacionDto != "") {
                $apelacionDto = $apelacionDto[0];
                $fechaActualizacion = $solCateoDao->selectFechaHoraMySql();
                #Obtenemos el cateo
                $cateoDto = new CateosDTO();
                $cateoDao = new CateosDAO();
                $cateoDto->setIdCateo($apelacionDto->getIdCateo());
                $cateoDto = $cateoDao->selectCateos($cateoDto);
                if ($cateoDto != "") {
                    $cateoDto = $cateoDto[0];
                } else {
                    $error = true;
                    $resultado = ["type" => "Error", "text" => "NO SE ENCONTRO EL CATEO"];
                }

                #Obtenemos la solicitud
                if (!$error) {
                    $solCateo = new SolicitudescateosDTO();
                    $solCateo->setIdSolicitudCateo($cateoDto->getIdSolicitudCateo());
                    $solCateo = $solCateoDao->selectSolicitudescateos($solCateo);
                    if ($solCateo != "") {
                        $solCateo = $solCateo[0];
                    } else {
                        $error = true;
                        $resultado = ["type" => "Error", "text" => "NO SE ENCONTRO EL CATEO"];
                    }
                }

                #Obtenemos el Juzgado
                if (!$error) {
                    $juzgadoDto = new JuzgadosDTO();
                    $juzgadoDao = new JuzgadosDAO();
                    $juzgadoDto->setCveJuzgado($solCateo->getCveJuzgadoDesahoga());
                    $juzgadoDto->setActivo("S");
                    $juzgadoDto = $juzgadoDao->selectJuzgados($juzgadoDto);
                    if ($juzgadoDto != "") {
                        $juzgadoDto = $juzgadoDto[0];
                    } else {
                        $error = true;
                        $resultado = ["type" => "Error", "text" => "NO SE ENCONTRO EL CATEO"];
                    }
                }

                #Obtenemos los medios de comunicacion de los Jueces
                if (!$error) {
                    $telefonos = $this->getInformacionJuez($apelacionDto, $idJuzgador);
                    if ($telefonos["type"] == "Error") {
                        $error = true;
                        $resultado = $telefonos;
                    }
                }

                #INICIAMOS TRANSACCION DE LA BASE DE DATOS
                $proveedor = new Proveedor('mysql', 'sigejupe');
                $proveedor->connect();
                $proveedor->execute("BEGIN");

                if (!$error) {

                    if ($type == "1") {
                        $param["accion"] = 358;
                        $resultado = $this->cambioJuez($apelacionDto, $idJuzgador, $fechaActualizacion, $telefonos["antJuez"]["idApelacion"], $proveedor);
                    } else if ($type == "2") {
                        $param["accion"] = 359;
                        $resultado = $this->cambioSecretario($apelacionDto, $idJuzgador, $fechaActualizacion, $proveedor);
                    } else {
                        $error = true;
                        $resultado = ["type" => "Error", "text" => "TIPO DE SOLICITUD NO ESPECIFICA"];
                    }

                    # SI la actualizacion de la apelacion es correcta
                    if ($resultado["type"] != "Error" && !$error) {

                        $fechaCateo = $fechaActualizacion;
                        $horaCateo = explode(' ', $fechaCateo);
                        $horaCateo = $horaCateo[1];
                        $nombre = strtoupper();

                        $cuerpoEmail = "<html>\n<head>\n<title>Poder Judicial del Estado de M&eacute;xico</title>\n</head>\n<body>\n";
                        $cuerpoEmail .= "<b>NOTIFICACI&Oacute;N</b>. En Toluca, M&eacute;xico, siendo las <b>" . $horaCateo . "</b> horas del d&iacute;a <b>" . $this->FechaLarga($fechaCateo) . "</b>, mediante el sistema inform&aacute;tico (SIGEJUPE),
                                        se realiz&oacute; el cambio de juzgador del <b>" . $juzgadoDto->getDesJuzgado() . "</b> de la solicitud de apelaci&oacute;n de cateo n&uacute;mero <b>" . str_pad($cateoDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $cateoDto->getAnioCateo() . "</b>, 
                                        la cual se encuentra en el referido sistema inform&aacute;tico para su consulta y atenci&oacute;n respectiva.</body>\n</html>\n\n";
                        $param["cuerpoEmail"] = $cuerpoEmail;

                        #Envio de Email al Juez Anterior
                        $param["toName"] = "Solicitud de Apelacion Cateo - REMPLAZO";
                        $resultadoEmail = $this->Email($telefonos["antJuez"]["email"], $param, $proveedor);
                        if ($resultadoEmail["type"] == "Error") {
                            $error = true;
                            $resultado = $resultadoEmail;
                        }
                        #Envio de Email al Juez Nuevo
                        $param["toName"] = "Solicitud de Apelacion Cateo - SUSTITUTO";
                        $resultadoEmailD = $this->Email($telefonos["nvoJuez"]["email"], $param, $proveedor);
                        if ($resultadoEmailD["type"] == "Error") {
                            $error = true;
                            $resultado = $resultadoEmail;
                        }
                    } else {
                        $error = true;
                    }

                    if (!$error) {
                        $param["observaciones"] = "MODIFICO JUEZ DE LA SOLICITUD DE CATEO: JUEZ ANTERIOR: " . $telefonos["antJuez"]["nombre"] . " JUEZ NUEVO: " . $telefonos["nvoJuez"]["nombre"];
                        $this->BitacoraMovimientos($param, $proveedor);
                    }

                    #Terminamos la Transaccion y se emite una respuesta
                    if (!$error) {
                        $proveedor->execute("COMMIT");
                        $resultado = array("type" => "OK",
                            "text" => "CAMBIO DE EXITOSO",
                            "type" => "OK",
                            "idApelacion" => $apelacionDto->getIdApelacionCateo(),
                            "idCateo" => $cateoDto->getIdCateo()
                        );
                    } else {
                        $proveedor->execute("ROLLBACK");
                    }
                }
                $proveedor->close();
            } else {
                $resultado = ["type" => "Error", "text" => "NO SE ENCONTRO LA SOLICITUD DE APELACION ESPECIFICADO"];
            }
        } else {
            $resultado = ["type" => "Error", "text" => "INFORMACION INCOMPLETA: " . $mensajeErrorDatos];
        }
        return $resultado;
    }

    /**
     * Realiza el cambio de juez de una apelacion de cateo
     * @param type $apelacionDto Dto con la informacion de la Apelacion 
     * @param type $idJUzgador Id del Nuevo Juzgador
     * @return array Informacion de los sucedido en el proceso
     */
    public function cambioJuez($apelacionDto, $idJuzgador, $fechaActualizacion, $idApelaJuzgador, $proveedor = null) {
        $resultado = array();
        if ($proveedor != null) {
            $UpdatejuzgadorDto = new JuzgadoresapelacateosDTO();
            $UpdatejuzgadorDao = new JuzgadoresapelacateosDAO();
            $UpdatejuzgadorDto->setActivo("S");
            $UpdatejuzgadorDto->setIdApelacionCateo($apelacionDto->getIdApelacionCateo());
            $UpdatejuzgadorDto->setIdJuzgador($idJuzgador);
            $UpdatejuzgadorDto->setFechaActualizacion($fechaActualizacion);
            $UpdatejuzgadorDto->setIdJuzgadorApelaCateo($idApelaJuzgador);

            $UpdatejuzgadorDto = $UpdatejuzgadorDao->updateJuzgadoresapelacateos($UpdatejuzgadorDto, $proveedor);
            if ($UpdatejuzgadorDto != "") {
                $resultado = ["type" => "OK"];
            } else {
                $resultado = ["type" => "Error", "text" => "NO SE PUDO HACER EL CAMBIO DE JUEZ"];
            }
        } else {
            $resultado = ["type" => "Error", "text" => "NO SE PUDO HACER EL CAMBIO DE JUEZ"];
        }
        return $resultado;
    }

    public function cambioSecretario($apelacionDto, $idJuzgador, $fechaActualizacion, $proveedor = null) {
        $resultado = array();
        if ($proveedor != null) {
            $UpdateapelacionDto = new ApelacioncateosDTO();
            $UpdateapelacionDao = new ApelacioncateosDAO();
            $UpdateapelacionDto->setIdApelacionCateo($apelacionDto->getIdApelacionCateo());
            $UpdateapelacionDto->setCveUsuarioSecretario($idJuzgador);
            $UpdateapelacionDto->setFechaActualizacion($fechaActualizacion);
            $UpdateapelacionDto = $UpdateapelacionDao->updateApelacioncateos($UpdateapelacionDto, $proveedor);
            if ($UpdateapelacionDto != "") {
                $resultado = ["type" => "OK"];
            } else {
                $resultado = ["type" => "Error", "text" => "NO SE PUDO HACER EL CAMBIO DE SECRETARIO"];
            }
        } else {
            $resultado = ["type" => "Error", "text" => "NO SE PUDO HACER EL CAMBIO DE SECRETARIO"];
        }
        return $resultado;
    }

    public function getInformacionJuez($apelacionDto, $idJuzgador) {
        #Verifica si existe un Juez para la Apelacion especificada
        $error = false;

        $result = array();
        $emailAnt = array();
        $telefonoAnt = array();
        $emailNuevo = array();
        $telefonoNuevo = array();

        $apelaCateoDao = new JuzgadoresapelacateosDAO();
        $medioAntJuezDao = new TelefonosjuzgadoresDAO();
        $juzgadorDao = new JuzgadoresDAO();

        $juezAntDto = new JuzgadoresapelacateosDTO();
        $juezAntDto->setIdApelacionCateo($apelacionDto->getIdApelacionCateo());
        $juezAntDto = $apelaCateoDao->selectJuzgadoresapelacateos($juezAntDto);

        if ($juezAntDto != "") {

            $juezAntDto = $juezAntDto[0];
            $result["type"] = "OK";
            $result["antJuez"]["idApelacion"] = $juezAntDto->getIdJuzgadorApelaCateo();

            #obtenemos medios de comunicacion del Juez
            $medioAntJuezDto = new TelefonosjuzgadoresDTO();

            $medioAntJuezDto->setActivo("S");
            $medioAntJuezDto->setIdJuzgador($juezAntDto->getIdJuzgador());
            $medioAntJuezDto = $medioAntJuezDao->selectTelefonosjuzgadores($medioAntJuezDto);
            if ($medioAntJuezDto != "") {
                foreach ($medioAntJuezDto as $medioant) {
                    if ($medioant->getEmail() != "") {
                        $emailAnt[] = $medioant->getEmail();
                    }
                }
                $result["antJuez"]["email"] = $emailAnt;
            } else {
                $error = true;
                $result = ["type" => "Error", "text" => "NO SE ENCONTRARON MEDIOS DE NOTIFICACION DEL JUEZ ANTERIOR"];
            }

            if (!$error) {
                #Obtenemos la Informacion del Juez
                $juzgadorAnt = new JuzgadoresDTO();
                $juzgadorAnt->setActivo("S");
                $juzgadorAnt->setIdJuzgador($juezAntDto->getIdJuzgador());
                $juzgadorAnt = $juzgadorDao->selectJuzgadores($juzgadorAnt);
                if ($juzgadorAnt != "") {
                    $juzgadorAnt = $juzgadorAnt[0];
                    $result["antJuez"]["nombre"] = utf8_encode($juzgadorAnt->getNombre() . " " .
                            $juzgadorAnt->getPaterno() . " " . $juzgadorAnt->getMaterno());
                    $result["antJuez"]["idJuez"] = $juzgadorAnt->getIdJuzgador();
                } else {
                    $error = true;
                    $result = ["type" => "Error", "text" => "NO SE ENCONTRARO LA INFORMACION DEL JUEZ ANTERIOR"];
                }
            }
        } else {
            $error = true;
            $result = ["type" => "Error", "text" => "LA APELACION NO TIENE UN JUEZ ASIGNADO"];
        }

        if (!$error) {
            #Buscamos los medios de comunicacion del nuevo Juez
            $medioNvoJuezDto = new TelefonosjuzgadoresDTO();
            $medioNvoJuezDto->setActivo("S");
            $medioNvoJuezDto->setIdJuzgador($idJuzgador);
            $medioNvoJuezDto = $medioAntJuezDao->selectTelefonosjuzgadores($medioNvoJuezDto);
            if ($medioNvoJuezDto != "") {
                foreach ($medioNvoJuezDto as $medionvo) {
                    if ($medionvo->getEmail() != "") {
                        $emailNuevo[] = $medionvo->getEmail();
                    }
                }
                $result["nvoJuez"]["email"] = $emailNuevo;
            } else {
                $error = true;
                $result = ["type" => "Error", "text" => "NO SE ENCONTRARON MEDIOS DE NOTIFICACION DEL NUEVO JUEZ"];
            }

            if (!$error) {
                #Obtenemos la Informacion del Juez
                $juzgadorNvo = new JuzgadoresDTO();
                $juzgadorNvo->setActivo("S");
                $juzgadorNvo->setIdJuzgador($idJuzgador);
                $juzgadorNvo = $juzgadorDao->selectJuzgadores($juzgadorNvo);

                if ($juzgadorNvo != "") {

                    $juzgadorNvo = $juzgadorNvo[0];
                    $result["nvoJuez"]["nombre"] = utf8_encode($juzgadorNvo->getNombre() . " " .
                            $juzgadorNvo->getPaterno() . " " . $juzgadorNvo->getMaterno());
                    $result["nvoJuez"]["idJuez"] = $juzgadorNvo->getIdJuzgador();
                } else {
                    $error = true;
                    $result = ["type" => "Error", "text" => "NO SE ENCONTRARO LA INFORMACION DEL NUEVO JUEZ"];
                }
            }
        }

        return $result;
    }

    public function consultarDetalleCateoApelacionWS($idCateo) {
        if ($idCateo != "" && $idCateo != 0) {
            $resultados = $this->consultaCateosDetalleApelacion($idCateo);

            if ($resultados["type"] == "OK") {
                $juzgadosDao = new JuzgadosDAO();
                $estatussolicitudesDao = new EstatussolicitudescateosDAO();
                $estatussolicitudesDto = new EstatussolicitudescateosDTO();
                $estatussolicitudesDto = $estatussolicitudesDao->selectEstatussolicitudescateos($estatussolicitudesDto);

                $tiposjuzgadoresDao = new TiposjuzgadoresDAO();
                $tiposjuzgadoresDto = new TiposjuzgadoresDTO();
                $tiposjuzgadoresDto = $tiposjuzgadoresDao->selectTiposjuzgadores($tiposjuzgadoresDto);
                $json = "";
                $json .= '{"type":"OK",';
                $json .= '"data":[';
                $x = 1;
                foreach ($resultados["data"] as $resultado) {

                    $json .= '{';
                    $json .= '"solicitudCateo":{';
                    $json .= '"idSolicitudCateo":"' . utf8_encode($resultado["solicitudCateo"]->getIdSolicitudCateo()) . '",';
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
                        if ($estatusSolicitud->getCveEstatusSolicitudCateo() == $resultado["solicitudCateo"]->getCveEstatusSolicitudCateo()) {
                            $desEstatusSolicitud = $estatusSolicitud->getDesEstatusSolicitudCateo();
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
                    $json .= '"qr":"' . $resultado["cateo"]->getQr() . '",';
                    $json .= '"firmaDigital":' . json_encode($resultado["cateo"]->getFirmaDigital()) . ',';
                    $json .= '"selloDigital":"' . utf8_encode($resultado["cateo"]->getSelloDigital()) . '",';
                    $json .= '"fechaRegistro":"' . utf8_encode($resultado["cateo"]->getFechaRegistro()) . '",';
                    $json .= '"fechaActualizacion":"' . utf8_encode($resultado["cateo"]->getFechaActualizacion()) . '",';
                    $json .= '"email":"' . ($resultado["cateo"]->getEmail()) . '",';
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
                            $json .= ', "documento":"' . $imagenesDto->getRuta() . '"';
                        } else {
                            $json .= ', "documento":""';
                        }
                    } else {
                        $json .= ', "documento":""';
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

                $json = json_decode($json, true);
                return $json;
            } else {
                $resultado["status"] = "Error";
                $resultado["text"] = "NO SE ENCONTRARON RESULTADOS";
                return ($resultado);
            }
        }
        $resultado["status"] = "Error";
        $resultado["text"] = "OCURRIO UN ERROR AL REALIZAR LA CONSULTA";
        return ($resultado);
    }

}

?>