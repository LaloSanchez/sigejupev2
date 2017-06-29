
<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $SysCveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
    $SysNumEmpleado = $_SESSION['numEmpleado'];
    $SysCvePerfil = $_SESSION['cvePerfil'];
    $SysCveAdscripcion = $_SESSION['cveAdscripcion'];
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
    <input type="hidden" id="cveUsuarioSistema" value="<?= $SysCveUsuarioSistema ?>"/>
    <input type="hidden" id="SysCvePerfil" value="<?= $SysCvePerfil ?>"/>
    <input type="hidden" id="SysCveAdscripcion" value="<?= $SysCveAdscripcion ?>"/>
    <input type="hidden" id="SysNumEmpleado" value="<?= $SysNumEmpleado ?>"/>



    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Reasignaci&oacute;n de tocas
            </h5>
        </div>
        <div class="panel-body">
            <div id="divConsulta" >
                <div class="panel-heading">
                    <h5 class="panel-title" id="consultaTitulo">
                        Reasignaci&oacute;n de toca / Busqueda
                    </h5>
                </div>
                <div class="panel-body">
                    <div class="form-horizontal">

                        <div class="form-group">
                            <label  class="control-label col-md-3">Sala:</label>
                            <div class="col-md-9">
                                <select class="form-control " name="cmbTipoJuzgadoToca" id="cmbTipoJuzgadoToca" onchange="cargaTipoCarpeta()"></select>
                            </div>                                
                        </div>
                        <div class="form-group"> 
                            <label class="control-label col-md-3">Tipo Carpeta</label>
                            <div class="col-md-9"><select id="cmbTipoCarpeta" class="form-control"><option value="0">Seleccione una opción</option></select></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3" id="label_actam_text2">No. toca</label>
                            <div class="col-md-9">
                                <input type="text" id="numeroConsulta" maxlength="4" placeholder="N&Uacute;MERO" val="" class="form-inline numerico">
                                /
                                <input type="text" id="anioConsulta" maxlength="4" placeholder="A&Ntilde;O" val="" class="form-inline numerico">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fecha inicio</label>
                            <div class="col-md-2">
                                <input type="text" id="fechaRangoInicial" placeholder="dd/mm/aaaa" class="form-control fecha">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Fecha fin</label>
                            <div class="col-md-2">
                                <input type="text" id="fechaRangoFinal" placeholder="dd/mm/aaaa" class="form-control fecha">
                            </div>
                        </div>

                    </div>
                    <div class="form-group"> 
                        <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para consultar Reasignaci&oactuten;n." data-position='top'>                                        
                            <input type="submit" class="btn btn-primary btn-adaptar" value="Buscar" onclick="consultaTocas()" id=""/>
                        </div>
                        <div class="col-md-2 botonesAdaptar botonesArbol" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>                                        
                            <input type="submit" class="btn btn-primary btn-adaptar" value="Limpiar" onclick="limpiarCampos()" id="btn_auto_clean"/>
                        </div>
                    </div>

                </div>

            </div>
            <div id="divTablaConsulta" style="display:none">

                <div class="panel-heading">
                    <h5 class="panel-title" id="consultaTitulo">
                        Reasignaci&oacute;n de toca / Consulta
                    </h5>
                </div>
                <div class="panel-body">
                    <input type="submit" class="btn btn-primary" style="float:left" value="Regresar" onclick="regresarBuscar();">
                    <div class="form-group col-xs-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>
                    <div id="Paginacion" class="form-group col-xs-2" >
                        <label class="control-label">Cambiar a la p&aacute;gina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultaTocas()">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultaTocas();
                                resetPagina()">
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="40">40</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </div>

                    <hr>

                    <div id="tablaConsulta"></div>
                </div>
            </div>
            <div class="form-group">
                <div id="divAdvertencia" class="alert alert-warning alert-dismissable textCorrection" style="display: none">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong id="strAdvertencia"></strong> 
                </div>
                <div id="divCorrecto" class="alert alert-success alert-dismissable textCorrection" style="display: none">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong id="strCorrecto"></strong> 
                </div>
                <div id="divError" class="alert alert-danger alert-dismissable textCorrection" style="display: none">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong id="strError"></strong>
                </div>
                <div id="divInformacion" class="alert alert-info alert-dismissable textCorrection" style="display: none">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <strong id="strInformacion"></strong>
                </div>
            </div>	
            <div class="form-group">
                <div id="divAlertWarning" class="alert alert-warning alert-dismissable" style="display:none;">
                    <strong>Advertencia!</strong> Mensaje
                </div>
                <div id="divAlertSucces" class="alert alert-success alert-dismissable" style="display:none;">
                    <strong>Correcto!</strong> Mensaje
                </div>
                <div id="divAlertDager" class="alert alert-danger alert-dismissable" style="display:none;">
                    <strong>Error!</strong> Mensaje
                </div>
                <div id="divAlertInfo" class="alert alert-info alert-dismissable" style="display:none;">
                    <strong>Informaci&oacute;n!</strong> Mensaje
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="modalReasignacion">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Reasignaci&oacute;n de toca</h4>
                </div>
                <div class="modal-body">
                    <div class="text-align-center">
                        <input type="hidden" id="hiddenIdReferencia" value="">
                        <input type="hidden" id="hiddenidTocaTradicionales" value="">
                        <div class="col-md-12">
                            <div class="col-md-6">
                                <h3 class="title">Acuse Origen</h3>
                                <div id="contenidoDeTocaOrigen">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="title">Acuse Destino</h3>
                                <div id="contenidoDeTocaDestino">
                                </div>
                                <div class="form-group">
                                    
                                    <div class="col-md-12 " id="divCveTipoJuzgado">
                                            <select class="form-control " name="cveTipoJuzgado" id="cveTipoJuzgado" ></select>
                                    </div>                                
                                </div>
                                <br>
                                <br>
                                <button type="button" class="btn btn-info" onclick="reasignarToca()" id="reasignacionTocaParaButton">
                                    <span class="glyphicon glyphicon-share"></span> Reasignar
                                </button>
                            </div>                                   
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    <script type="text/javascript">
        var cveJuzgado = $('#SysCveAdscripcion').val();
        
        cargaJuzgadosAsignar = function () {
            var strDatos = "";
                strDatos = "accion=regionTribunal";
//            var strDatos = "accion=regionTradicional";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                global: false,
                dataType: "html",
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
                        $("#cveTipoJuzgado").empty().append('<option value="0/0">Seleccione una opci&oacute;n</option>');
                        for (var i = 0; i < json.totalCount; i++) {
                            //if( json.data[i].cveTipojuzgado == 1 ){
                            
                            if (cveJuzgado == json.data[i].cveJuzgado) {
                                $("#cveTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");

                            }else{
                                $(" #cveTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                            }
                            $("#cveTipoJuzgado").attr("cveregion", json.data[i].cveRegion);
                        }
                    }
                    else {
                        $("#cveTipoJuzgado").empty().append('<option value="0/0">Sin registros</option>');
                    }
                    cargaTipoCarpeta();
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso, 'error');
                }
            });
        };
        
        reasignarToca = function () {
            var hiddenIdReferencia = $("#hiddenIdReferencia").val();
            var hiddenidTocaTradicionales = $("#hiddenidTocaTradicionales").val();
            var cveTipoJuzgado = $("#cveTipoJuzgado").val().split("/")[0];
            if(cveTipoJuzgado != "0"){
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    accion: "guardaReasignacionSegundaInstanciaTribunal",
                    idReferencia: hiddenIdReferencia,
                    cveTipoJuzgado: cveTipoJuzgado,
                    cveRegion: $("#cmbTipoJuzgadoToca").attr("cveregion")
                },
                beforeSend: function (datos) {
                },
                success: function (datos) {
                    if (datos.status == "Error") {
                        $("#modalReasignacion").modal("hide");
                        regresarBuscar();
                        consultaTocas();
                        notify({
                            type: "error", //alert | success | error | warning | info
                            title: "Ocurrio un error al reasignar la toca",
                            message: "",
                            position: {
                                x: "right", //right | left | center
                                y: "top" //top | bottom | center
                            },
                            icon: '<i class="fa fa-times" aria-hidden="true"></i>', //<i>
                            size: "normal", //normal | full | small
                            overlay: false, //true | false
                            closeBtn: true, //true | false
                            overflowHide: false, //true | false
                            spacing: 20, //number px
                            theme: "dark-theme", //default | dark-theme
                            autoHide: true, //true | false
                            delay: 25000, //number ms
                            onShow: null, //function
                            onClick: null, //function
                            onHide: null, //function
                            template: '<div class="notify"><div class="notify-text"></div></div>'
                        });
                    } else {
                        $("#modalReasignacion").modal("hide");
                        regresarBuscar();
                        consultaTocas();
                        notify({
                            type: "success", //alert | success | error | warning | info
                            title: "Reasignacion Exitosa",
                            message: "",
                            position: {
                                x: "right", //right | left | center
                                y: "top" //top | bottom | center
                            },
                            icon: '<i class="fa fa-check" aria-hidden="true"></i>', //<i>
                            size: "normal", //normal | full | small
                            overlay: false, //true | false
                            closeBtn: true, //true | false
                            overflowHide: false, //true | false
                            spacing: 20, //number px
                            theme: "dark-theme", //default | dark-theme
                            autoHide: true, //true | false
                            delay: 25000, //number ms
                            onShow: null, //function
                            onClick: null, //function
                            onHide: null, //function
                            template: '<div class="notify"><div class="notify-text"></div></div>'
                        });
                    }

                },
                error: function (objeto, quepaso, otroobj) {

                }
            });
            }else{
                 notify({
                            type: "error", //alert | success | error | warning | info
                            title: "Es necesario selecionar tribunal de destino",
                            message: "",
                            position: {
                                x: "right", //right | left | center
                                y: "top" //top | bottom | center
                            },
                            icon: '<i class="fa fa-times" aria-hidden="true"></i>', //<i>
                            size: "normal", //normal | full | small
                            overlay: false, //true | false
                            closeBtn: true, //true | false
                            overflowHide: false, //true | false
                            spacing: 20, //number px
                            theme: "dark-theme", //default | dark-theme
                            autoHide: true, //true | false
                            delay: 1000, //number ms
                            onShow: null, //function
                            onClick: null, //function
                            onHide: null, //function
                            template: '<div class="notify"><div class="notify-text"></div></div>'
                        });
            }

        };
        
        function resetPagina() {
            $("#cmbPaginacion").val(1);
        }
        
        cargaJuzgados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                //            url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "distrito"},
                global: false,
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoJuzgadoToca').empty();
                        $('#cmbTipoJuzgadoToca').append('<option value="0/0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $("#cmbTipoJuzgadoToca").append($('<option></option>').val(object.cveJuzgado + "/" + object.cveTipojuzgado).html(object.desJuzgado));
                                if (cveJuzgado == object.cveJuzgado) {
                                    $("#cmbTipoJuzgadoToca option[value='" + object.cveJuzgado + "/" + object.cveTipojuzgado + "']").attr("selected", "selected");
                                }
                                $("#cmbTipoJuzgadoToca").attr("cveregion", object.cveRegion);
                            });

                        }
                    } catch (e) {
                        alert("Error al cargar juzgados:" + e);
                    }
                    cargaTipoCarpeta();
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de juzgado:\n\n" + otroobj);
                }
            });
        };
        imprime = function (urls) {
            window.open(urls, "myWindow", "width=800,height=1000");
        };
        function cargarDatos(json, i, val) {
            $("#reasignacionTocaParaButton").prop("disabled", true);
    //         if (val) {
    //            json = $.parseJSON(json);
    //         }
            console.log(json[i]);
            var urlOption = '../fachadas/sigejupe/tocastradicionales/TocastradicionalesAcuse.Class.php';
            $("#hiddenIdReferencia").val(json[i].idCarpetaJudicial);
            $("#hiddenidTocaTradicionales").val(json[i].idTocaTradicionales);
            $("#modalReasignacion").modal("show");
            $("#contenidoDeTocaOrigen").empty();
            $("#contenidoDeTocaDestino").empty();
            if (val) {
                $("#divCveTipoJuzgado").hide();
                $("#reasignacionTocaParaButton").hide();
                
                $.ajax({
                    type: "GET",
                    url: urlOption,
                    async: false,
                    dataType: "html",
                    global: false,
                    data: {
                        accion: "consultaAcuseTocaNt",
                        idReferencia: json[i].idReferenciaOrigen,
                        option: true
                    },
                    beforeSend: function (datos) {
                    },
                    success: function (datos) {
                        console.log(datos);
                        $("#contenidoDeTocaOrigen").html(datos);
                        var urlImprimir = urlOption + "?idReferencia=" + json[i].idReferenciaOrigen + "&accion=consultaAcuseToca";
                        console.log(json);
                        console.log(urlOption + "?idReferencia=" + json[i].idReferenciaOrigen + "&accion=consultaAcuseToca");
                        $("#contenidoDeTocaOrigen").append("<br><button target='_blank' class='btn btn-default' onclick='imprime(\"" + urlImprimir + "\")'>Imprimir</button>");

                    },
                    error: function (objeto, quepaso, otroobj) {

                    }
                });
                $.ajax({
                    type: "GET",
                    url: urlOption,
                    async: false,
                    dataType: "html",
                    global: false,
                    data: {
                        accion: "consultaAcuseTocaNt",
                        idReferencia: json[i].idReferenciaDestino,
                        option: true,
                        idReferenciaOrigen: json[i].idReferenciaOrigen
                    },
                    beforeSend: function (datos) {
                    },
                    success: function (datos) {
                        console.log(datos);
                        $("#contenidoDeTocaDestino").html(datos);
                        var urlImprimir = urlOption + "?idReferencia=" + json[i].idReferenciaDestino + "&accion=consultaAcuseToca&idReferenciaOrigen=" + json[i].idReferenciaOrigen;
                        console.log(urlOption + "?idReferencia=" + json[i].idReferenciaDestino + "&accion=consultaAcuseToca");
                        console.log(json);
    //                  $("#contenidoDeTocaDestino").append("<br><button target='_blank' class='btn btn-default' onclick='imprime('" + urlOpstion + "?idActuacion=" + json[i].idReferenciaOrigen + "&accion=consultaAcuse')'>Imprimir</button>");
                        $("#contenidoDeTocaDestino").append("<br><button target='_blank' class='btn btn-default' onclick='imprime(\"" + urlImprimir + "\")'> Imprimir </button>");
                    },
                    error: function (objeto, quepaso, otroobj) {

                    }
                });
            } else {
                $("#divCveTipoJuzgado").show();
                $("#reasignacionTocaParaButton").show();
                $.ajax({
                    type: "GET",
                    url: urlOption,
                    async: false,
                    dataType: "html",
                    global: false,
                    data: {
                        accion: "consultaAcuseTocaNt",
                        idReferencia: json[i].idCarpetaJudicial,
                        option: true
                    },
                    beforeSend: function (datos) {
                    },
                    success: function (datos) {
                        console.log(datos);
                        $("#contenidoDeTocaOrigen").html(datos);
                        var urlImprimir = urlOption + "?idReferencia=" + json[i].idCarpetaJudicial + "&accion=consultaAcuseTocaNt";
                        console.log(urlOption + "?idReferencia=" + json[i].idCarpetaJudicial + "&accion=consultaAcuseTocaNt");
                        console.log(json);
                        $("#contenidoDeTocaOrigen").append("<br><button target='_blank' class='btn btn-default' onclick='imprime(\"" + urlImprimir + "\")'>Imprimir</button>");
                    },
                    error: function (objeto, quepaso, otroobj) {

                    }
                });
            }
            $("#reasignacionTocaParaButton").prop("disabled", false);
        }
        function consultaTocas() {
            $("#tablaConsulta").html("");

            var cantReg = $("#cmbNumReg").val();
            var strDatos = "accion=consultarTocaTradicionalReasignacionTribunal";
            strDatos += "&paginacion=true";
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            strDatos += "&cveJuzgado=" + $("#cmbTipoJuzgadoToca").val().split("/")[0];
            strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            strDatos += "&numero=" + $("#numeroConsulta").val();
            strDatos += "&anio=" + $("#anioConsulta").val();
            strDatos += "&fechaInicial=" + $("#fechaRangoInicial").val();
            strDatos += "&fechaFinal=" + $("#fechaRangoFinal").val();
            //mandar variable de adscripcion o grupo para ver si agregar apelantes a la consulta
            $.ajax({
                async: false,
                type: 'POST',
                url: "../fachadas/sigejupe/tocastradicionales/TocastradicionalesFacade.Class.php",
                data: strDatos,
            }).done(function (response) {
                var json = eval('(' + response + ')');
                var totalRecords = json.totalCount;
                var message = json.mnj;
                if (json.Estatus == "ok") {
                    if (totalRecords > 0) {
                        var tabla = "<table id='tblResultadosGridAct2'  width='100%' border='1' style='border-collapse: collapse;' class='table table-hover table-striped table-bordered table-responsive dataTable no-footer'>";
                        tabla += "<thead><tr>";
                        tabla += "<td>No.</td><td>Toca origen</td><td>Sala origen</td><td>Causa</td><td>Toca destino</td><td>Tribunal destino</td><td>Fecha registro</td>";
                        tabla += "</tr></thead><tbody>";
                        var validarRemis = [];
                        var indice = [];
                        for (var j = 0; j <= totalRecords; j++) {
                            indice.push(0);
                        }
                        var ind = 0;
                        var data = json.resultados;
                        // guardarDatos();
                        for (var i = 0; i < totalRecords; i++) {
                            if (data[i].idReasignacionToca != "") {
                                tabla += "<tr class='success' style='cursor: pointer;' onclick='cargarDatos(" + JSON.stringify(data) + "," + i + ",true);'>";
                            } else {
                                tabla += "<tr style='cursor: pointer;' onclick='cargarDatos(" + JSON.stringify(data) + "," + i + ",false);'>";
                            }
                            if (data[i].idReasignacionToca != "") {
                                tabla += "<td > " + (i + 1) + "</td>";
                                tabla += "<td > " + data[i].numero + "/" + data[i].anio + "</td>";
                                tabla += "<td > " + data[i].origen[0].desJuzgado + "</td>";
                                if(data[i].antecede != ""){
                                    tabla += "<td > " + data[i].antecede[0].numero + "/" + data[i].antecede[0].anio + " - " + obtenerTipoCarpeta(data[i].antecede[0].cveTipoCarpeta) + "</td>";
                                }else{
                                    tabla += "<td>Sin antecedente</td>";
                                }
                                tabla += "<td > " + data[i].destino[0].numero + "/" + data[i].destino[0].anio + "</td>";
                                tabla += "<td > " + data[i].destino[0].desJuzgado + "</td>";
                                tabla += "<td > " + fechaMySQLaNormalConsulta(data[i].fechaRegistro) + "</td>";
                                tabla += "</tr>";
                            } else {
                                tabla += "<td > " + (i + 1) + "</td>";
                                tabla += "<td > " + data[i].numero + "/" + data[i].anio + "</td>";
                                tabla += "<td > " + data[i].origen[0].desJuzgado + "</td>";
                                if(data[i].antecede != ""){
                                    tabla += "<td > " + data[i].antecede[0].numero + "/" + data[i].antecede[0].anio + " - " + obtenerTipoCarpeta(data[i].antecede[0].cveTipoCarpeta) + "</td>";
                                }else{
                                    tabla += "<td>Sin antecedente</td>";
                                }
                                tabla += "<td > </td>";
                                tabla += "<td > </td>";
                                tabla += "<td > " + fechaMySQLaNormalConsulta(data[i].fechaRegistro) + "</td>";
                                tabla += "</tr>";
                            }
                        }
                        tabla += "</tbody></table>";
                        $("#tablaConsulta").html(tabla);
                        $("#divConsulta").hide("slide");

                        $("#divTablaConsulta").show("slide");
                        getPages($("#cmbPaginacion").val(), cantReg);
                        $("#tblResultadosGridAct2").DataTable({paging: false});
                    } else {
                        showMessage(message, 'information');
                    }
                } else {
                    showMessage(message, 'information');
                }
            });

        }
        function showMessage(message, type) {
            var message = message || '';
            var div_message = '';
            var state = 0;
            switch (type) {
                case 'success':
                    div_message = 'divCorrecto';
                    break;
                case 'warning':
                    div_message = 'divAdvertencia';
                    state = 1;
                    break;
                case 'information':
                    div_message = 'divInformacion';
                    break;
                case 'error':
                    div_message = 'divError';
                    break;
            }
            $('#' + div_message).html(message);
            $('#' + div_message).show("slide");
            if (!state) {
                setTimeAlert(div_message);
            } else {
                setTimeout(function () {
                    $("#" + div_message).hide("slide");
                }, 6000);
            }
        }
        function obtenerTipoCarpeta(cveTipoCarpeta) {
            var strDatos = "accion=consultar";
            strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
            var desTipoCarpeta = "";
            $.ajax({
                async: false,
                type: 'POST',
                global: false,
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                data: strDatos,
                global: false,
            }).done(function (response) {
                var json = eval("(" + response + ")");
                var totalRecords = json.totalCount;
                var message = '';
                if (totalRecords > 0) {
                    var referencia = json.data;
                    desTipoCarpeta = referencia[0].desTipoCarpeta;
                } else {
                    //                cleanFields(4);
    //               disabledFields(false, true);
                    if ('text' in json) {
                        message = json.text;
                    } else {
                        message = 'ERROR.';
                    }
                    //showMessage(message, 'information');
                    $('#resultadoBusquedaActuacion').empty().removeClass('glyphicon-ok').addClass('glyphicon-remove').attr("aria-hidden", "true").after('').append('&nbsp;' + message);
                }
            });
            return desTipoCarpeta;
        }
        fechaMySQLaNormal = function (fecha) {
            if (fecha != "") {
                var fechaHora = fecha.split(" ");
                var vecFecha = fechaHora[0].split("-");
                var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
                fechaHora = fechaHora[1].split(":");
                fechaHora = fechaHora[0] + ":" + fechaHora[1];
                return vecFecha + " " + fechaHora;
            } else {
                return "";
            }
        };
        fechaMySQLaNormalConsulta = function (fecha) {
            if (fecha != "") {
                var fechaHora = fecha.split(" ");
                var vecFecha = fechaHora[0].split("-");
                var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
                fechaHora = fechaHora[1].split(":");
                fechaHora = fechaHora[0] + ":" + fechaHora[1];
                return fechaNormal + " " + fechaHora;
            } else {
                return "";
            }
        };

        fechaNormal = function (fecha) {
            if (fecha != "") {
                var vecFecha = fecha.split("-");
                var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
                return fechaNormal;
            } else {
                return "";
            }
        };
        function getPages(page, cantReg) {
            var cantReg = $("#cmbNumReg").val();
            var strDatos = "accion=getPaginasTocasTradicionalesTribunal";
            strDatos += "&paginacion=true";
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            strDatos += "&cveJuzgado=" + $("#cmbTipoJuzgadoToca").val().split("/")[0];
            strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            strDatos += "&numero=" + $("#numeroConsulta").val();
            strDatos += "&anio=" + $("#anioConsulta").val();
            strDatos += "&fechaInicial=" + $("#fechaRangoInicial").val();
            strDatos += "&fechaFinal=" + $("#fechaRangoFinal").val();
            $.ajax({
                async: false,
                type: 'POST',
                url: "../fachadas/sigejupe/tocastradicionales/TocastradicionalesFacade.Class.php",
                data: strDatos,
            }).done(function (response) {
                var json = "";
                json = eval("(" + response + ")");
                if (json.totalCount > 0) {
                    $('#cmbPaginacion').find('option').remove().end();

                    for (var i = 0; i < (parseInt(json.total)); i++) {
                        $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                    }
                    $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                    page = (page == null) ? 1 : page;
                    $("#cmbPaginacion").val(page);
                } else {
                    showMessage('SIN RESULTADOS', 'information');
                }
            });
            return;
        }
        function limpiarCampos() {
            cargaJuzgados();
            cargaJuzgadosAsignar();
            $("#numeroConsulta").val("");
            $("#anioConsulta").val("");
            fechaBaseDatos(
                    {
                        fechaRangoInicial: "fecha",
                        fechaRangoFinal: "fecha"
                    }
            );
        }
        function regresarBuscar() {
            $("#divFormulario").hide();
            $("#divConsulta").show("slide");
            $("#divTablaConsulta").hide();

        }
        consultaTocas1 = function () {
            var consultaConFechas = false;
            var cveJuzgado = $("#cmbTipoJuzgadoToca").val().split("/")[0];
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var numeroConsulta = $("#numeroConsulta").val();
            var anioConsulta = $("#anioConsulta").val();
            var fechaRangoInicial = $("#fechaRangoInicial").val();
            var fechaRangoFinal = $("#fechaRangoFinal").val();
            var consulta = null;
            if (numeroConsulta == "" || anioConsulta == "") {
                consultaConFechas = true;
                consulta = {
                    accion: "consultarSegundaInstancia",
                    cveJuzgado: cveJuzgado,
                    txtFecInicialBusqueda: fechaRangoInicial,
                    txtFecFinalBusqueda: fechaRangoFinal
                };
            } else {
                consultaConFechas = false;
                consulta = {
                    accion: "consultarSegundaInstancia",
                    cveJuzgado: cveJuzgado,
                    cveTipoCarpeta: cveTipoCarpeta,
                    numero: numeroConsulta,
                    anio: anioConsulta
                };
            }
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                async: false,
                dataType: "json",
                data: consulta,
                beforeSend: function (datos) {
                },
                success: function (datos) {
                    if (datos.totalCount > 0) {
                        var table = "";
                        table += "<label id='totalRegistrosEncontrados'>Total de registros: ";
                        table += "<span id='numero-registros'>" + datos.totalCount + "</span>";
                        table += "</label>";
                        table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>N&uacute;m.</th>";
                    }
                },
                error: function (objeto, quepaso, otroobj) {

                }
            });
        };

        cargaTipoCarpeta = function () {
            $('#cmbTipoCarpeta').empty();
            var tipoJuzgado = $("#cmbTipoJuzgadoToca").val().split("/");
            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                data: strDatos,
                async: false, global: false,
                dataType: "html",
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");
                    if (json.totalCount > 0) {
                        $("#cmbTipoCarpeta").append($('<option></option>').val("").html("Seleccione una opci&oacute;n"));
                        for (var i = 0; i < json.totalCount; i++) {
                            switch (tipoJuzgado[1]) {
                                case "1": // tipo de juzgado de control
                                    if (json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "2": // tipo de juzgado juicio
                                    if (json.data[i].cveTipoCarpeta == "3") { // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "3": // tipo de juzgado ejecucion
                                    if (json.data[i].cveTipoCarpeta == "5") { // ||  json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo
                                        $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "4": // tipo de juzgado tribunal
                                    if (json.data[i].cveTipoCarpeta == "4") { // || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8"){ // exhorto, amparo 
                                        $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                case "5":
                                    if (json.data[i].cveTipoCarpeta == "6") {
                                        $(" #cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                                default:
                                    if (json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "5" || json.data[i].cveTipoCarpeta == "3" || json.data[i].cveTipoCarpeta == "2") {
                                        $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                            }
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso, 'error');
                }
            });
        };
        (function () {
            $("#fechaRangoInicial").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $("#fechaRangoFinal").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            });
            $("#fechaRangoInicial").on("dp.change", function (e) {
                $('#fechaRangoFinal').data("DateTimePicker").minDate(e.date);
            });
            $("#fechaRangoFinal").on("dp.change", function (e) {
                $('#fechaRangoInicial').data("DateTimePicker").maxDate(e.date);
            });
            fechaBaseDatos(
                    {
                        fechaRangoInicial: "fecha",
                        fechaRangoFinal: "fecha"
                    }
            );
            cargaJuzgados();
            cargaJuzgadosAsignar();
        })();
    </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>