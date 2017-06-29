<?php
//ihs
if (session_status() == PHP_SESSION_NONE) {
    @session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $SysCveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
    $SysNumEmpleado = $_SESSION['numEmpleado'];
    $SysCvePerfil = $_SESSION['cvePerfil'];
    $SysCveAdscripcion = $_SESSION['cveAdscripcion'];
////POST para arbol
    $procedencia = 0;
    $idActuacionArbol = "";
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
    if (isset($_POST['cveJuzgado'])) {
      $cveJuzgadoOrigenArbol = @$_POST['cveJuzgado'];
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
        input, textarea{ resize: none; }

        .glyphicon-refresh-animate {
            -animation: spin .7s infinite linear;
            -webkit-animation: spin2 .7s infinite linear;
            -moz-animation: spin2 .7s infinite linear;
        }
        .conectando{
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
    <div class="panel panel-default" >

        <div class="panel-body">
            <input type="hidden" id="hiddencveJuzgadoOrigenArbol" value="<?php echo $cveJuzgadoOrigenArbol; ?>" >
            <input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>" >
            <input type="hidden" id="cveUsuarioSistema" value="<?= $SysCveUsuarioSistema ?>"/>
            <input type="hidden" id="SysCvePerfil" value="<?= $SysCvePerfil ?>"/>
            <input type="hidden" id="SysCveAdscripcion" value="<?= $SysCveAdscripcion ?>"/>
            <input type="hidden" id="SysNumEmpleado" value="<?= $SysNumEmpleado ?>"/>
            <input type="hidden" id="cveTipoJuzgadoAlt" name="cveTipoJuzgadoAlt"/>
            <input type="hidden" id="procedencia" name="procedencia" value="<?= $procedencia ?>" />
            <input type="hidden" id="idActuacionArbol" name="idActuacionArbol" value="<?= $idActuacionArbol ?>" /> 
            <input type="hidden" id="cveJuzgadoArbol" name="cveJuzgadoArbol" value="<?= $cveJuzgadoArbol ?>" /> 
            <input type="hidden" id="hiddenidReferenciaArbol" name="hiddenidReferenciaArbol" value="<?= $hiddenidReferencia ?>" />
            <input type="hidden" id="hiddenidReferencia" name="hiddenidReferencia" value="<?= $idReferencia ?>" />
            <input type="hidden" id="hiddenidOficio" name="hiddenidOficio" value="<?= $idOficio ?>" />
            <input type="hidden" id="hiddenidResolucionCombatida" name="hiddenidResolucionCombatida" value="<?= ""//$idResolucionCombatida                                                                   ?>" />
            <input type="hidden" id="hiddenidResolucionCarpetaCombatida" name="hiddenidResolucionCarpetaCombatida" value="<?= ""//$idResolucionCombatida                                                                   ?>" />
            <input type="hidden" id="hiddenI" name="hiddenidResolucionCombatida" value="" />

            <input type="hidden" id="cveTipoCarpetaArbol" name="cveTipoCarpetaArbol" value="<?= $cveTipoCarpetaArbol ?>" />
            <input type="hidden" id="hiddenDefensoridImputado" name="hiddenDefensoridImputado" value="" />
            <input type="hidden" id="hiddenIdRemision" name="hiddenDefensoridImputado" value="" />


            <input type="hidden" id="idActuacion" name="idActuacion" value="<?= $idActuacionArbol ?>" />
            <div id="divFormulario" class="form-horizontal" data-step="1" data-intro="Este m&oacute;dulo le permite registrar un nuevo auto de vinculaci&oacute;n a proceso, el cual puede ser modificado y/o eliminado." data-position='top'>
                <div class="panel-heading">
                    <h5 class="panel-title" id="autosTitulo">
                        Remisi&oacute;n de apelaci&oacute;n
                    </h5>
                </div>
                <br>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 " data-step="2" data-intro="La informaci&oacute;n requerida se indica con (*)." data-position='right'>Toca:</label>
                    <div class="col-md-9">
                        <div class="col-md-3">
                            <input type="text" id="numeroToca" disabled maxlength="4"  placeholder="N&uacute;mero"  val="" class="form-inline form-control numerico"  tabindex="3"/>
                        </div>
                        <div class="col-md-2">
                            <label style="text-align:center" class="control-label" data-position='right'>/</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" id="anioToca" disabled maxlength="4"  placeholder="A&Ntilde;O"  val="" class="form-inline form-control"  tabindex="3"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 "  data-step="2" data-position='right'>Tribunal:</label>
                    <div class="col-md-9">
                        <div class="col-md-9">
                            <input type="text" id="Sala" disabled maxlength="4"  val="" class="form-inline form-control col-md-7"  tabindex="3"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label for="cveTipoJuzgado" class="control-label col-md-3 needed" data-step="2" data-position='right'>Juzgado:</label>
                    <div class="col-md-9">
                        <div class="col-md-9">
                            <select class="form-control " name="cveTipoJuzgado" id="cveTipoJuzgado" onchange="cargaTipoCarpeta();"></select>
                        </div>   
                    </div>
                </div>
                <div class="form-group"> 
                    <label class="control-label col-md-3 needed">Tipo de Carpeta:</label>
                    <div class="col-md-9">
                        <div class="col-md-9">
                            <select id="select_auto_carpeta" class="form-control" tabindex="1"></select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 needed" id="label_auto_text1">No. de Causa</label>
                    <div class="col-md-9">
                        <div class="col-md-3">
                            <input type="text" id="numeroCausa" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline form-control numerico"  tabindex="2"/></div>
                        <div class="col-md-1">
                            <label style="text-align:center" class="control-label" data-position='right'>/</label>
                        </div>
                        <div class="col-md-3"><input type="text" id="anioCausa" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline form-control numerico"  tabindex="3"/></div>						
                        <div class="col-md-2">
                            <button class="btn btn-primary" id="btnOficios" data-toggle="modal" >Consultar Oficios</button>
                        </div>
                        <div class="col-md-1 conectando"  style="display:none">
                            <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i>
                        </div>

                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 " id="label_auto_text1">Oficio:</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="col-md-9">
                            <div class="col-md-3"><input type="text" id="numeroOficio" disabled maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline form-control numerico"  tabindex="2"/></div>
                            <div class="col-md-2">
                                <label style="text-align:center" class="control-label" data-position='right'>/</label>
                            </div>
                            <div class="col-md-4"><input type="text" id="anioOficio" disabled  maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline form-control numerico"  tabindex="3"/></div> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 " id="label_auto_text1">S&iacute;ntesis:</label>
                        <div class="col-md-9">
                            <div class="col-md-9">

                                <textarea rows="2" id="sintesisOficio" disabled class="form-control"  placeholder="S&Iacute;NTESIS"  val="" class="form-inline numerico"  tabindex="3"></textarea> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group"> <!-- Impofedel -->
                    <label class="control-label col-md-2 needed">Seleccione imputado y delito que se apela</label>
                    <div id="principalTablaImpofedel" class="col-md-10 ">
                        <table  class="table table-hover table-striped table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Imputado</th>
                                    <th>Condici&oacute;n en que se encuentra el imputado</th>
                                    <th>En agravio de</th>
                                    <th>Delito</th>
                                    <th>Sanciones</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="tablaImpofedel"><tbody>
                        </table>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3 needed">Tipo de Recurso:</label>
                        <div class="col-md-9">
                            <div class="col-md-4">
                                <select class="form-control" name="cmbRecurso" id="cmbRecurso">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div> 
                            <div class="form-group"> 
                                    <label class="control-label col-md-2 needed">Fecha en que se notifica la sentencia o auto recurrido:</label>
                                    <div class="col-md-3">
                                        <input type="text" id="fechaNotiSeAu" placeholder="FECHA NOTIFICA" class="form-control datepicker" value=""  />
                                    </div>
                                </div>
                            
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-3 needed">Resoluci&oacute;n combatida</label>
                            <div class="col-md-9">
                                <div class="col-md-3">
                                    <select class=" Relacionado form-control" name="cmbTipoResolucion"  onChange="activarSintesis()" id="cmbTipoResolucion">
                                        <option value="">Seleccione una opci&oacute;n</option>
                                    </select>
                                </div>
                                <div class="col-md-1"><button class=" btn btn-primary" id="btnBuscarResolucion"  data-toggle="modal" >Buscar </button></div>

                                <div class="form-group"> 
                                    <label class="control-label col-md-2 needed">Fecha en que se interpone el recurso:</label> 
                                    <div class="col-md-3">
                                        <input type="text" id="fechaInterRec" placeholder="FECHA INTERPONE" class="form-control datepicker" value=""  />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-3 " id="label_sintesis">S&iacute;ntesis de Resoluci&oacute;n Combatida:</label>
                            <div class="col-md-9">
                                <div class="col-md-4">
                                    <input type="text" disable id="sintesis" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();"  val="" class=" form-control form-inline col-md-10"/>
                                </div> 
                                <div class="form-group"> 
                                <label class="control-label col-md-2 needed">Fecha en que se corre traslado:</label>
                                <div class="col-md-3">
                                    <input type="text" id="fechaCoTras" placeholder="FECHA CORRE TRALSADO" class="form-control datepicker" value=""  />
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-3 ">Fecha Registro de Resoluci&oacute;n Combatida:</label>
                            <div class="col-md-9">
                                <div class="col-md-4">
                                    <input type="text" id="fechaRegistroRes" disabled  placeholder="FECHA REGISTRO" class="form-control datepicker" value=""  />
                                </div>

                                <div class="form-group"> 
                                    <label class="control-label col-md-2">Fecha en que se interpone la adhesi&oacute;n:</label>
                                    <div class="col-md-3">
                                        <input type="text" id="fechaIntAd" placeholder="FECHA INTERPONE" class="form-control datepicker" value=""  />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-3 needed">Efecto que se admite</label>
                            <div class="col-md-3">
                                <select class=" col-md-8 form-control" name="cmbTipoEfecto" id="cmbTipoEfecto">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div> 
                            <div class="form-group"> 
                                <label class="control-label col-md-2 needed">Agravios:</label>
                                <div class="col-md-2">
                                    <label class="radio-inline"><input type="radio" class="form-control" id="radioAgravioS" name="optradio">SI</label>
                                    <label class="radio-inline"><input checked type="radio" id="radioAgravioN" name="optradio">NO</label>
                                </div> 
                            </div>
                        </div>

                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseApelante" class="needed1" aria-expanded="true">Apelante</a>
                            </h4>
                        </div>
                        <div id="collapseApelante" class="panel-collapse collapse in" aria-expanded="true">

                            <br>
                            <div class="form-group" id="divApelante"> 
                                <div class="form-group"> 
                                    <label class="control-label col-md-3 needed">Tipo Apelante:</label>
                                    <div class="col-md-9">
                                        <div class="col-md-4">
                                            <select class=" form-control Relacionado" name="cmbTipoApelante" id="cmbTipoApelante">
                                                <option value="">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div> 
                                    </div> 
                                </div>
                                <div class="form-group"> 
                                    <label class="control-label col-md-3 needed">Tipo Persona:</label>
                                    <div class="col-md-9">
                                        <div class="col-md-4">
                                            <select class=" form-control Relacionado" name="cmbTipoPersona" id="cmbTipoPersona">
                                            </select>
                                        </div> 
                                        <div class="form-group"> 
                                            <label class="control-label col-md-2 needed">G&eacute;nero:</label>
                                            <div class="col-md-3">
                                                <select class=" form-control Relacionado" name="cmbGenero" id="cmbGenero">
                                                </select>
                                            </div> 
                                        </div>
                                    </div>
                                </div>
                                <div id="divCargarApelante" class="form-group" style="display:none" >
                                    <div class="form-group ">
                                        <label class="control-label col-md-3 "></label>
                                        <div class="col-md-9">
                                            <div id="imputadosApelante" class="col-md-9" ></div>
                                        </div>
                                    </div>

                                    <label class="control-label col-md-3"></label>
                                    <div class="col-md-9">
                                        <div id="ofendidosApelante" class="col-md-9"></div>
                                    </div>
                                </div>
                                <div id="divLlenarApelante" >
                                    <div class="form-group"> 
                                        <label class="control-label col-md-3 needed">Apelante:</label>
                                        <div class="col-md-9" id="divNombreFisico">
                                            <div class="col-md-3">
                                                <input  type="text" id="paterno"  placeholder="PATERNO"  style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();" val="" class="form-inline form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <input  type="text" id="materno"  placeholder="MATERNO" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();" val="" class="form-inline form-control"/>
                                            </div>
                                            <div class="col-md-3">
                                                <input  type="text" id="nombre"  placeholder="NOMBRE" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();" val="" class="form-inline form-control"/>
                                            </div>
                                        </div>
                                        <div class="col-md-9" id="divNombreMoral" style="display:none;">
                                            <div class="col-md-9">
                                                <input  type="text" id="nombreMoral"  placeholder="NOMBRE" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();" val="" class="form-inline form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <label class="control-label col-md-3 needed ">Domicilio:</label>
                                        <div class="col-md-9">
                                            <div class="col-md-9">
                                                <input class=" form-control" type="text" id="domicilio" placeholder="DOMICILIO" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();"  val="" class="form-inline form-control"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"> 
                                        <label class="control-label col-md-3">Correo electr&oacute;nico:</label>
                                        <div class="col-md-9">
                                            <div class="col-md-4">
                                                <input type="email" id="correoApelante" placeholder="CORREO" class="form-control" value=""  />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <div class="col-md-3"></div>
                                    <button class="col-md-2 btn btn-primary" id="btnsabe" type="submit" onclick="agregarApelante();">Agregar apelante</button>
                                    <button class="col-md-2 btn btn-primary" id="btnActAp" type="submit" style="display:none" onclick="actualizarApelante();">Guardar apelante</button>
                                    <div class="col-md-1"></div>
                                    <button class="col-md-2 btn btn-primary" id="btnLimpiarApelante" onclick="limpiarApelante();">Limpiar Apelante(s)</button>
                                </div>

                                <div class="form-group" id="listaApelantes">
                                    <label class="control-label col-md-3 needed">Lista de apelante(s)</label>
                                    <div class="col-md-9 table-responsive">
                                        <div class="col-md-9">
                                            <table class="table table-hover table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td >Nombre</td>
                                                        <td >Domicilio</td>
                                                        <td >Correo electr&oacute;nico</td>
                                                        <td ></td>
                                                    </tr>
                                                </thead>
                                                <tbody id="apelantesTbody"><tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="form-group"> 
                            <label class="control-label col-md-3 ">Emplazamiento:</label>
                            <div class="col-md-2">
                                <label class="radio-inline"><input type="radio" id="radioEmplazaminetoS" name="radioEmplazamineto">SI</label>
                                <label class="radio-inline"><input checked type="radio" id="radioEmplazaminetoN" name="radioEmplazamineto">NO</label>
                            </div> 
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-3">Observaciones:</label> 
                            <div class="col-md-9"> 
                                <div class="col-md-9">
                                    <textarea class="form-control  center" rows="5" id="observaciones"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="btnNormal">
                            <div class="col-md-offset-3 col-md-9" id="divBotones">
                                <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar un oficio." data-position='top'>                                        
                                    <input type="submit" class="btn btn-primary btn-adaptar btn_auto_save" value="Guardar" onclick="guardarRemision()" id="btn_auto_save"/>
                                </div>
                                <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" style="display:none;" id="divImprimir" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>                                        
                                    <input type="submit" class="btn btn-primary btn-adaptar" value="Imprimir" onclick="imprimirRecibo()" id="btn_imprimir"/>
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
                                    <input type="submit" class="btn btn-primary btn-adaptar btn_auto_save" value="Guardar" onclick="guardarRemision()" />
                                </div>
                                <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" id="divImprimir" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top' >                                        
                                    <input type="submit" class="btn btn-primary btn-adaptar" value="Imprimir" onclick="imprimirRecibo()" id="btn-imprimir"/>
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
        </div>
        <div id="divConsulta" style="display:none">
            <div class="panel-heading">
                <h5 class="panel-title" id="consultaTitulo">
                    Remisi&oacute;n de apelaci&oacute;n / Busqueda
                </h5>
            </div>
            <div class="panel-body">
                <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">
                <hr>
                <div class="form-horizontal">
                    <div class="form-group">
                        <label  class="control-label col-md-3">Juzgado:</label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                <select class="form-control " name="cmbTipoJuzgado" id="cmbTipoJuzgado" onchange="cargaTipoCarpeta2()"></select>
                            </div>    
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Tipo Carpeta</label>
                        <div class="col-md-9">
                            <div class="col-md-9">
                                <select id="cmbTipoCarpeta" class="form-control"><option value="0">Seleccione una opci�n</option></select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3" id="label_actam_text2">No. causa</label>
                        <div class="col-md-9">
                            <div class="col-md-4"><input type="text" id="numeroConsulta" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline form-control numerico"></div>
                            <div class="col-md-1">
                                <label style="text-align:center" class="control-label" data-position='right'>/</label>
                            </div>
                            <div class="col-md-4"><input type="text" id="anioConsulta" maxlength="4" placeholder="A&Ntilde;O" val="" class="form-inline form-control numerico"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Fecha inicio</label>
                        <div class="col-md-9">
                            <div class="col-md-4">
                                <input type="text" id="fechaRangoInicial" placeholder="dd/mm/aaaa" class="form-control fecha">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Fecha fin</label>
                        <div class="col-md-9">
                            <div class="col-md-4">
                                <input type="text" id="fechaRangoFinal" placeholder="dd/mm/aaaa" class="form-control fecha">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="form-group"> 
                    <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para consultar Remisi&oactuten;n." data-position='top'>                                        
                        <input type="submit" class="btn btn-primary btn-adaptar" value="Buscar" onclick="consultarRemision()" id=""/>
                    </div>
                    <div  class="col-md-4 conectando" style="display: none;">
                        <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i>
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
                    Remisi&oacute;n de apelaci&oacute;n / Consulta
                </h5>
            </div>
            <div class="panel-body">
                <input type="submit" class="btn btn-primary" style="float:left" value="Regresar" onclick="regresarBuscar();">
                <div class="form-group col-xs-2" style="padding: 10px">
                    <label class="control-label" id="totalReg"></label>
                </div>
                <div id="Paginacion" class="form-group col-xs-2" >
                    <label class="control-label">Cambiar a la p&aacute;gina:</label>
                    <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarRemision()">
                        <option value="1">1</option>
                    </select>
                </div>
                <div id="divPaginador" class="form-group col-xs-4" >
                    <label class="control-label">Registros por p&aacute;gina:</label>
                    <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarRemision();
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
    <div class="modal fade" id="ModalOficios" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header panel-heading" style="padding:25px 45px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="panel-title" id="h5titulo"><span ></span> Oficios</h4>
                </div>
                <div class="modal-body" style="padding:35px 60px;">
                    <div class="form-horizontal">
                        <div class="form-group col-md-13">
                            <div id="divTotalReg" class="form-group col-md-2" >
                                <label class="control-label col-md-6" id="totalRegOfi">Total de Registros: -</label>
                            </div>
                            <div id="Paginacion" class="form-group col-md-5" >
                                <label class="control-label col-md-6">Cambiar a la p&aacute;gina:</label>
                                <div class="col-md-6">
                                    <select  name="cmbPaginacionOficios" class="form-control" id="cmbPaginacionOficios" onchange="$('#btnOficios').click();">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                            </div>
                            <div id="divPaginador" class="form-group col-md-5" >
                                <label class="control-label col-md-6">Registros por p&aacute;gina:</label>
                                <div class="col-md-6">
                                    <select  name="cmbNumRegOficios" class="form-control" id="cmbNumRegOficios" onchange="$('#cmbPaginacionOficios').val(1);
                                            $('#btnOficios').click();">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                </div>
                            </div>
                            <div  class="col-md-1 conectando" style="display: none;">
                                <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i>
                            </div>
                        </div>
                        <div id="ContTablaOficios">   
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-5">
                                <input type="submit" class="btn btn-primary" onclick="cancelarOf();" value="Cancelar" data-dismiss="modal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!--Modal Resoluciones-->
    <div class="modal fade" id="ModalResoluciones" tabindex="-1" role="dialog" >
        <div class="modal-dialog">
            <div class="modal-content" >
                <div class="modal-header panel-heading" style="padding:25px 45px;">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="panel-title" id="h5titulo"><span ></span> Resoluciones</h4>
                </div>
                <div class="modal-body" style="padding:35px 60px;">
                    <div class="form-horizontal">
                        <div class="form-group col-md-13">
                            <div id="divTotalReg" class="form-group col-md-2" >
                                <label class="control-label col-md-6" id="totalRegRes">Total : </label>
                            </div>
                            <div id="Paginacion" class="form-group col-md-5" >
                                <label class="control-label col-md-6">Cambiar a la p&aacute;gina:</label>
                                <div class="col-md-6">
                                    <select  name="cmbPaginacionResol" class="form-control" id="cmbPaginacionResol" onchange="$('#btnBuscarResolucion').click();">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                            </div>
                            <div id="divPaginador" class="form-group col-md-5" >
                                <label class="control-label col-md-6">Registros por p&aacute;gina:</label>
                                <div class="col-md-6">
                                    <select  name="cmbNumRegResol" class="form-control" id="cmbNumRegResol" onchange="$('#cmbPaginacionResol').val(1);
                                            $('#btnBuscarResolucion').click();">
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                </div>
                            </div>
                            <div  class="col-md-1 conectando" style="display: none;">
                                <i class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></i>
                            </div>
                        </div>
                        <div id="ContTablaResoluciones">   
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label">&nbsp;</label>
                            <div class="col-md-5">
                                <input type="submit" class="btn btn-primary" onclick="cancelarRec();" value="Cancelar" data-dismiss="modal">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Modal Defensor-->
    <div class="modal fade" id="ModalDefensor" tabindex="-1" role="dialog" >
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
                    '<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
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
                                    if (vnombre.nomFormulario == "CARPETAS JUDICIALES") {
                                        var hijos = vnombre.hijos;
                                        $.each(hijos, function (k2, nombreHijo) {
                                            if (nombreHijo.nomFormulario == 'REMISION PARA APELACION') {
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
        function cancelarOf() {
            $("#tablaImpofedel").empty();
            $("#cmbPaginacionOficios").empty();
            $("#cmbPaginacionOficios").append("<option>1</option>");
        }
        ;
        function cancelarRec() {
            $("#cmbPaginacionResol").empty();
            $("#cmbPaginacionResol").append("<option>1</option>");
        }
        ;
        function consultarDiv() {
            $("#cmbPaginacion").val(1);
            cargaJuzgados();
            cargaTipoCarpeta2();
            $("#divFormulario").hide();
            $("#divConsulta").show();
        }
        function regresarFormulario() {
            $("#divFormulario").show();
            $("#divConsulta").hide();
            $("#divConsulta").hide();
            limpiarConsultar();
        }
        function regresarBuscar() {
            $("#cmbPaginacion").val(1);
            $("#divFormulario").hide();
            $("#divConsulta").show("slide");
            $("#divTablaConsulta").hide("slide");

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
        cargarTiposApelantes = function () {
            var strDatos = "accion=consultarOrden";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposapelantes/TiposapelantesFacade.Class.php",
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
                            $("#cmbTipoApelante").append($('<option id="cmbTipoApelante' + json.data[i].cveTipoApelante + '"></option>').val(json.data[i].cveTipoApelante).html(json.data[i].desTipoApelante));
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
                                $("#cmbTipoPersona").append($('<option id="cmbTipoPersona' + json.data[i].cveTipoPersona + '"></option>').val(json.data[i].cveTipoPersona).html(json.data[i].desTipoPersona));
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
                            $("#cmbGenero").append($('<option id="cmbGenero' + json.data[i].cveGenero + '"></option>').val(json.data[i].cveGenero).html(json.data[i].desGenero));
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
        cargarEfectos = function () {
            var strDatos = "accion=consultarOrden";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposefectos/TiposefectosFacade.Class.php",
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
                            $("#cmbTipoEfecto").append($('<option id="cmbTipoEfecto' + json.data[i].cveEfecto + '"></option>').val(json.data[i].cveEfecto).html(json.data[i].desEfecto));
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
            $("#hiddenidResolucionCombatida").val("");
            $("#hiddenidResolucionCarpetaCombatida").val("");
            var cveTipoActuacion = $("#cmbTipoResolucion option:selected").attr('cvetipoactuacion');
            if (cveTipoActuacion != "null") {
                $("#fechaRegistroRes").val("");
                $("#sintesis").val("");
                $("#btnBuscarResolucion").show();
                $("#sintesis").prop("disabled", true);
                $("#label_sintesis").removeClass("needed");
            } else {
                $("#sintesis").val("");
                $("#fechaRegistroRes").val("");
                $("#btnBuscarResolucion").hide();
                $("#sintesis").prop("disabled", false);
                $("#label_sintesis").addClass("needed");
            }
        }

        /**
         * Limpia el contenido del formulario
         */
        function cleanFields() {
            ImputadosArr = [];
            listaApelantes = [];
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
            //Apelante
            $("#cmbTipoApelante").val("");
            $("#cmbTipoPersona").val("1");
            $("#divNombreMoral").hide();
            $("#divNombreFisico").show();
            $("#cmbGenero").val("1");
            $("#paterno").val("");
            $("#materno").val("");
            $("#nombre").val("");
            $("#nombreMoral").val("");
            $("#domicilio").val("");
            $("#correoApelante").val("");

            $("#apelantesTbody").empty();
            $('#radioAgravioN').prop("checked", true); // radio name radioEmplazamineto
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
            $("#hiddenI").val("");
            $("#cveTipoCarpetaArbol").val("");
            $("#hiddenDefensoridImputado").val("");
            $("#hiddenIdRemision").val("");
            $("#idActuacion").val("");
            $("#numeroCausa").val("");
            $("#anioCausa").val("");
            $("#tablaConsulta").empty();
            $("#cmbGenero").prop("disabled", false);
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
        function limpiarCamposApelante() {
            $("#cmbTipoApelante").val("");
            $("#cmbTipoPersona").val(1);
            $("#paterno").val("");
            $("#materno").val("");
            $("#nombre").val("");
            $("#nombreMoral").val("");
            $("#divNombreMoral").hide();
            $("#divNombreFisico").show();
            $("#domicilio").val("");
            $("#correoApelante").val("");
            $("#cmbGenero").val("1");
            $("#cmbGenero").prop("disabled", false);
            $("#divCargarApelante").hide();
            $("#divLlenarApelante").show();
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
            if ($("#select_auto_carpeta").val() == "") {
                regre = false;
                mensaje += "\n-No selecciono Tipo de Carpeta \n";
            }
            if ($("#numeroCausa").val() == "" && $("#anioCausa").val() == "") {
                regre = false;
                mensaje += "-No selecciono causa \n";
            }
            if ($("#numeroOficio").val() == "" && $("#anioOficio").val() == "") {
                regre = false;
                mensaje += "-No selecciono Oficio \n";
            }
            //seleccioanr de tabla
            if ($("#tablaImpofedel").html() == "") {
                regre = false;
                mensaje += "-Falta seleccionar la relaci&oacute;n de Imputado/Delito \n";
            }
            if ($("#apelantesTbody").html() == "") {
                regre = false;
                mensaje += "-Debe agregar al menos un apelante \n";
            }
            if ($("#cmbRecurso").val() == "") {
                regre = false;
                mensaje += "-No selecciono Recurso \n";
            }
            if ($("#fechaCoTras").val() == "") {
                regre = false;
                mensaje += "-No selecciono fecha en que se corre traslado \n";
            }
            if ($("#cmbTipoResolucion").val() == "") {
                regre = false;
                mensaje += "-No selecciono tipo de resoluci&oacute;n \n";
            }
            if ($("#fechaInterRec").val() == "") {
                regre = false;
                mensaje += "-No selecciono fecha en que se interpone recurso \n";
            }

            if ($("#fechaNotiSeAu").val() == "") {
                regre = false;
                mensaje += "-No selecciono fecha en que se notifica sentencia o auto \n";
            }

            if ($("#cmbTipoEfecto").val() == "") {
                regre = false;
                mensaje += "-No selecciono Efecto \n";
            }
            if ($("#cmbTipoResolucion option:selected").attr('cvetipoactuacion') == "null") {
                if ($("#sintesis").val() == "") {
                    regre = false;
                    mensaje += "-No agrego la s&iacute;ntesis \n";
                }
            } else {
                if ($("#hiddenidResolucionCombatida").val() == "" && $("#hiddenidResolucionCarpetaCombatida").val() == "") {
                    regre = false;
                    mensaje += "-No selecciono la resoluci&oacute;n combatida \n";
                }
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
                global:false,
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
         */
        function impOfeDelTable(idReferencia) {
            var strDatos = "accion=consultarRelacionRemision";
            strDatos += "&idCarpetaJudicial=" + idReferencia;
            $.ajax({
                async: false,
                type: 'POST', 
                global: false,
                url: "../fachadas/sigejupe/impofedelcarpetas/ImpofedelcarpetasFacade.Class.php",
                data: strDatos,
            }).done(function (response) {
                var json = eval("(" + response + ")");
                var totalRecords = json.totalCount;
                var message = '';
                var tabla = '';
                var tabla2 = '';
                listaImputados = [];
                listaOfendidos = [];
                var ofendidosAux = [];
                if (totalRecords > 0) {
                    var referencia = json.resultados;
                    for (var i = 0; i < totalRecords; i++) {
                        var imputadosObj = new Object();
                        var jsonDatos = JSON.stringify(referencia);
                        tabla += "<tr >";
                        tabla += "<td rowspan=" + (parseInt(referencia[i].impofedel.length) + 1) + ">" + (i + 1) + "</td>";
                        if (referencia[i].cveTipoPersona == "1") {
                            tabla += "<td rowspan=" + (parseInt(referencia[i].impofedel.length) + 1) + ">" + referencia[i].nombre + " " + referencia[i].paterno + " " + referencia[i].materno + "</td>";
                            imputadosObj.nombre = referencia[i].nombre;
                            imputadosObj.paterno = referencia[i].paterno;
                            imputadosObj.materno = referencia[i].materno;
                        } else {
                            tabla += "<td rowspan=" + (parseInt(referencia[i].impofedel.length) + 1) + ">" + referencia[i].nombreMoral + "</td>";
                            imputadosObj.nombreMoral = referencia[i].nombreMoral;
                        }
                        imputadosObj.genero = referencia[i].cveGenero;
                        if (referencia[i].domicilio.length > 0) {
                            if (referencia[i].domicilio[0].direccion != "") {
                                imputadosObj.domicilio = referencia[i].domicilio[0].direccion;
                            } else {
                                imputadosObj.domicilio = "NO ESPECIFICADO";
                            }
                        } else {
                            imputadosObj.domicilio = "NO ESPECIFICADO";
                        }
                        imputadosObj.tipoPersona = referencia[i].cveTipoPersona;

                        if (referencia[i].email.length > 0) {
                            imputadosObj.email = referencia[i].email[0].email;
                        } else {
                            imputadosObj.email = "";
                        }
                        listaImputados.push(imputadosObj);
                        tabla += "<td rowspan=" + (parseInt(referencia[i].impofedel.length) + 1) + " >" + imputadoDetenido(referencia[i].idImputadoCarpeta);
                        +"</td>";
                        tabla += "</tr>";
                        for (var j = 0; j < referencia[i].impofedel.length; j++) {
                            if (ofendidosAux.indexOf(referencia[i].impofedel[j].idOfendidoCarpeta) == -1) {
                                var ofendidosObj = new Object();
                                ofendidosAux.push(referencia[i].impofedel[j].idOfendidoCarpeta);
                                if (referencia[i].impofedel[j].cveTipoPersona == "1") {
                                    ofendidosObj.nombre = referencia[i].impofedel[j].nombre;
                                    ofendidosObj.paterno = referencia[i].impofedel[j].paterno;
                                    ofendidosObj.materno = referencia[i].impofedel[j].materno;
                                } else {
                                    ofendidosObj.nombreMoral = referencia[i].impofedel[j].nombreMoral;
                                }

                                ofendidosObj.genero = referencia[i].impofedel[j].cveGenero;
                                if (referencia[i].impofedel[j].domicilios.length > 0) {
                                    if(referencia[i].impofedel[j].domicilios[0].direccion != ""){
                                        ofendidosObj.domicilio = referencia[i].impofedel[j].domicilios[0].direccion;
                                    }else{
                                        ofendidosObj.domicilio = "NO ESPECIFICADO";
                                    }
                                } else {
                                    ofendidosObj.domicilio = "NO ESPECIFICADO";
                                }
                                ofendidosObj.tipoPersona = referencia[i].impofedel[j].cveTipoPersona;
                                if (referencia[i].impofedel[j].email.length > 0) {
                                    ofendidosObj.email = referencia[i].impofedel[j].email[0].email;
                                } else {
                                    ofendidosObj.email = "";
                                }
                                listaOfendidos.push(ofendidosObj);
                            }
                            tabla += "<tr>";
                            if (referencia[i].impofedel[j].cveTipoPersona == "1") {
                                tabla += "<td>" + referencia[i].impofedel[j].nombre + " " + referencia[i].paterno + " " + referencia[i].materno + "</td>";
                            } else {
                                tabla += "<td>" + referencia[i].impofedel[j].nombreMoral + "</td>";
                            }
                            tabla += "<td>" + referencia[i].impofedel[j].desDelito + "</td>";
                            tabla += "<td>" + imputadoSancion(referencia[i].impofedel[j].idImpOfeDelCarpeta);
                            tabla += "<td><label><input type='checkbox' checked='checked' class='impofedelCheck' onclick='aparecerDefensor(" + referencia[i].impofedel[j].idImpOfeDelCarpeta + "," + referencia[i].idImputadoCarpeta + ");' id='checkIm" + referencia[i].impofedel[j].idImpOfeDelCarpeta + "' value='" + referencia[i].impofedel[j].idImpOfeDelCarpeta + "' idImputado='" + referencia[i].idImputadoCarpeta + "' idRemisionApelacionImp=''></label></td>";
                            tabla += "</tr>";
                        }

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
            var strDatos = "accion=seleccionarsanciones";
            strDatos += "&cveTipoSancion=" + tipoSancion;
            var desSancion = "";
            $.ajax({
                async: false,
                global:false,
                type: 'POST',
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
        function imputadoDetenido(idImputado) {

            //            if (ImputadosArr.indexOf(idImputado) == -1) {
            //                ImputadosArr.push(idImputado);
            var strDatos = "accion=consultar";
            strDatos += "&idImputadoCarpeta=" + idImputado;
            var tabla = "";
            var detenido = "";
            $.ajax({
                async: false,
                type: 'POST', 
                global: false,
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
                            tabla = "<select class='form-control' onchange='mostrarFechaDetencion(" + idImputado + ")' name='cmbDetenido" + idImputado + "' id='cmbDetenido" + idImputado + "'>" +
                                    "<option value='1' selected>PRISION</option> " +
                                    "<option value='2'>LIBRE</option> " +
                                    "</select>" +
                                    "<div  id='divFechaDet" + idImputado + "'><label class='needed'>Fecha de detencion</label><input type='text' placeholder='dd/mm/aaaa' disabled   id='fechaDet" + idImputado + "' value='" + fechaMySQLaNormalConsulta(referencia[0].fechaControlDet) + "'  class='form-control'></div>";
                        } else {
                            tabla = "<select class='form-control form-inline' onchange='mostrarFechaDetencion(" + idImputado + ")' name='cmbDetenido" + idImputado + "' id='cmbDetenido" + idImputado + "'>" +
                                    "<option value='1' selected>PRISION</option> " +
                                    "<option value='2'>LIBRE</option> " +
                                    "</select><div  id='divFechaDet" + idImputado + "'><label class='needed'>Fecha de detencion</label><input type='text' placeholder='dd/mm/aaaa'   id='fechaDet" + idImputado + "'  class='form-control datepicker fecha fechaDet validFecDet'></div>";

                        }

                    } else {
                        tabla = "<select  class='form-control'  onchange='mostrarFechaDetencion(" + idImputado + ")' name='cmbDetenido" + idImputado + "' id='cmbDetenido" + idImputado + "'>" +
                                "<option value='1'>PRISION</option> " +
                                "<option value='2' selected>LIBRE</option> " +
                                "</select><div hidden  id='divFechaDet" + idImputado + "'><label class='needed'>Fecha de detencion</label><input class='validFecDet form-inline' placeholder='dd/mm/aaaa' type='text'  id='fechaDet" + idImputado + "' ></div>";
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

        function mostrarFechaDetencion(idImputado) {
            if ($("#cmbDetenido" + idImputado).val() == 1) {
                $("#divFechaDet" + idImputado).show();
                $("#fechaDet" + idImputado).prop("disabled", false);
                $("#fechaDet" + idImputado).datetimepicker({
                    sideBySide: false,
                    locale: 'es',
                    format: "DD/MM/YYYY HH:MM",
                });
            } else {
                $("#fechaDet" + idImputado).val("");
                $("#divFechaDet" + idImputado).hide();
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
                cveConsignacion = $("#cmbDetenido" + idImputado).val();
                fechaDetencion = $("#fechaDet" + idImputado).val();
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
         * FunciOn para eliminar los registros de la tabla -tblautosimputados-      * @param {integer} idActuacion ID de la actuaciOn
         * @param {json} info Objeto con la informaciOn de ImputadosCarpeta
         */
        function calcularConsignacion() {
            var validaS = false;
            var validaN = false;
            var validaG = false;
            var consignacion = 1;

            var impofedelList = getImpofedel('checked');
            for (var i = 0; i < impofedelList.length; i++) {
                if ($("#cmbDetenido" + impofedelList[i].idImpOfeDel).val() == "2") {
                    validaS = true;
                }
                if ($("#cmbDetenido" + impofedelList[i].idImpOfeDel).val() == "1") {
                    validaN = true;
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
        function consultarRemision() {
            $("#tablaConsulta").html("");

            var cantReg = $("#cmbNumReg").val();
            var strDatos = "accion=consultarRemision";
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
                url: "../fachadas/sigejupe/remisionapelaciones/RemisionapelacionesFacade.Class.php",
                data: strDatos,
            }).done(function (response) {
                var json = eval('(' + response + ')');
                var totalRecords = json.totalCount;
                var message = json.mnj;
                if (json.Estatus == "ok") {
                    if (totalRecords > 0) {
                        var tabla = "<table id='tblResultadosGridAct2'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered table-responsive dataTable no-footer'>";
                        tabla += "<thead><tr>";
                        tabla += "<td>No.</td><td>Toca</td><td>Causa</td><td>Remisi&oacute;n</td><td>S&iacute;ntesis</td><td>Fecha registro</td>";
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
                            tabla += "<tr style='cursor: pointer;' onclick='cargarDatos(" + JSON.stringify(data) + "," + i + ",false); cargarApelantes(" + JSON.stringify(data) + "," + i + ",false)'>";
                            tabla += "<td > " + (i + 1) + "</td>";
                            tabla += "<td > " + data[i].toca[0].numeroC + "/" + data[i].toca[0].anioC + "</td>";
                            tabla += "<td > " + data[i].causa[0].numeroC + "/" + data[i].causa[0].anioC + " - " + obtenerTipoCarpeta(data[i].causa[0].cveTipoCarpeta) + "</td>";
                            tabla += "<td > " + data[i].causa[0].numeroRemision + "/" + data[i].causa[0].anioRemision + "</td>";
                            //meter numeroRemision a un array y validar si ya esta en el array no lo usas
                            tabla += "<td > " + data[i].causa[0].sintesis + "</td>";

                            tabla += "<td > " + fechaMySQLaNormalConsulta(data[i].causa[0].fechaRegistro) + "</td>";
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
            var strDatos = "accion=getPaginasRemision";
            strDatos += "&paginacion=true";
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            strDatos += "&cveJuzgado=" + $("#cmbTipoJuzgado").val().split("/")[0];
            strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            strDatos += "&numero=" + $("#numeroConsulta").val();
            strDatos += "&anio=" + $("#anioConsulta").val();
            strDatos += "&fechaInicial=" + $("#fechaRangoInicial").val();
            strDatos += "&fechaFinal=" + $("#fechaRangoFinal").val();
            $.ajax({
                async: false,
                type: 'POST',
                url: "../fachadas/sigejupe/remisionapelaciones/RemisionapelacionesFacade.Class.php",
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

            //alert(json.causa[i].cvejuzgadoC+"/"+json.causa[i].cveTipoCarpetaC);
            var tipo = "";
            if (json[i].causa[0].cveTipoCarpetaC < 3) {
                tipo = 1;
            } else if (json[i].causa[0].cveTipoCarpetaC == 4) {
                tipo = 4;
            } else if (json[i].causa[0].cveTipoCarpetaC == 5) {
                tipo = 3;
            } else if (json[i].causa[0].cveTipoCarpetaC == 3) {
                tipo = 2;
            }

            $("#numeroToca").val(json[i].toca[0].numeroC);
            $("#anioToca").val(json[i].toca[0].anioC);
            $("#cveTipoJuzgado").val(json[i].causa[0].cvejuzgadoC + "/" + tipo);
            
            $("#select_auto_carpeta").val(json[i].causa[0].cveTipoCarpetaC);
            $("#numeroCausa").val(json[i].causa[0].numeroC);
            $("#anioCausa").val(json[i].causa[0].anioC);
            var oficio = buscarOficio(json[i].causa[0].idOficio);
            $("#numeroOficio").val(oficio[0]);
            $("#anioOficio").val(oficio[1]);
            var sintesisOficio = $("<div/>").html(oficio[2]).text()
            $("#sintesisOficio").val(sintesisOficio);
            $("#hiddenidOficio").val(json[i].causa[0].idOficio);
            $("#Sala").val(obtenerJuzgado(json[i].toca[0].cvejuzgadoC));
            $("#cmbRecurso").val(json[i].causa[0].cveRecurso);
            $("#fechaCoTras").val(fechaNormal(json[i].causa[0].fecTraslado));
            $("#cmbTipoResolucion").val(json[i].causa[0].cveCatResolucionCombatida);
            $("#hiddenidResolucionCombatida").val(json[i].causa[0].idResolucionCombatida);
            $("#hiddenidResolucionCarpetaCombatida").val(json[i].causa[0].idResolucionesCarpetasCombatidas);
            $("#fechaInterRec").val(fechaNormal(json[i].causa[0].fecInterponeRecurso));
            $("#sintesis").val(json[i].causa[0].sintesis);
            $("#observaciones").val(json[i].causa[0].observaciones);
            $("#fechaNotiSeAu").val(fechaNormal(json[i].causa[0].fecNotifica));
            var fechaReg = "";
            if (json[i].toca[0].idResolucionCombatida != "") {
                fechaReg = obtenerResolucionCombatidaFecha(json[i].toca[0].idResolucionCombatida);
            }
            $("#fechaRegistroRes").val(fechaMySQLaNormalConsulta(fechaReg));
            $("#fechaIntAd").val(fechaNormal(json[i].causa[0].fecAdhesion));
            $("#cmbTipoEfecto").val(json[i].causa[0].cveEfecto);
            $("#radioAgravio" + json[i].causa[0].agravios).prop("checked", true);
            $("#radioEmplazamineto" + json[i].causa[0].emplazamiento).prop("checked", true);
            $("#hiddenIdRemision").val(json[i].causa[0].idRemisionApelacion);
            $("#idActuacion").val(json[i].causa[0].idActuacion);
            $("#hiddenidReferencia").val(json[i].causa[0].idReferencia);
            impOfeDelTable(json[i].causa[0].idReferencia);
            seleccionarImpofedel(json[i].impofedel);
            $("#divFormulario :input").each(function () {
                $(this).prop("disabled", true);
            });
            $("#divBotones :input").each(function () {
                $(this).prop("disabled", false);
            });
            $(".btnElimApel").hide();
            $("#divFormulario").show();
            $("#divConsulta").hide();
            $("#btn-imprimir").prop("disabled", false);
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
            var strDatos = "accion=consultarOficiosRemision";
            strDatos += "&activo=S";
            strDatos += "&idActuacion=" + idOficio;
            strDatos += "&cantxPag=10";
            strDatos += "&pag=1";
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
        function guardarRemision() {         //campos de captura de Remision
            //varibles de control
            $.confirm({
            title: '<center style="color:#881518;">Advertencia!</center>',
            content: ' <center>Estas seguro que quieres enviar los datos? al enviar los datos no podras realizar modificaciones </center>',
            confirmButton: 'Aceptar',
            cancelButton: 'Cancelar',
            animation: 'top',
            closeAnimation: 'bottom',
            confirm: function () {
                var idActuacion = $('#idActuacion').val() > 0 ? $('#idActuacion').val() : '';
                var idRemisionApelacion = $("#hiddenIdRemision").val();
                var idResolucionCombatida = $("#hiddenidResolucionCombatida").val();
                var idResolucionCarpetaCombatida = $("#hiddenidResolucionCarpetaCombatida").val();
                var cveCatResolucionCombatida = $("#cmbTipoResolucion").val();
                var numActuacion = 0;
                var aniActuacion = 0;
                var cveTipoActuacion = 32;
                var idReferencia = $("#hiddenidReferencia").val();
                var numero = $("#numeroCausa").val();
                var anio = $("#anioCausa").val();
                var cveTipoCarpeta = $("#select_auto_carpeta").val();
                var cveJuzgado = $('#cveTipoJuzgado').val();
                cveJuzgado = cveJuzgado.split('/');
                cveJuzgado = cveJuzgado[0];
                var sintesis = $("#sintesis").val().toUpperCase(); //autoResolucion; verificar que sintesis utilizar
                var observaciones = $('#observaciones').val();
                var cveUsuario = $('#cveUsuarioSistema').val();
                var activo = 'S';

                var listaImpofedel = getImpofedel('checked');
                var stringImpofedel = getImpofedel('string');

                var otraResolucionCombatida = "";
                //var apelaciones = Apelaciones.apelacion;
                var accion = '';
                if (idActuacion == '') {
                    //es insercion
                    accion = 'guardaRemisionApelacion';
                } else {
                    //es actualizacion
                    accion = 'actualizarRemisionApelacion';
                }
                if (idResolucionCombatida == "") {
                    otraResolucionCombatida = sintesis;
                }

                var listaImpofedelEnv = JSON.stringify(listaImpofedel);
                var listaApelantesEnv = JSON.stringify(listaApelantes);
                var listaDefensoresEnv = JSON.stringify(listaDefensores);
                var stringImpofedelEnv = JSON.stringify(stringImpofedel);
                var remisionState = validateFields();
                //validaciOn de los check
                var imputadosState = validateChecks();
                var imputadosFechas = validateDate();
                //alert(imputadosState);
                var cveRegion = $("#cveTipoJuzgado").attr("cveregion");
                if (imputadosState == true && remisionState[0] == true && imputadosFechas == true) {
                    if (obtenerActuacionesRemisiones(idResolucionCombatida, idResolucionCarpetaCombatida) == "true") {

                        $.ajax({
                            async: false,
                            type: 'POST',
                            url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                            data: {idOficio: $("#hiddenidOficio").val(), idResolucionCombatida: idResolucionCombatida,
                                cveRecurso: $("#cmbRecurso").val(), cveEfecto: $("#cmbTipoEfecto").val(), agravios: agravioSeleccionado("normal"),
                                emplazamiento: emplazamientoSeleccionado(), FecCorreTraslado: $("#fechaCoTras").val(), FechaIntAd: $("#fechaIntAd").val(), FecInterponeRecurso: $("#fechaInterRec").val()
                                , FecNotificaSenAut: $("#fechaNotiSeAu").val(), cveConsignacion: calcularConsignacion(), cveUsuario: $('#cveUsuarioSistema').val(), idActuacion: idActuacion
                                , idRemisionApelacion: idRemisionApelacion, cveTipoActuacion: cveTipoActuacion, idReferencia: idReferencia, numero: numero, anio: anio
                                , cveTipoCarpeta: cveTipoCarpeta, cveCatResolucionCombatida: cveCatResolucionCombatida, observaciones: observaciones, cveUsuario:cveUsuario, activo: activo, accion: accion
                                , cveJuzgado: cveJuzgado, sintesis: sintesis, otraResolucionCombatida: otraResolucionCombatida, listaImpofedel: listaImpofedelEnv, listaApelantes: listaApelantesEnv
                                , listaDefensores: listaDefensoresEnv, stringImpofedel: stringImpofedelEnv, idResolucionCarpetaCombatida: idResolucionCarpetaCombatida, cveRegion: cveRegion
                            },
                        }).done(function (response) {
                            var json = eval('(' + response + ')');
                            var totalRecords = json.totalCount;
                            var message = json.msj;

                            if (json.status == "Ok") {
                                $("#numeroToca").val(json.resultados.numero);
                                $("#anioToca").val(json.resultados.anio);
                                $("#Sala").val(obtenerJuzgado(json.resultados.cveJuzgado));
                                $("#idActuacion").val(json.resultados.idActuacion);
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
                        message = "Ya existe una remisi&oacute;n para la resoluci&oacute;n a combatir seleccionada";
                        showMessage(message, 'information');
                    }

                } else {
                    $(".btn_auto_save").show();
                    $("#divImprimir").hide();
                    var message = 'A&Uacute;N QUEDAN CAMPOS VACIOS:<br/>';
                    if (!imputadosState) {
                        message += '- ELEGIR AL MENOS UN IMPUTADO/DELITO <br/>';
                    }
                    if (!imputadosFechas) {
                        message += '- SELECCIONE FECHA DE DETENCI&Oacute;N <br/>';
                    }
                    if (!remisionState[0]) {
                        message += remisionState[1];
                    }
                    message += 'VERIFIQUE.';
                    showMessage(message, 'information');
                }
            },
            cancel: function () {
               
            }
        });
           
            return;

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
        //    cargaJuzgados = function () {
        //        var strDatos = "accion=distrito";
        //        $.ajax({
        //            type: "POST",
        //            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
        //            data: strDatos,
        //            async: false,
        //            dataType: "html",
        //            success: function (datos) {
        //                var json = "";
        //                json = eval("(" + datos + ")");
        //                if (json.totalCount > 0) {
        //                    $("#cveTipoJuzgado, #cmbTipoJuzgado").empty().append('<option value="">Seleccione una opci&oacute;n</option>');
        //                    for (var i = 0; i < json.totalCount; i++) {
        //                        if (json.data[i].cveTipojuzgado <= 4) {
        //                            $("#cveTipoJuzgado, #cmbTipoJuzgado").append($('<option ></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
        //                        }
        //                    }
        //                } else {
        //                    $("#cveTipoJuzgado, #cmbTipoJuzgado").empty().append('<option value="">Sin registros</option>');
        //                }
        //                cargaTipoCarpeta();
        //            },
        //            error: function (objeto, quepaso, otroobj) {
        //                showMessage("Error en la peticion:\n\n" + quepaso, 'error');
        //            }
        //        });
        //    };

        function validarEmail(email) {
            var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!expr.test(email)) {
                return false;
            } else {
                return true;
            }
        }
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
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
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
                            if (json.data[i].cveInstancia == instancia) {
                        if (cveJuzgado == json.data[i].cveJuzgado) {
                            $("#cveTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                $("#cmbTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");

                                $("#cveTipoJuzgado").attr("cveregion", json.data[i].cveRegion);
                        }
                     } else {
                        $(".btn_auto_save").parent().hide();
                        $("#btn_auto_clean").parent().hide();
                     }
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
                                case "1": // tipo de juzgado de control
                                    if (json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "2": // tipo de juzgado juicio
                                    if (json.data[i].cveTipoCarpeta == "3") { // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "3": // tipo de juzgado ejecucion
                                    if (json.data[i].cveTipoCarpeta == "5") { // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "4": // tipo de juzgado tribunal
                                    if (json.data[i].cveTipoCarpeta == "4") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "5":
                                    if (json.data[i].cveTipoCarpeta == "5") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#select_auto_carpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                default:

                                    if (json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "5" || json.data[i].cveTipoCarpeta == "3" || json.data[i].cveTipoCarpeta == "2") {
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
            var tipoJuzgado = $("#cmbTipoJuzgado").val().split("/");
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
                                        $(" #cmbTicmbTipoCarpetapoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "4": // tipo de juzgado tribunal
                                    if (json.data[i].cveTipoCarpeta == "4") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $(" #cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "5":
                                    break;
                                default:
                                    if (json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "5" || json.data[i].cveTipoCarpeta == "3" || json.data[i].cveTipoCarpeta == "2") {
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
            var hiddenidReferencia = $('#hiddenidReferencia').val();
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
         * function para formar Tabla de apelantes a partir de una lista de arrays
         * @type type     */
        function formarTablaApelantes(bandera) {

            var tabla = " ";
            for (var i = 0; i < listaApelantes.length; i++) {
                if (listaApelantes[i].activo == "S") {
                    tabla += "<tr onclick='cargarApelanteEditar(" + i + ")'>";
                    if (listaApelantes[i].tipoPersona == 1) {
                        tabla += "<td>" + listaApelantes[i].nombre + " " + listaApelantes[i].paterno + " " + listaApelantes[i].materno + "</td>";
                    } else {
                        tabla += "<td>" + listaApelantes[i].nombreMoral + "</td>";
                    }
                    tabla += "<td>" + listaApelantes[i].domicilio + "</td>";
                    tabla += "<td>" + listaApelantes[i].correo + "</td>";
                    if (bandera) {
                        tabla += "<td><img src='img/eliminar.png' width='27px' style='cursor:pointer;' class='btnElimApel' onclick='eliminarApelante(" + i + ")'></td>";
                    } else {
                        tabla += "<td></td>";
                    }
                    tabla += "</tr>";
                }
            }

            return tabla;
        }
        function cargarApelanteEditar(i) {
            $("#cmbTipoApelante").val(listaApelantes[i].tipoApelante);
            $("#cmbTipoPersona").val(listaApelantes[i].tipoPersona);
            $("#cmbGenero").val(listaApelantes[i].genero);
            $("#hiddenI").val(i);
            if ($("#cmbTipoPersona").val() == 1) {
                $("#nombre").val(listaApelantes[i].nombre);
                $("#paterno").val(listaApelantes[i].paterno);
                $("#materno").val(listaApelantes[i].materno);
                $("#divNombreMoral").hide();
                $("#divNombreFisico").show();
            } else {
                $("#cmbGenero").prop("disabled", true);
                $("#nombreMoral").val(listaApelantes[i].nombreMoral);
                $("#divNombreMoral").show();
                $("#divNombreFisico").hide();
            }

            $("#domicilio").val(listaApelantes[i].domicilio);
            $("#correoApelante").val(listaApelantes[i].correo);
            $("#btnActAp").show();
            $("#btnsabe").hide();
        }
        function actualizarApelante() {
            var mensaje = "";
            var nombre = true;
            var correo = true;
            if ($("#cmbTipoPersona").val() == "1") {
                if ($("#paterno").val().trim() == "") {
                    nombre = false;
                } else if ($("#materno").val().trim() == "") {
                    nombre = false;
                } else if ($("#nombre").val().trim() == "") {
                    nombre = false;
                }
            } else {
                if ($("#nombreMoral").val().trim() == "") {
                    nombre = false;
                }
            }
            if ($("#correoApelante").val() != "") {
                var email = $("#correoApelante").val();
                correo = validarEmail(email);
            }
            if ($("#cmbTipoApelante").val() != "" && $("#domicilio").val() != "" && nombre && correo) {
                var i = $("#hiddenI").val();
                listaApelantes[i].tipoApelante = $("#cmbTipoApelante").val();
                listaApelantes[i].tipoPersona = $("#cmbTipoPersona").val();
                listaApelantes[i].genero = $("#cmbGenero").val();
                listaApelantes[i].idApelanteCarpeta = listaApelantes[i].idApelanteCarpeta;
                listaApelantes[i].activo = "S";
                if ($("#cmbTipoPersona").val() == 1) {
                    listaApelantes[i].nombre = $("#nombre").val().toUpperCase();
                    listaApelantes[i].paterno = $("#paterno").val().toUpperCase();
                    listaApelantes[i].materno = $("#materno").val().toUpperCase();
                } else {
                    listaApelantes[i].nombreMoral = $("#nombreMoral").val().toUpperCase();
                }
                listaApelantes[i].domicilio = $("#domicilio").val().toUpperCase();
                listaApelantes[i].correo = $("#correoApelante").val();
                $("#apelantesTbody").html(formarTablaApelantes(true));
                $("#btnsabe").show();
                $("#btnActAp").hide();
                limpiarApelante();
            } else {
                var mensaje = "";
                if ($("#cmbTipoApelante").val() == "") {
                    mensaje += "- Debe seleccionar Tipo de Apelante \n";
                }
                if ($("#domicilio").val() == "") {
                    mensaje += " Debe seleccionar Domicilio \n";
                }
                if (!nombre) {
                    mensaje += " Debe Agregar el nombre (paterno,materno) \n";
                }
                if (!correo) {
                    mensaje += " Debe Usar un formato valido para el correo \n";
                }
                alert(mensaje);
            }

        }
        function eliminarApelante(id) {
            if (listaApelantes[id].idApelanteCarpeta != "") {
                listaApelantes[id].activo = "N";
                if (listaApelantes[id].imp) {
                    llenarListaImputado(id);
                } else if (listaApelantes[id].ofend) {
                    llenarListaOfendido(id);
                }
                $("#apelantesTbody").html(formarTablaApelantes(true));
            } else {
                if (listaApelantes[id].imp) {
                    llenarListaImputado(id);
                } else if (listaApelantes[id].ofend) {
                    llenarListaOfendido(id);
                }
                listaApelantes.splice(id, 1);
                $("#apelantesTbody").html(formarTablaApelantes(true));
            }
            limpiarApelante();
        }
        // esta funcion agrega los datos que se van a eliminar de apelantes para volver a mostrarlos a apelantes
        function llenarListaImputado(id) {
            var imputadosObj = new Object();
            if (listaApelantes[id].tipoPersona == "1") {
                imputadosObj.nombre = listaApelantes[id].nombre;
                imputadosObj.paterno = listaApelantes[id].paterno;
                imputadosObj.materno = listaApelantes[id].materno;
            } else {
                imputadosObj.nombreMoral = listaApelantes[id].nombreMoral;
            }
            imputadosObj.genero = listaApelantes[id].genero;
            imputadosObj.domicilio = listaApelantes[id].domicilio;
            imputadosObj.tipoPersona = listaApelantes[id].tipoPersona;
            imputadosObj.email = listaApelantes[id].correo;
            listaImputados.push(imputadosObj);
        }
        // esta funcion agrega los datos que se van a eliminar de apelantes para volver a mostrarlos para agregar en apelantes
        function llenarListaOfendido(id) {
            var ofendidosObj = new Object();
            if (listaApelantes[id].tipoPersona == "1") {
                ofendidosObj.nombre = listaApelantes[id].nombre;
                ofendidosObj.paterno = listaApelantes[id].paterno;
                ofendidosObj.materno = listaApelantes[id].materno;
            } else {
                ofendidosObj.nombreMoral = listaApelantes[id].nombreMoral;
            }

            ofendidosObj.genero = listaApelantes[id].genero;
            ofendidosObj.domicilio = listaApelantes[id].domicilio;
            ofendidosObj.tipoPersona = listaApelantes[id].tipoPersona;
            ofendidosObj.email = listaApelantes[id].correo;
            listaOfendidos.push(ofendidosObj);
        }
        /*
         * function para Agregar apelantes a un array para mostrar en la vista
         * @type type     */
        function agregarApelante() {
            var mensaje = "";
            var nombre = true;
            var correo = true;
            if ($("#cmbTipoApelante").val() == 14 || $("#cmbTipoApelante").val() == 12 || $("#cmbTipoApelante").val() == 1 || $("#cmbTipoApelante").val() == 2 || $("#cmbTipoApelante").val() == 18 || $("#cmbTipoApelante").val() == 20) {

                if ($("#cmbTipoApelante").val() == 2) {
                    var indicesArr = [];
                    var cont = 0;
                    $.each($('.ofendidosCheck'), function (k, v) {
                        if ($(this).prop('checked') == true) {
                            var indice = $(this).val();
                            indicesArr.push(indice);
                            var apelantesArray = new Object();
                            apelantesArray.tipoApelante = $("#cmbTipoApelante").val();
                            apelantesArray.tipoPersona = listaOfendidos[indice].tipoPersona;
                            apelantesArray.genero = listaOfendidos[indice].genero;
                            apelantesArray.idApelanteCarpeta = "";
                            apelantesArray.activo = "S";
                            apelantesArray.ofend = "S";
                            if (listaOfendidos[indice].tipoPersona == 1) {
                                apelantesArray.nombre = listaOfendidos[indice].nombre;
                                apelantesArray.paterno = listaOfendidos[indice].paterno;
                                apelantesArray.materno = listaOfendidos[indice].materno;
                            } else {
                                apelantesArray.nombreMoral = listaOfendidos[indice].nombreMoral;
                            }
                            apelantesArray.domicilio = listaOfendidos[indice].domicilio;
                            apelantesArray.correo = listaOfendidos[indice].email;
                            
                            listaApelantes.push(apelantesArray);
                            $("#apelantesTbody").html(formarTablaApelantes(true));
                            var indiceAux = indicesArr.reverse();

                            for (var i = 0; i < indiceAux.length; i++) {

                                listaOfendidos.splice(indiceAux[i], 1);
                            }
                            limpiarCamposApelante();
                            cont++;
                        }

                    });
                } else {
                    var cont = 0;
                    var indicesArr = [];
                    var tipoApelante = $("#cmbTipoApelante").val()
                    $.each($('.imputadosCheck'), function (k, v) {
                        if ($(this).prop('checked')) {
                            var indice = $(this).val();
                            indicesArr.push(indice);
                            var apelantesArray = new Object();
                            apelantesArray.tipoApelante = tipoApelante;
                            apelantesArray.tipoPersona = listaImputados[indice].tipoPersona;
                            apelantesArray.genero = listaImputados[indice].genero;
                            apelantesArray.idApelanteCarpeta = "";
                            apelantesArray.activo = "S";
                            apelantesArray.imp = "S";
                            if (listaImputados[indice].tipoPersona == 1) {
                                apelantesArray.nombre = listaImputados[indice].nombre;
                                apelantesArray.paterno = listaImputados[indice].paterno;
                                apelantesArray.materno = listaImputados[indice].materno;
                            } else {
                                apelantesArray.nombreMoral = listaImputados[indice].nombreMoral;
                            }
                            apelantesArray.domicilio = listaImputados[indice].domicilio;
                            apelantesArray.correo = listaImputados[indice].email;
                            listaApelantes.push(apelantesArray);
                            $("#apelantesTbody").html(formarTablaApelantes(true));
                            limpiarCamposApelante();
                            cont++;
                        }

                    });

                    var indiceAux = indicesArr.reverse();
                    for (var i = 0; i < indiceAux.length; i++) {
                        listaImputados.splice(indiceAux[i], 1);
                    }
                    console.log(cont);
                    if (cont > 0) {
                        cargarApelanteImputado();
                    } else {
                        alert("Debe seleccionar al menos un apelante");
                    }

                }

            } else {
                if ($("#cmbTipoPersona").val() == "1") {
                    if ($("#paterno").val().trim() == "") {
                        nombre = false;
                    } else if ($("#materno").val().trim() == "") {
                        nombre = false;
                    } else if ($("#nombre").val().trim() == "") {
                        nombre = false;
                    }
                } else {
                    if ($("#nombreMoral").val().trim() == "") {
                        nombre = false;
                    }
                }
                if ($("#correoApelante").val() != "") {
                    var email = $("#correoApelante").val();
                    correo = validarEmail(email);
                }
                if ($("#cmbTipoApelante").val() != "" && $("#domicilio").val() != "" && nombre && correo) {

                    var apelantesArray = new Object();
                    apelantesArray.tipoApelante = $("#cmbTipoApelante").val();
                    apelantesArray.tipoPersona = $("#cmbTipoPersona").val();
                    apelantesArray.genero = $("#cmbGenero").val();
                    apelantesArray.idApelanteCarpeta = "";
                    apelantesArray.activo = "S";
                    if ($("#cmbTipoPersona").val() == 1) {
                        apelantesArray.nombre = $("#nombre").val().toUpperCase();
                        apelantesArray.paterno = $("#paterno").val().toUpperCase();
                        apelantesArray.materno = $("#materno").val().toUpperCase();
                    } else {
                        apelantesArray.nombreMoral = $("#nombreMoral").val().toUpperCase();
                    }
                    apelantesArray.domicilio = $("#domicilio").val().toUpperCase();
                    apelantesArray.correo = $("#correoApelante").val();
                    listaApelantes.push(apelantesArray);
                    $("#apelantesTbody").html(formarTablaApelantes(true));
                    limpiarCamposApelante();


                } else {
                    var mensaje = "";
                    if ($("#cmbTipoApelante").val() == "") {
                        mensaje += "- Debe seleccionar Tipo de Apelante \n";
                    }
                    if ($("#domicilio").val() == "") {
                        mensaje += " Debe seleccionar Domicilio \n";
                    }
                    if (!nombre) {
                        mensaje += " Debe Agregar el nombre (paterno,materno) \n";
                    }
                    if (!correo) {
                        mensaje += " Debe Usar un formato valido para el correo \n";
                    }
                    alert(mensaje);
                }


            }
        }

        function cargarApelantes(json, i, bandera) {
            listaApelantes = [];
            if (bandera) {
                json = $.parseJSON(json);
            }
            for (var j = 0; j < json[i].apelante[0].totalCount; j++) {
                var apelantesArray = new Object();
                apelantesArray.tipoApelante = json[i].apelante[0].resultados[j].cveTipoApelante;
                apelantesArray.tipoPersona = json[i].apelante[0].resultados[j].cveTipoPersona;
                apelantesArray.genero = json[i].apelante[0].resultados[j].cveGenero;
                apelantesArray.idApelanteCarpeta = json[i].apelante[0].resultados[j].idApelanteCarpeta;
                apelantesArray.activo = json[i].apelante[0].resultados[j].activo;
                if (json[i].apelante[0].resultados[j].cveTipoPersona == 1) {
                    apelantesArray.nombre = json[i].apelante[0].resultados[j].nombre;
                    apelantesArray.paterno = json[i].apelante[0].resultados[j].paterno;
                    apelantesArray.materno = json[i].apelante[0].resultados[j].materno;
                } else {
                    apelantesArray.nombreMoral = json[i].apelante[0].resultados[j].nombreMoral;
                }
                apelantesArray.domicilio = json[i].apelante[0].resultados[j].domicilio;
                apelantesArray.correo = json[i].apelante[0].resultados[j].email;
                listaApelantes.push(apelantesArray);

            }
            $("#apelantesTbody").html(formarTablaApelantes(bandera));
        }

        function cargarApelanteImputado() {
            var tabla = "";
            tabla += "<table id='tblResultadosGridAct'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered'>";
            tabla += "<tr><th>Nombre</th><th>Domicilio</th><th>Correo</th><th></th></tr>"
            if (listaImputados.length > 0) {
                for (var i = 0; i < listaImputados.length; i++) {
                    tabla += "<tr>";
                    if (listaImputados[i].tipoPersona == "1") {
                        tabla += "<td>" + listaImputados[i].nombre + " " + listaImputados[i].paterno + " " + listaImputados[i].materno + "</td>";
                    } else {
                        tabla += "<td>" + listaImputados[i].nombreMoral + "</td>";
                    }
                    tabla += "<td>" + listaImputados[i].domicilio + "</td>";
                    tabla += "<td>" + listaImputados[i].email + "</td>";
                    tabla += "<td><input type='checkbox' class='imputadosCheck' id='apelanteImp" + i + "' value='" + i + "'></td>";
                    tabla += "</tr>";
                }
            } else {
                tabla += "<tr>";
                tabla += "<td colspan='4'> No hay imputados a mostrar</td>";
                tabla += "</tr>";
            }
            tabla += "</table>";
            $("#imputadosApelante").html(tabla);
        }
        function cargarApelanteOfendido() {
            var tabla = "";
            tabla += "<table id='tblResultadosGridAct'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered'>";
            tabla += "<tr><th>Nombre</th><th>Domicilio</th><th>Correo</th><th></th></tr>"
            if (listaOfendidos.length > 0) {
                for (var i = 0; i < listaOfendidos.length; i++) {
                    tabla += "<tr>";
                    if (listaOfendidos[i].tipoPersona == "1") {

                        tabla += "<td>" + listaOfendidos[i].nombre + " " + listaOfendidos[i].paterno + " " + listaOfendidos[i].materno + "</td>";
                    } else {
                        tabla += "<td>" + listaOfendidos[i].nombreMoral + "</td>";
                    }
                    tabla += "<td>" + listaOfendidos[i].domicilio + "</td>";
                    tabla += "<td>" + listaOfendidos[i].email + "</td>";
                    tabla += "<td><input type='checkbox' class='ofendidosCheck' id='apelanteImp" + i + "' value='" + i + "'></td>";
                    tabla += "</tr>";
                }
            } else {
                tabla += "<tr>";
                tabla += "<td colspan='4'> No hay ofendidos a mostrar</td>";
                tabla += "</tr>";
            }
            tabla += "</table>";
            $("#ofendidosApelante").html(tabla);
        }
        function guardarApelanteImputado(json, i, bandera) {
            listaApelantes = [];
            if (bandera) {
                json = $.parseJSON(json);
            }
            for (var j = 0; j < json[i].apelante[0].totalCount; j++) {
                var apelantesArray = new Object();
                apelantesArray.tipoApelante = json[i].apelante[0].resultados[j].cveTipoApelante;
                apelantesArray.tipoPersona = json[i].apelante[0].resultados[j].cveTipoPersona;
                apelantesArray.genero = json[i].apelante[0].resultados[j].cveGenero;
                apelantesArray.idApelanteCarpeta = json[i].apelante[0].resultados[j].idApelanteCarpeta;
                apelantesArray.activo = json[i].apelante[0].resultados[j].activo;
                if (json[i].apelante[0].resultados[j].cveTipoPersona == 1) {
                    apelantesArray.nombre = json[i].apelante[0].resultados[j].nombre;
                    apelantesArray.paterno = json[i].apelante[0].resultados[j].paterno;
                    apelantesArray.materno = json[i].apelante[0].resultados[j].materno;
                } else {
                    apelantesArray.nombreMoral = json[i].apelante[0].resultados[j].nombreMoral;
                }
                apelantesArray.domicilio = json[i].apelante[0].resultados[j].domicilio;
                apelantesArray.correo = json[i].apelante[0].resultados[j].email;
                listaApelantes.push(apelantesArray);

            }
            $("#apelantesTbody").html(formarTablaApelantes(bandera));
        }
        function guardarApelanteOfendido(json, i, bandera) {
            listaApelantes = [];
            if (bandera) {
                json = $.parseJSON(json);
            }
            for (var j = 0; j < json[i].apelante[0].totalCount; j++) {
                var apelantesArray = new Object();
                apelantesArray.tipoApelante = json[i].apelante[0].resultados[j].cveTipoApelante;
                apelantesArray.tipoPersona = json[i].apelante[0].resultados[j].cveTipoPersona;
                apelantesArray.genero = json[i].apelante[0].resultados[j].cveGenero;
                apelantesArray.idApelanteCarpeta = json[i].apelante[0].resultados[j].idApelanteCarpeta;
                apelantesArray.activo = json[i].apelante[0].resultados[j].activo;
                if (json[i].apelante[0].resultados[j].cveTipoPersona == 1) {
                    apelantesArray.nombre = json[i].apelante[0].resultados[j].nombre;
                    apelantesArray.paterno = json[i].apelante[0].resultados[j].paterno;
                    apelantesArray.materno = json[i].apelante[0].resultados[j].materno;
                } else {
                    apelantesArray.nombreMoral = json[i].apelante[0].resultados[j].nombreMoral;
                }
                apelantesArray.domicilio = json[i].apelante[0].resultados[j].domicilio;
                apelantesArray.correo = json[i].apelante[0].resultados[j].email;
                listaApelantes.push(apelantesArray);

            }
            $("#apelantesTbody").html(formarTablaApelantes(bandera));
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

        function obtenerApelantes(cosa) {
            var apelantes = "";
            for (var i = 0; i < listaApelantes.length; i++) {
                if (listaApelantes[i].activo == "S") {
                    if (cosa == "nombre") {
                        if (listaApelantes[i].tipoPersona == 1) {
                            if (apelantes != "") {
                                apelantes += ",";
                            }
                            apelantes += "" + listaApelantes[i].nombre + " " + listaApelantes[i].paterno + " " + listaApelantes[i].materno;
                        } else {
                            if (apelantes != "") {
                                apelantes += ",";
                            }
                            apelantes += "" + listaApelantes[i].nombreMoral;
                        }
                    } else if (cosa == "domicilio") {
                        if (apelantes != "") {
                            apelantes += ",";
                        }
                        apelantes += "" + listaApelantes[i].domicilio;
                    }

                }
            }
            return apelantes;
        }

        function obtenerDefensores(cosa) {
            return "pendiente"
        }

        // funcion para cargar datos cuando se llena desde arbol
        consultaRem = function (idReferencia, cveTipoCarpeta) {

            $(".required").remove();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    idCarpetaJudicial: idReferencia,
                    cveTipoCarpeta: cveTipoCarpeta,
                    activo: 'S',
                    accion: 'consultar'
                },
                success: function (data) {
                    if (data.totalCount > 0) {
                        var actuacion = data.data;
                        $("#numeroCausa").val(actuacion[0].numero);
                        $("#anioCausa").val(actuacion[0].anio);
                        if (actuacion[0].cveTipoCarpeta < 3) {
                            tipo = 1;
                        } else if (actuacion[0].cveTipoCarpeta == 4) {
                            tipo = 4;
                        } else if (actuacion[0].cveTipoCarpeta == 5) {
                            tipo = 3;
                        } else if (actuacion[0].cveTipoCarpeta == 3) {
                            tipo = 2;
                        }
                        $("#cveTipoJuzgado").val(actuacion[0].cveJuzgado + "/" + tipo);
                        var tipo = "";

                        $("#select_auto_carpeta").val(actuacion[0].cveTipoCarpeta);

                    }
                }

            });
            $("#registro").html("Registro de Exhortos Generados");
        };
        /*      * function para limpiar apelantes 
         * @type type     */
        function limpiarApelante() {
            $("#hiddenI").val("");
            $("#btnsabe").show();
            $("#btnActAp").hide();
            $("#cmbTipoApelante").val("");
            $("#cmbTipoPersona").val("1");
            $("#divNombreMoral").hide();
            $("#divNombreFisico").show();
            $("#cmbGenero").val("1");
            $("#paterno").val("");
            $("#materno").val("");
            $("#nombre").val("");
            $("#nombreMoral").val("");
            $("#domicilio").val("");
            $("#correoApelante").val("");
            $("#divCargarApelante").hide();
            $("#divLlenarApelante").show();
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
            var idActuacion = $("#idActuacion").val();
            window.open("../fachadas/sigejupe/remisionapelaciones/RemisionapelacionesAcuse.Class.php?idActuacion=" + idActuacion + "&accion=consultaAcuseRemisionCausa", 'Reporte', '"scrollbars=1,width=800, height=1000');

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
                    accion: 'obtenerRemisionCausaArbol'},
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
        var listaApelantes = [];
        var listaImputados = [];
        var listaOfendidos = [];
        var ImputadosArr = [];
        var listaDefensores = [];
        var instancia = "";
        
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
//            setPermissions();
            $("#cmbTipoApelante").change(function () {
                if ($("#cmbTipoApelante").val() == 14 || $("#cmbTipoApelante").val() == 12 || $("#cmbTipoApelante").val() == 1 || $("#cmbTipoApelante").val() == 2 || $("#cmbTipoApelante").val() == 18 || $("#cmbTipoApelante").val() == 20) {

                    if ($("#cmbTipoApelante").val() == 2) {
                        $("#ofendidosApelante").html("");
                        $("#imputadosApelante").html("");
                        cargarApelanteOfendido();
                    } else {
                        $("#ofendidosApelante").html("");
                        $("#imputadosApelante").html("");
                        cargarApelanteImputado();
                    }

                    $("#divCargarApelante").show();
                    $("#divLlenarApelante").hide();
                } else {
                    $("#divCargarApelante").hide();
                    $("#divLlenarApelante").show();
                }
            });

            $("#cmbTipoPersona").change(function () {
                if ($("#cmbTipoPersona").val() == 1) {
                    $("#divNombreMoral").hide();
                    $("#divNombreFisico").show();
                    $("#cmbGenero").val("1");
                    $("#cmbGenero").prop("disabled", false);
                } else {
                    $("#cmbGenero").val("3");
                    $("#cmbGenero").prop("disabled", true);
                    $("#divNombreMoral").show();
                    $("#divNombreFisico").hide();
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
            cargarEfectos();
            cargarRecursos();
            cargarTiposResoluciones();
            cargarTiposPersonas();
            cargarGenero();
            cargarTiposDefensores();
            cargarTiposApelantes();
            cargaJuzgados(); //carga los Juzgados
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
                }else{
                    $("#cveTipoJuzgado").val($("#cveJuzgadoArbol").val());
                }
                bloqueaCamposLlave();
                $("#btnNormal").hide();
                $("#btnArbol").show();
            }
            $("#btnOficios").click(function () {
                ImputadosArr = [];
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
                var strDatos = "accion=consultarOficiosRemision";
                strDatos += "&activo=S";
                strDatos += "&cveJuzgado=" + $("#cveTipoJuzgado").val();
                strDatos += "&cveTipoCarpeta=" + $("#select_auto_carpeta").val();
                strDatos += "&numero=" + $("#numeroCausa").val();
                strDatos += "&anio=" + $("#anioCausa").val();
                strDatos += "&cveTipoActuacion=7";
                strDatos += "&cantxPag=" + $("#cmbNumRegOficios").val();
                strDatos += "&pag=" + $("#cmbPaginacionOficios").val();
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
                            alert("Es necesario seleccionar \n" + campos);
                            showMessage('No se llenaron los campos', 'warning');
                        } else {

                        }
                        if (validar) {
                            $(".conectando").show();
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
                    tabla += "<th>S&iacute;ntesis</td>";
                    tabla += "<th>Fecha Registro</td>"
                    tabla += "<th style='display:none'>json</td>"
                    tabla += "<th style='display:none'>s&iacute;ntesis</td>"
                    tabla += "</tr>";
                    var sintesis = "";
                    if (totalRecords > 0) {
                        var referencia = json.data;
                        for (var i = 0; i < totalRecords; i++) {
                            referencia[i].observaciones = "";
                        }
                        var numReg = $("#cmbNumRegOficios").val();
                        var index = (parseInt(json.pagina) - 1) * parseInt(numReg);

                        for (var i = 0; i < totalRecords; i++) {
                            sintesis = referencia[i].sintesis;
                            referencia[i].sintesis = "";
                            var jsonDatos = JSON.stringify(referencia[i]);
//                            if (referencia[i].Usado == "true") {
//                                tabla += "<tr  class='success'>";
//                            } else {
                                tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarOficio(" + i + "); '>";
//                            }
                            tabla += "<td>" + (index + 1) + "</td>";
                            tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                            tabla += "<td>OFICIO:" + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "-" + sintesis + "</td>";
                            tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>"
                            tabla += "<td style='display:none' id='json" + i + "'>" + jsonDatos + "</td>"
                            tabla += "<td style='display:none' id='sintesis" + i + "'>" + sintesis + "</td>"
                            tabla += "</tr>";
                            $("#hiddenidReferencia").val(referencia[i].idReferencia);
                            index++;
                        }
                        tabla += "</table>";
                        $("#ContTablaOficios").html(tabla);

                        $(".conectando").hide();
                        $('#ModalOficios').modal('show');
                        //disabledFields(false, false);
                        //con esta funcion voy a cargar impofedel
                        impOfeDelTable(referencia[0].idReferencia);
                        $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden", "true").after('').append('&nbsp;Datos Encontrados.');
                        $('#cmbPaginacionOficios').empty();

                        for (var n = 1; n <= json.totalPag; n++) {

                            $('#cmbPaginacionOficios').append("<option value='" + n + "'>" + n + "</option>");
                            if (n == json.pagina) {
                                $("#cmbPaginacionOficios option[value='" + n + "']").attr("selected", "selected");
                            }
                        }
                        $("#totalRegOfi").html("Total: " + json.totalReg);

                    } else {
                        $("#ContTablaOficios").html("No existen oficios para esta causa");
                        cancelarOf();
                        disabledFields(false, true);
                        if ('text' in json) {
                            message = json.text;
                        } else {
                            message = 'ERROR.';
                        }
                        $('#ModalOficios').modal('show');
                        $(".conectando").hide();
                        showMessage(message, 'information');
                        $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
                    }
                });
            });
            $("#btnBuscarResolucion").click(function () {
                var page = $("#cmbPaginacionResol").val();
                var cantReg = $("#cmbNumRegResol").val();
                var strDatos = "accion=consultarActuacionRemision";
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
                                    campos += " -resoluci&oacute;n combatida \n";
                                    validar = false;
                                }
                                if (validar == false) {
                                    alert("Es necesario seleccionar \n" + campos);
                                    showMessage('No se llenaron los campos', 'warning');
                                } else {

                                }
                                if (validar) {
                                    $(".conectando2").show();
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
                            tabla += "<th>Fecha Registro</td>"
                            tabla += "<th style='display:none'>json</td>"
                            tabla += "<th style='display:none'>sintesis</td>"
                            tabla += "</tr>";
                            var sintesis = "";
                            if (totalRecords > 0) {
                                var referencia = json.data;
                                for (var i = 0; i < totalRecords; i++) {
                                    referencia[i].observaciones = "";
                                }
                                var numReg = $("#cmbNumRegOficios").val();
                                var index = (parseInt(json.pagina) - 1) * parseInt(numReg);
                                for (var i = 0; i < totalRecords; i++) {

                                    sintesis = referencia[i].sintesis;
                                    cveTipoActuacion = referencia[i].cveTipoActuacion;
                                    referencia[i].sintesis = "";
                                    if (cveTipoActuacion == 3) {
                                        if (obtenerEstatus(referencia[i].idActuacion)) {
                                            var jsonDatos = JSON.stringify(referencia);
                                            tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + i + "); '>";
                                            tabla += "<td>" + (index + 1) + "</td>";
                                            tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                            tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                            tabla += "<td>" + sintesis + "</td>";
                                            tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>";
                                            tabla += "<td style='display:none' id='jsonres" + i + "'>" + jsonDatos + "</td>";
                                            tabla += "<td style='display:none' id='sintesisres" + i + "'>" + sintesis + "</td>";
                                            tabla += "</tr>";
                                            contando++;
                                            index++;
                                        }
                                    } else if (cveTipoActuacion == 5) {
                                        if (cveTipoResolucion == 26 && referencia[i].cveTipoAuto == 2) {
                                            var jsonDatos = JSON.stringify(referencia);
                                            tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + i + "); '>";
                                            tabla += "<td>" + (index + 1) + "</td>";
                                            tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                            tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                            tabla += "<td>" + sintesis + "</td>";
                                            tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>";
                                            tabla += "<td style='display:none' id='jsonres" + i + "'>" + jsonDatos + "</td>";
                                            tabla += "<td style='display:none' id='sintesisres" + i + "'>" + sintesis + "</td>";
                                            tabla += "</tr>";
                                            contando++;
                                            index++;
                                        }
                                        if (cveTipoResolucion == 14 && referencia[i].cveTipoAuto == 1) {
                                            var jsonDatos = JSON.stringify(referencia);
                                            tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + i + "); '>";
                                            tabla += "<td>" + (index + 1) + "</td>";
                                            tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                            tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                            tabla += "<td>" + sintesis + "</td>";
                                            tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>";
                                            tabla += "<td style='display:none' id='jsonres" + i + "'>" + jsonDatos + "</td>";
                                            tabla += "<td style='display:none' id='sintesisres" + i + "'>" + sintesis + "</td>";
                                            tabla += "</tr>";
                                            contando++;
                                            index++;
                                        }
                                        if (cveTipoResolucion == 25 && referencia[i].cveTipoAuto == 1) {
                                            var jsonDatos = JSON.stringify(referencia);
                                            tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + i + "); '>";
                                            tabla += "<td>" + (index + 1) + "</td>";
                                            tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                            tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                            tabla += "<td>" + sintesis + "</td>";
                                            tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>";
                                            tabla += "<td style='display:none' id='jsonres" + i + "'>" + jsonDatos + "</td>";
                                            tabla += "<td style='display:none' id='sintesisres" + i + "'>" + sintesis + "</td>";
                                            tabla += "</tr>";
                                            contando++;
                                            index++;
                                        }
                                    } else {
                                        var jsonDatos = JSON.stringify(referencia);
                                        tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion(" + i + "); '>";
                                        tabla += "<td>" + (index + 1) + "</td>";
                                        tabla += "<td>" + referencia[i].descTipoCarpeta + "-" + referencia[i].numero + "/" + referencia[i].anio + "</td>";
                                        tabla += "<td>" + obtenerTipoActuacion(referencia[i].cveTipoActuacion) + ": " + referencia[i].numActuacion + "/" + referencia[i].aniActuacion + "</td>"
                                        tabla += "<td>" + sintesis + "</td>";
                                        tabla += "<td>" + fechaMySQLaNormal(referencia[i].fechaRegistro) + "</td>";
                                        tabla += "<td style='display:none' id='jsonres" + i + "'>" + jsonDatos + "</td>";
                                        tabla += "<td style='display:none' id='sintesisres" + i + "'>" + sintesis + "</td>";
                                        tabla += "</tr>";
                                        contando++;
                                        index++;
                                    }

                                }
                                tabla += "</table>";
                                if (contando != 0) {
                                    $("#ContTablaResoluciones").html(tabla);
                                } else {
                                    $("#ContTablaResoluciones").html("No hay resoluciones a mostrar \n");
                                }
                                $('#ModalResoluciones').modal('show');
                                $(".conectando2").hide();
                                //disabledFields(false, false);
                                //con esta funcion voy a cargar impofedel tablaImpofedel
                                //impOfeDelTable(referencia[0].idReferencia);
                                $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden", "true").after('').append('&nbsp;Datos Encontrados.');
                                for (var n = 1; n <= json.totalPag; n++) {

                                    $('#cmbPaginacionResol').append("<option value='" + n + "'>" + n + "</option>");
                                    if (n == json.pagina) {
                                        $("#cmbPaginacionResol option[value='" + n + "']").attr("selected", "selected");
                                    }
                                }
                                $("#totalRegRes").html("Total: " + json.totalReg);
                            } else {
                                $("#ContTablaResoluciones").html("No hay resoluciones a mostrar");
                                $('#ModalResoluciones').modal('show');
                                cancelarRec();
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
                                    campos += " -resoluci&oacute;n combatida \n";
                                    validar = false;
                                }
                                if (validar == false) {
                                    alert("Es necesario seleccionar \n" + campos);
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
                                var numReg = $("#cmbNumRegOficios").val();
//                                var index = (parseInt(json.pagina) - 1) * parseInt(numReg);
                                for (var i = 0; i < totalRecords; i++) {
                                    sintesis = referencia[i].sintesis;
                                    referencia[i].sintesis = "N/A";
                                    var jsonDatos = JSON.stringify(referencia);
                                    tabla += "<tr style='cursor: pointer;' data-dismiss='modal' onclick='SeleccionarResolucion2(" + i + "); '>";
//                                    tabla += "<td>" + (index + 1) + "</td>";
                                    tabla += "<td>" + (i + 1) + "</td>";
                                    tabla += "<td>" + referencia[i].desTipoCarpetaPadre + "-" + referencia[i].numeroPadre + "/" + referencia[i].anioPadre + "</td>";
                                    tabla += "<td>" + referencia[i].desTipoCarpeta + ": " + referencia[i].numero + "/" + referencia[i].anio + "</td>"
                                    tabla += "<td>" + fechaMySQLaNormalConsulta(referencia[i].fechaRegistro) + "</td>"
                                    tabla += "<td style='display:none' id='jsonres2" + i + "'>" + jsonDatos + "</td>";
                                    tabla += "<td style='display:none' id='sintesisres2" + i + "'>" + referencia[i].sintesis + "</td>";
                                    tabla += "</tr>";
                                    contando++;
//                                    index++;
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
                                for (var n = 1; n <= json.totalPag; n++) {

                                    $('#cmbPaginacionResol').append("<option value='" + n + "'>" + n + "</option>");
                                    if (n == json.pagina) {
                                        $("#cmbPaginacionResol option[value='" + n + "']").attr("selected", "selected");
                                    }
                                }

                                $("#totalRegRes").html("Total: " + json.totalCount);
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
                    alert("no se puede");
                    //mensaje no se puede
                }
            });
            fechaBaseDatos(
                    {
                        fechaRangoInicial: "fecha",
                        fechaRangoFinal: "fecha"
                    }
            );
            $(".numerico").validaCampo('0123456789');
        });
    </script>
    <?php
    if (isset($_POST['idReferencia'])) {
        $idReferencia = @$_POST['idReferencia'];
        $cveJuzgado = @$_POST['cveJuzgado'];
        $cveTipoCarpeta = @$_POST['cveTipoCarpeta'];
        ?>
        <script languaje="javascript">
            consultaRem(<?php echo $idReferencia ?>,<?php echo $cveTipoCarpeta ?>);
            $("#inputLimpiarG").hide();
            $("#inputLimpiar3").hide();
            $("#inputConsultar").hide();
            $("#inputLimpiarArbol").show();
        </script> 
    <?php }
    ?>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>