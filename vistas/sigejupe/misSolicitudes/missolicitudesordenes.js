var misSolicitudesOrdenes = function () {
    return {
        ultimoPaso: 6,
        tblPersonasAprehenderse_Array: new Array(),
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
                this.limpiarTablas("tblPersonasAprehenderse");
                this.limpiarTablasSinCheck("tblPersonas");
                this.limpiarTablasSinCheck("tblImputados");
                this.limpiarTablasSinCheck("tblVictimas");
                this.limpiarTablasSinCheck("tblDelitos");
                this.tblPersonasAprehenderse_Array = new Array();
                var descResolucion = document.getElementById("descResolucion");
                var descCateoNegado = document.getElementById("descCateoNegado");
                var descOficio = document.getElementById("descOficio");
                descResolucion.value = "";
                descCateoNegado.value = "";
                descOficio.value = "";
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
                $('#msg_descResolucion').html('').hide();
                $('#msg_descOficio').html('').hide();
                $('#msg_desCateoNegado').html('').hide();
                $('#msg_terminosUso').html('').hide();
                $('#msg_datosJuez').html('').hide();
                document.getElementById("comprobante").style.display = "none";
                document.getElementById("accion").style.display = "none";
                document.getElementById("accion").value = "generaComprobante";
                document.getElementById("idRegistro").style.display = "none";
                document.getElementById("idRegistro").value = "";
                document.getElementById("enviar").style.display = "inline-block";
                var ue = UE.getEditor('descResolucion');
                ue.ready(function () {
                    ue.setContent("");
                });
                var ued = UE.getEditor('descCateoNegado');
                ued.ready(function () {
                    ued.setContent("");
                });
                var ueo = UE.getEditor('descOficio');
                ueo.ready(function () {
                    ueo.setContent("");
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
                url: "../fachadas/sigejupe/solicitudesordenes/SolicitudesordenesFacade.Class.php",
                data: "accion=consultarOrden&pag=" + pag + "&cantxPag=" + cantReg,
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
                                    table += "<tr onclick= 'javascript:ordenesSolicitudes.seleccionaRegistro(" + valS.orden.idOrden + ")' >";
                                    table += "<td>" + (count + 1) + "</td>";
                                    table += "<td>" + valS.solicitudOrden.desJuzgado + "</td>";
                                    table += "<td>" + valS.orden.numeroOrden + "/" + valS.orden.anioOrden + "</td>";
                                    table += "<td>" + valS.solicitudOrden.carpetaInv + "</td>";
                                    var personas = "";
                                    if (valS.personas.length > 0) {
                                        var z = 0;
                                        $.each(valS.personas, function (indxPerson, valPerson) {
                                            personas += valPerson.nombre + " " +
                                                    valPerson.paterno + " " + valPerson.materno + ", ";
                                            if (z == 1) {
                                                personas += "<br />";
                                                z = 0;
                                            } else {
                                                z++;
                                            }
                                        });
                                        personas = personas.substr(0, personas.length - 2);
                                    } else {
                                        personas = "Sin Registros";
                                    }
                                    table += "<td>Personas : " + personas + "</td>";
                                    table += "<td>" + valS.solicitudOrden.nip + "</td>";
                                    table += "<td>" + valS.solicitudOrden.fechaRegistro + "</td>";
                                    table += "</tr>";
                                    count++;
                                })
                            }
                        });
                        table += "</tbody>";
                        $("#tblSolicitudes").append(table);
                        $("#tblSolicitudes").parent().show();
                        $("#tblSolicitudes").DataTable().destroy();
                        $("#tblSolicitudes").DataTable();
                    } else {
                        $(".noresults").remove();
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
            var imprimirOficio = document.getElementById("imprimirOficio");
            imprimir.style.display = 'none';
            imprimirOficio.style.display = 'none';
        },
        siguiente: function (sig, act, validar) {
            var next = document.getElementById(sig);
            var actual = document.getElementById(act);
            sig = sig.substring(2, 7);
            act = act.substring(2, 7);
            var divPaso1 = document.getElementById('div' + act);
            var divPaso2 = document.getElementById('div' + sig);
            var chkRespuestaNegada = document.getElementById("chkRespuestaNegada");
            var chkRespuestaConcedida = document.getElementById("chkRespuestaConcedida");
            if (sig == "Paso4" && act == "Paso5") {
                if (!chkRespuestaNegada.checked) {
                    this.siguiente('liPaso3', 'liPaso5', '');
                    return;
                } else {
                    divPaso1.style.display = 'none';
                    divPaso2.style.display = 'block';
                }
            } else {
                if (sig == "Paso6" && act == "Paso7" && (chkRespuestaNegada.checked && !chkRespuestaConcedida.checked)) {
                    this.siguiente('liPaso5', 'liPaso7', '');
                    return;
                }
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
            helper.getInfoUsuarios("ordenes");
        },
        validarPaso7: function () {
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
                var descResolucion = document.getElementById("descResolucion");
                var descOficio = document.getElementById("descOficio");
                var descCateoNegado = document.getElementById("descCateoNegado");
                var respuestaSolicitud = 0;
                if (!chkRespuestaNegada.checked) {
                    var ued = UE.getEditor('descCateoNegado');
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
                        var imprimirOficio = document.getElementById("imprimirOficio");
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
                        fechaPracticaT = "0:00";
                        fechaInformeT = "0:00"
                        tiempoP = "0";
                        tiempoI = "0";
                        var datos = {
                            "accion": "guardarOrdenes",
                            "idOrden": this.cveRegistro,
                            "respuestaOrden": respuestaSolicitud,
                            "personasArray": "[" + this.tblPersonasAprehenderse_Array + "]",
                            "fechaPractica": fechaPracticaT,
                            "fechaInforme": fechaInformeT,
                            "horaPractica": tiempoP,
                            "horaInforme": tiempoI,
                            "horasPractica": plazoHorasPractica.value,
                            "horasInforme": plazoHorasInforme.value,
                            "detalleResolucion": UE.getEditor('descResolucion').getContent(),
                            "detalleNegacion": UE.getEditor('descCateoNegado').getContent(),
                            "detalleOficio": UE.getEditor('descOficio').getContent()
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
                this.siguiente('liPaso1', 'liPaso7', '');
                return isStepValid;
            }

            if (this.validarPaso3() == false) {
                isStepValid = false;
                this.siguiente('liPaso3', 'liPaso7', '');
                return isStepValid;
            }

            if (this.validarPaso4() == false) {
                isStepValid = false;
                this.siguiente('liPaso4', 'liPaso7', '');
                return isStepValid;
            }
            if (this.validarPaso5() == false) {
                isStepValid = false;
                this.siguiente('liPaso5', 'liPaso7', '');
                return isStepValid;
            }
            if (this.validarPaso6() == false) {
                isStepValid = false;
                this.siguiente('liPaso6', 'liPaso7', '');
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
                /*                if (!plazoPractica[0].checked && !plazoPractica[1].checked) {
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
                 */
                if (this.tblPersonasAprehenderse_Array.length == "") {
                    isValid = false;
                    msj += 'Ingrese almenos una persona <br />';
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
            var descCateoNegado = UE.getEditor('descCateoNegado').getContent();
            var msj = "";
            if (chkRespuestaNegada.checked && descCateoNegado == "") {
                isValid = false;
                msj += 'Ingrese la descripcion o nota de la orden de aprehensi&oacute;n negado';
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
            var chkRespuestaNegada = document.getElementById("chkRespuestaNegada");
            var chkRespuestaConcedida = document.getElementById("chkRespuestaConcedida");
            var descResolucion = UE.getEditor('descResolucion').getContent();
            var msj = "";
            if (descResolucion == "") {
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
                    if ((chkRespuestaConcedida.checked && chkRespuestaNegada.checked) || (chkRespuestaConcedida.checked && !chkRespuestaNegada.checked)) {
                        this.siguiente('liPaso6', 'liPaso5', '');
                        return isValid;
                    } else {
                        this.siguiente('liPaso7', 'liPaso5', '');
                    }
                }
            }

            return isValid;
        },
        validarPaso6: function (ir) {

            var chkRespuestaNegada = document.getElementById("chkRespuestaNegada");
            var chkRespuestaConcedida = document.getElementById("chkRespuestaConcedida");

            if (chkRespuestaNegada.checked && !chkRespuestaConcedida.checked) {
                return true;
            }


            var isValid = true;
            var descOficio = UE.getEditor('descOficio').getContent();
            var msj = "";
            if (descOficio == "") {
                isValid = false;
                msj += 'Ingrese el Oficio';
            }
            if (ir == 'S') {
                if (!isValid) {
                    this.siguiente('liPaso6', 'liPaso7', '');
                    if (msj != "") {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html(msj);
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                    }
                } else {
                    this.siguiente('liPaso7', 'liPaso6', '');
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
            var imprimirOficio = document.getElementById("imprimirOficio");
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ordenes/OrdenesFacade.Class.php",
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
                        var chkRespuestaNegada = document.getElementById("chkRespuestaNegada");
                        var chkRespuestaConcedida = document.getElementById("chkRespuestaConcedida");
                        if (chkRespuestaNegada.checked && !chkRespuestaConcedida.checked) {
                            imprimirOficio.style.display = "none";
                        } else {
                            imprimirOficio.style.display = "inline-block";
                        }
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
                        imprimirOficio.style.display = "none";
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
        insertRowPersonas: function (editPerson, index) {
            var txtNombrePersona = document.getElementById("txtNombrePersona");
            var txtPaternoPersona = document.getElementById("txtPaternoPersona");
            var txtMaternoPersona = document.getElementById("txtMaternoPersona");
            var txtDomiciolopersona = document.getElementById("txtDomiciolopersona");
            var cmbGeneroPersona = document.getElementById("cmbGeneroPersona");
            var validaregistro = true;
            var msj = "Ocurrio un Error:  <br/>";
            if (txtNombrePersona.value == "") {
                msj += 'Ingrese Nombre <br/>';
                validaregistro = false;
            }
            if (txtPaternoPersona.value == "") {
                msj += 'Ingrese Apellido Paterno <br/>';
                validaregistro = false;
            }
            if (txtMaternoPersona.value == "") {
                msj += 'Ingrese Apellido Materno <br/>';
                validaregistro = false;
            }
            if (txtDomiciolopersona.value == "") {
                msj += 'Ingrese Domicilio <br/>';
                validaregistro = false;
            }
            if (cmbGeneroPersona.value == "" || cmbGeneroPersona.value == 0) {
                msj += 'Seleccione Genero <br/>';
                validaregistro = false;
            }
            if (validaregistro == true) {
                var params = [];
                params["Nombre"] = txtNombrePersona.value.toUpperCase().trim();
                params["Paterno"] = txtPaternoPersona.value.toUpperCase().trim();
                params["Materno"] = txtMaternoPersona.value.toUpperCase().trim();
                if (this.verificaExistente(this.tblPersonasAprehenderse_Array, params, 1, index)) {
                    var string = "{";
                    string += '"Nombre":"' + txtNombrePersona.value.toUpperCase().trim() + '", ';
                    string += '"Paterno":"' + txtPaternoPersona.value.toUpperCase().trim() + '", ';
                    string += '"Materno":"' + txtMaternoPersona.value.toUpperCase().trim() + '", ';
                    string += '"Domicilio":"' + txtDomiciolopersona.value.toUpperCase().trim() + '", ';
                    string += '"Genero":"' + cmbGeneroPersona.value.toUpperCase().trim() + '"';
                    string += '}';
                    if (editPerson == true) {
                        this.tblPersonasAprehenderse_Array[index] = string;
                        return true;
                    } else {
                        this.tblPersonasAprehenderse_Array[this.tblPersonasAprehenderse_Array.length] = string;
                    }

                    this.addRow('tblPersonasAprehenderse', txtNombrePersona.value.trim() + ' ' +
                            txtPaternoPersona.value.trim() + ' ' +
                            txtMaternoPersona.value.trim(),
                            txtDomiciolopersona.value.trim(),
                            cmbGeneroPersona.options[cmbGeneroPersona.selectedIndex].text
                            );
                } else {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Este Registro Ya Existe");
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }
                txtNombrePersona.value = "";
                txtPaternoPersona.value = "";
                txtMaternoPersona.value = "";
                txtDomiciolopersona.value = "";
                cmbGeneroPersona.value = 0;
            } else {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(msj);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
            }

        },
        addRow: function (idTable) {
            var table = document.getElementById(idTable);
            var tr = document.createElement("TR");
            for (var index = 1; index < arguments.length; index++) {
                var td = document.createElement("TD");
                td.appendChild(document.createTextNode(arguments[index].toUpperCase()));
                tr.appendChild(td);
            }
            var self = this;
            tr.onclick = function () {
                self.editRow(this, idTable);
            }

            var td = document.createElement("TD");
            var input = document.createElement("INPUT");
            input.type = "checkbox";
            input.name = idTable + "_chkFila";
            input.id = idTable + "_chkFila";
            td.appendChild(input);
            td.align = 'center';
            tr.appendChild(td);
            if (typeof table.tBodies[0] == "undefined") {
                var tBody = document.createElement("TBODY");
                tBody.appendChild(tr);
                table.appendChild(tBody);
            } else {
                table.tBodies[0].appendChild(tr);
            }
        },
        deleteRow: function (object) {
            if (confirm("\u00BFEstas seguro de eliminar este registro?") == true) {
                var table = object.parentNode.parentNode.parentNode.parentNode;
                var checkbox = document.getElementsByName(table.id + '_chkFila');
                for (var index = 0; index < checkbox.length; index++) {
                    if (checkbox[index].checked == true) {
                        table.tBodies[0].removeChild(checkbox[index].parentNode.parentNode);
                        eval("this." + table.id + "_Array.splice(" + index + ",1)");
                        index = index - 1;
                    }
                }
            }
            this.cancelEdit();
            $(".editPerson").html("");
            $(".addPerson").show();
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
                var ued = UE.getEditor('descCateoNegado');
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
                        var ued = UE.getEditor('descCateoNegado');
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
                        this.limpiarTablas("tblPersonasAprehenderse");
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
                //var date = new Date;
                //var hh = date.getHours();
                //var mm = date.getMinutes();
                $("#fechaPractica").val("");
                $("#HoraPractica").val("");
            }
        },
        seleccionaInforme: function () {
            var fechaHoraInforme = document.getElementById("fechaHoraInforme");
            var HorasInforme = document.getElementById("HorasInforme");
            var plazoInforme = document.getElementsByName("plazoInforme");
            // date = new Date;
            //var hh = date.getHours();
            //var mm = date.getMinutes();
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
                this.validarPaso1('S');
                this.limpiarTablasSinCheck("tblPersonas");
                this.limpiarTablasSinCheck("tblImputados");
                this.limpiarTablasSinCheck("tblVictimas");
                this.limpiarTablasSinCheck("tblDelitos");
                this.limpiarTablasSinCheck("tblMpsResponsables");
                this.solicitudInformacion(this.cveRegistro);
            }
        },
        limpiarTablasSinCheck: function (nombreTabla) {
            $("#" + nombreTabla + " > tbody").remove();
        },
        getPersonas: function (registro) {
            var table = "<tbody>";
            $.each(registro, function (index, value) {
                if (value.cveOrigen == 1) {
                    table += "<tr>";
                    table += "<td>" + value.nombre + " " + value.paterno + " " + value.materno + "</td>";
                    table += "<td>" + value.domicilio + "</td>";
                    $("#cmbGeneroPersona").val(value.cveGenero);
                    table += "<td>" + $("#cmbGeneroPersona option:selected").text() + "</td>";
                    table += "</tr>";
                    $("#cmbGeneroPersona").val(0)
                }
            });
            table += "</tbody>";
            $("#tblPersonas").append(table);
        },
        getImputados: function (registro) {
            var table = "<tbody>";
            $.each(registro, function (index, value) {
                table += "<tr>";
                if (value.cveTipoPersona == 1) {
                    table += "<td>" + value.nombre + " " + value.paterno + " " + value.materno + "</td>";
                } else {
                    table += "<td>" + value.nombreMoral + "</td>";
                }
                table += "<td>" + value.domicilio + "</td>";
                $("#cmbGeneroPersona").val(value.cveGenero)
                table += "<td>" + $("#cmbGeneroPersona option:selected").text() + "</td>";
                table += "</tr>";
                $("#cmbGeneroPersona").val(0);
            });
            table += "</tbody>";
            $("#tblImputados").append(table);
        },
        getOfendidos: function (registro) {
            var table = "<tbody>";
            $.each(registro, function (index, value) {
                table += "<tr>";
                if (value.cveTipoPersona == 1) {
                    table += "<td>" + value.nombre + " " + value.paterno + " " + value.materno + "</td>";
                } else {
                    table += "<td>" + value.nombreMoral + "</td>";
                }
                table += "<td>" + value.domicilio + "</td>";
                $("#cmbGeneroPersona").val(value.cveGenero)
                table += "<td>" + $("#cmbGeneroPersona option:selected").text() + "</td>";
                table += "</tr>";
                $("#cmbGeneroPersona").val(0);
            });
            table += "</tbody>";
            $("#tblVictimas").append(table);
        },
        getDelitos: function (registro) {
            var self = this;
            $("#tblDelitos").append("<tbody>");
            $.each(registro, function (index, value) {
                self.getNameDelitos(value.cveDelito);
            });
        },
        getNameDelitos: function (registro) {
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
                url: "../fachadas/sigejupe/solicitudesordenes/SolicitudesordenesFacade.Class.php",
                data: "accion=consultarDetalleOrden&idOrden=" + registro + "&juez=updateJuez",
                type: "POST",
                success: function (data) {
                    data = eval("(" + data + ")");
                    if (data.type == "OK") {
                        var i = 0;
                        $.each(data.data, function (index, value) {
                            $(".nmcat").text(value.orden.numeroOrden + "/" + value.orden.anioOrden);
                            $(".nommp").text(value.solicitudOrden.nombreUsuario);
                            $(".fecsol").text(value.solicitudOrden.fechaRegistro);
                            $(".emailMp").html("<a href='mailto:" + value.orden.email.toLowerCase() + "' > " + value.orden.email.toLowerCase() + "</a>");
                            if (value.solicitudOrden.carpetaInv.trim() != "") {
                                $(".carpinv").text(value.solicitudOrden.carpetaInv);
                            } else {
                                $(".carpinv").parent().parent().hide();
                            }
                            if (value.solicitudOrden.nuc.trim() != "") {
                                $(".nucIn").text(value.solicitudOrden.nuc);
                                $(".nucIn").parent().parent().show();
                            } else {
                                $(".nucIn").parent().parent().hide();
                            }
                            // Verificamos si existe un documento   
                            if (value.documento != "") {
                                var pathDocument = (value.documento).substring(9);
                                var position = (value.documento).lastIndexOf("/");
                                var name = (value.documento).substring((position + 1));
                                $("fileFound").html("<div class='text-center' ><br /><a target='_blank' href='../" + pathDocument + "' >ARCHIVO PROPORCIONADO POR EL MINISTERIO P&Uacute;BLICO PARA LA SOLICITUD DE ORDEN DE APREHENSI&Oacute;N</a><br /><br /></div>");
                            } else {
                                $("fileFound").html(" *No se Encontraron resultados <p>&nbsp;</p>");
                            }
                            $("#informeSolicitudTexto").html(value.orden.solicitud);
                            self.getPersonas(value.personas);
                            self.getImputados(value.imputados);
                            self.getOfendidos(value.ofendidos);
                            self.getDelitos(value.delitos);
                            self.getMPS(value.ministeriosPublicos);
                            $("#txtJuez").val(value.juzgador.nombre + " " + value.juzgador.paterno + " " + value.juzgador.materno);
                            $("#txtCargo").val("JUEZ DE " + value.juzgador.desTipoJuzgador);
                            $("#txtJuzgado").val(value.solicitudOrden.desJuzgado);
                            $("#cmbJuzgadoSolicitar").val(value.solicitudOrden.cveJuzgado);
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
            var imprimirOficio = document.getElementById("imprimirOficio");
            limpiar6.style.display = "inline-block";
            anterior6.style.display = "inline-block";
            enviar.style.display = "inline-block";
            nueva.style.display = "none";
            imprimir.style.display = "none";
            imprimirOficio.style.display = "none";
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
            var imprimirOficio = document.getElementById("imprimirOficio");
            var imprimirR = document.getElementById("imprimirRespuesta");
            anterior6.style.display = "none";
            nueva.style.display = "none";
            imprimir.style.display = "none";
            imprimirOficio.style.display = "imprimirOficio";
            imprimirR.style.display = "none";
            var self = this;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ordenes/OrdenesFacade.Class.php",
                data: "accion=descargaSolicitudOrden&idOrden=" + this.cveRegistro,
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
                        window.location.href = '../fachadas/sigejupe/ordenes/OrdenesFacade.Class.php?action=descargaRespuestaOrden&idOrden=' + self.cveRegistro;
                        anterior6.style.display = "inline-block";
                        nueva.style.display = "inline-block";
                        imprimir.style.display = "inline-block";
                        imprimirOficio.style.display = "inline-block";
                        imprimirR.style.display = "inline-block";
                    } else {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html(datos.text);
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        anterior6.style.display = "inline-block";
                        nueva.style.display = "inline-block";
                        imprimir.style.display = "inline-block";
                        imprimirOficio.style.display = "inline-block";
                        imprimirR.style.display = "inline-block";
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la petici\u00f3n:\n <br />" + otroobj);
                }
            });
        },
        editRow: function (object, table) {
            if (table == "tblPersonasAprehenderse") {
                var index = $(object)[0].rowIndex - 1;
                var table = this.tblPersonasAprehenderse_Array;
                eval("table =([" + table + "])");
                $("#txtNombrePersona").val(table[index].Nombre);
                $("#txtPaternoPersona").val(table[index].Paterno);
                $("#txtMaternoPersona").val(table[index].Materno);
                $("#txtDomiciolopersona").val(table[index].Domicilio);
                $("#cmbGeneroPersona").val(table[index].Genero);
                $(".addPerson").hide();
                $(".editPerson").html("<button class='btn btn-primary' onclick='javascript:ordenesSolicitudes.editPerson(" + index + ")' >Editar</button> "
                        + "<button class='btn btn-primary' onclick='javascript:ordenesSolicitudes.cancelEdit(\".addPerson\", \".editPerson\")' >Cancelar</button>");
            }

        },
        editPerson: function (index) {
            var flag = this.insertRowPersonas(true, index);
            if (flag == true) {
                $("#divAlertSuccess").html("");
                $("#divAlertSuccess").html("Informaci&oacute;n Modificada Correctamente");
                $("#divAlertSuccess").show("slide");
                setTimeAlert("divAlertSuccess");
                $(".editPerson").html("");
                $(".addPerson").show();
                $("#tblPersonasAprehenderse > tbody").remove();
                var table = this.tblPersonasAprehenderse_Array;
                eval("table =([" + table + "])");
                var self = this;
                var cmbGeneroPersona = document.getElementById("cmbGeneroPersona");
                $.each(table, function (index, val) {
                    cmbGeneroPersona.value = val.Genero;
                    var genero = cmbGeneroPersona.options[cmbGeneroPersona.selectedIndex].text
                    self.addRow('tblPersonasAprehenderse', val.Nombre + ' ' + val.Paterno + ' ' + val.Materno, val.Domicilio, genero);
                });
                this.cancelEdit();
            }

        },
        cancelEdit: function (add, edit) {
            $("#txtNombrePersona").val("");
            $("#txtPaternoPersona").val("");
            $("#txtMaternoPersona").val("");
            $("#txtDomiciolopersona").val("");
            $("#cmbGeneroPersona").val(0);
            $(edit).html("");
            $(add).show();
        },
        imprimirOficio: function () {
            var anterior6 = document.getElementById("anterior6");
            var nueva = document.getElementById("nueva");
            var imprimir = document.getElementById("imprimir");
            var imprimirOficio = document.getElementById("imprimirOficio");
            var imprimirR = document.getElementById("imprimirRespuesta");
            anterior6.style.display = "none";
            nueva.style.display = "none";
            imprimir.style.display = "none";
            imprimirOficio.style.display = "none";
            imprimirR.style.display = "none";
            var self = this;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ordenes/OrdenesFacade.Class.php",
                data: "accion=descargaSolicitudOrden&opcion=Oficio&idOrden=" + this.cveRegistro,
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
                        window.location.href = '../fachadas/sigejupe/ordenes/OrdenesFacade.Class.php?action=descargaRespuestaOrden&opcion=Oficio&idOrden=' + self.cveRegistro;
                        anterior6.style.display = "inline-block";
                        nueva.style.display = "inline-block";
                        imprimir.style.display = "inline-block";
                        imprimirOficio.style.display = "inline-block";
                        imprimirR.style.display = "inline-block";
                    } else {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html(datos.text);
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        anterior6.style.display = "inline-block";
                        nueva.style.display = "inline-block";
                        imprimir.style.display = "inline-block";
                        imprimirOficio.style.display = "inline-block";
                        imprimirR.style.display = "inline-block";
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la petici\u00f3n:\n <br />" + otroobj);
                }
            });
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