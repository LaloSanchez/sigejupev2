<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
//version 14/01/2016
//:)
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    $idActuacionArbol = "";
    $idCarpetaJudicialArbol = "";
    $procedencia = 0;
    $origen = $_GET["origen"];

    if (isset($_POST['idActuacion'])) {
        $idActuacionArbol = @$_POST['idActuacion'];
    }
    if (isset($_POST['idActuacionPadre'])) {
        $idActuacionPadre = @$_POST['idActuacionPadre'];
    }
    if (isset($_POST['idReferencia']) and isset($_POST['cveTipoCarpeta'])) {
        $idCarpetaJudicialArbol = @$_POST['idReferencia'];
        $cveTipoCarpetaArbol = @$_POST['cveTipoCarpeta'];
    }
    if (isset($_POST['cveTipoCarpeta'])) {
        $procedencia = 2; //Viene vac�o
    }
    if (isset($_POST['juzgadoOrigenArbol'])) {
        $cveJuzgadoOrigenArbol = @$_POST['juzgadoOrigenArbol'];
    }

//$idCarpetaJudicialArbol=586;//Exhorto
//$cveTipoCarpetaArbol=7;//Exhorto
//$idActuacionArbol=3441;
//$idActuacionPadre=15752;
//$idActuacionPadre=120827;
//$idActuacionPadre='96310';
//$idCarpetaJudicialArbol='';
//$cveTipoCarpetaArbol='';
//$idCarpetaJudicialArbol=1690;
//$cveTipoCarpetaArbol=2;

    if ($idActuacionArbol != "" || $idCarpetaJudicialArbol != "" || $cveTipoCarpetaArbol != "" || $idActuacionPadre != "") {
        $procedencia = 1; // viene de arbol
    } else {
        if (($idActuacionArbol == '' && $idCarpetaJudicialArbol == 0 && $idActuacionPadre = '') || ($cveTipoCarpetaArbol == '0')) {
            $procedencia = 2; // viene de �rbol peron no emv�os nada
        } else {
            $procedencia = 0; // formulario general
        }
    }

    include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");
    $digitalizacion = "";

    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULODIGITALIZACION");
    $digitalizacion = $host->getConnect();
    $subirArchivos = "";
    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULOSUBIRARCHIVOS");
    $subirArchivos = $host->getConnect();
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

        .needed:after {
            color:darkred;
            content: " (*)";
        }
    </style>
    <input type="hidden" id="hiddencveJuzgadoOrigenArbol" value="<?php echo $cveJuzgadoOrigenArbol; ?>" >
    <input type="hidden" id="hiddencveAdcripcion" value="<?php echo $_SESSION['cveAdscripcion']; ?>" >
    <input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>" >
    <input type="hidden" id="hiddenIdActuacionPadre" value="<?php echo $idActuacionPadre; ?>" >
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hiddenNumero" value="<?php echo $num; ?>" >
    <input type="hidden" id="hiddenAnio" value="<?php echo $anio; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="<?php echo $cveTipoCarpetaArbol; ?>" >
    <input type="hidden" id="hiddenIdActuacionAcuerdo" value="" >
    <input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Notificaciones
            </h5>
        </div>

        <div class="panel-body">
            <div id="divFormulario" class="form-horizontal" data-step="1" data-intro="Este m&oacute;dulo le permite registrar una neuva notificaci&oacute;n, el cual puede ser modificado y/o eliminado." data-position='left'>
                <div id="divInsertar">
                    <div class="col-md-12" style="display: none" id="BtnRegresarConsulta">
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Regresar" onclick="changeDivForm(2)"> 
                        <hr>
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'><?php echo $origen == 1 ? ( "Tribunal de alzada") : ( "Juzgado"); ?></label>
                        <div class="col-md-9">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control" name="cmbcveJuzgado" id="cmbcveJuzgado" onchange="filtrarTipoCarpeta()">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div> 
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 needed">Tipo de Carpeta</label>
                        <div class="col-md-9">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control" name="cmbcveTipoCarpeta" id="cmbcveTipoCarpeta">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                            <input type="hidden" id="hiddenIdCarpetaJudicialOK">
                            <input type="hidden" id="idActuacion" name="idActuacion">
                            <input type="hidden" id="idTipoNotificacion" name="idTipoNotificacion">
                            <input type="hidden" id="idActuacionNot" name="idActuacionNot">
                            <input type="hidden" id="idActuacionInsertada" name="idActuacionInsertada">
                            <input type="hidden" id="FechaActual" name="FechaActual" vale="">
                            <input type="hidden" id="txtcc" name="txtcc" vale="">
                        </div>                                
                    </div> 
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 needed">N&uacute;mero</label>
                        <div class="col-md-9">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <input type="text" class="form-inline" id="txtNumero" name="txtNumero" >
                            /
                            <input type="text" class="form-inline" id="txtAnio" id="txtAnio" placeholder="A&ntilde;o" maxlength="4">

                            <input type="submit" class="btn btn-primary" id="BtnConsultarCarpeta" name="BtnConsultarCarpeta" value="Consultar Causa" onclick="ConsultarCarpeta()">
                        </div> 
                    </div>

                    <div class="form-group">
                        <div id="divAlertInfoCarpeta" name="divAlertInfoCarpeta" class="alert alert-info alert-dismissable" class="col-xs-12" >
                            <strong>Informaci&oacute;n!</strong> Mensaje
                        </div>
                    </div> 

                    <div id="divCamposExhortos" style="display: none;">
                        <div class="form-group">                                                                
                            <label class="control-label col-md-3">Fecha de Devoluci&oacute;n</label>
                            <div class="col-md-9">
                                <input type="text" class="form-inline" id="dtpFechaDevolucion" name="dtpFechaDevolucion" >
                            </div> 
                        </div>
                        <div class="form-group">                                                                
                            <label class="control-label col-md-3">Diligencia</label>
                            <div class="col-md-9">
                                <select id="cmbDiligencia" class="form-control" name="cmbDiligencia">
                                    <option value="">Seleccione una opcion</option>
                                    <option value="S">DILIGENCIADO</option>
                                    <option value="N">SIN DILIGENCIAR</option>
                                </select>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3" id="check">Electr&oacute;nica</label>
                        <div class="col-md-9">
                            <input type="checkbox" id="checkelectronica" name="checkelectronica" onclick="OcultarRazon()">                              
                        </div>
                    </div>
                    <div class="form-group" id="textoAcuerdo">                                                                
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-9">
                            <div align="center"><label class="needed">Acuerdos y Autos</label></div>
                        </div>                                
                    </div> 

                    <div class="form-group" id="divActuacionPadre" style="display: none">                                                                
                        <label class="control-label col-md-3">Actuaci&oacute;n Origen </label>
                        <div class="col-md-9">
                            <input id="txtActuacionPadre" class="form-control" type="text" name="txtActuacionPadre" readonly="readonly">
                        </div>                                
                    </div> 

                    <div class="form-group"  align="center">                                                                
                        <div class="col-md-offset-3 col-md-9">
                            <div id="divConsultaActuaciones" style="display: none" class="table-responsive" align="center">
                                <div id="divTableResultActuaciones"></div>
                            </div>
                        </div>                                
                    </div> 

                    <div class="form-group">                                                                
                        <label class="control-label col-md-3"></label>
                        <div class="col-md-9">
                            <div align="center"><label class="needed">Personas a Notificar</label></div>
                        </div>                                
                    </div> 
                    <div class="form-group">                                                                
                        <div class="col-md-offset-3 col-md-9">
                            <div id="divConsultaPersonas" style="display: none" class="table-responsive" align="center">
                                <div id="divTableResultPersonas"></div>
                            </div>
                        </div>                                
                    </div> 

                    <div class="form-group" id="copia" style='display: none;'>                                                                
                        <label class="control-label col-md-3" id="check">Con Copia:</label>
                        <div class="col-md-9">
                            <div id="divCopias"></div>                            
                        </div>
                    </div>

                    <div class="form-group" id="LeyendaAutorizado" style='display: none;'>
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-5">
                            <strong>Nota:</strong> Si no puede seleccionar a una persona para su notificaci&oacute;n
                            o visualiza la leyenda <strong> - Sin Correo - </strong>, comun&iacute;quese 
                            a la Direcci&oacute;n de Tecnolog&iacute;as de la Informaci&oacute;n para que su correo Institucional 
                            sea generado.
                        </div>
                    </div>

                    <!--<div class="col-md-8  col-md-offset-3"  id="divConsultaTestigos" style="display: block;  border: solid #e1b1b1;" class="table-responsive" align="center">-->                        
                    <div class="col-md-8  col-md-offset-3 table-responsive"  id="divConsultaTestigos" style="display:none; text-align:center;">
                        <div class="form-group">                                                                
                            <label class="control-label col-md-5"></label>
                            <div class="col-md-4">
                                <div align="center"><label>Testigos<br></label></div>
                            </div>      
                        </div>      
                        <div id="divDatosTestigosPartes">
                            <div class="col-lg-4 ">
                                <label class="control-label needed">Parte: </label>
                                <div>
                                    <select id="cmbPartesTestigos" class="form-control" name="cmbPartesTestigos">
                                        <option value="0">Seleccione una opcion</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label" for="txtNombreTestigo">Nombre Testigo: <span class="requerido">(*)</span></label>
                                <div>
                                    <input type="text" class="form-control mayuscula" id="txtNombreTestigo" name="txtNombreTestigo">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <button id="btnAgregaTestigo" class="btn btn-primary" onclick="AgregarTestigo();">Agregar Testigo</button>
                            </div>

                            <div class="form-group">
                                <div align="center" class="col-md-offset-3 col-md-9">
                                    <div class="col-md-2 botonesAdaptar" > </div>
                                </div>
                            </div>
                        </div> 
                        <div class="form-group">                                                                
                            <div class="col-md-12" id="divTableResultTestigos">
                                <table id="tableResultTestigos" class='table table-hover table-striped table-bordered'>
                                    <thead>
                                        <tr>
                                            <th>Parte</th>
                                            <th>Testigo</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="col-md-12" id="divTableConsultaTestigos">
                            </div>
                        </div> 
                    </div> 
                </div> 
                <!--<div style="clear:both"></div>-->

                <div id="divRazon" class="form-group">
                    <label class="control-label col-md-3">Constancia/Acta</label>
                    <div class="col-md-9">
                        <script id="txtRazon" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                    </div>               
                </div>
                <div id="divAcuerdo" class="form-group">
                    <label class="control-label col-md-3">Contenido del Acuerdo/Auto</label>
                    <div class="col-md-9">
                        <script id="txtSintesis" type="text/plain" style="width: 98%; height: 150px; margin: 0px auto;"></script>
                    </div>               
                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed"> Fecha de Notificaci&oacute;n</label>
                    <div class="col-md-9">
                        <input id="txtfechaNotificacion" class="form-control" type="text" tabindex="4" data-toggle="tooltip" title=""
                               placeholder="dd/mm/aaaa" name="txtfechaNotificacion" value="<?php echo date("d/m/Y") ?>">
                    </div>                                
                </div>

                <div class="form-group" id="BtnInsertar">
                    <div align="center" class="col-md-offset-3 col-md-8">
                        <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar una notifiaci&oacute;n." data-position='top'><input type="submit" class="btn btn-primary btn-adaptar" id="BtnGuardar" name="BtnGuardar" value="Guardar" onclick="SeleccionGuardar()"></div>
                        <div class="col-md-2 botonesAdaptar" data-step="4" data-intro="De clic para buscar una notificaci&oacute;n." data-position='top'><input type="submit" class="btn btn-primary btn-adaptar btnConsultar" id="BtnConsul" name="BtnConsul" value="Consultar" onclick="changeDivForm(2)"></div> 
                        <div class="col-md-2 botonesAdaptar" data-step="5" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'><input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar()"></div> 
                        <div class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar"  style="display: none" id="txtAnio" name="BtnEliminar"  value="Eliminar" onclick="EliminarNotificacion(1)"></div>  
                        <div class="col-md-2 botonesAdaptar"><button class="btn btn-primary btn-adaptar " id="inputVisorIns" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" style="display: none">Visor</button></div>
                        <div class="col-md-2 botonesAdaptar"><button class="btn btn-primary btn-adaptar " id="inputPDFIns" data-toggle="modal" onclick="enviar();" style="display: none">Generar PDF</button></div>
                        <div class="col-md-2 botonesAdaptar">                        
                            <button class="btn btn-primary btn-adaptar" id="inputDigitalizar" data-toggle="modal" onclick="digitalizarAcuerdo();" style="display: none">Digitalizar</button>
                        </div>
                    </div>
                </div>
                <div class="form-group" style="display: none" id="BtnActualizar">
                    <div align="center" class="col-md-offset-3 col-md-9">
                        <div class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" id="BtnActualizarOk" name="BtnActualizarOk" value="Guardar" onclick="ActualizarNotificacion()"></div>  
                        <div class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar btnConsultar" id="inputLimpiar" value="Consultar" onclick="changeDivForm(2)"></div> 
                        <div class="col-md-2 botonesAdaptar" id="btnLimpiarArbol"><input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="changeDivForm(1)"></div> 
                        <div class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar"  id="BtnEliminar2" name="BtnEliminar2" value="Eliminar" onclick="EliminarNotificacion(2)"></div>  
                        <div class="col-md-2 botonesAdaptar" ><button class="btn btn-primary btn-adaptar btninputvisor" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();">Visor</button></div>
                        <div class="col-md-2 botonesAdaptar" ><button class="btn btn-primary btn-adaptar btninputPDF" id="inputPDF" data-toggle="modal" onclick="enviar();">Generar PDF</button></div>
                        <div class="col-md-2 botonesAdaptar">                        
                            <button class="btn btn-primary btn-adaptar" id="inputDigitalizarAct" data-toggle="modal" onclick="digitalizarAcuerdo();" style="display: none">Digitalizar</button>
                        </div>
                    </div>
                </div>

            </div>
            <div id="divConsultar" style="display: none">
                <div class="form-group">                                                                
                    <div class="col-md-12">
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Regresar" onclick="changeDivForm(1)"> 
                        <hr>
                    </div>                                
                </div> 
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed"><?php echo $origen == 1 ? ( "Tribunal de alzada") : ( "Juzgado"); ?>:</label>
                    <div class="col-md-9">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control" name="cmbcveJuzgadoConsulta" id="cmbcveJuzgadoConsulta" onchange="filtrarTipoCarpeta()">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div> 
                <div class="form-group">                                                                
                    <label class="control-label col-md-3">Tipo de Carpeta</label>
                    <div class="col-md-9">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control" name="cmbcveTipoCarpetaConsulta" id="cmbcveTipoCarpetaConsulta">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                        <input type="hidden" id="hiddenIdCarpetaJudicialOK">
                        <input type="hidden" id="idActuacion2" name="idActuacion2">
                    </div>                                
                </div> 
                <div class="form-group">                                                                
                    <label class="control-label col-md-3">N&uacute;mero</label>
                    <div class="col-md-9">
                        <input type="text" class="form-inline" id="txtNumeroConsulta" name="txtNumeroConsulta" >
                        /
                        <input type="text" class="form-inline" id="txtAnioConsulta" id="txtAnioConsulta"  placeholder="A&ntilde;o" maxlength="4">
                    </div> 
                </div>


                <div class="form-group">                                                                
                    <label class="control-label col-md-3" id="check">Electr&oacute;nica</label>
                    <div class="col-md-9">
                        <input type="checkbox" id="checkelectronicaConsulta" name="checkelectronicaConsulta">                              
                    </div>
                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-md-3"> Fecha Inicio</label>
                    <div class="col-md-3">
                        <input id="txtFecInicialBusqueda" class="form-control" type="text" tabindex="4" data-toggle="tooltip" title=""
                               placeholder="dd/mm/aaaa" name="txtFecInicialBusqueda" value="<?php echo date("d/m/Y") ?>">
                    </div>                                
                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-md-3"> Fecha Fin</label>
                    <div class="col-md-3">
                        <input id="txtFecFinalBusqueda" class="form-control" type="text" tabindex="4" data-toggle="tooltip" title=""
                               placeholder="dd/mm/aaaa" name="txtFecFinalBusqueda" value="<?php echo date("d/m/Y") ?>">
                    </div>                                
                </div>

                <div class="form-group">
                    <div align="center" class="col-md-offset-3 col-md-9">
                        <div class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Buscar" onclick="SeleccionConsultar()"> </div>
                        <!--input type="submit" class="btn btn-primary" id="inputLimpiar" value="Consultar" onclick="getPaginas()"--> 
                        <div class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiarConsulta()"> </div>
                    </div>
                </div>
            </div>
        </div>

        <!---------------------------------------------------------------------------->
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
            <div id="divAlertWarning" class="alert alert-warning alert-dismissable" style="display:none;">
                <strong>Advertencia!</strong> Mensaje
            </div>
            <div id="divAlertSucces" class="alert alert-success alert-dismissable" style="display:none;">
                <strong>Correcto!</strong> Mensaje
            </div>
            <div id="divAlertDager" class="alert alert-danger alert-dismissable" style="display:none;">
                <strong>Error!</strong> Mensaje
            </div>
            <div id="divAlertInfo" class="alert alert-info alert-dismissable" style="display:none;">
                <strong>Informaci&oacute;n!</strong> Mensaje
            </div>
        </div>
        <br>
        <div id="divConsulta" style="display: none"  align="center">
            <div class="col-md-12">
                <div class="form-group col-md-3" style="padding: 10px">
                    <label class="control-label" id="totalReg"></label>
                </div>

                <div id="divPaginador" class="form-group col-md-3" >
                    <label class="control-label">Pagina:</label>
                    <select  name="cmbPaginacion" id="cmbPaginacion" onchange="SeleccionGetPaginas(0);">
                        <option value="1">1</option>
                    </select>
                </div>
                <div id="divPaginador" class="form-group col-md-3" >
                    <label class="control-label">Registros por p&aacute;gina:</label>
                    <select  name="cmbNumReg" id="cmbNumReg" onchange="SeleccionGetPaginas(0);">
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

            <div id="divTableResult" div class="col-md-12 table-responsive" align="center"></div>
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
            <a href="../../../controladores/sigejupe/notificaciones/NotificacionesController.Class.php"></a>
        </div>
    </div>            



    <script type="text/javascript">
        var instancia = null;
        var OrigenSegundaInstancia = "<?php echo $OrigenSegundaInstancia; ?>";
        //var juzgadoSesion =762;
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
        var origen = "<?php echo $origen; ?>";
        var procedencia = <?php echo $procedencia; ?>;
        var electronica = 0;
        var arrayTestigos = new Array();
        var identificadorArrayTestigos = 0;

        if (editorRazon !== undefined) {
            editorRazon.destroy();
        } else {

        }
        var editorRazon = null;

        if (editorSintesis !== undefined) {
            editorSintesis.destroy();
        } else {

        }
        var editorSintesis = null;

        visorDocuemntos = function () {
            $.ajax({
                type: 'POST',
                url: 'visorpdf/index.php',
                data: {idCarpetaJudicial: "", idActuacion: $('#idActuacionNot').val(), cveTipoDocumento: 22}, //malo
                //                data: {idCarpetaJudicial: 0, idActuacion: 14525, cveTipoDocumento: 13}, //bueno
                async: false,
                dataType: 'html',
                beforeSend: function () {
                    $('#visor').html('<h3>Consultando informaci�n ... espere.</h3>');
                },
                success: function (data) {
                    //                    console.log(data)
                    $('#visor').html(data);
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. ' + otroobj + '</h3>');
                    console.log('\nOBJ: ' + objeto + '\nQ: ' + quepaso + '\nO:' + otroobj)
                }
            });
        };

        enviar = function () {
            //        alert("enviar datos..."+$("#hiddenIdActuacion").val());
            var strDatos = "accion=generarJson";
            strDatos += "&cveTipo=2";
            strDatos += "&cveTipoDocumento=22"; //tipo documento
            strDatos += "&idActuacion=" + $("#idActuacionNot").val();

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
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        generaPDF(datos);
                    } else {
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


        OcultarRazon = function () {
            var a;
            if (document.getElementById('checkelectronica').checked == true)
            {
                $("#copia").show("fade");
                $("#divRazon").hide("fade");
            } else
            {
                $("#divRazon").show("fade");
                $("#copia").hide("fade");
            }
            $("#hiddenIdCarpetaJudicialOK").val("");
            $("#idActuacionNot").val("");
            $("#idActuacion").val("");
            $("#idActuacionInsertada").val("");
            editorRazon.setContent("", false);
            editorSintesis.setContent("", false);
            $("#txtfechaNotificacion").val("<?php echo date("d/m/Y") ?>");

            $("#divTableResultPersonas").val("");
            $("#divConsultaPersonas").hide();
            $("#LeyendaAutorizado").hide();
            $("#divTableResultPersonas").html("");

            $("#divTableResultActuaciones").val("");
            $("#divConsultaActuaciones").hide();
            $("#divTableResultActuaciones").html("");
            $("#BtnEliminar").hide();
            $("#txtcc").val("");
            $("#copia").val("");
            ConsultarCarpeta();
        };

        function ConsultaCarpetaArbol(IdCarpetaJudicial, CveTipoCarpeta, idActuacionPadre) {
            //alert('5');
            var idActuacionPadre = '';//�rbol
            var strDatosCarpeta = "accion=consultarCarpetaExhortoAmparo";
            strDatosCarpeta += "&cveTipoCarpeta=" + CveTipoCarpeta;
            strDatosCarpeta += "&idCarpetaJudicial=" + IdCarpetaJudicial;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                data: strDatosCarpeta,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
                    //alert(datos);
                    var json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        $.each(json.data, function (index, element) {
                            if (CveTipoCarpeta == '7') {
                                $("#hiddenIdCarpetaJudicialOK").val(element.idExhorto);
                                $("#cmbcveJuzgado").val(element.cveJuzgado);
                                $("#cmbcveTipoCarpeta").val(7);
                                $("#txtNumero").val(element.numExhorto);
                                $("#txtAnio").val(element.aniExhorto);

                                $("#cmbcveJuzgadoConsulta").val(element.cveJuzgado);
                                $("#cmbcveTipoCarpetaConsulta").val(7);
                                $("#txtNumeroConsulta").val(element.numExhorto);
                                $("#txtAnioConsulta").val(element.aniExhorto);

                                ConsultarActuaciones(element.idExhorto, idActuacionPadre);
                            } else if (CveTipoCarpeta == 8) {
                                $("#cmbcveJuzgado").val(element.cveJuzgado);
                                $("#cmbcveTipoCarpeta").val(8);
                                $("#txtNumero").val(element.numAmparo);
                                $("#txtAnio").val(element.aniAmparo);

                                $("#cmbcveJuzgadoConsulta").val(element.cveJuzgado);
                                $("#cmbcveTipoCarpetaConsulta").val(8);
                                $("#txtNumeroConsulta").val(element.numAmparo);
                                $("#txtAnioConsulta").val(element.aniAmparo);
                            } else {
                                $("#hiddenIdCarpetaJudicialOK").val(element.idCarpetaJudicial);

                                $("#cmbcveJuzgado").val(element.cveJuzgado);
                                $("#cmbcveTipoCarpeta").val(element.cveTipoCarpeta);
                                $("#txtNumero").val(element.numero);
                                $("#txtAnio").val(element.anio);

                                $("#cmbcveJuzgadoConsulta").val(element.cveJuzgado);
                                $("#cmbcveTipoCarpetaConsulta").val(element.cveTipoCarpeta);
                                $("#txtNumeroConsulta").val(element.numero);
                                $("#txtAnioConsulta").val(element.anio);

                                ConsultarActuaciones(element.idCarpetaJudicial, idActuacionPadre);
                            }


                            $("#cmbcveJuzgado").attr("disabled", "disabled");
                            $("#cmbcveTipoCarpeta").attr("disabled", "disabled");
                            $("#txtNumero").attr("disabled", "disabled");
                            $("#txtAnio").attr("disabled", "disabled");

                            $("#cmbcveJuzgadoConsulta").attr("disabled", "disabled");
                            $("#cmbcveTipoCarpetaConsulta").attr("disabled", "disabled");
                            $("#txtNumeroConsulta").attr("disabled", "disabled");
                            $("#txtAnioConsulta").attr("disabled", "disabled");
                            changeDivForm(1);
                            return false;
                        });
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertInfoCarpeta").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertInfoCarpeta").show("slide");
                    setTimeAlert("divAlertInfoCarpeta");
                }
            });
        }
        ;

        //----------------------------Consultar Carpeta
        ConsultarCarpeta = function () {
            var cveTipoCarpeta = $("#cmbcveTipoCarpeta").val();
            var numAct = $("#txtNumero").val();
            var aniAct = $("#txtAnio").val();
            var cveJuzgado = $("#cmbcveJuzgado").val();
            var idActuacionPadre = '';//�rbol
            var msj = "";
            var error = 1;
            if (cveTipoCarpeta != "" && numAct != "" && aniAct != "" && cveJuzgado != "0")
            {
                error = 0;
            }
            //console.log("sesion: " + juzgadoSesion);//762
            editorRazon.setContent("", false);
            editorSintesis.setContent("", false);
            $("#divTableResult").val("");
            $("#divConsulta").hide();
            $("#divTableResult").html("");
            if (error == 0) {
                var mensaje = "";
                //var strDatosCarpeta = "accion=consultar";
                var strDatosCarpeta = "accion=consultarCarpetaExhortoAmparo";
                strDatosCarpeta += "&cveTipoCarpeta=" + cveTipoCarpeta;
                strDatosCarpeta += "&numero=" + numAct;
                strDatosCarpeta += "&anio=" + aniAct;
                strDatosCarpeta += "&activo=S";
                strDatosCarpeta += "&cveJuzgado=" + cveJuzgado;
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    data: strDatosCarpeta,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                    },
                    success: function (datos) {
                        //alert(datos);
                        var json = "";
                        var json = eval("(" + datos + ")"); //Parsear JSON
                        //alert(json.totalCount);
                        if (json.totalCount > 0) {
                            $.each(json.data, function (index, element) {
                                if (cveTipoCarpeta == '7') {
                                    $("#divCamposExhortos").show("slide");
                                    if (document.getElementById('checkelectronica').checked == false) {
                                        $("#hiddenIdCarpetaJudicialOK").val(element.idExhorto);
                                        ConsultarActuaciones(element.idExhorto, idActuacionPadre);
                                    } else {
                                        $("#hiddenIdCarpetaJudicialOK").val(element.idExhorto);
                                        ConsultarActuacionesElectronica(element.idExhorto, idActuacionPadre);
                                    }
                                } else {
                                    $("#divCamposExhortos").hide("slide");
                                    if (document.getElementById('checkelectronica').checked == false) {
                                        $("#hiddenIdCarpetaJudicialOK").val(element.idCarpetaJudicial);
                                        ConsultarActuaciones(element.idCarpetaJudicial, idActuacionPadre);
                                    } else {
                                        $("#hiddenIdCarpetaJudicialOK").val(element.idCarpetaJudicial);
                                        ConsultarActuacionesElectronica(element.idCarpetaJudicial, idActuacionPadre);
                                    }
                                }
                                return false;
                                ;
                            });
                        } else {
                            //alert("no esta");
                            $("#divSinRelacionMsg").append("<b id='msgCarpetaJudicial'>La Carpeta no tiene relaci&oacute;n</b>");
                            $("#hiddenIdCarpetaJudicialOK").val("");
                            $("#divAlertInfoCarpeta").html("La Carpeta no se encuentra");
                            $("#divAlertInfoCarpeta").show("slide");
                            setTimeAlert("divAlertInfoCarpeta");
                            limpiar();
                        }
                        //$('#barCarga').html("");

                    },
                    error: function (objeto, quepaso, otroobj) {
                        //alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertInfoCarpeta").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertInfoCarpeta").show("slide");
                        setTimeAlert("divAlertInfoCarpeta");
                    }
                });
            } else {
                $("#divAlertInfoCarpeta").html("Complete los datos requeridos (*) de la Carpeta");
                $("#divAlertInfoCarpeta").show("slide");
                setTimeAlert("divAlertInfoCarpeta");
            }
        };
        //----------------------------
        SeleccionGuardar = function () {
            if (procedencia == 2) { // si viene del arbol pero no manda nada
                //            var juzgadoOrigen=$("#cmbcveJuzgado").val();
                //            var cveTipoCarpetaOrigen=$("#cmbcveTipoCarpeta").val();
                //            var numeroOrigen=$("#txtNumero").val();
                //            var anioOrigen=$("#txtAnio").val();
                //Los campos del �rbol
                $("#cmbJuzgadoArbol").val($("#cmbcveJuzgado").val());//Checar
                $("#cmbTipoCarpetaTree").val($("#cmbcveTipoCarpeta").val());
                $("#cmbTipoCarpetaTree").change();
                $("#txtNumeroTree").val($("#txtNumero").val());
                $("#txtAnioTree").val($("#txtAnio").val());

                try {
                    getTree();
                } catch (e) {
                    console.log("error- no hay arbol 1");
                }
            }
            if (procedencia == 1) { // si viene del arbol idActuacionArbol idCarpetaJudicialArbol
                getTree();
            }



            if (document.getElementById('checkelectronica').checked == false) {
                GuardarNotificacion();
            } else {
                GuardarNotificacionElectronica();
            }
        };
        //----------------------------Mostrar con copia
        MostrarCopias = function (aux) {
            tableDet = "#copia" + aux;
            $('#divCopias').html($(tableDet).html());
            $("#copia").show("fade");
            $("#divCopias").show("fade");
            $("#txtcc").val(aux);
        };
        //----------------------------Selleccion GetPaginas
        SeleccionGetPaginas = function () {
            if (document.getElementById('checkelectronicaConsulta').checked == false) {
                ConsultarNotificacion(0);
            } else {
                ConsultarNotificacionElectronica(0);
            }
        };
        //----------------------------Seleccionar Consultar
        SeleccionConsultar = function () {
            $("#idActuacionInsertada").val("");
            $("#idActuacionNot").val("");
            $("#LeyendaAutorizado").hide();
            $("#divTableResult").val("");
            $("#divConsulta").hide();
            var cveJuzgado = $("#cmbcveJuzgadoConsulta").val();
            if (cveJuzgado != 0) {
                if (document.getElementById('checkelectronicaConsulta').checked == false) {
                    ConsultarNotificacion(1);
                } else {
                    ConsultarNotificacionElectronica(1);
                }
            } else {
                $("#divAlertInfo").html("Seleccione un Juzgado");
                $("#divAlertInfo").show("slide");
                setTimeAlert("divAlertInfo");
            }
        };

        //**************************** Consulta de S�ntesis "   observaciones"*********************************
        ConsultaSintesis = function (idActuacion) {
            var content = $("#Actuacion" + idActuacion).html();
            $("#idActuacion").val(idActuacion);
            //alert(content);
            editorSintesis.setContent("", false);
            llenareditorSintesis(content);
        };
        //**************************** Consulta de Actuaciones Electr�nica*************************************
        ConsultarActuacionesElectronica = function (idCarpeta) {
            //alert(idCarpeta);
            var cveJuzgado = $("#cmbcveJuzgado").val();
            var strDatos = "accion=ConsultarActuacionesImpOfElectronica";
            strDatos += "&IdCarpetaJudicial=" + idCarpeta;
            strDatos += "&cveTipoCarpeta=" + $("#cmbcveTipoCarpeta").val();
            strDatos += "&vcveTipoCarpeta=" + $("#cmbcveTipoCarpeta").val();
            strDatos += "&cveJuzgado=" + cveJuzgado;
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&activo=S";
            var mensaje = "No se encuentran: <br>";

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
                    //                            alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    //alert("json.estatus");
                    if (json.totalActuaciones == 0) {
                        mensaje += "- Actas m&iacute;nimas/Autos/Acuerdos coincidentes con la Carpeta<br>"
                    }
                    if (json.totalCountPersonas == 0) {
                        mensaje += "- Personas autorizadas<br>"
                    }

                    if (json.totalActuaciones > 0 && (json.totalCountPersonas > 0)) {
                        table += "<table class='table table-hover table-striped table-bordered'>";
                        //table += "<table>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Tipo de Actuaci&oacute;n</th>";
                        table += "<th>Resoluci&oacute;n</th>";
                        table += "<th>Seleccione</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var cont = 0;
                        // var counter = parseInt(k)+1;
                        var i = 1;
                        var despais = "";
                        var fechatmp;
                        var fecha;
                        //table += '<tr onclick="showInfo(' + vImputado.id + ',' + '\'' + vImputado.desDelito + '\'' + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                        $.each(json.data, function (k, Actuacion) {
                            table += "<tr>";
                            table += "<td>" + (i) + "</td>";
                            table += "<td>" + Actuacion.TipoActuacion + " " + Actuacion.numActuacion + "/" + Actuacion.aniActuacion + "</td>";

                            if (Actuacion.TipoActuacion == '6') {
                                table += "<td>" + Actuacion.sintesis + "</td>";
                            } else {
                                table += "<td>" + Actuacion.descTipoResolucion + "</td>";
                                //table += "<td style='display: none'><div=>" + Actuacion.sintesis + "</td>";
                            }
                            //table += "<td style='display: none'><div=>" + Actuacion.sintesis + "</td>";
                            table += "<td>";
                            table += "<input type='radio' name='idActuacion' id='optionsRadiosInline1' value='" + Actuacion.idActuacion + "'" + "onclick='ConsultaSintesis(" + Actuacion.idActuacion + ")'" + ">";
                            table += "<td style='display: none;'> <div id='Actuacion" + Actuacion.idActuacion + "'> " + Actuacion.observaciones + "</div></td>";
                            table += "</td>";
                            table += "</tr>";
                            i = i + 1;
                        });
                        table += "</tbody> ";
                        table += "</table> ";
                        //                  $("#divHideForm").hide();
                        $("#divConsultaActuaciones").show();
                        $("#divTableResultActuaciones").html(table);
                        $("#tblResultadosGrid").DataTable({
                            paging: false
                        });

                        if (json.totalCountPersonas > 0) {
                            var table = "";
                            table += "<table class='table table-hover table-striped table-bordered'>";
                            // table += "<table>";
                            table += "<thead>";
                            table += "<th>N&uacute;m.</th>";
                            table += "<th>Nombre</th>";
                            //                        table += "<th>Tipo</th>";
                            table += "<th>Email</th>";
                            table += "<th>Seleccione</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            var cont = 0;
                            // var counter = parseInt(k)+1;
                            var w = 1;
                            var despais = "";
                            var fechatmp;
                            var fecha;
                            var nota = 0;
                            //table += '<tr onclick="showInfo(' + vImputado.id + ',' + '\'' + vImputado.desDelito + '\'' + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                            $.each(json.PersonaAutorizadas, function (k, persona) {
                                if (persona.idrelacionExpedienteJuzgado != 'NA')
                                {
                                    table += "<tr>";
                                    table += "<td>" + (w) + "</td>";
                                    table += "<td>" + persona.nombre + ' ' + persona.paterno + ' ' + persona.materno + "</td>";
                                    table += "<td>" + persona.cedula + "@pjedomex.gob.mx" + "</td>";
                                    table += "<td>";
                                    table += "<label>";
                                    if (persona.permiso == 'Si') {
                                        table += "<input type='radio' name='PersonasAutorizadas' value='" + persona.idrelacionExpedienteJuzgado + "' onclick='MostrarCopias(" + w + ")'>";
                                    } else {
                                        nota = 1;
                                    }
                                    table += "</label>";
                                    table += "<div style='display: none;'>";
                                    //table += "<div>";                        
                                    table += "<input type='text'  name='txtEmail' value='" + persona.email + "'>";
                                    table += "<input type='text'  name='txtNombrePersonas' value='" + persona.nombre + ' ' + persona.paterno + ' ' + persona.materno + "'>";
                                    table += "<input type='text'  name='txtCedulas' value='" + persona.cedula + "'>";
                                    var j = 1;
                                    if (persona.totalCopias > 0) {
                                        $.each(persona.ConCopia, function (k, copias) {
                                            table += "<div id='copia" + w + "' ><table><tr>";//style='display: none;'
                                            table += "<td width='7%'>" + (j) + ". </td>";
                                            table += "<td width='50%'>" + copias.nombrecc + ' ' + copias.paternocc + ' ' + copias.maternocc + ": </td>";
                                            if (copias.permiso == 'Si') {
                                                table += "<td width='43%'> " + copias.cedulacc + "@pjedomex.gob.mx" + "</td>";
                                                table += "<input type='hidden'  name='txtCedulascc" + w + "' value='" + copias.cedulacc + "'>";
                                            } else {
                                                table += "<td> <span class='help-block'> - Sin Correo - </span></td>";
                                                nota = 1;
                                            }
                                            table += "</tr>";
                                            table += "</table>";
                                            j = j + 1;
                                        });
                                        table += "</div>";
                                    } else {
                                        table += "<div id='copia" + w + "' ><table><tr><td></td></tr></table></div>";
                                    }

                                    table += "</div>";
                                    table += "</td>";
                                    table += "</tr>";
                                    w = w + 1;
                                }
                            });
                            table += "</tbody> ";
                            table += "</table> ";
                        }
                        if (nota == 1) {
                            $("#LeyendaAutorizado").show();
                        }
                        $("#divConsultaPersonas").show();
                        $("#divTableResultPersonas").html(table);
                        $("#tblResultadosGrid").DataTable({
                            paging: false
                        });
                    } else {
                        //alert("no hay")
                        $("#divAlertInfoCarpeta").html(mensaje);
                        $("#divAlertInfoCarpeta").show("slide");
                        setTimeAlert("divAlertInfoCarpeta");

                        $("#divConsulta").hide();
                        $("#divTableResult").html("");

                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });

            //********************* *************************************
        };
        //**************************** Consulta de Actuaciones*************************************************
        ConsultarActuaciones = function (idCarpeta, idActuacionPadre) {
            //    alert(idCarpeta);
            //    alert(idActuacionPadre);
            //    alert('5');
            var cveJuzgado = $("#cmbcveJuzgado").val();
            var strDatos = "accion=ConsultarActuacionesImpOf";
            //strDatos += "&IdCarpetaJudicial=" + $("#hiddenIdCarpetaJudicialOK").val();
            var mensaje = "No se encuentran: <br>";
            strDatos += "&IdCarpetaJudicial=" + idCarpeta;

            strDatos += "&cveTipoCarpeta=" + $("#cmbcveTipoCarpeta").val();
            strDatos += "&vcveTipoCarpeta=" + $("#cmbcveTipoCarpeta").val();
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&cveJuzgado=" + cveJuzgado;

            strDatos += "&activo=S";

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
                    //                                            alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    //alert("json.estatus");
                    if (json.totalActuaciones == 0) {
                        mensaje += "- Actas m&iacute;nimas/Autos/Acuerdos coincidentes con la Carpeta<br>"
                    }
                    if (json.totalCountImputados == 0 && json.totalCountOfendidos == 0) {
                        mensaje += "- Imputados/Ofendidos en la Carpeta<br>"
                    }

                    if (json.totalActuaciones > 0 && (json.totalCountImputados > 0 || json.totalCountOfendidos > 0)) {

                        table += "<table class='table table-hover table-striped table-bordered'>";
                        //table += "<table>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Tipo de Actuaci&oacute;n</th>";
                        table += "<th>Resoluci&oacute;n</th>";
                        table += "<th>Fecha Registro</th>";
                        table += "<th>Seleccione</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var cont = 0;
                        // var counter = parseInt(k)+1;
                        var i = 1;
                        var despais = "";
                        var fechatmp;
                        var fecha;
                        var band = 0;
                        //table += '<tr onclick="showInfo(' + vImputado.id + ',' + '\'' + vImputado.desDelito + '\'' + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                        $.each(json.data, function (k, Actuacion) {
                            //                        alert("ENTRA SICLO 1: "+Actuacion.cveTipoCarpeta+"- SANTES- ID: "+Actuacion.idActuacion);
                            table += "<tr>";
                            table += "<td>" + (i) + "</td>";
                            table += "<td>" + Actuacion.TipoActuacion + "</td>";
                            if (Actuacion.CveTipoActuacion == '6') { // muestra sintesis cuando es acta minima
                                //                            alert("hay  va");
                                table += "<td>" + Actuacion.sintesis + "</td>";
                            } else {
                                table += "<td>" + Actuacion.descTipoResolucion + "</td>";
                                //table += "<td style='display: none'><div=>" + Actuacion.sintesis + "</td>";
                            }
                            table += "<td>" + Actuacion.fechaRegistro + "</td>";
                            table += "<td>";

                            //�rbol idActuacionPadre
                            if (Actuacion.idActuacion == idActuacionPadre) {
                                // alert('6');
                                table += "<input type='radio' name='idActuacion' id='optionsRadiosInline1'  value='" + Actuacion.idActuacion + "'" + "onclick='ConsultaSintesis(" + Actuacion.idActuacion + ")'" + " checked>";
                                band = 1;
                            } else {
                                table += "<input type='radio' name='idActuacion' id='optionsRadiosInline1' value='" + Actuacion.idActuacion + "'" + "onclick='ConsultaSintesis(" + Actuacion.idActuacion + ")'" + ">";
                            }

                            table += "<td style='display: none;'> <div id='Actuacion" + Actuacion.idActuacion + "'> " + Actuacion.observaciones + "</div></td>";
                            table += "</td>";
                            table += "</tr>";
                            i = i + 1;
                        });
                        table += "</tbody> ";
                        table += "</table> ";



                        //                  $("#divHideForm").hide();
                        $("#divConsultaActuaciones").show();
                        $("#divTableResultActuaciones").html(table);

                        if (band == 1) {
                            ConsultaSintesis(idActuacionPadre);
                            changeDivForm(6);
                        }

                        $("#tblResultadosGrid").DataTable({
                            paging: false
                        });

                        if (json.totalCountImputados > 0 || json.totalCountOfendidos > 0) {
                            var table = "";
                            table += "<table class='table table-hover table-striped table-bordered'>";
                            // table += "<table>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th colspan='5'><div align='center'>Datos Partes</div></th>";
                            table += "<th colspan='4'><div align='center'>Datos Defensores</div></th>";
                            table += "</tr>";
                            table += "<tr>";
                            table += "<th width='5%'>N&uacute;m.</th>";

                            table += "<th width='15%'>Nombre</th>";
                            table += "<th width='10%'>Tipo</th>";
                            table += "<th width='10%'>Email</th>";
                            table += "<th  width='10%'>Seleccione</th>";

                            table += "<th width='15%'>Defensor</th>";
                            table += "<th width='10%'>Tipo</th>";
                            table += "<th width='15%'>Email</th>";
                            table += "<th width='10%'>Seleccione</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            var cont = 0;
                            // var counter = parseInt(k)+1;
                            var w = 1;
                            var despais = "";
                            var fechatmp;
                            var fecha;
                            //table += '<tr onclick="showInfo(' + vImputado.id + ',' + '\'' + vImputado.desDelito + '\'' + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';

                            $.each(json.Imputados, function (k, Actuacion) {
                                table += "<tr>";
                                table += "<td>" + (w) + "</td>";
                                table += "<td>" + Actuacion.nombre + ' ' + Actuacion.paterno + ' ' + Actuacion.materno + "</td>";
                                table += "<td>" + Actuacion.tipo + "</td>";
                                if (Actuacion.totalCountEmailsImputados != 0) {
                                    table += "<td><table>";
                                    $.each(Actuacion.ImputadosEmail, function (k, Emails) {
                                        table += "<tr>";
                                        table += "<td>" + Emails.emailImputado + "</td>";
                                        ;
                                        table += "</tr>";
                                    });

                                    table += "</td></table>";
                                } else {
                                    table += "<td></td>";
                                }
                                table += "<td>";
                                table += "<label>";
                                table += "<input type='checkbox' name='Imputados' value='" + Actuacion.idImputadoCarpeta + "'>";
                                table += "</label>";
                                table += "</td>";
                                //                            table += "<td>" + Actuacion.NombreDefensor + "</td>";
                                //                            table += "<td>" + Actuacion.TipoDefensor + "</td>";
                                //                            table += "<td>" + Actuacion.EmailDefensor + "</td>";
                                $("#cmbPartesTestigos").append("<option value = '" + Actuacion.cveTipoParte + "||" + Actuacion.idImputadoCarpeta + "'>" + Actuacion.tipo + "-" + Actuacion.nombre + ' ' + Actuacion.paterno + ' ' + Actuacion.materno + "</option>");
                                if (json.data[0].cveTipoCarpeta != "7") {
                                    if (Actuacion.totalDefensoresImp != 0) {

                                        table += "<td colspan='4'>";
                                        table += "<table style='margin:0%'  width='100%' class='table table-striped'>";
                                        $.each(Actuacion.DefensoresImputados, function (k, Defensor) {

                                            table += "<tr>";
                                            table += "<td width='30%'>" + Defensor.NombreDefensor + "</td>";
                                            table += "<td width='20%'>" + Defensor.TipoDefensor + "</td>";
                                            table += "<td width='30%'>" + Defensor.EmailDefensor + "</td>";

                                            table += "<td width='20%'>";
                                            //table += "<td>" + Actuacion.idDefensorImputado;
                                            table += "<label>";
                                            if (Actuacion.NombreDefensor != "-") {
                                                table += "<input type='checkbox' name='DefensoresImputados' value='" + Defensor.idDefensorImputado + "'>";
                                            }
                                            table += "</label>";
                                            table += "</td>";

                                            table += "</tr>";
                                        });

                                        table += "</table></td>";
                                    } else
                                    {
                                        table += "<td colspan='4'></td>";
                                    }

                                }
                                table += "</tr>";
                                w = w + 1;

                            });

                            $.each(json.Ofendidos, function (k, Actuacion) {
                                table += "<tr>";
                                table += "<td>" + (w) + "</td>";
                                table += "<td>" + Actuacion.nombre + ' ' + Actuacion.paterno + ' ' + Actuacion.materno + "</td>";
                                table += "<td>" + Actuacion.tipo + "</td>";

                                if (Actuacion.OfendidosEmail != 0) {
                                    table += "<td><table>";
                                    $.each(Actuacion.OfendidosEmail, function (k, Emails) {
                                        table += "<tr>";
                                        table += "<td>" + Emails.emailOfendido + "</td>";
                                        ;
                                        table += "</tr>";
                                    });

                                    table += "</td></table>";
                                } else {
                                    table += "<td></td>";
                                }

                                table += "<td>";
                                table += "<label>";
                                table += "<input type='checkbox' name='Ofendidos' value='" + Actuacion.idOfendidoCarpeta + "'>";
                                table += "</label>";
                                table += "</td>";
                                $("#cmbPartesTestigos").append("<option value = '" + Actuacion.cveTipoParte + "||" + Actuacion.idOfendidoCarpeta + "'>" + Actuacion.tipo + "-" + Actuacion.nombre + ' ' + Actuacion.paterno + ' ' + Actuacion.materno + "</option>");
                                if (json.data[0].cveTipoCarpeta != "7") {
                                    if (Actuacion.totalDefensoresOf != 0) {
                                        table += "<td colspan='4'>";
                                        table += "<table style='margin:0%' width='100%' class='table table-striped'>";
                                        $.each(Actuacion.DefensoresOfendidos, function (k, Defensor) {
                                            table += "<tr>";
                                            table += "<td width='30%'>" + Defensor.NombreDefensor + "</td>";
                                            table += "<td width='20%'>" + Defensor.TipoDefensor + "</td>";
                                            table += "<td width='30%'>" + Defensor.EmailDefensor + "</td>";

                                            table += "<td width='20%'>";
                                            //                                                                    table += "<td> "+ Actuacion.idDefensorImputado ;//
                                            table += "<label>";
                                            if (Actuacion.NombreDefensor != "-") {
                                                table += "<input type='checkbox' name='DefensoresOfendidos' value='" + Defensor.IdDefensorOfendidoCarpeta + "'>";
                                            }
                                            table += "</label>";
                                            table += "</td>";

                                            table += "</tr>";
                                        });

                                        table += "</table></td>";
                                    } else {
                                        table += "<td colspan='4'></td>";
                                    }
                                }

                                table += "</tr>";
                                w = w + 1;
                            });

                            table += "</tbody> ";
                            table += "</table> ";

                            //                  $("#divHideForm").hide();

                            $("#LeyendaAutorizado").hide();
                            $("#divConsultaPersonas").show();
                            $("#divConsultaTestigos").show();
                            $("#divTableResultPersonas").html(table);
                            $("#tblResultadosGrid").DataTable({
                                paging: false
                            });
                        }
                    } else {
                        $("#divAlertInfoCarpeta").html(mensaje);
                        $("#divAlertInfoCarpeta").show("slide");
                        setTimeAlert("divAlertInfoCarpeta");
                        $("#divConsulta").hide();
                        $("#divTableResult").html("");

                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
            //********************* *************************************
        };
        AgregarTestigo = function () {
            var error = false;
            var mensajError = "";

            if ($("#cmbPartesTestigos").val() == "" || $("#cmbPartesTestigos").val() <= 0) {
                error = true;
                mensajError += " Seleccione la parte a la que pertenece el testigo";
            }

            if ($("#txtNombreTestigo").val() == "") {
                error = true;
                mensajError += " El nombre del testigo no puede ser vacio";
            }

            if (!error) {
                var partesTestigos = $("#cmbPartesTestigos").val();
                partesTestigos = partesTestigos.split("||");
                arrayTestigos.push({
                    "idArrayTestigo": identificadorArrayTestigos,
                    "cveReferenciaTipoParte": partesTestigos[0],
                    "idReferenciaParte": partesTestigos[1],
                    "nombreTestigo": $("#txtNombreTestigo").val().toUpperCase()
                });


                var stringTr = '<tr id="idTestigo' + identificadorArrayTestigos + '">' +
                        '<td>' + $("#cmbPartesTestigos option:selected").text().toUpperCase() + '</td>' +
                        '<td>' + $("#txtNombreTestigo").val() + '</td>' +
                        '<td><img src="img/eliminar.png" width="25"   onclick="elimnaTestigo(' + identificadorArrayTestigos + ');" height="25"/></td>' +
                        '</tr>'
                $('#tableResultTestigos tr:last').after(stringTr);
                identificadorArrayTestigos++;


                $("#cmbPartesTestigos").val("0");
                $("#txtNombreTestigo").val("");
            } else {
                $("#divAlertDager").html(mensajError);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        }
        elimnaTestigo = function (idTestigo) {
            $("#idTestigo" + idTestigo).remove();
            for (var indiceTestigos = 0; indiceTestigos < arrayTestigos.length; indiceTestigos++) {
                if (arrayTestigos[indiceTestigos].idArrayTestigo == idTestigo) {
                    arrayTestigos.splice(indiceTestigos, 1);
                }
            }
        }
        //--------------------------------------------------------------------------------------
        GuardarNotificacion = function () {
            var idActuacionInsertada = $("#idActuacionInsertada").val();
            var cveJuzgado = $("#cmbcveJuzgado").val();
            if (idActuacionInsertada != "")
            {
                ActualizarNotificacion();
            } else
            {
                var ArregloImputados = document.getElementsByName("Imputados");
                var CadenaImputados = "I-";
                var bandrazon = 0;
                var contadorPersonas = 0;
                var razon = editorRazon.getAllHtml();
                razon = razon.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');
                //            razon=razon.replace(/[\u0022]/g, '&QUOT;');  
                for (var i = 0; i < ArregloImputados.length; i++) {
                    if (ArregloImputados[i].checked == true)
                    {
                        CadenaImputados = CadenaImputados + ArregloImputados[i].value + '-';
                        contadorPersonas = contadorPersonas + 1;
                    }
                }
                CadenaImputados = CadenaImputados + 'I';
                //alert(CadenaImputados);
                //---Arreglo Defensores Imputados
                var CadenaDefensoresImputados = "D-";
                var ArregloDefensoresImputados = document.getElementsByName("DefensoresImputados");
                for (var i = 0; i < ArregloDefensoresImputados.length; i++) {
                    if (ArregloDefensoresImputados[i].checked == true)
                    {
                        CadenaDefensoresImputados = CadenaDefensoresImputados + ArregloDefensoresImputados[i].value + '-';
                        contadorPersonas = contadorPersonas + 1;
                    }
                }
                CadenaDefensoresImputados = CadenaDefensoresImputados + 'D';
                //alert(CadenaDefensoresImputados);
                //-------------------------------------
                var ArregloOfendidos = document.getElementsByName("Ofendidos");
                var CadenaOfendidos = "O-";
                for (var i = 0; i < ArregloOfendidos.length; i++) {
                    if (ArregloOfendidos[i].checked == true)
                    {
                        CadenaOfendidos = CadenaOfendidos + ArregloOfendidos[i].value + '-';
                        contadorPersonas = contadorPersonas + 1;
                    }
                }
                CadenaOfendidos = CadenaOfendidos + 'O';
                //alert(CadenaOfendidos);
                //-------Arreglo Defensores Ofendidos
                var ArregloDefensoresOfendidos = document.getElementsByName("DefensoresOfendidos");
                var CadenaDefensoresOfendidos = "D-";
                for (var i = 0; i < ArregloDefensoresOfendidos.length; i++) {
                    if (ArregloDefensoresOfendidos[i].checked == true)
                    {
                        CadenaDefensoresOfendidos = CadenaDefensoresOfendidos + ArregloDefensoresOfendidos[i].value + '-';
                        contadorPersonas = contadorPersonas + 1;
                    }
                }
                CadenaDefensoresOfendidos = CadenaDefensoresOfendidos + 'D';
                //alert(CadenaDefensoresOfendidos);
                //------------------------------------

                var cadenaTestigos = "";
                if (arrayTestigos.length > 0) {
                    cadenaTestigos += "[";
                    for (var i = 0; i < arrayTestigos.length; i++) {
                        cadenaTestigos += "{";
                        cadenaTestigos += '"idReferenciaParte":"' + arrayTestigos[i].idReferenciaParte + '",';
                        cadenaTestigos += '"cveReferenciaTipoParte":"' + arrayTestigos[i].cveReferenciaTipoParte + '",';
                        cadenaTestigos += '"nombreTestigo":"' + arrayTestigos[i].nombreTestigo + '"';
                        cadenaTestigos += "},";
                    }
                    cadenaTestigos = cadenaTestigos.substring(0, cadenaTestigos.length - 1);
                    cadenaTestigos += "]";
                }

                var LeerRazon = 1;
                var cveTipoActuacion = 20;//20 es tradicional y 21 electr�nica
                var cveTipoNotificacion = 1;//Notificacion Personal o tradicional
                if (document.getElementById('checkelectronica').checked == true)//Si notificaci�n Electr�nica no esta seleccionada
                {
                    LeerRazon = 0;
                    razon = "";
                    cveTipoActuacion = 21;
                    cveTipoNotificacion = 3;
                }
//                var errores = false;
//                if($("#cmbcveTipoCarpeta").val() == "7"){
//                    if($("#dtpFechaDevolucion").val() == ""){
//                        errores = true;
//                    }
//                    if($("#cmbDiligencia").val() == "" || $("#cmbDiligencia").val() == "0" ){
//                        errores = true;
//                    }
//                }else{
//                    $("#dtpFechaDevolucion").val("");
//                    $("#cmbDiligencia").val("");
//                }
                
                //alert(contadorPersonas);
                var idActuacion = $("#idActuacion").val();
                if (contadorPersonas != 0 && idActuacion != "" && cveJuzgado != "0")
                {
                    var accion = "GuardarNotificacion";
                    var cveTipoCarpeta = $("#cmbcveTipoCarpeta").val();
                    var numero = $("#txtNumero").val();
                    var anio = $("#txtAnio").val();
                    var fechaNotificacion = $("#txtfechaNotificacion").val();
                    var idActuacionPadre = $("#idActuacion").val();
                    var idReferencia = $("#hiddenIdCarpetaJudicialOK").val();
                    var cveJuzgado = cveJuzgado;
                    var cveUsuario = cveUsuarioSesion;

                    var LeerRazon = LeerRazon;
                    var observaciones = razon;
                    var CadenaImputados = CadenaImputados;
                    var CadenaOfendidos = CadenaOfendidos;
                    var CadenaDefensoresOfendidos = CadenaDefensoresOfendidos;
                    var CadenaDefensoresImputados = CadenaDefensoresImputados;
                    var activo = "S";
                    var cveTipoActuacion = cveTipoActuacion;
                    var cveTipoNotificacion = cveTipoNotificacion;
                    var vcveTipoCarpeta = $("#cmbcveTipoCarpeta").val();
                    var idActuacion = $("#idActuacion").val();

                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                        async: false,
                        dateType: "json",
                        data: {
                            accion: accion,
                            cveTipoCarpeta: cveTipoCarpeta,
                            numero: numero,
                            anio: anio,
                            fechaNotificacion: fechaNotificacion,
                            idActuacionPadre: idActuacionPadre,
                            idReferencia: idReferencia,
                            cveJuzgado: cveJuzgado,
                            cveUsuario: cveUsuario,
                            activo: activo,
                            LeerRazon: LeerRazon,
                            observaciones: razon,
                            CadenaImputados: CadenaImputados,
                            CadenaOfendidos: CadenaOfendidos,
                            CadenaDefensoresOfendidos: CadenaDefensoresOfendidos,
                            CadenaDefensoresImputados: CadenaDefensoresImputados,
                            cadenaTestigos: cadenaTestigos,
                            cveTipoActuacion: cveTipoActuacion,
                            cveTipoNotificacion: cveTipoNotificacion,
                            vcveTipoCarpeta: vcveTipoCarpeta,
                            idActuacion: idActuacion,
                            fechaDevolucion: $("#dtpFechaDevolucion").val(),
                            diligencia: $("#cmbDiligencia").val()
                        },
                        success: function (datos) {
                            //alert(datos);
                            var json = eval("(" + datos + ")"); //Parsear JSON
                            if (json.totalCount > 0) {
                                $("#BtnEliminar").show("fade");
                                //Botones de digitalizar
                                $("#inputPDFIns").show("fade");
                                $("#inputVisorIns").show("fade");
                                $("#inputDigitalizar").show("fade");
                                $("#idTipoNotificacion").val(20);
                                $("#idActuacionInsertada").val(json.data[0].idActuacion);
                                $("#idActuacionNot").val(json.data[0].idActuacion);
                                document.getElementById("checkelectronicaConsulta").checked = false;
                                $("#divAlertSucces").html("NOTIFICACI&Oacute;N GUARDADA EXITOSAMENTE");
                                $("#divAlertSucces").show("slide");
                                setTimeAlert("divAlertSucces");
                                if (procedencia == 1) {
                                    getTree();
                                }
                            } else {
                                $("#divAlertInfo").html("LA NOTIFICACI&Oacute;N YA SE ENCUENTRA REGISTRADA, INTENTE CON UNA NUEVA");
                                $("#divAlertInfo").show("slide");
                                setTimeAlert("divAlertInfo");
                            }
                            //$('#barCarga').html("");

                        },
                        error: function (objeto, quepaso, otroobj) {
                            //alert("Error en la peticion:\n\n" + quepaso);
                            $("#divAlertInfo").html("Error en la peticion:\n\n" + quepaso);
                            $("#divAlertInfo").show("slide");
                            setTimeAlert("divAlertInfoCarpeta");
                        }
                    });
                } else {
                    $("#divAlertInfo").html("Complete la Informaci&oacute;n con (*)");
                    $("#divAlertInfo").show("slide");
                    setTimeAlert("divAlertInfo");
                }
            }
        };
        //--------------------------------------------------------------------------------------
        GuardarNotificacionElectronica = function () {
            var cveJuzgado = $("#cmbcveJuzgado").val();
            var idActuacionInsertada = $("#idActuacionInsertada").val();

            if (idActuacionInsertada != "")
            {
                ActualizarNotificacion();
            } else
            {
                var ArregloPersonasAutorizadas = document.getElementsByName("PersonasAutorizadas");
                var ArregloNombrePersonas = document.getElementsByName("txtNombrePersonas");
                var ArregloEmails = document.getElementsByName("txtEmail");
                var ArregloCedulas = document.getElementsByName("txtCedulas");
                var idcc = $("#txtcc").val();
                // alert("id: " + idcc);
                var k = "txtCedulascc" + idcc;
                var ArregloEmailscc = document.getElementsByName(k);
                //alert("L: " + ArregloEmailscc.length);
                var CadenaPersonas = "P-";
                var CadenaEmails = "E/";
                var CadenaNombres = "1/";
                var CadenaCedulas = "C/";
                var CadenaEmailscc = "C/";
                var Email;
                var contadorPersonas = 0;
                for (var i = 0; i < ArregloPersonasAutorizadas.length; i++) {
                    if (ArregloPersonasAutorizadas[i].checked == true)
                    {
                        CadenaPersonas = CadenaPersonas + ArregloPersonasAutorizadas[i].value + '-';
                        CadenaEmails = CadenaEmails + ArregloEmails[i].value + '/';
                        CadenaNombres = CadenaNombres + ArregloNombrePersonas[i].value + '/';
                        CadenaCedulas = CadenaCedulas + ArregloCedulas[i].value + '/';
                        contadorPersonas = contadorPersonas + 1;
                    }
                }
                var long = ArregloEmailscc.length / 2;
                for (var i = 0; i < long; i++) {
                    //alert("valor: " + ArregloEmailscc[i].value);
                    CadenaEmailscc = CadenaEmailscc + ArregloEmailscc[i].value + '/';
                }
                CadenaPersonas = CadenaPersonas + 'P';
                CadenaEmails = CadenaEmails + 'E';
                CadenaNombres = CadenaNombres + '1';
                CadenaCedulas = CadenaCedulas + 'C';
                CadenaEmailscc = CadenaEmailscc + 'C';
                var cveTipoActuacion = 21;
                var cveTipoNotificacion = 3;
                //alert("Cadena:" + CadenaEmailscc);

                var strDatos = "accion=GuardarNotificacionElectronica";
                strDatos += "&cveTipoCarpeta=" + $("#cmbcveTipoCarpeta").val();
                strDatos += "&numero=" + $("#txtNumero").val();
                strDatos += "&anio=" + $("#txtAnio").val();
                strDatos += "&fechaNotificacion=" + $("#txtfechaNotificacion").val();
                strDatos += "&idActuacionPadre=" + $("#idActuacion").val();
                strDatos += "&idReferencia=" + $("#hiddenIdCarpetaJudicialOK").val();
                strDatos += "&cveJuzgado=" + cveJuzgado;
                strDatos += "&cveUsuario=" + cveUsuarioSesion;
                strDatos += "&activo=S";
                strDatos += "&cveTipoActuacion=" + cveTipoActuacion;
                strDatos += "&cveTipoNotificacion=" + cveTipoNotificacion;
                strDatos += "&CadenaPersonas=" + CadenaPersonas;
                strDatos += "&CadenaEmails=" + CadenaEmails;
                strDatos += "&CadenaNombres=" + CadenaNombres;
                strDatos += "&CadenaCedulas=" + CadenaCedulas;
                strDatos += "&CadenaEmailscc=" + CadenaEmailscc;
                strDatos += "&vcveTipoCarpeta=" + $("#cmbcveTipoCarpeta").val();
                var idActuacion = $("#idActuacion").val();
                if (contadorPersonas != 0 && idActuacion != "" && cveJuzgado != "0")
                {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                        data: strDatos,
                        async: true,
                        dataType: "html",
                        beforeSend: function (objeto) {
                            //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                        },
                        success: function (datos) {
                            //alert(datos);
                            var json = eval("(" + datos + ")"); //Parsear JSON
                            if (json.totalCount > 0) {
                                $("#BtnEliminar").hide("fade");
                                $("#BtnActualizarOk").hide("fade");
                                $("#BtnGuardar").hide("fade");
                                //Botones de digitalizar
                                //                        $("#inputVisor").show("fade");
                                //                        $("#inputPDF").show("fade");
                                $("#idTipoNotificacion").val(21);
                                $("#idActuacionInsertada").val(json.data[0].idActuacion);
                                $("#idActuacionNot").val(json.data[0].idActuacion);
                                document.getElementById("checkelectronicaConsulta").checked = true;
                                $("#divAlertSucces").html("NOTIFICACI&Oacute;N GUARDADA EXITOSAMENTE");
                                $("#divAlertSucces").show("slide");
                                setTimeAlert("divAlertSucces");
                            } else {
                                $("#divAlertInfo").html("LA NOTIFICACI&Oacute;N YA SE ENCUENTRA REGISTRADA, INTENTE CON UNA NUEVA");
                                $("#divAlertInfo").show("slide");
                                setTimeAlert("divAlertInfo");
                            }
                            //$('#barCarga').html("");

                        },
                        error: function (objeto, quepaso, otroobj) {
                            //alert("Error en la peticion:\n\n" + quepaso);
                            $("#divAlertInfo").html("Error en la peticion:\n\n" + quepaso);
                            $("#divAlertInfo").show("slide");
                            setTimeAlert("divAlertInfoCarpeta");
                        }
                    });
                } else {
                    $("#divAlertInfo").html("Complete la Informaci&oacute;n con (*)");
                    $("#divAlertInfo").show("slide");
                    setTimeAlert("divAlertInfo");
                }
            }
        };
        //-------------------------------------------------------------------------------------   
        ConsultarNotificacion = function (Aux) {
            if (Aux == 1) {
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);
            }
            var cveJuzgado = $("#cmbcveJuzgadoConsulta").val();
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var cveTipoActuacion = 20;
            var msj;
            msj = "NOTIFICACIONES";

            var strDatos = "accion=consultarNotificaciones";
            var b = 0;
            if ($("#cmbcveTipoCarpetaConsulta").val() != '0' || $("#txtNumeroConsulta").val() != '' || $("#txtAnioConsulta").val() != '')
            {
                b = 1;
            }
            if (b == 0)
            {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtFecInicialBusqueda").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtFecFinalBusqueda").val();
            }


            strDatos += "&cveTipoCarpeta=" + $("#cmbcveTipoCarpetaConsulta").val();
            strDatos += "&numero=" + $("#txtNumeroConsulta").val();
            strDatos += "&anio=" + $("#txtAnioConsulta").val();

            strDatos += "&cveTipoActuacion=" + cveTipoActuacion;
            strDatos += "&cveJuzgado=" + cveJuzgado;
            strDatos += "&activo=S";
            //alert('Pag: '+pag)
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                //            global:false,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        table += "<div align='center'><h4>" + msj + "</h4></div>";
                        table += "<table class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Carpeta</th>"
                        table += "<th>Actuaci&oacute;n Origen</th>"
                        table += "<th>Fecha de Registro</td>";
                        table += "<th>Total de Notificaciones</td>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var cont = 0;
                        // var counter = parseInt(k)+1;

                        for (var i = 0; i < json.total; i++) {
                            table += '<tr onclick="ConsultarDetalle(' + json.data[i].idActuacionHija + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                            table += "<td>" + (i + 1) + "</td>";
                            table += "<td> " + json.data[i].descTipoCarpeta + ' ' + json.data[i].numero + '/' + json.data[i].anio + "</td>";
                            table += "<td> " + json.data[i].Origen + ' ' + json.data[i].numActuacionPadre + json.data[i].aniActuacionPadre + "</td>";
                            table += "<td> " + json.data[i].fechaRegistro + "</td>";
                            table += "<td> " + json.data[i].totalNotificaciones + "</td>";
                            table += "</tr> ";
                        }
                        table += "</tbody> ";
                        table += "</table> ";

                        //                  $("#divHideForm").hide();
                        $("#divConsulta").show();
                        $("#divTableResult").html(table);
                        //                    $("#tblResultadosGrid").DataTable({
                        //                        paging: false
                        //                    });

                        //alert(json.pagina);
                        //alert(json.totalCount);
                        getPaginas(json.pagina, json.totalCount, cveTipoActuacion);

                    } else {
                        $("#divConsulta").hide();
                        $("#divTableResult").html("");
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");


                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });

            //********************* *************************************
        };
        //-------------------------------------------------------------------------------------    
        function ConsultarTipoNotificacion(idActuacion) {
            var strDatos = "accion=consultar";
            strDatos += "&idActuacion=" + idActuacion;
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
                    //alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    //                changeDivForm(3);
                    if (json.totalCount > 0) {
                        if (json.data[0].cveTipoActuacion == 20) {//TRADICIONAL
                            document.getElementById("checkelectronicaConsulta").checked = false;
                            ConsultarDetalle(idActuacion);
                            $("#BtnRegresarConsulta").hide("fade");
                            changeDivForm(3);
                        }
                        if (json.data[0].cveTipoActuacion == 21) {//ELECTRONICA
                            document.getElementById("checkelectronicaConsulta").checked = true;
                            ConsultarDetalleElectronica(idActuacion);
                            changeDivForm(3);
                        }
                        if (json.data[0].cveTipoActuacion != 20 && json.data[0].cveTipoActuacion != 21) {//ELECTRONICA
                            $("#divAlertWarning").html("EL ID NO CORRESPONDE A UNA NOTIFICACION");
                            $("#divAlertWarning").show("slide");
                            setTimeAlert("divAlertWarning");
                            $("#BtnRegresarConsulta").hide("fade");
                            changeDivForm(5);
                        }
                    } else {
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        }
        //-------------------------------------------------------------------------------------   
        ConsultarNotificacionElectronica = function (Aux) {
            if (Aux == 1) {
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);
            }
            var cveJuzgado = $("#cmbcveJuzgadoConsulta").val();
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var msj;
            var cveTipoActuacion = 21;
            var strDatos = "accion=consultarDetalleElectronica";
            msj = "NOTIFICACI&Oacute;N ELECTR&Oacute;NICA";

            if ($("#cmbcveTipoCarpetaConsulta").val() != '0' || $("#txtNumeroConsulta").val() != '' || $("#txtAnioConsulta").val() != '')
            {
                var omitirFecha = 'Si';
            } else
            {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtFecInicialBusqueda").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtFecFinalBusqueda").val();
            }



            strDatos += "&cveTipoCarpeta=" + $("#cmbcveTipoCarpetaConsulta").val();
            strDatos += "&numero=" + $("#txtNumeroConsulta").val();
            strDatos += "&anio=" + $("#txtAnioConsulta").val();
            //strDatos += "&txtFecInicialBusqueda=" + $("#txtFecInicialBusqueda").val();
            //strDatos += "&txtFecFinalBusqueda=" + $("#txtFecFinalBusqueda").val();
            strDatos += "&cveTipoActuacion=" + cveTipoActuacion;
            strDatos += "&cveJuzgado=" + cveJuzgado;
            strDatos += "&activo=S";
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                //          global:false,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        table += "<div align='center'><h4>" + msj + "</h4></div>";
                        table += "<table class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Carpeta</th>"
                        table += "<th>Actuaci&oacute;n Origen</th>"
                        table += "<th>Fecha de Registro</td>";
                        table += "<th>Total de Notificaciones</td>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var cont = 0;
                        // var counter = parseInt(k)+1;

                        for (var i = 0; i < json.totalCount; i++) {
                            table += '<tr onclick="ConsultarDetalleElectronica(' + json.data[i].idActuacionHija + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                            table += "<td>" + (i + 1) + "</td>";
                            table += "<td> " + json.data[i].descTipoCarpeta + ' ' + json.data[i].numero + '/' + json.data[i].anio + "</td>";
                            table += "<td> " + json.data[i].Origen + ' ' + json.data[i].numActuacionPadre + json.data[i].aniActuacionPadre + "</td>";
                            table += "<td> " + json.data[i].fechaRegistro + "</td>";
                            table += "<td> " + json.data[i].totalNotificaciones + "</td>";
                            table += "</tr> ";
                        }
                        table += "</tbody> ";
                        table += "</table> ";

                        //                  $("#divHideForm").hide();
                        $("#divConsulta").show();
                        $("#divTableResult").html(table);
                        //                    $("#tblResultadosGrid").DataTable({
                        //                        paging: false
                        //                    });

                        //alert('1: '+ json.pagina);
                        //alert(json.totalCount);
                        getPaginas(json.pagina, json.totalCount, cveTipoActuacion);

                    } else {
                        $("#divConsulta").hide();
                        $("#divTableResult").html("");
                        $("#divAlertInfo").html(json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");


                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });

            //********************* *************************************
        };
        //-------------------------------------------------------------------------------------     
        function ConsultarDetalle(idActuacion) {
            var pag = 1;
            var cantReg = 10;

            var strDatos = "accion=consultarNotificaciones";
            strDatos += "&idActuacion=" + idActuacion;
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
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
                    //                            alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        changeDivForm(3);
                        $("#cmbcveJuzgado").val(json.data[0].cveJuzgado);
                        $("#cmbcveTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                        $("#txtNumero").val(json.data[0].numero);
                        $("#txtAnio").val(json.data[0].anio);
                        $("#idActuacionNot").val(idActuacion);
                        $("#idTipoNotificacion").val(20); //20 = tradicional, 21=Electr�nica
                        $("#inputVisor").show("fade");
                        $("#inputPDF").show("fade");
                        $("#inputDigitalizarAct").show("fade");
                        $("#dtpFechaDevolucion").val(json.data[0].fechaDevolucion);
                        $("#cmbDiligencia").val(json.data[0].diligencia);
                        $("#dtpFechaDevolucion").attr("disabled", "disabled");
                        $("#cmbDiligencia").attr("disabled", "disabled");
                        if(json.data[0].cveTipoCarpeta == "7"){
                            $("#divCamposExhortos").show("fade");
                        }
                        editorSintesis.setContent("", false);
                        llenareditorSintesis(json.data[0].observacionesPadre);
                        editorRazon.setContent("", false);
                        llenareditorRazon(json.data[0].observacionesHijo);
                        if (json.data[0].cveTipoActuacion == 21) {
                            $("#checkelectronica").attr("checked", "checked");
                            $("#ConsultarCarpeta").hide("fade");
                            $("#divRazon").hide("fade");
                        } else {
                            $("#checkelectronica").removeAttr("checked", "checked");
                            $("#ConsultarCarpeta").show("fade");
                            $("#divRazon").show("fade");
                        }
                        $("#txtActuacionPadre").val(json.data[0].Origen + ' ' + json.data[0].numActuacionPadre + json.data[0].aniActuacionPadre);
                        //table += "<table class='table table-hover table-striped table-bordered'>";
                        table += "<table class='table table-hover table-striped table-bordered'>";
                        // table += "<table>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Nombre</th>";
                        table += "<th>Tipo</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var i = 1;
                        $.each(json.data[0].DetalleNotificacion, function (k, vnombre) {
                            //alert(vnombre.Nombre);  
                            table += "<tr>";
                            table += "<td>" + i + "</td>";
                            table += "<td>" + vnombre.nombre + ' ' + vnombre.paterno + ' ' + vnombre.materno + "</td>";
                            table += "<td>" + vnombre.tipo + "</td>";
                            table += "</tr>";
                            $("#txtfechaNotificacion").val(vnombre.fechaNotificacion);
                            i = i + 1;
                        });
                        table += "</table>";
                        $("#divConsultaPersonas").show();
                        $("#divTableResultPersonas").html(table);


                        var tableTestigos = "";
                        tableTestigos += "<table id='tableResultTestigos' class='table table-hover table-striped table-bordered'>";
                        tableTestigos += "<thead>";
                        tableTestigos += "<tr>";
                        tableTestigos += "<th style='width: 10%;'>N&uacute;m.</th>";
                        tableTestigos += "<th style='width: 40%;'>Parte</th>";
                        tableTestigos += "<th style='width: 10%;'>Tipo</th>"
                        tableTestigos += "<th style='width: 40%;'>Testigo</th>"
                        tableTestigos += "</tr>";
                        tableTestigos += "</thead>";
                        tableTestigos += "<tbody>";
                        $.each(json.data[0].detalleTestigos, function (k, testigo) {
                            tableTestigos += "<tr>";
                            tableTestigos += "<td>" + (k + 1) + "</td>";
                            tableTestigos += "<td>" + testigo.nombre + ' ' + testigo.paterno + ' ' + testigo.materno + "</td>";
                            tableTestigos += "<td>" + testigo.tipo + "</td>";
                            tableTestigos += "<td>" + testigo.nombreTestigo + "</td>";
                            tableTestigos += "</tr>";
                        });
                        tableTestigos += "</table>";
                        $("#divTableResultTestigos").html(tableTestigos);
                        $("#divConsultaTestigos").show();
                        $("#divDatosTestigosPartes").hide();


                        $("#divConsultaActuaciones").hide();
                        $("#copia").hide("fade");
                        $("#divCopias").hide("fade");
                        $("#divFormulario").show("fade");
                        // $("#divTableResultActuaciones").html(table);

                        //                            $("#tblResultadosGrid").DataTable({
                        //                            paging: false
                        //                            });
                    } else {
                        $("#divConsultaPersonas").hide();
                        $("#divTableResultPersonas").html("");
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        }
        //-------------------------------------------------------------------------------------     
        function ConsultarDetalleElectronica(idActuacion) {
            var pag = 1;
            var cantReg = 10;

            var strDatos = "accion=consultarDetalleElectronica";
            strDatos += "&idActuacion=" + idActuacion;
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //                            alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        //                    changeDivForm(3);
                        $("#cmbcveJuzgado").val(json.data[0].cveJuzgado);
                        $("#cmbcveTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                        $("#txtNumero").val(json.data[0].numero);
                        $("#txtAnio").val(json.data[0].anio);
                        $("#idActuacionNot").val(idActuacion);
                        $("#idTipoNotificacion").val(21); //20 = tradicional, 21=Electr�nica

                        $("#inputVisor").hide("fade");
                        $("#inputPDF").hide("fade");

                        editorSintesis.setContent("", false);
                        llenareditorSintesis(json.data[0].observacionesPadre);
                        if (json.data[0].cveTipoActuacion == 21) {
                            document.getElementById("checkelectronica").checked = true;
                            $("#checkelectronica").attr("checked", "checked");
                            $("#ConsultarCarpeta").hide("fade");
                            $("#divRazon").hide("fade");
                        } else {
                            $("#checkelectronica").removeAttr("checked", "checked");
                            $("#ConsultarCarpeta").show("fade");
                            $("#divRazon").show("fade");
                        }
                        $("#txtActuacionPadre").val(json.data[0].Origen + ' ' + json.data[0].numActuacionPadre + json.data[0].aniActuacionPadre);
                        //table += "<table class='table table-hover table-striped table-bordered'>";

                        table += "<table class='table table-hover table-striped table-bordered'>";
                        // table += "<table>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Nombre</th>";
                        table += "<th>Email</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var i = 1;
                        $.each(json.data[0].DetalleNotificacion, function (k, vnombre) {
                            //alert(vnombre.Nombre);  
                            table += "<tr>";
                            table += "<td>" + i + "</td>";
                            table += "<td>" + vnombre.nombre + ' ' + vnombre.paterno + ' ' + vnombre.materno + "</td>";
                            table += "<td>" + vnombre.email + "</td>";
                            table += "</tr>";
                            $("#txtfechaNotificacion").val(vnombre.fechaNotificacion);
                            i = i + 1;

                            table += "</table>";
                            var j = 1;
                            if (vnombre.totalCopias > 0) {
                                table += "<div align='left'></br><strong>Con copia:</strong></br><table><tr>";//style='display: none;'
                                $.each(vnombre.ConCopia, function (k, copias) {
                                    table += "<td width='7%'>" + (j) + ". </td>";
                                    table += "<td width='50%'>" + copias.nombrecc + ' ' + copias.paternocc + ' ' + copias.maternocc + ": </td>";
                                    table += "<td width='43%'> " + copias.cedulacc + "@pjedomex.gob.mx" + "</td>";
                                    table += "</tr>";
                                    j = j + 1;
                                });
                                table += "</table></div>";
                            }
                        });
                        $("#divConsultaPersonas").show();
                        $("#BtnActualizar").show();
                        $("#BtnActualizarOk").hide();
                        $("#divTableResultPersonas").html(table);

                        $("#divConsultaActuaciones").hide();
                        $("#copia").hide("fade");
                        $("#divCopias").hide("fade");

                        //                            $("#tblResultadosGrid").DataTable({
                        //                            paging: false
                        //                            });
                    } else {
                        $("#divConsultaPersonas").hide();
                        $("#divTableResultPersonas").html("");
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        $("#BtnActualizar").hide("fade");
                        setTimeAlert("divAlertInfo");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        }

        //---------------------------------------------------------------------   
        ActualizarNotificacion = function () {
            //Arbol


            var razon = editorRazon.getAllHtml();
            razon = razon.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');
            //      razon=razon.replace(/[\u0022]/g, '&QUOT;');
            //var fechaActual=$("#FechaActual").val("<?php echo date('Y-m-d h:m:s'); ?>");
            var observaciones = razon;
            var idActuacion = $("#idActuacionNot").val();
            var accion = "actualizarActuacion";
            //strDatos += "&fechaActualizacion="+ fechaActual;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                async: false,
                dateType: "json",
                data: {
                    idActuacion: idActuacion,
                    observaciones: observaciones,
                    accion: accion
                },
                success: function (datos) {
                    //alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        $("#divAlertSucces").html("NOTIFICACI&Oacute;N ACTUALIZADA EXITOSAMENTE");
                        $("#divAlertSucces").show("slide");
                        setTimeAlert("divAlertSucces");
                        if (procedencia == 1) { // si viene del arbol idActuacionArbol idCarpetaJudicialArbol
                            getTree();
                        }
                    } else {
                        $("#divConsulta").hide();
                        $("#divTableResult").html("");
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");


                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });

            //********************* *************************************
        };
        //---------------------------------------------------------------------   
        EliminarNotificacion = function (Aux) {
            if ($("#idActuacionNot").val() != "") {
                bootbox.dialog({
                    message: "Advertencia!! <br><br> Est&aacute; seguro de eliminar la notificaci&oacute;n??",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                var strDatos = "accion=actualizarActuacion";
                                strDatos += "&idActuacion=" + $("#idActuacionNot").val();
                                strDatos += "&activo=N";

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
                                        //alert(datos);
                                        var json = "";
                                        json = eval("(" + datos + ")"); //Parsear JSON

                                        if (json.totalCount > 0) {

                                            $("#divAlertSucces").html("NOTIFICACI&Oacute;N ELIMINADA EXITOSAMENTE");
                                            $("#divAlertSucces").show("slide");
                                            setTimeAlert("divAlertSucces");
                                            changeDivForm(1);

                                        } else {
                                            //alert(json.text);
                                        }

                                        try {
                                            getTree();
                                        } catch (e) {
                                            console.log(e);
                                        }

                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                                        $("#divAlertDager").show("slide");
                                        setTimeAlert("divAlertDager");
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
            } else {
                $("#divAlertDager").html("no ha seleccionado un registro");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        }
        //---------------------------------------------------------------------   
        getPaginas = function (pag, cantReg, cveTipoActuacion) {
            //alert(pag);
            var cveJuzgado = $("#cmbcveJuzgadoConsulta").val();
            var strDatos = "accion=getPaginas";

            if ($("#cmbcveTipoCarpetaConsulta").val() != '0' || $("#txtNumeroConsulta").val() != '' || $("#txtAnioConsulta").val() != '')
            {
                var omitirFecha = 'Si';
            } else
            {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtFecInicialBusqueda").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtFecFinalBusqueda").val();
            }


            strDatos += "&cveTipoCarpeta=" + $("#cmbcveTipoCarpetaConsulta").val();
            strDatos += "&numero=" + $("#txtNumeroConsulta").val();
            strDatos += "&anio=" + $("#txtAnioConsulta").val();
            //strDatos += "&txtFecInicialBusqueda=" + $("#txtFecInicialBusqueda").val();
            //strDatos += "&txtFecFinalBusqueda=" + $("#txtFecFinalBusqueda").val();
            strDatos += "&cveTipoActuacion=" + cveTipoActuacion;
            strDatos += "&cveJuzgado=" + cveJuzgado;
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&pag=" + pag;
            strDatos += "&activo=S";

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
                    //                     alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //                    $('#cmbPaginacion').find('option').remove().end().append('<option value="0"></option>').val('0');
                        $('#cmbPaginacion').find('option').remove().end();

                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }

                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                        $("#cmbPaginacion").val(pag);
                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();

                        $("#divAlertDager").html("Error EL NUMERO DE " + tipoNumero + " NO EXISTE");
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
        //---------------------------------------------------------------------    
        function cargaTipoCarpeta() {

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
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbcveTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                            $("#cmbcveTipoCarpetaConsulta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                        }
                    }
                    $("#cmbcveTipoCarpeta").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                    $("#cmbcveTipoCarpetaConsulta").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                    //                   alert("aqui..");
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        }
        ;

        //----------------------------------------------------------------------
        function cargarJuzgados() {
            var strDatos = "accion=distrito";
            var urlOption = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            var asyncOption = true;
            var hiddencveAdcripcion = $("#hiddencveAdcripcion").val();
            var hiddencveJuzgadoOrigenArbol = $("#hiddencveJuzgadoOrigenArbol").val();


            if ($("#hiddenIdActuacion").val() != "") {
                if (hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol) {
                    if (OrigenSegundaInstancia == "") {
                        strDatos = "accion=getJuzgadoActuacion&idActuacion=" + $("#hiddenIdActuacion").val();
                    } else {
                    }
                } else {

                    if (hiddencveJuzgadoOrigenArbol != 0) {
                        strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
                    } else {
                        strDatos = "accion=getJuzgadoActuacion&idActuacion=" + $("#hiddenIdActuacion").val();
                    }
                }
            }

            $.ajax({
                type: "POST",
                url: urlOption,
                data: strDatos,
                async: false,
                dataType: "json",
                beforeSend: function (objeto) {

                },
                success: function (datos) {

                    if (datos.totalCount > 0) {

                        $.each(datos.data, function (index, element) {
                            var option = "<option tipoJuzgado=" + element.cveTipojuzgado + " value = " + element.cveJuzgado + ">" + element.desJuzgado + "</option>";
                            $("#cmbcveJuzgado").append(option);
                            $("#cmbcveJuzgadoConsulta").append(option);
                            if (element.cveInstancia == instancia) {
                                if (juzgadoSesion == element.cveJuzgado) {
                                    $("#cmbcveJuzgado").val(juzgadoSesion);
                                    $("#cmbcveJuzgadoConsulta").val("<?php echo $_SESSION['cveAdscripcion']; ?>");
                                    filtrarTipoCarpeta();
                                }
                            } else {
                                //                        alert("HOLA");
                                $("#BtnActualizarOk").parent().hide();
                                $("#btnLimpiarArbol").hide();
                                $("#BtnEliminar2").parent().hide();
                                $("#inputPDF").parent().hide();
                                $("#inputDigitalizarAct").parent().hide();
                            }
                            //                            $("#cmbJuzgados").append(option);
                        });
                        $("#cmbcveJuzgado").val(juzgadoSesion).trigger('change');
                        $("#cmbcveJuzgadoConsulta").val(juzgadoSesion).trigger('change');
                        filtrarTipoCarpeta();
                    } else {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                }
            });
        }
        ;
        //--------------------------------------------------------------------        
        filtrarTipoCarpeta = function () {
            //            alert("CAMBIO");
            $("#cmbcveTipoCarpeta option").each(function () {
                $(this).hide();
            });
            //            alert($("#cmbJuzgado option[value='" + cveJuzgado + "']").attr("tipojuzgado"));
            var cveJuzgado = $("#cmbcveJuzgado").val();
            var cveTipoJuzgado = $("#cmbcveJuzgado").find('option:selected').attr("tipojuzgado");
            //            alert(cveTipoJuzgado);
            $("#cmbcveTipoCarpeta option[value=0]").show();
            //            var cveTipoJuzgado=$("#cmbTipoJuzgado option[value='" + cveJuzgado + "']").text();
            //            var cveTipoJuzgado= $("#cmbJuzgado option[value='" + cveJuzgado + "']").attr("tipojuzgado");
            //            console.log(cveTipoJuzgado);
            if (cveTipoJuzgado == 1) {//control
                $("#cmbcveTipoCarpeta option[value=8]").show();
                $("#cmbcveTipoCarpeta option[value=2]").show();
                $("#cmbcveTipoCarpeta option[value=1]").show();
                $("#cmbcveTipoCarpeta option[value=7]").show();
            } else {
                if (cveTipoJuzgado == 3) {//ejecucion
                    $("#cmbcveTipoCarpeta option[value=8]").show();
                    $("#cmbcveTipoCarpeta option[value=5]").show();
                    $("#cmbcveTipoCarpeta option[value=7]").show();
                } else {
                    if (cveTipoJuzgado == 2) {//juicio
                        $("#cmbcveTipoCarpeta option[value=8]").show();
                        $("#cmbcveTipoCarpeta option[value=3]").show();
                        $("#cmbcveTipoCarpeta option[value=7]").show();
                    } else {
                        if (cveTipoJuzgado == 4) {//tribunal
                            $("#cmbcveTipoCarpeta option[value=8]").show();
                            $("#cmbcveTipoCarpeta option[value=4]").show();
                            $("#cmbcveTipoCarpeta option[value=7]").show();
                        } else {
                            if (cveTipoJuzgado == 5) {//tribunal
                                $("#cmbcveTipoCarpeta option[value=6]").show();
                                $("#cmbcveTipoCarpeta option[value=7]").show();
                                $("#cmbcveTipoCarpeta option[value=8]").show();
                            } else {
                                if (cveTipoJuzgado == 8) {//tribunal
                                    $("#cmbcveTipoCarpeta option[value=6]").show();
                                    $("#cmbcveTipoCarpeta option[value=7]").show();
                                    $("#cmbcveTipoCarpeta option[value=8]").show();
                                } else {
                                    //opcion no valida
                                    /*$("#cmbTipoCarpeta option[value=8]").show();
                                     $("#cmbTipoCarpeta option[value=6]").show();
                                     $("#cmbTipoCarpeta option[value=7]").show();*/
                                }
                            }
                        }
                    }
                }
            }
            //CAMBIAR EN COMBO DE LA CONSULTA
            $("#cmbcveTipoCarpetaConsulta").val(0);
            $("#cmbcveTipoCarpetaConsulta option").each(function () {
                $(this).hide();
            });
            //            alert($("#cmbJuzgado option[value='" + cveJuzgado + "']").attr("tipojuzgado"));
            var cveJuzgado = $("#cmbcveJuzgadoConsulta").val();
            var cveTipoJuzgado = $("#cmbcveJuzgadoConsulta").find('option:selected').attr("tipojuzgado");
            //            alert(cveTipoJuzgado);
            $("#cmbcveTipoCarpetaConsulta option[value=0]").show();
            //            var cveTipoJuzgado=$("#cmbTipoJuzgado option[value='" + cveJuzgado + "']").text();
            //            var cveTipoJuzgado= $("#cmbJuzgado option[value='" + cveJuzgado + "']").attr("tipojuzgado");
            //            console.log(cveTipoJuzgado);
            if (cveTipoJuzgado == 1) {//control
                $("#cmbcveTipoCarpetaConsulta option[value=8]").show();
                $("#cmbcveTipoCarpetaConsulta option[value=2]").show();
                $("#cmbcveTipoCarpetaConsulta option[value=1]").show();
                $("#cmbcveTipoCarpetaConsulta option[value=7]").show();
            } else {
                if (cveTipoJuzgado == 3) {//ejecucion
                    $("#cmbcveTipoCarpetaConsulta option[value=8]").show();
                    $("#cmbcveTipoCarpetaConsulta option[value=5]").show();
                    $("#cmbcveTipoCarpetaConsulta option[value=7]").show();
                } else {
                    if (cveTipoJuzgado == 2) {//juicio
                        $("#cmbcveTipoCarpetaConsulta option[value=8]").show();
                        $("#cmbcveTipoCarpetaConsulta option[value=3]").show();
                        $("#cmbcveTipoCarpetaConsulta option[value=7]").show();
                    } else {
                        if (cveTipoJuzgado == 4) {//tribunal
                            $("#cmbcveTipoCarpetaConsulta option[value=8]").show();
                            $("#cmbcveTipoCarpetaConsulta option[value=4]").show();
                            $("#cmbcveTipoCarpetaConsulta option[value=7]").show();
                        } else {
                            if (cveTipoJuzgado == 5) {//tribunal
                                $("#cmbcveTipoCarpetaConsulta option[value=6]").show();
                                $("#cmbcveTipoCarpetaConsulta option[value=7]").show();
                                $("#cmbcveTipoCarpetaConsulta option[value=8]").show();
                            } else {
                                if (cveTipoJuzgado == 8) {//tribunal
                                    $("#cmbcveTipoCarpetaConsulta option[value=6]").show();
                                    $("#cmbcveTipoCarpetaConsulta option[value=7]").show();
                                    $("#cmbcveTipoCarpetaConsulta option[value=8]").show();
                                } else {
                                    //opcion no valida
                                    /*$("#cmbTipoCarpeta option[value=8]").show();
                                     $("#cmbTipoCarpeta option[value=6]").show();
                                     $("#cmbTipoCarpeta option[value=7]").show();*/
                                }
                            }
                        }
                    }
                }
            }
            $("#cmbcveTipoCarpetaConsulta").val(0);
        };
        //-----------------------------------------------------------------------

        consultarAcuerdos = function (idActuacionPadre) {
            //alert('2');
            //**************************** consulta de acuerdos *************************************
            var strDatos = "accion=consultarOficios";
            strDatos += "&idActuacion=" + idActuacionPadre;
            strDatos += "&pag=1";
            strDatos += "&cantxPag=10";
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
                    //                            alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    //alert(json);
                    //alert('3');
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            if (json.data[i].cveTipoActuacion == '2' || json.data[i].cveTipoActuacion == '5' || json.data[i].cveTipoActuacion == '6') {
                                var idReferencia;
                                idReferencia = json.data[i].idReferencia;
                                //alert(idReferencia);
                                var cveTipoCarpeta = json.data[i].cveTipoCarpeta;
                                var numero = json.data[i].numero;
                                var anio = json.data[i].anio;
                                var cveJuzgado = json.data[i].cveJuzgado;
                                //alert('4');

                                //                            $("#cmbcveTipoCarpeta").val(cveTipoCarpeta);
                                //                            $("#txtNumero").val(numero);
                                //                            $("#txtAnio").val(anio);
                                //                            $("#cmbcveJuzgado").val(cveJuzgado);
                                //                            
                                $("#cmbcveJuzgado").val(cveJuzgado);
                                $("#cmbcveTipoCarpeta").val(cveTipoCarpeta);
                                $("#txtNumero").val(numero);
                                $("#txtAnio").val(anio);

                                $("#cmbcveJuzgadoConsulta").val(cveJuzgado);
                                $("#cmbcveTipoCarpetaConsulta").val(cveTipoCarpeta);
                                $("#txtNumeroConsulta").val(numero);
                                $("#txtAnioConsulta").val(anio);

                                //                            $("#cmbcveJuzgado").attr("disabled","disabled");
                                //                            $("#cmbcveTipoCarpeta").attr("disabled","disabled");
                                //                            $("#txtNumero").attr("disabled","disabled");
                                //                            $("#txtAnio").attr("disabled","disabled");
                                //
                                //                            $("#cmbcveJuzgadoConsulta").attr("disabled","disabled");
                                //                            $("#cmbcveTipoCarpetaConsulta").attr("disabled","disabled");
                                //                            $("#txtNumeroConsulta").attr("disabled","disabled");
                                //                            $("#txtAnioConsulta").attr("disabled","disabled");

                                //changeDivForm(1);

                                ConsultarActuaciones(idReferencia, idActuacionPadre);
                                $("#hiddenIdCarpetaJudicialOK").val($("#hiddenIdCarpetaJudicial").val());

                                $("#BtnConsul").hide();
                                //ConsultaCarpetaArbol(idReferencia,cveTipoCarpeta,idActuacionPadre);
                            } else {
                                $("#divAlertInfoCarpeta").html("Seleccione un Acuerdo, Auto o Acta m&iacute;nima");//u Oficio
                                $("#divAlertInfoCarpeta").show("slide");
                                setTimeAlert("divAlertInfoCarpeta");
                                //changeDivForm(5);
                            }
                        }

                    } else {
                        $("#divAlertInfo").html('' + json.text.toLowerCase());
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };



        //-----------------------------------------------------------------------
        function fillCombo(selectIds, facade, value, description) {
            $.each(selectIds, function (k, v) {
                $('#' + v).empty();
            });
            $.post('../fachadas/sigejupe/' + facade + '.Class.php',
                    {
                        activo: 'S',
                        accion: 'consultar'
                    },
                    function (response) {
                        var object = eval("(" + response + ")");
                        var options = '<option value="0">Seleccione una opci&oacute;n</option>';
                        if (object.totalCount > 0) {
                            $.each(object.data, function (k, v) {
                                options += '<option value="' + v[value] + '">' + v[description] + '</option>';
                            });
                            $.each(selectIds, function (k, v) {
                                $('#' + v).append(options);
                            });
                        } else {
                            showMessage('NO EXISTEN REGISTROS', 'warning');
                        }
                    });
            return;
        }
        ;

        limpiar = function () {
            $("#inputVisor").hide();
            $("#inputPDF").hide()
            if ($("#hiddenIdCarpetaJudicial").val() != '') {
                $("#idActuacionNot").val("");
                $("#idActuacion").val("");
                $("#idActuacionInsertada").val("");
                editorRazon.setContent("", false);
                editorSintesis.setContent("", false);

                $("#idActuacionInsertada").val("");
                $("#idActuacionNot").val("");

                //$("#checkelectronica").checked=false;
                document.getElementById("checkelectronica").checked = false;
                $("#divRazon").show("fade");

                $("#txtfechaNotificacion").val("<?php echo date("d/m/Y") ?>");

                $("#divTableResultPersonas").val("");
                $("#divConsultaPersonas").hide();
                $("#LeyendaAutorizado").hide();
                $("#divTableResultPersonas").html("");

                $("#divTableResultActuaciones").val("");
                $("#divConsultaActuaciones").hide();
                $("#divTableResultActuaciones").html("");

                $("#copia").hide("fade");
                $("#divCopias").hide("fade");
                $("#divCopias").html("");

                $("#BtnEliminar").hide();
                $("#BtnGuardar").show();
                $("#txtcc").val("");
                
                arrayTestigos = new Array();
                identificadorArrayTestigos = 0;
            } else {
                $("#cmbcveJuzgado").val(juzgadoSesion).trigger('change');
                $("#hiddenIdCarpetaJudicialOK").val("");
                $("#idActuacionNot").val("");
                $("#idActuacion").val("");
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#cmbcveTipoCarpeta").val(0);
                $("#idActuacionInsertada").val("");
                editorRazon.setContent("", false);
                editorSintesis.setContent("", false);

                $("#idActuacionInsertada").val("");
                $("#idActuacionNot").val("");

                $("#dtpFechaDevolucion").val("");
                $("#cmbDiligencia").val("");
                $("#dtpFechaDevolucion").attr("disabled", false);
                $("#cmbDiligencia").attr("disabled", false);
                $("#divCamposExhortos").hide("fade");
                        
                //$("#checkelectronica").checked=false;
                document.getElementById("checkelectronica").checked = false;
                $("#divRazon").show("fade");

                $("#txtfechaNotificacion").val("<?php echo date("d/m/Y") ?>");

                $("#divTableResultPersonas").val("");
                $("#divConsultaPersonas").hide();
                $("#LeyendaAutorizado").hide();
                $("#divTableResultPersonas").html("");

                $("#divTableResultActuaciones").val("");
                $("#divConsultaActuaciones").hide();
                $("#divTableResultActuaciones").html("");

                $("#copia").hide("fade");
                $("#divCopias").hide("fade");
                $("#divCopias").html("");

                $("#BtnEliminar").hide();
                $("#BtnGuardar").show();
                $("#txtcc").val("");

                $("#divConsultaTestigos").hide("");
                $("#divDatosTestigosPartes").show("");

                var table = "<table id='tableResultTestigos' class='table table-hover table-striped table-bordered'> ";
                table += "<thead> ";
                table += "<tr> ";
                table += "<th>Parte</th> ";
                table += "<th>Testigo</th> ";
                table += "<th>Eliminar</th> ";
                table += "</tr> ";
                table += "</thead> ";
                table += "</table>";
                $("#divTableResultTestigos").html(table);

                $('#cmbPartesTestigos').empty();
                $("#cmbPartesTestigos").append("<option value='0'>Seleccione una opcion</option>");

                arrayTestigos = new Array();
                identificadorArrayTestigos = 0;
            }
        };
        limpiarActualizar = function () {
            //        $("#hiddenIdCarpetaJudicialOK").val("");
            //        $("#txtNumero").val("");
            //        $("#txtAnio").val("<?php echo date("Y") ?>");
            //        $("#cmbcveTipoCarpeta").val(0);
            //        editorRazon.setContent("", false);
            //        editorSintesis.setContent("", false);
            //        
            //        $("#txtfechaNotificacion").val("<?php echo date("d/m/Y") ?>");

        };
        limpiarConsulta = function () {
            if ($("#hiddenIdCarpetaJudicial").val() != 0 && $("#hiddenIdCarpetaJudicial").val() != "") {
                //$("#hiddenIdCarpetaJudicialOK").val("");
                $("#txtcc").val("");
                $("#txtFecFinalBusqueda").val("<?php echo date("d/m/Y") ?>");
                $("#txtFecInicialBusqueda").val("<?php echo date("d/m/Y") ?>");
                document.getElementById("checkelectronicaConsulta").checked = false;
                $("#divTableResult").val("");
                $("#divConsulta").hide();
                //        $("#divConsulta").hide();
                //        $("#divTableResult").html("");
                $("#divCopias").html("");
            } else {
                //$("#hiddenIdCarpetaJudicialOK").val("");
                $("#txtNumeroConsulta").val("");
                $("#txtcc").val("");
                $("#cmbcveTipoCarpetaConsulta").val(0);
                $("#txtAnioConsulta").val("");
                $("#txtFecFinalBusqueda").val("<?php echo date("d/m/Y") ?>");
                $("#txtFecInicialBusqueda").val("<?php echo date("d/m/Y") ?>");
                document.getElementById("checkelectronicaConsulta").checked = false;
                $("#cmbcveJuzgadoConsulta").val(juzgadoSesion).trigger('change');
                $("#divTableResult").val("");
                $("#divConsulta").hide();
                //        $("#divConsulta").hide();
                //        $("#divTableResult").html("");
                $("#divCopias").html("");
            }
        };

        (function (a) {
            a.fn.validaCampo = function (b) {
                a(this).on({keypress: function (a) {
                        var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                        (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                    }})
            }
        })(jQuery);

        /**
         * Muestra/Oculta el div del formulario y la tabla de bUsqueda
         * @param {int} opc Recibe un parametro para mostrar el DIV correspondiente
         */
        function changeDivForm(opc) {
            if (opc === 1) {//Doy clic para ver insertar
                $("#divInsertar").show("fade");
                $("#divConsultar").hide("fade");
                $("#divConsulta").hide("fade");
                $("#BtnActualizar").hide("fade");
                $("#BtnEliminar").hide("fade");
                $("#BtnRegresarConsulta").hide("fade");
                $("#BtnInsertar").show("fade");
                $("#BtnGuardar").show("fade");
                //$("#divCopias").html("");
                $("#txtRazon").removeAttr("readonly");
                $("#checkelectronica").removeAttr("readonly");
                $("#checkelectronica").removeAttr("disabled");
                $("#txtfechaNotificacion").removeAttr("readonly");

                $("#BtnConsultarCarpeta").show("fade");
                $("#divActuacionPadre").hide("fade");
                if ($("#hiddenIdCarpetaJudicial").val() != '' || $("#hiddenIdActuacionPadre").val() != '') {
                    limpiar();
                } else {
                    //Remover el solo lectura
                    $("#cmbcveJuzgado").removeAttr("readonly");
                    $("#cmbcveTipoCarpeta").removeAttr("readonly");
                    $("#cmbcveJuzgado").removeAttr("disabled");
                    $("#cmbcveTipoCarpeta").removeAttr("disabled");
                    $("#txtNumero").removeAttr("readonly");
                    $("#txtAnio").removeAttr("readonly");
                    limpiar();
                }
                $("#divFormulario").show("fade");

            }
            if (opc === 2) {//Doy clic para ver Consultar
                $("#divConsultar").show("fade");
                $("#ConsultarNotificacion").hide("fade");
                $("#divInsertar").hide("fade");
                $("#BtnActualizar").hide("fade");
                $("#BtnInsertar").hide("fade");
                $("#BtnConsultarCarpeta").hide("fade");
                $("#divActuacionPadre").hide("fade");
                $("#divCopias").hide("fade");
                $("#divFormulario").hide("fade");
            }
            if (opc === 3) {//Doy clic para ver Actualizar 
                //if ($("#hiddenIdCarpetaJudicial").val()!="" || $("#hiddenIdActuacionPadre").val()!="" || $("#hiddenIdActuacion").val()!="") {
                $("#txtRazon").attr("readonly", "readonly");
                $("#txtSintesis").attr("readonly", "readonly");
                $("#txtfechaNotificacion").attr("readonly", "readonly");
                $("#checkelectronica").attr("disabled", "disabled");
                //}
                //else{
                //Agregar el solo lectura
                $("#cmbcveJuzgado").attr("disabled", "disabled");
                $("#cmbcveTipoCarpeta").attr("disabled", "disabled");
                $("#txtNumero").attr("readonly", "readonly");
                $("#txtAnio").attr("readonly", "readonly");
                $("#txtRazon").attr("readonly", "readonly");
                $("#txtSintesis").attr("readonly", "readonly");
                $("#txtfechaNotificacion").attr("readonly", "readonly");
                $("#checkelectronica").attr("disabled", "disabled");
                //}
                $("#divInsertar").show("fade");
                $("#BtnActualizar").show("fade");
                $("#BtnRegresarConsulta").show("fade");
                $("#divActuacionPadre").show("fade");
                $("#divConsultar").hide("fade");
                $("#divConsulta").hide("fade");
                $("#BtnInsertar").hide("fade");
                $("#BtnConsultarCarpeta").hide("fade");
                $("#textoAcuerdo").hide("fade");
                //            UE.getEditor('txtRazon').setEnabled();
                //            UE.getEditor('txtSintesis').setEnabled();

                if ($("#checkelectronica").is(':checked')) {
                    $(".btninputvisor").hide();
                    $(".btninputPDF").hide();
                    if (procedencia == 1) {
                        $("#BtnEliminar2").hide();
                    }
                }
                if (procedencia == 1) {
                    $(".btnConsultar").hide();
                }
            }
            if (opc === 4) {//Doy clic paraDetalle de la Consulta
                $("#divTableResultActuaciones").val("");
                $("#divConsultaActuaciones").hide();
                $("#divTableResultActuaciones").html("");
                $("#divInsertar").hide("fade");
            }
            if (opc === 5) {//Doy clic paraDetalle de la Consulta
                $("#divInsertar").hide("fade");
                $("#divConsultar").hide("fade");
                $("#divConsulta").hide("fade");
                $("#BtnActualizar").hide("fade");
                $("#BtnEliminar").hide("fade");
                $("#BtnRegresarConsulta").hide("fade");
                $("#BtnInsertar").hide("fade");
                $("#BtnGuardar").hide("fade");
                $("#BtnConsultarCarpeta").hide("fade");
                $("#divActuacionPadre").hide("fade");

                $("#cmbcveJuzgado").attr("disabled", "disabled");
                $("#cmbcveTipoCarpeta").attr("disabled", "disabled");
                $("#txtNumero").attr("disabled", "disabled");
                $("#txtAnio").attr("disabled", "disabled");

                $("#cmbcveJuzgadoConsulta").attr("disabled", "disabled");
                $("#cmbcveTipoCarpetaConsulta").attr("disabled", "disabled");
                $("#txtNumeroConsulta").attr("disabled", "disabled");
                $("#txtAnioConsulta").attr("disabled", "disabled");
            }
        }

        validarCampo = function (e) {
            var teclaAscii;
            if (window.event) { // IE y chrome
                teclaAscii = e.keyCode;
            } else if (e.which) { // Netscape/Firefox/Opera
                teclaAscii = e.which;
            }

            if ((teclaAscii == 180) || (teclaAscii == 193) || (teclaAscii == 201) || (teclaAscii == 205) || (teclaAscii == 211) || (teclaAscii == 218)) {
                return true;
            }
            if ((teclaAscii == 180) || (teclaAscii == 225) || (teclaAscii == 233) || (teclaAscii == 237) || (teclaAscii == 243) || (teclaAscii == 250)) {
                return true;
            }
            if ((teclaAscii == 9) || (teclaAscii == 8) || (teclaAscii == 241) || (teclaAscii == 209)) {//Espacio
                return true;
            }
            if ((teclaAscii > 47) && (teclaAscii < 58)) {//N�meros
                return true;
            }
            return false;
        };

        $("#txtNumero , #txtAnio,txtNumeroConsulta,txtAnioConsulta").keypress(function (key) {
            var cadena = $("#txtAnio").val();
            ////alert(key.charCode);
            //        if((key.charCode == 39 || key.charCode == 34 || key.charCode == 37|| key.charCode == 37|| key.charCode == 36|| key.charCode == 59)) return false;
            if ((key.charCode < 48 || key.charCode > 57) && (key.charCode != 0) && (key.charCode != 32) && cadena.length != 4)
                return false;
        });



        llenareditorRazon = function (value) {
            try {
                editorRazon.ready(function () {
                    setTimeout(function () {
                        editorRazon.setContent(value, false);
                    }, 500);
                    ;
                });
            } catch (e) {
                alert(e);
            }
        };
        llenareditorSintesis = function (value) {
            try {
                editorSintesis.ready(function () {
                    setTimeout(function () {
                        editorSintesis.setContent(value, false);
                    }, 500);
                    ;
                });
            } catch (e) {
                alert(e);
            }
        };
        cargaInstancia = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    accion: "getInstanciaJuzgado"
                },
                beforeSend: function (datos) {
                },
                success: function (datos) {
                    if (datos.totalCount > 0) {
                        instancia = datos.resultados[0].cveInstancia;
                    }
                },
                error: function (objeto, quepaso, otroobj) {

                }
            });
        };
        $(function () {
            cargaInstancia();
            $("#dtpFechaDevolucion").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            });
            $("#txtfechaNotificacion").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            });
            $("#txtFecInicialBusqueda").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            });
            $("#txtFecFinalBusqueda").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            });

            $("#txtNumero").validaCampo('0123456789');
            $("#txtAnio").validaCampo('0123456789');
            //        comboJuzgado("cmbcveJuzgado");
            //        comboJuzgadoConsulta("cmbcveJuzgadoConsulta");
            //fillCombo(['cmbcveTipoCarpeta'], 'tiposcarpetas/TiposcarpetasFacade', 'cveTipoCarpeta', 'desTipoCarpeta');
            //fillCombo(['cmbcveTipoCarpetaConsulta'], 'tiposcarpetas/TiposcarpetasFacade', 'cveTipoCarpeta', 'desTipoCarpeta');
            cargaTipoCarpeta();
            cargarJuzgados();
            //obtenerPermisos();
            if (origen == 1) {
                var permisos = obtenerPermisosFormulario("SECRETARIO DE TRIBUNAL DE ALZADA", "NOTIFICACCIONES");
            } else {
                var permisos = obtenerPermisosFormulario("CARPETAS JUDICIALES", "NOTIFICACCIONES");
            }
            if (permisos.read == "N") {
                $('#BtnConsultarCarpeta,  #Consultar, #BtnConsul').prop('disabled', true);
            }
            if (permisos.create == 'N') {
                $('#SeleccionGuardar').prop('disabled', true);
            }
            if (permisos.delete == "N") {
                $('#BtnEliminar, #BtnEliminar2').prop("disabled", true);
            }

            editorRazon = UE.getEditor("txtRazon");
            editorRazon.ready(function () {
                editorRazon.setContent();
            });
            editorSintesis = UE.getEditor("txtSintesis");
            editorSintesis.ready(function () {
                editorSintesis.setContent();
            });

            if (procedencia == 1) { // si viene del arbol idActuacionArbol idCarpetaJudicialArbol
                if ($("#hiddenIdActuacion").val() != "") {
                    ConsultarTipoNotificacion($("#hiddenIdActuacion").val());
                } else if ($("#hiddenIdCarpetaJudicial").val() != 0 && $("#hiddenIdCarpetaJudicial").val() != "" && $("#hiddenCveTipoCarpeta").val() != 0 && $("#hiddenCveTipoCarpeta").val() != "" && $("#hiddenIdActuacionPadre").val() == "") {
                    ConsultaCarpetaArbol($("#hiddenIdCarpetaJudicial").val(), $("#hiddenCveTipoCarpeta").val(), '');
                }
                //Trae idActuacionPadre
                else if ($("#hiddenIdActuacionPadre").val() != 0 && $("#hiddenIdActuacionPadre").val() != "") {
                    var idActuacionPadre = $("#hiddenIdActuacionPadre").val();
                    //alert('Actuacion: '+idActuacionPadre);alert('1');
                    consultarAcuerdos(idActuacionPadre);
                }
                $("#BtnConsul").hide("fade");
                $("#BtnRegresarConsulta").hide("fade");
            }
            if (procedencia == 2) {
                $("#BtnConsul").hide("fade");
                $("#BtnRegresarConsulta").hide("fade");
                //viene del �rbol y hay que recargarlo
            }

            //********************** digitalizador ***********************************************
            var desAdscripcion = '<?php echo $_SESSION["desAdscripcion"]; ?>';

            digitalizarAcuerdo = function () {
                var strl;
                // strl = "0-" + $("#hiddenIdActuacion").val() + "-PROMOCIONES-<?php echo $_SESSION["desAdscripcion"]; ?>-" + $("#txtNumero").val() + "-" + $("#txtAnio").val() + "-27-<?php //echo $_SESSION["cveUsuarioSistema"];        ?>";
                strl = "0-" + $("#hiddenIdActuacion").val() + "-NOTIFICACIONES TRADICIONALES-" + desAdscripcion + "-" + $("#txtNumero").val() + "-" + $("#txtAnio").val() + "-22-" + cveUsuarioSesion;
                // strl += "-http://10.22.165.204/sigejupev2/fachadas/sigejupe/imagenes/ImagenesFacade.Class.php";
                // strl += "-http://10.22.165.204/sigejupev2/vistas/digitalizacion";
                strl += "-<?php echo $subirArchivos; ?>";
                strl += "-<?php echo $digitalizacion; ?>";
                launchDigitalizador(strl);
            };

            //********************** digitalizador ***********************************************

        });

        /**
         * FunciOn para obtener y asignar los permisos del usuario activo sobre el formulario
         */
        function obtenerPermisos() {
            //var cveUsuarioSistema = $('#SysCveUsuarioSistema').val();
            var cvePerfilSesion = cvePerfilSesion;//$('#SysCvePerfil').val();	
            insert_numEmpleado = cveUsuarioSesion;

            $.get("../archivos/" + cveUsuarioSesion + ".json",
                    function (response) {
                        var response = eval("(" + response + ")");
                        var perfiles = response.perfiles[0];
                        var perfil = perfiles.perfil[0];
                        var permisos = perfil.permisos
                        var createRecord = 'N';
                        var readRecord = 'N';
                        var updateRecord = 'N';
                        var deleteRecord = 'N';
                        for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                            if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                                $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                    if (origen == 1) {
                                        if (vnombre.nomFormulario == "SECRETARIO DE TRIBUNAL DE ALZADA") {
                                            var hijos = vnombre.hijos;
                                            $.each(hijos, function (k2, nombreHijo) {
                                                if (nombreHijo.nomFormulario == 'NOTIFICACCIONES') {
                                                    var permisoFormulario = nombreHijo.permisoFormulario[0];
                                                    createRecord = permisoFormulario.create;
                                                    readRecord = permisoFormulario.read;
                                                    updateRecord = permisoFormulario.update;
                                                    deleteRecord = permisoFormulario.delete;
                                                }
                                            });
                                        }
                                    } else {
                                        if (vnombre.nomFormulario == "CARPETAS JUDICIALES") {
                                            var hijos = vnombre.hijos;
                                            $.each(hijos, function (k2, nombreHijo) {
                                                if (nombreHijo.nomFormulario == 'NOTIFICACCIONES') {
                                                    var permisoFormulario = nombreHijo.permisoFormulario[0];
                                                    createRecord = permisoFormulario.create;
                                                    readRecord = permisoFormulario.read;
                                                    updateRecord = permisoFormulario.update;
                                                    deleteRecord = permisoFormulario.delete;
                                                }
                                            });
                                        }
                                    }

                                });
                            }
                        }
                        var crud;
                        crud.create = createRecord;
                        crud.read = readRecord;
                        crud.update = updateRecord;
                        crud.delete = deleteRecord;
                        if (crud.read == 'N') {
                            $('#BtnConsultarCarpeta,  #Consultar, #BtnConsul').prop('disabled', true);
                        }
                        if (crud.create == 'N') {
                            $('#SeleccionGuardar').prop('disabled', true);
                        }
                        if (crud.delete == 'N') {
                            $('#BtnEliminar, #BtnEliminar2').prop("disabled", true);
                        }
                    });
        }


    </script> 
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>