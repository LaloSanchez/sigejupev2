var Permutaciones = function () {
    return {
        carpetasOrigen: new Array(),
        audienciasOrigen: new Array(),
        carpetasDestino: new Array(),
        audienciasDestino: new Array(),
        carpetasOrigenSend: new Array(),
        audienciasOrigenSend: new Array(),
        carpetasDestinoSend: new Array(),
        audienciasDestinoSend: new Array(),
        loadJuzgados: function (combos) {
            this.clean();
            $("#accordionOrigen").html("");
            var datosSend = {
                "activo": "S",
                "accion": "consultar"
            }
            var urltoSend = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            $(".errorMsj").html("");
            $.ajax({
                type: "POST",
                url: urltoSend,
                data: datosSend,
                async: true,
                success: function (datos) {
                    try {
                        datos = eval("(" + datos + ")");
                        if (datos.totalCount != 0) {
                            var options = "<option></option>";
                            $.each(datos.data, function (index, val) {
                                options += "<option value='" + val.cveJuzgado + "' >" + val.desJuzgado + "</option>"
                            });
                            for (var i = 0; i < combos.length; i++) {
                                $("#" + combos[i] + " > option").remove();
                                $("#" + combos[i]).append(options);
                                $("#" + combos[i]).select2({
                                    placeholder: 'Seleccione una Opci\u00f3n'
                                });
                            }
                        } else {
                            $(".errorMsj").html("<div class='alert alert-info' >OCURRIÓ UN ERROR AL OBTENER LOS JUZGADOS</div>");
                        }
                    } catch (e) {
                        $(".errorMsj").html("<div class='alert alert-info' >OCURRIÓ UN ERROR AL OBTENER LOS JUZGADOS</div>");
                    }
                }
            });
        },
        loadJuzgador: function (type) {
            this.clean();
            var idJuzgadoOrigen = $("#juzgadoOrigen").val();
            if (type == 1) {
                $("#juzgadorDestino > option").remove();
                $("#juzgadorOrigen > option").prop("disabled", false);
                $("#accordionDestino").html("");
                idJuzgadoOrigen = $("#juzgadoDestino").val();
            } else {
                $("#juzgadorDestino > option").prop("disabled", false);
                $("#juzgadorOrigen > option").remove();
                $("#accordionOrigen").html("");
            }
            var datosSend = {
                "cveJuzgado": idJuzgadoOrigen,
                "activo": "S",
                "accion": "detalleJuzgadores"
            }
            var urltoSend = "../fachadas/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosFacade.Class.php";
            $(".errorMsj").html("");
            var self = this;
            $.ajax({
                type: "POST",
                url: urltoSend,
                data: datosSend,
                async: true,
                success: function (datos) {
                    try {
                        datos = eval("(" + datos + ")");
                        if (datos.type == "OK") {
                            var options = "<option></option>";
                            $.each(datos.data, function (index, val) {
                                options += "<option value='" + val.idJuzgador + "' >" + val.nombre + " " + val.paterno + " " + val.materno + "</option>";
                            });
                            if (type == 1) {
                                $("#juzgadorDestino").append(options);
                                $("#juzgadorDestino").select2({
                                    placeholder: 'Seleccione una Opci\u00f3n'
                                });
                                self.disabledOption();
                                $(".ocultaDestino").show();
                            } else {
                                $("#juzgadorOrigen").append(options);
                                $("#juzgadorOrigen").select2({
                                    placeholder: 'Seleccione una Opci\u00f3n'
                                });
                                self.disabledOption(1);
                                $(".ocultaOrigen").show();
                            }
                        } else {
                            if (type == 1) {
                                $(".ocultaDestino").hide();
                                $("#juzgadorDestino").append("<option></option>");
                                $("#juzgadorDestino").select2({
                                    placeholder: 'Seleccione una Opci\u00f3n'
                                });
                            } else {
                                $("#juzgadorOrigen").append("<option></option>");
                                $("#juzgadorOrigen").select2({
                                    placeholder: 'Seleccione una Opci\u00f3n'
                                });
                                $(".ocultaOrigen").hide();
                            }
                        }
                    } catch (e) {
                        $(".errorMsj").html("<div class='alert alert-info' >OCURRIÓ UN ERROR AL OBTENER LOS JUZGADOS</div>");
                    }
                }
            });
        },
        disabledOption: function (type) {
            var juzgadoOrigen = $("#juzgadoOrigen").val();
            var juzgadoDestino = $("#juzgadoDestino").val();
            var juzgadorOrigen = $("#juzgadorOrigen").val();
            var juzgadorDestino = $("#juzgadorDestino").val();

            if (juzgadoOrigen == juzgadoDestino) {
                if (type == 1) {
                    // Desactiva Juzgador Origen
                    $("#juzgadorOrigen > option").prop("disabled", false);
                    $("#juzgadorOrigen [value=" + juzgadorDestino + "]").prop("disabled", true);
                } else {
                    // Desactiva Juzgador Destino
                    $("#juzgadorDestino > option").prop("disabled", false);
                    $("#juzgadorDestino [value=" + juzgadorOrigen + "]").prop("disabled", true);
                }
            }

        },
        search: function () {
            $("#accordionOrigen").html("");
            $("#accordionDestino").html("");
            var juzgadoOrigen = $("#juzgadoOrigen").val();
            var juzgadoDestino = $("#juzgadoDestino").val();
            var juzgadorOrigen = $("#juzgadorOrigen").val();
            var juzgadorDestino = $("#juzgadorDestino").val();
            if (juzgadoOrigen != "" && juzgadoDestino != "") {
                if (juzgadorOrigen != "" && juzgadorDestino != "") {
                    this.clean();
                    var datosSend = {
                        "juzgados": "[" + juzgadoOrigen + "," + juzgadoDestino + "]",
                        "juzgadores": "[" + juzgadorOrigen + ", " + juzgadorDestino + "]",
                        "accion": "getinfojuzgadores"
                    }
                    var urltoSend = "../fachadas/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosFacade.Class.php";
                    $(".errorMsj").html("");
                    var self = this;
                    $.ajax({
                        type: "POST",
                        url: urltoSend,
                        data: datosSend,
                        async: true,
                        success: function (datos) {
                            try {
                                datos = eval("(" + datos + ")");
                                if (datos.type == "OK") {
                                    self.fillInformation(datos)
                                } else {
                                    $(".errorMsj").html("<div class='alert alert-info' >NO HAY INFORMACI&Oacute;N</div>");
                                }
                            } catch (e) {
                                $(".errorMsj").html("<div class='alert alert-info' >OCURRIO UN ERROR AL OBTENER LA INFORMACI&Oacute;N DE LOS JUZGADORES</div>");
                            }
                        }
                    });
                } else {
                    bootbox.alert("SELECCIONA UN JUZGADOR DE ORIGEN Y DESTINO");
                }
            } else {
                bootbox.alert("SELECCIONA UN JUZGADO DE ORIGEN Y DESTINO");
            }
            return false;
        },
        fillInformation: function (datos) {
            var self = this;
            if (datos.data.audienciaOrigen != "") {
                var origenc = '<div class="panel panel-default">';
                origenc += '<div class="panel-heading" role="tab" id="headingAO">';
                origenc += '<h4 class="panel-title">';
                origenc += '<a role="button" data-toggle="collapse" data-parent="#accordionOrigen" href="#collapseAO" aria-expanded="true" aria-controls="collapseAO">';
                origenc += 'AUDIENCIAS ';
                origenc += '</a><div style="display:inline-block !Important;" class="pull-right" ><input onclick="javascript:permutaciones.selectAll(this)" type="checkbox" value="audio" id="audio" /> Todos</div>';
                origenc += '</h4>';
                origenc += '</div>';
                origenc += '<div id="collapseAO" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAO">';
                origenc += '<div class="panel-body"><table class="table table-bordered" >';
                var countAO = 0;
                $.each(datos.data.audienciaOrigen, function (indexAO, valAO) {
                    origenc += "<tr>";
                    origenc += "<td>AUDIENCIA " + valAO.tipoAudiencia + " " + valAO.numero + "/" + valAO.anio + ": " + valAO.catAudiencia + "</td>";
                    origenc += "<td><input onclick='javascript:permutaciones.selectItem(this)' name='audio" + valAO.numero + valAO.anio + "' type='checkbox' value='" + countAO + "' /></td>";
                    origenc += "</tr>";
                    self.audienciasOrigen[self.audienciasOrigen.length] = valAO;
                    countAO++;
                });
                origenc += '</table></div>';
                origenc += '</div>';
                origenc += '</div>';
                $("#accordionOrigen").append(origenc);
            }
            if (datos.data.carpetaOrigen != "") {

                var origenc = '<div class="panel panel-default">';
                origenc += '<div class="panel-heading" role="tab" id="headingCO">';
                origenc += '<h4 class="panel-title">';
                origenc += '<a role="button" data-toggle="collapse" data-parent="#accordionOrigen" href="#collapseCO" aria-expanded="true" aria-controls="collapseCO">';
                origenc += 'CARPETAS ';
                origenc += '</a><div style="display:inline-block !Important;" class="pull-right" ><input onclick="javascript:permutaciones.selectAll(this)" type="checkbox" value="carpo" id="carpo" /> Todos</div>';
                origenc += '</h4>';
                origenc += '</div>';
                origenc += '<div id="collapseCO" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCO">';
                origenc += '<div class="panel-body"><table class="table table-bordered" >';
                var countCO = 0;
                $.each(datos.data.carpetaOrigen, function (indexCO, valCO) {
                    origenc += "<tr>";
                    origenc += "<td>CARPETA " + valCO.tipoCarpeta + ": " + valCO.numero + "/" + valCO.anio + "</td>";
                    origenc += "<td><input onclick='javascript:permutaciones.selectItem(this)' type='checkbox' name='carpo" + valCO.numero + valCO.anio + "' value='" + countCO + "' /></td>";
                    origenc += "</tr>";
                    self.carpetasOrigen[self.carpetasOrigen.length] = valCO;
                    countCO++;
                });
                origenc += '</table></div>';
                origenc += '</div>';
                origenc += '</div>';
                $("#accordionOrigen").append(origenc);
            }
            if (datos.data.audienciaDestino != "") {

                var origenc = '<div class="panel panel-default">';
                origenc += '<div class="panel-heading" role="tab" id="headingAD">';
                origenc += '<h4 class="panel-title">';
                origenc += '<a role="button" data-toggle="collapse" data-parent="#accordionDestino" href="#collapseAD" aria-expanded="true" aria-controls="collapseAD">';
                origenc += 'AUDIENCIAS ';
                origenc += '</a><div style="display:inline-block !Important;" class="pull-right" ><input type="checkbox" value="audid" id="audid" onclick="javascript:permutaciones.selectAll(this)" /> Todos</div>';
                origenc += '</h4>';
                origenc += '</div>';
                origenc += '<div id="collapseAD" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAD">';
                origenc += '<div class="panel-body"><table class="table table-bordered" >';
                var countAD = 0;
                $.each(datos.data.audienciaDestino, function (indexAD, valAD) {
                    origenc += "<tr>";
                    origenc += "<td>AUDIENCIA " + valAD.tipoAudiencia + " " + valAD.numero + "/" + valAD.anio + ": " + valAD.catAudiencia + "</td>";
                    origenc += "<td><input onclick='javascript:permutaciones.selectItem(this)' type='checkbox' name='audid" + valAD.numero + valAD.anio + "' value='" + countAD + "' /></td>";
                    origenc += "</tr>";
                    self.audienciasDestino[self.audienciasDestino.length] = valAD;
                    countAD++;
                });
                origenc += '</table></div>';
                origenc += '</div>';
                origenc += '</div>';
                $("#accordionDestino").append(origenc);
            }
            if (datos.data.carpetaDestino != "") {

                var origenc = '<div class="panel panel-default">';
                origenc += '<div class="panel-heading" role="tab" id="headingCD">';
                origenc += '<h4 class="panel-title">';
                origenc += '<a role="button" data-toggle="collapse" data-parent="#accordionDestino" href="#collapseCD" aria-expanded="true" aria-controls="collapseCD">';
                origenc += 'CARPETAS ';
                origenc += '</a><div style="display:inline-block !Important;" class="pull-right" ><input type="checkbox" value="carpd" id="carpd" onclick="javascript:permutaciones.selectAll(this)" /> Todos</div>';
                origenc += '</h4>';
                origenc += '</div>';
                origenc += '<div id="collapseCD" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingCD">';
                origenc += '<div class="panel-body"><table class="table table-bordered" >';
                var countCD = 0;
                $.each(datos.data.carpetaDestino, function (indexCD, valCD) {
                    origenc += "<tr>";
                    origenc += "<td>CARPETA " + valCD.tipoCarpeta + ": " + valCD.numero + "/" + valCD.anio + "</td>";
                    origenc += "<td><input onclick='javascript:permutaciones.selectItem(this)' type='checkbox' name='carpd" + valCD.numero + valCD.anio + "' value='" + countCD + "' /></td>";
                    origenc += "</tr>";
                    self.carpetasDestino[self.carpetasDestino.length] = valCD;
                    countCD++;
                });

                origenc += '</table></div>';
                origenc += '</div>';
                origenc += '</div>';
                $("#accordionDestino").append(origenc);
            }
        },
        selectAll: function (obj) {
            var name = $(obj).val();
            var self = this;
            if ($(obj).is(':checked')) {
                $("input[name^='" + name + "']").each(function () {
                    $(this).prop('checked', true);
                });
                switch (name) {
                    case "audio":
                        this.audienciasOrigenSend = this.audienciasOrigen;
                        break;
                    case "carpo":
                        this.carpetasOrigenSend = this.carpetasOrigen;
                        break;
                    case "audid":
                        this.audienciasDestinoSend = this.audienciasDestino;
                        break;
                    case "carpd":
                        this.carpetasDestinoSend = this.carpetasDestino;
                        break;
                    default :
                        break;
                }
            } else {
                $("input[name^='" + name + "']").each(function () {
                    $(this).prop('checked', false);
                });
                switch (name) {
                    case "audio":
                        this.audienciasOrigenSend = new Array();
                        break;
                    case "carpo":
                        this.carpetasOrigenSend = new Array();
                        break;
                    case "audid":
                        this.audienciasDestinoSend = new Array();
                        break;
                    case "carpd":
                        this.carpetasDestinoSend = new Array();
                        break;
                    default :
                        break;
                }
            }
            if (this.validate()) {
                $(".btn-change").show();
            } else {
                $(".btn-change").hide();
            }
        },
        selectItem: function (obj) {
            var position = $(obj).val();
            var name = $(obj).attr("name");
            name = name.substr(0, 5);
            var self = this;
            if ($(obj).is(':checked')) {
                switch (name) {
                    case "audio":
                        this.audienciasOrigenSend[position] = this.audienciasOrigen[position];
                        break;
                    case "carpo":
                        this.carpetasOrigenSend[position] = this.carpetasOrigen[position];
                        break;
                    case "audid":
                        this.audienciasDestinoSend[position] = this.audienciasDestino[position];
                        break;
                    case "carpd":
                        this.carpetasDestinoSend[position] = this.carpetasDestino[position];
                        break;
                    default :
                        break;
                }
            } else {
                switch (name) {
                    case "audio":
                        this.audienciasOrigenSend.splice(position, 1);
                        break;
                    case "carpo":
                        this.carpetasOrigenSend.splice(position, 1);
                        break;
                    case "audid":
                        this.audienciasDestinoSend.splice(position, 1);
                        break;
                    case "carpd":
                        this.carpetasDestinoSend.splice(position, 1);
                        break;
                    default :
                        break;
                }
            }

            var input = $("input[name^='" + name + "']:checkbox");
            var countChecked = 0;
            input.each(function () {
                if (this.checked) {
                    countChecked++;
                }
            });
            if (countChecked != 0 && countChecked == input.length) {
                $("#" + name).prop('checked', true);
            } else {
                $("#" + name).prop('checked', false);
            }

            if (this.validate()) {
                $(".btn-change").show();
            } else {
                $(".btn-change").hide();
            }

        },
        validate: function () {
            var input = $("input:checkbox");
            var countChecked = 0;
            input.each(function () {
                if (this.checked) {
                    countChecked++;
                }
            });
            if (countChecked != 0) {
                return true;
            } else {
                return false;
            }
        },
        change: function () {
            var juzgadoOrigen = $("#juzgadoOrigen").val();
            var juzgadoDestino = $("#juzgadoDestino").val();
            var juzgadorOrigen = $("#juzgadorOrigen").val();
            var juzgadorDestino = $("#juzgadorDestino").val();
            if (juzgadoOrigen != "" && juzgadoDestino != "") {
                if (juzgadorOrigen != "" && juzgadorDestino != "") {
                    var datosSend = {
                        "audienciasOrigen": JSON.stringify(this.audienciasOrigenSend),
                        "audienciasDestino": JSON.stringify(this.audienciasDestinoSend),
                        "carpetasOrigen": JSON.stringify(this.carpetasOrigenSend),
                        "carpetasDestino": JSON.stringify(this.carpetasDestinoSend),
                        "juzgadorOrigen": $("#juzgadorOrigen").val(),
                        "juzgadorDestino": $("#juzgadorDestino").val(),
                        "juzgadoOrigen": $("#juzgadoOrigen").val(),
                        "juzgadoDestino": $("#juzgadoDestino").val(),
                        "accion": "changeInfoJuzgador"
                    }
                    var self = this;
                    var urltoSend = "../fachadas/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosFacade.Class.php";
                    $(".errorMsj").html("");
                    $.ajax({
                        type: "POST",
                        url: urltoSend,
                        data: datosSend,
                        async: true,
                        success: function (datos) {
                            try {
                                self.clean();
                                datos = eval("(" + datos + ")");
                                if (datos.type == "OK") {
                                    $("#accordionOrigen").html("");
                                    $("#accordionDestino").html("");
                                    self.fillInformation(datos)
                                } else {
                                    $(".errorMsj").html("<div class='alert alert-info' >NO HAY INFORMACI&Oacute;N</div>");
                                }
                            } catch (e) {
                                $(".errorMsj").html("<div class='alert alert-info' >OCURRIO UN ERROR AL OBTENER LA INFORMACI&Oacute;N DE LOS JUZGADORES</div>");
                            }
                        }
                    });
                } else {
                    bootbox.alert("SELECCIONA UN JUZGADOR DE ORIGEN Y DESTINO");
                }
            } else {
                bootbox.alert("SELECCIONA UN JUZGADO DE ORIGEN Y DESTINO");
            }
        },
        clean: function () {
            this.audienciasDestino = new Array();
            this.audienciasDestinoSend = new Array();
            this.audienciasOrigen = new Array();
            this.audienciasOrigenSend = new Array();
            this.carpetasDestino = new Array();
            this.carpetasDestinoSend = new Array();
            this.carpetasOrigen = new Array();
            this.carpetasOrigenSend = new Array();
            $(".btn-change").hide();
            $(".errorMsj").html("");
        }
    }
}