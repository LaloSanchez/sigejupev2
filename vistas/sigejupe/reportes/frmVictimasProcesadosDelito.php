<?php
if (!isset($_SESSION)) {
    session_start();
}

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
</style>

<input type="hidden" id="hddCveAdscripcion" value="<?php echo $_SESSION['cveAdscripcion']; ?>" >
<input type="hidden" id="hiddenNombre" value="<?php echo $_SESSION['nombre']; ?>" >
<input type="hidden" id="hiddenAdscripcion" value="<?php echo $_SESSION['desAdscripcion']; ?>" >
<input type="hidden" id="hddCveUsuario" value="<?php echo $_SESSION["cveUsuarioSistema"]; ?>" >
<input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >
<input type="hidden" id="hiddenFechaHoraHoy" value="">
<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title" id="h5titulo">                                                            
            Reporte de Procesados y V&iacute;ctimas por Delito
        </h5>
    </div>
    <div  id="panelPrincipal" class="panel-body">
        <div id="divFormulario" class="form-horizontal">
            <div id="divPanelControl">
                <div id="fechas" class="form-group" >  
                    <label class="control-label col-md-4 needed" id="lblfI">Fecha Inicial</label>
                    <div id="divSinRelacion" class="col-sm-2" >
                        <input type="text" id="txtFechaInicio" class="form-control datepicker" readonly>
                    </div>
                    <label class="control-label col-md-2 needed" id="lblFF">Fecha Final</label>
                    <div id="txtFechFin" class=" col-sm-2" >
                        <input type="text" id="txtFechaFin" placeholder="DD/MM/AAAA" class="form-control datepicker" readonly>
                    </div> 
                </div>
                <div class="form-group"> 
                    <label class="control-label col-md-4">Region</label>
                    <div class="col-md-5">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control Relacionado" name="cmbRegion" id="cmbRegion" onchange="filtrarDistritos();
                                    filtrarJuzgados('region');">
                            <option value="">SELECCIONE UNA OPCI&Oacute;N</option>
                        </select>
                    </div>                                
                </div>
                 <div class="form-group"> 
                    <label class="control-label col-md-4">Distrito</label>
                    <div class="col-md-5">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control Relacionado" name="cmbDistrito" id="cmbDistrito" onchange="filtrarJuzgados('distrito');">
                            <option value="">SELECCIONE UNA OPCI&Oacute;N</option>
                        </select>
                    </div>                                
                </div>
                 <div class="form-group"> 
                    <label class="control-label col-md-4">Juzgado</label>
                    <div class="col-md-5">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control Relacionado" name="cmbJuzgado" id="cmbJuzgado">
                            <option value="">SELECCIONE UNA OPCI&Oacute;N</option>
                        </select>
                    </div>                                
                </div>
            </div>
            <br>
            <div class="form-group ">
                <div class="col-md-offset-5  row-centered">
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="consultar()">                                    
                    </div>
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar();">                                    
                    </div>
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" onclick="Imprimir();" style="display: none">                                                        
                    </div>
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputExcel" value="Generar Excel" onclick="generarExcel();" style="display: none">                                                        
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
                </div>
            </div>  
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

            <div id="divConsulta" style="display: none" align="center" class="col-xs-12">
                <div id="divResultados" class="col-xs-12">
                </div>
            </div>
            <div id="Xls" style="display: none"></div>
            <div id="tblExcel" style="display: none"></div>
            <div id="tablaBasica" style="display: none"></div>
        </div>
    </div>
