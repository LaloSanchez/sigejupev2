<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $type = 1; //--> General
    ?>
    <div id="anterior6" ></div>
    <div id="nueva" ></div>
    <div style="display:none" >
        <select id="cmbGeneroPersona" >
            <option>Selecciona una Opcion</option>
        </select>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>CAMBIO DE ESTATUS CATEOS</h4>
        </div>
        <div class="panel-body">
            <div class="col-xs-12 consultaInformacon" style="border: solid 4px #881518;" >
                <br />
                <form name="frmSolicitud" class="form-horizontal" id="frmSolicitud" method="POST" target="oculto" enctype="multipart/form-data" onsubmit="return false;">            
                    <div class="row alert alert-warning alert-dismissable" style="display:none" id="divAlertWarning" ></div>

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
                                <button class="btn btn-primary" onclick="javascript:con.inicia(<?= $type; ?>, 1)">Consultar</button>
                                <button class="btn btn-primary" onclick="javascript:con.limpiar()">Limpiar</button>
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
                                    <select  name="cmbPaginacion" id="cmbPaginacion" onchange="javascript:con.inicia(<?= $type; ?>, 0)">
                                        <option value="1"></option>
                                    </select>
                                </div>
                                <div id="divPaginador" class="form-group col-md-4" >
                                    <label class="control-label">Registros por p&aacute;gina:</label>
                                    <select  name="cmbNumReg" id="cmbNumReg" onchange="javascript:con.inicia(<?= $type; ?>, 1)">
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
                            <div class="responsive-table" >
                                <table id="informationTable" class="table table-hover table-bordered table-striped" >
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Juzgado</th>
                                            <th>Juez</th>
                                            <th>Juez Apelaci&oacute;n</th>
                                            <th>Secretario</th>
                                            <th>N&uacute;m Cateo</th>
                                            <th>N&uacute;m Especializado</th>
                                            <?php if ($type != 4) { ?>
                                                <th>Carpeta</th>
                                                <th>Persona/Objeto</th>
                                            <?php } ?>
                                            <th>Fecha Registro</th>
                                            <th>Fecha Respuesta</th>
                                            <th>Tiempo Respuesta</th>
                                            <th>Estatus</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xs-12 InformationCteo" style="display:none" >
                <div class = "text-right col-xs-12" >
                    <button class = "btn btn-primary" onclick = "javascript:con.Back()" >Ver Listado de Cateos</button>
                    <br /><br />
                </div>
                <br />
                <div class="col-xs-12" style="border: solid 4px #881518;" >
                    <h4 class="text-center ">Informaci&oacute;n del Cateo</h4>
                    <div class="panel-group" id="RespuestaInfoCateo" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="SolicitudCateoTab">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#RespuestaInfoCateo" href="#collapseSolicitudCateoTab" aria-expanded="true" aria-controls="collapseSolicitudCateoTab">
                                        Solicitud
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
                                                    <tr>
                                                        <th>CAMBIO DE ESTATUS</th>
                                                        <td>
                                                            <select class="form-control" id="cmbEstatus" >
                                                                <option value="0" >SELECCIONA UNA OPCI&Oacute;N</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>MOTIVO DE CANCELACI&Oacute;N</td>
                                                        <td>
                                                            <textarea class="form-control" id="textMotivo" placeholder="Motivo de Cancelaci&oacute;n" ></textarea>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" class="text-center" >
                                                            <button class="btn btn-primary" onclick="javascript:con.cambiarStatus(); return false;" >CAMBIAR ESTATUS</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-xs-12" ></div>
                                    </div>
                                    <div class="col-xs-12" >
                                        <div class="col-xs-12 text-center" >
                                            <p>&nbsp;</p>
                                            Solicitud
                                        </div>
                                        <div class="col-xs-12" id="informeSolicitudTexto" style="border: 3px solid #881518;" ></div>
                                    </div>
                                    <div class="col-xs-12" >
                                        <div class="col-xs-12 text-center" ><p>&nbsp;</p>Archiv(o)s Adjuntos</div>
                                        <div class="col-xs-12" style="border: 3px solid #881518;"  >
                                            <fileFound></fileFound>
                                        </div>
                                    </div>
                                    <div class="col-xs-12" >
                                        <p>&nbsp;</p>
                                        <div class="panel-group" id="accordionPA" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="PersonasApreenderse">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordionPA" href="#collapsePersonasApreenderse" aria-expanded="true" aria-controls="collapsePersonasApreenderse">
                                                            Persona(s) que deba(n) aprehenderse
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapsePersonasApreenderse" class="panel-collapse collapse" role="tabpanel" aria-labelledby="PersonasApreenderse">
                                                    <div class="panel-body">
                                                        <table id="tblPersonas" class="table table-bordered table-condensed table-striped" >
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre</th>
                                                                    <th>Domicilio</th>
                                                                    <th>G&eacute;nero</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="Objetos">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionPA" href="#collapseObjetos" aria-expanded="false" aria-controls="collapseObjetos">
                                                            Objeto(s) buscado(s)
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseObjetos" class="panel-collapse collapse" role="tabpanel" aria-labelledby="Objetos">
                                                    <div class="panel-body">
                                                        <table id="tblObjetos" class="table table-bordered table-condensed table-striped" >
                                                            <thead>
                                                                <tr>
                                                                    <th>Descripcion</th>
                                                                    <th>Domicilio</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12" >
                                        <div class="panel-group" id="accordionIOD" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="ImputadosTab">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordionIOD" href="#collapseImputadosTab" aria-expanded="true" aria-controls="collapseImputadosTab">
                                                            Imputados
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseImputadosTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ImputadosTab">
                                                    <div class="panel-body">
                                                        <table id="tblImputados" class="table table-bordered table-condensed table-striped" >
                                                            <thead>
                                                                <tr>
                                                                    <th>Nombre</th>
                                                                    <th>Domicilio</th>
                                                                    <th>G&eacute;nero</th>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="OfendidosTab">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordionIOD" href="#collapseOfendidosTab" aria-expanded="true" aria-controls="collapseOfendidosTab">
                                                            Victimas
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOfendidosTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="OfendidosTab">
                                                    <div class="panel-body">
                                                        <table id="tblVictimas" class="table table-bordered table-condensed table-striped" >
                                                            <thead>
                                                                <tr>
                                                                    <td width="30%">Nombre</td>
                                                                    <td width="45%">Domicilio</td>
                                                                    <td width="15%">Genero</td>
                                                                </tr>
                                                            </thead>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="DelitosTab">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordionIOD" href="#collapseDelitosTab" aria-expanded="true" aria-controls="collapseDelitosTab">
                                                            Delitos
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseDelitosTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="DelitosTab">
                                                    <div class="panel-body">
                                                        <table id="tblDelitos" class="table table-bordered table-condensed table-striped" >
                                                            <thead>
                                                                <tr>
                                                                    <th>Delitos</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody></tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 text-center" >
                                        <div id="impresionSolicitud" ></div>
                                        <div id="cancelaSolicitud" ></div>
                                        <div class="table-responsive" id="motivoCancela" style="display: none;">
                                            <table class="table table-bordered table-hover table-striped" >
                                                <tr>
                                                    <th colspan="4" class="text-center" >
                                                        Motivo de cancelaci&oacute;n de la solicitud de cateo
                                                    </th>
                                                </tr>
                                                <tr>
                                                <tr>
                                                    <th>Motivo</th>
                                                    <td colspan="3" ><textarea id="textMotivoCancelacion" rows="5" style="resize:none" class="form-control" ></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" >
                                                        <div id="confirmaCancelaSolicitud" ></div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 text-center" >
                                        <div class="table-responsive" id="consultaMotivoCancela" style="display: none;">
                                            <table class="table table-bordered table-hover table-striped" >
                                                <tr>
                                                    <th colspan="4" class="text-center" >
                                                        Motivo de cancelaci&oacute;n de la solicitud de cateo
                                                    </th>
                                                </tr>
                                                <tr>
                                                <tr>
                                                    <td colspan="3" >
                                                        <div id="detalleCancelaSolicitud" ></div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="RespuestaCateoTab">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#RespuestaInfoCateo" href="#collapseRespuestaCateoTab" aria-expanded="false" aria-controls="collapseRespuestaCateoTab">
                                        Respuesta
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseRespuestaCateoTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="RespuestaCateoTab">
                                <div class="panel-body">
                                    <div class="col-md-12 text-center resp" >
                                        <p>RESPUESTA DE LA SOLICITUD: <strong><resp></resp></strong></p>
                                    </div>
                                    <br />
                                    <div id="collapseSolicitudCateoRespuestaTab" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="collapseSolicitudCateoRespuestaTab" style="display: none" >
                                        <div class="panel-body">
                                            <div class="panel-group" id="accordionPAR" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default" id="RespuestaNegada" >
                                                    <div class="panel-heading" role="tab" id="FinalidadR">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordionPAR" href="#collapseFinalidadR" aria-expanded="true" aria-controls="collapseFinalidadR">
                                                                FINALIDAD
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseFinalidadR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="FinalidadR">
                                                        <div class="panel-body">
                                                            <div class="col-xs-12 infors" >
                                                                <table class="table table-bordered table-condensed table-striped" >
                                                                    <tr>
                                                                        <td>D&iacute;a y Hora para su pr&aacute;ctica: </td>
                                                                        <td><practica></practica></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Presentaci&oacute;n de Informe: </td>
                                                                        <td><informe></informe></td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                            <div class="col-xs-12 personasrs" >
                                                                <div class="text-center" >APREHENDER A LA(S) PERSONA(S) SIGUIENTE(S):</div>
                                                                <table id="tblPersonasR" class="table table-bordered table-condensed table-striped" >
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Nombre</th>
                                                                            <th>Domicilio</th>
                                                                            <th>G&eacute;nero</th>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                            <div class="col-xs-12 objetosrs" >
                                                                <div class="text-center" >BUSCAR LOS OBJETO(S) SIGUIENTE(S):</div>
                                                                <table id="tblObjetosR" class="table table-bordered table-condensed table-striped" >
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Descripcion</th>
                                                                            <th>Domicilio</th>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="NegadaR">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionPAR" href="#collapseNegadaR" aria-expanded="false" aria-controls="collapseNegadaR">
                                                                AUTORIZACI&Oacute;N NEGADA
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseNegadaR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="NegadaR">
                                                        <div class="panel-body">
                                                            <div class="col-xs-12" id="NegadaTexto" style="border: 3px solid #881518;" ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="ResolucionR">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordionPAR" href="#collapseResolucionR" aria-expanded="false" aria-controls="collapseResolucionR">
                                                                RESOLUCI&Oacute;N
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseResolucionR" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ResolucionR">
                                                        <div class="panel-body">
                                                            <div class="col-xs-12" id="ResolucionTexto" style="border: 3px solid #881518;" ></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 text-center" >
                                        Respuesta de Solicitud
                                        <div class="buttonRespuesta" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" id="ApelacionMPEtiqueta">
                            <div class="panel-heading" role="tab" id="ApelacionMPTab">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#RespuestaInfoCateo" href="#collapseApelacionMPTab" aria-expanded="false" aria-controls="collapseApelacionMPTab">
                                        Recurso de Apelaci&oacute;n Presentado por MP.
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseApelacionMPTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ApelacionMPTab">
                                <div class="panel-body">
                                    <div class="col-xs-12 text-center">Agravios</div>
                                    <div class="col-xs-12 text-center" style="border: 3px solid #881518;" >
                                        <div class="agraviosmp" ></div>
                                    </div>
                                    <p>&nbsp;</p>
                                    <div class="col-xs-12 text-center">Apelaci&oacute;n</div>
                                    <div class="col-xs-12 text-center" style="border: 3px solid #881518;" >
                                        <div class="escritoApelacion" ></div>
                                    </div>
                                    <div class="col-xs-12 text-center" ><p>&nbsp;</p>Archiv(o)s Adjuntos</div>
                                    <div class="col-xs-12" style="border: 3px solid #881518;"  >
                                        <fileFoundMP></fileFoundMP>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" id="ApelacionJuezEtiqueta">
                            <div class="panel-heading" role="tab" id="ApelacionJuezTab">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#RespuestaInfoCateo" href="#collapseApelacionJuezTab" aria-expanded="false" aria-controls="collapseApelacionJuezTab">
                                        Acuerdo de Juez
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseApelacionJuezTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ApelacionJuezTab">
                                <div class="panel-body">
                                    <div class="col-xs-12 text-center">Acuerdo</div>
                                    <div class="col-xs-12 text-center" style="border: 3px solid #881518;" >
                                        <div class="acuerdojuez" ></div>
                                    </div>
                                    <div class="col-xs-12 text-center" ><p>&nbsp;</p>Archiv(o)s Adjuntos</div>
                                    <div class="col-xs-12" style="border: 3px solid #881518;"  >
                                        <fileFoundJuez></fileFoundJuez>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default" id="ApelacionSecretarioEtiqueta">
                            <div class="panel-heading" role="tab" id="ApelacionSecreatrioTab">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#RespuestaInfoCateo" href="#collapseApelacionSecreatrioTab" aria-expanded="false" aria-controls="collapseApelacionSecreatrioTab">
                                        Respuesta o Resoluci&oacute;n del Recurso
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseApelacionSecreatrioTab" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ApelacionSecreatrioTab">
                                <div class="panel-body">
                                    <div class="col-xs-12 text-center">Resoluci&oacute;n</div>
                                    <div class="col-xs-12 text-center" style="border: 3px solid #881518;" >
                                        <div class="resolucionApelacion" ></div>
                                    </div>
                                    <div class="col-xs-12 text-center" ><p>&nbsp;</p>Archiv(o)s Adjuntos</div>
                                    <div class="col-xs-12" style="border: 3px solid #881518;"  >
                                        <fileFoundSecretario></fileFoundSecretario>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="sigejupe/misSolicitudes/missolicitudes.js"></script>
    <script src="sigejupe/consultasCateos/consultas.js" ></script>
    <script src="sigejupe/solicitudesCateos/cateos.js" ></script>
    <script src="sigejupe/solicitudesCateos/helpers.js"></script>
    <script>
                                                                var con = new Consultas();
                                                                var cateos = new Cateos();
                                                                var mS = new misSolicitudes();
                                                                var helper = new Helpers();
                                                                $(function () {
                                                                    var urlGenero = "Generos";
                                                                    var renderGenero = ["cmbGeneroPersona"];
                                                                    var colGenero = ["cveGenero", "desGenero"];
                                                                    helper.loadCombos("", renderGenero, colGenero, urlGenero);
                                                                    var urlGenero = "Estatussolicitudescateos";
                                                                    var renderGenero = ["cmbEstatus"];
                                                                    var colGenero = ["cveEstatusSolicitudCateo", "desEstatusSolicitudCateo"];
                                                                    helper.loadCombos("", renderGenero, colGenero, urlGenero);
    <?php if ($idCateo == "") { ?>
                                                                        var nowTemp = new Date();
                                                                        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

                                                                        var checkin = $('#fechaConsultar').datepicker({
                                                                            format: "dd/mm/yyyy",
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

                                                                        $("#informationTable").parent().parent().hide();
                                                                        $(".InformationCteo").hide();
                                                                        $("#fechaConsultar").val(moment().format('DD/MM/YYYY'));
                                                                        $("#fechaConsultarEnd").val(moment().format('DD/MM/YYYY'));

    <?php } else { ?>
                                                                        con.seleccionaRegistro(<?php echo $idCateo; ?>, 1);
    <?php } ?>
                                                                });
    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>