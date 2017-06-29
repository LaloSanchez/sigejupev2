<?php

@session_start();
date_default_timezone_set("America/Mexico_City");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/select/SelectDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../webservice/cliente/reportes/ReportesClienteGeneral.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/imagenes/CargaImagenesFirmaController.Class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/pdf/html2pdf.class.php");
include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");

class GeneraPdfFirmaController {

    public function __construct() {
        
    }

    public function doPdf($idReferencia, $tipoDocumentoFirma) {
        $cargaImagenesController = new CargaImagenesFirmaController();
        $tipoDocumentoFirma = $cargaImagenesController->clasificarReferencia($tipoDocumentoFirma);
        if ($tipoDocumentoFirma["estatus"] != "ok") {
            return '{"estatus":"fail","totalCount":"0","msj":"' . $tipoDocumentoFirma["msj"] . '"}';
        }
        $query = array();
        $subruta = "";
        $rutaSistema = "";
        $nameProveedor = "";
        switch ($tipoDocumentoFirma["clasificacion"]["cveSistema"]) {
            case 30: //electronico
                $nameProveedor = "electronico";
                $subruta = "../../imagenesPdf/";
                $rutaSistema = "dticursos.pjedomex.gob.mx/electronico"; //(localhost:8080) http://electronico.pjedomex.gob.mx/electronico
                $logoPdf = '../../vistas/img/logoPjAcuses.jpg';
                switch ($tipoDocumentoFirma["clasificacion"]["cveTipoExpediente"]) {
                    case 1: //actuacion
                        $query["fields"] = "ar.resolucion as contenidoPdf,m.descMateria,tn.descTipoNumero,cj.numero,cj.anio,ta.descTipoActuacion,a.numActuacion as numeroActuacion,a.aniActuacion as anioActuacion,a.fechaRegistro,a.fechaActualizacion,a.cveAdscripcion";
                        $query["tables"] = "tblactuacionesresoluciones as ar,tblactuaciones as a,tblcarpetasjudiciales as cj,tblmaterias as m,tbltiposnumeros as tn,tbltiposactuaciones as ta";
                        $query["conditions"] = "ar.idReferencia = '" . $idReferencia . "' AND a.idActuacion=ar.idReferencia";
                        $query["conditions"] .= " AND m.cveMateria=a.cveMateria AND cj.idCarpetaJudicial=a.idCarpetaJudicial";
                        $query["conditions"] .= " AND cj.cveTipoNumero=tn.cveTipoNumero AND ta.cveTipoActuacion=ar.cveTipoActuacion";
                        break;
                    default: $query = null;
                }
                break;
            case 38: //sigejupe
                $nameProveedor = "sigejupe";
                $subruta = "../../../imagenesPdf/";
                $rutaSistema = "dticursos.pjedomex.gob.mx/sigejupev2"; //(localhost:8080) http://sigejupe2.pjedomex.gob.mx/sigejupe
                $logoPdf = '../../../vistas/img/logoPjAcuses.jpg';
                switch ($tipoDocumentoFirma["clasificacion"]["cveTipoExpediente"]) {
                    case 1: //actuacion
                        $query["fields"] = "a.observaciones as contenidoPdf,cj.numero,cj.anio,tc.desTipoCarpeta as descTipoNumero,ta.desTipoActuacion as descTipoActuacion,a.numActuacion as numeroActuacion,a.aniActuacion as anioActuacion,a.fechaRegistro,a.fechaActualizacion,a.cveJuzgado as cveAdscripcion";
                        $query["tables"] = "tblactuaciones as a,tblcarpetasjudiciales as cj,tbltiposcarpetas as tc,tbltiposactuaciones as ta";
                        $query["conditions"] = "a.idActuacion = '" . $idReferencia . "' AND cj.idCarpetaJudicial=a.idReferencia";
                        $query["conditions"] .= " AND tc.cveTipoCarpeta=cj.cveTipoCarpeta AND ta.cveTipoActuacion=a.cveTipoActuacion";
                        break;
                    default: $query = null;
                }
                break;
            default: $query = null;
        }
        if ($query == null) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. FALTA CONFIGURACION DEL TIPO DOCUMENTO FIRMA"}';
        }
        $selectDao = new SelectDAO();
        $contenidoPdf = json_decode($selectDao->selectDAOv2($query));
        if (!isset($contenidoPdf->resultados)) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE ENCONTRO LA ACTUACIÓN O EXPEDIENTE"}';
        }
        $proveedor = new Proveedor('mysql', $nameProveedor);
        $proveedor->connect();
        $proveedor->execute("BEGIN");
        $rutaArchivoEnBD = $cargaImagenesController->obtenerRuta($idReferencia, $tipoDocumentoFirma, $proveedor);
        if ($rutaArchivoEnBD["estatus"] != "ok") {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return '{"estatus":"fail","totalCount":"0","msj":"' . $rutaArchivoEnBD["mensaje"] . '"}';
        }
        $contenidoPdf = $contenidoPdf->resultados[0];
        if (file_exists($subruta . $idReferencia . ".pdf")) {
            //verificamos el arhivo ya se encuentra alojado en tblactuacionesfirmadas
            $json = '{"fields":"idDocumentosFirmados",';
            $json .= '"tables":"tbldocumentosfirmados",';
            $json .= '"conditions":"fileNameFirma=\'imagenesPdf/' . $idReferencia . '.pdf\' AND idReferencia=\'' . $idReferencia . '\' AND activo=\'S\'"}';
            $clienteFirma = new ReportesClienteGeneral();
            @$clienteFirma = json_decode($clienteFirma->selectDAO($json, 3)); //consulta al servidor de firmas
            if (!isset($clienteFirma->Estatus)) {
                $proveedor->execute("ROLLBACK");
                $proveedor->close();
                return '{"estatus":"failConexion","totalCount":"0","msj":"ERROR. SE PERDIO LA CONEXIÓN CON EL SERVIDOR DE FIRMAS"}';
            }
            if (isset($clienteFirma->resultados)) {
                $query = array();
                $query["fields"] = "*";
                $query["tables"] = "tblimagenes";
                $query["conditions"] = "idImagen='" . $clienteFirma->resultados[0]->idImagenOriginal . "'";
                $query = json_decode($selectDao->selectDAOv2($query));
                if (isset($query->resultados)) {
                    $proveedor->execute("ROLLBACK");
                    $proveedor->close();
                    return json_encode(array("estatus" => "ok", "totalCount" => 1,
                        "msj" => "YA EXISTE EL PDF DE LA SOLICTUD", "resultados" =>
                        array("idImagenOriginal" => $clienteFirma->resultados[0]->idImagenOriginal,
                            "idReferencia" => $idReferencia,
                            "fileName" => $clienteFirma->resultados[0]->fileNameFirma)));
                }
            }
        }
        $query = array();
        $query["fields"] = "now() AS fecha";
        $fecha = json_decode($selectDao->selectDAOv2($query));
        $fechaHora = $fecha->resultados[0]->fecha;
        $html = "<page backtop=\"60mm\" backbottom=\"20mm\" backleft=\"20mm\" "
                . "backright=\"20mm\" backimg=\"img/imgFondo.jpg\" "
                . "backimgx=\"center\" style='font-size: 10pt'>";
        $html .= "<page_header>";
        $html .= "<table style='width: 90%; border: solid 0px black;'><tr>";
        $html .= "<td colspan='2' style='text-align: center; width: 100%'><img src='" . $logoPdf . "' /></td>\n";
        $html .= " </tr><tr>";
        $html .= "<td colspan='2' style='text-align: center; width: 100%;font-size: 8pt'></td>";
        $html .= "</tr><tr>";
        $html .= "<td style='text-align: right; width: 100%;font-size: 8pt'>Fecha y Hora de creaci&oacute;n de este archivo: " . $fechaHora . "</td>";
        $html .= " </tr><tr>";
        $html .= "<td style='text-align: right; width: 100%;font-size: 10pt'>Pagina [[page_cu]] de [[page_nb]]</td>";
        $html .= " </tr><tr>";
        if ($tipoDocumentoFirma["clasificacion"]["cveSistema"] == 30) {//electronico
            $html .= "<td style='text-align: center; width: 100%;font-size: 9pt;font-weight:bolder'>MATERIA: " . mb_strtoupper($contenidoPdf->descMateria) . "</td>";
        } else {
            if ($tipoDocumentoFirma["clasificacion"]["cveSistema"] == 38) {//sigejupe
                $html .= "<td style='text-align: center; width: 100%;font-size: 9pt;font-weight:bolder'>MATERIA: PENAL</td>";
            }
        }
        $html .= "</tr><tr><td style='width:100%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero de " . mb_strtoupper($contenidoPdf->descTipoNumero);
        $html .= ":</strong> " . $contenidoPdf->numero . "/" . $contenidoPdf->anio . "</td>";
        $html .= "</tr><tr>";
        $html .= "<td style='width:100%; text-align: right; font-size: 9pt' colspan='1'><strong>N&uacute;mero de " . mb_strtoupper($contenidoPdf->descTipoActuacion);
        $html .= ":</strong> " . $contenidoPdf->numeroActuacion . "/" . $contenidoPdf->anioActuacion . "</td>";
        $html .= "</tr><tr>";
        $html .= "<td style='width:100%; text-align: right; font-size: 9pt' colspan='1'><strong>Fecha de Registro:</strong> " . ucfirst(strtolower($this->fechaLarga($contenidoPdf->fechaRegistro))) . "</td>";
        $html .= "</tr><tr>";
        $html .= "<td style='width:100%; text-align: right; font-size: 9pt' colspan='1'><strong>&Uacute;ltima modificaci&oacute;n:</strong> " . ucfirst(strtolower($this->fechaLarga($contenidoPdf->fechaActualizacion))) . "</td>";
        $html .= "</tr><tr>";
        $html .= "<td style='width:100%; text-align: center'>&nbsp;</td>";
        $html .= "</tr></table></page_header><page_footer>";
        $html .= "<table style='width: 100%; '>";
        $html .= "<tr><td style='width:100%; text-align: center; font-size: 1pt'>&nbsp;</td>";
        $html .= "</tr></table></page_footer>";
        //Obtenemos el Juzgado
        $json = '{"fields":"desJuz",';
        $json .= '"tables":"tbljuzgados",';
        $json .= '"conditions":"idJuzgado=\'' . $contenidoPdf->cveAdscripcion . '\'"}';
        $clienteGestion = new ReportesClienteGeneral();
        @$clienteGestion = json_decode($clienteGestion->selectDAO($json, 4)); //consulta al servidor de gestion
        if (!isset($clienteGestion->status)) {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return '{"estatus":"failConexion","totalCount":"0","msj":"ERROR. SE PERDIO LA CONEXIÓN CON EL SERVIDOR DE GESTION. NO SE LOGRO OBTENER EL JUZGADO"}';
        }
        if (!isset($clienteGestion->resultados)) {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO OBTENER EL JUZGADO DE GESTIÓN (' . $contenidoPdf->cveAdscripcion . ')"}';
        }
        $juzgadoNombre = mb_strtoupper($clienteGestion->resultados[0]->desJuz);
        $html .= "<table cellspacing='1' cellpadding='2' style='width: 100%; text-align: left; font-size: 11pt;' border='0'>";
        $html .= "<tr><td style='width:25%;'>&nbsp;</td>";
        $html .= "<td style='width:25%;'>&nbsp;</td>";
        $html .= "<td style='width:25%;'>&nbsp;</td>";
        $html .= "<td style='width:25%;'>&nbsp;</td>";
        $html .= "</tr><tr>"; //datos del juzgado
        $html .= "<td style='width:100%; text-align: center; font-size: 10pt;' colspan='4' ><strong>Juzgado: </strong>";
        $html .= $juzgadoNombre . "</td></tr>"; //tipo actuacion       y que el tipo actuacion sea una promocion
        if ($tipoDocumentoFirma["clasificacion"]["cveTipoExpediente"] == 1 && $tipoDocumentoFirma["clasificacion"]["cveTipoReferencia"] == 1) {//promocion
            //Obtenemos  los promoventes [EN CASO DE SER PROMOCION]
            $query = array();
            $query["fields"] = "nombre,paterno,materno,nombrePersonaMoral";
            $query["tables"] = "tblpromoventesactuaciones";
            $query["conditions"] = "activo='S' AND idActuacion='" . $idReferencia . "'";
            $provomentes = json_decode($selectDao->selectDAOv2($query));
            if (!isset($provomentes->resultados)) {
                $html .= "<tr><td colspan='4' style='width:100%;' >";
                $html .= "<div style='text-align: center; border: 1px ;'><strong>PROMOVENTES</strong></div>";
                $html .= "</td></tr><br>"; //Promoventes
                for ($i = 0; $i < $provomentes->totalCount; $i++) {
                    $nombre = $provomentes->resultados[$i]->nombrePromovente;
                    if ($nombre == "") {
                        $nombre = $provomentes->resultados[$i]->nombre . ' ' . $provomentes->resultados[$i]->paterno . ' ' . $provomentes->resultados[$i]->materno;
                    }
                    $html .= "<tr>";
                    $html .= "<td style='width:100%; text-align: left; font-size: 10pt;' border='0' colspan='4' >" . ($i + 1) . ".- " . mb_strtoupper($nombre) . "  </td>";
                    $html .= "</tr>";
                }
                $html .= "<br>";
            }
        }//CONTENIDO DEL DOCUMENTO                    
        $html .= "<tr><td colspan='4'>";
        $html .= "<div style='text-align: center; border: 1px ;'><strong>CONTENIDO DEL DOCUMENTO</strong></div>";
        $html .= "</td></tr></table>";
        $htmlResolucion = html_entity_decode($contenidoPdf->contenidoPdf);
        $htmlResolucion = str_replace("&#39;", "'", $htmlResolucion);
        $htmlResolucion = str_replace("sans-serif", "Arial", $htmlResolucion);
        $htmlResolucion = str_replace("arial", "Arial", $htmlResolucion);
        $htmlResolucion = str_replace("helvetica", "Arial", $htmlResolucion);
        $htmlResolucion = str_replace("Verdana", "Arial", $htmlResolucion);
        $htmlResolucion = str_replace("Gill Sans MT", "Arial", $htmlResolucion);
        $html .= "<p>" . $htmlResolucion . "</p>";
        $html .= "<table style='width: 100%; border: solid 0px black;' ><tr>";
        $html .= "<td style='width:25%;'>&nbsp;</td>";
        $html .= "<td style='width:25%;'>&nbsp;</td>";
        $html .= "<td style='width:25%;'>&nbsp;</td>";
        $html .= "<td style='width:25%;'>&nbsp;</td>";
        $html .= "</tr><tr>";
        $html .= "<td style='width:25%;'>&nbsp;</td>";
        $html .= "<td style='width:25%;'>&nbsp;</td>";
        $html .= "<td style='width:25%;'>&nbsp;</td>";
        $html .= "<td style='width:25%;'>&nbsp;</td>";
        $html .= "</tr></table></page>";
        try {
            $html2pdf = new HTML2PDF('P', 'letter', 'es', true, 'UTF-8', array(0, 0, 0, 0));
            $html2pdf->pdf->SetAuthor("PODER JUDICIAL DEL ESTADO DE MEXICO");
            $html2pdf->writeHTML($html);
            $html2pdf->Output($rutaArchivoEnBD["ruta"]["ruta"], 'F');
        } catch (HTML2PDF_exception $e) {
            $proveedor->execute("ROLLBACK");
            $proveedor->close();
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO GENERAR EL PDF detalles (' . json_encode($e->getMessage()) . ')"}';
        }
        $proveedor->execute("COMMIT");
        $proveedor->close();
        $json = '{"estatus":"ok","totalCount":"1","msj":"PDF GENERADO CORRECTAMENTE","resultados":[{';
        $json .= '"idImagenOriginal":"' . $rutaArchivoEnBD["ruta"]["idImagen"] . '","idReferencia":"' . $idReferencia;
        $json .= '","fileName":"' . $rutaArchivoEnBD["ruta"]["ruta"] . '"}]}';
        return $json;
    }

    private function fechaLarga($fecha) {
        $fechaAux = explode(" ", $fecha);
        $fechaAux2 = explode("/", $fechaAux[0]);
        if (count($fechaAux2) > 1) {//Si viene en formado dd/mm/aaaa HH:mm:ss, debe convertirse a formato aaaa-mm-dd HH:mm:ss
            $fechaAux = $this->fechaNormalAMySQL($fecha);
            if ($fechaAux != "" && $fechaAux != null) {
                $fecha = $fechaAux;
            }
        }
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

    public function doPdf2($idReferencia, $cveTipoDocumentoFirma) {
        $selectDao = new SelectDAO();
        $datosTipoDocumentoFirma = json_decode($this->obtenerDatosTipoDocumentoFirma($cveTipoDocumentoFirma));
        if (!isset($datosTipoDocumentoFirma->resultados)) {
            return json_encode($datosTipoDocumentoFirma);
        }
        $params = array();
        //SE OBTIENE EL CONTENIDO DEL PDF DEPENDIENDO DEL SISTEMA EN CUESTION
        $rutaSistema = "";
        switch (intval($datosTipoDocumentoFirma->resultados[0]->cveSistema)) {
            case 30: //SISTEMA DEL EXPEDIENTE ELECTRONICO
                $params["fields"] = "resolucion as contenidoPDF";
                $params["tables"] = "tblactuacionesresoluciones";
                $params["conditions"] = "idReferencia='" . $idReferencia . "'";
                $rutaSistema = "http://dticursos.pjedomex.gob.mx/electronico/imagenesPDF/";
                break;
            case 38: //SISTEMA DE GESTION JUDICIAL PENAL v2
                $params["fields"] = "observaciones as contenidoPDF";
                $params["tables"] = "tblactuaciones";
                $params["conditions"] = "idActuacion='" . $idReferencia . "'";
                $rutaSistema = "http://dticursos.pjedomex.gob.mx/sigejupev2/imagenesPDF/";
                break;
            default : return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE ENCUENTRA CONFIGURACIÓN DE FIRMA PARA EL SISTEMA EN CUESTIÓN"}';
        }
        $ruta = $rutaSistema . "../../imagenesPDF/" . $idReferencia . ".pdf";
        if (file_exists($ruta)) {
            $json = '{"estatus":"ok","totalCount":"1","msj":"EL PDF YA EXISTE.","resultados":[{';
            $json .= '"fileName":"' . $ruta . '","filePath":"' . $ruta . '"}]}';
            return $json;
        }
        $contenidoPdf = json_decode($selectDao->selectDAO($params));
        if (!isset($contenidoPdf->resultados)) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO OBTENER EL CONTENIDO A FIRMAR"}';
        }
        ob_start(); //SE REALIZA UNA DEPURACIÓN DEL CONTENIDO, PARA QUE LA BIBLIOTECA HTML2PDF LO PROCESE CORRECTAMENTE
        $htmlResolucion = $contenidoPdf->resultados[0]->contenidoPDF;
        $htmlResolucion = str_replace("&#39;", "'", $htmlResolucion);
        $htmlResolucion = str_replace("sans-serif", "Arial", $htmlResolucion);
        $htmlResolucion = str_replace("arial", "Arial", $htmlResolucion);
        $htmlResolucion = str_replace("helvetica", "Arial", $htmlResolucion);
        $htmlResolucion = str_replace("Verdana", "Arial", $htmlResolucion);
        $htmlResolucion = str_replace("Gill Sans MT", "Arial", $htmlResolucion);
        echo utf8_encode("<div style='width: 90%; font-family: Arial; font-size: 12pt; color:#000000; text-align: justify; '>" . $htmlResolucion . "</div>");
        $content = ob_get_clean();
        $name = $idReferencia . ".pdf";
        $ruta = "/imagenesPDF/" . $name;
        $generaPDF = false;
        try {
            $html2pdf = new HTML2PDF('P', 'letter', 'es', true, 'UTF-8', array(25, 25, 25, 25));
            $html2pdf->pdf->SetAuthor("PODER JUDICIAL DEL ESTADO DE MEXICO");
            $html2pdf->writeHTML($content);
            $html2pdf->Output("../../imagenesPDF/" . $name, 'F');
            $generaPDF = true;
        } catch (HTML2PDF_exception $e) {
            $generaPDF = false;
        }

        if (!$generaPDF) {
            return '{"estatus":"fail","totalCount":"0","msj":"ERROR. NO SE LOGRO GENERAR EL PDF"}';
        }
        $ruta = $rutaSistema . "../../imagenesPDF/" . $idReferencia . ".pdf";
        chmod("../../imagenesPDF/" . $name, 0775);
        $json = '{"estatus":"ok","totalCount":"1","msj":"EL PDF GENERADO CORRECTAMENTE","resultados":[{';
        $json .= '"fileName":"' . $ruta . '","filePath":"' . $ruta . '"}]}';
        return $json;
    }

    public function digest_file($fileurl) {
        //genera la digestion (funcion hash) de un archivo
        if ($fileurl) {
            $filePath = $fileurl;
            $binDigest = sha1_file($filePath, true);
            $strDigest = base64_encode($binDigest);
            return $strDigest;
        }
    }

}
