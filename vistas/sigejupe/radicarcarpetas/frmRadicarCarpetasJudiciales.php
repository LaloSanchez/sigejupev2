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
                Radicar Carpetas Judiciales
            </h5>
        </div>
        <div class="panel-body">

            <div class="form-horizontal">
                <input type="hidden" id="idCarpetaJudicial" name="idCarpetaJudicial">
                <input type="hidden" id="idReferencia" name="idReferencia" value="<?php echo $idCarpeta; ?>">
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

        siguiente = function (div, url, paso) {
            $.post(url, {idCarpetajudicial: $('#idCarpetaJudicial').val()}, function (htmlexterno) {
                $("#" + div).html(htmlexterno);
            });
        };

        function cargarCarpetas(idCarpetaJudicial) {
            //alert("id Carpeta judicial: " + idCarpetaJudicial);
            $("#idCarpetaJudicial").val(idCarpetaJudicial);
            //changeDivFormCarpetas(2);
            siguientePaso(1);
        }

        siguientePaso = function (paso) {
            if (paso == 1) {
                siguiente('divGeneral', 'sigejupe/carpetasjudiciales/frmRadicarCarpetaJudicial.php', 1);
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

        function clean() {
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

        function listaJuzgados() {

            var ruta_juzgados = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            $.ajax(ruta_juzgados, {
                type: 'POST',
                data: {accion: 'distrito', obligaPermiso: 'false'},
                dataType: 'json',
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (data) {
                    try {
                        var html = "";
                        //console.log(data.data);
                        if (data.totalCount > 0) {
                            html += '<select name="cveJuzgado" id="cveJuzgado" class="form-control text-uppercase" title="Juzgado" data-toggle="tooltip" tabIndex="tabIndex" onChange="cargaTipoCarpeta()" >';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            for (var index = 0; index < data.totalCount; index++) {
                                //if ( data.data[index].cveCondicion == 1 ) {
                                html += "<option value='" + data.data[index].cveJuzgado + "' data-tipoJuzgado='" + data.data[index].cveTipojuzgado + "'>" + data.data[index].desJuzgado + "</option>";
                                //}
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
    //                            if ( result.data[index].cveTipoCarpeta < 7 ) {
    //                                html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
    //                                
    //                            }
                                switch (cveTipoJuzgado) {
                                    case "1": // tipo de juzgado de control
                                        if (result.data[index].cveTipoCarpeta == "1" || result.data[index].cveTipoCarpeta == "2") {
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                        break;
                                    case "2": // tipo de juzgado juicio
                                        if (result.data[index].cveTipoCarpeta == "3") {
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                        break;
                                    case "3": // tipo de juzgado ejecucion
                                        if (result.data[index].cveTipoCarpeta == "5") {
                                            html += "<option value='" + result.data[index].cveTipoCarpeta + "'>" + result.data[index].desTipoCarpeta + "</option>";
                                        }
                                        break;
                                    case "4": // tipo de juzgado tribunal
                                        if (result.data[index].cveTipoCarpeta == "4") {
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

        function cambiarEtiqueta() {
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

        function capitalize(text) {
            text = text.toLowerCase();
            var tmpText = text.split(" ");
            var result = "";
            for (var n = 0; n < tmpText.length; n++) {
                var j = tmpText[n].charAt(0).toUpperCase();
                tmpText[n] = j + tmpText[n].substr(1);
            }
            result = tmpText.join(" ");
            return result;
        }

        function consultarJuzgadores() {
            var cveJuzgado = $("#cveJuzgado").val();
            if (cveJuzgado != "") {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/programacionjuzgadores/ProgramacionjuzgadoresFacade.Class.php",
                    data: {
                        cveJuzgado: cveJuzgado,
                        activo: 'S',
                        accion: "listaJuzgadores"},
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        ToggleLoading(1);
                    },
                    success: function (datos) {
                        try {
                            var result = eval("(" + datos + ")");
                            var html = "";
                            if (result.totalCount > 0) {
                                html += '<select name="idJuzgador" id="idJuzgador" class="form-control">';
                                html += '<option value="">Selecciona una opci&oacute;n</option>';
                                for (var n = 0; n < result.totalCount; n++) {
                                    html += '<option value="' + result.data[n].idJuzgador + '">' + result.data[n].nombre + ' ' + result.data[n].paterno + ' ' + result.data[n].materno + '</option>';
                                }
                                html += '</select>';
                                $("#listaJuzgadores").html(html);
                                ToggleLoading(2);
                            } else {
                                html = "";
                                $("#listaJuzgadores").html(html);
                                ToggleLoading(2);
                            }

                        } catch (e) {
                            ToggleLoading(2);
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#info").hide();
                        $(".limpia").show();
                        $(".consulta").show();
                    }
                });
            }
        }

        function validar() {
            if ($("#idJuzgador").val() == "") {
                $("#advertencia").html('<span>Debe indicar un nuevo propietario para la carpeta!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#idJuzgadorCarpeta").val() == "" || $("#idJuzgadorCarpeta").val() == 0) {
                $("#advertencia").html('<span>La carpeta no tiene alg&uacute;n propietario asignado, favor de verificar</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            }
            else {
                return true;
            }
        }

        formatoFecha = function (campo) {
            var fecha = campo.split(' ');
            if (fecha.length > 1) {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0] + " " + fecha[1];
            } else {
                var f = fecha[0].split('-');
                return f[2] + "/" + f[1] + "/" + f[0];
            }
        };

        cargaCarpetaArbol = function () {
            if ($("#idReferencia").val() != "") {
                //alert("Entra: " + $("#idReferencia").val());
                $("#btn-regresar").hide();
                cargarCarpetas($("#idReferencia").val());
            }
    //        else {
    //            alert("No entra: " + $("#idReferencia").val());
    //        }
        };

        $(document).ready(function () {
            listaJuzgados();
            //cargaTipoCarpeta();
            $("#numero").validaCampo('0123456789');
            $("#anio").validaCampo('0123456789');

            var permisos = obtenerPermisosFormulario("HERRAMIENTAS", "RADICAR CARPETAS JUDICIALES");
            console.log(permisos);
            if (permisos.Read == 'N') {
                $('.consulta').prop('disabled', true);
            }
            var idCarpeta = "";
            cargarCarpetas(idCarpeta);
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