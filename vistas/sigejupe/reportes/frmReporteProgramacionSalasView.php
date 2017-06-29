<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    ?>
    <style>
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
        .requerido{
            color: darkred;
        }
    </style>
    <link href="../vistas/css/generalStyles.css" rel="stylesheet" />      
    <!--<div class="page-content" id="areadetrabajo">-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Reporte de Disponibilidad de Salas                           
            </h5>
        </div>
        <div class="panel-body">
            <p class="col-lg-12" style="color:darkred;">
                Los campos marcados con (*) son obligatorios.
            </p>
            <div id="divFormulario" class="form-horizontal">
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Juzgado <span class="requerido">(*)</span></label>
                    <div class="col-xs-9" id="listaJuzgados">
                        <input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgado">
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Mes <span class="requerido">(*)</span></label>
                    <div class="col-xs-9" id="listaMeses">
                        <input type="hidden" class="form-control selecto2" id="cveMes" name="cveMes" placeholder="Mes">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">A&ntilde;o <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="anio" name="anio" placeholder="Año">
                    </div>
                </div>

                <br>
                <br>
                <div class="form-group">
                    <div class="alert alert-warning alert-dismissable" id="advertencia" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div class="alert alert-success alert-dismissable" id="correcto" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Correcto!</strong> Mensaje
                    </div>
                    <div class="alert alert-danger alert-dismissable" id="error" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Error!</strong> Mensaje
                    </div>
                    <div class="alert alert-info alert-dismissable" id="info" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Informaci&oacute;n!</strong> Mensaje
                    </div>
                </div>  
                <br>

                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary consulta" value="Consultar" onclick="consultarProgramacionsalas()">
                        <input type="submit" class="btn btn-primary limpia" value="Limpiar" onclick="clean()">
                        <input type="submit" class="btn btn-primary exporta" style="display: none;" value="Imprimir" onclick="imprimir('contenidoReporte')">
                        <input type="submit" class="btn btn-primary exporta" style="display: none;" value="Exportar a PDF" onclick="exportarReporte('exportarPDF', 'resultado')">
                        <input type="submit" class="btn btn-primary exporta" style="display: none;" value="Exportar a Excel" onclick="exportarReporte('exportarExcelProgramaciones', 'resultado')">
                    </div>
                </div>
            </div>                                    
            <form id="formProgramaciones" method="post">
                <div id="contenidoReporte" style="width: 100%; display: none;">
                    <br>
                    <div style="text-align: center;" id="encabezado"></div>
                    <br><br>
                    <div id="resultado"></div>

                </div>
                <textarea id="contenido" id="contenido" style="display: none;"></textarea>
            </form>
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary guardarTodo" style="display: none;" value="Guardar Todo">
                        <input type="submit" class="btn btn-primary borrarSeleccionados" style="display: none;" value="Eliminar Seleccionados">
                    </div>
                </div>
            </div>    
            <input type="hidden" id="datosImpresion">
            <input type="hidden" id="hiddenFechaHoy" value="">
            <input type="hidden" id="hiddenFechaHoraHoy" value="">
            <div id="ifr" style="display: none;" >
                <form action="../fachadas/sigejupe/reportes/exportarReportes.php" id="formIframe" method="post" target="my_frame">
                    <input type="hidden" name="contenido" id="contenidoIframe" value="" />
                    <input type="hidden" name="accion" id="accionIframe" value="" />
                    <input type="hidden" name="info" id="infoIframe" value="" />
                </form>
                <iframe name='my_frame' src='../fachadas/sigejupe/reportes/exportarReportes.php'></iframe>
            </div>
        </div>
    </div>
    <!--</div>-->
    <script type="text/javascript">
        var nombre = <?php echo '"' . $_SESSION['Nombre'] . '"'; ?>;
        consultarProgramacionsalas = function () {
            var cveMes = $("#cveMes").val();
            var anio = $("#anio").val();
            var cveJuzgado = $("#cveJuzgado").val();
            if (cveJuzgado == "") {
                $("#advertencia").html('<span>Seleccione un juzgado!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if (anio == "") {
                $("#advertencia").html('<span>Capture el a&ntilde;o de consulta!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if (cveMes == "") {
                $("#advertencia").html('<span>Seleccione un mes!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionsalas/ProgramacionsalasFacade.Class.php",
                    data: {
                        cveMes: cveMes,
                        anio: anio,
                        cveJuzgado: cveJuzgado,
                        accion: "consultarReporteProgramacionSalas"},
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                        $("#info").html('<span>Consultando Informaci&oacute;n, por favor espere</span>').show();
                    },
                    success: function (datos) {
                        try {
                            var nombreJuzgado = $("#cveJuzgado :selected").text();
                            var desMes = $("#cveMes :selected").text();
                            var desAnio = $("#anio").val();
                            var texto = ucFirstAllWords(nombreJuzgado) + ", " + ucFirstAllWords(desMes) + ", " + desAnio;

                            $("#encabezado").html("Horarios de desponibilidad de Salas, " + texto);
                            var result = eval("(" + datos + ")");
                            var html = "";
                            var arregloIdSala = new Array();
                            var arregloSala = new Array();
                            //console.log(result);
                            if (result.totalCount > 0) {
                                var fechaHoraInicio = "";
                                var fechaHoraTermino = "";
                                //alert(result.totalCount);
                                for (var n = 0; n < result.totalCount; n++) {
                                    fechaHoraInicio = result.data[n].FechaInicio.split(" ");
                                    console.log(fechaHoraInicio[1]);
                                    fechaHoraTermino = result.data[n].FechaFin.split(" ");

                                    if ($.inArray(result.data[n].IdSala, arregloIdSala) == -1) {
                                        arregloIdSala.push(result.data[n].IdSala);
                                    }
                                    if ($.inArray(result.data[n].Sala, arregloSala) == -1) {
                                        arregloSala[result.data[n].IdSala] = result.data[n].Sala;
                                    }
                                }
                                var c = 0;
                                //console.log(arregloIdSala.length);
                                //console.log(arregloSala);
                                html += "<table id='tablaReporte' align='center' class='table' style='border: solid 1px #000; width: 100%;' cellspacing='0' cellpadding='2'>";
                                html += "<thead>";
                                html += "<th style='border: solid 1px #000; width: 5%'><span style='color: #000;'>No</span></th>";
                                html += "<th style='border: solid 1px #000; width: 30%'><span style='color: #000;'>Condici&oacute;n</span></th>";
                                html += "<th style='border: solid 1px #000; width: 25%'><span style='color: #000;'>D&iacute;a</span></th>";
                                html += "<th style='border: solid 1px #000; width: 20%'><span style='color: #000;'>Fecha</span></th>";
                                html += "<th style='border: solid 1px #000; width: 20%'><span style='color: #000;'>Horario</span></th>";
                                html += "</thead>";
                                for (var s = 0; s < arregloIdSala.length; s++) {
                                    html += '<tr id="' + arregloIdSala[s] + '" style="background-color: #881518; color: #FFFFFF;"><td colspan="5" align="center">' + arregloSala[arregloIdSala[s]] + '</td></tr>';
                                    for (var i = 0; i < result.totalCount; i++) {
                                        if (result.data[i].IdSala == arregloIdSala[s]) {
                                            c += 1;
                                            fechaHoraInicio = result.data[i].FechaInicio.split(" ");
                                            fechaHoraTermino = result.data[i].FechaFin.split(" ");
                                            html += "<tr class='datosProgramacion' style='border: solid 1px #000;'>";
                                            html += "<td style='border: solid 1px #000;'>" + c + "</td>";
                                            html += "<td style='border: solid 1px #000;'>" + result.data[i].Condicion + "</td>";
                                            html += "<td style='border: solid 1px #000;'>" + result.data[i].Dia + "</td>";
                                            html += "<td style='border: solid 1px #000;'>" + formatoFecha(fechaHoraInicio[0]) + "</td>";
                                            html += "<td style='border: solid 1px #000;'>" + fechaHoraInicio[1] + "-" + fechaHoraTermino[1] + '</td>';
                                            html += "</tr>";
                                        }
                                    }
                                    c = 0;
                                }
                                html += "</table>";
                                $("#contenidoReporte").show();
                                $('#resultado').html(html);
                                $("#info").hide();
                                $(".exporta").show();
                            } else {
                                $(".exporta").hide();
                                $("#contenidoReporte").hide();
                                $("#resultado").html("");
                                $("#info").html("<pan>" + result.text + "</span>").fadeIn('slow').delay(4000).fadeOut('slow');
                            }
                        } catch (e) {
                            //alert("Ocurrio un error al consultar los datos: " + e);
                            $("#advertencia").html('<span>Ocurri&oacute; un error al consultar los datos: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            $("#resultado").html("");
                            $("#info").hide();
                            $(".limpia").show();
                            $(".consulta").show();
                            $(".exporta").hide();
                            $("#contenidoReporte").hide();
                        }
                        ToggleLoading(2);
                    },
                    error: function (objeto, quepaso, otroobj) {
                        //alert("Ocurrio un error al consultar los datos, favor de intentarlo mas tarde!");
                        $("#error").append('<span>Ocurri&oacute; un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        $("#listaProgramaciones").html("");
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $(".exporta").hide();
                        $("#contenidoReporte").hide();
                    }
                });
            }
        }

        imprimir = function (div) {
            var divContents = $("#" + div).html();
            fechaBaseDatos({datosImpresion: "fecha-hora"});
            divContents += "<br><br>Fecha y hora:  " + $("#datosImpresion").val();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>SIGEJUPE</title>');
            printWindow.document.write('</head><body><center><img  src="img/logoPj.png"></center> <br><center><label >Usuario:  ' + nombre + '</label></center><br><br>');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        };

        exportarReporte = function (accion, div) {

            var usuario = '<?php echo $_SESSION["nombre"]; ?>';
            var columnas = [];
            $.each($("#tablaReporte tr"), function () {
                $.each($(this).find('th'), function () {
                    columnas.push("1");
                });
            });
            $.each($("#tablaReporte td"), function () {

                $(this).attr("id", "lng");
            });
            $.each($("#tablaReporte th"), function () {
                $(this).attr("id", "lng");
            });
            var numPixeles = 0;
            if (columnas.length < 7) {
                numPixeles = (700 / columnas.length);
            } else if (columnas.length < 12) {
                numPixeles = (700 / columnas.length);
            } else {
                $.each($("#tablaReporte td"), function () {

                    if ($(this).html().length > 30) {
                        $(this).attr("id", "os");
                    } else {
                        $(this).removeAttr("id");
                    }
                });
                numPixeles = (700 / columnas.length);
            }

            var contenido = $("#" + div).html();
            contenido = contenido.replace('width: 100%', 'width: 95%');
            var nombreArchivo = "REPORTE_DISPONIBILIDAD_SALAS";
            var tituloReporte = $("#encabezado").text();
            var subtotal = "";
            var subtitulo = "";
            if (accion == "exportarExcelProgramaciones") {
                subtitulo = $("#encabezado").text();
            } else {
                subtitulo = "";
            }

            //contenido = contenido.replace(/width/g, '  ');
            contenido = contenido.replace(/Buscar:/g, '');
            contenido = contenido.replace(/id="lng"/g, '');
            //contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px; text-align:center; border: solid 1px;"');
            contenido = contenido.replace(/id="del"/g, 'style="width:100px; text-align:center;"');
            contenido = contenido.replace(/id="os"/g, 'style="width:100px;text-align:center;"');
            contenido = contenido.replace(/<center>/g, '');
            contenido = contenido.replace(/<\/center>/g, '');
            contenido = contenido.replace(/<input (.*?) type="search">/g, '');
            contenido = contenido.replace(/<br id="bo" (.*?) br>/g, '');
            contenido = contenido.replace(/onclick="(.*?)"/g, '');
            fechaBaseDatos({hiddenFechaHoraHoy: "fecha-hora"});
            $("#contenidoIframe").val(contenido);
            $("#accionIframe").val(accion);
            $("#infoIframe").val(usuario + "&@" + tituloReporte + "&@" + nombreArchivo + "&@" + subtotal + "&@" + subtitulo + "&@" + $("#hiddenFechaHoraHoy").val());
            $("#divAlertInfo").html("Generando Archivo");
            $("#divAlertInfo").show("slide");
            setTimeAlert("divAlertInfo");
            $("#formIframe").submit();

        };

        exportar = function () {
            $("#contenido").val($("#contenidoReporte").html());
            var contenido = $("#contenido").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/programacionsalas/ProgramacionsalasFacade.Class.php",
                data: {
                    contenido: contenido,
                    accion: "exportar"},
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                    $("#info").html('<span>Generando el reporte, espere un momento</span>').show();
                },
                success: function (datos) {
                    try {
                        $("#info").hide();
                        $("#correcto").html('<span>Reporte generado correctamente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        window.open('../fachadas/sigejupe/programacionsalas/' + datos);
                    } catch (e) {
                        //alert("Ocurrio un error al consultar los datos: " + e);
                        $("#advertencia").html('<span>Ocurri&oacute; un error al consultar los datos: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                    }
                    ToggleLoading(2);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Ocurrio un error al consultar los datos, favor de intentarlo mas tarde!");
                    $("#error").append('<span>Ocurri&oacute; un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                    $("#info").hide();
                    $(".limpia").show();
                    $(".consulta").show();
                }
            });
        }

        changeDivForm = function (opc) {
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
            } else if (opc === 2) {
                consultaProgramaciones();
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
            }
        };

        clean = function () {
            //$.clearInput = function () {                                    
            $('#divFormulario').find('input[type=text], input[type=password], input[type=number], input[type=email], textarea').val('');
            $('#divFormulario').find('select').val('');
            var fecha = new Date();
            $("#divFormulario").find('input[name="anio"]').val(fecha.getFullYear());
            $("#listaProgramaciones").html("");
            $(".exporta").hide();
            $("#encabezado").html("");
            $("#contenidoReporte").empty();
            //};
        };

        function listaJuzgados() {
            var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {accion: 'consultar'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control text-uppercase" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveJuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                            }
                            html += "</select>";
                        } else {
                            html = "Sin resultados";
                        }
                        $('#listaJuzgados').html(html);

                    } catch (e) {
                        alert(e);
                    }
                    ToggleLoading(2);
                }
            }).error(function () {
                alert('error al obtener los juzgados');
            });
        }

        function listaMeses() {
            var ruta_meses = "../fachadas/sigejupe/meses/MesesFacade.Class.php";
            $.ajax(ruta_meses, {
                type: 'POST',
                data: {accion: 'consultar'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<select name="cveMes" id="cveMes" class="form-control text-uppercase" title="Mes" data-toggle="tooltip" tabIndex="tabIndex">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveMes + "'>" + data.data[index].desMes + "</option>";
                            }
                            html += "</select>";
                        } else {
                            html = "Sin resultados";
                        }
                        $('#listaMeses').html(html);
                    } catch (e) {
                        alert(e);
                    }
                    ToggleLoading(1);
                }
            }).error(function () {
                alert('error al obtener los meses');
            });
        }

        formatoFecha = function (campo) {
            var fecha = campo.split(' ');
            if (fecha.length > 1) {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0] + " " + fecha[1];
            } else {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0];
            }
        }

        /*
         * Función que permite verificar si se capturan datos válidos en el campo txtAnio
         */
        validarAnio = function () {
            var anio = $("#anio").val();
            //alert(anio.length);
            //console.log(anio);
            if (isNaN(parseInt(anio))) {
                return false;
            } else if (anio == 0) {
                return false;
            } else if (anio == "") {
                return false;
            } else if (anio.length < 4) {
                return false;
            } else if (parseInt(anio) < 2000) {
                return false;
            } else {
                return true;
            }

        }

        function ucFirstAllWords(str) {
            str = str.toLowerCase();
            var pieces = str.split(" ");
            for (var i = 0; i < pieces.length; i++) {
                var j = pieces[i].charAt(0).toUpperCase();
                pieces[i] = j + pieces[i].substr(1);
            }
            return pieces.join(" ");
        }

        $(function () {
            listaMeses();
            listaJuzgados();
            var fecha = new Date();
            $("#anio").val(fecha.getFullYear());
            //$('#tblResultados').DataTable();
            $("#anio").validaCampo('0123456789');

            var permisos = obtenerPermisosFormulario("REPORTES", "DISPONIBILIDAD DE SALAS");
            //console.log(permisos);
            if (permisos.Create == 'N') {
                $('.consulta').prop('disabled', true);
            }

        });

    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>