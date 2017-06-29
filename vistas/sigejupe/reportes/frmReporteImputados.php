<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
//version 14/01/2016
//:)

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
        .requerido {
            color: darkred;
        }
    </style>


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Reporte de Imputados
            </h5>
        </div>
        <div class="panel-body">
            <div class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-md-4" for="filtroAnio">Buscar por A&ntilde;o de causa</label>
                    <div class="col-md-5">
                        <input type="radio" name="filtroAnio" id="filtroAnio">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="filtroMes">Mes de Radicaci&oacute;n</label>
                    <div class="col-md-5">
                        <input type="radio" name="filtroPeriodo" id="filtroMes">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="filtroFechas">Rango de Fechas</label>
                    <div class="col-md-5">
                        <input type="radio" name="filtroPeriodo" id="filtroFechas">
                    </div>
                </div>
                <div style="clear: both;"></div>
                <div class="form-group" id="divFiltroAnio" style="display: none;">
                    <label class="control-label col-md-4" for="PaisNacimientoOfendido">
                        A&ntilde;o de causa <span class="requerido">(*)</span>
                    </label>
                    <div class="col-md-5">
                        <input type="text" id="anio" name="anio" class="form-control" maxlength="4" />
                    </div>
                </div>
                <div class="form-group" id="divFiltroMes" style="display: none;">
                    <label class="control-label col-md-4" for="cmbMes">Mes <span class="requerido">(*)</span></label>
                    <div class="col-md-5">
                        <select id="cmbMes" class="form-control" name="cmbMes">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12"></div>
                <div id="divFiltroFechas" style="display: none;">
                    <div class="form-group" id="divNombreImputado">
                        <label class="control-label col-md-4" for="fechaInicial">Fecha Inicial (radicaci&oacute;n) <span class="requerido">(*)</span></label>
                        <div class="col-md-5">
                            <input type="text" class="form-control mayuscula" id="fechaInicial" name="fechaInicial">
                        </div>
                    </div>
                    <div class="form-group" id="divPaternoImputado">
                        <label class="control-label col-md-4" for="fechaFinal">Fecha Final (radicaci&oacute;n) <span class="requerido">(*)</span></label>
                        <div class="col-md-5">
                            <input type="text" class="form-control mayuscula" id="fechaFinal" name="fechaFinal">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Buscar por Tipo de Juzgado</label>
                    <div class="col-md-5">
                        <select name="cveTipoJuzgado" id="cveTipoJuzgado" class="form-control">
                            <option value="0">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Buscar por Tipo de Persona</label>
                    <div class="col-md-5">
                        <select name="cveTipoPersona" id="cveTipoPersona" class="form-control">
                            <option value="0">Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Buscar por Tipo de violencia</label>
                    <div class="col-md-5">
                        <input type="checkbox" id="TipoViolencia" class="form-inline">
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
                    <label class="control-label col-md-4">Buscar por Modalidad de violencia</label>
                    <div class="col-md-5">
                        <input type="checkbox" id="ModalidadViolencia" class="form-inline" >
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
                    <label class="control-label col-md-4">Buscar por edad</label>
                    <div class="col-md-5">
                        <input type="checkbox" id="filtroEdad" name="filtroEdad">
                    </div>
                </div>
                <div id="divFiltroEdad" style="display: none;">
                    <div class="form-group" id="divEdadMinima">
                        <label class="control-label col-md-4">Edad M&iacute;nima</label>
                        <div class="col-md-5">
                            <input type="text" name="edadMinima" id="edadMinima" maxlength="3" class="form-control">
                        </div>
                    </div>
                    <div class="form-group" id="divEdadMaxima">
                        <label class="control-label col-md-4">Edad M&aacute;xima</label>
                        <div class="col-md-5">
                            <input type="text" name="edadMaxima" id="edadMaxima" maxlength="3" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Rangos de Edadades</label>
                        <div class="col-md-5">
                            <input type="checkbox" name="rangoEdad" id="rangoEdad" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" for="txtNombreTestigo">Desglosado por G&eacute;nero</label>
                    <div class="col-md-5">
                        <input type="checkbox" id="filtroGenero">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" >Mostrar Sentenciados</label>
                    <div class="col-md-5">
                        <input type="checkbox" id="filtroSentenciados">
                        <label class="requerido" id="nota" style="display: none;">NOTA: al seleccionar esta opci&oacute;n, s&oacute;lo se mostrar&aacute;n causas concluidas</label>
                    </div>
                </div>
                <div class="form-group" id="divNombreImputado">
                    <label class="control-label col-md-4" for="txtNombreTestigo">Tipo de Consulta</label>
                    <div class="col-md-5">
                        <select id="consultaPor" class="form-control">
                            <option value="0">Selecciona una opci&oacute;n</option>
                            <option value="1">Alfabetismo</option>
                            <option value="3">Delitos</option>
                            <option value="2">Dominio del Espa&ntilde;ol</option>
                            <!--<option value="3">Rango de Edad</option>-->
                            <option value="4">Familia Ling&uuml;istica</option>
                            <!--<option value="5">G&eacute;nero</option>-->
                            <option value="6">Grado de Estudios</option>
                            <option value="7">Grado de Participaci&oacute;n</option>
                            <option value="8">Lugar Habitual de Residencia</option>
                            <option value="9">Nacionalidad</option>
                            <option value="11">N&uacute;mero de Delitos</option>
                            <option value="10">Ocupaci&oacute;n</option>
                            <!--<option value="11">Tipo de Juzgado</option>-->
                        </select>
                    </div>
                </div>
                <div style="clear: both;"></div>
                <br>
                <br>
                <div class="form-group">

                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" id="inputBuscar" value="Consultar" onclick="consultarImputadosDomicilio();"> 
                        <input type="submit" class="btn btn-primary" id="imprimirGeneral" value="Imprimir" onclick="imprimir('divTableResult')" style="display: none;">
                        <input type="submit" class="btn btn-primary" id="imprimirRegiones" value="Imprimir" onclick="imprimir('divGeneralRegiones')" style="display: none;">
                        <input type="submit" class="btn btn-primary" id="imprimirDistritos" value="Imprimir" onclick="imprimir('divGeneralDistritos')" style="display: none;">
                        <input type="submit" class="btn btn-primary" id="imprimirJuzgados" value="Imprimir" onclick="imprimir('divGeneralJuzgados')" style="display: none;">
                        <input type="submit" class="btn btn-primary" id="imprimirDesglose" value="Imprimir" onclick="imprimir('divGeneralImputadosGenero')" style="display: none;">
                        <input type="submit" class="btn btn-primary" id="exportarGeneralPdf" value="exportar PDF" onclick="exportar('exportarPDF', 'divTableResult', 1);" style="display: none">
                        <input type="submit" class="btn btn-primary" id="exportarRegionesPdf" value="exportar PDF" onclick="exportar('exportarPDF', 'divGeneralRegiones', 2);" style="display: none">
                        <input type="submit" class="btn btn-primary" id="exportarDistritosPdf" value="exportar PDF" onclick="exportar('exportarPDF', 'divGeneralDistritos', 3);" style="display: none">
                        <input type="submit" class="btn btn-primary" id="exportarJuzgadosPdf" value="exportar PDF" onclick="exportar('exportarPDF', 'divGeneralJuzgados', 4);" style="display: none">
                        <input type="submit" class="btn btn-primary" id="exportarDesglosePdf" value="exportar PDF" onclick="exportar('exportarPDF', 'divGeneralImputadosGenero', 5);" style="display: none">
                        <input type="submit" class="btn btn-primary" id="exportarGeneralExcel" value="exportar Excel" onclick="exportar('exportarExcel', 'divTableResult', 1);" style="display: none">
                        <input type="submit" class="btn btn-primary" id="exportarRegionesExcel" value="exportar Excel" onclick="exportar('exportarExcel', 'divGeneralRegiones', 2);" style="display: none">
                        <input type="submit" class="btn btn-primary" id="exportarDistritosExcel" value="exportar Excel" onclick="exportar('exportarExcel', 'divGeneralDistritos', 3);" style="display: none">
                        <input type="submit" class="btn btn-primary" id="exportarJuzgadosExcel" value="exportar Excel" onclick="exportar('exportarExcel', 'divGeneralJuzgados', 4);" style="display: none">
                        <input type="submit" class="btn btn-primary" id="exportarDesgloseExcel" value="exportar Excel" onclick="exportar('exportarExcel', 'divGeneralImputadosGenero', 5);" style="display: none">
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar();"> 
                    </div>
                </div>
                <div class="form-group">
                    <div id="divAlertWarning" class="alert alert-warning alert-dismissable">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
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
                <br>
                <div class="form-group" style="text-align: center;">
                    <label class="control-label" id="idLabelDescripcion"></label> 
                </div>
                <br>
                <div id="rutaIntrospeccion"></div>
                <div id="divFormulario">
                    <div id="divConsulta" style="display: none" class="col-xs-12">
                        <center><div id="tituloGeneral"></div></center>
                        <br>
                        <div class="form-group col-md-4" style="padding: 10px">
                            <label class="control-label" id="totalRegGeneral"></label>
                        </div>
                        <div class="form-group col-md-4 pag2" style="display: none;">
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacionGeneral" id="cmbPaginacionGeneral" onchange="consultarImputadosDomicilio(0);">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4 pag2" style="display: none;">
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumRegGeneral" id="cmbNumRegGeneral" onchange="consultarImputadosDomicilio(1);">
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="400">400</option>
                                <option value="500">500</option>
                            </select>
                        </div>
                        <br>
                        <div id="divTableResult" class="col-xs-12">
                        </div>
                    </div>
                </div>
            </div>

            <div id="divReporte" style="display: none;">
                <!--<input type="submit" class="btn btn-primary" value="REGRESAR" onclick="changeDivForm(2)">-->
                <div class="form-group">
                    <div class="alert alert-warning alert-dismissable" id="div-advertenciaRegiones" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="divAlertDagerRegiones" class="alert alert-danger alert-dismissable">

                        <strong>Error!</strong> Mensaje
                    </div>
                </div>
                <center><div id="tituloRegiones"></div></center>
                <br>
                <div id="divGeneralRegiones"></div>
            </div>

            <div id="divReporteDistritos" style="display: none;">

                <div class="form-group">
                    <div class="alert alert-warning alert-dismissable" id="div-advertenciaDistritos" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="divAlertDagerDistritos" class="alert alert-danger alert-dismissable">

                        <strong>Error!</strong> Mensaje
                    </div>
                </div>
                <center><div id="tituloDistritos"></div></center>
                <br>
                <div id="divGeneralDistritos"></div>
            </div>

            <div id="divReporteJuzgados" style="display: none;">

                <div class="form-group">
                    <div class="alert alert-warning alert-dismissable" id="div-advertenciaJuzgados" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="divAlertDagerJuzgados" class="alert alert-danger alert-dismissable">

                        <strong>Error!</strong> Mensaje
                    </div>
                </div>
                <center><div id="tituloJuzgados"></div></center>
                <br>
                <div id="divGeneralJuzgados"></div>
            </div>

            <div id="divReporteImputadosGenero" style="display: none;">
                <div class="form-group">
                    <div class="alert alert-warning alert-dismissable" id="div-advertenciaImputadosGenero" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="divAlertDagerImputadosGenero" class="alert alert-danger alert-dismissable">

                        <strong>Error!</strong> Mensaje
                    </div>
                </div>
                <center><div id="tituloImputadosGenero"></div></center>
                <br>
                <input type="hidden" id="cveJuzgado">
                <input type="hidden" id="anioCausa">
                <input type="hidden" id="cveRegion">
                <input type="hidden" id="cveDistrito">
                <input type="hidden" id="campoConsulta">
                <input type="hidden" id="cveGenero">
                <input type="hidden" id="edad">
                <input type="hidden" id="modalidad">
                <input type="hidden" id="idTipoViolencia">
                <input type="hidden" id="datosImpresion">
                <input type="hidden" id="hiddenFechaHoy" value="">
                <input type="hidden" id="hiddenFechaHoraHoy" value="">
                <br>
                <div class="col-xs-12">
                    <div class="form-group col-md-4" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarPaginacionImputadosDesglose(0);">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarPaginacionImputadosDesglose(1);">
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="300">300</option>
                            <option value="400">400</option>
                            <option value="500">500</option>
                        </select>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div id="divGeneralImputadosGenero"></div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-10">&nbsp;</label>
                <div class="col-md-2">
                    <label id="labelSubTotal"></label>
                </div>
            </div>
            <div id="ifr" style="display: none;" >
                <form action="../fachadas/sigejupe/reportes/exportarReportes.php" id="formIframe" method="post" target="my_frame">
                    <!--<input type="hidden" name="contenido" id="contenidoIframe" value="" />-->
                    <textarea name="contenido" id="contenidoIframe"></textarea>
                    <input type="hidden" name="accion" id="accionIframe" value="" />
                    <input type="hidden" name="info" id="infoIframe" value="" />
                </form>
                <iframe name='my_frame' src='../fachadas/sigejupe/reportes/exportarReportes.php'></iframe>
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

        exportar = function (accion, div, nivel) {
            var usuario = '<?php echo $_SESSION["nombre"]; ?>';
            var nombreArchivo = "REPORTE_IMPUTADOS";
            var tituloReporte = $("#idLabelDescripcion").text();
            var rutaIntrospeccion = $("#rutaIntrospeccion").html();
            var subTotal = $("#labelSubTotal").text();
            var table = "";
            switch (nivel) {
                case 1:
                    table = "tblResultadosGrid";
                    break;
                case 2:
                    table = "tblResultadoRegiones";
                    break;
                case 3:
                    table = "tblResultadoDistritos";
                    break;
                case 4:
                    table = "tblResultadoJuzgados";
                    break;
                case 5:
                    table = "tblResultadoImputadosGenero";
                    break;
            }

            var columnas = [];
            $.each($("#" + table + " tr"), function () {
                $.each($(this).find('th'), function () {
                    columnas.push("1");
                });
            });


            $.each($("#" + table + " td"), function () {

                $(this).attr("id", "lng");
            });

            $.each($("#" + table + " th"), function () {
                $(this).attr("id", "lng");
            });

            var contenido = $("#" + div).html();
            var numPixeles = 0;
            if (columnas.length < 12) {
                numPixeles = (700 / columnas.length);
            } else {
                $.each($("#" + table + " td"), function () {
                    if ($(this).html().length > 30) {
                        $(this).attr("id", "os");
                    } else {
                        $(this).removeAttr("id");
                    }
                });

                numPixeles = (1450 / columnas.length);
            }

            contenido = contenido.replace('width="100%"', '');
            if ($("#checkTipoViolencia").is(":checked")) {
                contenido = contenido.replace(/Trata/g, 'T');
                contenido = contenido.replace(/Delincuencia Organizada/g, 'DO');
                contenido = contenido.replace(/Violencia de genero/g, 'VG');
                contenido = contenido.replace(/Acoso/g, 'A');
                contenido = '<label style="font-size:6pt; float:left;">T = Trata ,DO = Delincuencia Organizada,VG = Violencia de genero,A = Acoso</label><br>' + contenido;
                //contenido = contenido.replace(/Buscar:/g, '   <label style="font-size:6pt; float:left;">T = Trata ,DO = Delincuencia Organizada,VG = Violencia de genero,A = Acoso</label><br>');
            }
            contenido = contenido.replace(/Buscar:/g, '');
            contenido = contenido.replace(/width/g, '  ');
            contenido = contenido.replace(/id="lng"/g, 'style="width:' + numPixeles + 'px;"');
            contenido = contenido.replace(/id="os"/g, 'style="width:100px;"');
            contenido = contenido.replace(/<center>/g, '');
            contenido = contenido.replace(/<\/center>/g, '');
            contenido = contenido.replace(/<input(.*?)>/g, '');
            contenido = contenido.replace(/<\/b>/g, '');
            contenido = contenido.replace(/onclick="(.*?)"/g, '');
            contenido = contenido.replace(/<man>/g, '');
            contenido = contenido.replace(/<\/man>/g, '');
            rutaIntrospeccion = rutaIntrospeccion.replace(/<\/strong>/g, '');
            rutaIntrospeccion = rutaIntrospeccion.replace(/<strong>/g, '');
            fechaBaseDatos({hiddenFechaHoraHoy: "fecha-hora"});
            $("#contenidoIframe").val(contenido);
            $("#infoIframe").val(usuario + "&@" + tituloReporte + "&@" + nombreArchivo + "&@" + subTotal + "&@" + rutaIntrospeccion + "&@" + $("#hiddenFechaHoraHoy").val());
            $("#accionIframe").val(accion);
            $("#divAlertInfo").html("Generando Archivo");
            $("#divAlertInfo").show("slide");
            setTimeAlert("divAlertInfo");
            $("#formIframe").submit();

        };

        validar = function () {
            if ($("#edadMinima").val() != "" && $("#edadMaxima").val() != "") {
                if ($("#edadMinima").val() > $("#edadMaxima").val()) {
                    $("#divAlertWarning").html("<span>Verifique el rango de edad capturado!</span>").fadeIn("slow").delay(3000).fadeOut("slow");
                    return false;
                } else {
                    return true;
                }
            } else if ($("#filtroAnio").is(":checked")) {
                if ($("#anio").val() == "") {
                    $("#divAlertWarning").html("<span>Capture el a&ntildeo de causa</span>").fadeIn("slow").delay(3000).fadeOut("slow");
                    return false;
                } else {
                    return true;
                }
            } else if ($("#filtroMes").is(":checked")) {
                if ($("#anio").val() == "") {
                    $("#divAlertWarning").html("<span>Capture el a&ntildeo de causa</span>").fadeIn("slow").delay(3000).fadeOut("slow");
                    return false;
                } else if ($("#cmbMes").val() == '0' || $("#cmbMes").val() == '') {
                    $("#divAlertWarning").html("<span>Seleccione el mes de la causa</span>").fadeIn("slow").delay(3000).fadeOut("slow");
                    return false;
                } else {
                    return true;
                }
            } else if ($("#filtroFechas").is(":checked")) {
                if ($("#fechaInicial").val() == "" || $("#fechaFinal").val() == "") {
                    $("#divAlertWarning").html("<span>La fecha inicial y fecha final son requeridas</span>").fadeIn("slow").delay(3000).fadeOut("slow");
                    return false;
                } else {
                    return true;
                }
            } else {
                return true;
            }
        };

        function ucFirstAllWords(str) {
            str = str.toLowerCase();
            var pieces = str.split(" ");
            for (var i = 0; i < pieces.length; i++) {
                var j = pieces[i].charAt(0).toUpperCase();
                pieces[i] = j + pieces[i].substr(1);
            }
            return pieces.join(" ");
        }

        function limpiarTabla() {
            $("#idLabelDescripcion").text("");
            $("#labelSubTotal").text("");
            $("#divTableResult").html("");
            $(".pag2").hide();
        }

        //**************************** Consulta de Imputados *************************************
        consultarImputadosDomicilio = function (Aux) {
            if (Aux == 1) {
                $("#cmbPaginacionGeneral").val(1);
                //$("#cmbNumRegGeneral").val(10);       
            }
            changeDivForm(2);
            $("#divAlerWarning").empty();
            $("#divTableResult").empty();
            $("#imprimirRegiones").hide();
            $("#imprimirDistritos").hide();
            $("#imprimirJuzgados").hide();
            $("#imprimirDesglose").hide();
            $("#exportarRegionesPdf").hide();
            $("#exportarDistritosPdf").hide();
            $("#exportarJuzgadosPdf").hide();
            $("#exportarDesglosePdf").hide();
            $("#exportarRegionesExcel").hide();
            $("#exportarDistritosExcel").hide();
            $("#exportarJuzgadosExcel").hide();
            $("#exportarDesgloseExcel").hide();
            $("#rutaIntrospeccion").html("");
            $("#idLabelDescripcion").html("");
            var totalImputados = 0;
            var tipoConsulta = $("#consultaPor").val();
            var cveMes = $("#cmbMes").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var cveTipoJuzgado = $("#cveTipoJuzgado").val();
            var desgloseGenero = "";
            var rangoEdad = "";
            var totalRegistros = 0;
            var mostrarSentenciados = "";
            if ($("#filtroGenero").is(":checked")) {
                desgloseGenero = "S";
            } else {
                desgloseGenero = "N";
            }
            if ($("#rangoEdad").is(":checked")) {
                rangoEdad = "S";
            } else {
                rangoEdad = "N";
            }
            if ($("#filtroSentenciados").is(":checked")) {
                mostrarSentenciados = "S";
            } else {
                mostrarSentenciados = "N";
            }
            var edadMinima = $("#edadMinima").val();
            var edadMaxima = $("#edadMaxima").val();
            var campoConsulta = "";
            var mostrarTipoViolencia = "";
            var mostrarModalidadViolencia = "";
            if ($("#TipoViolencia").is(":checked")) {
                mostrarTipoViolencia = "S";
            } else {
                mostrarTipoViolencia = "N";
            }
            if ($("#ModalidadViolencia").is(":checked")) {
                mostrarModalidadViolencia = "S";
            } else {
                mostrarModalidadViolencia = "N";
            }
            if (validar()) {

                var strDatos = "accion=consultaGeneralImputados";
                strDatos += "&activo=S";
                strDatos += "&anio=" + $("#anio").val();
                strDatos += "&cveMes=" + cveMes;
                strDatos += "&fechaInicial=" + fechaInicial;
                strDatos += "&fechaFinal=" + fechaFinal;
                strDatos += "&cveTipoJuzgado=" + cveTipoJuzgado;
                strDatos += "&desgloseGenero=" + desgloseGenero;
                strDatos += "&edadMinima=" + edadMinima;
                strDatos += "&edadMaxima=" + edadMaxima;
                strDatos += "&rangoEdad=" + rangoEdad;
                strDatos += "&consultarPor=" + tipoConsulta;
                strDatos += "&consultarSentenciados=" + mostrarSentenciados;
                strDatos += "&cveTipoPersona=" + $("#cveTipoPersona").val();
                strDatos += "&mostrarTipoViolencia=" + mostrarTipoViolencia;
                strDatos += "&mostrarModalidaViolencia=" + mostrarModalidadViolencia;
                strDatos += "&cveTipoViolencia=" + $("#cmbTipoViolencia").val();
                strDatos += "&cveModalidadViolencia=" + $("#cmbModalidadViolencia").val();
                strDatos += "&pagina=" + $("#cmbPaginacionGeneral").val();
                strDatos += "&registrosPorPagina=" + $("#cmbNumRegGeneral").val();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/reportes/ReporteimputadosFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        //                ToggleLoading(1);
                    },
                    success: function (datos) {
                        var json = "";
                        var table = "";
                        json = eval("(" + datos + ")"); //Parsear JSON
    //                    console.log(datos);
    //                    console.log(json);
                        if (json.totalCount > 0) {
                            totalRegistros = json.totalCount;
                            var texto = "";
                            if ($("#filtroSentenciados").is(":checked")) {
                                texto = "Reporte de Sentenciados";
                            } else {
                                texto = "Reporte de imputados";
                            }
                            if ($("#filtroAnio").is(":checked")) {
                                texto += " en el A&ntilde;o " + $("#anio").val();
                            } else if ($("#filtroMes").is(":checked")) {
                                texto += " en el mes de " + ucFirstAllWords($("#cmbMes :selected").text()) + " de " + $("#anio").val();
                            } else if ($("#filtroFechas").is(":checked")) {
                                texto += " de " + $("#fechaInicial").val() + " a " + $("#fechaFinal").val();
                            }
                            texto += " en el Estado de M&eacute;xico";

                            //$("#rutaIntrospeccion").html("Estado: <b>M&Eacute;XICO</b>");

                            $("#idLabelDescripcion").html(texto);

                            table += "<table id='tblResultadosGrid' border='1' cellspacing='0' class='table table-hover table-striped table-bordered'>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>No.</th>";
                            table += "<th>Estado</th>";
                            if (tipoConsulta == 1) {
                                table += "<th>Alfabetismo</th>";
                            } else if (tipoConsulta == 2) {
                                table += "<th>Dominio de Espa&ntilde;ol</th>";
                            } else if (tipoConsulta == 3) {
                                table += "<th>Delitos</th>";
                            } else if (tipoConsulta == 4) {
                                table += "<th>Familia Ling&uuml;istica</th>";
                            } else if (tipoConsulta == 5) {
                                table += "<th>G&eacute;nero</th>";
                            } else if (tipoConsulta == 6) {
                                table += "<th>Grado de Estudios</th>";
                            } else if (tipoConsulta == 7) {
                                table += "<th>Grado de Participaci&oacute;n</th>";
                            } else if (tipoConsulta == 8) {
                                table += "<th>Lugar habitual de residencia</th>";
                            } else if (tipoConsulta == 9) {
                                table += "<th>Pa&iacute;s Nacionalidad</th>";
                            } else if (tipoConsulta == 10) {
                                table += "<th>Ocupaci&oacute;n</th>";
                            } else if (tipoConsulta == 11) {
                                table += "<th>N&uacute;mero de Delitos</th>";
                            } else if (tipoConsulta == 12) {
                                table += "<th>Monto de la Multa</th>";
                            } else if (tipoConsulta == 13) {
                                table += "<th>Reparaci&oacute;n del Da&ntilde;o</th>";
                            } else if (tipoConsulta == 14) {
                                table += "<th>Tiempo en prisi&oacute;n</th>";
                            } else if (tipoConsulta == 15) {
                                table += "<th>Tipo de sentencia</th>";
                            } else if (tipoConsulta == 16) {
                                table += "<th>Procedimiento</th>";
                            } else if (tipoConsulta == 17) {
                                table += "<th>N&uacute;mero de Penas</th>";
                            }

                            if ($("#ModalidadViolencia").is(":checked")) {
                                table += "<th>Modalidad de Violencia</th>";
                            }
                            if ($("#cveTipoPersona").val() > 0) {
                                table += "<th>Tipo de persona</th>";
                            }
                            if (cveTipoJuzgado > 0) {
                                table += "<th>Tipo Juzgado</th>";
                            }
                            if ($("#rangoEdad").is(":checked")) {
                                table += "<th>Rango de Edad</th>";
                            }
                            if ($("#filtroGenero").is(":checked")) {
                                table += "<th>G&eacute;nero</th>";
                            }
                            if ($("#filtroMes").is(":checked")) {
                                table += "<th>Mes / A&ntilde;o</th>";
                            }
                            if ($("#TipoViolencia").is(":checked")) {

                                if ($("#cmbTipoViolencia").val() == 0) {
                                    table += "<th>Delincuencia organizada</th>";
                                    table += "<th>Violencia de G&eacute;nero</th>";
                                    table += "<th>Trata</th>";
                                    table += "<th>Acoso</th>";
                                } else {
                                    table += "<th>Tipo de Violencia</th>";
                                }

                            }
                            table += "<th>Subtotal</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            var i = 1;
                            var cadenaParametros = "";
                            var parametros = "";
                            $.each(json.resultados, function (k, vImputado) {
                                //console.log(vImputado);
                                if (tipoConsulta == 0) {
                                    campoConsulta = 0;
                                } else if (tipoConsulta == 1) {
                                    campoConsulta = vImputado.cveAlfabetismo;
                                } else if (tipoConsulta == 2) {
                                    campoConsulta = vImputado.cveEspanol;
                                } else if (tipoConsulta == 3) {
                                    campoConsulta = vImputado.cveDelito;
                                } else if (tipoConsulta == 4) {
                                    campoConsulta = vImputado.cveTipoFamiliaLinguistica;
                                } else if (tipoConsulta == 5) {
                                    campoConsulta = vImputado.cveGenero;
                                } else if (tipoConsulta == 6) {
                                    campoConsulta = vImputado.cveNivelInstruccion;
                                } else if (tipoConsulta == 7) {
                                    campoConsulta = vImputado.cveGradoParticipacion;
                                } else if (tipoConsulta == 8) {
                                    campoConsulta = vImputado.cveResidenciaHabitual;
                                } else if (tipoConsulta == 9) {
                                    campoConsulta = vImputado.cvePais;
                                } else if (tipoConsulta == 10) {
                                    campoConsulta = vImputado.cveOcupacion;
                                } else if (tipoConsulta == 11) {
                                    campoConsulta = vImputado.rangoDelitos;
                                } else if (tipoConsulta == 12) {
                                    campoConsulta = vImputado.multa;
                                } else if (tipoConsulta == 13) {
                                    campoConsulta = vImputado.sancion;
                                } else if (tipoConsulta == 14) {
                                    campoConsulta = vImputado.tiempoPrision;
                                } else if (tipoConsulta == 15) {
                                    campoConsulta = vImputado.cveTipoSentencia;
                                } else if (tipoConsulta == 16) {
                                    campoConsulta = vImputado.cveTipoProcedimiento;
                                } else if (tipoConsulta == 17) {
                                    campoConsulta = vImputado.numeroPenas;
                                }
                                //console.log(campoConsulta);
                                cadenaParametros = tipoConsulta + "," + campoConsulta;
                                if ($("#filtroGenero").is(":checked")) {
                                    cadenaParametros += "," + vImputado.cveGenero;
                                } else {
                                    cadenaParametros += ",0";
                                }
                                if ($("#cveTipoJuzgado").val() > 0) {
                                    cadenaParametros += "," + vImputado.cveTipoJuzgado;
                                } else {
                                    cadenaParametros += ",0";
                                }
                                if ($("#rangoEdad").is(":checked")) {
                                    cadenaParametros += "," + vImputado.rangoEdad;
                                } else {
                                    cadenaParametros += ",0";
                                }
                                if ($("#ModalidadViolencia").is(":checked")) {
                                    cadenaParametros += "," + vImputado.cveModalidadAcoso;
                                } else {
                                    cadenaParametros += ",0";
                                }
                                if ($("#TipoViolencia").is(":checked")) {

                                    if ($("#cmbTipoViolencia").val() > 0) {
                                        cadenaParametros += "," + vImputado.tipoViolencia;
                                    } else {
                                        cadenaParametros += ",0";
                                    }

                                } else {
                                    cadenaParametros += ",0";
                                }
                                table += '<tr onclick="cargarReporteRegiones(' + cadenaParametros + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                                table += "<td>" + i + "</td>";
                                table += "<td>M&eacute;xico</td>";
                                if (tipoConsulta == 1) {
                                    table += "<td>" + vImputado.desAlfabetismo + "</td>";
                                } else if (tipoConsulta == 2) {
                                    table += "<td>" + vImputado.desEspanol + "</td>";
                                } else if (tipoConsulta == 3) {
                                    table += "<td>" + vImputado.desDelito + "</td>";
                                } else if (tipoConsulta == 4) {
                                    table += "<td>" + vImputado.desTipoFamiliaLinguistica + "</td>";
                                } else if (tipoConsulta == 5) {
                                    table += "<td>" + vImputado.desGenero + "</td>";
                                } else if (tipoConsulta == 6) {
                                    table += "<td>" + vImputado.desNivelInstruccion + "</td>";
                                } else if (tipoConsulta == 7) {
                                    table += "<td>" + vImputado.desGradoParticipacion + "</td>";
                                } else if (tipoConsulta == 8) {
                                    //table += "<td>" + vImputado.desConvivencia + "</td>";
                                    switch (vImputado.cveResidenciaHabitual) {
                                        case '1':
                                            table += "<td>Esta Entidad Federativa</td>";
                                            break;
                                        case '2':
                                            table += "<td>Otra Entidad Federativa</td>";
                                            break;
                                        case '3':
                                            table += "<td>Estados Unidos de Norteam&eacute;rica</td>";
                                            break;
                                        case '4':
                                            table += "<td>canad&aacute;</td>";
                                            break;
                                        case '5':
                                            table += "<td>Alg&uacute;n Pa&iacute;s de Centroam&eacute;rica</td>";
                                            break;
                                        case '6':
                                            table += "<td>Alg&uacute;n Pa&iacute;s de Sudam&eacute;rica</td>";
                                            break;
                                        case '7':
                                            table += "<td>Alg&uacute;n Pa&iacute;s de Europa</td>";
                                            break;
                                        case '8':
                                            table += "<td>Alg&uacute;n Pa&iacute;s de Asia</td>";
                                            break;
                                        case '9':
                                            table += "<td>Alg&uacute;n Pa&iacute;s de &Aacute;frica</td>";
                                            break;
                                        case '10':
                                            table += "<td>Otro Pa&iacute;s (distinto a los anteriores)</td>";
                                            break;
                                        case '11':
                                            table += "<td>No identificado</td>";
                                            break;
                                        default:
                                            table += "<td>No identificado</td>";
                                            break;
                                    }
                                } else if (tipoConsulta == 9) {
                                    table += "<td>" + vImputado.desPais + "</td>";
                                } else if (tipoConsulta == 10) {
                                    table += "<td>" + vImputado.desOcupacion + "</td>";
                                } else if (tipoConsulta == 11) {
                                    if (parseInt(vImputado.rangoDelitos) < 6) {
                                        table += "<td>Imputados de " + vImputado.rangoDelitos + " delito(s)</td>";
                                    } else {
                                        table += "<td>Imputados de " + vImputado.rangoDelitos + " o  m&aacute;s delitos</td>";
                                    }
                                } else if (tipoConsulta == 12) {
                                    switch (vImputado.multa) {
                                        case '5000':
                                            table += "<td>Hasta 5,000 pesos</td>";
                                            break;
                                        case '5001':
                                            table += "<td>De 5,001 a 10,000 pesos</td>";
                                            break;
                                        case '10001':
                                            table += "<td>De 10,001 a 15,000 pesos</td>";
                                            break;
                                        case '15001':
                                            table += "<td>De 15,001 a 20,000 pesos</td>";
                                            break;
                                        case '20001':
                                            table += "<td>De 20,001 a 25,000 pesos</td>";
                                            break;
                                        case '25001':
                                            table += "<td>De 25,001 a 30,000 pesos</td>";
                                            break;
                                        case '30001':
                                            table += "<td>De 30,001 a 35,000 pesos</td>";
                                            break;
                                        case '35001':
                                            table += "<td>De 35,001 a 40,000 pesos</td>";
                                            break;
                                        case '40001':
                                            table += "<td>De 40,001 a 45,000 pesos</td>";
                                            break;
                                        case '45001':
                                            table += "<td>De 45,001 a 50,000 pesos</td>";
                                            break;
                                        case '50000':
                                            table += "<td>M&aacute;s de 50,000 pesos</td>";
                                            break;
                                    }
                                } else if (tipoConsulta == 13) {
                                    switch (vImputado.sancion) {
                                        case '5000':
                                            table += "<td>Hasta 5,000 pesos</td>";
                                            break;
                                        case '5001':
                                            table += "<td>De 5,001 a 10,000 pesos</td>";
                                            break;
                                        case '10001':
                                            table += "<td>De 10,001 a 15,000 pesos</td>";
                                            break;
                                        case '15001':
                                            table += "<td>De 15,001 a 20,000 pesos</td>";
                                            break;
                                        case '20001':
                                            table += "<td>De 20,001 a 25,000 pesos</td>";
                                            break;
                                        case '25001':
                                            table += "<td>De 25,001 a 30,000 pesos</td>";
                                            break;
                                        case '30001':
                                            table += "<td>De 30,001 a 35,000 pesos</td>";
                                            break;
                                        case '35001':
                                            table += "<td>De 35,001 a 40,000 pesos</td>";
                                            break;
                                        case '40001':
                                            table += "<td>De 40,001 a 45,000 pesos</td>";
                                            break;
                                        case '45001':
                                            table += "<td>De 45,001 a 50,000 pesos</td>";
                                            break;
                                        case '50000':
                                            table += "<td>M&aacute;s de 50,000 pesos</td>";
                                            break;
                                    }
                                } else if (tipoConsulta == 14) {
                                    switch (vImputado.tiempoPrision) {
                                        case '6':
                                            table += "<td>Menor a 6 meses</td>";
                                            break;
                                        case '11':
                                            table += "<td>De 6 meses hasta menos de 1 a&ntilde;o</td>";
                                            break;
                                        case '12':
                                            table += "<td>De 1 a&ntilde;o hasta menos de 2 a&ntilde;os</td>";
                                            break;
                                        case '24':
                                            table += "<td>De 2 a&ntilde;os hasta menos de 3 a&ntilde;os</td>";
                                            break;
                                        case '36':
                                            table += "<td>De 3 a&ntilde;os hasta menos de 4 a&ntilde;os</td>";
                                            break;
                                        case '48':
                                            table += "<td>De 4 a&ntilde;os hasta menos de 5 a&ntilde;os</td>";
                                            break;
                                        case '72':
                                            table += "<td>De 5 a&ntilde;os hasta menos de 10 a&ntilde;os</td>";
                                            break;
                                        case '120':
                                            table += "<td>De 10 a&ntilde;os hasta menos de 15 a&ntilde;os</td>";
                                            break;
                                        case '180':
                                            table += "<td>De 15 a&ntilde;os hasta menos de 20 a&ntilde;os</td>";
                                            break;
                                        case '240':
                                            table += "<td>De 20 a&ntilde;os hasta menos de 25 a&ntilde;os</td>";
                                            break;
                                        case '300':
                                            table += "<td>De 25 a&ntilde;os o m&aacute;s</td>";
                                            break;
                                    }
                                } else if (tipoConsulta == 15) {
                                    table += "<td>" + vImputado.desTipoSentencia + "</td>";
                                } else if (tipoConsulta == 16) {
                                    table += "<td>" + vImputado.desTipoProcedimiento + "</td>";
                                } else if (tipoConsulta == 17) {
                                    table += "<td>Sentenciado(s) de " + vImputado.numeroPenas + " Pena(s)</td>";
                                }

                                if ($("#ModalidadViolencia").is(":checked")) {
                                    table += "<td>" + vImputado.desModalidadAcoso + "</td>";
                                }
                                if ($("#cveTipoPersona").val() > 0) {
                                    table += "<td>" + vImputado.desTipoPersona + "</td>";
                                }
                                if (cveTipoJuzgado > 0) {
                                    table += "<td>" + vImputado.desTipoJuzgado + "</td>";
                                }
                                if ($("#rangoEdad").is(":checked")) {
                                    switch (vImputado.rangoEdad) {
                                        case '18':
                                            table += "<td>De 18 a 24</td>";
                                            break;
                                        case '25':
                                            table += "<td>De 25 a 29</td>";
                                            break;
                                        case '30':
                                            table += "<td>De 30 a 34</td>";
                                            break;
                                        case '35':
                                            table += "<td>De 35 a 39</td>";
                                            break;
                                        case '40':
                                            table += "<td>De 40 a 44</td>";
                                            break;
                                        case '45':
                                            table += "<td>De 45 a 49</td>";
                                            break;
                                        case '50':
                                            table += "<td>De 50 a 54</td>";
                                            break;
                                        case '55':
                                            table += "<td>De 55 a 59</td>";
                                            break;
                                        case '60':
                                            table += "<td>De 60 0 m&aacute;s</td>";
                                            break;
                                        case '0':
                                            table += "<td>No identificada</td>";
                                            break;
                                        default:
                                            table += "<td>No identificada</td>";
                                            break;
                                    }
                                }
                                if ($("#filtroGenero").is(":checked")) {
                                    table += "<td>" + vImputado.desGenero + "</td>";
                                }
                                if ($("#filtroMes").is(":checked")) {
                                    table += "<td>" + $("#cmbMes :selected").text() + " / " + $("#anio").val() + "</td>";
                                }
                                if ($("#TipoViolencia").is(":checked")) {
                                    if ($("#cmbTipoViolencia").val() == 0) {

                                        table += "<td>" + vImputado.victimasDeDelincuencia + "</td>";
                                        table += "<td>" + vImputado.victimasDeViolenciadeGenero + "</td>";
                                        table += "<td>" + vImputado.victimasDeTrata + "</td>";
                                        table += "<td>" + vImputado.victimasDeAcoso + "</td>";

                                    } else if ($("#cmbTipoViolencia").val() == 1) {
                                        table += "<td>Delincuencia Organizada</td>";
                                    } else if ($("#cmbTipoViolencia").val() == 2) {
                                        table += "<td>Violencia de G&eacute;nero</td>";
                                    } else if ($("#cmbTipoViolencia").val() == 3) {
                                        table += "<td>Trata</td>";
                                    } else if ($("#cmbTipoViolencia").val() == 4) {
                                        table += "<td>Acoso</td>";
                                    }


                                }
                                table += "<td>" + vImputado.totalImputados + "</td>";
                                table += "</tr> ";
                                i = i + 1;
                                totalImputados += parseInt(vImputado.totalImputados);
                            });

                            table += "</tbody> ";
                            table += "</table> ";
                            $("#labelSubTotal").text('TOTAL: ' + totalImputados);
                            $("#divConsulta").show();
                            $("#divTableResult").html(table);
                            $("#divTableResult").prepend('<input type="button" value="Regresar" class="btn btn-primary" onclick="limpiarTabla()" /><br>');
                            //getPaginas(pag, cantReg);
                            $("#tblResultadosGrid").DataTable({
                                paging: false,
                                sort: true,
                                searching: true
                            });
                            $("#imprimirGeneral").show();
                            $("#exportarGeneralPdf").show();
                            $("#exportarGeneralExcel").show();
                            if (totalRegistros > 100) {
                                $(".pag2").show();
                                getPaginas();
                            }
                            var tituloReporte = "<span style='text-decoration: underline; cursor:pointer;' onClick='limpiar()'>Reporte de Imputados</span> / Total";
                            $("#h5titulo").html(tituloReporte);
                        } else {
                            //alert(json.mnj);
                            $("#divAlertWarning").html(json.mnj);
                            $("#divAlertWarning").show("slide");
                            setTimeAlert("divAlertWarning");

                            $("#divConsulta").hide();
                            $("#divTableResult").html("");
                            //getPaginas(pag, cantReg);
                        }

                    },
                    error: function (objeto, quepaso, otroobj) {
                        //                alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            }
    //        } else {
    //            $("#divAlertWarning").html("<span>Capture el a&ntilde;o de b&uacute;squeda</span>").fadeIn("fade").delay(3000).fadeOut("slide");
    //        }

        };

        function getPaginas() {
            var pag = $("#cmbPaginacionGeneral").val();
            var desgloseGenero = "";
            if ($("#filtroGenero").is(":checked")) {
                desgloseGenero = "S";
            } else {
                desgloseGenero = "N";
            }
            var rangoEdad = "";
            if ($("#rangoEdad").is(":checked")) {
                rangoEdad = "S";
            } else {
                rangoEdad = "N";
            }
            var mostrarSentenciados = "";
            if ($("#filtroSentenciados").is(":checked")) {
                mostrarSentenciados = "S";
            } else {
                mostrarSentenciados = "N";
            }
            var mostrarTipoViolencia = "";
            var mostrarModalidadViolencia = "";
            if ($("#TipoViolencia").is(":checked")) {
                mostrarTipoViolencia = "S";
            } else {
                mostrarTipoViolencia = "N";
            }
            if ($("#ModalidadViolencia").is(":checked")) {
                mostrarModalidadViolencia = "S";
            } else {
                mostrarModalidadViolencia = "N";
            }
            var strDatos = "accion=getPaginas";
            strDatos += "&anio=" + $("#anio").val();
            strDatos += "&pagina=" + $("#cmbPaginacionGeneral").val();
            strDatos += "&cantidadRegistros=" + $("#cmbNumRegGeneral").val();
            strDatos += "&consultarPor=" + $("#consultaPor").val();
            strDatos += "&cveTipoJuzgado=" + $("#cveTipoJuzgado").val();
            strDatos += "&cveMes=" + $("#cmbMes").val();
            strDatos += "&fechaInicial=" + $("#fechaInicial").val();
            strDatos += "&fechaFinal=" + $("#fechaFinal").val();
            strDatos += "&desgloseGenero=" + desgloseGenero;
            strDatos += "&edadMinima=" + $("#edadMinima").val();
            strDatos += "&edadMaxima=" + $("#edadMaxima").val();
            strDatos += "&rangoEdad=" + rangoEdad;
            strDatos += "&consultarSentenciados=" + mostrarSentenciados;
            strDatos += "&cveTipoPersona=" + $("#cveTipoPersona").val();
            strDatos += "&mostrarTipoViolencia=" + mostrarTipoViolencia;
            strDatos += "&mostrarModalidaViolencia=" + mostrarModalidadViolencia;
            strDatos += "&cveTipoViolencia=" + $("#cmbTipoViolencia").val();
            strDatos += "&cveModalidadViolencia=" + $("#cmbModalidadViolencia").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReporteimputadosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");

                    if (json.totalCount > 0) {
                        $('#cmbPaginacionGeneral').find('option').remove().end();

                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacionGeneral").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }

                        $("#totalRegGeneral").html("<strong> Cantidad de registros: " + json.totalCount + "</strong>");
                        $("#cmbPaginacionGeneral").val(pag);
                    } else {
                        $("#advertencia").html(json.msg);
                        $("#advertencia").show("slide");
                        setTimeAlert("advertencia");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                }
            });
        }

        function cargarReporteRegiones(tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, rangoEdad, modalidad, tipoViolencia) {
            changeDivForm(1);
            var anio = ($("#anio").val() != "") ? $("#anio").val() : 0;
            contenidoReporteRegiones(anio, tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, rangoEdad, modalidad, tipoViolencia);
            //contenidoReporteRegiones(anio, tipoConsulta, json);
        }

        function contenidoReporteRegiones(anio, tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, edad, modalidad, tipoViolencia) {
            $("#div-advertenciaRegiones").empty();
            $("#divGeneralRegiones").empty();
            $("#imprimirGeneral").hide();
            $("#imprimirDistritos").hide();
            $("#imprimirJuzgados").hide();
            $("#imprimirDesglose").hide();
            $("#exportarGeneralPdf").hide();
            $("#exportarDistritosPdf").hide();
            $("#exportarJuzgadosPdf").hide();
            $("#exportarDesglosePdf").hide();
            $("#exportarGeneralExcel").hide();
            $("#exportarDistritosExcel").hide();
            $("#exportarJuzgadosExcel").hide();
            $("#exportarDesgloseExcel").hide();
            var cveMes = $("#cmbMes").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var desgloseGenero = "";
            if ($("#filtroGenero").is(":checked")) {
                desgloseGenero = "S";
            } else {
                desgloseGenero = "N";
            }
            var rangoEdad = "";
            if ($("#rangoEdad").is(":checked")) {
                rangoEdad = "S";
            } else {
                rangoEdad = "N";
            }
            var mostrarSentenciados = "";
            if ($("#filtroSentenciados").is(":checked")) {
                mostrarSentenciados = "S";
            } else {
                mostrarSentenciados = "N";
            }
            var edadMinima = $("#edadMinima").val();
            var edadMaxima = $("#edadMaxima").val();
            var mostrarTipoViolencia = "";
            var mostrarModalidadViolencia = "";
            if ($("#TipoViolencia").is(":checked")) {
                mostrarTipoViolencia = "S";
            } else {
                mostrarTipoViolencia = "N";
            }
            if ($("#ModalidadViolencia").is(":checked")) {
                mostrarModalidadViolencia = "S";
            } else {
                mostrarModalidadViolencia = "N";
            }

            var strDatos = "accion=consultaImputadosRegion";
            strDatos += "&activo=S";
            strDatos += "&anio=" + anio;
            strDatos += "&consultarPor=" + tipoConsulta;
            if (tipoConsulta == 1) {
                strDatos += "&cveAlfabetismo=" + campoConsulta;
            } else if (tipoConsulta == 2) {
                strDatos += "&cveEspanol=" + campoConsulta;
            } else if (tipoConsulta == 3) {
                strDatos += "&cveDelito=" + campoConsulta;
            } else if (tipoConsulta == 4) {
                strDatos += "&cveTipoFamiliaLinguistica=" + campoConsulta;
            } else if (tipoConsulta == 5) {
                strDatos += "&cveGenero=" + campoConsulta;
            } else if (tipoConsulta == 6) {
                strDatos += "&cveNivelInstruccion=" + campoConsulta;
            } else if (tipoConsulta == 7) {
                strDatos += "&cveGradoParticipacion=" + campoConsulta;
            } else if (tipoConsulta == 8) {
                strDatos += "&cveResidenciaHabitual=" + campoConsulta;
            } else if (tipoConsulta == 9) {
                strDatos += "&cvePais=" + campoConsulta;
            } else if (tipoConsulta == 10) {
                strDatos += "&cveOcupacion=" + campoConsulta;
            } else if (tipoConsulta == 11) {
                strDatos += "&rangoDelitos=" + campoConsulta;
            } else if (tipoConsulta == 12) {
                strDatos += "&multa=" + campoConsulta;
            } else if (tipoConsulta == 13) {
                strDatos += "&sancion=" + campoConsulta;
            } else if (tipoConsulta == 14) {
                strDatos += "&tiempoPrision=" + campoConsulta;
            } else if (tipoConsulta == 15) {
                strDatos += "&cveTipoSentencia=" + campoConsulta;
            } else if (tipoConsulta == 16) {
                strDatos += "&cveConclusion=" + campoConsulta;
            } else if (tipoConsulta == 17) {
                strDatos += "&numeroPenas=" + campoConsulta;
            }
            strDatos += "&cveTipoJuzgado=" + cveTipoJuzgado;
            strDatos += "&cveGenero=" + cveGenero;
            strDatos += "&cveMes=" + cveMes;
            strDatos += "&fechaInicial=" + fechaInicial;
            strDatos += "&fechaFinal=" + fechaFinal;
            strDatos += "&desgloseGenero=" + desgloseGenero;
            strDatos += "&edadMinima=" + edadMinima;
            strDatos += "&edadMaxima=" + edadMaxima;
            strDatos += "&rangoEdad=" + rangoEdad;
            strDatos += "&edad=" + edad;
            strDatos += "&consultarSentenciados=" + mostrarSentenciados;
            strDatos += "&cveTipoPersona=" + $("#cveTipoPersona").val();
            strDatos += "&mostrarTipoViolencia=" + mostrarTipoViolencia;
            strDatos += "&mostrarModalidaViolencia=" + mostrarModalidadViolencia;
            strDatos += "&cveTipoViolencia=" + tipoViolencia;
            strDatos += "&cveModalidadViolencia=" + modalidad;
            var totalImputados = 0;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReporteimputadosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                ToggleLoading(1);
                },
                success: function (datos) {
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        var texto = "";
                        if ($("#filtroSentenciados").is(":checked")) {
                            texto = "Reporte de Sentenciados";
                        } else {
                            texto = "Reporte de imputados";
                        }
                        if ($("#filtroAnio").is(":checked")) {
                            texto += " en el A&ntilde;o " + $("#anio").val();
                        } else if ($("#filtroMes").is(":checked")) {
                            texto += " en el mes de " + ucFirstAllWords($("#cmbMes :selected").text()) + " de " + $("#anio").val();
                        } else if ($("#filtroFechas").is(":checked")) {
                            texto += " de " + $("#fechaInicial").val() + " a " + $("#fechaFinal").val();
                        }
                        texto += " en el Estado de M&eacute;xico";

                        $("#rutaIntrospeccion").html("Estado: <strong>M&Eacute;XICO</strong>");

                        $("#idLabelDescripcion").html(texto);

                        table += "<table id='tblResultadoRegiones' border='1' cellspacing='0' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>No.</th>";
                        table += "<th>Regi&oacute;n</th>";
                        if (tipoConsulta == 1) {
                            table += "<th>Alfabetismo</th>";
                        } else if (tipoConsulta == 2) {
                            table += "<th>Dominio de Espa&ntilde;ol</th>";
                        } else if (tipoConsulta == 3) {
                            table += "<th>Delito</th>";
                        } else if (tipoConsulta == 4) {
                            table += "<th>Familia Ling&uuml;istica</th>";
                        } else if (tipoConsulta == 5) {
                            table += "<th>G&eacute;nero</th>";
                        } else if (tipoConsulta == 6) {
                            table += "<th>Grado de Estudios</th>";
                        } else if (tipoConsulta == 7) {
                            table += "<th>Grado de Participaci&oacute;n</th>";
                        } else if (tipoConsulta == 8) {
                            table += "<th>Lugar habitual de residencia</th>";
                        } else if (tipoConsulta == 9) {
                            table += "<th>Pa&iacute;s Nacionalidad</th>";
                        } else if (tipoConsulta == 10) {
                            table += "<th>Ocupaci&oacute;n</th>";
                        } else if (tipoConsulta == 11) {
                            table += "<th>N&uacute;mero de Delitos</th>";
                        } else if (tipoConsulta == 12) {
                            table += "<th>Monto de la Multa</th>";
                        } else if (tipoConsulta == 13) {
                            table += "<th>Reparaci&oacute;n del Da&ntilde;o</th>";
                        } else if (tipoConsulta == 14) {
                            table += "<th>Tiempo en Prisi&oacute;n</th>";
                        } else if (tipoConsulta == 15) {
                            table += "<th>Tipo de Sentencia</th>";
                        } else if (tipoConsulta == 16) {
                            table += "<th>Procedimiento</th>";
                        } else if (tipoConsulta == 17) {
                            table += "<th>N&uacute;mero de Penas</th>";
                        }
                        if ($("#ModalidadViolencia").is(":checked")) {
                            table += "<th>Modalidad de Violencia</th>";
                        }
                        if ($("#cveTipoPersona").val() > 0) {
                            table += "<th>Tipo de persona</th>";
                        }
                        if ($("#cveTipoJuzgado").val() > 0) {
                            table += "<th>Tipo Juzgado</th>";
                        }
                        if ($("#rangoEdad").is(":checked")) {
                            table += "<th>Rango de Edad</th>";
                        }
                        if ($("#filtroGenero").is(":checked")) {
                            table += "<th>G&eacute;nero</th>";
                        }
                        if ($("#filtroMes").is(":checked")) {
                            table += "<th>Mes / A&ntilde;o</th>";
                        }
                        if ($("#TipoViolencia").is(":checked")) {

                            if ($("#cmbTipoViolencia").val() == 0) {
                                table += "<th>Delincuencia organizada</th>";
                                table += "<th>Violencia de G&eacute;nero</th>";
                                table += "<th>Trata</th>";
                                table += "<th>Acoso</th>";
                            } else {
                                table += "<th>Tipo de Violencia</th>";
                            }

                        }
                        table += "<th>Subtotal</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var i = 1;
                        $.each(json.resultados, function (k, vImputado) {
                            var cadenaParametros = vImputado.cveRegion + "," + anio + "," + tipoConsulta + "," + campoConsulta;
                            if ($("#filtroGenero").is(":checked")) {
                                cadenaParametros += "," + vImputado.cveGenero;
                            } else {
                                cadenaParametros += ",0";
                            }
                            if ($("#cveTipoJuzgado").val() > 0) {
                                cadenaParametros += "," + vImputado.cveTipoJuzgado;
                            } else {
                                cadenaParametros += ",0";
                            }
                            if ($("#rangoEdad").is(":checked")) {
                                cadenaParametros += "," + vImputado.rangoEdad;
                            } else {
                                cadenaParametros += ",0";
                            }
                            if ($("#ModalidadViolencia").is(":checked")) {
                                cadenaParametros += "," + vImputado.cveModalidadAcoso;
                            } else {
                                cadenaParametros += ",0";
                            }
                            if ($("#TipoViolencia").is(":checked")) {
                                cadenaParametros += "," + vImputado.tipoViolencia;
                            } else {
                                cadenaParametros += ",0";
                            }
                            table += '<tr onclick="cargarReporteDistritos(' + cadenaParametros + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';

                            table += "<td>" + i + "</td>";
                            table += "<td>" + vImputado.desRegion + "</td>";
                            if (tipoConsulta == 1) {
                                table += "<td>" + vImputado.desAlfabetismo + "</td>";
                            } else if (tipoConsulta == 2) {
                                table += "<td>" + vImputado.desEspanol + "</td>";
                            } else if (tipoConsulta == 3) {
                                table += "<td>" + vImputado.desDelito + "</td>";
                            } else if (tipoConsulta == 4) {
                                table += "<td>" + vImputado.desTipoFamiliaLinguistica + "</td>";
                            } else if (tipoConsulta == 5) {
                                table += "<td>" + vImputado.desGenero + "</td>";
                            } else if (tipoConsulta == 6) {
                                table += "<td>" + vImputado.desNivelInstruccion + "</td>";
                            } else if (tipoConsulta == 7) {
                                table += "<td>" + vImputado.desGradoParticipacion + "</td>";
                            } else if (tipoConsulta == 8) {
                                //table += "<td>" + vImputado.desConvivencia + "</td>";
                                switch (vImputado.cveResidenciaHabitual) {
                                    case '1':
                                        table += "<td>Esta Entidad Federativa</td>";
                                        break;
                                    case '2':
                                        table += "<td>Otra Entidad Federativa</td>";
                                        break;
                                    case '3':
                                        table += "<td>Estados Unidos de Norteam&eacute;rica</td>";
                                        break;
                                    case '4':
                                        table += "<td>canad&aacute;</td>";
                                        break;
                                    case '5':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Centroam&eacute;rica</td>";
                                        break;
                                    case '6':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Sudam&eacute;rica</td>";
                                        break;
                                    case '7':
                                        table += table += "<td>Alg&uacute;n Pa&iacute;s de Europa</td>";
                                        break;
                                    case '8':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Asia</td>";
                                        break;
                                    case '9':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de &Aacute;frica</td>";
                                        break;
                                    case '10':
                                        table += "<td>Otro Pa&iacute;s (distinto a los anteriores)</td>";
                                        break;
                                    case '11':
                                        table += "<td>No identificado</td>";
                                        break;
                                    default:
                                        table += "<td>No identificado</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 9) {
                                table += "<td>" + vImputado.desPais + "</td>";
                            } else if (tipoConsulta == 10) {
                                table += "<td>" + vImputado.desOcupacion + "</td>";
                            } else if (tipoConsulta == 11) {
                                if (parseInt(vImputado.rangoDelitos) < 6) {
                                    table += "<td>Imputados de " + vImputado.rangoDelitos + " delito(s)</td>";
                                } else {
                                    table += "<td>Imputados de " + vImputado.rangoDelitos + " o  m&aacute;s delitos</td>";
                                }
                            } else if (tipoConsulta == 12) {
                                switch (vImputado.multa) {
                                    case '5000':
                                        table += "<td>Hasta 5,000 pesos</td>";
                                        break;
                                    case '5001':
                                        table += "<td>De 5,001 a 10,000 pesos</td>";
                                        break;
                                    case '10001':
                                        table += "<td>De 10,001 a 15,000 pesos</td>";
                                        break;
                                    case '15001':
                                        table += "<td>De 15,001 a 20,000 pesos</td>";
                                        break;
                                    case '20001':
                                        table += "<td>De 20,001 a 25,000 pesos</td>";
                                        break;
                                    case '25001':
                                        table += "<td>De 25,001 a 30,000 pesos</td>";
                                        break;
                                    case '30001':
                                        table += "<td>De 30,001 a 35,000 pesos</td>";
                                        break;
                                    case '35001':
                                        table += "<td>De 35,001 a 40,000 pesos</td>";
                                        break;
                                    case '40001':
                                        table += "<td>De 40,001 a 45,000 pesos</td>";
                                        break;
                                    case '45001':
                                        table += "<td>De 45,001 a 50,000 pesos</td>";
                                        break;
                                    case '50000':
                                        table += "<td>M&aacute;s de 50,000 pesos</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 13) {
                                switch (vImputado.sancion) {
                                    case '5000':
                                        table += "<td>Hasta 5,000 pesos</td>";
                                        break;
                                    case '5001':
                                        table += "<td>De 5,001 a 10,000 pesos</td>";
                                        break;
                                    case '10001':
                                        table += "<td>De 10,001 a 15,000 pesos</td>";
                                        break;
                                    case '15001':
                                        table += "<td>De 15,001 a 20,000 pesos</td>";
                                        break;
                                    case '20001':
                                        table += "<td>De 20,001 a 25,000 pesos</td>";
                                        break;
                                    case '25001':
                                        table += "<td>De 25,001 a 30,000 pesos</td>";
                                        break;
                                    case '30001':
                                        table += "<td>De 30,001 a 35,000 pesos</td>";
                                        break;
                                    case '35001':
                                        table += "<td>De 35,001 a 40,000 pesos</td>";
                                        break;
                                    case '40001':
                                        table += "<td>De 40,001 a 45,000 pesos</td>";
                                        break;
                                    case '45001':
                                        table += "<td>De 45,001 a 50,000 pesos</td>";
                                        break;
                                    case '50000':
                                        table += "<td>M&aacute;s de 50,000 pesos</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 14) {
                                switch (vImputado.tiempoPrision) {
                                    case '6':
                                        table += "<td>Menor a 6 meses</td>";
                                        break;
                                    case '11':
                                        table += "<td>De 6 meses hasta menos de 1 a&ntilde;o</td>";
                                        break;
                                    case '12':
                                        table += "<td>De 1 a&ntilde;o hasta menos de 2 a&ntilde;os</td>";
                                        break;
                                    case '24':
                                        table += "<td>De 2 a&ntilde;os hasta menos de 3 a&ntilde;os</td>";
                                        break;
                                    case '36':
                                        table += "<td>De 3 a&ntilde;os hasta menos de 4 a&ntilde;os</td>";
                                        break;
                                    case '48':
                                        table += "<td>De 4 a&ntilde;os hasta menos de 5 a&ntilde;os</td>";
                                        break;
                                    case '72':
                                        table += "<td>De 5 a&ntilde;os hasta menos de 10 a&ntilde;os</td>";
                                        break;
                                    case '120':
                                        table += "<td>De 10 a&ntilde;os hasta menos de 15 a&ntilde;os</td>";
                                        break;
                                    case '180':
                                        table += "<td>De 15 a&ntilde;os hasta menos de 20 a&ntilde;os</td>";
                                        break;
                                    case '240':
                                        table += "<td>De 20 a&ntilde;os hasta menos de 25 a&ntilde;os</td>";
                                        break;
                                    case '300':
                                        table += "<td>De 25 a&ntilde;os o m&aacute;s</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 15) {
                                table += "<td>" + vImputado.desTipoSentencia + "</td>";
                            } else if (tipoConsulta == 16) {
                                table += "<td>" + vImputado.desTipoProcedimiento + "</td>";
                            } else if (tipoConsulta == 17) {
                                table += "<td>Sentenciado(s) de " + vImputado.numeroPenas + " Pena(s)</td>";
                            }
                            if ($("#ModalidadViolencia").is(":checked")) {
                                table += "<td>" + vImputado.desModalidadAcoso + "</td>";
                            }
                            if ($("#cveTipoPersona").val() > 0) {
                                table += "<td>" + vImputado.desTipoPersona + "</td>";
                            }
                            if ($("#cveTipoJuzgado").val() > 0) {
                                table += "<td>" + vImputado.desTipoJuzgado + "</td>";
                            }
                            if ($("#rangoEdad").is(":checked")) {
                                switch (vImputado.rangoEdad) {
                                    case '18':
                                        table += "<td>De 18 a 24</td>";
                                        break;
                                    case '25':
                                        table += "<td>De 25 a 29</td>";
                                        break;
                                    case '30':
                                        table += "<td>De 30 a 34</td>";
                                        break;
                                    case '35':
                                        table += "<td>De 35 a 39</td>";
                                        break;
                                    case '40':
                                        table += "<td>De 40 a 44</td>";
                                        break;
                                    case '45':
                                        table += "<td>De 45 a 49</td>";
                                        break;
                                    case '50':
                                        table += "<td>De 50 a 54</td>";
                                        break;
                                    case '55':
                                        table += "<td>De 55 a 59</td>";
                                        break;
                                    case '60':
                                        table += "<td>De 60 0 m&aacute;s</td>";
                                        break;
                                    case '0':
                                        table += "<td>No identificada</td>";
                                        break;
                                    default:
                                        table += "<td>No identificada</td>";
                                        break;
                                }
                            }
                            if ($("#filtroGenero").is(":checked")) {
                                table += "<td>" + vImputado.desGenero + "</td>";
                            }
                            if ($("#filtroMes").is(":checked")) {
                                table += "<td>" + $("#cmbMes :selected").text() + " / " + $("#anio").val() + "</td>";
                            }
                            if ($("#TipoViolencia").is(":checked")) {

                                if ($("#cmbTipoViolencia").val() == 0) {
                                    table += "<td>" + vImputado.victimasDeDelincuencia + "</td>";
                                    table += "<td>" + vImputado.victimasDeViolenciadeGenero + "</td>";
                                    table += "<td>" + vImputado.victimasDeTrata + "</td>";
                                    table += "<td>" + vImputado.victimasDeAcoso + "</td>";
                                } else if ($("#cmbTipoViolencia").val() == 1) {
                                    table += "<td>Delincuencia Organizada</td>";
                                } else if ($("#cmbTipoViolencia").val() == 2) {
                                    table += "<td>Violencia de G&eacute;nero</td>";
                                } else if ($("#cmbTipoViolencia").val() == 3) {
                                    table += "<td>Trata</td>";
                                } else if ($("#cmbTipoViolencia").val() == 4) {
                                    table += "<td>Acoso</td>";
                                }

                            }
                            table += "<td>" + vImputado.totalImputados + "</td>";
                            table += "</tr> ";
                            i = i + 1;
                            totalImputados += parseInt(vImputado.totalImputados);
                        });

                        table += "</tbody> ";
                        table += "</table> ";
                        $("#labelSubTotal").text('TOTAL ' + totalImputados);
                        $("#divGeneralRegiones").show();
                        $("#divGeneralRegiones").html(table);
                        $("#divGeneralRegiones").prepend('<input type="button" value="Regresar" class="btn btn-primary" onclick="consultarImputadosDomicilio()" /><br>');
                        $("#tblResultadoRegiones").DataTable({
                            paging: false,
                            sort: true,
                            searching: true
                        });
    //                    var tt = new $.fn.dataTable.TableTools( tabla );
    //                    $( tt.fnContainer() ).insertBefore('div#divGeneralRegiones');

                        //$("#tituloRegiones").html(texto);
                        //getPaginas(pag, cantReg);
                        $("#imprimirRegiones").show();
                        $("#exportarRegionesPdf").show();
                        $("#exportarRegionesExcel").show();
                        var tituloReporte = "<span style='text-decoration: underline; cursor:pointer;' onClick='limpiar()'>Reporte de Imputados</span>";
                        tituloReporte += " / <span style='text-decoration: underline; cursor:pointer;' onClick='consultarImputadosDomicilio();'>Total</span>";
                        tituloReporte += " / Regiones";
                        $("#h5titulo").html(tituloReporte);
                    } else {
                        $("#div-advertenciaRegiones").html('' + json.mnj);
                        $("#div-advertenciaRegiones").show("slide");
                        setTimeAlert("div-advertenciaRegiones");

                        $("#divGeneralRegiones").html("");
                        //getPaginas(pag, cantReg);
                    }


                },
                error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDagerRegiones").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDagerRegiones").show("slide");
                    setTimeAlert("divAlertDagerRegiones");
                }
            });
        }

        function cargarReporteDistritos(region, anio, tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, rangoEdad, modalidad, tipoViolencia) {
            changeDivForm(3);
            contenidoReporteDistritos(region, anio, tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, rangoEdad, modalidad, tipoViolencia);
        }

        function contenidoReporteDistritos(region, anio, tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, edad, modalidad, tipoViolencia) {
            $("#div-advertenciaDistritos").empty();
            $("#divGeneralDistritos").empty();
            $("#imprimirGeneral").hide();
            $("#imprimirRegiones").hide();
            $("#imprimirJuzgados").hide();
            $("#imprimirDesglose").hide();
            $("#exportarGeneralPdf").hide();
            $("#exportarRegionesPdf").hide();
            $("#exportarJuzgadosPdf").hide();
            $("#exportarDesglosePdf").hide();
            $("#exportarGeneralExcel").hide();
            $("#exportarRegionesExcel").hide();
            $("#exportarJuzgadosExcel").hide();
            $("#exportarDesgloseExcel").hide();
            var cveMes = $("#cmbMes").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var desgloseGenero = "";
            if ($("#filtroGenero").is(":checked")) {
                desgloseGenero = "S";
            } else {
                desgloseGenero = "N";
            }
            var rangoEdad = "";
            if ($("#rangoEdad").is(":checked")) {
                rangoEdad = "S";
            } else {
                rangoEdad = "N";
            }
            var mostrarSentenciados = "";
            if ($("#filtroSentenciados").is(":checked")) {
                mostrarSentenciados = "S";
            } else {
                mostrarSentenciados = "N";
            }
            var edadMinima = $("#edadMinima").val();
            var edadMaxima = $("#edadMaxima").val();
            var mostrarTipoViolencia = "";
            var mostrarModalidadViolencia = "";
            if ($("#TipoViolencia").is(":checked")) {
                mostrarTipoViolencia = "S";
            } else {
                mostrarTipoViolencia = "N";
            }
            if ($("#ModalidadViolencia").is(":checked")) {
                mostrarModalidadViolencia = "S";
            } else {
                mostrarModalidadViolencia = "N";
            }
            var strDatos = "accion=consultaImputadosDistrito";
            strDatos += "&activo=S";
            strDatos += "&anio=" + anio;
            strDatos += "&cveRegion=" + region;
            strDatos += "&consultarPor=" + tipoConsulta;
            if (tipoConsulta == 1) {
                strDatos += "&cveAlfabetismo=" + campoConsulta;
            } else if (tipoConsulta == 2) {
                strDatos += "&cveEspanol=" + campoConsulta;
            } else if (tipoConsulta == 3) {
                strDatos += "&cveDelito=" + campoConsulta;
            } else if (tipoConsulta == 4) {
                strDatos += "&cveTipoFamiliaLinguistica=" + campoConsulta;
            } else if (tipoConsulta == 5) {
                strDatos += "&cveGenero=" + campoConsulta;
            } else if (tipoConsulta == 6) {
                strDatos += "&cveNivelInstruccion=" + campoConsulta;
            } else if (tipoConsulta == 7) {
                strDatos += "&cveGradoParticipacion=" + campoConsulta;
            } else if (tipoConsulta == 8) {
                strDatos += "&cveResidenciaHabitual=" + campoConsulta;
            } else if (tipoConsulta == 9) {
                strDatos += "&cvePais=" + campoConsulta;
            } else if (tipoConsulta == 10) {
                strDatos += "&cveOcupacion=" + campoConsulta;
            } else if (tipoConsulta == 11) {
                strDatos += "&rangoDelitos=" + campoConsulta;
            } else if (tipoConsulta == 12) {
                strDatos += "&multa=" + campoConsulta;
            } else if (tipoConsulta == 13) {
                strDatos += "&sancion=" + campoConsulta;
            } else if (tipoConsulta == 14) {
                strDatos += "&tiempoPrision=" + campoConsulta;
            } else if (tipoConsulta == 15) {
                strDatos += "&cveTipoSentencia=" + campoConsulta;
            } else if (tipoConsulta == 16) {
                strDatos += "&cveConclusion=" + campoConsulta;
            } else if (tipoConsulta == 17) {
                strDatos += "&numeroPenas=" + campoConsulta;
            }
            strDatos += "&cveTipoJuzgado=" + cveTipoJuzgado;
            strDatos += "&cveGenero=" + cveGenero;
            strDatos += "&cveMes=" + cveMes;
            strDatos += "&fechaInicial=" + fechaInicial;
            strDatos += "&fechaFinal=" + fechaFinal;
            strDatos += "&desgloseGenero=" + desgloseGenero;
            strDatos += "&edadMinima=" + edadMinima;
            strDatos += "&edadMaxima=" + edadMaxima;
            strDatos += "&rangoEdad=" + rangoEdad;
            strDatos += "&edad=" + edad;
            strDatos += "&consultarSentenciados=" + mostrarSentenciados;
            strDatos += "&cveTipoPersona=" + $("#cveTipoPersona").val();
            strDatos += "&mostrarTipoViolencia=" + mostrarTipoViolencia;
            strDatos += "&mostrarModalidaViolencia=" + mostrarModalidadViolencia;
            strDatos += "&cveTipoViolencia=" + tipoViolencia;
            strDatos += "&cveModalidadViolencia=" + modalidad;
            var totalImputados = 0;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReporteimputadosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                ToggleLoading(1);
                },
                success: function (datos) {
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {

                        var texto = "";
                        if ($("#filtroSentenciados").is(":checked")) {
                            texto = "Reporte de Sentenciados";
                        } else {
                            texto = "Reporte de imputados";
                        }
                        if ($("#filtroAnio").is(":checked")) {
                            texto += " en el A&ntilde;o " + $("#anio").val();
                        } else if ($("#filtroMes").is(":checked")) {
                            texto += " en el mes de " + ucFirstAllWords($("#cmbMes :selected").text()) + " de " + $("#anio").val();
                        } else if ($("#filtroFechas").is(":checked")) {
                            texto += " de " + $("#fechaInicial").val() + " a " + $("#fechaFinal").val();
                        }
                        texto += " en el Estado de M&eacute;xico";
                        var introspeccion = "Estado: <strong>M&Eacute;XICO </strong><br>" + "Regi&oacute;n: " + "<strong>" + json.resultados[0].desRegion + " </strong>";
                        $("#rutaIntrospeccion").html(introspeccion);

                        $("#idLabelDescripcion").html(texto);

                        table += "<table id='tblResultadoDistritos' border='1' cellspacing='0' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>No.</th>";
                        table += "<th>Distrito</th>";
                        if (tipoConsulta == 1) {
                            table += "<th>Alfabetismo</th>";
                        } else if (tipoConsulta == 2) {
                            table += "<th>Dominio de Espa&ntilde;ol</th>";
                        } else if (tipoConsulta == 3) {
                            table += "<th>Delito</th>";
                        } else if (tipoConsulta == 4) {
                            table += "<th>Familia Ling&uuml;istica</th>";
                        } else if (tipoConsulta == 5) {
                            table += "<th>G&eacute;nero</th>";
                        } else if (tipoConsulta == 6) {
                            table += "<th>Grado de Estudios</th>";
                        } else if (tipoConsulta == 7) {
                            table += "<th>Grado de Participaci&oacute;n</th>";
                        } else if (tipoConsulta == 8) {
                            table += "<th>Lugar habitual de residencia</th>";
                        } else if (tipoConsulta == 9) {
                            table += "<th>Pa&iacute;s Nacionalidad</th>";
                        } else if (tipoConsulta == 10) {
                            table += "<th>Ocupaci&oacute;n</th>";
                        } else if (tipoConsulta == 11) {
                            table += "<th>N&uacute;mero de Delitos</th>";
                        } else if (tipoConsulta == 12) {
                            table += "<th>Monto de la Multa</th>";
                        } else if (tipoConsulta == 13) {
                            table += "<th>Reparaci&oacute;n del Da&ntilde;o</th>";
                        } else if (tipoConsulta == 14) {
                            table += "<th>Tiempo en Prisi&oacute;n</th>";
                        } else if (tipoConsulta == 15) {
                            table += "<th>Tipo Sentencia</th>";
                        } else if (tipoConsulta == 16) {
                            table += "<th>Procedimiento</th>";
                        } else if (tipoConsulta == 17) {
                            table += "<th>N&uacute;mero de Penas</th>";
                        }
                        if ($("#ModalidadViolencia").is(":checked")) {
                            table += "<th>Modalidad de Violencia</th>";
                        }
                        if ($("#cveTipoPersona").val() > 0) {
                            table += "<th>Tipo de persona</th>";
                        }
                        if ($("#cveTipoJuzgado").val() > 0) {
                            table += "<th>Tipo Juzgado</th>";
                        }
                        if ($("#rangoEdad").is(":checked")) {
                            table += "<th>Rango de Edad</th>";
                        }
                        if ($("#filtroGenero").is(":checked")) {
                            table += "<th>G&eacute;nero</th>";
                        }
                        if ($("#filtroMes").is(":checked")) {
                            table += "<th>Mes / A&ntilde;o</th>";
                        }
                        if ($("#TipoViolencia").is(":checked")) {
                            if ($("#cmbTipoViolencia").val() == 0) {
                                table += "<th>Delincuencia organizada</th>";
                                table += "<th>Violencia de G&eacute;nero</th>";
                                table += "<th>Trata</th>";
                                table += "<th>Acoso</th>";
                            } else {
                                table += "<th>Tipo de Violencia</th>";
                            }

                        }
                        table += "<th>Subtotal</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var i = 1;
                        $.each(json.resultados, function (k, vImputado) {
                            var cadenaParametros = vImputado.cveDistrito + ',' + vImputado.cveRegion + ',' + anio + ',' + tipoConsulta + ',' + campoConsulta;
                            if ($("#filtroGenero").is(":checked")) {
                                cadenaParametros += "," + vImputado.cveGenero;
                            } else {
                                cadenaParametros += ",0";
                            }
                            if ($("#cveTipoJuzgado").val() > 0) {
                                cadenaParametros += "," + vImputado.cveTipoJuzgado;
                            } else {
                                cadenaParametros += ",0";
                            }
                            if ($("#rangoEdad").is(":checked")) {
                                cadenaParametros += "," + vImputado.rangoEdad;
                            } else {
                                cadenaParametros += ",0";
                            }
                            if ($("#ModalidadViolencia").is(":checked")) {
                                cadenaParametros += "," + vImputado.cveModalidadAcoso;
                            } else {
                                cadenaParametros += ",0";
                            }
                            if ($("#TipoViolencia").is(":checked")) {
                                cadenaParametros += "," + vImputado.tipoViolencia;
                            } else {
                                cadenaParametros += ",0";
                            }
                            table += '<tr onclick="cargarReporteJuzgados(' + cadenaParametros + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';

                            table += "<td>" + i + "</td>";
                            table += "<td>" + vImputado.desDistrito + "</td>";
                            if (tipoConsulta == 1) {
                                table += "<td>" + vImputado.desAlfabetismo + "</td>";
                            } else if (tipoConsulta == 2) {
                                table += "<td>" + vImputado.desEspanol + "</td>";
                            } else if (tipoConsulta == 3) {
                                table += "<td>" + vImputado.desDelito + "</td>";
                            } else if (tipoConsulta == 4) {
                                table += "<td>" + vImputado.desTipoFamiliaLinguistica + "</td>";
                            } else if (tipoConsulta == 5) {
                                table += "<td>" + vImputado.desGenero + "</td>";
                            } else if (tipoConsulta == 6) {
                                table += "<td>" + vImputado.desNivelInstruccion + "</td>";
                            } else if (tipoConsulta == 7) {
                                table += "<td>" + vImputado.desGradoParticipacion + "</td>";
                            } else if (tipoConsulta == 8) {
                                //table += "<td>" + vImputado.desConvivencia + "</td>";
                                switch (vImputado.cveResidenciaHabitual) {
                                    case '1':
                                        table += "<td>Esta Entidad Federativa</td>";
                                        break;
                                    case '2':
                                        table += "<td>Otra Entidad Federativa</td>";
                                        break;
                                    case '3':
                                        table += "<td>Estados Unidos de Norteam&eacute;rica</td>";
                                        break;
                                    case '4':
                                        table += "<td>canad&aacute;</td>";
                                        break;
                                    case '5':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Centroam&eacute;rica</td>";
                                        break;
                                    case '6':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Sudam&eacute;rica</td>";
                                        break;
                                    case '7':
                                        table += table += "<td>Alg&uacute;n Pa&iacute;s de Europa</td>";
                                        break;
                                    case '8':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Asia</td>";
                                        break;
                                    case '9':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de &Aacute;frica</td>";
                                        break;
                                    case '10':
                                        table += "<td>Otro Pa&iacute;s (distinto a los anteriores)</td>";
                                        break;
                                    case '11':
                                        table += "<td>No identificado</td>";
                                        break;
                                    default:
                                        table += "<td>No identificado</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 9) {
                                table += "<td>" + vImputado.desPais + "</td>";
                            } else if (tipoConsulta == 10) {
                                table += "<td>" + vImputado.desOcupacion + "</td>";
                            } else if (tipoConsulta == 11) {
                                if (parseInt(vImputado.rangoDelitos) < 6) {
                                    table += "<td>Imputados de " + vImputado.rangoDelitos + " delito(s)</td>";
                                } else {
                                    table += "<td>Imputados de " + vImputado.rangoDelitos + " o  m&aacute;s delitos</td>";
                                }
                            } else if (tipoConsulta == 12) {
                                switch (vImputado.multa) {
                                    case '5000':
                                        table += "<td>Hasta 5,000 pesos</td>";
                                        break;
                                    case '5001':
                                        table += "<td>De 5,001 a 10,000 pesos</td>";
                                        break;
                                    case '10001':
                                        table += "<td>De 10,001 a 15,000 pesos</td>";
                                        break;
                                    case '15001':
                                        table += "<td>De 15,001 a 20,000 pesos</td>";
                                        break;
                                    case '20001':
                                        table += "<td>De 20,001 a 25,000 pesos</td>";
                                        break;
                                    case '25001':
                                        table += "<td>De 25,001 a 30,000 pesos</td>";
                                        break;
                                    case '30001':
                                        table += "<td>De 30,001 a 35,000 pesos</td>";
                                        break;
                                    case '35001':
                                        table += "<td>De 35,001 a 40,000 pesos</td>";
                                        break;
                                    case '40001':
                                        table += "<td>De 40,001 a 45,000 pesos</td>";
                                        break;
                                    case '45001':
                                        table += "<td>De 45,001 a 50,000 pesos</td>";
                                        break;
                                    case '50000':
                                        table += "<td>M&aacute;s de 50,000 pesos</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 13) {
                                switch (vImputado.sancion) {
                                    case '5000':
                                        table += "<td>Hasta 5,000 pesos</td>";
                                        break;
                                    case '5001':
                                        table += "<td>De 5,001 a 10,000 pesos</td>";
                                        break;
                                    case '10001':
                                        table += "<td>De 10,001 a 15,000 pesos</td>";
                                        break;
                                    case '15001':
                                        table += "<td>De 15,001 a 20,000 pesos</td>";
                                        break;
                                    case '20001':
                                        table += "<td>De 20,001 a 25,000 pesos</td>";
                                        break;
                                    case '25001':
                                        table += "<td>De 25,001 a 30,000 pesos</td>";
                                        break;
                                    case '30001':
                                        table += "<td>De 30,001 a 35,000 pesos</td>";
                                        break;
                                    case '35001':
                                        table += "<td>De 35,001 a 40,000 pesos</td>";
                                        break;
                                    case '40001':
                                        table += "<td>De 40,001 a 45,000 pesos</td>";
                                        break;
                                    case '45001':
                                        table += "<td>De 45,001 a 50,000 pesos</td>";
                                        break;
                                    case '50000':
                                        table += "<td>M&aacute;s de 50,000 pesos</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 14) {
                                switch (vImputado.tiempoPrision) {
                                    case '6':
                                        table += "<td>Menor a 6 meses</td>";
                                        break;
                                    case '11':
                                        table += "<td>De 6 meses hasta menos de 1 a&ntilde;o</td>";
                                        break;
                                    case '12':
                                        table += "<td>De 1 a&ntilde;o hasta menos de 2 a&ntilde;os</td>";
                                        break;
                                    case '24':
                                        table += "<td>De 2 a&ntilde;os hasta menos de 3 a&ntilde;os</td>";
                                        break;
                                    case '36':
                                        table += "<td>De 3 a&ntilde;os hasta menos de 4 a&ntilde;os</td>";
                                        break;
                                    case '48':
                                        table += "<td>De 4 a&ntilde;os hasta menos de 5 a&ntilde;os</td>";
                                        break;
                                    case '72':
                                        table += "<td>De 5 a&ntilde;os hasta menos de 10 a&ntilde;os</td>";
                                        break;
                                    case '120':
                                        table += "<td>De 10 a&ntilde;os hasta menos de 15 a&ntilde;os</td>";
                                        break;
                                    case '180':
                                        table += "<td>De 15 a&ntilde;os hasta menos de 20 a&ntilde;os</td>";
                                        break;
                                    case '240':
                                        table += "<td>De 20 a&ntilde;os hasta menos de 25 a&ntilde;os</td>";
                                        break;
                                    case '300':
                                        table += "<td>De 25 a&ntilde;os o m&aacute;s</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 15) {
                                table += "<td>" + vImputado.desTipoSentencia + "</td>";
                            } else if (tipoConsulta == 16) {
                                table += "<td>" + vImputado.desTipoProcedimiento + "</td>";
                            } else if (tipoConsulta == 17) {
                                table += "<td>Sentenciado(s) de " + vImputado.numeroPenas + " Pena(s)</td>";
                            }
                            if ($("#ModalidadViolencia").is(":checked")) {
                                table += "<td>" + vImputado.desModalidadAcoso + "</td>";
                            }
                            if ($("#cveTipoPersona").val() > 0) {
                                table += "<td>" + vImputado.desTipoPersona + "</td>";
                            }
                            if ($("#cveTipoJuzgado").val() > 0) {
                                table += "<td>" + vImputado.desTipoJuzgado + "</td>";
                            }
                            if ($("#rangoEdad").is(":checked")) {
                                switch (vImputado.rangoEdad) {
                                    case '18':
                                        table += "<td>De 18 a 24</td>";
                                        break;
                                    case '25':
                                        table += "<td>De 25 a 29</td>";
                                        break;
                                    case '30':
                                        table += "<td>De 30 a 34</td>";
                                        break;
                                    case '35':
                                        table += "<td>De 35 a 39</td>";
                                        break;
                                    case '40':
                                        table += "<td>De 40 a 44</td>";
                                        break;
                                    case '45':
                                        table += "<td>De 45 a 49</td>";
                                        break;
                                    case '50':
                                        table += "<td>De 50 a 54</td>";
                                        break;
                                    case '55':
                                        table += "<td>De 55 a 59</td>";
                                        break;
                                    case '60':
                                        table += "<td>De 60 0 m&aacute;s</td>";
                                        break;
                                    case '0':
                                        table += "<td>No identificada</td>";
                                        break;
                                    default:
                                        table += "<td>No identificada</td>";
                                        break;
                                }
                            }
                            if ($("#filtroGenero").is(":checked")) {
                                table += "<td>" + vImputado.desGenero + "</td>";
                            }
                            if ($("#filtroMes").is(":checked")) {
                                table += "<td>" + $("#cmbMes :selected").text() + " / " + $("#anio").val() + "</td>";
                            }
                            if ($("#TipoViolencia").is(":checked")) {
                                if ($("#cmbTipoViolencia").val() == 0) {
                                    table += "<td>" + vImputado.victimasDeDelincuencia + "</td>";
                                    table += "<td>" + vImputado.victimasDeViolenciadeGenero + "</td>";
                                    table += "<td>" + vImputado.victimasDeTrata + "</td>";
                                    table += "<td>" + vImputado.victimasDeAcoso + "</td>";
                                } else if ($("#cmbTipoViolencia").val() == 1) {
                                    table += "<td>Delincuencia Organizada</td>";
                                } else if ($("#cmbTipoViolencia").val() == 2) {
                                    table += "<td>Violencia de G&eacute;nero</td>";
                                } else if ($("#cmbTipoViolencia").val() == 3) {
                                    table += "<td>Trata</td>";
                                } else if ($("#cmbTipoViolencia").val() == 4) {
                                    table += "<td>Acoso</td>";
                                }

                            }
                            table += "<td>" + vImputado.totalImputados + "</td>";
                            table += "</tr> ";
                            i = i + 1;
                            totalImputados += parseInt(vImputado.totalImputados);
                        });

                        table += "</tbody> ";
                        table += "</table> ";
                        $("#labelSubTotal").text('TOTAL ' + totalImputados);
                        $("#divGeneralDistritos").show();
                        $("#divGeneralDistritos").html(table);
                        $("#divGeneralDistritos").prepend('<input type="button" value="Regresar" class="btn btn-primary" onclick="cargarReporteRegiones(' + tipoConsulta + ',' + campoConsulta + ',' + cveGenero + ',' + cveTipoJuzgado + ',' + edad + ',' + modalidad + ',' + tipoViolencia + ')" /><br>');
                        $("#tblResultadoDistritos").DataTable({
                            paging: false,
                            sort: true,
                            searching: true

                        });

                        //$("#tituloDistritos").html(texto);
                        //getPaginas(pag, cantReg);
                        $("#imprimirDistritos").show();
                        $("#exportarDistritosPdf").show();
                        $("#exportarDistritosExcel").show();
                        var tituloReporte = "<span style='text-decoration: underline; cursor:pointer;' onClick='limpiar()'>Reporte de Imputados</span>";
                        tituloReporte += " / <span style='text-decoration: underline; cursor:pointer;' onClick='consultarImputadosDomicilio();'>Total</span>";
                        tituloReporte += " / <span style='text-decoration: underline; cursor:pointer;' onclick='cargarReporteRegiones(" + tipoConsulta + "," + campoConsulta + "," + cveGenero + "," + cveTipoJuzgado + "," + edad + "," + modalidad + "," + tipoViolencia + ")'>Regiones</span>";
                        tituloReporte += " / Distritos";
                        $("#h5titulo").html(tituloReporte);
                    } else {
                        $("#div-advertenciaDistritos").html('' + json.mnj);
                        $("#div-advertenciaDistritos").show("slide");
                        setTimeAlert("div-advertenciaDistritos");

                        $("#divGeneralDistritos").html("");
                        //getPaginas(pag, cantReg);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDagerDistritos").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDagerDistritos").show("slide");
                    setTimeAlert("divAlertDagerDistritos");
                }
            });
        }

        function cargarReporteJuzgados(distrito, region, anio, tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, rangoEdad, modalidad, tipoViolencia) {
            changeDivForm(4);
            contenidoReporteJuzgados(distrito, region, anio, tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, rangoEdad, modalidad, tipoViolencia);
        }

        function contenidoReporteJuzgados(distrito, region, anio, tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, edad, modalidad, tipoViolencia) {
            $("#div-advertenciaJuzgados").empty();
            $("#divGeneralJuzgados").empty();
            $("#imprimirGeneral").hide();
            $("#imprimirRegiones").hide();
            $("#imprimirDistritos").hide();
            $("#imprimirDesglose").hide();
            $("#exportarGeneralPdf").hide();
            $("#exportarRegionesPdf").hide();
            $("#exportarDistritosPdf").hide();
            $("#exportarDesglosePdf").hide();
            $("#exportarGeneralExcel").hide();
            $("#exportarRegionesExcel").hide();
            $("#exportarDistritosExcel").hide();
            $("#exportarDesgloseExcel").hide();
            var totalImputados = 0;
            var cveMes = $("#cmbMes").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var desgloseGenero = "";
            if ($("#filtroGenero").is(":checked")) {
                desgloseGenero = "S";
            } else {
                desgloseGenero = "N";
            }
            var rangoEdad = "";
            if ($("#rangoEdad").is(":checked")) {
                rangoEdad = "S";
            } else {
                rangoEdad = "N";
            }
            var mostrarSentenciados = "";
            if ($("#filtroSentenciados").is(":checked")) {
                mostrarSentenciados = "S";
            } else {
                mostrarSentenciados = "N";
            }
            var edadMinima = $("#edadMinima").val();
            var edadMaxima = $("#edadMaxima").val();
            var mostrarTipoViolencia = "";
            var mostrarModalidadViolencia = "";
            if ($("#TipoViolencia").is(":checked")) {
                mostrarTipoViolencia = "S";
            } else {
                mostrarTipoViolencia = "N";
            }
            if ($("#ModalidadViolencia").is(":checked")) {
                mostrarModalidadViolencia = "S";
            } else {
                mostrarModalidadViolencia = "N";
            }
            var strDatos = "accion=consultaImputadosJuzgado";
            strDatos += "&activo=S";
            strDatos += "&anio=" + anio;
            strDatos += "&cveRegion=" + region;
            strDatos += "&cveDistrito=" + distrito;
            strDatos += "&consultarPor=" + tipoConsulta;
            if (tipoConsulta == 1) {
                strDatos += "&cveAlfabetismo=" + campoConsulta;
            } else if (tipoConsulta == 2) {
                strDatos += "&cveEspanol=" + campoConsulta;
            } else if (tipoConsulta == 3) {
                strDatos += "&cveDelito=" + campoConsulta;
            } else if (tipoConsulta == 4) {
                strDatos += "&cveTipoFamiliaLinguistica=" + campoConsulta;
            } else if (tipoConsulta == 5) {
                strDatos += "&cveGenero=" + campoConsulta;
            } else if (tipoConsulta == 6) {
                strDatos += "&cveNivelInstruccion=" + campoConsulta;
            } else if (tipoConsulta == 7) {
                strDatos += "&cveGradoParticipacion=" + campoConsulta;
            } else if (tipoConsulta == 8) {
                strDatos += "&cveResidenciaHabitual=" + campoConsulta;
            } else if (tipoConsulta == 9) {
                strDatos += "&cvePais=" + campoConsulta;
            } else if (tipoConsulta == 10) {
                strDatos += "&cveOcupacion=" + campoConsulta;
            } else if (tipoConsulta == 11) {
                strDatos += "&rangoDelitos=" + campoConsulta;
            } else if (tipoConsulta == 12) {
                strDatos += "&multa=" + campoConsulta;
            } else if (tipoConsulta == 13) {
                strDatos += "&sancion=" + campoConsulta;
            } else if (tipoConsulta == 14) {
                strDatos += "&tiempoPrision=" + campoConsulta;
            } else if (tipoConsulta == 15) {
                strDatos += "&cveTipoSentencia=" + campoConsulta;
            } else if (tipoConsulta == 16) {
                strDatos += "&cveConclusion=" + campoConsulta;
            } else if (tipoConsulta == 17) {
                strDatos += "&numeroPenas=" + campoConsulta;
            }
            strDatos += "&cveTipoJuzgado=" + cveTipoJuzgado;
            strDatos += "&cveGenero=" + cveGenero;
            strDatos += "&cveMes=" + cveMes;
            strDatos += "&fechaInicial=" + fechaInicial;
            strDatos += "&fechaFinal=" + fechaFinal;
            strDatos += "&desgloseGenero=" + desgloseGenero;
            strDatos += "&edadMinima=" + edadMinima;
            strDatos += "&edadMaxima=" + edadMaxima;
            strDatos += "&rangoEdad=" + rangoEdad;
            strDatos += "&edad=" + edad;
            strDatos += "&consultarSentenciados=" + mostrarSentenciados;
            strDatos += "&cveTipoPersona=" + $("#cveTipoPersona").val();
            strDatos += "&mostrarTipoViolencia=" + mostrarTipoViolencia;
            strDatos += "&mostrarModalidaViolencia=" + mostrarModalidadViolencia;
            strDatos += "&cveTipoViolencia=" + tipoViolencia;
            strDatos += "&cveModalidadViolencia=" + modalidad;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReporteimputadosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                ToggleLoading(1);
                },
                success: function (datos) {
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        var texto = "";
                        if ($("#filtroSentenciados").is(":checked")) {
                            texto = "Reporte de Sentenciados";
                        } else {
                            texto = "Reporte de imputados";
                        }
                        if ($("#filtroAnio").is(":checked")) {
                            texto += " en el A&ntilde;o " + $("#anio").val();
                        } else if ($("#filtroMes").is(":checked")) {
                            texto += " en el mes de " + ucFirstAllWords($("#cmbMes :selected").text()) + " de " + $("#anio").val();
                        } else if ($("#filtroFechas").is(":checked")) {
                            texto += " de " + $("#fechaInicial").val() + " a " + $("#fechaFinal").val();
                        }
                        texto += " en el Estado de M&eacute;xico";
                        var introspeccion = "Estado: <strong>M&Eacute;XICO </strong><br>" + "Regi&oacute;n: " + "<strong>" + json.resultados[0].desRegion + " </strong><br>";
                        introspeccion += "Distrito: <strong>" + json.resultados[0].desDistrito + " </strong>";
                        $("#rutaIntrospeccion").html(introspeccion);

                        $("#idLabelDescripcion").html(texto);

                        table += "<table id='tblResultadoJuzgados' border='1' cellspacing='0' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>No.</th>";
                        table += "<th>Juzgado</th>";
                        if (tipoConsulta == 1) {
                            table += "<th>Alfabetismo</th>";
                        } else if (tipoConsulta == 2) {
                            table += "<th>Dominio de Espa&ntilde;ol</th>";
                        } else if (tipoConsulta == 3) {
                            table += "<th>Delito</th>";
                        } else if (tipoConsulta == 4) {
                            table += "<th>Familia Ling&uuml;istica</th>";
                        } else if (tipoConsulta == 5) {
                            table += "<th>G&eacute;nero</th>";
                        } else if (tipoConsulta == 6) {
                            table += "<th>Grado de Estudios</th>";
                        } else if (tipoConsulta == 7) {
                            table += "<th>Grado de Participaci&oacute;n</th>";
                        } else if (tipoConsulta == 8) {
                            table += "<th>Lugar habitual de residencia</th>";
                        } else if (tipoConsulta == 9) {
                            table += "<th>Pa&iacute;s Nacionalidad</th>";
                        } else if (tipoConsulta == 10) {
                            table += "<th>Ocupaci&oacute;n</th>";
                        } else if (tipoConsulta == 11) {
                            table += "<th>N&uacute;mero de Delitos</th>";
                        } else if (tipoConsulta == 12) {
                            table += "<th>Monto de la Multa</th>";
                        } else if (tipoConsulta == 13) {
                            table += "<th>Reparaci&oacute;n del Da&ntilde;o</th>";
                        } else if (tipoConsulta == 14) {
                            table += "<th>Tiempo en Prisi&oacute;n</th>";
                        } else if (tipoConsulta == 15) {
                            table += "<th>Tipo Sentencia</th>";
                        } else if (tipoConsulta == 16) {
                            table += "<th>Procedimiento</th>";
                        } else if (tipoConsulta == 17) {
                            table += "<th>N&uacute;mero de Penas</th>";
                        }
                        if ($("#ModalidadViolencia").is(":checked")) {
                            table += "<th>Modalidad de Violencia</th>";
                        }
                        if ($("#cveTipoPersona").val() > 0) {
                            table += "<th>Tipo de persona</th>";
                        }
                        if ($("#cveTipoJuzgado").val() > 0) {
                            table += "<th>Tipo Juzgado</th>";
                        }
                        if ($("#rangoEdad").is(":checked")) {
                            table += "<th>Rango de Edad</th>";
                        }
                        if ($("#filtroGenero").is(":checked")) {
                            table += "<th>G&eacute;nero</th>";
                        }
                        if ($("#filtroMes").is(":checked")) {
                            table += "<th>Mes / A&ntilde;o</th>";
                        }
                        if ($("#TipoViolencia").is(":checked")) {

                            if ($("#cmbTipoViolencia").val() == 0) {
                                table += "<th>Delincuencia organizada</th>";
                                table += "<th>Violencia de G&eacute;nero</th>";
                                table += "<th>Trata</th>";
                                table += "<th>Acoso</th>";
                            } else {
                                table += "<th>Tipo de Violencia</th>";
                            }

                        }
                        table += "<th>Subtotal</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var i = 1;
                        $.each(json.resultados, function (k, vImputado) {
                            var cadenaParametros = '1,' + vImputado.cveJuzgado + ',' + vImputado.cveDistrito + ',' + vImputado.cveRegion + ',' + anio + ',' + tipoConsulta + ',' + campoConsulta;
                            if ($("#filtroGenero").is(":checked")) {
                                cadenaParametros += "," + vImputado.cveGenero;
                            } else {
                                cadenaParametros += ",0";
                            }
                            if ($("#cveTipoJuzgado").val() > 0) {
                                cadenaParametros += "," + vImputado.cveTipoJuzgado;
                            } else {
                                cadenaParametros += ",0";
                            }
                            if ($("#rangoEdad").is(":checked")) {
                                cadenaParametros += "," + vImputado.rangoEdad;
                            } else {
                                cadenaParametros += ",0";
                            }
                            if ($("#ModalidadViolencia").is(":checked")) {
                                cadenaParametros += "," + vImputado.cveModalidadAcoso;
                            } else {
                                cadenaParametros += ",0";
                            }
                            if ($("#TipoViolencia").is(":checked")) {
                                cadenaParametros += "," + vImputado.tipoViolencia;
                            } else {
                                cadenaParametros += ",0";
                            }
                            table += '<tr onclick="cargarReporteImputadosDesglosado(' + cadenaParametros + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';

                            table += "<td>" + i + "</td>";
                            table += "<td>" + vImputado.desJuzgado + "</td>";
                            if (tipoConsulta == 1) {
                                table += "<td>" + vImputado.desAlfabetismo + "</td>";
                            } else if (tipoConsulta == 2) {
                                table += "<td>" + vImputado.desEspanol + "</td>";
                            } else if (tipoConsulta == 3) {
                                table += "<td>" + vImputado.desDelito + "</td>";
                            } else if (tipoConsulta == 4) {
                                table += "<td>" + vImputado.desTipoFamiliaLinguistica + "</td>";
                            } else if (tipoConsulta == 5) {
                                table += "<td>" + vImputado.desGenero + "</td>";
                            } else if (tipoConsulta == 6) {
                                table += "<td>" + vImputado.desNivelInstruccion + "</td>";
                            } else if (tipoConsulta == 7) {
                                table += "<td>" + vImputado.desGradoParticipacion + "</td>";
                            } else if (tipoConsulta == 8) {
                                //table += "<td>" + vImputado.desConvivencia + "</td>";
                                switch (vImputado.cveResidenciaHabitual) {
                                    case '1':
                                        table += "<td>Esta Entidad Federativa</td>";
                                        break;
                                    case '2':
                                        table += "<td>Otra Entidad Federativa</td>";
                                        break;
                                    case '3':
                                        table += "<td>Estados Unidos de Norteam&eacute;rica</td>";
                                        break;
                                    case '4':
                                        table += "<td>canad&aacute;</td>";
                                        break;
                                    case '5':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Centroam&eacute;rica</td>";
                                        break;
                                    case '6':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Sudam&eacute;rica</td>";
                                        break;
                                    case '7':
                                        table += table += "<td>Alg&uacute;n Pa&iacute;s de Europa</td>";
                                        break;
                                    case '8':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Asia</td>";
                                        break;
                                    case '9':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de &Aacute;frica</td>";
                                        break;
                                    case '10':
                                        table += "<td>Otro Pa&iacute;s (distinto a los anteriores)</td>";
                                        break;
                                    case '11':
                                        table += "<td>No identificado</td>";
                                        break;
                                    default:
                                        table += "<td>No identificado</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 9) {
                                table += "<td>" + vImputado.desPais + "</td>";
                            } else if (tipoConsulta == 10) {
                                table += "<td>" + vImputado.desOcupacion + "</td>";
                            } else if (tipoConsulta == 11) {
                                if (parseInt(vImputado.rangoDelitos) < 6) {
                                    table += "<td>Imputados de " + vImputado.rangoDelitos + " delito(s)</td>";
                                } else {
                                    table += "<td>Imputados de " + vImputado.rangoDelitos + " o  m&aacute;s delitos</td>";
                                }
                            } else if (tipoConsulta == 12) {
                                switch (vImputado.multa) {
                                    case '5000':
                                        table += "<td>Hasta 5,000 pesos</td>";
                                        break;
                                    case '5001':
                                        table += "<td>De 5,001 a 10,000 pesos</td>";
                                        break;
                                    case '10001':
                                        table += "<td>De 10,001 a 15,000 pesos</td>";
                                        break;
                                    case '15001':
                                        table += "<td>De 15,001 a 20,000 pesos</td>";
                                        break;
                                    case '20001':
                                        table += "<td>De 20,001 a 25,000 pesos</td>";
                                        break;
                                    case '25001':
                                        table += "<td>De 25,001 a 30,000 pesos</td>";
                                        break;
                                    case '30001':
                                        table += "<td>De 30,001 a 35,000 pesos</td>";
                                        break;
                                    case '35001':
                                        table += "<td>De 35,001 a 40,000 pesos</td>";
                                        break;
                                    case '40001':
                                        table += "<td>De 40,001 a 45,000 pesos</td>";
                                        break;
                                    case '45001':
                                        table += "<td>De 45,001 a 50,000 pesos</td>";
                                        break;
                                    case '50000':
                                        table += "<td>M&aacute;s de 50,000 pesos</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 13) {
                                switch (vImputado.sancion) {
                                    case '5000':
                                        table += "<td>Hasta 5,000 pesos</td>";
                                        break;
                                    case '5001':
                                        table += "<td>De 5,001 a 10,000 pesos</td>";
                                        break;
                                    case '10001':
                                        table += "<td>De 10,001 a 15,000 pesos</td>";
                                        break;
                                    case '15001':
                                        table += "<td>De 15,001 a 20,000 pesos</td>";
                                        break;
                                    case '20001':
                                        table += "<td>De 20,001 a 25,000 pesos</td>";
                                        break;
                                    case '25001':
                                        table += "<td>De 25,001 a 30,000 pesos</td>";
                                        break;
                                    case '30001':
                                        table += "<td>De 30,001 a 35,000 pesos</td>";
                                        break;
                                    case '35001':
                                        table += "<td>De 35,001 a 40,000 pesos</td>";
                                        break;
                                    case '40001':
                                        table += "<td>De 40,001 a 45,000 pesos</td>";
                                        break;
                                    case '45001':
                                        table += "<td>De 45,001 a 50,000 pesos</td>";
                                        break;
                                    case '50000':
                                        table += "<td>M&aacute;s de 50,000 pesos</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 14) {
                                switch (vImputado.tiempoPrision) {
                                    case '6':
                                        table += "<td>Menor a 6 meses</td>";
                                        break;
                                    case '11':
                                        table += "<td>De 6 meses hasta menos de 1 a&ntilde;o</td>";
                                        break;
                                    case '12':
                                        table += "<td>De 1 a&ntilde;o hasta menos de 2 a&ntilde;os</td>";
                                        break;
                                    case '24':
                                        table += "<td>De 2 a&ntilde;os hasta menos de 3 a&ntilde;os</td>";
                                        break;
                                    case '36':
                                        table += "<td>De 3 a&ntilde;os hasta menos de 4 a&ntilde;os</td>";
                                        break;
                                    case '48':
                                        table += "<td>De 4 a&ntilde;os hasta menos de 5 a&ntilde;os</td>";
                                        break;
                                    case '72':
                                        table += "<td>De 5 a&ntilde;os hasta menos de 10 a&ntilde;os</td>";
                                        break;
                                    case '120':
                                        table += "<td>De 10 a&ntilde;os hasta menos de 15 a&ntilde;os</td>";
                                        break;
                                    case '180':
                                        table += "<td>De 15 a&ntilde;os hasta menos de 20 a&ntilde;os</td>";
                                        break;
                                    case '240':
                                        table += "<td>De 20 a&ntilde;os hasta menos de 25 a&ntilde;os</td>";
                                        break;
                                    case '300':
                                        table += "<td>De 25 a&ntilde;os o m&aacute;s</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 15) {
                                table += "<td>" + vImputado.desTipoSentencia + "</td>";
                            } else if (tipoConsulta == 16) {
                                table += "<td>" + vImputado.desTipoProcedimiento + "</td>";
                            } else if (tipoConsulta == 17) {
                                table += "<td>Sentenciado(s) de " + vImputado.numeroPenas + " Pena(s)</td>";
                            }
                            if ($("#ModalidadViolencia").is(":checked")) {
                                table += "<td>" + vImputado.desModalidadAcoso + "</td>";
                            }
                            if ($("#cveTipoPersona").val() > 0) {
                                table += "<td>" + vImputado.desTipoPersona + "</td>";
                            }
                            if ($("#cveTipoJuzgado").val() > 0) {
                                table += "<td>" + vImputado.desTipoJuzgado + "</td>";
                            }
                            if ($("#rangoEdad").is(":checked")) {
                                switch (vImputado.rangoEdad) {
                                    case '18':
                                        table += "<td>De 18 a 24</td>";
                                        break;
                                    case '25':
                                        table += "<td>De 25 a 29</td>";
                                        break;
                                    case '30':
                                        table += "<td>De 30 a 34</td>";
                                        break;
                                    case '35':
                                        table += "<td>De 35 a 39</td>";
                                        break;
                                    case '40':
                                        table += "<td>De 40 a 44</td>";
                                        break;
                                    case '45':
                                        table += "<td>De 45 a 49</td>";
                                        break;
                                    case '50':
                                        table += "<td>De 50 a 54</td>";
                                        break;
                                    case '55':
                                        table += "<td>De 55 a 59</td>";
                                        break;
                                    case '60':
                                        table += "<td>De 60 0 m&aacute;s</td>";
                                        break;
                                    case '0':
                                        table += "<td>No identificada</td>";
                                        break;
                                    default:
                                        table += "<td>No identificada</td>";
                                        break;
                                }
                            }
                            if ($("#filtroGenero").is(":checked")) {
                                table += "<td>" + vImputado.desGenero + "</td>";
                            }
                            if ($("#filtroMes").is(":checked")) {
                                table += "<td>" + $("#cmbMes :selected").text() + " / " + $("#anio").val() + "</td>";
                            }
                            if ($("#TipoViolencia").is(":checked")) {
                                if ($("#cmbTipoViolencia").val() == 0) {
                                    table += "<td>" + vImputado.victimasDeDelincuencia + "</td>";
                                    table += "<td>" + vImputado.victimasDeViolenciadeGenero + "</td>";
                                    table += "<td>" + vImputado.victimasDeTrata + "</td>";
                                    table += "<td>" + vImputado.victimasDeAcoso + "</td>";
                                } else if ($("#cmbTipoViolencia").val() == 1) {
                                    table += "<td>Delincuencia Organizada</td>";
                                } else if ($("#cmbTipoViolencia").val() == 2) {
                                    table += "<td>Violencia de G&eacute;nero</td>";
                                } else if ($("#cmbTipoViolencia").val() == 3) {
                                    table += "<td>Trata</td>";
                                } else if ($("#cmbTipoViolencia").val() == 4) {
                                    table += "<td>Acoso</td>";
                                }
                            }
                            table += "<td>" + vImputado.totalImputados + "</td>";
                            table += "</tr> ";
                            i = i + 1;
                            totalImputados += parseInt(vImputado.totalImputados);
                        });

                        table += "</tbody> ";
                        table += "</table> ";
                        $("#labelSubTotal").text('TOTAL: ' + totalImputados);
                        $("#divGeneralJuzgados").show();
                        $("#divGeneralJuzgados").html(table);
                        $("#divGeneralJuzgados").prepend('<input type="button" value="Regresar" class="btn btn-primary" onclick="cargarReporteDistritos(' + region + ',' + anio + ',' + tipoConsulta + ',' + campoConsulta + ',' + cveGenero + ',' + cveTipoJuzgado + ',' + edad + ',' + modalidad + ',' + tipoViolencia + ')" /><br>');
                        $("#tblResultadoJuzgados").DataTable({
                            paging: false,
                            sort: true,
                            searching: true

                        });

                        //$("#tituloJuzgados").html(texto);
                        //getPaginas(pag, cantReg);
                        $("#imprimirJuzgados").show();
                        $("#exportarJuzgadosPdf").show();
                        $("#exportarJuzgadosExcel").show();
                        var tituloReporte = "<span style='text-decoration: underline; cursor:pointer;' onClick='limpiar()'>Reporte de Imputados</span>";
                        tituloReporte += " / <span style='text-decoration: underline; cursor:pointer;' onClick='consultarImputadosDomicilio();'>Total</span>";
                        tituloReporte += " / <span style='text-decoration: underline; cursor:pointer;' onclick='cargarReporteRegiones(" + tipoConsulta + "," + campoConsulta + "," + cveGenero + "," + cveTipoJuzgado + "," + edad + "," + modalidad + "," + tipoViolencia + ")'>Regiones</span>";
                        tituloReporte += " / <span style='text-decoration: underline; cursor:pointer;' onclick='cargarReporteDistritos(" + region + "," + anio + "," + tipoConsulta + "," + campoConsulta + "," + cveGenero + "," + cveTipoJuzgado + "," + edad + "," + modalidad + "," + tipoViolencia + ")'>Distritos</span>";
                        tituloReporte += " / Juzgados";
                        $("#h5titulo").html(tituloReporte);
                    } else {
                        $("#div-advertenciaJuzgados").html('' + json.mnj);
                        $("#div-advertenciaJuzgados").show("slide");
                        setTimeAlert("div-advertenciaJuzgados");

                        $("#divGeneralJuzgados").html("");
                        //getPaginas(pag, cantReg);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDagerJuzgados").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDagerJuzgados").show("slide");
                    setTimeAlert("divAlertDagerJuzgados");
                }
            });
        }

        function cargarReporteImputadosDesglosado(Aux, juzgado, distrito, region, anio, tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, rangoEdad, modalidad, tipoViolencia) {
            changeDivForm(5);
            contenidoReporteImputadosDesglosado(Aux, juzgado, distrito, region, anio, tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, rangoEdad, modalidad, tipoViolencia);
        }

        function consultarPaginacionImputadosDesglose(Aux) {
            if (Aux == 1) {
                $("#cmbPaginacion").val(1);
            }
            var cveJuzgado = $("#cveJuzgado").val();
            var cveTipoJuzgado = $("#cveTipoJuzgado").val();
            var cveGenero = $("#cveGenero").val();
            var cveDistrito = $("#cveDistrito").val();
            var cveRegion = $("#cveRegion").val();
            var anio = $("#anioCausa").val();
            var tipoConsulta = $("#consultaPor").val();
            var campoConsulta = $("#campoConsulta").val();
            var rangoEdad = $("#edad").val();
            var modalidad = $("#modalidad").val();
            var tipoViolencia = $("#idTipoViolencia").val();
            changeDivForm(5);
            contenidoReporteImputadosDesglosado(0, cveJuzgado, cveDistrito, cveRegion, anio, tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, rangoEdad, modalidad, tipoViolencia);
        }

        function contenidoReporteImputadosDesglosado(Aux, juzgado, distrito, region, anio, tipoConsulta, campoConsulta, cveGenero, cveTipoJuzgado, edad, modalidad, tipoViolencia) {
            if (Aux == 1) {
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(100);
            }
            $("#imprimirGeneral").hide();
            $("#imprimirRegiones").hide();
            $("#imprimirDistritos").hide();
            $("#imprimirJuzgados").hide();
            $("#exportarGeneralPdf").hide();
            $("#exportarRegionesPdf").hide();
            $("#exportarDistritosPdf").hide();
            $("#exportarJuzgadosPdf").hide();
            $("#exportarGeneralExcel").hide();
            $("#exportarRegionesExcel").hide();
            $("#exportarDistritosExcel").hide();
            $("#exportarJuzgadosExcel").hide();
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            $("#div-advertenciaJuzgados").empty();
            var cveMes = $("#cmbMes").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var desgloseGenero = "";
            if ($("#filtroGenero").is(":checked")) {
                desgloseGenero = "S";
            } else {
                desgloseGenero = "N";
            }
            var rangoEdad = "";
            if ($("#rangoEdad").is(":checked")) {
                rangoEdad = "S";
            } else {
                rangoEdad = "N";
            }
            var mostrarSentenciados = "";
            if ($("#filtroSentenciados").is(":checked")) {
                mostrarSentenciados = "S";
            } else {
                mostrarSentenciados = "N";
            }
            var edadMinima = $("#edadMinima").val();
            var edadMaxima = $("#edadMaxima").val();
            var mostrarTipoViolencia = "";
            var mostrarModalidadViolencia = "";
            if ($("#TipoViolencia").is(":checked")) {
                mostrarTipoViolencia = "S";
            } else {
                mostrarTipoViolencia = "N";
            }
            if ($("#ModalidadViolencia").is(":checked")) {
                mostrarModalidadViolencia = "S";
            } else {
                mostrarModalidadViolencia = "N";
            }
            var strDatos = "accion=consultaImputadosGeneralDesglosado";
            var nombre = "";
            var num = 0;
            strDatos += "&activo=S";
            strDatos += "&anio=" + anio;
            strDatos += "&cveRegion=" + region;
            strDatos += "&cveDistrito=" + distrito;
            strDatos += "&cveJuzgado=" + juzgado;
            strDatos += "&pagina=" + pag;
            strDatos += "&registrosPorPagina=" + cantReg;
            strDatos += "&consultarPor=" + tipoConsulta;
            if (tipoConsulta == 1) {
                strDatos += "&cveAlfabetismo=" + campoConsulta;
            } else if (tipoConsulta == 2) {
                strDatos += "&cveEspanol=" + campoConsulta;
            } else if (tipoConsulta == 3) {
                strDatos += "&cveDelito=" + campoConsulta;
            } else if (tipoConsulta == 4) {
                strDatos += "&cveTipoFamiliaLinguistica=" + campoConsulta;
            } else if (tipoConsulta == 5) {
                strDatos += "&cveGenero=" + campoConsulta;
            } else if (tipoConsulta == 6) {
                strDatos += "&cveNivelInstruccion=" + campoConsulta;
            } else if (tipoConsulta == 7) {
                strDatos += "&cveGradoParticipacion=" + campoConsulta;
            } else if (tipoConsulta == 8) {
                strDatos += "&cveResidenciaHabitual=" + campoConsulta;
            } else if (tipoConsulta == 9) {
                strDatos += "&cvePais=" + campoConsulta;
            } else if (tipoConsulta == 10) {
                strDatos += "&cveOcupacion=" + campoConsulta;
            } else if (tipoConsulta == 11) {
                strDatos += "&rangoDelitos=" + campoConsulta;
            } else if (tipoConsulta == 12) {
                strDatos += "&multa=" + campoConsulta;
            } else if (tipoConsulta == 13) {
                strDatos += "&sancion=" + campoConsulta;
            } else if (tipoConsulta == 14) {
                strDatos += "&tiempoPrision=" + campoConsulta;
            } else if (tipoConsulta == 15) {
                strDatos += "&cveTipoSentencia=" + campoConsulta;
            } else if (tipoConsulta == 16) {
                strDatos += "&cveConclusion=" + campoConsulta;
            } else if (tipoConsulta == 17) {
                strDatos += "&numeroPenas=" + campoConsulta;
            }
            strDatos += "&cveTipoJuzgado=" + cveTipoJuzgado;
            strDatos += "&cveGenero=" + cveGenero;
            strDatos += "&cveMes=" + cveMes;
            strDatos += "&fechaInicial=" + fechaInicial;
            strDatos += "&fechaFinal=" + fechaFinal;
            strDatos += "&desgloseGenero=" + desgloseGenero;
            strDatos += "&edadMinima=" + edadMinima;
            strDatos += "&edadMaxima=" + edadMaxima;
            strDatos += "&rangoEdad=" + rangoEdad;
            strDatos += "&edad=" + edad;
            strDatos += "&consultarSentenciados=" + mostrarSentenciados;
            strDatos += "&cveTipoPersona=" + $("#cveTipoPersona").val();
            strDatos += "&mostrarTipoViolencia=" + mostrarTipoViolencia;
            strDatos += "&mostrarModalidaViolencia=" + mostrarModalidadViolencia;
            strDatos += "&cveTipoViolencia=" + tipoViolencia;
            strDatos += "&cveModalidadViolencia=" + modalidad;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReporteimputadosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                ToggleLoading(1);
                },
                success: function (datos) {
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {

                        var texto = "";
                        if ($("#filtroSentenciados").is(":checked")) {
                            texto = "Reporte de Sentenciados";
                        } else {
                            texto = "Reporte de imputados";
                        }
                        if ($("#filtroAnio").is(":checked")) {
                            texto += " en el A&ntilde;o " + $("#anio").val();
                        } else if ($("#filtroMes").is(":checked")) {
                            texto += " en el mes de " + ucFirstAllWords($("#cmbMes :selected").text()) + " de " + $("#anio").val();
                        } else if ($("#filtroFechas").is(":checked")) {
                            texto += " de " + $("#fechaInicial").val() + " a " + $("#fechaFinal").val();
                        }
                        texto += " en el Estado de M&eacute;xico";
                        var introspeccion = "Estado: <strong>M&Eacute;XICO </strong><br>" + "Regi&oacute;n: " + "<strong>" + json.resultados[0].desRegion + " </strong><br>";
                        introspeccion += "Distrito: <strong>" + json.resultados[0].desDistrito + " </strong><br>";
                        introspeccion += "Juzgado: <strong>" + json.resultados[0].desJuzgado + " </strong>";
                        $("#rutaIntrospeccion").html(introspeccion);

                        $("#idLabelDescripcion").html(texto);

                        table += "<table id='tblResultadoImputadosGenero' border='1' cellspacing='0' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>No</th>";
                        table += "<th>Imputado</th>";
                        table += "<th>Causa</th>";
                        if (tipoConsulta == 1) {
                            table += "<th>Alfabetismo</th>";
                        } else if (tipoConsulta == 2) {
                            table += "<th>Dominio de Espa&ntilde;ol</th>";
                        } else if (tipoConsulta == 3) {
                            table += "<th>Delito</th>";
                        } else if (tipoConsulta == 4) {
                            table += "<th>Familia Ling&uuml;istica</th>";
                        } else if (tipoConsulta == 5) {
                            table += "<th>G&eacute;nero</th>";
                        } else if (tipoConsulta == 6) {
                            table += "<th>Grado de Estudios</th>";
                        } else if (tipoConsulta == 7) {
                            table += "<th>Grado de Participaci&oacute;n</th>";
                        } else if (tipoConsulta == 8) {
                            table += "<th>Lugar habitual de residencia</th>";
                        } else if (tipoConsulta == 9) {
                            table += "<th>Pa&iacute;s Nacionalidad</th>";
                        } else if (tipoConsulta == 10) {
                            table += "<th>Ocupaci&oacute;n</th>";
                        } else if (tipoConsulta == 11) {
                            table += "<th>N&uacute;mero de Delitos</th>";
                        } else if (tipoConsulta == 12) {
                            table += "<th>Rango de la Multa</th>";
                            table += "<th>Monto Multa</th>";
                        } else if (tipoConsulta == 13) {
                            table += "<th> Rango Reparaci&oacute;n del Da&ntilde;o</th>";
                            table += "<th>Monto Reparaci&oacute;n Da&ntilde;o</th>";
                        } else if (tipoConsulta == 14) {
                            table += "<th>Rango Tiempo en Prisi&oacute;n</th>";
                        } else if (tipoConsulta == 15) {
                            table += "<th>Tipo Sentencia</th>";
                        } else if (tipoConsulta == 16) {
                            table += "<th>Procedimiento</th>";
                        } else if (tipoConsulta == 17) {
                            table += "<th>N&uacute;mero de Penas</th>";
                        }
                        if ($("#ModalidadViolencia").is(":checked")) {
                            table += "<th>Modalidad de Violencia</th>";
                        }
                        if ($("#cveTipoPersona").val() > 0) {
                            table += "<th>Tipo de persona</th>";
                        }
                        if ($("#cveTipoJuzgado").val() > 0) {
                            table += "<th>Tipo Juzgado</th>";
                        }
                        if ($("#rangoEdad").is(":checked")) {
                            table += "<th>Rango de Edad</th>";
                            table += "<th>Edad</th>";
                        }
                        if ($("#filtroGenero").is(":checked")) {
                            table += "<th>G&eacute;nero</th>";
                        }
                        if ($("#filtroMes").is(":checked")) {
                            table += "<th>Mes / A&ntilde;o</th>";
                        }

                        if ($("#TipoViolencia").is(":checked")) {

                            if ($("#cmbTipoViolencia").val() == 0) {
                                table += "<th>Ofendido</th>";
                                table += "<th>Victima de</th>";
                                /*table += "<th>Delincuencia organizada</th>";
                                 table += "<th>Violencia de G&eacute;nero</th>";
                                 table += "<th>Trata</th>";
                                 table += "<th>Acoso</th>";*/
                            } else {
                                table += "<th>Tipo de Violencia</th>";
                            }

                        }
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var i = 1;
                        $.each(json.resultados, function (k, vImputado) {
                            num++;
                            table += '<tr>';
                            table += "<td>" + num + "</td>";
                            if (vImputado.cveTipoPersona == 1) {
                                nombre = vImputado.nombre + " " + vImputado.paterno + " " + vImputado.materno;
                            } else {
                                nombre = vImputado.nombreMoral;
                            }
                            table += "<td>" + nombre + "</td>";
                            table += "<td>" + vImputado.desTipoCarpeta + " " + vImputado.numero + "/" + vImputado.anio + "</td>";
                            if (tipoConsulta == 1) {
                                table += "<td>" + vImputado.desAlfabetismo + "</td>";
                            } else if (tipoConsulta == 2) {
                                table += "<td>" + vImputado.desEspanol + "</td>";
                            } else if (tipoConsulta == 3) {
                                table += "<td>" + vImputado.desDelito + "</td>";
                            } else if (tipoConsulta == 4) {
                                table += "<td>" + vImputado.desTipoFamiliaLinguistica + "</td>";
                            } else if (tipoConsulta == 5) {
                                table += "<td>" + vImputado.desGenero + "</td>";
                            } else if (tipoConsulta == 6) {
                                table += "<td>" + vImputado.desNivelInstruccion + "</td>";
                            } else if (tipoConsulta == 7) {
                                table += "<td>" + vImputado.desGradoParticipacion + "</td>";
                            } else if (tipoConsulta == 8) {
                                //table += "<td>" + vImputado.desConvivencia + "</td>";
                                switch (vImputado.cveResidenciaHabitual) {
                                    case '1':
                                        table += "<td>Esta Entidad Federativa</td>";
                                        break;
                                    case '2':
                                        table += "<td>Otra Entidad Federativa</td>";
                                        break;
                                    case '3':
                                        table += "<td>Estados Unidos de Norteam&eacute;rica</td>";
                                        break;
                                    case '4':
                                        table += "<td>canad&aacute;</td>";
                                        break;
                                    case '5':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Centroam&eacute;rica</td>";
                                        break;
                                    case '6':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Sudam&eacute;rica</td>";
                                        break;
                                    case '7':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Europa</td>";
                                        break;
                                    case '8':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de Asia</td>";
                                        break;
                                    case '9':
                                        table += "<td>Alg&uacute;n Pa&iacute;s de &Aacute;frica</td>";
                                        break;
                                    case '10':
                                        table += "<td>Otro Pa&iacute;s (distinto a los anteriores)</td>";
                                        break;
                                    case '11':
                                        table += "<td>No identificado</td>";
                                        break;
                                    default:
                                        table += "<td>No identificado</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 9) {
                                table += "<td>" + vImputado.desPais + "</td>";
                            } else if (tipoConsulta == 10) {
                                table += "<td>" + vImputado.desOcupacion + "</td>";
                            } else if (tipoConsulta == 11) {
                                if (parseInt(vImputado.rangoDelitos) < 6) {
                                    table += "<td>Imputados de " + vImputado.rangoDelitos + " delito(s)</td>";
                                } else {
                                    table += "<td>Imputados de " + vImputado.rangoDelitos + " o  m&aacute;s delitos</td>";
                                }
                            } else if (tipoConsulta == 12) {
                                switch (vImputado.multa) {
                                    case '5000':
                                        table += "<td>Hasta 5,000 pesos</td>";
                                        break;
                                    case '5001':
                                        table += "<td>De 5,001 a 10,000 pesos</td>";
                                        break;
                                    case '10001':
                                        table += "<td>De 10,001 a 15,000 pesos</td>";
                                        break;
                                    case '15001':
                                        table += "<td>De 15,001 a 20,000 pesos</td>";
                                        break;
                                    case '20001':
                                        table += "<td>De 20,001 a 25,000 pesos</td>";
                                        break;
                                    case '25001':
                                        table += "<td>De 25,001 a 30,000 pesos</td>";
                                        break;
                                    case '30001':
                                        table += "<td>De 30,001 a 35,000 pesos</td>";
                                        break;
                                    case '35001':
                                        table += "<td>De 35,001 a 40,000 pesos</td>";
                                        break;
                                    case '40001':
                                        table += "<td>De 40,001 a 45,000 pesos</td>";
                                        break;
                                    case '45001':
                                        table += "<td>De 45,001 a 50,000 pesos</td>";
                                        break;
                                    case '50000':
                                        table += "<td>M&aacute;s de 50,000 pesos</td>";
                                        break;
                                }
                                table += "<td>" + vImputado.cantidadMulta + "</td>";
                            } else if (tipoConsulta == 13) {
                                switch (vImputado.sancion) {
                                    case '5000':
                                        table += "<td>Hasta 5,000 pesos</td>";
                                        break;
                                    case '5001':
                                        table += "<td>De 5,001 a 10,000 pesos</td>";
                                        break;
                                    case '10001':
                                        table += "<td>De 10,001 a 15,000 pesos</td>";
                                        break;
                                    case '15001':
                                        table += "<td>De 15,001 a 20,000 pesos</td>";
                                        break;
                                    case '20001':
                                        table += "<td>De 20,001 a 25,000 pesos</td>";
                                        break;
                                    case '25001':
                                        table += "<td>De 25,001 a 30,000 pesos</td>";
                                        break;
                                    case '30001':
                                        table += "<td>De 30,001 a 35,000 pesos</td>";
                                        break;
                                    case '35001':
                                        table += "<td>De 35,001 a 40,000 pesos</td>";
                                        break;
                                    case '40001':
                                        table += "<td>De 40,001 a 45,000 pesos</td>";
                                        break;
                                    case '45001':
                                        table += "<td>De 45,001 a 50,000 pesos</td>";
                                        break;
                                    case '50000':
                                        table += "<td>M&aacute;s de 50,000 pesos</td>";
                                        break;
                                }
                                table += "<td>" + vImputado.cantidadReparacion + "</td>";
                            } else if (tipoConsulta == 14) {
                                switch (vImputado.tiempoPrision) {
                                    case '6':
                                        table += "<td>Menor a 6 meses</td>";
                                        break;
                                    case '11':
                                        table += "<td>De 6 meses hasta menos de 1 a&ntilde;o</td>";
                                        break;
                                    case '12':
                                        table += "<td>De 1 a&ntilde;o hasta menos de 2 a&ntilde;os</td>";
                                        break;
                                    case '24':
                                        table += "<td>De 2 a&ntilde;os hasta menos de 3 a&ntilde;os</td>";
                                        break;
                                    case '36':
                                        table += "<td>De 3 a&ntilde;os hasta menos de 4 a&ntilde;os</td>";
                                        break;
                                    case '48':
                                        table += "<td>De 4 a&ntilde;os hasta menos de 5 a&ntilde;os</td>";
                                        break;
                                    case '72':
                                        table += "<td>De 5 a&ntilde;os hasta menos de 10 a&ntilde;os</td>";
                                        break;
                                    case '120':
                                        table += "<td>De 10 a&ntilde;os hasta menos de 15 a&ntilde;os</td>";
                                        break;
                                    case '180':
                                        table += "<td>De 15 a&ntilde;os hasta menos de 20 a&ntilde;os</td>";
                                        break;
                                    case '240':
                                        table += "<td>De 20 a&ntilde;os hasta menos de 25 a&ntilde;os</td>";
                                        break;
                                    case '300':
                                        table += "<td>De 25 a&ntilde;os o m&aacute;s</td>";
                                        break;
                                }
                            } else if (tipoConsulta == 15) {
                                table += "<td>" + vImputado.desTipoSentencia + "</td>";
                            } else if (tipoConsulta == 16) {
                                table += "<td>" + vImputado.desTipoProcedimiento + "</td>";
                            } else if (tipoConsulta == 17) {
                                table += "<td>Sentenciado(s) de " + vImputado.numeroPenas + " Pena(s)</td>";
                            }
                            if ($("#ModalidadViolencia").is(":checked")) {
                                table += "<td>" + vImputado.desModalidadAcoso + "</td>";
                            }
                            if ($("#cveTipoPersona").val() > 0) {
                                table += "<td>" + vImputado.desTipoPersona + "</td>";
                            }
                            //console.log(vImputado.nombre.length);
                            if ($("#cveTipoJuzgado").val() > 0) {
                                table += "<td>" + vImputado.desTipoJuzgado + "</td>";
                            }
                            if ($("#rangoEdad").is(":checked")) {
                                switch (vImputado.rangoEdad) {
                                    case '18':
                                        table += "<td>De 18 a 24</td>";
                                        break;
                                    case '25':
                                        table += "<td>De 25 a 29</td>";
                                        break;
                                    case '30':
                                        table += "<td>De 30 a 34</td>";
                                        break;
                                    case '35':
                                        table += "<td>De 35 a 39</td>";
                                        break;
                                    case '40':
                                        table += "<td>De 40 a 44</td>";
                                        break;
                                    case '45':
                                        table += "<td>De 45 a 49</td>";
                                        break;
                                    case '50':
                                        table += "<td>De 50 a 54</td>";
                                        break;
                                    case '55':
                                        table += "<td>De 55 a 59</td>";
                                        break;
                                    case '60':
                                        table += "<td>De 60 0 m&aacute;s</td>";
                                        break;
                                    case '0':
                                        table += "<td>No identificada</td>";
                                        break;
                                    default:
                                        table += "<td>No identificada</td>";
                                        break;
                                }
                                table += "<td>" + vImputado.edad + "</td>";
                            }
                            if ($("#filtroGenero").is(":checked")) {
                                table += "<td>" + vImputado.desGenero + "</td>";
                            }
                            if ($("#filtroMes").is(":checked")) {
                                table += "<td>" + $("#cmbMes :selected").text() + " / " + $("#anio").val() + "</td>";
                            }

                            if ($("#TipoViolencia").is(":checked")) {
                                if ($("#cmbTipoViolencia").val() == 0) {
                                    var nombreOfendido = "";
                                    if (vImputado.tipoPersonaOfendido == 1) {
                                        nombreOfendido = vImputado.nombreOfendido + " " + vImputado.paternoofendido + " " + vImputado.maternoOfendido;
                                    } else {
                                        nombreOfendido = vImputado.nombreMoralOfendido;
                                    }
                                    table += "<td>" + nombreOfendido + "</td>";
                                    table += "<td>" + vImputado.desDelito + "</td>";
                                } else if ($("#cmbTipoViolencia").val() == 1) {
                                    table += "<td>Delincuencia Organizada</td>";
                                } else if ($("#cmbTipoViolencia").val() == 2) {
                                    table += "<td>Violencia de G&eacute;nero</td>";
                                } else if ($("#cmbTipoViolencia").val() == 3) {
                                    table += "<td>Trata</td>";
                                } else if ($("#cmbTipoViolencia").val() == 4) {
                                    table += "<td>Acoso</td>";
                                }

                            }
                            table += "</tr> ";
                            i = i + 1;
                        });
                        table += "</tbody> ";
                        table += "</table> ";

                        $("#divGeneralImputadosGenero").show();
                        $("#divGeneralImputadosGenero").html(table);
                        $("#divGeneralImputadosGenero").prepend('<input type="button" value="Regresar" class="btn btn-primary" onclick="cargarReporteJuzgados(' + distrito + ',' + region + ',' + anio + ',' + tipoConsulta + ',' + campoConsulta + ',' + cveGenero + ',' + cveTipoJuzgado + ',' + edad + ',' + modalidad + ',' + tipoViolencia + ')" /><br>');
                        $("#tblResultadoImputadosGenero").DataTable({
                            paging: false,
                            sort: true,
                            searching: true

                        });

                        $("#imprimirDesglose").show();
                        $("#exportarDesglosePdf").show();
                        $("#exportarDesgloseExcel").show();
                        var tituloReporte = "<span style='text-decoration: underline; cursor:pointer;' onClick='limpiar()'>Reporte de Imputados</span>";
                        tituloReporte += " / <span style='text-decoration: underline; cursor:pointer;' onClick='consultarImputadosDomicilio();'>Total</span>";
                        tituloReporte += " / <span style='text-decoration: underline; cursor:pointer;' onclick='cargarReporteRegiones(" + tipoConsulta + "," + campoConsulta + "," + cveGenero + "," + cveTipoJuzgado + "," + edad + "," + modalidad + "," + tipoViolencia + ")'>Regiones</span>";
                        tituloReporte += " / <span style='text-decoration: underline; cursor:pointer;' onclick='cargarReporteDistritos(" + region + "," + anio + "," + tipoConsulta + "," + campoConsulta + "," + cveGenero + "," + cveTipoJuzgado + "," + edad + "," + modalidad + "," + tipoViolencia + ")'>Distritos</span>";
                        tituloReporte += " / <span style='text-decoration: underline; cursor:pointer;' onclick='cargarReporteJuzgados(" + distrito + "," + region + "," + anio + "," + tipoConsulta + "," + campoConsulta + "," + cveGenero + "," + cveTipoJuzgado + "," + edad + "," + modalidad + "," + tipoViolencia + ")'>Juzgados</span>";
                        tituloReporte += " / Desglose";
                        $("#h5titulo").html(tituloReporte);
                        //$("#tituloImputadosGenero").html(texto);
                        $("#cveJuzgado").val(juzgado);
                        $("#anioCausa").val(anio);
                        $("#cveRegion").val(region);
                        $("#cveDistrito").val(distrito);
                        $("#campoConsulta").val(campoConsulta);
                        $("#cveGenero").val(cveGenero);
                        $("#edad").val(edad);
                        $("#modalidad").val(modalidad);
                        $("#idTipoViolencia").val(tipoViolencia);
                        getPaginasImputadosDeslosado(pag, cantReg, cveGenero, cveTipoJuzgado, edad, modalidad, tipoViolencia);
                        $("#labelSubTotal").text('');
                    } else {
                        $("#div-advertenciaImputadosGenero").html('' + json.mnj);
                        $("#div-advertenciaImputadosGenero").show("slide");
                        setTimeAlert("div-advertenciaImputadosGenero");

                        $("#divGeneralImputadosGenero").html("");
                        //getPaginas(pag, cantReg);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDagerImputadosGenero").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDagerImputadosGenero").show("slide");
                    setTimeAlert("divAlertDagerImputadosGenero");
                }
            });
        }

        getPaginasImputadosDeslosado = function (pag, cantReg, cveGenero, cveTipoJuzgado, edad, modalidad, tipoViolencia) {
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var cveJuzgado = $("#cveJuzgado").val();
            var anio = $("#anioCausa").val();
            var cveRegion = $("#cveRegion").val();
            var cveDistrito = $("#cveDistrito").val();
            var tipoConsulta = $("#consultaPor").val();
            var campoConsulta = $("#campoConsulta").val();
            var cveMes = $("#cmbMes").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var desgloseGenero = "";
            if ($("#filtroGenero").is(":checked")) {
                desgloseGenero = "S";
            } else {
                desgloseGenero = "N";
            }
            var rangoEdad = "";
            if ($("#rangoEdad").is(":checked")) {
                rangoEdad = "S";
            } else {
                rangoEdad = "N";
            }
            var mostrarSentenciados = "";
            if ($("#filtroSentenciados").is(":checked")) {
                mostrarSentenciados = "S";
            } else {
                mostrarSentenciados = "N";
            }
            var edadMinima = $("#edadMinima").val();
            var edadMaxima = $("#edadMaxima").val();
            var mostrarTipoViolencia = "";
            var mostrarModalidadViolencia = "";
            if ($("#TipoViolencia").is(":checked")) {
                mostrarTipoViolencia = "S";
            } else {
                mostrarTipoViolencia = "N";
            }
            if ($("#ModalidadViolencia").is(":checked")) {
                mostrarModalidadViolencia = "S";
            } else {
                mostrarModalidadViolencia = "N";
            }
            var strDatos = "accion=getPaginasImputadosDesglosado";
            strDatos += "&anio=" + anio;
            strDatos += "&cveRegion=" + cveRegion;
            strDatos += "&cveDistrito=" + cveDistrito;
            strDatos += "&cveJuzgado=" + cveJuzgado;
            strDatos += "&pagina=" + pag;
            strDatos += "&cantidadRegistros=" + cantReg;
            strDatos += "&consultarPor=" + tipoConsulta;
            if (tipoConsulta == 1) {
                strDatos += "&cveAlfabetismo=" + campoConsulta;
            } else if (tipoConsulta == 2) {
                strDatos += "&cveEspanol=" + campoConsulta;
            } else if (tipoConsulta == 3) {
                strDatos += "&cveDelito=" + campoConsulta;
            } else if (tipoConsulta == 4) {
                strDatos += "&cveTipoFamiliaLinguistica=" + campoConsulta;
            } else if (tipoConsulta == 5) {
                strDatos += "&cveGenero=" + campoConsulta;
            } else if (tipoConsulta == 6) {
                strDatos += "&cveNivelInstruccion=" + campoConsulta;
            } else if (tipoConsulta == 7) {
                strDatos += "&cveGradoParticipacion=" + campoConsulta;
            } else if (tipoConsulta == 8) {
                strDatos += "&cveResidenciaHabitual=" + campoConsulta;
            } else if (tipoConsulta == 9) {
                strDatos += "&cvePais=" + campoConsulta;
            } else if (tipoConsulta == 10) {
                strDatos += "&cveOcupacion=" + campoConsulta;
            } else if (tipoConsulta == 11) {
                strDatos += "&rangoDelitos=" + campoConsulta;
            } else if (tipoConsulta == 12) {
                strDatos += "&multa=" + campoConsulta;
            } else if (tipoConsulta == 13) {
                strDatos += "&sancion=" + campoConsulta;
            } else if (tipoConsulta == 14) {
                strDatos += "&tiempoPrision=" + campoConsulta;
            } else if (tipoConsulta == 15) {
                strDatos += "&cveTipoSentencia=" + campoConsulta;
            } else if (tipoConsulta == 16) {
                strDatos += "&cveConclusion=" + campoConsulta;
            } else if (tipoConsulta == 17) {
                strDatos += "&numeroPenas=" + campoConsulta;
            }
            strDatos += "&cveTipoJuzgado=" + cveTipoJuzgado;
            strDatos += "&cveGenero=" + cveGenero;
            strDatos += "&cveMes=" + cveMes;
            strDatos += "&fechaInicial=" + fechaInicial;
            strDatos += "&fechaFinal=" + fechaFinal;
            strDatos += "&desgloseGenero=" + desgloseGenero;
            strDatos += "&edadMinima=" + edadMinima;
            strDatos += "&edadMaxima=" + edadMaxima;
            strDatos += "&rangoEdad=" + rangoEdad;
            strDatos += "&edad=" + edad;
            strDatos += "&consultarSentenciados=" + mostrarSentenciados;
            strDatos += "&cveTipoPersona=" + $("#cveTipoPersona").val();
            strDatos += "&mostrarTipoViolencia=" + mostrarTipoViolencia;
            strDatos += "&mostrarModalidaViolencia=" + mostrarModalidadViolencia;
            strDatos += "&cveTipoViolencia=" + tipoViolencia;
            strDatos += "&cveModalidadViolencia=" + modalidad;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reportes/ReporteimputadosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");

                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();

                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }

                        $("#totalReg").html("<strong> Cantidad de registros: " + json.totalCount + "</strong>");
                        $("#cmbPaginacion").val(pag);
                    } else {
                        $("#advertencia").html(json.msg);
                        $("#advertencia").show("slide");
                        setTimeAlert("advertencia");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                }
            });
        };

        function changeDivForm(opc) {
            if (opc === 1) {
                $("#divFormulario").hide("slide");
                $("#divReporteDistritos").hide("slide");
                $("#divReporteJuzgados").hide("slide");
                $("#divReporte").show("fade");
                $("#divReporteImputadosGenero").hide("slide");
            }
            if (opc === 2) {
                $("#divFormulario").show("fade");
                $("#divReporte").hide("slide");
                $("#divReporteDistritos").hide("slide");
                $("#divReporteJuzgados").hide("slide");
                $("#divReporteImputadosGenero").hide("slide");
            }
            if (opc === 3) {
                $("#divFormulario").hide("slide");
                $("#divReporte").hide("slide");
                $("#divReporteDistritos").show("fade");
                $("#divReporteJuzgados").hide("slide");
                $("#divReporteImputadosGenero").hide("slide");
            }
            if (opc === 4) {
                $("#divFormulario").hide("slide");
                $("#divReporte").hide("slide");
                $("#divReporteDistritos").hide("slide");
                $("#divReporteJuzgados").show("fade");
                $("#divReporteImputadosGenero").hide("slide");
            }
            if (opc === 5) {
                $("#divFormulario").hide("slide");
                $("#divReporte").hide("slide");
                $("#divReporteDistritos").hide("slide");
                $("#divReporteJuzgados").hide("slide");
                $("#divReporteImputadosGenero").show("fade");
            }
        }

        limpiar = function () {
            $("#h5titulo").html("Reporte de Imputados");
            $("#anio").val("");
            $("#divTableResult").val("");
            $("#divConsulta").hide();
            $("#divTableResult").html("");
            $("#consultaPor").val(0);
            $("#divReporte").hide();
            $("#divReporteDistritos").hide();
            $("#divReporteJuzgados").hide();
            $("#divReporteImputadosGenero").hide();
            $("#cmbMes").val(0);
            $("#divFiltroAnio").hide();
            $("#divFiltroMes").hide();
            $("#fechaInicial").val("");
            $("#fechaFinal").val("");
            $("#divFiltroFechas").hide();
            $("#cveTipoJuzgado").val(0);
            $("#rangoEdad").val(0);
            $("#filtroAnio").prop("checked", false);
            $("#filtroGenero").prop("checked", false);
            $("input[name='filtroPeriodo']").prop("checked", false);
            $("#filtroEdad").prop("checked", false);
            $("#edadMinima").val("");
            $("#edadMaxima").val("");
            $("#rangoEdad").prop("checked", false);
            $("#divFiltroEdad").hide();
            $("#filtroSentenciados").prop("checked", false);
            $("#filtroSentenciados").prop("disabled", false);
            $("#cveTipoPersona").val(0).prop("disabled", false);
            $("#TipoViolencia").prop("checked", false);
            $("#cmbTipoViolencia").val(0);
            $("#divTipoViolencia").hide();
            $("#ModalidadViolencia").prop("checked", false);
            $("#cmbModalidadViolencia").val(0);
            $("#divModalidadViolencia").hide();
            $("#consultaPor").empty();
            $("#consultaPor").append('<option value="0">Selecciona una opci&oacute;n</option>');
            $("#consultaPor").append('<option value="1">Alfabetismo</option>');
            $("#consultaPor").append('<option value="3">Delitos</option>');
            $("#consultaPor").append('<option value="2">Dominio del Espa&ntilde;ol</option>');
            $("#consultaPor").append('<option value="4">Familia Ling&uuml;istica</option>');
            $("#consultaPor").append('<option value="6">Grado de Estudios</option>');
            $("#consultaPor").append('<option value="7">Grado de Participaci&oacute;n</option>');
            $("#consultaPor").append('<option value="8">Lugar Habitual de Residencia</option>');
            $("#consultaPor").append('<option value="9">Nacionalidad</option>');
            $("#consultaPor").append('<option value="11">N&uacute;mero de Delitos</option>');
            $("#consultaPor").append('<option value="10">Ocupaci&oacute;n</option>');
            $("#consultaPor").prop("disabled", false);
            $("#imprimirGeneral").hide();
            $("#imprimirRegiones").hide();
            $("#imprimirDistritos").hide();
            $("#imprimirJuzgados").hide();
            $("#imprimirDesglose").hide();
            $("#exportarGeneralPdf").hide();
            $("#exportarRegionesPdf").hide();
            $("#exportarDistritosPdf").hide();
            $("#exportarJuzgadosPdf").hide();
            $("#exportarDesglosePdf").hide();
            $("#exportarGeneralExcel").hide();
            $("#exportarRegionesExcel").hide();
            $("#exportarDistritosExcel").hide();
            $("#exportarJuzgadosExcel").hide();
            $("#exportarDesgloseExcel").hide();
            $("#labelSubTotal").text("");
            $("#rutaIntrospeccion").html("");
            $("#idLabelDescripcion").html("");
            $("#nota").hide();
        };

        function cargarMes() {
            $("#cmbMes").empty();
            var ruta_meses = "../fachadas/sigejupe/meses/MesesFacade.Class.php";
            $.ajax(ruta_meses, {
                type: 'POST',
                data: {accion: 'consultar'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<option value="0">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveMes + "'>" + data.data[index].desMes + "</option>";
                            }
                            html += "</select>";
                            //ToggleLoading(2);
                        } else {
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            //ToggleLoading(2);
                        }
                        $("#cmbMes").append(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los meses');
                //ToggleLoading(2);
            });
        }

        function obtenerTipoJuzgados() {
            $("#cveTipoJuzgado").empty();
            var ruta = "../fachadas/sigejupe/tiposjuzgados/TiposjuzgadosFacade.Class.php";
            $.ajax(ruta, {
                type: 'POST',
                data: {accion: 'consultar'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<option value="0">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                html += "<option value='" + data.data[index].cveTipoJuzgado + "'>" + data.data[index].desTipoJuzgado + "</option>";
                            }
                            html += "</select>";
                            //ToggleLoading(2);
                        } else {
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            //ToggleLoading(2);
                        }
                        $("#cveTipoJuzgado").append(html);
                    } catch (e) {
                        alert(e);
                        //ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los meses');
                //ToggleLoading(2);
            });
        }

        comboTipoPersonaOfendido = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tipospersonas/TipospersonasFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cveTipoPersona').empty();
                        $('#cveTipoPersona').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if (object.cveTipoPersona == "1" || object.cveTipoPersona == "2" || object.cveTipoPersona == "3") {
                                    $('#cveTipoPersona').append('<option value="' + object.cveTipoPersona + '">' + object.desTipoPersona + '</option>');
                                }

                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Tipos Personas:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipos personas:\n\n" + otroobj);
                }
            });
        };

        cargarModalidadViolencia = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/modalidadesacosos/ModalidadesacososFacade.Class.php",
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
                            $("#cmbModalidadViolencia").append($('<option></option>').val(json.data[i].cveModalidadAcoso).html(json.data[i].desModalidadAcoso));
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

        function obtenerPermisos() {
            var cveUsuarioSistema = cveUsuarioSesion;
            $.get("../archivos/" + cveUsuarioSistema + ".json",
                    function (response) {
    //                    alert(response.perfiles[0].totPerfiles);
    //                    alert(cvePerfilSesion);
                        for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                            if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                                //alert(response.perfiles[0].perfil[i].cvePerfil+"-"+"perfil encontrado..");
                                $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                    //alert(vnombre.nomFormulario);
                                    if (vnombre.nomFormulario == "CONSULTAS") {
                                        var hijos = vnombre.hijos;
                                        $.each(hijos, function (k2, nombreHijo) {
                                            if (nombreHijo.nomFormulario == 'CONSULTA DE MUJERES DESAPARECIDAS') {
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
    //                    alert("insert: "+createRecord+" consulta: "+readRecord+" act: "+updateRecord+" elim: "+deleteRecord);

                        if (String(createRecord) === "S") {
                            $("#inputGuardar").show();
                        }
                        if (readRecord == "S") {
                            $("#inputConsultar").show();
                        }
                        if (updateRecord == "S") {
                            // $("#inputGuardar").show();
                        }
                        if (deleteRecord == "S") {
                            $("#inputEliminar").show();
                        }

                    });
        }
        ;

        (function (a) {
            a.fn.validaCampo = function (b) {
                a(this).on({keypress: function (a) {
                        var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                        (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                    }})
            }
        })(jQuery);

        fechaHoy = function (bandera) {
            if (bandera == 1) {
                var fecha = $("#hiddenFechaHoy").val().split("/");
                return fecha[2] + "-" + fecha[1] + "-" + fecha[0];
            }
            return $("#hiddenFechaHoy").val();
        };

        $(function () {

            $("#anio").validaCampo('0123456789');
            $("#edadMinima").validaCampo('0123456789');
            $("#edadMaxima").validaCampo('0123456789');

            obtenerPermisos();
            cargarMes();
            obtenerTipoJuzgados();
            comboTipoPersonaOfendido();
            cargarModalidadViolencia();
            fechaBaseDatos({
                hiddenFechaHoy: "fecha"
            });
            $("#fechaInicial").datetimepicker({
                locale: 'es',
                maxDate: new Date(),
                format: 'DD/MM/YYYY'
            });

            $("#fechaFinal").datetimepicker({
                locale: 'es',
                maxDate: new Date(),
                format: 'DD/MM/YYYY'
            });

            $('#fechaInicial').on("dp.change", function (e) {
                //$(this).datepicker('hide');
                $('#fechaFinal').data("DateTimePicker").minDate(e.date);
                /*var fechaValidada;
                 fechaValidada = validarFecha($('#fechaConsultar').val());
                 $('#fechaConsultar').val(fechaValidada);*/
            });

            $('#fechaFinal').on("dp.change", function (e) {
                //$('#fechaConsultarEnd').datepicker().on('changeDate', function (e) {
                //$(this).datepicker('hide');
                $('#fechaInicial').data("DateTimePicker").maxDate(e.date);
                /*var fechaValidada;
                 fechaValidada = validarFecha($('#fechaConsultarEnd').val());
                 $('#fechaConsultarEnd').val(fechaValidada);*/
            });

            $("#filtroMes").on("change", function () {
                if ($(this).is(":checked")) {
                    $("#divFiltroMes").show();
                    $("#fechaInicial").val("");
                    $("#fechaFinal").val("");
                    $("#divFiltroFechas").hide();
                    $("#anio").val("");
                    $("#divFiltroAnio").show();
                    $("#filtroAnio").prop("checked", false);
                    $("#filtroFechas").prop("checked", false);
                }
            });

            $("#filtroFechas").on("change", function () {
                if ($(this).is(":checked")) {
                    $("#divFiltroMes").hide();
                    $("#cmbMes").val(0);
                    $("#divFiltroFechas").show();
                    $("#anio").val("");
                    $("#divFiltroAnio").hide();
                    $("#filtroAnio").prop("checked", false);
                    $("#filtroMes").prop("checked", false);
                    $("#fechaInicial").val(fechaHoy());
                    $("#fechaFinal").val(fechaHoy());
                }
            });

            $("#filtroAnio").on("change", function () {
                if ($(this).is(":checked")) {
                    $("#divFiltroMes").hide();
                    $("#cmbMes").val(0);
                    $("#fechaInicial").val("");
                    $("#fechaFinal").val("");
                    $("#divFiltroFechas").hide();
                    $("#anio").val("");
                    $("#divFiltroAnio").show();
                    $("#filtroFechas").prop("checked", false);
                    $("#filtroMes").prop("checked", false);
                }
            });

            $("#filtroEdad").on("change", function () {
                if ($(this).is(":checked")) {
                    $("#divFiltroEdad").show();
                    $("#divEdadMinima").show();
                    $("#divEdadMaxima").show();
                } else {
                    $("#divFiltroEdad").hide();
                    $("#edadMinima").val("");
                    $("#edadMaxima").val("");
                    $("#rangoEdad").prop("checked", false);
                }
            });

            $("#rangoEdad").on("change", function () {
                if ($(this).is(":checked")) {
                    $("#divEdadMinima").hide();
                    $("#divEdadMaxima").hide();
                } else {
                    $("#divEdadMinima").show();
                    $("#divEdadMaxima").show();
                }
            });

            $("#filtroSentenciados").on("change", function () {
                if ($(this).is(":checked")) {
                    $("#nota").show();
                    $("#consultaPor").append('<option value="12">Sentenciados por multa</option>');
                    $("#consultaPor").append('<option value="17">Sentenciados por n&uacute;mero de penas</option>');
                    $("#consultaPor").append('<option value="16">Sentenciados por Procedimiento Abreviado</option>');
                    $("#consultaPor").append('<option value="13">Sentenciados por Reparaci&oacute;n del Da&ntilde;o</option>');
                    $("#consultaPor").append('<option value="14">Sentenciados por tiempo en prisi&oacute;n</option>');
                    $("#consultaPor").append('<option value="15">Sentenciados por tipo de sentencia</option>');
                } else {
                    $("#nota").hide();
                    $("#consultaPor option[value='12']").remove();
                    $("#consultaPor option[value='13']").remove();
                    $("#consultaPor option[value='14']").remove();
                    $("#consultaPor option[value='15']").remove();
                    $("#consultaPor option[value='16']").remove();
                    $("#consultaPor option[value='17']").remove();
                }
            });

            $("#TipoViolencia").on("change", function () {
                if ($(this).is(":checked")) {
                    $("#divTipoViolencia").show();
                    $("#ModalidadViolencia").prop("checked", false);
                    $("#divModalidadViolencia").hide();
                    $("#cmbModalidadViolencia").val(0);
                    $("#consultaPor").val(0).prop("disabled", true);
                    $("#filtroSentenciados").prop("disabled", true);
                    $("#cveTipoPersona").val(0).prop("disabled", true);
                } else {
                    $("#divTipoViolencia").hide();
                    $("#cmbTipoViolencia").val(0);
                    $("#consultaPor").val(0).prop("disabled", false);
                    $("#filtroSentenciados").prop("disabled", false);
                    $("#cveTipoPersona").val(0).prop("disabled", false);
                }
            });

            $("#ModalidadViolencia").on("change", function () {
                if ($(this).is(":checked")) {
                    $("#divModalidadViolencia").show();
                    $("#TipoViolencia").prop("checked", false);
                    $("#divTipoViolencia").hide();
                    $("#cmbTipoViolencia").val(0);
                    $("#filtroSentenciados").prop("disabled", true);
                    $("#cveTipoPersona").val(0).prop("disabled", true);
                    $("#consultaPor").empty();
                    $("#consultaPor").append('<option value="0">Selecciona una opci&oacute;n</option>');
                    $("#consultaPor").append('<option value="6">Grado de Estudios</option>');
                    $("#consultaPor").prop("disabled", false);
                    $("#filtroSentenciados").prop("disabled", true);
                    $("#cveTipoPersona").val(0).prop("disabled", true);
                } else {
                    $("#divModalidadViolencia").hide();
                    $("#cmbModalidadViolencia").val(0);
                    $("#cveTipoPersona").val(0).prop("disabled", false);
                    $("#filtroSentenciados").prop("checked", false);
                    $("#filtroSentenciados").prop("disabled", false);
                    $("#consultaPor").empty();
                    $("#consultaPor").append('<option value="0">Selecciona una opci&oacute;n</option>');
                    $("#consultaPor").append('<option value="1">Alfabetismo</option>');
                    $("#consultaPor").append('<option value="3">Delitos</option>');
                    $("#consultaPor").append('<option value="2">Dominio del Espa&ntilde;ol</option>');
                    $("#consultaPor").append('<option value="4">Familia Ling&uuml;istica</option>');
                    $("#consultaPor").append('<option value="6">Grado de Estudios</option>');
                    $("#consultaPor").append('<option value="7">Grado de Participaci&oacute;n</option>');
                    $("#consultaPor").append('<option value="8">Lugar Habitual de Residencia</option>');
                    $("#consultaPor").append('<option value="9">Nacionalidad</option>');
                    $("#consultaPor").append('<option value="11">N&uacute;mero de Delitos</option>');
                    $("#consultaPor").append('<option value="10">Ocupaci&oacute;n</option>');
                    $("#consultaPor").prop("disabled", false);
                }
            });

            var permisos = obtenerPermisosFormulario("REPORTES", "IMPUTADOS  EDO. MEXICO");
            console.log(permisos);
            if (permisos.Create == 'N') {
                $('#inputBuscar').prop('disabled', true);
            }

        });

    </script> 
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>