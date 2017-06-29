<?php
//ihs
if (session_status() == PHP_SESSION_NONE) {
    @session_start();
}
$SysCveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
$SysNumEmpleado = $_SESSION['numEmpleado'];
$SysCvePerfil = $_SESSION['cvePerfil'];
$SysCveAdscripcion = $_SESSION['cveAdscripcion'];
////POST para arbol
$procedencia = 0;
$idActuacionArbol = ( isset($_POST['idActuacion']) ? @$_POST['idActuacion'] : '' );
$hiddenidReferencia = ( isset($_POST['idReferencia']) ? @$_POST['idReferencia'] : '' );
$cveTipoCarpetaArbol = ( isset($_POST['cveTipoCarpeta']) ? @$_POST['cveTipoCarpeta'] : '' );
if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($hiddenidReferencia != 0 && $hiddenidReferencia != "") || ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "")) {
    $idActuacionArbol = ( ($idActuacionArbol != 0 && $idActuacionArbol != "") ? $idActuacionArbol : 0 );
    $hiddenidReferencia = ( ($hiddenidReferencia != 0 && $hiddenidReferencia != "") ? $hiddenidReferencia : 0 );
    $cveTipoCarpetaArbol = ( ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "") ? $cveTipoCarpetaArbol : 0 );
    $procedencia = 1; // viene de arbol
} else if ($hiddenidReferencia == "" && $cveTipoCarpetaArbol == 0 && $cveTipoCarpetaArbol != "") {
    $procedencia = 1; // viene de arbol el formulario general
}
?>
<style type="text/css">
    .alert{ display: none; }
    #divHideForm{ display: none; position: absolute; width: 100%; height: 100vh; opacity: .5; z-index: 99999; background: #427468; }
    #divMenssage{ width: 100%; height: 40px; padding-top: 10px; padding-bottom: 10px; text-align: center; margin-top: 40vh; margin-bottom: auto; color: #284740; background: #FFFFFF; text-transform: uppercase; }
    #divImgloading{ background: #FFFFFF url(img/cargando_1.gif) no-repeat; background-position: center; width: 100%; height: 70px; margin-left: auto; margin-right: auto; }
    .panel panel-default{ background: #427468; color: #ebf3f1; }
    .panel-heading{ background: #427468; color: #ebf3f1; }
    .panel-group .panel-heading{ background: #427468; color: #ebf3f1; }
    .panel-default > .panel-heading{ background: #427468; color: #ebf3f1; }
    .needed:after { color:darkred; content: " (*)"; }
    .needed1:after { color:white; content: " (*)"; }
    .textCorrection{ display: block; text-transform: lowercase; }
    .textCorrection:first-letter { text-transform: uppercase; }
    .capital{ text-transform: uppercase; }
    input, textarea{ resize: none;} 

    .glyphicon-refresh-animate {
        -animation: spin .7s infinite linear;
        -webkit-animation: spin2 .7s infinite linear;
        -moz-animation: spin2 .7s infinite linear;
    }
    #conectando{
        font-size: 20px;
    }

    @-webkit-keyframes spin2 {
        from { -webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);}
        to { -webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);}
    }
    @-moz-keyframes spin2 {
        from { -webkit-transform: rotate(0deg);-moz-transform: rotate(0deg);}
        to { -webkit-transform: rotate(360deg);-moz-transform: rotate(360deg);}
    }

    @keyframes spin {
        from { transform: scale(1) rotate(0deg);}
    }
</style>

<div id="divFormulario" class="form-horizontal" data-step="1" data-intro="" data-position='top'>
    <div class="panel panel-default" >
        <div class="panel-heading">
            <h5 class="panel-title" id="autosTitulo">
                Tocas de sistema tradicional
            </h5>
        </div>
        <div class="panel-body">
            <input type="hidden" id="cveUsuarioSistema" value="<?= $SysCveUsuarioSistema ?>"/>
            <input type="hidden" id="SysCvePerfil" value="<?= $SysCvePerfil ?>"/>
            <input type="hidden" id="SysCveAdscripcion" value="<?= $SysCveAdscripcion ?>"/>
            <input type="hidden" id="SysNumEmpleado" value="<?= $SysNumEmpleado ?>"/>
            <input type="hidden" id="cveTipoJuzgadoAlt" name="cveTipoJuzgadoAlt"/>
            <input type="hidden" id="procedencia" name="procedencia" value="<?= $procedencia ?>" />
            <input type="hidden" id="idActuacionArbol" name="idActuacionArbol" value="<?= $idActuacionArbol ?>" /> 
            <input type="hidden" id="hiddenidReferenciaArbol" name="hiddenidReferenciaArbol" value="<?= $hiddenidReferencia ?>" />
            <input type="hidden" id="hiddenidReferencia" name="hiddenidReferencia" value="" />
            <input type="hidden" id="hiddenidOficio" name="hiddenidOficio" value="" />
            <input type="hidden" id="hiddenidResolucionCombatida" name="hiddenidResolucionCombatida" value="<?= ""//$idResolucionCombatida                                                          ?>" />
            <input type="hidden" id="hiddenidResolucionCarpetaCombatida" name="hiddenidResolucionCarpetaCombatida" value="<?= ""//$idResolucionCombatida                                                          ?>" />
            <input type="hidden" id="hiddenIofe" name="hiddenidResolucionCombatida" value="" />
            <input type="hidden" id="hiddenIimp" name="hiddenidResolucionCombatida" value="" />
            <input type="hidden" id="hiddenIdel" name="hiddenidResolucionCombatida" value="" />

            <input type="hidden" id="cveTipoCarpetaArbol" name="cveTipoCarpetaArbol" value="<?= $cveTipoCarpetaArbol ?>" />
            <input type="hidden" id="hiddenDefensoridImputado" name="hiddenDefensoridImputado" value="" />
            <input type="hidden" id="hiddenIdRemision" name="hiddenDefensoridImputado" value="" />


            <input type="hidden" id="idActuacion" name="idActuacion" value="<?= $idActuacionArbol ?>" />



            <div class="form-group">                                                                
                <label class="control-label col-md-3 " data-step="2" data-intro="La informaci&oacute;n requerida se indica con (*)." data-position='right'>Toca:</label>
                <div class="col-md-9">
                    <div class="col-md-3"><input type="text" id="numeroToca" maxlength="4" disabled placeholder="N&uacute;mero"  val="" class="form-inline form-control numerico"  /> </div> 
                    <div class="col-md-2"><label class="control-label" data-position='right'>/</label></div>
                    <div class="col-md-4"><input type="text" id="anioToca" maxlength="4" disabled placeholder="A&Ntilde;O"  val="" class="form-inline form-control"  /></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 "  data-step="2" data-position='right'>Tribunal de alzada:</label>
                <div class="col-md-9">
                    <div class="col-md-9">
                        <input type="text" id="Sala" maxlength="4" disabled=""  val="" class="form-control form-inline col-md-5"  />
                    </div>
                </div>
            </div>
            <div class="form-group">                                                                
                <label for="cveTipoJuzgado" class="control-label col-md-3 needed" data-step="2" data-position='right'>Juzgado:</label>
                <div class="col-md-9">
                    <div class="col-md-9">
                        <select class="form-control  " name="cveTipoJuzgado" id="cveTipoJuzgado" onchange="cargaTipoCarpeta();"></select>
                    </div>                
                </div>
            </div>
            <div class="form-group"> 
                <label class="control-label col-md-3">Tipo Carpeta</label>
                <div class="col-md-9">
                    <div class="col-md-9">
                        <select id="select_auto_carpeta" class="form-control"><option value="0">Seleccione una opci&oacute;n</option></select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 needed" id="label_auto_text1">No. de Causa</label>
                <div class="col-md-9">
                    <div class="col-md-3">
                        <input type="text" id="numeroCausa" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline form-control numerico"  />
                    </div>
                    <label style="text-align:center" class="control-label col-md-2" id="label_auto_text1" >/</label>
                    <div class="col-md-4">
                        <input type="text" id="anioCausa" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline form-control numerico"  />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 needed" id="label_auto_text1">Lugar:</label>
                <div class="col-md-9">
                    <div class="col-md-3">
                        <input type="text" id="lugar" maxlength="4" placeholder="LUGAR" val="" class="form-inline form-control" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();"  />
                    </div>
                    <label class="control-label col-md-2 needed" style="text-align:center" id="label_auto_text1">Agencia:</label>
                    <div class="col-md-4">
                        <input type="text" id="agencia" maxlength="4" placeholder="AGENCIA" val="" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();" class="form-inline form-control"  />					
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 needed" id="label_auto_text1">Turno:</label>
                <div class="col-md-9">
                    <div class="col-md-3">
                        <input type="text" id="turno" maxlength="4" placeholder="TURNO" val="" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();" class="form-inline form-control"  />
                    </div>
                    <label class="control-label col-md-2 needed " style="text-align:center"  id="label_auto_text1">No. Acta</label>
                    <div class="col-md-4">
                        <input type="text" id="acta" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline form-control numerico"  />                        
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 needed" id="label_auto_text1">A&ntilde;o Acta:</label>
                <div class="col-md-9">
                    <div class="col-md-3">
                        <input type="text" id="anioActa" maxlength="4" placeholder="A&Ntilde;O" val="" class="form-inline form-control numerico"  />
                    </div>
                </div>
            </div>
            <div class="form-group" style="display:none"> 
                <label class="control-label col-md-3 needed">Grave:</label>
                <div class="col-md-2">
                    <label class="radio-inline"><input type="radio" class="form-control" id="radioGraveS" name="optradio">SI</label>
                    <label class="radio-inline"><input checked type="radio" id="radioGraveN" name="optradio">NO</label>
                </div> 
            </div>
            <div class="form-group"> 
                <label class="control-label col-md-3 needed">Colegiada:</label>
                <div class=" col-md-2">
                    <input id="colegiada" type="checkbox" class="checkbox form-control" value="">
                </div>
            </div>
            
                <h4 class="control-label col-md-3 ">Datos del Procesado:</h4>
                <br>
                <hr>
                <div class="form-group" id="divImputado"> 

                    <div class="form-group"> 
                        <label class="control-label col-md-3 needed">Tipo Persona:</label>
                        <div class="col-md-9">
                            <div class="col-md-3">
                                <select class=" col-md-8 form-control Relacionado" name="cmbTipoPersonaImp" id="cmbTipoPersonaImp">
                                </select>
                            </div> 
                            <div class="form-group" > 
                                <label style="text-align:center" class="control-label  col-md-2 needed" >Genero:</label>
                                <div class="col-md-4">
                                    <select class=" col-md-8 form-control Relacionado" name="cmbGeneroImp" id="cmbGeneroImp">
                                    </select>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3 needed">Procesado:</label>
                        <div class="col-md-9" id="divNombreFisicoImp">
                            <div class="col-md-3">
                                <input  type="text" id="paternoImp" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();"  placeholder="PATERNO" val="" class="form-inline form-control"/>
                            </div>
                            <div class="col-md-3">
                                <input  type="text" id="maternoImp" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();"  placeholder="MATERNO" val="" class="form-inline form-control"/>
                            </div>
                            <div class="col-md-3">
                                <input  type="text" id="nombreImp" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();"  placeholder="NOMBRE" val="" class="form-inline form-control"/>
                            </div>
                        </div>
                        <div class="col-md-8" id="divNombreMoralImp" style="display:none;">
                            <div class="col-md-9">
                                <input  type="text" id="nombreMoralImp" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();"  placeholder="NOMBRE" val="" class="form-inline form-control col-md-10"/>
                            </div>
                        </div>

                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3 needed">Detenido:</label>
                        <div class=" col-md-2">
                            <input id="detenido" type="checkbox" class="checkbox form-control" value="">
                        </div>
                        <div class="col-md-2" id="divFechaDet" style="display:none">
                            <input  type="text" class='form-control ' id="fechaDet" placeholder="dd/mm/aaaa"  val="" />
                        </div>

                    </div>
                    <div class="form-group"> 
                        <div class="col-md-3"></div>
                        <button class="col-md-2 btn btn-primary" id="btnsabeImp" type="submit" onclick="agregarImputado();">Agregar Procesado</button>
                        <button class="col-md-2 btn btn-primary" id="btnActApImp" type="submit" style="display:none" onclick="actualizarImputado();">Guardar Procesado</button>
                        <div class="col-md-1"></div>
                        <button class="col-md-2 btn btn-primary" id="btnLimpiarImputado" onclick="limpiarImputado();">Limpiar Procesado(s)</button>
                    </div>

                    <div class="form-group" id="listaImputado">
                        <label class="control-label col-md-3 needed">Lista de procesados(s)</label>
                        <div class="col-md-9">
                            <div class="col-md-9 table-responsive">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <td >Nombre</td>
                                            <td >Detenido</td>
                                            <td >Fecha detenci&oacute;n</td>
                                            <td ></td>
                                        </tr>
                                    </thead>
                                    <tbody id="imputadosTbody"><tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            
            <div id="collapseOfendido" class="" aria-expanded="true">
                <h4 class="control-label col-md-3 ">Datos del Ofendido:</h4>
                <br>
                <hr>
                <div class="form-group" id="divOfendido">
                    <div class="form-group"> 
                        <label class="control-label col-md-3 needed">Tipo Persona:</label>
                        <div class="col-md-9">
                            <div class="col-md-3">
                                <select class=" col-md-8 form-control Relacionado" name="cmbTipoPersonaOfe" id="cmbTipoPersonaOfe">
                                </select>
                            </div> 
                            <div class="form-group"> 
                                <label style="text-align:center" class="control-label col-md-2 needed">Genero:</label>
                                <div class="col-md-4">
                                    <select class="col-md-8 form-control Relacionado" name="cmbGeneroOfe" id="cmbGeneroOfe">
                                    </select>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3 needed">Ofendido:</label>
                        <div class="col-md-9" id="divNombreFisicoOfe">
                            <div class="col-md-3">
                                <input  type="text" id="paternoOfe" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();"  placeholder="PATERNO" val="" class="form-inline form-control"/>
                            </div>
                            <div class="col-md-3">
                                <input  type="text" id="maternoOfe" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();"  placeholder="MATERNO" val="" class="form-inline form-control"/>
                            </div>
                            <div class="col-md-3">
                                <input  type="text" id="nombreOfe" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();"  placeholder="NOMBRE" val="" class="form-inline form-control"/>
                            </div>
                        </div>
                        <div class="col-md-8" id="divNombreMoralOfe" style="display:none;">
                            <div class="col-md-9">
                                <input  type="text" id="nombreMoralOfe" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();"  placeholder="NOMBRE" val="" class="form-inline form-control col-md-10"/>
                            </div>
                        </div>
                    </div>

                    <div class="form-group"> 
                        <div class="col-md-3"></div>
                        <button class="col-md-2 btn btn-primary" id="btnsabeOfe" type="submit" onclick="agregarOfendido();">Agregar Ofendido</button>
                        <button class="col-md-2 btn btn-primary" id="btnActApOfe" type="submit" style="display:none" onclick="actualizarOfendido();">Guardar Ofendido</button>
                        <div class="col-md-1"></div>
                        <button class="col-md-2 btn btn-primary" id="btnLimpiarOfendido" onclick="limpiarOfendido();">Limpiar Ofendido(s)</button>
                    </div>

                    <div class="form-group" id="listaOfendidos">
                        <label class="control-label col-md-3 needed">Lista de Ofendidos(s)</label>
                        <div class="col-md-9">
                            <div class="col-md-9 table-responsive">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <td >Nombre</td>
                                            <td ></td>
                                        </tr>
                                    </thead>
                                    <tbody id="ofendidosTbody"><tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="collapseDelito" class="" aria-expanded="true" >
                <h4 class="control-label col-md-3 ">Delitos:</h4>
                <br>
                <hr>

                <div class="form-group" id="divDelito"> 

                    <div class="form-group"> 
                        <label class="control-label col-md-3 needed">Delito:</label>
                        <div class="col-md-9" id="divNombreFisicoDel">
                            <div class="col-md-9">
                                <select class ="form-control col-md-6 Relacionado" id='cmbDelitos'>
                                    <option value="">Seleccione un delito</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    <div class="form-group"> 
                        <div class="col-md-3"></div>
                        <button class="col-md-2 btn btn-primary" id="btnsabeDel" type="submit" onclick="agregarDelito();">Agregar Delito</button>
                        <button class="col-md-2 btn btn-primary" id="btnActApDel" type="submit" style="display:none" onclick="actualizarDelito();">Guardar Delito</button>
                        <div class="col-md-1"></div>
                        <button class="col-md-2 btn btn-primary" id="btnLimpiarDelito" onclick="limpiarDelito();">Limpiar Delito(s)</button>
                    </div>

                    <div class="form-group" id="listaDelito">
                        <label class="control-label col-md-3 needed">Lista de Delito(s)</label>
                        <div class="col-md-9">
                            <div class="col-md-9 table-responsive">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <td >Delito</td>
                                            <td ></td>
                                        </tr>
                                    </thead>
                                    <tbody id="delitosTbody"><tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br>
            <div class="form-group">
                <label class="control-label col-xs-3">Observaciones:</label> 
                <div class="col-md-9">
                    <div class="col-md-9">
                        <textarea class="form-control  center" rows="5" id="observaciones"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group" id="btnNormal">
                <div class="col-md-offset-3 col-md-9 divBotones" >
                    <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar un oficio." data-position='top'>                                        
                        <input type="submit" class="btn btn-primary btn-adaptar btn_auto_save" value="Guardar" onclick="guardarToca()" />
                    </div>
                    <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" id="divImprimir" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top' style="display:none">                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Imprimir" onclick="imprimirRecibo()" id="btn_auto_clean"/>
                    </div>
                    <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="cleanFields()" id="btn_auto_clean"/>
                    </div>
                    <div class="col-md-2 botonesAdaptar botonesArbol">
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Consultar" onclick="consultarDiv();" id="btn_auto_search"/>
                    </div>
                    <div class="col-md-2 botonesAdaptar">                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Eliminar" onclick="" id="btn_auto_delete" style="display:none;"  disabled/><!--  -->
                    </div>
                    <div class="col-md-2 botonesAdaptar">                        
                        <button class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" style="display: none">Visor</button>
                    </div>
                    <div class="col-md-2 botonesAdaptar">                        
                        <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="enviar();" style="display: none">Generar PDF</button>
                    </div>
                </div>
            </div>
            <div class="form-group" id="btnArbol" style="display:none">
                <div class="col-md-offset-3 col-md-9 divBotones" >
                    <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar un oficio." data-position='top'>                                        
                        <input type="submit" class="btn btn-primary btn-adaptar btn_auto_save" value="Guardar" onclick="guardarToca()" />
                    </div>
                    <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" id="divImprimir" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top' >                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Imprimir" onclick="imprimirRecibo()" id="btn_auto_clean"/>
                    </div>
                    <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="cleanFields()" id="btn_auto_clean"/>
                    </div>

                    <div class="col-md-2 botonesAdaptar">                        
                        <button class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" style="display: none">Visor</button>
                    </div>
                    <div class="col-md-2 botonesAdaptar">                        
                        <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="enviar();" style="display: none">Generar PDF</button>
                    </div>
                </div>
            </div>

        </div> 
    </div> 
</div> 
<div id="divConsulta" style="display:none">
    <div class="panel-heading">
        <h5 class="panel-title" id="consultaTitulo">
            Tocas de sistema tradicional / Busqueda
        </h5>
    </div>
    <div class="panel-body">
        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">
        <hr>
        <div class="form-horizontal">
            <div class="form-group">
                <label  class="control-label col-md-3">Tribunal de alzada:</label>
                <div class="col-md-9">
                    <select class="form-control " name="cmbTipoJuzgado" id="cmbTipoJuzgado" onchange="cargaTipoCarpeta2()"></select>
                </div>                                
            </div>
            <div class="form-group"> 
                <label class="control-label col-md-3">Tipo Carpeta</label>
                <div class="col-md-9"><select id="cmbTipoCarpeta" class="form-control"><option value="0">Seleccione una opci�n</option></select></div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3" id="label_actam_text2">No. causa</label>
                <div class="col-md-9">
                    <div class="col-md-3"><input type="text" id="numeroConsulta" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline form-control numerico"></div>
                    <div class="col-md-2">
                        <label style="text-align:center" class="control-label" data-position='right'>/</label>
                    </div>
                    <div class="col-md-3"><input type="text" id="anioConsulta" maxlength="4" placeholder="A&Ntilde;O" val="" class="form-inline form-control numerico"></div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Fecha inicio</label>
                <div class="col-md-2">
                    <input type="text" id="fechaRangoInicial" placeholder="dd/mm/aaaa" class="form-control fecha">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3">Fecha fin</label>
                <div class="col-md-2">
                    <input type="text" id="fechaRangoFinal" placeholder="dd/mm/aaaa" class="form-control fecha">
                </div>
            </div>

        </div>
        <div class="form-group"> 
            <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para consultar toca." data-position='top'>                                        
                <input type="submit" class="btn btn-primary btn-adaptar" value="Buscar" onclick="consultarTocaTradicional()" id=""/>
            </div>
            <div id="conectando2" class="col-md-4" style="display: none;">
                <span class="label label-bg label-success"> <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i> Cargando... </span>
            </div>
            <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>                                        
                <input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="limpiarCampos()" id="btn_auto_clean"/>
            </div>
        </div>

    </div>

</div>

<div id="divTablaConsulta" style="display:none">

    <div class="panel-heading">
        <h5 class="panel-title" id="consultaTitulo">
            Tocas de sistema tradicional / Consulta
        </h5>
    </div>
    <div class="panel-body">
        <input type="submit" class="btn btn-primary" style="float:left" value="Regresar" onclick="regresarBuscar();">
        <div class="form-group col-xs-2" style="padding: 10px">
            <label class="control-label" id="totalReg"></label>
        </div>
        <div id="Paginacion" class="form-group col-xs-2" >
            <label class="control-label">Cambiar a la p&aacute;gina:</label>
            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarTocaTradicional()">
                <option value="1">1</option>
            </select>
        </div>
        <div id="divPaginador" class="form-group col-xs-4" >
            <label class="control-label">Registros por p&aacute;gina:</label>
            <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarTocaTradicional();
                    resetPagina()">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="40">40</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>

        <hr>

        <div id="tablaConsulta"></div>
    </div>
</div>


<div class="form-group">
    <div id="divAdvertencia" class="alert alert-warning alert-dismissable textCorrection" style="display: none">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong id="strAdvertencia"></strong> 
    </div>
    <div id="divCorrecto" class="alert alert-success alert-dismissable textCorrection" style="display: none">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong id="strCorrecto"></strong> 
    </div>
    <div id="divError" class="alert alert-danger alert-dismissable textCorrection" style="display: none">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong id="strError"></strong>
    </div>
    <div id="divInformacion" class="alert alert-info alert-dismissable textCorrection" style="display: none">
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

<div id="imprimir" style="display: none;">
    <div id="printable" ></div>
    <div id="botones">
        <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultar('divCampos');" style="display: block"> 
    </div>
</div>
<!-- Modal Carpetas oficios -->
<div class="modal fade" id="ModalOficios" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header panel-heading" style="padding:25px 45px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="panel-title" id="h5titulo"><span ></span> Oficios</h4>
            </div>
            <div class="modal-body" style="padding:35px 60px;">
                <div class="form-horizontal">
                    <div id="ContTablaOficios">   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">&nbsp;</label>
                        <div class="col-md-5">
                            <input type="submit" class="btn btn-primary" value="Cancelar" data-dismiss="modal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
<!--Modal Resoluciones-->
<div class="modal fade" id="ModalResoluciones"  role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header panel-heading" style="padding:25px 45px;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="panel-title" id="h5titulo"><span ></span> Resoluciones</h4>
            </div>
            <div class="modal-body" style="padding:35px 60px;">
                <div class="form-horizontal">
                    <div id="ContTablaResoluciones">   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">&nbsp;</label>
                        <div class="col-md-5">
                            <input type="submit" class="btn btn-primary" value="Cancelar" data-dismiss="modal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Modal Defensor-->
<div class="modal fade" id="ModalDefensor"  role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content" >
            <div class="modal-header panel-heading" style="padding:25px 45px;">
                <button type="button" class="close" onclick="cargarDefensor();" data-dismiss="modal">&times;</button>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="panel-title" id="h5titulo"><span ></span> Resoluciones</h4>
            </div>
            <div class="modal-body" style="padding:35px 60px;">
                <div class="form-horizontal">

                    <div class="form-group" id="divDefensor"> 
                        <div class="form-group"> 
                            <label class="control-label col-md-3 needed">Tipo Defensor:</label>
                            <div >
                                <select class=" Relacionado" name="cmbTipoDefensor" id="cmbTipoDefensor" onchange="asignarDefensor();">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-1 needed">Nombre:</label>
                            <input type="text" id="nombreDefensor"  placeholder="NOMBRE DEFENSOR" class="form-control" value=""/>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-1">Correo electr&oacute;nico:</label>
                            <input  type="email" id="correoDefensor" placeholder="CORREO" class="form-control" value="" />
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-1">Telefono:</label>
                            <input type="text" id="telefono" placeholder="TELEFONO" class="form-control" value=""  />
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-1">Celular:</label>
                            <input type="text" id="celular" placeholder="CELULAR" class="form-control" value=""  />
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">&nbsp;</label>
                        <div class="col-md-5">
                            <input type="submit" class="btn btn-primary" value="Cancelar" data-dismiss="modal">
                            &nbsp;<input type="submit" class="btn btn-primary" value="Aceptar" onclick="cargarDefensor()" data-dismiss="modal">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var waitingDialog = waitingDialog || (function ($) {
        'use strict';

        // Creating modal dialog's DOM
        var $dialog = $(
                '<div class="modal fade" data-backdrop="static" data-keyboard="false"  role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
                '<div class="modal-dialog modal-m">' +
                '<div class="modal-content">' +
                '<div class="modal-header"><h3 style="margin:0;"></h3></div>' +
                '<div class="modal-body">' +
                '<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>' +
                '</div>' +
                '</div></div></div>');

        return {
            /**
             * Opens our dialog
             * @param message Custom message
             * @param options Custom options:
             * 				  options.dialogSize - bootstrap postfix for dialog size, e.g. "sm", "m";
             * 				  options.progressType - bootstrap postfix for progress bar type, e.g. "success", "warning".
             */
            show: function (message, options) {
                // Assigning defaults
                if (typeof options === 'undefined') {
                    options = {};
                }
                if (typeof message === 'undefined') {
                    message = 'Cargando ...';
                }
                var settings = $.extend({
                    dialogSize: 'm',
                    progressType: '',
                    onHide: null // This callback runs after the dialog was hidden
                }, options);

                // Configuring dialog
                $dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize);
                $dialog.find('.progress-bar').attr('class', 'progress-bar');
                if (settings.progressType) {
                    $dialog.find('.progress-bar').addClass('progress-bar-' + settings.progressType);
                }
                $dialog.find('h3').text(message);
                // Adding callbacks
                if (typeof settings.onHide === 'function') {
                    $dialog.off('hidden.bs.modal').on('hidden.bs.modal', function (e) {
                        settings.onHide.call($dialog);
                    });
                }
                // Opening dialog
                $dialog.modal();
            },
            /**
             * Closes dialog
             */
            hide: function () {
                $dialog.modal('hide');
            }
        };

    })(jQuery);
    /**
     * FunciOn para obtener y asignar los permisos del usuario activo sobre el formulario
     */
    function setPermissions() {
        var cveUsuarioSistema = $('#cveUsuarioSistema').val();
        var cvePerfilSesion = $('#SysCvePerfil').val();
        insert_numEmpleado = cveUsuarioSistema;
        $.get("../archivos/" + cveUsuarioSistema + ".json",
                function (response) {
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
                                if (vnombre.nomFormulario == "JUZGADO TRADICIONAL") {
                                    var hijos = vnombre.hijos;
                                    $.each(hijos, function (k2, nombreHijo) {
                                        if (nombreHijo.nomFormulario == 'REGISTRO TOCA') {
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
                    crud.create = createRecord;
                    crud.read = readRecord;
                    crud.update = updateRecord;
                    crud.delete = deleteRecord;
                    //para desaparecer botones si no hay permisos
                    if (crud.read == 'N') {
                        $('#boton').prop('disabled', true);
                    }

                });
    }

    function asignarDefensor() {
        if ($("#cmbTipoDefensor").val() == 6) {
            $("#nombreDefensor").val("REQUIERE DEFENSOR PUBLICO");
        }
    }

    function GraveSeleccionado() {
        var grave = "N";
        if ($("#radioGraveS").is(":checked")) {
            grave = "S";
        } else if ($("#radioGraveN").is(":checked")) {
            grave = "N";
        }

        return grave;
    }

    function cargarDefensor() {
        var editar = null;
        $("#cmbTipoDefensor").val("");
        $("#nombreDefensor").val("");
        $("#correoDefensor").val("");
        $("#telefono").val("");
        $("#celular").val("");
        for (var i = 0; i < listaDefensores.length; i++) {
            if (listaDefensores[i]['idImputado'] == $("#hiddenDefensoridImputado").val()) {
                editar = i;
            }
        }
        if (editar == null) {
            var defensorArray = new Object();
            defensorArray.idImputado = $("#hiddenDefensoridImputado").val();
            defensorArray.cveTipoDefensor = $("#cmbTipoDefensor").val();
            defensorArray.nombre = $("#nombreDefensor").val();
            defensorArray.correoDefensor = $("#correoDefensor").val();
            defensorArray.telefono = $("#telefono").val();
            defensorArray.celular = $("#celular").val();
            listaDefensores.push(defensorArray);

        } else {
            listaDefensores[editar]['cveTipoDefensor'] = $("#cmbTipoDefensor").val();
            listaDefensores[editar]['nombre'] = $("#nombreDefensor").val();
            listaDefensores[editar]['correoDefensor'] = $("#correoDefensor").val();
            listaDefensores[editar]['telefono'] = $("#telefono").val();
            listaDefensores[editar]['celular'] = $("#celular").val();
        }

    }
    function limpiarConsultar() {
        $("#cmbTipoJuzgado").val("0/0");
        $("#cmbTipoCarpeta").val("");
        $("#numeroConsulta").val("");
        $("#anioConsulta").val("");
        $("#numeroRemisionConsulta").val("");
        $("#anioRemisionConsulta").val("");
        $("#fechaRangoInicial").val("");
        $("#fechaRangoFinal").val("");
        $("#tablaConsulta").empty();
    }
    function consultarDiv() {
        cargaJuzgadosConsulta();
        cargaTipoCarpeta2();
        $("#divFormulario").hide();
        $("#divConsulta").show("slide");
    }
    function regresarFormulario() {
        $("#divFormulario").show();
        $("#divConsulta").hide();
        $("#divConsulta").hide();
        limpiarConsultar();
    }
    function regresarBuscar() {
        $("#divFormulario").hide();
        $("#divConsulta").show("slide");
        $("#divTablaConsulta").hide();

    }
    function cargarModalDefensor(idImputado) {
        var editar = null;
        for (var i = 0; i < listaDefensores.length; i++) {
            if (listaDefensores[i]['idImputado'] == $("#hiddenDefensoridImputado").val()) {
                editar = i;
            }
        }
        if (editar != null) {
            $("#cmbTipoDefensor").val(listaDefensores[editar]['cveTipoDefensor']);
            $("#nombreDefensor").val(listaDefensores[editar]['nombre']);
            $("#correoDefensor").val(listaDefensores[editar]['correoDefensor']);
            $("#telefono").val(listaDefensores[editar]['telefono']);
            $("#celular").val(listaDefensores[editar]['celular']);
        }
        $("#hiddenDefensoridImputado").val(idImputado);
        $("#ModalDefensor").modal('show');
    }

    /**
     * Cargar Tipos defensores
     */
    cargarTiposDefensores = function () {
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposdefensores/TiposdefensoresFacade.Class.php",
            data: strDatos,
            async: false,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    var estatus = "";
                    for (var i = 0; i < json.totalCount; i++) {
                        $("#cmbTipoDefensor").append($('<option id="cmbTipoDefensor' + json.data[i].cveTipoDefensor + '"></option>').val(json.data[i].cveTipoDefensor).html(json.data[i].desTipoDefensor));
                    }
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    }

    /**
     * Cargar Recursos de apelacion
     */
    cargarRecursos = function () {
        var strDatos = "accion=consultarOrdenado";
        strDatos += "&activo=S";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposrecursos/TiposrecursosFacade.Class.php",
            data: strDatos,
            async: false,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    var estatus = "";
                    for (var i = 0; i < json.totalCount; i++) {
                        $("#cmbRecurso").append($('<option id="cmbRecurso' + json.data[i].cveRecurso + '"></option>').val(json.data[i].cveRecurso).html(json.data[i].desRecurso));
                    }
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    }


    /**
     * Cargar Tipos Personas
     */
    cargarTiposPersonas = function () {
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tipospersonas/TipospersonasFacade.Class.php",
            data: strDatos,
            async: false,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    for (var i = 0; i < json.totalCount; i++) {
                        if (json.data[i].cveTipoPersona <= 3) {
                            $("#cmbTipoPersonaImp").append($('<option id="cmbTipoPersona' + json.data[i].cveTipoPersona + '"></option>').val(json.data[i].cveTipoPersona).html(json.data[i].desTipoPersona));
                            $("#cmbTipoPersonaOfe").append($('<option id="cmbTipoPersona' + json.data[i].cveTipoPersona + '"></option>').val(json.data[i].cveTipoPersona).html(json.data[i].desTipoPersona));
                        }
                    }
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    }     /**
     * Cargar Generos
     */
    cargarGenero = function () {
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/generos/GenerosFacade.Class.php",
            data: strDatos,
            async: false,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    for (var i = 0; i < json.totalCount; i++) {
                        $("#cmbGeneroOfe").append($('<option id="cmbGenero' + json.data[i].cveGenero + '"></option>').val(json.data[i].cveGenero).html(json.data[i].desGenero));
                        $("#cmbGeneroImp").append($('<option id="cmbGenero' + json.data[i].cveGenero + '"></option>').val(json.data[i].cveGenero).html(json.data[i].desGenero));
                    }
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    }

    /**
     * Cargar Efectos
     */
    cargarDelitos = function () {
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/delitos/DelitosFacade.Class.php",
            data: strDatos,
            async: false,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    for (var i = 0; i < json.totalCount; i++) {
                        $("#cmbDelitos").append($('<option id="cmbDelitos' + json.data[i].cveDelito + '"></option>').val(json.data[i].cveDelito).html(json.data[i].desDelito));
                    }
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    }
    /**
     * Cargar Resoluciones
     */
    cargarTiposResoluciones = function () {
        var strDatos = "accion=consultarOrdenado";
        strDatos += "&activo=S";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/catresolucionescombatidas/CatresolucionescombatidasFacade.Class.php",
            data: strDatos,
            async: false,
            dataType: "html",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    var estatus = "";
                    for (var i = 0; i < json.totalCount; i++) {
                        $("#cmbTipoResolucion").append($('<option  cvetipoactuacion="' + json.data[i].cveTipoActuacion + '" id="cmbTipoResolucion' + json.data[i].cveCatResolucionCombatida + '"></option>').val(json.data[i].cveCatResolucionCombatida).html(json.data[i].desResolucionCombatida));
                    }
                }
            },
            error: function (objeto, quepaso, otroobj) {
                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        });
    }

    function activarSintesis() {
//        $("#hiddenidResolucionCombatida").val("");
//        $("#hiddenidResolucionCarpetaCombatida").val("");
//        var cveTipoActuacion = $("#cmbTipoResolucion option:selected").attr('cvetipoactuacion');
//        if (cveTipoActuacion != "null") {
//            $("#fechaRegistroRes").val("");
//            $("#sintesis").val("");
//            $("#btnBuscarResolucion").show();
//            $("#sintesis").prop("disabled", true);
//        } else {
//            $("#sintesis").val("");
//            $("#fechaRegistroRes").val("");
//            $("#btnBuscarResolucion").hide();
//            $("#sintesis").prop("disabled", false);
//        }
    }

    /**
     * Limpia el contenido del formulario
     */
    function cleanFields() {
        listaOfendido = [];
        listaImputado = [];
        listaDelito = [];
        $(".btn_auto_save").show();
        $("#divImprimir").hide();
        $("#numeroToca").val("");
        $("#anioToca").val("");
        $("#Sala").val("");
        $("#cveTipoJuzgado").val("0/0");
        $("#select_auto_carpeta").val("");
        $("#numeroCausa").val("");
        $("#numeroOficio").val("");
        $("#anioOficio").val("");
        $("#tablaImpofedel").empty(); //tabla?? $("#tablaImpofedel").val("");
        $("#cmbRecurso").val("");
        $("#fechaCoTras").val("");
        $("#cmbTipoResolucion").val("");
        $("#fechaInterRec").val("");
        $("#sintesis").val("");
        $("#fechaNotiSeAu").val("");
        $("#fechaRegistroRes").val("");
        $("#fechaIntAd").val("");
        $("#cmbTipoEfecto").val("");
        $("#sintesisOficio").val("");
        $('#radioEmplazaminetoN').prop("checked", true); // radio name=optradio  agravios 
        //Imputado
        $("#cmbTipoPersonaImp").val("1");
        $("#divNombreMoralImp").hide();
        $("#divNombreFisicoImp").show();
        $("#cmbGeneroImp").val("1");
        $("#paternoImp").val("");
        $("#maternoImp").val("");
        $("#nombreImp").val("");
        $("#nombreMoralImp").val("");
        $("#imputadosTbody").empty();
        $("#delitosTbody").empty();

        //Ofendido
        $("#cmbTipoPersonaOfe").val("1");
        $("#divNombreMoralOfe").hide();
        $("#divNombreFisicoOfe").show();
        $("#cmbGeneroOfe").val("1");
        $("#paternoOfe").val("");
        $("#maternoOfe").val("");
        $("#nombreOfe").val("");
        $("#nombreMoralOfe").val("");
        $("#ofendidosTbody").empty();

        $('#radioGraveN').prop("checked", true); // radio name radioEmplazamineto
        $('#colegiada').prop("checked", false); // radio name radioEmplazamineto
        $("#observaciones").val("");
        $("#idImputadoCarpeta").val("");
        $("#select_auto_sentidotoca").val("");
        $("#input_auto_numerotoca").val("");
        $("#input_auto_aniotoca").val("");
        $("#select_auto_salastoca").val("");
        $("#cmbTipoCarpeta").val("");
        $("#numeroConsulta").val("");
        $("#anioConsulta").val("");
        $("#fechaRangoInicial").val("");
        $("#fechaRangoFinal").val("");
        $("#hiddenidReferencia").val("");
        $("#idActuacionArbol").val("");
        $("#hiddenidOficio").val("");
        $("#hiddenidResolucionCombatida").val("");
        $("#hiddenidResolucionCarpetaCombatida").val("");
        $("#hiddenIofe").val("");
        $("#hiddenIimp").val("");
        $("#cveTipoCarpetaArbol").val("");
        $("#hiddenDefensoridImputado").val("");
        $("#hiddenIdRemision").val("");
        $("#idActuacion").val("");
        $("#numeroCausa").val("");
        $("#anioCausa").val("");
        $("#tablaConsulta").empty();
        $("#lugar").val("");
        $("#agencia").val("");
        $("#turno").val("");
        $("#acta").val("");
        $("#anioActa").val("");
        $("#divFormulario :input").each(function () {
            if (($(this).attr("id") != "numeroOficio") && ($(this).attr("id") != "anioOficio") && ($(this).attr("id") != "sintesis") && ($(this).attr("id") != "fechaIntAd") && ($(this).attr("id") != "fechaRegistroRes") && ($(this).attr("id") != "Sala") && ($(this).attr("id") != "sintesisOficio") && ($(this).attr("id") != "numeroToca") && ($(this).attr("id") != "anioToca")) {
                $(this).prop("disabled", false);
            }
        });

        $("#divBotones :input").each(function () {

            $(this).prop("disabled", false);
        });
        fechaBaseDatos(
                {
                    fechaRangoInicial: "fecha",
                    fechaRangoFinal: "fecha"
                }
        );
    }
    /**
     * Limpia el contenido del formulario
     */
    function limpiarCampos() {
        cargaJuzgados();
        $("#numeroConsulta").val("");
        $("#anioConsulta").val("");
        fechaBaseDatos(
                {
                    fechaRangoInicial: "fecha",
                    fechaRangoFinal: "fecha"
                }
        );
    }
    /**
     * Limpia el contenido del formulario
     */
    function limpiarCamposOficios() {
        $("#tablaImpofedel").html("");
        $("#cveTipoJuzgado").val("0/0");
    }
    /**
     * Limpia el contenido del formulario
     */
    function limpiarCamposImputado() {
        $("#cmbGeneroImp").prop("disabled", false);
        $("#cmbTipoPersonaImp").val(1);
        $("#paternoImp").val("");
        $("#maternoImp").val("");
        $("#nombreImp").val("");
        $("#nombreMoralImp").val("");
        $("#divNombreMoralImp").hide();
        $("#divNombreFisicoImp").show();
        $("#cmbGeneroImp").val("1");
        $("#fechaDet").val("");
        $("#detenido").removeAttr('checked');
        $("#divFechaDet").hide();

    }


    /**
     * Calcula consignacion para toca
     */

    function calcularConsignacion() {
        var validaS = false;
        var validaN = false;
        var validaG = false;
        var consignacion = 1;
        console.log(listaImputado);
        for (var i = 0; i < listaImputado.length; i++) {
            if (listaImputado[i].detenido == true) {
                validaN = true;
            }
            if (listaImputado[i].detenido == false) {
                validaS = true;
            }

        }

        if (validaS && validaN) {
            validaG = true;
        }
        if (validaG) {
            consignacion = 3;
        } else if (validaS) {
            consignacion = 2;
        } else if (validaN) {
            consignacion = 1;
        }
        return consignacion;
    }

    /**
     * Limpia el contenido del formulario
     */
    function limpiarCamposDelito() {
        $("#cmbDelitos").val("");
    }
    /**
     * Limpia el contenido del formulario
     */
    function limpiarCamposOfendido() {
        $("#cmbGeneroOfe").prop("disabled", false);
        $("#cmbTipoPersonaOfe").val(1);
        $("#paternoOfe").val("");
        $("#maternoOfe").val("");
        $("#nombreOfe").val("");
        $("#nombreMoralOfe").val("");
        $("#divNombreMoralOfe").hide();
        $("#divNombreFisicoOfe").show();
        $("#cmbGeneroOfe").val("1");
    }

    /**
     * Obtiene la fecha de la computadora
     * @param {string} element Define el elemento que se desea obtener. all: yyyy-mm-dd hh:mm:ss; year: yyyy
     * @return {string} finaldate Regresa la fecha o un elemento de la misma
     */
    function getDate(element) {
        var element = element || 'all';
        var finaldate = '';
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth() + 1; //January is 0!
        var yyyy = today.getFullYear();
        var hour = today.getHours();
        var minu = today.getMinutes();
        var secs = today.getSeconds();
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        if (minu < 10) {
            minu = '0' + minu
        }

        if (element == 'all') {
            finaldate = yyyy + '/' + mm + '/' + dd + ' ' + hour + ':' + minu + ':' + secs;
        }
        if (element == 'year') {
            finaldate = yyyy;
        }
        if (element == 'today') {
            finaldate = dd + '/' + mm + '/' + yyyy;
        }
        return finaldate
    }

    /**
     * Desactiva/activa los campos clave del formulario
     * @param {boolean} stateReference El valor se asigan directamente al atributo de los campos de referencia
     * @param {boolean} stateCertification El valor se asigan directamente al atributo de los campos de certificaciOn
     */
    function disabledFields(stateKeyFields, stateModuleFields) {
        //Key fields
        idKeyFields = ['select_auto_carpeta', 'input_auto_numero', 'input_auto_anio'];
        $.each(idKeyFields, function (k, v) {
            $('#' + v).attr("disabled", stateKeyFields);
        });
        //Module fields
        idModuleFields = ['input_auto_resolucion', 'select_auto_notificacion', 'select_auto_auto'];
        $.each(idModuleFields, function (k, v) {
            $('#' + v).attr("disabled", stateModuleFields);
        });
    }

    /**
     * Muestra mensajes personalizados en el div destinado para ello      * @param {string} message Es el mensaje que se mostrarA
     * @param {string} type Es el tipo de mensaje. 1:success, 2:warning, 3:information, 4:error
     */
    function showMessage(message, type) {
        var message = message || '';
        var div_message = '';
        var state = 0;
        switch (type) {
            case 'success':
                div_message = 'divCorrecto';
                break;
            case 'warning':
                div_message = 'divAdvertencia';
                state = 1;
                break;
            case 'information':
                div_message = 'divInformacion';
                break;
            case 'error':
                div_message = 'divError';
                break;
        }
        $('#' + div_message).html(message);
        $('#' + div_message).show("slide");
        if (!state) {
            setTimeAlert(div_message);
        } else {
            setTimeout(function () {
                $("#" + div_message).hide("slide");
            }, 6000);
        }
    }
    /**
     * FunciOn para el cambio de foco al presionar INTRO
     * @param {json} event Objeto del evento KEYPRESS
     * @param {string} nextInput Es el ID del input al que se moverA el foco
     */
    function changeFocus(event, nextInput) {
        var key = window.event ? event.keyCode : event.which;
        if (event.keyCode == 13) { // es Intro
            $('#' + nextInput).focus();
        }
        ;
        return;
    }

    /**
     * FunciOn para la obtenciOn de informacion de tablas y llenado de combos
     * @param {array} selectIds Ids de los combos donde se mostraran los datos
     * @param {string} facade Es la ruta de la fachada que se invoca, solo se define la carpeta y el nombre del archivo sin la extensiOn Class en adelante. Ej. tiposcarpetas/TiposcarpetasFacade
     * @param {string} value Es el identificador del campo llave
     * @param {string} descripction Es el identificador del campo de descripciOn
     */     function fillCombo(selectIds, facade, value, description) {
        $.each(selectIds, function (k, v) {
            $('#' + v).empty();
        });
        $.post('../fachadas/sigejupe/' + facade + '.Class.php',
                {
                    activo: 'S',
                    accion: 'consultar'
                },
        function (response) {
            var json = eval("(" + response + ")");
            var options = '<option value="0">--SELECCIONE--</option>';
            if (json.totalCount > 0) {
                $.each(json.data, function (k, v) {
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



    /**      * Valida que antes de guardar o actualizar, todos los campos contegan informaciOn
     * @param {array} array Es el arraglo de campos a validar
     * @return {boolean} state Regresa 'true' si todos los campos contienen informaciOn
     */
    function validateFields() {
        var regresa = [];
        var mensaje = "";
        var regre = true;
        if ($("#cveTipoJuzgado").val() == "") {
            regre = false;
            mensaje += "\n -No selecciono Juzgado \n";
        }

        if ($("#imputadosTbody").html() == "") {
            regre = false;
            mensaje += "-Debe agregar al menos un procesado \n";
        }
        if ($("#ofendidosTbody").html() == "") {
            regre = false;
            mensaje += "-Debe agregar al menos un ofendido \n";
        }
        if ($("#delitosTbody").html() == "") {
            regre = false;
            mensaje += "-Debe agregar al menos un delito \n";
        }
        if ($("#lugar").val() == "") {
            regre = false;
            mensaje += "-Debe agregar lugar \n";
        }
        if ($("#agencia").val() == "") {
            regre = false;
            mensaje += "-Debe agregar agencia \n";
        }
        if ($("#turno").val() == "") {
            regre = false;
            mensaje += "-Debe agregar turno \n";
        }
        if ($("#acta").val() == "") {
            regre = false;
            mensaje += "-Debe agregar No. Acta \n";
        }
        if ($("#anioActa").val() == "") {
            regre = false;
            mensaje += "-Debe agregar A&ntilde;o Acta \n";
        }
        regresa[0] = regre;
        regresa[1] = mensaje;

        return regresa;
    }
    /**
     * Obtiene las salas de los Juzgados a travEs del webservice de GestiOn, filtrando por Instancia con claves 14 y 17 en el controlador
     */
    function getSalas() {
        $.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                {
                    accion: 'getSalas'
                }, function (response) {
            var json = eval('(' + response + ')');
            var options = '<option value="0">-- SELECCIONE --</option>'
            if (json.totalCount > 0) {
                var data = json.data;
                $.each(data, function (k, v) {
                    options += '<option value="' + v.idJuzgado + '">' + v.desJuz + '</option>';
                });
                $('#select_auto_salastoca').empty().html(options);
            }
        });
        return;
    }

    /**
     * Obtiene la lista de Imputados de la tabla Imputados Carpetas
     * @param {integer} idCarpetaJudicial Es el Id de la tabla Carpetas Judiciales, se usa para filtrar y obtener los imputados de tal carpeta
     */
    function getImputadosCarpetas(idCarpetaJudicial) {
        var respuesta = '';
        $.ajax({
            async: false,
            type: 'POST',
            url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
            data: {
                accion: 'consultar',
                activo: 'S',
                idCarpetaJudicial: idCarpetaJudicial
            }
        }).done(function (response) {
            respuesta = response;
        });
        return respuesta;
    }
    function seleccionarImpofedel(json) {
        for (var i = 0; i < json[0].resultados.length; i++) {
            //$("#botonCargarDefensor" + json[0].resultados[i].idImpOfeDelCarpeta).show();
            $("#checkIm" + json[0].resultados[i].idImpOfeDelCarpeta).prop("checked", true);
            $("#checkIm" + json[0].resultados[i].idImpOfeDelCarpeta).attr("idRemisionApelacionImp", json[0].resultados[i].idRemisionApelacionImp);
        }
    }
    /**
     * Muestra la tabla de imputados dentro del formulario
     * @param {json} json Recibe el resultado de ImputadosCarpetas
     */     function impOfeDelTable(idReferencia) {
        var strDatos = "accion=consultarRelacion";
        strDatos += "&idCarpetaJudicial=" + idReferencia;
        $.ajax({
            async: false,
            type: 'POST', global: false,
            url: "../fachadas/sigejupe/impofedelcarpetas/ImpofedelcarpetasFacade.Class.php",
            data: strDatos,
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';
            var tabla = '';
            if (totalRecords > 0) {
                var referencia = json.data;                 //alert(json.data[0].idImpOfeDelCarpeta);
                for (var i = 0; i < totalRecords; i++) {

                    var jsonDatos = JSON.stringify(referencia);
                    tabla += "<tr >";
                    tabla += "<td>" + (i + 1) + "</td>";
                    tabla += "<td>" + referencia[i].nombreImputado + "</td>";
                    tabla += "<td>" + referencia[i].nombreDelito + "</td>";
                    tabla += "<td>" + referencia[i].nombreOfendido + "</td>";
                    tabla += "<td>" + imputadoSancion(referencia[i].idImpOfeDelCarpeta);
                    +"</td>";
                    tabla += "<td>" + imputadoDetenido(referencia[i].idImputadoCarpeta, referencia[i].idImpOfeDelCarpeta);
                    +"</td>";

                    tabla += "<td><label><input type='checkbox' class='impofedelCheck' onclick='aparecerDefensor(" + referencia[i].idImpOfeDelCarpeta + "," + referencia[i].idImputadoCarpeta + ");' id='checkIm" + referencia[i].idImpOfeDelCarpeta + "' value='" + referencia[i].idImpOfeDelCarpeta + "' idImputado='" + referencia[i].idImputadoCarpeta + "' idRemisionApelacionImp=''></label></td>";
                    //tabla += "<td><label class='needed'>agregar<input type='button' id='botonCargarDefensor" + referencia[i].idImpOfeDelCarpeta + "' style='display:none' onclick='cargarModalDefensor(" + referencia[i].idImputadoCarpeta + ")'></label></td>";
                    tabla += "</tr>";
                }
                $("#tablaImpofedel").html(tabla);
                $('.fechaDet').datetimepicker({
                    sideBySide: false,
                    locale: 'es',
                    format: "DD/MM/YYYY HH:mm",
                });
            } else {

                disabledFields(false, true);
                if ('text' in json) {
                    message = json.text;
                } else {
                    message = 'ERROR.';
                }
                showMessage(message, 'information');
                $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
            }
        });
        return;
    }

    function aparecerDefensor(numero, idImputado) {
        var editar = null;
//        if ($("#checkIm" + numero).is(":checked")) {
//            $("#botonCargarDefensor" + numero).show();
//        } else {
//            $("#botonCargarDefensor" + numero).hide();
//            $("#cmbTipoDefensor").val("");
//            $("#nombreDefensor").val("");
//            $("#correoDefensor").val("");
//            $("#telefono").val("");
//            $("#celular").val("");
//            for (var i = 0; i < listaDefensores.length; i++) {
//                //alert(listaDefensores[i]['idImputado']);
//                //alert(idImputado);
//                if (listaDefensores[i]['idImputado'] == idImputado) {
//                    editar = i;
//                }
//            }
//            listaDefensores.splice(editar, 1);
//        }

    }
    /**
     * Funcion para obtener las sanciones del imputado
     * @param {string} option Recibe 'checked' o 'full', para mostrar los imputados seleccionados o todos ellos, respectivamente
     * @return {array} ids Regresa el array de los IDs de los imputados
     */
    function imputadoSancion(idImofedel) {
        var strDatos = "accion=consultarsentenciasconsanciones";
        strDatos += "&idImpOfeDelCarpeta=" + idImofedel;
        var sanciones = "";
        $.ajax({
            async: false,
            type: 'POST',
            global: false,
            url: "../fachadas/sigejupe/imputadossentencias/ImputadossentenciasFacade.Class.php",
            data: strDatos,
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';


            if (totalRecords > 0) {
                var referencia = json.data;
                //alert(referencia[0].sanciones[0].tipo);
                for (var i = 0; i < (referencia[0].sanciones).length; i++) {
                    sanciones += obtenerTipoSancion(referencia[0].sanciones[i].tipo) + ": ";
                    sanciones += "\n";
                    if (referencia[0].sanciones[i].anio != "0") {
                        sanciones += "\n";
                        sanciones += referencia[0].sanciones[i].anio + " A&Ntilde;OS";
                    }
                    if (referencia[0].sanciones[i].mes != "0") {
                        sanciones += "\n";
                        sanciones += referencia[0].sanciones[i].mes + " MESES";
                    }
                    if (referencia[0].sanciones[i].dia != "0") {
                        sanciones += "\n";
                        sanciones += referencia[0].sanciones[i].dia + " D&Iacute;AS";
                    }
                    if (referencia[0].sanciones[i].multa != "0.000") {
                        sanciones += "\n";
                        sanciones += referencia[0].sanciones[i].multa;
                    }
                    if (referencia[0].sanciones[i].repara != "0.000") {
                        sanciones += "\n";
                        sanciones += referencia[0].sanciones[i].repara;
                    }
                    if (referencia[0].sanciones[i].especificacion != "") {
                        sanciones += "\n";
                        sanciones += referencia[0].sanciones[i].especificacion;
                    }
                    sanciones += "\n";

                }
            } else {

            }
        });
        return sanciones;
    }
    /**
     * Funcion para obtener los tipos de sancion
     * @param {string} option Recibe 'checked' o 'full', para mostrar los imputados seleccionados o todos ellos, respectivamente
     * @return {array} ids Regresa el array de los IDs de los imputados
     */
    function obtenerTipoSancion(tipoSancion) {
        var strDatos = "accion=consultar";
        strDatos += "&cveTipoSancion=" + tipoSancion;
        var desSancion = "";
        $.ajax({
            async: false, type: 'POST',
            url: "../fachadas/sigejupe/tipossanciones/TipossancionesFacade.Class.php",
            data: strDatos,
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';


            if (totalRecords > 0) {
                var referencia = json.data;
                desSancion = referencia[0].desTipoSancion;
            } else {
                disabledFields(false, true);
                if ('text' in json) {
                    message = json.text;
                } else {
                    message = 'ERROR.';
                }
                //showMessage(message, 'information');
                $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
            }
        });
        return desSancion;
    }
    function obtenerTipoCarpeta(cveTipoCarpeta) {
        var strDatos = "accion=consultar";
        strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
        var desTipoCarpeta = "";
        $.ajax({
            async: false,
            type: 'POST',
            global: false,
            url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
            data: strDatos,
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';
            if (totalRecords > 0) {
                var referencia = json.data;
                desTipoCarpeta = referencia[0].desTipoCarpeta;
            } else {
//                cleanFields(4);
                disabledFields(false, true);
                if ('text' in json) {
                    message = json.text;
                } else {
                    message = 'ERROR.';
                }
                //showMessage(message, 'information');
                $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
            }
        });
        return desTipoCarpeta;
    }
    /**
     * Funcion para obtener las sanciones de imputados
     * @param {string} option Recibe 'checked' o 'full', para mostrar los imputados seleccionados o todos ellos, respectivamente
     * @return {array} ids Regresa el array de los IDs de los imputados
     */
    function imputadoDetenido(idImputado, idImpo) {
        var strDatos = "accion=consultar";
        strDatos += "&idImputadoCarpeta=" + idImputado;
        var tabla = "";
        var detenido = "";
        $.ajax({
            async: false,
            type: 'POST', global: false,
            url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
            data: strDatos,
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';


            if (totalRecords > 0) {
                var referencia = json.data;
                if (referencia[0].detenido == "S") {
                    if (referencia[0].fechaControlDet != "") {
                        tabla = "<select class='form-control' onchange='mostrarFechaDetencion(" + idImpo + ")' name='cmbDetenido" + idImpo + "' id='cmbDetenido" + idImpo + "'>" +
                                "<option value='1' selected>PRISION</option> " +
                                "<option value='2'>LIBRE</option> " +
                                "</select>";
                    } else {
                        tabla = "<select class='form-control form-inline' onchange='mostrarFechaDetencion(" + idImpo + ")' name='cmbDetenido" + idImpo + "' id='cmbDetenido" + idImpo + "'>" +
                                "<option value='1' selected>PRISION</option> " +
                                "<option value='2'>LIBRE</option> " +
                                "</select><div  id='divFechaDet" + idImpo + "'><label class='needed'>fecha de detencion</label><input type='text' placeholder='dd/mm/aaaa'   id='fechaDet" + idImpo + "'  class='form-control datepicker fecha fechaDet validFecDet'></div>";

                    }

                } else {
                    tabla = "<select  class='form-control'  onchange='mostrarFechaDetencion(" + idImpo + ")' name='cmbDetenido" + idImpo + "' id='cmbDetenido" + idImpo + "'>" +
                            "<option value='1'>PRISION</option> " +
                            "<option value='2' selected>LIBRE</option> " +
                            "</select><div hidden  id='divFechaDet" + idImpo + "'><label class='needed'>fecha de detencion</label><input class='validFecDet form-inline' placeholder='dd/mm/aaaa' type='text'  id='fechaDet" + idImpo + "' ></div>";
                }
            } else {

                disabledFields(false, true);
                if ('text' in json) {
                    message = json.text;
                } else {
                    message = 'ERROR.';
                }
                showMessage(message, 'information');
                $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
            }

        });
        return tabla;
    }

    function mostrarFechaDetencion(impofedel) {
        if ($("#cmbDetenido" + impofedel).val() == 1) {
            $("#divFechaDet" + impofedel).show();
            $("#fechaDet" + impofedel).prop("disabled", false);
            $("#fechaDet" + impofedel).datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY HH:MM",
            });
        } else {
            $("#fechaDet" + impofedel).val("");
            $("#divFechaDet" + impofedel).hide();
        }

    }
    /**
     * Funcion para obtener los imputadaos que tienen 'check' en la tabla, estos se guardarAn en la tabla -tblautosimputados-
     * @param {string} option Recibe 'checked' o 'full', para mostrar los imputados seleccionados o todos ellos, respectivamente
     * @return {array} ids Regresa el array de los IDs de los imputados
     */
    function getImpofedel(option) {
        var option = option || 'full';
        //obtiene IDs de check de la tabla de imputados, correspondientes a 'idImputadoCarpeta' de la tabla -tblimputadoscarpetas-
        var ids = [], idsCheck = [], idsFull = [];
        var state = false;
        var idsString = [];
        var idImpofedel = 0;
        var idImputado = 0;
        var idRemisionApelacionImp = "";
        var counter = 0, counter2 = 0;
        var apelacionState = '';
        var fechaDetencion = "";
        var cveConsignacion = "";
        var validar = true;
        var validaFec = true;
        $.each($('.impofedelCheck'), function (k, v) {

            state = $(this).prop('checked');
            idImpofedel = $(this).val();
            //obtiene estado de apelacion
            //apelacionState = $('#checkIm' + idImputado).val();
            idImputado = $(this).attr('idimputado');
            idRemisionApelacionImp = $(this).attr('idRemisionApelacionImp');
            cveConsignacion = $("#cmbDetenido" + idImpofedel).val();
            fechaDetencion = $("#fechaDet" + idImpofedel).val();
            //alert(idImputado+ "   " + "#cmbDetenido"+idImputado);
            if (state) {
                if (cveConsignacion == 1 && fechaDetencion == "") {
                    validaFec = false;
                }
                //guarda en array
                idsCheck[counter++] = {idImputado: idImputado,
                    idImpOfeDel: idImpofedel,
                    idRemisionApelacionImp: idRemisionApelacionImp,
                    cveConsignacion: cveConsignacion, fechaDetencion: fechaDetencion};
                idsString.push(idImpofedel);

            }
            idsFull[counter2++] = {idImpOfeDel: idImpofedel,
                cveConsignacion: cveConsignacion};
        });


        if (option == 'checked') {
            ids = idsCheck;
        } else if (option == 'full') {
            ids = idsFull;
        } else if (option == 'string') {
            ids = idsString;
        } else if (option == 'validarFecha') {
            ids = validaFec;
        }

        return ids;
    }

    /**
     * FunciOn para obtener 'idAutoImputado' y eliminar el contenido de la tabla -tblautosapelaciones-
     * @param {integer} idActuacion ID de la actuaciOn
     * @param {json} info Objeto con la informaciOn de ImputadosCarpeta
     */
    function getIdAutoImputado(idActuacion, info) {
        //obtencion del idAutoImputado
        $.post("../fachadas/sigejupe/autosimputados/AutosimputadosFacade.Class.php",
                {idActuacion: idActuacion,
                    idImputadoCarpeta: info.idImputado,
                    accion: 'consultar'
                }, function (response) {
            var json = eval('(' + response + ')');
            var totalRecords = json.totalCount;
            if (totalRecords > 0) {
                var data = json.data[0];
                var idAutoImputado = data.idAutoImputado;
                //eliminaciOn de las apelaciones relacionadas al imputado
                deleteApelacion(idAutoImputado);
            }
        });
        return;
    }







    /**
     * FunciOn para borrar la apelaciOn asignada a un imputado, en la tabla 'tblautosapelados'
     * @param {integer} idAutoImputado Id del registro a borrar fisicamente
     */
    function deleteApelacion(idAutoImputado) {
        $.post("../fachadas/sigejupe/autosapelados/AutosapeladosFacade.Class.php",
                {
                    idAutoImputado: idAutoImputado,
                    accion: 'bajaAutoImputado'
                },
        function (response) {
        });
        return;
    }

    /**
     * FunciOn para la validaciOn de checks antes de guardar el Auto
     */
    function validateChecks() {
        var state = false;
        //obtiene los imputados seleccionados
        var imputadosList = getImpofedel('checked');

        if (imputadosList.length > 0) {
            state = true;
        }

        return state;
    }
    function validateDate() {
        var state = true;
        //obtiene los imputados seleccionados
        var fechDet = getImpofedel('validarFecha');
        if (fechDet) {

        } else {
            state = false;
        }

        return state;
    }
    function resetPagina() {
        $("#cmbPaginacion").val(1);
    }
    /**
     * FunciOn para Consultar Remision
     */
    function consultarTocaTradicional() {
        $("#tablaConsulta").html("");

        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=consultarTocaTradicional";
        strDatos += "&paginacion=true";
        strDatos += "&cantxPag=" + cantReg;
        strDatos += "&pag=" + $("#cmbPaginacion").val();
        strDatos += "&cveJuzgado=" + $("#cmbTipoJuzgado").val().split("/")[0];
        strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
        strDatos += "&numero=" + $("#numeroConsulta").val();
        strDatos += "&anio=" + $("#anioConsulta").val();
        strDatos += "&fechaInicial=" + $("#fechaRangoInicial").val();
        strDatos += "&fechaFinal=" + $("#fechaRangoFinal").val();
        //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
        $.ajax({
            async: false,
            type: 'POST',
            url: "../fachadas/sigejupe/tocastradicionales/TocastradicionalesFacade.Class.php",
            data: strDatos,
        }).done(function (response) {
            var json = eval('(' + response + ')');
            var totalRecords = json.totalCount;
            var message = json.mnj;
            if (json.Estatus == "ok") {
                if (totalRecords > 0) {
                    var tabla = "<table id='tblResultadosGridAct2'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered table-responsive dataTable no-footer'>";
                    tabla += "<thead><tr>";
                    tabla += "<td>No.</td><td>Toca</td><td>Causa</td><td>Fecha registro</td>";
                    tabla += "</tr></thead><tbody>";
                    var validarRemis = [];
                    var indice = [];
                    for (var j = 0; j <= totalRecords; j++) {
                        indice.push(0);
                    }
                    var ind = 0;
                    var data = json.resultados;
                    // guardarDatos();
                    for (var i = 0; i < totalRecords; i++) {
                        tabla += "<tr style='cursor: pointer;' onclick='cargarDatos(" + JSON.stringify(data) + "," + i + ",false);'>";
                        tabla += "<td > " + (i + 1) + "</td>";
                        tabla += "<td > " + data[i].numero + "/" + data[i].anio + "</td>";
                        tabla += "<td > " + data[i].numeroC + "/" + data[i].anioC + " - " + obtenerTipoCarpeta(data[i].cveTipoCarpeta) + "</td>";
                        tabla += "<td > " + fechaMySQLaNormalConsulta(data[i].fechaRegistro) + "</td>";
                        tabla += "</tr>";
                    }
                    tabla += "</tbody></table>";
                    $("#tablaConsulta").html(tabla);
                    $("#divConsulta").hide("slide");

                    $("#divTablaConsulta").show("slide");
                    getPages($("#cmbPaginacion").val(), cantReg);
                    $("#tblResultadosGridAct2").DataTable({paging: false});
                } else {
                    showMessage(message, 'information');
                }
            } else {
                showMessage(message, 'information');
            }
        });

    }
    /**
     * FunciOn para obtener las paginas de la tabla de resultados
     */
    function getPages(page, cantReg) {
        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=getPaginasTocasTradicionales";
        strDatos += "&paginacion=true";
        strDatos += "&cantxPag=" + cantReg;
        strDatos += "&pag=" + $("#cmbPaginacion").val();
        strDatos += "&cveJuzgado=" + $("#cmbTipoJuzgado").val().split("/")[0];
        strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
        strDatos += "&numero=" + $("#numeroConsulta").val();
        strDatos += "&anio=" + $("#anioConsulta").val();
        strDatos += "&tribunal=" + false;
        strDatos += "&fechaInicial=" + $("#fechaRangoInicial").val();
        strDatos += "&fechaFinal=" + $("#fechaRangoFinal").val();
        $.ajax({
            async: false,
            type: 'POST',
            url: "../fachadas/sigejupe/tocastradicionales/TocastradicionalesFacade.Class.php",
            data: strDatos,
        }).done(function (response) {
            var json = "";
            json = eval("(" + response + ")");
            if (json.totalCount > 0) {
                $('#cmbPaginacion').find('option').remove().end();

                for (var i = 0; i < (parseInt(json.total)); i++) {
                    $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                }
                $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                page = (page == null) ? 1 : page;
                $("#cmbPaginacion").val(page);
            } else {
                showMessage('SIN RESULTADOS', 'information');
            }
        });
        return;
    }


    fechaMySQLaNormal = function (fecha) {
        if (fecha != "") {
            var fechaHora = fecha.split(" ");
            var vecFecha = fechaHora[0].split("-");
            var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
            fechaHora = fechaHora[1].split(":");
            fechaHora = fechaHora[0] + ":" + fechaHora[1];
            return vecFecha + " " + fechaHora;
        } else {
            return "";
        }
    };
    fechaMySQLaNormalConsulta = function (fecha) {
        if (fecha != "") {
            var fechaHora = fecha.split(" ");
            var vecFecha = fechaHora[0].split("-");
            var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
            fechaHora = fechaHora[1].split(":");
            fechaHora = fechaHora[0] + ":" + fechaHora[1];
            return fechaNormal + " " + fechaHora;
        } else {
            return "";
        }
    };

    fechaNormal = function (fecha) {
        if (fecha != "") {
            var vecFecha = fecha.split("-");
            var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
            return fechaNormal;
        } else {
            return "";
        }
    };

    function cargarDatos(json, i, val) {
        if (val) {
            json = $.parseJSON(json);
        }
        $("#divTablaConsulta").hide();
        $("#tablaConsulta").html("");
        //$("#cmbTipoJuzgado").val("0/0");
        $("#cmbTipoCarpeta").val("");
        $("#numeroConsulta").val("");
        $("#anioConsulta").val("");
        $("#fechaRangoInicial").val("");
        $("#fechaRangoFinal").val("");
        $(".btn_auto_save").hide();
        $("#divImprimir").show();


        var tipo = "";
        tipo = 7;
        $("#numeroToca").val(json[i].numero);
        $("#anioToca").val(json[i].anio);
        $("#cveTipoJuzgado").val(json[i].cvejuzgadoC + "/" + tipo);
        cargaTipoCarpeta();
        $("#select_auto_carpeta").val(json[i].cveTipoCarpeta);
        $("#numeroCausa").val(json[i].numeroC);
        $("#anioCausa").val(json[i].anioC);
        $("#Sala").val(obtenerJuzgado(json[i].cvejuzgado));
        $("#observaciones").val(json[i].observaciones);
        var datosCarInv = json[i].carpetaInv.split("/");
        $("#lugar").val(datosCarInv[0]);
        $("#agencia").val(datosCarInv[1]);
        $("#turno").val(datosCarInv[2]);
        $("#acta").val(datosCarInv[3]);
        $("#anioActa").val(datosCarInv[4]);
        $("#radioGrave" + json[i].grave).prop("checked", true);
        $("#hiddenidReferencia").val(json[i].idReferencia);
        $("#hiddenidTocaTradicionales").val(json[i].idTocaTradicionales);
        $("#divFormulario :input").each(function () {
            $(this).prop("disabled", true);
        });
        $(".divBotones :input").each(function () {

            $(this).prop("disabled", false);
        });
        cargarOfendidos(json[i]);
        cargarImputados(json[i]);
        cargarDelitosConsulta(json[i]);
        $(".btnElimApel").hide();
        $("#divFormulario").show();
        $("#divConsulta").hide();
        fechaBaseDatos(
                {
                    fechaRangoInicial: "fecha",
                    fechaRangoFinal: "fecha"
                }
        );
    }
    function buscarOficio(idOficio) {
        var page = $("#cmbPaginacion").val();
        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=consultarOficios";
        strDatos += "&activo=S";
        strDatos += "&idActuacion=" + idOficio;
        strDatos += "&cantxPag=" + cantReg;
        strDatos += "&pag=" + page;
        var oficio = [];
        $.ajax({
            async: false,
            type: 'POST', global: false,
            url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
            data: strDatos,
            beforeSend: function (objeto) {
            }
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';
            var referencia = json.data;

            if (totalRecords > 0) {
                oficio[0] = referencia[0].numActuacion;
                oficio[1] = referencia[0].aniActuacion;
                oficio[2] = referencia[0].sintesis;
            } else {
            }
        });
        return oficio;
        //ajax para consultar el numero y anio de oficio regresa array o para numero y 1 para anio
    }

    function obtenerJuzgado(cvejuzgado) {
        //ajax para obtener el nombre del juzgado seleccionado
        var page = $("#cmbPaginacion").val();
        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        strDatos += "&cveJuzgado=" + cvejuzgado;
        strDatos += "&cantxPag=" + cantReg;
        strDatos += "&pag=" + page;
        var desJuzgado = "";
        $.ajax({
            async: false,
            type: 'POST',
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            data: strDatos,
            beforeSend: function (objeto) {
            }
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';
            var referencia = json.data;

            if (totalRecords > 0) {
                desJuzgado = referencia[0].desJuzgado;

            } else {
            }
        });
        return desJuzgado;
    }

    function obtenerEstatus(idActuacion) {
        //ajax para obtener el nombre del juzgado seleccionado
        var cveEstatus = 12;
        var page = $("#cmbPaginacion").val();
        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        strDatos += "&idActuacion=" + idActuacion;
        strDatos += "&cveEstatus=" + cveEstatus;
        strDatos += "&cantxPag=" + cantReg;
        strDatos += "&pag=" + page;
        var estatus = false;
        $.ajax({
            async: false,
            type: 'POST',
            url: "../fachadas/sigejupe/actuacionesestatus/ActuacionesestatusFacade.Class.php",
            data: strDatos,
            beforeSend: function (objeto) {
            }
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';
            var referencia = json.data;
            if (totalRecords > 0) {
                estatus = true;
            } else {
            }
        });
        return estatus;
    }

    function obtenerTipoActuacion(cveTipoActuacion) {
        //ajax para obtener el nombre del juzgado seleccionado
        var page = $("#cmbPaginacion").val();
        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        strDatos += "&cveTipoActuacion=" + cveTipoActuacion;
        strDatos += "&cantxPag=" + cantReg;
        strDatos += "&pag=" + page;
        var desTipoActuacion = "";
        $.ajax({
            async: false,
            type: 'POST',
            url: "../fachadas/sigejupe/tiposactuaciones/TiposactuacionesFacade.Class.php",
            data: strDatos,
            beforeSend: function (objeto) {
            }
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';
            var referencia = json.data;

            if (totalRecords > 0) {
                desTipoActuacion = referencia[0].desTipoActuacion;

            } else {
            }
        });
        return desTipoActuacion;
    }
    function obtenerResolucionDes(cveTipoResolucion) {
        //ajax para obtener el nombre del juzgado seleccionado
        var page = $("#cmbPaginacion").val();
        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        strDatos += "&cveTipoResolucion=" + cveTipoResolucion;
        var desTipoResolucion = "";
        $.ajax({
            async: false,
            type: 'POST', global: false,
            url: "../fachadas/sigejupe/tiposresoluciones/TiposresolucionesFacade.Class.php",
            data: strDatos,
            beforeSend: function (objeto) {
            }
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';
            var referencia = json.data;

            if (totalRecords > 0) {
                desTipoResolucion = referencia[0].desTipoResolucion;

            } else {
            }
        });
        return desTipoResolucion;
    }

//    function consultarTipoResolucion(idActuacion) {
//        //ajax para consultar el tipo de resolucion de la actuacion combatida
//        var page = $("#cmbPaginacion").val();
//        var cantReg = $("#cmbNumReg").val();
//        var strDatos = "accion=consultarOrdenado";
//        strDatos += "&activo=S";
//        strDatos += "&idActuacion=" + idActuacion;
//        strDatos += "&cantxPag=" + cantReg;
//        strDatos += "&pag=" + page;
//        var tipoResolucion = "";
//        $.ajax({
//            async: false,
//            type: 'POST',
//            url: "../fachadas/sigejupe/catresolucionescombatidas/CatresolucionescombatidasFacade.Class.php",
//            data: strDatos,
//            beforeSend: function (objeto) {
//            }
//        }).done(function (response) {
//            var json = eval("(" + response + ")");
//            var totalRecords = json.totalCount;
//            var message = '';
//            var referencia = json.data;
//
//            if (totalRecords > 0) {
//                tipoResolucion = referencia[0].cveCatResolucionCombatida;
//            } else {
//            }
//        });
//        return tipoResolucion;
//    }

    /**
     * FunciOn para guardar el Auto de VinculaciOn
     */
    function guardarToca() {         //campos de captura de Remision
        //varibles de control
//        var confirmar = confirm("Estas seguro? \n Al guardar no podras realizar modificaciones");
        $.confirm({
            title: '<center style="color:#881518;">Advertencia!</center>',
            content: ' <center>Estas seguro que quieres enviar los datos? al enviar los datos no podras realizar modificaciones </center>',
            confirmButton: 'Aceptar',
            cancelButton: 'Cancelar',
            animation: 'top',
            closeAnimation: 'bottom',
            confirm: function () {
                var listaDelitoEnv = JSON.stringify(listaDelito);
                var listaImputadoEnv = JSON.stringify(listaImputado);
                var listaOfendidoEnv = JSON.stringify(listaOfendido);
                var accion = "guardar";
                var carpetaInv = "";
                var cveRegion = $("#cveTipoJuzgado").attr("cveregion");
                var cveTipoCarpeta = $(' #select_auto_carpeta').val();
                var cveJuzgado = $("#cveTipoJuzgado").val().split("/")[0];
                var numero = $("#numeroCausa").val();
                var anio = $("#anioCausa").val();
                var grave = GraveSeleccionado();
                if($("#colegiada").is(":checked")){
                    var colegiada = "S";
                }
                var remisionState = validateFields();
                var observaciones = $("#observaciones").val();
                var validaAnio = true;
                if (anio.length < 4) {
                    validaAnio = false;
                }
                //validaciOn de los check
                //alert(imputadosState);
                if (remisionState[0] == true && validaAnio) {
                    carpetaInv = $("#lugar").val() + "/" + $("#agencia").val() + "/" + $("#turno").val() + "/" + $("#acta").val() + "/" + $("#anioActa").val();
                    var cveConsignacion = calcularConsignacion();
                    $.ajax({
                        async: false,
                        type: 'POST',
                        url: "../fachadas/sigejupe/tocastradicionales/TocastradicionalesFacade.Class.php",
                        data: {accion: accion, listaDelito: listaDelitoEnv, listaImputado: listaImputadoEnv, listaOfendido: listaOfendidoEnv, carpetaInv: carpetaInv
                            , cveRegion: cveRegion, cveUsuario: $('#cveUsuarioSistema').val(), cveJuzgado: cveJuzgado, numero: numero, anio: anio, grave: grave
                            , cveConsignacion: cveConsignacion, observaciones: observaciones, cveTipoCarpeta: cveTipoCarpeta,colegiada:colegiada
                        },
                    }).done(function (response) {
                        var json = eval('(' + response + ')');
                        var totalRecords = json.totalCount;
                        var message = json.msj;

                        if (json.status == "Ok") {
                            $("#numeroToca").val(json.resultados.numero);
                            $("#anioToca").val(json.resultados.anio);
                            $("#Sala").val(obtenerJuzgado(json.resultados.cveJuzgado));
                            $("#hiddenidReferencia").val(json.resultados.idCarpetaJudicial);
                            showMessage(message, 'success');
                            if ($('#procedencia').val() == 1) {
                                getTree();
                            }
                            $(".btn_auto_save").hide();
                            $("#divImprimir").show();
                        } else {
                            $(".btn_auto_save").show();
                            $("#divImprimir").hide();

                            showMessage(message, 'error');
                        }
                    });
                } else {
                    $(".btn_auto_save").show();
                    $("#divImprimir").hide();
                    var message = 'A&Uacute;N QUEDAN CAMPOS VACIOS:<br/>';

                    if (!remisionState[0]) {
                        message += remisionState[1];
                    }
                    if (!validaAnio) {
                        message += '- EL A&Ntilde;O DEBE TENER 4 DIGITOS <br/>';
                    }
                    message += 'VERIFIQUE.';
                    showMessage(message, 'information');
                }
            },
            cancel: function () {
               
            }
        });

    }

    /**
     * FunciOn para verificar agravio seleccionado
     */
    function agravioSeleccionado(sel) {
        if (sel == "normal") {
            var agravio = "N";
            if ($("#radioAgravioS").is(":checked")) {
                agravio = "S";
            } else if ($("#radioAgravioN").is(":checked")) {
                agravio = "N";
            }
        } else {
            var agravio = "N";
            if ($("#radioAgravioS").is(":checked")) {
                agravio = "Si";
            } else if ($("#radioAgravioN").is(":checked")) {
                agravio = "No";
            }
        }
        return agravio;
    }
    /**
     * FunciOn para verificar emplazamiento?? seleccionado
     */
    function emplazamientoSeleccionado() {
        var emplazamiento = "N";
        if ($("#radioEmplazaminetoS").is(":checked")) {
            emplazamiento = "S";
        } else if ($("#radioEmplazaminetoN").is(":checked")) {
            emplazamiento = "N";
        }
        return emplazamiento;
    }


    /**
     * FunciOn para buscar dentro de un array un elemento a travEs de una llave, el resultado es el indice del elemento
     * @param {array} array Es el array en donde se buscarA el elemento
     * @param {string} property Es el nombre del campo en el cual se buscarA
     * @param {string} value Es el valor a encontrar
     * @return {integer} index Si encuentra el elemento regresa '-1' en otro caso regresa la posiciOn del elemento
     */
    function find_in_object(array, property, value) {
        var index = array.map(function (d) {
            return d[property];
        }).indexOf(value);
        return index;
    }

    /**
     * Busca una apelaciOn, si existe la borra y reduce en 1 el contador
     * @param {integer} idImputadoCarpeta Es el ID de ImputadoCarpeta
     */
    function findApelacion(idImputadoCarpeta) {
        //validar la existencia del elemento a travEs de idImputadoCarpeta
        var item_id = find_in_object(Apelaciones.apelacion, 'idImputadoCarpeta', idImputadoCarpeta);         //si existe el elemento lo borra
        if (item_id > -1) {
            Apelaciones.apelacion.splice(item_id, 1);
            Apelaciones.contador--;
        }
        return;
    }


    /**
     * Funcion para verificar si los campos capturados de la apelacion contiene informaciOn
     * @param {json} apelacion Es el objeto con los campos de la apelaciOn
     * @param {boolean} estado Regresa -true- si al menos un elemento del objeto contiene informacion, o -false- en caso de estar vacio el objeto
     */     function verifyApelaciones(apelacion) {
        var estado = false;
        var counter = 0;
        var totalElements = apelacion.length;
        if (totalElements > 0) {
            $.each(apelacion, function (index, value) {
                if (value['value'] == 0 || value['value'] == '') {
                    counter++;
                }
            });
            if (totalElements != counter) {
                //si el numero de elementos es diferente al contador, significa que al menos un elemento del array si tiene informacion
                estado = true;
            }
        }
        return estado;
    }



    /**
     * FunciOn para habilitar/deshabilitar los botones de ediciOn      * @param {integer} idImputadoCarpeta Identificador del boton
     * @param {boolean} disabled true/false
     */
    function editButton(idImputadoCarpeta, disabled) {
        var remove = '';
        var add = ''
        if (disabled == false) {
            remove = 'btn-default';
            add = 'btn-primary';
        } else if (disabled == true) {
            remove = 'btn-primary';
            add = 'btn-default';
        }
        $('#edit_' + idImputadoCarpeta).prop('disabled', disabled).removeClass(remove).addClass(add);
        return;
    }

    /**
     * FunciOn para la validaciOn del rango de fechas de bUsqueda
     * @param {date} fechaInicial Es la fecha de inicio en formato DD-MM-YYYY
     * @param {date} fechaFinal Es la fecha final en formato DD-MM-YYYY
     * @return {string} rangoFechas Regresa el rango de fechas procesadas en formato YYYY-MM-DD hh:mm:ss|YYYY-MM-DD hh:mm:ss Corresponden a FechaInicial|FechaFinal      */
    function obtieneFechas(fechaInicial, fechaFinal) {
        fechaInicial = fechaInicial.split('/');
        fechaFinal = fechaFinal.split('/');
        var inicio = '2000-01-01 00:00:00';
        var final = '2036-12-31 23:59:59';
        var rangoFechas = inicio + '|' + final;
        var fInicial = fechaInicial[2] + '-' + fechaInicial[1] + '-' + fechaInicial[0] + ' 00:00:00';
        var fFinal = fechaFinal[2] + '-' + fechaFinal[1] + '-' + fechaFinal[0] + ' 23:59:59';
        if (fechaInicial != "") {
            if (fInicial < inicio && fInicial > final) {
                fInicial = inicio;
            }
        }
        if (fechaFinal != "") {
            if (fFinal < inicio && fFinal > final) {
                fFinal = final;
            }
        }
        if (fechaInicial != "" && fechaFinal != "") {
            rangoFechas = fInicial + '|' + fFinal;
        } else if (fechaInicial != "") {
            rangoFechas = fInicial + '|' + final;
        } else if (fechaFinal != "") {
            rangoFechas = inicio + '|' + fFinal;
        }
        return rangoFechas;
    }

    function validarEmail(email) {
        var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!expr.test(email)) {
            return false;
        } else {
            return true;
        }
    }
    cargaJuzgados = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            data: {accion: "tradicional"},
            async: false,
            global: false,
            dataType: "html",
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")");
                if (json.totalCount > 0) {
                    $("#cveTipoJuzgado, #cmbTipoJuzgado").empty().append('<option value="0/0">Seleccione una opci&oacute;n</option>');
                    for (var i = 0; i < json.totalCount; i++) {
                        //if( json.data[i].cveTipojuzgado == 1 ){
                        $("#cveTipoJuzgado, #cmbTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                        if (cveJuzgado == json.data[i].cveJuzgado) {
                            $("#cveTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                            $("#cmbTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                        }
                        $("#cveTipoJuzgado").attr("cveregion", json.data[i].cveRegion);
                    }
                }
                else {
                    $("#cveTipoJuzgado, #cmbTipoJuzgado").empty().append('<option value="0/0">Sin registros</option>');
                }
                cargaTipoCarpeta();
                cargaTipoCarpeta2();
            },
            error: function (objeto, quepaso, otroobj) {
                showMessage("Error en la peticion:\n\n" + quepaso, 'error');
            }
        });
    };
    cargaJuzgadosConsulta = function () {
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            data: {accion: "distrito"},
            async: false,
            global: false,
            dataType: "html",
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")");
                if (json.totalCount > 0) {
                    $(" #cmbTipoJuzgado").empty();//.append('<option value="0/0">Seleccione una opci&oacute;n</option>');
                    for (var i = 0; i < json.totalCount; i++) {
                        //if( json.data[i].cveTipojuzgado == 1 ){
                        $(" #cmbTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                        if (cveJuzgado == json.data[i].cveJuzgado) {
                            $("#cmbTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                        }

                    }
                }
                else {
                    $(" #cmbTipoJuzgado").empty().append('<option value="0/0">Sin registros</option>');
                }
                cargaTipoCarpeta();
            },
            error: function (objeto, quepaso, otroobj) {
                showMessage("Error en la peticion:\n\n" + quepaso, 'error');
            }
        });
    };


    cargaTipoCarpeta = function () {
        $('#select_auto_carpeta, #cmbTipoCarpeta').empty();
        var tipoJuzgado = $("#cveTipoJuzgado").val().split("/");
        var strDatos = "accion=consultar";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
            data: strDatos,
            async: false, global: false,
            dataType: "html",
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")");
                if (json.totalCount > 0) {
                    $("#select_auto_carpeta").append($('<option></option>').val("").html("Seleccione una opci&oacute;n"));
                    for (var i = 0; i < json.totalCount; i++) {
                        switch (tipoJuzgado[1]) {
//                            case "1": // tipo de juzgado de control
//                                if (json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
//                                    $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
//                                }
//                                break;
//                            case "2": // tipo de juzgado juicio
//                                if (json.data[i].cveTipoCarpeta == "3") { // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
//                                    $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
//                                }
//                                break;
//                            case "3": // tipo de juzgado ejecucion
//                                if (json.data[i].cveTipoCarpeta == "5") { // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
//                                    $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
//                                }
//                                break;
//                            case "4": // tipo de juzgado tribunal
//                                if (json.data[i].cveTipoCarpeta == "4") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
//                                    $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
//                                }
//                                break;
//                            case "5":
//                                break;
                            case "7":
                                if (json.data[i].cveTipoCarpeta == "16") {
                                    $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                                break;
                            default:
                                if (json.data[i].cveTipoCarpeta == "16") {
                                    $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                                break;
                        }
                    }
                }
            },
            error: function (objeto, quepaso, otroobj) {
                showMessage("Error en la peticion:\n\n" + quepaso, 'error');
            }
        });
    };
    cargaTipoCarpeta2 = function () {
        $(' #cmbTipoCarpeta').empty();
        var tipoJuzgado = "";//$("#cmbTipoJuzgado").val().split("/");
        var strDatos = "accion=consultar";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
            data: strDatos,
            async: false,
            global: false,
            dataType: "html",
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")");
                if (json.totalCount > 0) {
                    $(" #cmbTipoCarpeta").append($('<option></option>').val("").html("Seleccione una opci&oacute;n"));
                    for (var i = 0; i < json.totalCount; i++) {
                        switch (tipoJuzgado[1]) {
                            case "1": // tipo de juzgado de control
                                if (json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                    $(" #cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                                break;
                            case "2": // tipo de juzgado juicio
                                if (json.data[i].cveTipoCarpeta == "3") { // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                    $(" #cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                                break;
                            case "3": // tipo de juzgado ejecucion
                                if (json.data[i].cveTipoCarpeta == "5") { // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                    $(" #cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                                break;
                            case "4": // tipo de juzgado tribunal
                                if (json.data[i].cveTipoCarpeta == "4") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                    $(" #cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                                break;
                            case "5":
                                if (json.data[i].cveTipoCarpeta == "6") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                    $(" #cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                                break;
                            case "7":
                                if (json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "5" || json.data[i].cveTipoCarpeta == "3" || json.data[i].cveTipoCarpeta == "2") {
                                    $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                                break;
                            default:
                                if (json.data[i].cveTipoCarpeta == "6") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                    $(" #cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                                break;
                        }
                    }
                }
            },
            error: function (objeto, quepaso, otroobj) {
                showMessage("Error en la peticion:\n\n" + quepaso, 'error');
            }
        });
    };
    $('#divFormulario').on('change', '#select_auto_carpeta', function () {

    });
    function enviar() {
        var strDatos = "accion=generarJson";
        strDatos += "&cveTipo=2"; //2 = actuacion
        strDatos += "&cveTipoDocumento=15"; //tipo documento
        strDatos += "&idActuacion=" + $("#idActuacion").val();
        $.ajax({
            type: "POST", url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
            data: strDatos,
            async: true, dataType: "html",
            beforeSend: function (objeto) {
                // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
            },
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")"); //Parsear JSON
                if (json.totalCount > 0) {
                    generaPDF(datos);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                showMessage("Error en la peticion:\n\n" + quepaso, 'error');
            }
        });
    }
    ;     //funcion para bloquear los campos y evitar cambios cuando viene del arbol
    function bloqueaCamposLlave() {
        $('#cveTipoJuzgado, #select_auto_carpeta, #input_auto_numero, #input_auto_anio').prop('disabled', true);
    }

    function obtieneDatosCarpeta() {
        var hiddenidReferencia = $('#idReferencia').val();
        var cveTipoCarpetaArbol = $('#cveTipoCarpetaArbol').val();
        $('#select_auto_carpeta').val(cveTipoCarpetaArbol);
        var urlFacade = "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php";
        var dataFacade = "accion=consultar&activo=S&idCarpetaJudicial=" + hiddenidReferencia;
        $.ajax({async: false, type: 'POST', url: urlFacade, data: dataFacade
        }).done(function (response) {
            var objeto = eval('(' + response + ')');
            var data = '';
            if (objeto.totalCount > 0) {
                data = objeto.data[0];
                $('#input_auto_numero').val(data.numero);
                $('#input_auto_anio').val(data.anio);
            }
        });
        //obtencion de los datos para la seleccion del combo de juzgado y relacionado con 
        var urlFacade = "../fachadas/sigejupe/actaminima/ActaminimaFacade.Class.php";
        var dataFacade = "accion=carpetaArbol&idCarpetaJudicial=" + hiddenidReferencia;
        $.ajax({async: false, type: 'POST', url: urlFacade, data: dataFacade
        }).done(function (response) {
            var objeto = eval('(' + response + ')');
            $('#cveTipoJuzgado').val(objeto.idJuzgado);             //cargaTipoCarpeta();
        });
    }

    /**
     * Variable para almacenar la informacion de las carpetas judiciales
     */
    var carpetasJudiciales = {
        idReferencia: 0,
        numero: 0,
        anio: 0,
        cveTipoCarpeta: 0,
        cveJuzgado: 0
    };
    /**
     * Variable para almacenar la informaciOn de las Apelaciones
     */
    var Apelaciones = {
        apelacion: [],
        contador: 0
    }

    /**
     * Variable para almacenar registros en la bUsqueda
     */
    var findContent = {
        regs: []};     /**
         * Variable para almacenar los permisos del formulario
         */
    var crud = {
        create: 'N',
        read: 'N',
        update: 'N',
        delete: 'N'
    };
    /*
     * function para formar Tabla de imputados a partir de una lista de arrays
     * @type type     */
    function formarTablaImputados(bandera) {

        var tabla = " ";
        for (var i = 0; i < listaImputado.length; i++) {
            if (listaImputado[i].activo == "S") {
                tabla += "<tr onclick='cargarImputadoEditar(" + i + ")'>";
                if (listaImputado[i].tipoPersona == 1) {
                    tabla += "<td>" + listaImputado[i].nombre + " " + listaImputado[i].paterno + " " + listaImputado[i].materno + "</td>";
                } else {
                    tabla += "<td>" + listaImputado[i].nombreMoral + "</td>";
                }
                if (listaImputado[i].detenido == true) {
                    $("#divFechaDet").show();
                    tabla += "<td>Si</td>";
                    tabla += "<td>" + fechaMySQLaNormal(listaImputado[i].fechaDetencion) + "</td>";
                } else {
                    tabla += "<td>No</td>";
                    tabla += "<td></td>";
                }
                if (bandera) {
                    tabla += "<td><img src='img/eliminar.png' width='27px' style='cursor:pointer;' class='btnElimApel' onclick='eliminarImputado(" + i + ")'></td>";
                } else {
                    tabla += "<td></td>";
                }
                tabla += "</tr>";
            }
        }

        return tabla;
    }
    /*
     * function para formar Tabla de imputados a partir de una lista de arrays
     * @type type     */
    function formarTablaDelitos(bandera) {

        var tabla = " ";
        console.log(listaDelito);
        for (var i = 0; i < listaDelito.length; i++) {
            if (listaDelito[i].activo == "S") {
                tabla += "<tr >"
                tabla += "<td onclick='cargarDelitoEditar(" + i + ")'>" + listaDelito[i].delito + "</td>";

                if (bandera) {
                    tabla += "<td><img src='img/eliminar.png' width='27px' style='cursor:pointer;' class='btnElimApel' onclick='eliminarDelito(" + i + ")'></td>";
                } else {
                    tabla += "<td></td>";
                }
                tabla += "</tr>";
            }
        }
        console.log(tabla);
        return tabla;
    }
    /*
     * function para formar Tabla de ofendidos a partir de una lista de arrays
     * @type type     */
    function formarTablaOfendidos(bandera) {

        var tabla = " ";
        for (var i = 0; i < listaOfendido.length; i++) {
            if (listaOfendido[i].activo == "S") {
                tabla += "<tr onclick='cargarOfendidoEditar(" + i + ")'>";
                if (listaOfendido[i].tipoPersona == 1) {
                    tabla += "<td>" + listaOfendido[i].nombre + " " + listaOfendido[i].paterno + " " + listaOfendido[i].materno + "</td>";
                } else {
                    tabla += "<td>" + listaOfendido[i].nombreMoral + "</td>";
                }

                if (bandera) {
                    tabla += "<td><img src='img/eliminar.png' width='27px' style='cursor:pointer;' class='btnElimApel' onclick='eliminarOfendido(" + i + ")'></td>";
                } else {
                    tabla += "<td></td>";
                }
                tabla += "</tr>";
            }
        }
        return tabla;
    }
    function cargarImputadoEditar(i) {
        $("#cmbTipoPersonaImp").val(listaImputado[i].tipoPersona);
        $("#cmbGenero").val(listaImputado[i].genero);
        $("#hiddenIimp").val(i);
        $("#fechaDet").val(listaImputado[i].fechaDetencion);

        if (listaImputado[i].detenido == true) {
            $("#detenido").prop("checked", true);
            $("#divFechaDet").show();
        }
        if ($("#cmbTipoPersonaImp").val() == 1) {

            $("#nombreImp").val(listaImputado[i].nombre);
            $("#paternoImp").val(listaImputado[i].paterno);
            $("#maternoImp").val(listaImputado[i].materno);
            $("#divNombreMoralImp").hide();
            $("#divNombreFisicoImp").show();
        } else {
            $("#nombreMoralImp").val(listaImputado[i].nombreMoral);
            $("#divNombreMoralImp").show();
            $("#divNombreFisicoImp").hide();
        }
        $("#btnActApImp").show();
        $("#btnsabeImp").hide();
    }
    function cargarDelitoEditar(i) {
        $("#cmbDelitos").val(listaDelito[i].cveDelito);
        $("#hiddenIdel").val(i);
        $("#btnActApDel").show();
        $("#btnsabeDel").hide();
    }
    function cargarOfendidoEditar(i) {
        $("#cmbTipoPersonaOfe").val(listaOfendido[i].tipoPersona);
        $("#cmbGenero").val(listaOfendido[i].genero);
        $("#hiddenIofe").val(i);
        if ($("#cmbTipoPersonaOfe").val() == 1) {

            $("#nombreOfe").val(listaOfendido[i].nombre);
            $("#paternoOfe").val(listaOfendido[i].paterno);
            $("#maternoOfe").val(listaOfendido[i].materno);
            $("#divNombreMoralOfe").hide();
            $("#divNombreFisicoOfe").show();
        } else {
            $("#nombreMoralOfe").val(listaOfendido[i].nombreMoral);
            $("#divNombreMoralOfe").show();
            $("#divNombreFisicoOfe").hide();
        }

        $("#btnActApOfe").show();
        $("#btnsabeOfe").hide();
    }
    function actualizarImputado() {
        var i = $("#hiddenIimp").val();
        listaImputado[i].tipoPersona = $("#cmbTipoPersonaImp").val();
        listaImputado[i].genero = $("#cmbGeneroImp").val();
        listaImputado[i].idImputadoCarpeta = listaImputado[i].idImputadoCarpeta;
        listaImputado[i].activo = "S";
        var detenido = "";
        if ($("#detenido").is(":checked")) {
            detenido = true;
            $("#divFechaDet").show();
        } else {
            detenido = false;
        }
        var fechaDetencion = "";
        if (detenido) {
            fechaDetencion = $("#fechaDet").val();

        }
        listaImputado[i].detenido = detenido;
        listaImputado[i].fechaDetencion = fechaDetencion;
        if ($("#cmbTipoPersonaImp").val() == 1) {
            listaImputado[i].nombre = $("#nombreImp").val().toUpperCase();
            listaImputado[i].paterno = $("#paternoImp").val().toUpperCase();
            listaImputado[i].materno = $("#maternoImp").val().toUpperCase();
        } else {
            listaImputado[i].nombreMoral = $("#nombreMoralImp").val().toUpperCase();
        }
        $("#divFechaDet").hide();
        $("#imputadosTbody").html(formarTablaImputados(true));
        $("#btnsabeImp").show();
        $("#btnActApImp").hide();
        limpiarImputado();


    }
    function actualizarDelito() {
        var i = $("#hiddenIdel").val();
        listaDelito[i].cveDelito = $("#cmbDelitos").val();
        listaDelito[i].delito = $("#cmbDelitos :selected").text();
        $("#delitosTbody").html(formarTablaDelitos(true));
        $("#btnsabeDel").show();
        $("#btnActApDel").hide();
        limpiarDelito();


    }
    function actualizarOfendido() {
        var i = $("#hiddenIofe").val();
        listaOfendido[i].tipoPersona = $("#cmbTipoPersonaOfe").val();
        listaOfendido[i].genero = $("#cmbGeneroOfe").val();
        listaOfendido[i].idOfendidoCarpeta = listaOfendido[i].idOfendidoCarpeta;
        listaOfendido[i].activo = "S";
        if ($("#cmbTipoPersonaOfe").val() == 1) {
            listaOfendido[i].nombre = $("#nombreOfe").val().toUpperCase();
            listaOfendido[i].paterno = $("#paternoOfe").val().toUpperCase();
            listaOfendido[i].materno = $("#maternoOfe").val().toUpperCase();
        } else {
            listaOfendido[i].nombreMoral = $("#nombreMoralOfe").val().toUpperCase();
        }
        $("#ofendidosTbody").html(formarTablaOfendidos(true));
        $("#btnsabeOfe").show();
        $("#btnActApOfe").hide();
        limpiarOfendido();


    }
    function eliminarImputado(id) {
        if (listaImputado[id].idImputadoCarpeta != "") {
            listaImputado[id].activo = "N";
            $("#imputadosTbody").html(formarTablaImputados(true));
        } else {
            listaImputado.splice(id, 1);
            $("#imputadosTbody").html(formarTablaImputados(true));
        }
        limpiarImputado();
    }
    function eliminarDelito(id) {
            listaDelito.splice(id, 1);
            $("#delitosTbody").html(formarTablaDelitos(true));
        
        limpiarDelito();
    }
    function eliminarOfendido(id) {
        if (listaOfendido[id].idOfendidoCarpeta != "") {
            listaOfendido[id].activo = "N";
            $("#ofendidosTbody").html(formarTablaOfendidos(true));
        } else {
            listaOfendido.splice(id, 1);
            $("#ofendidosTbody").html(formarTablaOfendidos(true));
        }
        limpiarOfendido();
    }
    /*
     * function para Agregar imputados a un array para mostrar en la vista
     * @type type     */
    function agregarImputado() {
        var mensaje = "";
        var nombre = true;
        var valDetendio = true;
        if ($("#cmbTipoPersonaImp").val() == "1") {
            if ($("#paternoImp").val().trim() == "") {
                nombre = false;
            } else if ($("#maternoImp").val().trim() == "") {
                nombre = false;
            } else if ($("#nombreImp").val().trim() == "") {
                nombre = false;
            }
        } else {
            if ($("#nombreMoralImp").val().trim() == "") {
                nombre = false;
            }
        }

        var detenido = "";
        if ($("#detenido").is(":checked")) {
            detenido = true;
        } else {
            detenido = false;
        }
        var fechaDetencion = "";
        if (detenido) {
            fechaDetencion = $("#fechaDet").val();
            if (fechaDetencion == "") {
                valDetendio = false;
            }
        }

        if (nombre && valDetendio) {

            var imputadosArray = new Object();
            imputadosArray.tipoPersona = $("#cmbTipoPersonaImp").val();
            imputadosArray.genero = $("#cmbGeneroImp").val();
            imputadosArray.idImputadoCarpeta = "";
            imputadosArray.activo = "S";
            imputadosArray.detenido = detenido;
            imputadosArray.fechaDetencion = fechaDetencion;
            if ($("#cmbTipoPersonaImp").val() == 1) {
                imputadosArray.nombre = $("#nombreImp").val().toUpperCase();
                imputadosArray.paterno = $("#paternoImp").val().toUpperCase();
                imputadosArray.materno = $("#maternoImp").val().toUpperCase();
            } else {
                imputadosArray.nombreMoral = $("#nombreMoralImp").val().toUpperCase();
            }
            listaImputado.push(imputadosArray);
            $("#imputadosTbody").html(formarTablaImputados(true));
            limpiarCamposImputado();


        } else {
            var mensaje = "";

            if (!nombre) {
                mensaje += " Debe Agregar el nombre (paterno,materno) \n";
            }
            if (!valDetendio) {
                mensaje += " Debe Agregar la fecha de detención \n";
            }
            $.alert({
                title: '<center style="color:#881518;">Aviso!</center>',
                content: '<center> '+ mensaje +' <br></center>',
                confirmButton: 'Aceptar'
            });
        }
    }
    /*
     * function para Agregar imputados a un array para mostrar en la vista
     * @type type     */
    function agregarDelito() {
        var mensaje = "";

        if ($("#cmbDelitos").val() != "") {

            var delitosArray = new Object();

            delitosArray.delito = $("#cmbDelitos :selected").text();
            delitosArray.cveDelito = $("#cmbDelitos").val();
            delitosArray.activo = "S";
            listaDelito.push(delitosArray);
            $("#delitosTbody").html(formarTablaDelitos(true));
            limpiarCamposDelito();


        } else {
            var mensaje = "";
            mensaje += " Debe Seleccionar un delito \n";
            $.alert({
                title: '<center style="color:#881518;">Aviso!</center>',
                content: '<center> '+ mensaje+' <br></center>',
                confirmButton: 'Aceptar'
            });
        }
    }

    function cargarDelitosConsulta(json) {
        listaDelito = [];
        for (var j = 0; j < (json.delitos).length; j++) {
            var delitosArray = new Object();
            delitosArray.delito = json.delitos[j].desDelito;
            delitosArray.cveDelito = json.delitos[j].cveDelito;
            delitosArray.activo = json.delitos[j].activo;
            listaDelito.push(delitosArray);
        }
        $("#delitosTbody").html(formarTablaDelitos(false));
    }
    /*
     * function para Agregar ofendidos a un array para mostrar en la vista
     * @type type     */
    function agregarOfendido() {
        var mensaje = "";
        var nombre = true;
        if ($("#cmbTipoPersonaOfe").val() == "1") {
            if ($("#paternoOfe").val().trim() == "") {
                nombre = false;
            } else if ($("#maternoOfe").val().trim() == "") {
                nombre = false;
            } else if ($("#nombreOfe").val().trim() == "") {
                nombre = false;
            }
        } else {
            if ($("#nombreMoralOfe").val().trim() == "") {
                nombre = false;
            }
        }
        if (nombre) {

            var ofendidosArray = new Object();
            ofendidosArray.tipoPersona = $("#cmbTipoPersonaOfe").val();
            ofendidosArray.genero = $("#cmbGeneroOfe").val();
            ofendidosArray.idOfendidoCarpeta = "";
            ofendidosArray.activo = "S";
            if ($("#cmbTipoPersonaOfe").val() == 1) {
                ofendidosArray.nombre = $("#nombreOfe").val().toUpperCase();
                ofendidosArray.paterno = $("#paternoOfe").val().toUpperCase();
                ofendidosArray.materno = $("#maternoOfe").val().toUpperCase();
            } else {
                ofendidosArray.nombreMoral = $("#nombreMoralOfe").val().toUpperCase();
            }

            listaOfendido.push(ofendidosArray);
            $("#ofendidosTbody").html(formarTablaOfendidos(true));
            limpiarCamposOfendido();


        } else {
            var mensaje = "";

            if (!nombre) {
                mensaje += " Debe Agregar el nombre (paterno,materno) \n";
            }
            $.alert({
                title: '<center style="color:#881518;">Aviso!</center>',
                content: '<center> '+ mensaje +' <br></center>',
                confirmButton: 'Aceptar'
            });
        }
    }

    function cargarImputados(json) {
        listaImputado = [];
        for (var j = 0; j < (json.imputados).length; j++) {
            var imputadossArray = new Object();
            imputadossArray.tipoPersona = json.imputados[j].cveTipoPersona;
            imputadossArray.genero = json.imputados[j].cveGenero;
            imputadossArray.idImputadoCarpeta = json.imputados[j].idImputadoCarpeta;
            imputadossArray.activo = json.imputados[j].activo;
            if (json.imputados[j].cveTipoPersona == 1) {
                imputadossArray.nombre = json.imputados[j].nombre;
                imputadossArray.paterno = json.imputados[j].paterno;
                imputadossArray.materno = json.imputados[j].materno;
            } else {
                imputadossArray.nombreMoral = json.imputados[j].nombreMoral;
            }
            if (json.imputados[j].detenido == "S") {
                imputadossArray.detenido = true;
                imputadossArray.fechaDetencion = fechaMySQLaNormalConsulta(json.imputados[j].fechaDetencion);
            } else {
                imputadossArray.detenido = false;
            }
            listaImputado.push(imputadossArray);
        }
        $("#imputadosTbody").html(formarTablaImputados(false));
    }
    function cargarOfendidos(json) {
        listaOfendido = [];
//        if (bandera) {
//            json = $.parseJSON(json);
//        }
        for (var j = 0; j < (json.ofendidos).length; j++) {
            var ofendidosArray = new Object();
            ofendidosArray.tipoPersona = json.ofendidos[j].cveTipoPersona;
            ofendidosArray.genero = json.ofendidos[j].cveGenero;
            ofendidosArray.idApelanteCarpeta = json.ofendidos[j].idOfendidoCarpeta;
            ofendidosArray.activo = json.ofendidos[j].activo;
            if (json.ofendidos[j].cveTipoPersona == 1) {
                ofendidosArray.nombre = json.ofendidos[j].nombre;
                ofendidosArray.paterno = json.ofendidos[j].paterno;
                ofendidosArray.materno = json.ofendidos[j].materno;
            } else {
                ofendidosArray.nombreMoral = json.ofendidos[j].nombreMoral;
            }
            ofendidosArray.domicilio = json.ofendidos[j].domicilio;
            ofendidosArray.correo = json.ofendidos[j].email;
            listaOfendido.push(ofendidosArray);

        }
        $("#ofendidosTbody").html(formarTablaOfendidos(false));
    }

    function obtenerTipoRecurso(cveRecurso) {
        //ajax para obtener el nombre del juzgado seleccionado
        var page = $("#cmbPaginacion").val();
        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        strDatos += "&cveRecurso=" + cveRecurso;
        strDatos += "&cantxPag=" + cantReg;
        strDatos += "&pag=" + page;
        var desRecurso = "";
        $.ajax({
            async: false,
            type: 'POST',
            url: "../fachadas/sigejupe/tiposrecursos/TiposrecursosFacade.Class.php",
            data: strDatos,
            beforeSend: function (objeto) {
            }
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';
            var referencia = json.data;

            if (totalRecords > 0) {
                desRecurso = referencia[0].desRecurso;

            } else {
            }
        });
        return desRecurso;
    }
    function obtenerActuacionesRemisiones(idActuacion, idActuacionCarpeta) {
        var respuesta = "true";
        var cantReg = $("#cmbNumReg").val();
        if (idActuacion != "" || idActuacionCarpeta != "") {
            $.ajax({
                async: false,
                type: 'POST',
                url: "../fachadas/sigejupe/remisionapelaciones/RemisionapelacionesFacade.Class.php",
                data: {listaApelantes: (JSON.stringify(listaApelantes)),
                    idActuacion: idActuacion, idActuacionCarpeta: idActuacionCarpeta, pag: $("#cmbPaginacion").val()
                    , cantxPag: cantReg, paginacion: true,
                    accion: "buscarActuacionRemision"},
            }).done(function (response) {
                respuesta = response;
            });
        } else {
            respuesta = "true";
        }
        return respuesta;
    }
    function obtenerResolucionCombatida(cveCatResolucionCombatida) {
        //ajax para obtener el nombre del juzgado seleccionado
        var page = $("#cmbPaginacion").val();
        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        strDatos += "&cveCatResolucionCombatida=" + cveCatResolucionCombatida;
        var desResolucionCombatida = "";
        $.ajax({
            async: false,
            type: 'POST', global: false,
            url: "../fachadas/sigejupe/catresolucionescombatidas/CatresolucionescombatidasFacade.Class.php",
            data: strDatos,
            beforeSend: function (objeto) {
            }
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';
            var referencia = json.data;

            if (totalRecords > 0) {
                desResolucionCombatida = referencia[0].desResolucionCombatida;

            } else {
            }
        });
        return desResolucionCombatida;
    }
    function obtenerResolucionCombatidaFecha(idActuacion) {
        //ajax para obtener el nombre del juzgado seleccionado
        var page = $("#cmbPaginacion").val();
        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        strDatos += "&idActuacion=" + idActuacion;
        var fechaRegistro = "";
        $.ajax({
            async: false,
            type: 'POST', global: false,
            url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
            data: strDatos,
            beforeSend: function (objeto) {
            }
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';
            var referencia = json.data;

            if (totalRecords > 0) {
                fechaRegistro = referencia[0].fechaRegistro;

            } else {
            }
        });
        return fechaRegistro;
    }

    function obtenerEfecto(cveEfecto) {
        //ajax para obtener el nombre del juzgado seleccionado
        var page = $("#cmbPaginacion").val();
        var cantReg = $("#cmbNumReg").val();
        var strDatos = "accion=consultar";
        strDatos += "&activo=S";
        strDatos += "&cveEfecto=" + cveEfecto;
        var desTipoEfecto = "";
        $.ajax({
            async: false,
            type: 'POST', global: false,
            url: "../fachadas/sigejupe/tiposefectos/TiposefectosFacade.Class.php",
            data: strDatos,
            beforeSend: function (objeto) {
            }
        }).done(function (response) {
            var json = eval("(" + response + ")");
            var totalRecords = json.totalCount;
            var message = '';
            var referencia = json.data;

            if (totalRecords > 0) {
                desTipoEfecto = referencia[0].desEfecto;

            } else {
            }
        });
        return desTipoEfecto;
    }

    function obtenerImputados(cosa) {
        var imputados = "";
        for (var i = 0; i < listaImputado.length; i++) {
            if (listaImputado[i].activo == "S") {
                if (cosa == "nombre") {
                    if (listaImputado[i].tipoPersona == 1) {
                        if (imputados != "") {
                            imputados += ",";
                        }
                        imputados += "" + listaImputado[i].nombre + " " + listaImputado[i].paterno + " " + listaImputado[i].materno;
                    } else {
                        if (imputados != "") {
                            imputados += ",";
                        }
                        imputados += "" + listaImputado[i].nombreMoral;
                    }
                } else if (cosa == "domicilio") {
                    if (imputados != "") {
                        imputados += ",";
                    }
                    imputados += "" + listaImputado[i].domicilio;
                }

            }
        }
        return imputados;
    }
    function obtenerOfendidos(cosa) {
        var ofendidos = "";
        for (var i = 0; i < listaOfendido.length; i++) {
            if (listaOfendido[i].activo == "S") {
                if (cosa == "nombre") {
                    if (listaOfendido[i].tipoPersona == 1) {
                        if (ofendidos != "") {
                            ofendidos += ",";
                        }
                        ofendidos += "" + listaOfendido[i].nombre + " " + listaOfendido[i].paterno + " " + listaOfendido[i].materno;
                    } else {
                        if (ofendidos != "") {
                            ofendidos += ",";
                        }
                        ofendidos += "" + listaOfendido[i].nombreMoral;
                    }
                } else if (cosa == "domicilio") {
                    if (ofendidos != "") {
                        ofendidos += ",";
                    }
                    ofendidos += "" + listaOfendido[i].domicilio;
                }

            }
        }
        return ofendidos;
    }

    function obtenerDefensores(cosa) {
        return "pendiente"
    }
    /*      * function para limpiar imputados
     * @type type     */
    function limpiarImputado() {
        $("#hiddenIimp").val("");
        $("#btnsabeImp").show();
        $("#btnActApImp").hide();
        $("#cmbTipoPersonaImp").val("1");
        $("#divNombreMoralImp").hide();
        $("#divNombreFisicoImp").show();
        $("#cmbGeneroImp").val("1");
        $("#paternoImp").val("");
        $("#maternoImp").val("");
        $("#nombreImp").val("");
        $("#nombreMoralImp").val("");
        $("#fechaDet").val("");
        $("#divFechaDet").hide();
        $("#detenido").prop("checked", false);
        ;
    }
    /*      * function para limpiar imputados
     * @type type     */
    function limpiarDelito() {

        $("#hiddenIdel").val("");
        $("#btnsabeDel").show();
        $("#btnActApDel").hide();
        $("#cmbDelitos").val("");
    }
    /*      * function para limpiar ofendidos
     * @type type     */
    function limpiarOfendido() {
        $("#hiddenIofe").val("");
        $("#btnsabeOfe").show();
        $("#btnActApOfe").hide();
        $("#cmbTipoPersonaOfe").val("1");
        $("#divNombreMoralOfe").hide();
        $("#divNombreFisicoOfe").show();
        $("#cmbGeneroOfe").val("1");
        $("#paternoOfe").val("");
        $("#maternoOfe").val("");
        $("#nombreOfe").val("");
        $("#nombreMoralOfe").val("");
    }
    /*
     * function para seleccionar los datos del oficio     */
    function SeleccionarOficio(i) {
        var response = $("#json" + i).text();
        var sintesis = $("#sintesis" + i).text();
        var json = eval('(' + response + ')');
        //alert(json[i].aniActuacion);
        //var jsonDatos = JSON.stringify(json);
        $("#numeroOficio").val(json.numActuacion);
        $("#anioOficio").val(json.aniActuacion);
        $("#sintesisOficio").val(sintesis);
        $("#hiddenidOficio").val(json.idActuacion);
    }
    /*
     * function para seleccionar los datos de la resolucion    */
    function SeleccionarResolucion(i) {
//        $("#sintesis").val(obtenerResolucionDes(cveTipoResolucion));
        var response = $("#jsonres" + i).text();
        var sintesis = $("#sintesisres" + i).text();
        var json = eval('(' + response + ')');
        $("#sintesis").val(sintesis);
        $("#fechaRegistroRes").val(fechaMySQLaNormal(json[i].fechaRegistro));
        $("#hiddenidResolucionCombatida").val(json[i].idActuacion);
    }
    function SeleccionarResolucion2(i) {
//        $("#sintesis").val(obtenerResolucionDes(cveTipoResolucion));
        var response = $("#jsonres2" + i).text();
        var sintesis = $("#sintesisres2" + i).text();
        var json = eval('(' + response + ')');
        $("#sintesis").val(sintesis);
        $("#fechaRegistroRes").val(fechaMySQLaNormalConsulta(json[i].fechaRegistro));
        $("#hiddenidResolucionCarpetaCombatida").val(json[i].idReferencia);
    }

    imprimirRecibo = function () {
        var idReferencia = $("#hiddenidReferencia").val();
        window.open("../fachadas/sigejupe/tocastradicionales/TocastradicionalesAcuse.Class.php?idReferencia=" + idReferencia + "&accion=consultaAcuseToca", 'Reporte', '"scrollbars=1,width=800, height=1000');

    };

    function buscarRemision(idActuacion) {
        var idActuacion = idActuacion || '';
        //carga variables
        var page = $("#cmbPaginacion").val();
        var cantReg = $("#cmbNumReg").val();
        $.ajax({
            async: false,
            type: 'POST',
            url: "../fachadas/sigejupe/remisionapelaciones/RemisionapelacionesFacade.Class.php",
            data: {idActuacion: idActuacion,
                accion: 'obtenerRemisionTocaArbol'},
        }).done(function (response) {
            var json = eval('(' + response + ')');
            var totalRecords = json.totalCount;
            var message = json.mnj;
            if (json.Estatus == "ok") {
                var data = json.resultados;
                //muestra contenido en tabla
                cargarDatos(JSON.stringify(data), 0, true);
                cargarApelantes(JSON.stringify(data), 0, true);
            }
        });

    }
    /**
     * Variables varias
     */
    var titulos = {'titulo1': 'Auto de Vinculaci&oacute;n', 'titulo2': 'B&uacute;squeda', 'titulo3': 'Resultados', 'titulo4': 'Captura de Apelaci&oacute;n'};
    var cveJuzgado = $('#SysCveAdscripcion').val();
    var cveUsuarioSistema = $('#cveUsuarioSistema').val();
    var cveTipoActuacion = 5;
    var listaOfendido = [];
    var listaImputado = [];
    var listaDefensores = [];
    var listaDelito = [];
    $(function () {

//        setPermissions();

        $("#detenido").click(function () {
            if ($("#detenido").is(":checked")) {
                $("#divFechaDet").show();
            } else {
                $("#divFechaDet").hide();
                $("#fechaDet").val("");
            }
        });
        $("#colegiada").click(function () {
            if($("#colegiada").is(":checked")){
            $.alert({
                title: '<center style="color:#881518;">Aviso!</center>',
                content: '<center> Al seleccionar esta opci&oacute;n la toca se enviara a una sala colegiada <br></center>',
                confirmButton: 'Aceptar'
            });
            }
        });

        $("#cmbTipoPersonaOfe").change(function () {
            if ($("#cmbTipoPersonaOfe").val() == 1) {
                $("#divNombreMoralOfe").hide();
                $("#divNombreFisicoOfe").show();
                $("#cmbGeneroOfe").val("1");
                $("#cmbGeneroOfe").prop("disabled", false);
            } else {
                $("#cmbGeneroOfe").val("3");
                $("#cmbGeneroOfe").prop("disabled", true);
                $("#divNombreMoralOfe").show();
                $("#divNombreFisicoOfe").hide();
            }

        });
        $("#cmbTipoPersonaImp").change(function () {
            if ($("#cmbTipoPersonaImp").val() == 1) {
                $("#divNombreMoralImp").hide();
                $("#divNombreFisicoImp").show();
                $("#cmbGeneroImp").val("1");
                $("#cmbGeneroImp").prop("disabled", false);
            } else {
                $("#cmbGeneroImp").val("3");
                $("#cmbGeneroImp").prop("disabled", true);
                $("#divNombreMoralImp").show();
                $("#divNombreFisicoImp").hide();
            }

        });
        $("#cmbTipoDefensor").change(function () {
            if ($("#cmbTipoDefensor").val() == 1) {
                $("#nombreDefensor").val("REQUIERE DEFENSOR P�BLICO")
            } else {
                $("#nombreDefensor").val("")
            }

        });
        //validaciOn de teclas numEricas
        $('#input_auto_numero, #input_auto_anio, #input_auto_numero_busqueda, #input_auto_anio_busqueda, #input_auto_numerotoca, #input_auto_aniotoca').keypress(validateNumber);
        //validacion para cambio de foco en Intro
        $('#input_auto_numero').keypress(function (event) {
            changeFocus(event, 'input_auto_anio');
        });
        $('#input_auto_numero_busqueda').keypress(function (event) {
            changeFocus(event, 'input_auto_anio_busqueda');
        });
        $('#input_auto_numerotoca').keypress(function (event) {
            changeFocus(event, 'input_auto_aniotoca');
        });
        $('#input_auto_aniotoca').keypress(function (event) {
            changeFocus(event, 'select_auto_salastoca');
        });
        //calendarios para la bUsqueda
        $('#input_auto_finicial_busqueda, #input_auto_ffinal_busqueda').datepicker().on('changeDate', function (e) {
            $(this).datepicker('hide');
        });
        cargarDelitos();
        cargarTiposPersonas();
        cargarGenero();
        cargaJuzgados(); //carga los Juzgados
        cargaJuzgadosConsulta(); //carga los Juzgados
        //inicializacion del editor
        //        editor = UE.getEditor('input_auto_notas');
        //        editor.ready(function () {
        //            editor.setContent("", false);
        //        });
        $("#fechaCoTras").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY",
        });
        $('#fechaDet').datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY HH:mm",
        });
        $("#fechaNotiSeAu").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY",
        });
        $("#fechaInterRec").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY",
        });
        $("#fechaRangoInicial").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY",
        });
        $("#fechaRangoFinal").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY",
        });
        $("#fechaIntAd").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY",
        });
        //validacion de datos para el arbol

        if ($('#procedencia').val() == 1) {
            if ($('#idActuacionArbol').val() != '' && $('#idActuacionArbol').val() != 0) {
                buscarRemision($('#idActuacionArbol').val());
            }
//            else if ($('#hiddenidReferenciaArbol').val() != '' && $('#cveTipoCarpetaArbol').val() != '') { //no es de actuacion
//                obtieneDatosCarpeta();
//            }
            //$('.botonesArbol').hide();
            bloqueaCamposLlave();
            $("#btnNormal").hide();
            $("#btnArbol").show();
        }
        $("#btnOficios").click(function () {

            $("#cmbTipoResolucion").val("");
            $("#sintesis").val("");
            $("#fechaRegistroRes").val("");
            $("#cmbRecurso").val("");
            $("#hiddenidResolucionCombatida").val("");
            $("#hiddenidResolucionCarpetaCombatida").val("");
            $("#numeroOficio").val("");
            $("#anioOficio").val("");
            $("#sintesisOficio").val("");
            $("#hiddenidOficio").val("");
            var page = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var strDatos = "accion=consultarOficios";
            strDatos += "&activo=S";
            strDatos += "&cveJuzgado=" + $("#cveTipoJuzgado").val();
            strDatos += "&cveTipoCarpeta=" + $("#select_auto_carpeta").val();
            strDatos += "&numero=" + $("#numeroCausa").val();
            strDatos += "&anio=" + $("#anioCausa").val();
            strDatos += "&cveTipoActuacion=7";
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&pag=" + page;
            $.ajax({
                async: true,
                type: 'POST', global: false,
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                beforeSend: function (objeto) {
                    //limpiarCamposOficios();
                    $("#tablaImpofedel").html("");
                    var validar = true;
                    var campos = "";
                    if ($("#cveTipoJuzgado").val() == "") {
                        campos += " -el Juzgado \n";
                        validar = false;
                    }
                    if ($("#select_auto_carpeta").val() == "") {
                        campos += " -el Tipo de carpeta \n";
                        validar = false;
                    }
                    if ($("#numeroCausa").val() == "") {
                        campos += " -el Numero de causa \n";
                        validar = false;
                    }
                    if ($("#anioCausa").val() == "") {
                        campos += " -el Anio de la causa \n";
                        validar = false;
                    }
                    if (validar == false) {
                        $.alert({
                            title: '<center style="color:#881518;">Aviso!</center>',
                            content: '<center> Es necesario seleccionar <br>' + campos +' <br></center>',
                            confirmButton: 'Aceptar'
                        });
                        showMessage('No se llenaron los campos', 'warning');
                    } else {

                    }
                    if (validar) {
                        $("#conectando").show();
                    }
                    return validar
                }
            }).done(function (response) {
                var json = eval("(" + response + ")");
                var totalRecords = json.totalCount;
                var message = '';
                var tabla = '';
                tabla += "<table id='tblResultadosGridAct'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered'>";
                tabla += "<tr >";
                tabla += "<th>No.</td>";
                tabla += "<th>Tipo de Carpeta</td>";
                tabla += "<th>Sintesis</td>";
                tabla += "<th>fecha Registro</td>"
                tabla += "<th style='display:none'>json</td>"
                tabla += "<th style='display:none'>sintesis</td>"
                tabla += "</tr>";
                var sintesis = "";
                if (totalRecords > 0) {
                    var referencia = json.data;
                    for (var i = 0; i < totalRecords; i++) {
                        referencia[i].observaciones = "";
                    }
                    for (var i = 0; i < totalRecords; i++) {
                        sintesis = referencia[i].sintesis;
                        referencia[i].sintesis = "";
                        var jsonDatos = JSON.stringify(referencia[i]);
                        tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarOficio(" + i + "); '>";
                        tabla += "<td>" + (i + 1) + "</td>";
                        tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                        tabla += "<td>OFICIO:" + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "-" + sintesis + "</td>";
                        tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>"
                        tabla += "<td style='display:none' id='json" + i + "'>" + jsonDatos + "</td>"
                        tabla += "<td style='display:none' id='sintesis" + i + "'>" + sintesis + "</td>"
                        tabla += "</tr>";
                        $("#hiddenidReferencia").val(referencia[i].idReferencia);
                    }
                    tabla += "</table>";
                    $("#ContTablaOficios").html(tabla);

                    $("#conectando").hide();
                    $('#ModalOficios').modal('show');
                    //disabledFields(false, false);
                    //con esta funcion voy a cargar impofedel
                    impOfeDelTable(referencia[0].idReferencia);
                    $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden", "true").after('').append('&nbsp;Datos Encontrados.');
                } else {
                    $("#ContTablaOficios").html("No existen oficios para esta causa");
                    disabledFields(false, true);
                    if ('text' in json) {
                        message = json.text;
                    } else {
                        message = 'ERROR.';
                    }
                    $('#ModalOficios').modal('show');
                    $("#conectando").hide();
                    showMessage(message, 'information');
                    $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
                }
            });
        });
        $("#btnBuscarResolucion").click(function () {
            var page = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var strDatos = "accion=consultarActuacion";
            var cveTipoResolucion = $("#cmbTipoResolucion").val();
            var cveTipoActuacion = $("#cmbTipoResolucion option:selected").attr('cveTipoActuacion');
            strDatos += "&activo=S";
            strDatos += "&cveJuzgado=" + $("#cveTipoJuzgado").val();
            strDatos += "&cveTipoCarpeta=" + $("#select_auto_carpeta").val();
            strDatos += "&numero=" + $("#numeroCausa").val();
            strDatos += "&anio=" + $("#anioCausa").val();
            strDatos += "&cveTipoActuacion=" + cveTipoActuacion;
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&pag=" + page;
            if (cveTipoActuacion != "null") {
                if (cveTipoActuacion != 15 && cveTipoActuacion != 12) {
                    $.ajax({
                        async: false,
                        type: 'POST',
                        url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                        data: strDatos,
                        beforeSend: function (objeto) {
                            //limpiarCamposOficios();
                            //$("#tablaImpofedel").html("");
                            var validar = true;
                            var campos = "";
                            if ($("#cveTipoJuzgado").val() == "") {
                                campos += " -el Juzgado \n";
                                validar = false;
                            }
                            if ($("#select_auto_carpeta").val() == "") {
                                campos += " -el Tipo de carpeta \n";
                                validar = false;
                            }
                            if ($("#numeroCausa").val() == "") {
                                campos += " -el Numero de causa \n";
                                validar = false;
                            }
                            if ($("#anioCausa").val() == "") {
                                campos += " -el Anio de la causa \n";
                                validar = false;
                            }
                            if ($("#numeroOficio").val() == "") {
                                campos += " -el numero del oficio \n";
                                validar = false;
                            }
                            if ($("#anioOficio").val() == "") {
                                campos += " -el Anio del oficio \n";
                                validar = false;
                            }
                            if ($("#cmbTipoResolucion").val() == "") {
                                campos += " -Resolucion combatida \n";
                                validar = false;
                            }
                            if (validar == false) {
                                $.alert({
                                    title: '<center style="color:#881518;">Aviso!</center>',
                                    content: '<center> Es necesario seleccionar <br>' + campos +'<br></center>',
                                    confirmButton: 'Aceptar'
                                });
                                
                                showMessage('No se llenaron los campos', 'warning');
                            } else {

                            }
                            if (validar) {
                                $("#conectando2").show();
                            }
                            //alert(validar);
                            return validar
                        }
                    }).done(function (response) {
                        var json = eval("(" + response + ")");
                        var totalRecords = json.totalCount;

                        var message = '';
                        var tabla = '';
                        var contando = 0;
                        tabla += "<table id='tblResultadosGridAct'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered'>";
                        tabla += "<tr >";
                        tabla += "<th>No.</td>";
                        tabla += "<th>Antecede</td>";
                        tabla += "<th>Tipo</td>";
                        tabla += "<th>Sintesis</td>";
                        tabla += "<th>fecha Registro</td>"
                        tabla += "<th style='display:none'>json</td>"
                        tabla += "<th style='display:none'>sintesis</td>"
                        tabla += "</tr>";
                        var sintesis = "";
                        if (totalRecords > 0) {
                            var referencia = json.data;
                            for (var i = 0; i < totalRecords; i++) {
                                referencia[i].observaciones = "";
                            }
                            for (var i = 0; i < totalRecords; i++) {

                                sintesis = referencia[i].sintesis;
                                cveTipoActuacion = referencia[i].cveTipoActuacion;
                                referencia[i].sintesis = "";
                                if (cveTipoActuacion == 3) {
                                    if (obtenerEstatus(referencia[i].idActuacion)) {
                                        var jsonDatos = JSON.stringify(referencia);
                                        tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + i + "); '>";
                                        tabla += "<td>" + (i + 1) + "</td>";
                                        tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                        tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                        tabla += "<td>" + sintesis + "</td>";
                                        tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>";
                                        tabla += "<td style='display:none' id='jsonres" + i + "'>" + jsonDatos + "</td>";
                                        tabla += "<td style='display:none' id='sintesisres" + i + "'>" + sintesis + "</td>";
                                        tabla += "</tr>";
                                        contando++;
                                    }
                                } else if (cveTipoActuacion == 5) {
                                    if (cveTipoResolucion == 26 && referencia[i].cveTipoAuto == 2) {
                                        var jsonDatos = JSON.stringify(referencia);
                                        tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + i + "); '>";
                                        tabla += "<td>" + (i + 1) + "</td>";
                                        tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                        tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                        tabla += "<td>" + sintesis + "</td>";
                                        tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>";
                                        tabla += "<td style='display:none' id='jsonres" + i + "'>" + jsonDatos + "</td>";
                                        tabla += "<td style='display:none' id='sintesisres" + i + "'>" + sintesis + "</td>";
                                        tabla += "</tr>";
                                        contando++;
                                    }
                                    if (cveTipoResolucion == 14 && referencia[i].cveTipoAuto == 1) {
                                        var jsonDatos = JSON.stringify(referencia);
                                        tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + i + "); '>";
                                        tabla += "<td>" + (i + 1) + "</td>";
                                        tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                        tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                        tabla += "<td>" + sintesis + "</td>";
                                        tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>";
                                        tabla += "<td style='display:none' id='jsonres" + i + "'>" + jsonDatos + "</td>";
                                        tabla += "<td style='display:none' id='sintesisres" + i + "'>" + sintesis + "</td>";
                                        tabla += "</tr>";
                                        contando++;
                                    }
                                    if (cveTipoResolucion == 25 && referencia[i].cveTipoAuto == 1) {
                                        var jsonDatos = JSON.stringify(referencia);
                                        tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + i + "); '>";
                                        tabla += "<td>" + (i + 1) + "</td>";
                                        tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                        tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                        tabla += "<td>" + sintesis + "</td>";
                                        tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>";
                                        tabla += "<td style='display:none' id='jsonres" + i + "'>" + jsonDatos + "</td>";
                                        tabla += "<td style='display:none' id='sintesisres" + i + "'>" + sintesis + "</td>";
                                        tabla += "</tr>";
                                        contando++;
                                    }
                                } else {
                                    var jsonDatos = JSON.stringify(referencia);
                                    tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + i + "); '>";
                                    tabla += "<td>" + (i + 1) + "</td>";
                                    tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                    tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                    tabla += "<td>" + sintesis + "</td>";
                                    tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>";
                                    tabla += "<td style='display:none' id='jsonres" + i + "'>" + jsonDatos + "</td>";
                                    tabla += "<td style='display:none' id='sintesisres" + i + "'>" + sintesis + "</td>";
                                    tabla += "</tr>";
                                    contando++;
                                }

                            }
                            tabla += "</table>";
                            if (contando != 0) {
                                $("#ContTablaResoluciones").html(tabla);
                            } else {
                                $("#ContTablaResoluciones").html("No hay resoluciones a mostrar \n");
                            }
                            $('#ModalResoluciones').modal('show')
                            $("#conectando2").hide();
                            //disabledFields(false, false);
                            //con esta funcion voy a cargar impofedel tablaImpofedel
                            //impOfeDelTable(referencia[0].idReferencia);
                            $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden", "true").after('').append('&nbsp;Datos Encontrados.');
                        } else {
                            $("#ContTablaResoluciones").html("No hay resoluciones a mostrar");
                            disabledFields(false, true);
                            if ('text' in json) {
                                message = json.text;
                            } else {
                                message = 'ERROR.';
                            }
                            showMessage(message, 'information');
                            $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
                        }
                    });
                } else {

                    if (cveTipoActuacion == 15) {
                        strDatos = "accion=obtenerOrdenByAntecede";
                    } else if (cveTipoActuacion == 12) {
                        strDatos = "accion=obtenerCateoByAntecede";
                    }
                    var cveJuzgado = $("#cveTipoJuzgado").val().split("/");
                    strDatos += "&cveJuzgado=" + cveJuzgado[0];
                    strDatos += "&cveTipoCarpeta=" + $("#select_auto_carpeta").val();
                    strDatos += "&numero=" + $("#numeroCausa").val();
                    strDatos += "&anio=" + $("#anioCausa").val();
                    $.ajax({
                        async: false,
                        type: 'POST',
                        url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                        data: strDatos,
                        beforeSend: function (objeto) {
                            //limpiarCamposOficios();
                            //$("#tablaImpofedel").html("");
                            var validar = true;
                            var campos = "";
                            if ($("#cveTipoJuzgado").val() == "") {
                                campos += " -el Juzgado \n";
                                validar = false;
                            }
                            if ($("#select_auto_carpeta").val() == "") {
                                campos += " -el Tipo de carpeta \n";
                                validar = false;
                            }
                            if ($("#numeroCausa").val() == "") {
                                campos += " -el Numero de causa \n";
                                validar = false;
                            }
                            if ($("#anioCausa").val() == "") {
                                campos += " -el Anio de la causa \n";
                                validar = false;
                            }
                            if ($("#numeroOficio").val() == "") {
                                campos += " -el numero del oficio \n";
                                validar = false;
                            }
                            if ($("#anioOficio").val() == "") {
                                campos += " -el Anio del oficio \n";
                                validar = false;
                            }
                            if ($("#cmbTipoResolucion").val() == "") {
                                campos += " -Resolucion combatida \n";
                                validar = false;
                            }
                            if (validar == false) {
                                $.alert({
                                    title: '<center style="color:#881518;">Aviso!</center>',
                                    content: '<center> Es necesario seleccionar <br>' + campos +'<br></center>',
                                    confirmButton: 'Aceptar'
                                });
                                showMessage('No se llenaron los campos', 'warning');
                            } else {
                                $('#ModalResoluciones').modal('show')
                            }
                            //alert(validar);
                            return validar
                        }
                    }).done(function (response) {
                        var json = eval("(" + response + ")");
                        var totalRecords = json.totalCount;
                        var message = '';
                        var tabla = '';
                        var contando = 0;
                        tabla += "<table id='tblResultadosGridAct'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered'>";
                        tabla += "<tr >";
                        tabla += "<th>No.</td>";
                        tabla += "<th>Antecede</td>";
                        tabla += "<th>Tipo</td>";
                        tabla += "<th>fecha Registro</td>"
                        tabla += "</tr>";
                        var sintesis = "";
                        if (totalRecords > 0) {
                            var referencia = json.resultados;
                            for (var i = 0; i < totalRecords; i++) {
                                sintesis = referencia[i].sintesis;
                                referencia[i].sintesis = "";
                                var jsonDatos = JSON.stringify(referencia);
                                tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion2(" + i + "); '>";
                                tabla += "<td>" + (i + 1) + "</td>";
                                tabla += "<td>" + referencia[i].desTipoCarpetaPadre + "-" + referencia[i].numeroPadre + "/" + referencia[i].anioPadre + "</td>";
                                tabla += "<td>" + referencia[i].desTipoCarpeta + ": " + referencia[i].numero + "/" + referencia[i].anio + "</td>"
                                tabla += "<td>" + fechaMySQLaNormalConsulta(referencia[i].fechaRegistro) + "</td>"
                                tabla += "<td style='display:none' id='jsonres2" + i + "'>" + jsonDatos + "</td>";
                                tabla += "<td style='display:none' id='sintesisres2" + i + "'>" + sintesis + "</td>";
                                tabla += "</tr>";
                                contando++;
                            }
                            tabla += "</table>";
                            if (contando != 0) {
                                $("#ContTablaResoluciones").html(tabla);
                            } else {
                                $("#ContTablaResoluciones").html("No hay resoluciones a mostrar \n");
                            }
                            //disabledFields(false, false);
                            //con esta funcion voy a cargar impofedel tablaImpofedel
                            //impOfeDelTable(referencia[0].idReferencia);
                            $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden", "true").after('').append('&nbsp;Datos Encontrados.');

                        } else {
                            $("#ContTablaResoluciones").html("No hay resoluciones a mostrar \n");
                            disabledFields(false, true);
                            if ('text' in json) {
                                message = json.text;
                            } else {
                                message = 'ERROR.';
                            }
                            showMessage(message, 'information');
                            $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
                        }
                    });
                }
            } else {

                //mensaje no se puede
            }
        });
        fechaBaseDatos(
                {
                    fechaRangoInicial: "fecha",
                    fechaRangoFinal: "fecha"
                }
        );
        $(".numerico").keypress(function (key) {
            ////alert(key.charCode);
            //        if((key.charCode == 39 || key.charCode == 34 || key.charCode == 37|| key.charCode == 37|| key.charCode == 36|| key.charCode == 59)) return false;
            if ((key.charCode < 48 || key.charCode > 57) && (key.charCode != 0) && (key.charCode != 32))
                return false;
        });
    });
</script>