<?php

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <style>
        .panel-default > .panel-heading{
            background: #427468;        
            color: #ebf3f1;
        }
        .panel-heading{
            background: #427468;        
            color: #ebf3f1;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-heading">
                <h4>Registro de Llamadas y Correos Enviados</h4>
            </div>
        </div>
        <div class="panel-body">
            <form name="frmBitacoraApelacion" class="form-horizontal" id="frmSolicitud" method="POST" target="oculto" enctype="multipart/form-data" onsubmit="return false;">            
                <div class="row alert alert-warning alert-dismissable" style="display:none" id="divAlertWarning" ></div>

                <div class='content col-xs-12 col-md-12'>
                    <div class="col-md-12 col-xs-12" >
                        <div class="form-group" >
                            <label for="txtNumCateoConsultar" class="col-xs-3 control-label" >Numero de Cateo:</label>
                            <div class="col-md-9 col-xs-12" >
                                <div class="col-md-6 col-xs-12" >
                                    <input type="text" placeholder="N&uacute;mero de Cateo" name="txtNumCateoConsultar" id="txtNumCateoConsultar" class="form-control" onkeypress=" return validateNumber(event)" size="5">
                                </div>
                                <div class="col-md-6 col-xs-12" >
                                    <input type="text" placeholder="A&ntilde;o de Cateo" name="txtAniCateoConsultar" id="txtAniCateoConsultar" class="form-control" maxlength="4" size="5" onkeypress=" return validateNumber(event)" >
                                </div>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label for="cmbJuzgadoSolicitar" class="control-label col-lg-3 col-md-3 col-sm-12 col-xs-12" >Juzgado a solicitar:</label>
                            <div class="col-md-9 col-xs-12" >
                                <div class="col-md-6 col-xs-12" >
                                    <select class="form-control" name="cmbJuzgadoSolicitar" id="cmbJuzgadoSolicitar">
                                        <option value="0">SELECCIONE JUZGADO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" >
                            <label for="fechaConsultar" class="col-xs-3 control-label" >Fecha:</label>
                            <div class="col-md-9 col-xs-12" >
                                <div class="col-md-6 col-xs-12" >
                                    <input type="text" placeholder="Fecha de Consulta Inicial" name="fechaConsultar" id="fechaConsultar" class="form-control" size="10">
                                </div>
                                <div class="col-md-6 col-xs-12" >
                                    <input type="text" placeholder="Fecha de Consulta Final" name="fechaConsultarEnd" id="fechaConsultarEnd" class="form-control" size="10">
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center buttons" >
                            <button class="btn btn-primary" onclick="javascript:bitacora.inicia('1')">Consultar</button>
                            <button class="btn btn-primary" onclick="javascript:bitacora.limpiar()">Limpiar</button>
                        </div>
                    </div>

                    <div class="paginacion col-md-12" style="display:none" >    
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <div class="form-group col-md-3">
                                <label class="control-label" id="totalReg"></label>
                            </div>
                            <div id="divPaginador" class="form-group col-md-3" >
                                <label class="control-label">Pagina:</label>
                                <select  name="cmbPaginacion" id="cmbPaginacion" onchange="javascript:bitacora.inicia(0)">
                                    <option value="1"></option>
                                </select>
                            </div>
                            <div id="divPaginador" class="form-group col-md-4" >
                                <label class="control-label">Registros por p&aacute;gina:</label>
                                <select  name="cmbNumReg" id="cmbNumReg" onchange="javascript:bitacora.inicia(1)">
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

                    <div class="col-xs-12 col-md-12 consultaInformacion" >
                        <div class="responsive-table" >
                            <table id="informationTable" class="table table-hover table-bordered table-striped" >
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Juzgado</th>
                                        <th>N&uacute;m Cateo</th>
                                        <th>Carpeta</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="col-xs-12" ><div class="infos" ></div></div>

                </div>

                <div class="col-xs-12 col-md-12 detalleInfo" style="display:none" >
                    <div class="col-xs-12 col-md-12 text-center" >
                        <div class="panel-heading" >DETALLE ACTOS DE INVESTIGACI&Oacute;N QUE REQUIEREN AUTORIZACI&Oacute;N JUDICIAL (TOMA DE MUESTRAS)</div>

                        <div class="table-responsive" >
                            <table id="detalleCateo" class="table table-striped table-hover table-bordered table-condensed" >
                                <thead>
                                    <tr>
                                        <th>Juzgado</th>
                                        <th>Estatus</th>
                                        <th>Juzgado Audiencia</th>
                                        <th>Causa</th>
                                        <th>Carpeta Inv.</th>
                                        <th>NUC</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <div class="col-xs-12  col-md-12" >
                        <div class="col-xs-12  col-md-6" >

                            <div class="panel-heading text-center" >DETALLE LLAMADAS</div>
                            <div class="table-responsive" >
                                <table id="ResumenLlamadas" class="table table-striped table-bordered table-hover table-condensed" >
                                    <thead>
                                        <tr>
                                            <td>Tel&eacute;fono</td>
                                            <td>Usuario</td>
                                            <td>Total</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>

                            <div class="panel-heading text-center" >DETALLE LLAMADAS</div>
                            <div class="table-responsive" >
                                <table id="DetalleLlamadas" class="table table-striped table-bordered table-hover table-condensed" >
                                    <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td>Tel&eacute;fono</td>
                                            <td>Detalle</td>
                                            <td>Fecha</td>
                                            <td>Usuario</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="col-xs-12  col-md-6" >
                            <div class="panel-heading text-center" >RESUMEN CORREOS</div>
                            <div class="table-responsive" >
                                <table id="ResumenCorreos" class="table table-striped table-bordered table-hover table-condensed" >
                                    <thead>
                                        <tr>
                                            <td>Correo</td>
                                            <td>Usuario</td>
                                            <td>Total</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="panel-heading text-center" >DETALLE CORREOS</div>
                            <div class="table-responsive" >
                                <table id="DetalleCorreos" class="table table-striped table-bordered table-hover table-condensed" >
                                    <thead>
                                        <tr>
                                            <td>No.</td>
                                            <td>Correo</td>
                                            <td>Motivo</td>
                                            <td>Fecha</td>
                                            <td>Usuario</td>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>
    <script src="sigejupe/reportesapelacion/bitacoraApelacion.js" ></script>
    <script src="sigejupe/solicitudesCateos/helpers.js" type="text/javascript"></script>
    <script>
                                    var bitacora = new BitacoraApelacion();
                                    $(function () {
                                        var helper = new Helpers();
                                        var filtroJuzgado = "cveTipojuzgado";
                                        var urlJuzgado = "Juzgados";
                                        var renderJuzgado = ["cmbJuzgadoSolicitar", "cmbJuzgadoProcedencia"];
                                        var colJuzgado = ["cveJuzgado", "desJuzgado"];
                                        helper.loadCombos(filtroJuzgado, renderJuzgado, colJuzgado, urlJuzgado);
                                        var nowTemp = new Date();
                                        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                                        var checkin = $('#fechaConsultar').datepicker({
                                            format: "dd/mm/yyyy",
                                            onRender: function (date) {
                                                return date.valueOf() < now.valueOf() ? '' : '';
                                            }
                                        }).on('changeDate', function (ev) {
                                            if (ev.date.valueOf() > checkout.date.valueOf()) {
                                                var newDate = new Date(ev.date)
                                                newDate.setDate(newDate.getDate() + 1);
                                                checkout.setValue(newDate);
                                            }
                                            checkin.hide();
                                            $('#fechaConsultarEnd')[0].focus();
                                        }).data('datepicker');
                                        var checkout = $('#fechaConsultarEnd').datepicker({
                                            format: "dd/mm/yyyy",
                                            onRender: function (date) {
                                                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                                            }
                                        }).on('changeDate', function (ev) {
                                            checkout.hide();
                                        }).data('datepicker');
                                        $("#informationTable").parent().parent().hide();
                                        $("#fechaConsultar").val(moment().format('DD/MM/YYYY'));
                                        $("#fechaConsultarEnd").val(moment().format('DD/MM/YYYY'));
                                    });
    </script>

    <?php

} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>