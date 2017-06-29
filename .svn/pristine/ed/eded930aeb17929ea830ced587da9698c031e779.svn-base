<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <style>
        .steps {
            padding: 1px 0;
            overflow: hidden;
        }
        .steps ul, .steps li {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .steps ul { 
            float: left; 
            width: 100% 
        }
        .steps li {
            float: left;
            width: 33.33%;
            padding: 1px;
        }
        .steps li a {
            display: block;
            padding: 15px 20px;
            background: #881518;
            color: #fff;
            line-height: 1.5em;
            text-decoration: none;
        }
        .steps li a strong {
            font-size:20px; 
            font-family: Arial;
        }
        .steps li a:hover {
            background: #df3338;
        }
        .steps li a.active { 
            background: #df3338; 
        }
        .steps li.step, .steps li.step a {
            position: relative;
            z-index: 3;
            height: 84px;
        }

        .steps li > a {
            background: #881518;   
        }

        .steps li.step-3 a {

            background-position: center left;
        }
        .steps li.step a:hover { 
            background:#df3338; 
        }
        .subtitulo{
            font-family: Arial;
            font-size: 15px;
        }

        @media (max-width: 768px) {
            .steps li a {
                display: block;
            }
            .steps li {
                display:block;
                float: left;
                width: 100%;
            }
            .steps li.step, .steps li.step a {
                position: relative;
                z-index: 3;
                height: 60px;
            }
            .steps ul, .steps li {
                margin: 1px;
                padding: 1px;
                list-style: none;
            }
        }

    </style>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>APELACI&Oacute;N CATEOS</h4>
        </div>
        <div class="panel-body">
            <div class="row" >
                <div class="col-xs-12">
                    <div class="steps">
                        <ul>
                            <li id="liPaso1" class="step step-1 Paso1">
                                <a href="#" class="active" ><strong>Paso 1</strong><br>Solicitudes Pendientes</a>
                            </li>
                            <li id="liPaso2" class="step step-2 Paso2">
                                <a href="#"><strong>Paso 2</strong><br>Elaborar Acuerdo</a>
                            </li>
                            <li id="liPaso3" class="step step-3 Paso3">
                                <a href="#"><strong>Paso 3</strong><br>Enviar Acuerdo</a>
                            </li>
                        </ul>
                    </div>  
                </div>
            </div>

            <div class="col-xs-12" style="border: solid 4px #881518;" >
                <br />
                <form name="frmSolicitud" class="form-horizontal" id="frmSolicitud" method="POST" action="solicitudCateoController.php" target="oculto" enctype="multipart/form-data" onsubmit="return false;">            
                    <div class="row alert alert-warning alert-dismissable" style="display:none" id="divAlertWarning" ></div>
                    <div class="row alert alert-success alert-dismissable" style="display:none" id="divAlertSuccess" ></div>

                    <div id="divPaso1" class='content col-xs-12'>
                        <div class="col-xs-12 consultaInformacon">
                            <br />
                            <div class='content col-xs-12'>
                                <div class="col-md-12" >
                                    <div class="form-group" >
                                        <label for="txtNumCateoConsultar" class="col-xs-3 control-label" >Numero de Cateo:</label>
                                        <div class="col-md-9 col-xs-9" >
                                            <div class="col-md-6 col-xs-12" >
                                                <input type="text" placeholder="N&uacute;mero de Cateo" name="txtNumCateoConsultar" id="txtNumCateoConsultar" class="form-control" onkeypress=" return validateNumber(event)" size="5">
                                            </div>
                                            <div class="col-md-6 col-xs-12" >
                                                <input type="text" placeholder="A&ntilde;o de Cateo" name="txtAniCateoConsultar" id="txtAniCateoConsultar" class="form-control" maxlength="4" size="5" onkeypress=" return validateNumber(event)" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" >
                                        <label for="cmbJuzgadoSolicitar" class="col-xs-3 control-label">Juzgado:</label>
                                        <div class="col-md-9 col-xs-12" >
                                            <div class="col-xs-12 col-md-12" >
                                                <select class="form-control" name="cmbJuzgadoSolicitar" id="cmbJuzgadoSolicitar">
                                                    <option value="0">Seleccione juzgado</option>
                                                </select>
                                            </div>
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
                                        <button class="btn btn-primary" onclick="javascript:apelacionCateos.inicia(2, 1)">Consultar</button>
                                        <button class="btn btn-primary" onclick="javascript:apelacionCateos.limpiar(1)">Limpiar</button>
                                    </div>
                                    <div class="infos" ></div>
                                </div>

                                <div class="paginacion col-md-12" style="display:none" >    
                                    <div class="col-md-4"></div>
                                    <div class="col-md-8">
                                        <div class="form-group col-md-3">
                                            <label class="control-label" id="totalReg"></label>
                                        </div>
                                        <div id="divPaginador" class="form-group col-md-3" >
                                            <label class="control-label">Pagina:</label>
                                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="javascript:apelacionCateos.inicia(2, 0)">
                                                <option value="1"></option>
                                            </select>
                                        </div>
                                        <div id="divPaginador" class="form-group col-md-4" >
                                            <label class="control-label">Registros por p&aacute;gina:</label>
                                            <select  name="cmbNumReg" id="cmbNumReg" onchange="javascript:apelacionCateos.inicia(2, 1)">
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


                                    <div class="col-xs-12" >
                                        <div class="table-responsive" >
                                            <table id="informationTable" class="table table-hover table-bordered table-striped" >
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th>Juzgado</th>
                                                        <th>Juez</th>
                                                        <th>N&uacute;m Cateo</th>
                                                        <th>Carpeta</th>
                                                        <th>Persona/Objeto</th>
                                                        <th>Fecha Registro</th>
                                                        <th>Fecha Respuesta</th>
                                                        <th>Tiempo Respuesta</th>
                                                        <th>Estatus</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group text-center" >
                                        <button class="btn btn-primary" onclick="javascript:apelacionCateos.validarPaso1('S')">Siguiente ></button>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div id="divPaso2" class='content col-xs-12 ' style='display:none;'>
                        <div class="col-xs-12">
                            <div class="col-xs-12">
                                <h4 class="text-center ">Informaci&oacute;n de la Apelaci&oacute;n de Cateo</h4>
                                <div class="panel-group" id="RespuestaInfoCateo" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="SolicitudCateoTab">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#RespuestaInfoCateo" href="#collapseSolicitudCateoTab" aria-expanded="true" aria-controls="collapseSolicitudCateoTab">
                                                    Recurso de Apelaci&oacute;n
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseSolicitudCateoTab" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="SolicitudCateoTab">
                                            <div class="panel-body">
                                                <div class="col-xs-12"  >
                                                    <div class="col-md-3 col-xs-12" ></div>
                                                    <div class="col-md-6 col-xs-12" >
                                                        <div class="table-responsive" >
                                                            <div class="text-center" >Detalles</div>
                                                            <table class="table table-striped table-hover table-bordered table-condensed" >
                                                                <tr>
                                                                    <th>N&uacute;mero de Cateo</th>
                                                                    <td><strong class="nmcat" ></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Nombre del Ministerio P&uacute;blico</th>
                                                                    <td><strong class="nommp" ></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Email del Ministerio P&uacute;blico</th>
                                                                    <td><strong class="emailMp" ></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Fecha de Solicitud</th>
                                                                    <td><strong class="fecsol" ></strong></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Carpeta de Investigaci&oacute;n</th>
                                                                    <td><strong class="carpinv" ></strong></td>
                                                                </tr>
                                                                <tr style="display:none" >
                                                                    <th>NUC</th>
                                                                    <td><strong class="nucIn" ></strong></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-xs-12" ></div>
                                                </div>
                                                <div class="col-xs-12" >
                                                    <div class="col-xs-12 text-center" >
                                                        <p>&nbsp;</p>
                                                        Agravios
                                                    </div>
                                                    <div class="col-xs-12" id="informeAgravioTexto" style="border: 3px solid #881518;" ></div>
                                                </div>
                                                <div class="col-xs-12" >
                                                    <div class="col-xs-12 text-center" >
                                                        <p>&nbsp;</p>
                                                        Escrito de Apelaci&oacute;n
                                                    </div>
                                                    <div class="col-xs-12" id="informeEscritoApelacionTexto" style="border: 3px solid #881518;" ></div>
                                                </div>
                                                <div class="col-xs-12" >
                                                    <div class="col-xs-12 text-center" ><p>&nbsp;</p>Archiv(o)s Adjuntos</div>
                                                    <div class="col-xs-12" style="border: 3px solid #881518;"  >
                                                        <fileFound></fileFound>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="RespuestaCateoTab">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#RespuestaInfoCateo" href="#collapseRespuestaCateoTab" aria-expanded="false" aria-controls="collapseRespuestaCateoTab">
                                                    Elaborar Acuerdo y Presentar a Tribunal de Alzada
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseRespuestaCateoTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="RespuestaCateoTab">
                                            <div class="form-group" >
                                                <p>&nbsp;</p>
                                                <label class="control-label col-lg-2 col-md-2 col-sm-12 col-xs-12" >* Acuerdo:</label>
                                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">                              
                                                    <script id="txtAcuerdo" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                                                </div>                                
                                            </div>
                                            <div class="form-group" >
                                                <div class="col-md-12 col-xs-12 text-center" >Formatos validos del archivo: <span>doc, docx, odt y pdf</span>; tama&ntilde;o m&aacute;ximo: <span>2MB</span></div>
                                                <label class="control-label col-lg-2 col-md-2 col-sm-12 col-xs-12" >Acuerdo:</label>
                                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" >
                                                    <input type="file" name="fileSolicitud" id="fileSolicitud" size="60" onchange="if (!cateos.formato(this)) {
                                                                this.value = ''
                                                            }">
                                                </div>
                                            </div>
                                            <div class="form-group text-center" >
                                                <div id="solicitudFormato"></div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center" >
                                <button class="btn btn-primary" onclick="javascript:apelacionCateos.limpiar(2, true)">Limpiar</button>
                                <button class="btn btn-primary" onclick="javascript:apelacionCateos.siguiente('liPaso1', 'liPaso2')">< Anterior </button>
                                <button class="btn btn-primary" onclick="javascript:apelacionCateos.validarPaso2('S')">Siguiente ></button>
                            </div>
                        </div>
                    </div>
                    <div id="divPaso3" class='content' style='display:none;'>
                        <div style="border: 4px solid #881518; font-size: 12px; padding: 20px;" >
                            <div id="terminos" ></div>
                        </div>
                        <div class="form-group text-center" >
                            <label class="control-label col-lg-6 col-md-6 col-sm-12 col-xs-12" for="chkAceptar" >* Acepta Terminos</label>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" ><input type="checkbox" class="form-control" name="chkAceptar" id="chkAceptar"></div>
                        </div>
                        <div class="form-group text-center" >
                            <button id="btnAnterior" class="btn btn-primary" onclick="javascript:apelacionCateos.siguiente('liPaso2', 'liPaso3')">< Anterior </button>
                            <button id="btnEnviar" class="btn btn-primary" onclick="javascript:apelacionCateos.validarPaso5()">Enviar</button>
                        </div>
                    </div>
                    <input type='hidden' name='accion' id='accion' value='generaComprobante'/>
                    <input type='hidden' name='idRegistro' id='idRegistro' value=''/>
                    <input type='hidden' name='tipoImpresion' id='tipoImpresion' value='pdf'/>
                    <div id="imprimirRespuesta" ></div>

                </form>
                <iframe name="comprobante" id="comprobante" height="0%" width="0%" style='display:none;'></iframe>
            </div>
        </div>
    </div>

    <script src="sigejupe/misSolicitudes/missolicitudes.js"></script>
    <script src="sigejupe/apelacioncateos/apelacioncateosJuez.js" ></script>
    <script src="sigejupe/solicitudesCateos/cateos.js" ></script>
    <script src="sigejupe/solicitudesCateos/helpers.js"></script>
    <script>
                                var apelacionCateos = new ApelacionCateos();
                                var cateos = new Cateos();
                                var mS = new misSolicitudes();
                                var helper = new Helpers();
                                $(function () {
                                    UE.delEditor("txtAcuerdo");
                                    ue = UE.getEditor('txtAcuerdo');
                                    ue.ready(function () {
                                        ue.setContent("");
                                    });
                                    var filtroJuzgado = "cveTipojuzgado";
                                    var urlJuzgado = "Juzgados";
                                    var renderJuzgado = ["cmbJuzgadoSolicitar", "cmbJuzgadoProcedencia"];
                                    var colJuzgado = ["cveJuzgado", "desJuzgado"];
                                    helper.loadCombos(filtroJuzgado, renderJuzgado, colJuzgado, urlJuzgado);
                                    helper.ladTerms("cveTipoTermino=3");
                                    helper.getInfoUsuarios("solicitudescateos");
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