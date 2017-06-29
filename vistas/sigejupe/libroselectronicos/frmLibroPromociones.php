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
    //echo getdate();
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
<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title" id="h5titulo">                                                            
            Libro de Promociones
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
            
            <div class="form-group" >                                                                
                <label class="control-label col-md-2 needed" id="lblNum">Fecha Inicial</label>
                <div id="divSinRelacion" class="col-sm-2" style="float: left;">
                    
                    <input type="text" id="txtFechaInicio" class="form-control datepicker" readonly>
<!--                    <span class="input-group-addon">
                        <span class="glyphicon-calendar glyphicon"></span>
                    </span>-->
                </div> 
                <label class="control-label col-md-3 needed" id="lblNum">Fecha Final</label>
                <div id="txtFechFin" class=" col-sm-2" >
                    <input type="text" id="txtFechaFin" placeholder="DD/MM/AAAA" class="form-control datepicker" readonly>
<!--                    <span class="input-group-addon" >
                        <span class="glyphicon-calendar glyphicon"></span>
                    </span>-->
                </div> 
            </div>
            
            <div class="form-group" style="display: none;">                                                                
                <label class="control-label col-md-2" id="lblNum" >Fecha Inicial</label>
                <div id="divSinRelacion" class="col-sm-2">
                    
                    <input type="text" id="txtFechaInicio" class="form-control datepicker" readonly>
                </div> 
                <label class="control-label col-md-4 " id="lblNum">Fecha Final</label>
                <div id="divSinRelacion" class="col-sm-2">
                    <input type="text" id="txtFechaFin" placeholder="DD/MM/AAAA" class="form-control datepicker" readonly>
                </div> 
            </div>
            <br>
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
            <!-- Botones -->
            <div class="form-group ">
                <div class="col-md-offset-4  row-centered">
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Buscar" onclick="consultar()">                                    
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
        </div>

        <div id="divConsulta" style="display: none" align="center" class="col-xs-12">
            <div id="divResultados" class="col-xs-12">
            </div>
        </div>
        <div id="tablaBasica" style="display: none">
        </div>
    </div>
