<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
//version 14/01/2016
//:)
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set("America/Mexico_City");
    $fechaHoraHoy = date("Y-m-d");

    $idActuacionArbol = "";
    $idCarpetaJudicialArbol = "";
    $procedencia = 0;

    if (isset($_POST['idActuacion'])) {
        $idActuacionArbol = @$_POST['idActuacion'];
    }
    if (isset($_POST['idCarpetaJudicial'])) {
        $idCarpetaJudicialArbol = @$_POST['idCarpetaJudicial'];
    }

    if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "")) {
        $procedencia = 1; // viene de arbol
    } else {
        $procedencia = 0; // formulario general
    }

    //echo "<br> Actuacion: " . $idActuacionArbol . "<br>"; 
    //echo "Carpeta: " . $idCarpetaJudicialArbol . "<br>";
    //echo "Procedencia: " . $procedencia . "<br>";
    ?>

    <style type="text/css">
        #myModal {
        width: 100%;
    }   
        .modal-body {
            width: 100%; /* SET THE WIDTH OF THE MODAL */
            margin: 0px;
    }
        .modal fade {
            width: 100%; /* SET THE WIDTH OF THE MODAL */
    }

    #tamanio{
      width: 100% !important;
    }
        .alert{
            display: none;
        }

        #divHideForm{
            display: none;
            position: absolute;
            width: 100%;
            height: 100vh;
            opacity: .5;
            z-index: 99999;
            background: #427468;
        }

        #divMenssage{                
            width: 100%;
            height: 40px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            margin-top: 40vh;
            margin-bottom: auto;
            color: #284740;
            background: #FFFFFF;
            text-transform: uppercase;

        }

        #divImgloading{                  
            background: #FFFFFF url(img/cargando_1.gif) no-repeat;
            background-position: center;
            width: 100%;
            height: 70px;
            margin-left: auto;
            margin-right: auto;
        }

        .panel panel-default{
            background: #427468;
            color: #ebf3f1;
        }

        .panel-heading{
            background: #427468;
            color: #ebf3f1;
        }

        .panel-group .panel-heading{
            background: #427468;
            color: #ebf3f1;
        }
        .panel-default > .panel-heading{
            background: #427468;        
            color: #ebf3f1;
        }
        
        .needed:after {
            color:darkred;
            content: " (*)";
        }
    </style>


    <input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>" >
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="" >
    <input type="hidden" id="hiddenIdActuacionAcuerdo" value="" >
    <input type="hidden" id="hiddenFechaActual" name="hiddenFechaActual" value="<?php echo date("Y-m-d") ?>" >

        <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title" id="h5titulo">                                                            
                    AUDIENCIAS DEL JUZGADO
                </h5>
            </div>
        </div>   
    <div class="panel-body">
        <div id="divFormulario" class="form-horizontal">
        <div class="form-group">
             <div id="divAdvertencia" class="alert alert-warning alert-dismissable" style="display: none">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong id="strAdvertencia"></strong> 
             </div>
             <div id="divCorrecto" class="alert alert-success alert-dismissable" style="display: none">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong id="strCorrecto"></strong> 
             </div>
             <div id="divError" class="alert alert-danger alert-dismissable" style="display: none">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong id="strError"></strong>
             </div>
             <div id="divInformacion" class="alert alert-info alert-dismissable" style="display: none">
                 <button type="button" class="close" data-dismiss="alert">&times;</button>
                 <strong id="strInformacion"></strong>
             </div>
         </div>  
         <div class="form-group">
             <div id="divAlertWarning" class="alert alert-warning alert-dismissable">                    
                 <strong>Advertencia!</strong> Mensaje
             </div>
             <div id="divAlertSucces" class="alert alert-success alert-dismissable">

                 <strong>Correcto!</strong> Mensaje
             </div>
             <div id="divAlertDager" class="alert alert-danger alert-dismissable">

                 <strong>Error!</strong> Mensaje
             </div>
             <div id="divAlertInfo" class="alert alert-info alert-dismissable">

                 <strong>Informaci&oacute;n!</strong> Mensaje
             </div>
        </div>   

        <input type="submit" class="btn btn-primary" value="Ver Audiencias" id="btnVer" name="btnVer" data-toggle="modal" data-target="#myModal"  style="display:none;" onclick="">    

        <div class="modal fade" id="myModal" role="dialog" width="100%">
            <div class="modal-dialog" id="tamanio">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title"><div id="dia"></div></h4>
                </div>
                    <div class="modal-body" id="divTableResultAudiencias"  width="100%">
                        <!--div class="table-responsive" id="divTableResultAudiencias">
                        </div-->
                    </div>
                <div class="modal-footer">
                  
                  <input type="submit" class="btn btn-default"  data-dismiss="modal">    
                </div>
              </div>
            </div>
          </div>
        </div>
        <input type="hidden" name="actual" id="actual" value="0">
        <div class="modal-body" id="divTableResult">
        </div>
        
    </div>    
    <script type="text/javascript">

    //    var juzgadoSesion =762;
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
        var Actual = <?php echo $fechaHoraHoy; ?>;

        var procedencia = <?php echo $procedencia; ?>;
        var electronica=0;
        var mover='';
        var actualizar='';
        var r='';
        var rev=0;
        clearInterval(actualizar);
        clearInterval(mover);
        
        
    //----->3
    function Empezar(rev){
        //clearInterval(mover);
        //mover=setInterval('Quitar()',rev);
        mover = setTimeout('Quitar()',rev);
    };
    //----->4
    function Quitar(){
        var i=parseInt($("#actual").val())+1;
        //alert(i);//Actual comienza en 0+1
        $("#actual").val(i);
        var aux;
        var m;
            m="#Remplazo" + i;
            aux="#" + i;
            $(m).html($(aux).html());
            $(m).show("fade");
            aux="#" + i;
            $(aux).hide();
            if(i>=r)
            {
    //            clearInterval(mover);
    //            clearInterval(actualizar);
    //            actualizar='';
    //            mover='';
    //            $("#actual").val(0);
    //            Reiniciar();
            //alert("Ya terminé");
            clearTimeout(mover);
            $("#divTableResultAudiencias").val("");
                $("#actual").val(0);
                Reiniciar();
            }
            else{
              //alert(rev);
              mover = setTimeout('Quitar()',rev);
            }
    };
    //----->1
         $(function Cargar() {     
             ConsultarAudiencias();
             //actualizar=setInterval('ConsultarAudiencias()',120000);
            });

            function Reiniciar() {     
            //alert("nuevo")
             ConsultarAudiencias();
             //actualizar=setInterval('ConsultarAudiencias()',120000);
            };
    //----->2
        function ConsultarAudiencias() {
                mover='';
                clearInterval(mover);
                $("#actual").val(0);
                var strDatos = "accion=consultarAudienciasJuzgado";
                strDatos += "&cveJuzgadoDesahoga="+juzgadoSesion;
                //strDatos += "&cveEstatusAudiencia=1"; //2->Por celebrar
                    $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    global:false,
                    beforeSend: function (objeto) {
        //                ToggleLoading(1);
                    },
                    success: function (datos) {
                        var json = "";
                        var table="";
                        json = eval("(" + datos + ")"); //Parsear JSON
                        if (json.totalCount > 0) {
                            FechaActual(json.fechaInicialOK);
                                table += "<div class='col-md-12'>";
                                table += "<table class='table table-striped' style='margin:0%' width='100%'>";
                                table += "<thead>";
                                table += "<tr>";
                                table += "<th width='17%'>HORARIO</span></th>";
                                table += "<th width='33%'>IMPUTADO(S)/DEFENSOR(ES)</th>";
                                table += "<th width='22%'>SALA</th>";
                                table += "<th width='28%'>AUDIENCIA</th>";
                                table += "</tr>";
                                table += "</thead>";  
                                table += "</table>";   

                                var i=1;
                                var h=0;
                                var a=7;
                                var j=0;
                                var p=0;
                                var f=0;
                                var haux;
                                var k=1;
                                var u=json.total;
                                json.data[u]=100;
                                f=f+1;
                                table += "<div id='" + f + "'>";
                                table += "<table class='table table-striped' style='margin:0%' width='100%'>";
                                table += "<tr>";
                                table += "<td align='center'>";
                                table += "<strong> <FONT SIZE=4> INICIO DE AGENDA </FONT> </strong>";
                                table += "</td>";
                                table += "</tr>";
                                table += "</table>";
                                table += "</div>";
                                
                                for(j=0;j<json.totalCount;j++)
                                {
                                while(h<json.data[j].hInicio){
                                            f=f+1;
                                            table += "<div id='" + f + "'>";
                                                table += "<table class='table table-striped' style='margin:0%'  width='100%'>";
                                                if(k%2==0){
                                                    table += "<tr class='active'>";
                                                }
                                                else{
                                                    table += "<tr>";
                                                }
                                                if((h+1) == 24){
                                                    table += "<td width='15%'>" + (h) + ":00" + "- 00:00" + "</td>";
                                                }else{
                                                    table += "<td width='15%'>" + (h) + ":00" + "-" + (h+1) + ":00" + "</td>";
                                                }
                                                table += "<td width='35%'></td>";
                                                table += "<td width='22%'></td>";
                                                table += "<td width='28%'></td>";
                                                table += "</tr>";
                                                table += "</table>";
                                            table += "</div>";
                                            h=h+1;
                                            k=k+1;
                                        }
                                            f=f+1;
                                            table += "<div id='" + f + "'>";  
                                                table += "<table class='table table-striped' style='margin:0%'  width='100%'>";
                                                if(k%2==0){
                                                    table += "<tr class='active'>";
                                                }
                                                else{
                                                    table += "<tr>";
                                                }
                                                table += "<td width='15%'>" + json.data[j].horaInicio + "-" + json.data[j].horaFinal + "</td>";
                                                table += "<td width='35%'>";
                                                table += "<div align='center'>";
                                                if(json.data[j].totalImputadosSolicitudes>0){
                                                //--------------Imputados
                                                    $.each(json.data[j].DetalleImpSolicitudes, function (k, vImputado) {
                                            if(json.data[j].cveNaturaleza==1){//El 1 es de audiencia Pública
                                                           table += vImputado.nombre + ' ' + vImputado.paterno + ' ' + vImputado.materno;
                                                        }  
                                                        table += "</br>";
                                                            //---Defensores
                                                                if(vImputado.totalDefensores>0){
                                                                    $.each(vImputado.DetalleDefensores, function (k, Defensor) {
                                                                        table += "(Def. " +Defensor.nombre + " )";
                                                                        table += "</br>"; 
                                                                    });    
                                                                    table += "</br>";
                                                                }
                //                                            //-----------
                                                    });    
                                                //--------------
                                                }
                                                table += "</div>";
                                                table += "</td>";
                                                table += "<td width='22%'><div align='center'>" + json.data[j].desSala + "</div></td>";
                                                table += "<td width='28%'><div align='center'>" + json.data[j].desCatAudiencia + "</br>[>> " + json.data[j].desNaturaleza + " <<]</br>" + "<strong>" + json.data[j].EstatusAudiencia + "</strong></div>";
                                                table += "<td></td>";
                                                table += "<td>";
                                                table += "</td>";
                                                table += "</table>"; 
                                            table += "</div>"; 
                                            table += "</div>";
                                            k=k+1;
                                        } 
                            for(j=h;j<24;j++)
                            {  
                                            f=f+1;
                                            table += "<div id='" + f + "'>";
                                                table += "<table class='table table-striped' style='margin:0%'  width='100%'>";
                                                if(k%2==0){
                                                    table += "<tr class='active'>";
                                                }
                                                else{
                                                    table += "<tr>";
                                                }
                                                if((h+1) == 24){
                                                    table += "<td width='15%'>" + (h) + ":00" + "- 00:00" + "</td>";
                                                }else{
                                                    table += "<td width='15%'>" + (h) + ":00" + "-" + (h+1) + ":00" + "</td>";
                                                }

                                                table += "<td width='35%'></td>";
                                                table += "<td width='22%'></td>";
                                                table += "<td width='28%'></td>";
                                                table += "</tr>";
                                                table += "</table>";
                                            table += "</div>";
                                            h=h+1;
                                            k=k+1;
                                            //j=parseInt(json.total);
                                        }

                                for(r=1;r<=f;r++){
                                    table += "<div id='Remplazo" + r + "'>";
                                    table += "</div>";
                                }
                                    $("#divTableResultAudiencias").html(table);
                                    $("#divTableResultAudiencias").show();                              
                                    $("#btnVer").show();
                                    $('#myModal').modal('show');
    //                                $("#divTableResult").html(table);
    //                                $("#divTableResult").show();
                                    rev=120000/r;
                                    Empezar(rev);
                                    
                            }
                            else {
    //                        $("#divConsultaAudiencias").hide();
    //                        $("#btnVer").hide();
    //                        $("#divTableResultAudiencias").html("");
    //                        $("#divAlertInfo").html("NO HAY AUDIENCIAS DISPONIBLES");
    //                        $("#divAlertInfo").show("slide");
                            var Actual=$("#hiddenFechaActual").val();
                            FechaActual(Actual);
                                table += "<div class='col-md-12'>";
                                table += "<table class='table table-striped' style='margin:0%' width='100%'>";
                                table += "<thead>";
                                table += "<tr>";
                                table += "<th width='17%'>HORARIO</span></th>";
                                table += "<th width='33%'>IMPUTADO(S)/DEFENSOR(ES)</th>";
                                table += "<th width='22%'>SALA</th>";
                                table += "<th width='28%'>AUDIENCIA</th>";
                                table += "</tr>";
                                table += "</thead>";  
                                table += "</table>";   

                                var i=1;
                                var a=7;
                                var j=0;
                                var p=0;
                                var f=0;
                                var haux;
                                
                                f=f+1;
                                table += "<div id='" + f + "'>";
                                table += "<table class='table table-striped' style='margin:0%' width='100%'>";
                                table += "<tr>";
                                table += "<td align='center'>";
                                table += "<strong> <FONT SIZE=4> INICIO DE AGENDA </FONT> </strong>";
                                table += "</td>";
                                table += "</tr>";
                                table += "</table>";
                                table += "</div>";
                                
                                    for (h=0; h<24; h++) {
                                            f=f+1;
                                            table += "<div id='" + f + "'>";
                                                table += "<table class='table table-striped' style='margin:0%'  width='100%'>";
                                                if(h%2==0){
                                                    table += "<tr class='active'>";
                                                }
                                                else{
                                                    table += "<tr>";
                                                }
                                                if(h==23){
                                                    table += "<td width='15%'>" + (h) + ":00" + " - 00:00" + "</td>";
                                                }else{
                                                    table += "<td width='15%'>" + (h) + ":00" + " - " + (h+1) + ":00" + "</td>";
                                                }
                                                table += "<td width='35%'></td>";
                                                table += "<td width='22%'></td>";
                                                table += "<td width='28%'></td>";
                                                table += "</tr>";
                                                table += "</table>";
                                            table += "</div>";
                                        }    
                                    
                                for(r=1;r<=f;r++){
                                    table += "<div id='Remplazo" + r + "'>";
                                    table += "</div>";
                                }
                                    $("#divTableResultAudiencias").html(table);
                                    $("#divTableResultAudiencias").show();
                                    $("#btnVer").show();
                                    $('#myModal').modal('show');
    //                                $("#divTableResult").html(table);
    //                                $("#divTableResult").show();
                                    //alert("r:  "+r)/==26
                                    rev=120000/r;
                                    Empezar(rev);
                            }
                    },
                    error: function (objeto, quepaso, otroobj) {
        //                alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("ERROR AL CONSULTAR LAS AUDIENCIAS");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });

        };
        

        function FechaActual(auxfecha) {
        //alert(auxfecha);
            var a=auxfecha.substring(0,10);
            var aux=a.split('-');
            if(aux[1]=='01'){mes="ENERO";}
            if(aux[1]=='02'){mes="FEBRERO";}
            if(aux[1]=='03'){mes="MARZO";}
            if(aux[1]=='04'){mes="ABRIL";}
            if(aux[1]=='05'){mes="MAYO";}
            if(aux[1]=='06'){mes="JUNIO";}
            if(aux[1]=='07'){mes="JULIO";}
            if(aux[1]=='08'){mes="AGOSTO";}
            if(aux[1]=='09'){mes="SEPTIEMBRE";}
            if(aux[1]=='10'){mes="OCTUBRE";}
            if(aux[1]=='11'){mes="NOVIEMBRE";}
            if(aux[1]=='12'){mes="DICIEMBRE";}
            var desc =  "<?php echo $_SESSION['desAdscripcion'] ?>";
            fecha="<h2>AUDIENCIAS "+ desc +": " + aux[2] + " DE " + mes + " DE " + aux[0]+"</h2>";
            //fecha="<h3>" + aux[2] + " DE " + mes + " DE " + aux[0] + "</h3>";
            $("#dia").html(fecha);
        };
        
        

    	
        
        
    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>