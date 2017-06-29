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
    //:)
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
        
        .rojo{
            color: #881518;
        }
        .verde{
            color: #339900;
        }
        .azul{
            color: #0000cc;
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
                Buscar Personas
            </h5>
        </div>
         <div class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                            <div class="col-lg-4">
                                <label class="control-label"
                                       for="txtNombreOfendido" value="">Nombre</label>
                                <div>
                                    <input type="text" class="form-control"
                                           id="txtNombreOfendido" style="text-transform:uppercase;"
                                           name="txtNombreOfendido" placeholder="NOMBRE   APELLIDO PATERNO   APELLIDO MATERNO " onkeypress="return validarCampo(event)">
                                </div>
                            </div>
                
                            <div class="radio">
                            <label>
                              <input type="radio" name="radiopersona" id="radioimputado" value="imputado" checked="checked" onclick="limpiar2();">
                              Imputados
                            </label>
                            <label>
                              <input type="radio" name="radiopersona" id="radiofendido" value="ofendido" onclick="limpiar2();">
                              Sujetos pasivos del delito
                            </label>
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
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Consultar" onclick="consultarImputadosNombre(1);"> 
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
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarImputadosNombre(0);">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarImputadosNombre(0);">
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
                        <div id="divDetalle2" style="display:none;">    
                           <div class="col-lg-4">
                                <label class="control-label" for="txt">Alias</label>
                                    <input type="text" class="form-control" id="txtalias" name="txtalias" readonly="readonly">
                            </div>  
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Cereso</label>
                                    <input type="text" class="form-control" id="txtcereso" name="txtcereso" readonly="readonly">
                            </div>      
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
                                <label class="control-label" for="txt">Estado Psicof&iacute;sico al ser Detenido(a)</label>
                            
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
    //        var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var strDatos = "accion=getPaginasImpConsulta";
            strDatos += "&activo=S";
            strDatos += "&txtFecInicialBusqueda=" + "";
            strDatos += "&txtFecFinalBusqueda=" + "";
            strDatos += "&nombre=" + $("#txtNombreOfendido").val();
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            if(document.getElementById('radioimputado').checked==true){
                strDatos += "&tipo=" + "Imputado";
            }
            else{
                strDatos += "&tipo=" + "Ofendido";
            }

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
    //                      alert(datos);
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
        //*****************************************************************
       consultarImputadosNombre = function (Aux) {
       //getPaginas();
            if(Aux==1){
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(100);       
            }
            var nombre=$("#txtNombreOfendido").val();
            nombre=nombre.trim();
            var cont=nombre.length;
            if(cont>2){
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();        
            var strDatos="";
            if(document.getElementById('radioimputado').checked==true){
                strDatos += "&tipo=" + "Imputado";
            }
            else{
                strDatos += "&tipo=" + "Ofendido";
            }
            strDatos += "&activo=S";
            strDatos += "&txtFecInicialBusqueda=" + "";
            strDatos += "&txtFecFinalBusqueda=" + "";
            strDatos += "&nombre=" + $("#txtNombreOfendido").val();
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&accion=consultarImputadosNombre";          
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
    //                alert(datos);
                    var json = eval("(" + datos + ")"); //Parsear JSON
                    var table = "";
                    if (json.estatus == "ok") {
                        
                        table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th width='8%'>N&uacute;m.</th>";
                        table += "<th width='12%'>Tipo</th>";
                        table += "<th width='20%'>Carpeta</th>";
                        table += "<th>Carpeta Investigaci&oacute;n</td>";
                        table += "<th>NUC</td>";
                        table += "<th width='20%'>Juzgado</th>";
                        table += "<th width='35%'>Nombre</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        
                        $.each(json.datos, function (index, element) {
    //                        alert(element.NombrePer);
                            if(element.tipo=='Imputado Carpeta'){
                                table += '<tr onclick="showInfoImpCarpeta(' + element.id + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                                table += "<td>" + (index+1) + "</td>";
                                table += "<td><div class='rojo'>Imputado Carpeta</div></td>";
                            }                
                            if(element.tipo=='Imputado Exhorto'){
                                table += '<tr onclick="showInfoImpExhorto(' + element.id + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                                table += "<td>" + (index+1) + "</td>";
                                table += "<td><div class='azul'>Imputado Exhorto</div></td>";
                            }       
                            if(element.tipo=='Sujeto Pasivo Carpeta'){
                                table += '<tr onclick="showInfoOfCarpeta(' + element.id + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                                table += "<td>" + (index+1) + "</td>";
                                table += "<td><div class='rojo'>Sujeto Pasivo Carpeta</div></td>";
                            }
                            if(element.tipo=='Sujeto Pasivo Exhorto'){        
                                table += '<tr onclick="showInfoOfExhorto(' + element.id + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                                table += "<td>" + (index+1) + "</td>";
                                table += "<td><div class='azul'>Sujeto Pasivo Exhorto</div></td>";
                            }            
                            if(element.tipo=='Imputado Solicitud'){        
                                //table += '<tr onclick="showImSolicitud(' + element.id + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                                table += '<tr>';
                                table += "<td>" + (index+1) + "</td>";
                                table += "<td>Imputado Solicitud</td>";
                            }
                            if(element.tipo=='Sujeto Pasivo Solicitud'){        
                                //table += '<tr onclick="showImSolicitud(' + element.id + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                                table += '<tr>';
                                table += "<td>" + (index+1) + "</td>";
                                table += "<td>Sujeto Pasivo Solicitud</td>";
                            }
                            if(element.tipo=='Quejoso Amparo'){        
                                //table += '<tr onclick="showImSolicitud(' + element.id + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                                table += '<tr>';
                                table += "<td>" + (index+1) + "</td>";
                                table += "<td><div class='verde'>Quejoso Amparo</div></td>";
                            }
                            if(element.tipo=='Tercero Perjudicado Amparo'){        
                                //table += '<tr onclick="showImSolicitud(' + element.id + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                                table += '<tr>';
                                table += "<td>" + (index+1) + "</td>";
                                table += "<td><div class='verde'>Tercero Perjudicado Amparo</div></td>";
                            }
                             
                            table += "<td>"+element.desTipoCarpeta+" "+element.numero +"/"+element.anio+"</td>";
                            table += "<td>"+element.carpetaInv+"</td>";
                            table += "<td>"+element.nuc+"</td>";
                            table += "<td>"+element.desjuzgado+"</td>";
                            if(element.cveTipoPersona == "1")
                            {
                                table += "<td> " + element.NombrePer + " " + element.PaternoPer +" "+ element.materno + "</td>";
                            }
                            else
                            {
                                table += "<td> " + element.nombreMoral + "</td>";
                            }
                            table += "</tr> ";
                        });
                        
                   
                    table += "</tbody> ";
                    table += "</table> ";

    //                  $("#divHideForm").hide();
                        $("#divConsulta").show();
                        $("#divTableResult").html(table);
                        $("#tblResultadosGrid").DataTable({
                            paging: false
                        });
                        getPaginas(json.pagina, json.total);
                        //OK
                        //alert(json.pagina+'  t: '+json.total);
                        //alert(json.total);
                    } 
                    
                    else {
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
                $("#divAlertInfo").html('Introduzca al menos tres caracteres para iniciar la b&uacute;squeda');
                $("#divAlertInfo").show("slide");
                setTimeAlert("divAlertInfo");
            }
            
            //********************* *************************************
        };


       
        limpiar = function () {        
            $("#txtNombreOfendido").val("");
            $("#divTableResult").val("");
            $("#divConsulta").hide();
            $("#divTableResult").html("");
            
            //$("#txtfechaInicial").val("<?php echo date('d/m/Y')?>");
            //$("#txtfechaFinal").val("<?php echo date('d/m/Y')?>");
          };
        limpiar2 = function () {        
            $("#divTableResult").val("");
            $("#divConsulta").hide();
            $("#divTableResult").html("");
            consultarImputadosNombre(1);
            
            //$("#txtfechaInicial").val("<?php echo date('d/m/Y')?>");
            //$("#txtfechaFinal").val("<?php echo date('d/m/Y')?>");
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
                                            if (nombreHijo.nomFormulario == 'CONSULTA DE MUJERES DESAPARECIDAS') {
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


            fillCombo(['cmbPaisNacimientoOfendido'],'paises/PaisesFacade','cvePais','desPais');       
            fillCombo(['cmbEstudioOfendido'],'nivelesinstrucciones/NivelesinstruccionesFacade','cveNivelInstruccion','desNivelInstruccion');
            //fillCombo(['cmbEstadoCivilOfendido'],'estadosciviles/EstadoscivilesFacade','cveEstadoCivil','desEstadoCivil');
            //fillCombo(['cmbOcupacionOfendido'],'ocupaciones/OcupacionesFacade','cveOcupacion','desOcupacion');
            //fillCombo(['cmbTipoCarpeta'],'tiposcarpetas/TiposcarpetasFacade','cveTipoCarpeta','desTipoCarpeta');
            fillCombo(['cmbcveTipoDetencion'],'tiposdetenciones/TiposdetencionesFacade','cveTipoDetencion','desTipoDetencion');
            fillCombo(['cmbcveCereso'],'ceresos/CeresosFacade','cveCereso','desCereso');

            //cvePais,cvePais,cveNivelInstruccion,cveOcupacion

            obtenerPermisos();
        });
        
        /**
    	 * Muestra/Oculta el div del formulario y la tabla de bUsqueda
    	 * @param {int} opc Recibe un parametro para mostrar el DIV correspondiente
    	 */
        function changeDivForm(opc) { 
            if (opc === 0) {//Doy clic en Imputados Carpetas
                $("#divResultados").hide("fade");
                $("#divFormulario").hide("slide");
                $("#divDetalle").show("fade");
                $("#divDetalle2").show("fade");
                $("#divDetalleCarpetas").show("fade");
                $("#divDetalleExhortos").hide("fade");
            }
             if (opc === 1) {//Doy clic en Imputados Exhortos
                $("#divResultados").hide("fade");
                $("#divFormulario").hide("slide");
                $("#divDetalle").show("fade");
                $("#divDetalle2").show("fade");
                $("#divDetalleCarpetas").hide("fade");
                $("#divDetalleExhortos").show("fade");
            }
             if (opc === 3) {//Doy clic en Ofendidos Carpetas
                $("#divResultados").hide("fade");
                $("#divFormulario").hide("slide");
                $("#divDetalle").show("fade");
                $("#divDetalle3").show("fade");
            }
             if (opc === 4) {//Doy clic en Ofendidos Exhortos
                $("#divResultados").hide("fade");
                $("#divFormulario").hide("slide");
                $("#divDetalle").show("fade");
            }
            if (opc === 2) {//Doy clic en Regresar
                $("#divResultados").show("fade");
                $("#divFormulario").show("slide");
                $("#divDetalle").hide("fade");
                $("#divDetalle2").hide("fade");
                $("#divDetalleCarpetas").hide("fade");
                $("#divDetalleExhortos").hide("fade");
            }
        }

    function showInfoOfCarpeta(idOfendidoCarpeta){
        changeDivForm(3);
    //    alert(": " + idImputadoCarpeta);
        var strDatos = "accion=consultarUnImputado";
            strDatos += "&activo=S";
            strDatos += "&idImputadoExhorto="+idOfendidoCarpeta;  
            strDatos += "&tipo="+"CarpetasOfendido";  

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
                    //alert(datos);
                    var json = "";
                    var estado;
                    var mun;
                    json = eval("(" + datos + ")"); //Parsear JSON
                        $.each(json.data[0].OfendidosCarpetas, function (k, vOfendido) {
                          
                        $('#txtcarpeta').val(vOfendido.Carpeta);
                        $('#txtCarpetaInv').val(vOfendido.CarpetaInv);
                        $('#txtnuc').val(vOfendido.nuc);
                        $('#txtJuzgado').val(vOfendido.Juzgado);

                        $('#txtnombre').val(vOfendido.nombre +' '+ vOfendido.paterno +' '+ vOfendido.materno);
                        $('#txtdomicilio').val(vOfendido.domicilio);
                        $('#txtrfc').val(vOfendido.rfc);
                        $('#txtcurp').val(vOfendido.curp);
                        $('#txtdesocupacion').val(vOfendido.desocupacion);
                        $('#txtfechaNacimiento').val(vOfendido.fechaNacimiento);
                        $('#txtedad').val(vOfendido.edad);
                        $('#txtdespais').val(vOfendido.desPais + ', ' + vOfendido.estadoNacimiento + ', ' + vOfendido.municipioNacimiento);
                        $('#txtdesEstadoCivil').val(vOfendido.desEstadoCivil);
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
         
    function showInfoOfExhorto(idOfendidoExhorto){
        changeDivForm(4);
    //    alert(": " + idImputadoExhorto);
        var strDatos = "accion=consultarUnImputado";
            strDatos += "&activo=S";
            strDatos += "&idImputadoExhorto="+idOfendidoExhorto;  
            strDatos += "&tipo="+"ExhortosOfendido";  

            strDatos += "&txtFecInicialBusqueda=" +"";
            strDatos += "&txtFecFinalBusqueda=" +"";

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
    //                                          alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                        $.each(json.data[0].OfendidosExhortos, function (k, vOfendidoExhorto) {
                          
                        $('#txtcarpeta').val(vOfendidoExhorto.Carpeta);

                        $('#txtcarpeta').val(vOfendidoExhorto.Carpeta);
                        $('#txtCarpetaInv').val(vOfendidoExhorto.CarpetaInv);
                        $('#txtnuc').val(vOfendidoExhorto.nuc);
                        $('#txtJuzgado').val(vOfendidoExhorto.Juzgado);

                        $('#txtnombre').val(vOfendidoExhorto.nombre +' '+ vOfendidoExhorto.paterno +' '+ vOfendidoExhorto.materno);
                        $('#txtdomicilio').val(vOfendidoExhorto.domicilio);
                        $('#txttelefono').val(vOfendidoExhorto.telefono); 
                        $('#txtalias').val(vOfendidoExhorto.alias);
                        $('#txtcereso').val(vOfendidoExhorto.cereso);
                        $('#txtconsignacion').val(vOfendidoExhorto.consignacion);
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
    function showInfoImpCarpeta(idImputadoCarpeta){
        changeDivForm(0);
        //alert(": " + idImputadoCarpeta);
        var strDatos = "accion=consultarUnImputado";
            strDatos += "&activo=S";
            strDatos += "&idImputadoCarpeta="+idImputadoCarpeta;  
            strDatos += "&tipo="+"Carpetas";  

            strDatos += "&txtFecInicialBusqueda=" +"";
            strDatos += "&txtFecFinalBusqueda=" +"";

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
                    //alert(datos);
                    var json = "";
                    var estado;
                    var mun;
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
                        
                        $('#txtdespais').val(vImputado.desPais + ', ' + vImputado.estadoNacimiento + ', ' + vImputado.municipioNacimiento);
                        
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
    //    alert(": " + idImputadoExhorto);
        var strDatos = "accion=consultarUnImputado";
            strDatos += "&activo=S";
            strDatos += "&idImputadoExhorto="+idImputadoExhorto;  
            strDatos += "&tipo="+"Exhortos";  

            strDatos += "&txtFecInicialBusqueda=" +"";
            strDatos += "&txtFecFinalBusqueda=" +"";

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
    //                                          alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                        $.each(json.data[0].ImputadosExhortos, function (k, vImputado) {
                          
                        $('#txtcarpeta').val(vImputado.Carpeta);

                        $('#txtcarpeta').val(vImputado.Carpeta);
                        $('#txtCarpetaInv').val(vImputado.CarpetaInv);
                        $('#txtnuc').val(vImputado.nuc);
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
    //        if ((teclaAscii > 47) && (teclaAscii < 58)) {//Números
    //            return true;
    //        }
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