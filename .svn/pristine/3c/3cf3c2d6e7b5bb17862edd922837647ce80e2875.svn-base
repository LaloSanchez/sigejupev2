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
                Consulta de Agresores
            </h5>
        </div>
         <div class="panel-body">
            <!--div id="divFormulario" class="form-horizontal">
                <div class="form-group">                                                                
                    <label class="control-label col-xs-2">Nombre</label>
                    <div class="col-xs-9">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre" onkeypress="return validarCampo(event)">
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-2">Paterno</label>
                    <div class="col-xs-9">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <input type="text" class="form-control" id="txtPaterno" name="txtPaterno" onkeypress="return validarCampo(event)">
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-2">Materno</label>
                    <div class="col-xs-9">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <input type="text" class="form-control" id="txtMaterno" name="txtMaterno" onkeypress="return validarCampo(event)">
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-2">Tipo de Carpeta</label>
                    <div class="col-xs-9">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control" name="cmbcveTipoCarpeta" id="cmbcveTipoCarpeta">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-xs-2">Clasificaci&oacute;n</label>
                    <div class="col-xs-9">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select id="cmbcveClasificacionDelito" class="form-control" name="cmbcveClasificacionDelito" required="">
                             <option value="0">Seleccione una opci&oacute;n</option>
                         </select>
                    </div>                                
                </div-->

                <div class="form-group">                                                                
                    <label class="control-label col-xs-2"> Fecha del Delito Desde</label>
                    <div class="col-xs-3">
                        <input id="txtfechaDelitoDesde" class="form-control" type="text" tabindex="4" data-toggle="tooltip" title=""
                               placeholder="dd/mm/aaaa" name="txtfechaDelitoDesde" value="<?php echo date('d/m/Y')?>">
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-2"> Fecha del Delito Hasta</label>
                    <div class="col-xs-3">
                        <input id="txtfechaDelitoHasta" class="form-control"  type="text" tabindex="4" data-toggle="tooltip"
                               title=""  placeholder="dd/mm/aaaa" name="txtfechaDelitoHasta" value="<?php echo date('d/m/Y')?>">
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
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Consultar" onclick="ConsultarAgresores(1)"> 
                        <!--input type="submit" class="btn btn-primary" id="inputLimpiar" value="Consultar" onclick="getPaginas()"--> 
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar()"> 
                </div>
            </div>

            <div id="divConsulta" style="display: none" class="col-xs-12">
                <div class="col-xs-12">
                    <div class="form-group col-xs-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-xs-2" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="ConsultarAgresores(0);">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="ConsultarAgresores(0);">
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
                                    <input type="text" class="form-control" id="txtdomicilio" name="txtdomicilio" readonly="readonly">
                            </div>
                            
                           <div class="col-lg-4">
                                <label class="control-label" for="txt">Alias</label>
                                    <input type="text" class="form-control" id="txtalias" name="txtalias" readonly="readonly">
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
                                    <input type="text" class="form-control" id="txtedad" name="txtedad" readonly="readonly">
                            </div>
                                                                  
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Lugar de Nacimiento</label>
                                    <input type="text" class="form-control" id="txtdespais" name="txtdespais" readonly="readonly">
                            </div>                                                
                            
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Ingreso Mensual</label>
                                    <input type="text" class="form-control" id="txtingresomensual" name="txtingresomensual" readonly="readonly">
                            </div>  
                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Cereso</label>
                                    <input type="text" class="form-control" id="txtcereso" name="txtcereso" readonly="readonly">
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

                            <div class="col-lg-12">
                                <hr/>
                               <h4>Descripci&oacute;n del Delito</h4>
                            </div>    
                            
                             <div class="col-lg-4">
                                <label class="control-label" for="txt">Delito</label>
                                    <input type="text" class="form-control" id="txtdesDelito" name="txtdesDelito" readonly="readonly">
                            </div>                                                
                                                   
                             <div class="col-lg-4">
                                <label class="control-label" for="txt">Fecha del Delito</label>
                                    <input type="text" class="form-control" id="txtfechaDelito" name="txtfechaDelito" readonly="readonly">
                            </div>                                                
                                                   
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Nombre del Ofendido</label>
                                    <input type="text" class="form-control" id="txtnombreOfendido" name="txtnombreOfendido" readonly="readonly">
                            </div>                                                
                         
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Modalidad del Delito</label>
                                    <input type="text" class="form-control" id="txtmodalidad" name="txtmodalidad" readonly="readonly">
                            </div>                                                
                                                   
                         
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Comisi&oacute;n del Delito</label>
                                    <input type="text" class="form-control" id="txtcomision" name="txtcomision" readonly="readonly">
                            </div>                                                
                                                   
                         
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Clasificaci&oacute;n del Delito</label>
                                    <input type="text" class="form-control" id="txtclasificacion" name="txtclasificacion" readonly="readonly">
                            </div>                                                
                                                   
                         
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Forma de acci&oacute;n del Delito</label>
                                    <input type="text" class="form-control" id="txtformaaccion" name="txtformaaccion" readonly="readonly">
                            </div>                                                

                            <div class="col-lg-12">
                               <br/>
                               <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(2)">
                            </div>                                                
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

        function fillComboTipoCarpeta(selectIds,facade,value,description){
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
                                                //alert(v[description]);
                                                if(v[description]!="EXHORTO" && v[description]!="TOCA" && v[description]!="AMPARO")
                                                {
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
    			
       ConsultarAgresores = function (Aux) {
            var strDatos = "accion=ConsultarAgresores";
            strDatos += "&nombre="+ $("#txtNombre").val();  
            strDatos += "&paterno="+ $("#txtPaterno").val();  
            strDatos += "&materno="+ $("#txtMaterno").val();  
            strDatos += "&fechaDelitoDesde="+ $("#txtfechaDelitoDesde").val();  
            strDatos += "&fechaDelitoHasta="+ $("#txtfechaDelitoHasta").val();  
            strDatos += "&cveTipoCarpeta="+ $("#cmbcveTipoCarpeta").val();  
            strDatos += "&cveClasificacionDelito="+ $("#cmbcveClasificacionDelito").val();  
            //strDatos += "&activo=S";
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
                    //alert(json.estatus);
                    if (json.estatus=='ok') {

                        table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Carpeta</th>";
                        table += "<th>Carpeta Investigaci&oacute;n</td>";
                        table += "<th>NUC</td>";
                        table += "<th>Consignaci&oacute;n</th>";
                        table += "<th>Delito</th>";
                        table += "<th>Nombre</th>";
                        table += "<th>Clasificaci&oacute;n</th>";
                        table += "<th>Fecha del Delito</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var cont = 0;
                       // var counter = parseInt(k)+1;
                        var i=1;
                        var despais = "";
                        var fechatmp;
                        var fecha;
                        $.each(json.datos, function (k, vImputado) {
                            table += '<tr onclick="showInfo(' + vImputado.id + ',' + '\'' + vImputado.desDelito + '\'' + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                            table += "<td>" + i + "</td>";
                            table += "<td> " + vImputado.desTipoCarpeta + " " + vImputado.numero + "/" + vImputado.anio+"</td>";
                            table += "<td> " + vImputado.CarpetaInv + "</td>";
                            table += "<td> " + vImputado.nuc + "</td>";
                            table += "<td> " + vImputado.desConsignacionA + "</td>";
                            if(vImputado.cveTipoPersona=='1'){
                            table += "<td> " + vImputado.nombre + " " + vImputado.paterno +" "+ vImputado.materno + "</td>";
                            }
                            else{table += "<td> " + vImputado.nombreMoral + "</td>";}
                            table += "<td>" + vImputado.desClasificacionDelito + "</td>";
                            table += "<td>" + vImputado.desDelito + "</td>";
                            if(vImputado.fechaDelito!=""){
                            fechatmp= vImputado.fechaDelito.split(" ");
                            fecha= fechatmp[0].split("-");
                            table += "<td> " + fecha[2] + "/" + fecha[1] + "/" + fecha[0] + "</td>";
                            }else{table += "<td></td>";}
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
            
            //********************* *************************************
        };

       
        limpiar = function () {        
            $("#txtNombre").val("");
            $("#txtPaterno").val("");
            $("#txtMaterno").val("");
            $("#txtfechaDelitoDesde").val("<?php echo date('d/m/Y')?>");
            $("#txtfechaDelitoHasta").val("<?php echo date('d/m/Y')?>");
            $("#cmbcveClasificacionDelito").val(0);
            $("#cmbcveTipoCarpeta").val(0);
            
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
                                            if (nombreHijo.nomFormulario == 'CONSULTA DE AGRESORES') {
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
            $("#txtfechaDelitoDesde").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            });
            $("#txtfechaDelitoHasta").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            });
            $("#txtfechaDelitoDesde").on("dp.change", function (e) {
                $('#txtfechaDelitoHasta').data("DateTimePicker").minDate(e.date);
            });
            $("#txtfechaDelitoHasta").on("dp.change", function (e) {
                $('#txtfechaDelitoDesde').data("DateTimePicker").maxDate(e.date);
            });
            fillComboTipoCarpeta(['cmbcveTipoCarpeta'],'tiposcarpetas/TiposcarpetasFacade','cveTipoCarpeta','desTipoCarpeta');
            fillCombo(['cmbPaisNacimientoOfendido'],'paises/PaisesFacade','cvePais','desPais');       
            //fillCombo(['cmbTipoPersona'],'tipospersonas/TipospersonasFacade','cveTipoPersona','desTipoPersona');
            fillCombo(['cmbcveClasificacionDelito'],'clasificacionesdelitos/ClasificacionesdelitosFacade','cveClasificacionDelito','desClasificacionDelito');
            //fillCombo(['cmbcveCereso'],'ceresos/CeresosFacade','cveCereso','desCereso');


            obtenerPermisos();
        });
        
        /**
    	 * Muestra/Oculta el div del formulario y la tabla de bUsqueda
    	 * @param {int} opc Recibe un parametro para mostrar el DIV correspondiente
    	 */
        function changeDivForm(opc) { 
            if (opc === 1) {//Doy clic en Imputados Carpetas
                $("#divResultados").hide("fade");
                $("#divFormulario").hide("slide");
                $("#divDetalle").show("fade");
            }
            if (opc === 2) {//Doy clic en Regresar
                $("#divResultados").show("fade");
                $("#divFormulario").show("slide");
                $("#divDetalle").hide("fade");
            }
        }

    function showInfo(idImputadoCarpeta,delito){
        changeDivForm(1);
        //alert(": " + delito);
         var strDatos = "accion=consultarImputadoDelito";
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
                        $.each(json.data[0].ImputadosCarpetas, function (k, vImputado) {
                          
                        $('#txtcarpeta').val(vImputado.Carpeta);
                        $('#txtCarpetaInv').val(json.data[0].CarpetaInv);
                        $('#txtnuc').val(json.data[0].nuc);
                        $('#txtJuzgado').val(json.data[0].Juzgado);
                        $('#txtnombre').val(vImputado.nombre +' '+ vImputado.paterno +' '+ vImputado.materno);
                        $('#txtdomicilio').val(vImputado.domicilio);
                        $('#txtrfc').val(vImputado.rfc);
                        $('#txtcurp').val(vImputado.curp);
                        $('#txtfechaNacimiento').val(vImputado.fechaNacimiento);
                        $('#txtedad').val(vImputado.edad);
                        $('#txtdespais').val(vImputado.desPais+'/'+vImputado.estadoNacimiento+'/'+vImputado.municipioNacimiento);
                        
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
                        
                        $('#txtdesDelito').val(delito);
                        $('#txtfechaDelito').val(vImputado.fechaDelito);
                        $('#txtmodalidad').val(vImputado.modalidad);
                        $('#txtcomision').val(vImputado.comision);
                        $('#txtclasificacion').val(vImputado.clasificacion);
                        $('#txtformaaccion').val(vImputado.formaaccion);
                        $('#txtnombreOfendido').val(vImputado.nombreOfendido);
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