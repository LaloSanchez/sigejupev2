<?php

if (!isset($_SESSION)) {
    session_start();
}
include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    class ExportarReportes {
        public function __construct() {
            
        }

        private function prepararTablaPDF($table) {
            $table = preg_replace('/<br id="bo">(.*?)br>/', "", $table);
            $table = preg_replace('/<label>(.*?)label>/', "", $table);
            $table = preg_replace('/<div(.*?)>/', "", $table);
            $table = preg_replace('/<\/div>/', "", $table);
            $table = preg_replace('/<table/', "<table  valign='middle' style='border-collapse: collapse;text-align:center;' align='center'", $table);
            return $table;
        }

        private function prepararTablaExcel($table) {
            $table = preg_replace('/style=("|\')(.*?)("|\')/', "", $table);
            $table = preg_replace('/id=("|\')(.*?)("|\')/', "", $table);
            $table = preg_replace('/class=("|\')(.*?)("|\')/', "", $table);
            $table = preg_replace('/<tr (.*?)>/', "<tr>", $table);
            $table = preg_replace('/<th (.*?)>/', "<th>", $table);
            $table = preg_replace('/(.*?)div><table (.*?)>/', "<table>", $table);
            $table = preg_replace('/<table (.*?)>/', "<table>", $table);
            $table = preg_replace('/<strong>/', "", $table);
            $table = preg_replace('/<\/strong>/', "", $table);
            $table.="@@";
            $table = preg_replace('/<div (.*?)@@/', "", $table);
            return utf8_decode($table);
        }

        private function obtenerInicialesUsuario($usuario) {
            $vecUsuario = explode(" ", $usuario);
            $cantPalabras = count($vecUsuario);
            $iniciales = "";
            for ($i = 0; $i < $cantPalabras; $i++) {
                $iniciales.=substr($vecUsuario[$i], 0, 1);
            }
            return $iniciales;
        }

        private function getInfo($info) {
            if ($info != "") {
                $info = explode("&@", $info);
                $info[0] = $this->obtenerInicialesUsuario($info[0]);
                return $info;
            } else {
                return "";
            }
        }

        public function exportarExcel($table, $info) {
            $info = preg_replace('/<br>/', "", $info);
            $info = preg_replace('/<label>/', "\n", $info);
            $info = preg_replace('/<b>/', "\n", $info);
            $info = preg_replace('/<\/b>/', "", $info);
            $info = preg_replace('/<\/label>/', "", $info);
            if ($table == "") {
                return "ERROR (EXCEL). NO SE DEFINIO LA TABLA A EXPORTAR";
            } else {
                error_reporting(E_ALL);
                ini_set('display_errors', TRUE);
                ini_set('display_startup_errors', TRUE);
                define('EOL', (PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
                date_default_timezone_set('America/Mexico_City');
                include ("../../../tribunal/excel/Classes/PHPExcel.php");
                $fechaHora = "";
                $nombreArchivo = "REPORTE";
                $titulo = "REPORTE";
                $inicialesUsuario = "-";
                $total = 0;

                $vecInfo = $this->getInfo($info);
                if ($vecInfo != "") {
                    $fechaHora = $vecInfo[5];
                    $total = $vecInfo[3];
                    $nombreArchivo = $vecInfo[2];
                    $titulo = $vecInfo[1];
                    $inicialesUsuario = $vecInfo[0];
                    $descripcion = $vecInfo[4];
                }
                $table = $this->prepararTablaExcel($table);
                $table = "<br><br>" . $table;
                $inicioRow = 4; //Renglon donde comenzara la tabla de excel
                $tmpfile = tempnam(sys_get_temp_dir(), 'html');
                ini_set('memory_limit', -1);
                ini_set('max_execution_time', -1);
                file_put_contents($tmpfile, $table);
                $objPHPExcel = new PHPExcel();
                $excelHTMLReader = PHPExcel_IOFactory::createReader('HTML');
                $excelHTMLReader->loadIntoExisting($tmpfile, $objPHPExcel);
                unlink($tmpfile);
                $objPHPExcel->setActiveSheetIndex(0);
                $objLogo = new PHPExcel_Worksheet_HeaderFooterDrawing();
                $objLogo->setName('Logo');
                $logo = dirname(__FILE__) . '/../../../vistas/img/logoPjAcuses.jpg';
                $objLogo->setPath($logo);
                $objLogo->setHeight(75);
                $objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader($titulo . "\n &G")->addImage($objLogo, PHPExcel_Worksheet_HeaderFooter::IMAGE_HEADER_CENTER);
                $objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter($inicialesUsuario . "     " . $fechaHora . "\n  Pagina &P /&N");
                $columnas = 0;
                foreach (range('A', $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
                    $objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
                    $columnas++;
                }
                $objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
                $objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);
                $styleArray = array(
                    'font' => array(
                        'bold' => true,
                    ),
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
                    ),
                    'borders' => array(
                        'top' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                        ),
                    ),
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => 'FF0000'),
                    ),
                );
                $letra = chr(65 + $columnas - 1);
                $letra2 = chr(65 + $columnas - 2);
                $objPHPExcel->getActiveSheet()->getStyle("A3")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                $objPHPExcel->getActiveSheet()->mergeCells('A3:' . $letra2 . '3');
                $objPHPExcel->getActiveSheet()->getStyle('A3:' . $letra2 . '3')->getAlignment()->setWrapText(true);
                $objPHPExcel->getActiveSheet()->setCellValue($letra . '3', $total);
                $objPHPExcel->getActiveSheet()->setCellValue('A3', $descripcion);

                //$objPHPExcel->getActiveSheet()->mergeCells('A3:' . $letra . '3');
                unset($styleArray);
                $styleArray = array(
                    'font' => array(
                        'bold' => true,
                    ),
                    'alignment' => array(
                        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                    ),
                    'borders' => array(
                        'top' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                        ),
                    ),
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
                        'rotation' => 90,
                        'startcolor' => array(
                            'argb' => 'FFF00000',
                        ),
                        'endcolor' => array(
                            'argb' => 'FFFFFFFF',
                        ),
                    ),
                );
                $objPHPExcel->getActiveSheet()->getStyle('A' . $inicioRow . ':' . $letra . $inicioRow)->applyFromArray($styleArray);
                $objPHPExcel->getActiveSheet()->getStyle('A' . $inicioRow . ':' . $letra . $inicioRow)->getAlignment()->setWrapText(true);
                $objPHPExcel->getActiveSheet(0)->getRowDimension("" . $inicioRow)->setRowHeight(50);
                $objPHPExcel->getActiveSheet(0)->getRowDimension("3")->setRowHeight(80);
                $objPHPExcel->getActiveSheet()->getPageMargins()->setTop(1);

                unset($styleArray);
                $styleArray = array(
                    'font' => array(
                        'bold' => true,
                    ),
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                    ),
                    'borders' => array(
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                        ),
                    ),
                );
                $renglones = $objPHPExcel->getActiveSheet()->getHighestRow() - ($inicioRow - 1);
                for ($i = $inicioRow; $i < $renglones + $inicioRow; $i++) {
                    $objPHPExcel->getActiveSheet()->getStyle('A' . $i . ':' . $letra . $i)->applyFromArray($styleArray);
                }
                unset($styleArray);
                //$objPHPExcel->getActiveSheet()->setTitle($titulo);
                $objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(
                        PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
                $objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(
                        PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
                $objPHPExcel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $callStartTime = microtime(true);
                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Disposition: attachment;filename=' . $nombreArchivo . '.xlsx');
                header('Cache-Control: max-age=0');
                $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                $objWriter->save('php://output');
            }
        }

        public function exportarPDF($table, $info) {
            if ($table == "") {
                return "ERROR (PDF). NO SE DEFINIO LA TABLA A EXPORTAR";
            } else {
                $table = $this->prepararTablaPDF($table);
                ini_set('memory_limit', -1);
                ini_set('max_execution_time', -1);
                date_default_timezone_set('America/Mexico_City');
                $nombreArchivo = "REPORTE";
                $vecInfo = $this->getInfo($info);
                $inicialesUsuario = "";
                $fechaHora = "";
                if ($vecInfo != "") {
                    $fechaHora = $vecInfo[5];
                    $nombreArchivo = $vecInfo[2];
                    $titulo = $vecInfo[1];
                    $inicialesUsuario = $vecInfo[0];
                    $total = $vecInfo[3];
                    $descripcion = $vecInfo[4];
                }
                $table.="<page_footer >Fecha y hora de consulta:  " . $fechaHora . " <br> <div style='text-align:center'><label >Generado por:  " . $inicialesUsuario . "</label></div></page_footer>";
                $content = '<page footer="page" backtop="55mm" backbottom="15mm"><page_header ><div style="text-align:center"><label>' . $titulo . '</label><br><img src=" '
                        . dirname(__FILE__) . '/../../../vistas/img/logoPjAcuses.jpg"></div><div style="text-align:left;"><label>' . $descripcion . '</label></div><div style="text-align: right;"><label>' . $total . '</label></div></page_header>';
                $content .= $table;
                $content .= "</page>";
//            var_dump( $content);
                require_once('../../../tribunal/pdf/html2pdf.class.php');
                try {

                    $html2pdf = new HTML2PDF('L', 'letter', 'es', true, 'UTF-8');
                    $html2pdf->WriteHTML($content);
                    $html2pdf->Output($nombreArchivo . '.pdf', 'D');
                    echo $content;
                } catch (HTML2PDF_exception $e) {
                    echo $e;
                    exit;
                }
            }
        }

        public function exportarExcelProgramaciones($table, $info) {
            $info = preg_replace('/<br>/', "", $info);
            $info = preg_replace('/<label>/', "\n", $info);
            $info = preg_replace('/<b>/', "\n", $info);
            $info = preg_replace('/<\/b>/', "", $info);
            $info = preg_replace('/<\/label>/', "", $info);
            if ($table == "") {
                return "ERROR (EXCEL). NO SE DEFINIO LA TABLA A EXPORTAR";
            } else {
                error_reporting(E_ALL);
                ini_set('display_errors', TRUE);
                ini_set('display_startup_errors', TRUE);
                define('EOL', (PHP_SAPI == 'cli') ? PHP_EOL : '<br />');
                date_default_timezone_set('Europe/London');
                include ("../../../tribunal/excel/Classes/PHPExcel.php");
                $fechaHora = "";
                $nombreArchivo = "REPORTE";
                $titulo = "REPORTE";
                $inicialesUsuario = "-";
                $total = 0;

                $vecInfo = $this->getInfo($info);
                if ($vecInfo != "") {
                    $fechaHora = $vecInfo[5];
                    $total = $vecInfo[3];
                    $nombreArchivo = $vecInfo[2];
                    $titulo = $vecInfo[1];
                    $inicialesUsuario = $vecInfo[0];
                    $descripcion = $vecInfo[4];
                }
                $table = preg_replace('/style=("|\')(.*?)("|\')/', "", $table);
                $table = utf8_decode($table);
                //$table = $this->prepararTablaExcel($table);
                $table = "<br><br>" . $table;
                $inicioRow = 4; //Renglon donde comenzara la tabla de excel
                $tmpfile = tempnam(sys_get_temp_dir(), 'html');
                ini_set('memory_limit', -1);
                ini_set('max_execution_time', -1);
                file_put_contents($tmpfile, $table);
                $objPHPExcel = new PHPExcel();
                $excelHTMLReader = PHPExcel_IOFactory::createReader('HTML');
                $excelHTMLReader->loadIntoExisting($tmpfile, $objPHPExcel);
                unlink($tmpfile);
                $objPHPExcel->setActiveSheetIndex(0);
                $objLogo = new PHPExcel_Worksheet_HeaderFooterDrawing();
                $objLogo->setName('Logo');
                $logo = dirname(__FILE__) . '/../../../vistas/img/logoPjAcuses.jpg';
                $objLogo->setPath($logo);
                $objLogo->setHeight(75);
                $objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddHeader($titulo . "\n &G")->addImage($objLogo, PHPExcel_Worksheet_HeaderFooter::IMAGE_HEADER_CENTER);
                $objPHPExcel->getActiveSheet()->getHeaderFooter()->setOddFooter($inicialesUsuario . "     " . $fechaHora . "\n  Pagina &P /&N");
                $columnas = 0;
                foreach (range('A', $objPHPExcel->getActiveSheet()->getHighestDataColumn()) as $col) {
                    $objPHPExcel->getActiveSheet()->getColumnDimension($col)->setAutoSize(true);
                    $columnas++;
                }
                $objPHPExcel->getActiveSheet()->getPageSetup()->setFitToWidth(1);
                $objPHPExcel->getActiveSheet()->getPageSetup()->setFitToHeight(0);
                $styleArray = array(
                    'font' => array(
                        'bold' => true,
                    ),
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_RIGHT,
                    ),
                    'borders' => array(
                        'top' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                        ),
                    ),
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_SOLID,
                        'color' => array('rgb' => 'FF0000'),
                    ),
                );
                $letra = chr(65 + $columnas - 1);
                $letra2 = chr(65 + $columnas - 2);
                $objPHPExcel->getActiveSheet()->getStyle("A3")->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
                $objPHPExcel->getActiveSheet()->mergeCells('A3:' . $letra2 . '3');
                $objPHPExcel->getActiveSheet()->getStyle('A3:' . $letra2 . '3')->getAlignment()->setWrapText(true);
                $objPHPExcel->getActiveSheet()->setCellValue($letra . '3', $total);
                $objPHPExcel->getActiveSheet()->setCellValue('A3', $descripcion);

                //$objPHPExcel->getActiveSheet()->mergeCells('A3:' . $letra . '3');
                unset($styleArray);
                $styleArray = array(
                    'font' => array(
                        'bold' => true,
                    ),
                    'alignment' => array(
                        'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
                    ),
                    'borders' => array(
                        'top' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                        ),
                    ),
                    'fill' => array(
                        'type' => PHPExcel_Style_Fill::FILL_GRADIENT_LINEAR,
                        'rotation' => 90,
                        'startcolor' => array(
                            'argb' => 'FFF00000',
                        ),
                        'endcolor' => array(
                            'argb' => 'FFFFFFFF',
                        ),
                    ),
                );
                $objPHPExcel->getActiveSheet()->getStyle('A' . $inicioRow . ':' . $letra . $inicioRow)->applyFromArray($styleArray);
                $objPHPExcel->getActiveSheet()->getStyle('A' . $inicioRow . ':' . $letra . $inicioRow)->getAlignment()->setWrapText(true);
                $objPHPExcel->getActiveSheet(0)->getRowDimension("" . $inicioRow)->setRowHeight(50);
                $objPHPExcel->getActiveSheet(0)->getRowDimension("3")->setRowHeight(80);
                $objPHPExcel->getActiveSheet()->getPageMargins()->setTop(1);

                unset($styleArray);
                $styleArray = array(
                    'font' => array(
                        'bold' => true,
                    ),
                    'alignment' => array(
                        'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
                    ),
                    'borders' => array(
                        'allborders' => array(
                            'style' => PHPExcel_Style_Border::BORDER_THIN,
                        ),
                    ),
                );
                $renglones = $objPHPExcel->getActiveSheet()->getHighestRow() - ($inicioRow - 1);
                for ($i = $inicioRow; $i < $renglones + $inicioRow; $i++) {
                    $objPHPExcel->getActiveSheet()->getStyle('A' . $i . ':' . $letra . $i)->applyFromArray($styleArray);
                }
                unset($styleArray);
                //$objPHPExcel->getActiveSheet()->setTitle($titulo);
                $objPHPExcel->getActiveSheet()->getPageSetup()->setOrientation(
                        PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
                $objPHPExcel->getActiveSheet()->getPageSetup()->setPaperSize(
                        PHPExcel_Worksheet_PageSetup::PAPERSIZE_A4);
                $objPHPExcel->getDefaultStyle()->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
                $callStartTime = microtime(true);
                header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
                header('Content-Disposition: attachment;filename=' . $nombreArchivo . '.xlsx');
                header('Cache-Control: max-age=0');
                $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
                $objWriter->save('php://output');
            }
        }

    }

    $exportarReporte = new ExportarReportes();
    if ($_POST) {
        @$accion = $_POST['accion'];
        @$tabla = $_POST["contenido"];
        @$info = $_POST["info"];
        if ($accion == "exportarPDF") {
            echo $exportarReporte->exportarPDF($tabla, $info);
        } else if ($accion == "exportarExcel") {
            $info = explode("&@", $info);
            header('Content-type: application/vnd.ms-excel');
            header("Content-Disposition: attachment; filename=" . $info[2] . ".xls");
            header("Pragma: no-cache");
            header("Expires: 0");

            $visor = new Host(dirname(__FILE__) .'/../../../tribunal/host/config.xml', 'VISORDOCUMENTOSSIGEJUPE');
            $visor = $visor->getConnect();
            $path = $visor->LISTARDOCUMENTOS->HOST;
            echo '<td width="63%" rowspan="9"> <IMG type="image" name="imageField5" src="' . $path . 'vistas/img/logoPjAcuses.jpg"> </td><table><tr></tr><tr></tr><tr></tr><tr></tr></table>';
            echo utf8_decode($tabla);
            //echo $exportarReporte->exportarExcel($tabla, $info);
        } else if ($accion == "exportarExcelProgramaciones") {
            echo $exportarReporte->exportarExcelProgramaciones($tabla, $info);
        }
    }
} else {
    header("HTTP/1.0 440 la sesion caduco");
    header("Status: 440 Login Timeout");
}
