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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/respuestamuestra/RespuestamuestraDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/respuestamuestra/RespuestamuestraDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesmuestras/SolicitudesmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudesmuestras/SolicitudesmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imputadosmuestras/ImputadosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imputadosmuestras/ImputadosmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tomamuestras/TomamuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tomamuestras/TomamuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/muestras/MuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/muestras/MuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ofendidosmuestras/OfendidosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ofendidosmuestras/OfendidosmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tutoresofendidosmuestras/TutoresofendidosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tutoresofendidosmuestras/TutoresofendidosmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitosmuestras/DelitosmuestrasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitosmuestras/DelitosmuestrasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/terminos/TerminosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/terminos/TerminosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imagenes/ImagenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/documentosimg/DocumentosimgDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/documentosimg/DocumentosimgDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");

include_once(dirname(__FILE__) . "/SolicitudesmuestrasController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/pdf/html2pdf.class.php");

class ComprobanteSolicitudesmuestrasController {

    private $proveedor;

    public function __construct() {
        
    }

    public function generaComprobante($idMuestra = "", $cveFormato = "1") {
        #$cveFormato 1 = PFD , 2 = HTML
        #VALIDAOS LOS DATOS ENVIADOS
        if ($idMuestra != "" && $idMuestra > 0) {
            #INICAMOS PROCESO DE CONSULTA DE INFORMACION
            $error = false;

            #CONSULTAMOS INFORMACION DE LA TOMA DE MUESTRA
            $RspMuestraDao = new RespuestamuestraDAO();
            $RspMuestraDto = new RespuestamuestraDTO();
            $RspMuestraDto->setIdMuestra($idMuestra);
            $RspMuestraDto = $RspMuestraDao->selectRespuestamuestra($RspMuestraDto);
            if ($RspMuestraDto != "" && count($RspMuestraDto) > 0) {
                $RspMuestraDto = $RspMuestraDto[0];
            } else {
                $error = true;
                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DE LA TOMA DE MUESTRA ESPECIFICADA");
            }

            if (!$error) {
                #CONSULTAMOS INFORMACION DE LA SOLICITUD DE TOMA DE MUESTRA
                $SolicitudesmuestrasDao = new SolicitudesmuestrasDAO();
                $SolicitudesmuestrasDto = new SolicitudesmuestrasDTO();
                $SolicitudesmuestrasDto->setIdSolicitudMuestra($RspMuestraDto->getIdSolicitudMuestra());
                $SolicitudesmuestrasDto = $SolicitudesmuestrasDao->selectSolicitudesmuestras($SolicitudesmuestrasDto);
                if ($SolicitudesmuestrasDto != "" && count($SolicitudesmuestrasDto) > 0) {
                    $SolicitudesmuestrasDto = $SolicitudesmuestrasDto[0];
                } else {
                    $error = true;
                    $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DE LA SOLICITUD DE TOMA DE MUESTRAS");
                }
            }

            #VERIFICAMOS SI EL ARCHIVO DE LA TOMA DE MUESTRA YA EXISTE, SI EXISTE SOLO SE DESCARGA, SI NO EXISTE SE CREA PARA QUE SE DESCARGUE
            if (file_exists("./../../../solicitudespdf/" . $RspMuestraDto->getQr() . ".pdf")) {
                $tmp = array("type" => "OK",
                    "text" => "SE GENERO EL PDF DE LA SOLICTUD CORRECTAMENTE",
                    "fileName" => str_pad($RspMuestraDto->getNumeroMuestra(), 6, '0', STR_PAD_LEFT) . "/" . $RspMuestraDto->getAnioMuestra() . '.pdf',
                    "file" => $RspMuestraDto->getQr() . ".pdf");
            } else {
                $html = "";
                if (!$error) {
                    $html.="<page backtop=\"55mm\" "
                            . "backbottom=\"20mm\" "
                            . "backleft=\"20mm\" "
                            . "backright=\"20mm\" "
                            . "backimg=\"img/imgFondo.jpg\" "
                            . "backimgx=\"center\" "
                            . "style='font-size: 10pt'>\n";

                    $html.="<page_header>\n";
                    $html.="<table style='width: 90%; border: solid 0px black;'>\n";
                    $html.="<tr>\n";
                    $html.="<td colspan='2' style='text-align: center; width: 100%'><img src='../../../vistas/img/encabezado.jpg'></td>\n";
                    $html.="</tr>\n";
                    $html.="<tr>\n";
                    $html.="<td style='width:100%; text-align: center' rowspan='1' colspan='2'>SOLICITUD DE ACTOS DE INVESTIGACI&Oacute;N <br /> QUE REQUIEREN AUTORIZACI&Oacute;N JUDICIAL (TOMA DE MUESTRAS) EN TR&Aacute;MITE</td>\n";
                    $html.="</tr>\n";
                    $html.="<tr>\n";
                    $html.="<td colspan='2' style='text-align: center; width: 100%;font-size: 8pt'></td>\n";
                    $html.="</tr>\n";
                    $html.="<tr>\n";
                    $html.="<td colspan='2' style='text-align: center; width: 100%;font-size: 8pt'>M&oacute;dulo de Solicitudes de Actos de Investigaci&oacute;n que requieren Autorizaci&oacute;n Judicial (Toma de Muestras) del Sistema de Gesti&oacute;n Judicial Penal (SIGEJUPE) del Poder Judicial del Estado de M&eacute;xico</td>";
                    $html.="</tr>\n";
                    $html.="<tr>\n";
                }

                if (!$error) {
                    #CONSULTAMOS FECHA Y HORA DEL SERVIDOR DE BASE DE DATOS
                    $SolicitudesmuestrasDao = new SolicitudesmuestrasDAO();
                    $FechaHora = $SolicitudesmuestrasDao->selectFechaHora();
                    if ($FechaHora != "") {
                        
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "NO SE PUDO OBTENER LA FECHA Y HORA DEL SERVIDOR");
                    }
                }

                if (!$error) {
                    $html.="<td style='text-align: right; width: 40%;font-size: 8pt'>Fecha y Hora de creaci&oacute;n: " . $FechaHora . "</td>\n";
                    $html.="<td style='text-align: right; width: 60%;font-size: 10pt'>Pagina [[page_cu]] de [[page_nb]]</td>\n";
                    $html.=" </tr>\n";
                    $html.="<tr>\n";
                    $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                    $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero Toma de Muestra:</strong> " . str_pad($RspMuestraDto->getNumeroMuestra(), 6, '0', STR_PAD_LEFT) . "/" . $RspMuestraDto->getAnioMuestra() . "</td>";
                    $html.="</tr>\n";
                    $html.="<tr>\n";
                    $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";
                    $SolicitudesmuestrasController = new SolicitudesmuestrasController();
                    $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>Fecha Solicitud:</strong> " . ucfirst(strtolower($SolicitudesmuestrasController->FechaLarga($RspMuestraDto->getFechaRegistro()))) . "</td>";
                    $html.="</tr>\n";
                    $html.="</table>\n";
                    $html.="</page_header>\n";

                    $totalCadena = strlen(trim($RspMuestraDto->getSelloDigital()));
                    $pag = ceil($totalCadena / 120);

                    $html.="<page_footer>\n";
                    $html.="<table style='width: 100%; '>\n";
                    $html.="<tr>\n";
                    $html.="<td style='width:40%; text-align: center; font-size: 1pt'>Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;</td>\n";
                    $html.="</tr>\n";
                    $html.="<tr>";
                    $html.="<td style='width:100%; text-align: center; font-size: 8pt'>Firma Electronica</td>";
                    $html.="</tr>";
                    for ($index = 0; $index < $pag; $index++) {
                        $html.="<tr>";
                        $html.="<td style='text-align: left;    width: 100%;font-size: 8pt'>" . trim(substr($RspMuestraDto->getSelloDigital(), ($index * 120), 120)) . "</td>";
                        $html.="</tr>";
                    }
                    $html.="</table>";
                    $html.="</page_footer>";

                    $html.= "<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0'>";
                    $html.="<tr>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="</tr>";
                }

                if (!$error) {
                    #CONSULTAMOS INFORMACION DEL JUZGADO DE LA SOLICITUD
                    $html.="<tr>";
                    $html.="<td style='width:100%; text-align: left; font-size: 10pt' colspan='4'><strong>Juzgado a solicitar: </strong>";

                    $JuzgadosDao = new JuzgadosDAO();
                    $JuzgadosDto = new JuzgadosDto();
                    $JuzgadosDto->setCveJuzgado($SolicitudesmuestrasDto->getCveJuzgadoDesahoga());
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
                    #CONSULTAMOS INFORMACION DEL JUZGADO DE LA CARPETA JUDICIAL
                    if (((int) $SolicitudesmuestrasDto->getNumero() > 0)) {
                        $html.="<tr>";
                        $html.="<td style='width:100%; text-align: left; font-size: 10pt' colspan='4'><strong>N&uacute;mero Causa:</strong>";
                        $html.=$SolicitudesmuestrasDto->getNumero() . "/" . $SolicitudesmuestrasDto->getAnio() . " <strong>del</strong> ";

                        $JuzgadosDao = new JuzgadosDAO();
                        $JuzgadosDto = new JuzgadosDto();
                        $JuzgadosDto->setCveJuzgado($SolicitudesmuestrasDto->getCveJuzgado());
                        $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                        if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                            $JuzgadosDto = $JuzgadosDto[0];
                            $html.="" . $JuzgadosDto->getDesJuzgado() . "";
                        } else {
                            $error = true;
                            $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DEL JUZGADO DE LA CARPETA JUDICIAL");
                        }
                        $html.="</td>";
                        $html.="</tr>";
                    }

                    if ($SolicitudesmuestrasDto->getCarpetaInv() != "") {
                        $html.="<tr>";
                        $html.="<td style='width:100%; text-align: left' colspan='4'><strong>Carpeta de investigaci&oacute;n: </strong>";
                        $html.=$SolicitudesmuestrasDto->getCarpetaInv() . "</td>";
                        $html.="</tr>";
                    }

                    if ($SolicitudesmuestrasDto->getNuc() != "") {
                        $html.="<tr>";
                        $html.="<td style='width:100%; text-align: left' colspan='4'><strong>NUC: </strong>";
                        $html.=$SolicitudesmuestrasDto->getNuc() . "</td>";
                        $html.="</tr>";
                    }

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
                    $html.="</tr></table>";
                }

                if (!$error) {
                    #CONSULTAMOS INFORMACION DE LOS IMPUTADOS DE LA SCOLICITUD DE LA TOMA DE MUESTRAS
                    $ImputadosmuestrasDao = new ImputadosmuestrasDAO();
                    $ImputadosmuestrasDto = new ImputadosmuestrasDTO();
                    $TomaMuestrasDAO = new TomamuestrasDAO();
                    $MuestrasDAO = new MuestrasDAO();

                    $ImputadosmuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra());
                    $ImputadosmuestrasDto->setActivo("S");
                    $ImputadosmuestrasDto = $ImputadosmuestrasDao->selectImputadosmuestras($ImputadosmuestrasDto);
                    if ($ImputadosmuestrasDto != "" && count($ImputadosmuestrasDto) > 0) {
                        $html.="<div style='text-align: center'><strong>IMPUTADO";
                        if (count($ImputadosmuestrasDto) > 1) {
                            $html.="S";
                        }
                        $html.="</strong></div>";
                        $countImputados = 1;
                        foreach ($ImputadosmuestrasDto as $ImputadoMuestra) {
                            $html.="<p><strong>$countImputados.- Nombre:</strong> ";
                            if ($ImputadoMuestra->getCveTipoPersona() == "1") {
                                $html.= $ImputadoMuestra->getNombre() . " " . $ImputadoMuestra->getPaterno() . " " . $ImputadoMuestra->getMaterno();
                            } else {
                                $html.=$ImputadoMuestra->getNombreMoral();
                            }
                            $html.="</p>";
                            $html.="<p><strong>Domicilio:</strong> " . $ImputadoMuestra->getDomicilio() . "</p>";

                            #OBTENEMOS LAS TOMAS DE MUESTRAS
                            $TomaMuestrasDto = new TomamuestrasDTO();
                            $TomaMuestrasDto->setIdImputadoMuestra($ImputadoMuestra->getIdImputadoMuestra());
                            $TomaMuestrasDto = $TomaMuestrasDAO->selectTomamuestras($TomaMuestrasDto);
                            $muestras = "";
                            $examenes = "";
                            if ($TomaMuestrasDto != "") {
                                foreach ($TomaMuestrasDto as $tomamuestra) {
                                    $MuestrasDto = new MuestrasDTO();
                                    $MuestrasDto->setCveMuestra($tomamuestra->getCveMuestra());
                                    $MuestrasDto->setActivo("S");
                                    $MuestrasDto = $MuestrasDAO->selectMuestras($MuestrasDto);
                                    if ($MuestrasDto != "") {
                                        $MuestrasDto = $MuestrasDto[0];
                                        if ($MuestrasDto->getTipo() == "M") {
                                            $muestras .= $MuestrasDto->getDesMuestra() . ", ";
                                        } else if ($MuestrasDto->getTipo() == "F") {
                                            $examenes .= $MuestrasDto->getDesMuestra() . ", ";
                                        }
                                    }
                                }
                            }
                            if ($muestras != "") {
                                $muestras = substr($muestras, 0, strlen($muestras) - 2);
                                $html.="<p style='margin-left: 50px'><strong>TOMA DE MUESTRAS FRACCI&Oacute;N 4: </strong>" . $muestras . "</p>";
                            }
                            if ($examenes != "") {
                                $examenes = substr($examenes, 0, strlen($examenes) - 2);
                                $html.="<p style='margin-left: 50px'><strong>RECONOCIMIENTO DE EX&Aacute;MENES F&Iacute;SICOS FRACCI&Oacute;N 5: </strong>" . $examenes . "</p>";
                            }

                            $countImputados++;
                        }
                        $html.="<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0'><tr>";
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
                        $html.="</tr></table>";
                    }
                }

