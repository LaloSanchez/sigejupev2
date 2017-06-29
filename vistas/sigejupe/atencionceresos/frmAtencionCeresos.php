<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
// version 19/01/2016..
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

    //    echo "<br> Actuacion: " . $idActuacionArbol . "<br>";
    //    echo "Carpeta: " . $idCarpetaJudicialArbol . "<br>";
    //    echo "Procedencia: " . $procedencia . "<br>";
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

    <input type="hidden" id="hiddenIdAtencionCereso" value="<?php echo $idActuacionArbol; ?>" >
    <input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Atenci&oacute;n ceresos a Juzgados
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar();" style="display: none">                                    
                
                
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3 needed" id="lblRelationName">Cereso: </label>
                    <div class="col-xs-9">
                        <div id="divCmbCeresos" class="logobox"></div>
                        <select class="form-control" name="cmbCeresos" id="cmbCeresos" >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3 needed">Juzgados:</label>
                    <div class="col-xs-9">
                        <div id="divCmbJuzgado" class="logobox"></div>
                        <select class="form-control" name="cmbJuzgado" id="cmbJuzgado" >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
    <!--            <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Activo:</label>
                    <div class="col-xs-9">
                        <div id="divCmbActivo" class="logobox"></div>
                        <select class="form-control" name="cmbActivo" id="cmbActivo" >
                            <option value="S">Si</option>
                            <option value="N">No</option>
                        </select>
                    </div>                                
                </div>-->
                

                <div id="divRangoFechas" style="display: none">
                    <div class="form-group"> 
                        <label class="control-label col-xs-3">Fecha Inicio:</label>
                        <div class="col-xs-2">
                            <input type="text" id="txtfechaInicial" placeholder="FECHA INICIO" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-xs-3">Fecha Fin:</label>
                        <div class="col-xs-2">
                            <input type="text" id="txtfechaFinal" placeholder="FECHA FIN" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
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
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" id="inputGuardar" value="Guardar" onclick="validacion();" style="display: none">                                    

                        <input type="submit" class="btn btn-primary" id="inputBuscar" value="Buscar" onclick="consultarAtencionCereso();" style="display: none">                                    
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar();">                                    
                        <input type="submit" class="btn btn-primary" id="inputConsultar" value="Consultar" onclick="consultar();" style="display: none">                                    
                        <input type="submit" class="btn btn-primary" id="inputEliminar" value="Eliminar" onclick="eliminarAtencionCeresos()" style="display: none">                                    
                        <input type="submit" class="btn btn-primary" id="inputImprimir" value="Imprimir" style="display: none">                                    
                    </div>
                </div>
            </div>

            <div id="divConsulta" style="display: none" class="col-xs-12">
                <div class="col-xs-12">
                    <div class="col-xs-3">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1); $('#cmbPaginacion').val(1); limpiar();">                                                    
                    </div>

                    <div class="form-group col-xs-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-xs-2" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarAtencionCereso();">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="pasarPaginaUno(); consultarAtencionCereso(); ">
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
    </div>

    <script type="text/javascript">

        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion'];   ?>;
        var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
     
        var procedencia = <?php echo $procedencia; ?>;

        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';
        
        function pasarPaginaUno(){
            $("#cmbPaginacion").val(1);
        }
        
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
                                                    if(value == "cveCereso"){
                                                        if(v[value]!= "1"){
                                                            options += '<option value="' + v[value] + '">' + v[description] + '</option>'; 
                                                        }
                                                    }else{
                                                        options += '<option value="' + v[value] + '">' + v[description] + '</option>'; 
                                                    }
    					});
    					$.each(selectIds, function(k,v){
    						$('#' + v).append(options);						
    					});
    				}else{
    					showMessage('No existen registros','warning');
    				}
    			});
    		return;		
    	}

        cargaAdscripciones = function () {

            var strDatos = "accion=listarAdscripciones";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ingresosceresos/IngresosceresosFacade.Class.php",
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
                            $("#cmbMinisterioPublico").append($('<option></option>').val(json.data[i].cveAdscripcion).html(json.data[i].nomAdscripcion));
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


        
        validacion = function () {

            var cveCereso = $("#cmbCeresos").val();
            var cveJuzgado = $("#cmbJuzgado").val();
            var activo = $("#cmbActivo").val();
            
            var strDatos = "";
            var error = 0;
            var mensaje = "";
            
            if (cveCereso == 0) {
                error = 1;
                mensaje += "   - Cereso";
            }
            if (cveJuzgado == 0) {
                error = 2;
                mensaje += "   - Juzgado";
            }
            

            if (error == 0) {
                
                strDatos = "accion=guardar"; // guardaar ceresos adscripciones
                strDatos += "&idAtencionCereso=" + $("#hiddenIdAtencionCereso").val();
                strDatos += "&cveCereso=" + cveCereso;
                strDatos += "&cveJuzgado=" + cveJuzgado;  
                strDatos += "&cveUsuarioSesion=" + cveUsuarioSesion; 
                strDatos += "&cvePerfilSesion=" + cvePerfilSesion; 
                strDatos += "&juzgadoSesion=" + juzgadoSesion; 
                if($("#hiddenIdAtencionCereso").val() == ""){
                    strDatos += "&cveAccion=249" ; 
                }else{
                    strDatos += "&cveAccion=250" ; 
                }    
                strDatos += "&activo=S";
                
                guardarAtencionCereso(strDatos);
                
            } else {
                $("#divInformacion").show();
                $("#strInformacion").html("Informaci&oacute;n! seleccione: " + mensaje);
                setTimeAlert("divInformacion");
            }

        };

        guardarAtencionCereso = function (strDatos) {

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/atencionceresos/AtencionceresosFacade.Class.php",
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
                        //alert(json.text);
                            $("#divHideForm").hide();
                            $("#divAlertSucces").html("Correcto!: " + json.text.toLowerCase());
                            $("#divAlertSucces").show("slide");
                            setTimeAlert("divAlertSucces");

                            $("#hiddenIdCeresoAdscripcion").val(json.data[0].idCeresoAdscripcion);
                        
                        //obtenerContador();
                    } else {
                        //alert(json.text);
                        $("#divHideForm").hide();
                        $("#divAlertDager").html(json.text);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });

        };

        consultar = function () {
            $("#divRangoFechas").show();
            $("#inputRegresar").show();
            $("#inputBuscar").show();
            $("#divNotas").hide();
            $("#inputGuardar").hide();
            $("#inputConsultar").hide();
            $("#inputEliminar").hide();
            $("#inputImprimir").hide();
            $("#divBuscaPromocion").hide();
            $("#divConsultaActuaciones").hide();
            
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Atenci&oacute;n ceresos a Juzgados</span> / Consulta atenci&oacute;n ceresos");

        };

        regresar = function (bndSelecciono) {
            $("#divRangoFechas").hide();
            $("#inputRegresar").hide();
            $("#inputBuscar").hide();
            $("#divNotas").show();
            $("#inputConsultar").show();
            $("#cmbPaginacion").val(1);
            $("#divBuscaPromocion").hide();

            if (bndSelecciono == 1) { // desde seleccion del grid
                if (deleteRecord == "S") {
                    $("#inputEliminar").show();
                }
            }else{
                $("#inputEliminar").hide();
            }    

            if (String(createRecord) === "S") {
                $("#inputGuardar").show();
            }
            
    //        limpiar();
            
    //        $("#inputEliminar").show();
            //$("#inputGuardar").show();
            //$("#inputImprimir").show();
            $("#h5titulo").html("<span>Atenci&oacute;n ceresos a Juzgados");
        };

        getPaginas = function (pag, cantReg) {

    //        var strDatos = "accion=getPaginas";
            
            var pag = $("#cmbPaginacion").val()
            var cantReg = $("#cmbNumReg").val();

            var strDatos = "accion=getPaginas";
            strDatos += "&cveCereso=" + $("#cmbCeresos").val();
            strDatos += "&cveAdscripcion=" + $("#cmbJuzgado").val();
            strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
            strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            strDatos += "&activo=S";
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
          
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/atencionceresos/AtencionceresosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
    //                        alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //$('#cmbPaginacion').find('option').remove().end().append('<option value="0">Seleccione pagina</option>').val('0');
                        $('#cmbPaginacion').find('option').remove().end();

                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#cmbPaginacion").val(pag);
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
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

        consultarAtencionCereso = function () {
            //**************************** consulta de acuerdos *************************************
            var pag = $("#cmbPaginacion").val()
            var cantReg = $("#cmbNumReg").val();

            var strDatos = "accion=consultarDescripciones";
            strDatos += "&cveCereso=" + $("#cmbCeresos").val();
            strDatos += "&cveAdscripcion=" + $("#cmbMinisterioPublico").val();
            strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
            strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/atencionceresos/AtencionceresosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                ToggleLoading(1);
                },
                success: function (datos) {
    //                                            alert(datos);

                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {

                        table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>#.</th>";
                        table += "<th>Cereso.</th>";
                        table += "<th>Adscripcion</th>";
                        table += "<th>Activo</th>";
                        table += "<th>Fecha Registro</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        for (var i = 0; i < json.totalCount; i++) {
                            table += "<tr onclick=\"consutaIdAtencionCereso('" + json.data[i].idAtencioncereso + "')\">";
                            table += "<td > " + (i + 1) + "</td>";
                            table += "<td >" + json.data[i].desCereso + " </td>";
                            table += "<td>" + json.data[i].desJuzgado + "</td>";
                            table += "<td>" + json.data[i].activo + "</td>";
                            table += "<td>" + json.data[i].fechaRegistro + "</td>";
                            table += "</tr> ";
    //                                                    alert(json.data[i].observaciones);
                        }
                        table += "</tbody>";
                        table += "</table>";

                        $("#divHideForm").hide();
                        $("#divTableResult").html(table);
                        $("#tblResultadosGrid").DataTable(
                                {
                                    paging: false
                                }
                        );

                        getPaginas(json.pagina, cantReg);
                        changeDivForm(2);

                        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Atenci&oacute;n ceresos a Juzgados</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta atenci&oacute;n ceresos</span> / Resultados");
    //
                    } else {
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }


                },
                error: function (objeto, quepaso, otroobj) {
        //               alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });

            //**************************** consulta de oficios *************************************
        };

        regresar2 = function () {
            changeDivForm(1);
            regresar();
        };

        regresarConsultar = function () {
            limpiar();
            changeDivForm(1);
            $("#cmbPaginacion").val(1);
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Atenci&oacute;n ceresos a Juzgados</span> / <span>Consulta atenci&oacute;n ceresos</span>");
        };

        consutaIdAtencionCereso = function (id) {
    //        alert(id);
            changeDivForm(1);
            var strDatos = "accion=seleccionar"; //seleccionar
            strDatos += "&idAtencionCereso=" + id;
            strDatos += "&activo=S";

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/atencionceresos/AtencionceresosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                              $('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
    //                ToggleLoading(1);
                },
                success: function (datos) {
    //                  alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        
                        $("#hiddenIdAtencionCereso").val(json.data[0].idAtencionCereso);
                        $("#cmbCeresos").val(json.data[0].cveCereso);
                        $("#cmbJuzgado").val(json.data[0].cveJuzgado);
                        $("#cmbActivo").val(json.data[0].activo);

                        regresar(1);
                    } else {
                        $("#divAlertInfo").html('NO EXISTE INFORMACION DEL Registro');
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };

        

        eliminarAtencionCeresos = function () {

            if ($("#hiddenIdAtencionCereso").val() != "") {
                
                bootbox.dialog({
                    message: "Advertencia!! <br><br> Esta seguro de eliminar el registro seleccionado??",
                    
                    buttons: {
                      danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function() {
                            
                            var strDatos = "accion=guardar";
                            strDatos += "&idAtencionCereso=" + $("#hiddenIdAtencionCereso").val();
                            strDatos += "&cveAccion=251"; //eliminacion de cereos adscripciones
                            strDatos += "&activo=N";// hay va

                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/atencionceresos/AtencionceresosFacade.Class.php",
                                data: strDatos,
                                async: true,
                                dataType: "html",
                                beforeSend: function (objeto) {
                                    //                ToggleLoading(1);
                                },
                                success: function (datos) {
                                    //                          alert(datos);
                                    var json = "";
                                    json = eval("(" + datos + ")"); //Parsear JSON

                                    if (json.totalCount > 0) {
                                        //alert(json.text);
                                        $("#divHideForm").hide();
                                        $("#divAlertSucces").html("ELIMINACION CORRECTA");
                                        $("#divAlertSucces").show("slide");
                                        setTimeAlert("divAlertSucces");

                                        limpiar();

                                    } else {
                                        //alert(json.text);
                                    }

                                },
                                error: function (objeto, quepaso, otroobj) {
                                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                                    $("#divAlertDager").show("slide");
                                    setTimeAlert("divAlertDager");
                                }
                            });
                        }
                    },
                    success: {
                        label: "Cancelar!",
                        className: "btn-primary",
                        callback: function() {
                          
                        }
                      }
                      
                }
            }); 
            
            } else {
                $("#divAlertDager").html("NO HA SELECCIONADO UN REGISTRO");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        };

        limpiar = function () {
            $("#hiddenIdAtencionCereso").val("");
            $("#cmbCeresos").val(0);
            $("#cmbJuzgado").val(0);
            $("#cmbActivo").val("S");
            $("#txtfechaInicial").val($("#hiddenFechaActual").val());
            $("#txtfechaFinal").val($("#hiddenFechaActual").val());
            
            $("#divConsultaActuaciones").hide();
            $("#divTableResultActuaciones").hide();
            $("#divTableResultActuaciones").html("");
            
            $("#inputEliminar").hide();
            
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
                                    if(vnombre.nomFormulario == "CERESOS"){
                                        var hijos = vnombre.hijos;
                                        $.each(hijos, function (k2, nombreHijo) {
                                            if (nombreHijo.nomFormulario == 'MODULO DE REGISTRO DE IMPUTADOS AL CERESO') {
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
    //                    if (deleteRecord == "S") {
    //                        $("#inputEliminar").show();
    //                    }


                    });
        }
        //*********************************************************************************************************************
        (function (a) {
            a.fn.validaCampo = function (b) {
                a(this).on({keypress: function (a) {
                        var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                        (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                    }})
            }
        })(jQuery);

        //*********************************************************************************************************************



        $(function () {

            $("#txtNumero").validaCampo('0123456789');
            $("#txtAnio").validaCampo('0123456789');

            $("#txtfechaInicial").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            $("#txtfechaFinal").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );

            cargaAdscripciones();
            fillCombo(['cmbCeresos'],'ceresos/CeresosFacade','cveCereso','desCereso');
            fillCombo(['cmbJuzgado'],'juzgados/JuzgadosFacade','cveJuzgado','desJuzgado');

            if (procedencia == 1) { // si viene del arbol idActuacionArbol idCarpetaJudicialArbol
                if ($("#hiddenIdActuacion").val() != 0) {
                    consutaIdAcuerdo($("#hiddenIdActuacion").val(), "");
                } else if ($("#hiddenIdCarpetaJudicial").val() != 0) {
                    consultaCarpetaJud($("#hiddenIdCarpetaJudicial").val());
                }

            }

            obtenerPermisos();

            $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate', function (e) {
                $(this).datepicker('hide');
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