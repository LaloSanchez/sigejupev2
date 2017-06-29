<?php
date_default_timezone_set('America/Mexico_City');
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $cveAdscripcion = $_SESSION["cveAdscripcion"];
    echo $fecha = date("Y/m/d");
    echo "<br>";
    //echo $fecha = strtotime($fecha);
    //echo "<br>";
    //echo$fecha = $fecha + (3600 * 24); //add seconds of one day
    //echo "<br>";
    //echo$fecha = date("Y/m/d", $fecha);
    //echo "<br>";
    //echo $fechaHora = date("d/m/Y");
    ?>
    <style>
        .modal-header {
            background: #881518;        
            color: #ebf3f1;
        }
        .datepicker-days {
            width: 331px;
        }
        .datepicker-months {
            width: 331px;
        }
        .datepicker-years {
            width: 331px;
        }
        .datepicker-decades {
            width: 331px;
        }
        .flotante {
            position: fixed;
        }
        #fecha {
            margin-top: 3.5%;
        }
        @media (max-width: 1200px) {
            .flotante {
                position: relative;
            }
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Cancela Audiencia</h4>
        </div>
        <div class="panel-body">
            <div class="col-xs-12 consultaInformacon" style="border: solid 4px #5B9C8D;" >
                <br />
                <div id="divFormulario" class="form-horizontal">
                    <form name="frmSolicitud" class="form-horizontal" id="frmSolicitud" method="POST" target="oculto" enctype="multipart/form-data" onsubmit="return false;">
                        <div class="row alert alert-warning alert-dismissable" style="display:none" id="divAlertWarning" ></div>
                        <div class="row alert alert-success alert-dismissable" style="display:none" id="divAlertSuccess" ></div>

                        <div style="overflow:hidden;">
                            <div class="col-md-3">
                                <div id="cmbloadinfo">
                                    <label class=" col-md-12">Juzgado:</label>
                                    <select name="juzgado" id="juzgado" class="col-md-6 cmbJuzgados"></select>
                                </div>
                                <div id="fecha"></div>
                            </div>
                            <div class="col-md-9">
                                <div class="pre-render" >
                                </div>
                                <div class="table-responsive" >
                                    <table id="tablaAudiencias" class="table table-striped table-hover table-bordered" style="display: none" >
                                        <thead>
                                            <tr>
                                                <th style="width: 101px;" >HORARIO</th>
                                                <th>AUDIENCIA</th>
                                                <th>CAUSA</th>
                                                <th>AUX.</th>
                                                <th>SALA</th>
                                                <th>DETENIDO</th>
                                                <th>TIPO</th>
                                                <th>ESTATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="AudienciaContent" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title"><audiencia></audiencia></h4>
                </div>
                <div class="modal-body">
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="table-responsive" >
                                <table class="table table-bordered table-hover table-striped" >
                                    <tr>
                                        <th colspan="4" class="text-center" >
                                            Informaci&oacute;n de Audiencia
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="auxNumber" style="display:none" >N&uacute;mero Auxiliar</div>
                                            <div class="causaNumber" style="display:none" >N&uacute;mero de Causa</div>
                                        </th>
                                        <td><auxiliar /></td>
                                    <th>Juzgado</th>
                                    <td><juzgado /></td>
                                    </tr>
                                    <tr>
                                        <th>Sala</th>
                                        <td><sala /></td>
                                    <th>Carpeta Inv.</th>
                                    <td><carpeta /></td>
                                    </tr>
                                    <tr>
                                        <th>Audiencia</th>
                                        <td><audiencia /></td>
                                    <th>Detenido</th>
                                    <td><detenido /></td>
                                    </tr>
                                    <tr>
                                        <th>Fecha Audiencia</th>
                                        <td><faudiencia /></td>
                                    <th>Fecha Final Audiencia</th>
                                    <td><faudienciaf /></td>
                                    </tr>
                                    <tr>
                                        <th>Fase</th>
                                        <td><fase /></td>
                                    <th>Nombre Solicitante</th>
                                    <td><solicitud /></td>
                                    </tr>
                                    <tr>
                                        <th>Motivo</th>
                                        <td colspan="3" ><textarea rows="5" style="resize:none" class="form-control" ></textarea></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="cancelAudiencia" >Cancelar Audiencia</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(function () {
            var fecha = "";
            juzgadoDistrito();
            getAudiencias('<?php echo $fecha; ?>');
            $('#fecha').datetimepicker({
                locale: 'es',
                inline: true,
                sideBySide: false,
                format: "DD/MM/YYYY"
            }).on('dp.change', function (ev) {
                fecha = $('#fecha').data('date');
                var res = fecha.split("/");
                fecha = res[2] + "-" + res[1] + "-" + res[0];
                getAudiencias(fecha);
            });

            $("#juzgado").change(function () {
                fecha = $('#fecha').data('date');
                var res = fecha.split("/");
                fecha = res[2] + "-" + res[1] + "-" + res[0];
                getAudiencias(fecha);
            });

        });

        function getAudiencias(fecha) {
            $("#limpiar").trigger("click");
            $("#tablaAudiencias tbody").empty();
            var datos = "";
            var tabla = "";
            var juzgado = $("#juzgado").val();
            datos = "accion=selectAudienciasHorarios&fechaInicial=" + fecha + "&cveJuzgado=" + juzgado + "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                async: false,
                data: datos,
                beforeSend: function (objeto) {
                    $("#fecha").removeClass("flotante");
                    $("#cmbloadinfo").removeClass("flotante");
                    $("#juzgado").removeClass("col-md-12");
                    $("#juzgado").addClass("col-md-6");
                    $("#tablaAudiencias").hide();
                    $(".pre-render").html("<div class='alert alert-info text-center' >Cargando Informaci&oacute;n</div>");
                },
                success: function (datos) {
                    $(".pre-render").html("");
                    try {
                        $("#tablaAudiencias tbody > tr").remove();
                        datos = eval("(" + datos + ")");
                        if (datos.status == "ok") {

                            $.each(datos.informacion, function (index, val) {
                                if (val.data == "") {
                                    tabla += "<tr>";
                                    tabla += "<td>" + val.horario + "</td>";
                                    tabla += "<td></td>";
                                    tabla += "<td></td>";
                                    tabla += "<td></td>";
                                    tabla += "<td></td>";
                                    tabla += "<td></td>";
                                    tabla += "<td></td>";
                                    tabla += "<td></td>";
                                    tabla += "</tr>";
                                } else {
                                    $.each(val.data, function (keyData, valData) {
                                        var onclick = "";
                                        if (valData.estatusAudiencia.cveEstatusAudiencia == 1) {
                                            onclick = "onclick='javascript:cancelaAudiencia(" + valData.idAudiencia + ")' style='cursor:pointer'";
                                        }
                                        tabla += "<tr " + onclick + ">";
                                        tabla += "<td>" + valData.fechaInicial.substr(11, 5) + " - " + valData.fechaFinal.substr(11, 5) + "</td>";
                                        tabla += "<td class='audiName_" + valData.idAudiencia + " '>" + valData.cataudiencias.descripcion + "</td>";
                                        tabla += "<td>" + valData.numero + "/" + valData.anio + "</td>";
                                        tabla += "<td>" + valData.tiposcarpetas.descripcion + "</td>";
                                        tabla += "<td>" + valData.salas.descripcion + "</td>";
                                        tabla += "<td>" + valData.detenido + "</td>";
                                        tabla += "<td>" + valData.tiposaudiencias.desTipoAudiencia + "</td>";
                                        tabla += "<td>" + valData.estatusAudiencia.descripcion + "</td>";
                                        tabla += "</tr>";
                                    });
                                }
                            });

                            $("#tablaAudiencias tbody").append(tabla);
                            $("#fecha").addClass("flotante");
                            $("#cmbloadinfo").addClass("flotante");
                            $("#tablaAudiencias").show();

                        } else {
                            $("#juzgado").removeClass("col-md-6");
                            $("#juzgado").addClass("col-md-12");
                            $(".pre-render").html("<div class='alert alert-info text-center' >No hay resultados</div>");
                        }
                    } catch (e) {
                        bootbox.alert("ERROR AL SOLICITAR LAS AUDIENCIAS:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    bootbox.alert("ERROR AL OBTENER LAS AUDIENCIAS:<br />" + otroobj);
                }
            });
        }

        function cancelaAudiencia(idAudiencia) {
            $("#AudienciaContent").modal("show");
            getInformationAudiencia(idAudiencia);
            var Audi = $(".audiName_" + idAudiencia).text();
            $("audiencia").html(Audi);
            $("#cancelAudiencia").attr("onclick", "cancelar('" + idAudiencia + "')")
        }

        function getInformationAudiencia(idAudiencia) {
            var datos = "accion=getInformacionAudiencia&idAudiencia=" + idAudiencia;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                async: false,
                data: datos,
                success: function (datos) {
                    try {
                        datos = eval("(" + datos + ")");
                        if (datos.type == "OK") {
                            $.each(datos.data, function (index, val) {
                                if (val.tiposcarpetas.desTipoCarpeta != "") {
                                    $(".causaNumber").hide();
                                    $(".auxNumber").show();
                                    $("auxiliar").html(val.tiposcarpetas.desTipoCarpeta);
                                } else {
                                    $(".auxNumber").hide();
                                    $(".causaNumber").show();
                                    $("auxiliar").html(val.numero + "/" + val.anio);
                                }
                                $("sala").html(val.salas.desSala);
                                $("audiencia").html(val.cataudiencias.desCatAudiencia);
                                $("detenido").html(val.audiencia.detenido);
                                var fecha = convertirFecha(val.audiencia.fechaInicial)
                                $("faudiencia").html(fecha);
                                fecha = convertirFecha(val.audiencia.fechaFinal)
                                $("faudienciaf").html(fecha);
                                $("juzgado").html(val.juzgados.desJuzgado);
                                if (typeof val.solicitudes.carpetaInv != 'undefined') {
                                    $("carpeta").html(val.solicitudes.carpetaInv);
                                }
                                $("solicitud").html(val.solicitante);
                                $("fase").html(val.etapaProcesal.desEtapaProcesal);
                            });
                        } else {
                            bootbox.alert("NO HAY INFORMACI&Oacute;N DE LA AUDIENCIA");
                        }
                    } catch (e) {
                        bootbox.alert("ERROR AL OBTENER LA INFORMACI&Oacute;N DE AUDIENCIA " + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    bootbox.alert("ERROR EN LA PETICI&Oacute;N DE INFORMACI&Oacute;N DE AUDIENCIA, SIN EMABARGO PUEDE CONTINUAR CON EL PROCESO. <br />" + otroobj);
                }
            });
        }

        function convertirFecha(fecha) {
            if (fecha != "") {
                fecha = fecha.split(" ");
                var hr = fecha[1];
                fecha = fecha[0].split("-");
                fecha = fecha[2] + "/" + fecha[1] + "/" + fecha[0] + " " + hr;
            } else {
                fecha = "";
            }
            return fecha;
        }

        function cancelar(idAudiencia) {
            //POCESO PARA OBTENER INFORMACION DE LA AUDIENCIA DE AURONIX PARA SABER SI TIENE GRAVACIÓN
            var recording = validaVideoAuronix(idAudiencia);
            if (recording == "true") {
                var Audi = $(".audiName_" + idAudiencia).text();
                if (confirm("LA VIDEO AUDIENCIA CUENTA CON GRABACIONES. \u00BFQuieres Cancelar la Audiencia: " + Audi + " ?")) {
                    enviaCancelacion(idAudiencia);
                }
            } else {
                var Audi = $(".audiName_" + idAudiencia).text();
                var cancel = confirm("\u00BFQuieres Cancelar la Audiencia: " + Audi + " ?");
                if (cancel) {
                    enviaCancelacion(idAudiencia);
                } else {
                    $("#AudienciaContent").modal("hide");
                }

            }
        }

        function validaVideoAuronix(idAudiencia) {
            var recording = "false";
            $.ajax({
                "url": "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                "data": "idAudiencia=" + idAudiencia + "&accion=validaVideoAuronix",
                "type": "POST",
                async: false,
                beforeSend: function () {
                    $(".pre-render").html("<div class='alert alert-info text-center' >Obteniendo información de AURONIX</div>");
                },
                success: function (data) {
                    try {
                        $(".pre-render").html("");
                        var dataJson = eval("(" + data + ")");
                        recording = dataJson.recording;
                        $(".pre-render").html("");
                    } catch (ex) {
                        $(".pre-render").html("");
                    }
                },
                error: function (objeto, wh, wha) {
                    $(".pre-render").html("");
                    bootbox.alert("ERROR AL OBTENER INFORMACION DE AURONIX:\n\n" + wha);
                }
            });
            return recording;
        }

        function enviaCancelacion(idAudiencia) {
            $.ajax({
                "url": "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                "data": "idAudiencia=" + idAudiencia + "&accion=cancelarAudiencia",
                "type": "POST",
                beforeSend: function () {
                    $(".pre-render").html("<div class='alert alert-info text-center' >Cancelando Audiencia</div>");
                },
                success: function (data) {
                    try {
                        $(".pre-render").html("");
                        data = eval("(" + data + ")");
                        if (data.type == "OK") {
                            var fecha = $('#fecha').data('date');
                            var res = fecha.split("/");
                            fecha = res[2] + "-" + res[1] + "-" + res[0];
                            getAudiencias(fecha);
                            $("#divAlertSuccess").html("");
                            $("#divAlertSuccess").html(data.text);
                            $("#divAlertSuccess").show("slide");
                            setTimeAlert("divAlertSuccess");
                            $("#AudienciaContent").modal("hide");
                        } else {
                            $("#divAlertWarning").html("");
                            $("#divAlertWarning").html(data.text);
                            $("#divAlertWarning").show("slide");
                            setTimeAlert("divAlertWarning");
                            $("#AudienciaContent").modal("hide");
                        }
                        $(".pre-render").html("");
                    } catch (ex) {
                        $(".pre-render").html("");
                    }
                },
                error: function (objeto, wh, wha) {
                    $(".pre-render").html("");
                    bootbox.alert("ERROR EN LA CANCELACI&Oacute;N DE AUDIENCIAS:\n\n" + wha);
                }
            });
        }

        function juzgadoDistrito() {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", cveJuzgado: <?php echo $cveAdscripcion; ?>, activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {

                        if (datos.data[0].cveTipojuzgado == "5") {
                            comboJuzgadosSala();
                        } else {
                            var distrito = datos.data[0].cveDistrito;
                            comboJuzgados(distrito);
                        }

                    } catch (e) {
                        alert("Error al cargar Juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgados:\n\n" + otroobj);
                }
            });
        }


        function comboJuzgados(distrito) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "distrito", cveDistrito: distrito, activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('.cmbJuzgados').empty();
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('.cmbJuzgados').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                            $(".cmbJuzgados").val(<?php echo $cveAdscripcion; ?>).trigger('change');
                        }
                    } catch (e) {
                        alert("Error al cargar Juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgados distritos:\n\n" + otroobj);
                }
            });
        }

        function comboJuzgadosSala() {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarCombo", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('.cmbJuzgados').empty();
                        $('.cmbJuzgados').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('.cmbJuzgados').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                            $(".cmbJuzgados").val(<?php echo $cveAdscripcion; ?>).trigger('change');
                        }
                    } catch (e) {
                        alert("Error al cargar juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        }


    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>