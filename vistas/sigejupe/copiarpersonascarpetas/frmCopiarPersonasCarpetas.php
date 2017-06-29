<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set('America/Mexico_City');
    $idCarpeta = ( isset($_POST['idCarpeta']) ) ? $_POST['idCarpeta'] : "";
    ?>
    <style>
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
        
        .steps {
            padding: 1px 0;
            overflow: hidden;
        }
        .steps ul, .steps li {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .steps ul { 
            float: left; 
            width: 100% 
        }
        .steps li {
            float: left;
            width: 14%;
            padding: 1px;
        }
        .steps li a {
            display: block;
            padding: 15px 20px;
            background: #881518;
            color: #fff;
            line-height: 1.5em;
            text-decoration: none;
        }
        .steps li a strong {
            font-size:20px; 
            font-family: Arial;
        }
        .steps li a:hover {
            background: #df3338;
        }
        .steps li a.active { 
            background: #df3338; 
        }
        .steps li.step, .steps li.step a {
            position: relative;
            z-index: 3;
            height: 84px;
        }

        .steps li > a {
            background: #881518;   
        }

        .steps li.step-3 a {

            background-position: center left;
        }
        .steps li.step a:hover { 
            background:#cc00; 
        }
        .subtitulo{
            font-family: Arial;
            font-size: 12px;
        }

        @media (max-width: 768px) {
            .steps li a {
                display: block;
            }
            .steps li {
                display:block;
                float: left;
                width: 100%;
            }
            .steps li.step, .steps li.step a {
                position: relative;
                z-index: 3;
                height: 60px;
            }
            .steps ul, .steps li {
                margin: 1px;
                padding: 1px;
                list-style: none;
            }
        }
        .requerido {
            color: darkred;
        }
    </style>
    <link href="../vistas/css/generalStyles.css" rel="stylesheet" />
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">
                Copiar Personas entre Carpetas
            </h5>
        </div>
        
        <div class="panel-body">
            <div class="form-horizontal" id="divFormulario">
                <p class="col-lg-12" style="color:darkred;">
                    Los campos marcados con (*) son obligatorios.
                </p>
                <div style="width: 50%; float: left;">
                    
                    <div class="form-group">
                    
                        <div class="form-group col-lg-12">
                            <div class="panel-heading" style="padding: 3px 15px !important;">
                                <h5 class="panel-title">
                                    Datos Carpeta Origen
                                </h5>
                            </div>
                            <br>
                            <label class="control-label col-xs-3" for="cmbJuzgadoOrigen">Juzgados  <span class="requerido">(*)</span></label>
                            <div class="col-xs-9">
                                <select id="cmbJuzgadoOrigen" class="form-control" name="cmbJuzgadoOrigen" onchange="tipoCarpetaBusqueda()">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-12" >
                            <label class="control-label col-xs-3" for="cmbTipoCarpetaOrigen">Tipo de Carpeta  <span class="requerido">(*)</span></label>
                            <div class="col-xs-9">
                                <select id="cmbTipoCarpetaOrigen" class="form-control" name="cmbTipoCarpetaOrigen" >
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">                                                                
                            <label class="control-label col-xs-3" id="numero-anio">N&uacute;mero <span class="requerido">(*)</span></label>
                            <div class="col-xs-9">
                                <input type="text" id="txtNumeroOrigen" class="form-inline" id="txtNumeroOrigen" placeholder="N&uacute;mero" >/<input type="text" class="form-inline" id="txtAnioOrigen" id="txtAnioOrigen" placeholder="A&ntilde;o" maxlength="4" >
                            </div>                                
                        </div>
                        <div class="form-group col-lg-12" >
                            <label class="control-label col-xs-3" for="cmbTipoCarpetaOrigen">Tipo Parte  <span class="requerido">(*)</span></label>
                            <div class="col-xs-9">
                                <select id="cmbTipoParteOrigen" class="form-control" name="cmbTipoParteOrigen" onchange="tipoParteDestino()">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                    <option value="1">IMPUTADOS</option>
                                    <option value="2">SUJETOS PASIVOS DEL DELITO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-primary" value="Consultar" onclick="consultar()">
                            <input type="submit" class="btn btn-primary" value="Limpiar" onclick="limpiarConsultaOrigen()">                                    
                        </div>
                    </div>
                    <div id="resultadosOrigen" style="padding: 5px;"></div>
                    
                    <input type="hidden" id="idCarpetaJudicialOrigen" name="idCarpetaJudicialOrigen">
                    <input type="hidden" id="idCarpetaJudicialDestino" name="idCarpetaJudicialDestino">
                    <input type="hidden" id="hddOfendidos">
                    <input type="hidden" id="hddImputados">
                </div>
                <div style="width: 50%; float: left;">
                    <div class="form-group">

                        <div class="form-group col-lg-12">
                            <div class="panel-heading" style="padding: 3px 15px !important;">
                                <h5 class="panel-title">
                                    Datos Carpeta Destino
                                </h5>
                            </div>
                            <br>
                            <label class="control-label col-xs-3" for="cmbJuzgadoDestino">Juzgados  <span class="requerido">(*)</span></label>
                            <div class="col-xs-9">
                                <select id="cmbJuzgadoDestino" class="form-control" name="cmbJuzgadoDestino" onchange="cargaTipoCarpeta()">
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-12" >
                            <label class="control-label col-xs-3" for="cmbTipoCarpetaDestino">Tipo de Carpeta  <span class="requerido">(*)</span></label>
                            <div class="col-xs-9">
                                <select id="cmbTipoCarpetaDestino" class="form-control" name="cmbTipoCarpetaDestino" >
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">                                                                
                            <label class="control-label col-xs-3" id="numero-anio">N&uacute;mero <span class="requerido">(*)</span></label>
                            <div class="col-xs-9">
                                <input type="text" id="txtNumeroDestino" class="form-inline" id="txtNumeroDestino" placeholder="N&uacute;mero" >/<input type="text" class="form-inline" id="txtAnioDestino" id="txtAnioDestino" placeholder="A&ntilde;o" maxlength="4" >
                            </div>                                
                        </div>
                        <div class="form-group col-lg-12" >
                            <label class="control-label col-xs-3" for="cmbTipoCarpetaOrigen">Tipo Parte  <span class="requerido">(*)</span></label>
                            <div class="col-xs-9">
                                <select id="cmbTipoParteDestino" class="form-control" name="cmbTipoParteDestino" >
                                    <option value="">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-primary" value="Consultar" onclick="busquedaDestino()">
                            <input type="submit" class="btn btn-primary" value="Limpiar" onclick="cleanStepOneConsult()">                                    
                        </div>
                    </div>
                    <div id="resultadosDestino" style="padding: 5px;"></div>
                    <br><br>
                </div>
                <div style="clear: both;"></div>
                <br>
                <div class="form-group" style="text-align: center;">
                    <input type="submit" id="agregarImputado" class="btn btn-primary" value="Agregar" onclick="agregarImputados()">
                </div>
                <br>
                <div id="divResultadosImputados"></div>
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" id="guardar" class="btn btn-primary" value="Guardar" style="display: none;" onclick="guardar()">
                        <input type="submit" id="limpiarGeneral" class="btn btn-primary" value="Limpiar" onclick="limpiarGeneral()">                                    
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="alert alert-warning alert-dismissable" id="div-advertencia" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="div-correcto" class="alert alert-success alert-dismissable" style="display:none;">

                        <strong>Correcto!</strong> Mensaje
                    </div>
                    <div id="div-error" class="alert alert-danger alert-dismissable" style="display:none;">

                        <strong>Error!</strong> Mensaje
                    </div>
                    <div id="div-info" class="alert alert-info alert-dismissable" style="display:none;">

                        <strong>Informaci&oacute;n!</strong> Mensaje
                    </div>
                </div>
            </div>
            
            <div class="form-horizontal" id="divConsulta" style="display: none;">
                <input type="submit" class="btn btn-primary" id="btn-regresar" value="REGRESAR" onclick="changeDivFormCarpetas(1)">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="steps">
                            <ul>
                                <li id="liPaso1" class="step step-1 Paso1">
                                    <a href="#" class="active" onclick="siguientePaso(1);"><strong>Paso 1</strong><br><label
                                            class="subtitulo">Carpetas Judiciales</label></a>
                                    <!--<a href="#" class="active" onclick="siguiente('divGeneral', 'sigejupe/solicitudAudiencias/frmSolicitudAudiencias.php', 1);" ><strong>Paso 1</strong><br><h1>Solicitudes de audiencias</h1></a>-->
                                </li>
                                <li id="liPaso2" class="step step-2 Paso2">
                                    <a href="#" onclick="siguientePaso(2);"><strong>Paso 2</strong><br><label class="subtitulo">Captura de Imputado(s)</label></a>
                                    <!--<a href="#" onclick="siguiente('divGeneral', 'sigejupe/imputadosSolicitudes/frmImputadosSOlicitudes.php', 2);"><strong>Paso 2</strong><br><h1>Imputados</h1></a>-->
                                </li>
                                <li id="liPaso3" class="step step-3 Paso3">
                                    <a href="#" onclick="siguientePaso(3);"><strong>Paso 3</strong><br><label class="subtitulo">Captura de sujeto(s) pasivo(s) del delito</label></a>
                                </li>
                                <li id="liPaso4" class="step step-4 Paso4">
                                    <a href="#" onclick="siguientePaso(4);"><strong>Paso 4</strong><br><label class="subtitulo">Captura de Delito(s)</label></a>
                                </li>
                                <li id="liPaso5" class="step step-5 Paso5">
                                    <a href="#" onclick="siguientePaso(5);"><strong>Paso 5</strong><br><label class="subtitulo">Definici&oacute;n de relaci&oacute;n</label></a>
                                </li>
                                <li id="liPaso6" class="step step-6 Paso6">
                                    <a href="#" onclick="siguientePaso(6);"><strong>Paso 6</strong><br><label class="subtitulo">Violencia de g&eacute;nero</label></a>
                                </li>
                            </ul>
                        </div>  
                    </div>
                </div>
                <br>
                <form name="frmSolicitud" class="form-horizontal" id="frmSolicitud" method="POST" action="#" target="oculto" enctype="multipart/form-data" onsubmit="return false;"> 
                    <input type="hidden" readonly class="form-control" id="idCarpetaJudicial">
                    <div id="divGeneral"></div>
                    <br>
                    <div id="btnPaso1" style="display:none;">
                        <!--<button class="btn btn-primary consulta" onclick="changeDivFormCarpetas(1)">< Anterior</button>-->
                        <button class="btn btn-primary consulta" onclick="siguientePaso(2)">Siguiente ></button>
                    </div>
                    <div id="btnPaso2" style="display:none;">
                        <button class="btn btn-primary consulta" onclick="siguientePaso(1)">< Anterior</button>
                        <button class="btn btn-primary consulta" onclick="siguientePaso(3)">Siguiente ></button>
                    </div>

                    <div id="btnPaso3" style="display:none;">
                        <button  class="btn btn-primary consulta" onclick="siguientePaso(2)">< Anterior </button>
                        <button class="btn btn-primary consulta" onclick="siguientePaso(4)">Siguiente ></button>
                    </div>

                    <div id="btnPaso4" style="display:none;">
                        <button class="btn btn-primary consulta" onclick="siguientePaso(3)">< Anterior </button>
                        <button class="btn btn-primary consulta" onclick="siguientePaso(5)">Siguiente ></button>
                    </div>
                    <div id="btnPaso5" style="display:none;">
                        <button class="btn btn-primary consulta" onclick="siguientePaso(4)">< Anterior </button>
                        <button class="btn btn-primary consulta" onclick="siguientePaso(6)">Siguiente ></button>
                    </div>
                    <div id="btnPaso6" style="display:none;">
                        <button class="btn btn-primary consulta" onclick="siguientePaso(5)">< Anterior </button>
                        <!--<button class="btn btn-primary" onclick="siguientePaso(8)">Finalizar ></button>-->
                    </div>

                    <br>
                </form>
            </div>
            
        </div>
    </div>
    <script type="text/javascript">
        TotalImputados = [];
        TotalOfendidos = [];
        arrayImputadosOrigen = [];
        arrayImputadosDestino = [];
        arrayOfendidosOrigen = [];
        arrayOfendidosDestino = [];
        tipoParteDestino = function() {
            var tipoParte = $("#cmbTipoParteOrigen").val();
            var html = '<option value="">Selecciona una opci&oacute;n</option>';
            if ( tipoParte == 1 ) {
                html += '<option value="1">IMPUTADOS</option>';
            } else if ( tipoParte == 2 ) {
                html += '<option value="2">SUJETOS PASIVOS DEL DELITO</option>';
            }
            $("#cmbTipoParteDestino").empty();
            $("#cmbTipoParteDestino").html(html);
            $("#resultadosDestino").html("");
        };
        
        busquedaDestino = function () {
            if($("#cmbJuzgadoDestino").val() == ""){
                $("#div-advertencia").html('<span>Selecciona un juzgado del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if($("#cmbTipoCarpetaDestino").val() == ""){
                $("#div-advertencia").html('<span>Selecciona el tipo de carpeta del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            }
            else if($("#txtNumeroDestino").val() == ""){
                $("#div-advertencia").html('<span>Capture el numero de causa en el campo correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if($("#txtAnioDestino").val() == ""){
                $("#div-advertencia").html('<span>El campo a&ntilde;o es requerido</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if ( $("#cmbTipoParteDestino").val() == "" || $("#cmbTipoParteDestino").val() == "0" ) {
                $("#div-advertencia").html('<span>Seleccione el tipo de persona a consultar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            }
             else {
                arrayImputadosDestino = [];
                arrayOfendidosDestino = [];
                $("#divResultadosImputados").html("");
                $("#hddImputados").val("");
                $("#hddOfendidos").val("");
                TotalImputados = [];
                TotalOfendidos = [];
                $("#guardar").hide();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    data: {
                    cveJuzgado : $("#cmbJuzgadoDestino").val(),
                    numero: $("#txtNumeroDestino").val(),
                    anio: $("#txtAnioDestino").val(),
                    cveTipoCarpeta: $("#cmbTipoCarpetaDestino").val(),
                    tipoPersona: $("#cmbTipoParteDestino").val(),
                    activo: "S",
                    accion : "buscarPersonas"},
                    async: true,
                    dataType: "html",
                    beforeSend: function(objeto) {
                        //ToggleLoading(1);
                    },
                    success: function(datos){
                        try{
                            var result = eval("(" + datos + ")");
                            var html = "";
                            var c = 0;
                            if(result.totalCount > 0){
                                $("#resultadosDestino").show();
                                var numeroCausa = $("#txtNumeroDestino").val() + "/" + $("#txtAnioDestino").val();
                                if ( $("#cmbTipoParteDestino").val() == "1" ) {
                                    html += '<div style="text-align: center;">Imputados activos de la causa ' + numeroCausa + ' <span class="requerido">(*)</span></div>';
                                } else {
                                    html += '<div style="text-align: center;">Sujetos pasivos del delito activos de la causa ' + numeroCausa + '<span class="requerido">(*)</span></div>';
                                }
                                html += '<br>';
                                html += '<table id="resultCarpetasDestino" class="table table-hover table-striped table-bordered">';
                                html += '<thead>';
                                html += '<th>#</th>';
                                html += '<th>Tipo Persona</th>';
                                html += '<th>Nombre</th>';
                                html += '<th>G&eacute;nero</th>';
                                if ( $("#cmbTipoParteDestino").val() == "1" ) {
                                    html += '<th>Tiene Sobreseimiento</th>';
                                }
                                html += '<th>&nbsp;</th>';
                                html += '<tbody>';
                                for( var n = 0; n < result.totalCount; n++ ){
                                    c++;
                                    html += '<tr class="filaDestino" >';
                                    html += '<td>' + c + '</td>';
                                    html += '<td>' + result.data[n].desTipoPersona + '</td>';
                                    if ( result.data[n].cveTipoPersona == "1" ) {
                                        html += '<td>' + result.data[n].nombre + " " + result.data[n].paterno + " " + result.data[n].materno + "</td>";
                                    } else {
                                        html += '<td>' + result.data[n].nombreMoral + '</td>';
                                    }
                                    html += '<td>' + result.data[n].desGenero + '</td>';
                                    if ( result.data[n].tipoPersona == "1" ) {
                                        html += '<td>' + result.data[n].TienesobreSeimiento + '</td>';
                                    }
                                    html += '<td>';
                                    if ( $("#cmbTipoParteDestino").val() == "1" ) {
                                        arrayImputadosDestino[n] = result.data[n];
                                        html += '<input type="radio" class="personaDestino" name="idImputadoCarpetaDestino" value="' + result.data[n].idImputadoCarpeta + '">';
                                    } else if ( $("#cmbTipoParteDestino").val() == "2" ) {
                                        arrayOfendidosDestino[n] = result.data[n];
                                        html += '<input type="radio" class="personaDestino" name="idOfendidoCarpetaDastino" value="' + result.data[n].idOfendidoCarpeta + '">';
                                    }
                                    
                                    html += '</td>';
                                    html += '</tr>';
                                }
                                html += '</tbody>';
                                html += '</table>';
                                $("#resultadosDestino").html(html);
                                $("#resultCarpetasDestino").DataTable({
                                    paging: false,
                                    searching: false
                                });
                                //getPaginasCarpetas(pag, cantReg);
                                //ToggleLoading(2);
                                //$(".juzgadores").show();
                                //$(".guarda").show();
                                //$("#idCarpetaJudicial").val(result.data[0].idCarpetaJudicial);
                                $("#idCarpetaJudicialDestino").val(result.data[0].idCarpetaJudicial);
                                //comboJuzgadosBusqueda();
                            } else{
                                $("#div-advertencia").html('<span>' + result.msj + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                html += '';
                                $("#resultadosDestino").html(html);
                                //$("#resultadoPaginador").hide();
                                //ToggleLoading(2);
                            }
                            
                        } catch(e){
                            //ToggleLoading(2);
                            $("#div-advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        }
                    },
                    error: function(objeto, quepaso, otroobj) {
                        $("#div-error").html('<span>Ocurri&oacute; un error al consultar los datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        var html = '';
                        html += '';
    //                    $("#info").hide();
    //                    $(".limpia").show();
    //                    $(".consulta").show();
                        $("#resultadosDestino").html(html);
                        //$("#resultadoPaginador").hide();
                    }
                });
            }
        };
        
        cargarCarpetasBusqueda = function(idCarpetaJudicial, numero, anio){
            $("#idCarpetaJudicialDestino").val(idCarpetaJudicial);
            $("#resultCarpetasDestino tr#" + idCarpetaJudicial).addClass('success');
        };
        
        cleanStepOneConsult = function() {
            $("#idCarpetaJudicialDestino").val("");
            $("#cmbJuzgadoDestino").val("");
            $("#cmbTipoCarpetaDestino").val("");
            $("#txtNumeroDestino").val("");
            $("#txtAnioDestino").val("");
            $("#resultadosDestino").html("");
            $("#cmbTipoParteDestino").val("");
            TotalImputados = [];
            TotalOfendidos = [];
            arrayImputadosDestino = [];
            arrayOfendidosDestino= [];
            $("#hddOfendidos").val("");
            $("#hddImputados").val("");
            $("#divResultadosImputados").html("");
        };
        
        consultar = function() {
            if($("#cmbJuzgadoOrigen").val() == ""){
                $("#div-advertencia").html('<span>Selecciona un juzgado del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if($("#cmbTipoCarpetaOrigen").val() == ""){
                $("#div-advertencia").html('<span>Selecciona el tipo de carpeta del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            }
            else if($("#txtNumeroOrigen").val() == ""){
                $("#div-advertencia").html('<span>Capture el numero de causa en el campo correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if($("#txtAnioOrigen").val() == ""){
                $("#div-advertencia").html('<span>El campo a&ntilde;o es requerido</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if ( $("#cmbTipoParteOrigen").val() == "" || $("#cmbTipoParteOrigen").val() == "0" ) {
                $("#div-advertencia").html('<span>Seleccione el tipo de persona a consultar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            }
             else {
                arrayImputadosOrigen = [];
                arrayOfendidosOrigen = [];
                $("#divResultadosImputados").html("");
                $("#hddImputados").val("");
                $("#hddOfendidos").val("");
                TotalImputados = [];
                TotalOfendidos = [];
                $("#guardar").hide();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    data: {
                    cveJuzgado : $("#cmbJuzgadoOrigen").val(),
                    numero: $("#txtNumeroOrigen").val(),
                    anio: $("#txtAnioOrigen").val(),
                    cveTipoCarpeta: $("#cmbTipoCarpetaOrigen").val(),
                    tipoPersona: $("#cmbTipoParteOrigen").val(),
                    activo: "S",
                    paginacion: "S",
                    pagina: 1,
                    cantidadRegistros: 10,
                    accion : "buscarPersonas"},
                    async: true,
                    dataType: "html",
                    beforeSend: function(objeto) {
                        //ToggleLoading(1);
                    },
                    success: function(datos){
                        try{
                            var result = eval("(" + datos + ")");
                            var html = "";
                            var c = 0;
                            if(result.totalCount > 0){
                                var numeroCausa = $("#txtNumeroOrigen").val() + "/" + $("#txtAnioOrigen").val();
                                $("#resultadosOrigen").show();
                                if ( $("#cmbTipoParteOrigen").val() == "1" ) {
                                    html += '<div style="text-align: center;">Imputados activos de la causa ' + numeroCausa + ' <span class="requerido">(*)</span></div>';
                                } else {
                                    html += '<div style="text-align: center;">Sujetos pasivos del delito activos de la causa ' + numeroCausa + ' <span class="requerido">(*)</span></div>';
                                }
                                html += '<br>';
                                html += '<table id="resultCarpetasOrigen" class="table table-hover table-striped table-bordered">';
                                html += '<thead>';
                                html += '<th>#</th>';
                                html += '<th>Tipo Persona</th>';
                                html += '<th>Nombre</th>';
                                html += '<th>G&eacute;nero</th>';
                                if ( $("#cmbTipoParteOrigen").val() == "1" ) {
                                    html += '<th>Tiene Sobreseimiento</th>';
                                }
                                html += '<th>&nbsp;</th>';
                                html += '<tbody>';
                                for( var n = 0; n < result.totalCount; n++ ){
                                    c++;
                                    html += '<tr id="' + result.data[n].idCarpetaJudicial + '" >';
                                    html += '<td>' + c + '</td>';
                                    html += '<td>' + result.data[n].desTipoPersona + '</td>';
                                    if ( result.data[n].cveTipoPersona == "1" ) {
                                        html += '<td>' + result.data[n].nombre + " " + result.data[n].paterno + " " + result.data[n].materno + "</td>";
                                    } else {
                                        html += '<td>' + result.data[n].nombreMoral + '</td>';
                                    }
                                    html += '<td>' + result.data[n].desGenero + '</td>';
                                    if ( result.data[n].tipoPersona == "1" ) {
                                        html += '<td>' + result.data[n].TienesobreSeimiento + '</td>';
                                    }
                                    
                                    html += '<td>';
                                    if ( $("#cmbTipoParteOrigen").val() == "1" ) {
                                        arrayImputadosOrigen[n] = result.data[n];
                                        html += '<input type="radio" class="persona" name="idImputadoOrigen" value="' + result.data[n].idImputadoCarpeta + '">';
                                    } else if ( $("#cmbTipoParteOrigen").val() == "2" ) {
                                        arrayOfendidosOrigen[n] = result.data[n];
                                        html += '<input type="radio" class="persona" name="idOfendidoOrigen" value="' + result.data[n].idOfendidoCarpeta + '">';
                                    }
                                    
                                    html += '</td>';
                                     
                                    html += '</tr>';
                                }
                                html += '</tbody>';
                                html += '</table>';
                                $("#resultadosOrigen").html(html);
                                $("#resultCarpetasOrigen").DataTable({
                                    paging: false,
                                    searching: false
                                });
                                //getPaginasCarpetas(pag, cantReg);
                                //ToggleLoading(2);
                                //$(".juzgadores").show();
                                //$(".guarda").show();
                                //$("#idCarpetaJudicial").val(result.data[0].idCarpetaJudicial);
                                //comboJuzgadosBusqueda();
                                $("#idCarpetaJudicialOrigen").val(result.data[0].idCarpetaJudicial);
                                //$("#guardar").show();
                                $("#limpiarGeneral").show();
                            } else{
                                $("#div-advertencia").html('<span>' + result.msj + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                html += '';
                                $("#resultadosOrigen").html(html);
                                //$("#resultadoPaginador").hide();
                                //ToggleLoading(2);
                            }
                            
                        } catch(e){
                            //ToggleLoading(2);
                            $("#div-advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        }
                    },
                    error: function(objeto, quepaso, otroobj) {
                        $("#div-error").html('<span>Ocurri&oacute; un error al consultar los datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        var html = '';
                        html += '';
    //                    $("#info").hide();
    //                    $(".limpia").show();
    //                    $(".consulta").show();
                        $("#resultadosOrigen").html(html);
                        //$("#resultadoPaginador").hide();
                    }
                });
            }
        };
        
        cargarCarpetaOrigen = function(idCarpetaJudicial, numero, anio) {
            $("#idCarpetaJudicialOrigen").val(idCarpetaJudicial);
            $("#resultCarpetasOrigen tr#" + idCarpetaJudicial).addClass('success');
        };
        
        limpiarConsultaOrigen = function() {
            $("#idCarpetaJudicialOrigen").val("");
            $("#cmbJuzgadoOrigen").val("");
            $("#cmbTipoCarpetaOrigen").val("");
            $("#txtNumeroOrigen").val("");
            $("#txtAnioOrigen").val("");
            $("#resultadosOrigen").html("");
            $("#cmbTipoParteOrigen").val("");
            arrayImputadosOrigen = [];
            arrayOfendidosOrigen = [];
            TotalImputados = [];
            TotalOfendidos = [];
            $("#hddOfendidos").val("");
            $("#hddImputados").val("");
            $("#divResultadosImputados").html("");
        };
        
        limpiarGeneral = function() {
            limpiarConsultaOrigen();
            cleanStepOneConsult();
            $("#guardar").hide();
            $("#divResultadosImputados").html("");
            $("#hddImputados").val("");
            $("#hddOfendidos").val("");
            TotalImputados = [];
            TotalOfendidos = [];
        };
        
        agregarImputados = function () {
            console.log(arrayImputadosOrigen);
            console.log(arrayImputadosDestino);
            console.log(arrayOfendidosOrigen);
            console.log(arrayOfendidosDestino);
            var error = true;
            if (validateRelacion()) {
                
                if ( $("#cmbTipoParteOrigen").val() == "1" ) {
                    var ListaImputados = new Array();
                    var origen = $('input:radio[name=idImputadoOrigen]:checked').val();
                    var destino = ( $('input:radio[name=idImputadoCarpetaDestino]').is(":checked") ) ? $('input:radio[name=idImputadoCarpetaDestino]:checked').val() : 0;
                    ListaImputados = {
                        idImputadoOrigen: origen,
                        idImputadoDestino: destino
                    };
                    TotalImputados[TotalImputados.length] = ListaImputados;
                    console.log(TotalImputados);
                    ///Se convierte el arreglo de los imputados en json
                    var ImputadoJson = JSON.stringify(TotalImputados);
                    ImputadoJson = decodeURIComponent(ImputadoJson);
                    $("#hddImputados").val("");
                    $("#hddImputados").val(ImputadoJson);
                    ///Limpiamos los radios
                    $('input:radio[name=idImputadoOrigen]').attr('checked', false);
                    $('input:radio[name=idImputadoCarpetaDestino]').attr('checked', false);
                } else {
                    var ListaOfendidos = new Array();
                    var origen = $('input:radio[name=idOfendidoOrigen]:checked').val();
                    var destino = ( $('input:radio[name=idOfendidoCarpetaDastino]').is(":checked") ) ? $('input:radio[name=idOfendidoCarpetaDastino]:checked').val() : 0;
                    ListaOfendidos = {
                        idOfendidoOrigen: origen,
                        idOfendidoDestino: destino
                    };
                    TotalOfendidos[TotalOfendidos.length] = ListaOfendidos;
                    console.log(TotalOfendidos);
                    ///Se convierte el arreglo de los imputados en json
                    var OfendidoJson = JSON.stringify(TotalOfendidos);
                    OfendidoJson = decodeURIComponent(OfendidoJson);
                    $("#hddOfendidos").val("");
                    $("#hddOfendidos").val(OfendidoJson);
                    ///Limpiamos los radios
                    $('input:radio[name=idOfendidoOrigen]').attr('checked', false);
                    $('input:radio[name=idOfendidoCarpetaDastino]').attr('checked', false);
                }
                
                ////Creamos tabla de relacion
                var tabla = '<div style="text-align: center;"><b>Lista de relaciones</b></div><br>';
                tabla += '<table id="tblRelacion" border="1" align="center"  width="80%"  class="table table-bordered">';
                tabla += "<tr>";
                if ( $("#cmbTipoParteOrigen").val() == "1" ) {
                    tabla += "<td><b>Nombre Imputado Origen</b></td>";
                    tabla += "<td><b>Nombre Imputado Destino</b></td>";
                } else {
                    tabla += "<td><b>Sujeto pasivo del delito Origen</b></td>";
                    tabla += "<td><b>Sujeto pasivo del delito Destino</b></td>";
                }
                tabla += "</tr>";

                //MOstramos los datos de las relaciones existentes
                if ( $("#cmbTipoParteOrigen").val() == "1" ) {
                    for (var x = 0; x < TotalImputados.length; x++) {
                        tabla += "<tr>";
                        //Mostramos los datos del imputado origen
                        for (var i = 0; i < arrayImputadosOrigen.length; i++) {
                            if (TotalImputados[x]["idImputadoOrigen"] == arrayImputadosOrigen[i]["idImputadoCarpeta"]) {
                                if (arrayImputadosOrigen[i]["cveTipoPersona"] == "1") {
                                    tabla += "<td>" + arrayImputadosOrigen[i]["nombre"] + " " + arrayImputadosOrigen[i]["paterno"] + " " + arrayImputadosOrigen[i]["materno"] + "</td>";
                                } else {
                                    tabla += "<td>" + arrayImputadosOrigen[i]["nombreMoral"] + "</td>";
                                }
                            }
                        }

                        //Mostramos los datos del imputado destino
                        for (var r = 0; r < arrayImputadosDestino.length; r++) {
                            if ( TotalImputados[x]["idImputadoDestino"] == 0 ) {
                                tabla += "<td>*Nuevo Registro</td>";
                                break;
                            } else {
                                if (TotalImputados[x]["idImputadoDestino"] == arrayImputadosDestino[r]["idImputadoCarpeta"]) {
                                    if (arrayImputadosOrigen[r]["cveTipoPersona"] == "1") {
                                        tabla += "<td>" + arrayImputadosDestino[r]["nombre"] + " " + arrayImputadosDestino[r]["paterno"] + " " + arrayImputadosDestino[r]["materno"] + "</td>";
                                    } else {
                                        tabla += "<td>" + arrayImputadosDestino[r]["nombreMoral"] + "</td>";
                                    }
                                }
                            }
                            
                        }
                    }
                } else {
                    for (var x = 0; x < TotalOfendidos.length; x++) {
                        tabla += "<tr>";
                        //Mostramos los datos del ofendido origen
                        for (var i = 0; i < arrayOfendidosOrigen.length; i++) {
                            if (TotalOfendidos[x]["idOfendidoOrigen"] == arrayOfendidosOrigen[i]["idOfendidoCarpeta"]) {
                                if (arrayOfendidosOrigen[i]["cveTipoPersona"] == "1") {
                                    tabla += "<td>" + arrayOfendidosOrigen[i]["nombre"] + " " + arrayOfendidosOrigen[i]["paterno"] + " " + arrayOfendidosOrigen[i]["materno"] + "</td>";
                                } else {
                                    tabla += "<td>" + arrayOfendidosOrigen[i]["nombreMoral"] + "</td>";
                                }
                            }
                        }

                        //Mostramos los datos del ofendido destino
                        for (var r = 0; r < arrayOfendidosDestino.length; r++) {
                            if ( TotalOfendidos[x]["idOfendidoDestino"] == 0 ) {
                                tabla += "<td>*Nuevo Registro</td>";
                                break;
                            } else {
                                if (TotalOfendidos[x]["idOfendidoDestino"] == arrayOfendidosDestino[r]["idOfendidoCarpeta"]) {
                                    if (arrayOfendidosDestino[r]["cveTipoPersona"] == "1") {
                                        tabla += "<td>" + arrayOfendidosDestino[r]["nombre"] + " " + arrayOfendidosDestino[r]["paterno"] + " " + arrayOfendidosDestino[r]["materno"] + "</td>";
                                    } else {
                                        tabla += "<td>" + arrayOfendidosDestino[r]["nombreMoral"] + "</td>";
                                    }
                                }
                            }
                            
                        }
                    }
                }
                
                tabla += "</tr>";
                tabla += "</table>";
                $("#divResultadosImputados").html(tabla);
                $("#divResultadosImputados").show("");
                $("#guardar").show();

            } else {
                if ( $("#cmbTipoParteOrigen").val() == "1" ) {
                    $('input:radio[name=idImputadoOrigen]').attr('checked', false);
                    $('input:radio[name=idImputadoCarpetaDestino]').attr('checked', false);
                } else {
                    $('input:radio[name=idOfendidoOrigen]').attr('checked', false);
                    $('input:radio[name=idOfendidoCarpetaDastino]').attr('checked', false);
                }
                error = false;
            }
            return error;
        };
        
        validateRelacion = function() {
            var mensaje = "";
            var error = true;
            //se verifica que no exista la relacion
    //        if (arrayImputadosDestino.length == 0) {
    //            mensaje += "*No se puede agregar, ya que no existen imputados destino seleccionados \n";
    //            error = false;
    //        }
            if ( $("#idCarpetaJudicialOrigen").val() == "" ) {
                mensaje += "*Debe consultar una carpeta judicial origen para realizar la copia de datos\n";
                error = false;
            }
            if ( $("#idCarpetaJudicialDestino").val() == "" ) {
                mensaje += "*Debe consultar una carpeta judicial destino para realizar la copia de datos\n";
                error = false;
            }
            if ( $("#cmbTipoParteOrigen").val() == "1" ) {
                
                if (arrayImputadosOrigen.length == 0) {
                    mensaje += "*No se puede agregar, ya que no existen imputados. Verifique \n";
                    error = false;
                }
                if ($("input[name='idImputadoOrigen']:radio").is(':checked')) {
                } else {
                    mensaje += "*Seleccione un imputado \n";
                    error = false;
                }
        //        if ($("input[name='chbxRalacionRecluso']:radio").is(':checked')) {
        //        } else {
        //            mensaje += "*Seleccione un recluso \n";
        //            error = false;
        //        }

                for (var i = 0; i < TotalImputados.length; i++) {
                    if ((TotalImputados[i]["idImputadoOrigen"] == $('input:radio[name=idImputadoOrigen]:checked').val()) && (TotalImputados[i]["idImputadoDestino"] == $('input:radio[name=idImputadoCarpetaDestino]:checked').val())) {
                        mensaje += "*La relacion ya existe. Verifique \n";
                        error = false;
                    }
                }
                for (var i = 0; i < TotalImputados.length; i++) {
                    if ((TotalImputados[i]["idImputadoOrigen"] == $('input:radio[name=idImputadoOrigen]:checked').val())) {
                        mensaje += "*el imputado origen ya se encuentra relacionado \n";
                        error = false;
                    }
                }
                for (var i = 0; i < TotalImputados.length; i++) {
                    if ((TotalImputados[i]["idImputadoDestino"] == $('input:radio[name=idImputadoCarpetaDestino]:checked').val())) {
                        mensaje += "*el imputado destino ya se encuentra relacionado \n";
                        error = false;
                    }
                }
                
            } else {
                
                if (arrayOfendidosOrigen.length == 0) {
                    mensaje += "*No se puede agregar, ya que no existen ofendidos. Verifique \n";
                    error = false;
                }
                if ($("input[name='idOfendidoOrigen']:radio").is(':checked')) {
                } else {
                    mensaje += "*Seleccione un ofendido \n";
                    error = false;
                }
        //        if ($("input[name='chbxRalacionRecluso']:radio").is(':checked')) {
        //        } else {
        //            mensaje += "*Seleccione un recluso \n";
        //            error = false;
        //        }

                for (var i = 0; i < TotalOfendidos.length; i++) {
                    if ((TotalOfendidos[i]["idOfendidoOrigen"] == $('input:radio[name=idOfendidoOrigen]:checked').val()) && (TotalOfendidos[i]["idOfendidoDestino"] == $('input:radio[name=idOfendidoCarpetaDestino]:checked').val())) {
                        mensaje += "*La relacion ya existe. Verifique \n";
                        error = false;
                    }
                }
                for (var i = 0; i < TotalOfendidos.length; i++) {
                    if ((TotalOfendidos[i]["idOfendidoOrigen"] == $('input:radio[name=idOfendidoOrigen]:checked').val())) {
                        mensaje += "*el ofendido origen ya se encuentra relacionado \n";
                        error = false;
                    }
                }
                for (var i = 0; i < TotalOfendidos.length; i++) {
                    if ((TotalOfendidos[i]["idOfendidoDestino"] == $('input:radio[name=idOfendidoCarpetaDestino]:checked').val())) {
                        mensaje += "*el ofendido destino ya se encuentra relacionado \n";
                        error = false;
                    }
                }
                
            }
            
            if (!error) {
                alert(mensaje);
            }
            return error;
        };
        
        guardar = function() {
            var error = false;
            //alert();
            if ( !validar() ) {
                bootbox.dialog({
                    message: "\u00bf Los datos son correctos?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                var url = "";
                                var strDatos = "accion=copiarDatosPersona";
                                if ( $("#cmbTipoParteOrigen").val() == "1" ) {
                                    url = "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php";
                                    strDatos += "&idImputados=" + $('#hddImputados').val();
                                } else if ( $("#cmbTipoParteOrigen").val() == "2" ) {
                                    url = "../fachadas/sigejupe/ofendidoscarpetas/OfendidoscarpetasFacade.Class.php";
                                    strDatos += "&idOfendidos=" + $('#hddOfendidos').val();
                                }
                                strDatos += "&idCarpetaJudicial=" + $("#idCarpetaJudicialOrigen").val();
                                strDatos += "&idCarpetaJudicialDestino=" + $("#idCarpetaJudicialDestino").val();
                                $.ajax({
                                    type: "POST",
                                    url: url,
                                    data: strDatos,
                                    async: true,
                                    dataType: "html",
                                    beforeSend: function (objeto) {
                                        ToggleLoading(1);
                                        $("#guardar").hide();
                                    },
                                    success: function (datos) {
                                        try {
                                            //console.log(datos);
                                            var result = eval("(" + datos + ")");
                                            if (result.estatus == "ok") {
                                                $("#div-correcto").html("Datos guardados correctamente, verifique si todos los datos de imputados, ofendidos, delitos y relaciones deben corresponder a la causa donde se copiaron los datos").fadeIn('slow').delay(7000).fadeOut('slow');
                                                $("#guardar").hide();
                                                //cargarCarpetas(result.data[0].idCarpetaJudicial);
                                            } else {
                                                $("#div-advertencia").html("Ocurrio un error al guardar los datos: " + result.msj).fadeIn('slow').delay(4000).fadeOut('slow');
                                                $("#guardar").show();
                                            }

                                        } catch (e) {
                                            $("#div-advertencia").html("Ocurrio un error al guardar los datos: " + e).fadeIn('slow').delay(4000).fadeOut('slow');
                                            $("#guardar").show();
                                        }
                                        ToggleLoading(2);
                                        $("#divResultadosImputados").html("");
                                        $("#hddImputados").val("");
                                        $("#hddOfendidos").val("");
                                        TotalImputados = [];
                                        TotalOfendidos = [];
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        $("#div-error").html("Error en la peticion:\n\n" + quepaso);
                                        $("#div-error").show("slide");
                                        setTimeAlert("error");
                                        ToggleLoading(2);
                                        $("#guardar").show();
                                    }
                                });
                            }
                        },
                        success: {
                            label: "Cancelar",
                            className: "btn-primary",
                            callback: function () {

                            }
                        }
                    }
                });
            } else {
                error = false;
            }
            return error;
        };
        
        siguiente = function (div, url, paso) {
            $.post(url, {idCarpetajudicial: $('#idCarpetaJudicial').val()}, function (htmlexterno) {
                $("#" + div).html(htmlexterno);
            });
        };
        
        function cargarCarpetas(idCarpetaJudicial){
            //alert("id Carpeta judicial: " + idCarpetaJudicial);
            $("#idCarpetaJudicial").val(idCarpetaJudicial);
            changeDivFormCarpetas(2);
            siguientePaso(1);
        }
        
        siguientePaso = function (paso) {
            if (paso == 1) {
                siguiente('divGeneral', 'sigejupe/carpetasjudiciales/frmCopiarCarpetaJudicial.php', 1);
                $('#liPaso1').find("a").addClass("active");
                $('#liPaso2').find("a").removeClass("active");
                $('#liPaso3').find("a").removeClass("active");
                $('#liPaso4').find("a").removeClass("active");
                $('#liPaso5').find("a").removeClass("active");
                $('#liPaso6').find("a").removeClass("active");
                $('#btnPaso1').show();
                $('#btnPaso2').hide();
                $('#btnPaso3').hide();
                $('#btnPaso4').hide();
                $('#btnPaso5').hide();
                $('#btnPaso6').hide();
            } else if (paso == 2) {
                if (!validaPasoUno()) {
                    $('#liPaso2').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/imputadoscarpetas/frmImputadoscarpetas.php', 2);
                    $('#btnPaso2').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                }
            } else if (paso == 3) {
                if (!validaPasoUno() && !validaPasoDos()) {
                    $('#liPaso3').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/ofendidoscarpetas/frmOfendidoscarpetas.php', 3);
                    $('#btnPaso3').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                }
            } else if (paso == 4) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres()) {
                    $('#liPaso4').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/delitoscarpetas/frmDelitoscarpetas.php', 4);
                    $('#btnPaso4').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                }
            } else if (paso == 5) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro()) {
                    $('#liPaso5').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/impofedelcarpetas/frmImpofedelcarpetas.php', 5);
                    $('#btnPaso5').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso6').hide();
                }
            } else if (paso == 6) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro() && !validaPasoCinco()) {
                    $('#liPaso6').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");            
                    siguiente('divGeneral', 'sigejupe/victimascarpetas/frmVictimascarpetas.php', 6);
                    $('#btnPaso6').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                }
            }
        };
        
        validaPasoUno = function () {
            var error = true;
            if ($('#idCarpetaJudicial').val() != "") {
                error = false;
            } else {
                $("html, body").animate({scrollTop: 0}, "slow");
                $("#div-advertencia").html("");
                $("#div-advertencia").html("Seleccionar una carpeta judicial!");
                $("#div-advertencia").show("slow");
                setTimeAlert("div-advertencia");
                error = true;
            }
            return error;
        };
        
        validaPasoDos = function () {
            var error = true;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadoscarpetas/ImputadoscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarTotal",
                    idCarpetaJudicial: $("#idCarpetaJudicial").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.status == 'ok') {
                        if (datos.totalCount != 0) {
                            error = false;
                        }
                    } else {
                        $("#div-advertencia").html("");
                        $("#div-advertencia").html(datos.msj);
                        $("#div-advertencia").show("slow");
                        setTimeAlert("div-advertencia");
                        $("html, body").animate({scrollTop: 0}, "slow");
                        error = true;
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpetas judiciales:\n\n" + otroobj);
                }
            });
            return error;
        };
        
        validaPasoTres = function () {
            var error = true;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ofendidoscarpetas/OfendidoscarpetasFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultarTotal",
                    idCarpetaJudicial: $("#idCarpetaJudicial").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.status == 'ok') {
                        if (datos.totalCount != 0) {
                            error = false;
                        }
                    } else {
                        $("#div-advertencia").html("");
                        $("#div-advertencia").html(datos.msj);
                        $("#div-advertencia").show("slow");
                        setTimeAlert("div-advertencia");
                        $("html, body").animate({scrollTop: 0}, "slow");
                        error = true;
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Carpetas Judiciales:\n\n" + otroobj);
                }
            });
            return error;
        };
        
        validaPasoCuatro = function () {
            var error = true;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/delitoscarpetas/DelitoscarpetasFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultarTotal",
                    idCarpetaJudicial: $("#idCarpetaJudicial").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.status == 'ok') {
                        if (datos.totalCount != 0) {
                            error = false;
                        }
                    } else {
                        $("#div-advertencia").html("");
                        $("#div-advertencia").html(datos.msj);
                        $("#div-advertencia").show("slow");
                        setTimeAlert("div-advertencia");
                        $("html, body").animate({scrollTop: 0}, "slow");
                        error = true;
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de delitos:\n\n" + otroobj);
                }
            });
            return error;
        };
        
        validaPasoCinco = function () {
            var error = true;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/impofedelcarpetas/ImpofedelcarpetasFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {
                    accion: "validaRelacion",
                    idCarpetaJudicial: $("#idCarpetaJudicial").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.estatus == 'ok') {
                        error = false;
                    } else {
                        $("#div-advertencia").html("");
                        $("#div-advertencia").html(datos.mensaje);
                        $("#div-advertencia").show("");
                        setTimeAlert("div-advertencia");
                        $("html, body").animate({scrollTop: 0}, "slow");
                        error = true;
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de Carpetass judiciales:\n\n" + otroobj);
                }
            });
            return error;
        };
        
        changeDivFormCarpetas = function (opc) {
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
            } else if (opc === 2) {
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
            }
        };
        
        function clean(){
            $("#cveJuzgado").val("");
            $("#numero").val("");
            var fecha = new Date();
            $("#anio").val("");
            $("#cveTipoCarpeta").val("");
            var html = '';
            $("#consulta-carpetas").html(html);
            //$(".guarda").hide();
            $(".juzgadores").hide();
            $("#idJuzgadorCarpeta").val("");
            $("#idCarpetaJudicial").val("");
            $("#propietario").val("");
            $("#resultadoPaginador").hide();
        }
        
        function listaJuzgados(){
            
            var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {accion: 'distrito', obligaPermiso: 'false'},
                dataType: 'json',
                beforeSend: function(objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            $("#cmbJuzgadoDestino").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                //if ( data.data[index].cveTipojuzgado == 2 || data.data[index].cveTipojuzgado == 4 ) {
                                    html += "<option value='" + data.data[index].cveJuzgado + "' data-tipoJuzgado='" + data.data[index].cveTipojuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                                //}
                            }
                            html += "</select>";
                            ToggleLoading(2);
                        } else {
                            html = "Sin resultados";
                            ToggleLoading(2);
                        }
                        $('#cmbJuzgadoDestino').html(html);
                    } catch (e) {
                        alert(e);
                        ToggleLoading(2);
                    }
                }
            }).error(function () {
                alert('error al obtener los juzgados');
                ToggleLoading(2);
            });
        }
        
        cargaTipoCarpeta = function () {
            var result = "";
            var strDatos = "accion=consultar";
            var cveTipoJuzgado = $("#cmbJuzgadoDestino :selected").attr("data-tipoJuzgado");
            //alert(cveTipoJuzgado);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    try {
                        result = eval("(" + datos + ")");
                        var html = "";
                        if (result.totalCount > 0) {
                            $("#cmbTipoCarpetaDestino").empty();
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < result.totalCount; index++) {
    //                            if ( result.data[index].cveTipoCarpeta < 7 ) {
    //                                html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
    //                                
    //                            }
                                switch(cveTipoJuzgado){
                                    case "1": // tipo de juzgado de control
                                        if(result.data[index].cveTipoCarpeta == "1" || result.data[index].cveTipoCarpeta == "2"){
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                    break;
                                    case "2": // tipo de juzgado juicio
                                        if(result.data[index].cveTipoCarpeta == "3"){
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                    break;
                                    case "3": // tipo de juzgado ejecucion
                                        if(result.data[index].cveTipoCarpeta == "5"){
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                    break;
                                    case "4": // tipo de juzgado tribunal
                                        if(result.data[index].cveTipoCarpeta == "4"){
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                    break;
                                    case "5": 
                                    break;
                                }
                            }
                            html += "</select>";
                            ToggleLoading(2);
                        } else {
                            html = "Sin resultados";
                            ToggleLoading(2);
                        }
                        $('#cmbTipoCarpetaDestino').html(html);
                    } catch (e) {
                        alert(e);
                        ToggleLoading(2);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                    ToggleLoading(2);
                }
            });
        };
        
        comboJuzgadosBusqueda = function () {
            var cveTipoJuzgado = $("#cmbJuzgadoDestino :selected").attr("data-tipoJuzgado");
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "distrito", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgadoOrigen').empty();
                        $('#cmbJuzgadoOrigen').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
    //                            if ( cveTipoJuzgado == 2 && object.cveTipojuzgado == 1 ) {
    //                                
    //                                $('#cmbJuzgadoOrigen').append('<option value="' + object.cveJuzgado + '" data-tipoJuzgadoBusqueda="' + object.cveTipojuzgado + '">' + object.desJuzgado + '</option>');
    //                                
    //                            } else if ( cveTipoJuzgado == 3 && ( object.cveTipojuzgado == 1 || object.cveTipojuzgado == 2 ) ) {
    //                                
    //                                $('#cmbJuzgadoOrigen').append('<option value="' + object.cveJuzgado + '" data-tipoJuzgadoBusqueda="' + object.cveTipojuzgado + '">' + object.desJuzgado + '</option>');
    //                                
    //                            }
                                $('#cmbJuzgadoOrigen').append('<option value="' + object.cveJuzgado + '" data-tipoJuzgadoBusqueda="' + object.cveTipojuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar juzgados:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        
        tipoCarpetaBusqueda = function() {
            var cveTipoJuzgado = $("#cmbJuzgadoOrigen :selected").attr("data-tipoJuzgadoBusqueda");
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoCarpetaOrigen').empty();
                        $('#cmbTipoCarpetaOrigen').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
    //                            if (object.cveTipoCarpeta < 7) {
    //                                $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
    //                            }
                                switch(cveTipoJuzgado){
                                    case "1": // tipo de juzgado de control
                                        if(object.cveTipoCarpeta == "1" || object.cveTipoCarpeta == "2"){
                                            $('#cmbTipoCarpetaOrigen').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "2": // tipo de juzgado juicio
                                        if(object.cveTipoCarpeta == "3"){
                                            $('#cmbTipoCarpetaOrigen').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "3": // tipo de juzgado ejecucion
                                        if(object.cveTipoCarpeta == "5"){
                                            $('#cmbTipoCarpetaOrigen').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "4": // tipo de juzgado tribunal
                                        if(object.cveTipoCarpeta == "4"){
                                            $('#cmbTipoCarpetaOrigen').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
                                        }
                                    break;
                                    case "5": 
                                    break;
                                }
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tipo de carpeta:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipo carpeta:\n\n" + otroobj);
                }
            });
        };
        
        function cambiarEtiqueta(){
            var cveTipoCarpeta = $("#cveTipoCarpeta").val();
            var texto = "";
            if (cveTipoCarpeta != "") {
                texto = $("#cveTipoCarpeta option:selected").text();
                texto = capitalize(texto);
                $("#lblRelationName").html(texto);
            } else {
                $("#lblRelationName").html("Causa");
            }
        }
        
        function capitalize(text){
            text = text.toLowerCase();
            var tmpText = text.split(" ");
            var result = "";
            for ( var n = 0; n < tmpText.length; n++ ) {
                var j = tmpText[n].charAt(0).toUpperCase();
                tmpText[n] = j + tmpText[n].substr(1);
            }
            result = tmpText.join(" ");
            return result;
        }
        
        $(document).on('change', '.posicion', function(){
            var valor = $(this).val();
            var arrayDatos = new Array();
            $("#resultCarpetasDestino tr").each(function(){
                arrayDatos.push($(this).find('.posicion').val());
            });
            //alert(arrayDatos);
            if ( $(this).val() == "" ) {
                //alert("disabled");
                $(this).closest('tr').find('.persona').prop('disabled', true);
            } else {
                //alert("enabled");
                var filasDestino = $("#resultCarpetasDestino tr.filaDestino").length;
                //alert("filas: " + filasDestino);
                if ( $(this).val() > filasDestino ) {
                    alert("No se encontro el registro destino seleccionado!");
                    $(this).val("");
                    $("#" + valor).val("");
                    $(this).closest('tr').find('.persona').prop('disabled', true);
                } else {
                    $(this).closest('tr').find('.persona').prop('disabled', false);
                    
                    $("#" + valor).val(valor);
                }
                
            }
        });
        
        $(document).on('change', '.posicionDestino', function(){
            if ( $(this).val() == "" ) {
                //alert("disabled");
                $(this).closest('tr').find('.personaDestino').prop('disabled', true);
            } else {
                //alert("enabled");
                $(this).closest('tr').find('.personaDestino').prop('disabled', false);
            }
        });
        
        function validar(){
            var mensaje = "";
            var error = false;
            
            if($("#idCarpetaJudicialOrigen").val() == "" || $("#idCarpetaJudicialOrigen").val() == "0"){
                mensaje += '*Debe consultar la carpeta judicial origen para copiar los datos\n';
                error = true;
            }
            if($("#idCarpetaJudicialDestino").val() == "" || $("#idCarpetaJudicialDestino").val() == 0){
                mensaje += '*Debe consultar la carpeta judicial destino para copiar los datos\n';
                error = true;
            }
            
            if ( $("#cmbTipoParteOrigen").val() == "1" ) {
                if ( $("#hddImputados").val() == "" ) {
                    mensaje += '*No hay imputados relacionados para copiar datos\n';
                    error = true;
                }
            }
            
            if ( $("#cmbTipoParteOrigen").val() == "2" ) {
                if ( $("#hddOfendidos").val() == "" ) {
                    mensaje += '*No hay ofendidos relacionados para copiar datos\n';
                    error = true;
                }
            }
            
            if (error) {
                alert(mensaje);
            }

            return error;
        }
        
        formatoFecha = function(campo) {
            var fecha = campo.split(' ');
            if (fecha.length > 1) {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0] + " " + fecha[1];
            } else {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0];
            }
        };
        
        cargaCarpetaArbol = function() {
            if ( $("#idReferencia").val() != "" ) {
                //alert("Entra: " + $("#idReferencia").val());
                $("#btn-regresar").hide();
                cargarCarpetas($("#idReferencia").val());
            } 
    //        else {
    //            alert("No entra: " + $("#idReferencia").val());
    //        }
        };
        
        $(document).ready(function(){
            listaJuzgados();
            comboJuzgadosBusqueda();
            //cargaTipoCarpeta();
            $("#numero").validaCampo('0123456789');
            $("#anio").validaCampo('0123456789');
            
            var permisos = obtenerPermisosFormulario("HERRAMIENTAS", "COPIAR PERSONAS ENTRE CARPETAS");
            console.log(permisos);
            if(permisos.Read == 'N'){
                $('.consulta').prop('disabled',true);
            }
            var idCarpeta = "";
            //cargarCarpetas(idCarpeta);
            //cargaCarpetaArbol();
        });
    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>