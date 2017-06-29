<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    $idCarpeta = ( isset($_POST['idCarpeta']) ) ? $_POST['idCarpeta'] : "";
    $cveAdscripcion = $_SESSION['cveAdscripcion'];
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

        .steps {
            padding: 1px 0;
            overflow: hidden;
        }
        .steps ul, .steps li {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .steps ul { 
            float: left; 
            width: 100% 
        }
        .steps li {
            float: left;
            width: 14%;
            padding: 1px;
        }
        .steps li a {
            display: block;
            padding: 15px 20px;
            background: #881518;
            color: #fff;
            line-height: 1.5em;
            text-decoration: none;
        }
        .steps li a strong {
            font-size:20px; 
            font-family: Arial;
        }
        .steps li a:hover {
            background: #df3338;
        }
        .steps li a.active { 
            background: #df3338; 
        }
        .steps li.step, .steps li.step a {
            position: relative;
            z-index: 3;
            height: 84px;
        }

        .steps li > a {
            background: #881518;   
        }

        .steps li.step-3 a {

            background-position: center left;
        }
        .steps li.step a:hover { 
            background:#cc00; 
        }
        .subtitulo{
            font-family: Arial;
            font-size: 12px;
        }

        @media (max-width: 768px) {
            .steps li a {
                display: block;
            }
            .steps li {
                display:block;
                float: left;
                width: 100%;
            }
            .steps li.step, .steps li.step a {
                position: relative;
                z-index: 3;
                height: 60px;
            }
            .steps ul, .steps li {
                margin: 1px;
                padding: 1px;
                list-style: none;
            }
        }
        .requerido {
            color: darkred;
        }
    </style>
    <link href="../vistas/css/generalStyles.css" rel="stylesheet" />
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Permutaci&oacute;n de Jueces
            </h5>
        </div>
        <div class="panel-body">
            <input type="hidden" id="SysCveAdscripcion" name="SysCveAdscripcion" value="<?php echo $cveAdscripcion; ?>">
            <div id="divFormulario" class="form-horizontal">

                <div class="form-group">
                    <label class="control-label col-xs-3">&nbsp;</label>
                    <div class="col-xs-9">
                        <label class="control-label">Juzgado</label>
                        <select id="cveJuzgado" class="form-control" name="cveJuzgado" placeholder="Juzgado" onchange="consultarJuzgadores()">
                            <option value="">SELECCIONA UNA OPCI&Oacute;N</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">&nbsp;</label>
                    <div class="col-lg-4">
                        <label class="control-label">Juez</label>
                        <select class="form-control" id="idJuzgador" name="idJuzgador" placeholder="Juez origen">
                            <option value="">SELECCIONA UNA OPCI&Oacute;N</option>
                        </select>
                    </div>
                    <div class="col-lg-4">
                        <label class="control-label">Reemplazar por:</label>
                        <select class="form-control" id="idJuzgadorDestino" name="idJuzgadorDestino" placeholder="Juez Destino">
                            <option value="">SELECCIONA UNA OPCI&Oacute;N</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">&nbsp;</label>
                    <div class="col-lg-4">
                        <label class="control-label">Fecha Inicio</label>
                        <input type="text" id="fechaInicio" name="fechaInicio" class="form-control fecha" value="<?php echo date('d/m/Y'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">&nbsp;</label>
                    <div class="col-lg-4">
                        <label class="control-label">Transferir Audiencias por Celebrar</label>
                        <input type="checkbox" id="transferirAudiencias" name="transferirAudiencias" class="form-control fecha" >
                    </div>
                </div>
                <!--            <div class="form-group">
                                <label class="control-label col-xs-3">Fecha Fin</label>
                                <div class="col-xs-2">
                                    <input type="text" id="fechaFin" name="fechaFin" class="form-control fecha" value="<?php echo date('d/m/Y'); ?>">
                                </div>
                            </div>-->
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
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary consulta" value="Guardar" onclick="guardar()">
                        <input type="submit" class="btn btn-primary limpia" value="Limpiar" onclick="clean()">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script type="text/javascript">
        var cveJuzgado = $('#SysCveAdscripcion').val();
        consultarPaginacion = function () {
            $("#cmbPaginacion").val(1);
            consultar(0);
        };

        function consultar(Aux) {
            if (Aux === 1) {
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);
            }
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            if ($("#cveJuzgado").val() === "" &&
                    $("#numero").val() === "" &&
                    $("#anio").val() === "" &&
                    $("#cveTipoCarpeta").val() === "" &&
                    $("#fechaInicio").val() === "" &&
                    $("#fechaFin").val() === "") {
                $("#advertencia").html('<span>Seleccione un criterio de busqueda!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if ($("#cveJuzgado").val() === "") {
                $("#advertencia").html('<span>Seleccione un juzgado!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgadorescarpetas/JuzgadorescarpetasFacade.Class.php",
                    data: {
                        cveJuzgado: $("#cveJuzgado").val(),
                        numero: $("#numero").val(),
                        anio: $("#anio").val(),
                        cveTipoCarpeta: $("#cveTipoCarpeta").val(),
                        fechaInicio: $("#fechaInicio").val(),
                        fechaFin: $("#fechaFin").val(),
                        primeraInstancia: "S",
                        activo: "S",
                        paginacion: "S",
                        pagina: pag,
                        cantidadRegistros: cantReg,
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
                                $("#resultadoPaginador").show();
                                html += '<table id="resultCarpetas" class="table table-hover table-striped table-bordered">';
                                html += '<thead>';
                                html += '<th>#</th>';
                                html += '<th>Estatus</th>';
                                html += '<th>N&uacute;mero</th>';
                                html += '<th>A&ntilde;o</th>';
                                html += '<th>Tipo Carpeta</th>';
                                html += '<th>Juzgado</th>';
                                html += '<th>Etapa Procesal</th>';
    //                            html += '<th>Carpeta Inv</th>';
    //                            html += '<th>NUC</th>';
                                html += '<th>Fecha Radicaci&oacute;n</th>';

                                html += '<tbody>';
                                for (var n = 0; n < result.totalCount; n++) {
                                    c++;
                                    var fecha = result.data[n].fechaRadicacion.split(" ");
                                    html += '<tr onClick="cargarCarpetas(' + result.data[n].idCarpetaJudicial + ')">';
                                    html += '<td>' + c + '</td>';
                                    html += '<td>' + result.data[n].desEstatusCarpeta + '</td>';
                                    if (result.data[n].numero == null) {
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].numero + '</td>';
                                    }
                                    if (result.data[n].anio == null) {
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].anio + '</td>';
                                    }
                                    html += '<td>' + result.data[n].desTipoCarpeta + '</td>';
                                    html += '<td>' + result.data[n].desJuzgado + '</td>';
                                    html += '<td>' + result.data[n].desEtapaProcesal + '</td>';
    //                                if( result.data[n].carpetaInv == null ) {
    //                                    html += '<td>N/A</td>';
    //                                } else {
    //                                    html += '<td>' + result.data[n].carpetaInv + '</td>';
    //                                }
    //                                if ( result.data[n].nuc == null ) {
    //                                    html += '<td>N/A</td>';
    //                                } else {
    //                                    html += '<td>' + result.data[n].nuc + '</td>';
    //                                }
                                    html += '<td>' + formatoFecha(fecha[0]) + '</td>';

                                    html += '</tr>';
                                }
                                html += '</tbody>';
                                html += '</table>';
                                $("#consulta-carpetas").html(html);
                                $("#resultCarpetas").DataTable({
                                    paging: false
                                });
                                getPaginasCarpetas(pag, cantReg);
                                ToggleLoading(2);
                                //$(".juzgadores").show();
                                //$(".guarda").show();
                                //$("#idCarpetaJudicial").val(result.data[0].idCarpetaJudicial);
                            } else {
                                $("#advertencia").html('<span>' + result.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                html += '';
                                $("#consulta-carpetas").html(html);
                                $("#resultadoPaginador").hide();
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
                        html += '';
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $("#consulta-carpetas").html(html);
                        $("#resultadoPaginador").hide();
                    }
                });
            }
        }

        getPaginasCarpetas = function (pag, cantReg) {
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                data: {
                    cveJuzgado: $("#cveJuzgado").val(),
                    numero: $("#numero").val(),
                    anio: $("#anio").val(),
                    cveTipoCarpeta: $("#cveTipoCarpeta").val(),
                    fechaInicio: $("#fechaInicio").val(),
                    fechaFin: $("#fechaFin").val(),
                    activo: "S",
                    pagina: pag,
                    cantidadRegistros: cantReg,
                    accion: "getPaginas"
                },
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");

                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }

                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                        $("#cmbPaginacion").val(pag);
                    } else {
                        $("#advertencia").html(json.msg);
                        $("#advertencia").show("slide");
                        setTimeAlert("advertencia");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                }
            });
        };

        siguiente = function (div, url, paso) {
            $.post(url, {idCarpetajudicial: $('#idCarpetaJudicial').val()}, function (htmlexterno) {
                $("#" + div).html(htmlexterno);
            });
        };

        function cargarCarpetas(idCarpetaJudicial) {
            //alert("id Carpeta judicial: " + idCarpetaJudicial);
            $("#idCarpetaJudicial").val(idCarpetaJudicial);
            changeDivFormCarpetas(2);
            datosCarpeta();
        }

        changeDivFormCarpetas = function (opc) {
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
            } else if (opc === 2) {
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
            }
        };

        function clean() {
            $("#cveJuzgado").val("");
            $("#idJuzgadorDestino").val("");
            $("#idJuzgador").empty();
            $("#idJuzgador").append('<option value="">SELECCIONA UNA OPCI&Oacute;N</option>');
            $("#fechaInicio").val("");
            $("#transferirAudiencias").prop("checked", false);
        }

        function listaJuzgados() {

            var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {accion: 'consultar', activo: 'S', obligaPermiso: 'false'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            $("#cveJuzgado").empty();
                            html += '<option value="">SELECCIONA UNA OPCI&Oacute;N</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                //if ( data.data[index].cveCondicion == 1 ) {
                                html += "<option value='" + data.data[index].cveJuzgado + "' data-tipoJuzgado='" + data.data[index].cveTipojuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                                //}
                            }
                            $('#cveJuzgado').html(html);
                            //$("#cveJuzgado").val(cveJuzgado).trigger('change');
                            ToggleLoading(2);
                        } else {
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            $('#cveJuzgado').html(html);
                            ToggleLoading(2);
                        }

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

        consultarJuzgadores = function () {
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
                        //ToggleLoading(1);
                    },
                    success: function (datos) {
                        try {
                            var result = eval("(" + datos + ")");
                            var html = "";
                            if (result.totalCount > 0) {
                                $("#idJuzgador").empty();
                                html += '<option value="">SELECCIONA UNA OPCI&Oacute;N</option>';
                                for (var n = 0; n < result.totalCount; n++) {
                                    html += '<option value="' + result.data[n].idJuzgador + '">' + result.data[n].nombre + ' ' + result.data[n].paterno + ' ' + result.data[n].materno + '</option>';
                                }
                                html += '</select>';
                                $("#idJuzgador").html(html);
                                //ToggleLoading(2);
                            } else {
                                html += '<option value="">SELECCIONA UNA OPCI&Oacute;N</option>';
                                $("#idJuzgador").html(html);
                                //ToggleLoading(2);
                            }

                        } catch (e) {
                            //ToggleLoading(2);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert(quepaso);
                    }
                });
            }
        };

        listaJueces = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                data: {
                    activo: 'S',
                    accion: "consultar"},
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    try {
                        var result = eval("(" + datos + ")");
                        var html = "";
                        if (result.totalCount > 0) {
                            $("#idJuzgadorDestino").empty();
                            html += '<option value="">SELECCIONA UNA OPCI&Oacute;N</option>';
                            for (var n = 0; n < result.totalCount; n++) {
                                html += '<option value="' + result.data[n].idJuzgador + '">' + result.data[n].nombre + ' ' + result.data[n].paterno + ' ' + result.data[n].materno + '</option>';
                            }
                            html += '</select>';
                            $("#idJuzgadorDestino").html(html);
                            //ToggleLoading(2);
                        } else {
                            html += '<option value="">SELECCIONA UNA OPCI&Oacute;N</option>';
                            $("#idJuzgadorDestino").html(html);
                            //ToggleLoading(2);
                        }

                    } catch (e) {
                        //ToggleLoading(2);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert(quepaso);
                }
            });
        };

        guardar = function () {
            if (validar()) {
                //alert();
                var fecha = "";
                var transferirAudiencias = "N";
                if ($("#fechaInicio").val() != "") {
                    var fechaInicio = $("#fechaInicio").val().split("/");
                    fecha = fechaInicio[2] + "-" + fechaInicio[1] + "-" + fechaInicio[0];
                }
                if ($("#transferirAudiencias").is(":checked")) {
                    transferirAudiencias = "S";
                } else {
                    transferirAudiencias = "N";
                }
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                    global: false,
                    async: false,
                    dataType: "json",
                    data: {
                        accion: "permutarJuzgadores",
                        cveJuzgado: $("#cveJuzgado").val(),
                        idJuzgador: $("#idJuzgador").val(),
                        idJuzgadorDestino: $("#idJuzgadorDestino").val(),
                        fechaInicio: fecha,
                        transferirAudiencias: transferirAudiencias,
                        obligaPermiso: "false"
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {

                            if (datos.estatus == "ok") {
                                if (datos.msj != "") {
                                    var msg = datos.msj;
                                } else {
                                    var msg = "";
                                }
                                $("#correcto").html('Datos guardados correctamente ' + msg).fadeIn('slow').delay(4000).fadeOut('slow');
                                clean();
                            } else {
                                if (datos.msj != "") {
                                    var msg = datos.msj;
                                } else {
                                    var msg = "";
                                }
                                $("#advertencia").html("Ocurrio un error al guardar los datos: " + msg).fadeIn('slow').delay(4000).fadeOut('slow');
                            }
                        } catch (e) {
                            $("#advertencia").html('Ocurrio un error: ' + e).fadeIn('slow').delay(4000).fadeOut('slow');
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error al realizar la accion:\n\n" + otroobj);
                    }
                });
            }
        };

        function capitalize(text) {
            text = text.toLowerCase();
            var tmpText = text.split(" ");
            var result = "";
            for (var n = 0; n < tmpText.length; n++) {
                var j = tmpText[n].charAt(0).toUpperCase();
                tmpText[n] = j + tmpText[n].substr(1);
            }
            result = tmpText.join(" ");
            return result;
        }

        function validar() {
            if ($("#cveJuzgado").val() == "") {
                $("#advertencia").html('<span>Seleccione un juzgado del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#idJuzgador").val() == "") {
                $("#advertencia").html('<span>Debe seleccionar un juez a permutar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#idJuzgadorDestino").val() == "") {
                $("#advertencia").html('<span>Debe seleccionar el juez a reemplazar!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#idJuzgador").val() == $("#idJuzgadorDestino").val()) {
                $("#advertencia").html('<span>Debe seleccionar un juez diferente para realizar la permutaci&oacute;n!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#fechaInicio").val() == "") {
                $("#advertencia").html('<span>Seleccione la fecha de inicio!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            }
            else {
                return true;
            }
        }

        formatoFecha = function (campo) {
            var fecha = campo.split(' ');
            if (fecha.length > 1) {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0] + " " + fecha[1];
            } else {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0];
            }
        };


        $(document).ready(function () {
            listaJuzgados();
            listaJueces();

            $("#numero").validaCampo('0123456789');
            $("#anio").validaCampo('0123456789');

            var fecha = new Date();
            var now = new Date(fecha.getFullYear(), fecha.getMonth(), fecha.getDate(), 0, 0, 0, 0);

            $('#fechaTermino').datetimepicker({
                locale: 'es',
                maxDate: new Date()
            });

            $('.fecha').datetimepicker({
                locale: 'es',
                sideBySide: false,
                format: "DD/MM/YYYY",
                ignoreReadonly: true
    //            ,
    //            maxDate: now
            });




    //        var permisos = obtenerPermisosFormulario("HERRAMIENTAS", "ACTUALIZAR CARPETAS JUDICIALES");
    //        console.log(permisos);
    //        if(permisos.Read == 'N'){
    //            $('.consulta').prop('disabled',true);
    //        }


        });
    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>