<?php
if (!isset($_SESSION)) {
    session_start();
}
date_default_timezone_set('America/Mexico_City');
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <style type="text/css">
        
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
        .needed:after {
            color:darkred;
            content: " (*)";
        }
        .requerido {
            color: darkred;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Reporte de Causas
            </h5>
        </div>
        <div  id="panelPrincipal" class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divPanelControl">
                    <div class="form-group">                                                                
                        <label class="control-label col-md-2" id="lblNum">Fecha Inicial<span class="requerido">(*)</span></label>
                        <div class="col-md-2" style="float: left;">
                            <input type="text" id="txtFechaInicio" placeholder="DD/MM/AAAA" class="form-control datepicker" readonly>
                        </div> 
                        <label class="control-label col-md-3" id="lblNum">Fecha Final<span class="requerido">(*)</span></label>
                        <div id="txtFechFin" class="input-group col-md-2" >
                            <input type="text" id="txtFechaFin" placeholder="DD/MM/AAAA" class="form-control datepicker" readonly>
                        </div> 
                    </div> 
                    <div class="form-group" id="divRegion" > 
                        <label class="control-label col-md-4">Regi&oacute;n</label>
                        <div class="col-md-5">
                            <div id="divCmbRegion" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbRegion" id="cmbRegion" onchange="filtrarDistritos();
                                    filtrarJuzgados('region');">
                                <option value="">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group" id="divDistrito"> 
                        <label class="control-label col-md-4">Distrito</label>
                        <div class="col-md-5">
                            <div id="divCmbDistrito" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbDistrito" id="cmbDistrito" onchange="filtrarJuzgados('distrito');">
                                <option value="">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group" id="divJuzgado"> 
                        <label class="control-label col-md-4">Juzgado</label>
                        <div class="col-md-5">
                            <div id="divCmbJuzgado" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbJuzgado" id="cmbJuzgado">
                                <option value="">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-4 col-md-9">
                            <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar consulta" value="Consultar" onclick="consultar()">
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="btnImprimir" value="Imprimir" onclick="Imprimir();" style="display: none">
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="btnExcel" value="Excel" onclick="excel();" style="display: none">
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar limpia" value="Limpiar" onclick="clean()">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div id="divPrecaucion" class="alert alert-warning alert-dismissable" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong id="strAdvertencia"></strong> 
                    </div>
                    <div id="divCorrecto" class="alert alert-success alert-dismissable" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong id="strCorrecto"></strong> 
                    </div>
                    <div id="divError" class="alert alert-danger alert-dismissable" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong id="strError"></strong>
                    </div>
                    <div id="divInformacion" class="alert alert-info alert-dismissable" style="display: none">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong id="strInformacion"></strong>
                    </div>
                </div>  
                <div class="form-group">
                    <div id="divAlertWarning" class="alert alert-warning alert-dismissable">                    
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="divAlertSucces" class="alert alert-success alert-dismissable">
                        <strong>Correcto!</strong> Mensaje
                    </div>
                    <div id="divAlertDager" class="alert alert-danger alert-dismissable">
                        <strong>Error!</strong> Mensaje
                    </div>
                    <div id="divAlertInfo" class="alert alert-info alert-dismissable">
                        <strong>Informaci&oacute;n!</strong> Mensaje
                    </div>

                </div>
                <div id="espimp" class="col-xs-12" style="display:none"></div>
                <div id="divConsulta" style="display: none" align="center" class="col-xs-12">
                    <div id="divResultados">
                    </div>
                    <div id="divImp" class="col-xs-12" style="display:none">
                    </div>
                    <div id="divExcel" class="col-xs-12" style="display:none">
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script type="text/javascript">
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        cargarRegiones = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/regiones/RegionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {

                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbRegion").append($('<option id="cmbRegion' + json.data[i].cveRegion + '"></option>').val(json.data[i].cveRegion).html(json.data[i].desRegion));
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        }
        cargarDistritos = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S&cveRegion=" + $("#cmbRegion").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/distritos/DistritosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {

                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {

                            $("#cmbDistrito").append($('<option id="cmbDistrito' + json.data[i].cveDistrito + '" region="' + json.data[i].cveRegion + '"></option>').val(json.data[i].cveDistrito).html(json.data[i].desDistrito));
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        }
        cargarJuzgado = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {

                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbJuzgado").append($('<option id="cmbJuzgado' + json.data[i].cveJuzgado + '" distrito = "' + json.data[i].cveDistrito + '" region = "' + json.data[i].cveRegion + '"></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado + "(CODIGO ANTERIOR)"));
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        }
        $(function () {
            //setfechas();
            //$("#txtFechaInicio").val($("#hiddenFechaActual").val());
            //$("#txtFechaFin").val($("#hiddenFechaActual").val());
            //        $("#txtFechaInicio").attr('readOnly', true);
            //        $("#txtFechaFin").attr('readOnly', true);
            //          $( "#txtFechaFin" ).prop( "disabled", true );

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
                        //maxDate: $.now()
            });

            //        $("#txtFechaInicio").datepicker({
            //            dateFormat: 'dd/mm/yy'
            //        });
            //        $("#txtFechaFin").datepicker({
            //            dateFormat: 'dd/mm/yy',
            //            endDate: '0dd'
            //        });
            $("#txtFechaInicio").on("dp.change", function (e) {
                $('#txtFechaFin').data("DateTimePicker").minDate(e.date);
            });
            $("#txtFechaFin").on("dp.change", function (e) {
                $('#txtFechaInicio').data("DateTimePicker").maxDate(e.date);
                if ($("#txtFechaFin").val() <= $("#txtFechaInicio").val()) {
                    $("#txtFechaInicio").val($("#txtFechaFin").val());
                }
                //alert(e.date);
            });
            if ($("#txtFechaFin").val() <= $("#txtFechaInicio").val()) {
                $("#txtFechaInicio").val($("#txtFechaFin").val());
            }
            cargarRegiones();
            cargarDistritos();
            cargarJuzgado();
            fechaBaseDatos({
                txtFechaInicio: "fecha",
                txtFechaFin: "fecha"
            });
        });
        clean = function () {
            $("#txtFechaInicio").val("<?php echo date('d/m/Y'); ?>");
            $("#txtFechaFin").val("<?php echo date('d/m/Y'); ?>");
            $("#divResultados").html("");
            $("#divResultados").hide("");
            $("#divConsulta").hide("");
            $("#btnImprimir").hide("");
            $("#btnExcel").hide("");
            $("#txtFechaInicio").prop("disabled", false);
            $("#txtFechaTermino").prop("disabled", false);
            $('#cmbJuzgado').val("");
            $('#cmbDistrito').val("");
            $('#cmbRegion').val("");
        };
        function consultar() {
            if ($("#txtFechaInicio").val() != "" && $("#txtFechaFin").val() != "") {
                var juzgadoDet = $("#cmbJuzgado option:selected").text();
                var table = "";
                var table2 = "";
                var table3 = "";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/reportes/CausasRadicadasDetalleFacade.Class.php",
                    data: {
                        accion: "consultar",
                        cveJuzgado: $("#cmbJuzgado").val(),
                        cveRegion: $("#cmbRegion").val(),
                        cveDistrito: $("#cmbDistrito").val(),
                        fechafin: $("#txtFechaFin").val(),
                        fechainicio: $("#txtFechaInicio").val()
                    },
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        $("#divConsulta").hide();
                        $('#espimp').html("<center><img src= 'img/carga.gif' /></center>");
                        $('#espimp').show("");
                    },
                    success: function (datos) {
                        if (datos.totalCount > 0) {
                            table += "<center><table style='border-collapse:collapse;' id='tblTitulo' class='list-unstyled'><tr>";
                            table += "<td  colspan=4 width=30%>&nbsp;</td><td align='center' rowspan=4>";
                            table += "<img src='http://sigejupe2.pjedomex.gob.mx/sigejupe/vistas/img/logoPj.png' width=300px><br><h3><b>REPORTE DE CAUSAS RADICADAS</b></h3></td><td align='center' colspan=4 width=30%>&nbsp;</td></tr>";
                            table += '</table>';
                            table += "<table border:1px;' class='table table-hover table-striped table-bordered' border=1 id='tblReporte'>";
                            table += '<thead>';
                            table += '<tr>';
                            table += '<td width="5%" align="center"><b>NO.</b></th>';
                            table += '<td width="5%" align="center"><b>REGI&Oacute;N</b></th>';
                            table += '<td width="5%" align="center"><b>DISTRITO</b></th>';
                            table += '<td width="10%" align="center"><b>JUZGADO</b></th>';
                            table += '<td width="8%" align="center"><b>CAUSA</b></th>';
                            table += '<td width="8%" align="center"><b>NUC</th>';
                            table += '<td width="8%" align="center"><b>CARPETA ADMINISTRATIVA</b></th>';
                            table += '<td width="8%" align="center"><b>FECHA DE RADICACI&Oacute;N</b></th>';
                            table += '<td width="35%" align="center"><b>DELITOS</b></th>';
                            table += '</tr>';
                            table += '</thead>';

                            //imprimir

                            table2 += "<center><table width='1100' style='border-collapse:collapse; border:1px;' class='table' border=1 id='tblReporte'>";
                            table2 += '<thead>';
                            table2 += '<tr>';
                            table2 += '<td style="border: hidden" colspan=9 align=center>';
                            table2 += "<img src='img/logoPj.png' width=300px></td></tr></tr><td style='border: hidden' align=center colspan=9>";
                            table2 += "<h3><font face='Arial'><b>REPORTE DE CAUSAS RADICADAS</b></font></h3></td>";
                            table2 += '</tr><tr><td colspan=9 style="border-bottom: 1px"></td></tr><tr>';
                            table2 += '<td width="5%" align="center"><FONT FACE="Arial"><b>NO.</b></font></th>';
                            table2 += '<td width="5%" align="center"><FONT FACE="Arial"><b>REGI&Oacute;N</b></font></th>';
                            table2 += '<td width="5%" align="center"><FONT FACE="Arial"><b>DISTRITO</b></font></th>';
                            table2 += '<td width="10%" align="center"><FONT FACE="Arial">v<b>JUZGADO</b></font></th>';
                            table2 += '<td width="8%" align="center"><FONT FACE="Arial"><b>CAUSA</b></font></th>';
                            table2 += '<td width="8%" align="center"><FONT FACE="Arial"><b>NUC</b></font></th>';
                            table2 += '<td width="8%" align="center"><FONT FACE="Arial"><b>CARPETA ADMINISTRATIVA</b></font></th>';
                            table2 += '<td width="8%" align="center"><FONT FACE="Arial"><b>FECHA DE RADICACI&Oacute;N</b></font></th>';
                            table2 += '<td width="35%" align="center"><FONT FACE="Arial"><b>DELITOS</b></font></th>';
                            table2 += '</tr>';
                            table2 += '</thead>';
                            
                            table3 += "<center><table style='border-collapse:collapse;' id='tblTitulo' class='list-unstyled' width='1100'><tr>";
                            table3 += "<td  colspan=4 width=30%>&nbsp;</td><td align='center' rowspan=4>";
                            table3 += "<img src='http://sigejupe2.pjedomex.gob.mx/sigejupe/vistas/img/logoPj.png' width=300px><br><br><br><br><h3><b>REPORTE DE CAUSAS RADICADAS</b></h3></td><td align='center' colspan=4 width=30%>&nbsp;</td></tr>";
                            table3 += '</table>';
                            table3 += "<table width='1100' border:1px;' class='table table-hover table-striped table-bordered' border=1 id='tblReporte'>";
                            table3 += '<thead>';
                            table3 += '<tr>';
                            table3 += '<td width="5%" align="center"><b>NO.</b></th>';
                            table3 += '<td width="5%" align="center"><b>REGI&Oacute;N</b></th>';
                            table3 += '<td width="5%" align="center"><b>DISTRITO</b></th>';
                            table3 += '<td width="10%" align="center"><b>JUZGADO</b></th>';
                            table3 += '<td width="8%" align="center"><b>CAUSA</b></th>';
                            table3 += '<td width="8%" align="center"><b>NUC</th>';
                            table3 += '<td width="8%" align="center"><b>CARPETA ADMINISTRATIVA</b></th>';
                            table3 += '<td width="8%" align="center"><b>FECHA DE RADICACI&Oacute;N</b></th>';
                            table3 += '<td width="45%" align="center"><b>DELITOS</b></th>';
                            table3 += '</tr>';
                            table3 += '</thead>';

                            var conta = 1;
                            for (var i = 0; i < (parseInt(datos.totalCount)); i++) {
                                table += '<tr>';
                                table += '<td align="center"><FONT SIZE=2 FACE="Arial">' + (i + 1) + '</td>';
                                table += '<td align="center"><FONT SIZE=2 FACE="Arial">' + datos.data[i].Region + '</td>';
                                table += '<td align="center"><FONT SIZE=2 FACE="Arial">' + datos.data[i].Distrito + '</td>';
                                table += '<td align="center"><FONT SIZE=2 FACE="Arial">' + datos.data[i].Juzgado + '</td>';
                                table += '<td align="center"><FONT SIZE=2 FACE="Arial">' + datos.data[i].tipoCarpeta + '<br>' + datos.data[i].numero + '/' + datos.data[i].anio + '</td>';
                                if (datos.data[i].NUC != "") {
                                    table += '<td align="center"><FONT SIZE=2 FACE="Arial">' + datos.data[i].NUC + '</td>';
                                } else {
                                    table += '<td align="center"><FONT SIZE=2 FACE="Arial">N/A</td>';
                                }
                                if (datos.data[i].CarpInv != "") {
                                    table += '<td align="center"><FONT SIZE=2 FACE="Arial">' + datos.data[i].CarpInv + '</td>';
                                } else {
                                    table += '<td align="center"><FONT SIZE=2 FACE="Arial">N/A</td>';
                                }
                                var fecha = datos.data[i].fechaRadicacion;
                                var res = fecha.slice(0, 10);
                                var ano = res.slice(0, 4);
                                var mes = res.slice(5, 7);
                                var dia = res.slice(8, 10);
                                table += '<td align="center"><FONT SIZE=2 FACE="Arial">' + dia + '/' + mes + '/' + ano + '</td>';
                                table += '<td align="center"><FONT SIZE=1 FACE="Arial">';
                                $.each(datos.data[i].delitos, function (index, elemento1) {
                                    if (elemento1.cveDelito != "") {
                                        table += "<b>DELITO:</b> " + elemento1.desDelito + ',';
                                        table += " <b>CODIGO:</b> " + elemento1.Procedimiento + ',';
                                        table += " <b>CONSUMACI&Oacute;N:</b> " + elemento1.consumacion + ',';
                                        table += " <b>FORMA DE ACCI&Oacute;N:</b> " + elemento1.FormaAccion + ',';
                                        table += " <b>MODALIDAD:</b> " + elemento1.Modalidad + ',';
                                        table += " <b>CONCURSO:</b> " + elemento1.Concurso + ',';
                                        table += " <b>COMISI&Oacute;N:</b> " + elemento1.Comision + '<br><br>';
                                    }
                                });
                                table += '</td>';
                                table += '</tr>';

                                table2 += '<tr>';
                                table2 += '<td align="center"><FONT SIZE=2 FACE="Arial">' + (i + 1) + '</td>';
                                table2 += '<td align="center"><FONT SIZE=2 FACE="Arial">' + datos.data[i].Region + '</td>';
                                table2 += '<td align="center"><FONT SIZE=2 FACE="Arial">' + datos.data[i].Distrito + '</td>';
                                table2 += '<td align="center"><FONT SIZE=2 FACE="Arial">' + datos.data[i].Juzgado + '</td>';
                                table2 += '<td align="center"><FONT SIZE=2 FACE="Arial">' + datos.data[i].tipoCarpeta + '<br>' + datos.data[i].numero + '/' + datos.data[i].anio + '</td>';
                                if (datos.data[i].NUC != "") {
                                    table2 += '<td align="center"><FONT SIZE=2 FACE="Arial">' + datos.data[i].NUC + '</td>';
                                } else {
                                    table2 += '<td align="center"><FONT SIZE=2 FACE="Arial">N/A</td>';
                                }
                                if (datos.data[i].CarpInv != "") {
                                    table2 += '<td align="center"><FONT SIZE=2 FACE="Arial">' + datos.data[i].CarpInv + '</td>';
                                } else {
                                    table2 += '<td align="center"><FONT SIZE=2 FACE="Arial">N/A</td>';
                                }
                                table2 += '<td align="center"><FONT SIZE=2 FACE="Arial">' + dia + '/' + mes + '/' + ano + '</td>';
                                table2 += '<td align="center"><FONT SIZE=1 FACE="Arial">';
                                $.each(datos.data[i].delitos, function (index, elemento1) {
                                    table2 += " <b>DELITO:</b> " + elemento1.desDelito + ',';
                                    table2 += " <b>CODIGO:</b> " + elemento1.Procedimiento + ',';
                                    table2 += " <b>CONSUMACI&Oacute;N:</b> " + elemento1.consumacion + ',';
                                    table2 += " <b>FORMA DE ACCI&Oacute;N:</b> " + elemento1.FormaAccion + ',';
                                    table2 += " <b>MODALIDAD:</b> " + elemento1.Modalidad + ',';
                                    table2 += " <b>CONCURSO:</b> " + elemento1.Concurso + ',';
                                    table2 += " <b>COMISI&Oacute;N:</b> " + elemento1.Comision + '<br><br>';
                                });
                                table2 += '</td>';
                                table2 += '</tr>';
                                
                                table3 += '<tr>';
                                table3 += '<td align="center"><FONT SIZE=2 FACE="Arial">&nbsp;' + (i + 1) + '</td>';
                                table3 += '<td align="center"><FONT SIZE=2 FACE="Arial">&nbsp;' + datos.data[i].Region + '</td>';
                                table3 += '<td align="center"><FONT SIZE=2 FACE="Arial">&nbsp;' + datos.data[i].Distrito + '</td>';
                                table3 += '<td align="center"><FONT SIZE=2 FACE="Arial">&nbsp;' + datos.data[i].Juzgado + '</td>';
                                table3 += '<td align="center"><FONT SIZE=2 FACE="Arial">&nbsp;' + datos.data[i].tipoCarpeta + '<br>' + datos.data[i].numero + '/' + datos.data[i].anio + '</td>';
                                if (datos.data[i].NUC != "") {
                                    table3 += '<td align="center"><FONT SIZE=2 FACE="Arial">&nbsp;' + datos.data[i].NUC + '</td>';
                                } else {
                                    table3 += '<td align="center"><FONT SIZE=2 FACE="Arial">&nbsp;N/A</td>';
                                }
                                if (datos.data[i].CarpInv != "") {
                                    table3 += '<td align="center"><FONT SIZE=2 FACE="Arial">&nbsp;' + datos.data[i].CarpInv + '</td>';
                                } else {
                                    table3 += '<td align="center"><FONT SIZE=2 FACE="Arial">&nbsp;N/A</td>';
                                }
                                var fecha = datos.data[i].fechaRadicacion;
                                var res = fecha.slice(0, 10);
                                var ano = res.slice(0, 4);
                                var mes = res.slice(5, 7);
                                var dia = res.slice(8, 10);
                                table3 += '<td align="center"><FONT SIZE=2 FACE="Arial">&nbsp;' + dia + '/' + mes + '/' + ano + '</td>';
                                table3 += '<td align="center"><FONT SIZE=1 FACE="Arial">&nbsp;';
                                $.each(datos.data[i].delitos, function (index, elemento1) {
                                    if (elemento1.cveDelito != "") {
                                        table3 += "<b>DELITO:</b> " + elemento1.desDelito + ',';
                                        table3 += " <b>CODIGO:</b> " + elemento1.Procedimiento + ',';
                                        table3 += " <b>CONSUMACI&Oacute;N:</b> " + elemento1.consumacion + ',';
                                        table3 += " <b>FORMA DE ACCI&Oacute;N:</b> " + elemento1.FormaAccion + ',';
                                        table3 += " <b>MODALIDAD:</b> " + elemento1.Modalidad + ',';
                                        table3 += " <b>CONCURSO:</b> " + elemento1.Concurso + ',';
                                        table3 += " <b>COMISI&Oacute;N:</b> " + elemento1.Comision + '<br><br>';
                                    }
                                });
                                table3 += '</td>';
                                table3 += '</tr>';
                                
                            }
                            table += "";
                            table += "</table></center>";

                            table2 += "";
                            table2 += "</table></center>";
                            
                            table3 += "";
                            table3 += "</table></center>";

                            $('#divConsulta').show();
                            $("#divResultados").show();
                            $("#btnExcel").show();
                            $("#btnImprimir").show();
                            $("#divResultados").html(table);
                            $("#divImp").html(table2);
                            $("#tblReporte").DataTable({
                                paging: false,
                            });
                            $('#espimp').hide("");
                            $('#divExcel').html(table3);
                        } else {
                            $("#divPrecaucion").html('Sin Resultados');
                            $("#divPrecaucion").show("");
                            setTimeAlert("divPrecaucion");
                            $('#espimp').hide("");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        //alert("Error al mostrar la informacion:\n\n" + otroobj);
                        $("#divPrecaucion").html('Algo salio mal');
                        $("#divPrecaucion").show("");
                        setTimeAlert("divPrecaucion");
                        $('#espimp').hide("");
                    }
                });
            } else {
                waitingDialog.hide();
                $("#divPrecaucion").html('Seleccione Ambas Fechas');
                $("#divPrecaucion").show("");
                setTimeAlert("divPrecaucion");
                $('#espimp').hide("");
            }
            $('#espimp').hide("");
        }
        function Imprimir() {
            $('#divConsulta').show('slow');
            $("#espimp").html("<center><img src='img/carga.gif' /></center>");
            $('#espimp').show('slow');
            w = window.open();
            var divs=$("#divImp").html();
            divs += "<br><br>Fecha y hora de consulta:  <?php echo date("d/m/y H:i:s"); ?>";
            divs += "<br><br>Generado por:  <?php echo $_SESSION["nombre"]; ?>";
            w.document.write(divs);
            w.document.close();
            w.print();
            $('#espimp').hide("");
        }
        excel = function () {
            var dt = new Date();
            var day = dt.getDate();
            var month = dt.getMonth() + 1;
            var year = dt.getFullYear();
            var hour = dt.getHours();
            var mins = dt.getMinutes();
            var postfix = day + "." + month + "." + year + "_" + hour + "." + mins;
            var a = document.createElement('a');
            var data_type = 'data:application/vnd.ms-excel; charset=UTF-8,%EF%BB%BF';
            var table_div = document.getElementById('divExcel');
            console.log(table_div);
            var table_html = table_div.outerHTML.replace(/ /g, '%20');
            console.log(table_html);
            a.href = data_type + ' ' + table_html;
            a.download = 'CausasRadicadasDetalle_' + postfix + '.xls';
            // a.click();
            var click_ev = document.createEvent("MouseEvents");
            // initialize the event
            click_ev.initEvent("click", true, true);
            //trigger the evevnt
            a.dispatchEvent(click_ev);
        };
        filtrarJuzgados = function (geografia) {
    //            cargarJuzgado();
            if (geografia == 'distrito') {
                $("#cmbJuzgado").val("");
                $("#cmbJuzgado option").each(function () {
                    $(this).hide();
                });
                $("#cmbJuzgado option[value='']").show();
                var cveDistrito = $("#cmbDistrito").val();
                var cveRegion = $("#cmbRegion").val();
                if (cveDistrito == "") {
                    if (cveRegion == "") {
                        $("#cmbJuzgado option").each(function () {
                            $(this).show();
                        });
                    } else {
                        filtrarJuzgados('region');
                    }

                } else {
                    $("#cmbJuzgado option").each(function () {
                        if ($(this).attr('distrito') == cveDistrito) {
                            $(this).show();
                        }
                    });
                }
            } else {
                $("#cmbJuzgado").val("");
                $("#cmbJuzgado option").each(function () {
                    $(this).hide();
                });
                $("#cmbJuzgado option[value='']").show();
                var cveRegion = $("#cmbRegion").val();
                if (cveRegion == "") {
                    $("#cmbJuzgado option").each(function () {
                        $(this).show();
                    });
                } else {
                    $("#cmbJuzgado option").each(function () {
                        if ($(this).attr('region') == cveRegion) {
                            $(this).show();
                        }
                    });
                }
            }
        };
        filtrarDistritos = function () {
    //            cargarDistritos();
            $("#cmbDistrito").val("");
            $("#cmbDistrito option").each(function () {
                $(this).hide();
            });
            $("#cmbDistrito option[value='']").show();
            var cveRegion = $("#cmbRegion").val();
            if (cveRegion == "") {
                $("#cmbDistrito option").each(function () {
                    $(this).show();
                });
            } else {
                $("#cmbDistrito option").each(function () {
                    if ($(this).attr('region') == cveRegion) {
                        $(this).show();
                    }
                });
            }
        };
    </script> 
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>