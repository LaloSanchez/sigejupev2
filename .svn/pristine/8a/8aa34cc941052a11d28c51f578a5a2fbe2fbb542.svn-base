<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    ?>
    <style>

        .tblGridAgrega{
            border: 1px solid #999;
            font-family: arial;
            font-size: 12px;
            border-collapse: collapse;
            border-color: #ffffff;
        }

        th, td {
            text-align: left;
            border-bottom: 1px solid #ddd;
            border-right: 1px solid #ffffff;
        }

        .trGridAgrega{
            color: #ffffff;
            background-color: #881518;
        }

    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Eliminar Exhortos
            </h5>
        </div>
        <div class="panel-body">

            <div class="col-xs-12">
                <div class="form-horizontal">
                    <input type="hidden" readonly disabled id="hddIdCarpetaJudicial" name="hddIdCarpetaJudicial"/>

                    <div class="form-group col-xs-12">
                        <label for="juzgado" class="control-label col-md-3">Juzgado</label>
                        <div class="col-md-6">
                            <select name="cmbJuzgado" id="cmbJuzgado" class="form-control">
                            </select>
                        </div>
                    </div>

<!--                    <div class="form-group col-xs-12">
                        <label for="carpetas" class="control-label col-md-3">Tipo Carpeta</label>

                        <div class="col-md-6">
                            <select name="cmbTiposCarpetas" id="cmbTiposCarpetas" class="form-control">
                            </select>
                        </div>
                    </div>                -->

                    <div class="form-group col-xs-12">
                        <label class="control-label col-md-3" for="carpetas">Num. Exhorto</label>
                        <div class="col-md-6">
                            <input type="text" id="numero" name="numero" class="form-inline" placeholder="N&uacute;mero de exhorto"/>/
                            <input type="text" id="anio" name="anio" maxlength="4" class="form-inline" placeholder="A&ntilde;o de exhorto"/>
                        </div>
                    </div>
                    
                    <div id="fechas" class="form-group col-xs-12" >  
                        <label class="control-label col-md-3">Fecha Inicial</label>
                        <div id="divSinRelacion" class="col-md-2" >

                            <input type="text" id="txtFechaInicio" class="form-control datepicker" readonly>
        <!--                    <span class="input-group-addon">
                                <span class="glyphicon-calendar glyphicon"></span>
                            </span>-->
                            <!--</div>--> 
                        </div>
                        <label class="control-label col-md-2 needed" id="lblFF">Fecha Final</label>
                        <div id="txtFechFin" class=" col-sm-2" >
                            <input type="text" id="txtFechaFin" placeholder="DD/MM/AAAA" class="form-control datepicker" readonly>
        <!--                    <span class="input-group-addon" >
                                <span class="glyphicon-calendar glyphicon"></span>
                            </span>-->
                        </div> 
                    </div>

                    <div class="clearfix"></div>

                    <div class="form-group col-xs-12 text-center">
                        <button name="consultar" id="consultar" class="btn btn-primary" onclick="Consultar(1,0);">Consultar</button>
                        <button name="limpiar" id="limpiar" class="btn btn-primary" onclick="Limpiar();">Limpiar</button>
                        <button name="eliminar" id="btneliminar" class="btn btn-primary" style="display:none;"  onclick="eliminar();">Eliminar</button>
                    </div>

                    <div class="clearfix"></div>

                    <br><br>
                    <div class="form-group">
                        <div id="divAlertWarningEliminar" class="alert alert-warning alert-dismissable" style="display:none;">                    
                            <strong>Advertencia!</strong> Mensaje
                        </div>
                        <div id="divAlertSuccesEliminar" class="alert alert-success alert-dismissable" style="display:none;">

                            <strong>Correcto!</strong> Mensaje
                        </div>
                        <div id="divAlertDagerEliminar" class="alert alert-danger alert-dismissable" style="display:none;">

                            <strong>Error!</strong> Mensaje
                        </div>
                        <div id="divAlertInfoEliminar" class="alert alert-info alert-dismissable" style="display:none;">

                            <strong>Informaci&oacute;n!</strong> Mensaje
                        </div>
                    </div>    

                    <div id="divResultados" style="display:none;"></div>

                </div>

            </div>


        </div>
    </div>
    <!--</div>-->
    <script type="text/javascript">
        comboJuzgados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgado').empty();
                        $('#cmbJuzgado').append('<option value="">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgado').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de audiencias:\n\n" + otroobj);
                }
            });
        };
        comboTiposCarpetas = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", activo: "S"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTiposCarpetas').empty();
                        $('#cmbTiposCarpetas').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if(object.cveTipoCarpeta == 7 ){
                                    $('#cmbTiposCarpetas').append('<option value="' + object.cveTipoCarpeta + '" selected>' + object.desTipoCarpeta + '</option>');
                                }
                                else{
                                    $('#cmbTiposCarpetas').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                }
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Tipos Carpetas:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Tipos Carpetas:\n\n" + otroobj);
                }
            });
        };

        validate = function () {
            var mensaje = "";
            var error = true;
            if ($('#cmbJuzgado').val() == "" || $('#cmbJuzgado').val() == "0") {
                mensaje += "*Seleccione un juzgado<br>";
                error = false;
            }
            if ($('#cmbTiposCarpetas').val() == "" || $('#cmbTiposCarpetas').val() == "0") {
                mensaje += "*Seleccione el tipo de carpeta<br>";
                error = false;
            }
            if ($('#numero').val() == "" || $('#numero').val() == "0") {
                mensaje += "*Ingrese un n&uacute;mero <br>";
                error = false;
            }
            if ($('#anio').val() == "" || $('#anio').val() == "0") {
                mensaje += "*Ingrese un a&ntilde;o <br>";
                error = false;
            }
            if (!error) {
                $("#divAlertWarningEliminar").html("");
                $("#divAlertWarningEliminar").html(mensaje);
                $("#divAlertWarningEliminar").show("");
                setTimeAlert("divAlertWarningEliminar");
            }
            return error;
        };

        Consultar = function (pagina, nRegistros) {
            if (nRegistros == 0) {
                nRegistros = 10;
            } else {

                nRegistros = $("#cmbRegistrosE").val();
            }
//            var cveJuzgado = $("#cmbJuzgado").val();
            var buscar = true;
            
            if ($("#numero").val() == "" && $("#anio").val() == "") {
                var fechaInicial = $("#txtFechaInicio").val();
                var fechaFinal = $("#txtFechaFin").val();
                var separa = fechaInicial.split("/");
                var dia = separa[0];
                var mes = separa[1];
                var anio = separa[2];
                fechaInicial = anio + "-" + mes + "-" + dia + " 00:00:00";
                var separaF = fechaFinal.split("/");
                var diaF = separaF[0];
                var mesF = separaF[1];
                var anioF = separaF[2];
                fechaFinal = anioF + "-" + mesF + "-" + diaF + " 23:59:00";
            } else {
                fechaInicial = "";
                fechaFinal = "";
            }
            
            var error = true;
//            if (validate()) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        numExhorto: $("#numero").val(),
                        aniExhorto: $("#anio").val(),
                        cveJuzgado: $("#cmbJuzgado").val(),
                        fechaInicial: fechaInicial,
                        fechaFinal: fechaFinal,
                        activo: 'S',
                        accion: 'consultarEliminar'
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        var table = "";
                        var juzgado = "";
                        var i = 1;
                        $("#divResultados").html("");
                        
                        if (datos.estatus == "ok") {
                            table += "<br><table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                            table += "    <thead>";
                            table += "        <tr>";
                            table += "            <th>N&uacute;m.</th>";
                            table += "            <th>No. Exhorto</th>";
                            table += "            <th>Estatus</th>";
                            table += "            <th>Estado Procedencia</th>";
                            table += "            <th>Juzgado Procedencia</th>";
                            table += "            <th>Sintesis</th>";
                            table += "            <th>Fecha de Registro</th>";
                            table += "            <th>Eliminar</th>";
                            table += "        </tr>";
                            table += "    </thead>";
                            table += "    <tbody>";
                            $.each(datos.data, function (key, value) {
                                
                                if (value.cveJuzgadoProcedencia == null || value.cveJuzgadoProcedencia == 0) {
                                    var juz = value.JuzgadoProcedencia;
                                } else {
                                    var juz = value.desJuzgadoProcedencia;
                                }
                                table += "<tr>";
                                table += "   <td align='center'> " + i + "</td>";
                                table += "   <td align='left'> " + value.numExhorto + "/" + value.aniExhorto + "</td>";
                                table += "   <td align='left' > " + value.desEstatus + "</td>";
                                table += "   <td align='left'> " + value.desEstadoProcedencia + "</td>";
                                table += "   <td align='left'> " + juz + "</td>";
                                table += "   <td align='left'> " + value.sintesis + " </td>";
                                table += "   <td align='left'>" + value.fechaRegistro + "</td>";
                                if(value.eliminar == '1'){
                                    table += "   <td align='center' ><img src='img/eliminar.png' width=30 height=30 onclick=\"eliminarE('" + nRegistros +"','" + pagina + "','" + value.idExhorto + "','" + value.idAntecedeCarpeta + "')\" style='cursor:pointer' ></td>";
                                }else{
                                    table += "   <td align='center' ></td>";
                                }
                                table += "</tr> ";
                                i++;
                            });
                            table += "</tbody>";
                            table += "</table><br>";
                            $("#divResultados").html(table);
                            $("#divResultados").show('');
                            $("#tblResultadosGrid").DataTable({paging: false});

                        } else {
                            $("#divAlertWarningEliminar").html("");
                            $("#divAlertWarningEliminar").html(datos.mensaje);
                            $("#divAlertWarningEliminar").show("");
                            setTimeAlert("divAlertWarningEliminar");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Tipos Carpetas:\n\n" + otroobj);
                    }
                });
