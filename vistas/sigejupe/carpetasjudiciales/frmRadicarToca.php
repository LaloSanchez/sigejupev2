<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idCarpetaJudicial = isset($_POST['idCarpetajudicial']) ? $_POST['idCarpetajudicial'] : '';
    $idTipoActuacion = isset($_POST['idTipoActuacion']) ? $_POST['idTipoActuacion'] : '';
    date_default_timezone_set('America/Mexico_City');
    $fecha = date("d/m/Y");
    ?>
    <!doctype html>
    <style type="text/css">
        .mayuscula{  
            text-transform: uppercase;
        } 
        .requerido {
            color: darkred;
        }
    </style>
    <div class="panel panel-default">
    <!--    <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Radicar Carpetas Judiciales
            </h5>
        </div>-->
        <div class="panel-body">
            <input type="hidden" readonly class="form-control" id="hddIdCarpetaJudicial" value="<?php echo $idCarpetaJudicial; ?>">
            <input type="hidden" id="idTipoActuacion" value="<?php echo $idTipoActuacion; ?>">
            <div id="divFormulario" class="form-horizontal">
                <p class="col-lg-12" style="color:darkred;">
                    Los campos marcados con (*) son obligatorios.
                </p>
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbJuzgados">Tribunal  <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <select id="cmbJuzgados" class="form-control" name="cmbJuzgados" disabled="disabled" onchange="comboTipoCarpeta()">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>  
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbTipoCarpeta">Tipo Carpeta <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <select id="cmbTipoCarpeta" class="form-control" name="cmbTipoCarpeta" disabled="disabled" onchange="camposRequeridos()">
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3" id="numero-anio">N&uacute;mero <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <input type="text" id="txtNumero" class="form-inline" id="txtNumero" placeholder="N&uacute;mero" disabled="disabled">/<input type="text" class="form-inline" id="txtAnio" id="txtAnio" placeholder="A&ntilde;o" maxlength="4" disabled="disabled" onchange="modificarFechaRadicacion()">
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Es una Incompetencia? <span class="requerido">(*)</span></label>
                    <div class="col-xs-6">
                        <select id="incompetencia" name="incompetencia" class="form-control" onchange="formIncompetencia()">
                            <option value="">Seleccione una opci&oacute;n</option>
                            <option value="S">SI</option>
                            <option value="N">NO</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group" id="divConsecutivo" style="display: none;">
                    <label class="control-label col-xs-3" id="etiquetaConsecutivo"><b>ASIGNAR N&Uacute;MERO CONSECUTIVO</b></label>
                    <div class="col-xs-9">
                        <input type="checkbox" id="numeroConsecutivo" onchange="validaConsecutivo()">
                    </div>
                </div>
                <div class="form-group" id="divCarpetaPadre" style="display: none;">
                    <label class="control-label col-xs-3">Antecedente</label>
                    <div class="col-xs-9">
                        <div id="datosCarpetaPadre"></div>
                        <input type="button" class="btn btn-primary" id="muestraModal" onclick="cargarModal()" value="Consultar">
                        <input type="hidden" id="idCarpetaPadre" name="idCarpetaPadre">
                    </div>
                </div>
                <div class="form-group" id="divDatosPartesAntecedente">
                    
                </div>
                <div class="form-group" id="divTipoIncompetencia" style="display: none;">
                    <label class="control-label col-xs-3">Tipo de Incompetencia <span class="requerido">(*)</span></label>
                    <div class="col-xs-6">
                        <select id="cveTipoIncompetencia" name="cveTipoIncompetencia" class="form-control" onChange="tipoIncompetencia()">
                            <option value="">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group" id="divJuzgadoOrigen" style="display: none;">
                    <label class="control-label col-xs-3">Juzgado Origen <span class="requerido">(*)</span></label>
                    <div class="col-xs-6">
                        <select id="cveJuzgadoOrigen" name="cveJuzgadoOrigen" class="form-control" onChange="tipoCarpetaIncompetencia()">
                            <option value="">Seleccione una opci&oacute;n</option>
                        </select>
                        <input type="text" class="form-control" id="txtCveJuzgadoOrigen" name="txtCveJuzgadoOrigen" style="display: none;">
                    </div>
                </div>
                <div class="form-group" id="divTipoCarpetaIncompetencia" style="display: none;">
                    <label class="control-label col-xs-3">Tipo Carpeta Origen <span class="requerido">(*)</span></label>
                    <div class="col-xs-6">
                        <select id="cveTipoCarpetaIncompetencia" name="cveTipoCarpetaIncompetencia" class="form-control">
                            <option value="">Seleccione una opci&oacute;n</option>
                        </select>
                        <input type="text" id="txtCveTipoCarpetaIncompetencia" name="txtCveTipoCarpetaIncompetencia" class="form-control" style="display: none;">
                    </div>
                </div>
                <div class="form-group" id="divNumeroIncompetencia" style="display: none;">                                                                
                    <label class="control-label col-xs-3">N&uacute;mero Origen <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <input type="text" id="txtNumeroIncompetencia" class="form-inline" id="txtNumeroIncompetencia" placeholder="N&uacute;mero" disabled="disabled">/<input type="text" class="form-inline" id="txtAnioIncompetencia" name="txtAnioIncompetencia" placeholder="A&ntilde;o" maxlength="4" disabled="disabled" onBlur="consultarCausaOrigen()">
                        <span id="causaOrigen"></span>
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Fecha de Radicaci&oacute;n <span class="requerido">(*)</span></label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control mayuscula " value="<?php echo $fecha?>" id="fechaRadicacion" name="fechaRadicacion" placeholder="Fecha de Radicaci&oacute;n" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Magistrado Ponente </label>
                    <div class="col-xs-6" id="divJuez">
                        <select id="idJuzgador" name="idJuzgador" class="form-control">
                            <option value="" >Selecciona una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" id="carpeta-investigacion">Carpeta de Investigaci&oacute;n</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control mayuscula" disabled id="txtCarpetaInvestigacion" placeholder="Carpeta de Investigaci&oacute;n" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" id="numero-causa">NUC (N&uacute;mero &uacute;nico de causa)</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control mayuscula " disabled id="txtNumeroUnicoCausa" placeholder="NUC" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">N&uacute;mero de Imputados   <span class="requerido">(*)</span> </label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="txtNumeroImputados" placeholder="N&uacute;mero de Imputados" maxlength="3" disabled="disabled">
                    </div>
                </div>
                <div class="form-group" style="display: none;" id="divDatosImputados">
                    <label class="control-label col-xs-3">Seleccione Imputado(s) <span class="requerido">(*)</span></label>
                    <div class="col-xs-6">
                        <select id="idImputado" name="idImputado" class="js-example-basic-multiple" multiple="multiple" style="width: 100%;"></select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">N&uacute;mero de Ofendidos y/o v&iacute;ctimas <span class="requerido">(*)</span></label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="txtNumeroOfendidos" placeholder="N&uacute;mero de Ofendidos" maxlength="3" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">N&uacute;mero de Delitos   <span class="requerido">(*)</span></label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="txtNumeroDelitos" placeholder="N&uacute;mero de Delitos" maxlength="3" disabled="disabled">
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbConsignacion">Consignaci&oacute;n   <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <select id="cmbConsignacion" class="form-control" name="cmbConsignacion">
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbConsignacionA">Acciones <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <select id="cmbConsignacionA" class="form-control" name="cmbConsignacionA">
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbEtapaProcesal">Etapa Procesal <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <select id="cmbEtapaProcesal" class="form-control" name="cmbEtapaProcesal" disabled="disabled" >
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbEstatusCarpeta">Estatus Carpeta <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <select id="cmbEstatusCarpeta" class="form-control" name="cmbEstatusCarpeta" disabled="disabled">
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Observaciones</label>
                    <div class="col-xs-9">
                        <textarea style="resize: none;" rows="5" id="txtObservaciones" class="form-control mayuscula" placeholder="Observaciones"></textarea>
                    </div>
                </div>

                <div class="form-group" >
                    <div id="divAlertWarningSolicitud" class="alert alert-warning alert-dismissable" style="display:none;">                    
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="divAlertSuccesSolicitud" class="alert alert-success alert-dismissable" style="display:none;">

                        <strong>Correcto!</strong> Mensaje
                    </div>
                    <div id="divAlertDagerSolicitud" class="alert alert-danger alert-dismissable" style="display:none;">

                        <strong>Error!</strong> Mensaje
                    </div>
                    <div id="divAlertInfoSolicitud" class="alert alert-info alert-dismissable" style="display:none;">

                        <strong>Informaci&oacute;n!</strong> Mensaje
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary guarda" value="Guardar" onclick="saveStepOne()">                                                                  
                        <input type="submit" class="btn btn-primary" id="limpia" value="Limpiar" onclick="cleanStepOne()">                                    
                        <!--<input type="submit" class="btn btn-primary" value="Consultar" id="buscar" onClick="changeDivForm(2)">-->
                    </div>
                </div>
                <br>
                <div id="divResultados" class="col-xs-12"></div>
                <br><br>
            </div>

            <div id="divConsulta"  class="form-horizontal" style="display: none">
                <input type="submit" class="btn btn-primary" id="btn-regresar" value="REGRESAR" onclick="changeDivForm(1)">
                <div class="form-group">
                    <label class="control-label col-xs-3">Juzgado <span class="requerido">(*)</span></label>
                    <div class="col-xs-9" id="listaJuzgados">
                        <input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgado">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Tipo de Carpeta <span class="requerido">(*)</span></label>
                    <div class="col-xs-9" id="listaCarpetas">
                        <select class="form-control" id="cveTipoCarpeta" name="cveTipoCarpeta" placeholder="Tipo Carpeta">
                            <option value="0">SELECCIONA UNA OPCI&Oacute;N</option>
                        </select>
                    </div>
                    
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3" id="lblRelationName">Causa</label>
                    <div id="divSinRelacion" class="col-xs-9">
                        <input type="text" id="numero" class="form-inline" name="numero" placeholder="Causa">&nbsp;/&nbsp;<input type="text" class="form-inline" name="anio" id="anio" placeholder="A&ntilde;o" maxlength="4">
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Fecha inicio</label>
                    <div class="col-xs-3">
                        <input type="text" id="txtFechaInicio" value="<?php //echo $fecha ?>" placeholder="Fecha Inicio">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Fecha fin</label>
                    <div class="col-xs-3">
                        <input type="text" id="txtFechaFin" value="<?php //echo $fecha ?>" placeholder="Fecha Fin">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" value="Consultar" onclick="consultar(1)">                                    
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">  
                        <input type="submit" class="btn btn-primary" value="Limpiar" onclick="cleanStepOneConsult()">                                    
                    </div>
                </div>
                <div id="resultadoPaginador" style="display: none;">
                    <div class="col-xs-12">
                        <div class="form-group col-md-4" style="padding: 10px">
                            <label class="control-label" id="totalReg"></label>
                        </div>

                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultar(0);">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarPaginacion();">
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
                    <br>
                    <div id="consulta-carpetas">
                    </div>
                </div>
            </div>
                
        </div>
    </div>
    <div  id="modalBusqueda" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content" style="min-width: 900px !important;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Juzgado <span class="requerido">(*)</span></label>
                            <div class="col-xs-9">
                                <select id="cveJuzgadoBusqueda" class="form-control" name="cveJuzgadoBusqueda" placeholder="Juzgado" onchange="tipoCarpetaBusqueda()">
                                    <option value="">Selecciona una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Tipo de Carpeta <span class="requerido">(*)</span></label>
                            <div class="col-xs-9" id="listaCarpetas">
                                <select class="form-control" id="cveTipoCarpetaBusqueda" name="cveTipoCarpetaBusqueda" placeholder="Tipo Carpeta">
                                    <option value="">Selecciona una opci&oacute;n</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group">                                                                
                            <label class="control-label col-xs-3" id="lblRelationName">Causa <span class="requerido">(*)</span></label>
                            <div id="divSinRelacion" class="col-xs-9">
                                <input type="text" id="numeroBusqueda" class="form-inline" name="numeroBusqueda" placeholder="Causa">&nbsp;/&nbsp;<input type="text" class="form-inline" name="anioBusqueda" id="anioBusqueda" placeholder="A&ntilde;o" maxlength="4">
                            </div>                                
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="button" class="btn btn-primary" value="Consultar" onclick="busqueda(1)">                                    
                            <input type="button" class="btn btn-primary" value="Limpiar" onclick="limpiaBusqueda()">                                    
                        </div>
                    </div>
                    <div id="divAlertWarningBusqueda" class="alert alert-warning alert-dismissable" style="display:none;">                    
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <br><br>
                    <div id="resultadosBusquedaModal"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>

        </div>
    </div>
    <script type="text/javascript">
