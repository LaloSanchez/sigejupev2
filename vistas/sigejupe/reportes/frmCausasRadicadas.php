
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
    <input type="hidden" id="hiddenNivel" value=0>
    <input type="hidden" id="hiddenDesRegion" value="">
    <input type="hidden" id="hiddenDesDistrito" value="">
    <input type="hidden" id="hiddenDesJuzgado" value="">
    <input type="hidden" id="hiddenAnio" value="">
    <input type="hidden" id="hiddenAnio1" value="">
    <input type="hidden" id="hiddenEstatusCarpeta" value="">
    <input type="hidden" id="hiddenConcursos" value="">
    <input type="hidden" id="hiddenDelitos" value="">
    <input type="hidden" id="hiddenConsumaciones" value="">
    <input type="hidden" id="hiddenClasificacionDelitos" value="">
    <input type="hidden" id="hiddenClasificacionDelitosOrden" value="">
    <input type="hidden" id="hiddenElementoComision" value="">
    <input type="hidden" id="hiddenComision" value="">
    <input type="hidden" id="hiddenFormaAccion" value="">
    <input type="hidden" id="hiddenModalidad" value="">
    <input type="hidden" id="hiddenConsignaciones" value="">
    <input type="hidden" id="hiddenConclusiones" value="">
    <input type="hidden" id="hiddenDetenido" value="">
    <input type="hidden" id="hiddenFechaHoraHoy" value="">



    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Reporte de Causas
            </h5>
        </div>
        <div  id="panelPrincipal" class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divPanelControl">


                    <div class="form-group">                                                                
                        <label class="control-label col-md-4" >A&ntilde;o de la Causa</label>
                        <input type="radio" name="optradio" value="" class="form-inline" id="checkAnio" onclick="muestraOpc(1)"> 
                    </div>

                    <div class="form-group" id="anio1" style="display:none" >                                                                
                        <label class="control-label col-md-5 needed" id="lblRelationName">A&ntilde;o </label>
                        <input type="text" class="form-inline" id="txtAnio" placeholder="A&ntilde;o" maxlength="4" value="">                             
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-4" >Mes (Radicaci&oacute;n)</label>
                        <input type="radio" name="optradio" value="" class="form-inline" id="checkMes" onclick="muestraOpc(2)" > 

                    </div>
                    <div class="form-group" style="display:none" id="cmbM">                                                                

                        <div  class=" form-group" style="">
                            <label class="control-label col-md-5 needed" >Mes (Radicaci&oacute;n)</label>

                            <select  name="cmbMes"  id="cmbSelectMes">
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
                        <div class=" form-group">
                            <label class="control-label col-md-5 needed" >A&ntilde;o (Radicaci&oacute;n)</label>
                            <input type="text" id="txtAnio1" placeholder="A&ntilde;o" maxlength="4" value="">                             
                        </div>
                    </div>


                    <div class="form-group">                                                                
                        <label class="control-label col-md-4" >Rango de fecha (Radicaci&oacute;n)</label>
                        <input type="radio" name="optradio" value="" class="form-inline" id="checkRango" onclick="muestraOpc(3)"> 
                    </div>
                    <div id="divRangoFechas" style="display: none">
                        <div class="form-group"> 
                            <label class="control-label col-md-5 needed">Fecha Inicio:</label>
                            <div class="col-md-2">
                                <input type="text" id="txtfechaInicial" placeholder="FECHA INICIO" class="form-control datepicker" value="" />
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-5 needed">Fecha Fin:</label>
                            <div class="col-md-2">
                                <input type="text" id="txtfechaFinal" placeholder="FECHA FIN" class="form-control datepicker" value=""  />
                            </div>
                        </div>    
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4">Tipo de juzgado</label>
                        <div class="col-md-3">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbTipoJuzgado" id="cmbTipoJuzgado" onchange="filtrarTipoCarpeta();
                                    filtrarConclusion();">
                                <option value="">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>  

                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4">Tipo de Carpeta</label>
                        <div class="col-md-3">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbTipoCarpeta" id="cmbTipoCarpeta" >
                                <option value="">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>  
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4 needed">Estatus Carpeta</label>
                        <div class="col-md-3">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbEstatusCarpeta" id="cmbEstatusCarpeta">
                                <option value="">RADICADA</option>
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
                    <div class="form-group" id="divConclusiones" style="display:none" > 
                        <label class="control-label col-md-4">Conclusi&oacute;n</label>
                        <input type="checkbox" class="col-md-1" id="checkConclusiones" >
                        <div id="divCmbConclusiones" class="logobox col-md-3" style="display:none">
                            <select class="form-control Relacionado" name="cmbConclusiones" id="cmbConclusiones">
                                <option value="">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group" id="divCheckIncompetencia"> 
                        <label class="control-label col-md-4">Incompetencias</label>
                        <input type="checkbox" class="col-md-1" id="checkIncompetencia">
                    </div>

                    <div class="form-group" id="divConsumacion"> 
                        <label class="control-label col-md-4">Consumaci&oacute;n</label>

                        <input type="checkbox" class="col-md-1"  id="checkConsumaciones" >
                        <div id="divCmbConsumaciones" class="logobox col-md-3" style="display:none">
                            <select class="form-control Relacionado" name="cmbConsumaciones" id="cmbConsumaciones">
                                <option value="">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group" id="divDelito" style="display:none" > 
                        <label class="control-label col-md-5">Delito</label>
                        <div class="col-md-5">
                            <input type="checkbox" class="col-md-1" id="checkDelitos" >
                            <div id="divCmbDelitos" class="logobox col-md-6" style="display:none">
                                <select class="form-control Relacionado" name="cmbDelitos" id="cmbDelitos">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>

                        </div> 
                    </div>

                    <div class="form-group" id="divClasDelitos" style="display:none" > 
                        <label class="control-label col-md-5">Calificaci&oacute;n / Concurso / Clasificaci&oacute;n de orden</label>

                        <input type="checkbox" class="col-md-1" id="checkClasDelitos" >
                        <div class="col-md-5">
                            <div id="divCmbClasDelitos" class="logobox col-md-5" style="display:none">
                                <label class="control-label ">Clasificaci&oacute;n Delitos</label>
                                <select class="form-control Relacionado col-md-3" name="cmbClasDelitos" id="cmbClasDelitos">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                            <div id="divCmbClasDelitosOrden" class="logobox col-md-5" style="display:none">
                                <label class="control-label ">Clasificaci&oacute;n Delitos Orden</label>
                                <select class="form-control Relacionado col-md-3" name="cmbClasDelitosOrden" id="cmbClasDelitosOrden">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                            <div id="divCmbConcursos" class="logobox col-md-5" style="display:none">
                                <label class="control-label ">Concurso</label>
                                <select class="form-control Relacionado col-md-3" name="cmbConcursos" id="cmbConcursos">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>

                        </div> 
                    </div>

                    <div class="form-group" id="divCaracteristicasEjecucion" style="display:none" > 
                        <label class="control-label col-md-5">Caracteristicas de Ejecuci&oacute;n</label>
                        <input type="checkbox" class="col-md-1" id="checkCarEjecu" >
                        <div class="col-md-5">
                            <div id="divCmbComision" class="logobox col-md-5" style="display:none">
                                <label class="control-label">Comisi&oacute;n</label>
                                <select class="form-control Relacionado col-md-3" name="cmbComision" id="cmbComision">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                            <div id="divCmbFormaAccion" class="logobox col-md-5" style="display:none">
                                <label class="control-label ">Forma de Acci&oacute;n</label>
                                <select class="form-control Relacionado " name="cmbFormaAccion" id="cmbFormaAccion">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>

                            <div id="divCmbModalidad" class="logobox col-md-5" style="display:none">
                                <label class="control-label ">Modalidad</label>
                                <select class="form-control Relacionado col-md-3" name="cmbModalidad" id="cmbModalidad">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>

                            <div id="divCmbElementoComision" class="logobox col-md-5" style="display:none">
                                <label class="control-label ">Elementos Comisi&oacute;n</label>
                                <select class="form-control Relacionado col-md-4" name="cmbElementoComision" id="cmbElementoComision">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="form-group" id="divCheckDetenido"> 
                        <label class="control-label col-md-4">Detenidos</label>
                        <input type="checkbox" class="col-md-1" id="checkDetenido">
                    </div>
                    <div class="form-group" id="divDetalle" style="display:none" > 
                        <label class="control-label col-md-5">Detalle Completo</label>
                        <input type="checkbox" class="col-md-1" id="checkDetalle" >

                    </div>
                    <div id="geografia" class="form-group" style="display:none">
                        <div class="form-group" id="divRegion" > 
                            <label class="control-label col-md-4">Regi&oacute;n</label>
                            <div class="col-md-5">
                                <div id="divCmbRegion" class="logobox"></div>
                                <select class="form-control Relacionado" name="cmbRegion" id="cmbRegion" onchange="filtrarDistritos();
                                        filtrarJuzgados('region');">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>                                
                        </div>
                        <div class="form-group" id="divDistrito"> 
                            <label class="control-label col-md-4">Distrito</label>
                            <div class="col-md-5">
                                <div id="divCmbDistrito" class="logobox"></div>
                                <select class="form-control Relacionado" name="cmbDistrito" id="cmbDistrito" onchange="filtrarJuzgados('distrito');">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>                                
                        </div>
                        <div class="form-group" id="divJuzgado"> 
                            <label class="control-label col-md-4">Juzgado</label>
                            <div class="col-md-5">
                                <div id="divCmbJuzgado" class="logobox"></div>
                                <select class="form-control Relacionado" name="cmbJuzgado" id="cmbJuzgado">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>                                
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar   consulta" value="Consultar" onclick="limpiarTabla();
                                    consultarCausas(true, 1)">
                                </div>
                            <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar  limpia" value="Limpiar" onclick="limpiar()">
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar " id="inputImprimir" value="Imprimir" onclick="imprimir('divTableNivel');" style="display: none">
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar " id="inputExportarPDF" value="Exportar PDF" onclick="exportar('exportarPDF', 'divTableNivel');" style="display: none">
                            </div>
                            <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar " id="inputExportarExcel" value="Exportar Excel" onclick="exportar('exportarExcel', 'divTableNivel');" style="display: none">
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <input type="submit" class="btn btn-primary btn-adaptar " id="inputConsultar" value="Buscar" onclick="consultarCausas(true, 1);" style="display: none"> 
                        <input type="submit" class="btn btn-primary btn-adaptar " id="inputImprimirs" value="Imprimir" onclick="imprimir('divTableNivel');" style="display: none">
                        <input type="submit" class="btn btn-primary btn-adaptar " id="inputExportarPDFs" value="Exportar PDF" onclick="exportar('exportarPDF', 'divTableNivel');" style="display: none">
                        <input type="submit" class="btn btn-primary btn-adaptar " id="inputExportarExcels" value="Exportar Excel" onclick="exportar('exportarExcel', 'divTableNivel');" style="display: none">
                        <input type="submit" class="btn btn-primary btn-adaptar " id="inputLimpiar" value="Limpiar" onclick="limpiar();" style="display: none"> 
                    </div>
                </div>


                <div class="form-group"  id="paginacion" style="display:none;">
                    <div class="form-group col-md-3"> 
                        <label class="control-label col-md-1"></label>
                        <input type="submit" class="btn btn-primary btn-adaptar  " id="inputRegresar" value="Regresar" onclick="regresar(0, true);" > 
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
                    <div id="ifr" style="display:none" >
                        <form action="../fachadas/sigejupe/reportes/exportarReportes.php" id="formIframe" method="post" target="my_frame">
                            <input type="hidden" name="contenido" id="contenidoIframe" value="" />
                            <input type="hidden" name="accion" id="accionIframe" value="" />
                            <input type="hidden" name="info" id="infoIframe" value="" />
                        </form>
                        <iframe name='my_frame' src='../fachadas/sigejupe/reportes/exportarReportes.php'></iframe>
                    </div>
                </div>
                <div id="divConsulta" class="form-group" style="display: none">
                    <div class="form-group" id="inputRegresar2">
                        <label class="control-label col-md-1">&nbsp;</label>
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary btn-adaptar botonesAdaptar" value="Regresar" onclick="regresar(0, true);"> 
                        </div>
                    </div>
                    <CENTER>
                    <div id="divGrafica" style="width:90%; height:500px;" >

                    </div></CENTER>
                    <div id="divTableNivel" class="col-md-8" style="   overflow: auto; width: 100%;">

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
                numPixeles = (900 / columnas.length);
            } else {
                $.each($("#tblResultadosGridAct td"), function () {

                    if ($(this).html().length > 30) {
                        $(this).attr("id", "os");
                    } else {
                        $(this).removeAttr("id");
                    }
                });
                numPixeles = (900 / columnas.length);
            }

            var contenido = $("#" + div).html();
            contenido = contenido.replace('width="100%"', '');
            var nombreArchivo = "REPORTE_CAUSAS";
            var tituloReporte = titulos();
            contenido = contenido.replace(/width/g, '  ');
            contenido = contenido.replace(/Buscar:/g, '');
            contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px; text-align:center;"');
            contenido = contenido.replace(/id="del"/g, 'style="width:100px; text-align:center;"');
            contenido = contenido.replace(/id="os"/g, 'style="width:100px;text-align:center;"');
            contenido = contenido.replace(/<center>/g, '');
            contenido = contenido.replace(/<\/center>/g, '');
            contenido = contenido.replace(/<input (.*?) type="search">/g, '');
            contenido = contenido.replace(/<br id="bo" (.*?) br>/g, '');
            contenido = contenido.replace(/onclick="(.*?)"/g, '');
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
            $("#inputRegresar2").hide();
            $("#h5titulo").html("Reporte de Causas");
            $("#labelSubTotal").text("");
            $("#cmbClasDelitos").val("");
            $("#cmbClasDelitosOrden").val("");
            $("#divCmbClasDelitos").hide();
            $("#divCmbClasDelitosOrden").hide();
            $("#divCmbConcursos").hide();
            $('#geografia').hide();
            $("#cmbConcursos").val("");
            $("#txtAnio").val("");
            $("#txtAnio1").val("");
            $("#cmbTipoJuzgado").val("");
            $("#cmbOcupacion").val("");
            $("#txtfechaInicial").val(fechaHoy());
            $("#txtfechaFinal").val(fechaHoy());
            $("#checkDetalle").removeAttr("checked");
            guardaCombo();
            $('#checkMes').removeAttr("checked");
            $('#checkRango').removeAttr("checked");
            $('#checkAnio').removeAttr("checked");
            $("#divConsulta").hide("slide");
            $('#divTableNivel').html("");
            $("#paginacion").hide();
            $("#inputImprimir").hide();
            $("#inputExportarPDF").hide();
            $("#inputExportarExcel").hide();
            $("#divCmbConsumaciones").hide();
            $("#cmbDelitos").val("");
            $("#cmbConcursos").val("");
            $("#cmbElementoComision").val("");
            $("#cmbConsumaciones").val("");
            $("#cmbTipoCarpeta").val("");
            $("#cmbRegion").val("");
            $("#cmbDistrito").val("");
            $("#cmbJuzgado").val("");
            $("#checkConsumaciones").removeAttr("checked");
            $("#checkDelitos").removeAttr("checked");
            $("#checkClasDelitos").removeAttr("checked");
            $("#checkCarEjecu").removeAttr("checked");
            $("#checkConclusiones").removeAttr("checked");
            $("#divDelito").hide();
            $("#divClasDelitos").hide();
            $("#divCaracteristicasEjecucion").hide();
            $("#divClasDelitosOrden").hide();
            $("#divConclusiones").hide();
            $("#cmbEstatusCarpeta").val("1");
            $("#checkDetenido").removeAttr("checked");
            $("#divCheckDetenido").show();
            $("#checkIncompetencia").removeAttr("checked");
            $("#divCheckIncompetencia").show();
            $("#cmbComision").val("");
            $("#cmbFormaAccion").val("");
            $("#divGrafica").html("");
            $("#divConsulta").hide();
            $("#cmbGrafica").val(1);
            $("#divGrafica").hide();
            $("#cmbModalidad").val("");
            esconderConsumaciones();
            limpiarEscondidos();
            opcCheck = [];
        };
        limpiarTabla = function () {
            $('#divTableNivel').html("");
            $("#hiddenVariables").val("");
            $("#paginacion").hide();
            $("#inputImprimir").hide();
            $("#inputExportarPDF").hide();
            $("#inputExportarExcel").hide();
            $("#labelSubTotal").text("");
            limpiarEscondidos();
        }
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
            if ($("#cmbTipoJuzgado").val() != "") {
                strDatos += "&cveTipoJuzgado=" + $("#cmbTipoJuzgado").val();
            }
            if ($("#cmbTipoCarpeta").val() != "") {
                strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            }
    //        if ($("#cmbEstatusCarpeta").val() != "") {
            strDatos += "&cveEstatusCarpeta=" + $("#cmbEstatusCarpeta").val();

            if ($("#cmbDelitos").val() != "" && $("#hiddenDelitos").val() != "") {

                strDatos += "&cveDelito=" + $("#cmbDelitos").val();
            }
            if ($("#cmbClasDelitos").val() != "") {
                strDatos += "&cveClasificacionDelito=" + $("#cmbClasDelitos").val();
            }
            if ($("#cmbComision").val() != "") {
                strDatos += "&cveComision=" + $("#cmbComision").val();
            }

            if ($("#cmbFormaAccion").val() != "") {
                strDatos += "&cveFormaAccion=" + $("#cmbFormaAccion").val();
            }

            if ($("#cmbModalidad").val() != "") {
                strDatos += "&cveModalidad=" + $("#cmbModalidad").val();
            }

            if ($("#cmbClasDelitosOrden").val() != "") {
                strDatos += "&cveClasificacionDelitoOrden=" + $("#cmbClasDelitosOrden").val();
            }
            if ($("#cmbElementoComision").val() != "") {
                strDatos += "&cveElementoComision=" + $("#cmbElementoComision").val();
            }
            if ($("#cmbConcursos").val() != "") {
                strDatos += "&cveConcurso=" + $("#cmbConcursos").val();
            }

            if ($("#checkConsumaciones").is(":checked")) {
                strDatos += "&checkConsumaciones=true";
            }
            if ($("#checkConclusiones").is(":checked")) {
                strDatos += "&checkConclusiones=true";
            }
            if ($("#checkDelitos").is(":checked")) {
                strDatos += "&checkDelitos=true";
                if ($("#cmbDelitos").val() != "") {
                    strDatos += "&cveDelito=" + $("#cmbDelitos").val();
                }
            }
            if ($("#checkClasDelitos").is(":checked")) {
                strDatos += "&checkClasDelitos=true";
            }
            if ($("#checkCarEjecu").is(":checked")) {
                strDatos += "&checkCarEjecu=true";
            }

            if ($("#cmbConsumaciones").val() != "") {
                strDatos += "&cveConsumacion=" + $("#cmbConsumaciones").val();
            }
            if ($("#cmbConclusiones").val() != "") {
                strDatos += "&cveConclusion=" + $("#cmbConclusiones").val();
            }
            if ($("#checkDetenido").is(":checked")) {
                strDatos += "&checkDetenido=true";
            }
            if ($("#checkIncompetencia").is(":checked")) {
                strDatos += "&checkIncompetencia=true";
            }

            strDatos += "&opcCheck=" + opcCheck.length;
            return strDatos;
        };

        paginacion = function (paginar) {
            consultarCausas(paginar, $("#hiddenNivel").val());

        };
        gestorConsulta = function (bandera, nivel, json, i) {
            var strDatos = "";

            if (nivel == 2) {
                if ($("#checkClasDelitos").is(":checked")) {
                    $("#hiddenConcursos").val(json.resultados[i].cveConcurso);
                    strDatos += "&cveConcurso=" + json.resultados[i].cveConcurso;
                }
                if ($("#checkClasDelitos").is(":checked")) {
                    $("#hiddenClasificacionDelitos").val(json.resultados[i].cveClasificacionDelito);
                    strDatos += "&cveClasificacionDelito=" + json.resultados[i].cveClasificacionDelito;
                }
                if ($("#checkClasDelitos").is(":checked")) {
                    $("#hiddenClasificacionDelitosOrden").val(json.resultados[i].cveClasificacionDelitoOrden);
                    strDatos += "&cveClasificacionDelitoOrden=" + json.resultados[i].cveClasificacionDelitoOrden;
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    $("#hiddenComision").val(json.resultados[i].cveComision);
                    strDatos += "&cveComision=" + json.resultados[i].cveComision;
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    $("#hiddenFormaAccion").val(json.resultados[i].cveFormaAccion);
                    strDatos += "&cveFormaAccion=" + json.resultados[i].cveFormaAccion;
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    $("#hiddenModalidad").val(json.resultados[i].cveModalidad);
                    strDatos += "&cveModalidad=" + json.resultados[i].cveModalidad;
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    $("#hiddenElementoComision").val(json.resultados[i].cveElementoComision);
                    strDatos += "&cveElementoComision=" + json.resultados[i].cveElementoComision;
                }
                if ($("#checkDelitos").is(":checked")) {
                    $("#hiddenDelitos").val(json.resultados[i].cveDelito);
                    strDatos += "&cveDelito=" + json.resultados[i].cveDelito;
                }
                if ($("#checkConsumaciones").is(":checked")) {
                    $("#hiddenConsumaciones").val(json.resultados[i].cveConsumacion);
                    strDatos += "&cveConsumacion=" + json.resultados[i].cveConsumacion;
                }
                if ($("#checkDetenido").is(":checked")) {
                    $("#hiddenConsignaciones").val(json.resultados[i].cveConsignacion);
                    strDatos += "&cveConsignacion=" + json.resultados[i].cveConsignacion;
                }
                if ($("#checkConclusiones").is(":checked")) {
                    $("#hiddenConclusiones").val(json.resultados[i].cveConclusion);
                    strDatos += "&cveConclusion=" + json.resultados[i].cveConclusion;
                }

                $("#hiddenDesRegion").val(json.resultados[i].desRegion);
                $("#hiddenCveRegion").val(json.resultados[i].cveRegion);
            }
            if (nivel == 3) {
                if ($("#checkClasDelitos").is(":checked")) {
                    if (json.resultados[i].cveConcurso != null) {
                        $("#hiddenConcursos").val(json.resultados[i].cveConcurso);
                        strDatos += "&cveConcurso=" + json.resultados[i].cveConcurso;
                    }
                }
                if ($("#checkClasDelitos").is(":checked")) {
                    if (json.resultados[i].cveClasificacionDelito != null) {
                        $("#hiddenClasificacionDelitos").val(json.resultados[i].cveClasificacionDelito);
                        strDatos += "&cveClasificacionDelito=" + json.resultados[i].cveClasificacionDelito;
                    }
                }
                if ($("#checkClasDelitos").is(":checked")) {
                    if (json.resultados[i].cveClasificacionDelitoOrden != null) {
                        $("#hiddenClasificacionDelitosOrden").val(json.resultados[i].cveClasificacionDelitoOrden);
                        strDatos += "&cveClasificacionDelitoOrden=" + json.resultados[i].cveClasificacionDelitoOrden;
                    }
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    if (json.resultados[i].cveComision != null) {
                        $("#hiddenComision").val(json.resultados[i].cveComision);
                        strDatos += "&cveComision=" + json.resultados[i].cveComision;
                    }
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    if (json.resultados[i].cveFormaAccion != null) {
                        $("#hiddenFormaAccion").val(json.resultados[i].cveFormaAccion);
                        strDatos += "&cveFormaAccion=" + json.resultados[i].cveFormaAccion;
                    }
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    if (json.resultados[i].cveModalidad != null) {
                        $("#hiddenModalidad").val(json.resultados[i].cveModalidad);
                        strDatos += "&cveModalidad=" + json.resultados[i].cveModalidad;
                    }
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    if (json.resultados[i].cveElementoComision != null) {
                        $("#hiddenElementoComision").val(json.resultados[i].cveElementoComision);
                        strDatos += "&cveElementoComision=" + json.resultados[i].cveElementoComision;
                    }
                }
                if ($("#checkDelitos").is(":checked")) {
                    if (json.resultados[i].cveDelito != null) {
                        $("#hiddenDelitos").val(json.resultados[i].cveDelito);
                        strDatos += "&cveDelito=" + json.resultados[i].cveDelito;
                    }
                }
                if ($("#checkConsumaciones").is(":checked")) {
                    if (json.resultados[i].cveConsumacion != null) {
                        $("#hiddenConsumaciones").val(json.resultados[i].cveConsumacion);
                        strDatos += "&cveConsumacion=" + json.resultados[i].cveConsumacion;
                    }
                }
                if ($("#checkDetenido").is(":checked")) {
                    if (json.resultados[i].cveConsignacion != null) {
                        $("#hiddenConsignaciones").val(json.resultados[i].cveConsignacion);
                        strDatos += "&cveConsignacion=" + json.resultados[i].cveConsignacion;
                    }
                }
                if ($("#checkConclusiones").is(":checked")) {
                    if (json.resultados[i].cveConclusion != null) {
                        $("#hiddenConclusiones").val(json.resultados[i].cveConclusion);
                        strDatos += "&cveConclusion=" + json.resultados[i].cveConclusion;
                    }
                }
                strDatos += "&cveRegion=" + json.resultados[i].cveRegion;
                $("#hiddenDesRegion").val(json.resultados[i].desRegion);
                $("#hiddenCveRegion").val(json.resultados[i].cveRegion);
            }
            if (nivel == 4) {
                if ($("#checkClasDelitos").is(":checked")) {
                    if (json.resultados[i].cveConcurso != null) {
                        $("#hiddenConcursos").val(json.resultados[i].cveConcurso);
                        strDatos += "&cveConcurso=" + json.resultados[i].cveConcurso;
                    }
                }
                if ($("#checkClasDelitos").is(":checked")) {
                    if (json.resultados[i].cveClasificacionDelito != null) {
                        $("#hiddenClasificacionDelitos").val(json.resultados[i].cveClasificacionDelito);
                        strDatos += "&cveClasificacionDelito=" + json.resultados[i].cveClasificacionDelito;
                    }
                }
                if ($("#checkClasDelitos").is(":checked")) {
                    if (json.resultados[i].cveClasificacionDelitoOrden != null) {
                        $("#hiddenClasificacionDelitosOrden").val(json.resultados[i].cveClasificacionDelitoOrden);
                        strDatos += "&cveClasificacionDelitoOrden=" + json.resultados[i].cveClasificacionDelitoOrden;
                    }
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    if (json.resultados[i].cveComision != null) {
                        $("#hiddenComision").val(json.resultados[i].cveComision);
                        strDatos += "&cveComision=" + json.resultados[i].cveComision;
                    }
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    if (json.resultados[i].cveFormaAccion != null) {
                        $("#hiddenFormaAccion").val(json.resultados[i].cveFormaAccion);
                        strDatos += "&cveFormaAccion=" + json.resultados[i].cveFormaAccion;
                    }
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    if (json.resultados[i].cveModalidad != null) {
                        $("#hiddenModalidad").val(json.resultados[i].cveModalidad);
                        strDatos += "&cveModalidad=" + json.resultados[i].cveModalidad;
                    }
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    if (json.resultados[i].cveElementoComision != null) {
                        $("#hiddenElementoComision").val(json.resultados[i].cveElementoComision);
                        strDatos += "&cveElementoComision=" + json.resultados[i].cveElementoComision;
                    }
                }
                if ($("#checkDelitos").is(":checked")) {
                    if (json.resultados[i].cveDelito != null) {
                        $("#hiddenDelitos").val(json.resultados[i].cveDelito);
                        strDatos += "&cveDelito=" + json.resultados[i].cveDelito;
                    }
                }
                if ($("#checkConsumaciones").is(":checked")) {
                    if (json.resultados[i].cveConsumacion != null) {
                        $("#hiddenConsumaciones").val(json.resultados[i].cveConsumacion);
                        strDatos += "&cveConsumacion=" + json.resultados[i].cveConsumacion;
                    }
                }
                if ($("#checkDetenido").is(":checked")) {
                    if (json.resultados[i].cveConsignacion != null) {
                        $("#hiddenConsignaciones").val(json.resultados[i].cveConsignacion);
                        strDatos += "&cveConsignacion=" + json.resultados[i].cveConsignacion;
                    }
                }
                if ($("#checkConclusiones").is(":checked")) {
                    if (json.resultados[i].cveConclusion != null) {
                        $("#hiddenConclusiones").val(json.resultados[i].cveConclusion);
                        strDatos += "&cveConclusion=" + json.resultados[i].cveConclusion;
                    }
                }
                strDatos += "&cveDistrito=" + json.resultados[i].cveDistrito;
                $("#hiddenDesDistrito").val(json.resultados[i].desDistrito);
                $("#hiddenCveDistrito").val(json.resultados[i].cveDistrito);
            }
            if (nivel == 5) {
                if ($("#checkClasDelitos").is(":checked")) {
                    if (json.resultados[i].cveConcurso != null) {
                        $("#hiddenConcursos").val(json.resultados[i].cveConcurso);
                        strDatos += "&cveConcurso=" + json.resultados[i].cveConcurso;
                    }
                }
                if ($("#checkClasDelitos").is(":checked")) {
                    if (json.resultados[i].cveClasificacionDelito != null) {
                        $("#hiddenClasificacionDelitos").val(json.resultados[i].cveClasificacionDelito);
                        strDatos += "&cveClasificacionDelito=" + json.resultados[i].cveClasificacionDelito;
                    }
                }
                if ($("#checkClasDelitos").is(":checked")) {
                    if (json.resultados[i].cveClasificacionDelitoOrden != null) {
                        $("#hiddenClasificacionDelitosOrden").val(json.resultados[i].cveClasificacionDelitoOrden);
                        strDatos += "&cveClasificacionDelitoOrden=" + json.resultados[i].cveClasificacionDelitoOrden;
                    }
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    if (json.resultados[i].cveComision != null) {
                        $("#hiddenComision").val(json.resultados[i].cveComision);
                        strDatos += "&cveComision=" + json.resultados[i].cveComision;
                    }
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    if (json.resultados[i].cveFormaAccion != null) {
                        $("#hiddenFormaAccion").val(json.resultados[i].cveFormaAccion);
                        strDatos += "&cveFormaAccion=" + json.resultados[i].cveFormaAccion;
                    }
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    if (json.resultados[i].cveModalidad != null) {
                        $("#hiddenModalidad").val(json.resultados[i].cveModalidad);
                        strDatos += "&cveModalidad=" + json.resultados[i].cveModalidad;
                    }
                }
                if ($("#checkCarEjecu").is(":checked")) {
                    if (json.resultados[i].cveElementoComision != null) {
                        $("#hiddenElementoComision").val(json.resultados[i].cveElementoComision);
                        strDatos += "&cveElementoComision=" + json.resultados[i].cveElementoComision;
                    }
                }
                if ($("#checkDelitos").is(":checked")) {
                    if (json.resultados[i].cveDelito != null) {
                        $("#hiddenDelitos").val(json.resultados[i].cveDelito);
                        strDatos += "&cveDelito=" + json.resultados[i].cveDelito;
                    }
                }
                if ($("#checkConsumaciones").is(":checked")) {
                    if (json.resultados[i].cveConsumacion != null) {
                        $("#hiddenConsumaciones").val(json.resultados[i].cveConsumacion);
                        strDatos += "&cveConsumacion=" + json.resultados[i].cveConsumacion;
                    }
                }
                if ($("#checkDetenido").is(":checked")) {
                    if (json.resultados[i].cveConsignacion != null) {
                        $("#hiddenConsignaciones").val(json.resultados[i].cveConsignacion);
                        strDatos += "&cveConsignacion=" + json.resultados[i].cveConsignacion;
                    }
                } else {
                    $("#hiddenConsignaciones").val("");
                }
                if ($("#checkConclusiones").is(":checked")) {
                    if (json.resultados[i].cveConclusion != null) {
                        $("#hiddenConclusiones").val(json.resultados[i].cveConclusion);
                        strDatos += "&cveConclusion=" + json.resultados[i].cveConclusion;
                    }
                }

    //            if ($("#hiddenConsumaciones").val() != "") {
    //                strDatos += "&cveConsumacion=" + $("#hiddenConsumaciones").val();
    //            }
    //            if ($("#hiddenConcursos").val() != "") {
    //                strDatos += "&cveConcurso=" + $("#hiddenConcursos").val();
    //            }
    //            if ($("#hiddenClasificacionDelitos").val() != "") {
    //                strDatos += "&cveClasificacionDelito=" + $("#hiddenClasificacionDelitos").val();
    //            }
    //            if ($("#hiddenClasificacionDelitosOrden").val() != "") {
    //                strDatos += "&cveClasificacionDelitoOrden=" + $("#hiddenClasificacionDelitosOrden").val();
    //            }
    //            if ($("#hiddenDelitos").val() != "") {
    //                strDatos += "&cveDelito=" + $("#hiddenDelitos").val();
    //            }
    //            if ($("#hiddenConsumaciones").val() != "") {
    //                strDatos += "&cveConsumacion=" + $("#hiddenConsumaciones").val();
    //            }
    //            if ($("#hiddenConsignaciones").val() != "") {
    //                strDatos += "&cveConsignacion=" + $("#hiddenConsignaciones").val();
    //            }
    //            if ($("#hiddenConclusiones").val() != "") {
    //                strDatos += "&cveConclusion=" + $("#hiddenConclusiones").val();
    //            }
                strDatos += "&cveJuzgado=" + json.resultados[i].cveJuzgado;

                strDatos += "&detalles=detalle";

            }
            $("#hiddenVariables").val(strDatos);
            consultarCausas(bandera, nivel);
        };

        gestorNivel = function (json, bandera) {
            graficar(json);
            var indice = $("#cmbPaginacion").val();
            indice = (indice - 1) * $("#cmbNumReg").val();
            var subtotal = 0;
            var titulo = titulos();
            var titulo1 = "<br id='bo'><label style='text-align:center;width: 100%; font-size:12pt;'>" + titulo + " </label></br>";
            var titulo2 = "";
            var table = "<table id='tblResultadosGridAct'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered'>";
            table += "<thead><tr>";
            var jsonDatos = JSON.stringify(json);
            switch ($("#hiddenNivel").val()) {
                case "1":
                    table += "<th>N&uacute;m.</th><th>Estado</th>";
                    if ($("#checkConsumaciones").is(":checked")) {
                        table += "<th>Consumaci&oacuten</th>";
                    }
                    if ($("#checkDelitos").is(":checked")) {
                        table += "<th id='del'>Delitos</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Clasificaci&oacuten Delitos</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Concurso Delitos</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Clasificacion Delitos Orden</th>";
                    }

                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Comisi&oacute;n</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Forma Acci&oacute;n</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Modalidad</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Elemento Comisi&oacute;n</th>";
                    }


                    if ($("#checkConclusiones").is(":checked")) {
                        table += "<th>Conclusi&oacuten</th>";
                    }

                    if ($("#checkDetenido").is(":checked")) {
                        table += "<th>Detenido</th>";
                    }
                    if ($("#checkIncompetencia").is(":checked")) {
                        table += "<th>Incompetencia(s)</th>";
                    } else {
                        table += "<th>Subtotal</th>";
                    }

                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 2 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>M&eacute;xico</td>";
                        if ($("#checkConsumaciones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsumacion + "</td>";
                        }
                        if ($("#checkDelitos").is(":checked")) {
                            table += '<td >' + json.resultados[i].desDelito + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desClasificacionDelito + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConcurso + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desClasificacionDelitoOrden + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desComision + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desFormaAccion + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desModalidad + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desElementoComision + "</td>";
                        }
                        if ($("#checkConclusiones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConclusion + "</td>";
                        }
                        if ($("#checkDetenido").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsignacion + "</td>";
                        }

                        if (opcCheck.length != 0) {
                            subtotal += parseInt(json.resultados[i].totalCJ.replace(",",""));
                            table += "<td>" + json.resultados[i].totalCJ + "</td>";
                        } else {
                            subtotal += parseInt(json.resultados[i].totalCount.replace(",",""));
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                        }
                        table += "</tr> ";

                    }
                    break;
                case "2":
                    titulo2 += "<label>Estado: M\u00C9XICO </label><br>";
                    table += "<th>N&uacute;m.</th><th>Regi&oacute;n</th>";
                    if ($("#checkConsumaciones").is(":checked")) {
                        table += "<th>Consumaci&oacuten</th>";
                    }
                    if ($("#checkDelitos").is(":checked")) {
                        table += "<th>Delitos</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Clasificaci&oacuten Delitos</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Concurso Delitos</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Clasificacion Delitos Orden</th>";
                    }

                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Comisi&oacute;n</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Forma Acci&oacute;n</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Modalidad</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Elemento Comisi&oacute;n</th>";
                    }
                    if ($("#checkConclusiones").is(":checked")) {
                        table += "<th>Conclusi&oacuten</th>";
                    }
                    if ($("#checkDetenido").is(":checked")) {
                        table += "<th>Detenido</th>";
                    }
                    if ($("#checkIncompetencia").is(":checked")) {
                        table += "<th>Incompetencia(s)</th>";
                    } else {
                        table += "<th>Subtotal</th>";
                    }
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 3 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>" + json.resultados[i].desRegion + "</td>";
                        if ($("#checkConsumaciones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsumacion + "</td>";
                        }
                        if ($("#checkConclusiones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConclusion + "</td>";
                        }
                        if ($("#checkDelitos").is(":checked")) {
                            table += '<td >' + json.resultados[i].desDelito + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desClasificacionDelito + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConcurso + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desClasificacionDelitoOrden + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desComision + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desFormaAccion + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desModalidad + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desElementoComision + "</td>";
                        }
                        if ($("#checkDetenido").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsignacion + "</td>";
                        }
                        if (opcCheck.length != 0) {
                            subtotal += parseInt(json.resultados[i].totalCJ.replace(",",""));
                            table += "<td>" + json.resultados[i].totalCJ + "</td>";
                        } else {
                            subtotal += parseInt(json.resultados[i].totalCount.replace(",",""));
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                        }
                        table += "</tr> ";
                    }
                    break;
                case "3":

                    table += "<th>N&uacute;m.</th><th>Distrito</th>";
                    titulo2 += "<label>Estado: M\u00C9XICO </label><br>";
                    titulo2 += "<label>Regi\u00F3n: " + json.resultados[0].desRegion + "</label><br>";
                    if ($("#checkConsumaciones").is(":checked")) {
                        table += "<th>Consumaci&oacuten</th>";
                    }
                    if ($("#checkDelitos").is(":checked")) {
                        table += "<th>Delito</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Clasificaci&oacuten Delitos</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Concurso Delitos</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Clasificacion Delitos Orden</th>";
                    }

                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Comisi&oacute;n</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Forma Acci&oacute;n</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Modalidad</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Elemento Comisi&oacute;n</th>";
                    }

                    if ($("#checkConclusiones").is(":checked")) {
                        table += "<th>Conclusi&oacuten</th>";
                    }
                    if ($("#checkDetenido").is(":checked")) {
                        table += "<th>Detenido</th>";
                    }

                    if ($("#checkIncompetencia").is(":checked")) {
                        table += "<th>Incompetencia(s)</th>";
                    } else {
                        table += "<th>Subtotal</th>";
                    }
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 4 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>" + json.resultados[i].desDistrito + "</td>";
                        if ($("#checkConsumaciones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsumacion + "</td>";
                        }
                        if ($("#checkDelitos").is(":checked")) {
                            table += '<td >' + json.resultados[i].desDelito + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desClasificacionDelito + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConcurso + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desClasificacionDelitoOrden + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desComision + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desFormaAccion + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desModalidad + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desElementoComision + "</td>";
                        }
                        if ($("#checkConclusiones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConclusion + "</td>";
                        }
                        if ($("#checkDetenido").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsignacion + "</td>";
                        }
                        if (opcCheck.length != 0) {
                            subtotal += parseInt(json.resultados[i].totalCJ.replace(",",""));
                            table += "<td>" + json.resultados[i].totalCJ + "</td>";
                        } else {
                            subtotal += parseInt(json.resultados[i].totalCount.replace(",",""));
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                        }
                        table += "</tr> ";
                    }
                    break;
                case "4":
                    table += '<th>N&uacute;m.</th><th >Juzgado</th>';
                    titulo2 += "<label>Estado: M\u00C9XICO </label><br>";
                    titulo2 += "<label>Regi\u00F3n: " + json.resultados[0].desRegion + "</label><br>";
                    titulo2 += "<label>Distrito: " + json.resultados[0].desDistrito + "</label><br>";
                    if ($("#checkConsumaciones").is(":checked")) {
                        table += "<th>Consumaci&oacuten</th>";
                    }
                    if ($("#checkDelitos").is(":checked")) {
                        table += "<th>Delito</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Clasificaci&oacuten Delitos</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Concurso Delitos</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Clasificacion Delitos Orden</th>";
                    }

                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Comisi&oacute;n</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Forma Acci&oacute;n</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Modalidad</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Elemento Comisi&oacute;n</th>";
                    }

                    if ($("#checkConclusiones").is(":checked")) {
                        table += "<th>Conclusi&oacuten</th>";
                    }
                    if ($("#checkDetenido").is(":checked")) {
                        table += "<th>Detenido</th>";
                    }
                    if ($("#checkIncompetencia").is(":checked")) {
                        table += "<th>Incompetencia(s)</th>";
                    } else {
                        table += "<th>Subtotal</th>";
                    }
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {      //='consultarDetallesNivel(" + true + "," + json.resultados[i].cveJuzgado + ")'>";
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 5 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += '<td >' + json.resultados[i].desJuzgado + "</td>";
                        if ($("#checkConsumaciones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsumacion + "</td>";
                        }
                        if ($("#checkDelitos").is(":checked")) {
                            table += '<td >' + json.resultados[i].desDelito + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desClasificacionDelito + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConcurso + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desClasificacionDelitoOrden + "</td>";
                        }



                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desComision + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desFormaAccion + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desModalidad + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desElementoComision + "</td>";
                        }
                        if ($("#checkConclusiones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConclusion + "</td>";
                        }
                        if ($("#checkDetenido").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsignacion + "</td>";
                        }
                        if (opcCheck.length != 0) {
                            subtotal += parseInt(json.resultados[i].totalCJ.replace(",",""));
                            table += "<td>" + json.resultados[i].totalCJ + "</td>";
                        } else {
                            subtotal += parseInt(json.resultados[i].totalCount.replace(",",""));
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                        }
                        table += "</tr> ";
                    }
                    break;
                case "5":
                    if ($("#checkDetalle").is(":checked")) {

                    } else {
                        titulo2 += "<label>Estado: M\u00C9XICO </label><br>";
                        titulo2 += "<label>Regi\u00F3n: " + json.resultados[0].desRegion + "</label><br>";
                        titulo2 += "<label>Distrito: " + json.resultados[0].desDistrito + "</label><br>";
                        titulo2 += '<label>Juzgado: ' + json.resultados[0].desJuzgado + "</label><br>";
                    }
                    if ($("#checkDetalle").is(":checked")) {
                        table += "<th>N&uacute;m.</th><th>Regi\u00f3n</th><th>Distrito</th><th>Juzgado</th>";
                        table += '<th>A&ntildeo</th><th>Numero de Investigaci&oacute;n</th><th>Nuc</th><th>fecha Radicaci&oacute;n</th>';
                    } else {
                        table += '<th>N&uacute;m.</th><th>A&ntildeo</th><th>Numero de Investigaci&oacute;n</th><th>Nuc</th><th>fecha Radicaci&oacute;n</th>';
                    }


                    if ($("#checkConsumaciones").is(":checked")) {
                        table += "<th>Consumaci&oacuten</th>";
                    }
                    if ($("#checkDelitos").is(":checked")) {
                        table += "<th>Delito</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Clasificaci&oacuten Delitos</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Concurso Delitos</th>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th>Clasificacion Delitos Orden</th>";
                    }

                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Comisi&oacute;n</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Forma Acci&oacute;n</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Modalidad</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th>Elemento Comisi&oacute;n</th>";
                    }
                    if ($("#checkConclusiones").is(":checked")) {
                        table += "<th>Conclusi&oacuten</th>";
                    }
                    if ($("#checkDetenido").is(":checked")) {
                        table += "<th>Detenido</th>";
                    }
                    table += "  <th>Tipo</th><th>Tipo Carpeta</th>";
                    if ($("#checkDetalle").is(":checked")) {

                    } else {
                        table += "<th>Codigo</th>";
                    }

                    table += "</tr></thead><tbody>";

                    for (var i = 0; i < json.totalCount; i++) {
                        if ($("#checkDetalle").is(":checked")) {
                            table += "<tr>";
                            table += "<td> " + (i + 1 + indice) + "</td>";
                            table += "<td>" + json.resultados[i].desRegion + "</td>";
                            table += "<td>" + json.resultados[i].desDistrito + "</td>";
                            table += "<td>" + json.resultados[i].desJuzgado + "</td>";
                            //table += "<td>" + json.resultados[i].desTipoJuzgado + "</td>";


                            table += "<td>" + json.resultados[i].anio + "</td>";
                            table += "<td>" + json.resultados[i].carpetaInv + "</td>";
                            table += "<td>" + json.resultados[i].nuc + "</td>";
                            table += "<td>" + fechaMySQLaNormal(json.resultados[i].fechaRadicacion) + "</td>";
                        } else {
                            table += "<tr>";
                            table += "<td> " + (i + 1 + indice) + "</td>";
                            table += "<td>" + json.resultados[i].anio + "</td>";
                            table += "<td>" + json.resultados[i].carpetaInv + "</td>";
                            table += "<td>" + json.resultados[i].nuc + "</td>";
                            table += "<td>" + fechaMySQLaNormal(json.resultados[i].fechaRadicacion) + "</td>";
                        }

                        if ($("#checkConsumaciones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsumacion + "</td>";
                        }

                        if ($("#checkDelitos").is(":checked")) {
                            table += '<td >' + json.resultados[i].desDelito + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desClasificacionDelito + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConcurso + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desClasificacionDelitoOrden + "</td>";
                        }

                        if ($("#checkConclusiones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConclusion + "</td>";
                        }

                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desComision + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desFormaAccion + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desModalidad + "</td>";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "<td>" + json.resultados[i].desElementoComision + "</td>";
                        }
                        if ($("#checkDetenido").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsignacion + "</td>";
                        }

                        table += "<td>" + json.resultados[i].desTipoJuzgado + "</td>";
                        table += "<td>" + json.resultados[i].desTipoCarpeta + ": " + json.resultados[i].numero + "/" + json.resultados[i].anio + "</td>";
                        if ($("#checkDetalle").is(":checked")) {

                        } else {
                            if (json.resultados[i].codigo == "true") {
                                table += "<td>CODIGO NACIONAL</td>";
                            } else {
                                table += "<td>CODIGO ESTATAL</td>";
                            }
                        }


                        table += "</tr> ";
                    }
                    break;
            }
            table += "</tbody></table>";
            $("#divConsulta").show("slide");
            var tabla = titulo1 + "<div id='bor'>" + titulo2 + "</div>" + table;
            $("#divTableNivel").html(tabla);

            $("#tblResultadosGridAct").DataTable({
                paging: false,
                //dom: 'T<"clear">lfrtip',
    //            tableTools: {
    //                aButtons: [
    //                    "copy",
    //                    {
    //                        sButtonText: "",
    //                        aButtons: ["csv", "xls", "pdf"]
    //                    }
    //                ]
    //            }
            });
            if (subtotal != 0 && $("#hiddenNivel").val() < 5) {
                $("#labelSubTotal").show();
                $("#labelSubTotal").text("Total: " + subtotal.toLocaleString("en-US"));
            } else {
                $("#labelSubTotal").hide();
            }

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
        consultarCausas = function (bandera, nivel) {
            $("#divConsulta").hide("slide");

            if ($("#cmbEstatusCarpeta").val() == 1) {
                $("#hiddenEstatusCarpeta").val("EN TRAMITE");
            } else {
                $("#hiddenEstatusCarpeta").val("RADICADA");
            }

            var cantReg = $("#cmbNumReg").val();
            if ($("#checkDetalle").is(":checked")) {
                $("#hiddenNivel").val(5);
                nivel = 5;
            } else {
                $("#hiddenNivel").val(nivel);
            }

            if (bandera) {
                $("#inputRegresar2").show();
                $("#paginacion").hide();

                $("#cmbPaginacion").val(1);
            }

            var strDatos = "accion=ConsultarCarpetaRadicada_Reporte";


            strDatos += "&activo=S";

            strDatos += "&cantxPag=" + cantReg;
            if ($("#checkDetalle").is(":checked")) {
                strDatos += "&checkDetalle=true";
                strDatos += "&nivel=5";
                strDatos += "&detalles=detalle";
                strDatos += "&paginacion=false";
            } else {
                strDatos += "&nivel=" + nivel;
                strDatos += "&paginacion=true";
            }
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            strDatos += $("#hiddenVariables").val();

            if ($("#checkMes").is(":checked")) {
                strDatos += "&porMes=" + $("#cmbSelectMes").val();
                strDatos += "&anio1=" + $("#txtAnio1").val();
                $("#hiddenAnio1").val($("#txtAnio1").val());
            }
            if ($("#checkRango").is(":checked")) {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            }
            if ($("#checkAnio").is(":checked")) {
                strDatos += "&anio=" + $("#txtAnio").val();
                $("#hiddenAnio").val($("#txtAnio").val());
            }



            strDatos += "&cveTipoJuzgado=" + $("#cmbTipoJuzgado").val();
            strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
    //        strDatos += "&cveEstatusCarpeta=" + $("#cmbEstatusCarpeta").val();
            strDatos += filtro();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReporteCausasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    var env;
                    if (nivel == 1) {
                        if ($("#checkMes").prop("checked")) {

                            if ($("#txtAnio1").val() == "") {
                                $("#divAlertWarning").html("Introducir a&ntildeo");
                                $("#divAlertWarning").show("slide");
                                setTimeAlert("divAlertWarning");
                                env = false;
                            } else {
                                env = true;
                            }
                        } else if ($("#checkAnio").prop("checked")) {
                            if ($("#txtAnio").val() == "") {
                                $("#divAlertWarning").html("Introducir a&ntildeo");
                                $("#divAlertWarning").show("slide");
                                setTimeAlert("divAlertWarning");
                                env = false;


                            } else {
                                env = true;
                            }
                        } else if (($("#txtfechaInicial").val() == "" || $("#txtfechaFinal").val() == "") && $('#checkRango').val() == "true") {
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
                    } else {
    //                    if ($("#checkDetalle").is(":checked")) {
    //
    //                        if ($('#checkAnio').val().toString() == "true" || $('#checkMes').val().toString() == "true" || $('#checkRango').val().toString() == "true") {
    //                            env = true;
    //                        } else {
    //                            $("#divAlertWarning").html("Selecciona un delimitador de fechas");
    //                            $("#divTableNivel").html("");
    //                            $("#paginacion").hide();
    //                            $("#divAlertWarning").show("slide");
    //                            setTimeAlert("divAlertWarning");
    //                            env = false;
    //                        }
    //
    //                    } else {
    //                    }
                    }

                    return env;
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
        var nombreY = "U";//mensaje de la metrica
        var subTotal = 0;
        switch ($("#hiddenNivel").val()) {
            case "1":
                nombreX = "M\u00C9XICO";
                for (var i = 0; i < json.totalCount; i++) {
                        
                        
                         if($("#checkClasDelitos").is(":checked") || $("#checkCarEjecu").is(":checked")){
                            graficar = false;
                        }else if($("#checkDelitos").is(":checked")){
                            categorias[i] = json.resultados[i].desDelito;
                        }else if($("#checkConsumaciones").is(":checked")){
                            categorias[i] = json.resultados[i].desConsumacion;
                        }else if($("#checkDetenido").is(":checked")){
                            categorias[i] = json.resultados[i].desConsignacion;
                        }else{
                            categorias[i] = "CAUSAS";
                        }
                        
                        if($("#checkDelitos").is(":checked")){
                            series[i] = parseInt(json.resultados[i].totalCJ.replace(",",""));
                        }else if($("#checkConsumaciones").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCJ.replace(",",""));
                        }else if($("#checkDetenido").is(":checked")){
                            series[i] = parseInt(json.resultados[i].totalCJ.replace(",","")); 
                        }else{
                           series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }
                    }
                    
                
                break;
            case "2":
                nombreX = "REGIONES";
                 for (var i = 0; i < json.totalCount; i++) {
                        categorias[i] = json.resultados[i].desRegion;
                        if($("#checkClasDelitos").is(":checked") || $("#checkCarEjecu").is(":checked")){
                            graficar = false;
                        }else if($("#checkConsumaciones").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCJ.replace(",",""));
                        }else if($("#checkDetenido").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCJ.replace(",",""));
                        }else if($("#checkDelitos").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCJ.replace(",",""));
                        }else{
                           series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }
                    }
                
                break;
            case "3":
                nombreX = "DISTRITOS";
                 for (var i = 0; i < json.totalCount; i++) {
                        categorias[i] = json.resultados[i].desDistrito;
                        if($("#checkClasDelitos").is(":checked") || $("#checkCarEjecu").is(":checked")){
                            graficar = false;
                        }else if($("#checkConsumaciones").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCJ.replace(",",""));
                        }else if($("#checkDetenido").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCJ.replace(",",""));
                        }else if($("#checkDelitos").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCJ.replace(",",""));
                        }else{
                           series[i] = parseInt(json.resultados[i].totalCount.replace(",",""));
                        }
                    }
                
                break;
            case "4":
                nombreX = "JUZGADOS";
                for (var i = 0; i < json.totalCount; i++) {
                        categorias[i] = json.resultados[i].desJuzgado;
                        if($("#checkClasDelitos").is(":checked") || $("#checkCarEjecu").is(":checked")){
                            graficar = false;
                        }else if($("#checkDelitos").is(":checked")){
                            series[i] = parseInt(json.resultados[i].totalCJ.replace(",",""));
                        }else if($("#checkConsumaciones").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCJ.replace(",",""));
                        }else if($("#checkDetenido").is(":checked")){
                           series[i] = parseInt(json.resultados[i].totalCJ.replace(",",""));
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
                thousandsSep: ',',
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

            $("#inputRegresar2").hide();
            var url = "../fachadas/sigejupe/reportes/ReporteCausasFacade.Class.php";
            var strDatos = "accion=ConsultarCarpetaRadicada_Reporte";
            var cantReg = $("#cmbNumReg").val();

            if ($("#checkMes").is(":checked")) {
                strDatos += "&porMes=" + $("#cmbSelectMes").val();
                strDatos += "&anio1=" + $("#txtAnio1").val();
                $("#hiddenAnio1").val($("#txtAnio1").val());
            }
            if ($("#checkRango").is("checked")) {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            }
            if ($("#checkAnio").is(":checked")) {
                strDatos += "&anio=" + $("#txtAnio").val();
                $("#hiddenAnio").val($("#txtAnio").val());
            }


            strDatos += "&nivel=" + $("#hiddenNivel").val();
            strDatos += "&activo=S";
            strDatos += "&paginacion=false";
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            strDatos += "&cveTipoJuzgado=" + $("#cmbTipoJuzgado").val();
            strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            strDatos += "&cveEstatusCarpeta=" + $("#cmbEstatusCarpeta").val();
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
                        $("#inputRegresar2").hide();
    //                    if ($("#hiddenNivel").val() != 1) {
    //                        $("#inputRegresar").show();
    //                    } else {
    //                        $("#inputRsegresar").hide();
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
                mensaje += " / Regi&oacute;n";
            }
            if ($("#hiddenNivel").val() == 3) {
                mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>Regi&oacute;n</SPAN>";
                mensaje += " / Distrito";
            }
            if ($("#hiddenNivel").val() == 4) {
                mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>Regi&oacute;n</SPAN>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(3,false);'>Distrito</SPAN>";
                mensaje += " / Juzgado";
            }
            if ($("#hiddenNivel").val() == 5) {
                if ($("#checkDetalle").is(":checked")) {
                    mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Detalle Total</span>";
                } else {
                    mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                    mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>Regi&oacute;n</SPAN>";
                    mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(3,false);'>Distrito</SPAN>";
                    mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(4,false);'>Juzgado</SPAN>";
                    mensaje += " / Detalles";
                }

            }
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Reporte de Causas</span>" + mensaje);
        };
        regresar = function (nivel, bandera) {
            if (bandera == 1) {
                nivel = $("#hiddenNivel").val() - 1;
            }
            $("#cmbNumReg").val(100);
            $("#cmbPaginacion").val(1);
            var strDatos = "";
            if (nivel == 0) {
                $("#h5titulo").html("Reporte de Causas");
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
                    if ($("#checkClasDelitos").is(":checked")) {
                        strDatos += "&cveConcurso=" + $("#hiddenConcursos").val();
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        strDatos += "&cveClasificacionDelito=" + $("#hiddenClasificacionDelitos").val();
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        strDatos += "&cveClasificacionDelitoOrden=" + $("#hiddenClasificacionDelitosOrden").val();
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        strDatos += "&cveComision=" + $("#hiddenComision").val();
                    }
                    if ($("#checkCarEjecu").is(":checked")) {

                        strDatos += "&cveFormaAccion=" + $("#hiddenFormaAccion").val();
                    }
                    if ($("#checkCarEjecu").is(":checked")) {

                        strDatos += "&cveModalidad=" + $("#hiddenModalidad").val();
                    }
                    if ($("#checkCarEjecu").is(":checked")) {

                        strDatos += "&cveElementoComision=" + $("#hiddenElementoComision").val();
                    }
                    if ($("#checkDelitos").is(":checked")) {
                        strDatos += "&cveDelito=" + $("#hiddenDelitos").val();
                    }
                    if ($("#checkConsumaciones").is(":checked")) {
                        strDatos += "&cveConsumacion=" + $("#hiddenConsumaciones").val();
                    }
                    if ($("#checkDetenido").is(":checked")) {
                        strDatos += "&cveConsignacion=" + $("#hiddenConsignaciones").val();
                    }
                    if ($("#checkConclusiones").is(":checked")) {
                        strDatos += "&cveConclusion=" + $("#hiddenConclusiones").val();
                    }
                }
                if (nivel == 3) {
                    if ($("#checkClasDelitos").is(":checked")) {
                        strDatos += "&cveConcurso=" + $("#hiddenConcursos").val();
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        strDatos += "&cveClasificacionDelito=" + $("#hiddenClasificacionDelitos").val();
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        strDatos += "&cveClasificacionDelitoOrden=" + $("#hiddenClasificacionDelitosOrden").val();
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        strDatos += "&cveComision=" + $("#hiddenComision").val();
                    }
                    if ($("#checkCarEjecu").is(":checked")) {

                        strDatos += "&cveFormaAccion=" + $("#hiddenFormaAccion").val();
                    }
                    if ($("#checkCarEjecu").is(":checked")) {

                        strDatos += "&cveModalidad=" + $("#hiddenModalidad").val();
                    }
                    if ($("#checkCarEjecu").is(":checked")) {

                        strDatos += "&cveElementoComision=" + $("#hiddenElementoComision").val();
                    }
                    if ($("#checkDelitos").is(":checked")) {
                        strDatos += "&cveDelito=" + $("#hiddenDelitos").val();
                    }
                    if ($("#checkConsumaciones").is(":checked")) {
                        strDatos += "&cveConsumacion=" + $("#hiddenConsumaciones").val();
                    }
                    if ($("#checkDetenido").is(":checked")) {
                        strDatos += "&cveConsignacion=" + $("#hiddenConsignaciones").val();
                    }
                    if ($("#checkConclusiones").is(":checked")) {
                        strDatos += "&cveConclusion=" + $("#hiddenConclusiones").val();
                    }
                    strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                }
                if (nivel == 4) {
                    if ($("#checkClasDelitos").is(":checked")) {
                        strDatos += "&cveConcurso=" + $("#hiddenConcursos").val();
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        strDatos += "&cveClasificacionDelito=" + $("#hiddenClasificacionDelitos").val();
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        strDatos += "&cveClasificacionDelitoOrden=" + $("#hiddenClasificacionDelitosOrden").val();
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        strDatos += "&cveComision=" + $("#hiddenComision").val();
                    }
                    if ($("#checkCarEjecu").is(":checked")) {

                        strDatos += "&cveFormaAccion=" + $("#hiddenFormaAccion").val();
                    }
                    if ($("#checkCarEjecu").is(":checked")) {

                        strDatos += "&cveModalidad=" + $("#hiddenModalidad").val();
                    }
                    if ($("#checkCarEjecu").is(":checked")) {

                        strDatos += "&cveElementoComision=" + $("#hiddenElementoComision").val();
                    }
                    if ($("#checkDelitos").is(":checked")) {
                        strDatos += "&cveDelito=" + $("#hiddenDelitos").val();
                    }
                    if ($("#checkConsumaciones").is(":checked")) {
                        strDatos += "&cveConsumacion=" + $("#hiddenConsumaciones").val();
                    }
                    if ($("#checkDetenido").is(":checked")) {
                        strDatos += "&cveConsignacion=" + $("#hiddenConsignaciones").val();
                    }
                    if ($("#checkConclusiones").is(":checked")) {
                        strDatos += "&cveConclusion=" + $("#hiddenConclusiones").val();
                    }
                    strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                    strDatos += "&cveDistrito=" + $("#hiddenCveDistrito").val();
                }
            }
            $("#hiddenVariables").val(strDatos);
            if (nivel > 0) {
                consultarCausas(true, nivel);
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
                            if (json.data[i].cveTipoJuzgado == 6 | json.data[i].cveTipoJuzgado == 4 | json.data[i].cveTipoJuzgado == 5) {
                            } else {
                                $("#cmbTipoJuzgado").append($('<option></option>').val(json.data[i].cveTipoJuzgado).html(json.data[i].desTipoJuzgado));
                            }
                            if (json.data[i].cveTipoJuzgado == 4) {
                                $("#cmbTipoJuzgado").append($('<option></option>').val(json.data[i].cveTipoJuzgado).html(json.data[i].desTipoJuzgado + " (CODIGO ANTERIOR)"));
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
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        var estatus = "";
                        for (var i = 0; i < json.totalCount; i++) {
                            if (json.data[i].cveEstatusCarpeta == 1) {
                                estatus = "EN TRAMITE";
                                $("#cmbEstatusCarpeta").append($('<option id="cmbEstatus' + json.data[i].cveEstatusCarpeta + '"></option>').val(json.data[i].cveEstatusCarpeta).html(estatus));
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

        cargarConsumaciones = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/consumaciones/ConsumacionesFacade.Class.php",
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
                            $("#cmbConsumaciones").append($('<option id="cmbConsumacion' + json.data[i].cveEstatusCarpeta + '"></option>').val(json.data[i].cveConsumacion).html(json.data[i].desConsumacion));
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
                            $("#cmbDelitos").append($('<option id="cmbDelitos' + json.data[i].cveDelito + '"></option>').val(json.data[i].cveDelito).html(json.data[i].desDelito));
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

        cargarClasificiacionDelitos = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/clasificacionesdelitos/ClasificacionesdelitosFacade.Class.php",
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
                            $("#cmbClasDelitos").append($('<option id="cmbClasDelitos' + json.data[i].cveClasificacionDelito + '"></option>').val(json.data[i].cveClasificacionDelito).html(json.data[i].desClasificacionDelito));
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

        cargarComision = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/comisiones/ComisionesFacade.Class.php",
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
                            $("#cmbComision").append($('<option id="cmbComision' + json.data[i].cveComision + '"></option>').val(json.data[i].cveComision).html(json.data[i].desComision));
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
        cargarFormaAccion = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/formasacciones/FormasaccionesFacade.Class.php",
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
                            $("#cmbFormaAccion").append($('<option id="cmbFormaAccion' + json.data[i].cveFormaAccion + '"></option>').val(json.data[i].cveFormaAccion).html(json.data[i].desFormaAccion));
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
        cargarClasificiacionDelitosOrden = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/clasificacionesdelitosorden/ClasificacionesdelitosordenFacade.Class.php",
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
                            $("#cmbClasDelitosOrden").append($('<option id="cmbClasDelitosOrden' + json.data[i].cveClasificacionDelitoOrden + '"></option>').val(json.data[i].cveClasificacionDelitoOrden).html(json.data[i].desClasificacionDelitoOrden));
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

        cargarModalidad = function () {
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
                            $("#cmbModalidad").append($('<option id="cmbModalidad' + json.data[i].cveModalidad + '"></option>').val(json.data[i].cveModalidad).html(json.data[i].desModalidad));
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

        cargarConclusiones = function () {
            var strDatos = "accion=consultarOrdenado";
            strDatos += "&activo=S";
            strDatos += "&orden=order by desConclusion";
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
                            if (json.data[i].juicio = 'N') {
                                $("#cmbConclusiones").append($('<option class="Ccontrol" id="cmbConclusiones' + json.data[i].cveConclusion + '"></option>').val(json.data[i].cveConclusion).html(json.data[i].desConclusion));
                            } else {
                                $("#cmbConclusiones").append($('<option class="Cjuicio" id="cmbConclusiones' + json.data[i].cveConclusion + '"></option>').val(json.data[i].cveConclusion).html(json.data[i].desConclusion + " (JUICIO)"));
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

        cargarConcursos = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/concursos/ConcursosFacade.Class.php",
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
                            $("#cmbConcursos").append($('<option id="cmbConcursos' + json.data[i].cveConcurso + '"></option>').val(json.data[i].cveConcurso).html(json.data[i].desConcurso));
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

        cargarElementosComision = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/elementoscomisiones/ElementoscomisionesFacade.Class.php",
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
                            $("#cmbElementoComision").append($('<option id="cmbElementoComision' + json.data[i].cveElementoComision + '"></option>').val(json.data[i].cveElementoComision).html(json.data[i].desElementoComision));
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

        filtrarTipoCarpeta = function () {
            $("#cmbTipoCarpeta option").each(function () {
                $(this).hide();
            });
            $("#cmbTipoCarpeta option[value='']").show();
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
                            $("#cmbTipoCarpeta option[value=3]").show();
                            $("#cmbTipoCarpeta option[value=4]").show();
    //                            $("#cmbTipoCarpeta option[value=7]").show();
                        }
                    }
                }
            }
            if (cveTipoJuzgado == "") {
                $("#cmbTipoCarpeta option").each(function () {
                    $(this).show();
                });
            }

            $("#cmbTipoCarpeta").val("");
        };

        filtrarConclusion = function () {
            $(".Ccontrol option").each(function () {
                $(this).hide();
            });
            $(".Cjuicio option").each(function () {
                $(this).hide();
            });
            $("#cmbTipoCarpeta option[value='']").show();
            var cveTipoJuzgado = $("#cmbTipoJuzgado").val();
            if (cveTipoJuzgado == 1) {//control
                $(".Ccontrol ").show();
            } else {
                if (cveTipoJuzgado == 3) {//ejecucion
    //                    $("#cmbTipoCarpeta option[value=8]").show();

    //                    $("#cmbTipoCarpeta option[value=7]").show();
                } else {
                    if (cveTipoJuzgado == 2) {//juicio
    //                        $("#cmbTipoCarpeta option[value=8]").show();
                        $(".Cjuicio").show();
                        //  $("#cmbTipoCarpeta option[value=3]").show();
    //                        $("#cmbTipoCarpeta option[value=7]").show();
                    } else {
                        if (cveTipoJuzgado == 4) {//tribunal
    //                            $("#cmbTipoCarpeta option[value=8]").show();
                            // $("#cmbTipoCarpeta option[value=4]").show();
    //                            $("#cmbTipoCarpeta option[value=7]").show();
                        }
                    }
                }
            }
            if (cveTipoJuzgado == "") {
                $("#cmbTipoCarpeta option").each(function () {
                    $(this).show();
                });
            }

            $("#cmbTipoCarpeta").val("");
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
                            if (parseInt(json.data[i].cveTipoCarpeta) <= 5) {
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
                            $("#cmbJuzgado").append($('<option id="cmbJuzgado' + json.data[i].cveJuzgado + '" distrito = "' + json.data[i].cveDistrito + '" region = "' + json.data[i].cveRegion + '"></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado + "(CODIGO ANTERIOR)"));
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
        guardaCombo = function () {
            $('#cmbM').hide();
            $('#anio1').hide();
            $('#divRangoFechas').hide();
        }

        limpiarEscondidos = function () {
            $("#inputRegresar2").hide();
            $('#hiddenCveRegion').val("");
            $('#hiddenCveDistrito').val("");
            $('#hiddenVariables').val("");
            $('#hiddenNivel').val("");
            $('#hiddenDesRegion').val("");
            $('#hiddenDesDistrito').val("");
            $('#hiddenDesJuzgado').val("");
            $('#hiddenAnio').val("");
            $('#hiddenAnio1').val("");
            $('#hiddenEstatusCarpeta').val("");
            $('#hiddenConcursos').val("");
            $('#hiddenDelitos').val("");
            $('#hiddenConsumaciones').val("");
            $('#hiddenClasificacionDelitos').val("");
            $('#hiddenClasificacionDelitosOrden').val("");
            $('#hiddenElementoComision').val("");
            $('#hiddenComision').val("");
            $('#hiddenFormaAccion').val("");
            $('#hiddenModalidad').val("");
            $('#hiddenConsignaciones').val("");
            $('#hiddenConclusiones').val("");

        }


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

        titulos = function () {
            var titulo = "Reporte de Causas";
            if ($("#checkAnio").is(":checked")) {
                titulo += " en el A\u00F1o " + $("#txtAnio").val();
            }
            if ($("#checkMes").is(":checked")) {
                titulo += " en el mes " + obtenerMes($("#cmbSelectMes").val()) + " de " + $("#txtAnio1").val();
            }
            if ($("#checkRango").is(":checked")) {
                titulo += " de " + $("#txtfechaInicial").val() + " a " + $("#txtfechaFinal").val();
            }

            if ($("#checkConsumaciones").is(":checked")) {
                titulo += " por Consumacion ";
            }
            if ($("#checkDelitos").is(":checked")) {
                titulo += " por Delito ";
            }
            if ($("#checkConclusiones").is(":checked")) {
                titulo += " por Tipo de Conclusi&oacute;n ";
            }

            if ($("#checkDetenido").is(":checked")) {
                titulo += " por Detenidos ";
            }
            if ($("#checkIncompetencia").is(":checked")) {
                titulo += " por Incompetencia ";
            }
            titulo += " en el Estado de M\u00E9xico.";
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

        fechaMySQLaNormal = function (fecha) {
            var fechaHora = fecha.split(" ");
            var vecFecha = fechaHora[0].split("-");
            var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
            fechaHora = fechaHora[1].split(":");
            fechaHora = fechaHora[0] + ":" + fechaHora[1];
            return fechaNormal + " " + fechaHora;
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
            obtenerPermisosFormulario('REPORTES', 'CAUSAS RADICADAS');
            cargarRegiones();
            cargarDistritos();
            cargarJuzgado();
            cargarTipoJuzgado();
            cargarEstatusCarpeta();
            cargarConsumaciones();
            cargarDelitos();
            cargarConclusiones();
            cargarClasificiacionDelitos();
            cargarComision();
            cargarModalidad();
            cargarElementosComision();
            cargarClasificiacionDelitosOrden();
            cargarConcursos();
            cargarFormaAccion();
            cargarTipoCarpeta();

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

            $("#cmbEstatusCarpeta").change(function () {
                opcCheck = [];
                limpiarTabla();
                if ($("#checkDetenido").is(":checked")) {
                    $("#checkDetenido").removeAttr("checked");
                }
                if ($("#checkIncompetencia").is(":checked")) {
                    $("#checkIncompetencia").removeAttr("checked");
                }
                if ($("#checkConsumaciones").is(":checked")) {
                    $("#checkConsumaciones").removeAttr("checked");
                    esconderConsumaciones();
                }
                if ($("#checkConclusiones").is(":checked")) {
                    $("#divCmbConclusiones").hide();
                    $("#cmbConclusiones").val("");
                    $("#checkConclusiones").removeAttr("checked");
                }

                if ($("#cmbEstatusCarpeta").val() == 2) {
                    esconderConsumaciones();
                    opcCheck = [];
                    $("#divConsumacion").show();
                    $("#divConclusiones").show();
                    $("#divCheckDetenido").hide();
                    $("#divCheckIncompetencia").hide();
                } else if ($("#cmbEstatusCarpeta").val() == 1) {
                    esconderConsumaciones();
                    opcCheck = [];
                    $("#divConclusiones").hide();
                    $("#divCheckDetenido").hide();
                    $("#divCheckIncompetencia").hide();
                    $("#divConsumacion").show();
                } else {
                    $("#divConclusiones").hide();
                    $("#divCheckDetenido").show();
                    $("#divCheckIncompetencia").show();
                }
            });
            $("#checkConsumaciones").click(function () {
                if ($("#checkConsumaciones").is(":checked")) {
                    opcCheck.push("1");

                    if ($("#checkIncompetencia").is(":checked")) {
                        $("#checkIncompetencia").removeAttr("checked");
                    }
                    if ($("#checkDetenido").is(":checked")) {
                        opcCheck.pop();
                        $("#checkDetenido").removeAttr("checked");
                    }
                    if ($("#checkConclusiones").is(":checked")) {
                        opcCheck.pop();
                        $("#divCmbConclusiones").hide();
                        $("#cmbConclusiones").val("");
                        $("#checkConclusiones").removeAttr("checked");
                    }
                    $("#divCmbConsumaciones").show();
                    $("#cmbConsumaciones").val("");
                    $("#divDelito").show();

                } else {
                    opcCheck.pop();
                    esconderConsumaciones();
                }
            });

            esconderConsumaciones = function () {
                $("#divCmbConsumaciones").hide();
                $("#cmbConsumaciones").val("");
                $("#checkDelitos").removeAttr("checked");
                $("#checkDelitos").removeAttr("checked");
                $("#divDelito").hide();
                esconderDelito();
            }

            esconderDelito = function () {
                $("#cmbDelitos").val("");
                $("#cmbClasDelitos").val("");
                $("#cmbComision").val("");
                $("#cmbFormaAccion").val("");
                $("#cmbClasDelitosOrden").val("");
                $("#cmbModalidad").val("");
                $("#cmbConcursos").val("");
                $("#cmbElementoComision").val("");
                $("#checkClasDelitos").removeAttr("checked");
                $("#checkCarEjecu").removeAttr("checked");
                $("#divCmbDelitos").hide();
                $("#divCmbClasDelitos").hide();
                $("#divCmbComision").hide();
                $("#divCmbFormaAccion").hide();
                $("#divCmbClasDelitosOrden").hide();
                $("#divCmbModalidad").hide()
                $("#divCmbConcursos").hide();
                $("#divCmbElementoComision").hide();
                $("#divClasDelitos").hide();
                $("#divCaracteristicasEjecucion").hide();
                $("#divClasDelitosOrden").hide();
            }
            $("#checkDelitos").click(function () {
                if ($("#checkDelitos").is(":checked")) {
                    opcCheck.push("1");
                    $("#divCmbDelitos").show();
                    $("#cmbDelitos").val("");
                    $("#divClasDelitos").show();
                    $("#divCaracteristicasEjecucion").show();
                    $("#divClasDelitosOrden").show();
                } else {
                    opcCheck.pop();
                    esconderDelito();
                }
            });

            $("#checkClasDelitos").click(function () {
                if ($("#checkClasDelitos").is(":checked")) {
                    opcCheck.push("1");
                    $("#divCmbClasDelitos").show();
                    $("#divCmbClasDelitosOrden").show();
                    $("#divCmbConcursos").show();
                    if ($("#checkCarEjecu").is(":checked")) {
                        $("#checkCarEjecu").removeAttr("checked");
                        opcCheck.pop();
                        $("#cmbComision").val("");
                        $("#cmbFormaAccion").val("");
                        $("#cmbModalidad").val("");
                        $("#divCmbComision").hide();
                        $("#divCmbFormaAccion").hide();
                        $("#divCmbModalidad").hide();
                        $("#divCmbElementoComision").hide();
                        $("#cmbModalidad").val("");
                        $("#cmbElementoComision").val("");
                    }
                } else {
                    opcCheck.pop();
                    $("#cmbClasDelitos").val("");
                    $("#cmbClasDelitosOrden").val("");
                    $("#divCmbClasDelitos").hide();
                    $("#divCmbClasDelitosOrden").hide();
                    $("#divCmbConcursos").hide();
                    $("#cmbClasDelitos").val("");
                    $("#cmbClasDelitosOrden").val("");
                    $("#cmbConcursos").val("");

                }
            });
            $("#checkDetenido").click(function () {
                if ($("#checkDetenido").is(":checked")) {
                    opcCheck.push("1");
                    if ($("#checkConsumaciones").is(":checked")) {
                        $("#checkConsumaciones").removeAttr("checked");
                        opcCheck.pop();
                        esconderConsumaciones();
                    }
                    if ($("#checkIncompetencia").is(":checked")) {
                        $("#checkIncompetencia").removeAttr("checked");
                    }
                    if ($("#checkConclusiones").is(":checked")) {
                        $("#checkConclusiones").removeAttr("checked");
                        opcCheck.pop();
                        $("#divCmbConclusiones").hide();
                        $("#cmbConclusiones").val("");
                    }
                } else {
                    opcCheck.pop();
                }
            });
            $("#checkIncompetencia").click(function () {
                if ($("#checkIncompetencia").is(":checked")) {

                    if ($("#checkConsumaciones").is(":checked")) {
                        $("#checkConsumaciones").removeAttr("checked");
                        opcCheck.pop();
                        esconderConsumaciones();
                    }
                    if ($("#checkDetenido").is(":checked")) {
                        $("#checkDetenido").removeAttr("checked");
                        opcCheck.pop();
                    }
                    if ($("#checkConclusiones").is(":checked")) {
                        $("#checkConclusiones").removeAttr("checked");
                        opcCheck.pop();
                        $("#divCmbConclusiones").hide();
                        $("#cmbConclusiones").val("");
                    }
                } else {
                    opcCheck.pop();
                }
            });
            $("#checkCarEjecu").click(function () {
                if ($("#checkCarEjecu").is(":checked")) {
                    if ($("#checkClasDelitos").is(":checked")) {
                        $("#checkClasDelitos").removeAttr("checked");
                        opcCheck.pop();
                        $("#cmbClasDelitos").val("");
                        $("#cmbClasDelitosOrden").val("");
                        $("#divCmbClasDelitos").hide();
                        $("#divCmbClasDelitosOrden").hide();
                        $("#divCmbConcursos").hide();
                        $("#cmbClasDelitos").val("");
                        $("#cmbClasDelitosOrden").val("");
                        $("#cmbConcursos").val("");
                        $("#cmbElementoComision").val("");

                    }
                    opcCheck.push("1");
                    $("#divCmbComision").show();
                    $("#divCmbFormaAccion").show();
                    $("#divCmbModalidad").show();
                    $("#divCmbElementoComision").show();

                } else {
                    opcCheck.pop();
                    $("#cmbComision").val("");
                    $("#cmbFormaAccion").val("");
                    $("#cmbModalidad").val("");
                    $("#divCmbComision").hide();
                    $("#divCmbFormaAccion").hide();
                    $("#divCmbModalidad").hide();
                    $("#divCmbElementoComision").hide();
                    $("#cmbModalidad").val("");
                    $("#cmbElementoComision").val("");
                }
            });



            $("#checkConclusiones").click(function () {
                if ($("#checkConclusiones").is(":checked")) {
                    if ($("#checkDetenido").is(":checked")) {
                        opcCheck.pop();
                        $("#checkDetenido").removeAttr("checked");
                    }
                    if ($("#checkIncompetencia").is(":checked")) {
                        $("#checkIncompetencia").removeAttr("checked");
                    }
                    if ($("#checkConsumaciones").is(":checked")) {
                        $("#checkConsumaciones").removeAttr("checked");
                        esconderConsumaciones();
                    }

                    opcCheck.push("1");
                    $("#divCmbConclusiones").show();
                    $("#cmbConclusiones").val("");
                } else {

                    opcCheck.pop();
                    $("#divCmbConclusiones").hide();
                    $("#cmbConclusiones").val("");
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
            $('#txtfechaFinal').on("dp.update", function (e) {
                $('#txtfechaInicial').data("DateTimePicker").maxDate(e.date);
            });
            $('#txtfechaInicial').on("dp.update", function (e) {
                $('#txtfechaFinal').data("DateTimePicker").minDate(e.date);
            });
            $("#txtAnio").validaCampo('0123456789');

            fechaBaseDatos(
                    {
                        txtfechaInicial: "fecha",
                        txtfechaFinal: "fecha"
                    }
            );
        });
    </script> 
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>