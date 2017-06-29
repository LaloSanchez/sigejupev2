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
        .requerido {
            color: darkred;
        }
    </style>
    <link href="../vistas/css/generalStyles.css" rel="stylesheet" />
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Programaci&oacute;n Mensual de Actividades
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <p class="col-lg-12" style="color:darkred;">
                    Los campos marcados con (*) son obligatorios.
                </p>
                <form id="formProgramaciones" method="post">
                    <div class="form-group">
                        <label class="control-label col-xs-3">Juzgado <span class="requerido">(*)</span></label>
                        <div class="col-xs-9" id="listaJuzgados">
                            <input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgado">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Mes <span class="requerido">(*)</span></label>
                        <div class="col-xs-9" id="listaMeses">
                            <input type="hidden" class="form-control selecto2" id="cveMes" name="cveMes" placeholder="Mes">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">A&ntilde;o <span class="requerido">(*)</span></label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="anio" name="anio" placeholder="Año">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Fecha Inicial</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="fechaInicial" name="fechaInicial" placeholder="Fecha Inicial" readonly="readonly">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Fecha Final</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" id="fechaFinal" name="fechaFinal" placeholder="Fecha Final" readonly="readonly">
                            <input type="hidden" id="idProgramacion" name="idProgramacion">
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
                        <input type="submit" class="btn btn-primary guardaTodo" value="Guardar" onclick="guardarProgramaciones()">
                        <input type="submit" class="btn btn-primary limpia" value="Limpiar" onclick="clean()">
                        <input type="submit" class="btn btn-primary consulta" value="Consultar" onclick="consultaProgramaciones(1)">
                        <input type="submit" class="btn btn-primary borra" style="display: none;" value="Eliminar" onclick="bajaProgramaciones()">
                    </div>
                </div>
            </div>

            <div id="divConsulta" style="display: none;">
                <!--<input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">
                <br><br>-->
                <form method="post" id="formRegistros">
                    <div class="col-xs-12">
                        <div class="form-group col-md-4" style="padding: 10px">
                            <label class="control-label" id="totalReg"></label>
                        </div>

                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultaProgramaciones(0);">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="consultaProgramacionesPagina();">
                                <option value="12">12</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div id="consulta-programaciones">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--</div>-->
    <script type="text/javascript">

        consultaProgramacionesPagina = function () {
            $("#cmbPaginacion").val(1);
            consultaProgramaciones(0);
        };

        consultaProgramaciones = function (Aux) {
            if (Aux == 1) {
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(12);
            }
            $("#consulta-programaciones").html("");
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var idProgramacion = $("#idProgramacion").val();
            var cveMes = $("#cveMes").val();
            var anio = $("#anio").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var cveJuzgado = $("#cveJuzgado").val();
            var html = "";
            $(".borra").hide();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/programaciones/ProgramacionesFacade.Class.php",
                data: {
                    cveMes: cveMes,
                    anio: anio,
                    fechaInicial: fechaInicial,
                    fechaFinal: fechaFinal,
                    cveJuzgado: cveJuzgado,
                    paginacion: "S",
                    pagina: pag,
                    cantidadRegistros: cantReg,
                    accion: "consultar"
                },
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    try {
                        var result = eval("(" + datos + ")");
                        var html = '<table id="tblResultados" class="table table-hover table-striped table-bordered">';
                        html += '<thead><tr><th>N&uacute;m.</th><th>Mes</th><th>A&ntilde;o</th><th>Juzgado</th><th>Fecha Inicio</th><th>Fecha Fin</th><th><a href="javascript:;" onClick="borrarSeleccionados()" id="borrarSeleccionados"><img src="./img/eliminar.png" width="30" height="30" data-toogle="Eliminar Registros seleccionados" title="Eliminar Registros seleccionados"></a></th></tr></thead>';
                        html += '<tbody id="listaProgramaciones">';
                        if (result.totalCount > 0) {
                            $("#divConsulta").show();
                            var c = 0;
                            for (var n = 0; n < result.totalCount; n++) {
                                c++;
                                html += '<tr>';
                                html += '<td onclick="consultaId(' + result.data[n].idProgramacion + ')">' + c + '</td>';
                                html += '<td onclick="consultaId(' + result.data[n].idProgramacion + ')">' + result.data[n].desMes + '</td>';
                                html += '<td onclick="consultaId(' + result.data[n].idProgramacion + ')">' + result.data[n].anio + '</td>';
                                html += '<td onclick="consultaId(' + result.data[n].idProgramacion + ')">' + result.data[n].desJuzgado + '</td>';
                                html += '<td onclick="consultaId(' + result.data[n].idProgramacion + ')">' + formatoFecha(result.data[n].fechaInicial) + '</td>';
                                html += '<td onclick="consultaId(' + result.data[n].idProgramacion + ')">' + formatoFecha(result.data[n].fechaFinal) + '</td>';
                                html += '<td><input type="checkbox" name="eliminar[]" value="' + result.data[n].idProgramacion + '"></td>';
                                html += '</tr>';
                            }
                            html += '</tbody>';
                            html += '</table>';
                            $("#consulta-programaciones").html(html);
                            $("#tblResultados").dataTable({
                                paging: false
                            });
                            getPaginas(pag, cantReg);
                            //tabla();
                        } else {
                            $("#divConsulta").hide();
                            $("#advertencia").html('<span>No se encontraron resultados</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            html = '';
                            $("#consulta-programaciones").html(html);
                        }
                    } catch (e) {
                        $("#divConsulta").hide();
                        $("#advertencia").html('<span>Ocurrio un error al consultar los datos' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        var html = '';
                        $("#consulta-programaciones").html(html);
                    }
                    ToggleLoading(2);
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html('<span>Ocurrio un error al consultar los datos, favor de intentarlo mas tarde</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                    var html = '';
                    $("#consulta-programaciones").html(html);
                    ToggleLoading(2);
                }
            });
        };

        getPaginas = function (pag, cantReg) {
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var idProgramacion = $("#idProgramacion").val();
            var cveMes = $("#cveMes").val();
            var anio = $("#anio").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var cveJuzgado = $("#cveJuzgado").val();

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/programaciones/ProgramacionesFacade.Class.php",
                data: {
                    cveMes: cveMes,
                    anio: anio,
                    fechaInicial: fechaInicial,
                    fechaFinal: fechaFinal,
                    cveJuzgado: cveJuzgado,
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

        function tabla() {
            $("#tblResultados").dataTable({
                paging: false
            });
        }

        changeDivForm = function (opc) {
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
            } else if (opc === 2) {
                consultaProgramaciones();
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
            }
        };

        consultaId = function (id) {
            /*aqui toda peticion ajax POST usar ToggleLoading para peticion de carga*/
            seleccionaProgramaciones(id);
        };

        clean = function () {
            //$.clearInput = function () {
            $('#divFormulario').find('input[type=text], input[type=password], input[type=number], input[type=email], textarea').val('');
            $("#divFormulario").find('input[name="idProgramacion"]').val("");
            $('#divFormulario').find('select').val('');
            var fecha = new Date();
            $("#divFormulario").find('input[name="anio"]').val(fecha.getFullYear());
            $("#listaProgramaciones").html("");
            $(".borra").hide();
            $("#consulta-programaciones").html('');
            $("#divConsulta").hide();
            //};
        };

        guardar = function () {
            guardarProgramaciones();
        };

        function listaJuzgados() {
            var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {accion: 'consultar', activo: 'S'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control text-uppercase" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex" onChange="mostrarFechas()">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveJuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                            }
                            html += "</select>";
                            //ToggleLoading(2);
                        } else {
                            html = "Sin resultados";
                            //ToggleLoading(2);
                        }
                        $('#listaJuzgados').html(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los juzgados');
                //ToggleLoading(2);
            });
        }

        function listaMeses() {
            var ruta_meses = "../fachadas/sigejupe/meses/MesesFacade.Class.php";
            $.ajax(ruta_meses, {
                type: 'POST',
                data: {accion: 'consultar'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<select name="cveMes" id="cveMes" class="form-control text-uppercase" title="Mes" data-toggle="tooltip" tabIndex="tabIndex" onchange="mostrarFechas()">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveMes + "'>" + data.data[index].desMes + "</option>";
                            }
                            html += "</select>";
                            //ToggleLoading(2);
                        } else {
                            html = "Sin resultados";
                            //ToggleLoading(2);
                        }
                        $('#listaMeses').html(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los meses');
                //ToggleLoading(2);
            });
        }

        seleccionaProgramaciones = function (ididProgramacion) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/programaciones/ProgramacionesFacade.Class.php",
                data: {
                    idProgramacion: ididProgramacion,
                    accion: "seleccionar"},
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    try {
                        if (datos.totalCount > 0) {
                            $("#idProgramacion").val(datos.data[0].idProgramacion);
                            $("#cveMes").val(datos.data[0].cveMes);
                            $("#anio").val(datos.data[0].anio);
                            $("#fechaInicial").val(formatoFecha(datos.data[0].fechaInicial));
                            $("#fechaFinal").val(formatoFecha(datos.data[0].fechaFinal));
                            $("#cveJuzgado").val(datos.data[0].cveJuzgado);
                            //document.getElementById('listaProgramaciones').innerHTML = "";
                            //consultaProgramaciones();
                            $(".borra").show();
                        } else {
                            $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        }
                    } catch (e) {
                        $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                    }
                    //ToggleLoading(2);
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                }
            });
        };

        guardarProgramaciones = function () {
            var idProgramacion = $("#idProgramacion").val();
            var cveMes = $("#cveMes").val();
            var anio = $("#anio").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var cveJuzgado = $("#cveJuzgado").val();
            if (validar()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programaciones/ProgramacionesFacade.Class.php",
                    data: {
                        idProgramacion: idProgramacion,
                        cveMes: cveMes,
                        anio: anio,
                        fechaInicial: fechaInicial,
                        fechaFinal: fechaFinal,
                        cveJuzgado: cveJuzgado,
                        accion: "guardar"},
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                        $("#info").html('<span>Guardando la informaci&oacute;n, espere un momento por favor</span>').show();
                        $(".borra").hide();
                        $(".guardaTodo").hide();
                        $(".limpia").hide();
                        $(".consulta").hide();
                    },
                    success: function (datos) {
                        $("#info").hide();
                        try {
                            if (datos.totalCount > 0) {
                                $("#correcto").html('<span>Datos guardados correctamente</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                $(".consulta").trigger("click");
                                ToggleLoading(2);
                                //clean();
                                $("#idProgramacion").val("");
                                $("#info").hide();
                                $(".guardaTodo").show();
                                $(".limpia").show();
                                $(".consulta").show();
                            } else {
                                $("#advertencia").html('<span>Error ' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                ToggleLoading(2);
                                $(".guardaTodo").show();
                                $(".limpia").show();
                                $(".consulta").show();
                            }

                        } catch (e) {
                            $("#advertencia").html('<span>Ocurrio un error ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            ToggleLoading(2);
                            $("#info").hide();
                            $(".guardaTodo").show();
                            $(".limpia").show();
                            $(".consulta").show();
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#error").html('<span>Ocurrio un error al guardar los datos, favor de consultar con el administrador</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        ToggleLoading(2);
                        $(".guardaTodo").show();
                        $(".limpia").show();
                        $(".consulta").show();
                        $("#info").hide();
                    }
                });
            }
        }

        bajaProgramaciones = function () {
            var idProgramacion = $("#idProgramacion").val();
            var cveMes = $("#cveMes", "id").val();
            var anio = $("#anio").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var cveJuzgado = $("#cveJuzgado").val();
            bootbox.dialog({
                message: "AL ELIMINAR EL REGISTRO SELECCIONADOS SE BORARAN LOS DATOS DE PROGRAMACION DE SALAS Y PROGRAMACION DE JUZGADORES, ESTA ACCION NO SE PUEDE DESHACER \¿ ESTAS SEGURO DE CONTINUAR?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {

                            if (idProgramacion == "") {
                                alert("No se selecciono un registro a eliminar, favor de verificar!");
                            } else {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/programaciones/ProgramacionesFacade.Class.php",
                                    data: {
                                        idProgramacion: idProgramacion,
                                        cveMes: cveMes,
                                        anio: anio,
                                        fechaInicial: fechaInicial,
                                        fechaFinal: fechaFinal,
                                        cveJuzgado: cveJuzgado,
                                        accion: "baja"},
                                    async: true,
                                    dataType: "json",
                                    beforeSend: function (objeto) {
                                        ToggleLoading(1);
                                        $(".borra").hide();
                                    },
                                    success: function (datos) {
                                        try {
                                            $("#correcto").html('<span>Datos eliminados correctamente</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                            clean();
                                            ToggleLoading(2);
                                        } catch (e) {
                                            $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                            ToggleLoading(2);
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        $("#error").html('<span>Ocurrio un error al borrar el registro!</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                        ToggleLoading(2);
                                    }
                                });
                            }
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
        }

        function borrarSeleccionados() {
            bootbox.dialog({
                message: "AL ELIMINAR LOS REGISTROS SELECCIONADOS SE BORARAN LOS DATOS DE PROGRAMACION DE SALAS Y PROGRAMACION DE JUZGADORES, ESTA ACCION NO SE PUEDE DESHACER \¿ ESTAS SEGURO DE CONTINUAR?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {

                            var registros = $('input[type=checkbox]:checked').length;
                            if (registros == 0) {
                                $(document).scrollTop(200);
                                $("#advertencia").html('<span>Debe seleccionar al menos un registro a eliminar!</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                            } else {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/programaciones/ProgramacionesFacade.Class.php",
                                    data: $("#formRegistros").serialize() + "&accion=bajaRegistros",
                                    async: true,
                                    dataType: "json",
                                    beforeSend: function (objeto) {
                                        $(document).scrollTop(200);
                                        $("#info").html('<span>Eliminando los registros seleccionados, espere un momento por favor</span>').show();
                                        ToggleLoading(1);
                                        $(".guardaTodo").hide();
                                        $(".limpia").hide();
                                        $(".consulta").hide();
                                        $("#borrarSeleccionados").hide();
                                    },
                                    success: function (datos) {
                                        try {
                                            $(document).scrollTop(200);
                                            $("#correcto").html('<span>Datos eliminados correctamente</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                            clean();
                                            ToggleLoading(2);
                                            $("#info").hide();
                                            $(".guardaTodo").show();
                                            $(".limpia").show();
                                            $(".consulta").show();
                                            $("#borrarSeleccionados").show();
                                        } catch (e) {
                                            $(document).scrollTop(200);
                                            $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                            ToggleLoading(2);
                                            $("#info").hide();
                                            $(".guardaTodo").show();
                                            $(".limpia").show();
                                            $(".consulta").show();
                                            $("#borrarSeleccionados").show();
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        $(document).scrollTop(200);
                                        $("#error").html('<span>Ocurrio un error al borrar los registros!</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                        ToggleLoading(2);
                                        $("#info").hide();
                                        $(".guardaTodo").show();
                                        $(".limpia").show();
                                        $(".consulta").show();
                                        $("#borrarSeleccionados").show();
                                    }
                                });
                            }
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
        }

        validar = function () {
            var cveMes = $("#cveMes").val();
            var anio = $("#anio").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var cveJuzgado = $("#cveJuzgado").val();
            if (cveJuzgado == "") {
                $("#advertencia").html('<span>Seleccione un Juzgado del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if (cveMes == "") {
                $("#advertencia").html('<span>Seleccione un mes del listado!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if (cveMes > 12) {
                $("#advertencia").html('<span>Seleccione un mes valido del listado!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if (validarAnio() == false) {
                $("#advertencia").html('<span>Capture un dato v&aacute;lido en el campo a&ntilde;o</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if (fechaInicial == "" || fechaInicial.length == 0) {
                $("#advertencia").html('<span>No se ha calculado la fecha inicial del mes, favor de verificar!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if (fechaFinal == "" || fechaFinal.length == 0) {
                $("#advertencia").html('<span>No se ha calculado la fecha final del mes, favor de verificar!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else {
                return true;
            }
        }

        /*
         * Función que permite mostrar la fecha inicial y final de un mes y año
         * indicados por el usuario
         */
        mostrarFechas = function () {
            var cveMes = $("#cveMes").val();
            var anio = $("#anio").val();
            var cveJuzgado = $("#cveJuzgado").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            if (cveMes != "" &&
                    cveMes < 13 &&
                    anio != "" && validarAnio()) {

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programaciones/ProgramacionesFacade.Class.php",
                    data: {accion: "consultarFechas",
                        cveMes: cveMes,
                        anio: anio,
                        cveJuzgado: cveJuzgado
                    },
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        //ToggleLoading(1);
                    },
                    success: function (datos) {
                        try {
                            $("#fechaInicial").val(formatoFecha(datos.data[0].fechaInicial));
                            $("#fechaFinal").val(formatoFecha(datos.data[0].fechaFinal));
                        } catch (e) {
                            $("#advertencia").html('<span>Ocurrio un error al consultar las fechas de inicio y fin: ' + e + '</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                        }
                        ToggleLoading(2);
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#error").html('<span>Error al consultar las fechas de inicio y fin, intentalo de nuevo mas tarde</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                    }
                });
            } else {
                $("#fechaInicial").val("");
                $("#fechaFinal").val("");
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
        }

        /*
         * Función que permite verificar si se capturan datos válidos en el campo txtAnio
         */
        validarAnio = function () {
            var anio = $("#anio").val();
            if (isNaN(parseInt(anio))) {
                return false;
            } else if (anio == 0) {
                return false;
            } else if (anio == "") {
                return false;
            } else if (anio.length < 4) {
                return false;
            } else if (parseInt(anio) < 2000) {
                return false;
            }
            else {
                return true;
            }
        }

        $(function () {
            listaMeses();
            listaJuzgados();
            var fecha = new Date();
            $("#anio").val(fecha.getFullYear());
            $("#anio").keyup(function (e) {
                //e = e || window.event;
                var charCode = (typeof e.which == "number") ? e.which : e.keyCode;
                if ((charCode >= 96 && charCode <= 105) || charCode == 8 || charCode == 13) {
                    if (validarAnio() && $("#cveMes").val() != "" && $("#cveMes").val() != 13 && $(this).val().length == 4) {
                        mostrarFechas();
                    }
                }
                if ($(this).val().length == 0) {
                    $("#fechaInicial").val("");
                    $("fechaFinal").val("");
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