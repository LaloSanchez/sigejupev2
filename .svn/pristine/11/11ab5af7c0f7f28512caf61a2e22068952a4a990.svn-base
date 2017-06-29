<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);

if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    /* foreach ($_SESSION as $pos => $sesion) {
      echo $pos . " =>" . $sesion . " ";
      }
      $idActuacionArbol = "";
      $idCarpetaJudicialArbol = "";
      $procedencia = 0; */

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
                Consulta de Audiencias por Distrito
            </h5>
        </div>

        <div class="panel-body" style="border: solid 4px #881518; margin: 20px;">
            <div class="form-group">
                <div class="col-xs-9">
                    <label class="control-label col-xs-4" id="lblRelationName">Selecciona un Distrito</label>
                    <div class="col-xs-6">
                        <div id="divCmbRelaciones" class="logobox" ></div>
                        <select class="form-control Relacionado" name="cmbDistrito" id="cmbDistrito">
                            <option value="">Seleccione un Distrito</option>
                        </select>
                    </div>


                    <label class="control-label col-xs-4" id="lblRelationName">Selecciona Fecha:</label>
                    <div class="col-xs-3">
                        <input type="text" id="txtfecha" placeholder="FECHA INICIAL" class="form-control datepicker" value=""/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-7">
                    <div class="col-xs-3">
                        </br>
                        <input type="submit" class="btn btn-primary" id="buscaAudiencia" value="Consultar Audiencias" style="display: block" onclick="invocaAudiencias();">                                    
                    </div>
                    <div class="col-xs-2">
                        </br>
                        <input type="submit" class="btn btn-primary" id="buscaAudiencia" value="Limpiar" style="display: block" onclick="Limpiar();">                                    
                    </div>
                    <div class="col-xs-2">
                        </br>
                        <input type="submit" class="btn btn-primary" id="imprimirAudiencias" value="Imprimir" style="display: none" onclick="imprimir();">                                    
                    </div>
                </div>
            </div>
            <div class="form-group">&nbsp;</div>
            <div class="form-group">&nbsp;</div>
            <div class="form-group">&nbsp;</div>

            <div id="divTableResult" style="margin: 10px;"></div>
        </div>
    </div>



    <div id="divAlertDager" class="alert alert-danger alert-dismissable">

        <strong>Error!</strong> Mensaje
    </div>
    <script type="text/javascript">
        var juzgadoSesion = "<?php echo $_SESSION['cveAdscripcion']; ?>";
        var cveUsuarioSesion = "<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
        var procedencia = "<?php echo $procedencia; ?>";
        var cveGrupo = "<?php echo $_SESSION['cveGrupo']; ?>";
