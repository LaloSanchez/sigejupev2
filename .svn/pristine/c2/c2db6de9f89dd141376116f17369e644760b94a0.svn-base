var BitacoraMuestra = function () {
    return {
        idMuestra: 0,
        /////////// FUNCIONES PARA ADMINISTRACION DE TOMA DE MUESTRAS
        searchMuestra: function (pagAux) {
            var pag = 1;
            if (pagAux == 0 || pagAux == "" || pagAux == "undefined") {
                pag = $("#cmbPaginacion").val();
            }
            var cantReg = $("#cmbNumReg").val();
            $(".paginacion").hide();
            var numMuestra = $("#txtNumMuestraConsultar").val();
            var anio = $("#txtAniMuestraConsultar").val();
            $(".InformacionMuestra").hide();
            $("#informationTable").DataTable().destroy();
            $("#informationTable > tbody").remove();
            var msj = "";
            if ((numMuestra == 0 || numMuestra == "") && (anio == 0 || anio == "")) {
                msj += "Ingresa un N&uacute;mero de Toma de Muestra"
            }
            $(".buttons").hide();
            if (msj != "") {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(msj);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                $(".buttons").show();
                return;
            }

            $("#informationTable > tbody").remove();
            var datos = {
                "numero": numMuestra,
                "anio": anio,
                "type": 4,
                "accion": "consultarMuestraInformacionAdmon",
                "pag": pag,
                "cantxPag": cantReg
            }
            $(".msj").hide();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php",
                data: datos,
                beforeSend: function () {
                    $(".infos").html("<div class='alert alert-info text-center' >Obteniendo informaci&oacute;n Espere...</div>");
                },
                success: function (datos) {
                    $(".infos").html("");
                    try {
                        datos = eval("(" + datos + ")");
                    } catch (ex) {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html("Error en la petici&oacute;n");
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        return;
                    }
                    if (datos.status == "OK") {
                        var table = "<tbody>";
                        var i = 0;
                        $('#cmbPaginacion').find('option').remove().end();
                        var options = "";
                        if (datos.paginas.length != 0) {
                            $.each(datos.paginas, function (index, val) {
                                if (datos.pagina == val) {
                                    i = val;
                                    options += "<option value='" + val + "' selected='selected' >" + val + "</option>";
                                } else {
                                    options += "<option value='" + val + "' >" + val + "</option>";
                                }
                            });
                        } else {
                            options += "<option value='1' selected='selected' >1</option>";
                        }
                        i = (pag - 1) * cantReg;
                        $("#cmbPaginacion").append(options);
                        $(".paginacion").show();
                        $("#totalReg").html("<strong> Total: " + datos.total + "</strong>");
                        if (datos.datos !== "undefined") {
                            $.each(datos.datos, function (index, val) {
                                table += "<tr onclick='javascript:bitacoraMuestras.muestraInfo(" + val.idMuestra + "," + val.cveEstatusMuestra + ")' >";
                                table += "<td>" + (i + 1) + "</td>";
                                table += "<td>" + val.juzgado + "</td>";
                                table += "<td> " + val.numMuestra + "/" + val.anioMuestra + " </td>";
                                table += "<td> " + val.carpetaInv + " </td>";
                                var causa = val.numero + "/" + val.anio;
                                if (causa == "null/null") {
                                    causa = "";
                                }
                                table += "<td> " + causa + " </td>";
                                table += "<td> " + val.estatusMuestra + " </td>";
                                table += "</tr>";
                                i++;
                            });
                        }
                        table += "</tbody>";
                        $("#informationTable").append(table);
                        $("#informationTable").parent().parent().show();
                        $("#informationTable").DataTable().destroy();
                        $("#informationTable").DataTable();
                        $(".buttons").show();
                    } else {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html("No se Encontraron Resultados");
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        $(".buttons").show();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Error en la petici&oacute;n: <br />" + otroobj);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }

            });
        },
        muestraInfo: function (idMuestra, cveEstatusMuestra) {
            if (cveEstatusMuestra == "1" || cveEstatusMuestra == "2") {
                var self = this;
                $.ajax({
                    url: "../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php",
                    data: "accion=consultarDetalleMuestra&idMuestra=" + idMuestra,
                    type: "POST",
                    success: function (datos) {
                        try {
                            datos = eval("(" + datos + ")");
                        } catch (ex) {
                            $("#divAlertWarning").html("");
                            $("#divAlertWarning").html("Ocurrio un Error");
                            $("#divAlertWarning").show("slide");
                            setTimeAlert("divAlertWarning");
                            return;
                        }
                        if (datos.type == "OK") {
                            $(".Paso2 a").addClass("active");
                            $(".Paso1 a").removeClass("active");
                            $("#Paso1").hide();
                            $("#Paso2").show();
                            $("#idMuestra").val(idMuestra)
                            $.each(datos.data, function (index, value) {
                                $("carpeta").text(value.solicitudMuestra.carpetaInv);
                                $("nummuestra").text(value.respmuestra.numeroMuestra + "/" + value.respmuestra.anioMuestra);
                                var causa = value.solicitudMuestra.numero + "/" + value.solicitudMuestra.anio;
                                if (causa == "/") {
                                    causa = "";
                                }
                                $("causa").text(causa);
                                $("#cmbJuzgadoSolicitar").val(value.solicitudMuestra.cveJuzgado);
                            });
                            self.loadJuzgadores();
                            helper.getInfoUsuarios("solicitudesmuestras", 1);
                        }
                    }
                });


            } else if (cveEstatusMuestra == "3") {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html("Solicitud de Toma de Muestras Contestado. No se puede realizar modificaciones");
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
            } else if (cveEstatusMuestra == "4") {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html("Solciitud de Toma de MUestras Cancelado. No se puede realizar modificaciones");
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
            }
        },
        modificaMuestra: function () {
            var idJuez = $("#cmbJuez").val();
            var idMuestra = $("#idMuestra").val();
            this.idMuestra = idMuestra;
            if ((idJuez != "" && idJuez != 0) && (idMuestra != "" && idMuestra != 0)) {
                this.sendInfo(idMuestra, idJuez);
                return;
            }

            $("#divAlertWarning").html("");
            $("#divAlertWarning").html("Error Selecciona un Juez");
            $("#divAlertWarning").show("slide");
            setTimeAlert("divAlertWarning");
        },
        sendInfo: function (idMuestra, idJuez) {
            if ((idMuestra == "" || idMuestra == 0) && (idJuez == "" || idJuez == 0)) {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html("Ocurrio un Error");
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                return;
            }
            ;
            var datos = {
                "accion": "actualizarJuzgadorMuestra",
                "idMuestra": idMuestra,
                "idJuzgador": idJuez
            };
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php",
                data: datos,
                success: function (datos) {
                    try {
                        datos = eval("(" + datos + ")")
                    } catch (ex) {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html("Ocurrio un Error");
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                    }
                    if (datos.type == "OK") {
                        $("#divAlertSuccess").html("");
                        $("#divAlertSuccess").html(datos.text);
                        $("#divAlertSuccess").show("slide");
                        setTimeAlert("divAlertSuccess");
                    } else {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html(datos.text);
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Error en la petici&oacute;n: <br />" + otroobj);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }

            });
        },
        anterior: function () {
            $(".Paso2 a").removeClass("active");
            $(".Paso1 a").addClass("active");
            $("#Paso2").hide();
            $("#Paso1").show();
        },
        loadJuzgadores: function () {
            var datos = {
                "accion": "Juzgadores"
            }
            $("#cmbJuez > option").remove();
            $.ajax({
                url: "../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php",
                data: datos,
                type: "POST",
                success: function (datos) {
                    try {
                        datos = eval("(" + datos + ")");
                    } catch (ex) {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html("Ocurrio un Error a Obtener Juzgadores");
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                    }
                    if (datos.totalCount != 0) {
                        var options = ""
                        options += '<option value="0">SELECCIONA UNA OPCI&Oacute;N</option>';
                        $.each(datos.data, function (index, value) {
                            options += "<option value='" + value.idJuzgador + "' >";
                            options += value.titulo + " " + value.nombre + " " + value.paterno + " " + value.materno
                            options += "</option>";
                        });
                        $("#cmbJuez").append(options);
                    }
                }
            });
        },
        limpiarAdmon: function () {
            $("#txtNumMuestraConsultar").val("");
            $("#txtAniMuestraConsultar").val("");
            $(".paginacion").hide();
            $(".InformacionMuestra").hide();
            $("#informationTable").DataTable().destroy();
            $("#informationTable > tbody").remove();
            $(".infos").html("");
        },
        ///////// FUNCIONES PARA BITACORA
        limpiar: function () {
            $("#txtNumMuestraConsultar").val("");
            $("#txtAniMuestraConsultar").val("");
            $("#cmbJuzgadoSolicitar").val(0);
            $("#fechaConsultar").val(moment().format('DD/MM/YYYY'));
            $("#fechaConsultarEnd").val(moment().format('DD/MM/YYYY'));
            $("#informationTable > tbody").remove();
            $("#informationTable").parent().hide();
            $(".consultaInformacion").show();
            $(".detalleInfo").hide();
            $(".infos").html("");
            $(".paginacion").hide();
            this.cateos = new Array();
            this.idMuestra= 0;
        },
        inicia: function (pagAux) {
            var pag = 1;
            if (pagAux == 0 || pagAux == "" || pagAux == "undefined") {
                pag = $("#cmbPaginacion").val();
            }
            var cantReg = $("#cmbNumReg").val();
            $(".paginacion").hide();
            $(".buttons").hide();
            $(".consultaInformacion").show();
            $(".detalleInfo").hide();
            var fechaT = $("#fechaConsultar").val();
            var fechaTE = $("#fechaConsultarEnd").val();
            var fecha = "";
            var juzgado = $("#cmbJuzgadoSolicitar").val();
            if (fechaT != "") {
                fechaT = fechaT.split("/");
                fecha = fechaT[2] + "/" + fechaT[1] + "/" + fechaT[0];
            }
            var fechaE = "";
            if (fechaTE != "") {
                fechaTE = fechaTE.split("/");
                fechaE = fechaTE[2] + "/" + fechaTE[1] + "/" + fechaTE[0];
            }
            if (juzgado == "" || juzgado == 0) {
                juzgado = "";
            }

            var numeroMuestra = $("#txtNumMuestraConsultar").val();
            var anioMuestra = $("#txtAniMuestraConsultar").val();

            if (numeroMuestra != "" || anioMuestra != "" || juzgado != "") {
                fecha = "";
                fechaE = "";
            }

            var datos = {
                "numero": numeroMuestra,
                "anio": anioMuestra,
                "juzgadoProcedencia": juzgado,
                "fechaRegistro": fecha,
                "fechaRegistroEnd": fechaE,
                "type": 5,
                "accion": "consultarMuestraInformacionBitacora",
                "pag": pag,
                "cantxPag": cantReg
            }
            $(".msj").hide();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php",
                data: datos,
                beforeSend: function () {
                    $("#informationTable").parent().parent().hide();
                    $("#informationTable > tbody ").remove();
                    $(".infos").html("<div class='alert alert-info text-center' >Obteniendo Informaci&oacute;n Espere...</div>");
                },
                success: function (datos) {
                    $(".infos").html("");
                    $("#informationTable > tbody ").remove();
                    datos = eval("(" + datos + ")");
                    if (datos.status == "OK") {
                        var table = "<tbody>";
                        var i = 0;
                        $('#cmbPaginacion').find('option').remove().end();
                        var options = "";
                        $.each(datos.paginas, function (index, val) {
                            if (datos.pagina == val) {
                                i = val;
                                options += "<option value='" + val + "' selected='selected' >" + val + "</option>";
                            } else {
                                options += "<option value='" + val + "' >" + val + "</option>";
                            }
                        });
                        i = (pag - 1) * cantReg;
                        $("#cmbPaginacion").append(options);
                        $.each(datos.datos, function (indext, valt) {
                            table += "<tr onclick= 'javascript:bitacora.seleccionaRegistro(" + valt.idMuestra + ")' >";
                            table += "<td>" + (i + 1) + "</td>";
                            table += "<td>" + valt.juzgado + "</td>";
                            table += "<td>" + valt.numMuestra + " / " + valt.anioMuestra + "</td>";
                            table += "<td>" + valt.carpetaInv + "</td>";
                            table += "<td>" + valt.fechaRegistro + "</td>";
                            table += "</tr>";
                            i++;
                        });
                        table += "</tbody>";
                        $("#informationTable").append(table);
                        $("#informationTable").parent().parent().show();
                        $(".responsive-table").show();
                        $("#informationTable").DataTable().destroy();
                        $("#informationTable").DataTable();
                        $(".buttons").show();
                        $(".paginacion").show();
                        $("#totalReg").html("<strong> Total: " + datos.total + "</strong>");
                    } else {
                        $("#informationTable").parent().parent().hide();
                        $(".buttons").show();
                        $(".infos").html("<div class='alert alert-warning text-center' >No Hay Informaci&oacute;n</div>");
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
        seleccionaRegistro: function (cveRegistro) {
            if (cveRegistro != "" || cveRegistro != 0) {
                $("#DetalleCorreos > tbody").remove();
                $("#ResumenCorreos > tbody").remove();
                $("#detalleMuestra > tbody").remove();
                $("#DetalleLlamadas > tbody").remove();
                $("#ResumenLlamadas > tbody").remove();
                var datos = {
                    "accion": "consultaMuestras",
                    "idReferencia": cveRegistro
                };
                var self = this;
                $.ajax({
                    url: "../fachadas/sigejupe/bitacoranotificaciones/BitacoranotificacionesFacade.Class.php",
                    data: datos,
                    type: "POST",
                    success: function (data) {
                        try {
                            var datos = eval("(" + data + ")");
                            $("#informationTable > tbody").remove();
                        } catch (ex) {
                            $("#divAlertWarning").html("");
                            $("#divAlertWarning").html("Ocurrio un Error de Comunicaci&oacute;n");
                            $("#divAlertWarning").show("slide");
                            setTimeAlert("divAlertWarning");
                            return;
                        }
                        if (datos.data.length != 0 && datos.type == "OK") {
                            self.limpiar();
                            $.each(datos.data, function (index, value) {
                                self.detalleMuestra(value.solicitudMuestra);
                                self.resumenCorreos(value.resumenCorreos);
                                self.detalleCorreos(value.detalleCorreos);
                                self.resumenLlamadas(value.resumenLlamadas);
                                self.detalleLlamadas(value.detalleLlmadas);
                            });
                        }
                        $(".consultaInformacion").hide();
                        $(".detalleInfo").show();
                    },
                    error: function () {
                        $(".consultaInformacion").show();
                        $(".detalleInfo").hide();
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html("Ocurrio un Error de Comunicaci&oacute;n");
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                    }
                });
            } else {
                $(".consultaInformacion").show();
                $(".detalleInfo").hide();
            }
        },
        detalleMuestra: function (datos, nuc) {
            var table = "<tbody>";
            table += "<tr>";
            table += "<td>" + datos.desJuzgado + "</td>";
            table += "<td>" + datos.estatus + "</td>";
            table += "<td>" + datos.desJuzgadoDesahoga + "</td>";
            var causa = datos.numero + "/" + datos.anio;
            if (causa == "/") {
                causa = "";
            }
            table += "<td>" + causa + "</td>";
            table += "<td>" + datos.carpetaInv + "</td>";
            table += "<td>" + datos.nuc + "</td>";
            table += "</tr>";
            table += "</tbody>";
            $("#detalleMuestra").append(table);
        },
        resumenCorreos: function (datos) {
            var table = "<tbody>";
            $.each(datos, function (index, value) {
                table += "<tr>";
                table += "<td>" + value.medio + "</td>";
                table += "<td>" + value.usuario + "</td>";
                table += "<td>" + value.total + "</td>";
                table += "</tr>";
            });
            table += "</tbody>";
            $("#ResumenCorreos").append(table);
        },
        detalleCorreos: function (datos) {
            var table = "<tbody>";
            var i = 0;
            $.each(datos, function (index, value) {
                table += "<tr>";
                table += "<td>" + (i + 1) + "</td>";
                table += "<td>" + value.medio + "</td>";
                table += "<td>" + value.movimiento + "</td>";
                table += "<td>" + value.fechaRegistro + "</td>";
                table += "<td>" + value.usuario + "</td>";
                table += "</tr>";
                i++;
            });
            table += "</tbody>";
            $("#DetalleCorreos").append(table);
        },
        resumenLlamadas: function (datos) {
            var table = "<tbody>";
            $.each(datos, function (index, value) {
                table += "<tr>";
                table += "<td>" + value.medio + "</td>";
                table += "<td>" + value.usuario + "</td>";
                table += "<td>" + value.total + "</td>";
                table += "</tr>";
            });
            table += "</tbody>";
            $("#ResumenLlamadas").append(table);
        },
        detalleLlamadas: function (datos) {
            var table = "<tbody>";
            var i = 0;
            $.each(datos, function (index, value) {
                table += "<tr>";
                table += "<td>" + (i + 1) + "</td>";
                table += "<td>" + value.medio + "</td>";
                table += "<td>" + value.movimiento + "</td>";
                table += "<td>" + value.fechaRegistro + "</td>";
                table += "<td>" + value.usuario + "</td>";
                table += "</tr>";
                i++;
            });
            table += "</tbody>";
            $("#DetalleLlamadas").append(table);
        },
    }
};