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
    <input type="hidden" id="hiddenFechaHoraHoy" value="">


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Consulta de Imputados en el Cereso
            </h5>
        </div>
        <div class="panel-body">
            <div id="divFormulario" class="form-horizontal">
                <div id="divBuscarRecluso">
                    <div class="form-group"> 
                        <label class="col-md-3 control-label needed">Ceresos:</label>
                        <div class="col-md-9">
                            <select class="form-control" name="cmbCeresos" id="cmbCeresos">
                            </select>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Fecha de Ingreso</label>
                        <div class="col-md-9">
                            <input type="checkbox" name="radioFecha" id="radioFecha" onclick="radioFecha()">
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
                        <label class="col-md-3 control-label">NUC</label>
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
                    <!--<div class="form-group"> 
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
                    </div>-->
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-xs-offset-3 col-xs-9">
                            <input type="submit" class="btn btn-primary" id="submitBuscarRecluso" value="Buscar" onclick="buscarRecluso(0);" style="display: none"> 
                            <input type="submit" class="btn btn-primary" id="inputImprimir" value="Imprimir" onclick="imprimir('divConsulta');" style="display:none">
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
                        <div id="divConsulta" class="col-xs-12" style="overflow: auto; width: 100%;">

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
        var ceresoDefecto = 0;
        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';
        imprimir = function (div) {
            var divContents = $("#" + div).html();
            var usuario = '<?php echo $_SESSION["nombre"]; ?>';
            fechaBaseDatos({hiddenFechaHoraHoy: "fecha-hora"});
            divContents = divContents.replace(/<input(.*?)>/g, '');
            divContents = divContents.replace(/Buscar:/g, '');
            divContents += "<br><br>Fecha y hora de consulta:  " + $("#hiddenFechaHoraHoy").val();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>SIGEJUPE</title>');
            printWindow.document.write('</head><body><center><img  src="img/encabezado.jpg"></center> <br><center><label >Usuario:  ' + usuario + '</label></center><br><br>');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
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
        detallesRecluso = function (jsonRecluso) {
            $("#paginacion").hide();
            $("#divConsulta").html("");
            var strDatos = "accion=consultarDetallesRecluso";
            strDatos += "&idRecluso=" + jsonRecluso.idRecluso;
            strDatos += "&idIngresoCereso="+jsonRecluso.idIngresoCereso;
            strDatos += "&paginacion=false";
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
                        $("#inputImprimir").show();
                        table += "<table id='tblResultadosGridAct' border='1' class='table table-hover table-striped table-bordered'>";
                        table += "<thead><tr>";
                        table += "<th></th><th></th><th></th><th></th>";
                        table += "</tr></thead><tbody>";
                        table += "<tr>";
                        table += "<td>Ministerio P&uacute;blico.:<br>Carpeta Inv.:</td>";
                        table += "<td><br>"+json.desAdscripcionMP+"<br>"+jsonRecluso.carpetaInv+"</td>";
                        table += "<td><br> Agente<br>Fecha delito</td>";
                        table += "<td><br>" + json.resultados[0].nombreP + " " + json.resultados[0].paternoP + " " + json.resultados[0].maternoP + "<br>"+fechaMySQLaNormal(json.resultados[0].fechaRegistro)+"</td>";
                        table += "</tr>";
                        table += "<tr>";
                        table += "<td>Imputado <br>Nombre:</td>";
                        table += "<td><br>"+jsonRecluso.nombre+" "+jsonRecluso.paterno+" "+jsonRecluso.materno+"</td>";
                        table += "<td><br> Genero:</td>";
                        table += "<td><br>" + json.resultados[0].desGenero+ "</td>";
                        table += "</tr>";
                        table += "<tr>";
                        table += "<td>Delito (S)</td>";
                        var delitos="";
                        var catDelitos="";
                        for (var i = 0; i < json.totalCount; i++) {
                            if(json.resultados[i].desDelito!=""){
                                delitos+=(i+1)+".- "+json.resultados[i].desDelito+"<br>";
                                catDelitos+=(i+1)+".- "+json.resultados[i].desCatDelito+"<br>";
                            }
                        }
                        table +="<td>"+delitos+"</td>";
                        table += "<td><br>Clasificaci&oacute;n: </td>";
                        table += "<td>"+catDelitos+"</td>";
                        table += "</tr>";
                        table += "</tbody></table>";
                        $("#divConsulta").html(table);
                        $("#tblResultadosGridAct").DataTable({
                            paging: false
                        });
                    } else {
                        $("#inputImprimir").hide();
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
        };
        buscarRecluso = function (bandera) {
            if (bandera == 2) {
                $("#cmbPaginacion").val(1);
            }
            if (bandera == 0) {
                $("#cmbNumReg").val("10");
                $("#cmbPaginacion").val("1");
                $("#paginacion").hide();
            }
            $("#divConsulta").html("");
            var strDatos = "accion=consultarDetallesRecluso";
            strDatos += "&nombreCompleto=" + $("#txtNombre").val();
            if ($("#cmbCeresos").val() > 1) {
                strDatos += "&cveCereso=" + $("#cmbCeresos").val();
            }
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
                    if ($("#cmbCeresos").val() == 0) {
                        $("#divAlertWarning").html("Error! Seleccione un cereso");
                        $("#divAlertWarning").show("slide");
                        setTimeAlert("divAlertWarning");
                        return false;
                    }
                },
                success: function (datos) {
                    //console.log(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        $("#inputImprimir").show();
                        table += "<table id='tblResultadosGridAct' border='1' class='table table-hover table-striped table-bordered'>";
                        table += "<thead><tr>";
                        table += "<th>N&uacute;m.</th><th>Nombre</th><th>Carpeta de Inv.</th><th>NUC</th><th>Oficio</th><th>Cereso</th><th>Fecha de ingreso</th>";
                        table += "</tr></thead><tbody>";
                        var indice = $("#cmbPaginacion").val();
                        indice = (indice - 1) * $("#cmbNumReg").val();
                        var jsonDatos = null;
                        for (var i = 0; i < json.totalCount; i++) {
                            jsonDatos = JSON.stringify(json.resultados[i]);
                            table += "<tr  style='cursor: pointer;' onclick='detallesRecluso(" + jsonDatos + ")'>";
                            table += "<td > " + (i + 1 + indice) + "</td>";
                            table += "<td>" + json.resultados[i].nombre + " " + json.resultados[i].paterno + " " + json.resultados[i].materno + "</td>";
                            table += "<td>" + json.resultados[i].carpetaInv + "</td>";
                            table += "<td>" + json.resultados[i].nuc + "</td>";
                            table += "<td>" + json.resultados[i].oficio + "</td>";
                            table += "<td>" + $("#cmbCeresos option[value='" + json.resultados[i].cveCereso + "']").text() + "</td>";
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
                        $("#inputImprimir").hide();
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
        };
        calcularPaginas = function () {
            var strDatos = "paginacion=false";
            if ($("#cmbCeresos").val() > 1) {
                strDatos += "&cveCereso=" + $("#cmbCeresos").val();
            }
            strDatos += "&cantxPag=" + $("#cmbNumReg").val();
            strDatos += "&pag=" + $("#cmbPaginacion").val();
            if ($("#radioFecha").is(':checked')) {
                strDatos += "&txtFecInicialBusqueda=" + $("#fechaConsultar").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#fechaConsultarEnd").val();
            }
            var url = "../fachadas/sigejupe/reclusos/ReclusosFacade.Class.php";
            strDatos += "&accion=consultarDetallesRecluso";//getPaginasReclusos
            strDatos += "&nombreCompleto=" + $("#txtNombre").val();
            //strDatos += "&paterno=" + $("#txtPaterno").val();
            //strDatos += "&materno=" + $("#txtMaterno").val();
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
        ceresosPermitidos = function () {
            
            var strDatos = "accion=consultarDescripciones";
            strDatos += "&cveAdscripcion="+juzgadoSesion;
            strDatos += "&pag=1";
            strDatos += "&cantxPag=10";
            
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ceresosadscripciones/CeresosadscripcionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    //console.log(datos);
                    var json = "";
                    var combo = "<select id='cmbCeresos' class='form-control' name='cmbCeresos'>";
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
                        combo = "<select id='cmbCeresos' class='form-control' name='cmbCeresos'>";
                        combo += "<option value='-1'>NO DISPONIBLES</option>";
                    }
                    combo += "</select>";
                    $("#cmbCeresos").html(combo);
                    $("#cmbCeresos").val(ceresoDefecto);
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        /*cargarCeresos = function () {
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
        };*/
        limpiar = function () {
            $("#radioFecha").prop("checked", "");
            radioFecha();
            $("#inputImprimir").hide();
            $("#cmbCeresos").val(ceresoDefecto);
            $("#txtNombre").val("");
            $("#txtCarpetaInv").val("");
            $("#txtNuc").val("");
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
            if ((teclaAscii > 47) && (teclaAscii < 58) || (teclaAscii == 8) || (teclaAscii == 9)) {
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
                if (fechaHora[1] == null) {
                    return fechaNormal;
                }
                var hora = fechaHora[1];
                hora = hora.split(":");
                return fechaNormal + " " + hora[0] + ":" + hora[1];
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
                                    if (vnombre.nomFormulario == "CONSULTAS") {
                                        var hijos = vnombre.hijos;
                                        $.each(hijos, function (k2, nombreHijo) {
                                            if (nombreHijo.nomFormulario == 'IMPUTADOS CERESOS') {
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
            //cargarCeresos();
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