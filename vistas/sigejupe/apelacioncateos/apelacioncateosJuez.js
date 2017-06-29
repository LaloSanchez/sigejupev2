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
            var type = 2;
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
        limpiar: function (paso) {
            $("#txtNumCateoConsultar").val("");
            $("#txtAniCateoConsultar").val("");
            $("#fechaConsultar").val(moment().format('DD/MM/YYYY'));
            $("#fechaConsultarEnd").val(moment().format('DD/MM/YYYY'));
            $("#informationTable").DataTable().destroy();
            $("#informationTable > tbody ").remove();
            $("#informationTable").parent().parent().hide();
            UE.getEditor('txtAcuerdo').setContent("", false);
            this.siguiente("liPaso1", "liPaso" + paso);
            $(".infos").html("");
            $(".paginacion").hide();
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

            }
        },
        solicitudInformacion: function (registro, typeConsulta) {
            $("#informeAgravioTexto").html("");
            $("#informeEscritoApelacionTexto").html("");
            var self = this;
            $.ajax({
                url: "../fachadas/sigejupe/apelacioncateos/ApelacioncateosFacade.Class.php",
                data: "accion=consultarDetalleCateoApelacion&idCateo=" + registro + "&juez=2",
                type: "POST",
                success: function (data) {
                    try {
                        mS.cveRegistro = 0;
                        var datos = eval("(" + data + ")");
                        if (datos.type == "OK") {
                            var i = 0;
                            $.each(datos.data, function (index, value) {
                                $(".nmcat").text(value.cateo.numeroCateo + "/" + value.cateo.anioCateo);
                                $(".nommp").text(value.solicitudCateo.nombreUsuario);
                                $(".fecsol").text(value.solicitudCateo.fechaRegistro);
                                $(".emailMp").html("<a href='mailto:" + value.cateo.email.toLowerCase() + "' > " + value.cateo.email.toLowerCase() + "</a>");
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
                                $("#informeAgravioTexto").html(value.apelacion.agravios);
                                $("#informeEscritoApelacionTexto").html(value.apelacion.escritoApelacion);
                                // Verificamos si existe un documento   
                                if (value.documentoMP != "") {
                                    var pathDocument = (value.documentoMP).substring(9);
                                    var position = (value.documento).lastIndexOf("/");
                                    var name = (value.documentoMP).substring((position + 1));
                                    $("fileFound").html("<div class='text-center' ><br /><a href='../" + pathDocument + "' >ARCHIVO PROPORCIONADO POR EL MINISTERIO P&Uacute;BLICO PARA LA SOLICITUD DE APELACI&Oacute;N DE CATEO</a><br /><br /></div>");
                                } else {
                                    $("fileFound").html(" *No se Encontraron resultados <p>&nbsp;</p>");
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
        validarPaso2: function (ir) {
            var isValid = true;
            var msj = "";

            var txtAcuerdo = UE.getEditor('txtAcuerdo').getContent();
            if (txtAcuerdo == "") {
                isValid = false;
                msj += 'Escriba el Acuerdo <br />';
            }

            if (ir == 'S') {
                if (!isValid) {
                    this.siguiente('liPaso2', 'liPaso3', '');
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html(msj);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                } else {
                    this.siguiente('liPaso3', 'liPaso2', '');
                }
            }
            return isValid;
        },
        validarPaso5: function () {
            var chkTerminosUso = document.getElementById("chkAceptar");
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
                        this.sendInfo();
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

            if (this.validarPaso2() == false) {
                isStepValid = false;
                this.siguiente('liPaso2', 'liPaso5', '');
                return isStepValid;
            }

            return isStepValid;
        },
        sendInfo: function () {
            var txtAcuerdo = UE.getEditor('txtAcuerdo').getContent();
            var registro = this.cveRegistro;

            var formData = new FormData();
            formData.append('accion', "guardarApelacionJuez");
            formData.append('acuerdo', txtAcuerdo);
            formData.append('idCateo', registro);
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
                            $("#divAlertSuccess").html(data.text);
                            $("#divAlertSuccess").show("slide");
                            setTimeAlert("divAlertSuccess");
                            $("#imprimir").remove();
                            document.getElementById('btnAnterior').style.display = 'inline-block';
                            document.getElementById('btnEnviar').style.display = 'none';
                            $("#btnEnviar").before(' <button class="btn btn-primary" style="display:inline-block" id="nueva" name="imprimir" onclick="javascript:apelacionCateos.nueva()">Nueva Solicitud</button>');
                            $("cateonumber").text(data.numeroCateo);
                            $(".registerCateo").show();
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
            loadOpcion('sigejupe/apelacioncateos/frmApelacionJuezView.php', 'areadetrabajo');
        },
    }
}
