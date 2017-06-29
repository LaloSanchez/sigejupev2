<?php

ini_set('max_execution_time', 300);
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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadoresordenes/JuzgadoresordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadoresordenes/JuzgadoresordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/personasordenes/PersonasordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/personasordenes/PersonasordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ministeriosresponsablesordenes/MinisteriosresponsablesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ministeriosresponsablesordenes/MinisteriosresponsablesordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");
include_once(dirname(__FILE__) . "/../../../tribunal/pdf/html2pdf.class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/selloDigital/Encryption.Class.php");

class ComprobanteOrdenesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function generaComprobante($idOrden = "", $cveFormato = "1") {
        #$cveFormato 1 = PFD , 2 = HTML
        #VALIDAOS LOS DATOS ENVIADOS
        if ($idOrden != "" && $idOrden > 0) {
            #INICAMOS PROCESO DE CONSULTA DE INFORMACION
            $error = false;

            #CONSULTAMOS INFORMACION DE LA ORDEN DE APREHENSION
            $OrdenesDao = new OrdenesDAO();
            $OrdenesDto = new OrdenesDTO();
            $OrdenesDto->setIdOrden($idOrden);
            $OrdenesDto = $OrdenesDao->selectOrdenes($OrdenesDto);
            if ($OrdenesDto != "" && count($OrdenesDto) > 0) {
                $OrdenesDto = $OrdenesDto[0];
            } else {
                $error = true;
                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DE LA ORDEN DE APREHENSION ESPECIFICADO");
            }

            if (!$error) {
                #CONSULTAMOS INFORMACION DE LA SOLICITUD DE LA ORDEN DE APREHENSION
                $SolicitudesordenesDao = new SolicitudesordenesDAO();
                $SolicitudesordenesDto = new SolicitudesordenesDTO();
                $SolicitudesordenesDto->setIdSolicitudOrden($OrdenesDto->getIdSolicitudOrden());
                $SolicitudesordenesDto = $SolicitudesordenesDao->selectSolicitudesordenes($SolicitudesordenesDto);
                if ($SolicitudesordenesDto != "" && count($SolicitudesordenesDto) > 0) {
                    $SolicitudesordenesDto = $SolicitudesordenesDto[0];
                    #VERIFICAMOS SI EL ARCHIVO DE  LA ORDEN DE APREHENSION YA EXISTE, SI EXISTE SOLO SE DESCARGA, SI NO EXISTE SE CREA PARA QUE SE DESCARGUE
                    if (file_exists("./../../../solicitudespdf/Respuesta_" . $OrdenesDto->getQr() . ".pdf")) {
                        $tmp = array("type" => "OK",
                            "text" => "SE GENERO EL PDF DE LA SOLICTUD CORRECTAMENTE",
                            "fileName" => "Respuesta_" . str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . '.pdf',
                            "file" => "Respuesta_" . $OrdenesDto->getQr() . ".pdf");
                    } else {
                        $html = "";
                        if (!$error) {

                            $html = "";
                            $html.="<page backtop=\"50mm\" "
                                    . "backbottom=\"20mm\" "
                                    . "backleft=\"20mm\" "
                                    . "backright=\"20mm\" "
                                    . "backimg=\"img/imgFondo.jpg\" "
                                    . "backimgx=\"center\" "
                                    . "style='font-size: 10pt'>";
                            #PAGE HEADER
                            $html.="<page_header>";
                            $html.="<table style='width: 90%; border: solid 0px black;'>";
                            $html.="<tr>";
                            $html.="<td colspan='2' style='text-align: center; width: 100%'><img src='../../../vistas/img/encabezado.jpg'></td>\n";
                            $html.=" </tr>";

                            $html.="<tr>";
                            $html.="<td colspan='2' style='text-align: center; width: 100%;font-size: 8pt'></td>";
                            $html.="</tr>";
                            $html.="<tr>";
                            $html.="<td colspan='2' style='text-align: center; width: 100%;font-size: 8pt'>M&oacute;dulo de Solicitudes de Ordenes de Aprehensi&oacute;n del Sistema de Gesti&oacute;n Judicial Penal (SIGEJUPE) del Poder Judicial del Estado de M&eacute;xico</td>";
                            $html.="</tr>";
                        }

                        if (!$error) {
                            #CONSULTAMOS FECHA Y HORA DEL SERVIDOR DE BASE DE DATOS
                            $SolicitudesordenesDao = new SolicitudesordenesDAO();
                            $FechaHora = $SolicitudesordenesDao->selectFechaHora();
                            if ($FechaHora != "") {
                                
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "NO SE PUDO OBTENER LA FECHA Y HORA DEL SERVIDOR");
                            }
                        }

                        if (!$error) {
                            $html.="<tr>";
                            $html.="<td style='text-align: right; width: 40%;font-size: 8pt'>Fecha y Hora de creaci&oacute;n de este archivo: " . $FechaHora . "</td>";
                            $html.="<td style='text-align: right; width: 60%;font-size: 10pt'>Pagina [[page_cu]] de [[page_nb]]</td>";
                            $html.=" </tr>";
                            $html.="<tr>";
                            $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                            $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero Orden de Aprehensi&oacute;n:</strong> " . str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . "</td>";

                            $html.="</tr>";
                            $html.="<tr>";
                            $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";
                            $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>Fecha de Solicitud:</strong> " . ucfirst(strtolower($this->FechaLarga($OrdenesDto->getFechaRegistro()))) . "</td>";
                            $html.="</tr>";
                            $html.="<tr>";
                            $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";

                            $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>Fecha de Respuesta:</strong> " . ucfirst(strtolower($this->FechaLarga($OrdenesDto->getFechaRespuesta()))) . "</td>";
                            $html.="</tr>";
                            $html.="<tr>";
                            $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";
                            $html.="<td style='width:60%; text-align: center'>&nbsp;</td>";
                            $html.="</tr>";
                            $html.="</table>";
                            $html.="</page_header>";
                            #TERMINA PAGE HEADER

                            $totalCadena = strlen(trim($OrdenesDto->getSelloDigital()));
                            $pag = ceil($totalCadena / 120);

                            #PAGE FOOTER
                            $html.="<page_footer>";
                            $html.="<table style='width: 100%; '>";
                            $html.="<tr>";
                            $html.="<td style='width:40%; text-align: center; font-size: 1pt'>Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;</td>";
                            $html.="</tr>";
                            $html.="<tr>";
                            $html.="<td style='text-align: left;    width: 100%;font-size: 8pt'>Firma Electrónica: </td>";
                            $html.="</tr>";
                            for ($index = 0; $index < $pag; $index++) {
                                $html.="<tr>";
                                $html.="<td style='text-align: left;    width: 100%;font-size: 8pt'>" . Trim(substr($OrdenesDto->getSelloDigital(), ($index * 120), 120)) . "</td>";
                                $html.="</tr>";
                            }
                            $html.="</table>";
                            $html.="</page_footer>";
                            #TERMINA PAGE FOOTER

                            $html.= "<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0'>";
                            $html.="<tr>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="</tr>";
                        }

                        if (!$error) {
                            #DATOS JUZGADOS
                            $html.="<tr>";
                            $html.="<td style='width:100%; text-align: left; font-size: 10pt;' colspan='4' ><strong>Juzgado que resuelve: </strong>";
                            $JuzgadosDao = new JuzgadosDAO();
                            $JuzgadosDto = new JuzgadosDTO();
                            $JuzgadosDto->setCveJuzgado($SolicitudesordenesDto->getCveJuzgadoDesahoga());
                            $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                            if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                                $JuzgadosDto = $JuzgadosDto[0];
                                $html.="" . $JuzgadosDto->getDesJuzgado() . "";
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DEL JUZGADO DE LA SOLICITUD");
                            }
                            $html.="</td>";
                            $html.="</tr>";
                        }

                        if (!$error) {
                            if (((int) $SolicitudesordenesDto->getNumero() > 0)) {
                                $html.="<tr>";
                                $html.="<td style='width:100%; text-align: left; font-size: 10pt;' colspan='4'><strong>N&uacute;mero Causa:</strong>";
                                $html.=$SolicitudesordenesDto->getNumero() . "/" . $SolicitudesordenesDto->getAnio() . " <strong>del</strong> ";

                                $JuzgadosCausaDao = new JuzgadosDAO();
                                $JuzgadosCausaDto = new JuzgadosDTO();
                                $JuzgadosCausaDto->setCveJuzgado($SolicitudesordenesDto->getCveJuzgadoDesahoga());
                                $JuzgadosCausaDto = $JuzgadosCausaDao->selectJuzgados($JuzgadosCausaDto);
                                if ($JuzgadosCausaDto != "" && count($JuzgadosCausaDto) > 0) {
                                    $JuzgadosCausaDto = $JuzgadosCausaDto[0];
//                        print_r($JuzgadosCausaDto);
//                        echo "<br><br>";
                                    $html.="" . $JuzgadosCausaDto->getDesJuzgado() . "";
                                } else {
                                    $error = true;
                                    $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DEL JUZGADO DE LA CARPETA JUDICIAL");
                                }
                                $html.="</td>";
                                $html.="</tr>";
                            }

                            $html.="<tr>";
                            $html.="<td style='width:100%; text-align: left' colspan='4'><strong>Carpeta de investigaci&oacute;n: </strong>";
                            $html.=$SolicitudesordenesDto->getCarpetaInv() . "</td>";
                            $html.="</tr>";

                            $html.="<tr>";
                            $html.="<td style='width:100%; text-align: left' colspan='4'><strong>NUC: </strong>";
                            $html.=$SolicitudesordenesDto->getNuc() . "</td>";
                            $html.="</tr>";

                            $html.="<tr>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="</tr>";

                            $html.="<tr>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="</tr>";
                            #TERMINA DATOS JUZGADOS
                        }

                        if (!$error) {
                            #CONSULTAMOS RELACION SOLICITUD ORDEN DE APREHENSION - JUZGADOR
                            $JuzgadoresordenesDao = new JuzgadoresordenesDAO();
                            $JuzgadoresordenesDto = new JuzgadoresordenesDTO();
                            $JuzgadoresordenesDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden());
                            $JuzgadoresordenesDto = $JuzgadoresordenesDao->selectJuzgadoresordenes($JuzgadoresordenesDto);
                            if ($JuzgadoresordenesDto != "" && count($JuzgadoresordenesDto) > 0) {
                                $JuzgadoresordenesDto = $JuzgadoresordenesDto[0];
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO RELACION ENTRE LA SOLICITUD DE LA ORDEN DE APREHENSION Y EL JUZGADOR");
                            }
                        }

                        if (!$error) {
                            #CONSULTAMOS LA INFORMACION DEL JUEZ 
                            $JuzgadoresDao = new JuzgadoresDAO();
                            $JuzgadoresDto = new JuzgadoresDTO();
                            $JuzgadoresDto->setIdJuzgador($JuzgadoresordenesDto->getIdJuzgador());
                            $JuzgadoresDto = $JuzgadoresDao->selectJuzgadores($JuzgadoresDto);
                            if ($JuzgadoresDto != "" && count($JuzgadoresDto) > 0) {
                                $JuzgadoresDto = $JuzgadoresDto[0];
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DE EL JUEZ");
                            }
                        }

                        if (!$error) {
                            #CONSULTAMOS TIPOS DE JUECES
                            $TiposjuzgadoresDao = new TiposjuzgadoresDAO();
                            $TiposjuzgadoresDto = new TiposjuzgadoresDTO();
                            $TiposjuzgadoresDto->setCveTipoJuzgador($JuzgadoresDto->getCveTipoJuzgador());
                            $TiposjuzgadoresDto = $TiposjuzgadoresDao->selectTiposjuzgadores($TiposjuzgadoresDto);
                            if ($TiposjuzgadoresDto != "" && count($TiposjuzgadoresDto) > 0) {
                                $TiposjuzgadoresDto = $TiposjuzgadoresDto[0];
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DE EL JUEZ");
                            }
                        }

                        if (!$error) {
                            #CONSULTAMOS GENEROS
                            $GenerosDao = new GenerosDAO();
                            $GenerosDto = new GenerosDTO();
                            $GenerosDto = $GenerosDao->selectGeneros($GenerosDto);
                            if ($GenerosDto != "" && count($GenerosDto) > 0) {
                                
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DE GENEROS");
                            }
                        }

                        if (!$error) {
                            $html.="<tr>";
                            $html.="<td colspan='4'>";
                            $html.="<div style='text-align: center; border: 1px ;'><strong>ORDEN DE APREHENSI&Oacute;N ";
                            if ($OrdenesDto->getCveRespuestaSolicitudOrden() == "1") {
                                $html.="NEGADA ";
                            }

                            $html.= "</strong></div>";
                            $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 1px black;'>";
                            $html.="<tr>";
                            $html.="<td style='width: 100%; text-align: justify'>El " . $JuzgadoresDto->getTitulo() . " " . $JuzgadoresDto->getNombre() . " " . $JuzgadoresDto->getPaterno() . " " . $JuzgadoresDto->getMaterno() . ", juez de " . $TiposjuzgadoresDto->getDesTipoJuzgador() . " del " . $JuzgadosDto->getDesJuzgado() . ", ";

                            switch ($OrdenesDto->getCveRespuestaSolicitudOrden()) {
                                case 1:
                                    $html.="NEG&Oacute; ";
                                    break;
                                case 2:
                                    $html.="AUTORIZ&Oacute; ";
                                    break;
                                case 3:
                                    $html.="AUTORIZ&Oacute; PARCIALMENTE ";
                                    break;
                            }

                            $listaUsuarios = "";
                            try {
                                $UsuarioCliente = new UsuarioCliente();
                                $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($SolicitudesordenesDto->getCveUsuario()), true);
                            } catch (Exception $ex) {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "ERROR AL CONSUMIR WEB SERVICE DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
                            }
                            $nombreMP = "NO ENCONTRADO EN GESTION";
                            if ($listaUsuarios != "") {
                                $nombreMP = $listaUsuarios["data"][0]["nombre"] . " " . $listaUsuarios["data"][0]["paterno"] . " " . $listaUsuarios["data"][0]["materno"];
                                $nombreMP = strtoupper($nombreMP);
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
                            }
                            $html.="la Orden de Aprehensi&oacute;n solicitado por el LIC. " . $nombreMP . " Agente del Ministerio P&uacute;blico de la Procuradur&iacute;a General de Justicia del Estado, en los t&eacute;rminos siguientes:</td>";
                            $html.="</tr>";



                            $html.="</table>";
                            $html.="</td>";
                            $html.="</tr>";

                            $html.="<tr>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="</tr>";

                            $html.="<tr>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="</tr>";
                        }

