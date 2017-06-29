<?php
if (isset($_SESSION)) {
    session_start();
}
?>
<style>
    .panel-default > .panel-heading {
        background: #881518;
        color: #ebf3f1;
    }

    .steps {
        padding: 1px 0;
        overflow: hidden;
    }

    .steps ul, .steps li {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .steps ul {
        float: left;
        width: 100%
    }

    .steps li {
        float: left;
        width: 14%;
        padding: 1px;
    }

    .steps li a {
        display: block;
        padding: 15px 20px;
        background: #881518;
        color: #fff;
        line-height: 1.5em;
        text-decoration: none;
    }

    .steps li a strong {
        font-size: 20px;
        font-family: Arial;
    }

    .steps li a:hover {
        background: #df3338  ;
    }

    .steps li a.active {
        background: #df3338  ;
    }

    .steps li.step, .steps li.step a {
        position: relative;
        z-index: 3;
        height: 84px;
    }

    .steps li > a {
        background: #881518;
    }

    .steps li.step-3 a {

        background-position: center left;
    }

    .steps li.step a:hover {
        background: #cc00;
    }

    .subtitulo {
        font-family: Arial;
        font-size: 12px;
    }

    @media (max-width: 768px) {
        .subtitulo {
            font-family: Arial;
            font-size: 12px;
        }
        .steps li a {
            display: block;
        }

        .steps li {
            display: block;
            float: left;
            width: 100%;
        }

        .steps li.step, .steps li.step a {
            position: relative;
            z-index: 3;
            height: 60px;
        }

        .steps ul, .steps li {
            margin: 1px;
            padding: 1px;
            list-style: none;
        }
    }
    /////////
    .tblGridAgrega{
        margin-top: 20px;
        font-family: arial;
        font-size: 11px;
        text-align: center;
    }
    .trGridAgrega{
        color: #ffffff;
        background-color: #881518;
    }
    .mayuscula{  
        text-transform: uppercase;  
    }  
    .trSeleccion:hover{
        background-color:#FFECED;
        cursor: pointer;
    } 
    .requerido {
        color: darkred;
    }
    .acordeonEstilo{
        background: #881518;        
        color: #ebf3f1;
    }
    .acordeonEstilo:hover{
        background:#5B9C8D;
    }

    .trGridAgregaTabla{
        color: #666666;
        background-color: #e9e7e7;
    }
    #accordion .panel-heading{
        background-color: #e9e7e7;
        color: #666666;
    }

    hr{
        margin-top: 0px !important;
    }
