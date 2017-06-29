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

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadorescateos/JuzgadorescateosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadorescateos/JuzgadorescateosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/juzgadores/JuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/juzgadores/JuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/generos/GenerosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/generos/GenerosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/objetos/ObjetosDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/objetos/ObjetosDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/personas/PersonasDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/personas/PersonasDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/ministeriosresponsables/MinisteriosresponsablesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/ministeriosresponsables/MinisteriosresponsablesDAO.Class.php");

//include_once(dirname(__FILE__) . "/SolicitudescateosController.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/usuarios/UsuarioCliente.php");
include_once(dirname(__FILE__) . "/../../../tribunal/pdf/html2pdf.class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/selloDigital/Encryption.Class.php");

class ComprobanteCateosController {

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
                    #VERIFICAMOS SI EL ARCHIVO DEL CATEO YA EXISTE, SI EXISTE SOLO SE DESCARGA, SI NO EXISTE SE CREA PARA QUE SE DESCARGUE
                    if (file_exists("./../../../solicitudespdf/Respuesta_" . $CateosDto->getQr() . ".pdf")) {
                        $tmp = array("type" => "OK",
                            "text" => "SE GENERO EL PDF DE LA SOLICTUD CORRECTAMENTE",
                            "fileName" => "Respuesta_" . str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . '.pdf',
                            "file" => "Respuesta_" . $CateosDto->getQr() . ".pdf");
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
                            $html.="<td colspan='2' style='text-align: center; width: 100%;font-size: 8pt'>M&oacute;dulo de Solicitudes de Cateo del Sistema de Gesti&oacute;n Judicial Penal (SIGEJUPE) del Poder Judicial del Estado de M&eacute;xico</td>";
                            $html.="</tr>";
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
                            $html.="<tr>";
                            $html.="<td style='text-align: right; width: 40%;font-size: 8pt'>Fecha y Hora de creaci&oacute;n de este archivo: " . $FechaHora . "</td>";
                            $html.="<td style='text-align: right; width: 60%;font-size: 10pt'>Pagina [[page_cu]] de [[page_nb]]</td>";
                            $html.=" </tr>";
                            $html.="<tr>";
                            $html.="<td style='width:40%; text-align: center' rowspan='1'>&nbsp;</td>";
                            $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero Cateo:</strong> " . str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . "</td>";

                            $html.="</tr>";
                            $html.="<tr>";
                            $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";
                            $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>Fecha de Solicitud:</strong> " . ucfirst(strtolower($this->FechaLarga($CateosDto->getFechaRegistro()))) . "</td>";
                            $html.="</tr>";
                            $html.="<tr>";
                            $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";

                            $html.="<td style='width:60%; text-align: right; font-size: 9pt' colspan='1'><strong>Fecha de Respuesta:</strong> " . ucfirst(strtolower($this->FechaLarga($CateosDto->getFechaRespuesta()))) . "</td>";
                            $html.="</tr>";
                            $html.="<tr>";
                            $html.="<td style='width:40%; text-align: center'>&nbsp;</td>";
                            $html.="<td style='width:60%; text-align: center'>&nbsp;</td>";
                            $html.="</tr>";
                            $html.="</table>";
                            $html.="</page_header>";
                            #TERMINA PAGE HEADER

                            $totalCadena = strlen(trim($CateosDto->getSelloDigital()));
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
                                $html.="<td style='text-align: left;    width: 100%;font-size: 8pt'>" . Trim(substr($CateosDto->getSelloDigital(), ($index * 120), 120)) . "</td>";
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
                            $JuzgadosDto->setCveJuzgado($SolicitudescateosDto->getCveJuzgadoDesahoga());
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
                            if (((int) $SolicitudescateosDto->getNumero() > 0)) {
                                $html.="<tr>";
                                $html.="<td style='width:100%; text-align: left; font-size: 10pt;' colspan='4'><strong>N&uacute;mero Causa:</strong>";
                                $html.=$SolicitudescateosDto->getNumero() . "/" . $SolicitudescateosDto->getAnio() . " <strong>del</strong> ";

                                $JuzgadosCausaDao = new JuzgadosDAO();
                                $JuzgadosCausaDto = new JuzgadosDTO();
                                $JuzgadosCausaDto->setCveJuzgado($SolicitudescateosDto->getCveJuzgadoDesahoga());
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
                            $html.=$SolicitudescateosDto->getCarpetaInv() . "</td>";
                            $html.="</tr>";

                            $html.="<tr>";
                            $html.="<td style='width:100%; text-align: left' colspan='4'><strong>NUC: </strong>";
                            $html.=$SolicitudescateosDto->getNuc() . "</td>";
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
                            #CONSULTAMOS RELACION SOLICITUD CATEO - JUZGADOR
                            $JuzgadorescateosDao = new JuzgadorescateosDAO();
                            $JuzgadorescateosDto = new JuzgadorescateosDTO();
                            $JuzgadorescateosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                            $JuzgadorescateosDto = $JuzgadorescateosDao->selectJuzgadorescateos($JuzgadorescateosDto);
                            if ($JuzgadorescateosDto != "" && count($JuzgadorescateosDto) > 0) {
                                $JuzgadorescateosDto = $JuzgadorescateosDto[0];
//                    print_r($JuzgadorescateosDto);
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO RELACION ENTRE LA SOLICITUD DE CATEO Y EL JUZGADOR");
                            }
                        }

                        if (!$error) {
                            #CONSULTAMOS LA INFORMACION DEL JUEZ 
                            $JuzgadoresDao = new JuzgadoresDAO();
                            $JuzgadoresDto = new JuzgadoresDTO();
                            $JuzgadoresDto->setIdJuzgador($JuzgadorescateosDto->getIdJuzgador());
                            $JuzgadoresDto = $JuzgadoresDao->selectJuzgadores($JuzgadoresDto);
                            if ($JuzgadoresDto != "" && count($JuzgadoresDto) > 0) {
                                $JuzgadoresDto = $JuzgadoresDto[0];
//                    print_r($JuzgadoresDto);
//                    echo "<br><br>";
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
//                    print_r($TiposjuzgadoresDto);
//                    echo "<br><br>";
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
//                    print_r($GenerosDto);
//                    echo "<br><br>";
                            } else {
                                $error = true;
                                $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DE GENEROS");
                            }
                        }

                        if (!$error) {
                            $html.="<tr>";
                            $html.="<td colspan='4'>";
                            $html.="<div style='text-align: center; border: 1px ;'><strong>ORDEN DE CATEO ";
                            if ($CateosDto->getCveRespuestaSolicitudCateo() == "1") {
                                $html.="NEGADA ";
                            }

                            $html.= "</strong></div>";
                            $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 1px black;'>";
                            $html.="<tr>";
                            $html.="<td style='width: 100%; text-align: justify'>El " . $JuzgadoresDto->getTitulo() . " " . $JuzgadoresDto->getNombre() . " " . $JuzgadoresDto->getPaterno() . " " . $JuzgadoresDto->getMaterno() . ", juez de " . $TiposjuzgadoresDto->getDesTipoJuzgador() . " del " . $JuzgadosDto->getDesJuzgado() . ", ";

                            switch ($CateosDto->getCveRespuestaSolicitudCateo()) {
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
                                $listaUsuarios = json_decode($UsuarioCliente->selectUsuarios_In($SolicitudescateosDto->getCveUsuario()), true);
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
                            $html.="el cateo solicitado por el LIC. " . $nombreMP . " Agente del Ministerio P&uacute;blico de la Procuradur&iacute;a General de Justicia del Estado, en los t&eacute;rminos siguientes:</td>";
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
                            if ($CateosDto->getCveRespuestaSolicitudCateo() != 1) {
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
                                $PersonasDao = new PersonasDAO();
                                $PersonasDto = new PersonasDTO();
                                $PersonasDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                                $PersonasDto->setCveOrigen("2");
                                $PersonasDto = $PersonasDao->selectPersonas($PersonasDto);
                                if ($PersonasDto != "" && count($PersonasDto) > 0) {
//                        print_r($PersonasDto);
//                        echo "<br><br>";
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
                                    $countPerson = 1;
                                    foreach ($PersonasDto as $Persona) {
                                        $detGenero = "NO ESPECIFICADO";
                                        foreach ($GenerosDto as $Genero) {
                                            if ($Genero->getCveGenero() == $Persona->getCveGenero()) {
                                                $detGenero = $Genero->getDesGenero();
                                                break;
                                            }
                                        }
                                        $html.="<p><strong>$countPerson .- Nombre: </strong> " . $Persona->getNombre() . " " . $Persona->getPaterno() . " " . $Persona->getMaterno() . " ( " . $detGenero . " )</p>";
                                        $html.="<p><strong>Domicilio: </strong>" . $Persona->getDomicilio() . "</p>";
                                        $countPerson++;
                                    }
                                    $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%;'>";
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

                                #OBTENEMOS OBJETOS
                                $ObjetosDao = new ObjetosDAO();
                                $ObjetosDto = new ObjetosDTO();
                                $ObjetosDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                                $ObjetosDto->setCveOrigen("2");
                                $ObjetosDto = $ObjetosDao->selectObjetos($ObjetosDto);
                                if ($ObjetosDto != "" && count($ObjetosDto) > 0) {
//                        print_r($ObjetosDto);
//                        echo "<br><br>";
                                    $html.="<tr>";
                                    $html.="<td colspan='4'>";
                                    $html.="<div style='text-align: center'><strong>BUSCAR ";
                                    if (count($ObjetosDto) > 1) {
                                        $html.="LOS";
                                    } else {
                                        $html.="EL";
                                    }
                                    $html.=" OBJETO ";
                                    if (count($ObjetosDto) > 1) {
                                        $html.="S";
                                    }
                                    $html.=" SIGUIENTE";
                                    if (count($ObjetosDto) > 1) {
                                        $html.="S";
                                    }
                                    $html.=":</strong></div></td></tr></table>";
                                    $countObjetos = 1;
                                    foreach ($ObjetosDto as $Objeto) {
                                        $html.="<p><strong>$countObjetos .- Descripci&oacute;n: </strong>" . $Objeto->getDesObjeto() . "</p>";
                                        $html.="<p><strong>Domicilio: </strong>" . $Objeto->getDomicilio() . "</p>";
                                        $countObjetos++;
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
                                if ($CateosDto->getFechaPractica() != "" || $CateosDto->getHorasPractica() != "") {
                                    $html.="<tr>";
                                    $html.="<td colspan='4'>";
                                    $html.="<div style='text-align: center; border: 1px ;'><strong>PR&Aacute;CTICA</strong></div>";
                                    $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 1px black;'>";
                                    if ($CateosDto->getFechaPractica() != "" && ($CateosDto->getHorasPractica() == "" || $CateosDto->getHorasInforme() == "0")) {
                                        $html.="<tr>";
                                        $html.="<td style='width: 50%; text-align: center'><b>Fecha</b></td>";
                                        $html.="<td style='width: 50%; text-align: center'><b>Hora</b></td>";
                                        $html.="</tr>";
                                        $html.="<tr>";
                                        $html.="<td style='width: 50%; text-align: center'><b>" . $this->cambiaf_a_normal($CateosDto->getFechaPractica()) . "</b></td>";
                                        $html.="<td style='width: 50%; text-align: center'><b>" . $CateosDto->getHoraPractica() . "</b></td>";
                                        $html.="</tr>";
                                    } else {
                                        $html.="<tr>";
                                        $html.="<td style='width: 50%; text-align: right'><b>Plazo m&aacute;ximo en horas: </b></td>";
                                        $html.="<td style='width: 50%; text-align: left'><b>" . $CateosDto->getHorasPractica() . "</b></td>";
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

                                #OBTENEMOS DATOS DE EL INFORME
                                if ($CateosDto->getFechaInforme() != "" || $CateosDto->getHorasInforme() != "") {
                                    $html.="<tr>";
                                    $html.="<td colspan='4'>";
                                    $html.="<div style='text-align: center; border: 1px ;' ><strong>INFORME</strong></div>";
                                    $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 1px black;'>";
                                    $html.="<tr>";
                                    $html.="<td colspan='2' style='width: 100%; text-align: left'>Se deber&aacute; emitir un informe sobre la ejecuci&oacute;n que se brinda a esta orden de cateo, preferentemente, por el Agente del Ministerio P&uacute;blico solicitante.</td>";
                                    $html.="</tr>";
                                    if ($CateosDto->getFechaInforme() != "" && ($CateosDto->getHorasInforme() == "" || $CateosDto->getHorasInforme() == "0")) {
                                        $html.="<tr>";
                                        $html.="<td style='width: 50%; text-align: center'>Fecha</td>";
                                        $html.="<td style='width: 50%; text-align: center'>Hora</td>";
                                        $html.="</tr>";
                                        $html.="<tr>";
                                        $html.="<td style='width: 50%; text-align: center'><b>" . $this->cambiaf_a_normal($CateosDto->getFechaInforme()) . "</b></td>";
                                        $html.="<td style='width: 50%; text-align: center'><b>" . $CateosDto->getHoraInforme() . "</b></td>";
                                        $html.="</tr>";
                                    } else {
                                        $html.="<tr>";
                                        $html.="<td style='width: 50%; text-align: right'><b>Plazo m&aacute;ximo en horas:</b></td>";
                                        $html.="<td style='width: 50%; text-align: left'><b>" . $CateosDto->getHorasInforme() . "</b></td>";
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
                                }
                            }
                        }

                        if (!$error) {
                            #CATEO NEGADO
                            if ($CateosDto->getCveRespuestaSolicitudCateo() == "1" || $CateosDto->getCveRespuestaSolicitudCateo() == "3") {
                                $html.="<tr>";
                                $html.="<td colspan='4'>";
                                $html.="<div style='text-align: center; border: 1px ;'><strong>AUTORIZACI&Oacute;N NEGADA</strong></div>";
                                $html.="</td>";
                                $html.="</tr></table>";
                                $negada = preg_replace("/\n/", "<br>", $CateosDto->getNegada());
                                $negada = strip_tags($negada, "<p>");
                                $negada = preg_replace("/\'/", "\"", $negada);
                                $total = strlen(trim($negada));
                                if ($total >= 1) {
                                    //$paginas = ceil($total / 2258);
                                    //for ($index = 0; $index < $paginas; $index++) {
                                    //$text = Trim(substr($negada, ($index * (2258)), (2258)));
                                    //$html.="<tr>\n";
                                    //$html.="<td colspan='4' style='width:100%; text-align: justify;font-size: 10pt'>\n
                                    //<p>" . $text . "</p>\n
                                    //</td>\n";
                                    //$html.="</tr>\n";
                                    //}
                                    $html .= "<p>$negada</p>";
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
                            }
                        }

                        if (!$error) {
                            #LEYENDA  DE LA RESPUESTA DEL JUEZ
                            if ($CateosDto->getCveRespuestaSolicitudCateo() != "") {
                                $html.="<tr>";
                                $html.="<td colspan='4'>";
                                $html.="<table border='0' cellpadding='2' cellspacing='0' style='width: 100%; border: solid 1px black;'>";
                                $html.="<tr>";
                                if ($CateosDto->getCveRespuestaSolicitudCateo() == 3) {
                                    $html.="<td  style='width: 100%; text-align: justify'>La presente orden de cateo y su negativa parcial, se sustenta en la resoluci&oacute;n siguiente: </td>";
                                }
                                if ($CateosDto->getCveRespuestaSolicitudCateo() == 2) {
                                    $html.="<td style='width: 100%; text-align: justify'>La presente orden de cateo se sustenta en la resoluci&oacute;n siguiente:</td>";
                                }
                                if ($CateosDto->getCveRespuestaSolicitudCateo() == 1) {
                                    $html.="<td style='width: 100%; text-align: justify'>La negativa de orden de cateo se sustenta en la resoluci&oacute;n siguiente:</td>";
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
                            #RESOLUCION DE LA RESPUESTA DEL CATEO
                            if ($CateosDto->getConcedida() != "") {
                                $html.="<tr>";
                                $html.="<td colspan='4'>";
                                $html.="<div style='text-align: center; border: 1px ;'><strong>RESOLUCI&Oacute;N</strong></div>";
                                $html.="</td>";
                                $html.="</tr></table>";
                                $concedida = preg_replace("/\n/", "<br>", $CateosDto->getConcedida());
                                $concedida = strip_tags($concedida, "<p>");
                                $concedida = preg_replace("/\'/", "\"", $concedida);
                                $total = strlen(trim($concedida));
                                if ($total >= 1) {
                                    $html .= "<p>$concedida</p>";
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
                            }
                        }

                        if (!$error) {
                            #LISTA DE MINISTERIOS PUBLICOS RESPONSABLES
                            if ($CateosDto->getCveRespuestaSolicitudCateo() != "1") {
                                $MinisteriosresponsablesDao = new MinisteriosresponsablesDAO();
                                $MinisteriosresponsablesDto = new MinisteriosresponsablesDTO();
                                $MinisteriosresponsablesDto->setIdSolicitudCateo($SolicitudescateosDto->getIdSolicitudCateo());
                                $MinisteriosresponsablesDto = $MinisteriosresponsablesDao->selectMinisteriosresponsables($MinisteriosresponsablesDto);
                                if ($MinisteriosresponsablesDto != "" && count($MinisteriosresponsablesDto) > 0) {
//                        print_r($MinisteriosresponsablesDto);
//                        echo "<br><br>";
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
                            $html.="<td style='width:25%; text-align: center' rowspan='1'><qrcode value='" . $CateosDto->getQr() . "' ec='L' style='width: 30mm; border: 0px solid #000000;'></qrcode></td>"; //$html.="<img src='generaCodigo.php?referencia=000001/13' width='100%' height='50px'>";
                            $html.="<td style='width:75%; text-align: center' colspan='3'>";
                            $html.="<table border='0' >";

                            $html.="<tr>";
                            $html.="<td style='text-align: left;'>Firma Electrónica:</td>";
                            $html.="</tr>";

                            $totalCadena = strlen(trim($CateosDto->getSelloDigital()));
                            $pag = ceil($totalCadena / 70);

                            for ($index = 0; $index < $pag; $index++) {
                                $html.="<tr>";
                                $html.="<td style='text-align: left;    width: 20%;font-size: 8pt'>" . Trim(substr($CateosDto->getSelloDigital(), ($index * 70), 70)) . "</td>";
                                $html.="</tr>";
                            }

                            $converter = new Encryption;
                            $converter->setPrivateKey($CateosDao->extraeLlavePrivada("selloDigital/keystoreTSJEDOMEX.key.pem"));
                            $strCadenaOrig = $converter->decode($CateosDto->getSelloDigital());
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
                            $qr = str_replace("/", "_", $CateosDto->getQr());
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
                                    "text" => "SE GENERO EL PDF DE LA RESPUESTA DEL CATEO CORRECTAMENTE",
                                    "fileName" => "Respuesta_" . str_pad($CateosDto->getNumeroCateo(), 6, '0', STR_PAD_LEFT) . "/" . $CateosDto->getAnioCateo() . '.pdf',
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
                    $tmp = array("type" => "Error", "text" => "NO SE ENCONTRO INFORMACION DE LA SOLICITUD DE CATEO");
                }
            }
        } else {
            $tmp = array("type" => "Error", "text" => "IDENTIFICADOR DE CATEO NO VALIDO");
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
//@$idCateo = "177";
//
//$ComprobanteCateosController = new ComprobanteCateosController();
//print_r($ComprobanteCateosController->generaComprobante($idCateo));
?>