</div>
<script type="text/javascript">
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
                            $("#cmbJuzgado").append($('<option id="cmbJuzgado' + json.data[i].cveJuzgado + '" distrito = "' + json.data[i].cveDistrito + '" region = "' + json.data[i].cveRegion + '"></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
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
    
    
    function cargarJuzgados() {
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
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
                    var option = ' ';
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
        $("#cmbJuzgado").val('');
        $("#cmbDistrito").val('');
        $("#cmbRegion").val('');
        $("#divResultados").html('');
        $('#divConsulta').hide('');

        $("#divAlertDager").html("");
        $("#divAlertDager").hide();
        $("#divAlertSucces").hide();
        $("#divAlertSucces").html("");
//        $("#txtFechaSinActividad").val('');
        $("#txtFechaInicio").val($("#hiddenFechaActual").val());
        $("#txtFechaFin").val($("#hiddenFechaActual").val());
        $('#inputImprimir').hide('');
        $('#inputExcel').hide('');

        $('#txtFechaInicio').data("DateTimePicker").maxDate('now');
        $('#txtFechaFin').data("DateTimePicker").minDate(false);
        fechaBaseDatos({
            txtFechaInicio: "fecha",
            txtFechaFin: "fecha"
        });
    }
    
    function consultar() {
//        if ($('#cmbJuzgado').val() != '0' && $('#cmbJuzgado').val() != '') {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/victimasprocesados/VictimasyProcesadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    accion: "ReportePorDelito",
                    region: $("#cmbRegion").val(),
                    distrito: $("#cmbDistrito").val(),
                    cveAdscripcion: $("#cmbJuzgado").val(),
                    fechaInicio: $("#txtFechaInicio").val(),
                    fechaFin: $("#txtFechaFin").val(),
                    fechaSinActividad: $("#txtFechaSinActividad").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    $('#divResultados').html("<center><img src= 'img/carga.gif' /></center>");
                    $('#divConsulta').show();
                    $('#divResultados').show();
                },
                success: function (json) {
                var juzgado = '';
                    if($("#cmbJuzgado").find('option:selected').val()!=0){
                        juzgado = $("#cmbJuzgado").find('option:selected').text();
                    }else{
                        if($("#cmbDistrito").find('option:selected').val()!=0){
                            juzgado = 'DISTRITO '+ $("#cmbDistrito").find('option:selected').text();
                        }else{
                            if($("#cmbRegion").find('option:selected').val()!=0){
                                 juzgado = 'REGION '+ $("#cmbRegion").find('option:selected').text();
                            }
                        }
                    }
                    if (json.status == 'Ok' && json.totalCount > 0) {
                            var table = "";
                            var table0 = "";
                            table0 += "<center><table style='border-collapse:collapse;' id='tblTitulo' class='list-unstyled'>";
                            table0 += "<tr><td ALIGN='center' whidth=10%> <img src='img/logoPjAcuses.jpg' width=310px></td>";
                                table0 += "</tr>";
                            table0 += '<tr><td colspan=4 align="center"><br><label style="font-family: Arial; font-weight:501 !important; font-size:20px; ">' + juzgado + '</label><br></td></tr></table>';
                            table += table0;
                            table += "<table width='95%' border:1px;' class='table table-hover table-striped table-bordered' border=1 id='tblReporte'>";
                            table += '<thead>';
                            table += '<tr>';
                            table += '<td rowspan=2 width="3%" align="center" style="vertical-align: middle;"><b>NO</b></td>';
                            table += '<td rowspan=2 width="12%" align="center" style="vertical-align: middle;"><b>ORGANO JURISDICCIONAL</b></td>';
                            table += '<td rowspan=2 width="10%" align="center" style="vertical-align: middle;"><b>DISTRITO JUDICIAL</b></td>';
                            table += '<td rowspan=2 width="15%" align="center" style="vertical-align: middle;"><b>CARPETA JUDICIAL</b></td>';
                            table += '<td rowspan=2 width="8%" align="center" style="vertical-align: middle;"><b>FECHA RADICACI&Oacute;N</b></td>';
                            table += '<td rowspan=2 width="23%" align="center" style="vertical-align: middle;"><b>DELITOS</b></td>';
                            table += '<td colspan=3 align="center"><b>NO. PROCESADOS</b></td>';
                            table += '<td colspan=3 align="center"><b>NO. V&Iacute;CTIMAS</b></td>';
                            
                            table += '</tr>';
                            
                            table += '<tr>';
                            table += '<td width="6%" align="center"><b>MASC</b></td>';
                            table += '<td width="6%" align="center"><b>FEM</b></td>';
                            table += '<td width="6%" align="center"><b>INDEF</b></td>';
                            table += '<td width="6%" align="center"><b>MASC</b></td>';
                            table += '<td width="6%" align="center"><b>FEM</b></td>';
                            table += '<td width="6%" align="center"><b>INDEF</b></td>';
                            table += '</tr>';
                            table += '</thead>';
                            table += "<tbody>";
//
                            var cont = 0;
                            var tableI = "";
                            tableI += '<tbody id="tablaExcel" border="1">';
                            for (var i = 0; i < (parseInt(json.totalCount)); i++) {
                                var carpeta = '';
                                var juzgado = '';
                                var distrito = '';
                                var delitos = '';
                                var IH = '';
                                var IM = '';
                                var II = '';
                                
                                var OH = '';
                                var OM = '';
                                var OI = '';

                                if (json.data[i].numero != '' && json.data[i].anio != '' && json.data[i].tipoCarpeta) {
                                    carpeta = json.data[i].tipoCarpeta.toUpperCase() +'<br>' + json.data[i].numero + '/&nbsp;' + json.data[i].anio;
                                } else {
                                    carpeta = "SIN REFERENCIA";
                                }
                                
                                if (json.data[i].juzgado != '' ) {
                                    juzgado = json.data[i].juzgado.toUpperCase();
                                } else {
                                    juzgado = "SIN REFERENCIA";
                                }
                                
                                if (json.data[i].distrito != '' ) {
                                    distrito = json.data[i].distrito.toUpperCase();
                                } else {
                                    distrito = "SIN REFERENCIA";
                                }
                                
                                if (json.data[i].fechaRegistro != '') {
                                    var fecha = json.data[i].fechaRegistro
                                    var res = fecha.slice(0, 10);
                                    fecha = res.slice(8, 10) + '/' + res.slice(5, 7) + '/' + res.slice(0, 4);
                                }
                                
                                var totDelitos = 0
                                if(json.data[i].totalDelitos > 0 ){
                                var totDelitos = json.data[i].totalDelitos;
                                table += '<tr>';
                                table += '<td rowspan='+totDelitos+' align="center"><FONT SIZE=2>' + (i + 1) + '</font></td>';
                                table += '<td rowspan='+totDelitos+' align="center"><FONT SIZE=2>' + juzgado + '</font></td>';
                                table += '<td rowspan='+totDelitos+' align="center"><FONT SIZE=2>' + distrito + '</font></td>';
                                table += '<td rowspan='+totDelitos+' align="center"><FONT SIZE=2>' + carpeta + '</font></td>';
                                table += '<td rowspan='+totDelitos+' align="center"><FONT SIZE=2>' + fecha + '</font></td>';
                                
                                tableI += '<tr>';
                                tableI += '<td rowspan='+totDelitos+' align="center"><FONT SIZE=2>' + (i + 1) + '</font></td>';
                                tableI += '<td rowspan='+totDelitos+' align="center"><FONT SIZE=2>' + juzgado + '</font></td>';
                                tableI += '<td rowspan='+totDelitos+' align="center"><FONT SIZE=2>' + distrito + '</font></td>';
                                tableI += '<td rowspan='+totDelitos+' align="center"><FONT SIZE=2>' + carpeta + '</font></td>';
                                tableI += '<td rowspan='+totDelitos+' align="center"><FONT SIZE=2>' + fecha + '</font></td>';
                                for (var j = 0; j < (parseInt(json.data[i].totalDelitos)); j++) {
                                    delitos = json.data[i].delitos[j].desDelito;
                                    
                                    IH = json.data[i].delitos[j].imputadosHombres;
                                    IM = json.data[i].delitos[j].imputadosMujeres;
                                    II = json.data[i].delitos[j].imputadosIndefinidos;

                                    OH = json.data[i].delitos[j].ofendidosHombres;
                                    OM = json.data[i].delitos[j].ofendidosMujeres;
                                    OI = json.data[i].delitos[j].ofendidosIndefinidos;
                            
                                    table += '<td align="center"><FONT SIZE=2>' + delitos + '</font></td>';
                                    table += '<td align="center"><FONT SIZE=2>' + IH + '</font></td>';
                                    table += '<td align="center"><FONT SIZE=2>' + IM + '</font></td>';
                                    table += '<td align="center"><FONT SIZE=2>' + II + '</font></td>';
                                    table += '<td align="center"><FONT SIZE=2>' + OH + '</font></td>';
                                    table += '<td align="center"><FONT SIZE=2>' + OM + '</font></td>';
                                    table += '<td align="center"><FONT SIZE=2>' + OI + '</font></td>';
                                    table += '</tr>';
                                    
                                    tableI += '<td align="center"><FONT SIZE=2>' + delitos + '</font></td>';
                                    tableI += '<td align="center"><FONT SIZE=2>' + IH + '</font></td>';
                                    tableI += '<td align="center"><FONT SIZE=2>' + IM + '</font></td>';
                                    tableI += '<td align="center"><FONT SIZE=2>' + II + '</font></td>';
                                    tableI += '<td align="center"><FONT SIZE=2>' + OH + '</font></td>';
                                    tableI += '<td align="center"><FONT SIZE=2>' + OM + '</font></td>';
                                    tableI += '<td align="center"><FONT SIZE=2>' + OI + '</font></td>';
                                    tableI += '</tr>';
                                }
                                }
                            }
                            tableI += "</tbody>";
                            table += "</tbody></table></center>";
                            $("#divResultados").html(table);
                            $('#divConsulta').show('');
                            $("#divResultados").show();
//                            $("#tblReporte").DataTable({
//                                paging:false 
//                            });

                            $("#tablaBasica").html(tableI);
//                            $("#tablabasica td").css("border", "solid 1px");
                            $("#tablaExcel td").css("border", "solid 1px");
                            $("#inputExcel").show('');
                            $("#inputImprimir").show('');
                        } else {
                            $("#divPrecaucion").html("No Se Encontraron Resultados.");
                            $("#divPrecaucion").show("");
                            setTimeAlert("divPrecaucion");
                            $('#divConsulta').show('');
                            $("#divResultados").html("");
                            $("#divResultados").hide();
                            $("#inputExcel").hide("");
                            $("#inputImprimir").hide("");
                        }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divPrecaucion").html("Error al mostrar la informacion:\n\n" + otroobj);
                    $("#divPrecaucion").show("");
                    setTimeAlert("divPrecaucion");
                }
            });
