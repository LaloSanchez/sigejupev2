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
<input type="hidden" id="hiddenCveRegion" value="">
<input type="hidden" id="hiddenCveDistrito" value="">
<input type="hidden" id="hiddenCveModalidad" value="">
<input type="hidden" id="hiddenCveTipoViolencia" value="">
<input type="hidden" id="hiddenVariables" value="" >
<input type="hidden" id="hiddenNivel" value="0">
<input type="hidden" id="hiddenDesRegion" value="">
<input type="hidden" id="hiddenDesDistrito" value="">
<input type="hidden" id="hiddenDesJuzgado" value="">
<input type="hidden" id="hiddenCveJuzgado" value="">
<input type="hidden" id="hiddenCveCarpeta" value="">
<input type="hidden" id="hiddenDesModalidad" value="">
<input type="hidden" id="hiddenDesTipoViolencia" value="">
<input type="hidden" id="hiddencveVictimaDeLaDelincuenciaOrganizada" value="">
<input type="hidden" id="hiddencveVictimaDeViolenciaDeGenero" value="">
<input type="hidden" id="hiddencveVictimaDeTrata" value="">
<input type="hidden" id="hiddencveVictimaDeAcoso" value="">
<input type="hidden" id="hiddenTituloReporte" value="">
<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title" id="h5titulo">                                                            
            Reporte de Causas por violencia en el Estado de M&eacute;xico.
        </h5>
    </div>
    <div  id="panelPrincipal" class="panel-body">
        <div id="divFormulario" class="form-horizontal">
            <div id="divPanelControl">
                <div class="form-group">                                                                
                    <label class="control-label col-md-4" id="lblRelationName">A&ntilde;o de la Causa</label>
                    <input type="radio" name="optradio" value="false" class="form-inline" id="checkAnio" onclick="muestraOpc(3)" >
                </div>
                <div id="divAnio" style="display:none">
                    <div class="form-group">
                        <label class="control-label col-md-4 needed" >A&ntilde;o</label>
                        <div  class=" col-md-5" >
                            <input type="text" class="form-control" id="txtAnio" placeholder="A&ntilde;o" maxlength="4">                             
                        </div>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-4" >Mes (Radicaci&oacute;n)</label>
                    <input type="radio" name="optradio" value="false" class="form-inline" id="checkMes" onclick="muestraOpc(1)" > 
                </div>
                <div class="form-group " style="display:none" id="cmbM">                                                                
                    <label class="control-label col-md-4 needed" >Mes</label>
                    <div  class=" col-md-5 " style="">
                        <select  name="cmbMes" class="form-control Relacionado " id="cmbMes">
                            <option value="0">Seleccione un mes</option>
                            <option value="1">Enero</option>
                            <option value="2">Febrero</option>
                            <option value="3">Marzo</option>
                            <option value="4">Abril</option>
                            <option value="5">Mayo</option>
                            <option value="6">Junio</option>
                            <option value="7">Julio</option>
                            <option value="8">Agosto</option>
                            <option value="9">Septiembre</option>
                            <option value="10">Octubre</option>
                            <option value="11">Noviembre</option>
                            <option value="12">Diciembre</option>
                        </select>

                    </div>
                    <label class="control-label col-md-4 needed" >A&ntilde;o</label>
                    <div  class=" col-md-5" >
                        <input type="text" class="form-control Relacionado" id="txtAnioMes" placeholder="A&ntilde;o" maxlength="4">                             
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-4" >Rango de fecha (Radicaci&oacute;n)</label>
                    <input type="radio" name="optradio" value="false" class="form-inline" id="checkRango" onclick="muestraOpc(2)"> 

                </div>
                <div id="divRangoFechas" style="display: none">
                    <div class="form-group"> 
                        <label class="control-label col-md-4 needed">Fecha Inicio:</label>
                        <div class="col-md-5">
                            <input type="text" id="txtfechaInicial" placeholder="FECHA INICIO" class="form-control datepicker"/>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4 needed">Fecha Fin:</label>
                        <div class="col-md-5">
                            <input type="text" id="txtfechaFinal" placeholder="FECHA FIN" class="form-control datepicker"/>
                        </div>
                    </div> 
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Selecciona un filtro</label>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Tipo de violencia</label>
                    <div class="col-md-5">
                        <input type="checkbox" id="TipoViolencia" class="form-inline" onclick="tipoViolencia()">
                    </div>
                </div>
                <div id="divTipoViolencia" style="display:none;">
                    <div class="form-group"> 
                        <label class="control-label col-md-4"></label>
                        <div class="col-md-5">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbTipoViolencia" id="cmbTipoViolencia">
                                <option value="0">Seleccione una opci&oacute;n</option>
                                <option value="1">DELINCUENCIA ORGANIZADA</option>
                                <option value="2">DE GENERO</option>
                                <option value="3">DE TRATA</option>
                                <option value="4">DE ACOSO</option>
                            </select>
                        </div>                                
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Modalidad de violencia</label>
                    <div class="col-md-5">
                        <input type="checkbox" id="ModalidadViolencia" class="form-inline" onclick="modalidadViolencia()">
                    </div>
                </div>
                <div id="divModalidadViolencia" style="display:none;">
                    <div class="form-group"> 
                        <label class="control-label col-md-4"></label>
                        <div class="col-md-5">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbModalidadViolencia" id="cmbModalidadViolencia">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                </div>
                <div class="form-group"> 
                    <label class="control-label col-md-4">Tipo de juzgado</label>
                    <div class="col-md-5">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control Relacionado" name="cmbTipoJuzgado" id="cmbTipoJuzgado">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">
                <label class="control-label col-md-4">Tipo de gr&aacute;fica</label>
                <div class="col-md-4">
                    <select name="cmbGrafica" class='form-control' id="cmbGrafica" onchange="cambiarGrafica()">
                        <option value="1">Barra</option>
                        <option value="2">Columna</option>
                        <option value="3">Punteada</option>
                    </select>
                </div>
            </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                    <div class="col-md-2 botonesAdaptar">
                    <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="consultar(true, 1);"> 
                    </div>
                    <div class="col-md-2 botonesAdaptar">
                    <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" onclick="imprimir('divTableNivel');" style="display:none;">
                    </div>
                    <div class="col-md-2 botonesAdaptar">
                    <input type="submit" class="btn btn-primary btn-adaptar" id="inputExportarPDF" value="Exportar PDF" onclick="exportar('exportarPDF', 'divTableNivel');" style="display:none;">
                    </div>
                    <div class="col-md-2 botonesAdaptar">
                    <input type="submit" class="btn btn-primary btn-adaptar" id="inputExportarExcel" value="Exportar Excel" onclick="exportar('exportarExcel', 'divTableNivel');" style="display:none;">
                    </div>
                    <div class="col-md-2 botonesAdaptar">
                    <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar();"> 
                    </div>
                </div>
            </div>
            <div class="form-group">
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
            <div id="ifr" style="display:none;" >
                <form action="../fachadas/sigejupe/reportes/exportarReportes.php" id="formIframe" method="post" target="my_frame">
                    <input type="hidden" name="contenido" id="contenidoIframe" value="" />
                    <input type="hidden" name="accion" id="accionIframe" value="" />
                    <input type="hidden" name="info" id="infoIframe" value="" />
                </form>
                <iframe name='my_frame' src='../fachadas/sigejupe/reportes/exportarReportes.php'></iframe>
            </div>
            <div class="form-group"  id="paginacion" style="display:none;">
                <div class="form-group col-xs-3"> 
                    <label class="control-label col-xs-1"></label>
                    <input type="submit" class="btn btn-primary " id="inputRegresar" value="Regresar" onclick="regresar(0, true);" > 
                    <label class="control-label" id="totalReg"></label>
                </div>
                <div id="divPaginador" class="form-group col-xs-3" >
                    <label class="control-label">P&aacute;gina:</label>
                    <select  name="cmbPaginacion" id="cmbPaginacion" onchange="paginacion(false);" >
                        <option value="1">1</option>
                    </select>
                </div>
                <div id="divPaginador" class="form-group col-xs-4" >
                    <label class="control-label">Registros por p&aacute;gina:</label>
                    <select  name="cmbNumReg" id="cmbNumReg" onchange="paginacion(true);">
                        <option value="100">100</option>
                        <option value="200">200</option>
                        <option value="300">300</option>
                        <option value="400">400</option>
                        <option value="500">500</option>
                    </select>
                </div>
            </div>
            <input type="hidden" id="datosImpresion">
            <div id="divConsulta" class="form-group" style="display: none">
                <div class="form-group col-md-4" id="divRegresar">
                    <label class="control-label col-md-1">&nbsp;</label>
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-primary " value="Regresar" onclick="regresar(0, true);"> 
                    </div>
                </div>
                <CENTER>
                    <div id="divGrafica" style="width:90%; height:500px;" >

                    </div></CENTER>
                <div id="divTableNivel" class="col-xs-8" style="width: 100%;">
                </div>
                <div class="form-group">
                    <label class="control-label col-md-10">&nbsp;</label>
                    <div class="col-md-2">
                        <label id="labelSubTotal"></label>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
    var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
    var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
    var nombre = <?php echo '"' . $_SESSION['Nombre'] . '"'; ?>;
    var createRecord = 'N';
    var readRecord = 'N';
    var updateRecord = 'N';
    var deleteRecord = 'N';
    var numeroCausas = 0;
    var grafica = null;
    
    imprimir = function (div) {
        var divContents = $("#" + div).html();
        var total = $("#labelSubTotal").html();
        divContents = divContents.replace(/label/g, 'p');
        divContents = divContents.replace(/\/label/g, '/p');
        divContents = divContents.replace(/Buscar:/g, '');
        divContents = divContents.replace(/<input type="search" class="form-control input-sm" aria-controls="tblResultadosGridAct">/g, '');
        fechaBaseDatos({datosImpresion: "fecha-hora"});
        divContents += "<p style='text-align: right;'><br>" + total + "</p>";
        divContents += "<br><br><b>Fecha y hora de consulta:</b>  " + $("#datosImpresion").val() + "<br><p><b>Generado por:</b>  " + nombre + "</p>";
        var printWindow = window.open('', '', 'height=400,width=800');
        printWindow.document.write('<html><head><title>SIGEJUPE</title>');
        printWindow.document.write('</head><body><center><img  src="img/logoPjAcuses.jpg"></center> <br><center><label ><b>Usuario:  </b>' + nombre + '</label></center><br><br>');
        printWindow.document.write(divContents);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    };
    exportar = function (accion, div) {
        var usuario = '<?php echo $_SESSION["nombre"]; ?>';
        var columnas = [];
        $.each($("#tblResultadosGridAct tr"), function () {
            $.each($(this).find('th'), function () {
                columnas.push("1");
            });
        });
        $.each($("#tblResultadosGridAct td"), function () {
            $(this).attr("id", "lng");
        });
        $.each($("#tblResultadosGridAct th"), function () {
            $(this).attr("id", "lng");
        });
        var numPixeles = 0;
        var fontSize = 10;
        if (columnas.length < 7) {
            numPixeles = (700 / columnas.length);
        } else if (columnas.length < 12) {
            numPixeles = (900 / columnas.length);
            fontSize = 9;
        } else {
            $.each($("#tblResultadosGridAct td"), function () {
                if ($(this).html().length > 30) {
                    $(this).attr("id", "os");
                } else {
                    $(this).removeAttr("id");
                }
            });
            fontSize = 8;
            numPixeles = (920 / columnas.length);
        }
        var contenido = $("#" + div).html();
        contenido = contenido.replace(/id="encabezado"/g, 'style="text-align:center;"');
        contenido = contenido.replace('width="100%"', '');
        var nombreArchivo = "REPORTE_CAUSAS_POR_VIOLENCIA";
        var tituloReporte = titulos();
        var total = $("#labelSubTotal").html();
        contenido = contenido.replace(/width/g, '  ');
        contenido = contenido.replace(/Buscar:/g, '');
        contenido = contenido.replace(/onclick="(.*?)":/g, '');
        contenido = contenido.replace(/,/g, ', ');
        contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px; font-size:' + fontSize + 'pt;"');
        contenido = contenido.replace(/id="os"/g, 'style="width:100px;"');
        contenido = contenido.replace(/<center>/g, '');
        contenido = contenido.replace(/<\/center>/g, '');
        contenido = contenido.replace(/<input aria-controls="tblResultadosGridAct" class="form-control input-sm" type="search">/g, '');
        $("#contenidoIframe").val(contenido);
        $("#accionIframe").val(accion);
        $("#infoIframe").val(usuario + "&@" + tituloReporte + "&@" + nombreArchivo + "&@" + total + "&@" + $("#bor").html() + "&@" + $("#datosImpresion").val());
        $("#divAlertInfo").html("Generando Archivo");
        $("#divAlertInfo").show("slide");
        setTimeAlert("divAlertInfo");
        $("#formIframe").submit();
    };
    limpiar = function () {
        $("#divRegresar").hide();
        $('#checkMes').removeAttr("checked");
        $('#checkAnio').removeAttr("checked");
        $('#checkRango').removeAttr("checked");
        $("#ModalidadViolencia").prop("disabled", false);
        $('#checkMes').val("false");
        $('#checkAnio').val("false");
        $('#checkRango').val("false");
        $('#cmbM').hide();
        $('#inputImprimir').hide();
        $("#inputExportarPDF").hide();
        $("#inputExportarExcel").hide();
        $('#divRangoFechas').hide();
        $('#divAnio').hide();
        $("#txtAnio").val("");
        $("#txtAnioMes").val("");
        $("#cmbMes").val(0);
        $("#txtfechaInicial").val("");
        $("#txtfechaFinal").val("");
        $("#cmbTipoViolencia").val(0);
        $("#divTipoViolencia").hide();
        $("#TipoViolencia").prop("checked", "");
        $("#idEdad").prop("checked", "");
        $("#cmbModalidadViolencia").val(0);
        $("#divModalidadViolencia").hide();
        $("#ModalidadViolencia").prop("checked", "");
        $("#TipoViolencia").prop("checked", true);
        $("#TipoViolencia").prop("disabled", true);
        $("#divTipoViolencia").show();
        $("#cmbTipoJuzgado").val(0);
        $("#labelSubTotal").text("");
        $("#divGrafica").html("");
        $("#divConsulta").hide();
        $("#cmbGrafica").val(1);
        $("#divGrafica").hide();
        $("#divTableNivel").html("");
        $("#paginacion").hide();
        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Reporte de Causas por violencia en el Estado de M&eacute;xico.</span>");
    };
    tipoViolencia = function () {
        if ($("#TipoViolencia").is(':checked')) {
            $("#TipoViolencia").prop("disabled", true);
            $("#ModalidadViolencia").prop("disabled", false);
            $("#divTipoViolencia").show();
            $("#ModalidadViolencia").prop("checked", "");
            $("#divModalidadViolencia").hide();
            $("#cmbModalidadViolencia").val(0);
        } else {
            $("#divTipoViolencia").hide();
            $("#cmbTipoViolencia").val(0);
        }
    };
    modalidadViolencia = function () {
        if ($("#ModalidadViolencia").is(':checked')) {
            $("#ModalidadViolencia").prop("disabled", true);
            $("#TipoViolencia").prop("disabled", false);
            $("#divModalidadViolencia").show();
            $("#TipoViolencia").prop("checked", "");
            $("#divTipoViolencia").hide();
            $("#cmbTipoViolencia").val(0);
        } else {
            $("#divModalidadViolencia").hide();
            $("#cmbModalidadViolencia").val(0);
        }
    };
    filtro = function () {
        var strDatos = "";
        if ($("#txtAnio").val() != "") {
            strDatos += "&anio=" + $("#txtAnio").val();
        }
        if ($("#cmbMes").val() != 0) {
            strDatos += "&mes=" + $("#cmbMes").val();
        }
        if ($("#txtAnioMes").val() != "") {
            strDatos += "&anioMes=" + $("#txtAnioMes").val();
        }
        if ($("#txtfechaInicial").val() != "") {
            strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
        }
        if ($("#txtfechaFinal").val() != "") {
            strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
        }
        if ($("#cmbTipoViolencia").val() == 0 && $("#hiddenNivel").val() == 1) {
            strDatos += "&cveTipoViolencia=0";
        } else {
            if ($("#cmbTipoViolencia").val() != 0) {
                strDatos += "&cveTipoViolencia=" + $("#cmbTipoViolencia").val();
            } else {
                strDatos += "&cveTipoViolencia=" + $("#hiddenCveTipoViolencia").val();
            }
        }
        if ($("#ModalidadViolencia").is(':checked')) {
            strDatos += "&filtroMV=true";
        }
        if ($("#TipoViolencia").is(':checked')) {
            strDatos += "&filtroTV=true";
        }
        if ($("#cmbModalidadViolencia").val() == 0 && $("#hiddenNivel").val() == 1) {
            strDatos += "&cveModalidad=0";
        } else {
            if ($("#cmbModalidadViolencia").val() != 0) {
                strDatos += "&cveModalidad=" + $("#cmbModalidadViolencia").val();
            } else {
                strDatos += "&cveModalidad=" + $("#hiddenCveModalidad").val();
            }
        }
        if ($("#cmbTipoJuzgado").val() != 0) {
            strDatos += "&cveTipoJuzgado=" + $("#cmbTipoJuzgado").val();
        }
        return strDatos;
    };
    fechaMySQLaNormal = function (fecha) {
        var fechaHora = fecha.split(" ");
        var vecFecha = fechaHora[0].split("-");
        var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
        fechaHora =fechaHora[1].split(":");
        fechaHora =fechaHora[0]+":"+fechaHora[1];
        return fechaNormal + " " + fechaHora;
    };
    etiquetas = function () {
        var etiqueta = "";
        if ($("#ModalidadViolencia").is(':checked')) {
            etiqueta += " por Modalidad de Violencia ";
        }
        if ($("#TipoViolencia").is(':checked')) {
            etiqueta += " por Tipo de Violencia ";
        }
        return etiqueta;
    };
    titulos = function () {
        var etiqueta = etiquetas();
        var titulo = "Reporte de Causas " + etiqueta;
        if ($("#txtAnio").val() != "") {
            titulo += " en el A\u00f1o " + $("#txtAnio").val();
        }
        if ($("#cmbMes").val() != 0 && $("#txtAnioMes").val() != "") {
            titulo += " en el mes de " + obtenerMes($("#cmbMes").val()) + " de " + $("#txtAnioMes").val();
        }
        if ($("#txtfechaInicial").val() != "" && $("#txtfechaFinal").val() != "") {
            titulo += " de " + $("#txtfechaInicial").val() + " a " + $("#txtfechaFinal").val();
        }
        titulo += " en el Estado de M\u00e9xico.";
        return titulo;
    };
    obtenerMes = function (numMes) {
        var mes = "";
        switch (numMes) {
            case "1":
                mes = "Enero";
                break;
            case "2":
                mes = "Febrero";
                break;
            case "3":
                mes = "Marzo";
                break;
            case "4":
                mes = "Abril";
                break;
            case "5":
                mes = "Mayo";
                break;
            case "6":
                mes = "Junio";
                break;
            case "7":
                mes = "Julio";
                break;
            case "8":
                mes = "Agosto";
                break;
            case "9":
                mes = "Septiembre";
                break;
            case "10":
                mes = "Octubre";
                break;
            case "11":
                mes = "Noviembre";
                break;
            case "12":
                mes = "Diciembre";
                break;
        }
        return mes;
    };

    paginacion = function (paginar) {
        if ($("#hiddenNivel").val() > 1) {
            consultar(paginar, $("#hiddenNivel").val());
        }
    };
    gestorConsulta = function (bandera, nivel, json, i) {
        var strDatos;
        var cveTipoViolencia;
        var desTipoViolencia;
        if (nivel == 2) {
            if (json.resultados[i].cveModalidad != "undefined") {
                strDatos += "&cveModalidad=" + json.resultados[i].cveModalidad;
                $("#hiddenDesModalidad").val(json.resultados[i].desModalidad);
                $("#hiddenCveModalidad").val(json.resultados[i].cveModalidad);
            }
            if (json.resultados[i].TipoViolencia != "undefined") {
                if (json.resultados[i].TipoViolencia == "DO" || $("#cmbTipoViolencia").val() == 1) {
                    strDatos += "&cveTipoViolencia=1";
                    strDatos += "&cveVictimaDeLaDelincuenciaOrganizada=1";
                    $("#hiddencveVictimaDeLaDelincuenciaOrganizada").val(1);
                    cveTipoViolencia = 1;
                    desTipoViolencia = "DELINCUENCIA ORGANIZADA";
                } else if (json.resultados[i].TipoViolencia == "DG" || $("#cmbTipoViolencia").val() == 2) {
                    strDatos += "&cveTipoViolencia=2";
                    strDatos += "&cveVictimaDeViolenciaDeGenero=2";
                    $("#hiddencveVictimaDeViolenciaDeGenero").val(2);
                    cveTipoViolencia = 2;
                    desTipoViolencia = "DE GENERO";
                } else if (json.resultados[i].TipoViolencia == "DT" || $("#cmbTipoViolencia").val() == 3) {
                    strDatos += "&cveTipoViolencia=3";
                    strDatos += "&cveVictimaDeTrata=3";
                    $("#hiddencveVictimaDeTrata").val(3);
                    cveTipoViolencia = 3;
                    desTipoViolencia = "DE TRATA";
                } else if (json.resultados[i].TipoViolencia == "DA" || $("#cmbTipoViolencia").val() == 4) {
                    strDatos += "&cveTipoViolencia=4";
                    strDatos += "&cveVictimaDeAcoso=4";
                    $("#hiddencveVictimaDeAcoso").val(4);
                    cveTipoViolencia = 4;
                    desTipoViolencia = "DE ACOSO";
                }
                $("#hiddenCveTipoViolencia").val(cveTipoViolencia);
                $("#hiddenDesTipoViolencia").val(desTipoViolencia);
            }
        }
        if (nivel == 3) {
            if ($("#hiddenCveModalidad").val() != "") {
                strDatos += "&cveModalidad=" + $("#hiddenCveModalidad").val();
            } else {
                strDatos += "&cveTipoViolencia=" + $("#hiddenCveTipoViolencia").val();
            }
            strDatos = "&cveRegion=" + json.resultados[i].cveRegion;
            $("#hiddenDesRegion").val(json.resultados[i].desRegion);
            $("#hiddenCveRegion").val(json.resultados[i].cveRegion);
        }
        if (nivel == 4) {
            if ($("#hiddenCveModalidad").val() != "") {
                strDatos += "&cveModalidad=" + $("#hiddenCveModalidad").val();
            } else {
                strDatos += "&cveTipoViolencia=" + $("#hiddenCveTipoViolencia").val();
            }
            strDatos = "&cveDistrito=" + json.resultados[i].cveDistrito;
            $("#hiddenDesDistrito").val(json.resultados[i].desDistrito);
            $("#hiddenCveDistrito").val(json.resultados[i].cveDistrito);
        }
        if (nivel == 5) {
            strDatos += "&cveRegion=" + json.resultados[i].cveRegion;
            strDatos += "&cveDistrito=" + json.resultados[i].cveDistrito;
            strDatos += "&cveJuzgado=" + json.resultados[i].cveJuzgado;
        }
        if (nivel == 6) {
            if (json.resultados[i].cveModalidad != "undefined") {
                strDatos += "&cveModalidad=" + json.resultados[i].cveModalidad;
            }
            if (json.resultados[i].TipoViolencia != "undefined") {
                if (json.resultados[i].TipoViolencia == "DO" || $("#cmbTipoViolencia").val() == 1) {
                    strDatos += "&cveTipoViolencia=1";
                    cveTipoViolencia = 1;
                    desTipoViolencia = "DELINCUENCIA ORGANIZADA";
                } else if (json.resultados[i].TipoViolencia == "DG" || $("#cmbTipoViolencia").val() == 2) {
                    strDatos += "&cveTipoViolencia=2";
                    cveTipoViolencia = 2;
                    desTipoViolencia = "DE GENERO";
                } else if (json.resultados[i].TipoViolencia == "DT" || $("#cmbTipoViolencia").val() == 3) {
                    strDatos += "&cveTipoViolencia=3";
                    cveTipoViolencia = 3;
                    desTipoViolencia = "DE TRATA";
                } else if (json.resultados[i].TipoViolencia == "DA" || $("#cmbTipoViolencia").val() == 4) {
                    strDatos += "&cveTipoViolencia=4";
                    cveTipoViolencia = 4;
                    desTipoViolencia = "DE ACOSO";
                }
            }
            strDatos += "&cveRegion=" + json.resultados[i].cveRegion;
            strDatos += "&cveDistrito=" + json.resultados[i].cveDistrito;
            strDatos += "&cveJuzgado=" + json.resultados[i].cveJuzgado;
            strDatos += "&idCarpetaJudicial=" + json.resultados[i].idCarpetaJudicial;
            strDatos += "&detalles=detalle";
            $("#hiddenCveRegion").val(json.resultados[i].cveRegion);
            $("#hiddenCveDistrito").val(json.resultados[i].cveDistrito);
            $("#hiddenCveJuzgado").val(json.resultados[i].cveJuzgado);
            $("#hiddenCveCarpeta").val(json.resultados[i].idCarpetaJudicial);
        }
        $("#hiddenVariables").val(strDatos);
        consultar(bandera, nivel);
    };
    gestorNivel = function (json, bandera) {
        graficar(json);
        var indice = $("#cmbPaginacion").val();
        indice = (indice - 1) * $("#cmbNumReg").val();
        var titulo = titulos();
        var titulo1 = "<br id='bo'><label style='text-align:center;width: 100%; font-size:12pt;'>" + titulo + " </label></br>";
        var titulo2 = "";
        var table = "<table id='tblResultadosGridAct' width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered table-responsive' >";
        table += "<thead>";
        var jsonDatos = JSON.stringify(json);
        var aux = "";
        var subTotal = 0;
        $("#labelSubTotal").text("");
        var tiposViolencia = "";
        switch ($("#hiddenNivel").val()) {
            case "1":
                if ($("#ModalidadViolencia").is(':checked')) {
                    table += "<th>N&uacute;m.</th><th>Modalidad de Violencia</th>";
                }
                if ($("#TipoViolencia").is(':checked')) {
                    table += "<th>N&uacute;m.</th><th>Tipo de Violencia</th>";
                }
                table += "<th>Estado</th><th>SubTotal</th>";
                table += "</thead><tbody>";
                for (var i = 0; i < json.totalCount; i++) {
                    if (json.resultados[i].TipoViolencia || json.resultados[i].desModalidad || $("#cmbTipoViolencia").val() != 0) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 2 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        if ($("#ModalidadViolencia").is(":checked")) {
                            table += "<td>" + json.resultados[i].desModalidad + "</td>";
                        }
                        if ($("#TipoViolencia").is(":checked")) {
                            if ($("#cmbTipoViolencia").val() == 0) {
                                if (json.resultados[i].TipoViolencia == "DO") {
                                    table += "<td>DELINCUENCIA ORGANIZADA</td>";
                                } else if (json.resultados[i].TipoViolencia == "DG") {
                                    table += "<td>DE GENERO</td>";
                                } else if (json.resultados[i].TipoViolencia == "DT") {
                                    table += "<td>DE TRATA</td>";
                                } else if (json.resultados[i].TipoViolencia == "DA") {
                                    table += "<td>DE ACOSO</td>";
                                }
                            } else if ($("#cmbTipoViolencia").val() == 1) {
                                table += "<td>DELINCUENCIA ORGANIZADA</td>";
                            } else if ($("#cmbTipoViolencia").val() == 2) {
                                table += "<td>DE GENERO</td>";
                            } else if ($("#cmbTipoViolencia").val() == 3) {
                                table += "<td>DE TRATA</td>";
                            } else if ($("#cmbTipoViolencia").val() == 4) {
                                table += "<td>DE ACOSO</td>";
                            }
                        }
                        table += "<td>M\u00c9XICO</td>";
                        if (json.totalCount > 0) {
                            if ($("#ModalidadViolencia").is(":checked")) {
                                table += "<td>" + json.resultados[i].totalCount + "</td>";
                                subTotal = subTotal - json.resultados[i].totalCount;
                            }
                            if ($("#TipoViolencia").is(":checked")) {
                                if ($("#cmbTipoViolencia").val() == 0) {
                                    table += "<td>" + json.resultados[i].Total + "</td>";
                                    subTotal = subTotal - json.resultados[i].Total;
                                    //subTotal = -(numeroCausas);
                                } else {
                                    table += "<td>" + json.resultados[i].totalCount + "</td>";
                                    subTotal = subTotal - json.resultados[i].totalCount;
                                }
                            }
                        } else {
                            table += "<td>0</td>";
                        }
                        aux = "";
                        table += "</tr> ";
                    }
                }
                subTotal = -subTotal;
//                $("#labelSubTotal").text("SubTotal: " + subTotal);
                break;
            case "2":
                titulo2 += "<br><label><b>Estado: </b>M\u00c9XICO</label><br>";
                $("#hiddenTituloReporte").val(" Estado: Mexico");
                table += "<th>N&uacute;m.</th><th>Regi\u00f3n</th>";
                //table += "<th>N&uacute;m.</th><th>Estado</th><th>Regi\u00f3n</th>";
                if ($("#ModalidadViolencia").is(":checked")) {
                    table += "<th>Modalidad de violencia</th>";
                }
                if ($("#TipoViolencia").is(':checked')) {
                    table += "<th>Tipo de Violencia</th>";
                }
                table += "<th>SubTotal</th>";
                table += "</tr></thead><tbody>";
                for (var i = 0; i < json.totalCount; i++) {
                    if ($("#hiddenCveTipoViolencia").val() != "" || json.resultados[i].TipoViolencia || json.resultados[i].desModalidad || $("#cmbTipoViolencia").val() != 0) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 3 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
//                        table += "<td>M\u00c9XICO</td>";
                        table += "<td>" + json.resultados[i].desRegion + "</td>";
                        if ($("#ModalidadViolencia").is(":checked")) {
                            table += "<td>" + json.resultados[i].desModalidad + "</td>";
                        }
                        if ($("#TipoViolencia").is(":checked")) {
                            table += "<td>" + $("#hiddenDesTipoViolencia").val() + "</td>";
                        }
                        if (json.totalCount > 0) {
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                            subTotal = subTotal - json.resultados[i].totalCount;
                        } else {
                            table += "<td>0</td>";
                        }
                        table += "</tr> ";
                        aux = "";
                    }
                }
                subTotal = -subTotal;
                $("#labelSubTotal").text("Total: " + subTotal.toLocaleString("en-US"));
                break;
            case "3":
                titulo2 = "<br><label><b>Estado: </b>M\u00c9XICO<br><b>Regi\u00f3n: </b>" + json.resultados[0].desRegion + "</label><br>";
                $("#hiddenTituloReporte").val(" Estado: Mexico/ Region: " + json.resultados[0].desRegion);
                table += "<th>N&uacute;m</th><th>Distrito</th>";
                //table += "<th>N&uacute;m</th><th>Estado</th><th>Regi\u00f3n</th><th>Distrito</th>";
                if ($("#ModalidadViolencia").is(":checked")) {
                    table += "<th>Modalidad de violencia</th>";
                }
                if ($("#TipoViolencia").is(":checked")) {
                    table += "<th>Tipo de violencia</th>";
                }
                table += "<th>SubTotal</th>";
                table += "</tr></thead><tbody>";
                for (var i = 0; i < json.totalCount; i++) {
                    if ($("#hiddenCveTipoViolencia").val() != "" || json.resultados[i].TipoViolencia || json.resultados[i].desModalidad || $("#cmbTipoViolencia").val() != 0) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 4 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
//                        table += "<td>M\u00c9XICO</td>";
//                        table += "<td>" + json.resultados[i].desRegion + "</td>";
                        table += "<td>" + json.resultados[i].desDistrito + "</td>";
                        if ($("#ModalidadViolencia").is(":checked")) {
                            table += "<td>" + json.resultados[i].desModalidad + "</td>";
                        }
                        if ($("#TipoViolencia").is(":checked")) {
                            table += "<td>" + $("#hiddenDesTipoViolencia").val() + "</td>";
                        }
                        if (json.totalCount > 0) {
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                            subTotal = subTotal - json.resultados[i].totalCount;
                        } else {
                            table += "<td>0</td>";
                        }
                        table += "</tr> ";
                        aux = "";
                    }
                }
                subTotal = -subTotal;
                $("#labelSubTotal").text("Total: " + subTotal.toLocaleString("en-US"));
                break;
            case "4":
                titulo2 = "<br><label><b>Estado: </b>M\u00c9XICO<br><b>Regi\u00f3n: </b>" + json.resultados[0].desRegion + "<br><b>Distrito: </b>" + json.resultados[0].desDistrito + "</label><br>";
                $("#hiddenTituloReporte").val(" Estado: Mexico/ Region: " + json.resultados[0].desRegion + "/ Distrito: " + json.resultados[0].desDistrito);
                table += "<th>N&uacute;m.</th><th>Juzgado</th>";
                //table += "<th>N&uacute;m.</th><th>Estado</th><th>Regi\u00f3n</th><th>Distrito</th><th>Juzgado</th>";
                if ($("#ModalidadViolencia").is(":checked")) {
                    table += "<th>Modalidad de violencia</th>";
                }
                if ($("#TipoViolencia").is(":checked")) {
                    table += "<th>Tipo de violencia</th>";
                }
                table += "<th>SubTotal</th>";
                table += "</tr></thead><tbody>";
                for (var i = 0; i < json.totalCount; i++) {
                    if ($("#hiddenCveTipoViolencia").val() != "" || json.resultados[i].TipoViolencia || json.resultados[i].desModalidad || $("#cmbTipoViolencia").val() != 0) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 5 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
//                        table += "<td>M\u00c9XICO</td>";
//                        table += "<td>" + json.resultados[i].desRegion + "</td>";
//                        table += "<td>" + json.resultados[i].desDistrito + "</td>";
                        table += "<td>" + json.resultados[i].desJuzgado + "</td>";
                        if ($("#ModalidadViolencia").is(":checked")) {
                            table += "<td>" + json.resultados[i].desModalidad + "</td>";
                        }
                        if ($("#TipoViolencia").is(":checked")) {
                            table += "<td>" + $("#hiddenDesTipoViolencia").val() + "</td>";
                        }
                        if (json.totalCount > 0) {
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                            subTotal = subTotal - json.resultados[i].totalCount;
                        } else {
                            table += "<td>0</td>";
                        }
                        table += "</tr> ";
                        aux = "";
                    }
                }
                subTotal = -subTotal;
                $("#labelSubTotal").text("Total: " + subTotal.toLocaleString("en-US"));
                break;
            case "5":
                titulo2 = "<br><label><b>Estado: </b>M\u00c9XICO<br><b>Regi\u00f3n: </b>" + json.resultados[0].desRegion + "<br><b>Distrito: </b>" + json.resultados[0].desDistrito + "<br><b>Juzgado: </b>" + json.resultados[0].desJuzgado + "</label><br>";
                $("#hiddenTituloReporte").val(" Estado: Mexico/ Region: " + json.resultados[0].desRegion + "/ Distrito: " + json.resultados[0].desDistrito + "/ Juzgado: " + json.resultados[0].desJuzgado);
                table += "<th>N&uacute;m.</th><th>Tipo de Juzgado</th><th>Carpeta</th>";
                //table += "<th>N&uacute;m.</th><th>Estado</th><th>Regi\u00f3n</th><th>Distrito</th><th>Juzgado</th><th>Tipo de Juzgado</th><th>Carpeta</th>";
                if ($("#ModalidadViolencia").is(':checked')) {
                    table += "<th>Modalidad de violencia</th>";
                } else {
                    table += "<th>Tipo de violencia</th>";
                }
