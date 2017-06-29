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
    <input type="hidden" id="hiddenVariables" value="" >
    <input type="hidden" id="hiddenCveJuzgado" value="">
    <input type="hidden" id="hiddenTituloReporte" value="">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Reporte de Personas con o sin Legal Detenci&oacute;n en el Estado de M&eacute;xico.
            </h5>
        </div>
        <div  id="panelPrincipal" class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divPanelControl">

                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'>Juzgado</label>
                        <div class="col-md-5">
                            <div id="divCmbJuzgado" class="logobox"></div>
                            <select class="form-control" name="cmbJuzgado" id="cmbJuzgado" <!--onchange="comboTipoCarpeta();-->" >
                                    <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'>Tipo carpeta</label>
                        <div class="col-md-5">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control" name="cmbTipoCarpeta" id="cmbTipoCarpeta" onchange="changeLabel(this)" >
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3" data-step="2" data-position='right' id="lblRelationName">No. Causa de Control: </label>
                        <div class="col-md-5">
                            <div id="divSinRelacion" >
                                <input type="text" id="txtNumero" class="form-inline" id="txtNumero" placeholder="N&uacute;mero">/
                                <input type="text" class="form-inline buscarToca" id="txtAnio" id="txtAnio" maxlength="4" placeholder="A&ntilde;o" value="">
                            </div>  
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3 " data-step="2" data-position='right'>Nombre de la persona</label>
                        <div class="col-md-5">
                            <div>
                                <input type="text" class="form-control"
                                       id="txtNombreOfendido" style="text-transform:uppercase;"
                                       name="txtNombreOfendido" placeholder="NOMBRE   APELLIDO PATERNO   APELLIDO MATERNO " onkeypress="return validarCampo(event)">
                            </div>
                        </div>                                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3" data-step="2" data-position='right'>Legal Detenci&oacute;n</label>
                        <div class="col-md-5">
                            <select class="form-control" name="cmbLegalDetencion" id="cmbLegalDetencion">
                                <option value="0">Seleccione una opci&oacute;n</option>
                                <option value="S">SI</option>
                                <option value="N">NO</option>
                            </select>
                        </div>                
                    </div>

                    <!--<div class="form-group">                                                                
                        <label class="control-label col-md-3"  data-step="2" data-position='right'>Rango de fecha de la causa</label>
                        <div class="col-md-5">
                            <input type="radio" name="optradio" value="false" class="form-inline" id="checkRango" onclick="muestraOpc(2)"> 
                        </div>
                    </div>-->
                    <div class="form-group">
                        <label class="control-label col-md-3"  data-step="2" data-position='right'>Rango de fecha de radicaci&oacute;n</label>
                        <div class="form-inline"> 
                            <div class="col-md-5">
                                <input type="text" id="txtfechaInicialRadicacionLD" placeholder="FECHA INICIO" class="form-control datepicker"/>
                                <input type="text" id="txtfechaFinalRadicacionLD" placeholder="FECHA FIN" class="form-control datepicker"/>
                            </div>
                        </div>
                        <!--                    <div class="form-inline"> 
                                                <label class="control-label col-md-3 needed"  data-step="2" data-position='right'>Fecha Fin:</label>
                                                <div class="col-md-5">
                                                    <input type="text" id="txtfechaFinal" placeholder="FECHA FIN" class="form-control datepicker"/>
                                                </div>
                                            </div> -->
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="consultarImputadosLegalDetencion(1);"> 
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimirTabla" value="Imprimir" onclick="imprimir('divTableResult');" style="display:none;">
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputExportarTablaPDF" value="Exportar PDF" onclick="exportarTabla('exportarPDF', 'divTableResult');" style="display:none;">
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputExportarTablaExcel" value="Exportar Excel" onclick="exportarTabla('exportarExcel', 'divTableResult');" style="display:none;">
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
                <div id="divConsulta" style="display: none" class="col-xs-12">
                    <div class="col-xs-12">
                        <div class="form-group col-md-4" style="padding: 10px">
                            <label class="control-label" id="totalReg"></label>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarImputadosLegalDetencion(0);">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarImputadosLegalDetencion(0);">
                                <option value="10">10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                                <option value="25">25</option>
                                <option value="40">40</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    <div id="divTableResult" div class="col-md-12 table-responsive">
                    </div>
                </div>
            </div>
            <input type="hidden" id="datosImpresion">
            <div id="divTabla" style="display:none;" align="center">
                <div id="divBotones1" style="display:none;">
                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(2)">
                    <input type="submit" class="btn btn-primary" value="Imprimir" onclick="imprimir('Tabla');">
                    <input type="submit" class="btn btn-primary" value="Exportar PDF" onclick="exportar('exportarPDF', 'Tabla');">
                </div><br>
                <div id="Tabla" style="display:none;width: 80%;"></div><br>
                <div id="divBotones"  style="display:none;">
                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(2)">
                    <input type="submit" class="btn btn-primary" id="inputImprimir" value="Imprimir" onclick="imprimir('Tabla');">
                    <input type="submit" class="btn btn-primary" id="inputExportarPDF" value="Exportar PDF" onclick="exportar('exportarPDF', 'Tabla');">
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
            fechaBaseDatos({datosImpresion: "fecha-hora"});
            divContents = divContents.replace(/label/g, 'p');
            divContents = divContents.replace(/\/label/g, '/p');
            divContents = divContents.replace(/Buscar:/g, '');
            divContents = divContents.replace(/<input type="search" class="form-control input-sm" aria-controls="tblResultadosGrid">/g, '');
            divContents += "<br><br><b>Fecha y hora de consulta:</b>  " + $("#datosImpresion").val() + "<br><p><b>Generado por:</b>  " + nombre + "</p>";
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>SIGEJUPE</title>');
            printWindow.document.write('</head><body><center><img src="img/logoPjAcuses.jpg"></center> <br><center><label ><b>Usuario:  </b>' + nombre + '</label></center><br><br>');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();

        };
        exportar = function (accion, div) {
            var usuario = '<?php echo $_SESSION["nombre"]; ?>';
            $.each($("#tblResultadosGrid td"), function () {
                $(this).attr("id", "lng");
            });
            var numPixeles = 450;
            var fontSize = 10;
            var contenido = $("#" + div).html();
            contenido = contenido.replace(/id="encabezado"/g, 'style="text-align:center;"');
            contenido = contenido.replace('width="100%"', '');
            var nombreArchivo = "REPORTE_PERSONAS_C/S_LEGAL_DETENCION";
            var tituloReporte = titulos();
            contenido = contenido.replace(/width/g, '  ');
            contenido = contenido.replace(/Buscar:/g, '');
            contenido = contenido.replace(/onclick="(.*?)":/g, '');
            contenido = contenido.replace(/,/g, ', ');
            contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px; font-size:' + fontSize + 'pt;"');
            contenido = contenido.replace(/id="os"/g, 'style="width:100px;"');
            contenido = contenido.replace(/<center>/g, '');
            contenido = contenido.replace(/<\/center>/g, '');
            contenido = contenido.replace(/<input aria-controls="tblResultadosGridAct" class="form-control input-sm" type="search">/g, '');
            contenido = contenido.replace(/<input type="search" class="form-control input-sm" aria-controls="tblResultadosGridAct">/g, '');
            $("#contenidoIframe").val(contenido);
            $("#accionIframe").val(accion);
            $("#infoIframe").val(usuario + "&@" + tituloReporte + "&@" + nombreArchivo + "&@&@&@" + $("#datosImpresion").val());
            $("#divAlertInfo").html("Generando Archivo");
            $("#divAlertInfo").show("slide");
            setTimeAlert("divAlertInfo");
            $("#formIframe").submit();
        };
        exportarTabla = function (accion, div) {
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
                fontSize = 8;
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
            var nombreArchivo = "REPORTE_PERSONAS_C/S_LEGAL_DETENCION";
            var tituloReporte = titulos();
            contenido = contenido.replace(/width/g, '  ');
            contenido = contenido.replace(/Buscar:/g, '');
            contenido = contenido.replace(/onclick="(.*?)":/g, '');
            contenido = contenido.replace(/,/g, ', ');
            contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px; font-size:' + fontSize + 'pt;"');
            contenido = contenido.replace(/id="os"/g, 'style="width:100px;"');
            contenido = contenido.replace(/<center>/g, '');
            contenido = contenido.replace(/<\/center>/g, '');
            contenido = contenido.replace(/<input aria-controls="tblResultadosGridAct" class="form-control input-sm" type="search">/g, '');
            contenido = contenido.replace(/<input type="search" class="form-control input-sm" aria-controls="tblResultadosGridAct">/g, '');
            $("#contenidoIframe").val(contenido);
            $("#accionIframe").val(accion);
            $("#infoIframe").val(usuario + "&@" + tituloReporte + "&@" + nombreArchivo + "&@&@&@" + $("#datosImpresion").val());
            $("#divAlertInfo").html("Generando Archivo");
            $("#divAlertInfo").show("slide");
            setTimeAlert("divAlertInfo");
            $("#formIframe").submit();
        };
        limpiar = function () {
            $("#divRegresar").hide();
            $('#checkRango').removeAttr("checked");
            $('#checkRango').val("false");
            $('#inputImprimirTabla').hide();
            $("#inputExportarTablaPDF").hide();
            $("#inputExportarTablaExcel").hide();
            $('#divRangoFechas').hide();
            $("#divConsulta").hide();
            $("#divTableResult").html("");
            fechaBaseDatos({txtfechaInicialRadicacionLD: "fecha", txtfechaFinalRadicacionLD: "fecha"});
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Reporte de Personas con o sin Legal Detenci&oacute;n en el Estado de M\u00e9xico.</span>");
        };
        filtro = function () {
            var strDatos = "";
            if ($("#cmbJuzgado").val() != 0) {
                strDatos += "&cveJuzgado=" + $("#cmbJuzgado").val();
            }
            if ($("#cmbTipoCarpeta").val() != 0) {
                strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            }
            if ($("#txtNumero").val() != "") {
                strDatos += "&numero=" + $("#txtNumero").val();
            }
            if ($("#txtAnio").val() != "") {
                strDatos += "&anio=" + $("#txtAnio").val();
            }
            if ($("#cmbLegalDetencion").val() != 0) {
                strDatos += "&LegalDetencion='" + $("#cmbLegalDetencion").val() + "'";
            }
            if ($("#txtfechaInicialRadicacionLD").val() != "") {
                strDatos += "&fechaInicialRadicacionLD=" + $("#txtfechaInicialRadicacionLD").val();
            }
            if ($("#txtfechaFinalRadicacionLD").val() != "") {
                strDatos += "&fechaFinalRadicacionLD=" + $("#txtfechaFinalRadicacionLD").val();
            }
            return strDatos;
        };
        fechaMySQLaNormal = function (fecha) {
            var fechaHora = fecha.split(" ");
            var vecFecha = fechaHora[0].split("-");
            var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
            fechaHora = fechaHora[1].split(":");
            fechaHora = fechaHora[0] + ":" + fechaHora[1];
            return fechaNormal /*+ " " + fechaHora*/;
        };
        etiquetas = function () {
            var etiqueta = "";
            return etiqueta;
        };
        titulos = function () {
            var etiqueta = etiquetas();
            var titulo = "Reporte de Personas con o sin Legal Detenci\u00F3n" + etiqueta;
            if ($("#cmbJuzgado").val() != 0) {
                titulo += " en el " + $("#cmbJuzgado :selected").text();
            }
            if ($("#txtfechaInicialRadicacionLD").val() != "" && $("#txtfechaFinalRadicacionLD").val() != "") {
                titulo += " de " + $("#txtfechaInicialRadicacionLD").val() + " a " + $("#txtfechaFinalRadicacionLD").val();
            }
            titulo += " del Estado de M\u00e9xico.";
            return titulo;
        };

        /**************COMBOS****************/
        comboJuzgados = function () {
            $.ajax({
                type: "POST",
                //url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                //data: {accion: "distrito2Instancia", obligaPermiso: "false"},
                data: {accion: "consultarCombo", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    //console.log(datos);
                    try {
                        $('#cmbJuzgado').empty();
                        $('#cmbJuzgado').append('<option value="0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if (juzgadoSesion == object.cveJuzgado) {
                                    var selected = ' selected="selected" ';
                                } else {
                                    var selected = '';
                                }
                                if (object.cveTipoJuzgado == 1) {
                                    $('#cmbJuzgado').append('<option ' + selected + ' value="' + object.cveJuzgado + '" data-tipoJuzgado="' + object.cveTipoJuzgado + '">' + object.desJuzgado + '</option>');
                                }
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        comboTipoCarpeta = function () {
            var cveTipoJuzgado = $("#cmbJuzgado :selected").attr("data-tipoJuzgado");
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoCarpeta').empty();
                        $('#cmbTipoCarpeta').append('<option value="0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                //                            switch (cveTipoJuzgado) {
                                //                                case "1":
                                //                                    if (object.cveTipoCarpeta == "2") {
                                //                                        $('#cmbTipoCarpeta').append('<option selected="selected" value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                //                                    }
                                //                                    break;
                                //                            }
                                if (object.cveTipoCarpeta == "2") {
                                    $('#cmbTipoCarpeta').append('<option selected="selected" value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                }
                            });

                        }
                    } catch (e) {
                        alert("Error al cargar tipo de carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipo carpeta:\n\n" + otroobj);
                }
            });
        };
        changeLabel = function (objOption) {
            $("#lblRelationName").html("No. " + $("#" + objOption.id + " option:selected").text() + ":");
            $("#hiddenCveTipoCarpeta").val($("#cmbTipoCarpeta").val());
            if ($("#cmbTipoCarpeta").val() == 9) { // sin relacion...
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#divSinRelacion").hide();
            } else {
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#divSinRelacion").show();
            }
        };
        /**
         * Muestra/Oculta el div del formulario y la tabla de bUsqueda
         * @param {int} opc Recibe un parametro para mostrar el DIV correspondiente
         */
        function changeDivForm(opc) {
            if (opc === 0) {//Doy clic en Imputados Carpetas
                $("#divBotones1").show("fade");
                $("#divBotones").show("fade");
                $("#divResultados").hide("fade");
                $("#divFormulario").hide("slide");
                $("#divTabla").show("slide");
                $("#Tabla").show("slide");
            }
            if (opc === 2) {//Doy clic en Regresar
                $("#divResultados").show("fade");
                $("#divFormulario").show("slide");
                $("#divBotones1").hide("fade");
                $("#divBotones").hide("fade");
                $("#divTabla").hide("slide");
                $("#Tabla").hide("slide");
            }
        }
        function showInfoImpCarpeta2(idImputadoCarpeta) {
            changeDivForm(0);
            var strDatos = "accion=consultarUnImputadoLegalDetencion";
            strDatos += "&activo=S";
            strDatos += "&idImputadoCarpeta=" + idImputadoCarpeta;
            strDatos += "&tipo=" + "Carpetas";
            //        strDatos += "&txtFecInicialBusqueda=" + "";
            //        strDatos += "&txtFecFinalBusqueda=" + "";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    var estado;
                    var mun;
                    var tabla = "<table id='tblResultadosGrid' width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered table-responsive' >";
                    tabla += "<tbody>";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    $.each(json.data[0].ImputadosCarpetas, function (k, vImputado) {
                        tabla += "<tr><td colspan='2' align='center'><b>DATOS DE LA CAUSA</b></td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Causa de Control</b></td><td>" + vImputado.Carpeta + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Fecha de Radicaci\u00f3n</b></td><td>" + fechaMySQLaNormal(vImputado.fechaRadicacion) + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Carpeta de Investigaci\u00f3n</b></td><td>" + vImputado.CarpetaInv + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>NUC</b></td><td>" + vImputado.nuc + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Juzgado</b></td><td>" + vImputado.Juzgado + "</td><tr>";
                        tabla += "<tr><td colspan='2' align='center'><b>DATOS PERSONALES DEL IMPUTADO</b></td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Nombre Completo</b></td><td>" + vImputado.nombre + ' ' + vImputado.paterno + ' ' + vImputado.materno + "</td><tr>";
                        var LegalDetencion = '';
                        if (vImputado.LegalDetencion == 'S') {
                            LegalDetencion = "SI";
                        } else if (vImputado.LegalDetencion == 'N') {
                            LegalDetencion = "NO";
                        } else {
                            LegalDetencion = "SE DESCONOCE";
                        }
                        tabla += "<tr><td style='text-align: right;'><b>Legal Detenci\u00f3n</b></td><td>" + LegalDetencion + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Domicilio</b></td><td>" + vImputado.domicilio + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>RFC</b></td><td>" + vImputado.rfc + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>CURP</b></td><td>" + vImputado.curp + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Ocupaci\u00f3n</b></td><td>" + vImputado.desocupacion + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Fecha de Nacimiento</b></td><td>" + vImputado.fechaNacimiento + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Edad</b></td><td>" + vImputado.edad + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Lugar de Nacimiento</b></td><td>" + vImputado.desPais + ', ' + vImputado.estadoNacimiento + ', ' + vImputado.municipioNacimiento + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Estado Civil</b></td><td>" + vImputado.desEstadoCivil + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Nivel de Istrucci\u00f3n</b></td><td>" + vImputado.desNivelInstruccion + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Habla Espa\u00f1ol?</b></td><td>" + vImputado.desEspanol + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Habla Alg\u00fan Dialecto?</b></td><td>" + vImputado.desDialecto + ' ' + vImputado.desFamLin + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Necesita Int\u00e9rprete?</b></td><td>" + vImputado.interprete + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Estado Psicofisico</b></td><td>" + vImputado.edopsico + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Grupo \u00c9tnico</b></td><td>" + vImputado.grupoetnico + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Alias</b></td><td>" + vImputado.alias + "</td><tr>";
                        tabla += "<tr><td colspan='2' align='center'><b>DATOS DE SEGUMIENTO DE LA CAUSA</b></td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Fecha de Declaraci\u00f3n</b></td><td>" + vImputado.fechaDeclaracion + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Fecha de Imputaci\u00f3n</b></td><td>" + vImputado.fechaImputacion + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Fecha de Control de Detenci\u00f3n</b></td><td>" + vImputado.fechaControl + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Fecha de T\u00e9rmino de Consititucional</b></td><td>" + vImputado.fecTerminoCons + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Fecha de Cierre de Investigaci\u00f3n</b></td><td>" + vImputado.fecCierreInv + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Tiene Sobreseimiento?</b></td><td>" + vImputado.tieneSobreseimiento + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Fecha de Sobreseimiento</b></td><td>" + vImputado.fechaSobreseimiento + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Ingreso Mensual</b></td><td>" + vImputado.ingresomensual + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Tipo de Detenci\u00f3n</b></td><td>" + vImputado.tipodetencion + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Reincidencia?</b></td><td>" + vImputado.reincidencia + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Cereso</b></td><td>" + vImputado.cereso + "</td><tr>";
                        tabla += "<tr><td style='text-align: right;'><b>Etapa Procesal</b></td><td>" + vImputado.EtapaProcesal + "</td><tr>";
                    });
                    tabla += "</tbody></table>";
                    $("#divTabla").show("slide");
                    $("#Tabla").html(tabla);
                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        }
        getPaginas = function (pag, cantReg) {
            var cantReg = $("#cmbNumReg").val();
            var strDatos = "accion=getPaginasImpConsultaLegalDetencion";
            strDatos += "&activo=S";
            //        strDatos += "&txtFecInicialBusqueda=" + "";
            //        strDatos += "&txtFecFinalBusqueda=" + "";
            strDatos += "&nombre=" + $("#txtNombreOfendido").val();
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&tipo=" + "Imputado";
            strDatos += filtro();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#totalReg").html("<b> Total: " + json.totalCount.toLocaleString('en-US') + "</b>");
                        $("#cmbPaginacion").val(pag);
                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();
                        $("#divAlertDager").html("Error EL NUMERO DE " + tipoNumero + " NO EXISTE");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        consultarImputadosLegalDetencion = function (Aux) {
            if (Aux == 1) {
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(100);
            }
            var nombre = $("#txtNombreOfendido").val();
            nombre = nombre.trim();
            var cont = nombre.length;
            //if (cont > 2) {
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var strDatos = "";
            strDatos += "&tipo=" + "Imputado";
            strDatos += "&activo=S";
            //        strDatos += "&txtFecInicialBusqueda=" + "";
            //        strDatos += "&txtFecFinalBusqueda=" + "";
            strDatos += "&nombre=" + $("#txtNombreOfendido").val();
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&accion=consultarImputadosLegalDetencion";
            strDatos += filtro();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //                alert(datos);
                    var json = eval("(" + datos + ")"); //Parsear JSON
                    var table = "";
                    if (json.estatus == "ok") {
                        table += "<table id='tblResultadosGridAct' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th width='8%'>N\u00fam.</th>";
                        table += "<th width='12%'>Tipo</th>";
                        table += "<th width='35%'>Nombre</th>";
                        table += "<th>Legal Detenci\u00f3n</td>";
                        table += "<th width='20%'>Carpeta</th>";
                        table += "<th>Fecha de Radicaci\u00f3n</td>";
                        table += "<th>Carpeta Investigaci\u00f3n</td>";
                        table += "<th>NUC</td>";
                        table += "<th width='20%'>Juzgado</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        $.each(json.datos, function (index, element) {
                            if (element.tipo == 'Imputado Carpeta') {
                                table += '<tr onclick="showInfoImpCarpeta2(' + element.id + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                                table += "<td>" + (index + 1) + "</td>";
                                table += "<td><div class='rojo'>Imputado Carpeta</div></td>";
                            }
                            if (element.cveTipoPersona == "1")
                            {
                                table += "<td> " + element.NombrePer + " " + element.PaternoPer + " " + element.materno + "</td>";
                            } else
                            {
                                table += "<td> " + element.nombreMoral + "</td>";
                            }
                            var LegalDetencion = '';
                            if (element.LegalDetencion == 'S') {
                                LegalDetencion = "SI";
                            } else if (element.LegalDetencion == 'N') {
                                LegalDetencion = "NO";
                            } else {
                                LegalDetencion = "SE DESCONOCE";
                            }
                            table += "<td>" + LegalDetencion + "</td>";
                            table += "<td>" + element.desTipoCarpeta + " " + element.numero + "/" + element.anio + "</td>";
                            table += "<td>" + fechaMySQLaNormal(element.fechaRadicacion) + "</td>";
                            table += "<td>" + element.carpetaInv + "</td>";
                            table += "<td>" + element.nuc + "</td>";
                            table += "<td>" + element.desjuzgado + "</td>";
                            table += "</tr> ";
                        });
                        table += "</tbody> ";
                        table += "</table> ";
                        $("#divConsulta").show();
                        $("#divTableResult").html(table);
                        $('#inputImprimirTabla').show();
                        $("#inputExportarTablaPDF").show();
                        $("#inputExportarTablaExcel").show();
                        $("#tblResultadosGridAct").DataTable({
                            paging: false
                        });
                        getPaginas(json.pagina, json.total);
                    } else {
                        $("#divAlertInfo").html('' + json.mensaje);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                        $("#divConsulta").hide();
                        $("#divTableResult").html("");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
            //        } else {
            //            $("#divAlertInfo").html('Introduzca al menos tres caracteres para iniciar la b&uacute;squeda');
            //            $("#divAlertInfo").show("slide");
            //            setTimeAlert("divAlertInfo");
            //        }
            //********************* *************************************
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
                                            if (nombreHijo.nomFormulario == 'AMPAROS EDO MEX') {
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
            obtenerPermisosFormulario('REPORTES', 'PERSONAS CON LEGAL DETENCION');
            //obtenerPermisos();
            /**CARGAR COMBOS**/
            comboJuzgados();
            comboTipoCarpeta();
            $("#cmbTipoCarpeta").attr("disabled", true);
            $("#cmbJuzgado").attr("disabled", true);
            $("#txtfechaInicialRadicacionLD").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $("#txtfechaFinalRadicacionLD").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $('#txtfechaInicialRadicacionLD').on("dp.change", function (e) {
                $('#txtfechaFinalRadicacionLD').data("DateTimePicker").minDate(e.date);
            });
            $('#txtfechaFinalRadicacionLD').on("dp.change", function (e) {
                $('#txtfechaInicialRadicacionLD').data("DateTimePicker").maxDate(e.date);
            });
            fechaBaseDatos({datosImpresion: "fecha-hora"});
            fechaBaseDatos({txtfechaInicialRadicacionLD: "fecha", txtfechaFinalRadicacionLD: "fecha"});
        });
    </script> 
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>