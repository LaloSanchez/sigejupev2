<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
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
            width: 10.9%;
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
            background: #df3338;
        }

        .steps li a.active {
            background: #df3338;
        }

        .steps li.step, .steps li.step a {
            position: relative;
            z-index: 3;
            height: 120px;
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

        .tblGridAgrega {
            margin-top: 20px;
            font-family: arial;
            font-size: 11px;
            text-align: center;
        }

        .trGridAgrega {
            color: #ffffff !important;
            background-color: #881518 !important;
        }

        .mayuscula {
            text-transform: uppercase;
        }

        .trSeleccion:hover {
            background-color: #FFECED;
            cursor: pointer;
        }

        .requerido {
            color: darkred;
        }

        .acordeonEstilo {
            background: #881518;
            color: #ebf3f1;
        }

        .acordeonEstilo:hover {
            background: #5B9C8D;
        }

        .trGridAgregaTabla {
            color: #666666;
            background-color: #e9e7e7;
        }

        #accordion .panel-heading {
            background-color: #e9e7e7;
            color: #666666;
        }

        hr {
            margin-top: 0px !important;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Solicitudes de Audiencia de Segunda Instancia (TOCA)</h4>
        </div>
        <div class="panel-body">
            <input type="hidden" readonly class="form-control" id="hddIdSolicitudAudiencia">
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
                                <a href="#" onclick="siguientePaso(2);"><strong>Paso 2</strong><br><label class="subtitulo">Captura
                                        de imputado(s)</label></a>
                                <!--<a href="#" onclick="siguiente('divGeneral', 'sigejupe/imputadosSolicitudes/frmImputadosSOlicitudes.php', 2);"><strong>Paso 2</strong><br><h1>Imputados</h1></a>-->
                            </li>
                            <li id="liPaso3" class="step step-3 Paso3">
                                <a href="#" onclick="siguientePaso(3);"><strong>Paso 3</strong><br><label class="subtitulo">Captura
                                        de sujetos(s) pasivo(s) del delito</label></a>
                            </li>
                            <li id="liPaso8" class="step step-8 Paso8">
                                <a href="#" onclick="siguientePaso(8);"><strong>Paso 4</strong><br><label class="subtitulo">Captura
                                        de Apelante(s)</label></a>
                            </li>
                            <li id="liPaso4" class="step step-4 Paso4">
                                <a href="#" onclick="siguientePaso(4);"><strong>Paso 5</strong><br><label class="subtitulo">Captura
                                        de delito(s)</label></a>
                            </li>
                            <li id="liPaso5" class="step step-5 Paso5">
                                <a href="#" onclick="siguientePaso(5);"><strong>Paso 6</strong><br><label class="subtitulo">Definici&oacute;n
                                        de relaci&oacute;n</label></a>
                            </li>
                            <li id="liPaso6" class="step step-6 Paso6">
                                <a href="#" onclick="siguientePaso(6);"><strong>Paso 7</strong><br><label class="subtitulo">Violencia
                                        de g&eacute;nero</label></a>
                            </li>
                            <li id="liPaso7" class="step step-7 Paso7">
                                <a href="#" onclick="siguientePaso(7);"><strong>Paso 8</strong><br><label class="subtitulo">Resumen</label></a>
                            </li>
                            <li id="liPaso9" class="step step-9 Paso9">
                                <a href="#" onclick="siguientePaso(9);"><strong>Paso 9</strong><br><label class="subtitulo">Asignaci&oacute;n
                                        de audiencia</label></a>

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
                    <div id="divDatosAudiencias"></div>
                    <br>
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
                        <button class="btn btn-primary" onclick="siguientePaso(9)"> Siguiente ></button>
                    </div>
                    <div id="btnPaso8" style="display:none;">
                        <button class="btn btn-primary" onclick="siguientePaso(3)">< Anterior</button>
                        <button class="btn btn-primary" onclick="siguientePaso(4)">Siguiente ></button>
                    </div>
                    <div id="btnPaso9" style="display:none;">
                        <button class="btn btn-primary" onclick="siguientePaso('enviar')">< Anterior</button>
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
                siguiente('divGeneral', 'sigejupe/solicitudAudiencias/frmSolicitudAudienciasToca.php', 1);
                $('#divDatosAudiencias').html('');
                $('#divDatosAudiencias').hide('');
                $('#liPaso1').find("a").addClass("active");
                $('#liPaso2').find("a").removeClass("active");
                $('#liPaso3').find("a").removeClass("active");
                $('#liPaso4').find("a").removeClass("active");
                $('#liPaso5').find("a").removeClass("active");
                $('#liPaso6').find("a").removeClass("active");
                $('#liPaso7').find("a").removeClass("active");
                $('#liPaso8').find("a").removeClass("active");
                $('#liPaso9').find("a").removeClass("active");

                $('#btnPaso1').show();
                $('#btnPaso2').hide();
                $('#btnPaso3').hide();
                $('#btnPaso4').hide();
                $('#btnPaso5').hide();
                $('#btnPaso6').hide();
                $('#btnPaso7').hide();
                $('#btnPaso9').hide();
            } else if (paso == 2) {
                if (!validaPasoUno()) {
                    $('#liPaso2').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    $('#liPaso7').find("a").removeClass("active");
                    $('#liPaso8').find("a").removeClass("active");
                    $('#liPaso9').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/imputadosSolicitudes/frmImputadosSolicitudesToca.php', 2);
                    $('#divDatosAudiencias').hide('');
                    $('#btnPaso2').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                    $('#btnPaso7').hide();
                    $('#btnPaso9').hide();
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
                    $('#liPaso8').find("a").removeClass("active");
                    $('#liPaso9').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/ofendidosSolicitudes/frmOfendidosSolicitudesToca.php', 3);
                    $('#divDatosAudiencias').hide('');
                    $('#btnPaso3').show();
                    $('#btnPaso2').hide();
                    $('#btnPaso1').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                    $('#btnPaso7').hide();
                    $('#btnPaso9').hide();
                }
            } else if (paso == 4) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validapasoOcho()) {
                    $('#liPaso4').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    $('#liPaso7').find("a").removeClass("active");
                    $('#liPaso8').find("a").removeClass("active");
                    $('#liPaso9').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/delitosSolicitudes/frmDelitosToca.php', 4);
                    $('#divDatosAudiencias').hide('');
                    $('#btnPaso4').show();
                    $('#btnPaso2').hide();
                    $('#btnPaso1').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                    $('#btnPaso7').hide();
                    $('#btnPaso9').hide();
                }
            } else if (paso == 5) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validapasoOcho() && !validaPasoCuatro()) {
                    $('#liPaso5').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    $('#liPaso7').find("a").removeClass("active");
                    $('#liPaso8').find("a").removeClass("active");
                    $('#liPaso9').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/impofedelsolicitudes/frmImpofedelsolicitudesToca.php', 5);
                    $('#divDatosAudiencias').hide('');
                    $('#btnPaso5').show();
                    $('#btnPaso2').hide();
                    $('#btnPaso1').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso6').hide();
                    $('#btnPaso7').hide();
                    $('#btnPaso9').hide();
                }
            } else if (paso == 6) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validapasoOcho() && !validaPasoCuatro() && !validaPasoCinco()) {
    //            if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro() && !validaPasoCinco()) {
                    $('#liPaso6').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso7').find("a").removeClass("active");
                    $('#liPaso8').find("a").removeClass("active");
                    $('#liPaso9').find("a").removeClass("active");

                    siguiente('divGeneral', 'sigejupe/victimas/frmVictimaSolicitudToca.php', 6);
                    $('#divDatosAudiencias').hide('');
                    $('#btnPaso6').show();
                    $('#btnPaso2').hide();
                    $('#btnPaso1').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso7').hide();
                    $('#btnPaso9').hide();
                }
            } else if (paso == 7) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validapasoOcho() && !validaPasoCuatro() && !validaPasoCinco()) {

                    $('#liPaso7').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    $('#liPaso8').find("a").removeClass("active");
                    $('#liPaso9').find("a").removeClass("active");

                    siguiente('divGeneral', 'sigejupe/resumensolicitudaudiencia/frmResumensolicitudaudienciaToca.php', 7);
                    $('#divDatosAudiencias').hide('');

                    $('#btnPaso7').show();
                    $('#btnPaso2').hide();
                    $('#btnPaso1').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                    $('#btnPaso9').hide();
                }
            } else if (paso == '8') {

                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro() && !validaPasoCinco()) {
                    $('#liPaso8').find("a").addClass("active");
                    $('#liPaso7').find("a").removeClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    $('#liPaso9').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/apelantesSolicitudes/frmApelantesSolicitudesToca.php', 8);
                    $('#divDatosAudiencias').hide('');

                    $('#btnPaso8').hide();
                    $('#btnPaso7').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso1').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                    $('#btnPaso9').hide();
                }

            } else if (paso == '9') {

                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validapasoOcho() && !validaPasoCuatro() && !validaPasoCinco()) {
                    $('#divDatosAudiencias').show('Scale');
                    $('#liPaso9').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    $('#liPaso7').find("a").removeClass("active");
                    $('#liPaso8').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/solicitudessegundainstancia/frmAsignaraudienciamanual.php', 8);
                    $('#btnPaso9').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                    $('#btnPaso7').hide();
                    $('#btnPaso8').hide();
                }

            } else if (paso == 'enviar') {

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/resumensolicitudaudiencia/ResumensolicitudaudienciaFacade.php",
                    async: true,
                    dataType: "json",
                    data: {
                        accion: "enviarSolicitud",
                        idSolicitud: $("#hddIdSolicitudAudiencia").val(),
                        imputadosReclusos: $("#hddImputadosReclusos").val(),
                        activo: 'S'
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
                        data = eval('(' + datos + ')');
                        $('#idEnviar').show('');
                        if (data.status == "ok") {
                            var fechaInicio = data.fechaInicial;
                            var elemTotal = fechaInicio.split(' ');
                            fechaAux = elemTotal[0];
                            horaAux = elemTotal[1];
                            var fecha = fechaAux.split('-');
                            var fechaInicioNormal = fecha[2] + "/" + fecha[1] + "/" + fecha[0] + " " + horaAux;


                            var fechaFin = data.fechaFinal;
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
                            table += "<tr><td whidth='35%' align='right'><b>Fecha y hora inicio: </b></td><td whidth='65%' align='center'> " + fechaInicioNormal + "<td><tr>";
                            table += "<tr><td whidth='35%' align='right'><b>Fecha y hora fin: </b></td><td whidth='65%'  align='center'> " + fechaFinNormal + "<td></tr>";
                            table += "<tr><td whidth='35%' align='right'><b>Sala:</b></td><td whidth='65%'  align='center'> POR CONFIRMAR < /td></tr > ";
                            table += "</table>";

                            $("html, body").animate({scrollTop: 0}, "slow");

                            $('#divAlertSucces').html(data.texto);
                            $('#divAlertSucces').show('');
                            setTimeAlert("divAlertSucces");
                            $('#divDatosAudiencias').html(table);
                            $('#divDatosAudiencias').show('');

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
                type: "POST",
                url: "../fachadas/sigejupe/imputadossolicitudes/ImputadossolicitudesFacade.Class.php",
                global: false,
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
                type: "POST",
                url: "../fachadas/sigejupe/ofendidossolicitudes/OfendidossolicitudesFacade.Class.php",
                global: false,
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
                type: "POST",
                url: "../fachadas/sigejupe/delitossolicitudes/DelitossolicitudesFacade.Class.php",
                global: false,
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
                type: "POST",
                url: "../fachadas/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesFacade.Class.php",
                global: false,
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

        //valida paso 4 en vista captura de apelantes
        validapasoOcho = function () {
            var error = true;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/apelantessolicitudes/ApelantessolicitudesFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {
                    accion: "validaApelantes",
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
                    alert("Error en la peticion de Consulta de validacion de apelantes:\n\n" + otroobj);
                }
            });
            return error;
        };

        audienciasJuzgadores = function (idAudienciaSolicitud) {
            if (idAudienciaSolicitud != '') {

                var table = '';
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/audienciasjuzgador/AudienciasjuzgadorFacade.Class.php",
                    global: false,
                    async: false,
                    dataType: "json",
                    data: {
                        accion: "juzgadoresByCveAudiencia",
                        idAudiencia: idAudienciaSolicitud,
                        activo: 'S'
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (data) {
                        if (data.estatus == 'ok') {

                            $.each(data.data, function (i, v) {
                                table += "<tr><td whidth='35%' align='right'><b>" + v.desFuncionJuzgador + " : </b></td><td whidth='65%'  align='center'> " + v.juzgador + "<td></tr>";
                            });

                        } else {
                            alert('ocurrio un error al obtener los datos del juzgador de la audiencia');
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Consulta de audiencias juzgadores:\n\n" + otroobj);
                    }
                });


            }

            return table;
        }

        tieneAudiencia = function () {
            if ($("#hddIdSolicitudAudiencia").val() != "") {
                var error = true;
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        accion: "consultar",
                        idSolicitudAudiencia: $("#hddIdSolicitudAudiencia").val(),
                        activo: 'S'
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (data) {
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
                            table += "<tr><td whidth='35%' align='right'><b>Fecha y hora inicio: </b></td><td whidth='65%' align='center'> " + fechaInicioNormal + "<td><tr>";
                            table += "<tr><td whidth='35%' align='right'><b>Fecha y hora fin: </b></td><td whidth='65%'  align='center'> " + fechaFinNormal + "<td></tr>";
                            table += "<tr><td whidth='35%' align='right'><b>Sala:</b></td><td whidth='65%'align='center'>" + data.data[0].desSala + "</td></tr>";

                            var idAudiencia = data.data[0].idAudiencia;

                            table += audienciasJuzgadores(idAudiencia);

                            table += "</table>";

                            $('#divDatosAudiencias').html(table);
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
    <?php

} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>