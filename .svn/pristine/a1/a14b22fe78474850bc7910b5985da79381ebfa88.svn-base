<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idAudiencia = (isset($_POST["idActuacion"]) ? $_POST["idActuacion"] : "");
    ?>
    <style>
        .modal-lg { width:98%; }
    </style>
    <div class="panel panel-default outadienciavideo">
        <div class="panel-heading">
            <h4>Consulta de Video Audiencias</h4>
        </div>
        <div class="panel-body">
            <form name="frmSolicitudVideoAudiencias" class="form-horizontal" id="frmSolicitudVideoAudiencias" method="POST" target="oculto" enctype="multipart/form-data" onsubmit="return false;">
                <div class="content col-xs-12" >
                    <div class="form-group" >
                        <label for="cmbJuzgados" class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label">Juzgado:</label>
                        <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                            <select id="cmbJuzgados" data-allow-clear="true" style="width: 100%" onchange="javascript:videoAudiencia.getJuzgadorJuzgado();videoAudiencia.getCarpetaJuzgado();" >
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label for="cmbTipoCarpeta" class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label">Tipo Carpeta:</label>
                        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <select id="cmbTipoCarpeta" style="width: 100%" onclick="javascript:videoAudiencia.getCarpetaJuzgado(this)"><option></option></select>
                        </div>
                        <label for="txtNumero" class="col-xs-12 col-sm-12 col-md-1 col-lg-1 control-label">N&uacute;mero:</label>
                        <div class="col-md-1 col-lg-1 col-xs-12 col-sm-12">
                            <input id="txtNumero" class="form-control" placeholder="N&uacute;mero" />
                        </div>
                        <div class="col-md-1 col-lg-1 col-xs-12 col-sm-12">
                            <input id="txtAnio" class="form-control" placeholder="A&ntilde;o" />
                        </div>
                    </div>
                    <div class="form-group" >
                        <label for="cmbJuez" class="col-xs-12 col-sm-12 col-md-3 col-lg-3 control-label">Juez:</label>
                        <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12">
                            <select id="cmbJuez" style="width: 100%"><option></option></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fechaConsultar" class="col-xs-3 control-label">Fecha Inicial:</label>
                        <div class="col-md-3 col-xs-3">
                            <input readonly="readonly" type="text" placeholder="Fecha de Consulta Inicial" name="fechaConsultar" id="fechaConsultar" class="form-control" size="10" style="text-transform: uppercase;">
                        </div>
                        <label class="col-xs-1 control-label" >Fecha FInal:</label>
                        <div class="col-md-2 col-xs-2" >
                            <input readonly="readonly" type="text" placeholder="Fecha de Consulta Final" name="fechaConsultarEnd" id="fechaConsultarEnd" class="form-control" size="10" style="text-transform: uppercase;">
                        </div>
                    </div>
                    <div class="form-group text-center buttons">
                        <button class="btn btn-primary" onclick="javascript:videoAudiencia.consultarGral(0)">Consultar</button>
                        <button class="btn btn-primary" onclick="javascript:videoAudiencia.limpiarGral()">Limpiar</button>
                    </div>
                </div>
                <div class="form-group" >
                    <div class="col-xs-12 alert alert-warning alert-dismissable msj text-center" style="display:none" id="divAlertWarning" ></div>
                </div>
            </form>

            <div class='informacion content col-xs-12' style="display: none">
                <div class="paginacion col-md-12" >
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <div class="form-group col-md-3">
                            <label class="control-label" id="totalReg"></label>
                        </div>
                        <div id="divPaginador" class="form-group col-md-3" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="javascript:videoAudiencia.consultarGral(0)">
                                <option value="1"></option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="javascript:videoAudiencia.consultarGral(1)">
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
                </div>

                <div class="col-xs-12" >
                    <div class="table-responsive" >
                        <table id="informationTable" class="table table-hover table-bordered table-striped" >
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Causa</th>
                                    <th>Auxiliar</th>
                                    <th>Fecha de Audiencia</th>
                                    <th>Audiencia</th>
                                    <th>Sala</th>
                                    <th>Estatus</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="renderVideo" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <div class="modal-header panel-heading">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">VIDEO DE AUDIENCIA</h4>
                </div>
                <div class="modal-body">
                    <div class="renderVideo" ></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default closeModalVideoAudiencia" data-dismiss="modal">Cerrar</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <script src="sigejupe/videoaudiencias/consultavideoaudiencias.js"></script>
    <script src="sigejupe/solicitudesCateos/helpers.js"></script>
    <script>
                                var videoAudiencia = new videoAudiencias();
                                var helper = new Helpers();
                                $(function () {
                                    var filtroJuzgado = "cveInstancia";
                                    var urlJuzgado = "Juzgados";
                                    var renderJuzgado = ["cmbJuzgados"];
                                    var colJuzgado = ["cveJuzgado", "desJuzgado"];
                                    helper.loadCombos(filtroJuzgado, renderJuzgado, colJuzgado, urlJuzgado);
                                    videoAudiencia.getTipoCarpetas();
                                    videoAudiencia.getJuzgadores();
                                    $("#cmbJuzgados").select2({allowClear: 'true', placeholder: "Selecciona una Opcion"});
                                    $("#cmbTipoCarpeta").select2({allowClear: 'true', placeholder: "Selecciona una Opcion"});
                                    $("#cmbJuez").select2({allowClear: 'true', placeholder: "Selecciona una Opcion"});

                                    var nowTemp = new Date();
                                    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

                                    var checkin = $('#fechaConsultar').datepicker({
                                        format: "dd/mm/yyyy",
                                        onRender: function (date) {
                                            return date.valueOf() < now.valueOf() ? '' : '';
                                        }
                                    }).on('changeDate', function (ev) {
                                        if (ev.date.valueOf() >= checkout.date.valueOf()) {
                                            var newDate = new Date(ev.date)
                                            newDate.setDate(newDate.getDate());
                                            checkout.setValue(newDate);
                                        }
                                        checkin.hide();
                                        $('#fechaConsultarEnd')[0].focus();
                                    }).data('datepicker');
                                    var checkout = $('#fechaConsultarEnd').datepicker({
                                        format: "dd/mm/yyyy",
                                        onRender: function (date) {
                                            return date.valueOf() < checkin.date.valueOf() ? 'disabled' : '';
                                        }
                                    }).on('changeDate', function (ev) {
                                        checkout.hide();
                                    }).data('datepicker');
//
//                                    $("#fechaConsultar").val(moment().format('DD/MM/YYYY'));
//                                    $("#fechaConsultarEnd").val(moment().format('DD/MM/YYYY'));
                                });
    </script>

    <?php

} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>