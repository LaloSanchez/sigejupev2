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
    <input type="hidden" id="hiddenTituloReporte" value="">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Reporte de Causas por Violencia de Genero en el Estado de M&eacute;xico.
            </h5>
        </div>
        <div  id="panelPrincipal" class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divPanelControl">
                    <div class="form-group">                                                                
                        <label class="control-label col-md-4" id="lblRelationName">A&ntilde;o de la Carpeta</label>
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
                    <div class="form-group" id="divTipoJuzgado"> 
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
                <div id="divConsulta" class="form-group" style="display: none">
                    <div class="form-group col-md-4" id="divRegresar">
                        <label class="control-label col-md-1">&nbsp;</label>
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" value="Regresar" onclick="regresar(0, true);"> 
                        </div>
                    </div>
                    <CENTER>
                        <div id="divGrafica" style="width:90%; height:500px;" >

                        </div></CENTER>
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
        var grafica = null;

        imprimir = function (div) {
            var divContents = $("#" + div).html();
            var total = $("#labelSubTotal").html();
            divContents = divContents.replace(/Buscar:/g, '');
            divContents = divContents.replace(/label/g, 'p');
            divContents = divContents.replace(/\/label/g, '/p');
            divContents = divContents.replace(/<input type="search" class="form-control input-sm" aria-controls="tblResultadosGridAct">/g, '');
            fechaBaseDatos({datosImpresion: "fecha-hora"});
            divContents += "<p style='text-align: right;'><br>" + total + "</p>";
            divContents += "<br><br><b>Fecha y hora de consulta:</b>  " + $("#datosImpresion").val() + "<br><p><b>Generado por:</b>  " + nombre + "</p>";
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>SIGEJUPE</title>');
            printWindow.document.write('</head><body><center><img  src="img/encabezado.jpg"></center> <br><center><label ><b>Usuario:  </b>' + nombre + '</label></center><br><br>');
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
            if ($("#hiddenNivel").val() != 6) {
                $.each($("#tblResultadosGridAct td"), function () {
                    $(this).attr("id", "lng");
                });
                $.each($("#tblResultadosGridAct th"), function () {
                    $(this).attr("id", "lng");
                });
            }
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
            var nombreArchivo = "REPORTE_CAUSAS_POR_VIOLENCIA_DE_GENERO";
            var tituloReporte = titulos();
            var total = $("#labelSubTotal").html();
            contenido = contenido.replace(/width/g, '  ');
            contenido = contenido.replace(/Buscar:/g, '');
            contenido = contenido.replace(/onclick="(.*?)":/g, '');
            contenido = contenido.replace(/,/g, ', ');
            if ($("#hiddenNivel").val() == 6) {
                contenido = contenido.replace(/id="x"/g, 'style="width:550px; font-size:10pt;"');
            } else {
                contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px; font-size:' + fontSize + 'pt;"');
            }
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
            $("#txtAnioMes").val("");
            $("#cmbMes").val(0);
            $("#txtfechaInicial").val("");
            $("#txtfechaFinal").val("");
            $("#divTipoJuzgado").show();
            $("#divTipoCarpeta").show();
            $("#cmbTipoJuzgado").val(0);
            $("#cmbTipoCarpeta").val(0);
            $("#labelSubTotal").text("");
            $("#divGrafica").html("");
            $("#divConsulta").hide();
            $("#cmbGrafica").val(1);
            $("#divGrafica").hide();
            $("#divTableNivel").html("");
            $("#paginacion").hide();
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Reporte de Causas por Violencia de Genero en el Estado de M&eacute;xico.</span>");
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
            if ($("#cmbTipoJuzgado").val() != 0) {
                strDatos += "&cveTipoJuzgado=" + $("#cmbTipoJuzgado").val();
            }
            if ($("#cmbTipoCarpeta").val() != 0) {
                strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
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
        etiquetas = function () {
            var etiqueta = "";
            return etiqueta;
        };
        titulos = function () {
            var etiqueta = etiquetas();
            var titulo = "Causas por Violencia de Genero" + etiqueta;
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
            if ($("#hiddenNivel").val() > 0) {
                consultar(paginar, $("#hiddenNivel").val());
            }
        };
        gestorConsulta = function (bandera, nivel, json, i) {
            var strDatos;
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
                strDatos = "&cveRegion=" + json.resultados[i].cveRegion;
                strDatos = "&cveDistrito=" + json.resultados[i].cveDistrito;
                strDatos += "&cveJuzgado=" + json.resultados[i].cveJuzgado;
                $("#hiddenCveJuzgado").val(json.resultados[i].cveJuzgado);
            }
            if (nivel == 6) {
                strDatos = "&cveRegion=" + json.resultados[i].cveRegion;
                strDatos = "&cveDistrito=" + json.resultados[i].cveDistrito;
                strDatos += "&cveJuzgado=" + json.resultados[i].cveJuzgado;
                strDatos += "&idCarpetaJudicial=" + json.resultados[i].idCarpetaJudicial;
                $("#idCarpetaJudicial").val(json.resultados[i].idCarpetaJudicial);
                strDatos += "&detalles=detalle";
            }
            $("#hiddenVariables").val(strDatos);
            consultar(bandera, nivel);
        };
        gestorNivel = function (json, bandera) {
            graficar(json);
            var indice = $("#cmbPaginacion").val();
            indice = (indice - 1) * $("#cmbNumReg").val();
            var tableG = "";
            var ofendidos = [];
            var imputados = [];
            var ofendidos2 = [];
            var imputados2 = [];
            var efectos = [];
            var detalleefectos = [];
            var factoressociales = [];
            var homicidiosdolosos = [];
            var relacionefectos = [];
            var imputado = "";
            var imputado2 = "";
            var ofendido = "";
            var ofendido2 = "";
            var cadena = "";
            var de = "";
            var detalles = "";
            var factores = "";
            var homicidios = "";
            var titulo = titulos();
            var titulo1 = "<br id='bo'><label style='text-align:center;width: 100%; font-size:12pt;'>" + titulo + " </label></br>";
            var titulo2 = "";
            var table = "<table id='tblResultadosGridAct' width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered table-responsive' >";
            table += "<thead>";
            var jsonDatos = JSON.stringify(json);
            var aux = "";
            var subTotal = 0;
            $("#labelSubTotal").text("");
            switch ($("#hiddenNivel").val()) {
                case "1":
                    table += "<th>N&uacute;m.</th><th>Estado</th><th>Subtotal</th>";
                    table += "</thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 2 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>M\u00c9XICO</td>";
                        if (json.totalCount > 0) {
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                            subTotal = subTotal - json.resultados[i].totalCount;
                        } else {
                            table += "<td>0</td>";
                        }
                        aux = "";
                        table += "</tr> ";
                    }
                    subTotal = -subTotal;
                    $("#labelSubTotal").text("Total: " + subTotal.toLocaleString('en-US'));
                    break;
                case "2":
                    titulo2 += "<br><label><b>Estado: </b>M\u00c9XICO</label><br>";
                    $("#hiddenTituloReporte").val(" Estado: Mexico");
                    //                table += "<th>N&uacute;m.</th><th>Estado</th><th>Regi\u00f3n</th><th>SubTotal</th>";
                    table += "<th>N&uacute;m.</th><th>Regi\u00f3n</th><th>Subtotal</th>";
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 3 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        //                    table += "<td>M\u00c9XICO</td>";
                        table += "<td>" + json.resultados[i].desRegion + "</td>";
                        table += "<td>" + json.resultados[i].totalCount + "</td>";
                        table += "</tr> ";
                        subTotal = subTotal - json.resultados[i].totalCount;
                        aux = "";
                    }
                    subTotal = -subTotal;
                    $("#labelSubTotal").text("Total: " + subTotal.toLocaleString('en-US'));
                    break;
                case "3":
                    titulo2 = "<br><label><b>Estado: </b>M\u00c9XICO<br><b>Regi\u00f3n: </b>" + json.resultados[0].desRegion + "</label><br>";
                    $("#hiddenTituloReporte").val(" Estado: Mexico/ Region: " + json.resultados[0].desRegion);
                    //table += "<th>N&uacute;m</th><th>Estado</th><th>Regi\u00f3n</th><th>Distrito</th>";
                    table += "<th>N&uacute;m</th><th>Distrito</th>";
                    table += "<th>Subtotal</th>";
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 4 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        //                    table += "<td>M\u00c9XICO</td>";
                        //                    table += "<td>" + json.resultados[i].desRegion + "</td>";
                        table += "<td>" + json.resultados[i].desDistrito + "</td>";
                        table += "<td>" + json.resultados[i].totalCount + "</td>";
                        table += "</tr> ";
                        subTotal = subTotal - json.resultados[i].totalCount;
                        aux = "";
                    }
                    subTotal = -subTotal;
                    $("#labelSubTotal").text("Total: " + subTotal.toLocaleString('en-US'));
                    break;
                case "4":
                    titulo2 = "<br><label><b>Estado: </b>M\u00c9XICO<br><b>Regi\u00f3n: </b>" + json.resultados[0].desRegion + "<br><b>Distrito: </b>" + json.resultados[0].desDistrito + "</label><br>";
                    $("#hiddenTituloReporte").val(" Estado: Mexico/ Region: " + json.resultados[0].desRegion + "/ Distrito: " + json.resultados[0].desDistrito);
                    //table += "<th>N&uacute;m.</th><th>Estado</th><th>Regi\u00f3n</th><th>Distrito</th><th>Juzgado</th>";
                    table += "<th>N&uacute;m.</th><th>Juzgado</th>";
                    table += "<th>Subtotal</th>";
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 5 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        //                    table += "<td>M\u00c9XICO</td>";
                        //                    table += "<td>" + json.resultados[i].desRegion + "</td>";
                        //                    table += "<td>" + json.resultados[i].desDistrito + "</td>";
                        table += "<td>" + json.resultados[i].desJuzgado + "</td>";
                        table += "<td>" + json.resultados[i].totalCount + "</td>";
                        table += "</tr> ";
                        subTotal = subTotal - json.resultados[i].totalCount;
                        aux = "";
                    }
                    subTotal = -subTotal;
                    $("#labelSubTotal").text("Total: " + subTotal.toLocaleString('en-US'));
                    break;
                case "5":
                    titulo2 = "<br><label><b>Estado: </b>M\u00c9XICO<br><b>Regi\u00f3n: </b>" + json.resultados[0].desRegion + "<br><b>Distrito: </b>" + json.resultados[0].desDistrito + "<br><b>Juzgado: </b>" + json.resultados[0].desJuzgado + "</label><br>";
                    $("#hiddenTituloReporte").val(" Estado: Mexico/ Region: " + json.resultados[0].desRegion + "/ Distrito: " + json.resultados[0].desDistrito + "/ Juzgado: " + json.resultados[0].desJuzgado);
                    //table += "<th>N&uacute;m.</th><th>Estado</th><th>Regi\u00f3n</th><th>Distrito</th><th>Juzgado</th><th>Tipo de Juzgado</th>";
                    table += "<th>N&uacute;m.</th><th>Tipo de Juzgado</th>";
                    table += "<th>Causa</th>";
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 6 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td> " + (i + 1 + indice) + "</td>";
                        //                    table += "<td>M\u00c9XICO</td>";
                        //                    table += "<td>" + json.resultados[i].desRegion + "</td>";
                        //                    table += "<td>" + json.resultados[i].desDistrito + "</td>";
                        //                    table += "<td>" + json.resultados[i].desJuzgado + "</td>";
                        table += "<td>" + json.resultados[i].desTipoJuzgado + "</td>";
                        table += "<td>" + json.resultados[i].desTipoCarpeta + ": " + json.resultados[i].numero + "/" + json.resultados[i].anio + "</td>";
                        table += "</tr> ";
                        subTotal = -(i + 1 + indice);
                        aux = "";
                    }
                    subTotal = -subTotal;
                    $("#labelSubTotal").text("Total: " + subTotal.toLocaleString('en-US'));
                    break;
                case "6":
                    titulo2 = "<br><label><b>Estado: </b>M\u00c9XICO<br><b>Regi\u00f3n: </b>" + json.resultados[0].desRegion + "<br><b>Distrito: </b>" + json.resultados[0].desDistrito + "<br><b>Juzgado de " + json.resultados[0].desTipoJuzgado + ": </b>" + json.resultados[0].desJuzgado + "<br><b>" + json.resultados[0].desTipoCarpeta + ": </b>" + json.resultados[0].numero + "/" + json.resultados[0].anio + "</label><br>";
                    $("#hiddenTituloReporte").val(" Estado: Mexico/ Region: " + json.resultados[0].desRegion + "/ Distrito: " + json.resultados[0].desDistrito + "/ Juzgado: " + json.resultados[0].desJuzgado);
                    //table += "<th>N&uacute;m.</th><th>Estado</th><th>Regi\u00f3n</th><th>Distrito</th><th>Juzgado</th>";
                    table += "<th>N&uacute;m.</th><th>Ofendido</th><th id='x'>Imputado</th>";
                    table += "</tr></thead><tbody>";
                    var contador = 0;
                    for (var i = 0; i < json.totalCount; i++) {
                        if (i === 0) {
                            contador++;
                            if (json.resultados[i].cveTipoPersona == 1) {
                                table += "<tr>";
                                table += "<td> " + contador + "</td>";
                                table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                                ofendido = json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno;
                                ofendidos.push(ofendido);
                            } else {
                                table += "<td>" + json.resultados[i].nombreMoral + "</td>";
                                ofendido = json.resultados[i].nombreMoral;
                                ofendidos.push(ofendido);
                            }
                            if (json.resultados[i].cveTipoPersonaI == 1) {
                                imputado = json.resultados[i].nombreI + " " + json.resultados[i].paternoI + " " + json.resultados[i].maternoI;
                                imputados.push(imputado);
                            } else {
                                imputado = json.resultados[i].nombreMoralI;
                                imputados.push(imputado);
                            }
                            for (var j = 0; j < json.totalCount; j++) {
                                if (json.resultados[j].cveTipoPersonaI == 1) {
                                    imputado2 = json.resultados[j].nombreI + " " + json.resultados[j].paternoI + " " + json.resultados[j].maternoI;
                                    imputados2.push(imputado2);
                                } else {
                                    imputado2 = json.resultados[j].nombreMoralI;
                                    imputados2.push(imputado2);
                                }
                                if (json.resultados[j].cveTipoPersona == 1) {
                                    ofendido2 = json.resultados[j].nombre + " " + json.resultados[j].paterno + " " + json.resultados[j].materno;
                                    ofendidos2.push(ofendido2);
                                } else {
                                    ofendido2 = json.resultados[j].nombreMoral;
                                    ofendidos2.push(ofendido2);
                                }
                                if (imputado2.indexOf(imputado) !== -1 && ofendido2.indexOf(ofendido) !== -1) {
                                    if (j == 0) {
                                        cadena += "(" + json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + ")";
                                        efectos.push(json.resultados[j].desEfecto);
                                        relacionefectos.push(json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + "/" + json.resultados[j].desFactorCultural + "/" + json.resultados[j].desHomicidioDoloso);
                                    } else {
                                        if (efectos.indexOf(json.resultados[j].desEfecto) !== -1) {
                                        } else {
                                            efectos.push(json.resultados[j].desEfecto);
                                        }
                                        if (efectos.indexOf(json.resultados[j].desEfecto) !== -1) {
                                            cadena += "(" + json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + ")";
                                            if (relacionefectos.indexOf(json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + "/" + json.resultados[j].desFactorCultural + "/" + json.resultados[j].desHomicidioDoloso) !== -1) {
                                            } else {
                                                relacionefectos.push(json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + "/" + json.resultados[j].desFactorCultural + "/" + json.resultados[j].desHomicidioDoloso);
                                            }
                                        }
                                    }
                                }

                            }
                            for (var k = 0; k < relacionefectos.length; k++) {
                                var c = relacionefectos[k].split("/");
                                var d;
                                var aux;
                                if (k < relacionefectos.length - 1) {
                                    aux = relacionefectos[k + 1].split("/");
                                } else {
                                    aux = relacionefectos[k].split("/");
                                }
                                if (k == 0) {
                                    detalleefectos.push(c[1]);
                                    factoressociales.push(c[2]);
                                    homicidiosdolosos.push(c[3]);
                                } else {
                                    d = relacionefectos[k - 1].split("/");
                                    if (c[0] == d[0]) {
                                        if (c[1] != d[1] && detalleefectos.indexOf(c[1]) == -1) {
                                            detalles += "," + c[1];
                                            detalleefectos.push(c[1]);
                                        }
                                        if (c[2] != d[2] && factoressociales.indexOf(c[2]) == -1) {
                                            factores += "," + c[2];
                                            factoressociales.push(c[2]);
                                        }
                                        if (c[3] != d[3] && homicidiosdolosos.indexOf(c[3]) == -1) {
                                            homicidios += "," + c[3];
                                            homicidiosdolosos.push(c[3]);
                                        }
                                    } else {
                                        detalles = "";
                                        factores = "";
                                        homicidios = "";
                                        detalles += c[1];
                                        factores += c[2];
                                        homicidios += c[3];
                                        detalleefectos = [];
                                        factoressociales = [];
                                        homicidiosdolosos = [];
                                        detalleefectos.push(c[1]);
                                        factoressociales.push(c[2]);
                                        homicidiosdolosos.push(c[3]);
                                    }
                                }
                                if (c[0] != aux[0] || k + 1 == relacionefectos.length) {
                                    de += "<br><b>- " + c[0] + ": </b>";
                                    de += "<br><b>Detalles del efecto: </b>" + detalleefectos
                                            + "<br><b>Factores Socioculturales: </b>" + factoressociales
                                            + "<br><b>Homicidios Dolosos contra mujeres: </b>" + homicidiosdolosos;
                                }
                            }
                            table += "<td id='x'><b>" + imputado + "</b><br><br><b>EFECTOS DE LA VIOLENCIA: </b>" + de;
                            table += "</td>";
                            table += "</tr>";
                        } else {
                            if (ofendidos.indexOf(json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno) !== -1 /*|| ofendidos.indexOf(json.resultados[i].nombreMoral) !== -1*/) {
                                if (imputados.indexOf(json.resultados[i].nombreI + " " + json.resultados[i].paternoI + " " + json.resultados[i].maternoI) !== -1 /*|| imputados.indexOf(json.resultados[i].nombreMoralI) !== -1*/) {
                                } else {
                                    contador++;
                                    relacionefectos = [];
                                    detalleefectos = [];
                                    efectos = [];
                                    imputados = [];
                                    ofendidos = [];
                                    imputados2 = [];
                                    ofendidos2 = [];
                                    factoressociales = [];
                                    homicidiosdolosos = [];
                                    cadena = "";
                                    de = "";
                                    detalles = "";
                                    factores = "";
                                    homicidios = "";
                                    if (json.resultados[i].cveTipoPersonaI == 1) {
                                        imputado = json.resultados[i].nombreI + " " + json.resultados[i].paternoI + " " + json.resultados[i].maternoI;
                                        imputados.push(imputado);
                                    } else {
                                        imputado = json.resultados[i].nombreMoralI;
                                        imputados.push(imputado);
                                    }
                                    if (json.resultados[i].cveTipoPersona == 1) {
                                        ofendido = json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno;
                                        ofendidos.push(ofendido);
                                    } else {
                                        ofendido = json.resultados[i].nombreMoral;
                                        ofendidos.push(ofendido);
                                    }
                                    for (var j = 0; j < json.totalCount; j++) {
                                        if (json.resultados[j].cveTipoPersonaI == 1) {
                                            imputado2 = json.resultados[j].nombreI + " " + json.resultados[j].paternoI + " " + json.resultados[j].maternoI;
                                            imputados2.push(imputado2);
                                        } else {
                                            imputado2 = json.resultados[j].nombreMoralI;
                                            imputados2.push(imputado2);
                                        }
                                        if (json.resultados[j].cveTipoPersona == 1) {
                                            ofendido2 = json.resultados[j].nombre + " " + json.resultados[j].paterno + " " + json.resultados[j].materno;
                                            ofendidos2.push(ofendido2);
                                        } else {
                                            ofendido2 = json.resultados[j].nombreMoral;
                                            ofendidos2.push(ofendido2);
                                        }
                                        if (imputado2.indexOf(imputado) !== -1 && ofendido2.indexOf(ofendido) !== -1) {
                                            if (j == 0) {
                                                cadena += "(" + json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + ")";
                                                efectos.push(json.resultados[j].desEfecto);
                                                relacionefectos.push(json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + "/" + json.resultados[j].desFactorCultural + "/" + json.resultados[j].desHomicidioDoloso);
                                            } else {
                                                if (efectos.indexOf(json.resultados[j].desEfecto) !== -1) {
                                                } else {
                                                    efectos.push(json.resultados[j].desEfecto);
                                                }
                                                if (efectos.indexOf(json.resultados[j].desEfecto) !== -1) {
                                                    cadena += "(" + json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + ")";
                                                    if (relacionefectos.indexOf(json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + "/" + json.resultados[j].desFactorCultural + "/" + json.resultados[j].desHomicidioDoloso) !== -1) {
                                                    } else {
                                                        relacionefectos.push(json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + "/" + json.resultados[j].desFactorCultural + "/" + json.resultados[j].desHomicidioDoloso);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    for (var k = 0; k < relacionefectos.length; k++) {
                                        var c = relacionefectos[k].split("/");
                                        var d;
                                        var aux;
                                        if (k < relacionefectos.length - 1) {
                                            aux = relacionefectos[k + 1].split("/");
                                        } else {
                                            aux = relacionefectos[k].split("/");
                                        }
                                        if (k == 0) {
                                            detalleefectos.push(c[1]);
                                            factoressociales.push(c[2]);
                                            homicidiosdolosos.push(c[3]);
                                        } else {
                                            d = relacionefectos[k - 1].split("/");
                                            if (c[0] == d[0]) {
                                                if (c[1] != d[1] && detalleefectos.indexOf(c[1]) == -1) {
                                                    detalles += "," + c[1];
                                                    detalleefectos.push(c[1]);
                                                }
                                                if (c[2] != d[2] && factoressociales.indexOf(c[2]) == -1) {
                                                    factores += "," + c[2];
                                                    factoressociales.push(c[2]);
                                                }
                                                if (c[3] != d[3] && homicidiosdolosos.indexOf(c[3]) == -1) {
                                                    homicidios += "," + c[3];
                                                    homicidiosdolosos.push(c[3]);
                                                }
                                            } else {
                                                detalles = "";
                                                factores = "";
                                                homicidios = "";
                                                detalles += c[1];
                                                factores += c[2];
                                                homicidios += c[3];
                                                detalleefectos = [];
                                                factoressociales = [];
                                                homicidiosdolosos = [];
                                                detalleefectos.push(c[1]);
                                                factoressociales.push(c[2]);
                                                homicidiosdolosos.push(c[3]);
                                            }
                                        }
                                        if (c[0] != aux[0] || k + 1 == relacionefectos.length) {
                                            de += "<br><b>- " + c[0] + ": </b>";
                                            de += "<br><b>Detalles del efecto: </b>" + detalleefectos
                                                    + "<br><b>Factores Socioculturales: </b>" + factoressociales
                                                    + "<br><b>Homicidios Dolosos contra mujeres: </b>" + homicidiosdolosos;
                                        }
                                    }
                                    table += "<tr>";
                                    table += "<td> " + contador + "</td>";
                                    if (json.resultados[i].cveTipoPersona == 1) {
                                        table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                                    } else {
                                        table += "<td>" + json.resultados[i].nombreMoral + "</td>";
                                    }
                                    table += "<td id='x'><b>" + imputado + "</b><br><br><b>EFECTOS DE LA VIOLENCIA: </b>" + de;
                                    table += "</td>";
                                    table += "</tr>";
                                }

                            } else {
                                contador++;
                                relacionefectos = [];
                                detalleefectos = [];
                                efectos = [];
                                imputados = [];
                                ofendidos = [];
                                imputados2 = [];
                                ofendidos2 = [];
                                factoressociales = [];
                                homicidiosdolosos = [];
                                cadena = "";
                                de = "";
                                detalles = "";
                                factores = "";
                                homicidios = "";
                                table += "<tr>";
                                table += "<td> " + contador + "</td>";
                                if (json.resultados[i].cveTipoPersona == 1) {
                                    table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                                } else {
                                    table += "<td>" + json.resultados[i].nombreMoral + "</td>";
                                }
                                if (json.resultados[i].cveTipoPersonaI == 1) {
                                    if (json.resultados[i].cveTipoPersona == 1) {
                                        ofendido = json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno;
                                    } else {
                                        ofendido = json.resultados[i].nombreMoral;
                                    }
                                    ofendidos.push(ofendido);
                                    imputado = json.resultados[i].nombreI + " " + json.resultados[i].paternoI + " " + json.resultados[i].maternoI;
                                    imputados.push(imputado);
                                    for (var j = 0; j < json.totalCount; j++) {
                                        if (imputado === json.resultados[j].nombreI + " " + json.resultados[j].paternoI + " " + json.resultados[j].maternoI
                                                && ofendido === json.resultados[j].nombre + " " + json.resultados[j].paterno + " " + json.resultados[j].materno) {
                                            if (j == 0) {
                                                cadena += "(" + json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + ")";
                                                relacionefectos.push(json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + "/" + json.resultados[j].desFactorCultural + "/" + json.resultados[j].desHomicidioDoloso);
                                                efectos.push(json.resultados[j].desEfecto);
                                            } else {
                                                if (efectos.indexOf(json.resultados[j].desEfecto) !== -1) {
                                                } else {
                                                    efectos.push(json.resultados[j].desEfecto);
                                                }
                                                if (efectos.indexOf(json.resultados[j].desEfecto) !== -1) {
                                                    cadena += "(" + json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + ")";
                                                    if (relacionefectos.indexOf(json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + "/" + json.resultados[j].desFactorCultural + "/" + json.resultados[j].desHomicidioDoloso) !== -1) {
                                                    } else {
                                                        relacionefectos.push(json.resultados[j].desEfecto + "/" + json.resultados[j].desDetalleEfecto + "/" + json.resultados[j].desFactorCultural + "/" + json.resultados[j].desHomicidioDoloso);
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    for (var k = 0; k < relacionefectos.length; k++) {
                                        var c = relacionefectos[k].split("/");
                                        var d;
                                        var aux;
                                        if (k < relacionefectos.length - 1) {
                                            aux = relacionefectos[k + 1].split("/");
                                        } else {
                                            aux = relacionefectos[k].split("/");
                                        }
                                        if (k == 0) {
                                            detalleefectos.push(c[1]);
                                            factoressociales.push(c[2]);
                                            homicidiosdolosos.push(c[3]);
                                        } else {
                                            d = relacionefectos[k - 1].split("/");
                                            if (c[0] == d[0]) {
                                                if (c[1] != d[1] && detalleefectos.indexOf(c[1]) == -1) {
                                                    detalles += "," + c[1];
                                                    detalleefectos.push(c[1]);
                                                }
                                                if (c[2] != d[2] && factoressociales.indexOf(c[2]) == -1) {
                                                    factores += "," + c[2];
                                                    factoressociales.push(c[2]);
                                                }
                                                if (c[3] != d[3] && homicidiosdolosos.indexOf(c[3]) == -1) {
                                                    homicidios += "," + c[3];
                                                    homicidiosdolosos.push(c[3]);
                                                }
                                            } else {
                                                detalles = "";
                                                factores = "";
                                                homicidios = "";
                                                detalles += c[1];
                                                factores += c[2];
                                                homicidios += c[3];
                                                detalleefectos = [];
                                                factoressociales = [];
                                                homicidiosdolosos = [];
                                                detalleefectos.push(c[1]);
                                                factoressociales.push(c[2]);
                                                homicidiosdolosos.push(c[3]);
                                            }
                                        }
                                        if (c[0] != aux[0] || k + 1 == relacionefectos.length) {
                                            de += "<br><b>- " + c[0] + ": </b>";
                                            de += "<br><b>Detalles del efecto: </b>" + detalleefectos
                                                    + "<br><b>Factores Socioculturales: </b>" + factoressociales
                                                    + "<br><b>Homicidios Dolosos contra mujeres: </b>" + homicidiosdolosos;
                                        }
                                    }
                                    table += "<td id='x'<b>" + json.resultados[i].nombreI + " " + json.resultados[i].paternoI + " " + json.resultados[i].maternoI + "</b><br><br><b>EFECTOS DE LA VIOLENCIA: </b>" + de;
                                    table += "</td>";
                                } else {

                                    table += "<td id='x'><b>" + json.resultados[i].nombreMoralI + "</b><br><br><b>EFECTOS DE LA VIOLENCIA: </b>" + de + "</td>";
                                }
                                table += "</tr>";
                            }
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
        }
        ;
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
            var strDatos = "";
            strDatos = "accion=consultar_causasViolenciaGenero_Reporte";
            strDatos += "&activo=S";
            strDatos += "&paginacion=true";
            strDatos += "&cantxPag=" + $("#cmbNumReg").val();
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            strDatos += "&nivel=" + nivel;
            strDatos += $("#hiddenVariables").val();
            strDatos += filtro();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReporteCausasViolenciaGeneroFacade.Class.php",
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


                        if ($("#checkClasDelitos").is(":checked") || $("#checkCarEjecu").is(":checked")) {
                            graficar = false;
                        } else if ($("#checkDelitos").is(":checked")) {
                            categorias[i] = json.resultados[i].desDelito;
                        } else if ($("#checkConsumaciones").is(":checked")) {
                            categorias[i] = json.resultados[i].desConsumacion;
                        } else if ($("#checkDetenido").is(":checked")) {
                            categorias[i] = json.resultados[i].desConsignacion;
                        } else {
                            categorias[i] = "CAUSAS";
                        }

                        if ($("#checkDelitos").is(":checked")) {
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
            $("#divRegresar").hide();
            var url = "../fachadas/sigejupe/reportes/ReporteCausasViolenciaGeneroFacade.Class.php";
            var strDatos = "accion=consultar_causasViolenciaGenero_Reporte";
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
                mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>X Regi&oacute;n</SPAN>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(3,false);'>Distrito</SPAN>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(4,false);'>Juzgado</SPAN>";
                mensaje += " / Detalles";
            }
            if ($("#hiddenNivel").val() == 6) {
                mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>X Regi&oacute;n</SPAN>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(3,false);'>Distrito</SPAN>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(4,false);'>Juzgado</SPAN>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(5,false);'>Carpeta</SPAN>";
                mensaje += " / Detalles";
            }
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Reporte de Causas por Violencia de Genero en el Estado de M&eacute;xico.</span>" + mensaje);
        };
        regresar = function (nivel, bandera) {
            if (bandera == 1) {
                nivel = $("#hiddenNivel").val() - 1;
            }
            $("#cmbNumReg").val(100);
            $("#cmbPaginacion").val(1);
            var strDatos = "";
            if (nivel == 0) {
                $("#h5titulo").html("Reporte de Causas por Violencia de Genero en el Estado de M&eacute;xico.");
                $("#divConsulta").hide("slide");
                $("#paginacion").hide();
                $("#inputImprimir").hide();
                $("#inputExportarPDF").hide();
                $("#inputExportarExcel").hide();
            } else {
                if (nivel == 1) {
                    $("#paginacion").hide();
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
                    strDatos += "&cveCarpetaJudicial=" + $("#hiddenCveCarpetaJudicial").val();
                }
            }
            $("#hiddenVariables").val(strDatos);
            if (nivel > 0) {
                consultar(true, nivel);
            }
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
                                            if (nombreHijo.nomFormulario == 'CAUSAS POR VIOLENCIA DE GENERO') {
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
            //obtenerPermisosFormulario('REPORTES', 'CAUSAS POR VIOLENCIA DE GENERO');
            //obtenerPermisos();
            cargarTipoJuzgado();
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