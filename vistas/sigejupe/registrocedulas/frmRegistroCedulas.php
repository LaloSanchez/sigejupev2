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
            Registro de Cedulas Profesionales
        </h5>
    </div>
    <div class="panel-body">

        <div id="divFormulario" class="form-horizontal">
            <div class="form-group">      
                <label class="control-label col-md-2">N&uacute;mero de Registro</label>                
                <div class="col-sm-2"> 
                    <input type="text" id="txtNumReg" class="form-control" placeholder="No.">
                </div>                
                <label class="control-label col-md-4">Fecha de Registro</label>                
                <div class="col-sm-2"> 
                    <input type="text" id="txtfechaReg" placeholder="DD/MM/AAAA" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>                
                </div>                
            </div> 
            <div class="form-group">
                <label class="control-label col-md-2 needed">Nombre</label>
                <div class="col-md-4"><input type="text" id="txtNombre" maxlength="100" size="70" placeholder="NOMBRE COMPLETO" style="text-transform: uppercase;" class="form-control" /></div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-2 needed">Domicilio</label> 
                <div class="col-md-4"><input type="text" id="txtDomicilio" maxlength="100" size="70" placeholder="DOMICILIO" style="text-transform: uppercase;" class="form-control" /></div>
            </div>
            <div class="form-group">                                                                
                <label class="control-label col-md-2 needed" id="lblCedula">Cedula </label>
                <div class="col-sm-2">
                    <input type="text" id="txtCedula" class="form-control" placeholder="CEDULA" maxlength="8">
                </div> 
                <label class="control-label col-md-4 needed">CURP</label>                
                <div class="col-sm-2"> 
                    <input type="text" id="txtCURP" placeholder="CURP" style="text-transform: uppercase;" class="form-control" data-date-format="dd/mm/yyyy"/>                
                </div>                                
            </div> 
            
            <div class="form-group">                                                                
                <label class="control-label col-md-2 needed" id="lblLibro">Libro </label>
                <div class="col-sm-2">
                    <input type="text" id="txtLibro" class="form-control" placeholder="LIBRO">
                </div> 
                <label class="control-label col-md-4 needed">Foja</label>                  
                <div class="col-sm-2"> 
                    <input type="text" id="txtFoja" placeholder="FOJA" class="form-control"/>                
                </div>                              
            </div>
            
            <div class="form-group">                                                                
                <label class="control-label col-md-2 needed" id="lblNum">Fecha Expedici&oacute;n</label>
                <div id="divSinRelacion" class="col-sm-2">
                    <input type="text" id="txtFechaExp" placeholder="DD/MM/AAAA" class="form-control datepicker" data-date-format="dd/mm/yyyy">
                </div> 
                <label class="control-label col-md-4 needed">Estatus</label> 
                <div class="col-sm-2"> 
                    <select id="cmbEstatus" name="cmbEstatus" class="form-control" align="left">
                        <option value="" selected="selected">-SELECCIONE-</option>
                        <option value="1">REGISTRADA</option>
                        <option value="2">EN INVESTIGACI&Oacute;N</option>
                        <option value="3">VALIDADA</option>
                        <option value="4">AP&Oacute;CRIFA</option>
                    </select>
                </div>                                
            </div>
            <div class="form-group">                                                                
                <label class="control-label col-md-2 needed" id="lblNum">Autoridad </label>
                <div class="col-md-4">
                    <input type="text" id="txtAutoridad" class="form-control" placeholder="AUTORIDAD" style="text-transform: uppercase;">
                </div> 
<!--                <label class="control-label col-md-2 needed">No.Empleado</label>                  
                <div class="col-sm-2"> 
                    <input type="text" id="txtNoEmp" placeholder="NO. DE EMPLEADO" class="form-control"/>                
                </div>                              -->
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
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputGuardar" value="Guardar" onclick="guardar();">                                                        
                    </div>
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
        </div>

        <div id="divConsulta" style="display: none" align="center" class="col-xs-11">
            <div id="divResultados" class="col-xs-12">
            </div>
        </div>
        <div id="tablaBasica" style="display: none">
        </div>
    </div>
