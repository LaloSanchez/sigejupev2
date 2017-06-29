<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    }

    <style type="text/css">
        .mayuscula{  
            text-transform: uppercase;  
        } 
        .requerido {
            color: darkred;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Juzgados
            </h5>
        </div>
        <div class="panel-body">
            <!--------------------AQUI COMIEZA EL CUERPO DEL FORMULARIO------------------>
            <!--<input type="text" name="hddCveJuzgado" id="hddCveJuzgado">-->

            <div id="divFormulario" class="form-horizontal">
                <p class="col-lg-12" style="color:darkred;">
                    Los campos marcados con (*) son obligatorios.
                </p>
                <div class="form-group">
                    <label class="control-label col-md-3">Clave juzgado  <span class="requerido">(*)</span> </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control mayuscula" id="hddCveJuzgado" name="hddCveJuzgado" placeholder="Clave Juzgado" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Descripci&oacute;n  <span class="requerido">(*)</span> </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control mayuscula" id="txtDescripcion" name="txtDescripcion" placeholder="Descripci&oacute;n" >
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="">Instancia  <span class="requerido">(*)</span></label>
                    <div class="col-md-9">
                        <select id="cmbInstancia" class="form-control" name="cmbInstancia">
                            <option value="">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbMateria">Materia<span class="requerido">(*)</span></label>
                    <div class="col-md-9">
                        <select id="cmbMateria" class="form-control" name="cmbMateria">
                            <option value="">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbTipoJuzgado">Tipo juzgado<span class="requerido">(*)</span></label>
                    <div class="col-md-9">
                        <select id="cmbTipoJuzgado" class="form-control" name="cmbTipoJuzgado">
                            <option value="">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbRegion">Regi&oacute;n<span class="requerido">(*)</span></label>
                    <div class="col-md-9">
                        <select id="cmbRegion" class="form-control" name="cmbRegion" onchange="comboDistritos();">
                            <option value="">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbDistritos">Distrito<span class="requerido">(*)</span></label>
                    <div class="col-md-9">
                        <select id="cmbDistritos" class="form-control" name="cmbDistritos" onchange="comboEdificos();">
                            <option value="">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbEdificio">Edificio<span class="requerido">(*)</span></label>
                    <div class="col-md-9">
                        <select id="cmbEdificio" class="form-control" name="cmbEdificio">
                            <option value="">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Siglas<span class="requerido">(*)</span> </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control mayuscula" id="txtSiglas" placeholder="Siglas" >
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="">Activo<span class="requerido">(*)</span></label>
                    <div class="col-md-3">
                        <select id="cmbActivo" class="form-control" name="cmbActivo">
                            <option value="">Seleccione una opci&oacute;n</option>
                            <option value="S">SI</option>
                            <option value="N">NO</option>
                        </select>
                    </div>  
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-12">
                    <button type="button" name="btnAgrega" id="btnAgrega" onclick="guardaJuzgados();" class="btn btn-primary">Agregar</button>
                    <button type="button" name="btnConsultar" id="btnConsultar" onclick="consultar();" class="btn btn-primary">Consultar</button>
                    <button type="button" name="btnLimpiar" id="btnLimpiar" onclick="limpiar();" class="btn btn-primary">Limpiar</button>
                </div>
            </div>
            <div class="form-group col-lg-12"></div> 
            <br><br>
            <div class="form-group" >
                <div id="divAlertWarning" class="alert alert-warning alert-dismissable" style="display:none;"></div>
                <div id="divAlertSucces" class="alert alert-success alert-dismissable" style="display:none;"></div>
                <div id="divAlertDager" class="alert alert-danger alert-dismissable" style="display:none;"></div>
                <div id="divAlertInfo" class="alert alert-info alert-dismissable" style="display:none;"></div>
            </div>  
            <div id="divConsultaGrid" style="display: none" class="col-md-12">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <div class="form-group col-md-3">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-md-3" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultar(0);">
                            <option value="1"></option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultar(1);">
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>

                <div id="divResultados" class="col-md-12"></div>
            </div>



            <!--------------------AQUI TERMINA EL CUERPO DEL FORMULARIO------------------>
        </div>
    </div>

    <script type="text/javascript">
        comboInstancias = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/instancias/InstanciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbInstancia').empty();
                        $('#cmbInstancia').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbInstancia').append('<option value="' + object.cveInstancia + '">' + object.desInstancia + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tipo de carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipo carpeta:\n\n" + otroobj);
                }
            });
        };
        comboMaterias = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/materias/MateriasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbMateria').empty();
                        $('#cmbMateria').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbMateria').append('<option value="' + object.cveMateria + '">' + object.desMateria + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tipo de carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipo carpeta:\n\n" + otroobj);
                }
            });
        };
        comboTiposJuzgados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposjuzgados/TiposjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoJuzgado').empty();
                        $('#cmbTipoJuzgado').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbTipoJuzgado').append('<option value="' + object.cveTipoJuzgado + '">' + object.desTipoJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tipo de carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipo carpeta:\n\n" + otroobj);
                }
            });
        };
        comboRegion = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/regiones/RegionesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbRegion').empty();
                        $('#cmbRegion').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbRegion').append('<option value="' + object.cveRegion + '">' + object.desRegion + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tipo de carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipo carpeta:\n\n" + otroobj);
                }
            });
        };
        comboDistritos = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/distritos/DistritosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    cveRegion: $("#cmbRegion").val(),
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbDistritos').empty();
                        $('#cmbDistritos').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbDistritos').append('<option value="' + object.cveDistrito + '">' + object.desDistrito + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tipo de carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipo carpeta:\n\n" + otroobj);
                }
            });
        };
        comboEdificos = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "edificio",
                    cveRegion: $("#cmbRegion").val(),
                    cveDistrito: $("#cmbDistritos").val()
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbEdificio').empty();
                        $('#cmbEdificio').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbEdificio').append('<option value="' + object.CveEdificio + '">' + object.NomEdificio + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tipo de carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipo carpeta:\n\n" + otroobj);
                }
            });
        };

        validateJuzgado = function () {
            var mensaje = "";
            var error = false;
            if ($('#hddCveJuzgado').val() == "" || $('#hddCveJuzgado').val() == "0") {
                mensaje += "*Ingrese clave juzgado <br>";
                error = true;
            }
            if ($('#txtDescripcion').val() == "" || $('#txtDescripcion').val() == "0") {
                mensaje += "*Ingrese una descripci&oacute;n <br>";
                error = true;
            }
            if ($('#cmbInstancia').val() == "" || $('#cmbInstancia').val() == "0") {
                mensaje += "*Seleccione una instancia <br>";
                error = true;
            }
            if ($('#cmbMateria').val() == "" || $('#cmbMateria').val() == "0") {
                mensaje += "*Seleccione una materia <br>";
                error = true;
            }
            if ($('#cmbTipoJuzgado').val() == "" || $('#cmbTipoJuzgado').val() == "0") {
                mensaje += "*Seleccione un tipo de juzgado <br>";
                error = true;
            }
            if ($('#cmbRegion').val() == "" || $('#cmbRegion').val() == "0") {
                mensaje += "*Seleccione una regi&oacute;n <br>";
                error = true;
            }
            if ($('#cmbDistritos').val() == "" || $('#cmbDistritos').val() == "0") {
                mensaje += "*Seleccione una region <br>";
                error = true;
            }
            if ($('#cmbEdificio').val() == "" || $('#cmbEdificio').val() == "0") {
                mensaje += "*Seleccione un edificio <br>";
                error = true;
            }
            if ($('#txtSiglas').val() == "" || $('#txtSiglas').val() == "0") {
                mensaje += "*Ingrese siglas <br>";
                error = true;
            }
            if ($('#cmbActivo').val() == "" || $('#cmbActivo').val() == "0") {
                mensaje += "*Seleccione activo <br>";
                error = true;
            }
            if (error) {
                $("#divAlertWarning").html("");
                $("#divAlertWarning").html(mensaje);
                $("#divAlertWarning").show("");
                setTimeAlert("divAlertWarning");
            }

            return error;
        };

        guardaJuzgados = function () {
            var error = false;
            if (!validateJuzgado()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "guardaJuzgado",
                        cveJuzgado: $("#hddCveJuzgado").val(),
                        desJuzgado: $("#txtDescripcion").val(),
                        cveInstancia: $("#cmbInstancia").val(),
                        cveMateria: $("#cmbMateria").val(),
                        cveTipojuzgado: $("#cmbTipoJuzgado").val(),
                        cveRegion: $("#cmbRegion").val(),
                        cveDistrito: $("#cmbDistritos").val(),
                        cveEdificio: $("#cmbEdificio").val(),
                        siglas: $("#txtSiglas").val(),
                        activo: $("#cmbActivo").val()
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        ///////////////////////////////////////////////////////////////////////////////
                        if (datos.status == "Ok") {
                            $("#hddCveJuzgado").val(datos.data[0].cveJuzgado);
                            $("#txtDescripcion").val(datos.data[0].desJuzgado);
                            $("#cmbInstancia").val(datos.data[0].cveInstancia);
                            $("#cmbMateria").val(datos.data[0].cveMateria);
                            $("#cmbTipoJuzgado").val(datos.data[0].cveTipojuzgado);
                            $("#cmbRegion").val(datos.data[0].cveRegion).trigger('change');
                            $("#cmbDistritos").val(datos.data[0].cveDistrito).trigger('change');
                            $("#cmbEdificio").val(datos.data[0].cveEdificio).trigger('change');
                            $("#txtSiglas").val(datos.data[0].Siglas);
                            $("#cmbActivo").val(datos.data[0].activo);

                            $("#divAlertSucces").html("");
                            $("#divAlertSucces").html(datos.mnj);
                            $("#divAlertSucces").show("");
                            setTimeAlert("divAlertSucces");


                        } else {
                            $("#divAlertWarning").html("");
                            $("#divAlertWarning").html(datos.mnj);
                            $("#divAlertWarning").show("");
                            setTimeAlert("divAlertWarning");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de audiencias:\n\n" + otroobj);
                    }
                });
            } else {
                error = false;
            }
            return error;
        };
        consultar = function (pagAux) {
            var pag = 0;
            if (pagAux == 0) {
                pag = $("#cmbPaginacion").val();
            } else {
                pag = 1;
            }
            var cantReg = $("#cmbNumReg").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultaGeneral",
                    cveJuzgado: $("#hddCveJuzgado").val(),
                    desJuzgado: $("#txtDescripcion").val(),
                    cveInstancia: $("#cmbInstancia").val(),
                    cveMateria: $("#cmbMateria").val(),
                    cveTipojuzgado: $("#cmbTipoJuzgado").val(),
                    cveRegion: $("#cmbRegion").val(),
                    cveDistrito: $("#cmbDistritos").val(),
                    cveEdificio: $("#cmbEdificio").val(),
                    siglas: $("#txtSiglas").val(),
                    activo: $("#cmbActivo").val(),
                    pag: pag,
                    cantxPag: cantReg
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    ///////////////////////////////////////////////////////////////////////////////
                    if (datos.status == "Ok") {
                        var table = "";
                        table += '<table id="tblResultados" class="table table-hover table-striped table-bordered">';
                        table += '<thead>';
                        table += '<tr>';
                        table += '<th>No</th>';
                        table += '<th>cveJuzgado</th>';
                        table += '<th>Descripci&oacute;n</th>';
                        table += '<th>Siglas</th>';
                        table += '<th>Activo</th>';
                        table += '</tr>';
                        table += '</thead>';
                        table += "<tbody>";
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += "<tr>";
                            table += "<td onclick='consutaId(" + datos.data[i].cveJuzgado + ")' >" + (i + 1) + "</td>";
                            table += "<td onclick='consutaId(" + datos.data[i].cveJuzgado + ")' >" + datos.data[i].cveJuzgado + "</td>";
                            table += "<td onclick='consutaId(" + datos.data[i].cveJuzgado + ")' >" + datos.data[i].desJuzgado + "</td>";
                            table += "<td onclick='consutaId(" + datos.data[i].cveJuzgado + ")' >" + datos.data[i].Siglas + "</td>";
                            table += "<td onclick='consutaId(" + datos.data[i].cveJuzgado + ")' >" + datos.data[i].activo + "</td>";
                            table += "</tr>";
                        }
                        table += "</tbody>";
                        table += "</table>";
                        $("#divHideForm").hide("");
                        $("#divConsultaGrid").show("");
                        $('#divResultados').html(table);
                        $("#tblResultados").DataTable({paging: false});
                        getPaginas(datos.pagina, cantReg);
                    } else {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html(datos.msj);
                        $("#divAlertWarning").show("");
                        setTimeAlert("divAlertWarning");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
        };
        getPaginas = function (pag, cantReg) {
    //        var pag = $("#cmbPaginacion").val();
    //        var cantReg = $("#cmbNumReg").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "getPaginas",
                    cveJuzgado: $("#hddCveJuzgado").val(),
                    desJuzgado: $("#txtDescripcion").val(),
                    cveInstancia: $("#cmbInstancia").val(),
                    cveMateria: $("#cmbMateria").val(),
                    cveTipojuzgado: $("#cmbTipoJuzgado").val(),
                    cveRegion: $("#cmbRegion").val(),
                    cveDistrito: $("#cmbDistritos").val(),
                    cveEdificio: $("#cmbEdificio").val(),
                    siglas: $("#txtSiglas").val(),
                    activo: $("#cmbActivo").val(),
                    cantxPag: cantReg
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    ///////////////////////////////////////////////////////////////////////////////
                    var json = datos;
                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                        $("#cmbPaginacion").val(pag);
                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();
                        $("#divAlertDager").html("Error EL NUMERO DE " + tipoNumero + " NO EXISTE");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
        };

        consutaId = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "seleccion",
                    cveJuzgado: id
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    ///////////////////////////////////////////////////////////////////////////////
                    if (datos.totalCount > 0) {
                        $("#hddCveJuzgado").attr('disabled', 'disabled');
                        $("#hddCveJuzgado").val(datos.data[0].cveJuzgado);
                        $("#txtDescripcion").val(datos.data[0].desJuzgado);
                        $("#cmbInstancia").val(datos.data[0].cveInstancia);
                        $("#cmbMateria").val(datos.data[0].cveMateria);
                        $("#cmbTipoJuzgado").val(datos.data[0].cveTipojuzgado);
                        $("#cmbRegion").val(datos.data[0].cveRegion).trigger('change');
                        $("#cmbDistritos").val(datos.data[0].cveDistrito).trigger('change');
                        $("#cmbEdificio").val(datos.data[0].cveEdificio).trigger('change');
                        $("#txtSiglas").val(datos.data[0].Siglas);
                        $("#cmbActivo").val(datos.data[0].activo);
                    } else {
                        $("#divAlertWarning").html("");
                        $("#divAlertWarning").html(datos.msj);
                        $("#divAlertWarning").show("");
                        setTimeAlert("divAlertWarning");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
        };

        limpiar = function () {
            $('#hddCveJuzgado').removeAttr('disabled');
            $("#hddCveJuzgado").val("");
            $("#txtDescripcion").val("");
            $("#cmbInstancia").val("");
            $("#cmbMateria").val("");
            $("#cmbTipoJuzgado").val("");
            $("#cmbRegion").val("").trigger('change');
            $("#cmbDistritos").val("").trigger('change');
            $("#cmbEdificio").val("").trigger('change');
            $("#txtSiglas").val("");
            $("#cmbActivo").val("");
            $("#divConsultaGrid").hide("");
            $('#divResultados').html("");
        };
        $(function () {
            $('#hddCveJuzgado').validaCampo('0123456789');
            comboInstancias();
            comboMaterias();
            comboTiposJuzgados();
            comboRegion();
        });

    </script>

    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>