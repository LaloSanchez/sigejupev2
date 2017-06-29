<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>
    <style type="text/css">
        .alert{
            display: none;
        }

        #divHideForm{
            display: none;
            position: absolute;
            width: 100%;
            height: 100vh;
            opacity: .5;
            z-index: 99999;
            background: #427468;
        }

        #divMenssage{                
            width: 100%;
            height: 40px;
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: center;
            margin-top: 40vh;
            margin-bottom: auto;
            color: #284740;
            background: #FFFFFF;
            text-transform: uppercase;
        }

        #divImgloading{                  
            background: #FFFFFF url(img/cargando_1.gif) no-repeat;
            background-position: center;
            width: 100%;
            height: 70px;
            margin-left: auto;
            margin-right: auto;
        }

        .panel panel-default{
            background: #427468;
            color: #ebf3f1;
        }

        .panel-heading{
            background: #427468;
            color: #ebf3f1;
        }

        .panel-group .panel-heading{
            background: #427468;
            color: #ebf3f1;
        }
        .panel-default > .panel-heading{
            background: #427468;        
            color: #ebf3f1;
        }

        .rojo{
            color: #881518;
        }
        .verde{
            color: #339900;
        }
        .azul{
            color: #0000cc;
        }
    </style>
    <div id="nueva" ></div>
    <div id="anterior6" ></div>
    <div style="display:none" >
        <select id="cmbGeneroPersona" >
            <option>Selecciona una Opcion</option>
        </select>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Buscar Imputados Cateos y Ordenes de Aprehensi&oacute;n
            </h5>
        </div>
        <div class="panel-body consultaInformacon">
            <div class="form-horizontal">
                <div class="col-md-12">
                    <div class="form-group" >
                        <label class="control-label" for="txtNombreOfendido">
                            Nombre del Imputado:
                        </label>
                        <div>
                            <input type="text" class="form-control"
                                   id="txtNombreOfendido" style="text-transform:uppercase;"
                                   name="txtNombreOfendido" 
                                   placeholder="NOMBRE   APELLIDO PATERNO   APELLIDO MATERNO"
                                   onkeypress="javascript:searchImputado.validarCampo(event)">
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="control-label" for="txtCalle">
                            Calle:
                        </label>
                        <div>
                            <input type="text" class="form-control"
                                   id="txtCalle" style="text-transform:uppercase;"
                                   name="txtCalle" 
                                   placeholder="Calle"
                                   onkeypress="javascript:searchImputado.validarCampo(event)">
                        </div>
                    </div>
                    <div class="form-group" >
                        <label class="control-label" for="txtMunicipio">
                            Municipio:
                        </label>
                        <div>
                            <input type="text" class="form-control"
                                   id="txtMunicipio" style="text-transform:uppercase;"
                                   name="txtMunicipio" 
                                   placeholder="Municipio"
                                   onkeypress="javascript:searchImputado.validarCampo(event)">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12 text-center buttons ">
                            <button class="btn btn-primary" id="inputLimpiar" onclick="javascript:searchImputado.buscar(1);"> Consultar </button>
                            <button type="submit" class="btn btn-primary" id="inputLimpiar" onclick="javascript:searchImputado.limpiar();"> Limpiar </button>
                        </div>
                    </div>
                </div>
                <div id="divConsulta" style="display: none" class="col-md-12">
                    <div class="col-xs-12">
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="javascript:searchImputado.buscar(0,0);">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="javascript:searchImputado.buscar(0,1);">
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

                    <div id="cateosPersonas" class="col-md-12 table-responsive">
                        <table id="cateoTable" class="table table-bordered table-condensed table-hover" >
                            <thead>
                                <tr>
                                    <th colspan="10" class="text-center" >
                                        CATEOS
                                    </th>
                                </tr>
                                <tr>
                                    <td>Nombre</td>
                                    <td>Tipo</td>
                                    <td>Causa</td>
                                    <td>NUC</td>
                                    <td>Carp. Inv</td>
                                    <td>#Cateo</td>
                                    <td>#Cateo Especializado</td>
                                    <td>Juzgado</td>
                                    <td>Juez</td>
                                    <td>Estatus</td>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    <div id="ordenesResult" class="col-md-12 table-responsive">
                        <table id="OrdenTable" class="table table-bordered table-condensed table-hover" >
                            <thead>
                                <tr>
                                    <th colspan="9" class="text-center" >
                                        ORDENES DE APREHENSI&Oacute;N
                                    </th>
                                </tr>
                                <tr>
                                    <td>Nombre</td>
                                    <td>Causa</td>
                                    <td>NUC</td>
                                    <td>Carp. Inv</td>
                                    <td>#Orden</td>
                                    <td>#Orden Especializado</td>
                                    <td>Juzgado</td>
                                    <td>Juez</td>
                                    <td>Estatus</td>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 InformationCteo" style="display:none" >
            <div class = "text-right col-xs-12" >
                <button class = "btn btn-primary" onclick = "javascript:cateo.Back()" >Ver Listado</button>
                <br /><br />
            </div>
            <div class = "col-xs-12" style = "border: solid 4px #881518;" >
                <h4 class = "text-center ">Informaci&oacute;n de<ntype></ntype></h4>
                <div class = "panel-group" id = "RespuestaInfoCateo" role = "tablist" aria-multiselectable = "true">
                    <div class = "panel panel-default">
                        <div class = "panel-heading" role = "tab" id = "SolicitudCateoTab">
                            <h4 class = "panel-title">
                                <a role = "button" data-toggle = "collapse" data-parent = "#RespuestaInfoCateo" href = "#collapseSolicitudCateoTab" aria-expanded = "true" aria-controls = "collapseSolicitudCateoTab">
                                    Solicitud
                                </a>
                            </h4>
                        </div>
                        <div id = "collapseSolicitudCateoTab" class = "panel-collapse collapse in" role = "tabpanel" aria-labelledby = "SolicitudCateoTab">
                            <div class = "panel-body">
                                <div class = "col-xs-12" >
                                    <div class = "col-md-3 col-xs-12" ></div>
                                    <div class = "col-md-6 col-xs-12" >
                                        <div class = "table-responsive" >
                                            <div class = "text-center" >Detalles</div>
                                            <table class = "table table-striped table-hover table-bordered table-condensed" >
                                                <tr>
                                                    <th>N&uacute;mero de<ntype></ntype></th>
                                                <td><strong class = "nmcat" ></strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Nombre del Ministerio P&uacute;blico</th>
                                                    <td><strong class = "nommp" ></strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Email del Ministerio P&uacute;blico</th>
                                                    <td><strong class = "emailMp" ></strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Fecha de Solicitud</th>
                                                    <td><strong class = "fecsol" ></strong></td>
                                                </tr>
                                                <tr>
                                                    <th>Carpeta de Investigaci&oacute;n</th>
                                                    <td><strong class = "carpinv" ></strong></td>
                                                </tr>
                                                <tr style = "display:none" >
                                                    <th>NUC</th>
                                                    <td><strong class = "nucIn" ></strong></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class = "col-md-3 col-xs-12" ></div>
                                </div>
                                <div class = "col-xs-12" >
                                    <div class = "col-xs-12 text-center" >
                                        <p>&nbsp;
                                        </p>
                                        Solicitud
                                    </div>
                                    <div class = "col-xs-12" id = "informeSolicitudTexto" style = "border: 3px solid #881518;" ></div>
                                </div>
                                <div class = "col-xs-12" >
                                    <div class = "col-xs-12 text-center" ><p>&nbsp;
                                        </p>Archiv(o)s Adjuntos</div>
                                    <div class = "col-xs-12" style = "border: 3px solid #881518;" >
                                        <fileFound></fileFound>
                                    </div>
                                </div>
                                <div class = "col-xs-12" >
                                    <p>&nbsp;
                                    </p>
                                    <div class = "panel-group cateoT" id = "accordionPA" role = "tablist" aria-multiselectable = "true">
                                        <div class = "panel panel-default">
                                            <div class = "panel-heading" role = "tab" id = "PersonasApreenderse">
                                                <h4 class = "panel-title">
                                                    <a role = "button" data-toggle = "collapse" data-parent = "#accordionPA" href = "#collapsePersonasApreenderse" aria-expanded = "true" aria-controls = "collapsePersonasApreenderse">
                                                        Persona(s) que deba(n) aprehenderse
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id = "collapsePersonasApreenderse" class = "panel-collapse collapse" role = "tabpanel" aria-labelledby = "PersonasApreenderse">
                                                <div class = "panel-body">
                                                    <table id = "tblPersonas" class = "table table-bordered table-condensed table-striped" >
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
                                        <div class = "panel panel-default">
                                            <div class = "panel-heading" role = "tab" id = "Objetos">
                                                <h4 class = "panel-title">
                                                    <a class = "collapsed" role = "button" data-toggle = "collapse" data-parent = "#accordionPA" href = "#collapseObjetos" aria-expanded = "false" aria-controls = "collapseObjetos">
                                                        Objeto(s) buscado(s)
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id = "collapseObjetos" class = "panel-collapse collapse" role = "tabpanel" aria-labelledby = "Objetos">
                                                <div class = "panel-body">
                                                    <table id = "tblObjetos" class = "table table-bordered table-condensed table-striped" >
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
                                <div class = "col-xs-12" >
                                    <div class = "panel-group" id = "accordionIOD" role = "tablist" aria-multiselectable = "true">
                                        <div class = "panel panel-default">
                                            <div class = "panel-heading" role = "tab" id = "ImputadosTab">
                                                <h4 class = "panel-title">
                                                    <a role = "button" data-toggle = "collapse" data-parent = "#accordionIOD" href = "#collapseImputadosTab" aria-expanded = "true" aria-controls = "collapseImputadosTab">
                                                        Imputados
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id = "collapseImputadosTab" class = "panel-collapse collapse" role = "tabpanel" aria-labelledby = "ImputadosTab">
                                                <div class = "panel-body">
                                                    <table id = "tblImputados" class = "table table-bordered table-condensed table-striped" >
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
                                        <div class = "panel panel-default">
                                            <div class = "panel-heading" role = "tab" id = "OfendidosTab">
                                                <h4 class = "panel-title">
                                                    <a role = "button" data-toggle = "collapse" data-parent = "#accordionIOD" href = "#collapseOfendidosTab" aria-expanded = "true" aria-controls = "collapseOfendidosTab">
                                                        Victimas
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id = "collapseOfendidosTab" class = "panel-collapse collapse" role = "tabpanel" aria-labelledby = "OfendidosTab">
                                                <div class = "panel-body">
                                                    <table id = "tblVictimas" class = "table table-bordered table-condensed table-striped" >
                                                        <thead>
                                                            <tr>
                                                                <td width = "30%">Nombre</td>
                                                                <td width = "45%">Domicilio</td>
                                                                <td width = "15%">Genero</td>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class = "panel panel-default">
                                            <div class = "panel-heading" role = "tab" id = "DelitosTab">
                                                <h4 class = "panel-title">
                                                    <a role = "button" data-toggle = "collapse" data-parent = "#accordionIOD" href = "#collapseDelitosTab" aria-expanded = "true" aria-controls = "collapseDelitosTab">
                                                        Delitos
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id = "collapseDelitosTab" class = "panel-collapse collapse" role = "tabpanel" aria-labelledby = "DelitosTab">
                                                <div class = "panel-body">
                                                    <table id = "tblDelitos" class = "table table-bordered table-condensed table-striped" >
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
                                <div class = "col-xs-12 text-center" >
                                    <div id = "impresionSolicitud" ></div>
                                </div>
                                <div class = "col-xs-12 text-center" >
                                    <div class = "table-responsive" id = "consultaMotivoCancela" style = "display: none;">
                                        <table class = "table table-bordered table-hover table-striped" >
                                            <tr>
                                                <th colspan = "4" class = "text-center" >
                                                    Motivo de cancelaci&oacute;n de la solicitud de cateo
                                                </th>
                                            </tr>
                                            <tr>
                                            <tr>
                                                <td colspan = "3" >
                                                    <div id = "detalleCancelaSolicitud" ></div>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "panel panel-default">
                        <div class = "panel-heading" role = "tab" id = "RespuestaCateoTab">
                            <h4 class = "panel-title">
                                <a class = "collapsed" role = "button" data-toggle = "collapse" data-parent = "#RespuestaInfoCateo" href = "#collapseRespuestaCateoTab" aria-expanded = "false" aria-controls = "collapseRespuestaCateoTab">
                                    Respuesta
                                </a>
                            </h4>
                        </div>
                        <div id = "collapseRespuestaCateoTab" class = "panel-collapse collapse" role = "tabpanel" aria-labelledby = "RespuestaCateoTab">
                            <div class = "panel-body">
                                <div class = "col-md-12 text-center resp cateoT" >
                                    <p>RESPUESTA DE LA SOLICITUD: <strong><resp></resp></strong></p>
                                </div>
                                <br />
                                <div id = "collapseSolicitudCateoRespuestaTab" class = "panel-collapse collapse in cateoT" role = "tabpanel" aria-labelledby = "collapseSolicitudCateoRespuestaTab" style = "display: none" >
                                    <div class = "panel-body">
                                        <div class = "panel-group" id = "accordionPAR" role = "tablist" aria-multiselectable = "true">
                                            <div class = "panel panel-default" id = "RespuestaNegada" >
                                                <div class = "panel-heading" role = "tab" id = "FinalidadR">
                                                    <h4 class = "panel-title">
                                                        <a role = "button" data-toggle = "collapse" data-parent = "#accordionPAR" href = "#collapseFinalidadR" aria-expanded = "true" aria-controls = "collapseFinalidadR">
                                                            FINALIDAD
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id = "collapseFinalidadR" class = "panel-collapse collapse" role = "tabpanel" aria-labelledby = "FinalidadR">
                                                    <div class = "panel-body">
                                                        <div class = "col-xs-12 infors" >
                                                            <table class = "table table-bordered table-condensed table-striped" >
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
                                                        <div class = "col-xs-12 personasrs" >
                                                            <div class = "text-center" >APREHENDER A LA(S) PERSONA(S) SIGUIENTE(S):</div>
                                                            <table id = "tblPersonasR" class = "table table-bordered table-condensed table-striped" >
                                                                <thead>
                                                                    <tr>
                                                                        <th>Nombre</th>
                                                                        <th>Domicilio</th>
                                                                        <th>G&eacute;nero</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        <div class = "col-xs-12 objetosrs" >
                                                            <div class = "text-center" >BUSCAR LOS OBJETO(S) SIGUIENTE(S):</div>
                                                            <table id = "tblObjetosR" class = "table table-bordered table-condensed table-striped" >
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
                                            <div class = "panel panel-default">
                                                <div class = "panel-heading" role = "tab" id = "NegadaR">
                                                    <h4 class = "panel-title">
                                                        <a class = "collapsed" role = "button" data-toggle = "collapse" data-parent = "#accordionPAR" href = "#collapseNegadaR" aria-expanded = "false" aria-controls = "collapseNegadaR">
                                                            AUTORIZACI&Oacute;N NEGADA
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id = "collapseNegadaR" class = "panel-collapse collapse" role = "tabpanel" aria-labelledby = "NegadaR">
                                                    <div class = "panel-body">
                                                        <div class = "col-xs-12" id = "NegadaTexto" style = "border: 3px solid #881518;" ></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class = "panel panel-default">
                                                <div class = "panel-heading" role = "tab" id = "ResolucionR">
                                                    <h4 class = "panel-title">
                                                        <a class = "collapsed" role = "button" data-toggle = "collapse" data-parent = "#accordionPAR" href = "#collapseResolucionR" aria-expanded = "false" aria-controls = "collapseResolucionR">
                                                            RESOLUCI&Oacute;N
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id = "collapseResolucionR" class = "panel-collapse collapse" role = "tabpanel" aria-labelledby = "ResolucionR">
                                                    <div class = "panel-body">
                                                        <div class = "col-xs-12" id = "ResolucionTexto" style = "border: 3px solid #881518;" ></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class = "col-xs-12 text-center" >
                                    <div>Respuesta de Solicitud</div>
                                    <div style="display: inline;" class="buttonRespuesta" ></div> &nbsp;
                                    <div style="display: inline;" class="buttonRespuestaOficio ordenT" ></div>
                                </div>
                                <div id="imprimirOficio" ></div>
                            </div>
                        </div>
                    </div>
                    <div class = "panel cateoT panel-default" id = "ApelacionMPEtiqueta">
                        <div class = "panel-heading" role = "tab" id = "ApelacionMPTab">
                            <h4 class = "panel-title">
                                <a class = "collapsed" role = "button" data-toggle = "collapse" data-parent = "#RespuestaInfoCateo" href = "#collapseApelacionMPTab" aria-expanded = "false" aria-controls = "collapseApelacionMPTab">
                                    Recurso de Apelaci&oacute;n Presentado por MP.
                                </a>
                            </h4>
                        </div>
                        <div id = "collapseApelacionMPTab" class = "panel-collapse collapse" role = "tabpanel" aria-labelledby = "ApelacionMPTab">
                            <div class = "panel-body">
                                <div class = "col-xs-12 text-center">Agravios</div>
                                <div class = "col-xs-12 text-center" style = "border: 3px solid #881518;" >
                                    <div class = "agraviosmp" ></div>
                                </div>
                                <p>&nbsp;
                                </p>
                                <div class = "col-xs-12 text-center">Apelaci&oacute;n</div>
                                <div class = "col-xs-12 text-center" style = "border: 3px solid #881518;" >
                                    <div class = "escritoApelacion" ></div>
                                </div>
                                <div class = "col-xs-12 text-center" ><p>&nbsp;
                                    </p>Archiv(o)s Adjuntos</div>
                                <div class = "col-xs-12" style = "border: 3px solid #881518;" >
                                    <fileFoundMP></fileFoundMP>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "panel panel-default cateoT" id = "ApelacionJuezEtiqueta">
                        <div class = "panel-heading" role = "tab" id = "ApelacionJuezTab">
                            <h4 class = "panel-title">
                                <a class = "collapsed" role = "button" data-toggle = "collapse" data-parent = "#RespuestaInfoCateo" href = "#collapseApelacionJuezTab" aria-expanded = "false" aria-controls = "collapseApelacionJuezTab">
                                    Acuerdo de Juez
                                </a>
                            </h4>
                        </div>
                        <div id = "collapseApelacionJuezTab" class = "panel-collapse collapse" role = "tabpanel" aria-labelledby = "ApelacionJuezTab">
                            <div class = "panel-body">
                                <div class = "col-xs-12 text-center">Acuerdo</div>
                                <div class = "col-xs-12 text-center" style = "border: 3px solid #881518;" >
                                    <div class = "acuerdojuez" ></div>
                                </div>
                                <div class = "col-xs-12 text-center" ><p>&nbsp;
                                    </p>Archiv(o)s Adjuntos</div>
                                <div class = "col-xs-12" style = "border: 3px solid #881518;" >
                                    <fileFoundJuez></fileFoundJuez>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class = "panel panel-default cateoT" id = "ApelacionSecretarioEtiqueta">
                        <div class = "panel-heading" role = "tab" id = "ApelacionSecreatrioTab">
                            <h4 class = "panel-title">
                                <a class = "collapsed" role = "button" data-toggle = "collapse" data-parent = "#RespuestaInfoCateo" href = "#collapseApelacionSecreatrioTab" aria-expanded = "false" aria-controls = "collapseApelacionSecreatrioTab">
                                    Respuesta o Resoluci&oacute;n del Recurso
                                </a>
                            </h4>
                        </div>
                        <div id = "collapseApelacionSecreatrioTab" class = "panel-collapse collapse" role = "tabpanel" aria-labelledby = "ApelacionSecreatrioTab">
                            <div class = "panel-body">
                                <div class = "col-xs-12 text-center">Resoluci&oacute;n</div>
                                <div class = "col-xs-12 text-center" style = "border: 3px solid #881518;" >
                                    <div class = "resolucionApelacion" ></div>
                                </div>
                                <div class = "col-xs-12 text-center" ><p>&nbsp;
                                    </p>Archiv(o)s Adjuntos</div>
                                <div class = "col-xs-12" style = "border: 3px solid #881518;" >
                                    <fileFoundSecretario></fileFoundSecretario>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="sigejupe/consultasCateos/buscarImputados.js" ></script>
    <script src="sigejupe/consultasCateos/consultas.js" ></script>
    <script src="sigejupe/consultasCateos/consultasOrdenes.js" ></script>
    <script src = "sigejupe/misSolicitudes/missolicitudes.js"></script>
    <script src="sigejupe/misSolicitudes/missolicitudesordenes.js"></script>
    <script src="sigejupe/solicitudesCateos/cateos.js" ></script>
    <script src="sigejupe/solicitudesCateos/ordenes.js" ></script>
    <script src="sigejupe/solicitudesCateos/helpers.js"></script>
    <script type="text/javascript">
                    var searchImputado = new imputadosCateos();
                    var cateo = new Consultas();
                    var orden = new ConsultasOrdenes();
                    var ordenes = new Ordenes();
                    var cateos = new Cateos();
                    var helper = new Helpers();
                    $(function () {
                        var urlGenero = "Generos";
                        var renderGenero = ["cmbGeneroPersona"];
                        var colGenero = ["cveGenero", "desGenero"];
                        helper.loadCombos("", renderGenero, colGenero, urlGenero);
                    });
    </script> 
    <?php

} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>