//        } else {
//            $("#divPrecaucion").html(' Seleccione un Juzgado');
//            $("#divPrecaucion").show("");
//            setTimeAlert("divPrecaucion");
//            $('#divConsulta').show('');
//            $("#divResultados").html("");
//            $("#divResultados").hide();
//            $("#inputExcel").hide("");
//            $("#inputImprimir").hide("");
//        }
    }
    
    function Imprimir() {
        var tablaI = $("#tablaBasica").html();
        fechaBaseDatos({hiddenFechaHoraHoy: "fecha-hora"});
        var juzgado = '';
        if($("#cmbJuzgado").find('option:selected').val()!=0){
            juzgado = $("#cmbJuzgado").find('option:selected').text();
        }else{
            if($("#cmbDistrito").find('option:selected').val()!=0){
                juzgado = 'DISTRITO '+ $("#cmbDistrito").find('option:selected').text();
            }else{
                if($("#cmbRegion").find('option:selected').val()!=0){
                     juzgado = 'REGION '+ $("#cmbRegion").find('option:selected').text();
                }
            }
        }
                      
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
        table3 += "}";
        table3 += "tbody td {";
        table3 += "border: 1px solid #000;";
        table3 += "border-collapse:collapse;";
        table3 += "text-align:center";
        table3 += " ";
        table3 += "}";
        table3 += ".cabecera th {";
        table3 += "border: 1px solid #000;";
        table3 += "border-collapse:collapse;";
        table3 += "vertical-align: middle;";
        table3 += "}";

        table3 += ".esc{ width:5%; align:right;} ";
        table3 += " table tr { font-family: Arial; }";
        table3 += "</style>";
        table3 += '<div style="font-family: Arial; font-size: 13;" align=center;>';
        table3 += ' <center><table width=90%; style="border-collapse:collapse;" class="Arial12">';
        table3 += ' <thead style="table-header-group"><tr>';
        table3 += ' <th> </th>';
        table3 += ' <th> </th>';
        table3 += ' <th> </th>';
        table3 += ' <th colspan=3 class="esc"><img src="img/logoPjAcuses.jpg" style="width:310px"></td></tr>';
        table3 += ' <tr><th class="tit" colspan="12"><h3>' + juzgado + '<br></h3></td><tr> ';

        table3 += '<tr class="cabecera">';
        table3 += '<th rowspan=2 width="2%" align="center" ><b>NO.</b></td>';
        table3 += '<th rowspan=2 width="15%" align="center"><b>ORGANO JURISDICCIONAL</b></td>';
        table3 += '<th rowspan=2 width="10%" align="center"><b>DISTRITO JUDICIAL</b></td>';
        table3 += '<th rowspan=2 width="15%" align="center"><b>CARPETA JUDICIAL</b></td>';
        table3 += '<th rowspan=2 width="10%" align="center"><b>FECHA RADICACI&Oacute;N</b></td>';
        table3 += '<th rowspan=2 width="23%" align="center"><b>DELITOS</b></td>';
        table3 += '<th colspan=3 align="center"><b>NO. PROCESADOS</b></td>';
        table3 += '<th colspan=3 align="center"><b>NO. V&Iacute;CTIMAS</b></td>';
        
        table3 += '</tr>';
        
        table3 += '<tr class="cabecera">';
        table3 += '<th width="5%" align="center"><b>MASC</b></td>';
        table3 += '<th width="5%" align="center"><b>FEM</b></td>';
        table3 += '<th width="5%" align="center"><b>INDEF</b></td>';
        table3 += '<th width="5%" align="center"><b>MASC</b></td>';
        table3 += '<th width="5%" align="center"><b>FEM</b></td>';
        table3 += '<th width="5%" align="center"><b>INDEF</b></td>';
        table3 += '</tr>';
        table3 += '</thead>';
        table3 += tablaI + '</table></center>';
        table3 += "<br><br>Generado por:  " + $("#hiddenNombre").val();
        table3 += "<br><br>Fecha y hora de consulta:  " + $("#hiddenFechaHoraHoy").val();
        w = window.open();
        w.document.write(table3);
        w.document.close();
        w.print();
    }
    generarExcel = function (e) {
        var juzgado = '';
        if($("#cmbJuzgado").find('option:selected').val()!=0){
            juzgado = $("#cmbJuzgado").find('option:selected').text();
        }else{
            if($("#cmbDistrito").find('option:selected').val()!=0){
                juzgado = 'DISTRITO '+ $("#cmbDistrito").find('option:selected').text();
            }else{
                if($("#cmbRegion").find('option:selected').val()!=0){
                     juzgado = 'REGION '+ $("#cmbRegion").find('option:selected').text();
                }
            }
        }
        var table3 = '';
        table3 += "<table style='border-collapse:collapse;' id='tblTitulo' class='list-unstyled' width='1100'><tr>";
        table3 += "<td  colspan=4 width=30%>&nbsp;</td><td align='center' rowspan=4>";
        table3 += "<img src='http://sigejupe2.pjedomex.gob.mx/sigejupe/vistas/img/logoPj.png' width=300px><br><br><br><br><h3><b>REPORTE DE CAUSAS RADICADAS</b></h3></td><td align='center' colspan=4 width=30%>&nbsp;</td></tr>";
        table3 += '</table>';
        
        
        table3 += ' <table style="border-collapse:collapse; font-family: Arial;">';
        table3 += ' <thead style="table-header-group">';
//        table3 += ' <tr><th> </th>';
//        table3 += ' <th> </th>';
//        table3 += ' <th class="esc"><img src="http://electronico.pjedomex.gob.mx/electronico/vistas/img/EscudoEstadoMexico2.png" style="width:80px"></td>';
//        table3 += ' <th id="tit" colspan="2"><label>GOBIERNO DEL ESTADO DE M&Eacute;XICO<br>PODER JUDICIAL<br>'+juzgado+'<br></label> </td> ';
//        table3 += ' <th> </th>';

        table3 += '<tr id="cabeceraB">';
        table3 += '<th rowspan=2 width="3%" align="center" style="vertical-align: middle;"><b>NO.</b></td>';
        table3 += '<th rowspan=2 width="15%" align="center" style="vertical-align: middle;"><b>ORGANO JURISDICCIONAL</b></td>';
        table3 += '<th rowspan=2 width="10%" align="center" style="vertical-align: middle;"><b>DISTRITO JUDICIAL</b></td>';
        table3 += '<th rowspan=2 width="15%" align="center" style="vertical-align: middle;"><b>CARPETA JUDICIAL</b></td>';
        table3 += '<th rowspan=2 width="10%" align="center" style="vertical-align: middle;"><b>FECHA RADICACI&Oacute;N</b></td>';
        table3 += '<th rowspan=2 width="15%" align="center" style="vertical-align: middle;"><b>DELITOS</b></td>';
        table3 += '<th colspan=3 align="center"><b>NO. PROCESADOS</b></td>';
        table3 += '<th colspan=3 align="center"><b>NO. V&Iacute;CTIMAS</b></td>';
        table3 += '</tr>';
        
        table3 += '<tr>';
        table3 += '<th width="8%" align="center"><b>MASC</b></td>';
        table3 += '<th width="8%" align="center"><b>FEM</b></td>';
        table3 += '<th width="8%" align="center"><b>INDEF</b></td>';
        table3 += '<th width="8%" align="center"><b>MASC</b></td>';
        table3 += '<th width="8%" align="center"><b>FEM</b></td>';
        table3 += '<th width="8%" align="center"><b>INDEF</b></td>';
        table3 += '</tr>';
        table3 += '</thead>';       

        $("#cabeceraB th").css("border","solid 1px");
        $("#cabeceraB th").css("text-align","center");
        $("#tit label").css("font-size:","22px");
        
//        var tableI = $('#tablaBasica').html;

        var tableI = $("#tablaBasica").html();
        $("#tablaExcel td").css("border","solid 1px");
        $("#tblExcel").html(table3+tableI);
       
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
        var table_div = document.getElementById('tblExcel');
        console.log(table_div);
        var table_html = table_div.outerHTML.replace(/ /g, '%20');
        console.log(table_html);

        a.href = data_type + ' ' + table_html;
        a.download = 'ReporteVictimas_' + postfix + '.xls';
        var click_ev = document.createEvent("MouseEvents");
        click_ev.initEvent("click", true, true);
        a.dispatchEvent(click_ev);
    };
    
    $(function () {
        cargarRegiones();
        cargarDistritos();
        cargarJuzgado();

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
        
        fechaBaseDatos({
            txtFechaInicio: "fecha",
            txtFechaFin: "fecha"
        });
    });
    
    filtrarJuzgados = function (geografia) {
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

//juzgado no obligatorio
//quitar de cmb codigo anterior
//letra de Generado por
//ofendidos por carpeta
//limpiar
//tamano fem en imprimir delito

?>

