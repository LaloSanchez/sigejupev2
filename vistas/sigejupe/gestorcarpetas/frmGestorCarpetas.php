<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
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
        #divButtonFlechaDerecha{
            width : 40px; 
            height : 40px;
            background: url('img/flechaDerecha.png') no-repeat;
            cursor: pointer;
        }
        #divButtonFlechaIzquierda{
            width : 40px; 
            height : 40px;
            background: url('img/flechaIzquierda.png') no-repeat;
            cursor: pointer;
        } 
    </style>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Gestor de Carpetas
            </h5>
        </div>
        <div class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <input type="hidden" id="idOrigen">
                <input type="hidden" id="idPadreOrigen">
                <input type="hidden" id="idDestino">
                <input type="hidden" id="idPadreDestino">
                <div class="col-xs-5" style="border: 3px solid #5B9C8D;" >
                    <div class="col-lg-5" style="text-align: center;">
                        <label class="control-label" for="txtNumero">N&uacute;mero</label>
                        <input type="text" class="form-control" id="txtNumero" name="txtNumero">
                    </div>
                    <div class="col-lg-5" style="text-align: center;">
                        <label class="control-label" for="txtAnio">A&ntilde;o</label>
                        <input type="text" class="form-control" id="txtAnio" name="txtAnio" maxlength="4">
                    </div>
                    <div class="col-lg-10" style="text-align: center;">
                        <label class="control-label" for="cmbJuzgadoOrigen">Juzgado</label>
                        <select id="cmbJuzgadoOrigen" class="form-control" name="cmbJuzgadoOrigen" onchange="tipoCarpetaOrigen()">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                    <div class="col-lg-10" style="text-align: center;">
                        <label class="control-label" for="cmbTipoCarpetaOrigen">Tipo Carpeta</label>
                        <select id="cmbTipoCarpetaOrigen" class="form-control" name="cmbTipoCarpetaOrigen">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                    <div><br><br></div>
                    <div class="col-lg-10" style="text-align: center;">
                        <input type="submit" class="btn btn-primary" id="inputConsultaOrigen" value="Consultar" onclick="consultarActuaciones(1);"> 
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar(1);"> 
                    </div>
                </div>
                <div class="col-xs-2" ></div>
                <div class="col-xs-5" style="border: 3px solid #5B9C8D;" >
                    <div class="col-lg-5" style="text-align: center;">
                        <label class="control-label" for="txtNumero">N&uacute;mero</label>
                        <input type="text" class="form-control" id="txtNumeroDestino" name="txtNumeroDestino">
                    </div>
                    <div class="col-lg-5" style="text-align: center;">
                        <label class="control-label" for="txtAnio">A&ntilde;o</label>
                        <input type="text" class="form-control" id="txtAnioDestino" name="txtAnioDestino" maxlength="4">
                    </div>
                    <div class="col-lg-10" style="text-align: center;">
                        <label class="control-label" for="cmbJuzgadoDestino">Juzgado</label>
                        <select id="cmbJuzgadoDestino" class="form-control" name="cmbJuzgadoDestino" onchange="tipoCarpetaDestino()">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                    <div class="col-lg-10" style="text-align: center;">
                        <label class="control-label" for="cmbTipoCarpetaDestino">Tipo Carpeta</label>
                        <select id="cmbTipoCarpetaDestino" class="form-control" name="cmbTipoCarpetaDestino">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                    <div><br><br></div>
                    <div class="col-lg-10" style="text-align: center;">
                        <input type="submit" class="btn btn-primary" id="inputConsultaDestino" value="Consultar" onclick="consultarActuaciones(2);"> 
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar(2);"> 
                    </div>
                </div>
                <div class="col-xs-5" style="border: 3px solid #5B9C8D;" >
                    <div class="col-xs-5" style="width: 100% !important;">
                        <label class="control-label">&Aacute;rbol Origen</label>
                        <div id="jstreeC" style="max-height: 400px; overflow: scroll;">
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-2" >
                    <div class="col-lg-12" style="text-align: center;"><div id="divButtonFlechaDerecha" onclick="applyChanges(1)" style="margin: 0 auto;"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></div></div>
                    <div class="col-lg-12" style="text-align: center;"><br><br><br></div>
                    <div class="col-lg-12" style="text-align: center;"><div id="divButtonFlechaIzquierda" onclick="applyChanges(2)" style="margin: 0 auto;"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span></div></div>
                </div>
                <div class="col-xs-5" style="border: 3px solid #5B9C8D;" >
                    <div class="col-xs-5" style="width: 100% !important;">
                        <label class="control-label">&Aacute;rbol Destino</label>
                        <div id="jstreeC2" style="max-height: 400px; overflow: scroll;">
                            
                        </div>
                    </div>
                </div>
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

            </div>         
        </div>

        <script type="text/javascript">

            var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
            var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
            var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;


            var createRecord = 'N';
            var readRecord = 'N';
            var updateRecord = 'N';
            var deleteRecord = 'N';
            
            tipoCarpetaOrigen = function() {
                var cveTipoJuzgado = $("#cmbJuzgadoOrigen :selected").attr("data-tipoJuzgadoOrigen");
                var strDatos = "accion=consultar";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                    data: strDatos,
                    async: false,
                    dataType: "html",
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")"); 
                        if (json.totalCount > 0) {
                            $("#cmbTipoCarpetaOrigen").empty();
                            $("#cmbTipoCarpetaOrigen").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                            for (var i = 0; i < json.totalCount; i++) {
                                switch(cveTipoJuzgado){
                                    case "1": // tipo de juzgado de control
                                        if(json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){
                                            $("#cmbTipoCarpetaOrigen").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "2": // tipo de juzgado juicio
                                        if(json.data[i].cveTipoCarpeta == "3" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){
                                            $("#cmbTipoCarpetaOrigen").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "3": // tipo de juzgado ejecucion
                                        if(json.data[i].cveTipoCarpeta == "5" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){
                                            $("#cmbTipoCarpetaOrigen").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "4": // tipo de juzgado tribunal
                                        if(json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){
                                            $("#cmbTipoCarpetaOrigen").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "5": 
                                        break;
                                }    
                            }
                                
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion:\n\n" + quepaso, 'error');
                    }
                });
            };
            
            tipoCarpetaDestino = function() {
                var cveTipoJuzgado = $("#cmbJuzgadoDestino :selected").attr("data-tipoJuzgadoDestino");
                var strDatos = "accion=consultar";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                    data: strDatos,
                    async: false,
                    dataType: "html",
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")"); 
                        if (json.totalCount > 0) {
                            $("#cmbTipoCarpetaDestino").empty();
                            $("#cmbTipoCarpetaDestino").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                            for (var i = 0; i < json.totalCount; i++) {
                                switch(cveTipoJuzgado){
                                    case "1": // tipo de juzgado de control
                                        if(json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8" ){ 
                                            $("#cmbTipoCarpetaDestino").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "2": // tipo de juzgado juicio
                                        if(json.data[i].cveTipoCarpeta == "3" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ 
                                            $("#cmbTipoCarpetaDestino").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "3": // tipo de juzgado ejecucion
                                        if(json.data[i].cveTipoCarpeta == "5" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){
                                            $("#cmbTipoCarpetaDestino").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "4": // tipo de juzgado tribunal
                                        if(json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){
                                            $("#cmbTipoCarpetaDestino").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "5": 
                                        break;
                                }    
                            }
                                
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion:\n\n" + quepaso, 'error');
                    }
                });
            };
            
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
                                $("#cmbTipoCarpetaOrigen").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                $("#cmbTipoCarpetaDestino").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                            }
                        }
    //                    $('#divCmbRelaciones').hide();

                    },
                    error: function (objeto, quepaso, otroobj) {
                        //alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            };

            comboJuzgados = function () {
                $.ajax({
                    type: "POST",
                    //url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                    url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "distrito", obligaPermiso: "false"},
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        try {
                            $('#cmbJuzgados').empty();
                            $('#cmbJuzgados').append('<option value="">Seleccione una opci\u00f3n</option>');
                            if (datos.totalCount > 0) {
                                $.each(datos.data, function (count, object) {
                                    $('#cmbJuzgadoOrigen').append('<option value="' + object.cveJuzgado + '" data-tipoJuzgadoOrigen="' + object.cveTipojuzgado + '">' + object.desJuzgado + '</option>');
                                    $('#cmbJuzgadoDestino').append('<option value="' + object.cveJuzgado + '" data-tipoJuzgadoDestino="' + object.cveTipojuzgado + '">' + object.desJuzgado + '</option>');
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


            function fillCombo(selectIds, facade, value, description) {
                $.each(selectIds, function (k, v) {
                    $('#' + v).empty();
                });
                $.post('../fachadas/sigejupe/' + facade + '.Class.php',
                        {
                            activo: 'S',
                            accion: 'consultar'
                        },
                function (response) {
                    var object = eval("(" + response + ")");
                    var options = '<option value="0">Seleccione una opci&oacute;n</option>';
                    if (object.totalCount > 0) {
                        $.each(object.data, function (k, v) {
                            options += '<option value="' + v[value] + '">' + v[description] + '</option>';
                        });
                        $.each(selectIds, function (k, v) {
                            $('#' + v).append(options);
                        });
                    } else {
                        //showMessage('NO EXISTEN REGISTROS','warning');
                        var options = '<option value="0">Seleccione una opci&oacute;n</option>';
                    }
                });
                return;
            }

            /**************************** Consulta de causas y actuaciones *************************************/
            consultarActuaciones = function(cve){
            var numero = "";
            var anio = "";
            var cveJuzgado = "";
            var tipoCarpeta = "";
            if ( parseInt(cve) == 1 ) {
                numero = $("#txtNumero").val();
                anio = $("#txtAnio").val();
                cveJuzgado = $("#cmbJuzgadoOrigen").val();
                tipoCarpeta = $("#cmbTipoCarpetaOrigen").val();
            } else {
                numero = $("#txtNumeroDestino").val();
                anio = $("#txtAnioDestino").val();
                cveJuzgado = $("#cmbJuzgadoDestino").val();
                tipoCarpeta = $("#cmbTipoCarpetaDestino").val();
            }
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/arbol/ArbolFacade.Class.php",
                data: {
                    accion: "getFullTree",
                    cveJuzgado: cveJuzgado,
                    numero: numero,
                    anio: anio,
                    nuc: "",
                    numCarpInv: "",
                    cveTipoCarpeta: tipoCarpeta
                },
                //async: false,
                dataType: "json",
                beforeSend: function () {
                    if ( parseInt(cve) == 1 ) {
                        $("#jstreeC").empty();
                    } else {
                        $("#jstreeC2").empty();
                    }
                    //$("#loadTree").show();
                },
                success: function (datos) {
                    switch (datos.estatus) {
                        case "ok" :
                            //$('#divTree').html('');
                            var total = datos.resultados.length;
                            var content = '<div class="table-responsive">';
                            var obj = "";
                            if ( parseInt(cve) == 1 ) {
                                obj = "jstreeC";
                            } else {
                                obj = "jstreeC2";
                            }
                            
                            $('#' + obj).jstree("destroy");
                            $('#' + obj).jstree({
                                'core': {
                                    'data': datos.resultados,
                                    'themes': {"stripes": true},
                                    'check_callback': true
                                },
                                'plugins': ["search", "wholerow", "contextmenu", "sort"],
                                'types': {
                                    "file": {
                                        "icon": "jstree-file"
                                    }
                                },
                                'search': {
                                    "show_only_matches": true
                                },
                                'contextmenu': {
                                    'items': ''
                                },
                                'sort': function (a, b) {
                                    return this.get_node(a).li_attr.dataFechaOrden < this.get_node(b).li_attr.dataFechaOrden ? 1 : -1;
                                }
                            }).on('ready.jstree', function (e, data) {
                                // la carpeta seleccionada sera aquella por la que se inicio la busqueda, marcada con la clase "carpetaInicial"
                                var li_inicial = $('#' + obj).find('.carpetaInicial');
                                $('#' + obj).jstree('select_node', $(li_inicial));
                                $('#' + obj).jstree('open_node', $(li_inicial));
                                // colocar id en hddIdReferenciaEnviar
                                var hddidReferencia = $('#' + obj).find('ul > li.carpetaInicial').attr('id');
                                var hddcveTipoCarpeta = $('#' + obj).find('ul > li.carpetaInicial').attr('datacvetipocarpeta');
                                $('#hddIdReferenciaEnviar').val(hddidReferencia);
                                //alert(hddidReferencia);
                                $('#hddCveTipoCarpetaEnviar').val(hddcveTipoCarpeta);
                                //alert(hddcveTipoCarpeta);
                            });
                            // input de busqueda en arbol
                            var to = false;
                            $('#searchArbol').keyup(function () {
                                if (to) {
                                    clearTimeout(to);
                                }
                                to = setTimeout(function () {
                                    var v = $('#searchArbol').val();
                                    $('#' + obj).jstree(true).search(v);
                                }, 250);
                            });
                            $("#searchArbolContent").show();
                            break;
                        case "fail" :
                            if ( parseInt(cve) == 1 ) {
                                $("#jstreeC").html("No se encontraron resultados");
                            } else {
                                $("#jstreeC2").html("No se encontraron resultados");
                            }
                            break;
                    }
                }, complete: function () {
                    //$("#loadTree").hide();
                },
                error: function (objeto, quepaso, otroobj) {
                }
            });
        };
        
        setCarpetaOrigen = function (id, cveTipoCarpeta) {
            return true;
        };
        
        loadFormActuacion = function (url, idActuacion, idReferencia, cveTipoCarpeta, carpetaPadre) {
            return true;
        };

            consultaDetalle = function (idMedidaCautelar) {
                $("#" + idMedidaCautelar).show();
            };
            ocultadetalle = function (idMedidaCautelar) {
                $("#" + idMedidaCautelar).hide();
            };

            limpiar = function (cve) {
                if ( cve === 1 ) {
                    $("#txtNumero").val("");
                    $("#txtAnio").val("");
                    $("#cmbJuzgadoOrigen").val("0");
                    $("#cmbTipoCarpetaOrigen").val("0");
                    $("#jstreeC").jstree("destroy");
                    $("#jstreeC").empty();
                } else {
                    $("#txtNumeroDestino").val("");
                    $("#txtAnioDestino").val("");
                    $("#cmbJuzgadoDestino").val("0");
                    $("#cmbTipoCarpetaDestino").val("0");
                    $("#jstreeC2").jstree("destroy");
                    $("#jstreeC2").empty();
                }
            }; 

            function obtenerPermisos() {
                var cveUsuarioSistema = cveUsuarioSesion;
                $.get("../archivos/" + cveUsuarioSistema + ".json",
                        function (response) {
                            //                    alert(response.perfiles[0].totPerfiles);
                            //                    alert(cvePerfilSesion);
                            for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                                if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                                    //alert(response.perfiles[0].perfil[i].cvePerfil+"-"+"perfil encontrado..");
                                    $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                        //alert(vnombre.nomFormulario);
                                        if (vnombre.nomFormulario == "CONSULTAS") {
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
            }
            ;

            function changeFrm(frm) {
    //            alert(frm);
            }
            ;

            function applyChanges(direccion) {

                var status = true;
                var mensaje = "";

                try {
                    if (direccion === 1) {
                        var idOrigen = $("#jstreeC").jstree().get_top_selected();
                        var cveTipoCarpetaOrigen = $("#" + idOrigen).attr("datacvetipocarpeta");
                        //alert(cveTipoCarpetaOrigen);
                        var idPadreOrigen = "";
                        var tipoActuacionOrigen = "";
                        var tipoActuacionDestino = "";
                        var idDestino = $("#jstreeC2").jstree().get_top_selected();
                        var cveTipoCarpetaDestino = $("#" + idDestino).attr("datacvetipocarpeta");
                        //alert(cveTipoCarpetaDestino);
                        var idPadreDestino = "";
                        
                        var strOrigen = idOrigen.toString().indexOf('_');
                        console.log(strOrigen);
                        if ( strOrigen > -1 ) {
                            idPadreOrigen = $("#" + idOrigen).attr("dataidcarpeta");
                            tipoActuacionOrigen = $("#" + idOrigen).attr("dataactuacionname");
                            var idElemento = idOrigen.toString().split('_');
                            idOrigen = idElemento[0];
                        } else {
                            idPadreOrigen = $("#" + idOrigen).attr("id");
                        }
                        
                        console.log(idPadreOrigen);
                        var strDestino = idDestino.toString().indexOf('_');
                        console.log(strDestino);
                        if ( strDestino > -1 ) {
                            idPadreDestino = $("#" + idDestino).attr("dataidcarpeta");
                            tipoActuacionDestino = $("#" + idDestino).attr("dataactuacionname");
                            var idElementoDestino = idDestino.toString().split('_');
                            idDestino = idElementoDestino[0];
                        } else {
                            idPadreDestino = $("#" + idDestino).attr("id");
                        }
    //                    var idPadreOrigen = $("#" + idOrigen).attr("id");
    //                    var idPadreDestino = $("#" + idDestino).attr("id");
                    } else if (direccion === 2) {
                        var idOrigen = $("#jstreeC2").jstree().get_top_selected();
                        var cveTipoCarpetaOrigen = $("#" + idOrigen).attr("datacvetipocarpeta");
                        //alert(cveTipoCarpetaOrigen);
                        var idPadreOrigen = "";
                        var idDestino = $("#jstreeC").jstree().get_top_selected();
                        var cveTipoCarpetaDestino = $("#" + idDestino).attr("datacvetipocarpeta");
                        //alert(cveTipoCarpetaDestino);
                        var idPadreDestino = "";
                        var strOrigen = idOrigen.toString().indexOf('_');
                        console.log(strOrigen);
                        if ( strOrigen > -1 ) {
                            idPadreOrigen = $("#" + idOrigen).attr("dataidcarpeta");
                            tipoActuacionOrigen = $("#" + idOrigen).attr("dataactuacionname");
                            var idElemento = idOrigen.toString().split('_');
                            idOrigen = idElemento[0];
                        } else {
                            idPadreOrigen = $("#" + idOrigen).attr("id");
                        }
                        console.log(idPadreOrigen);
                        var strDestino = idDestino.toString().indexOf('_');
                        console.log(strDestino);
                        if ( strDestino > -1 ) {
                            idPadreDestino = $("#" + idDestino).attr("dataidcarpeta");
                            tipoActuacionDestino = $("#" + idDestino).attr("dataactuacionname");
                            var idElementoDestino = idDestino.toString().split('_');
                            idDestino = idElementoDestino[0];
                        } else {
                            idPadreDestino = $("#" + idDestino).attr("id");
                        }
    //                    var idPadreDestino = $("#" + idDestino).attr("id");
    //                    var idPadreOrigen = $("#" + idOrigen).attr("id");
                    }
                    //alert(idOrigen);
                    //alert(idDestino);
                    console.log("idActuacionOrigen: " + tipoActuacionOrigen);
                    console.log("idActuacionDestino: " + tipoActuacionDestino);
                    idOrigen = $.trim(idOrigen);
                    idDestino = $.trim(idDestino);
                    idPadreOrigen = $.trim(idPadreOrigen);
                    idPadreDestino = $.trim(idPadreDestino);
                    var idTipoOrigen = 0;
                    var idTipoDestino = 0;
                    if (idOrigen === idPadreOrigen) {
                        idTipoOrigen = 1; 
                    } else if (idOrigen !== idPadreOrigen) {
                        idTipoOrigen = 2; 
                    }

                    if (idDestino === idPadreDestino) {
                        idTipoDestino = 1; 
                    } else if (idDestino !== idPadreDestino) {
                        idTipoDestino = 2; 
                    }
                    
                    if (idPadreOrigen === "0") {
                        idPadreOrigen = idOrigen;
                    }

                    if (idPadreDestino === "0") {
                        idPadreDestino = idDestino;
                    }

                    if (idOrigen === "0" || idOrigen === "" || idOrigen === null) {
                        status = false;
                        mensaje += "Seleccione Registo del Arbol Origen<br>";
                    }

                    if (idDestino === "0" || idDestino === "" || idDestino === null) {
                        status = false;
                        mensaje += "Seleccione Registo del Arbol Destino<br>";
                    }
                    if ( parseInt(cveTipoCarpetaOrigen) > 5 && parseInt(idTipoOrigen) === 1 ) {
                        status = false;
                        mensaje += "Movimiento no permitido<br>";
                    }
                    if ( parseInt(cveTipoCarpetaDestino) > 5 && parseInt(idTipoOrigen) === 1 ) {
                        status = false;
                        mensaje += "Movimiento no permitido<br>";
                    }
                } catch (e) {
                    status = false;
                    mensaje += "Arbol(es) no Generado(s)</br>";
                }

                if (status) {
                    var tipoOrigen = 0;
                    var tipoDestino = 0;
                    if (idOrigen === idPadreOrigen) {
                        tipoOrigen = 1; //cuaderno - principal
                    } else if (idOrigen !== idPadreOrigen) {
                        tipoOrigen = 2; //hoja
                    }

                    if (idDestino === idPadreDestino) {
                        tipoDestino = 1; //cuaderno - principal
                    } else if (idDestino !== idPadreDestino) {
                        tipoDestino = 2; //hoja 
                    }

                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/gestorcarpetas/GestorCarpetasFacade.Class.php",
                        data: {action: "cambiaDatos",
                            idOrigen: idOrigen,
                            idPadreOrigen: idPadreOrigen,
                            tipoOrigen: tipoOrigen,
                            idDestino: idDestino,
                            idPadreDestino: idPadreDestino,
                            tipoDestino: tipoDestino,
                            tipoActuacionOrigen: tipoActuacionOrigen,
                            tipoActuacionDestino: tipoActuacionDestino,
                            cveTipoCarpetaOrigen: cveTipoCarpetaOrigen,
                            cveTipoCarpetaDestino: cveTipoCarpetaDestino
                        },
                        async: true,
                        dataType: "html",
                        global: false,
                        beforeSend: function (objeto) {
                            $("#applyChanges").hide();
                        },
                        success: function (datos) {
                            var json = eval("(" + datos + ")"); //Parsear JSON
                            if (json.type == "OK") {
                                $(document).scrollTop(1000);
                                //getJsonTreeCoreCronologico();
                                //getJsonTreeCoreCronologico2();
                                $("#divAlertSucces").html(json.text).fadeIn('slow').delay(4000).fadeOut('slow');
                                $("#inputConsultaOrigen").trigger("click");
                                $("#inputConsultaDestino").trigger("click");
                            } else {
                                $(document).scrollTop(1000);
                                $("#divAlertWarning").html(json.text).fadeIn('slow').delay(4000).fadeOut('slow');
                            }
                            $("#applyChanges").show();
                        },
                        error: function (objeto, quepaso, otroobj) {
                            $(document).scrollTop(200);
                            $("#divAlertDanger").html(quepaso).fadeIn('slow').delay(4000).fadeOut('slow');
                            $("#applyChanges").show();
                        }

                    });
                } else {
                    $(document).scrollTop(1000);
                    $("#divAlertWarning").html('<span>' + mensaje + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                }
            }
            ;

            (function (a) {
                a.fn.validaCampo = function (b) {
                    a(this).on({keypress: function (a) {
                            var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                            (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                        }})
                }
            })(jQuery);



            $(function () {
                $("#txtNumero").validaCampo('0123456789');
                $("#txtAnio").validaCampo('0123456789');
                cargaTipoCarpeta();
                comboJuzgados();
    //            obtenerPermisos();
            });



        </script> 
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>