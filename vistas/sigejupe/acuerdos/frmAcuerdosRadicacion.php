<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
if (!isset($_SESSION)) {
    @session_start();
}
$idActuacionArbol = "";
$idCarpetaJudicialArbol = "";
$cveTipoCarpetaArbol = "";
$procedencia = 0;
if (isset($_POST['idActuacion'])) {
    $idActuacionArbol = @$_POST['idActuacion'];
}
if (isset($_POST['idReferencia'])) {
    $idCarpetaJudicialArbol = @$_POST['idReferencia'];
}
if (isset($_POST['cveTipoCarpeta'])) {
    $cveTipoCarpetaArbol = @$_POST['cveTipoCarpeta'];
}
if (isset($_POST['idActuacionPadre'])) {
    $idActuacionPadre = @$_POST['idActuacionPadre'];
}
//$idActuacionArbol = 93448; 
//$idCarpetaJudicialArbol = 7;
//$cveTipoCarpetaArbol = 2;
//$idActuacionPadre = "";//15870;

if ($idCarpetaJudicialArbol == "" && $idActuacionPadre == "" && $cveTipoCarpetaArbol == "" && $idActuacionArbol == "") {
    $procedencia = 0; // formulario general
} else if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") || ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "") || ($idActuacionPadre != 0 && $idActuacionPadre != "")) {
    $procedencia = 1; // viene de arbol
} else if ($idCarpetaJudicialArbol == "" && $idActuacionPadre == "" && $cveTipoCarpetaArbol == 0) {
    $procedencia = 1; // viene de arbol el formulario general
    $asignaValoresArbol = 1;
}

//echo "idActuacionArbol: <<" . $idActuacionArbol . ">><br>";
//echo "Carpeta: <<" . $idCarpetaJudicialArbol . ">><br>";
//echo "TipoCarpeta: <<" . $cveTipoCarpetaArbol . ">><br>";
//echo "Procedencia: " . $procedencia . "<br>";
//echo "idActuacionPadre: <<" . $idActuacionPadre . ">><br>";
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
<input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>" >
<input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
<input type="hidden" id="hiddenCveTipoCarpeta" value="<?php echo $cveTipoCarpetaArbol; ?>" >
<input type="hidden" id="hiddenidActuacionPadre" value="<?php echo $idActuacionPadre; ?>" >
<input type="hidden" id="hiddenasignaValoresArbol" value="<?php echo $asignaValoresArbol; ?>" >
<input type="hidden" id="hiddenIdActuacionPromocion" value="" >
<input type="hidden" id="hiddenCveJuzgadorAcuerdo" value="" >
<input type="hidden" id="hiddenCveJuzgado" value="" >
<input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >
<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title" id="h5titulo">                                                            
            Acuerdo de Radicaci&oacute;n
        </h5>
    </div>
    <div class="panel-body">
        <div id="divActuacionNOvalida" style="display: none">
        </div>
        <div id="divFormulario" class="form-horizontal" data-step="1" data-intro="Este m&oacute;dulo le permite registrar un nuevo Acuerdo de Radicaci&oacute;n, el cual puede ser modificado y/o eliminado." data-position='left'>
            <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar();" style="display: none">                                    
            <div class="form-group">                                                                
                <label class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'>Tribunal</label>
                <div class="col-md-9">
                    <div id="divCmbJuzgado" class="logobox"></div>
                    <select class="form-control" name="cmbJuzgado" id="cmbJuzgado" onchange="comboTipoCarpeta();cargaJuzgadores();cargaFuncionMagistrado()" >
                        <option value="0">Seleccione una opci&oacute;n</option>
                    </select>
                </div>                
            </div>

            <div class="form-group">                                                                
                <label class="control-label col-md-3 needed">Relacionado con</label>
                <div class="col-md-9">
                    <div id="divCmbRelaciones" class="logobox"></div>
                    <select class="form-control" name="cmbTipoCarpeta" id="cmbTipoCarpeta" onchange="changeLabel(this)">
                        <option value="0">Seleccione una opci&oacute;n</option>
                    </select>
                </div>                                
            </div>
            <div class="form-group">                                                                
                <label class="control-label col-md-3 needed" id="lblRelationName">No.</label>
                <div id="divSinRelacion" class="col-md-6">
                    <input type="text" id="txtNumero" class="form-inline buscarToca" id="txtNumero" placeholder="N&uacute;mero">/
                    <input type="text" class="form-inline buscarToca" id="txtAnio" id="txtAnio" maxlength="4" placeholder="A&ntilde;o" value="">
                </div>                        
                <div id="buscarTocaMsj" class="col-md-6"></div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                    <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para la Toca." data-position='top'>                        
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputBuscarToca" value="Buscar Toca" onclick="buscaToca();">                                    
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3"></label>
                <div class="col-md-9" id="divBuscaRemisionMsj"></div>
                <div id="divAdvertenciaBuscar" class="alert alert-warning alert-dismissable" style="display: none">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong id="strAdvertenciaBuscar"></strong> 
                </div>  

                <div id="divConsultaActuaciones" style="display: none;height: 175px; border-top: 1px solid rgb(208, 220, 203); width: 100%; overflow-x: hidden; overflow-y: scroll; " class="col-xs-8" >
                    <div id="divTableResultActuaciones" class="col-xs-8" style="width: 100%;">
                    </div>
                </div>
                <label class="control-label col-md-3"></label>
                <div class="col-md-9" id="divRemisionAcordadaMsj"></div>
            </div>
<!--            <div class="form-group">                                                                
                <label class="control-label col-md-3 needed">Magistrado</label>
                <div class="col-md-9">
                    <div id="divCmbJuzgador" class="logobox"></div>
                    <select class="form-control" name="cmbJuzgadores1" id="cmbJuzgadores1" >
                        <option value="0">Seleccione una opci&oacute;n</option>
                    </select>
                </div>                
            </div>-->
<label class="col-md-offset-3 col-md-3 needed">Magistrados</label><label class="col-md-offset-2 col-md-3 needed">Funcion</label>
                        <div class="form-group">                                                                
                            
                            <div class="col-md-offset-3 col-md-5">
                               <div id="divCmbJuzgador" class="logobox"></div>
                               <select class="form-control cmbMagistrado" name="cmbJuzgadores1" id="cmbJuzgadores1" >
                                  <option value="0">Seleccione una opci&oacute;n</option>
                               </select>
                            </div>     
                            <div class="col-md-4">
                               <div id="divCmbJuzgador" class="logobox"></div>
                               <select class="form-control cmbFuncion" name="cmbFuncionMagistrado1"  id="cmbFuncionMagistrado1" >
                                  <option value="0">Seleccione una opci&oacute;n</option>
                               </select>
                            </div>    
                
                         </div>
                        <div id="magistradoColegiada">
                            <div class="form-group">                                                                
                                
                                <div class="col-md-offset-3 col-md-5">
                                   <div id="divCmbJuzgador" class="logobox"></div>
                                   <select class="form-control cmbMagistrado" name="cmbJuzgadores2" id="cmbJuzgadores2" >
                                      <option value="0">Seleccione una opci&oacute;n</option>
                                   </select>
                                </div>     
                                <div class="col-md-4">
                                   <div id="divCmbJuzgador" class="logobox"></div>
                                   <select class="form-control cmbFuncion" name="cmbFuncionMagistrado2"  id="cmbFuncionMagistrado2" >
                                      <option value="0">Seleccione una opci&oacute;n</option>
                                   </select>
                                </div>    
                    
                             </div>
                            <div class="form-group">                                                                
                                
                                <div class="col-md-offset-3 col-md-5">
                                   <div id="divCmbJuzgador" class="logobox"></div>
                                   <select class="form-control cmbMagistrado" name="cmbJuzgadores3" id="cmbJuzgadores3" >
                                      <option value="0">Seleccione una opci&oacute;n</option>
                                   </select>
                                </div>     
                                <div class="col-md-4">
                                   <div id="divCmbJuzgador" class="logobox"></div>
                                   <select class="form-control cmbFuncion" name="cmbFuncionMagistrado3"  id="cmbFuncionMagistrado3" >
                                      <option value="0">Seleccione una opci&oacute;n</option>
                                   </select>
                                </div>    
                    
                             </div>
                         </div>
                    <br>
            <div class="form-group">
                <label class="control-label col-md-3 needed">Resoluci&oacute;n &nbsp;&nbsp;</label>
                <div class="col-md-9" >
                    <div class="typeahead__container">
                        <div class="typeahead__field">
                            <span class="typeahead__query">
                                <input class="js-typeahead-input"
                                       name="q"
                                       type="search"
                                       autofocus
                                       autocomplete="off" id="cmbResolucionAux" placeholder="Seleccione una opci&oacute;n">
                                <input type="hidden" id="cmbResolucion" value="0">    
                            </span>
                            <span class="typeahead__button">
                                <button type="submit">
                                    <span class="typeahead__search-icon"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">                                                                
                <label class="control-label col-md-3 needed">Notificaci&oacute;n</label>
                <div class="col-md-9">
                    <div id="divCmbNotificacion" class="logobox"></div>
                    <select class="form-control" name="cmbNotificacion" id="cmbNotificacion" >
                        <option value="0">Seleccione una opci&oacute;n</option>
                    </select>
                </div>                                
            </div>
            <div class="form-group">                                                                
                <label class="control-label col-md-3 needed">Estatus</label>
                <div class="col-md-9">
                    <div id="divCmbEstatus" class="logobox"></div>
                    <select class="form-control" name="cmbEstatus" id="cmbEstatus" >
                        <option value="0">Seleccione una opci&oacute;n</option>
                    </select>
                </div>                                
            </div>
            <div class="form-group">                                                                
                <label class="control-label col-md-3 needed">Estatus acuerdo radicaci&oacute;n</label>
                <div class="col-md-9">
                    <div id="divCmbEstatus" class="logobox"></div>
                    <select class="form-control" name="cmbEstatusRadicacion" id="cmbEstatusRadicacion" >
                        <option value="0">Seleccione una opci&oacute;n</option>
                    </select>
                </div>                                
            </div>
            <div id="divRangoFechas" style="display: none">
                <div class="form-group"> 
                    <label class="control-label col-md-3">Fecha Inicio:</label>
                    <div class="col-md-2">
                        <input type="text" id="txtfechaInicial" placeholder="FECHA INICIO" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
                    </div>
                </div>
                <div class="form-group"> 
                    <label class="control-label col-md-3">Fecha Fin:</label>
                    <div class="col-md-2">
                        <input type="text" id="txtfechaFinal" placeholder="FECHA FIN" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
                    </div>
                </div>    
            </div>
            <div id="divNotas" class="form-group">
                <label class="control-label col-md-3 needed">Contenido del documento</label>
                <div class="col-md-9">
                    <script id="Sintesis" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                </div>
            </div>
            <br>
            <br>
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
                <div class="col-md-offset-3 col-md-9">
                    <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar un acuerdo." data-position='top'>                        
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputGuardar" value="Guardar" onclick="buscarTipoCarpeta();" style="display: none">                                    
                    </div>
                    <div class="col-md-2 botonesAdaptar">                        
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputBuscar" value="Buscar" onclick="consultarAcuerdos();" style="display: none">                                    
                    </div>
                    <div class="col-md-2 botonesAdaptar" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>                        
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar('');">                                    
                    </div>
                    <div class="col-md-2 botonesAdaptar" data-step="5" data-intro="De clic para buscar un acuerdo." data-position='top'>                        
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="consultar();tutorial(7)" style="display: none">                                    
                    </div>
                    <div class="col-md-2 botonesAdaptar">                        
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputEliminar" value="Eliminar" onclick="eliminarOficios()" style="display: none">                                    
                    </div>
                    <div class="col-md-2 botonesAdaptar">                        
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" style="display: none">                                    
                    </div>
                    <div class="col-md-2 botonesAdaptar">                        
                        <button class="btn btn-primary btn-adaptar" id="inputDigitalizar" onclick="javascript:digitalizarAcuerdo();" style="display: none">Digitalizar</button>
                    </div>
                    <div class="col-md-2 botonesAdaptar">                        
                        <button class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" style="display: none">Visor</button>
                    </div>
                    <div class="col-md-2 botonesAdaptar">                        
                        <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="enviar();" style="display: none">Generar PDF</button>
                    </div>
                    <div id="divPeritos" class="col-md-2 botonesAdaptar">                        
                    </div>
                </div>
            </div>
        </div>
        <div id="divConsulta" style="display: none" class="col-xs-12">
            <div class="col-xs-12">
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivFormAcuerdo(1);
                            $('#cmbPaginacion').val(1)">                                                    
                </div>
                <div class="form-group col-xs-2" style="padding: 10px">
                    <label class="control-label" id="totalReg"></label>
                </div>
                <div id="divPaginador" class="form-group col-xs-2" >
                    <label class="control-label">Pagina:</label>
                    <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarAcuerdos();">
                        <option value="1">1</option>
                    </select>
                </div>
                <div id="divPaginador" class="form-group col-xs-4" >
                    <label class="control-label">Registros por p&aacute;gina:</label>
                    <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarAcuerdos();">
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
            <div id="divTableResult" class="col-xs-12">
            </div>
        </div>
    </div>
