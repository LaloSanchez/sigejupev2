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

    if (isset($_POST['idActuacion'])) {
        $idActuacionArbol = @$_POST['idActuacion'];
    }
    if (isset($_POST['idCarpetaJudicial'])) {
        $idCarpetaJudicialArbol = @$_POST['idCarpetaJudicial'];
    }

    if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "")) {
        $procedencia = 1; // viene de arbol
    } else {
        $procedencia = 0; // formulario general
    }

    //echo "<br> Actuacion: " . $idActuacionArbol . "<br>"; 
    //echo "Carpeta: " . $idCarpetaJudicialArbol . "<br>";
    //echo "Procedencia: " . $procedencia . "<br>";
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

    <input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>" >
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="" >
    <input type="hidden" id="hiddenIdActuacionAcuerdo" value="" >
    <input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Consulta de Mujeres en Prisi&oacute;n
            </h5>
        </div>
         <div class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                        <!--div class="col-lg-4">                                                             
                            <label class="control-label col-xs-3">Relacionado con:</label>
                            <div class="col-xs-9">
                                <div id="divCmbRelaciones" class="logobox"></div>
                                <select class="form-control" name="cmbTipoCarpeta" id="cmbTipoCarpeta"  onchange="changeLabel(this)">
                                    <option value="0">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>                                
                        </div-->
                            <div class="col-lg-4">
                                <label class="control-label"
                                       for="txtNombreOfendido" value="">Nombre</label>
                                <div>
                                    <input type="text" class="form-control"
                                           id="txtNombreOfendido"
                                           name="txtNombreOfendido" onkeypress="return validarNombre(event)" style="text-transform:uppercase;">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label"
                                       for="txtPaternoOfendido">Paterno</label>

                                <div>
                                    <input type="text" class="form-control datoTipoCadena"
                                           id="txtPaternoOfendido" name="txtPaternoOfendido" onkeypress="return validarNombre(event)" style="text-transform:uppercase;">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label"
                                       for="txtMaternoOfendido">Materno</label>

                                <div>
                                    <input type="text" class="form-control"
                                           id="txtMaternoOfendido"
                                           name="txtMaternoOfendido" onkeypress="return validarNombre(event)" style="text-transform:uppercase;">
                                </div>
                            </div>
                        
                            <div class="col-lg-4">
                                <label class="control-label"
                                       for="txtMaternoOfendido">Alias</label>
                                <div>
                                    <input type="text" class="form-control"
                                           id="txtAlias"
                                           name="txtAlias" onkeypress="return validarNombre(event)" style="text-transform:uppercase;">
                                </div>
                            </div>
                       
                            <div class="col-lg-2">

                                <label class="control-label needed" for="txtFechaNacimientoOfendido">
                                    Fecha Inicio Detenci&oacute;n
                                </label>

                                <div>
                                    <input id="txtfechaInicial" class="form-control"
                                           type="text" tabindex="4" data-toggle="tooltip"
                                           title=""
                                           placeholder="dd/mm/aaaa" name="txtfechaInicial"
                                           data-original-title="" value="<?php echo date("d/m/Y")?>" data-date-format="dd/mm/yyyy">
                                </div>
                            </div>
                        
                            <div class="col-lg-2">

                                <label class="control-label needed" for="txtFechaNacimientoOfendido">
                                    Fecha Fin Detenci&oacute;n
                                </label>

                                <div>
                                    <input id="txtfechaFinal" class="form-control"
                                           type="text" tabindex="4" data-toggle="tooltip"
                                           title=""
                                           placeholder="dd/mm/aaaa" name="txtfechaFinal"
                                           data-original-title="" value="<?php echo date("d/m/Y")?>" data-date-format="dd/mm/yyyy">
                                </div>
                            </div>

                   
                <br>
                <br>
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
                    
                <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Consultar" onclick="consultarMujeresPrision(1);"> 
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar();"> 
                </div>
            </div>

            <div id="divConsulta" style="display: none" class="col-xs-12">
                <div class="col-xs-12">
                    <div class="form-group col-md-4" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarMujeresPrision(0);">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarMujeresPrision(0);">
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

                <div id="divTableResult" class="col-md-12 table-responsive">
                </div>
            </div>
        </div>
             
        <div id="divDetalle" style="display:none;">
            <div> <!-- consulta y busqueda -->
                <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(2)">
                <hr/>
                      <div id="divPersonaFisicaOfendido">
                            <!--<div class="contenedor">-->
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Carpeta</label>
                                    <input type="text" class="form-control" id="txtcarpeta" name="txtcarpeta" readonly="readonly">
                            </div>
                             <div class="col-lg-4">
                                <label class="control-label" for="txt">Carpeta de Investigaci&oacute;n</label>
                                    <input type="text" class="form-control" id="txtCarpetaInv" name="txtCarpetaInv" readonly="readonly">
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Nuc</label>
                                    <input type="text" class="form-control" id="txtnuc" name="txtnuc" readonly="readonly">
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Juzgado</label>
                                    <input type="text" class="form-control" id="txtJuzgado" name="txtJuzgado" readonly="readonly">
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Nombre</label>
                                    <input type="text" class="form-control" id="txtnombre" name="txtnombre" readonly="readonly">
                            </div>
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">RFC</label>
                                    <input type="text" class="form-control" id="txtrfc" name="txt" readonly="readonly">
                            </div>
                                                    
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">CURP</label>
                                    <input type="text" class="form-control" id="txtcurp" name="txt" readonly="readonly">
                            </div>
                           <div class="col-lg-2">

                                <label class="control-label" for="txtFechaNacimientoOfendido" readonly="readonly">
                                    Fecha de Nacimiento
                                </label>
                                <input type="text" class="form-control" id="txtfechaNacimiento" name="txtfechaNacimiento" readonly="readonly">
                            </div>
                            <div class="col-lg-2">
                                <label class="control-label" for="txtEdad">Edad </label>
                                    <input type="text" class="form-control" id="txtedad" name="txtedad" maxlength="3" readonly="readonly">
                            </div>
                                                                  
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Lugar de Nacimiento</label>
                                    <input type="text" class="form-control" id="txtdespais" name="txtdespais" readonly="readonly">
                            </div>                                                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Estado Civil</label>
                                    <input type="text" class="form-control" id="txtdesEstadoCivil" name="txtdesEstadoCivil" readonly="readonly">
                            </div>      
                                                    
                            <div class="col-lg-4">
                                <label class="control-label" for="txtPaternoOfendido">Ocupaci&oacute;n</label>

                                    <input type="text" class="form-control datoTipoCadena" id="txtdesocupacion" name="txtdesocupacion" readonly="readonly">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Nivel de Instrucci&oacute;n</label>
                                    <input type="text" class="form-control" id="txtdesNivelInstruccion" name="txtdesNivelInstruccion" readonly="readonly">
                            </div>                                                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">&#191;Habla Espa&ntilde;ol?</label>
                                    <input type="text" class="form-control" id="txtdesEspanol" name="txtdesEspanol" readonly="readonly">
                            </div>                                                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">&#191;Habla alg&uacute;n Dialecto?</label>
                                    <input type="text" class="form-control" id="txtdesFamLin" name="txtdesFamLin" readonly="readonly">
                            </div>                                                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Requiere Interprete</label>
                                    <input type="text" class="form-control" id="txtinterprete" name="txtinterprete" readonly="readonly">
                            </div> 
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Estado Psicof&iacute;sico al ser Detenida</label>
                            
                                <input type="text" class="form-control" id="txtedopsico" name="txtedopsico" readonly="readonly">
                            </div>

                            <div class="col-lg-4">
                                <label class="control-label" for="txt">&#191;Pertenece a alg&uacute;n Grupo &Eacute;tnico?</label>
                                    <input type="text" class="form-control" id="txtgrupoetnico" name="txtgrupoetnico" readonly="readonly">
                            </div>  
                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Alias</label>
                                    <input type="text" class="form-control" id="txtalias" name="txtalias" readonly="readonly">
                            </div>  
                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Fecha de Declaraci&oacute;n</label>
                                    <input type="text" class="form-control" id="txtfechaDeclaracion" name="txtfechaDeclaracion" readonly="readonly">
                            </div>  
                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Fecha de Imputaci&oacute;n</label>
                                    <input type="text" class="form-control" id="txtfechaImputacion" name="txtfechaImputacion" readonly="readonly">
                            </div>  
                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Fecha de Control de Detenci&oacute;n</label>
                                    <input type="text" class="form-control" id="txtfechaControl" name="txtfechaControl" readonly="readonly">
                            </div>  
                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Fecha de T&eacute;rmino Constitucional</label>
                                    <input type="text" class="form-control" id="txtfecTerminoCons" name="txtfecTerminoCons" readonly="readonly">
                            </div>  
                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Fecha de Cierre de Investigaci&oacute;n</label>
                                    <input type="text" class="form-control" id="txtfecCierreInv" name="txtfecCierreInv" readonly="readonly">
                            </div>  
                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Tiene Sobreseimiento</label>
                                    <input type="text" class="form-control" id="txttieneSobreseimiento" name="txttieneSobreseimiento" readonly="readonly">
                            </div>  
                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Fecha de Sobreseimiento</label>
                                    <input type="text" class="form-control" id="txtfechaSobreseimiento" name="txtfechaSobreseimiento" readonly="readonly">
                            </div>  
                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Ingreso Mensual</label>
                                    <input type="text" class="form-control" id="txtingresomensual" name="txtingresomensual" readonly="readonly">
                            </div>  
                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Tipo de Detenci&oacute;n</label>
                                    <input type="text" class="form-control" id="txttipodetencion" name="txttipodetencion" readonly="readonly">
                            </div>  
                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Reincidencia</label>
                                    <input type="text" class="form-control" id="txtreincidencia" name="txtreincidencia" readonly="readonly">
                            </div>  
                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Cereso</label>
                                    <input type="text" class="form-control" id="txtcereso" name="txtcereso" readonly="readonly">
                            </div>  
                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Etapa Procesal</label>
                                    <input type="text" class="form-control" id="txtEtapaProcesal" name="txtEtapaProcesal" readonly="readonly">
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Fecha Sentencia</label>
                                    <input type="text" class="form-control" id="txtfechasentecia" name="txtfechasentecia" readonly="readonly">
                            </div>
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Fecha Ejecutoria</label>
                                    <input type="text" class="form-control" id="txtfechaejecutoria" name="txtfechaejecutoria" readonly="readonly">
                            </div>
                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Tipo Sentencia</label>
                                    <input type="text" class="form-control" id="txttiposentencia" name="txttiposentencia" readonly="readonly">
                            </div>
                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Tipo de Sanci&oacute;n</label>
                                    <input type="text" class="form-control" id="txttiposancion" name="txttiposancion" readonly="readonly">
                            </div>
                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Fecha de Inicio de Sanci&oacute;n</label>
                                    <input type="text" class="form-control" id="txtFechaInicioSancion" name="txtFechaInicioSancion" readonly="readonly">
                            </div>
                
                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Fecha Fin de Sanci&oacute;n</label>
                                    <input type="text" class="form-control" id="txtFechaFinSancion" name="txtFechaFinSancion" readonly="readonly">
                            </div>

                            <div class="col-lg-4">
                                <label class="control-label" for="txt">A&ntilde;o(s) de  Prisi&oacute;n</label>
                                    <input type="text" class="form-control" id="txtanioPrision" name="txtanioPrision" readonly="readonly">
                            </div>

                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Mes(es) de Prisi&oacute;n</label>
                                    <input type="text" class="form-control" id="txtmesPrision" name="txtmesPrision" readonly="readonly">
                            </div>

                            <div class="col-lg-4">
                                <label class="control-label" for="txt"> D&iacute;as de Prisi&oacute;n</label>
                                    <input type="text" class="form-control" id="txtdiasPrision" name="txtdiasPrision" readonly="readonly">
                            </div>
                
                            <div class="col-lg-12">
                                </br>
                                </br>
                            </div>
                            <div class="col-lg-12">
                            <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(2)">
                            </div>            
                    </div>

            </div>
        </div>    
             
    </div>

    <script type="text/javascript">

       var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
       var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
       var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
        
        var procedencia = <?php echo $procedencia; ?>;

        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';

        
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
    				var options = '<option value="0">Seleccione una opci&oacute;n</option>';
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
    			
    	

        getPaginas = function (pag, cantReg) {
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();     
            
            var strDatos = "accion=getPaginasMujeres";
            strDatos += "&cveTipoPersona=1";  
            strDatos += "&cveGenero=2";  
            strDatos += "&detenido=S"; 
            strDatos += "&activo=S";
            //strDatos += "&cmbTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            
            strDatos += "&vnombre=" + $("#txtNombreOfendido").val();
            strDatos += "&vpaterno=" + $("#txtPaternoOfendido").val();
            strDatos += "&vmaterno=" + $("#txtMaternoOfendido").val();
            strDatos += "&valias=" + $("#txtAlias").val();
    //        strDatos += "&fechaNacimiento=" + $("#txtFechaNacimientoOfendido").val();
    //        strDatos += "&edad=" + $("#txtEdadOfendido").val();
    //        strDatos += "&cvePaisNacimiento=" + $("#cmbPaisNacimientoOfendido").val();
    //        strDatos += "&estadoNacimiento=" + $("#txtestadoNacimientoOfendido").val();
    //        strDatos += "&municipioNacimiento=" + $("#txtmunicipioNacimientoOfendido").val();
    //        strDatos += "&cveEstadoNacimiento=" + $("#cmbEstadoNacimientoOfendido").val();
    //        strDatos += "&cveMunicipioNacimiento=" + $("#cmbMunicipioNacimientoOfendido").val();
    //        
            strDatos += "&txtFecInicialBusquedaDet=" + $("#txtfechaInicial").val();
            strDatos += "&txtFecFinalBusquedaDet=" + $("#txtfechaFinal").val();
            
            //strDatos += "&cveTipoReincidencia=" + $("#cmbcveCereso").val();
    //        strDatos += "&cveTipoDetencion=" + $("#cmbcveTipoDetencion").val();
    //        strDatos += "&cveCereso=" + $("#cmbcveCereso").val();
                    
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
            
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
    //                       alert(datos);
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
        //**************************** Consulta de Mujeres Desaparecidas *************************************
        consultarMujeresPrision = function (Aux) {
            if(Aux==1){
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);       
            }
            
            var nombre=$("#txtNombreOfendido").val();    
            var paterno=$("#txtPaternoOfendido").val();    
            var materno=$("#txtMaternoOfendido").val();    
            var alias=$("#txtAlias").val();    
    //        var fechanac=$("#txtFechaNacimientoOfendido").val();    
    //        var edad=$("#txtEdadOfendido").val();  
    //        var pais=$("#cmbPaisNacimientoOfendido").val();    
    //        var cmbEstado=$("#cmbEstadoNacimientoOfendido").val();    
    //        var estado=$("#txtestadoNacimientoOfendido").val();    
    //        var cmbmunicipio=$("#cmbMunicipioNacimientoOfendido").val();    
    //        var municipio=$("#txtmunicipioNacimientoOfendido").val();    
    //        var detencion=$("#cmbcveTipoDetencion").val();    
    //        var cereso=$("#cmbcveCereso").val();    

            if(nombre!="" || paterno!="" || materno!="" || alias!=""){
                var error=0;
            }else{var error=1;}

            if(error==0)
            {
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            
            var strDatos = "accion=consultarMujeresPrision";
            strDatos += "&cveTipoPersona=1";  
            strDatos += "&cveGenero=2";  
            strDatos += "&detenido=S"; 
            strDatos += "&activo=S";
            
            //strDatos += "&cmbTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            strDatos += "&txtFecInicialBusquedaDet=" + $("#txtfechaInicial").val();
            strDatos += "&txtFecFinalBusquedaDet=" + $("#txtfechaFinal").val();
            
            strDatos += "&vnombre=" + $("#txtNombreOfendido").val();
            strDatos += "&vpaterno=" + $("#txtPaternoOfendido").val();
            strDatos += "&vmaterno=" + $("#txtMaternoOfendido").val();
            strDatos += "&valias=" + $("#txtAlias").val();
    //        strDatos += "&fechaNacimiento=" + $("#txtFechaNacimientoOfendido").val();
    //        strDatos += "&edad=" + $("#txtEdadOfendido").val();
    //        strDatos += "&cvePaisNacimiento=" + $("#cmbPaisNacimientoOfendido").val();
    //        strDatos += "&estadoNacimiento=" + $("#txtestadoNacimientoOfendido").val();
    //        strDatos += "&municipioNacimiento=" + $("#txtmunicipioNacimientoOfendido").val();
    //        strDatos += "&cveEstadoNacimiento=" + $("#cmbEstadoNacimientoOfendido").val();
    //        strDatos += "&cveMunicipioNacimiento=" + $("#cmbMunicipioNacimientoOfendido").val();
    //        
    //        strDatos += "&cveTipoDetencion=" + $("#cmbcveTipoDetencion").val();
    //        strDatos += "&cveCereso=" + $("#cmbcveCereso").val();

            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
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
                        table += "<th>Carpeta</th>"
                        table += "<th>Carpeta Investigaci&oacute;n</td>";
                        table += "<th>NUC</td>";;
                        table += "<th>Juzgado</th>";
                        table += "<th>Nombre</th>";
                        table += "<th>Alias</th>";
                        table += "<th>Lugar de Nacimiento</th>";
                        table += "<th>Fecha de Nacimiento</th>";
                        table += "<th>Cereso</th>";
                        table += "<th>Tipo de Detenci&oacute;n</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var cont = 0;
                       // var counter = parseInt(k)+1;
                        
                        for (var i = 0; i < json.total; i++) {
                            table += '<tr onclick="showInfo(' + json.data[i].idImputadoCarpeta + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                            table += "<td>" + (i + 1) + "</td>";
                            table += "<td> " + json.data[i].Carpeta + "</td>";
                            table += "<td> " + json.data[i].CarpetaInv + "</td>";
                            table += "<td> " + json.data[i].nuc + "</td>";
                            table += "<td> " + json.data[i].Juzgado + "</td>";
                            table += "<td> " + json.data[i].nombre + " " + json.data[i].paterno +" "+ json.data[i].materno + "</td>";
                            table += "<td> " + json.data[i].alias + "</td>";
                            table += "<td> " + json.data[i].desPais + "/" + json.data[i].estadoNacimiento +"/"+ json.data[i].municipioNacimiento +"</td>";
                            table += "<td> " + json.data[i].fechaNacimiento +"</td>";
                            table += "<td> " + json.data[i].cereso + "</td>";
                            table += "<td> " + json.data[i].tipodetencion + "</td>";
                            table += "</tr> ";
    //                       alert(json.data[i].observaciones);
                        }
                        table += "</tbody> ";
                        table += "</table> ";
      
    //                  $("#divHideForm").hide();
                        $("#divConsulta").show();
                        $("#divTableResult").html(table);
                        $("#tblResultadosGrid").DataTable({
                            paging: false
                        });
                        
                        //alert(json.pagina);
                        //alert(json.totalCount);
                        getPaginas(json.pagina, json.totalCount);
                        
                    } else {
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                        
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
            }
            else
            {
                $("#divAlertInfo").html('Seleccione/Introduzca otro criterio de b&uacute;squeda');
                $("#divAlertInfo").show("slide");
                setTimeAlert("divAlertInfo");
            }
            
            //********************* *************************************
        };

        consultaDetalle = function (idMedidaCautelar) {
            $("#"+idMedidaCautelar).show();
        };
        ocultadetalle = function (idMedidaCautelar) {
            $("#"+idMedidaCautelar).hide();
        };
       
        limpiar = function () {        
            $("#txtNombreOfendido").val("");
            $("#txtPaternoOfendido").val("");
            $("#txtMaternoOfendido").val("");
            $("#txtAlias").val("");
            $("#txtFechaNacimientoOfendido").val("");
            $("#txtEdadOfendido").val("");
            $("#txtestadoNacimientoOfendido").val("");
            $("#txtmunicipioNacimientoOfendido").val("");
                $("#cmbPaisNacimientoOfendido").val(119).trigger('change');
                $("#cmbEstadoNacimientoOfendido").val(15).trigger('change');
            $("#cmbMunicipioNacimientoOfendido").val(0);
            $("#cmbEstudioOfendido").val(0);
            $("#cmbcveTipoDetencion").val(0);
            $("#cmbcveCereso").val(0);
            $("#divTableResult").val("");
            $("#divConsulta").hide();
            $("#divTableResult").html("");

            $("#txtfechaInicial").val("<?php echo date('d/m/Y')?>");
            $("#txtfechaFinal").val("<?php echo date('d/m/Y')?>");
          };


        
        (function(a) {
            a.fn.validaCampo = function(b) {
                a(this).on({keypress: function(a) {
                        var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                        (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                    }})
            }
        })(jQuery);

       

        $(function () {
            
            $("#txtNumero").validaCampo('0123456789');
            $("#txtAnio").validaCampo('0123456789');
    //        $('#txtAnio').inputmask({
    //            mask: '9999'
    //        });
            
            $("#txtfechaInicial").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            $("#txtfechaFinal").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );

            $("#txtFechaNacimientoOfendido").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            });
    //        comboPaisNacimientoOfendido("cmbPaisNacimientoOfendido");
    //        comboEstadoNacimientoOfendido("cmbEstadoNacimientoOfendido");
    //        comboMunicipioNacimientoOfendido("cmbMunicipioNacimientoOfendido");

            //fillCombo(['cmbPaisNacimientoOfendido'],'paises/PaisesFacade','cvePais','desPais');       
    //        fillCombo(['cmbEstudioOfendido'],'nivelesinstrucciones/NivelesinstruccionesFacade','cveNivelInstruccion','desNivelInstruccion');
            //fillCombo(['cmbEstadoCivilOfendido'],'estadosciviles/EstadoscivilesFacade','cveEstadoCivil','desEstadoCivil');
            //fillCombo(['cmbOcupacionOfendido'],'ocupaciones/OcupacionesFacade','cveOcupacion','desOcupacion');
            //fillCombo(['cmbTipoCarpeta'],'tiposcarpetas/TiposcarpetasFacade','cveTipoCarpeta','desTipoCarpeta');
    //        fillCombo(['cmbcveTipoDetencion'],'tiposdetenciones/TiposdetencionesFacade','cveTipoDetencion','desTipoDetencion');
    //        fillCombo(['cmbcveCereso'],'ceresos/CeresosFacade','cveCereso','desCereso');

            //cvePais,cvePais,cveNivelInstruccion,cveOcupacion

            //obtenerPermisos();
        });

        
      function comboPaisNacimientoOfendido(elemento) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/paises/PaisesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#' + elemento).empty();
                        $('#' + elemento).append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#' + elemento).append('<option value="' + object.cvePais + '">' + object.desPais + '</option>');
                            });
                            $('#' + elemento).val(119).trigger('change');
                        }

                    } catch (e) {
                       // alert("Error al cargar País Ofendido:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la petición de país Ofendido:\n\n" + otroobj);
                }
            });
        };

         function comboEstadoNacimientoOfendido() {
            var tipoPersona = $("#cmbTipoPersonaOfendido").val();
            var cmbpais = "";
            var cmbestado = "";
            var cmbmunicipio = "";
            var txtestado = "";
            var txtmunicipio = "";
            
                cmbpais = "cmbPaisNacimientoOfendido";
                cmbestado = "cmbEstadoNacimientoOfendido";
                cmbmunicipio = "cmbMunicipioNacimientoOfendido";
                txtestado = "txtestadoNacimientoOfendido";
                txtmunicipio = "txtmunicipioNacimientoOfendido";

            $('#' + cmbestado).empty();
            $('#' + cmbestado).append('<option value="0">Seleccione una opci&oacute;n</option>');
            $('#' + cmbmunicipio).empty();
            $('#' + cmbmunicipio).append('<option value="0">Seleccione una opci&oacute;n</option>');
            $("#" + txtestado).val("");
            $("#" + txtmunicipio).val("");
            //si el País es México
            if ($('#' + cmbpais).val() == "119") {
                $("#" + cmbestado).show();
                $("#" + cmbmunicipio).show();
                $("#" + txtestado).hide();
                $("#" + txtmunicipio).hide();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultar", obligaPermiso: "false", cvePais: $('#' + cmbpais).val()},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('#' + cmbestado).empty();
                            $('#' + cmbestado).append('<option value="0">Seleccione una opci&oacute;n</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('#' + cmbestado).append('<option value="' + object.cveEstado + '">' + object.desEstado + '</option>');
                                });
                                $('#' + cmbestado).val('15').trigger('change');
                            }
                        } catch (e) {
                           // alert("Error al cargar Estado Ofendido:" + e);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        //alert("Error en la petición de Estado Ofendido:\n\n" + otroobj);
                    }
                });
            } else {
                $("#" + cmbestado).hide();
                $("#" + cmbmunicipio).hide();
                $("#" + txtestado).show();
                $("#" + txtmunicipio).show();
            }
        };

      function comboMunicipioNacimientoOfendido() {

            var cmbestado = "";
            var cmbmunicipio = "";

                cmbestado = "cmbEstadoNacimientoOfendido";
                cmbmunicipio = "cmbMunicipioNacimientoOfendido";
            
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false", cveEstado: $('#' + cmbestado).val()},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#' + cmbmunicipio).empty();
                        $('#' + cmbmunicipio).append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#' + cmbmunicipio).append('<option value="' + object.cveMunicipio + '">' + object.desMunicipio + '</option>');
                            });
                        }else{
                           // alert('no se encontraron municipios');
                        }
                    } catch (e) {
                        //alert("Error al cargar Municipio Nacimiento Ofendido:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticiÃ³n de Municipio Nacimiento Ofendido:\n\n" + otroobj);
                }
            });
        };
        

    /*---------------------*/
        /**
    	 * Muestra/Oculta el div del formulario y la tabla de bUsqueda
    	 * @param {int} opc Recibe un parametro para mostrar el DIV correspondiente
    	 */
        function changeDivForm(opc) {
            if (opc === 1) {
                $("#divResultados").hide("fade");
                $("#divFormulario").hide("slide");
                $("#divDetalle").show("fade");
            }
             if (opc === 2) {
                $("#divResultados").show("fade");
                $("#divFormulario").show("slide");
                $("#divDetalle").hide("fade");
            }
        }

    function showInfo(idImputadoCarpeta){
        changeDivForm(1);
        //alert(": " + idImputadoCarpeta);
        var pag =1;
        var cantxPag =10;
        
        var strDatos = "accion=consultarMujeresPrision";
            strDatos += "&cveTipoPersona=1";  
            strDatos += "&cveGenero=2";  
            strDatos += "&detenido=S"; 
            strDatos += "&pag="+pag; 
            strDatos += "&cantxPag="+cantxPag; 
            strDatos += "&activo=S";
            strDatos += "&idImputadoCarpeta="+idImputadoCarpeta;  

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //                            alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                          
                        $('#txtcarpeta').val(json.data[0].Carpeta);
                        $('#txtCarpetaInv').val(json.data[0].CarpetaInv);
                        $('#txtnuc').val(json.data[0].nuc);
                        $('#txtJuzgado').val(json.data[0].Juzgado);
                        $('#txtnombre').val(json.data[0].nombre +' '+ json.data[0].paterno +' '+ json.data[0].materno);
                        $('#txtrfc').val(json.data[0].rfc);
                        $('#txtcurp').val(json.data[0].curp);
                        $('#txtdesocupacion').val(json.data[0].desocupacion);
                        $('#txtfechaNacimiento').val(json.data[0].fechaNacimiento);
                        $('#txtedad').val(json.data[0].edad);
                        $('#txtdespais').val(json.data[0].desPais+'/'+json.data[0].estadoNacimiento+'/'+json.data[0].municipioNacimiento);
                        $('#txtdesEstadoCivil').val(json.data[0].desEstadoCivil);
                        $('#txtdesNivelInstruccion').val(json.data[0].desNivelInstruccion);
                        $('#txtdesEspanol').val(json.data[0].desEspanol);
                        $('#txtdesFamLin').val(json.data[0].desDialecto + ' ' +json.data[0].desFamLin);
                        $('#txtinterprete').val(json.data[0].interprete);
                        $('#txtedopsico').val(json.data[0].edopsico);
                        $('#txtgrupoetnico').val(json.data[0].grupoetnico);
                        
                        $('#txtalias').val(json.data[0].alias);
                        $('#txtfechaDeclaracion').val(json.data[0].fechaDeclaracion);
                        $('#txtfechaImputacion').val(json.data[0].fechaImputacion);
                        $('#txtfechaControl').val(json.data[0].fechaControl);
                        $('#txtfecTerminoCons').val(json.data[0].fecTerminoCons);
                        $('#txtfecCierreInv').val(json.data[0].fecCierreInv);
                        $('#txttieneSobreseimiento').val(json.data[0].tieneSobreseimiento);
                        $('#txtfechaSobreseimiento').val(json.data[0].fechaSobreseimiento);
                        $('#txtingresomensual').val(json.data[0].ingresomensual);
                        $('#txttipodetencion').val(json.data[0].tipodetencion);
                        $('#txtreincidencia').val(json.data[0].reincidencia);
                        $('#txtcereso').val(json.data[0].cereso);
                        $('#txtEtapaProcesal').val(json.data[0].EtapaProcesal);
                        $('#txtfechasentecia').val(json.data[0].fechasentecia);
                        $('#txtfechaejecutoria').val(json.data[0].fechaejecutoria);
                        $('#txttiposentencia').val(json.data[0].tiposentencia);
                        
                        $('#txtFechaInicioSancion').val(json.data[0].FechaInicioSancion);
                        $('#txtFechaFinSancion').val(json.data[0].FechaFinSancion);
                        $('#txtanioPrision').val(json.data[0].anioPrision);
                        $('#txtanioPrision').val(json.data[0].anioPrision);
                        $('#txtmesPrision').val(json.data[0].mesPrision);
                        $('#txtdiasPrision').val(json.data[0].diasPrision);
                        $('#txttiposancion').val(json.data[0].tiposancion);
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
         
            validarNombre = function (e) {
            var teclaAscii;
            if (window.event) { // IE y chrome
                teclaAscii = e.keyCode;
            } else if (e.which) { // Netscape/Firefox/Opera
                teclaAscii = e.which;
            }
            if ((teclaAscii > 64) && (teclaAscii < 91)) {//Letras mayusculas
                return  true;
            }
            if ((teclaAscii > 96) && (teclaAscii < 123)) {//Letras minúsculas
                return true;
            }
            if ((teclaAscii == 180) || (teclaAscii == 193) || (teclaAscii == 201) || (teclaAscii == 205) || (teclaAscii == 211) || (teclaAscii == 218)) {
                return true;
            }
            if ((teclaAscii == 180) || (teclaAscii == 225) || (teclaAscii == 233) || (teclaAscii == 237) || (teclaAscii == 243) || (teclaAscii == 250)) {
                return true;
            }
            if ((teclaAscii == 32) || (teclaAscii == 8) || (teclaAscii == 241) || (teclaAscii == 209)) {//Espacio
                return true;
            }
    //        if ((teclaAscii > 47) && (teclaAscii < 58)) {//Números
    //            return true;
    //        }
            return false;
        };
        
            validarEdad = function (e) {
            var teclaAscii;
            if (window.event) { // IE y chrome
                teclaAscii = e.keyCode;
            } else if (e.which) { // Netscape/Firefox/Opera
                teclaAscii = e.which;
            }
            
            if ((teclaAscii == 32) || (teclaAscii == 8) || (teclaAscii == 241) || (teclaAscii == 209)) {//Espacio
                return true;
            }
            if ((teclaAscii > 47) && (teclaAscii < 58)) {//Números
                return true;
            }
            return false;
        };
        
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
                                    if(vnombre.nomFormulario == "CONSULTAS"){
                                        var hijos = vnombre.hijos;
                                        $.each(hijos, function (k2, nombreHijo) {
                                            if (nombreHijo.nomFormulario == 'CONSULTA MUJERES EN PRISION') {
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
    //                    alert("insert: "+createRecord+" consulta: "+readRecord+" act: "+updateRecord+" elim: "+deleteRecord);
                        
                        if (String(createRecord) === "S") {
                            $("#inputGuardar").show();
                        }
                        if (readRecord == "S") {
                            $("#inputConsultar").show();
                        }
                        if (updateRecord == "S") {
                            // $("#inputGuardar").show();
                        }
                        if (deleteRecord == "S") {
                            $("#inputEliminar").show();
                        }
                        
                    });
        };
        
        
    </script> 
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>