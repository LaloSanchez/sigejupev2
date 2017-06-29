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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/terminos/TerminosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/terminos/TerminosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");

include_once(dirname(__FILE__) . "/SolicitudesordenesController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/pdf/html2pdf.class.php");

class ComprobanteSolicitudesordenesController {

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
                } else {
                    $error = true;
                    $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DE LA SOLICITUD DE LA ORDEN DE APREHESION");
                }
            }

            #Obtenemos la carpeta de investigacion
            if (!$error) {
//                $AntecedesDto = new AntecedescarpetasDTO();
//                $AntecedesDao = new AntecedescarpetasDAO();
//                $AntecedesDto->setActivo("S");
//                $AntecedesDto->setIdCarpetaHija($SolicitudesordenesDto->getIdSolicitudOrden());
//                $AntecedesDto->setCveTipoCarpeta(10);
//                $AntecedesDto = $AntecedesDao->selectAntecedescarpetas($AntecedesDto);
//                $carpetasDto = array();
//                if ($AntecedesDto != "") {
//                    $AntecedesDto = $AntecedesDto[0];
                if ($SolicitudesordenesDto->getIdReferencia() != "" && $SolicitudesordenesDto->getIdReferencia() > 0) {
                    $carpetasDto = new CarpetasjudicialesDTO();
                    $carpetasDao = new CarpetasjudicialesDAO();
                    $carpetasDto->setActivo("S");
                    $carpetasDto->setIdCarpetaJudicial($SolicitudesordenesDto->getIdReferencia());
                    $carpetasDto = $carpetasDao->selectCarpetasjudiciales($carpetasDto);
                    if ($carpetasDto != "") {
                        $carpetasDto = $carpetasDto[0];
                    } else {
//                        $error = true;
                        $tmp = ["type" => "Error", "text" => "ANTECEDES NO GENERADO Carpetas Judiciales"];
                    }
                } else {
                    $tmp = ["type" => "Error", "text" => "ANTECEDES NO GENERADO"];
                }
//                } else {
////                    $error = true;
//                    $tmp = ["type" => "Error", "text" => "ANTECEDES NO GENERADO"];
//                }
            }

            #Obtiene Auxiliar si esta creado
            if (!$error) {
                $AntecedesAuxDto = new AntecedescarpetasDTO();
                $carpetasAuxDto = new CarpetasjudicialesDTO();
//                if ((count($carpetasDto) > 0) && $carpetasDto != "") {
//                    $AntecedesAuxDto = new AntecedescarpetasDTO();
//                    $AntecedesAuxDto->setActivo("S");
//                    $AntecedesAuxDto->setCveTipoCarpeta(2);
//                    $AntecedesAuxDto->setIdCarpetaHija($carpetasDto->getIdCarpetaJudicial());
//                    $AntecedesAuxDto = $AntecedesDao->selectAntecedescarpetas($AntecedesAuxDto);
//                    if ($AntecedesAuxDto != "") {
//                        $AntecedesAuxDto = $AntecedesAuxDto[0];
//                        $carpetasAuxDto = new CarpetasjudicialesDTO();
//                        $carpetasAuxDto->setActivo("S");
//                        $carpetasAuxDto->setIdCarpetaJudicial($AntecedesDto->getIdCarpetaPadre());
//                        $carpetasAuxDto = $carpetasDao->selectCarpetasjudiciales($carpetasAuxDto);
//                        if ($carpetasAuxDto != "") {
//                            $carpetasAuxDto = $carpetasAuxDto[0];
//                        } else {
//                            $tmp = ["type" => "Error", "text" => "ANTECEDES NO GENERADO Carpetas Judiciales"];
//                        }
//                    }
//                }
            }

            #VERIFICAMOS SI EL ARCHIVO DE LA ORDEN DE APREHENSION YA EXISTE, SI EXISTE SOLO SE DESCARGA, SI NO EXISTE SE CREA PARA QUE SE DESCARGUE            
            if (file_exists("./../../../solicitudespdf/" . $OrdenesDto->getQr() . ".pdf")) {
                $tmp = array("type" => "OK",
                    "text" => "SE GENERO EL PDF DE LA SOLICTUD CORRECTAMENTE",
                    "fileName" => str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . '.pdf',
                    "filePath" => $OrdenesDto->getQr() . ".pdf");
            } else {
                $html = "";
                if (!$error) {
                    $html.="<page backtop=\"60mm\" "
                            . "backbottom=\"20mm\" "
                            . "backleft=\"20mm\" "
                            . "backright=\"20mm\" "
                            . "backimg=\"img/imgFondo.jpg\" "
                            . "backimgx=\"center\" "
                            . "style='font-size: 10pt'>\n";

                    $html.="<page_header>\n";
                    $html.="<table style='width: 90%; border: solid 0px black;'>\n";
                    $html.="<tr>\n";
                    $html.="<td colspan='2' style='text-align: center; width: 100%'><img src='../../../vistas/img/logoPjAcuses.jpg'></td>\n";
                    $html.="</tr>\n";
                    $html.="<tr>\n";
                    $html.="<td style='width:100%; text-align: center' rowspan='1' colspan='2'>SOLICITUD DE ORDEN DE APREHENSION EN TR&Aacute;MITE</td>\n";
                    $html.="</tr>\n";
                    $html.="<tr>\n";
                    $html.="<td colspan='2' style='text-align: center; width: 100%;font-size: 8pt'></td>\n";
                    $html.="</tr>\n";
                    $html.="<tr>\n";
                    $html.="<td colspan='2' style='text-align: center; width: 100%;font-size: 8pt'>M&oacute;dulo de Solicitudes de Orden de Aprehensi&oacute;n del Sistema de Gesti&oacute;n Judicial Penal (SIGEJUPE) del Poder Judicial del Estado de M&eacute;xico</td>";
                    $html.="</tr>\n";
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
                    $html.="<tr>\n";
                    $html.="<td style='text-align: right; width: 40%;font-size: 8pt'>Fecha y Hora de creaci&oacute;n: " . $FechaHora . "</td>\n";
                    $html.="<td style='text-align: right; width: 60%;font-size: 10pt'>Pagina [[page_cu]] de [[page_nb]]</td>\n";
                    $html.=" </tr>\n";
                    if ($OrdenesDto->getNumeroEspecializadoOrden() != 0) {
                        $html.="<tr>\n";
                        $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                        $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero Orden de Aprehensi&oacute;n Especializado:</strong> " . str_pad($OrdenesDto->getNumeroEspecializadoOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . "</td>";
                        $html.="</tr>\n";
                    }
                    $html.="<tr>\n";
                    $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                    $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero Orden de Aprehensi&oacute;n:</strong> " . str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . "</td>";
                    $html.="</tr>\n";

                    if (count($carpetasDto) > 0) {
                        if ($carpetasDto->getNumero() != "") {
                            $html.="<tr>\n";
                            $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                            if ($carpetasDto->getCveTipoCarpeta() == "1") {
                                $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero Auxiliar:</strong> " . str_pad($carpetasDto->getNumero(), 6, '0', STR_PAD_LEFT) . "/" . $carpetasDto->getAnio() . "</td>";
                            } else {
                                $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero Carpeta:</strong> " . str_pad($carpetasDto->getNumero(), 6, '0', STR_PAD_LEFT) . "/" . $carpetasDto->getAnio() . "</td>";
                            }
                            $html.="</tr>\n";
                        }
                    }
                    $html.="<tr>\n";
                    $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";
                    $SolicitudesordenesController = new SolicitudesordenesController();
                    $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>Fecha Solicitud:</strong> " . ucfirst(strtolower($SolicitudesordenesController->FechaLarga($OrdenesDto->getFechaRegistro()))) . "</td>";
                    $html.="</tr>\n";
                    $html.="</table>\n";
                    $html.="</page_header>\n";

                    $totalCadena = strlen(trim($OrdenesDto->getSelloDigital()));
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
                        $html.="<td style='text-align: left;    width: 100%;font-size: 8pt'>" . trim(substr($OrdenesDto->getSelloDigital(), ($index * 120), 120)) . "</td>";
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
                    $JuzgadosDto->setCveJuzgado(10322);
                    $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                    if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                        $JuzgadosDto = $JuzgadosDto[0];
//                    print_r($JuzgadosDto);
//                    echo "<br><br>";
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
                    if (((int) $SolicitudesordenesDto->getNumero() > 0)) {
                        $html.="<tr>";
                        $html.="<td style='width:100%; text-align: left; font-size: 10pt' colspan='4'><strong>N&uacute;mero Causa:</strong>";
                        $html.=$SolicitudesordenesDto->getNumero() . "/" . $SolicitudesordenesDto->getAnio() . " <strong>del</strong> ";

                        $JuzgadosDao = new JuzgadosDAO();
                        $JuzgadosDto = new JuzgadosDto();
                        $JuzgadosDto->setCveJuzgado($SolicitudesordenesDto->getCveJuzgado());
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

                    if (count($carpetasAuxDto) > 0) {
//                        $html.="<tr>";
//                        $html.="<td style='width:100%; text-align: left; font-size: 10pt' colspan='4'><strong>N&uacute;mero Auxiliar:</strong>";
//                        $html.=$carpetasAuxDto->getNumero() . "/" . $carpetasAuxDto->getAnio() . " <strong>del</strong> ";
//
//                        $JuzgadosDao = new JuzgadosDAO();
//                        $JuzgadosDto = new JuzgadosDto();
//                        $JuzgadosDto->setCveJuzgado($carpetasAuxDto->getCveJuzgado());
//                        $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
//                        if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
//                            $JuzgadosDto = $JuzgadosDto[0];
//                            $html.="" . $JuzgadosDto->getDesJuzgado() . "";
//                        } else {
//                            $error = true;
//                            $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DEL JUZGADO DE LA CARPETA JUDICIAL");
//                        }
//                        $html.="</td>";
//                        $html.="</tr>";
                    }

                    if ($SolicitudesordenesDto->getCarpetaInv() != "") {
                        $html.="<tr>";
                        $html.="<td style='width:100%; text-align: left' colspan='4'><strong>Carpeta de investigaci&oacute;n: </strong>";
                        $html.=$SolicitudesordenesDto->getCarpetaInv() . "</td>";
                        $html.="</tr>";
                    }

                    if ($SolicitudesordenesDto->getNuc() != "") {
                        $html.="<tr>";
                        $html.="<td style='width:100%; text-align: left' colspan='4'><strong>NUC: </strong>";
                        $html.=$SolicitudesordenesDto->getNuc() . "</td>";
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
                    #CONSULTAMOS INFORMACION DE LAS PERSONAS DE LA SOLICITUD
                    $PersonasDao = new PersonasordenesDAO();
                    $PersonasDto = new PersonasordenesDTO();
                    $PersonasDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden());
                    $PersonasDto->setCveOrigen("1"); # 1 - ORIGEN SOLICITUD DE ORDEN DE APREHENSION
                    $PersonasDto = $PersonasDao->selectPersonasordenes($PersonasDto);
                    if ($PersonasDto != "" && count($PersonasDto) > 0) {
                        $html.="<div style='text-align: center'><strong>PERSONA";
                        if (count($PersonasDto) > 1) {
                            $html.="S";
                        }
                        $html.=" QUE DEBA";
                        if (count($PersonasDto) > 1) {
                            $html.="N";
                        }
                        $html.=" APREHENDERSE</strong></div>";
                        $countPersonas = 1;
                        foreach ($PersonasDto as $Persona) {
                            $html.="<p><strong>$countPersonas.- Nombre: </strong>" . $Persona->getNombre() . " " . $Persona->getPaterno() . " " . $Persona->getMaterno() . "</p>";
                            $html.="<p><strong>Domicilio: </strong>" . $Persona->getDomicilio() . "</p>";
                            $countPersonas++;
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
                    #CONSULTAMOS INFORMACION DE LOS IMPUTADOS DE LA SCOLICITUD DE ORDEN DE APREHENSION
                    $ImputadosordenesDao = new ImputadosordenesDAO();
                    $ImputadosordenesDto = new ImputadosordenesDTO();
                    $ImputadosordenesDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden());
                    $ImputadosordenesDto->setActivo("S");
                    $ImputadosordenesDto = $ImputadosordenesDao->selectImputadosordenes($ImputadosordenesDto);
                    if ($ImputadosordenesDto != "" && count($ImputadosordenesDto) > 0) {
                        $html.="<div style='text-align: center'><strong>IMPUTADO";
                        if (count($ImputadosordenesDto) > 1) {
                            $html.="S";
                        }
                        $html.="</strong></div>";
                        $countImputado = 1;
                        foreach ($ImputadosordenesDto as $ImputadoOrden) {
                            $html.="<p><strong>$countImputado.-Nombre: </strong> ";
                            if ($ImputadoOrden->getCveTipoPersona() == "1") {
                                $html.= $ImputadoOrden->getNombre() . " " . $ImputadoOrden->getPaterno() . " " . $ImputadoOrden->getMaterno();
                            } else {
                                $html.=$ImputadoOrden->getNombreMoral();
                            }
                            $html.="</p>";
                            $html.="<p><strong>Domicilio: </strong> " . $ImputadoOrden->getDomicilio() . "</p>";
                            $countImputado++;
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
                    #CONSULTAMOS INFORMACION DE LOS OFENDIDOS DE LA SCOLICITUD DE ORDEN DE APREHENSION
                    $OfendidosordenesDao = new OfendidosordenesDAO();
                    $OfendidosordenesDto = new OfendidosordenesDTO();
                    $OfendidosordenesDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden());
                    $OfendidosordenesDto->setActivo("S");
                    $OfendidosordenesDto = $OfendidosordenesDao->selectOfendidosordenes($OfendidosordenesDto);
                    if ($OfendidosordenesDto != "" && count($OfendidosordenesDto) > 0) {
                        $html.="<div style='text-align: center'><strong>VICTIMA";
                        if (count($OfendidosordenesDto) > 1) {
                            $html.="S";
                        }
                        $html.="</strong></div>";
                        $countOfendido = 1;
                        foreach ($OfendidosordenesDto as $ImputadoOrden) {
                            $html.="<p><strong>$countOfendido.-Nombre:</strong> ";
                            $tutoresString = "";
                            if ($ImputadoOrden->getCveTipoPersona() == "1" || $ImputadoOrden->getCveTipoPersona() == "4" || $ImputadoOrden->getCveTipoPersona() == "5") {
                                $html.= $ImputadoOrden->getNombre() . " " . $ImputadoOrden->getPaterno() . " " . $ImputadoOrden->getMaterno();
                                if ($ImputadoOrden->getCveTipoPersona() == "4" || $ImputadoOrden->getCveTipoPersona() == "5") {
                                    // Obtenemos la Informacion deL Tutor del Infante
                                    $tutorDto = new TutoresofendidosordenesDTO();
                                    $tutorDto->setIdOfendidoOrden($ImputadoOrden->getIdOfendidoOrden());
                                    $tutorDao = new TutoresofendidosordenesDAO();
                                    $tutorDto = $tutorDao->selectTutoresofendidosordenes($tutorDto);
                                    if ($tutorDto != "" && count($tutorDto) > 0) {
                                        $tutorDto = $tutorDto[0];
                                        $nombreTutor = strtoupper(utf8_encode($tutorDto->getNombre() . " " . $tutorDto->getPaterno() . " " . $tutorDto->getMaterno()));
                                        $tutoresString.="<p style='margin-left: 50px'><strong>Nombre del Tutor: </strong>" . $nombreTutor . "</p>";
                                        $tutoresString.="<p style='margin-left: 50px'><strong>Domicilio del Tutor: </strong>" . strtoupper($tutorDto->getDomicilio()) . "</p>";
                                    } else {
                                        $tutoresString.="<p style='margin-left: 10px'><strong>No tiene tutor asignado. </strong></p>";
                                    }
                                }
                            } else {
                                $html.=$ImputadoOrden->getNombreMoral();
                            }
                            $html.="</p>";
                            $html.="<p><strong>Domicilio: </strong>" . $ImputadoOrden->getDomicilio() . "</p>";
                            $html .= $tutoresString;
                            $countOfendido++;
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
                    #CONSULTAMOS INFORMACION DE LOS DELITOS DE LA SCOLICITUD DE ORDEN DE APREHENSION
                    $DelitosordenesDao = new DelitosordenesDAO();
                    $DelitosordenesDto = new DelitosordenesDTO();
                    $DelitosordenesDto->setIdSolicitudOrden($SolicitudesordenesDto->getIdSolicitudOrden());
                    $DelitosordenesDto->setActivo("S");
                    $DelitosordenesDto = $DelitosordenesDao->selectDelitosordenes($DelitosordenesDto);
                    if ($DelitosordenesDto != "" && count($DelitosordenesDto) > 0) {
                        $html.="<div style='text-align: center'><strong>DELITO";
                        if (count($DelitosordenesDto) > 1) {
                            $html.="S";
                        }
                        $html .= "</strong></div>";
                        $DelitosDao = new DelitosDAO();
                        $countDelito = 1;
                        foreach ($DelitosordenesDto as $DelitoOrden) {
                            $DelitosDto = new DelitosDTO();
                            $DelitosDto->setCveDelito($DelitoOrden->getCveDelito());
                            $DelitosDto->setActivo("S");
                            $DelitosDto = $DelitosDao->selectDelitos($DelitosDto);
                            $html.="<p>";
                            if ($DelitosDto != "" && count($DelitosDto) > 0) {
                                $DelitosDto = $DelitosDto[0];
                                $html.="<strong>$countDelito.-</strong>" . $DelitosDto->getDesDelito();
                            } else {
                                $html.="<strong>NO SE ENCONTRO DELITO</strong>";
                            }
                            $html.="</p>";
                            $countDelito++;
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
                    #CONSULTAMOS INFORMACION DEL ARCHIVO ADJUNTO EN LA SOLICITUD DE ORDEN DE APREHENSION
                    // --> Obtenemos el Documento Si es que existe
                    $documentosdto = new DocumentosimgDTO();
                    $documentosdto->setIdCarpetaJudicial($OrdenesDto->getIdOrden());
                    $documentosdto->setCveTipoDocumento(18);
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
                    $html.="<div><strong>ARCHIVO ADJUNTO: ";
                    if ($nombreArchivo != "") {
                        $html .= $nombreArchivo;
                    } else {
                        $html .= "NO HAY ARCHIVOS ADJUNTOS";
                    }
                    $html .= "</strong></div>";

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
                    $solicitud = $OrdenesDto->getSolicitud();
//                    $solicitud = preg_replace("/\n/", "<br>", $solicitud);
                    $solicitud = preg_replace("/\'/", "\"", $solicitud);
                    $solicitud = preg_replace('/mso-bidi-font-family\:.*?(|;)/i', "", $solicitud);
                    $solicitud = preg_replace('/font-family\:.*?(|;)/i', "", $solicitud);
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
                    #CONSULTAMOS LOS TERMINOS DE USO DEL M.P.    
                    $TerminosDao = new TerminosDAO();
                    $TerminosDto = new TerminosDTO();
                    $TerminosDto->setCveTipoTermino("2");
                    $TerminosDto->setActivo("S");
                    $TerminosDto = $TerminosDao->selectTerminos($TerminosDto);
                    if ($TerminosDto != "" && count($TerminosDto) > 0) {
                        $TerminosDto = $TerminosDto[0];
//                    echo "<br><br>";
//                    print_r($TerminosDto);
                        $html.="<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0'><tr>";
                        $html.="<td colspan='4' style='width:100%; text-align: justify'>";
                        $html.="<div style='text-align: center'><strong>Terminos de uso</strong></div>";
                        $html.=$TerminosDto->getTexto();
                        $html.="</td>";
                        $html.="</tr>";
                    }

                    $html.="<tr>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="</tr>";
                }

                if (!$error) {
                    $listaUsuarios = "";
                    try {
                        $UsuarioCliente = new UsuarioCliente();
                        $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($SolicitudesordenesDto->getCveUsuario()), true);
                    } catch (Exception $ex) {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL CONSUMIR WEB SERVICE DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
                    }

                    #GENERAMOS CODIGO QR y CONSULTAMOS INFORMACION DEL MP
                    $html.="<tr>";
                    $html.="<td style='width:25%; text-align: center' rowspan='1'><qrcode value='" . $OrdenesDto->getQr() . "' ec='L' style='width: 50mm; border: 0px solid #000000;'></qrcode></td>";
                    $html.="<td style='width:75%; text-align: center' colspan='3'>";
                    $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 0px black; font-size: 10pt'>";
                    $html.="<tr>";
                    $html.="<td style='width:30%; text-align: right;font-size: 10pt'>Ministerio P&uacute;blico:</td>";
                    $nombreMP = "NO ENCONTRADO EN GESTION";
                    if ($listaUsuarios != "") {
                        $nombreMP = $listaUsuarios["data"][0]["nombre"] . " " . $listaUsuarios["data"][0]["paterno"] . " " . $listaUsuarios["data"][0]["materno"];
                    } else {
                        //$error = true;
                        //$tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
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
                    $qr = str_replace("/", "_", $OrdenesDto->getQr());
                    $name = $qr . ".pdf";
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
                            "fileName" => str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . '.pdf',
                            "filePath" => $qr . ".pdf");
                    } else {
                        $tmp = array("type" => "Error",
                            "text" => "ERROR AL GENERAL EL PDF DE LA  SOLICITUD. DETALLE DEL ERROR:" . $e,
                            "fileName" => "",
                            "filePath" => "");
                    }
                }
            }
        } else {
            $tmp = array("type" => "Error", "text" => "IDENTIFICADOR DE ORDEN DE APREHENSION NO VALIDO");
        }
        return $tmp;
    }

}

//
//@$idOrden = "31";
//
//$ComprobanteSolicitudesordenesController = new ComprobanteSolicitudesordenesController();
//print_r($ComprobanteSolicitudesordenesController->generaComprobante($idOrden));
?>
