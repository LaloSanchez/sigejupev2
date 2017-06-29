var Consultas = function () {
    return {
        btnRespuesta: 0,
        inicia: function (type, pagAux) {
            this.getInformationGeneral(type, pagAux);
        },
        getInformationGeneral: function (type, pagAux) {
            var pag = 1;
            if (pagAux == 0 || pagAux == "" || pagAux == "undefined") {
                pag = $("#cmbPaginacion").val();
            }
            var cantReg = $("#cmbNumReg").val();
            $(".paginacion").hide();
            $("#informationTable").DataTable().destroy();
            $("#informationTable > tbody ").remove();
            $("#informationTable").parent().parent().hide();
            var fechaTxt = $("#fechaConsultar").val();
            var fecha = this.convertFecha(fechaTxt);
            var fechaTxtEnd = $("#fechaConsultarEnd").val();
            var fechaEnd = this.convertFecha(fechaTxtEnd);
            if (fecha == "" || fechaEnd == "") {
                $(".infos").html("<div class='alert alert-info text-center' >INGRESE UN RANGO DE FECHAS</div>");
                return;
            }
            var numeroMuestra = $("#txtNumMuestraConsultar").val().trim();
            var anioMuestra = $("#txtAniMuestraConsultar").val().trim();

            if (numeroMuestra != "" || anioMuestra != "") {
                fecha = "";
                fechaEnd = "";
            }

            $(".buttons").hide();
            var self = this;
            var datos = {
                accion: "consultarMuestraInformacion",
                numero: numeroMuestra,
                anio: anioMuestra,
                fechaRegistro: fecha,
                fechaRegistroEnd: fechaEnd,
                type: type,
                pag: pag,
                cantxPag: cantReg
            }

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php",
                data: datos,
                async: true,
                beforeSend: function () {
                    $(".infos").html("<div class='alert alert-info text-center' >Cargando Informaci&oacute;n Espere..</div>")
                },
                success: function (datos) {
//                    console.log('-->' + datos);
                    try {
                        $("#informationTable > tbody ").remove();
                        datos = eval("(" + datos + ")");
                        $(".infos").html("");
                        if (datos.status == "OK") {
                            var table = "<tbody>";
                            var i = 0;
                            $('#cmbPaginacion').find('option').remove().end();
                            var options = "";
                            var pagina = 1;

                            $.each(datos.paginas, function (index, val) {
                                if (datos.pagina == val) {
                                    pagina = val;
                                    options += "<option value='" + val + "' selected='selected' >" + val + "</option>";
                                } else {
                                    options += "<option value='" + val + "' >" + val + "</option>";
                                }
                            });

                            var count = 0;
                            if (pagina != 1) {
                                count = (pagina - 1) * cantReg;
                            }

                            if (datos.datos != '')
                            {
                                $.each(datos.datos, function (indext, valt)
                                {
                                    if (type != "4") {
                                        table += "<tr onclick= 'javascript:con.seleccionaRegistroMuestra(" + valt.idSolicitudMuestra + ", " + type + ")' >";
                                    } else {
                                        table += "<tr' >";
                                    }
                                    table += "<td>" + (count + 1) + "</td>";
                                    table += "<td>" + valt.juzgado + "</td>";
                                    table += "<td>" + valt.juez + "</td>";
                                    table += "<td>" + valt.numeroMuestra + " / " + valt.anioMuestra + "</td>";

                                    if (type != "4")
                                    {
                                        table += "<td>" + valt.solicitud.carpetaInv + "</td>";

                                        if (typeof valt.imputados != 'undefined')
                                        {
                                            table += '<td>Imputados:<br>';
                                            $.each(valt.imputados, function (i, imputado)
                                            {
                                                table += '<i class="fa fa-caret-right"></i> [' + imputado.tipo + '] ' + imputado.paterno + ' ' + imputado.materno + ' ' + imputado.nombre + '<br>';
                                            })
                                        }

                                        if (typeof valt.ofendidos != 'undefined')
                                        {
                                            table += '<br>Ofendidos:<br>';
                                            $.each(valt.ofendidos, function (i, ofendido)
                                            {
                                                table += '<i class="fa fa-caret-right"></i> [' + ofendido.tipo + '] ' + ofendido.paterno + ' ' + ofendido.materno + ' ' + ofendido.nombre + '<br>';
                                            })
                                            table += '</td>';
                                        }
                                    }

                                    table += "<td>" + self.convertirFecha(valt.fechaRegistro) + "</td>";
                                    table += "<td>" + (valt.fechaRespuesta != null ? self.convertirFecha(valt.fechaRespuesta) : 'Sin respuesta') + "</td>";
                                    table += "<td>" + (valt.fechaRespuesta != null ? valt.tiempoRespuesta : 'Sin respuesta') + "</td>";
                                    table += "<td>" + valt.estatus + "</td>";
                                    table += "</tr>";
                                    count++;
                                });
                            }

                            table += "</tbody>";
                            $("#cmbPaginacion").append(options);
                            $("#informationTable").append(table);
                            $("#informationTable").parent().parent().show();
                            $("#informationTable").DataTable().destroy();
                            $("#informationTable").DataTable();
                            $("#totalReg").html("<strong> Total: " + datos.total + " </strong>");
                            $(".buttons").show();
                            $(".paginacion").show();
                        } else {
                            $(".paginacion").hide();
                            $("#informationTable").parent().parent().hide();
                            $(".infos").html("<div class='alert alert-warning text-center' >No Hay Resultados</div>");
                            $(".buttons").show();
                        }
                    } catch (ex) {
                        $(".buttons").show();
                        $(".infos").html("<div class='alert alert-danger text-center' >Ocurrio un Error.." + ex + "</div>")
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $(".paginacion").hide();
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Error en la petici&oacute;n: <br />" + otroobj);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                    $(".buttons").show();
                }
            });
        },
        convertirFecha: function (fechaTxt) {
            if (fechaTxt != "" || fechaTxt != 0)
            {
                fechaTxt = fechaTxt.split(' ');
                fechaD = fechaTxt[0].split('-');
                var nuevaFecha = fechaD[2] + '/' + fechaD[1] + '/' + fechaD[0] + ' ' + fechaTxt[1];
                return nuevaFecha;
            } else
                return '';
        },
        convertFecha: function (fechaTxt) {
            if (fechaTxt != "" || fechaTxt != 0) {
                fechaTxt = fechaTxt.split("/");
                var nuevaFecha = fechaTxt[2] + '-' + fechaTxt[1] + "-" + fechaTxt[0];
                return nuevaFecha;
            } else
                return '';
        },
        limpiar: function () {
            $("#txtNumMuestraConsultar").val("");
            $("#txtAniMuestraConsultar").val("");
            $("#fechaConsultar").val(moment().format('DD/MM/YYYY'));
            $("#fechaConsultarEnd").val(moment().format('DD/MM/YYYY'));
            $("#informationTable").DataTable().destroy();
            $("#informationTable > tbody ").remove();
            $("#informationTable").parent().parent().hide();
            $(".infos").html("");
            $(".paginacion").hide();
        },
        seleccionaRegistroMuestra: function (idSolicitudMuestra, typeConsulta) {
            if (idSolicitudMuestra != 0)
            {
                $(window).scrollTop($(".consultaInformacon").offset().top - 100);
                // @todo
//                mS.limpiarTablasSinCheck("tblPersonas");
//                mS.limpiarTablasSinCheck("tblObjetos");
//                mS.limpiarTablasSinCheck("tblImputados");
//                mS.limpiarTablasSinCheck("tblVictimas");
//                mS.limpiarTablasSinCheck("tblDelitos");
//                mS.limpiarTablasSinCheck("tblMpsResponsables");

                this.solicitudInformacionMuestra(idSolicitudMuestra, typeConsulta);
                $("#impresionSolicitud").html('<button class="btn btn-primary" id="imprimir" name="imprimir" onclick="javascript:cateos.imprimirComprobante(' + idSolicitudMuestra + ')">Imprimir Solicitud</button>');
            }
        },
        solicitudInformacionMuestra: function (registro, typeConsulta) {
            var self = this;
            $.ajax({
                url: "../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php",
                data: "accion=consultaDetalleMuestra&idSolicitudMuestra=" + registro,
                type: "POST",
                success: function (data) {
//                    console.log('solicitud:'  + data);
                    try
                    {
                        //mS.cveRegistro = 0;
                        var datos = eval("(" + data + ")")
                        if (datos.type == "OK") {
                            muestra = datos.data;
                            var i = 0;
                            var tableP = "<tbody>";
                            //$.each(datos.data, function (index, value) 
                            //{
                            $(".nmmuestra").text(muestra.respuesta.numeroMuestra + "/" + muestra.respuesta.anioMuestra);
                            $(".fecsol").text(self.convertirFecha(muestra.fechaRegistro));
                            $(".nommp").text(muestra.nombreUsuario);
                            $(".emailMp").html("<a href='mailto:" + muestra.respuesta.email.toLowerCase() + "' > " + muestra.respuesta.email.toLowerCase() + "</a>");
                            if (muestra.carpetaInv.trim() != "") {
                                $(".carpinv").text(muestra.carpetaInv);
                                $(".carpinv").parent().parent().show();
                            } else {
                                $(".carpinv").parent().parent().hide();
                            }
                            if (muestra.nuc.trim() != "") {
                                $(".nucIn").text(muestra.nuc);
                                $(".nucIn").parent().parent().show();
                            } else {
                                $(".nucIn").parent().parent().hide();
                            }

                            $("#informeSolicitudTexto").html(muestra.respuesta.solicitud);

                            /*
                             * Pendiente documento
                             // Verificamos si existe un documento   
                             if (value.documento != "") {
                             var pathDocument = (value.documento).substring(9);
                             var position = (value.documento).lastIndexOf("/");
                             var name = (value.documento).substring((position + 1));
                             $("fileFound").html("<div class='text-center' ><br /><a href='../" + pathDocument + "' >ARCHIVO PROPORCIONADO POR EL MINISTERIO P&Uacute;BLICO PARA LA SOLICITUD DE CATEO</a><br /><br /></div>");
                             } else {
                             $("fileFound").html(" *No se Encontraron resultados <p>&nbsp;</p>");
                             }
                             */

                            if (typeof muestra.imputadosMuestras != 'undefined')
                            {
                                tableP = '<tbody>';
                                $.each(muestra.imputadosMuestras, function (index, imputado)
                                {
                                    /**
                                     * @todo checar origen
                                     */
                                    //if (imputado.cveOrigen == 1) 
                                    //{
                                    if (typeof imputado != 'undefined')
                                    {
                                        $("#cmbGeneroPersona").val(imputado.cveGenero);
                                        tableP += "<tr>";
                                        tableP += "<td>" + imputado.tipo + "</td>";
                                        tableP += "<td>" + imputado.nombre + " " + imputado.paterno + " " + imputado.materno + "</td>";
                                        tableP += "<td>" + imputado.domicilio + "</td>";
                                        tableP += "<td>" + $("#cmbGeneroPersona option:selected").text() + "</td>";
                                        tableP += "<td>" + imputado.muestra + "</td>";
                                        tableP += "</tr>";
                                        $("#cmbGeneroPersona").val(0)
                                    }
                                    //}
                                });
                                tableP += "</tbody>";
                                $("#tblImputadosMuestras").append(tableP);
                            }

                            if (typeof muestra.ofendidosMuestras != 'undefined')
                            {
                                tableP = '<tbody>';
                                $.each(muestra.ofendidosMuestras, function (index, ofendido)
                                {
                                    /**
                                     * @todo checar origen
                                     */
                                    //if (imputado.cveOrigen == 1) 
                                    //{
                                    if (typeof ofendido != 'undefined')
                                    {
                                        $("#cmbGeneroPersona").val(ofendido.cveGenero);
                                        tableP += "<tr>";
                                        tableP += "<td>" + ofendido.tipo + "</td>";
                                        tableP += "<td>" + ofendido.nombre + " " + ofendido.paterno + " " + ofendido.materno + "</td>";
                                        tableP += "<td>" + ofendido.domicilio + "</td>";
                                        tableP += "<td>" + $("#cmbGeneroPersona option:selected").text() + "</td>";
                                        tableP += "<td>" + ofendido.muestra + "</td>";
                                        tableP += "</tr>";
                                        $("#cmbGeneroPersona").val(0)
                                    }
                                    //}
                                });
                                tableP += "</tbody>";
                                $("#tblOfendidosMuestras").append(tableP);
                            }

                            if (typeof muestra.delitos != 'undefined')
                            {
                                tableD = '<tbody>';
                                $.each(muestra.delitos, function (index, delito)
                                {
                                    tableD += "<tr>";
                                    tableD += "<td>" + delito.desDelito + "</td>";
                                    tableD += "</tr>";
                                });
                                tableP += "</tbody>";
                                $("#tblDelitos").append(tableD);
                            }

                            $("#impresionSolicitud").html('<button class="btn btn-primary" id="imprimirComprobante" name="imprimirComprobante" onclick="javascript:imprimirComprobante(' + muestra.idSolicitudMuestra + ' )"><i class="fa fa-print"></i> Imprimir Solicitud</button>');

                            if (muestra.fechaRespuesta != "") {
                                mS.cveRegistro = muestra.idSolicitudMuestra;
                                $(".buttonRespuesta").html('<button class="btn btn-primary" id="imprimirRespuesta" name="imprimirRespuesta" onclick="javascript:mS.imprimirComprobante(' + muestra.idSolicitudMuestra + ' )"><i class="fa fa-print"></i> Imprimir Respuesta</button>');
                            } else {
                                $(".buttonRespuesta").html("Sin Respuesta");
                            }

                            if (typeConsulta == "1" || typeConsulta == "3") {
                                if (muestra.cveEstatusSolicitudMuestra == "1" || muestra.cveEstatusSolicitudMuestra == "2") {
                                    $("#cancelaSolicitud").show();
                                    $("#cancelaSolicitud").html('<button style="float:right" class="btn btn-danger" id="cancelar" name="cancelar" onclick="javascript:showCancelarSolicitud(' + muestra.idSolicitudMuestra + ')">Cancelar Solicitud</button>');
                                } else {
                                    $("#cancelaSolicitud").html();
                                }
                            } else {
                                $("#cancelaSolicitud").html('');
                            }

                            if (muestra.cveEstatusSolicitudMuestra == "4") {
                                $("#consultaMotivoCancela").show();
                                $("#detalleCancelaSolicitud").html(muestra.respuesta.motivoCancelacion);

                            } else {
                                $("#consultaMotivoCancela").hide();
                                $("#detalleCancelaSolicitud").html("");
                            }
                            //i++;
                            //);

                            $(".consultaInformacon").hide("fade");
                            $(".InformationCteo").show("fade", function () {
                                $(window).scrollTop($(".InformationCteo").offset().top - 100);
                                if (!$("#collapseSolicitudCateoTab").hasClass("in"))
                                    $("#SolicitudCateoTab a").click();
                            });

                        }
                    } catch (ex) {
                        $("cancelSolicitud").show();
                        $("divAlertWarning").html("");
                        $("divAlertWarning").html("Error en la petici&oacute;n: " + ex);
                        $("divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                    }
                }
            });
            return false;
        },
        Back: function () {
            $(".InformationCteo").hide("fade");
            $(".consultaInformacon").show("fade");
        },
    }
}

var imprimirComprobante = function (idMuestra) {
    var imprimir = document.getElementById('imprimir');
    imprimir.style.display = "none";
    $("#imprimir").hide();
    $.ajax({
        type: "POST",
        url: "../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php",
        data: "accion=descargaSolicitudMuestra&idMuestra=" + idMuestra,
        async: true,
        dataType: "html",
        success: function (datos) {
            console.log('print: ' + datos);
            datos = eval("(" + datos + ")");
            if (datos.type == "OK") {
                $("#divAlertSuccess").html("");
                $("#divAlertSuccess").html(datos.text);
                $("#divAlertSuccess").show("slide");
                setTimeAlert("divAlertSuccess");
                window.location.href = '../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php?action=descargaSolicitudMuestraDownload&idMuestra=' + idMuestra;
                imprimir.style.display = "inline-block";
                $("#imprimir").show();
            } else {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(datos.text);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                imprimir.style.display = "inline-block";
                $("#imprimir").show();
            }
        },
        error: function (objeto, quepaso, otroobj) {
            alert("Error en la petici\u00f3n:\n <br />" + otroobj);
            imprimir.style.display = "inline-block";
            $("#imprimir").show();
        }
    });
}

var cancelarSolicitud = function (idSolicitudMuestra) {
    if ($("#textMotivoCancelacion").val() != "")
    {
        $(".buttons").hide();
        var datos = {
            accion: "cancelarSolicitudMuestra",
            idSolicitudMuestra: idSolicitudMuestra,
            motivoCancelacion: $("#textMotivoCancelacion").val()
        }
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php",
            data: datos,
            async: false,
            beforeSend: function () {
            },
            success: function (datos) {
                console.log('cancel: ' + datos);
                datos = eval("(" + datos + ")");
                if (datos.type == "OK") {
                    alert(datos.text);
                    $("#motivoCancela").hide();
                    $("#confirmaCancelaSolicitud").html('');

                    $("#consultaMotivoCancela").show();
                    $("#detalleCancelaSolicitud").html($("#textMotivoCancelacion").val());
                } else {
                    alert(datos.text);
                }
                $(".buttons").show();
            },
            error: function (objeto, quepaso, otroobj) {
                $(".buttons").show();
            }
        });
    } else {
        alert("especifique motivo de la cancelacion del cateo");
    }
}

var showCancelarSolicitud = function (idSolicitudMuestra)
{
    $("#cancelaSolicitud").hide('');
    $("#cancelaSolicitud").html('');
    $("#motivoCancela").show();
    $("#confirmaCancelaSolicitud").html('<button style="float:right" class="btn btn-danger" id="cancelar" name="cancelar" onclick="javascript:cancelarSolicitud(' + idSolicitudMuestra + ')">Cancelar Solicitud</button>');
}