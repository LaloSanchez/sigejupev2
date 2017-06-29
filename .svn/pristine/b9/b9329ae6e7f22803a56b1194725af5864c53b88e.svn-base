<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>REPORTES</h4>
        </div>
        <div class="panel-body">
            <div class="col-xs-12 consultaInformacon" style="border: solid 4px #881518;" >
                <br />
                <form name="frmReportes" class="form-horizontal" id="frmSolicitud" method="POST" target="oculto" enctype="multipart/form-data" onsubmit="return false;">     
                    <div class="msj" ></div>
                    <div class='content col-xs-12'>
                        <div class="col-md-12" >
                            <div class="form-group" >
                                <label for="tipoReporte" class="col-xs-3 control-label" >Tipo de Reporte:</label>
                                <div class="col-md-9 col-xs-9" >
                                    <div class="col-md-6 col-xs-12" >
                                        <select class="form-control" id="tipoReporte" onchange="javascript:reportes.changeCmb(this);" >
                                            <option value="" >-- SELECCIONA UNA OPCI&Oacute;N --</option>
                                            <option value="1" >ORDENES DE APREHENSI&Oacute;N JUZGADOS DE CONTROL</option>
                                            <option value="2" >ORDENES DE APREHENSI&Oacute;N JUZGADO ESPECIALIZADO</option>
                                            <option value="3" >CATEOS JUZGADOS DE CONTROL</option>
                                            <option value="4" >CATEOS JUZGADO ESPECIALIZADO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group" >
                                <label for="fechaConsultar" class="col-xs-3 control-label" >Fecha:</label>
                                <div class="col-md-5 col-xs-5" >
                                    <div class="col-md-6 col-xs-12" >
                                        <input readonly="readonly" type="text" placeholder="Fecha de Consulta Inicial" name="fechaConsultar" id="fechaConsultar" class="form-control" size="10">
                                    </div>
                                    <div class="col-md-6 col-xs-12" >
                                        <input readonly="readonly" type="text" placeholder="Fecha de Consulta Final" name="fechaConsultarEnd" id="fechaConsultarEnd" class="form-control" size="10">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center buttons" >
                                <button class="btn btn-primary" onclick="javascript:reportes.getReporte()">Consultar</button>
                                <button class="btn btn-primary" onclick="javascript:reportes.limpiar()">Limpiar</button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 render" >
                    <div class="ordenes" style="display: none" >
                        <div class="table-responsive">
                            <table id="OrdenTable" class="table table-bordered table-condensed table-striped" >
                                <thead>
                                    <tr>
                                        <th>TIPO DE AUDIENCIA</th>
                                        <th>TOTAL DE HORAS</th>
                                        <th>TOTAL DE JUECES</th>
                                        <th>TOTAL DE USUARIOS</th>
                                        <th>TOTAL DE SOLICITUDES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="cateos" style="display: none" >
                        <div class="table-responsive">
                            <table id="CateosTable" class="table table-bordered table-condensed table-striped" >
                                <thead>
                                    <tr>
                                        <th>REPORTE</th>
                                        <th>TOTAL DE HORAS</th>
                                        <th>TOTAL DE JUECES</th>
                                        <th>TOTAL DE USUARIOS</th>
                                        <th>TOTAL DE SOLICITUDES</th>
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
    </div>
    <script src="sigejupe/reportesCateos/reportes.js" ></script>
    <script>
                                    var reportes = Reportes();
                                    var nowTemp = new Date();
                                    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                                    var checkin = $('#fechaConsultar').datepicker({
                                        format: "dd/mm/yyyy",
                                        onRender: function (date) {
                                            if (($("#tipoReporte").val() == 1) || ($("#tipoReporte").val() == 3)) {
                                                now = new Date('2016-06-20');
                                                return date.valueOf() <= now.valueOf() ? '' : 'disabled';
                                            } else if (($("#tipoReporte").val() == 2) || ($("#tipoReporte").val() == 4)) {
                                                now = new Date('2016-06-20');
                                                return date.valueOf() < now.valueOf() ? 'disabled' : '';
                                            } else {
                                                return date.valueOf() < now.valueOf() ? '' : 'disabled';
                                            }
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
                                            if (($("#tipoReporte").val() == 1) || ($("#tipoReporte").val() == 3)) {
                                                now = new Date('2016-06-20');
                                                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : (date.valueOf() >= now.valueOf()) ? 'disabled' : '';
                                            } else if (($("#tipoReporte").val() == 2) || ($("#tipoReporte").val() == 4)) {
                                                now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                                                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : (date.valueOf() <= now.valueOf()) ? '' : 'disabled';
                                            } else {
                                                return date.valueOf() <= checkin.date.valueOf() ? '' : 'disabled';
                                            }
                                        }
                                    }).on('changeDate', function (ev) {
                                        checkout.hide();
                                    }).data('datepicker');
                                    $("#fechaConsultar").val(moment().format('DD/MM/YYYY'));
                                    $("#fechaConsultarEnd").val(moment().format('DD/MM/YYYY'));
    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>