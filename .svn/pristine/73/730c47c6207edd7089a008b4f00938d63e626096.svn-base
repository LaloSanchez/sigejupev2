var Notificaciones = function () {
    return {
        MediosNotificacion: new Array(),
        ProcesoMediosNotificacion: new Array(),
        loadMediosNotificacion: function () {
            var datosSend = {
                "accion": "getMediosNotificacion",
                "activo": "S"
            }
            var self = this;
            var urltoSend = "../fachadas/sigejupe/mediosnotificaciones/MediosnotificacionesFacade.Class.php";
            $.ajax({
                type: "POST",
                url: urltoSend,
                data: datosSend,
                async: true,
                success: function (datos) {
                    try {
                        datos = eval("(" + datos + ")");
                        if (datos.type == "OK") {
                            $("#tblMediosNotificaciones tbody > tr").remove();
                            var table = "";
                            $.each(datos.data.medios, function (index, val) {
                                table += "<tr>";
                                table += "<td>" + val.desMedioNotificacion + "</td>";
                                table += "<td>";
                                if (val.rutas != "") {
                                    table += "<input onclick='javascript:notificaciones.selection(this)' type='checkbox' name='chkMedios-" + self.MediosNotificacion.length
                                            + "' value='" + val.cveMedioNotificacion + "'>";

                                    self.MediosNotificacion[self.MediosNotificacion.length] = val.rutas;
                                }
                                table += "</td>";
                                table += "</tr>";
                            });
                            $("#tblMediosNotificaciones").append(table);
                            var option = "";
                            $("#tiempo > option").remove();
                            $.each(datos.procesos, function (prindex, prval) {
                                option += "<option value='";
                                option += prval.idProcesoNotificacion + "-" + prval.tiempo + "' >";
                                option += prval.tiempo;
                                option += "</option>"
                            });
                            $("#tiempo").append(option);
                        } else {
                            // No hay Registros
                        }
                    } catch (ex) {
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
        },
        selection: function (obj) {
            var name = $(obj).attr("name");
            var nameSplit = name.split("-");
            var position = nameSplit[1];
            var tableMedios = this.MediosNotificacion[position];
            if ($(obj).is(':checked')) {
                var title = $(obj).parent().parent().text();
                var html = '<div class="panel panel-default">'
                        + '<div class="panel-heading" role="tab" id="' + name + '">'
                        + ' <h4 class="panel-title">'
                        + '     <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' + name + '" aria-expanded="true" aria-controls="collapse' + name + '">'
                        + '         SELECCIONA LA RUTA DE LOS ARCHIVOS: ' + title
                        + '     </a>'
                        + ' </h4>'
                        + '</div>'
                        + '<div id="collapse' + name + '" class="panel-collapse collapse" role="tabpanel" aria-labelledby="' + name + '">'
                        + ' <div class="panel-body">';
                var table = "<div class='table-responsive' ><table class='table table-bordered table-hover' >";
                $.each(tableMedios, function (index, val) {
                    table += "<tr>";
                    table += "<td>" + val.rutaControlador + "</td>";
                    table += "<td>";
                    table += "<input onclick='javascript:notificaciones.selectionItem(this)' type='checkbox' name='chkMedios-" + position + "-" + val.idRutaControlador + "-" + val.cveMedioNotificacion
                            + "' value='" + val.idRutaControlador + "'>";
                    table += "</td>";
                    table += "</tr>";
                });
                table += "</table></div>";
                html += table;
                html += ' </div> '
                        + ' </div> '
                        + '</div>';
                $(".MediosComunicacion").append(html);
            } else {
                $("#" + name).parent().remove();
                var value = $(obj).val();
                var self = this;
                var contador = 0;
                if (this.ProcesoMediosNotificacion.length != 0) {
                    for (var i = 0; i <= this.ProcesoMediosNotificacion.length; i++) {
                        var datos = eval("(" + this.ProcesoMediosNotificacion[contador] + ")");
                        if (typeof datos == "object") {
                            if (datos.cveMedioNotificacion == value) {
                                self.ProcesoMediosNotificacion.splice(contador, 1);
                                contador--;
                            }
                        }
                        contador++;
                    }
                    this.makeTable();
                }
            }
        },
        selectionItem: function (obj) {
            var name = $(obj).attr("name");
            var nameSplit = name.split("-");
            var position = nameSplit[1];
            var idRuta = nameSplit[2];
            var idMedio = nameSplit[3];
            var idProcesoArray = $("#tiempo").val();
            idProcesoArray = idProcesoArray.split('-');
            var idProceso = idProcesoArray[0];
            var time = idProcesoArray[1];
            if ($(obj).is(':checked')) {
                var string = "{";
                string += "\"idProcesoNotificacion\":\"" + idProceso + "\",\"";
                string += "cveMedioNotificacion\":\"" + idMedio + "\",\"";
                string += "position\":\"" + position + "\",\"";
                string += "time\":\"" + time + "\",\"";
                string += "idRutaControlador\":\"" + idRuta + "\"";
                string += "}";
                this.ProcesoMediosNotificacion[this.ProcesoMediosNotificacion.length] = string;
            } else {
                var count = 0;
                var self = this;
                var stop = false;
                $.each(this.ProcesoMediosNotificacion, function (dindex, dval) {
                    dval = eval("(" + dval + ")");
                    if (dval.idRutaControlador == idRuta) {
                        self.ProcesoMediosNotificacion.splice(count, 1);
                        return false;
                    }
                    count++;
                });
            }
            this.makeTable();
        },
        saveTareas: function () {
            // --> Verificamos que exista una Tarea Programada
            if (this.ProcesoMediosNotificacion.length > 0) {
                var datosSend = {
                    "tasks": "[" + this.ProcesoMediosNotificacion + "]",
                    "accion": "saveTask"
                }
                var urltoSend = "../fachadas/sigejupe/mediosnotificaciones/MediosnotificacionesFacade.Class.php";
                $.ajax({
                    type: "POST",
                    url: urltoSend,
                    data: datosSend,
                    async: true,
                    success: function (datos) {
                        try {
                            datos = eval("(" + datos + ")");
                            if (datos.type == "OK") {
                                bootbox.alert(datos.text);
                            } else {
                                bootbox.alert(datos.text);
                            }
                        } catch (e) {
                            bootbox.alert("OCURRIO UN ERROR INTENTELO NUEVAMENTE");
                        }
                    },
                    error : function (){
                        bootbox.alert("OCURRIO UN ERROR INTENTELO NUEVAMENTE");
                    }
                });
            } else {
                bootbox.alert("NO SE HA PROGRAMADO NINGUNA TAREA");
            }
        },
        makeTable: function () {
            var table = "<div class='table-responsive' ><table class='table table-bordered table-hover table-striped' >";
            var self = this;
            $.each(this.ProcesoMediosNotificacion, function (pindex, pval) {
                pval = eval("(" + pval + ")");
                var tableMedios = self.MediosNotificacion[pval.position];
                $.each(tableMedios, function (index, val) {
                    if (val.idRutaControlador == pval.idRutaControlador) {
                        table += "<tr>";
                        table += "<td>" + pval.time + " * * * * php " + val.rutaControlador + "</td>";
                        table += "</tr>";
                    }
                });
            });
            table += "</table></div>";

            if (this.ProcesoMediosNotificacion.length != 0) {
                $(".apacheCron").html(table);
                $(".apacheCronDiv").show();
                $(".btn-save").show();
            } else {
                $(".apacheCronDiv").hide();
                $(".btn-save").hide();
            }
        }
    }
}