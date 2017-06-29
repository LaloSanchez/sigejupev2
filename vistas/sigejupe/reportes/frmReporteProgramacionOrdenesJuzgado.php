<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    ?>
    <link href="../vistas/css/generalStyles.css" rel="stylesheet" />
    <style>
        .fc-event-title{
            font-size: 9px !important;
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
        .mayuscula{  
            text-transform: uppercase;  
        } 
        .requerido {
            color: darkred;
        }
    </style>
    <!--<div class="page-content" id="areadetrabajo">-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Reporte Disponibilidad de Jueces para &Oacute;rdenes de Aprehensi&oacute;n por Juzgado
            </h5>
        </div>
        <div class="panel-body">
            <p class="col-lg-12" style="color:darkred;">
                Los campos marcados con (*) son obligatorios.
            </p>
            <div id="divFormulario" class="form-horizontal">
                <form method="post" id="formProgramacionJuzgadores">
                    <input type="hidden" id="idProgramacionOrden" class="form-control" name="idProgramacionOrden">
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">Grupos &Oacute;rdenes <span class="requerido">(*)</span></label>
                        <div class="col-xs-9" id="listaGrupoCateos">
                            <input type="hidden" id="cveGrupoOrden" class="form-control selecto2" name="cveGrupoOrden" placeholder="Grupo Orden">
                        </div>                                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">Juzgado</label>
                        <div class="col-xs-9" id="listaJuzgados">
                            <select id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgado">
                                <option value="">Selecciona una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">Juzgador</label>
                        <div class="col-xs-9" id="listaJuzgadores">
                            <select  class="form-control selecto2" id="cveJuzgador" name="cveJuzgador" placeholder="Juzgador">
                                <option value="">Selecciona una opci&oacute;n</option>
                            </select>
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">Mostrar calendario</label>
                        <div class="col-xs-9">
                            <input type="checkbox" id="mostrarCalendario" >
                        </div>
                    </div>-->
                    <div class="form-group programacion" style="display: block;">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 18% !important;">Fecha Inicio <span class="requerido">(*)</span></label>
                        <div class="col-xs-5 col-sm-3 col-md-2">
                            <input type="text" class="form-control" style="width: 184px !important;" id="fechaInicial" name="fechaInicio" placeholder="Fecha Inicial">&nbsp;&nbsp;
                        </div>
                        <div class="col-xs-2 col-sm-1 col-md-1" style="width: 15% !important;">
                            <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 100% !important;">Fecha Fin <span class="requerido">(*)</span></label>
                        </div>
                        <div class="col-xs-5 col-sm-3 col-md-2">
                            <input type="text" class="form-control" style="width: 184px !important;" id="fechaFinal" name="fechaFinal" placeholder="Fecha Final">
                        </div>
                    </div>
                    <!--<div class="form-group programacion" style="display: block;">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 18% !important;">Hora Inicio</label>
                        <div class="col-xs-5 col-sm-3 col-md-2">
                            <input type="text" class="form-control" style="width: 184px !important;" id="horaInicial" name="horaInicial" placeholder="Hora Inicial">&nbsp;&nbsp;
                        </div>
                        <div class="col-xs-2 col-sm-1 col-md-1" style="width: 15% !important;">
                            <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 100% !important;">Hora Fin</label>
                        </div>
                        <div class="col-xs-5 col-sm-3 col-md-2">
                            <input type="text" class="form-control" style="width: 184px !important;" id="horaFinal" name="horaFinal" placeholder="Hora Final">
                        </div>
                    </div>-->
                </form>
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
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary consulta" value="Consultar" onclick="consultarProgramacionOrdenes()">
                        <input type="submit" class="btn btn-primary limpia" value="Limpiar" onclick="clean()">
                        <input type="submit" class="btn btn-primary exportar" style="display: none;" value="Imprimir" onclick="imprimir('reporte')">
                        <input type="submit" class="btn btn-primary exportar" style="display: none;" value="Exportar a PDF" onclick="exportarReporte('exportarPDF', 'contenidoReporte')">
                        <input type="submit" class="btn btn-primary exportar" style="display: none;" value="Exportar a Excel" onclick="exportarReporte('exportarExcelProgramaciones', 'contenidoReporte')">
                    </div>
                </div>
                <div id="reporte" style="width: 100%; display: none;">
                    <br>
                    <div style="text-align: center;" id="encabezado"></div>
                    <div id="contenidoReporte"></div>
                </div>
                <textarea id="contenido" id="contenido" style="display: none;"></textarea>
            </div>                                    
            <br>
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
        consultarProgramacionOrdenes = function () {
            var cveGrupoOrden = $("#cveGrupoOrden").val();
            var cveGrupoOrdenJuzgado = $("#cveJuzgado option:selected").data("grupoordenjuzgado");
            var cveJuzgado = $("#cveJuzgado").val();
            var idJuzgador = $("#idJuzgador").val();
            var fechaInicio = $("#fechaInicial").val();
            var fechaFin = $("#fechaFinal").val();
            if (cveGrupoOrden == "") {
                $("#advertencia").html('<span>Seleccione un grupo del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            }
            /*else if(cveJuzgado == ""){
             $("#advertencia").html('<span>Seleccione un juzgado!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
             }*/
            else if (fechaInicio == "") {
                $("#advertencia").html('<span>Seleccione la fecha de inicio para consultar los datos!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if (fechaFin == "") {
                $("#advertencia").html('<span>Seleccione la fecha final para consultar los datos!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if ($.datepicker.parseDate('dd/mm/yy', fechaInicio) > $.datepicker.parseDate('dd/mm/yy', fechaFin)) {
                $("#advertencia").html('<span>La fecha inicial no puede ser mayor a la fecha final para consultar los datos!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionordenes/ProgramacionordenesFacade.Class.php",
                    data: {
                        cveGrupoOrden: cveGrupoOrden,
                        cveGrupoOrdenJuzgado: cveGrupoOrdenJuzgado,
                        cveJuzgado: cveJuzgado,
                        idJuzgador: idJuzgador,
                        fechaInicio: fechaInicio,
                        fechaFin: fechaFin,
                        activo: "S",
                        accion: "consultarProgramacionOrdenes",
                        porDistrito: "S"},
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                        $("#info").html('<span>Consultando Informaci&oacute;n, por favor espere</span>').show();
                        $('#contenidoReporte').html("");
                    },
                    success: function (datos) {
                        try {
                            var nombreJuzgado = $("#cveGrupoOrden :selected").text();
                            var texto = ucFirstAllWords(nombreJuzgado) + " de " + fechaInicio + " a " + fechaFin;
                            $("#encabezado").html("Horarios de disponibilidad de Jueces &oacute;rdenes de aprehensi&oacute;n, " + texto);
                            var result = eval("(" + datos + ")");
                            var html = "";
                            var arregloIdJuzgador = new Array();
                            var arregloJuzgador = new Array();
                            if (result.totalCount > 0) {
                                html += "<table align='center' id='tablaReporte' class='table' style='border: solid 1px #000; width: 100%;' cellspacing='0' cellpadding='2'>";
                                html += "<thead>";
                                html += "<th style='border: solid 1px #000; width: 5%; background: #881518;'><div style='color: #FFF;'>No</div></th>";
                                html += "<th style='border: solid 1px #000; width: 25%; background: #881518;'><div style='color: #FFF;'>D&iacute;a</dvi></th>";
                                html += "<th style='border: solid 1px #000; width: 30%; background: #881518;'><div style='color: #FFF;'>Horario</div></th>";
                                html += "<th style='border: solid 1px #000; width: 30%; background: #881518;'><div style='color: #FFF;'>Juez</div></th>";
                                html += "</thead>";
                                var c = 0;
                                var fechaHoraInicio = "";
                                var fechaHoraTermino = "";
                                for (var n = 0; n < result.totalCount; n++) {
                                    c += 1;
                                    fechaHoraInicio = result.data[n].FechaInicio.split(" ");
                                    fechaHoraTermino = result.data[n].FechaFin.split(" ");
                                    html += "<tr class='datosProgramacion' style='border: solid 1px #000;'>";
                                    html += "<td style='border: solid 1px #000;'>" + c + "</td>";
                                    html += "<td style='border: solid 1px #000;'>" + result.data[n].Dia + "</td>";
                                    html += "<td style='border: solid 1px #000;'><strong>" + formatoFecha(fechaHoraInicio[0]) + "</strong>&nbsp;&nbsp;&nbsp;" + fechaHoraInicio[1] + "&nbsp;&nbsp;-&nbsp;&nbsp;<strong>" + formatoFecha(fechaHoraTermino[0]) + "</strong>&nbsp;&nbsp;&nbsp;" + fechaHoraTermino[1] + "</td>";
                                    html += "<td style='border: solid 1px #000;'>" + result.data[n].Nombre + '</td>';
                                    html += "</tr>";
                                }

                                html += '</table>';
                                $("#reporte").show();
                                $('#contenidoReporte').html(html);
                                $("#info").hide();
                                $(".programacion").show();
                                $(".exportar").show();
                                ToggleLoading(2);

                            } else {
                                $("#reporte").hide();
                                $(".exportar").hide();
                                $("#info").html('<span>No se encontraron datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                ToggleLoading(2);
                            }
                        } catch (e) {
                            $("#advertencia").html('<span>Ocurri&oacute; un error al consultar los datos: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            $("#info").hide();
                            $(".limpia").show();
                            $(".consulta").show();
                            $("#reporte").hide();
                            $(".exportar").hide();
                            ToggleLoading(2);
                        }

                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#error").html('<span>Ocurri&oacute; un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $("#reporte").hide();
                        $(".exportar").hide();
                        ToggleLoading(2);
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
            contenido = contenido.replace('width="100%"', 'width="90%"');
            var nombreArchivo = "REPORTE_DISPONIBILIDAD_ORDENES_JUZGADO";
            var tituloReporte = $("#encabezado").text();
            var subtotal = "";
            var subtitulo = "";
            if (accion == "exportarExcelProgramaciones") {
                subtitulo = $("#encabezado").text();
            } else {
                subtitulo = "";
            }

            contenido = contenido.replace(/width/g, '  ');
            contenido = contenido.replace(/Buscar:/g, '');
            contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px; text-align:center; border: solid 1px;"');
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
            $("#contenido").val($("#reporte").html());
            var contenido = $("#contenido").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/programacionordenes/ProgramacionordenesFacade.Class.php",
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
                        window.open('../fachadas/sigejupe/programacionordenes/' + datos);
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

        function consultarJuzgadores() {
            var cveJuzgado = $("#cveJuzgado").val();
            var cveGrupoOrden = $("#cveGrupoOrden").val();
            if (cveGrupoOrden != "") {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionordenes/ProgramacionordenesFacade.Class.php",
                    data: {
                        cveGrupoOrden: cveGrupoOrden,
                        cveJuzgado: cveJuzgado,
                        activo: 'S',
                        accion: "listaJuzgadores",
                        porDistrito: "S"},
                    async: false,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                    },
                    success: function (datos) {
                        try {
                            var result = eval("(" + datos + ")");
                            var html = "";
                            if (result.totalCount > 0) {
                                html += '<select name="idJuzgador" id="idJuzgador" class="form-control">';
                                html += '<option value="">Selecciona una opci&oacute;n</option>';
                                for (var n = 0; n < result.totalCount; n++) {
                                    html += '<option value="' + result.data[n].idJuzgador + '">' + result.data[n].nombre + ' ' + result.data[n].paterno + ' ' + result.data[n].materno + '</option>';
                                }
                                html += '</select>';
                                $("#listaJuzgadores").html(html);
                                ToggleLoading(2);
                            } else {
                                html += '<select name="idJuzgador" id="idJuzgador" class="form-control">';
                                html += '<option value="">Selecciona una opci&oacute;n</option>';
                                html += '</select>';
                                $("#listaJuzgadores").html(html);
                                ToggleLoading(2);
                            }

                        } catch (e) {
                            ToggleLoading(2);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                    }
                });
            }
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
            $('#divFormulario').find('input[type=text], input[type=password], input[type=number], input[type=email], textarea').val('');
            $('#divFormulario').find('select').val('');
            var fecha = new Date();
            $("#contenidoReporte").html("");
            //$(".programacion").hide();
            $("#idProgramacionOrden").val("");
            $(".guarda").hide();
            $(".borra").hide();
    //        $("#horaInicial").val("7:00");
    //        $("#horaFinal").val("7:00");
            $("#contenidoReporte").empty();
            $("#reporte").hide();
            $(".exportar").hide();
        };

        function listaGrupoOrdenes() {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/gruposordenes/GruposordenesFacade.Class.php",
                data: {
                    activo: 'S',
                    accion: "consultarPorDistrito"},
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    try {
                        var result = eval("(" + datos + ")");
                        var html = "";
                        if (result.totalCount > 0) {
                            html += '<select name="cveGrupoOrden" id="cveGrupoOrden" class="form-control" onChange="listaJuzgados()">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var n = 0; n < result.totalCount; n++) {
                                html += '<option value="' + result.data[n].cveGrupoOrden + '">' + result.data[n].desGrupoOrden + '</option>';
                            }
                            html += '</select>';
                            $("#listaGrupoCateos").html(html);
                            ToggleLoading(2);
                        } else {
                            html = "";
                            $("#listaGrupoCateos").html(html);
                            ToggleLoading(2);
                        }

                    } catch (e) {
                        ToggleLoading(2);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#info").hide();
                    $(".limpia").show();
                    $(".consulta").show();
                }
            });
        }

        function listaJuzgados() {
            var ruta_juzgados = "../fachadas/sigejupe/gruposordenesjuzgados/GruposordenesjuzgadosFacade.Class.php";
            var cveGrupoOrden = $("#cveGrupoOrden").val();
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {
                    cveGrupoOrden: cveGrupoOrden,
                    activo: "S",
                    accion: 'consultarJuzgadosDistrito'
                },
                dataType: 'json',
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex" onChange="consultarJuzgadores()">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveJuzgado + "' data-grupoOrdenJuzgado='" + data.data[index].cveGrupoOrdenJuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                            }
                            html += "</select>";
                            consultarJuzgadores();
                        } else {
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex" onChange="consultarJuzgadores()">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            html += "</select>";

                            var cmbJuzgador = "";
                            cmbJuzgador += '<select name="idJuzgador" id="idJuzgador" class="form-control">';
                            cmbJuzgador += '<option value="">Selecciona una opci&oacute;n</option>';
                            cmbJuzgador += '</select>';
                            $("#listaJuzgadores").html(cmbJuzgador);
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

        function validar() {
            var horaInicio = $("#horaInicial").val().split(":");
            var horaFin = $("#horaFinal").val().split(":");
            var horaInicial = parseInt(horaInicio[0], 10);
            var minutoInicial = parseInt(horaInicio[1], 10);
            var HoraFinal = parseInt(horaFin[0], 10);
            var minutoFinal = parseInt(horaFin[1], 10);

            if ($("#cveGrupoOrden").val() == "") {
                $("#advertencia").html('<span>Seleccione un grupo del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            }
            if ($("#cveJuzgado").val() == "") {
                $("#advertencia").html('<span>Seleccione un juzgado del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#idJuzgador").val() == "") {
                $("#advertencia").html('<span>Seleccione un juzgador del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#fechaInicial").val() == "") {
                $("#advertencia").html('<span>Seleccione la fecha inicial de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#fechaFinal").val() == "") {
                $("#advertencia").html('<span>Seleccione la fecha final de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#horaInicial").val() == "") {
                $("#advertencia").html('<span>Seleccione la hora inicial de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#horaFinal").val() == "") {
                $("#advertencia").html('<span>Seleccione la hora final de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ((horaInicial == HoraFinal) && (minutoInicial == minutoFinal)) {
                $("#advertencia").html('<span>La hora inicial de programaci&oacute;n no puede ser igual a la hora final, favor de verificar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            }
            /*else if( (horaInicial > HoraFinal) || ( horaInicial == HoraFinal && minutoInicial > minutoFinal ) ){
             $("#advertencia").html('<span>La hora inicial de programaci&oacute;n no puede ser mayor a la hora final, favor de verificar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
             return false;
             }*/
            else {
                return true;
            }
        }

        function validarEliminacion() {
            if ($("#cveGrupoOrden").val() == "") {
                $("#advertencia").html('<span>Seleccione un grupo del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            }
            if ($("#cveJuzgado").val() == "") {
                $("#advertencia").html('<span>Seleccione un juzgado del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#idJuzgador").val() == "") {
                $("#advertencia").html('<span>Seleccione un juzgador del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#fechaInicial").val() == "") {
                $("#advertencia").html('<span>Seleccione la fecha inicial de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#fechaFinal").val() == "") {
                $("#advertencia").html('<span>Seleccione la fecha final de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else {
                return true;
            }
        }

        $(function () {

            listaGrupoOrdenes();
            //listaJuzgados();

            var fecha = new Date();
            $("#anio").val(fecha.getFullYear());
            $("#fechaInicial").datepicker({
                format: "dd/mm/yyyy"
            });
            $("#fechaFinal").datepicker({
                format: "dd/mm/yyyy"
            });

            $('#fechaFinal').datepicker()
                    .on('changeDate', function (e) {
    //            if($(this).val() != ""){
    //                $(".guarda").show();
    //                $(".borra").show();
    //            } else {
    //                $(".guarda").hide();
    //                $(".borra").hide();
    //            }
                        $('#fechaFinal').datepicker('hide');
                    });

    //        $("#horaInicial").timepicker({
    //            defaultTime: '7:00:00',
    //            showMeridian: false,
    //            minuteStep: 1,
    //            showSeconds: true,
    //            secondStep:1
    //        });
    //        $("#horaFinal").timepicker({
    //            defaultTime: '7:00:00',
    //            showMeridian: false,
    //            minuteStep: 1,
    //            showSeconds: true,
    //            secondStep:1
    //        });

            $("#fechaInicial").datepicker().on('changeDate', function (e) {
                $("#fechaInicial").datepicker('hide');
            });

            var permisos = obtenerPermisosFormulario("REPORTES", "DISPONIBILIDAD DE JUECES O. DE APREHENSION JUZ");
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