var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        cargarModal = function (){
            $("#modalBusqueda").modal();
            comboJuzgadosBusqueda();
            $("#cveJuzgadoBusqueda").val("");
            $("#cveTipoCarpetaBusqueda").val("");
            $("#numeroBusqueda").val("");
            var f = new Date();
            $("#anioBusqueda").val(f.getFullYear());
            $("#resultadosBusquedaModal").html("");
        };
        
        limpiaBusqueda = function() {
            $("#cveJuzgadoBusqueda").val("");
            $("#cveTipoCarpetaBusqueda").val("");
            $("#numeroBusqueda").val("");
            var f = new Date();
            $("#anioBusqueda").val(f.getFullYear());
            $("#resultadosBusquedaModal").html("");
        };
        
        changeDivForm = function (opc) {
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
            } else if (opc === 2) {
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
            }
        };
        
        modificarFechaRadicacion = function() {
            var anio = $("#txtAnio").val();
            var fecha = new Date();
            var anioActual = fecha.getFullYear();
            if ( anio != "" && anio.length == 4 ) {
                if ( anio < anioActual ) {
                    $('#fechaRadicacion').data("DateTimePicker").destroy();
                    var maxFechaRadicacion = new Date(anio, 12, 0);
                    var minFechaRadicacion = new Date(anio, 0, 1);
                    $("#fechaRadicacion").datetimepicker({
                        sideBySide: false,
                        locale: 'es',
                        minDate: minFechaRadicacion,
                        maxDate: maxFechaRadicacion
                    });
                } else if ( anio == anioActual ) {
                    $('#fechaRadicacion').data("DateTimePicker").destroy();
                    var maxFechaRadicacion = new Date();
                    var minFechaRadicacion = new Date(anioActual, 0, 1);
                    $("#fechaRadicacion").datetimepicker({
                        sideBySide: false,
                        locale: 'es',
                        minDate: minFechaRadicacion,
                        maxDate: maxFechaRadicacion,
                        date: maxFechaRadicacion
                    });
                } else {
                    alert("A\u00F1o no v\u00E1lido, favor de verificar");
                    $("#txtAnio").val(anioActual);
                    $('#fechaRadicacion').data("DateTimePicker").destroy();
                    var maxFechaRadicacion = new Date();
                    var minFechaRadicacion = new Date(anioActual, 0, 1);
                    $("#fechaRadicacion").datetimepicker({
                        sideBySide: false,
                        locale: 'es',
                        minDate: minFechaRadicacion,
                        maxDate: maxFechaRadicacion,
                        date: maxFechaRadicacion
                    });
                }
            }
        };
        
        consultarPaginacion = function() {
            $("#cmbPaginacion").val(1);
            consultar(0);
        };
        
        function consultar(Aux){
            if(Aux==1){
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);       
            }
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            if($("#cveJuzgado").val() == ""){
                $("#advertencia").html('<span>Selecciona un juzgado del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } 
            /*else if($("#numero").val() == ""){
                $("#advertencia").html('<span>Capture el numero de causa en el campo correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if($("#anio").val() == ""){
                $("#advertencia").html('<span>El campo a&ntilde;o es requerido</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            }*/ 
            else if($("#cveTipoCarpeta").val() == ""){
                $("#advertencia").html('<span>Selecciona el tipo de carpeta del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgadorescarpetas/JuzgadorescarpetasFacade.Class.php",
                    data: {
                    cveJuzgado : $("#cveJuzgado").val(),
                    numero: $("#numero").val(),
                    anio: $("#anio").val(),
                    cveTipoCarpeta: $("#cveTipoCarpeta").val(),
                    activo: "S",
                    paginacion: "S",
                    pagina: pag,
                    cantidadRegistros: cantReg,
                    accion : "buscarCarpetasJuzgadores"},
                    async: true,
                    dataType: "html",
                    beforeSend: function(objeto) {
                        ToggleLoading(1);
                    },
                    success: function(datos){
                        try{
                            var result = eval("(" + datos + ")");
                            var html = "";
                            var c = 0;
                            if(result.totalCount > 0){
                                $("#resultadoPaginador").show();
                                html += '<table id="resultCarpetas" class="table table-hover table-striped table-bordered">';
                                html += '<thead>';
                                html += '<th>#</th>';
                                html += '<th>Estatus</th>';
                                html += '<th>Carpeta Inv</th>';
                                html += '<th>NUC</th>';
                                html += '<th>N&uacute;mero</th>';
                                html += '<th>A&ntilde;o</th>';
                                html += '<th>Tipo Carpeta</th>';
                                html += '<th>Etapa Procesal</th>';
                                html += '<th>Fecha Registro</th>';
                                html += '<th>Juzgado</th>';
                                html += '<tbody>';
                                for(var n = 0; n < result.totalCount; n++){
                                    c++;
                                    var fecha = result.data[n].fechaRegistro.split(" ");
                                    html += '<tr onClick="cargarCarpetas(' + result.data[n].idCarpetaJudicial + ')">';
                                    html += '<td>' + c + '</td>';
                                    html += '<td>' + result.data[n].desEstatusCarpeta + '</td>';
                                    if( result.data[n].carpetaInv == null ) {
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].carpetaInv + '</td>';
                                    }
                                    if ( result.data[n].nuc == null ) {
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].nuc + '</td>';
                                    }
                                    if (result.data[n].numero == null){
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].numero + '</td>';
                                    }
                                    if (result.data[n].anio == null){
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].anio + '</td>';
                                    }
                                    html += '<td>' + result.data[n].desTipoCarpeta + '</td>';
                                    html += '<td>' + result.data[n].desEtapaProcesal + '</td>';
                                    html += '<td>' + formatoFecha(fecha[0]) + '</td>';
                                    html += '<td>' + result.data[n].desJuzgado + '</td>';
                                    html += '</tr>';
                                }
                                html += '</tbody>';
                                html += '</table>';
                                $("#consulta-carpetas").html(html);
                                $("#resultCarpetas").DataTable({
                                    paging: false
                                });
                                getPaginasCarpetas(pag, cantReg);
                                ToggleLoading(2);
                                //$(".juzgadores").show();
                                //$(".guarda").show();
                                //$("#idCarpetaJudicial").val(result.data[0].idCarpetaJudicial);
                            } else{
                                $("#advertencia").html('<span>' + result.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                html += '';
                                $("#consulta-carpetas").html(html);
                                $("#resultadoPaginador").hide();
                                ToggleLoading(2);
                            }
                            
                        } catch(e){
                            ToggleLoading(2);
                            $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        }
                    },
                    error: function(objeto, quepaso, otroobj) {
                        $("#error").html('<span>Ocurri&oacute; un error al consultar los datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        var html = '';
                        html += '';
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $("#consulta-carpetas").html(html);
                        $("#resultadoPaginador").hide();
                    }
                });
            }
        }
        
        busqueda = function(aux) {
            if($("#cveJuzgadoBusqueda").val() == ""){
                $("#divAlertWarningBusqueda").html('<span>Selecciona un juzgado del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if($("#cveTipoCarpetaBusqueda").val() == ""){
                $("#divAlertWarningBusqueda").html('<span>Selecciona el tipo de carpeta del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            }
            else if($("#numeroBusqueda").val() == ""){
                $("#divAlertWarningBusqueda").html('<span>Capture el numero de causa en el campo correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if($("#anioBusqueda").val() == ""){
                $("#divAlertWarningBusqueda").html('<span>El campo a&ntilde;o es requerido</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            }
             else {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgadorescarpetas/JuzgadorescarpetasFacade.Class.php",
                    data: {
                    cveJuzgado : $("#cveJuzgadoBusqueda").val(),
                    numero: $("#numeroBusqueda").val(),
                    anio: $("#anioBusqueda").val(),
                    cveTipoCarpeta: $("#cveTipoCarpetaBusqueda").val(),
                    porRegion: "S",
                    activo: "S",
                    paginacion: "S",
                    pagina: 1,
                    cantidadRegistros: 10,
                    accion : "buscarCarpetasJuzgadores"},
                    async: true,
                    dataType: "html",
                    global: false,
                    beforeSend: function(objeto) {
                        //ToggleLoading(1);
                    },
                    success: function(datos){
                        try{
                            var result = eval("(" + datos + ")");
                            var html = "";
                            var c = 0;
                            if(result.totalCount > 0){
                                $("#resultadoPaginador").show();
                                html += '<table id="resultCarpetasBusqueda" class="table table-hover table-striped table-bordered">';
                                html += '<thead>';
                                html += '<th>#</th>';
                                html += '<th>Estatus</th>';
                                html += '<th>Carpeta Inv</th>';
                                html += '<th>NUC</th>';
                                html += '<th>N&uacute;mero</th>';
                                html += '<th>A&ntilde;o</th>';
                                html += '<th>Tipo Carpeta</th>';
                                html += '<th>Etapa Procesal</th>';
                                html += '<th>Fecha Registro</th>';
                                html += '<th>Juzgado</th>';
                                html += '<tbody>';
                                for(var n = 0; n < result.totalCount; n++){
                                    c++;
                                    var fecha = result.data[n].fechaRegistro.split(" ");
                                    var nuc = (result.data[n].nuc != "" ) ? result.data[n].nuc : "0";
                                    var carpetaInv = (result.data[n].carpetaInv != "" ) ? result.data[n].carpetaInv : "0";
                                    html += '<tr style="cursor: pointer;" id="' + result.data[n].idCarpetaJudicial + '" onClick="cargarCarpetasBusqueda(' + result.data[n].idCarpetaJudicial + ',' + result.data[n].numero + ',' + result.data[n].anio + ')">';
                                    html += '<td>' + c + '</td>';
                                    html += '<td>' + result.data[n].desEstatusCarpeta + '</td>';
                                    if( result.data[n].carpetaInv == null ) {
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].carpetaInv + '</td>';
                                    }
                                    if ( result.data[n].nuc == null ) {
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].nuc + '</td>';
                                    }
                                    if (result.data[n].numero == null){
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].numero + '</td>';
                                    }
                                    if (result.data[n].anio == null){
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].anio + '</td>';
                                    }
                                    html += '<td>' + result.data[n].desTipoCarpeta + '</td>';
                                    html += '<td>' + result.data[n].desEtapaProcesal + '</td>';
                                    html += '<td>' + formatoFecha(fecha[0]) + '</td>';
                                    html += '<td>' + result.data[n].desJuzgado + '</td>';
                                    html += '</tr>';
                                }
                                html += '</tbody>';
                                html += '</table>';
                                $("#resultadosBusquedaModal").html(html);
                                $("#resultCarpetasBusqueda").DataTable({
                                    paging: false
                                });
                                //getPaginasCarpetas(pag, cantReg);
                                //ToggleLoading(2);
                                //$(".juzgadores").show();
                                //$(".guarda").show();
                                //$("#idCarpetaJudicial").val(result.data[0].idCarpetaJudicial);
                            } else{
                                $("#divAlertWarningBusqueda").html('<span>' + result.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                html += '';
                                $("#resultadosBusquedaModal").html(html);
                                //$("#resultadoPaginador").hide();
                                //ToggleLoading(2);
                            }
                            
                        } catch(e){
                            //ToggleLoading(2);
                            $("#divAlertWarningBusqueda").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        }
                    },
                    error: function(objeto, quepaso, otroobj) {
                        $("#divAlertWarningBusqueda").html('<span>Ocurri&oacute; un error al consultar los datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        var html = '';
                        html += '';
    //                    $("#info").hide();
    //                    $(".limpia").show();
    //                    $(".consulta").show();
                        $("#resultadosBusquedaModal").html(html);
                        //$("#resultadoPaginador").hide();
                    }
                });
            }
        };
        
        consultarCausaOrigen = function(){
            if ( $("#cveTipoIncompetencia").val() == "1" ) {
                if ( $("#cveJuzgadoOrigen").val() != "" && 
                     $("#cveTipoCarpetaIncompetencia").val() != "" && 
                     $("#txtNumeroIncompetencia").val() != "" && 
                     $("#txtAnioIncompetencia").val() != "" ){
                     
                     $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                        data: {
                        cveJuzgado : $("#cveJuzgadoOrigen").val(),
                        numero: $("#txtNumeroIncompetencia").val(),
                        anio: $("#txtAnioIncompetencia").val(),
                        cveTipoCarpeta: $("#cveTipoCarpetaIncompetencia").val(),
                        activo: "S",
                        paginacion: "S",
                        pagina: 1,
                        cantidadRegistros: 10,
                        accion : "consultarCarpetasJudicialesDetalle"},
                        async: true,
                        dataType: "html",
                        beforeSend: function(objeto) {
                            //ToggleLoading(1);
                        },
                        success: function(datos){
                            try{
                                var result = eval("(" + datos + ")");
                                var html = "";
                                var c = 0;
                                if(result.totalCount > 0){
                                    if ( parseInt(result.data[0].cveEstatusCarpeta) == 1 ) {
                                        $("#idCarpetaPadre").val(result.data[0].idCarpetaJudicial);
                                        $("#txtCarpetaInvestigacion").val(result.data[0].carpetaInv);
                                        $("#txtNumeroUnicoCausa").val(result.data[0].nuc);
                                        $("#causaOrigen").html("Toca encontrada");
                                        cargarPartesAntecedente(result.data[0].idCarpetaJudicial);
                                    } else {
                                        $("#causaOrigen").html("<span class='requerido'>La toca de procedencia seleccionada ya esta Terminada, favor de verificar</span>");
                                        $("#divDatosPartesAntecedente").empty();
                                    }
                                } else{
                                    $("#causaOrigen").html("No se encontr&oacute; la toca");
                                    $("#divDatosPartesAntecedente").empty();
                                }

                            } catch(e){
                                $("#causaOrigen").html("No se encontr&oacute; la toca");
                                $("#divDatosPartesAntecedente").empty();
                            }
                        },
                        error: function(objeto, quepaso, otroobj) {
                            $("#causaOrigen").html("No se encontr&oacute; la toca");
                        }
                    });
                     
                }
                
            } else {
                $("#causaOrigen").html("Toca encontrada");
                $("#divDatosPartesAntecedente").html("");
            }
            
        };
        
        cargarPartesAntecedente = function (idCarpetaJudicial) {
            $.ajax({
                type: "POST",
    //            url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                global: false,
                data: {
    //                accion: "consultaEliminaCausa",
                    accion: "consultarDatosPartes",
                    idCarpetaJudicial: idCarpetaJudicial,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    if ( datos.totalCount > 0 ) {
                        var juzgadoAntecede = $('#cveJuzgadoBusqueda :selected').text();
                        var table = "";
                        table += '<div style="text-align: center;"><b>' + juzgadoAntecede + ' ' + datos.data[0].desTipoCarpeta + ' ' + datos.data[0].numero + '/' + datos.data[0].anio + '</b></div><br>';
                        table += '<table cellpadding="1" cellspacing="0" width="80%" align="center" class="table table-hover table-striped table-bordered">';
                        table += '<tr><td colspan="5" align="center"><b>DATOS DE LAS PARTES ' + datos.data[0].desTipoCarpeta + ' ' + datos.data[0].numero + '/' + datos.data[0].anio + '</b></td></tr>';
                        table += '<tr><td>IMPUTADO(S)</td><td>ETAPA PROCESAL</td><td>SOBRESEIMIENTO</td><td>OFENDIDO(S)</td><td>DELITO(S)</td></tr>';
                        for ( var r = 0; r < datos.data.length; r++ ) {
                            table += '<tr>';
                            table += '<td>' + datos.data[r].nombreImputado + '</td>';
                            table += '<td>' + datos.data[r].desEtapaProcesal + '</td>';
                            table += '<td>' + datos.data[r].TieneSobreseimiento + '</td>';
                            table += '<td>' + datos.data[r].nombreOfendido + '</td>';
                            table += '<td>' + datos.data[r].nombreDelito + '</td>';
                            table += '</tr>';
                        }
                        table += '</table><br>';
                        $("#divDatosPartesAntecedente").html(table);
                        cargarComboImputados(idCarpetaJudicial);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpetas judiciales:\n\n" + otroobj);
                }
            });
        };
        
        cargarComboImputados = function(idCarpetaJudicial){
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                global: false,
                data: {
                    accion: "consultar",
                    idCarpetaJudicial: idCarpetaJudicial,
                    tieneSobreseimiento: 'N',
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    if ( datos.totalCount > 0 ) {
                        var html = '';
                        $("#idImputado").empty();
                        for(var n = 0; n < datos.totalCount; n++){
                            if ( datos.data[n].cveTipoPersona == "1" ) {
                                var nombreImputado =  datos.data[n].nombre + ' ' + datos.data[n].paterno + ' ' + datos.data[n].materno;
                            } else {
                                var nombreImputado =  datos.data[n].nombreMoral;
                            }
                            if ( parseInt($("#cmbTipoCarpeta").val()) !== 6 ) {
                                if ( datos.data[n].cveEtapaProcesal == datos.data[n].cveEtapaProcesalCarpeta ) {
                                    html += '<option value="' + datos.data[n].idImputadoCarpeta + '">' + nombreImputado + '</option>';
                                }
                            } else {
                                html += '<option value="' + datos.data[n].idImputadoCarpeta + '">' + nombreImputado + '</option>';
                            }
                        }
                        $("#idImputado").html(html);
                        $("#idImputado").select2();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpetas judiciales:\n\n" + otroobj);
                }
            });
        };
        
        cargarCarpetasBusqueda = function(idCarpetaJudicial, numero, anio){
            $("#idCarpetaPadre").val(idCarpetaJudicial);
            //var texto = "<b>" + numero + "/" + anio + "</b>";
            //$("#datosCarpetaPadre").html(texto);
            $("#resultCarpetasBusqueda tr#" + idCarpetaJudicial).addClass('success');
            cargarPartesAntecedente(idCarpetaJudicial);
    //        if ( nuc != "0" ) {
    //            $("#txtNumeroUnicoCausa").val(nuc);
    //        }
    //        if ( carpetaInv != "0" ) {
    //            $("#txtCarpetaInvestigacion").val(carpetaInv);
    //        }
        };
        
        getPaginasCarpetas = function (pag, cantReg) {
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                data: {
                    cveJuzgado : $("#cveJuzgado").val(),
                    numero: $("#numero").val(),
                    anio: $("#anio").val(),
                    cveTipoCarpeta: $("#cveTipoCarpeta").val(),
                    activo: "S",
                    pagina: pag,
                    cantidadRegistros: cantReg,
                    accion : "getPaginas"
                },
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
                        
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
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
        
        comboJuzgadosBusqueda = function () {
            var cveTipoJuzgado = $("#cmbJuzgados :selected").attr("data-tipoJuzgado");
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "region", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cveJuzgadoBusqueda').empty();
                        $('#cveJuzgadoBusqueda').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
//                                if ( cveTipoJuzgado == 2 && object.cveTipojuzgado == 1 ) {
                                if ( object.cveTipojuzgado < 5 ) {
                                    $('#cveJuzgadoBusqueda').append('<option value="' + object.cveJuzgado + '" data-tipoJuzgadoBusqueda="' + object.cveTipojuzgado + '">' + object.desJuzgado + '</option>');
                                }
                                    
                                    
//                                } else if ( cveTipoJuzgado == 3 && ( object.cveTipojuzgado == 1 || object.cveTipojuzgado == 2 || object.cveTipojuzgado == 4 ) ) {
//                                    
//                                    $('#cveJuzgadoBusqueda').append('<option value="' + object.cveJuzgado + '" data-tipoJuzgadoBusqueda="' + object.cveTipojuzgado + '">' + object.desJuzgado + '</option>');
//                                    
//                                } else if ( cveTipoJuzgado == 4 && object.cveTipojuzgado == 1 ) {
//                                    $('#cveJuzgadoBusqueda').append('<option value="' + object.cveJuzgado + '" data-tipoJuzgadoBusqueda="' + object.cveTipojuzgado + '">' + object.desJuzgado + '</option>');
//                                }
                                
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Tribunal:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        
        tipoCarpetaBusqueda = function() {
            var cveTipoJuzgado = $("#cveJuzgadoBusqueda :selected").attr("data-tipoJuzgadoBusqueda");
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                async: false,
                global: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cveTipoCarpetaBusqueda').empty();
                        $('#cveTipoCarpetaBusqueda').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
    //                            if (object.cveTipoCarpeta < 7) {
    //                                $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
    //                            }
                                switch(cveTipoJuzgado){
                                    case "1": // tipo de juzgado de control
                                        if(object.cveTipoCarpeta == "2"){
                                            $('#cveTipoCarpetaBusqueda').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "2": // tipo de juzgado juicio
                                        if(object.cveTipoCarpeta == "3"){
                                            $('#cveTipoCarpetaBusqueda').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "3": // tipo de juzgado ejecucion
                                        if(object.cveTipoCarpeta == "5"){
                                            $('#cveTipoCarpetaBusqueda').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "4": // tipo de juzgado tribunal
                                        if(object.cveTipoCarpeta == "4"){
                                            $('#cveTipoCarpetaBusqueda').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "5": 
                                    break;
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
        
        comboJuzgados = function () {
            $.ajax({
                type: "POST",
                //url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "distrito", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgados').empty();
                        $('#cmbJuzgados').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                //if ( object.cveCondicion == 1 ) {
                                    $('#cmbJuzgados').append('<option value="' + object.cveJuzgado + '" data-tipoJuzgado="' + object.cveTipojuzgado + '">' + object.desJuzgado + '</option>');
                                    $("#cmbJuzgados").attr("cveregion", object.cveRegion);
                                    if (juzgadoSesion == object.cveJuzgado) {
                                        $("#cmbJuzgados option[value='" + object.cveJuzgado +"']").attr("selected", "selected");
                                        comboTipoCarpeta();
                                        $("#cmbTipoCarpeta option[value='6']").attr("selected", "selected");
                                        camposRequeridos();
                                    }
                                //}
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Tribunal:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        
        comboTipoCarpeta = function () {
            var cveTipoJuzgado = $("#cmbJuzgados :selected").attr("data-tipoJuzgado");
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
                        $('#cmbTipoCarpeta').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
    //                            if (object.cveTipoCarpeta < 7) {
    //                                $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
    //                            }
                                switch(cveTipoJuzgado){
                                    case "1": // tipo de juzgado de control
                                        if(object.cveTipoCarpeta == "1" || object.cveTipoCarpeta == "2"){
                                            $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "2": // tipo de juzgado juicio
                                        if(object.cveTipoCarpeta == "3"){
                                            $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "3": // tipo de juzgado ejecucion
                                        if(object.cveTipoCarpeta == "5"){
                                            $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "4": // tipo de juzgado tribunal
                                        if(object.cveTipoCarpeta == "4"){
                                            $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "5": //tribunal de alzada
                                        if(object.cveTipoCarpeta == "6"){
                                            $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    case "8": //tribunal de alzada
                                        if(object.cveTipoCarpeta == "6"){
                                            $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
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
        comboJuzgadosConsulta = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgadosConsulta').empty();
                        $('#cmbJuzgadosConsulta').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgadosConsulta').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                                
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Magistrado:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        comboTipoCarpetaConsulta = function () {
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
                        $('#cmbTipoCarpetaConsulta').empty();
                        $('#cmbTipoCarpetaConsulta').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbTipoCarpetaConsulta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
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
        comboConsignacion = function () {
            var numeroImputados = parseInt($("#txtNumeroImputados").val());
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/consignaciones/ConsignacionesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbConsignacion').empty();
                        $('#cmbConsignacion').append('<option value="0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if ( numeroImputados == 1 ) {
                                    console.log(numeroImputados);
                                    if ( object.cveConsignacion != 3 ) {
                                        $('#cmbConsignacion').append('<option value="' + object.cveConsignacion + '">' + object.desConsignacion + '</option>');
                                    }
                                } else {
                                    $('#cmbConsignacion').append('<option value="' + object.cveConsignacion + '">' + object.desConsignacion + '</option>');
                                }
                                
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar consignacion:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de consignacion:\n\n" + otroobj);
                }
            });
        };
        
        comboConsignacionAccion = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/consignacionesacciones/ConsignacionesaccionesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbConsignacionA').empty();
                        $('#cmbConsignacionA').append('<option value="0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbConsignacionA').append('<option value="' + object.cveConsignacionA + '">' + object.desConsignacionA + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar consignacion:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de consignacion accion:\n\n" + otroobj);
                }
            });
        };
        
        comboEtapasProcesales = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/etapasprocesales/EtapasprocesalesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbEtapaProcesal').empty();
                        $('#cmbEtapaProcesal').append('<option value="0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbEtapaProcesal').append('<option value="' + object.cveEtapaProcesal + '">' + object.desEtapaProcesal + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar etapas procesales:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de etapas procesales:\n\n" + otroobj);
                }
            });
        };
        
        comboEstatusCarpeta = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estatuscarpetas/EstatuscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbEstatusCarpeta').empty();
                        $('#cmbEstatusCarpeta').append('<option value="0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbEstatusCarpeta').append('<option value="' + object.cveEstatusCarpeta + '">' + object.desEstatusCarpeta + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar etapas procesales:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de etapas procesales:\n\n" + otroobj);
                }
            });
        };
        
        function camposRequeridos(){
    //        if ( $("#cmbTipoCarpeta").val() == 0 || $("#cmbTipoCarpeta").val() == "" ){
    //            $("#carpeta-investigacion").html("Carpeta de Investigaci&oacute;n <span class='requerido'>(*)</span>");
    //            $("#numero-causa").html("NUC (N&uacute;mero &uacute;nico de causa) <span class='requerido'>(*)</span>");
    //            $("#numero-anio").html("N&uacute;mero");
    //        } else {
    //            $("#numero-anio").html("N&uacute;mero <span class='requerido'>(*)</span>");
    //            $("#carpeta-investigacion").html("Carpeta de Investigaci&oacute;n");
    //            $("#numero-causa").html("NUC (N&uacute;mero &uacute;nico de causa)");
    //        }
            var tipoCarpeta = parseInt($("#cmbTipoCarpeta").val());
            var incompetencia = $("#incompetencia").val();
            var etapaProcesal = "";
            var carpetaPadre = false;
            switch ( tipoCarpeta ) {
                case 1: etapaProcesal = 1;
                    carpetaPadre = false;
                    break;
                case 2: etapaProcesal = 1;
                    carpetaPadre = false;
                    break;
                case 3: etapaProcesal = 3;
                    carpetaPadre = true;
                    break;
                case 4: etapaProcesal = 3;
                    carpetaPadre = true;
                    break;
                case 5: etapaProcesal = 4;
                    carpetaPadre = true;
                    break;
                case 6: etapaProcesal = 6;
                    carpetaPadre = true;
                    break;
            }
    //        if ( tipoCarpeta == 1 || tipoCarpeta == 2 ) {
    //            $("#carpeta-investigacion").html("Carpeta de Investigaci&oacute;n <span class='requerido'>(*)</span>");
    //            $("#numero-causa").html("NUC (N&uacute;mero &uacute;nico de causa) <span class='requerido'>(*)</span>");
    //        } else {
    //            $("#carpeta-investigacion").html("Carpeta de Investigaci&oacute;n");
    //            $("#numero-causa").html("NUC (N&uacute;mero &uacute;nico de causa)");
    //        }
            var desTipocarpeta = $("#cmbTipoCarpeta option:selected").text();
            var texto = "ASIGNAR N&Uacute;MERO DE " + desTipocarpeta + " CONSECUTIVO";
            $("#etiquetaConsecutivo").html(texto);
            $("#cmbEtapaProcesal").val(etapaProcesal);
            if ( carpetaPadre == true && incompetencia == "N" ) {
                $("#divCarpetaPadre").show();
            } else {
                $("#divCarpetaPadre").hide();
            }
            consultarJuzgadores();
        }
        
        validaConsecutivo = function(){
            if ( $("#numeroConsecutivo").is(":checked") ) {
                $("#txtNumero").prop('disabled', true);
                $("#txtAnio").prop('disabled', true);
                var fecha = new Date();
                var anio = fecha.getFullYear();
                $("#txtAnio").val(anio).trigger("change");
            } else {
                $("#txtNumero").prop('disabled', false);
                $("#txtAnio").prop('disabled', false);
            }
        };
        
        function consultarJuzgadores(){
            var cveJuzgado = $("#cmbJuzgados").val();
            if (cveJuzgado != ""){
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                    data: {
                    cveJuzgado : cveJuzgado,
                    activo: 'S',
                    cveTipoJuzgador: '7',
                    accion : "consultarJuzgadoresMagistradosPorAdscripcion"},
                    async: true,
                    dataType: "html",
                    beforeSend: function(objeto) {
                        //ToggleLoading(1);
                    },
                    success: function(datos){
                        try{
                            var result = eval("(" + datos + ")");
                            var html = "";
                            if(result.totalCount > 0){
                                $("#divJuez").empty();
                                if ( $("#cmbTipoCarpeta").val() == 4 ) {
                                    html += '<select id="idJuzgador" name="idJuzgador" class="js-example-basic-multiple" multiple="multiple" style="width: 100%;">';
                                } else {
                                    html += '<select id="idJuzgador" name="idJuzgador" class="form-control" style="width: 100%;">';
                                    html += '<option value="">Selecciona una opci&oacute;n</option>';
                                }
                                
                                for(var n = 0; n < result.totalCount; n++){
                                    html += '<option value="' + result.resultados[n].idJuzgador + '">' + result.resultados[n].nombre + ' ' + result.resultados[n].paterno + ' ' + result.resultados[n].materno + '</option>';
                                }
                                html += '</select>';
                                $("#divJuez").html(html);
                                if ( $("#cmbTipoCarpeta").val() == 4 ) {
                                    $("#idJuzgador").select2();
                                }
                                //ToggleLoading(2);
                            } else{
                                html += '<select id="idJuzgador" name="idJuzgador" class="form-control">';
                                html = '<option value="">No hay magistrados para esta adscripci&oacute;n</option>';
                                html += '</select>';
                                $("#divJuez").html(html);
                                //ToggleLoading(2);
                            }
                            
                        } catch(e){
                            //ToggleLoading(2);
                        }
                    },
                    error: function(objeto, quepaso, otroobj) {
                        //$("#info").hide();
                        //$(".limpia").show();
                        //$(".consulta").show();
                    }
                });
            }
        }
        
        cargarIncompetencias = function() {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposincompetencias/TiposincompetenciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cveTipoIncompetencia').empty();
                        $('#cveTipoIncompetencia').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cveTipoIncompetencia').append('<option value="' + object.cveTipoIncompetencia + '">' + object.desTipoIncompetencia + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar etapas procesales:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de etapas procesales:\n\n" + otroobj);
                }
            });
        };
        
        formIncompetencia = function(){
            $("#idCarpetaPadre").val("");
            $("#cveJuzgadoOrigen").val("");
            $("#txtCveJuzgadoOrigen").val("");
            $("#cveTipoCarpetaIncompetencia").val("");
            $("#txtCveTipoCarpetaIncompetencia").val("");
            $("#txtNumeroIncompetencia").val("");
            $("#txtAnioIncompetencia").val("");
            $("#causaOrigen").html("");
            $("#txtCarpetaInvestigacion").val("");
            $("#txtNumeroUnicoCausa").val("");
            var incompetencia = $("#incompetencia").val();
            if ( incompetencia == "S" ) {
                $("#divCarpetaPadre").hide();
                $("#divTipoIncompetencia").show();
                $("#divJuzgadoOrigen").show();
                $("#divTipoCarpetaIncompetencia").show();
                $("#divNumeroIncompetencia").show();
                $("#divConsecutivo").show();
                $("#divDatosImputados").hide();
            } else {
                if ( $("#cmbTipoCarpeta").val() == "6" ) {
                    $("#divCarpetaPadre").show();
                }
                $("#divTipoIncompetencia").hide();
                $("#divJuzgadoOrigen").hide();
                $("#divTipoCarpetaIncompetencia").hide();
                $("#divNumeroIncompetencia").hide();
                $("#divConsecutivo").hide();
                $("#numeroConsecutivo").prop('checked', false);
                $("#divDatosImputados").show();
            }
        };
        
        tipoIncompetencia = function(){
            var tipoIncompetencia = parseInt($("#cveTipoIncompetencia").val());
            //alert(tipoIncompetencia);
            if ( tipoIncompetencia === "" || isNaN(tipoIncompetencia) ) {
                alert("Seleccione un tipo de incompetencia");
            } else if ( tipoIncompetencia === 1 ) {
                //alert("Es uno");
                $("#cveJuzgadoOrigen").show();
                $("#cveJuzgadoOrigen").val("");
                $("#cveTipoCarpetaIncompetencia").show();
                $("#cveTipoCarpetaIncompetencia").val("");
                $("#txtCveJuzgadoOrigen").hide();
                $("#txtCveJuzgadoOrigen").val("");
                $("#txtCveTipoCarpetaIncompetencia").hide();
                $("#txtCveTipoCarpetaIncompetencia").val("");
                //$("#divDatosImputados").show();
                cargarJuzgadosOrigen();
            } else if ( tipoIncompetencia > 1 ) {
                //alert("Es mayor");
                $("#cveJuzgadoOrigen").hide();
                $("#cveJuzgadoOrigen").val("");
                $("#cveTipoCarpetaIncompetencia").hide();
                $("#cveTipoCarpetaIncompetencia").val("");
                $("#txtCveJuzgadoOrigen").show();
                $("#txtCveJuzgadoOrigen").val("");
                $("#txtCveTipoCarpetaIncompetencia").show();
                $("#txtCveTipoCarpetaIncompetencia").val("");
                //$("#divDatosImputados").hide();
            }
            
        };
        
        cargarJuzgadosOrigen = function(){
            var tipoJuzgado = $("#cmbJuzgados :selected").attr("data-tipojuzgado");
            //alert(tipoJuzgado);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", cveTipojuzgado: tipoJuzgado, activo:'S', obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cveJuzgadoOrigen').empty();
                        $('#cveJuzgadoOrigen').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cveJuzgadoOrigen').append('<option value="' + object.cveJuzgado + '" data-juzgadoorigen="' + object.cveTipojuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Tribunal:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        
        tipoCarpetaIncompetencia = function(){
            var cveTipoJuzgado = $("#cveJuzgadoOrigen :selected").attr("data-juzgadoorigen");
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
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
                        $('#cveTipoCarpetaIncompetencia').empty();
                        $('#cveTipoCarpetaIncompetencia').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
    //                            if (object.cveTipoCarpeta < 7) {
    //                                $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
    //                            }
                                switch(cveTipoCarpeta){
                                    case "1": // tipo de juzgado de control
                                        if(object.cveTipoCarpeta == "1"){
                                            $('#cveTipoCarpetaIncompetencia').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "2": // tipo de juzgado juicio
                                        if(object.cveTipoCarpeta == "2"){
                                            $('#cveTipoCarpetaIncompetencia').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "3": // tipo de juzgado ejecucion
                                        if(object.cveTipoCarpeta == "3"){
                                            $('#cveTipoCarpetaIncompetencia').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "4": // tipo de juzgado tribunal
                                        if(object.cveTipoCarpeta == "4"){
                                            $('#cveTipoCarpetaIncompetencia').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "5": 
                                        if(object.cveTipoCarpeta == "5"){
                                            $('#cveTipoCarpetaIncompetencia').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "6": 
                                        if(object.cveTipoCarpeta == "6"){
                                            $('#cveTipoCarpetaIncompetencia').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
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
        
        validateConsultStep1 = function () {
            var mensaje = "";
            var error = false;

            if ($('#txtFechaInicio').val() != "" && $('#txtFechaFin').val() == "") {
                mensaje += "*Seleccione una fecha fin \n";
                error = true;
            }
            if ($('#txtFechaInicio').val() == "" && $('#txtFechaFin').val() != "") {
                mensaje += "*Seleccione una fecha inicio \n";
                error = true;
            }
            if (error) {
                alert(mensaje);
            }

            return error;
        };
        
        validateStep1 = function () {
            var mensaje = "";
            var error = false;
            if ($('#cmbJuzgados').val() == "" || $('#cmbJuzgados').val() == "0") {
                mensaje += "*Seleccione el tribunal correspondiente \n";
                error = true;
            }
            if ($('#cmbTipoCarpeta').val() == 0 || $('#cmbTipoCarpeta').val() == "") {
    //            if ($('#txtNumero').val() == "" || $('#txtNumero').val() == "0") {
    //                mensaje += "*Ingrese el n\u00famero de la carpeta \n";
    //                error = true;
    //            } else {
    //                if ($('#txtAnio').val() == "" || $('#txtAnio').val() == "0") {
    //                    mensaje += "*Ingrese el a\u00f1o de la carpeta \n";
    //                    error = true;
    //                }
    //                if ($('#txtAnio').val().length < 4) {
    //                    mensaje += "*El  a\u00f1o debe ser de 4 d\u00edgitos\n";
    //                    error = true;
    //                }
    //            }
                mensaje += "*Seleccione el tipo de carpeta \n";
                error = true;
            }
    //        if ($('#cmbTipoCarpeta').val() == "1" || $('#cmbTipoCarpeta').val() == "2") {
    //            if ( $('#txtCarpetaInvestigacion').val() == "" ) {
    //                mensaje += "*Ingrese la carpeta de investigaci\u00f3n\n";
    //                error = true;
    //            }
    //            if ( $('#txtNumeroUnicoCausa').val() == "" ) {
    //                mensaje += "*Capture el NUC\n";
    //                error = true;
    //            }
    //        }
    //        if ( $('#txtNumeroUnicoCausa').val() == "" ) {
    //            mensaje += "*Capture el NUC\n";
    //            error = true;
    //        }
            if ( !$("#numeroConsecutivo").is(":checked") ) {
                if ($('#txtNumero').val() == "" || $('#txtNumero').val() == "0") {
                    mensaje += "*Ingrese el n\u00famero de la toca \n";
                    error = true;
                }
                if ($('#txtAnio').val() == "" || $('#txtAnio').val() == "0") {
                    mensaje += "*Ingrese el a\u00f1o de la toca \n";
                    error = true;
                }
                if ($('#txtAnio').val().length < 4) {
                    mensaje += "*El  a\u00f1o debe ser de 4 d\u00edgitos\n";
                    error = true;
                }
            }
            
            if ($('#fechaRadicacion').val() == "") {
                mensaje += "*Seleccione la fecha de radicaci\u00F3n\n";
                error = true;
            }
            if ( $('#cmbTipoCarpeta').val() == "4" ) {
                if ( $("#idJuzgador").val() == null || $("#idJuzgador").val() == "" ) {
                    mensaje = "*Debe seleccionar tres jueces para causas de tribunal\n";
                    error = true;
                } else if ( parseInt($("#idJuzgador").val().length) < 3  ) {
                    mensaje = "*Debe seleccionar tres jueces para causas de tribunal\n";
                    error = true;
                }
            } else {
//                if( $("#idJuzgador").val() == "" || $("#idJuzgador").val() == "0" ) {
//                    mensaje += "*Debe indicar un Magistrado ponente para la toca a radicar\n";
//                    error = true;
//                }
            }
            if ( $("#incompetencia").val() == "S" ) {
                if ( $("#cveTipoIncompetencia").val() == "" ) {
                    mensaje += "*Debe indicar el tipo de incompetencia\n";
                    error = true;
                } else {
                    if ( $("#cveTipoIncompetencia").val() == "1" ) {
                        if ( $("#idCarpetaPadre").val() == "" || $("#idCarpetaPadre").val() == 0 ) {
                            mensaje += "*La toca a radicar no cuenta con Antecedente, favor de verificar\n";
                            error = true;
                        }
                        if ( $("#cveJuzgadoOrigen").val() == "" ) {
                            mensaje += "*Seleccione el juzgado de origen para radicar la toca\n";
                            error = true;
                        }
                        if ( $("#cveTipoCarpetaIncompetencia").val() == "" ) {
                            mensaje += "*Seleccione el tipo de carpeta de origen para radicar la toca\n";
                            error = true;
                        }
                        if ( $("#txtNumeroIncompetencia").val() == "" ) {
                            mensaje += "*Capture el n\u00FAmero de la carpeta origen\n";
                            error = true;
                        }
                        if ( $("#txtAnioIncompetencia").val() == "" ) {
                            mensaje += "*Capture el a\u00F1o de la carpeta origen\n";
                            error = true;
                        }
    //                    if ( $("#idImputado").val() == null || $("#idImputado").val() == "" ) {
    //                        mensaje += "*Seleccione el/los imputado(s) que se necesitan copiar a la carpeta a radicar \n";
    //                        error = true;
    //                    } else {
    //                        if ( $("#cmbTipoCarpeta").val() == 5 && parseInt($("#idImputado").val().length) > 1 ) {
    //                            mensaje += "*Solo se puede elegir a un imputado para las carpetas de Expediente \n";
    //                            error = true;
    //                        }
    //                    }
                    } else {
                        if ( $("#txtCveJuzgadoOrigen").val() == "" ) {
                            mensaje += "*Capture el juzgado de origen para radicar la toca\n";
                            error = true;
                        }
                        if ( $("#txtCveTipoCarpetaIncompetencia").val() == "" ) {
                            mensaje += "*Capture el tipo de carpeta de origen para radicar la toca\n";
                            error = true;
                        }
                        if ( $("#txtNumeroIncompetencia").val() == "" ) {
                            mensaje += "*Capture el n\u00FAmero de la carpeta origen\n";
                            error = true;
                        }
                        if ( $("#txtAnioIncompetencia").val() == "" ) {
                            mensaje += "*Capture el a\u00F1o de la carpeta origen\n";
                            error = true;
                        }
                    }
                }
            }
    //        else {
    //            if ( ($('#txtCarpetaInvestigacion').val() == "" || $('#txtCarpetaInvestigacion').val() == "0") 
    //                && ($('#txtNumeroUnicoCausa').val() == "" || $('#txtNumeroUnicoCausa').val() == 0) ) {
    //                mensaje += "*Ingrese la carpeta de investigaci\u00f3n y/o nuc \n";
    //                error = true;
    //            } 
    //            
    //        }
            if ( $("#cmbTipoCarpeta").val() == 3 || $("#cmbTipoCarpeta").val() == 4 || $("#cmbTipoCarpeta").val() == 5 ) {
                
                if ( $("#incompetencia").val() == 'N' ) {
                    if ( $("#idCarpetaPadre").val() == "" || $("#idCarpetaPadre").val() == 0 ) {
                        mensaje += "*Debe seleccionar una carpeta Antecedente para la toca a radicar\n";
                        error = true;
                    }
                    if ( $("#idImputado").val() == null || $("#idImputado").val() == "" ) {
                        mensaje += "*Seleccione el/los imputado(s) que se necesitan copiar a la toca a radicar \n";
                        error = true;
                    } else {
                        if ( $("#cmbTipoCarpeta").val() == 5 && parseInt($("#idImputado").val().length) > 1 ) {
                            mensaje += "*Solo se puede elegir a un imputado para las carpetas de Expediente \n";
                            error = true;
                        }
                    }
                }
                
            }
            if ($('#txtNumeroImputados').val() == "" || $('#txtNumeroImputados').val() == "0") {
                mensaje += "*Ingrese el n\u00famero de imputados \n";
                error = true;
            }
            
            if ($('#txtNumeroOfendidos').val() == "" || $('#txtNumeroOfendidos').val() == "0") {
                mensaje += "*Ingrese el n\u00famero de ofendidos \n";
                error = true;
            }

            if ($('#txtNumeroDelitos').val() == "" || $('#txtNumeroDelitos').val() == "0") {
                mensaje += "*Ingrese n\u00famero de delitos \n";
                error = true;
            }
            if ($('#cmbConsignacion').val() == "" || $('#cmbConsignacion').val() == "0") {
                mensaje += "*Seleccione consignaci\u00f3n \n";
                error = true;
            }
            if ($('#cmbConsignacionA').val() == "" || $('#cmbConsignacionA').val() == "0") {
                mensaje += "*Seleccione el tipo de  acci\u00f3n\n";
                error = true;
            }
            if ($('#cmbEtapaProcesal').val() == "" || $('#cmbEtapaProcesal').val() == "0") {
                mensaje += "*Ingrese tipo de etapa procesal \n";
                error = true;
            }
            if ($('#cmbEstatusCarpeta').val() == "" || $('#cmbEstatusCarpeta').val() == "0") {
                mensaje += "*Seleccione el estatus de toca \n";
                error = true;
            }
            if (error) {
                alert(mensaje);
            }

            return error;
        };
        
        saveStepOne = function () {
            var error = false;
            if (!validateStep1()) {
                var fecha = $("#fechaRadicacion").val().split(" ");
                var f = fecha[0].split("/");
                var fechaRadicacion = f[2] + "-" + f[1] + "-" + f[0] + " " + fecha[1];
                var generarConsecutivo = ( $("#numeroConsecutivo").is(":checked") ) ? 'S' : 'N';
                var strData = "accion=radicarCarpeta";
                strData += "&generarConsecutivo=" + generarConsecutivo;
                strData += "&idCarpetaJudicial=" + $('#hddIdCarpetaJudicial').val();
                strData += "&idCarpetaPadre=" + $("#idCarpetaPadre").val();
                strData += "&cveJuzgado=" + $('#cmbJuzgados').val();
                strData += "&cveRegion=" + $('#cmbJuzgados').attr("cveregion");;
                strData += "&cveTipoCarpeta=" + $('#cmbTipoCarpeta').val();
                strData += "&numero=" + $('#txtNumero').val();
                strData += "&anio=" + $('#txtAnio').val();
                strData += "&fechaRadicacion=" + fechaRadicacion;
                strData += "&idJuzgador=" + $("#idJuzgador").val();
                strData += "&activo=S";
                strData += "&carpetaInv=" + $('#txtCarpetaInvestigacion').val().toUpperCase();
                strData += "&nuc=" + $('#txtNumeroUnicoCausa').val().toUpperCase();
                strData += "&numImputados=" + $('#txtNumeroImputados').val();
                strData += "&idImputadoCarpeta=" + $("#idImputado").val();
                strData += "&numOfendidos=" + $('#txtNumeroOfendidos').val();
                strData += "&numDelitos=" + $('#txtNumeroDelitos').val();
                strData += "&cveConsignacion=" + $('#cmbConsignacion').val();
                strData += "&cveConsignacionA=" + $('#cmbConsignacionA').val();
                strData += "&cveEstatusCarpeta=" + $("#cmbEstatusCarpeta").val();
                strData += "&cveEtapaProcesal=" + $("#cmbEtapaProcesal").val();
                strData += "&observaciones=" + $('#txtObservaciones').val().toUpperCase();
                strData += "&incompetencia=" + $("#incompetencia").val();
                if ( $("#incompetencia").val() == "S" ) {
                    strData += "&cveTipoIncompetencia=" + $("#cveTipoIncompetencia").val();
                    strData += "&cveJuzgadoOrigen=" + $("#cveJuzgadoOrigen").val();
                    strData += "&cveTipoCarpetaOrigen=" + $("#cveTipoCarpetaIncompetencia").val();
                    strData += "&numeroOrigen=" + $("#txtNumeroIncompetencia").val();
                    strData += "&anioOrigen=" + $("#txtAnioIncompetencia").val();
                    strData += "&otroTipoCarpetaOrigen=" + $("#txtCveJuzgadoOrigen").val();
                    strData += "&otroJuzgadoOrigen=" + $("#txtCveTipoCarpetaIncompetencia").val();
                }
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: strData,
                    beforeSend: function (objeto) {
                        $("#divAlertInfoSolicitud").html("Guardando la informaci&oacute;n, espere un momento");
                        $("#divAlertInfoSolicitud").show();
                        $(".guarda").hide();
                    },
                    success: function (datos) {
                        console.log(datos);
                        if (datos.status == 'Ok') {
                            $("#divAlertInfoSolicitud").hide();
                            $("#divAlertSuccesSolicitud").html("");
                            
                            $("#divAlertSuccesSolicitud").html("La toca se guardo de forma correcta, verificar si todos los imputados, ofendidos, delitos y relaciones deben corresponder a la toca radicada").fadeIn('slow').delay(6000).fadeOut('slow');
                            
                            parent.$('#hddIdCarpetaJudicial').val(datos.resultado[0].idCarpetaJudicial);
                            parent.$('#idCarpetaJudicial').val(datos.resultado[0].idCarpetaJudicial);
                            $('#hddIdCarpetaJudicial').val(datos.resultado[0].idCarpetaJudicial);
                            $('#cmbJuzgados').val(datos.resultado[0].cveJuzgado);
                            $('#cmbTipoCarpeta').val(datos.resultado[0].cveTipoCarpeta);
                            $('#txtNumero').val(datos.resultado[0].numero);
                            $('#txtAnio').val(datos.resultado[0].anio);
                            $('#txtCarpetaInvestigacion').val(datos.resultado[0].carpetaInv);
                            $('#txtNumeroUnicoCausa').val(datos.resultado[0].nuc);
                            $('#txtNumeroImputados').val(datos.resultado[0].numImputados);
                            $('#txtNumeroOfendidos').val(datos.resultado[0].numOfendidos);
                            $('#txtNumeroDelitos').val(datos.resultado[0].numDelitos);
                            $('#cmbConsignacion').val(datos.resultado[0].cveConsignacion);
                            $('#cmbConsignacionA').val(datos.resultado[0].cveConsignacionA);
                            $("#cmbEstatusCarpeta").val(datos.resultado[0].cveEstatusCarpeta);
                            $("#cmbEtapaProcesal").val(datos.resultado[0].cveEtapaProcesal);
                            $('#txtObservaciones').val(datos.resultado[0].observaciones);
                            selectStepOne();
                        } else {
                            $("#divAlertInfoSolicitud").html("").hide();
                            $("#divAlertWarningSolicitud").html("");
                            $("#divAlertWarningSolicitud").html(datos.msj).fadeIn('slow').delay(4000).fadeOut('slow');
                            $(".guarda").show();
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divAlertInfoSolicitud").hide();
                        $(".guarda").show();
                        alert("Error en la peticion de Consulta de Carpetas judiciales:\n\n" + otroobj);
                    }
                });
            } else {
                error = false;
            }
            return error;
        };


        getPaginas = function (pag, cantReg) {
            parent.$('#hddIdSolicitudAudiencia').val("");
            $('#hddIdSolicitudAudiencia').val("");
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesaudiencias/SolicitudesaudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "getPaginas",
                    idCarpetaJudicial: $('#hddIdSolicitudAudiencia').val(),
                    cveJuzgado: $('#cmbJuzgadosConsulta').val(),
                    cveTipoCarpeta: $('#cmbTipoCarpetaConsulta').val(),
                    numero: $('#txtNumeroConsulta').val(),
                    anio: $('#txtAnioConsulta').val(),
                    carpetaInv: $('#txtCarpetaInvestigacionConsulta').val(),
                    nuc: $('#txtNumeroUnicoCausaConsulta').val(),
                    activo: 'S',
                    fechaInicio: $('#txtFechaInicio').val(),
                    fechaFin: $('#txtFechaFin').val(),
                    cantxPag: cantReg
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = datos;
                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
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
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };

        selectStepOne = function () {
    //        var error = false;
    //        if (!validateConsultStep1()) {
    //            parent.$('#hddIdSolicitudAudiencia').val("");
    //            $('#hddIdSolicitudAudiencia').val("");
    //            var pag = 0;
    //            if (pagAux == 0) {
    //                pag = $("#cmbPaginacion").val();
    //            } else {
    //                pag = 1;
    //            }
    //            var cantReg = $("#cmbNumReg").val();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultarCarpetasJudicialesDetalle",
                        idCarpetaJudicial: $('#hddIdCarpetaJudicial').val()
    //                    cveJuzgado: $('#cmbJuzgadosConsulta').val(),
    //                    cveTipoCarpeta: $('#cmbTipoCarpetaConsulta').val(),
    //                    numero: $('#txtNumeroConsulta').val(),
    //                    anio: $('#txtAnioConsulta').val(),
    //                    carpetaInv: $('#txtCarpetaInvestigacionConsulta').val(),
    //                    nuc: $('#txtNumeroUnicoCausaConsulta').val(),
    //                    activo: 'S',
    //                    fechaInicio: $('#txtFechaInicio').val(),
    //                    fechaFin: $('#txtFechaFin').val(),
    //                    pag: pag,
    //                    cantxPag: cantReg
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos.totalCount > 0) {
                            var table = "";
                            table += '<table id="tblResultados" class="table table-hover table-striped table-bordered">';
                            table += '<thead>';
                            table += '<tr>';
                            table += '<th>No</th>';
                            table += '<th>Estatus</th>';
                            table += '<th>Juzgado</th>';
                            table += '<th>N&uacute;mero</th>';
                            table += '<th>CarpetaInv</th>';
                            table += '<th>NUC</th>';
                            table += '<th>Tipo Carpeta</th>';
                            table += '<th>Etapa Procesal</th>';
                            table += '<th>Fecha Registro</th>';
                            table += '</tr>';
                            table += '</thead>';
                            table += "<tbody>";
                            for (var i = 0; i < datos.totalCount; i++) {
                                var fecha = datos.data[i].fechaRegistro.split(" ");
                                table += "<tr>";
                                table += "<td onclick=\"consutaId('" + datos.data[i].idCarpetaJudicial + "')\" >" + (i + 1) + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].desEstatusCarpeta + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].desJuzgado + "</td>";
                                if (datos.data[i].numero != "" && datos.data[i].numero != null) {
                                    table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].numero + "/" + datos.data[i].anio + "</td>";
                                } else {
                                    table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >N/A</td>";
                                }
                                if (datos.data[i].carpetaInv != "" && datos.data[i].carpetaInv != null) {
                                    table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].carpetaInv + "</td>";
                                } else {
                                    table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >N/A</td>";
                                }
                                if (datos.data[i].nuc != "" && datos.data[i].nuc != null) {
                                    table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].nuc + "</td>";
                                } else {
                                    table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >N/A</td>";
                                }
                                table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].desTipoCarpeta + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].desEtapaProcesal + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + formatoFecha(fecha[0]) + "</td>";
                                table += "</tr>";
                            }
                            table += "</tbody>";
                            table += "</table>";
                            //$("#divHideForm").hide("");
                            //$("#divConsultaGrid").show("");
                            $('#divResultados').html(table);
                            //$("#tblResultados").DataTable({paging: false});
                            //getPaginas(datos.pagina, cantReg);
                            //changeDivForm(2);
        //                        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Registro de Oficios</span> - <span style='text-decoration: underline; cursor:pointer;' onclick='changeDivForm(1); $(\"#cmbPaginacion\").val(1)'>Consulta de Oficios</span> - Resultados");
                        } else {
                            $("#divResultados").html("");
                            $("#divConsultaGrid").hide("");
                            $("#divAlertWarningSolicitud").html("");
                            $("#divAlertWarningSolicitud").html("No se encontraron resultados");
                            $("#divAlertWarningSolicitud").show("");
                            setTimeAlert("divAlertWarningSolicitud");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                    }
                });
    //        } else {
    //            error = false;
    //        }
    //        return error;
        };

        consutaId = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarCarpetasJudicialesDetalle",
                    idCarpetaJudicial: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    ToggleLoading(2);

                    if (datos.totalCount > 0) {
                        //changeDivForm(1);
                        parent.$('#hddIdCarpetaJudicial').val(datos.data[0].idCarpetaJudicial);
                        parent.$('#idCarpetaJudicial').val(datos.data[0].idCarpetaJudicial);
                        $('#hddIdCarpetaJudicial').val(datos.data[0].idCarpetaJudicial);
                        $('#cmbJuzgados').val(datos.data[0].cveJuzgado).trigger("change");
                        $('#cmbTipoCarpeta').val(datos.data[0].cveTipoCarpeta);
                        $('#txtNumero').val(datos.data[0].numero);
                        $('#txtAnio').val(datos.data[0].anio);
                        $('#txtCarpetaInvestigacion').val(datos.data[0].carpetaInv);
                        $('#txtNumeroUnicoCausa').val(datos.data[0].nuc);
                        $('#txtNumeroImputados').val(datos.data[0].numImputados);
                        $('#txtNumeroOfendidos').val(datos.data[0].numOfendidos);
                        $('#txtNumeroDelitos').val(datos.data[0].numDelitos);
                        $('#cmbAudiencia').val(datos.data[0].cveCatAudiencia);
                        $('#txtObservaciones').val(datos.data[0].observaciones);
                        $("#cmbEtapaProcesal").val(datos.data[0].cveEtapaProcesal);
                        $("#cmbEstatusCarpeta").val(datos.data[0].cveEstatusCarpeta);
                        $("#cmbConsignacionA").val(datos.data[0].cveConsignacionA);
    //                    if(datos.data[0].cveEstatusCarpeta == 2) {
    //                        $("#radicar").hide();
    //                    }
                        camposRequeridos();
                        comboConsignacion();
                        $('#cmbConsignacion').val(datos.data[0].cveConsignacion);
                        $(".guarda").hide();
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpetas judiciales:\n\n" + otroobj);
                }
            });


        };
        
        
        validaCarpeta = function () {
            if ($('#cmbTipoCarpeta').val() == 0) {
                $('#txtNumero').val("");
                $('#txtAnio').val("");
                $('#txtNumero').attr('disabled', 'disabled');
                $('#txtAnio').attr('disabled', 'disabled');
                $('#txtCarpetaInvestigacion').removeAttr('disabled');
                $('#txtNumeroUnicoCausa').removeAttr('disabled');
            } else {
                $('#txtNumero').removeAttr('disabled');
                $('#txtAnio').removeAttr('disabled');
                $('#txtCarpetaInvestigacion').val("");
                $('#txtNumeroUnicoCausa').val("");
                $('#txtCarpetaInvestigacion').attr('disabled', 'disabled');
                $('#txtNumeroUnicoCausa').attr('disabled', 'disabled');
            }
        };
        validaCarpetaConsulta = function () {
            if ($('#cmbTipoCarpetaConsulta').val() == 0) {
                $('#txtNumeroConsulta').val("");
                $('#txtAnioConsulta').val("");
                $('#txtNumeroConsulta').attr('disabled', 'disabled');
                $('#txtAnioConsulta').attr('disabled', 'disabled');
                $('#txtCarpetaInvestigacionConsulta').removeAttr('disabled');
                $('#txtNumeroUnicoCausaConsulta').removeAttr('disabled');
            } else {
                $('#txtNumeroConsulta').removeAttr('disabled');
                $('#txtAnioConsulta').removeAttr('disabled');
                $('#txtCarpetaInvestigacion').val("");
                $('#txtNumeroUnicoCausa').val("");
                $('#txtCarpetaInvestigacionConsulta').attr('disabled', 'disabled');
                $('#txtNumeroUnicoCausaConsulta').attr('disabled', 'disabled');
            }
        };
        cleanStepOne = function () {
            parent.$('#hddIdCarpetaJudicial').val("");
            parent.$('#idCarpetaJudicial').val("");
            $('#hddIdCarpetaJudicial').val("");
            $('#cmbJuzgados').val("").prop("disabled", false);
            $('#cmbTipoCarpeta').val("").prop("disabled", false);
            $('#txtNumero').val("").prop("disabled", false);
            $('#txtAnio').val("").prop("disabled", false);
            $('#txtCarpetaInvestigacion').val("").prop("disabled", true);
            $('#txtNumeroUnicoCausa').val("").prop("disabled", true);
            $('#txtNumeroImputados').val("").prop("disabled", false);
            $('#txtNumeroOfendidos').val("").prop("disabled", false);
            $('#txtNumeroDelitos').val("").prop("disabled", false);
            $('#cmbConsignacion').val(0).prop("disabled", false);
            $('#cmbConsignacionA').val(0).prop("disabled", false);
            $('#cmbEstatusCarpeta').val(1);
            $('#cmbEtapaProcesal').val(0);
            $('#txtObservaciones').val("").prop("disabled", false);
            $("#incompetencia").val("");
            $("#divTipoIncompetencia").hide();
            $("#cveTipoIncompetencia").val("");
            $("#cveJuzgadoOrigen").val("");
            $("#divJuzgadoOrigen").hide();
            $("#cveTipoCarpetaIncompetencia").val("");
            $("#divTipoCarpetaIncompetencia").hide();
            $("#divNumeroIncompetencia").hide();
            $("#txtNumeroIncompetencia").val("").prop("disabled", false);
            $("#txtAnioIncompetencia").val("").prop("disabled", false);
            $("#causaOrigen").html("");
            $("#fechaRadicacion").prop("disabled", false);
            //parent.changeDivForm(1);
    //        validaCarpeta();
            $("#divCarpetaPadre").hide();
            $(".guarda").show();
            $("#divResultados").html("");
            $("#idJuzgador").val("");
            $("#idCarpetaPadre").val("");
            $("#datosCarpetaPadre").html("");
            $("#numeroConsecutivo").prop("checked", false);
            $("#divConsecutivo").hide();
            $("#divDatosPartesAntecedente").empty();
            $("#divJuez").empty();
            $("#idImputado").select2('val', '');
            $("#idImputado").empty();
            var selectHtml = "<select id='idJuzgador' name='idJuzgador' class='form-control'>";
            selectHtml += "<option>Seleccione una opci&oacute;n</option>";
            selectHtml += "</select>";
            $("#divJuez").html(selectHtml);
        };
    //    cleanStepOneConsult = function () {
    //        parent.$('#hddIdSolicitudAudiencia').val("");
    //        $('#hddIdSolicitudAudiencia').val("");
    //        $('#cmbJuzgadosConsulta').val("");
    //        $('#cmbTipoCarpetaConsulta').val("");
    //        $('#txtNumeroConsulta').val("");
    //        $('#txtAnioConsulta').val("");
    //        $('#txtFechaInicio').val("");
    //        $('#txtFechaFin').val("");
    //        $('#txtCarpetaInvestigacionConsulta').val("");
    //        $('#txtNumeroUnicoCausaConsulta').val("");
    //        $('#divResultados').html("");
    //        $('#divResultados').html("");
    //        $("#divConsultaGrid").hide("");
    ////        validaCarpetaConsulta();
    //    };

        formatoFecha = function(campo) {
            var fecha = campo.split(' ');
            if (fecha.length > 1) {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0] + " " + fecha[1];
            } else {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0];
            }
        };

        $(function () {
            var currentDate = new Date();
            var maxDate = currentDate.setDate(currentDate.getDate());
            var anioActual = currentDate.getFullYear();
            var minFechaRadicacion = new Date(anioActual, 0, 1);
                    
            $("#txtFechaInicio").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
                maxDate: maxDate
            });
            $("#txtFechaFin").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
                maxDate: maxDate
            });
            
            $("#fechaRadicacion").datetimepicker({
                sideBySide: false,
                locale: 'es',
                minDate: minFechaRadicacion,
                maxDate: currentDate
            });
    //        
    //        $("#txtFechaInicio").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy"
    //
    //        });
    //        $("#txtFechaFin").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy"
    //        });
            comboEtapasProcesales();
            comboJuzgados();
            //comboTipoCarpeta();
            comboConsignacion();
            camposRequeridos();
            //comboAudiencia();
            comboConsignacionAccion();
            comboJuzgadosConsulta();
            
            //comboTipoCarpetaConsulta();
            comboEstatusCarpeta();
            cargarIncompetencias();
            
            $('#txtNumeroImputados').validaCampo('0123456789');
            $('#txtNumeroOfendidos').validaCampo('0123456789');
            $('#txtNumeroDelitos').validaCampo('0123456789');
            $('#txtNumero').validaCampo('0123456789');
            $('#txtAnio').validaCampo('0123456789');
            $('#txtNumeroConsulta').validaCampo('0123456789');
            $('#txtAnioConsulta').validaCampo('0123456789');
            $("#txtAnioIncompetencia").validaCampo('0123456789');
            
            if ($('#hddIdCarpetaJudicial').val() != "") {
                selectStepOne();
                consutaId($('#hddIdCarpetaJudicial').val());
            } else {
                $("#cmbJuzgados").removeAttr("disabled");
                $("#cmbTipoCarpeta").removeAttr("disabled");
                $("#txtNumero").removeAttr("disabled");
                //$("#txtNumero").val("1");
                $("#fechaRadicacion").removeAttr("disabled");
                $("#txtNumeroImputados").removeAttr("disabled");
                $("#txtNumeroOfendidos").removeAttr("disabled");
                $("#txtNumeroDelitos").removeAttr("disabled");
//                $("#txtCarpetaInvestigacion").removeAttr("disabled");
                $("#txtAnio").removeAttr("disabled");
                var f = new Date();
                $("#txtAnio").val(f.getFullYear());
//                $("#txtNumeroUnicoCausa").removeAttr("disabled");
//                $("#txtNumeroUnicoCausa").removeAttr("disabled");
                //$("#cmbEtapaProcesal").val(1);
                $("#cmbEstatusCarpeta").val(1);
                $("#txtNumeroIncompetencia").removeAttr("disabled");
                $("#txtAnioIncompetencia").removeAttr("disabled");
                //$("#cmbEstatusCarpeta").attr("disabled", true);
            }
            
            if( $("#idTipoActuacion").val() != "" ) {
                $("#radicar").hide();
                $("#limpia").hide();
            }
            
            $("#txtNumeroImputados").on('change', function(){
                comboConsignacion();
            });
            
            var permisos = obtenerPermisosFormulario("HERRAMIENTAS", "ACTUALIZAR TOCAS");
            //console.log(permisos);
            if(permisos.Read == 'N'){
                $('.consulta').prop('disabled',true);
            }
            if(permisos.Create == 'N'){
                $('.guarda').prop('disabled',true);
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