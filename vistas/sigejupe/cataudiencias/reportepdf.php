

<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
  date_default_timezone_set('America/Mexico_City');

  $pag=$_POST['pag'];
  $cantxPag=$_POST['cantxPag'];

  $con=$_POST['info'];
  $fec=$_POST['fec'];
  $aux="";
  $html="";

  $cont=1;
  $ab="";
  $b="";
  $desdistrito="";
  $causa="";
  $activo="";
  $duracionminima="";
  $duracionmaxima="";
  $desahogohoramin="";
  $desahogohoramax="";
  $holgura="";
  $desnat="";
  $tipoaud="";
  $etapa="";
  $pag=1;
  $pag2=1;
  for($a=0;$a<strlen($con);$a++){
      
      
      if($con[$a]!='|'){
      $aux.=$con[$a];

      }else{


          if($pag2==10){
              $html.='
                  
            <tr>
              <td  colspan="3" style="display: inline" >
                  <img src="../../img/EdoMex-2.jpg" style="height: 150px;width: 150px;position:relative">
                  <table colspan="3" style="display: inline" style="position:absolute;left:70px;top:50px;height: 1px"><tr>              
                      <tr><td>Gobierno del Estado de M&eacute;xico</td></tr>
                      <tr> <td>Poder Judicial</td></tr>
                      <tr><td>Consejo de la Judicatura</td></tr>
                      <tr><td><b>Reporte C&aacute;talogo de Audiencias por Distrito</b></td></tr>
                      </tr></table>
              </td>
               <td colspan="2"  >
                  <img src="../../img/EscudoPoderJudicial.jpg"  style="right:160px;position:relative">
               </td>
            </tr>
            <tr>
              <td style="width: 25px; height:21px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-top:1px solid"><b>No</b></td>
              <td style="width: 65px; height:21px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-top:1px solid"><b>Clave Audiencia</b></td>
              <td style="width: 540px; height:22px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;border-top:1px solid"><b>Cat&aacute;talogo de Audiencias por Distrito</b></td>
            </tr>
          ' ;       
              $pag2=1;
          }


         if($cont==1){
          $ab=$aux;
         }
         if($cont==2){
          $b=$aux;
         }
         if($cont==3){
          $causa=$aux;
         }
         if($cont==4){
          $activo=$aux;
         }
         if($cont==5){
          $duracionminima=$aux;
         }
         if($cont==6){
          $duracionmaxima=$aux;
         }
         if($cont==7){
          $desahogohoramin=$aux;
         }
         if($cont==8){
          $desahogohoramax=$aux;
         }       
         if($cont==9){
          $desnat=$aux;
         }
         if($cont==10){
          $tipoaud=$aux;
         }
         if($cont==11){
          $etapa=$aux;
         }
         if($cont==12){
          $desdistrito=$aux;
         }
         if($cont==13){
          $holgura=$aux;
      $html.='
        <tr>
          <td style="width:25px; height:20px;text-align:center;border-left:1px solid;border-bottom:1px solid;top:'.(10*$pag).'px">'.$pag.'</td>
          <td style="width: 35px; height:20px;text-align:center;border-left:1px solid;border-bottom:1px solid;top:'.(10*$pag).'px">'.$ab.'</td>

          <td style="width: 600px; height:22px;text-align:left;border-left:1px solid;border-bottom:1px solid;top:'.(10*$pag).'px;border-right: 1px solid"><b>'.$b.'</b>
              <br/>Distrito: '.$desdistrito.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              Naturaleza: '.$desnat.'                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tipo: '.$tipoaud.'              
              <br/>Fase: '.$etapa.'                                        
              <br/>Duracion Minima: '.$duracionminima.' &nbsp;&nbsp;&nbsp;Maxima: '.$duracionmaxima.'&nbsp;&nbsp;&nbsp;Holgura: '.$holgura.'           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Activo: ';
              if($activo=="S")
              {
                  $html.=' SI';
              }
              else {
                  if($activo=="N")
                  {
                      $html.=' NO';
                  }
              }
          $html.=    '<br/>Desahogo Hora Minima: '.$desahogohoramin.' &nbsp;&nbsp;&nbsp;&nbsp;Maxima: '.$desahogohoramax.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Con Causa: ';
              if($causa=="S")
              {
                  $html.=' SI';
              }
              else {
                  if($causa=="N")
                  {
                      $html.=' NO';
                  }
              }
          $html.='    <br/>    
              </td>
          </tr>';

        $cont=0;
      $pag++;
      $pag2++;
         }
         $cont++;
      $aux="";



      }


  }
  //echo $html;
  //$html=$con;
  //$encabezado="<img src=''>EscudoPoderJudicial"
       ob_start();
       
  ?>



      
      <table cellspacing="0" style="position: relative;left:50px;height: 50px">
   <tr>
       <td  colspan="3" style="display: inline" >
          
          <img src="../../img/EdoMex-2.jpg" style="height: 150px;width: 150px;left:0px;position:relative">
          <table style="position: absolute;left:70px;top:50px;height: 1px"><tr>
              <tr><td>Gobierno del Estado de M&eacute;xico</td></tr>
              <tr> <td>Poder Judicial</td></tr>
              <tr><td>Consejo de la Judicatura</td></tr>
              <tr><td><b>Reporte C&aacute;talogo de Audiencias por Distrito</b></td></tr>
                                                 
              </tr></table>
      
      </td>
       <td colspan="2"  >
           <img src="../../img/EscudoPoderJudicial.jpg"  style="right:160px;position:relative">
       </td>

    </tr>
     
    <tr>
        <td style="width: 25px; height:21px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-top:1px solid"><b>No</b></td>
      <td style="width: 65px; height:21px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-top:1px solid"><b>Clave Audiencia</b></td>
      <td style="width: 540px; height:22px;text-align:center;border-left:1px solid;border-bottom:1px solid;border-right: 1px solid;border-top:1px solid"><b>Cat&aacute;talogo de Audiencias por Distrito</b></td>
    </tr>
  <?=$html
          ?>
  </table>









  <?php


       $content = ob_get_clean();
      
      // convert to PDF
  include '../../../tribunal/pdf/html2pdf.class.php';
     
      try


      {
          
          ////margenes
  ob_start();        $html2pdf = new HTML2PDF('P', 'letter', 'fr', true, 'UTF-8');
          $html2pdf->pdf->SetDisplayMode('fullpage');
          $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
         $html2pdf->Output('audiencias.pdf',"D");
      }
      catch(HTML2PDF_exception $e) {
          echo $e;
          exit;
      }

} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>