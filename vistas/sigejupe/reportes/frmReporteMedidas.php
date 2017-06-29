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
    <input type="hidden" id="hiddenCveJuzgado" value="">
    <input type="hidden" id="hiddenVariables" value="" >
    <input type="hidden" id="hiddenNivel" value=0>
    <input type="hidden" id="hiddenTipoMedida" value=0>
    <input type="hidden" id="hiddenDesRegion" value="">
    <input type="hidden" id="hiddenDesDistrito" value="">
    <input type="hidden" id="hiddenDesJuzgado" value="">
    <input type="hidden" id="hiddenFechaHoy" value="">
    <input type="hidden" id="hiddenFechaHoraHoy" value="">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Reporte de Medidas
            </h5>
        </div>
        <div  id="panelPrincipal" class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divPanelControl">
                    <div class="form-group">
                        <label class="col-md-4 control-label">&nbsp;</label>
                        <div class="radio col-md-5">
                            <label><input type="radio" name="optradio" value="1" id="radio1" onclick="radio()">A&ntilde;o de la carpeta</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">&nbsp;</label>
                        <div class="radio col-md-5">
                            <label><input type="radio" name="optradio" id="radio2" onclick="radio()">Por mes</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">&nbsp;</label>
                        <div class="radio col-md-5">
                            <label><input type="radio" name="optradio" id="radio3" onclick="radio()">Rango de fecha</label>
                        </div>
                    </div>
                    <div id="divCarpeta" style="display: none">
                        <div class="form-group">
                            <label class="col-md-4 control-label needed">A&ntilde;o de la carpeta</label>
                            <div class="col-md-5">
                                <input type="text" id="txtAnioCarpeta" class="form-control" maxlength="4" onkeypress="return validarNumeros(event)">
                            </div>
                        </div>
                    </div>
                    <div id="divMes"style="display: none">
                        <div class="form-group">
                            <label class="col-md-4 control-label needed">Mes (Radicaci&oacute;n)</label>
                            <div class="col-md-5">
                                <select name="cmbMes" id="cmbMes">
                                    <option value="1">ENERO</option>
                                    <option value="2">FEBRERO</option>
                                    <option value="3">MARZO</option>
                                    <option value="4">ABRIL</option>
                                    <option value="5">MAYO</option>
                                    <option value="6">JUNIO</option>
                                    <option value="7">JULIO</option>
                                    <option value="8">AGOSTO</option>
                                    <option value="9">SEPTIEMBRE</option>
                                    <option value="10">OCTUBRE</option>
                                    <option value="11">NOVIEMBRE</option>
                                    <option value="12">DICIEMBRE</option>
                                </select>
                                /<input type="text" class="form-inline Relacionado" id="txtAnio" id="txtAnio" maxlength="4" placeholder="A&ntilde;o" onkeypress="return validarNumeros(event)">
                            </div>
                        </div>
                    </div>
                    <div id="divFecha"style="display: none">
                        <div class="form-group">
                            <label class="col-md-4 control-label needed">Fecha Inicial (Medida)</label>
                            <div class="col-md-5">
                                <input type="text" id="fechaConsultar" placeholder="FECHA INICIAL" class="form-control datepicker"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label needed">Fecha Final (Medida)</label>
                            <div class="col-md-5">
                                <input type="text" id="fechaConsultarEnd" placeholder="FECHA FINAL" class="form-control datepicker"/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" style="display:none;">                                                                
                        <label class="control-label col-md-4" id="lblRelationName">No.</label>
                        <div id="divSinRelacion" class="col-md-5">
                            <input type="text" id="txtNumero" class="form-inline Relacionado" id="txtNumero" placeholder="N&uacute;mero" maxlength="5" onkeypress="return validarNumeros(event);">/<input type="text" class="form-inline Relacionado" id="txtAnio" id="txtAnio" maxlength="4" placeholder="A&ntilde;o" onkeypress="return validarNumeros(event);">
                        </div> 
                        <label class="control-label col-xs-4" id="labelEncontrado"></label>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4">Medida</label>
                        <div class="col-md-5">
                            <select class="form-control" name="cmbTipoMedida" id="cmbTipoMedida" onclick="comboTipoMedida()">
                                <option value="0">Seleccione una opci&oacute;n</option>
                                <option value="2">Cautelar</option>
                                <option value="1">Protecci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div id="divCautelar" style="display:none;">
                        <div class="form-group"> 
                            <label class="control-label col-md-5">Tipo Medida Cautelar</label>
                            <div class="col-md-1">
                                <input type="checkbox" id="checkMCautelar" class="form-inline" >
                            </div>
                            <div class="col-md-3" id="divMCautelar" style="display:none">
                                <select class="form-control" name="cmbMCautelar" id="cmbMCautelar">
                                    <option value="0">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>                                
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
                    <div class="col-xs-offset-3 col-xs-9">
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="previoConsultar(true, 1);"> 
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" onclick="imprimir('divTableNivel');" style="display:none">
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar exporta" id="inputExportarPDF" value="Exportar PDF" onclick="exportar('exportarPDF', 'divTableNivel');" style="display:none">
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputExportarExcel" value="Exportar Excel" onclick="exportar('exportarExcel', 'divTableNivel');" style="display:none">
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar(1);" > 
                        </div>
                    </div>
                </div>
                <div class="form-group" id="paginacion" style="display: none">
                    <div class="form-group col-md-1"> 
                    </div>
                    <div class=" col-md-3"> 
                        <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar(0, true);" > 
                        <label id="totalReg"></label>
                    </div>
                    <div id="divPaginador" class=" col-md-3" >
                        <label class="control-label">P&aacute;gina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="paginacion(false);" >
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class=" col-md-4" >
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
                <div id="divConsulta" style="display: none">
                    <div class="form-group" id="inputRegresar2">
                        <label class="control-label col-md-1">&nbsp;</label>
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" value="Regresar" onclick="regresar(0, true);"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <center><label class="control-label" id="idLabelDescripcion"></label> </center>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-1"></label>
                        <label id="rutaIntrospeccion"></label>
                    </div>
                    <CENTER>
                        <div id="divGrafica" style="width:90%; height:500px;" >

                        </div></CENTER>
                    <div id="divTableNivel" class="col-xs-8" style="overflow: auto; width: 100%;">

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-10">&nbsp;</label>
                        <div class="col-md-2">
                            <label id="labelSubTotal"></label>
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
                <div id="ifr" style="display:none;">
                    <form action="../fachadas/sigejupe/reportes/exportarReportes.php" id="formIframe" method="post" target="my_frame">
                        <input type="hidden" name="contenido" id="contenidoIframe" value="" />
                        <input type="hidden" name="accion" id="accionIframe" value="" />
                        <input type="hidden" name="info" id="infoIframe" value="" />
                    </form>
                    <iframe name='my_frame' src='../fachadas/sigejupe/reportes/exportarReportes.php'></iframe>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';
        var grafica = null;

        imprimir = function (div) {
            var divContents = $("#" + div).html();
            var usuario = '<?php echo $_SESSION["nombre"]; ?>';
            fechaBaseDatos({hiddenFechaHoraHoy: "fecha-hora"});
            divContents = divContents.replace(/<input(.*?)>/g, '');
            divContents = divContents.replace(/Buscar:/g, '');
            divContents += "<br><br>Fecha y hora de consulta:  " + $("#hiddenFechaHoraHoy").val();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>SIGEJUPE</title>');
            printWindow.document.write('</head><body><center><img  src="img/logoPjAcuses.jpg"></center> <br><center><label >Usuario:  ' + usuario + '</label></center><br><br>');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        };
        exportar = function (accion, div) {
            var usuario = '<?php echo $_SESSION["nombre"]; ?>';
            var nombreArchivo = "REPORTE_MEDIDAS";
            var tituloReporte = $("#idLabelDescripcion").text();
            var columnas = [];
            var tr = 0;
            $.each($("#tblResultadosGridAct tr"), function () {
                if (tr > -2) {
                    $.each($(this).find('th'), function () {
                        columnas.push("1");
                    });
                }
                tr = tr - 1;
            });
            $.each($("#tblResultadosGridAct td"), function () {
                $(this).attr("id", "lng");
            });
            $.each($("#tblResultadosGridAct th"), function () {
                $(this).attr("id", "lng");
            });
            var numPixeles = 0;
            if (columnas.length < 12) {
                numPixeles = (950 / columnas.length);
            } else {
                $.each($("#tblResultadosGridAct td"), function () {
                    if ($(this).html().length > 10) {
                        $(this).attr("id", "os");
                    }
                });
                numPixeles = (1100 / columnas.length);
            }
            var contenido = $("#" + div).html();
            contenido = contenido.replace('width="100%"', '');
            contenido = contenido.replace(/Buscar:/g, '');
            contenido = contenido.replace(/width/g, '  ');
            contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px;"');
            contenido = contenido.replace(/id="os"/g, 'style="width:100px;"');
            contenido = contenido.replace(/<center>/g, '');
            contenido = contenido.replace(/<\/center>/g, '');
            contenido = contenido.replace(/<input(.*?)>/g, '');

            fechaBaseDatos({hiddenFechaHoraHoy: "fecha-hora"});
            $("#contenidoIframe").val(contenido);
            $("#infoIframe").val(usuario + "&@" + tituloReporte + "&@" + nombreArchivo + "&@" + $("#labelSubTotal").text() + "&@" + $("#rutaIntrospeccion").html() + "&@" + $("#hiddenFechaHoraHoy").val());
            $("#accionIframe").val(accion);
            $("#divAlertInfo").html("Generando Archivo");
            $("#divAlertInfo").show("slide");
            setTimeAlert("divAlertInfo");
            $("#formIframe").submit();
        };
        limpiar = function (bandera) {
            $("#inputRegresar2").show();
            $("#inputConsultar").show();
            $("#txtNumero").val("");
            $("#inputImprimir").hide();
            $("#inputExportarPDF").hide();
            $("#inputExportarExcel").hide();
            $("#divConsulta").hide();
            $("#paginacion").hide();
            if (bandera == 1) {
                $("#txtAnioCarpeta").val("");
                $("#cmbMes").val(1);
                $("#txtAnio").val("");
                $('#fechaConsultar').val(fechaHoy());
                $('#fechaConsultarEnd').val(fechaHoy());
            }
            $("#radio1").prop("checked", "");
            $("#radio2").prop("checked", "");
            $("#radio3").prop("checked", "");
            radio();
            $("#cmbTipoMedida").val(0);
            comboTipoMedida();
            $("#hiddenNivel").val(0);
            $("#hiddenTipoMedida").val(0);
            $("#divGrafica").html("");
            $("#divConsulta").hide();
            $("#cmbGrafica").val(1);
            $("#divGrafica").hide();
            $("#hiddenVariables").val("");
            $("#h5titulo").html("Reporte de Medidas");
        };
        comboTipoMedida = function () {
            $("#checkMCautelar").prop("checked", "");
            tipoMedidaCautelar();
            if ($("#cmbTipoMedida").val() == 2) {//Medida cautelar
                $("#divCautelar").show();
            } else {
                $("#divCautelar").hide();
            }
        };
        tipoMedidaCautelar = function () {
            $("#cmbMCautelar").val(0);
            if ($("#checkMCautelar").is(":checked")) {
                $("#divMCautelar").show();
            } else {
                $("#divMCautelar").hide();
            }
        };
        radio = function () {
            $("#txtAnioCarpeta").val("");
            $("#txtAnio").val("");
            $("#cmbMes").val(1);
            $('#fechaConsultar').val(fechaHoy());
            $('#fechaConsultarEnd').val(fechaHoy());
            if ($("#radio1").is(':checked')) {
                $("#divCarpeta").show();
            } else {
                $("#divCarpeta").hide();
            }
            if ($("#radio2").is(':checked')) {
                $("#divMes").show();
            } else {
                $("#divMes").hide();
            }
            if ($("#radio3").is(':checked')) {
                $("#divFecha").show();
            } else {
                $("#divFecha").hide();
            }
        };
        filtro = function () {
            var strDatos = "";
            strDatos += "&origen=" + $("#cmbTipoMedida").val();
            var mensaje = "";
            if ($("#radio3").is(':checked')) {
                strDatos += "&txtFecInicialBusqueda=" + $("#fechaConsultar").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#fechaConsultarEnd").val();
                mensaje = " de " + $("#fechaConsultar").val() + " a " + $("#fechaConsultarEnd").val();
            } else {
                if ($("#radio2").is(':checked')) {
                    strDatos += "&porMes=";
                    mensaje = " en el mes de  ";
                    if ($("#cmbMes").val() != 0) {
                        strDatos += $("#cmbMes").val();
                        mensaje += $("#cmbMes option:selected").text() + " ";
                    }
                    strDatos += "/";
                    if ($("#txtAnio").val() != "") {
                        strDatos += $("#txtAnio").val();
                        mensaje += " de " + $("#txtAnio").val();
                    }
                } else {
                    if ($("#radio1").is(':checked')) {
                        strDatos += "&anio=" + $("#txtAnioCarpeta").val();
                        mensaje = " en el A\u00F1o " + $("#txtAnioCarpeta").val();
                    }
                }
            }
            mensaje += " en el Estado de M\u00E9xico";
            switch ($("#cmbTipoMedida").val()) {
                case "0":
                    $("#idLabelDescripcion").text("Reporte Medidas" + mensaje);
                    break;
                case "1":
                    $("#idLabelDescripcion").text("Reporte Medidas Protecci\u00F3n" + mensaje);
                    break;
                case "2":
                    $("#idLabelDescripcion").text("Reporte Medidas Cautelares" + mensaje);
                    break;
            }
            if ($("#checkMCautelar").is(':checked')) {
                strDatos += "&mCautelar=S";
                if ($("#cmbMCautelar").val() != 0) {
                    strDatos += "&cveTipoMedidaCautelar=" + $("#cmbMCautelar").val();
                }
            }
            return strDatos;
        };
        paginacion = function (paginar) {
            consultar(paginar, $("#hiddenNivel").val());
        };
        preGestorConsulta = function (nivel, json, i) {
            var strDatos = "";
            $("#cmbNumReg").val(100);
            $("#cmbTipoMedida").val(json.resultados[i].origen);
            if ($("#cmbTipoMedida").val() == 2) {//Medida cautelar
                $("#divCautelar").show();
                if (($("#checkMCautelar").is(":checked")) && (json.resultados[i].cveTipoMedidaCautelar != null)) {
                    $("#cmbMCautelar").val(json.resultados[i].cveTipoMedidaCautelar);
                }
            }
            if (nivel == 3) {
                strDatos = "&cveRegion=" + json.resultados[i].cveRegion;
                $("#hiddenDesRegion").val(json.resultados[i].desRegion);
                $("#hiddenCveRegion").val(json.resultados[i].cveRegion);
            }
            if (nivel == 4) {
                strDatos = "&cveDistrito=" + json.resultados[i].cveDistrito;
                $("#hiddenDesDistrito").val(json.resultados[i].desDistrito);
                $("#hiddenCveDistrito").val(json.resultados[i].cveDistrito);
            }
            if (nivel == 5) {
                $("#hiddenDesJuzgado").val(json.resultados[i].desJuzgado);
                strDatos = "&cveJuzgado=" + json.resultados[i].cveJuzgado;
                strDatos += "&detalles=detalle";
                $("#hiddenCveJuzgado").val(json.resultados[i].cveJuzgado);
            }
            $("#hiddenVariables").val(strDatos);
        };
        gestorConsulta = function (bandera, nivel, json, i) {
            preGestorConsulta(nivel, json, i);
            consultar(bandera, nivel);
        };
        gestorNivel = function (json, bandera) {
            graficar(json);
            var indice = $("#cmbPaginacion").val();
            indice = (indice - 1) * $("#cmbNumReg").val();
            var table = "<table id='tblResultadosGridAct' border='1' class='table table-hover table-striped table-bordered'>";
            table += "<thead><tr>";
            var jsonDatos = JSON.stringify(json);
            var subTotal = 0;
            $("#labelSubTotal").text("");
            $("#divConsulta").show();
            $("#inputImprimir").show();
            $("#inputExportarPDF").show();
            $("#inputExportarExcel").show();
            switch ($("#hiddenNivel").val()) {
                case "1":
                    table += "<th>N&uacute;m.</th><th>Estado</th><th>Medida</th>";
                    if ($("#checkMCautelar").is(":checked")) {//medidas cautelar
                        table += "<th>T. Medida</th>";
                    }
                    if (json.totalCount > 0) {
                        table += "<th>Sub. Total</th></tr></thead><tbody>";
                        for (var i = 0; i < json.totalCount; i++) {
                            table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 2 + "," + jsonDatos + "," + i + ")'>";
                            table += "<td > " + (i + 1 + indice) + "</td><td>M&eacute;xico</td>";
                            if (json.resultados[i].origen == 1) {//medidas de proteccion
                                table += "<td>Protecci&oacute;n</td>";
                            } else {
                                table += "<td>Cautelares</td>";
                                if ($("#checkMCautelar").is(":checked")) {
                                    if ($("#cmbMCautelar").val() > 0) {
                                        table += "<td>" + $("#cmbMCautelar option:selected").text() + "</td>";
                                    } else {
                                        table += "<td>" + $("#cmbMCautelar option[value='" + json.resultados[i].cveTipoMedidaCautelar + "']").text() + "</td>";
                                    }
                                }
                            }
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                            subTotal = subTotal - json.resultados[i].totalCount;
                            table += "</tr> ";
                        }
                    } else {
                        mostrarMensaje("Sin resultados a mostrar", 1, 1);
                        table += "<th>Total</th></tr></thead><tbody>";
                        table += "<tr>";
                        table += "<td>Medidas</td><td>Edo. M&eacute;x.</td>";
                        table += "<td>0</td>";
                        table += "</tr> ";
                    }
                    break;
                case "2":
                    table += "<th>N&uacute;m.</th><th>Regi&oacute;n</th>";
                    table += "<th>Medida</th>";
                    if ($("#checkMCautelar").is(":checked")) {//medidas cautelar
                        table += "<th>T. Medida</th>";
                    }
                    table += "<th>Sub. Total</th></tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 3 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>" + json.resultados[i].desRegion + "</td>";
                        if (json.resultados[i].origen == 1) {//medidas de proteccion
                            table += "<td>Protecci&oacute;n</td>";
                        } else {
                            table += "<td>Cautelares</td>";
                            if ($("#checkMCautelar").is(":checked")) {
                                if ($("#cmbMCautelar").val() > 0) {
                                    table += "<td>" + $("#cmbMCautelar option:selected").text() + "</td>";
                                } else {
                                    table += "<td>" + $("#cmbMCautelar option[value='" + json.resultados[i].cveTipoMedidaCautelar + "']").text() + "</td>";
                                }
                            }
                        }
                        subTotal = subTotal - json.resultados[i].totalCount;
                        table += "<td>" + json.resultados[i].totalCount + "</td>";
                        table += "</tr> ";
                    }
                    break;
                case "3":
                    table += "<th>N&uacute;m.</th><th>Distrito</th>";
                    table += "<th>Medida</th>";
                    if ($("#checkMCautelar").is(":checked")) {//medidas cautelar
                        table += "<th>T. Medida</th>";
                    }
                    table += "<th>Sub. Total</th></tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 4 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>" + json.resultados[i].desDistrito + "</td>";
                        if (json.resultados[i].origen == 1) {//medidas de proteccion
                            table += "<td>Protecci&oacute;n</td>";
                        } else {
                            table += "<td>Cautelares</td>";
                            if ($("#checkMCautelar").is(":checked")) {
                                if ($("#cmbMCautelar").val() > 0) {
                                    table += "<td>" + $("#cmbMCautelar option:selected").text() + "</td>";
                                } else {
                                    table += "<td>" + $("#cmbMCautelar option[value='" + json.resultados[i].cveTipoMedidaCautelar + "']").text() + "</td>";
                                }
                            }
                        }
                        subTotal = subTotal - json.resultados[i].totalCount;
                        table += "<td>" + json.resultados[i].totalCount + "</td>";
                        table += "</tr> ";
                    }
                    break;
                case "4":
                    table += "<th>N&uacute;m.</th><th>Juzgado</th><th>Medida</th>";
                    if ($("#checkMCautelar").is(":checked")) {//medidas cautelar
                        table += "<th>T. Medida</th>";
                    }
                    table += "<th>Sub. Total</th></tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {      //='consultarDetallesNivel(" + true + "," + json.resultados[i].cveJuzgado + ")'>";
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 5 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>" + json.resultados[i].desJuzgado + "</td>";
                        if (json.resultados[i].origen == 1) {//medidas de proteccion
                            table += "<td>Protecci&oacute;n</td>";
                        } else {
                            table += "<td>Cautelares</td>";
                            if ($("#checkMCautelar").is(":checked")) {
                                if ($("#cmbMCautelar").val() > 0) {
                                    table += "<td>" + $("#cmbMCautelar option:selected").text() + "</td>";
                                } else {
                                    table += "<td>" + $("#cmbMCautelar option[value='" + json.resultados[i].cveTipoMedidaCautelar + "']").text() + "</td>";
                                }
                            }
                        }
                        subTotal = subTotal - json.resultados[i].totalCount;
                        table += "<td>" + json.resultados[i].totalCount + "</td>";
                        table += "</tr> ";
                    }
                    break;
                case "5":
                    table += "<th>N&uacute;m.</th>";
                    if ($("#hiddenTipoMedida").val() == 1) {
                        table += "<th>Ofendido</th><th>Medida de protecci&oacute;n</th>";
                    } else {
                        table += "<th>Imputado</th><th>Medida cautelar</th>";
                    }
                    table += "<th>Carpeta</th><th>Fecha I.</th><th>Fecha T.</th>";
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr>";
                        table += "<td> " + (i + 1 + indice) + "</td>";
                        if (json.resultados[i].cveTipoPersona == 1) {
                            table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                        } else {
                            table += "<td>" + json.resultados[i].nombreMoral + "</td>";
                        }
                        table += "<td>" + json.resultados[i].medida + "</td>";
                        table += "<td>" + json.resultados[i].desTipoCarpeta + ": " + json.resultados[i].numero + "/" + json.resultados[i].anio + "</td>";
                        table += "<td>" + fechaMySQLaNormal(json.resultados[i].fechaInicio) + "</td>";
                        table += "<td>" + fechaMySQLaNormal(json.resultados[i].fechaTermino) + "</td>";
                        table += "</tr> ";
                    }
                    break;
            }
            table += "</tbody></table>";
            $("#divTableNivel").html(table);
            $("#tblResultadosGridAct").DataTable({
                paging: false
            });
            $("#divConsulta").show("slide");
            if ((json.totalCount == 1) && (json.resultados[0].totalCount == 0)) {
                $("#divConsulta").hide();
                $("#inputImprimir").hide();
                $("#inputExportarPDF").hide();
                $("#inputExportarExcel").hide();
                mostrarMensaje("Sin resultados a mostrar", 1, 1);
            } else {
                if (parseInt($("#hiddenNivel").val()) < 5) {
                    subTotal = -subTotal;
                    $("#labelSubTotal").text("Total: " + subTotal);
                }
            }
            if ((bandera) && (i > 99)) {
                calcularPaginas();
            }
        };
        previoConsultar = function (bandera, nivel) {
            $("#hiddenNivel").val(0);
            $("#hiddenTipoMedida").val(0);
            $("#hiddenVariables").val("");
            consultar(bandera, nivel);
        };
        validarParametrosBusqueda = function () {
            var mensaje = "";
            var error = 0;
            if ($("#radio3").is(':checked')) {
                if (($("#fechaConsultar").val() == "") || ($("#fechaConsultarEnd").val() == "")) {
                    mensaje = "Escriba una fecha";
                    error = 1;
                }
            } else {
                if (($("#radio2").is(':checked')) && (($("#txtAnio").val() == ""))) {
                    mensaje = "Escriba el a\u00F1o";
                    error = 2;
                } else {
                    if (($("#radio1").is(':checked')) && ($("#txtAnioCarpeta").val() == "")) {
                        mensaje = "Escriba el a\u00F1o de la carpeta";
                        error = 3;
                    }
                }
            }
            if (error > 0) {
                $("#inputImprimir").hide();
                $("#inputExportarPDF").hide();
                $("#inputExportarExcel").hide();
                $("#divAlertWarning").html("ERROR. " + mensaje);
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
                return false;
            }
            return true;
        };
        consultar = function (bandera, nivel) {
            $("#hiddenNivel").val(nivel);
            $("#divConsulta").hide("slide");
            if (bandera) {
                $("#inputRegresar2").show();
                $("#paginacion").hide();
                $("#cmbPaginacion").val(1);
            }
            var strDatos = "accion=consultar_medidas_Reporte";
            strDatos += "&activo=S";
            strDatos += "&paginacion=true";
            strDatos += "&cantxPag=" + $("#cmbNumReg").val();
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            strDatos += "&nivel=" + nivel;
            strDatos += $("#hiddenVariables").val();
            strDatos += filtro();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReportemedidasFacade.Class.php",
                data: strDatos,
                async: true,
                //dataType: "html",
                beforeSend: function (objeto) {
                    return validarParametrosBusqueda();
                },
                success: function (datos) {
                    //console.log(datos);
                    var json = "";
                    json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
                        //$("#inputConsultar").hide();
                        encabezado();
                        gestorNivel(json, bandera);
                    } else {
                        mostrarMensaje("Sin resultados a mostrar", 1);
                        $("#divConsulta").hide();
                        $("#inputImprimir").hide();
                        $("#inputExportarPDF").hide();
                        $("#inputExportarExcel").hide();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    mostrarMensaje("Error en la peticion (consulta):\n\n" + quepaso, 3);
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
            var num = parseFloat(numero).toFixed(2);
            num = num.split('.');
            if (num[1] == 0) {
                return num[0];
            }
            return num[0] + '.' + num[1];
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
                        if ($("#checkMCautelar").is(":checked")) {
                            categorias[i] = $("#cmbMCautelar option[value='" + json.resultados[i].cveTipoMedidaCautelar + "']").text();
                        } else if (json.resultados[i].origen == 1) {
                            categorias[i] = "PROTECCION";
                        } else {
                            categorias[i] = "CAUTELARES";
                        }
                        series[i] = parseInt(json.resultados[i].totalCount);
                    }


                    break;
                case "2":
                    nombreX = "REGIONES";
                    for (var i = 0; i < json.totalCount; i++) {
                        categorias[i] = json.resultados[i].desRegion;
                        if ($("#checkClasDelitos").is(":checked") || $("#checkCarEjecu").is(":checked")) {
                            graficar = false;
                        } else if ($("#checkConsumaciones").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCJ);
                        } else if ($("#checkDetenido").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCJ);
                        } else if ($("#checkDelitos").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCJ);
                        } else {
                            series[i] = parseInt(json.resultados[i].totalCount);
                        }
                    }

                    break;
                case "3":
                    nombreX = "DISTRITOS";
                    for (var i = 0; i < json.totalCount; i++) {
                        categorias[i] = json.resultados[i].desDistrito;
                        if ($("#checkClasDelitos").is(":checked") || $("#checkCarEjecu").is(":checked")) {
                            graficar = false;
                        } else if ($("#checkConsumaciones").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCJ);
                        } else if ($("#checkDetenido").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCJ);
                        } else if ($("#checkDelitos").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCJ);
                        } else {
                            series[i] = parseInt(json.resultados[i].totalCount);
                        }
                    }

                    break;
                case "4":
                    nombreX = "JUZGADOS";
                    for (var i = 0; i < json.totalCount; i++) {
                        categorias[i] = json.resultados[i].desJuzgado;
                        if ($("#checkClasDelitos").is(":checked") || $("#checkCarEjecu").is(":checked")) {
                            graficar = false;
                        } else if ($("#checkDelitos").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCJ);
                        } else if ($("#checkConsumaciones").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCJ);
                        } else if ($("#checkDetenido").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCJ);
                        } else {
                            series[i] = parseInt(json.resultados[i].totalCount);
                        }
                    }
                    break;
                case "5":
                    $("#divGrafica").html("");
                    $("#divGrafica").hide();
                    break;
            }
            if ($("#hiddenNivel").val() < 5 && graficar) {
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
                            return "<span style='color{point.color}'>" + this.x + "</span><br><b>" + (this.y).toLocaleString('en-US') + " " + nombreY + "</b>";
                        } else {
                            return "<b>" + (this.y).toLocaleString('en-US') + " " + nombreY + "</b>";
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
                        return (this.y).toLocaleString('en-US');
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
                    return (this.y).toLocaleString('en-US')/* + " " + nombreY*/;
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
            $("#inputRegresar2").hide();
            var url = "../fachadas/sigejupe/reportes/ReportemedidasFacade.Class.php";
            var strDatos = "accion=consultar_medidas_Reporte";
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
                        $("#totalReg").text("Total: " + totalRegistros);
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
                    console.log("Ocurrio un error en la paginacion: " + quepaso);
                }
            });
        };
        encabezado = function () {
            var mensaje = "";
            var rutaIntrospeccion = "";
            if ($("#hiddenNivel").val() == 1) {
                //$("#idLabelUbicacion").val("Edo. M&eacute;x.");
                mensaje = " / Total";
            }
            if ($("#hiddenNivel").val() == 2) {
                rutaIntrospeccion = "Estado: <b>M&Eacute;XICO</b>";
                mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                mensaje += " / X Regi&oacute;n";
            }
            if ($("#hiddenNivel").val() == 3) {
                rutaIntrospeccion = "Estado: <b>M&Eacute;XICO</b>";
                rutaIntrospeccion += "<br>Regi&oacute;n: <b>" + $("#hiddenDesRegion").val() + "</b>";
                mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>X Regi&oacute;n</SPAN>";
                mensaje += " / Distrito";
            }
            if ($("#hiddenNivel").val() == 4) {
                rutaIntrospeccion = "Estado: <b>M&Eacute;XICO</b>";
                rutaIntrospeccion += "<br>Regi&oacute;n: <b>" + $("#hiddenDesRegion").val() + "</b>";
                rutaIntrospeccion += "<br>Distrito: <b>" + $("#hiddenDesDistrito").val() + "</b>";
                mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>X Regi&oacute;n</SPAN>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(3,false);'>Distrito</SPAN>";
                if ($("#radioMunicipio").is(":checked")) {
                    mensaje += " / Municipio";
                } else {
                    mensaje += " / Juzgado";
                }
            }
            if ($("#hiddenNivel").val() > 4) {
                rutaIntrospeccion = "Estado: <b>M&Eacute;XICO</b>";
                rutaIntrospeccion += "<br>Regi&oacute;n: <b>" + $("#hiddenDesRegion").val() + "</b>";
                rutaIntrospeccion += "<br>Distrito: <b>" + $("#hiddenDesDistrito").val() + "</b>";
                rutaIntrospeccion += "<br>Juzgado: <b>" + $("#hiddenDesJuzgado").val() + "</b>";
                mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>X Regi&oacute;n</SPAN>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(3,false);'>Distrito</SPAN>";
                if ($("#radioMunicipio").is(":checked")) {
                    mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(4,false);'>Municipio</SPAN>";
                } else {
                    mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(4,false);'>Juzgado</SPAN>";
                }
                mensaje += " / Detalles";
            }
            $("#rutaIntrospeccion").html(rutaIntrospeccion);
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Reporte de Medidas</span>" + mensaje);
        };
        regresar = function (nivel, bandera) {
            if (bandera == 1) {
                nivel = $("#hiddenNivel").val() - 1;
            }
            $("#cmbNumReg").val(100);
            $("#cmbPaginacion").val(1);
            $("#inputImprimir").hide();
            $("#inputExportarPDF").hide();
            $("#inputExportarExcel").hide();
            var strDatos = "";
            if (nivel == 0) {
                $("#hiddenTipoMedida").val(0);
                $("#h5titulo").html("Reporte de Medidas");
                $("#divConsulta").hide();
                $("#paginacion").hide();
            } else {
                if (nivel == 1) {
                    $("#hiddenTipoMedida").val(0);
                    $("#paginacion").hide();
                }
                if (nivel == 3) {
                    strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                }
                if (nivel == 4) {
                    strDatos += "&cveDistrito=" + $("#hiddenCveDistrito").val();
                }
            }
            $("#hiddenVariables").val(strDatos);
            if (nivel > 0) {
                consultar(true, nivel);
            }
        };
        cargarTipoMedidaCautelar = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposmedidascautelares/TiposmedidascautelaresFacade.Class.php",
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
                            $("#cmbMCautelar").append($('<option></option>').val(json.data[i].cveTipoMedidaCautelar).html(json.data[i].desTipoMedidaCautelar));
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    mostrarMensaje("Error en la peticion (cargar Ocupacion):\n\n" + quepaso, 3);
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
                                            if (nombreHijo.nomFormulario == 'MEDIDAS DE PROTECCION Y CAUTELARES') {
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
        fechaHoy = function () {
            return $("#hiddenFechaHoy").val();
        };
        validarFecha = function (date) {
            var x = new Date();
            var fechaActual = new Date();
            var fecha = date.split("/");
            x.setFullYear(fecha[2], fecha[1] - 1, fecha[0]);
            var vecFA = fechaHoy().split("/");
            fechaActual.setFullYear(vecFA[2], vecFA[1] - 1, vecFA[0]);
            if (x > fechaActual) {
                return fechaHoy();
            } else {
                return date;
            }
        };
        validarNumeros = function (evt) {
            var e = evt || event;
            var teclaAscii = e.keyCode || e.which;
            if (((teclaAscii > 47) && (teclaAscii < 58)) || (teclaAscii == 8) || (teclaAscii == 9)) {
                return true;
            }
            return false;
        };
        fechaMySQLaNormal = function (fecha) {
            if ((fecha != "") && (fecha != null)) {
                var fechaHora = fecha.split(" ");
                var vecFecha = fechaHora[0].split("-");
                var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
                if (fechaHora[1] == null) {
                    return fechaNormal;
                }
                var hora = fechaHora[1];
                hora = hora.split(":");
                return fechaNormal + " " + hora[0] + ":" + hora[1];
            }
            return "";
        };
        mostrarMensaje = function (mensaje, tipoError, ocultarConsulta) {
            if (ocultarConsulta) {
                $("#divConsulta").hide();
                $("#paginacion").hide();
            }
            if (tipoError == 1) {
                $("#divAlertInfo").html(mensaje);
                $("#divAlertInfo").show("slide");
                setTimeAlert("divAlertInfo");
            } else {
                if (tipoError == 2) {
                    $("#divAlertWarning").html(mensaje);
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                } else {
                    $("#divAlertDager").html(mensaje);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            }
        };
        $(function () {
            obtenerPermisos();
            cargarTipoMedidaCautelar();
            $("#cmbTipoMedida").change(function () {
                comboTipoMedida();
            });

            fechaBaseDatos({
                hiddenFechaHoy: "fecha"
            });
            $("#fechaConsultar").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $("#fechaConsultarEnd").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $('#fechaConsultar').val(fechaHoy());
            $('#fechaConsultarEnd').val(fechaHoy());
            $('#fechaConsultar').on("dp.change", function (e) {
                $('#fechaConsultarEnd').data("DateTimePicker").minDate(e.date);
            });
            $('#fechaConsultarEnd').on("dp.change", function (e) {
                $('#fechaConsultar').data("DateTimePicker").maxDate(e.date);
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