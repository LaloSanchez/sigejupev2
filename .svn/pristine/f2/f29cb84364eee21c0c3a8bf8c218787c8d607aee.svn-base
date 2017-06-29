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
    </style>

    <input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>" >
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="" >
    <input type="hidden" id="hiddenIdActuacionAcuerdo" value="" >
    <input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Consulta de Imputados por Domicilio
            </h5>
        </div>
         <div class="panel-body">
            <div id="divFormulario" class="form-horizontal">
     <div class="col-lg-4">
                                <label class="control-label" for="PaisNacimientoOfendido">
                                    Pa&iacute;s 
                                </label>

                                <div>
                                    <select id="cmbPaisNacimientoOfendido" class="form-control" name="cmbPaisNacimientoOfendido"
                                            onchange="comboEstadoNacimientoOfendido();">
                                            <option value="0">Seleccione una opci&oacute;n</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <label class="control-label" for="Estado">Estado </label>

                                <div>
                                    <select id="cmbEstadoNacimientoOfendido"
                                            class="form-control"
                                            name="cmbEstadoNacimientoOfendido"
                                            onchange="comboMunicipioNacimientoOfendido();"
                                            required="">
                                        <option value="0">Seleccione una opci&oacute;n</option>
                                    </select>
                                    <input id="txtestadoNacimientoOfendido"
                                           name="txtestadoNacimientoOfendido" type="text" style="text-transform:uppercase;"
                                           class="form-control" style="display: none" onkeypress="return validarNombre(event)">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label"
                                       for="cmbMunic">
                                    Municipio
                                </label>

                                <div>
                                    <select id="cmbMunicipioNacimientoOfendido"
                                            class="form-control"
                                            name="cmbMunicipioNacimientoOfendido" required="">
                                        <option value="0">Seleccione una opci&oacute;n</option>
                                    </select>
                                    <input id="txtmunicipioNacimientoOfendido"
                                           name="txtmunicipioNacimientoOfendido" type="text" style="text-transform:uppercase;"
                                           class="form-control" style="display: none" onkeypress="return validarNombre(event)">
                                </div>
                            </div>               

                               <div class="col-lg-4">
                                <label class="control-label"
                                       for="txt" value="">Domicilio</label>
                                <div>
                                    <input type="text" class="form-control"
                                           id="txtDireccion"
                                           name="txtDireccion" onkeypress="return validarCampo(event)" style="text-transform:uppercase;">
                                </div>
                            </div>
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
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Consultar" onclick="consultarImputadosDomicilio(1);"> 
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
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarImputadosDomicilio(0);">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarImputadosDomicilio(0);">
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

                <div id="divTableResult" div class="col-md-12 table-responsive">
                </div>
            </div>
        </div>
             
        <div id="divDetalle" style="display:none;">
            <div> <!-- consulta y busqueda -->
                <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(2)">
                <hr/>
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
                                <label class="control-label" for="txt">Domicilio</label>
                                    
                                      <textarea class="form-control" rows="4" id="txtdomicilio" name="txtdomicilio" readonly="readonly"></textarea>
                            </div>
                            
                           <div class="col-lg-4">
                                <label class="control-label" for="txt">Alias</label>
                                    <input type="text" class="form-control" id="txtalias" name="txtalias" readonly="readonly">
                            </div>  
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Cereso</label>
                                    <input type="text" class="form-control" id="txtcereso" name="txtcereso" readonly="readonly">
                            </div>      

                 
                        <div id="divDetalleExhortos" style="display:none;">
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Tel&eacute;fono</label>
                                    <input type="text" class="form-control" id="txttelefono" name="txttelefono" readonly="readonly">
                            </div>  
                                                                                                    
                            <div class="col-lg-4">
                                <label class="control-label" for="txtPaternoOfendido">Consignaci&oacute;n</label>

                                    <input type="text" class="form-control datoTipoCadena" id="txtconsignacion" name="consignacion" readonly="readonly">
                                </div>
                        </div>
        
        
                         <div id="divDetalleCarpetas" style="display:none;">                     
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
                                <label class="control-label" for="txt">Estado Psicof&iacute;sico al ser Detenido (a)</label>
                            
                                <input type="text" class="form-control" id="txtedopsico" name="txtedopsico" readonly="readonly">
                            </div>

                            <div class="col-lg-4">
                                <label class="control-label" for="txt">&#191;Pertenece a alg&uacute;n Grupo &Eacute;tnico?</label>
                                    <input type="text" class="form-control" id="txtgrupoetnico" name="txtgrupoetnico" readonly="readonly">
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
                                <label class="control-label" for="txt">Fecha de T&eacute;rmino de Constitucional</label>
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
                                <label class="control-label" for="txt">Etapa Procesal</label>
                                    <input type="text" class="form-control" id="txtEtapaProcesal" name="txtEtapaProcesal" readonly="readonly">
                            </div>
                
                            <br/><br/><hr/>
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
            var strDatos = "accion=getPaginasDomicilios";
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();     
            
            //alert($("#cmbMunicipioNacimientoOfendido").val());
            strDatos += "&activo=S";
            strDatos += "&cvePais=" + $("#cmbPaisNacimientoOfendido").val();
            strDatos += "&cveEstado=" + $("#cmbEstadoNacimientoOfendido").val();
            strDatos += "&cveMunicipio=" + $("#cmbMunicipioNacimientoOfendido").val();
            strDatos += "&estado=" + $("#txtestadoNacimientoOfendido").val();
            strDatos += "&municipio=" + $("#txtmunicipioNacimientoOfendido").val();
            
            
            strDatos += "&direccion=" + $("#txtDireccion").val();
            
    //        strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasFacade.Class.php",
            
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
        consultarImputadosDomicilio = function (Aux) {
            if(Aux==1){
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);       
            } 

            var pais=$("#cmbPaisNacimientoOfendido").val();
            var cmbedo=$("#cmbEstadoNacimientoOfendido").val();
            var estado=$("#txtestadoNacimientoOfendido").val();
            var cmbmunicipio=$("#cmbMunicipioNacimientoOfendido").val();
            var municipio=$("#txtmunicipioNacimientoOfendido").val();
            var direccion=$("#txtDireccion").val();

            if(pais!="0" && (cmbedo!="0" || estado!="") && (cmbmunicipio!="0" || municipio!="" || direccion!=""))
            {    
                var pag = $("#cmbPaginacion").val();
                var cantReg = $("#cmbNumReg").val();
                var strDatos = "accion=consultarImputadosDomicilio";
                strDatos += "&activo=S";
                
                strDatos += "&cvePais=" + $("#cmbPaisNacimientoOfendido").val();
                strDatos += "&cveEstado=" + $("#cmbEstadoNacimientoOfendido").val();
                strDatos += "&cveMunicipio=" + $("#cmbMunicipioNacimientoOfendido").val();
                strDatos += "&estado=" + $("#txtestadoNacimientoOfendido").val();
                strDatos += "&municipio=" + $("#txtmunicipioNacimientoOfendido").val();
                
                strDatos += "&direccion=" + $("#txtDireccion").val();
                
                strDatos += "&pag=" + pag;
                strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
                
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasFacade.Class.php",
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
                        //alert(json.estatus);
                        if (json.estatus=='ok') {

                            table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>N&uacute;m.</th>";
                            table += "<th>Tipo</th>";
                            table += "<th>Carpeta</th>";
                            table += "<th>Carpeta Investigaci&oacute;n</td>";
                            table += "<th>NUC</td>";
                            table += "<th>Juzgado</th>";
                            table += "<th>Nombre</th>";
                            table += "<th>Direcci&oacute;n</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            var cont = 0;
                           // var counter = parseInt(k)+1;
                            var i=1;
                            var despais = "";
                            var desEstado;
                            var desMunicipio;
                            $.each(json.datos, function (k, vImputado) {
                            if(vImputado.TipoOrigen=='CARPETA JUDICIAL')
                            {
                                table += '<tr onclick="showInfoImpCarpeta(' + vImputado.id + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                            } 
                                else
                                {
                                table += '<tr onclick="showInfoImpExhorto(' + vImputado.id + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                                }   
                                table += "<td>" + i + "</td>";
                                table += "<td>"+ vImputado.TipoOrigen +"</td>";
                                table += "<td> " + vImputado.desTipoCarpeta + " " + vImputado.numero + "/" + vImputado.anio+"</td>";
                                table += "<td> " + vImputado.carpetaInv + "</td>";
                                table += "<td> " + vImputado.nuc + "</td>";
                                table += "<td>"+ vImputado.desjuzgado +"</td>";
                                if(vImputado.cveTipoPersona=='1'){
                                table += "<td> " + vImputado.nombre + " " + vImputado.paterno +" "+ vImputado.materno + "</td>";
                                }
                                else{table += "<td> " + vImputado.nombreMoral + "</td>";}
                                
                                if(vImputado.cvePais!='119')
                                {
                                    desEstado=vImputado.estado + ', ';
                                    desMunicipio=vImputado.municipio + ', ';
                                }
                                else
                                {
                                    desEstado=vImputado.desEstado + ', ';
                                    desMunicipio=vImputado.desMunicipio + ', ';
                                }
                                if(vImputado.colonia!=""){var colonia=vImputado.colonia + ',';}else{var colonia="";}
                                table += "<td> " + vImputado.desPais + ', '+ desEstado + desMunicipio + colonia + vImputado.direccion + "</td>";
                                
                               table += "</tr> ";
                                i=i+1;
                            }); 


                            table += "</tbody> ";
                            table += "</table> ";
          
        //                  $("#divHideForm").hide();
                            $("#divConsulta").show();
                            $("#divTableResult").html(table);
                            $("#tblResultadosGrid").DataTable({
                                paging: false
                            });
                            
                            //alert(json.pagina+'  t: '+json.total);
                            //alert(json.total);
                            getPaginas(json.pagina, cantReg);
                            
                        } else {
                            $("#divAlertInfo").html('' + json.mensaje);
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

       
        limpiar = function () {        
            $("#txtDireccion").val("");
            $("#txtmunicipioNacimientoOfendido").val("");
            $("#txtestadoNacimientoOfendido").val("");
            $("#cmbPaisNacimientoOfendido").val(0);//Limpiar combo
                $("#cmbPaisNacimientoOfendido").val(119).trigger('change');
                $("#cmbEstadoNacimientoOfendido").val(15).trigger('change');
            $("#divTableResult").val("");
            $("#divConsulta").hide();
            $("#divTableResult").html("");
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
                                            if (nombreHijo.nomFormulario == 'CONSULTA IMPUTADOS DOMICILIO') {
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

            comboPaisNacimientoOfendido("cmbPaisNacimientoOfendido");
            comboEstadoNacimientoOfendido("cmbEstadoNacimientoOfendido");
            comboMunicipioNacimientoOfendido("cmbMunicipioNacimientoOfendido");
            //fillCombo(['cmbPaisNacimientoOfendido'],'paises/PaisesFacade','cvePais','desPais');       
            fillCombo(['cmbTipoPersona'],'tipospersonas/TipospersonasFacade','cveTipoPersona','desTipoPersona');
            //fillCombo(['cmbcveCereso'],'ceresos/CeresosFacade','cveCereso','desCereso');

            //cvePais,cvePais,cveNivelInstruccion,cveOcupacion

            obtenerPermisos();
        });
        
        /*---------- NUEVAS FUNCIONES---------------*/
        calcularEdad = function (fecha, campoFecha, campoEdad) {
            if ($("#" + campoFecha + "").val() != "") {
                var fechaActual = new Date();
                var diaActual = fechaActual.getDate();
                var mmActual = fechaActual.getMonth() + 1;
                var yyyyActual = fechaActual.getFullYear();
                FechaNac = fecha.split("/");
                var diaCumple = FechaNac[0];
                var mmCumple = FechaNac[1];
                var yyyyCumple = FechaNac[2];
                if (mmCumple.substr(0, 1) == 0) {
                    mmCumple = mmCumple.substring(1, 2);
                }
                if (diaCumple.substr(0, 1) == 0) {
                    diaCumple = diaCumple.substring(1, 2);
                }
                var edad = yyyyActual - yyyyCumple;
                if ((mmActual < mmCumple) || (mmActual == mmCumple && diaActual < diaCumple)) {
                    edad--;
                }
                //if (edad <= 0 && edad < 18) {
                if (edad < 0) {
                    alert("Verifique su Fecha de Nacimiento, la fecha de nacimiento no puede ser mayor a la fecha actual");
                    $("#" + campoFecha + "").val("");
                    $("#" + campoFecha + "").focus();
                    $("#" + campoEdad + "").val("");
                    return false;
                } else {
                    $("#" + campoEdad + "").val(edad);
                    return true;
                }
            }
        }


        
        
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
     
       function  comboMunicipioNacimientoOfendido() {

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
            if (opc === 0) {//Doy clic en Imputados Carpetas
                $("#divResultados").hide("fade");
                $("#divFormulario").hide("slide");
                $("#divDetalle").show("fade");
                $("#divDetalleCarpetas").show("fade");
                $("#divDetalleExhortos").hide("fade");
            }
             if (opc === 1) {//Doy clic en Imputados Exhortos
                $("#divResultados").hide("fade");
                $("#divFormulario").hide("slide");
                $("#divDetalle").show("fade");
                $("#divDetalleCarpetas").hide("fade");
                $("#divDetalleExhortos").show("fade");
            }
            if (opc === 2) {//Doy clic en Regresar
                $("#divResultados").show("fade");
                $("#divFormulario").show("slide");
                $("#divDetalle").hide("fade");
            }
        }

    function showInfoImpCarpeta(idDomicilioImputadoCarpeta){
        changeDivForm(0);
        //alert(": " + idImputadoCarpeta);
        var strDatos = "accion=consultarUnImputadoDomicilio";
            strDatos += "&cveTipoPersona=1";   
            strDatos += "&idDomicilioImputadoCarpeta="+idDomicilioImputadoCarpeta;  
            strDatos += "&tipo="+"Carpetas";

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasFacade.Class.php",
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
                        $.each(json.data[0].ImputadosCarpetas, function (k, vImputado) {
                          
                        $('#txtcarpeta').val(vImputado.Carpeta);
                        
                        $('#txtCarpetaInv').val(vImputado.CarpetaInv);
                        $('#txtnuc').val(vImputado.nuc);
                        $('#txtJuzgado').val(vImputado.Juzgado);
                        
                        $('#txtnombre').val(vImputado.nombre +' '+ vImputado.paterno +' '+ vImputado.materno);
                        $('#txtdomicilio').val(vImputado.domicilio);
                        $('#txtrfc').val(vImputado.rfc);
                        $('#txtcurp').val(vImputado.curp);
                        $('#txtdesocupacion').val(vImputado.desocupacion);
                        $('#txtfechaNacimiento').val(vImputado.fechaNacimiento);
                        $('#txtedad').val(vImputado.edad);
                        
                        $('#txtdespais').val(vImputado.desPais+'/'+vImputado.estadoNacimiento+'/'+vImputado.municipioNacimiento);
                        $('#txtdesEstadoCivil').val(vImputado.desEstadoCivil);
                        $('#txtdesNivelInstruccion').val(vImputado.desNivelInstruccion);
                        $('#txtdesEspanol').val(vImputado.desEspanol);
                        $('#txtdesFamLin').val(vImputado.desDialecto + ' ' + vImputado.desFamLin);
                        $('#txtinterprete').val(vImputado.interprete);
                        $('#txtedopsico').val(vImputado.edopsico);
                        $('#txtgrupoetnico').val(vImputado.grupoetnico);
                        
                        $('#txtalias').val(vImputado.alias);
                        $('#txtfechaDeclaracion').val(vImputado.fechaDeclaracion);
                        $('#txtfechaImputacion').val(vImputado.fechaImputacion);
                        $('#txtfechaControl').val(vImputado.fechaControl);
                        $('#txtfecTerminoCons').val(vImputado.fecTerminoCons);
                        $('#txtfecCierreInv').val(vImputado.fecCierreInv);
                        $('#txttieneSobreseimiento').val(vImputado.tieneSobreseimiento);
                        $('#txtfechaSobreseimiento').val(vImputado.fechaSobreseimiento);
                        $('#txtingresomensual').val(vImputado.ingresomensual);
                        $('#txttipodetencion').val(vImputado.tipodetencion);
                        $('#txtreincidencia').val(vImputado.reincidencia);
                        $('#txtcereso').val(vImputado.cereso);
                        $('#txtEtapaProcesal').val(vImputado.EtapaProcesal);
                   });
                },
                error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        }
         
    function showInfoImpExhorto(idImputadoExhorto){
        changeDivForm(1);
        //alert(": " + idImputadoCarpeta);
        var strDatos = "accion=consultarUnImputadoDomicilio";
            strDatos += "&cveTipoPersona=1";   
            strDatos += "&idImputadoExhorto="+idImputadoExhorto;  
            strDatos += "&tipo="+"Exhortos";  

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/domiciliosimputadoscarpetas/DomiciliosimputadoscarpetasFacade.Class.php",
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
                        $.each(json.data[0].ImputadosExhortos, function (k, vImputado) {
                          
                        $('#txtcarpeta').val(vImputado.Carpeta);
                        $('#txtJuzgado').val(vImputado.Juzgado);
                        $('#txtnombre').val(vImputado.nombre +' '+ vImputado.paterno +' '+ vImputado.materno);
                        $('#txtdomicilio').val(vImputado.domicilio);
                        $('#txttelefono').val(vImputado.telefono); 
                        $('#txtalias').val(vImputado.alias);
                        $('#txtcereso').val(vImputado.cereso);
                        $('#txtconsignacion').val(vImputado.consignacion);
                   });
                },
                error: function (objeto, quepaso, otroobj) {
    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        }
         
            validarCampo = function (e) {
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
            if ((teclaAscii > 47) && (teclaAscii < 58)) {//Números
                return true;
            }
            return false;
        };
            
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
            return false;
        };
            
             

            
    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>