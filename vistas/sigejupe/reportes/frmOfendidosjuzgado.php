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
    <input type="hidden" id="hiddenEdad" value="S">
    <input type="hidden" id="hiddenDesRegion" value="">
    <input type="hidden" id="hiddenDesDistrito" value="">
    <input type="hidden" id="hiddenRangoEdad" value="">
    <input type="hidden" id="hiddenDesJuzgado" value="">
    <input type="hidden" id="hiddenFechaHoy" value="">
    <input type="hidden" id="hiddenFechaHoraHoy" value="">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Reporte de Ofendidos
            </h5>
        </div>
        <div  id="panelPrincipal" class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divPanelControl">
                    <div class="form-group">
                        <label class="col-md-4 control-label">&nbsp;</label>
                        <div class="radio col-md-5">
                            <label><input type="radio" name="optradio" value="1" id="radio1" onclick="radio()">A&ntilde;o de causa</label>
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
                            <label class="col-md-4 control-label needed">A&ntilde;o de causa</label>
                            <div class="col-md-5">
                                <input type="text" id="txtAnioCarpeta" placeholder="Ej. 2010" class="form-control" maxlength="4" onkeypress="return validarNumeros(event)">
                            </div>
                        </div>
                    </div>
                    <div id="divMes"style="display: none">
                        <div class="form-group">
                            <label class="col-md-4 control-label needed">Mes (Radicaci&oacute;n)</label>
                            <div class="col-md-8">
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
                            </div>
                            <label class="control-label col-md-4 needed" >A&ntilde;o</label>
                            <div  class=" col-md-5" >
                                <input type="text" class="form-control" id="txtAnio" placeholder="Ej. 2010" maxlength="4" onkeypress="return validarNumeros(event)">                           
                            </div>
                        </div>
                    </div>
                    <div id="divFecha"style="display: none">
                        <div class="form-group">
                            <label class="col-md-4 control-label needed">Fecha Inicial (Registro)</label>
                            <div class="col-md-5">
                                <input type="text" id="fechaConsultar" placeholder="FECHA INICIAL" class="form-control datepicker"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label needed">Fecha Final (Registro)</label>
                            <div class="col-md-5">
                                <input type="text" id="fechaConsultarEnd" placeholder="FECHA FINAL" class="form-control datepicker"/>
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
                    <div class="form-group" style="display:none;">                                                                
                        <label class="control-label col-md-4" id="lblRelationName">No.</label>
                        <div id="divSinRelacion" class="col-md-5">
                            <input type="text" id="txtNumero" class="form-inline Relacionado" id="txtNumero" placeholder="N&uacute;mero" maxlength="5" onkeypress="return validarNumeros(event);">/<input type="text" class="form-inline Relacionado" id="txtAnio" id="txtAnio" maxlength="4" placeholder="A&ntilde;o" onkeypress="return validarNumeros(event);">
                        </div> 
                        <label class="control-label col-xs-4" id="labelEncontrado"></label>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">G&eacute;nero</label>
                        <div class="col-md-1">
                            <input type="checkbox" id="idGenero" class="form-inline" onclick="genero()">
                        </div>
                        <div class="col-md-4" id="divGenero" style="display:none">
                            <select class="form-control" name="cmbGenero" id="cmbGenero">
                                <option value="0">Seleccione una opci&oacute;n</option>
                                <option value="1">HOMBRE</option>
                                <option value="2">MUJER</option>
                                <option value="3">NO IDENTIFICADO</option>
                            </select>
                        </div>   
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Edad</label>
                        <div class="col-md-5">     
                            <input type="checkbox" id="idEdad" class="form-inline" onclick="edad()">
                        </div>
                    </div>
                    <div id="divEdad" style="display:none;">
                        <div class="form-group">
                            <label class="col-md-4 control-label">&nbsp;</label>
                            <div class="radio col-md-5">
                                <label><input type="radio" name="optradioEdad" id="radioE2" checked="checked" onclick="edadIntervalo()">
                                    <label>Rangos de edades</label>
                                </label>
                            </div>
                        </div>
                        <div id="divRangoEdad" class="form-group">
                            <label class="col-md-4 control-label">&nbsp;</label>
                            <div class="radio col-md-5">
                                <label><input type="radio" name="optradioEdad" id="radioE" onclick="edadIntervalo()">
                                    <div class="form-group"> 
                                        <label class="control-label col-md-5">Edad M&iacute;nima</label>
                                        <div class="col-md-4">
                                            <input type="text" id="txtMinEdad" class="form-control" disabled maxlength="2" onkeypress="return validarNumeros(event);">
                                        </div>                                
                                    </div>
                                    <div class="form-group"> 
                                        <label class="control-label col-md-5">Edad M&aacute;xima</label>
                                        <div class="col-md-4">
                                            <input type="text" id="txtMaxEdad" class="form-control" disabled maxlength="2" onkeypress="return validarNumeros(event);">
                                        </div>                                
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4">Tipo persona</label>
                        <div class="col-md-5">
                            <select class="form-control" name="cmbTipoPersona" id="cmbTipoPersona">
                                <option value="0">Seleccione una opci&oacute;n</option>
                                <option value="1">PERSONA F&Iacute;SICA</option>
                                <option value="2">PERSONA MORAL</option>
                                <option value="3">OTRA</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4">Tipo parte</label>
                        <div class="col-md-5">
                            <select class="form-control" name="cmbTipoParte" id="cmbTipoParte" onclick="victima()">
                                <option value="0">Seleccione una opci&oacute;n</option>
                                <option value="2">Ofendido</option>
                                <option value="4">Victima</option>
                            </select>
                        </div>                                
                    </div>
                    <div id="divVictima" style="display:none;">
                        <div class="form-group"> 
                            <label class="control-label col-md-5">Ocupaci&oacute;n</label>
                            <div class="col-md-1">
                                <input type="checkbox" id="checkOcupacion" class="form-inline" onclick="ocupacion()">
                            </div>
                            <div class="col-md-3" id="divOcupacion" style="display:none">
                                <select class="form-control" name="cmbOcupacion" id="cmbOcupacion">
                                    <option value="0">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>                                
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-5">Relaci&oacute;n imputado</label>
                            <div class="col-md-1">
                                <input type="checkbox" id="idRelacionImputado" class="form-inline" onclick="relacionImputado();">
                            </div>
                            <div class="col-md-3" id="divRelacionImpOfe" style="display:none">
                                <select class="form-control" name="cmbRelacionImpOfe" id="cmbRelacionImpOfe">
                                    <option value="0">Seleccione una opci&oacute;n</option>
                                </select>
                            </div> 
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-5">Delito</label>
                            <div class="col-md-1">
                                <input type="checkbox" id="idDelito" class="form-inline" onclick="delito()">
                            </div>
                            <div class="col-md-3" id="divDelito" style="display:none">
                                <select class="form-control" name="cmbDelito" id="cmbDelito">
                                    <option value="0">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-5">Por N&uacute;m. Delitos</label>
                            <div class="col-md-1">
                                <input type="checkbox" id="checkNumDelitos" class="form-inline" onclick="porNumDelitos()">
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-5">Por Tipo de Violencia</label>
                            <div class="col-md-1">
                                <input type="checkbox" id="checkTipoViolencia" class="form-inline" onclick="porTipoViolencia()">
                            </div>
                            <div class="col-md-3" id="divTipoViolencia" style="display:none">
                                <select class="form-control" name="cmbDelito" id="cmbTipoViolencia">
                                    <option value="0">Seleccione una opci&oacute;n</option>
                                    <option value="1">De acoso</option>
                                    <option value="2">Delincuencia Organizada</option>
                                    <option value="3">Trata de personas</option>
                                    <option value="4">Violencia de genero</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-5">Modalidad Violencia</label>
                            <div class="col-md-1">
                                <input type="checkbox" id="checkModalidadViolencia" class="form-inline" onclick="modalidadViolencia()">
                            </div>
                            <div class="col-md-3" id="divModalidadViolencia" style="display:none">
                                <select class="form-control" name="cmbModalidadViolencia" id="cmbModalidadViolencia">
                                    <option value="0">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>                                
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-5">Escolaridad</label>
                            <div class="col-md-1">
                                <input type="checkbox" id="checkEscolaridad" class="form-inline" onclick="escolaridad()">
                            </div>
                            <div class="col-md-3" id="divEscolaridad" style="display:none">
                                <select class="form-control" name="cmbEscolaridad" id="cmbEscolaridad">
                                    <option value="0">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>                                
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
                <div class="modal fade" id="modalJuzgadoOmunicipio" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header panel-heading" style="padding:25px 45px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="panel-title" id="h5titulo"><span class="glyphicon glyphicon-search"></span> Reporte de Ofendidos</h4>
                            </div>
                            <div class="modal-body" style="padding:35px 45px;">
                                <div class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">Continuar la b&uacute;squeda por:</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">&nbsp;</label>
                                        <div class="radio col-md-5">
                                            <label><input type="radio" name="optradio2" id="radioJuzgado" checked="checked">Juzgado</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">&nbsp;</label>
                                        <div class="radio col-md-5">
                                            <label><input type="radio" name="optradio2" id="radioMunicipio">Municipio de radicaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-4 control-label">&nbsp;</label>
                                        <div class="col-md-5">
                                            <input type="submit" class="btn btn-primary" value="Aceptar" data-dismiss="modal" onclick="aceptarModal();">
                                            <input type="submit" class="btn btn-primary" value="Cancelar" data-dismiss="modal">
                                        </div>
                                    </div>
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
        previoConsultar = function (bandera, nivel) {
            limpiarEscondidos();
            consultar(bandera, nivel);
        };
        limpiarEscondidos = function () {
            $("#inputRegresar2").show();
            $("#inputConsultar").show();
            $("#hiddenEdad").val("S");
            $("#hiddenCveJuzgado").val("");
            $("#hiddenDesJuzgado").val("");
            $("#hiddenCveRegion").val("");
            $("#hiddenDesRegion").val("");
            $("#hiddenCveDistrito").val("");
            $("#hiddenDesDistrito").val("");
            $("#inputImprimir").hide();
            $("#inputExportarPDF").hide();
            $("#inputExportarExcel").hide();
            $("#divConsulta").hide();
            $("#paginacion").hide();
            $("#hiddenNivel").val(0);
            $("#hiddenVariables").val("");
            $("#h5titulo").html("Reporte de Ofendidos");
            $("#radioMunicipio").prop("checked", "");
            $("#radioJuzgado").prop("checked", true);
        };
        limpiar = function (bandera) {
            $("#checkModalidadViolencia").prop("checked", "");
            $("#checkTipoViolencia").prop("checked", "");
            $("#checkOcupacion").prop("checked", "");
            $("#checkNumDelitos").prop("checked", "");
            $("#idRelacionImputado").prop("checked", "");
            $("#inputRegresar2").show();
            $("#inputConsultar").show();
            $("#idGenero").prop("checked", "");
            $("#idEdad").prop("checked", "");
            edad();
            $("#hiddenEdad").val("S");
            $("#cmbGenero").val(0);
            $("#txtNumero").val("");
            $("#cmbTipoJuzgado").val(0);
            $("#cmbTipoParte").val(0);
            $("#cmbTipoPersona").val(0);
            $("#inputImprimir").hide();
            $("#inputExportarPDF").hide();
            $("#inputExportarExcel").hide();
            $("#divConsulta").hide();
            $("#paginacion").hide();
            $("#idLabelDescripcion").text("");
            $("#rutaIntrospeccion").text("");
            if (bandera == 1) {
                $("#txtAnioCarpeta").val("");
                $("#cmbMes").val(1);
                $("#txtAnio").val("");
                $('#fechaConsultar').val(fechaHoy());
                $('#fechaConsultarEnd').val(fechaHoy());
            }
            $("#hiddenNivel").val(0);
            $("#hiddenVariables").val("");
            $("#h5titulo").html("Reporte de Ofendidos");
            $("#radioMunicipio").prop("checked", "");
            $("#radioJuzgado").prop("checked", true);
            victima();
            ocupacion();
            modalidadViolencia();
            relacionImputado();
            delito();
            porNumDelitos();
            porTipoViolencia();
            $("#radio1").prop("checked", "");
            $("#radio2").prop("checked", "");
            $("#radio3").prop("checked", "");
            radio();
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
        edadIntervalo = function () {
            $("#txtMinEdad").val("");
            $("#txtMaxEdad").val("");
            if ($("#radioE2").is(':checked')) {
                $("#txtMinEdad").attr("disabled", "disabled");
                $("#txtMaxEdad").attr("disabled", "disabled");
            } else {
                $("#txtMinEdad").removeAttr("disabled");
                $("#txtMaxEdad").removeAttr("disabled");
            }
        };
        edad = function () {
            $("#divRangoEdad").show();
            $("#radioE2").prop("checked", true);
            $("#radioE").prop("checked", "");
            edadIntervalo();
            if ($("#idEdad").is(':checked')) {
                $("#divEdad").show();
            } else {
                $("#divEdad").hide();
            }
        };
        relacionImputado = function () {
            $("#cmbRelacionImpOfe").val(0);
            if ($("#idRelacionImputado").is(':checked')) {
                $("#divRelacionImpOfe").show();
            } else {
                $("#divRelacionImpOfe").hide();
            }
        };
        victima = function () {
            $("#checkOcupacion").prop("checked", "");
            ocupacion();
            if ($("#cmbTipoParte").val() == 4) {
                $("#divVictima").show();
            } else {
                $("#divVictima").hide();
                $("#divTipoViolencia").hide();
                $("#divEscolaridad").hide();
                $("#divModalidadViolencia").hide();
                $("#divRelacionImpOfe").hide();
                $("#cmbOcupacion").val(0);
                $("#checkTipoViolencia").prop("checked", "");
                $("#checkModalidadViolencia").prop("checked", "");
                $("#checkEscolaridad").prop("checked", "");
                $("#idRelacionImputado").prop("checked", "");
                $("#idDelito").prop("checked", "");
            }
        };
        escolaridad = function () {
            $("#cmbEscolaridad").val(0);
            if ($("#checkEscolaridad").is(":checked")) {
                $("#divEscolaridad").show();
            } else {
                $("#divEscolaridad").hide();
            }
        };
        modalidadViolencia = function () {
            $("#cmbModalidadViolencia").val(0);
            if ($("#checkModalidadViolencia").is(":checked")) {
                $("#divModalidadViolencia").show();
            } else {
                $("#divModalidadViolencia").hide();
            }
        };
        genero = function () {
            $("#cmbGenero").val(0);
            if ($("#idGenero").is(":checked")) {
                $("#divGenero").show();
            } else {
                $("#divGenero").hide();
            }
        };
        ocupacion = function () {
            $("#cmbOcupacion").val(0);
            if ($("#checkOcupacion").is(":checked")) {
                $("#divOcupacion").show();
            } else {
                $("#divOcupacion").hide();
            }
        };
        porTipoViolencia = function () {
            $("#cmbTipoViolencia").val(0);
            if ($("#checkTipoViolencia").is(":checked")) {
                $("#divTipoViolencia").show();
                $("#checkNumDelitos").prop("checked", "");
                $("#idDelito").prop("checked", "");
                $("#divDelito").hide();
            } else {
                $("#divTipoViolencia").hide();
            }
        };
        delito = function () {
            $("#cmbDelito").val(0);
            if ($("#idDelito").is(":checked")) {
                $("#divDelito").show();
                $("#checkNumDelitos").prop("checked", "");
                $("#checkTipoViolencia").prop("checked", "");
                $("#divTipoViolencia").hide();
            } else {
                $("#divDelito").hide();
            }
        };
        porNumDelitos = function () {
            $("#cmbDelito").val(0);
            if ($("#checkNumDelitos").is(":checked")) {
                $("#idDelito").prop("checked", "");
                $("#checkTipoViolencia").prop("checked", "");
                $("#divDelito").hide();
                $("#divTipoViolencia").hide();
            }
        };
        filtro = function () {
            var strDatos = "";
            var mensaje = "";
            if ($("#idGenero").is(':checked')) {
                strDatos += "&porGenero=S";
                if ($("#cmbGenero").val() > 0) {
                    strDatos += "&cveGenero=" + $("#cmbGenero").val();
                }
            }
            if (($("#radioE2").is(':checked')) && ($("#idEdad").is(":checked"))) {
                strDatos += "&intervaloEdad=" + $("#hiddenEdad").val();
            } else {
                if ($("#radioE").is(':checked') && ($("#idEdad").is(":checked"))) {
                    strDatos += "&edadMin=" + $("#txtMinEdad").val();
                    strDatos += "&edadMax=" + $("#txtMaxEdad").val();
                    var rangoE = "Sin especificar";
                    if (($("#txtMinEdad").val() != "") && ($("#txtMaxEdad").val() != "")) {
                        rangoE = "De " + $("#txtMinEdad").val() + " a " + $("#txtMaxEdad").val();
                    } else {
                        if ($("#txtMinEdad").val() != "") {
                            rangoE = "Edad >= " + $("#txtMinEdad").val();
                        }
                        if ($("#txtMaxEdad").val() != "") {
                            rangoE = "Edad <= " + $("#txtMaxEdad").val();
                            ;
                        }
                    }
                    $("#hiddenRangoEdad").val(rangoE);
                }
            }
            if ($("#checkOcupacion").is(":checked")) {
                strDatos += "&porOcupacion=S";
                if ($("#cmbOcupacion").val() != 0) {
                    strDatos += "&cveOcupacion=" + $("#cmbOcupacion").val();
                }
            }
            if ($("#checkEscolaridad").is(":checked")) {
                strDatos += "&porEscolaridad=S";
                if ($("#cmbEscolaridad").val() != 0) {
                    strDatos += "&cveNivelInstruccion=" + $("#cmbEscolaridad").val();
                }
            }
            if ($("#checkModalidadViolencia").is(":checked")) {
                strDatos += "&porModalidad=S";
                if ($("#cmbModalidadViolencia").val() != 0) {
                    strDatos += "&cveModalidad=" + $("#cmbModalidadViolencia").val();
                }
            }
            if ($("#idRelacionImputado").is(":checked")) {
                strDatos += "&relacionImputado=S";
                if ($("#cmbRelacionImpOfe").val() != 0) {
                    strDatos += "&cveRelacionImpOfe=" + $("#cmbRelacionImpOfe").val();
                }
            }
            if ($("#idDelito").is(':checked')) {
                strDatos += "&porDelito=S";
                if ($("#cmbDelito").val() > 0) {
                    strDatos += "&cveDelito=" + $("#cmbDelito").val();
                }
            }
            if ($("#checkTipoViolencia").is(':checked')) {
                strDatos += "&porTipoViolencia=S";
                if ($("#cmbTipoViolencia").val() > 0) {
                    strDatos += "&cveTipoViolencia=" + $("#cmbTipoViolencia").val();
                }
            }
            if ($("#checkNumDelitos").is(":checked")) {
                strDatos += "&porNumDelitos=S";
            }
            if ($("#cmbTipoJuzgado").val() != 0) {
                strDatos += "&cveTipoJuzgado=" + $("#cmbTipoJuzgado").val();
            }
            if ($("#cmbTipoParte").val() != 0) {
                strDatos += "&cmbTipoParteMoral=" + $("#cmbTipoParte").val();
            }
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
            if ($("#cmbTipoParte").val() == 4) {
                $("#idLabelDescripcion").text("Reporte V\u00EDctimas" + mensaje);
            } else {
                if ($("#cmbTipoParte").val() == 2) {
                    $("#idLabelDescripcion").text("Reporte Ofendidos" + mensaje);
                } else {
                    $("#idLabelDescripcion").text("Reporte Ofendidos y V\u00EDctimas" + mensaje);
                }
            }
            if ($("#cmbTipoPersona").val() != 0) {
                strDatos += "&cveTipoPersona=" + $("#cmbTipoPersona").val();
            }
            return strDatos;
        };
        paginacion = function (paginar) {
            consultar(paginar, $("#hiddenNivel").val());
        };
        preGestorConsulta = function (nivel, json) {
            var strDatos = "";
            $("#cmbNumReg").val(100);
            if (($("#radioE2").is(':checked')) && ($("#idEdad").is(':checked'))) {
                if (json.rangoEdad != null) {
                    var aux = json.rangoEdad;
                    aux = aux.split(" ");
                    var auxEdad = aux[1];
                    if (auxEdad == "identificada") {
                        auxEdad = "N";
                    }
                    $("#hiddenEdad").val(auxEdad);
                }
            }
            if ($("#idGenero").is(':checked')) {
                if (json.cveGenero != null) {
                    $("#cmbGenero").val(json.cveGenero);
                }
            }
            if ($("#checkOcupacion").is(':checked') && ($("#cmbOcupacion").val() == 0)) {
                if (json.cveOcupacion != null) {
                    $("#cmbOcupacion").val(json.cveOcupacion);
                }
            }
            if ($("#checkEscolaridad").is(':checked') && ($("#cmbEscolaridad").val() == 0)) {
                if (json.cveNivelInstruccion != null) {
                    $("#cmbEscolaridad").val(json.cveNivelInstruccion);
                }
            }
            if ($("#checkModalidadViolencia").is(':checked') && ($("#cmbModalidadViolencia").val() == 0)) {
                if (json.cveModalidad != null) {
                    $("#cmbModalidadViolencia").val(json.cveModalidad);
                }
            }
            if ($("#idRelacionImputado").is(':checked') && ($("#cmbRelacionImpOfe").val() == 0)) {
                if (json.cveRelacionImpOfe != null) {
                    $("#cmbRelacionImpOfe").val(json.cveRelacionImpOfe);
                }
            }
            if ($("#idDelito").is(':checked') && ($("#cmbDelito").val() == 0)) {
                if (json.cveDelito != null) {
                    $("#cmbDelito").val(json.cveDelito);
                }
            }
            if (nivel == 3) {
                strDatos = "&cveRegion=" + json.cveRegion;
                $("#hiddenDesRegion").val(json.desRegion);
                $("#hiddenCveRegion").val(json.cveRegion);
            }
            if (nivel == 4) {
                strDatos = "&cveDistrito=" + json.cveDistrito;
                $("#hiddenDesDistrito").val(json.desDistrito);
                $("#hiddenCveDistrito").val(json.cveDistrito);
            }
            if (nivel == 5) {
                if ($("#radioMunicipio").is(":checked")) {
                    if (json.cveMunicipio != "") {
                        strDatos = "&cveMunicipio=" + json.cveMunicipio;
                    } else {
                        strDatos = "&cveMunicipio=NULL";
                    }
                    strDatos += "&porMunicipio=S";
                    strDatos += "&cveDistrito=" + $("#hiddenCveDistrito").val();
                } else {
                    $("#hiddenDesJuzgado").val(json.desJuzgado);
                    strDatos = "&cveJuzgado=" + json.cveJuzgado;
                    $("#hiddenCveJuzgado").val(json.cveJuzgado);
                }
            }
            if ($("#checkNumDelitos").is(':checked')) {
                if (json.rangoVictimas != null) {
                    strDatos += "&rangoVictimas=" + json.rangoVictimas;
                }
            }
            if (nivel == 6) {
                strDatos = "&idOfendidoCarpeta=" + json.idOfendidoCarpeta;
                strDatos += "&detalles=DETALLE";
            }
            $("#hiddenVariables").val(strDatos);
        };
        aceptarModal = function () {
            if ($("#radioMunicipio").is(":checked")) {
                $("#hiddenVariables").val($("#hiddenVariables").val() + "&porMunicipio=S");
            }
            consultar(true, 4);
        };
        porJuzgadoOmunicipio = function (nivel, json) {
            preGestorConsulta(nivel, json);
            $("#modalJuzgadoOmunicipio").modal();
        };
        gestorConsulta = function (bandera, nivel, json) {
            preGestorConsulta(nivel, json);
            consultar(bandera, nivel);
        };
        xTipoViolencia = function (tipoViolencia) {
            var tabla = "";
            switch (tipoViolencia) {
                case "1":
                    tabla += "<td>SI</td>";
                    break;
                case "2":
                    tabla += "<td>NO</td>";
                    break;
                case "3":
                    tabla += "<td>SE DESCONOCE</td>";
                    break;
            }
            return tabla;
        };
        totalXtipoViolencia = function (json) {
            var tabla = "";
            switch ($("#cmbTipoViolencia").val()) {
                case "1":
                    tabla += json.vAcoso;
                    break;
                case "2":
                    tabla += json.vDelincuencia;
                    break;
                case "3":
                    tabla += json.vTrata;
                    break;
                case "4":
                    tabla += json.vViolencia;
                    break;
            }
            return tabla;
        };
        infoEncabezadoTablaFiltro = function (espacios) {
            var table = "";
            if ($("#idEdad").is(":checked")) {
                table += "<th>Rango de Edad</th>";
                espacios += "<th></th>";
            }
            if ($("#radio2").is(":checked") && ($("#cmbMes").val() != 0)) {
                table += "<th>Mes/A&ntilde;o</th>";
                espacios += "<th></th>";
            }
            if ($("#idGenero").is(':checked')) {
                table += "<th>Genero</th>";
                espacios += "<th></th>";
            }
            if ($("#checkOcupacion").is(":checked")) {
                table += "<th>Ocupaci&oacute;n</th>";
                espacios += "<th></th>";
            }
            if ($("#checkEscolaridad").is(":checked")) {
                table += "<th>Escolaridad</th>";
                espacios += "<th></th>";
            }
            if ($("#idRelacionImputado").is(":checked")) {
                table += "<th>Relaci&oacute;n v&iacute;ctima - imputado</th>";
                espacios += "<th></th>";
            }
            if ($("#idDelito").is(':checked')) {
                table += "<th>Delito</th>";
            }
            if ($("#checkNumDelitos").is(':checked')) {
                table += "<th>N&uacute;m. Delitos</th>";
            }
            if ($("#checkModalidadViolencia").is(":checked")) {
                table += "<th>Modalidad Violencia</th>";
                espacios += "<th></th>";
            }
            if ($("#checkTipoViolencia").is(':checked')) {
                table += "<th colspan='4'>Tipo Violencia</th>";
                if ($("#cmbTipoViolencia").val() == 0) {
                    table += "<th></th></tr><tr style=' writing-mode: vertical-lr; text-align: center'><th></th>" + espacios
                            + "<th></th><th>Trata de personas</th><th>Delincuencia Organizada</th><th>Violencia de genero</th><th>De acoso</th>";
                } else {
                    table += "</tr><tr style=' writing-mode: vertical-lr; text-align: center'><th></th>" + espacios + "<th></th><th>" +
                            $("#cmbTipoViolencia option:selected").text() + "</th>";
                }
            }
            return table;
        };
        infoTablaFiltro = function (json) {
            var table = "";
            if (($("#radioE2").is(":checked")) && ($("#idEdad").is(":checked"))) {
                table += "<td>" + json.rangoEdad + "</td>";
            } else {
                if (($("#radioE").is(":checked")) && ($("#idEdad").is(":checked"))) {
                    table += "<td>" + $("#hiddenRangoEdad").val() + "</td>";
                }
            }
            if ($("#radio2").is(":checked") && ($("#cmbMes").val() != 0)) {
                table += "<td>" + $("#cmbMes option:selected").text() + " " + $("#txtAnio").val() + "</td>";
            }
            if ($("#idGenero").is(':checked')) {
                table += "<td>" + $("#cmbGenero option[value='" + json.cveGenero + "']").text()
                        + "</td>";
            }
            if ($("#checkOcupacion").is(":checked")) {
                if ($("#cmbOcupacion").val() == 0) {
                    table += "<td>" + $("#cmbOcupacion option[value='" + json.cveOcupacion + "']").text()
                            + "</td>";
                } else {
                    table += "<td>" + $("#cmbOcupacion option:selected").text() + "</td>";
                }
            }
            if ($("#checkEscolaridad").is(":checked")) {
                table += "<td>" +
                        $("#cmbEscolaridad option[value='" + json.cveNivelInstruccion + "']").text()
                        + "</td>";
            }
            if ($("#idRelacionImputado").is(":checked")) {
                if ($("#cmbRelacionImpOfe").val() == 0) {
                    table += "<td>" +
                            $("#cmbRelacionImpOfe option[value='" + json.cveRelacionImpOfe + "']").text()
                            + "</td>";
                } else {
                    table += "<td>" + $("#cmbRelacionImpOfe option:selected").text() + "</td>";
                }
            }
            if ($("#idDelito").is(':checked')) {
                if ($("#cmbRelacionImpOfe").val() == 0) {
                    table += "<td>" + $("#cmbDelito option[value='" + json.cveDelito + "']").text() + "</td>";
                } else {
                    table += "<td>" + $("#cmbDelito option:selected").text() + "</td>";
                }
            }
            if ($("#checkNumDelitos").is(':checked')) {
                table += "<td>" + json.rangoVictimas + "</td>";
            }
            if ($("#checkModalidadViolencia").is(":checked")) {
                table += "<td>" +
                        $("#cmbModalidadViolencia option[value='" + json.cveModalidad + "']").text()
                        + "</td>";
            }
            if ($("#checkTipoViolencia").is(':checked')) {
                var subTotal;
                if ($("#cmbTipoViolencia").val() > 0) {
                    var aux = totalXtipoViolencia(json);
                    subTotal = -aux;
                    table += "<td>" + aux + "</td>";
                } else {
                    table += "<td>" + json.vTrata + "</td><td>" + json.vDelincuencia + " </td><td> " + json.vViolencia + "</td><td>" + json.vAcoso + "</td>";
                    subTotal = -json.vTrata - json.vDelincuencia - json.vViolencia - json.vAcoso;
                }
                subTotal = -subTotal;
                table += "<td>" + subTotal + "</td></tr> ";
            }
            return table;
        };
        gestorNivel = function (json, bandera) {
            var indice = $("#cmbPaginacion").val();
            indice = (indice - 1) * $("#cmbNumReg").val();
            var i = 0;
            var table = "<table id='tblResultadosGridAct' border='1' class='table table-hover table-striped table-bordered'>";
            table += "<thead><tr>";
            var jsonDatos = "";
            var subTotal = 0;
            $("#labelSubTotal").text("");
            $("#inputImprimir").show();
            $("#inputExportarPDF").show();
            $("#inputExportarExcel").show();
            switch ($("#hiddenNivel").val()) {
                case "1":
                    table += "<th>N&uacute;m.</th><th>Estado</th>";
                    if (json.totalCount > 0) {
                        table += infoEncabezadoTablaFiltro("");
                        table += "<th>Subtotal</th></tr></thead><tbody>";
                        for (i = 0; i < json.totalCount; i++) {
                            jsonDatos = JSON.stringify(json.resultados[i]);
                            table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 2 + "," + jsonDatos + ")'>";
                            table += "<td > " + (i + 1 + indice) + "</td><td>M&Eacute;XICO</td>";
                            table += infoTablaFiltro(json.resultados[i]);
                            if ($("#checkTipoViolencia").is(':checked')) {
                                if ($("#cmbTipoViolencia").val() > 0) {
                                    subTotal = subTotal - totalXtipoViolencia(json.resultados[i]);
                                } else {
                                    subTotal = subTotal - json.resultados[i].vTrata - json.resultados[i].vDelincuencia - json.resultados[i].vViolencia - json.resultados[i].vAcoso;
                                }
                            } else {
                                subTotal = subTotal - json.resultados[i].totalCount;
                                table += "<td>" + json.resultados[i].totalCount + "</td></tr> ";
                            }
                        }
                    } else {
                        mostrarMensaje("Sin resultados a mostrar", 1, 1);
                        table += "<th>Total</th></tr></thead><tbody>";
                        table += "<tr>";
                        table += "<td>Ofendidos</td><td>Edo. M&Eacute;XICO</td>";
                        table += "<td>0</td>";
                        table += "</tr> ";
                    }
                    break;
                case "2":
                    table += "<th>N&uacute;m.</th><th>Regi&oacute;n</th>";
                    table += infoEncabezadoTablaFiltro("");
                    table += "<th>Subtotal</th></tr></thead><tbody>";
                    for (i = 0; i < json.totalCount; i++) {
                        jsonDatos = JSON.stringify(json.resultados[i]);
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 3 + "," + jsonDatos + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>" + json.resultados[i].desRegion + "</td>";
                        table += infoTablaFiltro(json.resultados[i]);
                        if ($("#checkTipoViolencia").is(':checked')) {
                            if ($("#cmbTipoViolencia").val() > 0) {
                                subTotal = subTotal - totalXtipoViolencia(json.resultados[i]);
                            } else {
                                subTotal = subTotal - json.resultados[i].vTrata - json.resultados[i].vDelincuencia - json.resultados[i].vViolencia - json.resultados[i].vAcoso;
                            }
                        } else {
                            subTotal = subTotal - json.resultados[i].totalCount;
                            table += "<td>" + json.resultados[i].totalCount + "</td></tr> ";
                        }
                    }
                    break;
                case "3":                       //<th>Regi&oacute;n</th>
                    table += "<th>N&uacute;m.</th><th>Distrito</th>";
                    table += infoEncabezadoTablaFiltro("");
                    table += "<th>Subtotal</th></tr></thead><tbody>";
                    for (i = 0; i < json.totalCount; i++) {     //='porJuzgadoOmunicipio(" + 4 + "," + jsonDatos + "," + i + ")'>";
                        jsonDatos = JSON.stringify(json.resultados[i]);
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 4 + "," + jsonDatos + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>" + json.resultados[i].desDistrito + "</td>";
                        table += infoTablaFiltro(json.resultados[i]);
                        if ($("#checkTipoViolencia").is(':checked')) {
                            if ($("#cmbTipoViolencia").val() > 0) {
                                subTotal = subTotal - totalXtipoViolencia(json.resultados[i]);
                            } else {
                                subTotal = subTotal - json.resultados[i].vTrata - json.resultados[i].vDelincuencia - json.resultados[i].vViolencia - json.resultados[i].vAcoso;
                            }
                        } else {
                            subTotal = subTotal - json.resultados[i].totalCount;
                            table += "<td>" + json.resultados[i].totalCount + "</td></tr> ";
                        }
                    }
                    break;
                case "4":                       //<th>Regi&oacute;n</th><th>Distrito</th>
                    table += "<th>N&uacute;m.</th><th>Juzgado</th>";
                    table += infoEncabezadoTablaFiltro("");
                    table += "<th>Subtotal</th></tr></thead><tbody>";
                    for (i = 0; i < json.totalCount; i++) {      //='consultarDetallesNivel(" + true + "," + json.resultados[i].cveJuzgado + ")'>";
                        jsonDatos = JSON.stringify(json.resultados[i]);
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 5 + "," + jsonDatos + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>" + json.resultados[i].desJuzgado + "</td>";
                        table += infoTablaFiltro(json.resultados[i]);
                        if ($("#checkTipoViolencia").is(':checked')) {
                            if ($("#cmbTipoViolencia").val() > 0) {
                                subTotal = subTotal - totalXtipoViolencia(json.resultados[i]);
                            } else {
                                subTotal = subTotal - json.resultados[i].vTrata - json.resultados[i].vDelincuencia - json.resultados[i].vViolencia - json.resultados[i].vAcoso;
                            }
                        } else {
                            subTotal = subTotal - json.resultados[i].totalCount;
                            table += "<td>" + json.resultados[i].totalCount + "</td></tr> ";
                        }
                    }
                    break;
                case "5":
                    var espacios = "<th></th><th></th>";
                    table += "<th>N&uacute;m.</th><th>Ofendido</th><th>Carpeta</th>";
                    table += infoEncabezadoTablaFiltro("<th></th>");
                    if ($("#checkTipoViolencia").is(':checked')) {
                        table += "<th>Subtotal</th>";
                    }
                    table += "</tr></thead><tbody>";
                    for (i = 0; i < json.totalCount; i++) {
                        jsonDatos = JSON.stringify(json.resultados[i]);
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 6 + "," + jsonDatos + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        if (json.resultados[i].cveTipoPersona == 1) {
                            table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                        } else {
                            table += "<td>" + json.resultados[i].nombreMoral + "</td>";
                        }
                        table += "<td>" + json.resultados[i].desTipoCarpeta + " " + json.resultados[i].numero + "/" + json.resultados[i].anio + "</td>";
                        table += infoTablaFiltro(json.resultados[i]);
                        if ($("#checkTipoViolencia").is(':checked')) {
                            if ($("#cmbTipoViolencia").val() > 0) {
                                subTotal = subTotal - totalXtipoViolencia(json.resultados[i]);
                            } else {
                                subTotal = subTotal - json.resultados[i].vTrata - json.resultados[i].vDelincuencia - json.resultados[i].vViolencia - json.resultados[i].vAcoso;
                            }
                        }
                    }
                    break;
                case "6":
                    var espacios = "";
                    table += "<th>N&uacute;m.</th><th>Victima</th>";
                    if ($("#idGenero").is(":checked")) {
                        table += "<th>Genero</th>";
                        espacios += "<th></th>";
                    }
                    if (($("#idEdad").is(":checked")) && ($("#radioE").is(':checked'))) {
                        table += "<th>Edad</th>";
                        espacios += "<th></th>";
                    }
                    if ($("#idRelacionImputado").is(":checked")) {
                        table += "<th>Relaci&oacute;n v&iacute;ctima - imputado</th>";
                        espacios += "<th></th>";
                    }
                    if ($("#checkModalidadViolencia").is(":checked")) {
                        table += "<th>Modalidad Violencia</th>";
                        espacios += "<th></th>";
                    }
                    if ($("#checkEscolaridad").is(":checked")) {
                        table += "<th>Escolaridad</th>";
                        espacios += "<th></th>";
                    }
                    if ($("#checkTipoViolencia").is(':checked')) {
                        if ($("#cmbTipoViolencia").val() == 0) {
                            table += "<th colspan='4'>Tipo Violencia</th><th>Imputado</th><th>Delito</th><th>Carpeta</th><th>Fecha registro</th>";
                            table += "</tr><tr style=' writing-mode: vertical-lr; text-align: center'><th></th>" + espacios
                                    + "<th></th><th>Trata de personas</th><th>Delincuencia Organizada</th><th>Violencia de genero</th><th>De acoso</th>";
                            table += "<th></th><th></th><th></th><th></th>";
                        } else {
                            table += "<th>Tipo Violencia / " + $("#cmbTipoViolencia option:selected").text() + "</th><th>Imputado</th><th>Delito</th><th>Carpeta</th><th>Fecha registro</th>";
                        }
                        table += "</tr></thead><tbody>";
                    } else {
                        table += "<th>Imputado</th><th>Delito</th><th>Carpeta</th><th>Fecha registro</th></tr></thead><tbody>";
                    }
                    for (i = 0; i < json.totalCount; i++) {
                        table += "<tr><td> " + (i + 1 + indice) + "</td>";
                        if (json.resultados[i].cveTipoPersona == 1) {
                            table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                        } else {
                            table += "<td>" + json.resultados[i].nombreMoral + "</td>";
                        }
                        if ($("#idGenero").is(":checked")) {
                            table += "<td>" + $("#cmbGenero option[value='" + json.resultados[i].cveGenero + "']").text()
                                    + "</td>";
                        }
                        if (($("#idEdad").is(":checked")) && ($("#radioE").is(':checked'))) {
                            table += "<td>" + json.resultados[i].edad + "</td>";
                        }
                        if ($("#idRelacionImputado").is(":checked")) {
                            if ($("#cmbRelacionImpOfe").val() == 0) {
                                table += "<td>" +
                                        $("#cmbRelacionImpOfe option[value='" + json.cveRelacionImpOfe + "']").text()
                                        + "</td>";
                            } else {
                                table += "<td>" + $("#cmbRelacionImpOfe option:selected").text() + "</td>";
                            }
                        }
                        if ($("#checkModalidadViolencia").is(":checked")) {
                            if ($("#cmbModalidadViolencia").val() == 0) {
                                table += "<td>" +
                                        $("#cmbModalidadViolencia option[value='" + json.cveModalidad + "']").text()
                                        + "</td>";
                            } else {
                                table += "<td>" + $("#cmbModalidadViolencia  option:selected").text() + "</td>";
                            }
                        }
                        if ($("#checkEscolaridad").is(":checked")) {
                            if ($("#cmbEscolaridad").val() == 0) {
                                table += "<td>" +
                                        $("#cmbEscolaridad option[value='" + json.cveNivelInstruccion + "']").text()
                                        + "</td>";
                            } else {
                                table += "<td>" + $("#cmbEscolaridad  option:selected").text() + "</td>";
                            }
                        }
                        if ($("#checkTipoViolencia").is(':checked')) {
                            if ($("#cmbTipoViolencia").val() > 0) {
                                table += "<td>SI</td>";
                            } else {
                                table += xTipoViolencia(json.resultados[i].vTrata);
                                table += xTipoViolencia(json.resultados[i].vDelincuencia);
                                table += xTipoViolencia(json.resultados[i].vViolencia);
                                table += xTipoViolencia(json.resultados[i].vAcoso);
                            }
                        }
                        if (json.resultados[i].iccveTipoPersona == 1) {
                            table += "<td>" + json.resultados[i].icnombre + " " + json.resultados[i].icpaterno + " " + json.resultados[i].icmaterno + "</td>";
                        } else {
                            table += "<td>" + json.resultados[i].icnombreMoral + "</td>";
                        }
                        table += "<td>" + json.resultados[i].desDelito + "</td>";
                        table += "<td>" + json.resultados[i].desTipoCarpeta + " " + json.resultados[i].numero + "/" + json.resultados[i].anio + "</td>";
                        table += "<td>" + fechaMySQLaNormal(json.resultados[i].iodcfechaRegistro) + "</td>";
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
                if ((parseInt($("#hiddenNivel").val()) < 5) || (parseInt($("#hiddenNivel").val()) == 5) && ($("#checkTipoViolencia").is(':checked'))) {
                    subTotal = -subTotal;
                    $("#labelSubTotal").text("Total: " + subTotal);
                }
            }
            if ((bandera) && (i > 99)) {
                calcularPaginas();
            }

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
                        mensaje = "Escriba el a\u00F1o de la causa";
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
            var strDatos = "accion=consultar_ofendidosCarpetas_Reporte";
            strDatos += "&activo=S";
            strDatos += "&paginacion=true";
            strDatos += "&cantxPag=" + $("#cmbNumReg").val();
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            strDatos += "&nivel=" + nivel;
            strDatos += $("#hiddenVariables").val();
            strDatos += filtro();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReporteofendidosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    return validarParametrosBusqueda();
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
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
        calcularPaginas = function () {
            $("#inputRegresar2").hide();
            var url = "../fachadas/sigejupe/reportes/ReporteofendidosFacade.Class.php";
            var strDatos = "accion=consultar_ofendidosCarpetas_Reporte";
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
                        $("#totalReg").text("Cantidad de registros: " + totalRegistros);
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
                mensaje = " / Total";
            }
            if ($("#hiddenNivel").val() == 2) {
                rutaIntrospeccion = "Estado: <b>M\u00C9XICO</b>";
                mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                mensaje += " / X Regi&oacute;n";
            }
            if ($("#hiddenNivel").val() == 3) {
                rutaIntrospeccion = "Estado: <b>M\u00C9XICO</b>";
                rutaIntrospeccion += "<br>Regi\u00F3n: <b>" + $("#hiddenDesRegion").val() + "</b>";
                mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>X Regi&oacute;n</SPAN>";
                mensaje += " / Distrito";
            }
            if ($("#hiddenNivel").val() == 4) {
                rutaIntrospeccion = "Estado: <b>M\u00C9XICO</b>";
                rutaIntrospeccion += "<br>Regi\u00F3n: <b>" + $("#hiddenDesRegion").val() + "</b>";
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
            if ($("#hiddenNivel").val() == 5) {
                rutaIntrospeccion = "Estado: <b>M\u00C9XICO</b>";
                rutaIntrospeccion += "<br>Regi\u00F3n: <b>" + $("#hiddenDesRegion").val() + "</b>";
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
            if ($("#hiddenNivel").val() == 6) {
                rutaIntrospeccion = "Estado: <b>M\u00C9XICO</b>";
                rutaIntrospeccion += "<br>Regi\u00F3n: <b>" + $("#hiddenDesRegion").val() + "</b>";
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
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(5,false);'>Detalles</SPAN>";
                mensaje += " / Detalles Ofendido";
            }
            $("#rutaIntrospeccion").html(rutaIntrospeccion);
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Reporte de Ofendidos</span>" + mensaje);
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
                $("#h5titulo").html("Reporte de Ofendidos");
                $("#divConsulta").hide();
                $("#paginacion").hide();
            } else {
                if (nivel == 1) {
                    $("#paginacion").hide();
                }
                if (nivel == 3) {
                    strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                }
                if (nivel == 4) {
                    strDatos += "&cveDistrito=" + $("#hiddenCveDistrito").val();
                    if ($("#radioMunicipio").is(":checked")) {
                        strDatos += "&porMunicipio=S";
                    }
                }
                if (nivel == 5) {
                    strDatos += "&cveJuzgado=" + $("#hiddenCveJuzgado").val();
                }
            }
            $("#hiddenVariables").val(strDatos);
            if (nivel > 0) {
                consultar(true, nivel);
            }
        };
        cargarDelitos = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/delitos/DelitosFacade.Class.php",
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
                            $("#cmbDelito").append($('<option></option>').val(json.data[i].cveDelito).html(json.data[i].desDelito));
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    mostrarMensaje("Error en la peticion (cargar Relacion Imputado Ofendido):\n\n" + quepaso, 3);
                }
            });
        };
        cargarRelacionImpOfe = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposrelimpofe/TiposrelimpofeFacade.Class.php",
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
                            $("#cmbRelacionImpOfe").append($('<option></option>').val(json.data[i].cveRelacionImpOfe).html(json.data[i].desRelacionImpOfe));
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    mostrarMensaje("Error en la peticion (cargar Relacion Imputado Ofendido):\n\n" + quepaso, 3);
                }
            });
        };
        cargarEscolaridad = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/nivelesinstrucciones/NivelesinstruccionesFacade.Class.php",
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
                            $("#cmbEscolaridad").append($('<option></option>').val(json.data[i].cveNivelInstruccion).html(json.data[i].desNivelInstruccion));
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    mostrarMensaje("Error en la peticion (cargar Ocupacion):\n\n" + quepaso, 3);
                }
            });
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
                    mostrarMensaje("Error en la peticion (cargar Ocupacion):\n\n" + quepaso, 3);
                }
            });
        };
        cargarOcupacion = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ocupaciones/OcupacionesFacade.Class.php",
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
                            $("#cmbOcupacion").append($('<option></option>').val(json.data[i].cveOcupacion).html(json.data[i].desOcupacion));
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    mostrarMensaje("Error en la peticion (cargar Ocupacion):\n\n" + quepaso, 3);
                }
            });
        };
        cargarTipoJuzgado = function () {
            var strDatos = "accion=consultarOrdenado";
            strDatos += "&activo=S";
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
                    mostrarMensaje("Error en la peticion (cargar Tipos Juzgados):\n\n" + quepaso, 3);
                }
            });
        };
        exportar = function (accion, div) {
            var usuario = '<?php echo $_SESSION["nombre"]; ?>';
            var nombreArchivo = "REPORTE_OFENDIDOS";
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
            if ($("#checkTipoViolencia").is(":checked")) {
                contenido = contenido.replace(/Trata de personas/g, 'T');
                contenido = contenido.replace(/Delincuencia Organizada/g, 'DO');
                contenido = contenido.replace(/Violencia de genero/g, 'VG');
                contenido = contenido.replace(/De acoso/g, 'A');
                contenido = '<label style="font-size:6pt; float:left;">T = Trata de personas ,DO = Delincuencia Organizada,VG = Violencia de genero,A = De acoso</label><br>' + contenido;
            }
            contenido = contenido.replace(/Buscar:/g, '');
            contenido = contenido.replace(/width/g, '  ');
            contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px;"');
            contenido = contenido.replace(/id="os"/g, 'style="width:95px;"');
            contenido = contenido.replace(/<center>/g, '');
            contenido = contenido.replace(/<\/center>/g, '');
            contenido = contenido.replace(/<input(.*?)>/g, '');
            contenido = contenido.replace(/onclick=".*?"/g, '');
            contenido = contenido.replace(/<div .*?<table/g, '<table');
            contenido = contenido.replace(/<div .*?>/g, '');
            contenido = contenido.replace(/<\/div>/g, '');
            fechaBaseDatos({hiddenFechaHoraHoy: "fecha-hora"});
            $("#contenidoIframe").val(contenido);
            $("#infoIframe").val(usuario + "&@" + tituloReporte + "&@" + nombreArchivo + "&@" + $("#labelSubTotal").text() + "&@" + $("#rutaIntrospeccion").html() + "&@" + $("#hiddenFechaHoraHoy").val());
            $("#accionIframe").val(accion);
            $("#divAlertInfo").html("Generando Archivo");
            $("#divAlertInfo").show("slide");
            setTimeAlert("divAlertInfo");
            $("#formIframe").submit();
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
        fechaHoy = function (bandera) {
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
            cargarTipoJuzgado();
            cargarOcupacion();
            cargarModalidadViolencia();
            cargarRelacionImpOfe();
            cargarDelitos();
            cargarEscolaridad();
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