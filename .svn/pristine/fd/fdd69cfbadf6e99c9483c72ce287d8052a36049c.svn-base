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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/cateos/CateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/cateos/CateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudescateos/SolicitudescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudescateos/SolicitudescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/terminos/TerminosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/terminos/TerminosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imagenes/ImagenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/documentosimg/DocumentosimgDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/documentosimg/DocumentosimgDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
//include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/apelacioncateos/ApelacioncateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/apelacioncateos/ApelacioncateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");

include_once(dirname(__FILE__) . "/SolicitudescateosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/pdf/html2pdf.class.php");

class ComprobanteApelacioncateosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function generaComprobante($idCateo = "", $cveFormato = "1") {
        #VALIDAOS LOS DATOS ENVIADOS
        if ($idCateo != "" && $idCateo > 0) {
            #INICAMOS PROCESO DE CONSULTA DE INFORMACION
            $error = false;

            #CONSULTAMOS INFORMACION DEL CATEO
            $CateosDao = new CateosDAO();
            $CateosDto = new CateosDTO();
            $CateosDto->setIdCateo($idCateo);
            $CateosDto = $CateosDao->selectCateos($CateosDto);
            if ($CateosDto != "" && count($CateosDto) > 0) {
                $CateosDto = $CateosDto[0];
                $qr = str_replace("/", "_", $CateosDto->getQr());
                $qr = str_replace(" ", "", $qr);
            } else {
                $error = true;
                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DEL CATEO ESPECIFICADO");
            }

            if (!$error) {
                #CONSULTAMOS INFORMACION DE LA SOLICITUD DEL CATEO
                $SolicitudescateosDao = new SolicitudescateosDAO();
                $SolicitudescateosDto = new SolicitudescateosDTO();
                $SolicitudescateosDto->setIdSolicitudCateo($CateosDto->getIdSolicitudCateo());
                $SolicitudescateosDto = $SolicitudescateosDao->selectSolicitudescateos($SolicitudescateosDto);
                if ($SolicitudescateosDto != "" && count($SolicitudescateosDto) > 0) {
                    $SolicitudescateosDto = $SolicitudescateosDto[0];
                } else {
                    $error = true;
                    $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DE LA SOLICITUD DE CATEO");
                }
            }

            #Obtenemos la carpeta de investigacion
            if (!$error) {
//                $AntecedesDto = new AntecedescarpetasDTO();
//                $AntecedesDao = new AntecedescarpetasDAO();
//                $AntecedesDto->setActivo("S");
//                $AntecedesDto->setIdCarpetaHija($SolicitudescateosDto->getIdSolicitudCateo());
//                $AntecedesDto->setCveTipoCarpeta(9);
//                $AntecedesDto = $AntecedesDao->selectAntecedescarpetas($AntecedesDto);
//                $carpetasDto = array();
//                if ($AntecedesDto != "") {
//                    $AntecedesDto = $AntecedesDto[0];
                if ($SolicitudescateosDto->getIdReferencia() != "" && $SolicitudescateosDto->getIdReferencia() > 0) {
                    $carpetasDto = new CarpetasjudicialesDTO();
                    $carpetasDao = new CarpetasjudicialesDAO();
                    $carpetasDto->setActivo("S");
                    $carpetasDto->setIdCarpetaJudicial($SolicitudescateosDto->getIdReferencia());
                    $carpetasDto = $carpetasDao->selectCarpetasjudiciales($carpetasDto);
                    if ($carpetasDto != "") {
                        $carpetasDto = $carpetasDto[0];
                    } else {
                        $error = true;
                        $tmp = ["type" => "Error", "text" => "ANTECEDES NO GENERADO Carpetas Judiciales"];
                    }
                } else {
                    $tmp = ["type" => "Error", "text" => "ANTECEDES NO GENERADO"];
                }
//                } else {
//                    $tmp = ["type" => "Error", "text" => "ANTECEDES NO GENERADO"];
//                }
            }

            #VERIFICAMOS SI EL ARCHIVO DEL CATEO YA EXISTE, SI EXISTE SOLO SE DESCARGA, SI NO EXISTE SE CREA PARA QUE SE DESCARGUE      
            if (file_exists("./../../../solicitudespdf/ResolucionCateo_" . $qr . ".pdf")) {
                $tmp = array("type" => "OK",
                    "text" => "SE GENERO EL PDF DE LA SOLICTUD CORRECTAMENTE",
                    "fileName" => str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . '.pdf',
                    "filePath" => "ResolucionCateo_" . $qr . ".pdf");
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
                    $html.="<td style='width:100%; text-align: center' rowspan='1' colspan='2'>SOLICITUD DE CATEO EN TR&Aacute;MITE</td>\n";
                    $html.="</tr>\n";
                    $html.="<tr>\n";
                    $html.="<td colspan='2' style='text-align: center; width: 100%;font-size: 8pt'></td>\n";
                    $html.="</tr>\n";
                    $html.="<tr>\n";
                    $html.="<td colspan='2' style='text-align: center; width: 100%;font-size: 8pt'>M&oacute;dulo de Solicitudes de Cateo del Sistema de Gesti&oacute;n Judicial Penal (SIGEJUPE) del Poder Judicial del Estado de M&eacute;xico</td>";
                    $html.="</tr>\n";
                }

                if (!$error) {
                    #CONSULTAMOS FECHA Y HORA DEL SERVIDOR DE BASE DE DATOS
                    $SolicitudescateosDao = new SolicitudescateosDAO();
                    $FechaHora = $SolicitudescateosDao->selectFechaHora();
                    if ($FechaHora != "") {
                        
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "NO SE PUDO OBTENER LA FECHA Y HORA DEL SERVIDOR");
                    }
                }