//        var cveGrupo = 109;

        invocaDistritos = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/distritos/DistritosFacade.Class.php",
                data: {
                    cveJuzgado: juzgadoSesion,
                    accion: "consultarDistritosActivos",
                },
                async: "true",
                dataType: "json",
                beforeSend: function (xhr) {

                },
                success: function (res) {
                    var opcion = "";
                    $.each(res.datos, function (index, element) {
                        $("#cmbDistrito").append($('<option></option>').val(element.clave).html(element.Descripcion));
                    });
                },
                error: function () {
                    alert("No se encontraron distritos");
                }

            });
        };
        Limpiar = function () {
            $("#divTableResult").html("");
            $("#imprimirAudiencias").hide();
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
        invocaAudiencias = function () {
            var distro = $("#cmbDistrito").val();
            var fecha = $("#txtfecha").val();
            //Convertir formato de fecha
            var fechaEnviar = fecha.split("/");
            var dia = fechaEnviar[0];
            var mes = fechaEnviar[1];
            var anio = fechaEnviar[2];
            var fechaIn = anio + "-" + mes + "-" + dia;
//            if (distro != "") {
                if (fecha != "") {

                    var table = "";
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                        data: {
                            fechaInicial: fechaIn,
                            cveDistrito: distro,
                            cveJuzgado: juzgadoSesion,
                            accion: "consultaAudienciasDistritos"
                        },
                        async: "true",
                        dataType: "json",
                        beforeSend: function (xhr) {

                        },
                        success: function (res) {
//                            var gruposRestringidos = [109,104,116,122,103,134,118,144,131,132];
                            var gruposRestringidos = ["109","104","116","122","103","134","118","144","131","132"];
                            var audienciasRestringidas = ["74","61","73","60"];
                            $("#divTableResult").html("");
                            var json = "";

                            if (res.estatus == "ok") {
                                var fecha = $("#txtfecha").val();
                                $("#imprimirAudiencias").show();

                                table = "<table id='AudienciaporDistritos' class='table table-hover table-striped table-bordered'>";
    //                             table += "<tr><td colspan='8'><label class='periodo'> Audiencias del dia: " + fecha + "</label></td></tr>";
                                table += "<thead>";
                                table += "  <tr>";
                                table += "      <th>Hora</th>";
                                table += "      <th>Audiencia</th>";
                                table += "      <th>Causa</th>";
                                table += "      <th>Distrito</th>";
                                //table += "      <th>Aux</th>";
                                table += "      <th>Sala</th>";
                                table += "      <th>Detenido</th>";
                                table += "      <th>Imputado(s) y Defensor(es)</th>";
                                table += "      <th>Hecho Delictuoso</th>";
                                table += "  </tr>";
                                table += "</thead>";
                                $.each(res.datos, function (index, element) {
                                    if (element.Detenido == null) {
                                        element.Detenido = "";
                                    }
                                    if(gruposRestringidos.indexOf(cveGrupo) >= 0 && audienciasRestringidas.indexOf(element.cveCatAudiencia) >= 0){
                                        table += "   <tr>";
                                        table += "      <th>" + element.horaAudiencia + " - " + element.horaAudienciaFin + " " + fecha + "</th>";
                                        table += "      <th>" + element.desCatAudiencia + "</th>";
                                        table += "      <th>" + element.nuemeroCausa + "/" + element.anioCausa + "-" + element.desCausa + "</th>";
                                        table += "      <th>" + element.desDistrito + "</th>";
                                        table += "      <th>" + element.desSala + "</th>";
                                        table += "      <th align='center'>" + "-" + element.Detenido + "- </br>" + element.DescripciondeNaturaleza + "</br> " + "<div id='por'></div>" + " </br>" + element.EstatusdelaAudiencia + "</th>";
                                        table += "      <th> - - - </th>";
                                        table += "      <th> - - - </th>";
                                    }else{  
                                        table += "   <tr>";
                                        table += "      <th>" + element.horaAudiencia + " - " + element.horaAudienciaFin + " " + fecha + "</th>";
                                        table += "      <th>" + element.desCatAudiencia + "</th>";
                                        table += "      <th>" + element.nuemeroCausa + "/" + element.anioCausa + "-" + element.desCausa + "</th>";
                                        table += "      <th>" + element.desDistrito + "</th>";
                                        table += "      <th>" + element.desSala + "</th>";
                                        table += "      <th align='center'>" + "-" + element.Detenido + "- </br>" + element.DescripciondeNaturaleza + "</br> " + "<div id='por'></div>" + " </br>" + element.EstatusdelaAudiencia + "</th>";
                                        table += "      <th>" + element.nombreCompletoImputadosDefensores + "</th>";
                                        table += "      <th>" + element.desDelito + "</th>";
                                    }
                                });
                                table += "</tbody>";
                                table += "</table>";
                                $("#divTableResult").html(table);
                            } else {
                                $("#imprimirAudiencias").hide();
                                $("#divTableResult").html("");
                                $("#divAlertDager").html(res.mensaje);
                                $("#divAlertDager").show("slide");
                                setTimeAlert("divAlertDager");
                            }
                        },
                        error: function () {
                            alert("Error al visualizar");
                        }
                    });
                } else {
                    var mensaje = "Selecciona una Fecha";
                    $("#divAlertDager").html(mensaje);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }//valida fecha
