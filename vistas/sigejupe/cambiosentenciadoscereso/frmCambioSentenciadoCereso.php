<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//version 25/01/2016
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
        .needed:after {
            color:darkred;
            content: " (*)";
        }
    </style>
    <input type="hidden" id="hiddenListaIds" value="" >
    <input type="hidden" id="hiddenFechaHoy" value="">


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Cambio de Sentenciado de Cereso
            </h5>
        </div>
        <div class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divBuscarRecluso">
                    <div class="form-group"> 
                        <label class="col-md-3 control-label">Ceresos:</label>
                        <div id="divCeresosPermitidos" class="col-md-9">

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Fecha de Ingreso</label>
                        <div class="col-md-9">
                            <input type="checkbox" name="radioFecha" id="radioFecha" onclick="radioFecha()"><label>NOTA: Fecha ingreso del recluso o fecha de registro del imputado</label>
                        </div>
                    </div>
                    <div id="divFecha" style="display:none">
                        <div class="form-group">
                            <label for="fechaConsultar" class="col-md-3 control-label">Fecha Inicial</label>
                            <div class="col-md-9">
                                <input type='text' id="fechaConsultar" placeholder='FECHA' class='form-control datepicker'  data-date-format='dd/mm/yyyy'/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="fechaConsultarEnd" class="col-md-3 control-label">Fecha Final</label>
                            <div class="col-md-9">
                                <input type='text' id="fechaConsultarEnd" placeholder='FECHA' class='form-control datepicker'  data-date-format='dd/mm/yyyy'/>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="col-md-3 control-label">Carpeta de inv.</label>
                        <div class="col-md-9">
                            <input type="text" id="txtCarpetaInv" class="form-control" placeholder="carpeta de inv." maxlength="30" onkeypress="return validarCampo(event)" style='text-transform:uppercase; resize: none;'>
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="col-md-3 control-label">Nuc</label>
                        <div class="col-md-9">
                            <input type="text" id="txtNuc" class="form-control" placeholder="Nuc" maxlength="30" onkeypress="return validarCampo(event)" style='text-transform:uppercase; resize: none;'>
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="col-md-3 control-label">Nombre</label>
                        <div class="col-md-9">
                            <input type="text" id="txtNombre" class="form-control" placeholder="Nombre" maxlength="50" onkeypress="return validarCampo(event)" style='text-transform:uppercase; resize: none;'>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="col-md-3 control-label">Paterno</label>
                        <div class="col-md-9">
                            <input type="text" id="txtPaterno" class="form-control" placeholder="Apellido paterno" maxlength="50" onkeypress="return validarCampo(event)" style='text-transform:uppercase; resize: none;'>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Materno</label>
                        <div class="col-md-9">
                            <input type="text" id="txtMaterno" class="form-control" placeholder="Apellido materno" maxlength="50" onkeypress="return validarCampo(event)" style='text-transform:uppercase; resize: none;'>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-primary" id="submitBuscarRecluso" value="Buscar" onclick="buscarRecluso(0);" style="display: none"> 
                            <input type="submit" class="btn btn-primary" id="submitLimpiar" value="Limpiar" onclick="limpiar();"> 
                        </div>
                    </div>
                    <div id="divConsulta2" class="col-xs-12">
                        <div class="col-xs-12" id="paginacion" style='display:none;'>
                            <div class="form-group col-xs-3" style="padding: 10px">
                                <label class='control-label col-xs-6' id='totalRegistros'></label>
                            </div>
                            <div id="divPaginador" class="form-group col-xs-3" >
                                <label class="control-label">P&aacute;gina:</label>
                                <select  name="cmbPaginacion" id="cmbPaginacion" onchange="buscarRecluso(1);" >
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <div id="divPaginador" class="form-group col-xs-4" >
                                <label class="control-label">Registros por p&aacute;gina:</label>
                                <select  name="cmbNumReg" id="cmbNumReg" onchange="buscarRecluso(2);">
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
                        <div id="divConsulta" class="col-xs-12">

                        </div>
                    </div>
                </div>
                <div id="divCambioCentenciadoCereso" style="display:none">
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Nombre</label>
                        <div class="col-md-9">
                            <input type="text" id="txtNombreD" class="form-control" disabled>
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Genero</label>
                        <div class="col-md-9">
                            <input type="text" id="txtGeneroD" class="form-control" disabled>
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Carpeta Inv.</label>
                        <div class="col-md-9">
                            <input type="text" id="txtCarpetaInvD" class="form-control" disabled>
                        </div>                                
                    </div>
                    <div id="divOficio" class="form-group" style="display:none"> 
                        <label class="control-label col-md-3">Oficio</label>
                        <div class="col-md-9">
                            <input type="text" id="txtOficioD" class="form-control" disabled>
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Nuc</label>
                        <div class="col-md-9">
                            <input type="text" id="txtNucD" class="form-control" disabled>
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Cereso</label>
                        <div class="col-md-9">
                            <input type="text" id="txtCeresoD" class="form-control" disabled>
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label id="idFechaIngreso" class="control-label col-md-3">Fecha de ingreso</label>
                        <div class="col-md-9">
                            <input type="text" id="txtFechaHoraIngresoD" class="form-control" disabled>
                        </div>                                
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Ceresos:</label>
                        <div class="col-md-9">
                            <select class="form-control" name="cmbCeresos" id="cmbCeresos">
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-primary" id="inputGuardar" value="Guardar" onclick="guardar();" style="display:none"> 
                            <input type="submit" class="btn btn-primary" id="submitRegresar" value="Regresar" onclick="regresar();"> 
                        </div>
                    </div>
                </div>
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
    </div>
    <script type="text/javascript">
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
        var ceresoDefecto=0;
        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';
        ocultarEtiqueta = function () {
            $("#labelCombo").hide();
        };
        radioFecha = function () {
            $('#fechaConsultar').val(fechaHoy());
            $('#fechaConsultarEnd').val(fechaHoy());
            if ($("#radioFecha").is(':checked')) {
                $("#divFecha").show();
            } else {
                $("#divFecha").hide();
            }
        };
        ceresosPermitidos = function () {
            var strDatos = "accion=consultarCeresosPermitidos";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/reclusos/ReclusosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    //console.log(datos);
                    var json = "";
                    var combo = "<select id='cmbCeresosPermitidos' class='form-control' name='cmbCeresosPermitidos'>";
                    combo += "<option value=0>Seleccione una opci&oacute;n</option>";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            combo += "<option value='" + json.data[i].cveCereso + "'>" + json.data[i].desCereso + "</option>";
                            if(i==0){
                                ceresoDefecto=json.data[i].cveCereso;
                            }
                        }
                    } else {//
                        combo = "<select id='cmbCeresosPermitidos' class='form-control' name='cmbCeresosPermitidos'>";
                        combo += "<option value='-1'>NO DISPONIBLES</option>";
                    }
                    combo += "</select>";
                    $("#divCeresosPermitidos").html(combo);
                    $("#cmbCeresosPermitidos").val(ceresoDefecto);
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        buscarRecluso = function (bandera) {
            if ($("#cmbCeresosPermitidos").val() > 0) {
                if (bandera == 2) {
                    $("#cmbPaginacion").val(1);
                }
                if (bandera == 0) {
                    $("#cmbNumReg").val("10");
                    $("#cmbPaginacion").val("1");
                    $("#paginacion").hide();
                }
                $("#divConsulta").html("");
                var strDatos = "accion=consultarReclusos";
                strDatos += "&nombre=" + $("#txtNombre").val();
                strDatos += "&paterno=" + $("#txtPaterno").val();
                strDatos += "&materno=" + $("#txtMaterno").val();
                strDatos += "&cveCereso=" + $("#cmbCeresosPermitidos").val();
                strDatos += "&carpetaInv=" + $("#txtCarpetaInv").val();
                strDatos += "&nuc=" + $("#txtNuc").val();
                strDatos += "&paginacion=true";
                strDatos += "&cantxPag=" + $("#cmbNumReg").val();
                strDatos += "&pag=" + $("#cmbPaginacion").val();
                if ($("#radioFecha").is(':checked')) {
                    strDatos += "&txtFecInicialBusqueda=" + $("#fechaConsultar").val();
                    strDatos += "&txtFecFinalBusqueda=" + $("#fechaConsultarEnd").val();
                }
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/reclusos/ReclusosFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        //console.log(datos);
                        var json = "";
                        var table = "";
                        json = eval("(" + datos + ")"); //Parsear JSON
                        if (json.totalCount > 0) {
                            document.getElementById("cmbCeresosPermitidos").disabled = true;
                            table += "<table id='tblResultadosGridAct' class='table table-hover table-striped table-bordered'>";
                            table += "<thead><tr>";
                            table += "<th>N&uacute;m.</th><th>Nombre</th><th>Tipo</th><th>Carpeta de Inv.</th><th>Nuc</th><th>Fecha de ingreso</th>";
                            table += "</tr></thead><tbody>";
                            var indice = $("#cmbPaginacion").val();
                            indice = (indice - 1) * $("#cmbNumReg").val();
                            var jsonDatos = null;
                            var reclusoOimputado="";
                            for (var i = 0; i < json.totalCount; i++) {
                                jsonDatos = JSON.stringify(json.resultados[i]);
                                table += "<tr  style='cursor: pointer;' onclick='cambiarDeCereso(" + jsonDatos + ")'>";
                                table += "<td > " + (i + 1 + indice) + "</td>";
                                if (json.resultados[i].origen == 1) {//reclusos
                                    reclusoOimputado="RECLUSO";
                                    table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                                } else {
                                    reclusoOimputado="IMPUTADO";
                                    if (json.resultados[i].idIngresoCereso == 1) {//cveTipoPersona
                                        table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                                    } else {
                                        table += "<td>" + json.resultados[i].oficio + "</td>";//nombreMoral
                                    }
                                }
                                table += "<td>" + reclusoOimputado + "</td>";
                                table += "<td>" + json.resultados[i].carpetaInv + "</td>";
                                table += "<td>" + json.resultados[i].nuc + "</td>";
                                table += "<td>" + fechaMySQLaNormal(json.resultados[i].FechaHoraIngreso) + "</td>";
                                table += "</tr> ";
                            }
                            table += "</tbody></table>";
                            $("#divConsulta").html(table);
                            $("#tblResultadosGridAct").DataTable({
                                paging: false
                            });
                            if (bandera != 1) {
                                $("#paginacion").show();
                                calcularPaginas();
                            }
                        } else {
                            $("#totalRegistros").hide();
                            $("#divAlertInfo").html('' + json.mnj);
                            $("#paginacion").hide();
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
            } else {
                var mensaje = "Informaci&oacute;n! seleccione:  -Un Cereso";
                if ($("#cmbCeresosPermitidos").val() == -1) {
                    mensaje = "No hay ceresos disponibles para la b&uacute;squeda";
                }
                $("#totalRegistros").hide();
                $("#divAlertInfo").html(mensaje);
                $("#paginacion").hide();
                $("#divAlertInfo").show("slide");
                setTimeAlert("divAlertInfo");
            }
        };
        calcularPaginas = function () {
            var strDatos = "paginacion=false";
            strDatos += "&cveCereso=" + $("#cmbCeresosPermitidos").val();
            strDatos += "&cantxPag=" + $("#cmbNumReg").val();
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            if ($("#radioFecha").is(':checked')) {
                strDatos += "&txtFecInicialBusqueda=" + $("#fechaConsultar").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#fechaConsultarEnd").val();
            }
            var url = "../fachadas/sigejupe/reclusos/ReclusosFacade.Class.php";
            strDatos += "&accion=consultarReclusos";//getPaginasReclusos
            strDatos += "&nombre=" + $("#txtNombre").val();
            strDatos += "&paterno=" + $("#txtPaterno").val();
            strDatos += "&materno=" + $("#txtMaterno").val();
            strDatos += "&carpetaInv=" + $("#txtCarpetaInv").val();
            strDatos += "&nuc=" + $("#txtNuc").val();
            $.ajax({
                type: "POST",
                url: url,
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = eval("(" + datos + ")"); //Parsear JSON
                    if ((json.Estatus == "ok") && (json.totalCount > 0)) {
                        var totalCeresos = json.resultados[0].totalCount;
                        var combo = "";
                        $("#totalRegistros").html("Total: " + json.resultados[0].totalCount);
                        $("#totalRegistros").show();
                        var i;
                        if (totalCeresos / $("#cmbNumReg").val() < 0) {
                            combo += "<option value='" + 1 + "'>" + 1 + "</option>";
                        } else {
                            for (i = 0; i < totalCeresos / $("#cmbNumReg").val(); i++) {
                                combo += "<option value='" + (i + 1) + "'>" + (i + 1) + "</option>";
                            }
                        }
                        $("#cmbPaginacion").html(combo);
                    } else {
                        console.log(datos);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        cambiarDeCereso = function (json) {
            $("#divBuscarRecluso").hide();
            $("#divCambioCentenciadoCereso").show();
            $("#hiddenListaIds").val("" + json.origen + "," + json.idRecluso + "," + json.idImputadoCarpeta + "," + json.idIngresoCereso);
            if (json.origen == 1) {//reclusos
                $("#idFechaIngreso").text("Fecha de ingreso");
                $("#divOficio").show();
                $("#txtOficioD").val(json.oficio);
                $("#txtNombreD").val(json.nombre + " " + json.paterno + " " + json.materno);
            } else {
                $("#idFechaIngreso").text("Fecha de registro");
                if (json.idIngresoCereso == 1) {//cveTipoPersona
                    $("#txtNombreD").val(json.nombre + " " + json.paterno + " " + json.materno);
                } else {
                    $("#txtNombreD").val(json.oficio);//nombreMoral
                }
            }
            $("#txtGeneroD").val(json.desGenero);
            $("#txtCarpetaInvD").val(json.carpetaInv);
            $("#txtNucD").val(json.nuc);
            $("#txtCeresoD").val($("#cmbCeresosPermitidos option:selected").text());
            $("#txtFechaHoraIngresoD").val(fechaMySQLaNormal(json.FechaHoraIngreso));
            if (updateRecord == "S") {
                $("#inputGuardar").show();
            }
        };
        guardarCambio = function (strDatos, url) {
            $.ajax({
                type: "POST",
                url: url,
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = eval("(" + datos + ")");
                    if (json.type == "OK") {
                        $("#inputGuardar").hide();
                        $("#divAlertSucces").html("Cambio de cereso exitoso!");
                        $("#divAlertSucces").show("slide");
                        setTimeAlert("divAlertSucces");
                        var cveCereso = $("#cmbCeresos").val();
                        $("#txtCeresoD").val($("#cmbCeresos option:selected").text());
                    } else {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + json.msj);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        guardar = function () {
            if (($("#cmbCeresos").val() == 1)||($("#cmbCeresosPermitidos").val()==$("#cmbCeresos").val())) {
                if(($("#cmbCeresos").val() == 1)){
                    $("#divAlertInfo").html("Seleccione un cereso\n\n");
                    $("#divAlertInfo").show("slide");
                    setTimeAlert("divAlertInfo");
                }else{
                    $("#divAlertDager").html("No puede seleccionar el mismo cereso del que proviene el sentenciado\n\n");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            } else {
                $("#labelCombo").hide();
                var vecIds = $("#hiddenListaIds").val().split(",");
                var strDatos = "accion=actualizarRecluso";
                strDatos += "&origen=" + vecIds[0];
                var url = "../fachadas/sigejupe/ingresosceresos/IngresosceresosFacade.Class.php";
                strDatos += "&carpetaInv=" + $("#txtCarpetaInvD").val();
                strDatos += "&oficio=" + $("#txtOficioD").val();
                strDatos += "&cveCereso=" + $("#cmbCeresos").val();
                strDatos += "&idIngresoCereso=" + vecIds[3];
                strDatos += "&idRecluso=" + vecIds[1];
                strDatos += "&idImputadoCarpeta=" + vecIds[2];
                strDatos += "&idCarpetaJudicial=" + vecIds[1];
                strDatos += "&cveCereso=" + $("#cmbCeresos").val();
                var ceresoOrigen=$("#cmbCeresosPermitidos option:selected").text();
                var ceresoDestino=$("#cmbCeresos option:selected").text();
                var mensaje = "\u00A1Advertencia! <br><br>\u00BFEst\u00E1 seguro del cambio de cereso?<br>Cereso de Origen: "+ceresoOrigen+"<br>Cereso de Destino: "+ceresoDestino;
                bootbox.dialog({
                    message: mensaje,
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                if (updateRecord == "S") {
                                    guardarCambio(strDatos, url);
                                } else {
                                    $("#divAlertDager").html("Error no posee PERMISO para el cambio\n\n");
                                    $("#divAlertDager").show("slide");
                                    setTimeAlert("divAlertDager");
                                }
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
        };
        cargarCeresos = function () {
            var strDatos = "accion=consultar";
            strDatos += "&activo='S'";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ceresos/CeresosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbCeresos").append($('<option></option>').val(json.data[i].cveCereso).html(json.data[i].desCereso));
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la petici\u00F3n:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        regresar = function () {
            $("#divBuscarRecluso").show();
            $("#divCambioCentenciadoCereso").hide();
            $("#cmbPaginacion").val(1);
            $("#labelCombo").hide();
            $("#txtNombreD").val("");
            $("#txtGeneroD").val("");
            $("#txtCarpetaInvD").val("");
            $("#txtOficioD").val("");
            $("#txtNucD").val("");
            buscarRecluso(0);
        };
        limpiar = function () {
            $("#radioFecha").prop("checked", "");
            radioFecha();
            document.getElementById("cmbCeresosPermitidos").disabled = false;
            $("#cmbCeresosPermitidos").val(ceresoDefecto);
            $("#txtNombre").val("");
            $("#txtCarpetaInv").val("");
            $("#txtNuc").val("");
            $("#txtPaterno").val("");
            $("#txtMaterno").val("");
            $("#divConsulta").html("");
            $("#cmbNumReg").val("10");
            $("#cmbPaginacion").val("1");
            $("#paginacion").hide();
            $("#totalRegistros").hide();
            $('#fechaConsultar').val(fechaHoy());
            $('#fechaConsultarEnd').val(fechaHoy());
        };
        validarCampo = function (evt) {
            var e = evt || event;
            var teclaAscii = e.keyCode || e.which;
            if ((teclaAscii > 64) && (teclaAscii < 91)) {//Le tras mayuscu l as
                return  true;
            }
            if ((teclaAscii > 96) && (teclaAscii < 123)) {//Le tras mayuscu la s
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
            if ((teclaAscii > 47) && (teclaAscii < 58)|| (teclaAscii == 8) || (teclaAscii == 9)) {
                return true;
            }
            return false;
        };
        fechaHoy = function () {
            return $("#hiddenFechaHoy").val();
        };
        fechaMySQLaNormal = function (fecha) {
            if ((fecha != "") && (fecha != null)) {
                var fechaHora = fecha.split(" ");
                var vecFecha = fechaHora[0].split("-");
                var fechaNormal = vecFecha[2] + "/" + vecFecha[1] + "/" + vecFecha[0];
                if(fechaHora[1]==null){
                    return fechaNormal;
                }
                var hora=fechaHora[1];
                hora=hora.split(":");
                return fechaNormal + " " + hora[0]+":"+hora[1];
            }
            return "";
        };
        validarFecha = function (date) {
            var x = new Date();
            var fechaActual = new Date();
            var fecha = date.split("/");
            x.setFullYear(fecha[2], fecha[1] - 1, fecha[0]);
            var vecFA = fechaHoy().split("/");
            fechaActual.setFullYear(vecFA[2], vecFA[1] - 1, vecFA[0]);
            if (x > fechaActual) {
                return fechaHoy();
            } else {
                return date;
            }
        };
        obtenerPermisos = function () {
            var cveUsuarioSistema = cveUsuarioSesion;
            $.get("../archivos/" + cveUsuarioSistema + ".json",
                    function (response) {
                        for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                            if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                                $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                    if (vnombre.nomFormulario == "CERESOS") {
                                        var hijos = vnombre.hijos;
                                        $.each(hijos, function (k2, nombreHijo) {
                                            if (nombreHijo.nomFormulario == 'CAMBIO DE SENTENCIADO A OTRO CERESO') {
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
                        if (readRecord == "S") {
                            $("#submitBuscarRecluso").show();
                        }
                        if (updateRecord == "S") {
                            $("#inputGuardar").show();
                        }
                    });
        };
        $(function () {
            obtenerPermisos();
            ceresosPermitidos();
            cargarCeresos();
            fechaBaseDatos({
                hiddenFechaHoy: "fecha"
            });
            $('#fechaConsultar').val(fechaHoy());
            $('#fechaConsultarEnd').val(fechaHoy());
            $('#fechaConsultar').datepicker().on('changeDate', function (e) {
                $(this).datepicker('hide');
                var fechaValidada;
                fechaValidada = validarFecha($('#fechaConsultar').val());
                $('#fechaConsultar').val(fechaValidada);
            });
            $('#fechaConsultarEnd').datepicker().on('changeDate', function (e) {
                $(this).datepicker('hide');
                var fechaValidada;
                fechaValidada = validarFecha($('#fechaConsultarEnd').val());
                $('#fechaConsultarEnd').val(fechaValidada);
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