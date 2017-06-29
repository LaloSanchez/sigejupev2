var imputadosCateos = function () {
    return {
        validaInformacion: function () {
            var items = $("#txtNombreOfendido").val().trim();
            var calle = $("#txtCalle").val().trim();
            var municipio = $("#txtMunicipio").val().trim();
            if ((items == "") && (calle == "") && (municipio == "")) {
                bootbox.alert("Escribe almenos un imputado o una calle o un municipio");
                $("#txtNombreOfendido").val($("#txtNombreOfendido").val().trim())
                return false;
            }
            if (items != '') {
                if (items.length >= 3) {
                    return true;
                } else {
                    $("#txtNombreOfendido").val($("#txtNombreOfendido").val().trim())
                    bootbox.alert("Escribe mas de 3 letras en el Nombre del Imputado");
                    return false;
                }
            } else if (calle != '') {
                if (calle.length >= 3) {
                    return true;
                } else {
                    $("#txtCalle").val($("#txtCalle").val().trim())
                    bootbox.alert("Escribe mas de 3 letras en la Calle");
                    return false;
                }
            } else if (municipio != '') {
                if (municipio.length >= 3) {
                    return true;
                } else {
                    $("#txtMunicipio").val($("#txtMunicipio").val().trim())
                    bootbox.alert("Escribe mas de 3 letras en el Municipio");
                    return false;
                }
            }
        },
        buscar: function (pagAux, extra) {
            var pag = 1;
            if (pagAux == 0 || pagAux == "" || pagAux == "undefined") {
                if (extra == 0)
                    pag = $("#cmbPaginacion").val();
            }
            var cantReg = $("#cmbNumReg").val();
            var validacion = this.validaInformacion();
            $("#divConsulta").hide();
            $(".buttons").hide();
            if (validacion) {
                var datos = {
                    "accion": "consultaImputadosCateos",
                    "pag": pag,
                    "cantxPag": cantReg,
                    imputados: $("#txtNombreOfendido").val(),
                    calle: $("#txtCalle").val(),
                    miunicipio: $("#txtMunicipio").val()
                }
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/solicitudescateos/SolicitudescateosFacade.Class.php",
                    data: datos,
                    async: true,
                    success: function (datos) {
                        try {
                            $("#cateosPersonas").hide();
                            $("#ordenesResult").hide();
                            $("#OrdenTable tbody > tr").remove();
                            $("#cateoTable tbody > tr").remove();
                            datos = eval("(" + datos + ")");
                            var cateo = false;
                            var orden = false;
                            if (datos.type == "OK") {
                                $('#cmbPaginacion').find('option').remove().end();
                                var options = "";
                                $.each(datos.paginas, function (indext, valt) {
                                    if (datos.pagina == valt) {
                                        options += "<option value='" + valt + "' selected='selected' >" + valt + "</option>";
                                    } else {
                                        options += "<option value='" + valt + "' >" + valt + "</option>";
                                    }
                                });
                                $.each(datos, function (index, val) {
                                    if (typeof val != "string" && index != "paginas" && index != "pagina") {
                                        // --> Llenamos Informacion en Cateos
                                        if (val.typeR != "orden") {
                                            var table = "<tr onclick= 'javascript:searchImputado.seleccionaRegistro(" + val.info.cateo.idCateo + ", 1)' >";
                                            if (val.nombreMoral == "") {
                                                table += "<td>" + val.nombre + " " + val.paterno + " " + val.materno + "</td>";
                                            } else {
                                                table += "<td>" + val.nombreMoral + "</td>";
                                            }
                                            var tipo = "Imputado";
                                            if (val.typeR == "persona")
                                                tipo = "Persona";
                                            else if (val.typeR == 'objeto')
                                                tipo = "Objeto";
                                            table += "<td>" + tipo + "</td>";
                                            var causa = "";
                                            if ((val.info.solicitud.numero != "" && val.info.solicitud.numero != 0) &&
                                                    (val.info.solicitud.anio != "" && val.info.solicitud.anio != 0))
                                                causa = val.info.solicitud.numero + "/" + val.info.solicitud.anio;
                                            table += "<td>" + causa + "</td>";
                                            table += "<td>" + val.info.solicitud.nuc + "</td>";
                                            table += "<td>" + val.info.solicitud.carpetaInv + "</td>";
                                            table += "<td>" + val.info.cateo.numeroCateo + "/" + val.info.cateo.anioCateo + "</td>";
                                            table += "<td>" + val.info.cateo.numeroEspecializadoCateo + "/" + val.info.cateo.anioCateo + "</td>";
                                            table += "<td>" + val.info.juzgado.desJuzgado + "</td>";
                                            var juez = val.info.juez.nombre + " " + val.info.juez.paterno + " " + val.info.juez.materno;
                                            table += "<td>" + juez + "</td>";
                                            table += "<td>" + val.info.etstaus.desEstatusSolicitudCateo + "</td>";
                                            table += "</tr>";
                                            $("#cateoTable tbody").append(table);
                                            cateo = true;
                                        } else {
                                            var table = "<tr onclick= 'javascript:searchImputado.seleccionaRegistro(" + val.info.orden.idOrden + ", 2)' >";
                                            if (val.nombreMoral == "") {
                                                table += "<td>" + val.nombre + " " + val.paterno + " " + val.materno + "</td>";
                                            } else {
                                                table += "<td>" + val.nombreMoral + "</td>";
                                            }
                                            var causa = "";
                                            if ((val.info.solicitud.numero != "" && val.info.solicitud.numero != 0) &&
                                                    (val.info.solicitud.anio != "" && val.info.solicitud.anio != 0))
                                                causa = val.info.solicitud.numero + "/" + val.info.solicitud.anio;
                                            table += "<td>" + causa + "</td>";
                                            table += "<td>" + val.info.solicitud.nuc + "</td>";
                                            table += "<td>" + val.info.solicitud.carpetaInv + "</td>";
                                            table += "<td>" + val.info.orden.numeroOrden + "/" + val.info.orden.anioOrden + "</td>";
                                            table += "<td>" + val.info.orden.numeroEspecializadoOrden + "/" + val.info.orden.anioOrden + "</td>";
                                            table += "<td>" + val.info.juzgado.desJuzgado + "</td>";
                                            var juez = val.info.juez.nombre + " " + val.info.juez.paterno + " " + val.info.juez.materno;
                                            table += "<td>" + juez + "</td>";
                                            table += "<td>" + val.info.etstaus.desEstatusSolicitudOrdenes + "</td>";
                                            table += "</tr>";
                                            $("#OrdenTable tbody").append(table);
                                            orden = true;
                                        }
                                    }
                                });
                                $("#cmbPaginacion").append(options);
                                if (cateo) {
                                    $("#cateosPersonas").show();
                                }
                                if (orden) {
                                    $("#ordenesResult").show();
                                }
                                $("#divConsulta").show();
                                $(".buttons").show();
                            } else {
                                $("#divConsulta").hide();
                                $(".buttons").show();
                                bootbox.alert("No Hay Informaci&oacute;n");
                            }
                        } catch (ex) {
                            $("#divConsulta").hide();
                            $(".buttons").show();
                            $(".infos").html("<div class='alert alert-danger text-center' >Ocurrio un Error..</div>")
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divConsulta").hide();
                        $(".buttons").show();
                        bootbox.alert("Error en la petici&oacute;n: <br />" + otroobj)
                    }
                });
            }
            $(".buttons").show();
        },
        limpiar: function () {
            $("#divConsulta").hide();
            $("#txtNombreOfendido").val("");
            $("#txtCalle").val("");
            $("#txtMunicipio").val("");
            $("#cmbNumReg").val(10);
            $("#cmbPaginacion").val(1);
            $("#cateoTable tbody > tr").remove();
            $("#OrdenTable tbody > tr").remove();
        },
        seleccionaRegistro: function (id, type) {
            con = null;
            switch (type) {
                case 1:
                    //-->Cateo
                    $("ntype").text("l Cateo");
                    $(".cateoT").show();
                    $(".ordenT").hide();
                    mS = new misSolicitudes();
                    cateo.seleccionaRegistro(id, 1);
                    break;
                case 2:
                    //--> Orden
                    $(window).scrollTop($(".consultaInformacon").offset().top - 100);
                    $(".cateoT").hide();
                    $(".ordenT").show();
                    $("ntype").html(" la Orden de Aprehensi&oacute;n");
                    mS = new misSolicitudesOrdenes();
                    con = new ConsultasOrdenes();
                    orden.seleccionaRegistro(id, 1);
                    break;
                default :
                    break;
            }
            console.log(mS);
        },
        validarCampo: function (e) {
            var teclaAscii;
            if (window.event) { // IE y chrome
                teclaAscii = e.keyCode;
            } else if (e.which) { // Netscape/Firefox/Opera
                teclaAscii = e.which;
            }

            if ((teclaAscii > 64) && (teclaAscii < 91)) {//Letras mayusculas
                return  true;
            }
            if ((teclaAscii > 96) && (teclaAscii < 123)) {//Letras min�sculas
                return true;
            }
            if ((teclaAscii == 180) || (teclaAscii == 193) || (teclaAscii == 201) || (teclaAscii == 205) || (teclaAscii == 211) || (teclaAscii == 218)) {
                return true;
            }
            if ((teclaAscii == 180) || (teclaAscii == 225) || (teclaAscii == 233) || (teclaAscii == 237) || (teclaAscii == 243) || (teclaAscii == 250)) {
                return true;
            }
            if ((teclaAscii == 32) || (teclaAscii == 8) || (teclaAscii == 241) || (teclaAscii == 209) || (teclaAscii == 44)) {//Espacio
                return true;
            }
            return false;
        }
    }
}