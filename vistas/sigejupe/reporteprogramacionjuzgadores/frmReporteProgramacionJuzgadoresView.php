<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    ?>     

    <!--<div class="page-content" id="areadetrabajo">-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Programaci&oacute;n de Juzgadores                           
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Juzgado</label>
                    <div class="col-xs-9" id="listaJuzgados">
                        <input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgado">
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Mes</label>
                    <div class="col-xs-9" id="listaMeses">
                        <input type="hidden" class="form-control selecto2" id="cveMes" name="cveMes" placeholder="Mes">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">A&ntilde;o</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="anio" name="anio" placeholder="Año">
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
                        <input type="submit" class="btn btn-primary consulta" value="Consultar" onclick="consultarProgramacionjuzgadores()">
                        <input type="submit" class="btn btn-primary limpia" value="Limpiar" onclick="clean()">
                        <input type="submit" class="btn btn-primary exporta" style="display: none;" value="Exportar a PDF" onclick="exportar()">
                    </div>
                </div>
            </div>                                    
            <form id="formProgramaciones" method="post">
                <div id="contenidoReporte" style="width: 100%;">
                    <div style="text-align: center;" id="encabezado"></div>
                    <br><br>
                    <table id="tblResultados" align="center" class="table" style="border: solid 1px #000; width: 100%;" cellspacing="0" cellpadding="2">
                        <thead>
                            <tr>
                                <th style="border: solid 1px #000; width: 10%"><div style="color: #000;">#</div></th>
                        <th style="border: solid 1px #000; width: 30%"><div style="color: #000;">ROL</div></th>
                        <th style="border: solid 1px #000; width: 20%"><div style="color: #000;">D&Iacute;A</div></th>
                        <th style="border: solid 1px #000; width: 20%"><div style="color: #000;">FECHA</div></th>
                        <th style="border: solid 1px #000; width: 20%"><div style="color: #000;">HORARIO</div></th>
                        </tr>
                        </thead>
                        <tbody id="listaProgramaciones">

                        </tbody>
                    </table>
                </div>
                <textarea id="contenido" id="contenido" style="display: none;"></textarea>
            </form>
            <br>
            <div class="form-horizontal">
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary guardarTodo" style="display: none;" value="Guardar Todo">
                        <input type="submit" class="btn btn-primary borrarSeleccionados" style="display: none;" value="Eliminar Seleccionados">
                    </div>
                </div>
            </div>    

        </div>
    </div>
    <!--</div>-->
    <script type="text/javascript">

        consultarProgramacionjuzgadores = function () {
            var cveMes = $("#cveMes").val();
            var anio = $("#anio").val();
            var cveJuzgado = $("#cveJuzgado").val();
            if (cveJuzgado == "") {
                $("#advertencia").html('<span>Seleccione un juzgado!</span>').fadeIn('slow').delay(5000).fadeOut('slow');
            } else if (anio == "") {
                $("#advertencia").html('<span>Capture el a�o de consulta!</span>').fadeIn('slow').delay(5000).fadeOut('slow');
            } else if (cveMes == "") {
                $("#advertencia").html('<span>Seleccione un mes!</span>').fadeIn('slow').delay(5000).fadeOut('slow');
            } else {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                    data: {
                        cveMes: cveMes,
                        anio: anio,
                        cveJuzgado: cveJuzgado,
                        accion: "consultarProgramacionJuzgadores"},
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                        $("#info").html('<span>Consultando Informacion, por favor espere</span>').show();
                    },
                    success: function (datos) {
                        try {
                            var nombreJuzgado = $("#cveJuzgado :selected").text();
                            var desMes = $("#cveMes :selected").text();
                            var desAnio = $("#anio").val();
                            var texto = ucFirstAllWords(nombreJuzgado) + ", " + ucFirstAllWords(desMes) + ", " + desAnio;

                            $("#encabezado").html("Horarios de atenci&oacute;n juzgadores " + texto);
                            var result = eval("(" + datos + ")");
                            var html = "";
                            var arregloIdJuzgador = new Array();
                            var arregloJuzgador = new Array();
                            console.log(result);
                            if (result.totalCount > 0) {
                                var fechaHoraInicio = "";
                                var fechaHoraTermino = "";
                                //alert(result.totalCount);
                                for (var n = 0; n < result.totalCount; n++) {
                                    fechaHoraInicio = result.data[n].FechaInicio.split(" ");
                                    console.log(fechaHoraInicio[1]);
                                    fechaHoraTermino = result.data[n].FechaFin.split(" ");

                                    if ($.inArray(result.data[n].IdJuzgador, arregloIdJuzgador) == -1) {
                                        arregloIdJuzgador.push(result.data[n].IdJuzgador);
                                    }
                                    if ($.inArray(result.data[n].Nombre, arregloJuzgador) == -1) {
                                        arregloJuzgador[result.data[n].IdJuzgador] = result.data[n].Nombre;
                                    }
                                }
                                var c = 0;
                                for (var s = 0; s < arregloIdJuzgador.length; s++) {
                                    html += '<tr id="' + arregloIdJuzgador[s] + '" style="background-color: #00695c; color: #FFFFFF;"><td colspan="5" align="center">' + arregloJuzgador[arregloIdJuzgador[s]] + '</td></tr>';
                                    for (var i = 0; i < result.totalCount; i++) {
                                        if (result.data[i].IdJuzgador == arregloIdJuzgador[s]) {
                                            c += 1;
                                            fechaHoraInicio = result.data[i].FechaInicio.split(" ");
                                            //console.log(fechaHoraInicio[1]);
                                            fechaHoraTermino = result.data[i].FechaFin.split(" ");
                                            html += "<tr class='datosProgramacion' style='border: solid 1px #000;'>";
                                            html += "<td style='border: solid 1px #000;'>" + c + "</td>";
                                            //html += "<td>" + json[i].sNombre + "</td>";
                                            html += "<td style='border: solid 1px #000;'>" + result.data[i].Rol + "</td>";
                                            html += "<td style='border: solid 1px #000;'>" + result.data[i].Dia + "</td>";
                                            html += "<td style='border: solid 1px #000;'>" + formatoFecha(fechaHoraInicio[0]) + "</td>";
                                            html += "<td style='border: solid 1px #000;'>" + fechaHoraInicio[1] + "-" + fechaHoraTermino[1] + '</td>';
                                            html += "</tr>";
                                        }
                                    }
                                    c = 0;
                                }
                                $('#listaProgramaciones').html(html);
                                $("#info").hide();
                                $(".exporta").show();
                            } else {
                                $("#listaProgramaciones").html("");
                                $("#info").html("<pan>" + result.text + "</span>").fadeIn('slow').delay(5000).fadeOut('slow');
                            }
                        } catch (e) {
                            //alert("Ocurrio un error al consultar los datos: " + e);
                            $("#advertencia").html('<span>Ocurrio un error al consultar los datos: ' + e + '</span>').fadeIn('slow').delay(6000).fadeOut('slow');
                            $("#listaProgramaciones").html("");
                            $("#info").hide();
                            $(".limpia").show();
                            $(".consulta").show();
                        }
                        ToggleLoading(2);
                    },
                    error: function (objeto, quepaso, otroobj) {
                        //alert("Ocurrio un error al consultar los datos, favor de intentarlo mas tarde!");
                        $("#error").append('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(6000).fadeOut('slow');
                        $("#listaProgramaciones").html("");
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                    }
                });
            }
        }

        exportar = function () {
            $("#contenido").val($("#contenidoReporte").html());
            var contenido = $("#contenido").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                data: {
                    contenido: contenido,
                    accion: "exportar"},
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                    $("#info").html('<span>Generando el reporte, espere un momento</span>').show();
                },
                success: function (datos) {
                    try {
                        $("#info").hide();
                        $("#correcto").html('<span>Reporte generado correctamente</span>').fadeIn('slow').delay(5000).fadeOut('slow');
                        window.open('../fachadas/sigejupe/programacionjuzgadores/' + datos);
                    } catch (e) {
                        //alert("Ocurrio un error al consultar los datos: " + e);
                        $("#advertencia").html('<span>Ocurrio un error al consultar los datos: ' + e + '</span>').fadeIn('slow').delay(6000).fadeOut('slow');
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                    }
                    ToggleLoading(2);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Ocurrio un error al consultar los datos, favor de intentarlo mas tarde!");
                    $("#error").append('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(6000).fadeOut('slow');
                    $("#info").hide();
                    $(".limpia").show();
                    $(".consulta").show();
                }
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

        clean = function () {
            //$.clearInput = function () {                                    
            $('#divFormulario').find('input[type=text], input[type=password], input[type=number], input[type=email], textarea').val('');
            $('#divFormulario').find('select').val('');
            var fecha = new Date();
            $("#divFormulario").find('input[name="anio"]').val(fecha.getFullYear());
            $("#listaProgramaciones").html("");
            $(".exporta").hide();
            $("#encabezado").html("");
            //};
        };

        function listaJuzgados() {
            var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {accion: 'consultar'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control text-uppercase" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveJuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                            }
                            html += "</select>";
                        } else {
                            html = "Sin resultados";
                        }
                        $('#listaJuzgados').html(html);

                    } catch (e) {
                        alert(e);
                    }
                    ToggleLoading(2);
                }
            }).error(function () {
                alert('error al obtener los juzgados');
            });
        }

        function listaMeses() {
            var ruta_meses = "../fachadas/sigejupe/meses/MesesFacade.Class.php";
            $.ajax(ruta_meses, {
                type: 'POST',
                data: {accion: 'consultar'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<select name="cveMes" id="cveMes" class="form-control text-uppercase" title="Mes" data-toggle="tooltip" tabIndex="tabIndex">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveMes + "'>" + data.data[index].desMes + "</option>";
                            }
                            html += "</select>";
                        } else {
                            html = "Sin resultados";
                        }
                        $('#listaMeses').html(html);
                    } catch (e) {
                        alert(e);
                    }
                    ToggleLoading(1);
                }
            }).error(function () {
                alert('error al obtener los meses');
            });
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
            //alert(anio.length);
            //console.log(anio);
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

        function ucFirstAllWords(str) {
            str = str.toLowerCase();
            var pieces = str.split(" ");
            for (var i = 0; i < pieces.length; i++) {
                var j = pieces[i].charAt(0).toUpperCase();
                pieces[i] = j + pieces[i].substr(1);
            }
            return pieces.join(" ");
        }

        $(function () {
            listaMeses();
            listaJuzgados();
            var fecha = new Date();
            $("#anio").val(fecha.getFullYear());
            //$('#tblResultados').DataTable();
        });

    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>