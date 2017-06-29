<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>

    <style>
        #fixedbutton {
            position: fixed;
            bottom: 30px;
            right: 2px;
        }

        .fixedalert {
            position: fixed;
            bottom: 40px;
        }
    </style>
    <!-- Page Body -->
    <div class="page-body">

        <div class="row">

            <div class="col-xs-12 col-md-12">

                <div class="widget">

                    <div class="widget-header bordered-bottom bordered-yellow">
                        <span class="widget-caption">Salas Juzgadores</span>
                    </div>

                    <div class="widget-body padding-5">

                        <form role="form" id="historia_filtros">
                            <div class="row">
                                <div class="col-lg-10 col-sm-10 col-xs-10 col-md-offset-1">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span
                                                class="input-group-addon no-padding-top no-padding-bottom padding-left-5 padding-right-5">
                                                <i class="fa fa-search fa-2x"></i>
                                            </span>
                                            <input type="hidden" data-tabla="cat_juzgados" data-campo="sNombre"
                                                   data-llave="iId" style="width:100%" id="filtro_juzgado"
                                                   name="filtro_juzgado" class="selecto2" placeholder="Buscar Juzgado...">
                                        </div>

                                        <br/>

                                        <div id="mensaje-error" class="alert alert-warning" style="display: none;">
                                        </div>

                                    </div>
                                </div>
                                <br/>

                                <div class="col-lg-10 col-sm-10 col-xs-10 col-md-offset-1" id="datos-juzgado"
                                     style="display: none;">
                                    <div class="well with-header">
                                        <div class="header" style="background-color: #881518; color: white;">
                                            Datos del Juzgado : <strong id="nombre-juzgado"></strong>
                                        </div>
                                        <table class="table table-hover">
                                            <thead class="bordered-darkorange">
                                                <tr>
                                                    <th>
                                                        Tipo de Juzgado
                                                    </th>
                                                    <th>
                                                        Instancia
                                                    </th>
                                                    <th>
                                                        Materia
                                                    </th>
                                                    <th>
                                                        Región
                                                    </th>
                                                    <th>
                                                        Distrito
                                                    </th>
                                                    <th>
                                                        Edificio
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody id="body-datos-juzgado">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- <div class="flip-scroll"> -->

                        <div>

                        </div>

                        <form id="form-salas-juzgadores" action="#" style="display: none;">
                            <input name="iIdJuzgado" type="hidden" id="iIdJuzgado" value=""/>
                            <input type="hidden" name="accion" value="guardar"/>
                            <table class="table table-bordered table-hover table-striped" id="searchable">
                                <thead class="bordered-darkorange">
                                    <tr role="row">
                                        <th>G,A,B</th>
                                        <th>SALA</th>
                                        <th>JUZGADOR</th>
                                        <th>CONDICIÓN</th>
                                        <th>ACTIVO</th>
                                    </tr>
                                </thead>

                                <input style="height: 50px; border: 1px red solid;" id="searchInput" type="text"
                                       class="form-control" placeholder="Buscar Sala..."/>

                                <tbody id="body-salas-juzgadores">


                                </tbody>


                            </table>

                            <div id="message" class="alert fixedalert" style="display: none;">

                            </div>

                            <br/>

                            <div id="guardar-cambios" class="text-right">
                                <br/>
                                <input id="fixedbutton" type="submit" class="btn btn-primary" value="Guardar"/>
                            </div>

                        </form>

                        <!-- </div> -->


                    </div>

                </div>
            </div>
        </div>

    </div>


    <script type="text/javascript">

        $(function () {
            var juzgado = $("#filtro_juzgado").val();
            if (parseInt(juzgado) > 0) {
                getAtencionSalas(juzgado);
            }
        });

        var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
        var ruta_salas_juzgadores = "../fachadas/sigejupe/salasjuzgadores/SalasjuzgadoresFacade.Class.php";


        $(function () {
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {accion: 'getJuzgadosSelect2Format'},
                dataType: 'json',
                success: function (data) {
                    if (data.status === 'error') {
                        OpenWarning('No se encontraron juzgados');
                        return;
                    }

                    $(".selecto2").select2({
                        minimumInputLength: 1,
                        data: data.data
                    });

                }
            }).error(function () {
                alert('error al obtener los juzgados');
            });
        });


        // Cada vez que se seleccione un valor en un select
        $('.selecto2').on('change', function () {
            var valor = $(this).val();
            $("#iIdJuzgado").val(valor);
            getAtencionSalas(valor);

        });

        $(document).on('change', '.select_condicion', function () {
            var option = $(this).val();
            if (option > 0) {
                var val_juzgado = jQuery(this).closest('td').prev().find('select').val();
                if (val_juzgado > 0) {
                    jQuery(this).closest('td').next().find('[type=checkbox]').prop('checked', true);
                    jQuery(this).closest('td').prev().prev().prev().find('[type=checkbox]').prop('checked', true).prop('disabled', false);

                }

            } else {
                jQuery(this).closest('td').next().find('[type=checkbox]').prop('checked', false);
                jQuery(this).closest('td').prev().prev().prev().find('[type=checkbox]').prop('checked', false).prop('disabled', true);
            }

        });

        $(document).on('change', '.select_juzgador', function () {
            var juzgador = $(this);
            if (juzgador.val() > 0) {
                var val_condicion = jQuery(this).closest('td').next().find('select').val();
                jQuery(this).closest('td').next().find('select').focus();
                if (val_condicion > 0) {

                    jQuery(this).closest('td').next().next().find('[type=checkbox]').prop('checked', true);
                    jQuery(this).closest('td').prev().prev().find('[type=checkbox]').prop('checked', true).prop('disabled', false);
                    ;
                }
            } else {
                jQuery(this).closest('td').next().next().find('[type=checkbox]').prop('checked', false);
                jQuery(this).closest('td').prev().prev().find('[type=checkbox]').prop('checked', false).prop('disabled', true);
                ;

            }

        });

        $("#form-salas-juzgadores").on('submit', function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax(ruta_salas_juzgadores, {
                type: 'POST',
                data: data,
                dataType: 'json',
                success: function (data) {

                    var message = "";
                    var alert = "";
                    if (data.r) {
                        alert = "alert-success";

                    } else {
                        alert = "alert-danger";
                    }

                    getAtencionSalas($("#iIdJuzgado").val());

                    $("#message").addClass(alert).html('<strong>' + data.m + '</strong>').slideDown('fast');

                    setTimeout(function () {
                        $("#message").slideUp('fast');
                    }, 2500);

                }
            });
        });

        $(".widget-body").on('resize', function () {
            oTable.css('width', '100%');
        });

        function getAtencionSalas(juzgado) {
            $.ajax(ruta_salas_juzgadores, {
                type: 'POST',
                data: {accion: 'procesar', idJuzgado: juzgado},
                dataType: 'json',
                success: function (datos) {

                    if (datos.estatus == 'error') {
                        $("#mensaje-error").html('<strong>' + datos.mensaje + '</strong>').show();
                        return;
                    }

                    $("#mensaje-error").hide();

                    $("#searchInput").val('');

                    var html_datos_juzgado = "";

                    $("#nombre-juzgado").text(datos.juzgado.desJuzgado);

                    html_datos_juzgado += '<tr>';
                    html_datos_juzgado += '<td>' + datos.juzgado.desTipoJuzgado + '</td>';
                    html_datos_juzgado += '<td>' + datos.juzgado.desInstancia + '</td>';
                    html_datos_juzgado += '<td>' + datos.juzgado.desMateria + '</td>';
                    html_datos_juzgado += '<td>' + datos.juzgado.desRegion + '</td>';
                    html_datos_juzgado += '<td>' + datos.juzgado.desDistrito + '</td>';
                    html_datos_juzgado += '<td>' + datos.juzgado.desEdificio + '</td>';
                    html_datos_juzgado += '</tr>';


                    $("#body-datos-juzgado").html(html_datos_juzgado);
                    $("#datos-juzgado").show('fast');

                    var html = "";

                    $.each(datos.salas, function (i, v) {

                        var selected_normal = (parseInt(v.iId_Condicion) == 1) ? 'selected' : '';
                        var selected_emergente = (parseInt(v.iId_Condicion) == 2) ? 'selected' : '';

                        var input_id_sala_juzgador = "<input type='hidden' name='sala[" + v.iId_Sala + "][id_sala_juzgador]' value='" + v.iId_SalaJuzgador + "'>"

                        var html_opciones_juzgadores = "<option value='0'>seleccione una opción</option>";

                        var sala_juzgador = v.iId_Juzgador;

                        $.each(datos.juzgadores, function (i, v) {
                            var select_juzgador = "";
                            if (parseInt(sala_juzgador) > 0 && sala_juzgador == v.id)
                                select_juzgador = "selected";
                            html_opciones_juzgadores += "<option value='" + v.id + "' " + select_juzgador + ">" + v.text + "</option>";
                        });


                        var html_select_juzgadores = "<select name='sala[" + v.iId_Sala + "][juzgador]' class='select_juzgador'>" +
                                html_opciones_juzgadores
                        "</select>";


                        var html_condicion = "<select name='sala[" + v.iId_Sala + "][condicion]' class='select_condicion'>" +
                                "<option value='0'>seleccione una opción</option>" +
                                "<option value='1' " + selected_normal + ">Normal</option>" +
                                "<option value='2' " + selected_emergente + ">Emergente</option>" +
                                "</select>";

                        var is_checked = (parseInt(v.iId_SalaJuzgador) > 0) ? 'checked ' : 'disabled ';
                        var is_checked_estado = (v.activo == 'S') ? 'checked ' : '';
                        var estatus = (v.activo == 'N' && parseInt(v.iId_SalaJuzgador) > 0) ? ' warning' : '';
                        var agregadas = (parseInt(v.iId_SalaJuzgador) > 0) ? 'success ' : '';


                        var check_box = "<div class='checkbox'>" +
                                "<label>" +
                                "<input name='sala[" + v.iId_Sala + "][aplica]' class='colored-success'" + is_checked + "type='checkbox'>" +
                                "</label>" +
                                "</div>";

                        var check_box_activo = "<div class='checkbox'>" +
                                "<label>" +
                                "<input name='sala[" + v.iId_Sala + "][activo]' class='colored-success'" + is_checked_estado + "type='checkbox'>" +
                                "</label>" +
                                "</div>";

                        html += '<tr class="' + agregadas + '">';
                        html += '<td>' + check_box + '</td>';
                        html += '<td>' + v.sNombre + input_id_sala_juzgador + '</td>';
                        html += '<td>' + html_select_juzgadores + '</td>';
                        html += '<td>' + html_condicion + '</td>';
                        html += '<td class="' + estatus + '">' + check_box_activo + '</td>';
                        html += '</tr>';
                    });

                    $("#body-salas-juzgadores").html(html);

                    $(".select_juzgador").select2();

                    $("#form-salas-juzgadores").show();

                }
            }).error(function (jqXHR, textStatus, errorThrown) {
                alert('error : ' + errorThrown);
            });


        }

        $("#searchInput").keyup(function () {
            var data = $(this).val();
            data = data.toUpperCase();
            $(this).val(data);
            var jo = $("#body-atencion-salas").find("tr");
            if (this.value == "") {
                jo.show();
                return;
            }
            jo.hide();

            jo.filter(function (i, v) {
                var $t = $(this);

                if ($t.is(":contains('" + data + "')")) {
                    $t.show();
                }

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