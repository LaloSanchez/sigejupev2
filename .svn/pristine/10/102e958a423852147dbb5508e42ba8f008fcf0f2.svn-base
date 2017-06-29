<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    $fecha = date("d/m/Y");

    /*
     * recibimos variables para integracion con el arbol judicial
     * verificamos si viene del arbol
     */

    $tree = false;
    $consulta = false;

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cveTipoCarpeta'])) {
        $tree = true;
        if (isset($_POST['idActuacion'])) $consulta = true;
    }

    $cveJuzgadoArbol = @$_POST['cveJuzgado'];
    $cveTipoCarpetaArbol = @$_POST['cveTipoCarpeta'];
    $idActuacionArbol = @$_POST['idActuacion'];
    $idActuacionPadreArbol = @$_POST['idActuacionPadre'];
    $idReferenciaArbol = @$_POST['idReferencia'];

    ?>
    <!--suppress JSUnresolvedVariable -->
    <style>
        .alert {
            display: none;
        }

        #nombreImputado {
            text-transform: uppercase;
        }

        .requerido {
            color: darkred;
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
                Auto de Radicación de Ejecución
            </h5>
        </div>

        <!--modal-panel para mostrar las sentencias registradas y poder seleccionar sólo una-->

        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Sentencias</h3>
                            </div>
                            <div class="panel-body">
                                <span class="label label-primary">Selecciona una sentencia para mostrar los imputados relacionados</span>
                                <br/>
                                <hr/>
                                <div id="tabla-sentencias">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Sintesis</th>
                                            <th>Tipo de Sentencia</th>
                                            <th>Fecha Sentencia</th>
                                            <th>Fecha Ejecutoria</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody id="body-sentencias">
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>ok</td>
                                            <td>ok</td>
                                            <td>ok</td>
                                            <td>ok</td>
                                            <td>ok</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" id="mostrar-imputados" class="btn btn-primary">Mostrar Imputados</button>
                    </div>
                </div>
            </div>
        </div>

        <!--termina modal-panel para mostrar sentencias-->

        <div class="panel-body">

            <div id="general-ejecucion-sentencia" class="col-lg-12">
                <form action="" class="form-horizontal" role="form" id="form-busqueda-sentencias">

                    <input type="hidden" name="accion" value="consultaSentencias"/>
                    <input type="hidden" name="cveTipoActuacion" value="3"/>
                    <input type="hidden" name="offset" id="offset" value="0"/>
                    <input type="hidden" name="pagina" id="pagina" value="1"/>
                    <input type="hidden" name="porPagina" id="porPagina" value="20"/>

                    <div class="form-group">
                        <label for="cveJuzgado" class="col-sm-4 control-label">Referenciado con:
                            <span class="requerido"> (*)</span>
                        </label>

                        <div class="col-lg-4">
                            <select name="cveTipoCarpeta" class="form-control" id="cveTipoCarpeta"></select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="numero" class="col-sm-4 control-label">
                            Num. Causa
                            <span class="requerido"> (*)</span>
                        </label>

                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="numero" name="numero" placeholder="Número de Causa"
                                   maxlength="4">
                        </div>

                    </div>

                    <div class="form-group">

                        <label for="anio" class="col-sm-4 control-label">
                            Año de Causa
                            <span class="requerido"> (*)</span>
                        </label>

                        <div class="col-lg-4">
                            <input type="text" class="form-control" id="anio" name="anio" placeholder="Año de Causa"
                                   maxlength="4">
                        </div>

                        <div class="col-lg-3">
                            <button class="btn btn-primary botonesArbol" id="buscarSentencias">Buscar Sentencias</button>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                    <br/>

                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <a id="pasar-a-consultar" href="#" class="btn btn-primary botonesArbol">Consultar</a>
                            <a id="limpiar-principal" href="#" class="btn btn-primary botonesArbol">Limpiar</a>
                        </div>
                    </div>

                    <div id="notificaciones" class="alert" role="alert" style="display:none;"></div>

                    <div class="clearfix"></div>


                </form>

                <div id="tabla-imputados-sentencias" style="display: none;">

                    <hr/>

                    <div class="clearfix"></div>
                    <br/>

                    <!--<div id="links" class="pull-right" style="display: none;"></div>-->

                    <form action="" id="form-generar-ejecucion-sentencia">

                        <input type="hidden" name="accion" value="generaEjecucionSentencia"/>
                        <input type="hidden" id="idActuacionImputados" name="idActuacionImputados" value=""/>

                        <table class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Tipo de Persona</th>
                                <th>Nombre</th>
                                <th>Fecha de Sentencia</th>
                                <th>Fecha de Ejecutoria</th>
                                <th>Numero Expediente</th>
                                <th>Año</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="body-imputados-sentencias">

                            </tbody>
                        </table>

                        <div class="clearfix"></div>
                        <br/>

                        <input class="btn btn-primary pull-right" type="submit" value="Generar Expediente"/>

                    </form>


                </div>

            </div>


            <div id="consultar-autos-ejecucion-sentencias" style="display: none;">

                <form action="" class="form-horizontal" role="form" id="form-busqueda-autos-ejecucion-sentencias">

                    <input type="hidden" name="idActuacionConsulta" value="<?php echo $idActuacionArbol; ?>"/>
                    <input type="hidden" name="accion" value="consultarAutosRadicacion"/>
                    <input type="hidden" name="offset" id="offset" value="0"/>
                    <input type="hidden" name="pagina" id="pagina" value="1"/>
                    <input type="hidden" name="porPagina" id="porPagina" value="20"/>

                    <div class="form-group">
                        <label for="cveJuzgado" class="col-sm-3 control-label">
                            Juzgado de procedencia <span class="requerido"> (*)</span>
                        </label>
                        <div class="col-lg-6" id="listaJuzgados">
                            <input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgado"
                                   placeholder="Juzgado">
                        </div>
                    </div>

                    <!--<div class="form-group">
                        <label for="nombreImputado" class="col-sm-3 control-label">Nombre Imputado</label>

                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="nombreImputado" name="nombreImputado"
                                   placeholder="Nombre del Imputado">
                        </div>
                    </div>-->

                    <div class="form-group">

                        <label for="numerocausa" class="col-sm-3 control-label">Num. Causa</label>

                        <div class="col-lg-2">
                            <input type="text" class="form-control" id="numerocausa" name="numerocausa"
                                   placeholder="Número de Causa" maxlength="4">
                        </div>

                        <label for="aniocausa" class="col-sm-2 control-label">Año Causa</label>

                        <div class="col-lg-2">
                            <input type="text" class="form-control" id="aniocausa" name="aniocausa"
                                   placeholder="Año de Causa" maxlength="4">
                        </div>

                    </div>


                    <!--<div class="form-group">

                        <label for="numeroExpediente" class="col-sm-3 control-label">Num. Expediente</label>

                        <div class="col-lg-2">
                            <input type="text" class="form-control" id="numeroExpediente" name="numeroExpediente"
                                   placeholder="Número de Expediente" maxlength="4">
                        </div>

                        <label for="anioExpediente" class="col-sm-2 control-label">Año Expediente</label>

                        <div class="col-lg-2">
                            <input type="text" class="form-control" id="anioExpediente" name="anioExpediente"
                                   placeholder="Año de Expediente" maxlength="4">
                        </div>

                    </div>-->

                    <div class="form-group">

                        <label for="fechaInicio" class="col-md-3 control-label">Fecha Inicio
                            <span class="requerido"> (*)</span>
                        </label>

                        <div class="col-md-2">
                            <input type="text" class="form-control" id="fechaInicio" name="fechaInicio"
                                   value="<?php echo $fecha ?>"/>
                        </div>

                        <label for="fechaFin" class="col-md-2 control-label">Fecha Final
                            <span class="requerido"> (*)</span>
                        </label>

                        <div class="col-md-2">
                            <input type="text" class="form-control" id="fechaFin" name="fechaFin"
                                   value="<?php echo $fecha ?>"/>
                        </div>

                    </div>

                    <div class="clearfix"></div>
                    <br/>

                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <a id="regresar-a-general" href="#" class="btn btn-primary botonesArbol">Regresar</a>
                            <a id="limpiar-consulta" href="#" class="btn btn-primary botonesArbol">Limpiar</a>
                            <button class="btn btn-primary botonesArbol" id="buscar-autos-ejec-sentencias">
                                Buscar Autos de Radicación de Ejecución
                            </button>
                        </div>
                    </div>

                    <div id="notificaciones-consulta" class="alert" role="alert" style="display:none;"></div>

                    <div class="clearfix"></div>


                </form>

                <div id="tabla-autos-ejecucion-sentencias" style="display: none;">

                    <hr/>
                    <div class="clearfix"></div>
                    <br/>

                    <div id="paginacion" class="row" style="display: none;">
                        <div class="col-md-2 col-md-offset-6">
                            <br/>
                            <br/>
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
                                <option selected value="20">20</option>
                                <option value="25">25</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>

                    <!--<div id="links" class="pull-right" style="display: none;"></div>-->


                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Causa</th>
                            <th>Tipo de Persona</th>
                            <th>Nombre</th>
                            <th>Delitos</th>
                            <th>Fecha de Sentencia</th>
                            <th>Fecha de Ejecutoria</th>
                            <th>Numero Expediente</th>
                            <th>Año Expediente</th>
                        </tr>
                        </thead>
                        <tbody id="body-imputados-sentencias-consulta">

                        </tbody>
                    </table>

                    <div class="clearfix"></div>
                    <br/>

                    </form>


                </div>
            </div>


        </div>
    </div>
    <!--</div>-->
    <script type="text/javascript">

        var permisos = obtenerPermisosFormulario("JUECES", "AUTO DE RADICACION DE EJECUCION");
        updatePermisos = permisos.Update;
        readPermisos = permisos.Read;
        createPermisos = permisos.Create;
        deletePermisos = permisos.Delete;

        comboTipoCarpeta = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cveTipoCarpeta').empty();
                        $('#cveTipoCarpeta').append('<option value="">Seleccione una opción</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if (object.cveTipoCarpeta == 2 || object.cveTipoCarpeta == 3 || object.cveTipoCarpeta == 4) {
                                    $('#cveTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
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

            $("#offset").val((page - 1 ) * $("#porPagina").val());
            $("#pagina").val(page);
            $("#form-busqueda-autos-ejecucion-sentencias").trigger('submit');
        };


        function listaJuzgados() {

            var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {accion: 'distrito', obligaPermiso: 'false'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control text-uppercase" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex" onChange="cargaTipoCarpeta()" >';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                if (data.data[index].cveTipojuzgado != '3') {
                                    html += "<option value='" + data.data[index].cveJuzgado + "' data-tipoJuzgado='" + data.data[index].cveTipojuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                                }
                            }
                            html += "</select>";
                            ToggleLoading(2);
                        } else {
                            html = "Sin resultados";
                            ToggleLoading(2);
                        }
                        $('#listaJuzgados').html(html);
                    } catch (e) {
                        alert(e);
                        ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los juzgados');
                ToggleLoading(2);
            });
        }

        /*
         * metodo js para mostrar tabla imputados con expediente de ejecucion de sentencia generado y no generado debado de las actuaciones
         */

        $(document).on('change', '.radioActuacion', function () {
            var idActuacion = $(this).val();

            $(".imputados-sentencias").hide();
            $(".imputados-sentencia-" + idActuacion).show('fast');

        });

        $(function () {
            listaJuzgados();
            comboTipoCarpeta();

            $('#numero').validaCampo('0123456789');
            $('#anio').validaCampo('0123456789');
            $('#numerocausa').validaCampo('0123456789');
            $('#aniocausa').validaCampo('0123456789');
            $('#numeroExpediente').validaCampo('0123456789');
            $('#anioExpediente').validaCampo('0123456789');


            $(document).on('click', '#cerrar-notificacion', function () {
                $("#notificaciones").fadeOut('fast');
            });

            $(document).on('click', '#cerrar-notificacion-consulta', function () {
                $("#notificaciones-consulta").fadeOut('fast');
            });

            $("#mostrar-imputados").on('click', function () {
                var idActuacion = $("input:radio[name=idActuacion]:checked").val();

                if (!idActuacion) {
                    alert('tienes que seleccionar una sentencia');
                    return;
                }

                $("#myModal").modal('hide');

                $.ajax({
                    url: '../fachadas/sigejupe/autoradicacionejecucion/AutoRadicacionEjecucionFacade.Class.php',
                    type: 'POST',
                    data: {idActuacion: idActuacion, activo: 'S', accion: 'mostrarImputadosActuacion'},
                    dataType: 'json',
                    success: function (data) {

                        if (data.estatus == 'ok') {

                            //array de tipos de personas
                            var tiposPersona = [];
                            tiposPersona[1] = "FISICA";
                            tiposPersona[2] = "MORAL";
                            tiposPersona[3] = "OTRO";

                            var datosImputados = '';

                            $.each(data.data, function (i, v) {

                                datosImputados += '<tr>';
                                datosImputados += '<th scope="row">' + (i + 1) + '</th>';
                                datosImputados += '<td>' + tiposPersona[v.cveTipoPersona] + '</td>';

                                if (v.cveTipoPersona == 1) {
                                    datosImputados += '<td>' + v.nombreFisica + '</td>';
                                } else {
                                    datosImputados += '<td>' + v.nombreMoral + '</td>';
                                }
                                datosImputados += '<td>' + v.fechaSentencia + '</td>';
                                datosImputados += '<td>' + v.fechaEjecutoria + '</td>';
                                datosImputados += '<td id="numero-' + v.idImputadoCarpeta + '' + v.idImpOfeDelCarpeta + '"></td>';
                                datosImputados += '<td id="anio-' + v.idImputadoCarpeta + '' + v.idImpOfeDelCarpeta + '"></td>';
                                datosImputados += '<td id="check-' + v.idImputadoCarpeta + '' + v.idImpOfeDelCarpeta + '"><input type="checkbox" name="imputadosCarpetas[]" value="' + v.idImputadoCarpeta + ',' + v.idImpOfeDelCarpeta + '"></td>';
                                datosImputados += '</tr>'

                                $("#idActuacionImputados").val(v.idActuacion);
                            });

                            $("#body-imputados-sentencias").html(datosImputados);
                            $("#tabla-imputados-sentencias").fadeIn('fast');

                        } else if (data.estatus == 'error') {

                            var mensaje = data.mensaje;
                            var cerrarnotificacion = '<button type="button" id="cerrar-notificacion" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

                            $("#notificaciones").html(cerrarnotificacion + "<strong>" + mensaje + "</strong>");
                            $("#notificaciones").removeClass('alert-success').addClass('alert-warning').fadeIn('fast');

                            setTimeout(function () {
                                $("#notificaciones").hide();
                            }, 5000);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de busqueda de imputados de la sentencia:\n" + otroobj);
                    }
                });

            });

            $("#form-busqueda-sentencias").on('submit', function (e) {
                e.preventDefault();

                $("#notificaciones").hide();
                $("#tabla-imputados-sentencias").hide();

                var dataForm = $(this).serialize();

                $.ajax({
                    url: '../fachadas/sigejupe/autoradicacionejecucion/AutoRadicacionEjecucionFacade.Class.php',
                    type: 'POST',
                    data: dataForm,
                    dataType: 'json',
                    success: function (data) {

                        if (data.estatus == 'ok') {

                            var datosSentencias = '';

                            $.each(data.data, function (k, v) {

                                datosSentencias += '<tr>';
                                datosSentencias += '<th scope="row">' + (k + 1) + '</th>';
                                datosSentencias += '<td>' + v.Sintesis + '</td>';
                                datosSentencias += '<td>' + v.desTipoSentencia + '</td>';
                                datosSentencias += '<td>' + v.fechaSentencia + '</td>';
                                datosSentencias += '<td>' + v.fechaEjecutoria + '</td>';

                                <?php
                                if($tree){
                                ?>
                                var idActuacionPadreArbol = '<?php echo $idActuacionPadreArbol; ?>';
                                if(v.idActuacion == idActuacionPadreArbol){
                                    datosSentencias += '<td><input checked type="radio" class="radioActuacion" name="idActuacion" value="' + v.idActuacion + '"></td>';
                                }else{
                                    datosSentencias += '<td><input type="radio" class="radioActuacion" name="idActuacion" value="' + v.idActuacion + '"></td>';
                                }
                                <?php
                                }else{
                                ?>
                                datosSentencias += '<td><input type="radio" class="radioActuacion" name="idActuacion" value="' + v.idActuacion + '"></td>';
                                <?php
                                }
                                ?>

                                if (v.hasOwnProperty('imputados')) {
                                    datosSentencias += '<tr style="display: none; !important;" class="imputados-sentencias imputados-sentencia-' + v.idActuacion + '">';
                                    datosSentencias += '<th class="success">Tipo Persona</th>';
                                    datosSentencias += '<th class="success">Nombre</th>';
                                    datosSentencias += '<th class="success">Delitos</th>';
                                    datosSentencias += '<th class="success">Expediente Generado</th>';
                                    datosSentencias += '<th class="success">Número Expediente</th>';
                                    datosSentencias += '<th class="success">Año Expediente</th>';
                                    datosSentencias += '</tr>';

                                    $.each(v.imputados, function (i, k) {

                                        var iconoGenerado = '';

                                        if (k.generado == 1) {
                                            iconoGenerado = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>';
                                        } else {
                                            iconoGenerado = '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
                                        }

                                        datosSentencias += '<tr style="display: none; !important;" class="info imputados-sentencias imputados-sentencia-' + v.idActuacion + '">'
                                        datosSentencias += '<td>' + k.tipoPersona + '</td>';
                                        datosSentencias += '<td>' + k.nombrePersona + '</td>';
                                        var delitos = '';
                                        $.each(k.delitos, function (a, e) {
                                            delitos += '<li>' + e + '</li>';
                                        });

                                        datosSentencias += '<td><ul>' + delitos + '</ul></td>';
                                        datosSentencias += '<td>' + iconoGenerado + '</td>';
                                        datosSentencias += '<td>' + k.numero + '</td>';
                                        datosSentencias += '<td>' + k.anio + '</td>';
                                        datosSentencias += '</tr>';
                                    });

                                }


                                datosSentencias += '</tr>';

                            });

                            $("#body-sentencias").html(datosSentencias);
                            $("#myModal").modal('show');


                        } else if (data.estatus == 'error') {

                            var mensaje = data.mensaje;
                            //var cerrarnotificacion = '<button type="button" id="cerrar-notificacion" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                            $("#notificaciones").stop().html("<strong>" + mensaje + "</strong>");
                            $("#notificaciones").removeClass('alert-success').addClass('alert-warning').fadeIn('fast').delay(4000).fadeOut('fast');

                            /*setTimeout(function () {
                             $("#notificaciones").hide();
                             }, 5000);*/


                        }

                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de busqueda de sentencias:\n" + otroobj);
                    }
                });
            });

            /*
             * metodo js para generar ejecucion de sentencias, genera un expediente por cada imputado seleccionado
             */
            $("#form-generar-ejecucion-sentencia").on('submit', function (e) {
                e.preventDefault();

                if (createPermisos == 'N') {
                    alert('No se tienen los permisos para crear registros en este formulario, contacta al administrador');
                    return;
                }

                /*var valueinput = $("input[name='imputadosCarpetas']:checked").val();

                 console.log(valueinput);

                 if(!valueinput){
                 alert('tienes que seleccionar al menos un imputado');
                 return;
                 }*/

                var dataForm = $(this).serialize();
                $.ajax({
                    url: '../fachadas/sigejupe/autoradicacionejecucion/AutoRadicacionEjecucionFacade.Class.php',
                    type: 'POST',
                    data: dataForm,
                    dataType: 'json',
                    success: function (data) {

                        if (data.estatus == 'ok') {

                            var mensaje = 'se generó correctamente el expediente del(os) los imputado(s) seleccionado(s)';
                            //var cerrarnotificacion = '<button type="button" id="cerrar-notificacion" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                            $("#notificaciones").stop().html("<strong>" + mensaje + "</strong>");
                            $("#notificaciones").removeClass('alert-warning').addClass('alert-success').fadeIn('fast').delay(4000).fadeOut('fast');


                            $.each(data.data, function (i, k) {
                                $("#numero-" + k.idregistro).text(k.numero).addClass('success');
                                $("#anio-" + k.idregistro).text(k.anio).addClass('success');
                                $("#check-" + k.idregistro).html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>');
                            });

                        } else if (data.estatus == 'error') {

                            var mensaje = data.mensaje;
                            //var cerrarnotificacion = '<button type="button" id="cerrar-notificacion" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

                            $("#notificaciones").stop().html("<strong>" + mensaje + "</strong>");
                            $("#notificaciones").removeClass('alert-success').addClass('alert-warning').fadeIn('fast').delay(4000).fadeOut('fast');

                        }

                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de busqueda de sentencias:\n" + otroobj);
                    }
                });
            });


            /*
             * metodo js para limpiar form
             */

            $("#limpiar-principal").on('click', function (e) {
                e.preventDefault();
                $("#cveTipoCarpeta").val('');
                $("#numero").val('');
                $("#anio").val('');
                $("#notificaciones").hide();
                $("#tabla-imputados-sentencias").hide();
            });


            $("#limpiar-consulta").on('click', function (e) {
                e.preventDefault();
                $("#offset").val(0);
                $("#pagina").val(1);
                $("#porPagina").val(20);
                $("#cveJuzgado").val('');
                $("#numerocausa").val('');
                $("#aniocausa").val('');
                $("#nombreImputado").val('');
                $("#numeroExpediente").val('');
                $("#anioExpediente").val('');
                $("#fechaInicio").val('');
                $("#fechaFin").val('');
                $("#notificaciones-consulta").hide();
                $("#tabla-autos-ejecucion-sentencias").hide();
            });

            /*
             * funcion js mostrar mostrar div para generar consultas consulta
             */

            $("#pasar-a-consultar").on('click', function (e) {
                e.preventDefault();
                $("#limpiar-principal").trigger('click');
                $("#general-ejecucion-sentencia").hide();
                $("#consultar-autos-ejecucion-sentencias").show();


            });

            /*
             * funcion js para  regresar a generar auto de radicacion de ejecucion de sentencias
             */
            $("#regresar-a-general").on('click', function (e) {
                e.preventDefault();
                $("#limpiar-consulta").trigger('click');
                $("#consultar-autos-ejecucion-sentencias").hide();
                $("#general-ejecucion-sentencia").show();

            });

            /*
             * funcion js para consultar los autos de ejecucuion de sentencias generados
             */
            $("#form-busqueda-autos-ejecucion-sentencias").on('submit', function (e) {

                if (readPermisos == 'N') {
                    alert('No se tienen los permisos para consultar registros en este formulario, contacta al administrador');
                    return;
                }

                e.preventDefault();
                var dataForm = $(this).serialize();
                $.ajax({
                    url: '../fachadas/sigejupe/autoradicacionejecucion/AutoRadicacionEjecucionFacade.Class.php',
                    type: 'POST',
                    data: dataForm,
                    dataType: 'json',
                    success: function (data) {

                        if (data.estatus == 'ok') {

                            $("#notificaciones-consulta").hide();

                            //array de tipos de personas
                            var tiposPersona = [];
                            tiposPersona[1] = "FISICA";
                            tiposPersona[2] = "MORAL";
                            tiposPersona[3] = "OTRO";

                            var datosImputados = '';

                            $.each(data.data, function (i, v) {

                                datosImputados += '<tr>';
                                datosImputados += '<th scope="row">' + (i + 1) + '</th>';
                                datosImputados += '<td>' + v.causa + '</td>';
                                datosImputados += '<td>' + tiposPersona[v.cveTipoPersona] + '</td>';

                                if (v.cveTipoPersona == 1) {
                                    datosImputados += '<td>' + v.nombreFisica + '</td>';
                                } else {
                                    datosImputados += '<td>' + v.nombreMoral + '</td>';
                                }

                                var delitos = "";

                                $.each(v.delitos, function (a, e) {
                                    delitos += '<li>' + e + '</li>';
                                });

                                datosImputados += '<td><ul>' + delitos + '</ul></td>';
                                datosImputados += '<td>' + v.fechaSentencia + '</td>';
                                datosImputados += '<td>' + v.fechaEjecutoria + '</td>';
                                datosImputados += '<td>' + v.numExp + '</td>';
                                datosImputados += '<td>' + v.aniExp + '</td>';
                                datosImputados += '</tr>'

                            });

                            $("#body-imputados-sentencias-consulta").html(datosImputados);
                            $("#tabla-autos-ejecucion-sentencias").fadeIn('fast');

                            printLinks(data.total, data.pagina);

                        } else if (data.estatus == 'error') {

                            var mensaje = data.mensaje;
                            var cerrarnotificacion = '<button type="button" id="cerrar-notificacion-consulta" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

                            $("#tabla-autos-ejecucion-sentencias").fadeOut('fast');
                            $("#notificaciones-consulta").stop().html("<strong>" + mensaje + "</strong>");
                            $("#notificaciones-consulta").removeClass('alert-success').addClass('alert-warning').fadeIn('fast').delay(3500).fadeOut('fast');
                            ;

                        }

                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de busqueda de autos de ejecucion:\n" + otroobj);
                    }
                });
            });


            $("#fechaInicio").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            });
            $("#fechaFin").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            });


            <?php
            if($tree){
            ?>

            var cveJuzgadoArbol = '<?php echo $cveJuzgadoArbol;  ?>';
            var cveTipoCarpetaArbol = '<?php echo $cveTipoCarpetaArbol;  ?>';
            var idActuacionArbol = '<?php echo $idActuacionArbol; ?>';
            var idActuacionPadreArbol = '<?php echo $idActuacionPadreArbol; ?>';
            var idReferenciaArbol = '<?php echo $idReferenciaArbol; ?>';

            if (cveTipoCarpetaArbol > 0) {

                var txtNumeroTree = $("#txtNumeroTree").val();
                var txtAnioTree = $("#txtAnioTree").val();

                if (idActuacionArbol != '') {
                    $("#pasar-a-consultar").trigger('click');
                    $("#cveJuzgado").val($("#cmbJuzgadoArbol").val());
                    $("#numerocausa").val(txtNumeroTree);
                    $("#aniocausa").val(txtAnioTree);
                    $("#form-busqueda-autos-ejecucion-sentencias").trigger('submit');

                    $(".botonesArbol").hide();

                } else {

                    $("#cveTipoCarpeta").val(cveTipoCarpetaArbol);
                    $("#numero").val(txtNumeroTree);
                    $("#anio").val(txtAnioTree);
                    $(".botonesArbol").hide();
                    $("#form-busqueda-sentencias").trigger('submit');

                    setTimeout(function () {
                        $("#mostrar-imputados").trigger('click');
                    }, 600);

                }

            }
            <?php
            }
            ?>

        });

    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>