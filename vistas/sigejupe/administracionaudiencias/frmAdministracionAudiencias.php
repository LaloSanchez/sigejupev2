<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    date_default_timezone_set('America/Mexico_City');
    $cveAdscripcion = $_SESSION["cveAdscripcion"];
    $fecha = date("Y/m/d");
    $fecha = strtotime($fecha);
    $fecha = $fecha + (3600 * 24); //add seconds of one day
    $fecha = date("Y/m/d", $fecha);
    $fechaHora = date("d/m/Y");
    ?>
    <style>
        .requerido {
            color: darkred;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                ADMINISTRACI&Oacute;N DE AUDIENCIAS
                <input type="hidden" readonly id="hddIdAudiencia" name="hddIdAudiencia">
                <input type="hidden" readonly id="hddIdJuzgadorAudiencia1" name="hddIdJuzgadorAudiencia1">
                <input type="hidden" readonly id="hddIdJuzgadorAudiencia2" name="hddIdJuzgadorAudiencia2">
                <input type="hidden" readonly id="hddIdJuzgadorAudiencia3" name="hddIdJuzgadorAudiencia3">
            </h5>
        </div>
        <br><div class="form-group">
            <div id="divAlertWarningAudiencias" class="alert alert-warning alert-dismissable" style="display:none;">                    
                <strong>Advertencia!</strong> Mensaje
            </div>
            <div id="divAlertSuccesAudiencias" class="alert alert-success alert-dismissable" style="display:none;">

                <strong>Correcto!</strong> Mensaje
            </div>
            <div id="divAlertDagerAudiencias" class="alert alert-danger alert-dismissable" style="display:none;">

                <strong>Error!</strong> Mensaje
            </div>
            <div id="divAlertInfoAudiencias" class="alert alert-info alert-dismissable" style="display:none;">

                <strong>Informaci&oacute;n!</strong> Mensaje
            </div>
        </div><br>
        <div class="panel-body">
            <!--------------------AQUI COMIEZA EL CUERPO DEL FORMULARIO------------------>
            <div id="divFormulario" class="form-horizontal">
                <div class="form-group col-xs-12">       
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <label class="control-label col-md-1">Juzgado:</label>
                        <select name="juzgado" id="juzgado" class="form-control cmbJuzgados" onchange="comboJuzgadoresBusqueda();
                                    comboSalasBusqueda();"></select>
                        <br>
                        <div class="clearfix"></div>
                        <div id="fecha"></div>
                        <button id="recargar" class="btn btn-primary" onclick="cargaInfo();"><span class="glyphicon glyphicon-refresh"></span></button>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                        <p class="col-lg-12" style="color:darkred;">
                            Los campos marcados con (*) son obligatorios.
                        </p>
                        <div class="form-group">
                            <label class="control-label col-md-3">Juzgado <span class="requerido">(*)</span></label>
                            <div class="col-md-9">
                                <select  disabled readonly  class="form-control" id="cmbJuzgados" name="cmbJuzgados">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tipo Carpeta <span class="requerido">(*)</span></label>
                            <div class="col-md-9">
                                <select disabled readonly name="cmbTipoCarpeta" id="cmbTipoCarpeta" class=" form-control">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control-static" size="5" name="idAudiencia" id="idAudiencia" readonly="readonly" disabled="disabled"/>
                            <input type="hidden" class="form-control" name="ffinalConsulta" id="ffinalConsulta" readonly="readonly" disabled="disabled"/>
                            <label class="control-label col-md-3">Num <span class="requerido">(*)</span></label>
                            <div class="col-md-9">
                                <input type="text" disabled readonly class="form-control-static" size="5" name="numero" id="numero"/>
                                <input type="text" disabled readonly class="form-control-static" size="4" name="anio" id="anio"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Desahogar en <span class="requerido">(*)</span></label>
                            <div class="col-md-9">
                                <select class="form-control" id="cmbJuzgadosDesahoga" name="cmbJuzgadosDesahoga" onchange="comboSalas();
                                            comboJuzgadores('cmbJuzgador1');
                                            comboJuzgadores('cmbJuzgador2');
                                            comboJuzgadores('cmbJuzgador3');">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Sala <span class="requerido">(*)</span></label>
                            <div class="col-md-9">
                                <select name="cmbSala" id="cmbSala" class="form-control">
                                    <option value="0">Seleccione una opcion</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Estatus <span class="requerido">(*)</span></label>
                            <div class="col-md-9">
                                <select name="cmbEstatus" id="cmbEstatus" class="form-control">
                                    <option value="0">Seleccione una opcion</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fecha Inicial <span class="requerido">(*)</span></label>
                            <div class="col-md-5">
                                <input type="text" readonly class="form-control" name="txtFechaInicial" id="txtFechaInicial"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fecha Final <span class="requerido">(*)</span></label>
                            <div class="col-md-5">
                                <input type="text" readonly class="form-control" name="txtFechaFinal" id="txtFechaFinal"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Audiencias <span class="requerido">(*)</span></label>
                            <div class="col-md-9">
                                <select name="cmbCatAudiencia" id="cmbCatAudiencia" class=" form-control">
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label  col-md-3">Juzgador<span class="requerido">(*)</span></label>
                            <div class="col-md-5">
                                <select name="cmbJuzgador1" id="cmbJuzgador1" class="form-control"></select>
                            </div>
                            <div class="col-md-3" id="divFunciones1" style="display:none;">
                                <select name="cmbFunciones1" id="cmbFunciones1" class="form-control"></select>
                            </div>
                        </div>
                        <div id="divFunciones" style="display:none;">
                            <div class="form-group">
                                <label class="control-label  col-md-3">Juzgador<span class="requerido">(*)</span></label>
                                <div class="col-md-5">
                                    <select name="cmbJuzgador2" id="cmbJuzgador2" class="form-control"> </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="cmbFunciones2" id="cmbFunciones2" class="form-control"></select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label  col-md-3">Juzgador<span class="requerido">(*)</span></label>
                                <div class="col-md-5">
                                    <select name="cmbJuzgador3" id="cmbJuzgador3" class="form-control"></select>
                                </div>
                                <div class="col-md-3">
                                    <select name="cmbFunciones3" id="cmbFunciones3" class="form-control"></select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button style="display:none;" type="button" class="btn btn-primary" name="guardar" id="guardar" onclick="guardar();">Guardar</button>
                            <button style="display:none;" type="button" class="btn btn-primary" name="imprimir" id="imprimir" onclick="imprimir();" >Imprimir</button>
                            <button type="button" class="btn btn-primary" name="limpiar" id="limpiar" onclick="limpiarGeneral();">Limpiar</button>
                        </div>
                    </div>
                </div>
                <div class="form-group col-xs-12">
                    <div style="display:none;" class="alert alert-dismissable mensaje"></div>
                </div>
                <div class="form-group col-xs-12" id="divAcordeon" style="display:none">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#audiencias">AUDIENCIAS</a></li>
                        <li><a data-toggle="tab" href="#jueces">JUECES</a></li>
                        <li><a data-toggle="tab" href="#salas">SALAS</a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="audiencias" class="tab-pane fade in active">
                            <div class="col-md-12">
                                <div class="well with-header">
                                    <div class="col-sm-12 text-center fechaTabla"></div>
                                    <table  class="table table-striped table-hover table-bordered" id="tablaAudiencias">
                                        <thead class="bordered-darkorange">
                                            <tr>
                                                <th class="text-center">HORARIO</th>
                                                <th class="text-center">AUDIENCIA</th>
                                                <th class="text-center">CAUSA</th>
                                                <th class="text-center">TIPO CARPETA</th>
                                                <th class="text-center">SALA</th>
                                                <th class="text-center">DETENIDO</th>
                                                <th class="text-center">TIPO</th>
                                                <th class="text-center">ESTATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-sm-7">
                                <div class="form-group">
                                </div>
                            </div>
                        </div>
                        <div id="jueces" class="tab-pane fade">
                            <div class="col-md-12">
                                <select style="width: 50%" name="cmbJuzgadoresBusqueda" id="cmbJuzgadoresBusqueda" onchange="cargaInfoJuzgador();" > </select>
                                <div class="well with-header">
                                    <div class="col-sm-12 text-center fechaTabla"></div>
                                    <table  class="table table-striped table-hover table-bordered" id="tablaJuzgador">
                                        <thead class="bordered-darkorange">
                                            <tr>
                                                <th class="text-center">HORARIO</th>
                                                <th class="text-center">AUDIENCIA</th>
                                                <th class="text-center">CAUSA</th>
                                                <th class="text-center">TIPO CARPETA</th>
                                                <th class="text-center">SALA</th>
                                                <th class="text-center">DETENIDO</th>
                                                <th class="text-center">TIPO</th>
                                                <th class="text-center">ESTATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                        </div>
                        <div id="salas" class="tab-pane fade">
                            <div class="col-md-12">
                                <select style="width: 500px" name="cmbSalaBusqueda" id="cmbSalaBusqueda" onchange="cargarInfoSalas();" >
                                </select>
                                <div class="well with-header">
                                    <div class="col-sm-12 text-center fechaTabla"></div>
                                    <table  class="table table-striped table-hover table-bordered" id="tablaSalas">
                                        <thead class="bordered-darkorange">
                                            <tr>
                                                <th class="text-center">HORARIO</th>
                                                <th class="text-center">AUDIENCIA</th>
                                                <th class="text-center">CAUSA</th>
                                                <th class="text-center">TIPO CARPETA</th>
                                                <th class="text-center">SALA</th>
                                                <th class="text-center">DETENIDO</th>
                                                <th class="text-center">TIPO</th>
                                                <th class="text-center">ESTATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-12"></div> 
            <br><br>
        </div>
    </div>
    <!--------------------AQUI TERMINA EL CUERPO DEL FORMULARIO------------------>


    <script type="text/javascript">

        ////////////////////////////////////////////////////////
        /////////////////FUNCIONES DE JAVASCRIPT////////////////
        ////////////////////////////////////////////////////////
        juzgadoDistrito = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", cveJuzgado: <?php echo $cveAdscripcion; ?>, activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {

                        if (datos.data[0].cveTipojuzgado == "5") {
                            comboJuzgadosSala();
                        } else {
                            var distrito = datos.data[0].cveDistrito;
                            comboJuzgados(distrito);
                        }

                    } catch (e) {
                        //                    alert("Error al cargar Juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgados:\n\n" + otroobj);
                }
            });
        };

        comboJuzgados = function (distrito) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "distrito", cveDistrito: distrito, activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('.cmbJuzgados').empty();
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('.cmbJuzgados').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                            $(".cmbJuzgados").val(<?php echo $cveAdscripcion; ?>).trigger('change');
                        }
                    } catch (e) {
                        //                    alert("Error al cargar Juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgados distritos:\n\n" + otroobj);
                }
            });
        };

        comboJuzgadosSala = function () {
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
                        $('.cmbJuzgados').empty();
                        $('.cmbJuzgados').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('.cmbJuzgados').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                            $(".cmbJuzgados").val(<?php echo $cveAdscripcion; ?>).trigger('change');
                        }
                    } catch (e) {
                        //                    alert("Error al cargar juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };

        comboJuzgadosDesahoga = function (campo) {
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
                        $("#" + campo + "").empty();
                        $("#" + campo + "").append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $("#" + campo + "").append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        //                    alert("Error al cargar juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        comboJuzgadosDes = function (campo) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $("#" + campo + "").empty();
                        $("#" + campo + "").append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $("#" + campo + "").append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        //                    alert("Error al cargar juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };

        comboTiposCarpetas = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoCarpeta').empty();
                        $('#cmbTipoCarpeta').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                            });
                        }
                    } catch (e) {
                        //                    alert("Error al cargar Tipo Carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Tipo Carpeta:\n\n" + otroobj);
                }
            });
        };

        comboSalas = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/salas/SalasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "selectSalasJuzgado", cveJuzgado: $("#cmbJuzgadosDesahoga").val()},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbSala').empty();
                        $('#cmbSala').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if (object.activo == "S") {
                                    $('#cmbSala').append('<option value="' + object.cveSala + '">' + object.desSala + '</option>');
                                } else {
                                    $('#cmbSala').append('<option value="' + object.cveSala + '">' + object.desSala + '<b> - INACTIVA </b></option>');
                                }
                            });
                        }
                    } catch (e) {
                        //                    alert("Error al cargar Salas:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Tipo Carpeta:\n\n" + otroobj);
                }
            });
        };

        comboSalasBusqueda = function () {
            var cveJuzgado = $("#juzgado").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/salas/SalasFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultarRelacion", variable: cveJuzgado},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbSalaBusqueda').empty();
                        $('#cmbSalaBusqueda').append('<option value="0">Seleccione una opcion</option>');
                        if (datos != "") {
                            $.each(datos.salas, function (count, object) {
                                if (object.activo == "S") {
                                    $('#cmbSalaBusqueda').append('<option value="' + object.cveSala + '">' + object.desSala + '</option>');
                                } else {
                                    $('#cmbSalaBusqueda').append('<option value="' + object.cveSala + '">' + object.desSala + '<b> - INACTIVA </b></option>');
                                }
                            });
                        }
                    } catch (e) {
                        //                    alert("Error al cargar Tipo Carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de salas consulta:\n\n" + otroobj);
                }
            });
        };

        comboEstatus = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estatusaudiencias/EstatusaudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbEstatus').empty();
                        $('#cmbEstatus').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbEstatus').append('<option value="' + object.cveEstatusAudiencia + '">' + object.desEstatusAudiencia + '</option>');
                            });
                        }
                    } catch (e) {
                        //                    alert("Error al cargar Estatus:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Estatus:\n\n" + otroobj);
                }
            });
        };

        comboCatAudiencias = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/cataudiencias/CataudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "selectCataudienciasCat", activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbCatAudiencia').empty();
                        $('#cmbCatAudiencia').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbCatAudiencia').append('<option value="' + object.cveCatAudiencia + '">' + object.desCatAudiencia + '</option>');
                            });
                        }
                    } catch (e) {
                        //                    alert("Error al cargar Tipo Carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Tipo Carpeta:\n\n" + otroobj);
                }
            });
        };

        comboJuzgadores = function (campo) {
            var cveJuzgado = $("#cmbJuzgadosDesahoga").val();
            var datos = "accion=consultarJuzgadores";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                //            url: "../fachadas/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: datos,
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        //                    $('#cmbJuzgador').empty();
                        $("#" + campo + "").empty();
                        $("#" + campo + "").append('<option value="0">Seleccione una opcion</option>');
                        if (datos.data.length > 0) {
                            $.each(datos.data, function (count, object) {
                                $("#" + campo + "").append('<option value="' + object.idJuzgador + '">' + object.nombre + ' ' + object.paterno + ' ' + object.materno + '</option>');
                            });
                        }
                    } catch (e) {
                        //                    alert("Error al cargar Tipo Carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Tipo Carpeta:\n\n" + otroobj);
                }
            });
        };

        comboJuzgadoresBusqueda = function () {
            var cveJuzgado = $("#juzgado").val();
            var datos = "accion=consultaJuzgadoresAdmin&cveJuzgado=" + cveJuzgado;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadoresjuzgados/JuzgadoresjuzgadosFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: datos,
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgadoresBusqueda').empty();
                        $('#cmbJuzgadoresBusqueda').append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgadoresBusqueda').append('<option value="' + object.idJuzgador + '">' + object.nombre + '</option>');
                            });
                        }
                    } catch (e) {
                        //                    alert("Error al cargar audiencia:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado consulta:\n\n" + otroobj);
                }
            });
        };

        combofuncionesJuzgadores = function (campo) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/funcionesjuzgadores/FuncionesjuzgadoresFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $("#" + campo + "").empty();
                        $("#" + campo + "").append('<option value="0">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $("#" + campo + "").append('<option value="' + object.cveFuncionJuzgador + '">' + object.desFuncionJuzgador + '</option>');
                            });
                        }
                    } catch (e) {
                        //                    alert("Error al cargar funciones:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Tipo Carpeta:\n\n" + otroobj);
                }
            });
        };

        cargaInfo = function () {
            limpiar();
            var fecha = $('#fecha').data('date');
            $('.fechaTabla').empty();
            $('.fechaTabla').append("<h3>" + fecha + "</h3>");
            $("#tablaAudiencias tbody").empty();
            var tabla = "";
            var juzgado = $("#juzgado").val();
            var res = fecha.split("/");
            fecha = res[2] + "-" + res[1] + "-" + res[0];
            var datos = "";
            var array = [];
            var count = [];
            if (juzgado == 0) {
                datos = "accion=selectAudienciasHorarios&fechaInicial=" + fecha + "&activo=S";
            } else {
                datos = "accion=selectAudienciasHorarios&fechaInicial=" + fecha + "&cveJuzgado=" + juzgado + "&activo=S";
            }
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                async: false,
                global: false,
                dataType: "json",
                data: datos,
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    $("#divAcordeon").hide("");
                    if (datos.status == "ok") {
                        $("#divAcordeon").show("");
                        for (var i = 0; i < datos.informacion.length; i++) {
                            if (datos.informacion[i].data == "") {
                                tabla += "<tr>";
                                tabla += "<td align='center' width='10%'>" + datos.informacion[i].horario + "</td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "</tr>";
                            } else {
                                for (var x = 0; x < datos.informacion[i].data.length; x++) {
                                    for (var j = 0; j < datos.informacion[i].data[x].audienciaJuzgador.length; j++) {
                                        array.push(datos.informacion[i].data[x].audienciaJuzgador[j].idJuzgador);
                                    }
                                    tabla += "<tr onclick='seleccionaId(" + datos.informacion[i].data[x].idAudiencia + ")' style='cursor:pointer'>";
                                    tabla += "<td align='center' width='10%'>" + datos.informacion[i].data[x].fechaInicial.substr(11, 5) + " - " + datos.informacion[i].data[x].fechaFinal.substr(11, 5) + "</td>";
                                    tabla += "<td width='35%'>";
                                    tabla += datos.informacion[i].data[x].cataudiencias.descripcion + "</br>";
                                    if (datos.informacion[i].data[x].juzgadores.length != 0) {
                                        $.each(datos.informacion[i].data[x].juzgadores, function (keya, vala) {
                                            count.push(vala.nombre);
                                        });
                                        if (count.length > 1) {
                                            tabla += "<b>JUECES:</b></br>";
                                        } else {
                                            tabla += "<b>JUEZ:</b></br>";
                                        }
                                        count = [];
                                        $.each(datos.informacion[i].data[x].juzgadores, function (keya, vala) {
                                            tabla += vala.nombre + "</br>";
                                        });
                                        tabla += "</td>";
                                    } else {
                                        tabla += "<b>JUEZ: NO SE ENCONTRO JUZGADOR</b></br>";
                                    }
                                    tabla += "<td>" + datos.informacion[i].data[x].numero + "/" + datos.informacion[i].data[x].anio + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].tiposcarpetas.descripcion + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].salas.descripcion + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].detenido + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].tiposaudiencias.desTipoAudiencia + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].estatusAudiencia.descripcion + "</td>";
                                    tabla += "</tr>";
                                }
                            }
                        }
                    } else {
                        $("#divAlertWarningAudiencias").html("");
                        $("#divAlertWarningAudiencias").html("No se encontraron audiencias para el dia seleccionado");
                        $("#divAlertWarningAudiencias").show("");
                        setTimeAlert("divAlertWarningAudiencias");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
            $("#tablaAudiencias tbody").append(tabla);
        }

        cargaInfoJuzgador = function () {
            var juzgador = $("#cmbJuzgadoresBusqueda").val();
            var fecha = $('#fecha').data('date');
            $("#tablaJuzgador tbody").empty();
            var tabla = "";
            var res = fecha.split("/");
            fecha = res[2] + "-" + res[1] + "-" + res[0];
            var array = [];
            var count = [];
            var datos = "accion=selecAdmintAudienciasJuzgador&variable=" + juzgador + "&fechaInicial=" + fecha + "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                async: false,
                global: false,
                dataType: "json",
                data: datos,
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    //                $("#divAcordeon").hide("");
                    if (datos.status == "ok") {
                        //                    $("#divAcordeon").show("");
                        for (var i = 0; i < datos.informacion.length; i++) {
                            if (datos.informacion[i].data == "") {
                                tabla += "<tr>";
                                tabla += "<td align='center' width='10%'>" + datos.informacion[i].horario + "</td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "</tr>";
                            } else {
                                for (var x = 0; x < datos.informacion[i].data.length; x++) {
                                    for (var j = 0; j < datos.informacion[i].data[x].audienciaJuzgador.length; j++) {
                                        array.push(datos.informacion[i].data[x].audienciaJuzgador[j].idJuzgador);
                                    }
                                    tabla += "<tr onclick='seleccionaId(" + datos.informacion[i].data[x].idAudiencia + ")' style='cursor:pointer'>";
                                    tabla += "<td align='center' width='10%'>" + datos.informacion[i].data[x].fechaInicial.substr(11, 5) + " - " + datos.informacion[i].data[x].fechaFinal.substr(11, 5) + "</td>";
                                    tabla += "<td width='35%'>";
                                    tabla += datos.informacion[i].data[x].cataudiencias.descripcion + "</br>";
                                    if (datos.informacion[i].data[x].juzgadores.length != 0) {
                                        $.each(datos.informacion[i].data[x].juzgadores, function (keya, vala) {
                                            count.push(vala.nombre);
                                        });
                                        if (count.length > 1) {
                                            tabla += "<b>JUECES:</b></br>";
                                        } else {
                                            tabla += "<b>JUEZ:</b></br>";
                                        }
                                        count = [];
                                        $.each(datos.informacion[i].data[x].juzgadores, function (keya, vala) {
                                            tabla += vala.nombre + "</br>";
                                        });
                                        tabla += "</td>";
                                    } else {
                                        tabla += "<b>JUEZ: NO SE ENCONTRO JUZGADOR</b></br>";
                                    }
                                    tabla += "<td>" + datos.informacion[i].data[x].numero + "/" + datos.informacion[i].data[x].anio + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].tiposcarpetas.descripcion + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].salas.descripcion + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].detenido + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].tiposaudiencias.desTipoAudiencia + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].estatusAudiencia.descripcion + "</td>";
                                    tabla += "</tr>";
                                }
                            }
                        }
                    } else {
                        //                    $("#divAlertWarningAudiencias").html("");
                        //                    $("#divAlertWarningAudiencias").html("No se encontraron audiencias para el dia seleccionado");
                        //                    $("#divAlertWarningAudiencias").show("");
                        //                    setTimeAlert("divAlertWarningAudiencias");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
            $("#tablaJuzgador tbody").append(tabla);
        };

        cargarInfoSalas = function () {
            var cveSala = $("#cmbSalaBusqueda").val();
            var fecha = $('#fecha').data('date');
            $("#tablaSalas tbody").empty();
            var tabla = "";
            var res = fecha.split("/");
            fecha = res[2] + "-" + res[1] + "-" + res[0];
            var array = [];
            var count = [];
            var datos = "accion=selecAdmintAudienciasSalas&cveSala=" + cveSala + "&fechaInicial=" + fecha + "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                async: false,
                global: false,
                dataType: "json",
                data: datos,
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.status == "ok") {
                        for (var i = 0; i < datos.informacion.length; i++) {
                            if (datos.informacion[i].data == "") {
                                tabla += "<tr>";
                                tabla += "<td align='center' width='10%'>" + datos.informacion[i].horario + "</td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "<td></td>";
                                tabla += "</tr>";
                            } else {
                                for (var x = 0; x < datos.informacion[i].data.length; x++) {
                                    for (var j = 0; j < datos.informacion[i].data[x].audienciaJuzgador.length; j++) {
                                        array.push(datos.informacion[i].data[x].audienciaJuzgador[j].idJuzgador);
                                    }
                                    tabla += "<tr onclick='seleccionaId(" + datos.informacion[i].data[x].idAudiencia + ")' style='cursor:pointer'>";
                                    tabla += "<td align='center' width='10%'>" + datos.informacion[i].data[x].fechaInicial.substr(11, 5) + " - " + datos.informacion[i].data[x].fechaFinal.substr(11, 5) + "</td>";
                                    tabla += "<td width='35%'>";
                                    tabla += datos.informacion[i].data[x].cataudiencias.descripcion + "</br>";
                                    if (datos.informacion[i].data[x].juzgadores.length != 0) {
                                        $.each(datos.informacion[i].data[x].juzgadores, function (keya, vala) {
                                            count.push(vala.nombre);
                                        });
                                        if (count.length > 1) {
                                            tabla += "<b>JUECES:</b></br>";
                                        } else {
                                            tabla += "<b>JUEZ:</b></br>";
                                        }
                                        count = [];
                                        $.each(datos.informacion[i].data[x].juzgadores, function (keya, vala) {
                                            tabla += vala.nombre + "</br>";
                                        });
                                        tabla += "</td>";
                                    } else {
                                        tabla += "<b>JUEZ: NO SE ENCONTRO JUZGADOR</b></br>";
                                    }
                                    tabla += "<td>" + datos.informacion[i].data[x].numero + "/" + datos.informacion[i].data[x].anio + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].tiposcarpetas.descripcion + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].salas.descripcion + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].detenido + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].tiposaudiencias.desTipoAudiencia + "</td>";
                                    tabla += "<td>" + datos.informacion[i].data[x].estatusAudiencia.descripcion + "</td>";
                                    tabla += "</tr>";
                                }
                            }
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
            $("#tablaSalas tbody").append(tabla);
        };

        valida = function () {

            var fecha = "<?php echo $fechaHora; ?>";

            var mensaje = "";
            var error = true;

            if ($('#hddIdAudiencia').val() != "" || $('#hddIdAudiencia').val() != "0") {
                if ($('#cmbTipoCarpeta').val() == "" || $('#cmbTipoCarpeta').val() == "0") {
                    mensaje += "*Seleccione un tipo de carpeta<br>";
                    error = false;
                } else {
                    if (($('#cmbTipoCarpeta').val() == 4)) {
                        if (($("#cmbJuzgador1").val() == 0)) {
                            mensaje += "*Seleccione al primer juzgador<br>";
                            error = false;
                        }
                        if (($("#cmbJuzgador2").val() == 0)) {
                            mensaje += "*Seleccione al segundo juzgador<br>";
                            error = false;
                        }
                        if (($("#cmbJuzgador3").val() == 0)) {
                            mensaje += "*Seleccione al tercer juzgador<br>";
                            error = false;
                        }
                        if (($("#cmbFunciones1").val() == 0)) {
                            mensaje += "*Seleccione la funcion del primer juzgador<br>";
                            error = false;
                        }
                        if (($("#cmbFunciones2").val() == 0)) {
                            mensaje += "*Seleccione la funcion del segundo juzgador<br>";
                            error = false;
                        }
                        if (($("#cmbFunciones3").val() == 0)) {
                            mensaje += "*Seleccione la funcion del tercer juzgador<br>";
                            error = false;
                        }
                        if (($("#cmbJuzgador1").val() != 0) && ($("#cmbJuzgador2").val() != 0) && ($("#cmbJuzgador3").val() != 0)) {
                            if (($("#cmbJuzgador1").val() == $("#cmbJuzgador2").val() || $("#cmbJuzgador1").val() == $("#cmbJuzgador3").val()) ||
                                    ($("#cmbJuzgador2").val() == $("#cmbJuzgador1").val() || $("#cmbJuzgador2").val() == $("#cmbJuzgador3").val()) ||
                                    ($("#cmbJuzgador3").val() == $("#cmbJuzgador1").val() || $("#cmbJuzgador3").val() == $("#cmbJuzgador2").val())) {
                                mensaje += "*No se pueden repetir los juzgadores<br>";
                                error = false;
                            }
                        }
                        if (($("#cmbFunciones1").val() != 0) && ($("#cmbFunciones2").val() != 0) && ($("#cmbFunciones3").val() != 0)) {
                            if (($("#cmbFunciones1").val() == $("#cmbFunciones2").val() || $("#cmbFunciones1").val() == $("#cmbFunciones3").val()) ||
                                    ($("#cmbFunciones2").val() == $("#cmbFunciones1").val() || $("#cmbFunciones2").val() == $("#cmbFunciones3").val()) ||
                                    ($("#cmbFunciones3").val() == $("#cmbFunciones1").val() || $("#cmbFunciones3").val() == $("#cmbFunciones2").val())) {
                                mensaje += "*No se pueden repetir las funciones<br>";
                                error = false;
                            }
                        }
                    } else {
                        if (($("#cmbJuzgador1").val() == 0)) {
                            mensaje += "*Seleccione un juzgador<br>";
                            error = false;
                        }

                    }
                }

                if ($('#numero').val() == "") {
                    mensaje += "*Ingrese un numero<br>";
                    error = false;
                }
                if ($('#anio').val() == "" || $('#anio').val() == "0") {
                    mensaje += "*Ingrese un a�o<br>";
                    error = false;
                }
                if ($('#desahoga').val() == "" || $('#desahoga').val() == "0") {
                    mensaje += "*Seleccione juzgado a desahogar<br>";
                    error = false;
                }
                if ($('#cmbSala').val() == "" || $('#cmbSala').val() == "0") {
                    mensaje += "*Seleccione sala<br>";
                    error = false;
                }
                if ($('#cmbEstatus').val() == "" || $('#cmbEstatus').val() == "0") {
                    mensaje += "*Seleccione estatus<br>";
                    error = false;
                }
                if ($('#txtFechaInicial').val() == "" || $('#txtFechaInicial').val() == "0") {
                    mensaje += "*Ingrese fecha inicial<br>";
                    error = false;
                }
                if ($('#txtFechaFinal').val() == "" || $('#txtFechaFinal').val() == "0") {
                    mensaje += "*Ingrese fecha final<br>";
                    error = false;
                }
                if ($('#cmbCatAudiencia').val() == "" || $('#cmbCatAudiencia').val() == "0") {
                    mensaje += "*Seleccione un tipo de audiencia<br>";
                    error = false;
                }
                if ($('#txtFechaInicial').val() != "" && $('#txtFechaFinal').val() != "") {

                    var fechaInicial = $('#txtFechaInicial').val().split(' ');
                    var fechaFinal = $('#txtFechaFinal').val().split(' ');


                    var horaInicial = fechaInicial[1].split(':');
                    var horaFinal = fechaFinal[1].split(':');


                    if (fechaInicial[0] != fechaFinal[0]) {
                        mensaje += "*La fecha inicial y fecha final deben ser el mismo dia.<br>";
                        error = false;
                    }
                    console.log("Hora inicial: " + horaInicial[0]);
                    console.log(" Hora final: " + horaFinal[0]);
                    if (parseInt(horaInicial[0]) > parseInt(horaFinal[0])) {
                        mensaje += "*La hora final debe ser mayor a la hora inicial.<br>";
                        error = false;
                    } else {
                        if (parseInt(horaInicial[0]) == parseInt(horaFinal[0])) {
                            if (parseInt(horaInicial[1]) > parseInt(horaFinal[1])) {
                                mensaje += "*La hora final debe ser mayor a la hora inicial.<br>";
                                error = false;
                            }
                        }

                    }
                }
            } else {
                mensaje += "*Seleccione una audiencia<br>";
                error = false;
            }
            if (!error) {
                $("#divAlertWarningAudiencias").html("");
                $("#divAlertWarningAudiencias").html(mensaje);
                $("#divAlertWarningAudiencias").show("");
                setTimeAlert("divAlertWarningAudiencias");
                $("html, body").animate({scrollTop: 0}, "slow");
            }
            return error;
        };

        guardar = function () {
            if ($("#hddIdAudiencia").val() != "") {
                var error = true;
                if (valida()) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardarAudienciaAdmin",
                            idAudiencia: $("#hddIdAudiencia").val(),
                            cveJuzgadoDesahoga: $("#cmbJuzgadosDesahoga").val(),
                            cveSala: $("#cmbSala").val(),
                            cveEstatusAudiencia: $("#cmbEstatus").val(),
                            fechaInicial: $("#txtFechaInicial").val(),
                            fechaFinal: $("#txtFechaFinal").val(),
                            cveCatAudiencia: $("#cmbCatAudiencia").val(),
                            idAudienciaJuez1: $("#hddIdJuzgadorAudiencia1").val(),
                            idAudienciaJuez2: $("#hddIdJuzgadorAudiencia2").val(),
                            idAudienciaJuez3: $("#hddIdJuzgadorAudiencia3").val(),
                            cveJuzgadores1: $("#cmbJuzgador1").val(),
                            cveJuzgadores2: $("#cmbJuzgador2").val(),
                            cveJuzgadores3: $("#cmbJuzgador3").val(),
                            cveFunciones1: $("#cmbFunciones1").val(),
                            cveFunciones2: $("#cmbFunciones2").val(),
                            cveFunciones3: $("#cmbFunciones3").val()
                        },
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            ///////////////////////////////////////////////////////////////////////////////
                            if (datos.status == "Ok") {
                                $("html, body").animate({scrollTop: 0}, "slow");
                                $("#divAlertSuccesAudiencias").html("");
                                $("#divAlertSuccesAudiencias").html(datos.msj);
                                $("#divAlertSuccesAudiencias").show("");
                                setTimeAlert("divAlertSuccesAudiencias");
                                cargaInfo();
                                cargaInfoJuzgador();
                                cargarInfoSalas();
                            } else {
                                $("html, body").animate({scrollTop: 0}, "slow");
                                $("#divAlertWarningAudiencias").html("");
                                $("#divAlertWarningAudiencias").html(datos.msj);
                                $("#divAlertWarningAudiencias").show("");
                                setTimeAlert("divAlertWarningAudiencias");
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
            } else {
                $("#divAlertWarningAudiencias").html("");
                $("#divAlertWarningAudiencias").html("Seleccione una audiencia");
                $("#divAlertWarningAudiencias").show("");
                setTimeAlert("divAlertWarningAudiencias");
                $("html, body").animate({scrollTop: 0}, "slow");
            }
        };

        seleccionaId = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/audiencias/AudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarAudienciaJueces",
                    idAudiencia: id},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.totalCount > 0) {

                        $("#hddIdAudiencia").val(datos.data[0].idAudiencia);
                        $("#cmbJuzgados").val(datos.data[0].cveJuzgado);
                        $("#cmbTipoCarpeta").val(datos.data[0].cveTipoCarpeta);
                        $("#numero").val(datos.data[0].numero);
                        $("#anio").val(datos.data[0].anio);
                        //                    $("#cmbJuzgadosDesahoga").val(datos.data[0].cveJuzgadoDesahoga);
                        $("#cmbJuzgadosDesahoga").val(datos.data[0].cveJuzgadoDesahoga).trigger('change');
                        //                    comboSalas();
                        $("#cmbSala").val(datos.data[0].cveSala);
                        $("#cmbEstatus").val(datos.data[0].cveEstatusAudiencia);
                        $("#txtFechaInicial").val(datos.data[0].fechaInicial);
                        $("#txtFechaFinal").val(datos.data[0].fechaFinal);
                        $("#cmbCatAudiencia").val(datos.data[0].cveCatAudiencia);
                        $("html, body").animate({scrollTop: 0}, "slow");
                        $("#imprimir").show("");
                        $("#guardar").show("");
                        if ($("#cmbTipoCarpeta").val() != "4") {
                            $("#divFunciones").hide("");
                            $("#divFunciones1").hide("");
                            $("#divlabel").hide("");
                        } else {
                            $("#divFunciones").show("");
                            $("#divFunciones1").show("");
                            $("#divlabel").show("");
                        }

                        if (datos.data[0].juzgadores.length == 3) {
                            $("#cmbJuzgador1").val(datos.data[0].juzgadores[0].idJuzgador);
                            $("#cmbFunciones1").val(datos.data[0].juzgadores[0].cveFuncion);
                            $("#hddIdJuzgadorAudiencia1").val(datos.data[0].juzgadores[0].idAudienciaJuez);
                            $("#cmbJuzgador2").val(datos.data[0].juzgadores[1].idJuzgador);
                            $("#cmbFunciones2").val(datos.data[0].juzgadores[1].cveFuncion);
                            $("#hddIdJuzgadorAudiencia2").val(datos.data[0].juzgadores[1].idAudienciaJuez);
                            $("#cmbJuzgador3").val(datos.data[0].juzgadores[2].idJuzgador);
                            $("#cmbFunciones3").val(datos.data[0].juzgadores[2].cveFuncion);
                            $("#hddIdJuzgadorAudiencia3").val(datos.data[0].juzgadores[2].idAudienciaJuez);
                        } else if (datos.data[0].juzgadores.length == 2) {
                            $("#cmbJuzgador1").val(datos.data[0].juzgadores[0].idJuzgador);
                            $("#cmbFunciones1").val(datos.data[0].juzgadores[0].cveFuncion);
                            $("#hddIdJuzgadorAudiencia1").val(datos.data[0].juzgadores[0].idAudienciaJuez);
                            $("#cmbJuzgador2").val(datos.data[0].juzgadores[1].idJuzgador);
                            $("#cmbFunciones2").val(datos.data[0].juzgadores[1].cveFuncion);
                            $("#hddIdJuzgadorAudiencia2").val(datos.data[0].juzgadores[1].idAudienciaJuez);
                        } else if (datos.data[0].juzgadores.length == 1) {
                            $("#cmbJuzgador1").val(datos.data[0].juzgadores[0].idJuzgador);
                            $("#cmbFunciones1").val(datos.data[0].juzgadores[0].cveFuncion);
                            $("#hddIdJuzgadorAudiencia1").val(datos.data[0].juzgadores[0].idAudienciaJuez);

                        }

                    } else {
                        $("#divAlertWarningAudiencias").html("");
                        $("#divAlertWarningAudiencias").html("No se encontraron resultados");
                        $("#divAlertWarningAudiencias").show("");
                        setTimeAlert("divAlertWarningAudiencias");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
        };

        limpiarGeneral = function () {
            limpiar();
            var fecha = new Date();
            $("#fecha").data('DateTimePicker').date(fecha);
            $(".cmbJuzgados").val(<?php echo $cveAdscripcion; ?>).trigger('change');

        };

        limpiar = function () {
            $("#hddIdAudiencia").val("");
            $("#cmbJuzgados").val(0);
            $("#cmbJuzgadosDesahoga").val(0);
            $("#cmbJuzgadosDesahoga").val(119).trigger('change');

            $("#cmbTipoCarpeta").val(0);
            $("#numero").val("");
            $("#anio").val("");
            $("#desahoga").val(0);
            $("#cmbSala").val(0);
            $("#cmbEstatus").val(0);
            $("#txtFechaInicial").val("");
            $("#txtFechaFinal").val("");
            $("#cmbCatAudiencia").val(0);
            $("#cmbJuzgador1").val(0);
            $("#cmbJuzgador2").val(0);
            $("#cmbJuzgador3").val(0);
            $("#cmbFunciones1").val(0);
            $("#cmbFunciones2").val(0);
            $("#cmbFunciones3").val(0);
            $("#divFunciones1").hide("");
            $("#divFunciones").hide("");
            $("#divlabel").hide("");
            $("#divAcordeon").hide("");
            $("#imprimir").hide("");
            $("#guardar").hide("");
            /////
            $("#hddIdJuzgadorAudiencia1").val("");
            $("#hddIdJuzgadorAudiencia2").val("");
            $("#hddIdJuzgadorAudiencia3").val("");
        };

        imprimir = function () {
            if ($("#hddIdAudiencia").val() != "") {
                var idAudiencia = $("#hddIdAudiencia").val();
                window.open("../fachadas/sigejupe/resumensolicitudaudiencia/ResumensolicitudaudienciaFacade.php?idSolicitud=" + idAudiencia + "&accion=consultaAcuseAudiencia", 'Reporte', 'toolbar=yes,scrollbars=yes,resizable=yes,width=800, height=1000');
            } else {
                $("#divAlertWarningAudiencias").html("");
                $("#divAlertWarningAudiencias").html("Debe de seleccionar un registro");
                $("#divAlertWarningAudiencias").show("");
                setTimeAlert("divAlertWarningAudiencias");
            }
        };

        $(function () {
            var fecha = "<?php echo $fecha; ?>";
            juzgadoDistrito();
            comboJuzgadosDesahoga("cmbJuzgados");
            comboJuzgadosDes("cmbJuzgadosDesahoga");
            comboTiposCarpetas();
            comboEstatus();
            comboCatAudiencias();
            //        comboJuzgadores("cmbJuzgador1");
            //        comboJuzgadores("cmbJuzgador2");
            //        comboJuzgadores("cmbJuzgador3");
            combofuncionesJuzgadores("cmbFunciones1");
            combofuncionesJuzgadores("cmbFunciones2");
            combofuncionesJuzgadores("cmbFunciones3");

            var currentDate = new Date();
            var maxDate = currentDate.setDate(currentDate.getDate());
            $("#txtFechaInicial").datetimepicker({
                locale: 'es',
                ignoreReadonly: true,
                sideBySide: false
                        //            useCurrent: false
            });
            $("#txtFechaFinal").datetimepicker({
                locale: 'es',
                ignoreReadonly: true,
                sideBySide: false
                        //            useCurrent: false
            });
            $('#fecha').datetimepicker({
                locale: 'es',
                inline: true,
                sideBySide: false,
                format: "DD/MM/YYYY",
                useCurrent: false,
                defaultDate: 'now'
            })
                    .on('dp.change', function (ev) {
                        cargaInfo();
                        cargaInfoJuzgador();
                        cargarInfoSalas();
                    });
            cargaInfo();

        });

    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>