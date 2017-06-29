<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    if (isset($_POST['idSolicitud'])) {
        $idSolicitudAudiencia = $_POST['idSolicitud'];
    } else {
        $idSolicitudAudiencia = "";
    }
    date_default_timezone_set('America/Mexico_City');
    $fecha = date("d/m/Y");
    ?>
    <!doctype html>
    <style type="text/css">
        .mayuscula{  
            text-transform: uppercase;  
        } 
        .requerido {
            color: darkred;
        }
    </style>
    <script type="text/javascript">

    </script>
    <div class="panel panel-default">
        <div class="panel-body">
            <input type="hidden" readonly class="form-control" id="hddIdSolicitudAudiencia" value="<?php echo $idSolicitudAudiencia; ?>">
            <div id="divFormulario" class="form-horizontal">
                <p class="col-lg-12" style="color:darkred;">
                    Los campos marcados con (*) son obligatorios.
                </p>
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbJuzgados">Juzgados  <span class="requerido">(*)</span></label>
                    <div class="col-md-9">
                        <select id="cmbJuzgados" class="form-control" name="cmbJuzgados" onchange="comboTipoCarpeta();">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>  
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbTipoCarpeta">Tipo Carpeta</label>
                    <div class="col-md-9">
                        <select id="cmbTipoCarpeta" class="form-control" name="cmbTipoCarpeta">
                        <!--<select id="cmbTipoCarpeta" class="form-control" name="cmbTipoCarpeta" onchange="validaCarpeta();">-->
                            <option value="">Asunto nuevo</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3">N&uacute;mero</label>
                    <div class="col-md-9">
                        <input type="text" id="txtNumero" class="form-inline" id="txtNumero" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="txtAnio" id="txtAnio" maxlength="4" placeholder="A&ntilde;o">
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Carpeta de Investigaci&oacute;n</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control mayuscula" id="txtCarpetaInvestigacion" placeholder="Carpeta de Investigaci&oacute;n">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">NUC (N&uacute;mero &uacute;nico de causa)</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control mayuscula " id="txtNumeroUnicoCausa" placeholder="NUC">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">N&uacute;mero de Imputados   <span class="requerido">(*)</span> </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtNumeroImputados" placeholder="N&uacute;mero de Imputados" maxlength="3" onchange="validaConsignacion();">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">N&uacute;mero de Ofendidos y/o V&iacute;ctimas<span class="requerido">(*)</span></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtNumeroOfendidos" placeholder="N&uacute;mero de Ofendidos y/o V&iacute;ctimas" maxlength="3">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">N&uacute;mero de Delitos   <span class="requerido">(*)</span></label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" id="txtNumeroDelitos" placeholder="N&uacute;mero de Delitos" maxlength="3">
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbConsignacion">Consignaci&oacute;n   <span class="requerido">(*)</span></label>
                    <div class="col-md-9">
                        <select id="cmbConsignacion" class="form-control" name="cmbConsignacion">
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbAudienciaaaa">Audiencia     <span class="requerido">(*)</span></label>
                    <div class="input-group" style="width: 74%; padding-left: 14px;">
                        <div class="typeahead__container">
                            <div class="typeahead__field">

                                <span class="typeahead__query">
                                    <input class="js-typeahead-input"
                                           name="q"
                                           type="search"
                                           autofocus
                                           autocomplete="off" id="cmbAudienciaAux">
                                    <input type="hidden" id="cmbAudiencia" value="0" >    
                                </span>
                                <span class="typeahead__button">
                                    <button type="submit">
                                        <span class="typeahead__search-icon"></span>
                                    </button>
                                </span>

                            </div>
                        </div>
                    </div> 
                    <!--                <div class="col-md-9">
                                        <select onkeypress="posValue(event)" id="cmbAudiencia" class="form-control" name="cmbAudiencia">
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                                    </div>-->
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Observaciones</label>
                    <div class="col-md-9">
                        <textarea style="resize: none;" rows="5" id="txtObservaciones" class="form-control mayuscula" placeholder="Observaciones"></textarea>
                    </div>
                </div>


                <br>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="submit" class="btn btn-primary" value="Guardar" onclick="saveStepOne()">                                    
                        <input type="submit" class="btn btn-primary" value="Consultar" onclick="changeDivForm(2)">                                                                     
                        <input type="submit" class="btn btn-primary" value="Limpiar" onclick="cleanStepOne()">                                    
                    </div>
                </div>
            </div>

            <div id="divConsulta"  class="form-horizontal" style="display: none">                                                              
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbJuzgadosConsulta">Juzgados</label>
                    <div class="col-md-9">
                        <select id="cmbJuzgadosConsulta" class="form-control" name="cmbJuzgadosConsulta" onchange="comboTipoCarpetaConsulta();">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>  
                <div class="form-group col-lg-12">
                    <label class="control-label col-md-3" for="cmbTipoCarpetaConsulta">Tipo Carpeta</label>
                    <div class="col-md-9">
                        <!--<select id="cmbTipoCarpetaConsulta" class="form-control" name="cmbTipoCarpetaConsulta">-->
                        <select id="cmbTipoCarpetaConsulta" class="form-control" name="cmbTipoCarpetaConsulta" onchange="validaCarpetaConsulta();">
                            <option value="">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3">N&uacute;mero</label>
                    <div class="col-md-9">
                        <input type="text" id="txtNumeroConsulta" class="form-inline" id="txtNumeroConsulta" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="txtAnioConsulta" name="txtAnioConsulta" maxlength="4" placeholder="A&ntilde;o">
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Carpeta de Investigaci&oacute;n</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="txtCarpetaInvestigacionConsulta" placeholder="Carpeta de Investigaci&oacute;n">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">NUC (N&uacute;mero unico de causa)</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" id="txtNumeroUnicoCausaConsulta" placeholder="NUC">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Fecha inicio</label>
                    <div class="col-md-3">
                        <input type="text" id="txtFechaInicio" value="<?php echo $fecha ?>" placeholder="Fecha Inicio">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Fecha fin</label>
                    <div class="col-md-3">
                        <input type="text" id="txtFechaFin" value="<?php echo $fecha ?>" placeholder="Fecha Fin">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="submit" class="btn btn-primary" value="Consultar" onclick="selectStepOne(1)">                                    
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">  
                        <input type="submit" class="btn btn-primary" value="Limpiar" onclick="cleanStepOneConsult()">                                    
                    </div>
                </div>
                <div id="divConsultaGrid" style="display: none" class="col-md-12">
                    <div class="col-md-6"></div>
                    <div class="col-md-6">
                        <div class="form-group col-md-3">
                            <label class="control-label" id="totalReg"></label>
                        </div>

                        <div id="divPaginador" class="form-group col-md-3" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="selectStepOne(0);">
                                <option value="1"></option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="selectStepOne(1);">
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

                <!--<div id="divResultados"></div>-->
            </div>
            <div class="form-group" >
                <div id="divAlertWarningSolicitud" class="alert alert-warning alert-dismissable" style="display:none;">                    
                    <strong>Advertencia!</strong> Mensaje
                </div>
                <div id="divAlertSuccesSolicitud" class="alert alert-success alert-dismissable" style="display:none;">

                    <strong>Correcto!</strong> Mensaje
                </div>
                <div id="divAlertDagerSolicitud" class="alert alert-danger alert-dismissable" style="display:none;">

                    <strong>Error!</strong> Mensaje
                </div>
                <div id="divAlertInfoSolicitud" class="alert alert-info alert-dismissable" style="display:none;">

                    <strong>Informaci&oacute;n!</strong> Mensaje
                </div>
            </div>    
        </div>
    </div>
    <script type="text/javascript">

        $(document).ajaxStart(function () {
            ToggleLoading(2);
        });
        $(document).ajaxStop(function () {
            ToggleLoading(2);
        });
        changeDivForm = function (opc) {
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
            } else if (opc === 2) {
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
            }
        };
        comboJuzgados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarCombo", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgados').empty();
                        $('#cmbJuzgados').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgados').append('<option value="' + object.cveJuzgado + '" data-tipoJuzgado="' + object.cveTipoJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        comboTipoCarpeta = function () {
            var cveTipoJuzgado = $("#cmbJuzgados :selected").attr("data-tipoJuzgado");
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoCarpeta').empty();
                        $('#cmbTipoCarpeta').append('<option value="">Asunto nuevo</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if (cveTipoJuzgado == "1") {
                                    if ((object.cveTipoCarpeta == '1') || (object.cveTipoCarpeta == '2')) {
                                        $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                    }
                                }
                                if (cveTipoJuzgado == "2") {
                                    if ((object.cveTipoCarpeta == '3')) {
                                        $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                    }

                                }
                                if (cveTipoJuzgado == "3") {
                                    if ((object.cveTipoCarpeta == '5')) {
                                        $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                    }

                                }
                                if (cveTipoJuzgado == "4") {
                                    if ((object.cveTipoCarpeta == '4')) {
                                        $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                    }

                                }
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
        comboJuzgadosConsulta = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgadosConsulta').empty();
                        $('#cmbJuzgadosConsulta').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgadosConsulta').append('<option value="' + object.cveJuzgado + '" data-tipoJuzgadoConsulta="' + object.cveTipoJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        comboTipoCarpetaConsulta = function () {
            var cveTipoJuzgadoConsulta = $("#cmbJuzgadosConsulta :selected").attr("data-tipoJuzgadoConsulta");
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoCarpetaConsulta').empty();
                        $('#cmbTipoCarpetaConsulta').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if (cveTipoJuzgadoConsulta == "1") {
                                    if ((object.cveTipoCarpeta == '1') || (object.cveTipoCarpeta == '2')) {
                                        $('#cmbTipoCarpetaConsulta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                    }
                                }
                                if (cveTipoJuzgadoConsulta == "2") {
                                    if ((object.cveTipoCarpeta == '3')) {
                                        $('#cmbTipoCarpetaConsulta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                    }

                                }
                                if (cveTipoJuzgadoConsulta == "3") {
                                    if ((object.cveTipoCarpeta == '5')) {
                                        $('#cmbTipoCarpetaConsulta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                    }

                                }
                                if (cveTipoJuzgadoConsulta == "4") {
                                    if ((object.cveTipoCarpeta == '4')) {
                                        $('#cmbTipoCarpetaConsulta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                    }

                                }
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

        validaConsignacion = function () {
            if ($('#txtNumeroImputados').val() != "" && $('#txtNumeroImputados').val() == '1') {
                var valida = 1;
            } else {

                var valida = 0;
            }
            comboConsignacion(valida);

        };

        comboConsignacion = function (valida) {
            $.ajax({
                type: "POST",
                global: false,
                url: "../fachadas/sigejupe/consignaciones/ConsignacionesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbConsignacion').empty();
                        $('#cmbConsignacion').append('<option value="0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            if (valida == '1') {
                                $.each(datos.data, function (count, object) {
                                    if (object.cveConsignacion != '3') {
                                        $('#cmbConsignacion').append('<option value="' + object.cveConsignacion + '">' + object.desConsignacion + '</option>');
                                    }
                                });
                            } else {
                                $.each(datos.data, function (count, object) {
                                    $('#cmbConsignacion').append('<option value="' + object.cveConsignacion + '">' + object.desConsignacion + '</option>');
                                });

                            }
                        }
                    } catch (e) {
                        alert("Error al cargar consignacion:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de consignacion:\n\n" + otroobj);
                }
            });
        };
        comboAudiencia = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/autoresaudiencias/AutoresaudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "autoresAudienciasOrden", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbAudiencia').empty();
                        $('#cmbAudiencia').append('<option value="0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbAudiencia').append('<option value="' + object.cveCatAudiencia + '">' + object.desCatAudiencia + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar audiencia:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
        };


    //*********************************************************************************************************************
        (function (a) {
            a.fn.validaCampo = function (b) {
                a(this).on({keypress: function (a) {
                        var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                        (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                    }})
            }
        })(jQuery);

        //*********************************************************************************************************************





        descripcionAudiencia = function (id) {
            var strDatos = "accion=autoresAudienciasOrden";
            strDatos += "&cveCatAudiencia=" + id;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/autoresaudiencias/AutoresaudienciasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
    //                alert(json);
                    var json = datos;
    //                json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        $("#cmbAudienciaAux").val(json.data[0].desCatAudiencia);
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        cargaComboAudiencia = function () {

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/autoresaudiencias/AutoresaudienciasFacade.Class.php",
                data: {accion: "autoresAudienciasOrden"},
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = datos;
    //                var json = "";
    //                json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {

                        typeof $.typeahead === 'function' && $.typeahead({
                            input: ".js-typeahead-input",
                            minLength: 0,
                            maxItem: 100,
                            order: "asc",
                            hint: true,
                            searchOnFocus: true,
                            emptyTemplate: 'No hay coincidencias para:  {{query}}',
                            display: ["desCatAudiencia"],
                            correlativeTemplate: true,
    //                            dropdownFilter: "Todas",
                            backdrop: {
                                "background-color": "#fff"
                            },
                            template: '<span>' +
                                    '<span class="desCatAudiencia">{{desCatAudiencia}}</span>' +
                                    '</span>',
                            source: {
                                Resoluciones: {
                                    data: json.data
                                }
                            },
                            callback: {
                                onClickAfter: function (node, a, item, event) {
                                    $("#cmbAudiencia").val(item.cveCatAudiencia);

                                }
                            },
                            debug: true
                        });
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };


        validateConsultStep1 = function () {
            var mensaje = "";
            var error = false;
            if ($('#cmbJuzgadosConsulta').val() == "" && $('#cmbJuzgadosConsulta').val() == "" && $('#cmbJuzgadosConsulta').val() == 0) {
                mensaje += "*Seleccione un juzgado \n";
                error = true;
            }
            if ($('#txtFechaInicio').val() != "" && $('#txtFechaFin').val() == "") {
                mensaje += "*Seleccione una fecha fin \n";
                error = true;
            }
            if ($('#txtFechaInicio').val() == "" && $('#txtFechaFin').val() != "") {
                mensaje += "*Seleccione una fecha inicio \n";
                error = true;
            }
            if (error) {
                alert(mensaje);
            }

            return error;
        };
        validateStep1 = function () {
            var mensaje = "";
            var error = false;
            if ($('#cmbJuzgados').val() == "" || $('#cmbJuzgados').val() == "0") {
                mensaje += "*Seleccione un juzgado \n";
                error = true;
            }
            if ($('#cmbTipoCarpeta').val() != 0) {
                if ($('#txtNumero').val() == "" || $('#txtNumero').val() == "0") {
                    mensaje += "*Ingrese el n\u00famero de la carpeta \n";
                    error = true;
                }

                if ($('#txtAnio').val() == "" || $('#txtAnio').val() == "0") {
                    mensaje += "*Ingrese el a\u00f1o de la carpeta \n";
                    error = true;
                }
                if ($('#txtAnio').val().length < 4) {
                    mensaje += "*El  a\u00f1o debe ser de 4 d\u00edgitos\n";
                    error = true;
                }
            } else {
                if (($('#txtCarpetaInvestigacion').val() == "" || $('#txtCarpetaInvestigacion').val() == "0") && ($('#txtNumeroUnicoCausa').val() == "" || $('#txtNumeroUnicoCausa').val() == 0)) {
                    mensaje += "*Ingrese la carpeta de investigaci\u00f3n y/o NUC \n";
                    error = true;
                }
            }
            if ($('#txtNumeroImputados').val() == "" || $('#txtNumeroImputados').val() == "0") {
                mensaje += "*Ingrese el n\u00famero de imputados \n";
                error = true;
            }

            if ($('#txtNumeroOfendidos').val() == "" || $('#txtNumeroOfendidos').val() == "0") {
                mensaje += "*Ingrese el n\u00famero de ofendidos \n";
                error = true;
            }

            if ($('#txtNumeroDelitos').val() == "" || $('#txtNumeroDelitos').val() == "0") {
                mensaje += "*Ingrese n\u00famero de delitos \n";
                error = true;
            }
            if ($('#cmbConsignacion').val() == "" || $('#cmbConsignacion').val() == "0") {
                mensaje += "*Seleccione consignaci\u00f3n \n";
                error = true;
            }
            if ($('#cmbAudiencia').val() == "" || $('#cmbAudiencia').val() == "0") {
                mensaje += "*Ingrese tipo de audiencia \n";
                error = true;
            }
            if (error) {
                alert(mensaje);
            }

            return error;
        };
        saveStepOne = function () {
            var error = false;
            if (!validateStep1()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/solicitudesaudiencias/SolicitudesaudienciasFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "guardar",
                        idSolicitudAudiencia: $('#hddIdSolicitudAudiencia').val(),
                        cveJuzgado: $('#cmbJuzgados').val(),
                        cveTipoCarpeta: $('#cmbTipoCarpeta').val(),
                        numero: $('#txtNumero').val(),
                        anio: $('#txtAnio').val(),
                        carpetaInv: $('#txtCarpetaInvestigacion').val().toUpperCase(),
                        nuc: $('#txtNumeroUnicoCausa').val().toUpperCase(),
                        numImputados: $('#txtNumeroImputados').val(),
                        numOfendidos: $('#txtNumeroOfendidos').val(),
                        numDelitos: $('#txtNumeroDelitos').val(),
                        cveConsignacion: $('#cmbConsignacion').val(),
                        cveCatAudiencia: $('#cmbAudiencia').val(),
                        observaciones: $('#txtObservaciones').val().toUpperCase()
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos.status == 'Ok') {
                            $("#divAlertSuccesSolicitud").html("");
                            $("#divAlertSuccesSolicitud").html("La solicitud se guardo de forma correcta");
                            $("#divAlertSuccesSolicitud").show("");
                            setTimeAlert("divAlertSuccesSolicitud");
                            parent.$('#hddIdSolicitudAudiencia').val(datos.resultado[0].idSolicitudAudiencia);
                            $('#hddIdSolicitudAudiencia').val(datos.resultado[0].idSolicitudAudiencia);
                            $('#cmbJuzgados').val(datos.resultado[0].cveJuzgado).trigger('change');
                            $('#cmbTipoCarpeta').val(datos.resultado[0].cveTipoCarpeta);
                            $('#txtNumero').val(datos.resultado[0].numero);
                            $('#txtAnio').val(datos.resultado[0].anio);
                            $('#txtCarpetaInvestigacion').val(datos.resultado[0].carpetaInv);
                            $('#txtNumeroUnicoCausa').val(datos.resultado[0].nuc);
                            $('#txtNumeroImputados').val(datos.resultado[0].numImputados);
                            $('#txtNumeroOfendidos').val(datos.resultado[0].numOfendidos);
                            $('#txtNumeroDelitos').val(datos.resultado[0].numDelitos);
                            $('#cmbConsignacion').val(datos.resultado[0].cveConsignacion);
                            $('#cmbAudiencia').val(datos.resultado[0].cveCatAudiencia);
                            descripcionAudiencia(datos.resultado[0].cveCatAudiencia);
                            $('#txtObservaciones').val(datos.resultado[0].observaciones);
                        } else {
                            $("#divAlertWarningSolicitud").html("");
                            $("#divAlertWarningSolicitud").html(datos.Error);
                            $("#divAlertWarningSolicitud").show("");
                            setTimeAlert("divAlertWarningSolicitud");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                    }
                });
            } else {
                error = false;
            }
            return error;
        };


        getPaginas = function (pag, cantReg) {
            parent.$('#hddIdSolicitudAudiencia').val("");
            $('#hddIdSolicitudAudiencia').val("");
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesaudiencias/SolicitudesaudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "getPaginas",
                    idSolicitudAudiencia: $('#hddIdSolicitudAudiencia').val(),
                    cveJuzgado: $('#cmbJuzgadosConsulta').val(),
                    cveTipoCarpeta: $('#cmbTipoCarpetaConsulta').val(),
                    numero: $('#txtNumeroConsulta').val(),
                    anio: $('#txtAnioConsulta').val(),
                    carpetaInv: $('#txtCarpetaInvestigacionConsulta').val(),
                    nuc: $('#txtNumeroUnicoCausaConsulta').val(),
                    activo: 'S',
                    fechaInicio: $('#txtFechaInicio').val(),
                    fechaFin: $('#txtFechaFin').val(),
                    cantxPag: cantReg
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
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
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };

        selectStepOne = function (pagAux) {
            var error = false;
            if (!validateConsultStep1()) {
                parent.$('#hddIdSolicitudAudiencia').val("");
                $('#hddIdSolicitudAudiencia').val("");
                var pag = 0;
                if (pagAux == 0) {
                    pag = $("#cmbPaginacion").val();
                } else {
                    pag = 1;
                }
                var cantReg = $("#cmbNumReg").val();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/solicitudesaudiencias/SolicitudesaudienciasFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar",
                        idSolicitudAudiencia: $('#hddIdSolicitudAudiencia').val(),
                        cveJuzgado: $('#cmbJuzgadosConsulta').val(),
                        cveTipoCarpeta: $('#cmbTipoCarpetaConsulta').val(),
                        numero: $('#txtNumeroConsulta').val(),
                        anio: $('#txtAnioConsulta').val(),
                        carpetaInv: $('#txtCarpetaInvestigacionConsulta').val(),
                        nuc: $('#txtNumeroUnicoCausaConsulta').val(),
                        activo: 'S',
                        fechaInicio: $('#txtFechaInicio').val(),
                        fechaFin: $('#txtFechaFin').val(),
                        pag: pag,
                        cantxPag: cantReg
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos.totalCount > 0) {
                            var table = "";
                            table += '<table id="tblResultados" class="table table-hover table-striped table-bordered">';
                            table += '<thead>';
                            table += '<tr>';
                            table += '<th>No</th>';
                            table += '<th>Estatus</th>';
                            table += '<th>Juzgado</th>';
                            table += '<th>Carpeta</th>';
                            table += '<th>N&uacute;mero</th>';
                            table += '<th>CarpetaInv</th>';
                            table += '<th>NUC</th>';
                            table += '<th>Audiencia</th>';
                            table += '<th>Registro</th>';
                            table += '</tr>';
                            table += '</thead>';
                            table += "<tbody>";
                            for (var i = 0; i < datos.totalCount; i++) {
                                table += "<tr>";
                                table += "<td onclick=\"consutaId('" + datos.data[i].idSolicitudAudiencia + "','" + datos.data[i].desJuzgado + "')\" >" + (i + 1) + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].desEstatusSolictud + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].desJuzgado + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].desTipoCarpeta + "</td>";
                                if (datos.data[i].numero != "" && datos.data[i].numero != null) {
                                    table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].numero + "/" + datos.data[i].anio + "</td>";
                                } else {
                                    table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >N/A</td>";
                                }
                                if (datos.data[i].carpetaInv != "" && datos.data[i].carpetaInv != null) {
                                    table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].carpetaInv + "</td>";
                                } else {
                                    table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >N/A</td>";
                                }
                                if (datos.data[i].nuc != "" && datos.data[i].nuc != null) {
                                    table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].nuc + "</td>";
                                } else {
                                    table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >N/A</td>";
                                }
                                table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].desAudiencia + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idSolicitudAudiencia + ")' >" + datos.data[i].fechaRegistro + "</td>";
                                table += "</tr>";
                            }
                            table += "</tbody>";
                            table += "</table>";
                            $("#divHideForm").hide("");
                            $("#divConsultaGrid").show("");
                            $('#divResultados').html(table);
                            $("#tblResultados").DataTable({paging: false});
                            getPaginas(datos.pagina, cantReg);
                            changeDivForm(2);
    //                        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Registro de Oficios</span> - <span style='text-decoration: underline; cursor:pointer;' onclick='changeDivForm(1); $(\"#cmbPaginacion\").val(1)'>Consulta de Oficios</span> - Resultados");
                        } else {
                            $("#divResultados").html("");
                            $("#divConsultaGrid").hide("");
                            $("#divAlertWarningSolicitud").html("");
                            $("#divAlertWarningSolicitud").html("No se encontraron resultados");
                            $("#divAlertWarningSolicitud").show("");
                            setTimeAlert("divAlertWarningSolicitud");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                    }
                });
            } else {
                error = false;
            }
            return error;
        };

        consutaId = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesaudiencias/SolicitudesaudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "seleccionar",
                    idSolicitudAudiencia: id,
                    activo: 'S',
                    cantxPag: 1,
                    pag: 1
                },
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    ToggleLoading(2);

                    if (datos.totalCount > 0) {
                        changeDivForm(1);
                        parent.$('#hddIdSolicitudAudiencia').val(datos.data[0].idSolicitudAudiencia);
                        $('#hddIdSolicitudAudiencia').val(datos.data[0].idSolicitudAudiencia);
                        $('#cmbJuzgados').val(datos.data[0].cveJuzgado).trigger('change');
                        $('#cmbTipoCarpeta').val(datos.data[0].cveTipoCarpeta);
                        $('#txtNumero').val(datos.data[0].numero);
                        $('#txtAnio').val(datos.data[0].anio);
                        $('#txtCarpetaInvestigacion').val(datos.data[0].carpetaInv);
                        $('#txtNumeroUnicoCausa').val(datos.data[0].nuc);
                        $('#txtNumeroImputados').val(datos.data[0].numImputados);
                        validaConsignacion();
                        $('#txtNumeroOfendidos').val(datos.data[0].numOfendidos);
                        $('#txtNumeroDelitos').val(datos.data[0].numDelitos);
                        $('#cmbConsignacion').val(datos.data[0].cveConsignacion);
                        $('#cmbAudiencia').val(datos.data[0].cveCatAudiencia);
                        $('#cmbAudienciaAux').val("");
                        descripcionAudiencia(datos.data[0].cveCatAudiencia);
                        $('#txtObservaciones').val(datos.data[0].observaciones);
                        parent.tieneAudiencia();
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });


        };

        validaCarpeta = function () {
            if ($('#cmbTipoCarpeta').val() == 0) {
                $('#txtNumero').val("");
                $('#txtAnio').val("");
                $('#txtNumero').attr('disabled', 'disabled');
                $('#txtAnio').attr('disabled', 'disabled');
                $('#txtCarpetaInvestigacion').removeAttr('disabled');
                $('#txtNumeroUnicoCausa').removeAttr('disabled');
            } else {
                $('#txtNumero').removeAttr('disabled');
                $('#txtAnio').removeAttr('disabled');
                $('#txtCarpetaInvestigacion').val("");
                $('#txtNumeroUnicoCausa').val("");
                $('#txtCarpetaInvestigacion').attr('disabled', 'disabled');
                $('#txtNumeroUnicoCausa').attr('disabled', 'disabled');
            }
        };
        validaCarpetaConsulta = function () {
            if ($('#cmbTipoCarpetaConsulta').val() == 0) {
                $('#txtNumeroConsulta').val("");
                $('#txtAnioConsulta').val("");
                $('#txtNumeroConsulta').attr('disabled', 'disabled');
                $('#txtAnioConsulta').attr('disabled', 'disabled');
                $('#txtCarpetaInvestigacionConsulta').removeAttr('disabled');
                $('#txtNumeroUnicoCausaConsulta').removeAttr('disabled');
            } else {
                $('#txtNumeroConsulta').removeAttr('disabled');
                $('#txtAnioConsulta').removeAttr('disabled');
                $('#txtCarpetaInvestigacion').val("");
                $('#txtNumeroUnicoCausa').val("");
                $('#txtCarpetaInvestigacionConsulta').attr('disabled', 'disabled');
                $('#txtNumeroUnicoCausaConsulta').attr('disabled', 'disabled');
            }
        };
        cleanStepOne = function () {
            parent.$('#hddIdSolicitudAudiencia').val("");
            $('#hddIdSolicitudAudiencia').val("");
            $('#cmbJuzgados').val("").trigger('change');

            $('#cmbTipoCarpeta').val("");
            $('#txtNumero').val("");
            $('#txtAnio').val("");
            $('#txtCarpetaInvestigacion').val("");
            $('#txtNumeroUnicoCausa').val("");
            $('#txtNumeroImputados').val("");
            $('#txtNumeroOfendidos').val("");
            $('#txtNumeroDelitos').val("");
            $('#cmbConsignacion').val(0);
            $('#cmbAudiencia').val(0);
            $('#cmbAudienciaAux').val("");
            $('#txtObservaciones').val("");
            parent.$('#divDatosAudiencias').html("");
            parent.$('#divDatosAudiencias').hide("");

    //        validaCarpeta();
        };
        cleanStepOneConsult = function () {
            parent.$('#hddIdSolicitudAudiencia').val("");
            $('#hddIdSolicitudAudiencia').val("");
            $('#cmbJuzgadosConsulta').val("").trigger('change');
            $('#cmbTipoCarpetaConsulta').val("");
            $('#txtNumeroConsulta').val("");
            $('#txtAnioConsulta').val("");
            $('#txtFechaInicio').val("<?php echo $fecha ?>");
            $('#txtFechaFin').val("<?php echo $fecha ?>");
            $('#txtCarpetaInvestigacionConsulta').val("");
            $('#txtNumeroUnicoCausaConsulta').val("");
            $('#divResultados').html("");
            $('#divResultados').html("");
            $("#divConsultaGrid").hide("");
    //        validaCarpetaConsulta();
        };

        $(function () {
            var currentDate = new Date();
            var maxDate = currentDate.setDate(currentDate.getDate());
            $("#txtFechaInicio").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
                maxDate: maxDate
            });
            $("#txtFechaFin").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
                maxDate: maxDate
            });


    //        
    //        $("#txtFechaInicio").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy"
    //
    //        });
    //        $("#txtFechaFin").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy"
    //        });
            comboJuzgados();
            //comboTipoCarpeta();
            comboConsignacion(0);
            cargaComboAudiencia();
            comboJuzgadosConsulta();
    //        comboTipoCarpetaConsulta();
            $('#txtNumeroImputados').validaCampo('0123456789');
            $('#txtNumeroOfendidos').validaCampo('0123456789');
            $('#txtNumeroDelitos').validaCampo('0123456789');
            $('#txtNumero').validaCampo('0123456789');
            $('#txtAnio').validaCampo('0123456789');
            $('#txtNumeroConsulta').validaCampo('0123456789');
            $('#txtAnioConsulta').validaCampo('0123456789');

            if ($('#hddIdSolicitudAudiencia').val() != "") {
                consutaId($('#hddIdSolicitudAudiencia').val());
            }

        });

    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>