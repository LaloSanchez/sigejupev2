var TomadeMuestras = function () {
    return {
        tblExamenesFisicos_Array: new Array(),
        tblTomadeMuestras_Array: new Array(),
        tblImputados_Array: new Array(),
        tblImputadosCausa_Array: new Array(),
        tblVictimas_Array: new Array(),
        tblVictimasCausa_Array: new Array(),
        tblDelitos_Array: new Array(),
        tblDelitosCausa_Array: new Array(),
        tblMPs_Array: new Array(),
        tblTutores: new Array(),
        NombreMPSolicitante: "",
        seleccionTipo: function (object) {
            var txtCarpeta = $('#txtCarpeta');
            var txtNumCausa = $('#txtNumCausa');
            var txtAniCausa = $('#txtAniCausa');
            var TipoCausa = $('#tipoCausa');
//            var cmbJuzgadoProcedencia = $('#cmbJuzgadoProcedencia');
//            var txtNuc = $("#txtNuc");
            switch (object.value) {
                case "1":
                    txtNumCausa.attr("disabled", false);
                    txtAniCausa.attr("disabled", false);
//                    cmbJuzgadoProcedencia.attr("disabled", false);
                    TipoCausa.attr("disabled", false);
                    txtCarpeta.attr("disabled", true);
//                    txtNuc.attr("disabled", true);
                    txtCarpeta.val("");
//                    txtNuc.val("");
                    break;
                case "2":
                    txtNumCausa.attr("disabled", true);
                    txtAniCausa.attr("disabled", true);
//                    cmbJuzgadoProcedencia.attr("disabled", true);
                    TipoCausa.attr("disabled", true);
                    txtCarpeta.attr("disabled", false);
//                    txtNuc.attr("disabled", false);
                    txtNumCausa.val("");
                    txtAniCausa.val("");
//                    cmbJuzgadoProcedencia.val("0");
                    TipoCausa.val("0");
                    break;
            }
        },
        validarPaso1: function (buscar) {
            var txtCarpeta = $('#txtCarpeta');
            var txtNumCausa = $('#txtNumCausa');
            var txtAniCausa = $('#txtAniCausa');
//            var cmbJuzgadoProcedencia = $('#cmbJuzgadoProcedencia');
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
                txtMensaje += 'El juzgado a solicitar toma de muestra es requerido<br />';
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
//                if (cmbJuzgadoProcedencia.val().trim() == 0) {
//                    txtMensaje += 'El juzgado de procedencia es requerido<br />';
//                    error = true;
//                }
            } else if (opcion == 2) {
                if (txtCarpeta.val().trim() == "") {
                    txtMensaje += 'La carpeta de investigaci\u00f3n \u00f3 NUC son requerida<br />';
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
                this.siguiente('liPaso3', 'liPaso1', '');
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
            helper.getInfoUsuarios("solicitudesmuestras");
        },
//        addRow: function (idTable) {
//            var table = document.getElementById(idTable);
//            var tr = document.createElement("TR");
//            var td = document.createElement("td");
//            var input = document.createElement("input");
//            input.type = "checkbox";
//            input.name = idTable + "_chkFila";
//            input.id = idTable + "_chkFila";
//            td.appendChild(input);
//            td.align = 'center';
//            tr.appendChild(td);
//            for (var index = 1; index < arguments.length; index++) {
//                var td = document.createElement("TD");
//                var div = document.createElement("div");
//                div.innerHTML = arguments[index]
//                td.appendChild(div);
//                tr.appendChild(td);
//            }
//            var self = this;
//            tr.onclick = function () {
//                self.editRow(this, idTable);
//            }
//
//
//            if (typeof table.tBodies[0] == "undefined") {
//                var tBody = document.createElement("tbody");
//                tBody.appendChild(tr);
//                table.appendChild(tBody);
//            } else {
//                table.tBodies[0].appendChild(tr);
//            }
//        },
        addRow: function (idTable) {
            var table = document.getElementById(idTable);
            var tr = document.createElement("TR");

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
            if ((tabla != "tblDelitos") && (tabla != "tblMPs")) {
                this.drawTable(table.id);
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
            var cmbJuzgadoProcedencia = $('#cmbJuzgadoSolicitar');
            var carpeta = txtCarpeta.val();
            var opcion = 1;

            if (cmbJuzgadoProcedencia.val() == "" || cmbJuzgadoProcedencia.val() == 0) {
                cmbJuzgadoProcedencia = "";
            } else {
                cmbJuzgadoProcedencia = cmbJuzgadoProcedencia.val();
            }

            var tipoNumero = document.getElementsByName('tipoNumero');
            for (var index = 0; index < tipoNumero.length; index++) {
                if (tipoNumero[index].checked == true) {
                    opcion = tipoNumero[index].value;
                }
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
                cveTipoCarpeta: opcion,
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

                                var nombre = "";
                                if (imVal.nombre != "") {
                                    nombre = imVal.nombre + " " + imVal.paterno + " " + imVal.materno;
                                } else {
                                    nombre = imVal.nombreMoral;
                                }
                                self.addRow('tblImputadosCausa', nombre, dom, self.getTexto("cmbGenImputado"));
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
                                var nombre = "";
                                if (ofVal.nombre != "") {
                                    nombre = ofVal.nombre + " " + ofVal.paterno + " " + ofVal.materno;
                                } else {
                                    nombre = ofVal.nombreMoral;
                                }
                                self.addRow('tblVictimasCausa', nombre, dom, self.getTexto("cmbGenVictima"));
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
            this.drawTable(table.id);
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
                    var divmuestras = "<div class='tblImputados-muestra-" + (this.tblImputados_Array.length - 1) + "' ></div>";
                    var divexfisico = "<div class='tblImputados-exfi-" + (this.tblImputados_Array.length - 1) + "' ></div>";
                    var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:tomamuestras.openModal(' + (this.tblImputados_Array.length - 1) + ',2, \'tblImputados\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                    var btnexfi = '<button class="btn btn-primary btn-block " onclick="javascript:tomamuestras.openModal(' + (this.tblImputados_Array.length - 1) + ',1,  \'tblImputados\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
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
                    } else {
                        var value = this.calcularEdad($("#txtdateTutor").val(), "txtdateTutor");
                        if (!value) {
                            txtMensaje += "El tutor debe ser mayor de 18 a&ntilde;os<br />";
                            error = true;
                        }
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
                        stringTutores += "IdOfendido\":\"" + this.tblVictimas_Array.length + "\"";
                        stringTutores += "}";
                        this.tblTutores[this.tblTutores.length] = stringTutores;
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
                    }

                    var divmuestras = "<div class='tblVictimas-muestra-" + (this.tblVictimas_Array.length - 1) + "' ></div>";
                    var divexfisico = "<div class='tblVictimas-exfi-" + (this.tblVictimas_Array.length - 1) + "' ></div>";
                    var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:tomamuestras.openModal(' + (this.tblVictimas_Array.length - 1) + ',2, \'tblVictimas\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                    var btnexfi = '<button class="btn btn-primary btn-block " onclick="javascript:tomamuestras.openModal(' + (this.tblVictimas_Array.length - 1) + ',1,  \'tblVictimas\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
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

                        var divmuestras = "<div class='tblImputados-muestra-" + index + "' ></div>";
                        var divexfisico = "<div class='tblImputados-exfi-" + index + "' ></div>";
                        var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:tomamuestras.openModal(' + index + ',2, \'tblImputados\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                        var btnexfi = '<button class="btn btn-primary btn-block " onclick="javascript:tomamuestras.openModal(' + index + ',1,  \'tblImputados\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
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
                                var name = "";
                                if (registrotmp.NombreMoral == "") {
                                    name = registrotmp.Nombre + " " + registrotmp.Paterno + " " + registrotmp.Materno;
                                } else {
                                    name = registrotmp.NombreMoral;
                                }
                                this.addRow('tblImputados', name, divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                            }

                        } else {
                            eval("this." + id + "_Array[this." + id + "_Array.length] =  '" + registro + "';");
                            registro = eval("(" + registro + ")");
                            var name = "";
                            if (registro.NombreMoral == "") {
                                name = registro.Nombre + " " + registro.Paterno + " " + registro.Materno;
                            } else {
                                name = registro.NombreMoral;
                            }
                            this.addRow('tblImputados', name, divmuestras, divexfisico, btnmuestras + " " + btnexfi);
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

                        var divmuestras = "<div class='tblVictimas-muestra-" + index + "' ></div>";
                        var divexfisico = "<div class='tblVictimas-exfi-" + index + "' ></div>";
                        var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:tomamuestras.openModal(' + index + ',2, \'tblVictimas\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                        var btnexfi = '<button class="btn btn-primary btn-block " onclick="javascript:tomamuestras.openModal(' + index + ',1,  \'tblVictimas\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';



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
                                if (registrotmp.NombreMoral == "") {
                                    name = registrotmp.Nombre + " " + registrotmp.Paterno + " " + registrotmp.Materno;
                                } else {
                                    name = registrotmp.NombreMoral;
                                }
                                cmbGenVictima.value = registrotmp.Genero;
                                this.addRow(id, name, divmuestras, divexfisico, btnmuestras + " " + btnexfi);
                            }

                        } else {
                            eval("this." + id + "_Array[this." + id + "_Array.length] =  '" + registro + "';");
                            registro = eval("(" + registro + ")");
                            var name = "";
                            if (registro.NombreMoral == "") {
                                name = registro.Nombre + " " + registro.Paterno + " " + registro.Materno;
                            } else {
                                name = registro.NombreMoral;
                            }
                            this.addRow(id, name, divmuestras, divexfisico, btnmuestras + " " + btnexfi);
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
//            this.drawTable(table.id);
        },
        formato: function (object) {
            var formatos = new Array(".doc", ".docx", ".pdf", ".odt", ".ott", ".fodt");
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
                $("#divAlertWarning").html("El archivo seleccionado no es un formato valido,<br /> los formatos validos deben ser:<br /><br /> \tdoc, docx, odt y pdf");
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
                    var Nombre = txtNombreMP.value.toUpperCase().trim() + " " +
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
                //if (this.validaPasos2()) { // Verificamos que el paso 2 este completo
                if (this.validaPasos3()) {// Verificamos que el paso 3 este completo
                    if (this.validaPasos4()) { // Verificamos que el paso 4 este completo
                        if (this.validaPasos5()) { // Verificamos que el paso 5 este completo
                            var examenes_array = document.createElement("textarea");
                            var muestras_array = document.createElement("textarea");
                            var imputados_array = document.createElement("textarea");
                            var victimas_array = document.createElement("textarea");
                            var delitos_array = document.createElement("textarea");
                            var mps_array = document.createElement("textarea");
                            var tutores_array = document.createElement("textarea");
                            examenes_array.name = "examenes_array";
                            examenes_array.style.display = "none";
                            examenes_array.value = "[" + this.tblExamenesFisicos_Array + "]";
                            examenes_array.id = "examenes_array";
                            document.frmSolicitud.appendChild(examenes_array);
                            muestras_array.name = "muestras_array";
                            muestras_array.style.display = "none";
                            muestras_array.value = "[" + this.tblTomadeMuestras_Array + "]";
                            muestras_array.id = "muestras_array";
                            document.frmSolicitud.appendChild(muestras_array);
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
                            tutores_array.name = "tutores_array";
                            tutores_array.style.display = "none";
                            tutores_array.value = "[" + this.tblTutores + "]";
                            tutores_array.id = "tutores_array";
                            document.frmSolicitud.appendChild(tutores_array);
                            var numMuestra = document.getElementById('numMuestra');
                            var aniMuestra = document.getElementById('aniMuestra');
                            if ((numMuestra.value.trim() == "") && (aniMuestra.value.trim() == "")) {
                                if (confirm("\u00BFEsta seguro de enviar la informacion? ")) {
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

                            document.frmSolicitud.removeChild(examenes_array);
                            document.frmSolicitud.removeChild(muestras_array);
                            document.frmSolicitud.removeChild(imputados_array);
                            document.frmSolicitud.removeChild(victimas_array);
                            document.frmSolicitud.removeChild(delitos_array);
                            document.frmSolicitud.removeChild(mps_array);
                            document.frmSolicitud.removeChild(tutores_array);
                        }
                    }
                }
                //}
            }

        },
        validaPasos3: function () {
            var error = false;
            var txtMensaje = "Revise: <br /><br />";
            if (this.tblImputados_Array == 0) {
                txtMensaje += "Ingrese almenos un Imputado <br />";
                error = true;
            }
            if (error == false) {
                this.siguiente('liPaso4', 'liPaso3');
                return true;
            } else {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(txtMensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                return false;
            }
        },
        validaPasos5: function () {
            var chkAceptar = document.getElementById("chkAceptar");
            var error = false;
            var txtMensaje = "Revise:<br /><br />";
            
            if (!chkAceptar.checked == true) {
                txtMensaje = "No acepto los terminos de uso";
                error = true;
            }
            
            if ($("#sendNip").val() == 1) {
                if ($("#txtNip").val() == '') {
                    txtMensaje = "Escriba el NIP";
                    error = true;
                }
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
            var formData = new FormData();
            formData.append('accion', "guardarMuestra");
            formData.append('juzgadoSolicitar', $("#cmbJuzgadoSolicitar").val());
            formData.append('cveTipoCarpeta', $("#tipoCausa").val());
            formData.append('numeroCarpeta', $("#txtNumCausa").val());
            formData.append('anioCarpeta', $("#txtAniCausa").val());
            formData.append('nip', $("#txtNip").val());
            formData.append('juzgadoProcedencia', $("#cmbJuzgadoSolicitar").val());
            formData.append('carpetaInv', $("#txtCarpeta").val());
            formData.append('nuc', $("#txtNuc").val());
            formData.append('eMailMP', $("#txtEmail").val());
            formData.append('examensArray', $("#examenes_array").val());
            formData.append('muestrasArray', $("#muestras_array").val());
            formData.append('imputadosArray', $("#imputados_array").val());
            formData.append('victimasArray', $("#victimas_array").val());
            formData.append('delitosArray', $("#delitos_array").val());
            formData.append('solicitud', UE.getEditor('txtSolicitud').getContent());
            formData.append('mpsResponsablesArray', $("#mps_array").val());
            formData.append('tutoresArray', $("#tutores_array").val());
            formData.append('fileSolicitud', $('#fileSolicitud')[0].files[0]);
            var urlToSend = "../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php"
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
                        $("#imprimir").remove();
                        document.getElementById('btnAnterior').style.display = 'inline-block';
                        $("#btnEnviar").before('<button class="btn btn-primary" style="display:inline-block" id="imprimir" name="imprimir" onclick="javascript:tomamuestras.imprimirComprobante(' + data.idMuestra + ')">Descargar</button> &nbsp;');
                        $("#btnEnviar").before(' <button class="btn btn-primary" style="display:inline-block" id="nueva" name="imprimir" onclick="javascript:tomamuestras.nueva()">Nueva Solicitud</button>');
                        $("muestranumber").text(data.numeroMuestra);
                        $("#txtNip").val("");
                        $("#sendNip").val("");
                        $(".registerNip").hide();
                        $(".registerMuestra").show();
                        $("#btnEnviarNip").hide();
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
        imprimirComprobante: function (idMuestra) {
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
                    datos = eval("(" + datos + ")");
                    if (datos.type == "OK") {
                        $("#divAlertSuccess").html("");
                        $("#divAlertSuccess").html(datos.text);
                        $("#divAlertSuccess").show("slide");
                        setTimeAlert("divAlertSuccess");
                        window.location.href = '../fachadas/sigejupe/solicitudesmuestras/SolicitudesmuestrasFacade.Class.php?action=decargaSolicitudMuestraDownload&idMuestra=' + idMuestra;
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
            this.tblTomadeMuestras_Array = new Array();
            this.tblExamenesFisicos_Array = new Array();
            this.tblImputados_Array = new Array();
            this.tblImputadosCausa_Array = new Array();
            this.tblVictimas_Array = new Array();
            this.tblVictimasCausa_Array = new Array();
            this.tblDelitos_Array = new Array();
            this.tblDelitosCausa_Array = new Array();
            this.tblMPs_Array = new Array();
            this.tblTutores = new Array();
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
            $("muestranumber").text("");
            $(".registerMuestra").hide();
            UE.getEditor('txtSolicitud').setContent("", false);
            getMP();
            this.siguiente("liPaso1", "liPaso5");
            $("#frmSolicitud")[0].reset();
        },
        editRow: function (object, table) {
            if (table == "tblDelitos") {
                var index = $(object)[0].rowIndex - 1;
                var table = this.tblDelitos_Array;
                eval("table =([" + table + "])");
                $("#cmbDelito").val(table[index].cveDelito);
                $(".addDelito").hide();
                $(".editDelito").html("<button class='btn btn-primary' onclick='javascript:tomamuestras.editDelito(" + index + ")' >Editar</button> "
                        + "<button class='btn btn-primary cancelar' onclick='javascript:tomamuestras.cancelEdit(\".addDelito\", \".editDelito\")' >Cancelar</button>");
            }

            if (table == "tblImputados") {
                var index = $(object)[0].rowIndex - 1;
                var table = this.tblImputados_Array;
                eval("table =([" + table + "])");
                this.fillImputados(table[index]);
                $(".addImputado").hide();
                $(".editImputado").html("<button class='btn btn-primary' onclick='javascript:tomamuestras.editImputado(" + index + ")' >Editar</button> "
                        + "<button class='btn btn-primary cancelar' onclick='javascript:tomamuestras.cancelEdit(\".addImputado\", \".editImputado\")' >Cancelar</button>");
            }

            if (table == "tblVictimas") {
                var index = $(object)[0].rowIndex - 1;
                var table = this.tblVictimas_Array;
                eval("table =([" + table + "])");
                this.fillOfendidos(table[index], index);
                $(".addOfendido").hide();
                $(".editOfendido").html("<button class='btn btn-primary' onclick='javascript:tomamuestras.editOfendido(" + index + ")' >Editar</button> "
                        + "<button class='btn btn-primary cancelar' onclick='javascript:tomamuestras.cancelEdit(\".addOfendido\", \".editOfendido\")' >Cancelar</button>");
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
                var count = 0;
                $.each(table, function (index, val) {
                    var txtNomImputado = val.Nombre;
                    var txtPatImputado = val.Paterno;
                    var txtMatImputado = val.Materno;
                    var txtNombreMoral = val.NombreMoral;
                    $("#cmbGenImputado").val(val.Genero);
                    var divmuestras = "<div class='tblImputados-muestra-" + count + "' ></div>";
                    var divexfisico = "<div class='tblImputados-exfi-" + count + "' ></div>";
                    var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:tomamuestras.openModal(' + count + ',2,  \'tblImputados\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                    var btnexfi = '<button class="btn btn-primary btn-block" onclick="javascript:tomamuestras.openModal(' + count + ',1,  \'tblImputados\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
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
                    var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:tomamuestras.openModal(' + count + ',2, \'tblVictimas\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                    var btnexfi = '<button class="btn btn-primary btn-block " onclick="javascript:tomamuestras.openModal(' + count + ',1,  \'tblVictimas\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
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
            UE.getEditor('txtSolicitud').setContent("", false);
            $(btnEdit).html("");
            $(btnAdd).show();
            console.log(btnAdd + "  " + btnEdit);
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
                            return;
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
                $(".addItem").attr("onclick", "javascript:tomamuestras.addItem(" + id + "," + type + ", '" + tabla + "')");
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
                    var btnclick = "onclick='javascript:tomamuestras.deleteItem(\"" + valm.tipo + "\", " + valm.id + "," + valm.idItem + ", " + type + ")'";
                    var button = "<button " + btnclick + " class='btn btn-danger pull-right' ><span><i class='fa fa-trash-o' ></i></span></button>"
                    strMuestras += "<div class='padding-5 col-md-12' >" + valm.desItem + " " + button + "</div>"
                    if (disableItem) {
                        $("#cmbMuestras option[value=" + valm.idItem + "]").attr("disabled", "disabled");
                    }
                }
            });
            $.each(tablaExamenes, function (index, vale) {
                if (vale.id == id && vale.tipo == tablarender) {
                    var btnclick = "onclick='javascript:tomamuestras.deleteItem(\"" + vale.tipo + "\", " + vale.id + "," + vale.idItem + ", " + type + ")'";
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
                var btnmuestras = '<button class="btn btn-primary btn-block" onclick="javascript:tomamuestras.openModal(' + count + ',2,  \'' + tabla + '\')"><span><i class="fa fa-plus" ></i></span> Agregar Toma de Muestra</button>';
                var btnexfi = '<button class="btn btn-primary btn-block" onclick="javascript:tomamuestras.openModal(' + count + ',1,  \'' + tabla + '\')"><span><i class="fa fa-plus" ></i></span> Agregar Ex&aacute;men F&iacute;sico</button>';
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
        calcularEdad: function (fecha, campoFecha) {
            if ($("#" + campoFecha + "").val() != "") {
                var fechaActual = new Date();
                var diaActual = fechaActual.getDate();
                var mmActual = fechaActual.getMonth() + 1;
                var yyyyActual = fechaActual.getFullYear();
                var FechaNac = fecha.split("/");
                var diaCumple = FechaNac[0];
                var mmCumple = FechaNac[1];
                var yyyyCumple = FechaNac[2];
                if (mmCumple.substr(0, 1) == 0) {
                    mmCumple = mmCumple.substring(1, 2);
                }
                if (diaCumple.substr(0, 1) == 0) {
                    diaCumple = diaCumple.substring(1, 2);
                }
                var edad = yyyyActual - yyyyCumple;
                if ((mmActual < mmCumple) || (mmActual == mmCumple && diaActual < diaCumple)) {
                    edad--;
                }
                console.log(edad);
                if (edad < 18) {
                    $("#" + campoFecha + "").val("");
                    return false;
                } else {
                    return true;
                }
            }
        },
         nip: function () {
            $(".btnsSendSolicitud").hide();
            $(".registerNip").show();
            $("#sendNip").val(1);
        },
        cancelanip: function () {
            $(".registerNip").hide();
            $(".btnsSendSolicitud").show();
            $("#sendNip").val('');
            $("#txtNip").val('');
        }
    }
}