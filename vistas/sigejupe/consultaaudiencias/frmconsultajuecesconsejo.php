<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);

if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {



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
                Agenda de Jueces Consejo de la Judicatura
            </h5>
        </div>

        <div class="panel-body" style="border: solid 4px #881518; margin: 20px;">
            <div class="form-group">
                <div class="col-xs-9">
                    <label class="control-label col-xs-4" style='text-align: right' id="lblRelationName">Selecciona un Distrito:</label>
                    <div class="col-xs-6">
                        <div id="divCmbRelaciones" class="logobox" ></div>
                        <select class="form-control Relacionado" name="cmbDistrito" id="cmbDistrito" onchange="jueces();">
                            <option value="">Seleccione un Distrito</option>
                        </select>
                    </div>                

                </div>
                <div class="col-xs-9">&nbsp;</div>
                <div class="col-xs-9">

                    <label class="control-label col-xs-4" style='text-align: right' id="lblRelationName">Seleccione Juez:</label>
                    <div class="col-xs-6">
                        <select class="form-control Relacionado" name="cmbJueces" id="cmbJueces">
                            <option value="">Seleccione un juez</option>
                        </select>       
                    </div>
                    <div class="col-xs-9">&nbsp;</div>

                    <label class="control-label col-xs-4" style='text-align: right' id="lblRelationName">Selecciona Fecha:</label>
                    <div class="col-xs-6">
                        <input type="text" id="txtfecha" placeholder="FECHA INICIAL" class="form-control datepicker" value=""/>
                    </div>  


                </div>
            </div>

            <div class="form-group">
                <div class="col-xs-offset-3 col-xs-7">
                    <div class="col-xs-3">
                        </br>
                        <input type="submit" class="btn btn-primary" id="buscaAudiencia" value="Consultar Audiencia" style="display: block" onclick="selectAudiencias();">                                    
                    </div>
                    <div class="col-xs-3">
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
            <div id="divTableResult" style="margin: 10px;" ></div>
        </div>

        <div id="divAlertDager" class="alert alert-danger alert-dismissable">
            <strong>Error!</strong> Mensaje
        </div>
        <div id="divAlertWarning" class="alert alert-warning alert-dismissable" style="display:none;">          
        </div>
        <script type="text/javascript">
            var juzgadoSesion = "<?php echo $_SESSION['cveAdscripcion']; ?>";
            var cveUsuarioSesion = "<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
            var procedencia = "<?php echo $procedencia; ?>";

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
                        alert("Error al visualizar");
                    }

                });
            };
            jueces = function () {
                var cveDistrito = $("#cmbDistrito").val();
                $("#cmbJueces").empty();
                //        if (cveDistrito != "") {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                    data: {
                        cveDistrito: cveDistrito,
                        accion: "obtenerjuzgadoresJuzgados",
                    },
                    async: "true",
                    dataType: "json",
                    beforeSend: function (xhr) {
                    },
                    success: function (res) {
                        $("#cmbJueces").empty();
                        $("#cmbJueces").append('<option value="">Seleccione una opci\u00f3n</option>');

                        $.each(res.resultados, function (index, element) {
                            $("#cmbJueces").append($('<option></option>').val(element.idJuzgador).html(element.nombre + " " + element.paterno + " " + element.materno));
                        });
                    },
                    error: function () {
                        alert("Error al visualizar");
                    }

                });
                //        }
            };
            Limpiar = function () {
    //            $("#cmbDistrito").val("");
                $("#cmbDistrito").val("").trigger('change');
                $("#cmbJueces").val("");



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

            imprimir = function () {
                var tabla = $("#AudienciaporDistritos").html();
                var ventimp = window.open('Reporte', 'Reporte');
                var style = '<style type="text/css" lang="stylesheet">';
                style += 'table{font-family: Arial; font-size: 12px; border-collapse:collapse;}';
                style += 'thead{font-family: Arial; font-size: 14px; font-weight: bold; background-color: #CDCDCD;}';
                style += 'tbody{font-family: Arial; font-size: 12px; border:solid black 1px;}';
                style += 'td{font-family: Arial; font-size: 12px; border:solid black 1px;}';
                style += '#fecha{font-family: Arial; border:solid black 1px; text-align:center; font-size: 60px; font-weight: bold;}';
                style += 'th{font-family: Arial; font-size: 12px; border:solid black 1px;}';
                style += '.top{display:none;}';
                style += '.bottom{display:none;}';
                style += '.row{display: none;}';
                style += '.odd{color:#190707}';
                style += '@media print {';
                style += ' td,  tr{';
                style += 'border: solid #000 !important;';
                style += 'border-width: 1px 0 0 1px !important;font-size: 18px;';
                //            style += '}';
                style += '.top{display:none;}';
                style += '.bottom{display:none;}';
                style += '</style>';
                var fecha = $("#txtfecha").val();


                ventimp.document.write(style + "<body><table id='fecha' width='100%' align='center'><tr class='tr' style='witdh:100%; font-size:40px;'><td>" + fecha + "</td></tr></table><table>" + tabla + "</table></body>");
                ventimp.document.close();
                ventimp.print();
                //              alert(tabla);
                ventimp.close();
            };

            selectAudiencias = function () {
                if ($("#txtfecha").val() != "") {
                    var table = "";
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                        data: {
                            fechaInicial: $("#txtfecha").val(),
                            cveDistrito: $("#cmbDistrito").val(),
                            idJuzgador: $("#cmbJueces").val(),
                            accion: "consultaAudienciasConsejo"
                        },
                        async: "false",
                        dataType: "json",
                        beforeSend: function (xhr) {

                        },
                        success: function (res) {
                            $("#divTableResult").html("");
                            var json = "";
                            if (res.estatus == "ok" && res.totalCount > 0) {

                                $("#imprimirAudiencias").show();
                                table = "<table id='AudienciaporDistritos' class='table table-hover table-striped table-bordered'>";
                                table += "<thead>";
                                table += "  <tr>";
                                table += "      <th>Hora </th>";
                                table += "      <th>Audiencia</th>";
                                table += "      <th>Causa</th>";
                                table += "      <th>Distrito</th>";
                                table += "      <th>Sala</th>";
                                table += "      <th>Detenido</th>";
                                table += "      <th>Imputado(s) y Defensor(es)</th>";
                                table += "  </tr>";
                                table += "</thead>";
                                table += "</tbody>";
                                $.each(res.datos, function (index, element) {
                                    table += "   <tr>";
                                    table += "      <th>" + element.horaAudiencia + " - " + element.horaAudienciaFinal + "</th>";
                                    table += "      <th>" + element.desCatAudiencia + "</br>" + element.nombreCompletoJ + "</th>";
                                    table += "      <th>" + element.nuemeroCausa + "/" + element.anioCausa + "-" + element.desCausa + "</th>";
                                    table += "      <th>" + element.desDistrito + "</th>";
                                    table += "      <th>" + element.desSala + "</th>";
                                    table += "      <th align='center'>" + "-" + element.Detenido + "- </br>" + element.DescripciondeNaturaleza + "</br> " + "<div id='por'></div>" + " </br>" + element.EstatusdelaAudiencia + "</th>";
                                    table += "      <th>" + element.nombreCompletoImputadosDefensores + "</th>";
                                    table += "   </tr>";
                                });
                                table += "</tbody>";
                                table += "</table>";
                                $("#divTableResult").html(table);
                            } else {
                                $("#divTableResult").html("");
                                $("#divAlertWarning").html("No se Encontrar&oacute;n Registros");
                                $("#divAlertWarning").show("slide");
                                $("#imprimirAudiencias").hide();
                                setTimeAlert("divAlertWarning");
                            }


                        },
                        error: function () {
                            alert("Error al visualizar");
                        }

                    });
                } else {
                    var mensaje = "Selecciona una Fecha";
                    $("#divAlertWarning").html(mensaje);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }


            };
            invocaAudiencias = function () {
                var distro = $("#cmbDistrito").val();
                var fecha = $("#txtfecha").val();
                //Convertir formato de fecha
                var fechaEnviar = fecha.split("/");
                var dia = fechaEnviar[0];
                var mes = fechaEnviar[1];
                var anio = fechaEnviar[2];
                var idJuzgador = $("#cmbJueces").val();

                var fechaIn = anio + "-" + mes + "-" + dia;

                if (distro != "") {
                    if (fecha != "") {
                        var table = "";
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                            data: {
                                fechaInicial: fechaIn,
                                cveDistrito: distro,
                                cveJuzgado: juzgadoSesion,
                                idJuzgador: idJuzgador,
                                accion: "consultaAudienciasConsejo"
                            },
                            async: "false",
                            dataType: "json",
                            beforeSend: function (xhr) {

                            },
                            success: function (res) {
                                $("#divTableResult").html("");

                                var json = "";

                                if (res.estatus == "ok" && res.totalCount > 0) {

                                    $("#imprimirAudiencias").show();
                                    table = "<table id='AudienciaporDistritos' class='table table-hover table-striped table-bordered'>";
                                    table += "<thead>";
                                    table += "  <tr>";
                                    table += "      <th>Hora </th>";
                                    table += "      <th>Audiencia</th>";
                                    table += "      <th>Causa</th>";
                                    table += "      <th>Distrito</th>";
                                    //table += "      <th>Aux</th>";
                                    table += "      <th>Sala</th>";
                                    table += "      <th>Detenido</th>";
                                    table += "      <th>Imputado(s) y Defensor(es)</th>";
                                    table += "  </tr>";
                                    table += "</thead>";
                                    table += "</tbody>";
                                    $.each(res.datos, function (index, element) {
                                        table += "   <tr>";
                                        table += "      <th>" + element.horaAudiencia + " - " + element.horaAudienciaFinal + "</th>";
                                        table += "      <th>" + element.desCatAudiencia + "</br>" + element.nombreCompletoJ + "</th>";
                                        table += "      <th>" + element.nuemeroCausa + "/" + element.anioCausa + "-" + element.desCausa + "</th>";
                                        table += "      <th>" + element.desDistrito + "</th>";
                                        table += "      <th>" + element.desSala + "</th>";
                                        table += "      <th align='center'>" + "-" + element.Detenido + "- </br>" + element.DescripciondeNaturaleza + "</br> " + "<div id='por'></div>" + " </br>" + element.EstatusdelaAudiencia + "</th>";
                                        table += "      <th>" + element.nombreCompletoImputadosDefensores + "</th>";
                                    });
                                    table += "</tbody>";
                                    table += "</table>";


                                    $("#divTableResult").html(table);
                                } else {
                                    $("#divTableResult").html("");
                                    $("#divAlertWarning").html("No se Encontrar&oacute;n Registros");
                                    $("#divAlertWarning").show("slide");
                                    $("#imprimirAudiencias").hide();
                                    setTimeAlert("divAlertWarning");
                                }


                            },
                            error: function () {
                                alert("Error al visualizar");
                            }

                        });
                    } else {
                        var mensaje = "Selecciona una Fecha";
                        $("#divAlertWarning").html(mensaje);
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                    }//valida fecha
                } else {
                    var table = "";
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                        data: {
                            fechaInicial: fechaIn,
                            cveDistrito: "",
                            cveJuzgado: juzgadoSesion,
                            accion: "consultaAudienciasConsejo"
                        },
                        async: "true",
                        dataType: "json",
                        beforeSend: function (xhr) {

                        },
                        success: function (res) {
                            $("#divTableResult").html("");
                            var json = "";

                            if (res.estatus == "ok") {
                                table = "<table id='AudienciaporDistritos' class='table table-hover table-striped table-bordered'>";
                                table += "<thead>";
                                table += "  <tr>";
                                table += "      <th>Hora </th>";
                                table += "      <th>Audiencia</th>";
                                table += "      <th>Causa</th>";
                                table += "      <th>Distrito</th>";
                                //table += "      <th>Aux</th>";
                                table += "      <th>Sala</th>";
                                table += "      <th>Detenido</th>";
                                table += "      <th>Imputado(s) y Defensor(es)</th>";
                                table += "  </tr>";
                                table += "</thead>";
                                table += "</tbody>";
                                $.each(res.datos, function (index, element) {
                                    table += "   <tr>";
                                    table += "      <th>" + element.horaAudiencia + " - " + element.horaAudienciaFinal + "</th>";
                                    table += "      <th>" + element.desCatAudiencia + "</br>" + element.nombreCompletoJ + "</th>";
                                    table += "      <th>" + element.nuemeroCausa + "/" + element.anioCausa + "-" + element.desCausa + "</th>";
                                    table += "      <th>" + element.desDistrito + "</th>";
                                    table += "      <th>" + element.desSala + "</th>";
                                    table += "      <th align='center'>" + "-" + element.Detenido + "- </br>" + element.DescripciondeNaturaleza + "</br> " + "<div id='por'></div>" + " </br>" + element.EstatusdelaAudiencia + "</th>";
                                    table += "      <th>" + element.nombreCompletoImputadosDefensores + "</th>";
                                });
                            } else {
                                $("#divTableResult").html("");
                                $("#divAlertWarning").html(res.mensaje);
                                $("#divAlertWarning").show("slide");
                                setTimeAlert("divAlertWarning");
                            }
                            table += "</tbody>";
                            table += "</table>";


                            $("#divTableResult").html(table);

                        },
                        error: function () {
                            alert("Error al visualizar");
                        }

                    });
                    //            var mensaje = "Selecciona un Distrito";
                    //            $("#divAlertDager").html(mensaje);
                    //            $("#divAlertDager").show("slide");
                    //            setTimeAlert("divAlertDager");
                }//valida distrito


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


            var fecha = fechaBD();
            var d = new Date(fecha);
            var m = new Date(fecha);
            m.setDate(m.getDate() + 1);
            $("#txtfecha").datetimepicker(
                    {sideBySide: false,
                        locale: "es",
                        format: "DD/MM/YYYY",
                        date: d
                    }
            );

            $(function () {
                var fecha = fechaBD();
                var d = new Date(fecha);
                var m = new Date(fecha);
                m.setDate(m.getDate() + 1);
                $("#txtfecha").datetimepicker(
                        {sideBySide: false,
                            locale: "es",
                            format: "DD/MM/YYYY",
                            date: d
                        }
                );
                invocaDistritos();
                jueces();
            });
        </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>