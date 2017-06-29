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
                Simulador de &Oacute;rdenes de aprehensi&oacute;n                           
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <form method="post" id="formProgramacionJuzgadores">
                    <input type="hidden" id="idProgramacionCateo" class="form-control selecto2" name="idProgramacionCateo">
                    <!--<div class="form-group">                                                                
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">Grupo Cateo</label>
                        <div class="col-xs-9" id="listaGrupoCateos">
                            <input type="hidden" id="cveGrupoCateo" class="form-control selecto2" name="cveGrupoCateo">
                        </div>                                
                    </div>-->
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">Juzgado</label>
                        <div class="col-xs-9" id="listaJuzgados">
                            <select id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgado">
                                <option value="">Selecciona una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <!--<div class="form-group">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">Juzgador</label>
                        <div class="col-xs-9" id="listaJuzgadores">
                            <select  class="form-control selecto2" id="cveJuzgador" name="cveJuzgador" placeholder="Juzgador">
                                <option value="">Selecciona una opci&oacute;n</option>
                            </select>
                        </div>
                    </div>-->
                    <!--<div class="form-group">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2">Mostrar calendario</label>
                        <div class="col-xs-9">
                            <input type="checkbox" id="mostrarCalendario">
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
                        <div class="form-group" style="padding-left: 10px !important;">
                            <span class="requerido col-md-10">NOTA: en el horario de las 6:00:00 a las 8:29:29 no hay registros de programaci&oacute;n, por lo que es posible que no se muesten registros en el simulador para el horario de las 7:00:00</span>
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
                        <input type="submit" class="btn btn-primary consulta" value="Consultar" onclick="consultarProgramacionCateos()">
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

        consultarProgramacionCateos = function () {
            // var cveGrupoCateo = $("#cveGrupoCateo").val();
            //var cveGrupoJuzgado = $("#cveJuzgado option:selected").data("grupojuzgado");
            //var idJuzgador = $("#idJuzgador").val();
            var cveJuzgado = $("#cveJuzgado").val();
            var fechaInicio = $("#fechaInicial").val();
            var fechaFin = $("#fechaFinal").val();
            /*if (cveGrupoCateo == "") {
             $("#advertencia").html('<span>Seleccione un grupo del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
             } else */
    //        if(cveJuzgado == ""){
    //            $("#advertencia").html('<span>Seleccione un juzgado!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
    //        } else 
            if (fechaInicio == "") {
                $("#advertencia").html('<span>Seleccione la fecha de inicio para consultar los datos!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if (fechaFin == "") {
                $("#advertencia").html('<span>Seleccione la fecha final para consultar los datos!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if ($.datepicker.parseDate('dd/mm/yy', fechaInicio) > $.datepicker.parseDate('dd/mm/yy', fechaFin)) {
                $("#advertencia").html('<span>La fecha inicial no puede ser mayor a la fecha final para consultar los datos!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            }
            else {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionordenes/ProgramacionordenesFacade.Class.php",
                    data: {
                        cveJuzgado: cveJuzgado,
                        fechaInicio: fechaInicio,
                        fechaFinal: fechaFin,
                        activo: "S",
                        accion: "consultarSimulacionOrdenes"},
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
                            var texto = ucFirstAllWords(nombreJuzgado);
                            var result = eval("(" + datos + ")");
                            var html = "";

                            html += '<table class="table table-hover table-striped table-bordered">';
                            html += '<thead>';
                            html += '<th>No</th>';
                            html += '<th>D&iacute;a</th>';
                            html += '<th>Fecha</th>';
                            html += '<th>07:00:00</th>';
                            html += '<th>16:59:59</th>';
                            html += '<th>17:00:00</th>';
                            html += '<th>06:59:59 del d&iacute;a siguiente</th>';
                            html += '</thead>';
                            //console.log(result.totalCount);
                            //console.log(result.data);
                            var c = 0;
                            for (var i = 0; i < result.totalCount; i++) {
                                c += 1;
                                html += "<tr class='datosProgramacion' >";
                                html += "<td >" + c + "</td>";
                                html += "<td >" + result.data[i].dia + "</td>";
                                html += "<td >" + formatoFecha(result.data[i].fecha) + "</td>";
                                html += "<td >" + result.data[i].juzgadorMatutinoInicio + '</td>';
                                html += "<td >" + result.data[i].juezMatutinoFin + '</td>';
                                html += "<td >" + result.data[i].juezVespertinoInicio + '</td>';
                                html += "<td >" + result.data[i].juezVespertinoFin + '</td>';
                                html += "</tr>";
                            }

                            html += '</table>';
                            $('#contenidoReporte').html(html);
                            $("#info").hide();
                            $(".programacion").show();

                            ToggleLoading(2);

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
            $("#idProgramacionCateo").val("");
            //$(".programacion").hide();
            $(".guarda").hide();
            $(".borra").hide();
            $("#horaInicial").val("7:00:00");
            $("#horaFinal").val("7:00:00");
            $("#contenidoReporte").empty();
        };

        function listaGrupoCateos() {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/gruposcateos/GruposcateosFacade.Class.php",
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
                            html += '<select name="cveGrupoCateo" id="cveGrupoCateo" class="form-control" onChange="listaJuzgados()">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var n = 0; n < result.totalCount; n++) {
                                html += '<option value="' + result.data[n].cveGrupoCateo + '">' + result.data[n].desGrupoCateo + '</option>';
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
            var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            //var cveGrupoCateo = $("#cveGrupoCateo").val();
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {
                    activo: "S",
                    accion: 'consultar'
                },
                dataType: 'json',
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex" >';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveJuzgado + "' >" + data.data[index].desJuzgado + "</option>";
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

            if ($("#cveGrupoCateo").val() == "") {
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
            if ($("#cveGrupocateo").val() == "") {
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

            //listaGrupoCateos();
            listaJuzgados();

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

                        $('#fechaFinal').datepicker('hide');
                    });

            $("#horaInicial").timepicker({
                defaultTime: '7:00:00',
                showMeridian: false,
                showSeconds: true,
                minuteStep: 1,
                secondStep: 1
            });
            $("#horaFinal").timepicker({
                defaultTime: '7:00:00',
                showMeridian: false,
                showSeconds: true,
                minuteStep: 1,
                secondStep: 1
            });

            $("#fechaInicial").datepicker().on('changeDate', function (e) {
                $("#fechaInicial").datepicker('hide');
            });

        });

    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>