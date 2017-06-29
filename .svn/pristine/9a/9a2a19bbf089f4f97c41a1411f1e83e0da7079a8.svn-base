<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    if (isset($_POST['idSolicitud'])) {
        $idSolicitudAudiencia = $_POST['idSolicitud'];
    } else {
        $idSolicitudAudiencia = "";
    }
    ?>
    <!doctype html>
    <style type="text/css">
        .mayuscula{  
            text-transform: uppercase;  
        } 
    </style>
    <div class="panel panel-default">
        <div class="panel-body">
            <input type="hidden" readonly class="form-control" id="hddIdSolicitudAudiencia" value="<?php echo $idSolicitudAudiencia; ?>">
            <div id="divFormulario" class="form-horizontal">

                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbJuzgados">Juzgados</label>
                    <div class="col-xs-9">
                        <select id="cmbJuzgados" class="form-control" name="cmbJuzgados">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>  
                </div>  
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbTipoCarpeta">Tipo Carpeta</label>
                    <div class="col-xs-9">
                        <select id="cmbTipoCarpeta" class="form-control" name="cmbTipoCarpeta">
                        <!--<select id="cmbTipoCarpeta" class="form-control" name="cmbTipoCarpeta" onchange="validaCarpeta();">-->
                            <option>Seleccione una opcion</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">N&uacute;mero</label>
                    <div class="col-xs-9">
                        <input type="text" id="txtNumero" class="form-inline" id="txtNumero" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="txtAnio" id="txtAnio" placeholder="A&ntilde;o">
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Carpeta de Investigaci&oacute;n</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control mayuscula" id="txtCarpetaInvestigacion" placeholder="Carpeta de Investigaci&oacute;n">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">NUC (N&uacute;mero unico de causa)</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control mayuscula " id="txtNumeroUnicoCausa" placeholder="NUC">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">N&uacute;mero de Imputados</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="txtNumeroImputados" placeholder="N&uacute;mero de Imputados">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">N&uacute;mero de Ofendidos</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="txtNumeroOfendidos" placeholder="N&uacute;mero de Ofendidos">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">N&uacute;mero de Delitos</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="txtNumeroDelitos" placeholder="N&uacute;mero de Delitos">
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbConsignacion">Consignaci&oacute;n</label>
                    <div class="col-xs-9">
                        <select id="cmbConsignacion" class="form-control" name="cmbConsignacion">
                            <option>Seleccione una opcion</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbAudiencia">Audiencia</label>
                    <div class="col-xs-9">
                        <select id="cmbAudiencia" class="form-control" name="cmbAudiencia">
                            <option>Seleccione una opcion</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Observaciones:</label>
                    <div class="col-xs-9">
                        <textarea style="resize: none;" rows="5" id="txtObservaciones" class="form-control mayuscula" placeholder="Observaciones"></textarea>
                    </div>
                </div>


                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" value="Guardar" onclick="saveStepOne()">                                    
                        <input type="submit" class="btn btn-primary" value="Limpiar" onclick="cleanStepOne()">                                    
                    </div>
                </div>
            </div>

            <div id="divConsulta"  class="form-horizontal" style="display: none">                            
                <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">                                    
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbJuzgadosConsulta">Juzgados</label>
                    <div class="col-xs-9">
                        <select id="cmbJuzgadosConsulta" class="form-control" name="cmbJuzgadosConsulta">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>  
                </div>  
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbTipoCarpetaConsulta">Tipo Carpeta</label>
                    <div class="col-xs-9">
                        <select id="cmbTipoCarpetaConsulta" class="form-control" name="cmbTipoCarpetaConsulta">
                        <!--<select id="cmbTipoCarpetaConsulta" class="form-control" name="cmbTipoCarpetaConsulta" onchange="validaCarpetaConsulta();">-->
                            <option>Seleccione una opcion</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">N&uacute;mero</label>
                    <div class="col-xs-9">
                        <input type="text" id="txtNumeroConsulta" class="form-inline" id="txtNumeroConsulta" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="txtAnioConsulta" name="txtAnioConsulta" placeholder="A&ntilde;o">
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Carpeta de Investigaci&oacute;n</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="txtCarpetaInvestigacionConsulta" placeholder="Carpeta de Investigaci&oacute;n">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">NUC (N&uacute;mero unico de causa)</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="txtNumeroUnicoCausaConsulta" placeholder="NUC">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Fecha inicio</label>
                    <div class="col-xs-3">
                        <input type="text" class="form-control" id="txtFechaInicio" placeholder="Fecha Inicio">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Fecha fin</label>
                    <div class="col-xs-3">
                        <input type="text" class="form-control" id="txtFechaFin" placeholder="Fecha FIn">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" value="Consultar" onclick="selectStepOne()">                                    
                        <input type="submit" class="btn btn-primary" value="Limpiar" onclick="cleanStepOneConsult()">                                    
                    </div>
                </div>

                <div id="divResultados"></div>
            </div>
            <div class="form-group" >
                <div id="divAlertWarningSolicitud" class="alert alert-warning alert-dismissable" style="display:none;">                    
                    <strong>Advertencia!</strong> Mensaje
                </div>
                <div id="divAlertSuccesSolicitud" class="alert alert-success alert-dismissable" style="display:none;">

                    <strong>Correcto!</strong> Mensaje
                </div>
                <div id="divAlertDagerSolicitud" class="alert alert-danger alert-dismissable" style="display:none;">

                    <strong>Error!</strong> Mensaje
                </div>
                <div id="divAlertInfoSolicitud" class="alert alert-info alert-dismissable" style="display:none;">

                    <strong>Informaci&oacute;n!</strong> Mensaje
                </div>
            </div>    
        </div>
    </div>
    <script type="text/javascript">


        changeDivForm = function (opc) {
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
            } else if (opc === 2) {
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
            }
        };
        comboJuzgados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgados').empty();
                        $('#cmbJuzgados').append('<option value="">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgados').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        comboTipoCarpeta = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoCarpeta').empty();
                        $('#cmbTipoCarpeta').append('<option value="">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tipo de carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipo carpeta:\n\n" + otroobj);
                }
            });
        };
        comboJuzgadosConsulta = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgadosConsulta').empty();
                        $('#cmbJuzgadosConsulta').append('<option value="">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgadosConsulta').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        comboTipoCarpetaConsulta = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoCarpetaConsulta').empty();
                        $('#cmbTipoCarpetaConsulta').append('<option value="">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbTipoCarpetaConsulta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tipo de carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipo carpeta:\n\n" + otroobj);
                }
            });
        };
        comboConsignacion = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/consignaciones/ConsignacionesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbConsignacion').empty();
                        $('#cmbConsignacion').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbConsignacion').append('<option value="' + object.cveConsignacion + '">' + object.desConsignacion + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar consignacion:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de consignacion:\n\n" + otroobj);
                }
            });
        };
        comboAudiencia = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/autoresaudiencias/AutoresaudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbAudiencia').empty();
                        $('#cmbAudiencia').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbAudiencia').append('<option value="' + object.cveCatAudiencia + '">' + object.desCatAudiencia + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar audiencia:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
        };
        validateConsultStep1 = function () {
            var mensaje = "";
            var error = false;

            if ($('#txtFechaInicio').val() != "" && $('#txtFechaFin').val() == "") {
                mensaje += "*Seleccione una fecha fin \n";
                error = true;
            }
            if ($('#txtFechaInicio').val() == "" && $('#txtFechaFin').val() != "") {
                mensaje += "*Seleccione una fecha inicio \n";
                error = true;
            }
            if (error) {
                alert(mensaje);
            }

            return error;
        };
        validateStep1 = function () {
            var mensaje = "";
            var error = false;
            if ($('#cmbJuzgados').val() == "" || $('#cmbJuzgados').val() == "0") {
                mensaje += "*Seleccione un juzgado \n";
                error = true;
            }
            if ($('#cmbTipoCarpeta').val() != 0) {
                if ($('#txtNumero').val() == "" || $('#txtNumero').val() == "0") {
                    mensaje += "*Ingrese el n\u00famero de la carpeta \n";
                    error = true;
                }

                if ($('#txtAnio').val() == "" || $('#txtAnio').val() == "0") {
                    mensaje += "*Ingrese el a\u00f1o de la carpeta \n";
                    error = true;
                }
                if ($('#txtAnio').val().length < 4) {
                    mensaje += "*El  a\u00f1o debe ser de 4 d\u00edgitos\n";
                    error = true;
                }
            } else {
                if (($('#txtCarpetaInvestigacion').val() == "" || $('#txtCarpetaInvestigacion').val() == "0") && ($('#txtNumeroUnicoCausa').val() == "" || $('#txtNumeroUnicoCausa').val() == 0)) {
                    mensaje += "*Ingrese la carpeta de investigaci\u00f3n y/o NUC \n";
                    error = true;
                }
            }
            if ($('#txtNumeroImputados').val() == "" || $('#txtNumeroImputados').val() == "0") {
                mensaje += "*Ingrese el n\u00famero de imputados \n";
                error = true;
            }

            if ($('#txtNumeroOfendidos').val() == "" || $('#txtNumeroOfendidos').val() == "0") {
                mensaje += "*Ingrese el n\u00famero de ofendidos \n";
                error = true;
            }

            if ($('#txtNumeroDelitos').val() == "" || $('#txtNumeroDelitos').val() == "0") {
                mensaje += "*Ingrese n\u00famero de delitos \n";
                error = true;
            }
            if ($('#cmbConsignacion').val() == "" || $('#cmbConsignacion').val() == "0") {
                mensaje += "*Seleccione consignaci\u00f3n \n";
                error = true;
            }
            if ($('#cmbAudiencia').val() == "" || $('#cmbAudiencia').val() == "0") {
                mensaje += "*Ingrese tipo de audiencia \n";
                error = true;
            }
            if (error) {
                alert(mensaje);
            }

            return error;
        };
        saveStepOne = function () {
            var error = false;
            if (!validateStep1()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/solicitudesaudiencias/SolicitudesaudienciasFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "guardar",
                        idSolicitudAudiencia: $('#hddIdSolicitudAudiencia').val(),
                        cveJuzgado: $('#cmbJuzgados').val(),
                        cveTipoCarpeta: $('#cmbTipoCarpeta').val(),
                        numero: $('#txtNumero').val(),
                        anio: $('#txtAnio').val(),
                        carpetaInv: $('#txtCarpetaInvestigacion').val().toUpperCase(),
                        nuc: $('#txtNumeroUnicoCausa').val().toUpperCase(),
                        numImputados: $('#txtNumeroImputados').val(),
                        numOfendidos: $('#txtNumeroOfendidos').val(),
                        numDelitos: $('#txtNumeroDelitos').val(),
                        cveConsignacion: $('#cmbConsignacion').val(),
                        cveCatAudiencia: $('#cmbAudiencia').val(),
                        observaciones: $('#txtObservaciones').val().toUpperCase()
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos.status == 'Ok') {
                            $("#divAlertSuccesSolicitud").html("");
                            $("#divAlertSuccesSolicitud").html("La solicitud de guardo de forma correcta");
                            $("#divAlertSuccesSolicitud").show("");
                            setTimeAlert("divAlertSuccesSolicitud");
                            parent.$('#hddIdSolicitudAudiencia').val(datos.resultado[0].idSolicitudAudiencia);
                            $('#hddIdSolicitudAudiencia').val(datos.resultado[0].idSolicitudAudiencia);
                            $('#cmbJuzgados').val(datos.resultado[0].cveJuzgado);
                            $('#cmbTipoCarpeta').val(datos.resultado[0].cveTipoCarpeta);
                            $('#txtNumero').val(datos.resultado[0].numero);
                            $('#txtAnio').val(datos.resultado[0].anio);
                            $('#txtCarpetaInvestigacion').val(datos.resultado[0].carpetaInv);
                            $('#txtNumeroUnicoCausa').val(datos.resultado[0].nuc);
                            $('#txtNumeroImputados').val(datos.resultado[0].numImputados);
                            $('#txtNumeroOfendidos').val(datos.resultado[0].numOfendidos);
                            $('#txtNumeroDelitos').val(datos.resultado[0].numDelitos);
                            $('#cmbConsignacion').val(datos.resultado[0].cveConsignacion);
                            $('#cmbAudiencia').val(datos.resultado[0].cveCatAudiencia);
                            $('#txtObservaciones').val(datos.resultado[0].observaciones);
                        } else {
                            $("#divAlertWarningSolicitud").html("");
                            $("#divAlertWarningSolicitud").html(datos.Error);
                            $("#divAlertWarningSolicitud").show("");
                            setTimeAlert("divAlertWarningSolicitud");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                    }
                });
            } else {
                error = false;
            }
            return error;
        };
        selectStepOne = function () {
            var error = false;
            if (!validateConsultStep1()) {
                parent.$('#hddIdSolicitudAudiencia').val("");
                $('#hddIdSolicitudAudiencia').val("");
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/solicitudesaudiencias/SolicitudesaudienciasFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar",
                        idSolicitudAudiencia: $('#hddIdSolicitudAudiencia').val(),
                        cveJuzgado: $('#cmbJuzgadosConsulta').val(),
                        cveTipoCarpeta: $('#cmbTipoCarpetaConsulta').val(),
                        numero: $('#txtNumeroConsulta').val(),
                        anio: $('#txtAnioConsulta').val(),
                        carpetaInv: $('#txtCarpetaInvestigacionConsulta').val(),
                        nuc: $('#txtNumeroUnicoCausaConsulta').val(),
                        activo: 'S',
                        fechaInicio: $('#txtFechaInicio').val(),
                        fechaFin: $('#txtFechaFin').val()
                    },
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                    },
                    success: function (datos) {
                        ToggleLoading(2);
                        if (datos.totalCount > 0) {
                            var table = "";
                            table += '<table id="tblResultados" class="table table-hover table-striped table-bordered">';
                            table += '<thead>';
                            table += '<tr>';
                            table += '<th>Juzgado</th>';
                            table += '<th>N&uacute;mero</th>';
                            table += '<th>carpetaInv</th>';
                            table += '<th>NUC</th>';
                            table += '<th>Audiencia</th>';
                            table += '<th>Registro</th>';
                            table += '</tr>';
                            table += '</thead>';
                            table += "<tbody>";
                            for (var i = 0; i < datos.totalCount; i++) {
                                table += "<tr>";
                                table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].desJuzgado + "</td>";
                                if (datos.data[i].numero != "" && datos.data[i].numero != null) {
                                    table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].numero + "/" + datos.data[i].anio + "</td>";
                                } else {
                                    table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >N/A</td>";
                                }
                                if (datos.data[i].carpetaInv != "" && datos.data[i].carpetaInv != null) {
                                    table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].carpetaInv + "</td>";
                                } else {
                                    table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >N/A</td>";
                                }
                                if (datos.data[i].nuc != "" && datos.data[i].nuc != null) {
                                    table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].nuc + "</td>";
                                } else {
                                    table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >N/A</td>";
                                }
                                table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].desAudiencia + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].fechaRegistro + "</td>";
                                table += "</tr>";
                            }
                            table += "</tbody>";
                            table += "</table>";
                            $('#divResultados').html(table);
                            $('#tblResultados').DataTable();
    //                    $('#tblResultados').prop('tbody', table);
                        } else {
                            $("#divResultados").html("");
                            $("#divAlertInfoSolicitud").html("");
                            $("#divAlertInfoSolicitud").html("No se encontraron resultados");
                            $("#divAlertInfoSolicitud").show("");
                            setTimeAlert("divAlertInfoSolicitud");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                    }
                });
            } else {
                error = false;
            }
            return error;
        };

        consutaId = function (id) {
            /*aqui toda peticion ajax POST*/
            $("#tabla").hide();
            $("#pasos").fadeIn(3000);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesaudiencias/SolicitudesaudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "seleccionar",
                    idSolicitudAudiencia: id,
                    cantxPag: 100,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    ToggleLoading(2);
                    console.log(datos);

                    if (datos.totalCount > 0) {
                        changeDivForm(1);
                        parent.$('#hddIdSolicitudAudiencia').val(datos.data[0].idSolicitudAudiencia);
                        $('#hddIdSolicitudAudiencia').val(datos.data[0].idSolicitudAudiencia);
                        $('#cmbJuzgados').val(datos.data[0].cveJuzgado);
                        $('#cmbTipoCarpeta').val(datos.data[0].cveTipoCarpeta);
                        $('#txtNumero').val(datos.data[0].numero);
                        $('#txtAnio').val(datos.data[0].anio);
                        $('#txtCarpetaInvestigacion').val(datos.data[0].carpetaInv);
                        $('#txtNumeroUnicoCausa').val(datos.data[0].nuc);
                        $('#txtNumeroImputados').val(datos.data[0].numImputados);
                        $('#txtNumeroOfendidos').val(datos.data[0].numOfendidos);
                        $('#txtNumeroDelitos').val(datos.data[0].numDelitos);
                        $('#cmbConsignacion').val(datos.data[0].cveConsignacion);
                        $('#cmbAudiencia').val(datos.data[0].cveCatAudiencia);
                        $('#txtObservaciones').val(datos.data[0].observaciones);
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });


        };

        validaCarpeta = function () {
            if ($('#cmbTipoCarpeta').val() == 0) {
                $('#txtNumero').val("");
                $('#txtAnio').val("");
                $('#txtNumero').attr('disabled', 'disabled');
                $('#txtAnio').attr('disabled', 'disabled');
                $('#txtCarpetaInvestigacion').removeAttr('disabled');
                $('#txtNumeroUnicoCausa').removeAttr('disabled');
            } else {
                $('#txtNumero').removeAttr('disabled');
                $('#txtAnio').removeAttr('disabled');
                $('#txtCarpetaInvestigacion').val("");
                $('#txtNumeroUnicoCausa').val("");
                $('#txtCarpetaInvestigacion').attr('disabled', 'disabled');
                $('#txtNumeroUnicoCausa').attr('disabled', 'disabled');
            }
        };
        validaCarpetaConsulta = function () {
            if ($('#cmbTipoCarpetaConsulta').val() == 0) {
                $('#txtNumeroConsulta').val("");
                $('#txtAnioConsulta').val("");
                $('#txtNumeroConsulta').attr('disabled', 'disabled');
                $('#txtAnioConsulta').attr('disabled', 'disabled');
                $('#txtCarpetaInvestigacionConsulta').removeAttr('disabled');
                $('#txtNumeroUnicoCausaConsulta').removeAttr('disabled');
            } else {
                $('#txtNumeroConsulta').removeAttr('disabled');
                $('#txtAnioConsulta').removeAttr('disabled');
                $('#txtCarpetaInvestigacion').val("");
                $('#txtNumeroUnicoCausa').val("");
                $('#txtCarpetaInvestigacionConsulta').attr('disabled', 'disabled');
                $('#txtNumeroUnicoCausaConsulta').attr('disabled', 'disabled');
            }
        };
        cleanStepOne = function () {
            parent.$('#hddIdSolicitudAudiencia').val("");
            $('#hddIdSolicitudAudiencia').val("");
            $('#cmbJuzgados').val("");
            $('#cmbTipoCarpeta').val("");
            $('#txtNumero').val("");
            $('#txtAnio').val("");
            $('#txtCarpetaInvestigacion').val("");
            $('#txtNumeroUnicoCausa').val("");
            $('#txtNumeroImputados').val("");
            $('#txtNumeroOfendidos').val("");
            $('#txtNumeroDelitos').val("");
            $('#cmbConsignacion').val(0);
            $('#cmbAudiencia').val(0);
            $('#txtObservaciones').val("");
    //        validaCarpeta();
        };
        cleanStepOneConsult = function () {
            parent.$('#hddIdSolicitudAudiencia').val("");
            $('#hddIdSolicitudAudiencia').val("");
            $('#cmbJuzgadosConsulta').val("");
            $('#cmbTipoCarpetaConsulta').val("");
            $('#txtNumeroConsulta').val("");
            $('#txtAnioConsulta').val("");
            $('#txtFechaInicio').val("");
            $('#txtFechaFin').val("");
            $('#txtCarpetaInvestigacionConsulta').val("");
            $('#txtNumeroUnicoCausaConsulta').val("");
            $('#divResultados').html("");
            $('#divResultados').html("");
    //        validaCarpetaConsulta();
        };

        $(function () {
            $("#txtFechaInicio").datepicker({
                changeMonth: true,
                changeYear: true,
                format: "dd/mm/yy"

            });
            $("#txtFechaFin").datepicker({
                changeMonth: true,
                changeYear: true,
                format: "dd/mm/yy"
            });
            comboJuzgados();
            comboTipoCarpeta();
            comboConsignacion();
            comboAudiencia();
            comboJuzgadosConsulta();
            comboTipoCarpetaConsulta();
            $('#txtNumeroImputados').validaCampo('0123456789');
            $('#txtNumeroOfendidos').validaCampo('0123456789');
            $('#txtNumeroDelitos').validaCampo('0123456789');
            $('#txtNumero').validaCampo('0123456789');
            $('#txtAnio').validaCampo('0123456789');
            $('#txtNumeroConsulta').validaCampo('0123456789');
            $('#txtAnioConsulta').validaCampo('0123456789');

            if ($('#hddIdSolicitudAudiencia').val() != "") {
                consutaId($('#hddIdSolicitudAudiencia').val());
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