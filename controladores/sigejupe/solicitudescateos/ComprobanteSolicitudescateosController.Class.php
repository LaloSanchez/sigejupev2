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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/delitos/DelitosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/delitos/DelitosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/terminos/TerminosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/terminos/TerminosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imagenes/ImagenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/documentosimg/DocumentosimgDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/documentosimg/DocumentosimgDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/antecedescarpetas/AntecedescarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/antecedescarpetas/AntecedescarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");

include_once(dirname(__FILE__) . "/SolicitudescateosController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/pdf/html2pdf.class.php");

class ComprobanteSolicitudescateosController {

    private $proveedor;

    public function __construct() {
        
    }

    public function generaComprobante($idCateo = "", $cveFormato = "1") {
        #$cveFormato 1 = PFD , 2 = HTML
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
//                print_r($CateosDto);
//                echo "<br><br>";
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
//                    print_r($SolicitudescateosDto);
//                    echo "<br><br>";
                } else {
                    $error = true;
                    $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DE LA SOLICITUD DE CATEO");
                }
            }

            #Obtenemos la carpeta de investigacion
            if (!$error) {
                $AntecedesDto = new AntecedescarpetasDTO();
                $AntecedesDao = new AntecedescarpetasDAO();
                $AntecedesDto->setActivo("S");
                $AntecedesDto->setIdCarpetaHija($SolicitudescateosDto->getIdSolicitudCateo());
                $AntecedesDto->setCveTipoCarpeta(9);
                $AntecedesDto = $AntecedesDao->selectAntecedescarpetas($AntecedesDto);
                $carpetasDto = array();
                if ($AntecedesDto != "") {
                    $AntecedesDto = $AntecedesDto[0];
                    $carpetasDto = new CarpetasjudicialesDTO();
                    $carpetasDao = new CarpetasjudicialesDAO();
                    $carpetasDto->setActivo("S");
                    $carpetasDto->setIdCarpetaJudicial($AntecedesDto->getIdCarpetaPadre());
                    $carpetasDto = $carpetasDao->selectCarpetasjudiciales($carpetasDto);
                    if ($carpetasDto != "") {
                        $carpetasDto = $carpetasDto[0];
                    } else {
                        $error = true;
                        $tmp = ["type" => "Error", "text" => "ANTECEDES NO GENERADO Carpetas Judiciales"];
                    }
                } else {
//                    $error = true;
                    $tmp = ["type" => "Error", "text" => "ANTECEDES NO GENERADO"];
                }
            }

            #VERIFICAMOS SI EL ARCHIVO DEL CATEO YA EXISTE, SI EXISTE SOLO SE DESCARGA, SI NO EXISTE SE CREA PARA QUE SE DESCARGUE            
            if (file_exists("./../../../solicitudespdf/" . $CateosDto->getQr() . ".pdf")) {
                $tmp = array("type" => "OK",
                    "text" => "SE GENERO EL PDF DE LA SOLICTUD CORRECTAMENTE",
                    "fileName" => str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . '.pdf',
                    "filePath" => $CateosDto->getQr() . ".pdf");
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
//                    print_r($FechaHora);
//                    echo "<br><br>";
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
                    $SolicitudescateosController = new SolicitudescateosController();
                    $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>Fecha Solicitud:</strong> " . ucfirst(strtolower($SolicitudescateosController->FechaLarga($CateosDto->getFechaRegistro()))) . "</td>";
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
//                        print_r($JuzgadosDto);
//                        echo "<br><br>";
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
                    $PersonasDao = new PersonasDAO();
                    $PersonasDto = new PersonasDTO();
                    $PersonasDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                    $PersonasDto->setCveOrigen("1"); # 1 - ORIGEN SOLICITUD DE CATEO
                    $PersonasDto = $PersonasDao->selectPersonas($PersonasDto);
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
                    #CONSULTAMOS INFORMACION DE LOS OBJETOS DE LA SOLICITUD
                    $ObjetosDao = new ObjetosDAO();
                    $ObjetosDto = new ObjetosDTO();
                    $ObjetosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                    $ObjetosDto->setCveOrigen("1"); # 1 - ORIGEN SOLICITUD DE CATEO
                    $ObjetosDto = $ObjetosDao->selectObjetos($ObjetosDto);
                    if ($ObjetosDto != "" && count($ObjetosDto) > 0) {
                        $html.="<div style='text-align: center'><strong>BUSCAR ";
                        if (count($ObjetosDto) > 1) {
                            $html.="LOS";
                        } else {
                            $html.="EL";
                        }
                        $html.= " OBJETO";
                        if (count($ObjetosDto) > 1) {
                            $html.="S";
                        }
                        $html.= " SIGUIENTE";
                        if (count($ObjetosDto) > 1) {
                            $html.="S";
                        }
                        $html.=":</strong></div>";
                        $countObjetos = 1;
                        foreach ($ObjetosDto as $Objeto) {
                            $html.="<p><strong>$countObjetos.- Descripci&oacute;n: </strong>" . $Objeto->getDesObjeto() . "</p>";
                            $html.="<p><strong>Domicilio :</strong> " . $Objeto->getDomicilio() . "</p>";
                            $countObjetos++;
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
                    #CONSULTAMOS INFORMACION DE LOS IMPUTADOS DE LA SCOLICITUD DE CATEO
                    $ImputadoscateosDao = new ImputadoscateosDAO();
                    $ImputadoscateosDto = new ImputadoscateosDTO();
                    $ImputadoscateosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                    $ImputadoscateosDto->setActivo("S");
                    $ImputadoscateosDto = $ImputadoscateosDao->selectImputadoscateos($ImputadoscateosDto);
                    if ($ImputadoscateosDto != "" && count($ImputadoscateosDto) > 0) {
                        $html.="<div style='text-align: center'><strong>IMPUTADO";
                        if (count($ImputadoscateosDto) > 1) {
                            $html.="S";
                        }
                        $html.="</strong></div>";
                        $countImputados = 1;
                        foreach ($ImputadoscateosDto as $ImputadoCateo) {
                            $html.="<p><strong>$countImputados.- Nombre:</strong> ";
                            if ($ImputadoCateo->getCveTipoPersona() == "1") {
                                $html.= $ImputadoCateo->getNombre() . " " . $ImputadoCateo->getPaterno() . " " . $ImputadoCateo->getMaterno();
                            } else {
                                $html.=$ImputadoCateo->getNombreMoral();
                            }
                            $html.="</p>";
                            $html.="<p><strong>Domicilio:</strong> " . $ImputadoCateo->getDomicilio() . "</p>";
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
                    #CONSULTAMOS INFORMACION DE LOS OFENDIDOS DE LA SCOLICITUD DE CATEO
                    $OfendidoscateosDao = new OfendidoscateosDAO();
                    $OfendidoscateosDto = new OfendidoscateosDTO();
                    $OfendidoscateosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                    $OfendidoscateosDto->setActivo("S");
                    $OfendidoscateosDto = $OfendidoscateosDao->selectOfendidoscateos($OfendidoscateosDto);
                    if ($OfendidoscateosDto != "" && count($OfendidoscateosDto) > 0) {
                        $html.="<div style='text-align: center'><strong>VICTIMA";
                        if (count($OfendidoscateosDto) > 1) {
                            $html.="S";
                        }
                        $html.="</strong></div>";
                        $countOfendidos = 1;
                        foreach ($OfendidoscateosDto as $OfendidoCateo) {
                            $html.="<p><strong>$countOfendidos.- Nombre: </strong>";
                            $tutoresString = "";
                            if ($OfendidoCateo->getCveTipoPersona() == "1" || $OfendidoCateo->getCveTipoPersona() == "4" || $OfendidoCateo->getCveTipoPersona() == "5") {
                                $html.= $OfendidoCateo->getNombre() . " " . $OfendidoCateo->getPaterno() . " " . $OfendidoCateo->getMaterno();
                                if ($OfendidoCateo->getCveTipoPersona() == "4" || $OfendidoCateo->getCveTipoPersona() == "5") {
                                    // Obtenemos la Informacion deL Tutor del Infante
                                    $tutorDto = new TutoresofendidoscateosDTO();
                                    $tutorDto->setIdOfendidoCateo($OfendidoCateo->getIdOfendidoCateo());
                                    $tutorDao = new TutoresofendidoscateosDAO();
                                    $tutorDto = $tutorDao->selectTutoresofendidoscateos($tutorDto);
                                    if ($tutorDto != "" && count($tutorDto) > 0) {
                                        $tutorDto = $tutorDto[0];
                                        $nombreTutor = strtoupper(utf8_encode($tutorDto->getNombre() . " " . $tutorDto->getPaterno() . " " . $tutorDto->getMaterno()));
                                        $tutoresString.="<p style='margin-left: 50px'><strong>Nombre del Tutor: </strong>" . $nombreTutor . "</p>";
                                        $tutoresString.="<p style='margin-left: 50px'><strong>Domicilio del Tutor: </strong>" . strtoupper($tutorDto->getDomicilio()) . "</p>";
                                    } else {
                                        $tutoresString.="<p  style='margin-left: 10px'><strong>No tiene tutor asignado. </strong>";
                                    }
                                }
                            } else {
                                $html.=$OfendidoCateo->getNombreMoral();
                            }
                            $html.="</p>";
                            $html.="<p><strong>Domicilio: </strong>" . $OfendidoCateo->getDomicilio() . "</p>";
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
                    $DelitoscateosDao = new DelitoscateosDAO();
                    $DelitoscateosDto = new DelitoscateosDTO();
                    $DelitoscateosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                    $DelitoscateosDto->setActivo("S");
                    $DelitoscateosDto = $DelitoscateosDao->selectDelitoscateos($DelitoscateosDto);
                    if ($DelitoscateosDto != "" && count($DelitoscateosDto) > 0) {
                        $html.="<div style='text-align: center'><strong>DELITO";
                        if (count($DelitoscateosDto) > 1) {
                            $html.="S";
                        }
                        $html .= "</strong></div>";
                        $DelitosDao = new DelitosDAO();
                        $countDelitos = 1;
                        foreach ($DelitoscateosDto as $DelitoCateo) {
                            $DelitosDto = new DelitosDTO();
                            $DelitosDto->setCveDelito($DelitoCateo->getCveDelito());
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
                    $documentosdto->setIdCarpetaJudicial($CateosDto->getIdCateo());
                    $documentosdto->setCveTipoDocumento(19);
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
                    $solicitud = preg_replace("/\n/", "<br>", $CateosDto->getSolicitud());
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
                        $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($SolicitudescateosDto->getCveUsuario()), true);
                    } catch (Exception $ex) {
                        $error = true;
                        $tmp = array("type" => "Error", "text" => "ERROR AL CONSUMIR WEB SERVICE DEL MINISTERIO PUBLICO EN EL SISTEMA DE GESTION");
                    }

                    #GENERAMOS CODIGO QR y CONSULTAMOS INFORMACION DEL MP
                    $html.="<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0' ><tr>";
                    $html.="<td style='width:25%; text-align: center' rowspan='1'><qrcode value='" . $CateosDto->getQr() . "' ec='L' style='width: 50mm; border: 0px solid #000000;'></qrcode></td>";
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
                    $qr = str_replace("/", "_", $CateosDto->getQr());
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
                            "fileName" => str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . '.pdf',
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
            $tmp = array("type" => "Error", "text" => "IDENTIFICADOR DE CATEO NO VALIDO");
        }
        return $tmp;
    }

}

//
//@$idCateo = "388";
//
//$ComprobanteSolicitudescateosController = new ComprobanteSolicitudescateosController();
//print_r($ComprobanteSolicitudescateosController->generaComprobante($idCateo));
?>
