<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <style>
        .fixedbutton {
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
                        <span class="widget-caption">Atención Juzgados</span>

                    </div>

                    <div class="widget-body padding-5">

                        <form role="form" id="historia_filtros">
                            <div class="row">
                                <div class="col-lg-10 col-sm-10 col-xs-10 col-md-offset-1">

                                    <br/>

                                    <label for="radio-inline">
                                        Selecciona el tipo de adscripcion: &nbsp;&nbsp;
                                    </label>

                                    <label class="radio-inline">
                                        <input type="radio" name="tipoadscripcion" class="tipoadscripcion" value="externas"
                                               checked>
                                        Externas
                                    </label>
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <label class="radio-inline">
                                        <input type="radio" name="tipoadscripcion" class="tipoadscripcion" value="internas">
                                        Internas
                                    </label>


                                    <div class="clearfix"></div>
                                    <br/>
                                    <hr/>

                                    <div class="form-group">
                                        <div class="input-group">
                                            <span
                                                class="input-group-addon no-padding-top no-padding-bottom padding-left-5 padding-right-5">
                                                <img src="../vistas/img/user-id.png" style="height:24px;width:24px;">
                                            </span>
                                            <input type="text" data-tabla="cat_juzgados"
                                                   style="width:100%" id="filtro_adscripcion"
                                                   name="filtro_adscripcion" class="select2"
                                                   placeholder="Buscar Adscripción...">
                                        </div>
                                    </div>
                                </div>
                                <br/>

                                <div class="col-lg-10 col-sm-10 col-xs-10 col-md-offset-1" id="datos-adscripcion"
                                     style="display: none;">
                                    <div class="well with-header">
                                        <div class="header" style="background-color: #881518; color: white;">
                                            Datos de la Adscripción : <strong id="nombre-adscripcion"></strong>
                                        </div>
                                        <table class="table table-hover">
                                            <thead class="bordered-darkorange">
                                            <tr>
                                                <th>
                                                    Municipio
                                                </th>
                                                <th>
                                                    Edificio
                                                </th>
                                                <th>
                                                    Región
                                                </th>
                                                <th>
                                                    Distrito
                                                </th>
                                                <th>
                                                    Tipo de Adscripción
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody id="body-datos-adscripcion">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- <div class="flip-scroll"> -->


                        <div>

                        </div>

                        <form id="form-atencion-juzgados" action="#" style="display: none;">
                            <input name="iIdAdscripcion" type="hidden" id="iIdAdscripcion" value=""/>
                            <input type="hidden" name="accion" value="guardar"/>
                            <table class="table table-bordered table-hover table-striped" id="searchable">
                                <thead class="bordered-darkorange">
                                <tr role="row">
                                    <th>JUZGADO</th>
                                    <th>CONDICIÓN</th>
                                    <th>G,A,B</th>
                                </tr>
                                </thead>

                                <input style="height: 50px; border: 1px red solid;" id="searchInput" type="text"
                                       class="form-control" placeholder="Buscar Juzgado..."/>

                                <tbody id="body-atencion-juzgados">


                                </tbody>


                            </table>

                            <div id="message" class="alert fixedalert" style="display: none;">

                            </div>

                            <br/>

                            <div id="guardar-cambios" class="text-right">
                                <br/>
                                <input type="submit" class="btn btn-primary fixedbutton" value="Guardar"/>
                            </div>

                        </form>

                        <!-- </div> -->


                    </div>

                </div>
            </div>
        </div>

    </div>


    <script type="text/javascript">


        var ruta_adscripciones = "../fachadas/sigejupe/adscripciones/AdscripcionesFacade.Class.php";
        var ruta_atencion_juzgados = "..//fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php";

        $(".tipoadscripcion").on('change', function () {
            var tipoAdscripcion = $(this).val();
            $("#datos-adscripcion").hide();
            $("#form-atencion-juzgados").hide();
            $("#filtro_adscripcion").val('').attr('placeholder', 'Adscripciones ' + tipoAdscripcion);
            getAdscripciones(tipoAdscripcion);
        });

        getAdscripciones = function (tipoAdscripcion) {

            $.ajax(ruta_adscripciones, {
                type: 'POST',
                data: {accion: 'get', tipoAdscripcion: tipoAdscripcion},
                dataType: 'json',
                success: function (json) {
                    if(json.estatus == 'ok'){
                        $("#filtro_adscripcion").select2({
                            data: json.data
                        });
                    }else{
                        alert(json.mensaje);
                    }

                }
            });


        };

        $(function () {
            getAdscripciones('externas');
        })


        $("#filtro_adscripcion").on('change', function () {
            $("#iIdAdscripcion").val($(this).val());
            var adscripcion = $("#iIdAdscripcion").val();
            var tipoAdscripcion = $('input[name=tipoadscripcion]:checked', '#historia_filtros').val();
            getAtencionJuzgados(adscripcion, tipoAdscripcion);
        });

        $(document).on('change', '.select_condicion', function () {
            var option = $(this).val();
            if (option > 0) {
                jQuery(this).closest('td').next().find('[type=checkbox]').prop('checked', true);
            } else {
                jQuery(this).closest('td').next().find('[type=checkbox]').prop('checked', false);
            }
        });

        $("#form-atencion-juzgados").on('submit', function (e) {
            e.preventDefault();
            var data = $(this).serialize();
            $.ajax(ruta_atencion_juzgados, {
                type: 'POST',
                data: data + '&tipoAdscripcion=' + $('input[name=tipoadscripcion]:checked', '#historia_filtros').val(),
                dataType: 'json',
                success: function (data) {

                    var message = "";
                    var alert = "";
                    if (data.r) {
                        alert = "alert-success";
                        var tipoAdscripcion = $('input[name=tipoadscripcion]:checked', '#historia_filtros').val();
                        getAtencionJuzgados($("#iIdAdscripcion").val(), tipoAdscripcion);

                    } else {
                        alert = "alert-danger";
                    }

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

        function getAtencionJuzgados(adscripcion, tipoAdscripcion) {

            $.ajax(ruta_atencion_juzgados, {
                type: 'POST',
                data: {accion: 'procesar', adscripcion: adscripcion, tipoAdscripcion: tipoAdscripcion},
                dataType: 'json',
                success: function (datos) {

                    if(datos.estatus == 'ok'){

                        var html_datos_adscripcion = "";

                        $("#nombre-adscripcion").text(datos.data.adscripcion.nomAdscripcion);

                        html_datos_adscripcion += '<tr>';
                        html_datos_adscripcion += '<td>' + datos.data.adscripcion.cveMunicipio + '</td>';
                        html_datos_adscripcion += '<td>' + datos.data.adscripcion.cveEdificio + '</td>';
                        html_datos_adscripcion += '<td>' + datos.data.adscripcion.cveRegion + '</td>';
                        html_datos_adscripcion += '<td>' + datos.data.adscripcion.cveDistrito + '</td>';
                        html_datos_adscripcion += '<td>' + datos.data.adscripcion.nomAdscripcion + '</td>';
                        html_datos_adscripcion += '</tr>';


                        $("#body-datos-adscripcion").html(html_datos_adscripcion);
                        $("#datos-adscripcion").show('fast');

                        var html = "";

                        $.each(datos.data.juzgados, function (i, v) {

                            var selected_normal = (parseInt(v.iId_Condicion) == 1) ? 'selected' : '';
                            var selected_emergente = (parseInt(v.iId_Condicion) == 2) ? 'selected' : '';

                            var input_id_atencion_juzgado = "<input type='hidden' name='juzgado[" + v.iId_Juzgado + "][id_atencion_juzgado]' value='" + v.iId_AtencionJuzgado + "'>"

                            var html_condicion = "<select name='juzgado[" + v.iId_Juzgado + "][condicion]' class='select_condicion'>" +
                                "<option value='0'>seleccione una opción</option>" +
                                "<option value='1' " + selected_normal + ">Normal</option>" +
                                "<option value='2' " + selected_emergente + ">Emergente</option>" +
                                "</select>";

                            var is_checked = (parseInt(v.iId_AtencionJuzgado) > 0) ? 'checked ' : '';
                            var agregadas = (parseInt(v.iId_AtencionJuzgado) > 0) ? 'success' : '';

                            var check_box = "<div class=''>" +
                                "<label>" +
                                "<input name='juzgado[" + v.iId_Juzgado + "][aplica]' class='colored-success'" + is_checked + "type='checkbox'>" +
                                "</label>" +
                                "</div>";

                            html += '<tr class="' + agregadas + '">';
                            html += '<td>' + v.sNombre + input_id_atencion_juzgado + '</td>';
                            html += '<td>' + html_condicion + '</td>';
                            html += '<td>' + check_box + '</td>';
                            html += '</tr>';
                        });

                        $("#body-atencion-juzgados").html(html);
                        $("#form-atencion-juzgados").show();

                        $("#searchInput").keyup();

                    }else if(datos.estatus == 'error'){

                        alert(datos.mensaje);

                    }

                }
            }).error(function () {
                OpenWarning("Ocurrió un error al traer la información de la adscripción.");
            });
        }

        $("#searchInput").keyup(function () {
            var data = $(this).val();
            data = data.toUpperCase();
            $(this).val(data);
            var jo = $("#body-atencion-juzgados").find("tr");
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