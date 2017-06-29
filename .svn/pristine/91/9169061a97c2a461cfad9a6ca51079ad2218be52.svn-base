var Cateos = function () {
    return {
        tblPersonas_Array: new Array(),
        tblObjetos_Array: new Array(),
        tblImputados_Array: new Array(),
        tblImputadosCausa_Array: new Array(),
        tblVictimas_Array: new Array(),
        tblVictimasCausa_Array: new Array(),
        tblDelitos_Array: new Array(),
        tblDelitosCausa_Array: new Array(),
        tblMPs_Array: new Array(),
        NombreMPSolicitante: "",
        seleccionTipo: function (object) {
            var txtCarpeta = $('#txtCarpeta');
            var txtNumCausa = $('#txtNumCausa');
            var txtAniCausa = $('#txtAniCausa');
            var TipoCausa = $('#tipoCausa');
            var cmbJuzgadoProcedencia = $('#cmbJuzgadoProcedencia');
            var txtNuc = $("#txtNuc");
            switch (object.value) {
                case "1":
                    txtNumCausa.attr("disabled", false);
                    txtAniCausa.attr("disabled", false);
                    cmbJuzgadoProcedencia.attr("disabled", false);
                    TipoCausa.attr("disabled", false);
                    txtCarpeta.attr("disabled", true);
                    txtNuc.attr("disabled", true);
                    txtCarpeta.val("");
                    txtNuc.val("");
                    break;
                case "2":
                    txtNumCausa.attr("disabled", true);
                    txtAniCausa.attr("disabled", true);
                    cmbJuzgadoProcedencia.attr("disabled", true);
                    TipoCausa.attr("disabled", true);
                    txtCarpeta.attr("disabled", false);
                    txtNuc.attr("disabled", false);
                    txtNumCausa.val("");
                    txtAniCausa.val("");
                    cmbJuzgadoProcedencia.val("0");
                    TipoCausa.val("0");
                    break;
            }
        },
        validarPaso1: function (buscar) {
            var txtCarpeta = $('#txtCarpeta');
            var txtNumCausa = $('#txtNumCausa');
            var txtAniCausa = $('#txtAniCausa');
            var cmbJuzgadoProcedencia = $('#cmbJuzgadoProcedencia');
            var cmbJuzgadoSolicitar = $('#cmbJuzgadoSolicitar');
            var txtEmail = $('#txtEmail');
            var tipoNumero = document.getElementsByName('tipoNumero');
            var opcion = 1;
            var error = false;
            var txtMensaje = "Revise: <br /><br />";
            for (var index = 0; index < tipoNumero.length; index++) {
                if (tipoNumero[index].checked == true) {
                    opcion = tipoNumero[index].value;
                }
            }

            if (cmbJuzgadoSolicitar.val().trim() == 0) {
                txtMensaje += 'El juzgado a solicitar cateo es requerido<br />';
                error = true;
            }
            if (opcion == 1) {
                if (txtNumCausa.val().trim() == "") {
                    txtMensaje += 'El n\u00famero de causa es requerido<br />';
                    error = true;
                }

                if (txtAniCausa.val().trim() == "") {
                    txtMensaje += 'El a\u00f1o de la causa es requerido<br />';
                    error = true;
                }
                if (cmbJuzgadoProcedencia.val().trim() == 0) {
                    txtMensaje += 'El juzgado de procedencia es requerido<br />';
                    error = true;
                }
            } else if (opcion == 2) {
                if (txtCarpeta.val().trim() == "") {
                    txtMensaje += 'La carpeta de investigaci\u00f3n es requerida<br />';
                    error = true;
                }
            }

            if (!txtEmail.val().email()) {
                txtMensaje += 'Correo electr\u00f3nico institucional invalido<br />';
                error = true;
            }

            txtMensaje += 'Corrija los errores listados anteriormente<br />';
            if (error == true) {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(txtMensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                //this.siguiente('liPaso1', 'liPaso2', '');
                return false;
            } else {
                if (buscar == true) {
                    this.buscarCausa();
                }
                this.siguiente('liPaso2', 'liPaso1', '');
                $("#btnStart").attr("disabled", "disabled");
                return true;
            }
        },
        siguiente: function (sig, act, validar) {
            var next = $(sig);
            var actual = $(act);
            var step = $("#")
            next.addClass('selected');
            actual.removeClass('selected');
            sig = sig.substring(2, 7);
            act = act.substring(2, 7);
            var divPaso1 = $('#div' + act);
            var divPaso2 = $('#div' + sig);
            divPaso1.hide();
            divPaso2.show();
            var sigD = sig.substring(4);
            if (sigD == 1) {
                $("#btnStart").removeAttr("disabled");
            }
            $("." + sig).find("a").addClass("active");
            $("." + act).find("a").removeClass("active");
            if (typeof validar != "undefined") {
                if (validar.trim() != "") {
                    eval(validar + "()");
                }
            }
            helper.getInfoUsuarios("solicitudescateos");
        },
        addPersona: function (editPerson, index) {
            var cmbGenPersona = $("#cmbGenPersona");
            var txtNomPersona = $("#txtNomPersona");
            var txtPatPersona = $("#txtPatPersona");
            var txtMatPersona = $("#txtMatPersona");
            var txtDomPersona = $("#txtDomPersona");
            var cmbMunPersona = $("#cmbMunPersona");
            var error = false;
            var txtMensaje = "Revise: <br /><br />";
            if (txtNomPersona.val().trim() == "") {
                txtMensaje += "No ingreso un nombre de la persona requerido<br />";
                error = true;
            }
            if (txtPatPersona.val().trim() == "") {
                txtMensaje += "No ingreso un apellido paterno de la persona requerido<br />";
                error = true;
            }

            if (txtMatPersona.val().trim() == "") {
                txtMensaje += "No ingreso un apellido materno requerido<br />";
                error = true;
            }

            if (txtDomPersona.val().trim() == "") {
                txtMensaje += "No ingreso domicilio de la persona requerido<br />";
                error = true;
            }

            if (cmbGenPersona.val().trim() == 0) {
                txtMensaje += "No selecciono un genero requerido<br />";
                error = true;
            }

            txtMensaje += '<br />Corrija los errores listados anteriormente<br />';
            if (error == false) {

                var parametros = [];
                parametros["Nombre"] = txtNomPersona.val().toUpperCase().trim();
                parametros["Paterno"] = txtPatPersona.val().toUpperCase().trim();
                parametros["Materno"] = txtMatPersona.val().toUpperCase().trim();
                parametros["NombreMoral"] = "";
                if (this.verificaExistente(this.tblPersonas_Array, parametros, 1, index)) {
                    var string = "{";
                    string += "\"Nombre\":\"" + txtNomPersona.val().toUpperCase().trim() + "\",\"";
                    string += "Paterno\":\"" + txtPatPersona.val().toUpperCase().trim() + "\",\"";
                    string += "Materno\":\"" + txtMatPersona.val().toUpperCase().trim() + "\",\"";
                    string += "Domicilio\":\"" + txtDomPersona.val().toUpperCase().trim() + "\",\"";
                    string += "Genero\":\"" + cmbGenPersona.val().toUpperCase().trim() + "\",\"";
                    string += "Municipio\":\"0\"";
                    string += "}";
                    if (editPerson == true) {
                        this.tblPersonas_Array[index] = string;
                        return true;
                    } else {
                        this.tblPersonas_Array[this.tblPersonas_Array.length] = string;
                    }


                    this.addRow('tblPersonas', txtNomPersona.val().trim() + ' ' + txtPatPersona.val().trim() + ' ' + txtMatPersona.val().trim(), txtDomPersona.val().trim());
                } else {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Este registro ya existe");
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }
                txtNomPersona.val("");
                txtPatPersona.val("");
                txtMatPersona.val("");
                txtDomPersona.val("");
                cmbGenPersona.val(0);
            } else {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(txtMensaje);
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

            var td = document.createElement("td");
            var input = document.createElement("input");
            input.type = "checkbox";
            input.name = idTable + "_chkFila";
            input.id = idTable + "_chkFila";
            td.appendChild(input);
            td.align = 'center';
            tr.appendChild(td);
            if (typeof table.tBodies[0] == "undefined") {
                var tBody = document.createElement("tbody");
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
            $(".editPerson").html("");
            $(".addPerson").show();
            $(".editObjeto").html("");
            $(".addObjeto").show();
            $(".editImputado").html("");
            $(".addImputado").show();
            $(".editOfendido").html("");
            $(".addOfendido").show();
            $(".editDelito").html("");
            $(".addDelito").show();
            this.cancelEdit();
        },
        addObjeto: function (editObject, index) {
            var txtDomObjeto = $("#txtDomObjeto");
            var txtDescObjeto = $("#txtDescObjeto");
            var error = false;
            var txtMensaje = "Revise: <br /><br />";
            if (txtDomObjeto.val().trim() == "") {
                txtMensaje += "No ingreso domicilio de Objeto requerido<br />";
                error = true;
            }

            if (txtDescObjeto.val().trim() == "") {
                txtMensaje += "No ingreso descripcion de Objeto requerido<br />";
                error = true;
            }

            txtMensaje += '<br />Corrija los errores listados anteriormente<br />';
            if (error == false) {
                var parametros = [];
                parametros["Descripcion"] = txtDescObjeto.val().toUpperCase().trim()
                if (this.verificaExistente(this.tblObjetos_Array, parametros, 3, index)) {
                    var string = "{";
                    string += "\"Descripcion\":\"" + txtDescObjeto.val().toUpperCase().trim() + "\",\"";
                    string += "Domicilio\":\"" + txtDomObjeto.val().toUpperCase().trim() + "\"";
                    string += "}";
                    if (editObject == true) {
                        this.tblObjetos_Array[index] = string;
                        return true;
                    } else {
                        this.tblObjetos_Array[this.tblObjetos_Array.length] = string;
                    }
                    this.addRow('tblObjetos', txtDescObjeto.val().trim(), txtDomObjeto.val().trim());
                    txtDescObjeto.val("");
                    txtDomObjeto.val("");
                } else {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Este registro ya existe");
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }
            } else {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(txtMensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
            }
        },
        validaPasos2: function () {
            var objectos = $('#objectos');
            var personas = $('#personas');
            var error = false;
            var txtMensaje = "Revise: <br /><br />";
            if ((this.tblObjetos_Array.length <= 0) && (this.tblPersonas_Array.length <= 0) && (error == false)) {
                error = true;
                txtMensaje += "No se encontro ninguna persona u objeto en la lista requerido.<br />";
            }
            if ((this.tblPersonas_Array.length <= 0) && (this.tblObjetos_Array.length <= 0) && (error == false)) {
                error = true;
                txtMensaje += "No se encontro ninguna persona u objeto en la lista requerido.<br />";
            }

            txtMensaje += '<br />Corrija los errores listados anteriormente<br />';
            if (error == false) {
                this.siguiente('liPaso3', 'liPaso2');
                return true;
            } else {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(txtMensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                //this.siguiente('liPaso2', 'liPaso3', '');
                return false;
            }
        },
        buscarCausa: function () {
            var self = this;
            var txtCarpeta = $('#txtCarpeta');
            var txtNumCausa = $('#txtNumCausa');
            var txtAniCausa = $('#txtAniCausa');
            var cmbJuzgadoProcedencia = $('#cmbJuzgadoProcedencia');
            if (cmbJuzgadoProcedencia.val() == "" || cmbJuzgadoProcedencia.val() == 0) {
                cmbJuzgadoProcedencia = "";
            } else {
                cmbJuzgadoProcedencia = cmbJuzgadoProcedencia.val();
            }

            var tipoCausa = $('#tipoCausa');
            if (tipoCausa.val() == "" || tipoCausa.val() == 0) {
                tipoCausa = "";
            } else {
                tipoCausa = tipoCausa.val();
            }

            var data = {
                carpetaInv: txtCarpeta.val(),
                numero: txtNumCausa.val(),
                anio: txtAniCausa.val(),
                cveJuzgado: cmbJuzgadoProcedencia,
                cveTipoCarpeta: tipoCausa,
                accion: "seleccionarDetalleCarpetasjudicialesCateos"
            }

            var urlToSend = "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php";
            $.ajax({
                url: urlToSend,
                method: "POST",
                data: data,
                success: function (datos) {
                    datos = eval("(" + datos + ")");
                    if (datos.type == 'OK') {
                        var cmbGenImputado = $("#cmbGenImputado");
                        var cmbGenVictima = $("#cmbGenVictima");
                        var cmbDelito = $("#cmbDelito");
                        var btnEnviar = $("#btnEnviar");
                        self.deleteRowAll('tblVictimasCausa');
                        self.deleteRowAll('tblImputadosCausa');
                        self.deleteRowAll('tblDelitosCausa');
                        btnEnviar.hide();
                        if (datos.imputadosCarpetas.length > 0) {
                            $.each(datos.imputadosCarpetas, function (imIndex, imVal) {
                                var string = "{";
                                string += "\"Nombre\":\"" + imVal.nombre + "\",\"";
                                string += "Paterno\":\"" + imVal.paterno + "\",\"";
                                string += "Materno\":\"" + imVal.materno + "\",\"";
                                string += "Domicilio\":\"" + imVal.domicilio + "\",\"";
                                string += "Genero\":\"" + imVal.cveGenero + "\",\"";
                                string += "Alias\":\"" + imVal.alias + "\",\"";
                                string += "Municipio\":\"" + imVal.cveMunicipioNacimiento + "\",\"";
                                string += "Telefono\":\"" + imVal.telefono + "\",\"";
                                string += "Email\":\"" + imVal.email + "\",\"";
                                string += "Detenido\":\"" + imVal.detenido + "\",\"";
                                string += "TipoPersona\":\"" + imVal.cveTipoPersona + "\",\"";
                                string += "NombreMoral\":\"" + imVal.nombreMoral + "\"";
                                string += "}";
                                self.tblImputadosCausa_Array[self.tblImputadosCausa_Array.length] = string;
                                cmbGenImputado.val(imVal.cveGenero);
                                var dom = "";
                                if (typeof imVal.domicilio == "undefined") {
                                    dom = "";
                                } else {
                                    dom = imVal.domicilio;
                                }

                                self.addRow('tblImputadosCausa', imVal.nombre + " " + imVal.paterno + " " + imVal.materno, dom, self.getTexto("cmbGenImputado"));
                                cmbGenImputado.val(0);
                            });
                            $(".impcausadiv").show();
                        }
                        if (datos.ofendidosCarpetas.length > 0) {
                            $.each(datos.ofendidosCarpetas, function (ofIndex, ofVal) {
                                cmbGenVictima.val(ofVal.cveGenero);
                                var string = "{";
                                string += "\"Nombre\":\"" + ofVal.nombre + "\",\"";
                                string += "Paterno\":\"" + ofVal.paterno + "\",\"";
                                string += "Materno\":\"" + ofVal.materno + "\",\"";
                                string += "Domicilio\":\"" + ofVal.domicilio + "\",\"";
                                string += "Genero\":\"" + ofVal.cveGenero + "\",\"";
                                string += "Municipio\":\"" + ofVal.cveMunicipio + "\",\"";
                                string += "Telefono\":\"" + ofVal.telefono + "\",\"";
                                string += "Email\":\"" + ofVal.email + "\",\"";
                                string += "TipoPersona\":\"" + ofVal.cveTipoPersona + "\",\"";
                                string += "NombreMoral\":\"" + ofVal.nombreMoral + "\"";
                                string += "}";
                                self.tblVictimasCausa_Array[self.tblVictimas_Array.length] = string;
                                var dom = "";
                                if (typeof ofVal.domicilio == "undefined") {
                                    dom = "";
                                } else {
                                    dom = ofVal.domicilio;
                                }
                                self.addRow('tblVictimasCausa', ofVal.nombre + " " + ofVal.paterno + " " + ofVal.materno, dom, self.getTexto("cmbGenVictima"));
                                cmbGenVictima.val(0);
                            });
                            $(".victimasCausat").show();
                        }
                        if (datos.delitosCarpetas.length > 0) {
                            $.each(datos.delitosCarpetas, function (deIndex, deVal) {
                                var string = "{";
                                string += "\"cveDelito\":\"" + deVal.cveDelito + "\"}";
                                self.tblDelitosCausa_Array[self.tblDelitosCausa_Array.length] = string;
                                cmbDelito.val(deVal.cveDelito);
                                self.addRow('tblDelitosCausa', self.getTexto("cmbDelito"));
                                cmbDelito.val(0);
                            });
                            $(".delcausaT").show();
                        }
                        btnEnviar.show();
                    } else {
                        if ($("#txtCarpeta").val() == "" && $("#txtNuc").val() == "") {
                            self.siguiente("liPaso1", "liPaso2");
                            $("#divAlertWarning").html("");
                            $("#divAlertWarning").html(datos.text);
                            $("#divAlertWarning").show("slide");
                            setTimeAlert("divAlertWarning");
                            $("#btnStart").removeAttr("disabled");
                        }
                    }
                }
            });
        },
        deleteRowAll: function (object) {
            var table = document.getElementById(object);
            var checkbox = document.getElementsByName(table.id + '_chkFila');
            for (var index = 0; index < checkbox.length; index++) {
                table.tBodies[0].removeChild(checkbox[index].parentNode.parentNode);
                eval("this." + table.id + "_Array.splice(" + index + ",1)");
                index = index - 1;
            }
        },
        getTexto: function (cmb) {
            var texto = $("#" + cmb + " option:selected").text().toUpperCase();
            return texto;
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
                    if (cmbTipoPersona.value == 1) {
                        this.addRow('tblImputados', txtNomImputado.value.trim() + " " + txtPatImputado.value.trim() + " " + txtMatImputado.value.trim(), txtDomImputado.value.trim(), this.getTexto("cmbGenImputado"));
                    } else {
                        this.addRow('tblImputados', txtNombreMoral.value.trim(), "", "No Aplica");
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
            if (cmbTipoPersona.value == 1) {

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
                        txtMensaje += "El tel&eacute;fono es invalido (Ingresa 10 n&uacute;meros)";
                        error = true;
                    }
                }

                if (txtEmVictima.value.trim() != "") {
                    if (!txtEmVictima.value.emailglobal()) {
                        txtMensaje += "El correo electronico es incorrecto";
                        error = true;
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
                    if (editOfendido == true) {
                        this.tblVictimas_Array[index] = string;
                        return true;
                    } else {
                        this.tblVictimas_Array[this.tblVictimas_Array.length] = string;
                    }

                    if (cmbTipoPersona.value == 1) {
                        this.addRow('tblVictimas', txtNomVictima.value.trim() + " " + txtPatVictima.value.trim() + " " + txtMatVictima.value.trim(), txtDomVictima.value.trim(), this.getTexto("cmbGenVictima"));
                    } else {
                        this.addRow('tblVictimas', txtNombreMoral.value.trim(), "", "No Aplica");
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
                cmbTipoPersona.value = 0;
                txtNombreMoral.value = "";
            } else {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(txtMensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
            }
        },
        addDelito: function (editDelito, index) {
            var cmbDelito = document.getElementById("cmbDelito");
            var error = false;
            var txtMensaje = "Revise: <br /><br />";
            if (cmbDelito.value.trim() == 0) {
                txtMensaje += "El delito es requerido<br />";
                error = true;
            }

            txtMensaje += '<br />Corrija los errores listados anteriormente<br />';
            if (error == false) {
                var parametros = new Array();
                parametros["cveDelito"] = cmbDelito.value.toUpperCase().trim();
                if (this.verificaExistente(this.tblDelitos_Array, parametros, 2, index)) {
                    var string = "{";
                    string += "\"cveDelito\":\"" + cmbDelito.value.toUpperCase().trim() + "\"}";
                    if (editDelito == true) {
                        this.tblDelitos_Array[index] = string;
                        return true;
                    } else {
                        this.tblDelitos_Array[this.tblDelitos_Array.length] = string;
                    }
                    this.addRow('tblDelitos', this.getTexto("cmbDelito"));
                } else {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Este registro ya existe");
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }
                cmbDelito.value = 0;
            } else {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(txtMensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
            }

        },
        addImputadosCausa: function (object, id) {
            var cmbGenImputado = document.getElementById("cmbGenImputado");
            if (confirm("\u00BFEstas seguro de agregar registro solicitud?") == true) {
                var table = object.parentNode.parentNode.parentNode.parentNode;
                var checkbox = document.getElementsByName(table.id + '_chkFila');
                for (var index = 0; index < checkbox.length; index++) {
                    if (checkbox[index].checked == true) {
                        var registro = eval("this." + table.id + "_Array[index]");
                        var array = "";
                        eval("array =this." + id + "_Array;");
                        if (array != "") {
                            array = eval("([" + array + "])");
                            var registrotmp = eval("(" + registro + ")");
                            var existe = false;
                            for (var x = 0; x < array.length; x++) {
                                if ((array[x].Nombre == registrotmp.Nombre) && (array[x].Paterno = registrotmp.Paterno) && (array[x].Materno = registrotmp.Materno)) {
                                    existe = true;
                                    break;
                                }
                            }

                            if (existe == false) {
                                eval("this." + id + "_Array[this." + id + "_Array.length] =  '" + registro + "';");
                                cmbGenImputado.value = registrotmp.Genero;
                                this.addRow(id, registrotmp.Nombre + " " + registrotmp.Paterno + " " + registrotmp.Materno, registrotmp.Domicilio, this.getTexto("cmbGenImputado"));
                            }

                        } else {
                            eval("this." + id + "_Array[this." + id + "_Array.length] =  '" + registro + "';");
                            registro = eval("(" + registro + ")");
                            cmbGenImputado.value = registro.Genero;
                            this.addRow(id, registro.Nombre + " " + registro.Paterno + " " + registro.Materno, registro.Domicilio, this.getTexto("cmbGenImputado"));
                        }
                        cmbGenImputado.value = 0;
                    }
                }
                this.deleteRows(object);
            }
        },
        addVictimasCausa: function (object, id) {
            var cmbGenVictima = document.getElementById("cmbGenVictima");
            if (confirm("\u00BFEstas seguro de agregar registro solicitud?") == true) {
                var table = object.parentNode.parentNode.parentNode.parentNode;
                var checkbox = document.getElementsByName(table.id + '_chkFila');
                for (var index = 0; index < checkbox.length; index++) {
                    if (checkbox[index].checked == true) {
                        var registro = eval("this." + table.id + "_Array[index]");
                        var array = "";
                        eval("array =this." + id + "_Array;");
                        if (array != "") {
                            array = eval("([" + array + "])");
                            var registrotmp = eval("(" + registro + ")");
                            var existe = false;
                            for (var x = 0; x < array.length; x++) {
                                if ((array[x].Nombre == registrotmp.Nombre) && (array[x].Paterno = registrotmp.Paterno) && (array[x].Materno = registrotmp.Materno)) {
                                    existe = true;
                                    break;
                                }
                            }

                            if (existe == false) {
                                eval("this." + id + "_Array[this." + id + "_Array.length] =  '" + registro + "';");
                                cmbGenVictima.value = registrotmp.Genero;
                                this.addRow(id, registrotmp.Nombre + " " + registrotmp.Paterno + " " + registrotmp.Materno, registrotmp.Domicilio, this.getTexto("cmbGenVictima"));
                            }

                        } else {
                            eval("this." + id + "_Array[this." + id + "_Array.length] =  '" + registro + "';");
                            registro = eval("(" + registro + ")");
                            cmbGenVictima.value = registro.Genero;
                            this.addRow(id, registro.Nombre + " " + registro.Paterno + " " + registro.Materno, registro.Domicilio, this.getTexto("cmbGenVictima"));
                        }
                        cmbGenVictima.value = 0;
                    }
                }
                this.deleteRows(object);
            }
        },
        addDelitosCausa: function (object, id) {
            var cmbDelito = document.getElementById("cmbDelito");
            if (confirm("\u00BFEstas seguro de agregar registro solicitud?") == true) {
                var table = object.parentNode.parentNode.parentNode.parentNode;
                var checkbox = document.getElementsByName(table.id + '_chkFila');
                for (var index = 0; index < checkbox.length; index++) {
                    if (checkbox[index].checked == true) {
                        var registro = eval("this." + table.id + "_Array[index]");
                        var array = "";
                        eval("array =this." + id + "_Array;");
                        if (array != "") {
                            array = eval("([" + array + "])");
                            var registrotmp = eval("(" + registro + ")");
                            var existe = false;
                            for (var x = 0; x < array.length; x++) {
                                if ((array[x].cveDelito == registrotmp.cveDelito)) {
                                    existe = true;
                                    break;
                                }
                            }

                            if (existe == false) {
                                eval("this." + id + "_Array[this." + id + "_Array.length] =  '" + registro + "';");
                                cmbDelito.value = registrotmp.cveDelito;
                                this.addRow(id, this.getTexto("cmbDelito"));
                            }

                        } else {
                            eval("this." + id + "_Array[this." + id + "_Array.length] =  '" + registro + "';");
                            registro = eval("(" + registro + ")");
                            cmbDelito.value = registro.cveDelito;
                            this.addRow(id, this.getTexto("cmbDelito"));
                        }
                        cmbDelito.value = 0;
                    }
                }
                this.deleteRows(object);
            }
        },
        deleteRows: function (object) {
            var table = object.parentNode.parentNode.parentNode.parentNode;
            var checkbox = document.getElementsByName(table.id + '_chkFila');
            for (var index = 0; index < checkbox.length; index++) {
                if (checkbox[index].checked == true) {
                    table.tBodies[0].removeChild(checkbox[index].parentNode.parentNode);
                    eval("this." + table.id + "_Array.splice(" + index + ",1)");
                    index = index - 1;
                }
            }
        },
        formato: function (object) {
            var formatos = new Array(".doc", ".docx", ".pdf");
            var extension = (object.value.substring(object.value.lastIndexOf("."))).toLowerCase();
            var valido = false;
            for (var index = 0; index < formatos.length; index++) {
                if (formatos[index] == extension) {
                    valido = true;
                    var imagen = extension.substring(1, extension.sterlen);
                    document.getElementById("solicitudFormato").innerHTML = "<i class='fa fa-file-o'></i>";
                    break;
                }
            }

            if (!valido) {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html("El archivo seleccionado no es un formato valido,<br /> los formatos validos deben ser:<br /><br /> \tdoc, docx y pdf");
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                document.getElementById("solicitudFormato").innerHTML = "";
                return false;
            } else {
                return true;
            }
        },
        validaPasos4: function () {
            var txtSolicitud = UE.getEditor('txtSolicitud').getContent();
//            var txtSolicitud = document.getElementById("txtSolicitud");
            var fileSolicitud = document.getElementById("fileSolicitud");
            var error = false;
            var txtMensaje = "Revise: <br /><br />";
            if ((txtSolicitud.trim() == "") && (fileSolicitud.value.trim() == "")) {
                txtMensaje += "La solicitud es requerida<br />";
                error = true;
            }
            if ((txtSolicitud == "") && (error == false) && (fileSolicitud.value.trim() == "")) {
                txtMensaje += "La solicitud es requerida<br />";
                error = true;
            }

            if ((fileSolicitud.value.trim() == "") && (error == false) && (txtSolicitud == "")) {
                txtMensaje += "El archivo de la solicitud es requerida<br />";
                error = true;
            }

            if (fileSolicitud.value.trim() != "") {
                if (!this.formato(fileSolicitud)) {
                    txtMensaje += "El archivo " + fileSolicitud.value + " de la solicitud no es un formato valido<br />";
                    fileSolicitud.value = "";
                    error = true;
                }
            }

            txtMensaje += '<br />Corrija los errores listados anteriormente<br />';
            if (error == false) {
                this.siguiente('liPaso5', 'liPaso4');
                return true;
            } else {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(txtMensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                //this.siguiente('liPaso4', 'liPaso5');
                return false;
            }
        },
        addMPs: function (nombre, paterno, materno) {
            var txtNombreMP = document.getElementById("txtNombreMP");
            var txtPaternoMP = document.getElementById("txtPaternoMP");
            var txtMaternoMP = document.getElementById("txtMaternoMP");
            if (nombre != "" && txtNombreMP.value == "") {
                txtNombreMP.value = nombre;
                txtPaternoMP.value = paterno;
                txtMaternoMP.value = materno;
                var string = "{";
                string += "\"Nombre\":\"" + txtNombreMP.value.toUpperCase().trim() + "\",\"";
                string += "Paterno\":\"" + txtPaternoMP.value.toUpperCase().trim() + "\",\"";
                string += "Materno\":\"" + txtMaternoMP.value.toUpperCase().trim() + "\"";
                string += "}";
                this.tblMPs_Array[this.tblMPs_Array.length] = string;
                var Nombre = txtNombreMP.value.toUpperCase() + " " +
                        txtPaternoMP.value.toUpperCase() + " " +
                        txtMaternoMP.value.toUpperCase();
                this.addRow('tblMPs', Nombre);
                txtNombreMP.value = "";
                txtPaternoMP.value = "";
                txtMaternoMP.value = "";
                return;
            }
            var error = false;
            var txtMensaje = "Revise: <br /><br />";
            if (txtNombreMP.value.trim() == "") {
                txtMensaje += "No ingreso Nombre del M.P. requerido<br />";
                error = true;
            }

            if (txtPaternoMP.value.trim() == "") {
                txtMensaje += "No ingreso Apellido Paterno del M.P. requerido<br />";
                error = true;
            }

            if (txtMaternoMP.value.trim() == "") {
                txtMensaje += "No ingreso Apellido Materno del M.P. requerido<br />";
                error = true;
            }

            txtMensaje += '<br />Corrija los errores listados anteriormente<br />';
            if (error == false) {
                var parametros = new Array();
                parametros["Nombre"] = txtNombreMP.value.toUpperCase().trim();
                parametros["Paterno"] = txtPaternoMP.value.toUpperCase().trim();
                parametros["Materno"] = txtMaternoMP.value.toUpperCase().trim();
                parametros["NombreMoral"] = '';
                if (this.verificaExistente(this.tblMPs_Array, parametros, 1)) {
                    var string = "{";
                    string += "\"Nombre\":\"" + txtNombreMP.value.toUpperCase().trim() + "\",\"";
                    string += "Paterno\":\"" + txtPaternoMP.value.toUpperCase().trim() + "\",\"";
                    string += "Materno\":\"" + txtMaternoMP.value.toUpperCase().trim() + "\"";
                    string += "}";
                    this.tblMPs_Array[this.tblMPs_Array.length] = string;
                    var Nombre = txtNombreMP.value.trim() + " " +
                            txtPaternoMP.value.toUpperCase().trim() + " " +
                            txtMaternoMP.value.toUpperCase().trim();
                    this.addRow('tblMPs', Nombre);
                } else {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Este registro ya existe");
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }
                txtNombreMP.value = "";
                txtPaternoMP.value = "";
                txtMaternoMP.value = "";
                mpsolicitante = "";
            } else {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(txtMensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
            }
        },
        enviar: function () {
            if (this.validarPaso1(false)) { // Verificamos que el paso 1 este completo
                if (this.validaPasos2()) { // Verificamos que el paso 2 este completo
                    if (this.validaPasos3()) {// Verificamos que el paso 3 este completo
                        if (this.validaPasos4()) { // Verificamos que el paso 4 este completo
                            if (this.validaPasos5()) { // Verificamos que el paso 5 este completo
                                var personas_array = document.createElement("textarea");
                                var objetos_array = document.createElement("textarea");
                                var imputados_array = document.createElement("textarea");
                                var victimas_array = document.createElement("textarea");
                                var delitos_array = document.createElement("textarea");
                                var mps_array = document.createElement("textarea");

                                personas_array.name = "personas_array";
                                personas_array.style.display = "none";
                                personas_array.value = "[" + this.tblPersonas_Array + "]";
                                personas_array.id = "personas_array";
                                document.frmSolicitud.appendChild(personas_array);
                                objetos_array.name = "objetos_array";
                                objetos_array.style.display = "none";
                                objetos_array.value = "[" + this.tblObjetos_Array + "]";
                                objetos_array.id = "objetos_array";
                                document.frmSolicitud.appendChild(objetos_array);
                                imputados_array.name = "imputados_array";
                                imputados_array.style.display = "none";
                                imputados_array.value = "[" + this.tblImputados_Array + "]";
                                imputados_array.id = "imputados_array";
                                document.frmSolicitud.appendChild(imputados_array);
                                victimas_array.name = "victimas_array";
                                victimas_array.style.display = "none";
                                victimas_array.value = "[" + this.tblVictimas_Array + "]";
                                victimas_array.id = "victimas_array";
                                document.frmSolicitud.appendChild(victimas_array);
                                delitos_array.name = "delitos_array";
                                delitos_array.style.display = "none";
                                delitos_array.value = "[" + this.tblDelitos_Array + "]";
                                delitos_array.id = "delitos_array";
                                document.frmSolicitud.appendChild(delitos_array);
                                mps_array.name = "mps_array";
                                mps_array.style.display = "none";
                                mps_array.value = "[" + this.tblMPs_Array + "]";
                                mps_array.id = "mps_array";
                                document.frmSolicitud.appendChild(mps_array);

                                var numCateo = document.getElementById('numCateo');
                                var aniCateo = document.getElementById('aniCateo');

                                if ((numCateo.value.trim() == "") && (aniCateo.value.trim() == "")) {
                                    if (confirm("\u00BFEsta seguro de guardar la informacion? ")) {
                                        document.getElementById('btnEnviar').style.display = 'none';
                                        document.getElementById('btnAnterior').style.display = 'none';
                                        this.sendInfo();
                                    } else {
                                        document.getElementById('btnEnviar').style.display = 'inline-block';
                                        document.getElementById('btnAnterior').style.display = 'inline-block';
                                        return;
                                    }
                                } else {
                                    $("#divAlertWarning").html("");
                                    $("#divAlertWarning").html("La solicitud ya fue enviada con anterioridad");
                                    $("#divAlertWarning").show("slide");
                                    setTimeAlert("divAlertWarning");
                                }

                                document.frmSolicitud.removeChild(personas_array);
                                document.frmSolicitud.removeChild(objetos_array);
                                document.frmSolicitud.removeChild(imputados_array);
                                document.frmSolicitud.removeChild(victimas_array);
                                document.frmSolicitud.removeChild(delitos_array);
                                document.frmSolicitud.removeChild(mps_array);
                            }
                        }
                    }
                }
            }

        },
        enviarFirmar: function () {
            var este = this;
            if (confirm("Esta seguro de firmar la solicitud de cateo ")) {
                var curp = prompt("Ingrese su CURP:");
                if ($.trim(curp) != "") {
                    $.ajax({
                        type: "POST",
                        url: "../controladores/sigejupe/firmaelectronica/FirmaElectronicaController.php",
                        data: {
                            action: "RegistroTransferenciaFirma",
                            operation: "j03",
                            textRef: "Firma de Acuerdo",
                            attrSign: "1",
                            value: curp,
                            validity: "3600"
                        },
                        async: false,
                        dataType: "json",
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            if (datos != "") {
                                if (datos.estatus == "ok") {
                                    var totalCount = datos.resultados.length;
                                    if (totalCount > 0) {
                                        for (var i = 0; i < totalCount; i++) {
                                            if (datos.resultados[i].estado == "0") {
                                                var descripcion = datos.resultados[i].descripcion;
                                                var estado = datos.resultados[i].estado;
                                                var transferencia = datos.resultados[i].transferencia;
                                                var codigo = datos.resultados[i].codigo;
                                                var rutaSolicitud = $('#rutaArchivoSolicitud').val();
                                                este.digestionArchivo(transferencia, codigo, rutaSolicitud);
                                            }
                                        }
                                    }

                                }
                            }
                        },
                        failure: function (response) {
                            alert("Error en la peticion:\n\n" + response);
                        }
                    });
                } else {
                    alert("Es necesario ingresar la CURP");
                }
            }
        },
        digestionArchivo: function (transfer, codigo, file) {
            if (transfer !== "" && file != "" && codigo != "") {
                var este = this;
                var error = false;
                $.ajax({
                    type: "POST",
                    url: "../controladores/sigejupe/firmaelectronica/FirmaElectronicaController.php",
                    data: {
                        action: "summarizeInfo",
                        transfer: transfer,
                        textRef: " SOLICITUD DE CATEO",
                        file: file
                    },
                    async: false,
                    dataType: "json",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos != "") {
                            if (datos.estatus == "ok") {
                                var totalCount = datos.resultados.length;
                                if (totalCount > 0) {
                                    for (var i = 0; i < totalCount; i++) {
                                        if (datos.resultados[i].estado == "0") {
                                            var descripcion = datos.resultados[i].descripcion;
                                            var estado = datos.resultados[i].estado;
                                            var idRegistro = datos.resultados[i].idRegistro;
                                            este.UpdateTransferenciaFirma(transfer, codigo, idRegistro);
                                        }
                                    }
                                }
                            } else {
                                alert(datos.mnj);
                                error = true;
                            }
                        } else {
                            alert("Ocurrio un error en la peticion");
                            error = true;
                        }

                    },
                    failure: function (response) {
                        alert("Error en la peticion:\n\n" + response);
                    }
                });
            }
            return error;
        },
        UpdateTransferenciaFirma: function (transfer, codigo, idRegistro) {
            if (transfer != "" && codigo != "" && idRegistro != "") {
                var este = this;
                var idCateo = $('#idCateo').val();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/actuacionesfirmadas/ActuacionesfirmadasFacade.Class.php",
                    data: {
                        accion: "guardar",
                        idReferencia: idCateo,
                        cveTipoActuacion: 0,
                        cveTipoCarpeta: 19,
                        transferenciaFirma: transfer,
                        tokenFirma: codigo,
                        idRegistroFirma: idRegistro,
                        fileNameFirma: $("#rutaDestino").val() + $("#nameArchivoSolicitud").val()
                    },
                    async: false,
                    dataType: "json",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos != "") {
                            if (datos.totalCount == "1") {
                                este.generacionJar(codigo);
                                alert("Esta por descargarse un JAR, ejecutelo antes de continuar!!");
                                este.getPdfSimple(idRegistro, $("#rutaArchivoSolicitud").val(), $("#rutaDestino").val() + $("#nameArchivoSolicitud").val());
                            }
                        }
                    },
                    failure: function (response) {
                        alert("Error en la peticion:\n\n" + response);
                    }
                });
            }
        },
        generacionJar: function (codigo) {
            $("#codigo").val(codigo);
            if ($("#codigo").val() !== "") {
                $("#frmGeneraJar").submit();
            }
        },
        getPdfSimple: function (idRegistro, origen, destino) {
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/firmaelectronica/FirmaElectronicaController.php",
                data: {
                    filePathOrigen: origen,
                    filePathDestino: destino,
                    action: "pdfSimplePersonalCarpetas",
                    activo: "S",
                    idReferencia: idRegistro,
                    cveGrupo: "",
                    cveTipoDocumento: "19", /*CATEOS*/
                    idReferenciaCarpeta: $("#idCateo").val() /*ID CATEOS*/
                },
                async: false,
                dataType: "json",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    alert("RESPUESTA:"+datos);
                    /*AQUI MUESTRA EL BOTON PARA DESCARGAR Y */
                },
                failure: function (response) {
                    alert("Error en la peticion:\n\n" + response);
                }
            });
        },
        validaPasos3: function () {
            this.siguiente('liPaso4', 'liPaso3');
            return true;
        },
        validaPasos5: function () {
            var chkAceptar = document.getElementById("chkAceptar");
            var error = false;
            var txtMensaje = "Revise:<br /><br />";
            if (!chkAceptar.checked == true) {
                txtMensaje = "No acepto los terminos de uso";
                error = true;
            }

            if (error == true) {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(txtMensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                return false;
            } else {
                return true;
            }
        },
        sendInfo: function () {
            var filtroGeneral = "";
            var datos = {
                "juzgadoSolicitar": $("#cmbJuzgadoSolicitar").val(),
                "cveTipoCarpeta": $("#tipoCausa").val(),
                "numeroCarpeta": $("#txtNumCausa").val(),
                "anioCarpeta": $("#txtAniCausa").val(),
                "juzgadoProcedencia": $("#cmbJuzgadoProcedencia").val(),
                "carpetaInv": $("#txtCarpeta").val(),
                "nuc": $("#txtNuc").val(),
                "eMailMP": $("#txtEmail").val(),
                "personasArray": $("#personas_array").val(),
                "objetosArray": $("#objetos_array").val(),
                "imputadosArray": $("#imputados_array").val(),
                "victimasArray": $("#victimas_array").val(),
                "delitosArray": $("#delitos_array").val(),
                "solicitud": $("#txtSolicitud").val(),
                "mpsResponsablesArray": $("#mps_array").val(),
            };
            var formData = new FormData();
            formData.append('accion', "guardarCateo");
            formData.append('juzgadoSolicitar', $("#cmbJuzgadoSolicitar").val());
            formData.append('cveTipoCarpeta', $("#tipoCausa").val());
            formData.append('numeroCarpeta', $("#txtNumCausa").val());
            formData.append('anioCarpeta', $("#txtAniCausa").val());
            formData.append('juzgadoProcedencia', $("#cmbJuzgadoProcedencia").val());
            formData.append('carpetaInv', $("#txtCarpeta").val());
            formData.append('nuc', $("#txtNuc").val());
            formData.append('eMailMP', $("#txtEmail").val());
            formData.append('personasArray', $("#personas_array").val());
            formData.append('objetosArray', $("#objetos_array").val());
            formData.append('imputadosArray', $("#imputados_array").val());
            formData.append('victimasArray', $("#victimas_array").val());
            formData.append('delitosArray', $("#delitos_array").val());
            formData.append('solicitud', UE.getEditor('txtSolicitud').getContent());
            formData.append('mpsResponsablesArray', $("#mps_array").val());
            formData.append('fileSolicitud', $('#fileSolicitud')[0].files[0]);
            var urlToSend = "../fachadas/sigejupe/solicitudescateos/SolicitudescateosFirmaFacade.Class.php"
            $.ajax({
                url: encodeURI(urlToSend),
                type: "POST",
                data: formData,
                mimeType: "multipart/form-data",
                contentType: false,
                processData: false,
                success: function (data) {
                    data = eval("(" + data + ")");
                    $("#divAlertWarning").html("");
                    if (data.type == "OK") {
                        $("#divAlertSuccess").html(data.text);
                        $("#divAlertSuccess").show("slide");
                        setTimeAlert("divAlertSuccess");
                        $("#rutaArchivoSolicitud").val("http://10.22.165.204/sigejupev2/solicitudespdf/" + data.filePath);
                        $("#rutaArchivoAdjunto").val(data.archivoAdjunto);
                        $("#idCateo").val(data.idCateo);


                        $("#nameArchivoSolicitud").val(data.filePath);
                        /*-------------------------------------------------------------------------------------------------------*/
//                        $("#imprimir").remove();
//                        document.getElementById('btnAnterior').style.display = 'inline-block';
//                        $("#btnEnviar").before('<button class="btn btn-primary" style="display:inline-block" id="imprimir" name="imprimir" onclick="javascript:cateos.imprimirComprobante(' + data.idCateo + ')">Descargar</button> &nbsp;');
//                        $("#btnEnviar").before(' <button class="btn btn-primary" style="display:inline-block" id="nueva" name="imprimir" onclick="javascript:cateos.nueva()">Nueva Solicitud</button>');
//                        $("cateonumber").text(data.numeroCateo);
//                        $(".registerCateo").show();
                        /*-------------------------------------------------------------------------------------------------------*/
                        $("#btnEnviar").before(' <button class="btn btn-primary" style="display:inline-block" id="btnEnviarFirmar" name="btnEnviarFirmar" onclick="javascript:cateos.enviarFirmar()">Enviar - Firmar</button>');
                    } else {
                        $("#divAlertWarning").html(data.text);
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        document.getElementById('btnEnviar').style.display = 'inline-block';
                        document.getElementById('btnAnterior').style.display = 'inline-block';
                    }
                }
            });
        },
        verificaExistente: function (table, params, type, indexR) {
            eval("table =([" + table + "])");
            var existe = true;
            if (type == 1) {
                $.each(table, function (index, val) {
                    if (params.NombreMoral == "") {
                        if (indexR != index) {
                            if ((val.Nombre.toUpperCase() == params.Nombre)
                                    && (val.Paterno.toUpperCase() == params.Paterno)
                                    && (val.Materno.toUpperCase() == params.Materno)) {
                                existe = false;
                                return;
                            }
                        }
                    }
                    if (params.NombreMoral != "") {
                        if (indexR != index) {
                            if ((val.NombreMoral.toUpperCase() == params.NombreMoral)) {
                                existe = false;
                                return;
                            }
                        }
                    }
                });
            } else if (type == 2) {
                $.each(table, function (index, val) {
                    if (indexR != index) {
                        if (val.cveDelito == params.cveDelito) {
                            existe = false;
                            return;
                        }
                    }
                });
            } else {
                $.each(table, function (index, val) {
                    if (indexR != index) {
                        if (val.Descripcion == params.Descripcion) {
                            existe = false;
                            return;
                        }
                    }
                });
            }
            return existe;
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
            if (tipoPersona != 1) {
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
        imprimirComprobante: function (idCateo) {
            var imprimir = document.getElementById('imprimir');
            imprimir.style.display = "none";
            $("#imprimir").hide();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudescateos/SolicitudescateosFirmaFacade.Class.php",
                data: "accion=descargaSolicitudCateo&idCateo=" + idCateo,
                async: true,
                dataType: "html",
                success: function (datos) {
                    datos = eval("(" + datos + ")");
                    if (datos.type == "OK") {
                        $("#divAlertSuccess").html("");
                        $("#divAlertSuccess").html(datos.text);
                        $("#divAlertSuccess").show("slide");
                        setTimeAlert("divAlertSuccess");
                        window.location.href = '../fachadas/sigejupe/solicitudescateos/SolicitudescateosFirmaFacade.Class.php?action=decargaSolicitudCateoDownload&idCateo=' + idCateo;
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
        },
        nueva: function () {
            this.tblPersonas_Array = new Array();
            this.tblObjetos_Array = new Array();
            this.tblImputados_Array = new Array();
            this.tblImputadosCausa_Array = new Array();
            this.tblVictimas_Array = new Array();
            this.tblVictimasCausa_Array = new Array();
            this.tblDelitos_Array = new Array();
            this.tblDelitosCausa_Array = new Array();
            this.tblMPs_Array = new Array();
            this.NombreMPSolicitante = "";
            $("#tblPersonas > tbody").remove();
            $("#tblObjetos > tbody").remove();
            $("#tblPersonas > tbody").remove();
            $("#tblImputados > tbody").remove();
            $("#tblVictimas > tbody").remove();
            $("#tblDelitos > tbody").remove();
            $("#tblMPs > tbody").remove();
            document.getElementById('btnEnviar').style.display = 'inline-block';
            document.getElementById('btnAnterior').style.display = 'inline-block';
            $("#imprimir").remove();
            $("#nueva").remove();
            $("cateonumber").text("");
            $(".registerCateo").hide();
            UE.getEditor('txtSolicitud').setContent("", false);
            getMP();
            this.siguiente("liPaso1", "liPaso5");
            $("#frmSolicitud")[0].reset();
        },
        editRow: function (object, table) {
            if (table == "tblPersonas") {
                var index = $(object)[0].rowIndex - 1;
                var table = this.tblPersonas_Array;
                eval("table =([" + table + "])");
                $("#txtNomPersona").val(table[index].Nombre);
                $("#txtPatPersona").val(table[index].Paterno);
                $("#txtMatPersona").val(table[index].Materno);
                $("#txtDomPersona").val(table[index].Domicilio);
                $("#cmbGenPersona").val(table[index].Genero);
                $(".addPerson").hide();
                $(".editPerson").html("<button class='btn btn-primary' onclick='javascript:cateos.editPerson(" + index + ")' >Editar</button> "
                        + "<button class='btn btn-primary' onclick='javascript:cateos.cancelEdit(\".addPerson\", \".editPerson\")' >Cancelar</button>");
            }
            if (table == "tblObjetos") {
                var index = $(object)[0].rowIndex - 1;
                var table = this.tblObjetos_Array;
                eval("table =([" + table + "])");
                $("#txtDescObjeto").val(table[index].Descripcion);
                $("#txtDomObjeto").val(table[index].Domicilio);
                $(".addObjeto").hide();
                $(".editObjeto").html("<button class='btn btn-primary' onclick='javascript:cateos.editObject(" + index + ")' >Editar</button> "
                        + "<button class='btn btn-primary' onclick='javascript:cateos.cancelEdit(\".addObjeto\", \".editObjeto\")' >Cancelar</button>");
            }
            if (table == "tblDelitos") {
                var index = $(object)[0].rowIndex - 1;
                var table = this.tblDelitos_Array;
                eval("table =([" + table + "])");
                $("#cmbDelito").val(table[index].cveDelito);
                $(".addDelito").hide();
                $(".editDelito").html("<button class='btn btn-primary' onclick='javascript:cateos.editDelito(" + index + ")' >Editar</button> "
                        + "<button class='btn btn-primary' onclick='javascript:cateos.cancelEdit(\".addDelito\", \".editDelito\")' >Cancelar</button>");
            }

            if (table == "tblImputados") {
                var index = $(object)[0].rowIndex - 1;
                var table = this.tblImputados_Array;
                eval("table =([" + table + "])");
                this.fillImputados(table[index]);
                $(".addImputado").hide();
                $(".editImputado").html("<button class='btn btn-primary' onclick='javascript:cateos.editImputado(" + index + ")' >Editar</button> "
                        + "<button class='btn btn-primary' onclick='javascript:cateos.cancelEdit(\".addImputado\", \".editImputado\")' >Cancelar</button>");
            }

            if (table == "tblVictimas") {
                var index = $(object)[0].rowIndex - 1;
                var table = this.tblVictimas_Array;
                eval("table =([" + table + "])");
                this.fillOfendidos(table[index]);
                $(".addOfendido").hide();
                $(".editOfendido").html("<button class='btn btn-primary' onclick='javascript:cateos.editOfendido(" + index + ")' >Editar</button> "
                        + "<button class='btn btn-primary' onclick='javascript:cateos.cancelEdit(\".addOfendido\", \".editOfendido\")' >Cancelar</button>");
            }
        },
        editPerson: function (index) {
            var flag = this.addPersona(true, index);
            if (flag == true) {
                $("#divAlertSuccess").html("");
                $("#divAlertSuccess").html("Informaci&oacute;n Modificada Correctamente");
                $("#divAlertSuccess").show("slide");
                setTimeAlert("divAlertSuccess");
                $(".editPerson").html("");
                $(".addPerson").show();
                $("#tblPersonas > tbody").remove();
                var table = this.tblPersonas_Array;
                eval("table =([" + table + "])");
                var self = this;
                $.each(table, function (index, val) {
                    self.addRow('tblPersonas', val.Nombre + ' ' + val.Paterno + ' ' + val.Materno, val.Domicilio);
                });
                this.cancelEdit();
            }

        },
        editObject: function (index) {
            var flag = this.addObjeto(true, index);
            if (flag == true) {
                $("#divAlertSuccess").html("");
                $("#divAlertSuccess").html("Informaci&oacute;n Modificada Correctamente");
                $("#divAlertSuccess").show("slide");
                setTimeAlert("divAlertSuccess");
                $(".editObjeto").html("");
                $(".addObjeto").show();
                $("#tblObjetos > tbody").remove();
                var table = this.tblObjetos_Array;
                eval("table =([" + table + "])");
                var self = this;
                $.each(table, function (index, val) {
                    self.addRow('tblObjetos', val.Descripcion, val.Domicilio);
                });
                this.cancelEdit();
            }
        },
        editDelito: function (index) {
            var flag = this.addDelito(true, index);
            if (flag == true) {
                $("#divAlertSuccess").html("");
                $("#divAlertSuccess").html("Informaci&oacute;n Modificada Correctamente");
                $("#divAlertSuccess").show("slide");
                setTimeAlert("divAlertSuccess");
                $(".editDelito").html("");
                $(".addDelito").show();
                $("#tblDelitos > tbody").remove();
                var table = this.tblDelitos_Array;
                eval("table =([" + table + "])");
                var self = this;
                $.each(table, function (index, val) {
                    $("#cmbDelito").val(val.cveDelito);
                    self.addRow('tblDelitos', self.getTexto("cmbDelito"));
                });
                this.cancelEdit();
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
                $.each(table, function (index, val) {
                    var txtNomImputado = val.Nombre;
                    var txtPatImputado = val.Paterno;
                    var txtMatImputado = val.Materno;
                    var txtDomImputado = val.Domicilio;
                    var txtNombreMoral = val.NombreMoral;
                    $("#cmbGenImputado").val(val.Genero);
                    if (val.TipoPersona == 1) {
                        self.addRow('tblImputados', txtNomImputado.trim() + " " + txtPatImputado.trim() + " " + txtMatImputado.trim(), txtDomImputado.trim(), self.getTexto("cmbGenImputado"));
                    } else {
                        self.addRow('tblImputados', txtNombreMoral.trim(), "", "No Aplica");
                    }

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
                $(".addIOfendido").show();
                $("#tblVictimas > tbody").remove();
                var table = this.tblVictimas_Array;
                eval("table =([" + table + "])");
                var self = this;
                $.each(table, function (index, val) {
                    var txtNomOfenido = val.Nombre;
                    var txtPatOfenido = val.Paterno;
                    var txtMatOfenido = val.Materno;
                    var txtDomOfenido = val.Domicilio;
                    var txtNombreMoral = val.NombreMoral;
                    $("#cmbGenImputado").val(val.Genero);
                    if (val.TipoPersona == 1) {
                        self.addRow('tblVictimas', txtNomOfenido.trim() + " " + txtPatOfenido.trim() + " " + txtMatOfenido.trim(), txtDomOfenido.trim(), self.getTexto("cmbGenImputado"));
                    } else {
                        self.addRow('tblVictimas', txtNombreMoral.trim(), "", "No Aplica");
                    }

                });
                $("#cmbGenImputado").val(0);
                this.cancelEdit(".editOfendido", '.addIOfendido');
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
            UE.getEditor('txtSolicitud').setContent("", false);
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
        fillOfendidos: function (table) {
            $("#cmbTipoPersonaVictima").val(table.TipoPersona).change();
            if (table.TipoPersona != 1) {
                $("#txtNombreMoralVictima").val(table.NombreMoral);
            } else {
                $("#txtNomVictima").val(table.Nombre);
                $("#txtPatVictima").val(table.Paterno);
                $("#txtMatVictima").val(table.Materno);
                $("#cmbGenVictima").val(table.Genero);
                $("#txtDomVictima").val(table.Domicilio);
                $("#txtTelVictima").val(table.Telefono);
                $("#txtEmVictima").val(table.Email);
            }
        }
    }
}

//Asignar el valor al editor
//ue.ready(function () {
//    setTimeout(function () {
//        ue.setContent(obj.resultados[0].resolucion, true);
//    }, 100);
//
//});