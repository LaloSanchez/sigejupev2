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

include_once(dirname(__FILE__) . "/../../../webservice/cliente/leyenda/LeyendaCliente.php");
include_once(dirname(__FILE__) . "/../../../tribunal/pdf/html2pdf.class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/selloDigital/Encryption.Class.php");

class OficioOrdenesController {

    private $proveedor;

    public function __construct() {
        
    }

    public function generaComprobante($idOrden = "", $cveFormato = "1") {
        #$cveFormato 1 = PFD , 2 = HTML
        #VALIDAOS LOS DATOS ENVIADOS
        if ($idOrden != "" && $idOrden > 0) {
            #INICAMOS PROCESO DE CONSULTA DE INFORMACION
            $error = false;
            $leyendaStr = "";

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
                #Obtenemos la Leyenda
                try {
                    $leyendaWS = new LeyendaCliente();
                    $leyendaStr = $leyendaWS->getLeyenda();
                } catch (Exception $ex) {
                    $error = true;
                    $tmp = array("type" => "Error", "text" => "ERROR AL CONSUMIR WEB SERVICE DE LEYENDA EN EL SISTEMA DE GESTION");
                }
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
                    if (file_exists("./../../../solicitudespdf/OficioOrdenAprehension_" . $OrdenesDto->getQr() . ".pdf")) {
                        $tmp = array("type" => "OK",
                            "text" => "SE GENERO EL PDF DE LA SOLICTUD CORRECTAMENTE",
                            "fileName" => "OficioOrdenAprehension_" . str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . '.pdf',
                            "file" => "OficioOrdenAprehension_" . $OrdenesDto->getQr() . ".pdf");
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
                            $html.="<tr>\n";
                            $html.="<td colspan='2' style='text-align: center; width: 100%'><img src='../../../vistas/img/logoPjAcuses.jpg'></td>\n";
                            $html.=" </tr>\n";

                            $html.="<tr>\n";
                            $html.="<td colspan='2' style='text-align: center; width: 100%;font-size: 8pt'></td>";
                            $html.="</tr>\n";
                            $html.="<tr>\n";
                            $html.="<td colspan='2' style='text-align: center; width: 100%;font-size: 8pt'>\"" . ucwords(utf8_decode($leyendaStr)) . "\"</td>";
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
                            $html.="<tr>\n";
                            $html.="<td style='text-align: right; width: 40%;font-size: 8pt'></td>\n";
                            $html.="<td style='text-align: right; width: 60%;font-size: 10pt'>Pagina [[page_cu]] de [[page_nb]]</td>\n";
                            $html.=" </tr>\n";
                            if ($SolicitudesordenesDto->getCarpetaInv() != "") {
                                $html.="<tr>";
                                $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                                $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>CARPETA DE INVESTIGACI&Oacute;N:</strong> " . $SolicitudesordenesDto->getCarpetaInv() . "</td>";
                                $html.="</tr>";
                            } else if ($SolicitudesordenesDto->getNuc()) {
                                $html.="<tr>";
                                $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                                $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>NUC:</strong> " . $SolicitudesordenesDto->getNuc() . "</td>";
                                $html.="</tr>";
                            }
                            $html.="<tr>";
                            $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";
                            $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'>Toluca, M&eacute;xico " . ucfirst(strtolower($this->FechaLarga($OrdenesDto->getFechaRespuesta()))) . "</td>";
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
                            $html.="<tr>";
                            $html.="<td style='width:100%; text-align: left; font-size: 10pt;' colspan='4' ><strong>PROCURADOR GENERAL DE JUSTICIA</strong>";
                            $html.="</td>";
                            $html.="</tr>";
                            $html.="<tr>";
                            $html.="<td style='width:100%; text-align: left; font-size: 10pt;' colspan='4' ><strong>DEL ESTADO DE M&Eacute;XICO</strong>";
                            $html.="</td>";
                            $html.="</tr>";
                        }

                        if (!$error) {
                            $html.="<tr>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="<td style='width:25%;'>&nbsp;</td>";
                            $html.="</tr>";
                        }

                        if (!$error) {
                            $html.="<tr>";
                            $html.="<td colspan='4'>";
                            $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 1px black;'>";
                            $html.="<tr>";
                            $html.="<td style='width: 100%; text-align: justify'>En atención a la solicitud hecha en línea por el Agente del Ministerio Público, hago de su conocimiento los puntos resolutivos de la determinación recaída a esa petición, que son del tenor literal siguiente: </td>";
                            $html.="</tr>";
                            $html.="</table>";
                            $html.="</td>";
                            $html.="</tr>";
                            $html.="</table>";
                        }

                        if (!$error) {
                            $oficio = preg_replace("/\n/", "<br>", $OrdenesDto->getOficio());
                            $oficio = preg_replace("/\'/", "\"", $oficio);
                            $oficio = strip_tags($oficio, "<p>");
                            $html.="<p style='width: 100%; text-align: justify'>" . $oficio . "</p>\n";
                        }

                        if (!$error) {
                            $html.= "<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0'>";
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
                            #DATOS JUZGADOS
                            $JuzgadosDao = new JuzgadosDAO();
                            $JuzgadosDto = new JuzgadosDTO();
                            $JuzgadosDto->setCveJuzgado(10322);
                            $JuzgadosDto = $JuzgadosDao->selectJuzgados($JuzgadosDto);
                            if ($JuzgadosDto != "" && count($JuzgadosDto) > 0) {
                                $JuzgadosDto = $JuzgadosDto[0];
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DEL JUZGADO DE LA SOLICITUD");
                            }
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
                            #DATOS DE EL JUEZ AL FINAL DEL DOCUMENTO
                            $html.="<tr>";
                            $html.="<td style='text-align: center;font-size: 9pt' colspan='4'><strong>JUEZ DE " . ucwords($TiposjuzgadoresDto->getDesTipoJuzgador()) . " DEL " . ucwords($JuzgadosDto->getDesJuzgado()) . "</strong></td>";
                            $html.="</tr>";
                            $html.="<tr>";
                            $html.="<td style='text-align: center;font-size: 9pt' colspan='4'><strong>JUEZ</strong></td>";
                            $html.="</tr>";
                            $html.="<tr>";
                            $html.="<td style='text-align: center;font-size: 9pt' colspan='4'><strong>" . $JuzgadoresDto->getTitulo() . " " . $JuzgadoresDto->getNombre() . " " . $JuzgadoresDto->getPaterno() . " " . $JuzgadoresDto->getMaterno() . "</strong></td>";
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
                        
                        if (!$error && $html != "") {
                            #GENERAMOS EL ARCHIVO PDF EN BASE AL CODIGO HTML ANTERIOR
                            date_default_timezone_set("America/Mexico_City");
                            ob_start();
                            echo utf8_encode($html);
                            $content = ob_get_clean();
                            $qr = str_replace("/", "_", $OrdenesDto->getQr());
                            $name = "OficioOrdenAprehension_" . $qr . ".pdf";
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
                                    "fileName" => "OficioOrdenAprehension_" . str_pad($OrdenesDto->getNumeroOrden(), 6, '0', STR_PAD_LEFT) . "/" . $OrdenesDto->getAnioOrden() . '.pdf',
                                    "file" => "OficioOrdenAprehension_" . $qr . ".pdf");
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

        return $dia . " de " . $mes . " de " . $anio;
    }

}

?>
