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
    <input type="hidden" id="hiddenNivel" value="5">
    <input type="hidden" id="hiddenDesRegion" value="">
    <input type="hidden" id="hiddenDesDistrito" value="">
    <input type="hidden" id="hiddenDesJuzgado" value="">
    <input type="hidden" id="hiddenCveJuzgado" value="">
    <input type="hidden" id="hiddenDesConclusion" value="">
    <input type="hidden" id="hiddenCveConclusion" value="">
    <input type="hidden" id="hiddenDesEstatusCarpeta" value="">
    <input type="hidden" id="hiddenCveEstatusCarpeta" value="">
    <input type="hidden" id="hiddenTituloReporte" value="">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Estadistico de Tocas en el Estado de M&eacute;xico.
            </h5>
        </div>
        <div  id="panelPrincipal" class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divPanelControl">
                    <div class="form-group">                                                                
                        <label class="control-label col-md-4" id="lblRelationName">A&ntilde;o de la Toca</label>
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
                        <label class="control-label col-md-4" >Mes (Termino)</label>
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
                        <label class="control-label col-md-4" >Rango de fecha (Termino)</label>
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
                    <div class="form-group" style="display:none;"> 
                        <label class="control-label col-md-4">Estatus Carpeta</label>
                        <div class="col-md-5">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbEstatusCarpeta" id="cmbEstatusCarpeta">
                            </select>
                        </div>                                
                    </div>
                    <div id="divConclusion" style="display:none;">
                        <div class="form-group"> 
                            <label class="control-label col-md-5">Tipo de Conclusi&oacute;n</label>
                            <div class="col-md-5">
                                <input type="checkbox" class="col-md-1 form-control" id="checkConclusiones" >
                                <div id="divCmbConclusiones" class="logobox col-md-3" style="display:none">
                                    <select class=" Relacionado" name="cmbConclusion" id="cmbConclusion" >
                                        <option value="0">Seleccione una opci&oacute;n</option>
                                    </select>
                                </div
                            </div>                                
                        </div>
                    </div>
                    <!--                <div class="form-group"> 
                                        <label class="control-label col-md-4">Tipo de juzgado</label>
                                        <div class="col-md-5">
                                            <div id="divCmbRelaciones" class="logobox"></div>
                                            <select class="form-control Relacionado" name="cmbTipoJuzgado" id="cmbTipoJuzgado">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>                                
                                    </div>-->
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="consultar(true, 5);"> 
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
                    </div><div id="divPaginador" >
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
                <div id="divConsulta" class="form-group" style="display: none;">
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
            var nombreArchivo = "REPORTE_TOCAS";
            var tituloReporte = titulos();
            var total = $("#labelSubTotal").html();
            contenido = contenido.replace(/width/g, '  ');
            contenido = contenido.replace(/Buscar:/g, '');
            contenido = contenido.replace(/onclick="(.*?)":/g, '');
            contenido = contenido.replace(/,/g, ', ');
            contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px; font-size:8pt;"');
            contenido = contenido.replace(/id="os"/g, 'style="width:100px; border-collapse: collapse;"');
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
            $("#checkConclusiones").removeAttr("checked");
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
            $("#cmbConclusion").val(0);
            $("#cmbEstatusCarpeta").val(2);
            $("#divConclusion").hide();
            $("#cmbTipoJuzgado").val(5);
            $("#labelSubTotal").text("");
            $("#divTableNivel").html("");
            $("#paginacion").hide();
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Estadistico de tocas en el Estado de M\u00e9xico.</span>");
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
            strDatos += "&cveEstatusCarpeta=2";
    //            if ($("#cmbEstatusCarpeta").val() != 0) {
    //                strDatos += "&cveEstatusCarpeta="+$("#cmbEstatusCarpeta").val();
    //            }
            strDatos += "&cveTipoJuzgado=5";
            if ($("#checkConclusiones").is(":checked")) {
                strDatos += "&checkConclusiones=true";
            }
            return strDatos;
        };
        fechaMySQLaNormal = function (fecha) {
            if (fecha != "") {
                var fechaHora = fecha.split(" ");
                var vecFecha = fechaHora[0].split("-");
                var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
                fechaHora = fechaHora[1].split(":");
                fechaHora = fechaHora[0] + ":" + fechaHora[1];
                return fechaNormal + " " + fechaHora;
            } else {
                return "";
            }
        };

        etiquetas = function () {
            var etiqueta = "";
            if ($("#cmbEstatusCarpeta").val() == 2) {
                etiqueta += " Terminadas";
            }
            return etiqueta;
        };
        titulos = function () {
            var etiqueta = etiquetas();
            var titulo = "Estadistico de tocas" + etiqueta;
            if ($("#txtAnio").val() != "") {
                titulo += " en el A\u00F1o " + $("#txtAnio").val();
            }
            if ($("#cmbMes").val() != 0 && $("#txtAnioMes").val() != "") {
                titulo += " en el mes de " + obtenerMes($("#cmbMes").val()) + " de " + $("#txtAnioMes").val();
            }
            if ($("#txtfechaInicial").val() != "" && $("#txtfechaFinal").val() != "") {
                titulo += " de " + $("#txtfechaInicial").val() + " a " + $("#txtfechaFinal").val();
            }
            if ($("#checkConclusiones").is(":checked")) {
                titulo += " por Tipo de Conclusi&oacute;n ";
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
            if (nivel == 5) {
                if ($("#checkConclusiones").is(":checked")) {
                    $("#hiddenConclusiones").val(json.resultados[i].cveConclusion);
                    strDatos += "&cveConclusion=" + json.resultados[i].cveConclusion;
                }
                $("#hiddenCveEstatusCarpeta").val(2);
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
            var table = "<table style='text-align:center' id='tblResultadosGridAct' width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered table-responsive' >";
            table += "<thead><tr>";
            var jsonDatos = JSON.stringify(json);
            var aux = "";
            var subTotal = 0;
            var estatus_carpeta = "";
            $("#labelSubTotal").text("");
            switch ($("#hiddenNivel").val()) {
                case "5":
                    var contAmparos = 0;
                    var contO = 0;
                    var contRe = 0;
                    var contR = 0;
                    var contC = 0;
                    var contM = 0;
                    var totalTer = 0;

                    var contTramite = 0;
                    var contConcedido = 0;
                    var contNegado = 0;
                    var contCancelado = 0;
                    var contSeSobresee = 0;

                    var enTramite = "";
                    var concedido = "";
                    var negado = "";
                    var cancelado = "";
                    var seSobresee = "";

                    titulo2 = "<br><label><b>Estado: </b>M\u00C9XICO<br><b>Tribunal: </b>" + json.resultados[0].desJuzgado + "</label><br>";
                    $("#hiddenTituloReporte").val(" Estado: Mexico/ Region: " + json.resultados[0].desRegion + "/ Distrito: " + json.resultados[0].desDistrito + "/ Tribunal: " + json.resultados[0].desJuzgado);
                    table += "<td>N&uacute;m.</td>";
                    table += "<td>Estatus Carpeta</td>";
                    if ($("#checkConclusiones").is(":checked")) {
                        table += "<td>Conclusi&oacuten</td>";
                    }
                    table += "<td>Toca</td>";
                    table += "<td>Fecha de Terminaci&oacute;n</td>";
                    table += "<td>Modifica</td><td>Confirma</td><td>Revoca</td><td>Rep. Prod.</td><td>Otros motivos</td>";
                    table += "<td>Amparo</td>";
                    table += "<td>En Tramite</td><td>Concedido</td><td>Negado</td><td>Desechado</td><td>Se Sobresee</td>";
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        if (json.resultados[i].cveEstatusCarpeta == 1) {
                            estatus_carpeta = "EN TR&Aacute;MITE";
                        } else {
                            estatus_carpeta = json.resultados[i].desEstatusCarpeta;
                        }
                        table += "<tr>";
                        table += "<td> " + (i + 1 + indice) + "</td>";
                        table += "<td>" + estatus_carpeta + "</td>";
                        if ($("#checkConclusiones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConclusion + "</td>";
                        }
                        table += "<td>" + json.resultados[i].desTipoCarpeta + ": " + json.resultados[i].numero + "/" + json.resultados[i].anio + "</td>";
                        table += "<td>" + fechaMySQLaNormal(json.resultados[i].fechaTermino) + "</td>";
                        var modifica = "";
                        var confirma = "";
                        var revoca = "";
                        var repone = "";
                        var otro = "";
                        if (json.resultados[i].cveTipoSentencia != "") {

                            if (json.resultados[i].cveTipoSentencia == 4) {
                                confirma = "X";
                                contC++;
                            } else if (json.resultados[i].cveTipoSentencia == 5) {
                                modifica = "X";
                                contM++;
                            } else if (json.resultados[i].cveTipoSentencia == 6) {
                                repone = "X";
                                contRe++;
                            } else if (json.resultados[i].cveTipoSentencia == 7) {
                                revoca = "X";
                                contR++;
                            } else if (json.resultados[i].cveTipoSentencia == 8) {
                                otro = "X";
                                contO++;
                            }
                            totalTer++
                        }
                        table += "<td>" + modifica + "</td>";
                        table += "<td>" + confirma + "</td>";
                        table += "<td>" + revoca + "</td>";
                        table += "<td>" + repone + "</td>";
                        table += "<td>" + otro + "</td>";

                        table += "<td>";
                        //               $.each(json.resultados[i].amparos, function (index, element) {
                        //                  console.log(index);
                        //                  console.log(element);
                        var enTramiteAUX2 = "";
                        var concedidoAUX2 = "";
                        var negadoAUX2 = "";
                        var canceladoAUX2 = "";
                        var seSobreseeAUX2 = "";
                        $.each(json.resultados[i].amparos, function (index2, element2) {
                            contAmparos++;
                            var enTramiteAUX = "";
                            var concedidoAUX = "";
                            var negadoAUX = "";
                            var canceladoAUX = "";
                            var seSobreseeAUX = "";
                            if (json.resultados[i].amparos.length > 1) {
                                if ((json.resultados[i].amparos.length - 1) == index2) {
                                    table += element2.numAmparo + "/" + element2.aniAmparo;
                                } else {
                                    table += element2.numAmparo + "/" + element2.aniAmparo + "<hr style='margin: 0; '>";
                                }
                            } else {
                                table += element2.numAmparo + "/" + element2.aniAmparo;
                            }

                            if (element2.cveEstatusAmparo == 1) {
                                enTramiteAUX = "X";
                                enTramiteAUX2 += enTramiteAUX;
                                contTramite++;
                            } else if (element2.cveEstatusAmparo == 2) {
                                concedidoAUX = "X";
                                concedidoAUX2 += concedidoAUX;
                                contConcedido++;
                            } else if (element2.cveEstatusAmparo == 3) {
                                negadoAUX = "X";
                                negadoAUX2 += negadoAUX;
                                contNegado++;
                            } else if (element2.cveEstatusAmparo == 4) {
                                canceladoAUX = "X";
                                canceladoAUX2 += cancelado;
                                contCancelado++;
                            } else if (element2.cveEstatusAmparo == 5) {
                                seSobreseeAUX = "X";
                                seSobreseeAUX2 += seSobreseeAUX;
                                contSeSobresee++;
                            }
                            if (json.resultados[i].amparos.length > 1) {
                                if ((json.resultados[i].amparos.length - 1) == index2) {
                                    enTramiteAUX2 += "&nbsp;";
                                } else {
                                    console.log(enTramiteAUX);
                                    console.log(enTramiteAUX2);
                                    if (enTramiteAUX2 == "X") {
                                        enTramiteAUX2 += "<hr style='margin: 0; '>";
                                    } else {
                                        enTramiteAUX2 += "&nbsp;<hr style='margin: 0; '>&nbsp;";
                                    }
                                }
                            } else {
    //                                enTramiteAUX2 += "&nbsp;";
                            }
                            if (json.resultados[i].amparos.length > 1) {
                                if ((json.resultados[i].amparos.length - 1) == index2) {
                                    concedidoAUX2 += "&nbsp;";
                                } else {
                                    console.log(concedidoAUX);
                                    console.log(concedidoAUX2);
                                    if (concedidoAUX2 == "X") {
                                        concedidoAUX2 += "<hr style='margin: 0; '>";
                                    } else {
                                        concedidoAUX2 += "&nbsp;<hr style='margin: 0; '>&nbsp;";
                                    }
                                }
                            } else {
    //                                concedidoAUX2 += "&nbsp;";  
                            }
                            if (json.resultados[i].amparos.length > 1) {
                                if ((json.resultados[i].amparos.length - 1) == index2) {
                                    negadoAUX2 += "&nbsp;";
                                } else {
                                    console.log(negadoAUX);
                                    console.log(negadoAUX2);
                                    if (negadoAUX2 == "X") {
                                        negadoAUX2 += "<hr style='margin: 0; '>";
                                    } else {
                                        negadoAUX2 += "&nbsp;<hr style='margin: 0; '>&nbsp;";
                                    }
                                }
                            } else {
    //                                negadoAUX2 += "&nbsp;";    
                            }
                            if (json.resultados[i].amparos.length > 1) {
                                if ((json.resultados[i].amparos.length - 1) == index2) {
                                    canceladoAUX2 += "&nbsp;";
                                } else {
                                    console.log(canceladoAUX);
                                    console.log(canceladoAUX2);
                                    if (canceladoAUX2 == "X") {
                                        canceladoAUX2 += "<hr style='margin: 0; '>";
                                    } else {
                                        canceladoAUX2 += "&nbsp;<hr style='margin: 0; '>&nbsp;";
                                    }
                                }
                            } else {
    //                                canceladoAUX2 += "&nbsp;";     
                            }
                            if (json.resultados[i].amparos.length > 1) {
                                if ((json.resultados[i].amparos.length - 1) == index2) {
                                    seSobreseeAUX2 += "&nbsp;";
                                } else {
                                    console.log(seSobreseeAUX);
                                    console.log(seSobreseeAUX2);
                                    if (seSobreseeAUX2 == "X") {
                                        seSobreseeAUX2 += "<hr style='margin: 0; '>";
                                    } else {
                                        seSobreseeAUX2 += "&nbsp;<hr style='margin: 0; '>&nbsp;";
                                    }
                                }
                            } else {
    //                                seSobreseeAUX2 += "&nbsp;"; 
                            }

                        });
                        //               });
                        table += "</td>";

                        table += "<td>" + enTramiteAUX2 + "</td>";
                        table += "<td>" + concedidoAUX2 + "</td>";
                        table += "<td>" + negadoAUX2 + "</td>";
                        table += "<td>" + canceladoAUX2 + "</td>";
                        table += "<td>" + seSobreseeAUX2 + "</td>";


                        table += "</tr> ";
                        subTotal = -(i + 1 + indice);
                        aux = "";
                    }
                    subTotal = -subTotal;
                    table += " </tbody><tfoot><tr><td></td><td></td><td></td><td><b>Total de Tocas Terminadas</b></td><td>Modifica</td><td>Confirma</td><td>Revoca</td><td>Rep. Proc.</td><td>Otros Motivos</td><td><b>Total Amparos</b></td><td>En tramite</td><td>Concedido</td><td>Negado</td><td>Desechado</td><td>Se Sobresee</td></tr><tr><td></td><td></td><td></td><td><b>" + json.totalCount + "</b></td><td>" + contM + "</td><td>" + contC + "</td><td>" + contR + "</td><td>" + contRe + "</td><td>" + contO + "</td>" + "<td><b>" + (contAmparos) + "</b></td><td>" + contTramite + "</td><td>" + contConcedido + "</td><td>" + contNegado + "</td><td>" + contCancelado + "</td><td>" + contSeSobresee + "</td></tr></tfoot>"
                    //                $("#labelSubTotal").text("Total: " + subTotal);
                    break;
            }
            table += "</table>";
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
            var strDatos = "accion=consultar_Tocas_Estatus";
            strDatos += "&activo=S";
            strDatos += "&paginacion=true";
            strDatos += "&cantxPag=" + $("#cmbNumReg").val();
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            strDatos += "&nivel=" + nivel;
            strDatos += "&cveJuzgado=" + juzgadoSesion;
            strDatos += $("#hiddenVariables").val();
            strDatos += filtro();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReporteTocasEstatusFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    var env;
                    if (nivel == 5) {
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
        calcularPaginas = function () {
            $("#divRegresar").hide();
            var url = "../fachadas/sigejupe/reportes/ReporteTocasFacade.Class.php";
            var strDatos = "accion=consultar_Tocas_Estatus";
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
                mensaje += " / Detalles";
            }
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Estadistico de Tocas en el Estado de M&eacute;xico.</span>" + mensaje);
        };
        regresar = function (nivel, bandera) {
            if (bandera == 1) {
                nivel = $("#hiddenNivel").val() - 5;
            }
            $("#cmbNumReg").val(100);
            $("#cmbPaginacion").val(1);
            var strDatos = "";
            if (nivel == 0) {
                $("#h5titulo").html("Estadistico de Tocas en el Estado de M&eacute;xico.");
                $("#divConsulta").hide("slide");
                $("#paginacion").hide();
                $("#inputImprimir").hide();
                $("#inputExportarPDF").hide();
                $("#inputExportarExcel").hide();
            } else {
                //            if (nivel == 1) {
                //                $("#paginacion").hide();
                //            }
                //            if (nivel == 2) {
                //                strDatos += "&cveEstatusCarpeta=" + $("#hiddenCveEstatusCarpeta").val();
                //                if ($("#cmbEstatusCarpeta").val() == 2) { //si es TERMINADA
                //                    strDatos += "&cveConclusion=" + $("#hiddenCveConclusion").val();
                //                }
                //                if ($("#checkConclusiones").is(":checked")) {
                //                    strDatos += "&cveConclusion=" + $("#hiddenConclusiones").val();
                //                }
                //            }
                //            if (nivel == 3) {
                //                strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                //                if ($("#checkConclusiones").is(":checked")) {
                //                    strDatos += "&cveConclusion=" + $("#hiddenConclusiones").val();
                //                }
                //            }
                //            if (nivel == 4) {
                //                strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                //                strDatos += "&cveDistrito=" + $("#hiddenCveDistrito").val();
                //                if ($("#checkConclusiones").is(":checked")) {
                //                    strDatos += "&cveConclusion=" + $("#hiddenConclusiones").val();
                //                }
                //            }
                if (nivel == 5) {
                    strDatos += "&cveJuzgado=" + juzgadoSesion;
                }
            }
            $("#hiddenVariables").val(strDatos);
            if (nivel > 0) {
                consultar(true, nivel);
            }
        };
        cargarConclusion = function () {
            var strDatos = "accion=consultarOrdenado";
            strDatos += "&activo=S";
            strDatos += "&orden=ORDER BY desConclusion";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/conclusiones/ConclusionesFacade.Class.php",
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
                            if (json.data[i].juicio == "S") {
                                $("#cmbConclusion").append($('<option></option>').val(json.data[i].cveConclusion).html(json.data[i].desConclusion + "(JUICIO)"));
                            } else {
                                $("#cmbConclusion").append($('<option></option>').val(json.data[i].cveConclusion).html(json.data[i].desConclusion));
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
        cargarEstatusCarpeta = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estatuscarpetas/EstatuscarpetasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    var estatus = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            if (json.data[i].cveEstatusCarpeta == 1) {
                                estatus = "EN TRAMITE";
                                $("#cmbEstatusCarpeta").append($('<option value=' + json.data[i].cveEstatusCarpeta + '></option>').val(json.data[i].cveEstatusCarpeta).html(estatus));
                            } else if (json.data[i].cveEstatusCarpeta == 2) {
                                estatus = "TERMINADA";
                                $("#cmbEstatusCarpeta").append($('<option value="0">RADICADA</option>'));
                                $("#cmbEstatusCarpeta").append($('<option selected="selected" value=' + json.data[i].cveEstatusCarpeta + '"></option>').val(json.data[i].cveEstatusCarpeta).html(estatus));

                            }

                        }
                    }
                    $("#cmbEstatusCarpeta").val(0);
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
                    $("#cmbTipoJuzgado").val(5);
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
                                            if (nombreHijo.nomFormulario == 'TOCAS') {
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
            //obtenerPermisosFormulario('REPORTES', 'TOCAS');
            //obtenerPermisos();
            cargarConclusion();
            cargarEstatusCarpeta();
            cargarTipoJuzgado();

            $("#checkConclusiones").click(function () {
                if ($("#checkConclusiones").is(":checked")) {
                    $("#divCmbConclusiones").show();
                    $("#cmbConclusion").val(0);
                } else {
                    $("#divCmbConclusiones").hide();
                    $("#cmbConclusion").val(0);
                }
            });

            //        $("#cmbEstatusCarpeta").is(function () {
            //            if ($("#cmbEstatusCarpeta").val() == 2) {
            //                $("#divConclusion").show();
            //                $("#cmbConclusion").val(0);
            //            } else {
            //                $("#divConclusion").hide();
            //                $("#cmbConclusion").val(0);
            //            }
            //        });
            //        $("#cmbEstatusCarpeta").change(function () {
            //            if ($("#cmbEstatusCarpeta").val() == 2) {
            //                $("#divConclusion").show();
            //                $("#cmbConclusion").val(0);
            //            } else {
            //                $("#checkConclusiones").removeAttr("checked");
            //                $("#divCmbConclusiones").hide();
            //                $("#divConclusion").hide();
            //                $("#cmbConclusion").val(0);
            //            }
            //        });
            $("#txtAnio").validaCampo('0123456789');
            $("#txtAnioMes").validaCampo('0123456789');
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