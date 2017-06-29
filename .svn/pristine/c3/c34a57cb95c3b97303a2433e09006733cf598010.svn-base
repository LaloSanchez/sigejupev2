var BitacoraWS = function () {
    return {
        getAcciones: function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/accionesws/AccioneswsFacade.Class.php",
                data: {
                    'accion': 'consultar',
                    'activo': 'S'
                },
                async: false,
                dataType: 'json',
                beforeSend: function () {
                    $("#cmbtipoAccion > option").remove();
                },
                success: function (datos) {
                    var option = '<option value="0" >Seleccione una Opci&oacute;n</option>';
                    try {
                        if (datos.totalCount > 0 && datos.totalCount != '') {
                            if (datos.data.length > 0) {
                                $.each(datos.data, function (index, val) {
                                    option += '<option value="' + val.idAccionwa + '" >' + val.descAccionws + '</option>';
                                });
                            }
                        }
                    } catch (ex) {
                        bootbox.alert('OCURRIO UN ERROR INTENTELO MAS TARDE');
                    }
                    $("#cmbtipoAccion").append(option);
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertWarning").html("");
                    $("#divAlertWarning").html("Error en la petici&oacute;n: <br />" + otroobj);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }
            });
        },
        inicia: function (pagAux) {
            $("#informationTable tbody > tr").remove();
            $(".paginacion").hide();
            $(".infos").html("");
            var pag = 1;
            if (pagAux == 0 || pagAux == "" || pagAux == "undefined") {
                pag = $("#cmbPaginacion").val();
            }
            var cmbtipoAccion = $("#cmbtipoAccion").val();
            if (cmbtipoAccion == 0 || cmbtipoAccion == '') {
                $(".infos").html("<div class='alert alert-info text-center' >SELECCIONA UNA ACCI&Oacute;N</div>");
                return;
            }
            var cantReg = $("#cmbNumReg").val();
            var fechaTxt = $("#fechaConsultar").val();
            var fecha = this.convertirFecha(fechaTxt);
            var fechaTxtEnd = $("#fechaConsultarEnd").val();
            var fechaEnd = this.convertirFecha(fechaTxtEnd);
            if (fecha == "" || fechaEnd == "") {
                $(".infos").html("<div class='alert alert-info text-center' >INGRESE UN RANGO DE FECHAS</div>");
                return;
            }
            $(".buttons").hide();
            var self = this;
            var datos = {
                "accion": "consultar",
                "cveAccionws": cmbtipoAccion,
                "fechaRegistro": fecha,
                "fechaRegistroEnd": fechaEnd,
                "pag": pag,
                "cantxPag": cantReg
            }

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/bitacoraws/BitacorawsFacade.Class.php",
                data: datos,
                async: true,
                dataType: 'json',
                success: function (datos) {
                    $(".buttons").show();
                    if (datos.totalCount > 0) {
                        if (datos.data.length > 0) {
                            var table = '';
                            var count = 0;
                            var pagina = 1;
                            $('#cmbPaginacion').find('option').remove().end();
                            var options = '';
                            $.each(datos.paginas, function (index, val) {
                                if (pag == val) {
                                    pagina = val;
                                    options += "<option value='" + val + "' selected='selected' >" + val + "</option>";
                                } else {
                                    options += "<option value='" + val + "' >" + val + "</option>";
                                }
                            });
                            if (pagina != 1) {
                                count = (pagina - 1) * cantReg;
                            }
                            $("#cmbPaginacion").append(options);
                            $.each(datos.data, function (index, val) {
                                table += "<tr>";
                                table += '<td>' + (count + 1) + '</td>'
                                table += '<td>' + val.hrefOrigen + '</td>'
                                var status = 'Error de Comunicaci&oacute;n con el Servidor.';

                                if (val.descEstatusBitacoraws != null && val.descEstatusBitacoraws != '"') {
                                    status = val.descEstatusBitacoraws;
                                }
                                table += '<td>' + status + '</td>'
                                var descJSON = 'Error de Comunicaci&oacute;n con el Servidor.';

                                if (val.observacionesDestino != null && val.observacionesDestino != '"') {
                                    descJSON = val.observacionesDestino;
                                }
                                table += '<td>' + descJSON + '</td>'
                                table += '<td>' + val.fechaRegistro + '</td>'
                                table += "</tr>";
                                count++;
                            });
                            $("#informationTable tbody").append(table)
                            $(".paginacion").show();
                        } else {
                            $(".infos").html("<div class='alert alert-info text-center' >NO HAY INFORMACI&Oacute;N</div>");
                        }
                    } else {
                        $(".infos").html("<div class='alert alert-info text-center' >NO HAY INFORMACI&Oacute;N</div>");
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
    }
}