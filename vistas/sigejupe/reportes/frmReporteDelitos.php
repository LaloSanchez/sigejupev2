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
    <input type="hidden" id="hiddenMunicipio" value="">
    <input type="hidden" id="hiddenFechaHoraHoy" value="">


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Reporte de Delitos
            </h5>
        </div>
        <div  id="panelPrincipal" class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divPanelControl">


                    <div class="form-group">                                                                
                        <label class="control-label col-md-4" >A&ntilde;o de Delito</label>
                        <input type="radio" name="optradio" value="" class="form-inline" id="checkAnio" onclick="muestraOpc(1)"> 
                    </div>

                    <div class="form-group" id="anio1" style="display:none" >                                                                
                        <label class="control-label col-md-5 needed" id="lblRelationName">A&ntilde;o.</label>
                        <input type="text" class="form-inline" id="txtAnio" placeholder="A&ntilde;o" maxlength="4" value="">                             
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-4" >Mes (Radicaci&oacute;n)</label>
                        <input type="radio" name="optradio" value="" class="form-inline" id="checkMes" onclick="muestraOpc(2)" > 

                    </div>
                    <div class="form-group" style="display:none" id="cmbM">                                                                

                        <div  class=" form-group" style="">
                            <label class="control-label col-md-5 needed" >Mes</label>

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
                            <label class="control-label col-md-5 needed" >A&ntilde;o. (Radicaci&oacute;n)</label>
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
                            <select class="form-control Relacionado" name="cmbTipoJuzgado" id="cmbTipoJuzgado" onchange="filtrarTipoCarpeta();">
                                <option value="">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>  
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4">Tipo de juzgado</label>
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

                            </select>
                        </div> 
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
                                <label class="control-label ">Elementos Comision</label>
                                <select class="form-control Relacionado col-md-4" name="cmbElementoComision" id="cmbElementoComision">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                        </div> 
                    </div>
                    <div class="form-group" id="divMunicipio"  > 
                        <label class="control-label col-md-4">Municipio de ocurrencia</label>

                        <input type="checkbox" class="col-md-1" id="checkMunicipio" >
                        <div id="divCmbMunicipio" class="logobox col-md-3" style="display:none">
                            <select class="form-control Relacionado" name="cmbMunicipio" id="cmbMunicipio">
                                <option value="">Seleccione una opci&oacute;n</option>
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
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="submit" class="btn btn-primary btn-adaptar consulta" id="Consultar" value="Consultar" onclick="limpiarTabla();
                                        consultarReporteDelitos(true, 1)">
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
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar();" > 
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                    <div class="col-md-2 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Buscar" onclick="consultarReporteDelitos(true, 1);" style="display: none"> 
                    </div>
                    <div class="col-md-2 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimirs" value="Imprimir" onclick="imprimir('divTableNivel');" style="display: none">
                    </div>
                    <div class="col-md-2 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputExportarPDFs" value="Exportar PDF" onclick="exportar('exportarPDF', 'divTableNivel');" style="display: none">
                    </div>
                    <div class="col-md-2 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputExportarExcels" value="Exportar Excel" onclick="exportar('exportarExcel', 'divTableNivel');" style="display: none">
                    </div>
                    <div class="col-md-2 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiars" value="Limpiar" onclick="limpiar();" style="display: none"> 
                    </div>
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
            <div id="ifr" style="display:none" >
                <form action="../fachadas/sigejupe/reportes/exportarReportes.php" id="formIframe" method="post" target="my_frame">
                    <input type="hidden" name="contenido" id="contenidoIframe" value="" />
                    <input type="hidden" name="accion" id="accionIframe" value="" />
                    <input type="hidden" name="info" id="infoIframe" value="" />
                </form>
                <iframe name='my_frame' src='../fachadas/sigejupe/reportes/exportarReportes.php' style="width: 1000px; height: 300px"></iframe>
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

            if ($("#checkCarEjecu").is(":checked")) {
                contenido = contenido.replace(/Culposo/g, 'Cu');
                contenido = contenido.replace(/Doloso/g, 'D');
                contenido = contenido.replace(/No aplica/g, 'NA');
                contenido = contenido.replace(/No especificado/g, 'NE');
                contenido = contenido.replace(/Con violencia/g, 'CV');
                contenido = contenido.replace(/Sin violencia/g, 'SV');
                contenido = contenido.replace(/Agravado/g, 'Ag');
                contenido = contenido.replace(/Atenuado/g, 'At');
                contenido = contenido.replace(/Calificado/g, 'Cal');
                contenido = contenido.replace(/Calificado-Agravado/g, 'CA');
                contenido = contenido.replace(/Simple/g, 'S');
                contenido = contenido.replace(/Con alguna parte del cuerpo/g, 'PC');
                contenido = contenido.replace(/Con arma blanca/g, 'AB');
                contenido = contenido.replace(/Con arma de fuego/g, 'AF');
                contenido = contenido.replace(/Con otro elemento/g, 'O');
                if ($("#hiddenNivel").val() != 5) {
                    contenido = contenido.replace(/Buscar:/g, '   <p style="font-size:8pt; float:left;">Cu = Culposo ,D = Doloso,NA = No Aplica,NE = No Especificado</p><br><p style="font-size:8pt; float:left;">CV = Con Violencia, SV = Sin Violencia,Ag = Agravado,At = Atenuado,Cal = Calificado,CA = Calificado-Agravado</p><br><p style="font-size:8pt; float:left;">S = Simple,PC = Con alguna parte del cuerpo,AB = Con arma blanca,AF = Con arma de fuego,O = Con otro elemento</p> <br><br>');
                }
            }
            if ($("#checkClasDelitos").is(":checked")) {

                contenido = contenido.replace(/Grave/g, 'G');
                contenido = contenido.replace(/No grave/g, 'NG');
                contenido = contenido.replace(/No aplica/g, 'NA');
                contenido = contenido.replace(/No especificado/g, 'NE');
                contenido = contenido.replace(/Ideal/g, 'I');
                contenido = contenido.replace(/Real/g, 'R');
                contenido = contenido.replace(/Instantaneo/g, 'In');
                contenido = contenido.replace(/Permanente/g, 'Pe');
                contenido = contenido.replace(/Continuo/g, 'C');
                contenido = contenido.replace(/Buscar:/g, '   <p style="font-size:8pt; float:left;">G = Grave ,NG = No grave, I = Ideal</p><br><p style="font-size:8pt; float:left;">R = Real,I = Instantaneo,P = Permanente,C = Continuo</p><br><br>');

            }

            var nombreArchivo = "REPORTE_DELITOS";
            var tituloReporte = titulos();

            contenido = contenido.replace(/width/g, '  ');
            contenido = contenido.replace(/Buscar:/g, '');
            contenido = contenido.replace(/onclick="(.*?)"/g, '');
            contenido = contenido.replace(/ide/g, 'style="width:30px !important;"');

            contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px;"');
            contenido = contenido.replace(/id="os"/g, 'style="width:100px;"');
            contenido = contenido.replace(/<center>/g, '');
            contenido = contenido.replace(/<\/center>/g, '');
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
            console.log(contenido);
            $("#formIframe").submit();

        }


        limpiar = function () {
            $("#inputRegresar2").hide();
            $("#h5titulo").html("Reporte de Delitos");
            $("#labelSubTotal").text("");
            $("#cmbClasDelitos").val("");
            $("#cmbClasDelitosOrden").val("");
            $("#divCmbClasDelitos").hide();
            $("#divCmbClasDelitosOrden").hide();
            $("#divCmbConcursos").hide();
            $("#cmbConcursos").val("");
            $("#txtAnio").val("");
            $("#txtAnio1").val("");
            $("#cmbTipoJuzgado").val("");
            $("#cmbOcupacion").val("");
            $("#txtfechaInicial").val(fechaHoy());
            $("#txtfechaFinal").val(fechaHoy());
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
            $("#divCmbMunicipio").hide();
            $("#cmbMunicipio").val("");
            $("#cmbDelitos").val("");
            $("#cmbConcursos").val("");
            $("#cmbElementoComision").val("");
            $("#cmbConsumaciones").val("");
            $("#cmbTipoCarpeta").val("");
            $("#checkConsumaciones").removeAttr("checked");
            $("#checkDelitos").removeAttr("checked");
            $("#checkMunicipio").removeAttr("checked");
            $("#checkClasDelitos").removeAttr("checked");
            $("#checkCarEjecu").removeAttr("checked");
            $("#divDelito").hide();
            $("#divClasDelitos").hide();
            $("#divCaracteristicasEjecucion").hide();
            $("#divClasDelitosOrden").hide();
            $("#cmbEstatusCarpeta").val("");
            $("#cmbComision").val("");
            $("#cmbFormaAccion").val("");
            $("#divGrafica").html("");
            $("#divConsulta").hide();
            $("#cmbGrafica").val(1);
            $("#divGrafica").hide();
            $("#cmbModalidad").val("");
            //        $.each($("#divFormulario input[type=checkbox]"), function () {
            //            $(this).attr("disabled", false);
            //        });
            //        $.each($("#divFormulario select"), function () {
            //            $(this).attr("disabled", false);
            //        });
            //        $.each($("#divFormulario input[type=radio]"), function () {
            //            $(this).attr("disabled", false);
            //        });
            //        $.each($("#divFormulario input[type=text]"), function () {
            //            $(this).attr("disabled", false);
            //        });
            //        $.each($("#paginacion select"), function () {
            //            $(this).attr("disabled", false);
            //        });

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
            if ($("#cmbTipoJuzgado").val() != "") {
                strDatos += "&cveTipoJuzgado=" + $("#cmbTipoJuzgado").val();
            }
            if ($("#cmbTipoCarpeta").val() != "") {
                strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            }
            strDatos += "&cveEstatusCarpeta=" + $("#cmbEstatusCarpeta").val();

            if ($("#cmbDelitos").val() != "") {

                strDatos += "&cveDelito=" + $("#cmbDelitos").val();
            }
            if ($("#cmbMunicipio").val() != "") {
                strDatos += "&cveMunicipio=" + $("#cmbMunicipio").val();
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
            if ($("#checkDelitos").is(":checked")) {
                strDatos += "&checkDelitos=true";
            }
            if ($("#checkMunicipio").is(":checked")) {
                strDatos += "&checkMunicipio=true";
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
            strDatos += "&opcCheck=" + opcCheck.length;
            return strDatos;
        };

        paginacion = function (paginar) {
            consultarReporteDelitos(paginar, $("#hiddenNivel").val());
        };
        gestorConsulta = function (bandera, nivel, json, i) {
            var strDatos = "";

            if (nivel == 2) {
                if ($("#cmbConcursos").val() != "") {
                    $("#hiddenConcursos").val(json.resultados[i].cveConcurso);
                    strDatos += "&cveConcurso=" + json.resultados[i].cveConcurso;
                }
                if ($("#cmbClasDelitos").val() != "") {
                    $("#hiddenClasificacionDelitos").val(json.resultados[i].cveClasificacionDelito);
                    strDatos += "&cveClasificacionDelito=" + json.resultados[i].cveClasificacionDelito;
                }
                if ($("#cmbClasDelitosOrden").val() != "") {
                    $("#hiddenClasificacionDelitosOrden").val(json.resultados[i].cveClasificacionDelitoOrden);
                    strDatos += "&cveClasificacionDelitoOrden=" + json.resultados[i].cveClasificacionDelitoOrden;
                }
                if ($("#cmbComision").val() != "") {
                    $("#hiddenComision").val(json.resultados[i].cveComision);
                    strDatos += "&cveComision=" + json.resultados[i].cveComision;
                }
                if ($("#cmbFormaAccion").val() != "") {
                    $("#hiddenFormaAccion").val(json.resultados[i].cveFormaAccion);
                    strDatos += "&cveFormaAccion=" + json.resultados[i].cveFormaAccion;
                }
                if ($("#cmbModalidad").val() != "") {
                    $("#hiddenModalidad").val(json.resultados[i].cveModalidad);
                    strDatos += "&cveModalidad=" + json.resultados[i].cveModalidad;
                }
                if ($("#cmbElementoComision").val() != "") {
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
                if ($("#checkMunicipio").is(":checked")) {
                    $("#hiddenMunicipio").val(json.resultados[i].cveMunicipio);
                    strDatos += "&cveMunicipio=" + json.resultados[i].cveMunicipio;
                } else {
                    //strDatos += "&cveRegion=" + json.resultados[i].cveRegion;
                    $("#hiddenDesRegion").val(json.resultados[i].desRegion);
                    $("#hiddenCveRegion").val(json.resultados[i].cveRegion);
                }
            }
            if (nivel == 3) {
                if ($("#cmbConcursos").val() != "") {
                    $("#hiddenConcursos").val(json.resultados[i].cveConcurso);
                    strDatos += "&cveConcurso=" + json.resultados[i].cveConcurso;
                }
                if ($("#cmbClasDelitos").val() != "") {
                    $("#hiddenClasificacionDelitos").val(json.resultados[i].cveClasificacionDelito);
                    strDatos += "&cveClasificacionDelito=" + json.resultados[i].cveClasificacionDelito;
                }
                if ($("#cmbClasDelitosOrden").val() != "") {
                    $("#hiddenClasificacionDelitosOrden").val(json.resultados[i].cveClasificacionDelitoOrden);
                    strDatos += "&cveClasificacionDelitoOrden=" + json.resultados[i].cveClasificacionDelitoOrden;
                }
                if ($("#cmbComision").val() != "") {
                    $("#hiddenComision").val(json.resultados[i].cveComision);
                    strDatos += "&cveComision=" + json.resultados[i].cveComision;
                }
                if ($("#cmbFormaAccion").val() != "") {
                    $("#hiddenFormaAccion").val(json.resultados[i].cveFormaAccion);
                    strDatos += "&cveFormaAccion=" + json.resultados[i].cveFormaAccion;
                }
                if ($("#cmbModalidad").val() != "") {
                    $("#hiddenModalidad").val(json.resultados[i].cveModalidad);
                    strDatos += "&cveModalidad=" + json.resultados[i].cveModalidad;
                }
                if ($("#cmbElementoComision").val() != "") {
                    $("#hiddenElementoComision").val(json.resultados[i].cveElementoComision);
                    strDatos += "&cveElementoComision=" + json.resultados[i].cveElementoComision;
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
                if ($("#checkMunicipio").is(":checked")) {
                    if (json.resultados[i].cveMunicipio != null) {
                        $("#hiddenMunicipio").val(json.resultados[i].cveMunicipio);
                        strDatos += "&cveMunicipio=" + json.resultados[i].cveMunicipio;
                    }
                } else {
                    strDatos += "&cveRegion=" + json.resultados[i].cveRegion;
                    $("#hiddenDesRegion").val(json.resultados[i].desRegion);
                    $("#hiddenCveRegion").val(json.resultados[i].cveRegion);
                }
            }
            if (nivel == 4) {

                if ($("#cmbConcursos").val() != "") {
                    $("#hiddenConcursos").val(json.resultados[i].cveConcurso);
                    strDatos += "&cveConcurso=" + json.resultados[i].cveConcurso;
                }
                if ($("#cmbClasDelitos").val() != "") {
                    $("#hiddenClasificacionDelitos").val(json.resultados[i].cveClasificacionDelito);
                    strDatos += "&cveClasificacionDelito=" + json.resultados[i].cveClasificacionDelito;
                }
                if ($("#cmbClasDelitosOrden").val() != "") {
                    $("#hiddenClasificacionDelitosOrden").val(json.resultados[i].cveClasificacionDelitoOrden);
                    strDatos += "&cveClasificacionDelitoOrden=" + json.resultados[i].cveClasificacionDelitoOrden;
                }
                if ($("#cmbComision").val() != "") {
                    $("#hiddenComision").val(json.resultados[i].cveComision);
                    strDatos += "&cveComision=" + json.resultados[i].cveComision;
                }
                if ($("#cmbFormaAccion").val() != "") {
                    $("#hiddenFormaAccion").val(json.resultados[i].cveFormaAccion);
                    strDatos += "&cveFormaAccion=" + json.resultados[i].cveFormaAccion;
                }
                if ($("#cmbModalidad").val() != "") {
                    $("#hiddenModalidad").val(json.resultados[i].cveModalidad);
                    strDatos += "&cveModalidad=" + json.resultados[i].cveModalidad;
                }
                if ($("#cmbElementoComision").val() != "") {
                    $("#hiddenElementoComision").val(json.resultados[i].cveElementoComision);
                    strDatos += "&cveElementoComision=" + json.resultados[i].cveElementoComision;
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

                if ($("#checkMunicipio").is(":checked")) {
                    $("#hiddenMunicipio").val(json.resultados[i].cveMunicipio);
                    strDatos += "&cveMunicipio=" + json.resultados[i].cveMunicipio;
                } else {
                    strDatos += "&cveDistrito=" + json.resultados[i].cveDistrito;
                    $("#hiddenDesDistrito").val(json.resultados[i].desDistrito);
                    $("#hiddenCveDistrito").val(json.resultados[i].cveDistrito);
                }
            }
            if (nivel == 5) {
                if ($("#cmbConcursos").val() != "") {
                    $("#hiddenConcursos").val(json.resultados[i].cveConcurso);
                    strDatos += "&cveConcurso=" + json.resultados[i].cveConcurso;
                }
                if ($("#cmbClasDelitos").val() != "") {
                    $("#hiddenClasificacionDelitos").val(json.resultados[i].cveClasificacionDelito);
                    strDatos += "&cveClasificacionDelito=" + json.resultados[i].cveClasificacionDelito;
                }
                if ($("#cmbClasDelitosOrden").val() != "") {
                    $("#hiddenClasificacionDelitosOrden").val(json.resultados[i].cveClasificacionDelitoOrden);
                    strDatos += "&cveClasificacionDelitoOrden=" + json.resultados[i].cveClasificacionDelitoOrden;
                }
                if ($("#cmbComision").val() != "") {
                    $("#hiddenComision").val(json.resultados[i].cveComision);
                    strDatos += "&cveComision=" + json.resultados[i].cveComision;
                }
                if ($("#cmbFormaAccion").val() != "") {
                    $("#hiddenFormaAccion").val(json.resultados[i].cveFormaAccion);
                    strDatos += "&cveFormaAccion=" + json.resultados[i].cveFormaAccion;
                }
                if ($("#cmbModalidad").val() != "") {
                    $("#hiddenModalidad").val(json.resultados[i].cveModalidad);
                    strDatos += "&cveModalidad=" + json.resultados[i].cveModalidad;
                }
                if ($("#cmbElementoComision").val() != "") {
                    $("#hiddenElementoComision").val(json.resultados[i].cveElementoComision);
                    strDatos += "&cveElementoComision=" + json.resultados[i].cveElementoComision;
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

                if ($("#checkMunicipio").is(":checked")) {
                    $("#hiddenMunicipio").val(json.resultados[i].cveMunicipio);
                    strDatos += "&cveMunicipio=" + json.resultados[i].cveMunicipio;
                } else {
                    strDatos += "&cveJuzgado=" + json.resultados[i].cveJuzgado;
                }
                strDatos += "&detalles=detalle";

            }
            $("#hiddenVariables").val(strDatos);
            consultarReporteDelitos(bandera, nivel);
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
                    table += "<th>N&uacute;m.</th><th  >Estado</th>";
                    if ($("#checkConsumaciones").is(":checked")) {
                        table += "<th>Consumaci&oacuten</th>";
                    }
                    if ($("#checkDelitos").is(":checked")) {
                        table += "<th >Delito</th> ";
                    }
                    if ($("#checkMunicipio").is(":checked")) {
                        table += "<th>Municipio</th> ";
                    }

                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th colspan='4'>Clasificacion delito</th> <th colspan='4'>Concurso</th> <th colspan='5'>Clasificacion delito Orden</th> ";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th colspan='4'>Comisi&oacute;n</th> <th colspan='4'>Forma de &acci&oacute;n</th> <th colspan='7'>Modalidad</th> <th colspan='6'>Elemento para la comision</th>";
                    }

                    if ((!($("#checkCarEjecu").is(":checked")) && !($("#checkClasDelitos").is(":checked")))) {

                        table += "<th >Subtotal</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "</tr><tr style='-webkit-writing-mode: vertical-lr; writing-mode: vertical-lr; text-align: center'><th></th><th></th><th></th><th></th> <th > Culposo </th> <th> Doloso </th> <th> No aplica </th> <th> No especificado </th> <th> Con violencia </th> <th> Sin violencia </th><th> No aplica </th><th> No especificado </th> <th> Agravado </th> <th> Atenuado </th><th> Calificado </th><th> Calificado-Agravado </th><th> Simple </th><th> No aplica </th> <th> No especificado </th><th> Con alguna parte del cuerpo </th> <th> Con arma blanca </th> <th> Con arma de fuego </th> <th> Con otro elemento </th> <th> No aplica </th><th> No especificado </th> </tr>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "</tr><tr style=' writing-mode: vertical-lr; text-align: center'><th></th><th></th><th></th><th></th> <th > Grave </th> <th> No grave </th> <th> No aplica </th> <th> No especificado </th> <th> Ideal </th> <th> Real </th><th> No aplica </th><th> No especificado </th> <th> Instantaneo </th> <th> Permanente </th><th> Continuo </th><th> No aplica </th><th> No Especificado </th> </tr>";
                    }
                    table += "</thead><tbody>";

                    for (var i = 0; i < json.totalCount; i++) {

                        if ($("#checkMunicipio").is(":checked")) {
                            table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 5 + "," + jsonDatos + "," + i + ")'>";
                        } else {
                            table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 2 + "," + jsonDatos + "," + i + ")'>";
                        }
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>M&eacutexico</td>";
                        if ($("#checkConsumaciones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsumacion + "</td>";
                        }
                        if ($("#checkDelitos").is(":checked")) {
                            if (json.resultados[i].desDelito.length > 30) {
                                table += '<td >' + json.resultados[i].desDelito + "</td>";
                            } else {
                                table += "<td >" + json.resultados[i].desDelito + "</td>";
                            }

                        }

                        if ($("#checkMunicipio").is(":checked")) {
                            table += "<td>" + json.resultados[i].desMunicipio + "</td>";
                        }

                        if ($("#checkClasDelitos").is(":checked")) {

                            table += "   <td > " + json.resultados[i].grave + " </td> <td> " + json.resultados[i].noGrave + " </td><td> " + json.resultados[i].noAplica + " </td><td> " + json.resultados[i].noEspecificado + "    </td> ";
                            table += "    <td > " + json.resultados[i].ideal + " </td> <td> " + json.resultados[i].real3 + " </td><td> " + json.resultados[i].noAplica3 + " </td> <td> " + json.resultados[i].noEspecificado3 + "    </td> ";
                            table += "    <td > " + json.resultados[i].instantaneo + " </td> <td> " + json.resultados[i].permanente + " </td><td> " + json.resultados[i].continuo + " </td> <td> " + json.resultados[i].noAplica2 + " </td> <td> " + json.resultados[i].noEspecificado2 + "    </td> ";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "   <td > " + json.resultados[i].culposo + " </td> <td> " + json.resultados[i].doloso + " </td><td> " + json.resultados[i].noAplica + " </td><td> " + json.resultados[i].noEspecificado + "    </td> ";
                            table += "    <td > " + json.resultados[i].conViolencia + " </td> <td> " + json.resultados[i].sinViolencia + " </td><td> " + json.resultados[i].noAplica2 + " </td> <td> " + json.resultados[i].noEspecificado2 + "    </td> ";
                            table += "    <td > " + json.resultados[i].agravado + " </td> <td> " + json.resultados[i].atenuado + " </td><td> " + json.resultados[i].calificado + " </td><td> " + json.resultados[i].calificadoAgravado + " </td><td> " + json.resultados[i].simple + " </td> <td> " + json.resultados[i].noAplica3 + " </td> <td> " + json.resultados[i].noEspecificado3 + "</td> ";
                            table += "    <td > " + json.resultados[i].parteCuerpo + " </td> <td> " + json.resultados[i].armaBlanca + " </td><td> " + json.resultados[i].armaFuego + " </td><td> " + json.resultados[i].otroElemento + " </td> <td> " + json.resultados[i].noAplica4 + " </td> <td> " + json.resultados[i].noEspecificado4 + "    </td> ";
                        }
                        if ((!($("#checkCarEjecu").is(":checked")) && !($("#checkClasDelitos").is(":checked")))) {
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                        }
                        subtotal += parseInt(json.resultados[i].totalCount);
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
                    if ($("#checkMunicipio").is(":checked")) {
                        table += "<th>Municipio</th>";
                    }

                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th colspan='4'>Clasificacion delito</th> <th colspan='4'>Concurso</th> <th colspan='5'>Clasificacion delito Orden</th> ";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th colspan='4'>Comisi&oacute;n</th> <th colspan='4'>Forma de &acci&oacute;n</th> <th colspan='7'>Modalidad</th> <th colspan='6'>Elemento para la comision</th>";
                    }

                    if ((!($("#checkCarEjecu").is(":checked")) && !($("#checkClasDelitos").is(":checked")))) {

                        table += "<th >Subtotal</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "</tr><tr style='-webkit-writing-mode: vertical-lr; writing-mode: vertical-lr; text-align: center'><th></th><th></th><th></th><th></th> <th > Culposo </th> <th> Doloso </th> <th> No aplica </th> <th> No especificado </th> <th> Con violencia </th> <th> Sin violencia </th><th> No aplica </th><th> No especificado </th> <th> Agravado </th> <th> Atenuado </th><th> Calificado </th><th> Calificado-Agravado </th><th> Simple </th><th> No aplica </th> <th> No especificado </th><th> Con alguna parte del cuerpo </th> <th> Con arma blanca </th> <th> Con arma de fuego </th> <th> Con otro elemento </th> <th> No aplica </th><th> No especificado </th> </tr>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "</tr><tr style=' writing-mode: vertical-lr; text-align: center'><th></th><th></th><th></th><th></th> <th > Grave </th> <th> No grave </th> <th> No aplica </th> <th> No especificado </th> <th> Ideal </th> <th> Real </th><th> No aplica </th><th> No especificado </th> <th> Instantaneo </th> <th> Permanente </th><th> Continuo </th><th> No aplica </th><th> No Especificado </th> </tr>";
                    }

                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {
                        table += "<tr style='cursor: pointer;' onclick='gestorConsulta(" + true + "," + 3 + "," + jsonDatos + "," + i + ")'>";
                        table += "<td > " + (i + 1 + indice) + "</td>";
                        table += "<td>" + json.resultados[i].desRegion + "</td>";
                        if ($("#checkConsumaciones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsumacion + "</td>";
                        }
                        if ($("#checkDelitos").is(":checked")) {
                            table += "<td>" + json.resultados[i].desDelito + "</td>";
                        }
                        if ($("#checkMunicipio").is(":checked")) {
                            table += "<td>" + json.resultados[i].desMunicipio + "</td>";
                        }

                        if ($("#checkClasDelitos").is(":checked")) {


                            table += "   <td > " + json.resultados[i].grave + " </td> <td> " + json.resultados[i].noGrave + " </td><td> " + json.resultados[i].noAplica + " </td><td> " + json.resultados[i].noEspecificado + "    </td> ";
                            table += "    <td > " + json.resultados[i].ideal + " </td> <td> " + json.resultados[i].real3 + " </td><td> " + json.resultados[i].noAplica3 + " </td> <td> " + json.resultados[i].noEspecificado3 + "    </td> ";
                            table += "    <td > " + json.resultados[i].instantaneo + " </td> <td> " + json.resultados[i].permanente + " </td><td> " + json.resultados[i].continuo + " </td> <td> " + json.resultados[i].noAplica2 + " </td> <td> " + json.resultados[i].noEspecificado2 + "    </td> ";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "   <td > " + json.resultados[i].culposo + " </td> <td> " + json.resultados[i].doloso + " </td><td> " + json.resultados[i].noAplica + " </td><td> " + json.resultados[i].noEspecificado + "    </td> ";
                            table += "    <td > " + json.resultados[i].conViolencia + " </td> <td> " + json.resultados[i].sinViolencia + " </td><td> " + json.resultados[i].noAplica2 + " </td> <td> " + json.resultados[i].noEspecificado2 + "    </td> ";
                            table += "    <td > " + json.resultados[i].agravado + " </td> <td> " + json.resultados[i].atenuado + " </td><td> " + json.resultados[i].calificado + " </td><td> " + json.resultados[i].calificadoAgravado + " </td><td> " + json.resultados[i].simple + " </td> <td> " + json.resultados[i].noAplica3 + " </td> <td> " + json.resultados[i].noEspecificado3 + "</td> ";
                            table += "    <td > " + json.resultados[i].parteCuerpo + " </td> <td> " + json.resultados[i].armaBlanca + " </td><td> " + json.resultados[i].armaFuego + " </td><td> " + json.resultados[i].otroElemento + " </td> <td> " + json.resultados[i].noAplica4 + " </td> <td> " + json.resultados[i].noEspecificado4 + "    </td> ";
                        }
                        if ((!($("#checkCarEjecu").is(":checked")) && !($("#checkClasDelitos").is(":checked")))) {
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                        }
                        subtotal += parseInt(json.resultados[i].totalCount);
                        table += "</tr> ";
                    }
                    break;
                case "3":

                    table += "<th>N&uacute;m.</th><th>Distrito</th>";
                    titulo2 += "<label>Estado: M&Eacute;XICO </label><br>";
                    titulo2 += "<label>Regi\u00F3n: " + json.resultados[0].desRegion + "</label><br>";
                    if ($("#checkConsumaciones").is(":checked")) {
                        table += "<th>Consumaci&oacuten</th>";
                    }
                    if ($("#checkDelitos").is(":checked")) {
                        table += "<th>Delito</th>";
                    }
                    if ($("#checkMunicipio").is(":checked")) {
                        table += "<th>Municipio</th>";
                    }

                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th colspan='4'>Clasificacion delito</th> <th colspan='4'>Concurso</th> <th colspan='5'>Clasificacion delito Orden</th> ";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th colspan='4'>Comisi&oacute;n</th> <th colspan='4'>Forma de &acci&oacute;n</th> <th colspan='7'>Modalidad</th> <th colspan='6'>Elemento para la comision</th>";
                    }

                    if ((!($("#checkCarEjecu").is(":checked")) && !($("#checkClasDelitos").is(":checked")))) {

                        table += "<th >Subtotal</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "</tr><tr style='-webkit-writing-mode: vertical-lr; writing-mode: vertical-lr; text-align: center'><th></th><th></th><th></th><th></th> <th > Culposo </th> <th> Doloso </th> <th> No aplica </th> <th> No especificado </th> <th> Con violencia </th> <th> Sin violencia </th><th> No aplica </th><th> No especificado </th> <th> Agravado </th> <th> Atenuado </th><th> Calificado </th><th> Calificado-Agravado </th><th> Simple </th><th> No aplica </th> <th> No especificado </th><th> Con alguna parte del cuerpo </th> <th> Con arma blanca </th> <th> Con arma de fuego </th> <th> Con otro elemento </th> <th> No aplica </th><th> No especificado </th> </tr>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "</tr><tr style=' writing-mode: vertical-lr; text-align: center'><th></th><th></th><th></th><th></th> <th > Grave </th> <th> No grave </th> <th> No aplica </th> <th> No especificado </th> <th> Ideal </th> <th> Real </th><th> No aplica </th><th> No especificado </th> <th> Instantaneo </th> <th> Permanente </th><th> Continuo </th><th> No aplica </th><th> No Especificado </th> </tr>";
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
                            table += "<td>" + json.resultados[i].desDelito + "</td>";
                        }
                        if ($("#checkMunicipio").is(":checked")) {
                            table += "<td>" + json.resultados[i].desMunicipio + "</td>";
                        }

                        if ($("#checkClasDelitos").is(":checked")) {


                            table += "   <td > " + json.resultados[i].grave + " </td> <td> " + json.resultados[i].noGrave + " </td><td> " + json.resultados[i].noAplica + " </td><td> " + json.resultados[i].noEspecificado + "    </td> ";
                            table += "    <td > " + json.resultados[i].ideal + " </td> <td> " + json.resultados[i].real3 + " </td><td> " + json.resultados[i].noAplica3 + " </td> <td> " + json.resultados[i].noEspecificado3 + "    </td> ";
                            table += "    <td > " + json.resultados[i].instantaneo + " </td> <td> " + json.resultados[i].permanente + " </td><td> " + json.resultados[i].continuo + " </td> <td> " + json.resultados[i].noAplica2 + " </td> <td> " + json.resultados[i].noEspecificado2 + "    </td> ";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "   <td > " + json.resultados[i].culposo + " </td> <td> " + json.resultados[i].doloso + " </td><td> " + json.resultados[i].noAplica + " </td><td> " + json.resultados[i].noEspecificado + "    </td> ";
                            table += "    <td > " + json.resultados[i].conViolencia + " </td> <td> " + json.resultados[i].sinViolencia + " </td><td> " + json.resultados[i].noAplica2 + " </td> <td> " + json.resultados[i].noEspecificado2 + "    </td> ";
                            table += "    <td > " + json.resultados[i].agravado + " </td> <td> " + json.resultados[i].atenuado + " </td><td> " + json.resultados[i].calificado + " </td><td> " + json.resultados[i].calificadoAgravado + " </td><td> " + json.resultados[i].simple + " </td> <td> " + json.resultados[i].noAplica3 + " </td> <td> " + json.resultados[i].noEspecificado3 + "</td> ";
                            table += "    <td > " + json.resultados[i].parteCuerpo + " </td> <td> " + json.resultados[i].armaBlanca + " </td><td> " + json.resultados[i].armaFuego + " </td><td> " + json.resultados[i].otroElemento + " </td> <td> " + json.resultados[i].noAplica4 + " </td> <td> " + json.resultados[i].noEspecificado4 + "    </td> ";
                        }
                        if ((!($("#checkCarEjecu").is(":checked")) && !($("#checkClasDelitos").is(":checked")))) {
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                        }
                        subtotal += parseInt(json.resultados[i].totalCount);
                        table += "</tr> ";
                    }
                    break;
                case "4":
                    table += "<th>N&uacute;m.</th><th>Juzgado</th>";
                    titulo2 += "<label>Estado: M&Eacute;XICO </label><br>";
                    titulo2 += "<label>Regi&oacute;n: " + json.resultados[0].desRegion + "</label><br>";
                    titulo2 += "<label>Distrito: " + json.resultados[0].desDistrito + "</label>";
                    if ($("#checkConsumaciones").is(":checked")) {
                        table += "<th>Consumaci&oacuten</th>";
                    }
                    if ($("#checkDelitos").is(":checked")) {
                        table += "<th>Delito</th>";
                    }
                    if ($("#checkMunicipio").is(":checked")) {
                        table += "<th>Municipio</th> ";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "<th colspan='4'>Clasificacion delito</th> <th colspan='4'>Concurso</th> <th colspan='5'>Clasificacion delito Orden</th> ";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "<th colspan='4'>Comisi&oacute;n</th> <th colspan='4'>Forma de &acci&oacute;n</th> <th colspan='7'>Modalidad</th> <th colspan='6'>Elemento para la comision</th>";
                    }

                    if ((!($("#checkCarEjecu").is(":checked")) && !($("#checkClasDelitos").is(":checked")))) {

                        table += "<th >Subtotal</th>";
                    }
                    if ($("#checkCarEjecu").is(":checked")) {
                        table += "</tr><tr style='-webkit-writing-mode: vertical-lr; writing-mode: vertical-lr; text-align: center'><th></th><th></th><th></th><th></th> <th > Culposo </th> <th> Doloso </th> <th> No aplica </th> <th> No especificado </th> <th> Con violencia </th> <th> Sin violencia </th><th> No aplica </th><th> No especificado </th> <th> Agravado </th> <th> Atenuado </th><th> Calificado </th><th> Calificado-Agravado </th><th> Simple </th><th> No aplica </th> <th> No especificado </th><th> Con alguna parte del cuerpo </th> <th> Con arma blanca </th> <th> Con arma de fuego </th> <th> Con otro elemento </th> <th> No aplica </th><th> No especificado </th> </tr>";
                    }
                    if ($("#checkClasDelitos").is(":checked")) {
                        table += "</tr><tr style=' writing-mode: vertical-lr; text-align: center'><th></th><th></th><th></th><th></th> <th > Grave </th> <th> No grave </th> <th> No aplica </th> <th> No especificado </th> <th> Ideal </th> <th> Real </th><th> No aplica </th><th> No especificado </th> <th> Instantaneo </th> <th> Permanente </th><th> Continuo </th><th> No aplica </th><th> No especificado </th> </tr>";
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
                            table += "<td>" + json.resultados[i].desDelito + "</td>";
                        }
                        if ($("#checkMunicipio").is(":checked")) {
                            table += "<td>" + json.resultados[i].desMunicipio + "</td>";
                        }
                        if ($("#checkClasDelitos").is(":checked")) {


                            table += "   <td > " + json.resultados[i].grave + " </td> <td> " + json.resultados[i].noGrave + " </td><td> " + json.resultados[i].noAplica + " </td><td> " + json.resultados[i].noEspecificado + "    </td> ";
                            table += "    <td > " + json.resultados[i].ideal + " </td> <td> " + json.resultados[i].real3 + " </td><td> " + json.resultados[i].noAplica3 + " </td> <td> " + json.resultados[i].noEspecificado3 + "    </td> ";
                            table += "    <td > " + json.resultados[i].instantaneo + " </td> <td> " + json.resultados[i].permanente + " </td><td> " + json.resultados[i].continuo + " </td> <td> " + json.resultados[i].noAplica2 + " </td> <td> " + json.resultados[i].noEspecificado2 + "    </td> ";
                        }
                        if ($("#checkCarEjecu").is(":checked")) {
                            table += "   <td > " + json.resultados[i].culposo + " </td> <td> " + json.resultados[i].doloso + " </td><td> " + json.resultados[i].noAplica + " </td><td> " + json.resultados[i].noEspecificado + "    </td> ";
                            table += "    <td > " + json.resultados[i].conViolencia + " </td> <td> " + json.resultados[i].sinViolencia + " </td><td> " + json.resultados[i].noAplica2 + " </td> <td> " + json.resultados[i].noEspecificado2 + "    </td> ";
                            table += "    <td > " + json.resultados[i].agravado + " </td> <td> " + json.resultados[i].atenuado + " </td><td> " + json.resultados[i].calificado + " </td><td> " + json.resultados[i].calificadoAgravado + " </td><td> " + json.resultados[i].simple + " </td> <td> " + json.resultados[i].noAplica3 + " </td> <td> " + json.resultados[i].noEspecificado3 + "</td> ";
                            table += "    <td > " + json.resultados[i].parteCuerpo + " </td> <td> " + json.resultados[i].armaBlanca + " </td><td> " + json.resultados[i].armaFuego + " </td><td> " + json.resultados[i].otroElemento + " </td> <td> " + json.resultados[i].noAplica4 + " </td> <td> " + json.resultados[i].noEspecificado4 + "    </td> ";
                        }
                        if ((!($("#checkCarEjecu").is(":checked")) && !($("#checkClasDelitos").is(":checked")))) {
                            table += "<td>" + json.resultados[i].totalCount + "</td>";
                        }
                        subtotal += parseInt(json.resultados[i].totalCount);
                        table += "</tr> ";
                    }
                    break;
                case "5":

                    if ($("#checkMunicipio").is(":checked")) {
                        table += "<th ide>N&uacute;m.</th><th ide>A&ntildeo</th><th >Numero de Investigaci&oacute;n</th><th>Juzgado</th>"
                        titulo2 += "<label>Municipio: " + json.resultados[0].desMunicipio + "</label><br>";
                    } else {
                        table += "<th ide>N&uacute;m.</th><th ide>A&ntildeo</th><th >Numero de Investigaci&oacute;n</th>"
                        titulo2 += "<label>Estado: M&Eacute;XICO </label><br>";
                        titulo2 += "<label>Regi&oacute;n: " + json.resultados[0].desRegion + "</label><br>";
                        titulo2 += "<label>Distrito: " + json.resultados[0].desDistrito + "</label><br>";
                        titulo2 += '<label>Juzgado: ' + json.resultados[0].desJuzgado + "</label>";
                    }
                    if ($("#checkConsumaciones").is(":checked")) {
                        table += "<th>Consumaci&oacuten</th>";
                    }

                    table += "<th>Delito</th>";



                    table += " <th>Tipo de Juzgado</th><th>Imputado</th><th>Ofendido</th> <th>Tipo Carpeta</th>";
                    table += "</tr></thead><tbody>";
                    for (var i = 0; i < json.totalCount; i++) {

                        table += "<tr>";
                        table += "<td ide> " + (i + 1 + indice) + "</td>";

                        table += "<td ide>" + json.resultados[i].anio + "</td>";
                        table += "<td >" + json.resultados[i].carpetaInv + "</td>";
                        if ($("#checkMunicipio").is(":checked")) {
                            table += "<td>" + json.resultados[i].desJuzgado + "</td>";
                        }
                        if ($("#checkConsumaciones").is(":checked")) {
                            table += "<td>" + json.resultados[i].desConsumacion + "</td>";
                        }
                        table += "<td>" + json.resultados[i].desDelito + "</td>";



                        table += "<td>" + json.resultados[i].desTipoJuzgado + "</td>";
                        if (json.resultados[i].icveTipoPersona == 1) {
                            table += "<td>" + json.resultados[i].inombre + " " + json.resultados[i].ipaterno + " " + json.resultados[i].imaterno + "</td>";
                        } else {
                            table += "<td>" + json.resultados[i].inombreMoral + "</td>";
                        }

                        if (json.resultados[i].ocveTipoPersona == 1) {
                            table += "<td>" + json.resultados[i].onombre + " " + json.resultados[i].opaterno + " " + json.resultados[i].omaterno + "</td>";
                        } else {
                            table += "<td>" + json.resultados[i].onombreMoral + "</td>";
                        }

                        table += "<td>" + json.resultados[i].desTipoCarpeta + ": " + json.resultados[i].numero + "/" + json.resultados[i].anio + "</td>";
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
            if (subtotal != 0 && $("#hiddenNivel").val() < 5) {
                $("#labelSubTotal").show();
                $("#labelSubTotal").text("Total: " + subtotal);
            } else {
                $("#labelSubTotal").hide();
            }
            $("#inputImprimir").show();
            $("#inputExportarPDF").show();
            $("#inputExportarExcel").show();
            $("#tblResultadosGridAct").DataTable({
                paging: false,
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
        }

        titulos = function () {
            var titulo = "Reporte de Delitos";
            if ($("#checkAnio").is(":checked")) {
                titulo += " en el A&ntilde;o " + $("#txtAnio").val();
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

            if ($("#checkMunicipio").is(":checked")) {
                titulo += " por Municipio ";
            }
            titulo += " en el Estado de Mexico.";

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

        consultarReporteDelitos = function (bandera, nivel) {
            $("#divConsulta").hide("slide");
            if ($("#cmbEstatusCarpeta").val() == 1) {
                $("#hiddenEstatusCarpeta").val("En tramite");
            } else if ($("#cmbEstatusCarpeta").val() == 2) {
                $("#hiddenEstatusCarpeta").val("terminada");
            } else {
                $("#hiddenEstatusCarpeta").val("Radicada");
            }
            var cantReg = $("#cmbNumReg").val();
            $("#hiddenNivel").val(nivel);
            if (bandera) {
                $("#inputRegresar2").show();
                $("#paginacion").hide();
                $("#cmbPaginacion").val(1);
            }

            var strDatos = "accion=ConsultarDelitos_Reporte";
            strDatos += "&nivel=" + $("#hiddenNivel").val();
            strDatos += "&activo=S";
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&paginacion=true";
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            strDatos += $("#hiddenVariables").val();
            if ($("#checkMes").is(":checked")) {
                strDatos += "&porMes=" + $("#cmbSelectMes").val();
                strDatos += "&anio=" + $("#txtAnio1").val();
                $("#hiddenAnio").val($("#txtAnio1").val());
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
                url: "../fachadas/sigejupe/reportes/ReporteDelitosFacade.Class.php",
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


                        if ($("#checkClasDelitos").is(":checked") || $("#checkCarEjecu").is(":checked")) {
                            graficar = false;
                        } else if ($("#checkDelitos").is(":checked")) {
                            categorias[i] = json.resultados[i].desDelito;
                        } else if ($("#checkConsumaciones").is(":checked")) {
                            categorias[i] = json.resultados[i].desConsumacion;
                        } else if ($("#checkMunicipio").is(":checked")) {
                            categorias[i] = json.resultados[i].desMunicipio;
                        } else {
                            categorias[i] = "DELITOS";
                        }

                        if ($("#checkDelitos").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                        } else if ($("#checkConsumaciones").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                        } else if ($("#checkDetenido").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                        } else {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
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
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                        } else if ($("#checkDetenido").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                        } else if ($("#checkDelitos").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                        } else {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
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
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                        } else if ($("#checkDetenido").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                        } else if ($("#checkMunicipio").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                        } else {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
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
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                        } else if ($("#checkConsumaciones").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                        } else if ($("#checkMunicipio").is(":checked")) {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
                        } else {
                            series[i] = parseInt(json.resultados[i].totalCount.replace(",", ""));
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
            var url = "../fachadas/sigejupe/reportes/ReporteDelitosFacade.Class.php";
            var strDatos = "accion=ConsultarDelitos_Reporte";
            var cantReg = $("#cmbNumReg").val();
            if ($("#checkMes").is(":checked")) {
                strDatos += "&porMes=" + $("#cmbSelectMes").val();
                strDatos += "&anio=" + $("#txtAnio1").val();
                $("#hiddenAnio").val($("#txtAnio1").val());
            }
            if ($("#checkRango").is(":checked")) {
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
                mensaje += " / Regi&oacute;n";
            }
            if ($("#hiddenNivel").val() == 3) {
                mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'> Regi&oacute;n</SPAN>";
                mensaje += " / Distrito";
            }
            if ($("#hiddenNivel").val() == 4) {
                mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'> Regi&oacute;n</SPAN>";
                mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(3,false);'>Distrito</SPAN>";
                mensaje += " / Juzgado";
            }
            if ($("#checkMunicipio").is(":checked")) {

                if ($("#hiddenNivel").val() == 5) {
                    mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                    mensaje += " / Detalles";
                }
            } else {

                if ($("#hiddenNivel").val() == 5) {
                    mensaje = " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(1,false);'>Total</span>";
                    mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(2,false);'>Regi&oacute;n</SPAN>";
                    mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(3,false);'>Distrito</SPAN>";
                    mensaje += " / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar(4,false);'>Juzgado</SPAN>";
                    mensaje += " / Detalles";
                }
            }
            /*if ($("#idGenero").is(':checked')) {
             mensaje += " X Genero";
             }
             if ($("#idEdad").is(':checked')) {
             mensaje += " X Edad";
             }*/
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(0,false);'>Reporte de Delitos</span>" + mensaje);
        };
        regresar = function (nivel, bandera) {
            if (bandera == 1) {
                if ($("#checkMunicipio").is(":checked")) {
                    nivel = 1;
                } else {
                    nivel = $("#hiddenNivel").val() - 1;
                }
            }
            $("#cmbNumReg").val(100);
            $("#cmbPaginacion").val(1);
            var strDatos = "";
            if (nivel == 0) {
                $("#h5titulo").html("Reporte de Delitos");
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
                    if ($("#hiddenConcursos").val() != "") {
                        strDatos += "&cveConcurso=" + $("#hiddenConcursos").val();
                    }
                    if ($("#hiddenClasificacionDelitos").val() != "") {
                        strDatos += "&cveClasificacionDelito=" + $("#hiddenClasificacionDelitos").val();
                    }
                    if ($("#hiddenClasificacionDelitosOrden").val() != "") {
                        strDatos += "&cveClasificacionDelitoOrden=" + $("#hiddenClasificacionDelitosOrden").val();
                    }
                    if ($("#hiddenDelitos").val() != "") {
                        strDatos += "&cveDelito=" + $("#hiddenDelitos").val();
                    }
                    if ($("#hiddenConsumaciones").val() != "") {
                        strDatos += "&cveConsumacion=" + $("#hiddenConsumaciones").val();
                    }
                    if ($("#hiddenMunicipio").val() != "") {
                        strDatos += "&cveMunicipio=" + $("#hiddenMunicipio").val();
                    }
                }
                if (nivel == 3) {
                    if ($("#hiddenConcursos").val() != "") {
                        strDatos += "&cveConcurso=" + $("#hiddenConcursos").val();
                    }
                    if ($("#hiddenClasificacionDelitos").val() != "") {
                        strDatos += "&cveClasificacionDelito=" + $("#hiddenClasificacionDelitos").val();
                    }
                    if ($("#hiddenClasificacionDelitosOrden").val() != "") {
                        strDatos += "&cveClasificacionDelitoOrden=" + $("#hiddenClasificacionDelitosOrden").val();
                    }
                    if ($("#hiddenDelitos").val() != "") {
                        strDatos += "&cveDelito=" + $("#hiddenDelitos").val();
                    }
                    if ($("#hiddenConsumaciones").val() != "") {
                        strDatos += "&cveConsumacion=" + $("#hiddenConsumaciones").val();
                    }
                    if ($("#hiddenMunicipio").val() != "") {
                        strDatos += "&cveMunicipio=" + $("#hiddenMunicipio").val();
                    } else {
                        strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                    }
                }
                if (nivel == 4) {
                    if ($("#hiddenConcursos").val() != "") {
                        strDatos += "&cveConcurso=" + $("#hiddenConcursos").val();
                    }
                    if ($("#hiddenClasificacionDelitos").val() != "") {
                        strDatos += "&cveClasificacionDelito=" + $("#hiddenClasificacionDelitos").val();
                    }
                    if ($("#hiddenClasificacionDelitosOrden").val() != "") {
                        strDatos += "&cveClasificacionDelitoOrden=" + $("#hiddenClasificacionDelitosOrden").val();
                    }
                    if ($("#hiddenDelitos").val() != "") {
                        strDatos += "&cveDelito=" + $("#hiddenDelitos").val();
                    }
                    if ($("#hiddenConsumaciones").val() != "") {
                        strDatos += "&cveConsumacion=" + $("#hiddenConsumaciones").val();
                    }
                    if ($("#hiddenMunicipio").val() != "") {
                        strDatos += "&cveMunicipio=" + $("#hiddenMunicipio").val();
                    } else {
                        strDatos += "&cveRegion=" + $("#hiddenCveRegion").val();
                        strDatos += "&cveDistrito=" + $("#hiddenCveDistrito").val();
                    }
                }
            }
            $("#hiddenVariables").val(strDatos);
            if (nivel > 0) {
                consultarReporteDelitos(true, nivel);
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
                                estatus = "En tramite";
                                $("#cmbEstatusCarpeta").append($('<option id="cmbEstatus' + json.data[i].cveEstatusCarpeta + '"></option>').val(json.data[i].cveEstatusCarpeta).html(estatus));
                            } else if (json.data[i].cveEstatusCarpeta == 2) {
                                estatus = "Terminada";
                                $("#cmbEstatusCarpeta").append($('<option id="cmbEstatus" value="">Radicada</option>'));
                                $("#cmbEstatusCarpeta").append($('<option id="cmbEstatus' + json.data[i].cveEstatusCarpeta + '"></option>').val(json.data[i].cveEstatusCarpeta).html(estatus));
                            }

                        }
                    }
                }, error: function (objeto, quepaso, otroobj) {
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
        cargarMunicipios = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
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
                            $("#cmbMunicipio").append($('<option id="cmbMunicipio' + json.data[i].cveMunicipio + '"></option>').val(json.data[i].cveMunicipio).html(json.data[i].desMunicipio));
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
            $('#hiddenMunicipio').val("");
            //        $('#hiddenConclusiones').val("");

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
        $(function () {
            obtenerPermisosFormulario('REPORTES', 'POR DELITOS');
            cargarTipoJuzgado();
            cargarEstatusCarpeta();
            cargarConsumaciones();
            cargarDelitos();
            cargarClasificiacionDelitos();
            cargarComision();
            cargarModalidad();
            cargarElementosComision();
            cargarClasificiacionDelitosOrden();
            cargarConcursos();
            cargarFormaAccion();
            cargarMunicipios();
            cargarTipoCarpeta();
            $("#anio1").val("");
            fechaBaseDatos(
                    {
                        txtfechaInicial: "fecha",
                        txtfechaFinal: "fecha"
                    }
            );
            $("#cmbEstatusCarpeta").change(function () {
                opcCheck = [];
                limpiarTabla();
                if ($("#checkConsumaciones").is(":checked")) {
                    $("#checkConsumaciones").removeAttr("checked");
                    esconderConsumaciones();
                }

                if ($("#cmbEstatusCarpeta").val() == 2) {
                    esconderConsumaciones();
                    opcCheck = [];
                    $("#divConsumacion").show();
                } else if ($("#cmbEstatusCarpeta").val() == 1) {
                    esconderConsumaciones();
                    opcCheck = [];
                    $("#divConsumacion").show();
                } else {
                }
            });
            $("#checkConsumaciones").click(function () {
                if ($("#checkConsumaciones").is(":checked")) {
                    opcCheck.push("1");
                    $("#divCmbConsumaciones").show();
                    $("#cmbConsumaciones").val("");
                    $("#divDelito").show();
                    $("#checkMunicipio").removeAttr("checked");
                    $("#divCmbMunicipio").hide();
                    $("#cmbMunicipio").val("");
                } else {
                    opcCheck.pop();
                    esconderConsumaciones();
                }
            });
            $("#checkMunicipio").click(function () {
                if ($("#checkMunicipio").is(":checked")) {
                    opcCheck.push("1");
                    $("#divCmbMunicipio").show();
                    $("#checkConsumaciones").removeAttr("checked");
                    esconderConsumaciones();
                } else {
                    $("#divCmbMunicipio").hide();
                    $("#cmbMunicipio").val("");
                    opcCheck.pop();
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
            $("#txtAnio").validaCampo('0123456789');
            $("#txtfechaInicial").datepicker(
                    {sideBySide: false,
                        locale: 'es',
                        dateFormat: 'dd/mm/yy'}
            );
            $("#txtfechaFinal").datepicker(
                    {sideBySide: false,
                        locale: 'es',
                        dateFormat: 'dd/mm/yy'}
            );
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