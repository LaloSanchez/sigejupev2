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
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/solicitudescateos/SolicitudescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/carpetasjudiciales/CarpetasjudicialesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/carpetasjudiciales/CarpetasjudicialesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/amparos/AmparosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/amparos/AmparosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/exhortos/ExhortosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/exhortos/ExhortosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/actuaciones/ActuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/actuaciones/ActuacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposcarpetas/TiposcarpetasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposcarpetas/TiposcarpetasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposactuaciones/TiposactuacionesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposactuaciones/TiposactuacionesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgados/JuzgadosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgados/JuzgadosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imagenes/ImagenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");
include_once(dirname(__FILE__) . "/../../../tribunal/pdf/html2pdf.class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/selloDigital/Encryption.Class.php");

class FirmaPdfController {

    private $proveedor;

    public function __construct() {
        
    }

    public function generaPdf($params, $conFirma) {
        $error = false;
        $arrayDatosPdf = array();
        $cadena = "";
        $firma = "";
        $sello = "";
//        #INICAMOS PROCESO DE CONSULTA DE INFORMACION DE LA ACTUACION - CARPETA
//        if ($params["idCarpetaJudicial"] != "" && $params["idCarpetaJudicial"] > 0) {
//            if ($params["cveTipoCarpeta"] == "8") {
//                #ES AMPARO
//                $amparosDao = new AmparosDAO();
//                $amparosDto = new AmparosDTO();
//                $amparosDto->setIdAmparo($params["idCarpetaJudicial"]);
//                $amparosDto = $amparosDao->selectAmparos($amparosDto);
//                if ($amparosDto != "" && count($amparosDto) > 0) {
//                    $arrayDatosPdf["tipo"] = "carpeta";
//                    $arrayDatosPdf["numero"] = $amparosDto[0]->getNumAmparo();
//                    $arrayDatosPdf["anio"] = $amparosDto[0]->getAniAmparo();
//                    $arrayDatosPdf["cveTipo"] = "8";
//                    $arrayDatosPdf["fechaRegistro"] = $amparosDto[0]->getFechaRegistro();
//                    $arrayDatosPdf["fechaModificacion"] = $amparosDto[0]->getFechaActualizacion();
//                    $arrayDatosPdf["contenidoDocumento"] = $amparosDto[0]->getObservaciones();
//                } else {
//                    $error = true;
//                    $tmp = array("type" => "Error", "text" => "NO SE PUDO OBTENER INFORMACION DEL AMPARO");
//                }
//            } else if ($params["cveTipoCarpeta"] == "7") {
//                #ES EXHORTO
//                $exhortosDao = new ExhortosDAO();
//                $exhortosDto = new ExhortosDTO();
//                $exhortosDto->setIdExhorto($params["idCarpetaJudicial"]);
//                $exhortosDto = $exhortosDao->selectExhortos($exhortosDto);
//                if ($exhortosDto != "" && count($exhortosDto) > 0) {
//                    $arrayDatosPdf["tipo"] = "carpeta";
//                    $arrayDatosPdf["numero"] = $exhortosDto[0]->getNumExhorto();
//                    $arrayDatosPdf["anio"] = $exhortosDto[0]->getAniExhorto();
//                    $arrayDatosPdf["cveTipo"] = "7";
//                    $arrayDatosPdf["fechaRegistro"] = $exhortosDto[0]->getFechaRegistro();
//                    $arrayDatosPdf["fechaModificacion"] = $exhortosDto[0]->getFechaActualizacion();
//                    $arrayDatosPdf["contenidoDocumento"] = $exhortosDto[0]->getObservaciones();
//                } else {
//                    $error = true;
//                    $tmp = array("type" => "Error", "text" => "NO SE PUDO OBTENER INFORMACION DEL EXHORTO");
//                }
//            } else {
//                #ES CARPETA
//                $carpetasjudicialesDao = new CarpetasjudicialesDAO();
//                $carpetasjudicialesDto = new CarpetasjudicialesDTO();
//                $carpetasjudicialesDto->setIdCarpetaJudicial($params["idCarpetaJudicial"]);
//                $carpetasjudicialesDto = $carpetasjudicialesDao->selectCarpetasjudiciales($carpetasjudicialesDto);
//                if ($carpetasjudicialesDto != "" && count($carpetasjudicialesDto) > 0) {
//                    $arrayDatosPdf["tipo"] = "carpeta";
//                    $arrayDatosPdf["numero"] = $carpetasjudicialesDto[0]->getNumero();
//                    $arrayDatosPdf["anio"] = $carpetasjudicialesDto[0]->getAnio();
//                    $arrayDatosPdf["cveTipo"] = $carpetasjudicialesDto[0]->getCveTipoCarpeta();
//                    $arrayDatosPdf["fechaRegistro"] = $carpetasjudicialesDto[0]->getFechaRegistro();
//                    $arrayDatosPdf["fechaModificacion"] = $carpetasjudicialesDto[0]->getFechaActualizacion();
//                    $arrayDatosPdf["contenidoDocumento"] = $carpetasjudicialesDto[0]->getObservaciones();
//                } else {
//                    $error = true;
//                    $tmp = array("type" => "Error", "text" => "NO SE PUDO OBTENER INFORMACION DE LA CARPETA JUDICIAL");
//                }
//            }
//        } else {
//            #ES ACTUACION
//            $actuacionesDao = new ActuacionesDAO();
//            $actuacionesDto = new ActuacionesDTO();
//            $actuacionesDto->setIdActuacion($params["idActuacion"]);
//            $actuacionesDto = $actuacionesDao->selectActuaciones($actuacionesDto);
//            if ($actuacionesDto != "" && count($actuacionesDto) > 0) {
//                $arrayDatosPdf["tipo"] = "actuacion";
//                $arrayDatosPdf["numero"] = $actuacionesDto[0]->getNumero();
//                $arrayDatosPdf["anio"] = $actuacionesDto[0]->getAnio();
//                $arrayDatosPdf["cveTipo"] = $actuacionesDto[0]->getCveTipoActuacion();
//                $arrayDatosPdf["fechaRegistro"] = $actuacionesDto[0]->getFechaRegistro();
//                $arrayDatosPdf["fechaModificacion"] = $actuacionesDto[0]->getFechaActualizacion();
//                $arrayDatosPdf["contenidoDocumento"] = $actuacionesDto[0]->getObservaciones();
//            } else {
//                $error = true;
//                $tmp = array("type" => "Error", "text" => "NO SE PUDO OBTENER INFORMACION DE LA ACTUACION");
//            }
//        }
//
//        #OBTENEMOS LA DESCRIPCION DE LA CARPETA-ACTUACION
//        if (!$error) {
//            if ($arrayDatosPdf["tipo"] == "carpeta") {
//                #DETALLE DE LA CARPETA
//                $tiposcarpetasDao = new TiposcarpetasDAO();
//                $tiposcarpetasDto = new TiposcarpetasDTO();
//                $tiposcarpetasDto->setCveTipoCarpeta($arrayDatosPdf["cveTipo"]);
//                $tiposcarpetasDto = $tiposcarpetasDao->selectTiposcarpetas($tiposcarpetasDto);
//                if ($tiposcarpetasDto != "" && count($tiposcarpetasDto) > 0) {
//                    $arrayDatosPdf["descTipo"] = $tiposcarpetasDto[0]->getDesTipoCarpeta();
//                } else {
//                    $error = true;
//                    $tmp = array("type" => "Error", "text" => "NO SE PUDO OBTENER INFORMACION DEL TIPO DE CARPETA JUDICIAL");
//                }
//            } else {
//                #DETALLE DE LA ACTUACION
//                $tiposactuacionesDao = new TiposactuacionesDAO();
//                $tiposactuacionesDto = new TiposactuacionesDTO();
//                $tiposactuacionesDto->setCveTipoActuacion($arrayDatosPdf["cveTipo"]);
//                $tiposactuacionesDto = $tiposactuacionesDao->selectTiposactuaciones($tiposactuacionesDto);
//                if ($tiposactuacionesDto != "" && count($tiposactuacionesDto) > 0) {
//                    $arrayDatosPdf["descTipo"] = $tiposactuacionesDto[0]->getDesTipoActuacion();
//                } else {
//                    $error = true;
//                    $tmp = array("type" => "Error", "text" => "NO SE PUDO OBTENER INFORMACION DEL TIPO DE ACTUACION");
//                }
//            }
//        }
//
//        #DATOS JUZGADOS
//        if (!$error) {
//            $JuzgadosDao = new JuzgadosDAO();
//            $JuzgadosDto = new JuzgadosDTO();
//            $JuzgadosDto->setCveJuzgado($params["cveJuzgado"]);
//            $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
//            if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
//                $JuzgadosDto = $JuzgadosDto[0];
//            } else {
//                $error = true;
//                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DEL JUZGADO ");
//            }
//        }




        if (!$error) {
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
            }

            if (!$error) {
                #CONSULTAMOS FECHA Y HORA DEL SERVIDOR DE BASE DE DATOS
                $SolicitudescateosDao = new SolicitudescateosDAO();
                $FechaHora = $SolicitudescateosDao->selectFechaHora();
                if ($FechaHora != "") {
                    
                } else {
                    $error = true;
                    $tmp = array("estatus" => "Error", "mensaje" => "NO SE PUDO OBTENER LA FECHA Y HORA DEL SERVIDOR");
                }
            }

            if (!$error) {
                $html.="<tr>";
                $html.="<td style='text-align: right; width: 40%;font-size: 8pt'>Fecha y Hora de creaci&oacute;n de este archivo: " . $FechaHora . "</td>";
                $html.="<td style='text-align: right; width: 60%;font-size: 10pt'>Pagina [[page_cu]] de [[page_nb]]</td>";
                $html.=" </tr>";

                $html.="<tr>";
                $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero de " . $params["descTipoCarpeta"] . ":</strong> " . $params["numCarpeta"] . "/" . $params["anioCarpeta"] . "</td>";
                $html.="</tr>";
                $html.="<tr>";
                $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero de " . $params["descTipoActuacion"] . ":</strong> " . $params["numActuacion"] . "/" . $params["anioActuacion"] . "</td>";
                $html.="</tr>";

                $html.="<tr>";
                $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";
                $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>Fecha de Registro:</strong> " . ucfirst(strtolower($this->FechaLarga($params["fechaRegistro"]))) . "</td>";
                $html.="</tr>";

                $html.="<tr>";
                $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";
                $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>&Uacute;ltima modificaci&oacute;n:</strong> " . ucfirst(strtolower($this->FechaLarga($params["fechaActualizacion"]))) . "</td>";
                $html.="</tr>";

                $html.="<tr>";
                $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";
                $html.="<td style='width:60%; text-align: center'>&nbsp;</td>";
                $html.="</tr>";
                $html.="</table>";
                $html.="</page_header>";
                #TERMINA PAGE HEADER
            }
            if (!$error) {
                if ($conFirma) {
                    #GENERAMOS SELLO DIGITAL
                    #ESTRUCTURA: idCarpetaJudicial|
                    #            idActuacion|
                    #            TipoDocumento|
                    #            cveJuzgado|
                    #            siglasJuzgado|
                    #            fechaActualizacion|
                    #            curp|
                    #            NumEmpleado|
                    #            nombre|
                    #            fechaImpresion
                    $arrayDatosPdf["cadenaOriginal"] = "||" . $params["idCarpetaJudicial"] . "|";
                    $arrayDatosPdf["cadenaOriginal"] .= $params["idActuacion"] . "|";
                    $arrayDatosPdf["cadenaOriginal"] .= $params["cveTipoActuacion"] . "|";
                    $arrayDatosPdf["cadenaOriginal"] .= $params["cveJuzgado"] . "|";
                    $arrayDatosPdf["cadenaOriginal"] .= $params["siglasJuzgados"] . "|";
                    $arrayDatosPdf["cadenaOriginal"] .= $params["fechaActualizacion"] . "|";
                    if (count($params["firmantes"]) > 0) {
                        foreach ($params["firmantes"] as $firmante) {
                            $arrayDatosPdf["cadenaOriginal"] .= $firmante["numEmpleado"] . "-";
                            $arrayDatosPdf["cadenaOriginal"] .= $firmante["nombre"] . "-";
                            $arrayDatosPdf["cadenaOriginal"] .= $firmante["curp"] . ",";
                        }
                        $arrayDatosPdf["cadenaOriginal"] = substr($arrayDatosPdf["cadenaOriginal"], 0, -1);
                        $arrayDatosPdf["cadenaOriginal"] .= "|";
                    } else {
                        $arrayDatosPdf["cadenaOriginal"] .= "|SIN FIRMANTES|";
                    }
                    $arrayDatosPdf["cadenaOriginal"] .= $FechaHora . "||";

                    $cadenaOri = utf8_encode($arrayDatosPdf["cadenaOriginal"]);
                    $cadena = $cadenaOri;
                    $converter = new Encryption;
                    $converter->setPrivateKey($this->extraeLlavePrivada("./../../../tribunal/selloDigital/keystoreTSJEDOMEX.key.pem"));
                    $arrayDatosPdf["selloDigital"] = $converter->encode($cadenaOri);

                    if ($arrayDatosPdf["cadenaOriginal"] != "" && $arrayDatosPdf["selloDigital"] != "") {
                        $sello = $arrayDatosPdf["selloDigital"];
                        $totalCadena = strlen(trim($arrayDatosPdf["cadenaOriginal"]));
                        $pag = ceil($totalCadena / 120);
                    } else {
                        $error = true;
                        $tmp = array("estatus" => "Error", "mensaje" => "ERROR AL GENERAL EL SELLO DIGITAL");
                    }
                }
            }

            if (!$error) {
                #PAGE FOOTER
                if ($conFirma) {
                    $html.="<page_footer>";
                    $html.="<table style='width: 100%; '>";
                    $html.="<tr>";
                    $html.="<td style='width:40%; text-align: center; font-size: 1pt'>Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;xico Poder Judicial del Estado de M&eacute;</td>";
                    $html.="</tr>";
                    $html.="<tr>";
                    $html.="<td style='text-align: left;    width: 100%;font-size: 8pt'>Sello Digital: </td>";
                    $html.="</tr>";
                    for ($index = 0; $index < $pag; $index++) {
                        $html.="<tr>";
                        $html.="<td style='text-align: left;    width: 100%;font-size: 8pt'>" . Trim(substr($arrayDatosPdf["selloDigital"], ($index * 120), 120)) . "</td>";
                        $html.="</tr>";
                    }
                    $html.="</table>";
                    $html.="</page_footer>";
                    #TERMINA PAGE FOOTER
                }
            }

            if (!$error) {
                $html.= "<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0'>";
                $html.="<tr>";
                $html.="<td style='width:25%;'>&nbsp;</td>";
                $html.="<td style='width:25%;'>&nbsp;</td>";
                $html.="<td style='width:25%;'>&nbsp;</td>";
                $html.="<td style='width:25%;'>&nbsp;</td>";
                $html.="</tr>";

                #DATOS JUZGADOS
                $html.="<tr>";
                $html.="<td style='width:100%; text-align: left; font-size: 10pt;' colspan='4' ><strong>Juzgado: </strong>";
                $html.="" . $params["descJuzgado"] . "";
                $html.="</td>";
                $html.="</tr>";
            }


            if (!$error) {
                #CONTENIDO DEL DOCUMENTO
                if ($params["texto"] != "") {
                    $html.="<tr>";
                    $html.="<td colspan='4'>";
                    $html.="<div style='text-align: center; border: 1px ;'><strong>CONTENIDO DEL DOCUMENTO</strong></div>";
                    $html.="</td>";
                    $html.="</tr></table>";
                    $auxString = preg_replace("/\n/", "<br>", $params["texto"]);
                    $auxString = strip_tags($params["texto"], "<table><p><td><tr><span><strong><tbody><a><style>");
                    $auxString = preg_replace("/\'/", "\"", $auxString);
                    $total = strlen(trim($auxString));
                    if ($total >= 1) {
                        $html .= "<p>" . $auxString . "</p>";
                    }
                    $html.="<table style='width: 100%; border: solid 0px black;' ><tr>";
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
                    $tmp = array("estatus" => "Error", "" => "ERROR SIN CONTENIDO DEL DOCUMENTO");
                }
            }

            if (!$error) {
                if ($conFirma) {
                    #DATOS DEL USUARIO
                    $html.="<tr>";
                    $html.="<td text-align: right;font-size: 10pt' colspan='4'>Documento firmado por:</td>";
                    $html.="</tr>";
                    $html.="<br>";

                    if (count($params["firmantes"]) > 0) {
                        foreach ($params["firmantes"] as $firmante) {
                            $html.="<tr>";
                            $html.= "<td text-align: right;font-size: 10pt' colspan='4'>";
                            $html .= "<b>Nombre:</b>" . $firmante["nombre"] . "<br>";
                            $html .= "<b>CURP:</b>" . $firmante["curp"] . "<br>";
                            $html .= "<b>Firma:</b>" . $firmante["firma"] . "<br>";
                            $html .= "<b>Fecha de Firma:</b>" . $firmante["fechaFirma"];
                            $html .= "</td>";
                            $html.="</tr>";
                        }
                    } else {
                        $html.="<tr>";
                        $html.="<td text-align: right;font-size: 10pt' colspan='4'>Sin Firmantes Enviados</td>";
                        $html.="</tr>";
                    }

                    $html.="<tr>";
                    $html.="<td>&nbsp;</td>";
                    $html.="</tr>";

                    $html.="<tr>";
                    $html.="<td>&nbsp;</td>";
                    $html.="</tr>";

                    #QR Y SELLO DIGITAL
                    $html.="<tr>";
                    $html.="<td style='width:25%; text-align: center' rowspan='1'><qrcode value='http://10.22.165.25/sigejupeSVN/fachadas/sigejupe/firmapdf/cadena.php?cadena=" . $arrayDatosPdf["cadenaOriginal"] . "' ec='L' style='width: 30mm; border: 0px solid #000000;'></qrcode></td>";
                    $html.="<td style='width:75%; text-align: center' colspan='3'>";
                    $html.="<table border='0' >";

                    $html.="<tr>";
                    $html.="<td style='text-align: left;'>Sello Digital:</td>";
                    $html.="</tr>";

                    $totalCadena = strlen(trim($arrayDatosPdf["selloDigital"]));
                    $pag = ceil($totalCadena / 70);

                    for ($index = 0; $index < $pag; $index++) {
                        $html.="<tr>";
                        $html.="<td style='text-align: left;    width: 20%;font-size: 8pt'>" . Trim(substr($arrayDatosPdf["selloDigital"], ($index * 70), 70)) . "</td>";
                        $html.="</tr>";
                    }



                    $totalCadena = strlen(trim($arrayDatosPdf["cadenaOriginal"]));
                    $pag = ceil($totalCadena / 70);
                    $html.="<tr>";
                    $html.="<td>&nbsp;</td>";
                    $html.="</tr>";


                    $html.="<tr>";
                    $html.="<td style='text-align: left;'>Cadena Original:</td>";
                    $html.="</tr>";
                    for ($index = 0; $index < $pag; $index++) {

                        $html.="<tr>";
                        $html.="<td style='text-align: left; width: 20%;font-size: 8pt'  >" . Trim(substr($arrayDatosPdf["cadenaOriginal"], ($index * 70), 70)) . "</td>";
                        $html.="</tr>";
                    }

                    $html.="</table>";
                    $html.="</td>";
                    $html.="</tr>";
                }


                $html.="</table>";
                $html.="</page>";
            }

//            echo $html;
            if (!$error && $html != "") {
                #GENERAMOS EL ARCHIVO PDF EN BASE AL CODIGO HTML ANTERIOR
                date_default_timezone_set("America/Mexico_City");
                ob_start();
                echo $html;
                $content = ob_get_clean();
//                $name = "acuerdoPrueba.pdf";
//                $ruta = "/solicitudespdf/" . $name;
                $generaPDF = false;

                try {
                    // init HTML2PDF
                    $html2pdf = new HTML2PDF('P', 'A4', 'es', true, 'UTF-8', array(0, 0, 0, 0));
                    $html2pdf->pdf->SetAuthor("PODER JUDICIAL DEL ESTADO DE MEXICO");
                    $html2pdf->writeHTML($content);
                    $html2pdf->Output("./" . $params["rutaDestino"], 'F');
                    $generaPDF = true;
                } catch (HTML2PDF_exception $e) {
                    $generaPDF = false;
                }

                if ($generaPDF) {
                    #ACTUALIZAMOS EL REGISTRO DE LA TABLAS IMAGENES
                    $imagedata = file_get_contents("./" . $params["rutaDestino"]);

                    $imagenesDao = new ImagenesDAO();
                    $imagenesDto = new ImagenesDTO();
                    $imagenesDto->setIdImagen($params["idImagen"]);
                    $imagenesDto->setAdjunto("S");
                    $imagenesDto->setBase64(base64_encode($imagedata));
                    $imagenesDto = $imagenesDao->updateImagenes($imagenesDto);
                    if ($imagenesDto != "" && count($imagenesDto) > 0) {
                        $tmp = array("estatus" => "ok",
                            "mesnaje" => "SE GENERO EL PDF CORRECTAMENTE",
                            "cadena" => $cadena,
                            "sello" => $sello,
                            "firma" => "");
                        /* #DECODIFICAR BASE 64
                          $binary = base64_decode($imagenesDto[0]->getBase64());
                          file_put_contents('my.pdf', $binary);
                          header('Content-type: application/pdf');
                          header('Content-Disposition: attachment; filename="my.pdf"');
                          echo $binary;
                         */
                    } else {
                        $tmp = array("estatus" => "Error",
                            "" => "ERROR AL ACTUALIZAR LA INFORMACI�N DE LA IMAGEN",
                            "file" => "");
                        unlink("./" . $params["rutaDestino"]);
                    }
                } else {
                    $tmp = array("estatus" => "Error",
                        "" => "ERROR AL GENERAL EL PDF DE LA  SOLICITUD. DETALLE DEL ERROR:" . $e,
                        "file" => "");
                }
            }

            if (!$error) {
                
            }
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

    public function extraeLlavePrivada($archivo) {
        $fp = fopen($archivo, "r");
        $privKey = fread($fp, 8192);
        fclose($fp);

        return $privKey;
    }

}

?>
