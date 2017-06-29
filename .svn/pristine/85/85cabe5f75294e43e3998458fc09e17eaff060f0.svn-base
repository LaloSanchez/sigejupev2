<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
date_default_timezone_set("America/Mexico_City");
$fechaHoy = date("d/m/Y");
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
                Consulta de Mujeres Desaparecidas
            </h5>
        </div>
         <div class="panel-body">
            <div id="divFormulario" class="form-horizontal">           
                            <!--div class="col-lg-4">
                                <label class="control-label"
                                       for="txtNombreOfendido" value="">Juzgado</label>
                                <div>
                                    <select class="form-control" name="cmbJuzgados" id="cmbJuzgados" onchange="filtrarTipoCarpeta()">
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
                                           name="txtMaternoOfendido" onkeypress="return validarNombre(event)" style="text-transform:uppercase;" >
                                </div>
                            </div>

                            <!--div class="col-lg-2">

                                <label class="control-label" for="txtFechaNacimientoOfendido">
                                    Fecha de Nacimiento
                                </label>

                                <div>
                                    <input id="txtFechaNacimientoOfendido" class="form-control"
                                           type="text" tabindex="4" data-toggle="tooltip"
                                           title=""
                                           placeholder="dd/mm/aaaa" name="txtFechaNacimientoOfendido">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <label class="control-label" for="txtEdad">Edad </label>

                                <div>
                                    <input type="text" class="form-control" id="txtEdadOfendido"
                                           name="txtEdadOfendido" maxlength="3" onkeypress="return validarEdad(event)">
                                </div>
                            </div>
                            
                            <div class="col-lg-4">
                                <label class="control-label needed" for="PaisNacimientoOfendido">
                                    Pa&iacute;s Nacimiento 
                                </label>

                                <div>
                                    <select id="cmbPaisNacimientoOfendido" class="form-control" name="cmbPaisNacimientoOfendido"
                                            onchange="comboEstadoNacimientoOfendido();">
                                            <option value="0">Seleccione una opci&oacute;n</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <label class="control-label needed" for="Estado">Estado
                                    Nacimiento </label>

                                <div>
                                    <select id="cmbEstadoNacimientoOfendido"
                                            class="form-control"
                                            name="cmbEstadoNacimientoOfendido"
                                            onchange="comboMunicipioNacimientoOfendido();"
                                            required="">
                                        <option value="0">Seleccione una opci&oacute;n</option>
                                    </select>
                                    <input id="txtestadoNacimientoOfendido"
                                           name="txtestadoNacimientoOfendido" type="text"
                                           class="form-control"  style="text-transform:uppercase;" onkeypress="return validarNombre(event)">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label"
                                       for="cmbMunic">
                                    Municipio Nacimiento
                                </label>

                                <div>
                                    <select id="cmbMunicipioNacimientoOfendido"
                                            class="form-control"
                                            name="cmbMunicipioNacimientoOfendido" required="">
                                        <option value="0">Seleccione una opci&oacute;n</option>
                                    </select>
                                    <input id="txtmunicipioNacimientoOfendido"
                                           name="txtmunicipioNacimientoOfendido" type="text"
                                           class="form-control"  style="text-transform:uppercase;" onkeypress="return validarNombre(event)">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label" for="cmbEstudioOfendido">
                                    Grado de Estudio
                                </label>

                                <div>
                                    <select id="cmbEstudioOfendido" class="form-control"
                                            name="cmbEstudioOfendido" required="">
                                        <option value="0">Seleccione una opci&oacute;n</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <label class="control-label" for="cmbEstadoCivilOfendido">
                                    Estado Civil
                                </label>

                                <div>
                                    <select id="cmbEstadoCivilOfendido" class="form-control"
                                            name="cmbEstadoCivilOfendido" required="">
                                        <option value="0">Seleccione una opci&oacute;n</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label" for="cmbOcupacionOfendido">
                                    Ocupación
                                </label>

                                <div>
                                    <select id="cmbOcupacionOfendido" class="form-control"
                                            name="cmbOcupacionOfendido" required="">
                                        <option value="0">Seleccione una opci&oacute;n</option>
                                    </select>
                                </div>
                            </div-->
                            <div class="col-lg-4">

                                <label class="control-label needed" for="txtFechaNacimientoOfendido">
                                    Fecha Inicio
                                </label>

                                <div>
                                    <input id="txtfechaInicial" class="form-control"
                                           type="text" tabindex="4" data-toggle="tooltip"
                                           title=""
                                           placeholder="dd/mm/aaaa" name="txtfechaInicial"
                                           data-original-title="" value="<?php echo $fechaHoy; ?>" data-date-format="dd/mm/yyyy">
                                </div>
                            </div>
                        
                            <div class="col-lg-4">

                                <label class="control-label needed" for="txtFechaNacimientoOfendido">
                                    Fecha Fin
                                </label>

                                <div>
                                    <input id="txtfechaFinal" class="form-control"
                                           type="text" tabindex="4" data-toggle="tooltip"
                                           title=""
                                           placeholder="dd/mm/aaaa" name="txtfechaFinal"
                                           data-original-title="" value="<?php echo $fechaHoy; ?>" data-date-format="dd/mm/yyyy">
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
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Consultar" onclick="consultarMujeresDesaparecidas(1);"> 
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar();"> 
                </div>
            </div>

            <div id="divConsulta" style="display: none" class="col-xs-12">
                <div class="col-md-4">
                    <div class="form-group col-md-4" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarMujeresDesaparecidas(0);">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-md-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarMujeresDesaparecidas(0);">
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
                                    <input type="text" class="form-control" id="txtCarpeta" name="txtCarpeta" readonly="readonly">
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
                                <label class="control-label" for="txtPaternoOfendido">Ocupacici&oacute;n</label>

                                    <input type="text" class="form-control datoTipoCadena" id="txtdesocupacion" name="txtdesocupacion" readonly="readonly">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Nivel de Instrucci&oacute;n</label>
                                    <input type="text" class="form-control" id="txtdesNivelInstruccion" name="txtdesNivelInstruccion" readonly="readonly">
                            </div>                                                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Lengua</label>
                                    <input type="text" class="form-control" id="txtdesEspanol" name="txtdesEspanol" readonly="readonly">
                            </div>                                                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Dialecto</label>
                                    <input type="text" class="form-control" id="txtdesFamLin" name="txtdesFamLin" readonly="readonly">
                            </div>                                                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Requiere Interprete</label>
                                    <input type="text" class="form-control" id="txtinterprete" name="txtinterprete" readonly="readonly">
                            </div> 
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">&Oacute;rden de Proteci&oacute;n</label>
                                    <input type="text" class="form-control" id="txtprdenpro" name="txtprdenpro" readonly="readonly">
                            </div>                                                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Estado Psicof&iacute;sico</label>
                                    <input type="text" class="form-control" id="txtedopsico" name="txtedopsico" readonly="readonly">
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">No. Hijos</label>
                                    <input type="text" class="form-control" id="txtnumHijos" name="txtnumHijos" readonly="readonly">
                            </div>                                                
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Embarazada</label>
                                    <input type="text" class="form-control" id="txtembarazada" name="txtembarazada" readonly="readonly">
                            </div>
                            <div class="col-lg-4">
                                <label class="control-label" for="txt">Grupo &Eacute;tnico</label>
                                    <input type="text" class="form-control" id="txtgrupoetnico" name="txtgrupoetnico" readonly="readonly">
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
            var strDatos = "accion=getPaginas";
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            strDatos += "&cveJuzgado=" + $("#cmbJuzgados").val();
            //var strDatos = "accion=consultarMujeresDesaparecidas";
            strDatos += "&cveTipoPersona=1";  
            strDatos += "&desaparecido=S";  
            strDatos += "&vnombre=" + $("#txtNombreOfendido").val();
            strDatos += "&vpaterno=" + $("#txtPaternoOfendido").val();
            strDatos += "&vmaterno=" + $("#txtMaternoOfendido").val();
    //        strDatos += "&fechaNacimiento=" + $("#txtFechaNacimientoOfendido").val();
    //        strDatos += "&edad=" + $("#txtEdadOfendido").val();
    //        strDatos += "&cvePaisNacimiento=" + $("#cmbPaisNacimientoOfendido").val();
    //        strDatos += "&estadoNacimiento=" + $("#txtestadoNacimientoOfendido").val();
    //        strDatos += "&municipioNacimiento=" + $("#txtmunicipioNacimientoOfendido").val();
    //        strDatos += "&cveEstadoNacimiento=" + $("#cmbEstadoNacimientoOfendido").val();
    //        strDatos += "&cveMunicipioNacimiento=" + $("#cmbMunicipioNacimientoOfendido").val();
    //        strDatos += "&cveNivelInstruccion=" + $("#cmbEstudioOfendido").val();
    //        strDatos += "&cveEstadoCivil=" + $("#cmbEstadoCivilOfendido").val();
    //        strDatos += "&cveOcupacion=" + $("#cmbOcupacionOfendido").val();
            strDatos += "&cveGenero=2";  
            
            strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
            strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";           //actuaciones activas

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
        consultarMujeresDesaparecidas = function (Aux) {
            if(Aux==1){
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);       
            }
            var nombre=$("#txtNombreOfendido").val();    
            var paterno=$("#txtPaternoOfendido").val();    
            var materno=$("#txtMaternoOfendido").val();    
    //        var fechanac=$("#txtFechaNacimientoOfendido").val();    
    //        var edad=$("#txtEdadOfendido").val();  
    //        var pais=$("#cmbPaisNacimientoOfendido").val();    
    //        var cmbEstado=$("#cmbEstadoNacimientoOfendido").val();    
    //        var estado=$("#txtestadoNacimientoOfendido").val();    
    //        var cmbmunicipio=$("#cmbMunicipioNacimientoOfendido").val();    
    //        var municipio=$("#txtmunicipioNacimientoOfendido").val();    
    //        var instruccion=$("#cmbEstudioOfendido").val();    
    //        var edocivil=$("#cmbEstadoCivilOfendido").val();    
    //        var ocupacion=$("#cmbOcupacionOfendido").val();    
            

            if(nombre!="" || paterno!="" || materno!=""){

                var pag = $("#cmbPaginacion").val();
                var cantReg = $("#cmbNumReg").val();
                var strDatos = "accion=consultarMujeresDesaparecidas";
                //strDatos += "&cveJuzgado=" + $("#cmbJuzgados").val();
                strDatos += "&cveTipoPersona=1";  
                strDatos += "&desaparecido=S";  
                strDatos += "&vnombre=" + $("#txtNombreOfendido").val();
                strDatos += "&vpaterno=" + $("#txtPaternoOfendido").val();
                strDatos += "&vmaterno=" + $("#txtMaternoOfendido").val();
    //            strDatos += "&fechaNacimiento=" + $("#txtFechaNacimientoOfendido").val();
    //            strDatos += "&edad=" + $("#txtEdadOfendido").val();
    //            strDatos += "&cvePaisNacimiento=" + $("#cmbPaisNacimientoOfendido").val();
    //            strDatos += "&estadoNacimiento=" + $("#txtestadoNacimientoOfendido").val();
    //            strDatos += "&municipioNacimiento=" + $("#txtmunicipioNacimientoOfendido").val();
    //            strDatos += "&cveEstadoNacimiento=" + $("#cmbEstadoNacimientoOfendido").val();
    //            strDatos += "&cveMunicipioNacimiento=" + $("#cmbMunicipioNacimientoOfendido").val();
    //            strDatos += "&cveNivelInstruccion=" + $("#cmbEstudioOfendido").val();
    //            strDatos += "&cveEstadoCivil=" + $("#cmbEstadoCivilOfendido").val();
    //            strDatos += "&cveOcupacion=" + $("#cmbOcupacionOfendido").val();
                strDatos += "&cveGenero=2";  
            strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
            strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
                
                strDatos += "&pag=" + pag;
                strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
                strDatos += "&activo=S";           //actuaciones activas

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
                        
                        if (json.totalCount > 0) {

                            table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>N&uacute;m.</th>";
                            table += "<th>Carpeta</th>";
                            table += "<th>Carpeta Investigaci&oacute;n</td>";
                            table += "<th>NUC</td>";
                            table += "<th>Juzgado</th>";
                            table += "<th>Nombre</th>";
                            table += "<th>Fecha de Nacimiento</th>";
                            table += "<th>Lugar de Nacimiento</th>";
        //                    table += "<th>Sintesis</th>";
                            table += "<th>Estado Civil</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            var cont = 0;
                           // var counter = parseInt(k)+1;
                            
                            for (var i = 0; i < json.total; i++) {
                                //table += "<tr onclick='showInfo(" + i + ")' style='display: none' style='cursor:pointer;'>";
                                //table += "<tr bgcolor='#EDF9E8' id='fila"+vnombre.idMedidaProteccion+"' style='display: none' onclick='ocultadetalle(\"fila"+vnombre.idMedidaProteccion+"\");' style='cursor:pointer;'>";
                                table += '<tr onclick="showInfo(' + json.data[i].idOfendidoCarpeta + ')" style="cursor:pointer;">';
                                table += "<td>" + (i + 1) + "</td>";
                                table += "<td> " + json.data[i].Carpeta + "</td>";
                                table += "<td> " + json.data[i].CarpetaInv + "</td>";
                                table += "<td> " + json.data[i].nuc + "</td>";
                                table += "<td> " + json.data[i].Juzgado + "</td>";
                                table += "<td> " + json.data[i].nombre + " " + json.data[i].paterno +" "+ json.data[i].materno + "</td>";
                                table += "<td> " + json.data[i].fechaNacimiento + "</td>";
                                table += "<td> " + json.data[i].desPais + "/" + json.data[i].estadoNacimiento +" "+ json.data[i].municipioNacimiento + "</td>";
                                table += "<td> " + json.data[i].desEstadoCivil + "</td>";
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
            $("#cmbPaginacion").val(1);
            $("#cmbNumReg").val(10);
            
            $("#txtfechaInicial").val("<?php echo $fechaHoy ?>");
            $("#txtfechaFinal").val("<?php echo $fechaHoy?>");
            //$("#cmbJuzgados").val("<?php echo $_SESSION['cveAdscripcion']; ?>");

            
            $("#txtNombreOfendido").val("");
            $("#txtPaternoOfendido").val("");
            $("#txtMaternoOfendido").val("");
            $("#txtFechaNacimientoOfendido").val("");
            $("#txtEdadOfendido").val("");
            $("#txtestadoNacimientoOfendido").val("");
            $("#txtmunicipioNacimientoOfendido").val("");
                $("#cmbPaisNacimientoOfendido").val(119).trigger('change');
                $("#cmbEstadoNacimientoOfendido").val(15).trigger('change');
            $("#cmbMunicipioNacimientoOfendido").val(0);
            $("#cmbEstudioOfendido").val(0);
            $("#cmbEstadoCivilOfendido").val(0);
            $("#cmbOcupacionOfendido").val(0);
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

            $("#txtFechaNacimientoOfendido").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            });


            cargaTipoCarpeta();
            //cargarJuzgados();
            cargaNotificacion();
            comboPaisNacimientoOfendido("cmbPaisNacimientoOfendido");
            comboEstadoNacimientoOfendido("cmbEstadoNacimientoOfendido");
            comboMunicipioNacimientoOfendido("cmbMunicipioNacimientoOfendido");
            //fillCombo(['cmbMedidaCautelar'],'tiposmedidascautelares/TiposmedidascautelaresFacade','cveTipoMedidaCautelar','desTipoMedidaCautelar');
            //fillCombo(['cmbPaisNacimientoOfendido'],'paises/PaisesFacade','cvePais','desPais');       
            fillCombo(['cmbEstudioOfendido'],'nivelesinstrucciones/NivelesinstruccionesFacade','cveNivelInstruccion','desNivelInstruccion');
            fillCombo(['cmbEstadoCivilOfendido'],'estadosciviles/EstadoscivilesFacade','cveEstadoCivil','desEstadoCivil');
            fillCombo(['cmbOcupacionOfendido'],'ocupaciones/OcupacionesFacade','cveOcupacion','desOcupacion');

            //cvePais,cvePais,cveNivelInstruccion,cveOcupacion

            obtenerPermisos();
            $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate',function(e){ $(this).datepicker('hide'); });
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

    function showInfo(idOfendidoCarpeta){
        changeDivForm(1);
        //alert(": " + idOfendidoCarpeta);
        var pag =1;
        var cantReg =10;
        var strDatos = "accion=consultarMujeresDesaparecidas";
            strDatos += "&cveTipoPersona=1";  
            strDatos += "&desaparecido=S";  
            strDatos += "&idOfendidoCarpeta="+idOfendidoCarpeta;  
            
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg; 

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
                    
                    if (json.totalCount > 0) {
                        $('#txtCarpeta').val(json.data[0].Carpeta);
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
                        $('#txtdesFamLin').val(json.data[0].desDialecto + ', ' + json.data[0].desFamLin);
                        $('#txtinterprete').val(json.data[0].interprete);
                        $('#txtprdenpro').val(json.data[0].prdenpro);
                        $('#txtedopsico').val(json.data[0].edopsico);
                        $('#txtnumHijos').val(json.data[0].numHijos);
                        $('#txtembarazada').val(json.data[0].embarazada);
                        $('#txtgrupoetnico').val(json.data[0].grupoetnico);
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
            if ((teclaAscii > 96) && (teclaAscii < 123)) {//Letras min?sculas
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
    //        if ((teclaAscii > 47) && (teclaAscii < 58)) {//N?meros
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
            if ((teclaAscii > 47) && (teclaAscii < 58)) {//N?meros
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