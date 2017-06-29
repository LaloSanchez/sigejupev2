<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
// version 14/01/2016..
if (!isset($_SESSION)) {
    @session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idActuacionArbol = "";
    $idCarpetaJudicialArbol = "";
    $cveTipoCarpetaArbol = "";
    $procedencia = 0;
    $OrigenSegundaInstanciaConsulta = "";
    if (isset($_POST['idActuacion'])) {
        $idActuacionArbol = @$_POST['idActuacion'];
    }
    if (isset($_POST['idReferencia'])) {
        $idCarpetaJudicialArbol = @$_POST['idReferencia'];
    }
    if (isset($_POST['cveTipoCarpeta'])) {
        $cveTipoCarpetaArbol = @$_POST['cveTipoCarpeta'];
    }
    if (isset($_POST['idActuacionPadre'])) {
        $idActuacionPadre = @$_POST['idActuacionPadre'];
    }
    if (isset($_GET['consulta'])) {
        $OrigenSegundaInstanciaConsulta = $_GET['consulta'];
    }
    if (isset($_GET['origen'])) {
        $OrigenSegundaInstancia = @$_GET['origen'];
    }
    if (isset($_POST['juzgadoOrigenArbol'])) {
        $cveJuzgadoOrigenArbol = @$_POST['juzgadoOrigenArbol'];
    }
//$idActuacionArbol = 93448; 
//$idCarpetaJudicialArbol = 7;
//$cveTipoCarpetaArbol = 2;
//$idActuacionPadre = "";//15870;

    if ($idCarpetaJudicialArbol == "" && $idActuacionPadre == "" && $cveTipoCarpetaArbol == "" && $idActuacionArbol == "") {
        $procedencia = 0; // formulario general
    } else if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") || ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "") || ($idActuacionPadre != 0 && $idActuacionPadre != "")) {
        $procedencia = 1; // viene de arbol
    } else if ($idCarpetaJudicialArbol == "" && $idActuacionPadre == "" && $cveTipoCarpetaArbol == 0) {
        $procedencia = 1; // viene de arbol el formulario general
        $asignaValoresArbol = 1;
    }
//var_dump($procedencia);
//echo "idActuacionArbol: <<" . $idActuacionArbol . ">><br>";
//echo "Carpeta: <<" . $idCarpetaJudicialArbol . ">><br>";
//echo "TipoCarpeta: <<" . $cveTipoCarpetaArbol . ">><br>";
//echo "Procedencia: " . $procedencia . "<br>";
//echo "idActuacionPadre: <<" . $idActuacionPadre . ">><br>";
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
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="<?php echo $cveTipoCarpetaArbol; ?>" >
    <input type="hidden" id="hiddenidActuacionPadre" value="<?php echo $idActuacionPadre; ?>" >
    <input type="hidden" id="hiddenasignaValoresArbol" value="<?php echo $asignaValoresArbol; ?>" >
    <input type="hidden" id="hiddenIdActuacionPromocion" value="" >
    <input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >
    <input type="hidden" id="hiddenUsuarioMagistrado" value="" >
    <input type="hidden" id="hiddenResolucionPermiso" value="" >


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Registro de Resoluci&oacute;n de Apelaci&oacute;n
            </h5>
        </div>
        <div class="panel-body">
            <div id="divActuacionNOvalida" style="display: none">

            </div>

            <div id="divFormulario" class="form-horizontal" data-step="1" data-intro="Este m&oacute;dulo le permite registrar un nuevo Acuerdo, el cual puede ser modificado y/o eliminado." data-position='left'>
                <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar();" style="display: none">                                    

                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'>Tribunal de alzada:</label>
                    <div class="col-md-9">
                        <div id="divCmbJuzgado" class="logobox"></div>
                        <select class="form-control" name="cmbJuzgado" id="cmbJuzgado" onchange="cargaTipoCarpeta();" >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                


                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed">Relacionado con</label>
                    <div class="col-md-9">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control" name="cmbTipoCarpeta" id="cmbTipoCarpeta" onchange="changeLabel(this)">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed" id="lblRelationName">No de tocas.</label>
                    <div id="divSinRelacion" class="col-md-9">
                        <input type="text" id="txtNumero" class="form-inline" id="txtNumero" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="txtAnio" id="txtAnio" maxlength="4" placeholder="A&ntilde;o" value="">
                        <button id="buscarTocaParaCargaApelantes" class="btn btn-primary" onclick="buscarApelantes(true)">Buscar</button>
                    </div>                                
                </div> 

<!--                <div class="form-group">
                    <label class="control-label col-md-3 needed" id="lblRelationName">Magistrado.</label>
                    <div class="col-md-9">
                        <label class="" id="lblJuzgador" style="margin-top: 0.5%;"></label>
                    </div>
                </div>-->

                <!--         <div id="divBuscaPromocion" class="form-group" style="display: none">
                            <label class="control-label col-md-3 ">Buscar Promoci&oacute;n:</label>
                            <div class="col-md-9">
                               <input type="checkbox" id="buscaPromocion" class="form-inline" onclick="buscarPromocion()">
                               <label class="form-inline" id="promocionSel"></label>
                            </div>
                         </div>-->
                <div class="form-group">                                                                
                    <div id="divConsultaActuaciones" style="display: none;height: 175px; border-top: 1px solid rgb(208, 220, 203); width: 100%; overflow-x: hidden; overflow-y: scroll; " class="col-xs-8" >
                        <div id="divTableResultActuaciones" class="col-xs-8" style="width: 100%;">
                        </div>
                    </div>
                </div>

                        <label class="col-md-offset-3 col-md-3 needed">Magistrados</label><label class="col-md-offset-2 col-md-3 needed">Funcion</label>
                        <div class="form-group">                                                                
                            
                            <div class="col-md-offset-3 col-md-5">
                               <div id="divCmbJuzgador" class="logobox"></div>
                               <select class="form-control cmbMagistrado" name="cmbJuzgadores1" id="cmbJuzgadores1" >
                                  <option value="0">Seleccione una opci&oacute;n</option>
                               </select>
                            </div>     
                            <div class="col-md-4">
                               <div id="divCmbJuzgador" class="logobox"></div>
                               <select class="form-control cmbFuncion" name="cmbFuncionMagistrado1" id="cmbFuncionMagistrado1" >
                                  <option value="0">Seleccione una opci&oacute;n</option>
                               </select>
                            </div>    
                
                         </div>
                         <div id="magistradoColegiada">
                            <div class="form-group">                                                                
                                
                                <div class="col-md-offset-3 col-md-5">
                                   <div id="divCmbJuzgador" class="logobox"></div>
                                   <select class="form-control cmbMagistrado" name="cmbJuzgadores2" id="cmbJuzgadores2" >
                                      <option value="0">Seleccione una opci&oacute;n</option>
                                   </select>
                                </div>     
                                <div class="col-md-4">
                                   <div id="divCmbJuzgador" class="logobox"></div>
                                   <select class="form-control cmbFuncion" name="cmbFuncionMagistrado2" id="cmbFuncionMagistrado2" >
                                      <option value="0">Seleccione una opci&oacute;n</option>
                                   </select>
                                </div>    
                    
                             </div>
                            <div class="form-group">                                                                
                                
                                <div class="col-md-offset-3 col-md-5">
                                   <div id="divCmbJuzgador" class="logobox"></div>
                                   <select class="form-control cmbMagistrado" name="cmbJuzgadores3" id="cmbJuzgadores3" >
                                      <option value="0">Seleccione una opci&oacute;n</option>
                                   </select>
                                </div>     
                                <div class="col-md-4">
                                   <div id="divCmbJuzgador" class="logobox"></div>
                                   <select class="form-control cmbFuncion" name="cmbFuncionMagistrado3" id="cmbFuncionMagistrado3" >
                                      <option value="0">Seleccione una opci&oacute;n</option>
                                   </select>
                                </div>    
                    
                             </div>
                        </div>
                        
                        
                <!--         <div class="form-group">
                            <label class="control-label col-md-3 needed">Resoluci&oacute;n &nbsp;&nbsp;</label>
                            <div class="col-md-9" >
                               <div class="typeahead__container">
                                  <div class="typeahead__field">
                
                                     <span class="typeahead__query">
                                        <input class="js-typeahead-input"
                                               name="q"
                                               type="search"
                                               autofocus
                                               autocomplete="off" id="cmbResolucionAux" placeholder="Seleccione una opci&oacute;n">
                                        <input type="hidden" id="cmbResolucion" value="0">    
                                     </span>
                                     <span class="typeahead__button">
                                        <button type="submit">
                                           <span class="typeahead__search-icon"></span>
                                        </button>
                                     </span>
                
                                  </div>
                               </div>
                            </div>
                         </div>-->
