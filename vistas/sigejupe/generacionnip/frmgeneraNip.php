<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>Generaci&oacute;n de NIP</h4>
        </div>
        <div class="panel-body">
            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12" >
                <form class="form-horizontal" >
                    <div class="form-group" >
                        <label for="nip" class="col-md-3 col-xs-12 col-lg-3 col-sm-12 control-label" >NIP: </label>
                        <div class="col-md-3 col-xs-12 col-lg-3 col-sm-12" >
                            <input class="form-control" name="nip" id="nip" >
                        </div>
                    </div>
                    <div class="form-group" >
                        <label for="fechainicial" class="col-md-3 col-xs-12 col-lg-3 col-sm-12 control-label" >Fecha Inicial:</label>
                        <div class="col-md-3 col-xs-12 col-lg-3 col-sm-12" >
                            <input readonly="readonly" class="form-control" name="fechainicial" id="fechainicial" >
                        </div>
                        <label for="fechafinal" class="col-md-1 col-xs-12 col-lg-1 col-sm-12 control-label" >Fecha Final:</label>
                        <div class="col-md-3 col-xs-12 col-lg-3 col-sm-12" >
                            <input readonly="readonly" class="form-control" name="fechafinal" id="fechafinal" >
                        </div>
                    </div>
                    <div class="form-group text-center" >
                        <div class="btns" >
                            <button class="btn btn-danger" onclick="javascript:nips.getNips(0); return false;" >Buscar NIP</button> 
                            <button class="btn btn-danger" onclick="javascript:nips.generaNip(2);return false;" >Generar un NIP de Orden De Aprehensi&oacute;n</button>
                            <button class="btn btn-danger" onclick="javascript:nips.generaNip(1);return false;" >Generar un NIP de Cateo</button>
                            <button class="btn btn-danger" onclick="javascript:nips.generaNip(3);return false;" >Generar un NIP de Toma de Muestras</button>
                        </div><br />
                        <div class="infos" ></div>
                    </div>
                </form>
            </div>
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12 renderInfo" style="display: none;" >
                <div class="table-responsive" >
                    <table id="tblNips" class="table table-striped table-bordered table-condensed table-hover" >
                        <thead>
                            <tr>
                                <th colspan="4" class="text-center" ><span class="title" >NIP´S GENERADOS HOY</span></th>
                            </tr>
                            <tr>
                                <th>NIP Generado</th>
                                <th>Vigencia</th>
                                <th>Tipo de Proceso</th>
                                <th>Estatus</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="sigejupe/generacionnip/generaNip.js" type="text/javascript"></script>
    <script>
                                var nips = new NIP();
                                nips.getNips();
                                var nowTemp = new Date();
                                var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                                var checkin = $('#fechainicial').datepicker({
                                    format: "dd/mm/yyyy",
                                    onRender: function (date) {
                                        return date.valueOf() < now.valueOf() ? '' : '';
                                    }
                                }).on('changeDate', function (ev) {
                                    var newDate = new Date(ev.date)
                                    newDate.setDate(newDate.getDate());
                                    checkout.setValue(newDate);
                                    checkin.hide();
                                    $('#fechafinal')[0].focus();
                                }).data('datepicker');
                                var checkout = $('#fechafinal').datepicker({
                                    format: "dd/mm/yyyy",
                                    onRender: function (date) {
                                        return date.valueOf() < checkin.date.valueOf() ? 'disabled' : '';
                                    }
                                }).on('changeDate', function (ev) {
                                    checkout.hide();
                                }).data('datepicker');
    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>