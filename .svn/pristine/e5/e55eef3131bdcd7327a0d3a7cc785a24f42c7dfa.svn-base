var Consultas = function () {
    return {
        btnRespuesta: 0,
        idSolicitudCateo: 0,
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
            var fechaTxtEnd = $("#fechaConsultarEnd").val();
            var fechaEnd = this.convertirFecha(fechaTxtEnd);
            if (fecha == "" || fechaEnd == "") {
                $(".infos").html("<div class='alert alert-info text-center' >INGRESE UN RANGO DE FECHAS</div>");
                return;
            }
            var numeroCateo = $("#txtNumCateoConsultar").val().trim();
            var anioCateo = $("#txtAniCateoConsultar").val().trim();
            if (numeroCateo != "" || anioCateo != "") {
                fecha = "";
                fechaEnd = "";
            }

            $(".buttons").hide();
            var self = this;
            var datos = {
                "accion": "consultarCateoInformacion",
                "numero": numeroCateo,
                "anio": anioCateo,
                "fechaRegistro": fecha,
                "fechaRegistroEnd": fechaEnd,
                "type": type,
                "pag": pag,
                "cantxPag": cantReg
            }

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudescateos/SolicitudescateosFacade.Class.php",
                data: datos,
                async: true,
                beforeSend: function () {
                    $(".infos").html("<div class='alert alert-info text-center' >Cargando Informaci&oacute;n Espere..</div>")
                },
                success: function (datos) {
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
                            $.each(datos.datos, function (indext, valt) {
                                if (type == "4") {
                                    if (valt.cveEstatusCateo != "1" && valt.cveEstatusCateo != "2") {
                                        table += "<tr onclick= 'javascript:con.seleccionaRegistro(" + valt.idCateo + ", " + type + ")' >";
                                    } else {
                                        table += "<tr' >";
                                    }
                                } else {
                                    table += "<tr onclick= 'javascript:con.seleccionaRegistro(" + valt.idCateo + ", " + type + ")' >";
                                }
                                table += "<td>" + (count + 1) + "</td>";
                                table += "<td>" + valt.juzgado + "</td>";
                                table += "<td>" + valt.juez + "</td>";
                                table += "<td>" + valt.juezApelacion + "</td>";
                                table += "<td>" + valt.secretario + "</td>";
                                var numCateo = 0, anioCateo = 0;
                                numCateo = (valt.numCateo == null) ? 0 : valt.numCateo;
                                anioCateo = (valt.anioCateo == null) ? 0 : valt.anioCateo;
                                table += "<td>" + numCateo + " / " + anioCateo + "</td>";
                                table += "<td>" + valt.numEspecializadoCateo + " / " + anioCateo + "</td>";
                                if (type != "4") {
                                    var carpetaInv = 0;
                                    carpetaInv = (valt.carpetaInv == null) ? "" : valt.carpetaInv;
                                    table += "<td>" + carpetaInv + "</td>";
                                    table += "<td>Personas : " + valt.Personas + " / Objetos : " + valt.Objetos + "</td>";
                                }
                                table += "<td>" + valt.fechaRegistro + "</td>";
                                table += "<td>" + valt.fechaRespuesta + "</td>";
                                table += "<td>" + valt.tiempoRespuesta + "</td>";
                                table += "<td>" + valt.estatusCateo + "</td>";
                                table += "</tr>";
                                count++;
                            });
                            table += "</tbody>";
                            $("#cmbPaginacion").append(options);
                            $("#informationTable").append(table);
                            $("#informationTable").parent().parent().show();
                            $("#informationTable").DataTable().destroy();
                            $("#informationTable").DataTable();
                            $("#totalReg").html("<strong> Total: " + datos.total + "</strong>");
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
                        $(".infos").html("<div class='alert alert-danger text-center' >Ocurrio un Error..</div>")
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
            if (fechaTxt != "" || fechaTxt != 0) {
                fechaTxt = fechaTxt.split("/");
                var nuevaFecha = fechaTxt[2] + '-' + fechaTxt[1] + "-" + fechaTxt[0];
                return nuevaFecha;
            } else
                return '';
        },
        limpiar: function () {
            $("#txtNumCateoConsultar").val("");
            $("#txtAniCateoConsultar").val("");
            $("#fechaConsultar").val(moment().format('DD/MM/YYYY'));
            $("#fechaConsultarEnd").val(moment().format('DD/MM/YYYY'));
            $("#informationTable").DataTable().destroy();
            $("#informationTable > tbody ").remove();
            $("#informationTable").parent().parent().hide();
            $(".infos").html("");
            $(".paginacion").hide();
            this.idSolicitudCateo = 0;
        },
        seleccionaRegistro: function (idCateo, typeConsulta) {
            if (idCateo != 0) {
                $(window).scrollTop($(".consultaInformacon").offset().top - 100);
                mS.limpiarTablasSinCheck("tblPersonas");
                mS.limpiarTablasSinCheck("tblObjetos");
                mS.limpiarTablasSinCheck("tblImputados");
                mS.limpiarTablasSinCheck("tblVictimas");
                mS.limpiarTablasSinCheck("tblDelitos");
                mS.limpiarTablasSinCheck("tblMpsResponsables");
                $("#tblPersonasR > tbody").remove();
                $("#tblObjetosR > tbody").remove();
                this.solicitudInformacion(idCateo, typeConsulta);
                $("#impresionSolicitud").html('<button class="btn btn-primary" id="imprimir" name="imprimir" onclick="javascript:cateos.imprimirComprobante(' + idCateo + ')">Imprimir Solicitud</button>');
            }
        },
        solicitudInformacion: function (registro, typeConsulta) {
            var self = this;
            $.ajax({
                url: "../fachadas/sigejupe/solicitudescateos/SolicitudescateosFacade.Class.php",
                data: "accion=consultarDetalleCateo&idCateo=" + registro,
                type: "POST",
                success: function (data) {
                    try {
                        mS.cveRegistro = 0;
                        var datos = eval("(" + data + ")")
                        if (datos.type == "OK") {
                            var i = 0;
                            $.each(datos.data, function (index, value) {
                                self.idSolicitudCateo = value.solicitudCateo.idSolicitudCateo;
                                $(".nmcat").text(value.cateo.numeroCateo + "/" + value.cateo.anioCateo);
                                $(".nommp").text(value.solicitudCateo.nombreUsuario);
                                $(".emailMp").html("<a href='mailto:" + value.cateo.email.toLowerCase() + "' > " + value.cateo.email.toLowerCase() + "</a>");
                                $(".fecsol").text(value.solicitudCateo.fechaRegistro);
                                $("resp").html(value.cateo.desRespuestaSolicitudCateo);
                                if (value.solicitudCateo.carpetaInv.trim() != "") {
                                    $(".carpinv").text(value.solicitudCateo.carpetaInv);
                                    $(".carpinv").parent().parent().show();
                                } else {
                                    $(".carpinv").parent().parent().hide();
                                }
                                if (value.solicitudCateo.nuc.trim() != "") {
                                    $(".nucIn").text(value.solicitudCateo.nuc);
                                    $(".nucIn").parent().parent().show();
                                } else {
                                    $(".nucIn").parent().parent().hide();
                                }

                                if (value.cateo.cveRespuestaSolicitudCateo == 1) {
                                    $("#RespuestaNegada").hide();
                                } else {
                                    $("#RespuestaNegada").show();
                                }

                                $("#informeSolicitudTexto").html(value.cateo.solicitud);
                                $("#NegadaTexto").html(value.cateo.negada);
                                $("#ResolucionTexto").html(value.cateo.concedida);
                                var informe = "";
                                var practica = "";
                                if (value.cateo.fechaInforme == "" && value.cateo.horaInforme == "" && value.cateo.horasInforme == ""
                                        || (value.cateo.fechaInforme == "0000-00-00" && value.cateo.horaInforme == "00:00:00" && value.cateo.horasInforme == "0")) {
                                    informe = "NO SE PRESENTARA INFORME";
                                } else {
                                    if ((value.cateo.fechaInforme != "" && value.cateo.horaInforme != "")
                                            && (value.cateo.fechaInforme != "0000-00-00" && value.cateo.horaInforme != "00:00:00")) {
                                        informe = "Se deber&aacute; emitir un informe sobre la ejecuci&oacute;n que se brinda a esta orden de cateo, preferentemente, por el ";
                                        informe += " Agente del Ministerio P&uacute;blico solicitante. Fecha: " + value.cateo.fechaInforme + " Hora: " + value.cateo.horaInforme;
                                    } else {
                                        informe = "Plazo m&aacute;ximo en horas: " + value.cateo.horasInforme;
                                    }
                                }

                                if ((value.cateo.fechaPractica != "" && value.cateo.horaPractica != "")
                                        && (value.cateo.fechaPractica != "0000-00-00" && value.cateo.horaPractica != "00:00:00")) {
                                    practica = "Se deber&aacute; emitir un informe sobre la ejecuci&oacute;n que se brinda a esta orden de cateo, preferentemente, por el ";
                                    practica += " Agente del Ministerio P&uacute;blico solicitante. Fecha: " + value.cateo.fechaPractica + " Hora: " + value.cateo.horaPractica;
                                } else {
                                    practica = "Plazo m&aacute;ximo en horas: " + value.cateo.horasPractica;
                                }

                                $("practica").html(practica);
                                $("informe").html(informe);
                                // Verificamos si existe un documento   
                                if (value.documento != "") {
                                    var pathDocument = (value.documento).substring(9);
                                    var position = (value.documento).lastIndexOf("/");
                                    var name = (value.documento).substring((position + 1));
                                    $("fileFound").html("<div class='text-center' ><br /><a href='../" + pathDocument + "' >ARCHIVO PROPORCIONADO POR EL MINISTERIO P&Uacute;BLICO PARA LA SOLICITUD DE CATEO</a><br /><br /></div>");
                                } else {
                                    $("fileFound").html(" *No se Encontraron resultados <p>&nbsp;</p>");
                                }

                                if (value.documentoMP != "") {
                                    var pathDocument = (value.documentoMP).substring(9);
                                    var position = (value.documentoMP).lastIndexOf("/");
                                    var name = (value.documentoMP).substring((position + 1));
                                    $("fileFoundMP").html("<div class='text-center' ><br /><a href='../" + pathDocument + "' >ARCHIVO PROPORCIONADO POR EL MINISTERIO P&Uacute;BLICO PARA LA SOLICITUD DE APELACI&Oacute;N DE CATEO</a><br /><br /></div>");
                                } else {
                                    $("fileFoundMP").html(" *No hay archivo adjunto <p>&nbsp;</p>");
                                }

                                if (value.documentoJuez != "") {
                                    var pathDocument = (value.documentoJuez).substring(9);
                                    var position = (value.documentoJuez).lastIndexOf("/");
                                    var name = (value.documentoJuez).substring((position + 1));
                                    $("fileFoundJuez").html("<div class='text-center' ><br /><a href='../" + pathDocument + "' >ARCHIVO PROPORCIONADO POR EL JUEZ PARA LA SOLICITUD DE APELACI&Oacute;N DE CATEO</a><br /><br /></div>");
                                } else {
                                    $("fileFoundJuez").html(" *No hay archivo adjunto <p>&nbsp;</p>");
                                }

                                if (value.documentoSec != "") {
                                    var pathDocument = (value.documentoSec).substring(9);
                                    var position = (value.documentoSec).lastIndexOf("/");
                                    var name = (value.documentoSec).substring((position + 1));
                                    $("fileFoundSecretario").html("<div class='text-center' ><br /><a href='../" + pathDocument + "' >ARCHIVO PROPORCIONADO POR EL SECRETARIO PARA LA SOLICITUD DE APELACI&Oacute;N DE CATEO</a><br /><br /></div>");
                                } else {
                                    $("fileFoundSecretario").html(" *No hay archivo adjunto <p>&nbsp;</p>");
                                }

                                mS.getPersonas(value.personas);
                                mS.getObjetos(value.objetos);
                                mS.getImputados(value.imputados);
                                mS.getOfendidos(value.ofendidos);
                                mS.getDelitos(value.delitos);
                                mS.getMPS(value.ministeriosPublicos);
                                mS.getPersonas(value.personasRespuesta, 1);
                                mS.getObjetos(value.objetosRespuesta, 1);
                                if (value.cateo.fechaRespuesta != "") {
                                    $(".resp").show();
                                    $("#collapseSolicitudCateoRespuestaTab").show();
                                    mS.cveRegistro = value.cateo.idCateo;
                                    $(".buttonRespuesta").html('<button class="btn btn-primary" id="imprimirRespuesta" name="imprimirRespuesta" onclick="javascript:mS.imprimirComprobante()">Imprimir Respuesta</button>');
                                } else {
                                    $(".resp").hide();
                                    $("#collapseSolicitudCateoRespuestaTab").hide();
                                    $(".buttonRespuesta").html("Sin Respuesta");
                                }
                                if (typeConsulta == "1" || typeConsulta == "3") {
                                    if (value.solicitudCateo.cveEstatusSolicitudCateo == "1" || value.solicitudCateo.cveEstatusSolicitudCateo == "2") {
                                        $("#cancelaSolicitud").show();
                                        $("#cancelaSolicitud").html('<button style="float:right" class="btn btn-danger" id="cancelar" name="cancelar" onclick="javascript:con.showCancelarSolicitud(' + value.solicitudCateo.idSolicitudCateo + ')">Cancelar Solicitud</button>');
                                    } else {
                                        $("#cancelaSolicitud").html();
                                    }
                                } else {
                                    $("#cancelaSolicitud").html('');
                                }

                                if (value.solicitudCateo.cveEstatusSolicitudCateo == "4") {
                                    $("#consultaMotivoCancela").show();
                                    $("#detalleCancelaSolicitud").html(value.cateo.motivoCancelacion);
                                } else {
                                    $("#consultaMotivoCancela").hide();
                                    $("#detalleCancelaSolicitud").html("");
                                }

                                if (typeof value.apelacion.agravios != "undefined") {
                                    if (value.apelacion.agravios != "" || value.apelacion.escritoApelacion != "") {
                                        $("#ApelacionMPEtiqueta").show();
                                        $(".agraviosmp").html(value.apelacion.agravios);
                                        $(".escritoApelacion").html(value.apelacion.escritoApelacion);
                                    } else {
                                        $("#ApelacionMPEtiqueta").hide();
                                    }

                                    if (value.apelacion.acuerdo != "") {
                                        $("#ApelacionJuezEtiqueta").show();
                                        $(".acuerdojuez").html(value.apelacion.acuerdo);
                                    } else {
                                        $("#ApelacionJuezEtiqueta").hide();
                                    }

                                    if (value.apelacion.resolucionSala != "") {
                                        $("#ApelacionSecretarioEtiqueta").show();
                                        $(".resolucionApelacion").html(value.apelacion.resolucionSala);
                                        $(".buttonResolucionSecretario").html('<button class="btn btn-primary" id="imprimirResolucionSecretario" name="imprimirResolucionSecretario" onclick="javascript:mS.imprimirResolucionSecretario()">Imprimir Respuesta</button>');
                                    } else {
                                        $("#ApelacionSecretarioEtiqueta").hide();
                                        $(".buttonResolucionSecretario").html('SIN RESPUESTA');
                                    }
                                } else {
                                    $("#ApelacionMPEtiqueta").hide();
                                    $("#ApelacionJuezEtiqueta").hide();
                                    $("#ApelacionSecretarioEtiqueta").hide();
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
            this.idSolicitudCateo = 0;
        },
        showCancelarSolicitud: function (idSolicitudCateo) {
            $("#cancelaSolicitud").hide('');
            $("#cancelaSolicitud").html('');
            $("#motivoCancela").show();
            $("#confirmaCancelaSolicitud").html('<button style="float:right" class="btn btn-danger" id="cancelar" name="cancelar" onclick="javascript:con.cancelarSolicitud(' + idSolicitudCateo + ')">Cancelar Solicitud</button>');
        },
        cancelarSolicitud: function (idSolicitudCateo) {
            if ($("#textMotivoCancelacion").val() != "") {
                $(".buttons").hide();
                var datos = {
                    "accion": "cancelarSolicitudCateo",
                    "idSolicitudCateo": idSolicitudCateo,
                    "motivoCancelacion": $("#textMotivoCancelacion").val()
                }
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/solicitudescateos/SolicitudescateosFacade.Class.php",
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
                alert("especifique motivo de la cancelacion del cateo");
            }
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
                            'idSolicitudCateo': this.idSolicitudCateo,
                            'cambiarStatus': status,
                            'motivo': motivo
                        }
                        $.ajax({
                            url: "../fachadas/sigejupe/solicitudescateos/SolicitudescateosFacade.Class.php",
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