<br>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed">Notificaci&oacute;n</label>
                    <div class="col-md-9">
                        <div id="divCmbNotificacion" class="logobox"></div>
                        <select class="form-control" name="cmbNotificacion" id="cmbNotificacion" >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed">Estatus</label>
                    <div class="col-md-9">
                        <div id="divCmbEstatus" class="logobox"></div>
                        <select class="form-control" name="cmbEstatus" id="cmbEstatus" >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group" id="divSentencia">                                                                
                    <label class="control-label col-md-3 needed">Sentencia</label>
                    <div class="col-md-9">
                        <div id="divCmbSentencia" class="logobox"></div>
                        <select class="form-control" name="cmbSentencia" id="cmbSentencia" >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div id="divListaApelantes" class="form-group">
                    <input type="hidden" id="hiddenIdentificador"  value=""/>
                    <input type="hidden" id="hiddenIdApelante"  value="0"/>
                    <label class="control-label col-md-3">Lista apelante(s):  <b style="color: darkred">(*)</b></label>
                    <div class="col-lg-9">
                        <table id="ltsApelantes" class="table table-bordered tblGridAgrega  " ></table>
                    </div>
                </div>
                <div id="divRangoFechas" style="display: none">
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Fecha Inicio:</label>
                        <div class="col-md-2">
                            <input type="text" id="txtfechaInicial" placeholder="FECHA INICIO" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Fecha Fin:</label>
                        <div class="col-md-2">
                            <input type="text" id="txtfechaFinal" placeholder="FECHA FIN" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
                        </div>
                    </div>    
                </div>
                <div id="divNotas" class="form-group">
                    <label class="control-label col-md-3 needed">Contenido del documento</label>
                    <div class="col-md-9">
                        <!--<textarea rows="5" id="Sintesis" class="form-control" placeholder="Notas" style="text-transform:uppercase; resize: none"></textarea>-->
                        <script id="Sintesis" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                    </div>
                </div>
                <div class="form-group" id="divCheckSecreto">
                    <label class="control-label col-md-3 needed">Secreto </label>
                    <input class="col-md-2" type="checkbox" name="" value="" id="checkSecreto">
                    <div class="" id="editarSecreto" style='display:none;'>
                        <label class=" "> </label>
                        <button type="button" class="btn btn-primary" onclick="$('#ModalProyectistas').modal('show');">Editar Permisos</button>
                    </div>
                </div>
                
                <br>
                <br>

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

                <br>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <?php if ($OrigenSegundaInstanciaConsulta == "") { ?>
                            <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar un acuerdo." data-position='top'>                        
                                <input type="submit" class="btn btn-primary btn-adaptar" id="inputGuardar" value="Guardar" onclick="guardarResolucionApelacion();" style="display: none">                                    
                            </div>
                        <?php } ?>
                        <div class="col-md-2 botonesAdaptar">                        
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputBuscar" value="Buscar" onclick="consultarAcuerdos();" style="display: none">                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>                        
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar('');">                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar" data-step="5" data-intro="De clic para buscar un acuerdo." data-position='top'>                        
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="consultar();
                                        tutorial(7)" style="display: none">                                    
                        </div>
                        <?php if ($OrigenSegundaInstanciaConsulta == "") { ?>
                            <div class="col-md-2 botonesAdaptar">                        
                                <input type="submit" class="btn btn-primary btn-adaptar" id="inputEliminar" value="Eliminar" onclick="eliminarOficios()" style="display: none">                                    
                            </div>
                        <?php } ?>
                        <div class="col-md-2 botonesAdaptar">                        
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" style="display: none">                                    
                        </div>
                        <!--<div class="col-md-2 botonesAdaptar">-->                        
                        <!--<button class="btn btn-primary btn-adaptar" id="inputDigitalizar" onclick="javascript:digitalizarAcuerdo();" style="display: none">Digitalizar</button>-->
                        <!--</div>-->
                        <div class="col-md-2 botonesAdaptar">                        
                            <button class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" style="display: none">Visor</button>
                        </div>
                        <div class="col-md-2 botonesAdaptar">                        
                            <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="enviar();" style="display: none">Generar PDF</button>
                        </div>
                        <div id="divPeritos" class="col-md-2 botonesAdaptar">                        
                        </div>
                    </div>
                </div>
                <!--  modal de seleccion de secrecia-->
                <div class="modal fade" id="ModalProyectistas" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content" >
                                <div class="modal-header panel-heading" style="padding:25px 45px;">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="panel-title" id="h5titulo"><span ></span> Oficios</h4>
                                </div>
                                <div class="modal-body" style="padding:35px 60px;">
                                    <div class="form-horizontal">
                                        <div class="form-group col-md-12" id="proyectistas">
                                            <h4>Seleccione numero de toca y carpeta para cargar personal</h4>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label">&nbsp;</label>
                                            <div class="col-md-5">
                                                <input type="submit" class="btn btn-primary" onclick="aceptarSecreto();" value="Aceptar" data-dismiss="modal">
                                                <input type="submit" class="btn btn-primary" onclick="$('#checkSecreto').prop('checked',false);" value="Cancelar" data-dismiss="modal">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- termina modal-->
            </div>

            <div id="divConsulta" style="display: none" class="col-xs-12">
                <div class="col-xs-12">
                    <div class="col-xs-3">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivFormAcuerdo(1);
                                    $('#cmbPaginacion').val(1)">                                                    
                    </div>

                    <div class="form-group col-xs-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-xs-2" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarAcuerdos();">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarAcuerdos();">
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
            </div>
            <div id="divSecreto" style="display: none" class="col-xs-12">
               <div class="col-xs-12">
                <?php if($procedencia != 1) {?>
                <div class="col-xs-3">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivFormAcuerdo(2);
                                    $('#cmbPaginacion').val(1); $('#editarSecreto').hide(); $('#checkSecreto').prop('checked',false);">                                                    
                    </div>
                    <?php } ?>
                   <h4>No tienes acceso a este modulo</h4>
               </div>
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

    <script type="text/javascript">
        var instancia = null;
        var arrayPro = [];
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        var OrigenSegundaInstancia = "<?php echo $OrigenSegundaInstancia; ?>";
        var OrigenSegundaInstanciaConsulta = "<?php echo $OrigenSegundaInstanciaConsulta; ?>";
        var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;

        var procedencia = <?php echo $procedencia; ?>;
        var apartado = 1; // captura

        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';

        if (editor != undefined) {
            editor.destroy();
        } else {

        }
        var editor = null;

        digitalizarAcuerdo = function () {
            //idcarpeta
            //idactuacion
            //desc carpeta/actuacion
            //desc juzgado 
            //numero de la carpeta/actuacion
            //a�o de la carpeta/actuacion
            //cve documento
            //usuario
            var strl;
            strl = "0-" + $("#hiddenIdActuacion").val() + "-ACUERDOS-<?php echo $_SESSION["desAdscripcion"]; ?>-" + $("#txtNumero").val() + "-" + $("#txtAnio").val() + "-1-<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
            strl += "-http://10.22.165.204/sigejupev2/fachadas/sigejupe/imagenes/ImagenesFacade.Class.php";
            strl += "-http://10.22.165.204/sigejupev2/vistas/digitalizacion";
            launchDigitalizador(strl);
        },
                visorDocuemntos = function () {
                    $.ajax({
                        type: 'POST',
                        url: 'visorpdf/index.php',
                        data: {idCarpetaJudicial: "", idActuacion: $('#hiddenIdActuacion').val(), cveTipoDocumento: 34}, //malo
                        //                data: {idCarpetaJudicial: 0, idActuacion: 14525, cveTipoDocumento: 13}, //bueno
                        async: false,
                        dataType: 'html',
                        beforeSend: function () {
                            $('#visor').html('<h3>Consultando información ... espere.</h3>');
                        },
                        success: function (data) {
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
            strDatos += "&cveTipo=2"; //2 actuacion
            strDatos += "&cveTipoDocumento=34"; //tipo documento
            strDatos += "&idActuacion=" + $("#hiddenIdActuacion").val();

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
        cancelarSecreto = function () {
            $("#checkSecreto").prop("checked", false);
            arrayPro = [];
            $(".checkproy").prop("checked",false);
        };
        aceptarSecreto = function () {
            arrayPro = [];
                Magistrado = new Object();
                Magistrado.activo = "S";
                Magistrado.cveUsuario = $("#hiddenUsuarioMagistrado").val();
                Magistrado.idResolucionPermiso = $("#hiddenResolucionPermiso").val();
                arrayPro.push(Magistrado);

            $(".checkproy").each(function(){
                if($(this).is(":checked")){
                    proyectista = new Object();
                    proyectista.cveUsuario = this.value;
                    proyectista.idResolucionPermiso = $(this).attr("idresolucionpermiso");
                    proyectista.activo = "S";
                    arrayPro.push(proyectista);
                }else{
                    if($(this).attr("idresolucionpermiso") != ""){
                        proyectista = new Object();
                        proyectista.cveUsuario = this.value;
                        proyectista.idResolucionPermiso = $(this).attr("idresolucionpermiso");
                        proyectista.activo = "N";
                        arrayPro.push(proyectista);
                    }
                }
            });
        };
        $(".checkproy").click(function(){
            if($(this).is(":checked")){
            }else{
                if($(this).attr("idresolucionpermiso") != ""){

                }
            }
        });

        //     generaPDF = function (json){
        //        var strDatos = "json="+json;
        //            
        //        $.ajax({
        //            type: "POST",
        //            url: "../fachadas/sigejupe/firmapdf/FirmaPdfFacade.Class.php",
        //            data: strDatos,
        //            async: true,
        //            dataType: "html",
        //            beforeSend: function (objeto) {
        //                // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
        //            },
        //            success: function (datos) {
        //                var json = "";
        //                json = eval("(" + datos + ")"); //Parsear JSON
        //
        //                if (json.estatus == "ok") {
        ////                    alert("satisfactorio");
        //                      $("#divHideForm").hide();
        //                      $("#divAlertSucces").html("Correcto!: " + json.mesnaje.toLowerCase());
        //                      $("#divAlertSucces").show("slide");
        //                      setTimeAlert("divAlertSucces");  
        //                }else{
        //                    alert(json.mensaje);
        //                }    
        //
        //
        //            },
        //            error: function (objeto, quepaso, otroobj) {
        //                //alert("Error en la peticion:\n\n" + quepaso);
        //                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
        //                $("#divAlertDager").show("slide");
        //                setTimeAlert("divAlertDager");
        //            }
        //        });
        //     };

        cargaTipoCarpeta = function () {

            $('#cmbTipoCarpeta').empty();
            var tipoJuzgado = $("#cmbJuzgado").val().split("/");
            //        alert(tipoJuzgado[1]);

            var strDatos = "accion=consultar";
            //      strDatos = "&cveTipoCarpeta="+ ;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
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
                        $("#cmbTipoCarpeta").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                        for (var i = 0; i < json.totalCount; i++) {
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
                                    if (json.data[i].cveTipoCarpeta == "6") { // tipo carpeta causa de juicio
                                        $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "8": // verificar queda pendiente*************************
                                    if (json.data[i].cveTipoCarpeta == "6") { // tipo carpeta causa de juicio
                                        $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                            }

                        }
                        //               $("#cmbTipoCarpeta").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
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

        //   descripcionResolucion = function (id) {
        //      var strDatos = "accion=consultar";
        //      strDatos += "&cveTipoResolucion=" + id;
        //      $.ajax({
        //         type: "POST",
        //         url: "../fachadas/sigejupe/tiposresoluciones/TiposresolucionesFacade.Class.php",
        //         data: strDatos,
        //         async: true,
        //         dataType: "html",
        //         beforeSend: function (objeto) {
        //            // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
        //         },
        //         success: function (datos) {
        ////                alert(json);
        //            var json = "";
        //            json = eval("(" + datos + ")"); //Parsear JSON
        //
        //            if (json.totalCount > 0) {
        //               $("#cmbResolucionAux").val(json.data[0].desTipoResolucion);
        //            }
        //
        //
        //         },
        //         error: function (objeto, quepaso, otroobj) {
        //            //alert("Error en la peticion:\n\n" + quepaso);
        //            $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
        //            $("#divAlertDager").show("slide");
        //            setTimeAlert("divAlertDager");
        //         }
        //      });
        //   };

        //   cargaResolucion = function () {
        //
        //      var strDatos = "accion=consultar";
        //      $.ajax({
        //         type: "POST",
        //         url: "../fachadas/sigejupe/tiposresoluciones/TiposresolucionesFacade.Class.php",
        //         data: strDatos,
        //         async: true,
        //         dataType: "html",
        //         beforeSend: function (objeto) {
        //            // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
        //         },
        //         success: function (datos) {
        ////                alert(json);
        //            var json = "";
        //            json = eval("(" + datos + ")"); //Parsear JSON
        //
        //            if (json.totalCount > 0) {
        //
        //               typeof $.typeahead === 'function' && $.typeahead({
        //                  input: ".js-typeahead-input",
        //                  minLength: 0,
        //                  maxItem: 10,
        ////                            maxItemPerGroup: 6,
        //                  order: "asc",
        //                  hint: true,
        //                  searchOnFocus: true,
        //                  emptyTemplate: 'No hay coincidencias para:  {{query}}',
        //                  display: ["desTipoResolucion"],
        //                  correlativeTemplate: true,
        ////                            dropdownFilter: "Todas",
        //                  backdrop: {
        //                     "background-color": "#fff"
        //                  },
        //                  template: '<span>' +
        //                          '<span class="desTipoResolucion">{{desTipoResolucion}}</span>' +
        //                          '</span>',
        //                  source: {
        //                     Resoluciones: {
        //                        data: json.data
        //                     }
        //                  },
        //                  callback: {
        //                     onClickAfter: function (node, a, item, event) {
        ////                                    alert(item.cveTipoResolucion);
        //                        $("#cmbResolucion").val(item.cveTipoResolucion);
        //
        //                     }
        //                  },
        //                  debug: true
        //               });
        //            }
        //
        //
        //         },
        //         error: function (objeto, quepaso, otroobj) {
        //            //alert("Error en la peticion:\n\n" + quepaso);
        //            $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
        //            $("#divAlertDager").show("slide");
        //            setTimeAlert("divAlertDager");
        //         }
        //      });
        //   };

        cargaNotificacion = function () {

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposnotificaciones/TiposnotificacionesFacade.Class.php",
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
                            if (json.data[i].cveTipoNotificacion == 2)
                                $("#cmbNotificacion").append($('<option></option>').val(json.data[i].cveTipoNotificacion).html("NOTIFICACION POR ESTRADOS"));
                            else
                                $("#cmbNotificacion").append($('<option></option>').val(json.data[i].cveTipoNotificacion).html(json.data[i].desTipoNotificacion));

                        }
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

        cargaEstatus = function () {
            var strDatos = "accion=consultar";
            strDatos += "&cveTipoEstatus=20"; // el 20 corresponde a los estatus de RESOLUCION APELACION

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estatus/EstatusFacade.Class.php",
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
                            $("#cmbEstatus").append($('<option></option>').val(json.data[i].cveEstatus).html(json.data[i].descEstatus));
                        }
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
        cargaSentenciaCarpeta = function (idCarpetaJudicial) {
            //   alert("HOLA");
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/sentenciastocas/SentenciastocasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    idToca: idCarpetaJudicial,
                    activo: "S",
                    accion: "consultar"
                },
                beforeSend: function (datos) {
                },
                success: function (datos) {
                    if (datos.totalCount > 0) {
                        $("#cmbSentencia").val(datos.data[0].cveTipoSentencia);
                    }
                },
                error: function (objeto, quepaso, otroobj) {

                }
            });
            //      $("#cmbSentencia").prop("disabled", true);
        }
        cargaSentencias = function () {
            var strDatos = "accion=consultar";
            strDatos += "&cveInstancia=2"; // el 20 corresponde a los estatus de RESOLUCION APELACION

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tipossentencias/TipossentenciasFacade.Class.php",
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
                            if (json.data[i].cveTipoSentencia != 8)
                                $("#cmbSentencia").append($('<option></option>').val(json.data[i].cveTipoSentencia).html(json.data[i].desTipoSentencia));
                        }
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

        cargaJuzgados = function () {

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
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                            if (json.data[i].cveInstancia == instancia) {
                                if (juzgadoSesion == json.data[i].cveJuzgado) {
                                    $("#cmbJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                }
                            } else {
                                $("#inputGuardar").parent().hide();
                                $("#inputPDF").parent().hide();
                                $("#inputImprimir").parent().hide();
                                $("#inputEliminar").parent().hide();
                                $("#inputConsultar").parent().hide();
                                $("#inputLimpiar").parent().hide();
                                $("#inputBuscar").parent().hide();
                            }
                        }
                    }

                    cargaTipoCarpeta();

                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };

        cargaJuzgadores = function () {

            var strDatos = "accion=consultar";
            strDatos += "&activo=S&cveTipoJuzgador=7";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
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
                            $("#cmbJuzgadores1").append($('<option></option>').val(json.data[i].idJuzgador).html(json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].materno));
                            $("#cmbJuzgadores2").append($('<option></option>').val(json.data[i].idJuzgador).html(json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].materno));
                            $("#cmbJuzgadores3").append($('<option></option>').val(json.data[i].idJuzgador).html(json.data[i].nombre + " " + json.data[i].paterno + " " + json.data[i].materno));
                            $("#cmbJuzgadores1").attr("idJuzgadorActuacion","");
                        $("#cmbJuzgadores2").attr("idJuzgadorActuacion","");
                        $("#cmbJuzgadores3").attr("idJuzgadorActuacion","");
                        }
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
        cargaFuncionMagistrado = function () {

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/funcionesjuzgadores/FuncionesjuzgadoresFacade.Class.php",
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
                            if($("#cmbJuzgado").val().split("/")[1] == 8){
                                 if(json.data[i].cveFuncionJuzgador == 7){
                                    $("#cmbFuncionMagistrado1").append($('<option></option>').val(json.data[i].cveFuncionJuzgador).html(json.data[i].desFuncionJuzgador));
                                    $("#cmbFuncionMagistrado2").append($('<option></option>').val(json.data[i].cveFuncionJuzgador).html(json.data[i].desFuncionJuzgador));
                                    $("#cmbFuncionMagistrado3").append($('<option></option>').val(json.data[i].cveFuncionJuzgador).html(json.data[i].desFuncionJuzgador));
                                }
                            }else{
                                if(json.data[i].cveFuncionJuzgador > 7){
                                    $("#cmbFuncionMagistrado1").append($('<option></option>').val(json.data[i].cveFuncionJuzgador).html(json.data[i].desFuncionJuzgador));
                                    $("#cmbFuncionMagistrado2").append($('<option></option>').val(json.data[i].cveFuncionJuzgador).html(json.data[i].desFuncionJuzgador));
                                    $("#cmbFuncionMagistrado3").append($('<option></option>').val(json.data[i].cveFuncionJuzgador).html(json.data[i].desFuncionJuzgador));
                                }
                            }
                        }
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
            $("#lblRelationName").html("No. " + $("#" + objOption.id + " option:selected").text() + ":");
            $("#hiddenCveTipoCarpeta").val($("#cmbTipoCarpeta").val());
            //      if (apartado == 1) {
            //         $("#divBuscaPromocion").show();
            //      } else {
            //         $("#divBuscaPromocion").hide();
            //      }

            if ($("#cmbTipoCarpeta").val() == 9) { // sin relacion...
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#divSinRelacion").hide();
                //            $("#divBuscaPromocion").show();
            } else {
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#divSinRelacion").show();
            }


        };

        consultaCarpetaJud = function (idCarpetaJud, cveTipoCarpeta) {

            var strDatos = "";
            strDatos = "accion=consultarCarpetaExhortoAmparo";
            strDatos += "&idCarpetaJudicial=" + idCarpetaJud;
            strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
                    //                alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //                    alert (json.data[0].cveTipoCarpeta+" - "+json.data[0].cveJuzgado)
                        valorJuzgado(json.data[0].cveJuzgado);
                        cargaTipoCarpeta();

                        if (cveTipoCarpeta == 7) {
                            //                          idReferenciaAux = json.data[0].idExhorto; 
                            //                        $("#cmbTipoCarpeta").val(cveTipoCarpeta);
                            setTimeout(function () {
                                $("#cmbTipoCarpeta").val(cveTipoCarpeta);
                            }, 1000);
                            $("#txtNumero").val(json.data[0].numExhorto);
                            $("#txtAnio").val(json.data[0].aniExhorto);
                        } else if (cveTipoCarpeta == 8) {
                            //                          idReferenciaAux = json.data[0].idAmparo; 
                            //                        $("#cmbTipoCarpeta").val(cveTipoCarpeta);
                            setTimeout(function () {
                                $("#cmbTipoCarpeta").val(cveTipoCarpeta);
                            }, 1000);
                            $("#txtNumero").val(json.data[0].numAmparo);
                            $("#txtAnio").val(json.data[0].aniAmparo);
                        } else {
                            //                        idReferenciaAux = json.data[0].idCarpetaJudicial;
                            //                        $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                            setTimeout(function () {
                                $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                                buscarApelantes(true);
                            }, 1000);

                            $("#txtNumero").val(json.data[0].numero);
                            $("#txtAnio").val(json.data[0].anio);
                        }

                        $("#cmbTipoCarpeta").attr("disabled", true);
                        $("#txtNumero").attr("disabled", true);
                        $("#txtAnio").attr("disabled", true);
                        $("#cmbJuzgado").attr("disabled", true);
                        //               $("#divBuscaPromocion").show();
                        $("#inputConsultar").hide();

                        setTimeout(function () {
                            //$("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                            $("#buscaPromocion").attr("checked", true);
                            //                  buscarPromocion();
                        }, 1000);


                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();

                        $("#divAlertDager").html("Error el numero de " + tipoNumero + " no existe");
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
                    //                alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //                    alert (json.data[0].cveJuzgado+"/"+json.data[0].cveTipoJuzgado);
                        $("#cmbJuzgado").val(json.data[0].cveJuzgado + "/" + json.data[0].cveTipojuzgado);
                        if (procedencia != 1)
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
        buscarTipoCarpeta = function () {

            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var numAct = $("#txtNumero").val();
            var aniAct = $("#txtAnio").val();
            //      var cveTipoResolucion = $("#cmbResolucion").val();
            var cveTipoNotificacion = $("#cmbNotificacion").val();
            var cveEstatus = $("#cmbEstatus").val();
            //        var Notas = $("#Sintesis").val();

            //        var Sintesis = editor.getContent();           // este valor se va para el campo de observaciones
            var Sintesis = editor.getAllHtml();           // este valor se va para el campo de observaciones
            Sintesis = Sintesis.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');

            var cveJuzgadoAux = $("#cmbJuzgado").val().split("/");
            var cveJuzgado = cveJuzgadoAux[0];
            //      var idJuzgadorAcuerdo = $("#cmbJuzgadores1").val();

            var strDatos = "";
            var strDatosCarpeta = "";
            var error = 0;
            var mensaje = "";
            var cveAccion = 38; // insercion acuerdo BITACORA

            if (cveTipoCarpeta == 0) {
                error = 1;
                mensaje += "   - Relaci&oacute;n con";
            }
            if (numAct == "" && cveTipoCarpeta != 9) {
                error = 2;
                mensaje += "   - N&uacute;mero";
            }
            if (aniAct == "" && cveTipoCarpeta != 9) {
                error = 3;
                mensaje += "   - A&ntilde;o";
            }
            //      if (cveTipoResolucion == 0 && cveTipoCarpeta != 9) {
            //         error = 4;
            //         mensaje += "   - Resoluci&oacute;n";
            //      }

            if (cveTipoNotificacion == 0 && cveTipoCarpeta != 9) {
                error = 5;
                mensaje += "   - Notificaci&oacute;n";
            }
            if (cveEstatus == 0 && cveTipoCarpeta != 9) {
                error = 6;
                mensaje += "   - Estatus";
            }
            if (Sintesis == "" && cveTipoCarpeta != 9) {
                error = 4;
                mensaje += "   - Contenido del documento";
            }

            //      var idActuacionPromocion = "";
            //      if ($("#hiddenIdActuacionPromocion").val() != "") {
            //         idActuacionPromocion += $("#hiddenIdActuacionPromocion").val() + ",";
            //      }

            //      $('#radioAcuerdo:checked').each(
            //              function () {
            //alert($(this).val());
            //                 idActuacionPromocion += $(this).val() + ",";
            //              }
            //      );
            //********************************************************************************
            //************** verifica  cuantas promociones estan seleccionadas *******************
            //      idActuacionPromocion = idActuacionPromocion.substring(0, (idActuacionPromocion.length - 1));

            //        alert(idActuacionPromocion);

            if (error == 0) {
                strDatosCarpeta = "accion=consultarCarpetaExhortoAmparo";
                strDatosCarpeta += "&cveTipoCarpeta=" + cveTipoCarpeta;
                strDatosCarpeta += "&numero=" + numAct;
                strDatosCarpeta += "&anio=" + aniAct;
                strDatosCarpeta += "&cveJuzgado=" + cveJuzgado;
                strDatosCarpeta += "&activo=S";

                if ($("#hiddenIdActuacion").val() != "" || $("#hiddenIdActuacion").val() != 0) {
                    cveAccion = 39; //modificacion acuerdo BITACORA
                }

                if (cveTipoCarpeta != 9) {
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
                            json = eval("(" + datos + ")"); //Parsear JSON
                            if (json.totalCount > 0) {
                                var idReferenciaAux = 0;

                                if (cveTipoCarpeta == 7) {
                                    idReferenciaAux = json.data[0].idExhorto;
                                } else if (cveTipoCarpeta == 8) {
                                    idReferenciaAux = json.data[0].idAmparo;
                                } else {
                                    idReferenciaAux = json.data[0].idCarpetaJudicial;
                                }
                                var jsonDatos = {
                                    accion: "guardarOficio",
                                    idActuacion: $("#hiddenIdActuacion").val(),
                                    numero: numAct,
                                    anio: aniAct,
                                    cveTipoResolucion: cveTipoResolucion,
                                    cveTipoNotificacion: cveTipoNotificacion,
                                    observaciones: Sintesis,
                                    cveTipoActuacion: 2,
                                    cveAccion: cveAccion,
                                    cveJuzgado: cveJuzgado,
                                    idJuzgadorAcuerdo: idJuzgadorAcuerdo,
                                    cveUsuario: cveUsuarioSesion,
                                    cveEstatus: cveEstatus,
                                    idReferencia: idReferenciaAux,
                                    cveTipoCarpeta: cveTipoCarpeta,
                                    idActuacionAntecede: idActuacionPromocion,
                                    activo: "S"
                                };

                                guardarAcuerdo(jsonDatos, cveJuzgadoAux[1]);
                            } else {
                                var tipoNumero = $('#cmbTipoCarpeta :selected').text();

                                $("#divAlertDager").html("Error el numero de " + tipoNumero + " no existe");
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
                } else {
                    // no busca carpeta y guarda ACUERDO sin relacion
                    var jsonDatos = {
                        accion: "guardarOficio",
                        idActuacion: $("#hiddenIdActuacion").val(),
                        numero: numAct,
                        anio: aniAct,
                        cveTipoResolucion: cveTipoResolucion,
                        cveTipoNotificacion: cveTipoNotificacion,
                        observaciones: Sintesis,
                        cveTipoActuacion: 2,
                        cveAccion: cveAccion,
                        cveJuzgado: cveJuzgado,
                        idJuzgadorAcuerdo: idJuzgadorAcuerdo,
                        cveUsuario: <?php echo $_SESSION["cveUsuarioSistema"]; ?>,
                        cveEstatus: cveEstatus,
                        //                                cveTipoCarpeta: cveTipoCarpeta,
                        idActuacionAntecede: idActuacionPromocion,
                        activo: "S"
                    };
                    //strDatos += "&idActuacionAntecede=" + $("#hiddenIdActuacionPromocion").val();
                    guardarAcuerdo(jsonDatos, cveJuzgadoAux[1]);
                }
            } else {
                $("#divInformacion").show();
                $("#strInformacion").html("Informaci&oacute;n! seleccione: " + mensaje);
                setTimeAlert("divInformacion");
            }
        };

        guardarResolucionApelacion = function () {
            var guardar = true;
            var secreto = "";
            var Sintesis = editor.getAllHtml(); // este valor se va para el campo de observaciones
            Sintesis = Sintesis.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');
            var listaMagistrados = [];
            if($("#cmbJuzgadores1").val() != 0 && $("#cmbFuncionMagistrado1").val() != 0){
                var objMagistrados = new Object();
                objMagistrados.idJuzgador = $("#cmbJuzgadores1").val();
                objMagistrados.idJuzgadorActuacion = $("#cmbJuzgadores1").attr("idjuzgadoractuacion");
                objMagistrados.cveFuncionMagistrado = $("#cmbFuncionMagistrado1").val();
                listaMagistrados.push(objMagistrados);   
            }
            if($("#cmbJuzgadores2").val() != 0 && $("#cmbFuncionMagistrado2").val() != 0){
                var objMagistrados = new Object();
                objMagistrados.idJuzgador = ($("#cmbJuzgadores2").val());
                objMagistrados.idJuzgadorActuacion = $("#cmbJuzgadores2").attr("idjuzgadoractuacion");
                objMagistrados.cveFuncionMagistrado = ($("#cmbFuncionMagistrado2").val());
                listaMagistrados.push(objMagistrados);
            }
            if($("#cmbJuzgadores3").val() != 0 && $("#cmbFuncionMagistrado3").val() != 0){
                var objMagistrados = new Object();
                objMagistrados.idJuzgador = ($("#cmbJuzgadores3").val());
                objMagistrados.idJuzgadorActuacion = $("#cmbJuzgadores3").attr("idjuzgadoractuacion");
                objMagistrados.cveFuncionMagistrado = ($("#cmbFuncionMagistrado3").val());
                listaMagistrados.push(objMagistrados);
            }   
            if (($("#cmbJuzgado").val() == 0) || ($("#cmbJuzgado").val() == "")) {
                $("#divAlertInfo").html("SELECCIONE UN TRIBUNAL");
                $("#divAlertInfo").show("slide");
                movermeA("divAlertInfo");
                setTimeAlert("divAlertInfo");
                guardar = false;
            }
            if (($("#cmbTipoCarpeta").val() == 0) || ($("#cmbTipoCarpeta").val() == "")) {
                if (guardar) {
                    $("#divAlertInfo").html("SELECCIONE UN TIPO CARPETA");
                    $("#divAlertInfo").show("slide");
                    movermeA("divAlertInfo");
                    setTimeAlert("divAlertInfo");
                    guardar = false;
                }
            }
            if (($("#txtNumero").val() == 0) || ($("#txtNumero").val() == "")) {
                if (guardar) {
                    $("#divAlertInfo").html("FALTA COLOCAR NUMERO");
                    $("#divAlertInfo").show("slide");
                    movermeA("divAlertInfo");
                    setTimeAlert("divAlertInfo");
                    guardar = false;
                }
            }
            if (($("#txtAnio").val() == 0) || ($("#txtAnio").val() == "")) {
                if (guardar) {
                    $("#divAlertInfo").html("FALTA COLOCAR A&Ntilde;o");
                    $("#divAlertInfo").show("slide");
                    movermeA("divAlertInfo");
                    setTimeAlert("divAlertInfo");
                    guardar = false;
                }
            }
            if($("#cmbEstatus").val() == 46){
                if ($("#cmbJuzgadores1").val() == 0 || $("#cmbFuncionMagistrado1").val() == 0 || $("#cmbJuzgadores2").val() == 0 || $("#cmbFuncionMagistrado2").val() == 0 || $("#cmbJuzgadores3").val() == 0 || $("#cmbFuncionMagistrado3").val() == 0) {
                    if (guardar) {
                        $("#divAlertInfo").html("SELECCIONE MAGISTRADOS Y SU FUNCION");
                        $("#divAlertInfo").show("slide");
                        movermeA("divAlertInfo");
                        setTimeAlert("divAlertInfo");
                        guardar = false;
                    }
                }
            }
            if (($("#cmbNotificacion").val() == 0) || ($("#cmbNotificacion").val() == "")) {
                if (guardar) {
                    $("#divAlertInfo").html("SELECCIONE TIPO DE NOTIFICACI&Oacute;N");
                    $("#divAlertInfo").show("slide");
                    movermeA("divAlertInfo");
                    setTimeAlert("divAlertInfo");
                    guardar = false;
                }
            }
            if (($("#cmbEstatus").val() == 0) || ($("#cmbEstatus").val() == "")) {
                if (guardar) {
                    $("#divAlertInfo").html("SELECCIONE TIPO DE ESTATUS");
                    $("#divAlertInfo").show("slide");
                    movermeA("divAlertInfo");
                    setTimeAlert("divAlertInfo");
                    guardar = false;
                }
            }
            if (($("#cmbSentencia").val() == 0) || ($("#cmbSentencia").val() == "")) {
                if (guardar) {
                    $("#divAlertInfo").html("SELECCIONE UNA SENTENCIA");
                    $("#divAlertInfo").show("slide");
                    movermeA("divAlertInfo");
                    setTimeAlert("divAlertInfo");
                    guardar = false;
                }
            }
            if ($("#checkSecreto").is(":checked") ) {
               secreto = 'S';
            }
            
            //      alert(editor.getContent())
            if (editor.getContent() == "") {
                if (guardar) {
                    $("#divAlertInfo").html("ESCRIBA LA RESOLUCI&Oacute;N EN EL CONTENIDO DEL DOCUMENTO ");
                    $("#divAlertInfo").show("slide");
                    movermeA("divAlertInfo");
                    setTimeAlert("divAlertInfo");
                    guardar = false;
                }
            }
            if(OrigenSegundaInstancia == 1){
             if($("#cmbEstatus").val() == 46){
                if(listaMagistrados.length < 3){
                    error = 7;
                   mensaje += "   - Magistrados y funciones";
                }
            }
         }
            if (guardar) {
                var jsonDatos = {
                    accion: "guardarResolucionApelacion",
                    idActuacion: $("#hiddenIdActuacion").val(),
                    listaMagistrados: JSON.stringify(listaMagistrados),
                    numero: $("#txtNumero").val(),
                    anio: $("#txtAnio").val(),
                    secreto: secreto,
                    cveTipoNotificacion: $("#cmbNotificacion").val(),
                    observaciones: Sintesis,
                    cveTipoActuacion: 34,
                    cveTipoSentencia: $("#cmbSentencia").val(),
                    cveAccion: 381,
                    cveJuzgado: $("#cmbJuzgado").val().split("/")[0],
                    cveUsuario: <?php echo $_SESSION["cveUsuarioSistema"]; ?>,
                    cveEstatus: $("#cmbEstatus").val(),
                    activo: "S",
                    idReferencia: $("#hiddenIdCarpetaJudicial").val(),
                    cveTipoCarpeta: $("#cmbTipoCarpeta").val(),
                    arrayPro: JSON.stringify(arrayPro)
                };
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                    data: jsonDatos,
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        //                ToggleLoading(1);
                    },
                    success: function (datos) {
                        //                            alert(datos);
                        var json = "";
                        json = datos;
                        //                json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount > 0) {
                            //alert(json.text);
                            //                  $("#cmbSentencia").prop("disabled", true);
                            if (json.data[0].observaciones != "faltaJuzgador") {

                                if (json.data[0].observaciones != "publicado") {
                                    $("#divHideForm").hide();
                                    $("#divAlertSucces").html("Correcto!: " + json.text.toLowerCase());
                                    $("#divAlertSucces").show("slide");
                                    setTimeAlert("divAlertSucces");
                                    $("#hiddenIdActuacion").val(json.data[0].idActuacion);
                                    muestraEstatus(json.data[0].idActuacion);
                                    var boton = "";
                                    //                  boton += "<button class='btn btn-primary btn-adaptar' id='inputDigitalizar' onclick='loadFormActuacion2(\"sigejupe/peritos/frmPeritos.php\", \"\"," + json.data[0].idActuacion + "," + json.data[0].idReferencia + "," + json.data[0].cveTipoCarpeta + " )' data-toggle='tooltip' data-original-title='SOLICITUD DE PERITOS' type='button'> Solicitud de Peritos ";
                                    //                  boton += "</button>"

                                    $("#divPeritos").show();
                                    $("#divPeritos").html(boton);
                                    $("#inputPDF").show();
                                    $("#inputVisor").show();
                                } else {
                                    $("#divHideForm").hide();
                                    $("#divAlertDager").html("Actuacion publicada, no puede ser modificada");
                                    $("#divAlertDager").show("slide");
                                    setTimeAlert("divAlertDager");
                                }
                            } else {
                                $("#divHideForm").hide();
                                $("#divAlertDager").html("No tiene asignado un juzgador");
                                $("#divAlertDager").show("slide");
                                setTimeAlert("divAlertDager");
                            }
                            setTimeout(function () {
                                $("#cmbTipoCarpeta").attr("disabled", true);
                                $("#txtNumero").attr("disabled", true);
                                $("#txtAnio").attr("disabled", true);
                                $("#buscaPromocion").attr("disabled", true);
                                // alert("muestra datos actuacion..");
                            }, 1000);
                            if ($("#hiddenasignaValoresArbol").val() == "1") {
                                $("#txtNumeroTree").val(json.data[0].numero);
                                $("#txtAnioTree").val(json.data[0].anio);
                                $("#cmbTipoCarpetaTree").val(json.data[0].cveTipoCarpeta);
                                $("#cmbJuzgadoArbol").val(json.data[0].cveJuzgado);
                                //                        alert("asigna valores...");
                            }
                            if (procedencia == 1) {
                                getTree();
                            }

                            consutaIdAcuerdo(json.data[0].idActuacion, "", tipoJuzgado);
                            //                  $("#cmbSentencia").prop("disabled", true);
                            //               buscarPromocion();
                            //obtenerContador();
                        } else {
                            //alert(json.text);
                            $("#divHideForm").hide();
                            $("#divAlertDager").html(json.text);
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                        $('#barCarga').html("");
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            } else {

            }


        };
        consultar = function () {
            //      alert("CONSULTAR");
            $("#divSentencia").hide();
            $("#buscarTocaParaCargaApelantes").hide();
            $("#divListaApelantes").hide();
            $("#divRangoFechas").show();
            $("#inputRegresar").show();
            $("#inputBuscar").show();
            $("#divNotas").hide();
            $("#inputGuardar").hide();
            $("#inputConsultar").hide();
            $("#inputEliminar").hide();
            $("#inputImprimir").hide();
            //      $("#divBuscaPromocion").hide();
            $("#divConsultaActuaciones").hide();
            $("#inputVisor").hide();
            $("#inputPDF").hide();
            $("#divPeritos").hide();
            $("#inputConsultar").hide();
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Registro de Resoluci&oacute;n de Apelaci&oacute;n</span> / Consulta de Resoluci&oacute;n de Apelaci&oacute;n");
            apartado = 2; // consulta
            if ($("#divRangoFechas").is(":visible")) {
                $("#inputConsultar").hide();
                //         alert($("#inputConsultar").is(":visible"));
                //         alert("TRUE");
            } else {
                //         alert("FALSE");

            }
        };
        regresar = function (bndSelecciono) {
            $("#divSentencia").show();
            //      alert($("#hiddenIdActuacion").val() == "");
            if (OrigenSegundaInstanciaConsulta == 1) {
                $("#buscarTocaParaCargaApelantes").hide();
            } else {
                $("#buscarTocaParaCargaApelantes").show();
            }
            $("#divListaApelantes").show();
            $("#divRangoFechas").hide();
            $("#inputRegresar").hide();
            $("#inputBuscar").hide();
            $("#divNotas").show();
            if (procedencia == 1) {
                $("#inputConsultar").hide();
            } else {
                $("#inputConsultar").show();
            }
            $("#cmbPaginacion").val(1);
            //      $("#divBuscaPromocion").hide();

            if (bndSelecciono == 1) {
                setTimeout(function () {
                    $("#cmbTipoCarpeta").attr("disabled", true);
                    $("#txtNumero").attr("disabled", true);
                    $("#txtAnio").attr("disabled", true);
                    $("#cmbJuzgado").attr("disabled", true);
                    // alert("muestra datos actuacion..");
                }, 1000);
            }

            if (String(createRecord) === "S") {
                $("#inputGuardar").show();
            }
            if (deleteRecord == "S") {

                $("#inputEliminar").show();
                if ($("#hiddenIdActuacion").val() == "")
                    $("#inputEliminar").hide();
            }
            //        $("#inputEliminar").show();
            //$("#inputGuardar").show();
            //$("#inputImprimir").show();
            $("#h5titulo").html("<span>Registro de Resoluci&oacute;n de Apelaci&oacute;n</span>");
            apartado = 1;
        };
        getPaginas = function (pag, cantReg) {

            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            if (cveTipoCarpeta == 9) {
                cveTipoCarpeta = 0;
            }

            var strDatos = "accion=getPaginasResolucionApelacion";
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
            //      strDatos += "&cveTipoResolucion=" + $("#cmbResolucion").val();
            strDatos += "&cveTipoNotificacion=" + $("#cmbNotificacion").val();
            if ($("#txtNumero").val() == "" && $("#txtAnio").val() == "" && cveTipoCarpeta == 0 && $("#cmbNotificacion").val() == 0 && $("#cmbEstatus").val() == 0) {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            }
            strDatos += "&cveEstatus=" + $("#cmbEstatus").val();
            strDatos += "&cveJuzgado=" + cveJuzgado[0];
            strDatos += "&pag=" + pag;
            strDatos += "&cveTipoActuacion=34"; // el 2 es para las actuaciones acuerdo
            strDatos += "&cantxPag=" + cantReg; // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";
            //      if ($("#cmbJuzgadores1").val() != 0) {
            //         strDatos += "&idJuzgadorAcuerdo=" + $("#cmbJuzgadores1").val();
            //      }

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
                    //                        alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //$('#cmbPaginacion').find('option').remove().end().append('<option value="0">Seleccione pagina</option>').val('0');
                        $('#cmbPaginacion').find('option').remove().end();
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#cmbPaginacion").val(pag);
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();
                        $("#divAlertDager").html("Error el numero de " + tipoNumero + " no existe");
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

        $("#checkSecreto").click(function(){
            if ($("#checkSecreto").is(":checked") ) {
                $("#ModalProyectistas").modal("show");
            }else{
                arrayPro = [];
                $(".checkproy").prop("checked",false);
                
            }
        });

        consultarAcuerdos = function () {

            //**************************** consulta de acuerdos *************************************
            var pag = $("#cmbPaginacion").val();
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var cantReg = $("#cmbNumReg").val();
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            var indice = $("#cmbPaginacion").val();
            indice = (indice - 1) * $("#cmbNumReg").val();
            var error = 0;
            if (cveTipoCarpeta == 9) {
                cveTipoCarpeta = 0;
            }

            if (cveJuzgado == 0) {
                error = 1;
            }

            var strDatos = "accion=consultarResolucionApelacion";
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
            //      strDatos += "&cveTipoResolucion=" + $("#cmbResolucion").val();
            strDatos += "&cveTipoNotificacion=" + $("#cmbNotificacion").val();
            if ($("#txtNumero").val() == "" && $("#txtAnio").val() == "" && cveTipoCarpeta == 0 && $("#cmbNotificacion").val() == 0 && $("#cmbEstatus").val() == 0) {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            }
            strDatos += "&cveEstatus=" + $("#cmbEstatus").val();
            strDatos += "&cveJuzgado=" + cveJuzgado[0];
            strDatos += "&pag=" + pag;
            strDatos += "&cveTipoActuacion=34"; // el 2 es para las actuaciones acuerdo
            strDatos += "&cantxPag=" + cantReg; // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";
            //      if ($("#cmbJuzgadores1").val() != 0) {
            //         strDatos += "&idJuzgadorAcuerdo=" + $("#cmbJuzgadores1").val();
            //      }

            if (error == 0) {
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

                            table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>N&uacute;m.</th>";
                            table += "<th>Tipo</th>";
                            table += "<th>Actuaci&oacute;n</th>";
                            table += "<th>Notificacion</th>";
                            table += "<th>Estatus</th>";
                            table += "<th>Fecha Registro</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            for (var i = 0; i < json.totalCount; i++) {
                                table += "<tr onclick=\"consutaIdAcuerdo('" + json.data[i].idActuacion + "','" + json.data[i].descTipoCarpeta + "','" + cveJuzgado[1] + "')\">";
                                table += "<td  > " + (i + 1 + indice) + "</td>";
                                if (json.data[i].cveTipoCarpeta != "") {
                                    table += "<td  >" + json.data[i].descTipoCarpeta + " - " + json.data[i].numero + "/" + json.data[i].anio + "</td>";
                                } else {
                                    table += "<td onclick=\"consutaIdOficio('" + json.data[i].idActuacion + "','\"SIN RELACION\"')\" > SIN RELACION </td>";
                                }
                                table += "<td >" + json.data[i].numActuacion + "/" + json.data[i].aniActuacion + "</td>";
                                //                     table += "<td >" + json.data[i].descTipoResolucion + "</td>";
                                table += "<td >" + json.data[i].descTipoNotificacion + "</td>";
                                table += "<td >" + json.data[i].descEstatus + "</td>";
                                table += "<td >" + json.data[i].fechaRegistro + "</td>";
                                table += "</tr> ";
                                //                                                    alert(json.data[i].observaciones);
                            }
                            table += "</tbody>";
                            table += "</table>";
                            $("#divHideForm").hide();
                            $("#divConsulta").show();
                            $("#divTableResult").html(table);
                            $("#tblResultadosGrid").DataTable(
                                    {
                                        paging: false
                                    }
                            );
                            getPaginas(json.pagina, cantReg);
                            changeDivFormAcuerdo(2);
                            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Registro de Resoluci&oacute;n Apelaci&oacute;n</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta de Resoluci&oacute;n de Apelaci&oacute;n</span> / Resultados");
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
            } else {
                $("#divAlertInfo").html('SELECCIONE TRIBUNAL');
                $("#divAlertInfo").show("slide");
                setTimeAlert("divAlertInfo");
            }

            //**************************** consulta de oficios *************************************
        };
        regresar2 = function () {
            changeDivFormAcuerdo(1);
            regresar();
        };
        regresarConsultar = function () {
            changeDivFormAcuerdo(1);
            $("#cmbPaginacion").val(1);
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Registro de Resoluci&oacute;n de Apelaci&oacute;n</span> / <span>Consulta de Resoluci&oacute;n de Apelaci&oacute;n</span>");
        }

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
        changeDivFormAcuerdo = function (opc) {
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
                $("#divSecreto").hide("slide");
            } else if (opc === 2) {
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
                $("#divSecreto").hide("slide");
            }else if (opc === 3) {
                $("#divFormulario").hide("fade");
                $("#divConsulta").hide("slide");
                $("#divSecreto").show("slide");
            }
        };
        consutaIdAcuerdo = function (id, descTipoCarpeta, tipoJuzgado) {

            changeDivFormAcuerdo(1);
            var strDatos = "accion=seleccionar"; //seleccionar
            strDatos += "&idActuacion=" + id;
            strDatos += "&cveTipoActuacion=34";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                              $('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //                  alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //alert(json.text);
                        //regresar();
                         if(json.data[0].secreto == 'S'){
                            $("#checkSecreto").prop("checked", true);
                            $("#editarSecreto").show();
                        }
                        var validar = "";
                        $("#hiddenIdActuacion").val(json.data[0].idActuacion);

                        muestraEstatus(json.data[0].idActuacion);
                        if($("#cmbEstatus").val() == 46 ){
                            validar = new Object();
                            validar.status = "true";
                            $("#divCheckSecreto").hide();
                        }else{
                            $("#divCheckSecreto").show();
                            if($("#hiddenIdActuacion").val() != 0){
                               validar = consultarPermisosSecrecia(cveUsuarioSesion);
                                validar = eval("(" + validar + ")")
                            }
                        }
                        if(validar != ""){
                        if(validar.status == "true"){
                            $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                            $("#txtNumero").val(json.data[0].numero);
                            $("#txtAnio").val(json.data[0].anio);
                            //               cargaSentenciaCarpeta(json.data[0].idReferencia);
                            $("#cmbSentencia").val(json.data[0].cveTipoSentencia);
                            //               $("#cmbResolucion").val(json.data[0].cveTipoResolucion);
                            //               descripcionResolucion(json.data[0].cveTipoResolucion);
                            $("#cmbNotificacion").val(json.data[0].cveTipoNotificacion);
                            // seleccionar juzgado en combo
                            if (procedencia == 1) {
                                valorJuzgado(json.data[0].cveJuzgado);
                                cargaTipoCarpeta();
                                setTimeout(function () {
                                    //                         alert("muestra datos actuacion..");
                                    $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                                }, 1000);
                                $("#lblRelationName").html("No. " + $("#cmbTipoCarpeta option:selected").text() + ":");
                                //                        buscarPromocion();
                            } else {
                                $("#cmbJuzgado").val(json.data[0].cveJuzgado + "/" + tipoJuzgado);
                            }

    //                        $("#cmbJuzgadores1").val(json.data[0].idJuzgadorAcuerdo);
                            $("#buscarTocaParaCargaApelantes").show();
                            if (OrigenSegundaInstanciaConsulta == 1) {
                                $("#buscarTocaParaCargaApelantes").hide();
                            } else {
                                $("#buscarTocaParaCargaApelantes").show();
                            }
                            $("#divListaApelantes").show();
                            llenareditor(json.data[0].observaciones);
                            //digitalizarAcuerdo();
                            //                    $("#inputDigitalizar").show();

                            if (json.data[0].cveTipoCarpeta === "null" || json.data[0].cveTipoCarpeta === null) { // sin relacion
                                $("#cmbTipoCarpeta").val(9);
                                $("#lblRelationName").html("No. SIN RELACION");
                                $("#divSinRelacion").hide();
                            } else {
                                $("#divSinRelacion").show();
                                $("#lblRelationName").html("No." + descTipoCarpeta);
                            }

                            
                            regresar(1);
                            // busca idActuacionPadre de actuacion
                            buscarAntecede(json.data[0].idActuacion);
                            if (deleteRecord == "S") {
                                $("#inputEliminar").show();
                            }

                            var boton = "";
                            //               boton += "<button class='btn btn-primary btn-adaptar' id='inputDigitalizar' onclick='loadFormActuacion2(\"sigejupe/peritos/frmPeritos.php\", \"\"," + json.data[0].idActuacion + "," + json.data[0].idReferencia + "," + json.data[0].cveTipoCarpeta + " )' data-toggle='tooltip' data-original-title='SOLICITUD DE PERITOS' type='button'> Solicitud de Peritos ";
                            //               boton += "</button>"
                            setTimeout(function () {
                                //                     alert($("#cmbTipoCarpeta").val());
                                buscarApelantes(false);
                                buscarMagistrado(json.data[0].idActuacion);
                            }, 1000);

                            $("#divPeritos").show();
                            $("#divPeritos").html(boton);
                            $("#inputPDF").show();
                            $("#inputVisor").show();
                        }else{
                            changeDivFormAcuerdo(3);
                        }
                       } else{
                            changeDivFormAcuerdo(3);
                        }
                    } else {
                        $("#divAlertInfo").html('no existe informacion del acuerdo');
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        loadFormActuacion2 = function (url, idCarpetaJudicial, idActuacion, idReferencia, cveTipoCarpeta) {
            $.post(url, {idCarpetaJudicial: idCarpetaJudicial, idActuacionAcuerdo: idActuacion, idReferenciaAcuerdo: idReferencia, cveTipoCarpetaAcuerdo: cveTipoCarpeta}, function (htmlexterno) {
                $("#divFrmTreeContenido").html(htmlexterno);
                var visibleFormulario = $("#collapseFormularios").is(":visible");
                if (visibleFormulario == false)
                    $("#collapseFormularios").collapse('show');
            });
        };

        buscarMagistrado = function (idActuacion) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/resolucionapelacion/ResolucionApelacionFacade.Class.php",
                data: {
                    accion: "consultarMagistrado",
                    idActuacion: idActuacion
                },
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                },
                success: function (data) {
//                    if(data == 0){
//                        $("#lblJuzgador").text("No tiene magistrado")
//                    }else{
                    if(data.totalCount > 0){
                        
                      for(var i = 0; i <= (data.totalCount - 1);i++){
                            $("#cmbJuzgadores"+(i+1)).val(data.resultados[i].idJuzgador);
                            $("#cmbJuzgadores"+(i+1)).attr("idJuzgadorActuacion",data.resultados[i].idJuzgadorActuacion);
                            $("#cmbFuncionMagistrado"+(i+1)).val(data.resultados[i].cveFuncionJuzgador);
                        }
                    }else{
                        $("#cmbJuzgadores1").val(0);
                        $("#cmbJuzgadores2").val(0);
                        $("#cmbJuzgadores3").val(0);
                        $("#cmbFuncionMagistrado1").val(0);
                        $("#cmbFuncionMagistrado2").val(0);
                        $("#cmbFuncionMagistrado3").val(0);
                    }
//                    }
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
        }

        muestraEstatus = function (idActuacion) {

            var strDatos = "accion=muestraEstatusActuacion";
            strDatos += "&idActuacion=" + idActuacion;
            strDatos += "&activo=S";
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
                    //                          alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        $("#cmbEstatus").val(json.data[0].cveEstatus);
                        if (json.data[0].cveEstatus == 46) {// publicado
                            $("#cmbTipoCarpeta").attr("disabled", true);
                            $("#txtNumero").attr("disabled", true);
                            $("#txtAnio").attr("disabled", true);
                            $("#cmbResolucion").attr("disabled", true);
                            $("#cmbNotificacion").attr("disabled", true);
                            $("#Sintesis").attr("disabled", true);
                            $("#cmbEstatus").attr("disabled", true);
                            $("#cmbJuzgado").attr("disabled", true);
                            $("#cmbJuzgadores1").attr("disabled", true);
                            $("#cmbJuzgadores2").attr("disabled", true);
                            $("#cmbJuzgadores3").attr("disabled", true);
                            $("#cmbFuncionMagistrado1").attr("disabled", true);
                            $("#cmbFuncionMagistrado2").attr("disabled", true);
                            $("#cmbFuncionMagistrado3").attr("disabled", true);
                            $("#inputGuardar").hide();
                            $("#inputEliminar").hide();
                        } else if (json.data[0].cveEstatus == 8) { // promocion acordada
                            if (procedencia == 1) {
                                var table = "";
                                table += "<table id='tblResultadosGridAct' width='60%' height='175' cellspacing='0' cellpadding='0' border='0' align='center' >";
                                table += "<tr bgcolor='#EA6E6E'>";
                                table += "<td>La promocion, ya cuenta con un acuerdo !! </td>";
                                table += "</tr>";
                                table += "</table>";
                                $("#divFormulario").hide();
                                $("#divActuacionNOvalida").show();
                                $("#divActuacionNOvalida").html(table);
                            } else {
                                alert("limpiar");
                            }
                        } else {
                            if (procedencia == 1) {
                                //                     $("#divBuscaPromocion").show();
                                $("#buscaPromocion").attr("checked", true);
                                $("#buscaPromocion").attr("disabled", true);
                                $("#cmbJuzgado").attr("disabled", true);
                                $("#cmbTipoCarpeta").attr("disabled", true);
                                $("#txtNumero").attr("disabled", true);
                                $("#txtAnio").attr("disabled", true);
                            } else {
                                $("#cmbTipoCarpeta").attr("disabled", false);
                                $("#txtNumero").attr("disabled", false);
                                $("#txtAnio").attr("disabled", false);
                                $("#cmbResolucion").attr("disabled", false);
                                $("#cmbNotificacion").attr("disabled", false);
                                $("#Sintesis").attr("disabled", false);
                                $("#cmbEstatus").attr("disabled", false);
                                $("#inputGuardar").show();
                                $("#inputEliminar").show();
                            }
                        }
                    } else {
                        alert(json.text + " no tiene registrado el estuatus el acuerdo");
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        buscarAntecede = function (idActuacionHija) {

            var strDatos = "accion=buscaActuacionPadre";
            strDatos += "&idActuacionHija=" + idActuacionHija;
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
                    //                                  alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //               $("#divBuscaPromocion").show();
                        $("#promocionSel").html("No. Promocion: " + json.data[0].numActuacion + " / " + json.data[0].aniActuacion + " - " + json.data[0].Sintesis);
                        $("#buscaPromocion").attr("checked", true);
                        $("#buscaPromocion").attr("disabled", true);
                    } else {
                        //alert(json.text);
                        $("#buscaPromocion").attr("checked", false);
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        }

        eliminarOficios = function () {

            if ($("#hiddenIdActuacion").val() != "") {

                bootbox.dialog({
                    message: "Advertencia!! <br><br> Esta seguro de eliminar la resoluci&oacute;n de apelaci&oacute;n??",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {

                                var strDatos = "accion=bajaResolucionApelacion";
                                strDatos += "&idActuacion=" + $("#hiddenIdActuacion").val();
                                strDatos += "&idReferencia=" + $("#hiddenIdCarpetaJudicial").val("");;
                                strDatos += "&cveAccion=382"; //ELIMINO RESOLUCION APELACION
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
                                        //                          alert(datos);
                                        var json = "";
                                        json = eval("(" + datos + ")"); //Parsear JSON

                                        if (json.totalCount > 0) {
                                            //alert(json.text);
                                            if (json.data[0].observaciones == "publicado") {
                                                //                                 alert("HOLA");

                                                $("#divHideForm").hide();
                                                $("#divAlertDager").html("No se puede eliminar el acuerdo a sido publicado");
                                                $("#divAlertDager").show("slide");
                                                movermeA("divAlertDager");
                                                setTimeAlert("divAlertDager");
                                                if (procedencia == 1) {
                                                    getTree();
                                                }
                                            } else {
                                                limpiar("");
                                                $("#divHideForm").hide();
                                                $("#divAlertSucces").html("Eliminacion correcta");
                                                $("#divAlertSucces").show("slide");
                                                setTimeAlert("divAlertSucces");
                                                getTree();
                                            }

                                            //                              limpiar("");

                                        } else {
                                            //alert(json.text);
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
                $("#divAlertDager").html("No ha seleccionado un registro");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        };
        eliminarAntecedeAcuerdo = function (idPadre) {
            if (idPadre != "") {

                bootbox.dialog({
                    message: "Advertencia!! <br><br> Esta seguro de eliminar el acuerdo de la promocion seleccionada??",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {

                                var strDatos = "accion=bajaAntecedeAcuerdo";
                                strDatos += "&idActuacion=" + $("#hiddenIdActuacion").val();
                                strDatos += "&idActuacionPadre=" + idPadre;
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
                                        //                          alert(datos);
                                        var json = "";
                                        json = eval("(" + datos + ")"); //Parsear JSON

                                        if (json.totalCount > 0) {
                                            //alert(json.text);
                                            if (json.data[0].observaciones == "publicado") {
                                                $("#divHideForm").hide();
                                                $("#divAlertDager").html("No se puede eliminar el acuerdo a sido publicado");
                                                $("#divAlertDager").show("slide");
                                                setTimeAlert("divAlertDager");
                                                if (procedencia == 1) {
                                                    getTree();
                                                }
                                            } else {
                                                $("#divHideForm").hide();
                                                $("#divAlertSucces").html("Eliminacion correcta");
                                                $("#divAlertSucces").show("slide");
                                                setTimeAlert("divAlertSucces");
                                                getTree();
                                                //                                 buscarPromocion();
                                            }

                                            limpiar("");
                                        } else {
                                            //alert(json.text);
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
                $("#divAlertDager").html("No ha seleccionado un registro");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        };
        limpiar = function (muestra) {
            $("#proyectista").html("Seleccione numero de toca y carpeta para cargar personal");
            $("#lblJuzgador").text("");
            $("#divCheckSecreto").show();
            arrayPro = [];
            $("#editarSecreto").hide();
            $("#hiddenUsuarioMagistrado").val("");
            $(".checkproy").prop("checked",false);
            $("#checkSecreto").prop("checked",false);
            //      $("#cmbSentencia").prop("disabled", false);
            $("#cmbSentencia").val(0);
            //        alert("->"+procedencia);
            if (procedencia == 0) { //no proviene del arbol
                //            alert("proviene del arbol");
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#cmbTipoCarpeta").val(0);
                $("#txtNumero").attr("disabled", false);
                $("#txtAnio").attr("disabled", false);
                $("#cmbJuzgadores1").attr("disabled", false);
                $("#cmbJuzgadores2").attr("disabled", false);
                $("#cmbJuzgadores3").attr("disabled", false);
                $("#cmbFuncionMagistrado1").attr("disabled", false);
                $("#cmbFuncionMagistrado2").attr("disabled", false);
                $("#cmbFuncionMagistrado3").attr("disabled", false);
                $("#cmbJuzgado").attr("disabled", false);
                $("#cmbTipoCarpeta").attr("disabled", false);
                $("#inputGuardar").prop("disabled", false);
                //** valores ocultos **//
                $("#hiddenIdActuacion").val("");
                $("#hiddenCveTipoCarpeta").val("");
                $("#hiddenIdCarpetaJudicial").val("");
                if (OrigenSegundaInstanciaConsulta == 1) {

                } else {
                    $("#inputGuardar").show();
                }
                if (apartado == 2) {
                    $("#inputGuardar").hide();
                }
            }


            $("#cmbJuzgadores1").val(0);
            $("#cmbJuzgadores2").val(0);
            $("#cmbJuzgadores3").val(0);
            $("#cmbFuncionMagistrado1").val(0);
            $("#cmbFuncionMagistrado2").val(0);
            $("#cmbFuncionMagistrado3").val(0);
            $("#cmbJuzgadores1").attr("idJuzgadorActuacion","");
            $("#cmbJuzgadores2").attr("idJuzgadorActuacion","");
            $("#cmbJuzgadores3").attr("idJuzgadorActuacion","");
            $(".cmbFuncion").each(function(){
                $(this).children().each(function(){
                        $(this).attr("disabled", false);
                });
            });
            $(".cmbMagistrado").each(function(){
                $(this).children().each(function(){
                        $(this).attr("disabled", false);
                });
            });
            
            $("#cmbResolucion").val(0);
            $("#cmbResolucionAux").val("");
            $("#cmbNotificacion").val(0);
            //        $("#Sintesis").val("");
            editor.setContent("", false);
            $("#lblRelationName").html("No.");
            $("#divSinRelacion").show();
            $("#txtfechaInicial").val($("#hiddenFechaActual").val());
            $("#txtfechaFinal").val($("#hiddenFechaActual").val());
            $("#cmbEstatus").val(0);
            $("#cmbResolucion").attr("disabled", false);
            $("#cmbNotificacion").attr("disabled", false);
            $("#Sintesis").attr("disabled", false);
            $("#cmbEstatus").attr("disabled", false);
            $("#divConsultaActuaciones").hide();
            $("#divTableResultActuaciones").hide();
            $("#divTableResultActuaciones").html("");
            $("#hiddenIdActuacionPromocion").val("");
            $("#buscaPromocion").attr("checked", false);
            $("#buscaPromocion").attr("disabled", false);
            $("#promocionSel").html("");
            //      $("#divBuscaPromocion").hide();

            $("#divPeritos").hide();
            $("#divPeritos").html("");
            if (muestra == "") {
                $("#inputEliminar").hide();
                if (OrigenSegundaInstanciaConsulta == 1) {
                    $("#buscarTocaParaCargaApelantes").hide();
                } else {
                    $("#buscarTocaParaCargaApelantes").show();
                }
                if ($("#divRangoFechas").is(":visible")) {
                    $("#buscarTocaParaCargaApelantes").hide();
                    $("#divListaApelantes").hide();
                } else {
                    $("#buscarTocaParaCargaApelantes").show();
                    $("#divListaApelantes").show();
                    if (OrigenSegundaInstanciaConsulta == 1) {
                        $("#buscarTocaParaCargaApelantes").hide();
                    } else {
                        $("#buscarTocaParaCargaApelantes").show();
                    }
                }


                //         $("#divListaApelantes").show();
                $("#ltsApelantes").empty();
            } else if (muestra == "consulta") {
                $("#inputGuardar").hide();
                $("#inputEliminar").hide();
            }

            $("#inputEliminar").hide();
            $("#inputPDF").hide();
            $("#inputVisor").hide();
            
            
        };
        function obtenerPermisos() {
            var cveUsuarioSistema = cveUsuarioSesion;
            $.get("../archivos/" + cveUsuarioSistema + ".json",
                    function (response) {
                        //                    alert(response.perfiles[0].totPerfiles);
                        //                    alert(cvePerfilSesion);
                        for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                            if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                                //alert(response.perfiles[0].perfil[i].cvePerfil+"-"+"perfil encontrado..");
                                $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                    //alert(vnombre.nomFormulario);
                                    if (OrigenSegundaInstanciaConsulta == 1) {
                                        if (vnombre.nomFormulario == "SECRETARIO DE TRIBUNAL DE ALZADA") {
                                            var hijos = vnombre.hijos;
                                            $.each(hijos, function (k2, nombreHijo) {
                                                if (nombreHijo.nomFormulario == 'RESOLUCION') {
                                                    var permisoFormulario = nombreHijo.permisoFormulario[0];
                                                    createRecord = permisoFormulario.create;
                                                    readRecord = permisoFormulario.read;
                                                    updateRecord = permisoFormulario.update;
                                                    deleteRecord = permisoFormulario.delete;
                                                }
                                            });
                                        }
                                    } else {
                                        if (vnombre.nomFormulario == "PROYECTISTA") {
                                            var hijos = vnombre.hijos;
                                            $.each(hijos, function (k2, nombreHijo) {
                                                if (nombreHijo.nomFormulario == 'PROYECTOS DE RESOLUCION') {
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
                        //                    alert("insert: "+createRecord+" consulta: "+readRecord+" act: "+updateRecord+" elim: "+deleteRecord);

                        if (String(createRecord) === "S") {
                            $("#inputGuardar").show();
                        }
                        if (readRecord == "S") {
                            $("#inputConsultar").show();
                            if (OrigenSegundaInstanciaConsulta == 1) {
                                $("#inputConsultar").hide();
                            }
                        }
                        if (updateRecord == "S") {
                            // $("#inputGuardar").show();
                        }
                        //                    if (deleteRecord == "S") {
                        //                        $("#inputEliminar").show();
                        //                    }


                    });
        }
        //*********************************************************************************************************************
        (function (a) {
            a.fn.validaCampo = function (b) {
                a(this).on({keypress: function (a) {
                        var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                        (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                    }})
            }
        })(jQuery);
        //*********************************************************************************************************************

        buscarPromocion = function () {

            if ($('#buscaPromocion').prop('checked')) {
                var pag = 1; //$("#cmbPaginacion").val();
                var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
                var cantReg = 100; //$("#cmbNumReg").val();
                var cveJuzgado = $("#cmbJuzgado").val().split("/");
                var error = 0;
                var mensaje = "seleccione: ";
                if (cveTipoCarpeta == 9) {
                    cveTipoCarpeta = 0;
                } else {
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
                }

                if (error == 0) {
                    var strDatos = "accion=consultarResolucionApelacion";
                    strDatos += "&numero=" + $("#txtNumero").val();
                    strDatos += "&anio=" + $("#txtAnio").val();
                    strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
                    strDatos += "&cveTipoActuacion=1,13,17"; // busca solo promociones
                    strDatos += "&activo=S"; //actuaciones activas
                    strDatos += "&pag=" + pag;
                    strDatos += "&cantxPag=" + cantReg; // cantidad de registros a mostrar en paginacion
                    strDatos += "&cveJuzgado=" + cveJuzgado[0];
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
                                if(json.data[0].secreto == 'S'){
                                    $("#checkSecreto").prop("checked", true);
                                }
                                table += "<table id='tblResultadosGridAct' width='60%' height='175' cellspacing='0' cellpadding='0' border='0' align='center' >";
                                table += "<thead>";
                                table += "<tr>";
                                table += "<th>N&uacute;m.</th>";
                                table += "<th>Tipo</th>";
                                table += "<th>Sintesis</th>";
                                table += "<th>Estatus</th>";
                                table += "<th>Fecha Registro</th>";
                                table += "<th></th>";
                                table += "</tr>";
                                table += "</thead>";
                                table += "<tbody>";
                                for (var i = 0; i < json.total; i++) {
                                    //                            alert($("#hiddenIdActuacionPromocion").val()+" != "+json.data[i].idActuacion);
                                    if ($("#hiddenIdActuacionPromocion").val() != json.data[i].idActuacion) {
                                        if (json.data[i].cveTipoActuacion == "1" || json.data[i].cveTipoActuacion == "13" || json.data[i].cveTipoActuacion == "17") {
                                            //                            alert(json.data[i].cveEstatus);
                                            if (json.data[i].cveEstatus == "7") {
                                                table += "<tr  bgcolor='#EDF9E8' onmouseout='this.style.backgroundColor=\"#EDF9E8\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer; background-color: rgb(237, 249, 232);' >"; //onclick=\"consutaIdActuacion('" + json.data[i].idActuacion + "','" + json.data[i].sintesis + "',' " + json.data[i].numActuacion + "/" + json.data[i].aniActuacion + "')\"
                                            } else {
                                                table += "<tr bgcolor='#FFF' onmouseout='this.style.backgroundColor=\"#FFF\"' onmouseover='this.style.backgroundColor=\"#EDF9E8\"'>";
                                            }
                                            table += "<td > " + (i + 1) + "</td>";
                                            if (json.data[i].cveTipoCarpeta != "") {
                                                table += "<td>" + json.data[i].descTipoCarpeta + " - " + json.data[i].numero + "/" + json.data[i].anio + "</td>";
                                            } else {
                                                table += "<td> SIN RELACION </td>";
                                            }
                                            table += "<td>" + json.data[i].numActuacion + "/" + json.data[i].aniActuacion + " - " + json.data[i].sintesis + "</td>";
                                            table += "<td>" + json.data[i].descEstatus + "</td>";
                                            table += "<td>" + json.data[i].fechaRegistro + "</td>";
                                            if (json.data[i].cveEstatus == "8") {// si ya esta acordada poder eliminar
                                                table += "<td >";
                                                table += '<button class="btn btn-danger" onclick="eliminarAntecedeAcuerdo(' + json.data[i].idActuacion + ');" type="button">';
                                                table += '<span class="glyphicon glyphicon-trash " aria-hidden="true"></span>';
                                                table += '</button>';
                                                table += '</td>';
                                            } else {
                                                table += "<td > <input type='checkbox' name='radioAcuerdo' id='radioAcuerdo' value='" + json.data[i].idActuacion + "' > </td>";
                                            }
                                            table += "</tr> ";
                                        }
                                    }
                                    //                                                    alert(json.data[i].observaciones);
                                }


                                $("#divConsultaActuaciones").show();
                                $("#divTableResultActuaciones").show();
                                $("#divTableResultActuaciones").html(table);
                                //                    $("#tblResultadosGridAct").DataTable({
                                //                        paging: false
                                //                    });

                                //getPaginas(json.pagina, cantReg);
                                //changeDivFormAcuerdo(2);

                            } else {
                                $("#divAlertInfo").html('' + json.text);
                                $("#divAlertInfo").show("slide");
                                setTimeAlert("divAlertInfo");
                                $("#divConsultaActuaciones").hide();
                                $("#divTableResultActuaciones").html("");
                                $("#buscaPromocion").attr("checked", false);
                                $("#promocionSel").html("No se encontraron Promociones: ");
                            }


                        },
                        error: function (objeto, quepaso, otroobj) {
                            //                alert("Error en la peticion:\n\n" + quepaso);
                            $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                    });
                } else {
                    alert(mensaje);
                    $("#buscaPromocion").attr("checked", false);
                }
            } else {
                $("#divConsultaActuaciones").hide();
                $("#divTableResultActuaciones").hide();
                $("#divTableResultActuaciones").html("");
                $("#hiddenIdActuacionPromocion").val("");
                $("#promocionSel").html("No selecciono promoci&oacute;n");
            }

        };
        consutaIdActuacion = function (id, desTipoCarpeta, numPromocion) {
            // se asigna el idActiuacion del acuerdo
            $("#hiddenIdActuacionPromocion").val(id);
            $("#divConsultaActuaciones").hide();
            $("#divTableResultActuaciones").hide();
            $("#promocionSel").html("No. Promoci&oacute;n: " + numPromocion + " - " + desTipoCarpeta);
            if (procedencia == 1) {
                $("#inputConsultar").hide();
            }

        };
        buscarApelantes = function (origen) {
            $(".required").remove();
            var juzgado = $("#cmbJuzgado").val().split("/")[0];
            
            var tipoCarpeta = $("#cmbTipoCarpeta").val();
            
            var numero = $("#txtNumero").val();
            
            var Anio = $("#txtAnio").val();
            
            if (juzgado == 0 || tipoCarpeta == 0 || numero == "" || Anio == "") {
                if (juzgado == 0) {
                    $('#buscarTocaParaCargaApelantes').parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione un tribunal</label>");
                }
                if (tipoCarpeta == 0) {
                    $('#buscarTocaParaCargaApelantes').parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione el relacionado con...</label>");
                }
                if (numero == "") {
                    $('#buscarTocaParaCargaApelantes').parent().append("<br class='required'><label class='Arial13Rojo required'>Proporcione el n&uacute;mero</label>");
                }
                if (Anio == "") {
                    $('#buscarTocaParaCargaApelantes').parent().append("<br class='required'><label class='Arial13Rojo required'>Proporcione el a&ntilde;o</label>");
                }

            } else {
                $(".required").remove();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/resolucionapelacion/ResolucionApelacionFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        cveJuzgado: juzgado,
                        cveTipoCarpeta: tipoCarpeta,
                        numero: numero,
                        anio: Anio,
                        accion: "consultarApelantesPorCarpera"
                    },
                    beforeSend: function (datos) {
                    },
                    success: function (datos) {
                        if ((datos.totalCount > 0) && (datos.Estatus == "ok") && (datos.resultados[0].cveEstatusCarpeta != 2) && (typeof (datos.resultados[0].acuerdo[0]) != "undefined") && (datos.resultados[0].acuerdo[0].cveTipoEstatusRadicacion == 1)) {
                            if (datos.resultados[0].juzgador == 0) {
                                $("#inputGuardar").prop("disabled", true);
                                $("#divAlertInfo").html('NO EXISTE UN MAGISTRADO PONENTE ASIGNADO');
                                $("#divAlertInfo").show("slide");
                                setTimeAlert("divAlertInfo");
                                movermeA("divAlertInfo");
                            } else {
                                var listaApelantes = "<tr class=\"trGridAgrega\"><th>Nombre</th><th>Domicilio</th><th>Correo electr&oacute;nico</th></tr>";
                                $.each(datos.resultados, function (index, element) {
                                    $("#hiddenIdCarpetaJudicial").val(element.idCarpetaJudicial);
                                    $("#lblJuzgador").text(element.juzgador[0].titulo + " " + element.juzgador[0].paterno + " " + element.juzgador[0].materno + " " + element.juzgador[0].nombre);
                                    listaApelantes += "<tr>";
                                    listaApelantes += "<td>";
                                    if (element.cveTipoPersona == 1) {
                                        listaApelantes += element.nombre + " " + element.paterno + " " + element.materno;
                                    } else {
                                        listaApelantes += element.nombreMoral;
                                    }
                                    listaApelantes += "</td>";
                                    listaApelantes += "<td>";
                                    listaApelantes += element.domicilio;
                                    listaApelantes += "</td>";
                                    listaApelantes += "<td>";
                                    listaApelantes += element.email;
                                    listaApelantes += "</td>";
                                    listaApelantes += "</tr>";
                                });
                                $("#ltsApelantes").html(listaApelantes);
                                $("#inputGuardar").prop("disabled", false);
                            }
                        } else if (datos.Estatus == "fail") {
                            if ($("#hiddenasignaValoresArbol").val() == "") {
                                if (datos.mnj == "NO EXISTE LA TOCA") {
                                    $("#inputGuardar").prop("disabled", true);
                                    $("#divAlertInfo").html(datos.mnj);
                                    $("#divAlertInfo").show("slide");
                                    setTimeAlert("divAlertInfo");
                                    movermeA("divAlertInfo");
                                } else {
                                    var listaApelantes = "<tr class=\"trGridAgrega\"><th>Nombre</th><th>Domicilio</th><th>Correo electr&oacute;nico</th></tr>";
                                    $.each(datos.resultados, function (index, element) {
                                        $("#hiddenIdCarpetaJudicial").val(element.idCarpetaJudicial);
                                        listaApelantes += "<tr>";
                                        listaApelantes += "<td>";
                                        if (element.cveTipoPersona == 1) {
                                            listaApelantes += element.nombre + " " + element.paterno + " " + element.materno;
                                        } else {
                                            listaApelantes += element.nombreMoral;
                                        }
                                        listaApelantes += "</td>";
                                        listaApelantes += "<td>";
                                        listaApelantes += element.domicilio;
                                        listaApelantes += "</td>";
                                        listaApelantes += "<td>";
                                        listaApelantes += element.email;
                                        listaApelantes += "</td>";
                                        listaApelantes += "</tr>";
                                    });
                                    $("#ltsApelantes").html(listaApelantes);
                                    // codigo para cargar proyectistas
                                    cargarProyectistasModal(numero, Anio, tipoCarpeta, juzgado);
                                    //termina el codigo para cargar proyectistas
                                    //               $("#inputConsultar").click();
                                    if (datos.resultados[0].cveTipoSentencia == 8) {
                                        if (origen) {
                                            $("#inputGuardar").prop("disabled", true);
                                            $("#divAlertInfo").html('LA TOCA SE TERMINO POR OTROS MOTIVOS');
                                            $("#divAlertInfo").show("slide");
                                            setTimeAlert("divAlertInfo");
                                            movermeA("divAlertInfo");
                                        }
                                    } else {
                                        if (origen) {
                                            $("#inputGuardar").prop("disabled", false);
                                            $("#divAlertInfo").html('YA EXISTE UNA RESOLUCION DE APELACION PARA ESTA TOCA');
                                            $("#divAlertInfo").show("slide");
                                            setTimeAlert("divAlertInfo");
                                            movermeA("divAlertInfo");
                                        }
                                    }
                                }
                            }
                        } else if (datos.resultados[0].cveEstatusCarpeta == 2) {
                            $("#inputGuardar").prop("disabled", true);
                            $("#divAlertInfo").html('LA TOCA ESTA TERMINADA');
                            $("#divAlertInfo").show("slide");
                            setTimeAlert("divAlertInfo");
                            movermeA("divAlertInfo");
                        } else if ((typeof (datos.resultados[0].acuerdo[0]) == "undefined")) {
                            $("#inputGuardar").prop("disabled", true);
                            $("#divAlertInfo").html('NO EXISTE EL ACUERDO DE RADICACI&Oacute;N CON ESTATUS ADMITE Y PUBLICADO');
                            $("#divAlertInfo").show("slide");
                            setTimeAlert("divAlertInfo");
                            movermeA("divAlertInfo");
                        } else if ((typeof (datos.resultados[0].acuerdo[0].cveTipoEstatusRadicacion) != "undefined")) {
                            if ((typeof (datos.resultados[0].acuerdo[0].cveTipoEstatusRadicacion) != 1)) {
                                $("#inputGuardar").prop("disabled", true);
                                $("#divAlertInfo").html('NO EXISTE EL ACUERDO DE RADICACI&Oacute;N CON ESTATUS ADMITE Y PUBLICADO');
                                $("#divAlertInfo").show("slide");
                                setTimeAlert("divAlertInfo");
                                movermeA("divAlertInfo");
                            }
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {

                    }
                });
            }

        };

        cargarProyectistasModal = function(numero, Anio, tipoCarpeta, juzgado){
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/resolucionapelacion/ResolucionApelacionFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    idActuacion: $("#hiddenIdActuacion").val(),
                    cveJuzgado: juzgado,
                    cveTipoCarpeta: tipoCarpeta,
                    numero: numero,
                    anio: Anio,
                    accion: "consultarProyectistasCarpeta"
                },
                beforeSend: function (datos) {
                },
                success: function (datos) {
                    if(datos.Estatus == "ok"){
                        if(datos.totalCount > 0){
                            if(datos.magistrado != 'undefined'){
                                $("#hiddenUsuarioMagistrado").val(datos.magistrado.cveUsuario);
                                $("#hiddenResolucionPermiso").val(datos.magistrado.idResolucionPermiso);
                            }
                            var html = "<div class=''><table class='table table-bordered table-stripped'><thead><th>Proyectista</th><th>Elegir</th></thead>";
                            $.each(datos.resultados,function(key, value){
                                var checked = "";
                                if(value.idResolucionPermiso != ""){
                                    checked = "checked";
                                }
                                html += "<tr>";
                                html += "<td>"+value.nombreUsuario+"</td><td><input type='checkbox' "+checked+" idresolucionpermiso='"+value.idResolucionPermiso+"'  value='"+value.cveUsuarioProyectista+"' id='check"+value.cveUsuarioProyectista+"' class='checkproy'></td>";
                                html += "</tr>";
                            });
                            html += "</table></div>";
                            console.log(html);
                            $("#proyectistas").html(html);
                        }else{
                            $("#proyectistas").html("No hay personal asignado al magistrado ponente");
                        }
                    }else{
                        $("#proyectistas").html("No hay personal asignado al magistrado ponente");
                    }
                   
                },
                error: function (objeto, quepaso, otroobj) {

                }
            });
        }

        verificarTipoActuacion = function (idActuacionPadre, idReferencia, cveTipoCarpeta) {

            var strDatos = "accion=seleccionar";
            strDatos += "&idActuacion=" + idActuacionPadre; // busca solo promociones
            strDatos += "&activo=S"; //actuaciones activas

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

                    //                    alert(datos);

                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                         if(json.data[0].secreto == 'S'){
                            $("#checkSecreto").prop("checked", true);
                        }
                        if (json.data[0].cveTipoActuacion == "1" || json.data[0].cveTipoActuacion == "13" || json.data[0].cveTipoActuacion == "17") {

                            consutaIdActuacion(json.data[0].idActuacion, json.data[0].Sintesis, json.data[0].numActuacion + "/" + json.data[0].aniActuacion);
                            valorJuzgado(json.data[0].cveJuzgado);
                            $("#cmbJuzgado").val();
                            $("#txtNumero").val(json.data[0].numero);
                            $("#txtAnio").val(json.data[0].anio);
                            setTimeout(function () {
                                //                         alert("muestra datos actuacion..");
                                $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                            }, 1000);
                            muestraEstatus(idActuacionPadre);
                        } else {
                            table += "<table id='tblResultadosGridAct' width='60%' height='175' cellspacing='0' cellpadding='0' border='0' align='center' >";
                            table += "<tr bgcolor='#EA6E6E'>";
                            table += "<td>La actuacion seleccionada para acordar debe ser promocion, promocion de termino o promocion que genera carpeta judicializada </td>";
                            table += "</tr>";
                            table += "</table>";
                            $("#divFormulario").hide();
                            $("#divActuacionNOvalida").show();
                            $("#divActuacionNOvalida").html(table);
                        }





                    } else {
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                        $("#divConsultaActuaciones").hide();
                        $("#divTableResultActuaciones").html("");
                        $("#buscaPromocion").attr("checked", false);
                        $("#promocionSel").html("No se encontro la promocion intente mas tarde: ");
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
        function consultarPermisosSecrecia(cveUsuarioSesion){
            var info = "";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/resolucionapelacion/ResolucionApelacionFacade.Class.php",
                data: {
                        cveUsuarioSesion: cveUsuarioSesion,
                        idActuacion: $("#hiddenIdActuacion").val(),
                        // idCarpetaJudicial: $("#hiddenIdCarpetaJudicial").val(),
                        accion: "consultarPermisosSecrecia"
                    },
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    info = datos;
                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
            return info;
        }

        $(function () {
            cargaInstancia();
            $("#cmbJuzgado, #cmbTipoCarpeta").on("change", function () {
                $("#ltsApelantes").empty();
                $(".required").remove();
            });
            $("#txtNumero, #txtAnio").on("keyup", function () {
                $("#ltsApelantes").empty();
            });
            $("#txtNumero").validaCampo('0123456789');
            $("#txtAnio").validaCampo('0123456789');
            $("#txtfechaInicial").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            $("#txtfechaFinal").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            //        cargaTipoCarpeta();
            //      cargaResolucion();
            cargaNotificacion();
            cargaEstatus();
            cargaJuzgados();
            cargaJuzgadores();
            cargaFuncionMagistrado();
            if($("#cmbJuzgado").val().split("/")[1] == 8){
                $("#magistradoColegiada").hide();
            }
            cargaSentencias();
            if (procedencia == 1) { // si viene del arbol idActuacionArbol idCarpetaJudicialArbol
                //         alert("HOLA");
                if ($("#hiddenidActuacionPadre").val() != 0 && $("#hiddenidActuacionPadre").val() != "") {
                    // verificar que sea una de los 3 tipos de promocion
                    verificarTipoActuacion($("#hiddenidActuacionPadre").val(), $("#hiddenIdCarpetaJudicial").val(), $("#hiddenCveTipoCarpeta").val());
                }
                if ($("#hiddenIdActuacion").val() != 0 && $("#hiddenIdActuacion").val() != "") {
                    setTimeout(function () {
                        //                         alert("muestra datos actuacion..");
                        consutaIdAcuerdo($("#hiddenIdActuacion").val(), "");

                    }, 1000);
                    //                consutaIdAcuerdo($("#hiddenIdActuacion").val(), "");
                } else if ($("#hiddenIdCarpetaJudicial").val() != 0 && $("#hiddenIdCarpetaJudicial").val() != "") {
                    setTimeout(function () {
                        //                         alert("muestra datos actuacion..");
                        consultaCarpetaJud($("#hiddenIdCarpetaJudicial").val(), $("#hiddenCveTipoCarpeta").val());
                    }, 1000);
                    //                consultaCarpetaJud($("#hiddenIdCarpetaJudicial").val(),$("#hiddenCveTipoCarpeta").val());
                }

            }

           // obtenerPermisos();
            $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate', function (e) {
                $(this).datepicker('hide');
            });
            if (OrigenSegundaInstanciaConsulta == 1) {
                consultar();
                $("#inputConsultar").hide();
            }
            // editor de texto
            editor = UE.getEditor('Sintesis');
            editor.ready(function () {
                editor.setContent();
            });
            
        $(".cmbFuncion").on("change",function(){
            if(this.value != 0){
                
                $("#cmbFuncionMagistrado1 [value="+this.value+"]").attr("disabled", true);
                $("#cmbFuncionMagistrado2 [value="+this.value+"]").attr("disabled", true);
                $("#cmbFuncionMagistrado3 [value="+this.value+"]").attr("disabled", true);
            }
            $("#"+$(this).attr("id")+" [value="+this.value+"]").attr("disabled", false);
            activarComboFuncion();
        });
        $(".cmbMagistrado").on("change",function(){
            if(this.value != 0){
                $("#cmbJuzgadores1 [value="+this.value+"]").attr("disabled", true);
                $("#cmbJuzgadores2 [value="+this.value+"]").attr("disabled", true);
                $("#cmbJuzgadores3 [value="+this.value+"]").attr("disabled", true);
            }
            $("#"+$(this).attr("id")+" [value="+this.value+"]").attr("disabled", false);
            activarComboMagistrado();
        });
        function activarComboFuncion(){
            var arrFunc = [];
            if($("#cmbFuncionMagistrado1").val() != 0){
                arrFunc.push($("#cmbFuncionMagistrado1").val());
            }
            if($("#cmbFuncionMagistrado2").val() != 0){
                arrFunc.push($("#cmbFuncionMagistrado2").val());
            }
            if($("#cmbFuncionMagistrado3").val() != 0){
                arrFunc.push($("#cmbFuncionMagistrado3").val());
            }
            $(".cmbFuncion").each(function(){
                $(this).children().each(function(){
                    if($.inArray(this.value , arrFunc) == -1){
                        $(this).attr("disabled", false);
                    }
                });
            });
            
        }
        function activarComboMagistrado(){
            var arrFunc = [];
            if($("#cmbJuzgadores1").val() != 0){
                arrFunc.push($("#cmbJuzgadores1").val());
            }
            if($("#cmbJuzgadores2").val() != 0){
                arrFunc.push($("#cmbJuzgadores2").val());
            }
            if($("#cmbJuzgadores3").val() != 0){
                arrFunc.push($("#cmbJuzgadores3").val());
            }
            $(".cmbMagistrado").each(function(){
                $(this).children().each(function(){
                    if($.inArray(this.value , arrFunc) == -1){
                        $(this).attr("disabled", false);
                    }
                });
            });
            
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