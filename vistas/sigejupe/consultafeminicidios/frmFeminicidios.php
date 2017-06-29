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
                Consulta de Feminicidios
                
            </h5>
        </div>
         <div class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div class="form-group">                                                                
                    <label class="control-label col-md-4">Tipo de Carpeta</label>
                    <div class="col-md-5">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control" name="cmbcveTipoCarpeta" id="cmbcveTipoCarpeta">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-4 needed"> Fecha del Delito Desde</label>
                    <div class="col-md-5">
                        <input id="txtfechaDelitoDesde" class="form-control"
                               type="text" tabindex="4" data-toggle="tooltip"
                               title=""
                               placeholder="dd/mm/aaaa" name="txtfechaDelitoDesde" value="<?php echo date("d/m/Y")?>">
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-4 needed"> Fecha del Delito Hasta</label>
                    <div class="col-md-5">
                        <input id="txtfechaDelitoHasta" class="form-control"
                               type="text" tabindex="4" data-toggle="tooltip"
                               title=""
                               placeholder="dd/mm/aaaa" name="txtfechaDelitoHasta" value="<?php echo date("d/m/Y")?>">
                    </div>                                
                </div>

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
                    
                    <div class="col-xs-offset-3 col-md-9">
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Consultar" onclick="consultarFeminicidio(1);"> 
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar();"> 
                </div>
            </div>

            <div id="divConsulta" style="display: none" class="col-md-12">
                <div class="col-md-12">
                    <div class="form-group col-md-3" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-md-3" >
                        <label class="control-label">P&aacute;gina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarFeminicidio(0);">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-3" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarFeminicidio(0);">
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
                                <label class="control-label" for="txt">&Oacute;rden de Proteci&oacute;n</label>
                                    <input type="text" class="form-control" id="txtprdenpro" name="txtprdenpro" readonly="readonly">
                            </div>                                                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Estado Psicof&iacute;sico</label>
                                    <input type="text" class="form-control" id="txtedopsico" name="txtedopsico" readonly="readonly">
                            </div>
                         
    <!--                        <div class="col-lg-4">
                                <label class="control-label" for="txt">Fecha del Delito</label>
                                    <input type="text" class="form-control" id="txtfechaDelito" name="txtfechaDelito" readonly="readonly">
                            </div>                                                -->
                                                   
                            <div class="col-xs-12">
                                </br>
                                </br>
                            </div>                               
                            <div id="divTableResultDetalle" class="col-xs-12">
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

        cargaTipoCarpeta = function () {

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
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
                            $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                        }
                    }
                    $('#divCmbRelaciones').hide();

                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };



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
    			
    	

        getPaginas = function (pag, cantReg) {
            var strDatos = "accion=getPaginasFeminicidios";
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var k='';
            if($("#cmbcveTipoCarpeta").val()=='0')
            {
            strDatos += "&fechaDelitoDesde="+ $("#txtfechaDelitoDesde").val();  
            strDatos += "&fechaDelitoHasta="+ $("#txtfechaDelitoHasta").val();
            }
            else
            {
            strDatos += "&fechaDelitoDesde="+k;  
            strDatos += "&fechaDelitoHasta="+k;
            }
            strDatos += "&cveTipoCarpeta=" + $("#cmbcveTipoCarpeta").val();
            
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            //strDatos += "&activo=S";           //actuaciones activas

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ofendidoscarpetas/OfendidoscarpetasFacade.Class.php",
            
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
        consultarFeminicidio = function (Aux) {
            if(Aux==1){
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);       
            }
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var k='';

            var strDatos = "accion=consultarFeminicidio";
            
            
            if($("#cmbcveTipoCarpeta").val()=='0')
            {
            strDatos += "&fechaDelitoDesde="+ $("#txtfechaDelitoDesde").val();  
            strDatos += "&fechaDelitoHasta="+ $("#txtfechaDelitoHasta").val();
            }
            else
            {
            strDatos += "&fechaDelitoDesde="+k;  
            strDatos += "&fechaDelitoHasta="+k;
            }
            
            strDatos += "&cveTipoCarpeta=" + $("#cmbcveTipoCarpeta").val();
            strDatos += "&cveGenero=2";  
            
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            //strDatos += "&activo=S";           //actuaciones activas

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ofendidoscarpetas/OfendidoscarpetasFacade.Class.php",
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
                        table += "<th>Carpeta</th>"
                        table += "<th>Carpeta Investigaci&oacute;n</td>";
                        table += "<th>NUC</td>";
                        table += "<th>Juzgado</th>";
                        table += "<th>Nombre del sujeto pasivo</th>";
                        table += "<th>Fecha Delito</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var cont = 0;
                       // var counter = parseInt(k)+1;
                        var i=1;
                        var fechatmp;
                        var fecha;
                        
                        $.each(json.datos, function (k, vOfendido) {
                            table += '<tr onclick="showInfo(' + vOfendido.id + ')" style="cursor:pointer;" onmouseover=\'this.style.backgroundColor="#F2F2F2"\' onmouseout=\'this.style.backgroundColor="#fafafa"\'>';
                            //table += '<tr>';
                            table += "<td>" + i + "</td>";
                            table += "<td> " + vOfendido.desTipoCarpeta + " " + vOfendido.numero + "/" + vOfendido.anio+"</td>";
                            table += "<td> " + vOfendido.carpetaInv + "</td>";
                            table += "<td> " + vOfendido.nuc + "</td>";
                            table += "<td> " + vOfendido.desjuzgado +"</td>";
                            table += "<td> " + vOfendido.nombre + " " + vOfendido.paterno +" "+ vOfendido.materno + "</td>";
                            fechatmp= vOfendido.fechaDelito.split(" ");
                            fecha= fechatmp[0].split("-");
                            table += "<td> " + fecha[2] + "/" + fecha[1] + "/" + fecha[0] + "</td>";
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

                        getPaginas(json.pagina, cantReg);
                        //alert(json.pagina);
                        //changeDivForm(2);
                        
                        //$("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Registro de Oficios</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta de Oficios</span> / Resultados");

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

        consultaDetalle = function (idMedidaCautelar) {
            $("#"+idMedidaCautelar).show();
        };
        ocultadetalle = function (idMedidaCautelar) {
            $("#"+idMedidaCautelar).hide();
        };
       
        limpiar = function () {        
            $("#txtfechaDelitoDesde").val("<?php echo date('d/m/Y')?>");
            $("#txtfechaDelitoHasta").val("<?php echo date('d/m/Y')?>");

            $("#cmbcveTipoCarpeta").val(0);
            $("#cmbcveFactorCultural").val(0);
            
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
                                            if (nombreHijo.nomFormulario == 'CONSULTA DE FEMINICIDIOS') {
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
       cargaTipoCarpeta = function () {

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
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
                            if(json.data[i].cveTipoCarpeta!=9 && json.data[i].cveTipoCarpeta!=10)
                            {    
                                $("#cmbcveTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                            }
                        }
                    }
                    //$('#divCmbRelaciones').hide();

                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };



       

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
            cargaTipoCarpeta();

            //fillComboTipoCarpeta(['cmbcveTipoCarpeta'],'tiposcarpetas/TiposcarpetasFacade','cveTipoCarpeta','desTipoCarpeta');
            fillCombo(['cmbcveFactorCultural'],'factoresculturales/FactoresculturalesFacade','cveFactorCultural','desFactorCultural');

            obtenerPermisos();
            $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate',function(e){ $(this).datepicker('hide'); });
        });
        
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

    function showInfo(idOfendidoCarpeta){
        changeDivForm(1);
        //alert(": " + idOfendidoCarpeta);
        var strDatos = "accion=consultarUnFeminicidio";
            strDatos += "&idOfendidoCarpeta="+idOfendidoCarpeta;  
            strDatos += "&cveTipoPersona=1"; 
            strDatos += "&cveDelito=99"; 
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ofendidoscarpetas/OfendidoscarpetasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    //alert("entra 1");
                    if (json.totalCount > 0) {
                        //alert("entra 2");
                        $('#txtnombre').val(json.data[0].nombre +' '+ json.data[0].paterno +' '+ json.data[0].materno);
                        $('#txtcarpeta').val(json.data[0].Carpeta);
                        
                        $('#txtCarpetaInv').val(json.data[0].CarpetaInv);
                        $('#txtnuc').val(json.data[0].nuc);
                        $('#txtJuzgado').val(json.data[0].Juzgado);
                        
                        $('#txtrfc').val(json.data[0].rfc);
                        $('#txtcurp').val(json.data[0].curp);
                        $('#txtdesocupacion').val(json.data[0].desocupacion);
                        $('#txtfechaNacimiento').val(json.data[0].fechaNacimiento);
                        $('#txtedad').val(json.data[0].edad);
                        $('#txtdespais').val(json.data[0].desPais+'/'+json.data[0].estadoNacimiento+'/'+json.data[0].municipioNacimiento);
                        $('#txtdesEstadoCivil').val(json.data[0].desEstadoCivil);
                        $('#txtprdenpro').val(json.data[0].ordenpro);
                        $('#txtedopsico').val(json.data[0].edopsico);
                        
    ////                    $('#txtfechaDelito').val(json.data[0].OfendidoDetalle[0].fechaDelito);
    ////                    $('#txtmodalidad').val(json.data[0].modalidad);
    ////                    $('#txtcomision').val(json.data[0].comision);
    ////                    $('#txtclasificacion').val(json.data[0].clasificacion);
    ////                    $('#txtformaaccion').val(json.data[0].formaaccion);
    ////                    $('#txtnombreImp').val(json.data[0].nombreImp);
    //                    
    ////                    table= "<table class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m</td>";
                        table += "<th>Imputado</th>";
                        table += "<th>Modalidad</th>"
                        table += "<th>Clasificaci&oacute;n</td>";
                        table += "<th>Comisi&oacute;n</td>";
                        table += "<th>Formaci&oacute;n</td>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var cont = 0;
                       // var counter = parseInt(k)+1;
                        var i=1;
                        var fechatmp;
                        var fecha;
                        
                        $.each(json.data[0].OfendidoDetalle, function (k, vDetalle) {
                            table += '<tr>';
                            table += "<td>" + i + "</td>";
                            table += "<td> " + vDetalle.nombreImp + "</td>";
                            table += "<td> " + vDetalle.modalidad + "</td>";
                            table += "<td> " + vDetalle.modalidad + "</td>";
                            table += "<td> " + vDetalle.clasificacion + "</td>";
                            table += "<td> " + vDetalle.formaaccion + "</td>";
                            table += "</tr> ";
                            i=i+1;
                        }); 


                        table += "</tbody> ";
                        table += "</table> ";
                        
                        $("#divTableResultDetalle").html(table);
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
         
        
    </script> 
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>