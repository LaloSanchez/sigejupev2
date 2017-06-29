var ApelacionCateos = function () {
    return {
        cveRegistro: 0,
        btnRespuesta: 0,
        siguiente: function (sig, act, validar) {
            var next = document.getElementById(sig);
            var actual = document.getElementById(act);
            sig = sig.substring(2, 7);
            act = act.substring(2, 7);
            var divPaso1 = document.getElementById('div' + act);
            var divPaso2 = document.getElementById('div' + sig);
            divPaso1.style.display = 'none';
            divPaso2.style.display = 'block';
            $("." + sig).find("a").addClass("active");
            $("." + act).find("a").removeClass("active");
            if (typeof validar != "undefined") {
                if (validar.trim() != "") {
                    eval(validar + "()");
                }
            }
            //helper.getInfoUsuarios("cateos");
        },
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
            var cveJuzgado = $("#cmbJuzgadoSolicitar").val();
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

            if (numeroCateo != "" || anioCateo != "" || cveJuzgado != "0") {
                fecha = "";
                fechaEnd = "";
            }

            $(".buttons").hide();
            var self = this;
            var datos = {
                "accion": "consultarCateoInformacionApelacion",
                "numero": numeroCateo,
                "anio": anioCateo,
                "fechaRegistro": fecha,
                "fechaRegistroEnd": fechaEnd,
                "cveJuzgado": cveJuzgado,
                "type": type,
                "pag": pag,
                "cantxPag": cantReg
            }

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/apelacioncateos/ApelacioncateosFacade.Class.php",
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
                                if (type != "4") {
                                    table += "<tr onclick= 'javascript:apelacionCateos.seleccionaRegistro(" + valt.idCateo + ", " + type + ")' >";
                                } else {
                                    table += "<tr' >";
                                }
                                table += "<td>" + (count + 1) + "</td>";
                                table += "<td>" + valt.juzgado + "</td>";
                                table += "<td>" + valt.juez + "</td>";
                                var numCateo = 0, anioCateo = 0;
                                numCateo = (valt.numCateo == null) ? 0 : valt.numCateo;
                                anioCateo = (valt.anioCateo == null) ? 0 : valt.anioCateo;
                                table += "<td>" + numCateo + " / " + anioCateo + "</td>";
                                if (type != "4") {
                                    var carpetaInv = 0;
                                    carpetaInv = (valt.carpetaInv == null) ? "" : valt.carpetaInv;
                                    table += "<td>" + carpetaInv + "</td>";
                                    table += "<td>Personas : " + valt.Personas + " / Objetos : " + valt.Objetos + "</td>";
                                }
                                table += "<td>" + valt.fechaRegistro + "</td>";
                                table += "<td>" + valt.fechaRespuesta + "</td>";
                                table += "<td>" + valt.tiempoRespuesta + "</td>";
                                table += "<td>" + valt.fechaRegistroApelacion + "</td>";
                                table += "<td>" + valt.fechaRegistroAcuerdo + "</td>";
                                table += "<td>" + valt.fechaRespuestaApelacion + "</td>";
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
                        $(".infos").html("<div class='alert alert-danger text-center' >No Hay Resultados..</div>")
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $(".paginacion").hide();
                    $(".buttons").show();
                    $(".infos").html("");
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
            loadOpcion('sigejupe/apelacioncateos/frmApelacionSecretarioView.php', 'areadetrabajo');
        },
        seleccionaRegistro: function (idCateo, typeConsulta) {
            this.cveRegistro = idCateo;
            if (this.cveRegistro != 0) {
                this.validarPaso1('S');
                $(window).scrollTop($(".consultaInformacon").offset().top - 100);
                mS.limpiarTablasSinCheck("tblPersonas");
                mS.limpiarTablasSinCheck("tblObjetos");
                mS.limpiarTablasSinCheck("tblPersonasR");
                mS.limpiarTablasSinCheck("tblObjetosR");
                mS.limpiarTablasSinCheck("tblImputados");
                mS.limpiarTablasSinCheck("tblVictimas");
                mS.limpiarTablasSinCheck("tblDelitos");
                mS.limpiarTablasSinCheck("tblMpsResponsables");

                this.solicitudInformacion(idCateo, typeConsulta);

                $("#impresionSolicitud").html('<button class="btn btn-primary" id="imprimir" name="imprimir" onclick="javascript:cateos.imprimirComprobante(' + idCateo + ')">Imprimir Solicitud</button>');

            }
        },
        solicitudInformacion: function (registro, typeConsulta) {
            var self = this;
            $.ajax({
                url: "../fachadas/sigejupe/apelacioncateos/ApelacioncateosFacade.Class.php",
                data: "accion=consultarDetalleCateoApelacion&idCateo=" + registro + "&juez=3",
                type: "POST",
                success: function (data) {
                    try {
                        mS.cveRegistro = 0;
                        var datos = eval("(" + data + ")")
                        if (datos.type == "OK") {
                            var i = 0;
                            $.each(datos.data, function (index, value) {
                                $(".nmcat").text(value.cateo.numeroCateo + "/" + value.cateo.anioCateo);
                                $(".nommp").text(value.solicitudCateo.nombreUsuario);
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

                                mS.getPersonas(value.personas);
                                mS.getObjetos(value.objetos);
                                mS.getImputados(value.imputados);
                                mS.getOfendidos(value.ofendidos);
                                mS.getDelitos(value.delitos);
                                mS.getMPS(value.ministeriosPublicos);
                                mS.getPersonas(value.personasRespuesta, 1);
                                mS.getObjetos(value.objetosRespuesta, 1);
                                if (value.cateo.fechaRespuesta != "") {
                                    mS.cveRegistro = value.cateo.idCateo;
                                    $(".buttonRespuesta").html('<button class="btn btn-primary" id="imprimirRespuesta" name="imprimirRespuesta" onclick="javascript:mS.imprimirComprobante()">Imprimir Respuesta</button>');
                                } else {
                                    $(".buttonRespuesta").html("Sin Respuesta");
                                }

                                if (value.apelacion != "") {
                                    $(".agraviosmp").html(value.apelacion.agravios);
                                    $(".escritoApelacion").html(value.apelacion.escritoApelacion);
                                    $(".acuerdojuez").html(value.apelacion.acuerdo);
                                }

                                i++;
                            });

                            $(window).scrollTop($(".InformationCteo").offset().top - 100);
                            if (!$("#collapseSolicitudCateoTab").hasClass("in"))
                                $("#SolicitudCateoTab a").click();
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
        showCancelarSolicitud: function (idSolicitudCateo) {
            $("#cancelaSolicitud").hide('');
            $("#cancelaSolicitud").html('');
            $("#motivoCancela").show();
            $("#confirmaCancelaSolicitud").html('<button style="float:right" class="btn btn-danger" id="cancelar" name="cancelar" onclick="javascript:apelacionCateos.cancelarSolicitud(' + idSolicitudCateo + ')">Cancelar Solicitud</button>');
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
                    url: "../fachadas/sigejupe/apelacioncateos/ApelacioncateosFacade.Class.php",
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
        validarPaso1: function (ir) {
            var isValid = true;
            var un = this.cveRegistro;
            var msj = "";
            if (!un && un == 0) {
                isValid = false;
                msj += 'Seleccione un registro';
            }

            if (ir == 'S') {
                if (!isValid) {
                    this.siguiente('liPaso1', 'liPaso2', '');
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html(msj);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                } else {
                    this.siguiente('liPaso2', 'liPaso1', '');
                }
            }
            return isValid;

        },
        validarPaso3: function (ir) {
            var isValid = true;
            var msj = "";
            var descResolucion = UE.getEditor('descResolucion').getContent();
            if (descResolucion == "") {
                isValid = false;
                msj += 'Escriba la Resoluci&oacute;n <br />';
            }

            if ($("#acept").is(':checked')) {
                if ($("#cmbSentido").val() == 0) {
                    isValid = false;
                    msj += 'Selecciona un Estatus <br />';
                }
            }

            if (ir == 'S') {
                if (!isValid) {
                    this.siguiente('liPaso3', 'liPaso5', '');
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html(msj);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                } else {
                    this.siguiente('liPaso5', 'liPaso3', '');
                }
            }
            return isValid;
        },
        validarPaso5: function () {
            var chkTerminosUso = document.getElementById("chkTerminosUso");
            var isValid = true;
            if (!chkTerminosUso.checked) {
                isValid = false;
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html("Acepte los terminos de uso para finalizar");
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                return;
            }

            if (isValid) {
                if (this.validateAllSteps()) {
                    if (confirm("\u00BFEsta seguro de registrar la solicitud?") == true) {
                        console.log("Lego aqui");
                        this.sendInfo();
                        console.log("Paso aqui");
                    }
                }
            }

            return isValid;
        },
        validateAllSteps: function () {
            var isStepValid = true;
            if (this.validarPaso1() == false) {
                isStepValid = false;
                this.siguiente('liPaso1', 'liPaso5', '');
                return isStepValid;
            }

            if (this.validarPaso3() == false) {
                isStepValid = false;
                this.siguiente('liPaso3', 'liPaso5', '');
                return isStepValid;
            }

            return isStepValid;
        },
        sendInfo: function () {
            document.getElementById('btnEnviar').style.display = 'none';
            var limpiar6 = document.getElementById("limpiar6");
            var anterior6 = document.getElementById("anterior6");
            var enviar = document.getElementById("enviar");
            var nueva = document.getElementById("nueva");
            var descResolucion = UE.getEditor('descResolucion').getContent();
            var registro = this.cveRegistro;
            var calificada = "S"; // Acepatada
            if ($("#acept").is(':checked')) {
                calificada = "S"
            } else {
                calificada = "N";
            }

            var formData = new FormData();
            formData.append('accion', "guardarApelacionResolucion");
            formData.append('resolucionSala', descResolucion);
            formData.append('cveSentido', $("#cmbSentido").val());
            formData.append('idCateo', registro);
            formData.append('calificada', calificada);
            formData.append('fileSolicitud', $('#fileSolicitud')[0].files[0]);

            var urlToSend = "../fachadas/sigejupe/apelacioncateos/ApelacioncateosFacade.Class.php"
            $.ajax({
                url: encodeURI(urlToSend),
                type: "POST",
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                processData: false,
                success: function (data) {
                    try {
                        data = eval("(" + data + ")");
                        $("#divAlertWarning").html("");
                        if (data.type == "OK") {
                            $("#divAlertSuccess").html(data.text).show();
                            document.getElementById('btnAnterior').style.display = 'inline-block';
                            $("#btnEnviar").before(' <button class="btn btn-primary" style="display:inline-block" id="nueva" name="imprimir" onclick="javascript:apelacionCateos.nueva()">Nueva Solicitud</button>');
                        } else {
                            $("#divAlertWarning").html(data.text);
                            $("#divAlertWarning").show("slide");
                            setTimeAlert("divAlertWarning");
                            document.getElementById('btnEnviar').style.display = 'inline-block';
                            document.getElementById('btnAnterior').style.display = 'inline-block';
                        }
                    } catch (ex) {
                        $("#divAlertWarning").html(data.text);
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        document.getElementById('btnEnviar').style.display = 'inline-block';
                        document.getElementById('btnAnterior').style.display = 'inline-block';
                    }
                }
            });
        },
        nueva: function () {
            this.cveRegistro = 0;
            this.btnRespuesta = 0;
            document.getElementById('btnEnviar').style.display = 'inline-block';
            document.getElementById('btnAnterior').style.display = 'inline-block';
            $("#imprimir").remove();
            $("#nueva").remove();
            UE.getEditor('descResolucion').setContent("", false);
            $("#divAlertSuccess").html("").hide();
            this.siguiente("liPaso1", "liPaso5");
            $("#frmSolicitud")[0].reset();
            this.limpiar();
        },
    }
}
