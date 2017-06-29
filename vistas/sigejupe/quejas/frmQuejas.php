<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    //parAmetros digitalizaciOn
    $digitalizacion = "";
    $subirArchivos = "";
    include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");
    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULODIGITALIZACION");
    $digitalizacion = $host->getConnect();
    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULOSUBIRARCHIVOS");
    $subirArchivos = $host->getConnect();
    ?>
    <style type="text/css">
        .tblGridAgrega{ margin-top: 20px; font-family: arial; font-size: 11px; text-align: center; }
        .trGridAgrega{ color: #ffffff; background-color: #881518; }
        .mayuscula{   text-transform: uppercase; }  
        .trSeleccion:hover{ background-color:#dff0d8; cursor: pointer; } 
        .requerido { color: darkred; }
        .alert{ display: none; }
        #divHideForm{ display: none; position: absolute; width: 100%; height: 100vh; opacity: .5; z-index: 99999; background: #427468; }
        #divMenssage{ width: 100%; height: 40px; padding-top: 10px; padding-bottom: 10px; text-align: center; margin-top: 40vh; margin-bottom: auto; color: #284740; background: #FFFFFF; text-transform: uppercase; }
        #divImgloading{ background: #FFFFFF url(img/cargando_1.gif) no-repeat; background-position: center; width: 100%; height: 70px; margin-left: auto; margin-right: auto; }
        .panel panel-default{ background: #427468; color: #ebf3f1; }
        .panel-heading{ background: #427468; color: #ebf3f1; }
        .panel-group .panel-heading{ background: #427468; color: #ebf3f1; }
        .panel-default > .panel-heading{ background: #427468; color: #ebf3f1; }
        .optionprom{ height: 10px; }
        .required{ color: darkred; }
        .needed:after { color:darkred; content: " (*)"; }
    </style>
    <input type="hidden" id="fechaHoy" value="<?php echo date('d/m/Y H:i:s'); ?>"/>
    <input type="hidden" id="hiddenCveAdscripcion" value="<?php echo $_SESSION["cveAdscripcion"]; ?>" >
    <input type="hidden" id="cveTipoJuzgadoAlt" name="cveTipoJuzgadoAlt"/>
    <input type="hidden" id="hiddenNumEmpleado" name="hiddenNumEmpleado" value="<?= $_SESSION['NumEmpleado'] ?>"/>
    <input type="hidden" id="hiddenIdActuacion" name="hiddenIdActuacion" value=""/>
    <input type="hidden" id="hiddenIdQuejaPromocion" name="hiddenIdQuejaPromocion" value=""/>
    <input type="hidden" id="hiddenIdActuacionesEstatus" name="hiddenIdActuacionesEstatus" value=""/>
    <div class="panel panel-default">
        <!-- Encabezado -->
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Queja Interpuesta
            </h5>
        </div>

        <!-- Vista principal -->
        <div class="panel-body">
            <!-- SecciOn de busqueda -->
            <div id="divBusqueda" class="form-horizontal">
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Juzgado:</label>
                    <div class="col-md-6">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control " name="cveTipoJuzgado_busqueda" id="cveTipoJuzgado_busqueda" onchange="javascript:queja.cargaTipoCarpeta(2);">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Relacionado con:</label>
                    <div class="col-md-6">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control " name="cmbTipoCarpeta_busqueda" id="cmbTipoCarpeta_busqueda">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3" id="">No. / A&ntilde;o</label>
                    <div id="divSinRelacion" class="col-md-6">
                        <input type="text"  class="form-inline " id="txtNumero_busqueda" placeholder="N&uacute;mero">
                        /
                        <input type="text" maxlength="4" class="form-inline " id="txtAnio_busqueda"  placeholder="A&ntilde;o">
                    </div>                                
                    <div id="divSinRelacionMsg" class="col-md-6">

                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3" id="">Promocion</label>
                    <div id="divSinRelacion" class="col-md-6">
                        <input type="text"  class="form-inline " id="txtNumeroActuacion_busqueda" placeholder="N&uacute;mero">
                        /
                        <input type="text" maxlength="4" class="form-inline " id="txtAnioActuacion_busqueda" placeholder="A&ntilde;o">
                    </div>                    
                </div>
                <div class="form-group">
                    <div class="col-md-9">
                        <label class="control-label col-md-4" id="">Fecha Inicial</label>
                        <div class="col-md-3">
                            <input type="text" id="fechaInicial" class="form-control fecha" placeholder="dd/mm/aaaa">
                        </div>
                        <label class="control-label col-md-1" id="">Fecha Final</label>
                        <div class="col-md-3">
                            <input type="text" id="fechaFinal" class="form-control fecha" placeholder="dd/mm/aaaa"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" id="inputBuscar" value="Buscar" onclick="javascript:queja.buscarQuejaInterpuesta()" style="display: block">
                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="btn btn-primary" id="inputLimpiarB" value="Limpiar" onclick="javascript:queja.limpiarFormulario('busqueda');">
                        </div>
                    </div>
                </div>
            </div>

            <!-- SecciOn de resultados -->
            <div id="divResultados" class="form-horizontal" style="display:none;">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="javascript:queja.cambiaSeccion('busqueda');
                                $('#cmbPaginacion').val(1);">                                                    
                    </div>
                    <div class="form-group col-md-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>
                    <div id="divPaginador" class="form-group col-md-2" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="javascript:queja.buscarQuejaInterpuesta()">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="javascript:queja.buscarQuejaInterpuesta()">
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

                <div id="divTablaResultados" class="col-md-12">
                </div>
            </div>

            <!-- Seccion de Acuerdo -->
            <div id="divAcuerdo" class="form-horizontal" style="display:none;">
                <div>
                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="javascript:queja.cambiaSeccion('busqueda');">
                </div>
                <p>&nbsp;</p>
                <div id="divAcuerdoTabla"></div>
                <p>&nbsp;</p>
                <!-- SecciOn de resoluciOn del consejo -->
                <div class="form-group" id="divResolucionConsejo" style="display:none;">
                    <div class="col-md-10 col-md-offset-1 panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseResolucionConsejo" aria-expanded="true" aria-controls="collapseResolucionConsejo">
                                        Resoluci&oacute;n del Consejo - <span id="fechaResolucionConsejo"></span>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseResolucionConsejo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body" id="listaQuejosos">
                                    <p>Respuesta del Consejo</p>
                                    <p id="resolucionConsejo"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>&nbsp;</p>
                </div>
                <!-- /SecciOn de resoluciOn del consejo -->

                <div class="form-group">
                    <div class="col-md-10 col-md-offset-1">
                        <label class="control-label needed" id="">Texto del Acuerdo</label>
                        <p>&nbsp;</p>
                        <script id="txtQueja" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-1 col-md-10">
                        <div class="col-md-5">
                            <input type="button" class="btn btn-primary" id="btnGuardaSubsana" value="Guardar y Subsanar sin presentar al Consejo" onclick="javascript:queja.guardaSubsana()" style="display: block">
                        </div>
                        <div class="col-md-5">
                            <input type="button" class="btn btn-primary" id="btnGuardaConsejo" value="Guardar y presentar al Consejo" onclick="javascript:queja.guardaConsejo();">
                        </div>
                    </div>
                    <br/><br/>
                    <div class="col-md-offset-1 col-md-10">
                        <div class="col-md-2">
                            <input type="button" class="btn btn-primary" id="btnLimpiarAcuerdo" value="Limpiar" onclick="javascript:queja.limpiarFormulario('acuerdoTexto');">
                        </div>
                        <div class="col-md-2">
                            <input type="button" class="btn btn-primary" id="" value="Consultar" onclick="javascript:queja.cambiaSeccion('busqueda');">
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <button class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:queja.visorDocumentos();" style="display: none">Visor</button>
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="javascript:queja.enviar();" style="display: none">Generar PDF</button>
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <button class="btn btn-primary btn-adaptar" id="inputDigitalizar" onclick="javascript:digitalizarPromocionQueja();" style="display: none">Digitalizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- DIVs de mensajes -->
        <div>
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

    </div>
    <script src="sigejupe/quejas/quejaJuez.js" charset="UTF-8" ></script>
    <script>
                                if (editor != undefined) {
                                    editor.destroy();
                                }
                                var editor = null;

                                llenareditor = function (value) {
                                    try {
                                        editor.ready(function () {
                                            setTimeout(function () {
                                                editor.setContent(value, true);
                                            }, 500);
                                        });
                                    } catch (e) {
                                        alert(e);
                                    }
                                };


                                var queja = new quejaJuez();
                                $(function () {
                                    queja.cargaJuzgados(); //carga los Juzgados
                                    $('#fechaInicial').val($('#fechaHoy').val());
                                    $('#fechaFinal').val($('#fechaHoy').val());
                                    editor = UE.getEditor('txtQueja');
                                    editor.ready(function () {
                                        editor.setContent();
                                    });
                                    $('.fecha').datetimepicker({
                                        locale: 'es',
                                        sideBySide: false,
                                        format: "DD/MM/YYYY",
                                        ignoreReadonly: true
                                    });

                                    var desAdscripcion = '<?php echo $_SESSION["desAdscripcion"]; ?>';
                                    var cveUsuarioSistema = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
                                    digitalizarPromocionQueja = function () {
                                        var strl;
                                        strl = "0-" + $("#hiddenIdActuacion").val() + "-PROMOCIONQUEJA-" + desAdscripcion + "-" + $("#txtNumero").val() + "-" + $("#txtAnio").val() + "-27-" + cveUsuarioSistema;
                                        strl += "-<?php echo $subirArchivos; ?>";
                                        strl += "-<?php echo $digitalizacion; ?>";
                                        launchDigitalizador(strl);
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