</div>
<!-- Modal visor -->
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
    var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
    var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
    var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
    var procedencia = <?php echo $procedencia; ?>;
    var apartado = 1; // captura
    var createRecord = 'N';
    var readRecord = 'N';
    var updateRecord = 'N';
    var deleteRecord = 'N';
    if (editor != undefined) {
        editor.destroy();
    } else {

    }
    var editor = null;
    digitalizarAcuerdo = function () {
        //idcarpeta
        //idactuacion
        //desc carpeta/actuacion
        //desc juzgado 
        //numero de la carpeta/actuacion
        //a�o de la carpeta/actuacion
        //cve documento
        //usuario
        var strl;
        strl = "0-" + $("#hiddenIdActuacion").val() + "-ACUERDOS DE RADICACION-<?php echo $_SESSION["desAdscripcion"]; ?>-" + $("#txtNumero").val() + "-" + $("#txtAnio").val() + "-1-<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
        strl += "-http://10.22.165.204/sigejupev2/fachadas/sigejupe/imagenes/ImagenesFacade.Class.php";
        strl += "-http://10.22.165.204/sigejupev2/vistas/digitalizacion";
        launchDigitalizador(strl);
    },
            visorDocuemntos = function () {
                $.ajax({
                    type: 'POST',
                    url: 'visorpdf/index.php',
                    data: {idCarpetaJudicial: "", idActuacion: $('#hiddenIdActuacion').val(), cveTipoDocumento: 1}, //malo
//                data: {idCarpetaJudicial: 0, idActuacion: 14525, cveTipoDocumento: 13}, //bueno
                    async: false,
                    dataType: 'html',
                    beforeSend: function () {
                        $('#visor').html('<h3>Consultando informaci�n ... espere.</h3>');
                    },
                    success: function (data) {
//                    console.log(data)
                        $('#visor').html(data);
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. ' + otroobj + '</h3>');
//                        console.log('\nOBJ: ' + objeto + '\nQ: ' + quepaso + '\nO:' + otroobj)
                    }
                });
            };

    enviar = function () {
        var strDatos = "accion=generarJson";
        strDatos += "&cveTipo=2"; //2 = actuacion
        strDatos += "&cveTipoDocumento=1"; //tipo documento
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
//    generaPDF = function (json) {
//        var strDatos = "json=" + json;
//        $.ajax({
//            type: "POST",
//            url: "../fachadas/sigejupe/firmapdf/FirmaPdfFacade.Class.php",
//            data: strDatos,
//            async: true,
//            dataType: "html",
//            beforeSend: function (objeto) {
//            },
//            success: function (datos) {
//                console.log(datos);
//                var json = "";
//                json = eval("(" + datos + ")"); //Parsear JSON
//                if (json.type == "ok") {
//                    alert("satisfactorio");
//                } else {
//                    alert(json.mensaje);
//                }
//            },
//            error: function (objeto, quepaso, otroobj) {
//                //alert("Error en la peticion:\n\n" + quepaso);
//                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
//                $("#divAlertDager").show("slide");
//                setTimeAlert("divAlertDager");
//            }
//        });
//    };
    descripcionResolucion = function (id) {
        var strDatos = "accion=consultar";
        strDatos += "&cveTipoResolucion=" + id;
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposresoluciones/TiposresolucionesFacade.Class.php",
            data: strDatos,
            async: true,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    $("#cmbResolucionAux").val(json.data[0].desTipoResolucion);
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
    valorJuzgado = function (cveJuzgado) {
        var strDatos = "";
        strDatos = "accion=consultar";
        strDatos += "&cveJuzgado=" + cveJuzgado;
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            data: strDatos,
            async: false,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    $("#cmbJuzgado").val(json.data[0].cveJuzgado + "/" + json.data[0].cveTipojuzgado);
                    comboTipoCarpeta();
                } else {
                    $("#divAlertDager").html("Error al obtener tipo de tribunal");
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
    /**FUNCION PARA GUARDAR ACUERDO DE RADICACION**/
    buscarTipoCarpeta = function () {
        var cveJuzgadoAux = $("#cmbJuzgado").val().split("/");
        var cveJuzgado = cveJuzgadoAux[0];
        var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
        var numeroToca = $("#txtNumero").val();
        var anioToca = $("#txtAnio").val();
//        var idJuzgadorAcuerdo = $("#cmbJuzgadores1").val();
        var listaMagistrados = [];
            if($("#cmbJuzgadores1").val() != 0 && $("#cmbFuncionMagistrado1").val() != 0){
            var objMagistrados = new Object();
            objMagistrados.idJuzgador = ($("#cmbJuzgadores1").val());
            objMagistrados.idJuzgadorActuacion = $("#cmbJuzgadores1").attr("idjuzgadoractuacion");
            objMagistrados.cveFuncionMagistrado = ($("#cmbFuncionMagistrado1").val());
            listaMagistrados.push(objMagistrados);
        }
        if($("#cmbJuzgadores2").val() != 0 && $("#cmbFuncionMagistrado2").val() != 0){
             var objMagistrados = new Object();
             objMagistrados.idJuzgador = ($("#cmbJuzgadores2").val());
             objMagistrados.idJuzgadorActuacion = $("#cmbJuzgadores2").attr("idjuzgadoractuacion");
            objMagistrados.cveFuncionMagistrado = ($("#cmbFuncionMagistrado2").val());
            listaMagistrados.push(objMagistrados);
            
        }
        if($("#cmbJuzgadores3").val() != 0 && $("#cmbFuncionMagistrado3").val() != 0){
             var objMagistrados = new Object();
              objMagistrados.idJuzgador = ($("#cmbJuzgadores3").val());
              objMagistrados.idJuzgadorActuacion = $("#cmbJuzgadores3").attr("idjuzgadoractuacion");
            objMagistrados.cveFuncionMagistrado = ($("#cmbFuncionMagistrado3").val());
            listaMagistrados.push(objMagistrados);
        }
        var cveTipoResolucion = $("#cmbResolucion").val();
        var cveTipoNotificacion = $("#cmbNotificacion").val();
        var cveEstatus = $("#cmbEstatus").val();
        var cveTipoEstatusRadicacion = $("#cmbEstatusRadicacion").val();
        var observaciones = editor.getContent();           // este valor se va para el campo de observaciones
        var sintesis = $("#cmbResolucionAux").val();
        observaciones = observaciones.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');
        var strDatosCarpeta = "";
        var error = 0;
        var mensaje = "";
        var cveAccion = 38; // insercion acuerdo BITACORA
        if (cveTipoCarpeta == 0) {
            error = 1;
            mensaje += "   - Relaci&oacute;n con";
        }
        if (numeroToca == "" && cveTipoCarpeta != 9) {
            error = 2;
            mensaje += "   - N&uacute;mero";
        }
        if (anioToca == "" && cveTipoCarpeta != 9) {
            error = 3;
            mensaje += "   - A&ntilde;o";
        }
        
         
        var idActuacionRemision = "";
        if ($("#hiddenIdActuacionPromocion").val() != "") {
            idActuacionRemision += $("#hiddenIdActuacionPromocion").val() + ",";
        }
        $('#radioRemision:checked').each(
                function () {
                    idActuacionRemision += $(this).val() + ",";
                }
        );
        idActuacionRemision = idActuacionRemision.substring(0, (idActuacionRemision.length - 1));
//        if (idActuacionRemision == "") {
//            error = 10;
//            mensaje += "   - Remisi&oacute;n";
//        }
        
        if (cveTipoResolucion == 0 && cveTipoCarpeta != 9) {
            error = 5;
            mensaje += "   - Resoluci&oacute;n";
        }
        if (cveTipoNotificacion == 0 && cveTipoCarpeta != 9) {
            error = 6;
            mensaje += "   - Notificaci&oacute;n";
        }
        if (cveEstatus == 0 && cveTipoCarpeta != 9) {
            error = 7;
            mensaje += "   - Estatus";
        }
        if (cveTipoEstatusRadicacion == 0) {
            error = 8;
            mensaje += "   - Estatus de Radicaci&oacute;n";
        }
        if (observaciones == "" && cveTipoCarpeta != 9) {
            error = 9;
            mensaje += "   - Contenido del documento";
        }
        if($("#cmbEstatus").val() == 3){
            if($("#cmbJuzgado :selected").attr("data-tipoJuzgado") == 8){
                if(listaMagistrados.length < 1){
                    error = 10;
                   mensaje += "   - Magistrados y funciones";
                }
            }else{
                if(listaMagistrados.length < 3){
                    error = 10;
                   mensaje += "   - Magistrados y funciones";
                }
            }
        }
        if (error == 0) {
            strDatosCarpeta = "accion=consultarCarpetaExhortoAmparo";
            strDatosCarpeta += "&cveTipoCarpeta=" + cveTipoCarpeta;
            strDatosCarpeta += "&numero=" + numeroToca;
            strDatosCarpeta += "&anio=" + anioToca;
            strDatosCarpeta += "&cveJuzgado=" + cveJuzgado;
            strDatosCarpeta += "&activo=S";
            if ($("#hiddenIdActuacion").val() != "" || $("#hiddenIdActuacion").val() != 0) {
                cveAccion = 39; //modificacion acuerdo BITACORA
            }
            if (cveTipoCarpeta != 9) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    data: strDatosCarpeta,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
//                        console.log(datos);
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON
                        if (json.totalCount > 0) {
                            var idReferenciaAux = 0;
                            idReferenciaAux = json.data[0].idCarpetaJudicial;
                            var jsonDatos = {
                                accion: "guardarAcuerdoRadicacion",
                                idActuacion: $("#hiddenIdActuacion").val(),
                                numero: numeroToca,
                                anio: anioToca,
                                cveTipoResolucion: cveTipoResolucion,
                                cveTipoNotificacion: cveTipoNotificacion,
                                observaciones: observaciones,
                                sintesis: sintesis,
                                cveTipoActuacion: 33,
                                cveAccion: cveAccion,
                                cveJuzgado: cveJuzgado,
                                listaMagistrados: JSON.stringify(listaMagistrados),
                                cveUsuario: cveUsuarioSesion,
                                cveEstatus: cveEstatus,
                                cveTipoEstatusRadicacion: cveTipoEstatusRadicacion,
                                idReferencia: idReferenciaAux,
                                cveTipoCarpeta: cveTipoCarpeta,
                                idActuacionAntecede: idActuacionRemision,
                                activo: "S"
                            };
                            guardarAcuerdoRadicacion(jsonDatos, cveJuzgado);
                        } else {
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
            }
        } else {
            $("#divAdvertencia").show();
            $("#strAdvertencia").html("&#161;Informaci&oacute;n! seleccione: " + mensaje);
            setTimeAlert("divAdvertencia");
        }

    };
    /**GUARDA EL ACUERDO DE RADICACION**/
    guardarAcuerdoRadicacion = function (strDatos, tipoJuzgado) {
        console.log(strDatos);
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
            data: strDatos,
            async: true,
            dataType: "json",
            beforeSend: function (objeto) {
//                ToggleLoading(1);
            },
            success: function (datos) {
                console.log(datos);
                var json = "";
                json = datos;
//                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    //alert(json.text);
                    if (json.data[0].observaciones != "publicado") {
                        $("#divHideForm").hide();
                        $("#divAlertSucces").html("Correcto!: " + json.text.toLowerCase());
                        $("#divAlertSucces").show("slide");
                        setTimeAlert("divAlertSucces");
                        $("#hiddenIdActuacion").val(json.data[0].idActuacion);
                        //$("#hiddenIdCarpetaJudicial").val(json.data[0].idCarpetaJudicial);
                        muestraEstatus(json.data[0].idActuacion);
                        $("#inputPDF").show();
                        $("#inputVisor").show();
                    } else {
//                        alert("entro a publicado");
                        $("#divHideForm").hide();
                        $("#divAlertDager").html("Actuacion publicada, no puede ser modificada");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    setTimeout(function () {
                        $("#cmbTipoCarpeta").attr("disabled", true);
                        $("#txtNumero").attr("disabled", true);
                        $("#txtAnio").attr("disabled", true);
                        // alert("muestra datos actuacion..");
                    }, 1000);

                    if ($("#hiddenasignaValoresArbol").val() == "1") {
                        $("#txtNumeroTree").val(json.data[0].numero);
                        $("#txtAnioTree").val(json.data[0].anio);
                        $("#cmbTipoCarpetaTree").val(json.data[0].cveTipoCarpeta);
                        $("#cmbJuzgadoArbol").val(json.data[0].cveJuzgado);
//                        alert("asigna valores...");
                    }
                    if (procedencia == 1) {
                        getTree();
                    }
                    consutaIdAcuerdo(json.data[0].idActuacion, "", tipoJuzgado);
                    //obtenerContador();
                } else {
                    //alert(json.text);
                    $("#divHideForm").hide();
                    $("#divAlertDager").html(json.text);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
                $('#barCarga').html("");

            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });

    };

    consultar = function () {
        descripcionResolucion(0);
        $("#cmbResolucionAux").val('');
        $("#cmbResolucion").val(0);
        $("#buscarTocaMsj").empty();
        $("#divRemisionAcordadaMsj").empty();
        $("#divBuscaRemisionMsj").empty();
        $("#divRangoFechas").show();
        $("#inputRegresar").show();
        $("#inputBuscar").show();
        $("#divNotas").hide();
        $("#inputBuscarToca").hide();
        $("#inputGuardar").hide();
        $("#inputConsultar").hide();
        $("#inputEliminar").hide();
        $("#inputImprimir").hide();
        $("#divConsultaActuaciones").hide();
        $("#inputVisor").hide();
        $("#inputPDF").hide();
        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Acuerdo de Radicaci&oacute;n</span> / Consulta de Acuerdos");
        apartado = 2; // consulta
    };

    regresar = function (bndSelecciono) {
        if (bndSelecciono != 1) {
            descripcionResolucion(38);
            $("#cmbResolucion").val(38);
        }
        $("#divRangoFechas").hide();
        $("#inputRegresar").hide();
        $("#inputBuscar").hide();
        $("#divNotas").show();
        if (procedencia == 1) {
            $("#inputConsultar").hide();
        } else {
            $("#inputConsultar").show();
        }
        $("#cmbPaginacion").val(1);
        if (bndSelecciono == 1) {
            setTimeout(function () {
                $("#cmbTipoCarpeta").attr("disabled", true);
                $("#txtNumero").attr("disabled", true);
                $("#txtAnio").attr("disabled", true);
                $("#cmbJuzgado").attr("disabled", true);
                $("#inputBuscarToca").attr("disabled", true);
                // alert("muestra datos actuacion..");
            }, 1000);
        }

        if (String(createRecord) === "S") {
            $("#inputGuardar").show();
        }
        if (deleteRecord == "S") {
            $("#inputEliminar").show();
        }
        $("#inputBuscarToca").show();
//        $("#inputEliminar").show();
        //$("#inputGuardar").show();
        //$("#inputImprimir").show();
        $("#h5titulo").html("<span>Acuerdo de Radicaci&oacute;n</span>");
        apartado = 1;
    };

    getPaginas = function (pag, cantReg) {
        var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
        var cveJuzgado = $("#cmbJuzgado").val().split("/");
        if (cveTipoCarpeta == 9) {
            cveTipoCarpeta = 0;
        }
        var strDatos = "accion=getPaginasAcuerdosRadicacion";
        strDatos += "&numero=" + $("#txtNumero").val();
        strDatos += "&anio=" + $("#txtAnio").val();
        strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
        //strDatos += "&cveTipoResolucion=" + $("#cmbResolucion").val();
        strDatos += "&cveTipoNotificacion=" + $("#cmbNotificacion").val();
        if ($("#cmbEstatus").val() != 0) {
            strDatos += "&cveEstatus=" + $("#cmbEstatus").val();
        }
        if ($("#cmbEstatusRadicacion").val() != 0) {
            strDatos += "&cveTipoEstatusRadicacion=" + $("#cmbEstatusRadicacion").val();
        }
//        if ($("#txtfechaInicial").val() != "") {
//            strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
//        }
//        if ($("#txtfechaFinal").val() != "") {
//            strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
//        }
        if ($("#txtNumero").val() == "" && $("#txtAnio").val() == "" && cveTipoCarpeta == 0 && $("#cmbResolucion").val() == 0 && $("#cmbNotificacion").val() == 0 
                && $("#cmbEstatus").val() == 0 && $("#cmbEstatusRadicacion").val() == 0) {
            strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
            strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
        }
        strDatos += "&cveTipoActuacion=33";// el 2 es para las actuaciones acuerdo de radicacion
        strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
        strDatos += "&activo=S";
        strDatos += "&cveJuzgado=" + cveJuzgado[0];// se agrega juzgado
//        if ($("#cmbJuzgadores1").val() != 0) {
//            strDatos += "&idJuzgadorAcuerdo=" + $("#cmbJuzgadores1").val();
//        }
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
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
                    //$('#cmbPaginacion').find('option').remove().end().append('<option value="0">Seleccione pagina</option>').val('0');
                    $('#cmbPaginacion').find('option').remove().end();
                    for (var i = 0; i < (parseInt(json.total)); i++) {
                        $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                    }
                    $("#cmbPaginacion").val(pag);
                    $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                } else {
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


    };
    consultarAcuerdos = function () {
        var pag = $("#cmbPaginacion").val();
        var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
        var cantReg = $("#cmbNumReg").val();
        var cveJuzgado = $("#cmbJuzgado").val().split("/");
        var indice = $("#cmbPaginacion").val();
        indice = (indice - 1) * $("#cmbNumReg").val();
        var error = 0;
        if (cveTipoCarpeta == 9) {
            cveTipoCarpeta = 0;
        }
        if (cveJuzgado == 0) {
            error = 1;
        }
        var strDatos = "accion=consultarAcuerdosRadicacion";
        strDatos += "&numero=" + $("#txtNumero").val();
        strDatos += "&anio=" + $("#txtAnio").val();
        strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
//        strDatos += "&cveTipoResolucion=" + $("#cmbResolucion").val();
        strDatos += "&cveTipoNotificacion=" + $("#cmbNotificacion").val();
        if ($("#cmbEstatus").val() != 0) {
            strDatos += "&cveEstatus=" + $("#cmbEstatus").val();
        }
        if ($("#cmbEstatusRadicacion").val() != 0) {
            strDatos += "&cveTipoEstatusRadicacion=" + $("#cmbEstatusRadicacion").val();
        }
//        if ($("#txtfechaInicial").val() != "") {
//            strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
//        }
//        if ($("#txtfechaFinal").val() != "") {
//            strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
//        }
        if ($("#txtNumero").val() == "" && $("#txtAnio").val() == "" && cveTipoCarpeta == 0 && $("#cmbResolucion").val() == 0 && $("#cmbNotificacion").val() == 0 
                && $("#cmbEstatus").val() == 0 && $("#cmbEstatusRadicacion").val() == 0) {
            strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
            strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
        }
        strDatos += "&cveJuzgado=" + cveJuzgado[0];
        strDatos += "&pag=" + pag;
        strDatos += "&cveTipoActuacion=33";// el 2 es para las actuaciones acuerdo
        strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
        strDatos += "&activo=S";
//        if ($("#cmbJuzgadores1").val() != 0) {
//            strDatos += "&idJuzgadorAcuerdo=" + $("#cmbJuzgadores1").val();
//        }
        if (error == 0) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Tipo</th>";
                        table += "<th>Resoluci&oacute;n</th>";
                        table += "<th>Notificaci&oacute;n</th>";
                        table += "<th>Estatus</th>";
                        table += "<th>Estatus Radicaci&oacute;n</th>";
                        table += "<th>Fecha Registro</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        for (var i = 0; i < json.totalCount; i++) {
                            table += "<tr onclick=\"consutaIdAcuerdo('" + json.data[i].idActuacion + "','" + json.data[i].descTipoCarpeta + "','" + cveJuzgado[1] + "')\">";
                            table += "<td  > " + (i + 1 + indice) + "</td>";
                            if (json.data[i].cveTipoCarpeta != "") {
                                table += "<td  >" + json.data[i].descTipoCarpeta + " - " + json.data[i].numero + "/" + json.data[i].anio + "</td>";
                            } else {
                                table += "<td onclick=\"consutaIdOficio('" + json.data[i].idActuacion + "','\"SIN RELACION\"')\" > SIN RELACION </td>";
                            }
                            table += "<td >" + json.data[i].descTipoResolucion + "</td>";
                            if(json.data[i].cveTipoNotificacion==2){
                                var descripcionNotificacion = "NOTIFICACION POR ESTRADOS";
                            } else{
                                var descripcionNotificacion = json.data[i].descTipoNotificacion;
                            }
                            table += "<td >" + descripcionNotificacion + "</td>";
                            table += "<td >" + json.data[i].descEstatus + "</td>";
                            table += "<td >" + json.data[i].desTipoEstatusRadicacion + "</td>";
                            table += "<td >" + json.data[i].fechaRegistro + "</td>";
                            table += "</tr> ";
                        }
                        table += "</tbody>";
                        table += "</table>";
                        $("#divHideForm").hide();
                        $("#divConsulta").show();
                        $("#divTableResult").html(table);
                        $("#tblResultadosGrid").DataTable(
                                {
                                    paging: false
                                }
                        );
                        getPaginas(json.pagina, cantReg);
                        changeDivFormAcuerdo(2);
                        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Acuerdo de Radicaci&oacute;n</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta de Acuerdos de Radicaci&oacute;n</span> / Resultados");
                    } else {
                        $("#divAlertInfo").html('' + json.text.toLowerCase());
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        } else {
            $("#divAlertWarning").html('&#161;Seleccione un tribunal!');
            $("#divAlertWarning").show("slide");
            setTimeAlert("divAlertWarning");
        }
        //**************************** consulta de oficios *************************************
    };

    regresar2 = function () {
        changeDivFormAcuerdo(1);
        regresar();
    };

    regresarConsultar = function () {
        changeDivFormAcuerdo(1);
        $("#cmbPaginacion").val(1);
        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Acuerdo de Radicaci&oacute;n</span> / <span>Consulta de Acuerdos</span>");
    }

    llenareditor = function (value) {
        try {
            editor.ready(function () {
                setTimeout(function () {
                    editor.setContent(value, false);
                }, 500);
                ;
            });
        } catch (e) {
        }
    };

    changeDivFormAcuerdo = function (opc) {
        if (opc === 1) {
            $("#divFormulario").show("slide");
            $("#divConsulta").hide("fade");
        } else if (opc === 2) {
            $("#divFormulario").hide("fade");
            $("#divConsulta").show("slide");
        }
    };
    buscarRemision = function (busqueda) {
        var pag = 1;//$("#cmbPaginacion").val();
        var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
        var cantReg = 100;//$("#cmbNumReg").val();
        var cveJuzgado = $("#cmbJuzgado").val();
        var error = 0;
        var mensaje = "Seleccione: ";
        var remisionAcordada = false;
        var sinEstatus = false;
        if (cveTipoCarpeta == 9) {
            cveTipoCarpeta = 0;
        } else {
            if ($("#cmbTipoCarpeta").val() == "0") {
                error = 1;
                mensaje += " tipo de carpeta \n";
            }
            if ($("#txtNumero").val() == "") {
                error = 2;
                mensaje += " numero \n";
            }
            if ($("#txtAnio").val() == "") {
                error = 3;
                mensaje += " a&ntilde;o ";
            }
        }
        if (error == 0) {
            var strDatos = "accion=consultarRemisiones";
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
            strDatos += "&cveTipoActuacion=32";// busca solo remisiones
            strDatos += "&activo=S";           //actuaciones activas
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&cveJuzgado=" + cveJuzgado;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
//                    console.log(datos);
                    var json = "";
                    var table = "";
                    var apelantes = "";
                    var ap = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        $("#divBuscaRemisionMsj").html("Remisiones encontradas: ");
                        table += "<table id='tblResultadosGridAct' width='80%' height='165' cellspacing='0' cellpadding='0' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered table-responsive' align='center' >";
                        table += "<thead align='center'>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Tipo</th>";
                        table += "<th>Sintesis</th>";
                        table += "<th>Apelante(s)</th>";
                        table += "<th>Estatus de la Remisi&oacute;n</th>";
                        table += "<th>Fecha de registro</th>";
                        table += "<th></th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        for (var i = 0; i < json.total; i++) {
                            if ($("#hiddenIdActuacionPromocion").val() != json.data[i].idActuacion) {
                                if (json.data[i].cveTipoActuacion == "32") {
                                    if (json.data[i].cveEstatus == "41") { //si la remision esta registrada
                                        table += "<tr  bgcolor='#EDF9E8' onmouseout='this.style.backgroundColor=\"#EDF9E8\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer; background-color: rgb(237, 249, 232);' >";//onclick=\"consutaIdActuacion('" + json.data[i].idActuacion + "','" + json.data[i].sintesis + "',' " + json.data[i].numActuacion + "/" + json.data[i].aniActuacion + "')\"
                                    } else {
                                        table += "<tr bgcolor='#FFF' onmouseout='this.style.backgroundColor=\"#FFF\"' onmouseover='this.style.backgroundColor=\"#EDF9E8\"'>";
                                    }
                                    table += "<td > " + (i + 1) + "</td>";
                                    if (json.data[i].cveTipoCarpeta != "") {
                                        table += "<td>" + json.data[i].descTipoCarpeta + " - " + json.data[i].numero + "/" + json.data[i].anio + "</td>";
                                    } else {
                                        table += "<td> SIN RELACION </td>";
                                    }
                                    table += "<td>" + json.data[i].numActuacion + "/" + json.data[i].aniActuacion + " - " + json.data[i].sintesis + "</td>";
                                    table += "<td><ul type='disc'>";
                                    ap = String(json.data[i].apelante);
                                    apelantes = ap.split(',');
                                    for (var j = 0; j < apelantes.length; j++) {
                                        table += "<li>" + apelantes[j] + "</li>";
                                    }
                                    table += "</ul></td>";
                                    if (json.data[i].descEstatus != "") {
                                        table += "<td>" + json.data[i].descEstatus + "</td>";
                                    } else {
                                        table += "<td>SIN ESTATUS</td>";
                                    }
                                    table += "<td>" + json.data[i].fechaRegistro + "</td>";
                                    if (json.data[i].cveEstatus == "42") {// si ya esta acordada poder eliminar
//                                        table += "<td >";
//                                        table += '<button class="btn btn-danger" onclick="eliminarAntecedeAcuerdo(' + json.data[i].idActuacion + ');" type="button">';
//                                        table += '<span class="glyphicon glyphicon-trash " aria-hidden="true"></span>';
//                                        table += '</button>';
//                                        table += '</td>';
                                        table += "<td > <input type='checkbox' name='radioRemision' id='radioRemision' value='" + json.data[i].idActuacion + "' > </td>";
                                        remisionAcordada = true;
                                    } else if (json.data[i].cveEstatus == "41") {
                                        table += "<td > <input type='checkbox' name='radioRemision' id='radioRemision' value='" + json.data[i].idActuacion + "' > </td>";
                                    } else {
                                        table += "<td > <input type='checkbox' name='radioRemision' id='radioRemision' value='" + json.data[i].idActuacion + "' ></td>";
                                        sinEstatus = true;
                                    }
                                    table += "</tr> ";
                                }
                            }
                        }
                        table += "</tbody>";
                        $("#divConsultaActuaciones").show();
                        $("#divTableResultActuaciones").show();
                        $("#divTableResultActuaciones").html(table);
                        if (remisionAcordada == true) {
                            if (busqueda == 1) {
                                $("#radioRemision").attr("checked", false);
                                $("#divRemisionAcordadaMsj").html("* Nota: Esta remisi&oacute;n ya esta acordada sobre esta toca, intente con otra.");
                            } else {
                                $("#divRemisionAcordadaMsj").html("* Nota: Esta remisi&oacute;n ya esta acordada sobre esta toca.");
                                $("#radioRemision").attr("checked", true);
                            }
                            $("#radioRemision").attr("disabled", true);
                            $("#radioRemision").attr("hidden", true);
                        } else {
                            if (sinEstatus == true) {
                                $("#divRemisionAcordadaMsj").html("* Nota: Esta remisi&oacute;n no tiene estatus y no podr&aacute; ser acordada, ponganse en contacto con el administrador.");
                                $("#radioRemision").attr("hidden", true);
                                $("#radioRemision").attr("checked", false);
                                $("#radioRemision").attr("disabled", true);
                            } else {
                                $("#radioRemision").attr("hidden", false);
                                $("#radioRemision").attr("checked", true);
                                $("#radioRemision").attr("disabled", true);
                            }
                        }

                    } else {
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                        $("#divConsultaActuaciones").hide();
                        $("#divTableResultActuaciones").html("");
                        $("#divBuscaRemisionMsj").html("No se encontraron remisiones.");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        } else {
            $("#buscaRemision").attr("checked", false);
        }

    };
    buscarApelantes = function (idCarpetaJudicial,consulta) {
        var error = 0;
        var mensaje = "No llego: ";
        if (idCarpetaJudicial == "") {
            error = 1;
            mensaje += " idCarpetaJudicial \n";
        }
        if (error == 0) {
            var strDatos = "accion=consultarApelantes";
            strDatos += "&idCarpetaJudicial=" + idCarpetaJudicial;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    console.log("buscarApelantes: "+datos);
                    var json = "";
                    var table = "";
                    var apelantes = "";
                    var ap = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        $("#divBuscaRemisionMsj").html("Apelantes encontrados: ");
                        table += "<table id='tblResultadosGridAct' width='80%' height='165' cellspacing='0' cellpadding='0' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered table-responsive' align='center' >";
                        table += "<thead align='center'>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Carpeta</th>";
                        table += "<th>Nombre</th>";
                        table += "<th>Domicilio</th>";
                        table += "<th>Correo electr\u00f3nico</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        for (var i = 0; i < json.totalCount; i++) {
                            table += "<tr  bgcolor='#EDF9E8' onmouseout='this.style.backgroundColor=\"#EDF9E8\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer; background-color: rgb(237, 249, 232);' >";
                            table += "<td > " + (i + 1) + "</td>";
                            if (json.carpeta[0].cveTipoCarpeta != "") {
                                table += "<td>" + json.carpeta[0].descTipoCarpeta + " - " + json.carpeta[0].numero + "/" + json.carpeta[0].anio + "</td>";
                            } else {
                                table += "<td> SIN RELACION </td>";
                            }
                            table += "<td>" + json.apelante[i].nombre + "</td>";
                            table += "<td>" + json.apelante[i].domicilio + "</td>";
                            table += "<td>" + json.apelante[i].email + "</td>";
                            table += "</tr> ";
                        }
                        table += "</tbody>";
                        $("#divConsultaActuaciones").show();
                        $("#divTableResultActuaciones").show();
                        $("#divTableResultActuaciones").html(table);
                        if(json.totAAoI>0){
                            if(!consulta){//si no es consulta, si mostrar el mensaje
                                $("#divRemisionAcordadaMsj").html("* La "+ json.carpeta[0].descTipoCarpeta + " - " + json.carpeta[0].numero + "/" + json.carpeta[0].anio+" ya tiene acuerdo(s) de radicaci\u00f3n ADMITIDO/INADMITIDO y no se puede generar otro m\u00e1s.");
                                //alert("La "+ json.carpeta[0].descTipoCarpeta + " - " + json.carpeta[0].numero + "/" + json.carpeta[0].anio+" \nya tiene acuerdo(s) de radicacion con ADMITE/INADMITE");
                                $("#inputGuardar").hide();
                                $("#inputEliminar").hide();
                            }
                        } else{
                            $("#inputGuardar").show();
                            $("#inputEliminar").show();
                        }
                    } else {
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                        $("#divConsultaActuaciones").hide();
                        $("#divTableResultActuaciones").html("");
                        $("#divBuscaRemisionMsj").html("No se encontraron apelantes.");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        } else {
            $("#buscaRemision").attr("checked", false);
        }

    };

    consutaIdAcuerdo = function (id, descTipoCarpeta, tipoJuzgado) {
        changeDivFormAcuerdo(1);
        var strDatos = "accion=seleccionarAcuerdoRadicacion"; //seleccionar
        strDatos += "&idActuacion=" + id;
        strDatos += "&cveTipoActuacion=33";
        strDatos += "&activo=S";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
            data: strDatos,
            async: true,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                console.log("55555555555555555555555555555555555" + datos);
                $("#buscarTocaMsj").empty();
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    //regresar();
                    $("#hiddenIdActuacion").val(json.data[0].idActuacion);
                    $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                    $("#hiddenCveTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                    $("#hiddenCveJuzgado").val(json.data[0].cveJuzgado);
                    $("#hiddenCveJuzgadorAcuerdo").val(json.data[0].idJuzgadorAcuerdo);
                    $("#txtNumero").val(json.data[0].numero);
                    $("#txtAnio").val(json.data[0].anio);
                    $("#cmbResolucion").val(json.data[0].cveTipoResolucion);
                    $("#cmbResolucionAux").val(json.data[0].desTipoResolucion);
                    descripcionResolucion(json.data[0].cveTipoResolucion);
                    $("#cmbNotificacion").val(json.data[0].cveTipoNotificacion);
                    $("#cmbEstatus").val(json.data[0].cveEstatus);
                    $("#cmbEstatusRadicacion").val(json.data[0].cveTipoEstatusRadicacion);
//                    $("#cmbJuzgadores1").val(json.data[0].idJuzgadorAcuerdo);
                    // seleccionar juzgado en combo
                    if (procedencia == 1) {
                        cargarCombos();
                        //comboJuzgados2();
                        //$("#cmbJuzgado").val(json.data[0].cveJuzgado);
                        //valorJuzgado(json.data[0].cveJuzgado);
                        //comboTipoCarpeta();
                        //setTimeout(function () {
                        //    $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                        //}, 1000);
                        //cargaJuzgadores();
//                        setTimeout(function () {
//                            $("#cmbJuzgadores1").val(json.data[0].idJuzgadorAcuerdo);
//                        }, 1000);

                    } else {
                        $("#cmbJuzgado").val(json.data[0].cveJuzgado);
//                        $("#cmbJuzgadores").val(json.data[0].idJuzgadorAcuerdo);
                    }
                    llenareditor(json.data[0].observaciones);
                    if (json.data[0].cveTipoCarpeta === "null" || json.data[0].cveTipoCarpeta === null) { // sin relacion
                        $("#cmbTipoCarpeta").val(9);
                        $("#lblRelationName").html("No. SIN RELACION");
                        $("#divSinRelacion").hide();
                    } else {
                        $("#divSinRelacion").show();
                        $("#lblRelationName").html("No." + descTipoCarpeta);
                        $("#buscarTocaMsj").append("<b>Acuerdo Radicado</b>");
                        $("#radioRemision").attr("checked", true);
                        $("#radioRemision").attr("disabled", true);
                        $("#cmbTipoCarpeta").attr("disabled", true);
                        $("#txtAnio").attr("disabled", true);
                        $("#txtNumero").attr("disabled", true);

                    }
                    muestraEstatus(json.data[0].idActuacion);
                    regresar(1);
                    // busca idActuacionPadre de actuacion
                    //buscarAntecede(json.data[0].idActuacion);
                    buscarApelantes(json.data[0].idReferencia,true);
                    buscarMagistrado(json.data[0].idActuacion);
                    if (deleteRecord == "S") {
                        $("#inputEliminar").show();
                    }
                    $("#inputPDF").show();
                    $("#inputVisor").show();
                } else {
                    $("#divAlertInfo").html('no existe informacion del acuerdo');
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

    loadFormActuacion2 = function (url, idCarpetaJudicial, idActuacion, idReferencia, cveTipoCarpeta) {
        $.post(url, {idCarpetaJudicial: idCarpetaJudicial, idActuacionAcuerdo: idActuacion, idReferenciaAcuerdo: idReferencia, cveTipoCarpetaAcuerdo: cveTipoCarpeta}, function (htmlexterno) {
            $("#divFrmTreeContenido").html(htmlexterno);
            var visibleFormulario = $("#collapseFormularios").is(":visible");
            if (visibleFormulario == false)
                $("#collapseFormularios").collapse('show');
        });
    };
    
    buscarMagistrado = function (idActuacion) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/resolucionapelacion/ResolucionApelacionFacade.Class.php",
                data: {
                    accion: "consultarMagistrado",
                    idActuacion: idActuacion
                },
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                },
                success: function (data) {
//                    if(data == 0){
//                        $("#lblJuzgador").text("No tiene magistrado")
//                    }else{
                    if(data.totalCount > 0){
                        
                      for(var i = 0; i <= (data.totalCount - 1);i++){
                            $("#cmbJuzgadores"+(i+1)).val(data.resultados[i].idJuzgador);
                            $("#cmbJuzgadores"+(i+1)).attr("idJuzgadorActuacion",data.resultados[i].idJuzgadorActuacion);
                            $("#cmbFuncionMagistrado"+(i+1)).val(data.resultados[i].cveFuncionJuzgador);
                        }
                    }else{
                        $("#cmbJuzgadores1").val(0);
                        $("#cmbJuzgadores2").val(0);
                        $("#cmbJuzgadores3").val(0);
                        $("#cmbFuncionMagistrado1").val(0);
                        $("#cmbFuncionMagistrado2").val(0);
                        $("#cmbFuncionMagistrado3").val(0);
                        $("#cmbJuzgadores1").attr("idJuzgadorActuacion","");
                        $("#cmbJuzgadores2").attr("idJuzgadorActuacion","");
                        $("#cmbJuzgadores3").attr("idJuzgadorActuacion","");
                    }
//                    }
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
        }

    muestraEstatus = function (idActuacion) {
        var strDatos = "accion=muestraEstatusActuacion";
        strDatos += "&idActuacion=" + idActuacion;
        strDatos += "&activo=S";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
            data: strDatos,
            async: true,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    $("#cmbEstatus").val(json.data[0].cveEstatus);
                    if (json.data[0].cveEstatus == 3) {// Acuerdo publicado
                        $("#cmbJuzgado").attr("disabled", true);
                        $("#cmbTipoCarpeta").attr("disabled", true);
                        $("#txtNumero").attr("disabled", true);
                        $("#txtAnio").attr("disabled", true);
                        $("#cmbJuzgadores1").attr("disabled", true);
                        $("#cmbJuzgadores2").attr("disabled", true);
                        $("#cmbJuzgadores3").attr("disabled", true);
                        $("#cmbFuncionMagistrado1").attr("disabled", true);
                        $("#cmbFuncionMagistrado2").attr("disabled", true);
                        $("#cmbFuncionMagistrado3").attr("disabled", true);
                        $("#cmbResolucion").attr("disabled", true);
                        $("#cmbResolucionAux").attr("disabled", true);
                        $("#cmbNotificacion").attr("disabled", true);
                        $("#cmbEstatus").attr("disabled", true);
                        $("#cmbEstatusRadicacion").attr("disabled", true);
                        $("#Sintesis").attr("disabled", true);
                        $("#buscarTocaMsj").empty();
                        $("#buscarTocaMsj").append("<b>Acuerdo publicado sobre esta toca.</b>");
                        $("#inputGuardar").hide();
                        $("#inputEliminar").hide();
                    } else if (json.data[0].cveEstatus == 8) { // promocion acordada
                        if (procedencia == 1) {
                            var table = "";
                            table += "<table id='tblResultadosGridAct' width='60%' height='165' cellspacing='0' cellpadding='0' border='1' style='border-collapse: collapse;' align='center' >";
                            table += "<tr bgcolor='#EA6E6E'>";
                            table += "<td>La remision, ya cuenta con un acuerdo !! </td>";
                            table += "</tr>";
                            table += "</table>";
                            $("#divFormulario").hide();
                            $("#divActuacionNOvalida").show();
                            $("#divActuacionNOvalida").html(table);
                        } else {
                            //alert("limpiar");
                        }
                    } else {
                        if (procedencia == 1) {
                            //$("#divBuscaPromocion").show();
                            //$("#buscaPromocion").attr("checked", true);
                            //$("#buscaPromocion").attr("disabled", true);

                            $("#cmbJuzgado").attr("disabled", true);
                            $("#cmbTipoCarpeta").attr("disabled", true);
                            $("#txtNumero").attr("disabled", true);
                            $("#txtAnio").attr("disabled", true);
                        } else {
                            $("#cmbTipoCarpeta").attr("disabled", true);
                            $("#txtNumero").attr("disabled", true);
                            $("#txtAnio").attr("disabled", true);
                            $("#inputBuscarToca").attr("disabled", true);
                            $("#cmbResolucion").attr("disabled", false);
                            $("#cmbNotificacion").attr("disabled", false);
                            $("#Sintesis").attr("disabled", false);
                            $("#cmbEstatus").attr("disabled", false);
                            $("#cmbEstatusRadicacion").attr("disabled", false);
                            $("#inputGuardar").show();
                            $("#inputEliminar").show();
                        }
                    }
                } else {
                    alert(json.text + " no tiene registrado el estuatus el acuerdo");
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    };

    buscarAntecede = function (idActuacionHija) {
        var strDatos = "accion=buscaActuacionPadre";
        strDatos += "&idActuacionHija=" + idActuacionHija;
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
            data: strDatos,
            async: true,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
//                console.log("soy la actuacion padre" + datos);
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {

                    buscarRemision();
                    //if(json.data[0].idActuacion==$("#radioRemision").val()){
                    //}
//                    $("#divBuscaPromocion").show();
//                    $("#promocionSel").html("No. Promocion: " + json.data[0].numActuacion + " / " + json.data[0].aniActuacion + " - " + json.data[0].observaciones);
//                    $("#buscaPromocion").attr("checked", true);
//                    $("#buscaPromocion").attr("disabled", true);
                } else {
//                    $("#buscaPromocion").attr("checked", false);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    }
    eliminarOficios = function () {
        var idActuacionRemision = "";
        if ($("#hiddenIdActuacionPromocion").val() != "") {
            idActuacionRemision += $("#hiddenIdActuacionPromocion").val() + ",";
        }
        $('#radioRemision:checked').each(
                function () {
                    idActuacionRemision += $(this).val() + ",";
                }
        );
        idActuacionRemision = idActuacionRemision.substring(0, (idActuacionRemision.length - 1));
        if ($("#hiddenIdActuacion").val() != "") {
            bootbox.dialog({
                message: "Advertencia!! <br><br> Esta seguro de eliminar el acuerdo de radicaci&oacute;n??",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            var strDatos = "accion=bajaAcuerdoRadicacion";
                            strDatos += "&idActuacion=" + $("#hiddenIdActuacion").val();
                            strDatos += "&cveAccion=40"; //eliminacion de acuerdos 
                            strDatos += "&activo=N";
                            strDatos += "&idActuacionAntecede=" + idActuacionRemision;
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                                data: strDatos,
                                async: true,
                                dataType: "html",
                                beforeSend: function (objeto) {
                                },
                                success: function (datos) {
//                                    console.log(datos);
                                    var json = "";
                                    json = eval("(" + datos + ")"); //Parsear JSON
                                    if (json.totalCount > 0) {
                                        /*if (json.data[0].observaciones == "publicado") {
                                            $("#divHideForm").hide();
                                            $("#divAlertDager").html("No se puede eliminar el acuerdo a sido publicado");
                                            $("#divAlertDager").show("slide");
                                            setTimeAlert("divAlertDager");
                                            if (procedencia == 1) {
                                                //getTree();
                                            }
                                        } else {*/
                                            $("#divHideForm").hide();
                                            $("#divAlertSucces").html("Eliminacion correcta");
                                            $("#divAlertSucces").show("slide");
                                            setTimeAlert("divAlertSucces");
                                            if (procedencia == 1) {
                                            //getTree();
                                        }
                                            //getTree();
                                        //}
                                        limpiar("");
                                    }/* else if(json.status=="existeResolucion") {
                                        alert(json.text);
                                     }*/ else {
                                        alert(json.text);
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                                    $("#divAlertDager").show("slide");
                                    setTimeAlert("divAlertDager");
                                }
                            });
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

        } else {
            $("#divAlertDager").html("No ha seleccionado un registro");
            $("#divAlertDager").show("slide");
            setTimeAlert("divAlertDager");
        }
    };

    eliminarAntecedeAcuerdo = function (idPadre) {
        if (idPadre != "") {
            bootbox.dialog({
                message: "Advertencia!! <br><br> Esta seguro de eliminar el acuerdo de la remisi&oacute;n seleccionada??",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            var strDatos = "accion=bajaAntecedeAcuerdoRadicacion";
                            strDatos += "&idActuacion=" + $("#hiddenIdActuacion").val();
                            strDatos += "&idActuacionPadre=" + idPadre;
                            strDatos += "&activo=N";
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                                data: strDatos,
                                async: true,
                                dataType: "html",
                                beforeSend: function (objeto) {
                                },
                                success: function (datos) {
                                    var json = "";
                                    json = eval("(" + datos + ")"); //Parsear JSON
                                    if (json.totalCount > 0) {
                                        //alert(json.text);
                                        if (json.data[0].observaciones == "publicado") {
                                            $("#divHideForm").hide();
                                            $("#divAlertDager").html("No se puede eliminar el acuerdo ha sido publicado");
                                            $("#divAlertDager").show("slide");
                                            setTimeAlert("divAlertDager");
                                            if (procedencia == 1) {
                                                getTree();
                                            }
                                        } else {
                                            $("#divHideForm").hide();
                                            $("#divAlertSucces").html("Eliminacion correcta");
                                            $("#divAlertSucces").show("slide");
                                            setTimeAlert("divAlertSucces");
                                            getTree();
                                            buscarRemision();
                                        }
                                        limpiar("");

                                    } else {
                                    }
                                },
                                error: function (objeto, quepaso, otroobj) {
                                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                                    $("#divAlertDager").show("slide");
                                    setTimeAlert("divAlertDager");
                                }
                            });
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

        } else {
            $("#divAlertDager").html("No ha seleccionado un registro");
            $("#divAlertDager").show("slide");
            setTimeAlert("divAlertDager");
        }
    };

    limpiar = function (muestra) {
        if (procedencia == 0) { //no proviene del arbol
//            alert("proviene del arbol");
            descripcionResolucion(38);
            $("#cmbResolucion").val(38);
            $("#cmbResolucionAux").attr("disabled", false);
            $("#txtNumero").val("");
            $("#txtAnio").val("");
            $("#cmbTipoCarpeta").val(0);
            $("#txtNumero").attr("disabled", false);
            $("#txtAnio").attr("disabled", false);
            $("#cmbJuzgadores1").attr("disabled", false);
            $("#cmbJuzgadores2").attr("disabled", false);
            $("#cmbJuzgadores3").attr("disabled", false);
            $("#cmbJuzgadores1").attr("idJuzgadorActuacion","");
            $("#cmbJuzgadores2").attr("idJuzgadorActuacion","");
            $("#cmbJuzgadores3").attr("idJuzgadorActuacion","");
            $("#cmbFuncionMagistrado1").attr("disabled", false);
            $("#cmbFuncionMagistrado2").attr("disabled", false);
            $("#cmbFuncionMagistrado3").attr("disabled", false);
            $(".cmbFuncion").each(function(){
                $(this).children().each(function(){
                        $(this).attr("disabled", false);
                });
            });
            $(".cmbMagistrado").each(function(){
                $(this).children().each(function(){
                        $(this).attr("disabled", false);
                });
            });
            
            $("#cmbJuzgado").attr("disabled", false);
            $("#cmbTipoCarpeta").attr("disabled", false);
            $("#inputBuscarToca").attr("disabled", false);
            //** valores ocultos **//
            $("#hiddenIdActuacion").val("");
            $("#hiddenCveTipoCarpeta").val("");
            $("#hiddenIdCarpetaJudicial").val("");
            $("#inputGuardar").show();
            if (apartado == 2) {
                $("#inputGuardar").hide();
            }
        }
        $("#cmbJuzgado").val(juzgadoSesion);
        //$("#cmbJuzgado").val(0);
        $("#cmbTipoCarpeta").val(0);
        $("#buscarTocaMsj").empty();
        $("#divRemisionAcordadaMsj").empty();
        $("#cmbJuzgadores1").val(0);
        $("#cmbJuzgadores2").val(0);
        $("#cmbJuzgadores3").val(0);
        $("#cmbFuncionMagistrado1").val(0)
        $("#cmbFuncionMagistrado2").val(0)
        $("#cmbFuncionMagistrado3").val(0)
        
        descripcionResolucion(38);
        $("#cmbResolucion").val(38);
        $("#cmbNotificacion").val(0);
        editor.setContent("", false);
        $("#lblRelationName").html("No.");
        $("#divSinRelacion").show();
        $("#txtfechaInicial").val($("#hiddenFechaActual").val());
        $("#txtfechaFinal").val($("#hiddenFechaActual").val());
        $("#cmbEstatus").val(0);
        $("#cmbEstatusRadicacion").val(0);
        $("#cmbResolucion").attr("disabled", false);
        $("#cmbResolucionAux").attr("disabled", false);
        $("#cmbNotificacion").attr("disabled", false);
        $("#Sintesis").attr("disabled", false);
        $("#cmbEstatus").attr("disabled", false);
        $("#cmbEstatusRadicacion").attr("disabled", false);
        $("#divConsultaActuaciones").hide();
        $("#divTableResultActuaciones").hide();
        $("#divTableResultActuaciones").html("");
        $("#hiddenIdActuacionPromocion").val("");
        $("#divBuscaRemisionMsj").html("");
        if (muestra == "") {
            $("#inputEliminar").hide();
        } else if (muestra == "consulta") {
            $("#inputGuardar").hide();
            $("#inputEliminar").hide();
        }
        $("#inputEliminar").hide();
        $("#inputPDF").hide();
        $("#inputVisor").hide();
        $(".cmbFuncion option").attr("disabled", false);
    };

    function obtenerPermisos() {
        var cveUsuarioSistema = cveUsuarioSesion;
        $.get("../archivos/" + cveUsuarioSistema + ".json",
                function (response) {
                    for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                        if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                            $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                if (vnombre.nomFormulario == "SECRETARIO DE TRIBUNAL DE ALZADA") {
                                    var hijos = vnombre.hijos;
                                    $.each(hijos, function (k2, nombreHijo) {
                                        if (nombreHijo.nomFormulario == 'ACUERDOS DE RADICACION') {
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
                    if (String(createRecord) === "S") {
                        $("#inputGuardar").show();
                    }
                    if (readRecord == "S") {
                        $("#inputConsultar").show();
                    }
                    if (updateRecord == "S") {
                        // $("#inputGuardar").show();
                    }
//                    if (deleteRecord == "S") {
//                        $("#inputEliminar").show();
//                    }


                });
    }
    //*********************************************************************************************************************
    (function (a) {
        a.fn.validaCampo = function (b) {
            a(this).on({keypress: function (a) {
                    var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                    (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                }})
        }
    })(jQuery);

    //*********************************************************************************************************************
    consutaIdActuacion = function (id, desTipoCarpeta, numPromocion) {
        $("#hiddenIdActuacionPromocion").val(id);
        $("#divConsultaActuaciones").hide();
        $("#divTableResultActuaciones").hide();
        $("#promocionSel").html("No. Promoci&oacute;n: " + numPromocion + " - " + desTipoCarpeta);
        if (procedencia == 1) {
            $("#inputConsultar").hide();
        }

    };
    verificarTipoActuacion = function (idActuacionPadre, idReferencia, cveTipoCarpeta) {
        var strDatos = "accion=seleccionar";
        strDatos += "&idActuacion=" + idActuacionPadre;// busca solo remisiones
        strDatos += "&activo=S";           //actuaciones activas
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
            data: strDatos,
            async: true,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var json = "";
                var table = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    if (json.data[0].cveTipoActuacion == "32") {
                        consutaIdActuacion(json.data[0].idActuacion, json.data[0].Sintesis, json.data[0].numActuacion + "/" + json.data[0].aniActuacion);
                        valorJuzgado(json.data[0].cveJuzgado);
                        $("#cmbJuzgado").val();
                        $("#txtNumero").val(json.data[0].numero);
                        $("#txtAnio").val(json.data[0].anio);
                        setTimeout(function () {
                            $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                        }, 1000);
                        muestraEstatus(idActuacionPadre);

                    } else {
                        table += "<table id='tblResultadosGridAct' width='60%' height='165' cellspacing='0' cellpadding='0' border='1' style='border-collapse: collapse;' align='center' >";
                        table += "<tr bgcolor='#EA6E6E'>";
                        table += "<td>La actuacion seleccionada para acordar debe ser remision</td>";
                        table += "</tr>";
                        table += "</table>";
                        $("#divFormulario").hide();
                        $("#divActuacionNOvalida").show();
                        $("#divActuacionNOvalida").html(table);
                    }
                } else {
                    $("#divAlertInfo").html('' + json.text);
                    $("#divAlertInfo").show("slide");
                    setTimeAlert("divAlertInfo");

                    $("#divConsultaActuaciones").hide();
                    $("#divTableResultActuaciones").html("");
                    $("#buscaPromocion").attr("checked", false);
                    $("#promocionSel").html("No se encontro la promocion intente mas tarde: ");
                }
            },
            error: function (objeto, quepaso, otroobj) {
                //                alert("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });

    };

    buscarToca = function (consulta, numeroToca, anioToca, cveTipoCarpeta, cveAdscripcion) {
        if (consulta) {
            $.ajax({
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                dataType: 'json',
                async: false,
                type: "POST",
                data: {
                    accion: "consultarCarpetaExhortoAmparo",
                    numero: numeroToca,
                    anio: anioToca,
                    cveTipoCarpeta: cveTipoCarpeta,
                    cveJuzgado: $("#cmbJuzgado").val()
                },
                beforeSend: function (xhr) {
                    console.log('numero=' + numeroToca + '&anio=' + anioToca + '&cveTipoCarpeta=' + cveTipoCarpeta + '&cveJuzgado=' + $("#cmbJuzgado").val());
                },
                success: function (datos) {
                    console.log(datos);
                    $("#divRemisionAcordadaMsj").empty();
                    $("#buscarTocaMsj").empty();
//                    console.log(datos);
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (index, element) {
                            if (element.cveEstatusCarpeta == 2) {
                                $("#buscarTocaMsj").append("<b>TOCA TERMINADA, intente con otra.</b>");
                                setTimeout(function () {
                                    limpiar();
                                }, 5000);
                            } else {
                                $("#buscarTocaMsj").append("<b>Encontrado</b>");
                                $("#hiddenIdCarpetaJudicial").val(element.idCarpetaJudicial);
                                setTimeout(function () {
                                    //buscarRemision(1);
                                    buscarApelantes(element.idCarpetaJudicial);
                                }, 1000);
                                return false;
                            }
                        });
                    } else {
                        $("#divBuscaRemisionMsj").empty();
                        $("#divConsultaActuaciones").hide();
                        $("#divTableResultActuaciones").html("");
                        $("#buscarTocaMsj").append("<b>Sin antecedentes</b>");
                        $("#hiddenIdCarpetaJudicial").val("");
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            });
        }
    };
    buscarTocaArbol = function (consulta,idCarpetaJudicial, cveTipoCarpeta) {
        if(procedencia == 1){//si viene del arbol
            $("#inputConsultar").hide();
        }
        if (consulta) {
            $.ajax({
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                dataType: 'json',
                async: false,
                type: "POST",
                data: {
                    accion: "consultarCarpetaExhortoAmparo",
                    idCarpetaJudicial: idCarpetaJudicial,
                    cveTipoCarpeta: cveTipoCarpeta
                },
                beforeSend: function (xhr) {
                    //console.log('numero=' + numeroToca + '&anio=' + anioToca + '&cveTipoCarpeta=' + cveTipoCarpeta + '&cveJuzgado=' + $("#cmbJuzgado").val());
                },
                success: function (datos) {
                    console.log(datos);
                    $("#divRemisionAcordadaMsj").empty();
                    $("#buscarTocaMsj").empty();
//                    console.log(datos);
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (index, element) {
                            if (element.cveEstatusCarpeta == 2) {
                                $("#buscarTocaMsj").append("<b>TOCA TERMINADA, intente con otra.</b>");
                                setTimeout(function () {
                                    limpiar();
                                }, 5000);
                            } else {
                                $("#cmbJuzgado").attr("disabled", true);
                                $("#cmbTipoCarpeta").attr("disabled", true);
                                $("#txtNumero").attr("disabled", true);
                                $("#txtAnio").attr("disabled", true);
                                setTimeout(function () {
                                    $("#cmbTipoCarpeta").val(cveTipoCarpeta);
                                }, 1000);
                                $("#txtNumero").val(element.numero);
                                $("#txtAnio").val(element.anio);
                                $("#inputBuscarToca").attr("disabled", true);
                                $("#buscarTocaMsj").append("<b>Encontrado</b>");
                                $("#hiddenIdCarpetaJudicial").val(element.idCarpetaJudicial);
                                setTimeout(function () {
                                    //buscarRemision(1);
                                    buscarApelantes(element.idCarpetaJudicial);
                                }, 1000);
                                return false;
                            }
                        });
                    } else {
                        $("#divBuscaRemisionMsj").empty();
                        $("#divConsultaActuaciones").hide();
                        $("#divTableResultActuaciones").html("");
                        $("#buscarTocaMsj").append("<b>Sin antecedentes</b>");
                        $("#hiddenIdCarpetaJudicial").val("");
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                }
            });
        }
    };
    /**************COMBOS****************/
    comboJuzgados = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
//            url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
            async: false,
            dataType: "json",
            data: {accion: "distrito", obligaPermiso: "false"},
//            data: {accion: "consultarCombo", obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
//                console.log(datos);
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
                            $('#cmbJuzgado').append('<option ' + selected + ' value="' + object.cveJuzgado + '" data-tipoJuzgado="' + object.cveTipojuzgado + '">' + object.desJuzgado + '</option>');
                        });
                    }
                } catch (e) {
                    alert("Error al cargar juzgados:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de tribunal:\n\n" + otroobj);
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
                            switch (cveTipoJuzgado) {
                                case "5":
                                    if (object.cveTipoCarpeta == "6") {
                                        $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                    }
                                    break;
                                case "6":
                                    if (object.cveTipoCarpeta == "6") {
                                        $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                    }
                                    break;
                                case "8":
                                    if (object.cveTipoCarpeta == "6") {
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
    cargaJuzgadores = function () {
        var cveJuzgado = $("#cmbJuzgado :selected").val();
        var strDatos = "accion=consultar";
            strDatos += "&activo=S&cveTipoJuzgador=7";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
            data: strDatos,
            async: true,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {

//                console.log(datos);
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                $('#cmbJuzgadores1').empty();
                $('#cmbJuzgadores1').append('<option value="0">Seleccione una opci\u00f3n</option>');
                $('#cmbJuzgadores2').empty();
                $('#cmbJuzgadores2').append('<option value="0">Seleccione una opci\u00f3n</option>');
                $('#cmbJuzgadores3').empty();
                $('#cmbJuzgadores3').append('<option value="0">Seleccione una opci\u00f3n</option>');
                if (json.totalCount > 0) {
                    for (var i = 0; i < json.totalCount; i++) {
                        //Aqui validar si el tipo de juzgador es 4: MAGISTRADO
                        if (parseInt(json.data[i].cveTipoJuzgador) == 7) {
                            $("#cmbJuzgadores1").append($('<option></option>').val(json.data[i].idJuzgador).html(json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].materno));
                            $("#cmbJuzgadores2").append($('<option></option>').val(json.data[i].idJuzgador).html(json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].materno));
                            $("#cmbJuzgadores3").append($('<option></option>').val(json.data[i].idJuzgador).html(json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].materno));
                            $("#cmbJuzgadores1").attr("idJuzgadorActuacion","");
                            $("#cmbJuzgadores2").attr("idJuzgadorActuacion","");
                            $("#cmbJuzgadores3").attr("idJuzgadorActuacion","");
                        }
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
    
    cargaFuncionMagistrado = function () {

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/funcionesjuzgadores/FuncionesjuzgadoresFacade.Class.php",
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
                        for (var i = 0; i < json.totalCount; i++) {
                            if($("#cmbJuzgado :selected").attr("data-tipoJuzgado") == 8){
                                 if(json.data[i].cveFuncionJuzgador == 7){
                                    $("#cmbFuncionMagistrado1").append($('<option></option>').val(json.data[i].cveFuncionJuzgador).html(json.data[i].desFuncionJuzgador));
                                    $("#cmbFuncionMagistrado2").append($('<option></option>').val(json.data[i].cveFuncionJuzgador).html(json.data[i].desFuncionJuzgador));
                                    $("#cmbFuncionMagistrado3").append($('<option></option>').val(json.data[i].cveFuncionJuzgador).html(json.data[i].desFuncionJuzgador));
                                }
                            }else{
                                if(json.data[i].cveFuncionJuzgador > 7){
                                    $("#cmbFuncionMagistrado1").append($('<option></option>').val(json.data[i].cveFuncionJuzgador).html(json.data[i].desFuncionJuzgador));
                                    $("#cmbFuncionMagistrado2").append($('<option></option>').val(json.data[i].cveFuncionJuzgador).html(json.data[i].desFuncionJuzgador));
                                    $("#cmbFuncionMagistrado3").append($('<option></option>').val(json.data[i].cveFuncionJuzgador).html(json.data[i].desFuncionJuzgador));
                                }
                            }
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
    
    cargaResolucion = function () {
        var strDatos = "accion=consultar";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposresoluciones/TiposresolucionesFacade.Class.php",
            data: strDatos,
            async: true,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    typeof $.typeahead === 'function' && $.typeahead({
                        input: ".js-typeahead-input",
                        minLength: 0,
                        maxItem: 10,
//                            maxItemPerGroup: 6,
                        order: "asc",
                        hint: true,
                        searchOnFocus: true,
                        emptyTemplate: 'No hay coincidencias para:  {{query}}',
                        display: ["desTipoResolucion"],
                        correlativeTemplate: true,
//                            dropdownFilter: "Todas",
                        backdrop: {
                            "background-color": "#fff"
                        },
                        template: '<span>' +
                                '<span class="desTipoResolucion">{{desTipoResolucion}}</span>' +
                                '</span>',
                        source: {
                            Resoluciones: {
                                data: json.data
                            }
                        },
                        callback: {
                            onClickAfter: function (node, a, item, event) {
                                $("#cmbResolucion").val(item.cveTipoResolucion);
                            }
                        },
                        debug: true
                    });
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
    cargaNotificacion = function () {
        var strDatos = "accion=consultar";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposnotificaciones/TiposnotificacionesFacade.Class.php",
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
                        if (json.data[i].cveTipoNotificacion == 2)
                            $("#cmbNotificacion").append($('<option></option>').val(json.data[i].cveTipoNotificacion).html("NOTIFICACION POR ESTRADOS"));
                        else
                            $("#cmbNotificacion").append($('<option></option>').val(json.data[i].cveTipoNotificacion).html(json.data[i].desTipoNotificacion));
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
    cargaEstatus = function () {
        var strDatos = "accion=consultar";
        strDatos += "&cveTipoEstatus=2"; // el 2 corresponde a los estatus de acuerdos
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/estatus/EstatusFacade.Class.php",
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
                    for (var i = 0; i < json.totalCount; i++) {
                        $("#cmbEstatus").append($('<option></option>').val(json.data[i].cveEstatus).html(json.data[i].descEstatus));
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
    cargaEstatusRadicacion = function () {
        var strDatos = "accion=consultar";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposestatusradicacion/TiposestatusradicacionFacade.Class.php",
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
                        $("#cmbEstatusRadicacion").append($('<option></option>').val(json.data[i].cveTipoEstatusRadicacion).html(json.data[i].desTipoEstatusRadicacion));
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
        var url = "";
        var accion = "";
        var tipoJuzgado = 0;
        if (procedencia == 1) {
            url = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            accion = "distrito2Instancia";
        } else {
            url = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            accion = "distrito";
        }
        $.ajax({
            type: "POST",
//            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            //url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
            url: url,
            async: false,
            dataType: "json",
//            data: {accion: "distrito", obligaPermiso: "false"},
//            data: {accion: "consultarCombo", obligaPermiso: "false"},
            data: {accion: accion, obligaPermiso: "false"},
            beforeSend: function (objeto) {
            },
            success: function (datos) {
//                console.log(datos);
//                alert("regresa..");
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
                            if (procedencia == 1) {
                                tipoJuzgado = object.cveTipojuzgado;
                            } else {
                                tipoJuzgado = object.cveTipojuzgado;
                            }
                            $('#cmbJuzgado').append('<option ' + selected + ' value="' + object.cveJuzgado + '" data-tipoJuzgado="' + tipoJuzgado + '">' + object.desJuzgado + '</option>');
                        });
                    }
                    $("#cmbJuzgado").val($("#hiddenCveJuzgado").val());
                } catch (e) {
                    alert("Error al cargar juzgados:" + e);
                }
            },
            complete: function () {
                comboTipoCarpeta();
                setTimeout(function () {
                    $("#cmbTipoCarpeta").val($("#hiddenCveTipoCarpeta").val());
                }, 1000);
                setTimeout(function () {
                    $("#lblRelationName").html("No. " + $("#cmbTipoCarpeta option:selected").text() + ":");
                }, 1000);
                cargaJuzgadores();
                cargaFuncionMagistrado();
                if($("#cmbJuzgado :selected").attr("data-tipoJuzgado") == 8){
                    $("#magistradoColegiada").hide();
                }
                setTimeout(function () {
                    $("#cmbJuzgadores1").val($("#hiddenCveJuzgadorAcuerdo").val());
                }, 1000);
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de tribunal:\n\n" + otroobj);
            }
        });
    };
    $(function () {
        // obtenerPermisos(); 
       // obtenerPermisosFormulario('SECRETARIO DE SALA', 'ACUERDOS DE RADICACION');
        $("#txtNumero").validaCampo('0123456789');
        $("#txtAnio").validaCampo('0123456789');
        $("#txtfechaInicial").datepicker(
                {dateFormat: 'dd/mm/yy'}
        );
        $("#txtfechaFinal").datepicker(
                {dateFormat: 'dd/mm/yy'}
        );
        /**CARGAR COMBOS**/
        comboJuzgados();
        comboTipoCarpeta();
        cargaJuzgadores();
        cargaFuncionMagistrado();
        if($("#cmbJuzgado :selected").attr("data-tipoJuzgado") == 8){
            $("#magistradoColegiada").hide();
        }
        cargaResolucion();
        cargaNotificacion();
        cargaEstatus();
        cargaEstatusRadicacion();
        var numeroToca = $("#txtNumero").val();
        var anioToca = $("#txtAnio").val();
        var consulta = true;
        var cveTipoCarpeta = $("#hiddenCveTipoCarpeta").val();
        var cveAdscripcion = $("#cmbJuzgado").val();
        var idCarpetaJudicial = $("#hiddenIdCarpetaJudicial").val();
        if (procedencia == 1) { // si viene del arbol idActuacionArbol idCarpetaJudicialArbol
            if ($("#hiddenidActuacionPadre").val() != 0 && $("#hiddenidActuacionPadre").val() != "") {
                // verificar que sea una remision
                verificarTipoActuacion($("#hiddenidActuacionPadre").val(), $("#hiddenIdCarpetaJudicial").val(), $("#hiddenCveTipoCarpeta").val());
            }
            if ($("#hiddenIdActuacion").val() != 0 && $("#hiddenIdActuacion").val() != "") {
                cargarCombos();
                setTimeout(function () {
//                         alert("muestra datos actuacion..");
                    consutaIdAcuerdo($("#hiddenIdActuacion").val(), "");
                }, 1000);
//                consutaIdAcuerdo($("#hiddenIdActuacion").val(), "");
            } else if ($("#hiddenIdCarpetaJudicial").val() != 0 && $("#hiddenIdCarpetaJudicial").val() != "") {
                setTimeout(function () {
                    // alert("muestra datos actuacion..");
                    console.log("busca desde arbol: "+numeroToca+"&"+anioToca+"&"+cveTipoCarpeta+"&"+cveAdscripcion);
                    buscarTocaArbol(consulta,idCarpetaJudicial, cveTipoCarpeta);
                }, 1000);
            }
            $("#inputConsultar").hide();
        }
        $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate', function (e) {
            $(this).datepicker('hide');
        });

        // editor de texto
        editor = UE.getEditor('Sintesis');
        editor.ready(function () {
            editor.setContent();
        });
        //Cargar tipo de resolucion 38: AUTO DE RADICACION
        descripcionResolucion(38);
        $("#cmbResolucion").val(38);
//        $(".buscarToca").focusout(function () {
//            var numeroToca = $("#txtNumero").val();
//            var anioToca = $("#txtAnio").val();
//            var consulta = true;
//            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
//            var cveAdscripcion = $("#cveTipoJuzgado").val();
//            if (numeroToca == "") {
//                consulta = false;
//            }
//            if (anioToca == "") {
//                consulta = false;
//            }
//            if (cveTipoCarpeta == 0) {
//                consulta = false;
//            }
//            buscarToca(consulta, numeroToca, anioToca, cveTipoCarpeta, cveAdscripcion);
//        });
        buscaToca = function () {
            var numeroToca = $("#txtNumero").val();
            var anioToca = $("#txtAnio").val();
            var consulta = true;
            var cveTipoCarpeta = $("#hiddenCveTipoCarpeta").val();
            var cveAdscripcion = $("#cveTipoJuzgado").val();
            var error = 0;
            var mensaje = "";
            if ($("#cmbJuzgado").val() == 0) {
                consulta = false;
                error = 1;
                mensaje += " - Tribunal";
            }
            if (cveTipoCarpeta == 0) {
                consulta = false;
                error = 2;
                mensaje += " - Tipo de Carpeta";
            }
            if (numeroToca == "") {
                consulta = false;
                error = 3;
                mensaje += " - N&uacute;mero de Toca";
            }
            if (anioToca == "") {
                consulta = false;
                error = 4;
                mensaje += " - A&ntilde;o de Toca";
            }

            if (error != 0) {
                $("#divAdvertenciaBuscar").show();
                $("#strAdvertenciaBuscar").html("&#161;Informaci&oacute;n! seleccione: " + mensaje);
                setTimeAlert("divAdvertenciaBuscar");

            }
            buscarToca(consulta, numeroToca, anioToca, cveTipoCarpeta, cveAdscripcion);
        };
        $(".cmbFuncion").on("change",function(){
            if(this.value != 0){
                $("#cmbFuncionMagistrado1 [value="+this.value+"]").attr("disabled", true);
                $("#cmbFuncionMagistrado2 [value="+this.value+"]").attr("disabled", true);
                $("#cmbFuncionMagistrado3 [value="+this.value+"]").attr("disabled", true);
            }
            $("#"+$(this).attr("id")+" [value="+this.value+"]").attr("disabled", false);
            activarComboFuncion();
        });
        $(".cmbMagistrado").on("change",function(){
            if(this.value != 0){
                $("#cmbJuzgadores1 [value="+this.value+"]").attr("disabled", true);
                $("#cmbJuzgadores2 [value="+this.value+"]").attr("disabled", true);
                $("#cmbJuzgadores3 [value="+this.value+"]").attr("disabled", true);
            }
            $("#"+$(this).attr("id")+" [value="+this.value+"]").attr("disabled", false);
            activarComboMagistrado();
        });
        function activarComboFuncion(){
            var arrFunc = [];
            if($("#cmbFuncionMagistrado1").val() != 0){
                arrFunc.push($("#cmbFuncionMagistrado1").val());
            }
            if($("#cmbFuncionMagistrado2").val() != 0){
                arrFunc.push($("#cmbFuncionMagistrado2").val());
            }
            if($("#cmbFuncionMagistrado3").val() != 0){
                arrFunc.push($("#cmbFuncionMagistrado3").val());
            }
            $(".cmbFuncion").each(function(){
                $(this).children().each(function(){
                    if($.inArray(this.value , arrFunc) == -1){
                        $(this).attr("disabled", false);
                    }
                });
            });
            $(".cmbMagistrado").each(function(){
                $(this).children().each(function(){
                    if($.inArray(this.value , arrFunc) == -1){
                        $(this).attr("disabled", false);
                    }
                });
            });
            
        }
        function activarComboMagistrado(){
            var arrFunc = [];
            if($("#cmbJuzgadores1").val() != 0){
                arrFunc.push($("#cmbJuzgadores1").val());
            }
            if($("#cmbJuzgadores2").val() != 0){
                arrFunc.push($("#cmbJuzgadores2").val());
            }
            if($("#cmbJuzgadores3").val() != 0){
                arrFunc.push($("#cmbJuzgadores3").val());
            }
            $(".cmbMagistrado").each(function(){
                $(this).children().each(function(){
                    if($.inArray(this.value , arrFunc) == -1){
                        $(this).attr("disabled", false);
                    }
                });
            });
            
        }
    });
</script> 