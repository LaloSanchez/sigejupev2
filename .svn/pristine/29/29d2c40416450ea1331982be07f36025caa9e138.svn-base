<?php
date_default_timezone_set('America/Mexico_City');
$fecha = date("d/m/Y");
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>

    <style>
        .alert {
            display: none;
        }

        #divHideForm {
            display: none;
            position: absolute;
            width: 100%;
            height: 100vh;
            opacity: .5;
            z-index: 99999;
            background: #427468;
        }

    </style>
    <link href="../vistas/css/generalStyles.css" rel="stylesheet"/>

    <!-- Modal -->
    <div class="modal fade" id="descripcion-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Descripción del registro</h4>
                </div>
                <div class="modal-body" id="body-descripcion-modal">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Bitacora de asignación de audiencias.
            </h5>
        </div>
        <div class="panel-body">

            <div class="col-lg-12">
                <form action="" class="form-horizontal" role="form" id="form-busqueda-solicitud-audiencia">

                    <input type="hidden" name="accion" value="consultar"/>
                    <input type="hidden" name="offset" id="offset" value="0"/>
                    <input type="hidden" name="pagina" id="pagina" value="1"/>
                    <input type="hidden" name="porPagina" id="porPagina" value="100"/>

                    <div class="form-group">
                        <label for="cveJuzgado" class="col-sm-3 control-label">Juzgado</label>

                        <div class="col-lg-7">
                            <select name="cveJuzgado" class="form-control" id="cveJuzgado"></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cveTipoCarpeta" class="col-sm-3 control-label">Tipo Carpeta</label>

                        <div class="col-lg-3">
                            <select name="cveTipoCarpeta" class="form-control" id="cveTipoCarpeta"></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="numero" class="col-sm-3 control-label">Num. Causa</label>

                        <div class="col-lg-3">
                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Número de Causa">
                        </div>

                        <label for="anio" class="col-sm-1 control-label"> / </label>

                        <div class="col-lg-3">
                            <input type="text" class="form-control" id="anio" name="anio" maxlength="4"
                                   placeholder="Año de Causa">
                        </div>

                    </div>


                    <div class="form-group">
                        <label for="carpetaInv" class="col-sm-3 control-label">Carpeta Inv.</label>

                        <div class="col-lg-3">
                            <input type="text" class="form-control" id="carpetaInv" name="carpetaInv"
                                   placeholder="Carpeta de Investigación"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nuc" class="col-sm-3 control-label">Nuc</label>

                        <div class="col-lg-3">
                            <input type="text" class="form-control" id="nuc" name="nuc"
                                   placeholder="Número unico de causa"/>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="fechaInicial" class="col-sm-3 control-label">
                            Fecha Inicio
                            <span class="requerido"> (*)</span>
                        </label>

                        <div class="col-lg-3">
                            <input type="text" class="form-control datepicker" id="fechaInicial" name="fechaInicial"
                                   value="<?php echo $fecha ?>"/>
                        </div>

                        <label for="fechaFinal" class="col-sm-1 control-label">
                            Fecha Fin
                            <span class="requerido"> (*)</span>
                        </label>

                        <div class="col-lg-3">
                            <input type="text" class="form-control datepicker" id="fechaFin" name="fechaFin"
                                   value="<?php echo $fecha ?>"/>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div id="notificaciones" class="alert" role="alert" style="display:none;"></div>

                    <div class="clearfix"></div>

                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input class="btn btn-primary" id="consultar" value="Consultar" type="submit">
                            <a id="limpiar" href="#" class="btn btn-primary">Limpiar</a>
                        </div>
                    </div>


                </form>

                <div id="tabla-bitacora-asignacion-audiencias" style="display: none;">

                    <hr/>
                    <div class="clearfix"></div>


                    <div id="paginacion" class="row" style="display: none;">
                        <div class="col-md-2 col-md-offset-6">
                            <br/><br/>
                            Total de Registros: <label id="totalRegistros"></label>
                        </div>
                        <div class="col-md-2">
                            Páginas
                            <select class="form-control" name="paginas" id="paginas"
                                    onchange="changePage(this.value);"></select>
                        </div>
                        <div class="col-md-2">
                            Registros por página
                            <select class="form-control" name="porpagina" id="porpagina"
                                    onchange="changePorPagina(this.value)">
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option selected value="100">100</option>
                            </select>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <br/>

                    <!--<div id="links" class="pull-right" style="display: none;"></div>-->

                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tipo Carpeta</th>
                                <th>Carpeta Inv.</th>
                                <th>Causa</th>
                                <th>Nuc</th>
                                <th>Juzgador</th>
                                <th>Sala</th>
                                <th>Fecha Movimiento</th>
                                <th>Fecha Ingreso</th>
                                <th>Fecha Inicial</th>
                                <th>Fecha Final</th>
                                <th>Observaciones</th>
                            </tr>
                        </thead>
                        <tbody id="body-bitacora-asignacion-audiencias">

                        </tbody>
                    </table>


                </div>

            </div>


        </div>

    </div>


    <script type="text/javascript">

        formatoFecha = function (campo) {
            var fecha = campo.split(' ');
            if (fecha.length > 1) {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0] + " " + fecha[1];
            } else {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0];
            }
        }

        comboJuzgados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {

                    $("#divHideForm").hide();

                    try {

                        $('#cveJuzgado').empty();
                        $('#cveJuzgado').append('<option data-tipoJuzgado="0" value="">Seleccione una opcion</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if (object.cveTipoJuzgado == 1 || object.cveTipoJuzgado == 2 || object.cveTipoJuzgado == 3 || object.cveTipoJuzgado == 4) {
                                    $('#cveJuzgado').append('<option data-tipoJuzgado="' + object.cveTipoJuzgado + '" value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                                }
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
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                async: false,
                global: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {

                    $("#divHideForm").hide();

                    try {
                        $('#cveTipoCarpeta').empty();
                        $('#cveTipoCarpeta').append('<option value="">Seleccione una opción</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {

                                if (object.cveTipoCarpeta >= 1 && object.cveTipoCarpeta <= 5) {
                                    $('#cveTipoCarpeta').append('<option id="tipo-' + object.cveTipoCarpeta + '" value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
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


        validarConsulta = function () {

            var error = false;
            var mensajes = "";


            var cveJuzgado = $("#cveJuzgado").val();
            var numero = $("#numero").val();
            var anio = $("#anio").val();
            var cveTipoCarpeta = $("#cveTipoCarpeta").val();
            var carpetaInv = $("#carpetaInv").val();
            var nuc = $("#nuc").val();

            if (cveJuzgado == '' && numero == '' && anio == '' && cveTipoCarpeta == '' && carpetaInv == '' && nuc == '') {
                error = true;
                mensajes += '*Tienes que ingresar al menos un parametro de busqueda aparte de la fecha de inicio y fin.<br>';
            }


            if ($("#fechaInicial").val() == '' || $("#fechaFin").val() == '') {
                error = true;
                mensajes += "*Tienes que seleccionar la fecha de inicio y fecha de fin.<br>";
            } else {

                var fechaInicialSplit = $("#fechaInicial").val().split("/");
                var fechaFinalSplit = $("#fechaFin").val().split("/");

                var fechaInicial = new Date(fechaInicialSplit[2], fechaInicialSplit[1] - 1, fechaInicialSplit[0]).getTime();
                var fechaFinal = new Date(fechaFinalSplit[2], fechaFinalSplit[1] - 1, fechaFinalSplit[0]).getTime();

                if (fechaInicial > fechaFinal) {
                    error = true;
                    mensajes += "* La fecha de inicio tiene que ser menor a la fecha de fin.<br>";
                }

            }


            if (error) {
                $("#notificaciones").hide();
                var close = '<button type="button" id="cerrar-notificacion" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                $("#notificaciones").addClass('alert-warning').html(close + '<strong>' + mensajes + '</strong>').show();

                setTimeout(function () {
                    $("#notificaciones").hide();
                }, 6000);
            }

            return error;

        };

        abreModalDescripcion = function (data) {

            var htmldescripcion = "";

            htmldescripcion += '<dl class="dl-horizontal">';
            htmldescripcion += '<dt>Tipo de Carpeta: </dt>';
            htmldescripcion += '<dd>' + data.desTipoCarpeta + '</dd>';
            htmldescripcion += '<dt>Causa de Investigación: </dt>';
            htmldescripcion += '<dd>' + data.carpetaInv + '</dd>';
            htmldescripcion += '<dt>Causa: </dt>';
            htmldescripcion += '<dd>' + data.causa + '</dd>';
            htmldescripcion += '<dt>Nuc: </dt>';
            htmldescripcion += '<dd>' + data.nuc + '</dd>';
            htmldescripcion += '<dt>Juzgador: </dt>';
            htmldescripcion += '<dd>' + data.juzgador + '</dd>';
            htmldescripcion += '<dt>Sala: </dt>';
            htmldescripcion += '<dd>' + data.sala + '</dd>';
            htmldescripcion += '<dt>Fecha de Ingreso: </dt>';
            htmldescripcion += '<dd>' + data.fechaIngreso + '</dd>';
            htmldescripcion += '<dt>Fecha Inicial: </dt>';
            htmldescripcion += '<dd>' + data.fechaInicial + '</dd>';
            htmldescripcion += '<dt>Fecha Final: </dt>';
            htmldescripcion += '<dd>' + data.fechaFinal + '</dd>';
            htmldescripcion += '<dt>Observaciones: </dt>';
            htmldescripcion += '<dd>' + data.observaciones + '</dd>';
            htmldescripcion += '</dl>';

            $("#body-descripcion-modal").html(htmldescripcion);
            $("#descripcion-modal").modal('show');
        };

        enviarConsulta = function (data) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/bitacoraasignacionaudiencias/BitacoraasignacionaudienciasFacade.Class.php",
                dataType: "json",
                data: data,
                success: function (datos) {

                    $("#divHideForm").hide();

                    try {

                        if (datos.estatus == 'ok') {

                            var html = "";

                            $.each(datos.data, function (k, v) {
                                html += '<tr style="cursor:pointer;">';
                                //onclick="abreModalDescripcion(' + JSON.stringify(v) + ')"
                                html += "<td onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'>" + v.idBitacoraAsignacion + '</td>';
                                html += "<td onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'>" + v.desTipoCarpeta + '</td>';
                                html += "<td onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'>" + v.carpetaInv + '</td>';
                                html += "<td onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'>" + v.causa + '</td>';
                                html += "<td onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'>" + v.nuc + '</td>';
                                html += "<td onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'>" + v.juzgador + '</td>';
                                html += "<td onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'>" + v.sala + '</td>';
                                html += "<td onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'>" + v.fechaMovimiento + '</td>';
                                html += "<td onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'>" + v.fechaIngreso + '</td>';
                                html += "<td onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'>" + v.fechaInicial + '</td>';
                                html += "<td onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'>" + v.fechaFinal + '</td>';
                                html += "<td onclick='abreModalDescripcion(" + JSON.stringify(v) + ")'>" + v.observaciones + '</td>';
                                html += '</tr>';
                            });

                            $("#notificaciones").hide();
                            $("#body-bitacora-asignacion-audiencias").html(html);
                            $("#tabla-bitacora-asignacion-audiencias").show();

                            printLinks(datos.total, datos.pagina);

                            setTimeout(function () {
                                $("#notificaciones").hide();
                            }, 6000);

                        } else if (datos.estatus == 'error') {

                            var mensajes = '';
                            $.each(datos.mensaje, function (k, v) {
                                mensajes += '<p>' + v + '<p>';
                            });

                            $("#notificaciones").hide();
                            $('#tabla-bitacora-asignacion-audiencias').hide('fast');
                            var close = '<button type="button" id="cerrar-notificacion" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                            $("#notificaciones").addClass('alert-warning').html(close + '<strong>' + mensajes + '</strong>').show();

                            setTimeout(function () {
                                $("#notificaciones").hide();
                            }, 6000);
                        }


                    } catch (e) {
                        alert("Client Error: error al consultar la bitacora de asignacion de audiencias:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Server Error: error en la peticion a bitacora de asignacion de audiencias:\n\n" + otroobj);
                }
            });
        };

        printLinks = function (total, pagina) {

            var pages = Math.ceil(total / $("#porPagina").val());
            var paginas = '';
            var i;

            for (i = 0; i < pages; i++) {

                if (pagina - 1 == i) {
                    paginas += '<option selected value="' + (i + 1) + '">' + (i + 1) + '</option>';
                } else {
                    paginas += '<option value="' + (i + 1) + '">' + (i + 1) + '</option>';

                }

            }

            $("#totalRegistros").text(total);

            $("#paginas").html(paginas).show('fast', function () {
                $("#paginacion").show();
            });


        };

        changePorPagina = function (porPagina) {
            $("#porPagina").val(porPagina);
            changePage(1);
        };

        changePage = function (page) {

            $("#offset").val((page - 1) * $("#porPagina").val());
            $("#pagina").val(page);
            $("#form-busqueda-solicitud-audiencia").trigger('submit');
        };

        limpiarForm = function () {
            $("#offset").val(0);
            $("#pagina").val(1);
            $("#porPagina").val(100);
            $('#form-busqueda-solicitud-audiencia')[0].reset();
            $('#tabla-bitacora-asignacion-audiencias').hide('fast');
        }

        $(function () {


            comboTipoCarpeta();
            comboJuzgados();


            /*
             funcion para al cambiar juzgado relacionar las correspondientes tipos de carpeta
             */

            $("#cveJuzgado").on('change', function (e) {
                var tipoJuzgado = $(this).find(':selected').attr('data-tipoJuzgado');
                $("#cveTipoCarpeta").val('');
                //tipo de juzgado 4 es = a tipo de carpeta 4
                //tipo de juzgado 2 es = a tipo de carpeta 3
                //tipo de juzgado 1 es = a tipo de carpeta 1 y 2
                //tipo de juzgado 3 es = a tipo de carpeta 5


                if (tipoJuzgado == 4) {

                    $("#tipo-1, #tipo-2, #tipo-3, #tipo-5").hide();
                    $("#tipo-4").show();

                } else if (tipoJuzgado == 2) {

                    $("#tipo-1, #tipo-2, #tipo-4, #tipo-5").hide();
                    $("#tipo-3").show();

                } else if (tipoJuzgado == 1) {

                    $("#tipo-3, #tipo-4, #tipo-5").hide();
                    $("#tipo-1 , #tipo-2").show();

                } else if (tipoJuzgado == 3) {

                    $("#tipo-1, #tipo-2, #tipo-3, #tipo-4").hide();
                    $("#tipo-5").show();

                } else if (tipoJuzgado == '' || tipoJuzgado == '0') {
                    //mostramos todos los tipos de carpetas
                    var options = $('#cveTipoCarpeta option');


                    $.map(options, function (option) {
                        $("#" + option.id).show();
                    });

                }

                //alert(dataTipoJuzgado);
            });


            $('#numero').validaCampo('0123456789');
            $('#anio').validaCampo('0123456789');


            $("#limpiar").on('click', function (e) {
                e.preventDefault();
                limpiarForm();
            });

            $(document).on('click', '#cerrar-notificacion', function () {
                $("#notificaciones").fadeOut('fast');
            });

            $('#form-busqueda-solicitud-audiencia').on('submit', function (e) {
                e.preventDefault();
                if (!validarConsulta()) {
                    var data = $(this).serialize();
                    enviarConsulta(data);
                }

            });

            $(".datepicker").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            });

        });

    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>