                        if (!$error) {
                            if ($OrdenesDto->getCveRespuestaSolicitudOrden() != 1) {
                                $html.="<tr>";
                                $html.="<td colspan='4'><div style='text-align: center; border: 1px ;'><strong>FINALIDAD</strong></div></td>";
                                $html.="</tr>";
                                $html.="<tr>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="</tr>";


                                #OBTENEMOS PERSONAS
                                $PersonasDao = new PersonasordenesDAO();
                                $PersonasDto = new PersonasordenesDTO();
                                $PersonasDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden());
                                $PersonasDto->setCveOrigen("2");
                                $PersonasDto = $PersonasDao->selectPersonasordenes($PersonasDto);
                                if ($PersonasDto != "" && count($PersonasDto) > 0) {
                                    $html.="<tr>";
                                    $html.="<td colspan='4'>";
                                    $html.="<div style='text-align: center'><strong>APREHENDER A LA";
                                    if (count($PersonasDto) > 1) {
                                        $html.="S";
                                    }
                                    $html.=" PERSONA";
                                    if (count($PersonasDto) > 1) {
                                        $html.="S";
                                    }
                                    $html.=" SIGUIENTE";
                                    if (count($PersonasDto) > 1) {
                                        $html.="S";
                                    }
                                    $html.=":</strong></div></td></tr></table>";
                                    $countPersonas = 1;
                                    foreach ($PersonasDto as $Persona) {
                                        $detGenero = "NO ESPECIFICADO";
                                        foreach ($GenerosDto as $Genero) {
                                            if ($Genero->getCveGenero() == $Persona->getCveGenero()) {
                                                $detGenero = $Genero->getDesGenero();
                                                break;
                                            }
                                        }
                                        $html.="<p><strong>$countPersonas.- Nombre: </strong>" . $Persona->getNombre() . " " . $Persona->getPaterno() . " " . $Persona->getMaterno() . " ( " . $detGenero . ") </p>";
                                        $html.="<p><strong>Domicilio: </strong>" . $Persona->getDomicilio() . "</p>";
                                    }
                                    $html.="<table cellpadding='2' cellspacing='0' style='width: 100%;' ><tr>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="</tr>";

                                    $html.="<tr>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="</tr>";
                                }

                                #OBTENEMOS DATOS DE LA PRACTICA
                                /* if ($OrdenesDto->getFechaPractica() != "" || $OrdenesDto->getHorasPractica() != "") {
                                    $html.="<tr>";
                                    $html.="<td colspan='4'>";
                                    $html.="<div style='text-align: center; border: 1px ;'><strong>PR&Aacute;CTICA</strong></div>";
                                    $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 1px black;'>";
                                    if ($OrdenesDto->getFechaPractica() != "" && ($OrdenesDto->getHorasPractica() == "" || $OrdenesDto->getHorasInforme() == "0")) {
                                        $html.="<tr>";
                                        $html.="<td style='width: 50%; text-align: center'><b>Fecha</b></td>";
                                        $html.="<td style='width: 50%; text-align: center'><b>Hora</b></td>";
                                        $html.="</tr>";
                                        $html.="<tr>";
                                        $html.="<td style='width: 50%; text-align: center'><b>" . $this->cambiaf_a_normal($OrdenesDto->getFechaPractica()) . "</b></td>";
                                        $html.="<td style='width: 50%; text-align: center'><b>" . $OrdenesDto->getHoraPractica() . "</b></td>";
                                        $html.="</tr>";
                                    } else {
                                        $html.="<tr>";
                                        $html.="<td style='width: 50%; text-align: right'><b>Plazo m&aacute;ximo en horas: </b></td>";
                                        $html.="<td style='width: 50%; text-align: left'><b>" . $OrdenesDto->getHorasPractica() . "</b></td>";
                                        $html.="</tr>";
                                    }

                                    $html.="</table>";
                                    $html.="</td>";
                                    $html.="</tr>";

                                    $html.="<tr>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="</tr>";

                                    $html.="<tr>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="</tr>";
                                  } */

                                #OBTENEMOS DATOS DE EL INFORME
                                /* if ($OrdenesDto->getFechaInforme() != "" || $OrdenesDto->getHorasInforme() != "") {
                                    $html.="<tr>";
                                    $html.="<td colspan='4'>";
                                    $html.="<div style='text-align: center; border: 1px ;' ><strong>INFORME</strong></div>";
                                    $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 1px black;'>";
                                    $html.="<tr>";
                                    $html.="<td colspan='2' style='width: 100%; text-align: left'>Se deber&aacute; emitir un informe sobre la ejecuci&oacute;n que se brinda a esta orden de aprehensi&oacute;n, preferentemente, por el Agente del Ministerio P&uacute;blico solicitante.</td>";
                                    $html.="</tr>";
                                    if ($OrdenesDto->getFechaInforme() != "" && ($OrdenesDto->getHorasInforme() == "" || $OrdenesDto->getHorasInforme() == "0")) {
                                        $html.="<tr>";
                                        $html.="<td style='width: 50%; text-align: center'>Fecha</td>";
                                        $html.="<td style='width: 50%; text-align: center'>Hora</td>";
                                        $html.="</tr>";
                                        $html.="<tr>";
                                        $html.="<td style='width: 50%; text-align: center'><b>" . $this->cambiaf_a_normal($OrdenesDto->getFechaInforme()) . "</b></td>";
                                        $html.="<td style='width: 50%; text-align: center'><b>" . $OrdenesDto->getHoraInforme() . "</b></td>";
                                        $html.="</tr>";
                                    } else {
                                        $html.="<tr>";
                                        $html.="<td style='width: 50%; text-align: right'><b>Plazo m&aacute;ximo en horas:</b></td>";
                                        $html.="<td style='width: 50%; text-align: left'><b>" . $OrdenesDto->getHorasInforme() . "</b></td>";
                                        $html.="</tr>";
                                    }
//
                                    $html.="</table>";
                                    $html.="</td>";
                                    $html.="</tr>";

                                    $html.="<tr>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="</tr>";

                                    $html.="<tr>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="</tr>";
                                  } */
                            }
                        }

                        if (!$error) {
                            #ORDEN DE APREHENSION NEGADO
                            if ($OrdenesDto->getCveRespuestaSolicitudOrden() == "1" || $OrdenesDto->getCveRespuestaSolicitudOrden() == "3") {
                                $html.="<tr>";
                                $html.="<td colspan='4'>";
                                $html.="<div style='text-align: center; border: 1px ;'><strong>AUTORIZACI&Oacute;N NEGADA</strong></div>";
                                $html.="</td>";
                                $html.="</tr></table>";
                                $negada = preg_replace("/\n/", "<br>", $OrdenesDto->getNegada());
                                $negada = preg_replace("/\'/", "\"", $negada);
                                $negada = strip_tags($negada, "<p>");
                                $total = strlen(trim($negada));
                                if ($total >= 1) {
                                    /* $paginas = ceil($total / 2258);
                                      for ($index = 0; $index < $paginas; $index++) {
                                      $text = Trim(substr($negada, ($index * (2258)), (2258)));
                                      $html.="<tr>\n";
                                      $html.="<td colspan='4' style='width:100%; text-align: justify;font-size: 10pt'>\n
                                      <p>" . $text . "</p>\n
                                      </td>\n";
                                      $html.="</tr>\n";
                                      } */
                                    $html .= "<p>$negada</p>";
                                }
                                $html.="<table ><tr>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="</tr>";

                                $html.="<tr>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="</tr>";
                            }
                        }

                        if (!$error) {
                            #LEYENDA  DE LA RESPUESTA DEL JUEZ
                            if ($OrdenesDto->getCveRespuestaSolicitudOrden() != "") {
                                $html.="<tr>";
                                $html.="<td colspan='4'>";
                                $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 1px black;'>";
                                $html.="<tr>";
                                if ($OrdenesDto->getCveRespuestaSolicitudOrden() == 3) {
                                    $html.="<td  style='width: 100%; text-align: justify'>La presente orden de aprehensi&oacute;n y su negativa parcial, se sustenta en la resoluci&oacute;n siguiente: </td>";
                                }
                                if ($OrdenesDto->getCveRespuestaSolicitudOrden() == 2) {
                                    $html.="<td style='width: 100%; text-align: justify'>La presente orden de aprehensi&oacute;n se sustenta en la resoluci&oacute;n siguiente:</td>";
                                }
                                if ($OrdenesDto->getCveRespuestaSolicitudOrden() == 1) {
                                    $html.="<td style='width: 100%; text-align: justify'>La negativa de orden de aprehensi&oacute;n se sustenta en la resoluci&oacute;n siguiente:</td>";
                                }

                                $html.="</tr>";
                                $html.="</table>";
                                $html.="</td>";
                                $html.="</tr>";

                                $html.="<tr>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="</tr>";

                                $html.="<tr>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="</tr>";
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO LA CLAVE DE LA RESPUESTA DEL JUEZ");
                            }
                        }

                        if (!$error) {
                            #RESOLUCION DE LA RESPUESTA DE LA ORDEN DE APREHENSION
                            if ($OrdenesDto->getConcedida() != "") {
                                $html.="<tr>";
                                $html.="<td colspan='4'>";
                                $html.="<div style='text-align: center; border: 1px ;'><strong>RESOLUCI&Oacute;N</strong></div>";
                                $html.="</td>";
                                $html.="</tr></table>";
                                $concedida = preg_replace("/\n/", "<br>", $OrdenesDto->getConcedida());
                                $concedida = preg_replace("/\'/", "\"", $concedida);
                                $concedida = strip_tags($concedida, "<p>");
                                $total = strlen(trim($concedida));
                                if ($total >= 1) {
                                    /* $paginas = ceil($total / 2258);

                                      for ($index = 0; $index < $paginas; $index++) {
                                      $text = Trim(substr($concedida, ($index * (2258)), (2258)));
                                      $html.="<tr>\n";
                                      $html.="<td  colspan='4' style='width:100%; text-align: justify;font-size: 8pt'>\n
                                      <p>" . $text . "</p>\n
                                      </td>\n";
                                      $html.="</tr>\n";
                                      } */
                                    $html .= "<p>$concedida</p>";
                                }
                                $html.="<table  style='width: 100%; border: solid 0px black;'><tr>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="</tr>";

                                $html.="<tr>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="<td style='width:25%;'>&nbsp;</td>";
                                $html.="</tr>";
                            }
                        }
                        if (!$error) {
                            #LISTA DE MINISTERIOS PUBLICOS RESPONSABLES
                            if ($OrdenesDto->getCveRespuestaSolicitudOrden() != "1") {
                                $MinisteriosresponsablesDao = new MinisteriosresponsablesordenesDAO();
                                $MinisteriosresponsablesDto = new MinisteriosresponsablesordenesDTO();
                                $MinisteriosresponsablesDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden());
                                $MinisteriosresponsablesDto = $MinisteriosresponsablesDao->selectMinisteriosresponsablesordenes($MinisteriosresponsablesDto);
                                if ($MinisteriosresponsablesDto != "" && count($MinisteriosresponsablesDto) > 0) {
                                    $html.="<tr>";
                                    $html.="<td colspan='4'>";
                                    $html.="<div style='text-align: center'><strong>M.P. RESPONSABLE";
                                    if (count($MinisteriosresponsablesDto) > 1) {
                                        $html.="S";
                                    }
                                    $html.=":</strong></div>";
                                    $html.="<table border='1' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 1px black;'>";
                                    $html.="<tr>";
                                    $html.="<td style='width: 100%; text-align: center'>Nombre</td>";
                                    $html.="</tr>";
                                    foreach ($MinisteriosresponsablesDto as $MinisterioResponsable) {
                                        $html.="<tr>";
                                        $html.="<td style='width: 100%; text-align: left'>" . $MinisterioResponsable->getNombre() . " " . $MinisterioResponsable->getPaterno() . " " . $MinisterioResponsable->getMaterno() . "</td>";
                                        $html.="</tr>";
                                    }
                                    $html.="</table>";
                                    $html.="</td>";
                                    $html.="</tr>";

                                    $html.="<tr>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="</tr>";

                                    $html.="<tr>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="<td style='width:25%;'>&nbsp;</td>";
                                    $html.="</tr>";
                                }
                            }
                        }

                        if (!$error) {
                            #DATOS DE EL JUEZ AL FINAL DEL DOCUMENTO
                            $html.="<tr>";
                            $html.="<td text-align: right;font-size: 10pt' colspan='3'>As&iacute; lo resolvi&oacute; el: </td>";
                            $html.="</tr>";
                            $html.="<tr>";
                            $html.="<td text-align: left;font-size: 10pt' colspan='4'>" . $JuzgadoresDto->getTitulo() . " " . $JuzgadoresDto->getNombre() . " " . $JuzgadoresDto->getMaterno() . " " . $JuzgadoresDto->getPaterno() . ", JUEZ DE " . $TiposjuzgadoresDto->getDesTipoJuzgador() . " del " . $JuzgadosDto->getDesJuzgado() . "</td>";
                            $html.="</tr>";

                            $html.="<tr>";
                            $html.="<td>&nbsp;</td>";
                            $html.="</tr>";

                            $html.="<tr>";
                            $html.="<td>&nbsp;</td>";
                            $html.="</tr>";
                        }

                        if (!$error) {
                            #QR Y SELLO DIGITAL
                            $html.="<tr>";
                            $html.="<td style='width:25%; text-align: center' rowspan='1'><qrcode value='" . $OrdenesDto->getQr() . "' ec='L' style='width: 30mm; border: 0px solid #000000;'></qrcode></td>"; //$html.="<img src='generaCodigo.php?referencia=000001/13' width='100%' height='50px'>";
                            $html.="<td style='width:75%; text-align: center' colspan='3'>";
                            $html.="<table border='0' >";

                            $html.="<tr>";
                            $html.="<td style='text-align: left;'>Firma Electrónica:</td>";
                            $html.="</tr>";

                            $totalCadena = strlen(trim($OrdenesDto->getSelloDigital()));
                            $pag = ceil($totalCadena / 70);

                            for ($index = 0; $index < $pag; $index++) {
                                $html.="<tr>";
                                $html.="<td style='text-align: left;    width: 20%;font-size: 8pt'>" . Trim(substr($OrdenesDto->getSelloDigital(), ($index * 70), 70)) . "</td>";
                                $html.="</tr>";
                            }

                            $converter = new Encryption;
                            $converter->setPrivateKey($OrdenesDao->extraeLlavePrivada("selloDigital/keystoreTSJEDOMEX.key.pem"));
                            $strCadenaOrig = $converter->decode($OrdenesDto->getSelloDigital());
                            $strCadenaOrigAux = "||";
                            $arrayCadenaOrig = explode("|", $strCadenaOrig);


                            for ($index = 0; $index < count($arrayCadenaOrig); $index++) {
                                if ($index > 2 && $index < (count($arrayCadenaOrig) - 3)) {
                                    $strCadenaOrigAux .= $arrayCadenaOrig[$index] . "|";
                                }
                            }
                            $strCadenaOrigAux .= "|";

                            $totalCadena = strlen(trim($strCadenaOrigAux));
                            $pag = ceil($totalCadena / 70);
                            $html.="<tr>";
                            $html.="<td>&nbsp;</td>";
                            $html.="</tr>";


                            $html.="<tr>";
                            $html.="<td style='text-align: left;'>Cadena Original:</td>";
                            $html.="</tr>";
                            for ($index = 0; $index < $pag; $index++) {

                                $html.="<tr>";
                                $html.="<td style='text-align: left; width: 20%;font-size: 8pt'  >" . Trim(substr($strCadenaOrigAux, ($index * 70), 70)) . "</td>";
                                $html.="</tr>";
                            }

                            $html.="</table>";
                            $html.="</td>";
                            $html.="</tr>";


                            $html.="</table>";
                            $html.="</page>";
                        }

