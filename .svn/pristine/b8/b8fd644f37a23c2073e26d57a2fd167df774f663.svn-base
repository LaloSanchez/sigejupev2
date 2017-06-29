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
            width: 25%;
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
            <h4>APELACI&Oacute;N CATEOS SECRETARIO</h4>
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
                                <a href="#"><strong>Paso 2</strong><br>Detalle de la Solicitud</a>
                            </li>
                            <li id="liPaso3" class="step step-3 Paso3">
                                <a href="#"><strong>Paso 3</strong><br>Resoluci&oacute;n</a>
                            </li>
                            <li id="liPaso6" class="step step-6 Paso6">
                                <a href="#"><strong>Paso 4</strong><br>T&eacute;rminos de uso</a>
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
                                                <input type="text" placeholder="Fecha de Consulta Inicial" name="fechaConsultarreadonly" id="fechaConsultar" class="form-control" size="10">
                                            </div>
                                            <div class="col-md-6 col-xs-12" >
                                                <input type="text" placeholder="Fecha de Consulta Final" name="fechaConsultarEnd" id="fechaConsultarEnd" class="form-control" size="10">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group text-center buttons" >
                                        <button class="btn btn-primary" onclick="javascript:apelacionCateos.inicia(3, 1)">Consultar</button>
                                        <button class="btn btn-primary" onclick="javascript:apelacionCateos.limpiar()">Limpiar</button>
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
                                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="javascript:apelacionCateos.inicia(3, 0)">
                                                <option value="1"></option>
                                            </select>
                                        </div>
                                        <div id="divPaginador" class="form-group col-md-4" >
                                            <label class="control-label">Registros por p&aacute;gina:</label>
                                            <select  name="cmbNumReg" id="cmbNumReg" onchange="javascript:apelacionCateos.inicia(3, 1)">
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
                                                        <th>Fecha Registro Cateo</th>
                                                        <th>Fecha Respuesta Cateo</th>
                                                        <th>Tiempo Respuesta</th>
                                                        <th>Fecha Registro Apelaci&oacute;n</th>
                                                        <th>Fecha Registro Acuerdo</th>
                                                        <th>Tiempo Respuesta Apelaci&oacute;n</th>
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

                                                <div id="collapseSolicitudCateoRespuestaTab" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="collapseSolicitudCateoRespuestaTab">
                                                    <div class="panel-body">
                                                        <div class="col-md-12 text-center" >
                                                            <h4>RESPUESTA DE LA SOLICITUD: <strong><resp></resp></strong></h4>
                                                        </div>
                                                        <br /><br />
                                                        <div class="panel-group" id="accordionPAR" role="tablist" aria-multiselectable="true">
                                                            <div class="panel panel-default" id="RespuestaNegada">
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
                                                    <div class="buttonRespuesta" ></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
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
                                                <div class="col-xs-12" >
                                                    <div class="col-xs-12 text-center" ><p>&nbsp;</p>Archiv(o)s Adjuntos</div>
                                                    <div class="col-xs-12" style="border: 3px solid #881518;"  >
                                                        <fileFoundMP></fileFoundMP>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
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
                                                <div class="col-xs-12" >
                                                    <div class="col-xs-12 text-center" ><p>&nbsp;</p>Archiv(o)s Adjuntos</div>
                                                    <div class="col-xs-12" style="border: 3px solid #881518;"  >
                                                        <fileFoundJuez></fileFoundJuez>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center" >
                                <button class="btn btn-primary" onclick="javascript:apelacionCateos.limpiar(2, true)">Limpiar</button>
                                <button class="btn btn-primary" onclick="javascript:apelacionCateos.siguiente('liPaso1', 'liPaso2')">< Anterior </button>
                                <button class="btn btn-primary" onclick="javascript:apelacionCateos.siguiente('liPaso3', 'liPaso2')">Siguiente ></button>
                            </div>
                        </div>
                    </div>
                    <div id="divPaso3" class='content' style='display:none;'>

                        <div id="divResolucion" class="col-xs-12" >

                            <div class="col-xs-12 text-center" >
                                <h4>
                                    &iquest;Acepta Apelaci&oacute;n de Cateo?
                                    <input type="checkbox" name="acept" id="acept" /> <labelAcept>NO</labelAcept>
                                </h4>
                            </div>

                            <h3 class="text-center" ><titleAceppt>Apelaci&oacute;n Negada</titleAceppt></h3>
                            <div class="form-group" >
                                <div class="col-xs-12" >
                                    <script id="descResolucion" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                                </div>
                            </div>
                            <div class="form-group" >
                                <div class="col-md-12 col-xs-12 text-center" >Formatos validos del archivo: <span>doc, docx, odt y pdf</span>; tama&ntilde;o m&aacute;ximo: <span>20MB</span></div>
                                <label class="control-label col-lg-2 col-md-2 col-sm-12 col-xs-12" >Apelaci&oacute;n Digitalizada:</label>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" >
                                    <div id="solicitudFormato" ></div>
                                    <input type="file" class="form-control" name="fileSolicitud" id="fileSolicitud" size="60" onchange="if (!cateos.formato(this)) {
                                                this.value = ''
                                            }">
                                </div>
                            </div>

                            <div class="form-group status" style="display:none">
                                <label class="control-label col-lg-2 col-md-2 col-sm-12 col-xs-12" >Estatus de la Apelaci&oacute;n:</label>
                                <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" >
                                    <select class="form-control" name="cmbSentido" id="cmbSentido">
                                        <option value="0">Seleccione un Estatus</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group text-center"  >
                            <button class="btn btn-primary" onclick="javascript:apelacionCateos.limpiar(3, true)">Limpiar</button>
                            <button class="btn btn-primary" onclick="javascript:apelacionCateos.siguiente('liPaso2', 'liPaso3')">< Anterior </button>
                            <button class="btn btn-primary" onclick="javascript:apelacionCateos.validarPaso3('S')">Siguiente ></button>
                        </div>
                    </div>
                    <div id="divPaso5" class='content' style='display:none;'>

                        <div class="col-xs-12" >
                            <div id="terminos" style="border: 4px solid #881518; font-size: 12px; padding: 20px;"></div>
                        </div>

                        <div class="form-group text-center">
                            <input  type="checkbox" id="chkTerminosUso"name="chkTerminosUso" value="negada" colspan="4">Aceptar
                        </div>

                        <div id="botonesTerminar">
                            <div class='alert alert-info text-center LoadInfo' style="display: none" ></div>
                            <div class="form-group text-center" >
                                <button class="btn btn-primary" id="limpiar6" name="limpiar6" onclick="javascript:apelacionCateos.limpiar(5, true)">Limpiar</button>
                                <button class="btn btn-primary" id="btnAnterior" name="anterior6" onclick="javascript:apelacionCateos.siguiente('liPaso3', 'liPaso5')">< Anterior </button>
                                <button class="btn btn-primary" id="btnEnviar" name="enviar" onclick="javascript:apelacionCateos.validarPaso5()">Enviar</button>
                                <div id="divSolicitudesMinisterioPublico" ></div>
                            </div>
                        </div>
                    </div>
                    <input type='hidden' name='accion' id='accion' value='generaComprobante'/>
                    <input type='hidden' name='idRegistro' id='idRegistro' value=''/>
                    <input type='hidden' name='tipoImpresion' id='tipoImpresion' value='pdf'/>
                    <div id="imprimirRespuesta" ></div>
                    <div id="anterior6" ></div>
                    <div id="nueva" ></div>
                    <input id="cmbJuzgadoSolicitar" type="hidden" />
                </form>
                <iframe name="comprobante" id="comprobante" height="0%" width="0%" style='display:none;'></iframe>
            </div>
        </div>
    </div>

    <script src="sigejupe/misSolicitudes/missolicitudes.js"></script>
    <script src="sigejupe/apelacioncateos/apelacioncateosSecretario.js" ></script>
    <script src="sigejupe/solicitudesCateos/cateos.js" ></script>
    <script src="sigejupe/solicitudesCateos/helpers.js"></script>
    <script>
                                    var apelacionCateos = new ApelacionCateos();
                                    var cateos = new Cateos();
                                    var mS = new misSolicitudes();
                                    var helper = new Helpers();
                                    $("#acept").change(function () {
                                        if ($(this).is(':checked')) {
                                            $("labelAcept").html("SI");
                                            $("titleAceppt").html("Resoluci&oacute;n");
                                            $(".status").show();
                                        } else {
                                            $("labelAcept").html("NO");
                                            $("titleAceppt").html("Apelaci&oacute;n Negada");
                                            $(".status").hide();
                                        }
                                    });
                                    $(function () {
                                        var urlGenero = "Sentidosresoluciones";
                                        var renderGenero = ["cmbSentido"];
                                        var colGenero = ["cveSentido", "desSentido"];
                                        var filtroJuzgado = "cveTipojuzgado";
                                        var urlJuzgado = "Juzgados";
                                        var renderJuzgado = ["cmbJuzgadoSolicitar", "cmbJuzgadoProcedencia"];
                                        var colJuzgado = ["cveJuzgado", "desJuzgado"];
                                        helper.loadCombos(filtroJuzgado, renderJuzgado, colJuzgado, urlJuzgado);
                                        helper.loadCombos("", renderGenero, colGenero, urlGenero);
                                        helper.ladTerms("cveTipoTermino=2");

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

                                        $("#informationTable").parent().parent().hide();
                                        $(".InformationCteo").hide();
                                        $("#fechaConsultar").val(moment().format('DD/MM/YYYY'));
                                        $("#fechaConsultarEnd").val(moment().format('DD/MM/YYYY'));
                                        UE.delEditor("descResolucion");
                                        var ued = UE.getEditor('descResolucion');
                                        ued.ready(function () {
                                            ued.setContent("");
                                        });
                                    });
    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>