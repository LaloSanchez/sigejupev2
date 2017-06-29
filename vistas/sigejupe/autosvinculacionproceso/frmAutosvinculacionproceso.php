<?php //ihs
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
        $SysCveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
    	$SysNumEmpleado = $_SESSION['numEmpleado'];
    	$SysCvePerfil = $_SESSION['cvePerfil'];
    	$SysCveAdscripcion = $_SESSION['cveAdscripcion'];
    	//POST para arbol
    	$procedencia = 0; 
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
        $origen = ( isset($_GET['origen']) && $_GET['origen'] != "" ) ? $_GET['origen'] : "";
        $juzgadoOrigenArbol = ( isset($_POST['juzgadoOrigenArbol']) && $_POST['juzgadoOrigenArbol'] != "" ) ? $_POST['juzgadoOrigenArbol'] : "";
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
    	.textCorrection{ display: block; text-transform: lowercase; }
    	.textCorrection:first-letter { text-transform: uppercase; }
    	.capital{ text-transform: uppercase; }
    	input, textarea{ resize: none; }
    </style>
    <div class="panel panel-default">
    	<div class="panel-heading">
    	    <h5 class="panel-title" id="autosTitulo">
    	        Auto de Vinculaci&oacute;n
    	    </h5>
    	</div>
    	<div class="panel-body">
    		<input type="hidden" id="cveUsuarioSistema" value="<?=$SysCveUsuarioSistema?>"/>
    		<input type="hidden" id="SysCvePerfil" value="<?=$SysCvePerfil?>"/>
    		<input type="hidden" id="SysCveAdscripcion" value="<?=$SysCveAdscripcion?>"/>
    		<input type="hidden" id="SysNumEmpleado" value="<?=$SysNumEmpleado?>"/>
    		<input type="hidden" id="cveTipoJuzgadoAlt" name="cveTipoJuzgadoAlt"/>
    		<input type="hidden" id="procedencia" name="procedencia" value="<?=$procedencia?>" />
    		<!-- <input type="hidden" id="idActuacionArbol" name="idActuacionArbol" value="<?=$idActuacionArbol?>" /> -->
    		<input type="hidden" id="idCarpetaJudicialArbol" name="idCarpetaJudicialArbol" value="<?=$idCarpetaJudicialArbol?>" />
    		<input type="hidden" id="cveTipoCarpetaArbol" name="cveTipoCarpetaArbol" value="<?=$cveTipoCarpetaArbol?>" />
    		<input type="hidden" id="idActuacion" name="idActuacion" value="<?=$idActuacionArbol?>" />
                <input type="hidden" id="origen" value="<?php echo $origen; ?>" />
                <input type="hidden" id="juzgadoOrigenArbol" value="<?php echo $juzgadoOrigenArbol; ?>" />
                    <div id="divFormulario" class="form-horizontal" data-step="1" data-intro="Este m&oacute;dulo le permite registrar un nuevo auto de vinculaci&oacute;n a proceso, el cual puede ser modificado y/o eliminado." data-position='top'>
    			<div class="form-group">                                                                
                                <label for="cveTipoJuzgado" class="control-label col-md-3 needed" data-step="2" data-intro="La informaci&oacute;n requerida se indica con (*)." data-position='right'>Juzgado:</label>
                    <div class="col-md-9">
                        <select class="form-control " name="cveTipoJuzgado" id="cveTipoJuzgado" onchange="cargaTipoCarpeta();"></select>
                    </div>                                
                </div>
    			<div class="form-group"> 
    				<label class="control-label col-md-3 needed">Relacionado con</label>
    				<div class="col-md-9">
    					<select id="select_auto_carpeta" class="form-control" tabindex="1"></select>
    				</div>
    			</div>
    			<div class="form-group">
    				<label class="control-label col-md-3 needed" id="label_auto_text1">No. de</label>
    					<div class="col-md-9">
    						<input type="text" id="input_auto_numero" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline"  tabindex="2"/>
    					/
    					 	<input type="text" id="input_auto_anio" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline"  tabindex="3"/>						
    					 	&nbsp;
    						<button class="btn btn-primary" id="btn_buscaCarpeta">Buscar imputado(s)</button>
    					 	&nbsp;&nbsp;
    				 		<span id="resultadoBusquedaActuacion" class="glyphicon"></span>
    					</div>
    			</div>
    			<div class="form-group"> <!-- ResoluciOn -->
    				<label class="control-label col-md-3 needed">Resoluci&oacute;n</label>
    				<div class="col-md-9">
    					<input type="text" id="input_auto_resolucion" maxlength="300" placeholder="INGRESE LA RESOLUCI&Oacute;N" class="form-control" style="text-transform:uppercase;" tabindex="4"/>
    				</div>
    			</div>
    			<div class="form-group"> <!-- Notificacion -->
    				<label class="control-label col-md-3 needed">Tipo de notificaci&oacute;n</label>
    				<div class="col-md-9">
    					<select id="select_auto_notificacion" class="form-control" tabindex="5"></select>
    				</div>
    			</div>
    			<div class="form-group"> <!-- Tipo de Auto -->
    				<label class="control-label col-md-3 needed">Tipo de Auto</label>
    				<div class="col-md-9">
    					<select id="select_auto_auto" class="form-control" tabindex="6"></select>
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
    			<div class="form-group"> <!-- Imputados -->
    				<label class="control-label col-md-3 needed">Imputado(s)</label>
    				<div class="col-md-9 table-responsive">
    					<table class="table table-hover table-striped table-bordered">
    					<thead>
    						<tr>
    							<td>No.</td>
    							<td colspan="2">Nombre</td>
    							<td colspan="2">Apelaci&oacute;n</td>
    						</tr>
    					</thead>
    					<tbody id="imputados_tbody"><tbody>
    					</table>
    				</div>
    			</div>			
    			<div class="form-group">
    				<label class="control-label col-md-3 needed">Contenido del documento</label>
    				<div class="col-md-9">
    				<script id="input_auto_notas" type="text/plain" style="width: 100%; height: 300px; margin: 0px auto; text-transform:uppercase;"></script>
    				<!-- <textarea id="input_auto_notas" rows="6" placeholder="INGRESE LAS NOTAS" style="text-transform:uppercase;" class="form-control" tabindex="7"></textarea> -->
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-md-offset-3 col-md-9">
                                        <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar un oficio." data-position='top'>                                        
                                            <input type="submit" class="btn btn-primary btn-adaptar" value="Guardar" onclick="saveAuto()" id="btn_auto_save"/>
    				                    </div>
                                        <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>                                        
                                            <input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="cleanFields()" id="btn_auto_clean"/>
    			                         </div>
                                        <div class="col-md-2 botonesAdaptar botonesArbol">
                                            <input type="submit" class="btn btn-primary btn-adaptar" value="Consultar" onclick="changeModule(2);" id="btn_auto_search"/>
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
    						<label class="control-label col-md-3">Carpeta</label>
    						<div class="col-md-9"><select id="select_auto_carpeta_busqueda" class="form-control"></select></div>
    					</div>
    					<div class="form-group">
    						<label class="control-label col-md-3" id="label_auto_text2">No. de</label>
    						<div class="col-md-9">
    							<input type="text" id="input_auto_numero_busqueda" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline" />
    						/
    						 	<input type="text" id="input_auto_anio_busqueda" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline" />
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="control-label col-md-3">Fecha inicio</label>
    						<div class="col-md-2">
    							<input type="text" id="input_auto_finicial_busqueda" placeholder="FECHA INICIAL" class="form-control datepicker" data-date-format="dd/mm/yyyy"/>
    						</div>
    					</div>
    					<div class="form-group">
    						<label class="control-label col-md-3">Fecha fin</label>
    						<div class="col-md-2">
    						 	<input type="text" id="input_auto_ffinal_busqueda" placeholder="FECHA FINAL" class="form-control datepicker" data-date-format="dd/mm/yyyy"/>
    						</div>
    						<div class="col-xs-2">
    						</div>
    					</div>
    					<div class="form-group">
    						<div class="col-md-offset-3 col-md-9">
                                                        <div class="col-md-2 botonesAdaptar">                                                        
                                                            <input type="submit" class="btn btn-primary btn-adaptar" value="Buscar" onclick="mainSearch()">
    	                    </div>
                                                        <div class="col-md-2 botonesAdaptar">                                                        
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
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="findAutos()">
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="findAutos()">
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
    						<input type="submit" class="btn btn-primary" value="Regresar" onclick="backFromApelacion()">
    					</div>
    					<div class="col-xs-8 col-sm-9 col-md-10">
    						<h5 id="imputadoNameForm"></h5>
    					</div>
    				</div>
    				<hr/>
    				<div class="form-group"> <!-- Sentido -->
    					<input type="hidden" id="idImputadoCarpeta"/> <!-- hidden -->
    					<label class="control-label col-md-3">Sentido</label>
    					<div class="col-md-9">
    						<select id="select_auto_sentidotoca" class="form-control" tabindex="6"></select>
    					</div>
    				</div>
    				<div class="form-group">
    					<label class="control-label col-md-3">No. de Toca</label>
    						<div class="col-md-9">
    							<input type="text" id="input_auto_numerotoca" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline"/>
    						/
    						 	<input type="text" id="input_auto_aniotoca" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline"/>
    						</div>
    				</div>
    				<div class="form-group"> <!-- Salas -->
    					<label class="control-label col-md-3">Sala</label>
    					<div class="col-md-9">
    						<select id="select_auto_salastoca" class="form-control" tabindex="6"></select>
    					</div>
    				</div>
    				<div class="form-group">
    					<div class="col-xs-offset-3 col-xs-9">
    	                    <input type="submit" class="btn btn-primary" value="Limpiar" onclick="cleanFields(2)">
    	                </div>
    				</div>
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
        if(editor!=undefined){
            editor.destroy();
        }    
        var editor = null;

    	/**
        * FunciOn para obtener y asignar los permisos del usuario activo sobre el formulario
        */
        function setPermissions(){
    		var cveUsuarioSistema = $('#cveUsuarioSistema').val();
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
                                        if (nombreHijo.nomFormulario == 'AUTOS DE VINCULACION') {
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
    					$('#btn_buscaCarpeta, #btn_mcautelares_search').prop('disabled',true);
    				}
    				if(crud.create == 'N'){
    					$('#btn_mcautelares_save').prop('disabled',true);
    				}
    				if(crud.delete == 'N'){
    					$('#btn_mcautelares_delete').prop("disabled",true);
    				}
    			});
        }

        function backFromApelacion(){
    		var contenidoDocumento = localStorage.contenidoDocumento;
    		localStorage.removeItem("contenidoDocumento");
    		llenareditor( contenidoDocumento );

        	addApelacion();
            //cambia el titulo
            $('#autosTitulo').empty().append(titulos['titulo1']);
        	changeDivForm(4)
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
                            var apelacionPosicion = find_in_object(Apelaciones.apelacion, 'idImputadoCarpeta', idImputado);
                            var elemento = Apelaciones.apelacion[apelacionPosicion];
                            if(elemento.apelacionSentido == 0 || elemento.apelacionNumero == '' || elemento.apelacionAnio == '' || elemento.apelacionSala == 0){
                                            //validar que la apelacion tenga los datos completos
                                            //si los datos no estan completos abrir la ventana de la apelacion con el imputado correspondiente
                                    var nombreImputado = $.trim($('#labelImputado_' + idImputado ).text());
                                    showMessage('Falta completar la informaci&oacute;n de la apelaci&oacute;n de <span class="capital">' + nombreImputado +'</span>','information');
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
    	 * Muestra/Oculta el div del formulario y la tabla de bUsqueda
    	 * @param {int} opc Recibe un parametro para mostrar el DIV correspondiente
    	 */
        function changeDivForm(opc) {
        	var titulo = '';
            if (opc === 1) {
                $("#divConsulta").hide("fade");
                $("#divResultados").hide("fade");
                $("#divFormulario").show("slide");
                //cambia el titulo
                $('#autosTitulo').empty().append(titulos['titulo1']);
            } else if (opc === 2) {
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
                //cambia el titulo
                titulo = '<a href="#" onclick="changeModule(1)" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / ' + titulos['titulo2'];
                $('#autosTitulo').empty().append(titulo);
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
                titulo = '<a href="#" onclick="changeModule(1)" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / <a href="#" onclick="changeModule(6)" style="text-decoration:underline;">' + titulos['titulo2'] + '</a> / ' + titulos['titulo3'];
                $('#autosTitulo').empty().append(titulo);
            } else if(opc == 6){
    			$("#divResultados").hide("fade");
                $("#divConsulta").show("slide");
            }
        }

    	/**
    	 * Limpia el contenido del formulario
    	 */
    	function cleanFields(idModule) {
            $("#btn_auto_save").show();
            $("#cmbEstatus").val(0);
    		var idModule = idModule || '1';
    		if(idModule == 1){ //modulos de captura y busqueda
    		    $('#divFormulario, #divConsulta').find('input[type=text], input[type=password], input[type=number], input[type=email], input[type=hidden], textarea').val('');
    		    $('#divFormulario, #divConsulta').find('select').prop('selectedIndex',0);
    		    $('#label_auto_text1, #label_auto_text2').empty().html("No. de");
    		    $('#imputados_tbody').html('');
    		    $('#auto_tbody').html('');
    		    $('#btn_auto_delete').prop('disabled',true).hide();
    			disabledFields(false,true);
    			Apelaciones.apelacion = [];
    			Apelaciones.contador = 0;
    			$('#input_auto_finicial_busqueda,#input_auto_ffinal_busqueda').val(getDate('today'));
    			//$('#cveTipoJuzgado, #cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() );
    			$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').removeClass('glyphicon-ok');
    			$('#cveTipoJuzgado, #cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val() );
    			cargaTipoCarpeta();
    			editor.setContent("", false);
    			$('#inputPDF').hide();
    			$('#inputVisor').hide();			
    		} else if(idModule == 2){ //modulo de apelaciOn
    		    $('#input_auto_numerotoca, #input_auto_aniotoca').val('');
    		    $('#divApelacion').find('select').prop('selectedIndex',0);
    		} else if(idModule == 3){ //al cambiar el combo de carpeta
    		    $('#divFormulario, #divConsulta').find('input[type=text], input[type=password], input[type=number], input[type=email], input[type=hidden], textarea').val('');
    		    $('#select_auto_notificacion, #select_auto_auto').prop('selectedIndex',0);
    		    $('#imputados_tbody').html('');
    			disabledFields(false,true);
    			Apelaciones.apelacion = []
    			Apelaciones.contador = 0;
    		} else if(idModule == 4){
    		    $('#imputados_tbody').html('');
    		    $('#idActuacion, #input_auto_resolucion').val('');
    		    //$('#input_auto_notas').val('');
    		    editor.setContent("", false);
    		    $('#select_auto_notificacion, #select_auto_auto').prop('selectedIndex',0);
    			Apelaciones.apelacion = []
    			Apelaciones.contador = 0;
    			//$('#cveTipoJuzgado, #cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() );
    			$('#cveTipoJuzgado, #cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val() );
    		}
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
    	    return finaldate
        }

    	/**
    	 * Desactiva/activa los campos clave del formulario
    	 * @param {boolean} stateReference El valor se asigan directamente al atributo de los campos de referencia
    	 * @param {boolean} stateCertification El valor se asigan directamente al atributo de los campos de certificaciOn
    	 */
    	function disabledFields(stateKeyFields,stateModuleFields){
    		//Key fields
    		idKeyFields = ['select_auto_carpeta','input_auto_numero','input_auto_anio'];
    		$.each(idKeyFields, function(k,v){
    			$('#' + v).attr("disabled",stateKeyFields);
    		});
    		//Module fields
    		idModuleFields = ['input_auto_resolucion','select_auto_notificacion','select_auto_auto','cmbEstatus'];
    		$.each(idModuleFields, function(k,v){
    			$('#' + v).attr("disabled",stateModuleFields);
    		});
    	}

    	/**
    	 * Muestra mensajes personalizados en el div destinado para ello
    	 * @param {string} message Es el mensaje que se mostrarA
    	 * @param {string} type Es el tipo de mensaje. 1:success, 2:warning, 3:information, 4:error
    	 */
        function showMessage(message,type){
        	var message = message || '';
        	var div_message = '';
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
            $('#' + div_message).html(message);
            $('#' + div_message).show("slide");
            if(!state){
            	setTimeAlert(div_message);
            }else{
                setTimeout(function () {
                    $("#" + div_message).hide("slide");
                }, 5000);

            }
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
    						options += '<option value="' + v[value] + '">' + v[description] + '</option>'; 
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
    		    $('#input_auto_finicial_busqueda, #input_auto_ffinal_busqueda').val(getDate('today'));
    		}
    		if(idModule == 6){
    			changeDivForm(2);
                //cambia el titulo
                var titulo = '<a href="#" onclick="changeModule(1)" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / ' + titulos['titulo2'];
                $('#autosTitulo').empty().append(titulo);
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
    				$('#select_auto_salastoca').empty().html(options);
    			}
    		});
    		return;
    	}

    	/**
    	* Obtiene la lista de Imputados de la tabla Imputados Carpetas
    	* @param {integer} idCarpetaJudicial Es el Id de la tabla Carpetas Judiciales, se usa para filtrar y obtener los imputados de tal carpeta
    	*/
    	function getImputadosCarpetas(idCarpetaJudicial){
    		var respuesta = '';
    		$.ajax({
    			async: false,
    			type: 'POST',
    			url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
    			data: {
    				accion:'consultar',
    				activo:'S',
    				idCarpetaJudicial:idCarpetaJudicial
    			}
    		}).done(function(response)	{
                respuesta = response;
    		});
    		return respuesta;
    	}

    	/**
    	* Muestra la tabla de imputados dentro del formulario
    	* @param {json} json Recibe el resultado de ImputadosCarpetas
    	*/
    	function imputadosTable(imputados, imputadosPrevios){
            var imputadosPrevios = imputadosPrevios || '';
    /*		var object = eval('('+json+')');
    		var totalRecords = object.totalCount;
    		if(totalRecords > 0){
    			var list = object.data;
    			var name = '';
    			var imputadoId = '';*/
    			var counter = 0;
    			var tbody = '';
                var fechaRegistro = '';
                var previo = 0;
                $.each(imputados, function(k,v){
                    previo = 0;
                    fechaRegistro = '';
                    imputadoId = v.idImputado || v.idImputadoCarpeta;
                    $.each(imputadosPrevios, function(k2,v2){
                        if( v2.idImputado == imputadoId ){ //el imputado es igual al imputado previo
                            fechaRegistro = ' - Registrado el d&iacute;a: ' + v2.fechaRegistro;
                            previo = 1;
                            return;
                        }
                    });
    				name = v.nombre;
    				counter = parseInt(k)+1;
    				tbody += '<tr>';
    				tbody += '<td>' + counter +'</td>';
//                    if( previo == 0){
    				    tbody += '<td><input class="imputadoCheck" id="imputadoCheck_' + imputadoId + '" type="checkbox" name="" value="' + imputadoId + '"></td>';
                        tbody += '<td><label for="imputadoCheck_' + imputadoId + '" id="labelImputado_' + imputadoId + '">' + name + fechaRegistro + '</label></td>';
                        tbody += '<td><select id="imputadoApelacion_' + imputadoId + '" class="imputadoApelacion" disabled><option value="N">NO</option><option value="S">SI</option></select></td>';
                        tbody += '<td>'
                                +'<button id="edit_' + imputadoId + '" onclick="loadApelacionInfo(' + imputadoId + ')" type="button" class="btn btn-default btn-sm" aria-label="Left Align" disabled="disabled">'
                                +'<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Apelaci&oacute;n'
                                +'</button></td>';
//                    }//else{
//                        tbody += '<td><input type="checkbox" checked disabled></td>';
//    				    tbody += '<td colspan="3"><label>' + name + fechaRegistro + '</label></td>';
//                    }
    				tbody += '</tr>';
    			});
    /*		}else{
    			//habilita campos
    			disabledFields(false,true);
    			//regresa el foco al campo numero
    			$('#input_auto_numero').focus();
    			showMessage('NO SE ENCUENTRAN IMPUTADOS RELACIONADOS. VERIFIQUE LOS DATOS.','information');
    		}
    */		$('#imputados_tbody').empty().append(tbody);
    		return;
    	}

    	/**
    	* Funcion para obtener los imputadaos que tienen 'check' en la tabla, estos se guardarAn en la tabla -tblautosimputados-
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
    			apelacionState = $('#imputadoApelacion_' + idImputado).val();
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
    	* FunciOn para obtener 'idAutoImputado' y eliminar el contenido de la tabla -tblautosapelaciones-
    	* @param {integer} idActuacion ID de la actuaciOn
    	* @param {object} info Objeto con la informaciOn de ImputadosCarpeta
    	*/
    	function getIdAutoImputado(idActuacion,info){
    		//obtencion del idAutoImputado
    		$.post("../fachadas/sigejupe/autosimputados/AutosimputadosFacade.Class.php",
    			{
    				idActuacion:idActuacion,
    				idImputadoCarpeta:info.idImputado,
    				accion:'consultar'
    			},function(response){
    				var object = eval('(' + response + ')');
    				var totalRecords = object.totalCount;
    				if(totalRecords > 0){
    					var data = object.data[0];
    					var idAutoImputado = data.idAutoImputado;
    					//eliminaciOn de las apelaciones relacionadas al imputado
    					deleteApelacion(idAutoImputado);
    				}
    			});
    		return;
    	}

    	/**
    	* FunciOn para eliminar los registros de la tabla -tblautosimputados-
    	* @param {integer} idActuacion ID de la actuaciOn
    	* @param {object} info Objeto con la informaciOn de ImputadosCarpeta
    	*/
    	function deleteAutoImputado(idActuacion,info){
    		//eliminacion del imputado relacionado al auto
    		$.post("../fachadas/sigejupe/autosimputados/AutosimputadosFacade.Class.php",
    			{
    				idActuacion:idActuacion,
    				idImputadoCarpeta:info.idImputado,
    				accion:'borrarFull'
    			},function(response){
    		});
    		return;
    	}

    	/**
    	* FunciOn para la eliminaciOn de los registros en las tablas -tblautosimputados- y -tblautosapelados-
    	*/
    	function deleteImputadosApelados(){
    		var idActuacion = $('#idActuacion').val();
    		var imputadosList = getImputados('full');
    		//eliminacion de los datos previos
    		$.each(imputadosList, function(k,v){
    			//Borra en -tblautosapelados- a traves del 'idAutoImputado'
    			getIdAutoImputado(idActuacion,v);
    			//Borra en -tblautosimputados-
    			deleteAutoImputado(idActuacion,v);
    		});
    		return;	
    	}

    	/**
    	* FunciOn para borrar la apelaciOn asignada a un imputado, en la tabla 'tblautosapelados'
    	* @param {integer} idAutoImputado Id del registro a borrar fisicamente
    	*/
    	function deleteApelacion(idAutoImputado){
    		$.post("../fachadas/sigejupe/autosapelados/AutosapeladosFacade.Class.php",
    			{
    				idAutoImputado:idAutoImputado,
    				accion:'bajaAutoImputado'
    			},
    			function(response){
    		});
    		return;
    	}

    	/**
    	* FunciOn para la validaciOn de checks antes de guardar el Auto
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
    	* FunciOn para guardar el Auto de VinculaciOn
    	*/
    	function saveAuto(){
    		//campos de captura de Auto
    		var autoResolucion = $('#input_auto_resolucion').val();
    		var autoNotificacion = $('#select_auto_notificacion').val();
    		var autoAuto = $('#select_auto_auto').val();
    		var autoNotas = editor.getContent();
    		//varibles de control
    		var idActuacion = $('#idActuacion').val() > 0 ? $('#idActuacion').val() : '';
    		var numActuacion = 0;
    		var aniActuacion = 0;
    		var idReferencia = carpetasJudiciales.idReferencia;
    		var numero = carpetasJudiciales.numero;
    		var anio = carpetasJudiciales.anio;
    		var cveTipoCarpeta = carpetasJudiciales.cveTipoCarpeta;
            var cveJuzgado = $('#cveTipoJuzgado').val();
    		var cveEstatus = $('#cmbEstatus').val();
    		cveJuzgado = cveJuzgado.split('/');
    		cveJuzgado = cveJuzgado[0];				
    		var sintesis = autoResolucion;
    		var observaciones = autoNotas;
    		var cveUsuario = cveUsuarioSistema;
    		var activo = 'S';
    		var cveTipoNotificacion = autoNotificacion;
    		var cveTipoAuto = autoAuto;
    		var imputadosList = getImputados('checked');
    		var apelaciones = Apelaciones.apelacion;
    		var accion = '';
    		if(idActuacion == ''){
    			//es insercion
    			accion = 'guardaAuto';
    		}else{
    			//es actualizacion
    			accion = 'actualizaAuto';
    		}
    		//validaciOn de los campos del auto
    		var autoFields = [
    			{name:'JUZGADO',value:cveJuzgado},
    			{name:'RESOLUCION',value:autoResolucion},
    			{name:'NOTIFICACION',value:autoNotificacion},
    			{name:'AUTO',value:autoAuto},
    			{name:'NOTAS',value:autoNotas}];
    		var autoState = validateFields(autoFields);
    		//validaciOn de los check
    		var imputadosState = validateChecks();

    		if(autoState == true && imputadosState == true){
    			//validacion de contenido de informacion en las apelaciones
    			var estadoApelaciones = false;
    			estadoApelaciones = validarApelaciones();
    			if(estadoApelaciones==true){
    				//guarda auto
    				$.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
    					{
    						idActuacion:idActuacion,
    						cveTipoActuacion:cveTipoActuacion,
    						idReferencia:idReferencia,
    						numero:numero,
    						anio:anio,
                            cveTipoCarpeta:cveTipoCarpeta,
    						cveEstatus:cveEstatus,
    						cveJuzgado:cveJuzgado,
    						sintesis:sintesis,
    						observaciones:observaciones,
    						cveUsuario:cveUsuario,
    						activo:activo,
    						cveTipoNotificacion:cveTipoNotificacion,
    						cveTipoAuto:cveTipoAuto,
    						listaImputados:imputadosList,
    						apelaciones:apelaciones,
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
                                if($('#cmbEstatus').val() == 55){
                                   disabledFields(true,true); 
                                   $("#btn_auto_save").hide();
                                }
    						}else{
    							showMessage(message,'error');
    						}
    					});
    			}
    		}else{
    			var message = 'A&Uacute;N QUEDAN CAMPOS VACIOS:<br/>';
    			$.each(autoState,function(k,v){
    				message += '- ' + v + '<br/>';
    			});
    			if(!imputadosState){
    				message += '- DEFINIR AL MENOS UN IMPUTADO<br/>';
    			}
    			message += 'VERIFIQUE.';
    			showMessage(message,'information');
    		}
    		return;
    	}

    	/**
    	* FunciOn para la eliminaciOn lOgica de un Auto
    	*/
    	function deleteAuto(){
    		//borra primero la informaciOn vinculada de las tablas -tblautosimputados- y -tblautosapelados-
    		deleteImputadosApelados();
    		//borra de forma logica la actuacion
    		var idActuacion = $('#idActuacion').val();
    		var activo = 'N';
    		$.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
    			{
    				idActuacion:idActuacion,
    				activo:activo,
    				accion:'borraAuto'
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
            var index = array.map(function(d) { 
            	return d[property]; 
            }).indexOf(value);
            return index;
        }

        /**
        * Busca una apelaciOn, si existe la borra y reduce en 1 el contador
        * @param {integer} idImputadoCarpeta Es el ID de ImputadoCarpeta
        */
        function findApelacion(idImputadoCarpeta){
    		//validar la existencia del elemento a travEs de idImputadoCarpeta
        	var item_id = find_in_object(Apelaciones.apelacion, 'idImputadoCarpeta', idImputadoCarpeta);
        	//si existe el elemento lo borra
            if(item_id > -1){
                    Apelaciones.apelacion.splice(item_id, 1);
                    Apelaciones.contador--;
            }
            return;
        }

        /**
        * FunciOn para guardar las Apelaciones en el array 'Apelaciones'
        */
    	function addApelacion(){
    		//campos de captura de ApelaciOn
    		var idImputadoCarpeta = $('#idImputadoCarpeta').val();
    		var apelacionSentido = $('#select_auto_sentidotoca').val();
    		var apelacionNumero = $('#input_auto_numerotoca').val();
    		var apelacionAnio = $('#input_auto_aniotoca').val();
    		var apelacionSala = $('#select_auto_salastoca').val();
    		var comboApelacion = 0;
    		var estadoBoton = true;
    		//campos de la apelaciOn
    		var apelacionFields = [
    			{name:'SENTIDO',value:apelacionSentido},
    			{name:'N&Uacute;MERO',value:apelacionNumero},
    			{name:'A&Ntilde;O',value:apelacionAnio},
    			{name:'SALA',value:apelacionSala}];
    		//validaciOn de los campos de la apelaciOn
    		//if(apelacionState == true){
    		findApelacion(idImputadoCarpeta);
    		var estado = verifyApelaciones(apelacionFields);			
    		if(estado){
    			//ingresar registro al array
    			Apelaciones.apelacion[Apelaciones.contador] = {
    				id:Apelaciones.contador,
    				idImputadoCarpeta:idImputadoCarpeta,
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
    		//cierra modulo
    		changeDivForm(4);
    		//cambia el select de apelacion
    		var idSelect = '#imputadoApelacion_' + idImputadoCarpeta;
    		$(idSelect).prop('selectedIndex',comboApelacion);
    		/*}else{
    			var message = 'A&Uacute;N QUEDAN CAMPOS VACIOS:<br/>';
    			$.each(apelacionState,function(k,v){
    				message += '- ' + v + '<br/>';
    			});
    			message += 'VERIFIQUE.';
    			showMessage(message,'information');
    		}*/
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
    	* FunciOn para cargar la infomaciOn de una apelaciOn ya sea para captura o modificaciOn
    	* @param {integer} idImputadoCarpeta Id del ImputadoCarpeta
    	*/
    	function loadApelacionInfo(idImputadoCarpeta){
    		var contenidoDocumento = editor.getContent();
    		localStorage.contenidoDocumento = contenidoDocumento;
    		//limpia campos de apelaciOn
    		cleanFields(2);
    		//asiga id de ImputadoCarpeta
    		$('#idImputadoCarpeta').val( $('#imputadoCheck_' + idImputadoCarpeta ).val() );
    		$('#imputadoNameForm').empty().html('Apelaci&oacute;n de: '+ $('#labelImputado_' + idImputadoCarpeta ).text() );
    		//obtiene la posicion del elemento en el array
    		var index = '';
    		$.each(Apelaciones.apelacion, function(k,v){
    			if(v.idImputadoCarpeta == idImputadoCarpeta){
    				index = k;
    				return;
    			}
    		});
    		//valida si existe un indice, significa que es consulta o modificacion de la apelacion y muestra el contenido en el formulario de Apelaciones
    		if(parseInt(index) > -1){
    			var element = Apelaciones.apelacion[index];
    			//llena el formulario con los datos del array
    			$('#select_auto_sentidotoca').val(element['apelacionSentido']);
    			$('#input_auto_numerotoca').val(element['apelacionNumero']);
    			$('#input_auto_aniotoca').val(element['apelacionAnio']);
    			$('#select_auto_salastoca').val(element['apelacionSala']);
    		}
    		//cambia titulo
            titulo = '<a href="#" onclick="backFromApelacion()" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / ' + titulos['titulo4'];
            $('#autosTitulo').empty().append(titulo);
    		//abre modulo de captura de apelaciOn
    		changeDivForm(3);
    		return;
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
    		findAutos();		
    	}

    	/**
    	* FunciOn buscar Autos con los parametros definidos
    	*/
    	function findAutos(idActuacion){
    		var idActuacion = idActuacion || '';
    		//carga variables
            var page = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
    		var tipoCarpeta = $('#select_auto_carpeta_busqueda option:selected').val();
    		tipoCarpeta = (tipoCarpeta!=0) ? tipoCarpeta : '';
    		var numActuacion = $('#input_auto_numero_busqueda').val();
    		var anioActuacion = $('#input_auto_anio_busqueda').val();
    		var fechaInicial = $('#input_auto_finicial_busqueda').val();
    		var fechaFinal = $('#input_auto_ffinal_busqueda').val();
    		var rangoFechas = obtieneFechas(fechaInicial,fechaFinal);
    		var cveJuzgadoBusqueda = ( $('#cveTipoJuzgado_busqueda').val() != 0) ? $('#cveTipoJuzgado_busqueda').val() : cveJuzgado;
    		var activo = 'S';
    		var tableContent = '';
    		//primero realiza la busqueda en la tabla -tblactuaciones-
    		//si encuentra registro lo trae de la tabla -tblcertificaciones-
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
    				accion:'buscarAutos'
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
    					+'			<th>Tipo de carpeta</th>'
    					+'			<th>Resoluci&oacute;n</th>'
    					+'			<th>Fecha de registro</th>'
    					+'		</tr>'
    					+'	</thead>'
    					+'	<tbody id="">';
    					$.each(data, function(k,v){
    						//llena objeto para mostrar en tabla
    						findContent.regs [k] = {
                                cveEstatus:v.cveEstatus,
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
    							cveTipoAuto:v.cveTipoAuto,
    							descTipoCarpeta:v.descTipoCarpeta,
    							imputados:v.imputados,
    							imputadosPrevios:v.imputadosPrevios,
    							autosimputados:v.autosimputados
    						};
    // ****						if(idActuacion == ''){
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
    							 tableContent += '<td>' + v.sintesis + '</td>';
    							 tableContent += '<td>' + dateFormat(v.fechaRegistro) + '</td>';
    							 tableContent += '</tr>';
    // ****						}else{
    // ****							showInfo(k);
    // ****							return;
    // ****						}
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
    					showMessage('NO SE ENCONTRARON RESULTADOS CON LOS PARAMETROS ELEGIDOS. INTENTE CON OTROS.','warning');
    				}
    			});
    	}

    	/**
    	* FunciOn para obtener las paginas de la tabla de resultados
    	*/
    	function getPages(page, cantReg){
    		var tipoCarpeta = $('#select_auto_carpeta_busqueda option:selected').val();
    		var numActuacion = $('#input_auto_numero_busqueda').val();
    		var anioActuacion = $('#input_auto_anio_busqueda').val();
    		var fechaInicial = $('#input_auto_finicial_busqueda').val();
    		var fechaFinal = $('#input_auto_ffinal_busqueda').val();
    		var cveJuzgadoBusqueda = ( $('#cveTipoJuzgado_busqueda').val() != 0) ? $('#cveTipoJuzgado_busqueda').val() : cveJuzgado;
    		var activo = 'S';
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
    				activo:activo, 
    				cantxPag:cantReg,
    				accion:'getPaginas' //'buscarAutos'
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
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                        page = (page==null) ? 1 : page;
                        $("#cmbPaginacion").val(page);
                    } else {
                    	showMessage('SIN RESULTADOS','information');
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
            //$("#cveTipoJuzgado").val(row.cveJuzgado);
            $('#cveTipoJuzgado').val( row.cveJuzgado + '/' + $('#cveTipoJuzgadoAlt').val() );
    		$('#select_auto_carpeta').val(row.cveTipocarpeta);
    		$('#input_auto_numero').val(row.numero);
    		$('#input_auto_anio').val(row.anio);
    		$('#input_auto_resolucion').val(row.sintesis);
    		$('#select_auto_notificacion').val(row.cveTipoNotificacion);
            $('#select_auto_auto').val(row.cveTipoAuto);
    		$('#cmbEstatus').val(row.cveEstatus);
            console.log(row);
    		//$('#input_auto_notas').val(row.observaciones);
    		llenareditor(row.observaciones);
    		//llena tabla de imputados
    		//var temp = getImputadosCarpetas(row.idReferencia);
    		imputadosTable(row.imputados, row.imputadosPrevios);
    		//coloca checks en la tabla de imputados
    		imputadosTableCheck(row.autosimputados);
    		//info carpetas judiciales
    		carpetasJudiciales.idReferencia = row.idReferencia;
    		carpetasJudiciales.numero = row.numero;
    		carpetasJudiciales.anio = row.anio;
    		carpetasJudiciales.cveTipoCarpeta = row.cveTipocarpeta;
    		carpetasJudiciales.cveJuzgado = row.cveJuzgado;
    		//llena array de datos para apelacion de imputados
    		$('#label_auto_text1').empty().append('No. de ' + row.descTipoCarpeta);
    		//limpia tabla de resultados
    		$('#auto_tbody').html("");
    		//desbloquea el boton de eliminar
    		if(crud.delete == 'S'){
    			$('#btn_auto_delete').prop("disabled",false);
    		}
                muestraOcultaBotones();
    		$('#btn_auto_delete').show();
    		$('#inputPDF').show();
    		$('#inputVisor').show();
            if($('#cmbEstatus').val() == 55){
               $("#btn_auto_save").hide();
               disabledFields(true,true);
            }else{
                $("#btn_auto_save").show();
            }
    		return;
    	}

    	/**
    	* Funcion para mostrar del Auto seleciconado de la bUsqueda, los imputados vinculados
    	* @param {array} imputados Es el array con los IDs de los imputados
    	*/
    	function imputadosTableCheck(imputados){
    		Apelaciones.apelacion = [];
    		Apelaciones.contador = 0;
    		$.each(imputados, function(k,v){
    			var idImputadoCarpeta = v.idImputadoCarpeta;
    			var apelacion = (v.Apelacion == 'N' ? 0 : 1 );
    			var boton = (v.Apelacion == 'N' ? true : false );
    			//marca check
    			$('#imputadoCheck_' + idImputadoCarpeta).prop('checked',true);
    			//habilita el combo y boton de ediciOn
    			$('#imputadoApelacion_' + idImputadoCarpeta).prop('selectedIndex',apelacion).prop('disabled',false);
    			editButton(idImputadoCarpeta,boton)
    			//Agrega apelacion al array
    			var apelacion = v.autosapelados;
    			Apelaciones.apelacion[Apelaciones.contador] = {
    				id:Apelaciones.contador,
    				idImputadoCarpeta:idImputadoCarpeta,
    				apelacionSentido:apelacion.cveSentido,
    				apelacionNumero:apelacion.numToca,
    				apelacionAnio:apelacion.numAnio,
    				apelacionSala:apelacion.cveSala
    			};
    			Apelaciones.contador++;
    		});
    		return;
    	}

        llenareditor = function (value) {
            try {
                editor.ready(function () {
                	setTimeout(function(){  editor.setContent(value, false); }, 500); });
            } catch (e) { alert(e); }
        };

        cargaJuzgados = function () {
            var strDatos = "accion=distrito";
            var hiddencveAdcripcion = cveAdscripcion;
            var hiddencveJuzgadoOrigenArbol = cveJuzgadoArbol;

            if ( idActuacion != "" && idActuacion > 0 ) {
                if ( hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol ) {
                    if ( origen == "" ) {
                        strDatos = "accion=getJuzgadoActuacion&idActuacion=" + idActuacion;
                    }
                } else {
                    if ( hiddencveJuzgadoOrigenArbol != 0 ) {
                        strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
                    } else {
                        strDatos = "accion=getJuzgadoActuacion&idActuacion=" + idActuacion;
                    }
                }
            }
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");
                    
                    if (json.totalCount > 0) {
                    	$("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").empty();
                                
                    //.append('<option value="0/0">Seleccione una opci&oacute;n</option>');
                        for (var i = 0; i < json.totalCount; i++) {
                            if( json.data[i].cveTipojuzgado == 1 ){
    	                        $("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").append($('<option></option>').val(json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
    	                        if(cveJuzgado == json.data[i].cveJuzgado){
    	                            $("#cveTipoJuzgado option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");
    	                            $("#cveTipoJuzgado_busqueda option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");
    	                            
    	                        }
                                $('#cveTipoJuzgadoAlt').val(json.data[i].cveTipojuzgado);
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

        cargaTipoCarpeta = function () {
            $('#select_auto_carpeta, #select_auto_carpeta_busqueda').empty();
            var tipoJuzgado = $("#cveTipoJuzgado").val().split("/");
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
                         $("#select_auto_carpeta, #select_auto_carpeta_busqueda").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                        for (var i = 0; i < json.totalCount; i++) {
                            switch(tipoJuzgado[1]){
                                case "1": // tipo de juzgado de control
                                    if(json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1"){ // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#select_auto_carpeta, #select_auto_carpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "2": // tipo de juzgado juicio
                                    if(json.data[i].cveTipoCarpeta == "3"){ // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#select_auto_carpeta, #select_auto_carpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "3": // tipo de juzgado ejecucion
                                    if(json.data[i].cveTipoCarpeta == "5"){ // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#select_auto_carpeta, #select_auto_carpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "4": // tipo de juzgado tribunal
                                    if(json.data[i].cveTipoCarpeta == "4"){ // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#select_auto_carpeta, #select_auto_carpeta_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "5": 
                                break;
                            }    
                        }
                        $("#select_auto_carpeta, #select_auto_carpeta_busqueda").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso, 'error');
                }
            });
        };

    	/**
    	* Al cambiar el combo de apelacion abre el modulo para capturar o eliminar una apelaciOn 
    	*/
    	$("#divFormulario").on('change','.imputadoApelacion', function(){
    		var contenidoDocumento = editor.getContent();
    		localStorage.contenidoDocumento = contenidoDocumento;

    		var selectId = $(this).prop('id');
    		var idImputadoCarpeta = selectId.split('_')[1];

    		var value = $('#' + selectId + ' option:selected').val();
    		if(value == 'S'){
    			loadApelacionInfo(idImputadoCarpeta);
    			$('#' + selectId).prop('selectedIndex','N');
    			//editButton(idImputadoCarpeta,false);
    		} else if(value == 'N'){ 
    			//se elimina del array Apelaciones
    			findApelacion(idImputadoCarpeta);
    			editButton(idImputadoCarpeta,true);
    		}
    	});

    	/**
    	* Al presionar el check de los imputados valida habilita/deshabilita el combo de apelaciOn
    	*/
    	$('#divFormulario').on('click','.imputadoCheck', function(){
    		var selectedId = $(this).prop('id');
    		var tmpId = selectedId.split('_')[1];
    		var check = $('#' + selectedId).prop('checked');
    		if( check ){
    			$('#imputadoApelacion_' + tmpId).prop('disabled',false);
    		}else{
    			$('#imputadoApelacion_' + tmpId).prop('selectedIndex','N').prop('disabled',true);
    			//se elimina del array Apelaciones
    			findApelacion(tmpId);
    			//cambia el color del boton
    			editButton(tmpId,true);
    		}
    	});

    	/**
    	*
    	*/
    	$('#divFormulario').on('change','#select_auto_carpeta', function(){
    		cleanFields(3);
    	});

    	/**
    	* Cambio de etiquetas al momento de cambiar el combo de carpetas
    	*/
    	$("#divFormulario").on('change','#select_auto_carpeta', function(){
    		var label = $('#select_auto_carpeta option:selected').text();
    		var key = $('#select_auto_carpeta option:selected').val();
    		if(key > 0)
    			$('#label_auto_text1').empty().html("No. de " + label);
    		else
    			$('#label_auto_text1').empty().html("No. de");
    	});	
    	$("#divConsulta").on('change','#select_auto_carpeta_busqueda', function(){
    		var label = $('#select_auto_carpeta_busqueda option:selected').text();
    		var key = $('#select_auto_carpeta_busqueda option:selected').val();
    		if(key > 0)
    			$('#label_auto_text2').empty().html("No. de " + label);
    		else
    			$('#label_auto_text2').empty().html("No. de");			
    	});	

    	/**
    	 * Al salir del foco del nUmero y año de la causa, consulta la carpeta judicial
    	 */
    	$("#btn_buscaCarpeta").on('click', function(){
    		var carpeta = $('#select_auto_carpeta option:selected').val();
    		var causa_numero =  $('#input_auto_numero').val();
    		var causa_anio = $('#input_auto_anio').val();
    		var activo = 'S';
    		var accion = 'obtenerAuto_AutoVinculacion';
    		var idActuacion = idActuacion || '';
    		var idCarpetaJudicial = idCarpetaJudicial || '';
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
    							var referencia = object.data;
    							carpetasJudiciales.idReferencia = referencia.idReferencia;
    							carpetasJudiciales.numero = referencia.numero;
    							carpetasJudiciales.anio = referencia.anio;
    							carpetasJudiciales.cveTipoCarpeta = referencia.cveTipoCarpeta;
    							carpetasJudiciales.cveJuzgado = referencia.cveJuzgado;
    							cleanFields(4);
    							disabledFields(false,false);					
    							imputadosTable(referencia.imputados,referencia.imputadosPrevios);
    							$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden","true").after('').append('&nbsp;Datos Encontrados.');
    						}else{
    							cleanFields(4);
    							disabledFields(false,true);
    							if ('text' in object) {
    								message = object.text;
    							}else{
    								message = 'ERROR.';
    							}
    							showMessage(message,'information');
    							$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + message);
    						}
    					});
    				}else{
    					$('#input_auto_anio').focus();
    					mensajeBusqueda = 'NECESITA INGRESAR EL A&Ntilde;O.';
    					showMessage(mensajeBusqueda,'warning');
    					$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + mensajeBusqueda);
    				}
    			}else{
    				$('#input_auto_numero').focus();
    				mensajeBusqueda = 'NECESITA INGRESAR EL N&Uacute;MERO.';
    				showMessage(mensajeBusqueda,'warning');
    				$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + mensajeBusqueda);
    			}
    		}else{
    			$('#select_auto_carpeta').focus();
    			mensajeBusqueda = 'NECESITA INGRESAR LA CARPETA.';
    			showMessage(mensajeBusqueda,'warning');
    			$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + mensajeBusqueda);
    		}
    	});

    	$('#btn_auto_delete').click(function(){
    		var response = confirm("¿REALMENTE DESEA ELIMINAR EL REGISTRO?");
    		if (response) {
    			deleteAuto()
    			cleanFields();
    			$('#btn_auto_delete').prop("disabled",true);
    			$('#btn_auto_delete').hide();
    		}		
    	});

        function visorDocuemntos() {
                $.ajax({
                    type: 'POST',
                    url: 'visorpdf/index.php',
                    data: {idCarpetaJudicial: "", idActuacion: $('#idActuacion').val(), cveTipoDocumento: 15}, //malo
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
                strDatos += "&cveTipoDocumento=15"; //tipo documento
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
    		$('#cveTipoJuzgado, #select_auto_carpeta, #input_auto_numero, #input_auto_anio').prop('disabled',true);
    	}

        function obtieneDatosCarpeta(){
            var idCarpetaJudicialArbol = $('#idCarpetaJudicialArbol').val();
            var cveTipoCarpetaArbol = $('#cveTipoCarpetaArbol').val();
            $('#select_auto_carpeta').val( cveTipoCarpetaArbol );
            var urlFacade = "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php";
            var dataFacade = "accion=consultar&activo=S&idCarpetaJudicial=" + idCarpetaJudicialArbol;
            $.ajax({ async: false, type: 'POST', url: urlFacade, data: dataFacade
            }).done(function(response)  {
                var objeto = eval('(' + response + ')');
                var data = '';
                if(objeto.totalCount>0){
                    data = objeto.data[0];
                    $('#input_auto_numero').val( data.numero );
                    $('#input_auto_anio').val( data.anio );
                }
            });
            //obtencion de los datos para la seleccion del combo de juzgado y relacionado con 
            var urlFacade = "../fachadas/sigejupe/actaminima/ActaminimaFacade.Class.php";
            var dataFacade = "accion=carpetaArbol&idCarpetaJudicial=" + idCarpetaJudicialArbol;
            $.ajax({ async: false, type: 'POST', url: urlFacade, data: dataFacade
            }).done(function(response)  {
                var objeto = eval('(' + response + ')');
                $('#cveTipoJuzgado').val( objeto.idJuzgado );
                //cargaTipoCarpeta();
            });
        }

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
    	* Variables varias
    	*/
    	var titulos = {'titulo1':'Auto de Vinculaci&oacute;n','titulo2':'B&uacute;squeda','titulo3':'Resultados','titulo4':'Captura de Apelaci&oacute;n'};
    	var cveJuzgado = $('#SysCveAdscripcion').val();
    	var cveUsuarioSistema = $('#cveUsuarioSistema').val();
    	var cveTipoActuacion = 5;
        var origen = '<?php echo $origen; ?>';
        var idActuacion = '<?php echo $idActuacionArbol; ?>';
        var cveAdscripcion = '<?php echo $SysCveAdscripcion; ?>';
        var cveJuzgadoArbol = '<?php echo $juzgadoOrigenArbol; ?>';
        
        /*
         * Si se consulta un formulario de primera instancia desde una adscripcion de 
         * segunda instancia, se ocultan los botones del formulario, excepto 
         * el boton de visor de documentos
         */
        muestraOcultaBotones = function() {
            var instanciaSesion = obtenerInstanciaSesion(cveAdscripcion);
            if ( instanciaSesion == 2 && origen == "" ) {
                 $("#btn_auto_save").parent().hide();
                $("#btn_auto_delete").parent().hide();
                $("#inputPDF").parent().hide();
                $("#btn_auto_clean").parent().hide();
                $("#btn_auto_search").parent().hide();
            }
        };
        /*
         * Funcion para consultar la instancia de la adscripcion donde el usuario
         * se encuentra logueado 
         * @param {type} cveAdscripcion
         * @returns {String}         */
        obtenerInstanciaSesion = function(cveAdscripcion){
            var strDatos = "accion=consultar&cveJuzgado=" + cveAdscripcion;
            var instancia = "";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");
                    //json = datos;
                    if (json.totalCount > 0) {
                    	instancia = json.data[0].cveInstancia;
                    } else {
                        alert("Error al obtener la instancia de la sesion");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso , 'error');
                }
            });
            return instancia;
        };

        cargaEstatus = function () {
           var strDatos = "accion=consultar";
           strDatos += "&cveTipoEstatus=4"; // el 4 corresponde a los estatus de AUTOS

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
        
    	$(function(){
    		// setPermissions();
    		disabledFields(false,true);
            cargaEstatus();
    		//muestra contenido de carpetas en mOdulo principal y mOdulo de busqueda
    		//fillCombo(['select_auto_carpeta','select_auto_carpeta_busqueda'],'tiposcarpetas/TiposcarpetasFacade','cveTipoCarpeta','desTipoCarpeta');
    		//muestra contenido de notificaciones
    		fillCombo(['select_auto_notificacion'],'tiposnotificaciones/TiposnotificacionesFacade','cveTipoNotificacion','desTipoNotificacion');
    		//muestra contenido de autos
    		fillCombo(['select_auto_auto'],'tiposautos/TiposautosFacade','cveTipoAuto','desTipoAuto');
    		//muestra contenido de sentidos
    		fillCombo(['select_auto_sentidotoca'],'sentidosresoluciones/SentidosresolucionesFacade','cveSentido','desSentido');
    		//ObtenciOn de salas para los imputados a travEs del webservice 
    		getSalas();
    		//validaciOn de teclas numEricas
    		$('#input_auto_numero, #input_auto_anio, #input_auto_numero_busqueda, #input_auto_anio_busqueda, #input_auto_numerotoca, #input_auto_aniotoca').keypress(validateNumber);
    		//validacion para cambio de foco en Intro
    		$('#input_auto_numero').keypress(function(event){ changeFocus(event,'input_auto_anio'); });
    		$('#input_auto_anio').keypress(function(event){ changeFocus(event,'input_auto_resolucion'); });
    		$('#input_auto_resolucion').keypress(function(event){ changeFocus(event,'select_auto_notificacion'); });
    		$('#input_auto_numero_busqueda').keypress(function(event){ changeFocus(event,'input_auto_anio_busqueda'); });
    		$('#input_auto_numerotoca').keypress(function(event){ changeFocus(event,'input_auto_aniotoca'); });
    		$('#input_auto_aniotoca').keypress(function(event){ changeFocus(event,'select_auto_salastoca'); });
    		//calendarios para la bUsqueda
    		$('#input_auto_finicial_busqueda, #input_auto_ffinal_busqueda').datepicker().on('changeDate',function(e){ $(this).datepicker('hide'); });
    		cargaJuzgados(); //carga los Juzgados
    		//inicializacion del editor
            editor = UE.getEditor('input_auto_notas');
            editor.ready(function () {
                editor.setContent("",false);
            });

    		//validacion de datos para el arbol
    	    if( $('#procedencia').val() == 1 ){
    	    	if( $('#idActuacion').val() != '' && $('#idActuacion').val() != 0 ){
    				findAutos( $('#idActuacion').val() );
    	    	}else if ( $('#idCarpetaJudicialArbol').val() != '' && $('#cveTipoCarpetaArbol').val() != ''){ //no es de actuacion
    	    		obtieneDatosCarpeta();
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