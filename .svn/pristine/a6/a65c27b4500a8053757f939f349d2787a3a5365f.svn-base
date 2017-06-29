<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);

if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
//    var_dump($_SESSION);

    //    echo "<br> Actuacion: " . $idActuacionArbol . "<br>";
    //    echo "Carpeta: " . $idCarpetaJudicialArbol . "<br>";
    //    echo "Procedencia: " . $procedencia . "<br>";
    ?>

    <style type="text/css">

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
        .optionprom{
            height: 10px;
        }

        .required{
            color: red;
        }

    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Consulta de Audiencias por Juzgado
            </h5>
        </div>


        <div class="panel-body" style="border: solid 4px #881518; margin: 20px;" >

            <div class="form-group" >
                <div class="col-md-9" >
                    <label class="control-label col-md-2" id="lblRelationName">Selecciona Fecha:</label>
                    <div class="col-md-3">
                        <input type="text" id="txtfecha" placeholder="Fecha Inicial" class="form-control datepicker" value=""/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <br>

            </div>
            <div class="col-md-offset-1 col-md-5">
                <!--            <div class="col-md-5">
                                </br>-->
                <input type="submit" class="btn btn-primary" id="buscaAudiencia" value="Consultar Audiencias" onclick="buscaAudiencias();" >                                    
                <!--            </div>
                            <div class="col-md-3">
                                    </br>-->
                <input type="submit" class="btn btn-primary" id="buscaAudiencia" value="Limpiar"  onclick="Limpiar();">                                    
                <!--            <div class="col-xs-2">
                                    </br>-->
                <input type="submit" class="btn btn-primary" id="imprimirAudiencias" value="Imprimir" style="display: none" onclick="imprimir();">                                    
                <!--</div>-->
                <!--</div>-->
            </div>
            <div class="form-group">&nbsp;</div>
            <div class="form-group">&nbsp;</div>
            <div id="divAlertDager" class="alert alert-danger alert-dismissable">

                <strong>Error!</strong> Mensaje
            </div>
            <div class="form-group">&nbsp;</div>
            <div class = "col-lg-12">
                <div id="divTableResult" style="margin: 10px;"></div>
            </div>
        </div>

        <div class="form-group">&nbsp;</div>



    </div>  


    </div>
    <script type="text/javascript">

        var juzgadoSesion = "<?php echo $_SESSION['cveAdscripcion']; ?>";
        var cveUsuarioSesion = "<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
        var procedencia = "<?php echo $procedencia; ?>";
        var cveGrupo = "<?php echo $_SESSION['cveGrupo']; ?>";
