

<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');

     $con = $_POST['info'];
    $fec = $_POST['fec'];
    $aux = "";
    $html = "";

    $cont = 1;
    $ab = "";
    $b = "";
    $c = "";
    $d = "";
    $pag = 1;
    $pag2 = 1;
    for ($a = 0; $a < strlen($con); $a++) {


        if ($con[$a] != '|') {
            $aux.=$con[$a];
        } else {


            if ($pag2 == 28) {

                $html.='

      <tr>
         <td  colspan="3" style="display: inline" >
            
            <img src="../../img/EdoMex-2.jpg" style="height: 150px;width: 150px;left:0px;position:relative">
            <table style="position: absolute;left:70px;top:50px"><tr>
                <tr><td>Gobierno del Estado de M&eacute;xico</td></tr>
                <tr> <td>Poder Judicial</td></tr>
                <tr><td>Consejo de la Judicatura</td></tr>
                                                   
                </tr></table>
        
        </td>
         <td colspan="2"  ><img src="../../img/EscudoPoderJudicial.jpg"  style="left:160px;position:relative"></td>
    </tr>
    <tr><td colspan="5" style="font-size:18px; font-weight: bold;  text-align: center;">Guardias y Roles</td></tr>
    <tr><td colspan="5" >&nbsp;</td></tr>
      <tr>
        <td style="width: 25px; height:21px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-top:1px solid">No</td>
        <td style="width: 200px; height:21px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-top:1px solid">Rol</td>
        <td style="width: 150px; height:21px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-top:1px solid">Dia</td>
        <td style="width: 120px; height:21px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-top:1px solid">Fecha Inicio</td>
        <td style="width: 120px; height:22px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;border-top:1px solid">Fecha Fin</td>

      </tr>


    ';



                $pag2 = 1;
            }


            if ($cont == 1) {
                $ab = $aux;
            }
            if ($cont == 2) {
                $b = $aux;
            }
            if ($cont == 3) {
                $c = $aux;

                $fecha = explode(" ", $c);
                $hora = $fecha[1];
                $hora = explode(":", $hora);
                $fechaFormato1 = $fecha[0] . " " . $hora[0] . ":" . $hora[1];
            }
            if ($cont == 4) {
                $d = $aux;
                $fecha = explode(" ", $d);
    //            $hora = $fecha[1];
    //            $hora = explode(":", $hora);
                $fechaFormato = $fecha[0] ;//. " " . $hora[0] . ":" . $hora[1];
                $html.='
      <tr>
        <td style="width:25px; height:20px;text-align:center;border-left:1px solid;border-bottom:1px solid;top:' . (25 * $pag) . 'px">' . $pag . '</td>
        <td style="width: 200px; height:20px;text-align:center;border-left:1px solid;border-bottom:1px solid;top:' . (25 * $pag) . 'px">' . $ab . '</td>
        <td style="width: 150px; height:20px;text-align:center;border-left:1px solid;border-bottom:1px solid;top:' . (25 * $pag) . 'px">' . $b . '</td>
        <td style="width: 120px; height:20px;text-align:center;border-left:1px solid;border-bottom:1px solid;top:' . (25 * $pag) . 'px">' . $fechaFormato1 . '</td>
        <td style="width: 120px; height:20px;text-align:center;border-left:1px solid;border-bottom:1px solid;top:' . (25 * $pag) . 'px;border-right: 1px solid">' . $fechaFormato . '</td>
        </tr>';

                $cont = 0;
                $pag++;
                $pag2++;
            }
            $cont++;
            $aux = "";
        }
    }


    //$encabezado="<img src=''>EscudoPoderJudicial"
    ob_start();
    ?>



    <page  >


        <table cellspacing="0" style="position: relative;left:50px">
            <tr>
                <td  colspan="3" style="display: inline" >

                    <img src="../../img/EdoMex-2.jpg" style="height: 150px;width: 150px;left:0px;position:relative">
                    <table style="position: absolute;left:70px;top:50px"><tr>
                        <tr><td>Gobierno del Estado de M&eacute;xico</td></tr>
                        <tr> <td>Poder Judicial</td></tr>
                        <tr><td>Consejo de la Judicatura</td></tr>

            </tr></table>

    </td>
    <td colspan="2"  ><img src="../../img/EscudoPoderJudicial.jpg"  style="left:160px;position:relative"></td>

    </tr>
    <tr><td colspan="5" style="font-size:18px; font-weight: bold;  text-align: center;">Guardias y Roles</td></tr>
    <tr><td colspan="5" >&nbsp;</td></tr>
    <tr>
        <td style="width: 25px; height:21px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-top:1px solid">No</td>
        <td style="width: 100px; height:21px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-top:1px solid">Rol</td>
        <td style="width: 100px; height:21px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-top:1px solid">Dia</td>
        <td style="width: 100px; height:21px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-top:1px solid">Fecha Inicio</td>
        <td style="width: 100px; height:22px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;border-top:1px solid">Fecha Fin</td>

    </tr>
    <?= $html ?>
    </table>




    </page>





    <?php
    $content = ob_get_clean();
    // convert to PDF
    include '../../../tribunal/pdf/html2pdf.class.php';

    try {

        ////margenes
        ob_start();
        $html2pdf = new HTML2PDF('P', 'letter', 'fr', true, 'UTF-8');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('roles.pdf', "D");
    } catch (HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>