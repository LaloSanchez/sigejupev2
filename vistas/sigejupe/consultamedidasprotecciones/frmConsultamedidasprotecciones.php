<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
date_default_timezone_set("America/Mexico_City");
$fechaHoy = date("d/m/Y");
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
//version 14/01/2016
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
                Consulta de Medidas de Protecci&oacute;n
            </h5>
        </div>
        <div class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div class="form-group" id="Juzgado" >                                                                
                    <label class="control-label col-md-4 needed">Juzgado:</label>
                    <div class="col-md-5">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control" name="cmbJuzgados" id="cmbJuzgados" onchange="filtrarTipoCarpeta()()">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
            
            
                <div class="form-group">                                                                
                    <label class="control-label col-md-4">Relacionado con:</label>
                    <div class="col-md-5">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control" name="cmbTipoCarpeta" id="cmbTipoCarpeta">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-4" id="lblRelationName">No.</label>
                    <div id="divSinRelacion" class="col-md-5">
                        <input type="text" id="txtNumero" class="form-inline" id="txtNumero" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="txtAnio" placeholder="A&ntilde;o"  maxlength="4">
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-4">Tipo de Notificaci&oacute;n:</label>
                    <div class="col-md-5">
                        <div id="divCmbNotificacion" class="logobox"></div>
                        <select class="form-control" name="cmbNotificacion" id="cmbNotificacion" >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div id="divRangoFechas" style="">
                    <div class="form-group"> 
                        <label class="control-label col-md-4 needed">Fecha Inicio:</label>
                        <div class="col-md-5">
                                <input type="text" id="txtfechaInicial" placeholder="dd/mm/aaaa" class="form-control datepicker" value="<?php echo $fechaHoy; ?>" data-date-format="dd/mm/yyyy"/>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-4 needed">Fecha Fin:</label>
                        <div class="col-md-5">
                                <input type="text" id="txtfechaFinal" placeholder="dd/mm/aaaa" class="form-control datepicker" value="<?php echo $fechaHoy; ?>" data-date-format="dd/mm/yyyy"/>
                        </div>
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
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Consultar" onclick="consultarMedidasProteccion(1);"> 
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar();"> 
                </div>
            </div>

            <div id="divConsulta" style="display: none" class="col-md-12">
                <div class="col-md-12">
                    <div class="form-group col-md-3" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-md-3" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarMedidasProteccion(0);">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-3" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarMedidasProteccion(0);">
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

     cargaNotificacion = function () {

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposnotificaciones/TiposnotificacionesFacade.Class.php",
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
                            $("#cmbNotificacion").append($('<option></option>').val(json.data[i].cveTipoNotificacion).html(json.data[i].desTipoNotificacion));
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
        
        changeLabel = function (objOption) {
            $("#lblRelationName").html("No. " + $("#" + objOption.id + " option:selected").text() + ":");
            $("#hiddenCveTipoCarpeta").val($("#cmbTipoCarpeta").val());
            $("#divBuscaAcuerdo").show();

            if ($("#cmbTipoCarpeta").val() == 9) {
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#divSinRelacion").hide();
                $("#divBuscaAcuerdo").hide();
            } else {
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#divSinRelacion").show();
            }


        };

        consultaCarpetaJud = function (idCarpetaJud) {

            var strDatos = "";
            strDatos = "accion=consultar";
            strDatos += "&idCarpetaJudicial=" + idCarpetaJud;

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
                    //alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                        $("#txtNumero").val(json.data[0].numero);
                        $("#txtAnio").val(json.data[0].anio);
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
            var cveTipoCarpeta = $("#hiddenCveTipoCarpeta").val();

            var strDatos = "accion=getPaginas";
            
            var b=0;
            if($("#txtNumero").val()!="" || $("#txtAnio").val()!=""  || $("#cmbTipoCarpeta").val()!="0" || $("#cmbNotificacion").val()!="0"){b=1;}
            if(b==0)
            {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            }
            
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
            strDatos += "&cveJuzgado=" + $("#cmbJuzgados").val();

            strDatos += "&cveTipoActuacion=14"; // tipo de actuacion = oficios
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&activo=S";

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
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

        consultarMedidasProteccion = function (Aux) {
            $("#divTableResult").val("");
            $("#divConsulta").hide();
            $("#divTableResult").html("");
        
            //**************************** consulta de oficios *************************************
            if(Aux==1){
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);       
            }

            var pag = $("#cmbPaginacion").val();
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var cantReg = $("#cmbNumReg").val();
            
            
            if (cveTipoCarpeta == 9) {
                cveTipoCarpeta = 0;
            }

            var strDatos = "accion=consultarMedidasProteccion";
            var b=0;
            if($("#txtNumero").val()!="" || $("#txtAnio").val()!=""  || $("#cmbTipoCarpeta").val()!="0" || $("#cmbNotificacion").val()!="0"){b=1;}
            if(b==0)
            {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            }
            
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
            strDatos += "&cveJuzgado=" + $("#cmbJuzgados").val();

            strDatos += "&cveTipoNotificacion=" + $("#cmbNotificacion").val();
            strDatos += "&cveMedidaCautelar=" + $("#cmbMedidaCautelar").val();
            strDatos += "&pag=" + pag;
            strDatos += "&cveTipoActuacion=14"; // busca en tipo actuación: Medidas de Protección
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";           //actuaciones activas

            if($("#cmbJuzgados").val()!='0')
            {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
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
                        table += "<th>Tipo</th>";
                        table += "<th>N&uacute;m. Medida Protecci&oacute;n</th>";
                        table += "<th>Asignada</th>";
    //                    table += "<th>Sintesis</th>";
                        table += "<th>Fecha Registro</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var cont = 0;
                        
                        for (var i = 0; i < json.total; i++) {
                            table += "<tr>";
                            table += "<td>" + (i + 1) + "</td>";
                            
                            if (json.data[i].cveTipoCarpeta != "") {
                                table += "<td>" + json.data[i].descTipoCarpeta + " - " + json.data[i].numero + "/" + json.data[i].anio + "</td>";
                            } else {
                                table += "<td> SIN RELACI&Oacute;N </td>";
                            }
                            table += "<td> " + json.data[i].numActuacion + "/" + json.data[i].aniActuacion +" - "+ json.data[i].sintesis + "</td>";
                            table += "<td>";
                            table += "<table>";
                            table += "<th>Nombre</th>";
                            table += "<th>Medida de Protecci&oacute;n</th>";
                            table += "<th>Fecha</th>";
                            table += "<th>Apelada</th>";
                            
                            $.each(json.data[i].medidaProteccion, function (k, vnombre) {
                                //alert(vnombre.Nombre);
                                if(vnombre.Apelada == "S"){
                                    table += "<tr onclick='consultaDetalle(\"fila"+vnombre.idMedidaProteccion+"\");' onmouseover=\"this.style.backgroundColor='#9CC9A4'\" onmouseout=\"this.style.backgroundColor='#fafafa'\" style='cursor:pointer;'>";
                                }else{
                                    table += "<tr>";
                                }    
                                table += "<td width='25%'>" + vnombre.Nombre+ "</td>";
                                table += "<td width='50%'>" + vnombre.desTipoProteccion+ "</td>";
                                table += "<td width='20%'>" + vnombre.fechaInicio + ' - ' + vnombre.fechaTermino +"</td>";
                                table += "<td width='5%'>" + vnombre.Apelada+ "</td>";
                                table += "</tr>";
                                
                                if(vnombre.Apelada == "S"){
                                    
                                    table += "<tr bgcolor='#EDF9E8' id='fila"+vnombre.idMedidaProteccion+"' style='display: none' onclick='ocultadetalle(\"fila"+vnombre.idMedidaProteccion+"\");' style='cursor:pointer;'>";
                                    $.each(vnombre.MedidasProapeladas, function (k, vmedidaApelada) {
                                        table += "<td colspan='3' style='cursor:pointer;'>";
                                        
                                        table += "<table align='center' width='50%'>";
                                        table += "<tr>";
                                        table += "<td>No. Toca </td>";
                                        table += "<td>"+vmedidaApelada.NumToca+" / "+vmedidaApelada.AnioToca +"</td>";
                                        table += "</tr>";
                                        table += "<tr>";
                                        table += "<td>Sentido: <td>";
                                        table += "<td> "+vmedidaApelada.desSentido +" <td>";
                                        table += "</tr>";
                                        table += "<tr>";
                                        table += "<td>Sala: <td>";
                                        table += "<td> "+vmedidaApelada.desSala+" <td>";
                                        table += "</tr>";
                                        table += "</table>";
                                        
                                        table += "</td>";

                                        
                                    }); 
                                   table += "</tr>";
                                }
                                
                            });    
                            table += "</table>";
                            table += " </td>";

                            table += "<td>" + json.data[i].fechaRegistro + "</td>";
                            table += "</tr> ";
    //                                                    alert(json.data[i].observaciones);
                        }


    //                    $("#divHideForm").hide();
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
                $("#divAlertInfo").html('Seleccione el Juzgado');
                $("#divAlertInfo").show("slide");
                setTimeAlert("divAlertInfo");
            }
            //**************************** consulta de oficios *************************************
        };

        consultaDetalle = function (idMedidaCautelar) {
            $("#"+idMedidaCautelar).show();
        };
        ocultadetalle = function (idMedidaCautelar) {
            $("#"+idMedidaCautelar).hide();
        };
       
        limpiar = function () {        
            $("#cmbTipoCarpeta").val(0);
            $("#cmbNotificacion").val(0);
            $("#txtNumero").val("");
            $("#txtAnio").val("");
            $("#txtNumOficio").val("");        
            $("#divTableResult").val("");
            $("#divConsulta").hide();
            $("#divTableResult").html("");
            
            $("#txtfechaInicial").val("<?php echo $fechaHoy ?>");
            $("#txtfechaFinal").val("<?php echo $fechaHoy?>");
            $("#cmbJuzgados").val("<?php echo $_SESSION['cveAdscripcion']; ?>");

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
                                            if (nombreHijo.nomFormulario == 'CONSULTA DE MEDIDAS DE PROTECCION') {
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
                    async: false,
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
                               // $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                            }
                            //                        $("#cmbTipoCarpeta").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                            //                        $("#cmbTipoCarpeta2").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                        }
                        $('#divCmbRelaciones').hide();
                    },
                    error: function (objeto, quepaso, otroobj) {
                        ////alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            };
           

            cargarJuzgados = function (){
                var strDatos = "accion=distrito";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                    data: strDatos,
                    async: false,
                    dataType: "json",
                    beforeSend: function (objeto) {

                    },
                    success: function (datos) {

                        if (datos.totalCount > 0) {

                            $.each(datos.data, function (index, element) {
                                var option = "<option tipoJuzgado="+element.cveTipojuzgado+" value = " + element.cveJuzgado + ">" + element.desJuzgado + "</option>";
                                $("#cmbJuzgados").append(option);
                                $("#cmbJuzgadosConsultas").append(option);
                                $("#cmbJuzgados").val(juzgadoSesion);
                                $("#cmbJuzgadosConsultas").val("<?php echo $_SESSION['cveAdscripcion']; ?>");
                                filtrarTipoCarpeta();
    //                            $("#cmbJuzgados").append(option);
                            });
                        } else {
                            $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                    }
                });
            };

            filtrarTipoCarpeta = function () {
    //            //alert("CAMBIO");
                $("#cmbTipoCarpeta option").each(function () {
                    $(this).hide();
                });
    //            //alert($("#cmbJuzgado option[value='" + cveJuzgado + "']").attr("tipojuzgado"));
                var cveJuzgado=$("#cmbJuzgados").val();
                var cveTipoJuzgado = $("#cmbJuzgados").find('option:selected').attr("tipojuzgado");
    //            //alert(cveTipoJuzgado);
                $("#cmbTipoCarpeta option[value=0]").show();
    //            var cveTipoJuzgado=$("#cmbTipoJuzgado option[value='" + cveJuzgado + "']").text();
    //            var cveTipoJuzgado= $("#cmbJuzgado option[value='" + cveJuzgado + "']").attr("tipojuzgado");
    //            console.log(cveTipoJuzgado);
                if (cveTipoJuzgado == 1) {//control
                    $("#cmbTipoCarpeta option[value=8]").show();
                    $("#cmbTipoCarpeta option[value=2]").show();
                    $("#cmbTipoCarpeta option[value=1]").show();
                    $("#cmbTipoCarpeta option[value=7]").show();
                }else{
                if (cveTipoJuzgado == 3){//ejecucion
                    $("#cmbTipoCarpeta option[value=8]").show();
                    $("#cmbTipoCarpeta option[value=5]").show();
                    $("#cmbTipoCarpeta option[value=7]").show();
                }else{
                if (cveTipoJuzgado == 2){//juicio
                    $("#cmbTipoCarpeta option[value=8]").show();
                    $("#cmbTipoCarpeta option[value=3]").show();
                    $("#cmbTipoCarpeta option[value=7]").show();
                }else{
                if (cveTipoJuzgado == 4){//tribunal
                    $("#cmbTipoCarpeta option[value=8]").show();
                    $("#cmbTipoCarpeta option[value=4]").show();
                    $("#cmbTipoCarpeta option[value=7]").show();
                }else{//opcion no valida
                    /*$("#cmbTipoCarpeta option[value=8]").show();
                    $("#cmbTipoCarpeta option[value=6]").show();
                    $("#cmbTipoCarpeta option[value=7]").show();*/
                }}}}
                $("#cmbTipoCarpeta").val(0);
            };
       
      

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

            cargaTipoCarpeta();
            cargarJuzgados();
            //filtrarTipoCarpeta();
            cargaNotificacion();
    //        fillCombo(['cmbMedidaCautelar'],'tiposmedidascautelares/TiposmedidascautelaresFacade','cveTipoMedidaCautelar','desTipoMedidaCautelar');

            obtenerPermisos();
            $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate',function(e){ $(this).datepicker('hide'); });
        });
    </script> 
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>