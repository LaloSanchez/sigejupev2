<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
date_default_timezone_set('America/Mexico_City');



$idActuacionArbol = "";
$idCarpetaJudicialArbol = "";
$cveTipoCarpetaArbol = "";
$procedencia = 0;
$cveJuzgadoOrigenArbol = "";
    if (isset($_POST['idActuacionPadre'])) {
        $idActuacionArbol = @$_POST['idActuacionPadre'];
    }

    if (isset($_POST['idActuacion'])) {
        $idActuacionArbol = @$_POST['idActuacion'];
    }
    if (isset($_POST['idReferencia'])) {
        $idCarpetaJudicialArbol = @$_POST['idReferencia'];
    }
    if (isset($_POST['idCarpetaJudicial'])) {
        $idCarpetaJudicialArbol = @$_POST['idCarpetaJudicial'];
    }
    if (isset($_POST['cveTipoCarpeta'])) {
        $cveTipoCarpetaArbol = @$_POST['cveTipoCarpeta'];
    }
    if (isset($_POST['juzgadoOrigenArbol'])) {
       $cveJuzgadoOrigenArbol = @$_POST['juzgadoOrigenArbol'];
    }
////
//$idActuacionArbol=313;
//$idCarpetaJudicialArbol=34765;
//$cveTipoCarpetaArbol=2;        
        

    if (($idActuacionArbol != 0 && $idActuacionArbol != "") && ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "")) {
        $procedencia = 1; // viene de arbol
    } else {
        $procedencia = 0; // formulario general
        if (($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "")) {
            $procedencia = 2; // viene de arbol
        } else {
            $procedencia = 0; // formulario general
        }
    }
    
?>
<link href="../vistas/css/generalStyles.css" rel="stylesheet" />

