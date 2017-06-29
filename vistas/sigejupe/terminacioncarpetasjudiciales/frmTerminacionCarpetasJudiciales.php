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
                Terminaci&oacute;n de Carpetas
            </h5>
        </div>
        <div class="panel-body">
            <input type="hidden" id="SysCveAdscripcion" name="SysCveAdscripcion" value="<?php echo $cveAdscripcion; ?>">
            <div id="divFormulario" class="form-horizontal">

                <div class="form-group">
                    <label class="control-label col-xs-3">Juzgado</label>
                    <div class="col-xs-9">
                        <select id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgado" onchange="cargaTipoCarpeta()">
                            <option value="">SELECCIONA UNA OPCI&Oacute;N</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Tipo de Carpeta</label>
                    <div class="col-xs-9" id="listaCarpetas">
                        <select class="form-control" id="cveTipoCarpeta" name="cveTipoCarpeta" placeholder="Tipo Carpeta">
                            <option value="">SELECCIONA UNA OPCI&Oacute;N</option>
                        </select>
                    </div>
                    <input type="hidden" id="idReferencia" name="idReferencia" value="<?php echo $idCarpeta; ?>">
                    <input type="hidden" id="cveEtapaProcesalCarpeta" name="cveEtapaProcesalCarpeta">
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3" id="lblRelationName">Causa</label>
                    <div id="divSinRelacion" class="col-xs-9">
                        <input type="text" id="numero" class="form-inline" name="numero" placeholder="Causa">&nbsp;/&nbsp;<input type="text" class="form-inline" name="anio" id="anio" placeholder="A&ntilde;o" maxlength="4">
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Fecha Inicio</label>
                    <div class="col-xs-2">
                        <input type="text" id="fechaInicio" name="fechaInicio" class="form-control fecha" value="<?php echo date('d/m/Y'); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Fecha Fin</label>
                    <div class="col-xs-2">
                        <input type="text" id="fechaFin" name="fechaFin" class="form-control fecha" value="<?php echo date('d/m/Y'); ?>">
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
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary consulta" value="Buscar" onclick="consultar(1)">
                        <input type="submit" class="btn btn-primary limpia" value="Limpiar" onclick="clean()">
                    </div>
                </div>

        <!--<input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivFormCarpetas(1)">
        <br><br>-->
                <div id="resultadoPaginador" style="display: none;">
                    <div class="col-xs-12">
                        <div class="form-group col-md-4" style="padding: 10px">
                            <label class="control-label" id="totalReg"></label>
                        </div>

                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultar(0);">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarPaginacion();">
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div id="consulta-carpetas">
                    </div>
                </div>

            </div>

            <div id="divConsulta" style="display: none;">
                <input type="submit" class="btn btn-primary" id="btn-regresar" value="REGRESAR" onclick="changeDivFormCarpetas(1)">
                <br>
                <form name="frmSolicitud" class="form-horizontal" id="frmSolicitud" method="POST" action="#" target="oculto" enctype="multipart/form-data" onsubmit="return false;"> 
                    <input type="hidden" readonly class="form-control" id="idCarpetaJudicial">
                    <div id="divGeneral">
                        <div id="datosCarpeta" class="form-group" style="text-align:center;">

                        </div>
                        <div id="divEstatusCarpeta" class="form-group">
                            <label class="control-label col-xs-3">Estatus</label>
                            <div class="col-xs-9">
                                <input type="hidden" id="cveEstatusCarpetaValidar" name="cveEstatusCarpetaValidar">
                                <input type="hidden" id="cveTipoCarpetaJudicial" name="cveTipoCarpetaJudicial">
                                <input type="hidden" id="fechaTerminoValidar" name="fechaTerminoValidar">
                                <input type="hidden" id="modificarEstatus" name="modificarEstatus" value="N">
                                <select id="cveEstatusCarpeta" name="cveEstatusCarpeta" class="form-control" onchange="modificarEstatusCarpeta()">
                                    <option value="">SELECCIONA UNA OPCI&Oacute;N</option>
                                </select>
                            </div>
                        </div>
                        <div id="divfechaTermino" class="form-group">
                            <label class="control-label col-xs-3">Fecha de T&eacute;rmino</label>
                            <div class="col-xs-9">
                                <input type="text" name="fechaTermino" id="fechaTermino" class="form-control">
                            </div>
                        </div>
                        <div id="divDatosImputado" style="display: none;">
                            <div class="form-group">
                                <label class="control-label col-xs-3">Imputado: </label>
                                <input type="hidden" id="idImputadoCarpeta" name="idImputadoCarpeta">
    <!--                            <input type="hidden" id="nombre" name="nombre">
                                <input type="hidden" id="paterno" name="paterno">
                                <input type="hidden" id="materno" name="materno">
                                <input type="hidden" id="nombreMoral" name="nombreMoral">-->
                                <div class="col-xs-9" id="divNombreImputado">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-3">Etapa Procesal Imputado:</label>
                                <div class="col-xs-9">
                                    <select name="cveEtapaProcesal" id="cveEtapaProcesal" class="form-control" onchange="mostrarCarpeta()">
                                        <option value="">SELECCIONA UNA OPCI&Oacute;N</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="divCarpetaDestino" style="display: none;">
                                <label class="control-label col-xs-3">Carpeta Judicial Destino:</label>
                                <div class="col-xs-9">
                                    <select name="idCarpetaJudicialDestino" id="idCarpetaJudicialDestino" class="form-control">
                                        <option value="">SELECCIONA UNA OPCI&Oacute;N</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-grroup" id="divImputadoDestino" style="display: none;">
                                <label class="control-label col-xs-3">Imputado:</label>
                                <div class="col-xs-9">
                                    <select name="idImputadoDestino" id="idImputadoDestino" class="form-control">
                                        <option value="">SELECCIONA UNA OPCI&Oacute;N</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="alert alert-warning alert-dismissable" id="div-advertencia" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Advertencia!</strong> Mensaje
                            </div>
                            <div class="alert alert-success alert-dismissable" id="div-correcto" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Correcto!</strong> Mensaje
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">&nbsp;</label>
                            <div class="col-xs-9">
                                <input type="button" class="btn btn-primary" value="Guardar" id="guardarDatosCarpeta" onclick="guardar()">
                                <input type="button" class="btn btn-primary" value="Limpiar" id="limpiarDatosCarpeta" onclick="limpiarDatosCarpetas()">
                            </div>
                        </div>
                        <br><br>
                        <div id="divListaImputados" class="form-group">
                            <div id="divContenidoImputados">

                            </div>
                        </div>
                    </div>
                    <br>
                </form>
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

        datosCarpeta = function () {
            var idCarpeta = $("#idCarpetaJudicial").val();
            $("#divDatosImputado").hide();
            $("#cveEstatusCarpetaValidar").val("");
            $("#fechaTerminoValidar").val("");
            $("#cveEtapaProcesal").val("0").prop('disabled', false);
            $("#idImputadoCarpeta").val("");
            $("#idCarpetaJudicialDestino").empty();
            $("#idCarpetaJudicialDestino").append('<option value="0">SELECCIONA UNA OPCI&Oacute;N</option>');
            $("#fechaTermino").val("");
            var html = '';
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                data: {
                    idCarpetaJudicial: idCarpeta,
                    accion: 'consultarCarpetasJudicialesDetalle'
                },
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    //console.log(datos.data[0]);
                    if (datos.status === 'OK') {
                        $("#datosCarpeta").empty();
                        html += '<span><b>Datos de la Causa</b></span><br>';
                        html += '<span><b>N&uacute;mero:</b> ' + datos.data[0].numero + '/' + datos.data[0].anio + '</span><br>';
                        html += '<span><b>Tipo de carpeta:</b> ' + datos.data[0].desTipoCarpeta + '</span><br>';
                        html += '<span><b>Juzgado:</b> ' + datos.data[0].desJuzgado + '</span><br>';
                        html += '<span><b>Estatus:</b> ' + datos.data[0].desEstatusCarpeta + '</span><br>';
                        html += '<span><b>Etapa Procesal:</b> ' + datos.data[0].desEtapaProcesal + '</span><br>';
                        $("#datosCarpeta").html(html);
                        $("#cveEtapaProcesalCarpeta").val(datos.data[0].cveEtapaProcesal);
                        $("#cveTipoCarpetaJudicial").val(datos.data[0].cveTipoCarpeta);
                        $("#cveEstatusCarpeta").val(datos.data[0].cveEstatusCarpeta);
                        $("#cveEstatusCarpetaValidar").val(datos.data[0].cveEstatusCarpeta);
                        if (datos.data[0].fechaTermino != "" && datos.data[0].fechaTermino != "0000-00-00 00:00:00" && datos.data[0].fechaTermino != null) {
                            var fechaTermino = formatoFecha(datos.data[0].fechaTermino);
                            $("#fechaTermino").val(fechaTermino);
                            $("#fechaTerminoValidar").val(fechaTermino);
                        }

                        consultarImputadosCarpeta();
                    }
                    ToggleLoading(2);
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                    ToggleLoading(2);
                }
            });
        };

        consultarImputadosCarpeta = function () {
            var idCarpeta = $("#idCarpetaJudicial").val();
            var cveEtapaProcesalCarpeta = $("#cveEtapaProcesalCarpeta").val();
            //console.log(cveEtapaProcesalCarpeta);
            var html = '';
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                data: {
                    idCarpetaJudicial: idCarpeta,
                    activo: 'S',
                    accion: 'consultar'
                },
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    //console.log(datos.data[0]);
                    $("#divContenidoImputados").empty();
                    if (datos.status === 'Ok') {

                        html += '<div style="text-align: center;"><span><b>Datos de los Imputados</b></span></div><br>';
                        html += '<table class="table table-hover table-striped table-bordered">';
                        html += '<thead>';
                        html += '<th>#</th>';
                        html += '<th>Imputado</th>';
                        html += '<th>Etapa Procesal</th>';
                        html += '<th>Sobreseimiento</th>';
                        html += '<th>Fecha Registro</th>';
                        html += '<th>Fecha Actualizaci&oacute;n</th>';
                        html += '<th>Procedimiento</th>';
                        html += '</thead>';
                        html += '<tbody>';
                        var c = 0;
                        for (var n = 0; n < datos.totalCount; n++) {
                            c++;
                            if (datos.data[n].cveTipoPersona == "1") {
                                var nombre = datos.data[n].nombre + " " + datos.data[n].paterno + " " + datos.data[n].materno;
                            } else {
                                var nombre = datos.data[n].nombreMoral;
                            }
                            console.log(datos.data[n].cveEtapaProcesal);
                            if ((parseInt(cveEtapaProcesalCarpeta) == 1 || parseInt(cveEtapaProcesalCarpeta) == 2) && parseInt(datos.data[n].cveEtapaProcesal) == 4) {
                                var procedimiento = "PROCEDIMIENTO ABREVIADO";
                            } else {
                                var procedimiento = "PROCEDIMIENTO NORMAL";
                            }
                            html += '<tr onClick="cargarDatosImputado(' + datos.data[n].idImputadoCarpeta + ')" style="cursor: pointer;">';
                            html += '<td>' + c + '</td>';
                            html += '<td>' + nombre + '</td>';
                            html += '<td>' + datos.data[n].desEtapaProcesal + '</td>';
                            if (datos.data[n].TieneSobreseimiento == "S") {
                                var sobreseimiento = 'SI';
                            } else {
                                var sobreseimiento = 'NO';
                            }
                            html += '<td>' + sobreseimiento + '</td>';
                            html += '<td>' + formatoFecha(datos.data[n].fechaRegistro) + '</td>';
                            html += '<td>' + formatoFecha(datos.data[n].fechaActualizacion) + '</td>';
                            html += '<td>' + procedimiento + '</td>';
                            html += '</tr>';
                        }
                        html += '</tbody>';
                        html += '</table>';
                        $("#divContenidoImputados").html(html);
                    }
                    //ToggleLoading(2);
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                    //ToggleLoading(2);
                }
            });
        };

        cargarDatosImputado = function (obj) {
            var idImputadoCarpeta = obj;
            var cveEtapaProcesalCarpeta = $("#cveEtapaProcesalCarpeta").val();
            var cveEstatusCarpeta = $("#cveEstatusCarpeta").val();
            var cveTipoCarpeta = $("#cveTipoCarpetaJudicial").val();
            $("#divCarpetaDestino").hide();
            $("#idCarpetaJudicialDestino").empty();
            $("#idCarpetaJudicialDestino").append('<option value="0">SELECCIONA UNA OPCI&Oacute;N</option>');
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                data: {
                    idImputadoCarpeta: idImputadoCarpeta,
                    activo: 'S',
                    accion: 'consultar'
                },
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    if (datos.status === 'Ok') {
                        $("#divDatosImputado").show();
                        $("#divNombreImputado").empty();
                        if (datos.data[0].cveTipoPersona == "1") {
                            var nombre = datos.data[0].nombre + " " + datos.data[0].paterno + " " + datos.data[0].materno;
                        } else {
                            var nombre = datos.data[0].nombreMoral;
                        }
                        $("#divNombreImputado").html('<span>' + nombre + '</span>');
                        $("#idImputadoCarpeta").val(datos.data[0].idImputadoCarpeta);
                        $("#nombre").val(datos.data[0].nombre);
                        $("#paterno").val(datos.data[0].paterno);
                        $("#materno").val(datos.data[0].materno);
                        $("#nombreMoral").val(datos.data[0].nombreMoral);
                        $("#cveEtapaProcesal").val(datos.data[0].cveEtapaProcesal);
                        if (((parseInt(cveEtapaProcesalCarpeta) != parseInt(datos.data[0].cveEtapaProcesal)))) {
                            if (datos.data[0].TieneSobreseimiento == 'S') {
                                $("#cveEtapaProcesal").prop('disabled', true);
                            } else if (parseInt(cveEstatusCarpeta) == 2) {
                                $("#cveEtapaProcesal").prop('disabled', true);
                            } else if (parseInt(cveTipoCarpeta) == 2 && parseInt(datos.data[0].cveEtapaProcesal) == 1) {
                                $("#cveEtapaProcesal").prop('disabled', false);
                            } else {
                                $("#cveEtapaProcesal").prop('disabled', true);
                            }

                        } else {
                            if (datos.data[0].TieneSobreseimiento == 'S') {
                                $("#cveEtapaProcesal").prop('disabled', true);
                            } else {
                                $("#cveEtapaProcesal").prop('disabled', false);
                            }
                        }
                    }
                    //ToggleLoading(2);
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                    //ToggleLoading(2);
                }
            });
        };

        cargarImputadoDestino = function () {
            var idCarpetaJudicial = $("#idCarpetaJudicialDestino").val();
            var idImputadoCarpeta = $("#idImputadoCarpeta").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                data: {
                    idImputadoCarpeta: idImputadoCarpeta,
                    idCarpetaJudicial: idCarpetaJudicial,
                    activo: 'S',
                    accion: 'buscarImputadoCarpeta'
                },
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    $("#idImputadoDestino").empty();
                    if (datos.status === 'Ok') {
                        $("#divImputadoDestino").show();
                        $("#idImputadoDestino").append('<option value="">Selecciona una opci&oacute;n</option>');
                        if (datos.data[0].cveTipoPersona == "1") {
                            var nombre = datos.data[0].nombre + " " + datos.data[0].paterno + " " + datos.data[0].materno;
                        } else {
                            var nombre = datos.data[0].nombreMoral;
                        }
                        $("#idImputadoDestino").append('<option value="' + datos.data[0].idImputadoCarpeta + '">' + nombre + '</option>');
                    } else {
                        $("#idImputadoDestino").append('<option value="">Selecciona una opci&oacute;n</option>');
                    }
                    //ToggleLoading(2);
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                    //ToggleLoading(2);
                }
            });
        };

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
            $("#numero").val("");
            var fecha = new Date();
            $("#anio").val("");
            $("#cveTipoCarpeta").val("");
            var html = '';
            $("#consulta-carpetas").html(html);
            //$(".guarda").hide();
            $(".juzgadores").hide();
            $("#idJuzgadorCarpeta").val("");
            $("#idCarpetaJudicial").val("");
            $("#propietario").val("");
            $("#resultadoPaginador").hide();
        }

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
                            $("#cveJuzgado").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                //if ( data.data[index].cveCondicion == 1 ) {
                                html += "<option value='" + data.data[index].cveJuzgado + "' data-tipoJuzgado='" + data.data[index].cveTipojuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                                //}
                            }
                            $('#cveJuzgado').html(html);
                            $("#cveJuzgado").val(cveJuzgado).trigger('change');
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

        cargaTipoCarpeta = function () {
            var result = "";
            var strDatos = "accion=consultar";
            var cveTipoJuzgado = $("#cveJuzgado :selected").attr("data-tipoJuzgado");
            //alert(cveTipoJuzgado);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    try {
                        result = eval("(" + datos + ")");
                        var html = "";
                        if (result.totalCount > 0) {
                            html += '<select name="cveTipoCarpeta" id="cveTipoCarpeta" class="form-control text-uppercase" title="Tipo de Carpeta" data-toggle="tooltip" tabIndex="tabIndex" onChange="cambiarEtiqueta()">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < result.totalCount; index++) {
                                switch (cveTipoJuzgado) {
                                    case "1": // tipo de juzgado de control
                                        if (result.data[index].cveTipoCarpeta == "1" || result.data[index].cveTipoCarpeta == "2") {
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                        break;
                                    case "2": // tipo de juzgado juicio
                                        if (result.data[index].cveTipoCarpeta == "3") {
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                        break;
                                    case "3": // tipo de juzgado ejecucion
                                        if (result.data[index].cveTipoCarpeta == "5") {
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                        break;
                                    case "4": // tipo de juzgado tribunal
                                        if (result.data[index].cveTipoCarpeta == "4") {
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                        break;
                                    case "5":
                                        break;
                                }
                            }
                            html += "</select>";
                            //ToggleLoading(2);
                        } else {
                            html = "Sin resultados";
                            //ToggleLoading(2);
                        }
                        $('#listaCarpetas').html(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                    //ToggleLoading(2);
                }
            });
        };

        cargarEstatusCarpetas = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estatuscarpetas/EstatuscarpetasFacade.Class.php",
                data: {
                    activo: 'S',
                    accion: 'consultar'
                },
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    if (datos.totalCount > 0) {
                        $("#cveEstatusCarpeta").empty();
                        $("#cveEstatusCarpeta").append('<Option value="">SELECCIONA UNA OPCI&Oacute;N</option>');
                        for (var n = 0; n < datos.totalCount; n++) {
                            $("#cveEstatusCarpeta").append('<option value="' + datos.data[n].cveEstatusCarpeta + '">' + datos.data[n].desEstatusCarpeta + '</option>');
                        }
                    }
                    //ToggleLoading(2);
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                    //ToggleLoading(2);
                }
            });
        };

        comboEtapaProcesal = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/etapasprocesales/EtapasprocesalesFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cveEtapaProcesal').empty();
                        $('#cveEtapaProcesal').append('<option value="0">SELECCIONA UNA OPCI&Oacute;N</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if (object.cveEtapaProcesal == "1" || object.cveEtapaProcesal == "2" || object.cveEtapaProcesal == "3" || object.cveEtapaProcesal == "4") {
                                    $('#cveEtapaProcesal').append('<option value="' + object.cveEtapaProcesal + '">' + object.desEtapaProcesal + '</option>');
                                }

                            });
                        }
                    } catch (e) {
                        alert("Error al cargar etapas procesales:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de etapas procesales imputados:\n\n" + otroobj);
                }
            });
        };

        mostrarCarpeta = function () {
            var etapaProcesal = $("#cveEtapaProcesal").val();
            var cveEtapaProcesalCarpeta = $("#cveEtapaProcesalCarpeta").val();
            var idCarpetaJudicial = $("#idCarpetaJudicial").val();
            if (etapaProcesal != cveEtapaProcesalCarpeta) {
                if (etapaProcesal < 5) {
                    $('#divCarpetaDestino').show();
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                        global: false,
                        async: false,
                        dataType: "json",
                        data: {
                            accion: "consultarCarpetaEtapaProcesal",
                            cveEtapaProcesal: etapaProcesal,
                            idCarpetaJudicial: idCarpetaJudicial,
                            obligaPermiso: "false"
                        },
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#idCarpetaJudicialDestino').empty();
                                $('#idCarpetaJudicialDestino').append('<option value="0">SELECCIONA UNA OPCI&Oacute;N</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#idCarpetaJudicialDestino').append('<option value="' + object.idCarpetaJudicial + '">' + object.desEtapaProcesal + ' (Num: ' + object.numero + '/' + object.anio + ' ,NUC: ' + object.nuc + ', Carpeta Inv:' + object.carpetaInv + ')' + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar Carpetas judiciales:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
                        }
                    });
                } else {
                    $('#idCarpetaJudicialDestino').empty();
                    $('#idCarpetaJudicialDestino').append('<option value="0">SELECCIONA UNA OPCI&Oacute;N</option>');
                }
            } else {
                $('#divCarpetaDestino').hide();
            }
            if (etapaProcesal == 0) {
                $('#divCarpetaDestino').hide();
            }
        };

        limpiarDatosCarpetas = function () {
            $("#idImputadoCarpeta").val("");
            $("#divNombreImputado").empty();
            $("#idCarpetaJudicialDestino").empty();
            $("#cveEtapaProcesal").val(0);
            $("#divCarpetaDestino").hide();
            $("#divDatosImputado").hide();
            $("#fechaTermino").val("");
            $("#modificarEstatus").val("N");
        };

        modificarEstatusCarpeta = function () {
            var modificar = 'N';
            var cveEstatus = $("#cveEstatusCarpeta").val();
            var cveEstatusValidar = $("#cveEstatusCarpetaValidar").val();
            if (cveEstatus != cveEstatusValidar) {
                modificar = 'S';
            }
            $("#modificarEstatus").val(modificar);
        };

        guardar = function () {
            if (validar()) {
                //alert();
                var fecha = "";
                if ($("#fechaTermino").val() != "") {
                    var fechaTermino = $("#fechaTermino").val().split(" ");
                    var fechaAux = fechaTermino[0].split("/");
                    fecha = fechaAux[2] + "-" + fechaAux[1] + "-" + fechaAux[0] + " " + fechaTermino[1];
                }
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                    global: false,
                    async: false,
                    dataType: "json",
                    data: {
                        accion: "etapaProcesalImputado",
                        idImputadoCarpeta: $("#idImputadoCarpeta").val(),
                        cveEtapaProcesal: $("#cveEtapaProcesal").val(),
                        idCarpetaJudicial: $("#idCarpetaJudicial").val(),
                        carpetaDestino: $("#idCarpetaJudicialDestino").val(),
                        cveEstatusCarpeta: $("#cveEstatusCarpeta").val(),
                        fechaTermino: fecha,
                        modificarEstatus: $("#modificarEstatus").val(),
                        obligaPermiso: "false"
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {

                            if (datos.status == "Ok") {
                                if (datos.msj != "") {
                                    var msg = datos.msj;
                                } else {
                                    var msg = "";
                                }
                                $("#div-correcto").html('Datos guardados correctamente ' + msg).fadeIn('slow').delay(4000).fadeOut('slow');
                                limpiarDatosCarpetas();
                                datosCarpeta();
                            } else {
                                if (datos.msj != "") {
                                    var msg = datos.msj;
                                } else {
                                    var msg = "";
                                }
                                $("#div-advertencia").html("Ocurrio un error al guardar los datos: " + msg).fadeIn('slow').delay(4000).fadeOut('slow');
                            }
                        } catch (e) {
                            $("#div-advertencia").html('Ocurrio un error: ' + e).fadeIn('slow').delay(4000).fadeOut('slow');
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error al realizar la accion:\n\n" + otroobj);
                    }
                });
            }
        };

        function cambiarEtiqueta() {
            var cveTipoCarpeta = $("#cveTipoCarpeta").val();
            var texto = "";
            if (cveTipoCarpeta !== "") {
                texto = $("#cveTipoCarpeta option:selected").text();
                texto = capitalize(texto);
                $("#lblRelationName").html(texto);
            } else {
                $("#lblRelationName").html("Causa");
            }
        }

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
            if (($("#cveEstatusCarpetaValidar").val() == $("#cveEstatusCarpeta").val()) &&
                    $("#idImputadoCarpeta").val() == "") {
                $("#div-advertencia").html('<span>No se recibieron datos a modificar de Estatus de Carpeta o Imputado!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#cveEstatusCarpeta").val() == "") {
                $("#div-advertencia").html('<span>Debe seleccionar el estatus de la carpeta judicial!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#cveEstatusCarpeta").val() == "2" && $("#fechaTermino").val() == "") {
                $("#div-advertencia").html('<span>Seleccione la fecha de T&eacute;rmino de la carpeta judicial</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#idImputadoCarpeta").val() != "") {
                if (($("#cveEtapaProcesalCarpeta").val() != $("#cveEtapaProcesal").val()) && $("#idCarpetaJudicialDestino").val() == "0") {
                    $("#div-advertencia").html('<span>Debe seleccionar una carpeta judicial destino para cambiar la etapa procesal del imputado seleccionado!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                    return false;
                } else {
                    if ($("#cveEtapaProcesal").val() == "2") {
                        return true;
                    } else {
                        if ($("#idCarpetaJudicialDestino").val() != "0") {
                            return true;
                        } else {
                            $("#div-advertencia").html('<span>Debe seleccionar una carpeta judicial destino para cambiar la etapa procesal del imputado seleccionado!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            return false;
                        }
                    }

                }
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
            cargarEstatusCarpetas();
            comboEtapaProcesal();
            //cargaTipoCarpeta();
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
                ignoreReadonly: true,
                maxDate: now
            });

            $('#fechaInicio').on("dp.change", function (e) {
                $('#fechaFin').data("DateTimePicker").minDate(e.date);
            });

            $('#fechaFin').on("dp.change", function (e) {
                $('#fechaInio').data("DateTimePicker").maxDate(e.date);
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