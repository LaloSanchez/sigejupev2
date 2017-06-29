<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {


    if (isset($_POST['idSolicitud'])) {
        $idSolicitudAudiencia = $_POST['idSolicitud'];
    }
    ?>
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
            <div id="RelacionInfo" style="margin-left:15px; margin-bottom: 25px; "></div>
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
                <div class="col-lg-3">
                    <input type="hidden" name="txtIdImpoFeDelSolicitud" id="txtIdImpoFeDelSolicitud"/>
                    <label class="control-label" for="cmbModalidad">Modalidad <span class="requerido">(*)</span></label>
                    <select id="cmbModalidad" class="form-control cmbModalidad" name="cmbModalidad">
                    </select>
                </div>
                <div class="col-lg-3">
                    <label class="control-label" for="cmbComision">Comisi&oacute;n <span class="requerido">(*)</span></label>
                    <select id="cmbComision" class="form-control cmbComision" name="cmbComision"></select>
                </div>
                <div class="col-lg-3">
                    <label class="control-label" for="cmbConcurso">Concurso<span class="requerido">(*)</span></label>
                    <select id="cmbConcurso" class="form-control cmbConcurso" name="cmbConcurso"></select>
                </div>
                <!--<div class="clearfix"></div>-->
                <div class="col-lg-3">
                    <label class="control-label" for="cmbCDO">Clasificaci&oacute;n Delito Orden<span class="requerido">(*)</span></label>
                    <select id="cmbCDO" class="form-control cmbCDO" name="cmbCDO">
                    </select>
                </div>
                <div class="col-lg-3">
                    <label class="control-label" for="cmbElementoComision">Elemento Comisi&oacute;n<span class="requerido">(*)</span></label>
                    <select id="cmbElementoComision" class="form-control cmbElementoComision" name="cmbElementoComision">
                    </select>
                </div>
                <div class="col-lg-3">
                    <label class="control-label" for="cmbClasificacionDelito">Clasificaci&oacute;n Delito<span class="requerido">(*)</span></label>
                    <select id="cmbClasificacionDelito" class="form-control cmbClasificacionDelito" name="cmbClasificacionDelito">
                    </select>
                </div>
                <div class="col-lg-3">
                    <label class="control-label" for="cmbFormaAccion">Forma Acci&oacute;n<span class="requerido">(*)</span></label>
                    <select id="cmbFormaAccion" class="form-control cmbFormaAccion" name="cmbFormaAccion">
                    </select>
                </div>
                <div class="col-lg-3">
                    <label class="control-label" for="cmbConsumacion">Consumaci&oacute;n<span class="requerido">(*)</span></label>
                    <select id="cmbConsumacion" class="form-control cmbConsumacion" name="cmbConsumacion">
                    </select>
                </div>
                <div class="col-lg-3">
                    <label class="control-label" for="cmbGradoParticipacion">Grado de participaci&oacute;n<span class="requerido">(*)</span></label>
                    <select id="cmbGradoParticipacion" class="form-control cmbGradoParticipacion" name="cmbGradoParticipacion">
                    </select>
                </div>
                <div class="col-lg-3">
                    <label class="control-label" for="cmbTRIF">Relaci&oacute;n<span class="requerido">(*)</span></label>
                    <select id="cmbTRIF" class="form-control cmbTRIF" name="cmbTRIF">
                    </select>
                </div>
                <div class="col-lg-3">
                    <label class="control-label" for="cmbEntidad">Entidad donde se cometio el delito</label>
                    <select id="cmbEntidad" class="form-control cmbEntidad" name="cmbEntidad" onchange="comboMunicipio();">
                    </select>
                </div>
                <div class="col-lg-3">
                    <label class="control-label" for="cmbMunicipio">Municipio donde se cometio el delito</label>
                    <select id="cmbMunicipio" class="form-control cmbMunicipio" name="cmbMunicipio">
                    </select>
                </div>
                <div class="col-lg-6">
                    <label class="control-label" for="txtDireccion">Calle</label>
                    <input type="text" id="txtDireccion" class="form-control" name="txtDireccion" />
                </div>
                <div class="col-lg-6">
                    <label class="control-label" for="txtColonia">Colonia</label>
                    <input type="text" id="txtColonia" class="form-control" name="txtColonia" />
                </div>

                <div class="col-lg-2">
                    <label class="control-label" for="txtNInterior">N&uacute;mero Interior</label>
                    <input type="text" id="txtNInterior" class="form-control" name="txtNInterior" />
                </div>
                <div class="col-lg-2">
                    <label class="control-label" for="txtNExterior">N&uacute;mero Exterior</label>
                    <input type="text" id="txtNExterior" class="form-control" name="txtNExterior" />
                </div>
                <div class="col-lg-2">
                    <label class="control-label" for="txtCP">C.P.</label>
                    <input type="text" class="form-control" id="txtCP" name="txtCP" maxlength="5"/>
                </div>
                <div class="col-lg-2">
                    <label class="control-label" for="txtFechaDelito">Fecha Delito<span class="requerido">(*)</span></label>
                    <input readonly type="text" id="txtFechaDelito" class="form-control" name="txtFechaDelito" />
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="col-lg-12">
                    <button type="button" class="btn btn-primary" name="btnGuardaDatos" id="btnGuardaDatos" onclick="guarda();" >Guardar</button>
                    <button type="button" class="btn btn-primary" name="btnLimpiar" id="btnLimpiar" onclick="limpiaFormulario();">Limpiar</button>
                </div>
                <div class="clearfix"></div>
                <br>
                <div class="col-xs-12">
                    <div style="display:none;" class="alert alert-success alert-dismissable mensajeSuccess"></div>
                    <div style="display:none;" class="alert alert-warning alert-dismissable mensajeError"></div>
                </div>


                <div class="form-group col-lg-12"></div> 
                <br>
                <div class="form-group" >
                    <div id="divAlertWarningRelacion" class="alert alert-warning alert-dismissable" style="display:none;">                    
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="divAlertSuccesRelacion" class="alert alert-success alert-dismissable" style="display:none;">

                        <strong>Correcto!</strong> Mensaje
                    </div>
                    <div id="divAlertDagerRelacion" class="alert alert-danger alert-dismissable" style="display:none;">

                        <strong>Error!</strong> Mensaje
                    </div>
                    <div id="divAlertInfoRelacion" class="alert alert-info alert-dismissable" style="display:none;">

                        <strong>Informaci&oacute;n!</strong> Mensaje
                    </div>
                </div>  
                <div class="form-group col-lg-12"></div> 
                <div class="form-group col-lg-12">
                    <div class="form-group col-lg-12">
                        <div style="text-align: center">
                            <label class="caption">LISTADO DE RELACI&Oacute;N</label>
                        </div>
                        <div id="divResultadosRelacion"></div>
                    </div> 
                </div> 
                <div style="display:none;" class="clearfix"></div>
                <br>
            </div>
        </div>
        <!--------------------AQUI TERMINA EL CUERPO DEL FORMULARIO------------------>

    </div>

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
                global: false,
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
                global: false,
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
                global: false,
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
                global: false,
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
                global: false,
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
                global: false,
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
                global: false,
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
                global: false,
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
                global: false,
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
                global: false,
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
                global: false,
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

        comboMunicipio = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", cveEstado: $("#cmbEntidad").val(), activo: "S"},
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
        };

        comboEntidad = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                global: false,
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
                                if (object.cveEstado != "97") {
                                    $('.cmbEntidad').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                                }
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
                global: false,
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
                global: false,
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

        validarRelacion = function () {
            var mensaje = "";
            var error = true;
            if ($(".chkImputados:checkbox:checked").length == "0") {
                mensaje += "*Seleccione un imputado\n";
                error = false;
            }
            if ($(".chkOfendidos:checkbox:checked").length == "0") {
                mensaje += "*Seleccione un ofendido\n";
                error = false;
            }
            if ($(".chkDelitos:checkbox:checked").length == "0") {
                mensaje += "*Seleccione un delito\n";
                error = false;
            }
            if ($('#cmbModalidad').val() == "" || $('#cmbModalidad').val() == "0") {
                mensaje += "*Seleccione una modalidad\n";
                error = false;
            }
            if ($('#cmbComision').val() == "" || $('#cmbComision').val() == "0") {
                mensaje += "*Seleccione una comision\n";
                error = false;
            }
            if ($('#cmbConcurso').val() == "" || $('#cmbConcurso').val() == "0") {
                mensaje += "*Seleccione una concurso\n";
                error = false;
            }
            if ($('#cmbCDO').val() == "" || $('#cmbCDO').val() == "0") {
                mensaje += "*Seleccione clasificacion delito orden\n";
                error = false;
            }
            if ($('#cmbElementoComision').val() == "" || $('#cmbElementoComision').val() == "0") {
                mensaje += "*Seleccione elemento comision\n";
                error = false;
            }
            if ($('#cmbClasificacionDelito').val() == "" || $('#cmbClasificacionDelito').val() == "0") {
                mensaje += "*Seleccione clasificacion del delito\n";
                error = false;
            }
            if ($('#cmbFormaAccion').val() == "" || $('#cmbFormaAccion').val() == "0") {
                mensaje += "*Seleccione forma accion\n";
                error = false;
            }
            if ($('#cmbConsumacion').val() == "" || $('#cmbConsumacion').val() == "0") {
                mensaje += "*Seleccione consumacion\n";
                error = false;
            }
            if ($('#cmbGradoParticipacion').val() == "" || $('#cmbGradoParticipacion').val() == "0") {
                mensaje += "*Seleccione grado de participacion\n";
                error = false;
            }
            if ($('#cmbTRIF').val() == "" || $('#cmbTRIF').val() == "0") {
                mensaje += "*Seleccione tipo de relacion\n";
                error = false;
            }
            if ($('#txtFechaDelito').val() == "" || $('#txtFechaDelito').val() == "0") {
                mensaje += "*Seleccione fecha de delito\n";
                error = false;
            }
            if ($('#txtCP').val() != "" && $('#txtCP').val() != "0") {
                if ($('#txtCP').val().length != 5) {
                    mensaje += "*El  C.P. debe ser de 5 d\u00edgitos\n";
                    error = false;
                }
            }

            if (!error) {
                alert(mensaje);
            }
            return error;
        }

        guarda = function () {
            var error = true;
            if (validarRelacion()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "guardaImpOfeDel",
                        idImpOfeDelSolicitud: $("#txtIdImpoFeDelSolicitud").val(),
                        idSolicitudAudiencia: $("#idSolicitud").val(),
                        idImputadoSolicitud: $(".chkImputados:checkbox:checked").val(),
                        idOfendidoSolicitud: $(".chkOfendidos:checkbox:checked").val(),
                        idDelitoSolicitud: $(".chkDelitos:checkbox:checked").val(),
                        cveModalidad: $("#cmbModalidad").val(),
                        cveComision: $("#cmbComision").val(),
                        cveConcurso: $("#cmbConcurso").val(),
                        cveClasificacionDelitoOrden: $("#cmbCDO").val(),
                        cveElementoComision: $("#cmbElementoComision").val(),
                        cveClasificacionDelito: $("#cmbClasificacionDelito").val(),
                        cveFormaAccion: $("#cmbFormaAccion").val(),
                        cveConsumacion: $("#cmbConsumacion").val(),
                        cveMunicipio: $("#cmbMunicipio").val(),
                        cveEntidad: $("#cmbEntidad").val(),
                        cveRelacionImpOfe: $("#cmbTRIF").val(),
                        cveGradoParticipacion: $("#cmbGradoParticipacion").val(),
                        cveTerminacion: 1,
                        activo: 'S',
                        fechaDelito: $("#txtFechaDelito").val(),
                        direccion: $("#txtDireccion").val(),
                        colonia: $("#txtColonia").val(),
                        numInterior: $("#txtNInterior").val(),
                        numExterior: $("#txtNExterior").val(),
                        cp: $("#txtCP").val()
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos.estatus == "ok") {
                            $("#divAlertSuccesRelacion").html("");
                            $("#divAlertSuccesRelacion").html(datos.msj);
                            $("#divAlertSuccesRelacion").show("");
                            setTimeAlert("divAlertSuccesRelacion");
                            cargaRelacion();
                            $(".chkImputados:checkbox").removeAttr("checked");
                            $(".chkOfendidos:checkbox").removeAttr("checked");
                            $(".chkDelitos:checkbox").removeAttr("checked");
                            $("#txtIdImpoFeDelSolicitud").val('');
                            $('#RelacionInfo').html("");
                        } else if (datos.status == "Error") {
                            $("#divAlertWarningRelacion").html("");
                            $("#divAlertWarningRelacion").html(datos.resultados);
                            $("#divAlertWarningRelacion").show("");
                            setTimeAlert("divAlertWarningRelacion");
                        } else {
                            $("#divAlertWarningRelacion").html("");
                            $("#divAlertWarningRelacion").html(datos.msj);
                            $("#divAlertWarningRelacion").show("");
                            setTimeAlert("divAlertWarningRelacion");
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

        eliminar = function (id) {
            bootbox.dialog({
                message: "\u00bf Desea eliminar el registro?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesFacade.Class.php",
                                async: false,
                                dataType: "json",
                                data: {accion: "eliminaImpOfeDel",
                                    idImpOfeDelSolicitud: id
                                },
                                beforeSend: function (objeto) {
                                },
                                success: function (datos) {
                                    if (datos.status == "ok") {
                                        $("#divAlertSuccesRelacion").html("");
                                        $("#divAlertSuccesRelacion").html(datos.msj);
                                        $("#divAlertSuccesRelacion").show("");
                                        setTimeAlert("divAlertSuccesRelacion");
                                        limpiaFormulario();
                                        cargaRelacion();
                                    } else {
                                        $("#divAlertWarningRelacion").html("");
                                        $("#divAlertWarningRelacion").html(datos.msj);
                                        $("#divAlertWarningRelacion").show("");
                                        setTimeAlert("divAlertWarningRelacion");
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                                }
                            });
                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {

                        }
                    }
                }
            });
        };

        function cargaRelacion() {
            $('#divResultadosRelacion').html("");
            var idSolicitud = $("#idSolicitud").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultaImpOfeDel", idSolicitudAudiencia: idSolicitud, activo: 'S'},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.status == "ok") {
                        var tabla = "";
                        tabla += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        tabla += '<tr class="trGridAgrega">';
                        tabla += '<th width="5%">No</th>';
                        tabla += '<th width="20%">Imputado</th>';
                        tabla += '<th width="20%" >Ofendido</th>';
                        tabla += '<th width="20%" >Delito</th>';
                        tabla += '<th width="15%">Eliminar</th></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            tabla += "<tr class='trSeleccion' >";
                            tabla += "<td class='editarRegistro' onclick='editarRegistro(" + datos.data[i].idImpOfeDelSolicitud + ")' idImpOfeDelSolicitud='" + datos.data[i].idImpOfeDelSolicitud + "'>" + (i + 1) + "</td>";
                            tabla += "<td class='editarRegistro' onclick='editarRegistro(" + datos.data[i].idImpOfeDelSolicitud + ")' idImpOfeDelSolicitud='" + datos.data[i].idImpOfeDelSolicitud + "'>" + datos.data[i].nombreImputado + "</td>";
                            tabla += "<td class='editarRegistro' onclick='editarRegistro(" + datos.data[i].idImpOfeDelSolicitud + ")' idImpOfeDelSolicitud='" + datos.data[i].idImpOfeDelSolicitud + "'>" + datos.data[i].nombreOfendido + "</td>";
                            tabla += "<td class='editarRegistro' onclick='editarRegistro(" + datos.data[i].idImpOfeDelSolicitud + ")' idImpOfeDelSolicitud='" + datos.data[i].idImpOfeDelSolicitud + "'>" + datos.data[i].nombreDelito + "</td>";
                            tabla += "<td><img src='img/eliminar.png' width='27px' style='cursor:pointer;' class='eliminarRegistro' onclick='eliminar(" + datos.data[i].idImpOfeDelSolicitud + ")' idImpOfeDelSolicitud='" + datos.data[i].idImpOfeDelSolicitud + "'></td>";
                            tabla += "</tr>";
                        }
                        tabla += '</table>';
                        $('#divResultadosRelacion').html(tabla);
                        $('#divResultadosRelacion').show("");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
        }

        function editarRegistro(id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultaImpOfeDel", idImpOfeDelSolicitud: id, activo: 'S'},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.status == "ok") {
                        limpiaFormulario();

                        $('#RelacionInfo').html("<b>Capture los datos de la relaci\u00f3n: <br>Imputado: " + datos.data[0].nombreImputado + " <br>Ofendido: " + datos.data[0].nombreOfendido + " <br>Delito: " + datos.data[0].nombreDelito + ".<b><br>");
                        $('#RelacionInfo').show("");

                        $(".chkImputados:checkbox[value=" + datos.data[0].idImputadoSolicitud + "]").prop('checked', true);
                        $(".chkOfendidos:checkbox[value=" + datos.data[0].idOfendidoSolicitud + "]").prop('checked', true);
                        $(".chkDelitos:checkbox[value=" + datos.data[0].idDelitoSolicitud + "]").prop('checked', true);
                        $("#txtIdImpoFeDelSolicitud").val(datos.data[0].idImpOfeDelSolicitud);
                        $("#cmbModalidad").val(datos.data[0].cveModalidad);
                        $("#cmbComision").val(datos.data[0].cveComision);
                        $("#cmbConcurso").val(datos.data[0].cveConcurso);
                        $("#cmbCDO").val(datos.data[0].cveClasificacionDelitoOrden);
                        $("#cmbElementoComision").val(datos.data[0].cveElementoComision);
                        $("#cmbClasificacionDelito").val(datos.data[0].cveClasificacionDelito);
                        $("#cmbFormaAccion").val(datos.data[0].cveFormaAccion);
                        $("#cmbConsumacion").val(datos.data[0].cveConsumacion);
                        $("#cmbEntidad").val(datos.data[0].cveEntidad);
                        if (datos.data[0].cveEntidad != "0") {
                            comboMunicipio();
                        }
                        $("#cmbMunicipio").val(datos.data[0].cveMunicipio);
                        $("#cmbTRIF").val(datos.data[0].cveRelacionImpOfe);
                        $("#cmbGradoParticipacion").val(datos.data[0].cveGradoParticipacion);
                        $("#txtFechaDelito").val(datos.data[0].fechaDelito);
                        $("#txtDireccion").val(datos.data[0].direccion);
                        $("#txtColonia").val(datos.data[0].colonia);
                        $("#txtNInterior").val(datos.data[0].numInterior);
                        $("#txtNExterior").val(datos.data[0].numExterior);
                        $("#txtCP").val(datos.data[0].cp);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
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
            $('#RelacionInfo').html("");
        }

        $(document).ready(function () {
    //        var currentDate = new Date();
    //        var maxDate = currentDate.setDate(currentDate.getDate());
            $("#txtCP").validaCampo("0123456789");
    //        $('#txtFechaDelito').datetimepicker({
    //            locale: 'es',
    //            sideBySide: false,
    //            format: "DD/MM/YYYY",
    //            ignoreReadonly: true,
    //            maxDate: new Date()
    //        });
            $("#txtFechaDelito").datetimepicker({
                locale: 'es',
                ignoreReadonly: true,
                maxDate: new Date()
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