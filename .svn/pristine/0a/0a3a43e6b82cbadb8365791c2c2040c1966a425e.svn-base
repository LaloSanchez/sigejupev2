<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    $fecha = date("d/m/Y");
    ?>
    <style type="text/css">
        .mayuscula{  
            text-transform: uppercase;  
        } 
        .requerido {
            color: darkred;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                REPORTE DE SOLICITUDES
                <input type="hidden" readonly id="hddCveJuzgador" name="hddCveJuzgador">                  
            </h5>
        </div>
        <div class="panel-body">
            <input type="hidden" readonly class="form-control" id="hddIdSolicitudAudiencia" value="<?php echo $idSolicitudAudiencia; ?>">
            <div id="divInfoAdmin"  class="form-horizontal">                                                              
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbJuzgadosConsultaAdmin">Juzgados</label>
                    <div class="col-md-9">
                        <select id="cmbJuzgadosConsultaAdmin" class="form-control" name="cmbJuzgadosConsultaAdminAdmin">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>  
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbTipoCarpetaConsultaAdmin">Tipo Carpeta</label>
                    <div class="col-md-9">
                        <select id="cmbTipoCarpetaConsultaAdmin" class="form-control" name="cmbTipoCarpetaConsultaAdmin">
                        <!--<select id="cmbTipoCarpetaConsultaAdmin" class="form-control" name="cmbTipoCarpetaConsultaAdmin" onchange="validaCarpetaConsulta();">-->
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3">N&uacute;mero</label>
                    <div class="col-md-9">
                        <input type="text" id="txtNumeroConsultaAdmin" class="form-inline" id="txtNumeroConsultaAdmin" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="txtAnioConsultaAdmin" name="txtAnioConsultaAdmin" maxlength="4" placeholder="A&ntilde;o">
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Carpeta de Investigaci&oacute;n</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="txtCarpetaInvestigacionConsultaAdmin" placeholder="Carpeta de Investigaci&oacute;n">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">NUC (N&uacute;mero unico de causa)</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="txtNumeroUnicoCausaConsultaAdmin" placeholder="NUC">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Fecha inicio</label>
                    <div class="col-md-3">
                        <input type="text" id="txtFechaInicioAdmin" value="<?php echo $fecha ?>" placeholder="Fecha Inicio">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Fecha fin</label>
                    <div class="col-md-3">
                        <input type="text" id="txtFechaFinAdmin" value="<?php echo $fecha ?>" placeholder="Fecha Fin">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="submit" class="btn btn-primary" value="Consultar" onclick="consultaPasoUno(1)">   
                        <input type="submit" class="btn btn-primary" value="Limpiar" onclick="limpiarAdminAudiencias()">                                    
                    </div>
                </div>
                <div id="divConsultaGridAdmin" style="display: none" class="col-md-12">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="form-group col-md-3">
                            <label class="control-label" id="totalReg"></label>
                        </div>

                        <div id="divPaginador" class="form-group col-md-3" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacionAdmin" id="cmbPaginacionAdmin" onchange="consultaPasoUno(0);">
                                <option value="1"></option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumRegAdmin" id="cmbNumRegAdmin" onchange="consultaPasoUno(1);">
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>

                    <!--<div id="divResultadosAdmin" class="col-md-12"></div>-->
                </div>

                <div id="divResultadosAdmin"></div>


                <div id="pasos"></div>
            </div>
            <div class="form-group" >
                <div id="divAlertWarningAdmin" class="alert alert-warning alert-dismissable" style="display:none;">                    
                    <strong>Advertencia!</strong> Mensaje
                </div>
                <div id="divAlertSuccesAdmin" class="alert alert-success alert-dismissable" style="display:none;">

                    <strong>Correcto!</strong> Mensaje
                </div>
                <div id="divAlertDagerAdmin" class="alert alert-danger alert-dismissable" style="display:none;">

                    <strong>Error!</strong> Mensaje
                </div>
                <div id="divAlertInfoAdmin" class="alert alert-info alert-dismissable" style="display:none;">

                    <strong>Informaci&oacute;n!</strong> Mensaje
                </div>
            </div>    
        </div>
    </div>

    <script type="text/javascript">
        comboJuzgadosConsultaAdmin = function () {
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
                        $('#cmbJuzgadosConsultaAdmin').empty();
                        $('#cmbJuzgadosConsultaAdmin').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgadosConsultaAdmin').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
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

        comboTipoCarpetaConsultaAdmin = function () {
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
                        $('#cmbTipoCarpetaConsultaAdmin').empty();
                        $('#cmbTipoCarpetaConsultaAdmin').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if ((object.cveTipoCarpeta == '1') || (object.cveTipoCarpeta == '2') || (object.cveTipoCarpeta == '3') || (object.cveTipoCarpeta == '4') || (object.cveTipoCarpeta == '5')) {
                                    $('#cmbTipoCarpetaConsultaAdmin').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                }
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

        getPaginasAdmin = function (pag, cantReg) {
            parent.$('#hddIdSolicitudAudiencia').val("");
            $('#hddIdSolicitudAudiencia').val("");
            var pag = $("#cmbPaginacionAdmin").val();
            var cantReg = $("#cmbNumRegAdmin").val();
            $.ajax({
                type: "POST",
    //            url: "../fachadas/sigejupe/solicitudesaudiencias/SolicitudesaudienciasFacade.Class.php",
     url: "../fachadas/sigejupe/reporteSolicitudesAudiencias/reporteSolicitudesAudiencias.php",
                async: false,
                dataType: "json",
                data: {accion: "getPaginas",
                    idSolicitudAudiencia: $('#hddIdSolicitudAudiencia').val(),
                    cveJuzgado: $('#cmbJuzgadosConsultaAdmin').val(),
                    cveTipoCarpeta: $('#cmbTipoCarpetaConsultaAdmin').val(),
                    numero: $('#txtNumeroConsultaAdmin').val(),
                    anio: $('#txtAnioConsultaAdmin').val(),
                    carpetaInv: $('#txtCarpetaInvestigacionConsultaAdmin').val(),
                    nuc: $('#txtNumeroUnicoCausaConsultaAdmin').val(),
                    activo: 'S',
                    fechaInicio: $('#txtFechaInicioAdmin').val(),
                    fechaFin: $('#txtFechaFinAdmin').val(),
                    cantxPag: cantReg,
                    manual: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = datos;
                    if (json.totalCount > 0) {
                        $('#cmbPaginacionAdmin').find('option').remove().end();
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacionAdmin").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                        $("#cmbPaginacionAdmin").val(pag);
                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();
                        $("#divAlertDager").html("Error EL NUMERO DE " + tipoNumero + " NO EXISTE");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };

        validaPasoUnoAdmin = function () {
            var mensaje = "";
            var error = false;

            if ($('#txtFechaInicioAdmin').val() != "" && $('#txtFechaFinAdmin').val() == "") {
                mensaje += "*Seleccione una fecha fin \n";
                error = true;
            }
            if ($('#txtFechaInicioAdmin').val() == "" && $('#txtFechaFinAdmin').val() != "") {
                mensaje += "*Seleccione una fecha inicio \n";
                error = true;
            }
            if (error) {
                alert(mensaje);
            }

            return error;
        };

        consultaPasoUno = function (pagAux) {
    //        $("#pasos").html("");
            $("#pasos").hide("");
            var error = validaPasoUnoAdmin();
            if (!error) {
                parent.$('#hddIdSolicitudAudiencia').val("");
                $('#hddIdSolicitudAudiencia').val("");
                var pag = 0;
                if (pagAux == 0) {
                    pag = $("#cmbPaginacionAdmin").val();
                } else {
                    pag = 1;
                }
    //            /var/www/html/sigejupev2/desarrollo/fachadas/sigejupe/reporteSolicitudesAudiencias/reporteSolicitudesAudiencias.php
                var cantReg = $("#cmbNumRegAdmin").val();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/reporteSolicitudesAudiencias/reporteSolicitudesAudiencias.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultarConGrupo",
                        idSolicitudAudiencia: $('#hddIdSolicitudAudiencia').val(),
                        cveJuzgado: $('#cmbJuzgadosConsultaAdmin').val(),
                        cveTipoCarpeta: $('#cmbTipoCarpetaConsultaAdmin').val(),
                        numero: $('#txtNumeroConsultaAdmin').val(),
                        anio: $('#txtAnioConsultaAdmin').val(),
                        carpetaInv: $('#txtCarpetaInvestigacionConsultaAdmin').val(),
                        nuc: $('#txtNumeroUnicoCausaConsultaAdmin').val(),
                        activo: 'S',
                        fechaInicio: $('#txtFechaInicioAdmin').val(),
                        fechaFin: $('#txtFechaFinAdmin').val(),
                        pag: pag,
                        cantxPag: cantReg,
                        manual: 'S'
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos.totalCount > 0) {
                            var table = "";
                            table += '<table id="tblResultados" class="table table-hover table-striped table-bordered">';
                            table += '<thead>';
                            table += '<tr>';
                            table += '<th>No</th>';
                            table += '<th>Estatus</th>';
                            table += '<th>Juzgado</th>';
                            table += '<th>Carpeta</th>';
                            table += '<th>N&uacute;mero</th>';
                            table += '<th>CarpetaInv</th>';
                            table += '<th>NUC</th>';
                            table += '<th>Audiencia</th>';
                            table += '<th>Persona que captura</th>';
                            table += '<th>Registro</th>';
                            table += '</tr>';
                            table += '</thead>';
                            table += "<tbody>";
                            for (var i = 0; i < datos.totalCount; i++) {
                                table += "<tr>";
                                table += "<td onclick=\"imprimir('" + datos.data[i].idSolicitudAudiencia + "','" + datos.data[i].desJuzgado + "')\" >" + (i + 1) + "</td>";
                                table += "<td onclick='imprimir(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].desEstatusSolictud + "</td>";
                                table += "<td onclick='imprimir(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].desJuzgado + "</td>";
                                table += "<td onclick='imprimir(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].desTipoCarpeta + "</td>";
                                if (datos.data[i].numero != "" && datos.data[i].numero != null) {
                                    table += "<td onclick='imprimir(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].numero + "/" + datos.data[i].anio + "</td>";
                                } else {
                                    table += "<td onclick='imprimir(" + datos.data[i].idSolicitudAudiencia + ")' >N/A</td>";
                                }
                                if (datos.data[i].carpetaInv != "" && datos.data[i].carpetaInv != null) {
                                    table += "<td onclick='imprimir(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].carpetaInv + "</td>";
                                } else {
                                    table += "<td onclick='imprimir(" + datos.data[i].idSolicitudAudiencia + ")' >N/A</td>";
                                }
                                if (datos.data[i].nuc != "" && datos.data[i].nuc != null) {
                                    table += "<td onclick='imprimir(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].nuc + "</td>";
                                } else {
                                    table += "<td onclick='imprimir(" + datos.data[i].idSolicitudAudiencia + ")' >N/A</td>";
                                }
                                table += "<td onclick='imprimir(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].desAudiencia + "</td>";
                                table += "<td onclick='imprimir(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].Usuario +"<br> "+datos.data[i].Grupo+ "</td>";
                                table += "<td onclick='imprimir(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].fechaRegistro + "</td>";
                                table += "</tr>";
                            }
                            table += "</tbody>";
                            table += "</table>";
                            $("#divHideForm").hide("");
                            $("#divConsultaGridAdmin").show("");
                            $('#divResultadosAdmin').html(table);
                            $("#tblResultados").DataTable({paging: false});
                            getPaginasAdmin(datos.pagina, cantReg);
                            changeDivForm(2);
    //                        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Registro de Oficios</span> - <span style='text-decoration: underline; cursor:pointer;' onclick='changeDivForm(1); $(\"#cmbPaginacionAdmin\").val(1)'>Consulta de Oficios</span> - Resultados");
                        } else {
                            $("#divResultadosAdmin").html("");
                            $("#divConsultaGridAdmin").hide("");
                            $("#divAlertWarningAdmin").html("");
                            $("#divAlertWarningAdmin").html("No se encontraron resultados");
                            $("#divAlertWarningAdmin").show("");
                            setTimeAlert("divAlertWarningAdmin");
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
        
        imprimir = function (idAudiencia) {
    //        if ($("#hddIdAudiencia").val() != "") {
              //  var idAudiencia = $("#hddIdAudiencia").val();
              ///var/www/html/sigejupev2/desarrollo/fachadas/sigejupe/reporteSolicitudesAudiencias/reporteSolicitudesAudiencias.php
                window.open("../fachadas/sigejupe/reporteSolicitudesAudiencias/reporteSolicitudesAudiencias.php?idSolicitud=" + idAudiencia + "&accion=consultaAcuseAudiencia", 'Reporte', '"scrollbars=1,width=800, height=1000');
    //        } else {
    //            $("#divAlertWarningAudiencias").html("");
    //            $("#divAlertWarningAudiencias").html("Debe de seleccionar un registro");
    //            $("#divAlertWarningAudiencias").show("");
    //            setTimeAlert("divAlertWarningAudiencias");
    //        }
        };

        seleccionar = function (id) {
            $("#pasos").show("");
            $("#hddIdSolicitudAudiencia").val(id);
            $("#divConsultaGridAdmin").hide("");
            $("#divResultadosAdmin").html("");

            $.post("sigejupe/pasosSolicitudAudiencias/frmPasosSolictitudAudiencias_adminAudiencias.php", {idSolicitud: $('#hddIdSolicitudAudiencia').val()}, function (htmlexterno) {
                $("#pasos").html(htmlexterno);
            });
        };

        limpiarAdminAudiencias = function () {
            $("#pasos").hide("");
            $('#hddIdSolicitudAudiencia').val("");
            $("#cmbNumRegAdmin").val(10);
            $("#divResultadosAdmin").html("");
            $("#divConsultaGridAdmin").hide("");
            $('#cmbJuzgadosConsultaAdmin').val("");
            $('#cmbTipoCarpetaConsultaAdmin').val("");
            $('#txtNumeroConsultaAdmin').val("");
            $('#txtAnioConsultaAdmin').val("");
            $('#txtFechaInicioAdmin').val("<?php echo $fecha ?>");
            $('#txtFechaFinAdmin').val("<?php echo $fecha ?>");
            $('#txtCarpetaInvestigacionConsultaAdmin').val("");
            $('#txtNumeroUnicoCausaConsultaAdmin').val("");
        };

        $(function () {
            $('#txtNumeroConsultaAdmin').validaCampo('0123456789');
            $('#txtAnioConsultaAdmin').validaCampo('0123456789');


            comboJuzgadosConsultaAdmin();
            comboTipoCarpetaConsultaAdmin();

            var currentDate = new Date();
            var maxDate = currentDate.setDate(currentDate.getDate());
            $("#txtFechaInicioAdmin").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            });
            $("#txtFechaFinAdmin").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
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