                if (!$error) {
                    $resolucion = "";
                    $apelacionCateoDto = new ApelacioncateosDTO();
                    $apelacionCateoDao = new ApelacioncateosDAO();
                    $apelacionCateoDto->setIdCateo($CateosDto->getIdCateo());
                    $apelacionCateoDto = $apelacionCateoDao->selectApelacioncateos($apelacionCateoDto);
                    if ($apelacionCateoDto != "") {
                        $apelacionCateoDto = $apelacionCateoDto[0];
                        $resolucion = $apelacionCateoDto->getResolucionSala();
                    }
                }

                if (!$error) {
                    $html.="<tr>\n";
                    $html.="<td style='text-align: right; width: 40%;font-size: 8pt'>Fecha y Hora de creaci&oacute;n: " . $FechaHora . "</td>\n";
                    $html.="<td style='text-align: right; width: 60%;font-size: 10pt'>Pagina [[page_cu]] de [[page_nb]]</td>\n";
                    $html.=" </tr>\n";
                    if ($CateosDto->getNumeroEspecializadoCateo() != 0) {
                        $html.="<tr>\n";
                        $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                        $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero de Cateo Especializado:</strong> " . str_pad($CateosDto->getNumeroEspecializadoCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . "</td>";
                        $html.="</tr>\n";
                    }
                    $html.="<tr>\n";
                    $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                    $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero de Cateo Juzgado:</strong> " . str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . "</td>";
                    $html.="</tr>\n";

                    if (count($carpetasDto) > 0) {
                        if ($carpetasDto->getNumero() != "") {
                            $html.="<tr>\n";
                            $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                            $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero Auxiliar:</strong> " . str_pad($carpetasDto->getNumero(), 6, '0', STR_PAD_LEFT) . "/" . $carpetasDto->getAnio() . "</td>";
                            $html.="</tr>\n";
                        }
                    }

                    $html.="<tr>\n";
                    $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";
                    $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>Fecha de Resoluci&oacute;n:</strong> " . ucfirst(strtolower($this->FechaLarga($apelacionCateoDto->getFechaResolucion()))) . "</td>";
                    $html.="</tr>\n";
                    $html.="</table>\n";
                    $html.="</page_header>\n";

                    $totalCadena = strlen(trim($CateosDto->getSelloDigital()));
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
                        $html.="<td style='text-align: left;    width: 100%;font-size: 8pt'>" . trim(substr($CateosDto->getSelloDigital(), ($index * 120), 120)) . "</td>";
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
                    if (((int) $SolicitudescateosDto->getNumero() > 0)) {
                        $html.="<tr>";
                        if (count($carpetasDto) > 0) {
                            if ($carpetasDto->getCveTipoCarpeta() == 1) {
                                $html.="<td style='width:100%; text-align: left; font-size: 10pt' colspan='4'><strong>N&uacute;mero Auxiliar: </strong>";
                            } else {
                                $html.="<td style='width:100%; text-align: left; font-size: 10pt' colspan='4'><strong>N&uacute;mero Causa: </strong>";
                            }
                        } else {
                            $html.="<td style='width:100%; text-align: left; font-size: 10pt' colspan='4'><strong>N&uacute;mero Causa: </strong>";
                        }
                        $html.=$SolicitudescateosDto->getNumero() . "/" . $SolicitudescateosDto->getAnio() . " <strong>del</strong> ";

                        $JuzgadosDao = new JuzgadosDAO();
                        $JuzgadosDto = new JuzgadosDto();
                        $JuzgadosDto->setCveJuzgado($SolicitudescateosDto->getCveJuzgado());
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

                    if ($SolicitudescateosDto->getCarpetaInv() != "") {
                        $html.="<tr>";
                        $html.="<td style='width:100%; text-align: left' colspan='4'><strong>Carpeta de investigaci&oacute;n: </strong>";
                        $html.=$SolicitudescateosDto->getCarpetaInv() . "</td>";
                        $html.="</tr>";
                    }

                    if ($SolicitudescateosDto->getNuc() != "") {
                        $html.="<tr>";
                        $html.="<td style='width:100%; text-align: left' colspan='4'><strong>NUC: </strong>";
                        $html.=$SolicitudescateosDto->getNuc() . "</td>";
                        $html.="</tr>";
                    }

                    $html.="<tr>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="<td style='width:25%;'>&nbsp;</td>";
                    $html.="</tr></table>";
                }

                if (!$error) {
                    $documentosdto = new DocumentosimgDTO();
                    $documentosdto->setIdCarpetaJudicial($apelacionCateoDto->getIdApelacionCateo());
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
                            $posicion = strrpos($imagenesDto->getRuta(), "/");
                            $nombreArchivo = substr($imagenesDto->getRuta(), $posicion + 1);
                            $img = explode("/", $imagenesDto->getRuta());
                            $imagen = "";
                            foreach ($img as $i) {
                                if ($i != "..") {
                                    $imagen .= $i . "/";
                                }
                            }
                        }
                    }
                    if ($nombreArchivo != "") {
//                        $html.="<p><strong><a target='_blank' href='" . $_SERVER['HTTP_HOST'] . " /" . $imagen . "' >Archivo Adjunto: $nombreArchivo</a></strong></p>";
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
                    $solicitud = preg_replace("/\n/", "<br>", $resolucion);
                    $solicitud = preg_replace("/\'/", "\"", $solicitud);
                    $solicitud = strip_tags($solicitud, "<p>");
                    $total = strlen(trim($solicitud));
                    if ($total >= 1) {
                        $html.="<div style='text-align: center'><strong>RESOLUCI&Oacute;N APELACI&Oacute;N DE CATEO:</strong></div>";
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
                    $TerminosDto->setCveTipoTermino("6");
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
                    $juzgadoresDto = new JuzgadoresDTO();
                    $juzgadoresDao = new JuzgadoresDAO();
                    $juzgadoresDto->setIdJuzgador($apelacionCateoDto->getCveUsuarioSecretario());
                    $juzgadoresDto = $juzgadoresDao->selectJuzgadores($juzgadoresDto);
                    if ($juzgadoresDto != "" && count($juzgadoresDto) > 0) {
                        $juzgadoresDto = $juzgadoresDto[0];
                        $listaUsuarios = "";
                        try {
                            $UsuarioCliente = new UsuarioCliente();
                            $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($juzgadoresDto->getCveUsuario()), true);
                        } catch (Exception $ex) {
                            $error = true;
                            $tmp = array("type" => "Error", "text" => "ERROR AL CONSUMIR WEB SERVICE DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
                        }
                    }


                    #GENERAMOS CODIGO QR y CONSULTAMOS INFORMACION DEL MP
                    $html.="<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0' ><tr>";
                    $html.="<td style='width:25%; text-align: center' rowspan='1'><qrcode value='" . $CateosDto->getQr() . "' ec='L' style='width: 50mm; border: 0px solid #000000;'></qrcode></td>";
                    $html.="<td style='width:75%; text-align: center' colspan='3'>";
                    $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 0px black; font-size: 10pt'>";
                    $html.="<tr>";
                    $html.="<td style='width:30%; text-align: right;font-size: 10pt'>Secretario de Tribunal de Alzada:</td>";
                    $nombreMP = "NO ENCONTRADO EN GESTION";
                    if ($listaUsuarios != "") {
                        $nombreMP = $listaUsuarios["data"][0]["nombre"] . " " . $listaUsuarios["data"][0]["paterno"] . " " . $listaUsuarios["data"][0]["materno"];
                    } else {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DEL SECRETARIO DEL TRIBUNAL DE ALZADA EN EL SISTEMA DE GESTION");
                    }
                    $html.="<td style='width:70%; text-align: left;font-size: 10pt'>" . $nombreMP . "</td>";
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
                    $qr = str_replace("/", "_", $CateosDto->getQr());
                    $qr = str_replace(" ", "", $qr);
                    $name = "ResolucionCateo_" . $qr . ".pdf";
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
                            "fileName" => str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . '.pdf',
                            "filePath" => "ResolucionCateo_" . $qr . ".pdf");
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

    private function FechaLarga($fecha) {
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

    private function traducir($num) {
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

    private function traduccionParcial($s) {
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

    private function convertir($num, $ind = 1) {
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

}

//Se recibe el numero de Cateo
@$idCateo = $_GET["cateo"];
$idCateo = base64_decode($idCateo);
if ($idCateo > 0) {
    $apelacionCateoController = new ComprobanteApelacioncateosController();
    $resultado = $apelacionCateoController->generaComprobante($idCateo);
    if ($resultado["type"] == "OK") {
        header("Content-disposition: attachment; filename=" . $resultado["fileName"]);
        header("Content-type: application/octet-stream");
        readfile("./../../../solicitudespdf/" . $resultado["filePath"]);
    } else {
        echo $resultado["text"];
    }
}
?>
