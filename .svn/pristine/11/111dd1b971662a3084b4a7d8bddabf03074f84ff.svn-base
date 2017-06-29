<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
//version 14/01/2016
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    $idActuacionArbol = "";
    $cveTipoCarpeta = "";
    $idReferencia = "";
    $cveJuzgadoOrigenArbol = "";
    $procedencia = 0;
    $error = "";
    if (isset($_POST['idActuacion'])) {
        $procedencia = 1;
        $idActuacionArbol = @$_POST['idActuacion'];
    }
    if (isset($_POST['cveTipoCarpeta'])) {
        $procedencia = 1;
        $cveTipoCarpeta = @$_POST['cveTipoCarpeta'];
    }
    if ($cveTipoCarpeta == 7) {
        $error = "<br>El formulario de REGISTRO FORMULACI&OacuteN IMPUTACI&OacuteN no se relaciona con EXHORTOS";
    }
    if ($cveTipoCarpeta == 8) {
        $error = "<br>El formulario de REGISTRO FORMULACI&OacuteN IMPUTACI&OacuteN no se relaciona con AMPAROS";
    }
    if ($cveTipoCarpeta == 10) {
        $error = "<br>El formulario de REGISTRO FORMULACI&OacuteN IMPUTACI&OacuteN no se relaciona con ORDENES DE APREHENSI&Oacute;N";
    }
    if (isset($_POST['idReferencia'])) {
        $procedencia = 1;
        $idReferencia = @$_POST['idReferencia'];
    }
    if (isset($_POST['juzgadoOrigenArbol'])) {
      $cveJuzgadoOrigenArbol = @$_POST['juzgadoOrigenArbol'];
    }
    if ($error == "") {
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
        <input type="hidden" id="hiddencveJuzgadoOrigenArbol" value="<?php echo $cveJuzgadoOrigenArbol; ?>" >
        <input type="hidden" id="hiddencveAdcripcion" value="<?php echo $_SESSION['cveAdscripcion']; ?>" >
        <input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>" >
        <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idReferencia; ?>" >
        <input type="hidden" id="hiddenCveTipoCarpeta" value="<?php echo $cveTipoCarpeta; ?>" >
        <input type="hidden" id="hiddenProcedencia" value="<?php echo $procedencia; ?>" >
        <input type="hidden" id="hiddenIdFormulacionImputacion" value="" >
        <input type="hidden" id="hiddenFechaHoy" value="">


        <div class="panel panel-default" id="divFormularioRegistroImputacion">
            <div class="panel-heading">
                <h5 class="panel-title" id="h5titulo">                                                            
                    Registro Formulaci&oacute;n de imputaci&oacute;n
                </h5>
            </div>
            <div  id="panelPrincipal" class="panel-body">
                <div id="divFormulario" class="form-horizontal">
                    <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar(true);" style="display: none">                                    
                    <div class="form-group"> 
                        <div class="col-xs-3">
                            <input type="submit" class="btn btn-primary" id="inputRegresarP" value="Regresar" onclick="regresar(true);" style="display: none">                                                    
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3" id="idRelacionCon">Juzgado</label>
                        <div class="col-md-9">
                            <div id="divCmbJuzgados" class="logobox"></div>
                            <select class="form-control" name="cmbJuzgado" id="cmbJuzgado" onchange="filtrarTipoCarpeta();">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3 needed" id="idRelacionCon">Relacionado con</label>
                        <div class="col-md-9">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbTipoCarpeta" id="cmbTipoCarpeta" onchange="changeLabel(this)">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                            <select name="cmbTipoJuzgado" id="cmbTipoJuzgado" style="display: none">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 needed" id="lblRelationName">No.</label>
                        <div id="divSinRelacion" class="col-md-9">
                            <input type="text" id="txtNumero" class="form-inline Relacionado" id="txtNumero" maxlength="5" placeholder="N&uacute;mero">/<input type="text" class="form-inline Relacionado" id="txtAnio" id="txtAnio" maxlength="4" placeholder="A&ntilde;o" >
                        </div>                                
                    </div>
                    <div id="divBuscaAcuerdo" class="form-group" style="display: none">
                        <label class="control-label col-md-3">Buscar imputado:</label>
                        <div class="col-md-9">
                            <input type="checkbox" id="buscaAcuerdo" class="form-inline" onclick="buscarTipoCarpeta(0);">
                            <label class="form-inline" id="acuerdoSel"></label>
                        </div>
                    </div>
                    <div id="idComboTipoFormulacionD" class="form-group">    

                    </div>
                    <div id="divFecha" style='display:none;'>

                        <div class="form-group">
                            <label for="fechaConsultar" class="col-md-3 control-label">Fecha Inicial</label>
                            <div class="col-md-9">
                                <input type='text' id="fechaConsultar" placeholder='FECHA' class='form-control datepicker'  data-date-format='dd/mm/yyyy'/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaConsultarEnd" class="col-md-3 control-label">Fecha Final</label>
                            <div class="col-md-9">
                                <input type='text' id="fechaConsultarEnd" placeholder='FECHA' class='form-control datepicker'  data-date-format='dd/mm/yyyy'/>
                            </div>
                        </div>
                    </div>
                    <div id="divConsultaFormulacionImputacion" style="display: none;height: 210px; border-top: 1px solid rgb(208, 220, 203);  overflow-x: hidden; overflow-y: scroll; " class="col-md-offset-3 col-md-9" >
                        <div class="form-group" id="paginacion" style="display: none">
                            <div class="col-md-2" style="padding: 10px">
                                <label id="totalReg"></label>
                            </div>
                            <div id="divPaginador" class=" col-md-3" >
                                <label class="control-label">P&aacute;gina:</label>
                                <select  name="cmbPaginacion" id="cmbPaginacion" onchange="buscarTipoCarpeta(1);" >
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div id="divPaginador" class=" col-md-4" >
                                <label class="control-label">Registros por p&aacute;gina:</label>
                                <select  name="cmbNumReg" id="cmbNumReg" onchange="buscarTipoCarpeta(2);">
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
                        <div id="divTableResultFormulacionImputacion">

                        </div>

                    </div>
                    <div class="form-group" style='display:none;' id="divRegistroSeleccionado">
                        <label  class='control-label col-md-3' id='lblRelationName' ></label>
                        <div id="ofendidoImputado" class="col-md-6">

                        </div>
                    </div>
                    <div id="idComboJuzgador" class="form-group" >                                                                

                    </div>
                    <div id="idFechaImputacionD" class="form-group">    
                        <label for="fechaFormulacion" class='control-label col-md-3 needed'>Fecha de imputaci&oacute;n</label>
                        <div class='col-md-9'>
                            <input type='text' id='fechaFormulacion' placeholder='FECHA' class='form-control datepicker' data-date-format='dd/mm/yyyy'/>
                        </div>
                    </div>
                    <div id="divObservaciones" class="form-group">
                        <label class="control-label col-md-3 needed">Contenido del documento</label>
                        <div class="col-md-9">
                            <script id="txtObservaciones" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
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
                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <div class="col-md-2 botonesAdaptar" > 
                            <input type="submit" class="btn btn-primary" id="inputGuardar" value="Guardar" onclick="guardarRegistro();" style="display: none">                                    
                            </div>
                            <div class="col-md-2 botonesAdaptar" > 
                            <input type="submit" class="btn btn-primary" id="inputBuscar" value="Buscar" onclick="consultar(true)" style="display: none">                                   
                            </div>                            
                            <div class="col-md-2 botonesAdaptar" > 
                            <input type="submit" class="btn btn-primary" id="inputConsultar" value="Consultar" onclick="previoConsultar();" style="display: none">
                            </div>                                                        
                            <div class="col-md-2 botonesAdaptar" > 
                            <input type="submit" class="btn btn-primary" id="inputBorrar" value="Eliminar" onclick="borrarRegistro();" style="display: none">
                            </div>                                                                                    
                            <div class="col-md-2 botonesAdaptar" > 
                            <input type="submit" class="btn btn-primary" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" value="Visor" onclick="javascript:visorDocuemntos();" style="display: none">
                            </div>                                                                                                                
                            <div class="col-md-2 botonesAdaptar" > 
                            <input type="submit" class="btn btn-primary" id="inputPDF" data-toggle="modal" onclick="enviar();"  value="Generar PDF" style="display: none">
                            </div>                                                                                                                                            
                            <div class="col-md-2 botonesAdaptar" > 
                            <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar(true);">
                            </div>  
                            <div class="col-md-2 botonesAdaptar" > 
                            <input type="submit" class="btn btn-primary" id="inputLimpiar2" value="Limpiar" onclick="limpiar(false);" style="display: none">                    
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div id="panelSecundario" class="panel-body" style="display:none">
                <div id="divFormulario" class="form-horizontal">
                    <div id="divConsultaGeneral" class=" form-horizontal">
                        <div class="col-xs-12" id="paginacion2" style="display:none;">
                            <div class="form-group col-xs-3">
                                <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar2(true);">
                                <label class="control-label" id="totalReg2"></label>
                            </div>
                            <div id="divPaginador" class="form-group col-xs-3" >
                                <label class="control-label">P&aacute;gina:</label>
                                <select  name="cmbPaginacion2" id="cmbPaginacion2" onchange="consultar(false);" >
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div id="divPaginador" class="form-group col-xs-4" >
                                <label class="control-label">Registros por p&aacute;gina:</label>
                                <select  name="cmbNumReg2" id="cmbNumReg2" onchange="consultar(true);">
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
                        <div id="div_Consultar" class="form-group col-xs-12">

                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="modal fade" id="ModalVisorPDF" tabindex="-1" role="dialog" aria-labelledby="VisorPDF">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="VisorPDF">Visor de documentos</h4>
                    </div>
                    <div class="modal-body" id="visor" style="max-height: 500px; overflow: scroll;"></div>

                </div>
            </div>
        </div>
        <script type="text/javascript">
           var instancia = null;
           var OrigenSegundaInstancia = "<?php echo $OrigenSegundaInstancia; ?>";
            var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
            var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
            var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
            var createRecord = 'N';
            var readRecord = 'N';
            var updateRecord = 'N';
            var deleteRecord = 'N';
            var banderaBuscarRegistro = true;

            var idImpOfeDelCarpetaI = "";
            var idCarpetaJudicialI = "";
            var cveTipoActuacionI = "";
            var consultaExitosa = -1;

            if (editor != undefined) {
                editor.destroy();
            }
            var editor = null;
            regresar2 = function (bandera) {//P
                $("#inputBorrar").hide();
                $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(true);'>Registro de Formulaci&oacute;n de Imputaci&oacute;n</span> / Consulta");
                if (bandera) {
                    $("#panelPrincipal").show();
                    $("#panelSecundario").hide();
                    $("#div_Consultar").hide();
                } else {
                    $("#div_Consultar").show();
                    consultar(true);
                }
                consultaExitosa = -1;
                idImpOfeDelCarpetaI = "";
                idCarpetaJudicialI = "";
                cveTipoActuacionI = "";
                $("#hiddenIdFormulacionImputacion").val("-1");
                $("#div_Detalles_Consulta").hide();
            };
            previoConsultar = function () {
                $("#inputVisor").hide();
                $("#inputPDF").hide();
                $("#idFechaImputacionD").hide();
                $("#divObservaciones").hide();
                if (($("#hiddenProcedencia").val() == 0) || (($("#hiddenIdCarpetaJudicial").val() == "") && ($("#hiddenIdActuacion").val() == ""))) {
                    document.getElementById("cmbTipoCarpeta").disabled = false;
                    document.getElementById("txtNumero").disabled = false;
                    document.getElementById("txtAnio").disabled = false;
                }
                document.getElementById("cmbFormulacionImputaciones").disabled = false;
                document.getElementById("cmbJuzgadores").disabled = false;
                $("#divFecha").show();
                $("#idSintesis").hide();
                $("#idTipoActuacion").hide();
                $("#idJuzgado").hide();
                $("#idComboJuzgador").hide();
                $("#divConsultaFormulacionImputacion").hide();
                $("#inputBuscar").show();
                $("#inputConsultar").hide();
                $("#inputGuardar").hide();
                $("#inputRegresarP").show();
                $("#inputLimpiar2").show();
                $("#inputBorrar").hide();
                $("#inputLimpiar").hide();
                $("#idFechaFormulacionD").hide();
                $("#lblRelationName").removeClass("needed");
                $("#lblTipoFormulacion").removeClass("needed");
                $("#idRelacionCon").removeClass("needed");
                banderaBuscarRegistro = false;
                $("#hiddenIdActuacion").val("");
                $("#divBuscaAcuerdo").hide();
                $('#fechaConsultar').val(fechaHoy());
                $('#fechaConsultarEnd').val(fechaHoy());
                $("#divRegistroSeleccionado").hide();
                $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(true);'>Registro de Formulaci&oacute;n de Imputaci&oacute;n</span> / Consulta");
            };
            consultar = function (bandera) {
                var accion = "consultarDetalles";
                var cveTipoCarpeta = "";
                var cveTipoFormulacion = "";
                var cveJuzgado = "";
                var fechaInicio = "";
                var fechaFinal = "";
                
                if ($("#cmbTipoCarpeta").val() != 0) {
                    cveTipoCarpeta = $("#cmbTipoCarpeta").val();
                }
                if ($("#cmbFormulacionImputaciones").val() != 0) {
                    cveTipoFormulacion = $("#cmbFormulacionImputaciones").val();
                }
                if ($("#hiddenIdActuacion").val() == "") {
                    if ($("#cmbJuzgado").val() != 0) {
                        cveJuzgado = $("#cmbJuzgado").val();
                    }
                }
                if (($("#cmbTipoCarpeta").val() == 0) && ($("#cmbJuzgado").val() == 0) && ($("#txtNumero").val() == "") && ($("#txtAnio").val() == "")) {
                    fechaInicio = $("#fechaConsultar").val();
                    fechaFinal = $("#fechaConsultarEnd").val();
                }
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/formulacionimputaciones/FormulacionimputacionesFacade.Class.php",
                    data: {
                        accion: accion,
                        cveTipoCarpeta: cveTipoCarpeta,
                        cveTipoFormulacion: cveTipoFormulacion,
                        idActuacion: $("#hiddenIdActuacion").val(),
                        numero: $("#txtNumero").val(),
                        anio: $("#txtAnio").val(),
                        cveJuzgado: cveJuzgado,
                        activo: "S",
                        fechaDesde: fechaInicio,
                        fechaHasta: fechaFinal,
                        paginacion: "true",
                        cantxPag: $("#cmbNumReg2").val(),
                        pag: $("#cmbPaginacion2").val()
                    },
                    async: false,
                    dataType: "json",
                    beforeSend: function (objeto) {
                    },
                    success: function (json) {
                        var table = "";
                        if (json.totalCount > 0) {
                            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar(true);'>Registro de Formulaci&oacute;n de Imputaci&oacute;n</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresar2(true);'>Consulta</span> / Resultados");
                            $("#div_Guardar").hide();
                            table += "<table id='tblResultadosGridAct2' class='table table-hover table-striped table-bordered'>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>N&uacute;m.</th>";
                            table += "<th style='display: none;'>Observaciones</th>";

                            table += "<th>Imputado</th>";
                            table += "<th>Delito</th>";
                            table += "<th>Ofendido</th>";
                            table += "<th>Formulaci&oacute;n</th>";
                            table += "<th>Fecha del Registro</th>";
                            table += "<th>Fecha de Formulacion</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            var jsonDatos;// = JSON.stringify(json);
                            var observaciones;
                            for (var i = 0; i < json.totalCount; i++) {
                                observaciones = json.data[i].observaciones;
                                json.data[i].observaciones = "";
                                jsonDatos = JSON.stringify(json.data[i]);
                                table += "<tr style='cursor: pointer;' onclick='detallesRegistro(" + jsonDatos + "," + false + ")'>";
                                table += "<td > " + (i + 1) + "</td>";
                                table += "<td style='display: none;'> <div id='doc" + json.data[i].idFormulacionImputacion + "'> " + observaciones + "</div></td>";
                                if (json.data[i].iccveTipoPersona == 1) {
                                    table += "<td>" + json.data[i].icnombre + " " + json.data[i].icpaterno + " " + json.data[i].icmaterno + "</td>";
                                } else {
                                    table += "<td>" + json.data[i].icnombreMoral + "</td>";
                                }
                                table += "<td>" + json.data[i].desDelito + "</td>";
                                if (json.data[i].occveTipoPersona == 1) {
                                    table += "<td>" + json.data[i].ocnombre + " " + json.data[i].ocpaterno + " " + json.data[i].ocmaterno + "</td>";
                                } else {
                                    table += "<td>" + json.data[i].ocnombreMoral + "</td>";
                                }
                                table += "<td>" + json.data[i].desTipoFormulacion + "</td>";
                                table += "<td>" + fechaSinSegundos(json.data[i].fechaRegistro) + "</td>";
                                table += "<td>" + json.data[i].fechaFormulacion + "</td>";
                                table += "</tr> ";
                            }
                            table += "</tbody>";
                            table += "</table>";
                            $("#panelPrincipal").hide();
                            $("#panelSecundario").show();
                            $("#div_Consultar").show();
                            if (deleteRecord == "S") {
                                $("#inputBorrar").show();
                            } else {
                                $("#inputBorrar").hide();
                            }
                            $("#div_Consultar").html(table);
                            $("#tblResultadosGridAct2").DataTable({
                                paging: false
                            });
                            if ($("#hiddenIdActuacion").val() != "") {
                                detallesRegistro(json, 2);
                            }
                            if (bandera) {
                                calcularPaginas(3);
                            }
                        } else {
                            $("#panelSecundario").hide();
                            $("#panelPrincipal").show();
                            $("#divAlertInfo").html('' + json.text);
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
            cargaTipoCarpeta = function () {
                var strDatos = "accion=consultar";
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
                                if ((json.data[i].cveTipoCarpeta != 8) && (json.data[i].cveTipoCarpeta != 7) && (json.data[i].cveTipoCarpeta != 10)) {
                                    $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            }
                        }
                        $('#divCmbRelaciones').hide();
                        cargaJuzgados();
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            };
            changeLabel = function (objOption) {
                $("#hiddenIdActuacion").val("");
                if ($("#cmbTipoCarpeta").val() != 0) {
                    if (banderaBuscarRegistro) {
                        $("#divBuscaAcuerdo").show();
                    }
                    $("#lblRelationName").html("No. " + $("#" + objOption.id + " option:selected").text() + ":");
                } else {
                    $("#lblRelationName").html("No. ");
                    $("#divBuscaAcuerdo").hide();
                }
                $("#hiddenIdFormulacionImputacion").val("");
                $("#divRegistroSeleccionado").hide();
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#divSinRelacion").show();
            };
            calcularPaginas = function (bandera) {
                $("#paginacion").show();
                var url = "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php";
                var strDatos = "paginacion=true";
                strDatos += "&cantxPag=" + $("#cmbNumReg").val();
                strDatos += "&pag=" + $("#cmbPaginacion").val();
                strDatos += "&activo=S";
                if (bandera == 1) {
                    strDatos += "&accion=getPaginasFormulacionImputacino";
                    strDatos += "&numero=" + $("#txtNumero").val();
                    strDatos += "&anio=" + $("#txtAnio").val();
                    strDatos += "&cveTipoCarpeta=" + $("#hiddenCveTipoCarpeta").val();
                    if ($("#cmbJuzgado").val() != 0) {
                        strDatos += "&cveJuzgado=" + $("#cmbJuzgado").val();
                    }
                } else {
                    url = "../fachadas/sigejupe/formulacionimputaciones/FormulacionimputacionesFacade.Class.php";
                    if (bandera == 3) {
                        $("#paginacion2").show();
                        strDatos = "paginacion=true";
                        strDatos += "&numero=" + $("#txtNumero").val();
                        strDatos += "&anio=" + $("#txtAnio").val();
                        strDatos += "&activo=S";
                        if ($("#cmbJuzgado").val() != 0) {
                            strDatos += "&cveJuzgado=" + $("#cmbJuzgado").val();
                        }
                        strDatos += "&cantxPag=" + $("#cmbNumReg2").val();
                        strDatos += "&pag=" + $("#cmbPaginacion2").val();
                        strDatos += "&activo=S";
                    }
                    strDatos += "&accion=getPaginasConsultarDetalles";
                }
                strDatos += "&fechaDesde=" + $("#fechaConsultar").val();
                strDatos += "&fechaHasta=" + $("#fechaConsultarEnd").val();
                $.ajax({
                    type: "POST",
                    url: url,
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        //console.log(datos);
                        var json = eval("(" + datos + ")"); //Parsear JSON
                        var totalRegistros = json.totalCount;
                        var combo = "";
                        if (totalRegistros > 0) {
                            var i;
                            if (bandera != 3) {
                                $("#totalReg").html("Total: " + totalRegistros);
                                if (totalRegistros / $("#cmbNumReg").val() < 0) {
                                    combo += "<option value='" + 1 + "'>" + 1 + "</option>";
                                } else {
                                    for (i = 0; i < totalRegistros / $("#cmbNumReg").val(); i++) {
                                        combo += "<option value='" + (i + 1) + "'>" + (i + 1) + "</option>";
                                    }
                                }
                                $("#cmbPaginacion").html(combo);
                            } else {
                                $("#totalReg2").html("Total: " + totalRegistros);
                                if (totalRegistros / $("#cmbNumReg2").val() < 0) {
                                    combo += "<option value='" + 1 + "'>" + 1 + "</option>";
                                } else {
                                    for (i = 0; i < totalRegistros / $("#cmbNumReg2").val(); i++) {
                                        combo += "<option value='" + (i + 1) + "'>" + (i + 1) + "</option>";
                                    }
                                }
                                $("#cmbPaginacion2").html(combo);
                            }
                        } else {
                            console.log(datos);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            };
            buscarTipoCarpeta = function (bandera) {
                var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
                var numAct = $("#txtNumero").val();
                var aniAct = $("#txtAnio").val();
                var strDatosCarpeta = "";
                var error = 0;
                var mensaje = "";
                if (cveTipoCarpeta == 0) {
                    error = 1;
                    mensaje += "   - Relaci&oacute;n con";
                }
                if (numAct == "") {
                    error = 2;
                    mensaje += "   - N&uacute;mero";
                }
                if (aniAct == "") {
                    error = 3;
                    mensaje += "   - A&ntilde;o";
                }
                if ((error == 0) || ($("#hiddenIdCarpetaJudicial").val() != "")) {
                    if (bandera == 2) {
                        $("#cmbPaginacion").val(1);
                    }
                    if (bandera == 0) {
                        $("#cmbNumReg").val("10");
                        $("#cmbPaginacion").val("1");
                    }
                    $("#div_Detalles_Consulta").hide();
                    strDatosCarpeta = "accion=consultarCarpetaJudicialYimpofedel";
                    strDatosCarpeta += "&idCarpetaJudicial=" + $("#hiddenIdCarpetaJudicial").val();
                    if ($("#hiddenIdCarpetaJudicial").val() == "") {
                        strDatosCarpeta += "&cveTipoCarpeta=" + cveTipoCarpeta;
                        strDatosCarpeta += "&numero=" + numAct;
                        strDatosCarpeta += "&anio=" + aniAct;
                        strDatosCarpeta += "&activo=S";
                        if ($("#cmbJuzgado").val() != 0) {
                            strDatosCarpeta += "&cveJuzgado=" + $("#cmbJuzgado").val();
                        }
                    }
                    strDatosCarpeta += "&paginacion=true";
                    strDatosCarpeta += "&cantxPag=" + $("#cmbNumReg").val();
                    strDatosCarpeta += "&pag=" + $("#cmbPaginacion").val();
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                        data: strDatosCarpeta,
                        async: true,
                        dataType: "html",
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            var table = "";
                            var json = "";
                            json = eval("(" + datos + ")"); //Parsear JSON
                            if (json.totalCount > 0) {
                                $("#txtNumero").val(json.numero);
                                $("#txtAnio").val(json.anio);
                                $("#divBuscaAcuerdo").hide();
                                $("#buscaAcuerdo").attr("checked", false);
                                $("#cmbJuzgado").val(json.cveJuzgado);
                                document.getElementById("cmbJuzgado").disabled = true;
                                document.getElementById("cmbTipoCarpeta").disabled = true;
                                document.getElementById("txtNumero").disabled = true;
                                document.getElementById("txtAnio").disabled = true;
                                table += "<table id='tblResultadosGridAct' class='table table-hover table-striped table-bordered'>";
                                table += "<thead>";
                                table += "<tr>";
                                table += "<th>N&uacute;m.</th>";
                                table += "<th>Imputado</th>";
                                table += "<th>Delito</th>";
                                table += "<th>Ofendido</th>";
                                table += "<th>Comisi&oacute;n</th>";
                                table += "<th>Fecha del delito</th>";
                                table += "</tr>";
                                table += "</thead>";
                                table += "<tbody>";
                                var jsonDatos;// = JSON.stringify(json);
                                var datosTipoActuacion;
                                var indice = $("#cmbPaginacion").val();
                                indice = (indice - 1) * $("#cmbNumReg").val();
                                for (var i = 0; i < json.totalCount; i++) {
                                    jsonDatos = JSON.stringify(json.data[i]);
                                    datosTipoActuacion = JSON.stringify(json.datosTipoActuacion);
                                    table += "<tr style='cursor: pointer;' onclick='detallesRegistro(" + jsonDatos + "," + true + "," + datosTipoActuacion + ")'>";
                                    table += "<td > " + (i + 1 + indice) + "</td>";
                                    if (json.data[i].iccveTipoPersona == 1) {
                                        table += "<td>" + json.data[i].icnombre + " " + json.data[i].icpaterno + " " + json.data[i].icmaterno + "</td>";
                                    } else {
                                        table += "<td>" + json.data[i].icnombreMoral + "</td>";
                                    }
                                    table += "<td>" + json.data[i].desDelito + "</td>";
                                    if (json.data[i].occveTipoPersona == 1) {
                                        table += "<td>" + json.data[i].ocnombre + " " + json.data[i].ocpaterno + " " + json.data[i].ocmaterno + "</td>";
                                    } else {
                                        table += "<td>" + json.data[i].ocnombreMoral + "</td>";
                                    }
                                    table += "<td>" + json.data[i].desComision + "</td>";
                                    table += "<td>" + json.data[i].fechaDelito + "</td>";
                                    table += "</tr> ";
                                }
                                table += "</tbody>";
                                table += "</table>";
                                $("#divConsultaFormulacionImputacion").show();
                                $("#divTableResultFormulacionImputacion").show();
                                $("#divTableResultFormulacionImputacion").html(table);
                                $("#tblResultadosGridAct").DataTable({
                                    paging: false
                                });
                                if ((bandera != 1) && (json.totalCount > 9)) {
                                    calcularPaginas(true);
                                }
                            } else {
                                consultaExitosa = -1;
                                $("#buscaAcuerdo").attr("checked", false);
                                var tipoNumero = $('#cmbTipoCarpeta :selected').text();
                                $("#divAlertDager").html("Error el numero de " + tipoNumero + " no existe");
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
                } else {
                    $("#divInformacion").show();
                    $("#strInformacion").html("Informaci&oacute;n! seleccione: " + mensaje);
                    setTimeAlert("divInformacion");
                }
            };
            detallesRegistro = function (json, bandControl, datosTipoActuacion) {
                if (bandControl == 1) {
                    $("#divConsultaFormulacionImputacion").hide();
                    $("#divRegistroSeleccionado").show();
                    if (updateRecord == "S") {
                        $("#inputGuardar").show();
                    } else {
                        $("#inputGuardar").hide();
                    }
                    var infImputado = "<label id='label_registro1' class='form-inline'>";
                    if (json.iccveTipoPersona == 1) {
                        infImputado += "Imputado: " + json.icnombre + " " + json.icpaterno + " " + json.icmaterno;
                    } else {
                        infImputado += "Imputado: " + json.icnombreMoral;
                    }
                    infImputado += "</label><br><label class='form-inline'>Delito: " + json.desDelito + "</label>";
                    infImputado += "<br><label class='form-inline'>Fecha del delito: " + json.fechaDelito;
                    infImputado += "</label><br>";
                    $("#labelRegistroSeleccionado").val(infImputado);
                    var infOfendido = "<label id='label_registro2' class='form-inline'>";
                    if (json.occveTipoPersona == 1) {
                        infOfendido += "Ofendido: " + json.ocnombre + " " + json.ocpaterno + " " + json.ocmaterno;
                    } else {
                        infOfendido += "Ofendido: " + json.ocnombreMoral;
                    }
                    infOfendido += "</label>";
                    $("#ofendidoImputado").html(infImputado + infOfendido);
                    cveTipoActuacionI = datosTipoActuacion[0].cveTipoActuacion;
                    idCarpetaJudicialI = json.idCarpetaJudicial;
                } else {
                    regresar(true);
                    $("#inputPDF").show();
                    $("#inputVisor").show();
                    if (deleteRecord == "S") {
                        $("#inputBorrar").show();
                    } else {
                        $("#inputBorrar").hide();
                    }
                    if (updateRecord == "S") {
                        $("#inputGuardar").show();
                    } else {
                        $("#inputGuardar").hide();
                    }
                    $("#idFechaFormulacionD").show();
                    cargarJuzgadores();
                    if (bandControl == 2) {
                        $("#cmbJuzgado").val(json.data[0].cveJuzgado);
                        $("#hiddenIdCarpetaJudicial").val(json.data[0].idReferencia);
                        $("#txtNumero").val(json.data[0].numero);
                        $("#txtAnio").val(json.data[0].anio);
                        //console.log(json.data[0].cveTipoFormulacion);
                        $("#cmbFormulacionImputaciones").val(json.data[0].cveTipoFormulacion);
                        $("#txtJuzgado").val(json.data[0].desJuzgado);
                        $("#txtTipoActuacion").val(json.data[0].desTipoActuacion);
                        $("#cmbJuzgadores").val(json.data[0].idJuzgador);
//                        cargarJuzgadores(json.data[0].idJuzgador);
                        $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                        //$("#hiddenFechaFormulacion").val(json.data[0].fechaFormulacion);
                        $("#fechaFormulacion").val(json.data[0].fechaFormulacion);
                        //$("#txtSintesis").val(json.sintesis);
                        var content = $("#doc" + json.data[0].idFormulacionImputacion).html();
                        llenareditor(content);
                        cveTipoActuacionI = json.data[0].cveTipoActuacion;
                        $("#hiddenIdFormulacionImputacion").val(json.data[0].idFormulacionImputacion);
                        $("#hiddenIdActuacion").val(json.data[0].idActuacion);
                        $("#hiddenCveTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                    } else {
                        $("#cmbJuzgado").val(json.cveJuzgado);
                        $("#txtNumero").val(json.numero);
                        $("#txtAnio").val(json.anio);
                        $("#cmbFormulacionImputaciones").val(json.cveTipoFormulacion);
                        $("#txtJuzgado").val(json.desJuzgado);
                        $("#txtTipoActuacion").val(json.desTipoActuacion);
                        $("#cmbJuzgadores").val(json.idJuzgador);
//                        $("#cmbJuzgadores").val(json.idJuzgador);
//                        cargarJuzgadores(json.idJuzgador);
                        $("#cmbTipoCarpeta").val(json.cveTipoCarpeta);
                        $("#fechaFormulacion").val(json.fechaFormulacion);
                        //$("#txtSintesis").val(json.sintesis);
                        var content = $("#doc" + json.idFormulacionImputacion).html();
                        llenareditor(content);
                        cveTipoActuacionI = json.cveTipoActuacion;
                        $("#hiddenIdFormulacionImputacion").val(json.idFormulacionImputacion);
                        $("#hiddenIdActuacion").val(json.idActuacion);
                        $("#hiddenCveTipoCarpeta").val(json.cveTipoCarpeta);
                    }
                    document.getElementById("cmbTipoCarpeta").disabled = true;
                    document.getElementById("txtNumero").disabled = true;
                    document.getElementById("txtAnio").disabled = true;
                    document.getElementById("fechaFormulacion").disabled = true;
                    //document.getElementById("cmbJuzgadores").disabled = true;
                    document.getElementById("cmbJuzgado").disabled = true;
                }
                consultaExitosa = 1;
                idImpOfeDelCarpetaI = json.idImpOfeDelCarpeta;
            };
            llenareditor = function (value) {
                try {
                    editor.ready(function () {
                        setTimeout(function () {
                            editor.setContent(value, false);
                        }, 500);
                        ;
                    });
                } catch (e) {
                    alert(e);
                }
            };
            fechaHoy = function () {
                return $("#hiddenFechaHoy").val();
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
            filtrarTipoCarpeta = function () {
                $("#cmbTipoCarpeta option").each(function () {
                    $(this).hide();
                });
                $("#cmbTipoCarpeta option[value=0]").show();
                var cveJuzgado = $("#cmbJuzgado").val();
                var cveTipoJuzgado = $("#cmbTipoJuzgado option[value='" + cveJuzgado + "']").text();
                if (cveTipoJuzgado == 1) {//control
                    $("#cmbTipoCarpeta option[value=8]").show();
                    $("#cmbTipoCarpeta option[value=2]").show();
                    $("#cmbTipoCarpeta option[value=1]").show();
                    $("#cmbTipoCarpeta option[value=7]").show();
                } else {
                    if (cveTipoJuzgado == 3) {//ejecucion
                        $("#cmbTipoCarpeta option[value=8]").show();
                        $("#cmbTipoCarpeta option[value=5]").show();
                        $("#cmbTipoCarpeta option[value=7]").show();
                    } else {
                        if (cveTipoJuzgado == 2) {//juicio
                            $("#cmbTipoCarpeta option[value=8]").show();
                            $("#cmbTipoCarpeta option[value=3]").show();
                            $("#cmbTipoCarpeta option[value=7]").show();
                        } else {
                            if (cveTipoJuzgado == 4) {//tribunal
                                $("#cmbTipoCarpeta option[value=8]").show();
                                $("#cmbTipoCarpeta option[value=4]").show();
                                $("#cmbTipoCarpeta option[value=7]").show();
                            }
                        }
                    }
                }
                $("#cmbTipoCarpeta").val(0);
            };
    //        cargarJuzgadores = function (cveJuzgado) {
    //            var strDatos = "accion=cargarCombos";
    //            if ($("#cmbJuzgado").val() == 0) {
    //                strDatos += "&cveJuzgado=" + juzgadoSesion;
    //            } else {
    //                strDatos += "&cveJuzgado=" + $("#cmbJuzgado").val();
    //            }
    //            $.ajax({
    //                type: "POST",
    //                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
    //                data: strDatos,
    //                async: true,
    //                global: false,
    //                dataType: "html",
    //                beforeSend: function (objeto) {
    //                },
    //                success: function (datos) {
    //                    var json = "";
    //                    json = eval("(" + datos + ")");
    //                    $("#cmbJuzgadores").html(combo(json, true));
    //                    if (cveJuzgado != null) {
    //                        $("#cmbJuzgadores").val(cveJuzgado);
    //                    }
    //                },
    //                error: function (objeto, quepaso, otroobj) {
    //                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
    //                    $("#divAlertDager").show("slide");
    //                    setTimeAlert("divAlertDager");
    //                }
    //            });
    //            filtrarTipoCarpeta();
    //        };
            
            cargarJuzgadores = function () {
              
            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbJuzgadores").append($('<option></option>').val(json.data[i].idJuzgador).html(json.data[i].nombre+" "+json.data[i].paterno+" "+json.data[i].materno));
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
            
            cargarCombos = function () {
                var strDatos = "accion=cargarCombos";
                strDatos += "&cveJuzgado=" + juzgadoSesion;
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")");
                        var comboFI = "<label class='control-label col-md-3 needed' id='lblTipoFormulacion'>Tipo de formulaci&oacute;n</label>";
                        comboFI += "<div class='col-md-9'>";
                        comboFI += "<select id='cmbFormulacionImputaciones' class='form-control' name='cmbFormulacionImputaciones'>";
                        comboFI += combo(json, false);
                        comboFI += "</select>";
                        comboFI += "<label id='labelComboFI' style='display: none'> Seleccione el tipo de imputac&oacute;n</label>";
                        comboFI += "</div>";
                        $("#idComboTipoFormulacionD").html(comboFI);
                        var comboJ = "<label class='control-label col-md-3 needed' id='lblRelationName'>Juzgador</label> ";
                        comboJ += "<div class='col-md-9'>";
                        comboJ += "<select id='cmbJuzgadores' class='form-control' name='cmbJuzgadores'>";
    //                    comboJ += combo(json, true);
                        comboJ += "</select>";
                        comboJ += "<label id='labelComboJ' style='display: none'> Seleccione un juzgador</label>";
                        comboJ += "</div>";
                        $("#idComboJuzgador").html(comboJ);
                        filtrarTipoCarpeta();
                        if ($("#hiddenProcedencia").val() == 1) {
                            $("#cmbTipoCarpeta").val($("#hiddenCveTipoCarpeta").val());
                            if ($("#hiddenIdActuacion").val() != "") {
                                consultar(false);
                            } else if ($("#hiddenIdCarpetaJudicial").val() != "") {
                                buscarTipoCarpeta(0);
                            }
                        }
                        
                        cargarJuzgadores();
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    
                });
            };
            borrarRegistroConfirmado = function (strDatos) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/formulacionimputaciones/FormulacionimputacionesFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")");
                        if (json.transaccion) {
                            if ($("#hiddenProcedencia").val() == 1) {
                                getTree();
                            }
                            limpiar(true);
                            consultaExitosa = -1;
                            $("#hiddenIdFormulacionImputacion").val("");
                            $("#hiddenIdActuacion").val("");
                            $("#divAlertSucces").html(json.mensaje + "\n\n");
                            $("#divAlertSucces").show("slide");
                            setTimeAlert("divAlertSucces");
                        } else {
                            $("#divAlertDager").html("Error en la peticion: No se borro el registro\n\n");
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            };
            borrarRegistro = function () {
                var strDatos = "accion=borrarFormulacionImputacion";
                strDatos += "&idFormulacionImputacion=" + $("#hiddenIdFormulacionImputacion").val();
                var mensaje = "\u00A1Advertencia! <br><br>\u00BFEst\u00E1 seguro de eliminar el registro?";
                bootbox.dialog({
                    message: mensaje,
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                if (deleteRecord == "S") {
                                    borrarRegistroConfirmado(strDatos);
                                } else {
                                    $("#divAlertDager").html("Error no posee PERMISO para eliminar\n\n");
                                    $("#divAlertDager").show("slide");
                                    setTimeAlert("divAlertDager");
                                }
                            }
                        },
                        success: {
                            label: "Cancelar",
                            className: "btn-primary",
                            callback: function () {

                            }
                        }
                    }
                });
            };
            guardarRegistro = function () {
                var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
                var numAct = $("#txtNumero").val();
                var aniAct = $("#txtAnio").val();
                var error = 0;
                var cveJuzgado = juzgadoSesion;
                var mensaje = "";
                if (cveTipoCarpeta == 0) {
                    error = 1;
                    mensaje += "   - Relaci&oacute;n con";
                }
                if (numAct == "") {
                    error = 2;
                    mensaje += "   - N&uacute;mero";
                }
                if (aniAct == "") {
                    error = 3;
                    mensaje += "   - A&ntilde;o";
                }
                if ($("#cmbFormulacionImputaciones").val() == 0) {
                    error = 4;
                    mensaje += "   - Tipo de formulaci&oacute;n";
                }
                if ($("#cmbJuzgadores").val() == 0) {
                    error = 5;
                    mensaje += "   - Juzgadores";
                }
                if ($("#fechaFormulacion").val() == "") {
                    error = 6;
                    mensaje += "   - Fecha imputaci&oacute;n";
                }
                if (editor.getContent() == "") {
                    error = 7;
                    mensaje += "   - Contenido del documento";
                }
                if ($("#cmbJuzgado").val() != 0) {
                    cveJuzgado = $("#cmbJuzgado").val();
                }
                if (error == 0) {
                    if (consultaExitosa != -1) {                                                            //juzgadoSesion,bandera
                        guardarFormulacionImputacion(idImpOfeDelCarpetaI, idCarpetaJudicialI, cveTipoActuacionI, cveJuzgado);
                    } else {
                        $("#divInformacion").show();
                        $("#strInformacion").html("No hay alguna relaci&oacute;n de imputado y ofendido");
                        setTimeAlert("divInformacion");
                    }
                } else {
                    $("#divInformacion").show();
                    $("#strInformacion").html("Informaci&oacute;n! seleccione: " + mensaje);
                    setTimeAlert("divInformacion");
                }
            };
            guardarFormulacionImputacion = function (idImpOfeDelCarpeta, idCarpetaJudicial, cveTipoActuacion, cveJuzgado) {
                var observaciones = editor.getContent();
                observaciones = observaciones.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');
                var accion = "guardarAcutacionFormulacionImputacion";
                if ($("#hiddenIdFormulacionImputacion").val() != "") {
                    accion = "actualizarActuacionFormulacionImputacion";
                    idImpOfeDelCarpeta = "";
                }
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                    data: {
                        accion: accion,
                        idFormulacionImputacion: $("#hiddenIdFormulacionImputacion").val(),
                        idActuacion: $("#hiddenIdActuacion").val(),
                        numero: $("#txtNumero").val(),
                        anio: $("#txtAnio").val(),
                        cveTipoActuacion: cveTipoActuacion,
                        idReferencia: idCarpetaJudicial,
                        cveTipoCarpeta: $("#cmbTipoCarpeta").val(),
                        idJuzgador: $("#cmbJuzgadores").val(),
                        cveTipoFormulacion: $("#cmbFormulacionImputaciones").val(),
                        fechaFormulacion: $("#fechaFormulacion").val(),
                        cveJuzgado: cveJuzgado,
                        idImpOfeDelCarpeta: idImpOfeDelCarpeta,
                        activo: "S",
                        observaciones: observaciones
                    },
                    async: false,
                    dataType: "json",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos.transaccion) {
                            $("#inputPDF").show();
                            $("#inputVisor").show();
                            if ($("#hiddenProcedencia").val() == 1) {
                                $("#hiddenIdCarpetaJudicial").val(idCarpetaJudicial);
                                $("#hiddenCveTipoCarpeta").val($("#cmbTipoCarpeta").val());
                                $("#cmbJuzgadoArbol").val($("#cmbJuzgado").val());
                                $("#cmbTipoCarpetaTree").val($("#cmbTipoCarpeta").val());
                                $("#cmbTipoCarpetaTree").change();
                                $("#txtNumeroTree").val($("#txtNumero").val());
                                $("#txtAnioTree").val($("#txtAnio").val());
                                getTree();
                            }
                            $("#hiddenIdFormulacionImputacion").val(datos.idFormulacionImputacion);
                            $("#hiddenIdActuacion").val(datos.idActuacion);
                            $("#divAlertSucces").html(datos.mensaje + "\n\n");
                            $("#divAlertSucces").show("slide");
                            setTimeAlert("divAlertSucces");
                        } else {
                            $("#divAlertDager").html("Error en la peticion: No se guardo el registro\n\n");
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            };
            regresar = function (bandera) {
                $("#inputBorrar").hide();
                $("#panelPrincipal").show();
                $("#panelSecundario").hide();
                $("#div_Detalles_Consulta").hide();
                $("#hiddenIdFormulacionImputacion").val("");

                $("#hiddenCveTipoCarpeta").val("");
                $("#inputBuscar").hide();
                $("#inputRegresarP").hide();
                if ((readRecord == "S") && ($("#hiddenProcedencia").val() == 0)) {
                    $("#inputConsultar").show();
                }
                $("#h5titulo").html("Registro de Formulaci&oacute;n de Imputaci&oacute;n");
                if (bandera) {
                    $("#hiddenIdActuacion").val("");
                    $("#hiddenIdCarpetaJudicial").val("");
                    $("#divObservaciones").show();
                    $("#idFechaImputacionD").show();
                    //$("#txtSintesis").val("");
                    $("#lblRelationName").addClass("needed");
                    $("#idRelacionCon").addClass("needed");
                    $("#lblTipoFormulacion").addClass("needed");
                    banderaBuscarRegistro = true;
                    $("#inputLimpiar").show();
                    $("#inputLimpiar2").hide();
                    $("#divFecha").hide();
                    $("#idSintesis").show();
                    $("#idTipoActuacion").show();
                    $("#idJuzgado").show();
                    $("#idComboJuzgador").show();
                    $("#idComboTipoFormulacionD").show();
                    $("#divConsultaFormulacionImputacion").hide();
                    $("#divGuardarFormulacionImputacion").hide();
                    $("#inputLimpiar").show();
                    if (createRecord == "S") {
                        $("#inputGuardar").show();
                    }
                    document.getElementById("cmbJuzgado").disabled = false;
                    document.getElementById("cmbTipoCarpeta").disabled = false;
                    document.getElementById("txtNumero").disabled = false;
                    document.getElementById("txtAnio").disabled = false;
                    $("#lblRelationName").html("No.");
                    $("#cmbTipoCarpeta").val(0);
                    $("#txtNumero").val("");
                    $("#txtAnio").val("");
                    $("#cmbPaginacion").val(1);
                    $("#divBuscaAcuerdo").hide();
                    $("#buscaAcuerdo").attr("checked", false);
                }
            };
            combo = function (json, bandera) {
                var i;
                var combo = "<option value=0>Seleccione una opci&oacute;n</option>";
                if (bandera) {
                    for (i = 0; i < json.totalJuzgadores; i++) {
                        combo += "<option value='" + json.comboJuzgadores[i].id + "'>" + json.comboJuzgadores[i].titulo + " " + json.comboJuzgadores[i].nombre + " " + json.comboJuzgadores[i].paterno + " " + json.comboJuzgadores[i].materno + "</option>";
                    }
                    if (json.totalJuzgadores == 0) {
                        combo = "<option value=0>NO HAY REGISTROS</option>";
                    }
                } else {
                    for (i = 0; i < json.totalTiposFormulaciones; i++) {
                        combo += "<option value='" + json.comboTiposFormulaciones[i].cveTipoFormulacion + "'>" + json.comboTiposFormulaciones[i].desTipoFormulacion + "</option>";
                    }
                    if (json.totalTiposFormulaciones == 0) {
                        combo = "<option value=0>NO HAY REGISTROS</option>";
                    }
                }
                return combo;
            };
            limpiar = function (bandera) {
                if (($("#hiddenProcedencia").val() == 0) || ($("#hiddenIdCarpetaJudicial").val() == "")) {
                    if ($("#cmbJuzgado").val() != juzgadoSesion) {
                        $("#cmbJuzgado").val(juzgadoSesion);
                        cargarJuzgadores();
                    }
                    $("#hiddenIdCarpetaJudicial").val("");
                    $("#hiddenCveTipoCarpeta").val("");
                    $("#cmbTipoCarpeta").val(0);
                    $("#txtNumero").val("");
                    $("#txtAnio").val("");
                    document.getElementById("cmbJuzgado").disabled = false;
                    document.getElementById("cmbTipoCarpeta").disabled = false;
                    document.getElementById("txtNumero").disabled = false;
                    document.getElementById("txtAnio").disabled = false;
                    $("#divBuscaAcuerdo").hide();
                } else {
                    $("#divBuscaAcuerdo").show();
                }
                $("#inputPDF").hide();
                $("#inputVisor").hide();
                $("#hiddenIdActuacion").val("");
                editor.setContent("", false);
                consultaExitosa = -1;
                $("#fechaFormulacion").val("");
                document.getElementById("fechaFormulacion").disabled = false;

                document.getElementById("cmbFormulacionImputaciones").disabled = false;
                document.getElementById("cmbJuzgadores").disabled = false;
                $("#inputBorrar").hide();
                //$("#hiddenIdActuacion").val("");
                //$("#hiddenIdCarpetaJudicial").val("");
                $("#hiddenIdFormulacionImputacion").val("");
                //$("#hiddenCveTipoCarpeta").val("");
                $("#lblRelationName").html("No. ");
                $("#panelSecundario").hide();
                $("#cmbNumReg").val(10);
                $("#cmbNumReg2").val(10);
                $("#div_Detalles_Consulta").hide();
                //$("#divBuscaAcuerdo").hide();
                $("#buscaAcuerdo").attr("checked", false);
                $('#fechaConsultar').val(fechaHoy());
                $('#fechaConsultarEnd').val(fechaHoy());
                //$("#cmbTipoCarpeta").val(0);
                $("#cmbJuzgadores").val(0);
                $("#cmbFormulacionImputaciones").val(0);
                //$("#txtNumero").val("");
                //$("#txtAnio").val("");
                $("#divRegistroSeleccionado").hide();
                $("#divConsultaFormulacionImputacion").hide();
                if ((createRecord == "S") && (bandera)) {
                    $("#inputGuardar").show();
                }
            };
            obtenerPermisos = function () {
                var cveUsuarioSistema = cveUsuarioSesion;
                $.get("../archivos/" + cveUsuarioSistema + ".json",
                        function (response) {
                            for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                                if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                                    $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                        if (vnombre.nomFormulario == "CARPETAS JUDICIALES") {
                                            var hijos = vnombre.hijos;
                                            $.each(hijos, function (k2, nombreHijo) {//REGISTRO FORMULACION IMPUTACION
                                                if (nombreHijo.nomFormulario == 'OFICIOS') {
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
                            if (createRecord == "S") {
                                $("#inputGuardar").show();
                            }
                            if ((readRecord == "S") && ($("#hiddenProcedencia").val() == 0)) {
                                $("#inputConsultar").show();
                            }
                        });
            };
            fechaSinSegundos = function(fecha){
                if(fecha!=null){
                    var hora =fecha.split(":");
                    return hora[0] + ":" + hora[1];
                }
                return "";
            };
            cargaJuzgados = function () {
                var strDatos = "accion=distrito";
                  var urlOption = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
                  var asyncOption = true;
                  var hiddencveAdcripcion = $("#hiddencveAdcripcion").val();
                  var hiddencveJuzgadoOrigenArbol = $("#hiddencveJuzgadoOrigenArbol").val();


                  if ($("#hiddenIdActuacion").val() != "") {
                     if (hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol) {
                        if (OrigenSegundaInstancia == "") {
                           strDatos = "accion=getJuzgadoActuacion&idActuacion=" + $("#hiddenIdActuacion").val();
                        } else {
                        }
                     } else {

                        if (hiddencveJuzgadoOrigenArbol != 0) {
                           strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
                        } else {
                           strDatos = "accion=getJuzgadoActuacion&idActuacion=" + $("#hiddenIdActuacion").val();
                        }
                     }
                  }
                $.ajax({
                    type: "POST",
                    url: urlOption,
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
                                $("#cmbTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].cveTipojuzgado));
                                if (json.data[i].cveInstancia == instancia) {
                                   if (juzgadoSesion == json.data[i].cveJuzgado) {
                            $("#cmbJuzgado").val(juzgadoSesion);
                        }
                                }else{
                                    $("#inputGuardar").parent().hide();
                                    $("#inputBuscar").parent().hide();
                                    $("#inputConsultar").parent().hide();
                                    $("#inputBorrar").parent().hide();
                                    $("#inputPDF").parent().hide();
                                    $("#inputLimpiar").parent().hide();
                                    $("#inputLimpiar2").parent().hide();
                                }
                            }
                            filtrarTipoCarpeta();
             
                        }
                        $('#divCmbJuzgados').hide();
                        cargarCombos();
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            };
            visorDocuemntos = function () {
                $.ajax({
                    type: 'POST',
                    url: 'visorpdf/index.php',
                    data: {idCarpetaJudicial: "", idActuacion: $('#hiddenIdActuacion').val(), cveTipoDocumento: 26}, //malo
                    //                data: {idCarpetaJudicial: 0, idActuacion: 14525, cveTipoDocumento: 13}, //bueno
                    async: false,
                    dataType: 'html',
                    beforeSend: function () {
                        $('#visor').html('<h3>Consultando informacion ... espere.</h3>');
                    },
                    success: function (data) {
                        //                    console.log(data)
                        $('#visor').html(data);
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. ' + otroobj + '</h3>');
                        console.log('\nOBJ: ' + objeto + '\nQ: ' + quepaso + '\nO:' + otroobj)
                    }
                });
            };
            enviar = function () {
                //        alert("enviar datos..."+$("#hiddenIdActuacion").val());
                var strDatos = "accion=generarJson";
                strDatos += "&cveTipo=2"; //2 = actuacion
                strDatos += "&cveTipoDocumento=26"; //tipo documento
                strDatos += "&idActuacion=" + $("#hiddenIdActuacion").val();

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount > 0) {
                            generaPDF(datos);
                        } else {
                        }


                    },
                    error: function (objeto, quepaso, otroobj) {
                        //alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });

            };
            llenareditor = function (value) {
                try {
                    editor.ready(function () {
                        setTimeout(function () {
                            editor.setContent(value, false);
                        }, 500);
                        ;
                    });
                } catch (e) {
                    alert(e);
                }
            };
            (function (a) {
                a.fn.validaCampo = function (b) {
                    a(this).on({keypress: function (a) {
                            var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                            (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                        }})
                }
            })(jQuery);
            cargaInstancia = function () {
               $.ajax({
                  type: "POST",
                  url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                  async: false,
                  dataType: "json",
                  data: {
                     accion: "getInstanciaJuzgado"
                  },
                  beforeSend: function (datos) {
                  },
                  success: function (datos) {
                     if (datos.totalCount > 0) {
                        instancia = datos.resultados[0].cveInstancia;
                     }
                  },
                  error: function (objeto, quepaso, otroobj) {

                  }
               });
            };
            $(function () {
               cargarJuzgadores();
               cargaInstancia();
                if (editor != undefined) {
                    editor.destroy();
                }
                editor = UE.getEditor('txtObservaciones');
                editor.ready(function () {
                    editor.setContent();
                });
                cargaTipoCarpeta();
                //cargaJuzgados();
                
//                cargarCombos();
                obtenerPermisos();
                fechaBaseDatos({
                    hiddenFechaHoy: "fecha"
                });
                $('#fechaConsultar').val(fechaHoy());
                $("#fechaFormulacion").val(fechaHoy());
                $('#fechaConsultarEnd').val(fechaHoy());
                $('#fechaConsultar').datepicker().on('changeDate', function (e) {
                    $(this).datepicker('hide');
                    var fechaValidada;
                    fechaValidada = validarFecha($('#fechaConsultar').val());
                    $('#fechaConsultar').val(fechaValidada);
                });
                $('#fechaFormulacion').datepicker().on('changeDate', function (e) {
                    $(this).datepicker('hide');
                    var fechaValidada;
                    fechaValidada = validarFecha($('#fechaFormulacion').val());
                    $('#fechaFormulacion').val(fechaValidada);
                });
                $('#fechaConsultarEnd').datepicker().on('changeDate', function (e) {
                    $(this).datepicker('hide');
                    var fechaValidada;
                    fechaValidada = validarFecha($('#fechaConsultarEnd').val());
                    $('#fechaConsultarEnd').val(fechaValidada);
                });
                $("#txtNumero").validaCampo('0123456789');
                $("#txtAnio").validaCampo('0123456789');
                $("#txtfechaInicial").datepicker(
                        {dateFormat: 'dd/mm/yy'}
                );
                $("#txtfechaFinal").datepicker(
                        {dateFormat: 'dd/mm/yy'}
                );
                $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate', function (e) {
                    $(this).datepicker('hide');
                });
            });
        </script> 
        <?php
    } else {
        ?>
        <div class="form-group">
            <div id="divAlertInfo" class="alert alert-info alert-dismissable">
                <strong>Informaci&oacute;n!</strong><?php echo $error; ?>
            </div>
        </div>
        <?php
    }
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>