</div>
<script type="text/javascript">

    function cargarJuzgados() {
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        $.ajax({
            type: "POST",
            //url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
            //data: strDatos,
            data: {accion: "consultarCombo", obligaPermiso: "false"},
            async: false,
            dataType: "json",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                if (datos.totalCount > 0) {
                    var option = '<option tipojuzgado="0" value ="0"> SELECCIONE UNA OPCI&Oacute;N </option>';
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
                    //getTiposCarpetas();
                } else {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            }
        });
    };

    function limpiar() {
        $("#cmbJuzgado").val(0);
        $("#divResultados").html('');
        $('#divConsulta').hide('');

        $("#divAlertDager").html("");
        $("#divAlertDager").hide();
        $("#divAlertSucces").hide();
        $("#divAlertSucces").html("");

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
        if($('#cmbJuzgado').val()!='0' && $('#cmbJuzgado').val()!=''){
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/libros/LibroPromocionesFacade.Class.php",
            async: false,
            dataType: "json",
            data: {
                accion: "consultar",
                cveTipoActuacion:'1',//promociones
                cveJuzgado : $("#cmbJuzgado").val(),
                activo:'S',
                fechaInicio: $("#txtFechaInicio").val(),
                fechaFin: $("#txtFechaFin").val()
            },
            beforeSend: function (objeto) {
                 $('#divResultados').html("<center><img src= 'img/carga.gif' /></center>");
                 $('#divConsulta').show();
                $('#divResultados').show();
            },
            success: function (json) {
                //var juzgado = $("#hiddenAdscripcion").val().toUpperCase();
                var juzgado = $("#cmbJuzgado").find('option:selected').text();
                if (json.estatus == 'ok') {
                    if (json.totalCount > 0) {
                        var table = "";
                        var table0 = "";
                        table0 += "<center><table style='border-collapse:collapse; ' id='tblTitulo' class='list-unstyled Arial11' ><tr>";
                        table0 += "<td width=0%></td>";
                        table0 += "<td width=5%></td>";
                        table0 +="<td ALIGN='left' whidth=10%><img src='http://electronico.pjedomex.gob.mx/electronico/vistas/img/EscudoEstadoMexico2.png' width=90px></td>";
                        table0 += "<td width=10%></td>";
                        table0 += "<td ALIGN='CENTER' COLSPAN=2><b>";
                            table0 += "<label style=' font-family: Arial; font-size: 20px; font-weight: 501 !important;'>GOBIERNO DEL ESTADO DE M&Eacute;XICO<br>";
                            table0 += "PODER JUDICIAL<br>" + juzgado + "<br><br>";
                            table0 += "LIBRO DE REGISTROS DE PROMOCIONES</label></b></td>";
                        table0 += "<td width=30%></td></tr>";
                        table0 += '<tr><td colspan=4>&nbsp;</td></tr></table>';
                        table += table0;
                        table += "<table border:1px;' class='table table-hover table-striped table-bordered' border=1 id='tblReporte'>";
                        table += '<thead>';
                        table += '<tr>';
                        table += '<td width="5%" align="center"><b>NO</b></th>';
                        table += '<td width="7%" align="center"><b>No. DE <br>PROMOCI&Oacute;N</b></th>';
                        table += '<td width="10%" align="center"><b>No. CAUSA O TOCA</b></th>';
                        table += '<td width="10%" align="center"><b>FECHA</b></th>';
                        table += '<td width="25%" align="center"><b>NOMBRE DEL PROMOVENTE</b></th>';
                        table += '<td width="25%" align="center"><b>CONTENIDO</b></th>';
                        table += '<td width="15%" align="center"><b>FECHA DE ACUERDO</b></th>';
                        table += '</tr>';
                        table += '</thead>';
                        table += "<tbody>";

                        var cont = 0;
                        var table2 = "";
                        table2 += '<tbody id="tablaExcel" border="1">';
                        for (var i = 0; i < (parseInt(json.totalCount)); i++) {
                            if (cont == 16) {
                                //alert(cont);
                                table += "</tbody>";
                                table += "</table>";
                                table += table0;
                                table += "<table align='center' width='95%' border:1px;' class='table table-hover table-striped table-bordered' border=1 id='tblReporte'>";
                                table += '<thead>';
                                table += '<tr>';
                                table += '<td width="5%" align="center"><b>NO</b></th>';
                                table += '<td width="7%" align="center"><b>No. DE <br> PROMOCI&Oacute;N</b></th>';
                                table += '<td width="10%" align="center"><b>No. CAUSA O TOCA</b></th>';
                                table += '<td width="10%" align="center"><b>FECHA</b></th>';
                                table += '<td width="25%" align="center"><b>NOMBRE DEL PROMOVENTE</b></th>';
                                table += '<td width="25%" align="center"><b>CONTENIDO</b></th>';
                                table += '<td width="15%" align="center"><b>FECHA DE ACUERDO</b></th>';
                                table += '</tr>';
                                table += '</thead>';
                                table += '<tbody style="text-align=center;" align="center">';
                                cont = 1;
                            }
                            
                            var fecha = json.resultados[i].fechaRegistro;
                            var res = fecha.slice(0, 10);
                            fecha = res.slice(8, 10)+'/'+res.slice(5, 7)+'/'+res.slice(0, 4) + "<br>"+ fecha.slice (11,16)+'hrs';
                            //var hora = res.slice (11,16);
                            
                            var promovente = "";
                            if (json.resultados[i].promoventes.totalCount > 0) {
                                for (var u = 0; u < json.resultados[i].promoventes.totalCount; u++) {
                                    if (json.resultados[i].promoventes.datos[u].cveTipoPersona == 1) {
                                        promovente += json.resultados[i].promoventes.datos[u].nombre + " " + json.resultados[i].promoventes.datos[u].paterno + " " + json.resultados[i].promoventes.datos[u].materno + '<br>'
                                    } else {
//                                      if (json.resultados[i].promoventes.datos[u].nombrePersonaMoral != "") {
                                          promovente += json.resultados[i].promoventes.datos[u].nombrePersonaMoral + '<br>';
//                                      } else {
//                                          promovente += "N/A";
//                                      }
                                    }
                                    promovente = promovente.toUpperCase();
                                }
                            } else {
                                promovente += "N/A";
                            }
                            
                            var fechaAcuerdo = "";
                            if (json.resultados[i].acuerdos.totalCount > 0) {
                                fechaAcuerdo += json.resultados[i].acuerdos.datos[0].fechaAcuerdo;
                                var res = fechaAcuerdo.slice(0, 10);
                                fechaAcuerdo = res.slice(8, 10)+'/'+res.slice(5, 7)+'/'+res.slice(0, 4);
                            } else {
                                fechaAcuerdo += "N/A";
                            }
                            
                            var numPromo = '';
                            if(json.resultados[i].numActuacion !='' && json.resultados[i].aniActuacion !=''){
                                numPromo = json.resultados[i].numActuacion +'&nbsp;/'+json.resultados[i].aniActuacion;
                            }else{
                                numPromo = 'SIN REFERENCIA';
                            }
                            
                            var numer = '';
                            if(json.resultados[i].numero !='' && json.resultados[i].anio != ''){
                                numer = json.resultados[i].desTipoCarpeta.toUpperCase() +'<br>'+ json.resultados[i].numero +'&nbsp;/'+json.resultados[i].anio;
                            }else{
                                numer = 'SIN REFERENCIA';
                            }
                            
                            var sintesis = '';
                            if(json.resultados[i].sintesis!= ''){
                                sintesis = json.resultados[i].sintesis.toUpperCase();
                            }else{
                                sintesis = '- - -';
                            }
                            
                            
                            table += '<tr>';
                            table += '<td align="center"><font size=2>' + (i + 1) + '</font></td>';
                            //table += '<td style="cursor: pointer;"  onclick=Seleccionar(' + json.resultados[i].idCedula + ') align="center"><FONT SIZE=2>' + (i + 1) + '</font></td>';
                            table += '<td align="center"><font size=2>' + numPromo +'</font></td>';
                            table += '<td align="center"><font size=2>'+ numer + '</font></td>';
                            table += '<td align="center"><font size=2>' + fecha + '</FONT></td>';
                            table += '<td align="center"><font size=2>' + promovente + '</FONT></td>';
                            table += '<td align="center"><font size=2>' + sintesis + '</FONT></td>';
                            table += '<td align="center"><font size=2>' + fechaAcuerdo + '</FONT></td>';
                            table += "</tr>";
                            cont++;
                            //tabla para imprimir
                            table2 += '<tr>';
                            table2 += '<td align="center"><font size=2>' + (i + 1) + '</font></td>';
                            table2 += '<td align="center"><font size=2>' + numPromo +'</font></td>';
                            table2 += '<td align="center"><font size=2>'+ numer + '</font></td>';
                            table2 += '<td align="center"><font size=2>' + fecha + '</FONT></td>';
                            table2 += '<td align="center"><font size=2>' + promovente + '</FONT></td>';
                            table2 += '<td align="center"><font size=2>' + sintesis + '</FONT></td>';
                            table2 += '<td align="center"><font size=2>' + fechaAcuerdo + '</FONT></td>';
                            table2 += "</tr>";
                        }
                        table2 += "</tbody>";
                        table += "</tbody></table></center>";
                        $("#divResultados").html(table);
                        $('#divConsulta').show('');
                        $("#divResultados").show();
                        $("#btnImprimir").show("");
                        $("#btnExcel").show("");
                        $("#espImp").hide();
                        
                        $("#tablaBasica").html(table2);
                        $("#tablaExcel td").css("border", "solid 1px");
                        $("#inputExcel").show('');
                        $("#inputImprimir").show('');
                    }
                } else {
                    $("#divPrecaucion").html(json.text);
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
        }else{
            $("#divPrecaucion").html('Seleccione un Juzgado');
            $("#divPrecaucion").show("");
            setTimeAlert("divPrecaucion");
            $('#divConsulta').show('');
            $("#divResultados").html("");
            $("#divResultados").hide();
            $("#inputExcel").hide("");
            $("#inputImprimir").hide("");
            }
    }

    function Imprimir() {
        var tablaI = $("#tablaBasica").html();
//        var juzgado = $("#hiddenAdscripcion").val().toUpperCase();
        var juzgado = $("#cmbJuzgado").find('option:selected').text();
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
        table3 += "border: 1px solid #ccc;";
        table3 += "border-collapse:collapse;";
        table3 += "text-align:center";
        table3 += " ";
        table3 += "}";
        table3 += "#cabecera th {";
        table3 += "border: 1px solid #000;";
        table3 += "border-collapse:collapse;";
        table3 += "}";

        table3 += ".esc{ width:10%; align:right;} ";
        table3 += " table tr { font-family: Arial; }";
        table3 += "</style>";
        table3 += "<div align=center;>";
        table3 += ' <center><table width=90% style="border-collapse:collapse;" class="Arial11"><tr>';
        table3 += ' <thead style="table-header-group"><tr>';
        table3 += ' <th> </th>';
        table3 += ' <th> </th>';
        table3 += ' <th class="esc"><img src="http://electronico.pjedomex.gob.mx/electronico/vistas/img/EscudoEstadoMexico2.png" style="width:80px"></td>';
        table3 += ' <th class="tit" colspan="3"><h3>GOBIERNO DEL ESTADO DE M&Eacute;XICO<br>PODER JUDICIAL<br>' + juzgado + '<br><br>LIBRO DE REGISTROS DE PROMOCIONES</h3> </td> ';
        table3 += ' <th> </th>';

        table3 += '<tr id="cabecera">';
        table3 += '<th width="5%" align="center"><b>NO</b></th>';
        table3 += '<th width="7%" align="center"><b>No. DE <br>PROMOCI&Oacute;N</b></th>';
        table3 += '<th width="10%" align="center"><b>No. CAUSA O TOCA</b></th>';
        table3 += '<th width="10%" align="center"><b>FECHA REGISTRO</b></th>';
        table3 += '<th width="25%" align="center"><b>NOMBRE DEL PROMOVENTE</b></th>';
        table3 += '<th width="25%" align="center"><b>CONTENIDO</b></th>';
        table3 += '<th width="15%" align="center"><b>FECHA DE ACUERDO</b></th>';
        table3 += '</tr>';
        table3 += '</thead>';
        w = window.open();
        w.document.write(table3 + tablaI);
        w.document.close();
        w.print();
        $("#espImp").hide();
    }

    generarExcel = function (e) {
        //var tablaI = $("#tablaBasica").html();
//        var juzgado = $("#hiddenAdscripcion").val().toUpperCase();
        var juzgado = $("#cmbJuzgado").find('option:selected').text();
        var table3 = '';
        table3 += ' <center><table style="border-collapse:collapse;" class="Arial11">';
        table3 += ' <thead style="table-header-group"><tr>';
        table3 += ' <th> </th>';
        table3 += ' <th class="esc"><img src="http://electronico.pjedomex.gob.mx/electronico/vistas/img/EscudoEstadoMexico2.png" style="width:80px"></td>';
        table3 += ' <th class="tit" colspan="3"><h3>GOBIERNO DEL ESTADO DE M&Eacute;XICO<br>PODER JUDICIAL<br>' + juzgado + '<br><br>LIBRO DE REGISTROS DE PROMOCIONES</h3> </td> ';
        table3 += ' <th> </th>';

        table3 += '<tr id="cabeceraB">';
        table3 += '<th width="5%" align="center"><b>NO</b></th>';
        table3 += '<th width="7%" align="center"><b>No. DE PROMOCI&Oacute;N</b></th>';
        table3 += '<th width="10%" align="center"><b>No. CAUSA O TOCA</b></th>';
        table3 += '<th width="10%" align="center"><b>FECHA REGISTRO</b></th>';
        table3 += '<th width="25%" align="center"><b>NOMBRE DEL PROMOVENTE</b></th>';
        table3 += '<th width="25%" align="center"><b>CONTENIDO</b></th>';
        table3 += '<th width="15%" align="center"><b>FECHA DE ACUERDO</b></th>';
        table3 += '</tr>';
        table3 += '</thead>';
        //$("#tablaBasica").html(table3 + tablaI);
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
        var table_div = document.getElementById('divConsulta');
        console.log(table_div);
        var table_html = table_div.outerHTML.replace(/ /g, '%20');
        console.log(table_html);

        a.href = data_type + ' ' + table_html;
        a.download = 'Promociones' + postfix + '.xls';
        var click_ev = document.createEvent("MouseEvents");
        click_ev.initEvent("click", true, true);
        a.dispatchEvent(click_ev);
    };

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
            maxDate : 'now'
            
        });
        $("#txtFechaFin").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY",
            ignoreReadonly: true,
            maxDate : 'now'
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
            if($("#txtFechaFin").val()< $("#txtFechaInicio").val()){
                $("#txtFechaInicio").val($("#txtFechaFin").val());
            }
        });
        
        cargarJuzgados();
        fechaBaseDatos({
            txtFechaInicio: "fecha",
            txtFechaFin: "fecha"
        });
    });
</script> 

