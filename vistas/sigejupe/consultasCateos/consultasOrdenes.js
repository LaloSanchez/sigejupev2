var ConsultasOrdenes = function () {
    return {
        btnRespuesta: 0,
        idSolicitudOrden: 0,
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
            var fecha = this.convertirFecha(fechaTxt);
            var fechaTxtE = $("#fechaConsultarEnd").val();
            var fechaE = this.convertirFecha(fechaTxtE);
            if (fecha == "" || fechaE == "") {
                $(".infos").html("<div class='alert alert-info text-center' >INGRESE UN RANGO DE FECHAS</div>");
                return;
            }
            var numeroCateo = $("#txtNumOrdenConsultar").val().trim();
            var anioCateo = $("#txtAniOrdenConsultar").val().trim();

            if (numeroCateo != "" || anioCateo != "") {
                fecha = "";
                fechaE = "";
            }
            $(".buttons").hide();
            var self = this;
            var datos = {
                "accion": "consultarOrdenInformacion",
                "numero": numeroCateo,
                "anio": anioCateo,
                "fechaRegistro": fecha,
                "fechaRegistroEnd": fechaE,
                "type": type,
                "pag": pag,
                "cantxPag": cantReg
            }

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesordenes/SolicitudesordenesFacade.Class.php",
                data: datos,
                async: true,
                beforeSend: function () {
                    $(".infos").html("<div class='alert alert-info text-center' >Cargando Informaci&oacute;n Espere..</div>")
                },
                success: function (datos) {
                    $("#informationTable > tbody ").remove();
                    datos = eval("(" + datos + ")");
                    $(".infos").html("");
                    if (datos.type == "OK") {
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
                        if (pagina != 1) {
                            i = (pagina - 1) * cantReg;
                        }
                        $("#cmbPaginacion").append(options);
                        $("#totalReg").html("<strong> Total: " + datos.total + "</strong>");
                        $.each(datos.datos, function (index, valt) {
                            if (type == "4") {
                                if (valt.cveEstatusSolicitudOrden != "1" && valt.cveEstatusSolicitudOrden != "2") {
                                    table += "<tr onclick= 'javascript:con.seleccionaRegistro(" + valt.idOrden + ", " + type + ")' >";
                                } else {
                                    table += "<tr' >";
                                }
                            } else {
                                table += "<tr onclick= 'javascript:con.seleccionaRegistro(" + valt.idOrden + ", " + type + ")' >";
                            }
                            table += "<td>" + (i + 1) + "</td>";
                            table += "<td>" + valt.juzgado + "</td>";
                            table += "<td>" + valt.juez + "</td>";
                            var numOrden = 0, anioOrden = 0;
                            numOrden = (valt.numOrden == null) ? 0 : valt.numOrden;
                            anioOrden = (valt.anioOrden == null) ? 0 : valt.anioOrden;
                            table += "<td>" + numOrden + " / " + anioOrden + "</td>";
                            table += "<td>" + valt.numEspecializadoOrden + " / " + anioOrden + "</td>";
                            if (type != "4") {
                                var carpetaInv = 0;
                                carpetaInv = (valt.carpetaInv == null) ? "" : valt.carpetaInv;
                                table += "<td>" + carpetaInv + "</td>";
                                table += "<td>Personas : " + valt.Personas + "</td>";
                            }
                            table += "<td>" + valt.fechaRegistro + "</td>";
                            table += "<td>" + valt.fechaRespuesta + "</td>";
                            table += "<td>" + valt.tiempoRespuesta + "</td>";
                            table += "<td>" + valt.estatusOrden + "</td>";
                            table += "</tr>";
                            i++;
                        });
                        table += "</tbody>";
                        $("#informationTable").append(table);
                        $("#informationTable").parent().parent().show();
                        $("#informationTable").DataTable().destroy();
                        $("#informationTable").DataTable();
                        $(".buttons").show();
                        $(".paginacion").show();
                    } else {
                        $("#informationTable").parent().parent().hide();
                        $(".infos").html("<div class='alert alert-warning text-center' >No Hay Resultados</div>");
                        $(".buttons").show();
                        $(".paginacion").hide();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Error en la petici&oacute;n: <br />" + otroobj);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                    $(".buttons").show();
                    $(".paginacion").hide();
                }
            });
        },
        convertirFecha: function (fechaTxt) {
            if (fechaTxt != "" || fechaTxt != 0) {
                fechaTxt = fechaTxt.split("/");
                var nuevaFecha = fechaTxt[2] + '-' + fechaTxt[1] + "-" + fechaTxt[0];
                return nuevaFecha;
            } else
                return '';
        },
        limpiar: function () {
            $("#txtNumOrdenConsultar").val("");
            $("#txtAniOrdenConsultar").val("");
            $("#fechaConsultar").val(moment().format('DD/MM/YYYY'));
            $("#fechaConsultarEnd").val(moment().format('DD/MM/YYYY'));
            $("#informationTable").DataTable().destroy();
            $("#informationTable > tbody ").remove();
            $("#informationTable").parent().parent().hide();
            $(".paginacion").hide();
            $(".infos").html("")
        },
        seleccionaRegistro: function (idOrden, typeConsulta) {
            if (idOrden != 0) {
                mS.limpiarTablasSinCheck("tblPersonas");
                mS.limpiarTablasSinCheck("tblObjetos");
                mS.limpiarTablasSinCheck("tblImputados");
                mS.limpiarTablasSinCheck("tblVictimas");
                mS.limpiarTablasSinCheck("tblDelitos");
                mS.limpiarTablasSinCheck("tblMpsResponsables");
                this.solicitudInformacion(idOrden, typeConsulta);
                $("#impresionSolicitud").html('<button class="btn btn-primary" id="imprimir" name="imprimir" onclick="javascript:ordenes.imprimirComprobante(' + idOrden + ')">Imprimir Solicitud</button>');
            }
        },
        solicitudInformacion: function (registro, typeConsulta) {
            var self = this;
            $.ajax({
                url: "../fachadas/sigejupe/solicitudesordenes/SolicitudesordenesFacade.Class.php",
                data: "accion=consultarDetalleOrden&idOrden=" + registro,
                type: "POST",
                success: function (data) {
                    mS.cveRegistro = 0;
                    data = eval("(" + data + ")");
                    if (data.type == "OK") {
                        var i = 0;
                        $.each(data.data, function (index, value) {
                            self.idSolicitudOrden = value.solicitudOrden.idSolicitudOrden;
                            $(".nmcat").text(value.orden.numeroOrden + "/" + value.orden.anioOrden);
                            $(".nommp").text(value.solicitudOrden.nombreUsuario);
                            $(".emailMp").html("<a href='mailto:" + value.orden.email.toLowerCase() + "' > " + value.orden.email.toLowerCase() + "</a>");
                            $(".fecsol").text(value.solicitudOrden.fechaRegistro);
                            if (value.solicitudOrden.carpetaInv.trim() != "") {
                                $(".carpinv").text(value.solicitudOrden.carpetaInv);
                                $(".carpinv").parent().parent().show();
                            } else {
                                $(".carpinv").parent().parent().hide();
                            }
                            if (value.solicitudOrden.nuc.trim() != "") {
                                $(".nucIn").text(value.solicitudOrden.nuc);
                                $(".nucIn").parent().parent().show();
                            } else {
                                $(".nucIn").parent().parent().hide();
                            }
                            $("#informeSolicitudTexto").html(value.orden.solicitud);
                            // Verificamos si existe un documento   
                            if (value.documento != "") {
                                var pathDocument = (value.documento).substring(9);
                                var position = (value.documento).lastIndexOf("/");
                                var name = (value.documento).substring((position + 1));
                                if (value.tipodocumento == 1)
                                    $("fileFound").html("<div class='text-center' ><br /><a target='_blank' href='../" + pathDocument + "' >ARCHIVO PROPORCIONADO POR EL MINISTERIO P&Uacute;BLICO PARA LA SOLICITUD DE ORDENES DE APREHENSI&Oacute;N</a><br /><br /></div>");
                                else if (value.tipodocumento == 2)
                                    $("fileFound").html("<div class='text-center' ><br /><a target='_blank' href='../" + value.documento + "' >ARCHIVO PROPORCIONADO POR EL MINISTERIO P&Uacute;BLICO PARA LA SOLICITUD DE ORDENES DE APREHENSI&Oacute;N</a><br /><br /></div>");
                                else
                                    $("fileFound").html(" *No se Encontraron resultados <p>&nbsp;</p>");
                            } else {
                                $("fileFound").html(" *No se Encontraron resultados <p>&nbsp;</p>");
                            }
                            mS.getPersonas(value.personas);
                            mS.getImputados(value.imputados);
                            mS.getOfendidos(value.ofendidos);
                            mS.getDelitos(value.delitos);
                            mS.getMPS(value.ministeriosPublicos);
                            if (value.orden.fechaRespuesta != "") {
                                mS.cveRegistro = value.orden.idOrden;
                                $(".buttonRespuesta").html('<button class="btn btn-primary" id="imprimirRespuesta" name="imprimirRespuesta" onclick="javascript:mS.imprimirComprobante()">Imprimir Respuesta</button>');
                                if (value.orden.cveRespuestaSolicitudOrden != 1) {
                                    $(".buttonRespuestaOficio").html('<button class="btn btn-primary" id="imprimirRespuesta" name="imprimirRespuesta" onclick="javascript:con.imprimirOficio(' + value.orden.idOrden + ')">Imprimir Oficio</button>');
                                } else {
                                    $(".buttonRespuestaOficio").html('');
                                }
                            } else {
                                $(".buttonRespuesta").html("Sin Respuesta");
                                $(".buttonRespuestaOficio").html('');
                            }
                            if (typeConsulta == "1" || typeConsulta == "3") {
                                if (value.solicitudOrden.cveEstatusSolicitudOrden == "1" || value.solicitudOrden.cveEstatusSolicitudOrden == "2") {
                                    $("#cancelaSolicitud").show();
                                    $("#cancelaSolicitud").html('<button style="float:right" class="btn btn-danger" id="cancelar" name="cancelar" onclick="javascript:con.showCancelarSolicitud(' + value.solicitudOrden.idSolicitudOrden + ')">Cancelar Solicitud</button>');
                                } else {
                                    $("#cancelaSolicitud").html();
                                }
                            } else {
                                $("#cancelaSolicitud").html('');
                            }

                            if (value.solicitudOrden.cveEstatusSolicitudOrden == "4") {
                                $("#consultaMotivoCancela").show();
                                $("#detalleCancelaSolicitud").html(value.orden.motivoCancelacion);

                            } else {
                                $("#consultaMotivoCancela").hide();
                                $("#detalleCancelaSolicitud").html("");
                            }

                            i++;
                        });
                        $(".consultaInformacon").hide("fade");
                        $(".InformationCteo").show("fade", function () {
                            $(window).scrollTop($(".InformationCteo").offset().top - 100);
                            if (!$("#collapseSolicitudCateoTab").hasClass("in"))
                                $("#SolicitudCateoTab a").click();
                        });
                    }
                }
            });
        },
        Back: function () {
            $(".InformationCteo").hide("fade");
            $(".consultaInformacon").show("fade");
            this.idSolicitudOrden = 0;
        },
        showCancelarSolicitud: function (idSolicitudOrden) {
            $("#cancelaSolicitud").hide('');
            $("#cancelaSolicitud").html('');
            $("#motivoCancela").show();
            $("#confirmaCancelaSolicitud").html('<button style="float:right" class="btn btn-danger" id="cancelar" name="cancelar" onclick="javascript:con.cancelarSolicitud(' + idSolicitudOrden + ')">Cancelar Solicitud</button>');
        },
        cancelarSolicitud: function (idSolicitudOrden) {
            if ($("#textMotivoCancelacion").val() != "") {
                $(".buttons").hide();
                var datos = {
                    "accion": "cancelarSolicitudOrden",
                    "idSolicitudOrden": idSolicitudOrden,
                    "motivoCancelacion": $("#textMotivoCancelacion").val()
                }
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/solicitudesordenes/SolicitudesordenesFacade.Class.php",
                    data: datos,
                    async: false,
                    beforeSend: function () {
                    },
                    success: function (datos) {
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
                alert("especifique motivo de la cancelacion de la orden de aprehension ");
            }
        },
        imprimirOficio: function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ordenes/OrdenesFacade.Class.php",
                data: "accion=descargaSolicitudOrden&opcion=Oficio&idOrden=" + id,
                async: true,
                dataType: "html",
                beforeSend: function () {
                    $(".LoadInfo").html("Cargando Porfavor Espere...").show();
                },
                success: function (datos) {
                    $(".LoadInfo").html("").hide();
                    datos = eval("(" + datos + ")");
                    if (datos.type == "OK") {
                        window.location.href = '../fachadas/sigejupe/ordenes/OrdenesFacade.Class.php?action=descargaRespuestaOrden&opcion=Oficio&idOrden=' + id;
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la petici\u00f3n:\n <br />" + otroobj);
                }
            });
        },
        cambiarStatus: function () {
            if (this.idSolicitudCateo != 0) {
                var status = $('#cmbEstatus').val();
                var self = this;
                if (status != 0) {
                    var motivo = $("#textMotivo").val();
                    if (motivo != '') {
                        var datos = {
                            'accion': 'cambioStatus',
                            'idSolicitudOrden': this.idSolicitudOrden,
                            'cambiarStatus': status,
                            'motivo': motivo
                        }
                        $.ajax({
                            url: "../fachadas/sigejupe/solicitudesordenes/SolicitudesordenesFacade.Class.php",
                            data: datos,
                            type: "POST",
                            dataType: 'json',
                            async: false,
                            success: function (data) {
                                try {
                                    if (data.type == 'OK') {
                                        alert('EL ESTATUS SE MODIFICO');
                                        self.Back();
                                        self.inicia(1, 1);
                                        $("#cmbEstatus").val(0);
                                    } else {
                                        alert('NO SE MODIFICO');
                                    }
                                } catch (e) {
                                    alert(e)
                                }
                            }
                        });
                    } else {
                        alert('ESCRIBE UN MOTIVO DE CANCELACION')
                    }
                } else {
                    alert('SELECCIONA UN ESTATUS');
                }
            } else {
                alert('NO SE ENCOTRO EL IDENTIFICADOR DEL CATEO');
            }
            return false;
        }
    }
}