</style>
<div class="panel panel-default">
    <div class="panel-heading">
        <h4>Solicitudes de audiencias autom&aacute;ticas</h4>
    </div>
    <div class="panel-body">
        <input type="hidden" readonly class="form-control" id="hddIdSolicitudAudiencia">
        <input type="hidden" readonly id="mismoJuzgador">
        <input type="hidden" readonly  id="tribunal">
        <input type="hidden" readonly id="hddImputadosReclusos">

        <div class="row">
            <div class="col-xs-12">
                <div class="steps">
                    <ul>
                        <li id="liPaso1" class="step step-1 Paso1">
                            <a href="#" class="active" onclick="siguientePaso(1);"><strong>Paso 1</strong><br><label
                                    class="subtitulo">Solicitudes de audiencias</label></a>
                            <!--<a href="#" class="active" onclick="siguiente('divGeneral', 'sigejupe/solicitudAudiencias/frmSolicitudAudiencias.php', 1);" ><strong>Paso 1</strong><br><h1>Solicitudes de audiencias</h1></a>-->
                        </li>
                        <li id="liPaso2" class="step step-2 Paso2">
                            <a href="#" onclick="siguientePaso(2);"><strong>Paso 2</strong><br><label class="subtitulo">Captura de imputado(s)</label></a>
                            <!--<a href="#" onclick="siguiente('divGeneral', 'sigejupe/imputadosSolicitudes/frmImputadosSOlicitudes.php', 2);"><strong>Paso 2</strong><br><h1>Imputados</h1></a>-->
                        </li>
                        <li id="liPaso3" class="step step-3 Paso3">
                            <a href="#" onclick="siguientePaso(3);"><strong>Paso 3</strong><br><label class="subtitulo">Captura de sujeto(s) pasivo(s) del delito</label></a>
                        </li>
                        <li id="liPaso4" class="step step-4 Paso4">
                            <a href="#" onclick="siguientePaso(4);"><strong>Paso 4</strong><br><label class="subtitulo">Captura de delito(s)</label></a>
                        </li>
                        <li id="liPaso5" class="step step-5 Paso5">
                            <a href="#" onclick="siguientePaso(5);"><strong>Paso 5</strong><br><label class="subtitulo">Definici&oacute;n de relaci&oacute;n</label></a>
                        </li>
                        <li id="liPaso6" class="step step-6 Paso6">
                            <a href="#" onclick="siguientePaso(6);"><strong>Paso 6</strong><br><label class="subtitulo">Violencia de g&eacute;nero</label></a>
                        </li>
                        <li id="liPaso7" class="step step-7 Paso7">
                            <a href="#" onclick="siguientePaso(7);"><strong>Paso 7</strong><br><label class="subtitulo">Resumen</label></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xs-12" style="border: solid 3px #881518; width: 98%">
            <br>

            <form name="frmSolicitud" class="form-horizontal" id="frmSolicitud" method="POST" action="#" target="oculto"
                  enctype="multipart/form-data" onsubmit="return false;">
                <div class="form-group">
                    <div id="divAlertWarning" class="alert alert-warning alert-dismissable" style="display:none;">
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="divAlertSucces" class="alert alert-success alert-dismissable" style="display:none;">

                        <strong>Correcto!</strong> Mensaje
                    </div>
                    <div id="divAlertDager" class="alert alert-danger alert-dismissable" style="display:none;">

                        <strong>Error!</strong> Mensaje
                    </div>
                    <div id="divAlertInfo" class="alert alert-info alert-dismissable" style="display:none;">

                        <strong>Informaci&oacute;n!</strong> Mensaje
                    </div>
                </div>
                <div id="divDatosAudiencias"></div><br>
                <div id="divGeneral"></div>
                <br>

                <div id="btnPaso1" style="display:none;">
                    <button class="btn btn-primary" onclick="siguientePaso(2)">Siguiente ></button>
                </div>
                <div id="btnPaso2" style="display:none;">
                    <button class="btn btn-primary" onclick="siguientePaso(1)">< Anterior</button>
                    <button class="btn btn-primary" onclick="siguientePaso(3)">Siguiente ></button>
                </div>

                <div id="btnPaso3" style="display:none;">
                    <button class="btn btn-primary" onclick="siguientePaso(2)">< Anterior</button>
                    <button class="btn btn-primary" onclick="siguientePaso(4)">Siguiente ></button>
                </div>

                <div id="btnPaso4" style="display:none;">
                    <button class="btn btn-primary" onclick="siguientePaso(3)">< Anterior</button>
                    <button class="btn btn-primary" onclick="siguientePaso(5)">Siguiente ></button>
                </div>
                <div id="btnPaso5" style="display:none;">
                    <button class="btn btn-primary" onclick="siguientePaso(4)">< Anterior</button>
                    <button class="btn btn-primary" onclick="siguientePaso(6)">Siguiente ></button>
                </div>
                <div id="btnPaso6" style="display:none;">
                    <button class="btn btn-primary" onclick="siguientePaso(5)">< Anterior</button>
                    <button class="btn btn-primary" onclick="siguientePaso(7)">Siguiente ></button>
                </div>
                <div id="btnPaso7" style="display:none;">
                    <button class="btn btn-primary" onclick="siguientePaso(6)">< Anterior</button>
                    <button class="btn btn-primary" id="idEnviar" onclick="siguientePaso('enviar')"> Enviar </button>
                    <button class="btn btn-primary" id="btnAcuse" onclick="siguientePaso('acuse')"> Descargar acuse </button>
                </div>
                <br>
            </form>

        </div>
    </div>
