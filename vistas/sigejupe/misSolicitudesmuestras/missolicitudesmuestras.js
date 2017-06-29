var misSolicitudesMuestras = function () {
    return {
        ultimoPaso: 6,
        tblExamenesFisicos_Array: new Array(),
        tblTomadeMuestras_Array: new Array(),
        tblImputados_Array: new Array(),
        tblVictimas_Array: new Array(),
        tblTutores: new Array(),
        cveRegistro: 0,
        cveDatosJuez: 1,
        limpiar: function (pag, mensaje) {
            $(".paginacion").hide();
            var status = true;
            if (mensaje) {
                if (!confirm("\u00BFEsta seguro de limpiar todos los campos?") == true) {
                    $("#cmbJuzgadoSolicitar").val("0");
                    status = false;
                }
            }
            if (status) {
                switch (pag)
                {
                    case 1:
                        break;
                    case 2:
                        this.siguiente('liPaso1', 'liPaso2', '');
                        break;
                    case 3:
                        this.siguiente('liPaso1', 'liPaso3', '');
                        break;
                    case 4:
                        this.siguiente('liPaso1', 'liPaso4', '');
                        break;
                    case 5:
                        this.siguiente('liPaso1', 'liPaso5', '');
                        break;
                    case 6:
                        this.siguiente('liPaso1', 'liPaso6', '');
                        break;
                }
                this.inicia(1);
                this.cveRegistro = 0;
                ultimoPaso = 6;
                this.cveDatosJuez = 1;
                var divSolicitudesMinisterioPublico = document.getElementById("divSolicitudesMinisterioPublico");
                divSolicitudesMinisterioPublico.innnerHTML = "";
                var chkRespuestaConcedida = document.getElementById("chkRespuestaConcedida");
                var chkRespuestaNegada = document.getElementById("chkRespuestaNegada");
                var plazoPractica = document.getElementsByName("plazoPractica");
                var plazoInforme = document.getElementsByName("plazoInforme");
                var fechaPractica = document.getElementById("fechaPractica");
                var fechaInforme = document.getElementById("fechaInforme");
                var cmbHorasPractica = document.getElementById("HorasPractica");
                var cmbHorasInforme = document.getElementById("HorasInforme");
                var plazoHorasPractica = document.getElementById("plazoHorasPractica");
                var plazoHorasInforme = document.getElementById("plazoHorasInforme");
                var txtNombrePersona = document.getElementById("txtNombrePersona");
                var txtPaternoPersona = document.getElementById("txtPaternoPersona");
                var txtMaternoPersona = document.getElementById("txtMaternoPersona");
                var txtDomiciolopersona = document.getElementById("txtDomiciolopersona");
                var cmbGeneroPersona = document.getElementById("cmbGeneroPersona");
                var txtNombreObjeto = document.getElementById("txtNombreObjeto");
                var txtDomicioloObjeto = document.getElementById("txtDomicioloObjeto");
                chkRespuestaConcedida.checked = true;
                chkRespuestaNegada.checked = true;
                plazoPractica.checked = false;
                plazoInforme.checked = false;
                fechaPractica.value = "";
                fechaInforme.value = "";
                cmbHorasPractica.value = "";
                cmbHorasInforme.value = "";
                plazoHorasPractica.value = "";
                plazoHorasInforme.value = "";
                txtNombrePersona.value = "";
                txtPaternoPersona.value = "";
                txtMaternoPersona.value = "";
                txtDomiciolopersona.value = "";
                cmbGeneroPersona.value = "";
                txtNombreObjeto.value = "";
                txtDomicioloObjeto.value = "";
                this.limpiarTablasSinCheck("tblImputadosV");
                this.limpiarTablasSinCheck("tblVictimasV");
                this.limpiarTablasSinCheck("tblImputados");
                this.limpiarTablasSinCheck("tblVictimas");
                this.limpiarTablasSinCheck("tblDelitos");
                this.tblTomadeMuestras_Array = new Array();
                this.tblExamenesFisicos_Array = new Array();
                var descMuestraResolucion = document.getElementById("descMuestraResolucion");
                var descMuestraNegado = document.getElementById("descMuestraNegado");
                descMuestraResolucion.value = "";
                descMuestraNegado.value = "";
                var chkTerminosUso = document.getElementById("chkTerminosUso");
                var txtJuez = document.getElementById("txtJuez");
                var txtCargo = document.getElementById("txtCargo");
                var txtJuzgado = document.getElementById("txtJuzgado");
                chkTerminosUso.checked = false;
                txtJuez.value = "";
                txtCargo.value = "";
                txtJuzgado.value = "";
                this.limpiarTablasSinCheck("tblMpsResponsables");
                $('#msg_seleccionRegistro').html('').hide();
                $('#msg_respuesta').html('').hide();
                $('#msg_periodoFechaPractica').html('').hide();
                $('#msg_periodoFechaInforme').html('').hide();
                $('#msg_personasAprehenderse').html('').hide();
                $('#msg_descMuestraResolucion').html('').hide();
                $('#msg_desMuestraNegado').html('').hide();
                $('#msg_terminosUso').html('').hide();
                $('#msg_datosJuez').html('').hide();
                document.getElementById("comprobante").style.display = "none";
                document.getElementById("accion").style.display = "none";
                document.getElementById("accion").value = "generaComprobante";
                document.getElementById("idRegistro").style.display = "none";
                document.getElementById("idRegistro").value = "";
                document.getElementById("enviar").style.display = "inline-block";
                var ue = UE.getEditor('descMuestraResolucion');
                ue.ready(function () {
                    ue.setContent("");
                });
                var ued = UE.getEditor('descMuestraNegado');
                ued.ready(function () {
                    ued.setContent("");
                });
            }
        },
        inicia: function (pagAux) {
            this.siguiente('liPaso1', 'liPaso2');
            var self = this;
            var pag = 1;
            if (pagAux == 0 || pagAux == "" || pagAux == "undefined") {
                pag = $("#cmbPaginacion").val();
            }
            var cantReg = $("#cmbNumReg").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php",
                data: "accion=consultarMuestra&pag=" + pag + "&cantxPag=" + cantReg,
                async: true,
                success: function (datos) {
                    $(".notification").remove();
                    self.limpiarTablasSinCheck("tblSolicitudes");
                    datos = eval("(" + datos + ")");
                    if (datos.type == "OK") {
                        var table = "<tbody>";
                        var i = 0;
                        var paginas = datos.paginas.split(",");
                        var options = "";
                        $("#cmbPaginacion option").remove();
                        var pagina = 1;
                        for (var i = 0; i < paginas.length; i++) {
                            if (pag == paginas[i]) {
                                pagina = paginas[i];
                                options += "<option selected='selected' value='" + paginas[i] + "' >" + paginas[i] + "</option>"
                            } else {
                                options += "<option value='" + paginas[i] + "' >" + paginas[i] + "</option>"
                            }
                        }
                        var count = 0;
                        if (pagina != 1) {
                            count = (pagina - 1) * cantReg;
                        }
                        $("#cmbPaginacion").append(options);
                        $(".paginacion").show();
                        $("#totalReg").html("<strong> Total: " + datos.total + "</strong>");
                        $.each(datos, function (index, val) {
                            if (index != "type" && index != "total" && index != "paginas") {
                                $.each(val, function (indexS, valS) {
                                    table += "<tr onclick= 'javascript:mS.seleccionaRegistro(" + valS.respmuestra.idMuestra + ")' >";
                                    table += "<td>" + (count + 1) + "</td>";
                                    table += "<td>" + valS.solicitudMuestra.desJuzgado + "</td>";
                                    table += "<td>" + valS.respmuestra.numeroMuestra + "/" + valS.respmuestra.anioMuestra + "</td>";
                                    table += "<td>" + valS.solicitudMuestra.carpetaInv + "</td>";
                                    var imputados = "";
                                    var ofendidos = "";
                                    if (valS.imputados.length > 0) {
                                        var z = 0;
                                        $.each(valS.imputados, function (indxImputado, valImputado) {
                                            if (valImputado.cveTipoPersona != 2 && valImputado.cveTipoPersona != 3) {
                                                imputados += valImputado.nombre + " " +
                                                        valImputado.paterno + " " + valImputado.materno + ", ";
                                            } else {
                                                imputados += valImputado.nombreMoral + ", ";
                                            }

                                            if (z == 1) {
                                                imputados += "<br />  ";
                                                z = 0;
                                            } else {
                                                z++;
                                            }
                                        });
                                        imputados = imputados.substr(0, imputados.length - 2);
                                    } else {
                                        imputados = "Sin Registros";
                                    }

                                    if (valS.ofendidos.length > 0) {
                                        var z = 0;
                                        $.each(valS.ofendidos, function (indxOfendido, valOfendido) {
                                            if (valOfendido.cveTipoPersona != 2 && valOfendido.cveTipoPersona != 3) {
                                                ofendidos += valOfendido.nombre + " " +
                                                        valOfendido.paterno + " " + valOfendido.materno + ", ";
                                            } else {
                                                ofendidos += valOfendido.nombreMoral + ", ";
                                            }
                                            if (z == 1) {
                                                ofendidos += "<br />  ";
                                                z = 0;
                                            } else {
                                                z++;
                                            }
                                        });
                                        ofendidos = ofendidos.substr(0, ofendidos.length - 2);
                                    } else {
                                        ofendidos = "Sin Registros";
                                    }
                                    table += "<td>Imputados : " + imputados + " / Ofendidos : " + ofendidos + "</td>";
                                    table += "<td>" + valS.solicitudMuestra.fechaRegistro + "</td>";
                                    table += "</tr>";
                                    count++;
                                });
                            }
                        });
                        table += "</tbody>";
                        $("#tblSolicitudes").append(table);
                        $("#tblSolicitudes").parent().show();
                        $("#tblSolicitudes").DataTable().destroy();
                        $("#tblSolicitudes").DataTable();
                    } else {
                        $("#tblSolicitudes").parent().hide();
                        $("#tblSolicitudes").parent().after("<div class='alert alert-info notification' >No Hay Resultados</div>");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Error en la petici&oacute;n: <br />" + otroobj);
                    $("#divAlertWarning").show("slide");
                    $(".paginacion").hide();
                    setTimeAlert("divAlertWarning");
                }
            });
            //inicializa variables
            var practica = document.getElementById("practica");
            var informe = document.getElementById("informe");
            var divNotaConcedido = document.getElementById("divNotaConcedido");
            var divNotaNegado = document.getElementById("divNotaNegado");
            var chkRespuestaConcedida = document.getElementById("chkRespuestaConcedida");
            var chkRespuestaNegada = document.getElementById("chkRespuestaNegada");
            var fechaHoraPractica = document.getElementById("fechaHoraPractica");
            var HorasPractica = document.getElementById("HorasPractica");
            var fechaHoraInforme = document.getElementById("fechaHoraInforme");
            var HorasInforme = document.getElementById("HorasInforme");
            chkRespuestaConcedida.checked = true;
            chkRespuestaNegada.checked = true;
            var nodes = practica.getElementsByTagName('*');
            for (var i = 0; i < nodes.length; i++)
            {
                nodes[i].removeAttribute('disabled');
            }
            var nodes = informe.getElementsByTagName('*');
            for (var i = 0; i < nodes.length; i++)
            {
                nodes[i].removeAttribute('disabled');
            }

            divNotaConcedido.style.display = 'block';
            divNotaNegado.style.display = 'block';
            document.getElementsByName("plazoPractica")[0].checked = true;
            document.getElementsByName("plazoInforme")[0].checked = true;
            document.getElementsByName("plazoInforme")[1].checked = false;
            document.getElementsByName("rindeInforme")[0].checked = true;
            document.getElementsByName("rindeInforme")[1].checked = false;
            fechaHoraPractica.style.display = 'block';
            HorasPractica.style.display = 'none';
            fechaHoraInforme.style.display = 'block';
            HorasInforme.style.display = 'none';
            document.getElementById("comprobante").style.display = "none";
            var nueva = document.getElementById("nueva");
            nueva.style.display = 'none';
            var imprimir = document.getElementById("imprimir");
            imprimir.style.display = 'none';
        },
        siguiente: function (sig, act, validar) {
            var next = document.getElementById(sig);
            var actual = document.getElementById(act);
            sig = sig.substring(2, 7);
            act = act.substring(2, 7);
            var divPaso1 = document.getElementById('div' + act);
            var divPaso2 = document.getElementById('div' + sig);
            if (sig == "Paso4" && act == "Paso5") {
                var chkRespuestaNegada = document.getElementById("chkRespuestaNegada");
                if (!chkRespuestaNegada.checked) {
                    this.siguiente('liPaso3', 'liPaso5', '');
                    return;
                } else {
                    divPaso1.style.display = 'none';
                    divPaso2.style.display = 'block';
                }
            } else {
                divPaso1.style.display = 'none';
                divPaso2.style.display = 'block';
            }
            $("." + sig).find("a").addClass("active");
            $("." + act).find("a").removeClass("active");
            if (typeof validar != "undefined") {
                if (validar.trim() != "") {
                    eval(validar + "()");
                }
            }
            helper.getInfoUsuarios("respuestamuestra");
        },
        validarPaso6: function () {
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

            if (this.cveDatosJuez != 1) {
                isValid = false;
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html("No se encontrar\u00f3n datos del Juez");
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                return;
            }

            if (isValid) {
                var chkRespuestaConcedida = document.getElementById("chkRespuestaConcedida");
                var chkRespuestaNegada = document.getElementById("chkRespuestaNegada");
                var rindeInforme = document.getElementsByName("rindeInforme");
                var plazoPractica = document.getElementsByName("plazoPractica");
                var plazoInforme = document.getElementsByName("plazoInforme");
                var fechaPractica = document.getElementById("fechaPractica");
                var fechaInforme = document.getElementById("fechaInforme");
                var cmbHorasPractica = document.getElementById("HoraPractica");
                var cmbHorasInforme = document.getElementById("HoraInforme");
                var plazoHorasPractica = document.getElementById("plazoHorasPractica");
                var plazoHorasInforme = document.getElementById("plazoHorasInforme");
                var descMuestraResolucion = document.getElementById("descMuestraResolucion");
                var descMuestraNegado = document.getElementById("descMuestraNegado");
                var respuestaSolicitud = 0;
                if (!chkRespuestaNegada.checked) {
                    var ued = UE.getEditor('descMuestraNegado');
                    ued.ready(function () {
                        ued.setContent("");
                    });
                }
                if (chkRespuestaConcedida.checked && chkRespuestaNegada.checked) {
                    respuestaSolicitud = 3;
                } else if (chkRespuestaConcedida.checked && !chkRespuestaNegada.checked) {
                    respuestaSolicitud = 2;
                } else if (!chkRespuestaConcedida.checked && chkRespuestaNegada.checked) {
                    respuestaSolicitud = 1;
                }

                if (plazoPractica[0].checked) {
                    plazoHorasPractica.value = "";
                }
                if (plazoPractica[1].checked) {
                    fechaPractica.value = "";
                    cmbHorasPractica.value = "";
                }

                if (rindeInforme[0].checked) {
                    if (plazoInforme[0].checked) {
                        plazoHorasInforme.value = "";
                    }
                    if (plazoInforme[1].checked) {
                        fechaInforme.value = "";
                        cmbHorasInforme.value = "";
                        ;
                    }
                } else {
                    plazoHorasInforme.value = "";
                    fechaInforme.value = "";
                    cmbHorasInforme.value = "";
                }

                if (this.validateAllSteps()) {
                    if (confirm("\u00BFEsta seguro de registrar la solicitud?") == true) {
                        var limpiar6 = document.getElementById("limpiar6");
                        var anterior6 = document.getElementById("anterior6");
                        var enviar = document.getElementById("enviar");
                        var nueva = document.getElementById("nueva");
                        var imprimir = document.getElementById("imprimir");
                        var tiempoP = cmbHorasPractica.value;
                        var tiempoI = cmbHorasInforme.value;
                        var fechaPracticaT = "";
                        if (fechaPractica.value != "") {
                            fechaPracticaT = fechaPractica.value.split("/");
                            fechaPracticaT = fechaPracticaT[2] + "-" + fechaPracticaT[1] + "-" + fechaPracticaT[0]
                        } else {
                            fechaPracticaT = "";
                        }
                        var fechaInformeT = "";
                        if (fechaInforme.value != "") {
                            fechaInformeT = fechaInforme.value.split("/");
                            fechaInformeT = fechaInformeT[2] + "-" + fechaInformeT[1] + "-" + fechaInformeT[0]
                        } else {
                            fechaInformeT = "";
                        }
                        if (tiempoP != "") {
                            tiempoP = tiempoP + ":00"
                        } else {
                            tiempoP = ""
                        }
                        if (tiempoI != "") {
                            tiempoI = tiempoI + ":00"
                        } else {
                            tiempoI = ""
                        }
                        var datos = {
                            "accion": "guardarMuestras",
                            "idMuestra": this.cveRegistro,
                            "imputadosArray": "[" + this.tblImputados_Array + "]",
                            "victimasArray": "[" + this.tblVictimas_Array + "]",
                            "muestrasArray": "[" + this.tblTomadeMuestras_Array + "]",
                            "examenesArray": "[" + this.tblExamenesFisicos_Array + "]",
                            "tutoresArray": "[" + this.tblTutores + "]",
                            "respuestaMuestra": respuestaSolicitud,
                            "fechaPractica": fechaPracticaT,
                            "fechaInforme": fechaInformeT,
                            "horaPractica": tiempoP,
                            "horaInforme": tiempoI,
                            "horasPractica": plazoHorasPractica.value,
                            "horasInforme": plazoHorasInforme.value,
                            "detalleResolucion": UE.getEditor('descMuestraResolucion').getContent(),
                            "detalleNegacion": UE.getEditor('descMuestraNegado').getContent()
                        }
                        this.sendInfo(datos);
                    }
                }
            }

            return isValid;
        },
        validateAllSteps: function () {
            var isStepValid = true;
            if (this.validarPaso1() == false) {
                isStepValid = false;
                this.siguiente('liPaso1', 'liPaso6', '');
                return isStepValid;
            }

            if (this.validarPaso3() == false) {
                isStepValid = false;
                this.siguiente('liPaso3', 'liPaso6', '');
                return isStepValid;
            }

            if (this.validarPaso4() == false) {
                isStepValid = false;
                this.siguiente('liPaso4', 'liPaso6', '');
                return isStepValid;
            }
            if (this.validarPaso5() == false) {
                isStepValid = false;
                this.siguiente('liPaso5', 'liPaso6', '');
                return isStepValid;
            }

            return isStepValid;
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
            var isValidAux = true;
            var auxFecha = "";
            var auxHora = "";
            var chkRespuestaConcedida = document.getElementById("chkRespuestaConcedida");
            var chkRespuestaNegada = document.getElementById("chkRespuestaNegada");
            var rindeInforme = document.getElementsByName("rindeInforme");
            var plazoPractica = document.getElementsByName("plazoPractica");
            var plazoInforme = document.getElementsByName("plazoInforme");
            var fechaPractica = document.getElementById("fechaPractica");
            var fechaInforme = document.getElementById("fechaInforme");
            var cmbHorasPractica = document.getElementById("HoraPractica");
            var cmbHorasInforme = document.getElementById("HoraInforme");
            var plazoHorasPractica = document.getElementById("plazoHorasPractica");
            var plazoHorasInforme = document.getElementById("plazoHorasInforme");
            var msj = "";
            if (!chkRespuestaConcedida.checked && !chkRespuestaNegada.checked) {
                isValid = false;
                msj += 'Seleccione al menos una Respuesta <br />';
            }

            if ((chkRespuestaConcedida.checked && chkRespuestaNegada.checked) || (chkRespuestaConcedida.checked && !chkRespuestaNegada.checked)) {
                if (!plazoPractica[0].checked && !plazoPractica[1].checked) {
                    isValid = false;
                    msj += 'Seleccione fecha o periodo para su practica <br />';
                }

                if (rindeInforme[0].checked) {
                    if (!plazoInforme[0].checked && !plazoInforme[1].checked) {
                        isValid = false;
                        msj += 'Seleccione fecha o periodo para su informe <br />';
                    }

                    if (plazoInforme[0].checked) {
                        isValidAux = true;
                        auxFecha = "";
                        auxHora = "";
                        if ((fechaInforme.length >= 10 || fechaInforme.length <= 0) || (fechaInforme.value == "")) {
                            isValidAux = false;
                            auxFecha = "fecha";
                        }

                        if ((cmbHorasInforme.value == 0 || cmbHorasInforme.value == "")) {
                            isValidAux = false;
                            auxHora = "hora";
                        } else {
                            var hora = $("#HoraInforme").val().split(':');
                            if (hora.length < 2) {
                                isValidAux = false;
                                auxHora = "hora";
                            } else {
                                if (hora[0].length < 1) {
                                    hora[0] = "00";
                                } else {
                                    if (hora[0].length < 2) {
                                        hora[0] = "0" + hora[0];
                                    }
                                }

                                if (hora[1].length < 1) {
                                    hora[1] = "00";
                                } else {
                                    if (hora[1].length < 2) {
                                        hora[1] = "0" + hora[1];
                                    }
                                }
                                $("#HoraInforme").val(hora[0] + ":" + hora[1]);
                            }
                        }

                        if (!isValidAux) {
                            isValid = false;
                            msj += 'Seleccione ' + auxFecha + ' ' + auxHora + ' para su informe <br />';
                        }
                    }

                    if (plazoInforme[1].checked) {
                        if (!plazoHorasInforme.value) {
                            isValid = false;
                            msj += 'Ingrese la cantidad en Horas para su Informe <br />';
                        }
                    }
                }

                if (plazoPractica[0].checked) {
                    isValidAux = true;
                    auxFecha = "";
                    auxHora = "";
                    if ((fechaPractica.length >= 10 || fechaPractica.length <= 0) || (fechaPractica.value == "")) {
                        isValidAux = false;
                        auxFecha = "fecha";
                    }
                    if ((cmbHorasPractica.value == 0 || cmbHorasPractica.value == "")) {
                        isValidAux = false;
                        auxHora = "hora";
                    } else {
                        var hora = $("#HoraPractica").val().split(':');
                        if (hora.length < 2) {
                            isValidAux = false;
                            auxHora = "hora";
                        } else {
                            if (hora[0].length < 1) {
                                hora[0] = "00";
                            } else {
                                if (hora[0].length < 2) {
                                    hora[0] = "0" + hora[0];
                                }
                            }

                            if (hora[1].length < 1) {
                                hora[1] = "00";
                            } else {
                                if (hora[1].length < 2) {
                                    hora[1] = "0" + hora[1];
                                }
                            }
                            $("#HoraPractica").val(hora[0] + ":" + hora[1]);
                        }
                    }

                    if (!isValidAux) {
                        isValid = false;
                        msj += 'Seleccione ' + auxFecha + ' ' + auxHora + ' para su Pr\u00e1ctica <br />';
                    }
                }

                if (plazoPractica[1].checked) {
                    if (!plazoHorasPractica.value) {
                        isValid = false;
                        msj += 'Ingrese la cantidad en Horas para su Pr\u00e1ctica';
                    }
                }

            }

            if (ir == 'S') {
                if (!isValid) {
                    this.siguiente('liPaso3', 'liPaso4', '');
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html(msj);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                } else {

                    if (!chkRespuestaNegada.checked) {
                        this.siguiente('liPaso5', 'liPaso3', '');
                        return isValid;
                    } else {

                        this.siguiente('liPaso4', 'liPaso3', '');
                    }
                }
            }
            return isValid;
        },
        validarPaso4: function (ir) {
            var isValid = true;
            var chkRespuestaNegada = document.getElementById("chkRespuestaNegada");
            var descMuestraNegado = UE.getEditor('descMuestraNegado').getContent();
            var msj = "";
            if (chkRespuestaNegada.checked && descMuestraNegado == "") {
                isValid = false;
                msj += 'Ingrese la descripcion o nota de la toma de muestra negado';
            }

            if (ir == 'S') {
                if (!isValid) {
                    this.siguiente('liPaso4', 'liPaso3', '');
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html(msj);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                } else {
                    this.siguiente('liPaso5', 'liPaso4', '');
                }
            }
            return isValid;
        },
        validarPaso5: function (ir) {
            var isValid = true;
            var descMuestraResolucion = UE.getEditor('descMuestraResolucion').getContent();
            var msj = "";
            if (descMuestraResolucion == "") {
                isValid = false;
                msj += 'Ingrese la descripci&oacute;n o nota de la resoluci&oacute;n';
            }
            if (ir == 'S') {
                if (!isValid) {
                    this.siguiente('liPaso5', 'liPaso6', '');
                    if (msj != "") {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html(msj);
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                    }
                } else {
                    this.siguiente('liPaso6', 'liPaso5', '');
                }
            }

            return isValid;
        },
        sendInfo: function (datos) {
            var limpiar6 = document.getElementById("limpiar6");
            var anterior6 = document.getElementById("anterior6");
            var enviar = document.getElementById("enviar");
            var nueva = document.getElementById("nueva");
            var imprimir = document.getElementById("imprimir");
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/respuestamuestra/RespuestamuestraFacade.Class.php",
                data: datos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    limpiar6.style.display = "none";
                    anterior6.style.display = "none";
                    enviar.style.display = "none";
                },
                success: function (datos) {

                    var Json = eval("(" + datos + ")");
                    var mensaje = Json.text;
                    if (Json.type == "OK") {
                        $("#divAlertSuccess").html("");
                        $("#divAlertSuccess").html(mensaje);
                        $("#divAlertSuccess").show("slide");
                        setTimeAlert("divAlertSuccess");
                        //this.generaComprobante();
                        enviar.style.display = "none";
                        limpiar6.style.display = "none";
                        anterior6.style.display = "inline-block";
                        nueva.style.display = "inline-block";
                        imprimir.style.display = "inline-block";
                        SwitchChat(chatid, "", "", "CHAT CERRADO", "RED");
                    } else {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html(mensaje);
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        limpiar6.style.display = "inline-block";
                        anterior6.style.display = "inline-block";
                        enviar.style.display = "inline-block";
                        nueva.style.display = "none";
                        imprimir.style.display = "none";
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Error en la petici\u00f3n: <br />" + otroobj);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }
            });
        },
        addRow: function (idTable) {
            var table = document.getElementById(idTable);
            var tr = document.createElement("TR");
            var td = document.createElement("td");
            var input = document.createElement("input");
            input.type = "checkbox";
            input.name = idTable + "_chkFila";
            input.id = idTable + "_chkFila";
            td.appendChild(input);
            td.align = 'center';
            tr.appendChild(td);
            for (var index = 1; index < arguments.length; index++) {
                var td = document.createElement("TD");
                var div = document.createElement("div");
                div.innerHTML = arguments[index]
                td.appendChild(div);
                tr.appendChild(td);
            }
            var self = this;
            tr.onclick = function () {
                self.editRow(this, idTable);
            }

            if (typeof table.tBodies[0] == "undefined") {
                var tBody = document.createElement("TBODY");
                tBody.appendChild(tr);
                table.appendChild(tBody);
            } else {
                table.tBodies[0].appendChild(tr);
            }
        },
        deleteRow: function (object) {
            var tablaExamens = "";
            var tablaMuestras = "";
            if (confirm("\u00BFEstas seguro de eliminar este registro?") == true) {
                var table = object.parentNode.parentNode.parentNode.parentNode;
                var tabla = "";
                tabla = table.id;
                var checkbox = document.getElementsByName(table.id + '_chkFila');
                var posicion = 0;
                var id_ant = 0;
                var self = this;
                for (var index = 0; index < checkbox.length; index++) {
                    if (checkbox[index].checked == true) {
                        table.tBodies[0].removeChild(checkbox[index].parentNode.parentNode);
                        tabla = table.id;
                        tablaExamens = this.tblExamenesFisicos_Array;
                        tablaMuestras = this.tblTomadeMuestras_Array;
                        tablaExamens = eval("([" + tablaExamens + "])");
                        tablaMuestras = eval("([" + tablaMuestras + "])");
                        if (this.tblExamenesFisicos_Array.length != 0) {
                            var indice = 0;
                            $.each(tablaExamens, function (indexe, vale) {
                                if (vale.tipo == table.id && vale.id == posicion) {
                                    eval("self.tblExamenesFisicos_Array.splice(" + indice + ",1)");
                                    if (indice == 0) {
                                        indice = 0;
                                    } else {
                                        indice = indice - 1;
                                    }
                                } else {
                                    indice++;
                                }
                            });
                        }

                        if (this.tblTomadeMuestras_Array.length != 0) {
                            var indice = 0;
                            $.each(tablaMuestras, function (indexm, valm) {
                                if (valm.tipo == table.id && valm.id == posicion) {
                                    eval("self.tblTomadeMuestras_Array.splice(" + indice + ",1)");
                                    if (indice == 0) {
                                        indice = 0;
                                    } else {
                                        indice = indice - 1;
                                    }
                                } else {
                                    indice++;
                                }
                            });
                        }

                        var tutores = eval("([" + this.tblTutores + "])");
                        var indice = 0;
                        $.each(tutores, function (indt, valt) {
                            if (posicion == valt.IdOfendido) {
                                eval("self.tblTutores.splice(" + indice + ",1)");
                            }
                            indice++;
                        });

                        eval("this." + table.id + "_Array.splice(" + index + ",1)");
                        index = index - 1;
                    } else {

                        tablaExamens = this.tblExamenesFisicos_Array;
                        tablaMuestras = this.tblTomadeMuestras_Array;
                        tablaExamens = eval("([" + tablaExamens + "])");
                        tablaMuestras = eval("([" + tablaMuestras + "])");
                        if (this.tblExamenesFisicos_Array.length != 0) {
                            var contador = 0;
                            $.each(tablaExamens, function (index, vale) {
                                if (vale.tipo == tabla && posicion == vale.id) {
                                    var string = "{";
                                    string += "\"id\":\"" + id_ant + "\",\"";
                                    string += "tipo\":\"" + vale.tipo + "\",\"";
                                    string += "desItem\":\"" + vale.desItem + "\",\"";
                                    string += "idItem\":\"" + vale.idItem + "\"";
                                    string += "}";
                                    self.tblExamenesFisicos_Array[contador] = string;
                                }
                                contador++;
                            });
                        }

                        if (this.tblTomadeMuestras_Array.length != 0) {
                            var contador = 0;
                            $.each(tablaMuestras, function (index, valm) {
                                if (valm.tipo == tabla && posicion == valm.id) {
                                    var string = "{";
                                    string += "\"id\":\"" + id_ant + "\",\"";
                                    string += "tipo\":\"" + valm.tipo + "\",\"";
                                    string += "desItem\":\"" + valm.desItem + "\",\"";
                                    string += "idItem\":\"" + valm.idItem + "\"";
                                    string += "}";
                                    self.tblTomadeMuestras_Array[contador] = string;
                                }
                                contador++;
                            });
                        }

                        if (posicion != 0 && id_ant == 0) {
                            id_ant++;
                        } else if (id_ant == 0 && posicion == 0) {
                            id_ant++;
                        } else if (posicion != 0 && id_ant != 0) {
                            id_ant++;
                        }
                    }
                    posicion++;
                }
            }
            $(".editImputado").html("");
            $(".addImputado").show();
            $(".editOfendido").html("");
            $(".addOfendido").show();
            this.cancelEdit();
            this.drawTable(table.id);
        },
        seleccionaRespuesta: function () {
            var practica = document.getElementById("practica");
            var informe = document.getElementById("informe");
            var divNotaConcedido = document.getElementById("divNotaConcedido");
            var divNotaNegado = document.getElementById("divNotaNegado");
            var chkRespuestaConcedida = document.getElementById("chkRespuestaConcedida");
            var chkRespuestaNegada = document.getElementById("chkRespuestaNegada");
            if (!chkRespuestaConcedida.checked && !chkRespuestaNegada.checked) {
                var nodes = practica.getElementsByTagName('*');
                for (var i = 0; i < nodes.length; i++) {
                    nodes[i].setAttribute('disabled', true);
                }

                var nodes = informe.getElementsByTagName('*');
                for (var i = 0; i < nodes.length; i++) {
                    nodes[i].setAttribute('disabled', true);
                }

                divNotaNegado.style.display = 'none';
                var ued = UE.getEditor('descMuestraNegado');
                ued.ready(function () {
                    ued.setContent("");
                });
            } else {
                if (chkRespuestaConcedida.checked && chkRespuestaNegada.checked) {
                    var nodes = practica.getElementsByTagName('*');
                    for (var i = 0; i < nodes.length; i++) {
                        nodes[i].removeAttribute('disabled');
                    }
                    var nodes = informe.getElementsByTagName('*');
                    for (var i = 0; i < nodes.length; i++)
                    {
                        nodes[i].removeAttribute('disabled');
                    }
                    divNotaNegado.style.display = 'block';
                } else {
                    if (chkRespuestaConcedida.checked) {
                        var nodes = practica.getElementsByTagName('*');
                        for (var i = 0; i < nodes.length; i++)
                        {
                            nodes[i].removeAttribute('disabled');
                        }
                        var nodes = informe.getElementsByTagName('*');
                        for (var i = 0; i < nodes.length; i++)
                        {
                            nodes[i].removeAttribute('disabled');
                        }
                        divNotaConcedido.style.display = 'block';
                        divNotaNegado.style.display = 'none';
                        var ued = UE.getEditor('descMuestraNegado');
                        ued.ready(function () {
                            ued.setContent("");
                        });
                    }
                    if (chkRespuestaNegada.checked) {
                        var plazoPractica = document.getElementsByName("plazoPractica");
                        var plazoInforme = document.getElementsByName("plazoInforme");
                        var fechaPractica = document.getElementById("fechaPractica");
                        var fechaInforme = document.getElementById("fechaInforme");
                        var cmbHorasPractica = document.getElementById("HoraPractica");
                        var cmbHorasInforme = document.getElementById("HoraInforme");
                        var plazoHorasPractica = document.getElementById("plazoHorasPractica");
                        var plazoHorasInforme = document.getElementById("plazoHorasInforme");
                        var txtNombrePersona = document.getElementById("txtNombrePersona");
                        var txtPaternoPersona = document.getElementById("txtPaternoPersona");
                        var txtMaternoPersona = document.getElementById("txtMaternoPersona");
                        var txtDomiciolopersona = document.getElementById("txtDomiciolopersona");
                        var cmbGeneroPersona = document.getElementById("cmbGeneroPersona");
                        var txtNombreObjeto = document.getElementById("txtNombreObjeto");
                        var txtDomicioloObjeto = document.getElementById("txtDomicioloObjeto");
                        plazoPractica.checked = false;
                        plazoInforme.checked = false;
                        fechaPractica.value = "";
                        fechaInforme.value = "";
                        cmbHorasPractica.value = "";
                        cmbHorasInforme.value = "";
                        plazoHorasPractica.value = "";
                        plazoHorasInforme.value = "";
                        txtNombrePersona.value = "";
                        txtPaternoPersona.value = "";
                        txtMaternoPersona.value = "";
                        txtDomiciolopersona.value = "";
                        cmbGeneroPersona.value = "";
                        txtNombreObjeto.value = "";
                        txtDomicioloObjeto.value = "";
                        this.limpiarTablas("tblPersonasAprehenderse");
                        this.limpiarTablas("tblObjetosAprehenderse");
                        var nodes = practica.getElementsByTagName('*');
                        for (var i = 0; i < nodes.length; i++) {
                            nodes[i].setAttribute('disabled', true);
                        }

                        var nodes = informe.getElementsByTagName('*');
                        for (var i = 0; i < nodes.length; i++) {
                            nodes[i].setAttribute('disabled', true);
                        }
                        divNotaNegado.style.display = 'block';
                    }
                }
            }
        },
        limpiarTablas: function (nombreTabla) {
            var table = document.getElementById(nombreTabla);
            var checkbox = document.getElementsByName(table.id + '_chkFila');
            for (var index = 0; index < checkbox.length; index++) {
                table.tBodies[0].removeChild(checkbox[index].parentNode.parentNode);
                eval("this." + table.id + "_Array.splice(" + index + ",1)");
                index = index - 1;
            }
        },
        seleccionaPractica: function () {
            var fechaHoraPractica = document.getElementById("fechaHoraPractica");
            var HorasPractica = document.getElementById("HorasPractica");
            var plazoPractica = document.getElementsByName("plazoPractica");
            if (plazoPractica[0].checked) {
                fechaHoraPractica.style.display = 'block';
                HorasPractica.style.display = 'none';
                $("#plazoHorasPractica").val("");
            } else {
                fechaHoraPractica.style.display = 'none';
                HorasPractica.style.display = 'block';
//                var date = new Date;
//                var hh = date.getHours();
//                var mm = date.getMinutes();
                $("#fechaPractica").val("");
                $("#HoraPractica").val("");
            }
        },
        seleccionaInforme: function () {
            var fechaHoraInforme = document.getElementById("fechaHoraInforme");
            var HorasInforme = document.getElementById("HorasInforme");
            var plazoInforme = document.getElementsByName("plazoInforme");
//            var date = new Date;
//            var hh = date.getHours();
//            var mm = date.getMinutes();
            if (plazoInforme[0].checked) {
                fechaHoraInforme.style.display = 'block';
                HorasInforme.style.display = 'none';
                $("#plazoHorasInforme").val("");
            } else {
                fechaHoraInforme.style.display = 'none';
                HorasInforme.style.display = 'block';
                $("#fechaInforme").val("");
                $("#HoraInforme").val("");
            }
        },
        seleccionaRendirinforme: function (rendirInforme) {
            if (rendirInforme == "S") {
                document.getElementById("rendirInforme").style.display = "block";
            } else {
                document.getElementById("rendirInforme").style.display = "none";
            }
        },
        seleccionaRegistro: function (cveReg) {
            this.cveRegistro = cveReg;
            if (this.cveRegistro != 0) {
                this.tblExamenesFisicos_Array = new Array();
                this.tblTomadeMuestras_Array = new Array();
                this.tblImputados_Array = new Array();
                this.tblVictimas_Array = new Array();
                this.tblTutores = new Array();
                this.validarPaso1('S');
                this.limpiarTablasSinCheck("tblImputados");
                this.limpiarTablasSinCheck("tblVictimas");
                this.limpiarTablasSinCheck("tblImputadosV");
                this.limpiarTablasSinCheck("tblVictimasV");
                this.limpiarTablasSinCheck("tblDelitos");
                this.limpiarTablasSinCheck("tblMpsResponsables");
                this.solicitudInformacion(this.cveRegistro);
            }
        },
        limpiarTablasSinCheck: function (nombreTabla) {
            $("#" + nombreTabla + " > tbody").remove();
        },
        getImputados: function (registro) {
            var table = "<tbody>";
            var contador = 0;
            var self = this;
            var contadores = 0;
            $.each(registro, function (index, value) {
                table += "<tr>";
                var name = "";
                if (value.cveTipoPersona == 1) {
                    name = value.nombre + " " + value.paterno + " " + value.materno;
                    table += "<td>" + name + "</td>";
                } else {
                    name += value.nombreMoral;
                    table += "<td>" + name + "</td>";
                }

                var string = "{";
                string += "\"Nombre\":\"" + value.nombre + "\",\"";
                string += "Paterno\":\"" + value.paterno + "\",\"";
                string += "Materno\":\"" + value.materno + "\",\"";
                string += "Domicilio\":\"" + value.domicilio + "\",\"";
                string += "Genero\":\"" + value.cveGenero + "\",\"";
                string += "Alias\":\"" + value.alias + "\",\"";
                string += "Telefono\":\"" + value.telefono + "\",\"";
                string += "Email\":\"" + value.email + "\",\"";
                string += "Detenido\":\"" + value.detenido + "\",\"";
                string += "TipoPersona\":\"" + value.cveTipoPersona + "\",\"";
                string += "NombreMoral\":\"" + value.nombreMoral + "\""
                string += "}";
                self.tblImputados_Array[contadores] = string;
                var divmuestras = "<div class='tblImputados-muestra-" + contador + "' ></div>";
                var divexfisico = "<div class='tblImputados-exfi-" + contador + "' ></div>";
                var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:mS.openModal(' + contador + ',2, \'tblImputados\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                var btnexfi = '<button class="btn btn-primary btn-block " onclick="javascript:mS.openModal(' + contador + ',1,  \'tblImputados\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
                self.addRow('tblImputados', name.toUpperCase(), divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                contador++;
                if (value.muestras.length != 0) {
                    var strEaxamen = "";
                    var strMuestras = "";
                    var button = "";
                    $.each(value.muestras, function (indx, valm) {
                        var optionMuestra = "";
                        if (valm.TipoMuestra == "M") {
                            var btnclick = "onclick='javascript:mS.deleteItem(\"tblImputados\"," + contadores + "," + valm.idMuestra + ",2)'";
                            button = "<button " + btnclick + " class='btn btn-danger pull-right' ><span><i class='fa fa-trash-o' ></i></span></button>"
                            optionMuestra = "<div class='padding-5 col-md-12' >" + valm.desMuestra + " " + button + "</div>"
                            strMuestras += valm.desMuestra + ", ";
                            $(".tblImputados-muestra-" + contadores).append(optionMuestra);
                            var string = "{";
                            string += "\"id\":\"" + contadores + "\",\"";
                            string += "tipo\":\"tblImputados\",\"";
                            string += "desItem\":\"" + valm.desMuestra + "\",\"";
                            string += "idItem\":\"" + valm.idMuestra + "\"";
                            string += "}";
                            self.tblTomadeMuestras_Array[self.tblTomadeMuestras_Array.length] = string;
                        } else {
                            var btnclick = "onclick='javascript:mS.deleteItem(\"tblImputados\"," + contadores + "," + valm.idMuestra + ",1)'";
                            button = "<button " + btnclick + " class='btn btn-danger pull-right' ><span><i class='fa fa-trash-o' ></i></span></button>"
                            optionMuestra = "<div class='padding-5 col-md-12' >" + valm.desMuestra + " " + button + "</div>"
                            strEaxamen += valm.desMuestra + ", ";
                            $(".tblImputados-exfi-" + contadores).append(optionMuestra);
                            var string = "{";
                            string += "\"id\":\"" + contadores + "\",\"";
                            string += "tipo\":\"tblImputados\",\"";
                            string += "desItem\":\"" + valm.desMuestra + "\",\"";
                            string += "idItem\":\"" + valm.idMuestra + "\"";
                            string += "}";
                            self.tblExamenesFisicos_Array[self.tblExamenesFisicos_Array.length] = string;
                        }
                    });
                    strMuestras = strMuestras.substr(0, strMuestras.length - 2);
                    strEaxamen = strEaxamen.substr(0, strEaxamen.length - 2);
                    table += "<td>" + strMuestras + "</td>";
                    table += "<td>" + strEaxamen + "</td>";
                } else {
                    table += "<td>&nbsp;</td>";
                    table += "<td>&nbsp;</td>";
                }
                contadores++;
                table += "</tr>";
            });
            table += "</tbody>";
            $("#tblImputadosV").append(table);
        },
        getOfendidos: function (registro) {
            var table = "<tbody>";
            var contador = 0;
            var self = this;
            var contadores = 0;
            $.each(registro, function (index, value) {
                table += "<tr>";
                var name = "";
                if (value.cveTipoPersona == 1 || value.cveTipoPersona == 4 || value.cveTipoPersona == 5) {
                    name = value.nombre + " " + value.paterno + " " + value.materno;
                    table += "<td>" + name + "</td>";
                } else {
                    name = value.nombreMoral;
                    table += "<td>" + name + "</td>";
                }

                var string = "{";
                string += "\"Nombre\":\"" + value.nombre + "\",\"";
                string += "Paterno\":\"" + value.paterno + "\",\"";
                string += "Materno\":\"" + value.materno + "\",\"";
                string += "Domicilio\":\"" + value.domicilio + "\",\"";
                string += "Genero\":\"" + value.cveGenero + "\",\"";
                string += "Municipio\":\"0\",\"";
                string += "Telefono\":\"" + value.telefono + "\",\"";
                string += "Email\":\"" + value.email + "\",\"";
                string += "TipoPersona\":\"" + value.cveTipoPersona + "\",\"";
                string += "NombreMoral\":\"" + value.nombreMoral + "\"";
                string += "}";
                self.tblVictimas_Array[contadores] = string;
                if (value.cveTipoPersona == 4 || value.cveTipoPersona == 5) {
                    if (value.tutor.length != 0) {
                        $.each(value.tutor, function (indxt, valt) {
                            var stringTutores = "{";
                            stringTutores += "\"Nombre\":\"" + valt.nombre + "\",\"";
                            stringTutores += "Paterno\":\"" + valt.paterno + "\",\"";
                            stringTutores += "Materno\":\"" + valt.materno + "\",\"";
                            stringTutores += "Domicilio\":\"" + valt.domicilio + "\",\"";
                            stringTutores += "Genero\":\"" + valt.cveGenero + "\",\"";
                            stringTutores += "FechaNacimiento\":\"" + valt.FechaNacimiento + "\",\"";
                            stringTutores += "Telefono\":\"" + valt.telefono + "\",\"";
                            stringTutores += "Email\":\"" + valt.email + "\",\"";
                            stringTutores += "TipoTutor\":\"" + valt.cveTipoTutor + "\",\"";
                            stringTutores += "IdOfendido\":\"" + contadores + "\"";
                            stringTutores += "}";
                            self.tblTutores[self.tblTutores.length] = stringTutores;
                        });
                    }
                }

                var divmuestras = "<div class='tblVictimas-muestra-" + contador + "' ></div>";
                var divexfisico = "<div class='tblVictimas-exfi-" + contador + "' ></div>";
                var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:mS.openModal(' + contador + ',2, \'tblVictimas\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                var btnexfi = '<button class="btn btn-primary btn-block " onclick="javascript:mS.openModal(' + contador + ',1,  \'tblVictimas\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
                self.addRow('tblVictimas', name.toUpperCase(), divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                contador++;
                if (value.muestras.length != 0) {
                    var strEaxamen = "";
                    var strMuestras = "";
                    var button = "";
                    $.each(value.muestras, function (indx, valm) {
                        var optionMuestra = "";
                        if (valm.TipoMuestra == "M") {
                            var btnclick = "onclick='javascript:mS.deleteItem(\"tblVictimas\"," + contadores + "," + valm.idMuestra + ",2)'";
                            button = "<button " + btnclick + " class='btn btn-danger pull-right' ><span><i class='fa fa-trash-o' ></i></span></button>"
                            optionMuestra += "<div class='padding-5 col-md-12' >" + valm.desMuestra + " " + button + "</div>"
                            strMuestras += valm.desMuestra + ", ";
                            $(".tblVictimas-muestra-" + contadores).append(optionMuestra);
                            var string = "{";
                            string += "\"id\":\"" + contadores + "\",\"";
                            string += "tipo\":\"tblVictimas\",\"";
                            string += "desItem\":\"" + valm.desMuestra + "\",\"";
                            string += "idItem\":\"" + valm.idMuestra + "\"";
                            string += "}";
                            self.tblTomadeMuestras_Array[self.tblTomadeMuestras_Array.length] = string;
                        } else {
                            var btnclick = "onclick='javascript:mS.deleteItem(\"tblVictimas\"," + contadores + "," + valm.idMuestra + ",1)'";
                            button = "<button " + btnclick + " class='btn btn-danger pull-right' ><span><i class='fa fa-trash-o' ></i></span></button>"
                            optionMuestra += "<div class='padding-5 col-md-12' >" + valm.desMuestra + " " + button + "</div>"
                            strEaxamen += valm.desMuestra + ", ";
                            $(".tblVictimas-exfi-" + contadores).append(optionMuestra);
                            var string = "{";
                            string += "\"id\":\"" + contadores + "\",\"";
                            string += "tipo\":\"tblVictimas\",\"";
                            string += "desItem\":\"" + valm.desMuestra + "\",\"";
                            string += "idItem\":\"" + valm.idMuestra + "\"";
                            string += "}";
                            self.tblExamenesFisicos_Array[self.tblExamenesFisicos_Array.length] = string;
                        }
                    });
                    strMuestras = strMuestras.substr(0, strMuestras.length - 2);
                    strEaxamen = strEaxamen.substr(0, strEaxamen.length - 2);
                    table += "<td>" + strMuestras + "</td>";
                    table += "<td>" + strEaxamen + "</td>";
                } else {
                    table += "<td>&nbsp;</td>";
                    table += "<td>&nbsp;</td>";
                }
                contadores++;
                table += "</tr>";
            });
            table += "</tbody>";
            $("#tblVictimasV").append(table);
        },
        getDelitos: function (registro) {
            var self = this;
            $("#tblDelitos").append("<tbody>");
            $.each(registro, function (index, value) {
                self.getNameDelitos(value.cveDelito);
            });
        },
        getNameDelitos: function (registro) {
            var self = this;
            $.ajax({
                url: "../fachadas/sigejupe/delitos/DelitosFacade.Class.php",
                data: "accion=consultar&cveDelito=" + registro,
                type: "POST",
                success: function (data) {
                    data = eval("(" + data + ")");
                    if (data.totalCount != 0) {
                        var table = "";
                        $.each(data.data, function (index, value) {
                            table += "<tr>";
                            table += "<td>" + value.desDelito + "</td>";
                            table += "</tr>";
                        });
                    }
                    $("#tblDelitos tbody").append(table);
                }
            });
        },
        getMPS: function (registro) {
            var table = "<tbody>";
            $.each(registro, function (index, value) {
                table += "<tr>";
                table += "<td>" + value.nombre + " " + value.paterno + " " + value.materno + "</td>";
                table += "</tr>";
            });
            table += "</tbody>";
            $("#tblMpsResponsables").append(table);
        },
        solicitudInformacion: function (registro) {
            var self = this;
            $.ajax({
                url: "../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php",
                data: "accion=consultarDetalleMuestra&idMuestra=" + registro + "&juez=updateJuez",
                type: "POST",
                success: function (data) {
                    data = eval("(" + data + ")");
                    if (data.type == "OK") {
                        var i = 0;
                        $.each(data.data, function (index, value) {
                            $(".nmmuestra").text(value.respmuestra.numeroMuestra + "/" + value.respmuestra.anioMuestra);
                            $(".nommp").text(value.solicitudMuestra.nombreUsuario);
                            $(".emailMp").html("<a href='mailto:" + value.respmuestra.email.toLowerCase() + "' > " + value.respmuestra.email.toLowerCase() + "</a>");
                            $(".fecsol").text(value.solicitudMuestra.fechaRegistro);
                            if (value.solicitudMuestra.carpetaInv.trim() != "") {
                                $(".carpinv").text(value.solicitudMuestra.carpetaInv);
                            } else {
                                $(".carpinv").parent().parent().hide();
                            }
                            if (value.solicitudMuestra.nuc.trim() != "") {
                                $(".nucIn").text(value.solicitudMuestra.nuc);
                                $(".nucIn").parent().parent().show();
                            } else {
                                $(".nucIn").parent().parent().hide();
                            }
                            // Verificamos si existe un documento   
                            if (value.documento != "") {
                                var pathDocument = (value.documento).substring(9);
                                var position = (value.documento).lastIndexOf("/");
                                var name = (value.documento).substring((position + 1));
                                $("fileFound").html("<div class='text-center' ><br /><a href='../" + pathDocument + "' >ARCHIVO PROPORCIONADO POR EL MINISTERIO P&Uacute;BLICO PARA LA SOLICITUD DE TOMA DE MUESTRAS</a><br /><br /></div>");
                            } else {
                                $("fileFound").html(" *No se Encontraron resultados <p>&nbsp;</p>");
                            }
                            $("#informeSolicitudTexto").html(value.respmuestra.solicitud);
                            self.getImputados(value.imputados);
                            self.getOfendidos(value.ofendidos);
                            self.getDelitos(value.delitos);
                            self.getMPS(value.ministeriosPublicos);
                            $("#txtJuez").val(value.juzgador.nombre + " " + value.juzgador.paterno + " " + value.juzgador.materno);
                            $("#txtCargo").val("JUEZ DE " + value.juzgador.desTipoJuzgador);
                            $("#txtJuzgado").val(value.solicitudMuestra.desJuzgado);
                            $("#cmbJuzgadoSolicitar").val(value.solicitudMuestra.cveJuzgado);
                            i++;
                        });
                    }

                }
            });
        },
        nuevaResolucion: function () {
            var limpiar6 = document.getElementById("limpiar6");
            var anterior6 = document.getElementById("anterior6");
            var enviar = document.getElementById("enviar");
            var nueva = document.getElementById("nueva");
            var imprimir = document.getElementById("imprimir");
            limpiar6.style.display = "inline-block";
            anterior6.style.display = "inline-block";
            enviar.style.display = "inline-block";
            nueva.style.display = "none";
            imprimir.style.display = "none";
            this.limpiar(6, false);
        },
        verificaExistente: function (table, params, type, indexR) {
            eval("table =([" + table + "])");
            var existe = true;
            if (type == 1) {
                $.each(table, function (index, val) {
                    if (index != indexR) {
                        if ((val.Nombre == params.Nombre)
                                && (val.Paterno = params.Paterno)
                                && (val.Materno = params.Materno)) {
                            existe = false;
                            return;
                        }
                    }
                });
            } else {
                $.each(table, function (index, val) {
                    if (index != indexR) {
                        if (val.Nombre == params.Descripcion) {
                            existe = false;
                            return;
                        }
                    }
                });
            }
            return existe;
        },
        imprimirComprobante: function () {
            var anterior6 = document.getElementById("anterior6");
            var nueva = document.getElementById("nueva");
            var imprimir = document.getElementById("imprimir");
            var imprimirR = document.getElementById("imprimirRespuesta");
            anterior6.style.display = "none";
            nueva.style.display = "none";
            imprimir.style.display = "none";
            imprimirR.style.display = "none";
            var self = this;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/respuestamuestra/RespuestamuestraFacade.Class.php",
                data: "accion=descargaSolicitudMuestra&idMuestra=" + this.cveRegistro,
                async: true,
                dataType: "html",
                beforeSend: function () {
                    $(".LoadInfo").html("Cargando Porfavor Espere...").show();
                },
                success: function (datos) {
                    $(".LoadInfo").html("").hide();
                    datos = eval("(" + datos + ")");
                    if (datos.type == "OK") {
                        $("#divAlertSuccess").html("");
                        $("#divAlertSuccess").html(datos.text);
                        $("#divAlertSuccess").show("slide");
                        setTimeAlert("divAlertSuccess");
                        window.location.href = '../fachadas/sigejupe/respuestamuestra/RespuestamuestraFacade.Class.php?action=descargaRespuestaMuestra&idMuestra=' + self.cveRegistro;
                        anterior6.style.display = "inline-block";
                        nueva.style.display = "inline-block";
                        imprimir.style.display = "inline-block";
                        imprimirR.style.display = "inline-block";
                    } else {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html(datos.text);
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        anterior6.style.display = "inline-block";
                        nueva.style.display = "inline-block";
                        imprimir.style.display = "inline-block";
                        imprimirR.style.display = "inline-block";
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la petici\u00f3n:\n <br />" + otroobj);
                }
            });
        },
        editRow: function (object, table) {
            if (table == "tblImputados") {
                var index = $(object)[0].rowIndex - 1;
                var table = this.tblImputados_Array;
                eval("table =([" + table + "])");
                this.fillImputados(table[index]);
                $(".addImputado").hide();
                $(".editImputado").html("<button class='btn btn-primary' onclick='javascript:mS.editImputado(" + index + ")' >Editar</button> "
                        + "<button class='btn btn-primary cancelar' onclick='javascript:mS.cancelEdit(\".addImputado\", \".editImputado\")' >Cancelar</button>");
            }

            if (table == "tblVictimas") {
                var index = $(object)[0].rowIndex - 1;
                var table = this.tblVictimas_Array;
                eval("table =([" + table + "])");
                this.fillOfendidos(table[index], index);
                $(".addOfendido").hide();
                $(".editOfendido").html("<button class='btn btn-primary' onclick='javascript:mS.editOfendido(" + index + ")' >Editar</button> "
                        + "<button class='btn btn-primary cancelar' onclick='javascript:mS.cancelEdit(\".addOfendido\", \".editOfendido\")' >Cancelar</button>");
            }
        },
        addImputados: function (editImputado, index) {
            var txtNomImputado = document.getElementById("txtNomImputado");
            var txtPatImputado = document.getElementById("txtPatImputado");
            var txtMatImputado = document.getElementById("txtMatImputado");
            var cmbGenImputado = document.getElementById("cmbGenImputado");
            var txtAlImputado = document.getElementById("txtAlImputado");
            var txtDomImputado = document.getElementById("txtDomImputado");
            var cmbMunImputados = 0;
            var txtTelImputado = document.getElementById("txtTelImputado");
            var txtEmailImputado = document.getElementById("txtEmailImputado");
            var cmbTipoPersona = document.getElementById("cmbTipoPersona");
            var txtNombreMoral = document.getElementById("txtNombreMoral");
            var txtDetenidoImputado = 'N';
            if ($("#txtDetenidoImputado").is(":checked")) {
                txtDetenidoImputado = "S";
            }
            var error = false;
            var txtMensaje = "Revise: <br /><br />";
            if (cmbTipoPersona.value.trim() == 1) {

                if (txtNomImputado.value.trim() == "") {
                    txtMensaje += "El nombre es un campo requerido<br />";
                    error = true;
                }

                if (txtPatImputado.value.trim() == "") {
                    txtMensaje += "El apellido paterno es requerido<br />";
                    error = true;
                }

                if (txtMatImputado.value.trim() == "") {
                    txtMensaje += "El apellido materno es requerido<br />";
                    error = true;
                }

                if (cmbGenImputado.value.trim() == 0) {
                    txtMensaje += "El genero es requerido<br />";
                    error = true;
                }

                if (txtDomImputado.value.trim() == "") {
                    txtMensaje += "El domicilio es requerido<br />";
                    error = true;
                }

                if (txtTelImputado.value.trim() != "") {
                    if (!txtTelImputado.value.Telefono()) {
                        txtMensaje += "El tel&eacute;fono es invalido (Ingresa 10 n&uacute;meros)";
                        error = true;
                    }
                }

                if (txtEmailImputado.value.trim() != "") {
                    if (!txtEmailImputado.value.emailglobal()) {
                        txtMensaje += "El correo electronico es incorrecto";
                        error = true;
                    }
                }
            } else if (cmbTipoPersona.value.trim() == 2 || cmbTipoPersona.value.trim() == 3) {
                if (txtNombreMoral.value.trim() == "") {
                    txtMensaje += "El Nombre Moral es requerido<br />";
                    error = true;
                }
            } else {
                txtMensaje += "Selecciona un Tipo de Persona<br />";
                error = true;
            }
            txtMensaje += '<br />Corrija los errores listados anteriormente<br />';
            if (error == false) {
                var parametros = new Array();
                parametros["Nombre"] = txtNomImputado.value.toUpperCase().trim();
                parametros["Paterno"] = txtPatImputado.value.toUpperCase().trim();
                parametros["Materno"] = txtMatImputado.value.toUpperCase().trim();
                parametros["NombreMoral"] = txtNombreMoral.value.toUpperCase().trim();
                if (this.verificaExistente(this.tblImputados_Array, parametros, 1, index)) {
                    var string = "{";
                    string += "\"Nombre\":\"" + txtNomImputado.value.toUpperCase().trim() + "\",\"";
                    string += "Paterno\":\"" + txtPatImputado.value.toUpperCase().trim() + "\",\"";
                    string += "Materno\":\"" + txtMatImputado.value.toUpperCase().trim() + "\",\"";
                    string += "Domicilio\":\"" + txtDomImputado.value.toUpperCase().trim() + "\",\"";
                    string += "Genero\":\"" + cmbGenImputado.value.toUpperCase().trim() + "\",\"";
                    string += "Alias\":\"" + txtAlImputado.value.toUpperCase().trim() + "\",\"";
                    string += "Municipio\":\"" + cmbMunImputados + "\",\"";
                    string += "Telefono\":\"" + txtTelImputado.value.toUpperCase().trim() + "\",\"";
                    string += "Email\":\"" + txtEmailImputado.value.trim() + "\",\"";
                    string += "Detenido\":\"" + txtDetenidoImputado.trim() + "\",\"";
                    string += "TipoPersona\":\"" + cmbTipoPersona.value.toUpperCase().trim() + "\",\"";
                    string += "NombreMoral\":\"" + txtNombreMoral.value.toUpperCase().trim() + "\""
                    string += "}";
                    if (editImputado == true) {
                        this.tblImputados_Array[index] = string;
                        return true;
                    } else {
                        this.tblImputados_Array[this.tblImputados_Array.length] = string;
                    }
                    var divmuestras = "<div class='tblImputados-muestra-" + (this.tblImputados_Array.length - 1) + "' ></div>";
                    var divexfisico = "<div class='tblImputados-exfi-" + (this.tblImputados_Array.length - 1) + "' ></div>";
                    var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:mS.openModal(' + (this.tblImputados_Array.length - 1) + ',2, \'tblImputados\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                    var btnexfi = '<button class="btn btn-primary btn-block " onclick="javascript:mS.openModal(' + (this.tblImputados_Array.length - 1) + ',1,  \'tblImputados\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
                    if (cmbTipoPersona.value == 1) {
                        var name = txtNomImputado.value.trim() + " " + txtPatImputado.value.trim() + " " + txtMatImputado.value.trim();
                        this.addRow('tblImputados', name.toUpperCase(), divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                    } else {
                        var name = txtNombreMoral.value.trim();
                        this.addRow('tblImputados', name.toUpperCase(), divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                    }

                } else {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Este registro ya existe");
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }
                txtNomImputado.value = "";
                txtPatImputado.value = "";
                txtMatImputado.value = "";
                txtDomImputado.value = "";
                cmbGenImputado.value = 0;
                txtAlImputado.value = "";
                cmbMunImputados.value = "";
                txtTelImputado.value = "";
                txtEmailImputado.value = "";
                cmbTipoPersona.value = 0;
                txtNombreMoral.value = "";
            } else {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(txtMensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
            }
        },
        addVictimas: function (editOfendido, index) {
            var txtNomVictima = document.getElementById("txtNomVictima");
            var txtPatVictima = document.getElementById("txtPatVictima");
            var txtMatVictima = document.getElementById("txtMatVictima");
            var cmbGenVictima = document.getElementById("cmbGenVictima");
            var txtDomVictima = document.getElementById("txtDomVictima");
            var cmbMunVictima = 0;
            var txtTelVictima = document.getElementById("txtTelVictima");
            var txtEmVictima = document.getElementById("txtEmVictima");
            var cmbTipoPersona = document.getElementById("cmbTipoPersonaVictima");
            var txtNombreMoral = document.getElementById("txtNombreMoralVictima");
            var error = false;
            var txtMensaje = "Revise: <br /><br />";
            if (cmbTipoPersona.value == 1 || cmbTipoPersona.value == 4 || cmbTipoPersona.value == 5) {

                if (txtNomVictima.value.trim() == "") {
                    txtMensaje += "El nombre es un campo requerido<br />";
                    error = true;
                }

                if (txtPatVictima.value.trim() == "") {
                    txtMensaje += "El apellido paterno es requerido<br />";
                    error = true;
                }

                if (txtMatVictima.value.trim() == "") {
                    txtMensaje += "El apellido materno es requerido<br />";
                    error = true;
                }

                if (cmbGenVictima.value.trim() == 0) {
                    txtMensaje += "El genero es requerido<br />";
                    error = true;
                }

                if (txtDomVictima.value.trim() == "") {
                    txtMensaje += "El domicilio es requerido<br />";
                    error = true;
                }

                if (txtTelVictima.value.trim() != "") {
                    if (!txtTelVictima.value.Telefono()) {
                        txtMensaje += "El tel&eacute;fono es invalido (Ingresa 10 n&uacute;meros)<br />";
                        error = true;
                    }
                }

                if (txtEmVictima.value.trim() != "") {
                    if (!txtEmVictima.value.emailglobal()) {
                        txtMensaje += "El correo electronico es incorrecto<br />";
                        error = true;
                    }
                }

                if (cmbTipoPersona.value == 4 || cmbTipoPersona.value == 5) {
                    if ($("#cmbTipoTutor").val() == 0) {
                        txtMensaje += "Selecciona un Tipo de Tutor<br />";
                        error = true;
                    }

                    if ($("#cmbGenTutor").val() == 0) {
                        txtMensaje += "Selecciona el G&eacute;nero del Tutor<br />";
                        error = true;
                    }
                    if ($("#txtnameTutor").val() == "") {
                        txtMensaje += "Nombre del Tutor es requerido<br />";
                        error = true;
                    }
                    if ($("#txtPaternoTutor").val() == "") {
                        txtMensaje += "Apellido Paterno del Tutor es requerido<br />";
                        error = true;
                    }
                    if ($("#txtMaternoTutor").val() == "") {
                        txtMensaje += "Apellido Materno del Tutor es requerido<br />";
                        error = true;
                    }
                    if ($("#txtdateTutor").val() == "") {
                        txtMensaje += "Fecha de Nacimiento del Tutor es requerido<br />";
                        error = true;
                    }
                    if ($("#txtDomicilioTutor").val() == "") {
                        txtMensaje += "Domicilio del Tutor es requerido<br />";
                        error = true;
                    }
                    if ($("#txtphoneTutor").val() != "") {
                        if (!$("#txtphoneTutor").val().Telefono()) {
                            txtMensaje += "El tel&eacute;fono del Tutor es invalido (Ingresa 10 n&uacute;meros)<br />";
                            error = true;
                        }
                    }

                    if ($("#txtEmTutor").val() != "") {
                        if (!$("#txtEmTutor").val().emailglobal()) {
                            txtMensaje += "El correo electr&oacute;nico del Tutor es incorrecto <br />";
                            error = true;
                        }
                    }

                }

            } else if (cmbTipoPersona.value == 2 || cmbTipoPersona.value == 3) {
                if (txtNombreMoral.value.trim() == "") {
                    txtMensaje += "Nombre Moral es requerido<br />";
                    error = true;
                }
            } else {
                txtMensaje += "Selecciona un tipo de Persona<br />";
                error = true;
            }
            txtMensaje += '<br />Corrija los errores listados anteriormente<br />';
            if (error == false) {
                var parametros = new Array();
                parametros["Nombre"] = txtNomVictima.value.toUpperCase().trim();
                parametros["Paterno"] = txtPatVictima.value.toUpperCase().trim();
                parametros["Materno"] = txtMatVictima.value.toUpperCase().trim();
                parametros["NombreMoral"] = txtNombreMoral.value.toUpperCase().trim();
                if (this.verificaExistente(this.tblVictimas_Array, parametros, 1, index)) {
                    var string = "{";
                    string += "\"Nombre\":\"" + txtNomVictima.value.toUpperCase().trim() + "\",\"";
                    string += "Paterno\":\"" + txtPatVictima.value.toUpperCase().trim() + "\",\"";
                    string += "Materno\":\"" + txtMatVictima.value.toUpperCase().trim() + "\",\"";
                    string += "Domicilio\":\"" + txtDomVictima.value.toUpperCase().trim() + "\",\"";
                    string += "Genero\":\"" + cmbGenVictima.value.toUpperCase().trim() + "\",\"";
                    string += "Municipio\":\"0\",\"";
                    string += "Telefono\":\"" + txtTelVictima.value.toUpperCase().trim() + "\",\"";
                    string += "Email\":\"" + txtEmVictima.value.trim() + "\",\"";
                    string += "TipoPersona\":\"" + cmbTipoPersona.value.toUpperCase().trim() + "\",\"";
                    string += "NombreMoral\":\"" + txtNombreMoral.value.toUpperCase().trim() + "\"";
                    string += "}";
                    if (cmbTipoPersona.value == 4 || cmbTipoPersona.value == 5) {

                        var fechaT = $("#txtdateTutor").val();
                        var fecha = "";
                        if (fechaT != "") {
                            fechaT = fechaT.split("/");
                            fecha = fechaT[2] + "/" + fechaT[1] + "/" + fechaT[0];
                        }

                        var stringTutores = "{";
                        stringTutores += "\"Nombre\":\"" + $("#txtnameTutor").val().toUpperCase().trim() + "\",\"";
                        stringTutores += "Paterno\":\"" + $("#txtPaternoTutor").val().toUpperCase().trim() + "\",\"";
                        stringTutores += "Materno\":\"" + $("#txtMaternoTutor").val().toUpperCase().trim() + "\",\"";
                        stringTutores += "Domicilio\":\"" + $("#txtDomicilioTutor").val().toUpperCase().trim() + "\",\"";
                        stringTutores += "Genero\":\"" + $("#cmbGenTutor").val().toUpperCase().trim() + "\",\"";
                        stringTutores += "FechaNacimiento\":\"" + fecha + "\",\"";
                        stringTutores += "Telefono\":\"" + $("#txtphoneTutor").val().toUpperCase().trim() + "\",\"";
                        stringTutores += "Email\":\"" + $("#txtEmTutor").val().toUpperCase().trim() + "\",\"";
                        stringTutores += "TipoTutor\":\"" + $("#cmbTipoTutor").val().toUpperCase() + "\",\"";
                        if (editOfendido == true) {
                            stringTutores += "IdOfendido\":\"" + index + "\"";
                        } else {
                            stringTutores += "IdOfendido\":\"" + this.tblVictimas_Array.length + "\"";
                        }
                        stringTutores += "}";
                    }

                    if (editOfendido == true) {
                        this.tblVictimas_Array[index] = string;
                        if (cmbTipoPersona.value == 4 || cmbTipoPersona.value == 5) {
                            var tableTutor = this.tblTutores;
                            eval("tableTutor =([" + tableTutor + "])");
                            var position = 0;
                            $.each(tableTutor, function (ind, val) {
                                if (val.IdOfendido == index) {
                                    return;
                                } else {
                                    position++;
                                }
                            });
                            this.tblTutores[position] = stringTutores;
                        }
                        return true;
                    } else {
                        this.tblVictimas_Array[this.tblVictimas_Array.length] = string;
                        this.tblTutores[this.tblTutores.length] = stringTutores;
                    }

                    var divmuestras = "<div class='tblVictimas-muestra-" + (this.tblVictimas_Array.length - 1) + "' ></div>";
                    var divexfisico = "<div class='tblVictimas-exfi-" + (this.tblVictimas_Array.length - 1) + "' ></div>";
                    var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:mS.openModal(' + (this.tblVictimas_Array.length - 1) + ',2, \'tblVictimas\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                    var btnexfi = '<button class="btn btn-primary btn-block " onclick="javascript:mS.openModal(' + (this.tblVictimas_Array.length - 1) + ',1,  \'tblVictimas\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
                    if (cmbTipoPersona.value == 1 || cmbTipoPersona.value == 4 || cmbTipoPersona.value == 5) {
                        var name = txtNomVictima.value.trim() + " " + txtPatVictima.value.trim() + " " + txtMatVictima.value.trim();
                        this.addRow('tblVictimas', name.toUpperCase(), divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                    } else {
                        var name = txtNombreMoral.value.trim();
                        this.addRow('tblVictimas', name.toUpperCase(), divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                    }
                } else {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Este registro ya existe");
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }
                txtNomVictima.value = "";
                txtPatVictima.value = "";
                txtMatVictima.value = "";
                txtDomVictima.value = "";
                cmbGenVictima.value = 0;
                txtTelVictima.value = "";
                txtEmVictima.value = "";
                if (cmbTipoPersona.value == 4 || cmbTipoPersona.value == 5) {
                    $("#cmbTipoTutor").val(0);
                    $("#cmbGenTutor").val(0);
                    $("#txtnameTutor").val("");
                    $("#txtPaternoTutor").val("");
                    $("#txtMaternoTutor").val("");
                    $("#txtdateTutor").val("");
                    $("#txtDomicilioTutor").val("");
                    $("#txtphoneTutor").val("");
                    $("#txtEmTutor").val("");
                }
                cmbTipoPersona.value = 0;
                txtNombreMoral.value = "";
            } else {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(txtMensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
            }
        },
        TipoPersona: function (object, type) {
            var tipoPersona = object.value;
            var PersonaMoralImputado = ["txtNombreMoral"];
            var PerosnaFisicaImputado = ["txtNomImputado", "txtPatImputado", "txtMatImputado",
                "cmbGenImputado", "txtAlImputado", "txtDomImputado", "txtTelImputado", "txtEmailImputado",
                "txtDetenidoImputado"];
            var PersonaMoralOfendido = ["txtNombreMoralVictima"];
            var PerosnaFisicaOfendido = ["txtNomVictima", "txtPatVictima", "txtMatVictima",
                "cmbGenVictima", "txtDomVictima", "txtTelVictima", "txtEmVictima"];
            if (tipoPersona != 1 && tipoPersona != 4 && tipoPersona != 5) {
                // Ocultar Capos de PersONA Fisica
                if (type == 1) {
                    this.ocultaCampos(PerosnaFisicaImputado);
                    this.muestraCampos(PersonaMoralImputado);
                } else {
                    this.ocultaCampos(PerosnaFisicaOfendido);
                    this.muestraCampos(PersonaMoralOfendido);
                }
            } else {
                // Mostrar datos de Persona Fisica
                if (type == 1) {
                    this.ocultaCampos(PersonaMoralImputado);
                    this.muestraCampos(PerosnaFisicaImputado)
                } else {
                    this.ocultaCampos(PersonaMoralOfendido);
                    this.muestraCampos(PerosnaFisicaOfendido)
                }
            }

            if (tipoPersona == 4 || tipoPersona == 5) {
                $(".change").removeClass("col-lg-12");
                $(".change").removeClass("col-md-12");
                $(".change").addClass("col-lg-6");
                $(".change").addClass("col-md-6");
                $(".tutores").show();
            } else {
                $(".change").removeClass("col-md-6");
                $(".change").removeClass("col-lg-6");
                $(".change").addClass("col-md-12");
                $(".change").addClass("col-lg-12");
                $(".tutores").hide();
            }
        },
        ocultaCampos: function (campos) {
            for (var i = 0; i < campos.length; i++) {
                $("#" + campos[i]).parent().parent().attr("style", "display:none");
                $("#" + campos[i]).val("");
                $("#" + campos[i]).removeAttr('checked', false);
            }
        },
        muestraCampos: function (campos) {
            for (var i = 0; i < campos.length; i++) {
                $("#" + campos[i]).parent().parent().attr("style", "display:block");
                $("#" + campos[i]).val("");
                $("#" + campos[i]).removeAttr('checked', false);
            }
        },
        editImputado: function (index) {
            var flag = this.addImputados(true, index);
            if (flag == true) {
                $("#divAlertSuccess").html("");
                $("#divAlertSuccess").html("Informaci&oacute;n Modificada Correctamente");
                $("#divAlertSuccess").show("slide");
                setTimeAlert("divAlertSuccess");
                $(".editImputado").html("");
                $(".addImputado").show();
                $("#tblImputados > tbody").remove();
                var table = this.tblImputados_Array;
                eval("table =([" + table + "])");
                var self = this;
                var count = 0;
                $.each(table, function (index, val) {
                    var txtNomImputado = val.Nombre;
                    var txtPatImputado = val.Paterno;
                    var txtMatImputado = val.Materno;
                    var txtNombreMoral = val.NombreMoral;
                    $("#cmbGenImputado").val(val.Genero);
                    var divmuestras = "<div class='tblImputados-muestra-" + count + "' ></div>";
                    var divexfisico = "<div class='tblImputados-exfi-" + count + "' ></div>";
                    var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:mS.openModal(' + count + ',2,  \'tblImputados\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                    var btnexfi = '<button class="btn btn-primary btn-block" onclick="javascript:mS.openModal(' + count + ',1,  \'tblImputados\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
                    if (val.TipoPersona == 1) {
                        var nombre = txtNomImputado.trim() + " " + txtPatImputado.trim() + " " + txtMatImputado.trim();
                        self.addRow('tblImputados', nombre, divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                    } else {
                        self.addRow('tblImputados', txtNombreMoral.trim(), divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                    }
                    self.drawItems(count, 1, 'tblImputados');
                    self.drawItems(count, 2, 'tblImputados');
                    count++;
                });
                $("#cmbGenImputado").val(0);
                this.cancelEdit();
            }
        },
        editOfendido: function (index) {
            var flag = this.addVictimas(true, index);
            if (flag == true) {
                $("#divAlertSuccess").html("");
                $("#divAlertSuccess").html("Informaci&oacute;n Modificada Correctamente");
                $("#divAlertSuccess").show("slide");
                setTimeAlert("divAlertSuccess");
                $(".editOfendido").html("");
                $(".addOfendido").show();
                $("#tblVictimas > tbody").remove();
                var table = this.tblVictimas_Array;
                eval("table =([" + table + "])");
                var self = this;
                var count = 0;
                $.each(table, function (index, val) {
                    var txtNomOfenido = val.Nombre;
                    var txtPatOfenido = val.Paterno;
                    var txtMatOfenido = val.Materno;
                    var txtDomOfenido = val.Domicilio;
                    var txtNombreMoral = val.NombreMoral;
                    var divmuestras = "<div class='tblVictimas-muestra-" + count + "' ></div>";
                    var divexfisico = "<div class='tblVictimas-exfi-" + count + "' ></div>";
                    var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:mS.openModal(' + count + ',2, \'tblVictimas\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                    var btnexfi = '<button class="btn btn-primary btn-block " onclick="javascript:mS.openModal(' + count + ',1,  \'tblVictimas\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
                    if (val.TipoPersona == 1 || val.TipoPersona == 4 || val.TipoPersona == 5) {
                        var nombre = txtNomOfenido.trim() + " " + txtPatOfenido.trim() + " " + txtMatOfenido.trim();
                        self.addRow('tblVictimas', nombre, divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                    } else {
                        self.addRow('tblVictimas', txtNombreMoral.trim(), divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                    }

                    self.drawItems(count, 1, 'tblVictimas');
                    self.drawItems(count, 2, 'tblVictimas');
                    count++;
                });
                $("#cmbGenImputado").val(0);
                this.cancelEdit();
            }
        },
        cancelEdit: function (btnAdd, btnEdit) {
            $("#txtNomPersona").val("");
            $("#txtPatPersona").val("");
            $("#txtMatPersona").val("");
            $("#txtDomPersona").val("");
            $("#cmbGenPersona").val(0);
            $("#txtDescObjeto").val("");
            $("#txtDomObjeto").val("");
            $("#cmbDelito").val(0);
            $("#txtNomImputado").val("");
            $("#txtPatImputado").val("");
            $("#txtMatImputado").val("");
            $("#cmbGenImputado").val(0);
            $("#txtAlImputado").val("");
            $("#txtDomImputado").val("");
            $("#txtTelImputado").val("");
            $("#txtEmailImputado").val("");
            $("#cmbTipoPersona").val(0);
            $("#txtNombreMoral").val("");
            $("#txtDetenidoImputado").prop("checked", false);
            $("#txtNombreMoralVictima").val("");
            $("#txtNomVictima").val("");
            $("#txtPatVictima").val("");
            $("#txtMatVictima").val("");
            $("#cmbGenVictima").val(0);
            $("#txtDomVictima").val("");
            $("#txtTelVictima").val("");
            $("#txtEmVictima").val("");
            $("#cmbTipoPersonaVictima").val(0);
            $("#cmbTipoTutor").val(0);
            $("#cmbGenTutor").val(0);
            $("#txtnameTutor").val("");
            $("#txtPaternoTutor").val("");
            $("#txtMaternoTutor").val("");
            $("#txtdateTutor").val("");
            $("#txtDomicilioTutor").val("");
            $("#txtphoneTutor").val("");
            $("#txtEmTutor").val("");
            $(btnEdit).html("");
            $(btnAdd).show();
        },
        fillImputados: function (table) {
            $("#cmbTipoPersona").val(table.TipoPersona).change();
            if (table.TipoPersona != 1) {
                $("#txtNombreMoral").val(table.NombreMoral);
            } else {
                $("#txtNomImputado").val(table.Nombre);
                $("#txtPatImputado").val(table.Paterno);
                $("#txtMatImputado").val(table.Materno);
                $("#cmbGenImputado").val(table.Genero);
                $("#txtAlImputado").val(table.Alias);
                $("#txtDomImputado").val(table.Domicilio);
                $("#txtTelImputado").val(table.Telefono);
                $("#txtEmailImputado").val(table.Email);
                if (table.Detenido == "S") {
                    $("#txtDetenidoImputado").prop("checked", "true")
                }
            }
        },
        fillOfendidos: function (table, id) {
            $("#cmbTipoPersonaVictima").val(table.TipoPersona).change();
            if (table.TipoPersona != 1 && table.TipoPersona != 4 && table.TipoPersona != 5) {
                $("#txtNombreMoralVictima").val(table.NombreMoral);
            } else {
                $("#txtNomVictima").val(table.Nombre);
                $("#txtPatVictima").val(table.Paterno);
                $("#txtMatVictima").val(table.Materno);
                $("#cmbGenVictima").val(table.Genero);
                $("#txtDomVictima").val(table.Domicilio);
                $("#txtTelVictima").val(table.Telefono);
                $("#txtEmVictima").val(table.Email);
                if (table.TipoPersona == 4 || table.TipoPersona == 5) {
                    // Llenamos los campos de Tutor
                    var tableTutor = this.tblTutores;
                    eval("tableTutor =([" + tableTutor + "])");
                    var position = 0;
                    $.each(tableTutor, function (index, val) {
                        if (val.IdOfendido == id) {
                            return false;
                        } else {
                            position++;
                        }
                    });
                    tableTutor = tableTutor[position];
                    var fechaT = tableTutor.FechaNacimiento;
                    var fecha = "";
                    if (fechaT != "") {
                        fechaT = fechaT.split("/");
                        fecha = fechaT[2] + "/" + fechaT[1] + "/" + fechaT[0];
                    }
                    $("#cmbTipoTutor").val(tableTutor.TipoTutor);
                    $("#cmbGenTutor").val(tableTutor.Genero);
                    $("#txtnameTutor").val(tableTutor.Nombre);
                    $("#txtPaternoTutor").val(tableTutor.Paterno);
                    $("#txtMaternoTutor").val(tableTutor.Materno);
                    $("#txtdateTutor").val(fecha);
                    $("#txtDomicilioTutor").val(tableTutor.Domicilio);
                    $("#txtphoneTutor").val(tableTutor.Telefono);
                    $("#txtEmTutor").val(tableTutor.Email);
                }
            }
        },
        openModal: function (id, type, tabla) {
            $(".lit-items").html("");
            $(".addItem").removeAttr("onclick");
            $(".muestras").hide();
            $(".muestras").val(0);
            $(".examenes").hide();
            $(".examenes").val(0);
            var open = true;
            var table = "";
            if (tabla == "tblImputados") {
                table = this.tblImputados_Array;
            } else {
                table = this.tblVictimas_Array;
            }

            eval("table =([" + table + "])");
            table = table[id];
            var nombre = "";
            if (table.TipoPersona == 1) {
                nombre = table.Nombre + " " + table.Paterno + " " + table.Materno;
            } else {
                nombre = table.NombreMoral;
            }
            switch (type) {
                case 1:
                    $(".examenes").show();
                    $("titleModal").html("Ex&aacute;men F&iacute;sico A " + nombre);
                    open = true;
                    break;
                case 2:
                    $(".muestras").show();
                    $("titleModal").html("Toma de Muestras A " + nombre);
                    open = true;
                    break;
                default :
                    $("titleModal").html("");
                    open = false;
            }

            if (open) {
                this.drawItems(id, type, tabla, true);
                $(".addItem").attr("onclick", "javascript:mS.addItem(" + id + "," + type + ", '" + tabla + "')");
                $("#toma-muestras-modal").modal("show");
            }
        },
        cancelar: function () {
            $(".cancelar").click();
            $(".additemError").remove();
            $("#cmbExamenes option").removeAttr("disabled");
            $("#cmbMuestras option").removeAttr("disabled");
            $("#cmbMuestras").val(0);
            $("#cmbMuestras").val(0);
        },
        addItem: function (id, type, tablarender) {
            $(".additemError").remove();
            var string = "{";
            string += "\"id\":\"" + id + "\",\"";
            string += "tipo\":\"" + tablarender + "\",\"";
            switch (type) {
                case 1:
                    string += "desItem\":\"" + $('#cmbExamenes option:selected').text() + "\",\"";
                    string += "idItem\":\"" + $("#cmbExamenes").val() + "\"";
                    string += "}";
                    if ($("#cmbExamenes").val() == 0) {
                        $(".lit-items").append("<div class='col-md-12 additemError alert alert-danger' >Selecciona una Opci&oacute;n</div>");
                        return;
                    } else {
                        this.tblExamenesFisicos_Array[this.tblExamenesFisicos_Array.length] = string;
                    }
                    $('#cmbExamenes option:selected').attr("disabled", "disabled");
                    $("#cmbExamenes").val(0);
                    break;
                case 2:
                    string += "desItem\":\"" + $('#cmbMuestras option:selected').text() + "\",\"";
                    string += "idItem\":\"" + $("#cmbMuestras").val() + "\"";
                    string += "}";
                    if ($("#cmbMuestras").val() == 0) {
                        $(".lit-items").append("<div class='additemError alert alert-danger col-md-12' >Selecciona una Opci&oacute;n</div>");
                        return;
                    } else {
                        this.tblTomadeMuestras_Array[this.tblTomadeMuestras_Array.length] = string;
                    }
                    $('#cmbMuestras option:selected').attr("disabled", "disabled");
                    $("#cmbMuestras").val(0);
                    break;
            }
            this.drawItems(id, type, tablarender);
        },
        drawItems: function (id, type, tablarender, disableItem) {
            var renderMuestra = tablarender + "-muestra-" + id;
            var renderExamen = tablarender + "-exfi-" + id;
            var tablaMuestras = this.tblTomadeMuestras_Array;
            var tablaExamenes = this.tblExamenesFisicos_Array;
            var strMuestras = "";
            var strExamenes = "";
            eval("tablaMuestras =([" + tablaMuestras + "])");
            eval("tablaExamenes =([" + tablaExamenes + "])");
            $.each(tablaMuestras, function (index, valm) {
                if (valm.id == id && valm.tipo == tablarender) {
                    var btnclick = "onclick='javascript:mS.deleteItem(\"" + valm.tipo + "\", " + valm.id + "," + valm.idItem + ", " + type + ")'";
                    var button = "<button " + btnclick + " class='btn btn-danger pull-right' ><span><i class='fa fa-trash-o' ></i></span></button>"
                    strMuestras += "<div class='padding-5 col-md-12' >" + valm.desItem + " " + button + "</div>"
                    if (disableItem) {
                        $("#cmbMuestras option[value=" + valm.idItem + "]").attr("disabled", "disabled");
                    }
                }
            });
            $.each(tablaExamenes, function (index, vale) {
                if (vale.id == id && vale.tipo == tablarender) {
                    var btnclick = "onclick='javascript:mS.deleteItem(\"" + vale.tipo + "\", " + vale.id + "," + vale.idItem + ", " + type + ")'";
                    var button = "<button " + btnclick + " class='btn btn-danger pull-right' ><span><i class='fa fa-trash-o' ></i></span></button>"
                    strExamenes += "<div class='padding-5 col-md-12' >" + vale.desItem + " " + button + "</div>"
                    if (disableItem) {
                        $("#cmbExamenes option[value=" + vale.idItem + "]").attr("disabled", "disabled");
                    }
                }
            });
            if (type == 1) {
                $("." + renderExamen).html(strExamenes);
                $(".lit-items").html(strExamenes);
            } else {
                $("." + renderMuestra).html(strMuestras);
                $(".lit-items").html(strMuestras);
            }
        },
        drawTable: function (tabla) {
            $("#" + tabla + " tbody > tr").remove();
            var table = "";
            if (tabla == "tblImputados") {
                table = this.tblImputados_Array;
            } else {
                table = this.tblVictimas_Array;
            }
            eval("table =([" + table + "])");
            var self = this;
            var count = 0;
            $.each(table, function (index, val) {
                var txtNomImputado = val.Nombre;
                var txtPatImputado = val.Paterno;
                var txtMatImputado = val.Materno;
                var txtNombreMoral = val.NombreMoral;
                $("#cmbGenImputado").val(val.Genero);
                var divmuestras = "<div class='" + tabla + "-muestra-" + count + "' ></div>";
                var divexfisico = "<div class='" + tabla + "-exfi-" + count + "' ></div>";
                var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:mS.openModal(' + count + ',2,  \'' + tabla + '\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                var btnexfi = '<button class="btn btn-primary btn-block" onclick="javascript:mS.openModal(' + count + ',1,  \'' + tabla + '\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
                if (val.TipoPersona == 1 || val.TipoPersona == 4 || val.TipoPersona == 5) {
                    var nombre = txtNomImputado.trim() + " " + txtPatImputado.trim() + " " + txtMatImputado.trim();
                    self.addRow(tabla, nombre, divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                } else {
                    self.addRow(tabla, txtNombreMoral.trim(), divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                }
                self.drawItems(count, 1, tabla);
                self.drawItems(count, 2, tabla);
                count++;
            });
        },
        deleteItem: function (tabla, id, idItem, type) {
            $("#cmbExamenes option").removeAttr("disabled");
            $("#cmbMuestras option").removeAttr("disabled");
            var table = "";
            var self = this;
            if (type == 1) {
                table = this.tblExamenesFisicos_Array;
            } else if (type == 2) {
                table = this.tblTomadeMuestras_Array;
            }
            if (table != "") {
                eval("table =([" + table + "])");
                var posicion = 0;
                $.each(table, function (index, val) {
                    if (val.id == id && val.tipo == tabla && val.idItem == idItem) {
                        if (type == 1) {
                            eval("self.tblExamenesFisicos_Array.splice(" + posicion + ",1)");
                        } else if (type == 2) {
                            eval("self.tblTomadeMuestras_Array.splice(" + posicion + ",1)");
                        }
                    }
                    posicion++;
                });
                this.drawItems(id, type, tabla, true);
            }

        },
    }
}

$(".steps li a").click(function () {
    return false;
});
function validar_texto(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla == 8) {
        return true;
    }
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}