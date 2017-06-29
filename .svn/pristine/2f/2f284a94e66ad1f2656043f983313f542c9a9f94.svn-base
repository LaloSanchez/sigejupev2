<?php
//echo json_decode("<p><a name=\"OLE_LINK6\"><\/a><a name=\"OLE_LINK5\"><\/a><a name=\"OLE_LINK4\"><\/a><a name=\"OLE_LINK3\"><\/a><a name=\"OLE_LINK2\"><\/a><a name=\"OLE_LINK1\"><\/a><strong><span style=\"font-size:11px\">A LOS SECRETARIOS DE ACUERDOS Y RESPONSABLES DEL ACTIVO FIJO: AL MOMENTO DE RECIBIR LA ASIGNACI\u00c3\u0093N DE EQUIPO DE C\u00c3\u0093MPUTO, OFICINA, MANTENIMIENTO, MOBILIARIO, SEGURIDAD Y COMUNICACI\u00c3\u0093N, TENDR\u00c3\u0081N LA OBLIGACI\u00c3\u0093N DE REMITIR EL ALTA CORRESPONDIENTE A LA DIRECCION DE CONTROL PATRIMONIAL, EN UN T\u00c3\u0089RMINO DE TRES D\u00c3\u008dAS H\u00c3\u0081BILES CONTADOS A PARTIR DE <\/span><\/strong><strong><span style=\"font-size:11px\">LA FECHA DE<\/span><\/strong><strong><span style=\"font-size:11px\"> RECEPCI\u00c3\u0093N DE LOS BIENES.<\/span><\/strong><span style=\"font-size:8px\"> <\/span><\/p><br\/>");
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
// version 14/01/2016..
//$_POST['idActuacionPadre'] = "X";
if (!isset($_SESSION)) {
    @session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idActuacionArbol = "";
    $idCarpetaJudicialArbol = "";
    $cveTipoCarpetaArbol = "";
    $procedencia = 0;
    if (isset($_POST['idActuacion'])) {
        $idActuacionArbol = @$_POST['idActuacion'];
    }
    if (isset($_POST['idReferencia']) OR isset($_POST['idReferenciaAcuerdo'])) {
        $idCarpetaJudicialArbol = @$_POST['idReferencia'] . @$_POST['idReferenciaAcuerdo'];
    }
    if (isset($_POST['cveTipoCarpeta'])) {
        $cveTipoCarpetaArbol = @$_POST['cveTipoCarpeta'];
    }
    if (isset($_POST['idActuacionPadre']) OR isset($_POST['idActuacionAcuerdo'])) {
        $idActuacionPadre = @$_POST['idActuacionPadre'] . @$_POST['idActuacionAcuerdo'];
    }


    if ($idCarpetaJudicialArbol == "" && $idActuacionPadre == "" && $cveTipoCarpetaArbol == "" && $idActuacionArbol == "") {
        $procedencia = 0; // formulario general
    } else if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") || ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "") || ($idActuacionPadre != 0 && $idActuacionPadre != "")) {
        $procedencia = 1; // viene de arbol
    } else if ($idCarpetaJudicialArbol == "" && $idActuacionPadre == "" && $cveTipoCarpetaArbol == 0) {
        $procedencia = 1; // viene de arbol el formulario general
        $asignaValoresArbol = 1;
    }
    ?>
    <div id="libsSign"></div>
    <style type="text/css">
        .container {
            background-image: url("img/bg.png");
        }
        #divFoto {
            position:absolute;
            left:75%;
            top:-30%;
        }

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
        .needed:after {
            color:darkred;
            content: " (*)";
        }
        .row-centered {
            text-align:center;
        }
        .col-centered {
            display:inline-block;
            float:none;
            /* reset the text-align */
            text-align:left;
            /* inline-block space fix */
            margin-right:-4px;
        }
    </style>
    <input type="hidden" id="hiddenSolicitudTerminada" value="" >
    <input type="hidden" id="hiddenIdActuacion" value="" >
    <input type="hidden" id="hiddenProcedencia" value="<?php echo $procedencia; ?>" >
    <input type="hidden" id="hiddenIdActuacionPadre" value="<?php echo $idActuacionPadre; ?>" >
    <input type="hidden" id="hiddenIdPromocion" value="" >
    <input type="hidden" id="hiddenIdActuacionRef" value="<?php echo $_POST['idReferenciaAcuerdo']; ?>" >
    <input type="hidden" id="hiddenIdActuacionPerito" value="" >
    <input type="hidden" id="hiddenIdActuacionAcu" value="<?php echo $_POST['idActuacionAcuerdo']; ?>" >
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="<?php echo $_POST['cveTipoCarpeta']; ?>" >
    <input type="hidden" id="hiddenDatoCarpeta" value="" >
    <input type="hidden" id="hddIdSolicitud" value="" >
    <input type="hidden" id="hddIdSeguimiento" value="" >
    <input type="hidden" id="hddIdPerito" value="" >
    <input type="hidden" id="hddCveAdscripcion" value="<?php echo $_SESSION['cveAdscripcion']; ?>" >
    <input type="hidden" id="hiddenNombre" value="<?php echo $_SESSION['nombre']; ?>" >
    <input type="hidden" id="hiddenAdscripcion" value="<?php echo $_SESSION['desAdscripcion']; ?>" >
    <input type="hidden" id="hiddenIdActuacionPromocion" value="" >
    <input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >
    <input type="hidden" id="hiddenNombrePerito" value="" >
    <input type="hidden" id="hiddenIdPerito" value="" >
    <input type="hidden" id="hiddenCedulaPerito" value="" >
    <input type="hidden" id="hiddenNumeroEmpleadoPerito" value="" >
    <input type="hidden" id="hddCveGrupo" value=""/>
    <input type="hidden" id="hddNomPerito" value=""/>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Solicitud de Perito
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal" onclick="obtenerDias();">
                <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar();" style="display: none">                                    
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'>Juzgado</label>
                    <div class="col-md-9">
                        <div id="divCmbJuzgado" class="logobox"></div>
                        <select class="form-control" name="cmbJuzgado" id="cmbJuzgado" onchange="cargaTipoCarpeta();
                                changeLabel(this);" >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                
                </div>
                <div class="modal fade" id="modalProtesta" role="dialog">
                    <div class="modal-dialog" style="width:80%">
                        <div class="modal-content">
                            <div class="modal-header panel-heading" style="padding:25px 40px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="panel-title" id="h5tituloProtesta"><span ></span>Toma de protesta</h4>
                            </div>
                            <div class="modal-body" style="padding:25px 20px;">
                                <div id="divTomaProtesta">
                                    <div id="listaProtestas" class="form-group" style="display:none">
                                        <div class="col-md-6">
                                            <label class="control-label col-md-3">PROTESTA Y DICTAMEN:</label><br>
                                            <label class="control-label" id="totalRegProtestas"></label>
                                            <label class="control-label">Pagina:</label>
                                            <select  name="cmbPaginacionProtestas" id="cmbPaginacionProtestas" onchange="consultarProtestas(false, true);">
                                                <option value="1">1</option>
                                            </select>
                                            <label class="control-label">Registros por p&aacute;gina:</label>
                                            <select  name="cmbNumRegProtestas" id="cmbNumRegProtestas" onchange="consultarProtestas(true, true);">
                                                <option value="10">10</option>
                                                <option value="15">15</option>
                                                <option value="20">20</option>
                                                <option value="25">25</option>
                                                <option value="40">40</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select>
                                        </div><br>
                                        <div id="divTableResultProtestas" class="col-md-10">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 needed">Documento a presentar:</label>
                                        <select  name="cmbEstatus" id="cmbEstatus" onchange="cargarPlantilla();">
                                            <option value="0">SELECCIONE UNA OPCI&Oacute;N</option>
                                            <!--<option value="3">TOMA DE PROTESTA</option>
                                            <option value="4">PRESENTACI&Oacute;N DE DICTAMEN</option>
                                            <option value="5">PROMOCI&Oacute;N</option>-->
                                        </select>
                                    </div><br>
                                    <div class="form-group" style="display:none;" id="divTerminarProtesta">
                                        <label class="control-label col-md-2">Terminar:</label>
                                        <div class="col-md-8">
                                            <input id="checkTerminarProtesta" type="checkbox" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group" style="display:none;" id="divSintesisPromocion">
                                        <label class="control-label col-md-2 needed">S&iacute;ntesis:</label>
                                        <div class="col-md-8">
                                            <input id="txtSintesisPromocion" type="text" class="form-control mayuscula" value="" maxlength="300">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-2 needed">Contenido del documento:</label>
                                        <div class="col-md-10">
                                            <script id="SintesisProtesta" type="text/plain" style="width: 95%; height: 270px; margin: 0px auto;"></script>
                                        </div>
                                    </div>
                                    <div class="form-group" id="divFechaProtesta">
                                        <label class="control-label col-md-3 needed" id="labelProtesta">Fecha</label>                
                                        <input type="text" id="txtfechaProtesta" placeholder="FECHA TERMINO" class="datepicker" data-date-format="dd/mm/yyyy"/>
                                    </div>
                                    <div class="form-group" id="divNumPromocion" style="display:none;">
                                        <label class="control-label col-md-5" id="labelNumPromocion"></label>  
                                    </div>
                                    <div class="form-group" id="divMensaje" style="text-align:center; display:none;">
                                        <label style="text-align:left" class="control-label" id="labelMensaje"></label> 
                                        <div>
                                            <input id="inputMensaje" type="submit" class="btn btn-primary" value="Entendido" onclick="ocultarMensaje();">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div id="divAlertWarningModal" class="alert alert-warning alert-dismissable">                    
                                            <strong>Advertencia!</strong> Mensaje
                                        </div>
                                        <div id="divAlertSuccesModal" class="alert alert-success alert-dismissable">

                                            <strong>Correcto!</strong> Mensaje
                                        </div>
                                        <div id="divAlertDagerModal" class="alert alert-danger alert-dismissable">

                                            <strong>Error!</strong> Mensaje
                                        </div>
                                        <div id="divAlertInfoModal" class="alert alert-info alert-dismissable">

                                            <strong>Informaci&oacute;n!</strong> Mensaje
                                        </div>    
                                    </div>
                                </div>
                                <div class="form-group" align="center">
                                    <input id="inputGuardarProtesta" type="submit" class="btn btn-primary" value="Guardar" onclick="guardarProtesta();">
                                    <input id="inputCancelarProtesta" type="submit" class="btn btn-primary" value="Cerrar" data-dismiss="modal">
                                    <input type="submit" class="btn btn-primary" value="Limpiar" onclick="limpiarModalProtesta();">
                                    <input type="submit" class="btn btn-primary" id="inputPDFModal" data-toggle="modal" onclick="enviarPromocion();"  value="Generar PDF" style="display: none">
                                    <input type="submit" class="btn btn-primary" id="inputVisorModal" data-toggle="modal" data-target="#ModalVisorPDF" value="Visor" onclick="javascript:visorDocumentos();" style="display: none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalCancelar" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header panel-heading" style="padding:25px 45px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="panel-title" id="h5titulo"><span ></span>&iexcl;Advertencia!</h4>
                            </div>
                            <div class="modal-body" style="padding:35px 60px;">
                                <label>&#191;Est&aacute; seguro de borrar la solicitud de perito?</label><br><br>
                                <div class="form-group">                                                                
                                    <label class="control-label col-md-2 needed">Motivo de cancelaci&oacute;n:</label>
                                    <label class="control-label col-md-2" id="ayudaMotivo"></label>
                                    <div class="col-md-7">
                                        <textarea id="motivoCancelacion" rows="4" cols="50" maxlength="350" style="resize:none"></textarea>
                                    </div>                                
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <div id="divAlertWarningEliminar" class="alert alert-warning alert-dismissable">                    
                                            <strong>Advertencia!</strong> Mensaje
                                        </div>
                                        <div id="divAlertSuccesEliminar" class="alert alert-success alert-dismissable">
                                            <strong>Correcto!</strong> Mensaje
                                        </div>
                                        <div id="divAlertDagerEliminar" class="alert alert-danger alert-dismissable">
                                            <strong>Error!</strong> Mensaje
                                        </div>
                                        <div id="divAlertInfoEliminar" class="alert alert-info alert-dismissable">
                                            <strong>Informaci&oacute;n!</strong> Mensaje
                                        </div>    
                                    </div>
                                </div> 
                                <div class="form-group" align="center">
                                    <input type="submit" id="inputEliminarConfirmado" class="btn btn-primary" value="Aceptar" onclick="eliminarSolicitudes();">
                                    <input type="submit" class="btn btn-primary" value="Cerrar" data-dismiss="modal">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="modalAvisos" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header panel-heading" style="padding:25px 45px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="panel-title" id="h5titulo"><span ></span>&iexcl;Advertencia!</h4>
                            </div>
                            <div class="modal-body" style="padding:35px 60px;">
                                <label id="mensajeAvisoModal"></label><br><br>
                                <div class="form-group" align="center">
                                    <input type="submit" class="btn btn-primary" value="Aceptar" data-dismiss="modal">
                                    <input type="submit" class="btn btn-primary" value="Cancelar" data-dismiss="modal">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed">Relacionado con</label>
                    <div class="col-md-9">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control" name="cmbTipoCarpeta" id="cmbTipoCarpeta" onchange="changeLabel(this)">

                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed" id="lblRelationName">No.</label>
                    <div id="divSinRelacion" class="col-md-9">
                        <input type="text" id="txtNumero" class="form-inline" id="txtNumero" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="txtAnio" id="txtAnio" maxlength="4" placeholder="A&ntilde;o" value="<?php echo date("Y") ?>">
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-primary" id="buscaPromocion" value="Buscar acuerdos/actas minimas" onclick="buscarPromocion('buscarLimpio', '', true);">                                                        
                    </div>                                
                </div>
                <div id="divConsultaSolicitudes" style="display: none" align="center">
                    <div class="col-xs-10">
                        <label class="control-label">HISTORIAL DE SOLICITUDES DE PERITO REALIZADAS</label><br>
                        <label class="control-label" id="totalRegSolicitudes"></label>
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacionSolicitudes" id="cmbPaginacionSolicitudes" onchange="consultarSolicitudes(false, true);">
                            <option value="1">1</option>
                        </select>
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumRegSolicitudes" id="cmbNumRegSolicitudes" onchange="consultarSolicitudes(true, true);">
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                            <option value="25">25</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                    <div id="divTableResultSolicitudes" style="width:80%">
                    </div>
                </div>
                <div id="divBuscaPromocion" class="form-group" style="display: none">
                    <label class="control-label col-md-3 ">Datos del acuerdo:</label>
                    <div class="col-md-9">                    
                        <label class="form-inline" id="promocionSel"></label>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <div id="divConsultaActuaciones" style="display: none;height: 175px; border-top: 1px solid rgb(208, 220, 203); width: 100%; overflow-x: hidden; overflow-y: scroll; " class="col-xs-8" >
                        <div id="divTableResultActuaciones" class="col-xs-8" style="width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="form-group" id="PeritoAsignado">                                                                
                    <label class="control-label col-md-3 needed">Datos de la Solicitud</label>
                    <div class="col-md-9">                   
                        <label id="peritoAsignado"></label>
                        <div id="divFoto" class="col-md-3"></div> 
                    </div>        

                </div> 
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed">Materia Pericial</label>
                    <div class="col-md-9">
                        <div id="divCmbMateriaPericial" class="logobox"></div>
                        <select class="form-control" name="cmbMateriaPericial" id="cmbMateriaPericial"  onchange='cargaPeritosRelacionados(this.value);' >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div> 
                <div id="divAuxEditor" style="display:none;"></div>
                <div class="form-group" id="Historial">                                                                
                    <label class="control-label col-md-3 needed">Perito relacionado:</label>
                    <div class="col-md-9">
                        <div id="divCmbMateriaPericial" class="logobox"></div>
                        <select class="form-control" name="cmbPeritoRelacionado" id="cmbPeritoRelacionado">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div> 
                <div class="form-group" id="Fechas"> 
                    <label class="col-md-3 needed">Fecha Solicitud</label>                
                    <input type="text" id="txtfechaI" placeholder="FECHA INICIO" class="datepicker" value="<?php echo date("d/m/Y") ?>" disabled="disabled" data-date-format="dd/mm/yyyy"/>                
                    <label class="col-md-3 needed" style="display:none">Fecha Protesta</label>                
                    <input type="text" id="txtfechaT" style="display:none" placeholder="FECHA TERMINO" class="datepicker" data-date-format="dd/mm/yyyy" value="<?php echo date("d/m/Y") ?>"/>                
                </div> 
                <div class="form-group" id="MDias" style="display:none">      
                    <label class="col-md-3 needed">Dias naturales</label>  
                    <input placeholder="N&uacute;mero" id="numer" name="numer" onkeypress="return valida(event)" type="text">
                    <input placeholder="N&uacute;mero" id="numerOculto" name="numerOculto" onkeypress="return valida(event)" type="hidden">
                    <input type="checkbox" name="Editar" id="Editar" value="0" onclick="cambioDia(this.value)"><b>Modifica d&iacute;a</b>                                
                </div> 
                <div class="form-group" id="MMotivo" style="display:none">      
                    <label class="control-label col-md-3 needed">Motivo</label>                
                    <div class="col-sm-2"> 
                        <textarea id="txtMotivo" name="txtMotivo" cols="50" rows="2" onkeyup="this.value.toUpperCase()"></textarea>
                    </div>                
                </div> 
                <div id="divRangoFechas" style="display: none">
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Fecha Inicio:</label>
                        <div class="col-xs-2">
                            <input type="text" id="txtfechaInicial" placeholder="FECHA INICIO" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Fecha Fin:</label>
                        <div class="col-xs-2">
                            <input type="text" id="txtfechaFinal" placeholder="FECHA FIN" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
                        </div>
                    </div>    
                </div>
                <div id="divNotas" class="form-group">
                    <label class="control-label col-md-3 needed">Contenido del documento</label>
                    <div class="col-md-9">                    
                        <script id="Sintesis" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                    </div>
                </div>
                <div class="form-group" id="Motivo">                                                                
                    <label class="control-label col-md-3 needed">Motivo Cancelaci&oacute;n:</label>
                    <div class="col-md-9">                   
                        <label id="motivo" style="text-transform: uppercase; resize: none"></label>
                    </div>                                
                </div> 
                <br>
                <br>
                <div class="form-group">
                    <div class="col-md-12">
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
                </div>  
                <div class="form-group">
                    <div class="col-md-12">
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
                <div class="form-group ">
                    <div class="col-md-offset-3  row-centered">
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputGuardar" value="Guardar" onclick="buscarTipoCarpeta();">                                                        
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="button" class="btn btn-primary btn-adaptar" id="inputProtesta" data-toggle="modal" value="Tomar Protesta" onclick="consultarProtestas(true, true)" style="display: none">
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="consultar();" style="display: none">                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputBuscar" value="Buscar" onclick="consultarSolicitudes(true);" style="display: none">                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputEliminar" value="Eliminar" onclick="eliminarSolicitudesPrevio()" style="display: none">                           
                        </div>                                     
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar();">                                    
                        </div>                                            
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" onclick="print()">                                    
                        </div>

                        <div class="col-md-2 botonesAdaptar">                        
                            <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="enviar();" style="">Generar PDF</button>
                        </div>

                        <div class="col-md-2 botonesAdaptar">                        
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#VisorPDF" data-toggle="modal" value="Visor" onclick="javascript:visorDocumentosPerito();" style="display: none">
                        </div>
                    </div>
                </div>
            </div>
            <div id="divConsulta" style="display: none" class="col-xs-12">
                <div class="col-xs-12">
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1);
                                $('#cmbPaginacion').val(1)">                                                    
                    </div>

                    <div class="form-group col-xs-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-xs-2" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarSolicitudes(false);">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarSolicitudes(true);">
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
                <div id="divTableResult" class="col-xs-12">
                </div>
                <div id="divFormatoImpresion">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="VisorPDF" tabindex="-1" role="dialog" aria-labelledby="VisorPDF">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="h4VisorPDF">Visor de documentos</h4>
                </div>
                <div class="modal-body" id="visorPerito" style="max-height: 500px; overflow: scroll;"></div>

            </div>
        </div>
    </div>
    <!-- Modal visor -->
    <div class="modal fade" id="ModalVisorPDF" tabindex="-1" role="dialog" aria-labelledby="VisorPDF">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalH4VisorPDF">Visor de documentos</h4>
                </div>
                <div class="modal-body" id="visor" style="max-height: 500px; overflow: scroll;"></div>

            </div>
        </div>
    </div>
    <?php echo "hola"; include_once '../modalFirma.php';?>
    <script src="js/Firma.js" type="text/javascript"></script>
    <script src="js/firmaElectronica.js" ></script>
    <script>
        enviarAPeritos = function() {
            if ($("#hddUrlPdf").val() == "") {
                $("#spanMnjFirma").html('PRECAUCI\u00D3N. NO SE HA OBTENIDO LA URL DEL PDF FIRMADO. NO SE PODR\u00C1 ENVIAR EL ARCHIVO FIRMADO AL SISTEMA DE PERITOS.');
                $("#spanMnjFirma").show();
                return false;
            }
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/solicitudesperitos/SolicitudesPeritosController.php",
                data: { accion: 'enviarArchivoFirmado',
                    idSeguimientoSolicitud: $("#hddIdSeguimiento").val(),
                    rutaPdf: $("#hddUrlPdf").val(),
                    idReferencia: $("#hiddenIdPromocion").val(),
                    cveTipoDocumentoFirma: "3"
                },
                async: false,
                dataType: "html",
                success: function(datos) {
                    console.log("Funcion enviar a peritos: " + datos);
                    try {
                        var json = eval("(" + datos + ")");
                        if (json.estatus != "ok") {
                            $('#btnEnviar').show();
                            $("#spanMnjFirma").html(json.msj +' Intentelo manualmente (clic en el bot\u00F3n: Enviar a Peritos)');
                            $("#spanMnjFirma").show();
                        }
                    } catch (err) {
                        $('#btnEnviar').show();
                        $("#spanMnjFirma").html('Error del servidor. Intentelo manualmente (clic en el bot\u00F3n: Enviar a Peritos)');
                        $("#spanMnjFirma").show();
                    }
                }
            });
        };
        var fielnetPJ = new fielnet.Firma({
            subDirectory: "js/scriptsFirma",
            ajaxAsync: false,
            controller: "http://dticursos.pjedomex.gob.mx/sigejupev2/controladores/sigejupe/firmaelectronicahtml5/FirmaElectronicaController.php"
            //controller: "../../sigejupeB/controladores/sigejupe/firmaelectronicahtml5/FirmaElectronicaController.php"
        });
        var firma = new firmaElectronica();
        firma.callbackFn = enviarAPeritos;//transfiere el archivo firmado al sistema de peritos
        firma.cveTipoActuacion = 3;//cveTipoDocumentoFirma (promocion)
        firma.scapeUrl = "http://dticursos.pjedomex.gob.mx/sigejupev2";
        firma.desActuacion = "la Promocion";
        firma.ignorarFirmaLogin = true;//ignora la firma del login (solicita la firma)
        firma.hacerDigestionPdf = "S";//forzamos a realizar la digestion del pdf (si no existe), la cual es levada en el metodo: validateStatusSignActuacion
    </script>
    <script type="text/javascript">
        //var juzgadoSesion1 = <?php echo $_SESSION['nombre']; ?>;
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
        var procedencia = <?php echo $procedencia; ?>;
        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';
        if (editor != undefined) {
            editor.destroy();
        }
        var editor = null;
        if (editorProtesta != undefined) {
            editorProtesta.destroy();
        }
        var editorProtesta = null;
        var expediente = null;//contendra los ofendidos, los imputados y los delitos.
        var protestas = null;//contendra la protesta y/o conclusion sobre la solicitud de perito
        var plantillas = null;//contendra las plantillas de protesta o conclusion
        var cveMateriasPericiales = null;//contendra las materias periciales que posea un expediente (solicitudes de peritos)

        buscarPromocion = function (buscarLimpio, idActuacion, traerConsulta) {
            //if ($('#buscaPromocion').prop('checked')) {
            var pag = 1;//$("#cmbPaginacion").val();
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var cantReg = 100;//$("#cmbNumReg").val();
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            var error = 0;
            var mensaje = "seleccione: ";

            if (cveTipoCarpeta == 9) {
                cveTipoCarpeta = 0;
            }
            if ($("#cmbTipoCarpeta").val() == "0") {
                error = 1;
                mensaje += " tipo de carpeta \n";
            }
            if ($("#txtNumero").val() == "") {
                error = 2;
                mensaje += " numero \n";
            }
            if ($("#txtAnio").val() == "") {
                error = 3;
                mensaje += " año ";
            }
            //console.log("Errores: " + error);
            if (error == 0) {
                var strDatos = "accion=consultarOficios";
                if (idActuacion != null && idActuacion !== "") {
                    strDatos += "&idActuacion=" + idActuacion;
                }
                strDatos += "&numero=" + $("#txtNumero").val();
                strDatos += "&anio=" + $("#txtAnio").val();
                strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
                strDatos += "&cveTipoActuacion=2,6";// busca acuerdos o actas minimas
                strDatos += "&activo=S";           //actuaciones activas
                strDatos += "&pag=" + pag;
                strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
                strDatos += "&cveJuzgado=" + cveJuzgado[0];
                //console.log("datosConsulta: " + strDatos);
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        //                ToggleLoading(1);
                    },
                    success: function (datos) {
                        //console.log(datos);                  
                        var json = "";
                        var table = "";
                        json = eval("(" + datos + ")"); //Parsear JSON                        
                        if (json.totalCount > 0) {
                            table += "<table id='tblResultadosGridAct' width='60%' height='175' cellspacing='0' cellpadding='0' border='0' align='center' >";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>N&uacute;m.</th>";
                            table += "<th>Tipo</th>";
                            table += "<th>Sintesis</th>";
                            table += "<th>Estatus</th>";
                            table += "<th>Fecha Registro</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            var band = 0;
                            for (var i = 0; i < json.total; i++) {
                                if (json.data[i].cveTipoActuacion == "2" || json.data[i].cveTipoActuacion == "6") {
                                    if (json.data[i].cveEstatus == "1" || json.data[i].cveEstatus == "2" || json.data[i].cveEstatus == "3") {
                                        table += "<tr  bgcolor='#EDF9E8' onmouseout='this.style.backgroundColor=\"#EDF9E8\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer; background-color: rgb(237, 249, 232);' onclick=\"consultaIdActuacion('" + json.data[i].idReferencia + "','" + json.data[i].idActuacion + "','RESOLUCION: " + json.data[i].descTipoResolucion + " <FONT COLOR>ESTATUS: " + json.data[i].descEstatus + "</FONT>',' " + json.data[i].fechaRegistro + "'," + null + "," + traerConsulta + ")\">";
                                        band = 1;
                                    } else {
                                        table += "<tr  bgcolor='#EDF9E8' onmouseout='this.style.backgroundColor=\"#EDF9E8\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer; background-color: rgb(237, 249, 232);' onclick=\"consultaIdActuacion('" + json.data[i].idReferencia + "','" + json.data[i].idActuacion + "','ACTAMINIMA',' " + json.data[i].fechaRegistro + "','" + json.data[i].sintesis + "'," + traerConsulta + ")\">";
                                    }
                                    table += "<td > " + (i + 1) + "</td>";
                                    if (json.data[i].cveTipoCarpeta != "") {
                                        table += "<td>" + json.data[i].descTipoCarpeta + " - " + json.data[i].numero + "/" + json.data[i].anio + "</td>";
                                    }

                                    if (json.data[i].cveTipoActuacion == "6") {
                                        table += "<td>" + json.data[i].sintesis + "</td>";
                                        table += "<td>ACTA MINIMA</td>";
                                    } else {
                                        table += "<td>" + json.data[i].descTipoResolucion + "</td>";
                                        table += "<td>" + json.data[i].descEstatus + "</td>";
                                    }
                                    table += "<td>" + json.data[i].fechaRegistro + "</td>";
                                    table += "</tr> ";
                                }
                            }
                            if (idActuacion != null && idActuacion !== "") {
                                if (band) {
                                    consultaIdActuacion(json.data[0].idReferencia, json.data[0].idActuacion, "RESOLUCION: " + json.data[0].descTipoResolucion + " <FONT COLOR>ESTATUS: " + json.data[0].descEstatus + "</FONT>", json.data[0].fechaRegistro, null, traerConsulta);
                                } else {
                                    consultaIdActuacion(json.data[0].idReferencia, json.data[0].idActuacion, "ACTAMINIMA", json.data[0].fechaRegistro, json.data[0].sintesis, traerConsulta);
                                }
                            } else {
                                $("#divConsultaActuaciones").show();
                                $("#divTableResultActuaciones").show();
                                $("#divTableResultActuaciones").html(table);
                            }
                        } else {
                            $("#divAlertInfo").html('' + json.text);
                            $("#divAlertInfo").show("slide");
                            setTimeAlert("divAlertInfo");

                            $("#divConsultaActuaciones").hide();
                            $("#divTableResultActuaciones").html("");
                            $("#buscaPromocion").attr("checked", false);
                            $("#promocionSel").html("No se encontraron Acuerdos/Actas Minimas: ");
                        }
                        $("#buscaPromocion").removeAttr("disabled");
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            } else {
                $("#mensajeAvisoModal").text(mensaje);
                $("#modalAvisos").modal("show");
                $("#buscaPromocion").attr("checked", false);
            }
        };
        enviarPromocion = function () {
            var strDatos = "accion=generarJson";
            strDatos += "&cveTipo=2"; //2 = actuacion
            strDatos += "&cveTipoDocumento=13"; //tipo documento promocion
            strDatos += "&idActuacion=" + $("#hiddenIdPromocion").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    var json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        generaPDF(datos);
                        $("#divAlertSuccesModal").show("slide");
                        $("#divAlertSuccesModal").html("PDF GENERADO CORRECTAMENTE");
                        $("#divAlertSuccesModal").show("slide");
                        setTimeAlert("divAlertSuccesModal");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDagerModal").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDagerModal").show("slide");
                    setTimeAlert("divAlertDagerModal");
                }
            });
        };
        visorDocumentosPerito = function () {
            //console.log("idActuacion: " +$("#hiddenIdActuacionPerito").val());
            $.ajax({
                type: 'POST',
                url: 'visorpdf/index.php',
                data: {idCarpetaJudicial: "", idActuacion: $("#hiddenIdActuacionPerito").val(), cveTipoDocumento: 1},
                async: false,
                dataType: 'html',
                beforeSend: function () {
                    $('#visorPerito').html('<h3>Consultando informaci�n ... espere.</h3>');
                },
                success: function (data) {
                    //console.log(data)
                    $('#visorPerito').html(data);
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#visorPerito').html('<h3>Ocurri&oacute; un error, intente nuevamente. ' + otroobj + '</h3>');
                    //console.log('\nOBJ: ' + objeto + '\nQ: ' + quepaso + '\nO:' + otroobj)
                }
            });
        };
        visorDocumentos = function () {
            $.ajax({
                type: 'POST',
                url: 'visorpdf/index.php',
                data: {idCarpetaJudicial: "", idActuacion: $("#hiddenIdPromocion").val(), cveTipoDocumento: 13}, //malo
                //                data: {idCarpetaJudicial: 0, idActuacion: 14525, cveTipoDocumento: 13}, //bueno
                async: false,
                dataType: 'html',
                beforeSend: function () {
                    $('#visor').html('<h3>Consultando informaci�n ... espere.</h3>');
                },
                success: function (data) {
                    //console.log(data)
                    $('#visor').html(data);
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. ' + otroobj + '</h3>');
                    //console.log('\nOBJ: ' + objeto + '\nQ: ' + quepaso + '\nO:' + otroobj)
                }
            });
        };
        //funcion para limpiar los datos de la modal de captura de protesta
        limpiarModalProtesta = function () {
            //$("#cmbEstatus option[value='5']").hide();
            $("#cmbEstatus").removeAttr('disabled');
            $("#cmbEstatus").val('0');
            $("#txtSintesisPromocion").val("");
            cargarPlantilla();
            ocultarMensaje();
        };

        ocultarMensaje = function () {
            $("#labelMensaje").html("");
            $("#divMensaje").hide();
        };

        //Funcion para guardar la protesta o conclusion del perito
        guardarProtesta = function () {
            if ($("#hiddenSolicitudTerminada").val() == "S") {
                $("#divAlertWarningModal").show();
                $("#divAlertWarningModal").html("NO PUEDE GUARDAR EL REGISTRO PORQUE YA SE ENCUENTRA TERMINADA LA SOLICITUD.");
                $("#divAlertWarningModal").show("slide");
                setTimeAlert("divAlertWarningModal");
                return 0;
            }
            var cveJuzgadoAux = $("#cmbJuzgado").val().split("/");
            var sintesisProtesta;
            sintesisProtesta = editorProtesta.getContent();
            sintesisProtesta = sintesisProtesta.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');
            var strDatos = "accion=guardarProtesta";
            strDatos += "&idSolicitudePerito=" + $("#hddIdSolicitud").val();
            strDatos += "&idSeguimientoSolicitud=" + $("#hddIdSeguimiento").val();
            strDatos += "&observaciones=" + sintesisProtesta;
            strDatos += "&cveUsuarioSolicitante=" + cveUsuarioSesion;
            strDatos += "&cveEstatusSolicitud=" + $("#cmbEstatus").val();
            strDatos += "&fechaProtesta=" + $("#txtfechaProtesta").val();
            strDatos += "&cveAdscripcion=" + cveJuzgadoAux[0];
            strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            strDatos += "&descJuzgado=" + $('#cmbJuzgado option:selected').text();
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&idPromocion=" + $("#hiddenIdPromocion").val();
            strDatos += "&idReferencia=" + $("#hiddenIdActuacionRef").val();//id de referencia (expediente)
            strDatos += "&sintesis=" + $("#txtSintesisPromocion").val();//sintesis de la promocion (en caso de aplicar)
            strDatos += "&nombrePerito=" + $('#hiddenNombrePerito').val();
            strDatos += "&idPerito=" + $('#hiddenIdPerito').val();
            strDatos += "&cedulaPerito=" + $('#hiddenCedulaPerito').val();
            strDatos += "&desMateriaPericial=" + $('#cmbMateriaPericial option:selected').text();
            strDatos += "&solicitudTerminada=" + $("#hiddenSolicitudTerminada").val();
            if (protestas != null && protestas.length > 0) {
                strDatos += "&ningunSeguimiento=S";
            } else {
                if ($("#cmbEstatus").val() == "3") {//toma de protesta
                    strDatos += "&ningunSeguimiento=N";
                }
            }
            if ($("#cmbEstatus").val() == "16") {//definitiva
                $("#checkTerminarProtesta").prop("disabled", true);
                $("#checkTerminarProtesta").prop("checked", true);
                $("#hiddenSolicitudTerminada").val("S");
            }
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/solicitudesperitos/SolicitudesPeritosController.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    var error = 0;
                    var mensaje = "";
                    if ($("#cmbEstatus").val() === "0") {
                        error++;
                        mensaje += " .-ESTATUS DE LA PROTESTA O DICTAMEN O PROMOCI\u00D3N";
                    }
                    if ($("#cmbEstatus").val() === "10" && $("#txtSintesisPromocion").val() === "") {
                        error++;
                        mensaje += " .-S\u00CDNTESIS DE LA PROMOCI\u00D3N.";
                    }
                    if (sintesisProtesta === "") {
                        error++;
                        mensaje += " .-CONTENIDO DEL DOCUMENTO.";
                    }
                    if (error > 0) {
                        $("#divAlertWarningModal").show();
                        $("#divAlertWarningModal").html('FALTA: ' + mensaje);
                        $("#divAlertWarningModal").show("slide");
                        setTimeAlert("divAlertWarningModal");
                        return false;
                    }
                    $("#inputGuardarProtesta").hide();
                },
                success: function (datos) {
                    if ($("#hiddenSolicitudTerminada").val() != "S") {
                        $("#inputGuardarProtesta").show();
                    }
                    var json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        if (json.permisoWeb != null) {
                            var html = "SE LE HA OTORGADO EL PERMISO PARA VER EL EXPEDIENTE.";
                            html += "<br>LIGA DE CONSULTA:<br><a href='http://electronico.pjedomex.gob.mx/electronico/vistas/externos/indexnew.php' target='_blank'>http://electronico.pjedomex.gob.mx/electronico/vistas/externos/indexnew.php</a>";
                            html += "<br>USUARIO: " + json.permisoWeb[0].usuarioPerito;
                            html += "<br>CONTRASE\u00D1A: " + json.permisoWeb[0].passwordPerito;
                            if (json.notificacion != null && json.notificacion.length > 0 && json.notificacion[0].estatusCorreo == "ok") {
                                html += "<br><br>NOTA: <br>SE LE HA ENVIADO UN C. E. A SU DIRRECC\u00D3N: " + json.notificacion[0].correo;
                            } else {
                                html += "<br><br>NOTA: <br>NO SE CUENTA CON SU CORREO ELECTR\u00D3NICO, POR LO QUE DEBE TOMAR NOTA DEL USUARIO Y CONTRASE\u00D1A PARA CONSULTAR EL EXPEDIENTE. SE LE RECOMIENDA QUE LLAME A LA DIRECCI\u00D3N DE PERITOS PARA ACTUALIZAR SUS DATOS PERSONALES.";
                            }
                            $("#labelMensaje").html(html);
                            $("#divMensaje").show();
                        } else {
                            $("#divMensaje").hide();
                        }
                        if ($("#hiddenProcedencia").val() == 1) {
                            getTree();
                        }
                        $("#inputGuardarProtesta").hide();
                        $("#hiddenIdPromocion").val(json.resultados[0].idReferenciaPromocion);
                        $("#hddIdSeguimiento").val(json.resultados[0].idSeguimientoSolicitud);
                        if ($("#cmbEstatus").val() == "10") {
                            $("#divNumPromocion").show();
                            $("#labelNumPromocion").html("N\u00FAm. promoci\u00F3n: " + json.resultados[0].numeroPromocion + "/" + json.resultados[0].anioPromocion);
                        } else {
                            //$("#inputPDFModal").show();
                            $("#inputVisorModal").show();
                        }
                        consultarProtestas(true);
                        //protestas = json.resultados;
                        $("#divAlertSuccesModal").show();
                        $("#divAlertSuccesModal").html("REGISTRO GUARDADO CORRECTAMENTE");
                        $("#divAlertSuccesModal").show("slide");
                        setTimeAlert("divAlertSuccesModal");
                        firma.cveGrupo = $("#hddCveGrupo").val();
                        firma.nombreUsuario = $("#hddNomPerito").val();
                        firma.idActuacion = json.resultados[0].idReferenciaPromocion;
                        firma.validateStatusSignActuacion();
                    } else {
                        $("#hiddenSolicitudTerminada").val("");
                        $("#inputGuardarProtesta").show();
                        $("#divAlertDagerModal").show();
                        $("#divAlertDagerModal").html(json.msj);
                        $("#divAlertDagerModal").show("slide");
                        setTimeAlert("divAlertDagerModal");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    if ($("#hiddenSolicitudTerminada").val() != "S") {
                        $("#inputGuardarProtesta").show();
                    }
                    $("#divAlertDagerModal").show();
                    $("#divAlertDagerModal").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDagerModal").show("slide");
                    setTimeAlert("divAlertDagerModal");
                }
            });
        };
        /**consulta las protestas o conclusiones (seguimientos) que se han dado sobre la solicitud de perito**/
        consultarProtestas = function (paginacion, bandera) {
            if (bandera != null) {
                limpiarModalProtesta();
            }
            var strDatos = "accion=consultarProtestas";
            strDatos += "&idSolicitudePerito=" + $("#hddIdSolicitud").val();
            strDatos += "&cvesEstatusSolicitud=3,4";
            strDatos += "&cveMateria=3";//materia penal
            strDatos += "&cveMateriaPericial=" + $("#cmbMateriaPericial").val();
            //expediente:
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            strDatos += "&cveAdscripcion=" + cveJuzgado[0];
            strDatos += "&nvaInstancia=" + cveJuzgado[1];
            strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            //paginacion
            strDatos += "&paginacion=true"
            strDatos += "&pag=" + $("#cmbPaginacionProtestas").val();
            strDatos += "&cantxPag=" + $("#cmbNumRegProtestas").val();
            if ($("#hddIdSolicitud").val() === "") {
                $("#divAlertInfo").show();
                $("#divAlertInfo").html('DEBE CAPTURAR PRIMERO LA SOLICITUD DE PERITO.');
                $("#divAlertInfo").show("slide");
                setTimeAlert("divAlertInfo");
                return false;
            }
            if ($('#hiddenCedulaPerito').val() == "") {
                $("#cmbMateriaPericial").val("0");
                $("#mensajeAvisoModal").text("ERROR. NO SE POSEE LA C\u00C9DULA DEL PERITO. LLAME A LA DIRECCI\u00D3N DE PERITOS, PARA QUE ACTUALIZEN LOS DATOS PERSONALES DEL PERITO, Y POSTERIORMENTE PUEDA CAPTURAR LA TOMA DE PROTESTA.");
                $("#modalAvisos").modal("show");
                return false;
            }
            $("#divTableResultProtestas").html("");
            $("#listaProtestas").hide();
            //console.log("Datos: " + strDatos);
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/solicitudesperitos/SolicitudesPeritosController.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {

                },
                success: function (datos) {
                    var json = eval("(" + datos + ")"); //Parsear JSON
                    $("#modalProtesta").modal("show");
                    $("#txtfechaProtesta").val(fechaMySQLaNormal(json.fechaActual, true));
                    if (json.expediente !== null) {
                        expediente = json.expediente;
                    }
                    if (json.estatusSolicitudes != null && json.estatusSolicitudes.length > 0) {
                        var aux = json.estatusSolicitudes.length, j;
                        $("#cmbEstatus").html("");
                        $("#cmbEstatus").append($('<option></option>').val("0").html("SELECCIONE UNA OPCI\u00D3N"));
                        for (j = 0; j < aux; j++) {
                            $("#cmbEstatus").append($('<option></option>').val(json.estatusSolicitudes[j].cveEstatusSolicitud).html(json.estatusSolicitudes[j].descEstatusSolicitud));
                        }
                    }
                    if (json.plantillas !== null) {
                        plantillas = json.plantillas;
                    } else {
                        $("#divAlertDagerModal").show();
                        if (json.mnj !== null) {
                            $("#divAlertDagerModal").html(json.mnj + " INTENTELO NUEVAMENTE.");
                        } else {
                            $("#divAlertDagerModal").html("INTENTELO NUEVAMENTE (PROBLEMA DE CONEXI\u00D3N).");
                        }
                        $("#divAlertDagerModal").show("slide");
                        setTimeAlert("divAlertDagerModal");
                    }
                    $("#hiddenSolicitudTerminada").val(json.solicitudTerminada);
                    if (json.totalCount > 0) {
                        $("#cmbEstatus option[value='4']").show();
                        $("#cmbEstatus option[value='10']").show();
                        protestas = json.resultados;
                        var i, table = "";
                        table += "<table id='tblResultadosGridAct' align='center'>";
                        table += "<thead><tr><th>N&uacute;m.</th><th>Tipo</th><th>Fecha Registro</th><th>Promocion</th>";
                        table += "</tr></thead><tbody>";
                        for (i = 0; i < json.totalCount; i++) {
                            var evento = "onclick=\"cargaProtesta('" + i + "')\"";
                            table += "<tr " + evento + " bgcolor='#EDF9E8' onmouseout='this.style.backgroundColor=\"#EDF9E8\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer; background-color: rgb(237, 249, 232);'>";
                            table += "<td>" + (i + 1) + "</td>";
                            table += "<td>" + $("#cmbEstatus option[value='" + json.resultados[i].cveEstatusSolicitud + "']").text() + "</td>";
                            table += "<td>" + fechaMySQLaNormal(json.resultados[i].fechaRegistro) + "</td>";
                            table += "<td>";
                            if (json.resultados[i].promocion != null) {
                                table += "<b>" + json.resultados[i].promocion.numPromocion + "/" + json.resultados[i].promocion.anioPromocion + "<br>Sintesis: </b>";
                                table += json.resultados[i].promocion.sintesis + "<br><b>Fecha Registro: </b>" + fechaMySQLaNormal(json.resultados[i].promocion.fechaRegistro);
                                //table += "<br><input type='submit' class='btn btn-primary' onclick='verPromocion(" + i + ");'  value='Ver Promoci\u00F3n'>";
                            }
                            table += "</td></tr>";
                        }
                        table += "</tbody></table>";
                        $("#divTableResultProtestas").html(table);
                        $("#listaProtestas").show();
                        if (paginacion) {
                            calcularPaginas('Protestas', json.totalRegistros);
                        }
                    } else {
                        $("#cmbEstatus option[value='4']").hide();//ocultamos el dictamen
                        $("#cmbEstatus option[value='10']").hide();//ocultamos el dictamen
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#mensajeAvisoModal").text("ERROR EN LA PETICION: " + quepaso);
                    $("#modalAvisos").modal("show");
                }
            });
        };

        verPromocion = function (indice) {
            $("#cmbEstatus").attr('disabled', 'disabled');
            $("#cmbEstatus").val('10');
            $("#cmbEstatus option[value='10']").show();
            $("#hiddenIdPromocion").val(protestas[indice].idReferenciaPromocion);
            $("#hddIdSeguimiento").val(protestas[indice].idSeguimientoSolicitud);
            $("#inputPDFModal").hide();
            $("#inputVisorModal").hide();
            $("#divSintesisPromocion").show();
            $("#txtSintesisPromocion").val(protestas[indice].promocion.sintesis);
            $("#txtfechaProtesta").val(fechaMySQLaNormal(protestas[indice].promocion.fechaRegistro, true));
            $("#labelProtesta").text("Fecha promoci\u00F3n:");
            editorProtesta.setContent(protestas[indice].promocion.observaciones, false);
            $("#inputGuardarProtesta").hide();
            $("#divDocumento").hide();
            $("#labelDocumento").html("");
        };

        cargaProtesta = function (indice) {
            $("#txtSintesisPromocion").val("");
            $("#divSintesisPromocion").hide();
            $("#cmbEstatus").attr('disabled', 'disabled');
            $("#cmbEstatus").val(protestas[indice].cveEstatusSolicitud);
            $("#hiddenIdPromocion").val(protestas[indice].idReferenciaPromocion);
            $("#hddIdSeguimiento").val(protestas[indice].idSeguimientoSolicitud);
            //$("#inputPDFModal").show();
            $("#inputVisorModal").show();
            $("#txtfechaProtesta").val(fechaMySQLaNormal(protestas[indice].fechaRegistro, true));
            editorProtesta.setContent(protestas[indice].observaciones, false);
            $("#inputGuardarProtesta").hide();
            if ($("#cmbEstatus").val() == "3") {
                $("#labelProtesta").text("Fecha protesta:");
            }
            if ($("#cmbEstatus").val() == "4") {
                $("#labelProtesta").text("Fecha conclusi\u00F3n:");
            }
            $("#divDocumento").show();
            $("#labelDocumento").html("Documento seleccionado: " + $("#cmbEstatus option[value='" + protestas[indice].cveEstatusSolicitud + "']").text()
                    + "<br>Fecha registro: " + fechaMySQLaNormal(protestas[indice].fechaRegistro));
            firma.cveGrupo = $("#hddCveGrupo").val();
            firma.nombreUsuario = $("#hddNomPerito").val();
            firma.idActuacion = protestas[indice].idReferenciaPromocion;
            firma.validateStatusSignActuacion();
        };

        cargarPlantilla = function () {
            $("#divFechaProtesta").show();
            $("#divNumPromocion").hide();
            $("#txtSintesisPromocion").val("");
            $("#labelNumPromocion").html("");
            $("#divDocumento").hide();
            $("#labelDocumento").html("");
            $("#divSintesisPromocion").hide();
            $("#labelProtesta").text("Fecha:");
            editorProtesta.setContent("", false);
            $("#hiddenIdPromocion").val("");
            $("#hddIdSeguimiento").val("");
            $("#inputPDFModal").hide();
            $("#inputVisorModal").hide();
            $("#inputGuardarProtesta").hide();
            $("#divTerminarProtesta").hide();
            if ($("#hiddenSolicitudTerminada").val() == "S") {
                $("#checkTerminarProtesta").prop("disabled", true);
                $("#checkTerminarProtesta").prop("checked", true);
            } else {
                $("#checkTerminarProtesta").prop("checked", false);
                $("#checkTerminarProtesta").prop("disabled", false);
            }
            if ($("#cmbEstatus").val() == "3" || $("#cmbEstatus").val() == "4") {
                var expediente = {
                    perito: $('#hiddenNombrePerito').val(),
                    materia: $('#cmbMateriaPericial option:selected').text(),
                    numEmpleado: $('#hiddenNumeroEmpleadoPerito').val(),
                    expediente: $('#txtNumero').val() + '/' + $('#txtAnio').val()
                };
                var plantilla = obtenTextoPorDefaultHtml(expediente);
                editorProtesta.setContent(plantilla, false);
                if ($("#hiddenSolicitudTerminada").val() != "S") {
                    $("#inputGuardarProtesta").show();
                }
            }
            if ($("#cmbEstatus").val() == "3") {
                $("#labelProtesta").text("Fecha protesta:");
            }
            if ($("#cmbEstatus").val() == "4") {
                $("#labelProtesta").text("Fecha dictamen:");
                //$("#divTerminarProtesta").show();
            }
            if ($("#cmbEstatus").val() == "10") {
                $("#divFechaProtesta").hide();
                $("#labelProtesta").text("Fecha promoci\u00F3n:");
                if ($("#hiddenSolicitudTerminada").val() != "S") {
                    $("#inputGuardarProtesta").show();
                }
                $("#divSintesisPromocion").show();
                $("#divTerminarProtesta").show();//sin comentario
            }
        };
        /**carga la plantilla de protesta (toma de protesta o dictamen)**/
        obtenTextoPorDefaultHtml = function (objeto) {
            var i, total = plantillas.length;
            var encontrado = -1;
            for (i = 0; i < total; i++) {
                if (plantillas[i].cveEstatusSolicitud === $("#cmbEstatus").val()) {
                    encontrado = i;
                    i = total;
                }
            }
            if (encontrado === -1) {
                return "";
            }
            $("#divAuxEditor").html(plantillas[encontrado].contenidoPlantilla);
            $("#strongExpediente").html(objeto.expediente);
            $("#strongPerito").html(objeto.perito);
            $(".strongMateria").html(objeto.materia);
            $("#strongNumEmpleado").html(objeto.numEmpleado);
            $("#strongCveMateria").html("PENAL");
            if (expediente !== null) {
                var total, i, aux = "";
                if (expediente.ofendidos !== null) {
                    total = expediente.ofendidos.length;
                    for (i = 0; i < total; i++) {
                        if (expediente.ofendidos[i].cveTipoPersona == 1) {
                            aux += expediente.ofendidos[i].nombreCompleto + ", ";
                        } else {
                            aux += expediente.ofendidos[i].nombreMoral + ", ";
                        }
                    }
                    if (total > 0) {
                        $("#strongActores").html("OFENDIDO(S): " + aux);
                        aux = "";
                    }
                }
                if (expediente.imputados !== null) {
                    total = expediente.imputados.length;
                    for (i = 0; i < total; i++) {
                        if (expediente.imputados[i].cveTipoPersona == 1) {
                            aux += expediente.imputados[i].nombreCompleto + ", ";
                        } else {
                            aux += expediente.imputados[i].nombreMoral + ", ";
                        }
                    }
                    if (total > 0) {
                        $("#strongDemandados").html("IMPUTADO(S): " + aux);
                        aux = "";
                    }
                }
                if (expediente.delitos !== null) {
                    total = expediente.delitos.length;
                    for (i = 0; i < total; i++) {
                        aux += expediente.delitos[i].desDelito + ", ";
                    }
                    if (total > 0) {
                        $("#strongJuicio").html("DELITO(S): " + aux);
                    }
                }
            }
            var contenido = $("#divAuxEditor").html();
            $("#divAuxEditor").html("");
            return contenido;
        };
        buscarTipoCarpeta = function () {
            var hiddenIdActuacion = $("#hiddenIdActuacion").val();
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var numAct = $("#txtNumero").val();
            var aniAct = $("#txtAnio").val();
            var cveMateriaPericial = $("#cmbMateriaPericial").val();
            var numer = $("#numer").val();
            var perRelacionado = $("#cmbPeritoRelacionado").val();
            var fechaT = $("#txtfechaT").val();
            //var Notas = $("#Sintesis").val();        
            var Seleccion = $("#promocionSel").html();
            var strDatos = "";
            var error = 0;
            var mensaje = "";
            var Sintesis = editor.getContent();
            Sintesis = Sintesis.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');
            var cveJuzgadoAux = $("#cmbJuzgado").val().split("/");
            var cveJuzgado = cveJuzgadoAux[0];
            $("#inputProtesta").hide();
            if (hiddenIdActuacion == "") {
                error = 2;
                mensaje += "   - Seleccione el acuerdo para guardar";
            }
            if (cveTipoCarpeta == 0) {
                error = 1;
                mensaje += "   - Relaci&oacute;n con";
            }
            if (Seleccion == "" || Seleccion == "Su acuerdo que selecciono tiene estatus de publicado") {
                error = 1;
                mensaje += "   - Seleccione el acuerdo para guardar";
            }
            if (numAct == "" && cveTipoCarpeta != 9) {
                error = 2;
                mensaje += "   - N&uacute;mero";
            }
            if (aniAct == "" && cveTipoCarpeta != 9) {
                error = 3;
                mensaje += "   - A&ntilde;o";
            }
            if (cveMateriaPericial == 0 && cveTipoCarpeta != 9) {
                error = 4;
                mensaje += "   - Materia Pericial";
            }
            if (fechaT == "" && cveTipoCarpeta != 9) {
                error = 3;
                mensaje += "   - Fecha final para saber los dias de protesta";
            }
            if (isNaN(numer) || numer == "") {
                error = 5;
                mensaje += "   - Numero de dias";
            }
            if (isNaN(numer) || numer == "") {
                error = 5;
                mensaje += "   - Numero de dias";
            }
            if (cveMateriaPericial == "" && cveTipoCarpeta != 9) {
                error = 6;
                mensaje += "   - Resoluci&oacute;n";
            }
            if (perRelacionado == "") {
                error = 7;
                mensaje += "   - Perito relacionado con el expediente";
            }
            if ($('input[name="Editar"]').is(':checked')) {
                if ($("#txtMotivo").val().trim() === "") {
                    error = true;
                    mensaje += "Falta ingresar el motivo de la modificacion \n";
                }
            }
            if (Sintesis == "" && cveTipoCarpeta != 9) {
                error = 5;
                mensaje += "   - Contenido del documento";
            }
            if (error == 0) {
                $('#inputGuardar').hide();
                if (cveTipoCarpeta != 9) {
                    $.ajax({
                        type: "POST",
                        url: "../controladores/sigejupe/solicitudesperitos/SolicitudesPeritosController.php",
                        async: true,
                        dataType: "html",
                        data: {
                            accion: "insert",
                            TipoAsignacion: "A",
                            observaciones: Sintesis,
                            cveTipoCarpeta: cveTipoCarpeta,
                            numero: numAct,
                            anio: aniAct,
                            cveJuzgado: cveJuzgado,
                            numerox: $("#txtNumero").val(),
                            aniox: $("#txtAnio").val(),
                            cveAdscripcion: cveJuzgado,
                            cveMateria: "3",
                            nvaInstancia: "1",
                            materiaPericial: $("#txtMotivo").val(),
                            PersonaSolicitante: $("#hiddenNombre").val(),
                            cveUsuarioSolicitante: cveUsuarioSesion,
                            cveTipoNumero: cveTipoCarpeta,
                            cveMateriaPericial: cveMateriaPericial,
                            idPerito: $("#cmbPeritoRelacionado").val(),
                            diasProtesta: $("#numer").val(),
                            idActuacion: $("#hiddenIdActuacionRef").val(),
                            idActuacionAcuerdo: $("#hiddenIdActuacionAcu").val(),
                            fechaSolicitud: $("#hiddenFechaActual").val()
                        },
                        success: function (info) {
                            //console.log("Solicitud: " + info);
                            var data = eval("(" + info + ")"); //Parsear JSON
                            if (data.estatus == "ok") {
                                $("#divHideForm").hide();
                                $("#divAlertSucces").show();
                                $("#divAlertSucces").html("Solicitud de perito registrada exitosamente");
                                $("#divAlertSucces").show("slide");
                                setTimeAlert("divAlertSucces");
                                $("#inputProtesta").show();
                                $('#PeritoAsignado').show();
                                $("#inputImprimir").show();
                                $("#inputEliminar").show();
                                $('#buscaPromocion').hide();
                                $('#inputPDF').show();
                                $("#inputVisor").show();
                                $('#hiddenCedulaPerito').val(data.resultados[0].cedulaPerito);
                                $("#hiddenNombrePerito").val(data.resultados[0].nomPerito);
                                $('#hiddenIdPerito').val(data.resultados[0].idPerito);
                                $("#hddIdSolicitud").val(data.resultados[0].idSolicitudePerito);
                                $("#hddIdPerito").val(data.resultados[0].idPerito);
                                $("#hiddenIdActuacionPerito").val(data.resultados[0].idActuacionPerito);
                                if (data.resultados[0].nomPerito == null) {
                                    $("#peritoAsignado").html("Fecha Solicitud: " + data.resultados[0].fechaSolicitudOri + " <br> Numero de solicitud: " + data.resultados[0].numeroSolicitud + "/" + data.resultados[0].anioSolicitud + " <br> Perito: FALTA POR ASIGNAR PERITO" + "<br>" + "<br>" + "Fecha de protesta para el perito: " + data.resultados[0].fechaDiasProtesta);
                                } else {
                                    $("#peritoAsignado").html("Fecha solicitud: " + data.resultados[0].fechaSolicitudOri + " <br> Numero de solicitud: " + data.resultados[0].numeroSolicitud + "/" + data.resultados[0].anioSolicitud + " <br>Perito asignado: " + data.resultados[0].nomPerito + "<br>" + "<br>" + "Fecha de protesta para el perito: " + data.resultados[0].fechaDiasProtesta);
                                }
                                if (data.resultados[0].activo == "S") {
                                    $('#Motivo').hide();
                                }
                                $("#cmbJuzgado").attr("disabled", 'disabled');
                                $("#cmbTipoCarpeta").attr('disabled', 'disabled');
                                $("#buscaPromocion").attr("disabled", "disabled");
                                $("#cmbMateriaPericial").attr('disabled', 'disabled');
                                $("#numer").attr('disabled', 'disabled');
                                $("#Sintesis").attr('disabled', 'disabled');
                                $("#txtNumero").attr('disabled', 'disabled');
                                $("#txtAnio").attr('disabled', 'disabled');
                                var html = "<table align='center' style='border-collapse:collapse'>";
                                html += "<tr height='50'>";
                                html += "<td align='center' colspan='2'><font size='3'><b>ACUSE DE SOLICITUD DE PERITO </b></font></td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Numero de solicitud: </b></td>";
                                html += "<td align='left'><b>" + data.resultados[0].numeroSolicitud + "/" + data.resultados[0].anioSolicitud + "</b></td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Perito asignado: </b></td>";
                                if (data.resultados[0].nomPerito == null) {
                                    html += "<td align='left'><b>FALTA POR ASIGNAR PERITO</b></td>";
                                } else {
                                    html += "<td align='left'><b>" + data.resultados[0].nomPerito + "</b></td>";
                                }
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Numero de " + $("#cmbTipoCarpeta option:selected").html().toLowerCase() + ":</b></td>";
                                html += "<td align='left'>" + data.resultados[0].numero + "/" + data.resultados[0].anio + "</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Juzgado: </b></td>";
                                html += "<td align='left'>" + $("#hiddenAdscripcion").val() + "</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Instancia: </b></td>";
                                html += "<td align='left'>PRIMERA INSTANCIA</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Materia: </b></td>";
                                html += "<td align='left'>PENAL</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Fecha asignaci\u00f3n: </b></td>";
                                html += "<td align='left'>" + $("#hiddenFechaActual").val() + "</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Materia Pericial:</b></td>";
                                html += "<td align='left'>" + $("#cmbMateriaPericial option:selected").html() + "</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Dias protesta cargo:</b></td>";
                                html += "<td align='left'>" + $("#numer").val() + "</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Fecha protesta:</b></td>";
                                html += "<td align='left'>" + data.resultados[0].fechaDiasProtesta + "</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Observaciones: </td>";
                                html += "<td align='left'>" + $("#Sintesis").val() + "</td>";
                                html += "</tr>";
                                html += "</table>";
                                $("#Editar").attr("disabled", true);
                                $('#divFormatoImpresion').html(html);
                                $('#barCarga').html("");
                                if (data.resultados[0].imagen > 0) {
                                    $("#divFoto").show();
                                    obtenerFoto(data.resultados[0].imagen);
                                    $("#hddCveGrupo").val(data.resultados[0].imagen);
                                    $("#hddNomPerito").val(data.resultados[0].nomPerito);
                                } else {
                                    $("#divFoto").hide();
                                }
                                if ($("#hiddenProcedencia").val() == 1) {
                                    getTree();
                                }
                            } else {
                                $("#inputGuardar").show();
                                $("#divAlertDager").show();
                                $("#divAlertDager").html(data.msj);
                                $("#divAlertDager").show("slide");
                                setTimeAlert("divAlertDager");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            $("#inputGuardar").show();
                            $("#divInformacion").show();
                            $("#divInformacion").html("Error en la peticion. Intentelo nuevamente\n\n");
                            $("#divInformacion").show("slide");
                            setTimeAlert("divInformacion");
                        }
                    });
                } else {
                    // no busca carpeta y guarda ACUERDO sin relacion
                    //strDatos += "&idActuacionAntecede=" + $("#hiddenIdActuacionPromocion").val();
                    //guardarAcuerdo(strDatos);
                }


            } else {
                $("#divInformacion").show();
                $("#divInformacion").show();
                $("#divInformacion").html("Informaci&oacute;n! seleccione: " + mensaje);
                setTimeAlert("divInformacion");
            }

        };
        cambioDia = function (value) {
            if (value == true) {
                $('#MMotivo').hide();
                $('#txtMotivo').hide();
                $("#TRDia").hide();
                $("#txtMotivo").val("");
                $("#numer").val($("#numerOculto").val());
                $("#numer").attr('disabled', 'disabled');
                $("#txtMotivo").removeClass("cajaError");
                $("#Observaciones").removeClass("cajaError");
                document.getElementById("Editar").value = "0";
            } else {
                $('#MMotivo').show();
                $('#txtMotivo').show();
                $("#numer").removeAttr("disabled");
                $("#TRDia").show();
                $("#txtMotivo").val("");
                document.getElementById("Editar").value = "1";
            }
            $('#numer').val("");
        };
        cargaTipoCarpeta = function (cveJuz) {
            $('#cmbTipoCarpeta').empty();
            var tipoJuzgado = $("#cmbJuzgado").val().split("/");

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        $("#cmbTipoCarpeta").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                        for (var i = 0; i < json.totalCount; i++) {
                            if (tipoJuzgado[1] != undefined) {
                                switch (tipoJuzgado[1]) {
                                    case "1": // tipo de juzgado de control
                                        if (json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // exhorto, amparo
                                            $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "2": // tipo de juzgado juicio
                                        if (json.data[i].cveTipoCarpeta == "3" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // exhorto, amparo 
                                            $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "3": // tipo de juzgado ejecucion                                        
                                        if (json.data[i].cveTipoCarpeta == "5" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // exhorto, amparo                                            
                                            $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "4": // tipo de juzgado tribunal
                                        if (json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // exhorto, amparo 
                                            $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "5": // verificar queda pendiente*************************
                                        //                                if(json.data[i].cveTipoCarpeta == "4"){ // tipo carpeta causa de juicio
                                        //                                    $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        //                                }
                                        break;
                                }
                            }

                        }
                        $("#cmbTipoCarpeta").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                    }
                    $('#divCmbRelaciones').hide();

                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        cargaResolucion = function () {
            var strDatos = "";
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/materiaspericiales/MateriasPericiales.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON                        
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            if (json.resultados[i].cveMateriaPericial == "1" || json.resultados[i].cveMateriaPericial == "20" || json.resultados[i].cveMateriaPericial == "2" || json.resultados[i].cveMateriaPericial == "21" || json.resultados[i].cveMateriaPericial == "4" || json.resultados[i].cveMateriaPericial == "24" || json.resultados[i].cveMateriaPericial == "13" || json.resultados[i].cveMateriaPericial == "6" || json.resultados[i].cveMateriaPericial == "29" || json.resultados[i].cveMateriaPericial == "31" || json.resultados[i].cveMateriaPericial == "33" || json.resultados[i].cveMateriaPericial == "8" || json.resultados[i].cveMateriaPericial == "49" || json.resultados[i].cveMateriaPericial == "16" || json.resultados[i].cveMateriaPericial == "11" || json.resultados[i].cveMateriaPericial == "41" || json.resultados[i].cveMateriaPericial == "17" || json.resultados[i].cveMateriaPericial == "51") {
                                $("#cmbMateriaPericial").append($('<option></option>').val(json.resultados[i].cveMateriaPericial).html(json.resultados[i].descMateriaPericial));
                                $('#PeritoAsignado').hide();
                                $('#MMotivo').hide();
                            }
                        }
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show();
                    $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show("slide");
                    setTimeAlert("divInformacion");
                }
            });
        };
        cargaPeritosRelacionados = function (value) {
            if ($("#cmbJuzgado").val() === "0") {
                $("#cmbMateriaPericial").val("0");
                $("#mensajeAvisoModal").text("SELECCIONE EL JUZGADO.");
                $("#modalAvisos").modal("show");
            }
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            var strDatos = "numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&cveAdscripcion=" + cveJuzgado[0];
            strDatos += "&nvaInstancia=" + cveJuzgado[1];
            strDatos += "&cveMateriaPericial=" + value;
            var i, bandera = true, cantMaterias = 0;
            if (value === 0) {
                return false;
            }
            var mensaje = "FALTA: ";
            var error = 0;
            if ($("#txtNumero").val() == "") {
                mensaje += " -N\u00DAMERO";
                error++;
            }
            if ($("#txtAnio").val() == "") {
                mensaje += " -AN\u00D1O";
                error++;
            }
            if ($("#hiddenIdActuacion").val() == "") {
                mensaje += " -SELECCIONAR ACUERDO / ACTA M\u00CDNIMA";
                error++;
            }
            if (error > 0) {
                $("#cmbMateriaPericial").val("0");
                $("#mensajeAvisoModal").text(mensaje);
                $("#modalAvisos").modal("show");
                return false;
            }
            if (cveMateriasPericiales != null) {
                var total = cveMateriasPericiales.length;
                for (i = 0; i < total; i++) {
                    if (cveMateriasPericiales[i] === value) {
                        if (cveMateriasPericiales[i] == 16) {//materia pericial = psiquiatria
                            cantMaterias++;
                        } else {
                            bandera = false;
                            i = total;
                        }
                    }
                }
            }
            if (cantMaterias > 1) {
                $("#cmbMateriaPericial").val("0");
                $("#mensajeAvisoModal").text("NO PUEDE SELECCIONAR TAL MATERIA, PORQUE YA HA SOLICITADO  M\u00C1S DE UN PERITO EN DICHA MATERIA. SELECCIONE OTRA MATERIA PERICIAL.");
                $("#modalAvisos").modal("show");
                $("#divAlertDager").html("NO PUEDE SELECCIONAR TAL MATERIA, PORQUE YA HA SOLICITADO  M\u00C1S DE UN PERITO EN DICHA MATERIA");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
                return bandera;
            }
            if (!bandera) {
                $("#cmbMateriaPericial").val("0");
                $("#mensajeAvisoModal").text("NO PUEDE SELECCIONAR TAL MATERIA, PORQUE YA HA SOLICITADO UN PERITO EN DICHA MATERIA. SELECCIONE OTRA MATERIA PERICIAL.");
                $("#modalAvisos").modal("show");
                $("#divAlertDager").html("NO PUEDE SELECCIONAR TAL MATERIA, PORQUE YA HA SOLICITADO UN PERITO EN DICHA MATERIA");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
                return bandera;
            }
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/solicitudesperitos/ConsultarPeritosAsignados.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    //console.log(datos);
                    if (datos !== "") {
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON                        
                        if (json.totalCount > 0) {
                            $("#cmbPeritoRelacionado").html("");
                            $("#cmbPeritoRelacionado").append($('<option></option>').val("0").html("Seleccione una opci\u00F3n"));
                            for (var i = 0; i < json.totalCount; i++) {
                                $("#cmbPeritoRelacionado").append($('<option></option>').val(json.resultados[i].idPerito).html(json.resultados[i].nomPerito));
                                //$('#PeritoAsignado').hide();
                                //$('#MMotivo').hide();
                                //$('#Historial').show();
                            }
                        } else {
                            $('#Historial').hide();
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    // $("#divInformacion").show();
                    //$("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    //$("#divInformacion").show("slide");
                    //setTimeAlert("divInformacion");
                }
            });
        };
        cargaJuzgados = function () {
            var strDatos = "accion=distrito";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    var json = "";
                    try {
                        json = eval("(" + datos + ")"); //Parsear JSON
                        if (json.totalCount > 0) {
                            for (var i = 0; i < json.totalCount; i++) {
                                $("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                if (juzgadoSesion == json.data[i].cveJuzgado) {
                                    $("#cmbJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                }
                            }
                            cargaTipoCarpeta();
                        } else {
                            $("#mensajeAvisoModal").text("ERROR. NO SE ENCONTRO NING\u00DAN JUZGADO. NO PODR\u00C1 CONTINUAR CON LA SOLICITUD DE PERITO");
                            $("#modalAvisos").modal("show");
                        }
                    } catch (err) {
                        $("#mensajeAvisoModal").text("ERROR DE CONEXI\u00D3N (" + err.message + ". " + datos + "). INTENTE RECARGANDO LA PAGINA.");
                        $("#modalAvisos").modal("show");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        changeLabel = function (objOption) {
    <?php if ($_POST["idActuacionAcuerdo"] == "" || $_POST["idActuacionPadre"] == "") { ?>
                // $("#inputGuardar").hide();
    <?php } else { ?>
                $("#buscaPromocion").show();
    <?php } ?>
            $("#lblRelationName").html("No. " + $("#" + objOption.id + " option:selected").text() + ":");
            $("#hiddenCveTipoCarpeta").val($("#cmbTipoCarpeta").val());
            if ($("#cmbTipoCarpeta").val() == 9) { // sin relacion...
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#hddIdSolicitud").val("");
                $("#hddIdPerito").val("");
                $("#divSinRelacion").hide();
                $("#divBuscaPromocion").hide();
                $("#hddIdSolicitud").val("");
            } else {
                $("#hddIdSolicitud").val("");
                $("#hddIdPerito").val("");
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#hddIdSolicitud").val("");
                $("#divSinRelacion").show();
                //$("#buscaPromocion").removeAttr("disabled");
            }
        };

        //*********************************************************************************************************************    
        consultaIdActuacion = function (idRef, id, desTipoCarpeta, numPromocion, Obs, traerConsulta) {
            $("#hiddenIdActuacion").val(id);//id del acuerdo o de la acta minima
            consultarSolicitudes(true, true, traerConsulta);
            $("#hiddenIdActuacionRef").val(idRef);
            $("#hiddenIdActuacionAcu").val(id);//id del acuerdo o de la acta minima
            $("#divConsultaActuaciones").hide();
            $("#divTableResultActuaciones").hide();
            var strPub = new Array();
            var strPub2 = new Array();
            if (desTipoCarpeta !== "ACTAMINIMA") {
                strPub = desTipoCarpeta.split(":");
                strPub2 = strPub[2].split("</FONT>");
            }
            if ($.trim(strPub2[0]) == "ACUERDO" || $.trim(strPub2[0]) == "PROYECTO DE ACUERDO" || $.trim(strPub2[0]) == "PUBLICADO" || desTipoCarpeta == "ACTAMINIMA") {
                if (desTipoCarpeta == "ACTAMINIMA") {
                    $("#divBuscaPromocion").show();
                    $("#promocionSel").html(numPromocion + " - " + desTipoCarpeta + " - " + Obs);
                } else {
                    $("#divBuscaPromocion").show();
                    $("#promocionSel").html("Acuerdo: " + numPromocion + " - " + desTipoCarpeta);
                }
            } else {
                $("#promocionSel").html("Su acuerdo que selecciono tiene estatus de publicado");
                $("#divAlertDager").html("No se puede realizar la solicitud de perito porque el acuerdo esta publicado el acuerdo");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        };

        consutaIdCarpetaJudicial = function (idRef, cveTipoCarpeta) {
            changeDivForm(1);
            var strDatos = "accion=consultarCarpetaExhortoAmparoById"; //seleccionar
            strDatos += "&idEAC=" + idRef;
            strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    //console.log("CJ: " + datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        //$("#hiddenIdActuacion").val(json.data[0].idActuacion);
                        $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                        $("#txtNumero").val(json.data[0].numero);
                        $("#txtAnio").val(json.data[0].anio);
                        $("#numer").attr('disabled', 'disabled');
                        //console.log("idActuacion_carpetajudicial: " + json.data[0].idActuacion);
                        if (json.data[0].cveTipoCarpeta != "" && json.data[0].numero != "" && json.data[0].anio != "") {
                            buscarPromocion("", $("#hiddenIdActuacionPadre").val(), true);
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
            $('divTableResultActuaciones').click();
        };
        consultar = function () {
            $("#hiddenDatoCarpeta").val($("#cmbTipoCarpeta").val());
            $("#peritoAsignado").html("");
            $("#PeritoAsignado").hide();
            $("#Fechas").hide();
            $("#divConsultaActuaciones").hide();
            $("#divTableResultActuaciones").hide();
            $("#divTableResultActuaciones").html("");
            $("#divBuscaPromocion").hide();
            $("#promocionSel").html("");
            $("#cmbMateriaPericial").removeAttr("disabled");
            $("#txtNumero").removeAttr("disabled");
            $("#txtAnio").removeAttr("disabled");
            $("#cmbTipoCarpeta").removeAttr("disabled");
            $("#buscaPromocion").removeAttr("disabled");
            $("#MMotivo").hide();
            $("#cmbMateriaPericial").val(0);
            $("#cmbTipoCarpeta").val(0);
            $("#divRangoFechas").show();
            $("#inputRegresar").show();
            $("#inputBuscar").show();
            $("#divNotas").hide();
            $("#inputGuardar").hide();
            $("#inputConsultar").hide();
            $("#inputEliminar").hide();
            $("#inputImprimir").hide();
            $("#divBuscaPromocion").hide();
            $("#divConsultaActuaciones").hide();
            $("#divFormatoImpresion").hide();
            $("#buscaPromocion").hide();
            $("#MDias").hide();
    <?php if ($_POST['idActuacionAcuerdo'] != "") { ?>
                $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Solicitud de Perito</span> / Consulta de Solicitudes");
    <?php } elseif ($_POST['idActuacionPadre'] != "" OR $_POST['idActuacionAcuerdo'] != "") { ?>
                $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Solicitud de Perito</span> / Consulta de Solicitudes");
    <?php } else { ?>
                $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Solicitud de Perito</span> / Consulta de Solicitudes");
    <?php } ?>
            $("#cmbTipoCarpeta").val($("#hiddenDatoCarpeta").val());
        };
        consultarSolicitudes = function (paginacion, traerConsulta, noMostrarModal) {
            //**************************** consulta de acuerdos *************************************        
            var strDatos = "accion=consultarSolicitudesPeritos";
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var aux = "";
            var protesta = "";
            if (traerConsulta) {
                protesta = "<th>Protesta y/o Dictamen</th>";
                $("#inputBuscar").hide();
                $("#inputConsultar").show();
                $("#inputImprimir").show();
                $("#inputEliminar").show();
                aux = "Solicitudes";
                //strDatos += "&idActuacion=" + $("#hiddenIdActuacion").val();//id del acuerdo o de la acta minima
            }
            var pag = $("#cmbPaginacion" + aux).val();
            var cantReg = $("#cmbNumReg" + aux).val();
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            if (cveTipoCarpeta == 9) {
                cveTipoCarpeta = 0;
            }
            strDatos += "&cveJuzgado=" + cveJuzgado[0];
            if ($("#cmbTipoCarpeta").val() != null) {
                strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            } else {
                strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpetaTree").val();
            }
            if ($("#txtNumero").val() != "") {
                strDatos += "&numero=" + $("#txtNumero").val();
            } else {
                if ($("#txtNumeroTree").val() != "" && $("#txtNumeroTree").val() != null) {
                    strDatos += "&numero=" + $("#txtNumeroTree").val();
                }
            }
            if ($("#txtAnio").val() != "") {
                strDatos += "&anio=" + $("#txtAnio").val();
            } else {
                if ($("#txtAnioTree").val() != "" && $("#txtAnioTree").val() != null) {
                    strDatos += "&anio=" + $("#txtAnioTree").val();
                }
            }
            //strDatos += "&cveJuzgado=" + cveJuzgado[0];
            if ($("#txtAnio").val() === "" && $("#txtNumero").val() === "" && $("#cmbTipoCarpeta").val() === "0") {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            }
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion   
            strDatos += "&paginacion=true";
            if (traerConsulta) {
                if (noMostrarModal != null) {
                    strDatos += "&consultarProtestas=true";
                } else {
                    strDatos += "&cveMateriaPericial=" + $("#cmbMateriaPericial").val();
                }
            }
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesperitos/SolicitudesperitosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    //console.log("Consulta: " + datos);
                    var json = eval("(" + datos + ")");
                    var table = "";
                    if (json.totalCount > 0) {
                        table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                        table += "<thead><tr><th>N&uacute;m.</th><th>Numero Solicitud</th><th>Expediente</th>";
                        table += "<th>Perito</th><th>Materia Pericial</th>" + protesta + "<th>Fecha Registro</th>";
                        table += "</tr></thead><tbody>";
                        var indice = $("#cmbPaginacion").val();
                        indice = (indice - 1) * $("#cmbNumReg").val();
                        if (traerConsulta) {
                            cveMateriasPericiales = new Array();
                            traerConsulta = false;
                            for (var i = 0; i < json.totalCount; i++) {
                                var evento = " onclick=\"consultaIdSolicitud('" + json.resultados[i].idSolicitudePerito + "','" + json.resultados[i].idReferencia + "'," + traerConsulta + ")\" ";
                                table += "<tr>";
                                table += "<td" + evento + ">" + (i + 1 + indice) + "</td>";
                                table += "<td" + evento + ">" + json.resultados[i].numeroSolicitud + "/" + json.resultados[i].anioSolicitud + "</td>";
                                table += "<td" + evento + ">" + json.resultados[i].numero + "/" + json.resultados[i].anio + "</td>";
                                if (json.resultados[i].nombrePerito == null) {
                                    table += "<td" + evento + ">FALTA POR ASIGNAR PERITO</td>";
                                } else {
                                    table += "<td" + evento + ">" + json.resultados[i].nombrePerito + "</td>";
                                }
                                cveMateriasPericiales[cveMateriasPericiales.length] = json.resultados[i].cveMateriaPericial;
                                table += "<td" + evento + ">" + $("#cmbMateriaPericial option[value='" + json.resultados[i].cveMateriaPericial + "']").text() + "</td>";
                                table += "<td>";
                                if (json.resultados[i].seguimientoSolicitudes != null) {
                                    var total = json.resultados[i].seguimientoSolicitudes.length, j;
                                    var protestas = "<div class='panel-group'><div class='panel panel-default'><div class='panel-heading'>";
                                    protestas += "<h4 class='panel-title'><a data-toggle='collapse' href='#collapse" + i + "'>Detalle</a></h4></div>";
                                    protestas += "<div id='collapse" + i + "' class='panel-collapse collapse'><table><thead><tr><th>N&uacute;m.</th><th>Documento</th><th>Fecha registro</th></tr></thead><tbody>";
                                    for (j = 0; j < total; j++) {
                                        protestas += "<tr>";
                                        protestas += "<td>" + (j + 1) + "</td>";
                                        protestas += "<td>" + json.resultados[i].seguimientoSolicitudes[j].descEstatusSolicitud + "</td>";
                                        protestas += "<td>" + fechaMySQLaNormal(json.resultados[i].seguimientoSolicitudes[j].fechaRegistro) + "</td>";
                                        protestas += "</tr>";
                                    }
                                    protestas += "</tbody></table></div></div></div>";
                                    if (total === 0) {
                                        protestas = "";
                                    }
                                    table += protestas + "</td>";
                                }
                                table += "<td" + evento + ">" + fechaMySQLaNormal(json.resultados[i].fechaRegistro) + "</td>";
                                table += "</tr> ";
                            }
                            table += "</tbody></table>";
                            if (json.totalCount > 3 && noMostrarModal == true) {
                                $("#mensajeAvisoModal").text("YA HA SOLICITADO EL LIMITE DE SOLICITUDES DE PERITO (4) PARA EL EXPEDIENTE. YA NO PUEDE REGISTRAR OTRA SOLICITUD DE PERITO.");
                                $("#modalAvisos").modal("show");
                                $("#inputGuardar").hide();
                                $("#inputEliminar").hide();
                                $("#inputImprimir").hide();
                                $("#divInformacion").show();
                                $("#divInformacion").html("YA HA SOLICITADO EL LIMITE DE SOLICITUDES DE PERITO (4) PARA EL EXPEDIENTE. YA NO PUEDE REGISTRAR OTRA SOLICITUD.");
                                $("#divInformacion").show("slide");
                                setTimeAlert("divInformacion");
                            }
                            $("#divConsultaSolicitudes").show();
                            $("#divTableResultSolicitudes").html(table);
                            if (paginacion) {
                                calcularPaginas("Solicitudes", json.totalRegistros);
                            }
                        } else {
                            for (var i = 0; i < json.totalCount; i++) {
                                table += "<tr onclick=\"consultaIdSolicitud('" + json.resultados[i].idReferencia + "','" + json.resultados[i].idActuacion + "'," + true + ")\" >";
                                table += "<td>" + (i + 1 + indice) + "</td>";
                                table += "<td>" + json.resultados[i].numeroSolicitud + "/" + json.resultados[i].aniSolicitud + "</td>";
                                table += "<td>" + json.resultados[i].numero + "/" + json.resultados[i].anio + "</td>";
                                if (json.resultados[i].nombrePerito == null) {
                                    table += "<td>FALTA POR ASIGNAR PERITO</td>";
                                } else {
                                    table += "<td>" + json.resultados[i].nombrePerito + "</td>";
                                }
                                table += "<td>" + json.resultados[i].materiaPericial + "</td>";
                                table += "<td>" + fechaMySQLaNormal(json.resultados[i].fechaRegistro) + "</td>";
                                table += "</tr> ";
                            }
                            table += "</tbody></table>";
                            $("#divHideForm").hide();
                            $("#divTableResult").html(table);
                            if (paginacion) {
                                calcularPaginas("", json.totalRegistros);
                            }
                            changeDivForm(2);
                            $("#Editar").attr("disabled", true);
                            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Solicitud de Perito</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta de Solicitudes</span> / Resultados");
                        }
                    } else {
                        $("#inputConsultar").hide();
                        $("#inputImprimir").hide();
                        $("#inputEliminar").hide();
                        $("#divInformacion").show();
                        $("#divInformacion").html('' + json.mnj.toLowerCase());
                        setTimeAlert("divInformacion");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#inputConsultar").hide();
                    $("#inputImprimir").hide();
                    $("#inputEliminar").hide();
                    $("#divInformacion").show();
                    $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show("slide");
                    setTimeAlert("divInformacion");
                }
            });

            //**************************** consulta de oficios *************************************
        };
        calcularPaginas = function (div, totalRegistros) {
            var combo = "";
            var numReg = $("#cmbNumReg" + div).val();
            $("#totalReg" + div).text("Total de Registros: " + totalRegistros);
            if (totalRegistros / numReg < 0) {
                combo += "<option value='" + 1 + "'>" + 1 + "</option>";
            } else {
                var i;
                for (i = 0; i < totalRegistros / numReg; i++) {
                    combo += "<option value='" + (i + 1) + "'>" + (i + 1) + "</option>";
                }
                $("#cmbPaginacion" + div).html(combo);
            }
            $("#paginacion" + div).show();
        };
        consultarIdSolicitudPertioActuacion = function (idActuacionPerito) {
            //console.log("idActuacionPerito: " + idActuacionPerito);
            var strDatos = "accion=consultarIdSolicitudPertioActuacion";
            strDatos += "&idActuacionPerito=" + idActuacionPerito;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesperitos/SolicitudesperitosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    //console.log("Consultar idSolicitudPertio: " + datos);
                    var json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {          //idReferencia = idSolicitudPerito (sistema de peritos)
                        consultaIdSolicitud(json.resultados[0].idReferencia, idActuacionPerito, true);
                    } else {
                        $("#divAlertDager").show();
                        $("#divAlertDager").html(json.mnj);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").show();
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        consultaIdSolicitud = function (idSolicitudePerito, idActuacionPerito, traerConsulta) {
            if (!traerConsulta) {
                $("#inputGuardar").hide();
            }
            changeDivForm(1);
            $("#hiddenIdActuacionPerito").val(idActuacionPerito);
            var strDatos = "idSolicitudePerito=" + idSolicitudePerito;
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/solicitudesperitos/ConsultarIDPeritosController.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    $("#inputRegresar").hide();
                    $("#h5titulo").html("Solicitud de Perito");
                    var json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        valorJuzgado(json.resultados[0].cveAdscripcion);
                        $("#hiddenIdActuacion").val(json.resultados[0].idReferencia);//acuerdo o de la acta minima
                        $("#cmbTipoCarpeta").val(json.resultados[0].cveTipoNumero);
                        $("#txtNumero").val(json.resultados[0].numero);
                        $("#txtAnio").val(json.resultados[0].anio);
                        $("#cmbMateriaPericial").val(json.resultados[0].cveMateriaPericial);
                        $("#numer").val(json.resultados[0].diasProtesta);
                        llenareditor(json.resultados[0].observaciones);
                        //editor.setContent(json.resultados[0].observaciones, false);
                        $("#divNotas").show();
                        //var strCadena = json.resultados[0].observaciones;
                        //var strObs = strCadena.split('<br>');
                        //llenareditor(strObs[0]);
                        $("#hddIdSolicitud").val(json.resultados[0].idSolicitudePerito);
                        $("#hddIdPerito").val(json.resultados[0].idPerito);
                        $("#PeritoAsignado").show();
                        $("#peritoAsignado").show();
                        $("#Fechas").show();
                        if (json.resultados[0].activo == "N") {
                            $('#motivo').show();
                            $('#Motivo').show();
                        } else {
                            $('#motivo').hide();
                            $('#Motivo').hide();
                        }
                        if (json.resultados[0].nomPerito == null) {
                            $("#peritoAsignado").html("Fecha Solicitud: " + fechaMySQLaNormal(json.resultados[0].fechaSolicitud) + " <br> Numero de solicitud: " + json.resultados[0].numeroSolicitud + "/" + json.resultados[0].anioSolicitud + " <br> Perito: FALTA POR ASIGNAR PERITO" + "<br>" + "<br>" + "Fecha protesta par el perito: " + json.resultados[0].fechaDiasProtesta);
                        } else {
                            $("#peritoAsignado").html("Fecha solicitud: " + fechaMySQLaNormal(json.resultados[0].fechaSolicitud) + " <br> Numero de solicitud: " + json.resultados[0].numeroSolicitud + "/" + json.resultados[0].anioSolicitud + " <br>Perito asignado: " + json.resultados[0].nomPerito + "<br>" + "<br>" + "Fecha protesta para el perito: " + fechaMySQLaNormal(json.resultados[0].fechaDiasProtesta, true));
                        }
                        var html = "<table align='center' style='border-collapse:collapse'>";
                        html += "<tr height='50'>";
                        if (json.resultados[0].activo == "S") {
                            html += "<td align='center' colspan='2'><font size='3'><b>ACUSE DE SOLICITUD DE PERITO </b></font></td>";
                        } else {
                            html += "<td align='center' colspan='2'><font size='3'><b>ACUSE DE CANCELACI\u00d3N DE  SOLICITUD DE PERITO </b></font></td>";
                        }
                        html += "</tr>";
                        html += "<tr height='35'>";
                        html += "<td align='right'><b>Numero de solicitud: </b></td>";
                        html += "<td align='left'><b>" + json.resultados[0].numeroSolicitud + "/" + json.resultados[0].anioSolicitud + "</b></td>";
                        html += "</tr>";
                        html += "<tr height='35'>";
                        html += "<td align='right'><b>Perito asignado: </b></td>";
                        if (json.resultados[0].nomPerito == null) {
                            html += "<td align='left'><b>FALTA POR ASIGNAR PERITO</b></td>";
                        } else {
                            html += "<td align='left'><b>" + json.resultados[0].nomPerito + "</b></td>";
                            $("#hiddenNombrePerito").val(json.resultados[0].nomPerito);
                            $('#hiddenIdPerito').val(json.resultados[0].idPerito);
                            $('#hiddenCedulaPerito').val(json.resultados[0].cedula);
                            $("#hiddenNumeroEmpleadoPerito").val(json.resultados[0].numEmpleado);
                            $("#hddCveGrupo").val(json.resultados[0].cveGrupoPerito);
                            $("#hddNomPerito").val(json.resultados[0].nomPerito);
                        }
                        html += "</tr>";
                        html += "<tr height='35'>";
                        html += "<td align='right'><b>Numero de Carpeta:</b></td>";
                        html += "<td align='left'>" + json.resultados[0].numero + "/" + json.resultados[0].anio + "</td>";
                        html += "</tr>";
                        html += "<tr height='35'>";
                        html += "<td align='right'><b>Juzgado: </b></td>";
                        html += "<td align='left'>" + $("#hiddenAdscripcion").val() + "</td>";
                        html += "</tr>";
                        html += "<tr height='35'>";
                        html += "<td align='right'><b>Instancia: </b></td>";
                        html += "<td align='left'>PRIMERA INSTANCIA</td>";
                        html += "</tr>";
                        html += "<tr height='35'>";
                        html += "<td align='right'><b>Materia: </b></td>";
                        html += "<td align='left'>PENAL</td>";
                        html += "</tr>";
                        html += "<tr height='35'>";
                        html += "<td align='right'><b>Fecha asignaci\u00f3n: </b></td>";
                        html += "<td align='left'>" + $("#hiddenFechaActual").val() + "</td>";
                        html += "</tr>";
                        html += "<tr height='35'>";
                        html += "<td align='right'><b>Dias protesta cargo:</b></td>";
                        html += "<td align='left'>" + $("#numer").val() + "</td>";
                        html += "</tr>";
                        html += "<tr height='35'>";
                        html += "<td align='right'><b>Fecha protesta:</b></td>";
                        html += "<td align='left'>" + json.resultados[0].fechaDiasProtesta + "</td>";
                        html += "</tr>";
                        html += "<tr height='35'>";
                        html += "</table>";
                        $('#inputPDF').show();
                        $("#inputVisor").show();
                        $("#divRangoFechas").hide();
                        $('#divConsultaActuaciones').hide();
                        $('#divFormatoImpresion').html(html);
                        $("#inputImprimir").show();
                        if (json.resultados[0].imagen > 0) {
                            $("#divFoto").show();
                            obtenerFoto(json.resultados[0].imagen);
                        } else {
                            $("#divFoto").hide();
                        }
                        $("#inputProtesta").show();
                        $("#txtfechaT").attr("disabled", "disabled");
                        $("#txtfechaI").val(fechaMySQLaNormal(json.resultados[0].fechaSolicitud, true));
                        $("#txtfechaT").val(fechaMySQLaNormal(json.resultados[0].fechaDiasProtesta, true));
                        buscarPromocion("buscarLimpio", json.resultados[0].idReferencia, traerConsulta);
                    } else {
                        $("#divInformacion").show();
                        $("#divInformacion").html('no existe informacion del acuerdo');
                        $("#divInformacion").show("slide");
                        setTimeAlert("divInformacion");
                    }
                    $("#buscaPromocion").show();
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divInformacion").show();
                    $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show("slide");
                    setTimeAlert("divInformacion");
                }
            });
        };
        eliminarSolicitudesPrevio = function () {
            if ($("#hddIdSolicitud").val() !== "") {
                $("#ayudaMotivo").text("");
                $("#motivoCancelacion").val("");
                $("#modalCancelar").modal('show');
                $("#inputEliminarConfirmado").show();
            } else {
                $("#divAlertWarning").show();
                $("#divAlertWarning").html("Acci\u00F3n no valida. No ha capturado la solicitud de perito.");
                $("#divAlertWarning").show("slide");
                setTimeAlert("divAlertWarning");
            }
        };
        eliminarSolicitudes = function () {
            var motivo = $("#motivoCancelacion").val();
            if (motivo.length > 9) {
                var strDatos = "&accion=cancelacionSolicitudPerito";
                strDatos += "&idSolicitudPerito=" + $("#hddIdSolicitud").val();
                strDatos += "&idPerito=" + $("#hddIdPerito").val();
                var cveJuzgadoAux = $("#cmbJuzgado").val().split("/");
                strDatos += "&cveAdscripcion=" + cveJuzgadoAux[0];
                strDatos += "&cveUsuarioSolicitante=" + cveUsuarioSesion;
                strDatos += "&motivo=" + motivo;
                //$("#modalCancelar").modal('hide');
                //console.log("Eliminar Datos: " + strDatos);
                $.ajax({
                    type: "POST",
                    url: "../controladores/sigejupe/solicitudesperitos/CancelacionesPeritosController.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        //console.log("Eliminacion: " + datos);
                        var json = eval("(" + datos + ")"); //Parsear JSON
                        $("#divHideForm").hide();
                        $("#divMenssage").hide();
                        if (json.estatus == "ok") {
                            $("#divAlertSuccesEliminar").show();
                            $("#divAlertSuccesEliminar").html("Cancelacion realizada correctamente");
                            $("#divAlertSuccesEliminar").show("slide");
                            setTimeAlert("divAlertSuccesEliminar");
                            var html = "<table align='center' style='border-collapse:collapse'>";
                            html += "<tr height='50'>";
                            html += "<td align='center' colspan='2'><font size='3'><b>ACUSE DE CANCELACI\u00d3N DE SOLICITUD DE PERITO </b></font></td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Numero de solicitud: </b></td>";
                            html += "<td align='left'><b>" + $("#txtNumLlamada").html() + "</b></td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Perito Asignado: </b></td>";
                            if ($("#lblPeritoAsignado").html() == null) {
                                html += "<td align='left'><b>FALTA POR ASIGNAR PERITO</b></td>";
                            } else {
                                html += "<td align='left'><b>" + $("#lblPeritoAsignado").html() + "</b></td>";
                            }
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Numero de " + $("#cmbTipoCarpeta option:selected").html().toLowerCase() + ":</b></td>";
                            html += "<td align='left'>" + $("#txtNoCarpetaJudicial").val() + "/" + $("#txtAnioCarpetaJudicial").val() + "</td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Juzgado: </b></td>";
                            html += "<td align='left'>" + $("#cmbJuzFusion option:selected").html() + "</td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Instancia: </b></td>";
                            html += "<td align='left'>" + $("#InstanciasMateria option:selected").html() + "</td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Materia: </b></td>";
                            html += "<td align='left'>" + $("#Materias option:selected").html() + "</td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Fecha asignaci�n: </b></td>";
                            html += "<td align='left'>" + $("#txtFechaSolicitud").html() + "</td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Materia Pericial:</b></td>";
                            html += "<td align='left'>" + $("#CmbMateriaPericial option:selected").html() + "</td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Observaciones: </td>";
                            html += "<td align='left'>" + $("#Observaciones").val() + "</td>";
                            html += "</tr>";
                            html += "</table>";
                            $("#divFormatoImpresion").html(html);
                            $("#inputGuardar").hide();
                            $("#inputEliminar").hide();
                            $("#inputEliminarConfirmado").hide();
                            if ($("#hiddenProcedencia").val() == 1) {
                                getTree();
                            }
                        } else {
                            $("#divAlertDagerEliminar").show();
                            $("#divAlertDagerEliminar").html(json.msj);
                            $("#divAlertDagerEliminar").show("slide");
                            setTimeAlert("divAlertDagerEliminar");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divAlertDagerEliminar").show();
                        $("#divAlertDagerEliminar").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDagerEliminar").show("slide");
                        setTimeAlert("divAlertDagerEliminar");
                    }
                });
            } else {
                $("#ayudaMotivo").text("ESCRIBA EL MOTIVO");
            }
        };
        enviar = function () {
            var strDatos = "accion=generarJson";
            strDatos += "&cveTipo=2"; //2 = actuacion
            strDatos += "&cveTipoDocumento=1"; //tipo documento acuerdos
            strDatos += "&idActuacion=" + $("#hiddenIdActuacionPerito").val();
            //console.log("idActuacion: " + $("#hiddenIdActuacionPerito").val());
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    var json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        generaPDF(datos);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDagerModal").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDagerModal").show("slide");
                    setTimeAlert("divAlertDagerModal");
                }
            });
        };
        limpiar = function (band) {
    <?php if ($_POST["idActuacionPadre"] != "" || $_POST["idReferencia"] != "" || $_POST["idActuacionAcuerdo"] != "") { ?>
                loadFormTree('sigejupe/peritos/frmPeritos.php', 'SOLICITUD DE PERITOS')
    <?php } else if ($_POST["idActuacionPadre"] == "" || $_POST["idReferencia"] == "" || $_POST["idActuacionAcuerdo"] == "") { ?>
                loadOpcion('sigejupe/peritos/frmPeritos.php', 'areadetrabajo')
    <?php } else { ?>
                $("#numer").val("");
                $("#hddIdSolicitud").val("");
                $("#divAlertDager").html("");
                $("#divAlertDager").hide();
                if (band == "true") {
                    $("#peritoAsignado").html("");
                    $("#PeritoAsignado").hide();
                    $("#cmbTipoCarpeta").val(0);
                    $("#txtNumero").val("");
                    $("#txtAnio").val("");
                    $("#divConsultaActuaciones").hide();
                    $("#divTableResultActuaciones").hide();
                    $("#divTableResultActuaciones").html("");
                    $("#divBuscaPromocion").hide();
                    $("#promocionSel").html("");
                }
        <?php if ($_POST['cveTipoCarpeta'] == "" AND $_POST['idCarpetaJudicial'] != "" AND $_POST['idReferencia'] == "" AND $_POST['idActuacionPadre'] == "") { ?>
                    $("#peritoAsignado").html("");
                    $("#PeritoAsignado").hide();
                    $("#cmbTipoCarpeta").val(0);
                    $("#txtNumero").val("");
                    $("#txtAnio").val("");
                    $("#divConsultaActuaciones").hide();
                    $("#divTableResultActuaciones").hide();
                    $("#divTableResultActuaciones").html("");
                    $("#divBuscaPromocion").hide();
                    $("#promocionSel").html("");
        <?php } elseif ($_POST['cveTipoCarpeta'] != "" AND $_POST['idCarpetaJudicial'] == "" AND $_POST['idReferencia'] != "" AND $_POST['idActuacionPadre'] != "") { ?>
                    $("#peritoAsignado").html("");
                    $("#PeritoAsignado").hide();
                    $("#cmbTipoCarpeta").val(0);
                    $("#txtNumero").val("");
                    $("#txtAnio").val("");
                    $("#divConsultaActuaciones").hide();
                    $("#divTableResultActuaciones").hide();
                    $("#divTableResultActuaciones").html("");
                    $("#divBuscaPromocion").hide();
                    $("#promocionSel").html("");
        <?php } elseif ($_POST['idCarpetaJudicial'] != "" AND $_POST['idActuacionAcuerdo'] == "" AND $_POST['idReferenciaAcuerdo'] == "" AND $_POST['cveTipoCarpetaAcuerdo'] == "") { ?>
                    $("#peritoAsignado").html("");
                    $("#PeritoAsignado").hide();
                    $("#cmbTipoCarpeta").val(0);
                    $("#txtNumero").val("");
                    $("#txtAnio").val("");
                    $("#divConsultaActuaciones").hide();
                    $("#divTableResultActuaciones").hide();
                    $("#divTableResultActuaciones").html("");
                    $("#divBuscaPromocion").hide();
                    $("#promocionSel").html("");
        <?php } ?>
                plantillas = null;
                protestas = null;
                expediente = null;
                $("#hddCveGrupo").val("");
                $("#hddNomPerito").val("");
                $("#hddIdSolicitud").val("");
                $("#hddIdPerito").val("");
                $("#cmbMateriaPericial").val(0);
                $("#cmbNotificacion").val(0);
                $("#Sintesis").val("");
                $("#hiddenIdActuacion").val("");
                $("#hiddenCveTipoCarpeta").val("");
                $("#lblRelationName").html("No.");
                $("#divSinRelacion").show();
                $("#txtfechaInicial").val($("#hiddenFechaActual").val());
                $("#txtfechaFinal").val($("#hiddenFechaActual").val());
                $("#cmbEstatus").val(0);
                $("#numer").attr("disabled", false);
                $("#cmbJuzgado").attr("disabled", false);
                $("#cmbTipoCarpeta").attr("disabled", false);
                $("#buscaPromocion").attr("disabled", false);
                $("#txtNumero").attr("disabled", false);
                $("#txtAnio").attr("disabled", false);
                $("#cmbMateriaPericial").attr("disabled", false);
                $("#cmbNotificacion").attr("disabled", false);
                $("#Sintesis").attr("disabled", false);
                $("#cmbEstatus").attr("disabled", false);
                editor.setContent("", false);
                editorProtesta.setContent("", false);
                $("#hiddenIdActuacionPerito").val("");
                $("#hiddenIdActuacionRef").val("");
                $("#inputProtesta").hide();
                $("#divFormatoImpresion").html("");
                $("#hiddenIdActuacionPromocion").val("");
                $("#divCorrecto").html("");
                $("#divCorrecto").hide();
                $("#divInformacion").html("");
                $("#divInformacion").hide();
                $("hiddenIdActuacionSec").val("");
                $("hiddenAnioActuacion").val("");
                $("#Motivo").hide();
                $("#motivo").hide();
                //$("#buscaPromocion").hide();
                $("#divAlertSucces").hide();
                $("#divAlertSucces").html("");
                $('#hiddenIdPerito').val("");
                $('#hiddenNombrePerito').val("");
                $('#hiddenCedulaPerito').val("");
    <?php } ?>
        };
        fechaMySQLaNormal = function (fecha, soloFecha) {
            if ((fecha != "") && (fecha != null)) {
                var fechaHora = fecha.split(" ");
                var vecFecha = fechaHora[0].split("-");
                var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
                if ((fechaHora[1] == null) || (soloFecha)) {
                    return fechaNormal;
                }
                var hora = fechaHora[1].split(":");
                return fechaNormal + " " + hora[0] + ":" + hora[1] + "";
            }
            return "";
        };
        llenareditor = function (value) {
            try {
                editor.ready(function () {
                    setTimeout(function () {
                        editor.setContent(value, false);
                    }, 500);
                    ;
                });
            } catch (e) {
                //alert(e);
            }
        };
        llenarEditorProtesta = function (value) {
            try {
                editorProtesta.ready(function () {
                    setTimeout(function () {
                        editorProtesta.setContent(value, false);
                    }, 500);
                    ;
                });
            } catch (e) {
                //alert(e);
            }
        };
        guardarAcuerdo = function (strDatos) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    var json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
                        if (json.data[0].observaciones != "publicado") {
                            $("#divHideForm").hide();
                            $("#divAlertSucces").html("Correcto!: " + json.text.toLowerCase());
                            $("#divAlertSucces").show("slide");
                            setTimeAlert("divAlertSucces");
                            $("#hiddenIdActuacion").val(json.data[0].idActuacion);
                            muestraEstatus(json.data[0].idActuacion);
                        } else {
                            $("#divHideForm").hide();
                            $("#divInformacion").show();
                            $("#divInformacion").html("Actuacion publicada, no puede ser modificada");
                            $("#divInformacion").show("slide");
                            setTimeAlert("divInformacion");
                        }
                        setTimeout(function () {
                            $("#cmbJuzgado").attr("disabled", true);
                            $("#cmbTipoCarpeta").attr("disabled", true);
                            $("#buscaPromocion").attr("disabled", true);
                            $("#txtNumero").attr("disabled", true);
                            $("#txtAnio").attr("disabled", true);
                        }, 1000);
                    } else {
                        $("#divHideForm").hide();
                        $("#divInformacion").show();
                        $("#divInformacion").html(json.text);
                        $("#divInformacion").show("slide");
                        setTimeAlert("divInformacion");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divInformacion").show();
                    $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show("slide");
                    setTimeAlert("divInformacion");
                }
            });
        };

        muestraEstatus = function (idActuacion) {
            var strDatos = "accion=muestraEstatusActuacion";
            strDatos += "&idActuacion=" + idActuacion;
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        $("#cmbEstatus").val(json.data[0].cveEstatus);
                        if (json.data[0].cveEstatus == 3) {// publicado
                            $("#cmbJuzgado").attr("disabled", true);
                            $("#cmbTipoCarpeta").attr("disabled", true);
                            $("#buscaPromocion").attr("disabled", false);
                            $("#txtNumero").attr("disabled", true);
                            $("#txtAnio").attr("disabled", true);
                            $("#cmbMateriaPericial").attr("disabled", true);
                            $("#cmbNotificacion").attr("disabled", true);
                            $("#Sintesis").attr("disabled", true);
                            $("#cmbEstatus").attr("disabled", true);
                        } else {
                            $("#cmbJuzgado").attr("disabled", true);
                            $("#cmbTipoCarpeta").attr("disabled", false);
                            $("#buscaPromocion").attr("disabled", false);
                            $("#txtNumero").attr("disabled", false);
                            $("#txtAnio").attr("disabled", false);
                            $("#cmbMateriaPericial").attr("disabled", false);
                            $("#cmbNotificacion").attr("disabled", false);
                            $("#Sintesis").attr("disabled", false);
                            $("#cmbEstatus").attr("disabled", false);
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divInformacion").show();
                    $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show("slide");
                    setTimeAlert("divInformacion");
                }
            });

        };
        obtenerFoto = function (numEmpleado) {
            var strDatos = "numEmpleado=" + numEmpleado
            $.ajax({
                type: "POST",
                url: "sigejupe/peritos/frmFoto.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {

                },
                success: function (datos) {
                    //console.log("Imagen: " + datos);
                    if (datos !== "") {
                        var json = eval("(" + datos + ")");
                        var html = "<div style='border-radius: 50%; margin: 3px; float: left;  border: 1.5px solid #FFFFFF; width: 110px; height: 110px; background: #115343 url(" + json.url + "); background-repeat: no-repeat; background-position: center; background-size: 135% '></div>";
                        $("#divFoto").html(html);
                    } else {
                        $("#divSnackBar").html("<span class='icon-checkmark' style='height:50%;'></span>" + "&nbsp;&nbsp;&nbsp;La region pericial no es valida o verifique si esta activada verifique");
                        $("#divSnackBar").show("fast");
                        $("#divBackCover").show();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#divLoading').html("");
                }
            });
        };
        function obtenerPermisos() {
            var cveUsuarioSistema = cveUsuarioSesion;
            $.get("../archivos/" + cveUsuarioSistema + ".json",
                    function (response) {
                        for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                            if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                                //alert(response.perfiles[0].perfil[i].cvePerfil+"-"+"perfil encontrado..");
                                $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                    //alert(vnombre.nomFormulario);
                                    if (vnombre.nomFormulario == "CARPETAS JUDICIALES") {
                                        var hijos = vnombre.hijos;
                                        $.each(hijos, function (k2, nombreHijo) {
                                            if (nombreHijo.nomFormulario == 'ACUERDOS') {
                                                var permisoFormulario = nombreHijo.permisoFormulario[0];
                                                createRecord = permisoFormulario.create;
                                                readRecord = permisoFormulario.read;
                                                updateRecord = permisoFormulario.update;
                                                deleteRecord = permisoFormulario.delete;
                                            }
                                        });
                                    }
                                });
                            }
                        }
                        if (String(createRecord) === "S") {
                            $("#inputGuardar").show();
                        }
                        if (readRecord == "S") {
                            $("#inputConsultar").show();
                        }
                        if (updateRecord == "S") {
                            // $("#inputGuardar").show();
                        }
                        //if (deleteRecord == "S") {
                        //    $("#inputEliminar").show();
                        //}
                    });
        }
        //*********************************************************************************************************************    
        obtenerDias = function () {
            var f1, f2;
            f1 = $("#txtfechaI").val();
            f2 = $("#txtfechaT").val();

            if (f1 != "" && f2 != "") {
                var aFecha1 = f1.split('/');
                var aFecha2 = f2.split('/');
                var fFecha1 = Date.UTC(aFecha1[2], aFecha1[1] - 1, aFecha1[0]);
                var fFecha2 = Date.UTC(aFecha2[2], aFecha2[1] - 1, aFecha2[0]);
                var dif = fFecha2 - fFecha1;
                var dias = Math.floor(dif / (1000 * 60 * 60 * 24));
                if (dias < 0) {
                    $("#numer").val("");
                    $("#mensajeAvisoModal").text("LA FECHA NO ES VALIDA, INGRESE UNA FECHA VALIDA.");
                    $("#modalAvisos").modal("show");
                    return false;
                }
                if (dias == 0) {
                    $("#numer").val("1");
                } else {
                    $("#numer").val(dias);
                }
            }
        };
        regresar = function (bndSelecciono) {
            $("#Fechas").show();
            $("#divRangoFechas").hide();
            $("#inputRegresar").hide();
            $("#inputBuscar").hide();
            $("#divNotas").show();
            $("#inputConsultar").show();
            $("#cmbPaginacion").val(1);
            $("#divBuscaPromocion").hide();
            $("#buscaPromocion").show();
            if (bndSelecciono == 1) {
                setTimeout(function () {
                    $("#cmbJuzgado").attr("disabled", true);
                    $("#cmbTipoCarpeta").attr("disabled", true);
                    $("#buscaPromocion").attr("disabled", false);
                    $("#txtNumero").attr("disabled", true);
                    $("#txtAnio").attr("disabled", true);
                }, 1000);
            }
            if (String(createRecord) === "S") {
                $("#inputGuardar").show();
            }
            $("#h5titulo").html("<span>Solicitud de Perito</span>");
            $("#MDias").show();
            $("#cmbTipoCarpeta").val($("#hiddenDatoCarpeta").val());
        };
        regresar2 = function () {
            changeDivForm(1);
            regresar();
        };

        regresarConsultar = function () {
            changeDivForm(1);
            $("#cmbPaginacion").val(1);
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Solicitud de Perito</span> / <span>Consulta de Solicitudes</span>");
        };
        
        valorJuzgado = function (cveJuzgado) {
            var strDatos = "";
            strDatos = "accion=consultar";
            strDatos += "&cveJuzgado=" + cveJuzgado;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        $("#cmbJuzgado").val(json.data[0].cveJuzgado + "/" + json.data[0].cveTipojuzgado);
                        cargaTipoCarpeta();
                    } else {

                        $("#divAlertDager").html("Error al obtener tipo de juzgado");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        (function (a) {
            a.fn.validaCampo = function (b) {
                a(this).on({keypress: function (a) {
                        var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                        (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                    }})
            }

        })(jQuery);
        $(function () {
            cargaJuzgados();
            $("#txtNumero").validaCampo('0123456789');
            $("#txtAnio").validaCampo('0123456789');

            $("#txtfechaInicial").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            $("#txtfechaFinal").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            $("#txtfechaProtesta").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            $("#txtfechaT").datepicker({
                dateFormat: 'dd/mm/yy'
            });
            $('#Motivo').hide();
            $("#Editar").removeAttr("disabled");
            $("#divBuscaPromocion").hide();
            $("#inputLimpiar").show();
            obtenerPermisos();
            cargaResolucion();
            $("#txtMotivo").hide();
            $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate', function (e) {
                $(this).datepicker('hide');
            });
            $("#inputEliminar").hide();
            $("#inputImprimir").hide();
            $("#inputPDF").hide();
            // editor de texto
            editor = UE.getEditor('Sintesis');
            editor.ready(function () {
                editor.setContent("");
            });
            editorProtesta = UE.getEditor('SintesisProtesta');
            editorProtesta.ready(function () {
                editorProtesta.setContent("");
            });
            $('#Historial').hide();
    <?php if ($_POST["idActuacion"] != "") { ?>
                var idActuacion = <?php echo $_POST["idActuacion"]; ?>;
                consultarIdSolicitudPertioActuacion(idActuacion);
    <?php } else { ?>
        <?php if ($_POST['idReferencia'] != "" && $_POST["cveTipoCarpeta"]) { ?>
                    consutaIdCarpetaJudicial(<?php echo $_POST['idReferencia'] . ',' . $_POST['cveTipoCarpeta']; ?>);
        <?php
        }
    }
    ?>
        });

        print = function () {
            if ($("#hddIdSolicitud").val() != "") {
                var ventimp = window.open(' ', 'mywindow');
                var htmltoPrint = "<html>";
                htmltoPrint += "<head>";
                htmltoPrint += '<style type="text/css">.trI{background: #F0FAF5; border-bottom: solid 1px #000000;font-family: Arial;font-size: 11px;}.trP{background: #D4F2E4;font-family: Arial;font-size: 11px;}.trI:hover{background: #7bdc9c;cursor: pointer;}.trP:hover{background: #7bdc9c;cursor: pointer;}.trHead{font-size: 12px;background: #c6f0d4;font-family: Arial;font-weight: bold;border-bottom: double #000000;}</style>';
                htmltoPrint += "<table align='center' style='border-collapse:collapse'>";
                htmltoPrint += "<thead>";
                htmltoPrint += '<tr>';
                htmltoPrint += '<td align="center"><img src="img/encabezado.jpg" width="620" height="60"></td>';
                htmltoPrint += '</tr>';
                htmltoPrint += "</thead>";
                htmltoPrint += "</table>";
                htmltoPrint += "</head>";
                htmltoPrint += "<body>";
                htmltoPrint += $("#divFormatoImpresion").html();
                htmltoPrint += "</body>";
                htmltoPrint += "</html>";
                ventimp.document.write(htmltoPrint);
                ventimp.print();
            } else {
                $("#divInformacion").show();
                $("#divInformacion").html("No ha seleccionado un registro para imprimir");
                $("#divInformacion").show("slide");
                setTimeAlert("divInformacion");
            }
        };
    </script> 
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>