<style>
    .modal-backdrop.fade.in {
    z-index: 0;
}
    .trGridAgrega{
        color: #ffffff;
        background-color: #881518;
    }
    #sombra{
        width:100%;
        height: 100%;
        position: fixed;
        background-color: black;
        top:0px;
        left:0px;
        z-index: 2;
    }

    #contsomb{
        width:100%;
        position: fixed;
        background-color: black;
        top:0px;
        left:0px;
        z-index: 2;
    }
    #contscroll{
        width:100%;
        height:400px;
        z-index: 2;
        overflow-y: scroll;
    }

    .fc-event-title{
        font-size: 9px !important;
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

    .manita{
        cursor: pointer;
    }
    .err{
        color: red;
    }
</style>
<input type="hidden" id="hiddencveJuzgadoOrigenArbol" value="<?php echo $cveJuzgadoOrigenArbol; ?>" >
<input type="hidden" id="hiddencveAdcripcion" value="<?php echo $_SESSION['cveAdscripcion']; ?>" >
<input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>" >
<input type="hidden" id="hiddenIdReferencia" value="<?php echo $idCarpetaJudicialArbol; ?>" >
<input type="hidden" id="hiddenCveTipoCarpeta" value="<?php echo $cveTipoCarpetaArbol; ?>" >

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

<div id="sombra" style="display: none">

</div>

<div id="contsomb" style="display:none">

    <br><br>
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="col-sm-12" id="infcr" >
                </div>
            </div>
            <div class="panel-footer"><center> <button class="btn btn-primary"  onclick="$('#sombra').hide(), $('#contsomb').hide()">Cerrar</button></center></div>
        </div>
    </div>
    <div class="col-sm-2">

    </div>
</div>

<div class="panel panel-default form-horizontal" id="consultas" style="display:none">
    <div class="panel-heading">
        <h5 class="panel-title">                                                            
            Sentencias  / B&uacute;squeda.                         
        </h5>

    </div>

    <div class="panel-body">

        <div clas="col-sm-12">
            <br>
            <div class="col-xs-1 col-sm-12">                       
                <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="panelaltas()" style="display: block">                                    

            </div>
        </div>
        <div class="col-sm-12" id="divconsgn">
            
            <div class="form-group">
                <label class="control-label col-md-3 needed" id="label_actam_text1">Juzgado:</label>
                <div class="col-md-9">
                    <select class="form-control Relacionado" name="cmbdistrito2" id="cmbdistrito2" onchange="cargaTipoCarpeta2();">
<!--                        <option value="0"><b>SELECCIONE UNA OPCI&Oacute;N</b></option>-->
                    </select>   </div>
            </div>
            
            <div class="form-group">
                <label class="control-label col-md-3 needed" id="label_actam_text1">Relacionado con:</label>
                <div class="col-md-9">
                    <select class="form-control Relacionado" name="cmbTipoCarpeta2" id="cmbTipoCarpeta2" onchange="cambiartextoconsulta()">
                        <option value="0"><b>Seleccione una opcion</b></option>
                    </select>   </div>
            </div>



            <div class="form-group">
                <label class="control-label col-md-3 needed" id="label_actam_text1"> No de Causa:</label>
                <div class="col-md-9">
                    <input type="text" id="txtNumero2" onkeypress="return valida(event)" maxlength="4" placeholder="N&Uacute;MERO" class="form-inline" />
                    /
                    <input type="text"  id="txtAnio2" onkeypress="return valida(event)"  maxlength="4" placeholder="A&Ntilde;O" class="form-inline"/>
                    <span id="errnumca" class="err" style="display:none"><br>Este campo es obligatorio.</span>
                </div>
            </div>
            
              <div class="form-group" style="display:none;">
                <label class="control-label col-md-3 needed" id="label_actam_text1"> No de Sentencia:</label>
                <div class="col-md-9">
                    <input type="text" id="nusentencia" onkeypress="return valida(event)" maxlength="4" placeholder="N&Uacute;MERO" class="form-inline" />
                    /
                    <input type="text"  id="asentencia" onkeypress="return valida(event)"  maxlength="4" placeholder="A&Ntilde;O" class="form-inline"/>
                    
                </div>
            </div>   




            <div class="form-group">
                <div class="col-md-12">

                    <label class="control-label col-md-3" id="lblRelationName">Fecha Inicial:</label>

                    <div class="col-md-3">
                        <input type="text" id="fdinicon" placeholder="Fecha de Sentencia" class="form-control datepicker" value="<?= date("d/m/Y") ?>" readonly data-date-format="dd/mm/yyyy"/> 
                    </div>
                    <label class="control-label col-md-3" id="lblRelationName">Fecha Final:</label>
                    <div class="col-md-3">
                        <input type="text" id="ffincon" placeholder="Fecha final" class="form-control datepicker" value="<?= date("d/m/Y") ?>" readonly data-date-format="dd/mm/yyyy"/>
                    </div>
                    
                    
                    
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">

                    <label class="control-label col-md-6" id="lblRelationName">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nota: La consulta se realiza en base a la fecha de la sentencia.</label>
                    
                    
                    
                </div>
            </div>

            <div class="container">
                <div class="form-horizontal" >
                    <div class="form-group">


                        <div class="alert alert-info alert-dismissable" id="infocg" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Informaci&oacute;n!</strong> Mensaje
                        </div>

                    </div></div></div>

            <div class="form-group">
                <div class="col-md-offset-3 col-md-9">
                    <div class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" id="inputBuscar" value="Buscar" onclick="consultasgenerales(2)" ></div>

                    <div class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiarBusqueda();"></div>

                </div>
            </div>
            <div class="alert alert-info alert-dismissable" id="infocg2" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Informaci&oacute;n!</strong> No se puede eliminar
                        </div>
        </div>

        <div class="row" id="tablrescg">

            <div id="divConsulta"  class="col-xs-12" style="display:none">
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary" id="inputRegresarp2" value="Regresar" onclick="regeresar2()" style="display: none">                                             
                </div>

                <div class="form-group col-xs-2" style="padding: 10px">
                    <label class="control-label" id="totalReg"></label>
                </div>

                <div id="divPaginador" class="form-group col-xs-2" >
                    <label class="control-label">Pagina:</label>
                    <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultasgenerales(1)">
                        <option value="10">10</option>
                    </select>
                </div>

                <div id="divPaginador" class="form-group col-xs-4" >
                    <label class="control-label">Registros por p&aacute;gina:</label>
                    <select  name="cmbNumReg" id="cmbNumReg" onchange="consultasgenerales(2)">
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

        <div id="tablaccdv" class="col-sm-12">

        </div>

    </div>

    <br><br>
    <div>

    </div>
</div>
</div>
</div>

<div class="panel panel-default" id="psanc" style="display:none">
    <div class="panel-heading">
        <h5 class="panel-title">                                                            
            Sanciones.                          
        </h5>
    </div>
    <br>
    &nbsp;&nbsp;<button class="btn btn-primary" onclick="$('#psanc').hide(), $('#altas').show()">Regresar</button>

    <center> <label class="control-label needed" id="sinimp">Sin imputados.</label></center>

    <br><div class="container">


        <div id="divsentenciados" class="form-horizontal" style="display:none">
        </div>

        <br>
        <br>      

        <div class="form-group">

            <div class="alert alert-success alert-dismissable" id="correctosanc" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Correcto!</strong> Mensaje
            </div>

            <div class="alert alert-danger alert-dismissable" id="errorsanc" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Error!</strong> Mensaje
            </div>

            <div class="alert alert-info alert-dismissable" id="infosanc" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Informaci&oacute;n!</strong> Mensaje
            </div>


            <div class="alert alert-warning alert-dismissable" id="advertencia" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Advertencia!</strong> Mensaje
            </div>

            <div class="alert alert-success alert-dismissable" id="correcto" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Correcto!</strong> Mensaje
            </div>

            <div class="alert alert-danger alert-dismissable" id="error" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Error!</strong> Mensaje
            </div>

            <div class="alert alert-info alert-dismissable" id="info" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Informaci&oacute;n!</strong> Mensaje
            </div>
        </div>

    </div>
    <!--</div>-->

</div>

<div class="panel panel-default" id="altas">
    <div class="panel-heading">
        <h5 class="panel-title">                                                            
            Sentencias.                          
        </h5>
    </div>



    <br>
    <div  class="form-horizontal panel-body"  data-step="1" data-intro="Este m&oacute;dulo le permite registrar una nueva sentencia, el cual puede ser modificado y/o eliminado." data-position='left'>

        
        <div class="form-group"> 
            <label class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'>Juzgado <label style='color:darkred'>(*)</label></label>
            <div class="col-md-9" id="dis">
                <select class="form-control" name="cmbdistrito" id="cmbdistrito" onchange="cargaTipoCarpeta();">
                    
                </select>
            </div>
        </div>
        
        <div class="form-group"> 
            <label class="control-label col-md-3 needed">Tipo de Causa <label style='color:darkred'>(*)</label></label>
            <div class="col-md-9" id="divtpcar">
                <select id="tipscarpts" class="form-control"></select></div><span id="errtipcausa" class="err" style="display:none"><br>Este campo es obligatorio.</span>
            </div>


        <div class="form-group">
           <label class="control-label col-md-3 needed">Numero de <span id="textcausa">Causa</span>  <label style='color:darkred'>(*)</label></label>
            <div class="col-md-9">
                <input type="text" id="numer" maxlength="4" placeholder="N&Uacute;MERO" class="form-inline" />
                /
                <input type="text"  id="anio" onkeypress="return valida(event)"  maxlength="4" placeholder="A&Ntilde;O" class="form-inline"/>
                <span id="errnumca" class="err" style="display:none"><br>Este campo es obligatorio.</span>
                <button id="btnconinm" class="btn btn-primary" onclick="consultarimputados(1)">Buscar imputado(s)</button>
                    
            </div>
            
        </div>

    <div class="form-group"> 
                <label class="control-label col-md-3 needed">Imputado/ofendido/delito <label style='color:darkred'>(*)</label></label>
                <div class="col-md-9 " id="divtbpr">

                      </div>  
        </div>
                                   
        
          


         <div class="container">
            <div class="form-group form-horizontal" > 
            <div class="alert alert-info alert-dismissable" id="info2" style="display: none;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Informaci&oacute;n!</strong> Mensaje
            </div></div>
        </div> 

 

    <div id="divsentenciagenera" class="form-horizontal panel-body" >
        <div class="form-group" style="display:none"> 
          <label class="control-label col-md-3 needed">Numero de Sentencia </label>
            <div class="col-md-9">
                <input type="text" onkeypress="return valida(event)" id="na1" readonly maxlength="4" placeholder="N&Uacute;MERO" class="form-inline" />
                /
                <input type="text"   nkeypress="return valida(event)" id="aa1" readonly  onkeypress="return valida(event)"  maxlength="4" placeholder="A&Ntilde;O" class="form-inline"/>
                <span id="errnumca" class="err" style="display:none"><br>Este campo es obligatorio.</span>
            </div><input type="text" id="idnumactua" readonly style="display:none">

        </div>


        <div class="form-group"> 
           <label class="control-label col-md-3 needed">Sentido de la resoluci&oacute;n <label style='color:darkred'>(*)</label></label>
            <div class="col-md-9" id="divselsentencias1">
            </div>
            <span id="errnsent" class="err" style="display:none">Este campo es obligatorio.</span>
        </div>

        <div class="form-group"> 
           <label class="control-label col-md-3 needed">Estatus de Sentencia <label style='color:darkred'>(*)</label></label>
            <div class="col-md-9" id="divstatsent">
            </div>
            <span id="errstatsen" class="err" style="display:none">Este campo es obligatorio.</span>
        </div>





        <div class="form-group"> 
          <label class="control-label col-md-3 needed">Tipo de Procedimiento <label style='color:darkred'>(*)</label></label>
            <div class="col-md-9" id="divselproced1">
            </div>
            <span id="errtpp" class="err" style="display:none">Este campo es obligatorio.</span>
        </div>



        <div class="form-group"> 
           <label class="control-label col-md-3 needed"></label>
            <div class="col-md-9" >





                <div class="panel-group" id="accordion">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsej" >Jueces</a>
                            </h4>
                        </div>
                        <div id="collapsej" class="panel-collapse collapse">
                            <div class="panel-body">

                                <div class="form-group"> 
                                    <label class="control-label col-md-3 needed" >Juez <label style='color:darkred'>(*)</label></label>
                                    <div class="col-md-9" id="divjueces">
                                </div>
                                </div>
                                <div class="alert alert-info alert-dismissable" id="infjuectb" style="display: none;">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Informaci&oacute;n!</strong> Mensaje
                                </div>
                                <div id="conttabjuecs">


                                </div>

                                <div class="form-group">




                                </div>



                            </div>
                        </div>



                    </div>
                    <span id="errseljuez" class="err" style="display:none">Este campo es obligatorio.</span>
                </div>

            </div>

        </div> 








        <div class="form-group"> 
            <label class="control-label col-md-3 needed">Fecha de Sentencia <label style='color:darkred'>(*)</label></label>
            <div class="col-md-7">
                <input type="text" class="input-sm"  id="fdsen1" readonly value="<?= date('d/m/Y') ?>">

            </div>
            <span id="errfecs" class="err" style="display:none"><br>Este campo es obligatorio.</span>
        </div>



        <div class="form-group"> 
            <label class="control-label col-md-3 needed">Fecha de Ejecuci&oacuten <label style='color:darkred'>(*)</label></label>
            <div class="col-md-7">
                <input type="text" class="input-sm" id="fejec1" value="<?= date('d/m/Y') ?>"  readonly>

            </div>
            <span id="errfejec" class="err" style="display:none"><br>Este campo es obligatorio.</span>
        </div>



        <div class="form-group"> 
            <label class="control-label col-md-3 needed">S&iacute;ntesis <label style='color:darkred'>(*)</label></label>
            <div class="col-md-9">
                <textarea id="sintesis" style="width:100%" onkeyup="mayusculas(this)"></textarea>

            </div>
            <span id="errsint" class="err" style="display:none">Este campo es obligatorio.</span>
        </div>

             <div class="form-group"> 
            <label class="control-label col-md-3">Contenido del documento<label style="color:darkred">(*)</label></label>
            <div class="col-md-9"> 
              
                <script id="txtNotas" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>                 
                               
            </div>
            <span id="errconts" class="err" style="display:none">Este campo es obligatorio.</span>
        </div>

        <div class="container">
            <div class="form-group form-horizontal" > 

                <div class="alert alert-success alert-dismissable" id="correcguardado" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Correcto!</strong> Mensaje
                </div>

                <div class="alert alert-info alert-dismissable" id="infosr" style="display: none;">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong>Informaci&oacute;n!</strong> Mensaje
                </div>
            </div>
        </div>

        <div class="form-group"> 
            <div class="col-sm-2"></div>

          

            <div class="col-sm-2"></div>
            <div id="divAlertSucces" class="alert alert-success alert-dismissable">

                    <strong>Correcto!</strong> Mensaje
                </div>
            <div class="col-md-offset-3 col-md-7" id="btnssentencia" ><br>

                <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar una sentencia." data-position='top'><button onclick="guardaractuacion(1)" id="guardar" class="btn btn-primary btn-adaptar" style="display: none">Guardar</button></div>
                <div class="col-md-2 botonesAdaptar" ><a id="limpiarParaBotones" class="btn btn-primary btn-adaptar" href="#noir" onclick="limpiarcons()" >Limpiar</a></div>
                <div class="col-md-2 botonesAdaptar" data-step="4" data-intro="De clic para buscar una sentencia." data-position='top'><button class="btn btn-primary btn-adaptar" onclick="panelconsultas()" id="consultarimputados" style="display: none">Consultar</button></div>
                <div class="col-md-2 botonesAdaptar" ><button class="btn btn-primary btn-adaptar" onclick="consultarbeneficios()" id="eliminar" style="display:none">Eliminar</button></div>
                <div class="col-md-2 botonesAdaptar">                        
                <button class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" >Visor</button>
                </div>
                <div class="col-md-2 botonesAdaptar">                        
                <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="enviar();" style="display: none">Generar PDF</button>
                </div>
            </div>


            <div class="col-sm-12">


<script type="text/javascript">
    var instancia = null;
    var procedencia = <?php echo $procedencia; ?>;    
    var juzgadoSesion = "<?php echo $_SESSION['cveAdscripcion']; ?>";
    var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
    var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
    var createRecord = 'N';
    var readRecord = 'N';
    var updateRecord = 'N';
    var deleteRecord = 'N';
    
    
    var acordion2 = "";
    var estatus=[];
    var contadorestatus=0;
    var idImpOfeglobal = 0;
    var totalglobal = 0;
    var cualglobal = 0;
    var consdelglobal = 0;
    var consgl2 = 0;
    var cualseltr = 0;
    var aa;
    var bb;
    var cc;
    var editorbloqueo="";
    var editorbloqueo2="";
    var sientra=0;
    var limpiararbolestatus="";
    ///
    var contadorapelacionestabla = 0;
    var listadoapelacionestabla = [];
    var listadosalas=[];
    var nombresentido = [];
    var ntoca = [];
    var atoca = [];
    var nombresala = [];
    var idseliminaapelacion = [];
    ///
    var contadordejueces = 0;
    var listadojueces = [];
    var idselim = [];
    var banderaexistenbase = 0;
    var contadorexistenbase = 0;
    var nombrejuez = [];
    var arrayinsert = [];
    var contadorarray = 0;
    var arraybeneficios = [];
    var contadorbeneficios = 0;
    var checkedagregado = [];
    var contdarsel = 0;
    var arraddsen = [];
    var apelaciones = [];
    var contadorapelaciones = 0;
    var acordeon2 = '';
    
    if (editor != undefined) {
        editor.destroy();
        editor.disabled=true;
    } else {

    }
    var editor = null;
    
    apelaciones[contadorapelaciones] = new Array(7);
    apelaciones[contadorapelaciones][0] = 0;
    apelaciones[contadorapelaciones][1] = 0;
    apelaciones[contadorapelaciones][2] = 0;
    apelaciones[contadorapelaciones][3] = 0;
    apelaciones[contadorapelaciones][4] = 0;
    apelaciones[contadorapelaciones][5] = 0;
    apelaciones[contadorapelaciones][6] = 0;

    //distrito();
    contadorapelaciones++;
    //Funcion para limpiar datos
    function limpiarglobales() {
        sientra=0;
        estatus=[];
        j = 0;
        
        estatus="";
        idImpOfeglobal = 0;
        totalglobal = 0;
        cualglobal = 0;
        consdelglobal = 0;
        consgl2 = 0;
        cualseltr = 0;
        contadordejueces = 0;
        /////////////
        contadorapelacionestabla = 0;
        listadoapelacionestabla = [];
        listadosalas=[];
        nombresentido=[];
        ntoca = [];
        atoca = [];
        nombresala = [];
        idseliminaapelacion = [];
        editorbloqueo="";
        editorbloqueo2="";
        /////////////
        listadojueces = [];
        idselim = [];
        banderaexistenbase = 0;
        contadorexistenbase = 0;
        nombrejuez = [];
        
        arrayinsert = [];
        contadorarray = 0;
        arraybeneficios = [];
        contadorbeneficios = 0;
        checkedagregado = [];
        contdarsel = 0;
        arraddsen = [];
        acordeon2 = '';
        acordion2 = "";
        
        $('#errnsent').hide();
        $('#errtpp').hide();
        $('#errfecs').hide();
        $('#errseljuez').hide();
        $('#errstats').hide();
        $('#errstatsen').hide();
        $('#errfejec').hide();
        $('#errsint').hide();
        $('#errsanc').hide();
        $('#erramones').hide();
        $('#errcmulta').hide();
        $('#errconts').hide();

        $('#erranios').hide();
        $('#errmeses').hide();
        $('#errdias').hide();

        $('#errcantrep').hide();

        $('#errimputado').hide();
        $('#txtNotas *').prop('disabled',true);
    }
    //Fin de limpiar datos
    //Limpiar datos cuando esten en el arbol
    function limpiardatosdelarbol(){
        totalcheck = 0;
        contadorestatus=0;
        apelaciones = [];
        contadorapelaciones = 0;
        apelaciones[contadorapelaciones] = new Array(7);
        apelaciones[contadorapelaciones][0] = 0;
        apelaciones[contadorapelaciones][1] = 0;
        apelaciones[contadorapelaciones][2] = 0;
        apelaciones[contadorapelaciones][3] = 0;
        apelaciones[contadorapelaciones][4] = 0;
        apelaciones[contadorapelaciones][5] = 0;
        apelaciones[contadorapelaciones][6] = 0;
        contadorapelaciones++;        
    }
    //Fin de limpiar datos cuando esten en el arbol
 
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

    
    function cargaTipoCarpeta() {
        $('#tipscarpts').empty();
        var tipoJuzgado = $("#cmbdistrito").val().split("/");
//        alert(tipoJuzgado[1]);
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
                     $("#tipscarpts").append($('<option></option>').val(0).html("SELECCIONE UNA OPCI&Oacute;N"));
                    for (var i = 0; i < json.totalCount; i++) {
                        switch(tipoJuzgado[1]){
                            case "1": // tipo de juzgado de control
                                if(json.data[i].cveTipoCarpeta == "2"){ // exhorto, amparo
                                    $("#tipscarpts").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            break;
                            case "2": // tipo de juzgado juicio
                                if(json.data[i].cveTipoCarpeta == "3"){ // exhorto, amparo 
                                    $("#tipscarpts").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            break;
                            case "3": // tipo de juzgado ejecucion
                                if(json.data[i].cveTipoCarpeta == "5" ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                    $("#tipscarpts").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            break;
                            case "4": // tipo de juzgado tribunal
                                if(json.data[i].cveTipoCarpeta == "4" ){ // exhorto, amparo 
                                    $("#tipscarpts").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            break;
                            case "5": // verificar queda pendiente*************************
//                                if(json.data[i].cveTipoCarpeta == "4"){ // tipo carpeta causa de juicio
//                                    $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
//                                }
                            break;
                        }    
                    }
                    //$("#tipscarpts").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                }
                //$('#divCmbRelaciones').hide();
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion:\n\n" + quepaso);
//                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
//                $("#divAlertDager").show("slide");
//                setTimeAlert("divAlertDager");
            }
        }); 
//        $( "#cmbdistrito2" ).click(function() {
//            $("#cmbdistrito2").val(ee);
//          });
//        alert(ee);

//        $("#cmbdistrito").combobox({
//            change: function(event, ui) { 
                //$("#cmbdistrito2").val(ee);
//            }
//        });
    }
    
    
//    $(function () {
//        
//    });
    
    $(function () {
        cargaInstancia();
//        cargaTipoCarpeta();
        cargaJuzgados();
        cargaJuzgados2();
        //function1
        
        $("#cmbdistrito").change(function () {
            var ee=$("#cmbdistrito").val();
            $("#cmbdistrito2").val(ee);
            cargaTipoCarpeta2();                
        });
        
        $("#cmbdistrito2").change(function () {
            var ee=$("#cmbdistrito2").val();
            $("#cmbdistrito").val(ee);
            cargaTipoCarpeta();                
        });
    });
    
        
    function cargaJuzgados() {
        var strDatos = "accion=distrito";
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
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
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
                        if(json.data[i].cveTipojuzgado!=3)
                        {
                            $("#cmbdistrito").append($('<option></option>').val(json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                        }
//                        alert(json.data[i].cveInstancia);
//                        alert(instancia);
                        if (json.data[i].cveInstancia == instancia) {
                        if(juzgadoSesion == json.data[i].cveJuzgado){
                            if(json.data[i].cveTipojuzgado!=3)
                            {                                
                                $("#cmbdistrito option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");                        
                            }
                        }    
                        }else{
                           $("#guardar").parent().hide();
                           $("#limpiarParaBotones").parent().hide();
                           $("#inputPDF").parent().hide();
                    }
                }
                }
                cargaTipoCarpeta();
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion:\n\n" + quepaso);
//                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
//                $("#divAlertDager").show("slide");
//                setTimeAlert("divAlertDager");
            }
        });
        
    }
    
    function cargaTipoCarpeta2() {
        $('#cmbTipoCarpeta2').empty();
        var tipoJuzgado = $("#cmbdistrito2").val().split("/");
//        alert(tipoJuzgado[1]);
    
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
                     $("#cmbTipoCarpeta2").append($('<option></option>').val(0).html("SELECCIONE UNA OPCI&Oacute;N"));
                    for (var i = 0; i < json.totalCount; i++) {
                        switch(tipoJuzgado[1]){
                            case "1": // tipo de juzgado de control
                                if(json.data[i].cveTipoCarpeta == "2"){ // exhorto, amparo
                                    $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            break;
                            case "2": // tipo de juzgado juicio
                                if(json.data[i].cveTipoCarpeta == "3"){ // exhorto, amparo 
                                    $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            break;
                            case "3": // tipo de juzgado ejecucion
                                if(json.data[i].cveTipoCarpeta == "5" ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                    $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            break;
                            case "4": // tipo de juzgado tribunal
                                if(json.data[i].cveTipoCarpeta == "4" ){ // exhorto, amparo 
                                    $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            break;
                            case "5": // verificar queda pendiente*************************
//                                if(json.data[i].cveTipoCarpeta == "4"){ // tipo carpeta causa de juicio
//                                    $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
//                                }
                            break;
                        }    
                        
                    }
                    //$("#cmbTipoCarpeta2").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                }
                //$('#divCmbRelaciones').hide();

            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion:\n\n" + quepaso);
//                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
//                $("#divAlertDager").show("slide");
//                setTimeAlert("divAlertDager");
            }
        });
        
//        var ee=$("#cmbdistrito2").val();
//        $("#cmbdistrito2").click(function () {
//            $("#cmbdistrito").val(ee);
//            cargaTipoCarpeta();                   
//        });
//    var ee=$("#cmbdistrito2").val();
//        $("#cmbdistrito2").change(function () {
//            $("#cmbdistrito").val(ee);
//                cargaTipoCarpeta();                   
//        });
    };
    
    function cargaJuzgados2() {

        var strDatos = "accion=distrito";
        var hiddencveAdcripcion = $("#hiddencveAdcripcion").val();
        var hiddencveJuzgadoOrigenArbol = $("#hiddencveJuzgadoOrigenArbol").val();
        if (hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol) {

         } else {
            if (hiddencveJuzgadoOrigenArbol != 0)
            strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
        }
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
                json = eval("(" + datos + ")"); //Parsear JSON

                if (json.totalCount > 0) {
                    for (var i = 0; i < json.totalCount; i++) {
                        if(json.data[i].cveTipojuzgado!=3)
                        {
                            $("#cmbdistrito2").append($('<option></option>').val(json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                        }
                        if(juzgadoSesion == json.data[i].cveJuzgado){
                            if(json.data[i].cveTipojuzgado!=3)
                            {
                                $("#cmbdistrito2 option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");
                            }    
                        }    
                    }
                }
                cargaTipoCarpeta2();
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion:\n\n" + quepaso);
//                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
//                $("#divAlertDager").show("slide");
//                setTimeAlert("divAlertDager");
            }
        });
    };

    //Validar cajas de texto
    $('#numer').validaCampo('0123456789');
    $('#txtNumero2').validaCampo('0123456789');
    $('#anio').validaCampo('0123456789');
    $('#txtAnio2').validaCampo('0123456789');
    $('#numerotoca').validaCampo('0123456789');
    $('#aniotoca').validaCampo('0123456789');
    //Fin de validar cajas de texto
    
    //Regresar
    function regeresar2() {
        $('#divconsgn').show();
        $('#tablrescg').hide();
        $('#divConsulta').hide();
        $('#tablaccdv').hide();
        $('#inputRegresarp2').hide();
        $('#inputRegresarp').hide();
        $('#inputRegresar').show();
    }
    //Fin de regresar
    
    //Panel de altas
    function panelaltas() {
        $('#altas').show();
        $('#consultas').hide();
        //$('#cmbdistrito').val(juzgadoSesion);
        //tipo_causa(juzgadoSesion);
    }
    //Fin de panel de altas
    
    //Panel de consultas
    function panelconsultas() {
        $('#altas').hide();
        $('#consultas').show();
        //$('#cmbdistrito2').val(juzgadoSesion);
        //tipo_causa(juzgadoSesion);

    }
    //Fin de panel de consultas

    //Cambiar texto
    function cambiatexto() {
        var texti = $("#tipscarpts option:selected").html();
        $('#textcausa').text(texti.toLowerCase());
    }
    //Fin de cambiar texto

    //Cambiar texto Consulta
    function cambiartextoconsulta() {
        var textc = $("#cmbTipoCarpeta2 option:selected").html();
        $('#textcausacons').text(textc.toLowerCase());
    }
    //Fin de cambiar texto Consulta
    
    //Limpiar Busqueda
    function limpiarBusqueda() {
        var dd="<?php date('d/m/Y') ?>";
        
        $('#nusentencia').val("");
        $('#asentencia').val("");
        $('#txtNumero2').val("");
        $('#txtAnio2').val("");
        $('#fdinicon').val(dd);
        $('#ffincon').val(dd);
        $('#cmbdistrito2').empty();
        cargaJuzgados2();
        
        var ee=$("#cmbdistrito2").val();            
        $("#cmbdistrito").val(ee);
        cargaTipoCarpeta();                
        
        //$('#cmbdistrito2').val(0);
        //tipo_causa(juzgadoSesion);
    }
    //Fin de Limpiar Busqueda
    
    //Llenar fechas1
    $(function() {

        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        $("#fdinicon").datepicker(
                {dateFormat: 'dd/mm/yy'}
        );
        $("#ffincon").datepicker(
                {dateFormat: 'dd/mm/yy'}
        );

//        var checkin = $('#fdinicon').datepicker({
//            format: "dd/mm/yyyy",
//            onRender: function(date) {
//                return date.valueOf() < now.valueOf() ? '' : '';
//            }
//        }).on('changeDate', function(ev) {
//            if (ev.date.valueOf() > checkout.date.valueOf()) {
//                var newDate = new Date(ev.date)
//                newDate.setDate(newDate.getDate() + 1);
//                checkout.setValue(newDate);
//            } else if (checkout.date.valueOf() == now.valueOf()) {
//                var newDate = new Date(ev.date)
//                newDate.setDate(newDate.getDate() + 1);
//                checkout.setValue(newDate);
//            }
//            checkin.hide();
//            $('#ffincon')[0].focus();
//        }).data('datepicker');
//        var checkout = $('#ffincon').datepicker({
//            format: "dd/mm/yyyy",
//            onRender: function(date) {
//                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
//            }
//        }).on('changeDate', function(ev) {
//            checkout.hide();
//        }).data('datepicker');


    });
    //Fin de llenar fechas1

    //Llenar fechas2
    $(function() {

        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#fdsen1').datepicker({
            format: "dd/mm/yyyy",
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? '' : '';
            }
        }).on('changeDate', function(ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() );
                checkout.setValue(newDate);
                
            } else if (checkout.date.valueOf() == now.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() );
                checkout.setValue(newDate);
                
            }else if (ev.date.valueOf() < checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() );
                checkout.setValue(newDate);
                
            }
            checkin.hide();
            $('#fejec1')[0].focus();
        }).data('datepicker');
        var checkout = $('#fejec1').datepicker({
            format: "dd/mm/yyyy",
           autoclose: true,
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
              $(this).blur();
                 $(this).datepicker('hide');
        })
                .data('datepicker');
        
    });
    //Fin de llenar fechas2

    llenasselects(2);

    function llenasselects(numtl) {

        ////////////////////////////////////////tipos actuaciones
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposactuaciones/TiposactuacionesFacade.Class.php",
            data: {
                accion: 'consultar',
                activo: 'S',
                async: true
            },
            beforeSend: function() {

            },
            success: function(datos) {
                var json;
                try {
                    json = eval("(" + datos + ")"); //Parsear JSON

                    for (var dd = 1; dd < numtl; dd++) {

                        var opciones = "<select class='form-control' id='seltipoasactuaciones" + dd + "' >";

                        for (var i = 0; i < json.totalCount; i++) {
                            opciones += '<option value="' + json.data[i].cveTipoActuacion + '">' + json.data[i].desTipoActuacion + '</option>';
                        }
                        opciones += "</select>";
                        $("#divseliposactuaciones" + dd).html(opciones);
                        ops = $("select#seltipoasactuaciones" + dd + " option");
                        ops.sort(function(a, b) {
                            return ($(a).html().toUpperCase() < $(b).html().toUpperCase()) ? -1 : ($(a).html().toUpperCase() > $(b).html().toUpperCase()) ? 1 : 0;
                        });
                        html = "<option value=''>SELECCIONE UNA OPCI\u00d3N</option>";
                        for (i = 0; i < ops.length; i++) {
                            html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>";
                        }
                        $("select#seltipoasactuaciones" + dd).html(html);


                    }

                } catch (Exception) {
                    $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            },
            error: function(objeto) {
                $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');

            }
        });

        ////////////////////////////////////////tipos carpetas
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
            data: {
                accion: 'consultar',
                activo: 'S',
                async: true
            },
            beforeSend: function() {

            },
            success: function(datos) {
                var json;
                try {
                    json = eval("(" + datos + ")"); //Parsear JSON

                    for (var dd = 1; dd < numtl; dd++) {
                        var opciones = "<select class='form-control' id='seltipoascarpts" + dd + "' >";

                        for (var i = 0; i < json.totalCount; i++) {
                            opciones += '<option value="' + json.data[i].cveTipoCarpeta + '">' + json.data[i].desTipoCarpeta + '</option>';
                        }
                        opciones += "</select>";
                        $("#divseltipscarp" + dd).html(opciones);
                        ops = $("select#seltipoascarpts" + dd + " option");
                        ops.sort(function(a, b) {
                            return ($(a).html().toUpperCase() < $(b).html().toUpperCase()) ? -1 : ($(a).html().toUpperCase() > $(b).html().toUpperCase()) ? 1 : 0;
                        });
                        html = "<option value=''>SELECCIONE UNA OPCI\u00d3N</option>";
                        for (i = 0; i < ops.length; i++) {
                            html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>";
                        }
                        $("select#seltipoascarpts" + dd).html(html);
                        $('#divseltipscarp' + dd).show();

                    }
                } catch (Exception) {
                    $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            },
            error: function(objeto) {
                $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');

            }
        });

        ////////////////////////////////  juzgados
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            data: {
                accion: 'consultar',
                activo: 'S',
                async: true
            },
            beforeSend: function() {

            },
            success: function(datos) {
                var json;
                try {
                    json = eval("(" + datos + ")"); //Parsear JSON

                    for (var dd = 1; dd < numtl; dd++) {
                        var opciones = "<select class='form-control' id='seljuzgados" + dd + "' >";

                        for (var i = 0; i < json.totalCount; i++) {
                            opciones += '<option value="' + json.data[i].cveJuzgado + '">' + json.data[i].desJuzgado + '</option>';
                        }
                        opciones += "</select>";
                        $("#divjuzgads" + dd).html(opciones);
                        ops = $("select#seljuzgados" + dd + " option");
                        ops.sort(function(a, b) {
                            return ($(a).html().toUpperCase() < $(b).html().toUpperCase()) ? -1 : ($(a).html().toUpperCase() > $(b).html().toUpperCase()) ? 1 : 0;
                        });
                        html = "<option value=''>SELECCIONE UNA OPCI\u00d3N</option>";
                        for (i = 0; i < ops.length; i++) {
                            html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>";
                        }
                        $("select#seljuzgados" + dd).html(html);
                        $('#divjuzgads' + dd).show();

                    }
                } catch (Exception) {
                    $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            },
            error: function(objeto) {
                $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');

            }
        });

        ////////////////////////////////////Estatus de sentencia


        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/estatus/EstatusFacade.Class.php",
            data: {
                accion: 'consultar',
                activo: 'S',
                cveTipoEstatus: 7,
                async: true
            },
            beforeSend: function() {

            },
            success: function(datos) {
                var json;
                try {
                    json = eval("(" + datos + ")"); //Parsear JSON

                    for (var dd = 1; dd < numtl; dd++) {
                        var opciones = "<select class='form-control' id='seleststsent" + dd + "' >";

                        for (var i = 0; i < json.totalCount; i++) {
                            opciones += '<option value="' + json.data[i].cveEstatus + '">' + json.data[i].descEstatus + '</option>';
                        }
                        opciones += "</select>";
                        $("#divstatsent").html(opciones);
                        ops = $("select#seleststsent" + dd + " option");
                        ops.sort(function(a, b) {
                            return ($(a).html().toUpperCase() < $(b).html().toUpperCase()) ? -1 : ($(a).html().toUpperCase() > $(b).html().toUpperCase()) ? 1 : 0;
                        });
                        html = "<option value=''>SELECCIONE UNA OPCI\u00d3N</option>";
                        for (i = 0; i < ops.length; i++) {
                            //html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>";
                            if($(ops[i]).val()==10)
                            {
                               html += "<option value='" + $(ops[i]).val() + "' selected='selected'>" + $(ops[i]).html() + "</option>"; 
                            }
                            else
                            {
                               html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>"; 
                            
                            }
                           
                        }
                        $("select#seleststsent" + dd).html(html);
                        $('#divstatsent').show();
                    }
                } catch (Exception) {
                    $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            },
            error: function(objeto) {
                $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');

            }
        });



        ////////////////////////////////  sentencias
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tipossentencias/TipossentenciasFacade.Class.php",
            data: {
                accion: 'consultar',
                activo: 'S',
                async: true
            },
            beforeSend: function() {

            },
            success: function(datos) {
                var json;
                try {
                    json = eval("(" + datos + ")"); //Parsear JSON

                    for (var dd = 1; dd < numtl; dd++) {
                        var opciones = "<select class='form-control' id='seltpsentencias" + dd + "' >";

                        for (var i = 0; i < json.totalCount; i++) {
                            opciones += '<option value="' + json.data[i].cveTipoSentencia + '">' + json.data[i].desTipoSentencia + '</option>';
                        }
                        opciones += "</select>";
                        $("#divselsentencias" + dd).html(opciones);
                        ops = $("select#seltpsentencias" + dd + " option");
                        ops.sort(function(a, b) {
                            return ($(a).html().toUpperCase() < $(b).html().toUpperCase()) ? -1 : ($(a).html().toUpperCase() > $(b).html().toUpperCase()) ? 1 : 0;
                        });
                        html = "<option value=''>SELECCIONE UNA OPCI\u00d3N</option>";
                        for (i = 0; i < ops.length; i++) {
                            html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>";
                        }
                        $("select#seltpsentencias" + dd).html(html);
                        $('#divselsentencias' + dd).show();
                    }
                } catch (Exception) {
                    $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            },
            error: function(objeto) {
                $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');

            }
        });

        ////////////////////////////////  tiposprocedimiento
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposprocedimientos/TiposprocedimientosFacade.Class.php",
            data: {
                accion: 'consultar',
                activo: 'S',
                async: true
            },
            beforeSend: function() {

            },
            success: function(datos) {
                var json;
                try {
                    json = eval("(" + datos + ")"); //Parsear JSON

                    for (var dd = 1; dd < numtl; dd++) {
                        var opciones = "<select class='form-control' id='selcproced" + dd + "' >";

                        for (var i = 0; i < json.totalCount; i++) {
                            opciones += '<option value="' + json.data[i].cveTipoProcedimiento + '">' + json.data[i].desTipoProcedimiento + '</option>';
                        }
                        opciones += "</select>";
                        $("#divselproced" + dd).html(opciones);

                        ops = $("select#selcproced" + dd + " option");
                        ops.sort(function(a, b) {
                            return ($(a).html().toUpperCase() < $(b).html().toUpperCase()) ? -1 : ($(a).html().toUpperCase() > $(b).html().toUpperCase()) ? 1 : 0;
                        });
                        html = "<option value=''>SELECCIONE UNA OPCI\u00d3N</option>";
                        for (i = 0; i < ops.length; i++) {
                            html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>";
                        }
                        $("select#selcproced" + dd).html(html);
                        $('#divselproced' + dd).show();
                    }
                } catch (Exception) {
                    $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            },
            error: function(objeto) {
                $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');

            }
        });


        ////////////////////////////////////jueces


        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
            data: {
                accion: 'consultar',
                activo: 'S',
                async: true
            },
            beforeSend: function() {

            },
            success: function(datos) {
                var json;
                try {
                    json = eval("(" + datos + ")"); //Parsear JSON

                    for (var dd = 1; dd < numtl; dd++) {
                        var opciones = "<select class='form-control' id='seljuez" + dd + "' onchange='agregarjuez()'>";

                        for (var i = 0; i < json.totalCount; i++) {
                            opciones += '<option value="' + json.data[i].idJuzgador + '">' + json.data[i].paterno + " " + json.data[i].materno + " " + json.data[i].nombre + '</option>';
                        }
                        opciones += "</select>";
                        $("#divjueces").html(opciones);

                        ops = $("select#seljuez" + dd + " option");
                        ops.sort(function(a, b) {
                            return ($(a).html().toUpperCase() < $(b).html().toUpperCase()) ? -1 : ($(a).html().toUpperCase() > $(b).html().toUpperCase()) ? 1 : 0;
                        });
                        html = "<option value=''>SELECCIONE UNA OPCI\u00d3N</option>";
                        for (i = 0; i < ops.length; i++) {
                            html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>";
                        }
                        $("select#seljuez" + dd).html(html);
                        $('#divjueces').show();
                    }
                } catch (Exception) {
                    $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            },
            error: function(objeto) {
                $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');

            }
        });
    }
    
    if(procedencia == 1){
    
    var iddelaactuacion=$('#hiddenIdActuacion').val();
    
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/actuacionesestatus/ActuacionesestatusFacade.Class.php",
            data: {
                idActuacion:iddelaactuacion,
                activo: 'S',
                accion: 'consultar',

            },
            async: false,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
            var json = "";
            json = eval("(" + datos + ")"); //Parsear JSON

            if (json.totalCount > 0) {
                
                consultaactuacion(iddelaactuacion,json.data[0].cveEstatus,null);
            }
            },
                error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion:\n\n" + quepaso);
            }
        });
    }
    
    if(procedencia == 2){
    
    var idreferencia=$('#hiddenIdReferencia').val();
    
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
            data: {
                idCarpetaJudicial:idreferencia,
                activo: 'S',
                accion: 'consultar',

            },
            async: false,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
            var json = "";
            json = eval("(" + datos + ")"); //Parsear JSON

            if (json.totalCount > 0) {
                $('#numer').val(json.data[0].numero);
                $('#anio').val(json.data[0].anio);
                valorJuzgado(json.data[0].cveJuzgado);                                        
                $('#tipscarpts').val(json.data[0].cveTipoCarpeta);
                consultarimputados(1);
                //consultaactuacion(iddelaactuacion,json.data[0].cveEstatus,null);
                document.getElementById('consultarimputados').style.display='none';
            }
            },
                error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion:\n\n" + quepaso);
            }
        });   
    }
        
        function enviar(){
        var strDatos = "accion=generarJson";
            strDatos += "&cveTipo=2";                             //2 = actuacion - 1 = carpeta judicial
            strDatos += "&cveTipoDocumento=14";          // clave del tipo documento de la tabla tbltipos documentos que corresponde a su actuacion
            strDatos += "&idActuacion="+$("#hiddenIdActuacion").val();       //id de su actuacion            
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
                        }else{
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
        
        
//        function generaPDF(json){        
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
//                if (json.type == "ok") {
//                    alert("satisfactorio");
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
        
        function visorDocuemntos() {
            $.ajax({
                type: 'POST',
                url: 'visorpdf/index.php',
                data: {idCarpetaJudicial: "", idActuacion: $('#hiddenIdActuacion').val(), cveTipoDocumento: 14},  //#id de carpeta judicial = "", su id de actuaci�n,  la clave de tipo de documento de tbltiposdocumentos
//                data: {idCarpetaJudicial: "", idActuacion: 14525, cveTipoDocumento: 1}, //EJEMPLO
                async: false,
                dataType: 'html',
                beforeSend: function () {
                    $('#visor').html('<h3>Consultando informacion ... espere.</h3>');
                },
                success: function (data) {
                    $('#visor').html(data);
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. '+  otroobj +'</h3>');
                    console.log('\nOBJ: '+objeto+ '\nQ: '+quepaso+'\nO:'+otroobj)
                }
            });
        }
        
        function valorJuzgado(cveJuzgado){
            
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
//                    alert (json.data[0].cveJuzgado+"/"+json.data[0].cveTipojuzgado);
                    $("#cmbdistrito").val(json.data[0].cveJuzgado+"/"+json.data[0].cveTipojuzgado);
                } else {
                    
                    $("#divAlertDager").html("Error al obtener tipo de juzgado");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
                $('#barCarga').html("");
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
    
    
    function valorJuzgado2(cveJuzgado){
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
//                    alert (json.data[0].cveJuzgado+"/"+json.data[0].cveTipojuzgado);
                    $("#cmbdistrito2").val(json.data[0].cveJuzgado+"/"+json.data[0].cveTipojuzgado);
                } else {
                    
                    $("#divAlertDager").html("Error al obtener tipo de juzgado");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
                $('#barCarga').html("");
                cargaTipoCarpeta2();

            },
            error: function (objeto, quepaso, otroobj) {
                //alert("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    };
    
    
    //Cargar combo salas    
    function getSalas(totalimputados, val1) {        
        var contadtotalcobos = 1;
        $.post("../fachadas/sigejupe/imputadossentencias/ImputadossentenciasFacade.Class.php", {
            accion: 'getSalas'
        }, function(response) {
            var object = eval('(' + response + ')');
            for (contadtotalcobos; contadtotalcobos <= totalimputados; contadtotalcobos++) {
                var options = '<option value="0">SELECCIONE UNA OPCI\u00d3N</option>';
                if (object.totalCount > 0) {
                    var data = object.data;
                    $.each(data, function(k, v) {
                        
                        if(val1!=0)
                        {
                            if(v.idJuzgado==val1)
                            {
                                options += '<option value="' + v.idJuzgado + '" selected="selected">' + v.desJuz + '</option>';
                            }
                            else
                            {
                                options += '<option value="' + v.idJuzgado + '">' + v.desJuz + '</option>';
                            }
                        }
                        else
                        {
                            options += '<option value="' + v.idJuzgado + '">' + v.desJuz + '</option>';
                        }
                    });
                    $('#select_mcautelares_salastoca'+ contadtotalcobos).empty().html(options);
                }
            }
        });

    }
    //Fin de cargar combo salas
    
    //Cargar combo sentido
    function cosultarsentido(totalimputados,val) {
        
        var contadtotalcobos = 1;
        ////////////////////////////////////////tipos actuaciones
        $.ajax({
            type: "POST",
            async: true,
            url: "../fachadas/sigejupe/sentidosresoluciones/SentidosresolucionesFacade.Class.php",
            data: {
                accion: 'consultar',
                activo: 'S'
            },
            beforeSend: function() {

            },
            success: function(datos) {
                var json;
                try {
                    json = eval("(" + datos + ")"); //Parsear JSON


                for (contadtotalcobos; contadtotalcobos <= totalimputados; contadtotalcobos++) {
                    var opciones = "<select class='form-control' id='selectsentido" + contadtotalcobos + "' onchange='llenadoapelaciones(" + contadtotalcobos + ")'>";
                    
                    for (var i = 0; i < json.totalCount; i++) {
                        if(val!=0)
                        {
                            if(json.data[i].cveSentido==val)
                            {                               
                                opciones += '<option value="' + json.data[i].cveSentido + '" selected="selected">' + json.data[i].desSentido + '</option>';
                            }
                            else
                            {
                                opciones += '<option value="' + json.data[i].cveSentido + '">' + json.data[i].desSentido + '</option>';
                            }
                        }
                        else
                        {
                            opciones += '<option value="' + json.data[i].cveSentido + '">' + json.data[i].desSentido + '</option>';
                        }
                        
                    }
                    opciones += "</select>";
                    $("#divsentidos"+contadtotalcobos).html(opciones);
                    ops = $("select#selectsentido"+ contadtotalcobos + " option");
                    ops.sort(function(a, b) {
                        return ($(a).html().toUpperCase() < $(b).html().toUpperCase()) ? -1 : ($(a).html().toUpperCase() > $(b).html().toUpperCase()) ? 1 : 0;
                    });
                    html = "<option value=''>SELECCIONE UNA OPCI\u00d3N</option>";
                    for (i = 0; i < ops.length; i++) {   
                        if(val!=0){
                            if($(ops[i]).val()==val){                                                               
                                html += "<option value='" + $(ops[i]).val() + "' selected='selected'>" + $(ops[i]).html() + "</option>";
                            }
                            else{
                                html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>";
                            }
                        }else{
                            html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>";
                        }
                    }
                    $("select#selectsentido"+contadtotalcobos).html(html);
                }

                } catch (Exception) {
                    $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            },
            error: function(objeto) {
                $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
            }
        });
    }
    
    
    function consultartipossanciones(tiposancion){
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tipossanciones/TipossancionesFacade.Class.php",            
            async: true,
            data: {
                cveTipoSancion: tiposancion,
                activo:"S",
                accion: "consultar"
            },
            //dataType: "json",
            beforeSend: function (xhr) {

            },
            success: function (datos) {
                var json;
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {                    
                    desctiposancion=json.data[0].desTipoSancion; 
                }
            },
            error: function () {
                //alert("No se Encontraron Tipos de Carpetas");
                $("#divAlertDager").html("No se encontraron tipos de sanciones");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager"); 
            }

        });
        return desctiposancion;
    }
    //Find de cargar combo sentido


    var irdrefere = 0;
    var idofecar = 0;
    var totallista = 0;
    var totalcheck = 0;

    //Consultar imputados (carpetasjudicialesfacade.class.php, imputadoscarpetasfacade.class.php, imputadoscarpetasfacade.class.php)
    
    function consultarimputados(str,val1=null,val2=null,val3=null,val4=null) {
	var tipoJuzgado1 = $("#cmbdistrito").val().split("/");
        
        $('#ltsPromoventes').remove();
        var opciones;
        var carpeta = $('#tipscarpts').val();
        var numero = $('#numer').val();
        var anio = $('#anio').val();
		var distritojuzgado = tipoJuzgado1[0];
                
        $('#divsentencias').hide();
        totallista = 0;

        $("#selimputados option").remove();
        $('#divimputado').hide();
        $("#divsentenciados").hide();

        $('#errtipcausa').hide();
        $('#errdistrito').hide();
        $('#errnumca').hide();

//        if (carpeta == 0) {
//            $('#carpeta').focus();
//            $('#errtipcausa').show();
//            return;
//        }

        if (carpeta.length == 0) {
            $('#carpeta').focus();
            $('#errtipcausa').show();
            return;
        }

        if (numero.length == 0) {
            $('#numer').focus();
            $('#errnumca').show();

            return;
        }

        if (anio.length == 0) {
            $('#anio').focus();
            $('#errnumca').show();
            return;
        }
        var idcarpeta = 0;
   
        if(val1!=null && val2!=null && val3!=null && val4!=null){
    
            $.ajax({
              type: "POST",
              url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
              async: true,
              data: {
                  cveTipoCarpeta: val1,
                  numero: val2,
                  anio: val3,
                  cveJuzgado: val4,
                  accion: 'consultar',
                  activo:'S'
              },
              beforeSend: function() {

              },
              success: function(datos) {
                  var json;
                  try {
                      json = eval("(" + datos + ")"); //Parsear JSON

                      if (json.estatus == "Fail") {
                          $("#info2").html('<span>No existe carpeta.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                          limpiarcons();
                          limpiaelarbol();
                          return;
                      }
                      if (json.totalCount == 0) {
                          $("#info2").html('<span>No existe carpeta.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                          limpiarcons();
                          limpiaelarbol();
                          return;
                      }
                      idcarpeta = json.data[0].idCarpetaJudicial;
                      irdrefere = idcarpeta;

                      //consultarimputadossanciones();
                      $('#btnssentencia').show();

                      $.ajax({
                          type: "POST",
                          url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                          async: true,
                          data: {
                              idCarpetaJudicial: idcarpeta,
                              accion: 'consultasinsentencia',
                              actuacion: $('#idsentenc').val(),
                              //async: true
                          },
                          beforeSend: function() {

                          },
                          success: function(datos) {
                              var valorid=0;
                              var json;
                              try {
                                  json = eval("(" + datos + ")"); //Parsear JSON
                                  
                                  if (json.estatus == "Fail") {
                                      
                                      $("#info2").html('<span>No existe carpeta.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                                      limpiarcons();
                                      limpiaelarbol();
                                      return;
                                  }
                                  if (json.totalCount == 0) {
                                      $("#info2").html('<span>No existe carpeta.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                                      limpiarcons();
                                      limpiaelarbol();
                                      return;
                                  }
                                  var tabladli = '<table id="ltsPromoventes" class="table table-bordered tblGridAgrega" ><tr><th class="trGridAgrega">No</th><th class="trGridAgrega">Imputado</th><th class="trGridAgrega">Ofendido</th><th class="trGridAgrega">Delito</th><th class="trGridAgrega">Estatus</th><th class="trGridAgrega">Seleccionar</th></tr>';

                                  var habilitar = 0;
                                  var valorprision;
                                  if (json.totalCount < 1) {
                                      $("#info2").html('<span>No existe carpeta.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                                      limpiarcons();
                                      limpiaelarbol();
                                      return;
                                  }

                                  if (str == 1) {
                                      acordion = '<div class="panel-group" id="accordion">';

                                      var existe = '';
                                      var algunsin = 0;

                                      totalcheck = 0;

                                      for (var i = 0; i < json.totalCount; i++) {

                                          habilitar = "";
                                          sentencia = "Disponible";

//                                          if (json.data[i].agregado == 1) {
//                                              habilitar = "disabled";
//                                              sentencia = "Con Sentencia";
//
//                                              existe = ' style="cursor:no-drop;text-decoration:none"';
//                                          } else {
                                              existe = ' data-toggle="collapse"';
                                              algunsin++;
//                                          }

                                          $('#btnconinm').prop("disabled", true);
                                          apelaciones[contadorapelaciones] = new Array(7);
                                          apelaciones[contadorapelaciones][0] = json.data[i].id;
                                          apelaciones[contadorapelaciones][1] = 0;
                                          apelaciones[contadorapelaciones][2] = 0;
                                          apelaciones[contadorapelaciones][3] = 0;
                                          apelaciones[contadorapelaciones][4] = 0;
                                          apelaciones[contadorapelaciones][5] = 0;
                                          apelaciones[contadorapelaciones][6] = 0;
                                          apelaciones[contadorapelaciones][7] = json.data[i].nombre + '  /  ' + json.data[i].ofendido + '  /  ' + json.data[i].delito;
                                          contadorapelaciones++;
        
                                           var alerta = '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="form-group"><div class="alert alert-info alert-dismissable" id="infocent' + (i + 1) + '" style="display: none;"></div></div>';
//                                          alerta += '<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
//                                          alerta += '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="alert alert-success alert-dismissable" id="corrgdd' + (i + 1) + '" style="display: none;">';
//                                          alerta += '<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
//                                          alerta += '</div></div>';
//                                          alerta += '</div></div>';

                                          valorid=(i);
                                          tabladli += '<tr id="tr' + (i + 1) + '"><td>' + (i + 1) + '</td><td>' + json.data[i].nombre + '</td><td>' + json.data[i].ofendido + '</td><td>' + json.data[i].delito + '</td><td><span id="spa' + (i + 1) + '"> ' + sentencia + '</span></td><td><center><input type="checkbox" id="chec' + (i + 1) + '"  ' + habilitar + '/></center><input type="hidden" id="valchec' + (i + 1) + '" value="' + json.data[i].id + '" ></input></td></tr>';
                                          acordion += '  <div class="panel panel-default" id="acordeon' + (i + 1) + '">';

                                          acordion += '   <div class="panel-heading">';
                                          acordion += '      <h4 class="panel-title" onclick="limparselectssentencia(' + json.totalCount + ')">';
                                          acordion += (i + 1) + ' -  &nbsp;&nbsp;<input class=" " type="checkbox" id="chec' + (i + 1) + '"  ' + habilitar + '/></center><input type="hidden" id="valchec' + (i + 1) + '" value="' + json.data[i].id + '" ></input>        <a  ' + existe + ' data-parent="#accordion" href="#collapse' + (i + 1) + '">';
                                          acordion += '&nbsp;&nbsp;&nbsp;' + json.data[i].nombre + '  /  ' + json.data[i].ofendido + '  /  ' + json.data[i].delito + '</a>';
                                          acordion += '      </h4>';
                                          acordion += '    </div>';
                                          acordion += '   <div id="collapse' + (i + 1) + '" class="panel-collapse collapse">';
                                          acordion += '     ';
                                          //aqui va
                                          acordion += '<br><div class="panel-heading"><h5 class="panel-title">Apelaci&oacute;n</h5></div><div class="form-group">' + '           <br>  <br> <label class="control-label col-xs-12 col-sm-3 col-md-3">Apelaci&oacute;n del imputado </label>' + '             <div class="col-xs-12 col-sm-7 col-md-6">' + '                 &nbsp;&nbsp;<select id="selectapelac' + (i + 1) + '"  onchange="editarapelacion(this.value,' + (i + 1) + ')"  class="imputadoApelacion">' + '                     <option value="N">NO</option>' + '                     <option value="S">SI</option>' + '                 </select>' + '                 <button id="edit_' + (i + 1) + '" onclick="cargarapelacion(' + (i + 1) + ')"  type="button" class="btn btn-default btn-sm" aria-label="Left Align" disabled="disabled" style="display:none">' + '                     <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Apelaci&oacute;n' + '                 </button>' + '             </div>' + '         </div>';						
                                          acordion +=' <div id="captapelacion' + (i + 1) + '" style="display:none">';
  //                                        acordion +='    <div class="panel-heading">';
  //                                        acordion +=' <h5 class="panel-title">';                                                            
  //                                        acordion +=' Sentencias/Captura de apelacion';                         
  //                                        acordion +=' </h5>';
  //                                        acordion +=' </div>';
  //                                        acordion +=' <br>';
  //                                        acordion +=' <br>';
                                          acordion +=' <div>';
                                          acordion +=' <div class="form-group">'; 
                                          acordion +=' <input type="hidden" id="idImputadoCarpeta'+ (i + 1) +'"/>'; 
                                          acordion +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">Sentido <label style="color:darkred">(*)</label></label>';
                                          acordion +=' <div class="col-xs-12 col-sm-8 col-md-7" id="divsentidos' + (i + 1) + '">';
                                          acordion +=' <select id="selectsentido' + (i + 1) + '" class="form-control" tabindex="6"></select>';
                                          acordion +=' </div>';
                                          acordion +=' </div>';
                                          acordion +=' <div class="form-group">';
                                          acordion +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">No. de Toca <label style="color:darkred">(*)</label></label>';
                                          acordion +=' <div class="col-xs-9 col-sm-9 col-md-9">';
                                          acordion +=' <input type="text" id="numerotoca'+ (i + 1) +'" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline" onblur="llenadoapelaciones('+ (i + 1) +')"/>';
                                          acordion +='                        /';
                                          acordion +=' <input type="text" id="aniotoca'+ (i + 1) +'" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline" onblur="llenadoapelaciones('+ (i + 1) +')"/>';
                                          acordion +=' </div>';
                                          acordion +=' </div>';
                                          acordion +=' <div class="form-group">';
                                          acordion +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">Sala <label style="color:darkred">(*)</label></label>';
                                          acordion +=' <div class="col-xs-12 col-sm-8 col-md-7">';
                                          acordion +=' <select id="select_mcautelares_salastoca'+ (i + 1) +'" class="form-control" tabindex="6" onchange="llenadoapelaciones('+ (i + 1) +')"></select>';
                                          acordion +=' </div>';
                                          acordion +=' </div>';
                                          acordion +=' <div class="form-group" style="display:none">';
                                          acordion +=' <div class="col-xs-offset-3 col-xs-9">';
                                          acordion +=' <input type="submit" class="btn btn-primary" value="Limpiar Apelaci&oacute;n" onclick="limpiarapelacion('+ (i + 1) +')">';
                                          acordion +=' </div>';
                                          acordion +=' </div>';
                                          acordion +=' <div class="form-group">';
                                          acordion +=' <div class="form-group"><div class="alert alert-info alert-dismissable" id="infresol" style="display: none;">';
                                          acordion +=' <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
                                          acordion +=' </div></div>';
                                          acordion +=' </div>';

                                          acordion +=' </div>';
                                          acordion +=' </div>';
                                          //fin aqui va
                                          acordion += '      <div class="panel-heading"><h5 class="panel-title">Sanciones</h5></div><div class="panel-body" >';
                                          acordion += '  <div class="form-group">';
                                          acordion += '     <label class="control-label col-xs-12 col-sm-3 col-md-3 needed" id="label_actam_text1' + (i + 1) + '">Sancion <label style="color:darkred">(*)</label></label>';
                                          acordion += '     <div class="col-xs-9 col-sm-8 col-md-8" id="divtipsnc' + (i + 1) + '">';
                                          acordion += '   </div>  ';
                                          acordion += '  <div class="col-sm-12" id="divsenten' + (i + 1) + '"></div>' + alerta + '<div class="col-sm-12" id="divdsanciones' + (i + 1) + '"></div></div></div>';

                                          acordion += '  </div></div>';    
                                          //acordion += 'numerotoca'+ (i + 1)+'")';
                                          //$('#aniotoca'+ (i + 1)).validaCampo('0123456789');
                                          totalcheck++;
                                      }
                                  } else {                                      
                                      var j = totalcheck;
                                      var existe = '';
                                      var algunsin = 0;
                                      for (var i = 0; i < json.totalCount; i++) {
                                          habilitar = "";
                                          sentencia = "Disponible";

                                          if (json.data[i].agregado == 0 && json.data[i].idactuacion == 0) {

                                              if ($('#idsentenc').val() != json.data[i].idactuacion) {
                                                  
                                                  apelaciones[contadorapelaciones] = new Array(7);
                                                  apelaciones[contadorapelaciones][0] = json.data[i].id;
                                                  apelaciones[contadorapelaciones][1] = 0;
                                                  apelaciones[contadorapelaciones][2] = 0;
                                                  apelaciones[contadorapelaciones][3] = 0;
                                                  apelaciones[contadorapelaciones][4] = 0;
                                                  apelaciones[contadorapelaciones][5] = 0;
                                                  apelaciones[contadorapelaciones][6] = 0;
                                                  apelaciones[contadorapelaciones][7] = json.data[i].nombre + '  /  ' + json.data[i].ofendido + '  /  ' + json.data[i].delito;
                                                  contadorapelaciones++;
                                                  if (acordion2.length < 5) {
                                                      acordion2 += '<div class="panel-group" id="accordion">';
                                                  }
                                                var alerta = '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="form-group"><div class="alert alert-info alert-dismissable" id="infocent' + (j + 1) + '" style="display: none;"></div></div>';
//                                                  var alerta = '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="alert alert-info alert-dismissable" id="infocent' + (j + 1) + '" style="display: none;">';
//                                                  alerta += '<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
//                                                  alerta += '</div></div>';
//                                                  alerta += '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="alert alert-success alert-dismissable" id="corrgdd' + (j + 1) + '" style="display: none;">';
//                                                  alerta += '<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
//                                                  alerta += '</div></div>';

                                                  acordion2 += '<div class="panel panel-default" id="acordeon' + (j + 1) + '">';
                                                  acordion2 += '   <div class="panel-heading">';
                                                  acordion2 += '      <h4 class="panel-title" onclick="limparselectssentencia(' + json.totalCount + ')">';

                                                  acordion2 += (j + 1) + ' -  &nbsp;&nbsp;<input class="imputados" data-id="'+ (j + 1) +'" type="checkbox" id="chec' + (j + 1) + '"  ' + habilitar + '/></center><input type="hidden" id="valchec' + (j + 1) + '" value="' + json.data[i].id + '"  ></input>        <a  id="achec' + (j + 1) + '" data-toggle="collapse" data-parent="#accordion" href="#collapse' + (j + 1) + '">';
                                                  acordion2 += '&nbsp;&nbsp;&nbsp;' + json.data[i].nombre + '  /  ' + json.data[i].ofendido + '  /  ' + json.data[i].delito + '</a>';
                                                  acordion2 += '      </h4>';
                                                  acordion2 += '    </div>';
                                                  acordion2 += '   <div id="collapse' + (j + 1) + '" class="panel-collapse collapse">';
                                                  acordion2 += '     ';
                                                  //aqui va
                                                  acordion2 += '<br><div class="panel-heading"><h5 class="panel-title">Apelaci&oacute;n</h5></div><div class="form-group">' + '           <br>  <br> <label class="control-label col-xs-12 col-sm-3 col-md-3">Apelaci&oacute;n del imputado </label>' + '             <div class="col-xs-12 col-sm-7 col-md-6">' + '                 &nbsp;&nbsp;<select id="selectapelac' + (j + 1) + '"  onchange="editarapelacion(this.value,' + (j + 1) + ')"  class="imputadoApelacion">' + '                     <option value="N">NO</option>' + '                     <option value="S">SI</option>' + '                 </select>' + '                 <button id="edit_' + (j + 1) + '" onclick="cargarapelacion(' + (j + 1) + ')"  type="button" class="btn btn-default btn-sm" aria-label="Left Align" disabled="disabled" style="display:none">' + '                     <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Apelaci&oacute;n' + '                 </button>' + '             </div>' + '         </div>';						
                                                  acordion2 +=' <div id="captapelacion' + (j + 1) + '" style="display:none">';
          //                                        acordion2 +='    <div class="panel-heading">';
          //                                        acordion2 +=' <h5 class="panel-title">';                                                            
          //                                        acordion2 +=' Sentencias/Captura de apelacion';                         
          //                                        acordion2 +=' </h5>';
          //                                        acordion2 +=' </div>';
          //                                        acordion2 +=' <br>';
          //                                        acordion2 +=' <br>';
                                                  acordion2 +=' <div>';
                                                  acordion2 +=' <div class="form-group">'; 
                                                  acordion2 +=' <input type="hidden" id="idImputadoCarpeta'+ (j + 1) +'"/>'; 
                                                  acordion2 +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">Sentido <label style="color:darkred">(*)</label></label>';
                                                  acordion2 +=' <div class="col-xs-12 col-sm-8 col-md-7" id="divsentidos' + (j + 1) + '">';
                                                  acordion2 +=' <select id="selectsentido' + (j + 1) + '" class="form-control" tabindex="6"></select>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' <div class="form-group">';
                                                  acordion2 +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">No. de Toca <label style="color:darkred">(*)</label></label>';
                                                  acordion2 +=' <div class="col-xs-9 col-sm-9 col-md-9">';
                                                  acordion2 +=' <input type="text" id="numerotoca'+ (j + 1) +'" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline" onblur="llenadoapelaciones('+ (j + 1) +')"/>';
                                                  acordion2 +='                        /';
                                                  acordion2 +=' <input type="text" id="aniotoca'+ (j + 1) +'" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline" onblur="llenadoapelaciones('+ (j + 1) +')"/>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' <div class="form-group">';
                                                  acordion2 +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">Sala <label style="color:darkred">(*)</label></label>';
                                                  acordion2 +=' <div class="col-xs-12 col-sm-8 col-md-7">';
                                                  acordion2 +=' <select id="select_mcautelares_salastoca'+ (j + 1) +'" class="form-control" tabindex="6" onchange="llenadoapelaciones('+ (j + 1) +')"></select>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' <div class="form-group" style="display:none">';
                                                  acordion2 +=' <div class="col-xs-offset-3 col-xs-9">';
                                                  acordion2 +=' <input type="submit" class="btn btn-primary" value="Limpiar Apelaci&oacute;n" onclick="limpiarapelacion('+ (j + 1) +')">';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' <div class="form-group">';
                                                  acordion2 +=' <div class="form-group"><div class="alert alert-info alert-dismissable" id="infresol" style="display: none;">';
                                                  acordion2 +=' <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
                                                  acordion2 +=' </div></div>';
                                                  acordion2 +=' </div>';

                                                  acordion2 +=' </div>';
                                                  acordion2 +=' </div>';
                                                  //fin aqui va
                                                  acordion2 += '      <div class="panel-heading"><h5 class="panel-title">Sanciones</h5></div><div class="panel-body" >';
                                                  acordion2 += '  <div class="form-group">';
                                                  acordion2 += '     <label class="control-label col-xs-12 col-sm-3 col-md-3 needed" id="label_actam_text1' + (j + 1) + '">Sancion <label style="color:darkred">(*)</label></label>';
                                                  acordion2 += '     <div class="col-xs-9 col-sm-8 col-md-8" id="divtipsnc' + (j + 1) + '">';
                                                  acordion2 += '   </div>';
                                                  acordion2 += '  <div class="col-sm-12" id="divsenten' + (j + 1) + '"></div>' + alerta + '<div class="col-sm-12" id="divdsanciones' + (j + 1) + '"></div></div></div>';

                                                  acordion2 += '   </div></div>';
                                                  totalcheck++;
                                                  j++;
                                              }
                                          }
                                      }

                                      $('#btnregsanc').show();
                                      $('#divtbpr').show();

                                      $('#divtbpr').html(acordion2);
                                      //saber si una apelacion
                                      
                                      for (i=1;i<=contadorestatus;i++){
                                        $('#numerotoca' + i).validaCampo('0123456789');
                                        $('#aniotoca' + i).validaCampo('0123456789');
                                        if(apelaciones[i][2]!=0)
                                        {                                            
                                            $('#selectapelac'+i).val("S");
                                            editarapelacion("S",i);
                                        }
                                        var ee=$('#seleststsent1').val();
                                        if(ee==12)
                                        { 
                                            //$('#selectapelac'+i).attr("disabled", true);                                           
                                            //$('#numerotoca'+i).attr("disabled", true);
                                            //$('#aniotoca'+i).attr("disabled", true);
                                            //$('#select_mcautelares_salastoca'+i).attr("disabled", true);
                                            $('#seltpsa'+i).attr("disabled", true);
                                            $('#checagregado'+i).attr("disabled", true);
                                            //$('#selectsentido'+i).attr("disabled", true);
                                        }
                                        else{   
                                            //$('#selectapelac'+i).attr("disabled", false);                                            
                                            //$('#numerotoca'+i).attr("disabled", false);
                                            //$('#aniotoca'+i).attr("disabled", false);
                                            //$('#select_mcautelares_salastoca'+i).attr("disabled", false);
                                            $('#seltpsa'+i).attr("disabled", false);
                                            //$('#checagregado'+i).attr("disabled", false);
                                            //$('#selectsentido'+i).attr("disabled", false);
                                        } 
                                      }
                                      /*

                                            for(var x=0;x<=totalcheck;x++){


                                              if(arraddsen[x]!='undefinied'){


                                      var alerta='<div class="form-group"><div class="form-group"><div class="alert alert-info alert-dismissable" id="infocent'+x+'" style="display: none;">';
                                          alerta+='<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
                                          alerta+='</div></div>';



                                                  $('#divdsanciones'+x).html(alerta+arraddsen[x]);
                                              }


                                            }
                                      */
                                         
                                      combosanciones(totalcheck);
                                      return;
                                  }
                                  combosanciones(totalcheck);
                                  cosultarsentido(totalcheck,0);                                  
                                  getSalas(totalcheck,0);
                                  $('#tipscarpts').prop("disabled", true);
                                  $('#cmbdistrito').prop("disabled", true);
                                  $('#numer').prop("disabled", true);
                                  $('#anio').prop("disabled", true);

                                  if (algunsin == 0) {
                                      $("#infosr").html('<span>Sin imputados a agregar. <span>').fadeIn('slow').delay(1000).fadeOut('slow');
                                  }
                                  
                                  $('#btnregsanc').show();
                                  $('#divtbpr').show();
                                  acordion += '</div>';
                                  $('#divtbpr').html(acordion);
                                  for (var i = 0; i < json.totalCount; i++)
                                  {
                                      $('#numerotoca'+ (i + 1)).validaCampo('0123456789');
                                      $('#aniotoca'+ (i + 1)).validaCampo('0123456789');
                                      //cosultarsentido((i + 1));
                                  }
                              } catch (Exception) {
                                  $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                              }

                          },
                          error: function(objeto) {
                              $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');

                          }
                      });

                      $.ajax({
                          type: "POST",
                          url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                          async: false,
                          data: {
                              idCarpetaJudicial: idcarpeta,
                              accion: 'consultar',
                          },
                          beforeSend: function() {

                          },
                          success: function(datos) {
                              var json;
                              try {
                                  json = eval("(" + datos + ")"); //Parsear JSON

                                  if (json.totalCount == 0) {
                                      $("#info").html('<span>Sin resultados 5<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                                      return;
                                  }
                                  return;
                                  var opciones = "<select class='form-control' id='selim' onchange='consultarimputadossanciones()'>";
                                  var tabladli = '<table id="ltsPromoventes" class="table table-bordered tblGridAgrega" ><tr><th class="trGridAgrega">No</th><th class="trGridAgrega">Imputado</th><th class="trGridAgrega">Seleccionar</th></tr>';
                                  for (var i = 0; i < json.totalCount; i++) {
                                      opciones += '<option value="' + json.data[i].idImputadoCarpeta + '">' + json.data[i].paterno + " " + json.data[i].materno + " " + json.data[i].nombre + '</option>';
                                      tabladli += '<tr><td>' + (i + 1) + '</td><td>' + json.data[i].paterno + " " + json.data[i].materno + " " + json.data[i].nombre + '</td><td><center><input type="checkbox" id="chec' + (i + 1) + '"/></center><input type="hidden" id="valchec' + (i + 1) + '" value="' + json.data[i].idImputadoCarpeta + '"></input></td></tr>';
                                      totalcheck++;
                                  }

                                  opciones += "</select>";
                                  $("#selimputados").html(opciones);
                                  ops = $("select#selim option");
                                  ops.sort(function(a, b) {
                                      return ($(a).html().toUpperCase() < $(b).html().toUpperCase()) ? -1 : ($(a).html().toUpperCase() > $(b).html().toUpperCase()) ? 1 : 0;
                                  });
                                  html = "<option value=' '>SELECCIONE UNA OPCI\u00d3N</option>";
                                  for (i = 0; i < ops.length; i++) {
                                      html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>";
                                  }
                                  $("select#selim").html(html);
                                  $('#divimputado').show();
                              } catch (Exception) {
                                  $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                              }
                          },
                          error: function(objeto) {
                              $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                          }
                      });

                  } catch (Exception) {
                      $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                  }
              },
              error: function(objeto) {
                  $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
              }
          });
        }
        else{
            $.ajax({
              type: "POST",
              url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
              async: true,
              data: {
                  cveTipoCarpeta: carpeta,
                  numero: numero,
                  anio: anio,
                  cveJuzgado: distritojuzgado,
                  accion: 'consultar',
                  activo:'S'
              },
              beforeSend: function() {

              },
              success: function(datos) {
                  var json;
                  try {
                      json = eval("(" + datos + ")"); //Parsear JSON
//                      if (json.estatus == "Fail") {
//                          $("#info2").html('<span>No existe carpeta.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
//                          limpiarcons();
//                          limpiaelarbol();
//                          return;
//                      }
                      if (json.totalCount == 0) {
                          console.log("total:0");
                          $("#info2").html('<span>No existe carpeta.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                          limpiarcons();
                          limpiaelarbol();
                          return;
                      }
                      idcarpeta = json.data[0].idCarpetaJudicial;

                      irdrefere = idcarpeta;

                      //consultarimputadossanciones();
                      $('#btnssentencia').show();

                      $.ajax({
                          type: "POST",
                          url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                          async: true,
                          data: {
                              idCarpetaJudicial: idcarpeta,
                              accion: 'consultasinsentencia',
                              actuacion: $('#idsentenc').val(),
                              //async: true
                          },
                          beforeSend: function() {

                          },
                          success: function(datos) {
                              var valorid=0;
                              var json;
                              try {
                                  json = eval("(" + datos + ")"); //Parsear JSON
//console.log(json);
                                  if (json.estatus == "Fail") {
                                      $("#info2").html('<span>No existe carpeta.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                                      limpiarcons();
                                      limpiaelarbol();
                                      return;
                                  }
                                  if (json.totalCount == 0) {
                                      $("#info2").html('<span>No existe carpeta.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                                      limpiarcons();
                                      limpiaelarbol();
                                      return;
                                  }

                                  var tabladli = '<table id="ltsPromoventes" class="table table-bordered tblGridAgrega" ><tr><th class="trGridAgrega">No</th><th class="trGridAgrega">Imputado</th><th class="trGridAgrega">Ofendido</th><th class="trGridAgrega">Delito</th><th class="trGridAgrega">Estatus</th><th class="trGridAgrega">Seleccionar</th></tr>';

                                  var habilitar = 0;
                                  var valorprision;
                                  if (json.totalCount < 1) {
                                      $("#info2").html('<span>No existe carpeta.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                                      limpiarcons();
                                      limpiaelarbol();
                                      return;
                                  }
                                  if (str == 1) {
                                      acordion = '<div class="panel-group" id="accordion">';

                                      var existe = '';
                                      var algunsin = 0;

                                      totalcheck = 0;

                                      for (var i = 0; i < json.totalCount; i++) {

                                          habilitar = "";
                                          sentencia = "Disponible";

//                                          if (json.data[i].agregado == 1) {
//                                              habilitar = "disabled";
//                                              sentencia = "Con Sentencia";
//
//                                              existe = ' style="cursor:no-drop;text-decoration:none"';
//                                          } else {
                                              existe = ' data-toggle="collapse"';
                                              algunsin++;
//                                          }
                                          $('#btnconinm').prop("disabled", true);
                                          apelaciones[contadorapelaciones] = new Array(7);
                                          apelaciones[contadorapelaciones][0] = json.data[i].id;
                                          apelaciones[contadorapelaciones][1] = 0;
                                          apelaciones[contadorapelaciones][2] = 0;
                                          apelaciones[contadorapelaciones][3] = 0;
                                          apelaciones[contadorapelaciones][4] = 0;
                                          apelaciones[contadorapelaciones][5] = 0;
                                          apelaciones[contadorapelaciones][6] = 0;
                                          apelaciones[contadorapelaciones][7] = json.data[i].nombre + '  /  ' + json.data[i].ofendido + '  /  ' + json.data[i].delito;
                                          contadorapelaciones++;

                                          var alerta = '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="form-group"><div class="alert alert-info alert-dismissable" id="infocent' + (i + 1) + '" style="display: none;"></div></div>';
//                                          var alerta = '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="form-group"><div class="alert alert-info alert-dismissable" id="infocent' + (i + 1) + '" style="display: none;">';
//                                          alerta += '<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
//                                          alerta += '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="alert alert-success alert-dismissable" id="corrgdd' + (i + 1) + '" style="display: none;">';
//                                          alerta += '<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
//                                          alerta += '</div></div>';
//                                          alerta += '</div></div>';

                                          valorid=(i);
                                          tabladli += '<tr id="tr' + (i + 1) + '"><td>' + (i + 1) + '</td><td>' + json.data[i].nombre + '</td><td>' + json.data[i].ofendido + '</td><td>' + json.data[i].delito + '</td><td><span id="spa' + (i + 1) + '"> ' + sentencia + '</span></td><td><center><input type="checkbox" id="chec' + (i + 1) + '"  ' + habilitar + '/></center><input type="hidden" id="valchec' + (i + 1) + '" value="' + json.data[i].id + '" ></input></td></tr>';
                                          acordion += '  <div class="panel panel-default" id="acordeon' + (i + 1) + '">';

                                          acordion += '   <div class="panel-heading">';
                                          acordion += '      <h4 class="panel-title" onclick="limparselectssentencia(' + json.totalCount + ')">';
                                          acordion += (i + 1) + ' -  &nbsp;&nbsp;<input class="imputados" data-id="'+ (i + 1) +'" type="checkbox" id="chec' + (i + 1) + '"  ' + habilitar + '/></center><input type="hidden" id="valchec' + (i + 1) + '" value="' + json.data[i].id + '" ></input>        <a id="achec' + (i + 1) + '" ' + existe + ' data-parent="#accordion" href="#collapse' + (i + 1) + '">';
                                          acordion += '&nbsp;&nbsp;&nbsp;' + json.data[i].nombre + '  /  ' + json.data[i].ofendido + '  /  ' + json.data[i].delito + '</a>';
                                          acordion += '      </h4>';
                                          acordion += '    </div>';
                                          acordion += '   <div id="collapse' + (i + 1) + '" class="panel-collapse collapse">';
                                          acordion += '     ';
                                          //aqui va
                                          acordion += '<br><div class="panel-heading"><h5 class="panel-title">Apelaci&oacute;n</h5></div><div class="form-group">' + '           <br>  <br> <label class="control-label col-xs-12 col-sm-3 col-md-3">Apelaci&oacute;n del imputado </label>' + '             <div class="col-xs-12 col-sm-7 col-md-6">' + '                 &nbsp;&nbsp;<select id="selectapelac' + (i + 1) + '"  onchange="editarapelacion(this.value,' + (i + 1) + ')"  class="imputadoApelacion">' + '                     <option value="N">NO</option>' + '                     <option value="S">SI</option>' + '                 </select>' + '                 <button id="edit_' + (i + 1) + '" onclick="cargarapelacion(' + (i + 1) + ')"  type="button" class="btn btn-default btn-sm" aria-label="Left Align" disabled="disabled" style="display:none">' + '                     <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Apelaci&oacute;n' + '                 </button>' + '             </div>' + '         </div>';						
                                          acordion +=' <div id="captapelacion' + (i + 1) + '" style="display:none">';
  //                                        acordion +='    <div class="panel-heading">';
  //                                        acordion +=' <h5 class="panel-title">';                                                            
  //                                        acordion +=' Sentencias/Captura de apelacion';                         
  //                                        acordion +=' </h5>';
  //                                        acordion +=' </div>';
  //                                        acordion +=' <br>';
  //                                        acordion +=' <br>';
                                          acordion +=' <div>';
                                          acordion +=' <div class="form-group">'; 
                                          acordion +=' <input type="hidden" id="idImputadoCarpeta'+ (i + 1) +'"/>'; 
                                          acordion +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">Sentido <label style="color:darkred">(*)</label></label>';
                                          acordion +=' <div class="col-xs-12 col-sm-8 col-md-7" id="divsentidos' + (i + 1) + '">';
                                          acordion +=' <select id="selectsentido' + (i + 1) + '" class="form-control" tabindex="6"></select>';
                                          acordion +=' </div>';
                                          acordion +=' </div>';
                                          acordion +=' <div class="form-group">';
                                          acordion +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">No. de Toca <label style="color:darkred">(*)</label></label>';
                                          acordion +=' <div class="col-xs-9 col-sm-9 col-md-9">';
                                          acordion +=' <input type="text" id="numerotoca'+ (i + 1) +'" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline" onblur="llenadoapelaciones('+ (i + 1) +')"/>';
                                          acordion +='                        /';
                                          acordion +=' <input type="text" id="aniotoca'+ (i + 1) +'" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline" onblur="llenadoapelaciones('+ (i + 1) +')"/>';
                                          acordion +=' </div>';
                                          acordion +=' </div>';
                                          acordion +=' <div class="form-group">';
                                          acordion +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">Sala <label style="color:darkred">(*)</label></label>';
                                          acordion +=' <div class="col-xs-12 col-sm-8 col-md-7">';
                                          acordion +=' <select id="select_mcautelares_salastoca'+ (i + 1) +'" class="form-control" tabindex="6" onchange="llenadoapelaciones('+ (i + 1) +')"></select>';
                                          acordion +=' </div>';
                                          acordion +=' </div>';
                                          acordion +=' <div class="form-group" style="display:none">';
                                          acordion +=' <div class="col-xs-offset-3 col-xs-9">';
                                          acordion +=' <input type="submit" class="btn btn-primary" value="Limpiar Apelaci&oacute;n" onclick="limpiarapelacion('+ (i + 1) +')">';
                                          acordion +=' </div>';
                                          acordion +=' </div>';
                                          acordion +=' <div class="form-group">';
                                          acordion +=' <div class="form-group"><div class="alert alert-info alert-dismissable" id="infresol" style="display: none;">';
                                          acordion +=' <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
                                          acordion +=' </div></div>';
                                          acordion +=' </div>';

                                          acordion +=' </div>';
                                          acordion +=' </div>';
                                          //fin aqui va
                                          acordion += '      <div class="panel-heading"><h5 class="panel-title">Sanciones</h5></div><div class="panel-body" >';
                                          acordion += '  <div class="form-group">';
                                          acordion += '     <label class="control-label col-xs-12 col-sm-3 col-md-3 needed" id="label_actam_text1' + (i + 1) + '">Sancion <label style="color:darkred">(*)</label></label>';
                                          acordion += '     <div class="col-xs-9 col-sm-8 col-md-8" id="divtipsnc' + (i + 1) + '">';
                                          acordion += '   </div>  ';
                                          acordion += '  <div class="col-sm-12" id="divsenten' + (i + 1) + '"></div>' + alerta + '<div class="col-sm-12" id="divdsanciones' + (i + 1) + '"></div></div></div>';

                                          acordion += '  </div></div>';
                                          //acordion += 'numerotoca'+ (i + 1)+'")';
                                          //$('#aniotoca'+ (i + 1)).validaCampo('0123456789');

                                          totalcheck++;
                                      }
                                  } else {
                                      var j = totalcheck;
                                      var existe = '';
                                      var algunsin = 0;
                                      for (var i = 0; i < json.totalCount; i++) {
                                          habilitar = "";
                                          sentencia = "Disponible";

                                          if (json.data[i].agregado == 0 && json.data[i].idactuacion == 0) {

                                              if ($('#idsentenc').val() != json.data[i].idactuacion) {

                                                  apelaciones[contadorapelaciones] = new Array(7);
                                                  apelaciones[contadorapelaciones][0] = json.data[i].id;
                                                  apelaciones[contadorapelaciones][1] = 0;
                                                  apelaciones[contadorapelaciones][2] = 0;
                                                  apelaciones[contadorapelaciones][3] = 0;
                                                  apelaciones[contadorapelaciones][4] = 0;
                                                  apelaciones[contadorapelaciones][5] = 0;
                                                  apelaciones[contadorapelaciones][6] = 0;
                                                  apelaciones[contadorapelaciones][7] = json.data[i].nombre + '  /  ' + json.data[i].ofendido + '  /  ' + json.data[i].delito;
                                                  contadorapelaciones++;
                                                  if (acordion2.length < 5) {
                                                      acordion2 += '<div class="panel-group" id="accordion">';

                                                  }
                                                  var alerta = '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="form-group"><div class="alert alert-info alert-dismissable" id="infocent' + (j + 1) + '" style="display: none;"></div></div>';
//                                                  var alerta = '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="alert alert-info alert-dismissable" id="infocent' + (j + 1) + '" style="display: none;">';
//                                                  alerta += '<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
//                                                  alerta += '</div></div>';
//                                                  alerta += '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="alert alert-success alert-dismissable" id="corrgdd' + (j + 1) + '" style="display: none;">';
//                                                  alerta += '<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
//                                                  alerta += '</div></div>';

                                                  acordion2 += '<div class="panel panel-default" id="acordeon' + (j + 1) + '">';
                                                  acordion2 += '   <div class="panel-heading">';
                                                  acordion2 += '      <h4 class="panel-title" onclick="limparselectssentencia(' + json.totalCount + ')">';

                                                  acordion2 += (j + 1) + ' -  &nbsp;&nbsp;<input type="checkbox" id="chec' + (j + 1) + '"  ' + habilitar + '/></center><input type="hidden" id="valchec' + (j + 1) + '" value="' + json.data[i].id + '"  ></input>        <a  data-toggle="collapse" data-parent="#accordion" href="#collapse' + (j + 1) + '">';
                                                  acordion2 += '&nbsp;&nbsp;&nbsp;' + json.data[i].nombre + '  /  ' + json.data[i].ofendido + '  /  ' + json.data[i].delito + '</a>';
                                                  acordion2 += '      </h4>';
                                                  acordion2 += '    </div>';
                                                  acordion2 += '   <div id="collapse' + (j + 1) + '" class="panel-collapse collapse">';
                                                  acordion2 += '     ';
                                                  //aqui va
                                                  acordion2 += '<br><div class="panel-heading"><h5 class="panel-title">Apelaci&oacute;n</h5></div><div class="form-group">' + '           <br>  <br> <label class="control-label col-xs-12 col-sm-3 col-md-3">Apelaci&oacute;n del imputado </label>' + '             <div class="col-xs-12 col-sm-7 col-md-6">' + '                 &nbsp;&nbsp;<select id="selectapelac' + (j + 1) + '"  onchange="editarapelacion(this.value,' + (j + 1) + ')"  class="imputadoApelacion">' + '                     <option value="N">NO</option>' + '                     <option value="S">SI</option>' + '                 </select>' + '                 <button id="edit_' + (j + 1) + '" onclick="cargarapelacion(' + (j + 1) + ')"  type="button" class="btn btn-default btn-sm" aria-label="Left Align" disabled="disabled" style="display:none">' + '                     <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Apelaci&oacute;n' + '                 </button>' + '             </div>' + '         </div>';						
                                                  acordion2 +=' <div id="captapelacion' + (j + 1) + '" style="display:none">';
          //                                        acordion2 +='    <div class="panel-heading">';
          //                                        acordion2 +=' <h5 class="panel-title">';                                                            
          //                                        acordion2 +=' Sentencias/Captura de apelacion';                         
          //                                        acordion2 +=' </h5>';
          //                                        acordion2 +=' </div>';
          //                                        acordion2 +=' <br>';
          //                                        acordion2 +=' <br>';
                                                  acordion2 +=' <div>';
                                                  acordion2 +=' <div class="form-group">'; 
                                                  acordion2 +=' <input type="hidden" id="idImputadoCarpeta'+ (j + 1) +'"/>'; 
                                                  acordion2 +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">Sentido <label style="color:darkred">(*)</label></label>';
                                                  acordion2 +=' <div class="col-xs-12 col-sm-8 col-md-7" id="divsentidos' + (j + 1) + '">';
                                                  acordion2 +=' <select id="selectsentido' + (j + 1) + '" class="form-control" tabindex="6"></select>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' <div class="form-group">';
                                                  acordion2 +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">No. de Toca <label style="color:darkred">(*)</label></label>';
                                                  acordion2 +=' <div class="col-xs-9 col-sm-9 col-md-9">';
                                                  acordion2 +=' <input type="text" id="numerotoca'+ (j + 1) +'" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline" onblur="llenadoapelaciones('+ (j + 1) +')"/>';
                                                  acordion2 +='                        /';
                                                  acordion2 +=' <input type="text" id="aniotoca'+ (j + 1) +'" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline" onblur="llenadoapelaciones('+ (j + 1) +')"/>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' <div class="form-group">';
                                                  acordion2 +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">Sala <label style="color:darkred">(*)</label></label>';
                                                  acordion2 +=' <div class="col-xs-12 col-sm-8 col-md-7">';
                                                  acordion2 +=' <select id="select_mcautelares_salastoca'+ (j + 1) +'" class="form-control" tabindex="6" onchange="llenadoapelaciones('+ (j + 1) +')"></select>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' <div class="form-group" style="display:none">';
                                                  acordion2 +=' <div class="col-xs-offset-3 col-xs-9">';
                                                  acordion2 +=' <input type="submit" class="btn btn-primary" value="Limpiar Apelaci&oacute;n" onclick="limpiarapelacion('+ (j + 1) +')">';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' </div>';
                                                  acordion2 +=' <div class="form-group">';
                                                  acordion2 +=' <div class="form-group"><div class="alert alert-info alert-dismissable" id="infresol" style="display: none;">';
                                                  acordion2 +=' <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
                                                  acordion2 +=' </div></div>';
                                                  acordion2 +=' </div>';

                                                  acordion2 +=' </div>';
                                                  acordion2 +=' </div>';
                                                  //fin aqui va
                                                  acordion2 += '      <div class="panel-heading"><h5 class="panel-title">Sanciones</h5></div><div class="panel-body" >';
                                                  acordion2 += '  <div class="form-group">';
                                                  acordion2 += '     <label class="control-label col-xs-12 col-sm-3 col-md-3 needed" id="label_actam_text1' + (j + 1) + '">Sancion <label style="color:darkred">(*)</label></label>';
                                                  acordion2 += '     <div class="col-xs-9 col-sm-8 col-md-8" id="divtipsnc' + (j + 1) + '">';
                                                  acordion2 += '   </div>';
                                                  acordion2 += '  <div class="col-sm-12" id="divsenten' + (j + 1) + '"></div>' + alerta + '<div class="col-sm-12" id="divdsanciones' + (j + 1) + '"></div></div></div>';

                                                  acordion2 += '   </div></div>';
                                                  totalcheck++;
                                                  j++;
                                              }
                                          }
                                      }
                                      $('#btnregsanc').show();
                                      $('#divtbpr').show();

                                      $('#divtbpr').html(acordion2); 
                                             
                                        for (var ia = 0; ia < json.totalCount; ia++)
                                        {
                                            $('#numerotoca' + ia).validaCampo('0123456789');
                                            $('#aniotoca' + ia).validaCampo('0123456789');
                                        }     
                                      /*

                                            for(var x=0;x<=totalcheck;x++){
                                              if(arraddsen[x]!='undefinied'){

                                      var alerta='<div class="form-group"><div class="form-group"><div class="alert alert-info alert-dismissable" id="infocent'+x+'" style="display: none;">';
                                          alerta+='<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
                                          alerta+='</div></div>';

                                                  $('#divdsanciones'+x).html(alerta+arraddsen[x]);
                                              }
                                            }
                                      */
                                      combosanciones(totalcheck);
                                      return;
                                  }
                                  combosanciones(totalcheck);
                                  cosultarsentido(totalcheck,0);
                                  
                                  getSalas(totalcheck,0);
                                  $('#tipscarpts').prop("disabled", true);
                                  $('#cmbdistrito').prop("disabled", true);
                                  $('#numer').prop("disabled", true);
                                  $('#anio').prop("disabled", true);

                                  if (algunsin == 0) {
                                      $("#infosr").html('<span>Sin imputados a agregar. <span>').fadeIn('slow').delay(1000).fadeOut('slow');

                                  }
                                  $('#btnregsanc').show();
                                  $('#divtbpr').show();
                                  acordion += '</div>';
                                  $('#divtbpr').html(acordion);
                                  for (var i = 0; i < json.totalCount; i++)
                                  {
                                      $('#numerotoca'+ (i + 1)).validaCampo('0123456789');
                                      $('#aniotoca'+ (i + 1)).validaCampo('0123456789');
                                      //cosultarsentido((i + 1));
                                  }
                              } catch (Exception) {
                                  $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                              }
                          },
                          error: function(objeto) {
                              $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');

                          }
                      });

                      $.ajax({
                          type: "POST",
                          url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                          async: false,
                          data: {
                              idCarpetaJudicial: idcarpeta,
                              accion: 'consultar',
                          },
                          beforeSend: function() {

                          },
                          success: function(datos) {
                              var json;
                              try {
                                  json = eval("(" + datos + ")"); //Parsear JSON
                                  if (json.totalCount == 0) {
                                      $("#info").html('<span>Sin resultados 5<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                                      return;
                                  }
                                  return;
                                  var opciones = "<select class='form-control' id='selim' onchange='consultarimputadossanciones()'>";
                                  var tabladli = '<table id="ltsPromoventes" class="table table-bordered tblGridAgrega" ><tr><th class="trGridAgrega">No</th><th class="trGridAgrega">Imputado</th><th class="trGridAgrega">Seleccionar</th></tr>';
                                  for (var i = 0; i < json.totalCount; i++) {
                                      opciones += '<option value="' + json.data[i].idImputadoCarpeta + '">' + json.data[i].paterno + " " + json.data[i].materno + " " + json.data[i].nombre + '</option>';
                                      tabladli += '<tr><td>' + (i + 1) + '</td><td>' + json.data[i].paterno + " " + json.data[i].materno + " " + json.data[i].nombre + '</td><td><center><input type="checkbox" id="chec' + (i + 1) + '"/></center><input type="hidden" id="valchec' + (i + 1) + '" value="' + json.data[i].idImputadoCarpeta + '"></input></td></tr>';
                                      totalcheck++;
                                  }
                                  opciones += "</select>";
                                  $("#selimputados").html(opciones);
                                  ops = $("select#selim option");
                                  ops.sort(function(a, b) {
                                      return ($(a).html().toUpperCase() < $(b).html().toUpperCase()) ? -1 : ($(a).html().toUpperCase() > $(b).html().toUpperCase()) ? 1 : 0;
                                  });
                                  html = "<option value=' '>SELECCIONE UNA OPCI\u00d3N</option>";
                                  for (i = 0; i < ops.length; i++) {
                                      html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>";
                                  }
                                  $("select#selim").html(html);
                                  $('#divimputado').show();
                              } catch (Exception) {
                                  $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                              }

                          },
                          error: function(objeto) {
                              $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');

                          }
                      });

                  } catch (Exception) {
                      $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                  }
              },
              error: function(objeto) {
                  $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');

              }
          });  
        }
    }
    //Fin de consultar imputados
    
    //Consultar sanciones
    function combosanciones(totalimputados) {
        var contadtotalcobos = 1;
        ////////////////////////////////  tipossanciones
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tipossanciones/TipossancionesFacade.Class.php",
            async: true,
            data: {
                accion: 'seleccionarsanciones',
                activo: 'S'
            },
            beforeSend: function() {

            },
            success: function(datos) {
                var json;
                try {
                    json = eval("(" + datos + ")"); //Parsear JSON

                    for (contadtotalcobos; contadtotalcobos <= totalimputados; contadtotalcobos++) {
                        
                        var opciones = "<select class='form-control' id='seltpsa" + contadtotalcobos + "' onchange='addsentencia(" + contadtotalcobos + ",this.value," + totalimputados + ")'>";

                        for (var i = 0; i < json.totalCount; i++) {

                            if (json.data[i].Beneficio=="N") {
                                //alert(json.data[i].Beneficio+"-"+json.data[i].cveTipoSancion);
                                opciones += '<option value="' + json.data[i].cveTipoSancion + '">' + json.data[i].desTipoSancion + '</option>';
                            }
                        }
                        opciones += "</select>";
                        $("#divtipsnc" + contadtotalcobos).html(opciones + ' <span id="errsanc" class="err" style="display:none">Este campo es obligatorio.</span>');
                        ops = $("select#seltpsa" + contadtotalcobos + " option");
                        ops.sort(function(a, b) {
                            return ($(a).html().toUpperCase() < $(b).html().toUpperCase()) ? -1 : ($(a).html().toUpperCase() > $(b).html().toUpperCase()) ? 1 : 0;
                        });
                        html = '<option value="0">SELECCIONE UNA OPCI\u00d3N</option>';
                        for (i = 0; i < ops.length; i++) {
                            html += "<option value='" + $(ops[i]).val() + "'>" + $(ops[i]).html() + "</option>";
                        }
                        $("select#seltpsa" + contadtotalcobos).html(html);
                        $('#divtipsnc' + contadtotalcobos).show();
                        //alert(contadorestatus);
                    }
                    for (a=1;a<=contadorestatus;a++){   
                        var ee=$('#seleststsent1').val();
                        if(ee==12)
                        {
                            $('#label_actam_text1'+a).hide();
                            $('#seltpsa'+a).hide();
                            //$('#selectsentido'+a).attr("disabled", true);
                        }
                        else{
                            $('#label_actam_text1'+a).show();
                            $('#seltpsa'+a).show();
                            //$('#selectsentido'+a).attr("disabled", false);
                        }
                    }
                } catch (Exception) {
                    $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            },
            error: function(objeto) {
                $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
            }
        });
    }
    //Fin de consultar sanciones


    function consultarimputadossanciones(str) {
        
        $('#btnregsanc').show();
        consgl2 = str;
        var carpeta = $('#tipscarpts').val();
        var numero = $('#na1').val();
        var anio = $('#aa1').val();
        var tipoJuzgado4 = $("#cmbdistrito").val().split("/");
        var distritojuzgado = tipoJuzgado4[0];

        $("#divsentenciados").hide();
        $('#btnscrud').hide();
        $('#idamons').hide();
        $('#errimputado').hide();
        totallista = 0;
        var opciones;
        var imputado = $('#selim').val();
        $('#divsentencias').hide();
        // $("#divsentenciados").hide();

        if (imputado < 1) {
            $('#selim').focus();

            $('#errimputado').show();
            return;
        }
        var ddelito = "";

        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/imputadossentencias/ImputadossentenciasFacade.Class.php",
            async: true,
            data: {
                idActuacion: str,
                activo: 'S',
                accion: 'consultarsentenciasconsanciones'
            },
            beforeSend: function() {

            },
            success: function(datos) {
                var json;
                try {
                    json = eval("(" + datos + ")"); //Parsear JSON

                    $('#altas').show();
                    $('#consultas').hide();
                    $('#divtbpr').show();
                    // $("#divsentenciados").show();
                    if (json.estatus == "Fail") {
                        $("#info").html('<span>Sin resultados<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                        //consultarimputados(1);
                        return;
                    }
                    if (json.totalCount == 0) {
                        //consultarimputados(1);
                        $("#info").html('<span>Sin resultados<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                        return;
                    }
                    var numero = 1;
                    var i = 0;
                    totalcheck = 0;
                    var j = totalcheck;

                    acordion2 = '<div class="panel-group" id="accordion">';

                    var existe = '';
                    var algunsin = 0;
                    var checar = "";
                    var inform = "";
                    var cont = 0;
                    var habilitar = "";
                    
                    for (i = 0; i < json.totalCount; i++) {

                        var ideimputado = json.data[i].idimpofe;
                        var clase = "";
                        var select = "";
                        var select2 = "";

                        if (json.data[i].apelacion.length != 0) {
                            apelaciones[contadorapelaciones] = new Array(7);
                            apelaciones[contadorapelaciones][0] = ideimputado;
                            apelaciones[contadorapelaciones][1] = json.data[i].apelacion.sentido;
                            apelaciones[contadorapelaciones][2] = json.data[i].apelacion.numtoca;
                            apelaciones[contadorapelaciones][3] = json.data[i].apelacion.aniotoca;
                            apelaciones[contadorapelaciones][4] = json.data[i].apelacion.sala;
                            apelaciones[contadorapelaciones][5] = 1;
                            apelaciones[contadorapelaciones][6] = 0;
                            apelaciones[contadorapelaciones][7] = json.data[i].impofedel;
                            
                            clase = 'class="btn btn-primary btn-sm" aria-label="Left Align"';
                            select = "selected";
//                            if(apelaciones[contadorapelaciones][1]!=0)
//                            {
//                                //cargarapelacion((j + 1));
//                                editarapelacion('S',(j + 1));
//                                var eel="$('#selectapelac"+(j + 1)+" > option[value='S']').attr('selected', 'selected')";
//                                alert(eel);
//                            }
                        } else {

                            apelaciones[contadorapelaciones] = new Array(7);
                            apelaciones[contadorapelaciones][0] = ideimputado;
                            apelaciones[contadorapelaciones][1] = 0;
                            apelaciones[contadorapelaciones][2] = 0;
                            apelaciones[contadorapelaciones][3] = 0;
                            apelaciones[contadorapelaciones][4] = 0;
                            apelaciones[contadorapelaciones][5] = 1;
                            apelaciones[contadorapelaciones][6] = 2;
                            apelaciones[contadorapelaciones][7] = json.data[i].impofedel;
                            select2 = "selected";
                            clase = 'class="btn btn-default btn-sm" aria-label="Left Align" disabled="disabled"';
                        }

                        contadorapelaciones++;
                        contadorestatus++;
                        var alerta = '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="form-group"><div class="alert alert-info alert-dismissable" id="infocent' + (j + 1) + '" style="display: none;"></div></div>';
//                        var alerta = '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="alert alert-info alert-dismissable" id="infocent' + (j + 1) + '" style="display: none;">';
//                        alerta += '<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
//                        alerta += '</div></div>';
//                        alerta += '<div class="col-xs-12 col-sm-12 col-md-12 needed"><div class="alert alert-success alert-dismissable" id="corrgdd' + (j + 1) + '" style="display: none;">';
//                        alerta += '<button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
//                        alerta += '</div></div>';
                        var checads = "";
                        if (json.totalCount > 1) {
                            checads = '  onchange="validareliminacionimputsente(' + (json.data[i].setIdImputadoSentencia) +','+(j + 1)+ ')"';
                        } else {
                            checads = " disabled";
                        }

                        $('#btnconinm').prop("disabled", true);
                        acordion2 += '<div class="panel panel-default">';
                        acordion2 += '  <div class="panel-heading">';
                        acordion2 += '    <h4 class="panel-title" onclick="limparselectssentencia(' + json.totalCount + '),construirsanciones(' + (j + 1) + ')">';
                        acordion2 += (j + 1) + ' -  &nbsp;&nbsp;<input class="imputados" type="checkbox" data-id="'+ (j + 1) +'" id="checagregado' + (j + 1) + '"  checked ' + checads + '>';
                        acordion2 += '<input type="hidden" id="valchec' + (j + 1) + '"  value="' + ideimputado + '" ></input><input type="hidden" id="valsentencia' + (j + 1) + '"  value="' + json.data[i].setIdImputadoSentencia + '"/>';
                        acordion2 += '<a id="achec' + (j + 1) + '" data-toggle="collapse" data-parent="#accordion" href="#collapse' + (j + 1) + '">&nbsp;&nbsp;&nbsp;&nbsp;' + json.data[i].impofedel + '</a>';
                        acordion2 += '    </h4>';
                        acordion2 += '   </div>';
                        acordion2 += '  <div id="collapse' + (j + 1) + '" class="panel-collapse collapse">';
                        //aqui va
                        acordion2 += '<br><div class="panel-heading"><h5 class="panel-title">Apelaci&oacute;n</h5></div><div class="form-group">' + '           <br>  <br> <label class="control-label col-xs-12 col-sm-3 col-md-3">Apelaci&oacute;n del imputado </label>' + '             <div class="col-xs-12 col-sm-7 col-md-6">' + '                 &nbsp;&nbsp;<select id="selectapelac' + (j + 1) + '"  onchange="editarapelacion(this.value,' + (j + 1) + ')"  class="imputadoApelacion">' + '                     <option value="N">NO</option>' + '                     <option value="S">SI</option>' + '                 </select>' + '                 <button id="edit_' + (j + 1) + '" onclick="cargarapelacion(' + (j + 1) + ')"  type="button" class="btn btn-default btn-sm" aria-label="Left Align" disabled="disabled" style="display:none">' + '                     <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Apelaci&oacute;n' + '                 </button>' + '             </div>' + '         </div>';
			acordion2 +=' <div id="captapelacion' + (j + 1) + '" style="display:none">';
//                      acordion2 +='    <div class="panel-heading">';
//                      acordion2 +=' <h5 class="panel-title">';                                                            
//                      acordion2 +=' Sentencias/Captura de apelacion';                         
//                      acordion2 +=' </h5>';
//                      acordion2 +=' </div>';
//                      acordion2 +=' <br>';
//                      acordion2 +=' <br>';
                        acordion2 +=' <div>';
                        acordion2 +=' <div class="form-group">'; 
                        acordion2 +=' <input type="hidden" id="idImputadoCarpeta'+ (j + 1) +'"/>'; 
                        acordion2 +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">Sentido <label style="color:darkred">(*)</label></label>';
                        acordion2 +=' <div class="col-xs-12 col-sm-8 col-md-7" id="divsentidos' + (j + 1) + '">';
                        acordion2 +=' <select id="selectsentido' + (j + 1) + '" class="form-control" tabindex="6"></select>';
                        acordion2 +=' </div>';
                        acordion2 +=' </div>';
                        acordion2 +=' <div class="form-group">';
                        acordion2 +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">No. de Toca <label style="color:darkred">(*)</label></label>';
                        acordion2 +=' <div class="col-xs-9 col-sm-9 col-md-9">';
                        acordion2 +=' <input type="text" id="numerotoca'+ (j + 1) +'" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline" onblur="llenadoapelaciones('+ (j + 1) +')"/>';
                        acordion2 +='                        /';
                        acordion2 +=' <input type="text" id="aniotoca'+ (j + 1) +'" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline" onblur="llenadoapelaciones('+ (j + 1) +')"/>';
                        acordion2 +=' </div>';
                        acordion2 +=' </div>';
                        acordion2 +=' <div class="form-group">';
                        acordion2 +=' <label class="control-label col-xs-12 col-sm-3 col-md-3">Sala <label style="color:darkred">(*)</label></label>';
                        acordion2 +=' <div class="col-xs-12 col-sm-8 col-md-7">';
                        acordion2 +=' <select id="select_mcautelares_salastoca'+ (j + 1) +'" class="form-control" tabindex="6" onchange="llenadoapelaciones('+ (j + 1) +')"></select>';
                        acordion2 +=' </div>';
                        acordion2 +=' </div>';
                        acordion2 +=' <div class="form-group" style="display:none">';
                        acordion2 +=' <div class="col-xs-offset-3 col-xs-9">';
                        acordion2 +=' <input type="submit" class="btn btn-primary" value="Limpiar Apelaci&oacute;n" onclick="limpiarapelacion('+ (j + 1) +')">';
                        acordion2 +=' </div>';
                        acordion2 +=' </div>';
                        acordion2 +=' <div class="form-group">';
                        acordion2 +=' <div class="form-group"><div class="alert alert-info alert-dismissable" id="infresol" style="display: none;">';
                        acordion2 +=' <button type="button" class="close" data-dismiss="alert">&times;</button><strong>Informaci&oacute;n!</strong> Mensaje';
                        acordion2 +=' </div></div>';
                        acordion2 +=' </div>';

                        acordion2 +=' </div>';
                        acordion2 +=' </div>';
                        //fin aqui va                        acordion2 += '</div></div>';
			acordion2 += '    <div class="panel-heading"><h5 class="panel-title">Sanciones</h5></div><div class="panel-body">';
                        acordion2 += '<div class="form-group">';
                        acordion2 += '     <label class="control-label col-xs-12 col-sm-3 col-md-3 needed" id="label_actam_text1' + (j + 1) + '">Sancion <label style="color:darkred">(*)</label></label>';
                        acordion2 += '     <div class="col-xs-9 col-sm-8 col-md-8" id="divtipsnc' + (j + 1) + '">';
                        acordion2 += '   </div>';
                        acordion2 += '  <br><div class="col-sm-12" id="divsenten' + (j + 1) + '"></div> ' + alerta + '<div class="col-sm-12" id="divdsanciones' + (j + 1) + '"></div></div></div>';
                         
                        //acordion2 += ' <div class="col-sm-12" id="divdsanciones' + (j + 1) + '"></div><label style="color:#FFF">s</label></div>';
                        acordion2 += '</div></div>';
                       
                        inform = "";
                        
                        if (updateRecord == "S") {
                            $("#guardar").show();
                        }
                        else
                        {
                            $("#guardar").hide();
                        }
                        
                        if (json.data[i].contadorbeneficios > 0) {

                            for (var ben = 0; ben < json.data[i].contadorbeneficios; ben++) {
                                arraybeneficios[contadorbeneficios] = new Array(8);

                                arraybeneficios[contadorbeneficios][0] = json.data[i].beneficios[ben].especificacion;
                                arraybeneficios[contadorbeneficios][1] = json.data[i].beneficios[ben].desctiposancion;
                                arraybeneficios[contadorbeneficios][2] = json.data[i].beneficios[ben].fecha;
                                arraybeneficios[contadorbeneficios][3] = json.data[i].beneficios[ben].idBeneficioES;
                                arraybeneficios[contadorbeneficios][4] = json.data[i].beneficios[ben].idsancion;
                                arraybeneficios[contadorbeneficios][5] = json.data[i].beneficios[ben].tipo;
                                arraybeneficios[contadorbeneficios][6] = json.data[i].beneficios[ben].multa;
                                arraybeneficios[contadorbeneficios][7] = json.data[i].beneficios[ben].idsancionnuevo;
                                
                                contadorbeneficios++;
                            }
                        }    
                        if (json.data[i].totalSancion > 0) {
//                            console.log(json);
                            for (var sanc = 0; sanc < json.data[i].totalSancion; sanc++) {

                                var tipoe = 0;
                                var dinero = 0;
                                var amonestado = 0;
                                var valorprision = 0;
                                var anio = 0;
                                var mes = 0;
                                var dia = 0;
                                var fechinicio = "";
                                var fechtermina = "";
                                var fechinicio2 = 0;
                                var fechtermina2 = 0;
                                var especificacion="";
                                var especificacionnuevo="";
                                tipoe = json.data[i].sanciones[sanc].tipo;
//                                console.log(tipoe);                              
                                especificacion=json.data[i].sanciones[sanc].especificacion;
                                var idimps = json.data[i].sanciones[sanc].idsancion;
                                if (tipoe == 2) { ///Multa
                                    dinero = json.data[i].sanciones[sanc].multa;
                                }
                                if (tipoe == 3) { ////reparacion
                                    dinero = json.data[i].sanciones[sanc].repara;
                                }
                                var din = parseFloat(dinero);
                                dinero = din.toFixed(2);
                                if (tipoe == 4) { ////amonestacion
                                    amonestado = json.data[i].sanciones[sanc].amonestado;
                                }
                                
                                if (tipoe >= 12 && tipoe != 26) { ////NUEVAS SANCIONES

                                    
                                    fechinicio = json.data[i].sanciones[sanc].fechinicio;
                                    fechtermina = json.data[i].sanciones[sanc].fechtermina;
                                    fechinicio2 = json.data[i].sanciones[sanc].fechinicio;
                                    fechtermina2 = json.data[i].sanciones[sanc].fechtermina;
                                    especificacionnuevo=json.data[i].sanciones[sanc].especificacion;
                                    if(fechinicio=="31/12/1969"&&fechtermina=="31/12/1969")
                                    {
                                        valorprision = "Observaci&oacute;n:<br>Fecha Inicio: <br>Fecha Termina: ";
                                    }
                                    else
                                    {
                                        valorprision = "Observaci&oacute;n"+especificacionnuevo+"<br>Fecha Inicio: " + fechinicio+"<br>Fecha Termina: " + fechtermina;
                                    }
                                    
                                }
                                if (tipoe == 1) { ////prision

                                    anio = json.data[i].sanciones[sanc].anio;
                                    mes = json.data[i].sanciones[sanc].mes;
                                    dia = json.data[i].sanciones[sanc].dia;
                                    fechinicio = json.data[i].sanciones[sanc].fechinicio;
                                    fechtermina = json.data[i].sanciones[sanc].fechtermina;
                                    fechinicio2 = json.data[i].sanciones[sanc].fechinicio;
                                    fechtermina2 = json.data[i].sanciones[sanc].fechtermina;
                                    
                                    if(fechinicio=="31/12/1969"&&fechtermina=="31/12/1969")
                                    {
                                        valorprision = "A\u00F1os: " + anio + " <br>Meses: " + mes + "<br>Dias:" + dia +"<br>Fecha Inicio: <br>Fecha Termina: ";
                                    }
                                    else
                                    {
                                        valorprision = "A\u00F1os: " + anio + " <br>Meses: " + mes + "<br>Dias:" + dia +"<br>Fecha Inicio: " + fechinicio+"<br>Fecha Termina: " + fechtermina;
                                    }
                                    
                                }
                                if (tipoe == 2) { ///Multa
                                    inform += '<div id="divsancael' + contadorarray + '"  class="list-group" style="height:45px;position:relative" >';
                                    inform += '<a  class="list-group-item" onclick="modificasancion(' + (j + 1) + ',' + idimps + ',' + tipoe + ',' + dinero + ',\'' + amonestado + '\',' + anio + ',' + mes + ',' + dia + ')">';
                                    inform += ' <h4 class="list-group-item-heading">MULTA</h4>';
                                    inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + dinero + '</p>';
                                    inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="confelimsancion(' + (contadorarray) + ',' + idimps + ',' + contadorarray + ')" class="manita" title="Eliminar Sanci&oacute;n"></div>';
                                    
                                }
                                if (tipoe == 3) { ////reparacion
                                    inform += '<div   id="divsancael' + contadorarray + '" class="list-group" style="height:45px;position:relative" >';
                                    inform += '<a  class="list-group-item" onclick="modificasancion(' + (j + 1) + ',' + idimps + ',' + tipoe + ',' + dinero + ',\'' + amonestado + '\',' + anio + ',' + mes + ',' + dia + ')">';
                                    inform += ' <h4 class="list-group-item-heading">REPARACION DE DA\u00D1O</h4>';
                                    inform += ' <p class="list-group-item-text"> Cantidad  de Reparaci\u00F3n  $' + dinero + '</p>';
                                    inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="confelimsancion(' + (contadorarray) + ',' + idimps + ',' + contadorarray + ')" class="manita" title="Eliminar Sanci&oacute;n"></div>';
                                }
                                if (tipoe == 4) { ////amonestacion\
                                    if (amonestado == 'S') {
                                        amonestado = "SI";
                                    } else {
                                        amonestado = "NO";
                                    }
                                    inform += '<div   id="divsancael' + contadorarray + '" class="list-group" style="height:45px;position:relative" >';
                                    inform += '<a class="list-group-item" onclick="modificasancion(' + (j + 1) + ',' + idimps + ',' + tipoe + ',' + dinero + ',\'' + amonestado + '\',' + anio + ',' + mes + ',' + dia + ')">';
                                    inform += ' <h4 class="list-group-item-heading">AMONESTACI\u00D3N</h4>';
                                    inform += ' <p class="list-group-item-text">Amonestado: ' + amonestado + '</p>';
                                    inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="confelimsancion(' + (contadorarray) + ',' + idimps + ',' + contadorarray + ')" class="manita" title="Eliminar Sanci&oacute;n"></div>';
                                }
                                if (tipoe == 1) { ////prision
                                    inform += '<div   id="divsancael' + contadorarray + '" class="list-group" style="height:83px;position:relative" >';
                                    inform += '<a  class="list-group-item" onclick="modificasancion(' + (j + 1) + ',' + idimps + ',' + tipoe + ',' + dinero + ',\'' + amonestado + '\',' + anio + ',' + mes + ',' + dia + ')">';
                                    inform += ' <h4 class="list-group-item-heading">PRISI\u00D3N</h4>';
                                    inform += ' <p class="list-group-item-text">' + valorprision + '</p>';
                                    inform += '</a> <img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="confelimsancion(' + (contadorarray) + ',' + idimps + ',' + contadorarray + ')" class="manita" title="Eliminar Sanci&oacute;n"></div>';

                                }
                                if (tipoe == 26) { ////absuelto
                                    console.log('absuelto! . . . ');
                                    inform += '<div   id="divsancael' + contadorarray + '" class="list-group" style="height:45px;position:relative" >';
                                    inform += '<a  class="list-group-item" onclick="modificasancion(' + (j + 1) + ',' + idimps + ',' + tipoe + ',' + dinero + ',\'' + amonestado + '\',' + anio + ',' + mes + ',' + dia + ')">';
                                    inform += ' <h4 class="list-group-item-heading">ABSUELTO</h4>';
//                                    inform += ' <p class="list-group-item-text"> Cantidad  de Reparaci\u00F3n  $' + dinero + '</p>';
                                    inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="confelimsancion(' + (contadorarray) + ',' + idimps + ',' + contadorarray + ')" class="manita" title="Eliminar Sanci&oacute;n"></div>';
                                }
                                
                                arrayinsert[contadorarray] = new Array(14);

                                arrayinsert[contadorarray][0] = json.data[i].sanciones[sanc].idimp;
                                arrayinsert[contadorarray][1] = tipoe;
                                arrayinsert[contadorarray][2] = anio;
                                arrayinsert[contadorarray][3] = mes;
                                arrayinsert[contadorarray][4] = dia;
                                arrayinsert[contadorarray][5] = dinero;
                                arrayinsert[contadorarray][6] = dinero;
                                arrayinsert[contadorarray][7] = 2;
                                arrayinsert[contadorarray][8] = json.data[i].sanciones[sanc].idsancion;
                                arrayinsert[contadorarray][9]=especificacion;
                                arrayinsert[contadorarray][10] = fechinicio2;
                                arrayinsert[contadorarray][11] = fechtermina2;
                                arrayinsert[contadorarray][13] = especificacionnuevo;
                                arrayinsert[contadorarray][14] = json.data[i].sanciones[sanc].destiposancion;

                                contadorarray++;
                            }
                            cont++;
                        }
                        arraddsen[(j + 1)] = inform;
                        j++;
                        totalcheck++;
                    }
                    //alert(totalcheck);
                    
                    $('#btnregsanc').show();
                    $('#divtbpr').show();                    

                    for (var s = 0; s < contadorarray; s++) {
                        for (var t = (s + 1); t < (contadorarray) - 1; t++) {
                            if (arrayinsert[s][0] == arrayinsert[t][0] && arrayinsert[s][1] == arrayinsert[t][1]) {
                                arrayinsert[t][0] = 0;
                                arrayinsert[t][1] = 0;
                                arrayinsert[t][2] = 0;
                                arrayinsert[t][3] = 0;
                                arrayinsert[t][4] = 0;
                                arrayinsert[t][5] = 0;
                                arrayinsert[t][6] = 0;
                            }
                        }
                    }
                } catch (Exception) {
                    $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            },
            error: function(objeto) {
                $("#error").html('<span>Ocurrio un error al consultar los datos, intentalo de nuevo mas tarde</span>').fadeIn('slow').delay(1000).fadeOut('slow');

            }
        });
    }

    function cambiarimagen(idsancion) {
        limpiaraimp();
        $('#idsancionupdate').val(0);
        $('#impofesele').val(idsancion);
    }

    function valida(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla == 8) return true;
        patron = /\d/;
        te = String.fromCharCode(tecla);
        return patron.test(te);
    }

    function contamonetacion(id) {
        var tam = $('#seltpsa' + id).val();

        if (tam == 1) { //prision
            $('#divprision' + id).hide();
            $('#divamonesta' + id).hide();
            $('#divrepara' + id).hide();
            $('#divmulta' + id).hide();
            $('#divdprision' + id).show();
        }
        if (tam == 2) { //multa
            $('#divdprision' + id).hide();
            $('#divamonesta' + id).hide();
            $('#divrepara' + id).hide();
            $('#divmulta' + id).hide();
            $('#divmulta' + id).show();
        }
        if (tam == 3) { //reparacion
            $('#divdprision' + id).hide();
            $('#divamonesta' + id).hide();
            $('#divrepara' + id).hide();
            $('#divmulta' + id).hide();
            $('#divrepara' + id).show();
        }

        if (tam == 4) { //amonesta
            $('#divdprision' + id).hide();
            $('#divamonesta' + id).hide();
            $('#divrepara' + id).hide();
            $('#divmulta' + id).hide();
            $('#divamonesta' + id).show();
        }

        $('#selamon > option[value=""]').attr('selected', 'selected');
        $('#cantm1').val("");
        $('#sananio1').val("");
        $('#sanmes1').val("");
        $('#sandia1').val("");
        $('#crepar1').val("");
    }
    
    function obtenerPermisos() {
        var cveUsuarioSistema = cveUsuarioSesion;
        $.get("../archivos/" + cveUsuarioSistema + ".json",
                function (response) {
//                    alert(response.perfiles[0].totPerfiles);
//                    alert(cvePerfilSesion);
                    for(var i = 0; i < response.perfiles[0].totPerfiles; i++){
                        if(cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil){
                            //alert(response.perfiles[0].perfil[i].cvePerfil+"-"+"perfil encontrado..");
                            $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                //alert(vnombre.nomFormulario);
                                if(vnombre.nomFormulario == "CARPETAS JUDICIALES"){
                                    var hijos = vnombre.hijos;
                                    $.each(hijos, function (k2, nombreHijo) {
                                        if (nombreHijo.nomFormulario == 'SENTENCIAS') {
                                            var permisoFormulario = nombreHijo.permisoFormulario[0];
                                            createRecord = "S";
                                            readRecord = permisoFormulario.read;
                                            updateRecord = permisoFormulario.update;
                                            deleteRecord = permisoFormulario.delete;                                           
                                        }
                                    });
                                }    
                            });    
                        }    
                    }    
//                    alert("insert: "+createRecord+" consulta: "+readRecord+" act: "+updateRecord+" elim: "+deleteRecord);
                    
                    if (String(createRecord) === "S") {
                        $("#guardar").show();
                    }
                    else
                    {
                        $("#guardar").hide();
                    }
                    if (readRecord == "S") {
                        $("#consultarimputados").show();
                    }
                    else
                    {
                        $("#consultarimputados").hide();
                    }
                    if (updateRecord == "S") {
                        // $("#inputGuardar").show();
                    }
                   
//                    if (deleteRecord == "S") {
//                        $("#inputEliminar").show();
//                    }


                });
    }
    
    function guardaractuacion(nc) {
        
         var cvetiposentencia = $('#seltpsentencias' + nc).val();
       
       var insertar = true;
       var errorguardar = "Complete lo siguiente: <br>";
    
       if($('.imputados:checked').length>0){
           imputadosSelec=true;
        $('.imputados:checked').each(function() {
            impputadosSelec=true;
            
            if(cvetiposentencia !="2"){
             if(arrayinsert.length>0){
                var idCheck= this.id;
//                alert(idCheck); 
//                alert($(this).attr("data-id"));
                idCheck=$(this).attr("data-id");
         
                var idImputadoSel = $("#valchec"+idCheck).val();
                var encontrado = false;
                for(var i =0 ;i<arrayinsert.length;i++){
//                    alert(idImputadoSel+" || "+ arrayinsert[i][0]);
                    if(idImputadoSel== arrayinsert[i][0]){
                        encontrado=true;
                        break;
                    }
                    else{
                     //   alert("siguiente registro");
                    }
                }
                if(encontrado==false){
                    var nombre = $("#achec"+idCheck).text();
                    errorguardar+="<br> -falta registrar sanciones para "+nombre;
                    insertar = false;
               }
            }else{
              //alert("no se han registrado sanciones");
              errorguardar+="<br> -No ha registrado sanciones";
              insertar = false;
          }
      }
        });
    }else{
        //alert("no seleeciono imputados");
          errorguardar+="<br> -No selecciono imputados para la sentencia ";
             insertar = false;
    }
        
       // return true;

        $('#errnsent').hide();
        $('#errtpp').hide();
        $('#errfecs').hide();
        $('#errseljuez').hide();
        $('#errstats').hide();
        $('#errstatsen').hide();
        $('#errfejec').hide();
        $('#errsint').hide();
        $('#errsanc').hide();
        $('#erramones').hide();
        $('#errcmulta').hide();
        $('#errconts').hide();

        $('#erranios').hide();
        $('#errmeses').hide();
        $('#errdias').hide();

        $('#errcantrep').hide();

        $('#errimputado').hide();


        var juez = $('#seljuez1').val();
        var misjuecez = new Array();
        var cg = 0;
        for (var carj = 0; carj < contadordejueces; carj++) {
            var comp = listadojueces[carj];
            if (comp != 0) {
                misjuecez[cg] = comp;
                cg++;
            }
        }

        var errapelacion = false;
        var errorcorre = "Complete los siguientes campos:";
        for (var valape = 1; valape <= contadorapelaciones; valape++) {
            if ($('#selectapelac' + (valape)).val() == 'S' && $("#chec" + valape).is(':checked')) {


                if (apelaciones[valape][1] == 0) {
                    errapelacion = true;
                    errorcorre += "<br>-Seleccione el sentido de la resolucion";

                }
                if (apelaciones[valape][2] == 0) {
                    errapelacion = true;
                    errorcorre += "<br>-Teclea el numero de toca";

                }
                if (apelaciones[valape][3] == 0) {
                    errapelacion = true;
                    errorcorre += "<br>-Teclea el anio de toca";

                }
                if (apelaciones[valape][4] == 0) {
                    errapelacion = true;
                    errorcorre += "<br>-Seleccione la sala de la resolucion";
                }
                
                if (errapelacion == true) {

                    $('#altas').hide();
                    $('#captapelacion').show();

                    $("#infresol").html('<span>' + errorcorre + '<span>').fadeIn('slow').delay(2000).fadeOut('slow');
                    cargarapelacion(valape);
                    break;
                    return;
                }
            }
        }

        if (errapelacion == true) {
            return;
        }

        var tipoJuzgado3 = $("#cmbdistrito").val().split("/");
        var distritojuzgado = tipoJuzgado3[0];
        var tipscarpts = $('#tipscarpts').val();
        var estat = $('#seleststsent1').val();

        var cvetipactu = 4; ////sentencias
        var idreferencia = irdrefere;
        var inumero = $('#numer').val();
        var ianio = $('#anio').val();
        var cvejuzgado = distritojuzgado; //sesion
        var sintesis = $('#sintesis').val();
        var cveusuario = "<?php echo $_SESSION['cveUsuarioSistema'] ?>"; //sesion
        var activo = 'S';
        var cvetiposentencia = $('#seltpsentencias' + nc).val();
        var cvetipproced = $('#selcproced' + nc).val();
        var fechasent = $('#fdsen' + nc).val();
        var fechaejec = $('#fejec' + nc).val();
        var sancion = $('#seltpsa' + nc).val();
        var contsent2="estatus";
        
//       alert(editorbloqueo);
//       alert(editorbloqueo2);
        if((parseInt(editorbloqueo)==12))
        {                        
            contsent2=$('#textoeditor').val();
//            var contsent = editor.getContent();
//            contsent = contsent.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');
//            contsent = contsent.replace(/[\u0022]/g, '&QUOT;');
            var contsent = editor.getAllHtml();           // este valor se va para el campo de observaciones
            contsent = contsent.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');
            
        }
        else
        {               
//            var contsent = editor.getContent();
//            contsent = contsent.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');
//            contsent = contsent.replace(/[\u0022]/g, '&QUOT;');
            var contsent = editor.getAllHtml();           // este valor se va para el campo de observaciones
            contsent = contsent.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');            
        }
        
        var selimputad = $('#selim').val();
        
       
       // var insertar = true;
        //alert(contsent);


      //  var errorguardar = "Complete lo siguiente: <br>";

        if (cvetiposentencia.length == 0) {
            $('#errnsent').show();
            errorguardar += "<br>-Seleccione el tipo de sentencia";
            insertar = false;
        }
        if (cvetipproced.length == 0) {
            $('#errtpp').show();
            errorguardar += "<br>-Seleccione el tipo de procedimiento";
            insertar = false;
        }
        if (fechasent.length == 0) {
            $('#errfecs').show();
            errorguardar += "<br>-Seleccione la fecha de sentencia";

            insertar = false;
        }

        if (fechaejec.length == 0) {
            $('#errfejec').show();
            errorguardar += "<br>-Seleccione la fecha de ejecucion";

            insertar = false;
        }

        if (sintesis.length == 0) {
            $('#errsint').show();
            errorguardar += "<br>-Teclea la sintesis de la sentencia";

            insertar = false;
        }
        if (cg == 0) {
            $('#errseljuez').show();
            errorguardar += "<br>-Agregar un juez a la sentencia";

            insertar = false;
        }

        if (estat.length == 0) {
            $('#errstatsen').show();
            errorguardar += "<br>-Seleccione el estatus";

            insertar = false;
        }
        if (contsent.length == 0) {
            $('#errconts').show();
            errorguardar += "<br>-Teclea el contenido de la sentencia";

            insertar = false;
        }


        var tt = 1;
        var alguno = false;

        var idsentaddnew = $('#idsentenc').val();

        checkedagregado = [];
        contdarsel = 0;

        if (insertar == true) {
            
            var idcomp;

            var ids = new Array();
            var algunnn = 0;
            var contadosids = 0;            
            
            if(limpiararbolestatus!=1)
            {
                for (tt = 1; tt <= totalcheck; tt++) {
                    idcomp = $('#chec' + tt).is(":checked");
                    if (idcomp == true) {
                        algunnn = 1;
                        ids[contadosids] = $('#valchec' + tt).val();
                        checkedagregado[contdarsel] = tt;
                        contdarsel++;
                        contadosids++;
                    } else {
                        ids[tt] = 0;
                    }
                }
            }
            
            if(limpiararbolestatus==1)
            {
                var checagregado;    
                for (tt = 1; tt <= totalcheck; tt++) {
                    idcomp = $('#chec' + tt).is(":checked");
                    checagregado = $('#checagregado' + tt).is(":checked");                   
                    if (idcomp == true||checagregado == true) {
                        
                        algunnn = 1;
                        ids[contadosids] = $('#valchec' + tt).val();
                        checkedagregado[contdarsel] = tt;
                        contdarsel++;
                        contadosids++;
                    } else {
                        ids[tt] = 0;
                    }
                }                
            }

            var numa = $('#na1').val();
            //alert("numa "+numa+"-algun "+algunnn)
            
            if (algunnn == "" && numa == "") { ///Seleccionar almenos 1 imputado
                $("#infosr").html('<span>No existe numero y a&ntilde;o de sentencia<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                return;
            }

            var idnact = $('#idnumactua').val();
            
            
            
                
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                async: true,
                data:{
                    idsagrega: ids,
                    mov: 1,
                    estatussent: estat,
                    cveTipoActuacion: 3,
                    idReferencia: idreferencia,
                    numero: inumero,
                    anio: ianio,
                    cveTipoCarpeta: tipscarpts,
                    cveJuzgado: cvejuzgado,
                    sintesis: sintesis.toUpperCase(),
                    cveUsuario: cveusuario,
                    activo: 'S',
                    juez: misjuecez,
                    cveTipoSentencia: cvetiposentencia,
                    cveTipoProcedimiento: cvetipproced,
                    fechaSentencia: fechasent,
                    fechaEjecutoria: fechaejec,
                    idImpOfeDelCarpeta: idcomp,
                    idActuacion: idnact,
                    sancion: sancion,
                    idaddaactuacion: idsentaddnew,
                    observaciones: contsent,
                    texteditor: contsent2,
                    accion: 'guardaraSentencias'
                },
                beforeSend: function() {

                },
                success: function(datos) {

                    var json;
                    try {
                        json = eval("(" + datos + ")"); //Parsear JSON


                        if (json.totalCount > 0) {

                            $('#idsentenc').val(json.data[0].idActuacion);               
                        //if(cvetiposentencia!="2"){
                            //aqui esta el error del porque no deja guardar
                            
                            for (i = 0; i < json.totalCount; i++) {
                                
                                guardarsentenciasgeneradas(json.data[i].idsentencia, json.data[i].idimp);

                            }
                        //}

                            
                            limpiarglobales();
                            limpiardatosdelarbol();
                            limpiararbolestatus=0;
                            $('#btnregsanc').show();
                            $('#na1').val(json.data[0].numActuacion);
                            $('#aa1').val(json.data[0].aniActuacion);

                            $('#idnumactua').val(json.data[0].idActuacion);
                            consdelglobal = json.data[0].idActuacion;


                            consultaactuacion(json.data[0].idActuacion, aa, bb);
                            
                            // consultarimputadossanciones(consdelglobal);
                            if(procedencia==1||procedencia==2)
                                {
                                        getTree();
                                }
                            $("#correcguardado").html('<span>Se guard&oacute; la Sentencia<span>').fadeIn('slow').delay(1000).fadeOut('slow');

                            // consultarjuecessentencia(consdelglobal);


                            $('#btnregsanc').show();
                        } else {
                            if (idsentaddnew > 0) {
                                consultarimputadossanciones(idsentaddnew);
                                $('#btnregsanc').show();
                            }
                        }


                    } catch (Exception) {}

                    for (var tt = 0; tt <= totalcheck; tt++) {
                        idcomp = $('#chec' + tt).is(":checked");
                        $('#chec' + tt).prop("checked", "");

                        if (idcomp == true) {
                            $('#chec' + tt).prop("checked");


                            $('#spa' + tt).text("Con Sentencia");


                        }
                    }


                }
            });
        } else {

            $("#infosr").html(errorguardar).fadeIn('slow').delay(3000).fadeOut('slow');
        }
    }
    ////////////////////Inicio

    function consultaactuacion(idactuacion, estat, juez) {
        
        $('#hiddenIdActuacion').val(idactuacion);
        if (deleteRecord == "S") {
            $('#eliminar').show();
        }
        
        var ee=$('#seleststsent1').val();
        editorbloqueo="";
        editorbloqueo2="";
        var juzgadoarbol="";
        aa = idactuacion;
        bb = estat;
        cc = juez;


        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
            async: true,
            data: {
                idActuacion: idactuacion,
                //se agrego el activo
                activo: 'S',
                accion: 'seleccionar'
            },
            beforeSend: function() {

            },
            success: function(datos) {

                var json;
                try {
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        juzgadoarbol=json.data[0].cveJuzgado;
                        limpiarglobales();
                        limpiardatosdelarbol();
                        $.ajax({
                            type: "POST",
                            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                            data: {
                                cveJuzgado: json.data[0].cveJuzgado,
                                activo: 'S',
                                accion: 'consultar'
                            },
                            async: false,
                            dataType: "html",
                            beforeSend: function (objeto) {
                            },
                            success: function (datos) {
                                var json = "";
                                json = eval("(" + datos + ")"); //Parsear JSON

                                if (json.totalCount > 0) {
                                    if(procedencia == 1){
                                        //alert(juzgadoarbol);
                                        valorJuzgado(juzgadoarbol);
                                        valorJuzgado2(juzgadoarbol);
                                        document.getElementById('consultarimputados').style.display='none';
                                        $('#cmbdistrito').val(json.data[0].cveJuzgado + '/'+json.data[0].cveTipojuzgado);
                                    }else{
                                        $('#cmbdistrito').val(json.data[0].cveJuzgado + '/'+json.data[0].cveTipojuzgado);
                                    }
                                    
                                    
                                    //alert(json.data[0].cveJuzgado + '/'+json.data[0].cveTipojuzgado);
                                     $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/actuacionesestatus/ActuacionesestatusFacade.Class.php",
                                        data: {
                                            idActuacion: idactuacion,
                                            activo: 'S',
                                            accion: 'consultar'
                                        },
                                        async: false,
                                        dataType: "html",
                                        beforeSend: function (objeto) {
                                        },
                                        success: function (datos) {
                                            var json = "";
                                            json = eval("(" + datos + ")"); //Parsear JSON

                                            if (json.totalCount > 0) {
                                                editorbloqueo=json.data[0].cveEstatus;
                                                //$('#cmbdistrito').val(json.data[0].cveJuzgado + '/'+json.data[0].cveTipojuzgado);
                                                //alert(json.data[0].cveJuzgado + '/'+json.data[0].cveTipojuzgado);
                                            }

                                        },
                                        error: function (objeto, quepaso, otroobj) {
                                            alert("Error en la peticion:\n\n" + quepaso);
                            //                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                            //                $("#divAlertDager").show("slide");
                            //                setTimeAlert("divAlertDager");
                                        }
                                    });
                                }
                                
                            },
                            error: function (objeto, quepaso, otroobj) {
                                alert("Error en la peticion:\n\n" + quepaso);
                //                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                //                $("#divAlertDager").show("slide");
                //                setTimeAlert("divAlertDager");
                            }
                        });
                        
                        
                        //distrito(json.data[0].cveJuzgado);
                        //tipo_causa(json.data[0].cveJuzgado,json.data[0].cveTipoCarpeta);
                        $('#numer').val(json.data[0].numero);
                        $('#anio').val(json.data[0].anio);
                        $('#tipscarpts').val(json.data[0].cveTipoCarpeta);
                        $('#tipscarpts > option[value="' + json.data[0].cveTipoCarpeta + '"]').attr('selected', 'selected');

                        var fcc = json.data[0].fechaSentencia;
                        fcc = fcc.charAt(8) + "" + fcc.charAt(9) + "/" + fcc.charAt(5) + "" + fcc.charAt(6) + "/" + fcc.charAt(0) + "" + fcc.charAt(1) + fcc.charAt(2) + "" + fcc.charAt(3);


                        var fce = json.data[0].fechaEjecutoria;
                        fce = fce.charAt(8) + "" + fce.charAt(9) + "/" + fce.charAt(5) + "" + fce.charAt(6) + "/" + fce.charAt(0) + "" + fce.charAt(1) + fce.charAt(2) + "" + fce.charAt(3);

                        $('#idnumactua').val(json.data[0].idActuacion);

                        $('#na1').val(json.data[0].numActuacion);
                        $('#aa1').val(json.data[0].aniActuacion);
                        $('#fdsen1').val(fcc);
                        $('#fejec1').val(fce);
                        $('#sintesis').val(json.data[0].Sintesis);

                        editor.setContent("", false);
                        var obs2 = json.data[0].observaciones;
                        llenareditor(obs2);
                        $('#selcproced1 > option[value="' + json.data[0].cveTipoProcedimiento + '"]').attr('selected', 'selected');
                        $('#selcproced1').val(json.data[0].cveTipoProcedimiento);
                        $('#seltpsentencias1 > option[value="' + json.data[0].cveTipoSentencia + '"]').attr('selected', 'selected');
                        $('#seltpsentencias1').val(json.data[0].cveTipoSentencia);
                        
                        $('#idsentenc').val(json.data[0].idActuacion);
                        
                        //$("#seleststsent1").children().removeAttr("selected");
                        if(estat==10||estat==11||estat==12){
                            $('#seleststsent1 option[value="'+ estat +'"]').attr("selected", "selected");
                            $('#seleststsent1').val(estat);
//                            if(estat==10)
//                            {
//                                $('#seleststsent1 option[value="'+ estat +'"]').attr("selected", "selected");
//                                $('#seleststsent1').val(estat);
//                            }
//                            else
//                            {
//                                //$('#seleststsent1 option[value="'+ estat +'"]').attr();
//                                $('#seleststsent1').val(estat);
//                                
//                            }
                          
                            if(estat==12){

                                $('#seleststsent1').attr("disabled", true);
                                $('#eliminar').hide();
                                $('#inputVisor').show();
                                $('#inputPDF').show();
                                $('#seltpsentencias1').attr("disabled", true);
                                $('#selcproced1').attr("disabled", true);
                                $('#seljuez1').attr("disabled", true);
                                $('#fdsen1').attr("disabled", true);
                                $('#fejec1').attr("disabled", true);
                                
                                $('#sintesis').attr("disabled", true);
                                $('#guardar').hide();
                                editor.setDisabled();
                                $('#edui1467_iframeholder').attr("disabled", true);
                                
                            }else{
                                $('#seleststsent1').attr("disabled", false);
                                if (deleteRecord == "S") {
                                    $('#eliminar').show();
                                }
                                
                                
                                if (String(createRecord) === "S") {
                                    $('#guardar').show();
                                }
                                
//                                $('#inputVisor').hide();
                                $('#inputPDF').hide();
                                $('#seltpsentencias1').attr("disabled", false);
                                $('#selcproced1').attr("disabled", false);
                                $('#seljuez1').attr("disabled", false);
                                $('#sintesis').attr("disabled", false);
                                $('#txtNotas').attr("disabled", false);
                                $('#fdsen1').attr("disabled", false);
                                $('#fejec1').attr("disabled", false);
                                
                            }
                        }else{
                            $('#seleststsent1 option[value="'+ ee +'"]').attr("selected", "selected");
                            $('#seleststsent1').val(ee);                            
                            
                            if(ee==12)
                            {
                                $('#seleststsent1').attr("disabled", true);
                                $('#eliminar').hide();
                                $('#inputVisor').show();
                                $('#inputPDF').show();
                                //$('#guardar').hide();
                                $('#seltpsentencias1').attr("disabled", true);
                                $('#selcproced1').attr("disabled", true);
                                $('#seljuez1').attr("disabled", true);
                                $('#sintesis').attr("disabled", true);
                                $('#txtNotas').attr("disabled", true);
                                $('#fdsen1').attr("disabled", true);
                                $('#fejec1').attr("disabled", true);
                            }                            
                        
                        }
                        //editorbloqueo=estat;
                        editorbloqueo2=ee;
                        
//                       ;
                        
                        //$('#seleststsent1 > option[value="' + estat + '"]').attr('selected', 'selected');
                        
                        
                        $('#seljuez1 > option[value=""]').attr('selected', 'selected');


                        consultarjuecessentencia(json.data[0].idActuacion);
                        consgl2 = json.data[0].idActuacion;
                        
                        consultarimputadossanciones(json.data[0].idActuacion);
                        consultarimputados(2,json.data[0].cveTipoCarpeta,json.data[0].numero,json.data[0].anio,json.data[0].cveJuzgado);
                        
                        $('#btnregsanc').show();
                    } else {
                        if (idsentaddnew > 0) {

                            limpiarglobales();
                            limpiardatosdelarbol();
                            //consultarimputadossanciones(idsentaddnew);
                        }
                    }
                    
                    $('#cmbdistrito').attr("disabled", true);
                    $('#tipscarpts').attr("disabled", true);
                    $('#numer').attr("disabled", true);
                    $('#anio').attr("disabled", true);
                } catch (Exception) {}
            }
        });
    }

    function guardarsentencia(nc) {
        var idsentencia = $('#impofesele').val();
        var sancion = $('#seltpsa' + nc).val();
        var mes = $('#sanmes' + nc).val();
        var dia = $('#sandia' + nc).val();
        var anio = $('#sananio' + nc).val();
        var multa = $('#cantm' + nc).val();
        var reparac = $('#crepar' + nc).val();
        var amonesttado = $('#selamon').val();
        var selimputad = $('#selim').val();



        var insertar = true;
        $('#erranios').hide();
        $('#errmeses').hide();
        $('#errdias').hide();
        $('#errcmulta').hide();
        $('#errcantrep').hide();
        $('#erramones').hide();
        $('#errsanc').hide();
        if (sancion == 1) { //prision
            if (anio.length == 0) {
                $('#erranios').show();
                insertar = false;
            }
            if (mes.length == 0) {
                $('#errmeses').show();
                insertar = false;
            }
            if (dia.length == 0) {
                $('#errdias').show();
                insertar = false;
            }

        }

        if (sancion == 2) { //multa

            var ss = validamoneda(multa);
            if (multa.length == 0 || ss == false) {
                $('#errcmulta').show();
                insertar = false;
            }
        }

        if (sancion == 3) { //repracion


            var ss = validamoneda(reparac);
            if (reparac.length == 0 || ss == false) {
                $('#errcantrep').show();
                insertar = false;
            }
        }
        if (sancion == 4) { //Amonestacion
            if (amonesttado.length == 0) {
                $('#erramones').show();
                insertar = false;
            }
        }

        if (sancion.length == 0) {
            $('#errsanc').show();
            insertar = false;
        }

        if (insertar == false) {
            return;
        }


        var idsentencias = $('#idsancionupdate').val();

        if (idsentencia == 0 && idsentencias == 0) {
            $("#infosanc").html('<span>Seleccione un imputado antes de continuar<span>').fadeIn('slow').delay(1000).fadeOut('slow');
            return;
        }
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
            async: true,
            data: {
                idImputadoSentencia: idsentencia,
                cveTipoSancion: sancion,
                anioPrision: anio,
                mesPrision: mes,
                idImputadoSancion: idsentencias,
                diasPrision: dia,
                cantidadMulta: multa,
                cantidadReparacion: reparac,
                amonestacion: amonesttado,
                activo: 'S',
                accion: 'guardar'
            },
            beforeSend: function() {

            },
            success: function(datos2) {

                try {
                    var jsonv = eval("(" + datos2 + ")"); //Parsear JSON
                    if (jsonv.totalCount == 1) {

                        $('#btnscrud').hide();
                        $('#seltpsa1').prop("disabled", "");
                        limpiaraimp();
                        $("#correctosanc").html('<span>Se guard&oacute; Sanci\u00F3n<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                    } else {
                        $("#errorsanc").html('<span>Ocurrio un error, No se guard&oacute; Sanci\u00F3n<span>').fadeIn('slow').delay(1000).fadeOut('slow');

                    }
                    $('#seltpsa1 > option[value=""]').attr('selected', 'selected');
                    $('#selamon > option[value=""]').attr('selected', 'selected');
                    $('#cantm1').val("");
                    $('#sananio1').val("");
                    $('#sanmes1').val("");
                    $('#sandia1').val("");
                    $('#crepar1').val("");

                    $("input[type=radio]").prop('checked', false);

                    consultarsanciones(idImpOfeglobal, totalglobal, cualglobal);

                    $('#idsancionupdate').val(0);
                    $('#seltpsa1 > option[value=""]').attr('selected', 'selected');

                    limpiaraimp();
                } catch (Exception) {}
            },
            error: function(objeto) {
                $("#errorsanc").html('<span>Ocurrio un error, No se guard&oacute; sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow');

            }
        });
    }


    function consultarsanciones(idImpOfe, total, cual) {
        idImpOfeglobal = idImpOfe;
        totalglobal = total;
        cualglobal = cual;
        var existsan = 0;
        $('#infsent' + cual).hide();

        //  alert(idImpOfe+"  -  "+total+"  -  "+cual);
        for (var gf = 0; gf <= total; gf++) {
            $('#infsent' + gf).hide();
        }

        $('#infsent' + cual).show();

        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
            async: true,
            data: {
                idImputadoSentencia: idImpOfe,
                accion: 'consultar',
                activo: 'S'
            },
            beforeSend: function() {

            },
            success: function(datoss) {
                try {
                    var jsonn;
                    jsonn = eval("(" + datoss + ")"); //Parsear JSON
                    var tipoe = 0;
                    var dinero = 0;
                    var amonestado = 0;
                    var valorprision = 0;
                    var inform = "<div >";


                    var cont = 0;
                    if (jsonn.totalCount > 0) {
                        for (cont; cont < jsonn.totalCount; cont++) {

                            tipoe = jsonn.data[cont].cveTipoSancion;
                            var idimps = jsonn.data[cont].idImputadoSancion;

                            ////////////////////II
                            if (tipoe == 2) { ///Multa
                                dinero = jsonn.data[cont].cantidadMulta;
                            }
                            if (tipoe == 3) { ////reparacion
                                dinero = jsonn.data[cont].cantidadReparacion;
                            }
                            var din = parseFloat(dinero);
                            dinero = din.toFixed(2);
                            if (tipoe == 4) { ////amonestacion
                                amonestado = jsonn.data[cont].amonestacion;
                            }
                            if (tipoe == 1) { ////prision
                                valorprision = "A\u00F1os: " + jsonn.data[cont].anioPrision + " <br>Meses: " + jsonn.data[cont].mesPrision + "<br>Dia:" + jsonn.data[cont].diasPrision;
                            }
                            if (tipoe >= 1) { ////prision
                                valorprision = "A\u00F1os: " + jsonn.data[cont].anioPrision + " <br>Meses: " + jsonn.data[cont].mesPrision + "<br>Dia:" + jsonn.data[cont].diasPrision;
                            }
                            if (tipoe == 2) { ///Multa
                                inform += '<div id="divsancael' + idimps + '"  class="list-group" style="height:45px" >';
                                inform += '<a  class="list-group-item" onclick="modificasancion(' + (cont + 1) + ',' + idimps + ',' + tipoe + ',' + dinero + ',\'' + amonestado + '\',' + jsonn.data[cont].anioPrision + ',' + jsonn.data[cont].mesPrision + ',' + jsonn.data[cont].diasPrision + ')">';
                                inform += ' <h4 class="list-group-item-heading">MULTA</h4>';
                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + dinero + '</p>';
                                inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="confelimsancion(' + (cont) + ');" class="manita" title="Eliminar Sanci&oacute;n"/></div>';

                            }
                            if (tipoe == 3) { ////reparacion
                                inform += '<div   id="divsancael' + idimps + '" class="list-group" style="height:45px" >';
                                inform += '<a  class="list-group-item" onclick="modificasancion(' + (cont + 1) + ',' + idimps + ',' + tipoe + ',' + dinero + ',\'' + amonestado + '\',' + jsonn.data[cont].anioPrision + ',' + jsonn.data[cont].mesPrision + ',' + jsonn.data[cont].diasPrision + ')">';
                                inform += ' <h4 class="list-group-item-heading">REPARACION DE DA\u00D1O</h4>';
                                inform += ' <p class="list-group-item-text"> Cantidad  de Reparaci\u00F3n  $' + dinero + '</p>';
                                inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="confelimsancion(' + (cont) + ');" class="manita" title="Eliminar Sanci&oacute;n"/></div>';
                            }
                            if (tipoe == 4) { ////amonestacion

                                if (amonestado == 'S') {
                                    amonestado = "SI";
                                } else {
                                    amonestado = "NO";
                                }

                                inform += '<div   id="divsancael' + idimps + '" class="list-group" style="height:45px" >';
                                inform += '<a class="list-group-item" onclick="modificasancion(' + (cont + 1) + ',' + idimps + ',' + tipoe + ',' + dinero + ',\'' + amonestado + '\',' + jsonn.data[cont].anioPrision + ',' + jsonn.data[cont].mesPrision + ',' + jsonn.data[cont].diasPrision + ')">';
                                inform += ' <h4 class="list-group-item-heading">AMONESTACI\u00D3N</h4>';
                                inform += ' <p class="list-group-item-text">Amonestado: ' + amonestado + '</p>';
                                inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="confelimsancion(' + (cont) + ');" class="manita" title="Eliminar Sanci&oacute;n"/></div>';
                            }
                            if (tipoe == 1) { ////prosion
                                inform += '<div   id="divsancael' + idimps + '" class="list-group" style="height:83px" >';
                                inform += '<a  class="list-group-item" onclick="modificasancion(' + (cont + 1) + ',' + idimps + ',' + tipoe + ',' + dinero + ',\'' + amonestado + '\',' + jsonn.data[cont].anioPrision + ',' + jsonn.data[cont].mesPrision + ',' + jsonn.data[cont].diasPrision + ')">';
                                inform += ' <h4 class="list-group-item-heading">PRISI\u00D3N</h4>';
                                inform += ' <p class="list-group-item-text">' + valorprision + '</p>';
                                inform += '</a> <img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="confelimsancion(' + (cont) + ');" class="manita" title="Eliminar Sanci&oacute;n"/></div>';

                            }
                            if (tipoe >= 12) { ////nuevas sanciones
                                inform += '<div   id="divsancael' + idimps + '" class="list-group" style="height:83px" >';
                                inform += '<a  class="list-group-item" onclick="modificasancion(' + (cont + 1) + ',' + idimps + ',' + tipoe + ',' + dinero + ',\'' + amonestado + '\',' + jsonn.data[cont].anioPrision + ',' + jsonn.data[cont].mesPrision + ',' + jsonn.data[cont].diasPrision + ')">';
                                inform += ' <h4 class="list-group-item-heading">Nuevas sancion</h4>';
                                inform += ' <p class="list-group-item-text">' + valorprision + '</p>';
                                inform += '</a> <img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="confelimsancion(' + (cont) + ');" class="manita" title="Eliminar Sanci&oacute;n"/></div>';
                            }
                            //////////////////////////FFF

                        }
                        //  $('#infcr').html(inform+"</div>");
                        // $('#sombra').show();
                        //$('#contsomb').show();        

                        $("#panccs" + cual).html(inform + "</div>");

                        $('#infsent' + cual).show();
                        cualseltr = cual;


                        existsan = 1;
                    } else {
                        $('#infsent' + cualseltr).hide();

                        if (existsan == 0) {
                            $("#infosanc").html('<span>Sin sanciones.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                        }
                    }

                } catch (Exception) {

                }

            },
            error: function(objeto) {
                alert("error");
            }
        });
    }

    function limpiarcons() {
        obtenerPermisos();
        $("#eliminar").hide();
        //alert(contadorestatus);
        //aqui va la sentencia if(procedencia==1){
        if(procedencia == 1){
        //apelaciones = [];
        
            for(var m=1;m<(apelaciones.length);m++){   
                //alert(apelaciones.length);
                apelaciones[m][1]=0;
                apelaciones[m][2]=0;
                apelaciones[m][3]=0;
                apelaciones[m][4]=0;
                apelaciones[m][5]=0;
                //alert(apelaciones[m][3]);  
            }
        
            editor.setContent("", false);
            var dd="<?= date('d/m/Y') ?>"
            $('#fdsen1').val(dd);
            $('#fejec1').val(dd);
            $('#sintesis').val("");
            $('#seljuez1').val("");
            $('#idsentenc').val("");
            
            $('#idnumactua').val("");
            $('#textoeditor').val("");
            $('#na1').val("");
            $('#aa1').val("");
            $('#seltpsentencias1 > option[value=""]').attr('selected', 'selected');
            $('#selcproced1 > option[value=""]').attr('selected', 'selected');
            $('#selcproced1').attr("disabled", false);
            $('#seltpsentencias1').attr("disabled", false);
            $('#seltpsentencias1').val("");
            $('#seleststsent1').attr("disabled", false);
            $('#seljuez1').attr("disabled", false);
            $('#sintesis').attr("disabled", false);
            $('#fdsen1').attr("disabled", false);
            $('#fejec1').attr("disabled", false);
            limpiararbolestatus=1;
            
            for(var i=0;i<=contadorestatus;i++)
            {
                //$('#valsentencia'+i).val("0");
                //$('#valchec'+i).val("");
                
                $('#checagregado'+i).prop('disabled', false);
                $('#divdsanciones'+i).hide();
                $("#checagregado"+i).prop('checked', false); 
                $('#captapelacion'+i).hide();
                $('#selectapelac'+i).val("N");
            }
            
            
            for(var e=0;e<=totalcheck;e++)
            {
                //$('#valsentencia'+i).val("0");
                //$('#valchec'+i).val("");
                
                $('#chec'+e).prop('disabled', false);
                $('#divdsanciones'+e).hide();
                $("#chec"+e).prop('checked', false); 
                $('#captapelacion'+e).hide();
                $('#selectapelac'+e).val("N");
                cosultarsentido(e,0);
                getSalas(e,0);
            }

            $('#seleststsent1').val("10");
            $('#txtNotas').val("");
            $('#txtNotas').val("");
            
            $('#selcproced1').val("");
            
            //este div me oculta los acordeones
            //$('#divtbpr').hide();
            
            
            $('#divimputado').hide();
            $('#divsentenciados').hide();
            $('#idamons').hide();
            $('#btnscrud').hide();
            if (String(createRecord) === "S") {
                $('#guardar').show();
            }
            
            $('#eliminar').hide();
//            $('#inputVisor').hide();
            $('#inputPDF').hide();
            //$('#tipscarpts> option[value=""]').attr('selected', 'selected');
            //$('#tipscarpts').val(0);
            //$('#numer').val("");
            //$('#anio').val("");
            //$('#cmbdistrito').attr("disabled", false);
            //$('#anio').attr("disabled", false);
            //$('#numer').attr("disabled", false);
            //$('#tipscarpts').attr("disabled", false);
            //$('#btnconinm').attr("disabled", false);

            //limpiar editor
            editor.setContent("", false);        


            limpiarglobales();
            limpiarsentencia();
            $('#conttabjuecs').hide();

        }
        else
        {
            var dd="<?= date('d/m/Y') ?>";
            $('#fdsen1').val(dd);
            $('#fejec1').val(dd);
            $('#seljuez1').val("");
            $('#sintesis').val("");
            
            $('#idnumactua').val("");
            $('#textoeditor').val("");
            $('#na1').val("");
            $('#aa1').val("");
            $('#seltpsentencias1 > option[value=""]').attr('selected', 'selected');
            $('#selcproced1 > option[value=""]').attr('selected', 'selected');
            $('#selcproced1').attr("disabled", false);
            $('#seltpsentencias1').attr("disabled", false);
            $('#seleststsent1').attr("disabled", false);
            $('#seljuez1').attr("disabled", false);
            $('#sintesis').attr("disabled", false);
            $('#fdsen1').attr("disabled", false);
            $('#fejec1').attr("disabled", false);

            $('#seleststsent1').val("10");
            $('#txtNotas').val("");
            $('#txtNotas').val("");
            
            $('#selcproced1').val("");
            
            $('#divtbpr').hide();
            $('#divimputado').hide();
            $('#divsentenciados').hide();
            $('#idamons').hide();
            $('#btnscrud').hide();
            if (String(createRecord) === "S") {
                $('#guardar').show();
            }
            $('#eliminar').hide();
//            $('#inputVisor').hide();
            $('#inputPDF').hide();
            $('#tipscarpts> option[value=""]').attr('selected', 'selected');
            $('#tipscarpts').val(0);
            $('#numer').val("");
            $('#anio').val("");
            $('#cmbdistrito').attr("disabled", false);
            $('#anio').attr("disabled", false);
            $('#numer').attr("disabled", false);
            $('#tipscarpts').attr("disabled", false);
            $('#btnconinm').attr("disabled", false);

            //limpiar editor
            editor.setContent("", false);        
            limpiardatosdelarbol();
            limpiarglobales();
            limpiarsentencia();
            $('#conttabjuecs').hide();

        }
        
        
        
        //window.location.href = "../vistas/sigejupe/sentencias/frmSentencias.php";
        
        
        
        //loadOpcion('sigejupe/sentencias/frmSentencias.php','areadetrabajo');
        
    }
    
    
    function limpiaelarbol()
    {
        var dd="<?= date('d/m/Y') ?>";
            $('#fdsen1').val(dd);
            $('#fejec1').val(dd);
            $('#seljuez1').val("");
            $('#sintesis').val("");
            
            $('#idnumactua').val("");
            $('#textoeditor').val("");
            $('#na1').val("");
            $('#aa1').val("");
            $('#seltpsentencias1 > option[value=""]').attr('selected', 'selected');
            $('#selcproced1 > option[value=""]').attr('selected', 'selected');
            $('#selcproced1').attr("disabled", false);
            $('#seltpsentencias1').attr("disabled", false);
            $('#seleststsent1').attr("disabled", false);
            $('#seljuez1').attr("disabled", false);
            $('#sintesis').attr("disabled", false);
            $('#fdsen1').attr("disabled", false);
            $('#fejec1').attr("disabled", false);

            $('#seleststsent1').val("10");
            $('#txtNotas').val("");
            $('#txtNotas').val("");
            
            $('#selcproced1').val("");
            
            $('#divtbpr').hide();
            $('#divimputado').hide();
            $('#divsentenciados').hide();
            $('#idamons').hide();
            $('#btnscrud').hide();
            if (String(createRecord) === "S") {
                $('#guardar').show();
            }
            $('#eliminar').hide();
//            $('#inputVisor').hide();
            $('#inputPDF').hide();
            $('#tipscarpts> option[value=""]').attr('selected', 'selected');
            $('#tipscarpts').val(0);
            $('#numer').val("");
            $('#anio').val("");
            $('#cmbdistrito').attr("disabled", false);
            $('#anio').attr("disabled", false);
            $('#numer').attr("disabled", false);
            $('#tipscarpts').attr("disabled", false);
            $('#btnconinm').attr("disabled", false);

            //limpiar editor
            editor.setContent("", false);        
            limpiardatosdelarbol();
            limpiarglobales();
            limpiarsentencia();
            $('#conttabjuecs').hide();
    }
    
    
    function limpiarsentencia() {

        $('#impofesele').val("");
        $('#idsentenc').val("");
	//$('#seltpsa1').prop("disabled", false);
        //        $('#idnumactua').val("");
//        $('#impofesele').val("");
//        $('#idsentenc').val("");
//        $('#seltpsentencias1').attr("disabled", false);
//        $('#selcproced1').attr("disabled", false);
//        $('#fdsen1').attr("disabled", false);
//        $('#fejec1').attr("disabled", false);
//        $('#sintesis').attr("disabled", false);
//        $('#seltpsentencias1 > option[value=""]').attr('selected', 'selected');
//        $('#selcproced1 > option[value=""]').attr('selected', 'selected');
//        $('#seltpsa1').prop("disabled", false);
//        $('#fdsen1').val("");
//        $('#fejec1').val("");
//        $('#sintesis').val("");
//        $('#divtbpr').hide();
//        $('#divimputado').hide();
//        $('#divsentenciados').hide();
//        $('#idamons').hide();
//        $('#btnscrud').hide();
//        $('#na1').val("");
//        $('#aa1').val("");
    }


    function limpiaraimp() {

            $('#impofesele').val(0);

            $('#seltpsa1').attr("disabled", false);
            $('#idsancionupdate').val(0);
            $('#divamonesta1').hide();
            $('#divmulta1').hide();
            $('#divdprision1').hide();
            $('#divrepara1').hide();

            $('#seltpsa1 > option[value=""]').attr('selected', 'selected');
            $('#selamon > option[value=""]').attr('selected', 'selected');
            $('#cantm1').val("");
            $('#sananio1').val("");
            $('#sanmes1').val("");
            $('#sandia1').val("");
            $('#crepar1').val("");
            $('#idamons').hide();
            $('#btnscrud').hide();
            $('#selim> option[value=" "]').attr('selected', 'selected');

            for (var tth = 0; tth <= totallista; tth++) {

                $("#img" + tth).attr("src", "../vistas/img/iconos/palomitainactivo.png");
                $('#seleccionado' + tth).val(0);
                $('#impofesele').val(0);

            }


        }
        /*
         $(function () {
         
         var nowTemp = new Date();
         var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
         
         var checkin2 = $('#fdinicon').datepicker({
         format: "dd/mm/yyyy",
         onRender: function (date) {
         return date.valueOf() < now.valueOf() ? '' : '';
         }
         }).on('nhangeDate', function (ev) {
         if (ev.date.valueOf() > checkout.date.valueOf()) {
         var newDate = new Date(ev.date)
         newDate.setDate(newDate.getDate() );
         checkout.setValue(newDate);
         } else if (checkout.date.valueOf() == now.valueOf()) {
         var newDate = new Date(ev.date)
         newDate.setDate(newDate.getDate());
         checkout.setValue(newDate);
         }
         checkin2.hide();
         $('#fdinicon')[0].focus();
         }).data('datepicker');
         var checkout = $('#ffincon').datepicker({
         format: "dd/mm/yyyy",
         onRender: function (date) {
         return date.valueOf() <= checkin2.date.valueOf() ? 'disabled' : '';
         }
         }).on('changeDate', function (ev) {
         checkout.hide();
         }).data('datepicker');
         
         
         });*/
    function consultasgenerales(c) {

        var tipoJuzgado2 = $("#cmbdistrito2").val().split("/");
        //c=1 pag  c=2  tnts
        var adscripcion = tipoJuzgado2[0];
        var causa = $('#cmbTipoCarpeta2').val();
        var numero = $('#txtNumero2').val();
        var anio = $('#txtAnio2').val();
        var fechainicial =""; 
        var fechadfinal ="";
        var numpag = $('#cmbPaginacion').val();
        var fojas = $('#cmbNumReg').val();
        var numactuacion = $('#nusentencia').val();
        var anioactuacion = $('#asentencia').val();
        if (c == 2) {
            numpag = 1;
        }
        var consulta = true;
        $('#errtseltc').hide();
        $('#errnumcon').hide();
        $('#errfech').hide();
        $('#errnocaucon').hide();

		
	
        if((numero.length == 0&&anio.length == 0)&&(numactuacion.length == 0&&anioactuacion.length == 0)) {
           fechainicial = $('#fdinicon').val();
           fechadfinal = $('#ffincon').val();
           //alert("entro");
        }
        
	if(adscripcion==0){
            adscripcion="";
	}
		
	if(causa==0){
            causa="";
	}
		
        if (consulta == false) {

        } else {
            // alert("procede a consultar");
            /////////////////

            var idimpofe = $('#impofesele').val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadossentencias/ImputadossentenciasFacade.Class.php",
                async: true,
                data: {
                    causa: causa,
                    numero: numero,
                    numpag: numpag,
                    fojas: fojas,
                    anio: anio,
                    juzgado:adscripcion,
                    fechainicial: fechainicial,
                    fechadfinal: fechadfinal,
                    idimpofedelcarpeta: idimpofe,
                    numactuacion:numactuacion,
                    anioactuacion:anioactuacion,
                    activo: 'S',
                    accion: 'consultarsentencias'
                },
                beforeSend: function() {
                },
                success: function(datos2) {
                    try {
                        var jsonn;
                        jsonn = eval("(" + datos2 + ")"); //Parsear JSON

                        if (jsonn.totalCount == 0) {
                            $("#infocg").html('<span>Sin resultados<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                        }

                        var tab = '<table id="tblsanccons"  class="table table-hover table-striped table-bordered">';
                        tab += ' <thead><tr> <th class="sorting" >No</th>';
                        tab += '     <th>Numero de Sentencia</th>';
                        tab += '     <th>Numero de Causa</th>';
                        tab += '     <th>Tipo de Sentencia</th>';
                        tab += '     <th>Estatus de Sentencia</th>';
                        tab += '     <th>Fecha de Sentencia</th>';
                        tab += '     <th>Fecha Ejecutoria</th>';
                        tab += '</tr></thead><tbody>';


                        var selpag = "";

                        for (var e = 1; e <= jsonn.data[0].paginas; e++) {
                            selpag += "<option value='" + e + "'>" + e + "</option>";

                        }
                        $('#cmbPaginacion').html(selpag);

                        $('#cmbPaginacion> option[value="' + jsonn.data[0].paginaselecciona + '"]').attr('selected', 'selected');

                        var alhg = 0;
                        var contregp = 1;


                        contregp = jsonn.data[0].contapartir;
                        for (var s = (jsonn.totalCount) - 1; s >= 0; s--) {
                            $('#totalReg').text("Total: " + jsonn.data[s].total);
                            tab += '<tr><td  class="manita" onclick="consultaactuacion(' + jsonn.data[s].idActuacion + ',' + jsonn.data[s].estat + ',' + jsonn.data[s].juez + '),regeresar2(),$(\'#consultas\').hide()">' + contregp + '</td>';
                            tab += '<td  class="manita" onclick="consultaactuacion(' + jsonn.data[s].idActuacion + ',' + jsonn.data[s].estat + ',' + jsonn.data[s].juez + '),regeresar2(),$(\'#consultas\').hide()" >' + jsonn.data[s].numero + '/' + jsonn.data[s].anio + '</td>';
                            tab += '<td  class="manita" onclick="consultaactuacion(' + jsonn.data[s].idActuacion + ',' + jsonn.data[s].estat + ',' + jsonn.data[s].juez + '),regeresar2(),$(\'#consultas\').hide()" >' + jsonn.data[s].numcausa + '</td>';


                            tab += '<td  class="manita" onclick="consultaactuacion(' + jsonn.data[s].idActuacion + ',' + jsonn.data[s].estat + ',' + jsonn.data[s].juez + '),regeresar2(),$(\'#consultas\').hide()" >' + jsonn.data[s].Tipsente + '</td>';
                            tab += '<td  class="manita" onclick="consultaactuacion(' + jsonn.data[s].idActuacion + ',' + jsonn.data[s].estat + ',' + jsonn.data[s].juez + '),regeresar2(),$(\'#consultas\').hide()" >' + jsonn.data[s].descestatus + '</td>';
                            tab += '<td  class="manita" onclick="consultaactuacion(' + jsonn.data[s].idActuacion + ',' + jsonn.data[s].estat + ',' + jsonn.data[s].juez + '),regeresar2(),$(\'#consultas\').hide()" >' + jsonn.data[s].fechasent + '</td>';
                            tab += '<td  class="manita" onclick="consultaactuacion(' + jsonn.data[s].idActuacion + ',' + jsonn.data[s].estat + ',' + jsonn.data[s].juez + '),regeresar2(),$(\'#consultas\').hide()" >' + jsonn.data[s].fechaejec + '</td></tr> ';

                            contregp++;
                            alhg++;


                        }

                        if (alhg > 0) {

                            $('#divconsgn').hide();
                            $('#tablrescg').show();
                            $('#inputRegresarp2').show();
                            $('#inputRegresarp').show();
                            $('#inputRegresar').hide();
                        }

                        $('#divConsulta').show();
                        $('#tablaccdv').show();
                        $('#tablaccdv').html(tab + "</tbody></table>");
                        $("#tblsanccons").DataTable({
                            paging: false
                        });

                    } catch (Exception) {
                        tab += '  <td colspan="6> Sin resultados</td>';
                        tab += '</tbody></table>';
                    }
                },
                error: function(objeto) {
                    $("#errorsanc").html('<span>Ocurrio un error, No se Gener la consulta<span>').fadeIn('slow').delay(1000).fadeOut('slow');

                }
            });
        }
    }

    function eliminarsancion(str, id, idmensaje) {
//        alert(idimputadosancion+'-'+id+'-'+idmensaje+"sss2");
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
            async: true,
            data: {
                idImputadoSancion: str,
                activo: 'N',
                accion: 'eliminacionlogica'
            },
            beforeSend: function() {

            },
            success: function(datos2) {

                try {
                    var jsonn;
                    jsonn = eval("(" + datos2 + ")"); //Parsear JSON

                    if (jsonn.totalCount > 0) {
                        $("#corrgdd" + idmensaje).html('<span>Se elimin&oacute; sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                        $('#divsancael' + str).hide();
                        
                    } else {

                        $("#corrgdd" + idmensaje).html('<span>No se elimin&oacute; sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow');

                    }
                } catch (Exception) {}
            }
        });
        consultarimputadossanciones($('#idsentenc').val());

    }

    function modificasancion(iddiv, idimps, tipoe, dinero, amonestado, anioPrision, mesPrision, diasPrision,fi1,fi2,fi3,ff1,ff2,ff3) {
        $('#idsancionupdate').val(idimps);
        $('#seltpsa' + iddiv + ' > option[value="' + tipoe + '"]').attr('selected', 'selected');
        
        $('#seltpsa' + iddiv).prop("disabled", true);
        $('#seltpsa' + iddiv).val(tipoe);
        $('#divsentencias' + iddiv).hide();
        $('#divdprision' + iddiv).hide();
        $('#divmulta' + iddiv).hide();
        $('#divabs' + iddiv).hide();
        $('#divrepara' + iddiv).hide();
        $('#divamonesta' + iddiv).hide();
        $('#divnuevasancion' + iddiv).hide();

        $('#divsenten' + iddiv).show();
        addsentenciamod(iddiv, tipoe, totalcheck);

        if (tipoe == 1) { ////prision
            
            //  alert("prision    id="+idd837iv);
            $('#sananio' + iddiv).val(anioPrision);
            $('#sanmes' + iddiv).val(mesPrision);
            $('#sandia' + iddiv).val(diasPrision);            
            
            
            if(fi3=="1969"&&ff3=="1969")
            {
                var dd="<?= date('d/m/Y') ?>";
                $('#fechinicio' + iddiv).val(dd);
                $('#fechtermina' + iddiv).val(dd);
            }
            else
            {
                $('#fechinicio' + iddiv).val(fi1+"/"+fi2+"/"+fi3);
                $('#fechtermina' + iddiv).val(ff1+"/"+ff2+"/"+ff3);
            }
            
            $('#divdprision' + iddiv).show();
        }
        if (tipoe == 2) { ///Multa

            $('#divmulta' + iddiv).show();
            $('#cantm' + iddiv).val(dinero);
        }
        if (tipoe == 3) { ////reparacion

            $('#divrepara' + iddiv).show();
            $('#crepar' + iddiv).val(dinero);

        }
        if (tipoe == 4) { ////amonestacion

            $('#divamonesta' + iddiv).show();
            var sel = 0;

            if (amonestado == 'SI') {
                amonestado = "S";
                sel = 1;
            } else {
                sel = 2;
                amonestado = "N";
            }

            $('#selamon' + iddiv + '> option[value="' + amonestado + '"]').attr('selected', 'selected');

        }
        if (tipoe == 26) { //// absuelto
            $('#divnuevasancion' + iddiv).hide();
            $('#divabs' + iddiv).show();
        }
        
        if (tipoe >= 12 && tipoe != 26 ) { ////nuevassanciones
        
            $('#divnuevasancion' + iddiv).show();
            if(fi3=="1969"&&ff3=="1969")
            {
                var dd="<?= date('d/m/Y') ?>";
                $('#nuevasancion'+ iddiv).val("");
                $('#fechinicionuevasancion' + iddiv).val(dd);
                $('#fechterminanuevasancion' + iddiv).val(dd);
            }
            else
            {
                $('#nuevasancion'+ iddiv).val(dinero);
                $('#fechinicionuevasancion' + iddiv).val(fi1+"/"+fi2+"/"+fi3);
                $('#fechterminanuevasancion' + iddiv).val(ff1+"/"+ff2+"/"+ff3);
            }
        }
        

    }

    function eliminarimputadosente(idsen) {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/imputadossentencias/ImputadossentenciasFacade.Class.php",
            data: {
                idImputadoSentencia: idsen,
                activo: 'N',
                accion: 'eliminacionlogia',
                async: true
            },
            beforeSend: function() {

            },
            success: function(datos2) {

                var jsonn;
                jsonn = eval("(" + datos2 + ")"); //Parsear JSON

                if (jsonn.totalCount > 0) {
                    $("#correctosanc").html('<span>Se elimin&oacute; un imputado de la  sentencia<span>').fadeIn('slow').delay(1000).fadeOut('slow');


                    consultarimputadossanciones(consgl2);

                    consultaactuacion(aa, bb, cc);
                    consultarimputados(1);
                    //$('#divsancael1').hide();
                } else {

                    $("#error").html('<span>Ocurrio un error, No se elimin&oacute; el imputado de la  sentencia<span>').fadeIn('slow').delay(1000).fadeOut('slow');

                }
            }
        });
    }

    function validamoneda(valor) {

        if (!/^(\d{1,3})*\d{1,3}(\.\d+)?$/.test(valor)) {
            return false;
        } else {
            return true;
        }
    }

    function eliminarsentencia() {
        var na = $('#na1').val();
        var aa = $('#aa1').val();


        if (na > 0 && aa > 0) {
            var elms = $('#idsentenc').val();

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: {
                    idActuacion: elms,
                    accion: 'eliminacionsentencia',
                    async: true
                },
                beforeSend: function() {

                },
                success: function(datos2) {

                    var jsonn;
                    jsonn = eval("(" + datos2 + ")"); //Parsear JSON
                    if (jsonn.totalCount > 0) {



                        $("#correcguardado").html('<span>Se elimin&oacute; la Sentencia <span>').fadeIn('slow').delay(1000).fadeOut('slow');
                        if(procedencia==1||procedencia==2)
                        {
                                getTree();
                        }
                        setTimeout(
                            function() {
                                limpiargen();
                                //do something special
                            }, 2000);


                    } else {

                        $("#infosr").html('<span>Ocurrio un error, No se elimin&oacute; la sentencia<span>').fadeIn('slow').delay(1000).fadeOut('slow');

                    }

                }
            });
        } else {

            $("#infosr").html('<span>Consulte una sentencia antes de continuar.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
        }
    }

    function agregarjuez() {
    $('#conttabjuecs').show();
        var jz = Number($('#seljuez1').val());
        var esta = false;
        var comp = 0;
        if (jz.length < 1) {
            reutun;
        }
        if (contadordejueces > 0) {
            for (var cc = 0; cc <= contadordejueces; cc++) {
                var comp = Number(listadojueces[cc]);
                if (Number(jz) == listadojueces[cc]) {
                    esta = true;
                }
            }
            if (esta == true) {

                $("#infjuectb").html('<span>Ya existe el juez en el listado<span>').fadeIn('slow').delay(2000).fadeOut('slow');
                return;
            }
        }

        var nombj = $("#seljuez1 option:selected").html();

        nombrejuez[contadordejueces] = nombj;
        listadojueces[contadordejueces] = jz;
        idselim[contadordejueces] = 0;
        
        var tabl = ' <table id="ltsjuces" class="table table-bordered tblGridAgrega">';
        tabl += '      <tr  >';
        tabl += '        <th class="trGridAgrega">Juez</th>';
        tabl += '         <th class="trGridAgrega"></th>';
        tabl += '        </tr>';
        var c = 1;
        for (var carj = 0; carj <= contadordejueces; carj++) {
            var comp = listadojueces[carj];
            if (comp != 0) {
                tabl += '      <tr id="jzeleg' + carj + '">';
                tabl += '        <td >' + nombrejuez[carj] + '</td>';
                tabl += '         <td ><img  onclick="eliminarjuezlista(' + carj + ')" src="../vistas/img/eliminar.png" width="30" height="30"</td>';
                tabl += '        </tr>';
                c++;

                $('#errseljuez').hide();
            }

        }

        contadordejueces++;
        tabl += '      </table>';


        $('#conttabjuecs').html(tabl);

    }

    function eliminarjuezlista(id) {

        var idjsen = idselim[id];
        if (idjsen != 0) {

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgadoressentencias/JuzgadoressentenciasFacade.Class.php",
                data: {
                    idJuzgadorSentencia: idjsen,
                    activo: 'N',
                    idActuacion: $('#idsentenc').val(),
                    accion: 'eliminacionlogica',
                    async: true
                },
                beforeSend: function() {

                },
                success: function(datos2) {

                    var jsonn;
                    jsonn = eval("(" + datos2 + ")"); //Parsear JSON

                    if (jsonn.Actualizo == true) {

                        $("#infjuectb").html('<span>Se elimin&oacute; un juez de la Sentencia <span>').fadeIn('slow').delay(1000).fadeOut('slow');
                        listadojueces[id] = 0;
                        nombrejuez[id] = "";
                        $('#jzeleg' + id).hide();


                    } else {

                        $("#infosr").html('<span>Ocurrio un error, No se elimin&oacute; el juez de la sentencia<span>').fadeIn('slow').delay(1000).fadeOut('slow');

                    }

                }
            });


        } else {

            $("#infjuectb").html('<span>Se elimin&oacute; un juez de la Sentencia <span>').fadeIn('slow').delay(1000).fadeOut('slow');

            listadojueces[id] = 0;
            nombrejuez[id] = "";
            $('#jzeleg' + id).hide();
        }

    }

    function consultarjuecessentencia(iddact) {
        var estat = $('#seleststsent1').val();
        
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgadoressentencias/JuzgadoressentenciasFacade.Class.php",
            async: true,
            data: {
                idActuacion: iddact,
                activo: 'S',
                accion: 'consultarconjuzgador'
            },
            beforeSend: function() {

            },
            success: function(datos2) {

                var jsonn = "";
                if (datos2 != "")
                    jsonn = eval("(" + datos2 + ")"); //Parsear JSON
                if (jsonn != "") {
                    if (jsonn.totalCount > 0) {
                        listadojueces = [];
                        nombrejuez = [];
                        contadordejueces = 0;
                        idselim = [];
                        banderaexistenbase = 1;
                        contadorexistenbase = 0;

                        var tabl = ' <table id="ltsjuces" class="table table-bordered tblGridAgrega">';
                        tabl += '      <tr >';
                        tabl += '        <th class="trGridAgrega">Juez</th>';
                        if(estat!=12)
                        {    
                            tabl += '         <th class="trGridAgrega">Eliminar</th>';
                        }
                        tabl += '        </tr>';
                        var cnt = 1;
                        for (var carj = 0; carj < jsonn.totalCount; carj++) {

                            listadojueces[carj] = Number(jsonn.data[carj].idjuzgador);
                            idselim[carj] = jsonn.data[carj].idjuzgadorsente;
                            nombrejuez[carj] = jsonn.data[carj].nombre;

                            tabl += '      <tr id="jzeleg' + contadordejueces + '">';
                            tabl += '        <td >' + nombrejuez[carj] + '</td>';
                            if(estat!=12)
                            {
                                tabl += '         <td ><img  onclick="eliminarjuezlista(' + contadordejueces + ')" src="../vistas/img/eliminar.png" width="30" height="30"</td>';
                            }
                            tabl += '        </tr>';
                            cnt++;
                            contadordejueces++;
                            contadorexistenbase++;
                        }
                        $('#conttabjuecs').html(tabl);
                        $('#conttabjuecs').show();

                    } else {

                    }
                } else {
                    // alert("sin jueces");
                }
            }
        });
    }

    function guardarsancion(nc) {
        var idsentencia = $('#impofesele').val();
        var sancion = $('#seltpsa' + nc).val();
        var mes = $('#sanmes' + nc).val();
        var dia = $('#sandia' + nc).val();
        var anio = $('#sananio' + nc).val();
        var multa = $('#cantm' + nc).val();
        var reparac = $('#crepar' + nc).val();
        var amonesttado = $('#selamon').val();
        var selimputad = $('#selim').val();
        var insertar = true;
        $('#erranios').hide();
        $('#errmeses').hide();
        $('#errdias').hide();
        $('#errcmulta').hide();
        $('#errcantrep').hide();
        $('#erramones').hide();
        $('#errsanc').hide();
        if (sancion == 1) { //prision
            if (anio.length == 0) {
                $('#erranios').show();
                insertar = false;
            }
            if (mes.length == 0) {
                $('#errmeses').show();
                insertar = false;
            }
            if (dia.length == 0) {
                $('#errdias').show();
                insertar = false;
            }

        }

        if (sancion == 2) { //multa

            var ss = validamoneda(multa);
            if (multa.length == 0 || ss == false) {
                $('#errcmulta').show();
                insertar = false;
            }
        }

        if (sancion == 3) { //repracion


            var ss = validamoneda(reparac);
            if (reparac.length == 0 || ss == false) {
                $('#errcantrep').show();
                insertar = false;
            }
        }
        if (sancion == 4) { //Amonestacion
            if (amonesttado.length == 0) {
                $('#erramones').show();
                insertar = false;
            }
        }

        if (sancion.length == 0) {
            $('#errsanc').show();
            insertar = false;
        }

        if (insertar == false) {

            return;
        }


        var idsentencias = $('#idsancionupdate').val();

        if (idsentencia == 0 && idsentencias == 0) {
            $("#infosanc").html('<span>Seleccione un imputado antes de continuar<span>').fadeIn('slow').delay(1000).fadeOut('slow');
            return;
        }
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
            async: true,
            data: {
                idImputadoSentencia: idsentencia,
                cveTipoSancion: sancion,
                anioPrision: anio,
                mesPrision: mes,
                idImputadoSancion: idsentencias,
                diasPrision: dia,
                cantidadMulta: multa,
                cantidadReparacion: reparac,
                amonestacion: amonesttado,
                activo: 'S',
                accion: 'guardar'
            },
            beforeSend: function() {

            },
            success: function(datos2) {

                try {
                    var jsonv = eval("(" + datos2 + ")"); //Parsear JSON
                    if (jsonv.totalCount == 1) {

                        $('#btnscrud').hide();
                        $('#seltpsa1').prop("disabled", "");
                        limpiaraimp();
                        $("#correctosanc").html('<span>Se guard&oacute; Sanci\u00F3n<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                    } else {
                        $("#errorsanc").html('<span>Ocurrio un error, No se guard&oacute; Sanci\u00F3n<span>').fadeIn('slow').delay(1000).fadeOut('slow');

                    }
                    $('#seltpsa1 > option[value=""]').attr('selected', 'selected');
                    $('#selamon > option[value=""]').attr('selected', 'selected');
                    $('#cantm1').val("");
                    $('#sananio1').val("");
                    $('#sanmes1').val("");
                    $('#sandia1').val("");
                    $('#crepar1').val("");

                    $("input[type=radio]").prop('checked', false);
                    consultarsanciones(idImpOfeglobal, totalglobal, cualglobal);
                    $('#idsancionupdate').val(0);
                    $('#seltpsa1 > option[value=""]').attr('selected', 'selected');

                    limpiaraimp();
                } catch (Exception) {}
            },
            error: function(objeto) {
                $("#errorsanc").html('<span>Ocurrio un error, No se guard&oacute; sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow');

            }
        });

    }

    function confelimsentencia() {
        var na = $('#na1').val();
        var aa = $('#aa1').val();
        if (na > 0 && aa > 0) {} else {

            $("#infosr").html('<span>Consulte una sentencia antes de continuar.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
            return;
        }

        bootbox.dialog({
            message: "Al seleccionar esta opci&oacute;n se eliminara la sentencia seleccionada \u00bf Desea continuar?",
            buttons: {
                danger: {
                    label: "Aceptar",
                    className: "btn-primary",
                    callback: function() {
                    
                        eliminarsentencia();
                        //loadOpcion('sigejupe/sentencias/frmSentencias.php','areadetrabajo');
                        limpiarcons();
                    }
                },
                success: {
                    label: "Cancelar",
                    className: "btn-primary",

                }
            }
        });
    }


    function confelimsancion(id, idimputadosancion, idmensaje) {

        var lugar = arrayinsert[id][7];
       
        bootbox.dialog({
            message: "Al seleccionar esta opci&oacute;n se eliminara la sanci&oacute;n seleccionada \u00bf Desea continuar?",
            buttons: {
                danger: {
                    label: "Aceptar",
                    className: "btn-primary",
                    callback: function() {
                        if (lugar == 1) {
                            eliminarsancion(idimputadosancion, id, idmensaje);
                            arrayinsert[id][0] = 0;
                            arrayinsert[id][1] = 0;
                            arrayinsert[id][2] = 0;
                            arrayinsert[id][3] = 0;
                            
                            $('#divsancael' + id).hide();
                            $("#corrgdd" + idmensaje).html('<span>Se elimin&oacute; sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                            $('#divabs' + idmensaje).hide();
                            $('#divamonesta' + idmensaje).hide();
                            $('#divmulta' + idmensaje).hide();
                            $('#divrepara' + idmensaje).hide();
                            $('#divdprision' + idmensaje).hide();
                            $('#seltpsa'+idmensaje).prop("disabled", false);
                            contadorestatus=contadorestatus-1;
                            
                        } else {
                            
                            eliminarsancion(idimputadosancion, id, idmensaje);

                            $('#divsancael' + id).hide();
                            arrayinsert[id][0] = 0;
                            arrayinsert[id][1] = 0;
                            arrayinsert[id][2] = 0;
                            arrayinsert[id][3] = 0;
                            contadorestatus=contadorestatus-1;
                            construirsanciones(id);
                           
                            $('#divamonesta' + idmensaje).hide();
                            $('#divmulta' + idmensaje).hide();
                            $('#divrepara' + idmensaje).hide();
                            $('#divdprision' + idmensaje).hide();
                            $('#seltpsa'+idmensaje).prop("disabled", false);
                        }


                    }
                },
                success: {
                    label: "Cancelar",
                    className: "btn-primary",

                }
            }
        });
    }

    function confelimimputadosentencia(idImpofesent) {
        bootbox.dialog({
            message: "Al seleccionar esta opci&oacute;n se eliminara el imputado de la sentencia seleccionada \n \u00bf Desea continuar?",
            buttons: {
                danger: {
                    label: "Aceptar",
                    className: "btn-primary",
                    callback: function() {

                        eliminarimputadosente(idImpofesent);

                    }
                },
                success: {
                    label: "Cancelar",
                    className: "btn-primary",
                    callback: function() {

                    }
                }
            }
        });
    }

    

    function addsentenciamod(idselect, idsancion, totalimputados) {
        var acordion = '';

        if (idsancion == 1) {
            prision(idselect, acordion);
        }

        if (idsancion == 2) {
            multa(idselect, acordion);
        }

        if (idsancion == 3) {
            reparacion(idselect, acordion);
        }

        if (idsancion == 4) {
            amonestacion(idselect, acordion);
        }
        
        if(idsancion>=12)
        {
            nuevassanciones(idselect, acordion, idsancion);
        }
    }

    function addsentencia(idselect, idsancion, totalimputados) {
        
        if(idsancion==11)
        {
            $('#seltpsa' + idselect).val(0);
        }
        
        var existe = validarexistenciasancion(idselect, idsancion);

        if (existe == false) {
            $('#divsenten'+ idselect).show('');
            var acordion = "";

            if (idsancion.length == 0) {
                limparselectssentencia('');
                limparselectssentencia(totalimputados);
            }
            
            if (idsancion == 26 )  {
                absuelto(idselect, acordion);
            }

            if (idsancion == 1) {
                prision(idselect, acordion);
            }

            if (idsancion == 2) {
                multa(idselect, acordion);
            }

            if (idsancion == 3) {
                reparacion(idselect, acordion);
            }

            if (idsancion == 4) {
                amonestacion(idselect, acordion);
            }
            
            if(idsancion>=12 && idsancion !=26)
            {
                nuevassanciones(idselect, acordion, idsancion);
            }
        } else {

            limpiarguardado(idselect);
            
            $("#seltpsa" + idselect).val(0);
            $("#infocent" + idselect).html('<span>Ya existe la sanci&oacute;n.<span>').fadeIn('slow').delay(2000).fadeOut('slow');
        }
    }

    function limparselectssentencia(totalselects) {
//    alert('limpiarselec')
        for (var lims = 1; lims <= totalselects; lims++) {

            $('#seltpsa' + lims + '> option[value=""]').attr('selected', 'selected');
            $('#seltpsa' + lims).prop('disabled', false);
            $('#divdprision' + lims).hide();
            $('#divamonesta' + lims).hide();
            $('#divabs' + lims).hide();
            $('#divmulta' + lims).hide();
            $('#divrepara' + lims).hide();
            $('#divnuevasancion' + lims).hide();
            $('#errcantrep' + lims).hide();
            
            $('#nuevasancion' + lims).val("");
            $('#errobservacion' + lims).hide();

            $('#sananio' + lims).val("");
            $('#sanmes' + lims).val("");
            $('#sandia' + lims).val("");

            $('#erranios' + lims).hide();
            $('#errmeses' + lims).hide();
            $('#errdias' + lims).hide();

            $('#selamon' + lims + '> option[value=""]').attr('selected', 'selected');
            $('#erramones' + lims).hide();

            $('#cantm' + lims).val("");
            $('#errcmulta' + lims).hide();

            $('#crepar' + lims + '> option[value=""]').attr('selected', 'selected');
            $('#errcantrep' + lims).hide();

        }
    }

    function prision(id, acordion) {
        var prision = '<div class="panel-body"><div class="form-group" id="divdprision' + id + '"  > ';
        prision += '   <div class="form-group">';
        prision += '                <label class="control-label col-xs-12 col-sm-3 col-md-3 needed">A&ntilde;os <label style="color:darkred">(*)</label></label>';
        prision += '                <div class="col-xs-12 col-sm-8 col-md-7">';
        prision += '                    <input type="text" class="input-sm" maxlength="5"  id="sananio' + id + '" >';
        prision += '                    <span id="erranios' + id + '" class="err" style="display:none"><br>Este campo es obligatorio.</span>';
        prision += '               </div>';
        prision += '   </div>';
        prision += '<div class="form-group">';
        prision += '                <label class="control-label col-xs-12 col-sm-3 col-md-3 needed">Meses <label style="color:darkred">(*)</label></label>';
        prision += '       <div class="col-xs-12 col-sm-8 col-md-7">';
        prision += '  <input type="text" class="input-sm" maxlength="5"  id="sanmes' + id + '"  >';
        prision += '       <span id="errmeses' + id + '" class="err" style="display:none"><br>Este campo es obligatorio.</span>';
        prision += '     </div>';
        prision += '   </div>';
        prision += ' <div class="form-group">';
        prision += '         <label class="control-label col-xs-12 col-sm-3 col-md-3 needed">Dias <label style="color:darkred">(*)</label></label>';
        prision += '           <div class="col-xs-12 col-sm-8 col-md-7">';
        prision += '                <input type="text" class="input-sm"  maxlength="5"  id="sandia' + id + '" >';
        prision += '                <span id="errdias' + id + '" class="err" style="display:none"><br>Este campo es obligatorio.</span>';
        prision += '           </div>';
        prision += ' </div>';
        prision += ' <div class="form-group">';
        prision += '         <label class="control-label col-xs-12 col-sm-3 col-md-3 needed">Fecha Inicio <label style="color:darkred">(*)</label></label>';
        prision += '           <div class="col-xs-12 col-sm-8 col-md-7">';
        prision += '                <input type="text" class="input-sm"  maxlength="5" value="<?= date('d/m/Y') ?>" id="fechinicio' + id + '" readonly>';
        prision += '                   <span id="errdias' + id + '" class="err" style="display:none"><br>Este campo es obligatorio.</span>';
        prision += '           </div>';
        prision += ' </div>';
        prision += ' <div class="form-group">';
        prision += '         <label class="control-label col-xs-12 col-sm-3 col-md-3 needed">Fecha Termina <label style="color:darkred">(*)</label></label>';
        prision += '           <div class="col-xs-12 col-sm-8 col-md-7">';
        prision += '                <input type="text" class="input-sm"  maxlength="5" value="<?= date('d/m/Y') ?>" id="fechtermina' + id + '" readonly>';
        prision += '                   <button  onclick="agregarsanc_lista(' + id + ',1)" type="button" class="btn btn-sm btn-primary" aria-label="Left Align">Agregar</button>&nbsp;<button  onclick="limpiar_prision(' + id + ')" type="button" class="btn btn-sm btn-primary" aria-label="Left Align">Limpiar</button> <span id="errdias' + id + '" class="err" style="display:none"><br>Este campo es obligatorio.</span>';
        prision += '           </div>';
        prision += ' </div>';
        
        prision += ' </div>';
        prision += acordion;
        $('#divsenten' + id).html(prision);
        $('#sananio' + id).validaCampo('0123456789');
        $('#sanmes' + id).validaCampo('0123456789');
        $('#sandia' + id).validaCampo('0123456789');
        
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#fechinicio'+id).datepicker({
            format: "dd/mm/yyyy",
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? '' : '';
            }
        }).on('changeDate', function(ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            } else if (checkout.date.valueOf() == now.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.hide();
            $('#fechtermina'+id)[0].focus();
        }).data('datepicker');
        var checkout = $('#fechtermina'+id).datepicker({
            format: "dd/mm/yyyy",
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            checkout.hide();
        }).data('datepicker');

    }
    
    function limpiar_prision(id){
        var dd="<? date('d/m/Y') ?>";
        $('#sananio' + id).val("");
        $('#sanmes' + id).val("");
        $('#sandia'+ id).val("");
        $('#seltpsa'+id).prop("disabled", false);
        $('#seltpsa'+id).val(0);
        $('#fechinicio'+ id).val(dd);
        $('#fechtermina'+ id).val(dd);
    }

    function amonestacion(id, acordion){
        var amonesta = '<div class="form-group"  id="divamonesta' + id + '"><br>\n\
                        <label class="control-label col-xs-12 col-sm-3 col-md-3">&#191;Amonestado? \n\
                        <label style="color:darkred">(*)</label></label>\n\
                        <div class="col-xs-12 col-sm-7 col-md-6">\n\
                            <select  id="selamon' + id + '"  class="imputadoApelacion">\n\
                                <option value="0">SELECCIONE UNA OPCION</option> \n\
                                <option value="N">NO</option>\n\
                                <option value="S">SI</option> \n\
                            </select>\n\
                            <button  onclick="agregarsanc_lista(' + id + ',4)" type="button" class="btn btn-sm btn-primary" aria-label="Left Align">Agregar</button>&nbsp;\n\
                            <button  onclick="limpiar_amonestacion(' + id + ')" type="button" class="btn btn-sm btn-primary" aria-label="Left Align">Limpiar</button>\n\
                            <span id="erramones' + id + '" class="err" style="display:none">Este campo es obligatorio.</span>\n\
                        </div>\n\
                        </div>' + acordion;

        
        $('#divsenten' + id).html(amonesta);
    }
    
    function limpiar_amonestacion(id)
    {
        $('#selamon'+id).val(0);
        $('#seltpsa'+id).prop("disabled", false);
        $('#seltpsa'+id).val(0);
    }

    function multa(id, acordion) {

        var multa = '<div class="panel-body"><div class="form-group" id="divmulta' + id + '" > ';
        multa += '<div class="form-group">';
        multa += '<label class="control-label col-xs-12 col-sm-3 col-md-3 needed">Cantidad  de multa $ <label style="color:darkred">(*)</label></label>';
        multa += '<div class="col-xs-12 col-sm-8 col-md-7">';
        multa += '<input type="text" class="input-sm"  maxlength="15"    id="cantm' + id + '" >';
        multa += ' <button  onclick="agregarsanc_lista(' + id + ',2)" type="button" class="btn btn-sm btn-primary" aria-label="Left Align">Agregar</button>&nbsp;<button  onclick="limpiar_multa(' + id + ')" type="button" class="btn btn-sm btn-primary" aria-label="Left Align">Limpiar</button>';
        multa += ' <span id="errcmulta' + id + '" class="err" style="display:none"><br>Verifique el formato de la multa</span></div>';
        
        multa += '  </div>';
        multa += acordion;
        $('#divsenten' + id).html(multa);
        $('#cantm' + id).validaCampo('0123456789.');
    }
    
    function absuelto(id, acordion) {
        var abs = '<div class="panel-body"><div class="form-group" id="divabs' + id + '" > ';
        abs += '<div class="form-group"> <div class="control-label col-md-20 col-md-4 col-md-15">';
        abs += ' <button  onclick="agregarsanc_lista(' + id + ',26)" type="button" class="btn btn-sm btn-primary" aria-label="right Align">Agregar</button>';
        abs += '  </div></div>';
        abs += acordion;
        $('#divsenten' + id).html(abs)
    }
    
    
    function nuevassanciones(id, acordion, idsancion) {

        var nuevasancion = '<div class="panel-body"><div class="form-group" id="divnuevasancion' + id + '" > ';
        nuevasancion += '   <div class="form-group">';
        nuevasancion += '       <label class="control-label col-xs-12 col-sm-3 col-md-3 needed">Observaci&oacute;n $ <label style="color:darkred">(*)</label></label>';
        nuevasancion += '           <div class="col-xs-9 col-sm-8 col-md-8">';
        nuevasancion += '               <textarea style="width:100%"; type="text" class="input-sm"  maxlength="500"    id="nuevasancion' + id + '" onkeyup="mayusculas(this)"></textarea>';        
        nuevasancion += '               <span id="errobservacion' + id + '" class="err" style="display:none"><br>Este campo es obligatorio.</span></div>';        
        nuevasancion += '   </div>';
        
        nuevasancion += ' <div class="form-group">';
        nuevasancion += '         <label class="control-label col-xs-12 col-sm-3 col-md-3 needed">Fecha Inicio <label style="color:darkred">(*)</label></label>';
        nuevasancion += '           <div class="col-xs-12 col-sm-8 col-md-7">';
        nuevasancion += '                <input type="text" class="input-sm"  maxlength="5" value="<?= date('d/m/Y') ?>" id="fechinicionuevasancion' + id + '" readonly>';
        nuevasancion += '                   <span id="errfechinicionuevasancion' + id + '" class="err" style="display:none"><br>Este campo es obligatorio.</span>';
        nuevasancion += '           </div>';
        nuevasancion += ' </div>';
        
        nuevasancion += ' <div class="form-group">';
        nuevasancion += '         <label class="control-label col-xs-12 col-sm-3 col-md-3 needed">Fecha Termina <label style="color:darkred">(*)</label></label>';
        nuevasancion += '           <div class="col-xs-12 col-sm-8 col-md-7">';
        nuevasancion += '                <input type="text" class="input-sm"  maxlength="5" value="<?= date('d/m/Y') ?>" id="fechterminanuevasancion' + id + '" readonly>';
        nuevasancion += '                <button  onclick="agregarsanc_lista(' + id + ','+idsancion+')" type="button" class="btn btn-sm btn-primary" aria-label="Left Align">Agregar</button>&nbsp;<button  onclick="limpiar_nuevasancion(' + id + ')" type="button" class="btn btn-sm btn-primary" aria-label="Left Align">Limpiar</button>';
        nuevasancion += '                   <span id="errfechterminanuevasancion' + id + '" class="err" style="display:none"><br>Este campo es obligatorio.</span>';
        nuevasancion += '           </div>';
        nuevasancion += ' </div>';
        
        nuevasancion += acordion;       
        $('#divsenten' + id).html(nuevasancion);
        
        var nowTemp = new Date();
        var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

        var checkin = $('#fechinicionuevasancion'+id).datepicker({
            format: "dd/mm/yyyy",
            onRender: function(date) {
                return date.valueOf() < now.valueOf() ? '' : '';
            }
        }).on('changeDate', function(ev) {
            if (ev.date.valueOf() > checkout.date.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            } else if (checkout.date.valueOf() == now.valueOf()) {
                var newDate = new Date(ev.date)
                newDate.setDate(newDate.getDate() + 1);
                checkout.setValue(newDate);
            }
            checkin.hide();
            $('#fechterminanuevasancion'+id)[0].focus();
        }).data('datepicker');
        var checkout = $('#fechterminanuevasancion'+id).datepicker({
            format: "dd/mm/yyyy",
            onRender: function(date) {
                return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
            }
        }).on('changeDate', function(ev) {
            checkout.hide();
        }).data('datepicker');
    }
    
    function limpiar_nuevasancion(id)
    {
        var dd="<?= date('d/m/Y') ?>";
        $('#nuevasancion' + id).val("");
        $('#seltpsa'+id).prop("disabled", false);
        $('#seltpsa'+id).val(0);
        $('#fechinicionuevasancion'+ id).val(dd);
        $('#fechterminanuevasancion'+ id).val(dd);
    }
    
    function limpiar_multa(id)
    {
        $('#cantm'+ id).val("");
        $('#seltpsa'+id).prop("disabled", false);
        $('#seltpsa'+id).val(0);
    }

    function reparacion(id, acordion) {

        var repara = '<div class="panel-body"><div class="form-group" id="divrepara' + id + '">';
        repara += '<div class="form-group">';
        repara += '               <label class="control-label col-xs-12 col-sm-3 col-md-3 needed">Cantidad de Reparaci&oacute;n $ <label style="color:darkred">(*)</label></label>';
        repara += '                 <div class="col-xs-12 col-sm-8 col-md-7">';
        repara += '                    <input type="text" class="input-sm"  maxlength="15"  id="crepar' + id + '" >';
        repara += ' <button  onclick="agregarsanc_lista(' + id + ',3)" type="button" class="btn btn-sm btn-primary" aria-label="Left Align">Agregar</button>&nbsp;<button  onclick="limpiar_reparacion(' + id + ')" type="button" class="btn btn-sm btn-primary" aria-label="Left Align">Limpiar</button>';
        repara += '                   <span id="errcantrep' + id + '" class="err" style="display:none"><br>Verifique el formato de la cantidad tecleada.</span>';

        repara += '              </div></div></div>' + acordion;
        $('#divsenten' + id).html(repara);
        $('#crepar' + id).validaCampo('0123456789.');        
    }
    
    function limpiar_reparacion(id)
    {
        $('#crepar'+ id).val("");
        $('#seltpsa'+id).prop("disabled", false);
        $('#seltpsa'+id).val(0);
    }
    
    
    function agregarsanc_lista(id, idsancion) {
    var tiposancion123=""
        if (idsancion == 1) {

            var anio = $('#sananio' + id).val();
            var mes = $('#sanmes' + id).val();
            var dia = $('#sandia' + id).val();
            
            var fechinicio = $('#fechinicio' + id).val();
            var fechtermina = $('#fechtermina' + id).val();
            
            $('#erranios' + id).hide();
            $('#errmeses' + id).hide();
            $('#errdias' + id).hide();

            if (anio.length == 0) {
                $('#erranios' + id).show();
            } else {
                if (mes.length == 0) {
                    $('#errmeses' + id).show();
                } else {
                    if (dia.length == 0) {
                        $('#errdias' + id).show();
                    } else {
                        var pos = validarexistenciasancionUpdate(id, idsancion);
                        if (pos == -1) { //es insert normal
                            arrayinsert[contadorarray] = new Array(14);

                            arrayinsert[contadorarray][0] = $('#valchec' + id).val();
                            arrayinsert[contadorarray][1] = idsancion;
                            arrayinsert[contadorarray][2] = anio;
                            arrayinsert[contadorarray][3] = mes;
                            arrayinsert[contadorarray][4] = dia;
                            arrayinsert[contadorarray][5] = 0;
                            arrayinsert[contadorarray][6] = 0;
                            arrayinsert[contadorarray][7] = 1;
                            arrayinsert[contadorarray][8] = 0;
                            arrayinsert[contadorarray][9] = 0;
                            arrayinsert[contadorarray][10] = fechinicio;
                            arrayinsert[contadorarray][11] = fechtermina;
                            guardadoIndividual(id, contadorarray);
                            contadorarray++;
                            limpiarguardado(id);
                            construirsanciones(id);
     
                        } else { ///Es actualizacion

                            //alert("aterion "+arrayinsert[pos]);
                            arrayinsert[pos][2] = anio;
                            arrayinsert[pos][3] = mes;
                            arrayinsert[pos][4] = dia;
                            arrayinsert[pos][5] = 0;
                            arrayinsert[pos][6] = 0;
                            arrayinsert[pos][7] = 1;
                            arrayinsert[pos][10] = fechinicio;
                            arrayinsert[pos][11] = fechtermina;
                            // alert("actual "+arrayinsert[pos]);
                            construirsancionesupdate(id);
                            limparselectssentencia(totalcheck);
                            actualizarsancionindividual(pos, arrayinsert[pos][8], id);
                        }
                    }
                }
            }
        }

        if (idsancion == 2) {
            var multa = $('#cantm' + id).val();
            $('#errcmulta' + id).hide();
            if (multa.length == 0) {
                $('#errcmulta' + id).show();
            } else {
                var ss = validamoneda(multa);
                if (ss == false) {
                    $('#errcmulta' + id).show();
                } else {
                    var pos = validarexistenciasancionUpdate(id, idsancion);
                    if (pos == -1) { //es insert normal

                        arrayinsert[contadorarray] = new Array(14);

                        arrayinsert[contadorarray][0] = $('#valchec' + id).val();
                        arrayinsert[contadorarray][1] = idsancion;
                        arrayinsert[contadorarray][2] = 0;
                        arrayinsert[contadorarray][3] = 0;
                        arrayinsert[contadorarray][4] = 0;
                        arrayinsert[contadorarray][5] = multa;
                        arrayinsert[contadorarray][6] = 0;
                        arrayinsert[contadorarray][7] = 1;
                        arrayinsert[contadorarray][8] = 0;
                        arrayinsert[contadorarray][9] = 0;
                        arrayinsert[contadorarray][10] = 0;
                        arrayinsert[contadorarray][11] = 0;

                        guardadoIndividual(id, contadorarray);
                        contadorarray++;
                        limpiarguardado(id);
                        construirsanciones(id);

                    } else {
                        arrayinsert[pos][5] = multa;
                        arrayinsert[pos][6] = 0;
                        arrayinsert[pos][7] = 1;

                        construirsancionesupdate(id);
                        limparselectssentencia(totalcheck);
                        actualizarsancionindividual(pos, arrayinsert[pos][8], id);
                    }
                }
            }
        }

        if (idsancion == 3) {
            var repa = $('#crepar' + id).val();
            $('#errcantrep' + id).hide();
            if (repa.length == 0) {
                $('#errcantrep' + id).show();
            } else {

                var ss = validamoneda(repa);
                if (ss == false) {
                    $('#errcantrep' + id).show();
                } else {
                    var pos = validarexistenciasancionUpdate(id, idsancion);
                    if (pos == -1) { //es insert normal
                        arrayinsert[contadorarray] = new Array(14);

                        arrayinsert[contadorarray][0] = $('#valchec' + id).val();
                        arrayinsert[contadorarray][1] = idsancion;
                        arrayinsert[contadorarray][2] = 0;
                        arrayinsert[contadorarray][3] = 0;
                        arrayinsert[contadorarray][4] = 0;
                        arrayinsert[contadorarray][5] = repa;
                        arrayinsert[contadorarray][6] = 0;
                        arrayinsert[contadorarray][7] = 1;
                        arrayinsert[contadorarray][8] = 0;
                        arrayinsert[contadorarray][9] = 0;
                        arrayinsert[contadorarray][10] = 0;
                        arrayinsert[contadorarray][11] = 0;
                        guardadoIndividual(id, contadorarray);
                        contadorarray++;
                        limpiarguardado(id);
                        construirsanciones(id);
                    } else {
                        arrayinsert[pos][5] = repa;
                        arrayinsert[pos][6] = 0;
                        arrayinsert[pos][7] = 1;
                        construirsancionesupdate(id);
                        limparselectssentencia(totalcheck);
                        actualizarsancionindividual(pos, arrayinsert[pos][8], id);
                    }
                }
            }
        }

        if (idsancion == 4) {
            var amonest = $('#selamon' + id).val();
            $('#erramones' + id).hide();
            if (amonest.length == 0) {
                $('#erramones' + id).show();
            } else {
                var pos = validarexistenciasancionUpdate(id, idsancion);
                if (pos == -1) { //es insert normal

                    arrayinsert[contadorarray] = new Array(14);

                    arrayinsert[contadorarray][0] = $('#valchec' + id).val();
                    arrayinsert[contadorarray][1] = idsancion;
                    arrayinsert[contadorarray][2] = 0;
                    arrayinsert[contadorarray][3] = 0;
                    arrayinsert[contadorarray][4] = 0;
                    arrayinsert[contadorarray][5] = 0;
                    arrayinsert[contadorarray][6] = amonest;
                    arrayinsert[contadorarray][8] = 0;
                    arrayinsert[contadorarray][9] = 0;                        
                    arrayinsert[contadorarray][10] = 0;
                    arrayinsert[contadorarray][11] = 0;

                    guardadoIndividual(id, contadorarray);
                    contadorarray++;
                    limpiarguardado(id);
                    construirsanciones(id);

                } else {
                    arrayinsert[pos][6] = amonest;
                    construirsancionesupdate(id);
                    limparselectssentencia(totalcheck);
                    actualizarsancionindividual(pos, arrayinsert[pos][8], id);
                }
            }
        }
        
        if (idsancion == 26) {
//            var repa = $('#crepar' + id).val();
//            $('#errcantrep' + id).hide();
//            if (repa.length == 0) {
//                $('#errcantrep' + id).show();
//            } else {

//                var ss = validamoneda(repa);
//                if (ss == false) {
//                    $('#errcantrep' + id).show();
//                } else {
                    var pos = validarexistenciasancionUpdate(id, idsancion);
                    if (pos == -1) { //es insert normal
                        arrayinsert[contadorarray] = new Array(14);

                        arrayinsert[contadorarray][0] = $('#valchec' + id).val();
                        arrayinsert[contadorarray][1] = idsancion;
                        arrayinsert[contadorarray][2] = 0;
                        arrayinsert[contadorarray][3] = 0;
                        arrayinsert[contadorarray][4] = 0;
                        arrayinsert[contadorarray][5] = 0;
                        arrayinsert[contadorarray][6] = 0;
                        arrayinsert[contadorarray][7] = 1;
                        arrayinsert[contadorarray][8] = 0;
                        arrayinsert[contadorarray][9] = 0;
                        arrayinsert[contadorarray][10] = 0;
                        arrayinsert[contadorarray][11] = 0;
                    
                        guardadoIndividual(id, contadorarray);
                        contadorarray++;
                        limpiarguardado(id);
                        construirsanciones(id);

                    } else {
//                        arrayinsert[pos][5] = repa;
                        arrayinsert[pos][6] = 0;
                        arrayinsert[pos][7] = 1;
                        construirsancionesupdate(id);
                        limparselectssentencia(totalcheck);
                        actualizarsancionindividual(pos, arrayinsert[pos][8], id);
                    }
//                }
//            }
        }
        
        if (idsancion >= 12 && idsancion != 26) {
            var valor = $("#seltpsa"+id+" option:selected").html();      
            
            var observacion = $('#nuevasancion' + id).val();
            var fechinicionuevasancion = $('#fechinicionuevasancion' + id).val();
            var fechterminanuevasancion = $('#fechterminanuevasancion' + id).val();
            
            $('#errobservacion' + id).hide();
            if (observacion.length == 0) {
                $('#errobservacion' + id).show();                
            } else {
                
                var pos = validarexistenciasancionUpdate(id, idsancion);

                if (pos == -1) { //es insert normal 
                    arrayinsert[contadorarray] = new Array(14);

                    arrayinsert[contadorarray][0] = $('#valchec' + id).val();
                    arrayinsert[contadorarray][1] = idsancion;
                    arrayinsert[contadorarray][2] = 0;
                    arrayinsert[contadorarray][3] = 0;
                    arrayinsert[contadorarray][4] = 0;
                    arrayinsert[contadorarray][5] = 0;
                    arrayinsert[contadorarray][6] = 0;
                    arrayinsert[contadorarray][7] = 1;
                    arrayinsert[contadorarray][8] = 0;
                    arrayinsert[contadorarray][9] = 0;
                    arrayinsert[contadorarray][10] = fechinicionuevasancion;
                    arrayinsert[contadorarray][11] = fechterminanuevasancion;
                    arrayinsert[contadorarray][13] = observacion;
                    arrayinsert[contadorarray][14] = valor;
                    guardadoIndividual(id, contadorarray);
                    contadorarray++;
                    limpiarguardado(id);
                    construirsanciones(id);
                } else { ///Es actualizacion
                    //alert("aterion "+arrayinsert[pos]);
                    arrayinsert[pos][2] = 0;
                    arrayinsert[pos][3] = 0;
                    arrayinsert[pos][4] = 0;
                    arrayinsert[pos][5] = 0;
                    arrayinsert[pos][6] = 0;
                    arrayinsert[pos][7] = 1;
                    arrayinsert[pos][10] = fechinicionuevasancion;
                    arrayinsert[pos][11] = fechterminanuevasancion;
                    arrayinsert[pos][13] = observacion;
                    arrayinsert[pos][14] = valor;
                    
                    construirsancionesupdate(id);
                    limparselectssentencia(totalcheck);
                    actualizarsancionindividual(pos, arrayinsert[pos][8], id);

                }   
            }
        }
        $("#seltpsa"+id).val("0");
    }

    function validarexistenciasancionUpdate(id, idsancion) {

        var con = 0;
        var idimp = $('#valchec' + id).val();
        for (con = 0; con < contadorarray; con++) {

            if (arrayinsert[con][0] == idimp && arrayinsert[con][1] == idsancion) {
                return con;
            }
        }
        return -1;
    }

    function validarexistenciasancion(id, idsancion) {
        var con = 0;
        var idimp = $('#valchec' + id).val();
        for (con = 0; con < contadorarray; con++) {
            //alert(arrayinsert[con][0] +"==" +idimp +"&&"+ arrayinsert[con][1] +"=="+ idsancion);
            if (arrayinsert[con][0] == idimp && arrayinsert[con][1] == idsancion) {
//                alert("encontrado "+arrayinsert[con][0] +"==" +idimp +"&&"+ arrayinsert[con][1] +"=="+ idsancion);
                return true;       
            }
        }
        return false;
    }

    function limpiarguardado(id) {

        $('#seltpsa' + id + '> option[value=""]').attr('selected', 'selected');
        $('#divdprision' + id).hide();
        $('#divamonesta' + id).hide();
        $('#divmulta' + id).hide();
        $('#divrepara' + id).hide();
        $('#divnuevasancion' + id).hide();
    }

    function construirsanciones(id) {
        var estatusdesentencia = $('#seleststsent1').val();
        
        for (var s = 0; s < contadorarray; s++) {
            for (var t = (s + 1); t < (contadorarray) - 1; t++) {
                if (arrayinsert[s][0] == arrayinsert[t][0] && arrayinsert[s][1] == arrayinsert[t][1]) {
                    arrayinsert[t][0] = 0;
                    arrayinsert[t][1] = 0;
                    arrayinsert[t][2] = 0;
                    arrayinsert[t][3] = 0;
                    arrayinsert[t][4] = 0;
                    arrayinsert[t][5] = 0;
                    arrayinsert[t][6] = 0;
                }
            }
        }
        
        var idimp = $('#valchec' + id).val();
        var dinero = 0;
        var inform = "";
        var amonestado = 0;
        var especificacion="";
        var esta=0;
        var incrementaestatus=0;
        //var estamulta=0;
        //alert(contadorarray);
        for (con = 0; con < contadorarray; con++) {            
            //estamulta++;
            incrementaestatus=id+contadorestatus;
            
            //alert(arrayinsert[con][0]+"=="+idimp+"&&"+arrayinsert[con][0]+">"+0);
            //document.write(arrayinsert[con][1]);
            if (arrayinsert[con][0] == idimp && arrayinsert[con][0] > 0) {
                especificacion = arrayinsert[con][9];
                if (arrayinsert[con][1] == 2) { ///Multa
                    dinero = arrayinsert[con][5];
                }
                if (arrayinsert[con][1] == 3) { ////reparacion
                    dinero = arrayinsert[con][5];
                }
                var din = parseFloat(dinero);
                dinero = din.toFixed(2);

                if (arrayinsert[con][1] == 4) { ////amonestacion
                    amonestado = arrayinsert[con][6];
                }
                
//                if (arrayinsert[con][1] == 26) { ////ABSUELTO
//                    amonestado = arrayinsert[con][6];
//                }

                if (arrayinsert[con][1] >= 12 && arrayinsert[con][1] != 26) { ////sancionesnuevas
                    if(arrayinsert[con][10]=="31/12/1969"&&arrayinsert[con][11]=="31/12/1969")
                    {
                        
                        valorprision = "Observaci&oacuten:<br>Fecha Inicio:<br>Fecha Termina: ";
                    }
                    else
                    {
                        valorprision = "Observaci&oacuten:"+arrayinsert[con][13]+"<br>Fecha Inicio: " + arrayinsert[con][10]+"<br>Fecha Termina: " + arrayinsert[con][11];
                    }                    
                }
                
                if (arrayinsert[con][1] == 1) { ////prision
                    if(arrayinsert[con][10]=="31/12/1969"&&arrayinsert[con][11]=="31/12/1969")
                    {
                        valorprision = "A\u00F1os: " + arrayinsert[con][2] + " <br>Meses: " + arrayinsert[con][3] + "<br>Dias:" + arrayinsert[con][4]+"<br>Fecha Inicio:<br>Fecha Termina: ";
                    }
                    else
                    {
                        valorprision = "A\u00F1os: " + arrayinsert[con][2] + " <br>Meses: " + arrayinsert[con][3] + "<br>Dias:" + arrayinsert[con][4]+"<br>Fecha Inicio: " + arrayinsert[con][10]+"<br>Fecha Termina: " + arrayinsert[con][11];
                    }                    
                }
                if (arrayinsert[con][1] == 2) { ///Multa
                
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div id="divsancael' + con + '"  class="list-group" >';
                    //alert(sientra==1);
                      
//                      alert(estatusdesentencia);
//                      alert(incrementaestatus);
//                      alert(id>contadorestatus);
//                    alert(estatusdesentencia!=12);
//                    alert(id<contadorestatus&&estatusdesentencia!=12);
//                    alert((estatusdesentencia!=12&&incrementaestatus>contadorestatus));
//                    alert((id<contadorestatus&&estatusdesentencia!=12));
//                    alert((id==contadorestatus && id>contadorestatus));
////                    
                     
                    //alert(estatusdesentencia+"=="+12+"&&"+incrementaestatus+">"+contadorestatus);
                    
                    if(id>contadorestatus||estatusdesentencia!=12||(id<contadorestatus&&estatusdesentencia!=12)||(estatusdesentencia!=12&&incrementaestatus>contadorestatus)||(id<contadorestatus&&estatusdesentencia!=12)||(id==contadorestatus && id>contadorestatus))
                    {   
                        //sientra=1;
                        //alert("entro");
                        inform += '<a  class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',' + dinero + ',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ',1,2,3,4,5,6)">';                    
                    }
                    else
                    {
                        //sientra=0;
                    }
                                    
                    for (contador4 = 0; contador4 < contadorbeneficios; contador4++) {

                        if(arrayinsert[con][8]==arraybeneficios[contador4][4])
                        {
                            inform += '<h4 class="list-group-item-heading">BENEFICIO</h4>';
                            inform += '<h5 class="list-group-item-heading">'+arraybeneficios[contador4][1]+'</h5>';
                            if(arraybeneficios[contador4][5]==5)
                            {
                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + arraybeneficios[contador4][6] + '</p>';
                            }
                            inform += ' <p class="list-group-item-text">Especificaci&oacute;n: ' + arraybeneficios[contador4][0] + '</p>';
                            inform += ' <p class="list-group-item-text">' + arraybeneficios[contador4][2] + '</p><br>';
                        }
                    }

                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';                    
                    inform += '<h5 class="list-group-item-heading">MULTA</h5>';
                    inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + dinero + '</p>';                    
                                    
                    if(id>contadorestatus||estatusdesentencia!=12||(id<contadorestatus&&estatusdesentencia!=12)||(estatusdesentencia!=12&&incrementaestatus>contadorestatus)||(id<contadorestatus&&estatusdesentencia!=12)||(id==contadorestatus && id>contadorestatus))
                    {     
                        inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar Sanci&oacute;n"/>';
                    }

                    inform +='</div>';
                }
                if (arrayinsert[con][1] == 3) { ////reparacion
                    
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div   id="divsancael' + con + '" class="list-group" >';
                    
                    if(id>contadorestatus||estatusdesentencia!=12||(id<contadorestatus&&estatusdesentencia!=12)||(estatusdesentencia!=12&&incrementaestatus>contadorestatus)||(id<contadorestatus&&estatusdesentencia!=12)||(id==contadorestatus && id>contadorestatus))
                    {                           
                        inform += '<a  class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',' + dinero + ',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ',1,2,3,4,5,6)">';                    
                    }
                    
                    for (contador3 = 0; contador3 < contadorbeneficios; contador3++) {
                        if(arrayinsert[con][8]==arraybeneficios[contador3][4])
                        {
                            inform += '<h4 class="list-group-item-heading">BENEFICIO</h4>';
                            inform += '<h5 class="list-group-item-heading">'+arraybeneficios[contador3][1]+'</h5>';
                            if(arraybeneficios[contador3][5]==5)
                            {
                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + arraybeneficios[contador3][6] + '</p>';
                            }
                            inform += ' <p class="list-group-item-text">Especificaci&oacute;n: ' + arraybeneficios[contador3][0] + '</p>';
                            inform += ' <p class="list-group-item-text">' + arraybeneficios[contador3][2] + '</p><br>';
                        }
                    }
                    
                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';
                    inform += ' <h5 class="list-group-item-heading">REPARACION DE DA\u00D1O</h5>';
                    inform += ' <p class="list-group-item-text"> Cantidad  de Reparaci\u00F3n  $' + dinero + '</p>';
                    
                    if(id>contadorestatus||estatusdesentencia!=12||(id<contadorestatus&&estatusdesentencia!=12)||(estatusdesentencia!=12&&incrementaestatus>contadorestatus)||(id<contadorestatus&&estatusdesentencia!=12)||(id==contadorestatus && id>contadorestatus))
                    {                           
                       inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar San&oacute;on"/>';
                    }
                    inform +='</div>';
                }
                if (arrayinsert[con][1] == 4) { ////amonestacion

                    if (amonestado == 'S') {
                        amonestado = "SI";
                    } else {
                        amonestado = "NO";
                    }
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div   id="divsancael' + con + '" class="list-group" >';
                    
                    if(id>contadorestatus||estatusdesentencia!=12||(id<contadorestatus&&estatusdesentencia!=12)||(estatusdesentencia!=12&&incrementaestatus>contadorestatus)||(id<contadorestatus&&estatusdesentencia!=12)||(id==contadorestatus && id>contadorestatus))
                    {                           
                        inform += '<a class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',' + dinero + ',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ',1,2,3,4,5,6)">';                    
                    }
                    
                    for (contador2 = 0; contador2 < contadorbeneficios; contador2++) {
                        if(arrayinsert[con][8]==arraybeneficios[contador2][4])
                        {
                            inform += '<h4 class="list-group-item-heading">BENEFICIO</h4>';
                            inform += '<h5 class="list-group-item-heading">'+arraybeneficios[contador2][1]+'</h5>';
                            if(arraybeneficios[contador2][5]==5)
                            {
                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + arraybeneficios[contador2][6] + '</p>';
                            }
                            inform += ' <p class="list-group-item-text">Especificaci&oacute;n: ' + arraybeneficios[contador2][0] + '</p>';
                            inform += ' <p class="list-group-item-text">' + arraybeneficios[contador2][2] + '</p><br>';
                        }
                    }
                    
                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';
                    inform += ' <h5 class="list-group-item-heading">AMONESTACI\u00D3N</h5>';
                    inform += ' <p class="list-group-item-text">Amonestado: ' + amonestado + '</p>';
                    
                    if(id>contadorestatus||estatusdesentencia!=12||(id<contadorestatus&&estatusdesentencia!=12)||(estatusdesentencia!=12&&incrementaestatus>contadorestatus)||(id<contadorestatus&&estatusdesentencia!=12)||(id==contadorestatus && id>contadorestatus))
                    {                           
                        inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar Sanci&oacute;n"/>';                    
                    }
                    inform +='</div>';
                }
                
                if (arrayinsert[con][1] == 1) { ////prision
                
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div id="divsancael' + con + '" class="list-group" >';
                                        
                    if(id>contadorestatus||estatusdesentencia!=12||(id<contadorestatus&&estatusdesentencia!=12)||(estatusdesentencia!=12&&incrementaestatus>contadorestatus)||(id<contadorestatus&&estatusdesentencia!=12)||(id==contadorestatus && id>contadorestatus))
                    {   
                        var f1 = arrayinsert[con][10].toString();
                        var arr1 = f1.split("/");

                        var f2 = arrayinsert[con][11].toString();
                        var arr2 = f2.split("/");

                        fechin=arr1[0]+"p"+arr1[1]+"p"+arr1[2];
                        fechfin=arr2[0]+"p"+arr2[1]+"p"+arr2[2];
                        inform += '<a  class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',' + dinero + ',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ',' + arr1[0] + ',' + arr1[1] + ',' + arr1[2] + ',' + arr2[0] + ',' + arr2[1] + ',' + arr2[2] + ')">';
                    }
                    
                    for (contador1 = 0; contador1 < contadorbeneficios; contador1++) {
                        
                        if(arrayinsert[con][8]==arraybeneficios[contador1][4])
                        {                            
                            inform += '<h4 class="list-group-item-heading">BENEFICIO</h4>';
                            inform += '<h5 class="list-group-item-heading">'+arraybeneficios[contador1][1]+'</h5>';
                            if(arraybeneficios[contador1][5]==5)
                            {
                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + arraybeneficios[contador1][6] + '</p>';
                            }
                            inform += ' <p class="list-group-item-text">Especificaci&oacute;n: ' + arraybeneficios[contador1][0] + '</p>';
                            inform += ' <p class="list-group-item-text">' + arraybeneficios[contador1][2] + '</p><br>';
                        }
                    }
                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';
                    inform += ' <h5 class="list-group-item-heading">PRISI\u00D3N</h5>';
                    inform += ' <p class="list-group-item-text">' + valorprision + '</p>';
                    
                    if(id>contadorestatus||estatusdesentencia!=12||(id<contadorestatus&&estatusdesentencia!=12)||(estatusdesentencia!=12&&incrementaestatus>contadorestatus)||(id<contadorestatus&&estatusdesentencia!=12)||(id==contadorestatus && id>contadorestatus))
                    {                           
                        inform += '</a> <img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar Sanci&oacute;n"/>';                    
                    }
                    inform +='</div>';
                }
                
                
                if (arrayinsert[con][1] == 26) { ////absuelto
                    
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div   id="divsancael' + con + '" class="list-group" >';
                    
                    if(id>contadorestatus||estatusdesentencia!=12||(id<contadorestatus&&estatusdesentencia!=12)||(estatusdesentencia!=12&&incrementaestatus>contadorestatus)||(id<contadorestatus&&estatusdesentencia!=12)||(id==contadorestatus && id>contadorestatus))
                    {                           
                        inform += '<a  class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',' + dinero + ',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ',1,2,3,4,5,6)">';                    
                    }
                    
//                    for (contador3 = 0; contador3 < contadorbeneficios; contador3++) {
//                        if(arrayinsert[con][8]==arraybeneficios[contador3][4])
//                        {
//                            inform += '<h4 class="list-group-item-heading">BENEFICIO</h4>';
//                            inform += '<h5 class="list-group-item-heading">'+arraybeneficios[contador3][1]+'</h5>';
//                            if(arraybeneficios[contador3][5]==5)
//                            {
//                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + arraybeneficios[contador3][6] + '</p>';
//                            }
//                            inform += ' <p class="list-group-item-text">Especificaci&oacute;n: ' + arraybeneficios[contador3][0] + '</p>';
//                            inform += ' <p class="list-group-item-text">' + arraybeneficios[contador3][2] + '</p><br>';
//                        }
//                    }
                    
                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';
                    inform += ' <h5 class="list-group-item-heading">ABSUELTO</h5>';
//                    inform += ' <p class="list-group-item-text"> Cantidad  de Reparaci\u00F3n  $' + dinero + '</p>';
                    
                    if(id>contadorestatus||estatusdesentencia!=12||(id<contadorestatus&&estatusdesentencia!=12)||(estatusdesentencia!=12&&incrementaestatus>contadorestatus)||(id<contadorestatus&&estatusdesentencia!=12)||(id==contadorestatus && id>contadorestatus))
                    {                           
                       inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar San&oacute;on"/>';
                    }
                    inform +='</div>';
                }
                
                
                if (arrayinsert[con][1] >= 12 && arrayinsert[con][1] != 26) { ////nuevas sanciones
                
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div id="divsancael' + con + '" class="list-group" >';
                                        
                    if(id>contadorestatus||estatusdesentencia!=12||(id<contadorestatus&&estatusdesentencia!=12)||(estatusdesentencia!=12&&incrementaestatus>contadorestatus)||(id<contadorestatus&&estatusdesentencia!=12)||(id==contadorestatus && id>contadorestatus))
                    {   
                        var observaciones=arrayinsert[con][13];
                        var f1 = arrayinsert[con][10].toString();;
                        var arr1 = f1.split("/");
                        
                        var f2 = arrayinsert[con][11].toString();;
                        var arr2 = f2.split("/");

                        fechin=arr1[0]+"p"+arr1[1]+"p"+arr1[2];
                        fechfin=arr2[0]+"p"+arr2[1]+"p"+arr2[2];
                        inform += '<a  class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',\'' + observaciones + '\',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ',' + arr1[0] + ',' + arr1[1] + ',' + arr1[2] + ',' + arr2[0] + ',' + arr2[1] + ',' + arr2[2] + ')">';
                    }
                    
                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';
                    inform += ' <h5 class="list-group-item-heading">'+arrayinsert[con][14]+'</h5>';
                    inform += ' <p class="list-group-item-text">' + valorprision + '</p>';
                    
                    if(id>contadorestatus||estatusdesentencia!=12||(id<contadorestatus&&estatusdesentencia!=12)||(estatusdesentencia!=12&&incrementaestatus>contadorestatus)||(id<contadorestatus&&estatusdesentencia!=12)||(id==contadorestatus && id>contadorestatus))
                    {                           
                        inform += '</a> <img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar Sanci&oacute;n"/>';                    
                    }
                    inform +='</div>';
                }
                
                if (arrayinsert[con][1] == 11) { ///especificacion
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div   id="divsancael' + con + '" class="list-group" >';
//                    if(estatusdesentencia!=12)
//                    {
//                        inform += '<a class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',' + dinero + ',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ')">';
//                    }                    
//                    for (contador2 = 0; contador2 < contadorbeneficios; contador2++) {
//                        if(arrayinsert[con][8]==arraybeneficios[contador2][4])
//                        {
//                            inform += '<h4 class="list-group-item-heading">BENEFICIO</h4>';
//                            inform += '<h5 class="list-group-item-heading">'+arraybeneficios[contador2][1]+'</h5>';
//                            if(arraybeneficios[contador2][5]==5)
//                            {
//                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + arraybeneficios[contador2][6] + '</p>';
//                            }
//                            inform += ' <p class="list-group-item-text">Especificaci&oacute;n: ' + arraybeneficios[contador2][0] + '</p>';
//                            inform += ' <p class="list-group-item-text">' + arraybeneficios[contador2][2] + '</p><br>';
//                        }
//                    }
                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';
                    inform += ' <p class="list-group-item-text">ESPECIFICACI&Oacute;N: ' + especificacion + '</p><br>';
                    //inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar Sancion"/></div>';
                }
                //////////////////////////FFF   
            }
            $('#divdsanciones'+id).show();
            $("#divdsanciones" + id).html(inform);   
        }
    }

    function construirsancionesupdate(id) {
    var estatusdesentencia = $('#seleststsent1').val();

        for (var s = 0; s < contadorarray; s++) {
            for (var t = (s + 1); t < (contadorarray) - 1; t++) {
                if (arrayinsert[s][0] == arrayinsert[t][0] && arrayinsert[s][1] == arrayinsert[t][1]) {
                    arrayinsert[t][0] = 0;
                    arrayinsert[t][1] = 0;
                    arrayinsert[t][2] = 0;
                    arrayinsert[t][3] = 0;
                    arrayinsert[t][4] = 0;
                    arrayinsert[t][5] = 0;
                    arrayinsert[t][6] = 0;
                }
            }
        }
        var idimp = $('#valchec' + id).val();
        var dinero = 0;
        var inform = "";
        var amonestado = 0;
        var especificacion="";
        
        for (con = 0; con < contadorarray; con++) {

            if (arrayinsert[con][0] == idimp && arrayinsert[con][0] > 0) {
                especificacion=arrayinsert[con][9];
                if (arrayinsert[con][1] == 2) { ///Multa
                    dinero = arrayinsert[con][5];
                }
                if (arrayinsert[con][1] == 3) { ////reparacion
                    dinero = arrayinsert[con][5];
                }
                var din = parseFloat(dinero);
                dinero = din.toFixed(2);

                if (arrayinsert[con][1] == 4) { ////amonestacion
                    amonestado = arrayinsert[con][6];
                }

                if (arrayinsert[con][1] == 1) { ////prision
                    if(arrayinsert[con][10]=="31/12/1969"&&arrayinsert[con][11]=="31/12/1969")
                    {
                        valorprision = "A\u00F1os: " + arrayinsert[con][2] + " <br>Meses: " + arrayinsert[con][3] + "<br>Dias:" + arrayinsert[con][4]+"<br>Fecha Inicio:<br>Fecha Termina: ";
                    }
                    else
                    {
                        valorprision = "A\u00F1os: " + arrayinsert[con][2] + " <br>Meses: " + arrayinsert[con][3] + "<br>Dias:" + arrayinsert[con][4]+"<br>Fecha Inicio: " + arrayinsert[con][10]+"<br>Fecha Termina: " + arrayinsert[con][11];
                    }
                }
                
                if (arrayinsert[con][1] >= 12 && arrayinsert[con][1] != 26) { ////sancionesnuevas
                    if(arrayinsert[con][10]=="31/12/1969"&&arrayinsert[con][11]=="31/12/1969")
                    {                      
                        valorprision = "Observaci&oacuten:<br>Fecha Inicio:<br>Fecha Termina: ";
                    }
                    else
                    {
                        valorprision = "Observaci&oacuten:"+arrayinsert[con][13]+"<br>Fecha Inicio: " + arrayinsert[con][10]+"<br>Fecha Termina: " + arrayinsert[con][11];
                    }                    
                }
                if (arrayinsert[con][1] == 2) { ///Multa
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div id="divsancael' + con + '"  class="list-group" >';
                    
                        inform += '<a  class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',' + dinero + ',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ',1,2,3,4,5,6)">';                    
                    
                    for (contador4 = 0; contador4 < contadorbeneficios; contador4++) {
                        
                        if(arrayinsert[con][8]==arraybeneficios[contador4][4])
                        {
                            inform += '<h4 class="list-group-item-heading">BENEFICIO</h4>';
                            inform += '<h5 class="list-group-item-heading">'+arraybeneficios[contador4][1]+'</h5>';
                            if(arraybeneficios[contador4][5]==5)
                            {
                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + arraybeneficios[contador4][6] + '</p>';
                            }
                            inform += ' <p class="list-group-item-text">Especificaci&oacute;n: ' + arraybeneficios[contador4][0] + '</p>';
                            inform += ' <p class="list-group-item-text">' + arraybeneficios[contador4][2] + '</p><br>';
                            
                        }
                    }
                    
                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';
                    inform += '<h5 class="list-group-item-heading">MULTA</h5>';
                    inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + dinero + '</p>';                    
                    
                    inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar Sanci&oacute;n"/>';
                    inform += '</div>';
                }
                if (arrayinsert[con][1] == 3) { ////reparacion
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div   id="divsancael' + con + '" class="list-group" >';
                    
                        inform += '<a  class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',' + dinero + ',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ',1,2,3,4,5,6)">';
                    
                    for (contador3 = 0; contador3 < contadorbeneficios; contador3++) {
                        if(arrayinsert[con][8]==arraybeneficios[contador3][4])
                        {
                            inform += '<h4 class="list-group-item-heading">BENEFICIO</h4>';
                            inform += '<h5 class="list-group-item-heading">'+arraybeneficios[contador3][1]+'</h5>';
                            if(arraybeneficios[contador3][5]==5)
                            {
                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + arraybeneficios[contador3][6] + '</p>';
                            }
                            inform += ' <p class="list-group-item-text">Especificaci&oacute;n: ' + arraybeneficios[contador3][0] + '</p>';
                            inform += ' <p class="list-group-item-text">' + arraybeneficios[contador3][2] + '</p><br>';
                        }
                    }
                    
                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';
                    inform += ' <h5 class="list-group-item-heading">REPARACION DE DA\u00D1O</h5>';
                    inform += ' <p class="list-group-item-text"> Cantidad  de Reparaci\u00F3n  $' + dinero + '</p>';                    
                        
                    inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar Sanci&oacute;n"/>';
                    inform += '</div>';
                }
                if (arrayinsert[con][1] == 4) { ////amonestacion

                    if (amonestado == 'S') {
                        amonestado = "SI";
                    } else {
                        amonestado = "NO";
                    }
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div   id="divsancael' + con + '" class="list-group" >';
                    
                        inform += '<a class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',' + dinero + ',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ',1,2,3,4,5,6)">';
                    
                    for (contador2 = 0; contador2 < contadorbeneficios; contador2++) {
                        if(arrayinsert[con][8]==arraybeneficios[contador2][4])
                        {
                            inform += '<h4 class="list-group-item-heading">BENEFICIO</h4>';
                            inform += '<h5 class="list-group-item-heading">'+arraybeneficios[contador2][1]+'</h5>';
                            if(arraybeneficios[contador2][5]==5)
                            {
                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + arraybeneficios[contador2][6] + '</p>';
                            }
                            inform += ' <p class="list-group-item-text">Especificaci&oacute;n: ' + arraybeneficios[contador2][0] + '</p>';
                            inform += ' <p class="list-group-item-text">' + arraybeneficios[contador2][2] + '</p><br>';
                        }
                    }
                    
                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';
                    inform += ' <h5 class="list-group-item-heading">AMONESTACI\u00D3N</h5>';
                    inform += ' <p class="list-group-item-text">Amonestado: ' + amonestado + '</p>';
                    
                    inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar Sanci&oacute;n"/>';
                    inform += '</div>';
                }
                if (arrayinsert[con][1] == 1) { ////prision
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div   id="divsancael' + con + '" class="list-group" >';
                    
                    var f1 = arrayinsert[con][10].toString();;
                    var arr1 = f1.split("/");
                        
                    var f2 = arrayinsert[con][11].toString();;
                    var arr2 = f2.split("/");
                        
                    inform += '<a  class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',' + dinero + ',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ',' + arr1[0] + ',' + arr1[1] + ',' + arr1[2] + ',' + arr2[0] + ',' + arr2[1] + ',' + arr2[2] + ')">';
                    
                    for (contador1 = 0; contador1 < contadorbeneficios; contador1++) {
//                        alert(arrayinsert[con][8]);
//                        alert(arraybeneficios[contador][4]);
                        if(arrayinsert[con][8]==arraybeneficios[contador1][4])
                        {
                            inform += '<h4 class="list-group-item-heading">BENEFICIO</h4>';
                            inform += '<h5 class="list-group-item-heading">'+arraybeneficios[contador1][1]+'</h5>';
                            if(arraybeneficios[contador1][5]==5)
                            {
                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + arraybeneficios[contador1][6] + '</p>';
                            }
                            inform += ' <p class="list-group-item-text">Especificaci&oacute;n: ' + arraybeneficios[contador1][0] + '</p>';
                            inform += ' <p class="list-group-item-text">' + arraybeneficios[contador1][2] + '</p><br>';
                        }
                    }
                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';
                    inform += ' <h5 class="list-group-item-heading">PRISI\u00D3N</h5>';
                    inform += ' <p class="list-group-item-text">' + valorprision + '</p>';
                        
                    inform += '</a> <img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar Sanci&oacute;n"/>';
                    inform += '</div>';
                }
                
                if (arrayinsert[con][1] >= 12 && arrayinsert[con][1] != 26) { ////NUEVA SANCION
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div   id="divsancael' + con + '" class="list-group" >';
                    
                    var observaciones=arrayinsert[con][13];
                    var f1 = arrayinsert[con][10].toString();;
                    var arr1 = f1.split("/");
                        
                    var f2 = arrayinsert[con][11].toString();;
                    var arr2 = f2.split("/");
                        
                    inform += '<a  class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',\'' + observaciones + '\',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ',' + arr1[0] + ',' + arr1[1] + ',' + arr1[2] + ',' + arr2[0] + ',' + arr2[1] + ',' + arr2[2] + ')">';
                    
                    for (contador1 = 0; contador1 < contadorbeneficios; contador1++) {
//                        alert(arrayinsert[con][8]);
//                        alert(arraybeneficios[contador][4]);
                        if(arrayinsert[con][8]==arraybeneficios[contador1][4])
                        {
                            inform += '<h4 class="list-group-item-heading">BENEFICIO</h4>';
                            inform += '<h5 class="list-group-item-heading">'+arraybeneficios[contador1][1]+'</h5>';
                            if(arraybeneficios[contador1][5]==5)
                            {
                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + arraybeneficios[contador1][6] + '</p>';
                            }
                            inform += ' <p class="list-group-item-text">Especificaci&oacute;n: ' + arraybeneficios[contador1][0] + '</p>';
                            inform += ' <p class="list-group-item-text">' + arraybeneficios[contador1][2] + '</p><br>';
                        }
                    }

                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';
                    inform += ' <h5 class="list-group-item-heading">'+arrayinsert[con][14]+'</h5>';
                    inform += ' <p class="list-group-item-text">' + valorprision + '</p>';                    
                        
                    inform += '</a> <img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar Sanci&oacute;n"/>';
                    inform += '</div>';
                }   
                
                if (arrayinsert[con][1] == 11) { ///especificacion
                    inform += '<div class="alert alert-info alert-dismissable" id="infosr' + con + '" style="display: none;">';
                    inform += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
                    inform += '<strong>Informaci&oacute;n!</strong> Mensaje';
                    inform += '</div>';
                    inform += '<div   id="divsancael' + con + '" class="list-group" >';
//                    if(estatusdesentencia!=12)
//                    {
//                        inform += '<a class="list-group-item" onclick="modificasancion(' + (id) + ',' + idimp + ',' + arrayinsert[con][1] + ',' + dinero + ',\'' + amonestado + '\',' + arrayinsert[con][2] + ',' + arrayinsert[con][3] + ',' + arrayinsert[con][4] + ')">';
//                    }                    
//                    for (contador2 = 0; contador2 < contadorbeneficios; contador2++) {
//                        if(arrayinsert[con][8]==arraybeneficios[contador2][4])
//                        {
//                            inform += '<h4 class="list-group-item-heading">BENEFICIO</h4>';
//                            inform += '<h5 class="list-group-item-heading">'+arraybeneficios[contador2][1]+'</h5>';
//                            if(arraybeneficios[contador2][5]==5)
//                            {
//                                inform += ' <p class="list-group-item-text">Cantidad  de multa  $' + arraybeneficios[contador2][6] + '</p>';
//                            }
//                            inform += ' <p class="list-group-item-text">Especificaci&oacute;n: ' + arraybeneficios[contador2][0] + '</p>';
//                            inform += ' <p class="list-group-item-text">' + arraybeneficios[contador2][2] + '</p><br>';
//                        }
//                    }
                    inform += '<br><h4 class="list-group-item-heading">SANCION</h4>';
                    inform += ' <p class="list-group-item-text">ESPECIFICACI&Oacute;N: ' + especificacion + '</p><br>';
                    //inform += '</a><img  src="../vistas/img/eliminar.png" width="30" height="30" style="position:relative;left:95%;top:-50px" onclick="consultarbeneficiosdetalle(' + (con) + ',' + arrayinsert[con][8] + ',' + id + ')" class="manita" title="Eliminar Sancion"/></div>';
                }
                //////////////////////////FFF                
            }
            $("#divdsanciones" + id).html(inform);
        }
    }

    function guardarsentenciasgeneradas(idsentencia, idimputado) {

        var seleccionados = [];
        var tt = 0;
        for (var add = 0; add < checkedagregado.length; add++) {
            $('#chec' + checkedagregado[add]).prop("checked", "checked");
        }

        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
            async: true,
            data: {
                arreglo: 'S',
                idsentencia: idsentencia,
                imputado: idimputado,
                sanciones: arrayinsert,
                arrapelacion: apelaciones,
                idActuacion: $('#idsentenc').val(),
                accion: 'guardarsanciones'
            },
            beforeSend: function() {

            },
            success: function(datos2) {
                try {
                    var jsonv = eval("(" + datos2 + ")"); //Parsear JSON

                } catch (Exception) {}
            },
            error: function(objeto) {
                $("#errorsanc").html('<span>Ocurrio un error, No se guard&oacute; sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow');

            }
        });


        for (tt; tt < contadorarray; tt++) {
            if (arrayinsert[tt][0] == idimputado) {

                var sancion = "";
                var anio = "";
                var mes = "";
                var dia = "";
                var multa = "";
                var reparac = "";

                if (arrayinsert[tt][1] == 2) { //Multa
                    multa = arrayinsert[tt][5];
                }
                if (arrayinsert[tt][1] == 3) { //repara
                    reparac = arrayinsert[tt][5];
                }
                if (arrayinsert[tt][1] == 1) { //PRISION
                    anio = arrayinsert[tt][2];
                    mes = arrayinsert[tt][3];
                    dia = arrayinsert[tt][4];
                }

                if (arrayinsert[tt][1] == 4) { //AMONEST
                    amonesttado = arrayinsert[tt][6];
                }
                sancion = arrayinsert[tt][1];

                var idsentencias = "";
            }

        }
    }


    function validareliminacionimputsente(cont,elid) {        
        var idactcc = $('#idsentenc').val();
            
        if(limpiararbolestatus!=1)
        {
            $.ajax({
                type: "POST",
                async: true,
                url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
                data: {
                    accion: 'consultarestatus',
                    activo: 'S',
                    idImputadoSentencia: cont                   
                },
                beforeSend: function() {

                },
                success: function(datos) {
                    var json;
                    try {
                        json = eval("(" + datos + ")"); //Parsear JSON


                        if (json.totalCount > 0) {
                            for (var i = 0; i < json.totalCount; i++) {
                                //alert(json.data[i].cveTipoSancion+">=5&&"+json.data[i].cveTipoSancion+"<=10");
                                var estatus=0;
                                if(json.data[i].cveTipoSancion>=5&&json.data[i].cveTipoSancion<=10)
                                {
                                    var estatus=1;
                                    //alert("<span>No se puede eliminar sancion, verifique los beneficios.</span>");                                   
                                                                 
                                    $("#info2").html('<span>No se puede eliminar sanci&oacute;n, verifique los beneficios.<span>').fadeIn('slow').delay(1000).fadeOut('slow');

                                    
                                    $("#checagregado" + elid).prop("checked", "checked");
                                    break;
                                }
                                
                                if(json.data[i].cveTipoSancion<=4&&json.data[i].cveTipoSancion>=1)
                                {
                                    //confelimsancion(id, idimputadosancion, idmensaje);
                                    if ($("#checagregado" + cont).is(':checked')) {

                                    } else {
                                        bootbox.dialog({
                                            message: "Al seleccionar esta opci&oacute;n se eliminara la sentencia seleccionada \u00bf Desea continuar?",
                                            buttons: {
                                                danger: {
                                                    label: "Aceptar",
                                                    className: "btn-primary",
                                                    callback: function() {

                                                        var idel = $('#valchecagregado' + cont).val();

                                                        eliminarimputadosente(cont);
                                                        consultarimputadossanciones($('#idsentenc').val());
                                                        

                                                    }
                                                },
                                                success: {
                                                    label: "Cancelar",
                                                    className: "btn-primary",
                                                    callback: function() {

                                                        $("#checagregado" + elid).prop("checked", "checked");
                                                    }
                                                }
                                            }
                                        });
                                    }
                                    break;
                                }
                                
                            }
                        }
                        else{
                            if(json.totalCount == 0)
                            {
                                $("#info2").html('<span>No hay sanciones.<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                                $("#checagregado" + elid).prop("checked", "checked");
                            }
                        }

                    } catch (Exception) {
                        $("#error").html('<span>Ocurrio un error al consultar los beneficios, Intente mas tarde!</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                    }
                },
                error: function(objeto) {
                    $("#error").html('<span>Ocurrio un error al consultar beneficios,Intente mas tarde!</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            });
        }       
    }

    function guardadoIndividual(idsentencia, contadorarray) {
        var sente = $('#valsentencia' + idsentencia).val();
        if(limpiararbolestatus!=1){
            if (sente != 0) {      
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
                    async: true,
                    data: {
                        opcion: 1,
                        idsentencia: sente,
                        imputado: arrayinsert[contadorarray][0],
                        sanciones: arrayinsert[contadorarray],
                        idActuacion: $('#idsentenc').val(),
                        accion: 'guardarsanciones'
                    },
                    beforeSend: function() {
                    },
                    success: function(datos2) {
                        try {
                            var jsonv = eval("(" + datos2 + ")"); //Parsear JSON
                            if (jsonv.totalCount > 0) {
                                arrayinsert[contadorarray][8] = jsonv.data[0].idImputadoSancion;

                                $("#corrgdd" + idsentencia).html('<span>Se guard&oacute; sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                                construirsanciones(idsentencia);
                                //consultaactuacion($('#idsentenc').val(), aa, bb);
                            }
                        } catch (Exception) {
                            $("#corrgdd" + idsentencia).html('<span>Se guard&oacute; sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                        }
                    },
                    error: function(objeto) {
                        $("#corrgdd" + idsentencia).html('<span>Ocurrio un error, No se guard&oacute; sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow');

                    }
                });
            }
        }
        else
        {        
            $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
                    async: true,
                    data: {
                        opcion: 1,                        
                        imputado: $('#valchec'+idsentencia).val(),
                        sanciones: arrayinsert[contadorarray],
                        idActuacion: 0,
                        accion: 'guardarsanciones',
                    },
                    beforeSend: function() {

                    },
                    success: function(datos2) {
                        try {
                            var jsonv = eval("(" + datos2 + ")"); //Parsear JSON
                            if (jsonv.totalCount > 0) {

                                arrayinsert[contadorarray][8] = jsonv.data[0].idImputadoSancion;

                                $("#corrgdd" + idsentencia).html('<span>Se guard&oacute; sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                                construirsanciones(idsentencia);
                                //consultaactuacion($('#idsentenc').val(), aa, bb);
                            }
                        } catch (Exception) {
                            $("#corrgdd" + idsentencia).html('<span>Se guard&oacute; sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                        }
                    },
                    error: function(objeto) {
                        $("#corrgdd" + idsentencia).html('<span>Ocurrio un error, No se guard&oacute; sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow');
                    }
                });
        }
    }

    function actualizarsancionindividual(pos, idsancion, id) {

        var idact = $('#idsentenc').val();
        if (idact != 0 && idsancion != 0) {

            var dineromul = "";
            var dinrepara = "";

            if (arrayinsert[pos][1] == 3) { ///reparacion
                dinrepara = arrayinsert[pos][5];
            }
            if (arrayinsert[pos][1] == 2) { ///multa
                dineromul = arrayinsert[pos][5];
            }

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadossanciones/ImputadossancionesFacade.Class.php",
                async: true,
                data: {
                    idImputadoSancion: idsancion,
                    cveTipoSancion: arrayinsert[pos][1],
                    anioPrision: arrayinsert[pos][2],
                    mesPrision: arrayinsert[pos][3],
                    diasPrision: arrayinsert[pos][4],
                    fechaInicio: arrayinsert[pos][10],
                    fechaTermina: arrayinsert[pos][11],
                    cantidadMulta: dineromul,
                    cantidadReparacion: dinrepara,
                    amonestacion: arrayinsert[pos][6],
                    especificacion: arrayinsert[pos][13],
                    accion: 'guardar'
                },
                beforeSend: function() {

                },
                success: function(datos2) {

                    try {
                        var jsonn;
                        jsonn = eval("(" + datos2 + ")"); //Parsear JSON
                        $("#corrgdd" + id).html('<span>Se actualizo sanci&oacute;n<span>').fadeIn('slow').delay(1000).fadeOut('slow')
                    } catch (Exception) {}
                }
            });
        }
    }


    function cargarapelacion(id) {           
        //limpiarapelacion(id);
        if(limpiararbolestatus!=1)
        {
            cosultarsentido(id,apelaciones[id][1]);
            getSalas(id,apelaciones[id][4]);
            //alert("entra");
            if(apelaciones[id][2]!=""||apelaciones[id][3]!="")
            {            
                $('#numerotoca'+id).val(apelaciones[id][2]);
                $('#aniotoca'+id).val(apelaciones[id][3]);
            }
            else
            {
                $('#numerotoca'+id).val();
                $('#aniotoca'+id).val();
            }
            $('#select_mcautelares_salastoca'+id).val();

            apelaciones[id][5] = 1; //activo
            $('#apelacionllenando').val(id);
            $('#selectsentido'+id+' > option[value="' + apelaciones[id][1] + '"]').attr('selected', 'selected');
            $('#etnomimputaddo').text(apelaciones[id][7]);
            $('#select_mcautelares_salastoca'+id+' > option[value="' + apelaciones[id][4] + '"]').attr('selected', 'selected');
            $('#captapelacion'+id).show();
            $('#altas').show();
        }
        else
        {  
            
        }
        
    }

    function editarapelacion(valor, id) {
        
        limpiarapelacion(id);

        if (valor == 'S') {
            
            $('#apelacionllenando').val(id);

            $("#edit_" + id).addClass("btn-primary");
            $("#edit_" + id).prop("disabled", false);

            $('#captapelacion'+id).show();
            //$('#altas').hide();
            $('#etnomimputaddo').text(apelaciones[id][7]);
            cargarapelacion(id);
        } else {
           
            apelaciones[id][5] = 0; //inacactivo
            $("#edit_" + id).removeClass("btn-primary");            
            $("#edit_" + id).prop("disabled", true);            
            $('#captapelacion'+id).hide();                        
        }
    }

    llenareditor = function(value) {
        try {
            editor.ready(function() {
            setTimeout(function() {
            editor.setContent(value, true);
            
            if($("#seleststsent1").val()=="12"){
                $("#textoeditor").val("");
                $("#textoeditor").val(value);
            }
            else{
                $("#textoeditor").val(value);
            }
                    
            }, 500);

            });
        } catch (e) {
            alert(e);
        }

    };


    function consultarbeneficios(actuacion) {
        var na = $('#na1').val();
        var aa = $('#aa1').val();

        var idactcc = $('#idsentenc').val();

        if (idactcc == 0 && na.length == 0) {
            confelimsentencia();
        } else {
            ////////////////////////////////////////tipos actuaciones
            $.ajax({
                type: "POST",
                async: true,
                url: "../fachadas/sigejupe/beneficioses/BeneficiosesFacade.Class.php",
                data: {
                    accion: 'consultar',
                    activo: 'S',
                    idActuacion: idactcc
                },
                beforeSend: function() {

                },
                success: function(datos) {
                    var json;
                    try {
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount == 0) {
                            confelimsentencia();
                        } else {

                            $("#infosr").html('<span>No se puede eliminar sanci&oacute;n, verifique los beneficios</span>').fadeIn('slow').delay(3000).fadeOut('slow');
                        }

                    } catch (Exception) {
                        $("#error").html('<span>Ocurrio un error al consultar los beneficios, Intente mas tarde!</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                    }
                },
                error: function(objeto) {
                    $("#error").html('<span>Ocurrio un error al consultar beneficios,Intente mas tarde!</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            });
        }

    }
    
    function consultarbeneficiosdetalle(id, idimputadosancion, idmensaje) {
        var na = $('#na1').val();
        var aa = $('#aa1').val();

        var idactcc = $('#idsentenc').val();
        
        if (idactcc == 0 && na.length == 0) {
            confelimsancion(id, idimputadosancion, idmensaje);
        } else {
            
            ////////////////////////////////////////tipos actuaciones
            $.ajax({
                type: "POST",
                async: true,
                url: "../fachadas/sigejupe/beneficioses/BeneficiosesFacade.Class.php",
                data: {
                    accion: 'consultar',
                    activo: 'S',
                    idActuacion: idactcc,
                    idImputadoSancion:idimputadosancion
                },
                beforeSend: function() {

                },
                success: function(datos) {
                    var json;
                    try {
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount == 0) {
                            
                            confelimsancion(id, idimputadosancion, idmensaje);
                        } else {
                            //$("#infosr"+id).html('<span>No se puede eliminar sancion, verifique los beneficios.<span>');
                            //$("#infosr"+id).show("slide");
                            $("#infosr"+id).html('<span>No se puede eliminar sanci&oacute;n, verifique los beneficios.</span>').fadeIn('slow').delay(3000).fadeOut('slow');
                        }
                    } catch (Exception) {
                        $("#error").html('<span>Ocurrio un error al consultar los beneficios, Intente mas tarde!</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                    }
                },
                error: function(objeto) {
                    $("#error").html('<span>Ocurrio un error al consultar beneficios,Intente mas tarde!</span>').fadeIn('slow').delay(1000).fadeOut('slow');
                }
            });
        }
    }


    function llenadoapelaciones(id) {
        var posap = $('#apelacionllenando').val();

        if (posap != 0) {

            var sentido = $('#selectsentido'+id).val();
            var numtc = $('#numerotoca'+id).val();
            var aniotca = $('#aniotoca'+id).val();
            var sala = $('#select_mcautelares_salastoca'+id).val();

            apelaciones[posap][0] = $('#valchec' + posap).val();
            apelaciones[posap][1] = sentido;
            apelaciones[posap][2] = numtc;
            apelaciones[posap][3] = aniotca;
            apelaciones[posap][4] = sala;
            apelaciones[posap][5] = 1; //activo
        }
    }

    function limpiarapelacion(id) {

        $('#apelacionllenando').val("");
        $('#selectsentido'+id+' > option[value=""]').attr('selected', 'selected');
        $('#select_mcautelares_salastoca'+id+' > option[value="0"]').attr('selected', 'selected');
        $('#numerotoca'+id).val("");
        $('#aniotoca'+id).val("");
    }

    function mayusculas(elem) {
        elem.value = elem.value.toUpperCase();
    }
    
    apelaciones = function (IdSentenciaapelada,IdImputadoSentencia,CveSentido,NumToca,AnioToca,CveSala) {
            this.idSentenciaapelada=IdSentenciaapelada;
            this.idImputadoSentencia=IdImputadoSentencia;
            this.cveSentido=CveSentido;
            this.numToca= NumToca;
            this.anioToca=AnioToca;
            this.cveSala=CveSala;
    };
    sanciones = function (IdimputadoSancion,IdImputadoSentencia,CveTipoSancion,AnioPrision,MesPrision,DiasPrision,CantidadMulta,CantidadReparacion,Amonestacion,Especificacion,FechaInicio,FechaTermina) {
        this.idImputadoSancion=IdImputadoSancion;
        this.idImputadoSentencia=IdImputadoSentencia;
        this.cveTipoSancion=CveTipoSancion;
        this.anioPrision=AnioPrision;
        this.mesPrision=MesPrision;
        this.diasPrision=DiasPrision;
        this.cantidadMulta=CantidadMulta;
        this.cantidadReparacion=CantidadReparacion;
        this.amonestacion=Amonestacion;
        this.especificacion=Especificacion;
        this.fechaInicio=FechaInicio;
        this.fechaTermina=FechaTermina;
    };
    
    imputadosOfendidos = function (IdImputadoSancion,IdImpOfeDelCarpeta,Apelaciones,Sanciones){
       this.idImputadoSancion = IdImputadoSancion;
       this.idImpOfeDelCarpeta=IdImpOfeDelCarpeta;
       this.apelaciones=Apelaciones;
       this.sanciones=Sanciones;
    };
    
    $(function () {
        obtenerPermisos();
        $('#fdinicon, #ffincon').datepicker().on('changeDate', function (e) {
            $(this).datepicker('hide');
        });
        editor = UE.getEditor('txtNotas');
        editor.ready(function() {
            editor.setContent(); 
        });
    });
</script>
<!-- Modal visor -->

<input type="text" id="impofesele" style="display:none">
<input type="text" id="idsentenc" style="display:none" value="0">

<input type="text" id="idsancionupdate" style="display:none" value="0">
<input type="text" id="apelacionllenando" style="display:none" value="0">

<div style="width: 300px;top:20%;right:0px;position: fixed">
    <div id="mnsgs" class="col-sm-12"></div>
</div>
<div id="misjueces" style="display:none"></div>
<textarea type="text" id="textoeditor"  style="display:none"></textarea>

<br>
<br>
<br>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>