<?php

if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    //print_r($_SESSION);
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
                Actualizar Tocas
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">

                <div class="form-group">
                    <label class="control-label col-xs-3">Tribunal <span class="requerido">(*)</span></label>
                    <div class="col-xs-9" id="listaJuzgados">
                        <input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Tribunal">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Tipo de Carpeta <span class="requerido">(*)</span></label>
                    <div class="col-xs-9" id="listaCarpetas">
                        <select class="form-control" id="cveTipoCarpeta" name="cveTipoCarpeta" placeholder="Tipo Carpeta">
                            <option value="0">SELECCIONA UNA OPCI&Oacute;N</option>
                        </select>
                    </div>
                    <input type="hidden" id="idJuzgadorCarpeta" name="idJuzgadorCarpeta">
                    <input type="hidden" id="idCarpetaJudicial" name="idCarpetaJudicial">
                    <input type="hidden" id="propietario" name="propietario">
                    <input type="hidden" id="idReferencia" name="idReferencia" value="<?php echo $idCarpeta; ?>">
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3" id="lblRelationName">Causa</label>
                    <div id="divSinRelacion" class="col-xs-9">
                        <input type="text" id="numero" class="form-inline" name="numero" placeholder="Causa">&nbsp;/&nbsp;<input type="text" class="form-inline" name="anio" id="anio" placeholder="A&ntilde;o" maxlength="4">
                    </div>                                
                    </div>
                
                <div class="form-group juzgadores" style="display: none;">
                    <label class="control-label col-xs-3">Magistrado Ponente</label>
                    <div class="col-xs-9" id="listaJuzgadores">
                        <input type="text" class="form-control" id="idJuzgador" name="idJuzgador" placeholder="magistrado" readonly="readonly">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <div class="alert alert-warning alert-dismissable" id="advertencia" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div class="alert alert-success alert-dismissable" id="correcto" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Correcto!</strong> Mensaje
                    </div>
                    <div class="alert alert-danger alert-dismissable" id="error" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Error!</strong> Mensaje
                    </div>
                    <div class="alert alert-info alert-dismissable" id="info" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Informaci&oacute;n!</strong> Mensaje
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary consulta" value="Buscar" onclick="consultar(1)">
                        <input type="submit" class="btn btn-primary limpia" value="Limpiar" onclick="clean()">
                        <!--<input type="submit" class="btn btn-primary guarda" value="Radicar Nueva Carpeta" onclick="radicarNuevaCarpeta()" >-->
                    </div>
                </div>
                
                    <!--<input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivFormCarpetas(1)">
                    <br><br>-->
                <div id="resultadoPaginador" style="display: none;">
                    <div class="col-xs-12">
                        <div class="form-group col-md-4" style="padding: 10px">
                            <label class="control-label" id="totalReg"></label>
                        </div>

                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultar(0);">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarPaginacion();">
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
                    <br>
                    <div id="consulta-carpetas">
                    </div>
                </div>
                
            </div>
        
            <div id="divConsulta" style="display: none;">
                <input type="submit" class="btn btn-primary" id="btn-regresar" value="REGRESAR" onclick="changeDivFormCarpetas(1)">
                <div class="form-group">
                    <div class="alert alert-warning alert-dismissable" id="div-advertencia" style="display: none;">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                </div>
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
                                    <a href="#" onclick="siguientePaso(4);"><strong>Paso 4</strong><br><label class="subtitulo">Captura de Apelantes(s)</label></a>
                                </li>
                                <li id="liPaso5" class="step step-5 Paso5">
                                    <a href="#" onclick="siguientePaso(5);"><strong>Paso 5</strong><br><label class="subtitulo">Captura de Delito(s)</label></a>
                                </li>
                                <li id="liPaso6" class="step step-6 Paso6">
                                    <a href="#" onclick="siguientePaso(6);"><strong>Paso 6</strong><br><label class="subtitulo">Definici&oacute;n de relaci&oacute;n</label></a>
                                </li>
                                <li id="liPaso7" class="step step-7 Paso7">
                                    <a href="#" onclick="siguientePaso(7);"><strong>Paso 7</strong><br><label class="subtitulo">Violencia de g&eacute;nero</label></a>
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
                        <button class="btn btn-primary" onclick="changeDivFormCarpetas(1)">< Anterior</button>
                        <button class="btn btn-primary" onclick="siguientePaso(2)">Siguiente ></button>
                    </div>
                    <div id="btnPaso2" style="display:none;">
                        <button class="btn btn-primary" onclick="siguientePaso(1)">< Anterior</button>
                        <button class="btn btn-primary" onclick="siguientePaso(3)">Siguiente ></button>
                    </div>

                    <div id="btnPaso3" style="display:none;">
                        <button  class="btn btn-primary" onclick="siguientePaso(2)">< Anterior </button>
                        <button class="btn btn-primary" onclick="siguientePaso(4)">Siguiente ></button>
                    </div>

                    <div id="btnPaso4" style="display:none;">
                        <button class="btn btn-primary" onclick="siguientePaso(3)">< Anterior </button>
                        <button class="btn btn-primary" onclick="siguientePaso(5)">Siguiente ></button>
                    </div>
                    <div id="btnPaso5" style="display:none;">
                        <button class="btn btn-primary" onclick="siguientePaso(4)">< Anterior </button>
                        <button class="btn btn-primary" onclick="siguientePaso(6)">Siguiente ></button>
                    </div>
                    <div id="btnPaso6" style="display:none;">
                        <button class="btn btn-primary" onclick="siguientePaso(5)">< Anterior </button>
                        <button class="btn btn-primary" onclick="siguientePaso(7)">Siguiente ></button>
                    </div>
                    <div id="btnPaso7" style="display:none;">
                        <button class="btn btn-primary" onclick="siguientePaso(6)">< Anterior </button>
                    </div>
                    <br>
                </form>
            </div>
            
        </div>
    </div>
    <script type="text/javascript">
        
        consultarPaginacion = function() {
            $("#cmbPaginacion").val(1);
            consultar(0);
        };
        
        function consultar(Aux){
            if(Aux==1){
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);       
            }
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            if($("#cveJuzgado").val() == ""){
                $("#advertencia").html('<span>Selecciona un tribunal del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } 
            /*else if($("#numero").val() == ""){
                $("#advertencia").html('<span>Capture el numero de causa en el campo correspondiente</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else if($("#anio").val() == ""){
                $("#advertencia").html('<span>El campo a&ntilde;o es requerido</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            }*/ 
            else if($("#cveTipoCarpeta").val() == ""){
                $("#advertencia").html('<span>Selecciona el tipo de carpeta del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
            } else {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/juzgadorescarpetas/JuzgadorescarpetasFacade.Class.php",
                    data: {
                    cveJuzgado : $("#cveJuzgado").val(),
                    numero: $("#numero").val(),
                    anio: $("#anio").val(),
                    cveTipoCarpeta: $("#cveTipoCarpeta").val(),
                    activo: "S",
                    paginacion: "S",
                    pagina: pag,
                    cantidadRegistros: cantReg,
                    accion : "buscarCarpetasJuzgadores"},
                    async: true,
                    dataType: "html",
                    beforeSend: function(objeto) {
                        ToggleLoading(1);
                    },
                    success: function(datos){
                        try{
                            var result = eval("(" + datos + ")");
                            var html = "";
                            var c = 0;
                            if(result.totalCount > 0){
                                $("#resultadoPaginador").show();
                                html += '<table id="resultCarpetas" class="table table-hover table-striped table-bordered">';
                                html += '<thead>';
                                html += '<th>#</th>';
                                html += '<th>Estatus</th>';
                                html += '<th>Carpeta Inv</th>';
                                html += '<th>NUC</th>';
                                html += '<th>N&uacute;mero</th>';
                                html += '<th>A&ntilde;o</th>';
                                html += '<th>Tipo Carpeta</th>';
                                html += '<th>Etapa Procesal</th>';
                                html += '<th>Fecha Registro</th>';
                                html += '<th>Tribunal</th>';
                                html += '<tbody>';
                                for(var n = 0; n < result.totalCount; n++){
                                    c++;
                                    var fecha = result.data[n].fechaRegistro.split(" ");
                                    html += '<tr onClick="cargarCarpetas(' + result.data[n].idCarpetaJudicial + ')">';
                                    html += '<td>' + c + '</td>';
                                    html += '<td>' + result.data[n].desEstatusCarpeta + '</td>';
                                    if( result.data[n].carpetaInv == null ) {
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].carpetaInv + '</td>';
                                    }
                                    if ( result.data[n].nuc == null ) {
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].nuc + '</td>';
                                    }
                                    if (result.data[n].numero == null){
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].numero + '</td>';
                                    }
                                    if (result.data[n].anio == null){
                                        html += '<td>N/A</td>';
                                    } else {
                                        html += '<td>' + result.data[n].anio + '</td>';
                                    }
                                    html += '<td>' + result.data[n].desTipoCarpeta + '</td>';
                                    html += '<td>' + result.data[n].desEtapaProcesal + '</td>';
                                    html += '<td>' + formatoFecha(fecha[0]) + '</td>';
                                    html += '<td>' + result.data[n].desJuzgado + '</td>';
                                    html += '</tr>';
                                }
                                html += '</tbody>';
                                html += '</table>';
                                $("#consulta-carpetas").html(html);
                                $("#resultCarpetas").DataTable({
                                    paging: false
                                });
                                getPaginasCarpetas(pag, cantReg);
                                ToggleLoading(2);
                                //$(".juzgadores").show();
                                //$(".guarda").show();
                                //$("#idCarpetaJudicial").val(result.data[0].idCarpetaJudicial);
                            } else{
                                $("#advertencia").html('<span>' + result.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                html += '';
                                $("#consulta-carpetas").html(html);
                                $("#resultadoPaginador").hide();
                                ToggleLoading(2);
                            }
                            
                        } catch(e){
                            ToggleLoading(2);
                            $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        }
                    },
                    error: function(objeto, quepaso, otroobj) {
                        $("#error").html('<span>Ocurri&oacute; un error al consultar los datos</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        var html = '';
                        html += '';
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                        $("#consulta-carpetas").html(html);
                        $("#resultadoPaginador").hide();
                    }
                });
            }
        }
        
        getPaginasCarpetas = function (pag, cantReg) {
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                data: {
                    cveJuzgado : $("#cveJuzgado").val(),
                    numero: $("#numero").val(),
                    anio: $("#anio").val(),
                    cveTipoCarpeta: $("#cveTipoCarpeta").val(),
                    activo: "S",
                    pagina: pag,
                    cantidadRegistros: cantReg,
                    accion : "getPaginas"
                },
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {  
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");

                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();

                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                        $("#cmbPaginacion").val(pag);
                    } else {
                        $("#advertencia").html(json.msg);
                        $("#advertencia").show("slide");
                        setTimeAlert("advertencia");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                }
            });
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
        
        function radicarNuevaCarpeta(){
            bootbox.dialog({
                message: "Al seleccionar esta opci&oacute;n se generar&aacute; una nueva carpeta judicial \u00bf Desea continuar?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            var idCarpeta = "";
                            cargarCarpetas(idCarpeta);
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
        }
        
        siguientePaso = function (paso) {
            if (paso == 1) {
                siguiente('divGeneral', 'sigejupe/carpetasjudiciales/frmCarpetasjudicialesTocas.php', 1);
                $('#liPaso1').find("a").addClass("active");
                $('#liPaso2').find("a").removeClass("active");
                $('#liPaso3').find("a").removeClass("active");
                $('#liPaso4').find("a").removeClass("active");
                $('#liPaso5').find("a").removeClass("active");
                $('#liPaso6').find("a").removeClass("active");
                $('#liPaso7').find("a").removeClass("active");
                $('#btnPaso1').show();
                $('#btnPaso2').hide();
                $('#btnPaso3').hide();
                $('#btnPaso4').hide();
                $('#btnPaso5').hide();
                $('#btnPaso6').hide();
                $('#btnPaso7').hide();
            } else if (paso == 2) {
                if (!validaPasoUno()) {
                    $('#liPaso2').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    $('#liPaso7').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/imputadoscarpetas/frmImputadoscarpetasTocas.php', 2);
                    $('#btnPaso2').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                    $('#btnPaso7').hide();
                }
            } else if (paso == 3) {
                if (!validaPasoUno() && !validaPasoDos()) {
                    $('#liPaso3').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    $('#liPaso7').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/ofendidoscarpetas/frmOfendidoscarpetasTocas.php', 3);
                    $('#btnPaso3').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                    $('#btnPaso7').hide();
                }
            } else if (paso == 4) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres()) {
                    $('#liPaso4').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    $('#liPaso7').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/apelantescarpetas/frmApelantesCarpetas.php', 4);
                    $('#btnPaso4').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso6').hide();
                    $('#btnPaso7').hide();
                }
            } else if (paso == 5) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro()) {
                    $('#liPaso5').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");
                    $('#liPaso7').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/delitoscarpetas/frmDelitoscarpetasTocas.php', 5);
                    $('#btnPaso5').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso6').hide();
                    $('#btnPaso7').hide();
                }
            } else if (paso == 6) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro() && !validaPasoCinco()) {
                    $('#liPaso6').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso5').find("a").removeClass("active");
                    $('#liPaso7').find("a").removeClass("active");
                    siguiente('divGeneral', 'sigejupe/impofedelcarpetas/frmImpofedelcarpetasTocas.php', 6);
                    $('#btnPaso6').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso5').hide();
                    $('#btnPaso7').hide();
                }
            } else if (paso == 7) {
                if (!validaPasoUno() && !validaPasoDos() && !validaPasoTres() && !validaPasoCuatro() && !validaPasoCinco() && !validaPasoSeis()) {
                    $('#liPaso7').find("a").addClass("active");
                    $('#liPaso1').find("a").removeClass("active");
                    $('#liPaso2').find("a").removeClass("active");
                    $('#liPaso3').find("a").removeClass("active");
                    $('#liPaso4').find("a").removeClass("active");
                    $('#liPaso6').find("a").removeClass("active");            
                    siguiente('divGeneral', 'sigejupe/victimascarpetas/frmVictimascarpetasTocas.php', 6);
                    $('#btnPaso7').show();
                    $('#btnPaso1').hide();
                    $('#btnPaso2').hide();
                    $('#btnPaso3').hide();
                    $('#btnPaso4').hide();
                    $('#btnPaso6').hide();
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
        }
        
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
        
        validaPasoCuatro = function() {
            var error = true;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/apelantescarpetas/ApelantescarpetasFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "validarApelantes",
                    idCarpetaJudicial: $("#idCarpetaJudicial").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    if (datos.estatus == 'ok') {
                        if (datos.totalCount != 0) {
                            error = false;
                        }
                    } else {
                        $("#div-advertencia").html("");
                        $("#div-advertencia").html(datos.mensaje);
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
        
        validaPasoCinco = function () {
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
        
        validaPasoSeis = function () {
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
    //        html += '<table class="table table-hover table-striped table-bordered">';
    //        html += '<thead>';
    //        html += '<th>#</th>';
    //        html += '<th>Estatus</th>';
    //        html += '<th>Carpeta Inv</th>';
    //        html += '<th>NUC</th>';
    //        html += '<th>N&uacute;mero</th>';
    //        html += '<th>A&ntilde;o</th>';
    //        html += '<th>Tipo Carpeta</th>';
    //        html += '<th>Etapa Procesal</th>';
    //        html += '<th>Fecha Registro</th>';
    //        html += '<th>Tribunal</th>';
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
                data: {
                    accion: 'distrito'
                },
                dataType: 'json',
                beforeSend: function(objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        if (data.totalCount > 0) {
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control text-uppercase" title="Tribunal" data-toggle="tooltip" tabIndex="tabIndex" onChange="cargaTipoCarpeta()" >';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                if ( data.data[index].cveTipojuzgado == '5' || data.data[index].cveTipojuzgado == '8' ) {
                                    html += "<option value='" + data.data[index].cveJuzgado + "' data-tipoJuzgado='" + data.data[index].cveTipojuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                                }
                            }
                            html += "</select>";
                            ToggleLoading(2);
                        } else {
                            html = "Sin resultados";
                            ToggleLoading(2);
                        }
                        $('#listaJuzgados').html(html);
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
            var cveTipoJuzgado = $("#cveJuzgado :selected").attr("data-tipoJuzgado");
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
                            html += '<select name="cveTipoCarpeta" id="cveTipoCarpeta" class="form-control text-uppercase" title="Tipo de Carpeta" data-toggle="tooltip" tabIndex="tabIndex" onChange="cambiarEtiqueta()">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < result.totalCount; index++) {
                                if ( result.data[index].cveTipoCarpeta == 6 && (cveTipoJuzgado == 5 || cveTipoJuzgado == 8) ) {
                                    html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                    
                                }
                            }
                            html += "</select>";
                            ToggleLoading(2);
                        } else {
                            html = "Sin resultados";
                            ToggleLoading(2);
                        }
                        $('#listaCarpetas').html(html);
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
        
        function consultarJuzgadores(){
            var cveJuzgado = $("#cveJuzgado").val();
            if (cveJuzgado != ""){
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                    data: {
                    cveJuzgado : cveJuzgado,
                    activo: 'S',
                    accion : "listaJuzgadores"},
                    async: true,
                    dataType: "html",
                    beforeSend: function(objeto) {
                        ToggleLoading(1);
                    },
                    success: function(datos){
                        try{
                            var result = eval("(" + datos + ")");
                            var html = "";
                            if(result.totalCount > 0){
                                html += '<select name="idJuzgador" id="idJuzgador" class="form-control">';
                                html += '<option value="">Selecciona una opci&oacute;n</option>';
                                for(var n = 0; n < result.totalCount; n++){
                                    html += '<option value="' + result.data[n].idJuzgador + '">' + result.data[n].nombre + ' ' + result.data[n].paterno + ' ' + result.data[n].materno + '</option>';
                                }
                                html += '</select>';
                                $("#listaJuzgadores").html(html);
                                ToggleLoading(2);
                            } else{
                                html = "";
                                $("#listaJuzgadores").html(html);
                                ToggleLoading(2);
                            }
                            
                        } catch(e){
                            ToggleLoading(2);
                        }
                    },
                    error: function(objeto, quepaso, otroobj) {
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                    }
                });
            }
        }
        
        function validar(){
            if($("#idJuzgador").val() == ""){
                $("#advertencia").html('<span>Debe indicar un nuevo propietario para la carpeta!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if($("#idJuzgadorCarpeta").val() == "" || $("#idJuzgadorCarpeta").val() == 0){
                $("#advertencia").html('<span>La carpeta no tiene alg&uacute;n propietario asignado, favor de verificar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            }
            else {
                return true;
            }
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
            //cargaTipoCarpeta();
            $("#numero").validaCampo('0123456789');
            $("#anio").validaCampo('0123456789');
            
            var permisos = obtenerPermisosFormulario("HERRAMIENTAS", "ACTUALIZAR TOCAS");
            console.log(permisos);
            if(permisos.Read == 'N'){
                $('.consulta').prop('disabled',true);
            }
            
            cargaCarpetaArbol();
        });
    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>