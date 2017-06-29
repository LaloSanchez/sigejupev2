<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
        $idCarpetaJudicial = isset($_POST['idCarpetajudicial']) ? $_POST['idCarpetajudicial'] : '';
        ?>
        <style>
            .requerido {
                color: darkred;
            }
            .tblGridAgrega{
                margin-top: 20px;
                font-family: arial;
                font-size: 14px;
                text-align: center;
            }
            .trGridAgrega{
                color: #ffffff;
                background-color: #881518;
            }
            .mayuscula{  
                text-transform: uppercase;  
            }  
            .trSeleccion:hover{
                background-color:#FFECED;
                cursor: pointer;
            }
        </style>
        <!--<div class="page-content" id="areadetrabajo">-->
        <div class="panel panel-default" id="bodyRelacion">
            <div class="panel-heading">
                <h5 class="panel-title">                                                            
                    Relaci&oacute;n
                </h5>
            </div>
            <div class="panel-body">
                <!--------------------AQUI COMIEZA EL CUERPO DEL FORMULARIO------------------>
                <input type="hidden" name="idCarpetaJudicial" id="idcarpetaJudicial" value="<?php echo $idCarpetaJudicial ?>"></input>
                <div id="RelacionInfo" style="margin-left:15px; margin-bottom: 25px; "></div>
                <div class="tab-content tabs-flat">
                    <div class="tabbable tabs-left">
                        <ul id="myTab3" class="nav nav-tabs">
                            <li class="tab-sky active">
                                <a href="#divImputados" data-toggle="tab" aria-expanded="true">Imputados</a>
                            </li>
                            <li class="tab-red">
                                <a href="#divOfendidos" data-toggle="tab" aria-expanded="false">Sujetos Pasivos del Delito</a>
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
                        <input type="hidden" name="txtIdImpoFeDelCarpeta" id="txtIdImpoFeDelCarpeta"/>
                        <label for="cmbModalidad" class="ccontrol-label">Modalidad<span class="requerido">(*)</span></label>
                        <select id="cmbModalidad" class="form-control cmbModalidad" name="cmbModalidad">
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="cmbComision" class="control-label">Comision<span class="requerido">(*)</span></label>
                        <select id="cmbComision" class="form-control cmbComision" name="cmbComision">
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="cmbConcurso" class="control-label">Concurso<span class="requerido">(*)</span></label>
                        <select id="cmbConcurso" class="form-control cmbConcurso" name="cmbConcurso">
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="cmbCDO" class="control-label">Clasificación Delito Orden<span class="requerido">(*)</span></label>
                        <select id="cmbCDO" class="form-control cmbCDO" name="cmbCDO">
                        </select>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-3">
                        <label for="cmbElementoComision" class="control-label">Elemento Comisión<span class="requerido">(*)</span></label>
                        <select id="cmbElementoComision" class="form-control cmbElementoComision" name="cmbElementoComision">
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="cmbClasificacionDelito" class="control-label">Clasificación Delito<span class="requerido">(*)</span></label>
                        <select id="cmbClasificacionDelito" class="form-control cmbClasificacionDelito" name="cmbClasificacionDelito">
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="cmbFormaAccion" class="control-label">Forma Acción<span class="requerido">(*)</span></label>
                        <select id="cmbFormaAccion" class="form-control cmbFormaAccion" name="cmbFormaAccion">
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="cmbConsumacion" class="control-label">Consumación<span class="requerido">(*)</span></label>
                        <select id="cmbConsumacion" class="form-control cmbConsumacion" name="cmbConsumacion">
                        </select>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-3">
                        <label for="cmbGradoParticipacion" class="control-label">Grado Participacion<span class="requerido">(*)</span></label>
                        <select id="cmbGradoParticipacion" class="form-control cmbGradoParticipacion" name="cmbGradoParticipacion">
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="cmbTRIF" class="control-label">Relación<span class="requerido">(*)</span></label>
                        <select id="cmbTRIF" class="form-control cmbTRIF" name="cmbTRIF">
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="cmbEntidad" class="control-label">Entidad donde se cometio el delito</label>
                        <select id="cmbEntidad" class="form-control cmbEntidad" name="cmbEntidad">
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label for="cmbMunicipio" class="control-label">Municipio donde se cometio el delito</label>
                        <select id="cmbMunicipio" class="form-control cmbMunicipio" name="cmbMunicipio">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>

                    <div class="col-lg-6">
                        <label for="txtDireccion" class="control-label">Calle</label>
                        <input type="text" id="txtDireccion" class="form-control" name="txtDireccion" />
                    </div>
                    <div class="col-lg-6">
                        <label for="txtColonia" class="control-label">Colonia</label>
                        <input type="text" id="txtColonia" class="form-control" name="txtColonia" />
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-2">
                        <label for="txtNInterior" class="control-label">N&uacute;mero Interior</label>
                        <input type="text" id="txtNInterior" class="form-control" name="txtNInterior" maxlength="5" />
                    </div>
                    <div class="col-lg-2">
                        <label for="txtNExterior" class="control-label">N&uacute;mero Exterior</label>
                        <input type="text" id="txtNExterior" class="form-control" name="txtNExterior" maxlength="5" />
                    </div>
                    <div class="col-lg-2">
                        <label for="txtCP" class="control-label">C.P.</label>
                        <input type="text" class="form-control" id="txtCP" name="txtCP" maxlength="5"/>
                    </div>
                    <div class="col-lg-2">
                        <label for="txtFechaDelito" class="control-label">Fecha Delito<span class="requerido">(*)</span></label>
                        <input type="text" id="txtFechaDelito" class="form-control" name="txtFechaDelito" />
                    </div>
                    <div class="clearfix"></div>

                    <br>
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-primary" name="guardaDatos" id="guardaDatos">Guardar</button>
                        <button type="button" class="btn btn-primary" name="nuevoDatos" id="nuevoDatos">Limpiar</button>
                    </div>
                    <div class="clearfix"></div>
                    <br>
                    <div class="col-lg-12">
                        <div style="display: none;" class="alert alert-success alert-dismissable mensaje"></div>
                        <div id="divAlertWarningImpofedel" class="alert alert-warning alert-dismissable" style="display:none;">                    
                            <strong>Advertencia!</strong> Mensaje
                        </div>
                    </div>


                    <br>
                    <!--<table class="table table-hover" id="tablaImputadoOfendidos">-->
                    <!--<table id="tablaImputadoOfendidos"  border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">
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
                    </table>-->
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


            <script type="text/javascript">

                ////////////////////////////////////////////////////////
                /////////////////FUNCIONES DE JAVASCRIPT////////////////
                ////////////////////////////////////////////////////////
                function cargaImputados() {
                    var idcarpetaJudicial = $("#idCarpetaJudicial").val();
                    var tabla = "";
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                        global: false,
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", idCarpetaJudicial: idcarpetaJudicial, activo: 'S'},
                        beforeSend: function () {
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
                                        tabla += '<td><input type="checkbox" class="chkImputados" name="chkImputados" id="chkImputados" value="' + val.idImputadoCarpeta + '"/></td>';
                                        tabla += "</tr>";
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar imputados:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                    var idCarpetaJudicial = $("#idCarpetaJudicial").val();
                    var tabla = "";
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/ofendidoscarpetas/OfendidoscarpetasFacade.Class.php",
                        global: false,
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", idCarpetaJudicial: idCarpetaJudicial, activo: 'S'},
                        beforeSend: function () {
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
                                        tabla += '<td><input type="checkbox" class="chkOfendidos" name="chkOfendidos" id="chkOfendidos" value="' + val.idOfendidoCarpeta + '"/></td>';
                                        tabla += "</tr>";
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar carpetas judiciales:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
                        }
                    });
                    $("#tablaOfendidos tbody").append(tabla);
                }
                $('#bodyRelacion').on('click', '.chkOfendidos', function () {
                    if ($(".chkOfendidos:checkbox:checked").length > 1) {
                        alert("Solo debes elegir 1 Sujeto Pasivo del Delito");
                        return false;
                    } else {
                        return true;
                    }
                });

                function cargaDelitos() {
                    var idCarpetaJudicial = $("#idCarpetaJudicial").val();
                    var tabla = "";
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/delitoscarpetas/DelitoscarpetasFacade.Class.php",
                        global: false,
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", idCarpetaJudicial: idCarpetaJudicial, activo: 'S'},
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (key, val) {
                                        tabla += "<tr>";
                                        tabla += "<td>" + val.desDelito + "</td>";
                                        tabla += '<td><input type="checkbox" class="chkDelitos" name="chkDelitos" id="chkDelitos" value="' + val.idDelitoCarpeta + '"/></td>';
                                        tabla += "</tr>";
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar delitos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                $('.cmbModalidad').empty();
                                $('.cmbModalidad').append('<option value="0">Seleccione una opci&oacute;n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('.cmbModalidad').append('<option value="' + object.cveModalidad + '">' + object.desModalidad + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar modalidades:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                $('.cmbComision').empty();
                                $('.cmbComision').append('<option value="0">Seleccione una opci&oacute;n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('.cmbComision').append('<option value="' + object.cveComision + '">' + object.desComision + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar comisiones:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                $('.cmbConcurso').empty();
                                $('.cmbConcurso').append('<option value="0">Seleccione una opci&oacute;n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('.cmbConcurso').append('<option value="' + object.cveConcurso + '">' + object.desConcurso + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar concursos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                $('.cmbCDO').empty();
                                $('.cmbCDO').append('<option value="0">Seleccione una opci&oacute;n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('.cmbCDO').append('<option value="' + object.cveClasificacionDelitoOrden + '">' + object.desClasificacionDelitoOrden + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar clasificaciones de delitos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                $('.cmbElementoComision').empty();
                                $('.cmbElementoComision').append('<option value="0">Seleccione una opci&oacute;n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('.cmbElementoComision').append('<option value="' + object.cveElementoComision + '">' + object.desElementoComision + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar comisiones:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                $('.cmbClasificacionDelito').empty();
                                $('.cmbClasificacionDelito').append('<option value="0">Seleccione una opci&oacute;n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('.cmbClasificacionDelito').append('<option value="' + object.cveClasificacionDelito + '">' + object.desClasificacionDelito + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar clasificaciones de delitos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                $('.cmbFormaAccion').empty();
                                $('.cmbFormaAccion').append('<option value="0">Seleccione una opci&oacute;n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('.cmbFormaAccion').append('<option value="' + object.cveFormaAccion + '">' + object.desFormaAccion + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar acciones:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                $('.cmbConsumacion').empty();
                                $('.cmbConsumacion').append('<option value="0">Seleccione una opci&oacute;n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('.cmbConsumacion').append('<option value="' + object.cveConsumacion + '">' + object.desConsumacion + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar consumaciones:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
                        }
                    });
                };

                comboMunicipio = function (entidad) {
                    if (entidad > 0) {
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                            global: false,
                            async: false,
                            dataType: "json",
                            data: {accion: "consultar", cveEstado: entidad, activo: "S"},
                            beforeSend: function () {
                            },
                            success: function (datos) {
                                try {
                                    $('.cmbMunicipio').empty();
                                    $('.cmbMunicipio').append('<option value="0">Seleccione una opci&oacute;n</option>');
                                    if (datos.totalCount > 0) {
                                        $.each(datos.data, function (count, object) {
                                            $('.cmbMunicipio').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
                                        });
                                    }
                                } catch (e) {
                                    alert("Error al cargar municipios:" + e);
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                        global: false,
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", activo: "S"},
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                $('.cmbEntidad').empty();
                                $('.cmbEntidad').append('<option value="0">Seleccione una opci&oacute;n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        if (object.cveEstado != 97) {
                                            $('.cmbEntidad').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                                        }
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar entidades:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                $('.cmbGradoParticipacion').empty();
                                $('.cmbGradoParticipacion').append('<option value="0">Seleccione una opci&oacute;n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('.cmbGradoParticipacion').append('<option value="' + object.cveGradoParticipacion + '">' + object.desGradoParticipacion + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar grado de participacion:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                $('.cmbTRIF').empty();
                                $('.cmbTRIF').append('<option value="0">Seleccione una opci&oacute;n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('.cmbTRIF').append('<option value="' + object.cveRelacionImpOfe + '">' + object.desRelacionImpOfe + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar relacion:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
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
                    $("#divAlertWarningImpofedel").empty();
                    $(".mensaje").empty();
                    var idImpoFeDelCarpeta = $("#txtIdImpoFeDelCarpeta").val();
                    var idCarpetaJudicial = $("#idCarpetaJudicial").val();
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
                    if (fechaOriginal != "") {
                        var fechaOsplit = fechaOriginal.split(" ");
                        var fecha = fechaOsplit[0].split("/");
                        var anioO = fecha[2];
                        var mesO = fecha[1];
                        var diaO = fecha[0];
                        var fechaDelito = anioO + "-" + mesO + "-" + diaO + " " + fechaOsplit[1];
                    } else {
                        var fechaDelito = "";
                    }

                    var direccion = $("#txtDireccion").val();
                    var colonia = $("#txtColonia").val();
                    var interior = $("#txtNInterior").val();
                    var exterior = $("#txtNExterior").val();
                    var cp = $("#txtCP").val();
                    $(".mensaje").empty();
                    var mensaje = "";

                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/impofedelcarpetas/ImpofedelcarpetasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardarRelacion",
                            idImpOfeDelCarpeta: idImpoFeDelCarpeta,
                            idCarpetaJudicial: idCarpetaJudicial,
                            idImputadoCarpeta: imputado,
                            idOfendidoCarpeta: ofendido,
                            idDelitoCarpeta: delito,
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
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            try {
                                if (datos.totalCount == 0) {
                                    if (datos.estatus == "Error") {
                                        $.each(datos.resultados, function (key, val) {
                                            mensaje += val.mensaje;
                                        });
                                        $("#divAlertWarningImpofedel").append(mensaje);
                                        $("#divAlertWarningImpofedel").show();
                                        setTimeout(function () {
                                            $("#divAlertWarningImpofedel").hide();
                                        }, 4000);
                                    } else {
                                        mensaje += datos.text;
                                    }
                                } else {
                                    mensaje += datos.text;
                                    limpiaFormulario();
                                    $(".mensaje").append(mensaje);
                                    $(".mensaje").show();
                                    setTimeout(function () {
                                        $(".mensaje").hide();
                                    }, 4000);
                                }
                            } catch (e) {
                                alert("Error al cargar datos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
                        }
                    });
                    array = [];
                    cargaRelacion();
                    return false;
                });



                function eliminarRegistro(cve) {
                    bootbox.dialog({
                        message: "\u00bf Desea eliminar la relacion?",
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {
                                    $(".mensaje").empty();
                                    var idCarpetaJudicial = $("#idCarpetaJudicial").val();
                                    var idImpofedelCarpeta = cve;
                                    var mensaje = "";
                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/impofedelcarpetas/ImpofedelcarpetasFacade.Class.php",
                                        async: false,
                                        dataType: "json",
                                        data: {accion: "bajaRelacion",
                                            idImpOfeDelCarpeta: idImpofedelCarpeta,
                                            idCarpetaJudicial: idCarpetaJudicial,
                                            activo: 'N'},
                                        beforeSend: function () {
                                        },
                                        success: function (datos) {
                                            try {
                                                console.log(datos);
                                                if (datos.totalCount > 0) {
                                                    mensaje += "<strong>" + datos.text + "</strong>";
                                                    $(".mensaje").append(mensaje);
                                                    $(".mensaje").show();
                                                    setTimeout(function () {
                                                        $(".mensaje").hide();
                                                    }, 4000);
                                                } else {
                                                    $("#divAlertWarningImpofedel").empty();
                                                    mensaje += "<strong>" + datos.text + "</strong>";
                                                    $("#divAlertWarningImpofedel").append(mensaje);
                                                    $("#divAlertWarningImpofedel").show();
                                                    setTimeout(function () {
                                                        $("#divAlertWarningImpofedel").hide();
                                                    }, 4000);
                                                }
                                            } catch (e) {
                                                alert("Error al cargar datos:" + e);
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion impofedel:\n\n" + otroobj);
                                        }
                                    });

                                    cargaRelacion();

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
                }

                function cargaRelacion() {
                    var idCarpetaJudicial = $("#idCarpetaJudicial").val();
                    //$("#tablaImputadoOfendidos tbody").empty();
                    $('#divResultadosRelacion').html("");
                    var tabla = "";
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/impofedelcarpetas/ImpofedelcarpetasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultarRelacion", idCarpetaJudicial: idCarpetaJudicial, activo: 'S'},
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            var tabla = "";
                            try {
                                if (datos.totalCount == 0) {
                                    return false;
                                }
                                if (datos.status == "ok") {
                                    tabla += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                                    tabla += '<tr class="trGridAgrega">';
                                    tabla += '<th width="20%">Imputado</th>';
                                    tabla += '<th width="20%" >Sujetos Pasivos del Delito</th>';
                                    tabla += '<th width="20%" >Delito</th>';
                                    tabla += '<th width="20%">Eliminar</th></tr>';
                                    $.each(datos.data, function (key, val) {
                                        //                            tabla += "<tr class='trSeleccion' >";
                                        //                            if (val.imputados.cveTipoPersona == 1) {
                                        //                                tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelCarpeta + ")' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.imputados.nombre + " " + val.imputados.paterno + " " + val.imputados.materno + "</td>";
                                        //                            } else {
                                        //                                tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelCarpeta + ")' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.imputados.nombreMoral + "</td>";
                                        //
                                        //                            }
                                        //                            if (val.ofendidos.cveTipoPersona == 1) {
                                        //                                tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelCarpeta + ")' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.ofendidos.nombre + " " + val.ofendidos.paterno + " " + val.ofendidos.materno + "</td>";
                                        //                            } else {
                                        //                                tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelCarpeta + ")' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.ofendidos.nombreMoral + "</td>";
                                        //
                                        //                            }
                                        //                            tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelCarpeta + ")' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.delitos.desDelito + "</td>";
                                        tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelCarpeta + ")' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.nombreImputado + "</td>";
                                        tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelCarpeta + ")' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.nombreOfendido + "</td>";
                                        tabla += "<td class='editarRegistro' onclick='editarRegistro(" + val.idImpOfeDelCarpeta + ")' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.nombreDelito + "</td>";
                                        tabla += "<td><img src='img/eliminar.png' width='27px' style='cursor:pointer;' class='eliminarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "' onclick='eliminarRegistro(" + val.idImpOfeDelCarpeta + ")' ></td>";
                                        tabla += "</tr>";
                                        //array.push(val);
                                    });
                                    tabla += "</table>";
                                }

                                $('#divResultadosRelacion').html(tabla);
                                $('#divResultadosRelacion').show("");
                            } catch (e) {
                                alert("Error al cargar relaciones:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
                        }
                    });
                    $("#tablaImputadoOfendidos tbody").append(tabla);
                }

                function editarRegistro(id) {
                    //$('.nav-tabs a[href="#divImputados"]').tab('show');
                    //limpiaFormulario();
                    //var idImpOfeDelCarpeta = id;
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/impofedelcarpetas/ImpofedelcarpetasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultarRelacion", idImpOfeDelCarpeta: id, activo: 'S'},
                        beforeSend: function () {
                        },
                        success: function (datos) {
                            if (datos.status == "ok") {
                                limpiaFormulario();
                                //$.each(datos.data, function (key, val) {
                                //if (idImpOfeDelCarpeta == val.idImpOfeDelCarpeta) {
                                comboMunicipio(datos.data[0].cveEntidad);
                                var nombreImputado = "";
                                var nombreOfendido = "";
                                var nombreDelito = "";
                                //                    if ( val.imputados.cveTipoPersona == 1 ) {
                                //                        nombreImputado = val.imputados.nombre + " " + val.imputados.paterno + " " + val.imputados.materno;
                                //                    } else {
                                //                        nombreImputado = val.imputados.nombreMoral;
                                //                    }
                                //                    if ( val.ofendidos.cveTipoPersona == 1 ) {
                                //                        nombreOfendido = val.ofendidos.nombre + " " + val.ofendidos.paterno + " " + val.ofendidos.materno;
                                //                    } else {
                                //                        nombreOfendido = val.ofendidos.nombreMoral;
                                //                    }
                                nombreImputado = datos.data[0].nombreImputado;
                                nombreOfendido = datos.data[0].nombreOfendido;
                                nombreDelito = datos.data[0].nombreDelito;
                                $('#RelacionInfo').html("<b>Capture los datos de la relaci\u00f3n: <br>Imputado: " + nombreImputado + " <br>Sujeto Pasivo del Delito: " + nombreOfendido + " <br>Delito: " + nombreDelito + ".<b><br>");
                                $('#RelacionInfo').show("");
                                $(".chkImputados:checkbox[value=" + datos.data[0].idImputadoCarpeta + "]").prop('checked', true);
                                $(".chkOfendidos:checkbox[value=" + datos.data[0].idOfendidoCarpeta + "]").prop('checked', true);
                                $(".chkDelitos:checkbox[value=" + datos.data[0].idDelitoCarpeta + "]").prop('checked', true);
                                $("#txtIdImpoFeDelCarpeta").val(datos.data[0].idImpOfeDelCarpeta);
                                $("#cmbModalidad").val(datos.data[0].cveModalidad);
                                $("#cmbComision").val(datos.data[0].cveComision);
                                $("#cmbConcurso").val(datos.data[0].cveConcurso);
                                $("#cmbCDO").val(datos.data[0].cveClasificacionDelitoOrden);
                                $("#cmbElementoComision").val(datos.data[0].cveElementoComision);
                                $("#cmbClasificacionDelito").val(datos.data[0].cveClasificacionDelito);
                                $("#cmbFormaAccion").val(datos.data[0].cveFormaAccion);
                                $("#cmbConsumacion").val(datos.data[0].cveConsumacion);
                                if (datos.data[0].cveMunicipio != "" && datos.data[0].cveMunicipio != "0") {
                                    $("#cmbMunicipio").val(datos.data[0].cveMunicipio);
                                }
                                if (datos.data[0].cveEntidad != "" && datos.data[0].cveEntidad != "0") {
                                    $("#cmbEntidad").val(datos.data[0].cveEntidad);
                                }

                                $("#cmbTRIF").val(datos.data[0].cveRelacionImpOfe);
                                $("#cmbGradoParticipacion").val(datos.data[0].cveGradoParticipacion);
                                if (datos.data[0].fechaDelito != "" && datos.data[0].fechaDelito != "00/00/0000 00:00:00") {
                                    //                        var fecha = val.fechaDelito.split(" ");
                                    //                        var datosFecha = fecha[0].split("-");
                                    //                        var anio = datosFecha[0];
                                    //                        var mes = datosFecha[1];
                                    //                        var dia = datosFecha[2];
                                    //                        var fechaDelito = dia + "/" + mes +"/" + anio + " " + fecha[1];
                                    var fechaDelito = datos.data[0].fechaDelito;
                                } else {
                                    var fechaDelito = "";
                                }

                                $("#txtFechaDelito").val(fechaDelito);
                                $("#txtDireccion").val(datos.data[0].direccion);
                                $("#txtColonia").val(datos.data[0].colonia);
                                $("#txtNInterior").val(datos.data[0].numInterior);
                                $("#txtNExterior").val(datos.data[0].numExterior);
                                $("#txtCP").val(datos.data[0].cp);
                                //}
                                //});
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
                        }
                    });
                }

                function limpiaFormulario() {
                    $('.cmbMunicipio').empty();
                    $(".chkImputados:checkbox").removeAttr("checked");
                    $(".chkOfendidos:checkbox").removeAttr("checked");
                    $(".chkDelitos:checkbox").removeAttr("checked");
                    $("#txtIdImpoFeDelCarpeta").val('');
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
                ////////////////////////////////////////////////////////
                /////////////////INICIALIZA FUNCIONES///////////////////
                ////////////////////////////////////////////////////////


                $(document).ready(function () {
                    var fecha = new Date();
                    var now = new Date(fecha.getFullYear(), fecha.getMonth(), fecha.getDate(), 0, 0, 0, 0);
                    $("#txtFechaDelito").datetimepicker({
                        locale: 'es',
                        maxDate: now
                                //format: 'DD/MM/YYYY'
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
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>