</div>
<script type="text/javascript">


    siguiente = function (div, url, paso) {
        $.post(url, {idSolicitud: $('#hddIdSolicitudAudiencia').val()}, function (htmlexterno) {
            $("#" + div).html(htmlexterno);
        });
    }

    siguientePaso = function (paso) {
        if (paso == 1) {
            siguiente('divGeneral', 'sigejupe/solicitudAudiencias/frmSolicitudAudienciasAuto.php', 1);
            $('#divDatosAudiencias').html('');
            $('#divDatosAudiencias').hide('');
            $('#liPaso1').find("a").addClass("active");
            $('#liPaso2').find("a").removeClass("active");
            $('#liPaso3').find("a").removeClass("active");
            $('#liPaso4').find("a").removeClass("active");
            $('#liPaso5').find("a").removeClass("active");
            $('#liPaso6').find("a").removeClass("active");
            $('#liPaso7').find("a").removeClass("active");
            $('#btnPaso1').show();
            $('#btnPaso2').hide();
            $('#btnPaso3').hide();
            $('#btnPaso4').hide();
            $('#btnPaso5').hide();
            $('#btnPaso6').hide();
            $('#btnPaso7').hide();
        } else if (paso == 2) {
            if (!validaPasoUno()) {
                $('#liPaso2').find("a").addClass("active");
                $('#liPaso1').find("a").removeClass("active");
                $('#liPaso3').find("a").removeClass("active");
                $('#liPaso4').find("a").removeClass("active");
                $('#liPaso5').find("a").removeClass("active");
                $('#liPaso6').find("a").removeClass("active");
                $('#liPaso7').find("a").removeClass("active");
                siguiente('divGeneral', 'sigejupe/imputadosSolicitudes/frmImputadosSolicitudesAuto.php', 2);
                $('#divDatosAudiencias').hide('');
                $('#btnPaso2').show();
                $('#btnPaso1').hide();
                $('#btnPaso3').hide();
                $('#btnPaso4').hide();
                $('#btnPaso5').hide();
                $('#btnPaso6').hide();
                $('#btnPaso7').hide();
            }
        } else if (paso == 3) {
            if (!validaPasoUno() && !validaPasoDos()) {
                $('#liPaso3').find("a").addClass("active");
                $('#liPaso1').find("a").removeClass("active");
                $('#liPaso2').find("a").removeClass("active");
                $('#liPaso4').find("a").removeClass("active");
                $('#liPaso5').find("a").removeClass("active");
                $('#liPaso6').find("a").removeClass("active");
                $('#liPaso7').find("a").removeClass("active");
                siguiente('divGeneral', 'sigejupe/ofendidosSolicitudes/frmOfendidosSolicitudesAuto.php', 3);
                $('#divDatosAudiencias').hide('');
                $('#btnPaso3').show();
                $('#btnPaso2').hide();
                $('#btnPaso1').hide();
                $('#btnPaso4').hide();
                $('#btnPaso5').hide();
                $('#btnPaso6').hide();
                $('#btnPaso7').hide();
            }
        } else if (paso == 4) {
            if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres()) {
                $('#liPaso4').find("a").addClass("active");
                $('#liPaso1').find("a").removeClass("active");
                $('#liPaso2').find("a").removeClass("active");
                $('#liPaso3').find("a").removeClass("active");
                $('#liPaso5').find("a").removeClass("active");
                $('#liPaso6').find("a").removeClass("active");
                $('#liPaso7').find("a").removeClass("active");
                siguiente('divGeneral', 'sigejupe/delitosSolicitudes/frmDelitosAuto.php', 4);
                $('#divDatosAudiencias').hide('');
                $('#btnPaso4').show();
                $('#btnPaso2').hide();
                $('#btnPaso1').hide();
                $('#btnPaso3').hide();
                $('#btnPaso5').hide();
                $('#btnPaso6').hide();
                $('#btnPaso7').hide();
            }
        } else if (paso == 5) {
            if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro()) {
                $('#liPaso5').find("a").addClass("active");
                $('#liPaso1').find("a").removeClass("active");
                $('#liPaso2').find("a").removeClass("active");
                $('#liPaso3').find("a").removeClass("active");
                $('#liPaso4').find("a").removeClass("active");
                $('#liPaso6').find("a").removeClass("active");
                $('#liPaso7').find("a").removeClass("active");
                siguiente('divGeneral', 'sigejupe/impofedelsolicitudes/frmImpofedelsolicitudesAuto.php', 5);
                $('#divDatosAudiencias').hide('');
                $('#btnPaso5').show();
                $('#btnPaso2').hide();
                $('#btnPaso1').hide();
                $('#btnPaso3').hide();
                $('#btnPaso4').hide();
                $('#btnPaso6').hide();
                $('#btnPaso7').hide();
            }
        } else if (paso == 6) {
            if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro() && !validaPasoCinco()) {
//            if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro() && !validaPasoCinco()) {
                $('#liPaso6').find("a").addClass("active");
                $('#liPaso1').find("a").removeClass("active");
                $('#liPaso2').find("a").removeClass("active");
                $('#liPaso3').find("a").removeClass("active");
                $('#liPaso4').find("a").removeClass("active");
                $('#liPaso5').find("a").removeClass("active");
                $('#liPaso7').find("a").removeClass("active");
                siguiente('divGeneral', 'sigejupe/victimas/frmVictimaSolicitudAuto.php', 6);
                $('#divDatosAudiencias').hide('');
                $('#btnPaso6').show();
                $('#btnPaso2').hide();
                $('#btnPaso1').hide();
                $('#btnPaso3').hide();
                $('#btnPaso4').hide();
                $('#btnPaso5').hide();
                $('#btnPaso7').hide();
            }
        } else if (paso == 7) {
            if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro() && !validaPasoCinco()) {
                $('#divDatosAudiencias').show('Scale');
                $('#liPaso7').find("a").addClass("active");
                $('#liPaso1').find("a").removeClass("active");
                $('#liPaso2').find("a").removeClass("active");
                $('#liPaso3').find("a").removeClass("active");
                $('#liPaso4').find("a").removeClass("active");
                $('#liPaso5').find("a").removeClass("active");
                $('#liPaso6').find("a").removeClass("active");
                siguiente('divGeneral', 'sigejupe/resumensolicitudaudiencia/frmResumensolicitudaudienciaAuto.php', 7);
                $('#btnPaso7').show();
                $('#btnPaso2').hide();
                $('#btnPaso1').hide();
                $('#btnPaso3').hide();
                $('#btnPaso4').hide();
                $('#btnPaso5').hide();
                $('#btnPaso6').hide();
            }
        } else if (paso == 'enviar') {
            if ($("#tribunal").val() == "") {
                $("#tribunal").val('N')
            }
            if ($("#mismoJuzgador").val() == "") {
                $("#mismoJuzgador").val('N')
            }
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/resumensolicitudaudiencia/ResumensolicitudaudienciaFacade.php",
                async: true,
                dataType: "json",
                data: {
                    accion: "enviarSolicitud",
                    idSolicitud: $("#hddIdSolicitudAudiencia").val(),
                    activo: 'S',
                    tribunal: $("#tribunal").val(),
                    mismoJuzgador: $("#mismoJuzgador").val(),
                    imputadosReclusos: $("#hddImputadosReclusos").val(),
                },
                beforeSend: function (objeto) {
                    $('#idEnviar').hide('');
                    $("html, body").animate({scrollTop: 0}, "slow");
                    $("#divAlertInfo").html("");
                    $("#divAlertInfo").html("Envio en proceso....");
                    $("#divAlertInfo").show("");
                },
                success: function (datos) {
                    $("#divAlertInfo").hide("");
                    $('#idEnviar').show('');
                    data = eval('(' + datos + ')');
                    if (data.status == "ok") {
                        tieneAudiencia();
                    } else {
                        $("html, body").animate({scrollTop: 0}, "slow");
                        $('#divAlertWarning').html(data.texto);
                        $('#divAlertWarning').show('');
                        setTimeAlert("divAlertWarning");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#idEnviar').show('');
                    alert("Error en la peticion de Enviar solicitud de audiencia:\n\n" + otroobj);
                }
            });
        } else if (paso == 'acuse') {

            var idSolicitud = $("#hddIdSolicitudAudiencia").val();
            window.open("../fachadas/sigejupe/resumensolicitudaudiencia/ResumensolicitudaudienciaFacade.php?idSolicitud=" + idSolicitud + "&accion=consultaAcuseAuto", 'Reporte', '"scrollbars=1,width=800, height=1000');
        }
    };
    validaPasoUno = function () {
        var error = true;
        if ($('#hddIdSolicitudAudiencia').val() != "") {
            error = false;
        } else {
            $("html, body").animate({scrollTop: 0}, "slow");
            $("#divAlertWarning").html("");
            $("#divAlertWarning").html("Seleccionar una solicitud de audiencia");
            $("#divAlertWarning").show("");
            setTimeAlert("divAlertWarning");
            error = true;
        }
        return error;
    }

    validaPasoDos = function () {
        var error = true;
        $.ajax({
            type: "POST", global: false,
            url: "../fachadas/sigejupe/imputadossolicitudes/ImputadossolicitudesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {
                action: "consultarTotal",
                idSolicitudAudiencia: $("#hddIdSolicitudAudiencia").val(),
                activo: 'S'
            },
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                if (datos.status == 'ok') {
                    if (datos.totalCount != 0) {
                        error = false;
                    }
                } else {
                    var mensaje = "";
                    for (var i = 0; i < datos.msj.length; i++) {
                        mensaje += datos.msj[i] + "<br>";
                    }


                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html(mensaje);
                    $("#divAlertWarning").show("");
                    setTimeAlert("divAlertWarning");
                    $("html, body").animate({scrollTop: 0}, "slow");
                    error = true;
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
            }
        });
        return error;
    };
    validaPasoTres = function () {
        var error = true;
        $.ajax({
            type: "POST", global: false,
            url: "../fachadas/sigejupe/ofendidossolicitudes/OfendidossolicitudesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {
                accion: "consultarTotal",
                idSolicitudAudiencia: $("#hddIdSolicitudAudiencia").val(),
                activo: 'S'
            },
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                if (datos.status == 'ok') {
                    if (datos.totalCount != 0) {
                        error = false;
                    }
                } else {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html(datos.msj);
                    $("#divAlertWarning").show("");
                    setTimeAlert("divAlertWarning");
                    $("html, body").animate({scrollTop: 0}, "slow");
                    error = true;
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
            }
        });
        return error;
    };
    validaPasoCuatro = function () {
        var error = true;
        $.ajax({
            type: "POST", global: false,
            url: "../fachadas/sigejupe/delitossolicitudes/DelitossolicitudesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {
                accion: "consultarTotal",
                idSolicitudAudiencia: $("#hddIdSolicitudAudiencia").val(),
                activo: 'S'
            },
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                if (datos.status == 'ok') {
                    if (datos.totalCount != 0) {
                        error = false;
                    }
                } else {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html(datos.msj);
                    $("#divAlertWarning").show("");
                    setTimeAlert("divAlertWarning");
                    $("html, body").animate({scrollTop: 0}, "slow");
                    error = true;
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
            }
        });
        return error;
    };
    validaPasoCinco = function () {
        var error = true;
        $.ajax({
            type: "POST", global: false,
            url: "../fachadas/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {
                accion: "validaRelacion",
                idSolicitudAudiencia: $("#hddIdSolicitudAudiencia").val(),
                activo: 'S'
            },
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                if (datos.estatus == 'ok') {
                    error = false;
                } else {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html(datos.mensaje);
                    $("#divAlertWarning").show("");
                    setTimeAlert("divAlertWarning");
                    $("html, body").animate({scrollTop: 0}, "slow");
                    error = true;
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
            }
        });
        return error;
    };

    tieneAudiencia = function () {
        if ($("#hddIdSolicitudAudiencia").val() != "") {
            var error = true;
            $.ajax({
                type: "POST",
                global: false,
                url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    accion: "consultarTieneAudiencia",
                    idSolicitudAudiencia: $("#hddIdSolicitudAudiencia").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (data) {
                    $("#divDatosAudiencias").html("");
                    if (data.totalCount > 0) {
                        var fechaInicio = data.data[0].fechaInicial;
                        var elemTotal = fechaInicio.split(' ');
                        fechaAux = elemTotal[0];
                        horaAux = elemTotal[1];
                        var fecha = fechaAux.split('-');
                        var fechaInicioNormal = fecha[2] + "/" + fecha[1] + "/" + fecha[0] + " " + horaAux;


                        var fechaFin = data.data[0].fechaFinal;
                        var elemTotalFin = fechaFin.split(' ');
                        fechaAuxFin = elemTotalFin[0];
                        horaAuxFin = elemTotalFin[1];
                        var fechaFin = fechaAuxFin.split('-');
                        var fechaFinNormal = fechaFin[2] + "/" + fechaFin[1] + "/" + fechaFin[0] + " " + horaAuxFin;



                        var table = "";
                        table += "<table whidth='75%' align='center' border='0' rules='none'>";
                        table += "<tr><td colspan='2'><b><center>LA AUDIENCIA YA HA SIDO ENV\u00cdADA</center></b></td></tr>";
                        table += "<tr><td colspan='2'><b><center>DATOS DE LA AUDIENCIA</center></b></td></tr>";
                        table += "<tr><td colspan='2'><br></td></tr>";
                        table += "<tr><td whidth='35%' align='right'><b>Fecha y hora inicio: </b></td><td whidth='65%' align='center'> " + fechaInicioNormal + "</td><tr>";
                        table += "<tr><td whidth='35%' align='right'><b>Fecha y hora fin: </b></td><td whidth='65%'  align='center'> " + fechaFinNormal + "</td></tr>";
                        table += "<tr><td whidth='35%' align='right'><b>Sala:</b></td><td whidth='65%'align='center'>  POR CONFIRMAR </td></tr>";
                        table += "<tr><td whidth='35%' align='right'><b>" + data.data[0].descCarpeta + ":</b></td><td whidth='65%'> " + data.data[0].numero + "/" + data.data[0].anio + "</td></tr>";
                        table += "</table>";
                        $('#divDatosAudiencias').html(table);
                    } else {
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
            return error;
        }
    };

    $(function () {
        siguientePaso(1);
    });
</script>