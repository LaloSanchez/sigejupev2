<?php
echo json_decode("<p><a name=\"OLE_LINK6\"><\/a><a name=\"OLE_LINK5\"><\/a><a name=\"OLE_LINK4\"><\/a><a name=\"OLE_LINK3\"><\/a><a name=\"OLE_LINK2\"><\/a><a name=\"OLE_LINK1\"><\/a><strong><span style=\"font-size:11px\">A LOS SECRETARIOS DE ACUERDOS Y RESPONSABLES DEL ACTIVO FIJO: AL MOMENTO DE RECIBIR LA ASIGNACI\u00c3\u0093N DE EQUIPO DE C\u00c3\u0093MPUTO, OFICINA, MANTENIMIENTO, MOBILIARIO, SEGURIDAD Y COMUNICACI\u00c3\u0093N, TENDR\u00c3\u0081N LA OBLIGACI\u00c3\u0093N DE REMITIR EL ALTA CORRESPONDIENTE A LA DIRECCION DE CONTROL PATRIMONIAL, EN UN T\u00c3\u0089RMINO DE TRES D\u00c3\u008dAS H\u00c3\u0081BILES CONTADOS A PARTIR DE <\/span><\/strong><strong><span style=\"font-size:11px\">LA FECHA DE<\/span><\/strong><strong><span style=\"font-size:11px\"> RECEPCI\u00c3\u0093N DE LOS BIENES.<\/span><\/strong><span style=\"font-size:8px\"> <\/span><\/p><br\/>");
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
// version 14/01/2016..
//$_POST['idActuacionPadre'] = "X";
if (!isset($_SESSION)) {
    @session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set("America/Mexico_City");
    ini_set("log_errors", 0);
    ini_set('display_errors', 0);
    $fechaHoraHoy = date("d/m/Y H:i");
    $fechaHoy = date("d/m/Y");
}
?>

<style type="text/css">
    .container {
        background-image: url("img/bg.png");
    }
    #divFoto {
        position:absolute;
        left:84%;
        top:20%;
    }

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
    .row-centered {
        text-align:center;
    }
    .col-centered {
        display:inline-block;
        float:none;
        /* reset the text-align */
        text-align:left;
        /* inline-block space fix */
        margin-right:-4px;
    }

    thead tr {
        border: 1px solid #ccc;;
        border-collapse:collapse;
        text-align: center !important;
    }
</style>
<input type="hidden" id="hddIdCedula" value="" >
<input type="hidden" id="hddCveAdscripcion" value="<?php echo $_SESSION['cveAdscripcion']; ?>" >
<input type="hidden" id="hiddenNombre" value="<?php echo $_SESSION['nombre']; ?>" >
<input type="hidden" id="hiddenAdscripcion" value="<?php echo $_SESSION['desAdscripcion']; ?>" >
<input type="hidden" id="hddCveUsuario" value="<?php echo $_SESSION["cveUsuarioSistema"]; ?>" >
<input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >
<input type="hidden" id="hiddenFechaHoraHoy" value="">
<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title" id="h5titulo">                                                            
            Trazabilidad
        </h5>
    </div>
    <div class="panel-body">
        <div id="divFormulario" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-md-2 needed" for="pwd">Juzgado</label>
                <div class="col-md-7">
                    <select id="cmbJuzgado" name="cmbJuzgado" class="form-control text-uppercase cambiosDiv">
                    </select>
                </div>
            </div>


            <div id="fechas" class="form-group" >  
                <!--<div>-->
                <label class="control-label col-md-2 needed" id="lblfI">Fecha Inicial</label>
                <div id="divSinRelacion" class="col-sm-2" >

                    <input type="text" id="txtFechaInicio" class="form-control datepicker" readonly>
<!--                    <span class="input-group-addon">
                        <span class="glyphicon-calendar glyphicon"></span>
                    </span>-->
                    <!--</div>--> 
                </div>
                <label class="control-label col-md-3 needed" id="lblFF">Fecha Final</label>
                <div id="txtFechFin" class=" col-sm-2" >
                    <input type="text" id="txtFechaFin" placeholder="DD/MM/AAAA" class="form-control datepicker" readonly>
<!--                    <span class="input-group-addon" >
                        <span class="glyphicon-calendar glyphicon"></span>
                    </span>-->
                </div> 
            </div>

            <div class="form-group">
                <label class="control-label col-md-2" for="pwd">Fecha Inicio Sin Actividad</label>
                <div class="col-sm-2">
                    <input type="text" id="txtFechaSinActividad" placeholder="FECHA SIN ACTIVIDAD" class="form-control datepicker" readonly >
                </div>
            </div>

            <br>
            <!-- Botones -->
            <div class="form-group ">
                <div class="col-md-offset-4  row-centered">
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="consultar()">                                    
                    </div>
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar();">                                    
                    </div>
                    <!--                    <div class="col-md-1 botonesAdaptar">
                                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" onclick="Imprimir();" style="display: none">                                                        
                                        </div>-->
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputExcel" value="Generar Excel" onclick="generarExcel();" style="display: none">                                                        
                    </div>
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary" id="inputExportarPDFs" value="Exportar PDF" onclick="exportar('exportarPDF', 'tablaBasica');" style="display: none">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <div id="divAdvertencia" class="alert alert-warning alert-dismissable" style="display: none">
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
                    <div id="ifr" style="display:none;" >
                        <form action="../fachadas/sigejupe/reportes/exportarReportes.php" id="formIframe" method="post" target="my_frame">
                            <input type="hidden" name="contenido" id="contenidoIframe" value="" />
                            <input type="hidden" name="accion" id="accionIframe" value="" />
                            <input type="hidden" name="info" id="infoIframe" value="" />
                        </form>
                        <iframe style="width: 100%;" name='my_frame' src='../fachadas/sigejupe/reportes/exportarReportes.php'></iframe>
                    </div>
                </div>
            </div>  
            <!-- div Alerts -->
            <div class="form-group">
                <div class="col-md-12">
                    <div id="divPrecaucion" class="alert alert-warning alert-dismissable">                    
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="divCorrecto" class="alert alert-success alert-dismissable">
                        <strong>Correcto!</strong> Mensaje
                    </div>   
                </div>
            </div>  
        </div>
        <div id="divConsulta" style="display: none" align="center" class="col-xs-12">
            <div id="botonesPagina" class="col-md-12">
                <div id="divTotal" class="form-group col-md-3" style="display:none">
                    <label class="control-label" id="totalReg"></label>

                </div>
                <div id="Paginacion" class="form-group col-md-3" style="display:none">
                    <label class="control-label">Cambiar a la p&aacute;gina:</label>
                    <select  name="cmbPaginacion" id="cmbPaginacion"  onchange="consultar()">
                        <option value="1">1</option>
                    </select>
                </div>
                <div id="divPaginador" style="display:none" class="form-group col-md-3" >
                    <label class="control-label">Registros por p&aacute;gina:</label>
                    <select  name="cmbNumReg" id="cmbNumReg" onchange="resetPagina();
                            consultar();">
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div class="col-md-3 botonesAdaptar" id="divAgregarAcuerdo" style="display:none">
                    <input type="submit" class="btn btn-primary btn-adaptar form-group" id="inputAcuerdo" value="Agregar Acuerdo" onclick="generarAcuerdos();">                                    
                </div>
            </div>
            <div id="divResultados" class="col-xs-12">
            </div>
        </div>
        <div id="Xls" style="display: none"></div>
        <div id="tblExcel" style="display: none"></div>
        <div id="tablaBasica" style="display: none">
        </div>
    </div>
