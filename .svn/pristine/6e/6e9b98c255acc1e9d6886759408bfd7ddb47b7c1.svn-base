<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    ?>
    <style>

        .tblGridAgrega{
            border: 1px solid #999;
            font-family: arial;
            font-size: 12px;
            border-collapse: collapse;
            border-color: #ffffff;
        }

        th, td {
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-right: 1px solid #ffffff;
        }

        .trGridAgrega{
            color: #ffffff;
            background-color: #881518;
        }

    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Eliminar Causas
            </h5>
        </div>
        <div class="panel-body">

            <div class="col-xs-12">
                <div class="form-horizontal">
                    <input type="hidden" readonly disabled id="hddIdCarpetaJudicial" name="hddIdCarpetaJudicial"/>

                    <div class="form-group col-xs-12">
                        <label for="juzgado" class="control-label col-md-3">Juzgado</label>
                        <div class="col-md-6">
                            <select name="cmbJuzgado" id="cmbJuzgado" class="form-control">
                            </select>
                        </div>
                    </div>

                    <div class="form-group col-xs-12">
                        <label for="carpetas" class="control-label col-md-3">Tipo Carpeta</label>

                        <div class="col-md-6">
                            <select name="cmbTiposCarpetas" id="cmbTiposCarpetas" class="form-control">
                            </select>
                        </div>
                    </div>                

                    <div class="form-group col-xs-12">
                        <label class="control-label col-md-3" for="carpetas">Num. Causa</label>
                        <div class="col-md-6">
                            <input type="text" id="numero" name="numero" class="form-inline" placeholder="N&uacute;mero de causa"/>/
                            <input type="text" id="anio" name="anio" maxlength="4" class="form-inline" placeholder="A&ntilde;o de causa"/>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="form-group col-xs-12 text-center">
                        <button name="consultar" id="consultar" class="btn btn-primary" onclick="Consultar();">Consultar</button>
                        <button name="limpiar" id="limpiar" class="btn btn-primary" onclick="Limpiar();">Limpiar</button>
                        <button name="eliminar" id="btneliminar" class="btn btn-primary" style="display:none;"  onclick="eliminar();">Eliminar</button>
                    </div>

                    <div class="clearfix"></div>

                    <br><br>
                    <div class="form-group">
                        <div id="divAlertWarningEliminar" class="alert alert-warning alert-dismissable" style="display:none;">                    
                            <strong>Advertencia!</strong> Mensaje
                        </div>
                        <div id="divAlertSuccesEliminar" class="alert alert-success alert-dismissable" style="display:none;">

                            <strong>Correcto!</strong> Mensaje
                        </div>
                        <div id="divAlertDagerEliminar" class="alert alert-danger alert-dismissable" style="display:none;">

                            <strong>Error!</strong> Mensaje
                        </div>
                        <div id="divAlertInfoEliminar" class="alert alert-info alert-dismissable" style="display:none;">

                            <strong>Informaci&oacute;n!</strong> Mensaje
                        </div>
                    </div>    
                    <div id="divConsultaGrid" style="display: none" class="col-md-12">
                        <div id="divResultados" class="col-md-12"></div>
                    </div>
                    <div id="divResultados1" style="display:none;"></div>

                </div>

            </div>


        </div>
    </div>
    <!--</div>-->
    <script type="text/javascript">
        comboJuzgados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgado').empty();
                        $('#cmbJuzgado').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgado').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
        };
        comboTiposCarpetas = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTiposCarpetas').empty();
                        $('#cmbTiposCarpetas').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbTiposCarpetas').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Tipos Carpetas:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Tipos Carpetas:\n\n" + otroobj);
                }
            });
        };

        validate = function () {
            var mensaje = "";
            var error = true;
            if ($('#cmbJuzgado').val() == "" || $('#cmbJuzgado').val() == "0") {
                mensaje += "*Seleccione un juzgado<br>";
                error = false;
            }
            if ($('#cmbTiposCarpetas').val() == "" || $('#cmbTiposCarpetas').val() == "0") {
                mensaje += "*Seleccione el tipo de carpeta<br>";
                error = false;
            }
            if ($('#numero').val() == "" || $('#numero').val() == "0") {
                mensaje += "*Ingrese un n&uacute;mero <br>";
                error = false;
            }
            if ($('#anio').val() == "" || $('#anio').val() == "0") {
                mensaje += "*Ingrese un a&ntilde;o <br>";
                error = false;
            }
            if (!error) {
                $("#divAlertWarningEliminar").html("");
                $("#divAlertWarningEliminar").html(mensaje);
                $("#divAlertWarningEliminar").show("");
                setTimeAlert("divAlertWarningEliminar");
            }
            return error;
        };

        Consultar = function () {
            var error = true;
            if (validate()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultarCarpetasJudicialesDetalle",
                        cveJuzgado: $('#cmbJuzgado').val(),
                        cveTipoCarpeta: $('#cmbTiposCarpetas').val(),
                        numero: $('#numero').val(),
                        anio: $('#anio').val()
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        $("#divResultados").html("");
                        if (datos.status == "OK") {
                            var html = "";
                            html += '<table id="tblResultados" class="table table-hover table-striped table-bordered">';
                            html += '<tr>';
                            html += '<td>No</td>';
                            html += '<td>No. Causa</td>';
                            html += '<td>Estatus Carpeta</td>';
                            html += '<td>Consignacion</td>';
                            html += '<td>Fecha Registro</td>';
                            html += '<td>Fecha Radicadion</td>';
                            html += '</tr>';

                            for (var i = 0; i < datos.totalCount; i++) {
                                html += '<tr onclick="ConsultarId(' + datos.data[i].idCarpetaJudicial + ');">';
                                html += '<td>' + (i + 1) + '</td>';
                                html += '<td>' + datos.data[i].numero + "/" + datos.data[i].anio + '</td>';
                                html += '<td>' + datos.data[i].desEstatusCarpeta + '</td>';
                                html += '<td>' + datos.data[i].desConsignacion + '</td>';
                                html += '<td>' + datos.data[i].fechaRegistro + '</td>';
                                html += '<td>' + datos.data[i].fechaRadicacion + '</td>';
                                html += '</tr>';
                            }

                            html += '</table>';
                            $('#divConsultaGrid').show("");
                            $("#divResultados").html(html);
                            $("#divResultados").show("");
                            $("#btneliminar").show("");

                        } else {
                            $("#divAlertWarningEliminar").html("");
                            $("#divAlertWarningEliminar").html(datos.msj);
                            $("#divAlertWarningEliminar").show("");
                            setTimeAlert("divAlertWarningEliminar");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Tipos Carpetas:\n\n" + otroobj);
                    }
                });
            } else {
                error = false;
            }
            return error;
        };
        ConsultarId = function (id) {
            var error = true;
            if (validate()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultaEliminaCausa",
                        idCarpetaJudicial: id
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        $("#divResultados1").html("");
                        if (datos.status == "ok") {

                            $('#divConsultaGrid').hide("");
                            $("#divResultados").html("");

                            $('#hddIdCarpetaJudicial').val(datos.data[0].idCarpetaJudicial)
                            var table = "";
                            table += '<table border="1" width="80%" align="center" class="tblGridAgrega">';
                            table += '<tr><td colspan="2" align="center"><b>DATOS DE LA CAUSA</b></td></tr>';
                            table += '<tr>';
                            table += '<td width="50%">';
                            table += '<NUMERO: ' + datos.data[0].numero + "/" + datos.data[0].anio + "<br>";
                            if (datos.data[0].nuc != "") {
                                table += 'NUC: ' + datos.data[0].nuc + "<br>";
                            }
                            if (datos.data[0].carpetaInv != "") {
                                table += 'CARPETA DE INVESTIGACI&Oacute;N: ' + datos.data[0].carpetaInv + "<br>";
                            }
                            table += '</td>';
                            table += '<td width="50%">';
                            table += 'OBSERVACIONES: ' + datos.data[0].observaciones + "<br>";
                            table += '</td>';
                            table += '</tr>';
                            table += '</table><br>';

                            table += '<table border="1" width="80%" align="center"  class="tblGridAgrega">';
                            table += '<tr><td colspan="2" align="center"><b>IMPUTADOS</b></td></tr>';
                            if (datos.data[0].imputados.length != 0) {
                                for (var i = 0; i < datos.data[0].imputados.length; i++) {
                                    table += '<tr>';
                                    table += '<td width="50%">';
                                    if (datos.data[0].imputados[i].cveTipoPersona == '1') {
                                        table += "IMPUTADO: " + datos.data[0].imputados[i].nombre + " " + datos.data[0].imputados[i].paterno + " " + datos.data[0].imputados[i].materno + "<br>";
                                    } else {
                                        table += "IMPUTADO: " + datos.data[0].imputados[i].nombreMoral + "<br>";
                                    }
                                    table += '</td>';
                                    table += '<td>';
                                    if (datos.data[0].imputados[i].domicilio.length != 0) {
                                        for (var x = 0; x < datos.data[0].imputados[i].domicilio.length; x++) {
                                            table += "DOMICILIO:" + datos.data[0].imputados[i].domicilio[x].direccion + " " + datos.data[0].imputados[i].domicilio[x].colonia + " " + datos.data[0].imputados[i].domicilio[x].numExterior + " " + datos.data[0].imputados[i].domicilio[x].cp + "<br>";
                                        }
                                    } else {
                                        table += "SIN DOMICILIO <br>";
                                    }
                                    if (datos.data[0].imputados[i].defensores.length != 0) {
                                        for (var d = 0; d < datos.data[0].imputados[i].defensores.length; d++) {
                                            table += "DEFENSRO:" + datos.data[0].imputados[i].defensores[d].nombre + "<br>";
                                        }
                                    } else {
                                        table += "SIN DEFENSRO <br>";
                                    }
                                    table += '</td>';
                                    table += "</tr>";
                                }

                            } else {
                                table += "<tr>";
                                table += '<td width="50%">';
                                table += 'No se encontraron imputados';
                                table += '</td>';
                                table += '<td width="50%">';
                                table += '</td>';
                                table += "</tr>";
                            }
                            table += '</table><br>';
                            table += '<table border="1" width="80%" align="center" class="tblGridAgrega">';
                            table += '<tr><td colspan="2"  align="center"><b>OFENDIDOS</b></td></tr>';
                            if (datos.data[0].ofendidos.length != 0) {
                                for (var i = 0; i < datos.data[0].ofendidos.length; i++) {
                                    table += '<tr>';
                                    table += '<td width="50%">';
                                    if (datos.data[0].ofendidos[i].cveTipoPersona == '1') {
                                        table += "OFENDIDO: " + datos.data[0].ofendidos[i].nombre + " " + datos.data[0].ofendidos[i].paterno + " " + datos.data[0].ofendidos[i].materno + "<br>";
                                    } else {
                                        table += "OFENDIDO: " + datos.data[0].ofendidos[i].nombreMoral + "<br>";
                                    }
                                    table += '</td>';
                                    table += '<td>';
                                    if (datos.data[0].ofendidos[i].domicilio.length != 0) {
                                        for (var x = 0; x < datos.data[0].ofendidos[i].domicilio.length; x++) {
                                            table += "DOMICILIO: " + datos.data[0].ofendidos[i].domicilio[x].direccion + " " + datos.data[0].ofendidos[i].domicilio[x].colonia + " " + datos.data[0].ofendidos[i].domicilio[x].numExterior + " " + datos.data[0].ofendidos[i].domicilio[x].cp + "<br>";
                                        }
                                    } else {
                                        table += "SIN DOMICILIO <br>";
                                    }
                                    if (datos.data[0].ofendidos[i].defensores.length != 0) {
                                        for (var d = 0; d < datos.data[0].ofendidos[i].defensores.length; d++) {
                                            table += "DEFENSRO: " + datos.data[0].ofendidos[i].defensores[d].nombre + "<br>";
                                        }
                                    } else {
                                        table += "SIN DEFENSRO <br>";
                                    }
                                    table += '</td>';
                                    table += '</tr>';
                                }

                            } else {
                                table += '<tr>';
                                table += '<td width="50%">';
                                table += 'No se encontraron ofendidos';
                                table += '</td>';
                                table += '<td width="50%">';
                                table += '</td>';
                                table += '</tr>';
                            }
                            table += '</table><br>';
                            table += '<table border="1" width="80%" align="center" class="tblGridAgrega">';
                            table += '<tr><td align="center"><b>DELITOS</b></td></tr>';
                            table += "<tr>";
                            if (datos.data[0].delitos.length != 0) {
                                table += "<td>";
                                for (var j = 0; j < datos.data[0].delitos.length; j++) {
                                    table += (j + 1) + ".- " + datos.data[0].delitos[j].descDelito + "<br>";
                                }
                                table += "<td>";
                            } else {
                                table += "<td>No se encontraron delitos</td>";

                            }
                            table += "</tr>";
                            table += '</table>';
                            $("#divResultados1").html(table);
                            $("#divResultados1").show("");
                            $("#btneliminar").show("");

                        } else {
                            $("#divAlertWarningEliminar").html("");
                            $("#divAlertWarningEliminar").html(datos.msj);
                            $("#divAlertWarningEliminar").show("");
                            setTimeAlert("divAlertWarningEliminar");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Tipos Carpetas:\n\n" + otroobj);
                    }
                });
            } else {
                error = false;
            }
            return error;
        };

        eliminar = function () {
            if ($('#hddIdCarpetaJudicial').val() != "" || $('#hddIdCarpetaJudicial').val() != "0") {
                bootbox.dialog({
                    message: "\u00bfDesea eliminar el registro?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminaCausa",
                                        idCarpetaJudicial: $('#hddIdCarpetaJudicial').val()
                                    },
                                    beforeSend: function (objeto) {
                                    },
                                    success: function (datos) {
                                        if (datos.status == "ok") {
                                            $("#divAlertSuccesEliminar").html("");
                                            $("#divAlertSuccesEliminar").html("La causa se elimino de forma correcta");
                                            $("#divAlertSuccesEliminar").show("");
                                            setTimeAlert("divAlertSuccesEliminar");
                                            Limpiar();
                                        } else {
                                            $("#divAlertWarningEliminar").html("");
                                            $("#divAlertWarningEliminar").html(datos.mensaje);
                                            $("#divAlertWarningEliminar").show("");
                                            setTimeAlert("divAlertWarningEliminar");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                                    }
                                });
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
            } else {
                $("#divAlertWarningEliminar").html("");
                $("#divAlertWarningEliminar").html("Seleccione un registro");
                $("#divAlertWarningEliminar").show("");
                setTimeAlert("divAlertWarningEliminar");
            }

        };

        Limpiar = function () {
            $('#hddIdCarpetaJudicial').val("");
            $('#cmbJuzgado').val(0);
            $('#cmbTiposCarpetas').val(0);
            $('#numero').val("");
            $('#anio').val("");
            $("#divResultados").html("");
            $("#divResultados1").html("");
            $("#btneliminar").hide("");
        };

        $(function () {
            $('#numero').validaCampo('0123456789');
            $('#anio').validaCampo('0123456789');
            comboJuzgados();
            comboTiposCarpetas();
        });

    </script>
    <?php

} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>