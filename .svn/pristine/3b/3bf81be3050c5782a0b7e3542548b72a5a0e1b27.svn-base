<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    $SysCveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
    $SysNumEmpleado = $_SESSION['numEmpleado'];
    $SysCvePerfil = $_SESSION['cvePerfil'];
    $SysCveAdscripcion = $_SESSION['cveAdscripcion'];
//print_r($_SESSION);
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
                Reporte de Casos Relevantes
            </h5>
        </div>
        <div class="panel-body">

            <div id="divConsulta" style="display: block;" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-xs-3">Regi&oacute;n </label>
                    <div class="col-xs-9" id="listaRegiones">
                        <select name="cveRegion" id="cveRegion" class="form-control" onchange="cargarDistritos()">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Distrito </label>
                    <div class="col-xs-9" id="listaDistritos">
                        <select name="cveDistrito" id="cveDistrito" class="form-control" onchange="cargarJuzgado()">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Materia </label>
                    <div class="col-xs-9" id="listaMaterias">
                        <select name="cveMateria" id="cveMateria" class="form-control" onchange="cargarJuzgado()">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Instancia</label>
                    <div class="col-xs-9" id="listaInstancias">
                        <select name="cveInstancia" id="cveInstancia" class="form-control" onchange="cargarJuzgado()">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Juzgado</label>
                    <div class="col-xs-9" id="listaJuzgadosConsulta">
                        <select name="cveJuzgadoConsulta" id="cveJuzgadoConsulta" class="form-control">
                            <option value="">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" for="fechaInicial">Fecha Inicial</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control mayuscula" id="fechaInicial" name="fechaInicial">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" for="fechaFinal">Fecha Final</label>
                    <div class="col-md-5">
                        <input type="text" class="form-control mayuscula" id="fechaFinal" name="fechaFinal">
                    </div>
                </div>
                <div class="form-group">
                    <div class="alert alert-warning alert-dismissable" id="div-advertencia" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" id="btn_consultar" class="btn btn-primary consulta" value="Buscar" onclick="consultar(1)">
                        <input type="submit" id="limpiar" class="btn btn-primary limpia" value="Limpiar" onclick="limpiarBusqueda()">
                    </div>
                </div>
                <br>
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
                <br>

            </div>

        </div>
    </div>

    <script type="text/javascript">
        /*
         * Cargar combos
         */
        //Cargar juzgados
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
                                //if ( data.data[index].cveCondicion == 1 ) {
                                html += "<option value='" + data.data[index].cveJuzgado + "' data-tipoJuzgado='" + data.data[index].cveTipojuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                                //}
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

        //Tipo carpeta
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
                    ToggleLoading(1);
                },
                success: function (datos) {
                    try {
                        result = eval("(" + datos + ")");
                        var html = "";
                        if (result.totalCount > 0) {
                            html += '<select name="cveTipoCarpeta" id="cveTipoCarpeta" class="form-control text-uppercase" title="Tipo de Carpeta" data-toggle="tooltip" tabIndex="tabIndex" onChange="cambiarEtiqueta()">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < result.totalCount; index++) {
    //                            if ( result.data[index].cveTipoCarpeta < 7 ) {
    //                                html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
    //                                
    //                            }
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
                                    default:
                                        html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        break;
                                }
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
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                    ToggleLoading(2);
                }
            });
        };

        //Cargar combo regiones

        listaRegiones = function () {
            var ruta_juzgados = "../fachadas/sigejupe/regiones/RegionesFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {accion: 'consultar', obligaPermiso: 'false'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            $("#cveRegion").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveRegion + "'>" + data.data[index].desRegion + "</option>";
                            }
                            //ToggleLoading(2);
                        } else {
                            html = "<option value='0'>Selecciona una opci&oacute;n</option>";
                            //ToggleLoading(2);
                        }
                        $('#cveRegion').html(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los juzgados');
                //ToggleLoading(2);
            });
        };

        //Cargar combo distritos
        cargarDistritos = function () {
            var ruta_juzgados = "../fachadas/sigejupe/distritos/DistritosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {
                    accion: 'consultar',
                    cveRegion: $("#cveRegion").val(),
                    obligaPermiso: 'false'
                },
                dataType: 'json',
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            $("#cveDistrito").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveDistrito + "'>" + data.data[index].desDistrito + "</option>";
                            }
                            cargarJuzgado();
                            //ToggleLoading(2);
                        } else {
                            html = "<option value='0'>Selecciona una opci&oacute;n</option>";
                            //ToggleLoading(2);
                        }
                        $('#cveDistrito').html(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los juzgados');
                //ToggleLoading(2);
            });
        };

        //Cargar materias
        listaMaterias = function () {
            var ruta = "../fachadas/sigejupe/materias/MateriasFacade.Class.php";
            $.ajax(ruta, {
                type: 'POST',
                data: {
                    accion: 'consultar',
                    obligaPermiso: 'false'
                },
                dataType: 'json',
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            $("#cveMateria").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                if (data.data[index].cveMateria == 3) {
                                    html += "<option value='" + data.data[index].cveMateria + "'>" + data.data[index].desMateria + "</option>";
                                }
                            }
                            //ToggleLoading(2);
                        } else {
                            html = "<option value='0'>Selecciona una opci&oacute;n</option>";
                            //ToggleLoading(2);
                        }
                        $('#cveMateria').html(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los juzgados');
                //ToggleLoading(2);
            });
        };

        //Cargar instancias
        listaInstancias = function () {
            var ruta = "../fachadas/sigejupe/instancias/InstanciasFacade.Class.php";
            $.ajax(ruta, {
                type: 'POST',
                data: {
                    accion: 'consultar',
                    obligaPermiso: 'false'
                },
                dataType: 'json',
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            $("#cveInstancia").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {

                                html += "<option value='" + data.data[index].cveInstancia + "'>" + data.data[index].desInstancia + "</option>";

                            }
                            //ToggleLoading(2);
                        } else {
                            html = "<option value='0'>Selecciona una opci&oacute;n</option>";
                            //ToggleLoading(2);
                        }
                        $('#cveInstancia').html(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener el listado de instancias');
                //ToggleLoading(2);
            });
        };

        //cargar juzgados consulta
        cargarJuzgado = function () {
            var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {
                    accion: 'consultar',
                    cveRegion: $("#cveRegion").val(),
                    cveDistrito: $("#cveDistrito").val(),
                    cveMateria: $("#cveMateria").val(),
                    cveInstancia: $("#cveInstancia").val(),
                    obligaPermiso: 'false'
                },
                dataType: 'json',
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            $("#cveJuzgadoConsulta").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                //if ( data.data[index].cveCondicion == 1 ) {
                                html += "<option value='" + data.data[index].cveJuzgado + "' data-tipoJuzgado='" + data.data[index].cveTipojuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                                //}
                            }
                        } else {
                            html = "<option value=''>Selecciona una opci&oacute;n</option>";
                        }
                        $('#cveJuzgadoConsulta').html(html);
                    } catch (e) {
                        alert(e);
                    }
                }
            }).error(function () {
                alert('error al obtener los juzgados');
            });
        };



        consultarPaginacion = function () {
            $("#cmbPaginacion").val(1);
            consultar(0);
        };

        function consultar(Aux) {
            if (Aux == 1) {
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);
            }
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            if ($("#cveJuzgadoConsulta").val() == "" && ($("#fechaInicial").val() == "" || $("#fechaFinal").val() == "")) {
                $("#div-advertencia").html('<span>Selecciona un criterio de b&uacute;squeda</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/casosrelevantes/CasosrelevantesFacade.Class.php",
                    data: {
                        cveRegion: $("#cveRegion").val(),
                        cveDistrito: $("#cveDistrito").val(),
                        cveMateria: $("#cveMateria").val(),
                        cveInstancia: $("#cveInstancia").val(),
                        cveJuzgado: $("#cveJuzgadoConsulta").val(),
    //                numero: $("#numero").val(),
    //                anio: $("#anio").val(),
    //                cveTipoCarpeta: $("#cveTipoCarpeta").val(),
                        cveTipoActuacion: '26',
                        fechaInicial: $("#fechaInicial").val(),
                        fechaFinal: $("#fechaFinal").val(),
                        activo: "S",
                        pag: pag,
                        cantxPag: cantReg,
                        consultaDistrito: 'N',
                        accion: "consultarCasosRelevantes"},
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        //ToggleLoading(1);
                    },
                    success: function (datos) {
                        try {
                            var result = eval("(" + datos + ")");
                            //console.log(result.totalCount);
                            var html = "";
                            var c = 0;
                            if (result.totalCount > 0) {
                                $("#resultadoPaginador").show();
                                html += '<table id="resultCarpetas" class="table table-hover table-striped table-bordered" style="cursor: pointer;">';
                                html += '<thead>';
                                html += '<th>#</th>';
                                html += '<th>Estatus</th>';
                                html += '<th>N&uacute;mero Actuaci&oacute;n</th>';
                                html += '<th>Tipo Actuaci&oacute;n</th>';
                                html += '<th>Carpeta</th>';
                                html += '<th>Juzgado</th>';
                                html += '<th>S&iacute;ntesis</th>';
                                html += '<th>Fecha Registro</th>';
                                html += '<tbody>';
                                for (var n = 0; n < result.totalCount; n++) {
                                    c++;
                                    //var fecha = result.data[n].fechaRegistro.split(" ");
                                    html += '<tr>';
                                    html += '<td>' + c + '</td>';
                                    html += '<td>' + result.data[n].descEstatus + '</td>';
                                    html += '<td>' + result.data[n].numActuacion + '/' + result.data[n].aniActuacion + '</td>';
                                    html += '<td>' + result.data[n].desTipoActuacion + '</td>';
                                    html += '<td>' + result.data[n].descTipoCarpeta + ' ' + result.data[n].numero + '/' + result.data[n].anio + '</td>';
                                    html += '<td>' + result.data[n].desJuzgado + '</td>';
                                    html += '<td>' + result.data[n].sintesis + '</td>';
                                    html += '<td>' + result.data[n].fechaRegistro + '</td>';
                                    html += '</tr>';
                                }
                                html += '</tbody>';
                                html += '</table>';
                                $("#consulta-carpetas").html(html);
                                $("#resultCarpetas").DataTable({
                                    paging: false
                                });
                                getPaginasCarpetas(pag, cantReg);

                            } else {
                                $("#div-advertencia").html('<span>' + result.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                html += '';
                                $("#consulta-carpetas").html(html);
                                //$("#resultadoPaginador").hide();
                                //ToggleLoading(2);
                            }

                        } catch (e) {
                            //ToggleLoading(2);
                            $("#div-advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#div-advertencia").html('<span>Ocurri&oacute; un error al consultar los datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        var html = '';
                        html += '';
                        $("#divAlertInfo").hide();
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
                url: "../fachadas/sigejupe/casosrelevantes/CasosrelevantesFacade.Class.php",
                data: {
                    cveRegion: $("#cveRegion").val(),
                    cveDistrito: $("#cveDistrito").val(),
                    cveMateria: $("#cveMateria").val(),
                    cveInstancia: $("#cveInstancia").val(),
                    cveJuzgado: $("#cveJuzgadoConsulta").val(),
    //                numero: $("#numero").val(),
    //                anio: $("#anio").val(),
    //                cveTipoCarpeta: $("#cveTipoCarpeta").val(),
                    activo: "S",
                    cveTipoActuacion: '26',
                    consultaDistrito: 'N',
                    fechaInicial: $("#fechaInicial").val(),
                    fechaFinal: $("#fechaFinal").val(),
                    pag: pag,
                    cantxPag: cantReg,
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
                        $("#div-advertencia").html(json.msg);
                        $("#div-advertencia").show("slide");
                        setTimeAlert("advertencia");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#div-advertencia").html("Error en la peticion:\n\n" + quepaso);
                    $("#div-advertencia").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };

        function cargarCarpetas(idActuacion) {
            //alert("id Carpeta judicial: " + idCarpetaJudicial);
            //$("#idActuacion").val(idActuacion);
            $("#limpiar").trigger("click");
            changeDivFormCarpetas(1);
            cargaTipoCarpeta();
            //siguientePaso(1);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/casosrelevantes/CasosrelevantesFacade.Class.php",
                data: {
                    activo: "S",
                    idActuacion: idActuacion,
                    cveTipoActuacion: '26',
                    cantxPag: '1',
                    accion: "consultarCasosRelevantes"
                },
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");

                    if (json.totalCount > 0) {
                        $("#idActuacion").val(idActuacion);
                        $("#idReferencia").val(json.data[0].idReferencia);
                        $("#cveJuzgado").val(json.data[0].cveJuzgado).prop('disabled', true);
                        $("#cveTipoCarpeta").val(json.data[0].cveTipoCarpeta).prop('disabled', true);
                        $("#numero").val(json.data[0].numero).prop('disabled', true);
                        $("#anio").val(json.data[0].anio).prop('disabled', true);
                        $("#sintesis").val(json.data[0].sintesis);
                        consultarDatosCarpeta();
                        consultarActuaciones();
                        consultarAdjuntos();
                        $("#btn_eliminar").show();
                        $("#btn_visor").show();
                        $("#btn_pdf").show();
                    } else {
                        $("#divAlertWarning").html(json.text);
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        $("#btn_eliminar").hide();
                        $("#btn_guardar").hide();
                        $("#btn_visor").hide();
                        $("#btn_pdf").hide();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#btn_eliminar").hide();
                    $("#btn_guardar").hide();
                    $("#btn_visor").hide();
                    $("#btn_pdf").hide();
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
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



        limpiarBusqueda = function () {
            $("#cveRegion").val("");
            $("#cveDistrito").val("");
            $("#cveMateria").val("");
            $("#cveInstancia").val("");
            $("#cveJuzgadoConsulta").val("");
            $("#fechaInicial").val("");
            $("#fechaFinal").val("");
            $("#consulta-carpetas").empty();
            $("#resultadoPaginador").hide();
        };

        function cambiarEtiqueta() {
            var cveTipoCarpeta = $("#cveTipoCarpeta").val();
            var texto = "";
            if (cveTipoCarpeta != "") {
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
            if ($("#idJuzgador").val() == "") {
                $("#divAlertWarning").html('<span>Debe indicar un nuevo propietario para la carpeta!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#idJuzgadorCarpeta").val() == "" || $("#idJuzgadorCarpeta").val() == 0) {
                $("#divAlertWarning").html('<span>La carpeta no tiene alg&uacute;n propietario asignado, favor de verificar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else {
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

        consultarDatosCarpeta = function () {
            var texto = "";
            $("#datosCarpeta").empty();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarCarpetasJudicialesDetalle",
                    cveJuzgado: $("#cveJuzgado").val(),
                    cveTipoCarpeta: $("#cveTipoCarpeta").val(),
                    numero: $("#numero").val(),
                    anio: $("#anio").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    ToggleLoading(2);

                    if (datos.totalCount > 0) {
                        //changeDivForm(1);
                        $('#idReferencia').val(datos.data[0].idCarpetaJudicial);
                        texto = '<div style="text-align: center;"><b>Datos de la Carpeta</b></div><br><br>';
                        texto += '<span><b>Tipo: </b> ' + datos.data[0].desTipoCarpeta + ' <b>N&uacute;mero: </b>' + datos.data[0].numero + '/' + datos.data[0].anio + '</span><br>';
                        texto += '<span><b>Juzgado: </b>' + datos.data[0].desJuzgado + '</span><br>';
                        texto += '<span><b>Fecha de Radicaci&oacuten:</b> ' + formatoFecha(datos.data[0].fechaRadicacion) + '</span><br>';
                        texto += '<span><b>Observaciones:</b> ' + datos.data[0].observaciones + '</span><br>';
                        $("#datosCarpeta").html(texto);
                        consultarFichaEjecutiva(datos.data[0].idCarpetaJudicial);
                        $("#btn_guardar").show();
                    } else {
                        texto = "<span>La causa solicitada no existe</span>";
                        $("#datosCarpeta").html(texto);
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpetas judiciales:\n\n" + otroobj);
                }
            });
        };

        consultarFichaEjecutiva = function (idCarpetaJudicial) {
            $("#fichaEjecutiva").empty();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/impofedelcarpetas/ImpofedelcarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarRelacion", idCarpetaJudicial: idCarpetaJudicial, activo: 'S'},
                beforeSend: function () {
                },
                success: function (datos) {
                    try {
                        if (datos.totalCount == 0) {
                            return false;
                        }
                        var tabla = "";
                        tabla += '<div style="text-align: center;"><b>Datos de las Partes</b></div><br>';
                        tabla += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        tabla += '<tr class="trGridAgrega">';
                        tabla += '<th width="20%">Imputado</th>';
                        tabla += '<th width="20%" >Sujetos Pasivos del Delito</th>';
                        tabla += '<th width="20%" >Delito</th>';
                        $.each(datos, function (key, val) {
                            tabla += "<tr class='trSeleccion' >";
                            if (val.imputados.cveTipoPersona == 1) {
                                tabla += "<td class='editarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.imputados.nombre + " " + val.imputados.paterno + " " + val.imputados.materno + "</td>";
                            } else {
                                tabla += "<td class='editarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.imputados.nombreMoral + "</td>";

                            }
                            if (val.ofendidos.cveTipoPersona == 1) {
                                tabla += "<td class='editarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.ofendidos.nombre + " " + val.ofendidos.paterno + " " + val.ofendidos.materno + "</td>";
                            } else {
                                tabla += "<td class='editarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.ofendidos.nombreMoral + "</td>";

                            }
                            tabla += "<td class='editarRegistro' idImpOfeDelCarpeta='" + val.idImpOfeDelCarpeta + "'>" + val.delitos.desDelito + "</td>";

                            tabla += "</tr>";
                        });
                        tabla += "</table>";
                        $('#fichaEjecutiva').html(tabla);
                        $('#fichaEjecutiva').show("");
                    } catch (e) {
                        alert("Error al cargar relaciones:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de carpetas judiciales:\n\n" + otroobj);
                }
            });
        };

        $(document).ready(function () {
            //listaJuzgados();
            listaRegiones();
            listaMaterias();
            listaInstancias();
            //cargaTipoCarpeta();

            $("#fechaInicial").datetimepicker({
                locale: 'es',
                maxDate: new Date(),
                format: 'DD/MM/YYYY'
            });

            $("#fechaFinal").datetimepicker({
                locale: 'es',
                maxDate: new Date(),
                format: 'DD/MM/YYYY'
            });

            $('#fechaInicial').on("dp.change", function (e) {
                $('#fechaFinal').data("DateTimePicker").minDate(e.date);
            });

            $('#fechaFinal').on("dp.change", function (e) {
                $('#fechaInicial').data("DateTimePicker").maxDate(e.date);
            });
            var permisos = obtenerPermisosFormulario("CARPETAS JUDICIALES", "CASOS RELEVANTES");
            console.log(permisos);
            if (permisos.Read == 'N') {
                $('#btn_buscar, #anio').prop('disabled', true);
            }
            if (permisos.Create == 'N') {
                $('#btn_guardar').prop('disabled', true);
            }
            if (permisos.Delete == 'N') {
                $('#btn_eliminar').prop("disabled", true);
            }
        });
    </script>
    <?php

} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>