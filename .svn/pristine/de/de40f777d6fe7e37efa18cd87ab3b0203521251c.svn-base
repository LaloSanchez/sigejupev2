<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <!doctype html> 

    <div class="panel panel-default bodySecuencias">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                SECUENCIAS
            </h5>
        </div>
        <div class="panel-body">
            <!--------------------AQUI COMIEZA EL CUERPO DEL FORMULARIO------------------>
            <div class="widget-body padding-5">

                <form role="form" id="historia_filtros">
                    <div class="row">
                        <div class="col-lg-5 col-sm-5 col-xs-5">
                            <div class="form-group">
                                <div class="input-group">
                                    <span
                                        class="input-group-addon no-padding-top no-padding-bottom padding-left-5 padding-right-5">
    <!--                                    <img src="assets/img/iconos/user-id.png" style="height:24px;width:24px;">-->
                                    </span>
                                    <input type="hidden" style="width:100%" id="filtro_juzgado" data-accion="juzgado" name="filtro_juzgado" class="selecto2" placeholder="Buscar Juzgado...">
                                </div>
                            </div>
                        </div>
                        <br/>

                        <div class="col-lg-10 col-sm-10 col-xs-10 col-md-offset-1" style="display:none;" id="datos-juzgado">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tabSecuencias" aria-controls="tabSecuencias" role="tab" data-toggle="tab">SECUENCIAS</a></li>
                                <li role="presentation"><a href="#tabRoles" aria-controls="tabRoles" id="openRoles"role="tab" data-toggle="tab">ROLES</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tabSecuencias">

                                    <div class="header" style="background-color: #00695C; color: white;">
                                        SECUENCIAS <strong id="nombre-juzgado"></strong>
                                    </div>
                                    <table class="table table-hover" id="tablaSecuencias">
                                        <thead class="bordered-darkorange">
                                            <tr>
                                                <th>ROL</th>
                                                <th>JUZGADO</th>
                                                <th>APARICION</th>
                                                <th>ORDEN</th>
                                                <th>DESCANSO</th>
                                                <th>OPCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>
                                    <br/>

                                    <div id="paginadorSecuencias"></div>
                                    <br/>

                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAltaSecuencias" name="agregaSecuencias" id="agregaSecuencias">Agregar Nuevo</button>
                                    <!-- Modal Alta Secuencias -->
                                    <div class="modal fade" id="modalAltaSecuencias" tabindex="-1" role="dialog" aria-labelledby="modalAltaSecuenciasLabel">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="modalAltaSecuenciasLabel">NUEVO REGISTRO</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal">

                                                    </form>
                                                    <form class="form-horizontal">
                                                        <div class="form-group">
                                                            <label for="cmbRolJuzgador" class="col-sm-3 control-label">ROL JUZGADOR</label>
                                                            <div class="col-sm-8">
                                                                <select id="cmbRolJuzgador" class="form-control cmbRolJuzgador" name="cmbRolJuzgador">
                                                                    <option value="0">Seleccione una opcion</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <form class="form-inline">
                                                            <div class="form-group">
                                                                <label for="cmbDescanso" class="col-sm-3 control-label">DESCANSA FIN DE SEMANA</label>
                                                                <div class="col-sm-8">
                                                                    <select id="cmbDescanso" class="form-control cmbSN" name="cmbDescanso">
                                                                        <option value="0">Seleccione una opcion</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" name="altaSecuencia" id="altaSecuencia">Guardar</button>
                                                    <button type="button" class="btn btn-primary limpiar">Limpiar</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Modificacion Secuencias -->
                                    <div class="modal fade" id="modalModificacionSecuencias" tabindex="-1" role="dialog" aria-labelledby="modalModificacionSecuenciasLabel">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="modalModificacionSecuenciasLabel">EDITAR REGISTRO</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal">

                                                    </form>
                                                    <form class="form-horizontal">
                                                        <div class="form-group">
                                                            <label for="cmbRolJuzgadorE" class="col-sm-3 control-label">ROL JUZGADOR</label>
                                                            <div class="col-sm-8">
                                                                <input type="hidden" name="idSecuencia" id="idSecuencia" readlonly></input>
                                                                <select id="cmbRolJuzgadorE" class="form-control cmbRolJuzgador" name="cmbRolJuzgadorE">
                                                                    <option value="0">Seleccione una opcion</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <form class="form-inline">
                                                            <div class="form-group">
                                                                <label for="cmbDescansoE" class="col-sm-3 control-label">DESCANSA FIN DE SEMANA</label>
                                                                <div class="col-sm-8">
                                                                    <select id="cmbDescansoE" class="form-control cmbSN" name="cmbDescansoE">
                                                                        <option value="0">Seleccione una opcion</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" name="edicionSecuencia" id="edicionSecuencia">Guardar</button>
                                                    <button type="button" class="btn btn-primary limpiar">Limpiar</button>
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="tabRoles">
                                    <div class="header" style="background-color: #00695C; color: white;">
                                        ROLES <strong id="nombre-juzgado"></strong>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <table class="table table-hover" id="tablaRoles">
                                                <thead class="bordered-darkorange">
                                                    <tr>
                                                        <th>NOMBRE</th>
                                                        <th>ROL</th>
                                                        <th>TIPO JUZGADOR</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-md-6">
                                            <table class="table table-hover" id="tablaRolesSecuencias">
                                                <thead class="bordered-darkorange">
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>ROL</th>
                                                        <th>JUEZ</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                </tbody>
                                            </table>
                                            </br>
                                            <button type="button" class="btn btn-primary" name="guardarUltimoRol" id="guardarUltimoRol">Guardar</button>
                                        </div>
                                    </div>
                                    <div style="display:none;" class="mensaje alert-success"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div style="display:none;" class="alert alert-success alert-dismissable mensajeSuccess"></div>
                        <div style="display:none;" class="alert alert-warning alert-dismissable mensajeError"></div>
                    </div>
            </div>
            </form>

            <!-- <div class="flip-scroll"> -->

            <!-- </div> -->


        </div>
        <!--------------------AQUI TERMINA EL CUERPO DEL FORMULARIO------------------>


        <script type="text/javascript">


            ////////////////////////////////////////////////////////
            /////////////////FUNCIONES DE JAVASCRIPT////////////////
            ////////////////////////////////////////////////////////
            function cargaSecuencias(pagina) {
                var cveJuzgado = $("#filtro_juzgado").select2("val");
                var url = "../fachadas/sigejupe/secuencias/SecuenciasFacade.Class.php";
                var datos = "accion=consultarGenerico&cveJuzgado=" + cveJuzgado + "&pagina=" + pagina;
                $("#tablaSecuencias tbody").empty();
                $("#paginadorSecuencias").empty();
                var tabla = "";
                var totalPaginas = 0;
                var pagina = 0;
                $.ajax({
                    type: "POST",
                    url: url,
                    async: false,
                    dataType: "json",
                    data: datos,
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (key, val) {
                                    totalPaginas = val.totalPaginas;
                                    pagina = val.pagina;
                                    tabla += "<tr>";
                                    tabla += "<td>" + val.desRol + "</td>";
                                    tabla += "<td>" + val.desJuzgado + "</td>";
                                    tabla += "<td>" + val.aparicion + "</td>";
                                    tabla += "<td>" + val.orden + "</td>";
                                    tabla += "<td>" + val.descansaFinSemana + "</td>";
                                    tabla += '<td><a id="modificaJuzgador" data-toggle="modal" data-secuencia="' + val.idSecuencia + '" data-target="#modalModificacionSecuencias" aria-hidden="true">Editar</a>  <a id="eliminaSecuencia" data-secuencia="' + val.idSecuencia + '" aria-hidden="true">Eliminar</a></td>';
                                    tabla += "</tr>";
                                });
                            }
                        } catch (e) {
                            alert("Error al cargar secuencias:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de secuencias:\n\n" + otroobj);
                    }
                });
                $("#tablaSecuencias tbody").append(tabla);
                var paginacion = '';
                paginacion += '<nav>';
                paginacion += '<ul class="pagination">';
                if (totalPaginas > 1) {
                    if (pagina != 1)
                        paginacion += '<li><a class="paginadorRef" aria-label="Previous" data-ref="' + (pagina - 1) + '" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
                    for (var i = 1; i <= totalPaginas; i++) {
                        if (pagina == i) {
                            paginacion += '<li class="active"><a href="#">' + pagina + '<span class="sr-only">(current)</span></a></li>';
                        } else {
                            paginacion += '<li><a class="paginadorRef" data-ref="' + i + '" href="#">' + i + '</a></li>';
                        }
                    }
                    if (pagina != totalPaginas) {
                        pagina = parseInt(pagina) + parseInt(1);
                        paginacion += '<li><a class="paginadorRef" aria-label="Next" data-ref="' + (pagina) + '" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                    }
                }
                paginacion += '</ul>';
                paginacion += '</nav>';
                $("#paginadorSecuencias").append(paginacion);
            }


            comboRolesJuzgadores = function () {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/rolesjuzgadores/RolesjuzgadoresFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", activo: "S"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbRolJuzgador').empty();
                            $('.cmbRolJuzgador').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbRolJuzgador').append('<option value="' + object.cveRolJuzgador + '">' + object.desRolJuzgador + '</option>');
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
            comboJuzgadores = function () {
                var cveJuzgado = $("#filtro_juzgado").select2("val");
                var datos = "accion=consultarGenericoJuzgado&cveJuzgado=" + cveJuzgado + "&pagina=1";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: datos,
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('.cmbJuzgadores').empty();
                            $('.cmbJuzgadores').append('<option value="0">Seleccione una opcion</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('.cmbJuzgadores').append('<option value="' + object.idJuzgador + '">' + object.nombre + ' ' + object.paterno + ' ' + object.materno + '</option>');
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
            comboSN = function () {
                $('.cmbSN').empty();
                $('.cmbSN').append('<option value="0">Seleccione una opcion</option>');
                $('.cmbSN').append('<option value="S">SI</option>');
                $('.cmbSN').append('<option value="N">NO</option>');
            };

            function cargaUltimoRolJuzgador() {
                var cveJuzgado = $("#filtro_juzgado").select2("val");
                $("#tablaRoles tbody").empty();
                var tabla = "";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/ultimoroljuzgador/UltimoroljuzgadorFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
    //                        accion: "consultarRolJuzgador",
                        accion: "rolJuzgadorSecuencias",
                        cveJuzgado: cveJuzgado},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (key, val) {
                                    tabla += "<tr>";
                                    tabla += "<td>" + val.nombreJuzgador + "</td>";
                                    tabla += "<td>" + val.tipoDesc + "</td>";
                                    tabla += "<td>" + val.rolDesc + "</td>";
                                    tabla += "</tr>";
                                });
                            }
                        } catch (e) {
                            alert("Error al cargar Roles:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Roles:\n\n" + otroobj);
                    }
                });
                $("#tablaRoles").append(tabla);
            }
            ;
            function cargaSecuenciasRoles() {
                var cveJuzgado = $("#filtro_juzgado").select2("val");
                $("#tablaRolesSecuencias tbody").empty();
                var tabla = "";
                contador = 1;
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/ultimoroljuzgador/UltimoroljuzgadorFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
    //                        accion: "consultarSecuenciasRoles",
                        accion: "rolJuzgadorSecuencias",
                        cveJuzgado: cveJuzgado},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (key, val) {
                                    tabla += "<tr>";
                                    tabla += "<td>" + contador + "</td>";
                                    tabla += "<td>" + val.rolDesc + "</td>";
                                    tabla += '<td><select name="cmbJuzgador_' + val.idSecuencia + '" id="cmbJuzgador_' + val.idSecuencia + '" class="cmbJuzgadores"></select></td>';
                                    tabla += "<td style='display:none;' class='td_datos' id='td_" + contador + "' idSecuencia='" + val.idSecuencia + "' idUltimoRol='" + val.idUltimoRolJuzgador + "' idProgramacion='" + val.idProgramacion + "' cveRolJuzgador='" + val.cveRolJuzgador + "' aparicion='" + val.aparicion + "' numSemana='" + val.numSemana + "'>";
                                    tabla += "</tr>";
                                    contador++;
                                });
                                $("#tablaRolesSecuencias tbody").append(tabla);
                                comboJuzgadores();
                                $.each(datos.data, function (key, val) {
                                    $("#cmbJuzgador_" + val.idSecuencia + " option[value='" + val.idJuzgador + "']").attr("selected", "selected");
                                });
                            }
                        } catch (e) {
                            alert("Error al cargar Roles:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Roles:\n\n" + otroobj);
                    }
                });
                //$("#tablaRolesSecuencias tbody").append(tabla);
            }
            ;
            ////////////////////////////////////////////////////////
            /////////////////INICIALIZA FUNCIONES///////////////////
            ////////////////////////////////////////////////////////

            $(function () {

                $.each($('.selecto2'), function (index) {
                    var seleccion = this;
                    var facade = $(this).data('accion');
                    var url = "";
                    var accion = "";
                    if (facade == "juzgado") {
                        url = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php"
                    }
                    $(seleccion).select2({
                        placeholder: "SELECCIONA",
                        minimumInputLength: 3,
                        ajax: {
                            url: url,
                            type: 'POST',
                            dataType: 'json',
                            quietMillis: 250,
                            data: function (term, page) {
                                if (facade == "juzgado") {
                                    return {
                                        desJuzgado: term,
                                        activo: 'S',
                                        accion: "consultarLike"
                                    };
                                }
                            },
                            results: function (data) {
                                if (facade == "juzgado") {
                                    if (data.totalCount > 0) {
                                        return {
                                            results: $.map(data.data, function (item) {
                                                return {
                                                    text: item.desJuzgado,
                                                    id: item.cveJuzgado
                                                }
                                            })
                                        };
                                    } else {
                                        return {
                                            results: ""
                                        };
                                    }
                                }
                            },
                            cache: true
                        },
                        initSelection: function (element, callback) {
                        },
                        escapeMarkup: function (m) {
                            return m;
                        } // we do not want to escape markup since we are displaying html in results
                    });

                });
                // Cada vez que se seleccione un valor en un select
                $('.selecto2').on('change', function () {
                    var selector = $(this).attr('id');
                    var valor = $(this).val();
                    $("#datos-juzgado").show();
                    if (selector == "filtro_juzgado") {
                        var data = $('#' + selector).select2('data');
                        var cveJuzgado = data.id;
                        var url = "../fachadas/sigejupe/secuencias/SecuenciasFacade.Class.php";
                        var datos = "accion=consultarGenerico&cveJuzgado=" + cveJuzgado + "&pagina=1";
                        $("#tablaSecuencias tbody").empty();
                        $("#paginadorSecuencias").empty();
                        var tabla = "";
                        var totalPaginas = 0;
                        var pagina = 0;
                        $.ajax({
                            type: "POST",
                            url: url,
                            async: false,
                            dataType: "json",
                            data: datos,
                            beforeSend: function (objeto) {
                            },
                            success: function (datos) {
                                try {
                                    if (datos.totalCount > 0) {
                                        $.each(datos.data, function (key, val) {
                                            totalPaginas = val.totalPaginas;
                                            pagina = val.pagina;
                                            tabla += "<tr>";
                                            tabla += "<td>" + val.desRol + "</td>";
                                            tabla += "<td>" + val.desJuzgado + "</td>";
                                            tabla += "<td>" + val.aparicion + "</td>";
                                            tabla += "<td>" + val.orden + "</td>";
                                            tabla += "<td>" + val.descansaFinSemana + "</td>";
                                            tabla += '<td><a id="modificaJuzgador" data-toggle="modal" data-secuencia="' + val.idSecuencia + '" data-target="#modalModificacionSecuencias" aria-hidden="true">Editar</a>  <a id="eliminaSecuencia" data-secuencia="' + val.idSecuencia + '" aria-hidden="true">Eliminar</a></td>';
                                            tabla += "</tr>";
                                        });
                                    }
                                } catch (e) {
                                    alert("Error al cargar secuencias:" + e);
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion de secuencias:\n\n" + otroobj);
                            }
                        });
                        $("#tablaSecuencias tbody").append(tabla);
                        var paginacion = '';
                        paginacion += '<nav>';
                        paginacion += '<ul class="pagination">';
                        if (totalPaginas > 1) {
                            if (pagina != 1)
                                paginacion += '<li><a class="paginadorRef" aria-label="Previous" data-ref="' + (pagina - 1) + '" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
                            for (var i = 1; i <= totalPaginas; i++) {
                                if (pagina == i) {
                                    paginacion += '<li class="active"><a href="#">' + pagina + '<span class="sr-only">(current)</span></a></li>';
                                } else {
                                    paginacion += '<li><a class="paginadorRef" data-ref="' + i + '" href="#">' + i + '</a></li>';
                                }
                            }
                            if (pagina != totalPaginas) {
                                pagina = parseInt(pagina) + parseInt(1);
                                paginacion += '<li><a class="paginadorRef" aria-label="Next" data-ref="' + (pagina) + '" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                            }
                        }
                        paginacion += '</ul>';
                        paginacion += '</nav>';
                        $("#paginadorSecuencias").append(paginacion);
                        cargaUltimoRolJuzgador();
                        cargaSecuenciasRoles();
                        comboRolesJuzgadores();
                        comboJuzgadores();
                    }

                });

                $('#modalAltaSecuencias').on('shown.bs.modal', function (evento) {
                    $('#cmbRolJuzgador option[value="0"]').attr("selected", "selected");
                    $('#cmbDescanso option[value="0"]').attr("selected", "selected");
                });
                $('#modalModificacionSecuencias').on('shown.bs.modal', function (evento) {
                    $('#cmbRolJuzgadorE option[value="0"]').attr("selected", "selected");
                    $('#cmbDescansoE option[value="0"]').attr("selected", "selected");
                    var eventoRes = evento.relatedTarget;
                    var idSecuencia = $(eventoRes).data('secuencia');
                    var url = "../fachadas/sigejupe/secuencias/SecuenciasFacade.Class.php";
                    var datos = "accion=consultar&idSecuencia=" + idSecuencia;
                    $.ajax({
                        type: "POST",
                        url: url,
                        async: false,
                        dataType: "json",
                        data: datos,
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $.each(datos.data, function (key, val) {
                                    $('#idSecuencia').val(val.idSecuencia);
                                    $('#cmbRolJuzgadorE option[value="' + val.cveRolJuzgador + '"]').attr("selected", "selected");
                                    $('#cmbDescansoE option[value="' + val.descansaFinSemana + '"]').attr("selected", "selected");
                                });
                            } catch (e) {
                                alert("Error al cargar Edicion Secuencias:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Edicion Secuencias:\n\n" + otroobj);
                        }
                    });

                });
                $(".bodySecuencias").delegate("#eliminaSecuencia", "click", function () {
                    var idSecuencia = $(this).data('secuencia');
                    $(".mensajeSuccess").empty();
                    bootbox.dialog({
                        message: "\u00bf Desea eliminar la secuencia?",
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {
                                    var cveJuzgado = $("#filtro_juzgado").select2("val");
                                    var datos = "accion=guardar&idSecuencia=" + idSecuencia + "&activo='N'";
                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/secuencias/SecuenciasFacade.Class.php",
                                        async: false,
                                        dataType: "json",
                                        data: datos,
                                        beforeSend: function (objeto) {
                                        },
                                        success: function (datos) {
                                            try {
                                                $(".mensajeSuccess").append(datos.text);
                                                $(".mensajeSuccess").show();
                                                setTimeout(function () {
                                                    $(".mensajeSuccess").hide();
                                                }, 4000);
                                                cargaSecuencias(1);
                                            } catch (e) {
                                                alert("Error al eliminar Secuencia:" + e);
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion eliminar Secuencias:\n\n" + otroobj);
                                        }
                                    });
                                    cargaUltimoRolJuzgador();
                                    cargaSecuenciasRoles();

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
                });
                $(".bodySecuencias").delegate(".paginadorRef", "click", function () {
                    var pagina = $(this).data('ref');
                    cargaSecuencias(pagina);
                });

                $('#altaSecuencia', 'body').click(function () {
                    var cveJuzgado = $("#filtro_juzgado").select2("val");
                    var rolJuzgador = $("#cmbRolJuzgador").val();
                    var descanso = $("#cmbDescanso").val();
                    var datos = "accion=guardar&cveRolJuzgador=" + rolJuzgador + "&cveJuzgado=" + cveJuzgado + "&descansaFinSemana=" + descanso + "&activo='S'";
                    if (rolJuzgador == 0) {
                        alert("El campo Rol Juzgador esta vacio");
                        return false;
                    }
                    if (descanso == 0) {
                        alert("El campo Descansa Fin de Semana esta vacio");
                        return false;
                    }
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/secuencias/SecuenciasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: datos,
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                alert(datos.text);
                                cargaSecuencias(1);
                            } catch (e) {
                                alert("Error al cargar Secuencias:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Secuencias:\n\n" + otroobj);
                        }
                    });
                    cargaUltimoRolJuzgador();
                    cargaSecuenciasRoles();
                });
                $('#edicionSecuencia', 'body').click(function () {
                    var idSecuencia = $("#idSecuencia").val();
                    var cveJuzgado = $("#filtro_juzgado").select2("val");
                    var rolJuzgador = $("#cmbRolJuzgadorE").val();
                    var descanso = $("#cmbDescansoE").val();
                    var datos = "accion=guardar&idSecuencia=" + idSecuencia + "&cveRolJuzgador=" + rolJuzgador + "&cveJuzgado=" + cveJuzgado + "&descansaFinSemana=" + descanso + "&activo='S'";
                    if (rolJuzgador == 0) {
                        alert("El campo Rol Juzgador esta vacio");
                        return false;
                    }
                    if (descanso == 0) {
                        alert("El campo Descansa Fin de Semana esta vacio");
                        return false;
                    }
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/secuencias/SecuenciasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: datos,
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                alert(datos.text);
                                cargaSecuencias(1);
                            } catch (e) {
                                alert("Error al cargar Editar Secuencia:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Editar Secuencias:\n\n" + otroobj);
                        }
                    });
                    cargaUltimoRolJuzgador();
                    cargaSecuenciasRoles();
                });
                $('#guardarUltimoRol', 'body').click(function () {
                    var rowCount = $('#tablaRolesSecuencias >tbody >tr').length;
                    $(".mensaje").empty();
                    $("#msjError").html('');
                    var parametros = [];
                    var mensaje = "";
                    mensaje += "<ul>";
                    for (var i = 1; i <= rowCount; i++) {
                        var secuenciaCmb = $("#td_" + i).attr("idSecuencia");
                        var ultimorol = $("#td_" + i).attr("idUltimoRol");
                        var secuencia = $("#td_" + i).attr("idSecuencia");
                        var programacion = $("#td_" + i).attr("idProgramacion");
                        var idrol = $("#td_" + i).attr("cveRolJuzgador");
                        var juez = $("#cmbJuzgador_" + secuenciaCmb).val();
                        var aparicion = $("#td_" + i).attr("aparicion");
                        var semana = $("#td_" + i).attr("numSemana");
                        parametros.push({idUltimoRolJuzgador: ultimorol, idSecuencia: secuencia, idProgramacion: programacion, cveRolJuzgador: idrol, idJuzgador: juez, aparicion: aparicion, numSemana: semana});
                    }
                    var datos = "accion=guardaUltimoRol&parametros=" + JSON.stringify(parametros);
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/ultimoroljuzgador/UltimoroljuzgadorFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: datos,
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                var count = 1;
                                $.each(datos.resultados, function (key, val) {
                                    mensaje += "<li>REGISTRO " + count + ": " + val.mensaje + "</li>";
                                    count++;
                                });
                            } catch (e) {
                                alert("Error al cargar Guardar Rol Secuencia:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Guardar Rol Secuencia:\n\n" + otroobj);
                        }
                    });
                    mensaje += "<ul>";
                    cargaUltimoRolJuzgador();
                    cargaSecuenciasRoles();
                    $(".mensaje").append(mensaje);
                    $(".mensaje").show();
                    setTimeout(function () {
                        $(".mensaje").hide();
                    }, 4000);
                });
                $('#openRoles', 'body').click(function () {
                    cargaUltimoRolJuzgador();
                    cargaSecuenciasRoles();
                });
                $('.limpiar', 'body').click(function () {
                    $('#cmbRolJuzgador option[value="0"]').attr("selected", "selected");
                    $('#cmbDescanso option[value="0"]').attr("selected", "selected");
                    $('#cmbRolJuzgadorE option[value="0"]').attr("selected", "selected");
                    $('#cmbDescansoE option[value="0"]').attr("selected", "selected");
                });

                comboRolesJuzgadores();
                comboSN();
            });


        </script>


    </div>
    </div>

    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>