</div>

<script type="text/javascript">
    var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
    function cargarJuzgados() {

        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
//            url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
            data: {
                accion: "consultar",
                activo: 'S'
            },
            async: false,
            dataType: "json",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                if (datos.totalCount > 0) {
                    var option = '<option tipojuzgado="0" value ="0"> SELECCIONE UNA OPCI&Oacute;N</option>';
                    $.each(datos.data, function (index, element) {
                        if (juzgadoSesion == element.cveJuzgado) {
                            var selected = ' selected="selected" ';
                        } else {
                            var selected = '';
                        }
                        option += '<option ' + selected + ' tipojuzgado="' + element.cveTipoJuzgado + '" value="' + element.cveJuzgado + '">' + element.desJuzgado + '</option>';
                    });
                    $("#cmbJuzgado").append(option);
                    $("#cmbJuzgado").change();
                } else {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            }
        });
    }

    function limpiar() {
        $("#cmbJuzgado").val(juzgadoSesion);
        $("#divResultados").html('');
        $('#divConsulta').hide('');

        $("#divAlertDager").html("");
        $("#divAlertDager").hide();
        $("#divAlertSucces").hide();
        $("#divAlertSucces").html("");

        $("#txtFechaSinActividad").val('');
        $("#txtFechaInicio").val($("#hiddenFechaActual").val());
        $("#txtFechaFin").val($("#hiddenFechaActual").val());
//        $('#inputImprimir').hide('');
        $('#inputExcel').hide('');
        $('#inputExportarPDFs').hide();
        $("#divPaginador").hide();
        $("#divTotal").hide();
        $("#divAgregarAcuerdo").hide();
        $("#Paginacion").hide();
        $("#cmbNumReg").val("10");
        $("#cmbPaginacion").val("1");
        $('#txtFechaInicio').data("DateTimePicker").maxDate('now');
        $('#txtFechaFin').data("DateTimePicker").minDate(false);
        fechaBaseDatos({
            txtFechaInicio: "fecha",
            txtFechaFin: "fecha"
        });
//        $("#fechas").show();
    }

    function consultar() {
        var cantReg = $("#cmbNumReg").val();
        if ($('#cmbJuzgado').val() != '0' && $('#cmbJuzgado').val() != '') {
//            if(validar()){
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/trayectoriacarpetas/TrayectoriaCarpetaFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    accion: "selectTrazabilidad",
                    cveAdscripcion: $("#cmbJuzgado").val(),
                    fechaInicio: $("#txtFechaInicio").val(),
                    fechaFin: $("#txtFechaFin").val(),
                    fechaSinActividad: $("#txtFechaSinActividad").val(),
                    activo: 'S',
                    pag: $("#cmbPaginacion").val(),
                    cantxPag: cantReg,
                    paginacion: true
                },
                beforeSend: function (objeto) {
                    $('#divResultados').html("<center><img src= 'img/carga.gif' /></center>");
                    $('#divConsulta').show();
                    $('#divResultados').show();
                },
                success: function (json) {
                    var juzgado = $("#cmbJuzgado").find('option:selected').text();
                    if (json.status == 'Ok' && json.totalCount > 0) {
                        $("#divPaginador").show();
                        $("#divTotal").show();

                        $("#Paginacion").show();
                        var table = "";
                        var table0 = "";
                        table0 += "<center><table style='border-collapse:collapse;' id='tblTitulo' class='list-unstyled'>";
                        table0 += "<tr><td ALIGN='center' whidth=10%> <img src='img/logoPjAcuses.jpg' width=310px></td>";
                        table0 += "</tr>";
                        table0 += '<tr><td colspan=4><br><label style="font-family: Arial; font-weight:501 !important; font-size:20px; ">' + juzgado + '</label><br></td></tr></table>';
//                            table0 += "<center><table style='border-collapse:collapse;' id='tblTitulo' class='list-unstyled'>";
//                            table0 += "<tr><td ALIGN='left' whidth=10%> <img src='http://electronico.pjedomex.gob.mx/electronico/vistas/img/EscudoEstadoMexico2.png' width=90px></td>";
//                            table0 += "<td width=10%></td>";
//                            table0 += "<td ALIGN='CENTER' COLSPAN=2>";
//                                table0 += "<label style='font-family: Arial; font-weight:501 !important; font-size:20px; '>GOBIERNO DEL ESTADO DE M&Eacute;XICO<br>";
//                                table0 += "PODER JUDICIAL<br>" + juzgado + "<br><br>";
//                                table0 += "TRAZABILIDAD</label></td><td width=20%></td></tr>";
//                            table0 += '<tr><td colspan=4>&nbsp;</td></tr></table>';
                        table += table0;
                        table += "<div id='tablaResultados'><table width='95%' border:1px;' class='table table-hover table-striped table-bordered' border=1 id='tblReporte'>";
                        table += '<thead>';
                        table += '<tr>';
                        table += '<th width="3%" align="center"><b>NO.</b></td>';
                        table += '<th width="20%" align="center"><b>ORGANO JURISDICCIONAL</b></td>';
//                            table += '<th width="8%" align="center"><b>DISTRITO JUDICIAL</b></td>';
                        table += '<th width="15%" align="center"><b>CARPETA JUDICIAL</b></td>';
//                            table += '<th width="10%" align="center"><b>ESTADO PROCESAL</b></td>';
//                            table += '<th width="15%" align="center"><b>DELITO</b></td>';
                        table += '<th width="10%" align="center"><b>FECHA RADICACI&Oacute;N</b></td>';
                        table += '<th width="45%" align="center"><b>TRAYECTORIA</b></td>';
                        table += '<th width="7%" align="center"><b>SELECCIONAR</b></td>';
                        table += '</tr>';
                        table += '</thead>';
                        table += "<tbody>";

                        var cont = 0;
                        var tableI = "";
                        tableI += '<table class="table table-hover table-striped table-bordered" border="1"><thead>';
                        tableI += '<tr>';
                        tableI += '<th width="3%"  align="center"><b>NO.</b></td>';
                        tableI += '<th width="12%" align="center"><b>ORGANO JURISDICCIONAL</b></td>';
//                            tableI += '<th width="8%" align="center"><b>DISTRITO JUDICIAL</b></td>';
                        tableI += '<th width="8%" align="center"><b>CARPETA JUDICIAL</b></td>';
//                            tableI += '<th width="10%" align="center"><b>ESTADO PROCESAL</b></td>';
//                            tableI += '<th width="15%" align="center"><b>DELITO</b></td>';
                        tableI += '<th width="7%" align="center"><b>FECHA RADICACI&Oacute;N</b></td>';
                        tableI += '<th width="37%" align="center"><b>TRAYECTORIA</b></td>';
                        tableI += '</tr>';
                        tableI += '</thead>';
                        tableI += '<tbody id="tablaExcel" border="1">';
                        var tableE = "";
                        tableE += '<tbody id="tablaXls" border="1">';
                        for (var i = 0; i < (parseInt(json.totalCount)); i++) {
//                                if (cont == 20) {
//                                    table += "</tbody>";
//                                    table += "</table>";
//                                    table += table0;
//                                    table += "<table width='95%' border:1px;' class='table table-hover table-striped table-bordered' border=1 id='tblReporte'>";
//                                    table += '<thead>';
//                                    table += '<tr>';
//                                    table += '<td width="3%" align="center"><b>NO.</b></td>';
//                                    table += '<td width="12%" align="center"><b>ORGANO JURISDICCIONAL</b></td>';
//                                    table += '<td width="8%" align="center"><b>DISTRITO JUDICIAL</b></td>';
//                                    table += '<td width="8%" align="center"><b>CARPETA JUDICIAL</b></td>';
//                                    table += '<td width="10%" align="center"><b>ESTADO PROCESAL</b></td>';
//                                    table += '<td width="15%" align="center"><b>DELITO</b></td>';
//                                    table += '<td width="7%" align="center"><b>FECHA RADICACI&Oacute;N</b></td>';
//                                    table += '<td width="37%" align="center"><b>TRAYECTORIA</b></td>';
//                                    table += '<td width="37%" align="center"><b>Seleccionar</b></td>';
//                                        table += '<th width="15%" align="center"><b>FECHA REGISTRO</th>';
//                                    table += '</tr>';
//                                    table += '</thead>';
//                                    table += '<tbody>';
//                                    cont = 1;
//                                }
                            var carpeta = '';
                            var juzgado = '';
                            var distrito = '';
                            var etapa = '';
                            var delito = '';
                            var fecha = '';
                            var trayectoria = '';

                            if (json.data[i].numero != '' && json.data[i].anio != '' && json.data[i].tipoCarpeta) {
                                carpeta = json.data[i].tipoCarpeta.toUpperCase() + '<br>' + json.data[i].numero + '/&nbsp;' + json.data[i].anio;
                            } else {
                                carpeta = "SIN REFERENCIA";
                            }

                            if (json.data[i].juzgado != '') {
                                juzgado = json.data[i].juzgado.toUpperCase();
                            } else {
                                juzgado = "SIN REFERENCIA";
                            }

                            if (json.data[i].distrito != '') {
                                distrito = json.data[i].distrito.toUpperCase();
                            } else {
                                distrito = "SIN REFERENCIA";
                            }

                            if (json.data[i].etapaProcesal != '') {
                                etapa = json.data[i].etapaProcesal.toUpperCase();
                            } else {
                                etapa = "SIN REFERENCIA";
                            }

                            if (json.data[i].delitos != '') {
                                $.each(json.data[i].delitos, function (index, delitos) {
                                    delito += delitos.desDelito.toUpperCase() + ' <br>';
                                });
                            } else {
                                delito += "SIN REFERENCIA";
                            }

                            if (json.data[i].fechaRegistro != '') {
                                var fecha = json.data[i].fechaRegistro
                                var res = fecha.slice(0, 10);
                                fecha = res.slice(8, 10) + '/' + res.slice(5, 7) + '/' + res.slice(0, 4);
                            }

                            if (json.data[i].totalActuaciones > 0) {
                                $.each(json.data[i].actuaciones, function (index, actuacion) {
                                    var fechaA = actuacion.fechaRegistro.slice(0, 10);
                                    fechaA = fechaA.slice(8, 10) + '/' + res.slice(5, 7) + '/' + res.slice(0, 4);

                                    if (actuacion.sintesis.length <= 20) {
                                        var sintesis = actuacion.sintesis.toUpperCase();
                                    } else {
                                        var sintesis = actuacion.sintesis.slice(0, 20).toUpperCase() + '...';
                                    }

                                    var tipoA = actuacion.tipoActuacion.toUpperCase();
                                    if (actuacion.sentAbsolutoria == 1) {
                                        trayectoria += '<b> ' + fechaA + ' - ' + tipoA + '</b><br>';
                                    } else {
                                        trayectoria += '' + fechaA + ' - ' + tipoA + '<br>';
                                    }
                                });
//                                    trayectoria = '<' + json.resultados[i].trayectorias.fecha + ' - ' + json.resultados[i].trayectorias.tipoActuacion + ' - '+ json.resultados[i].trayectorias.sintesis   
                            } else {
                                trayectoria = 'SIN REFERENCIA';
                            }

                            if (json.data[i].actividad == 2) {//sin Actividad
                                table += '<tr class="danger">';
                                table += '<td align="center"><FONT SIZE=2>' + (i + 1) + '</font></td>';
                                table += '<td align="center"><FONT SIZE=2>' + juzgado + '</font></td>';
//                                    table += '<td align="center"><FONT SIZE=2>' + distrito + '</font></td>';
                                table += '<td align="center"><FONT SIZE=2>' + carpeta + '</font></td>';
//                                    table += '<td align="center"><FONT SIZE=2>' + etapa + '</font></td>';
//                                    table += '<td align="center"><FONT SIZE=2>' + delito + '</font></td>';
                                table += '<td align="center"><FONT SIZE=2>' + fecha + '</font></td>';
                                table += '<td><FONT SIZE=2>' + trayectoria + '</font></td>';
                                table += '<td  ><FONT SIZE=2><input name="acordar" type="checkbox" value="' + json.data[i].idCarpetaJudicial + '" checked></font></td>';
                                table += '</tr>';

//                                    tableI += '<tr class="danger">';
                                tableI += '<tr class="red">';
                                tableI += '<td  align="center"><FONT SIZE=2>' + (i + 1) + '</font></td>';
                                tableI += '<td  align="center"><FONT SIZE=2>' + juzgado + '<font></td>';
//                                    tableI += '<td  align="center"><FONT SIZE=2>' + distrito + '<font></td>';
                                tableI += '<td  align="center"><FONT SIZE=2>' + carpeta + '<font></td>';
//                                    tableI += '<td  align="center"><FONT SIZE=2>' + etapa + '<font></td>';
//                                    tableI += '<td  align="center"><FONT SIZE=2>' + delito + '<font></td>';
                                tableI += '<td align="center"><FONT SIZE=2>' + fecha + '<font></td>';
                                tableI += '<td  ><FONT SIZE=2>' + trayectoria + '</font></td>';
                                tableI += '</tr>';

                                tableE += '<tr>';
                                tableE += '<td align="center" style="background-color: IndianRed;"><FONT SIZE=2>' + (i + 1) + '</font></td>';
                                tableE += '<td align="center" style="background-color: IndianRed;"><FONT SIZE=2>' + juzgado + '<font></td>';
//                                    tableE += '<td align="center" style="background-color: IndianRed;"><FONT SIZE=2>' + distrito + '<font></td>';
                                tableE += '<td align="center" style="background-color: IndianRed;"><FONT SIZE=2>' + carpeta + '<font></td>';
//                                    tableE += '<td align="center" style="background-color: IndianRed;"><FONT SIZE=2>' + etapa + '<font></td>';
//                                    tableE += '<td align="center" style="background-color: IndianRed;"><FONT SIZE=2>' + delito + '<font></td>';
                                tableE += '<td align="center" style="background-color: IndianRed;"><FONT SIZE=2>' + fecha + '<font></td>';
                                tableE += '<td style="background-color: IndianRed;"><FONT SIZE=2>' + trayectoria + '</font></td>'
                                tableE += '</tr>';
                            } else {
                                //removeAttr( 'style' );
                                table += '<tr>';
                                table += '<td align="center"><FONT SIZE=2>' + (i + 1) + '</font></td>';
                                table += '<td align="center"><FONT SIZE=2>' + juzgado + '</font></td>';
//                                    table += '<td align="center"><FONT SIZE=2>' + distrito + '</font></td>';
                                table += '<td align="center"><FONT SIZE=2>' + carpeta + '</font></td>';
//                                    table += '<td align="center"><FONT SIZE=2>' + etapa + '</font></td>';
//                                    table += '<td align="center"><FONT SIZE=2>' + delito + '</font></td>';
                                table += '<td align="center"><FONT SIZE=2>' + fecha + '</font></td>';
                                table += '<td><FONT SIZE=2>' + trayectoria + '</font></td>';
                                table += '<td></td>';
                                table += '</tr>';

//                                    tabla para imprimir
                                tableI += '<tr>';
                                tableI += '<td align="center"><FONT SIZE=2>' + (i + 1) + '</font></td>';
                                tableI += '<td align="center"><FONT SIZE=2>' + juzgado + '<font></td>';
//                                    tableI += '<td align="center"><FONT SIZE=2>' + distrito + '<font></td>';
                                tableI += '<td align="center"><FONT SIZE=2>' + carpeta + '<font></td>';
//                                    tableI += '<td align="center"><FONT SIZE=2>' + etapa + '<font></td>';
//                                    tableI += '<td align="center"><FONT SIZE=2>' + delito + '<font></td>';
                                tableI += '<td align="center"><FONT SIZE=2>' + fecha + '<font></td>';
                                tableI += '<td><FONT SIZE=2>' + trayectoria + '</font></td>';
                                tableI += '</tr>';

                                //tabla para Excel
                                tableE += '<tr>';
                                tableE += '<td align="center"><FONT SIZE=2>' + (i + 1) + '</font></td>';
                                tableE += '<td align="center"><FONT SIZE=2>' + juzgado + '<font></td>';
//                                    tableE += '<td align="center"><FONT SIZE=2>' + distrito + '<font></td>';
                                tableE += '<td align="center"><FONT SIZE=2>' + carpeta + '<font></td>';
//                                    tableE += '<td align="center"><FONT SIZE=2>' + etapa + '<font></td>';
//                                    tableE += '<td align="center"><FONT SIZE=2>' + delito + '<font></td>';
                                tableE += '<td align="center"><FONT SIZE=2>' + fecha + '<font></td>';
                                tableE += '<td><FONT SIZE=2>' + trayectoria + '</font></td>';
                                tableE += '</tr>';
                            }
                            cont++;
                        }
                        tableI += "</tbody></table>";
                        tableE += "</tbody>";
                        table += "</tbody></table></div></center>";
                        $("#divResultados").html(table);
                        $('#divConsulta').show('');
                        $("#divResultados").show();
//                            $("#btnImprimir").show("");
//                            $("#btnExcel").show("");
                        $("#tablaBasica").html(tableI);
                        $("#tablaExcel td").css("border", "solid 1px");
//                            $("#tblExcel").html(tableE);
//                            $("#tablaXls td").css("border", "solid 1px");
                        $("#inputExcel").show('');
                        $("#inputExportarPDFs").show('');
//                            $("#inputImprimir").show('');
                        // funcion para llamar paginacion
                        getPages($("#cmbPaginacion").val(), cantReg);
                        if ($("#txtFechaSinActividad").val() != "") {
                            $("#divAgregarAcuerdo").show();
                        }
                    } else {
                        $("#divPaginador").hide();
                        $("#divTotal").hide();
                        $("#divAgregarAcuerdo").hide();
                        $("#Paginacion").hide();
                        $("#divPrecaucion").html("No Se Encontraron Resultados.");
                        $("#divPrecaucion").show("");
                        setTimeAlert("divPrecaucion");
                        $('#divConsulta').show('');
                        $("#divResultados").html("");
                        $("#divResultados").hide();
                        $("#inputExcel").hide("");
                        $("#inputExportarPDFs").hide("");
//                            $("#inputImprimir").hide("");
                    }
//                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divPrecaucion").html("Error al mostrar la informacion:\n\n" + otroobj);
                    $("#divPrecaucion").show("");
                    setTimeAlert("divPrecaucion");
                }
            });
        } else {
            $("#divPrecaucion").html(' Seleccione un Juzgado');
            $("#divPrecaucion").show("");
            setTimeAlert("divPrecaucion");
            $('#divConsulta').show('');
            $("#divResultados").html("");
            $("#divResultados").hide();
            $("#inputExcel").hide("");
            $("#inputExportarPDFs").hide("");
//            $("#inputImprimir").hide("");
        }
    }

    function consultaGral() {
        var cantReg = $("#cmbNumReg").val();
        if ($('#cmbJuzgado').val() != '0' && $('#cmbJuzgado').val() != '') {
            var tableI = "";
            var tableE = "";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/trayectoriacarpetas/TrayectoriaCarpetaFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    accion: "selectTrazabilidad",
                    cveAdscripcion: $("#cmbJuzgado").val(),
                    fechaInicio: $("#txtFechaInicio").val(),
                    fechaFin: $("#txtFechaFin").val(),
                    fechaSinActividad: $("#txtFechaSinActividad").val(),
                    activo: 'S',
//                    pag: $("#cmbPaginacion").val(),
//                    cantxPag: cantReg,
//                    paginacion:true
                },
                beforeSend: function (objeto) {
                },
                success: function (json) {
                    var juzgado = $("#cmbJuzgado").find('option:selected').text();
                    if (json.status == 'Ok' && json.totalCount > 0) {
                        var cont = 0;
//                            var tableI = "";
                        tableI += '<table class="table table-hover table-striped table-bordered" border="1"><thead>';
                        tableI += '<tr>';
                        tableI += '<th width="3%"  align="center"><b>&nbsp;NO.</b></th>';
                        tableI += '<th width="20%" align="center"><b>ORGANO JURISDICCIONAL</b></th>';
                        tableI += '<th width="12%" align="center"><b>CARPETA JUDICIAL</b></th>';
                        tableI += '<th width="10%" align="center"><b>&nbsp;FECHA RADICACI&Oacute;N&nbsp;</b></th>';
                        tableI += '<th width="40%" align="center"><b>TRAYECTORIA</b></th>';
                        tableI += '</tr>';
                        tableI += '</thead>';
                        tableI += '<tbody id="tablaExcel" border="1">';
                        var tableE = "";
                        tableE += '<tbody id="tablaXls" border="1">';
                        for (var i = 0; i < (parseInt(json.totalCount)); i++) {
                            var carpeta = '';
                            var juzgado = '';
                            var distrito = '';
                            var etapa = '';
                            var delito = '';
                            var fecha = '';
                            var trayectoria = '';

                            if (json.data[i].numero != '' && json.data[i].anio != '' && json.data[i].tipoCarpeta) {
                                carpeta = json.data[i].tipoCarpeta.toUpperCase() + '&nbsp;<br>' + json.data[i].numero + '/&nbsp;' + json.data[i].anio;
                            } else {
                                carpeta = "SIN REFERENCIA";
                            }

                            if (json.data[i].juzgado != '') {
                                juzgado = json.data[i].juzgado.toUpperCase();
                            } else {
                                juzgado = "SIN REFERENCIA";
                            }

                            if (json.data[i].distrito != '') {
                                distrito = json.data[i].distrito.toUpperCase();
                            } else {
                                distrito = "SIN REFERENCIA";
                            }

                            if (json.data[i].etapaProcesal != '') {
                                etapa = json.data[i].etapaProcesal.toUpperCase();
                            } else {
                                etapa = "SIN REFERENCIA";
                            }

                            if (json.data[i].delitos != '') {
                                $.each(json.data[i].delitos, function (index, delitos) {
                                    delito += delitos.desDelito.toUpperCase() + ' <br>';
                                });
                            } else {
                                delito += "SIN REFERENCIA";
                            }

                            if (json.data[i].fechaRegistro != '') {
                                var fecha = json.data[i].fechaRegistro
                                var res = fecha.slice(0, 10);
                                fecha = res.slice(8, 10) + '/' + res.slice(5, 7) + '/' + res.slice(0, 4);
                            }

                            if (json.data[i].totalActuaciones > 0) {
                                $.each(json.data[i].actuaciones, function (index, actuacion) {
                                    var fechaA = actuacion.fechaRegistro.slice(0, 10);
                                    fechaA = fechaA.slice(8, 10) + '/' + res.slice(5, 7) + '/' + res.slice(0, 4);

                                    if (actuacion.sintesis.length <= 20) {
                                        var sintesis = actuacion.sintesis.toUpperCase();
                                    } else {
                                        var sintesis = actuacion.sintesis.slice(0, 20).toUpperCase() + '...';
                                    }

                                    var tipoA = actuacion.tipoActuacion.toUpperCase();
                                    if (actuacion.sentAbsolutoria == 1) {
                                        trayectoria += '<b> ' + fechaA + ' - ' + tipoA + '</b><br>';
                                    } else {
                                        trayectoria += '' + fechaA + ' - ' + tipoA + '<br>';
                                    }
                                });
//                                    trayectoria = '<' + json.resultados[i].trayectorias.fecha + ' - ' + json.resultados[i].trayectorias.tipoActuacion + ' - '+ json.resultados[i].trayectorias.sintesis   
                            } else {
                                trayectoria = 'SIN REFERENCIA';
                            }

                            if (json.data[i].actividad == 2) {//sin Actividad

                                tableI += '<tr class="red">';
                                tableI += '<td> &nbsp;' + (i + 1) + '&nbsp; </td>';
                                tableI += '<td> &nbsp;' + juzgado + '&nbsp; </td>';
                                tableI += '<td> &nbsp;' + carpeta + '&nbsp; </td>';
                                tableI += '<td> &nbsp;' + fecha + '&nbsp; </td>';
                                tableI += '<td> &nbsp;' + trayectoria + '&nbsp; </td>';
                                tableI += '</tr>';

                                tableE += '<tr>';
                                tableE += '<td align="center" style="background-color: IndianRed;"><font size=2>' + (i + 1) + '</font></td>';
                                tableE += '<td align="center" style="background-color: IndianRed;"><font size=2>' + juzgado + '</font></td>';
//                                    tableE += '<td align="center" style="background-color: IndianRed;"><FONT SIZE=2>' + distrito + '<font></td>';
                                tableE += '<td align="center" style="background-color: IndianRed;"><font size=2>' + carpeta + '</font></td>';
//                                    tableE += '<td align="center" style="background-color: IndianRed;"><FONT SIZE=2>' + etapa + '<font></td>';
//                                    tableE += '<td align="center" style="background-color: IndianRed;"><FONT SIZE=2>' + delito + '<font></td>';
                                tableE += '<td align="center" style="background-color: IndianRed;"><font size=2>' + fecha + '</font></td>';
                                tableE += '<td style="background-color: IndianRed;"><font size=2>' + trayectoria + '</font></td>'
                                tableE += '</tr>';
                            } else {
                                tableI += '<tr>';
                                tableI += '<td>&nbsp;' + (i + 1) + '&nbsp;</td>';
                                tableI += '<td>&nbsp;' + juzgado + '&nbsp;</td>';
                                tableI += '<td>&nbsp;' + carpeta + '&nbsp;</td>';
                                tableI += '<td>&nbsp;' + fecha + '&nbsp;</td>';
                                tableI += '<td>&nbsp;' + trayectoria + '&nbsp;</td>';
                                tableI += '</tr>';

                                //tabla para Excel
                                tableE += '<tr>';
                                tableE += '<td align="center"><font size=2>' + (i + 1) + '</font></td>';
                                tableE += '<td align="center"><font size=2>' + juzgado + '</font></td>';
//                                    tableE += '<td align="center"><FONT SIZE=2>' + distrito + '<font></td>';
                                tableE += '<td align="center"><font size=2>' + carpeta + '</font></td>';
//                                    tableE += '<td align="center"><FONT SIZE=2>' + etapa + '<font></td>';
//                                    tableE += '<td align="center"><FONT SIZE=2>' + delito + '<font></td>';
                                tableE += '<td align="center"><font size=2>' + fecha + '</font></td>';
                                tableE += '<td><font size=2>' + trayectoria + '</font></td>';
                                tableE += '</tr>';
                            }
                        }
                        tableI += "</tbody></table>";
                        tableE += "</tbody>";
                    } else {
                        tableI = "";
                    }
                    $("#tblExcel").html(tableE);
                    $("#tablaXls td").css("border", "solid 1px");
                },
                error: function (objeto, quepaso, otroobj) {
                    tableI = "";
                }
            });
        } else {
            $("#divPrecaucion").html(' Seleccione un Juzgado');
            $("#divPrecaucion").show("");
            setTimeAlert("divPrecaucion");
            $('#divConsulta').show('');
            $("#divResultados").html("");
            $("#divResultados").hide();
            $("#inputExcel").hide("");
            $("#inputExportarPDFs").hide("");

        }
        return tableI;
    }

    function generarAcuerdos() {
//        alert('acuerdos');
        $("#inputAcuerdo").prop("disabled", true);
        var carpetasSelected = new Array();
        $("input:checkbox[name=acordar]:checked").each(function () {
            carpetasSelected.push($(this).val());

        });

        if (carpetasSelected.length > 0) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/trayectoriacarpetas/TrayectoriaCarpetaFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    accion: "generarAcuerdo",
                    activo: 'S',
                    acordar: JSON.stringify(carpetasSelected)
                },
                beforeSend: function (objeto) {

                },
                success: function (json) {
                    if (json.Estatus == 'ok') {
                        $("#divCorrecto").html(json.mnj);
                        $("#divCorrecto").show("");
                        setTimeAlert("divCorrecto");
                        consultar();
                        $("#inputAcuerdo").prop("disabled", false);
                    } else {
                        $("#divPrecaucion").html(json.mnj);
                        $("#divPrecaucion").show("");
                        setTimeAlert("divPrecaucion");
                        $("#inputAcuerdo").prop("disabled", false);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#inputAcuerdo").prop("disabled", false);
                    $("#divPrecaucion").html("Error al mostrar la informacion:\n\n" + otroobj);
                    $("#divPrecaucion").show("");
                    setTimeAlert("divPrecaucion");
                }
            });
        } else {

            alert("Debes seleccionar al menos una carpeta");
            $("#inputAcuerdo").prop("disabled", false);
        }
    }

    function Imprimir() {
        var tablaI = "";
        tablaI = $("#tablaBasica").html();
        var juzgado = $("#cmbJuzgado").find('option:selected').text().toUpperCase();
        var table3 = '';
        table3 += "<meta charset='utf-8'/>";
        table3 += "<style>";
        table3 += "@media print{";
        table3 += "#header, #footer {display:none;}";
        table3 += ".frmBoton { BACKGROUND-COLOR:#BB9309; COLOR: #FFFFFF; BORDER: 1px solid #33685F; FONT-SIZE: 11px; FONT-WEIGHT: bold; FONT-FAMILY: Arial,Helvetica, sans-serif; LETTER-SPACING: 1px; WORD-SPACING: normal; cursor:pointer; display:none;}";
        table3 += ".Arial12 {color: #000000; font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-weight: normal; line-height: normal; text-decoration: none; style='text-align : justify;'}";
        table3 += ".Arial11 {color: #000000; font-size: 11px; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-weight: normal; line-height: normal; text-decoration: none; style='text-align : justify;'}";
        table3 += ".Arial8 {color: #000000; font-size: 8px; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-weight: normal; line-height: normal; style='text-align : justify;'}";
        table3 += "@page {margin: 1cm; }";
        table3 += "@page:first {margin-top: 2.5cm; margin-bottom: 2.5cm; }";
        table3 += "@page:right {margin-left: 2cm; }";
        table3 += "@page:left {margin-right: 2cm; }";
//        table3 += " tbody td .red{ background-color: #1a4567 !important; -webkit-print-color-adjust: exact;  } ";
        table3 += "}";
        table3 += "tbody td {";
        table3 += "border: 1px solid #000;";
        table3 += "border-collapse:collapse;";

        table3 += " ";
        table3 += "}";
        table3 += "#cabecera th{";
        table3 += "text-align:center;";
        table3 += "border: 1px solid #000 !important;";
        table3 += "border-collapse:collapse;";
        table3 += "}";
        table3 += ".red{ color: Red} ";

        table3 += ".esc{ align:right;} ";
        table3 += " table tr { font-family: Arial; }";
        table3 += "</style>";
        table3 += "<div align=center;>";

        table3 += ' <center><table width=90%; style="border-collapse:collapse;" class="Arial12">';
        table3 += ' <thead style="table-header-group"><tr>';
        table3 += ' <th> </th>';
        table3 += ' <th> </th>';
        table3 += ' <th colspan=6 class="esc"><img src="img/logoPj.png" style="width:300px"></td> </tr>';
        table3 += ' <tr> <th></th>';
        table3 += ' <th></th>';
        table3 += '<th colspan=6><br><label style="font-family: Arial; font-weight:501 !important; font-size:20px; ">' + juzgado + '</label><br><br></td></tr>';

        table3 += '<tr id="cabecera">';
        table3 += '<th width="3%" align="center">NO.</th>';
        table3 += '<th width="12%" align="center">ORGANO JURISDICCIONAL</th>';
        table3 += '<th width="8%" align="center">DISTRITO JUDICIAL</th>';
        table3 += '<th width="8%" align="center">CARPETA JUDICIAL</th>';
        table3 += '<th width="10%" align="center">ESTADO PROCESAL</th>';
        table3 += '<th width="15%" align="center">DELITO</th>';
        table3 += '<th width="7%" align="center">FECHA RADICACI&Oacute;N</th>';
        table3 += '<th width="37%" align="center">TRAYECTORIA</th>';
        table3 += '</tr>';
        table3 += '</thead>';
        table3 += tablaI;
        w = window.open();
        w.document.write(table3);
//        w.document.write('divResultados');
        w.document.close();
        w.print();
        $("#espImp").hide();
    }
    /**
     * FunciOn para obtener las paginas de la tabla de resultados
     */
    function getPages(page, cantReg) {
        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=getPaginasTrayectorias";
        strDatos += "&paginacion=false";
        strDatos += "&cantxPag=" + cantReg;
        strDatos += "&pag=" + $("#cmbPaginacion").val();
        strDatos += "&fechaInicio=" + $("#txtFechaInicio").val();
        strDatos += "&fechaFin=" + $("#txtFechaFin").val();
        strDatos += "&cveAdscripcion=" + $("#cmbJuzgado").val();
        strDatos += "&fechaSinActividad=" + $("#txtFechaSinActividad").val();
        strDatos += "&activo=S";
        $.ajax({
            async: false,
            type: 'POST',
            url: "../fachadas/sigejupe/trayectoriacarpetas/TrayectoriaCarpetaFacade.Class.php",
            data: strDatos,
        }).done(function (response) {
            var json = "";
            json = eval("(" + response + ")");
            if (json.totalCount > 0) {
                $('#cmbPaginacion').find('option').remove().end();

                for (var i = 0; i < (parseInt(json.total)); i++) {
                    $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                }
                $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                page = (page == null) ? 1 : page;
                $("#cmbPaginacion").val(page);
            } else {
                showMessage('SIN RESULTADOS', 'information');
            }
        });
        return;
    }

    function resetPagina() {
        $("#cmbPaginacion").val(1);
    }

    exportar = function (accion, div) {

        var contenido = consultaGral();
        $("#tablaBasica").html(contenido);
        var usuario = '<?php echo $_SESSION["nombre"]; ?>';
        var columnas = [];
        $.each($("#tablaBasica tr"), function () {
            $.each($(this).find('th'), function () {
                columnas.push("1");

            });
        });
        $.each($("#tablaBasica td"), function () {
            $(this).attr("id", "lng");
        });
        $.each($("#tablaBasica th"), function () {
            $(this).attr("id", "lng");

        });
        var numPixeles = 0;
        if (columnas.length < 12) {
            numPixeles = (900 / columnas.length);
        } else {
            $.each($("#tablaBasica td"), function () {

                if ($(this).html().length > 30) {
                    $(this).attr("id", "os");
                } else {
                    $(this).removeAttr("id");
                }
            });
            numPixeles = (800 / columnas.length);
        }
//        console.log(contenido);
        var contenido = $("#" + div).html();
//        contenido = contenido.replace('width="100%"', '');
        var nombreArchivo = "TRAZABILIDAD";
        var tituloReporte = "Trazabilidad";
//        contenido = contenido.replace(/width="(.*?)"/g, '  ');
//        contenido = contenido.replace(/Buscar:/g, '');
//        contenido = contenido.replace(/style="width: 180px; text-align: center;" /g, '');
//        contenido = contenido.replace(/style="width:180px; text-align:center;"/g, '');
//        contenido = contenido.replace(/<font size="2">/g, '');
//        contenido = contenido.replace(/<font>/g, '');
//        contenido = contenido.replace(/style="border: 1px solid;"/g, '');
//        contenido = contenido.replace(/<\/font>/g, '');
//        contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px; font-size:11px; text-align:center;"');
        contenido = contenido.replace(/id="lng"/g, 'style="font-size:11px;"');
//        contenido = contenido.replace(/id="del"/g, 'style="width:100px; text-align:center;"');
//        contenido = contenido.replace(/id="os"/g, 'style="width:100px;text-align:center;"');
//        contenido = contenido.replace(/<center>/g, '');
//        contenido = contenido.replace(/<\/center>/g, '');
//        contenido = contenido.replace(/<input (.*?) type="search">/g, '');
//        contenido = contenido.replace(/<br id="bo" (.*?) br>/g, '');
//        contenido = contenido.replace(/onclick="(.*?)"/g, '');
//        fechaBaseDatos({datosImpresion: "fecha-hora"});
//
        if ($("#hiddenNivel").val() == 5) {
            $("#labelSubTotal").text("");
        }

        $("#contenidoIframe").val(contenido);
        $("#accionIframe").val(accion);
        $("#infoIframe").val(usuario + "&@" + tituloReporte + "&@" + nombreArchivo + "&@" + $("#totalReg").text() + "&@" + "" + "&@" + $("#hiddenFechaHoraHoy").val());
        $("#divCorrecto").html("Generando Archivo");
        $("#divCorrecto").show("slide");
        setTimeAlert("divCorrecto");
        $("#formIframe").submit();

    }
    generarExcel = function (e) {
        consultaGral();
//        $("#Xls").html("");
        var tablaE = "";
        tablaE = $("#tblExcel").html();
        var juzgado = $("#cmbJuzgado").find('option:selected').text();
//        var juzgado = $("#hiddenAdscripcion").val().toUpperCase();
        var table3 = '';
        table3 += ' <table style="border-collapse:collapse;" class="Arial11">';
        table3 += ' <thead style="table-header-group"><tr>';
        table3 += ' <th> </th>';
        table3 += ' <th> </th>';
        table3 += ' <th> </th>';
        table3 += ' <th class="esc"><img src="http://sigejupe2.pjedomex.gob.mx/sigejupe/vistas/img/logoPj.png" style="width:80px"></td>';
        table3 += ' <th class="tit" colspan="3"><h3><br><br><br><br>' + juzgado + '<br><br>TRAZABILIDAD</h3> </td> ';
        table3 += ' <th> </th>';

        table3 += '<tr id="cabeceraB">';
        table3 += '<th width="3%" align="center">NO.</th>';
        table3 += '<th width="12%" align="center">ORGANO JURISDICCIONAL</th>';
//        table3 += '<th width="8%" align="center">DISTRITO JUDICIAL</th>';
        table3 += '<th width="8%" align="center">CARPETA JUDICIAL</th>';
//        table3 += '<th width="10%" align="center">ESTADO PROCESAL</th>';
//        table3 += '<th width="15%" align="center">DELITO</th>';
        table3 += '<th width="7%" align="center">FECHA RADICACI&Oacute;N</th>';
        table3 += '<th width="37%" align="center">TRAYECTORIA</th>';
        table3 += '</tr>';
        table3 += '</thead>';
//        $("#tablaBasica").html("");
        $("#Xls").html(table3 + tablaE);

        $("#cabeceraB th").css("border", "solid 1px");
        $("#cabeceraB th").css("text-align", "center");
        //current time for file name
        var dt = new Date();
        var day = dt.getDate();
        var month = dt.getMonth() + 1;
        var year = dt.getFullYear();
        var hour = dt.getHours();
        var mins = dt.getMinutes();
        var postfix = day + "." + month + "." + year + "_" + hour + "." + mins;
        var a = document.createElement('a');
        var data_type = 'data:application/vnd.ms-excel; charset=UTF-8,%EF%BB%BF';
        //    var data_type = 'data:application/vnd.ms-excel';
        var table_div = document.getElementById('Xls');
//        var table_div = $('#tablaBasica').html();
        console.log(table_div);
        var table_html = table_div.outerHTML.replace(/ /g, '%20');
        console.log(table_html);

        a.href = data_type + ' ' + table_html;
        a.download = 'Trayectoria' + postfix + '.xls';
        var click_ev = document.createEvent("MouseEvents");
        click_ev.initEvent("click", true, true);
        a.dispatchEvent(click_ev);
    };


    $(function () {
        cargarJuzgados();
        $("#txtFechaSinActividad").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY",
            ignoreReadonly: true,
            maxDate: 'now'
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
            $('#txtFechaSinActividad').data("DateTimePicker").minDate(e.date);
            $('#txtFechaSinActividad').val("");
//            $('#txtFechaSinActividad').val($("#txtFechaInicio").val());
        });
        $("#txtFechaFin").on("dp.change", function (e) {
            $('#txtFechaInicio').data("DateTimePicker").maxDate(e.date);
            $('#txtFechaSinActividad').data("DateTimePicker").maxDate(e.date);
            $('#txtFechaSinActividad').val("");
            //$('#txtFechaSinActividad').val($("#txtFechaInicio").val());

            var fecha_auxI = $("#txtFechaInicio").val().split("/");
            var fI = new Date(parseInt(fecha_auxI[2]), parseInt(fecha_auxI[1] - 1), parseInt(fecha_auxI[0]));

            var fecha_auxF = $("#txtFechaFin").val().split("/");
            var fF = new Date(parseInt(fecha_auxF[2]), parseInt(fecha_auxF[1] - 1), parseInt(fecha_auxF[0]));

            if (fI > fF) {
                $("#txtFechaInicio").val($("#txtFechaFin").val());
            }
        });

        fechaBaseDatos({
            txtFechaInicio: "fecha",
            txtFechaFin: "fecha",
            hiddenFechaHoraHoy: "fecha-hora"
//            txtFechaSinActividad: "fecha"
        });
    });


    //trazabilidad

//paginacion
//poder judicial en logo
//
//
//
//copia 
// fecha de ultima actuacion
//ultima actuacion
// fecha y ..sindescripcion sin <>
// fuera del rango rojo Sin a Final
// para los de rojo check acuerdo generar acuerdo
//paginacion
//no imprimir si generar PDF
//causas radicadas activas no terminadas!!
//ver select Dao

</script>





