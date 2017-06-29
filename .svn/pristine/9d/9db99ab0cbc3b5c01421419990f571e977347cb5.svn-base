<?php

session_start();
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/solicitudesordenes/SolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesordenes/SolicitudesordenesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/solicitudesordenes/ComprobanteSolicitudesordenesController.Class.php");
include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadores/JuzgadoresController.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/estatussolicitudesordenes/EstatussolicitudesordenesDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/estatussolicitudesordenes/EstatussolicitudesordenesDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/tiposjuzgadores/TiposjuzgadoresDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/tiposjuzgadores/TiposjuzgadoresDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/imagenes/ImagenesDAO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/imagenes/ImagenesDTO.Class.php");

include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dto/documentosimg/DocumentosimgDTO.Class.php");
include_once(dirname(__FILE__) . "/../../../modelos/sigejupe/dao/documentosimg/DocumentosimgDAO.Class.php");

include_once(dirname(__FILE__) . "/../../../controladores/sigejupe/juzgadores/JuzgadoresController.Class.php");

include_once(dirname(__FILE__) . "/../../../tribunal/connect/Proveedor.Class.php");
error_reporting(E_ALL);
if (isset($_GET["idComprobante"]) || $_GET["idComprobante"] > 0) {
    $idComprobante = $_GET["idComprobante"];
    $documentosdto = new DocumentosimgDTO();
    $documentosdto->setIdCarpetaJudicial($idComprobante);
    $documentosdto->setCveTipoDocumento(18);
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
            $file = fopen("archivo.txt", "a+");
            fwrite($file, $imagenesDto->getBase64());
            fclose($file);
            $pdf_base64 = "archivo.txt";
            $pdf_base64_handler = fopen($pdf_base64, 'r');
            $pdf_content = fread($pdf_base64_handler, filesize($pdf_base64));
            fclose($pdf_base64_handler);
            $pdf_decoded = base64_decode($pdf_content);
            $pdf = fopen('SolicitudOrdendeAprehension.pdf', 'w');
            fwrite($pdf, $pdf_decoded);
            fclose($pdf);
            header("Content-disposition: attachment; filename=SolicitudDeOrdenDeAprehension.pdf");
            header("Content-type: application/octet-stream");
            readfile("SolicitudOrdendeAprehension.pdf");
            @unlink("SolicitudOrdendeAprehension.pdf");
            @unlink("archivo.txt");
        }
    }
}