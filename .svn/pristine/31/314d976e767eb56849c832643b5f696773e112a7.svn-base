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
    <input type="hidden" id="hiddenVariables" value="" >
    <input type="hidden" id="hiddenNivel" value="0">
    <input type="hidden" id="hiddenDesRegion" value="">
    <input type="hidden" id="hiddenDesDistrito" value="">
    <input type="hidden" id="hiddenDesJuzgado" value="">
    <input type="hidden" id="hiddenCveJuzgado" value="">
    <input type="hidden" id="hiddenCveJuzgador" value="">
    <input type="hidden" id="hiddenDesJuzgador" value="">
    <input type="hidden" id="hiddenCveTipoAudiencia" value="">
    <input type="hidden" id="hiddenCveEtapaProcesal" value="">
    <input type="hidden" id="hiddenTituloReporte" value="">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Reporte de Audiencias en el Estado de M&eacute;xico.
            </h5>
        </div>
        <div  id="panelPrincipal" class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divPanelControl">
                    <div class="form-group">                                                                
                        <label class="control-label col-md-4" id="lblRelationName">A&ntilde;o de la Audiencia</label>
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
                        <label class="control-label col-md-4" >Mes (Audiencia)</label>
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
                        <label class="control-label col-md-4" >Rango de fecha (Audiencia)</label>
                        <input type="radio" name="optradio" value="false" class="form-inline" id="checkRango" onclick="muestraOpc(2)" checked> 
                    </div>
                    <div id="divRangoFechas" style="display: block">
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


                    <div class="form-group" id="divTipoJuzgado"> 
                        <label class="control-label col-md-4">Tipo de juzgado</label>
                        <div class="col-md-5">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbTipoJuzgado" id="cmbTipoJuzgado" onchange="filtrarTipoCarpeta();">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4">Tipo de Carpeta</label>
                        <div class="col-md-3">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbTipoCarpeta" id="cmbTipoCarpeta" >
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>  
                    </div>

                    <div class="form-group" id="divDetalle" style="display:block" > 
                        <label class="control-label col-md-5">Detalle Completo</label>
                        <input type="checkbox" class="col-md-1" id="checkDetalle" checked>

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
                    <div class="form-group col-md-4"> 
                        <label class="control-label col-md-1"></label>
                        <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar(0, true);" > 
                        <label class="control-label" id="totalReg"></label>
                    </div>
                    <div id="divPaginador" >
                        <div class="form-group col-md-3" >
                            <label class="control-label">P&aacute;gina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="paginacion(false);" >
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4" >
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
                </div>
                <input type="hidden" id="datosImpresion">
                <div id="divConsulta" class="form-group" style="display: none; overflow-y: hidden;">
                    <div class="form-group col-md-4" id="divRegresar">
                        <label class="control-label col-md-1">&nbsp;</label>
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" value="Regresar" onclick="regresar(0, true);"> 
                        </div>
                    </div>
                    <div id="divTableNivel" class="col-md-8" style="width: 100%;">
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
        var grupo = <?php echo '"' . $_SESSION['cveGrupo'] . '"'; ?>;
        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';
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
            var nombreArchivo = "REPORTE_AUDIENCIAS";
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
            $("#hiddenVariables").val("");
            $("#txtAnioMes").val("");
            $("#cmbMes").val(0);
            $("#txtfechaInicial").val("");
            $("#txtfechaFinal").val("");
            $("#cmbEtapaProcesal").val(0);
            $("#cmbEtapaProcesal2").val(0);
            $("#cmbTipoJuez").val(0);
            $("#cmbJuzgadores").val(0);
            $("#cmbPorJuez").val(0);
            $("#checkDetalle").removeAttr("checked");
            $("#audienciasPorJuez").prop("checked", false);
            $("#audienciasDeIniciales").prop("checked", false);
            $("#audienciasDeJuicio").prop("checked", false);
            $("#audienciasAJDC").prop("checked", false);
            $("#APJ").show();
            $("#ADI").show();
            $("#ADJ").show();
            $("#AAJDC").show();
            $("#promedioDuracionAudiencias").prop("checked", "");
            $("#porEtapaProcesal").prop("checked", "");
            $("#porJuez").prop("checked", "");
            $("#divPorEtapaProcesal").hide();
            $("#divEtapaProcesal").hide();
            $("#divPorJuez").hide();
            $("#divPJ").hide();
            $("#divEP").hide();
            $("#divJuzgadores").hide();
            $('#geografia').hide();
            $("#divTipoJuzgado").show();
            $("#cmbTipoJuzgado").val(0);
            $("#cmbTipoCarpeta").val(0);
            $("#cmbEstatusAudiencia").val(0);
            $("#labelSubTotal").text("");
            $("#divTableNivel").html("");
            $("#paginacion").hide();
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Reporte de Audiencias en el Estado de M&eacute;xico.</span>");
        };
        audienciasPorJuez = function () {
            if ($("#audienciasPorJuez").is(':checked')) {
                $("#divPorJuez").show();
                $("#divJuzgadores").hide();
                $("#divPJ").hide();
                $("#divEP").hide();
                $("#divTipoJuzgado").show();
                $("#audienciasDeIniciales").prop("checked", "");
                $("#audienciasDeJuicio").prop("checked", "");
                $("#audienciasAJDC").prop("checked", "");
                $("#porJuez").prop("checked", "");
                $("#cmbPorJuez").val(0);
                $("#cmbJuzgadores").val(0);
                $("#cmbEtapaProcesal").val(0);
                $("#cmbEtapaProcesal2").val(0);
                $("#promedioDuracionAudiencias").prop("checked", "");
                $("#divPorEtapaProcesal").hide();
                $("#divEtapaProcesal").hide();
                $("#porEtapaProcesal").prop("checked", "");
            } else {
                $("#divPorJuez").hide();
                $("#cmbPorJuez").val(0);
            }
        };
        audienciasDeIniciales = function () {
            if ($("#audienciasDeIniciales").is(':checked')) {
                $("#divJuzgadores").hide();
                $("#divPorJuez").hide();
                $("#divPJ").hide();
                $("#divEP").hide();
                $("#divTipoJuzgado").show();
                $("#audienciasPorJuez").prop("checked", "");
                $("#audienciasDeJuicio").prop("checked", "");
                $("#audienciasAJDC").prop("checked", "");
                $("#porJuez").prop("checked", "");
                $("#cmbPorJuez").val(0);
                $("#cmbJuzgadores").val(0);
                $("#cmbEtapaProcesal").val(0);
                $("#cmbEtapaProcesal2").val(0);
                $("#cmbEtapaProcesal2").val(0);
                $("#promedioDuracionAudiencias").prop("checked", "");
                $("#divPorEtapaProcesal").hide();
                $("#divEtapaProcesal").hide();
                $("#porEtapaProcesal").prop("checked", "");
            }
        };
        audienciasDeJuicio = function () {
            if ($("#audienciasDeJuicio").is(':checked')) {
                $("#divPJ").show();
                $("#divEP").show();
                $("#divPorJuez").hide();
                $("#divTipoJuzgado").hide();
                $("#audienciasPorJuez").prop("checked", "");
                $("#audienciasDeIniciales").prop("checked", "");
                $("#audienciasAJDC").prop("checked", "");
                $("#porJuez").prop("checked", "");
                $("#porJuez").prop("disabled", true);
                $("#cmbPorJuez").val(0);
                $("#cmbJuzgadores").val(0);
                $("#cmbEtapaProcesal").val(0);
                $("#cmbEtapaProcesal2").val(0);
                $("#promedioDuracionAudiencias").prop("checked", "");
                $("#divPorEtapaProcesal").hide();
                $("#divEtapaProcesal").hide();
                $("#porEtapaProcesal").prop("checked", "");
            } else {
                $("#divTipoJuzgado").show();
                $("#divJuzgadores").hide();
                $("#divPJ").hide();
                $("#divEP").hide();
                $("#porJuez").prop("checked", "");
                $("#porJuez").prop("disabled", true);
                $("#cmbJuzgadores").val(0);
                $("#cmbEtapaProcesal").val(0);
            }
        };
        audienciasAJDC = function () {
            if ($("#audienciasAJDC").is(':checked')) {
                $("#divJuzgadores").hide();
                $("#divPorJuez").hide();
                $("#divPJ").hide();
                $("#divEP").hide();
                $("#divTipoJuzgado").show();
                $("#audienciasPorJuez").prop("checked", "");
                $("#audienciasDeIniciales").prop("checked", "");
                $("#audienciasDeJuicio").prop("checked", "");
                $("#porJuez").prop("checked", "");
                $("#cmbPorJuez").val(0);
                $("#cmbJuzgadores").val(0);
                $("#cmbEtapaProcesal").val(0);
                $("#cmbEtapaProcesal2").val(0);
                $("#promedioDuracionAudiencias").prop("checked", "");
                $("#divPorEtapaProcesal").hide();
                $("#divEtapaProcesal").hide();
                $("#porEtapaProcesal").prop("checked", "");
            }
        };
        promedioDuracionAudiencias = function () {
            if ($("#promedioDuracionAudiencias").is(':checked')) {
                $("#divTipoJuzgado").hide();
                //            $("#divPJ").hide();
                //            $("#divEP").hide();
                //            $("#APJ").hide();
                //            $("#ADI").hide();
                //            $("#ADJ").hide();
                //            $("#AAJDC").hide();
                $("#divPorJuez").hide();
                $("#divEP").hide();
                $("#divPJ").hide();
                $("#divJuzgadores").hide();
                $("#divPorEtapaProcesal").show();
                $("#audienciasPorJuez").prop("checked", "");
                $("#audienciasDeIniciales").prop("checked", "");
                $("#audienciasDeJuicio").prop("checked", "");
                $("#audienciasAJDC").prop("checked", "");
                $("#porJuez").prop("checked", "");
                $("#cmbPorJuez").val(0);
                $("#cmbJuzgadores").val(0);
                $("#cmbEtapaProcesal").val(0);
                $("#cmbEtapaProcesal2").val(0);
            } else {
                $("#divTipoJuzgado").show();
                $("#divPorEtapaProcesal").hide();
                $("#divEtapaProcesal").hide();
                $("#APJ").show();
                $("#ADI").show();
                $("#ADJ").show();
                $("#AAJDC").show();
                $("#divJuzgadores").hide();
                $("#divPorJuez").hide();
                $("#audienciasPorJuez").prop("checked", "");
                $("#audienciasDeIniciales").prop("checked", "");
                $("#audienciasDeJuicio").prop("checked", "");
                $("#audienciasAJDC").prop("checked", "");
                $("#porJuez").prop("checked", "");
                $("#cmbPorJuez").val(0);
                $("#cmbJuzgadores").val(0);
            }
        };
        porEtapaProcesal = function () {
            if ($("#porEtapaProcesal").is(':checked')) {
                $("#divEtapaProcesal").show();
            } else {
                $("#divEtapaProcesal").hide();
            }
        };
        porJuez = function () {
            if ($("#porJuez").is(':checked')) {
                $("#divJuzgadores").show();
                $("#cmbJuzgadores").val(0);
            } else {
                $("#divJuzgadores").hide();
                $("#cmbJuzgadores").val(0);
            }
        };
        filtro = function () {
            var strDatos = "";
            if ($("#checkDetalle").is(":checked")) {

                if ($("#cmbRegion").val() != "") {
                    strDatos += "&cveRegion=" + $("#cmbRegion").val();
                }
                if ($("#cmbDistrito").val() != "") {
                    strDatos += "&cveDistrito=" + $("#cmbDistrito").val();
                }
                if ($("#cmbJuzgado").val() != "") {
                    strDatos += "&cveJuzgado=" + $("#cmbJuzgado").val();
                }

            }
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
            if ($("#audienciasPorJuez").is(':checked')) {
                strDatos += "&filtroPorJuez=true";
            }
            if ($("#cmbPorJuez").val() == 0 && $("#hiddenNivel").val() == 1 && $("#audienciasPorJuez").is(':checked')) {
                strDatos += "&cveJuzgador=0";
            } else {
                if ($("#cmbPorJuez").val() != 0) {
                    strDatos += "&cveJuzgador=" + $("#cmbPorJuez").val();
                }
            }
            if ($("#audienciasDeJuicio").is(':checked')) {
                strDatos += "&audienciasDeJuicio=true";
                if ($("#cmbEtapaProcesal").val() == 0 && $("#hiddenNivel").val() == 1) {
                    strDatos += "&cveEtapaProcesal=0";
                } else {
                    if ($("#cmbEtapaProcesal").val() != 0) {
                        strDatos += "&cveEtapaProcesal=" + $("#cmbEtapaProcesal").val();
                    }
                }
                if ($("#porJuez").is(':checked')) {
                    strDatos += "&porJuez=true";
                    if ($("#cmbJuzgadores").val() != 0) {
                        strDatos += "&cveJuzgador=" + $("#cmbJuzgadores").val();
                    }
                }
            }
            if ($("#audienciasDeIniciales").is(':checked')) {
                strDatos += "&audienciasDeIniciales=true";
            }
            if ($("#audienciasAJDC").is(':checked')) {
                strDatos += "&audienciasAJDC=true";
            }
            if ($("#promedioDuracionAudiencias").is(':checked')) {
                strDatos += "&promedioDuracionAudiencias=true";
                if ($("#porEtapaProcesal").is(':checked')) {
                    strDatos += "&filtroPorEtapaProcesal=true";
                }
                if ($("#cmbEtapaProcesal2").val() != 0) {
                    strDatos += "&cveEtapaProcesal=" + $("#cmbEtapaProcesal2").val();
                }
            }
            if ($("#cmbTipoJuzgado").val() != 0) {
                strDatos += "&cveTipoJuzgado=" + $("#cmbTipoJuzgado").val();
            }
            if ($("#cmbTipoCarpeta").val() != 0) {
                strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            }
            if ($("#cmbEstatusAudiencia").val() != 0) {
                strDatos += "&cveEstatusAudiencia=" + $("#cmbEstatusAudiencia").val();
            }

            return strDatos;
        };
        fechaMySQLaNormal = function (fecha) {
            var fechaHora = fecha.split(" ");
            var vecFecha = fechaHora[0].split("-");
            var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
            fechaHora = fechaHora[1].split(":");
            fechaHora = fechaHora[0] + ":" + fechaHora[1];
            return fechaNormal + " " + fechaHora;
        };
        horaMySQLaNormal = function (hora) {
            var Hora = hora.split(":");
            var horaNormal = Hora[0] + ":" + Hora[1];
            return horaNormal;
        };
        etiquetas = function () {
            var etiqueta = "";
            if ($("#audienciasPorJuez").is(':checked')) {
                etiqueta += " por Juez";
            }
            if ($("#audienciasDeIniciales").is(':checked')) {
                etiqueta += " de Iniciales";
            }
            if ($("#audienciasDeJuicio").is(':checked')) {
                etiqueta += " por Etapa Procesal";
                if ($("#porJuez").is(':checked')) {
                    etiqueta += " por Juez";
                }
            }
            if ($("#audienciasAJDC").is(':checked')) {
                etiqueta += " ante Jueces de Control";
            }
            if ($("#promedioDuracionAudiencias").is(':checked')) {
                etiqueta += " por Promedio de Duraci&oacute;n";
                if ($("#porEtapaProcesal").is(':checked')) {
                    etiqueta += " por Etapa Procesal";
                }
            }
            return etiqueta;
        };
        titulos = function () {
            var etiqueta = etiquetas();
            var titulo = "Reporte de Audiencias" + etiqueta;
            if ($("#txtAnio").val() != "") {
                titulo += " en el A&ntilde;o " + $("#txtAnio").val();
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
            if ($("#hiddenNivel").val() > 0) {
                consultar(paginar, $("#hiddenNivel").val());
            }
        };
        gestorConsulta = function (bandera, nivel, json, i) {
            var strDatos;
            if (nivel == 2) {
                if ($("#audienciasAJDC").is(':checked')) {
                    strDatos += "&cveTipoAudiencia=" + json.resultados[i].cveTipoAudiencia;
                    $("#hiddenCveTipoAudiencia").val(json.resultados[i].cveTipoAudiencia);
                }
                if ($("#audienciasPorJuez").is(':checked')) {
                    strDatos += "&cveJuzgador=" + json.resultados[i].idJuzgador;
                    $("#hiddenCveJuzgador").val(json.resultados[i].idJuzgador);
                }
                if ($("#audienciasDeJuicio").is(':checked')) {
                    strDatos += "&cveEtapaProcesal=" + json.resultados[i].cveEtapaProcesal;
                    $("#hiddenCveEtapaProcesal").val(json.resultados[i].cveEtapaProcesal);
                }
                if ($("#porJuez").is(':checked')) {
                    strDatos += "&cveJuzgador=" + json.resultados[i].idJuzgador;
                    $("#hiddenCveJuzgador").val(json.resultados[i].idJuzgador);
                }
                if ($("#porEtapaProcesal").is(':checked')) {
                    strDatos += "&cveEtapaProcesal=" + json.resultados[i].cveEtapaProcesal;
                    $("#hiddenCveEtapaProcesal").val(json.resultados[i].cveEtapaProcesal);
                }
            }
            if (nivel == 3) {
                strDatos = "&cveRegion=" + json.resultados[i].cveRegion;
                $("#hiddenDesRegion").val(json.resultados[i].desRegion);
                $("#hiddenCveRegion").val(json.resultados[i].cveRegion);
                if ($("#audienciasAJDC").is(':checked')) {
                    strDatos += "&cveTipoAudiencia=" + $("#hiddenCveTipoAudiencia").val();
                }
                if ($("#audienciasPorJuez").is(':checked')) {
                    strDatos += "&cveJuzgador=" + json.resultados[i].idJuzgador;
                }
                if ($("#audienciasDeJuicio").is(':checked')) {
                    strDatos += "&cveEtapaProcesal=" + json.resultados[i].cveEtapaProcesal;
                }
                if ($("#porJuez").is(':checked')) {
                    strDatos += "&cveJuzgador=" + json.resultados[i].idJuzgador;
                }
                if ($("#porEtapaProcesal").is(':checked')) {
                    strDatos += "&cveEtapaProcesal=" + json.resultados[i].cveEtapaProcesal;
                }
            }
            if (nivel == 4) {
                strDatos = "&cveDistrito=" + json.resultados[i].cveDistrito;
                $("#hiddenDesDistrito").val(json.resultados[i].desDistrito);
                $("#hiddenCveDistrito").val(json.resultados[i].cveDistrito);
                if ($("#audienciasAJDC").is(':checked')) {
                    strDatos += "&cveTipoAudiencia=" + $("#hiddenCveTipoAudiencia").val();
                }
                if ($("#audienciasPorJuez").is(':checked')) {
                    strDatos += "&cveJuzgador=" + json.resultados[i].idJuzgador;
                }
                if ($("#audienciasDeJuicio").is(':checked')) {
                    strDatos += "&cveEtapaProcesal=" + json.resultados[i].cveEtapaProcesal;
                }
                if ($("#porJuez").is(':checked')) {
                    strDatos += "&cveJuzgador=" + json.resultados[i].idJuzgador;
                }
                if ($("#porEtapaProcesal").is(':checked')) {
                    strDatos += "&cveEtapaProcesal=" + json.resultados[i].cveEtapaProcesal;
                }
            }
            if (nivel == 5) {
                strDatos += "&cveRegion=" + json.resultados[i].cveRegion;
                strDatos += "&cveDistrito=" + json.resultados[i].cveDistrito;
                strDatos += "&cveJuzgado=" + json.resultados[i].cveJuzgado;
                if ($("#audienciasAJDC").is(':checked')) {
                    strDatos += "&cveTipoAudiencia=" + $("#hiddenCveTipoAudiencia").val();
                }
                if ($("#audienciasPorJuez").is(':checked')) {
                    strDatos += "&cveJuzgador=" + json.resultados[i].idJuzgador;
                }
                if ($("#audienciasDeJuicio").is(':checked')) {
                    strDatos += "&cveEtapaProcesal=" + json.resultados[i].cveEtapaProcesal;
                }
                if ($("#porJuez").is(':checked')) {
                    strDatos += "&cveJuzgador=" + json.resultados[i].idJuzgador;
                }
                if ($("#porEtapaProcesal").is(':checked')) {
                    strDatos += "&cveEtapaProcesal=" + json.resultados[i].cveEtapaProcesal;
                }
                strDatos += "&detalles=detalle";
            }
            $("#hiddenVariables").val(strDatos);
            consultar(bandera, nivel);
        };
        gestorNivel = function (json, bandera) {
            var indice = $("#cmbPaginacion").val();
            indice = (indice - 1) * $("#cmbNumReg").val();
            var titulo = titulos();
            var titulo1 = "<br id='bo'><label style='text-align:center;width: 100%; font-size:12pt;'>" + titulo + " </label></br>";
            var titulo2 = "";
            var table = "<table id='tblResultadosGridAct' width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered table-responsive' >";
            table += "<thead>";
            var jsonDatos = JSON.stringify(json);
            var aux = "";
            var totalAAJDC = 0;
            var subTotal = 0;
            $("#labelSubTotal").text("");
            switch ($("#hiddenNivel").val()) {
                case "1":
                    if ($("#audienciasAJDC").is(':checked')) {
                        table += "<th>Tipo de Audiencia</th><th>Estado</th>";
                        table += "<th>Audiencias Iniciales</th><th>Audiencias Intermedias</th><th>Audiencias de Procedimiento Abrevidado</th><th>Audiencias privadas de actos de investigaci&oacute;n/ orden de aprehensi&oacute;n/ comparecencia</th>";
                    } else {
                        table += "<th>N&uacute;m.</th><th>Estado</th>";
                    }
                    if ($("#audienciasPorJuez").is(':checked') || $("#porJuez").is(':checked')) {
                        table += "<th>Juzgador</th>";
                    }
                    if (($("#porEtapaProcesal").is(':checked') && $("#promedioDuracionAudiencias").is(':checked')) || $("#audienciasDeJuicio").is(':checked')) {
                        table += "<th>Etapa procesal</th>";
                    }
                    if ($("#audienciasAJDC").is(':checked')) {
                        table += "<th>Subtotal de Audiencias ante Jueces de Control</th>";
                    } else {
                        table += "<th>Subtotal</th>";
                    }
                    if ($("#promedioDuracionAudiencias").is(':checked')) {
                        table += "<th>Duraci&oacute;n promedio por Audiencia</th>";
                    }
                    table += "</thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        if ($("#audienciasAJDC").is(':checked')) {
                            totalAAJDC = parseInt(json.resultados[i].audienciasIniciales) + parseInt(json.resultados[i].audienciasIntermedias) + parseInt(json.resultados[i].audienciasProcedimientoAbreviado) + parseInt(json.resultados[i].audienciasPrivadasInvestigacion);
                        }
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 2 + "," + jsonDatos + "," + i + ")'>";
                        if ($("#audienciasAJDC").is(':checked')) {
                            table += "<td>" + json.resultados[i].desTipoAudiencia + "</td>";
                        } else {
                            table += "<td > " + (i + 1 + indice) + "</td>";
                        }
                        table += "<td>M\u00c9XICO</td>";
                        if ($("#audienciasPorJuez").is(':checked') || $("#porJuez").is(':checked')) {
                            table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                        }
                        if (($("#porEtapaProcesal").is(':checked') && $("#promedioDuracionAudiencias").is(':checked')) || $("#audienciasDeJuicio").is(':checked')) {
                            table += "<td>" + json.resultados[i].desEtapaProcesal + "</td>";
                        }
                        if ($("#audienciasAJDC").is(':checked')) {
                            table += "<td>" + json.resultados[i].audienciasIniciales + "</td>";
                            table += "<td>" + json.resultados[i].audienciasIntermedias + "</td>";
                            table += "<td>" + json.resultados[i].audienciasProcedimientoAbreviado + "</td>";
                            table += "<td>" + json.resultados[i].audienciasPrivadasInvestigacion + "</td>";
                            table += "<td>" + totalAAJDC + "</td>";
                            subTotal = subTotal - totalAAJDC;
                        } else {
                            if (json.totalCount > 0) {
                                table += "<td>" + json.resultados[i].totalCount + "</td>";
                                subTotal = subTotal - json.resultados[i].totalCount;
                            } else {
                                table += "<td>0</td>";
                            }
                        }
                        if ($("#promedioDuracionAudiencias").is(':checked')) {
                            if (json.resultados[0].totalCount > 0) {
                                table += "<td>" + horaMySQLaNormal(json.resultados[i].duracionAudiencia) + " Hrs.</td>";
                            } else {
                                table += "<td>0</td>";
                            }
                        }
                        aux = "";
                        table += "</tr> ";
                    }
                    subTotal = -subTotal;
                    $("#labelSubTotal").text("Total: " + subTotal.toLocaleString("en-US"));
                    break;
                case "2":
                    titulo2 += "<br><label><b>Estado: </b>M\u00c9XICO</label><br>";
                    $("#hiddenTituloReporte").val(" Estado: Mexico");
                    if ($("#audienciasAJDC").is(':checked')) {
                        table += "<th>Tipo de Audiencia</th><th>Regi\u00f3n</th>";
                        table += "<th>Audiencias Iniciales</th><th>Audiencias Intermedias</th><th>Audiencias de Procedimiento Abrevidado</th><th>Audiencias privadas de actos de investigaci\u00f3n/ orden de aprehensi\u00f3n/ comparecencia</th>";
                    } else {
                        table += "<th>N&uacute;m.</th><th>Regi\u00f3n</th>";
                    }
                    if ($("#audienciasPorJuez").is(':checked') || $("#porJuez").is(':checked')) {
                        table += "<th>Juzgador</th>";
                    }
                    if (($("#porEtapaProcesal").is(':checked') && $("#promedioDuracionAudiencias").is(':checked')) || $("#audienciasDeJuicio").is(':checked')) {
                        table += "<th>Etapa procesal</th>";
                    }
                    if ($("#audienciasAJDC").is(':checked')) {
                        table += "<th>Subtotal de Audiencias ante Jueces de Control</th>";
                    } else {
                        table += "<th>Subtotal</th>";
                    }
                    if ($("#promedioDuracionAudiencias").is(':checked')) {
                        table += "<th>Duraci\u00f3n promedio por Audiencia</th>";
                    }
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        if ($("#audienciasAJDC").is(':checked')) {
                            totalAAJDC = parseInt(json.resultados[i].audienciasIniciales) + parseInt(json.resultados[i].audienciasIntermedias) + parseInt(json.resultados[i].audienciasProcedimientoAbreviado) + parseInt(json.resultados[i].audienciasPrivadasInvestigacion);
                        }
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 3 + "," + jsonDatos + "," + i + ")'>";
                        if ($("#audienciasAJDC").is(':checked')) {
                            table += "<td>" + json.resultados[i].desTipoAudiencia + "</td>";
                        } else {
                            table += "<td > " + (i + 1 + indice) + "</td>";
                        }
                        //                    table += "<td>M\u00c9XICO</td>";
                        table += "<td>" + json.resultados[i].desRegion + "</td>";
                        if ($("#audienciasPorJuez").is(':checked') || $("#porJuez").is(':checked')) {
                            table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                        }
                        if (($("#porEtapaProcesal").is(':checked') && $("#promedioDuracionAudiencias").is(':checked')) || $("#audienciasDeJuicio").is(':checked')) {
                            table += "<td>" + json.resultados[i].desEtapaProcesal + "</td>";
                        }
                        if ($("#audienciasAJDC").is(':checked')) {
                            table += "<td>" + json.resultados[i].audienciasIniciales + "</td>";
                            table += "<td>" + json.resultados[i].audienciasIntermedias + "</td>";
                            table += "<td>" + json.resultados[i].audienciasProcedimientoAbreviado + "</td>";
                            table += "<td>" + json.resultados[i].audienciasPrivadasInvestigacion + "</td>";
                            table += "<td>" + totalAAJDC + "</td>";
                            subTotal = subTotal - totalAAJDC;
                        } else {
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                            subTotal = subTotal - json.resultados[i].totalCount;
                        }
                        if ($("#promedioDuracionAudiencias").is(':checked')) {
                            table += "<td>" + horaMySQLaNormal(json.resultados[i].duracionAudiencia) + " Hrs.</td>";
                        }
                        table += "</tr> ";
                        aux = "";
                    }
                    subTotal = -subTotal;
                    $("#labelSubTotal").text("Total: " + subTotal.toLocaleString("en-US"));
                    break;
                case "3":
                    titulo2 = "<br><label><b>Estado: </b>M\u00c9XICO<br><b>Regi\u00f3n: </b>" + json.resultados[0].desRegion + "</label><br>";
                    $("#hiddenTituloReporte").val(" Estado: Mexico/ Region: " + json.resultados[0].desRegion);
                    if ($("#audienciasAJDC").is(':checked')) {
                        table += "<th>Tipo de Audiencia</th><th>Distrito</th>";
                        table += "<th>Audiencias Iniciales</th><th>Audiencias Intermedias</th><th>Audiencias de Procedimiento Abrevidado</th><th>Audiencias privadas de actos de investigaci\u00f3n/ orden de aprehensi\u00f3n/ comparecencia</th>";
                    } else {
                        table += "<th>N&uacute;m</th><th>Distrito</th>";
                    }
                    if ($("#audienciasPorJuez").is(':checked') || $("#porJuez").is(':checked')) {
                        table += "<th>Juzgador</th>";
                    }
                    if (($("#porEtapaProcesal").is(':checked') && $("#promedioDuracionAudiencias").is(':checked')) || $("#audienciasDeJuicio").is(':checked')) {
                        table += "<th>Etapa procesal</th>";
                    }
                    if ($("#audienciasAJDC").is(':checked')) {
                        table += "<th>Subtotal de Audiencias ante Jueces de Control</th>";
                    } else {
                        table += "<th>Subtotal</th>";
                    }
                    if ($("#promedioDuracionAudiencias").is(':checked')) {
                        table += "<th>Duraci\u00f3n promedio por Audiencia</th>";
                    }
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        if ($("#audienciasAJDC").is(':checked')) {
                            totalAAJDC = parseInt(json.resultados[i].audienciasIniciales) + parseInt(json.resultados[i].audienciasIntermedias) + parseInt(json.resultados[i].audienciasProcedimientoAbreviado) + parseInt(json.resultados[i].audienciasPrivadasInvestigacion);
                        }
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 4 + "," + jsonDatos + "," + i + ")'>";
                        if ($("#audienciasAJDC").is(':checked')) {
                            table += "<td>" + json.resultados[i].desTipoAudiencia + "</td>";
                        } else {
                            table += "<td > " + (i + 1 + indice) + "</td>";
                        }
                        //                    table += "<td>M\u00c9XICO</td>";
                        //                    table += "<td>" + json.resultados[i].desRegion + "</td>";
                        table += "<td>" + json.resultados[i].desDistrito + "</td>";
                        if ($("#audienciasPorJuez").is(':checked') || $("#porJuez").is(':checked')) {
                            table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                        }
                        if (($("#porEtapaProcesal").is(':checked') && $("#promedioDuracionAudiencias").is(':checked')) || $("#audienciasDeJuicio").is(':checked')) {
                            table += "<td>" + json.resultados[i].desEtapaProcesal + "</td>";
                        }
                        if ($("#audienciasAJDC").is(':checked')) {
                            table += "<td>" + json.resultados[i].audienciasIniciales + "</td>";
                            table += "<td>" + json.resultados[i].audienciasIntermedias + "</td>";
                            table += "<td>" + json.resultados[i].audienciasProcedimientoAbreviado + "</td>";
                            table += "<td>" + json.resultados[i].audienciasPrivadasInvestigacion + "</td>";
                            table += "<td>" + totalAAJDC + "</td>";
                            subTotal = subTotal - totalAAJDC;
                        } else {
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                            subTotal = subTotal - json.resultados[i].totalCount;
                        }
                        if ($("#promedioDuracionAudiencias").is(':checked')) {
                            table += "<td>" + horaMySQLaNormal(json.resultados[i].duracionAudiencia) + " Hrs.</td>";
                        }
                        table += "</tr> ";
                        aux = "";
                    }
                    subTotal = -subTotal;
                    $("#labelSubTotal").text("Total: " + subTotal.toLocaleString("en-US"));
                    break;
                case "4":
                    titulo2 = "<br><label><b>Estado: </b>M\u00c9XICO<br><b>Regi\u00f3n: </b>" + json.resultados[0].desRegion + "<br><b>Distrito: </b>" + json.resultados[0].desDistrito + "</label><br>";
                    $("#hiddenTituloReporte").val(" Estado: Mexico/ Region: " + json.resultados[0].desRegion + "/ Distrito: " + json.resultados[0].desDistrito);
                    if ($("#audienciasAJDC").is(':checked')) {
                        table += "<th>Tipo de Audiencia</th><th>Juzgado</th>";
                        table += "<th>Audiencias Iniciales</th><th>Audiencias Intermedias</th><th>Audiencias de Procedimiento Abrevidado</th><th>Audiencias privadas de actos de investigaci\u00f3n/ orden de aprehensi\u00f3n/ comparecencia</th>";
                    } else {
                        table += "<th>N&uacute;m.</th><th>Juzgado</th>";
                    }
                    if ($("#audienciasPorJuez").is(':checked') || $("#porJuez").is(':checked')) {
                        table += "<th>Juzgador</th>";
                    }
                    if (($("#porEtapaProcesal").is(':checked') && $("#promedioDuracionAudiencias").is(':checked')) || $("#audienciasDeJuicio").is(':checked')) {
                        table += "<th>Etapa procesal</th>";
                    }
                    if ($("#audienciasAJDC").is(':checked')) {
                        table += "<th>Subtotal de Audiencias ante Jueces de Control</th>";
                    } else {
                        table += "<th>Subtotal</th>";
                    }
                    if ($("#promedioDuracionAudiencias").is(':checked')) {
                        table += "<th>Duraci\u00f3n promedio por Audiencia</th>";
                    }
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        if ($("#audienciasAJDC").is(':checked')) {
                            totalAAJDC = parseInt(json.resultados[i].audienciasIniciales) + parseInt(json.resultados[i].audienciasIntermedias) + parseInt(json.resultados[i].audienciasProcedimientoAbreviado) + parseInt(json.resultados[i].audienciasPrivadasInvestigacion);
                        }
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 5 + "," + jsonDatos + "," + i + ")'>";
                        if ($("#audienciasAJDC").is(':checked')) {
                            table += "<td>" + json.resultados[i].desTipoAudiencia + "</td>";
                        } else {
                            table += "<td > " + (i + 1 + indice) + "</td>";
                        }
                        //                    table += "<td>M\u00c9XICO</td>";
                        //                    table += "<td>" + json.resultados[i].desRegion + "</td>";
                        //                    table += "<td>" + json.resultados[i].desDistrito + "</td>";
                        table += "<td>" + json.resultados[i].desJuzgado + "</td>";
                        if ($("#audienciasPorJuez").is(':checked') || $("#porJuez").is(':checked')) {
                            table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                        }
                        if (($("#porEtapaProcesal").is(':checked') && $("#promedioDuracionAudiencias").is(':checked')) || $("#audienciasDeJuicio").is(':checked')) {
                            table += "<td>" + json.resultados[i].desEtapaProcesal + "</td>";
                        }
                        if ($("#audienciasAJDC").is(':checked')) {
                            table += "<td>" + json.resultados[i].audienciasIniciales + "</td>";
                            table += "<td>" + json.resultados[i].audienciasIntermedias + "</td>";
                            table += "<td>" + json.resultados[i].audienciasProcedimientoAbreviado + "</td>";
                            table += "<td>" + json.resultados[i].audienciasPrivadasInvestigacion + "</td>";
                            table += "<td>" + totalAAJDC + "</td>";
                            subTotal = subTotal - totalAAJDC;
                        } else {
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                            subTotal = subTotal - json.resultados[i].totalCount;
                        }
                        if ($("#promedioDuracionAudiencias").is(':checked')) {
                            table += "<td>" + horaMySQLaNormal(json.resultados[i].duracionAudiencia) + " Hrs.</td>";
                        }
                        table += "</tr> ";

                        aux = "";
                    }
                    subTotal = -subTotal;
                    $("#labelSubTotal").text("Total: " + subTotal.toLocaleString("en-US"));
                    break;
                case "5":
                    if ($("#checkDetalle").is(":checked")) {

                    } else {
                        titulo2 = "<br><label><b>Estado: </b>M\u00c9XICO<br><b>Regi\u00f3n: </b>" + json.resultados[0].desRegion + "<br><b>Distrito: </b>" + json.resultados[0].desDistrito + "<br><b>Juzgado: </b>" + json.resultados[0].desJuzgado + "</label><br>";
                    }

                    $("#hiddenTituloReporte").val(" Estado: Mexico/ Region: " + json.resultados[0].desRegion + "/ Distrito: " + json.resultados[0].desDistrito + "/ Juzgado: " + json.resultados[0].desJuzgado);
                    //if ($("#audienciasAJDC").is(':checked')) {
                    //table += "<th>N&uacute;m.</th><th>Tipo de Juzgado</th>";
                    //} else {

                    table += "<th>N&uacute;m.</th>";
                    table += "<th>Fecha Audiencia</th><th>Mes Audiencia</th>";
                    table += "<th>Hr Inicio</th>";
                    table += "<th>Hr Fin</th>";
                    table += "<th>Duraci\u00f3n </th>";
                    table += "<th>NUC</th>";
                    table += "<th>Juez</th>";
                    table += "<th>Tipo de Audiencia</th>";
                    //                table += "<th>AMP</th>";
                    table += "<th>Defensor</th>";
                    table += "<th>Defensor particular</th>";
                    table += "<th>Asesor Juridico</th>";
                    table += "<th>Comentarios</th>";

                    table += "</tr></thead><tbody>";


                    for (var i = 0; i < json.totalCount; i++) {

                        table += "<tr>";

                        table += "<td> " + (i + 1 + indice) + "</td>";
                        table += "<td>" + fechaMySQLaNormal(json.resultados[i].fechaInicial) + "</td>";
                        table += "<td>" + json.resultados[i].mes + "</td>";
                        table += "<td>" + json.resultados[i].hrInicio + "</td>";
                        table += "<td>" + json.resultados[i].hrFinal + "</td>";
                        table += "<td>" + horaMySQLaNormal(json.resultados[i].duracionAudiencia) + " Hrs.</td>";
                        table += "<td>" + json.resultados[i].nuc + "</td>";
                        table += "<td>" + json.resultados[i].juzgador + "</td>";
                        table += "<td>" + json.resultados[i].desCatAudiencia + "</td>";
                        //                        table += "<td>" + json.resultados[i].amp + "</td>";
                        table += "<td>";
                        table += "<UL type = disk>";
                        //************ defensores **************************************
                        $.each(json.resultados[i].defensor, function (k, def) {
                            table += "<LI>" + def.nombreDef;
                        });
                        table += "</UL>";
                        table += "</td>";

                        //************ defensores Privados**************************************
                        table += "<td>";
                        table += "<UL type = disk>";
                        $.each(json.resultados[i].defensorPrivado, function (k, defPriv) {
                            table += "<LI>" + defPriv.nombreDefPriv;
                        });
                        table += "</UL>";
                        table += "</td>";
                        // **********************asesores juridicos **********************************
                        table += "<td>";
                        table += "<UL type = disk>";
                        $.each(json.resultados[i].asesorJuridico, function (k, asesorJur) {
                            table += "<LI>" + asesorJur.nombreAsesorJur;
                        });
                        table += "</UL>";
                        table += "</td>";
                        table += "<td>" + json.resultados[i].observaciones + "</td>";


                        table += "</tr> ";

                        subTotal = -(i + 1 + indice);

                    }
                    subTotal = -subTotal;
                    //                $("#labelSubTotal").text("Total: " + subTotal);
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
            if ($("#checkDetalle").is(":checked")) {

            } else {
                if (bandera && i > 99) {
                    calcularPaginas();
                }
            }
        };
        mensajeDetenido = function (mensaje) {
            if (mensaje == 'S') {
                return "SI";
            } else {
                if (mensaje == 'N') {
                    return "NO";
                }
            }
            return "SE DESCONOCE";
        };
        consultar = function (bandera, nivel) {
            $("#divConsulta").hide("slide");
            if ($("#checkDetalle").is(":checked")) {
                $("#hiddenNivel").val(5);
                nivel = 5;
            } else {
                $("#hiddenNivel").val(nivel);
            }
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
            var strDatos = "accion=consultar_Audiencias_Reporte";
            strDatos += "&activo=S";
            if ($("#checkDetalle").is(":checked")) {
                strDatos += "&checkDetalle=true";
                strDatos += "&nivel=5";
                strDatos += "&detalles=DETALLE";
                strDatos += "&paginacion=false";
            } else {
                strDatos += "&nivel=" + nivel;
                strDatos += "&paginacion=true";
            }
            strDatos += "&cantxPag=" + $("#cmbNumReg").val();
            strDatos += "&pag=" + $("#cmbPaginacion").val();

            strDatos += $("#hiddenVariables").val();
            strDatos += filtro();
            //        alert(strDatos);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReporteAudienciasv3Facade.Class.php",
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
                    console.log(datos);
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
        calcularPaginas = function () {
            $("#divRegresar").hide();
            var url = "../fachadas/sigejupe/reportes/ReporteAudienciasFacade.Class.php";
            var strDatos = "accion=consultar_Audiencias_Reporte";
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
                mensaje += " / X Regi&oacute;n";
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
                if ($("#checkDetalle").is(":checked")) {
                    mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Detalle Total</span>";
                } else {
                    mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                    mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>X Regi&oacute;n</SPAN>";
                    mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(3,false);'>Distrito</SPAN>";
                    mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(4,false);'>Juzgado</SPAN>";
                    mensaje += " / Detalles";
                }
            }
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Reporte de Audiencias en el Estado de Mexico.</span>" + mensaje);
        };
        regresar = function (nivel, bandera) {
            if (bandera == 1) {
                nivel = $("#hiddenNivel").val() - 1;
            }
            $("#cmbNumReg").val(100);
            $("#cmbPaginacion").val(1);
            var strDatos = "";
            if (nivel == 0) {
                $("#h5titulo").html("Reporte de Audiencias en el Estado de M&eacute;xico.");
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
                    if ($("#audienciasAJDC").is(':checked')) {
                        strDatos += "&cveTipoAudiencia=" + $("#hiddenCveTipoAudiencia").val();
                    }
                    if ($("#audienciasPorJuez").is(':checked')) {
                        strDatos += "&cveJuzgador=" + $("#hiddenCveJuzgador").val();
                    }
                    if ($("#audienciasDeJuicio").is(':checked')) {
                        strDatos += "&cveEtapaProcesal=" + $("#hiddenCveEtapaProcesal").val();
                    }
                    if ($("#porJuez").is(':checked')) {
                        strDatos += "&cveJuzgador=" + $("#hiddenCveJuzgador").val();
                        strDatos += "&cveEtapaProcesal=" + $("#hiddenCveEtapaProcesal").val();
                    }
                    if ($("#porEtapaProcesal").is(':checked')) {
                        strDatos += "&cveEtapaProcesal=" + $("#hiddenCveEtapaProcesal").val();
                    }
                }
                if (nivel == 3) {
                    strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                    if ($("#audienciasAJDC").is(':checked')) {
                        strDatos += "&cveTipoAudiencia=" + $("#hiddenCveTipoAudiencia").val();
                    }
                    if ($("#audienciasPorJuez").is(':checked')) {
                        strDatos += "&cveJuzgador=" + $("#hiddenCveJuzgador").val();
                    }
                    if ($("#audienciasDeJuicio").is(':checked')) {
                        strDatos += "&cveEtapaProcesal=" + $("#hiddenCveEtapaProcesal").val();
                    }
                    if ($("#porJuez").is(':checked')) {
                        strDatos += "&cveJuzgador=" + $("#hiddenCveJuzgador").val();
                        strDatos += "&cveEtapaProcesal=" + $("#hiddenCveEtapaProcesal").val();
                    }
                    if ($("#porEtapaProcesal").is(':checked')) {
                        strDatos += "&cveEtapaProcesal=" + $("#hiddenCveEtapaProcesal").val();
                    }
                }
                if (nivel == 4) {
                    strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                    strDatos += "&cveDistrito=" + $("#hiddenCveDistrito").val();
                    if ($("#audienciasAJDC").is(':checked')) {
                        strDatos += "&cveTipoAudiencia=" + $("#hiddenCveTipoAudiencia").val();
                    }
                    if ($("#audienciasPorJuez").is(':checked')) {
                        strDatos += "&cveJuzgador=" + $("#hiddenCveJuzgador").val();
                    }
                    if ($("#audienciasDeJuicio").is(':checked')) {
                        strDatos += "&cveEtapaProcesal=" + $("#hiddenCveEtapaProcesal").val();
                    }
                    if ($("#porJuez").is(':checked')) {
                        strDatos += "&cveJuzgador=" + $("#hiddenCveJuzgador").val();
                        strDatos += "&cveEtapaProcesal=" + $("#hiddenCveEtapaProcesal").val();
                    }
                    if ($("#porEtapaProcesal").is(':checked')) {
                        strDatos += "&cveEtapaProcesal=" + $("#hiddenCveEtapaProcesal").val();
                    }
                }
                if (nivel == 5) {
                    strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                    strDatos += "&cveDistrito=" + $("#hiddenCveDistrito").val();
                    strDatos += "&cveJuzgado=" + $("#hiddenCveJuzgado").val();
                    if ($("#audienciasAJDC").is(':checked')) {
                        strDatos += "&cveTipoAudiencia=" + $("#hiddenCveTipoAudiencia").val();
                    }
                    if ($("#audienciasPorJuez").is(':checked')) {
                        strDatos += "&cveJuzgador=" + $("#hiddenCveJuzgador").val();
                    }
                    if ($("#audienciasDeJuicio").is(':checked')) {
                        strDatos += "&cveEtapaProcesal=" + $("#hiddenCveEtapaProcesal").val();
                    }
                    if ($("#porJuez").is(':checked')) {
                        strDatos += "&cveJuzgador=" + $("#hiddenCveJuzgador").val();
                        strDatos += "&cveEtapaProcesal=" + $("#hiddenCveEtapaProcesal").val();
                    }
                    if ($("#porEtapaProcesal").is(':checked')) {
                        strDatos += "&cveEtapaProcesal=" + $("#hiddenCveEtapaProcesal").val();
                    }
                }
            }
            $("#hiddenVariables").val(strDatos);
            if (nivel > 0) {
                consultar(true, nivel);
            }
        };
        filtrarTipoCarpeta = function () {
            $("#cmbTipoCarpeta option").each(function () {
                $(this).hide();
            });
            $("#cmbTipoCarpeta option[value='0']").show();
            var cveTipoJuzgado = $("#cmbTipoJuzgado").val();
            if (cveTipoJuzgado == 1) {//control
                //                $("#cmbTipoCarpeta option[value=8]").show();
                $("#cmbTipoCarpeta option[value=2]").show();
                $("#cmbTipoCarpeta option[value=1]").show();
                //                $("#cmbTipoCarpeta option[value=7]").show();
            } else {
                if (cveTipoJuzgado == 3) {//ejecucion
                    //                    $("#cmbTipoCarpeta option[value=8]").show();
                    $("#cmbTipoCarpeta option[value=5]").show();
                    //                    $("#cmbTipoCarpeta option[value=7]").show();
                } else {
                    if (cveTipoJuzgado == 2) {//juicio
                        //                        $("#cmbTipoCarpeta option[value=8]").show();
                        $("#cmbTipoCarpeta option[value=3]").show();
                        //                        $("#cmbTipoCarpeta option[value=7]").show();
                    } else {
                        if (cveTipoJuzgado == 4) {//tribunal
                            //                            $("#cmbTipoCarpeta option[value=8]").show();
                            $("#cmbTipoCarpeta option[value=4]").show();
                            //                            $("#cmbTipoCarpeta option[value=7]").show();
                        }
                    }
                }
            }
            if (cveTipoJuzgado == 0) {
                $("#cmbTipoCarpeta option").each(function () {
                    $(this).show();
                });
            }

            $("#cmbTipoCarpeta").val(0);
        };
        cargarTipoCarpeta = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
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
                            if (parseInt(json.data[i].cveTipoCarpeta) <= 5 && parseInt(json.data[i].cveTipoCarpeta) != 4) {
                                $("#cmbTipoCarpeta").append($('<option id="cmbTipoCarpeta' + json.data[i].cveTipoCarpeta + '"></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                            }
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
        cargarJuzgadores = function () {
            var strDatos = "accion=consultar";
            //strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
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
                            $("#cmbJuzgadores").append($('<option></option>').val(json.data[i].idJuzgador).html(json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].materno));
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
        cargarEtapasProcesales = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/etapasprocesales/EtapasprocesalesFacade.Class.php",
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
                            $("#cmbEtapaProcesal").append($('<option></option>').val(json.data[i].cveEtapaProcesal).html(json.data[i].desEtapaProcesal));
                            $("#cmbEtapaProcesal2").append($('<option></option>').val(json.data[i].cveEtapaProcesal).html(json.data[i].desEtapaProcesal));
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

        cargarJuzgadoresPorTipo = function () {
            var strDatos = "accion=consultar";
            //        strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                data: strDatos,
                async: true,
                global: false,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        //                    $("#cmbPorJuez").html($('<option value="0">Seleccione una opci&oacute;n</option>'));
                        for (var i = 0; i < json.totalCount; i++) {
                            //                        if ($("#cmbTipoJuez").val() == "0") {
                            //                            $("#cmbPorJuez").append($('<option></option>').val(json.data[i].idJuzgador).html(json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].paterno));
                            //                        } else {
                            //                            if (json.data[i].cveTipoJuzgador === $("#cmbTipoJuez").val()) {
                            $("#cmbPorJuez").append($('<option></option>').val(json.data[i].idJuzgador).html(json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].materno));
                            //                            }
                            //                        }
                        }
                    } else {
                        $("#cmbPorJuez").html($('<option value="0">No hay juzgadores de tipo' + $("#cmbTipoJuez").val() + '</option>'));
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        cargarTipoJuzgadores = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposjuzgadores/TiposjuzgadoresFacade.Class.php",
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
                            $("#cmbTipoJuez").append($('<option></option>').val(json.data[i].cveTipoJuzgador).html(json.data[i].desTipoJuzgador));
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
                            if (json.data[i].cveTipoJuzgado < 4) {
                                $("#cmbTipoJuzgado").append($('<option></option>').val(json.data[i].cveTipoJuzgado).html(json.data[i].desTipoJuzgado));
                            }
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

        cargarEstatusAudiencia = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estatusaudiencias/EstatusaudienciasFacade.Class.php",
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
                            $("#cmbEstatusAudiencia").append($('<option></option>').val(json.data[i].cveEstatusAudiencia).html(json.data[i].desEstatusAudiencia));
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
            strDatos += "&activo=S";
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
        muestraOpc = function (opc) {
            if (opc == 1) {
                $('#anio1').show();
                $('#divRangoFechas').hide();
                $('#cmbM').hide();
                $('#cmbSelectMes').val();
            } else if (opc == 2) {
                $('#cmbM').show();
                $('#anio1').hide();
                $('#divRangoFechas').hide();
            } else if (opc == 3) {
                $('#divRangoFechas').show();
                $('#anio1').hide();
                $('#cmbM').hide();
                $('#cmbSelectMes').val();
            }

        }
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
                                            if (nombreHijo.nomFormulario == 'AUDIENCIAS') {
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
        $(function () {
            if (grupo == 128 || grupo == 97) {
                $("#divDetalle").show();
            }
            $("#checkDetalle").click(function () {
                if ($("#checkDetalle").is(":checked")) {

                    $("#geografia").show();


                } else {
                    $("#geografia").hide();
                    $("#cmbRegion").val("");
                    $("#cmbDistrito").val("");
                    $("#cmbJuzgado").val("");
                }
            });
            cargarRegiones();
            cargarDistritos();
            cargarJuzgado();
            obtenerPermisosFormulario('REPORTES', 'AUDIENCIAS');
            //obtenerPermisos();
            cargarEstatusAudiencia();
            cargarJuzgadores();
            cargarEtapasProcesales();
            cargarTipoJuzgadores();
            cargarJuzgadoresPorTipo();
            cargarTipoJuzgado();
            cargarTipoCarpeta();
            $("#audienciasPorJuez").prop("checked", false);
            $("#audienciasDeIniciales").prop("checked", false);
            $("#audienciasDeJuicio").prop("checked", false);
            $("#divPorJuez").hide();
            $("#divJuzgadores").hide();
            $("#txtAnio").validaCampo('0123456789');
            $("#txtAnioMes").validaCampo('0123456789');
            $("#cmbEtapaProcesal").is(function () {
                if ($("#cmbEtapaProcesal").val() != 0) {
                    $("#porJuez").prop("disabled", false);
                    if ($("#porJuez").is(':checked') == true) {
                        $("#porJuez").prop("disabled", false);
                        $("#divJuzgadores").show();
                    } else {
                        $("#divJuzgadores").hide();
                        $("#cmbJuzgadores").val(0);
                    }
                } else {
                    $("#porJuez").prop("checked", "");
                    $("#porJuez").prop("disabled", true);
                    $("#divJuzgadores").hide();
                    $("#cmbJuzgadores").val(0);
                }
            });
            $("#cmbEtapaProcesal").change(function () {
                if ($("#cmbEtapaProcesal").val() != 0) {
                    $("#porJuez").prop("disabled", false);
                    if ($("#porJuez").is(':checked') == true) {
                        $("#porJuez").prop("disabled", false);
                        $("#divJuzgadores").show();
                    } else {
                        $("#divJuzgadores").hide();
                        $("#cmbJuzgadores").val(0);
                    }
                } else {
                    $("#porJuez").prop("checked", "");
                    $("#porJuez").prop("disabled", true);
                    $("#divJuzgadores").hide();
                    $("#cmbJuzgadores").val(0);
                }
            });
            $("#txtfechaInicial").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $("#txtfechaFinal").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
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
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>