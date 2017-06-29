var Reportes = function () {
    return {
        convertirfechas: function (tipo, fecha) {
            if (tipo = 1) {
                var fechasplit = fecha.split('/');
                fecha = fechasplit[2] + "-" + fechasplit[1] + "-" + fechasplit[0];
            } else {
                var fechasplit = fecha.split('-');
                fecha = fechasplit[2] + "-" + fechasplit[1] + "-" + fechasplit[0];
            }
            return fecha;
        },
        limpiar: function () {
            $(".ordenes").hide();
            $(".cateos").hide();
            $("#frmSolicitud")[0].reset();
        },
        changeCmb: function (cmb) {
            var value = $(cmb).val();
            if (value != "") {
                if ((value == 1) || (value == 3)) {
                    $("#fechaConsultar").val("19/06/2016").datepicker('update');
                    $("#fechaConsultarEnd").val("19/06/2016").datepicker('update');
                } else {
                    $("#fechaConsultar").val("20/06/2016").datepicker('update');
                    $("#fechaConsultarEnd").val("20/06/2016").datepicker('update');
                }
            }
        },
        getReporte: function () {
            $(".msj").html("");
            $(".ordenes").hide();
            if ($("#tipoReporte").val() == "") {
                $(".msj").html("<div class='alert alert-danger text-center' >SELECCIONA UN TIPO DE REPORTE</div>")
                return false;
            }

            if (($("#fechaConsultar").val() == "") || ($("#fechaConsultarEnd").val() == "")) {
                $(".msj").html("<div class='alert alert-danger text-center' >INGRESA UN RANGO DE FECHAS</div>")
                return false;
            }

            var datos = {
                fechaInicial: this.convertirfechas(1, $("#fechaConsultar").val()),
                fechaFinal: this.convertirfechas(1, $("#fechaConsultarEnd").val()),
                action: $("#tipoReporte").val()
            }
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/cateos/EstadisticoCateosTotales.Class.php",
                data: datos,
                async: false,
                dataType: 'json',
                beforeSend: function () {
                    $(".infos").html("<div class='alert alert-info text-center' >Cargando Informaci&oacute;n Espere..</div>")
                },
                success: function (data) {
                    if (($("#tipoReporte").val() == 1)) {
                        $(".cateos").hide();
                        $("#OrdenTable tbody > tr").remove();
                        var table1 = "";
                        var table2 = "";
                        var table3 = "";
                        var audiencia = [60, 61, 74];
                        table1 += "<tr>";
                        table1 += "<td>AUDIENCIA PARA SOLICITAR ORDEN DE APREHENSI&Oacute;N</td>";
                        table2 += "<tr>";
                        table2 += "<td>AUDIENCIA PARA CONTINUAR Y RESOLVER SOBRE ORDEN DE APREHENSI&Oacute;N</td>";
                        table3 += "<tr>";
                        table3 += "<td>AUDIENCIA DE FORMULACI&Oacute;N DE IMPUTACI&Oacute;N SIN DETENIDO Y/O EN SU CASO DE SOLICITUD DE ORDEN DE APREHENSI&Oacute;N</td>";
                        $.each(data.datos, function (ind, val) {
                            var contador = 0;
                            var tablChild = "";
                            var tablChild2 = "";
                            var tablChild3 = "";
                            $.each(val, function (indV, valD) {
                                if (60 == indV) {
                                    tablChild += "<td>" + valD + "</td>";
                                } else if (61 == indV) {
                                    tablChild2 += "<td>" + valD + "</td>";
                                } else if (74 == indV) {
                                    tablChild3 += "<td>" + valD + "</td>";
                                }
                            });
                            table1 += tablChild;
                            table2 += tablChild2;
                            table3 += tablChild3;
                            contador++;
                        });

                        table1 += "</tr>";
                        table2 += "</tr>";
                        table3 += "</tr>";
                        var table = table1;
                        table += table2;
                        table += table3;
                        $("#OrdenTable tbody").append(table);
                        $(".ordenes").show();
                    } else {
                        $(".ordenes").hide();
                        $("#CateosTable tbody > tr").remove();
                        var table = "", tableI = "", name = "";
                        table += "<tr>";
                        if ($("#tipoReporte").val() == 2) {
                            name = 'ORDENES DE APREHENSI&Oacute;N JUZGADO ESPECIALIZADO';
                        } else {
                            name = ($("#tipoReporte").val() == 3) ? 'CATEOS JUZGADO DE CONTROL' : 'CATEOS JUZGADO ESPECIALIZADO';
                        }
                        table += "<td>" + name + "</td>";
                        $.each(data.datos, function (ind, val) {
                            tableI += "<td>" + val + "</td>";
                        });
                        table += tableI;
                        table += "</tr>";

                        $("#CateosTable tbody").append(table);
                        $(".cateos").show();
                    }
                }
            });

            return false;

        }
    }
}