</div>
<script type="text/javascript">

    validar = function () {
        var mensaje = "";
        var error = true;
        
        if ($('#txtNombre').val() == "" || $('#txtNombre').val() == 0) {
            mensaje += "*Ingrese nombre <br>";
            error = false;
        } else if (!/^([a-z ραινσϊ \D]{2,60})$/i.test($('#txtNombre').val())) {
            mensaje += " * Nombre incorrecto <br>";
            error = false;
        }
        if ($('#txtCedula').val() == "" || $('#txtCedula').val() == 0) {
            mensaje += "*Ingrese una Cedula <br>";
            error = false;
        } else if (!/^([0-9]{8})$/.test($('#txtCedula').val())) {
            mensaje += " * Campo Cedula incorrecto <br>";
            error = false;
        }
        if ($('#txtLibro').val() == "" || $('#txtLibro').val() == 0) {
            mensaje += "*Ingrese Libro <br>";
            error = false;
        } else if (!/^([0-9\+\s\+\-])+$/.test($('#txtLibro').val())) {
            mensaje += " *campo Libro incorrecto <br>";
            error = false;
        }
//        if ($('#txtNoEmp').val() == "" || $('#txtNoEmp').val() == 0) {
//            mensaje += "*Ingrese Numero de Empleado <br>";
//            error = false;
//        } else if (!/^([0-9\+\s\+\-])+$/.test($('#txtNoEmp').val())) {
//            mensaje += " * Numero de Empleado incorrecto <br>";
//            error = false;
//        }
        if ($('#txtAutoridad').val() == "" || $('#txtAutoridad').val() == 0) {
            mensaje += "*Ingrese Autoridad <br>";
            error = false;
        } else if (!/^([a-z ραινσϊ \D]{2,60})$/i.test($('#txtAutoridad').val())) {
            mensaje += " *campo Autoridad incorrecto <br>";
            error = false;
        }
        if ($('#txtDomicilio').val() == "" || $('#txtDomicilio').val() == 0) {
            mensaje += "*Ingrese Domicilio <br>";
            error = false;
        } else if (!/^([a-z ραινσϊ \D]{2,60})$/i.test($('#txtDomicilio').val())) {
            mensaje += " * Domicilio incorrecto <br>";
            error = false;
        }
        if ($('#txtCURP').val() == "" || $('#txtCURP').val() == 0) {
            mensaje += "*Ingrese CURP <br>";
            error = false;
        } else if (!/^([a-z]{4})([0-9]{6})([a-z]{6})([0-9]{2})$/i.test($('#txtCURP').val())) {
            mensaje += " * CURP incorrecta <br>";
            error = false;
        }
        if ($('#txtFoja').val() == "" || $('#txtFoja').val() == 0) {
            mensaje += "*Ingrese Foja <br>";
            error = false;
        } else if (!/^([0-9\+\s\+\-])+$/.test($('#txtFoja').val())) {
            mensaje += " * Foja Incorrecto <br>";
            error = false;
        }
        if ($('#cmbEstatus').val() == "" || $('#cmbEstatus').val() == 0) {
            mensaje += "*Selecciona Estatus <br>";
            error = false;
        }
        if ($('#txtFechaExp').val() == "" || $('#txtFechaExp').val() == 0) {
            mensaje += "*Selecciona una Fecha <br>";
            error = false;
        }
        if (!error) {
            $("#divPrecaucion").html(mensaje);
            $("#divPrecaucion").show("");
            setTimeAlert("divPrecaucion");
        }
        return error;
    };

    function limpiar() {
        $("#txtNumReg").val(""); 
        $("#txtNombre").val("");
        $("#txtDomicilio").val("");
        $("#txtCedula").val("");
        $("#txtCURP").val("");
        $("#txtLibro").val("");
        $("#txtFoja").val("");
        $("#cmbEstatus").val('');
        $("#txtAutoridad").val("");
        $("#hddIdCedula").val("");

        $("#divResultados").html('');
        $('#divConsulta').hide('');

        $("#divAlertDager").html("");
        $("#divAlertDager").hide();

        $("#divAlertSucces").hide();
        $("#divAlertSucces").html("");

        $("#txtFechaExp").val($("#hiddenFechaActual").val());
        $("#txtfechaReg").val($("#hiddenFechaActual").val());
        //setfechas();
        $('#inputImprimir').hide('');
        $('#inputExcel').hide('');

    }

