<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    $fecha = date("d/m/Y");
    ?>

    <style>
        .requerido{
            color: darkred;
        }
    </style>

    <!doctype html>


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Bit&aacute;cora de movimientos.
            </h5>
        </div>


        <div class="panel-body">
            <form class="form-horizontal" id="formBitacoraMovimientos">

                <input type="hidden" name="accion" value="consultar"/>
                <input type="hidden" name="offset" id="offset" value="0"/>
                <input type="hidden" name="pagina" id="pagina" value="1"/>
                <input type="hidden" name="porPagina" id="porPagina" value="20"/>

                <div class="form-group">
                    <label for="cveAdscripcion" class="col-sm-4 control-label">
                        Adscripci&oacute;n
                        <span class="requerido">(*)</span>
                    </label>

                    <div class="col-sm-5">
                        <select name="cveAdscripcion" id="cveAdscripcion" class="form-control">
                            <option value="0">selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cveAccion" class="col-sm-4 control-label">Acci&oacute;n</label>

                    <div class="col-sm-5">
                        <select name="cveAccion" id="cveAccion" class="form-control">
                            <option value="0">selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cveAccion" class="col-sm-4 control-label">
                        Fecha Inicial
                        <span class="requerido">(*)</span>
                    </label>

                    <div class="col-sm-4">
                        <input type="text" name="fechaInicio" id="fechaInicio" class="form-control" value="<?php echo $fecha ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-4 control-label">
                        Fecha final
                        <span class="requerido">(*)</span>
                    </label>

                    <div class="col-sm-4">
                        <input type="text" name="fechaFin" id="fechaFin" class="form-control" value="<?php echo $fecha ?>"/>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-4">
                        <button type="submit" class="btn btn-primary">Consultar</button>
                        <a class="btn btn-primary" onclick="limpiar()">Limpiar</a>
                    </div>
                </div>
            </form>

            <hr/>

            <div id="notifications" class="alert" style="display: none;"></div>

            <div class="clearfix"></div>

            <div id="paginacion"></div>

            <div class="clearfix"></div>
            <hr/>

            <div id="divResultados" style="display: none;">

                <div class="pull-right" style="display: none;">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Exportar
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Excel</a></li>
                            <li><a href="#">Word</a></li>
                            <li><a href="#" onclick="exportar('pdf');">Pdf</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                </div>

                <table class="table" id="tableRegistros">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Acción</th>
                            <th>Observaciones</th>
                            <th>Fecha/Hora de movimiento</th>
                        </tr>
                    </thead>
                    <tbody id="tableBoby">
                    </tbody>
                </table>

            </div>


        </div>
    </div>

    <script type="text/javascript"
    src="sigejupe/reportes/kayalshri-tableExport.jquery.plugin-a891806/tableExport.js"></script>
    <script type="text/javascript"
    src="sigejupe/reportes/kayalshri-tableExport.jquery.plugin-a891806/jquery.base64.js"></script>
    <script type="text/javascript"
            src="sigejupe/reportes/kayalshri-tableExport.jquery.plugin-a891806/jspdf/libs/sprintf.js"/>
    <script type="text/javascript" src="sigejupe/reportes/kayalshri-tableExport.jquery.plugin-a891806/jspdf/jspdf.js"/>
    <script type="text/javascript"
            src="sigejupe/reportes/kayalshri-tableExport.jquery.plugin-a891806/jspdf/libs/base64.js"/>
    <script type="text/javascript" src="sigejupe/reportes/paginacion.js"></script>
    <script type="text/javascript">


                                paginacion = new Paginacion('formBitacoraMovimientos');


                                restartPaginacion = function () {

                                    $("#offset").val(0);
                                    $("#pagina").val(1);
                                    $("#porPagina").val(20);

                                };

                                limpiar = function () {

                                    restartPaginacion();

                                    $("#cveAdscripcion").val('');
                                    $("#cveAccion").val('');
                                    $("#fechaInicio").val('');
                                    $("#fechaFin").val('');

                                    $("#notificaciones").hide();
                                    $("#paginacion").hide();
                                    $("#divResultados").hide();
                                };


                                showAlert = function (tipo, mensaje) {

                                    var mensaje = '<strong>' + mensaje + '</strong>';

                                    var removeClass = (tipo == 'success') ? 'warning' : 'success';

                                    $("#notifications").html(mensaje).removeClass('alert-' + removeClass).addClass('alert-' + tipo).show().delay(5000).fadeOut('fast');


                                }


                                valida = function () {

                                };

                                getAdscripciones = function () {

                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/adscripciones/AdscripcionesFacade.Class.php",
                                        async: false,
                                        dataType: "json",
                                        data: {
                                            accion: 'consultaadscripcionesbitacoramovimientos'
                                        },
                                        beforeSend: function (objeto) {
                                        },
                                        success: function (datos) {

                                            if (datos.estatus == 'ok') {

                                                var opciones = '<option value="">selecciona una opción</option>';
                                                $.each(datos.data, function (i, k) {
                                                    opciones += '<option value="' + k.cveAdscripcion + '">' + k.desAdscripcion + '</option>';
                                                });

                                                $("#cveAdscripcion").html(opciones);

                                            } else {
                                                showAlert('warning', 'no se encontraron resultados de las adscripciones');
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion de Consulta de adscripciones:\n\n" + otroobj);
                                        }
                                    });

                                };

                                getAcciones = function () {
                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/acciones/AccionesFacade.Class.php",
                                        async: false,
                                        dataType: "json",
                                        data: {
                                            accion: 'consultar',
                                            activo: 'S'
                                        },
                                        beforeSend: function (objeto) {
                                        },
                                        success: function (datos) {
                                            if (datos.totalCount != 0) {

                                                var opciones = '<option value="">selecciona una opción</option>';
                                                $.each(datos.data, function (i, k) {
                                                    opciones += '<option value="' + k.cveAccion + '">' + k.desAccion + '</option>';
                                                });

                                                $("#cveAccion").html(opciones);

                                            } else {
                                                showAlert('warning', 'no se encontraron resultados de las acciones');
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion de Consulta de acciones:\n\n" + otroobj);
                                        }
                                    });
                                };

                                getConsulta = function (data) {

                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/reportes/bitacoraMovimientosFacade.Class.php",
                                        async: false,
                                        dataType: "json",
                                        data: data,
                                        beforeSend: function (objeto) {
                                        },
                                        success: function (datos) {

                                            if (datos.estatus == 'ok') {


                                                var bodytable = '';

                                                $.each(datos.data, function (i, r) {

                                                    var num = '';

                                                    if (datos.pagina == 1) {
                                                        num = (i + 1);
                                                    } else {
                                                        num = parseInt(datos.pagina + '0') + (i + 1);
                                                    }

                                                    bodytable += '<tr>';
                                                    bodytable += '<td>' + num + '</td>';
                                                    bodytable += '<td>' + r.desAccion + '</td>';
                                                    bodytable += '<td>' + r.observaciones + '</td>';
                                                    bodytable += '<td>' + r.fechaMovimiento + '</td>';
                                                    bodytable += '</tr>';

                                                });

                                                $("#tableBoby").html(bodytable);
                                                /*$("#tableRegistros").DataTable({
                                                 paging: false
                                                 });*/
                                                $("#divResultados").show();


                                                paginacion.printLinks(datos.total, datos.pagina);


                                                $("#notifications").hide();

                                            } else {

                                                $("#divResultados").hide();
                                                $("#paginacion").hide();
                                                restartPaginacion();
                                                showAlert('warning', datos.mensaje);

                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion de Consulta de bitacora de movimientos:\n\n" + otroobj);
                                        }
                                    });

                                }

                                exportar = function (tipo) {

                                    var tabla = $("#tableRegistros");

                                    switch (tipo) {
                                        case 'pdf':

                                            break;
                                        case 'excel':
                                            break;

                                        case 'word':
                                            break;
                                    }
                                }

                                $(function () {
                                    var currentDate = new Date();
                                    var maxDate = currentDate.setDate(currentDate.getDate());
                                    $("#fechaInicio").datetimepicker({
                                        sideBySide: false,
                                        locale: 'es',
                                        format: "DD/MM/YYYY",
                                        maxDate: maxDate
                                    });
                                    $("#fechaFin").datetimepicker({
                                        sideBySide: false,
                                        locale: 'es',
                                        format: "DD/MM/YYYY",
                                        maxDate: maxDate
                                    });

                                    getAdscripciones();
                                    getAcciones();


                                    $("#formBitacoraMovimientos").on('submit', function (e) {
                                        e.preventDefault();
                                        var data = $(this).serialize();

                                        getConsulta(data);

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