                if (!$error) {
                    #CONSULTAMOS INFORMACION DE LOS OFENDIDOS DE LA SCOLICITUD DE TOMA DE MUESTRAS
                    $OfendidosmuestrasDao = new OfendidosmuestrasDAO();
                    $OfendidosmuestrasDto = new OfendidosmuestrasDTO();
                    $TomaMuestrasDAO = new TomamuestrasDAO();
                    $MuestrasDAO = new MuestrasDAO();

                    $OfendidosmuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra());
                    $OfendidosmuestrasDto->setActivo("S");
                    $OfendidosmuestrasDto = $OfendidosmuestrasDao->selectOfendidosmuestras($OfendidosmuestrasDto);
                    if ($OfendidosmuestrasDto != "" && count($OfendidosmuestrasDto) > 0) {
                        $html.="<div style='text-align: center'><strong>VICTIMA";
                        if (count($OfendidosmuestrasDto) > 1) {
                            $html.="S";
                        }
                        $html.="</strong></div>";
                        $countOfendidos = 1;
                        foreach ($OfendidosmuestrasDto as $OfendidoMuestra) {
                            $html.="<p><strong>$countOfendidos.- Nombre: </strong>";
                            $tutoresString = "";
                            if ($OfendidoMuestra->getCveTipoPersona() == "1" || $OfendidoMuestra->getCveTipoPersona() == "4" || $OfendidoMuestra->getCveTipoPersona() == "5") {
                                $html.= $OfendidoMuestra->getNombre() . " " . $OfendidoMuestra->getPaterno() . " " . $OfendidoMuestra->getMaterno();
                                if ($OfendidoMuestra->getCveTipoPersona() == "4" || $OfendidoMuestra->getCveTipoPersona() == "5") {
                                    // Obtenemos la Informacion deL Tutor del Infante
                                    $tutorDto = new TutoresofendidosmuestrasDTO();
                                    $tutorDto->setIdOfendidoMuestra($OfendidoMuestra->getIdOfendidoMuestra());
                                    $tutorDao = new TutoresofendidosmuestrasDAO();
                                    $tutorDto = $tutorDao->selectTutoresofendidosmuestras($tutorDto);
                                    if ($tutorDto != "" && count($tutorDto) > 0) {
                                        $tutorDto = $tutorDto[0];
                                        $nombreTutor = strtoupper(utf8_encode($tutorDto->getNombre() . " " . $tutorDto->getPaterno() . " " . $tutorDto->getMaterno()));
                                        $tutoresString.="<p style='margin-left: 50px'><strong>Nombre del Tutor: </strong>" . $nombreTutor . "</p>";
                                        $tutoresString.="<p style='margin-left: 50px'><strong>Domicilio del Tutor: </strong>" . strtoupper($tutorDto->getDomicilio()) . "</p>";
                                    } else {
                                        $tutoresString.="<p  style='margin-left: 10px'><strong>No tiene tutor asignado. </strong></p>";
                                    }
                                }
                            } else {
                                $html.=$OfendidoMuestra->getNombreMoral();
                            }
                            $html.="</p>";
                            $html.="<p><strong>Domicilio: </strong>" . $OfendidoMuestra->getDomicilio() . "</p>";

                            #OBTENEMOS LAS TOMAS DE MUESTRAS
                            $TomaMuestrasDto = new TomamuestrasDTO();
                            $TomaMuestrasDto->setIdOfendidoMuestra($OfendidoMuestra->getIdOfendidoMuestra());
                            $TomaMuestrasDto = $TomaMuestrasDAO->selectTomamuestras($TomaMuestrasDto);
                            $muestras = "";
                            $examenes = "";
                            if ($TomaMuestrasDto != "") {
                                foreach ($TomaMuestrasDto as $tomamuestra) {
                                    $MuestrasDto = new MuestrasDTO();
                                    $MuestrasDto->setCveMuestra($tomamuestra->getCveMuestra());
                                    $MuestrasDto->setActivo("S");
                                    $MuestrasDto = $MuestrasDAO->selectMuestras($MuestrasDto);
                                    if ($MuestrasDto != "") {
                                        $MuestrasDto = $MuestrasDto[0];
                                        if ($MuestrasDto->getTipo() == "M") {
                                            $muestras .= $MuestrasDto->getDesMuestra() . ", ";
                                        } else if ($MuestrasDto->getTipo() == "F") {
                                            $examenes .= $MuestrasDto->getDesMuestra() . ", ";
                                        }
                                    }
                                }
                            }
                            if ($muestras != "") {
                                $muestras = substr($muestras, 0, strlen($muestras) - 2);
                                $html.="<p style='margin-left: 50px'><strong>TOMA DE MUESTRAS FRACCI&Oacute;N 4: </strong>" . $muestras . "</p>";
                            }
                            if ($examenes != "") {
                                $examenes = substr($examenes, 0, strlen($examenes) - 2);
                                $html.="<p style='margin-left: 50px'><strong>RECONOCIMIENTO DE EX&Aacute;MENES F&Iacute;SICOS FRACCI&Oacute;N 5: </strong>" . $examenes . "</p>";
                            }

                            $html .= $tutoresString;
                            $countOfendidos++;
                        }
                        $html.="<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0'><tr>";
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
                        $html.="</tr></table>";
                    }
                }

                if (!$error) {
                    #CONSULTAMOS INFORMACION DE LOS DELITOS DE LA SCOLICITUD DE CATEO
                    $DelitosmuestrasDao = new DelitosmuestrasDAO();
                    $DelitosmuestrasDto = new DelitosmuestrasDTO();
                    $DelitosmuestrasDto->setIdSolicitudMuestra($SolicitudesmuestrasDto->getIdSolicitudMuestra());
                    $DelitosmuestrasDto->setActivo("S");
                    $DelitosmuestrasDto = $DelitosmuestrasDao->selectDelitosmuestras($DelitosmuestrasDto);
                    if ($DelitosmuestrasDto != "" && count($DelitosmuestrasDto) > 0) {
                        $html.="<div style='text-align: center'><strong>DELITO";
                        if (count($DelitosmuestrasDto) > 1) {
                            $html.="S";
                        }
                        $html .= "</strong></div>";
                        $DelitosDao = new DelitosDAO();
                        $countDelitos = 1;
                        foreach ($DelitosmuestrasDto as $DelitoMuestra) {
                            $DelitosDto = new DelitosDTO();
                            $DelitosDto->setCveDelito($DelitoMuestra->getCveDelito());
                            $DelitosDto->setActivo("S");
                            $DelitosDto = $DelitosDao->selectDelitos($DelitosDto);
                            if ($DelitosDto != "" && count($DelitosDto) > 0) {
                                $DelitosDto = $DelitosDto[0];
                                $html.="<p>$countDelitos.-" . $DelitosDto->getDesDelito() . "</p>";
                            } else {
                                $html.="<p>NO SE ENCONTRO DELITO</p>";
                            }
                            $countDelitos++;
                        }

                        $html.="<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0'><tr>";
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
                        $html.="</tr></table>";
                    }
                }
                if (!$error) {
                    $documentosdto = new DocumentosimgDTO();
                    $documentosdto->setIdCarpetaJudicial($RspMuestraDto->getIdMuestra());
                    $documentosdto->setCveTipoDocumento(25);
                    $documentosdto->setActivo("S");
                    $documentosDAO = new DocumentosimgDAO();
                    $nombreArchivo = "";
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
                            $posicion = strrpos($imagenesDto->getRuta(), "/");
                            $nombreArchivo = substr($imagenesDto->getRuta(), $posicion + 1);
                        }
                    }
                    if ($nombreArchivo != "") {
                        $html.="<p><strong>Archivo Adjunto: $nombreArchivo</strong></p>";
                    } else {
                        $html.="<p><strong>Archivo Adjunto: No hay archivo adjunto</strong></p>";
                    }

                    $html.="<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0'><tr>";
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
                    $html.="</tr></table>";
                }
                
                if (!$error) {
                    #ARMAMOS LA SOLICITUD
                    $solicitud = preg_replace("/\n/", "<br>", $RspMuestraDto->getSolicitud());
                    $solicitud = preg_replace("/\'/", "\"", $solicitud);
                    $solicitud = strip_tags($solicitud, "<p>");
                    $total = strlen(trim($solicitud));
                    if ($total >= 1) {
                        $html.="<div style='text-align: center'><strong>SOLICITUD:</strong></div>";
                        $html.="<p>" . $solicitud . "</p>\n";
                    }

                    $html.="<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0'><tr>";
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
                    $html.="</tr></table>";
                }

                if (!$error) {
                    $TerminosDao = new TerminosDAO();
                    $TerminosDto = new TerminosDTO();
                    $TerminosDto->setCveTipoTermino("2");
                    $TerminosDto->setActivo("S");
                    $TerminosDto = $TerminosDao->selectTerminos($TerminosDto);
                    if ($TerminosDto != "" && count($TerminosDto) > 0) {
                        $TerminosDto = $TerminosDto[0];
                        $html.="<div style='text-align: center'><strong>Terminos de uso</strong></div>";

                        $html.= "<p>" . $TerminosDto->getTexto() . "</p>";
                    }
                    $html.="<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0'><tr>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="</tr></table>";
                }

                if (!$error) {
                    $listaUsuarios = "";
                    try {
                        $UsuarioCliente = new UsuarioCliente();
                        $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($SolicitudesmuestrasDto->getCveUsuario()), true);
                    } catch (Exception $ex) {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL CONSUMIR WEB SERVICE DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
                    }

                    #GENERAMOS CODIGO QR y CONSULTAMOS INFORMACION DEL MP
                    $html.="<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0' ><tr>";
                    $html.="<td style='width:25%; text-align: center' rowspan='1'><qrcode value='" . $RspMuestraDto->getQr() . "' ec='L' style='width: 50mm; border: 0px solid #000000;'></qrcode></td>";
                    $html.="<td style='width:75%; text-align: center' colspan='3'>";
                    $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 0px black; font-size: 10pt'>";
                    $html.="<tr>";
                    $html.="<td style='width:30%; text-align: right;font-size: 10pt'>Ministerio P&uacute;blico:</td>";
                    $nombreMP = "NO ENCONTRADO EN GESTION";
                    if ($listaUsuarios != "") {
                        $nombreMP = $listaUsuarios["data"][0]["nombre"] . " " . $listaUsuarios["data"][0]["paterno"] . " " . $listaUsuarios["data"][0]["materno"];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
                    }
                    $html.="<td style='width:70%; text-align: left;font-size: 10pt'>" . $nombreMP . "</td>";
                    $html.="</tr>";

                    $html.="<tr>";
                    $html.="<td style='width:30%; text-align: right;font-size: 10pt'>Cargo:</td>";
                    $html.="<td style='width:70%; text-align: left;font-size: 10pt'>Ministerio P&uacute;blico de la Procuradur&iacute;a General del Estado de M&eacute;xico</td>";
                    $html.="</tr>";

                    $html.="</table>";
                    $html.="</td>";
                    $html.="</tr>";
                    $html.="</table>";
                    $html.="</page>";
                }

                if (!$error && $html != "") {
                    #GENERAMOS EL ARCHIVO PDF EN BASE AL CODIGO HTML ANTERIOR
                    date_default_timezone_set("America/Mexico_City");
                    ob_start();
                    echo utf8_encode($html);
                    $content = ob_get_clean();
                    $name = $RspMuestraDto->getQr() . ".pdf";
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
                            "text" => "SE GENERO EL PDF DE LA SOLICTUD CORRECTAMENTE",
                            "fileName" => str_pad($RspMuestraDto->getNumeroMuestra(), 6, '0', STR_PAD_LEFT) . "/" . $RspMuestraDto->getAnioMuestra() . '.pdf',
                            "filePath" => $RspMuestraDto->getQr() . ".pdf");
                    } else {
                        $tmp = array("type" => "Error",
                            "text" => "ERROR AL GENERAL EL PDF DE LA  SOLICITUD. DETALLE DEL ERROR:" . $e,
                            "fileName" => "",
                            "filePath" => "");
                    }
                }
            }
        } else {
            $tmp = array("type" => "Error", "text" => "IDENTIFICADOR DE CATEO NO VALIDO");
        }
        return $tmp;
    }

}

?>