//    setfechas = function () {
//        var today = new Date();
//        var dd = today.getDate();
//        var mm = today.getMonth() + 1; //January is 0!
//        var yyyy = today.getFullYear();
//        if (dd < 10) {
//            dd = '0' + dd
//        }
//        if (mm < 10) {
//            mm = '0' + mm
//        }
//        var today = dd + '/' + mm + '/' + yyyy;
//        $("#txtfechaReg").val(today);
//        $("#txtFechaExp").val(today);
//    }

    function consultar() {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/cedulaprofesional/CedulaprofesionalFacade.Class.php",
            async: false,
            dataType: "json",
            data: {
                accion: "consultar",
                idCedula: '', //$("#idCedula"),
                numReg: '',//$("#txtNumReg").val(),
                fechaExp: '', //$("#txtFechaExp").val(),
                nombre: $("#txtNombre").val(),
                domicilio: $("#txtDomicilio").val(),
                cedulas: $("#txtCedula").val(),
                libro: $("#txtLibro").val(),
                fechaRegistro: '', //$("#txtfechaReg").val(),
                autoridad: $("#txtAutoridad").val(),
                curp: $("#txtCURP").val(),
                foja: $("#txtFoja").val(),
                estatusCedula: $("#cmbEstatus").val(),
                cveAdscripcion: $("#hddCveAdscripcion").val(),
                numEmpleado: '',//$("#hddCveUsuario").val(),
                activo: 'S'
            },
            beforeSend: function (objeto) {
            },
            success: function (json) {
                var juzgado = $("#hiddenAdscripcion").val().toUpperCase();
                if (json.status == 'ok') {
                    if (json.totalCount > 0) {
                        var table = "";
                        var table0="";
                        table0 += "<center><table style='border-collapse:collapse;' id='tblTitulo' class='list-unstyled' ><tr><td ALIGN='left' whidth=10%>";
                        table0 += "<img src='http://electronico.pjedomex.gob.mx/electronico/vistas/img/EscudoEstadoMexico2.png' width=90px></td><td width=10%></td>";
                        table0 += "<td ALIGN='CENTER' COLSPAN=3>";
                        table0 += "<label style='font-family: Arial; font-weight:501 !important; font-size:20px; '>GOBIERNO DEL ESTADO DE M&Eacute;XICO<br>";
                        table0 += "PODER JUDICIAL<br>"+juzgado+"<br><br>";
                        table0 += "LIBRO DE REGISTRO DE CEDULAS PROFESIONALES</label></td><td width=20%></td></tr>";
                        table0 += '<tr><td colspan=4>&nbsp;</td></tr></table>';
                        table += table0;
                        table += "<table width='1100' border:1px;' class='table table-hover table-striped table-bordered' border=1 id='tblReporte'>";
                        table += '<thead>';
                        table += '<tr>';
                        table += '<td width="5%" align="center"><b>NO.</b></th>';
                        table += '<td width="15%" align="center"><b>NO. DE REGISTRO</b></th>';
                        table += '<td width="30%" align="center"><b>NOMBRE</b></th>';
                        table += '<td width="15%" align="center"><b>CEDULA</b></th>';
                        table += '<td width="15%" align="center"><b>FECHA REGISTRO</b></th>';
                        table += '<td width="20%" align="center"><b>ACCIONES</b></th>';
                        table += '</tr>';
                        table += '</thead>';
                        table += "<tbody>";

                        var cont = 0;
                        for (var i = 0; i < (parseInt(json.totalCount)); i++) {
                            if(cont == 30){
                                table += "</tbody>";
                                table += "</table>";
                                table += table0;
                                table += "<table align='center' width='1100' border:1px;' class='table table-hover table-striped table-bordered' border=1 id='tblReporte'>";
                                table += '<thead>';
                                table += '<tr>';
                                table += '<th width="5%" align="center"><b>NO.</th>';
                                table += '<th width="15%" align="center"><b>NO. DE REGISTRO</th>';
                                table += '<th width="30%" align="center"><b>NOMBRE</th>';
                                table += '<th width="15%" align="center"><b>CEDULA</th>';
                                table += '<th width="15%" align="center"><b>FECHA REGISTRO</th>';
                                table += '<th width="20%" align="center"><b>ACCIONES</th>';
                                table += '</tr>';
                                table += '</thead>';
                                table += '<tbody style="text-align=center;" align="center">';
                                cont =1;
                            }
                            table += '<tr>';
                            table += '<td style="cursor: pointer;"  onclick=Seleccionar(' + json.resultados[i].idCedula + ') align="center"><FONT SIZE=2>' + (i+1)+ '</font></td>';
                            table += '<td style="cursor: pointer;"  onclick=Seleccionar(' + json.resultados[i].idCedula + ') align="center"><FONT SIZE=2>' + json.resultados[i].numReg + '</font></td>';
                            table += '<td style="cursor: pointer;"  onclick=Seleccionar(' + json.resultados[i].idCedula + ') align="center"><FONT SIZE=2>' + json.resultados[i].nombre + '</FONT></td>';
                            table += '<td style="cursor: pointer;"  onclick=Seleccionar(' + json.resultados[i].idCedula + ') align="center"><FONT SIZE=2>' + json.resultados[i].cedulas + '</FONT></td>';

                            var fecha = json.resultados[i].fechaRegistro;
                            var res = fecha.slice(0, 10);
                            var ano = res.slice(0, 4);
                            var mes = res.slice(5, 7);
                            var dia = res.slice(8, 10);
                            table += '<td style="cursor: pointer;"  onclick=Seleccionar(' + json.resultados[i].idCedula + ') align="center"><FONT SIZE=2>' + dia + "/" + mes + "/" + ano + '</FONT></td>';
                            table += "<td align='center'>";
                            table += '<button class="frmBoton" id="btnHoja" onclick=HojaLibro(' + json.resultados[i].idCedula + ')>Imprimir Hoja</button>';
                            table += "</td>";
                            table += "</tr>";
                            cont++;
                        }
                        table += "</tbody></table></center>";
                        $("#divResultados").html(table);
                        $('#divConsulta').show('');
                        $("#divResultados").show();
                        $("#btnImprimir").show("");
                        $("#btnExcel").show("");
                        $("#espImp").hide();
                        
                        //tabla sin columna de acciones
                        var table2 = "";
                        table2 += '<tbody id="tablaExcel" border="1">';
                        
                        for (var i = 0; i < (parseInt(json.totalCount)); i++) {
                            table2 += "<tr style='cursor: pointer;'>";
                            table2 += "<td align='center'><FONT SIZE=2>" + (i+1) + "</font></td>";
                            table2 += "<td align='center'><FONT SIZE=2>" + json.resultados[i].numReg + "</font></td>";
                            table2 += "<td align='center'><FONT SIZE=2>" + json.resultados[i].nombre + "</FONT></td>";
                            table2 += "<td align='center'><FONT SIZE=2>" + json.resultados[i].cedulas + "</FONT></td>";
                            var fecha = json.resultados[i].fechaRegistro;
                            var res = fecha.slice(0, 10);
                            var ano = res.slice(0, 4);
                            var mes = res.slice(5, 7);
                            var dia = res.slice(8, 10);
                            table2 += "<td align='center'><FONT SIZE=2>" + dia + "/" + mes + "/" + ano + "</FONT></td>";
                            table2 += "</tr>";
                        }
                        table2 += "</tbody>";
                        $("#tablaBasica").html(table2);
                        $("#tablaExcel td").css("border","solid 1px");
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
                    $("#inputExcel").hide("");
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divPrecaucion").html("Error al mostrar la informacion:\n\n" + otroobj);
                $("#divPrecaucion").show("");
                setTimeAlert("divPrecaucion");
            }
        });
    }

    function Seleccionar(id) {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/cedulaprofesional/CedulaprofesionalFacade.Class.php",
            async: false,
            dataType: "json",
            data: {
                accion: "consultar",
                idCedula: id
            },
            beforeSend: function (objeto) {
            },
            success: function (json) {
                if (json.totalCount > 0) {
                    $("#hddIdCedula").val(json.resultados[0].idCedula);
                    $("#txtNumReg").val(json.resultados[0].numReg);
                    $("#txtNombre").val(json.resultados[0].nombre);
                    $("#txtDomicilio").val(json.resultados[0].domicilio);
                    $("#txtCedula").val(json.resultados[0].cedulas);
                    $('#txtCURP').val(json.resultados[0].curp);
                    $('#txtLibro').val(json.resultados[0].libro);
                    $('#txtFoja').val(json.resultados[0].foja);
                    //$("#txtfechaReg").val(json.resultados[0].fechaExp);
                    $("#txtAutoridad").val(json.resultados[0].autoridad);
                    $("#cmbEstatus").val(json.resultados[0].estatusCedula);
                    //$('#txtNoEmp').val(json.resultados[0].numEmpleado);
                    $("#txtNumReg").val(json.resultados[0].numReg);
                    var fecha = json.resultados[0].fechaRegistro;
                    if (fecha != "") {
                        var res = fecha.slice(0, 10);
                        var ano = res.slice(0, 4);
                        var mes = res.slice(5, 7);
                        var dia = res.slice(8, 10);
                    } else {
                        var ano = '----';
                        var mes = '--';
                        var dia = '--';
                    }
                    $("#txtfechaReg").val(dia + '/' + mes + '/' + ano);
                    $("#txtNombre").val(json.resultados[0].nombre);
                    var fechaE = json.resultados[0].fechaExp;
                    if (fechaE != "") {
                        var res = fechaE.slice(0, 10);
                        var ano = res.slice(0, 4);
                        var mes = res.slice(5, 7);
                        var dia = res.slice(8, 10);
                    } else {
                        var ano = '----';
                        var mes = '--';
                        var dia = '--';
                    }
                    $("#txtFechaExp").val(dia + '/' + mes + '/' + ano);
                    $("#divResultados").hide();
                    //$("#espImp").hide();
                    $("#inputImprimir").hide('');
                    $("#inputExcel").hide('');
                } else {
                    $("#divPrecaucion").html("Sin Resultados");
                    $("#divPrecaucion").show("");
                    setTimeAlert("divPrecaucion");
                    $("#divResultados").hide();
                    $("#btnImprimir").hide("");
                    $("#btnExcel").hide("");
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divPrecaucion").html("Error al mostrar la informacion:\n\n" + otroobj);
            }
        });
    }

    function HojaLibro(id) {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/cedulaprofesional/CedulaprofesionalFacade.Class.php",
            async: false,
            dataType: "json",
            data: {
                accion: 'consultar',
                activo: 'S',
                idCedula: id
            },
            beforeSend: function (objeto) {
                
            },
            success: function (json) {  
                var juzgado = $("#hiddenAdscripcion").val().toUpperCase();
                if (json.totalCount > 0) {
                    for (var i = 0; i < json.totalCount; i++) {
                        var table = "";
                        table += "<meta charset='utf-8'/>";
                        table += "<style>";
                        table += "@media print{";
                        table += "#header, #footer {display:none;}";
                        table += ".frmBoton { BACKGROUND-COLOR:#BB9309; COLOR: #FFFFFF; BORDER: 1px solid #33685F; FONT-SIZE: 11px; FONT-WEIGHT: bold; FONT-FAMILY: Arial,Helvetica, sans-serif; LETTER-SPACING: 1px; WORD-SPACING: normal; cursor:pointer; display:none;}";
                        table += ".Arial12 {color: #000000; font-size: 12px; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-weight: normal; line-height: normal; text-decoration: none; style='text-align : justify;'}";
                        table += ".Arial11 {color: #000000; font-size: 11px; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-weight: normal; line-height: normal; text-decoration: none; style='text-align : justify;'}";
                        table += ".Arial8 {color: #000000; font-size: 8px; font-family: Arial, Helvetica, sans-serif; font-style: normal; font-weight: normal; line-height: normal; style='text-align : justify;'}";
                        table += "@page {margin: 1cm; size: landscape;}";
                        table += "@page:first {margin-top: 2.5cm; margin-bottom: 2.5cm; }";
                        table += "@page:right {margin-left: 2cm; }";
                        table += "@page:left {margin-right: 2cm; }";
                        
                        table += " html body .cedulas {height: auto;} ";
                        table += " html body .cedulas {height: auto;} ";
                        table += ".cedulas tr { height: 55px;}";
                        table += "}";
                        table += ".cedulas tr{ height: 55px;} ";
                        table += " table tr { font-family: Arial; }";
                        table += "</style>";

                        table += '<div id="report" class="cedulas">';
                        table += '<center>';
                        table += '<table style="border-collapse:collapse;" id="tblTitulo">';
                        table += '<tr>';
                        table += '<td width=10% style="border: hidden"></td>';
                        table += '<td ALIGN="left" width=10%><img src="img/EscudoEstadoMexico.png" width="100px"></td>';
                        table += '<td width=5%></td>';
                        table += "<td ALIGN='CENTER' style='border: hidden'>";
                        table += "<h2>GOBIERNO DEL ESTADO DE M&Eacute;XICO<br>";
                        table += "PODER JUDICIAL<br>"+juzgado+"<br><br>";
                        table += "LIBRO DE REGISTRO DE CEDULAS PROFESIONALES<br></h2></td>";
                        table += '<td width=20%></td>';
                        table += '</tr>';
                        table += '</table><br><br><br>';
                        table += '<table width="1100">';

                        table += '<tr style="font-family: Arial;" >';
                        table += '<td width=10%> No. DE REGISTRO : </td>';
                        var numRegistro = '';
                        if (json.resultados[i].numReg != '' && json.resultados[i].numReg != '0') {
                            numRegistro = json.resultados[i].numReg;
                        } else {
                            numRegistro = 'S/N';
                        }
                        table += '<td style="border-bottom:1px solid #000000" align="center" width=30%>' + numRegistro + '</td>';
                        table += '<td width=5%> FECHA:</td>';
                        var fecha = json.resultados[i].fechaRegistro;
                        if (fecha != "") {
                            var res = fecha.slice(0, 10);
                            var ano = res.slice(0, 4);
                            var mes = res.slice(5, 7);
                            var dia = res.slice(8, 10);
                        } else {
                            var ano = '----';
                            var mes = '--';
                            var dia = '--';
                        }
                        table += '<td style="border-bottom:1px solid #000000" align="center" width=33%>' + dia + '/' + mes + '/' + ano + '</td>';
                        table += '</tr>';
                        table += '</table>';

                        var nombre = '';
                        if (json.resultados[i].nombre != '') {
                            nombre = json.resultados[i].nombre.toUpperCase();
                        } else {
                            nombre = "SIN REFERENCIA";
                        }
                        table += '<table width="1100">';
                        table += '<tr >';
                        table += '<td width=7%>NOMBRE:</td>';
                        table += '<td style="border-bottom:1px solid #000000" align="center">' + nombre + '</td>';
                        //table += '<tr ><td style="border-bottom:1px solid #000000" colspan=2 align="center">&nbsp;</td></tr>';
                        table += '</tr>';
                        table += '</table>';

                        var domicilio = '';
                        if (json.resultados[i].domicilio != "") {
                            domicilio = json.resultados[i].domicilio.toUpperCase();
                        } else {
                            domicilio = "SIN REFERENCIA";
                        }
                        table += '<table width="1100">';
                        table += '<tr >';
                        table += '<td width=8%>DOMICILIO:</td>';
                        table += '<td style="border-bottom:1px solid #000000" align="center">' + domicilio + '</td>';
                        table += '</tr>';
                        table += '</table>';

                        table += '<table width="1100">';
                        table += '<tr>';
                        table += '<td width=11%> No. DE CEDULA: </td>';
                        var cedula = '';
                        if (json.resultados[i].cedulas != "") {
                            cedula = json.resultados[i].cedulas;
                        } else {
                            cedula = '--------';
                        }
                        table += '<td style="border-bottom:1px solid #000000" align="center" width=30%>' + cedula + '</td>';

                        table += '<td width=16%> FECHA DE EXPEDICI&Oacute;N:</td>';
                        var fecha = json.resultados[i].fechaExp;
                        if (fecha != "") {
                            var res = fecha.slice(0, 10);
                            var ano = res.slice(0, 4);
                            var mes = res.slice(5, 7);
                            var dia = res.slice(8, 10);
                        } else {
                            var ano = '----';
                            var mes = '--';
                            var dia = '--';
                        }
                        table += '<td style="border-bottom:1px solid #000000" align="center" width=33%>' + dia + '/' + mes + '/' + ano + '</td>';
                        table += '</tr>';
                        table += '</table>';

                        var autoridad = '';
                        if (json.resultados[i].autoridad != '0' && json.resultados[i].autoridad != '') {
                            autoridad = json.resultados[i].autoridad.toUpperCase();
                        } else {
                            autoridad = "- - -";
                        }
                        table += '<table width="1100">';
                        table += '<tr >';
                        table += '<td width=21%>AUTORIDAD QUE LA EXPIDE: </td>';
                        table += '<td style="border-bottom:1px solid #000000" align="center">' + autoridad + '</td>';
                        table += '</tr>';
                        table += '</table>';

                        var estatus = '';
                        if (json.resultados[i].desEstatusCedula != '') {
                            estatus = json.resultados[i].desEstatusCedula.toUpperCase();
                        } else {
                            estatus = "- - -";
                        }
                        table += '<table width="1100">';
                        table += '<tr >';
                        table += '<td width=7%>ESTATUS: </td>';
                        table += '<td style="border-bottom:1px solid #000000" align="center">' + estatus + '</td>';
                        table += '</tr>';
                        table += '</table>';

                        table += '<br><br>'
                        table += '<table width="1100">';
                        table += '<tr >';
                        table += '<td width=10%>FIRMA: </td>';
                        table += '<td style="border-bottom:1px solid #000000" ></td>';
                        table += '<td width=7%></td>';
                        table += '<td></td>';
                        table += '</tr>';
                        table += '</table>';
                        table += '</center> </div>';
                    }
                    w = window.open();
                    w.document.write(table);
                    w.document.close();
                    w.print();
                    $("#espImp").hide();
                } else {
                    $("#divPrecaucion").html("Sin Resultados");
                    $("#divPrecaucion").show("");
                    setTimeAlert("divPrecaucion");
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divError").html("Error al mostrar la informacion:\n\n" + otroobj);
                $("#divError").show("");
                setTimeAlert("divError");
            }
        });
    }

    function guardar() {
        var error = true;
        if (validar()) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/cedulaprofesional/CedulaprofesionalFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    accion: 'guardar',
                    idCedula: $("#hddIdCedula").val(),
                    nombre: $("#txtNombre").val(),
                    domicilio: $("#txtDomicilio").val(),
                    cedulas: $("#txtCedula").val(),
                    libro: $("#txtLibro").val(),
                    foja: $("#txtFoja").val(),
                    fechaExp: $("#txtFechaExp").val(),
                    autoridad: $("#txtAutoridad").val(),
                    curp: $("#txtCURP").val(),
                    estatusCedula: $("#cmbEstatus").val(),
                    numEmpleado: $("#hddCveUsuario").val(),
                    cveAdscripcion: $("#hddCveAdscripcion").val(),
                },
                beforeSend: function (objeto) {
                },
                success: function (json) {
                    if (json.status == "ok") {
                        
                        var fecha = json.resultados[0].fechaExp;
                        var fechaR = json.resultados[0].fechaRegistro;
                    if (fecha != "") {
                        var res = fecha.slice(0, 10);
                        var anio = res.slice(0, 4);
                        var mes = res.slice(5, 7);
                        var dia = res.slice(8, 10);
                    } else {
                        var anio = '----';
                        var mes = '--';
                        var dia = '--';
                    } 
                    if (fechaR != "") {
                        var resR = fechaR.slice(0, 10);
                        var anioR = resR.slice(0, 4);
                        var mesR = resR.slice(5, 7);
                        var diaR = resR.slice(8, 10);
                    }else {
                        var anioR = '----';
                        var mesR = '--';
                        var diaR = '--';
                    }
                $("#txtNumReg").val(json.resultados[0].numReg);
                $("#txtFechaExp").val(dia + '/' + mes + '/' + anio);
                $("#txtNombre").val(json.resultados[0].nombre);
                $("#txtDomicilio").val(json.resultados[0].domicilio);
                $("#txtCedula").val(json.resultados[0].cedulas);
                //$("#txtFechaExp").val(json.resultados[0].fechaExp);
                $("#txtfechaReg").val(diaR + '/' + mesR + '/' + anioR);
                $("#txtAutoridad").val(json.resultados[0].autoridad);
                $("#hddIdCedula").val(json.resultados[0].idCedula);
                $("#txtLibro").val(json.resultados[0].libro);
                $("#txtFoja").val(json.resultados[0].foja);
                $("#txtCURP").val(json.resultados[0].curp);
                        $("#divCorrecto").html("Registro Guardado Correctamente");
                        $("#divCorrecto").show("");
                        setTimeAlert("divCorrecto");
                        $('#espImp').hide();
                    } else { 
                        $("#divPrecaucion").html(json.Error);
                        $("#divPrecaucion").show("");
                        setTimeAlert("divPrecaucion");
                        $('#espImp').hide();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divError").html("Error al mostrar la informacion:\n\n" + otroobj);
                    $("#divError").show("");
                    setTimeAlert("divError");
                }
            });
        } else {
            error = false;
        }
        return error;
    }

    function Imprimir() {
        var tablaI = $("#tablaBasica").html();
        var juzgado = $("#hiddenAdscripcion").val().toUpperCase();
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
        table3 += "#cabecera th {";
        table3 += "border: 1px solid #000;";
        table3 += "border-collapse:collapse;";
        table3 += "}";

        table3 += ".esc{ width:15%; align:right;} ";
        table3 += " table tr { font-family: Arial; }";
        table3 += "</style>";
        table3 += "<div align=center;>";
        table3 += ' <center><table width="90%" style="border-collapse:collapse;" class="Arial11"><tr>';
        table3 += ' <thead style="table-header-group"><tr>';
        table3 += ' <th> </th>';
        table3 += ' <th class="esc"><img src="http://electronico.pjedomex.gob.mx/electronico/vistas/img/EscudoEstadoMexico2.png" style="width:80px"></td>';
        table3 += ' <th class="tit" colspan="2"><h3>GOBIERNO DEL ESTADO DE M&Eacute;XICO<br>PODER JUDICIAL<br>'+juzgado+'<br><br>LIBRO DE REGISTRO DE CEDULAS PROFESIONALES</h3> </td> ';
        table3 += ' <th> </th>';

        table3 += '<tr id="cabecera">';
        table3 += '<th width="3%" align="center">NO.</th>';
        table3 += '<th width="5%" align="center">NO. DE REGISTRO</th>';
        table3 += '<th width="25%" align="center">NOMBRE</th>';
        table3 += '<th width="15%" align="center">CEDULA</th>';
        table3 += '<th width="20%" align="center">FECHA REGISTRO</th>';
        table3 += '</tr>';
        table3 += '</thead>';
        w = window.open();
        w.document.write(table3+tablaI);
        w.document.close();
        w.print();
        $("#espImp").hide();
    }

    generarExcel = function (e) {
        var tablaI = $("#tablaBasica").html();
        var juzgado = $("#hiddenAdscripcion").val().toUpperCase();
        var table3 = '';
        table3 += ' <center><table style="border-collapse:collapse;" class="Arial11">';
        table3 += ' <thead style="table-header-group"><tr>';
        table3 += ' <th> </th>';
        table3 += ' <th class="esc"><img src="http://electronico.pjedomex.gob.mx/electronico/vistas/img/EscudoEstadoMexico2.png" style="width:80px"></td>';
        table3 += ' <th class="tit" colspan="2"><h3>GOBIERNO DEL ESTADO DE M&Eacute;XICO<br>PODER JUDICIAL<br>'+juzgado+'<br><br>LIBRO DE REGISTRO DE CEDULAS PROFESIONALES</h3> </td> ';
        table3 += ' <th> </th>';

        table3 += '<tr id="cabeceraB">';
        table3 += '<th width="3%" align="center">NO.</th>';
        table3 += '<th width="5%" align="center">NO. DE REGISTRO</th>';
        table3 += '<th width="25%" align="center">NOMBRE</th>';
        table3 += '<th width="15%" align="center">CEDULA</th>';
        table3 += '<th width="20%" align="center">FECHA REGISTRO</th>';
        table3 += '</tr>';
        table3 += '</thead>';
       
        $("#tablaBasica").html(table3+tablaI);
        $("#cabeceraB th").css("border","solid 1px");
        $("#cabeceraB th").css("text-align","center");
       
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
        var table_div = document.getElementById('tablaBasica');
        console.log(table_div);
        var table_html = table_div.outerHTML.replace(/ /g, '%20');
        console.log(table_html);

        a.href = data_type + ' ' + table_html;
        a.download = 'Hoja' + postfix + '.xls';
        var click_ev = document.createEvent("MouseEvents");
        click_ev.initEvent("click", true, true);
        a.dispatchEvent(click_ev);
    };


    $(function () {
        //setfechas();
        $("#txtfechaReg").val($("#hiddenFechaActual").val());
        $("#txtFechaExp").val($("#hiddenFechaActual").val());
        $("#txtFechaExp").attr('readOnly', true);
        $("#txtNumReg").attr('disabled', true);
        $("#txtfechaReg").prop('disabled', true);

        $("#txtFechaExp").datepicker({
            dateFormat: 'dd/mm/yy'
        });
        $('#txtfechaReg, #txtFechaExp').datepicker().on('changeDate', function (e) {
            $(this).datepicker('hide');
        });
    });
</script> 