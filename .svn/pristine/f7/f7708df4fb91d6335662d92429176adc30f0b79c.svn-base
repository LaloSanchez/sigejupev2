<?php
//ihs
if (session_status() == PHP_SESSION_NONE) {
		@session_start();
	}


if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
	$SysCveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
	$SysCvePerfil = $_SESSION['cvePerfil'];
	$SysCveAdscripcion = $_SESSION['cveAdscripcion'];
  $cveJuzgadoOrigenArbol = "";
	//POST para arbol
	$procedencia = 0; 
  $OrigenSegundaInstancia = "";
	$idActuacionArbol = ( isset($_POST['idActuacion']) ? @$_POST['idActuacion'] : '' );
	$idCarpetaJudicialArbol = (  isset($_POST['idReferencia']) ?  @$_POST['idReferencia'] : '' );
	$cveTipoCarpetaArbol = (  isset($_POST['cveTipoCarpeta']) ?  @$_POST['cveTipoCarpeta'] : '' );
	if (($idActuacionArbol !=0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") || ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "")) {
	    $idActuacionArbol = ( ($idActuacionArbol !=0 && $idActuacionArbol != "") ? $idActuacionArbol : 0 );
	    $idCarpetaJudicialArbol = ( ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") ? $idCarpetaJudicialArbol : 0 );
	    $cveTipoCarpetaArbol = ( ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "") ? $cveTipoCarpetaArbol : 0 );
	    $procedencia = 1; // viene de arbol
	}else if($idCarpetaJudicialArbol == ""  && $cveTipoCarpetaArbol == 0 && $cveTipoCarpetaArbol !=""){
    	$procedencia = 1; // viene de arbol el formulario general
	}
  if (isset($_GET['origen'])) {
      $OrigenSegundaInstancia = @$_GET['origen'];
   }
   if (isset($_POST['juzgadoOrigenArbol'])) {
      $cveJuzgadoOrigenArbol = @$_POST['juzgadoOrigenArbol'];
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
    .imputadoDesc{ text-decoration: underline; }
	.needed:after { color:darkred; content: " (*)"; }    
	.textCorrection{ display: block; text-transform: lowercase; }
	.textCorrection:first-letter { text-transform: uppercase; }
	.capital{ text-transform: uppercase; }
	input, textarea{ resize: none; }
</style>
<div class="panel panel-default">
	<div class="panel-heading">
	    <h5 class="panel-title" id="medidasCautelaresTitulo">
	        Medidas de Protecci&oacute;n
	    </h5>
	</div>
	<div class="panel-body">
    <input type="hidden" id="hiddencveJuzgadoOrigenArbol" value="<?php echo $cveJuzgadoOrigenArbol; ?>" >
    <input type="hidden" id="hiddencveAdcripcion" value="<?php echo $_SESSION['cveAdscripcion']; ?>" >
		<input type="hidden" id="SysCveUsuarioSistema" value="<?=$SysCveUsuarioSistema?>"/> <!-- hidden -->
		<input type="hidden" id="SysCvePerfil" value="<?=$SysCvePerfil?>"/> <!-- hidden -->
		<input type="hidden" id="SysCveAdscripcion" value="<?=$SysCveAdscripcion?>"/>
		<input type="hidden" id="cveTipoJuzgadoAlt" name="cveTipoJuzgadoAlt"/>
		<input type="hidden" id="procedencia" name="procedencia" value="<?=$procedencia?>" />
		<!-- <input type="hidden" id="idActuacionArbol" name="idActuacionArbol" value="<?=$idActuacionArbol?>" /> -->
		<input type="hidden" id="idCarpetaJudicialArbol" name="idCarpetaJudicialArbol" value="<?=$idCarpetaJudicialArbol?>" />
		<input type="hidden" id="cveTipoCarpetaArbol" name="cveTipoCarpetaArbol" value="<?=$cveTipoCarpetaArbol?>" />
		<input type="hidden" id="idActuacion" name="idActuacion" value="<?=$idActuacionArbol?>" />
                <div id="divFormulario" class="form-horizontal" data-step="1" data-intro="Este m&oacute;dulo le permite registrar una nueva medida de protecci&oacute;n, el cual puede ser modificado y/o eliminado." data-position='left'>
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
						<button class="btn btn-primary" id="btn_buscaCarpeta">Buscar ofendido(s)</button>
					 	&nbsp;&nbsp;
				 		<span id="resultadoBusquedaActuacion" class="glyphicon"></span>
					</div>
			</div>
			<div class="form-group"> <!-- ResoluciOn -->
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
				<label class="control-label col-md-3 needed">Ofendido(s)</label>
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
                                    <div data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar una medida de  protecci&oacute;n ." data-position='top' class="col-md-2 botonesAdaptar"><input type="submit" class="btn btn-primary btn-adaptar" aria-hidden="true" value="Guardar" onclick="saveMcautelares()" id="btn_mproteccion_save"/></div>
                                    <div data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top' class="col-md-2 botonesAdaptar botonesArbol"><input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="cleanFields()" id="btn_mcautelares_clean"/></div>
                                    <div class="col-md-2 botonesAdaptar botonesArbol"><input type="submit" class="btn btn-primary btn-adaptar" value="Consultar" onclick="changeModule(2)" id="btn_mproteccion_search"/></div>
                                    <div class="col-md-2 botonesAdaptar"><input type="submit" class="btn btn-primary btn-adaptar" value="Eliminar" id="btn_mproteccion_delete" style="display:none;" disabled/></div>
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
				<input type="submit" class="btn btn-primary" value="Regresar" onclick="changeModule(1)" id="btn_regresar_busqueda">
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
                                                    <div class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" value="Buscar" onclick="mainSearch()"></div>
                                                    <div class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="cleanFields()"></div>
	                    </div>
					</div>
				</div>
			</div>
		</div>
		<div id="divResultados" style="display:none;">
            <div class="col-xs-12"> <!-- paginacion -->
                <div class="col-xs-3">
					<label for="btn_regresar_resultados" class="btn btn-primary">Regresar</label>			
                    <input type="submit" class="hidden" value="back" onclick="changeModule(6)" id="btn_regresar_resultados"/>
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
					<div class="col-md-3">
						<input type="submit" class="btn btn-primary" value="Regresar" onclick="returnFromApelacion()">
					</div>
					<div class="col-md-9">
						<h4>Formulario de apelaci&oacute;n</h4>
						<h5 id="imputadoNameForm"></h5>
					</div>
				</div>
				<hr/>
				<div class="form-group"> <!-- Sentido -->
					<input type="hidden" id="idImputadoCarpeta"/> <!-- hidden -->
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
						<label for="btn_limpia_apelacion" class="btn btn-primary">Limpiar Apelaci&oacute;n</label>
	                    <input type="submit" class="hidden" value="clean" onclick="cleanFields(2)" id="btn_limpia_apelacion">
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
<script type="text/javascript">
   var instancia = null;
   var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
   var OrigenSegundaInstancia = "<?php echo $OrigenSegundaInstancia; ?>";
    if(editor!=undefined){  
        editor.destroy();
    }    
    var editor = null;

    /**
    * FunciOn para obtener y asignar los permisos del usuario activo sobre el formulario
    */
    function setPermissions(){
		var cveUsuarioSistema = $('#SysCveUsuarioSistema').val();
		var cvePerfilSesion = $('#SysCvePerfil').val();
		insert_numEmpleado = cveUsuarioSistema;
		$.get("../archivos/" + cveUsuarioSistema + ".json",
			function(response){
				var perfiles = response.perfiles[0];
				var perfil = perfiles.perfil[0];
				var permisos = perfil.permisos
				var createRecord = 'N';
				var readRecord = 'N';
				var updateRecord = 'N';
				var deleteRecord = 'N';
                for(var i = 0; i < response.perfiles[0].totPerfiles; i++){
                    if(cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil){
                        $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                            if(vnombre.nomFormulario == "CARPETAS JUDICIALES"){
                                var hijos = vnombre.hijos;
                                $.each(hijos, function (k2, nombreHijo) {
                                    if (nombreHijo.nomFormulario == 'MEDIDAS DE PROTECCION') {
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
				if(crud.read == 'N'){
					$('#btn_buscaCarpeta, #btn_mproteccion_search').prop('disabled',true);
				}
				if(crud.create == 'N'){
					$('#btn_mproteccion_save').prop('disabled',true);
				}
				if(crud.delete == 'N'){
					$('#btn_mproteccion_delete').prop("disabled",true);
				}
			});
    }

	/**
	 * Muestra/Oculta el div del formulario y la tabla de bUsqueda
	 * @param {int} opc Recibe un parametro para mostrar el DIV correspondiente
	 */
    function changeDivForm(opc) {
        if (opc === 1) {
            $("#divConsulta").hide("fade");
            $("#divResultados").hide("fade");
            $("#divFormulario").show("slide");
            //cambia el titulo
            $('#medidasCautelaresTitulo').empty().append(titulos['titulo1']);
        } else if (opc === 2) {
            $("#divFormulario").hide("fade");
            $("#divConsulta").show("slide");
            //cambia el titulo
            $('#medidasCautelaresTitulo').empty().append('<a href="#" onclick="changeModule(1)" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / ' + titulos['titulo2']);
            cargaTipoCarpeta(2);
        } else if (opc === 3){
            $("#divFormulario").hide("fade");
            $("#divApelacion").show("slide");
        } else if (opc === 4){
            $("#divApelacion").hide("fade");
            $("#divFormulario").show("slide");
        } else if(opc == 5){
            $("#divConsulta").hide("fade");            
			$("#divResultados").show("slide");
            //cambia el titulo
            $('#medidasCautelaresTitulo').empty().append('<a href="#" onclick="changeModule(1)" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / <a href="#" onclick="changeModule(6)" style="text-decoration:underline;">' + titulos['titulo2'] + '</a> / ' + titulos['titulo3']);
        } else if(opc == 6){
			$("#divResultados").hide("fade");
            $("#divConsulta").show("slide");
        }
    }

	/**
	 * Limpia el contenido del formulario
	 * @param {integer} idModule Recibe el Id del mOdulo del que se limpiaran sus campos
	 */
	function cleanFields(idModule){
		var idModule = idModule || '1';
		if(idModule == 1){ //modulos de captura y busqueda
		    $('#divFormulario, #divConsulta').find('input[type=text], input[type=password], input[type=number], input[type=email], input[type=hidden]').val('');
		    editor.setContent("", false);
		    $('#divFormulario, #divConsulta').find('select').prop('selectedIndex',0);
		    $('#label_mcautelares_text1, #label_mcautelares_text2').empty().html("No. de ");
		    $('#input_mcautelares_finicial_busqueda, #input_mcautelares_ffinal_busqueda').val(getDate('today'));
		    //$('#cveTipoJuzgado, #cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() );
		    $('#cveTipoJuzgado, #cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val() );
		    cargaTipoCarpeta();
		    $('#accordion').html('');
		    $('#auto_tbody').html('');
		    $('#btn_mproteccion_delete').prop('disabled',true).hide();
			disabledFields(false,true);
			Apelaciones.apelacion = [];
			Apelaciones.contador = 0;
			$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').removeClass('glyphicon-ok');
			$('#inputPDF').hide();
			$('#inputVisor').hide();			
		} else if(idModule == 2){ //modulo de apelaciOn
		    $('#input_mcautelares_numerotoca, #input_mcautelares_aniotoca').val('');
		    $('#divApelacion').find('select').prop('selectedIndex',0);
		} else if(idModule == 3){ //al cambiar el combo de carpeta
		    $('#divFormulario, #divConsulta').find('input[type=text], input[type=password], input[type=number], input[type=email], input[type=hidden]').val('');
		    editor.setContent("", false);
		    $('#select_mcautelares_notificacion').prop('selectedIndex',0);
		    $('#input_mcautelares_finicial_busqueda, #input_mcautelares_ffinal_busqueda').val(getDate('today'));
		    //$('#cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() );
		    //$('#cveTipoJuzgado, #cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val() );
		    $('#accordion').html('');
			disabledFields(false,true);
			Apelaciones.apelacion = []
			Apelaciones.contador = 0;
		} else if(idModule == 4){
		    $('#accordion').html('');
		    $('#idActuacion, #input_mcautelares_sintesis').val('');
		    editor.setContent("", false);
		    $('#select_mcautelares_notificacion').prop('selectedIndex',0);
			Apelaciones.apelacion = []
			Apelaciones.contador = 0;
		}
		return;
	}

	/**
	 * Obtiene la fecha de la computadora
	 * @param {string} element Define el elemento que se desea obtener. all: yyyy-mm-dd hh:mm:ss; year: yyyy
	 * @return {string} finaldate Regresa la fecha o un elemento de la misma
	 */
    function getDate(element){
    	var element = element || 'all';
    	var finaldate = '';
    	var today = new Date();
		var dd   = today.getDate();
	    var mm   = today.getMonth()+1; //January is 0!
	    var yyyy = today.getFullYear();
	    var hour = today.getHours();
	    var minu = today.getMinutes();
	    var secs = today.getSeconds();

	    if(dd<10)  { dd='0'+dd } 
	    if(mm<10)  { mm='0'+mm } 
	    if(minu<10){ minu='0'+minu } 

	    if(element == 'all'){
	    	finaldate = yyyy+'/'+mm+'/'+dd+' '+hour+':'+minu+':'+secs;
	    }
	    if(element == 'year'){
	    	finaldate = yyyy;
	    }
	    if(element == 'today'){
	    	finaldate = dd+'/'+mm+'/'+yyyy;
	    }
      lert("FIN getDate");
	    return finaldate
    }

	/**
	 * Desactiva/activa los campos clave del formulario
	 * @param {boolean} stateReference El valor se asigan directamente al atributo de los campos de referencia
	 * @param {boolean} stateCertification El valor se asigan directamente al atributo de los campos de certificaciOn
	 */
	function disabledFields(stateKeyFields,stateModuleFields){
		//Key fields
		idKeyFields = ['select_mcautelares_carpeta','input_mcautelares_numero','input_mcautelares_anio'];
		$.each(idKeyFields, function(k,v){
			$('#' + v).attr("disabled",stateKeyFields);
		});
		//Module fields
		idModuleFields = ['input_mcautelares_sintesis','select_mcautelares_notificacion'];
		$.each(idModuleFields, function(k,v){
			$('#' + v).attr("disabled",stateModuleFields);
		});
	}

	/**
	 * Muestra mensajes personalizados en el div destinado para ello
	 * @param {string} message Es el mensaje que se mostrarA
	 * @param {string} type Es el tipo de mensaje. 1:success, 2:warning, 3:information, 4:error
	 * @param {string} divAux Es el postfijo para identificar un DIV alterno de notificaciOn
	 */
    function showMessage(message,type,divAux){
    	var message = message || '';
    	var div_message = '';
    	var divAux = divAux || '';
    	var state = 0;
    	switch(type){
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
    	if(divAux != ''){
    		div_message += divAux;
	        if(type == 'success'){
	            $("#divInformacion" + divAux).hide();
	            //$("#" + div_message).hide();
	        }
	        if(type == 'information'){
	            $("#divCorrecto" + divAux).hide();
		        $('#' + div_message).html(message);
		        $('#' + div_message).show("slide");
	        }
    	}else{
	        $('#' + div_message).html(message);
	        $('#' + div_message).show("slide");
	        setTimeout(function () {
	            $("#" + div_message).hide("slide");
	        }, 5000);
	    }
        return;
    }


	/**
	* FunciOn para el cambio de foco al presionar INTRO
	* @param {object} event Objeto del evento KEYPRESS
	* @param {string} nextInput Es el ID del input al que se moverA el foco
	*/
	function changeFocus(event,nextInput){
        var key = window.event ? event.keyCode : event.which;
        if (event.keyCode == 13) { // es Intro
            $('#' + nextInput).focus();
        };
        return;
	}

    /**
    * FunciOn para la obtenciOn de informacion de tablas y llenado de combos
    * @param {array} selectIds Ids de los combos donde se mostraran los datos
    * @param {string} facade Es la ruta de la fachada que se invoca, solo se define la carpeta y el nombre del archivo sin la extensiOn Class en adelante. Ej. tiposcarpetas/TiposcarpetasFacade
    * @param {string} value Es el identificador del campo llave
    * @param {string} descripction Es el identificador del campo de descripciOn
    */
	function fillCombo(selectIds,facade,value,description){
		$.each(selectIds,function(k,v){
			$('#' + v).empty();
		});
		$.post('../fachadas/sigejupe/' + facade + '.Class.php',
			{
				activo:'S',
				accion:'consultar'
			},
			function(response){
	            var object = eval("("+response+")");
				var options = '<option value="0">--SELECCIONE--</option>';
				if(object.totalCount > 0){
					$.each(object.data,function(k,v){
						if(v[description] != 'AMPARO'){
							//Impide que la opcion 'AMPARO' aparezca en el combo de carpetas
							options += '<option value="' + v[value] + '">' + v[description] + '</option>'; 
						}
					});
					$.each(selectIds, function(k,v){
						$('#' + v).append(options);						
					});
				}else{
					showMessage('NO EXISTEN REGISTROS','warning');
				}
			});
		return;		
	}

	/**
	* FunciOn para el cambio de modulos entre el principal y el de bUsqueda
	* @param {integer} idModule Id del mOdulo. 1:principal, 2:bUsqueda
	*/
	function changeModule(idModule){
		//muestra el mOdulo de bUsqueda
		changeDivForm(idModule);
		//limpia el contenido de los formularios
		if(idModule < 5 ){ //impide que los parametros de busqueda se limpien para no afectar la paginaciOn
			cleanFields();
			//coloca la fecha actual en los combos
		    $('#input_mcautelares_finicial_busqueda, #input_mcautelares_ffinal_busqueda').val(getDate('today'));
		}
		if(idModule == 6){
			changeDivForm(2);
            //cambia el titulo
            var titulo = '<a href="#" onclick="changeModule(1)" style="text-decoration:underline;">Medidas de Protecci&oacute;n</a> / B&uacute;squeda';
            $('#medidasCautelaresTitulo').empty().append(titulo);
		}
        return;
	}

	/**
	 * Valida que antes de guardar o actualizar, todos los campos contegan informaciOn
	 * @param {array} array Es el arraglo de campos a validar
	 * @return {boolean} state Regresa 'true' si todos los campos contienen informaciOn
	 */
	function validateFields(array){
		var state = true;
		var empty = [];
		var counter = 0;
		$.each(array, function(k,v){
			if(v.value == '' || v.value == 0 || v.value == null){
				state = false;
				empty[counter++] = v.name;
				return;
			}
		});
		if(!state){
			state = empty;
		}
		return state;
	}

	/**
	* Obtiene las salas de los Juzgados a travEs del webservice de GestiOn, filtrando por Instancia con claves 14 y 17 en el controlador
	*/
	function getSalas(){
		$.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
		{
			accion:'getSalas'
		},function(response){
			var object = eval('(' + response + ')');
			var options = '<option value="0">-- SELECCIONE --</option>'
			if(object.totalCount > 0){
				var data = object.data;
				$.each(data, function(k,v){
					options += '<option value="' + v.idJuzgado + '">' + v.desJuz + '</option>';
				});
				$('#select_mcautelares_salastoca').empty().html(options);
			}
		});
		return;
	}

	/**
	* Obtiene la lista de Imputados de la tabla Imputados Carpetas
	* @param {integer} idCarpetaJudicial Es el Id de la tabla Carpetas Judiciales, se usa para filtrar y obtener los imputados de tal carpeta
	*/
	function getImputadosCarpetas(idCarpeta,cveTipocarpeta){
		urlFacade = '';
		if(cveTipocarpeta == 7){ // es exhorto
			urlFacade = "../fachadas/sigejupe/ofenfendidosexhortos/OfenfendidosexhortosFacade.Class.php";
			dataFacade = "accion=consultar&activo=S&idOfenfendidoExhorto=" + idCarpeta;
		}else{
			urlFacade = "../fachadas/sigejupe/ofendidoscarpetas/OfendidoscarpetasFacade.Class.php";
			dataFacade = "accion=consultar&activo=S&idCarpetaJudicial=" + idCarpeta;
		}
		var respuesta = '';
		$.ajax({
			async: false,
			type: 'POST',
			url: urlFacade,
			data: dataFacade
		}).done(function(response)	{
            respuesta = response;
		});
		return respuesta;
	}

	/**
	* Muestra la tabla de imputados dentro del formulario
	* @param {json} json Recibe el resultado de ImputadosCarpetas
	*/
	function imputadosTable(json,tipoCarpeta){
		var tipoCarpeta = tipoCarpeta || '';
		var object = eval('('+json+')');
		var totalRecords = object.totalCount;
		if(totalRecords > 0){ 
			var list = object.data;
			var name = '';
			var imputadoId = '';
			var counter = 0;
			var tbody = '';
			var referencia = 0;
			var carpeta = 0;
			if(typeof object.referencia != 'undefined'){
				referencia = object.referencia;
				carpeta = referencia[0]['cveTipoCarpeta'];				
			}else{
				carpeta = tipoCarpeta;
			}
			var idsImputados = [];
			$.each(list, function(k,v){
				//validacion por tipo de carpeta
				if(carpeta == 7){ //la carpeta es de exhorto
					imputadoId = v.idOfenfendidoExhorto;
				}else{ //la carpeta es judicial
					imputadoId = v.idOfendidoCarpeta;
				}
				//valida el tipo de persona
				if(v.cveTipoPersona == 1){
					name = v.paterno + ' ' + v.materno + ' ' + v.nombre;
				}else if(v.cveTipoPersona == 2 || v.cveTipoPersona == 3){
					name = v.nombreMoral;
				}
				//name = escape(encodeURIComponent(name));
				counter = parseInt(k)+1;
				tbody += '	<div class="panel panel-default">'
					  	+ '		<div class="panel-heading" role="tab" id="heading' + imputadoId +'">'
					    + '			<h4 class="panel-title">'
					    + '				' + counter +'&nbsp;-&nbsp;&nbsp;&nbsp;'
					    + '				<input class="imputadoCheck" id="imputadoCheck_' + imputadoId + '" type="checkbox" name="" value="' + imputadoId + '"/>'
					    + '				&nbsp;&nbsp;&nbsp;'
					    + '				<a id="collapsed' + imputadoId +'" class="collapsed imputadoDesc" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse' + imputadoId +'" aria-expanded="false" aria-controls="collapse' + imputadoId +'" "disabled">'
					    + '					' + name
					    + '				</a>'
					    + '			</h4>'
					    + '		</div>'
					    + '		<div id="collapse' + imputadoId +'" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading' + imputadoId +'">'
					    + '			<div class="panel-body" id="panel-imputado_' + imputadoId +'"> <!-- inicio div medida cautelar --> '
					    + '			<div class="form-group"> <!-- Medida Cautelar -->'
					    + '				<label class="control-label col-xs-12 col-sm-2 col-md-2 needed">Medida de protecci&oacute;n</label>'
					    + '				<div class="col-xs-12 col-sm-10 col-md-10">'
					    + '					<select id="select_mcautelares_medidas_' + imputadoId +'" class="form-control" tabindex=""></select>'
					    + '				</div>'
					    + '			</div>'
					    + '			<div class="form-group"> <!-- Autoridad Emisora -->'
					    + '				<label class="control-label col-xs-12 col-sm-2 col-md-2 needed">Autoridad emisora</label>'
					    + '				<div class="col-xs-12 col-sm-10 col-md-10">'
					    + '					<select id="select_mcautelares_autoridad_' + imputadoId +'" class="form-control" tabindex=""></select>'
					    + '				</div>'
					    + '			</div>'
					    + '			<div class="form-group">'
					    + '				<label class="control-label col-xs-12 col-sm-2 col-md-2 needed">Periodo de tiempo</label>'
					    + '				<div class="col-xs-6 col-sm-4 col-md-3">'
					    + '					<input type="text" id="input_mcautelares_finicial_' + imputadoId +'" placeholder="FECHA DE INICIO " class="form-control datepicker" data-date-format="dd/mm/yyyy"/>'
					    + '				</div>'
					    + '				<div class="col-xs-6 col-sm-4 col-md-3">'
					    + '				 	<input type="text" id="input_mcautelares_ffinal_' + imputadoId +'" placeholder="FECHA DE TERMINO" class="form-control datepicker" data-date-format="dd/mm/yyyy"/>'
					    + '				</div>'
					    + '				<div class="col-xs-2">'
					    + '				</div>'
					    + '			</div>'
					    + '			<div class="form-group"> <!-- Apelacion -->'
					    + '				<label class="control-label col-xs-12 col-sm-2 col-md-2">Apelaci&oacute;n del ofendido</label>'
					    + '				<div class="col-xs-12 col-sm-8 col-md-7">'
					    + '					<select id="select_mcautelares_apelacion_' + imputadoId + '" class="imputadoApelacion">'
					    + '						<option value="N">NO</option>'
					    + '						<option value="S">SI</option>'
					    + '					</select>'
					    + '					<button id="edit_' + imputadoId + '" onclick="loadApelacionInfo(' + imputadoId + ')" type="button" class="btn btn-default btn-sm" aria-label="Left Align" disabled="disabled">'
						+ '						Editar Apelaci&oacute;n'
						+ '					</button>'
					    + '				</div>'
					    + '			</div> <!-- Apelacion/ -->'
					    + '			<div class="form-group"> <!-- botones -->'
					    + '				<div class="col-xs-offset-1 col-xs-11">'
					    + '	   					<label for="btn_mcautelares_imputado_clean" class="btn btn-primary">Limpiar datos del Ofendido</label>'
					    + '	                    <input type="submit" class="hidden" value="clean" onclick="cleanImputadoInfoFields(' + imputadoId + ')" id="btn_mcautelares_imputado_clean"/>'
					    + '				</div>'
					    + '			</div> <!-- botones/ --> <!-- medida cautelar/ -->'
					    + ' 		<div class="form-group">'
					    + '	        <div id="divCorrecto_' + imputadoId + '" class="alert alert-success alert-dismissable" style="display: none">'
					    + ' 	           <button type="button" class="close" data-dismiss="alert">&times;</button>'
					    + '     	       <strong id="strCorrecto"></strong> '
					    + '        	</div>'
					    + '    			<div id="divInformacion_' + imputadoId + '" class="alert alert-info alert-dismissable" style="display: none">'
					    + '        			<button type="button" class="close" data-dismiss="alert">&times;</button>'
					    + '        			<strong id="strInformacion"></strong>'
					    + '    			</div>'
					    + '			</div>'
					    + '			</div>'
					    + '		</div>'
					    + '</div>';
					    idsImputados[k] = imputadoId;
			});
			//llena todos los combos para los imputados
			var tiposMedidas = [];
			var autoridadEmisora = [];
			for(var i=1;i<=totalRecords;i++){
				tiposMedidas.push('select_mcautelares_medidas_' + idsImputados[i-1]);
				autoridadEmisora.push('select_mcautelares_autoridad_' + idsImputados[i-1]);
			}
			fillCombo(tiposMedidas,'tiposprotecciones/TiposproteccionesFacade','cveTipoProteccion','desTipoProteccion');
			fillCombo(autoridadEmisora,'autoridadesemisoras/AutoridadesemisorasFacade','cveAutoridadEmisora','desAutoridadEmisora');			
		}else{
			//habilita campos
			disabledFields(false,true);
			//regresa el foco al campo numero
			$('#input_mcautelares_numero').focus();
			showMessage('No se encuentran Ofendidos relacionados. Verifique los datos.','information');
		}
		//llena el acordeon
		$('#accordion').empty().append(tbody);
		//datepicker para las fechas de los formularios dinAmicos
		$('.datepicker').each(function(){
			$(this).datepicker().on('changeDate',function(e){ 
				$(this).datepicker('hide'); 
			});
		}); 
		return;
	}

	function validateDatesRange(start,end){
		var startDate = start.split('/');
		var endDate = end.split('/');
		status = '';
		startDate = startDate[2] + '-' + startDate[1] + '-' + startDate[0];
		endDate = endDate[2] + '-' + endDate[1] + '-' + endDate[0];
		if(startDate < endDate){
			status = 'ok';
		}else{
			status = 'La Fecha de Termino debe ser mayor a la de Inicio.';
		}
		return status;
	}

	/**
	* FunciOn para guardar la informaciOn de los imputados en el array -medidasProteccion-
	* @param {integer} idImputado Es el Id del imputado a guardar
	*/
	function saveImputadoInfo(idImputado){
		var medida = $('#select_mcautelares_medidas_' + idImputado ).val();
		var autoridad = $('#select_mcautelares_autoridad_' + idImputado ).val();
		var finicial = $('#input_mcautelares_finicial_' + idImputado ).val();
		var ffinal = $('#input_mcautelares_ffinal_' + idImputado ).val();
		var apelacion = $('#select_mcautelares_apelacion_' + idImputado ).val();
		var message = '';
		var estado = false;
		//validaciOn de los campos
		var mcautelaresFields = [
			{name:'Medida de Protecci&oacute;n',value:medida},
			{name:'Autoridad Emisora',value:autoridad},
			{name:'Fecha de Inicio',value:finicial},
			{name:'Fecha de Termino',value:ffinal}];
		var mcautelaresState = validateFields(mcautelaresFields);			
		var fechasState = validateDatesRange(finicial,ffinal);
		if(mcautelaresState == true && fechasState == 'ok'){
			findMedida(idImputado);
			//guarda los datos en el array -medidasProteccion-
			medidasProteccion.data[medidasProteccion.counter] = {
				idOfendidoCarpeta:idImputado,
				medida:medida,
				autoridad:autoridad,
				finicial:finicial,
				ffinal:ffinal,
				apelacion:apelacion
			}
			medidasProteccion.counter++;
			message = 'La informci&oacute;n del ofendido esta completa.';
			showMessage(message,'success','_' + idImputado); 
			estado = true;
		}else{
			colapsaAcordeon();
			//abre el acordeon
			$('#collapse' + idImputado).collapse("show");
			//mostrar mensaje de informaciOn faltante
			message = 'Complete los siguientes campos:<br/>';
			$.each(mcautelaresState,function(k,v){
				message += '- ' + v + '<br/>';
			}); 
			if(fechasState != ''){
				if(fechasState != 'ok'){
					message += '- ' + fechasState + '<br/>';
				}
			}
			message += 'Verifique.';
			showMessage(message,'information','_' + idImputado);
			estado = false;
		} 
		return estado;
	}

    /**
    * Busca Imputados de las Medidas Cautelares, si existe lo borra y reduce en 1 el contador
    * @param {integer} idImputadoCarpeta Es el ID de ImputadoCarpeta
    */
    function findMedida(idOfendidoCarpeta){
		//validar la existencia del elemento a travEs de idImputadoCarpeta
    	var item_id = find_in_object(medidasProteccion.data, 'idOfendidoCarpeta', idOfendidoCarpeta);
    	//si existe el elemento lo borra
        if(item_id > -1){
                medidasProteccion.data.splice(item_id, 1);
                medidasProteccion.counter--;
        }
        return;
    }

    /**
    * FunciOn para limpiar los campos de un imputado
    * @param {integer} idImputado Es el Id del Imputado
    */
	function cleanImputadoInfoFields(idImputado){
		$('#select_mcautelares_medidas_' + idImputado ).prop("selectedIndex",0);
		$('#select_mcautelares_autoridad_' + idImputado ).prop("selectedIndex",0);
		$('#input_mcautelares_finicial_' + idImputado ).val('');
		$('#input_mcautelares_ffinal_' + idImputado ).val('');
		$('#select_mcautelares_apelacion_' + idImputado ).prop("selectedIndex",0);
		return;
	}

	/**
	* Funcion para obtener los imputados que tienen 'check' en la tabla, estos se guardarAn en la tabla -tblautosimputados-
	* @param {string} option Recibe 'checked' o 'full', para mostrar los imputados seleccionados o todos ellos, respectivamente
	* @return {array} ids Regresa el array de los IDs de los imputados
	*/
	function getImputados(option){
		var option = option || 'full';
		//obtiene IDs de check de la tabla de imputados, correspondientes a 'idImputadoCarpeta' de la tabla -tblimputadoscarpetas-
		var ids = [], idsCheck = [], idsFull = [];
		var state = false;
		var idImputado = 0;
		var counter = 0, counter2 = 0;
		var apelacionState = '';
		$.each( $('.imputadoCheck') , function(k,v){
			state = $(this).prop('checked');
			idImputado = $(this).val();
			//obtiene estado de apelacion
			apelacionState = $('#select_mcautelares_apelacion_' + idImputado).val();
			if(state){
				//guarda en array
				idsCheck[counter++] = {idImputado:idImputado,apelacion:apelacionState};
			}
			idsFull[counter2++] = {idImputado:idImputado,apelacion:apelacionState};
		});
		if(option == 'checked'){
			ids = idsCheck;
		}else if(option == 'full'){
			ids = idsFull;
		}
		return ids;
	}

	/**
	* FunciOn para la validaciOn de checks antes de guardar la medida cautelar
	*/
	function validateChecks(){
		var state = false;
		//obtiene los imputados seleccionados
		var imputadosList = getImputados('checked');
		if(imputadosList.length > 0){
			state = true;
		}
		return state;
	}

	/**
	* FunciOn para la validaciOn de la existencia de Medidas cautelares en el array -medidasProteccion-
	*/
	function validateMedidas(){
		var state = false;
		var arraySize = medidasProteccion.data.length;
		if(arraySize > 0){
			state = true;
		}
		return state;
	}

	/**
	* FunciOn para guardar las Medidas Cautelares
	*/
	function saveMcautelares(){
		colapsaAcordeon();
		$('#btn_mproteccion_delete').prop('disabled',true).hide();
		//varibles de control
		var idActuacion = $('#idActuacion').val() > 0 ? $('#idActuacion').val() : '';
		var numActuacion = 0;
		var aniActuacion = 0;
		var idReferencia = carpetasJudiciales.idReferencia;
		var numero = carpetasJudiciales.numero;
		var anio = carpetasJudiciales.anio;
		var cveTipoCarpeta = carpetasJudiciales.cveTipoCarpeta;
		var cveJuzgado = $('#cveTipoJuzgado').val();
		cveJuzgado = cveJuzgado.split('/');
		cveJuzgado = cveJuzgado[0];
		//campos de captura de la medida
		var mcSintesis = $('#input_mcautelares_sintesis').val();
		var mcNotificacion = $('#select_mcautelares_notificacion').val();
		//var mcObservaciones = $('#input_mcautelares_observaciones').val();
		var mcObservaciones = editor.getContent();
		var activo = 'S';
		var imputadosList = getImputados('checked');
		var apelaciones = Apelaciones.apelacion;
		var accion = '';
		if(idActuacion == ''){
			//es insercion
			accion = 'mp_guardar';
		}else{
			//es actualizacion
			accion = 'mp_actualizar';
		}
		//validaciOn de los campos de la medida
		var mcFields = [
			{name:'JUZGADO',value:cveJuzgado},
			{name:'S&Iacute;NTESIS',value:mcSintesis},
			{name:'TIPO DE NOTIFICACI&Oacute;N',value:mcNotificacion},
			{name:'CONTENIDO DEL DOCUMENTO',value:mcObservaciones}];
		var mcState = validateFields(mcFields);
		//validaciOn de los check
		var imputadosState = validateChecks();
		//validacion del array de medidas cautelares
		var medidasState = validateMedidas();

		if(mcState == true && imputadosState == true ){ //&& medidasState == true){
			//validacion de contenido de informacion en las apelaciones
			var estadoApelaciones = false;
			estadoApelaciones = validarApelaciones();
			//validaciOn de constenido de las medidas cautelares
			var imputados = getImputados('checked');
			var estadoImputados = false;
			var estadoImputados2 = true;
			$.each(imputados, function(index,value){
				estadoImputados = saveImputadoInfo(value.idImputado);
				if(estadoImputados == false){
					estadoImputados2 = false;
					return false;
				}
			});
			var medidas = medidasProteccion.data;
			if(estadoApelaciones == true && estadoImputados == true && estadoImputados2 == true){
				//guarda medida cautelar
				$.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
					{
						idActuacion:idActuacion,
						cveTipoActuacion:cveTipoActuacion,
						idReferencia:idReferencia,
						numero:numero,
						anio:anio,
						cveTipoCarpeta:cveTipoCarpeta,
						cveJuzgado:cveJuzgado,
						sintesis:mcSintesis,
						observaciones:mcObservaciones,
						cveUsuario:cveUsuario,
						activo:activo,
						cveTipoNotificacion:mcNotificacion,
						listaOfendidos:imputadosList,
						apelaciones:apelaciones,
						medidas:medidas,
						accion: accion					
					},function(response){
						var object = eval('(' + response + ')');
						var totalRecords = object.totalCount;
						var message = object.text;
						if(totalRecords > 0){
							var data = object.data[0];
							$('#idActuacion').val(data.idActuacion);
							showMessage(message,'success');
							if( $('#procedencia').val() == 1 ){
								getTree();
							}
							$('#inputPDF').show();
							$('#inputVisor').show();
						}else{
							showMessage(message,'error');
						}
					});
			}
		}else{
			var message = 'Complete los siguientes campos:<br/>';
			$.each(mcState,function(k,v){
				message += '- ' + v + '<br/>';
			});
			if(!imputadosState){
				message += '- Definir al menos un imputado<br/>';
			}
			message += 'Verifique.';
			showMessage(message,'information');
		}
		return;
	}

	/**
	* FunciOn para la eliminaciOn lOgica de un Auto, solo se cambia el estado de Activo, las tablas relacionadas no se tocan
	*/
	function deleteMedida(){
		//borra de forma logica la actuacion
		var idActuacion = $('#idActuacion').val();
		var activo = 'N';
		$.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
			{
				idActuacion:idActuacion,
				activo:activo,
				accion:'mp_borrar'
			},function(response){
			var object = eval('(' + response + ')');
			var totalRecords = object.totalCount;
			var message = object.text;
			if(totalRecords > 0){
				showMessage(message,'success');
				cleanFields();
	            if( $('#procedencia').val() == 1 ){
	                getTree();
	            }
			}else{
				showMessage(message,'error');
			}
		});
		return;
	}

	/**
	* FunciOn para buscar dentro de un array un elemento a travEs de una llave, el resultado es el indice del elemento
	* @param {array} array Es el array en donde se buscarA el elemento
	* @param {string} property Es el nombre del campo en el cual se buscarA
	* @param {string} value Es el valor a encontrar
	* @return {integer} index Si encuentra el elemento regresa '-1' en otro caso regresa la posiciOn del elemento
	*/
	function find_in_object(array, property, value) {
        var index2 = array.map(function(d) { 
        	return d[property]; 
        });
        var index = index2.indexOf(value);
        return index;
    }

    /**
    * Busca una apelaciOn, si existe la borra y reduce en 1 el contador
    * @param {integer} idImputadoCarpeta Es el ID de ImputadoCarpeta
    */
    function findApelacion(idOfendidoCarpeta){
		//validar la existencia del elemento a travEs de idImputadoCarpeta
    	var item_id = find_in_object(Apelaciones.apelacion, 'idOfendidoCarpeta', idOfendidoCarpeta);
    	//si existe el elemento lo borra
        if(item_id > -1){
                Apelaciones.apelacion.splice(item_id, 1);
                Apelaciones.contador--;
        }
        return;
    }

    /**
    * FunciOn para guardar las Apelaciones en el array -Apelaciones-
    */
	function addApelacion(){
		//campos de captura de ApelaciOn
		var idImputadoCarpeta = $('#idImputadoCarpeta').val();
		var apelacionSentido = $('#select_mcautelares_sentidotoca').val();
		var apelacionNumero = $('#input_mcautelares_numerotoca').val();
		var apelacionAnio = $('#input_mcautelares_aniotoca').val();
		var apelacionSala = $('#select_mcautelares_salastoca').val();
		var comboApelacion = 0;
		var estadoBoton = true;
		//campos de la apelaciOn
		var apelacionFields = [
			{name:'Sentido',value:apelacionSentido},
			{name:'N&uacute;mero',value:apelacionNumero},
			{name:'A&ntilde;o',value:apelacionAnio},
			{name:'Sala',value:apelacionSala}];
		findApelacion(idImputadoCarpeta);
		var estado = verifyApelaciones(apelacionFields);
		//ingresar registro al array
		if(estado){
			Apelaciones.apelacion[Apelaciones.contador] = {
				id:Apelaciones.contador,
				idOfendidoCarpeta:idImputadoCarpeta,
				apelacionSentido:apelacionSentido,
				apelacionNumero:apelacionNumero,
				apelacionAnio:apelacionAnio,
				apelacionSala:apelacionSala
			};
			Apelaciones.contador++;
			comboApelacion = '1';
			estadoBoton = false;
		}else{
			comboApelacion = '0';
			estadoBoton = true;
		}
		//cambia boton
		editButton(idImputadoCarpeta,estadoBoton);
		//cambia el select de apelacion
		var idSelect = '#select_mcautelares_apelacion_' + idImputadoCarpeta;
		$(idSelect).prop('selectedIndex',comboApelacion);
	}

	/**
	* Funcion para validar las apelaciones antes de guardar el formulario
	*/
	function validarApelaciones(){
		//obtener numero de imputados
		var imputadosList = getImputados('checked');
		var idImputado = 0;
		var estadoApelacion = 'N';
		var estadosArreglo = [];
		var estado = true;
		$.each(imputadosList, function(index,value){
			idImputado = value['idImputado'];
			estadoApelacion = value['apelacion'];
			if(estadoApelacion == 'S'){
			//verificar si el imputado tiene apelacion definida
		    	var apelacionPosicion = find_in_object(Apelaciones.apelacion, 'idOfendidoCarpeta', idImputado);
		    	var elemento = Apelaciones.apelacion[apelacionPosicion];
		    	if(elemento.apelacionSentido == 0 || elemento.apelacionNumero == '' || elemento.apelacionAnio == '' || elemento.apelacionSala == 0){
					//validar que la apelacion tenga los datos completos
					//si los datos no estan completos abrir la ventana de la apelacion con el imputado correspondiente
		    		var nombreImputado = $.trim($('#collapsed' + idImputado ).text());
		    		showMessage('Falta completar la informaci&oacute;n de la apelaci&oacute;n de ' + nombreImputado,'information');
		    		//a la apelacion le hace falta informacion, se abre la ventana para solicitar la captura de la informacion pendiente
		    		loadApelacionInfo(idImputado);
		    		estadosArreglo[index] = false;
		    	}else{
		    		estadosArreglo[index] = true;
		    	}
			}else{
				estadosArreglo[index] = true;
			}
		});
	$.each(estadosArreglo, function(index,value){
		if(value == false){
			estado = false;
		}
	});
	return estado;
	}

	/**
	* FunciOn para cargar la infomaciOn de una apelaciOn ya sea para captura o modificaciOn
	* @param {integer} idImputadoCarpeta Id del ImputadoCarpeta
	*/
	function loadApelacionInfo(idImputadoCarpeta){
		//limpia campos de apelaciOn
		cleanFields(2);
		$('#idImputadoCarpeta').val( $('#imputadoCheck_' + idImputadoCarpeta ).val() );
		$('#imputadoNameForm').empty().html( $.trim($('#collapsed' + idImputadoCarpeta ).text()) );
		//obtiene la posicion del elemento en el array
		var index = '';
		$.each(Apelaciones.apelacion, function(k,v){
			if(v.idOfendidoCarpeta == idImputadoCarpeta){
				index = k;
				return;
			}
		});
		//valida si existe un indice, significa que es consulta o modificacion de la apelacion y muestra el contenido en el formulario de Apelaciones
		if(parseInt(index) > -1){
			var element = Apelaciones.apelacion[index];
			//llena el formulario con los datos del array
			$('#select_mcautelares_sentidotoca').val(element['apelacionSentido']);
			$('#input_mcautelares_numerotoca').val(element['apelacionNumero']);
			$('#input_mcautelares_aniotoca').val(element['apelacionAnio']);
			$('#select_mcautelares_salastoca').val(element['apelacionSala']);
		}
		//cambia titulo
        titulo = '<a href="#" onclick="returnFromApelacion()" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / ' + titulos['titulo4'];
        $('#medidasCautelaresTitulo').empty().append(titulo);
		//abre modulo de captura de apelaciOn
		changeDivForm(3);
	}

	/**
	* FunciOn para habilitar/deshabilitar los botones de ediciOn
	* @param {integer} idImputadoCarpeta Identificador del boton
	* @param {boolean} disabled true/false
	*/
	function editButton(idImputadoCarpeta,disabled){
		var remove = '';
		var add = ''
		if(disabled == false){
			remove = 'btn-default';
			add = 'btn-primary';
		}else if(disabled == true){
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
	* @return {string} rangoFechas Regresa el rango de fechas procesadas en formato YYYY-MM-DD hh:mm:ss|YYYY-MM-DD hh:mm:ss Corresponden a FechaInicial|FechaFinal
	*/
	function obtieneFechas(fechaInicial,fechaFinal){
		fechaInicial = fechaInicial.split('/');
		fechaFinal = fechaFinal.split('/');
		var inicio = '2000-01-01 00:00:00';
		var final = '2036-12-31 23:59:59';
		var rangoFechas = inicio + '|' + final;
		var fInicial = fechaInicial[2] + '-' + fechaInicial[1] + '-' + fechaInicial[0] + ' 00:00:00';
		var fFinal = fechaFinal[2] + '-' + fechaFinal[1] + '-' + fechaFinal[0] + ' 23:59:59';
		if(fechaInicial!=""){
			if(fInicial<inicio && fInicial>final){
				fInicial = inicio;
			}
		}
		if(fechaFinal!=""){
			if(fFinal<inicio && fFinal>final){
				fFinal = final;
			}
		}
		if(fechaInicial!="" && fechaFinal!=""){
			rangoFechas = fInicial + '|' + fFinal;
		}else if(fechaInicial!=""){
			rangoFechas = fInicial + '|' + final;
		}else if(fechaFinal!=""){
			rangoFechas = inicio + '|' + fFinal;
		}
		return rangoFechas;
	}

	/**
	* FunciOn de la invocaciOn principal para la bUsqueda
	*/
	function mainSearch(){
		//limpia datos previos
		$("#totalReg").empty();
		$('#cmbPaginacion').empty();
		$('#cmbNumReg').prop('selectedIndex',0);
		$('#tableSearch').empty();
		findMedidasCautelares();
	}

	/**
	* FunciOn buscar Medidas Cautelares con los parametros definidos
	*/
	function findMedidasCautelares(idActuacion){
		var idActuacion = idActuacion || '';
		//carga variables
        var page = $("#cmbPaginacion").val();
        var cantReg = $("#cmbNumReg").val();
		var tipoCarpeta = $('#select_mcautelares_carpeta_busqueda option:selected').val();
		tipoCarpeta = ( tipoCarpeta != 0 ? tipoCarpeta : '');
		var numActuacion = $('#input_mcautelares_numero_busqueda').val();
		var anioActuacion = $('#input_mcautelares_anio_busqueda').val();
		var fechaInicial = '';
		var fechaFinal = '';
		if( tipoCarpeta=='' && numActuacion=='' && anioActuacion=='' ){
			fechaInicial = $('#input_mcautelares_finicial_busqueda').val();
			fechaFinal = $('#input_mcautelares_ffinal_busqueda').val();
		}
		//var rangoFechas = obtieneFechas(fechaInicial,fechaFinal);
		var activo = 'S';
		var tableContent = '';
		var cveJuzgadoBusqueda = ( $('#cveTipoJuzgado_busqueda').val() != 0) ? $('#cveTipoJuzgado_busqueda').val() : cveJuzgado;
		$.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
			{
				idActuacion:idActuacion,
				cveTipoCarpeta:tipoCarpeta,
				numero:numActuacion,
				anio:anioActuacion,
				cveJuzgado:cveJuzgadoBusqueda, 
				cveTipoActuacion:cveTipoActuacion, 
				txtFecInicialBusqueda:fechaInicial,
				txtFecFinalBusqueda:fechaFinal,
				activo:activo, 
				pag:page,
				cantxPag:cantReg,
				accion:'mp_buscar'
			},function(response){
				var object = eval('(' + response + ')');
				var totalRecords = object.totalCount;
				if(totalRecords>0){
					var data = object.data;
					//muestra contenido en tabla
					tableContent += ''
					+'<table id="tblResultados" class="table table-hover table-striped table-bordered">'
					+'	<thead>'
					+'		<tr>'
					+'			<th>Consecutivo</th>'
					+'			<th>No. Actuaci&oacute;n / A&ntilde;o Actuaci&oacute;n</th>'
					+'			<th>Tipo carpeta</th>'
					+'			<th>S&iacute;ntesis</th>'
					+'			<th>Fecha registro</th>'
					+'		</tr>'
					+'	</thead>'
					+'	<tbody id="">';
					$.each(data, function(k,v){
						//llena objeto para mostrar en tabla
						findContent.regs [k] = {
							idActuacion:v.idActuacion,
							numActuacion:v.numActuacion,
							aniActuacion:v.aniActuacion,
							cveTipoActuacion:v.cveTipoActuacion,
							idReferencia:v.idReferencia,
							numero:v.numero,
							anio:v.anio,
							cveTipocarpeta:v.cveTipocarpeta,
							cveJuzgado:v.cveJuzgado,
							sintesis:v.sintesis,
							observaciones:v.observaciones,
							cveUsuario:v.cveUsuario,
							activo:v.activo,
							fechaRegistro:dateFormat(v.fechaRegistro),
							fechaActualizacion:dateFormat(v.fechaActualizacion),
							cveTipoNotificacion:v.cveTipoNotificacion,
							descTipoCarpeta:v.descTipoCarpeta,
							medidasproteccion:v.medidasproteccion
						};
						var counter = parseInt(k)+1;
						var txtSintesis = '';
						if(v.sintesis.length >50){
							txtSintesis = v.sintesis.substring(0,50) + '...';
						}else{
							txtSintesis = v.sintesis;
						}
						 tableContent += '<tr onclick="showInfo(' + k + ')">';
						 tableContent += '<td>' + counter +'</td>';
						 tableContent += '<td>' + v.numActuacion + ' / ' + v.aniActuacion + '</td>';
						 tableContent += '<td> ' + v.descTipoCarpeta + ' - ' + v.numero + '/' + v.anio + '</td>'; //
						 tableContent += '<td>' + txtSintesis + '</td>';
						 tableContent += '<td>' + dateFormat(v.fechaRegistro) + '</td>';
						 tableContent += '</tr>';
					});
					if( idActuacion != ''){
						showInfo(0);
						return;
					}
					tableContent += ''
					+'	</tbody>'
					+'</table>';

					$('#tableSearch').html(tableContent);
					$('#tblResultados').DataTable({
                        paging: false
                    });
                    getPages(page, cantReg);
                    changeModule(5);
				}else{
					showMessage('No se encontraron resultados con los par&aacute;metro elegidos. Intente con otros.','warning');
				}
			});
	}

	/**
	* FunciOn para obtener las paginas de la tabla de resultados
	* @param {integer} page Es el nUmero de la pAgina a la que se cambiarA
	* @param {integer} cantReg Es el nUmero de registros a mostrar en la pAgina
	*/
	function getPages(page, cantReg){
		var tipoCarpeta = $('#select_mcautelares_carpeta_busqueda option:selected').val();
		tipoCarpeta = ( tipoCarpeta != 0 ? tipoCarpeta : '' );
		var numActuacion = $('#input_mcautelares_numero_busqueda').val();
		var anioActuacion = $('#input_mcautelares_anio_busqueda').val();
		var fechaInicial = '';
		var fechaFinal = '';
		if( tipoCarpeta=='' && numActuacion=='' && anioActuacion=='' ){
			fechaInicial = $('#input_mcautelares_finicial_busqueda').val();
			fechaFinal = $('#input_mcautelares_ffinal_busqueda').val();
		}
		var cveJuzgadoBusqueda = ( $('#cveTipoJuzgado_busqueda').val() != 0) ? $('#cveTipoJuzgado_busqueda').val() : cveJuzgado;
		var totalPages = 0;
		$.ajax({
			type:'POST',
			async:false,
			data:{
				cveTipoCarpeta:tipoCarpeta,
				numero:numActuacion,
				anio:anioActuacion,
				cveJuzgado:cveJuzgadoBusqueda, 
				cveTipoActuacion:cveTipoActuacion, 
				txtFecInicialBusqueda:fechaInicial,
				txtFecFinalBusqueda:fechaFinal,
				activo:'S', 
				cantxPag:cantReg,
				accion:'getPaginas'
			},
			url:"../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
			success:function(response){
                var json = "";
                json = eval("(" + response + ")");
                if (json.totalCount > 0) {
                    $('#cmbPaginacion').find('option').remove().end();
                    for (var i = 0; i < (parseInt(json.total)); i++) {
                        $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                    }
                    $("#totalReg").html("<b>Total:" + json.totalCount + "</b>");
                    page = (page==null) ? 1 : page;
                    $("#cmbPaginacion").val(page);
                } else {
                	showMessage('Sin resultados.','information');
                }
			}
		}); 
		return;
	}

	/**
	 * Muestra en el formulario, la informaciOn del renglOn elegido de la tabla de resultado de la bUsqueda
	 * @param {int} position Es la posiciOn del elemento en el arreglo 
	 */
	function showInfo(position){
		//muestra formulario
		changeDivForm(1);
		disabledFields(true,false);
		//llena con los datos
		var row = findContent.regs[position];
		var selected = '';
		//llena formulario principal
		$('#idActuacion').val(row.idActuacion);
		//$('#cveTipoJuzgado').val(row.cveJuzgado);
    if(instancia == 1)
      $('#cveTipoJuzgado').val( row.cveJuzgado + '/' + $('#cveTipoJuzgadoAlt').val() );
		$('#select_mcautelares_carpeta').val(row.cveTipocarpeta);
		$('#input_mcautelares_numero').val(row.numero);
		$('#input_mcautelares_anio').val(row.anio);
		$('#input_mcautelares_sintesis').val(row.sintesis);
		$('#select_mcautelares_notificacion').val(row.cveTipoNotificacion);
		//$('#input_mcautelares_observaciones').val(row.observaciones);
		llenareditor(row.observaciones);
		//obtiene informacion de imputados
		var temp = getImputadosCarpetas(row.idReferencia,row.cveTipocarpeta);
		imputadosTable(temp,row.cveTipocarpeta);
		//coloca checks en la tabla de imputados
		imputadosTableCheck(row.medidasproteccion);
		//info carpetas
		carpetasJudiciales.idReferencia = row.idReferencia;
		carpetasJudiciales.numero = row.numero;
		carpetasJudiciales.anio = row.anio;
		carpetasJudiciales.cveTipoCarpeta = row.cveTipocarpeta;
		carpetasJudiciales.cveJuzgado = row.cveJuzgado;
		//llena array de datos para apelacion de imputados
		$('#label_mcautelares_text1').empty().append('No. de ' + row.descTipoCarpeta);
		//limpia tabla de resultados
		$('#auto_tbody').html("");
		//desbloquea el boton de eliminar
		if(crud.delete == 'S'){
			$('#btn_mproteccion_delete').prop("disabled",false);
		}
		$('#btn_mproteccion_delete').show();
		$('#inputPDF').show();
		$('#inputVisor').show();
		return;
	}

	function test(url,combo,idSelected,key,description){
		$.post('../fachadas/sigejupe/' + url,
			{
				activo:'S',
				accion:'consultar'
			},
			function(response){
	            var object = eval("("+response+")");
				var options = '<option value="0">--SELECCIONE--</option>';
				if(object.totalCount > 0){
					$.each(object.data,function(k,v){
						options += '<option value="' + v[key] + '">' + v[description] + '</option>'; 
					});
					$('#' + combo).empty().append(options);
					$('#' + combo).val(idSelected);
				}else{
					showMessage('No existen registros','warning');
				}
			});
		return;
	}

	/**
	* Funcion para mostrar del Auto seleciconado de la bUsqueda, los imputados vinculados
	* @param {array} imputados Es el array con los IDs de los imputados
	*/
	function imputadosTableCheck(ofendidos,tipoCarpeta){
		Apelaciones.apelacion = [];
		Apelaciones.contador = 0;
		$.each(ofendidos, function(k,v){
			var idImputadoCarpeta = v.idOfendidoCarpeta;
			var apelacion = (v.Apelada == 'N' ? 0 : 1 );
			var boton = (v.Apelada == 'N' ? true : false );
			//marca check
			$('#imputadoCheck_' + idImputadoCarpeta).prop('checked',true);
			//llena los campos del imputado
			var auxFecha = v.fechaInicio.split(' ');
			var fechaInicio = auxFecha[0].split('-');
			auxFecha = v.fechaTermina.split(' ');
			var fechaTermina = auxFecha[0].split('-');
			fechaInicio = fechaInicio[2] + '/' + fechaInicio[1] + '/' + fechaInicio[0];
			fechaTermina = fechaTermina[2] + '/' + fechaTermina[1] + '/' + fechaTermina[0];
			test('tiposprotecciones/TiposproteccionesFacade.Class.php','select_mcautelares_medidas_'+idImputadoCarpeta,v.cveTipoMedidaProteccion,'cveTipoProteccion','desTipoProteccion');
			test('autoridadesemisoras/AutoridadesemisorasFacade.Class.php','select_mcautelares_autoridad_'+idImputadoCarpeta,v.cveAutoridadEmisora,'cveAutoridadEmisora','desAutoridadEmisora');
			$('#input_mcautelares_finicial_' + idImputadoCarpeta).val(fechaInicio);
			$('#input_mcautelares_ffinal_' + idImputadoCarpeta).val(fechaTermina);
			//habilita el combo y boton de ediciOn
			$('#select_mcautelares_apelacion_' + idImputadoCarpeta).prop('selectedIndex',apelacion).prop('disabled',false);
			editButton(idImputadoCarpeta,boton)
			//Agrega apelacion al array
			var apelacion = v.autosapelados[0];
			Apelaciones.apelacion[Apelaciones.contador] = {
				id:Apelaciones.contador,
				idOfendidoCarpeta:idImputadoCarpeta,
				apelacionSentido:apelacion.cveSentido,
				apelacionNumero:apelacion.numToca,
				apelacionAnio:apelacion.numAnio,
				apelacionSala:apelacion.cveSala
			};
			Apelaciones.contador++;			
		});
		return;
	}

	function returnFromApelacion(){
		addApelacion();
		changeDivForm(4);
	}

	/**
	* Funcion para verificar si los campos capturados de la apelacion contiene informaciOn
	* @param {object} apelacion Es el objeto con los campos de la apelaciOn
	* @param {boolean} estado Regresa -true- si al menos un elemento del objeto contiene informacion, o -false- en caso de estar vacio el objeto
	*/
	function verifyApelaciones(apelacion){
		var estado = false;
		var counter = 0;
		var totalElements = apelacion.length;
		if(totalElements > 0){
			$.each(apelacion, function(index, value){
				if(value['value'] == 0 || value['value'] == ''){
					counter++;
				}
			});
			if(totalElements != counter){
				//si el numero de elementos es diferente al contador, significa que al menos un elemento del array si tiene informacion
				estado = true;
			}
		}
		return estado;
	}

	/**
	* Al cambiar el combo de apelacion abre el modulo para capturar o eliminar una apelaciOn 
	*/
	$("#divFormulario").on('change','.imputadoApelacion', function(){
		var selectId = $(this).prop('id');
		var idImputadoCarpeta = selectId.split('_');
		idImputadoCarpeta = idImputadoCarpeta[idImputadoCarpeta.length-1]
		var value = $('#' + selectId + ' option:selected').val();
		if(value == 'S'){
			loadApelacionInfo(idImputadoCarpeta);
			$('#' + selectId).prop('selectedIndex','N');
		} else if(value == 'N'){ 
			//se elimina del array Apelaciones
			findApelacion(idImputadoCarpeta);
			editButton(idImputadoCarpeta,true);
		}
	});

	function colapsaAcordeon(idImputado){
		var idImputado = idImputado || '';
		var totalCheck = $('input:checkbox').length;
		//colapsa todos los elementos del acordeon 
		for(var i=1;i<=totalCheck;i++){
			//colapsa todos excepto el activo
			if(i!=idImputado){
				$('#collapse' + i).removeClass("in");
			}
		}
	}

    llenareditor = function (value) {
        try {
            editor.ready(function () {
        	setTimeout(function(){  editor.setContent(value, true); }, 500); });
        } catch (e) { alert(e); }
    };

    cargaJuzgados = function () {
         var strDatos = "accion=distrito";
         var urlOption = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
         var asyncOption = true;
         var hiddencveAdcripcion = $("#hiddencveAdcripcion").val();
         var hiddencveJuzgadoOrigenArbol = $("#hiddencveJuzgadoOrigenArbol").val();


         if ($("#idActuacion").val() != "") {
            if (hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol) {
               if (OrigenSegundaInstancia == "") {
                  strDatos = "accion=getJuzgadoActuacion&idActuacion=" + $("#idActuacion").val();
               } else {
               }
            } else {

               if (hiddencveJuzgadoOrigenArbol != 0) {
                  strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
               } else {
                  strDatos = "accion=getJuzgadoActuacion&idActuacion=" + $("#idActuacion").val();
               }
            }
         }
        $.ajax({
            type: "POST",
            url: urlOption,
            data: strDatos,
            async: false,
            dataType: "html",
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")");
                if (json.totalCount > 0) {
                    $("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").empty().append('<option value="0/0">Seleccione una opci&oacute;n</option>');
                    for (var i = 0; i < json.totalCount; i++) {
//                       alert(1);
                        if( json.data[i].cveTipojuzgado == 1){
//                       alert(2);
                            if (json.data[i].cveInstancia == instancia) {
                              $("#cveTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                              $("#cveTipoJuzgado_busqueda").append($('<option></option>').val(json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                            }else{
                              $("#cveTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado).prop("selected",true).html(json.data[i].desJuzgado));                               
                              $("#cveTipoJuzgado_busqueda").append($('<option></option>').val(json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado).prop("selected",true).html(json.data[i].desJuzgado));                               
//                              $("#cveTipoJuzgado :first-child").remove();
                              $("#cveTipoJuzgado option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").prop("selected", true);
                              console.log($("#cveTipoJuzgado").val());
                            }
                        }
                        if (json.data[i].cveInstancia == instancia) {
                           if(cveJuzgado == json.data[i].cveJuzgado){
                               $("#cveTipoJuzgado option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");
                               $("#cveTipoJuzgado_busqueda option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");
                               $('#cveTipoJuzgadoAlt').val(json.data[i].cveTipojuzgado);
                           }
                        } else {
                        $("#btn_mproteccion_save").parent().hide();
                        $("#btn_mcautelares_clean").parent().hide();
                        $("#btn_mproteccion_search").parent().hide();
                        $("#btn_mproteccion_delete").parent().hide();
                        $("#inputPDF").parent().hide();
                     }
                    }
                }else{
                    $("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").empty().append('<option value="0/0">Sin registros</option>');
                }
                cargaTipoCarpeta();
            },
            error: function (objeto, quepaso, otroobj) {
                showMessage("Error en la peticion:\n\n" + quepaso , 'error');
            }
        });
    };

    cargaTipoCarpeta = function (seccion) {
    	var seccion = seccion || 1;
        $('#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda').empty();
        var tipoJuzgado = ( seccion == 1) ? $("#cveTipoJuzgado").val().split("/") : $("#cveTipoJuzgado_busqueda").val().split("/");
        var strDatos = "accion=consultar";
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
            data: strDatos,
            async: false,
            dataType: "html",
            success: function (datos) {
                var json = "";
                json = eval("(" + datos + ")"); 
                if (json.totalCount > 0) {
                     $("#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                    for (var i = 0; i < json.totalCount; i++) {
                        switch(tipoJuzgado[1]){
                            case "1": // tipo de juzgado de control
                                if(json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1" || json.data[i].cveTipoCarpeta == "7"){ // || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                    $("#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            break;
                            case "2": // tipo de juzgado juicio
                                if(json.data[i].cveTipoCarpeta == "3" ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                    $("#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            break;
                            case "3": // tipo de juzgado ejecucion
                                if(json.data[i].cveTipoCarpeta == "5" ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                    $("#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            break;
                            case "4": // tipo de juzgado tribunal
                                if(json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                    $("#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                }
                            break;
                            case "5": 
                            break;
                        }    
                    }
                    //$("#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                }
            },
            error: function (objeto, quepaso, otroobj) {
                showMessage("Error en la peticion:\n\n" + quepaso, 'error');
            }
        });
    };


	/**
	* Al presionar el check de los imputados valida habilita/deshabilita el combo de apelaciOn
	*/
	$('#divFormulario').on('click','.imputadoCheck', function(e){
		//e.preventDefault();
		var selectedId = $(this).prop('id');
		var idImputado = selectedId.split('_')[1];
		var check = $('#' + selectedId).prop('checked');
		if( check ){
			colapsaAcordeon(idImputado);
			//abre el acordeon
			$('#collapse' + idImputado).collapse("show");
//			$('#' + selectedId)[0].checked = true;
		}else{
			/*var r = confirm("¿Realmente desea desasignar a este Imputado? ");
			if (r == true) {
				$('#' + selectedId).prop('checked',false); */
				colapsaAcordeon();
				//cierra el acordeon
				$('#collapse' + idImputado).collapse("hide");
				//elimina del array la informaciOn del Imputado
				findMedida(idImputado);
				//elimina del array la informacion de la apelacion del imputado
				findApelacion(idImputado);
				//limpia los campos del imputado
				cleanImputadoInfoFields(idImputado)
				//reset del boton de edicion de apelacion
				editButton(idImputado,true);
/*			} else {
			}*/
		}
	});

	/**
	* Cambio de etiquetas al momento de cambiar el combo de carpetas
	*/
	$('#select_mcautelares_carpeta, #select_mcautelares_carpeta_busqueda').on('change', function(){
		var label = $(this).find('option:selected').text();
		var key = $(this).find('option:selected').val();
		label = (key > 0 ? label : '');
		$('#label_mcautelares_text1, #label_mcautelares_text2').empty().html("No. de " + label);
		//Limpia los campos de captura de llaves al cambiar la Carpeta
    
		cleanFields(3);
	});

	/**
	 * Al salir del foco del nUmero y año de la causa, consulta la carpeta judicial
	 */
	$("#btn_buscaCarpeta").on('click', function(){
		buscaCarpeta();
	});
	function buscaCarpeta(){
		var carpeta = $('#select_mcautelares_carpeta option:selected').val();
		var causa_numero =  $('#input_mcautelares_numero').val();
		var causa_anio = $('#input_mcautelares_anio').val();
		var activo = 'S';
		var accion = 'mp_obtenerAuto';
		var idActuacion = idActuacion || '';
		var idCarpetaJudicial = idCarpetaJudicial || '';
		var mensajeBusqueda = '';
		if(carpeta != '' && carpeta>0){
			if(causa_numero !=''){
				if(causa_anio != ''){
					$.ajax({
						async: false,
						type: 'POST',
						url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
						data: {
							idActuacion:idActuacion,
							numero:causa_numero,
							anio:causa_anio,
							cveTipoCarpeta:carpeta,
							cveJuzgado:cveJuzgado,
							cveTipoActuacion:cveTipoActuacion,
							activo:activo,
							accion:accion
						}
					}).done(function(response){
		                var object = eval("("+response+")");
						var totalRecords = object.totalCount;
						var message = '';
						if(totalRecords > 0){
							var data = object.data;
							var referencia = object.referencia[0];
							carpetasJudiciales.idReferencia = referencia.idReferencia;
							carpetasJudiciales.numero = referencia.numero;
							carpetasJudiciales.anio = referencia.anio;
							carpetasJudiciales.cveTipoCarpeta = referencia.cveTipoCarpeta;
							carpetasJudiciales.cveJuzgado = referencia.cveJuzgado;
							cleanFields(4);
							disabledFields(false,false);					
							imputadosTable(response);
							$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden","true").after('').append('&nbsp;Datos Encontrados.');
						}else{
							cleanFields(4);
							disabledFields(false,true);
							if ('text' in object) {
								message = object.text;
							}else{
								message = 'Error.';
							}
							showMessage(message,'information');
							$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + message);
						}
					});
				}else{
					$('#input_mcautelares_anio').focus();
					mensajeBusqueda = 'Necesita ingresar el a&ntilde;o.';
					showMessage(mensajeBusqueda,'warning');
					$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + mensajeBusqueda);
				}
			}else{
				$('#input_mcautelares_numero').focus();
				mensajeBusqueda = 'Necesita ingresar el n&uacute;mero.';
				showMessage(mensajeBusqueda,'warning');
				$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + mensajeBusqueda);
			}
		}else{
			$('#select_mcautelares_carpeta').focus();
			mensajeBusqueda = 'Necesita definir la carpeta.';
			$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + mensajeBusqueda);
			showMessage(mensajeBusqueda,'warning');
		}
	}

	/**
	* ConfirmaciOn de la eliminaciOn de una Medida Cautelar
	*/
	$('#btn_mproteccion_delete').click(function(){
		showMessage('Esta a punto de eliminar la informaci&oacute;n.','warning');
		var response = confirm("¿Realmente desea eliminar el registro?");
		if (response) {
			$("#divAdvertencia").hide();
			deleteMedida()
			cleanFields();
			$('#btn_mproteccion_delete').prop("disabled",true);
			$('#btn_mproteccion_delete').hide();
		}		
	});

    function visorDocuemntos() {
            $.ajax({
                type: 'POST',
                url: 'visorpdf/index.php',
                data: {idCarpetaJudicial: "", idActuacion: $('#idActuacion').val(), cveTipoDocumento: 17}, //malo
                async: false,
                dataType: 'html',
                beforeSend: function () {
                    $('#visor').html('<h3>Consultando informaci&oacute;n ... espere.</h3>');
                },
                success: function (data) {
                    $('#visor').html(data);
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. '+  otroobj +'</h3>'); 
                    console.log('\nOBJ: '+objeto+ '\nQ: '+quepaso+'\nO:'+otroobj)
                }
            });
        };
        
     function enviar(){
        var strDatos = "accion=generarJson";
            strDatos += "&cveTipo=2"; //2 = actuacion
            strDatos += "&cveTipoDocumento=17"; //tipo documento
            strDatos += "&idActuacion="+$("#idActuacion").val();
            
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
                }
            },
            error: function (objeto, quepaso, otroobj) {
            	showMessage("Error en la peticion:\n\n" + quepaso, 'error');
            }
        });
     };

	//funcion para bloquear los campos y evitar cambios cuando viene del arbol
	function bloqueaCamposLlave(){
		$('#cveTipoJuzgado, #select_mcautelares_carpeta, #input_mcautelares_numero, #input_mcautelares_anio').prop('disabled',true);
	}

	function obtieneDatosCarpeta(){
	    var idCarpetaJudicialArbol = $('#idCarpetaJudicialArbol').val();
	    var cveTipoCarpetaArbol = $('#cveTipoCarpetaArbol').val();
	    $('#select_mcautelares_carpeta').val( cveTipoCarpetaArbol );
		var urlFacade = "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php";
		var dataFacade = "accion=consultar&activo=S&idCarpetaJudicial=" + idCarpetaJudicialArbol;
		$.ajax({ async: false, type: 'POST', url: urlFacade, data: dataFacade
		}).done(function(response)	{
			var objeto = eval('(' + response + ')');
			var data = '';
			if(objeto.totalCount>0){
				data = objeto.data[0];
				$('#input_mcautelares_numero').val( data.numero );
				$('#input_mcautelares_anio').val( data.anio );
			}
		});
        //obtencion de los datos para la seleccion del combo de juzgado y relacionado con 
        var urlFacade = "../fachadas/sigejupe/actaminima/ActaminimaFacade.Class.php";
        var dataFacade = "accion=carpetaArbol&idCarpetaJudicial=" + idCarpetaJudicialArbol;
        $.ajax({ async: false, type: 'POST', url: urlFacade, data: dataFacade
        }).done(function(response)  {
            var objeto = eval('(' + response + ')');
            $('#cveTipoJuzgado').val( objeto.idJuzgado );
        });
	}

	//validaciOn de teclas numEricas
	$('#input_mcautelares_numero, #input_mcautelares_anio, #input_mcautelares_numero_busqueda, #input_mcautelares_anio_busqueda, #input_mcautelares_numerotoca, #input_mcautelares_aniotoca').keypress(validateNumber);
	//validacion para cambio de foco en Intro
	$('#input_mcautelares_numero').keypress(function(event){ changeFocus(event,'input_mcautelares_anio'); });
	$('#input_mcautelares_anio').keypress(function(event){ changeFocus(event,'input_mcautelares_sintesis'); });
	$('#input_mcautelares_sintesis').keypress(function(event){ changeFocus(event,'select_mcautelares_notificacion'); });
	$('#input_mcautelares_numero_busqueda').keypress(function(event){ changeFocus(event,'input_mcautelares_anio_busqueda'); });
	$('#input_mcautelares_numerotoca').keypress(function(event){ changeFocus(event,'input_mcautelares_aniotoca'); });
	$('#input_mcautelares_aniotoca').keypress(function(event){ changeFocus(event,'select_mcautelares_salastoca'); });
	//calendarios para la bUsqueda
	$('#input_mcautelares_finicial_busqueda, #input_mcautelares_ffinal_busqueda').datepicker().on('changeDate',function(e){ $(this).datepicker('hide'); });

	/**
	 * Variable para almacenar la informacion de las carpetas judiciales
	 */
	var carpetasJudiciales = {
		idReferencia:0,
		numero:0,
		anio:0,
		cveTipoCarpeta:0,
		cveJuzgado:0
	};

	/**
	* Variable para almacenar la informaciOn de las Apelaciones
	*/
	var Apelaciones = {
		apelacion:[],
		contador:0
	}

	/**
	 * Variable para almacenar registros en la bUsqueda
	 */
	var findContent = {
		regs:[]
	};

	/**
	 * Variable para almacenar los permisos del formulario
	 */
	var crud = {
		create:'N',
		read:'N',
		update:'N',
		delete:'N'
	};

	/**
	* Variable para almacenar las Medidas Cautelares
	*/
	var medidasProteccion = {
		data:[],
		counter:0
	}
	
	/**
	* Variables varias
	*/
	var titulos = {'titulo1':'Medidas de Protecci&oacute;n','titulo2':'B&uacute;squeda','titulo3':'Resultados','titulo4':'Captura de Apelaci&oacute;n'};
	var cveJuzgado = $('#SysCveAdscripcion').val();
	var cveUsuario = $('#SysCveUsuarioSistema').val();
	var cveTipoActuacion = 14;
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
	$(function(){
    cargaInstancia();
		setPermissions();
		disabledFields(false,true);
		//muestra contenido de carpetas en mOdulo principal y mOdulo de busqueda
		//fillCombo(['select_mcautelares_carpeta','select_mcautelares_carpeta_busqueda'],'tiposcarpetas/TiposcarpetasFacade','cveTipoCarpeta','desTipoCarpeta');
		//muestra contenido de notificaciones
		fillCombo(['select_mcautelares_notificacion'],'tiposnotificaciones/TiposnotificacionesFacade','cveTipoNotificacion','desTipoNotificacion');
		//muestra contenido de sentidos
		fillCombo(['select_mcautelares_sentidotoca'],'sentidosresoluciones/SentidosresolucionesFacade','cveSentido','desSentido');
		cargaJuzgados(); //carga los Juzgados
		//ObtenciOn de salas para los imputados a travEs del webservice 
		getSalas();
		//inicializacion del editor
        editor = UE.getEditor('input_mcautelares_observaciones');
        editor.ready(function () {
            editor.setContent();
        });
		medidasProteccion.data = [];
		Apelaciones.apelacion = [];
		//validacion de datos para el arbol
	    if( $('#procedencia').val() == 1 ){
	    	if( $('#idActuacion').val() != '' && $('#idActuacion').val() != 0 ){
		    	findMedidasCautelares( $('#idActuacion').val() );
	    	}else if ( $('#idCarpetaJudicialArbol').val() != '' && $('#cveTipoCarpetaArbol').val() != ''){ //no es de actuacion
	    		obtieneDatosCarpeta();
	    		//buscaCarpeta();
	    	}
	    	$('.botonesArbol').hide();
		    bloqueaCamposLlave();
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