//                table += "<th>SubTotal</th>";
                table += "</tr></thead><tbody>";
                for (var i = 0; i < json.totalCount; i++) {
                    if ($("#hiddenCveTipoViolencia").val() != "" || json.resultados[i].TipoViolencia || json.resultados[i].desModalidad || $("#cmbTipoViolencia").val() != 0) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 6 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td> " + (i + 1 + indice) + "</td>";
//                        table += "<td>M\u00c9XICO</td>";
//                        table += "<td>" + json.resultados[i].desRegion + "</td>";
//                        table += "<td>" + json.resultados[i].desDistrito + "</td>";
//                        table += "<td>" + json.resultados[i].desJuzgado + "</td>";
                        table += "<td>" + json.resultados[i].desTipoJuzgado + "</td>";
                        table += "<td>" + json.resultados[i].desTipoCarpeta + ": " + json.resultados[i].numero + "/" + json.resultados[i].anio + "</td>";
                        if ($("#ModalidadViolencia").is(":checked")) {
                            table += "<td>" + json.resultados[i].desModalidad + "</td>";
                        }
                        if ($("#TipoViolencia").is(":checked")) {
                            table += "<td>" + $("#hiddenDesTipoViolencia").val() + "</td>";
                        }
                        if (json.totalCount > 0) {
//                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                            subTotal = subTotal - json.resultados[i].totalCount;
                        } else {
//                            table += "<td>0</td>";
                        }
                        table += "</tr> ";
                        aux = "";
                    }
                }
                subTotal = -subTotal;
                $("#labelSubTotal").text("Total: " + subTotal.toLocaleString("en-US"));
                break;
            case "6":
                titulo2 = "<br><label><b>Estado: </b>M\u00c9XICO<br><b>Regi\u00f3n: </b>" + json.resultados[0].desRegion + "<br><b>Distrito: </b>" + json.resultados[0].desDistrito + "<br><b>Juzgado: </b>" + json.resultados[0].desJuzgado + "</label><br>";
                $("#hiddenTituloReporte").val(" Estado: Mexico/ Region: " + json.resultados[0].desRegion + "/ Distrito: " + json.resultados[0].desDistrito + "/ Juzgado: " + json.resultados[0].desJuzgado);
                table += "<th>N&uacute;m.</th><th>Tipo de Juzgado</th><th>Carpeta</th>";
