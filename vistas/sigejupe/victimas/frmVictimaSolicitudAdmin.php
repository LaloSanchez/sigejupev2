<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    if (isset($_POST['idSolicitud'])) {
        $idSolicitudAudiencia = $_POST['idSolicitud'];
    }
    ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Violencia / Trata / Efectos                     
            </h5>
            <input type="hidden" id="hddIdSolicitud" name="hddIdSolicitud" value="<?php echo $idSolicitudAudiencia ?>">
        </div>
        <div class="panel-body">
            <div id="divMensaje"></div>
            <div id="divFormulario" style="display:none;" class="form-horizontal">
                <div class="tab-content tabs-flat">
                    <div class="tabbable tabs-left">
                        <div id="divResultadosRelacion"></div>
                        <ul id="myTab3" class="nav nav-tabs">
                            <li class="tab-sky active ">
                                <a href="#divViolenciaGenero" data-toggle="tab" aria-expanded="false">Violencia de g&eacute;nero</a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divTrataPersonas" data-toggle="tab" aria-expanded="false"> Trata de personas</a>
                            </li>
                            <li class="tab-sky ">
                                <a href="#divEfectosSecuales" data-toggle="tab" aria-expanded="false">Hostigamiento y/o acoso </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!--/////////////////PASO 2////////////////// -->
                            <div class="tab-pane active" id="divViolenciaGenero">
                                <div id="divLlenaDatosViolencia" style="display:none">
                                    <input type="hidden" id="hddIdViolenciaDeGenero" name="hddIdViolenciaDeGenero">
                                    <input type="hidden" id="hddIdEfectoOfendido" name="hddIdEfectoOfendido">

                                    <div class="tab-content tabs-flat">
                                        <div class="tabbable tabs-left">
                                            <!--<input type="hidden" id="hddIdSexual" name="hddIdSexual">-->
                                            <div class="tab-content">
                                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOneEfecto">
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                                   href="#collapseEfecto" aria-expanded="true"
                                                                   aria-controls="collapseEfecto">
                                                                    1.- Efectos de la violencia
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseEfecto" class="panel-collapse collapse in" role="tabpanel"
                                                             aria-labelledby="headingOneEfecto">
                                                            <div class="panel-body">
                                                                <div class="col-lg-3">
                                                                    <label class="control-label" for="cmbEfecto"> Efecto </label>
                                                                    <div>
                                                                        <select id="cmbEfecto" class="form-control" name="cmbEfecto"  onchange="comboEfectosDetalle();">
                                                                            <option value="0">Seleccione una opci&oacute;n</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3" id="divDetalleEfecto">
                                                                    <label class="control-label" for="cmbDetalleEfecto">Detalle Efecto</label>
                                                                    <div>
                                                                        <select id="cmbDetalleEfecto" class="form-control" name="cmbDetalleEfecto" >
                                                                            <option value="0">Seleccione una opci&oacute;n</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-3">
                                                                    <br>
                                                                    <button  class="btn btn-primary" onclick="agregaEfecto();">Guardar</button>
                                                                    <button  class="btn btn-primary" onclick="limpiarEfecto();">Limpiar</button>
                                                                </div> 
                                                                <div class="col-lg-12" id="divResultadosEfectos"></div>
                                                                <div class="col-lg-12"></div> 
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default" id="divGeneralFactor">
                                                            <div class="panel-heading" role="tab" id="headingTwoEfecto">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                                       data-parent="#accordion" href="#collapseFactorSocial" aria-expanded="false"
                                                                       aria-controls="collapseFactorSocial">
                                                                        2.- Factor Sociocultural
                                                                    </a>
                                                                </h4>
    <!--                                                            <input type="hidden" id="hddIdSexualConducta" name="hddIdSexualConducta">
                                                                <input type="hidden" id="hddIdDetalleSexualConducta" name="hddIdDetalleSexualConducta">-->
                                                            </div>
                                                            <div id="collapseFactorSocial" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwoEfecto">
                                                                <div class="panel-body">
                                                                    <div class="col-lg-3">
                                                                        <input type="hidden" id="hddIdViolenciaFactorSocial" name="hddIdViolenciaFactorSocial">
                                                                        <label class="control-label" for="cmbFactorSocial"> Factor sociocultural</label>
                                                                        <div>
                                                                            <select id="cmbFactorSocial" class="form-control" name="cmbFactorSocial" >
                                                                                <option value="0">Seleccione una opci&oacute;n</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <br>
                                                                        <button  class="btn btn-primary" onclick="agregaFactorSocial();">Guardar</button>
                                                                        <button  class="btn btn-primary" onclick="limpiaFactorSocial();">Limpiar</button>
                                                                    </div> 
                                                                    <div class="col-lg-12"></div>
                                                                    <div class="col-lg-6" id="divResultadosFactorSocial"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="panel panel-default" id="divGeneralHomicidio">
                                                            <div class="panel-heading" role="tab" id="headingThreeFactor">
                                                                <h4 class="panel-title">
                                                                    <a class="collapsed" role="button" data-toggle="collapse"
                                                                       data-parent="#accordion" href="#collapseHomicidio" aria-expanded="false"
                                                                       aria-controls="collapseHomicidio">
                                                                        3.- Homicidio doloso contra mujeres

                                                                    </a>
                                                                </h4>
    <!--                                                            <input type="hidden" id="hddIdTestigoSexual" name="hddIdTestigoSexual">-->
                                                            </div>
                                                            <div id="collapseHomicidio" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThreeFactor">
                                                                <div class="panel-body">
                                                                    <div class="col-lg-3">
                                                                        <input type="hidden" id="hddIdViolenciaHomicidioDoloso">
                                                                        <label class="control-label" for="cmbHomicidioDoloso"> Clasificaci&oacute;n del hecho</label>
                                                                        <div>
                                                                            <select id="cmbHomicidioDoloso" class="form-control datoTipoCadena" name="cmbHomicidioDoloso" >
                                                                                <option value="0">Seleccione una opci&oacute;n</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3">
                                                                        <br>
                                                                        <button  class="btn btn-primary" onclick="agregaHomocidios();">Guardar</button>
                                                                        <button  class="btn btn-primary" onclick="limpiarHomicidios();">Limpiar</button>
                                                                    </div> 
                                                                    <div class="col-lg-12"></div>
                                                                    <div class="col-lg-6"  id="divResultadosHomicidios"></div>
                                                                    <div class="col-lg-12"></div>
                                                                    <br><br><br><br>
                                                                </div>
                                                                <div id="divMensajeDatosViolencia"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane" id="divTrataPersonas">
                                <div id="divLlenaInfoTrata" style="display:none;">
                                    <input id="hddIdTrataPersona" name="hddIdTrataPersona" type="hidden" class="form-control mayuscula">
                                    <div class="col-lg-3" id="divPaisOrigen">
                                        <label class="control-label" for="cmbPaisOrigen">Pa&iacute;s Origen</label>
                                        <div>
                                            <select id="cmbPaisOrigen" class="form-control" name="cmbPaisOrigen" onchange="comboEstadoOrigen();" >
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divEstadoOrigen">
                                        <label class="control-label" for="cmbEstadoOrigen">Estado Origen</label>
                                        <div>
                                            <select id="cmbEstadoOrigen" class="form-control mayuscula" name="cmbEstadoOrigen" onchange="comboMunicipioOrigen();" >
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                            <input id="txtestadoOrigen" name="txtestadoOrigen " type="text" class="form-control mayuscula" style="display: none">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divMunicipioOrigen">
                                        <label class="control-label" for="cmbMunicipioOrigen">Municipio Origen</label>
                                        <div>
                                            <select id="cmbMunicipioOrigen" class="form-control" name="cmbMunicipioOrigen" >
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                            <input id="txtmunicipioOrigen" name="txtmunicipioOrigen" type="text" class="form-control mayuscula" style="display: none">
                                        </div>
                                    </div>
                                    <div class="col-lg-12"></div>
                                    <div class="col-lg-3" id="divPaisDestino">
                                        <label class="control-label" for="cmbPaisDestino">Pa&iacute;s Destino</label>
                                        <div>
                                            <select id="cmbPaisDestino" class="form-control" name="cmbPaisDestino" onchange="comboEstadoDestino();" >
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divEstadoDestino">
                                        <label class="control-label" for="cmbEstadoDestino">Estado Destino</label>
                                        <div>
                                            <select id="cmbEstadoDestino" class="form-control mayuscula" name="cmbEstadoDestino" onchange="comboMunicipioDestino();" >
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                            <input id="txtestadoDestino" name="txtestadoDestino " type="text" class="form-control mayuscula" style="display: none">
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divMunicipioDestino">
                                        <label class="control-label" for="cmbMunicipioDestino">Municipio Destino</label>
                                        <div>
                                            <select id="cmbMunicipioDestino" class="form-control" name="cmbMunicipioDestino" >
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                            <input id="txtmunicipioDestino" name="txtmunicipioDestino" type="text" class="form-control mayuscula" style="display: none">
                                        </div>
                                    </div>
                                    <div class="col-lg-12"></div>
                                    <div class="col-lg-3" id="divTipoTrata">
                                        <label class="control-label" for="cmbTipoTrata">Tipo de trata</label>
                                        <div>
                                            <select id="cmbTipoTrata" class="form-control" name="cmbTipoTrata" >
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3" id="divTransportacion">
                                        <label class="control-label" for="cmbTransportacion">Transportaci&oacute;n</label>
                                        <div>
                                            <select id="cmbTransportacion" class="form-control" name="cmbTransportacion" >
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <br>
                                        <button  class="btn btn-primary" onclick="guardarTrataDePersonas()">Guardar</button>
                                        <button  class="btn btn-primary" onclick="limpiarTrata()" >Limpiar</button>
                                    </div> 
                                    <div class="form-group col-lg-12">
                                        <div class="col-lg-12" id="divResultadosTrata"></div>
                                    </div>
                                </div>
                                <div id="divMensajeTrata"></div>
                            </div>
                            <div class="tab-pane" id="divEfectosSecuales">
                                <div id="divLlenaEfectos" style="display:none;">
                                    <div id="divFormulario" class="form-horizontal">
                                        <div class="tab-content tabs-flat">
                                            <div class="tabbable tabs-left">
                                                <input type="hidden" id="hddIdSexual" name="hddIdSexual">
                                                <div class="tab-content">
                                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading" role="tab" id="headingOne">
                                                                <h4 class="panel-title">
                                                                    <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                                       href="#collapseGeneral" aria-expanded="true"
                                                                       aria-controls="collapseGeneral">
                                                                        1.- General
                                                                    </a>
                                                                </h4>
                                                            </div>
                                                            <div id="collapseGeneral" class="panel-collapse collapse in" role="tabpanel"
                                                                 aria-labelledby="headingOne">
                                                                <div class="panel-body">
                                                                    <div class="col-lg-3" id="divModalidad">
                                                                        <label class="control-label" for="cmbModalidad">Modalidad</label>
                                                                        <div>
                                                                            <select id="cmbModalidad" class="form-control" name="cmbModalidad" >
                                                                                <option value="0">Seleccione una opci&oacute;n</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3" id="divAmbito">
                                                                        <label class="control-label" for="cmbAmbito">&Aacute;mbito</label>
                                                                        <div>
                                                                            <select id="cmbAmbito" class="form-control" name="cmbAmbito" >
                                                                                <option value="0">Seleccione una opci&oacute;n</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <br>
                                                                        <button  class="btn btn-primary" onclick="agregaGeneral()">Guardar</button>
                                                                        <button  class="btn btn-primary" onclick="limpiarGeneralSexual()" >Limpiar</button>
                                                                        <br><br>
                                                                    </div> 
                                                                    <div class="col-lg-6" id="divResultadosGeneralSexuales"></div> 
                                                                    <div class="col-lg-12"></div> 
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                                    <h4 class="panel-title">
                                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                                           data-parent="#accordion" href="#collapseConducta" aria-expanded="false"
                                                                           aria-controls="collapseConducta">
                                                                            2.- Conducta s-exuales
                                                                        </a>
                                                                    </h4>
                                                                    <input type="hidden" id="hddIdSexualConducta" name="hddIdSexualConducta">
                                                                    <input type="hidden" id="hddIdDetalleSexualConducta" name="hddIdDetalleSexualConducta">
                                                                </div>
                                                                <div id="collapseConducta" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingTwo">
                                                                    <div class="panel-body">
                                                                        <div class="col-lg-3" id="divCondcuta">
                                                                            <label class="control-label" for="cmbCondcuta">Conducta</label>
                                                                            <div>
                                                                                <select id="cmbCondcuta" class="form-control" name="cmbCondcuta"  onchange="comboDetalleConducta();">
                                                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3" id="divDetalleConducta">
                                                                            <label class="control-label" for="cmbDetalleConducta">Detalle de la conducta</label>
                                                                            <div>
                                                                                <select id="cmbDetalleConducta" class="form-control" name="cmbDetalleConducta" >
                                                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <br>
                                                                            <button  class="btn btn-primary" onclick="agregaConducta()">Guardar</button>
                                                                            <button  class="btn btn-primary" onclick="limpiarConducta()" >Limpiar</button>
                                                                        </div> 
                                                                        <div class="col-lg-12"></div>
                                                                        <div class="col-lg-6" id="divResultadosConducta"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel panel-default">
                                                                <div class="panel-heading" role="tab" id="headingThree">
                                                                    <h4 class="panel-title">
                                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                                           data-parent="#accordion" href="#collapsetestigos" aria-expanded="false"
                                                                           aria-controls="collapsetestigos">
                                                                            3.- Testigos

                                                                        </a>
                                                                    </h4>
                                                                    <input type="hidden" id="hddIdTestigoSexual" name="hddIdTestigoSexual">
                                                                </div>
                                                                <div id="collapsetestigos" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingThree">
                                                                    <div class="panel-body">
                                                                        <div class="col-lg-3" id="divNombreImputado">
                                                                            <label class="control-label" for="txtNombreTestigo">Nombre</label>
                                                                            <div>
                                                                                <input type="text" class="form-control mayuscula" id="txtNombreTestigo" name="txtNombreTestigo">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3" id="divPaternoImputado">
                                                                            <label class="control-label" for="txtPaternoTestigo">Paterno</label>
                                                                            <div>
                                                                                <input type="text" class="form-control mayuscula" id="txtPaternoTestigo" name="txtPaternoTestigo">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3" id="divMaternoImputado">
                                                                            <label class="control-label" for="txtMaternoTestigo">Materno</label>
                                                                            <div>
                                                                                <input type="text" class="form-control mayuscula" id="txtMaternoTestigo" name="txtMaternoTestigo">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-3" id="divGenero">
                                                                            <label class="control-label" for="cmbGenero">G&eacute;nero</label>
                                                                            <div>
                                                                                <select id="cmbGenero" class="form-control" name="cmbGenero" >
                                                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <button  class="btn btn-primary" onclick="agregaTestigos()">Guardar</button>
                                                                            <button  class="btn btn-primary" onclick="limpiarTestigos()" >Limpiar</button>
                                                                        </div>
                                                                        <div class="col-lg-6" id="divResultadosTestigos"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="divMensajeEfectos"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-lg-12"></div> 
                    <br><br>
                    <div class="form-group" >
                        <div id="divAlertWarningViolencia" class="alert alert-warning alert-dismissable" style="display:none;">                    
                            <strong>Advertencia!</strong> Mensaje
                        </div>
                        <div id="divAlertSuccesViolencia" class="alert alert-success alert-dismissable" style="display:none;">

                            <strong>Correcto!</strong> Mensaje
                        </div>
                        <div id="divAlertDagerViolencia" class="alert alert-danger alert-dismissable" style="display:none;">

                            <strong>Error!</strong> Mensaje
                        </div>
                        <div id="divAlertWarningViolencia" class="alert alert-info alert-dismissable" style="display:none;">

                            <strong>Informaci&oacute;n!</strong> Mensaje
                        </div>
                    </div>    
                </div>
            </div>
            <script type="text/javascript">

                //COMBOS
                comboEfectos = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/efectos/EfectosFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbEfecto').empty();
                                $('#cmbEfecto').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbEfecto').append('<option value="' + object.cveEfecto + '">' + object.desEfecto + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar ceresos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de efectos:\n\n" + otroobj);
                        }
                    });
                };
                comboEfectosDetalle = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/detallesefectos/DetallesefectosFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", cveEfecto: $('#cmbEfecto').val(), obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbDetalleEfecto').empty();
                                $('#cmbDetalleEfecto').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbDetalleEfecto').append('<option value="' + object.cveDetalleEfecto + '">' + object.desDetalleEfecto + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar ceresos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de detalle efectos:\n\n" + otroobj);
                        }
                    });
                };
                comboFactoresCulturales = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/factoresculturales/FactoresculturalesFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbFactorSocial').empty();
                                $('#cmbFactorSocial').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbFactorSocial').append('<option value="' + object.cveFactorCultural + '">' + object.desFactorCultural + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar ceresos:" + e);
                            }
                        }, error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de factor social:\n\n" + otroobj);
                        }
                    });
                };
                comboHomicidioDoloso = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/homicidiosdolosos/HomicidiosdolososFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbHomicidioDoloso').empty();
                                $('#cmbHomicidioDoloso').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbHomicidioDoloso').append('<option value="' + object.cveHomicidioDoloso + '">' + object.desHomicidioDoloso + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar ceresos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de factor social:\n\n" + otroobj);
                        }
                    });
                };
                comboPaisOrigen = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/paises/PaisesFacade.Class.php",
                        async: false, dataType: "json",
                        data: {accion: "consultar", obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbPaisOrigen').empty();
                                $('#cmbPaisOrigen').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbPaisOrigen').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
                                    });
                                    $("#cmbPaisOrigen").val(119).trigger('change');
                                }
                            } catch (e) {
                                alert("Error al cargar Pais Imputados:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de pais imputados:\n\n" + otroobj);
                        }
                    });
                };
                comboEstadoOrigen = function () {
                    $('#cmbEstadoOrigen').empty();
                    $('#cmbEstadoOrigen').append('<option value="0">Seleccione una opci\u00f3n</option>');
                    $('#cmbMunicipioOrigen').empty();
                    $('#cmbMunicipioOrigen').append('<option value="0">Seleccione una opci\u00f3n</option>');
                    $("#txtestadoOrigen").val("");
                    $("#txtmunicipioOrigen").val("");
                    if ($('#cmbPaisOrigen').val() == "119") { //Mexico                 $("#cmbEstadoOrigen").show();
                        $("#cmbEstadoOrigen").show();
                        $("#cmbMunicipioOrigen").show();
                        $("#txtestadoOrigen").hide();
                        $("#txtmunicipioOrigen").hide();
                        $.ajax({
                            type: "POST", global: false,
                            url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                            async: false,
                            dataType: "json",
                            data: {accion: "consultar", obligaPermiso: "false", cvePais: $('#cmbPaisOrigen').val()},
                            beforeSend: function (objeto) {
                            },
                            success: function (datos) {
                                try {
                                    $('#cmbEstadoOrigen').empty();
                                    $('#cmbEstadoOrigen').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                    if (datos.totalCount > 0) {
                                        $.each(datos.data, function (count, object) {
                                            if (object.cveEstado != "97") {
                                                $('#cmbEstadoOrigen').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                                            }
                                        });
                                        $('#cmbEstadoOrigen').val(15).trigger('change');
                                    }
                                } catch (e) {
                                    alert("Error al cargar Estado Imputados:" + e);
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion de Estado imputados:\n\n" + otroobj);
                            }
                        });
                    } else {
                        $("#cmbEstadoOrigen").hide();
                        $("#cmbMunicipioOrigen").hide();
                        $("#txtestadoOrigen").show();
                        $("#txtmunicipioOrigen").show();
                    }
                };
                comboMunicipioOrigen = function () {
                    if ($('#cmbEstadoOrigen').val() != 0) {
                        $.ajax({
                            type: "POST", global: false,
                            url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                            async: false,
                            dataType: "json",
                            data: {accion: "consultar", obligaPermiso: "false", cveEstado: $('#cmbEstadoOrigen').val()},
                            beforeSend: function (objeto) {
                            },
                            success: function (datos) {
                                try {
                                    $('#cmbMunicipioOrigen').empty();
                                    $('#cmbMunicipioOrigen').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                    if (datos.totalCount > 0) {
                                        $.each(datos.data, function (count, object) {
                                            $('#cmbMunicipioOrigen').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
                                        });
                                    }
                                } catch (e) {
                                    alert("Error al cargar Municipio Nacimiento Imputados:" + e);
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion de Municipio Nacimiento imputados:\n\n" + otroobj);
                            }
                        });
                    } else {
                        $('#cmbMunicipioOrigen').empty();
                        $('#cmbMunicipioOrigen').append('<option value="0">Seleccione una opci\u00f3n</option>');
                    }
                };
                comboPaisDestino = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/paises/PaisesFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbPaisDestino').empty();
                                $('#cmbPaisDestino').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbPaisDestino').append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
                                    });
                                    $("#cmbPaisDestino").val(119).trigger('change');
                                }
                            } catch (e) {
                                alert("Error al cargar Pais Imputados:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de pais imputados:\n\n" + otroobj);
                        }
                    });
                };
                comboEstadoDestino = function () {
                    $('#cmbEstadoDestino').empty();
                    $('#cmbEstadoDestino').append('<option value="0">Seleccione una opci\u00f3n</option>');
                    $('#cmbMunicipioDestino').empty();
                    $('#cmbMunicipioDestino').append('<option value="0">Seleccione una opci\u00f3n</option>');
                    $("#txtestadoDestino").val("");
                    $("#txtmunicipioDestino").val("");
                    if ($('#cmbPaisDestino').val() == "119") { //Mexico
                        $("#cmbEstadoDestino").show();
                        $("#cmbMunicipioDestino").show();
                        $("#txtestadoDestino").hide();
                        $("#txtmunicipioDestino").hide();
                        $.ajax({
                            type: "POST", global: false,
                            url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                            async: false,
                            dataType: "json",
                            data: {accion: "consultar", obligaPermiso: "false", cvePais: $('#cmbPaisDestino').val()},
                            beforeSend: function (objeto) {
                            },
                            success: function (datos) {
                                try {
                                    $('#cmbEstadoDestino').empty();
                                    $('#cmbEstadoDestino').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                    if (datos.totalCount > 0) {
                                        $.each(datos.data, function (count, object) {
                                            if (object.cveEstado != "97") {
                                                $('#cmbEstadoDestino').append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                                            }
                                        });
                                        $('#cmbEstadoDestino').val(15).trigger('change');
                                    }
                                } catch (e) {
                                    alert("Error al cargar Estado Imputados:" + e);
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion de Estado imputados:\n\n" + otroobj);
                            }
                        });
                    } else {
                        $("#cmbEstadoDestino").hide();
                        $("#cmbMunicipioDestino").hide();
                        $("#txtestadoDestino").show();
                        $("#txtmunicipioDestino").show();
                    }
                };
                comboMunicipioDestino = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", obligaPermiso: "false", cveEstado: $('#cmbEstadoDestino').val()},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbMunicipioDestino').empty();
                                $('#cmbMunicipioDestino').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbMunicipioDestino').append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar Municipio Nacimiento Imputados:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Municipio Nacimiento imputados:\n\n" + otroobj);
                        }
                    });
                };
                comboTipoTrata = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/tipostratas/TipostratasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbTipoTrata').empty();
                                $('#cmbTipoTrata').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbTipoTrata').append('<option value="' + object.cveTipoTrata + '">' + object.desTipoTrata + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar ceresos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de efectos:\n\n" + otroobj);
                        }
                    });
                };
                comboTransportacion = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/trasportaciones/TrasportacionesFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbTransportacion').empty();
                                $('#cmbTransportacion').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbTransportacion').append('<option value="' + object.cveTrasportacion + '">' + object.desTrasportacion + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar ceresos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de efectos:\n\n" + otroobj);
                        }
                    });
                };
                comboModalidadAcoso = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/modalidadesacosos/ModalidadesacososFacade.Class.php",
                        async: false, dataType: "json", data: {accion: "consultar", obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbModalidad').empty();
                                $('#cmbModalidad').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbModalidad').append('<option value="' + object.cveModalidadAcoso + '">' + object.desModalidadAcoso + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar ceresos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de efectos:\n\n" + otroobj);
                        }
                    });
                };
                comboAmbitoAcoso = function () {
                    $.ajax({
                        type: "POST", global: false, url: "../fachadas/sigejupe/ambitosacosos/AmbitosacososFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbAmbito').empty();
                                $('#cmbAmbito').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbAmbito').append('<option value="' + object.cveAmbitoAcoso + '">' + object.desAmbitoAcoso + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar ceresos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de efectos:\n\n" + otroobj);
                        }
                    });
                };
                comboConducta = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/conductas/ConductasFacade.Class.php", async: false, dataType: "json",
                        data: {accion: "consultar", obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbCondcuta').empty();
                                $('#cmbCondcuta').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbCondcuta').append('<option value="' + object.cveConducta + '">' + object.desConducta + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar ceresos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de efectos:\n\n" + otroobj);
                        }
                    });
                };
                comboDetalleConducta = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/detallesconductas/DetallesconductasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", cveConducta: $('#cmbCondcuta').val(), obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbDetalleConducta').empty();
                                $('#cmbDetalleConducta').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbDetalleConducta').append('<option value="' + object.cveDetalleConducta + '">' + object.desDetalleConducta + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar ceresos:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de efectos:\n\n" + otroobj);
                        }
                    });
                };
                comboGenero = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/generos/GenerosFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultar", obligaPermiso: "false"},
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            try {
                                $('#cmbGenero').empty();
                                $('#cmbGenero').append('<option value="0">Seleccione una opci\u00f3n</option>');
                                if (datos.totalCount > 0) {
                                    $.each(datos.data, function (count, object) {
                                        $('#cmbGenero').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
                                    });
                                }
                            } catch (e) {
                                alert("Error al cargar Genero Imputados:" + e);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Genero imputados:\n\n" + otroobj);
                        }
                    });
                };

                seleccionaRelacion = function (id) {
                    $('#divResultadosFactorSocial').html('');
                    $('#divResultadosHomicidios').html('');
                    consultarEfecto();
                    consultarGeneralSecual();
                    consultarTrata();
                    validaOpcionesRelacion(id);
                };
                validaOpcionesRelacion = function (id) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultarRelacionPaso6",
                            idImpOfeDelSolicitud: id,
                            activo: 'S'
                        },
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            if (datos.status == 'ok') {
                                if (datos.data[0].dataOfendidos[0].cveVictimaDeTrata == "1") {
                                    $('#divLlenaInfoTrata').show("");
                                    $('#divMensajeTrata').hide("");
                                    $('#divMensajeTrata').html("");
                                } else {
                                    $('#divMensajeTrata').show("");
                                    $('#divMensajeTrata').html("<center>El ofendido no fue victima de trata de personas</center>");
                                    $('#divLlenaInfoTrata').hide("");
                                }
                                if (datos.data[0].dataOfendidos[0].cveVictimaDeViolenciaDeGenero == "1") {
                                    $('#divLlenaDatosViolencia').show("");
                                    $('#divMensajeDatosViolencia').hide("");
                                    $('#divMensajeDatosViolencia').html("");
                                    if (datos.data[0].dataDelitos[0].cveDelito == "128") {
                                        $('#divGeneralFactor').show("");
                                        $('#divGeneralHomicidio').show("");

                                    } else {
                                        $('#divGeneralFactor').hide("");
                                        $('#divGeneralHomicidio').hide("");
                                    }

                                } else {
                                    $('#divLlenaDatosViolencia').hide("");
                                    $('#divMensajeDatosViolencia').show("");
                                    $('#divMensajeDatosViolencia').html("<center>El ofendido no fue victima de violencia de genero</center>");
                                }
                                if (datos.data[0].dataOfendidos[0].cveVictimaDeAcoso == "1") {
                                    $('#divLlenaEfectos').show("");
                                    $('#divMensajeDatosViolencia').hide("");
                                    $('#divMensajeDatosViolencia').html("");
                                } else {
                                    $('#divLlenaEfectos').hide("");
                                    $('#divMensajeEfectos').show("");
                                    $('#divMensajeEfectos').html("<center>El ofendido no fue victima acoso s-exual</center>");
                                }
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                impofedelsolicitudes = function () {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/impofedelsolicitudes/ImpofedelsolicitudesFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultarRelacionPaso6",
                            idSolicitudAudiencia: $("#hddIdSolicitud").val(),
                            activo: 'S'
                        },
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            $('#divResultadosGeneral').html("");
                            if (datos.status == 'ok') {
                                $("#divFormulario").show("");
                                $("#divMensaje").hide("");
                                var table = "";
                                table += '<table id="tblRelacion" border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                                table += '<tr class="trGridAgregaTabla">';
                                table += '<th width="40%">Imputado</th>';
                                table += '<th width="40%" >Ofendido</th>';
                                table += '<th width="40%" >Delito</th>';
                                table += '<th width="10%">Seleccionar</td></tr>';
                                for (var i = 0; i < datos.data.length; i++) {
                                    table += "<tr class='trSeleccion' data-relacion='" + datos.data[i].idImpOfeDelSolicitud + "'>";
                                    if (datos.data[i].dataImputados[0].cveTipoPersona == 1) {
                                        table += "<td class='editarRegistro'>" + datos.data[i].dataImputados[0].nombreImputado + "</td>";
                                    } else {
                                        table += "<td class='editarRegistro'>" + datos.data[i].dataImputados[0].nombreMoral + "</td>";
                                    }
                                    if (datos.data[i].dataOfendidos[0].cveTipoPersona == 1) {
                                        table += "<td class='editarRegistro'>" + datos.data[i].dataOfendidos[0].nombreOfendido + "</td>";
                                    } else {
                                        table += "<td class='editarRegistro'>" + datos.data[i].dataOfendidos[0].nombreMoral + "</td>";
                                    }
                                    table += "<td class='editarRegistro'>" + datos.data[i].dataDelitos[0].delito + "</td>";
                                    table += "<td><input type='radio' id='chbxRalacion' name='chbxRalacion' value='" + datos.data[i].idImpOfeDelSolicitud + "' onclick='seleccionaRelacion(" + datos.data[i].idImpOfeDelSolicitud + ");'></td>";
                                    table += "</tr>";
                                }
                                table += '</table>';
                                $('#divResultadosRelacion').html(table);
                            } else {
                                $("#divFormulario").hide("");
                                $("#divMensaje").show("");
                                $("#divMensaje").html("<center>No se encontraron ofendidos con violencia de g\u00e9nero, trata de personas o delito de acoso u hostigamiento.</center>");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };

                limpiarGeneralViolencia = function () {
                    limpiarEfecto();
                    limpiaFactorSocial();
                    limpiarHomicidios();
                    limpiarTrata();
                    limpiarGeneralSexual();
                    limpiarConducta();
                    limpiarTestigos();
                    $('#divResultadosEfectos').html("");
                    $('#divResultadosFactorSocial').html("");
                    $('#divResultadosHomicidios').html("");
                    $('#divResultadosTrata').html("");
                    $('#divResultadosGeneralSexuales').html("");
                    $('#divResultadosConducta').html("");
                    $('#divResultadosTestigos').html("");
                };
                ///////////////////EFECTOS /////////////////////////////////////////////
                validaAEfectos = function () {
                    var error = true;
                    var mensaje = "";
                    if ($('#chbxRalacion').val() == "" || $('#chbxRalacion').val() == "0") {
                        mensaje += "*Seleccione una relacion\n";
                        error = false;
                    }
                    if ($('#cmbEfecto').val() == "" || $('#cmbEfecto').val() == "0") {
                        mensaje += "*Seleccione un efecto\n";
                        error = false;
                    }
                    if ($('#cmbDetalleEfecto').val() == "" || $('#cmbDetalleEfecto').val() == "0") {
                        mensaje += "*Seleccione un detalle\n";
                        error = false;
                    }
                    if (!error) {
                        alert(mensaje);
                    }
                    return error;
                };
                agregaEfecto = function () {
                    var error = true;
                    if (validaAEfectos()) {
                        $.ajax({
                            type: "POST", global: false,
                            url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                            async: false,
                            dataType: "json",
                            data: {accion: "guardaEfectosViolencia",
                                idViolenciaDeGenero: $('#hddIdViolenciaDeGenero').val(),
                                idEfectoOfendido: $('#hddIdEfectoOfendido').val(),
                                cveEfecto: $('#cmbEfecto').val(),
                                cveDetalleEfecto: $('#cmbDetalleEfecto').val(),
                                idImpOfeDelSolicitud: $('input:radio[name=chbxRalacion]:checked').val(),
                                activo: 'S'
                            },
                            beforeSend: function (objeto) {
                            },
                            success: function (datos) {
                                if (datos.status == 'ok') {
                                    $("#divAlertSuccesViolencia").html("");
                                    $("#divAlertSuccesViolencia").html("Registro dado de alta exitosamente");
                                    $("#divAlertSuccesViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertSuccesViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertSuccesViolencia");
                                    limpiarEfecto();
                                    consultarEfecto();
                                } else {
                                    $("#divAlertWarningViolencia").html("");
                                    $("#divAlertWarningViolencia").html(datos.mnj);
                                    $("#divAlertWarningViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertWarningViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertWarningViolencia");
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                            }
                        });
                    } else {
                        error = false;
                    }
                    return error;
                };
                consultarEfecto = function () {
                    limpiarEfecto();
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaEfectos",
                            idImpOfeDelSolicitud: $('input:radio[name=chbxRalacion]:checked').val(),
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            $('#divResultadosEfectos').html("");
                            if (datos.status == 'ok') {
                                var table = "";
                                table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                                table += '<tr class="trGridAgregaTabla">';
                                table += '<th width="10%" >Seleccionar</th>';
                                table += '<th width="40%" >Efecto</th>';
                                table += '<th width="40%" >Detalle del efecto</th>';
                                table += '<th width="10%" >Eliminar</th>';
                                for (var i = 0; i < datos.totalCount; i++) {
                                    for (var x = 0; x < datos.data[i].dataDetalle.length; x++) {
                                        table += '<tr class="trSeleccion" id="' + datos.data[i].idViolenciaDeGenero + '">';
                                        table += "<td><input type='radio' id='chbxEfecto' name='chbxEfecto' value='" + datos.data[i].idViolenciaDeGenero + "' onclick='seleccionaEfecto(" + datos.data[i].idViolenciaDeGenero + "," + datos.data[i].dataDetalle[x].idEfectoOfendido + ");'></td>";
                                        table += '<td>' + datos.data[i].desEfecto + '</td>';
                                        table += '<td>' + datos.data[i].dataDetalle[x].desDetalleEfecto + '</td>';
                                        table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminaEfecto(" + datos.data[i].idViolenciaDeGenero + "," + datos.data[i].dataDetalle[x].idEfectoOfendido + ")'></center></td></tr>";

                                    }
                                }
                                table += '</table>';
                                $('#divResultadosEfectos').html(table);
    //                            $("input[name=chbxEfecto][value='" + datos.data[0].idViolenciaDeGenero + "']").prop("checked", true);
    //                            consultarFactorSocial();
    //                            consultarHomicidios();
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                seleccionaEfecto = function (id, idDet) {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaEfectos",
                            idViolenciaDeGenero: id,
                            idEfectoOfendido: idDet,
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            limpiaFactorSocial();
                            $("#divResultadosFactorSocial").html("");
                            limpiarHomicidios();
                            $("#divResultadosHomicidios").html("");
                            if (datos.status == 'ok') {
                                $('#hddIdViolenciaDeGenero').val(datos.data[0].idViolenciaDeGenero);
                                $('#hddIdEfectoOfendido').val(datos.data[0].dataDetalle[0].idEfectoOfendido);
                                $('#cmbEfecto').val(datos.data[0].cveEfecto);
                                comboEfectosDetalle()
                                $('#cmbDetalleEfecto').val(datos.data[0].dataDetalle[0].cveDetalleEfecto);
                                consultarFactorSocial();
                                consultarHomicidios();

                            } else {
                                $("#divAlertWarningViolencia").html("");
                                $("#divAlertWarningViolencia").html(datos.mnj);
                                $("#divAlertWarningViolencia").show("");
                                $('html, body').animate({
                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                }, 1000);
                                setTimeAlert("divAlertWarningViolencia");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                eliminaEfecto = function (id, idDet) {
                    bootbox.dialog({
                        message: "\u00bf Desea eliminar el registro?",
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {

                                    $.ajax({
                                        type: "POST", global: false,
                                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                                        async: false,
                                        dataType: "json",
                                        data: {accion: "eliminarEfecto",
                                            idViolenciaDeGenero: id,
                                            idEfectoOfendido: idDet,
                                        },
                                        beforeSend: function (datos) {

                                        },
                                        success: function (datos) {
                                            if (datos.status == 'ok') {
                                                $("#divAlertSuccesViolencia").html("");
                                                $("#divAlertSuccesViolencia").html("Se elimino de forma correcta");
                                                $("#divAlertSuccesViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertSuccesViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertSuccesViolencia");
                                                limpiarEfecto();
                                                limpiaFactorSocial();
                                                $("#divResultadosFactorSocial").html("");
                                                limpiarHomicidios();
                                                $("#divResultadosHomicidios").html("");
                                                consultarEfecto();
                                            } else {
                                                $("#divAlertWarningViolencia").html("");
                                                $("#divAlertWarningViolencia").html(datos.mnj);
                                                $("#divAlertWarningViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertWarningViolencia");
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
                };
                limpiarEfecto = function () {
                    $("#hddIdViolenciaDeGenero").val("");
                    $("#hddIdEfectoOfendido").val("");
                    $("#cmbEfecto").val(0);
                    $("#cmbDetalleEfecto").val(0);
                    $('input:radio[name=chbxEfecto]').attr('checked', false);
                    limpiaFactorSocial();
                    $("#divResultadosFactorSocial").html("");
                    limpiarHomicidios();
                    $("#divResultadosHomicidios").html("");

                };
                /////////////// FIN EFECTOS///////////////////////////////////////
                /////////////// INICIO FACTOR CULTURAL///////////////////////////////////////
                validaFactorSocial = function () {
                    var error = true;
                    var mensaje = "";
                    if ($('#cmbFactorSocial').val() == "" || $('#cmbFactorSocial').val() == "0") {
                        mensaje += "*Seleccione un factor social\n";
                        error = false;
                    }
                    if ($('#hddIdViolenciaDeGenero').val() == "" || $('#hddIdViolenciaDeGenero').val() == "0") {
                        mensaje += "*Seleccione un efecto\n";
                        error = false;
                    }
                    if (!error) {
                        alert(mensaje);
                    }
                    return error;
                };
                agregaFactorSocial = function () {
                    var error = true;
                    if (validaFactorSocial()) {
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                            async: false,
                            dataType: "json",
                            data: {accion: "guardaFactorSocial",
                                idViolenciaDeGenero: $('#hddIdViolenciaDeGenero').val(),
                                idViolenciaFactorSocial: $('#hddIdViolenciaFactorSocial').val(),
                                cveFactorCultural: $('#cmbFactorSocial').val(),
                                activo: 'S'
                            },
                            beforeSend: function (objeto) {
                            },
                            success: function (datos) {
                                if (datos.status == 'ok') {
                                    $("#divAlertSuccesViolencia").html("");
                                    $("#divAlertSuccesViolencia").html("Registro dado de alta exitosamente");
                                    $("#divAlertSuccesViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertSuccesViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertSuccesViolencia");
                                    limpiaFactorSocial();
                                    consultarFactorSocial();
                                } else {
                                    $("#divAlertWarningViolencia").html("");
                                    $("#divAlertWarningViolencia").html(datos.mnj);
                                    $("#divAlertWarningViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertWarningViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertWarningViolencia");
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                            }
                        });
                    } else {
                        error = false;
                    }
                    return error;
                };
                consultarFactorSocial = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaFactorSocial",
                            idViolenciaDeGenero: $('#hddIdViolenciaDeGenero').val(),
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            $('#divResultadosFactorSocial').html("");
                            if (datos.status == 'ok') {
                                var table = "";
                                table += '<table border="1" align="center"  width="50%"  class="table table-bordered tblGridAgrega">';
                                table += '<tr class="trGridAgregaTabla">';
                                table += '<th>Factor social</th>';
                                table += '<th>Eliminar</th>';
                                for (var i = 0; i < datos.totalCount; i++) {
                                    table += '<tr class="trSeleccion" id="' + datos.data[i].idViolenciaFactorSocial + '">';
                                    table += '<td onclick = "seleccionaFactorSocial(' + datos.data[i].idViolenciaFactorSocial + ')">' + datos.data[i].desFactorCultural + '</td>';
                                    table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminaFactorSocial(" + datos.data[i].idViolenciaFactorSocial + ")'></center></td></tr>";
                                }
                                table += '</table>';
                                $('#divResultadosFactorSocial').html(table);
                            } else {
                                $('#divResultadosFactorSocial').html("");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                seleccionaFactorSocial = function (id) {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaFactorSocial",
                            idViolenciaFactorSocial: id,
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            if (datos.status == 'ok') {
                                $("#hddIdViolenciaFactorSocial").val(datos.data[0].idViolenciaFactorSocial);
                                $("#cmbFactorSocial").val(datos.data[0].cveFactorCultural);
                            } else {
                                $("#divAlertWarningViolencia").html("");
                                $("#divAlertWarningViolencia").html(datos.mnj);
                                $("#divAlertWarningViolencia").show("");
                                $('html, body').animate({
                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                }, 1000);
                                setTimeAlert("divAlertWarningViolencia");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                eliminaFactorSocial = function (id) {
                    bootbox.dialog({
                        message: "\u00bf Desea eliminar el registro?",
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {
                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                                        async: false,
                                        dataType: "json",
                                        data: {accion: "eliminarFactorSocial",
                                            idViolenciaFactorSocial: id
                                        },
                                        beforeSend: function (datos) {
                                        },
                                        success: function (datos) {
                                            if (datos.status == 'ok') {
                                                $("#divAlertSuccesViolencia").html("");
                                                $("#divAlertSuccesViolencia").html("Se elimino de forma correcta");
                                                $("#divAlertSuccesViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertSuccesViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertSuccesViolencia");
                                                limpiaFactorSocial();
                                                consultarFactorSocial();
                                            } else {
                                                $("#divAlertWarningViolencia").html("");
                                                $("#divAlertWarningViolencia").html(datos.mnj);
                                                $("#divAlertWarningViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertWarningViolencia");
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
                };
                limpiaFactorSocial = function () {
                    $('#hddIdViolenciaFactorSocial').val("");
                    $('#cmbFactorSocial').val(0);
                };
                /////////////// FIN FACTOR CULTURAL///////////////////////////////////////
                /////////////// INICIO HOMICIDIO DOLOSO///////////////////////////////////////

                validaHomicidios = function () {
                    var error = true;
                    var mensaje = "";
                    if ($('#cmbHomicidioDoloso').val() == "" || $('#cmbHomicidioDoloso').val() == "0") {
                        mensaje += "*Seleccione un homicidio doloso\n";
                        error = false;
                    }
                    if ($('#hddIdViolenciaDeGenero').val() == "" || $('#hddIdViolenciaDeGenero').val() == "0") {
                        mensaje += "*Seleccione un efecto\n";
                        error = false;
                    }
                    if (!error) {
                        alert(mensaje);
                    }
                    return error;
                };
                agregaHomocidios = function () {
                    var error = true;
                    if (validaHomicidios()) {
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                            async: false,
                            dataType: "json",
                            data: {accion: "guardaHomicidios",
                                idViolenciaHomicidioDoloso: $('#hddIdViolenciaHomicidioDoloso').val(),
                                idViolenciaDeGenero: $('#hddIdViolenciaDeGenero').val(),
                                cveHomicidioDoloso: $('#cmbHomicidioDoloso').val(),
                                activo: 'S'
                            },
                            beforeSend: function (objeto) {
                            },
                            success: function (datos) {
                                if (datos.status == 'ok') {
                                    $("#divAlertSuccesViolencia").html("");
                                    $("#divAlertSuccesViolencia").html("Registro dado de alta exitosamente");
                                    $("#divAlertSuccesViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertSuccesViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertSuccesViolencia");
                                    limpiarHomicidios();
                                    consultarHomicidios();
                                } else {
                                    $("#divAlertWarningViolencia").html("");
                                    $("#divAlertWarningViolencia").html(datos.mnj);
                                    $("#divAlertWarningViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertWarningViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertWarningViolencia");
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                            }
                        });
                    } else {
                        error = false;
                    }
                    return error;
                };
                consultarHomicidios = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaHomicidio",
                            idViolenciaDeGenero: $('#hddIdViolenciaDeGenero').val(),
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            $('#divResultadosHomicidios').html("");
                            if (datos.status == 'ok') {
                                var table = "";
                                table += '<table border="1" align="center"  width="50%"  class="table table-bordered tblGridAgrega">';
                                table += '<tr class="trGridAgregaTabla">';
                                table += '<th>Homicidio doloso</th>';
                                table += '<th>Eliminar</th>';
                                for (var i = 0; i < datos.totalCount; i++) {
                                    table += '<tr class="trSeleccion" id="' + datos.data[i].idViolenciaHomicidioDoloso + '">';
                                    table += '<td onclick = "seleccionaHomicidio(' + datos.data[i].idViolenciaHomicidioDoloso + ')">' + datos.data[i].desHomicidioDoloso + '</td>';
                                    table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminaHomicidio(" + datos.data[i].idViolenciaHomicidioDoloso + ")'></center></td></tr>";
                                }
                                table += '</table>';
                                $('#divResultadosHomicidios').html(table);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                seleccionaHomicidio = function (id) {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaHomicidio",
                            idViolenciaHomicidioDoloso: id,
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            if (datos.status == 'ok') {
                                $("#hddIdViolenciaHomicidioDoloso").val(datos.data[0].idViolenciaHomicidioDoloso);
                                $("#cmbHomicidioDoloso").val(datos.data[0].cveHomicidioDoloso);
                            } else {
                                $("#divAlertWarningViolencia").html("");
                                $("#divAlertWarningViolencia").html(datos.mnj);
                                $("#divAlertWarningViolencia").show("");
                                $('html, body').animate({
                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                }, 1000);
                                setTimeAlert("divAlertWarningViolencia");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                eliminaHomicidio = function (id) {
                    bootbox.dialog({
                        message: "\u00bf Desea eliminar el registro?",
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {
                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                                        async: false,
                                        dataType: "json",
                                        data: {accion: "eliminarHomicidios",
                                            idViolenciaHomicidioDoloso: id,
                                        },
                                        beforeSend: function (datos) {
                                        },
                                        success: function (datos) {
                                            if (datos.status == 'ok') {
                                                $("#divAlertSuccesViolencia").html("");
                                                $("#divAlertSuccesViolencia").html("Se elimino de forma correcta");
                                                $("#divAlertSuccesViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertSuccesViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertSuccesViolencia");
                                                limpiarHomicidios();
                                                consultarHomicidios();
                                            } else {
                                                $("#divAlertWarningViolencia").html("");
                                                $("#divAlertWarningViolencia").html(datos.mnj);
                                                $("#divAlertWarningViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertWarningViolencia");
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
                };
                limpiarHomicidios = function () {
                    $("#hddIdViolenciaHomicidioDoloso").val("");
                    $("#cmbHomicidioDoloso").val(0);
                };
                /////////////// FIN HOMICIDIO DOLOSO///////////////////////////////////////
                /////////////// INICIO TRATA DE PERSONAS///////////////////////////////////////
                validaTrataPersonas = function () {
                    var error = true;
                    var mensaje = "";
                    if ($('#cmbPaisOrigen').val() == "" || $('#cmbPaisOrigen').val() == "0") {
                        mensaje += "*Seleccione un pais origen\n";
                        error = false;
                    }
                    if ($('#cmbPaisOrigen').val() != "" || $('#cmbPaisOrigen').val() != "0") {
                        if ($('#cmbPaisOrigen').val() == "119") {
                            if ($('#cmbEstadoOrigen').val() == "" || $('#cmbEstadoOrigen').val() == "0") {
                                mensaje += "*Seleccione un estado origen\n";
                                error = false;
                            }
                            if ($('#cmbMunicipioOrigen').val() == "" || $('#cmbMunicipioOrigen').val() == "0") {
                                mensaje += "*Seleccione un municipio origen\n";
                                error = false;
                            }
                        } else {
                            if ($('#txtestadoOrigen').val() == "" || $('#txtestadoOrigen').val() == "0") {
                                mensaje += "*ingrese un estado origen\n";
                                error = false;
                            }
                            if ($('#txtmunicipioOrigen').val() == "" || $('#txtmunicipioOrigen').val() == "0") {
                                mensaje += "*ingrese un municipio origen\n";
                                error = false;
                            }
                        }
                    }
                    if ($('#cmbPaisDestino').val() == "" || $('#cmbPaisDestino').val() == "0") {
                        mensaje += "*Seleccione un pais destino\n";
                        error = false;
                    }
                    if ($('#cmbTipoTrata').val() == "" || $('#cmbTipoTrata').val() == "0") {
                        mensaje += "*Seleccione un tipo de trata\n";
                        error = false;
                    }
                    if ($('#cmbTransportacion').val() == "" || $('#cmbTransportacion').val() == "0") {
                        mensaje += "*Seleccione un tipo de transportacion\n";
                        error = false;
                    }
                    if ($('#chbxRalacion').val() == "" || $('#chbxRalacion').val() == "0") {
                        mensaje += "*Seleccione una relacion\n";
                        error = false;
                    }
                    if (!error) {
                        alert(mensaje);
                    }
                    return error;
                };
                guardarTrataDePersonas = function () {
                    var error = true;
                    if (validaTrataPersonas()) {
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                            async: false,
                            dataType: "json",
                            data: {accion: "guardarTrata",
                                idTrataPersona: $('#hddIdTrataPersona').val(),
                                cveEstadoDestino: $('#cmbEstadoDestino').val(),
                                cveMunicipioDestino: $('#cmbMunicipioDestino').val(),
                                cvePaisDestino: $('#cmbPaisDestino').val(),
                                estadoDestino: $('#txtestadoDestino').val(),
                                municipioDestino: $('#txtmunicipioDestino').val(),
                                cveEstadoOrigen: $('#cmbEstadoOrigen').val(),
                                cveMunicipioOrigen: $('#cmbMunicipioOrigen').val(),
                                cvePaisOrigen: $('#cmbPaisOrigen').val(),
                                estadoOrigen: $('#txtestadoOrigen').val(),
                                municipioOrigen: $('#txtmunicipioOrigen').val(),
                                cveTipoTrata: $('#cmbTipoTrata').val(),
                                cveTrasportacion: $('#cmbTransportacion').val(),
                                idImpOfeDelSolicitud: $('input:radio[name=chbxRalacion]:checked').val(),
    //                            idImpOfeDelSolicitud: $('#chbxRalacion').val(),
                                activo: 'S'
                            },
                            beforeSend: function (datos) {
                            },
                            success: function (datos) {
                                if (datos.status == 'ok') {
                                    $("#divAlertSuccesViolencia").html("");
                                    $("#divAlertSuccesViolencia").html("Registro dado de alta exitosamente");
                                    $("#divAlertSuccesViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertSuccesViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertSuccesViolencia");
                                    limpiarTrata();
                                    consultarTrata();
                                } else {
                                    $("#divAlertWarningViolencia").html("");
                                    $("#divAlertWarningViolencia").html(datos.mnj);
                                    $("#divAlertWarningViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertWarningViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertWarningViolencia");
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                            }
                        });
                    } else {
                        error = false;
                    }
                    return error;
                };
                eliminaTrara = function (id) {
                    bootbox.dialog({
                        message: "\u00bf Desea eliminar el registro?",
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {
                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                                        async: false,
                                        dataType: "json",
                                        data: {accion: "eliminar",
                                            idTrataPersona: id
                                        },
                                        beforeSend: function (datos) {
                                        },
                                        success: function (datos) {
                                            if (datos.status == 'ok') {
                                                $("#divAlertSuccesViolencia").html("");
                                                $("#divAlertSuccesViolencia").html("Se elimino de forma correcta");
                                                $("#divAlertSuccesViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertSuccesViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertSuccesViolencia");
                                                limpiarTrata();
                                                consultarTrata();
                                            } else {
                                                $("#divAlertWarningViolencia").html("");
                                                $("#divAlertWarningViolencia").html(datos.mnj);
                                                $("#divAlertWarningViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertWarningViolencia");
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
                };
                consultarTrata = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaTrata",
                            idImpOfeDelSolicitud: $('input:radio[name=chbxRalacion]:checked').val(),
    //                        idImpOfeDelSolicitud: $('#chbxRalacion').val(),
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            $('#divResultadosTrata').html("");
                            if (datos.status == 'ok') {
                                var table = "";
                                table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                                table += '<tr class="trGridAgregaTabla">';
                                table += '<th colspan="3" width="40%"><center>Origen</center></th>';
                                table += '<th colspan="3" width="40%"><center>Destino</center></th>';
                                table += '<th width="10%" Rowspan="2"><center><br>Eliminar</center></th></tr>';
                                table += '<tr class="trGridAgregaTabla">';
                                table += '<th>Pais</th>';
                                table += '<th>Estado</th>';
                                table += '<th>Municipio</th>';
                                table += '<th>Pais</th>';
                                table += '<th>Estado</th>';
                                table += '<th>Municipio</th></tr>';
                                for (var i = 0; i < datos.totalCount; i++) {
                                    table += '<tr class="trSeleccion" id="' + datos.data[i].idTrataPersona + '"><td onclick="seleccionaTrata(' + datos.data[i].idTrataPersona + ')">' + datos.data[i].desPaisOrigen + '</td>';
                                    if (datos.data[i].cvePaisOrigen == "119") {
                                        table += '<td onclick="seleccionaTrata(' + datos.data[i].idTrataPersona + ')">' + datos.data[i].desEstadoOrigen + '</td>';
                                        table += '<td onclick="seleccionaTrata(' + datos.data[i].idTrataPersona + ')">' + datos.data[i].desMunicipioOrigen + '</td>';
                                    } else {
                                        table += '<td onclick="seleccionaTrata(' + datos.data[i].idTrataPersona + ')">' + datos.data[i].estadoOrigen + '</td>';
                                        table += '<td onclick="seleccionaTrata(' + datos.data[i].idTrataPersona + ')">' + datos.data[i].municipioOrigen + '</td>';
                                    }
                                    table += '<td onclick="seleccionaTrata(' + datos.data[i].idTrataPersona + ')">' + datos.data[i].desPaisDestino + '</td>';
                                    if (datos.data[i].cvePaisDestino == "119") {
                                        table += '<td onclick="seleccionaTrata(' + datos.data[i].idTrataPersona + ')">' + datos.data[i].desEstadoDestino + '</td>';
                                        table += '<td onclick="seleccionaTrata(' + datos.data[i].idTrataPersona + ')">' + datos.data[i].desMunicipioDestino + '</td>';
                                    } else {
                                        table += '<td onclick="seleccionaTrata(' + datos.data[i].idTrataPersona + ')">' + datos.data[i].estadoDestino + '</td>';
                                        table += '<td onclick="seleccionaTrata(' + datos.data[i].idTrataPersona + ')">' + datos.data[i].municipioDestino + '</td>';
                                    }
                                    table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminaTrara(" + datos.data[i].idTrataPersona + ")'></center></td></tr>";
                                }
                                table += '</table>';
                                $('#divResultadosTrata').html(table);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                seleccionaTrata = function (id) {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaTrata",
                            idTrataPersona: id,
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            if (datos.status == 'ok') {
                                $('#hddIdTrataPersona').val(datos.data[0].idTrataPersona);
                                $('#cmbPaisOrigen').val(datos.data[0].cvePaisOrigen);
                                if (datos.data[0].cvePaisOrigen == '119') {
                                    comboEstadoOrigen();
                                    $('#cmbEstadoOrigen').val(datos.data[0].cveEstadoOrigen);
                                    comboMunicipioOrigen();
                                    $('#cmbMunicipioOrigen').val(datos.data[0].cveMunicipioOrigen);
                                    $('#cmbEstadoOrigen').show("");
                                    $('#cmbMunicipioOrigen').show("");
                                    $('#txtestadoOrigen').hide("");
                                    $('#txtmunicipioOrigen').hide("");
                                } else {
                                    $('#txtestadoOrigen').val(datos.data[0].estadoOrigen);
                                    $('#txtmunicipioOrigen').val(datos.data[0].municipioOrigen);
                                    $('#cmbEstadoOrigen').hide("");
                                    $('#cmbMunicipioOrigen').hide("");
                                    $('#txtestadoOrigen').show("");
                                    $('#txtmunicipioOrigen').show("");
                                }
                                $('#cmbPaisDestino').val(datos.data[0].cvePaisDestino);
                                if (datos.data[0].cvePaisDestino == '119') {
                                    comboEstadoDestino();
                                    $('#cmbEstadoDestino').val(datos.data[0].cveEstadoDestino);
                                    comboMunicipioDestino();
                                    $('#cmbMunicipioDestino').val(datos.data[0].cveMunicipioDestino);
                                    $('#cmbEstadoDestino').show("");
                                    $('#cmbMunicipioDestino').show("");
                                    $('#txtestadoDestino').hide("");
                                    $('#txtmunicipioDestino').hide("");
                                } else {
                                    $('#txtestadoDestino').val(datos.data[0].estadoDestino);
                                    $('#txtmunicipioDestino').val(datos.data[0].municipioDestino);
                                    $('#cmbEstadoDestino').hide("");
                                    $('#cmbMunicipioDestino').hide("");
                                    $('#txtestadoDestino').show("");
                                    $('#txtmunicipioDestino').show("");
                                }
                                $('#cmbTipoTrata').val(datos.data[0].cveTipoTrata);
                                $('#cmbTransportacion').val(datos.data[0].cveTrasportacion);
                                $('#chbxRalacion').val(datos.data[0].idImpOfeDelSolicitud);
                            } else {
                                $("#divAlertWarningViolencia").html("");
                                $("#divAlertWarningViolencia").html(datos.mnj);
                                $("#divAlertWarningViolencia").show("");
                                $('html, body').animate({
                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                }, 1000);
                                setTimeAlert("divAlertWarningViolencia");
                            }

                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                limpiarTrata = function () {
                    $('#hddIdTrataPersona').val("");
                    $("#cmbPaisDestino").val(119).trigger('change');
                    $('#cmbEstadoDestino').val(15);
                    $('#cmbMunicipioDestino').val(0);
                    $('#txtestadoDestino').val("");
                    $('#txtmunicipioDestino').val("");
                    $("#cmbPaisOrigen").val(119).trigger('change');
                    $('#cmbEstadoOrigen').val(15);
                    $('#cmbMunicipioOrigen').val(0);
                    $('#txtestadoOrigen').val("");
                    $('#txtmunicipioOrigen').val("");
                    $('#cmbTipoTrata').val(0);
                    $('#cmbTransportacion').val(0);
                };
                /////////////// FIN TRATA DE PERSONAS/////////////////////////////////
                /////////////// INICIO EFECTOS///////////////////////////////////////
                validaAgregaGeneral = function () {
                    var error = true;
                    var mensaje = "";
                    if ($('#cmbModalidad').val() == "" || $('#cmbModalidad').val() == "0") {
                        mensaje += "*Seleccione una modalidad\n";
                        error = false;
                    }
                    if ($('#cmbAmbito').val() == "" || $('#cmbAmbito').val() == "0") {
                        mensaje += "*Seleccione un \u00e1mbito\n";
                        error = false;
                    }
                    if (!error) {
                        alert(mensaje);
                    }
                    return error;
                };
                agregaGeneral = function () {
                    var error = true;
                    if (validaAgregaGeneral()) {
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                            async: false,
                            dataType: "json",
                            data: {accion: "guardarSexuales",
                                idSexual: $('#hddIdSexual').val(),
                                cveModalidadAcoso: $('#cmbModalidad').val(),
                                cveAmbitoAcoso: $('#cmbAmbito').val(),
                                idImpOfeDelSolicitud: $('input:radio[name=chbxRalacion]:checked').val(),
    //                            idImpOfeDelSolicitud: $('#chbxRalacion').val(),
                                activo: 'S'
                            },
                            beforeSend: function (datos) {
                            },
                            success: function (datos) {
                                if (datos.status == 'ok') {
                                    $("#divAlertSuccesViolencia").html("");
                                    $("#divAlertSuccesViolencia").html("Registro dado de alta exitosamente");
                                    $("#divAlertSuccesViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertSuccesViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertSuccesViolencia");
                                    limpiarGeneralSexual();
                                    consultarGeneralSecual();
                                } else {
                                    $("#divAlertWarningViolencia").html("");
                                    $("#divAlertWarningViolencia").html(datos.mnj);
                                    $("#divAlertWarningViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertWarningViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertWarningViolencia");
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                            }
                        });
                    } else {
                        error = false;
                    }
                    return error;
                };
                consultarGeneralSecual = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaSexual",
                            idImpOfeDelSolicitud: $('input:radio[name=chbxRalacion]:checked').val(),
    //                        idImpOfeDelSolicitud: $('#chbxRalacion').val(),
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            $('#divResultadosGeneralSexuales').html("");
                            if (datos.status == 'ok') {
                                var table = "";
                                table += '<table border="1" align="center"  width="50%"  class="table table-bordered tblGridAgrega">';
                                table += '<tr class="trGridAgregaTabla">';
                                table += '<th width="10%">Seleccionar</th>';
                                table += '<th width="40%">Modalidad</th>';
                                table += '<th width="40%">Ambito</th>';
                                table += '<th width="10%">Eliminar</th>';
                                for (var i = 0; i < datos.totalCount; i++) {
                                    table += '<tr class="trSeleccion" id="' + datos.data[i].idSexual + '">';
                                    table += "<td><input type='radio' id='chbxSexual' name='chbxSexual' value='" + datos.data[i].idSexual + "' onclick='seleccionaSexualGeneral(" + datos.data[i].idSexual + ");'></td>";
                                    table += '<td>' + datos.data[i].desModalidad + '</td>';
                                    table += '<td>' + datos.data[i].desAmbito + '</td>';
                                    table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminaSexualGeneral(" + datos.data[i].idSexual + ")'></center></td></tr>";
                                }
                                table += '</table>';
                                $('#divResultadosGeneralSexuales').html(table);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                eliminaSexualGeneral = function (id) {
                    bootbox.dialog({
                        message: "\u00bf Desea eliminar el registro?",
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {

                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                                        async: false,
                                        dataType: "json",
                                        data: {accion: "eliminarSexual",
                                            idSexual: id
                                        },
                                        beforeSend: function (datos) {
                                        },
                                        success: function (datos) {
                                            if (datos.status == 'ok') {
                                                $("#divAlertSuccesViolencia").html("");
                                                $("#divAlertSuccesViolencia").html("Se elimino de forma correcta");
                                                $("#divAlertSuccesViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertSuccesViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertSuccesViolencia");
                                                limpiarGeneralSexual();
                                                consultarGeneralSecual();
                                                limpiarConducta();
                                                $("#divResultadosConducta").html("");
                                                limpiarTestigos();
                                                $("#divResultadosTestigos").html("");
                                            } else {
                                                $("#divAlertWarningViolencia").html("");
                                                $("#divAlertWarningViolencia").html(datos.mnj);
                                                $("#divAlertWarningViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertWarningViolencia");
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
                };
                seleccionaSexualGeneral = function (id) {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaSexual",
                            idSexual: id,
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            if (datos.status == 'ok') {
                                $('#hddIdSexual').val(datos.data[0].idSexual);
                                $('#cmbModalidad').val(datos.data[0].cveModalidadAcoso);
                                $('#cmbAmbito').val(datos.data[0].cveAmbitoAcoso);
                                consultarConducta();
                                consultarTestigos();
                            } else {
                                $("#divAlertWarningViolencia").html("");
                                $("#divAlertWarningViolencia").html(datos.mnj);
                                $("#divAlertWarningViolencia").show("");
                                $('html, body').animate({
                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                }, 1000);
                                setTimeAlert("divAlertWarningViolencia");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                limpiarGeneralSexual = function () {
                    $('#hddIdSexual').val("");
                    $('#cmbModalidad').val(0);
                    $('#cmbAmbito').val(0);
                    $('input:radio[name=chbxSexual]').attr('checked', false);
                    limpiarConducta();
                    $('#divResultadosConducta').html("");
                    limpiarTestigos();
                    $('#divResultadosTestigos').html("");
                };
                /////////////// FIN EFECTOS/////////////////////////////////////////
                /////////////// INICIA CONDUCTA/////////////////////////////////////////
                validaCondcutas = function () {
                    var error = true;
                    var mensaje = "";
                    if ($('#hddIdSexual').val() == "" || $('#hddIdSexual').val() == "0") {
                        mensaje += "*Debe de seleccionar una modalidad\n";
                        error = false;
                    }
                    if ($('#cmbCondcuta').val() == "" || $('#cmbCondcuta').val() == "0") {
                        mensaje += "*Seleccione una conducta\n";
                        error = false;
                    }
                    if ($('#cmbDetalleConducta').val() == "" || $('#cmbDetalleConducta').val() == "0") {
                        mensaje += "*Seleccione un detalle de la conducta\n";
                        error = false;
                    }
                    if (!error) {
                        alert(mensaje);
                    }
                    return error;
                };
                agregaConducta = function () {
                    var error = true;
                    if (validaCondcutas()) {
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                            async: false,
                            dataType: "json",
                            data: {accion: "guardarConducta",
                                idSexualConducta: $('#hddIdSexualConducta').val(),
                                idSexual: $('#hddIdSexual').val(),
                                cveConducta: $('#cmbCondcuta').val(),
                                idDetalleSexualConducta: $('#hddIdDetalleSexualConducta').val(),
                                cveDetalleConducta: $('#cmbDetalleConducta').val(),
                                idImpOfeDelSolicitud: $('input:radio[name=chbxRalacion]:checked').val(),
    //                            idImpOfeDelSolicitud: $('#chbxRalacion').val(),
                                activo: 'S'
                            },
                            beforeSend: function (datos) {
                            },
                            success: function (datos) {
                                if (datos.status == 'ok') {
                                    $("#divAlertSuccesViolencia").html("");
                                    $("#divAlertSuccesViolencia").html("Registro dado de alta exitosamente");
                                    $("#divAlertSuccesViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertSuccesViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertSuccesViolencia");
                                    limpiarConducta();
                                    consultarConducta();
                                } else {
                                    $("#divAlertWarningViolencia").html("");
                                    $("#divAlertWarningViolencia").html(datos.mnj);
                                    $("#divAlertWarningViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertWarningViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertWarningViolencia");
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                            }
                        });
                    } else {
                        error = false;
                    }
                    return error;
                };
                consultarConducta = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaConducta",
                            idSexual: $('#hddIdSexual').val(),
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            $('#divResultadosConducta').html("");
                            if (datos.status == 'ok') {
                                var table = "";
                                table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                                table += '<tr class="trGridAgregaTabla">';
                                table += '<th>Conducta</th>';
                                table += '<th>Detalle</th>';
                                table += '<th>Eliminar</th>';
                                for (var i = 0; i < datos.totalCount; i++) {
                                    table += '<tr class="trSeleccion" id="' + datos.data[i].idSexualConducta + '">';
                                    table += '<td onclick = "seleccionaConducta(' + datos.data[i].idSexualConducta + ')">' + datos.data[i].desConducta + '</td>';
                                    table += '<td onclick = "seleccionaConducta(' + datos.data[i].idSexualConducta + ')">' + datos.data[i].dataDetalle[0].desDetalleConducta + '</td>';
                                    table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminaConducta(" + datos.data[i].idSexualConducta + "," + datos.data[i].dataDetalle[0].idDetalleSexualConducta + ")'></center></td></tr>";
                                }
                                table += '</table>';
                                $('#divResultadosConducta').html(table);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                seleccionaConducta = function (id) {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaConducta",
                            idSexualConducta: id,
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            if (datos.status == 'ok') {
                                $('#hddIdSexualConducta').val(datos.data[0].idSexualConducta);
                                $('#hddIdDetalleSexualConducta').val(datos.data[0].dataDetalle[0].idDetalleSexualConducta);
                                $('#cmbCondcuta').val(datos.data[0].cveConducta);
                                comboDetalleConducta();
                                $('#cmbDetalleConducta').val(datos.data[0].dataDetalle[0].cveDetalleConducta);
                            } else {
                                $("#divAlertWarningViolencia").html("");
                                $("#divAlertWarningViolencia").html(datos.mnj);
                                $("#divAlertWarningViolencia").show("");
                                $('html, body').animate({
                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                }, 1000);
                                setTimeAlert("divAlertWarningViolencia");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                eliminaConducta = function (id, idDetalle) {
                    bootbox.dialog({
                        message: "\u00bf Desea eliminar el registro?",
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {
                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                                        async: false,
                                        dataType: "json",
                                        data: {accion: "eliminarConducta",
                                            idSexualConducta: id,
                                            idDetalleSexualConducta: idDetalle,
                                            activo: 'S'
                                        },
                                        beforeSend: function (datos) {

                                        },
                                        success: function (datos) {
                                            if (datos.status == 'ok') {
                                                $("#divAlertSuccesViolencia").html("");
                                                $("#divAlertSuccesViolencia").html("Se elimino de forma correcta");
                                                $("#divAlertSuccesViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertSuccesViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertSuccesViolencia");
                                                limpiarConducta();
                                                consultarConducta();
                                            } else {
                                                $("#divAlertWarningViolencia").html("");
                                                $("#divAlertWarningViolencia").html(datos.mnj);
                                                $("#divAlertWarningViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertWarningViolencia");
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
                };
                limpiarConducta = function () {
                    $("#hddIdSexualConducta").val("");
                    $("#hddIdDetalleSexualConducta").val("");
                    $("#cmbCondcuta").val(0);
                    $("#cmbDetalleConducta").val(0);
                };
                /////////////// FIN CONDUCTA/////////////////////////////////////////
                /////////////// INICIO TESTIGOS/////////////////////////////////////////
                validaTestigos = function () {
                    var error = true;
                    var mensaje = "";
                    if ($('#hddIdSexual').val() == "" || $('#hddIdSexual').val() == "0") {
                        mensaje += "*Debe de seleccionar una modalidad\n";
                        error = false;
                    }
                    if ($('#txtPaternoTestigo').val() == "" || $('#txtPaternoTestigo').val() == "0") {
                        mensaje += "*Ingrese un apellido paterno\n";
                        error = false;
                    }
                    if ($('#txtMaternoTestigo').val() == "" || $('#txtMaternoTestigo').val() == "0") {
                        mensaje += "*Ingrese apellido materno\n";
                        error = false;
                    }
                    if ($('#txtNombreTestigo').val() == "" || $('#txtNombreTestigo').val() == "0") {
                        mensaje += "*Ingrese apellido materno\n";
                        error = false;
                    }
                    if ($('#cmbGenero').val() == "" || $('#cmbGenero').val() == "0") {
                        mensaje += "*Seleccione un g\u00e9nero\n";
                        error = false;
                    }
                    if (!error) {
                        alert(mensaje);
                    }
                    return error;
                };
                agregaTestigos = function () {
                    var error = true;
                    if (validaTestigos()) {
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                            async: false,
                            dataType: "json",
                            data: {accion: "guardarTestigos",
                                idTestigoSexual: $('#hddIdTestigoSexual').val(),
                                idSexual: $('#hddIdSexual').val(),
                                paterno: $('#txtPaternoTestigo').val(),
                                materno: $('#txtMaternoTestigo').val(),
                                nombre: $('#txtNombreTestigo').val(),
                                cveGenero: $('#cmbGenero').val(),
                                activo: 'S'
                            },
                            beforeSend: function (datos) {
                            },
                            success: function (datos) {
                                if (datos.status == 'ok') {
                                    $("#divAlertSuccesViolencia").html("");
                                    $("#divAlertSuccesViolencia").html("Registro dado de alta exitosamente");
                                    $("#divAlertSuccesViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertSuccesViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertSuccesViolencia");
                                    limpiarTestigos();
                                    consultarTestigos();
                                } else {
                                    $("#divAlertWarningViolencia").html("");
                                    $("#divAlertWarningViolencia").html(datos.mnj);
                                    $("#divAlertWarningViolencia").show("");
                                    $('html, body').animate({
                                        scrollTop: $("#divAlertWarningViolencia").offset().top
                                    }, 1000);
                                    setTimeAlert("divAlertWarningViolencia");
                                }
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                            }
                        });
                    } else {
                        error = false;
                    }
                    return error;
                };
                consultarTestigos = function () {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaTestigos",
                            idSexual: $('#hddIdSexual').val(),
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            $('#divResultadosTestigos').html("");
                            if (datos.status == 'ok') {
                                var table = "";
                                table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                                table += '<tr class="trGridAgregaTabla">';
                                table += '<th>Nombre</th>';
                                table += '<th>Eliminar</th>';
                                for (var i = 0; i < datos.totalCount; i++) {
                                    table += '<tr class="trSeleccion" id="' + datos.data[i].idTestigoSexual + '">';
                                    table += '<td onclick = "seleccionaTestigo(' + datos.data[i].idTestigoSexual + ')">' + datos.data[i].nombre + " " + datos.data[i].paterno + " " + datos.data[i].materno + '</td>';
                                    table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminaTestigo(" + datos.data[i].idTestigoSexual + ")'></center></td></tr>";
                                }
                                table += '</table>';
                                $('#divResultadosTestigos').html(table);
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                seleccionaTestigo = function (id) {
                    $.ajax({
                        type: "POST", global: false,
                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "consultaTestigos",
                            idTestigoSexual: id,
                            activo: 'S'
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            if (datos.status == 'ok') {
                                $('#hddIdTestigoSexual').val(datos.data[0].idTestigoSexual);
                                $('#txtPaternoTestigo').val(datos.data[0].paterno);
                                $('#txtMaternoTestigo').val(datos.data[0].materno);
                                $('#txtNombreTestigo').val(datos.data[0].nombre);
                                $('#cmbGenero').val(datos.data[0].cveGenero);
                            } else {
                                $("#divAlertWarningViolencia").html("");
                                $("#divAlertWarningViolencia").html(datos.mnj);
                                $("#divAlertWarningViolencia").show("");
                                $('html, body').animate({
                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                }, 1000);
                                setTimeAlert("divAlertWarningViolencia");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                        }
                    });
                };
                eliminaTestigo = function (id) {
                    bootbox.dialog({
                        message: "\u00bf Desea eliminar el registro?",
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {
                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/violencia/ViolenciaadminFacade.php",
                                        async: false,
                                        dataType: "json",
                                        data: {accion: "eliminarTestigos",
                                            idTestigoSexual: id,
                                            activo: 'S'
                                        },
                                        beforeSend: function (datos) {

                                        },
                                        success: function (datos) {
                                            if (datos.status == 'ok') {
                                                $("#divAlertSuccesViolencia").html("");
                                                $("#divAlertSuccesViolencia").html("Se elimino de forma correcta");
                                                $("#divAlertSuccesViolencia").show("");
                                                setTimeAlert("divAlertSuccesViolencia");
                                                limpiarTestigos();
                                                consultarTestigos();
                                            } else {
                                                $("#divAlertWarningViolencia").html("");
                                                $("#divAlertWarningViolencia").html(datos.mnj);
                                                $("#divAlertWarningViolencia").show("");
                                                $('html, body').animate({
                                                    scrollTop: $("#divAlertWarningViolencia").offset().top
                                                }, 1000);
                                                setTimeAlert("divAlertWarningViolencia");
                                            }
                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
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
                };
                limpiarTestigos = function () {
                    $('#hddIdTestigoSexual').val("");
                    $('#txtPaternoTestigo').val("");
                    $('#txtMaternoTestigo').val("");
                    $('#txtNombreTestigo').val("");
                    $('#cmbGenero').val(0);
                };
                /////////////// FIN TESTIGOS/////////////////////////////////////////
                $(function () {
                    $("#divFormulario").hide("");
                    $("#divMensaje").show("");
                    //funciones iniciales
                    comboEfectos();
                    comboFactoresCulturales();
                    comboHomicidioDoloso();
                    comboPaisOrigen();
                    comboPaisDestino();
                    comboTipoTrata();
                    comboTransportacion();
                    comboModalidadAcoso();
                    comboAmbitoAcoso();
                    comboConducta();
                    comboGenero();
                    impofedelsolicitudes();
                });

            </script>  
            <?php
        } else {
            $salir = '<script>alert("La sesion caduco."); ';
            $salir .= 'window.location.href = "salir.php" </script>';
            echo $salir;
        }
        ?>