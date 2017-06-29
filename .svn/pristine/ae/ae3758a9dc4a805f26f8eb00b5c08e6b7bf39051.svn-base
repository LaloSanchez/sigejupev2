<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
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

        #divMenssage {
            width: 100%;
            height: 40px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            margin-top: 40vh;
            margin-bottom: auto;
            color: #284740;
            background: #FFFFFF;
            text-transform: uppercase;

        }

        #divImgloading {
            background: #FFFFFF url(img/cargando_1.gif) no-repeat;
            background-position: center;
            width: 100%;
            height: 70px;
            margin-left: auto;
            margin-right: auto;
        }

        .panel panel-default {
            background: #427468;
            color: #ebf3f1;
        }

        .panel-heading {
            background: #427468;
            color: #ebf3f1;
        }

        .panel-group .panel-heading {
            background: #427468;
            color: #ebf3f1;
        }

        .panel-default > .panel-heading {
            background: #427468;
            color: #ebf3f1;
        }
    </style>
    <link href="../vistas/css/generalStyles.css" rel="stylesheet"/>
    <!--<div class="page-content" id="areadetrabajo">-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Eliminar Solicitudes Incompletas de Audiencia.
            </h5>
        </div>
        <div class="panel-body">

            <div class="col-lg-12">
                <form action="" class="form-horizontal" role="form" id="form-busqueda-solicitud-audiencia">

                    <input type="hidden" name="accion" value="consultar"/>
                    <input type="hidden" name="offset" id="offset" value="0"/>
                    <input type="hidden" name="pagina" id="pagina" value="1"/>

                    <div class="form-group">
                        <label for="nuc" class="col-sm-3 control-label">Nuc</label>

                        <div class="col-lg-3">
                            <input type="text" class="form-control" id="nuc" name="nuc"
                                   placeholder="Número unico de causa"/>
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
                        <label for="fechaInicial" class="col-sm-3 control-label">Fecha Inicio</label>

                        <div class="col-lg-3">
                            <input type="text" class="form-control datepicker" id="fechaInicial" name="fechaInicial"/>
                        </div>

                        <label for="fechaFinal" class="col-sm-1 control-label">Fecha Fin</label>

                        <div class="col-lg-3">
                            <input type="text" class="form-control datepicker" id="fechaFin" name="fechaFin"/>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input class="btn btn-primary" id="consultar" value="Consultar" type="submit">
                            <a id="limpiar" href="#" class="btn btn-primary">Limpiar</a>
                        </div>
                    </div>


                    <div class="clearfix"></div>

                    <div id="notificaciones" class="alert" role="alert" style="display:none;"></div>


                </form>

                <div id="tabla-solicitudes-audiencias" style="display: none;">

                    <hr/>
                    <div class="clearfix"></div>

                    <div>
                        <strong id="total-solicitudes"></strong> solicitudes sin completar.
                    </div>

                    <form id="form-eliminar-solicitudes-audiencias">

                        <input type="hidden" name="accion" value="eliminar"/>

                        <hr/>
                        <div class="clearfix"></div>
                        <div id="links" class="pull-right" style="display: none;"></div>

                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>Carpeta Inv.</th>
                                <th>Nuc</th>
                                <th>imputado / Ofendido</th>
                                <th>Juzgado</th>
                                <th>Fecha de Ingreso</th>
                                <th>
                                    <input id="selecciona-todas-solicitudes" type="checkbox"/>
                                </th>
                            </tr>
                            </thead>
                            <tbody id="body-solicitudes-audiencias">

                            </tbody>
                        </table>

                        <input type="submit" class="btn btn-primary" value="Eliminar Solicitudes Seleccionadas"/>

                    </form>
                </div>

            </div>


        </div>
    </div>
    <!--</div>-->
    <script type="text/javascript">

        validarConsulta = function () {

            var error = false;
            var mensajes = "";


            if (error) {
                $("#notificaciones").hide();
                var close = '<button type="button" id="cerrar-notificacion" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                $("#notificaciones").addClass('alert-warning').html(close + '<strong>' + mensajes + '</strong>').show();
            }

            return error;

        };

        enviarConsulta = function (data) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/eliminarsolicitudes/EliminarsolicitudesFacade.Class.php",
                dataType: "json",
                data: data,
                success: function (datos) {
                    try {

                        if (datos.estatus == 'ok') {

                            var html = "";

                            $.each(datos.data, function (k, v) {
                                html += '<tr>';
                                html += '<td data-solicitud="' + v.idSolicitudAudiencia + '" style="cursor:pointer;" class="check-solicitud">' + v.carpetaInv + '</td>';
                                html += '<td data-solicitud="' + v.idSolicitudAudiencia + '" style="cursor:pointer;" class="check-solicitud">' + v.nuc + '</td>';
                                html += '<td data-solicitud="' + v.idSolicitudAudiencia + '" style="cursor:pointer;" class="check-solicitud">' + v.imputadoofendido + '</td>';
                                html += '<td data-solicitud="' + v.idSolicitudAudiencia + '" style="cursor:pointer;" class="check-solicitud">' + v.desJuzgado + '</td>';
                                html += '<td data-solicitud="' + v.idSolicitudAudiencia + '" style="cursor:pointer;" class="check-solicitud">' + v.fechaRegistro + '</td>';
                                html += '<td><input id="check-' + v.idSolicitudAudiencia + '" type="checkbox" name="solicitud[]" value="' + v.idSolicitudAudiencia + '" class="check-solicitud-audiencia"></td>';
                                html += '</tr>';
                            });

                            $("#notificaciones").hide();
                            $("#total-solicitudes").text(datos.total);
                            $("#body-solicitudes-audiencias").html(html);
                            $("#tabla-solicitudes-audiencias").show();

                            printLinks(datos.total, datos.pagina);


                        } else if (datos.estatus == 'error') {

                            var mensajes = '';
                            $.each(datos.mensaje, function (k, v) {
                                mensajes += '<p>' + v + '<p>';
                            });

                            $("#notificaciones").hide();
                            $('#tabla-solicitudes-audiencias').hide('fast');
                            var close = '<button type="button" id="cerrar-notificacion" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                            $("#notificaciones").removeClass('alert-success').addClass('alert-warning').html(close + '<strong>' + mensajes + '</strong>').show();

                            setTimeout(function () {
                                $("#notificaciones").hide();
                            }, 3000);

                        }


                    } catch (e) {
                        alert("Client Error: error al consultar la bitacora de asignacion de audiencias:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Server Error: error en la peticion a bitacora de asignacion de audiencias:\n\n" + otroobj);
                }
            });
        }


        printLinks = function (total, pagina) {

            var pages = Math.ceil(total / 15);
            var html = '';

            var i;

            html += 'Paginas: <nav>';
            html += '<ul class="pagination">';

            for (i = 0; i < pages; i++) {

                if (pagina - 1 == i) {
                    html += '<li class="active"><a href="javascript:void(0)" onclick="changePage(' + (i + 1) + ')">' + (i + 1) + '</a></li>';
                } else {
                    html += '<li><a href="javascript:void(0)" onclick="changePage(' + (i + 1) + ')">' + (i + 1) + '</a></li>';

                }


            }

            html += '</ul>';
            html += '</nav>';

            $("#links").html(html).show();


        };

        changePage = function (page) {

            $("#offset").val((page - 1 ) * 15);
            $("#pagina").val(page);
            $("#form-busqueda-solicitud-audiencia").trigger('submit');
        }


        $(function () {

            var currentDate = new Date();
            var maxDate = currentDate.setMonth(currentDate.getMonth() - 1);

            $('.datepicker').datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
                maxDate: maxDate
            });

            $("#limpiar").on('click', function (e) {
                e.preventDefault();
                $('#form-busqueda-solicitud-audiencia')[0].reset();
                $('#tabla-audiencias').hide('fast');
            });

            $(document).on('click', '#cerrar-notificacion', function () {
                $("#notificaciones").fadeOut('fast');
            });

            $(document).on('click', '.check-solicitud', function (e) {
                e.preventDefault();
                //var checkSolicitudElement = jQuery(this).closest('tr').find('[type=checkbox]');

                var idsolicitud = $(this).data('solicitud');

                var checkSolicitudElement = $("#check-" + idsolicitud);

                if (checkSolicitudElement.is(":checked")) {
                    checkSolicitudElement.prop('checked', false);
                    return;
                }

                checkSolicitudElement.prop('checked', true);

            });

            $('#form-busqueda-solicitud-audiencia').on('submit', function (e) {
                e.preventDefault();
                if (!validarConsulta()) {
                    var data = $(this).serialize();
                    enviarConsulta(data);
                }

            });

            $("#selecciona-todas-solicitudes").on('change', function () {
                if ($(this).is(':checked')) {
                    $(".check-solicitud-audiencia").prop('checked', true);
                    return;
                }
                $(".check-solicitud-audiencia").prop('checked', false);

            });

            $('#form-eliminar-solicitudes-audiencias').on('submit', function (e) {
                e.preventDefault();

                var data = $(this).serialize();

                bootbox.dialog({
                    message: "\u00bfSeguro quieres eliminar la(s) solicitud(es) seleccionada(s)? \nSe eliminar\u00e1n todas sus relaciones.",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/eliminarsolicitudes/EliminarsolicitudesFacade.Class.php",
                                    dataType: "json",
                                    data: data,
                                    success: function (datos) {
                                        try {

                                            if (datos.estatus == 'ok') {

                                                $("#notificaciones").hide();
                                                $("#tabla-solicitudes-audiencias").hide();
                                                var close = '<button type="button" id="cerrar-notificacion" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                                                $("#notificaciones").removeClass('alert-warning').addClass('alert-success').html(close + '<strong>' + datos.mensaje + '</strong>').show();

                                                $("#offset").val('0');
                                                $("#pagina").val('1');


                                                setTimeout(function () {
                                                    $("#notificaciones").hide();
                                                }, 3000);

                                            } else if (datos.estatus == 'error') {

                                                var mensajes = '';
                                                $.each(datos.mensaje, function (k, v) {
                                                    mensajes += '<p>' + v + '<p>';
                                                });

                                                $("#notificaciones").hide();
                                                var close = '<button type="button" id="cerrar-notificacion" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                                                $("#notificaciones").removeClass('alert-success').addClass('alert-warning').html(close + '<strong>' + mensajes + '</strong>').show();

                                                setTimeout(function () {
                                                    $("#notificaciones").hide();
                                                }, 3000);
                                            }


                                            $('html, body').animate({
                                                scrollTop: $("#notificaciones").offset().top
                                            }, 300);


                                        } catch (e) {
                                            alert("Client Error: error al consultar la bitacora de asignacion de audiencias:" + e);
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Server Error: error en la peticion a bitacora de asignacion de audiencias:\n\n" + otroobj);
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