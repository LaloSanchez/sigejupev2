<?php
//
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
    <!--<input type="hidden" id="hiddenJuzgadoArray" value="">-->
    <input type="hidden" id="hiddenCveDistrito" value="">
    <input type="hidden" id="hiddenVariables" value="" >
    <input type="hidden" id="hiddenNivel" value=0>
    <input type="hidden" id="hiddenDesRegion" value="">
    <input type="hidden" id="hiddenDesDistrito" value="">
    <input type="hidden" id="hiddenDesJuzgado" value="">
    <input type="hidden" id="hiddenAnio" value="">
    <input type="hidden" id="hiddenEstatusCarpeta" value="">
    <input type="hidden" id="hiddenConsignaciones" value="">
    <input type="hidden" id="hiddenFechaHoraHoy" value="">
    <input type="hidden" id="hiddenJuzgador" value="">




    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Reporte de Carga Magistrados General
            </h5>
        </div>
        <div  id="panelPrincipal" class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divPanelControl">


                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 ">Tribunal</label>

                        <div id="divCmbJuzgado" class="logobox col-md-6">
                            <select class="form-control" name="cmbJuzgado" id="cmbJuzgado" onchange="cargaJuzgadores();"  >
                                <option value="">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 ">Magistrados Actuales</label>

                        <div id="divCmbJuzgador" class="logobox col-md-3">
                            <input type="checkbox" class="col-md-1" id="checkActivos" onclick="cargaJuzgadores();" >
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 ">Magistrado</label>

                        <div id="divCmbJuzgador" class="logobox col-md-6">
                            <select class="form-control" name="cmbJuzgadores" id="cmbJuzgadores" >
                                <option value="">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3 needed">Fecha Inicio:</label>
                        <div class="col-md-3">
                            <input type="text" id="txtfechaInicial" placeholder="FECHA INICIO" class="form-control datepicker" value="" />
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3  needed">Fecha Fin:</label>
                        <div class="col-md-3">
                            <input type="text" id="txtfechaFinal" placeholder="FECHA FIN" class="form-control datepicker" value="" />
                        </div>
                    </div> 
                    <div class="form-group"> 
                        <label class="control-label col-md-3 ">Estatus Carpeta</label>
                        <div class="col-md-3">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbEstatusCarpeta" id="cmbEstatusCarpeta">
                                <option value="">RADICADA</option>
                            </select>
                        </div> 
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3 ">Resoluciones</label>
                        <div class="col-md-3">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbTiposentencia" id="cmbTiposentencia">
                                <option value="">Seleccione una opci&oacute;n</option>
                            </select>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Tipo de gr&aacute;fica</label>
                        <div class="col-md-5">
                            <select name="cmbGrafica" class='form-control' id="cmbGrafica" onchange="cambiarGrafica()">
                                <option value="1">Barra</option>
                                <option value="2">Columna</option>
                                <option value="3">Punteada</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <div class="col-md-2 botonesAdaptar">
                                <input type="submit" class="btn btn-primary btn-adaptar consulta" value="Consultar" onclick="limpiarEscondidos();
                                        consultarReporteCargarJueces(true, 1)">
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                                <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" onclick="imprimir('divTableNivel');" style="display: none">
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                                <input type="submit" class="btn btn-primary btn-adaptar" id="inputExportarPDF" value="Exportar PDF" onclick="exportar('exportarPDF', 'divTableNivel');" style="display: none">
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                                <input type="submit" class="btn btn-primary btn-adaptar" id="inputExportarExcel" value="Exportar Excel" onclick="exportar('exportarExcel', 'divTableNivel');" style="display: none">
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                                <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar();"> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Buscar" onclick="limpiarEscondidos();
                                    consultarReporteCargarJueces(true, 1);" style="display: none"> 
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" onclick="imprimir('divTableNivel');" style="display: none">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputExportarPDF" value="Exportar PDF" onclick="exportar('exportarPDF', 'divTableNivel');" style="display: none">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputExportarExcel" value="Exportar Excel" onclick="exportar('exportarExcel', 'divTableNivel');" style="display: none">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar();" style="display: none"> 
                    </div>
                </div>
                <div class="form-group"  id="paginacion" style="display:none;">
                    <div class="form-group col-md-3"> 
                        <label class="control-label col-md-1"></label>
                        <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar(0, true);" > 
                        <label class="control-label" id="totalReg"></label>
                    </div>
                    <div id="divPaginador" class="form-group col-md-3" >
                        <label class="control-label">P&aacute;gina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="paginacion(false);" >
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-4" >
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
                <div id="divConsulta" class="form-group" style="display: none">
                    <div class="form-group" id="inputRegresar2">
                        <label class="control-label col-md-1">&nbsp;</label>
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" value="Regresar" onclick="regresar(0, true);"> 
                        </div>
                    </div>
                    <CENTER>
                        <div id="divGrafica" style="width:90%; height:500px;" >

                        </div></CENTER>
                    <div id="divTableNivel" class="col-md-8" style="overflow: auto; width: 100%;">

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-10">&nbsp;</label>
                        <div class="col-md-2">
                            <label id="labelSubTotal"></label>
                        </div>
                    </div>
                </div>


                <div id="ifr" style="display:none" >
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
        var nombre = <?php echo '"' . $_SESSION['Nombre'] . '"'; ?>;
        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';
        var opcCheck = [];
        var grafica = null;

        imprimir = function (div) {
            var divContents = $("#" + div).html();
            var usuario = '<?php echo $_SESSION["nombre"]; ?>';
            fechaBaseDatos({hiddenFechaHoraHoy: "fecha-hora"});
            divContents = divContents.replace(/<input(.*?)>/g, '');
            divContents = divContents.replace(/label/g, 'p');
            divContents = divContents.replace(/<br(.*?)>/g, '');
            divContents = divContents.replace(/\/label/g, '/p');
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
            if (columnas.length < 12) {
                numPixeles = (820 / columnas.length);
            } else {
                $.each($("#tblResultadosGridAct td"), function () {

                    if ($(this).html().length > 30) {
                        $(this).attr("id", "os");
                    } else {
                        $(this).removeAttr("id");
                    }
                });
                numPixeles = (1300 / columnas.length);
            }

            var contenido = $("#" + div).html();
            contenido = contenido.replace('width="100%"', '');
            var nombreArchivo = "REPORTE_CARGA_MAGISTRADOS_GRAL";
            var tituloReporte = titulos();
            contenido = contenido.replace(/width/g, '  ');
            contenido = contenido.replace(/Buscar:/g, '');


            contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px;"');
            contenido = contenido.replace(/id="os"/g, 'style="width:100px;"');
            contenido = contenido.replace(/<center>/g, '');
            contenido = contenido.replace(/<\/center>/g, '');
            contenido = contenido.replace(/onclick="(.*?)"/g, '');
            contenido = contenido.replace(/<input aria-controls="tblResultadosGridAct" class="form-control input-sm" type="search">/g, '');
            fechaBaseDatos({datosImpresion: "fecha-hora"});
            if ($("#hiddenNivel").val() == 5) {
                $("#labelSubTotal").text("");
            }
            $("#contenidoIframe").val(contenido);
            $("#accionIframe").val(accion);
            $("#infoIframe").val(usuario + "&@" + tituloReporte + "&@" + nombreArchivo + "&@" + $("#labelSubTotal").text() + "&@" + $("#bor").html() + "&@" + $("#datosImpresion").val());
            $("#divAlertInfo").html("Generando Archivo");
            $("#divAlertInfo").show("slide");
            setTimeAlert("divAlertInfo");
            $("#formIframe").submit();

        }

        limpiar = function () {
            $("#h5titulo").html("Reporte de Carga Magistrados General");
            $("#checkProgramada").removeAttr("checked");
            $("#hiddenVariables").val("");
            $("#inputRegresar2").hide();
            $("#checkPrivada").removeAttr("checked");
            $("#cmbJuzgadores").val("");
            $("#cmbJuzgado").val(juzgadoSesion);
            $("#cmbTiposentencia").val("");
            $("#cmbEstatusCarpeta").val("");
            fechaBaseDatos(
                    {
                        txtfechaInicial: "fecha",
                        txtfechaFinal: "fecha"
                    }
            );
            $("#divConsulta").hide("slide");
            $('#divTableNivel').html("");
            $("#paginacion").hide();
            $("#inputImprimir").hide();
            $("#inputExportarPDF").hide();
            $("#inputExportarExcel").hide();
            $("#labelSubTotal").text("");
            cargaJuzgadores();
        };
        limpiarEscondidos = function () {
            $("#hiddenVariables").val("");
            $("#inputRegresar2").hide();
        }

        filtro = function () {
            var strDatos = "";
            if ($("#cmbJuzgado").val() != "") {
                strDatos += "&cveJuzgado=" + $("#cmbJuzgado").val();
            }

            if ($("#cmbJuzgadores").val() != "") {
                strDatos += "&idJuzgador=" + $("#cmbJuzgadores").val();

            }

            strDatos += "&cveEstatusCarpeta=" + $("#cmbEstatusCarpeta").val();
            strDatos += "&cveTipoSentencia=" + $("#cmbTiposentencia").val();
            return strDatos;
        };

        paginacion = function (paginar) {
            consultarReporteCargarJueces(paginar, $("#hiddenNivel").val());
        };
        gestorConsulta = function (bandera, nivel, json, i) {
            var strDatos = "";

            if (nivel == 2) {
                $("#hiddenJuzgador").val(json.resultados[i].idJuzgador);
                strDatos += "&idJuzgador=" + json.resultados[i].idJuzgador;
            }
            if (nivel == 3) {


                strDatos += "&idJuzgador=" + json.resultados[i].idJuzgador;

                //strDatos += "&cveJuzgado=" + json.resultados[i].cveJuzgado;

                strDatos += "&detalles=detalle";
            }
            $("#hiddenVariables").val(strDatos);
            consultarReporteCargarJueces(bandera, nivel);
        };
        gestorNivel = function (json, bandera) {
            graficar(json);
            var indice = $("#cmbPaginacion").val();
            indice = (indice - 1) * $("#cmbNumReg").val();
            var subtotal = 0;
            var titulo = titulos();
            var titulo1 = "<br id='bo'><label style='text-align:center;width: 100%; font-size:12pt;'>" + titulo + " </label></br>";
            var titulo2 = "";
            var table = "<table id='tblResultadosGridAct' width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered table-responsive' >";
            table += "<thead>";
            var jsonDatos = JSON.stringify(json);
            switch ($("#hiddenNivel").val()) {
                case "1":
                    table += "<th>N&uacute;m.</th><th  >Nombre del Magistrado</th>";


                    table += "<th>Subtotal</th>";
                    table += "</thead><tbody>";

                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 2 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>" + json.resultados[i].titulo + " " + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                        var TotalCel = parseInt(json.resultados[i].totalCount);

                        table += "<td>" + TotalCel + "</td>";
                        subtotal += parseInt(TotalCel);
                        table += "</tr> ";
                    }
                    break;
                case "2":
                    titulo2 += "<label> Magistrado: " + json.resultados[0].titulo + " " + json.resultados[0].nombre + " " + json.resultados[0].paterno + " " + json.resultados[0].materno + "</label><br>";
                    table += "<th>No.</th>";


                    table += '<th>Tribunal</th><th>SubTotal</th>';
                    table += "</thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {

                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 3 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td> " + (i + 1 + indice) + "</td>";
                        table += "<td>" + json.resultados[i].desJuzgado + "</td>";
                        table += "<td>" + json.resultados[i].totalCount + "</td>";
                        table += "</tr> ";
                    }
                    break;
                case "3":
                    titulo2 += "<label> Magistrado: " + json.resultados[0].titulo + " " + json.resultados[0].nombre + " " + json.resultados[0].paterno + " " + json.resultados[0].materno + "</label><br>";

                    table += "<th>No.</th><th>Toca</th>";


                    table += '<th>F. Radicacion</th><th >Estatus de Carpeta</th> <th>Resoluci&oacute;n</th><th>Tribunal</th>';
                    table += "</thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {

                        table += "<tr>";
                        table += "<td> " + (i + 1 + indice) + "</td>";
                        table += "<td>" + json.resultados[i].numero + "/" + json.resultados[i].anio + "</td>";
                        table += "<td>" + fechaMySQLaNormal(json.resultados[i].fechaRadicacion) + "</td>";
                        if (json.resultados[i].cveEstatusCarpeta == 1) {
                            table += "<td  >EN TRAMITE</td>";
                        } else {
                            table += '<td  >' + json.resultados[i].desEstatusCarpeta + "</td>";
                        }
                        table += "<td>" + json.resultados[i].desTipoSentencia + "</td>";
                        table += "<td>" + json.resultados[i].desJuzgado + "</td>";

                        table += "</tr> ";
                    }
                    break;
            }

            table += "</tbody></table>";
            $("#divConsulta").show("slide");
            var tabla = titulo1 + "<div id='bor'>" + titulo2 + "</div>" + table;
            $("#divTableNivel").html(tabla);
            if (bandera && i > 99) {

                calcularPaginas();
            }
            if (subtotal != 0 && $("#hiddenNivel").val() < 2) {
                $("#labelSubTotal").show();
                $("#labelSubTotal").text("Total de tocas asignadas: " + subtotal);
            } else {
                $("#labelSubTotal").hide();
            }
            $("#inputImprimir").show();
            $("#inputExportarPDF").show();
            $("#inputExportarExcel").show();
            $("#tblResultadosGridAct").DataTable({
                paging: false,
            });
        }
        consultarReporteCargarJueces = function (bandera, nivel) {

            $("#divConsulta").hide("slide");
            var cantReg = $("#cmbNumReg").val();
            $("#hiddenNivel").val(nivel);
            if (bandera) {
                $("#inputRegresar2").show();
                $("#paginacion").hide();
                $("#cmbPaginacion").val(1);
            }

            var strDatos = "accion=ConsultarCargaJueces_ReporteGeneralTocas";

            strDatos += "&nivel=" + $("#hiddenNivel").val();
            strDatos += "&activo=S";
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&paginacion=true";
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            //strDatos += "&cveJuzgadoArray=" + $("#hiddenJuzgadoArray").val();
            strDatos += $("#hiddenVariables").val();
            strDatos += "&fechaDesde=" + $("#txtfechaInicial").val();
            strDatos += "&fechaHasta=" + $("#txtfechaFinal").val();



            strDatos += filtro();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReporteCargaJuecesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    if (($("#txtfechaInicial").val() == "" || $("#txtfechaFinal").val() == "")) {
                        if ($("#txtfechaInicial").val() == "" && $("#txtfechaFinal").val() == "") {
                            $("#divAlertWarning").html("Escribe una Fecha Inicial y una Fecha Final");
                        } else if ($("#txtfechaInicial").val() == "") {
                            $("#divAlertWarning").html("Escribe una Fecha Inicial");
                        } else {
                            $("#divAlertWarning").html("Escribe una Fecha Final");
                        }
                        $("#divTableNivel").html("");
                        $("#paginacion").hide();
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        env = false;
                    }
                },
                success: function (datos) {

                    var json = "";
                    json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
                        gestorNivel(json, bandera);
                        encabezado();
                    } else {
                        $('#divTableNivel').html("");
                        $("#inputImprimir").hide();
                        $("#inputExportarPDF").hide();
                        $("#inputExportarExcel").hide();
                        $("#divAlertInfo").html("Sin resultados a mostrar");
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
            var nombreY = "TOCAS";//mensaje de la metrica
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
                            categorias[i] = json.resultados[i].titulo + " " + json.resultados[i].nombre + " " + json.resultados[i].paterno;
                        }


                        series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                    }


                    break;
                case "2":
                    nombreX = "TRIBUNALES";
                    for (var i = 0; i < json.totalCount; i++) {
                        categorias[i] = json.resultados[i].desJuzgado;
                        series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                    }

                    break;
                case "3":
                    $("#divGrafica").html("");
                    $("#divGrafica").hide();
                    break;
                case "4":
                    $("#divGrafica").html("");
                    $("#divGrafica").hide();
                    break;
                case "5":
                    $("#divGrafica").html("");
                    $("#divGrafica").hide();
                    break;
            }
            if ($("#hiddenNivel").val() < 3 && graficar) {
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
                    },
                    chartOptions: {
                        title: {
                            text: 'Reporte de Carga de trabajo por Magistrado'
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
            var url = "../fachadas/sigejupe/reportes/ReporteCargaJuecesFacade.Class.php";
            var cantReg = $("#cmbNumReg").val();
            var strDatos = "accion=ConsultarCargaJueces_ReporteGeneral";
            strDatos += "&nivel=" + $("#hiddenNivel").val();
            strDatos += "&activo=S";
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&paginacion=false";
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            //        strDatos += "&cveJuzgadoArray=" + $("#hiddenJuzgadoArray").val();
            strDatos += $("#hiddenVariables").val();
            strDatos += "&fechaDesde=" + $("#txtfechaInicial").val();
            strDatos += "&fechaHasta=" + $("#txtfechaFinal").val();
            strDatos += "&cveTipoJuzgado=" + $("#cmbTipoJuzgado").val();
            strDatos += "&cveEstatusCarpeta=" + $("#cmbEstatusCarpeta").val();
            strDatos += "&bar=true";
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
                        $("#inputRegresar2").hide();
                        //                    if ($("#hiddenNivel").val() != 1) {
                        //                        $("#inputRegresar").show();
                        //                    } else {
                        //                        $("#inputRegresar").hide();
                        //                    }
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
                mensaje += " / Tribunal";
            }
            if ($("#hiddenNivel").val() == 3) {
                mensaje = " /<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>/ <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>Tribunal</span>";
                mensaje += " / Detalles";
            }

            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Reporte de Carga Magistrados General</span>" + mensaje);
        };
        regresar = function (nivel, bandera) {
            if (bandera == 1) {
                nivel = $("#hiddenNivel").val() - 1;
            }
            $("#cmbNumReg").val(100);
            $("#cmbPaginacion").val(1);
            var strDatos = "";
            if (nivel == 0) {
                $("#h5titulo").html("Reporte de Carga Magistrados General");
                $("#divConsulta").hide("slide");
                $("#paginacion").hide();
                $("#inputImprimir").hide();
                $("#inputExportarPDF").hide();
                $("#inputExportarExcel").hide();
            } else {

                if (nivel == 1) {
                    $("#paginacion").hide();
                } else if (nivel == 2) {
                    strDatos += "&idJuzgador=" + $("#hiddenJuzgador").val();
                    $("#paginacion").hide();
                }
            }
            $("#hiddenVariables").val(strDatos);
            if (nivel > 0) {
                consultarReporteCargarJueces(true, nivel);
            }

        };

        anioHoy = function () {
            var y = new Date();
            return y.getFullYear();
        }


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

        //    cargaTipoCarpeta = function () {
        //        var strDatos = "accion=consultar";
        //        $.ajax({
        //            type: "POST",
        //            url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
        //            data: strDatos,
        //            async: true,
        //            dataType: "html",
        //            beforeSend: function (objeto) {
        //                // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
        //            },
        //            success: function (datos) {
        //                var json = "";
        //                json = eval("(" + datos + ")"); //Parsear JSON
        //
        //                if (json.totalCount > 0) {
        //                    $("#cmbTipoCarpeta").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
        //                    for (var i = 0; i < json.totalCount; i++) {
        //                        $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
        //
        //
        //                    }
        //                    // $("#cmbTipoCarpeta").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
        //                }
        //
        //            },
        //            error: function (objeto, quepaso, otroobj) {
        //                +
        //                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
        //                $("#divAlertDager").show("slide");
        //                setTimeAlert("divAlertDager");
        //            }
        //        });
        //    };


        cargaJuzgados = function () {

            var strDatos = "accion=consultar";
            strDatos += "&cveInstancia=2";
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
                            $("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                            if (json.data[i].cveJuzgado == juzgadoSesion) {
                                $("#cmbJuzgado option[value='" + json.data[i].cveJuzgado + "']").attr("selected", "selected");
                            }
                            //                        $("#hiddenJuzgadoArray").val($("#hiddenJuzgadoArray").val() + "-" + json.data[i].cveJuzgado);

                        }
                    }

                    //cargaTipoCarpeta();

                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };


        cargaJuzgadores = function () {
            $("#cmbJuzgadores").empty();
            $("#cmbJuzgadores").append($('<option></option>').val("").html("Seleccione una opci&oacute;n"));
            var activo = "";
            if ($("#checkActivos").is(":checked")) {
                activo = "S";
            }

            var strDatos = "accion=consultar";
            strDatos += "&cveTipoJuzgador=7";
            strDatos += "&activo=" + activo;
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
                    json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbJuzgadores").append($('<option></option>').val(json.data[i].idJuzgador).html(json.data[i].titulo + " " + json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].materno));
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

        titulos = function () {
            var titulo = " Reporte de Carga de Magistrados";

            titulo += " del " + $("#txtfechaInicial").val() + " al " + $("#txtfechaFinal").val();

            if ($("#checkProgramada").is(":checked")) {
                titulo += " Programadas/Urgentes ";
            }
            if ($("#checkPrivada").is(":checked")) {
                titulo += " Publica/Privada ";
            }
            titulo += " en el estado de M\u00E9xico.";
            return titulo;
        };

        combo = function (json, bandera) {
            var i;
            var combo = "<option value=''>Seleccione una opci&oacute;n</option>";
            if (bandera) {
                for (i = 0; i < json.totalJuzgadores; i++) {
                    combo += "<option value='" + json.comboJuzgadores[i].id + "'>" + json.comboJuzgadores[i].titulo + " " + json.comboJuzgadores[i].nombre + " " + json.comboJuzgadores[i].paterno + " " + json.comboJuzgadores[i].materno + "</option>";
                }
                if (json.totalJuzgadores == 0) {
                    combo = "<option value=0>NO HAY REGISTROS</option>";
                }
            }
            return combo;
        };

        $("#checkProgramada").click(function () {
            if ($("#checkProgramada").is(":checked")) {
                $("#checkPrivada").removeAttr("checked");
            } else {

            }
        });
        $("#checkPrivada").click(function () {
            if ($("#checkPrivada").is(":checked")) {
                $("#checkProgramada").removeAttr("checked");
            } else {

            }
        });
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
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        var estatus = "";
                        for (var i = 0; i < json.totalCount; i++) {
                            if (json.data[i].cveEstatusCarpeta == 1) {
                                estatus = "EN TRAMITE";
                                $("#cmbEstatusCarpeta").append($('<option id="cmbEstatus' + json.data[i].cveEstatusCarpeta + '"></option>').val(json.data[i].cveEstatusCarpeta).html(estatus));
                            } else {
                                $("#cmbEstatusCarpeta").append($('<option id="cmbEstatus' + json.data[i].cveEstatusCarpeta + '"></option>').val(json.data[i].cveEstatusCarpeta).html(json.data[i].desEstatusCarpeta));
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
        cargaResoluciones = function () {
            var strDatos = "accion=consultar";
            strDatos += "&cveInstancia=2";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tipossentencias/TipossentenciasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {

                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        var estatus = "";
                        for (var i = 0; i < json.totalCount; i++) {

                            $("#cmbTiposentencia").append($('<option id="cmbEstatus' + json.data[i].cveTipoSentencia + '"></option>').val(json.data[i].cveTipoSentencia).html(json.data[i].desTipoSentencia));


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

            cargaJuzgados();
            cargaJuzgadores();
            cargarEstatusCarpeta();
            cargaResoluciones();
            //obtenerPermisosFormulario('REPORTES', 'CARGA DE MAGISTRADOS AUDIENCIAS');
            $("#cmbTiposentencia").change(function () {
                if ($("#cmbTiposentencia").val() != "") {
                    $("#cmbEstatusCarpeta").attr("disabled", true);
                    $("#cmbEstatusCarpeta").val(2);
                } else {
                    $("#cmbEstatusCarpeta").val("");
                    $("#cmbEstatusCarpeta").attr("disabled", false);
                }
            });
            $("#txtAnio").validaCampo('0123456789');
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
            $("#txtAnio").validaCampo('0123456789');

            fechaBaseDatos(
                    {
                        txtfechaInicial: "fecha",
                        txtfechaFinal: "fecha"
                    }
            );

            fechaMySQLaNormal = function (fecha) {
                var fechaHora = fecha.split(" ");
                var vecFecha = fechaHora[0].split("-");
                var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
                fechaHora = fechaHora[1].split(":");
                fechaHora = fechaHora[0] + ":" + fechaHora[1];
                return fechaNormal + " " + fechaHora;
            };
        });
    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>