//        var cveGrupo = 109;

        var instancia = "";
        cargaInstancia = function () {
         $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            async: false,
            dataType: "json",
            data: {
               accion: "getInstanciaJuzgado"
            },
            beforeSend: function (datos) {
            },
            success: function (datos) {
               if (datos.totalCount > 0) {
                  instancia = datos.resultados[0].cveInstancia;
               }
            },
            error: function (objeto, quepaso, otroobj) {

            }
         });
      };
      cargaInstancia();
      
        Limpiar = function () {
            $("#imprimirAudiencias").hide();
            $("#divTableResult").html("");
            var d = new Date();

            var month = new Array();
            month[0] = "01";
            month[1] = "02";
            month[2] = "03";
            month[3] = "04";
            month[4] = "05";
            month[5] = "06";
            month[6] = "07";
            month[7] = "08";
            month[8] = "09";
            month[9] = "10";
            month[10] = "11";
            month[11] = "12";
            var day = new Array();
            day[1] = "01";
            day[2] = "02";
            day[3] = "03";
            day[4] = "04";
            day[5] = "05";
            day[6] = "06";
            day[7] = "07";
            day[8] = "08";
            day[9] = "09";
            var dia = d.getDate();
            if (dia < 10) {
                dia = day[dia];
            }
            var fecha = dia + "/" + month[d.getMonth()] + "/" + d.getFullYear();
            $("#txtfecha").val(fecha);
        }
        fechaBD = function (fechaJSON) {
            //                                                    alert(fechaJSON);
            var fecha = "";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/comparecencias/ComparecenciasFacade.Class.php",
                data: {
                    accion: "getFecha"
                },
                async: false,
                dataType: "json",
                global: false,
                beforeSend: function (objeto) {

                },
                success: function (datos) {
                    if (datos.totalCount > 0) {
                        fecha = datos.resultados[0].fecha.split(" ");

                        fecha = fecha[0].split("-");
    //                     fecha = fecha[2]+"/"+fecha[1]+"/"+fecha[0];

                    }
                }
            });
            return fecha;
        };
        buscaAudiencias = function () {
            var fecha = $("#txtfecha").val();

            var fechaEnviar = fecha.split("/");
            var dia = fechaEnviar[0];
            var mes = fechaEnviar[1];
            var anio = fechaEnviar[2];

            var fechaIn = anio + "-" + mes + "-" + dia;

            if (fecha != "") {
                var table = "";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                    data: {
                        fechaInicial: fechaIn,
                        instancia: instancia,
    //                    cveJuzgado: juzgadoSesion,
                        accion: "consultaAudi"
                    },
                    async: "true",
                    dataType: "json",
                    beforeSend: function (xhr) {

                    },
                    success: function (res) {
                        var gruposRestringidos = ["109","104","116","122","103","134","118","144","131","132"];
//                        var gruposRestringidos = [109,104,116,122,103,134,118,144,131,132];
                        var audienciasRestringidas = ["74","61","73","60"];
                            
                        $("#divTableResult").html("");
                        var json = "";
                        var fecha = $("#txtfecha").val();
                        if (res.estatus == "ok") {
                            $("#imprimirAudiencias").show();

                            table = "<table id='AudienciaSimple' class='table table-hover table-striped table-bordered' >";
                            table += "<thead>";
                            table += "  <tr>";
                            table += "      <th>Hora</th>";
                            table += "      <th>Audiencia</th>";
                            if(instancia == 1){
                                table += "      <th>Causa</th>";
                            }else{
                                table += "      <th>Toca</th>";
                            }
                            table += "      <th>Distrito</th>";
                            //table += "      <th>Aux</th>";
                            table += "      <th>Sala</th>";
                            table += "      <th>Imputado(s) y Defensor(es)</th>";
                            table += "  </tr>";
                            table += "</thead>";
                            table += "</tbody>";
                            $.each(res.datos, function (index, element) {
                                if(gruposRestringidos.indexOf(cveGrupo) >= 0 && audienciasRestringidas.indexOf(element.cveCatAudiencia) >= 0){
                                    table += "   <tr>";
                                    table += "      <th>" + element.horaAudiencia + " - " + element.horaAudienciasFin + " " + fecha + "</th>";
                                    table += "      <th> " + element.desCatAudiencia +"</th>";
                                    table += "      <th>" + element.nuemeroCausa + "/" + element.anioCausa + "-" + element.desCausa + "</th>";
                                    table += "      <th> "+ element.desDistrito +"</th>";
                                    table += "      <th> - - - </th>";
//                                    table += "      <th align='center'>" + "-" + element.Detenido + "- </br>" + element.DescripciondeNaturaleza + "</br> " + "<div id='por'></div>" + " </br>" + element.EstatusdelaAudiencia + "</th>";
                                    table += "      <th> - - - </th>"; 
                                }else{ 
                                    table += "   <tr>";
                                    table += "      <th>" + element.horaAudiencia + " - " + element.horaAudienciasFin + " " + fecha + "</th>";
                                    table += "      <th>" + element.desCatAudiencia + "</th>";
                                    table += "      <th>" + element.nuemeroCausa + "/" + element.anioCausa + "-" + element.desCausa + "</th>";
                                    table += "      <th>" + element.desDistrito + "</th>";
                                    table += "      <th>" + element.desSala + "</th>";
                                    table += "      <th>" + element.nombreCompletoImputadosDefensores + "</th>";
                                }
                            });
                        } else {
                            $("#imprimirAudiencias").hide();
                            $("#divAlertDager").html(res.mensaje);
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                        table += "</tbody>";
                        table += "</table>";

                        $("#divTableResult").html(table);

                    },
                    error: function () {
                        alert("Error al visualizar");
                    }

                });
            } else {
                $("#divTableResult").html("");
                var mensaje = "Selecciona una Fecha";
                $("#divAlertDager").html(mensaje);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        };

        imprimir = function () {
            var tabla = $("#AudienciaSimple").html();
            var ventimp = window.open('Reporte', 'Reporte');
            var style = '<style type="text/css" lang="stylesheet">';
            style += 'table{font-family: Arial; font-size: 12px; border-collapse:collapse;}';
            style += 'thead{font-family: Arial; font-size: 14px; font-weight: bold; background-color: #CDCDCD;}';
            style += 'tbody{font-family: Arial; font-size: 12px; border:solid black 1px;}';
            style += 'td{font-family: Arial; font-size: 12px; border:solid black 1px;}';
            style += 'th{font-family: Arial; font-size: 12px; border:solid black 1px;}';
            style += '.top{display:none;}';
            style += '.bottom{display:none;}';
            style += '.row{display: none;}';
            style += '.odd{color:#190707}';
            style += '@media print {';
            style += ' td,  tr{';
            style += 'border: solid #000 !important;';
            style += 'border-width: 1px 0 0 1px !important;';
    //            style += '}';
            style += '.top{display:none;}';
            style += '.bottom{display:none;}';
            style += '</style>';


            ventimp.document.write(style + "<body><table>" + tabla + "</table></body>");
            ventimp.document.close();
            ventimp.print();
    //              alert(tabla);
            ventimp.close();
        };

        $(function () {
            var fecha = fechaBD();
            var d = new Date(fecha);
            var m = new Date(fecha);
            m.setDate(m.getDate() + 1);
            $("#txtfecha").datetimepicker(
                    {sideBySide: false,
                        locale: "es",
                        format: "DD/MM/YYYY",
                        date: d,
                        maxDate: m
                    }
            );
        });

    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>