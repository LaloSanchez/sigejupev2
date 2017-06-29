<?php 
date_default_timezone_set("America/Mexico_City");
//version 14/01/2016
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    $idActuacionArbol = "";
    $idCarpetaJudicialArbol = "";
    $procedencia = 0;

    if (isset($_POST['idActuacion'])) {
        $idActuacionArbol = @$_POST['idActuacion'];
    }
    if (isset($_POST['idCarpetaJudicial'])) {
        $idCarpetaJudicialArbol = @$_POST['idCarpetaJudicial'];
    }

    if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "")) {
        $procedencia = 1; // viene de arbol
    } else {
        $procedencia = 0; // formulario general
    }
    ?>
    <link type="text/css" href="css/actuaciones.css" rel="stylesheet" />
    <div id="divImgloading" style="display:none;"></div>
    <input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>">
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>">
    <input type="hidden" id="hiddenCveTipoCarpeta" value="">
    <input type="hidden" id="hiddenIdActuacionAcuerdo" value="">
    <input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>">
    <input type="hidden" id="hiddenCveAdscripcion" value="<?php echo $_SESSION['cveAdscripcion'] ?>">
    <input type="hidden" id="hiddenCveUsuarioSistema" value="<?php echo $_SESSION['cveUsuarioSistema'] ?>">
    <input type="hidden" id="hiddenCvePerfil" value="<?php echo $_SESSION['cvePerfil'] ?>">
    <input type="hidden" id="hiddenProcedencia" value="<?php echo $procedencia ?>">
    <!-- Modal -->
    <div class="modal fade" id="descripcion-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Descripción de la Suspesi&oacute;n Condicional</h4>
                </div>
                <div class="modal-body" id="body-descripcion-modal">
                    <table class="table table-striped table-responsive">'
                        <tr><th>Suspensi&oacute;n Condicional</th></tr>
                        <tr><td><span id="modDescTipoCarpeta"></span> <span id="modNumero"></span>/<span id="modAnio"></span></br>
                        Sintesis: <span id="modSintesis"></span></td></tr>
                        <tr><th>Contenido del documento</th></tr>
                        <tr><td><script id="input_scondicional_observaciones" type="text/plain" style="width: 100%; height: 300px; margin: 0px auto;"></script></td></tr>
                        </table>            
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">
    Consulta de Suspensi&oacute;n Condicional
    </h5>
        </div>
        <div class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div class="form-group" id="Juzgado">
                    <label class="control-label col-md-4 needed">Juzgado:</label>
                    <div class="col-md-5">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control" name="cmbJuzgados" id="cmbJuzgados" onchange="F_SC_0008()">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4 ">Relacionado con:</label>
                    <div class="col-md-5">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control Relacionado" name="cmbTipoCarpeta" id="cmbTipoCarpeta">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4" id="lblRelationName">No.</label>
                    <div id="divSinRelacion" class="col-md-5">
                        <input type="text" id="txtNumero" class="form-inline" id="txtNumero" placeholder="N&uacute;mero">/
                        <input type="text" class="form-inline" id="txtAnio" placeholder="A&ntilde;o" maxlength="4">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Tipo de Notificaci&oacute;n:</label>
                    <div class="col-md-5">
                        <div id="divCmbNotificacion" class="logobox"></div>
                        <select class="form-control" name="cmbNotificacion" id="cmbNotificacion">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div id="divRangoFechas" style="">
                    <div class="form-group">
                        <label class="control-label col-md-4">Fecha Inicio:</label>
                        <div class="col-md-5">
                            <input type="text" id="txtfechaInicial" placeholder="dd/mm/aaaa" class="form-control datepicker" value="<?php echo date("d/m/Y")?>" data-date-format="dd/mm/yyyy" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Fecha Fin:</label>
                        <div class="col-md-5">
                            <input type="text" id="txtfechaFinal" placeholder="dd/mm/aaaa" class="form-control datepicker" value="<?php echo date("d/m/Y")?>" data-date-format="dd/mm/yyyy" />
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
                <div class="form-group">
                    <div class="col-xs-offset-3 col-md-9">
                        <input type="submit" class="btn btn-primary" id="inputConsultar" value="Consultar" onclick="javascript:F_SC_0003();">
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="F_SC_0004();">
                    </div>
                </div>
            </div>
            <div id="divConsulta" style="display:none;" class="col-md-12">
                <div class="col-md-12">
                    <div class="form-group col-md-3" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>
                    <div id="divPaginador" class="form-group col-md-3">
                        <label class="control-label">Pagina:</label>
                        <select name="cmbPaginacion" id="cmbPaginacion" onchange="consultarMedidas(0);">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-3">
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select name="cmbNumReg" id="cmbNumReg" onchange="consultarMedidas(0);">
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
                <div id="tableSearch" class="col-md-12 table-responsive">
                </div>
            </div>
        </div>
    </div>
    <script src="sigejupe/consultasuspension/suspensionCondicional.min.js" charset="UTF-8"></script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>