//            } else {
//                error = false;
//            }
            return error;
        };
        
        eliminarE = function (total, pagina, idExhorto, idAntecede) {
            bootbox.dialog({
                message: "\u00bfSeguro quieres eliminar Exhorto ?",
                closeButton: false,
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {

                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                                async: false,
                                dataType: "json",
                                data: {
                                    idExhorto: idExhorto,
                                    activo: 'N',
                                    accion: 'eliminar_exhorto'
                                },
                                success: function (data) {
                                    if (data.estatus == "ok") {
                                        if(idAntecede != ''){
                                            $.ajax({
                                                type: "POST",
                                                url: "../fachadas/sigejupe/antecedescarpetas/AntecedescarpetasFacade.Class.php",
                                                async: false,
                                                dataType: "json",
                                                data: {
                                                    idAntecedeCarpeta: idAntecede,
                                                    accion: 'baja'
                                                },
                                                success: function (data) {
                                                   console.log('ok'); 
                                                }
                                            });
                                        }
                                        
                                        $("#divAlertSuccesEliminar").html("");
                                        $("#divAlertSuccesEliminar").html("El exhorto se elimino de forma correcta");
                                        $("#divAlertSuccesEliminar").show("");
                                        setTimeAlert("divAlertSuccesEliminar");
                                        total = total - 1;
                                        $("#div_paginacion").html("<strong>Total: " + total + "</strong></div>");
//                                        paginacionExhorto(total, pagina);
                                        Consultar(total,pagina);
                                    } else {
                                        console.log(data.mensaje);
                                    }
                                }
                            });
                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {
                            // $("tr").filter('[data-ofendido="' + idofendido + '"]').removeClass('danger');
                        }
                    }
                }
            });
        };

        Limpiar = function () {
            $('#cmbJuzgado').val('');
            $('#numero').val("");
            $('#anio').val("");
            $("#divResultados").html("");
            $("#btneliminar").hide("");
            fechaBaseDatos({
                txtFechaInicio: "fecha",
                txtFechaFin: "fecha"
            });
        };

        $(function () {
            $('#numero').validaCampo('0123456789');
            $('#anio').validaCampo('0123456789');
            comboJuzgados();
            comboTiposCarpetas();
            
            fechaBaseDatos({
            txtFechaInicio: "fecha",
            txtFechaFin: "fecha"
            });
            
            $("#txtFechaInicio").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
                ignoreReadonly: true,
                maxDate: 'now'
            });

            $("#txtFechaFin").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
                ignoreReadonly: true,
                maxDate: 'now'
            });
            
            $("#txtFechaInicio").on("dp.change", function (e) {
                $('#txtFechaFin').data("DateTimePicker").minDate(e.date);
            });
            $("#txtFechaFin").on("dp.change", function (e) {
                $('#txtFechaInicio').data("DateTimePicker").maxDate(e.date);

                var fecha_auxI = $("#txtFechaInicio").val().split("/");
                var fI = new Date(parseInt(fecha_auxI[2]), parseInt(fecha_auxI[1] - 1), parseInt(fecha_auxI[0]));

                var fecha_auxF = $("#txtFechaFin").val().split("/");
                var fF = new Date(parseInt(fecha_auxF[2]), parseInt(fecha_auxF[1] - 1), parseInt(fecha_auxF[0]));

                if (fI > fF) {
                    $("#txtFechaInicio").val($("#txtFechaFin").val());
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