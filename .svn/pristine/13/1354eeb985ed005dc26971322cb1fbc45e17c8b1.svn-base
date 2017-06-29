<?php
	if (!isset($_SESSION)) {
       session_start();
    }
    if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    	$cveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
    	$SysNumEmpleado = $_SESSION['numEmpleado'];
    	$SysCvePerfil = $_SESSION['cvePerfil'];
    	$SysCveAdscripcion = $_SESSION['cveAdscripcion'];
        $OrigenSegundaInstancia = "";
        if (isset($_GET['origen'])) {
            $OrigenSegundaInstancia = @$_GET['origen'];
        }
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
        .panel-default > .panel-heading{ background: #427468;         color: #ebf3f1; }
    	.needed:after { color:darkred; content: " (*)"; }
    	.textCorrection{ display: block; text-transform: lowercase; }
    	.textCorrection:first-letter { text-transform: uppercase; }
    	.capital{ text-transform: uppercase; }
    	input, textarea{ resize: none; }
    </style>
    <div class="panel panel-default">
    	<div class="panel-heading">
    	    <h5 class="panel-title" id="autosTitulo">
    	        Certificaciones
    	    </h5>
    	</div>
    	<div class="panel-body">
    		<input type="hidden" id="cveUsuarioSistema" value="<?=$cveUsuarioSistema?>"/>
    		<input type="hidden" id="SysCvePerfil" value="<?=$SysCvePerfil?>"/>
    		<input type="hidden" id="SysCveAdscripcion" value="<?=$SysCveAdscripcion?>"/>
    		<input type="hidden" id="SysNumEmpleado" value="<?=$SysNumEmpleado?>"/>
    		<input type="hidden" id="idActuacion" name="idActuacion" value="<?=$idActuacionArbol?>" />
    		<input type="hidden" id="input_hidden_params" placeholder="PARAMS"/>
    		<input type="hidden" id="cveTipoJuzgadoAlt" name="cveTipoJuzgadoAlt"/>
    		<input type="hidden" id="procedencia" name="procedencia" value="<?=$procedencia?>" />
    		<!-- <input type="hidden" id="idActuacionArbol" name="idActuacionArbol" value="<?=$idActuacionArbol?>" /> -->
    		<input type="hidden" id="idCarpetaJudicialArbol" name="idCarpetaJudicialArbol" value="<?=$idCarpetaJudicialArbol?>" />
    		<input type="hidden" id="cveTipoCarpetaArbol" name="cveTipoCarpetaArbol" value="<?=$cveTipoCarpetaArbol?>" />
                    <div>
                        <div id="divFormulario" class="form-horizontal" data-step="1" data-intro="Este m&oacute;dulo le permite registrar una nueva certificaci&oacute;n, el cual puede ser modificado y/o eliminado." data-position="top">
    			<div class="form-group">
    			<label for="cveTipoJuzgado" class="control-label col-md-3 needed"><?php echo $OrigenSegundaInstancia == 1 ? ( "Tribunal de alzada") : ( "Juzgado"); ?></label>
                    <div class="col-md-9">
                        <select class="form-control " name="cveTipoJuzgado" id="cveTipoJuzgado" onchange="cargaTipoCarpeta();"></select>
                    </div>                                
                </div>
    			<div class="form-group"> 
    				<label class="control-label col-md-3 needed" data-step="2" data-intro="La informaci&oacuten requerida se indica con (*)." data-position="top">Relacionado con</label>
    				<div class="col-md-9"><select id="select_cert_carpeta" class="form-control"></select></div>
    			</div>
    			<div class="form-group">
    				<label class="control-label col-md-3 needed" id="label_cert_text1">No. de</label>
    					<div class="col-md-9">
    						<input type="text" id="input_cert_numero" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline" />
    					/
    					 	<input type="text" id="input_cert_anio" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline" />
    					 	&nbsp;&nbsp;
    				 		<span id="resultadoBusquedaActuacion" class="glyphicon"></span>
    					</div>
    			</div>
    			<div class="form-group"> <!-- Lugar -->
    				<label class="control-label col-md-3 needed">Lugar</label>
    				<div class="col-md-9">
    				<input type="text" id="input_cert_lugar" maxlength="300" placeholder="INGRESE EL LUGAR DE CERTIFICACION" style="text-transform: uppercase;" class="form-control"/>
    				</div>
    			</div>
    			<div class="form-group"> <!-- Hora -->
    				<label class="control-label col-md-3 needed">Fecha y hora</label>
    				<div class="col-md-9"><input type="text" id="input_cert_hora" maxlength="19" placeholder="INGRESE LA HORA DE CERTIFICACION" class="form-control" data-date-format="DD/MM/YYYY HH:mm"/></div>
    			</div>
    			<div class="form-group">
    				<label class="control-label col-md-3 needed">S&iacute;ntesis</label>
    				<div class="col-md-9"><input type="text" id="input_cert_sintesis" maxlength="100" size="70" placeholder="INGRESE LA SINTESIS" style="text-transform: uppercase;" class="form-control" /></div>
    			</div>
    			<div class="form-group">
    				<label class="control-label col-md-3 needed">Contenido del documento</label>
    				<div class="col-md-9">
    				<script id="input_cert_observaciones" type="text/plain" style="width: 100%; height: 300px; margin: 0px auto;"></script>
    				</div>
    			</div>
    			<div class="form-group">
    				<div class="col-md-offset-3 col-md-9">
                                        <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar una certificaci&oacute;n." data-position="top">                                        
                                            <input type="submit" class="btn btn-primary btn-adaptar" value="Guardar" onclick="guardaCertificacion()" id="btn_certificaciones_guardar" />
    				</div>
                                        <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position="top">                                        
                                            <input type="submit" class="btn btn-primary btn-adaptar" id="btn_certificaciones_limpiar" value="Limpiar" onclick="cleanFields()" />
    			</div>
                                        <div class="col-md-2 botonesAdaptar botonesArbol">
                                            <input type="submit" class="btn btn-primary btn-adaptar" id="btn_certificaciones_consultar" value="Consultar" onclick="changeDivForm(2)" />
    		</div>
                                        <div class="col-md-2 botonesAdaptar">                                        
                                            <input type="submit" class="btn btn-primary btn-adaptar" value="Eliminar" id="btn_cert_delete" style="display:none;" disabled />
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
    		<div id="divConsulta" style="display: none">
    			<input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">
    			<hr/>
    			<div class="form-horizontal">
    				<div class="form-group">
    	                <label for="cveTipoJuzgado_busqueda" class="control-label col-md-3"><?php echo $OrigenSegundaInstancia == 1 ? ( "Tribunal de alzada") : ( "Juzgado"); ?>:</label>
    	                <div class="col-md-9">
    	                    <select class="form-control " name="cveTipoJuzgado_busqueda" id="cveTipoJuzgado_busqueda" onchange="cargaTipoCarpeta(2);"></select>
    	                </div>                                
    	            </div>
    				<div class="form-group"> 
    					<label class="control-label col-md-3">Relacionado con</label>
    					<div class="col-md-9"><select id="select_cert_numero_busqueda" class="form-control"></select></div>
    				</div>
    				<div class="form-group">
    					<label class="control-label col-md-3" id="label_cert_text2">No. de</label>
    					<div class="col-md-9">
    						<input type="text" id="input_cert_numero_busqueda" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline" />
    					/
    					 	<input type="text" id="input_cert_anio_busqueda" maxlength="4" placeholder="A&Ntilde;O"  val="" class="form-inline" />
    					</div>
    				</div>
    				<div class="form-group">
    					<label class="control-label col-md-3">Fecha inicio</label>
    					<div class="col-md-2">
    						<input type="text" id="input_cert_finicial_busqueda" placeholder="FECHA INICIAL" class="form-control datepicker" data-date-format="dd/mm/yyyy"/>
    					</div>
    				</div>
    				<div class="form-group">
    					<label class="control-label col-md-3">Fecha fin</label>
    					<div class="col-md-2">
    					 	<input type="text" id="input_cert_ffinal_busqueda" placeholder="FECHA FINAL" class="form-control datepicker" data-date-format="dd/mm/yyyy"/>
    					</div>
    				</div>
    				<div class="form-group">
    					<div class="col-md-offset-3 col-md-9">
                                                <div class="col-md-2 botonesAdaptar">                                                
                                                    <input type="submit" class="btn btn-primary btn-adaptar" value="Buscar" onclick="mainSearch()"> <!-- findCertificaciones() -->
                        </div>
                                                <div class="col-md-2 botonesAdaptar">                                                
                                                    <input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="cleanFields()">
    				</div>
    			</div>
    		</div>
    			</div>
    		</div>
    		<div id="divResultados" style="display:none;">
                <div class="col-xs-12"> <!-- paginacion -->
                    <div class="col-xs-3">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeModule(2)">
                    </div>

                    <div class="form-group col-xs-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-xs-2" >
                        <label class="control-label">Cambiar a la p&aacute;gina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="findAutos()">
                            <option selected="selected" value="1">1</option>
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
        var cveJuzgadoArbol = '<?php echo $juzgadoOrigenArbol; ?>';
        var origen = '<?php echo $origen; ?>';
        var idActuacion = '<?php echo $idActuacionArbol; ?>';
        var cveAdscripcion = '<?php echo $SysCveAdscripcion; ?>';
        
    	if(editor!=undefined){
    		editor.destroy();
    	}
    	var editor = null;

    	/**
    	* FunciOn para el cambio de foco al presionar INTRO
    	* @param {object} event Objeto del evento KEYPRESS
    	* @param {string} nextInput Es el ID del input al que se moverA el foco
    	*/
    		function changeFocus(event,nextInput){
    	        var key = window.event ? event.keyCode : event.which;
    	        if (event.keyCode == 13) { // es Intro
    	            //cambia el foco al campo de año
    	            $('#' + nextInput).focus();
    	        };
    		}

    	/**
    	* FunciOn para la obtenciOn de informaciOn de las carpetas judiciales.
    	* Si existe la carpeta judicial y los campos llave no existen en las actuaciones, el usuario puede ingresar una nueva certificaciOn
    	* @param {string} idCarpetaJudicial Es el ID de la tabla tblcarpetasjuduciales y se usa en la vista de Arbol
    	*/
    	function getCarpetaJudicial(idCarpetaJudicial){
    		var idCarpetaJudicial = idCarpetaJudicial || '';
    		var cveJuzgadoCombo = $('#cveTipoJuzgado').val().split('/')[0];
    		var carpeta = $('#select_cert_carpeta option:selected').val();
    		var causa_numero = $('#input_cert_numero').val();
    		var causa_anio = $('#input_cert_anio').val();
    		if( (carpeta>0 && causa_numero!='' && causa_anio!='') || idCarpetaJudicial!='' ){
    			//busca datos en la tabla -tblcarpetasjudiciales-
    			$.ajax({
    				async: false,
    				type: 'POST',
    				url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
    				data: {
    					accion:'consultar',
    					idCarpetaJudicial:idCarpetaJudicial,
    					activo:'S',
    					cveTipoCarpeta:carpeta,
    					numero:causa_numero,
    					anio:causa_anio,
    					cveJuzgado:cveJuzgadoCombo
    				}
    			}).done(function(response)	{
                        var object = eval("("+response+")");
    					var totalRecords = object.totalCount;
    					var mensajeBusqueda = '';
    					if(totalRecords == 1){
    						//existe registro en la scarpetas judiciales
    						//prepara los datos para inserciOn en -tblactuaciones-
    						var data = object.data[0];
    						//validaciOn de no duplicidad en los registros de la tabla -carpetasJudiciales-
    						//obtenciOn del ID de la Carpeta Judicial, la cual corresponde al 'Id de referencia'
    						carpetasJudiciales.idReferencia = data.idCarpetaJudicial;
    						carpetasJudiciales.numero = data.numero;
    						carpetasJudiciales.anio = data.anio;
    						carpetasJudiciales.cveTipoCarpeta = data.cveTipoCarpeta;
    						carpetasJudiciales.cveJuzgado = data.cveJuzgado;
    						//valida que la informacion no exista ya en la tabla -tblactuaciones-
    						$.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",{
    								numero:data.numero,
    								anio:data.anio,
    								cveTipoCarpeta:data.cveTipoCarpeta,
    								cveJuzgado:data.cveJuzgado,
    								cveTipoActuacion:cveTipoActuacion,
    								idReferencia:data.idCarpetaJudicial,
    								activo:'S',
    								accion:'consultar'
    							},
    							function(response){
                                    var object = eval("("+response+")");
    								var totalRecords = object.totalCount;
    								if(totalRecords >= 1){
    									// el registro ya existe en -tblactuaciones-, se manda mensaje y se mantienen
    									mensajeBusqueda = 'Ya existe informaci&oacute;n con estos datos de captura.';
    									showMessage(mensajeBusqueda,'information');
    									$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + mensajeBusqueda);
    									// bloqueados los campos
    									disabledButton(true);
    								}else if(totalRecords == 0){
    									mensajeBusqueda = 'Informaci&oacute;n valida, continue con la captura.';
    									showMessage(mensajeBusqueda,'success');
    									$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-remove').addClass('glyphicon-ok').attr("aria-hidden","true").after('').append('&nbsp;' + mensajeBusqueda);
    									//desbloquea los campos de captura
    									disabledButton(false);
    									//validacion de carpeta judicial para el Arbol
    									$('#select_cert_carpeta').val(data.cveTipoCarpeta);
    									$('#input_cert_numero').val(data.numero);
    									$('#input_cert_anio').val(data.anio);
    								}
    							});
    					}else{
    						mensajeBusqueda = 'No existe relaci&oacute;n, verifique los datos de captura.';
    						showMessage(mensajeBusqueda,'warning');
    						$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + mensajeBusqueda);
    						insert_idReferencia = 0;
    						disabledButton(true);
    					}
    				}
    			);
    		}
    	}

    	/**
    	* FunciOn para guardar la informaciOn capturada
    	*/
    	function guardaCertificacion(){
    		var idActuacionVal = $('#idActuacion').val() > 0 ? $('#idActuacion').val() : '';
    		var aniActuacion = $('#input_cert_anio').val();
    		var idReferencia = carpetasJudiciales.idReferencia;
    		var numero = carpetasJudiciales.numero;
    		var anio = carpetasJudiciales.anio;
    		var cveTipoCarpeta = carpetasJudiciales.cveTipoCarpeta;
    		var cveJuzgado = $('#cveTipoJuzgado').val();
    		cveJuzgado = cveJuzgado.split('/');
    		cveJuzgado = cveJuzgado[0];
    		var sintesis = $('#input_cert_sintesis').val();
    		//var observaciones = $('#input_cert_observaciones').val();
    		var observaciones = editor.getContent();
    		var cveUsuario = cveUsuarioSistema;
    		var activo = 'S';
    		var fechaActualizacion = getDate();
    		var idActuacion = 0;
    		var numEmpleado = $('#SysNumEmpleado').val();
    		var lugarCertificacion = $('#input_cert_lugar').val();
    	 	var tmp_fechahora1 = $('#input_cert_hora').val();
    	 	var tmp_fechahora = tmp_fechahora1.split(' ');
    	 	var tmp_fecha = tmp_fechahora[0].split('/');
    		var horaCertificacion = tmp_fecha[2]+'-'+tmp_fecha[1]+'-'+tmp_fecha[0]+' '+tmp_fechahora[1];
    		var accion = '';
    		var idCertificacion = '';
    		if(idActuacionVal == ''){
    			accion = 'guardarActuacion_Certificacion';
    			fechaRegistro = getDate();
    		}else{
    			accion = 'actualizarActuacion_Certificacion';
    			var params = $('#input_hidden_params').val().split('|');
    			idReferencia = params[0];
    			numero = params[1];
    			anio = params[2];
    			cveTipoCarpeta = params[3];
    			//cveJuzgado = params[4];
    			fechaRegistro = '';
    			idCertificacion = params[5];
    			idActuacion = '';
    			numEmpleado = '';
    		}
    		var validationFields = [aniActuacion,sintesis,observaciones,lugarCertificacion,tmp_fechahora1,cveJuzgado];
    		validationResponse = validateFields(validationFields);
    		if(validationResponse){
    			$.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
    				{
    					idActuacion:idActuacionVal,
    					aniActuacion:aniActuacion,
    					cveTipoActuacion:cveTipoActuacion,
    					idReferencia:idReferencia,
    					numero:numero,
    					anio:anio,
    					cveTipoCarpeta:cveTipoCarpeta,
    					cveJuzgado:cveJuzgado,
    					sintesis:sintesis,
    					observaciones:observaciones,
    					cveUsuario:cveUsuario,
    					activo:activo,
    					fechaRegistro:fechaRegistro,
    					fechaActualizacion:fechaActualizacion,
    					accion: accion
    				},
    				function(response){
                        var object = eval("("+response+")");
    					var totalRecords = object.totalCount;
    					if(totalRecords == 1){ //la inserciOn se realizO
    						var data = object.data[0];
    						var idActuacion = data.idActuacion;
    						//guarda en tabla -tblcertificaciones-
    						$.post("../fachadas/sigejupe/certificaciones/CertificacionesFacade.Class.php",
    							{
    								idCertificacion:idCertificacion,
    								idActuacion:idActuacion,
    								numEmpleadoAutCertificacion:numEmpleado,
    								lugarCertificacion:lugarCertificacion,
    								horaCertificacion:horaCertificacion,
    								accion:'guardar'
    							},
    							function(response){
                                    var object = eval("("+response+")");
    								var totalRecords = object.totalCount;
    								if(totalRecords == 1){
    									var dataCert = object.data[0];
    									//se realizO la inserciOn en la tabla
    									showMessage(object.text, 'success');
    									//asigna valor para la actualizacion del registro recien insertado
    									$('#idActuacion').empty().val(idActuacion);
    									//asigna los valores de los parametros para actualizacion
    									//agrega los valores de idReferencia, numero, anio, cvetipocarpeta y cvejuzgado a un campo oculto para us posterior proceso
    									var params = data.idReferencia + '|' + data.numero + '|' + data.anio + '|' + data.cveTipoCarpeta + '|' + data.cveJuzgado + '|' + dataCert.idCertificacion;
    									$('#input_hidden_params').empty().val(params);
    									if( $('#procedencia').val() == 1 ){
    										getTree();
    									}
    									$('#inputPDF').show();
    									$('#inputVisor').show();
    								}else{
    									showMessage(object.text, 'error');
    								}
    							});
    						showMessage(object.text, 'success');
    					}else{
    						showMessage(object.text, 'error');
    					}
    				});
    		}else{
    			showMessage('A&uacute;n quedan campos vacios, verifique.','information');
    		}
    	}

    	/**
    	 * Valida que antes de guardar o actualizar, todos los campos contegan informaciOn
    	 * @param {array} array Es el arraglo de campos a validar
    	 * @return {boolean} state Regresa 'true' si todos los campos contienen informaciOn
    	 */
    	function validateFields(array){
    		var state = true;
    		$.each(array, function(k,v){
    			if(v == '' || v == 0 || v == null){
    				state = false;
    			}
    		});
    		return state;
    	}

    	/**
    	* FunciOn de la invocaciOn principal para la bUsqueda
    	*/
    	function mainSearch(){
    		//limpia datos previos
    		$("#totalReg").empty();
//    		$('#cmbPaginacion').empty();
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
    		var tipoCarpeta = $('#select_cert_numero_busqueda option:selected').val();
    		tipoCarpeta = (tipoCarpeta!=0) ? tipoCarpeta : '';
    		var numActuacion = $('#input_cert_numero_busqueda').val();
    		var anioActuacion = $('#input_cert_anio_busqueda').val();
    		var fechaInicial = $('#input_cert_finicial_busqueda').val();
    		var fechaFinal = $('#input_cert_ffinal_busqueda').val();
    		var cveJuzgadoBusqueda = ( $('#cveTipoJuzgado_busqueda').val() != 0) ? $('#cveTipoJuzgado_busqueda').val() : cveJuzgado;
    		var activo = 'S';
    		var tableContent = '';
    		cveJuzgadoBusqueda = cveJuzgadoBusqueda.split('/');
    		cveJuzgadoBusqueda = cveJuzgadoBusqueda[0];
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
    				paginacion:true,
    				cantxPag:cantReg,
    				accion:'consultarCertificaciones' // 'buscarAutos'
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
    							idCertificacion:v.idCertificacion,
    							numEmpleadoAutCertificacion:v.numEmpleadoAutCertificacion,
    							lugarCertificacion:v.lugarCertificacion,
    							horaCertificacion:v.horaCertificacion,
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
    							descTipoCarpeta:v.descTipoCarpeta,
    						};
    						if(idActuacion == ''){
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
    							 tableContent += '<td> ' + v.descTipoCarpeta + ' - ' + v.numero + '</td>'; //
    							 tableContent += '<td>' + v.sintesis + '</td>';
    							 tableContent += '<td>' + dateFormat(v.fechaRegistro) + '</td>';
    							 tableContent += '</tr>';
    						}else{
    							showInfo(k);
    							return;
    						}
    					});
    					if(idActuacion == ''){
    						tableContent += ''
    						+'	</tbody>'
    						+'</table>';

    						$('#tableSearch').html(tableContent);
    						$('#tblResultados').DataTable({
    	                        paging: false
    	                    });
    	                    getPages(page, cantReg);
    	                    changeModule(3);
    	                }
    				}else{
    					showMessage('NO SE ENCONTRARON RESULTADOS CON LOS PARAMETROS ELEGIDOS. INTENTE CON OTROS.','warning');
    				}
    			});
    	}

    	/**
    	* FunciOn para obtener las paginas de la tabla de resultados
    	*/
    	function getPages(page, cantReg){
    		var tipoCarpeta = $('#select_cert_numero_busqueda option:selected').val();
    		tipoCarpeta = (tipoCarpeta!=0) ? tipoCarpeta : '';
    		var numActuacion = $('#input_cert_numero_busqueda').val();
    		var anioActuacion = $('#input_cert_anio_busqueda').val();
    		var fechaInicial = $('#input_cert_finicial_busqueda').val();
    		var fechaFinal = $('#input_cert_ffinal_busqueda').val();
    		var cveJuzgadoBusqueda = ( $('#cveTipoJuzgado_busqueda').val() != 0) ? $('#cveTipoJuzgado_busqueda').val() : cveJuzgado;
                cveJuzgadoBusqueda = cveJuzgadoBusqueda.split('/');
    		cveJuzgadoBusqueda = cveJuzgadoBusqueda[0];
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
    				cveTipoActuacion:11, 
    				txtFecInicialBusqueda:fechaInicial,
    				txtFecFinalBusqueda:fechaFinal,
    				activo:activo, 
                                pag:page,
    				cantxPag:cantReg,
    				accion:'getPaginasCertificacion'
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
    	* FunciOn para el cambio de modulos entre el principal y el de bUsqueda
    	* @param {integer} idModule Id del mOdulo. 1:principal, 2:bUsqueda
    	*/
    	function changeModule(idModule){
    		//muestra el mOdulo de bUsqueda
    		changeDivForm(idModule);
    		//limpia el contenido de los formularios
    		if(idModule < 3 ){ //impide que los parametros de busqueda se limpien para no afectar la paginaciOn
    			cleanFields();
    			//coloca la fecha actual en los combos
    		    $('#input_cert_finicial_busqueda, #input_cert_ffinal_busqueda').val(getDate('today'));
    		}
    		if(idModule == 6){
    			changeDivForm(2);
                //cambia el titulo
                var titulo = '<a href="#" onclick="changeModule(1)" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / ' + titulos['titulo2'];
                $('#autosTitulo').empty().append(titulo);
    		}
            return;
    	}

        /*
         * Si se consulta un formulario de primera instancia desde una adscripcion de 
         * segunda instancia, se ocultan los botones del formulario, excepto 
         * el boton de visor de documentos
         */
        muestraOcultaBotones = function() {
            var instanciaSesion = obtenerInstanciaSesion(cveAdscripcion);
            if ( instanciaSesion == 2 && origen == "" ) {
                $("#btn_certificaciones_guardar").parent().hide();
                $("#btn_certificaciones_limpiar").parent().hide();
                $("#btn_certificaciones_consultar").parent().hide();
                $("#btn_cert_delete").parent().hide();
                $("#inputPDF").parent().hide();
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
                    console.log(json);
                    console.log('totalCount');
                    console.log(json.totalCount);
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

    	/**
    	 * Busca en la base de datos las Actuaciones de acuerdo a los parametros definidos en el formulario
    	 * @param {number} idActuacion Es la llave del ID de ActuaciOn, se usa en la vista de Arbol
    	 */
    	function findCertificaciones2(idActuacion){
    		var idActuacion = idActuacion || '';
    		var tipoCarpeta = $('#select_cert_numero_busqueda option:selected').val();
    		tipoCarpeta = (tipoCarpeta!=0) ? tipoCarpeta : '';
    		var numActuacion = $('#input_cert_numero_busqueda').val();
    		var anioActuacion = $('#input_cert_anio_busqueda').val();
    		var fechaInicial = $('#input_cert_finicial_busqueda').val();
    		var fechaFinal = $('#input_cert_ffinal_busqueda').val();
    		var activo = 'S';
    		var numRegistros = 2;
    		var cveJuzgadoBusqueda = ( $('#cveTipoJuzgado_busqueda').val() != 0) ? $('#cveTipoJuzgado_busqueda').val() : cveJuzgado;
    		findContent.regs = [];
    //		$('#certificaciones_tbody').html("");
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
    					cantxPag:numRegistros,
    					accion:'consultarCertificaciones'
    				},
    			function(response){
                    var object = eval("("+response+")");
    				var totalRecords = object.totalCount;
    				if(totalRecords > 0 && object.status == 'OK'){
    					var data = object.data;
    					var tbody = '';
    					//muestra contenido en tabla
    					$.each(data, function(k,v){
    						//obtener id de audiencia
    						//llena objeto para mostrar en tabla
    						findContent.regs [k] = {
    							idCertificacion:v.idCertificacion,
    							idActuacion:v.idActuacion,
    							numEmpleadoAutCertificacion:v.numEmpleadoAutCertificacion,
    							lugarCertificacion:v.lugarCertificacion,
    							horaCertificacion:v.horaCertificacion,
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
    							descTipoCarpeta:v.descTipoCarpeta
    						};
    						if(idActuacion == ''){
    							var counter = parseInt(k)+1;
    							var txtSintesis = '';
    							if(v.sintesis.length >50){
    								txtSintesis = v.sintesis.substring(0,50) + '...';
    							}else{
    								txtSintesis = v.sintesis;
    							}
    							 tbody += '<tr onclick="showInfo(' + k + ')">';
    							 tbody += '<td>' + counter +'</td>';
    							 tbody += '<td>' + v.numActuacion + ' / ' + v.aniActuacion + '</td>';
    							 tbody += '<td>' + v.descTipoCarpeta + ' - ' + v.numero + '/' + v.anio + '</td>';
    							 tbody += '<td>' + v.sintesis + '</td>';
    							 tbody += '<td>' + dateFormat(v.fechaRegistro) + '</td>';
    							 tbody += '</tr>';
    						}else{
    							showInfo(k);
    							return;
    						}
    					});
    //					$('#certificaciones_tbody').append(tbody);
    					//$('#tblResultados').removeClass('hidden');
    					showMessage( totalRecords + ' REGISTRO(S) ENCONTRADO(S).','success');
    				}else{
    					showMessage('NO SE ENCONTRARON RESULTADOS CON LOS PARAMETROS ELEGIDOS. INTENTE CON OTROS.','warning');
    				} 
    			});
    	}

    	/**
    	* FunciOn para la eliminaciOn lOgica de una certificaciOn
    	* @param {number} idRecord Es el Id de la actuaciOn a eliminar
    	*/
    	function deleteRecord(idRecord){
    		$.post("../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
    			{
    				idActuacion:idRecord,
    				activo:'N',
    				accion:'guardar'
    			},
    			function(response){
                    var object = eval("("+response+")");
    				var totalRecords = object.totalCount;
    				var message = '';
    				if(totalRecords == 1){
    					//registro actualizado
    					var data = object.data[0];
    					message = 'Registro eliminado satisfactoriamente.';
    					showMessage(message,'success');
    					if( $('#procedencia').val() == 1 ){
    						getTree();
    					}
    				}else{
    					showMessage('No fue posible eliminar el registro.','error');
    				}
    			});
    	}

    	/**
    	 * Muestra en el formulario, la informaciOn del renglOn elegido de la tabla de resultado de la bUsqueda
    	 * @param {int} position Es la posiciOn del elemento en el arreglo 
    	 */
    	function showInfo(position){
    		//muestra formulario
    		changeDivForm(1);
    		disabledButton(false);
    		//llena con los datos
    		var row = findContent.regs[position];
    		var selected = '';
    		var horaCertificacion = row.horaCertificacion.split(' ');
    		var tmpFecha = horaCertificacion[0].split('-');
    		horaCertificacion = tmpFecha[2] + '/' + tmpFecha[1] + '/' + tmpFecha[0] + ' ' + horaCertificacion[1];
    		$('#idActuacion').val(row.idActuacion);
    		$('#cveTipoJuzgado').val( row.cveJuzgado + '/' + $('#cveTipoJuzgadoAlt').val() );
    		$('#select_cert_carpeta').val(row.cveTipocarpeta);
    		$('#input_cert_numero').val(row.numero);
    		$('#input_cert_anio').val(row.anio);
    		$('#input_cert_lugar').val(row.lugarCertificacion);
    		$('#input_cert_hora').val(horaCertificacion);
    		$('#input_cert_sintesis').val(row.sintesis);
    		llenareditor(row.observaciones);
    		//$('#input_cert_observaciones').val(row.observaciones);
    		$('#label_cert_text1').empty().append('No. de ' + row.descTipoCarpeta);
    		//agrega los valores de idReferencia, numero, anio, cvetipocarpeta y cvejuzgado a un campo oculto para us posterior proceso
    		var params = row.idReferencia + '|' + row.numero + '|' + row.anio + '|' + row.cveTipocarpeta + '|' + row.cveJuzgado + '|' + row.idCertificacion;
    		$('#input_hidden_params').empty().val(params);
    		//limpia tabla de resultados
    //		$('#certificaciones_tbody').html("");
    		//desbloquea el boton de eliminar
    		if(crud.delete == 'S'){
    			$('#btn_cert_delete').prop("disabled",false);
    		}
    		$('#btn_cert_delete').show();
    		$('#inputPDF').show();
    		$('#inputVisor').show();
                muestraOcultaBotones();
    	}

    	llenareditor = function (value) {
    		try {
    			editor.ready(function () {
    			//editor.setContent("", false);
    			setTimeout(function(){ editor.setContent(value, true); }, 500);
    		});
    		} catch (e) {
    			alert(e);
    		}
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
                            $("#cveTipoJuzgado, #cveTipoJuzgado_busqueda").append($('<option></option>').val(json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                            if(cveJuzgado == json.data[i].cveJuzgado){
                                $("#cveTipoJuzgado option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");
                                $("#cveTipoJuzgado_busqueda option[value='"+json.data[i].cveJuzgado+"/"+json.data[i].cveTipojuzgado+"']").attr("selected","selected");
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

        cargaTipoCarpeta = function (seccion) {
            var seccion = seccion || 1;    	
            $('#select_cert_carpeta, #select_cert_numero_busqueda').empty();
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
                         $("#select_cert_carpeta, #select_cert_numero_busqueda").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                        for (var i = 0; i < json.totalCount; i++) {
                            switch(tipoJuzgado[1]){
                                case "1": // tipo de juzgado de control
                                    if(json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#select_cert_carpeta, #select_cert_numero_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "2": // tipo de juzgado juicio
                                    if(json.data[i].cveTipoCarpeta == "3" ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#select_cert_carpeta, #select_cert_numero_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "3": // tipo de juzgado ejecucion
                                    if(json.data[i].cveTipoCarpeta == "5" ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#select_cert_carpeta, #select_cert_numero_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "4": // tipo de juzgado tribunal
                                    if(json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#select_cert_carpeta, #select_cert_numero_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                                case "5": // se anexa caso de tocas para funcionamiento en segunda instancia
                                     if(json.data[i].cveTipoCarpeta == "6" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#select_cert_carpeta, #select_cert_numero_busqueda").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                break;
                            }    
                        }
                        $("#select_cert_carpeta, #select_cert_numero_busqueda").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso, 'error');
                }
            });
        };

    	function disabledButton(state){
    		idButton = $('#btn_certificaciones_guardar');
    		//idButton.prop('disabled',state);
    	}

    	/**
    	 * Desactiva/activa los campos clave del formulario
    	 * @param {boolean} stateReference El valor se asigan directamente al atributo de los campos de referencia
    	 * @param {boolean} stateCertification El valor se asigan directamente al atributo de los campos de certificaciOn
    	 */
    	function disabledFields(stateReference,stateCertification){
    		var idFields = [];
    		//refence fields
    		idFieldsRef = ['select_cert_carpeta','input_cert_numero','input_cert_anio'];
    		$.each(idFieldsRef, function(k,v){
    			$('#' + v).attr("disabled",stateReference);
    		});
    		//Certification fields
    		idFieldsCert = ['input_cert_lugar','input_cert_hora','input_cert_sintesis'];
    		$.each(idFieldsCert, function(k,v){
    			$('#' + v).attr("disabled",stateCertification).val('');
    		});
    	}

    	/**
    	 * Limpia el contenido del formulario
    	 */
    	function cleanFields(idModulo) {
    		var idModulo = idModulo || '1';
    		if(idModulo == 1){
    			if( $('#procedencia').val() == 0 ){
    				$('#cveTipoJuzgado, #cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val() );
    				cargaTipoCarpeta();
    				$('#select_cert_carpeta, #select_cert_numero_busqueda').prop('selectedIndex',0);
    				$('#input_cert_anio').val('');
    				$('#input_cert_numero').val('');
    				$('#input_cert_anio_busqueda').val('');
    				$('#input_cert_numero_busqueda').val('');
    				$('#label_cert_text1, #label_cert_text2').empty().append('No. de');
    				$('#idActuacion').val('');
    				$('#input_hidden_params').val('');
    			}
    		    $('#input_cert_lugar, #input_cert_hora, #input_cert_sintesis').val('');
    		    editor.setContent("", false);
    			$('#input_cert_finicial_busqueda, #input_cert_ffinal_busqueda').val(getDate('today'));
    			$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').removeClass('glyphicon-remove');
    			$('#inputPDF').hide();
    			$('#inputVisor').hide();			
    		}else if(idModulo == 2){
    			//limpia seccion de captura
    			if( $('#procedencia').val() == 0 ){
    				//$('#cveTipoJuzgado, #cveTipoJuzgado_busqueda').val( $("#SysCveAdscripcion").val() + '/' + $('#cveTipoJuzgadoAlt').val() );

    			}
    			$('#input_cert_lugar, #input_cert_hora, #input_cert_sintesis').val('');
    			editor.setContent("", false);
    		}
    		disabledButton(true);
    		$('#btn_cert_delete').prop("disabled",true);
    		$('#btn_cert_delete').hide();
    	}

    	/**
    	 * Muestra/Oculta el div del formulario y la tabla de bUsqueda
    	 * @param {int} opc Recibe un parametro para mostrar el DIV correspondiente
    	 */
        function changeDivForm(opc) {
        	var titulo = '';
            if (opc === 1) {
                $("#divResultados").hide("fade");
                $("#divConsulta").hide("fade");
                $("#divFormulario").show("slide");
                //cambia el titulo
                $('#autosTitulo').empty().append(titulos['titulo1']);
            } else if (opc === 2) {
                $("#divFormulario").hide("fade");
                $("#divResultados").hide("fade");
                $("#divConsulta").show("slide");
    			//coloca la fecha actual en los combos
    		    $('#input_cert_finicial_busqueda, #input_cert_ffinal_busqueda').val(getDate('today'));
                //cambia el titulo
                titulo = '<a href="#" onclick="changeDivForm(1)" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / ' + titulos['titulo2'];
                $('#autosTitulo').empty().append(titulo);
                
                cargaTipoCarpeta(2);
    			cleanFields(1);     
            } else if(opc == 3){
                $("#divConsulta").hide("fade");            
    			$("#divResultados").show("slide");
                //cambia el titulo
                titulo = '<a href="#" onclick="changeModule(1)" style="text-decoration:underline;">' + titulos['titulo1'] + '</a> / <a href="#" onclick="changeModule(2)" style="text-decoration:underline;">' + titulos['titulo2'] + '</a> / ' + titulos['titulo3'];
                $('#autosTitulo').empty().append(titulo);
            }
            disabledButton(true);
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
                                        if (nombreHijo.nomFormulario == 'CERTIFICACIONES') {
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

    		/**
    		 * Al salir del foco del nUmero y año de la causa, consulta las audiencias sin relaciOn
    		 */
    		$('#input_cert_anio').focusout(function(){ //#i_actam_numero, 
    			obtieneDatosCertificacion();
    		});

    		function obtieneDatosCertificacion(){		 	
    			var carpeta = $('#select_cert_carpeta option:selected').val();
    			var numero =  $('#input_cert_numero').val();
    			var anio =  $('#input_cert_anio').val();
    			var mensajeBusqueda = '';
    			if(carpeta != '' && carpeta>0){
    				if(numero !=''){
    					if(anio != ''){
    						$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').removeClass('glyphicon-remove');
    						getCarpetaJudicial();
    					}else{
    						$('#input_cert_anio').focus();
    						mensajeBusqueda = 'Necesita ingresar el a&ntilde;o.';
    						showMessage(mensajeBusqueda,'warning');
    						$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + mensajeBusqueda);
    					}
    				}else{
    					$('#input_cert_numero').focus();
    					mensajeBusqueda = 'Necesita ingresar el n&uacute;mero.';
    					showMessage(mensajeBusqueda,'warning');
    					$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + mensajeBusqueda);
    				}
    			}else{
    				$('#select_cert_carpeta').focus();
    				mensajeBusqueda = 'Necesita ingresar la carpeta.';
    				showMessage(mensajeBusqueda,'warning');
    				$('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden","true").after('').append('&nbsp;' + mensajeBusqueda);
    			}
    		}

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
    	 * Variable para almacenar registros en la bUsqueda
    	 */
    	var findContent = {
    		regs:[]
    	};

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
    	* Variables varias
    	*/
    	var titulos = {'titulo1':'Certificaciones','titulo2':'B&uacute;squeda','titulo3':'Resultados'};
    	var cveJuzgado = $('#SysCveAdscripcion').val();
    	var cveUsuarioSistema = $('#cveUsuarioSistema').val();
    	var cveTipoActuacion = 11;

        function visorDocuemntos() {
                $.ajax({
                    type: 'POST',
                    url: 'visorpdf/index.php',
                    data: {idCarpetaJudicial: "", idActuacion: $('#idActuacion').val(), cveTipoDocumento: 7}, //malo
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
                strDatos += "&cveTipoDocumento=7"; //tipo documento
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
    		$('#cveTipoJuzgado, #select_cert_carpeta, #input_cert_numero, #input_cert_anio').prop('disabled',true);
    	}

        function obtieneDatosCarpeta(){
            var idCarpetaJudicialArbol = $('#idCarpetaJudicialArbol').val();
            var cveTipoCarpetaArbol = $('#cveTipoCarpetaArbol').val();

            //obtencion de los datos para la seleccion del combo de juzgado y relacionado con 
            var urlFacade = "../fachadas/sigejupe/actaminima/ActaminimaFacade.Class.php";
            var dataFacade = "accion=carpetaArbol&idCarpetaJudicial=" + idCarpetaJudicialArbol;
            $.ajax({ async: false, type: 'POST', url: urlFacade, data: dataFacade
            }).done(function(response)  {
                var objeto = eval('(' + response + ')');
                $('#cveTipoJuzgado').val( objeto.idJuzgado );
                cargaTipoCarpeta();
                if( $('#procedencia').val() == 1 ){
                	$('#select_cert_carpeta').val( cveTipoCarpetaArbol );
                }
                // obtieneDatosCertificacion();
            });

            var urlFacade = "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php";
            var dataFacade = "accion=consultar&activo=S&idCarpetaJudicial=" + idCarpetaJudicialArbol;
            $.ajax({ async: false, type: 'POST', url: urlFacade, data: dataFacade
            }).done(function(response)  {
                var objeto = eval('(' + response + ')');
                var data = '';
                if(objeto.totalCount>0){
                    data = objeto.data[0];
                    $('#input_cert_numero').val( data.numero );
                    $('#input_cert_anio').val( data.anio );
                }
            });
        }

        /**
        * Funciones ejecutadas al accesar al contenido
        */
    	$(function(){
    		//datos para inserciOn en -tblactuaciones- y -tblcertificaciones-
    		var insert_numActuacion = '';
    		var insert_aniActuacion = '';
    		var insert_idReferencia = '';
    		var insert_numero = '';
    		var insert_anio = '';
    		var insert_cveTipoCarpeta = '';
    		var insert_sintesis = '';
    		var insert_observaciones = '';
    		var insert_cveUsuario = '';
    		var insert_activo = 'S';
    		var insert_fechaRegistro = '';
    		var insert_fechaActualizacion = '';
    		var insert_idActuacion = 0;
    		var insert_numEmpleado = '';
    		var insert_lugarCertificacion = '';
    		var insert_horaCertificacion = '';
    		//obtencion de permisos
    		cargaJuzgados(); //carga los Juzgados
//    		setPermissions();
    		//carga el combo -select_cert_numero- de la tabla -tbltiposcarpetas-

    		//validacion de datos para el arbol
    	    if( $('#procedencia').val() == 1 ){
    	    	if( $('#idActuacion').val() != '' && $('#idActuacion').val() != 0 ){
    		    	findAutos( $('#idActuacion').val() );
    	    	}else if ( $('#idCarpetaJudicialArbol').val() != '' && $('#cveTipoCarpetaArbol').val() != ''){ //no es de actuacion
    	    		obtieneDatosCarpeta();
    	    		obtieneDatosCertificacion();
    	    	}
    	    	$('.botonesArbol').hide();
    		    bloqueaCamposLlave();
    	    }

    		//validaciOn de entrada numErica
    		$('#input_cert_numero, #input_cert_anio, #input_cert_numero_busqueda, #input_cert_anio_busqueda').keypress(validateNumber);
    		$('#input_cert_numero').keypress(function(event){
    			changeFocus(event,'input_cert_anio');
    	    });
    		$('#input_cert_numero_busqueda').keypress(function(event){
    			changeFocus(event,'input_cert_anio_busqueda');
    	    });
    		$('#input_cert_anio').keypress(function(event){
    			changeFocus(event,'input_cert_lugar');
    	    });

    		/**
    		 * Cambia el valor de la etiqueta al seleccionar un tipo de carpeta
    		 */
    		$('#select_cert_carpeta').change(function(){
    			var label = '';
    			//cambia el valor de la etiqueta 
    			if( $(this).val() > 0 ){
    				label = $('#select_cert_carpeta option:selected').text();
    			}
    			$('#label_cert_text1').empty().append('No. de ' + label);
    			//limpia campos
    			$('#input_cert_numero, #input_cert_anio').empty().val("");
    			//limpia formulario
    			cleanFields(2);
    		});

    		//limpia formulario al cambiar alguno de los campos llave
    		$('#input_cert_numero, #input_cert_anio').on('keypress', function(){
    			//limpia formulario
    			cleanFields(2);
    		});

    		//cambia la etiqueta al cambiar la selecciOn del combo de bUsqueda
    		$('#select_cert_numero_busqueda').change(function(){
    			var label = '';
    			//cambia el valor de la etiqueta 
    			if( $(this).val() > 0 ){
    				label = $('#select_cert_numero_busqueda option:selected').text();
    			}
    			$('#label_cert_text2').empty().append('No. de ' + label);
    			//limpia campos
    			$('#input_cert_numero_busqueda, #input_cert_anio_busqueda').empty().val("");
    		});

    		//confirmaciOn de la eliminaciOn de un registro
    		$('#btn_cert_delete').click(function(){
    			//showMessage('ESTA A PUNTO DE ELIMINAR LA INFORMACI&Oacute;N DE ESTA CERTIFICACI&Oacute;N.','warning');
    			var response = confirm("¿Realmente desea eliminar esta Certificación?");
    			if (response) {
    				var idRecord = $('#idActuacion').val();
    				deleteRecord(idRecord);
    				cleanFields();
    			}		
    		});
    		$('#input_cert_finicial_busqueda, #input_cert_ffinal_busqueda').datepicker().on('changeDate',function(e){ $(this).datepicker('hide'); });
    		$('#input_cert_hora').datetimepicker({
    			locale:'es',
    			showTodayButton:true
    		});
    		//.on('click', function(e){ $(this).data('DateTimePicker').show(); }).on('dp.update', function(e){ (this).data('DateTimePicker').hide(); });
    		//inicialización del editor
    		editor = UE.getEditor('input_cert_observaciones');
    		editor.ready(function () {
    		editor.setContent();
    		});
    	});

    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>