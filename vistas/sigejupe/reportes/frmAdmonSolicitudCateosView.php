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
</style>
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="panel-heading">
            <h4>Administraci&oacute;n de Solicitudes de Cateo</h4>
        </div>
    </div>
    <div class="panel-body">        
        <form name="frmBitacoraCateos" class="form-horizontal" id="frmSolicitud" method="POST" target="oculto" enctype="multipart/form-data" onsubmit="return false;">            
            <br />
            <div class="col-md-12" ><div class="row alert alert-warning alert-dismissable" style="display:none" id="divAlertWarning" ></div></div>
            <div class="col-md-12" ><div class="row alert alert-success alert-dismissable" style="display:none" id="divAlertSuccess" ></div></div>
            <div class='content col-xs-12' id="Paso1" >
                <div class="col-md-12" >
                    <div class="form-group" >
                        <label for="txtNumCateoConsultar" class="col-xs-3 control-label" >N&uacute;mero de Cateo:</label>
                        <div class="col-md-9 col-xs-9" >
                            <div class="col-md-6 col-xs-12" >
                                <input type="text" placeholder="N&uacute;mero de Cateo" name="txtNumCateoConsultar" id="txtNumCateoConsultar" class="form-control" onkeypress=" return validateNumber(event)" size="5">
                            </div>
                            <div class="col-md-6 col-xs-12" >
                                <input type="text" placeholder="A&ntilde;o de Cateo" name="txtAniCateoConsultar" id="txtAniCateoConsultar" class="form-control" maxlength="4" size="5" onkeypress=" return validateNumber(event)" >
                            </div>
                        </div>
                    </div>
                    <div class="form-group text-center buttons" >
                        <button class="btn btn-primary" onclick="javascript:bitacora.searchCateo('1')">Consultar</button>
                        <button class="btn btn-primary" onclick="javascript:bitacora.limpiarAdmon()">Limpiar</button>
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
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="javascript:bitacora.searchCateo(0)">
                                <option value="1"></option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="javascript:bitacora.searchCateo(1)">
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

                <div class="col-xs-12 InformacionCateo" >
                    <div class="responsive-table" >
                        <table id="informationTable" class="table table-hover table-bordered table-striped" >
                            <thead>
                                <tr>
                                    <th>NO.</th>
                                    <th>JUZGADO</th>
                                    <th>CATEO</th>
                                    <th>CARPETA</th>
                                    <th>CAUSA</th>
                                    <th>ESTADO</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="col-xs-12" ><div class="infos" ></div></div>
            </div>

            <div class="col-xs-12" id="Paso2" style="display:none" >
                <div class="col-xs-12" >
                    <div class="col-xs-4" ></div>
                    <div class="col-xs-4" >
                        <div class="table-responsive" >
                            <table class="table table-bordered table-hover table-striped" >
                                <input type="hidden" id="idCateo" />
                                <tbody>
                                    <tr>
                                        <th>N&uacute;mero de Cateo:</th>
                                        <td><numcateo></numcateo></td>
                                </tr>
                                <tr>
                                    <th>Carpeta Investigaci&oacute;n:</th>
                                    <td><carpeta></carpeta></td>
                                </tr>
                                <tr class="hide" >
                                    <th>N&uacute;mero Causa:</th>
                                    <td><causa></causa></td>
                                </tr>
                                <tr>
                                    <th>Juez:</th>
                                    <td>
                                        <select class="form-control" id="cmbJuez" >
                                            <option value="0">SELECCIONA UNA OPCI&Oacute;N</option>
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="text-center" id="imprimir" >
                                <button class="btn btn-primary" onclick="javascript:bitacora.anterior()" >Anterior</button>
                                <button class="btn btn-primary" onclick="javascript:bitacora.modificaCateo()" >Guardar</button>
                                <button class="btn btn-primary hide" onclick="javascript:bitacora.imprimir()" >Descargar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4" ></div>
                </div>
            </div>
            <input type="hidden" id="cmbJuzgadoSolicitar" />
        </form>
    </div>
</div>
<script src="sigejupe/solicitudesCateos/helpers.js" type="text/javascript"></script>
<script src="sigejupe/reportes/bitacora.js" ></script>
<script src="sigejupe/solicitudesCateos/cateos.js" type="text/javascript"></script>
<script>
    var bitacora = new BitacoraCateo();
    var helper = new Helpers();
    var cateos = new Cateos();
    $(function () {
        var filtroJuzgado = "cveTipojuzgado";
        var urlJuzgado = "Juzgados";
        var renderJuzgado = ["cmbJuzgadoSolicitar", "cmbJuzgadoProcedencia"];
        var colJuzgado = ["cveJuzgado", "desJuzgado"];
        helper.loadCombos(filtroJuzgado, renderJuzgado, colJuzgado, urlJuzgado);
        $('#fechaConsultar').datepicker({format: 'dd/mm/yyyy', maxDate: 0});
        $("#informationTable").parent().parent().hide();
        $(".InformationCteo").hide();
    });
</script>
<?php
}else{
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>