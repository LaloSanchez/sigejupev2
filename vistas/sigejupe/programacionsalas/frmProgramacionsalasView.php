<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    ?>
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
    <link href="../vistas/css/generalStyles.css" rel="stylesheet" />
    <!--<div class="page-content" id="areadetrabajo">-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Programaci&oacute;n de Salas                           
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormularioProgramacion" class="form-horizontal">
                <p class="col-lg-12" style="color:darkred;">
                    Los campos marcados con (*) son obligatorios.
                </p>
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
                <div class="form-group horas" id="salasJuzgado" style="display: none;">                                                                
                    <label class="control-label col-xs-12 col-sm-2 col-md-2">Salas <span class="requerido">(*)</span></label>
                    <div class="col-xs-5 col-sm-3 col-md-2" id="listaSalas" style="min-width: 330px !important;">
                        <input type="hidden" id="cveSala" class="form-control selecto2" name="cveSala" placeholder="Salas">
                    </div>
                    <div class="col-xs-2 col-sm-1 col-md-1" style="width: 13% !important;">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 100% !important;">Fecha Inicio</label>
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-2" style="width: 14%">
                        <input type="text" class="form-control" style="width: 140px !important;" id="fechaInicial" name="fechaInicial" placeholder="Fecha Inicio">
                    </div>
                    <div class="col-xs-2 col-sm-1 col-md-1" style="width: 10% !important;">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 100% !important;">Fecha Fin</label>
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-2">
                        <input type="text" class="form-control" style="width: 140px !important;" id="fechaFinal" name="fechaFinal" placeholder="Fecha Final">
                    </div>
                </div>
                <div class="form-group horas" style="display: none;">
                    <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 18% !important;">Hora Inicio</label>
                    <div class="col-xs-5 col-sm-3 col-md-2">
                        <input type="text" class="form-control timepicker" style="width: 150px !important;" id="horaInicial" name="horaInicial" placeholder="Hora Inicial">&nbsp;&nbsp;
                    </div>
                    <div class="col-xs-2 col-sm-1 col-md-1" style="width: 10% !important;">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 100% !important;">Hora Fin</label>
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-2">
                        <input type="text" class="form-control timepicker" style="width: 150px !important;" id="horaFinal" name="horaFinal" placeholder="Hora Final">
                    </div>
                    <div class="col-xs-2 col-sm-1 col-md-1" style="width: 15% !important;">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 100% !important;">Mostrar Calendario</label>
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-2">
                        <input type="checkbox" style="width: 150px !important;" id="mostrarCalendario">
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
                        <input type="submit" class="btn btn-primary consulta" value="Consultar" onclick="consultar()">
                        <input type="submit" class="btn btn-primary guardarTodo" style="display: none;" value="Guardar" onclick="guardar()">                                    
                        <input type="submit" class="btn btn-primary limpia" value="Limpiar" onclick="clean()">                                                                        
                        <input type="submit" class="btn btn-primary borrarSeleccionados" style="display: none;" value="Eliminar" onclick="bajaProgramaciones()">                                    
                    </div>
                </div>
            </div>                                    
            <form id="formProgramaciones" method="post">
                <div id="programacionSalas">
                    <!--<table id="tblResultados" class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>N&uacute;m.</th>
                                <th>CONDICI&Oacute;N</th>
                                <th>D&Iacute;A</th>
                                <th>FECHA</th>
                                <th>HORARIO</th>
                            </tr>
                        </thead>
                        <tbody id="listaProgramaciones">
                        </tbody>
                    </table>-->
                </div>
            </form>
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary guardarTodo" style="display: none;" value="Guardar" onclick="guardar()">
                        <input type="submit" class="btn btn-primary borrarSeleccionados" style="display: none;" value="Eliminar" onclick="bajaProgramaciones()">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--</div>-->
    <script type="text/javascript">

        $(document).on("change", ".eliminar", function () {
            var id = $(this).closest('tr').attr('id');
            //alert(id);
            if ($(this).is(":checked")) {
                $(".borrar" + id).prop("checked", true);
                $(".borrar" + id).each(function () {
                    $(this).closest('tr').find('.valorInput').attr('disabled', true);
                    $(this).closest('tr').find('.timepicker').attr('disabled', true);
                });
            } else {
                $(".borrar" + id).prop("checked", false);
                $(".borrar" + id).each(function () {
                    $(this).closest('tr').find('.valorInput').removeAttr('disabled');
                    $(this).closest('tr').find('.timepicker').removeAttr('disabled');
                });
            }
        });

        $(document).on("change", "#seleccionar_todos", function () {
            if ($("input[type='checkbox']").length > 1) {
                if ($(this).is(":checked")) {
                    $("input[type='checkbox']").prop("checked", true);
                    $(".valorInput").attr("disabled", true);
                    $(".timepicker").attr("disabled", true);
                } else {
                    $("input[type='checkbox']").prop("checked", false);
                    $(".valorInput").removeAttr("disabled");
                    $(".timepicker").removeAttr("disabled");
                }
            }

        });

        $(document).on("change", ".check", function () {
            if ($(this).is(":checked")) {
                $(this).closest('tr').find('.valorInput').attr('disabled', true);
                $(this).closest('tr').find('.timepicker').attr('disabled', true);
            } else {
                $(this).closest('tr').find('.valorInput').removeAttr('disabled');
                $(this).closest('tr').find('.timepicker').removeAttr('disabled');
            }
        });

        /*
         * Guardar datos de programacion salas
         */
        function guardar() {
            var cveMes = $("#cveMes").val();
            var anio = $("#anio").val();
            var sala = $("#cveSala").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var cveJuzgado = $("#cveJuzgado").val();
            var horaInicial = $("#horaInicial").val();
            var horaFinal = $("#horaFinal").val();
            if (validar()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionsalas/ProgramacionsalasFacade.Class.php",
                    data: {
                        cveMes: cveMes,
                        anio: anio,
                        cveSala: sala,
                        fechaInicial: fechaInicial,
                        fechaFinal: fechaFinal,
                        cveJuzgado: cveJuzgado,
                        horaInicial: horaInicial,
                        horaFinal: horaFinal,
                        accion: "guardarTodo"
                    },
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                        $("#info").html('<span>Guardando la informaci&oacute;n, espere un momento</span>').show();
                        $(".guardarTodo").hide();
                        $(".borrarSeleccionados").hide();
                        $(".limpia").hide();
                        $(".consulta").hide();
                    },
                    success: function (datos) {
                        try {
                            if (datos.totalCount > 0) {
                                $("#correcto").html('<span>Datos guardados correctamente</span>').fadeIn("slow").delay(5000).fadeOut('slow');
                                $("#cveSala").val("");
                                $("#fechaInicial").val("");
                                $("#fechaFinal").val("");
                                $("#horaInicial").val("8:00");
                                $("#horaFinal").val("9:00");
                                $(".consulta").trigger("click");
                                $(".guardarTodo").show();
                                $(".borrarSeleccionados").show();
                                $(".limpia").show();
                                $(".consulta").show();
                                ToggleLoading(2);
                                $("#info").hide();
                            } else {
                                $("#info").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                ToggleLoading(2);
                                $(".limpia").show();
                                $(".consulta").show();
                                $(".guardarTodo").show();
                                $(".borrarSeleccionados").show();
                            }
                        } catch (e) {
                            $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            ToggleLoading(2);
                            $("#info").hide();
                            $(".limpia").show();
                            $(".consulta").show();
                            $(".guardarTodo").show();
                            $(".borrarSeleccionados").show();
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#error").html('<span>Ocurri&oacute; un error al guardar los datos</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                        ToggleLoading(2);
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $(".guardarTodo").show();
                        $(".borrarSeleccionados").show();
                    }
                });
            }
        }

        consultar = function () {
            var cveMes = $("#cveMes").val();
            var anio = $("#anio").val();
            var cveJuzgado = $("#cveJuzgado").val();
            var idSala = $("#cveSala").val();
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
                    url: "../fachadas/sigejupe/programacionsalas/ProgramacionsalasFacade.Class.php",
                    data: {
                        cveMes: cveMes,
                        anio: anio,
                        cveJuzgado: cveJuzgado,
                        idSala: idSala,
                        fechaInicio: fechaInicio,
                        fechaFin: fechaFin,
                        accion: "consultarReporteProgramacionSalas"
                    },
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                        $("#info").html('<span>Consultando Informaci&oacute;n, por favor espere</span>').show();
                    },
                    success: function (datos) {
                        try {
                            var result = eval("(" + datos + ")");
                            var html = "";
                            $("#programacionSalas").empty();
                            if (result.totalCount > 0) {
                                if ($("#mostrarCalendario").is(":checked")) {
                                    var events = [];
                                    for (var n = 0; n < result.totalCount; n++) {
                                        var fechaHoraInicio = result.data[n].FechaInicio.split(" ");
                                        var fechaHoraFin = result.data[n].FechaFin.split(" ");
                                        events.push({
                                            title: result.data[n].Sala + " - " + result.data[n].Condicion + " " + fechaHoraInicio[1] + "-" + fechaHoraFin[1],
                                            start: result.data[n].FechaInicio,
                                            end: result.data[n].FechaFin,
                                            url: result.data[n].IdDisponibilidadSala,
                                            color: 'green'
                                        });
                                    }
                                    var calendar = $("#programacionSalas").fullCalendar({
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
                                                seleccionarProgramacionSalas(event.url);
                                                return false;
                                            }
                                        },
                                        allDay: false
                                    });
                                    $("#info").hide();
                                    $(".limpia").show();
                                    $(".consulta").show();
                                    inicializaTimepicker();
                                    $(".horas").show();
                                } else {
                                    var fechaHoraInicio = "";
                                    var fechaHoraTermino = "";
                                    var semanas = 0;
                                    var arregloId = new Array();
                                    var arregloIdSala = new Array();
                                    var arregloSala = new Array();
                                    var arregloCondicion = new Array();
                                    var arregloFechaInicio = new Array();
                                    var arregloFechaTermino = new Array();
                                    var arregloFecha = new Array();
                                    var arregloHoraInicio = new Array();
                                    var arregloHoraTermino = new Array();
                                    var arregloIdProgramacion = new Array();
                                    var arregloDia = new Array();
                                    for (var n = 0; n < result.totalCount; n++) {
                                        fechaHoraInicio = result.data[n].FechaInicio.split(" ");
                                        fechaHoraTermino = result.data[n].FechaFin.split(" ");

                                        if ($.inArray(result.data[n].IdSala, arregloIdSala) == -1) {
                                            arregloIdSala.push(result.data[n].IdSala);
                                        }
                                        if ($.inArray(result.data[n].Sala, arregloSala) == -1) {
                                            arregloSala[result.data[n].IdSala] = result.data[n].Sala;
                                        }

                                    }
                                    html += '<table class="table table-hover table-striped table-bordered">';
                                    html += '<head>';
                                    html += '<th>#</th>';
                                    html += '<th>CONDICI&Oacute;N</th>';
                                    html += '<th>D&Iacute;A</th>';
                                    html += '<th>FECHA</th>';
                                    html += '<th>HORARIO</th>';
                                    //html += '<th></th>';
                                    html += '</thead>';

                                    var c = 0;
                                    for (var s = 0; s < arregloIdSala.length; s++) {
                                        html += '<tr id="' + arregloIdSala[s] + '" style="background-color: #881518; color: #FFFFFF;"><td colspan="5" align="center">' + arregloSala[arregloIdSala[s]] + '</td></tr>';
                                        //html += '<td><input type="checkbox" style="opacity: 50 !important; left: auto !important;" class="eliminar"></td>';

                                        for (var i = 0; i < result.totalCount; i++) {
                                            if (result.data[i].IdSala == arregloIdSala[s]) {
                                                c += 1;
                                                fechaHoraInicio = result.data[i].FechaInicio.split(" ");
                                                fechaHoraTermino = result.data[i].FechaFin.split(" ");
                                                //icono = (result.data[i].IdDisponibilidadSala > 0) ? '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>' : '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>' ;
                                                //disabled = (result.data[i].IdDisponibilidadSala > 0) ? '' : 'disabled';
                                                //disabledInput = (result.data[i].idDisponibilidadSala>0) ? 'disabled' : '';
                                                //disabledInput = '';
                                                //valor = result.data[i].idDisponibilidadSala + "_" + fechaHoraInicio[0] + "_" + fechaHoraTermino[0] + "_" + result.data[i].cveSala + "_" + result.data[i].idProgramacion + "_" + result.data[i].cveHorario + "_" + result.data[i].cveCondicion;
                                                html += "<tr class='datosProgramacion' onClick='seleccionarProgramacionSalas(" + result.data[i].IdDisponibilidadSala + ")'>";
                                                //html += "<td><input type='hidden' name='valorInput[]' class='valorInput' value='" + valor + "'>" + c + "</td>";
                                                html += "<td>" + c + "</td>";
                                                //html += "<td>" + json[i].sNombre + "</td>";
                                                html += "<td>" + result.data[i].Condicion + "</td>";
                                                html += "<td>" + result.data[i].Dia + "</td>";
                                                html += "<td>" + formatoFecha(fechaHoraInicio[0]) + "</td>";
                                                html += "<td>" + fechaHoraInicio[1] + " - " + fechaHoraTermino[1] + "</td>";
                                                //html += "<td><input type='textbox' style='width: 90px !important;' name='horaInicio[]' class='horaInicio timepicker' value='" + fechaHoraInicio[1] + "' placeholder='Hora Inicio' title='Hora Inicio'>&nbsp;&nbsp;-&nbsp;&nbsp;";
                                                //html += "<input type='textbox' style='width: 90px !important;' name='horaTermino[]' class='horaTermino timepicker' value='" + fechaHoraTermino[1] + "' placeholder='Hora Termino' title='HoraTermino'>";
                                                //html += "</td>";
                                                //html += "<td>"+icono+"</td>";
                                                //html += "<td><input type='checkbox' style='opacity: 50 !important; left: auto !important;' name='eliminar[]' value='" + result.data[i].idDisponibilidadSala + "' class='borrar" + arregloIdSala[s] + " check' " + disabled + "></td>";
                                                html += "</tr>";
                                            }
                                        }
                                        c = 0;
                                    }
                                    html += '</table>';
                                    //$(".guardarTodo").show();
                                    //$(".borrarSeleccionados").show();
                                    $('#programacionSalas').html(html);
                                    $("#info").hide();
                                    $(".limpia").show();
                                    $(".consulta").show();
                                    inicializaTimepicker();
                                    $(".horas").show();
                                }
                                ToggleLoading(2);
                            } else {
                                $("#info").html('<span>' + result.text + '</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                                $("#programacionSalas").html("");
                                $(".limpia").show();
                                $(".consulta").show();
                                inicializaTimepicker();
                                $(".horas").show();
                                ToggleLoading(2);
                            }
                        } catch (e) {
                            $("#advertencia").html('<span>Ocurri&oacute; un error al consultar los datos: ' + e + '</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                            $("#programacionSalas").html("");
                            $("#info").hide();
                            $(".limpia").show();
                            $(".consulta").show();
                            ToggleLoading(2);
                        }

                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#error").append('<span>Ocurri&oacute; un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                        $("#programacionSalas").html("");
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        ToggleLoading(2);
                    }
                });
            }
        }

        function seleccionarProgramacionSalas(obj) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/programacionsalas/ProgramacionsalasFacade.Class.php",
                data: {idDisponibilidadSala: obj, accion: 'seleccionar'},
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    try {
                        if (datos.totalCount > 0) {
                            var inicio = datos.data[0].fechaInicio.split(" ");
                            var fin = datos.data[0].fechaTermino.split(" ");
                            var horaInicio = inicio[1].split(":");
                            var horaFin = fin[1].split(":");
                            var horaInicial = parseInt(horaInicio[0]) + ":" + horaInicio[1];
                            var horaFinal = parseInt(horaFin[0]) + ":" + horaFin[1];
                            $("#cveSala").val(datos.data[0].cveSala);
                            $("#fechaInicial").val(formatoFecha(inicio[0]));
                            $("#fechaFinal").val(formatoFecha(fin[0]));
                            $("#horaInicial").val(horaInicial);
                            $("#horaFinal").val(horaFinal);

                            $(".guardarTodo").show();
                            $(".borrarSeleccionados").show();
                            $(".limpia").show();
                            $(".consulta").show();
                            ToggleLoading(2);
                            $("#info").hide();
                        } else {
                            $("#info").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            ToggleLoading(2);
                            $(".limpia").show();
                            $(".consulta").show();
                            $(".guardarTodo").show();
                            $(".borrarSeleccionados").show();
                        }
                    } catch (e) {
                        $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        ToggleLoading(2);
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $(".guardarTdodo").show();
                        $(".borrarSeleccionados").show();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html('<span>Ocurri&oacute; un error al consultar los datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                    ToggleLoading(2);
                    $("#info").hide();
                    $(".limpia").show();
                    $(".consulta").show();
                    $(".guardarTodo").hide();
                    $(".borrarSeleccionados").hide();
                }
            });
        }

        function inicializaTimepicker() {
            $(".timepicker").timepicker({
                defaultTime: '8:00',
                showMeridian: false,
                minuteStep: 5
            });
        }

        changeDivForm = function (opc) {
            if (opc === 1) {
                $("#divFormularioProgramacion").show("slide");
                $("#divConsultaProgramaciones").hide("fade");
            } else if (opc === 2) {
                consultaProgramaciones();
                $("#divFormularioProgramacion").hide("fade");
                $("#divConsultaProgramaciones").show("slide");
            }
        };

        clean = function () {
            $('#divFormularioProgramacion').find('input[type=text], input[type=password], input[type=number], input[type=email], textarea').val('');
            $('#divFormularioProgramacion').find('select').val('');
            var fecha = new Date();
            $("#divFormularioProgramacion").find('input[name="anio"]').val(fecha.getFullYear());
            $("#listaProgramaciones").html("");
            $('#listaSalas').html('<input type="hidden" id="cveSala" class="form-control selecto2" name="cveSala" placeholder="Salas">');
            $('.horas').hide();
            $(".guardarTodo").hide();
            $(".borrarSeleccionados").hide();
            $("#horaInicial").val("8:00");
            $("#horaFinal").val("9:00");
            $("#programacionSalas").empty();
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
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control text-uppercase" title="Juzgado" data-toggle="tooltip" onChange="mostrarSalas(0)">';
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

        mostrarSalas = function (cve) {
            var cveJuzgado = $("#cveJuzgado").val();
            if (cveJuzgado != "") {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/horarios/HorariosFacade.Class.php",
                    data: {
                        cveJuzgado: cveJuzgado,
                        activo: 'S',
                        accion: "consultarSalas"},
                    async: false,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                    },
                    success: function (datos) {
                        try {
                            var html = "";
                            if (datos.totalCount > 0) {

                                html += '<select name="cveSala" id="cveSala" class="js-example-basic-multiple" style="width: 100%;" title="Salas" data-toggle="tooltip" tabIndex="tabIndex">';
                                html += '<option value="">Selecciona una opci&oacute;n</option>';
                                for (var n = 0; n < datos.totalCount; n++) {
                                    html += "<option value='" + datos.data[n].cveSala + "'>" + datos.data[n].desSala + "</option>";
                                }
                                $('#listaSalas').html(html);
                                //$(".js-example-basic-multiple").select2();
                                //$(".select2-hidden-accessible").hide();
                                ToggleLoading(2);
                            } else {
                                $("#info").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                $('#listaSalas').html('<input type="hidden" id="cveSala" class="form-control selecto2" name="cveSala" placeholder="Salas">');
                                ToggleLoading(2);
                            }
                        } catch (e) {
                            $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            $('#listaSalas').html('<input type="hidden" id="cveSala" class="form-control selecto2" name="cveSala" placeholder="Salas">');
                            ToggleLoading(2);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#advertencia").html('<span>No se encontraron registros</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        $('#listaSalas').html('<input type="hidden" id="cveSala" class="form-control selecto2" name="cveSala" placeholder="Salas">');
                        ToggleLoading(2);
                    }
                });
                if (cve > 0) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/configuracionessalas/ConfiguracionessalasFacade.Class.php",
                        data: {
                            cveHorario: cve,
                            activo: "S",
                            accion: "consultar"},
                        async: false,
                        dataType: "json",
                        beforeSend: function (objeto) {
                            ToggleLoading(1);
                        },
                        success: function (datos) {
                            try {
                                var arreglo = new Array();
                                if (datos.totalCount > 0) {
                                    for (var n = 0; n < datos.totalCount; n++) {
                                        arreglo.push(parseInt(datos.data[n].cveSala));
                                    }
                                    $("#cveSala").val(arreglo).trigger("change");

                                    ToggleLoading(2);
                                } else {
                                    $("#info").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                    ToggleLoading(2);
                                }
                            } catch (e) {
                                $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                ToggleLoading(2);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            $("#error").html('<span>Ocurri&oacute; un error al consultar los datos, favor de intentarlo mas tarde</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            ToggleLoading(2);
                        }
                    });
                }
            }
        }

        bajaProgramaciones = function () {
            var cveMes = $("#cveMes").val();
            var anio = $("#anio").val();
            var sala = $("#cveSala").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var cveJuzgado = $("#cveJuzgado").val();
            if (confirm("\¿ ESTAS SEGURO DE ELIMINAR LOS REGISTROS INDICADOS ENTRE LAS FECHAS SELECCIONADAS ?") == true) {
                if (validarEliminacion()) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/programacionsalas/ProgramacionsalasFacade.Class.php",
                        data: {
                            cveMes: cveMes,
                            anio: anio,
                            fechaInicial: fechaInicial,
                            fechaFinal: fechaFinal,
                            cveJuzgado: cveJuzgado,
                            cveSala: sala,
                            accion: "borrarTodo"},
                        async: false,
                        dataType: "json",
                        beforeSend: function (objeto) {
                            ToggleLoading(1);
                            $("#info").html('<span>Eliminando la informaci&oacute;n, espere un momento</span>').fadeIn('slow');
                            $(".guardarTodo").hide();
                            $(".borrarSeleccionados").hide();
                            $(".limpia").hide();
                            $(".consulta").hide();
                        },
                        success: function (datos) {
                            try {
                                if (datos.totalCount > 0) {
                                    $("#correcto").html('<span>Datos borrados correctamente</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                    $("#cveSala").val("");
                                    $("#fechaInicial").val("");
                                    $("#fechaFinal").val("");
                                    $(".consulta").trigger("click");
                                    $(".guardarTodo").show();
                                    $(".borrarSeleccionados").show();
                                    $(".limpia").show();
                                    $(".consulta").show();
                                    ToggleLoading(2);
                                    $("#info").hide();
                                } else {
                                    $("#info").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                    ToggleLoading(2);
                                    $(".limpia").show();
                                    $(".consulta").show();
                                    $(".guardarTodo").show();
                                    $(".borrarSeleccionados").show();
                                }
                            } catch (e) {
                                $("#info").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                $(document).scrollTop(200);
                                $(".limpia").show();
                                $(".consulta").show();
                                $(".guardarTodo").show();
                                $(".borrarSeleccionados").show();
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            $("#error").html('<span>Ocurri&oacute; un error al borrar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            $(document).scrollTop(200);
                            $("#info").hide();
                            $(".limpia").show();
                            $(".consulta").show();
                            $(".guardarTodo").show();
                            $(".borrarSeleccionados").show();
                        }
                    });
                }

            }
        }

        /*
         * Validar el env�o de datos
         */
        function validar() {
            var filas = 0;
            filas = $('#tblResultados tbody tr.datosProgramacion').length;
            var arrBandera = new Array();
            var bandera = false;
            var anio = parseInt($("#anio").val());
            var horaInicio = $("#horaInicial").val().split(":");
            var horaFin = $("#horaFinal").val().split(":");
            var horaInicial = parseInt(horaInicio[0], 10);
            var minutoInicial = parseInt(horaInicio[1], 10);
            var HoraFinal = parseInt(horaFin[0], 10);
            var minutoFinal = parseInt(horaFin[1], 10);


            if ($("#cveJuzgado").val() == "") {
                $("#advertencia").html('<span>Seleccione un juzgado del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            }
            else if ($("#cveMes").val() == "") {
                $("#advertencia").html('<span>Seleccione el mes de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            }
            else if (isNaN(anio) || anio == 0 || anio == "") {
                $("#advertencia").html('<span>Favor de verificar el a&ntilde;o de consulta</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                $("#anio").focus();
                return false;
            } else if (validarAnio() == false) {
                $("#advertencia").html('<span>Capture un dato valido en el campo A&ntilde;o!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                $("#anio").focus();
                return false;
            } else if ($("#cveSala").val() == "") {
                $("#advertencia").html('<span>Seleccione una sala del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#fechaInicial").val() == "") {
                $("#advertencia").html('<span>Seleccione la fecha inicial de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#fechaFinal").val() == "") {
                $("#advertencia").html('<span>Seleccione la fecha final de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#horaInicial").val() == "") {
                $("#advertencia").html('<span>Seleccione la hora inicial de atenci&oacute;n para la sala</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#horaFinal").val() == "") {
                $("#advertencia").html('<span>Seleccione la hora final de atenci&oacute;n para la sala</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ((horaInicial == HoraFinal) && (minutoInicial == minutoFinal)) {
                $("#advertencia").html('<span>La hora inicial de atenci&oacute;n para la sala no puede ser igual a la hora final, favor de verificar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ((horaInicial > HoraFinal) || (horaInicial == HoraFinal && minutoInicial > minutoFinal)) {
                $("#advertencia").html('<span>La hora inicial de atenci&oacute;n para la sala no puede ser mayor a la hora final, favor de verificar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            }
            else {
                //alert("ok");
                return true;
            }
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

        function validarEliminacion() {
            /*var filas = 0;
             filas = $('#tblResultados tbody tr.datosProgramacion').length;
             var arrBandera = new Array();
             var bandera = false;
             var checks = $("input[name^='eliminar']:checked").length;
             //alert(checks);
             if(checks == 0){
             $("#advertencia").html('<span>Debe seleccionar la menos un registro a eliminar!</span>').fadeIn('slow').delay(5000).fadeOut('slow');
             $(document).scrollTop(200);
             return false;
             } else{
             return true;
             }*/
            if ($("#cveJuzgado").val() == "") {
                $("#advertencia").html('<span>Seleccione un juzgado del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#cveMes").val() == "") {
                $("#advertencia").html('<span>Seleccione el mes de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if (!validarAnio()) {
                $("#advertencia").html('<span>Capture un dato v&aacute;lido en el campo a&ntilde;o</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#cveSala").val() == "") {
                $("#advertencia").html('<span>Seleccione una sala del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
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

        $(function () {
            listaMeses();
            listaJuzgados();
            var fecha = new Date();
            $("#anio").val(fecha.getFullYear());
            $("#fechaInicial").datepicker({
                format: "dd/mm/yyyy"
            });
            $("#fechaFinal").datepicker({
                format: "dd/mm/yyyy"
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

            $('#fechaFinal').datepicker()
                    .on('changeDate', function (e) {
                        if ($(this).val() != "") {
                            $(".guardarTodo").show();
                            $(".borrarSeleccionados").show();
                        } else {
                            $(".guardarTodo").hide();
                            $(".borrarSeleccionados").hide();
                        }
                        $("#fechaFinal").datepicker('hide');
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