//            } else {
//                var table = "";
//                $.ajax({
//                    type: "POST",
//                    url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
//                    data: {
//                        fechaInicial: fechaIn,
//                        cveDistrito: "",
//                        cveJuzgado: juzgadoSesion,
//                        accion: "consultaAudienciasDistritos"
//                    },
//                    async: "true",
//                    dataType: "json",
//                    beforeSend: function (xhr) {
//
//                    },
//                    success: function (res) {
//                        $("#divTableResult").html("");
//                        var json = "";
//
//                        if (res.estatus == "ok") {
//                            var fecha = $("#txtfecha").val();
//                            $("#imprimirAudiencias").show();
//
//                            table += "<table id='AudienciaporDistritos' class='table table-hover table-striped table-bordered'>";
//
//                            table += "<thead>";
//                            table += "  <tr>";
//                            table += "      <th>Hora</th>";
//                            table += "      <th>Audiencia</th>";
//                            table += "      <th>Causa</th>";
//                            table += "      <th>Distrito</th>";
//                            //table += "      <th>Aux</th>";
//                            table += "      <th>Sala</th>";
//                            table += "      <th>Detenido</th>";
//                            table += "      <th>Imputado(s) y Defensor(es)</th>";
//                            table += "      <th>Acto Delictuoso</th>";
//                            table += "  </tr>";
//                            table += "</thead>";
//    //                        table += "</tbody>";
//    //                         table table += "<tr><td colspan='8'><label class='periodo'> Audiencias del dia: " + fecha + "</label></td></tr>"; += "<tr><td colspan='8'><label class='periodo'> Audiencias del dia: " + fecha + "</label></td></tr>";
//    //                            alert("entre");
//
//
//                            $.each(res.datos, function (index, element) {
//
//                                if (element.Detenido == null) {
//                                    element.Detenido = "";
//                                }
//                                table += "   <tr>";
//                                table += "      <td>" + element.horaAudiencia + " - " + element.horaAudienciaFin + " " + fecha + "</td>";
//                                table += "      <td>" + element.desCatAudiencia + "</td>";
//                                table += "      <td>" + element.nuemeroCausa + "/" + element.anioCausa + "-" + element.desCausa + "</td>";
//                                table += "      <td>" + element.desDistrito + "</td>";
//                                table += "      <td>" + element.desSala + "</td>";
//                                table += "      <td align='center'>" + "-" + element.Detenido + "- </br>" + element.DescripciondeNaturaleza + "</br> " + "<div id='por'></div>" + " </br>" + element.EstatusdelaAudiencia + "</td>";
//                                table += "      <td>" + element.nombreCompletoImputadosDefensores + "</td>";
//                                table += "      <td>" + element.desDelito + "</td>";
//                            });
//                        } else {
//
//                            $("#imprimirAudiencias").show();
//                            $("#divTableResult").html("");
//                            $("#divAlertDager").html(res.mensaje);
//                            $("#divAlertDager").show("slide");
//                            setTimeAlert("divAlertDager");
//                        }
//
//                        table += "</tbody>";
//                        table += "</table>";
//
//                        $("#divTableResult").html(table);
//
//                    },
//                    error: function () {
//                        alert("Error al visualizar");
//                    }
//
//                });
//    //            var mensaje = "Selecciona un Distrito";
//    //            $("#divAlertDager").html(mensaje);
//    //            $("#divAlertDager").show("slide");
//    //            setTimeAlert("divAlertDager");
//            }//valida distrito
        }

        imprimir = function () {
            var tabla = $("#AudienciaporDistritos").html();
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
            ventimp.close();
        };

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
                    }
                }
            });
            return fecha;
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

            invocaDistritos();
        });
    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>