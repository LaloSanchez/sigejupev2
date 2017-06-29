<?php
//ihs
if (session_status() == PHP_SESSION_NONE) {
    @session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $SysCveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
    $SysCvePerfil = $_SESSION['cvePerfil'];
    $SysCveAdscripcion = $_SESSION['cveAdscripcion'];

    $procedencia = 0;
    $idActuacionArbol = ( isset($_POST['idActuacion']) ? @$_POST['idActuacion'] : '' );
    $idCarpetaJudicialArbol = ( isset($_POST['idReferencia']) ? @$_POST['idReferencia'] : '' );
    $cveTipoCarpetaArbol = ( isset($_POST['cveTipoCarpeta']) ? @$_POST['cveTipoCarpeta'] : '' );
    if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") || ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "")) {
        $idActuacionArbol = ( ($idActuacionArbol != 0 && $idActuacionArbol != "") ? $idActuacionArbol : 0 );
        $idCarpetaJudicialArbol = ( ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") ? $idCarpetaJudicialArbol : 0 );
        $cveTipoCarpetaArbol = ( ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "") ? $cveTipoCarpetaArbol : 0 );
        $procedencia = 1; // viene de arbol
    } else if ($idCarpetaJudicialArbol == "" && $cveTipoCarpetaArbol == 0 && $cveTipoCarpetaArbol != "") {
        $procedencia = 1; // viene de arbol el formulario general
    }
    $origen = ( isset($_GET['origen']) && $_GET['origen'] != "" ) ? $_GET['origen'] : "";
    $juzgadoOrigenArbol = ( isset($_POST['juzgadoOrigenArbol']) && $_POST['juzgadoOrigenArbol'] != "" ) ? $_POST['juzgadoOrigenArbol'] : "";
    ?>
    <link type="text/css" href="css/actuaciones.css" rel="stylesheet" />
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="medidasCautelaresTitulo">
                Medidas Cautelares
            </h5>
        </div>
        <div class="panel-body">
            <input type="hidden" id="SysCveUsuarioSistema" value="<?= $SysCveUsuarioSistema ?>"/> <!-- hidden -->
            <input type="hidden" id="SysCvePerfil" value="<?= $SysCvePerfil ?>"/> <!-- hidden -->
            <input type="hidden" id="SysCveAdscripcion" value="<?= $SysCveAdscripcion ?>"/>
            <input type="hidden" id="cveTipoJuzgadoAlt" name="cveTipoJuzgadoAlt"/>
            <input type="hidden" id="idActuacion" name="idActuacion" value="<?= $idActuacionArbol ?>" />
            <input type="hidden" id="procedencia" name="procedencia" value="<?= $procedencia ?>" />
            <!-- <input type="hidden" id="idActuacionArbol" name="idActuacionArbol" value="<?= $idActuacionArbol ?>" /> -->
            <input type="hidden" id="idCarpetaJudicialArbol" name="idCarpetaJudicialArbol" value="<?= $idCarpetaJudicialArbol ?>" />
            <input type="hidden" id="cveTipoCarpetaArbol" name="cveTipoCarpetaArbol" value="<?= $cveTipoCarpetaArbol ?>" />
            <input type="hidden" id="origen" value="<?php echo $origen; ?>" />
            <input type="hidden" id="juzgadoOrigenArbol" value="<?php echo $juzgadoOrigenArbol; ?>" />
            
            <div id="divFormulario" class="form-horizontal" data-step="1" data-intro="Este m&oacute;dulo le permite registrar una nueva medida cautelar, el cual puede ser modificado y/o eliminado." data-position='left'>
                <div class="form-group">                                                                
                    <label for="cveTipoJuzgado" class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'>Juzgado:</label>
                    <div class="col-md-9">
                        <select class="form-control " name="cveTipoJuzgado" id="cveTipoJuzgado" onchange="cargaTipoCarpeta();"></select>
                    </div>                                
                </div>
                <div class="form-group"> 
                    <label class="control-label col-md-3 needed">Relacionado con</label>
                    <div class="col-md-9">
                        <select id="select_mcautelares_carpeta" class="form-control" tabindex="1"></select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 needed" id="label_mcautelares_text1">No. de </label>
                    <div class="col-md-9">
                        <input type="text" id="input_mcautelares_numero" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline"  tabindex="2"/>
                        /
                        <input type="text" id="input_mcautelares_anio" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline"  tabindex="3"/>
                        &nbsp;
                        <button class="btn btn-primary" id="btn_buscaCarpeta">Buscar imputado(s)</button>
                        &nbsp;&nbsp;
                        <span id="resultadoBusquedaActuacion" class="glyphicon"></span>
                    </div>
                </div>
                <div class="form-group"> <!-- ResoluciOn -->
                    <div class="form-group"> <!-- Notificaciones -->
                        <div id="divAdvertencia_imputados" class="alert alert-warning alert-dismissable col-xs-12 col-sm-12 col-md-12" style="display: none">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong id="strAdvertencia"></strong> 
                        </div>
                        <div id="divCorrecto_imputados" class="alert alert-success alert-dismissable col-xs-12 col-sm-12 col-md-12" style="display: none">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong id="strCorrecto"></strong> 
                        </div>
                        <div id="divError_imputados" class="alert alert-danger alert-dismissable col-xs-12 col-sm-12 col-md-12" style="display: none">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong id="strError"></strong>
                        </div>
                        <div id="divInformacion_imputados" class="alert alert-info alert-dismissable col-xs-12 col-sm-12 col-md-12" style="display: none">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong id="strInformacion"></strong>
                        </div>
                    </div>
                    <label class="control-label col-md-3 needed">S&iacute;ntesis</label>
                    <div class="col-md-9">
                        <input type="text" id="input_mcautelares_sintesis" maxlength="300" placeholder="INGRESE LA S&Iacute;NTESIS" class="form-control" style="text-transform:uppercase;" tabindex="4"/>
                    </div>
                </div>
                <div class="form-group"> <!-- Notificacion -->
                    <label class="control-label col-md-3 needed">Tipo de notificaci&oacute;n</label>
                    <div class="col-md-9">
                        <select id="select_mcautelares_notificacion" class="form-control" tabindex="5"></select>
                    </div>
                </div>
                <div class="form-group"> <!-- Imputados -->
                    <label class="control-label col-md-3 needed">Imputado(s)</label>
                    <div class="col-md-9 table-responsive">
                        <!-- inicio acorderon -->
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        </div>
                        <!-- fin acordeon -->
                    </div>
                </div>			
                <div class="form-group">
                    <label class="control-label col-md-3 needed">Contenido del documento</label>
                    <div class="col-md-9">
                        <script id="input_mcautelares_observaciones" type="text/plain" style="width: 100%; height: 300px; margin: 0px auto;"></script>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar una medida cautelar." data-position='top'>                                        
                            <input type="submit" class="btn btn-primary btn-adaptar" value="Guardar" onclick="saveMcautelares()" id="btn_mcautelares_save"/>
                        </div>
                        <div class="col-md-2 botonesAdaptar">                                        
                            <input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="cleanFields()" id="btn_mcautelares_clean"/>
                        </div>
                        <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" data-intro="De clic para buscar una medida cautelar." data-position='top'>                                        
                            <input type="submit" class="btn btn-primary btn-adaptar" value="Consultar" onclick="changeModule(2)" id="btn_mcautelares_search"/>
                        </div>
                        <div class="col-md-2 botonesAdaptar">                                        
                            <input type="submit" class="btn btn-primary btn-adaptar" value="Eliminar" id="btn_mcautelares_delete" style="display:none;" disabled/>
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
            <div id="divConsulta" style="display:none;">
                <div> <!-- consulta y busqueda -->
                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeModule(1)">
                    <hr/>
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="cveTipoJuzgado_busqueda" class="control-label col-md-3">Juzgado:</label>
                            <div class="col-md-9">
                                <select class="form-control " name="cveTipoJuzgado_busqueda" id="cveTipoJuzgado_busqueda" onchange="cargaTipoCarpeta(2);"></select>
                            </div>                                
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-3">Relacionado con</label>
                            <div class="col-md-9"><select id="select_mcautelares_carpeta_busqueda" class="form-control"></select></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" id="label_mcautelares_text2">No. de </label>
                            <div class="col-md-9">
                                <input type="text" id="input_mcautelares_numero_busqueda" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline" />
                                /
                                <input type="text" id="input_mcautelares_anio_busqueda" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fecha inicio</label>
                            <div class="col-md-2">
                                <input type="text" id="input_mcautelares_finicial_busqueda" placeholder="FECHA INICIAL" class="form-control datepicker" data-date-format="dd/mm/yyyy"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fecha fin</label>
                            <div class="col-md-2">
                                <input type="text" id="input_mcautelares_ffinal_busqueda" placeholder="FECHA FINAL" class="form-control datepicker" data-date-format="dd/mm/yyyy"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                <div class="col-md-2 botonesAdaptar" >                                                        
                                    <input type="submit" class="btn btn-primary btn-adaptar" value="Buscar" onclick="mainSearch()">
                                </div>
                                <div class="col-md-2 botonesAdaptar" >                                                        
                                    <input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="cleanFields()">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="divResultados" style="display:none;">
                <div class="col-xs-12"> <!-- paginacion -->
                    <div class="col-xs-3">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeModule(6)">
                    </div>

                    <div class="form-group col-xs-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-xs-2" >
                        <label class="control-label">Cambiar a la p&aacute;gina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="findMedidasCautelares()">
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="findMedidasCautelares()">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 table-responsive" id="tableSearch">
                </div>
            </div>
            <div id="divApelacion" style="display:none;">
                <div class="form-horizontal">
                    <div class="form-group"> 
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <input type="submit" class="btn btn-primary" value="Regresar" onclick="returnFromApelacion()">
                        </div>
                        <div class="col-xs-8 col-sm-9 col-md-10">
                            <h5 id="imputadoNameForm"></h5>
                        </div>
                    </div>
                    <hr/>
                    <div class="form-group"> <!-- Sentido -->
                        <input type="hidden" id="idImputadoCarpeta"/> <!-- hidden -->
                        <input type="hidden" id="idMedidaCautelar"/> <!-- hidden -->
                        <label class="control-label col-md-3 needed">Sentido</label>
                        <div class="col-md-9">
                            <select id="select_mcautelares_sentidotoca" class="form-control" tabindex="6"></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 needed">No. de Toca</label>
                        <div class="col-md-9">
                            <input type="text" id="input_mcautelares_numerotoca" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline"/>
                            /
                            <input type="text" id="input_mcautelares_aniotoca" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline"/>
                        </div>
                    </div>
                    <div class="form-group"> <!-- Salas -->
                        <label class="control-label col-md-3 needed">Sala</label>
                        <div class="col-md-9">
                            <select id="select_mcautelares_salastoca" class="form-control" tabindex="6"></select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
    <!--	                    <input type="submit" class="btn btn-primary" value="Guardar apelaci&oacute;n" onclick="addApelacion()"> -->
                            <input type="submit" class="btn btn-primary" value="Limpiar Apelaci&oacute;n" onclick="cleanFields(2)">
                        </div>
                    </div>
                </div>
            </div>
        </div>	
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
    <script src="sigejupe/medidascautelares/medidasCautelares.js" charset="UTF-8"></script>


    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>