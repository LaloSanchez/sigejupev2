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
            Modificaci&oacute;n de Disponibilidad de Jueces para Toma de Muestras                           
        </h5>
    </div>
    <div class="panel-body">

        <div id="divFormulario" class="form-horizontal">
            <p class="col-lg-12" style="color:darkred;">
                Los campos marcados con (*) son obligatorios. 
                <br>NOTA: para realizar consultas se puede indicar s&oacute;lo las fechas de inicio y fin.
            </p>
            <form method="post" id="formProgramacionJuzgadores">
                <input type="hidden" id="idProgramacionMuestra" class="form-control selecto2" name="idProgramacionMuestra">
                <input type="hidden" id="hddIdProgramacionMuestra" name="hddIdProgramacionMuestra">
                <div class="form-group">                                                                
                    <label class="control-label col-xs-12 col-sm-2 col-md-2">Grupo Muestras <span class="requerido">(*)</span></label>
                    <div class="col-xs-9" id="listaGrupoMuestras">
                        <input type="hidden" id="cveGrupoMuestra" class="form-control selecto2" name="cveGrupoMuestra">
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-12 col-sm-2 col-md-2">Juzgado <span class="requerido">(*)</span></label>
                    <div class="col-xs-9" id="listaJuzgados">
                        <select id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgado">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-2 col-md-2">Juzgador <span class="requerido">(*)</span></label>
                    <div class="col-xs-9" id="listaJuzgadores">
                        <select  class="form-control selecto2" id="cveJuzgador" name="cveJuzgador" placeholder="Juzgador">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                    <input type="hidden" id="juzgador">
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-12 col-sm-2 col-md-2">Mostrar calendario</label>
                    <div class="col-xs-9">
                        <input type="checkbox" id="mostrarCalendario">
                    </div>
                </div>
                <div class="form-group programacion" style="display: block;">
                    <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 18% !important;">Fecha Inicio <span class="requerido">(*)</span></label>
                    <div class="col-xs-5 col-sm-3 col-md-2">
                        <input type="text" class="form-control" style="width: 184px !important;" id="fechaInicial" name="fechaInicio" placeholder="Fecha Inicial">&nbsp;&nbsp;
                        <input type="hidden" id="fechaInicio">
                    </div>
                    <div class="col-xs-2 col-sm-1 col-md-1" style="width: 15% !important;">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 100% !important;">Fecha Fin <span class="requerido">(*)</span></label>
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-2">
                        <input type="text" class="form-control" style="width: 184px !important;" id="fechaFinal" name="fechaFinal" placeholder="Fecha Final">
                        <input type="hidden" id="fechaFin">
                    </div>
                </div>
                <div class="form-group programacion" style="display: block;">
                    <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 18% !important;">Hora Inicio <span class="requerido">(*)</span></label>
                    <div class="col-xs-5 col-sm-3 col-md-2">
                        <input type="text" class="form-control" style="width: 184px !important;" id="horaInicial" name="horaInicial" placeholder="Hora Inicial">&nbsp;&nbsp;
                    </div>
                    <div class="col-xs-2 col-sm-1 col-md-1" style="width: 15% !important;">
                        <label class="control-label col-xs-12 col-sm-2 col-md-2" style="width: 100% !important;">Hora Fin <span class="requerido">(*)</span></label>
                    </div>
                    <div class="col-xs-5 col-sm-3 col-md-2">
                        <input type="text" class="form-control" style="width: 184px !important;" id="horaFinal" name="horaFinal" placeholder="Hora Final">
                        <span class="requerido">
                            NOTA: si la hora final seleccionada es menor a la hora inicial, a la fecha final seleccionada se le sumar&aacute;ra un d&iacute;a al guardar el registro
                        </span>
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
                    <input type="submit" class="btn btn-primary consulta" value="Consultar" onclick="consultarProgramacionMuestras()">
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

    consultarProgramacionMuestras = function(){
        $("#hddIdProgramacionMuestra").val("");
        $("#idProgramacionMuestra").val("");
        var cveGrupoMuestra = $("#cveGrupoMuestra").val();
        var cveGrupoMuestraJuzgado = $("#cveJuzgado option:selected").data("grupojuzgado");
        var idJuzgador = $("#idJuzgador").val();
        var fechaInicio = $("#fechaInicial").val();
        var fechaFin = $("#fechaFinal").val();
//        if (cveGrupoMuestra == "") {
//            $("#advertencia").html('<span>Seleccione un grupo del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
//        } else if(cveGrupoMuestraJuzgado == ""){
//            $("#advertencia").html('<span>Seleccione un juzgado!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
//        } else 
            
        if(fechaInicio == ""){
            $("#advertencia").html('<span>Seleccione la fecha de inicio para consultar los datos!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
        } else if(fechaFin == "") {
            $("#advertencia").html('<span>Seleccione la fecha final para consultar los datos!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
        } else if ( $.datepicker.parseDate('dd/mm/yy', fechaInicio) > $.datepicker.parseDate('dd/mm/yy', fechaFin) )  {
            $("#advertencia").html('<span>La fecha inicial no puede ser mayor a la fecha final para consultar los datos!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
        }
        else {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/programacionmuestras/ProgramacionmuestrasFacade.Class.php",
                data: {
                cveGrupoMuestra: cveGrupoMuestra,
                cveGrupoMuestraJuzgado : cveGrupoMuestraJuzgado,
                idJuzgador: idJuzgador,
                fechaInicio: fechaInicio,
                fechaFin: fechaFin,
                activo: "S",
                accion : "consultarProgramacionMuestras"},
                async: true,
                dataType: "html",
                beforeSend: function(objeto) {
                    ToggleLoading(1);
                    $("#info").html('<span>Consultando Informaci&oacute;n, por favor espere</span>').show();
                    $('#contenidoReporte').html("");
                },
                success: function(datos) {
                    $("#info").hide();
                    try{
                        var nombreJuzgado = $("#cveJuzgado :selected").text();
                        var texto = ucFirstAllWords(nombreJuzgado);
                        var result = eval("(" + datos + ")");
                        var html = "";
                        var arregloIdJuzgador = new Array();
                        var arregloJuzgador = new Array();
                        if(result.totalCount > 0){
                            if($("#mostrarCalendario").is(":checked")){
                                var events = [];
                                for(var n = 0; n < result.totalCount; n++){
                                    var fechaHoraInicio = result.data[n].FechaInicio.split(" ");
                                    var fechaHoraFin = result.data[n].FechaFin.split(" ");
                                    events.push({
                                        title: result.data[n].Nombre + " - " + fechaHoraInicio[1] + "-" + fechaHoraFin[1],
                                        start: result.data[n].FechaInicio,
                                        end: result.data[n].FechaFin,
                                        url: result.data[n].idProgramacionMuestra,
                                        color: 'green'
                                    });
                                }
                                var f = fechaInicio.split("/");
                                var mes = parseInt(f[1]);
                                console.log(mes);
                                var anio = parseInt(f[2]);
                                console.log(anio);
                                var calendar = $("#contenidoReporte").fullCalendar({
                                    editable: false,
                                    year: anio,
                                    month: (mes - 1),
                                    header: {
                                        center: 'title',
                                        left: '',
                                        right: ''
                                    },
                                    firstDay: 1,
                                    monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
                                    monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
                                    dayNames: ['Domingo','Lunes','Martes','Mi�rcoles','Jueves','Viernes','Sabado'],
                                    dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
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
                                    loading: function(bool) {
                                        $('#advertencia').toggle(bool);
                                    },
                                    eventRender: function(event, el) {
                                        el.find('.fc-title').after(
                                            $('<div class="tzo" style="padding: 1px 0 1px 1px !important;"/>').text(event.Nombre)
                                        );
                                        el.find('.fc-event-title').css('font-size', '9px !important');
                                    },
                                    eventClick: function(event) {
                                        if (event) {
                                            seleccionarProgramacionMuestra(event.url);
                                            return false;
                                        }
                                    },
                                    allDay: false
                                });
                                $("#info").hide();
                                $(".programacion").show();
                            } else{
                                html += '<table class="table" id="datosProgramacionMuestras">';
                                html += '<thead>';
                                html += '<th>No</th>';
                                html += '<th>D&Iacute;A</th>';
                                html += '<th>Horario</th>';
                                html += '<th>Juzgador</th>';
                                html += '<th><a href="javascript:;" id="borrarSeleccionados" onClick="borrarSeleccionados()"><img src="./img/eliminar.png" width="30" height="30" data-toogle="Eliminar Registros seleccionados" title="Eliminar Registros seleccionados"></a>&nbsp;&nbsp;<input type="checkbox" id="seleccionaTodo" onClick="seleccionaTodo()"></th>';
                                var c = 0;
                                for ( var n = 0; n < result.totalCount; n++ ) {
                                    c += 1;
                                    fechaHoraInicio = result.data[n].FechaInicio.split(" ");
                                    fechaHoraTermino = result.data[n].FechaFin.split(" ");
                                    html += "<tr class='datosProgramacion' id='" + result.data[n].idProgramacionMuestra + "' style='border: solid 1px #000;' >";
                                    if ( result.data[n].Dia == "SABADO" || result.data[n].Dia == "DOMINGO" ) {
                                        html += "<td style='border: solid 1px #000; background-color: #ddd !important;' onClick='seleccionarProgramacionMuestra(" + result.data[n].idProgramacionMuestra + ")'>" + c + "</td>";
                                        html += "<td style='border: solid 1px #000; background-color: #ddd !important;' onClick='seleccionarProgramacionMuestra(" + result.data[n].idProgramacionMuestra + ")'>" + result.data[n].Dia + "</td>";
                                        html += "<td style='border: solid 1px #000; background-color: #ddd !important;' onClick='seleccionarProgramacionMuestra(" + result.data[n].idProgramacionMuestra + ")'><b>" + formatoFecha(fechaHoraInicio[0]) + "</b>&nbsp;&nbsp;&nbsp;" + fechaHoraInicio[1] + "&nbsp;&nbsp;-&nbsp;&nbsp;<b>" + formatoFecha(fechaHoraTermino[0])+ "</b>&nbsp;&nbsp;&nbsp;" + fechaHoraTermino[1] + "</td>";
                                        html += "<td style='border: solid 1px #000; background-color: #ddd !important;' onClick='seleccionarProgramacionMuestra(" + result.data[n].idProgramacionMuestra + ")'>" + result.data[n].Nombre + '</td>';
                                        html += "<td style='border: solid 1px #000; background-color: #ddd !important;'><input type='checkbox' onClick='registrosEliminarMuestra()' class='eliminarMuestra' value='" + result.data[n].idProgramacionMuestra + "'></td>";
                                    } else {
                                        html += "<td style='border: solid 1px #000;' onClick='seleccionarProgramacionMuestra(" + result.data[n].idProgramacionMuestra + ")'>" + c + "</td>";
                                        html += "<td style='border: solid 1px #000;' onClick='seleccionarProgramacionMuestra(" + result.data[n].idProgramacionMuestra + ")'>" + result.data[n].Dia + "</td>";
                                        html += "<td style='border: solid 1px #000;' onClick='seleccionarProgramacionMuestra(" + result.data[n].idProgramacionMuestra + ")'><b>" + formatoFecha(fechaHoraInicio[0]) + "</b>&nbsp;&nbsp;&nbsp;" + fechaHoraInicio[1] + "&nbsp;&nbsp;-&nbsp;&nbsp;<b>" + formatoFecha(fechaHoraTermino[0])+ "</b>&nbsp;&nbsp;&nbsp;" + fechaHoraTermino[1] + "</td>";
                                        html += "<td style='border: solid 1px #000;' onClick='seleccionarProgramacionMuestra(" + result.data[n].idProgramacionMuestra + ")'>" + result.data[n].Nombre + '</td>';
                                        html += "<td style='border: solid 1px #000;'><input type='checkbox' onClick='registrosEliminarMuestra()' class='eliminarMuestra' value='" + result.data[n].idProgramacionMuestra + "'></td>";
                                    }
                                    
                                    html += "</tr>";
                                }
                                /*html += '<th>FECHA</th>';
                                html += '<th>HORARIO</th>';
                                html += '</thead>';
                                var fechaHoraInicio = "";
                                var fechaHoraTermino = "";
                                for ( var n = 0; n < result.totalCount; n++ ) {
                                    fechaHoraInicio = result.data[n].FechaInicio.split(" ");
                                    fechaHoraTermino = result.data[n].FechaFin.split(" ");

                                    if ( $.inArray(result.data[n].IdJuzgador, arregloIdJuzgador) == -1 ) {
                                        arregloIdJuzgador.push(result.data[n].IdJuzgador);
                                    }
                                    if ( $.inArray(result.data[n].Nombre, arregloJuzgador) == -1 ) {
                                        arregloJuzgador[result.data[n].IdJuzgador] = result.data[n].Nombre;
                                    }
                                }
                                var c = 0;
                                for ( var s = 0; s < arregloIdJuzgador.length; s++ ){
                                    html += '<tr id="'+arregloIdJuzgador[s]+'" style="background-color: #00695c; color: #FFFFFF;"><td colspan="5" align="center">' + arregloJuzgador[arregloIdJuzgador[s]] + '</td></tr>';
                                    for ( var i = 0; i < result.totalCount; i++ ) {
                                        if ( result.data[i].IdJuzgador == arregloIdJuzgador[s] ){
                                            c += 1;
                                            fechaHoraInicio = result.data[i].FechaInicio.split(" ");
                                            fechaHoraTermino = result.data[i].FechaFin.split(" ");
                                            html += "<tr class='datosProgramacion' style='border: solid 1px #000;' onClick='seleccionarProgramacionMuestra(" + result.data[i].idProgramacionMuestra + ")'>";
                                            html += "<td style='border: solid 1px #000;'>" + c + "</td>";
                                            html += "<td style='border: solid 1px #000;'>" + result.data[i].Dia + "</td>";
                                            html += "<td style='border: solid 1px #000;'>" + formatoFecha(fechaHoraInicio[0]) + " - " + formatoFecha(fechaHoraTermino[0]) + "</td>";
                                            html += "<td style='border: solid 1px #000;'>" + fechaHoraInicio[1] + "-" + fechaHoraTermino[1] + '</td>';
                                            html += "</tr>";
                                        }
                                    }    
                                    c = 0;
                                }*/
                                html += '</table>';
                                $('#contenidoReporte').html(html);
                                $("#info").hide();
                                $(".programacion").show();
                            }
                            ToggleLoading(2);
                            
                        } else {
                            $("#advertencia").html('<span>No se encontraron datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            ToggleLoading(2);
                        }
                        $("#fechaInicio").val(fechaInicio);
                        $("#fechaFin").val(fechaFin);
                        $("#juzgador").val(idJuzgador);
                    }catch(e){
                        $("#advertencia").html('<span>Ocurri&oacute; un error al consultar los datos: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        ToggleLoading(2);
                    }
                    
                },
                error: function(objeto, quepaso, otroobj) {
                    $("#error").html('<span>Ocurri&oacute; un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                    $("#info").hide();
                    $(".limpia").show();
                    $(".consulta").show();
                    ToggleLoading(2);
                }
            });
        }
    };
    
    function seleccionaTodo() {
        if ( $("#seleccionaTodo").is(":checked") ) {
            $('.eliminarMuestra').prop("checked", true);
        } else {
            $('.eliminarMuestra').prop("checked", false);
        }
        registrosEliminarMuestra();
    }
    
    function registrosEliminarMuestra() {
        var registros = new Array();
        var idMuestras = new Array();
        $('#datosProgramacionMuestras tr').each(function(){
            if ( $(this).find('.eliminarMuestra').is(':checked') ) {
                idMuestras = {
                    idProgramacionMuestra: $(this).find('.eliminarMuestra').val()
                };
                registros[registros.length] = idMuestras;
            } 
        });
        //console.log(idMuestras);
        
        console.log(registros);
        ///Se convierte el arreglo de registros en json
        var idMuestraJson = JSON.stringify(registros);
        idMuestraJson = decodeURIComponent(idMuestraJson);
        $("#hddIdProgramacionMuestra").val("");
        if ( parseInt(registros.length) > 0 ) {
            $("#hddIdProgramacionMuestra").val(idMuestraJson);
        }
    }
    
    function seleccionarProgramacionMuestra(obj){
        
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/programacionmuestras/ProgramacionmuestrasFacade.Class.php",
            data: {idProgramacionMuestra: obj, accion: 'seleccionar'},
            async: false,
            dataType: "json",
            beforeSend: function(objeto) {
                ToggleLoading(1);
            },
            success: function(datos) {
                try {
                    if (datos.totalCount > 0) {
                        $(".datosProgramacion").removeClass("success");
                        var inicio = datos.data[0].fechaInicio.split(" ");
                        var fin = datos.data[0].fechaFinal.split(" ");
                        var horaInicio = inicio[1].split(":");
                        var horaFin = fin[1].split(":");
                        var horaInicial = parseInt(horaInicio[0]) + ":" + horaInicio[1] + ":" + horaInicio[2];
                        var horaFinal = parseInt(horaFin[0]) + ":" + horaFin[1] + ":" + horaFin[2];
                        $("#idProgramacionMuestra").val(datos.data[0].idProgramacionMuestra);
                        $("#cveJuzgado option").filter('[data-grupojuzgado="' + datos.data[0].cveGrupoMuestraJuzgado + '"]').prop("selected", true);
                        $("#idJuzgador").val(datos.data[0].idJuzgador);
                        $("#fechaInicial").val(formatoFecha(inicio[0]));
                        $("#fechaFinal").val(formatoFecha(fin[0]));
                        $("#horaInicial").val(horaInicial);
                        $("#horaFinal").val(horaFinal);
                        $("#" + datos.data[0].idProgramacionMuestra).addClass("success");
                        //$("#cveJuzgado").val(datos.data[0].cveGrupoMuestraJuzgado);
                       
                        $(".guarda").show();
                        $(".borra").show();
                        $(".limpia").show();
                        $(".consulta").show();
                        ToggleLoading(2);
                        $("#info").hide();
                    }else{
                        $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        ToggleLoading(2);
                        $(".limpia").show();
                        $(".consulta").show();
                        $(".guarda").show();
                        $(".borra").show();
                    }
                } catch (e) {
                    $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                    ToggleLoading(2);
                    $("#info").hide();
                    $(".limpia").show();
                    $(".consulta").show();
                    $(".guarda").show();
                    $(".borra").show();
                }
            },
            error: function(objeto, quepaso, otroobj) {
                $("#error").html('<span>Ocurri&oacute; un error al consultar los datos, favor de consultar con el administrador</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                ToggleLoading(2);
                $("#info").hide();
                $(".limpia").show();
                $(".consulta").show();
                $(".guarda").hide();
                $(".borra").hide();
            }    
        });
    }
    
    function guardar(){
        if(validar()){
            //alert($("#cveJuzgado option:selected").data("grupojuzgado"));
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/programacionmuestras/ProgramacionmuestrasFacade.Class.php",
                data: {
                    idProgramacionMuestra: $("#idProgramacionMuestra").val(),
                    idJuzgador: $("#idJuzgador").val(),
                    cveGrupoMuestraJuzgado: $("#cveJuzgado option:selected").data("grupojuzgado"),
                    fechaInicio: $("#fechaInicial").val(),
                    fechaFinal: $("#fechaFinal").val(),
                    horaInicial: $("#horaInicial").val(),
                    horaFinal: $("#horaFinal").val(),
                    activo: "S",
                    accion: "guarda"
                },
                async: true,
                dataType: "json",
                beforeSend: function(objeto) {
                    ToggleLoading(1);
                    $("#info").html('<span>Guardando la informaci&oacute;n, espere un momento</span>').fadeIn('slow');
                    $(".guarda").hide();
                    $(".borra").hide();
                    $(".limpia").hide();
                    $(".consulta").hide();
                },
                success: function(datos) {
                    try {
                        if (datos.totalCount > 0) {
                            $("#correcto").html('<span>Datos guardados correctamente</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                            $("#idJuzgador").val($("#juzgador").val());
                            if ( $("#fechaInicio").val() != "" ) {
                                $("#fechaInicial").val($("#fechaInicio").val());
                            }
                            if ( $("#fechaFin").val() != "" ) {
                                $("#fechaFinal").val($("#fechaFin").val());
                            }
                            $("#horaInicial").val("8:30:00");
                            $("#horaFinal").val("8:29:59");
                            $(".consulta").trigger("click");
                            $(".guarda").show();
                            $(".borra").show();
                            $(".limpia").show();
                            $(".consulta").show();
                            ToggleLoading(2);
                            $("#info").hide();
                        }else{
                            $("#info").hide();
                            $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            ToggleLoading(2);
                            $(".limpia").show();
                            $(".consulta").show();
                            $(".guarda").show();
                            $(".borra").show();
                        }
                    } catch (e) {
                        $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        ToggleLoading(2);
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $(".guarda").show();
                        $(".borra").show();
                    }
                },
                error: function(objeto, quepaso, otroobj) {
                    $("#error").html('<span>Ocurri&oacute; un error al guardar los datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
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
    
    function borrarSeleccionados() {
        bootbox.dialog({
            message: "\u00bf Desea eliminar el/los registro(s) seleccionado(s)?",
            buttons: {
                danger: {
                    label: "Aceptar",
                    className: "btn-primary",
                    callback: function () {
                        if ( $("#hddIdProgramacionMuestra").val() != "" ) {
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/programacionmuestras/ProgramacionmuestrasFacade.Class.php",
                                data: {
                                    accion: 'eliminarSeleccionados',
                                    activo: 'N',
                                    idProgramacionesMuestras: $("#hddIdProgramacionMuestra").val()
                                },
                                async: true,
                                dataType: "json",
                                beforeSend: function(objeto) {
                                    ToggleLoading(1);
                                    $("#info").html('<span>Eliminando la informaci&oacute;n, espere un momento</span>').fadeIn('slow');
                                    $(".guarda").hide();
                                    $(".borra").hide();
                                    $(".limpia").hide();
                                    $(".consulta").hide();
                                },
                                success: function(datos) {
                                    $("#info").hide();
                                    try {
                                        if (datos.totalCount > 0) {
                                            $("#correcto").html('<span>Datos borrados correctamente</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                            $("#idJuzgador").val($("#juzgador").val());
                                            $("#fechaInicial").val($("#fechaInicio").val());
                                            $("#fechaFinal").val($("#fechaFin").val());
                                            $(".consulta").trigger("click");
                                            $(".guarda").show();
                                            $(".borra").show();
                                            $(".limpia").show();
                                            $(".consulta").show();
                                            ToggleLoading(2);
                                            $("#info").hide();
                                            $("#hddIdProgramacionMuestra").val("");
                                        }else{
                                            $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                            ToggleLoading(2);
                                            $(".limpia").show();
                                            $(".consulta").show();
                                            $(".guarda").show();
                                            $(".borra").show();
                                        }
                                    } catch (e) {
                                        $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                        ToggleLoading(2);
                                        $("#info").hide();
                                        $(".limpia").show();
                                        $(".consulta").show();
                                        $(".guarda").show();
                                        $(".borra").show();
                                    }
                                },
                                error: function(objeto, quepaso, otroobj) {
                                    $("#error").html('<span>Ocurri&oacute; un error al borrar los datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                    ToggleLoading(2);
                                    $("#info").hide();
                                    $(".limpia").show();
                                    $(".consulta").show();
                                    $(".guarda").show();
                                    $(".borra").show();
                                }
                            });
                        } else {
                            $("#advertencia").html('<span>Debe seleccionar al menos un registro a eliminar!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        }
                    }
                },
                success: {
                    label: "Cancelar",
                    className: "btn-primary",
                    callback: function () {

                    }
                }
            }
        });
    }
    
    function borrar(){
        bootbox.dialog({
            message: "\u00bf Desea eliminar el/los registro(s)?",
            buttons: {
                danger: {
                    label: "Aceptar",
                    className: "btn-primary",
                    callback: function () {
                        if(validarEliminacion()){
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/programacionmuestras/ProgramacionmuestrasFacade.Class.php",
                                data: $("#formProgramacionJuzgadores").serialize() + '&accion=eliminar',
                                async: true,
                                dataType: "json",
                                beforeSend: function(objeto) {
                                    ToggleLoading(1);
                                    $("#info").html('<span>Eliminando la informaci&oacute;n, espere un momento</span>').fadeIn('slow');
                                    $(".guarda").hide();
                                    $(".borra").hide();
                                    $(".limpia").hide();
                                    $(".consulta").hide();
                                },
                                success: function(datos) {
                                    $("#info").hide();
                                    try {
                                        if (datos.totalCount > 0) {
                                            $("#correcto").html('<span>Datos borrados correctamente</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                            $("#idJuzgador").val($("#juzgador").val());
                                            $("#fechaInicial").val($("#fechaInicio").val());
                                            $("#fechaFinal").val($("#fechaFin").val());
                                            $(".consulta").trigger("click");
                                            $(".guarda").show();
                                            $(".borra").show();
                                            $(".limpia").show();
                                            $(".consulta").show();
                                            ToggleLoading(2);
                                            $("#info").hide();
                                        }else{
                                            $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                            ToggleLoading(2);
                                            $(".limpia").show();
                                            $(".consulta").show();
                                            $(".guarda").show();
                                            $(".borra").show();
                                        }
                                    } catch (e) {
                                        $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                        ToggleLoading(2);
                                        $("#info").hide();
                                        $(".limpia").show();
                                        $(".consulta").show();
                                        $(".guarda").show();
                                        $(".borra").show();
                                    }
                                },
                                error: function(objeto, quepaso, otroobj) {
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
                },
                success: {
                    label: "Cancelar",
                    className: "btn-primary",
                    callback: function () {

                    }
                }
            }
        });
    }
    
    function consultarJuzgadores(){
        var cveJuzgado = $("#cveJuzgado").val();
        var cveGrupoMuestra = $("#cveGrupoMuestra").val();
        if (cveGrupoMuestra != ""){
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/programacionmuestras/ProgramacionmuestrasFacade.Class.php",
                data: {
                cveGrupoMuestra: cveGrupoMuestra,
                cveJuzgado : cveJuzgado,
                activo: 'S',
                accion : "listaJuzgadores"},
                async: false,
                dataType: "html",
                beforeSend: function(objeto) {
                    ToggleLoading(1);
                },
                success: function(datos){
                    try{
                        var result = eval("(" + datos + ")");
                        var html = "";
                        if(result.totalCount > 0){
                            html += '<select name="idJuzgador" id="idJuzgador" class="form-control" onChange="establecerIdJuzgador()">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for(var n = 0; n < result.totalCount; n++){
                                html += '<option value="' + result.data[n].idJuzgador + '">' + result.data[n].nombre + ' ' + result.data[n].paterno + ' ' + result.data[n].materno + '</option>';
                            }
                            html += '</select>';
                            $("#listaJuzgadores").html(html);
                            ToggleLoading(2);
                        } else{
                            html += '<select name="idJuzgador" id="idJuzgador" class="form-control">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            html += '</select>';
                            $("#listaJuzgadores").html(html);
                            ToggleLoading(2);
                        }
                        
                    } catch(e){
                        ToggleLoading(2);
                    }
                },
                error: function(objeto, quepaso, otroobj) {
                    $("#info").hide();
                    $(".limpia").show();
                    $(".consulta").show();
                }
            });
        }
    }
    
    function establecerIdJuzgador(){
        var idJuzgador = $("#idJuzgador").val();
        //$("#juzgador").val(idJuzgador);
        //alert(idJuzgador);
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
        $("#idProgramacionMuestra").val("");
        //$(".programacion").hide();
        $(".guarda").hide();
        $(".borra").hide();
        $("#horaInicial").val("8:30:00");
        $("#horaFinal").val("8:29:59");
        $("#contenidoReporte").empty();
        $("#fechaInicio").val("");
        $("#fechaFin").val("");
        $("#juzgador").val("");
        $("#hddIdProgramacionMuestra").val("");
    };
    
    function listaGrupoMuestras(){
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/gruposmuestras/GruposmuestrasFacade.Class.php",
            data: {
            activo: 'S',
            accion : "consultar"},
            async: true,
            dataType: "html",
            beforeSend: function(objeto) {
                ToggleLoading(1);
            },
            success: function(datos){
                try{
                    var result = eval("(" + datos + ")");
                    var html = "";
                    if(result.totalCount > 0){
                        html += '<select name="cveGrupoMuestra" id="cveGrupoMuestra" class="form-control" onChange="listaJuzgados()">';
                        html += '<option value="">Selecciona una opci&oacute;n</option>';
                        for(var n = 0; n < result.totalCount; n++){
                            html += '<option value="' + result.data[n].cveGrupoMuestra + '">' + result.data[n].desGrupoMuestra + '</option>';
                        }
                        html += '</select>';
                        $("#listaGrupoMuestras").html(html);
                        ToggleLoading(2);
                    } else{
                        html = "";
                        $("#listaGrupoMuestras").html(html);
                        ToggleLoading(2);
                    }

                } catch(e){
                    ToggleLoading(2);
                }
            },
            error: function(objeto, quepaso, otroobj) {
                $("#info").hide();
                $(".limpia").show();
                $(".consulta").show();
            }
        });
    }
    
    function listaJuzgados(){
        var ruta_juzgados = "../fachadas/sigejupe/gruposmuestrasjuzgados/GruposmuestrasjuzgadosFacade.Class.php";
        var cveGrupoMuestra = $("#cveGrupoMuestra").val();
        $.ajax(ruta_juzgados, {
            type: 'POST',
            data: {
                cveGrupoMuestra: cveGrupoMuestra,
                activo: "S",
                accion: 'consultarJuzgados'
            },
            dataType: 'json',
            beforeSend: function(objeto) {
                ToggleLoading(1);
            },
            success: function (data) {
                try {
                    var html = "";
                    if (data.totalCount > 0) {
                        html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex" onChange="consultarJuzgadores()">';
                        html += '<option value="">Selecciona una opci&oacute;n</option>';
                        for (var index = 0; index < data.totalCount; index++) {
                            html += "<option value='" + data.data[index].cveJuzgado + "' data-grupoJuzgado='" + data.data[index].cveGrupoMuestraJuzgado + "'>" + data.data[index].desJuzgado + "</option>";
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

    formatoFecha = function(campo) {
        var fecha = campo.split(' ');
        if (fecha.length > 1) {
            var f = fecha[0].split('-');
            return f[2] + "/" + f[1] + "/" + f[0] + " " + fecha[1];
        } else {
            var f = fecha[0].split('-');
            return f[2] + "/" + f[1] + "/" + f[0];
        }
    };

    /*
    * Función que permite verificar si se capturan datos válidos en el campo txtAnio
    */
    validarAnio = function(){
        var anio = $("#anio").val();
        if ( isNaN(parseInt(anio)) ){
            return false;
        } else if ( anio == 0 ){
            return false;
        } else if ( anio == "" ) {
            return false;
        } else if ( anio.length < 4 ) {
            return false;
        } else if ( parseInt(anio) < 2000 ) {
            return false;
        }
        else {
            return true;
        }

    };
    
    function ucFirstAllWords(str){
        str = str.toLowerCase();
        var pieces = str.split(" ");
        for ( var i = 0; i < pieces.length; i++ ){
            var j = pieces[i].charAt(0).toUpperCase();
            pieces[i] = j + pieces[i].substr(1);
        }
        return pieces.join(" ");
    }
    
    function validar(){
        var horaInicio = $("#horaInicial").val().split(":");
        var horaFin = $("#horaFinal").val().split(":");
        var horaInicial = parseInt(horaInicio[0], 10);
        var minutoInicial = parseInt(horaInicio[1], 10);
        var HoraFinal = parseInt(horaFin[0], 10);
        var minutoFinal = parseInt(horaFin[1], 10);
        
        if($("#cveGrupoMuestra").val() == ""){
            $("#advertencia").html('<span>Seleccione un grupo del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } if($("#cveJuzgado").val() == ""){
            $("#advertencia").html('<span>Seleccione un juzgado del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } else if($("#idJuzgador").val() == ""){
            $("#advertencia").html('<span>Seleccione un juzgador del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } else if($("#fechaInicial").val() == ""){
            $("#advertencia").html('<span>Seleccione la fecha inicial de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } else if($("#fechaFinal").val() == ""){
            $("#advertencia").html('<span>Seleccione la fecha final de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } else if($("#horaInicial").val() == ""){
            $("#advertencia").html('<span>Seleccione la hora inicial de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } else if($("#horaFinal").val() == ""){
            $("#advertencia").html('<span>Seleccione la hora final de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } else if( (horaInicial == HoraFinal) && (minutoInicial == minutoFinal) ){
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
    
    function validarEliminacion(){
        if ( $("#hddIdProgramacionMuestra").val() == "" ) {
            $("#advertencia").html('<span>Seleccione un registro a eliminar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } else if($("#cveGrupoMuestra").val() == ""){
            $("#advertencia").html('<span>Seleccione un grupo del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } if($("#cveJuzgado").val() == ""){
            $("#advertencia").html('<span>Seleccione un juzgado del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } else if($("#idJuzgador").val() == ""){
            $("#advertencia").html('<span>Seleccione un juzgador del listado correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } else if($("#fechaInicial").val() == ""){
            $("#advertencia").html('<span>Seleccione la fecha inicial de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } else if($("#fechaFinal").val() == ""){
            $("#advertencia").html('<span>Seleccione la fecha final de programaci&oacute;n</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            return false;
        } else {
            return true;
        }
    }
    
    $(function () {
        
        listaGrupoMuestras();
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
            .on('changeDate', function(e) {
            if($(this).val() != ""){
                $(".guarda").show();
                $(".borra").show();
            } else {
                $(".guarda").hide();
                $(".borra").hide();
            }
            $('#fechaFinal').datepicker('hide');
            //$("#fechaFin").val($(this).val());
        });
        
        $("#horaInicial").timepicker({
            defaultTime: '8:30:00',
            showMeridian: false,
            showSeconds: true,
            minuteStep: 1,
            secondStep: 1
        });
        $("#horaFinal").timepicker({
            defaultTime: '8:29:59',
            showMeridian: false,
            showSeconds: true,
            minuteStep: 1,
            secondStep: 1
        });
        
        $("#fechaInicial").datepicker().on('changeDate', function(e){
            $("#fechaInicial").datepicker('hide');
            //$("#fechaInicio").val($(this).val());
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