//                table += "<th>N&uacute;m.</th><th>Estado</th><th>Regi\u00f3n</th><th>Distrito</th><th>Juzgado</th><th>Tipo de Juzgado</th><th>Carpeta</th>";
                table += "<th>Ofendido</th><th>Imputado</th>";
                if ($("#ModalidadViolencia").is(':checked')) {
                    table += "<th>Modalidad de violencia</th>";
                } else {
                    table += "<th>Tipo de violencia</th>";
                }
                table += "<th>Fecha de radicaci\u00f3n</th>";
                table += "</tr></thead><tbody>";
                for (var i = 0; i < json.totalCount; i++) {
                    if ($("#hiddenCveTipoViolencia").val() != "" || json.resultados[i].TipoViolencia || json.resultados[i].desModalidad || $("#cmbTipoViolencia").val() != 0) {
                        table += "<tr>";
                        table += "<td> " + (i + 1 + indice) + "</td>";
//                        table += "<td>M\u00c9XICO</td>";
//                        table += "<td>" + json.resultados[i].desRegion + "</td>";
//                        table += "<td>" + json.resultados[i].desDistrito + "</td>";
//                        table += "<td>" + json.resultados[i].desJuzgado + "</td>";
                        table += "<td>" + json.resultados[i].desTipoJuzgado + "</td>";
                        table += "<td>" + json.resultados[i].desTipoCarpeta + ": " + json.resultados[i].numero + "/" + json.resultados[i].anio + "</td>";
                        if (json.resultados[i].cveTipoPersona == 1) {
                            table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                        } else {
                            table += "<td>" + json.resultados[i].nombreMoral + "</td>";
                        }
                        if (json.resultados[i].cveTipoPersonaI == 1) {
                            table += "<td>" + json.resultados[i].nombreI + " " + json.resultados[i].paternoI + " " + json.resultados[i].maternoI + "</td>";
                        } else {
                            table += "<td>" + json.resultados[i].nombreMoralI + "</td>";
                        }
                        if ($("#ModalidadViolencia").is(':checked')) {
                            table += "<td>" + json.resultados[i].desModalidad + "</td>";
                        } else {
                            table += "<td>" + $("#hiddenDesTipoViolencia").val() + "</td>";
                        }
                        table += "<td>" + fechaMySQLaNormal(json.resultados[i].fechaRadicacion) + "</td>";
                        table += "</tr> ";
                    }
                }
                break;
        }
        table += "</tbody></table>";
        $("#divConsulta").show("slide");
        var tabla = titulo1 + "<div id='bor'>" + titulo2 + "</div>" + table;
        $("#divTableNivel").html(tabla);
        $("#tblResultadosGridAct").DataTable({
            paging: false,
//            searching: false,
//            dom: 'T<"clear">lfrtip',
//            tableTools: {
//                aButtons: [
//                    "copy",
//                    {
//                        sExtends: "collection",
//                        sButtonText: "Exportar",
//                        aButtons: ["csv", "xls", "pdf"]
//                    }
//                ]
//            }
        });
        $("#inputImprimir").show();
        $("#inputExportarPDF").show();
        $("#inputExportarExcel").show();
        if (bandera && i > 99) {
            calcularPaginas();
        }
    };
    consultar = function (bandera, nivel) {
        $("#divConsulta").hide("slide");
        $("#hiddenNivel").val(nivel);
        $("#labelSubTotal").text("");
        $("#inputImprimir").hide();
        $("#inputExportarPDF").hide();
        $("#inputExportarExcel").hide();
        if (nivel == 1) {
            $("#divRegresar").hide();
            $("#hiddenVariables").val("");
        }
        if (bandera) {
            $("#divRegresar").show();
            $("#paginacion").hide();
            $("#cmbPaginacion").val(1);
        }
        var strDatos = "accion=consultar_causasOfendidosCarpetas_Reporte";
        strDatos += "&activo=S";
        strDatos += "&paginacion=true";
        strDatos += "&cantxPag=" + $("#cmbNumReg").val();
        strDatos += "&pag=" + $("#cmbPaginacion").val();
        strDatos += "&nivel=" + nivel;
        strDatos += $("#hiddenVariables").val();
        strDatos += filtro();
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/reportes/ReporteCausasPorViolenciaFacade.Class.php",
            data: strDatos,
            async: true,
            dataType: "html",
            beforeSend: function (objeto) {
                var env;
                if (nivel == 1) {
                    if ($("#txtAnio").val() == "" && $('#checkAnio').val() == "true") {
                        $("#divAlertWarning").html("&#161;Escribe el a&#241;o!");
                        $("#divTableNivel").html("");
                        $("#paginacion").hide();
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        env = false;
                    } else if (($("#cmbMes").val() == 0 || $("#txtAnioMes").val() == "") && $('#checkMes').val() == "true") {
                        if ($("#cmbMes").val() == 0 && $("#txtAnioMes").val() == "") {
                            $("#divAlertWarning").html("&#161;Selecciona un mes y escribe un a&#241;o!");
                        } else if ($("#cmbMes").val() == 0) {
                            $("#divAlertWarning").html("&#161;Selecciona un mes!");
                        } else {
                            $("#divAlertWarning").html("&#161;Escribe un a&#241;o!");
                        }
                        $("#divTableNivel").html("");
                        $("#paginacion").hide();
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        env = false;
                    } else if (($("#txtfechaInicial").val() == "" || $("#txtfechaFinal").val() == "") && $('#checkRango').val() == "true") {
                        if ($("#txtfechaInicial").val() == "" && $("#txtfechaFinal").val() == "") {
                            $("#divAlertWarning").html("&#161;Escribe una fecha inicial y una fecha final!");
                        } else if ($("#txtfechaInicial").val() == "") {
                            $("#divAlertWarning").html("&#161;Escribe una fecha inicial!");
                        } else {
                            $("#divAlertWarning").html("&#161;Escribe una fecha final!");
                        }
                        $("#divTableNivel").html("");
                        $("#paginacion").hide();
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        env = false;
                    } else {
                        env = true;
                    }
                }
                return env;
            },
            success: function (datos) {
//                console.log(datos);
                var json = "";
                json = eval("(" + datos + ")");
                if (json.totalCount > 0) {
                    gestorNivel(json, bandera);
                    encabezado();
                } else {
                    $("#inputImprimir").hide();
                    $("#inputExportarPDF").hide();
                    $("#inputExportarExcel").hide();
                    $("#divAlertInfo").html("Sin resultados a mostrar");
                    $("#divTableNivel").html("");
                    $("#paginacion").hide();
                    $("#divAlertInfo").show("slide");
                    setTimeAlert("divAlertInfo");
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    };
    numCausas = function () {
        $("#labelSubTotal").text("");
        var strDatos = "accion=numCausas";
        strDatos += filtro();
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/reportes/ReporteCausasPorViolenciaFacade.Class.php",
            data: strDatos,
            async: true,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
//                alert(datos);
                var json = "";
                json = eval("(" + datos + ")");
                numeroCausas = json.resultados[0].numCausas;
                if (json.resultados[0].numCausas && $("#TipoViolencia").is(":checked") && $("#cmbTipoViolencia").val() == 0) {
//                    $("#labelSubTotal").text("SubTotal: " + json.resultados[0].numCausas);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    };
    
    numeroDecimalOEntero = function (numero, bandera) {
        if ((numero == null) || (numero == "")) {
            return 0;
        }
        if (bandera) {
            return horaMySQLaNormal(numero);
        }
        var num = parseInt(numero);
        
        return num;
    };
        
        graficar = function (json) {
            $("#divGrafica").hide();
        var categorias = [];
        var series = [];
        var graficar = true;
        var nombreX = "";
        var nombreY = "U";//mensaje de la metrica
        var subTotal = 0;
        switch ($("#hiddenNivel").val()) {
            case "1":
                nombreX = "M\u00C9XICO";
                for (var i = 0; i < json.totalCount; i++) {
                        
                        
                         if($("#checkClasDelitos").is(":checked") || $("#checkCarEjecu").is(":checked")){
                            graficar = false;
                        }else if($("#TipoViolencia").is(":checked")){
                            if ($("#cmbTipoViolencia").val() == 0) {
                            if (json.resultados[i].TipoViolencia == "DO") {
                                    categorias[i] = "DELINCUENCIA ORGANIZADA";
                                } else if (json.resultados[i].TipoViolencia == "DG") {
                                    categorias[i] = "DE GENERO";
                                } else if (json.resultados[i].TipoViolencia == "DT") {
                                    categorias[i] = "DE TRATA";
                                } else if (json.resultados[i].TipoViolencia == "DA") {
                                    categorias[i] = "DE ACOSO";
                                }
                                } else if ($("#cmbTipoViolencia").val() == 1) {
                                categorias[i] = "DELINCUENCIA ORGANIZADA";
                            } else if ($("#cmbTipoViolencia").val() == 2) {
                                categorias[i] = "DE GENERO";
                            } else if ($("#cmbTipoViolencia").val() == 3) {
                                categorias[i] = "DE TRATA";
                            } else if ($("#cmbTipoViolencia").val() == 4) {
                                categorias[i] = "DE ACOSO";
                            }
                        }else if($("#ModalidadViolencia").is(":checked")){
                            categorias[i] = json.resultados[i].desModalidad;
                        }else{
                            categorias[i] = "CAUSAS";
                        }
                         if ($("#cmbTipoViolencia").val() == 0) {
                        if($("#TipoViolencia").is(":checked")){
                            series[i] = parseInt(json.resultados[i].Total.replace(",",""));
                        }else if($("#ModalidadViolencia").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }else{
                           series[i] = parseInt(json.resultados[i].Total.replace(",",""));
                        }
                        } else if ($("#cmbTipoViolencia").val() != 0) {
                                series[i] = parseInt(json.resultados[i].TotalCount.replace(",",""));
                            }
                    }
                    
                
                break;
            case "2":
                nombreX = "REGIONES";
                 for (var i = 0; i < json.totalCount; i++) {
                        categorias[i] = json.resultados[i].desRegion;
                        if($("#TipoViolencia").is(":checked")){
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }else if($("#ModalidadViolencia").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }else{
                           series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }
                    }
                
                break;
            case "3":
                nombreX = "DISTRITOS";
                 for (var i = 0; i < json.totalCount; i++) {
                        categorias[i] = json.resultados[i].desDistrito;
                       if($("#TipoViolencia").is(":checked")){
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }else if($("#ModalidadViolencia").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }else{
                           series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }
                    }
                
                break;
            case "4":
                nombreX = "JUZGADOS";
                for (var i = 0; i < json.totalCount; i++) {
                        categorias[i] = json.resultados[i].desJuzgado;
                       if($("#TipoViolencia").is(":checked")){
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }else if($("#ModalidadViolencia").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }else{
                           series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }
                    }
                break;
            case "5":
               $("#divGrafica").html("");
               $("#divGrafica").hide();
                break;
        }
        if ($("#hiddenNivel").val() < 5 && graficar ) {
            $("#divGrafica").show();
            preGraficar(categorias, series, nombreX, nombreY, json);
        } else {
            $("#divGrafica").html("");
            $("#divGrafica").hide();
        }
    };
    obtenerTipoGrafica = function () {
        switch ($("#cmbGrafica").val()) {
            case "1":
                return "bar";
            case "2":
                return "column";
            case "3":
                return "";
        }
    };
    preGraficar = function (categorias, series, nombreX, nombreY, json) {
        $("#divGrafica").html("Espere, Cargando gr\u00E1fica...");
        var tipoGrafica = 'bar';
        var xGrafica = 0;
        var yGrafica = 0;
        var totalBarras = json.totalCount - 1;
        var introspeccion = true;
//        if (parseInt(json.introspeccion) == parseInt($("#hiddenNivel").val())) {
//            introspeccion = false;
//        }
        if (totalBarras > 12) {
            totalBarras = 12;
        }
        if (grafica != null) {
            tipoGrafica = grafica.chart.type;
        } else {
            grafica = null;
            tipoGrafica = obtenerTipoGrafica();
        }
        if (tipoGrafica == 'column' || tipoGrafica == '') {
            xGrafica = 750;
            yGrafica = 1100;

        }
        if (tipoGrafica == 'bar') {
            xGrafica = 750;
            yGrafica = 60 * (json.totalCount - 1);
        }

        var options = {
            chart: {
                type: tipoGrafica,
                renderTo: 'divGrafica',
                events: {
                    beforePrint: function () {
                        this.xAxis[0].options.max = json.totalCount - 1;
                        this.oldhasUserSize = this.hasUserSize;
                        this.resetParams = [this.chartWidth, this.chartHeight, false];
                        this.setSize(xGrafica, yGrafica, false);
                    },
                    afterPrint: function () {
                        this.xAxis[0].options.max = totalBarras;
                        this.setSize.apply(this, this.resetParams);
                        this.hasUserSize = this.oldhasUserSize;
                    }
                }
            },
            exporting: {
                filename: 'INDICADOR',
                buttons: {
                    contextButton: {
                        menuItems: [{
                                textKey: 'printChart',
                                onclick: function () {
                                    this.print();
                                }
                            }, {
                                textKey: 'downloadPNG',
                                onclick: function () {
                                    this.exportChart({type: 'image/png'}, {
                                        xAxis: {
                                            max: json.totalCount - 1
                                        }
                                    });
                                }
                            }, {
                                textKey: 'downloadJPEG',
                                onclick: function () {
                                    this.exportChart({type: 'image/jpeg'}, {
                                        xAxis: {
                                            max: json.totalCount - 1
                                        }
                                    });
                                }
                            }, {
                                textKey: 'downloadSVG',
                                onclick: function () {
                                    this.exportChart({type: 'image/svg+xml'}, {
                                        xAxis: {
                                            max: json.totalCount - 1
                                        }
                                    });
                                }
                            }, {
                                textKey: 'downloadPDF',
                                onclick: function () {
                                    this.exportChart({type: 'application/pdf'}, {
                                        xAxis: {
                                            max: json.totalCount - 1
                                        }
                                    });
                                }
                            }
                        ]
                    }
                }
            },
            credits: {
                enabled: false
            },
            title: {
                text: ""
            },
            subtitle: {
                text: $("#idLabelDescripcion").text()
            },
            lang: {
                printChart: 'Imprimir',
                downloadPNG: 'Descargar Imagen PNG',
                downloadJPEG: 'Descargar Imagen JPEG',
                downloadPDF: 'Descargar PDF',
                downloadSVG: 'Descargar SVG Imagen Vectorial',
                contextButtonTitle: 'Men\u00FA Exportar'
            },
            xAxis: {
                title: {text: nombreX},
                categories: [{}],
                max: totalBarras,
                scrollbar: {enabled: true}
            },
            tooltip: {
                formatter: function () {
                    if (this.x) {
                        return "<span style='color{point.color}'>" + this.x + "</span><br><b>" + (this.y).toLocaleString("en-US") + " " + nombreY + "</b>";
                    } else {
                        return "<b>" + (this.y).toLocaleString("en-US") + " " + nombreY + "</b>";
                    }
                }
            },
            yAxis: {
                title: {text: nombreY}
            },
            legend: {enabled: false},
            series: [{colorByPoint: true}],
            dataLabels: {
                enabled: true,
                formatter: function () {
                    return (this.y).toLocaleString("en-US");
                }, style: {
                    color: "#FFFFF",
                    fontWeight: 'bold',
                    textShadow: '0px 0px 3px black'
                }
            },
            navigation: {
                menuItemStyle: {
                    padding: '3px 15px'
                },
                menuItemHoverStyle: {
                    background: '#df3338',
                    color: 'white'
                },
                buttonOptions: {
                    symbolFille: 'white',
                    symbolStroke: 'white',
                    theme: {
                        'stroke-whidth': 1,
                        stroke: '#881518',
                        fill: '#881518',
                        r: 0,
                        states: {
                            hover: {
                                stroke: '#df3338',
                                fill: '#df3338'
                            },
                            select: {
                                stroke: '#881518',
                                fill: '#df3338'
                            }
                        }
                    }
                }
            },
            pointPadding: 0
        };
        options.xAxis.categories = categorias;
        options.series[0].data = series;
        options.series.colorByPoint = true;
        options.series[0].dataLabels = {enabled: true, align: 'center', inside: true, formatter: function () {
                return (this.y).toLocaleString("en-US")/* + " " + nombreY*/;
            }, style: {color: "white", fontWeight: 'bold', fontSize: '12px', textShadow: '-2px 0 3px black', fill: 'white'}}
        options.series[0].events = {click: function (evt) {
                if ($("#hiddenNivel").val() < 5) {
                    if (introspeccion) {
                        gestorConsulta(true, parseInt($("#hiddenNivel").val()) + 1, json, evt.point.index);
                    }
                }
            }};
        var chart = new Highcharts.Chart(options);
        grafica = options;
        var printUpdate = function () {

            $("#divGrafica").chart.reflow();
        };
        if (window.matchMedia) {
            var mediaQueryList = window.matchMedia('printChart');
            mediaQueryList.addListener(function (mql) {
                printUpdate();
            });
        }
    };
    ajustarGrafica = function (chart, cantRegistros) {
        switch ($("#cmbGrafica").val()) {
            case "1":
                if ((cantRegistros > 10) && (cantRegistros < 23)) {
                    chart.setSize(600, 500, false);
                } else {
                    if ((cantRegistros > 22) && (cantRegistros < 45)) {
                        chart.setSize(600 + cantRegistros * 10, 600, false);
                    }
                    if ((cantRegistros > 44) && (cantRegistros < 101)) {
                        chart.setSize(1600, 650, false);
                    }
                    if (cantRegistros > 100) {
                        chart.setSize(1600 + cantRegistros * 15, 700, false);
                    }
                }
                break;
            case "2":
                //chart.chart.type = "column";
                break;
            case "3":
                //chart.chart.type = "";
                break;
        }
    };
    cambiarGrafica = function () {
        if (grafica != null) {
            switch ($("#cmbGrafica").val()) {
                case "1":
                    grafica.chart.type = "bar";
                    break;
                case "2":
                    grafica.chart.type = "column";
                    break;
                case "3":
                    grafica.chart.type = "";
                    break;
            }
            var chart = new Highcharts.Chart(grafica);
        }
    };
    
    calcularPaginas = function () {
        $("#divRegresar").hide();
        var url = "../fachadas/sigejupe/reportes/ReporteCausasPorViolenciaFacade.Class.php";
        var strDatos = "accion=consultar_causasOfendidosCarpetas_Reporte";
        strDatos += "&nivel=" + $("#hiddenNivel").val();
        strDatos += "&activo=S";
        strDatos += "&paginacion=false";
        strDatos += "&cantxPag=" + $("#cmbNumReg").val();
        strDatos += "&pag=" + $("#cmbPaginacion").val();
        strDatos += $("#hiddenVariables").val();
        strDatos += filtro();
        $.ajax({
            type: "POST",
            url: url,
            data: strDatos,
            async: true,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var combo = "";
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.Estatus == "ok") {
                    var totalRegistros = json.resultados[0].totalCount;
                    var combo = "";
                    var numReg = $("#cmbNumReg").val();
                    $("#totalReg").text("Cantidad de Registros: " + totalRegistros);
                    if (totalRegistros / numReg < 0) {
                        combo += "<option value='" + 1 + "'>" + 1 + "</option>";
                    } else {
                        var i;
                        for (i = 0; i < totalRegistros / numReg; i++) {
                            combo += "<option value='" + (i + 1) + "'>" + (i + 1) + "</option>";
                        }
                        $("#cmbPaginacion").html(combo);
                    }
                    $("#paginacion").show();
                }
            },
            error: function (objeto, quepaso, otroobj) {
                console.log("Ocurrio un error: " + quepaso);
            }
        });
    };
    encabezado = function () {
        var mensaje = "";
        if ($("#hiddenNivel").val() == 1) {
            mensaje = " / Total";
        }
        if ($("#hiddenNivel").val() == 2) {
            mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
            mensaje += " / X Regi\u00f3n";
        }
        if ($("#hiddenNivel").val() == 3) {
            mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
            mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>X Regi&oacute;n</SPAN>";
            mensaje += " / Distrito";
        }
        if ($("#hiddenNivel").val() == 4) {
            mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
            mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>X Regi&oacute;n</SPAN>";
            mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(3,false);'>Distrito</SPAN>";
            mensaje += " / Juzgado";
        }
        if ($("#hiddenNivel").val() == 5) {
            mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
            mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>X Regi&oacute;n</SPAN>";
            mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(3,false);'>Distrito</SPAN>";
            mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(4,false);'>Juzgado</SPAN>";
        }
        if ($("#hiddenNivel").val() == 6) {
            mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
            mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>X Regi&oacute;n</SPAN>";
            mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(3,false);'>Distrito</SPAN>";
            mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(4,false);'>Juzgado</SPAN>";
            mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(5,false);'>X Carpeta</SPAN>";
            mensaje += " / Detalles";
        }
        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Reporte de Causas por violencia en el Estado de M&eacute;xico.</span>" + mensaje);
    };
    regresar = function (nivel, bandera) {
        if (bandera == 1) {
            nivel = $("#hiddenNivel").val() - 1;
        }
        $("#cmbNumReg").val(100);
        $("#cmbPaginacion").val(1);
        var strDatos = "";
        //limpiar();
        if (nivel == 0) {
            $("#h5titulo").html("Reporte de Causas por violencia en el Estado de M&eacute;xico.");
            $("#divConsulta").hide("slide");
            $("#paginacion").hide();
            $("#inputImprimir").hide();
            $("#inputExportarPDF").hide();
            $("#inputExportarExcel").hide();
        } else {
            if (nivel == 1) {
                $("#paginacion").hide();
            }
            if (nivel == 2) {
                if ($("#hiddenCveModalidad").val()) {
                    strDatos += "&cveModalidad=" + $("#hiddenCveModalidad").val();
                }
                if ($("#hiddenCveTipoViolencia").val()) {
                    strDatos += "&cveTipoViolencia=" + $("#hiddenCveTipoViolencia").val();
                }
            }
            if (nivel == 3) {
                strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
            }
            if (nivel == 4) {
                strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                strDatos += "&cveDistrito=" + $("#hiddenCveDistrito").val();
            }
            if (nivel == 5) {
                strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                strDatos += "&cveDistrito=" + $("#hiddenCveDistrito").val();
                strDatos += "&cveJuzgado=" + $("#hiddenCveJuzgado").val();
            }
            if (nivel == 6) {
                strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                strDatos += "&cveDistrito=" + $("#hiddenCveDistrito").val();
                strDatos += "&cveJuzgado=" + $("#hiddenCveJuzgado").val();
                strDatos += "&cveCarpeta=" + $("#hiddenCveCarpeta").val();
            }
        }
        $("#hiddenVariables").val(strDatos);
        if (nivel > 0) {
            consultar(true, nivel);
        }
    };
    cargarModalidadViolencia = function () {
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/modalidades/ModalidadesFacade.Class.php",
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
                        $("#cmbModalidadViolencia").append($('<option></option>').val(json.data[i].cveModalidad).html(json.data[i].desModalidad));
                    }
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    };
    cargarTipoJuzgado = function () {
        var strDatos = "accion=consultarOrdenado";
        strDatos += "&activo=S";
        strDatos += "&orden= order by desTipoJuzgado";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposjuzgados/TiposjuzgadosFacade.Class.php",
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
                        $("#cmbTipoJuzgado").append($('<option></option>').val(json.data[i].cveTipoJuzgado).html(json.data[i].desTipoJuzgado));
                    }
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    };
    obtenerPermisos = function () {
        var cveUsuarioSistema = cveUsuarioSesion;
        $.get("../archivos/" + cveUsuarioSistema + ".json",
                function (response) {
                    for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                        if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                            $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                if (vnombre.nomFormulario == "REPORTES") {
                                    var hijos = vnombre.hijos;
                                    $.each(hijos, function (k2, nombreHijo) {
                                        if (nombreHijo.nomFormulario == 'OFENDIDOS POR TIPO DE JUZGADO EDO. MEXICO') {
                                            var permisoFormulario = nombreHijo.permisoFormulario[0];
                                            createRecord = permisoFormulario.create;
                                            readRecord = permisoFormulario.read;
                                            updateRecord = permisoFormulario.update;
                                            deleteRecord = permisoFormulario.delete;
                                        }
                                    });
                                }
                            });
                        }
                    }
                    if (readRecord == "S") {
                        $("#inputConsultar").show();
                        $("#inputLimpiar").show();
                    }
                });
    };
    muestraOpc = function (opc) {
        if (opc == 1) {
            $('#checkMes').val(true);
            $('#checkAnio').val(false);
            $('#checkRango').val(false);
            $('#cmbM').show();
            $("#cmbMes").val(1);
            $('#divRangoFechas').hide();
            $('#divAnio').hide();
            $("#txtfechaInicial").val("");
            $("#txtfechaFinal").val("");
            $("#txtAnioMes").val(anioHoy());
            $("#txtAnio").val("");
        } else if (opc == 2) {
            $('#checkRango').val(true);
            $('#checkMes').val(false);
            $('#checkAnio').val(false);
            $('#divRangoFechas').show();
            $('#cmbM').hide();
            $('#divAnio').hide();
            $('#cmbMes').val(0);
            $("#txtAnioMes").val("");
            $("#txtAnio").val("");
            fechaBaseDatos({txtfechaInicial: "fecha", txtfechaFinal: "fecha"});
        } else if (opc == 3) {
            $('#checkAnio').val(true);
            $('#checkMes').val(false);
            $('#checkRango').val(false);
            $('#txtAnio').val(anioHoy());
            $('#divAnio').show();
            $('#divRangoFechas').hide();
            $('#cmbM').hide();
            $('#cmbMes').val(0);
            $("#txtAnioMes").val("");
            $("#txtfechaInicial").val("");
            $("#txtfechaFinal").val("");
        }
    };
    anioHoy = function () {
        var y = new Date();
        return y.getFullYear();
    };
    fechaHoy = function () {
        var y = new Date();
        var mes = y.getMonth() + 1;
        var dia = y.getDate();
        if (y.getDate().toString().length == 1) {
            dia = "0" + y.getDate();
        }
        if (mes.toString().length == 1) {
            mes = "0" + mes;
        }
        var nuevFecha = dia + "/" + mes + "/" + y.getFullYear();
        return nuevFecha;
    };
    validarFecha = function (date) {
        var x = new Date();
        var fecha = date.split("/");
        x.setFullYear(fecha[2], fecha[1] - 1, fecha[0]);
        var today = new Date();
        if (x > today) {
            return fechaHoy();
        } else {
            return date;
        }
    };
    validarNumeros = function (e) {
        var teclaAscii;
        if (window.event) { // IE y chromere
            teclaAscii = e.keyCode;
        } else if (e.which) { // Netscape/Firefox/Opera
            teclaAscii = e.which;
        }
        if (((teclaAscii > 47) && (teclaAscii < 58)) || (teclaAscii == 8)) {
            return true;
        }
        return false;
    };
    $(function () {
        obtenerPermisosFormulario('REPORTES', 'CAUSAS POR TIPO DE VIOLENCIA');
        //obtenerPermisos();
        cargarModalidadViolencia();
        cargarTipoJuzgado();
        $("#TipoViolencia").prop("checked", true);
        $("#TipoViolencia").prop("disabled", true);
        $("#divTipoViolencia").show();
        $("#txtAnio").validaCampo('0123456789');
        $("#txtAnioMes").validaCampo('0123456789');
        $("#txtfechaInicial").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY"
        });
        $("#txtfechaFinal").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY"
        });
        $('#txtfechaInicial').on("dp.change", function (e) {
            $('#txtfechaFinal').data("DateTimePicker").minDate(e.date);
        });
        $('#txtfechaFinal').on("dp.change", function (e) {
            $('#txtfechaInicial').data("DateTimePicker").maxDate(e.date);
        });

        fechaBaseDatos({datosImpresion: "fecha-hora"});
    });
</script> 
<?php
}else{
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>