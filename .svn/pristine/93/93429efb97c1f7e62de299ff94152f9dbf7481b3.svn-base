<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    if (isset($_POST['idSolicitud'])) {
        $idSolicitudAudiencia = $_POST['idSolicitud'];
    }
    ?>
    <style>
        .requerido {
            color: darkred;
        }
    </style>
    <!--<div class="page-content" id="areadetrabajo">-->
    <div class="panel panel-default" id="bodyRelacion">
        <div class="panel-heading">
            <h5 class="panel-title">
                Definici&oacute;n de relaciones imputado, victima y delito
            </h5>
        </div>
        <div class="panel-body">
            <!--------------------AQUI COMIEZA EL CUERPO DEL FORMULARIO------------------>
            <input type="hidden" name="idSolicitud" id="idSolicitud" value="<?php echo $idSolicitudAudiencia ?>"></input>
            <div class="tab-content tabs-flat">
                <div class="tabbable tabs-left">
                    <ul id="myTab3" class="nav nav-tabs">
                        <li class="tab-sky active">
                            <a href="#divImputados" data-toggle="tab" aria-expanded="true">Imputados</a>
                        </li>
                        <li class="tab-red">
                            <a href="#divOfendidos" data-toggle="tab" aria-expanded="false">Ofendidos</a>
                        </li>
                        <li class="tab-orange">
                            <a href="#divDelitos" data-toggle="tab" aria-expanded="false"> Delitos</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="divImputados">
                            <table class="table table-hover" id="tablaImputados">
                                <thead class="bordered-darkorange">
                                    <tr>
                                        <th>NOMBRE</th>
                                        <th>ELEGIR</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="divOfendidos">
                            <table class="table table-hover" id="tablaOfendidos">
                                <thead class="bordered-darkorange">
                                    <tr>
                                        <th>NOMBRE</th>
                                        <th>ELEGIR</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane" id="divDelitos">
                            <table class="table table-hover" id="tablaDelitos">
                                <thead class="bordered-darkorange">
                                    <tr>
                                        <th>NOMBRE</th>
                                        <th>ELEGIR</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="col-lg-4">
                    <input type="hidden" name="txtIdImpoFeDelSolicitud" id="txtIdImpoFeDelSolicitud"/>
                    <label for="cmbModalidad" class="col-sm-6 control-label">Modalidad<span class="requerido">(*)</span></label>
                    <select id="cmbModalidad" class="form-control cmbModalidad" name="cmbModalidad">
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="cmbComision" class="col-sm-6 control-label">Comisión<span class="requerido">(*)</span></label>
                    <select id="cmbComision" class="form-control cmbComision" name="cmbComision">
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="cmbConcurso" class="col-sm-6 control-label">Concurso<span class="requerido">(*)</span></label>
                    <select id="cmbConcurso" class="form-control cmbConcurso" name="cmbConcurso">
                    </select>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-4">
                    <label for="cmbCDO" class="col-sm-6 control-label">Clasificación Delito Orden<span class="requerido">(*)</span></label>
                    <select id="cmbCDO" class="form-control cmbCDO" name="cmbCDO">
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="cmbElementoComision" class="col-sm-6 control-label">Elemento Comisión<span class="requerido">(*)</span></label>
                    <select id="cmbElementoComision" class="form-control cmbElementoComision" name="cmbElementoComision">
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="cmbClasificacionDelito" class="col-sm-6 control-label">Clasificación Delito<span class="requerido">(*)</span></label>
                    <select id="cmbClasificacionDelito" class="form-control cmbClasificacionDelito" name="cmbClasificacionDelito">
                    </select>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-4">
                    <label for="cmbFormaAccion" class="col-sm-6 control-label">Forma Acción<span class="requerido">(*)</span></label>
                    <select id="cmbFormaAccion" class="form-control cmbFormaAccion" name="cmbFormaAccion">
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="cmbConsumacion" class="col-sm-6 control-label">Consumación<span class="requerido">(*)</span></label>
                    <select id="cmbConsumacion" class="form-control cmbConsumacion" name="cmbConsumacion">
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="cmbEntidad" class="col-sm-6 control-label">Entidad donde se cometio el delito<span class="requerido">(*)</span></label>
                    <select id="cmbEntidad" class="form-control cmbEntidad" name="cmbEntidad">
                    </select>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-4">
                    <label for="cmbMunicipio" class="col-sm-6 control-label">Municipio donde se cometio el delito<span class="requerido">(*)</span></label>
                    <select id="cmbMunicipio" class="form-control cmbMunicipio" name="cmbMunicipio">
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="txtDireccion" class="col-sm-6 control-label">Dirección<span class="requerido">(*)</span></label>
                    <input type="text" id="txtDireccion" class="form-control" name="txtDireccion" />
                </div>
                <div class="col-lg-4">
                    <label for="txtColonia" class="col-sm-6 control-label">Colonia<span class="requerido">(*)</span></label>
                    <input type="text" id="txtColonia" class="form-control" name="txtColonia" />
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-4">
                    <label for="txtNExterior" class="col-sm-6 control-label">N&uacute;mero Exterior<span class="requerido">(*)</span></label>
                    <input type="text" id="txtNExterior" class="form-control" name="txtNExterior" />
                </div>
                <div class="col-lg-4">
                    <label for="txtNInterior" class="col-sm-6 control-label">N&uacute;mero Interior</label>
                    <input type="text" id="txtNInterior" class="form-control" name="txtNInterior" />
                </div>
                <div class="col-lg-4">
                    <label for="txtCP" class="col-sm-6 control-label">C.P.<span class="requerido">(*)</span></label>
                    <input type="text" class="form-control" id="txtCP" name="txtCP" maxlength="5"/>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-4">
                    <label for="txtFechaDelito" class="col-sm-6 control-label">Fecha Delito<span class="requerido">(*)</span></label>
                    <input readonly type="text" id="txtFechaDelito" class="form-control" name="txtFechaDelito" />
                </div>
                <div class="col-lg-4">
                    <label for="cmbGradoParticipacion" class="col-sm-6 control-label">Grado Participacion<span class="requerido">(*)</span></label>
                    <select id="cmbGradoParticipacion" class="form-control cmbGradoParticipacion" name="cmbGradoParticipacion">
                    </select>
                </div>
                <div class="col-lg-4">
                    <label for="cmbTRIF" class="col-sm-6 control-label">Relación<span class="requerido">(*)</span></label>
                    <select id="cmbTRIF" class="form-control cmbTRIF" name="cmbTRIF">
                    </select>
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="col-lg-12">
                    <button type="button" class="btn btn-primary" name="guardaDatos" id="guardaDatos">Guardar</button>
                    <button type="button" class="btn btn-primary" name="nuevoDatos" id="nuevoDatos">Limpiar</button>
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="col-lg-12">
                    <div style="display: none;" class="alert alert-success alert-dismissable mensaje"></div>
                </div>


                <br>
                <!--<table class="table table-hover" id="tablaImputadoOfendidos">-->
                <table id="tablaImputadoOfendidos"  border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">
                    <thead class="trGridAgrega">
                        <tr>
                            <th>Imputado</th>
                            <th>Ofendido</th>
                            <th>Delito</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                <div style="display:none;" class="clearfix"></div>
                <br>
            </div>
        </div>
        <!--------------------AQUI TERMINA EL CUERPO DEL FORMULARIO------------------>


        <script type="text/javascript">

            ////////////////////////////////////////////////////////
            /////////////////FUNCIONES DE JAVASCRIPT////////////////
            ////////////////////////////////////////////////////////
            function cargaImputados() {
                var idSolicitud = $("#idSolicitud").val();
                var tabla = "";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/imputadossolicitudes/ImputadossolicitudesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {action: "consultar", idSolicitudAudiencia: idSolicitud, activo: 'S'},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (key, val) {
                                    tabla += "<tr>";
                                    if (val.cveTipoPersona == 1) {
                                        tabla += "<td>" + val.nombre + " " + val.paterno + " " + val.materno + "</td>";
                                    } else {
                                        tabla += "<td>" + val.nombreMoral + "</td>";
                                    }
                                    tabla += '<td><input type="checkbox" class="chkImputados" name="chkImputados" id="chkImputados" value="' + val.idImputadoSolicitud + '"/></td>';
                                    tabla += "</tr>";
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
                $("#tablaImputados tbody").append(tabla);
            }
            $('#bodyRelacion').on('click', '.chkImputados', function () {
                if ($(".chkImputados:checkbox:checked").length > 1) {
                    alert("Solo debes elegir 1 Imputado");
                    return false;
                } else {
                    return true;
                }
            });
            function cargaOfendidos() {
                var idSolicitud = $("#idSolicitud").val();
                var tabla = "";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/ofendidossolicitudes/OfendidossolicitudesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consulta", idSolicitudAudiencia: idSolicitud, activo: 'S'},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (key, val) {
                                    tabla += "<tr>";
                                    if (val.cveTipoPersona == 1) {
                                        tabla += "<td>" + val.nombre + " " + val.paterno + " " + val.materno + "</td>";
                                    } else {
                                        tabla += "<td>" + val.nombreMoral + "</td>";
                                    }
                                    tabla += '<td><input type="checkbox" class="chkOfendidos" name="chkOfendidos" id="chkOfendidos" value="' + val.idOfendidoSolicitud + '"/></td>';
                                    tabla += "</tr>";
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
                $("#tablaOfendidos tbody").append(tabla);
            }
            $('#bodyRelacion').on('click', '.chkOfendidos', function () {
                if ($(".chkOfendidos:checkbox:checked").length > 1) {
                    alert("Solo debes elegir 1 Ofendido");
                    return false;
                } else {
                    return true;
                }
            });
            function cargaDelitos() {
                var idSolicitud = $("#idSolicitud").val();
                var tabla = "";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/delitossolicitudes/DelitossolicitudesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultarDelitosSolicitudes", idSolicitudAudiencia: idSolicitud},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (key, val) {
                                    tabla += "<tr>";
                                    tabla += "<td>" + val.desDelito + "</td>";
                                    tabla += '<td><input type="checkbox" class="chkDelitos" name="chkDelitos" id="chkDelitos" value="' + val.idDelitoSolicitud + '"/></td>';
                                    tabla += "</tr>";
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
                $("#tablaDelitos tbody").append(tabla);
            }
            $('#bodyRelacion').on('click', '.chkDelitos', function () {
                if ($(".chkDelitos:checkbox:checked").length > 1) {
                    alert("Solo debes elegir 1 Delito");
                    return false;
                } else {
                    return true;
                }
            });
            comboModalidad = function () {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/modalidades/ModalidadesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", activo: "S"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbModalidad').empty();
                            $('.cmbModalidad').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbModalidad').append('<option value="' + object.cveModalidad + '">' + object.desModalidad + '</option>');
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
            comboComision = function () {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/comisiones/ComisionesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", activo: "S"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbComision').empty();
                            $('.cmbComision').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbComision').append('<option value="' + object.cveComision + '">' + object.desComision + '</option>');
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
            comboConcurso = function () {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/concursos/ConcursosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", activo: "S"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbConcurso').empty();
                            $('.cmbConcurso').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbConcurso').append('<option value="' + object.cveConcurso + '">' + object.desConcurso + '</option>');
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
            comboClasificacionesDelitosOrden = function () {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/clasificacionesdelitosorden/ClasificacionesdelitosordenFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", activo: "S"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbCDO').empty();
                            $('.cmbCDO').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbCDO').append('<option value="' + object.cveClasificacionDelitoOrden + '">' + object.desClasificacionDelitoOrden + '</option>');
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
            comboElementoComision = function () {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/elementoscomisiones/ElementoscomisionesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", activo: "S"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbElementoComision').empty();
                            $('.cmbElementoComision').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbElementoComision').append('<option value="' + object.cveElementoComision + '">' + object.desElementoComision + '</option>');
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
            comboClasificacionDelito = function () {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/clasificacionesdelitos/ClasificacionesdelitosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", activo: "S"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbClasificacionDelito').empty();
                            $('.cmbClasificacionDelito').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbClasificacionDelito').append('<option value="' + object.cveClasificacionDelito + '">' + object.desClasificacionDelito + '</option>');
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
            comboFormaAccion = function () {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/formasacciones/FormasaccionesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", activo: "S"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbFormaAccion').empty();
                            $('.cmbFormaAccion').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbFormaAccion').append('<option value="' + object.cveFormaAccion + '">' + object.desFormaAccion + '</option>');
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
            comboConsumacion = function () {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/consumaciones/ConsumacionesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", activo: "S"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbConsumacion').empty();
                            $('.cmbConsumacion').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbConsumacion').append('<option value="' + object.cveConsumacion + '">' + object.desConsumacion + '</option>');
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
            comboMunicipio = function (entidad) {
                if (entidad > 0) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", cveEstado: entidad, activo: "S"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('.cmbMunicipio').empty();
                                $('.cmbMunicipio').append('<option value="0">Seleccione una opcion</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('.cmbMunicipio').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
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
                } else {
                    $('.cmbMunicipio').empty();
                }
            };
            comboEntidad = function () {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", activo: "S"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbEntidad').empty();
                            $('.cmbEntidad').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbEntidad').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
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
            comboGradoParticipacion = function () {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/gradoparticipaciones/GradoparticipacionesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", activo: "S"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbGradoParticipacion').empty();
                            $('.cmbGradoParticipacion').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbGradoParticipacion').append('<option value="' + object.cveGradoParticipacion + '">' + object.desGradoParticipacion + '</option>');
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
            comboRelacionImpoFe = function () {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tiposrelimpofe/TiposrelimpofeFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", activo: "S"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbTRIF').empty();
                            $('.cmbTRIF').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbTRIF').append('<option value="' + object.cveRelacionImpOfe + '">' + object.desRelacionImpOfe + '</option>');
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
            $('#cmbEntidad', '#bodyRelacion').change(function () {
                var entidad = $(this).val();
                comboMunicipio(entidad);
            });
            $('#nuevoDatos', '#bodyRelacion').click(function () {
                limpiaFormulario();
            });
            $("#txtCP").validaCampo("0123456789");
            var array = [];
            $('#guardaDatos', '#bodyRelacion').click(function () {
                var idImpoFeDelSolicitud = $("#txtIdImpoFeDelSolicitud").val();
                var idSolicitud = $("#idSolicitud").val();
                var imputado = $(".chkImputados:checkbox:checked").val();
                var ofendido = $(".chkOfendidos:checkbox:checked").val();
                var delito = $(".chkDelitos:checkbox:checked").val();
                var modalidad = $("#cmbModalidad").val();
                var comision = $("#cmbComision").val();
                var concurso = $("#cmbConcurso").val();
                var cdo = $("#cmbCDO").val();
                var elementoComision = $("#cmbElementoComision").val();
                var clasificacionDelito = $("#cmbClasificacionDelito").val();
                var formAccion = $("#cmbFormaAccion").val();
                var consumacion = $("#cmbConsumacion").val();
                var municipio = $("#cmbMunicipio").val();
                var entidad = $("#cmbEntidad").val();
                var trif = $("#cmbTRIF").val();
                var gradoParticipacion = $("#cmbGradoParticipacion").val();
                var fechaOriginal = $("#txtFechaDelito").val();
                var fechaOsplit = fechaOriginal.split("/");
                var anioO = fechaOsplit[2];
                var mesO = fechaOsplit[1];
                var diaO = fechaOsplit[0];
                var fechaDelito = anioO + "-" + mesO + "-" + diaO;
                var direccion = $("#txtDireccion").val();
                var colonia = $("#txtColonia").val();
                var interior = $("#txtNInterior").val();
                var exterior = $("#txtNExterior").val();
                var cp = $("#txtCP").val();
                $(".mensaje").empty();
                var mensaje = "";

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "guardarRelacion",
                        idImpOfeDelSolicitud: idImpoFeDelSolicitud,
                        idSolicitudAudiencia: idSolicitud,
                        idImputadoSolicitud: imputado,
                        idOfendidoSolicitud: ofendido,
                        idDelitoSolicitud: delito,
                        cveModalidad: modalidad,
                        cveComision: comision,
                        cveConcurso: concurso,
                        cveClasificacionDelitoOrden: cdo,
                        cveElementoComision: elementoComision,
                        cveClasificacionDelito: clasificacionDelito,
                        cveFormaAccion: formAccion,
                        cveConsumacion: consumacion,
                        cveMunicipio: municipio,
                        cveEntidad: entidad,
                        cveRelacionImpOfe: trif,
                        cveGradoParticipacion: gradoParticipacion,
                        cveTerminacion: 1,
                        activo: 'S',
                        fechaDelito: fechaDelito,
                        direccion: direccion,
                        colonia: colonia,
                        numInterior: interior,
                        numExterior: exterior,
                        cp: cp},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            if (datos.totalCount == 0) {
                                if (datos.estatus == "Error") {
                                    $.each(datos.resultados, function (key, val) {
                                        mensaje += val.mensaje;
                                    });
                                } else {
                                    mensaje += datos.text;
                                }
                            } else {
                                mensaje += datos.text;
                                limpiaFormulario();
                            }
                        } catch (e) {
                            alert("Error al cargar audiencia:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de audiencias:\n\n" + otroobj);
                    }
                });
                array = [];
                cargaRelacion();
                $(".mensaje").append(mensaje);
                $(".mensaje").show();
                setTimeout(function () {
                    $(".mensaje").hide();
                }, 4000);
                return false;
            });
            $('#bodyRelacion').on('click', '.eliminarRegistro', function () {
                if (confirm('\u00bf Desea eliminar la relacion?')) {
                    var idImpoFeDelSolicitud = $(this).attr("idImpOfeDelSolicitud");
                    var idSolicitud = $("#idSolicitud").val();
                    $(".mensaje").empty();
                    var mensaje = "";
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "bajaRelacion",
                            idImpOfeDelSolicitud: idImpoFeDelSolicitud,
                            idSolicitudAudiencia: idSolicitud,
                            activo: 'N'},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                if (datos.totalCount == 0) {
                                    if (datos.estatus == "Error") {
                                        $.each(datos.resultados, function (key, val) {
                                            mensaje += val.mensaje;
                                        });
                                    } else {
                                        mensaje += datos.text;
                                    }
                                } else {
                                    mensaje += datos.text;
                                }
                            } catch (e) {
                                alert("Error al cargar audiencia:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de audiencias:\n\n" + otroobj);
                        }
                    });
                    cargaRelacion();
                    $(".mensaje").append(mensaje);
                    $(".mensaje").show();
                    setTimeout(function () {
                        $(".mensaje").hide();
                    }, 4000);
                    return false;
                }
            });
            function cargaRelacion() {
                var idSolicitud = $("#idSolicitud").val();
                $("#tablaImputadoOfendidos tbody").empty();
                var tabla = "";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultarRelacion", idSolicitudAudiencia: idSolicitud, activo: 'S'},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            if (datos.totalCount == 0) {
                                return false;
                            }
                            $.each(datos, function (key, val) {
                                console.log(val);
                                tabla += "<tr class='trSeleccion' >";
                                if (val.imputados.cveTipoPersona == 1) {
                                    tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelSolicitud + ")' idImpOfeDelSolicitud='" + val.idImpOfeDelSolicitud + "'>" + val.imputados.nombre + " " + val.imputados.paterno + " " + val.imputados.materno + "</td>";
                                } else {
                                    tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelSolicitud + ")' idImpOfeDelSolicitud='" + val.idImpOfeDelSolicitud + "'>" + val.imputados.nombreMoral + "</td>";

                                }
                                if (val.ofendidos.cveTipoPersona == 1) {
                                    tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelSolicitud + ")' idImpOfeDelSolicitud='" + val.idImpOfeDelSolicitud + "'>" + val.ofendidos.nombre + " " + val.ofendidos.paterno + " " + val.ofendidos.materno + "</td>";
                                } else {
                                    tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelSolicitud + ")' idImpOfeDelSolicitud='" + val.idImpOfeDelSolicitud + "'>" + val.ofendidos.nombreMoral + "</td>";

                                }
                                tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelSolicitud + ")' idImpOfeDelSolicitud='" + val.idImpOfeDelSolicitud + "'>" + val.delitos.desDelito + "</td>";
                                tabla += "<td><img src='img/eliminar.png' width='27px' style='cursor:pointer;' class='eliminarRegistro' idImpOfeDelSolicitud='" + val.idImpOfeDelSolicitud + "'></td>";
                                tabla += "</tr>";
                                array.push(val);
                            });
                        } catch (e) {
                            alert("Error al cargar audiencia:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de audiencias:\n\n" + otroobj);
                    }
                });
                $("#tablaImputadoOfendidos tbody").append(tabla);
            }
            function editarRegistro(id) {
                $('.nav-tabs a[href="#divImputados"]').tab('show');
                limpiaFormulario();
                var idImpOfeDelSolicitud = id;
                $.each(array, function (key, val) {
                    if (idImpOfeDelSolicitud == val.idImpOfeDelSolicitud) {
                        comboMunicipio(val.Estado.cveEstado);
                        $(".chkImputados:checkbox[value=" + val.imputados.idImputadoSolicitud + "]").prop('checked', true);
                        $(".chkOfendidos:checkbox[value=" + val.ofendidos.idOfendidoSolicitud + "]").prop('checked', true);
                        $(".chkDelitos:checkbox[value=" + val.delitos.IdDelitoSolicitud + "]").prop('checked', true);
                        $("#txtIdImpoFeDelSolicitud").val(val.idImpOfeDelSolicitud);
                        $("#cmbModalidad").val(val.modalidad.cveModalidad);
                        $("#cmbComision").val(val.comisiones.cveComision);
                        $("#cmbConcurso").val(val.concurso.cveConcurso);
                        $("#cmbCDO").val(val.clasificacionDelitoOrden.cveClasificacionDelitoOrden);
                        $("#cmbElementoComision").val(val.elementoComision.cveElementoComision);
                        $("#cmbClasificacionDelito").val(val.clasificacionDelito.cveClasificacionDelito);
                        $("#cmbFormaAccion").val(val.formaAccion.cveFormaAccion);
                        $("#cmbConsumacion").val(val.consumacion.cveConsumacion);
                        $("#cmbMunicipio").val(val.municipio.cveMunicipio);
                        $("#cmbEntidad").val(val.Estado.cveEstado);
                        $("#cmbTRIF").val(val.relacionImpOfe.cveRelacionImpOfe);
                        $("#cmbGradoParticipacion").val(val.gradoParticipacion.cveGradoParticipacion);
                        var fecha = val.fechaDelito.split("-");
                        var anio = fecha[0];
                        var mes = fecha[1];
                        var diaSplit = fecha[2].split(" ");
                        var dia = diaSplit[0];
                        $("#txtFechaDelito").val(dia + "/" + mes + "/" + anio);
                        $("#txtDireccion").val(val.direccion);
                        $("#txtColonia").val(val.colonia);
                        $("#txtNInterior").val(val.numInterior);
                        $("#txtNExterior").val(val.numExterior);
                        $("#txtCP").val(val.cp);
                    }
                });
            }
            function limpiaFormulario() {
                $('.cmbMunicipio').empty();
                $(".chkImputados:checkbox").removeAttr("checked");
                $(".chkOfendidos:checkbox").removeAttr("checked");
                $(".chkDelitos:checkbox").removeAttr("checked");
                $("#txtIdImpoFeDelSolicitud").val('');
                $("#cmbModalidad").val(0);
                $("#cmbModalidad").val(0);
                $("#cmbComision").val(0);
                $("#cmbConcurso").val(0);
                $("#cmbCDO").val(0);
                $("#cmbElementoComision").val(0);
                $("#cmbClasificacionDelito").val(0);
                $("#cmbFormaAccion").val(0);
                $("#cmbConsumacion").val(0);
                $("#cmbMunicipio").val(0);
                $("#cmbEntidad").val(0);
                $("#cmbTRIF").val(0);
                $("#cmbGradoParticipacion").val(0);
                $("#txtFechaDelito").val('');
                $("#txtDireccion").val('');
                $("#txtColonia").val('');
                $("#txtNInterior").val('');
                $("#txtNExterior").val('');
                $("#txtCP").val('');
            }
            ////////////////////////////////////////////////////////
            /////////////////INICIALIZA FUNCIONES///////////////////
            ////////////////////////////////////////////////////////


            $(document).ready(function () {

                $("#txtFechaDelito").datepicker({
                    changeMonth: true,
                    changeYear: true,
                    format: "dd/mm/yyyy"
                });
                cargaImputados();
                cargaOfendidos();
                cargaDelitos();
                comboModalidad();
                comboComision();
                comboConcurso();
                comboClasificacionesDelitosOrden();
                comboElementoComision();
                comboClasificacionDelito();
                comboFormaAccion();
                comboConsumacion();
                comboEntidad();
                comboGradoParticipacion();
                comboRelacionImpoFe();
                cargaRelacion();
            });
        </script>


    </div>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>