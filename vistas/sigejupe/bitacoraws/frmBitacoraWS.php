<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Bit&aacute;cora de Servicios WEB</h4>
        </div>
        <div class="panel-body">
            <div class="col--md-12 frmSearch" >
                <form class="form-horizontal" method="POST" onsubmit="return false;">
                    <div class="form-group" >
                        <label for="txtNumCateoConsultar" class="col-xs-3 control-label" >Tipo de Acci&oacute;n:</label>
                        <div class="col-md-9 col-xs-9" >
                            <select class="form-control" id="cmbtipoAccion" >
                                <option value="0" >Seleccione una Opci&oacute;n</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label for="fechaConsultar" class="col-xs-3 control-label" >Fecha:</label>
                        <div class="col-md-9 col-xs-9" >
                            <div class="col-md-6 col-xs-12" >
                                <input readonly="readonly" type="text" placeholder="Fecha de Consulta Inicial" name="fechaConsultar" id="fechaConsultar" class="form-control" size="10">
                            </div>
                            <div class="col-md-6 col-xs-12" >
                                <input readonly="readonly" type="text" placeholder="Fecha de Consulta Final" name="fechaConsultarEnd" id="fechaConsultarEnd" class="form-control" size="10">
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center buttons" >
                        <button class="btn btn-primary" onclick="javascript:bitacora.inicia(1)">Consultar</button>
                        <button class="btn btn-primary" onclick="javascript:bitacora.limpiar()">Limpiar</button>
                    </div>
                    <div class="form-group" >
                        <div class="infos col-md-12 col-xs-12 col-sm-12 col-lg-12" ></div>
                    </div>
                </form>
            </div>
            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 consultaInformacon">         
                <div class="row alert alert-warning alert-dismissable" style="display:none" id="divAlertWarning" ></div>

                <div class='content col-xs-12'>
                    <div class="paginacion col-md-12 col-xs-12 col-sm-12 col-lg-12" style="display:none" >    
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
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 paginacion" style="display:none" >
                    <div class="table-responsive" >
                        <table id="informationTable" class="table table-hover table-bordered table-striped" >
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Origen</th>
                                    <th>Estatus Petici&oacute;n</th>
                                    <th>Detalle Respuesta</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <script src="./sigejupe/bitacoraws/bitacoraws.js" ></script>
    <script>
                                    var bitacora = new BitacoraWS();
                                    bitacora.getAcciones();
                                    $(function () {
                                        var nowTemp = new Date();
                                        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                                        var checkin = $('#fechaConsultar').datepicker({
                                            format: "dd/mm/yyyy",
                                            parseDate: new Date(),
                                            onRender: function (date) {
                                                return date.valueOf() < now.valueOf() ? '' : '';
                                            }
                                        }).on('changeDate', function (ev) {
                                            var newDate = new Date(ev.date)
                                            newDate.setDate(newDate.getDate());
                                            checkout.setValue(newDate);
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
                                    });
    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>