//            echo $html;
                        if (!$error && $html != "") {
                            #GENERAMOS EL ARCHIVO PDF EN BASE AL CODIGO HTML ANTERIOR
                            date_default_timezone_set("America/Mexico_City");
                            ob_start();
                            echo utf8_encode($html);
                            $content = ob_get_clean();
                            $qr = str_replace("/", "_", $OrdenesDto->getQr());
                            $name = "Respuesta_" . $qr . ".pdf";
                            $ruta = "/solicitudespdf/" . $name;
                            $generaPDF = false;

                            try {
                                // init HTML2PDF
                                $html2pdf = new HTML2PDF('P', 'A4', 'es', true, 'UTF-8', array(0, 0, 0, 0));
                                $html2pdf->pdf->SetAuthor("PODER JUDICIAL DEL ESTADO DE MEXICO");
                                $html2pdf->writeHTML($content);
                                $html2pdf->Output("./../../../solicitudespdf/" . $name, 'F');
                                $generaPDF = true;
                            } catch (HTML2PDF_exception $e) {
                                $generaPDF = false;
                            }

                            if ($generaPDF) {
                                $tmp = array("type" => "OK",
                                    "text" => "SE GENERO EL PDF DE LA RESPUESTA DE LA ORDEN DE APREHENSI&Oacute;N CORRECTAMENTE",
                                    "fileName" => "Respuesta_" . str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . '.pdf',
                                    "file" => "Respuesta_" . $qr . ".pdf");
                            } else {
                                $tmp = array("type" => "Error",
                                    "text" => "ERROR AL GENERAL EL PDF DE LA  SOLICITUD. DETALLE DEL ERROR:" . $e,
                                    "file" => "");
                            }
                        }
                    }
                } else {
                    $error = true;
                    $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DE LA SOLICITUD DE LA ORDEN DE APREHENSION");
                }
            }
        } else {
            $tmp = array("type" => "Error", "text" => "IDENTIFICADOR DE LA ORDEN DE APREHENSION NO VALIDO");
        }
        return $tmp;
    }

    public function cambiaf_a_normal($fecha) {
        @list( $anio, $mes, $dia) = explode("-", $fecha);
        return $dia . "/" . $mes . "/" . $anio;
    }

    public function FechaLarga($fecha) {
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

        return $dia . " de " . $mes . " de " . $anio . " a las: " . $hora . " hrs.";
    }

}

//
//@$idOrden = "177";
//
//$ComprobanteCateosController = new ComprobanteCateosController();
//print_r($ComprobanteCateosController->generaComprobante($idOrden));
?>
