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
        .requerido {
            color: darkred;
        }
    </style>
    <!--<div class="page-content" id="areadetrabajo">-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Modificaci&oacute;n de Disponibilidad de Jueces                           
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <p class="col-lg-12" style="color:darkred;">
                    Los campos marcados con (*) son obligatorios.
                </p>
                <form method="post" id="formProgramacionJuzgadores">
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">Juzgado <span class="requerido">(*)</span></label>
                        <div class="col-xs-9" id="listaJuzgados">
                            <input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgado">
                        </div>                                
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">Mes <span class="requerido">(*)</span></label>
                        <div class="col-xs-9" id="listaMeses">
                            <input type="hidden" class="form-control selecto2" id="cveMes" name="cveMes" placeholder="Mes">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">A&ntilde;o <span class="requerido">(*)</span></label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="anio" name="anio" placeholder="Año">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">Mostrar calendario</label>
                        <div class="col-xs-9">
                            <input type="checkbox" id="mostrarCalendario" checked="checked">
                        </div>
                    </div>
                    <div class="form-group programacion" style="display: none;">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">Juzgador <span class="requerido">(*)</span></label>
                        <div class="col-xs-5 col-sm-3 col-md-2" id="listaJuzgadores" style="width: 18% !important; margin-left: 5px !important;">
                            <input type="hidden" class="form-control selecto2" id="cveJuzgador" name="cveJuzgador" placeholder="Juzgador">
                        </div>
                        <div class="col-xs-2 col-sm-1 col-md-1" style="width: 14% !important;">
                            <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 100% !important;">Rol <span class="requerido">(*)</span></label>
                        </div>
                        <div class="col-xs-5 col-sm-3 col-md-2" id="listaRolJuzgadores">
                            <input type="hidden" class="form-control selecto2" id="cveRolJuzgador" name="cveRolJuzgador" placeholder="Rol Juzgador">
                        </div>
                    </div>
                    <div class="form-group programacion" style="display: none;">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 18% !important;">Fecha Inicio</label>
                        <div class="col-xs-5 col-sm-3 col-md-2">
                            <input type="text" class="form-control" style="width: 184px !important;" id="fechaInicial" name="fechaInicial" placeholder="Fecha Inicial">&nbsp;&nbsp;
                        </div>
                        <div class="col-xs-2 col-sm-1 col-md-1" style="width: 15% !important;">
                            <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 100% !important;">Fecha Fin</label>
                        </div>
                        <div class="col-xs-5 col-sm-3 col-md-2">
                            <input type="text" class="form-control" style="width: 184px !important;" id="fechaFinal" name="fechaFinal" placeholder="Fecha Final">
                        </div>
                    </div>
                    <div class="form-group programacion" style="display: none;">
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
                    </div>
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
                        <input type="submit" class="btn btn-primary consulta" value="Consultar" onclick="consultarProgramacionjuzgadores()">
                        <input type="submit" class="btn btn-primary limpia" value="Limpiar" onclick="clean()">
                        <input type="submit" class="btn btn-primary guarda" style="display: none;" value="Guardar" onclick="guardar()">
                        <input type="submit" class="btn btn-primary borra" style="display: none;" value="Eliminar" onclick="borrar()">
                    </div>
                </div>
                <div id="contenidoReporte"></div>
            </div>                                    
            <br>   
        </div>
    </div>
    <!--</div>-->
    <script type="text/javascript">

        consultarProgramacionjuzgadores = function () {
            var cveMes = $("#cveMes").val();
            var anio = $("#anio").val();
            var cveJuzgado = $("#cveJuzgado").val();
            var idJuzgador = $("#idJuzgador").val();
            var rol = $("#cveRolJuzgador").val();
            var fechaInicio = $("#fechaInicial").val();
            var fechaFin = $("#fechaFinal").val();
            if (cveJuzgado == "") {
                $("#advertencia").html('<span>Seleccione un juzgado!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if (anio == "") {
                $("#advertencia").html('<span>Capture el a&ntilde;o de consulta!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if (cveMes == "") {
                $("#advertencia").html('<span>Seleccione un mes!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                    data: {
                        cveMes: cveMes,
                        anio: anio,
                        cveJuzgado: cveJuzgado,
                        idJuzgador: idJuzgador,
                        cveRol: rol,
                        fechaInicio: fechaInicio,
                        fechaFin: fechaFin,
                        accion: "consultarProgramacionJuzgadores"},
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                        $("#info").html('<span>Consultando Informaci&oacute;n, por favor espere</span>').show();
                        $('#contenidoReporte').html("");
                    },
                    success: function (datos) {
                        try {
                            var nombreJuzgado = $("#cveJuzgado :selected").text();
                            var desMes = $("#cveMes :selected").text();
                            var desAnio = $("#anio").val();
                            var texto = ucFirstAllWords(nombreJuzgado) + ", " + ucFirstAllWords(desMes) + ", " + desAnio;
                            var result = eval("(" + datos + ")");
                            var html = "";
                            var arregloIdJuzgador = new Array();
                            var arregloJuzgador = new Array();
                            if (result.totalCount > 0) {
                                if ($("#mostrarCalendario").is(":checked")) {
                                    var events = [];
                                    for (var n = 0; n < result.totalCount; n++) {
                                        var fechaHoraInicio = result.data[n].FechaInicio.split(" ");
                                        var fechaHoraFin = result.data[n].FechaFin.split(" ");
                                        events.push({
                                            title: result.data[n].Nombre + " - " + result.data[n].Rol + " " + fechaHoraInicio[1] + "-" + fechaHoraFin[1],
                                            start: result.data[n].FechaInicio,
                                            end: result.data[n].FechaFin,
                                            url: result.data[n].idProgramacionJuzgador,
                                            color: 'green'
                                        });
                                    }
                                    var calendar = $("#contenidoReporte").fullCalendar({
                                        editable: false,
                                        year: anio,
                                        month: (cveMes - 1),
                                        header: {
                                            center: 'title',
                                            left: '',
                                            right: ''
                                        },
                                        firstDay: 1,
                                        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                                        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                                        dayNames: ['Domingo', 'Lunes', 'Martes', 'Mi�rcoles', 'Jueves', 'Viernes', 'Sabado'],
                                        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                                        buttonText: {
                                            prev: '&nbsp;&#9668;&nbsp;',
                                            next: '&nbsp;&#9658;&nbsp;',
                                            prevYear: '&nbsp;&lt;&lt;&nbsp;',
                                            nextYear: '&nbsp;&gt;&gt;&nbsp;',
                                            today: 'hoy',
                                            month: 'mes',
                                            week: 'semana',
                                            day: 'dia'
                                        },
                                        selectable: true,
                                        selectHelper: true,
                                        events: events,
                                        loading: function (bool) {
                                            $('#info').toggle(bool);
                                        },
                                        eventRender: function (event, el) {
                                            el.find('.fc-title').after(
                                                    $('<div class="tzo" style="padding: 1px 0 1px 1px !important;"/>').text(event.Nombre)
                                                    );
                                            el.find('.fc-event-title').css('font-size', '9px !important');
                                        },
                                        eventClick: function (event) {
                                            if (event) {
                                                seleccionarProgramacionJuzgador(event.url);
                                                return false;
                                            }
                                        },
                                        allDay: false
                                    });
                                    $("#info").hide();
                                    $(".programacion").show();
                                } else {
                                    html += '<table class="table">';
                                    html += '<thead>';
                                    html += '<th>#</th>';
                                    html += '<th>ROL</th>';
                                    html += '<th>D&Iacute;A</th>';
                                    html += '<th>FECHA</th>';
                                    html += '<th>HORARIO</th>';
                                    html += '</thead>';
                                    var fechaHoraInicio = "";
                                    var fechaHoraTermino = "";
                                    for (var n = 0; n < result.totalCount; n++) {
                                        fechaHoraInicio = result.data[n].FechaInicio.split(" ");
                                        fechaHoraTermino = result.data[n].FechaFin.split(" ");

                                        if ($.inArray(result.data[n].IdJuzgador, arregloIdJuzgador) == -1) {
                                            arregloIdJuzgador.push(result.data[n].IdJuzgador);
                                        }
                                        if ($.inArray(result.data[n].Nombre, arregloJuzgador) == -1) {
                                            arregloJuzgador[result.data[n].IdJuzgador] = result.data[n].Nombre;
                                        }
                                    }
                                    var c = 0;
                                    for (var s = 0; s < arregloIdJuzgador.length; s++) {
                                        html += '<tr id="' + arregloIdJuzgador[s] + '" style="background-color: #881518; color: #FFFFFF;"><td colspan="5" align="center">' + arregloJuzgador[arregloIdJuzgador[s]] + '</td></tr>';
                                        for (var i = 0; i < result.totalCount; i++) {
                                            if (result.data[i].IdJuzgador == arregloIdJuzgador[s]) {
                                                c += 1;
                                                fechaHoraInicio = result.data[i].FechaInicio.split(" ");
                                                fechaHoraTermino = result.data[i].FechaFin.split(" ");
                                                html += "<tr class='datosProgramacion' style='border: solid 1px #000;' onClick='seleccionarProgramacionJuzgador(" + result.data[i].idProgramacionJuzgador + ")'>";
                                                html += "<td style='border: solid 1px #000;'>" + c + "</td>";
                                                html += "<td style='border: solid 1px #000;'>" + result.data[i].Rol + "</td>";
                                                html += "<td style='border: solid 1px #000;'>" + result.data[i].Dia + "</td>";
                                                html += "<td style='border: solid 1px #000;'>" + formatoFecha(fechaHoraInicio[0]) + "</td>";
                                                html += "<td style='border: solid 1px #000;'>" + fechaHoraInicio[1] + "-" + fechaHoraTermino[1] + '</td>';
                                                html += "</tr>";
                                            }
                                        }
                                        c = 0;
                                    }
                                    html += '</table>';
                                    $('#contenidoReporte').html(html);
                                    $("#info").hide();
                                    $(".programacion").show();
                                }
                                ToggleLoading(2);

                            } else {
                                $("#info").html('<span>No se encontraron datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                ToggleLoading(2);
                                $(".programacion").show();
                            }
                        } catch (e) {
                            $("#advertencia").html('<span>Ocurri&oacute; un error al consultar los datos: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            $("#info").hide();
                            $(".limpia").show();
                            $(".consulta").show();
                            ToggleLoading(2);
                        }

                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#error").html('<span>Ocurri&oacute; un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        ToggleLoading(2);
                    }
                });
            }
        }

        function seleccionarProgramacionJuzgador(obj) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                data: {idProgramacionJuzgador: obj, accion: 'seleccionar'},
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    try {
                        if (datos.totalCount > 0) {
                            var inicio = datos.data[0].fechaInicio.split(" ");
                            var fin = datos.data[0].fechaFinal.split(" ");
                            var horaInicio = inicio[1].split(":");
                            var horaFin = fin[1].split(":");
                            var horaInicial = parseInt(horaInicio[0]) + ":" + horaInicio[1];
                            var horaFinal = parseInt(horaFin[0]) + ":" + horaFin[1];
                            $("#idJuzgador").val(datos.data[0].idJuzgador);
                            $("#fechaInicial").val(formatoFecha(inicio[0]));
                            $("#fechaFinal").val(formatoFecha(fin[0]));
                            $("#horaInicial").val(horaInicial);
                            $("#horaFinal").val(horaFinal);
                            $("#cveRolJuzgador").val(datos.data[0].cveRolJuzgador);

                            $(".guarda").show();
                            $(".borra").show();
                            $(".limpia").show();
                            $(".consulta").show();
                            ToggleLoading(2);
                            $("#info").hide();
                        } else {
                            $("#info").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                            ToggleLoading(2);
                            $(".limpia").show();
                            $(".consulta").show();
                            $(".guarda").show();
                            $(".borra").show();
                        }
                    } catch (e) {
                        $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                        ToggleLoading(2);
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $(".guarda").show();
                        $(".borra").show();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html('<span>Ocurri&oacute; un error al consultar los datos, favor de consultar con el administrador</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                    ToggleLoading(2);
                    $("#info").hide();
                    $(".limpia").show();
                    $(".consulta").show();
                    $(".guarda").hide();
                    $(".borra").hide();
                }
            });
        }

        function guardar() {
            if (validar()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                    data: $("#formProgramacionJuzgadores").serialize() + '&accion=guardarTodo',
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                        $("#info").html('<span>Guardando la informaci&oacute;n, espere un momento</span>').fadeIn('slow');
                        $(".guarda").hide();
                        $(".borra").hide();
                        $(".limpia").hide();
                        $(".consulta").hide();
                    },
                    success: function (datos) {
                        try {
                            if (datos.totalCount > 0) {
                                $("#correcto").html('<span>Datos guardados correctamente</span>').fadeIn("slow").delay(5000).fadeOut('slow');
                                $("#idJuzgador").val("");
                                $("#fechaInicial").val("");
                                $("#fechaFinal").val("");
                                $("#horaInicial").val("8:00");
                                $("#horaFinal").val("9:00");
                                $("#cveRolJuzgador").val("");
                                $(".consulta").trigger("click");
                                $(".guarda").show();
                                $(".borra").show();
                                $(".limpia").show();
                                $(".consulta").show();
                                ToggleLoading(2);
                                $("#info").hide();
                            } else {
                                $("#info").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                                ToggleLoading(2);
                                $(".limpia").show();
                                $(".consulta").show();
                                $(".guarda").show();
                                $(".borra").show();
                            }
                        } catch (e) {
                            $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                            ToggleLoading(2);
                            $("#info").hide();
                            $(".limpia").show();
                            $(".consulta").show();
                            $(".guarda").show();
                            $(".borra").show();
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#error").html('<span>Ocurri&oacute; un error al guardar los datos</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                        ToggleLoading(2);
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $(".guarda").show();
                        $(".borra").show();
                    }
                });
            }
        }

        function borrar() {
            if (confirm("DESEA BORRAR LOS REGISTROS EXISTENTES ENTRE LAS FECHAS SELECCIONADAS?")) {
                if (validarEliminacion()) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                        data: $("#formProgramacionJuzgadores").serialize() + '&accion=borrarTodo',
                        async: true,
                        dataType: "json",
                        beforeSend: function (objeto) {
                            ToggleLoading(1);
                            $("#info").html('<span>Eliminando la informaci&oacute;n, espere un momento</span>').fadeIn('slow');
                            $(".guarda").hide();
                            $(".borra").hide();
                            $(".limpia").hide();
                            $(".consulta").hide();
                        },
                        success: function (datos) {
                            try {
                                if (datos.totalCount > 0) {
                                    $("#correcto").html('<span>Datos borrados correctamente</span>').fadeIn("slow").delay(5000).fadeOut('slow');
                                    $("#idJuzgador").val("");
                                    $("#fechaInicial").val("");
                                    $("#fechaFinal").val("");
                                    $("#cveRolJuzgador").val("");
                                    $(".consulta").trigger("click");
                                    $(".guarda").show();
                                    $(".borra").show();
                                    $(".limpia").show();
                                    $(".consulta").show();
                                    ToggleLoading(2);
                                    $("#info").hide();
                                } else {
                                    $("#info").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                                    ToggleLoading(2);
                                    $(".limpia").show();
                                    $(".consulta").show();
                                    $(".guarda").show();
                                    $(".borra").show();
                                }
                            } catch (e) {
                                $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                                ToggleLoading(2);
                                $("#info").hide();
                                $(".limpia").show();
                                $(".consulta").show();
                                $(".guarda").show();
                                $(".borra").show();
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            $("#error").html('<span>Ocurri&oacute; un error al borrar los datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            ToggleLoading(2);
                            $("#info").hide();
                            $(".limpia").show();
                            $(".consulta").show();
                            $(".guarda").show();
                            $(".borra").show();
                        }
                    });
                }
            }
        }

        function consultarJuzgadores() {
            var cveJuzgado = $("#cveJuzgado").val();
            if (cveJuzgado != "") {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                    data: {
                        cveJuzgado: cveJuzgado,
                        activo: 'S',
                        accion: "listaJuzgadores"},
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
                                html += '<select name="idJuzgador" id="idJuzgador" style="width: 200px !important;">';
                                html += '<option value="">Selecciona una opci&oacute;n</option>';
                                for (var n = 0; n < result.totalCount; n++) {
                                    html += '<option value="' + result.data[n].idJuzgador + '">' + result.data[n].nombre + ' ' + result.data[n].paterno + ' ' + result.data[n].materno + '</option>';
                                }
                                html += '</select>';
                                $("#listaJuzgadores").html(html);
                                ToggleLoading(2);
                            } else {
                                html = "";
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

        function rolJuzgador() {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/rolesjuzgadores/RolesjuzgadoresFacade.Class.php",
                data: {
                    activo: 'S',
                    accion: "consultar"},
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
                            html += '<select name="cveRolJuzgador" id="cveRolJuzgador">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var n = 0; n < result.totalCount; n++) {
                                html += '<option value="' + result.data[n].cveRolJuzgador + '">' + result.data[n].desRolJuzgador + '</option>';
                            }
                            html += '</select>';
                            $("#listaRolJuzgadores").html(html);
                            ToggleLoading(2);
                        } else {
                            html = "";
                            $("#listaRolJuzgadores").html(html);
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

        function mostrarCalendario(cveJuzgado, cveMes, anio) {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title'
                },
                year: anio,
                month: (cveMes - 1),
                timezone: false,
                editable: true,
                selectable: true,
                eventLimit: true,
                events: {
                    url: 'php/get-events.php',
                    error: function () {
                        $('#script-warning').show();
                    }
                },
                loading: function (bool) {
                    $('#info').toggle(bool);
                },
                eventRender: function (event, el) {
                    if (event.start.hasZone()) {
                        el.find('.fc-title').after(
                                $('<div class="tzo"/>').text(event.start.format('Z'))
                                );
                    }
                },
                dayClick: function (date) {
                    console.log('dayClick', date.format());
                },
                select: function (startDate, endDate) {
                    console.log('select', startDate.format(), endDate.format());
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
            $('#divFormulario').find('input[type=text], input[type=password], input[type=number], input[type=email], textarea').val('');
            $('#divFormulario').find('select').val('');
            var fecha = new Date();
            $("#divFormulario").find('input[name="anio"]').val(fecha.getFullYear());
            $("#contenidoReporte").html("");
            $(".programacion").hide();
            $(".guarda").hide();
            $(".borra").hide();
            $("#horaInicial").val("8:00");
            $("#horaFinal").val("9:00");
            $("#contenidoReporte").empty();
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
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control text-uppercase" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex" onChange="consultarJuzgadores()">';
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
            }
            else {
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

            if ($("#cveJuzgado").val() == "") {
                $("#advertencia").html('<span>Seleccione un juzgado del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#cveMes").val() == "") {
                $("#advertencia").html('<span>Seleccione el mes de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if (!validarAnio()) {
                $("#advertencia").html('<span>Capture un dato v&aacute;lido en el campo a&ntilde;o</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#idJuzgador").val() == "") {
                $("#advertencia").html('<span>Seleccione un juzgador del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#cveRolJuzgador").val() == "") {
                $("#advertencia").html('<span>Seleccione un rol del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
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
            } else if ((horaInicial > HoraFinal) || (horaInicial == HoraFinal && minutoInicial > minutoFinal)) {
                $("#advertencia").html('<span>La hora inicial de programaci&oacute;n no puede ser mayor a la hora final, favor de verificar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else {
                return true;
            }
        }

        function validarEliminacion() {
            if ($("#cveJuzgado").val() == "") {
                $("#advertencia").html('<span>Seleccione un juzgado del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#cveMes").val() == "") {
                $("#advertencia").html('<span>Seleccione el mes de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if (!validarAnio()) {
                $("#advertencia").html('<span>Capture un dato v&aacute;lido en el campo a&ntilde;o</span>').fadeIn('slow').delay(4000).fadeOut('slow');
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
            listaMeses();
            listaJuzgados();
            rolJuzgador();
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
                        if ($(this).val() != "") {
                            $(".guarda").show();
                            $(".borra").show();
                        } else {
                            $(".guarda").hide();
                            $(".borra").hide();
                        }
                        $('#fechaFinal').datepicker('hide');
                    });

            $("#horaInicial").timepicker({
                defaultTime: '8:00',
                showMeridian: false,
                minuteStep: 5
            });
            $("#horaFinal").timepicker({
                defaultTime: '9:00',
                showMeridian: false,
                minuteStep: 5
            });

            $("#fechaInicial").datepicker().on('changeDate', function (e) {
                $("#fechaInicial").datepicker('hide');
            });

            $("#anio").validaCampo('0123456789');

        });

    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>