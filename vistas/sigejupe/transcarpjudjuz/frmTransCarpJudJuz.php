<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    ?>
    <style>
        .alert{
            display: none;
        }

        #divHideForm{
            display: none;
            position: absolute;
            width: 100%;
            height: 100vh;
            opacity: .5;
            z-index: 99999;
            background: #427468;
        }

        #divMenssage{                
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

        #divImgloading{                  
            background: #FFFFFF url(img/cargando_1.gif) no-repeat;
            background-position: center;
            width: 100%;
            height: 70px;
            margin-left: auto;
            margin-right: auto;
        }

        .panel panel-default{
            background: #427468;
            color: #ebf3f1;
        }

        .panel-heading{
            background: #427468;
            color: #ebf3f1;
        }

        .panel-group .panel-heading{
            background: #427468;
            color: #ebf3f1;
        }
        .panel-default > .panel-heading{
            background: #427468;        
            color: #ebf3f1;
        }
    </style>
    <link href="../vistas/css/generalStyles.css" rel="stylesheet" />
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Transferir Carpetas Judiciales entre Juzgadores
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">

                <form id="formProgramaciones" method="post">
                    <div class="form-group">
                        <label class="control-label col-xs-3">Juzgado</label>
                        <div class="col-xs-9" id="listaJuzgados">
                            <input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgado">
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3" id="lblRelationName">Causa</label>
                        <div id="divSinRelacion" class="col-xs-9">
                            <input type="text" id="numero" class="form-inline" name="numero" placeholder="Causa">&nbsp;/&nbsp;<input type="text" class="form-inline" name="anio" id="anio" placeholder="A&ntilde;o" value="<?php echo date("Y") ?>">
                        </div>                                
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Tipo de Carpeta</label>
                        <div class="col-xs-9" id="listaCarpetas">
                            <input type="text" class="form-control" id="cveTipoCarpeta" name="cveTipoCarpeta" placeholder="Tipo Carpeta" readonly="readonly">
                        </div>
                        <input type="hidden" id="idJuzgadorCarpeta" name="idJuzgadorCarpeta">
                        <input type="hidden" id="idCarpetaJudicial" name="idCarpetaJudicial">
                        <input type="hidden" id="propietario" name="propietario">
                    </div>
                    <div class="form-group juzgadores" style="display: none;">
                        <label class="control-label col-xs-3">Juez Propietario</label>
                        <div class="col-xs-9" id="listaJuzgadores">
                            <input type="text" class="form-control" id="idJuzgador" name="idJuzgador" placeholder="juzgador" readonly="readonly">
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="alert alert-warning alert-dismissable" id="advertencia" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Advertencia!</strong> Mensaje
                        </div>
                        <div class="alert alert-success alert-dismissable" id="correcto" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Correcto!</strong> Mensaje
                        </div>
                        <div class="alert alert-danger alert-dismissable" id="error" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Error!</strong> Mensaje
                        </div>
                        <div class="alert alert-info alert-dismissable" id="info" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Informaci&oacute;n!</strong> Mensaje
                        </div>
                    </div>
                    <br>
                </form>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary consulta" value="Buscar" onclick="consultar()">
                        <input type="submit" class="btn btn-primary limpia" value="Limpiar" onclick="clean()">
                        <input type="submit" class="btn btn-primary guarda" value="Reasignar Carpeta" onclick="guardar()" style="display: none;">
                    </div>
                </div>
            </div>

            <div id="divConsulta">
                <!--<input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">
                <br><br>-->
                <form method="post" id="formRegistros">
                    <div id="consulta-carpetas">
                        <table id="tblResultados" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Causa</th>
                                    <th>A&ntilde;o</th>
                                    <th>Juzgado</th>
                                    <th>Tipo Carpeta</th>
                                    <th>Juez Propietario</th>
                                </tr>
                            </thead>
                            <tbody id="listaProgramaciones">

                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>

        function consultar() {
            if ($("#cveJuzgado").val() == "") {
                $("#advertencia").html('<span>Selecciona un juzgado del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if ($("#numero").val() == "") {
                $("#advertencia").html('<span>Capture el numero de causa en el campo correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if ($("#anio").val() == "") {
                $("#advertencia").html('<span>El campo a&ntilde;o es requerido</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if ($("#cveTipoCarpeta").val() == "") {
                $("#advertencia").html('<span>Selecciona el tipo de carpeta del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgadorescarpetas/JuzgadorescarpetasFacade.Class.php",
                    data: {
                        cveJuzgado: $("#cveJuzgado").val(),
                        numero: $("#numero").val(),
                        anio: $("#anio").val(),
                        cveTipoCarpeta: $("#cveTipoCarpeta").val(),
                        accion: "buscarCarpetasJuzgadores"},
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                    },
                    success: function (datos) {
                        try {
                            var result = eval("(" + datos + ")");
                            var html = "";
                            var c = 0;
                            if (result.totalCount > 0) {
                                html += '<table class="table table-hover table-striped table-bordered">';
                                html += '<thead>';
                                html += '<th>#</th>';
                                html += '<th>Causa</th>';
                                html += '<th>A&ntilde;o</th>';
                                html += '<th>Juzgado</th>';
                                html += '<th>Tipo Carpeta</th>';
                                html += '<th>Juez Propietario</th>';
                                for (var n = 0; n < result.totalCount; n++) {
                                    c++;
                                    html += '<tr>';
                                    html += '<td>' + c + '</td>';
                                    html += '<td>' + result.data[n].numero + '</td>';
                                    html += '<td>' + result.data[n].anio + '</td>';
                                    html += '<td>' + result.data[n].desJuzgado + '</td>';
                                    html += '<td>' + result.data[n].desTipoCarpeta + '</td>';
                                    html += '<td>' + result.data[n].juzgador + '</td>';
                                    html += '</tr>';
                                }
                                html += '</table>';
                                $("#consulta-carpetas").html(html);
                                ToggleLoading(2);
                                $(".juzgadores").show();
                                $(".guarda").show();
                                $("#idJuzgadorCarpeta").val(result.data[0].idJuzgadorCarpeta);
                                $("#idCarpetaJudicial").val(result.data[0].idCarpetaJudicial);
                                $("#propietario").val(result.data[0].idJuzgador);
                                $("#idJuzgador").val(result.data[0].idJuzgador);
                            } else {
                                $("#info").html('<span>' + result.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                html += '<table class="table table-hover table-striped table-bordered">';
                                html += '<thead>';
                                html += '<th>#</th>';
                                html += '<th>Causa</th>';
                                html += '<th>A&ntilde;o</th>';
                                html += '<th>Juzgado</th>';
                                html += '<th>Tipo Carpeta</th>';
                                html += '<th>Juez Propietario</th>';
                                $("#consulta-carpetas").html(html);
                                ToggleLoading(2);
                            }

                        } catch (e) {
                            ToggleLoading(2);
                            $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#error").html('<span>Ocurri&oacute; un error al consultar los datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        var html = '';
                        html += '<table class="table table-hover table-striped table-bordered">';
                        html += '<thead>';
                        html += '<th>#</th>';
                        html += '<th>Causa</th>';
                        html += '<th>A&ntilde;o</th>';
                        html += '<th>Juzgado</th>';
                        html += '<th>Tipo Carpeta</th>';
                        html += '<th>Juez Propietario</th>';
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $("#consulta-carpetas").html(html);
                    }
                });
            }
        }

        function guardar() {
            if (validar()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgadorescarpetas/JuzgadorescarpetasFacade.Class.php",
                    data: {
                        idJuzgadorCarpeta: $("#idJuzgadorCarpeta").val(),
                        idJuzgador: $("#idJuzgador").val(),
                        idCarpetaJudicial: $("#idCarpetaJudicial").val(),
                        accion: "guardar"},
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                        $("#info").html('<span>Guardando la informacion, espere un momento</span>').show();
                        $(".limpia").hide();
                        $(".consulta").hide();
                        $(".guarda").hide();
                    },
                    success: function (datos) {
                        try {
                            var result = eval("(" + datos + ")");
                            var html = "";
                            var c = 0;
                            if (result.totalCount > 0) {
                                $("#correcto").html('<span>Datos guardados correctamente!</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                                ToggleLoading(2);
                                $(".juzgadores").show();
                                $(".limpia").show();
                                $(".consulta").show();
                                $(".guarda").show();
                                $("#info").hide();
                                $(".consulta").trigger('click');
                            } else {
                                $("#info").html('<span>' + result.text + '</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                                ToggleLoading(2);
                                $(".limpia").show();
                                $(".consulta").show();
                                $(".guarda").show();
                            }

                        } catch (e) {
                            $("#advertencia").html('<span>' + e + '</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                            ToggleLoading(2);
                            $("#info").hide();
                            $(".limpia").show();
                            $(".consulta").show();
                            $(".guarda").show();
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        ToggleLoading(2);
                        $("#error").html('<span>Ocurrio un error al guardar los datos</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $(".guarda").show();
                    }
                });
            }
        }

        function clean() {
            $("#cveJuzgado").val("");
            $("#numero").val("");
            var fecha = new Date();
            $("#anio").val(fecha.getFullYear());
            $("#cveTipoCarpeta").val("");
            var html = '';
            html += '<table class="table table-hover table-striped table-bordered">';
            html += '<thead>';
            html += '<th>#</th>';
            html += '<th>Causa</th>';
            html += '<th>A&ntilde;o</th>';
            html += '<th>Juzgado</th>';
            html += '<th>Tipo Carpeta</th>';
            html += '<th>Juez Propietario</th>';
            $("#consulta-carpetas").html(html);
            $(".guarda").hide();
            $(".juzgadores").hide();
            $("#idJuzgadorCarpeta").val("");
            $("#idCarpetaJudicial").val("");
            $("#propietario").val("");
        }

        function listaJuzgados() {
            var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {accion: 'consultar', activo: 'S'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control text-uppercase" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex" onChange="consultarJuzgadores()">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveJuzgado + "'>" + data.data[index].desJuzgado + "</option>";
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

        cargaTipoCarpeta = function () {
            var result = "";
            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    try {
                        result = eval("(" + datos + ")");
                        var html = "";
                        if (result.totalCount > 0) {
                            html += '<select name="cveTipoCarpeta" id="cveTipoCarpeta" class="form-control text-uppercase" title="Tipo de Carpeta" data-toggle="tooltip" tabIndex="tabIndex">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < result.totalCount; index++) {
                                html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                            }
                            html += "</select>";
                            ToggleLoading(2);
                        } else {
                            html = "Sin resultados";
                            ToggleLoading(2);
                        }
                        $('#listaCarpetas').html(html);
                    } catch (e) {
                        alert(e);
                        ToggleLoading(2);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                    ToggleLoading(2);
                }
            });
        };

        function consultarJuzgadores() {
            var cveJuzgado = $("#cveJuzgado").val();
            if (cveJuzgado != "") {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                    data: {
                        cveJuzgado: cveJuzgado,
                        activo: 'S',
                        accion: "listaJuzgadores"},
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                    },
                    success: function (datos) {
                        try {
                            var result = eval("(" + datos + ")");
                            var html = "";
                            if (result.totalCount > 0) {
                                html += '<select name="idJuzgador" id="idJuzgador" class="form-control">';
                                html += '<option value="">Selecciona una opci&oacute;n</option>';
                                for (var n = 0; n < result.totalCount; n++) {
                                    html += '<option value="' + result.data[n].idJuzgador + '">' + result.data[n].nombre + ' ' + result.data[n].paterno + ' ' + result.data[n].materno + '</option>';
                                }
                                html += '</select>';
                                $("#listaJuzgadores").html(html);
                                ToggleLoading(2);
                            } else {
                                html = "";
                                $("#listaJuzgadores").html(html);
                                ToggleLoading(2);
                            }

                        } catch (e) {
                            ToggleLoading(2);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                    }
                });
            }
        }

        function validar() {
            if ($("#idJuzgador").val() == "") {
                $("#advertencia").html('<span>Debe indicar un nuevo propietario para la carpeta!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#idJuzgadorCarpeta").val() == "" || $("#idJuzgadorCarpeta").val() == 0) {
                $("#advertencia").html('<span>La carpeta no tiene alg&uacute;n propietario asignado, favor de verificar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            }
            else {
                return true;
            }
        }

        $(document).ready(function () {
            listaJuzgados();
            cargaTipoCarpeta();
            $("#numero").validaCampo('0123456789');
            $("#anio").validaCampo('0123456789');


        });
    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>