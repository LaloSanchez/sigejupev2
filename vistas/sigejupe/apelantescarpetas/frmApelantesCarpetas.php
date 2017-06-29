<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idCarpetaJudicial = (isset($_POST['idCarpetajudicial'])) ? $_POST['idCarpetajudicial'] : '';
    ?>

    <style>
        .tblGridAgrega{
            margin-top: 20px;
            font-family: arial;
            font-size: 14px;
            text-align: center;
        }
        .trGridAgrega{
            color: #ffffff;
            background-color: #881518;
        }
        .mayuscula{  
            text-transform: uppercase;  
        }  
        .trSeleccion:hover{
            background-color:#FFECED;
            cursor: pointer;
        } 
        .requerido {
            color: darkred;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Apelante(s) Tocas                        
            </h5>
            <input type="hidden" readonly class="form-control" id="hddIdCarpetaJudicial" value="<?php echo $idCarpetaJudicial ?> ">
            <input type="hidden" readonly class="form-control" id="hddIdApelanteCarpeta">
            <input id="hddCveEtapaProcesal" name="hddCveEtapaProcesal" type="hidden" readonly>
            <input id="hddCveTipoCarpeta" name="hddCveTipoCarpeta" type="hidden" readonly>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <div class="tab-content tabs-flat">
                    <div class="tabbable tabs-left">
                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="divGeneralApelante">
                                <p class="col-lg-12" style="color:darkred;">
                                    Los campos marcados con (*) son obligatorios.
                                </p>
                                <div id="NombreGeneral" style="margin-left:15px; margin-bottom: 25px; "></div>
                                <div class="col-lg-12">
                                    <label class="control-label col-xs-3" for="cmbTipoPersonaApelante">Tipo de Persona <span class="requerido">(*)</span></label>
                                    <div class="col-lg-9">
                                        <select id="cmbTipoPersonaApelante" class="form-control mayuscula" name="cmbTipoPersonaApelante" onchange="validaPersona();">
                                            <option value="0">Seleccione una opci&Oacute;n</option>
                                        </select>
                                    </div>  
                                </div>  
                                <div id="divPersonaMoralApelante" style="display:none;">
                                    <div class="col-lg-12">
                                        <label class="control-label" for="txtnombreMoralApelante">Nombre Persona Moral <span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtnombreMoralApelante" name="txtnombreMoralApelante">
                                        </div> 
                                    </div> 
                                </div>
                                <div id="divPersonaFisicaApelante">
                                    <div class="col-lg-4" id="divNombreApelante">
                                        <label class="control-label" for="txtNombreApelante">Nombre <span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtNombreApelante" name="txtNombreApelante">
                                        </div>
                                    </div>
                                    <div class="col-lg-4" id="divPaternoApelante">
                                        <label class="control-label" for="txtPaternoApelante">Paterno <span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtPaternoApelante" name="txtPaternoApelante">
                                        </div>
                                    </div>
                                    <div class="col-lg-4" id="divMaternoApelante">
                                        <label class="control-label" for="txtMaternoApelante">Materno <span class="requerido">(*)</span></label>
                                        <div>
                                            <input type="text" class="form-control mayuscula" id="txtMaternoApelante" name="txtMaternoApelante">
                                        </div>
                                    </div>
                                    <div class="col-lg-4" id="divGeneroApelante">
                                        <label class="control-label" for="cmbGeneroApelante">G&eacute;nero <span class="requerido">(*)</span></label>
                                        <div>
                                            <select id="cmbGeneroApelante" class="form-control" name="cmbGeneroApelante">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <div class="col-lg-8"> 
                                <label class="control-label">Domicilio <span class="requerido">(*)</span></label>
                                <div>
                                    <input type="text" id="domicilio" placeholder="DOMICILIO" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();"  val="" class="form-control mayuscula"/>
                                </div>
                            </div>
                            <div class="col-lg-4"> 
                                <label class="control-label">Correo electr&oacute;nico</label>
                                <div>
                                    <input type="email" id="correoApelante" placeholder="CORREO" class="form-control" value=""  />
                                </div>
                            </div>
                            <div class="col-lg-4" id="divTipoApelante">
                                    <label class="control-label" for="cmbTipoApelante">Tipo Apelante<span class="requerido">(*)</span></label>
                                    <div>
                                        <select id="cmbTipoApelante" class="form-control mayuscula" name="cmbTipoApelante">
                                            <option value="0">Seleccione una opci&oacute;n</option>
                                        </select>
                                    </div>
                                </div>
                                <br><br><br><br>
                                <div class="col-lg-12">
                                    <button id="btnGuardarApelante" class="btn btn-primary" onclick="agregaApelante();">Guardar Apelante</button>
                                    <button id="btnLimpiarApelante" class="btn btn-primary" onclick="limpiar();">Limpiar</button>
                                </div> 
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group col-lg-12"></div> 
            <br><br>
            <div class="form-group" >
                <div id="divAlertWarning" class="alert alert-warning alert-dismissable" style="display:none;">                    
                    <strong>Advertencia!</strong> Mensaje
                </div>
                <div id="divAlertSuccesApelante" class="alert alert-success alert-dismissable" style="display:none;">

                    <strong>Correcto!</strong> Mensaje
                </div>
                <div id="divAlertDager" class="alert alert-danger alert-dismissable" style="display:none;">

                    <strong>Error!</strong> Mensaje
                </div>
                <div id="divAlertInfoApelante" class="alert alert-info alert-dismissable" style="display:none;">

                    <strong>Informaci&oacute;n!</strong> Mensaje
                </div>
            </div>    
            <div class="form-group col-lg-12">
                <div class="form-group col-lg-12">
                    <div style="text-align: center">
                        <label class="caption">LISTADO DE APELANTES</label>
                    </div>
                    <div id="divResultadosGeneral"></div>
                </div> 
            </div>
            <div  id="modalSuspencionCondicional" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    
                    <div class="modal-content" style="min-width: 800px !important;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div id="contenidoSuspencionCondicional">
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--</div>-->                
    <!--            </div>
            </div>-->

    <!--    </body>
    </html>-->
    <script type="text/javascript">


        validaPersona = function () {
            if ($("#cmbTipoPersonaApelante").val() == 1) {
                $('#divPersonaMoralApelante').hide();
                muestraOcultaCampos(2);
            } else if ($("#cmbTipoPersonaApelante").val() == 2 ) {
                $('#divPersonaMoralApelante').show();
                muestraOcultaCampos(1);
                $("#chkDetenidoApelante").prop("checked", false);
            } else if ( $("#cmbTipoPersonaApelante").val() == 3 ) {
                $('#divPersonaMoralApelante').show();
                muestraOcultaCampos(1);
                
            }
        };

        
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

        muestraOcultaCampos = function (cve) {
            if (cve == 1) {            
                $("#divNombreApelante").hide();
                $("#divPaternoApelante").hide();
                $("#divMaternoApelante").hide();
                $("#divGeneroApelante").hide();
                
            } else {
                $("#divNombreApelante").show();
                $("#divPaternoApelante").show();
                $("#divMaternoApelante").show();
                $("#divGeneroApelante").show();
                
            }
        }

    //////////////////CARGA COMBOS////////////////////////////////////////////

        comboTipoPersonaApelante = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tipospersonas/TipospersonasFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoPersonaApelante').empty();
                        $('#cmbTipoPersonaApelante').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if ( object.cveTipoPersona == "1" || object.cveTipoPersona == "2" || object.cveTipoPersona == "3" ) {
                                    $('#cmbTipoPersonaApelante').append('<option value="' + object.cveTipoPersona + '">' + object.desTipoPersona + '</option>');
                                }
                                
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Tipos Personas Apelantes:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tipos personas imputados:\n\n" + otroobj);
                }
            });
        };
        
        comboGeneroApelante = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/generos/GenerosFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbGeneroApelante').empty();
                        $('#cmbGeneroApelante').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbGeneroApelante').append('<option value="' + object.cveGenero + '">' + object.desGenero + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Genero Apelantes:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Genero imputados:\n\n" + otroobj);
                }
            });
        };
        
        comboTipoApelante = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposapelantes/TiposapelantesFacade.Class.php",
                global: false,
                async: false,
                dataType: "json",
                data: {accion: "consultar", activo: "S", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbTipoApelante').empty();
                        $('#cmbTipoApelante').append('<option value="0">Seleccione una opci&oacute;n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                
                                $('#cmbTipoApelante').append('<option value="' + object.cveTipoApelante + '">' + object.desTipoApelante + '</option>');
                                
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar Tipo Apelantes:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de  Tipo apelantes:\n\n" + otroobj);
                }
            });
        };
        
    //////////////////FIN COMBOS////////////////////////////////////////////
    //////////////////fUNCION VALIDA / GUARDAR////////////////////////////////////////////

        validateApelanteStep2 = function () {
            var mensaje = "";
            var error = true;
            if ($("#cmbTipoPersonaApelante").val() == "1") {
                if ($('#txtNombreApelante').val() == "" || $('#txtNombreApelante').val() == "0") {
                    mensaje += "*Capture Nombre del Apelante\n";
                    error = false;
                }
                if ($('#txtPaternoApelante').val() == "" || $('#txtPaternoApelante').val() == "0") {
                    mensaje += "*Capture apellido del Apelante\n";
                    error = false;
                }

                if ($('#cmbGeneroApelante').val() == "" || $('#cmbGeneroApelante').val() == "0") {
                    mensaje += "*Seleccione Genero del Apelante\n";
                    error = false;
                }

                if ($('#cmbTipoApelante').val() == "" || $('#cmbTipoApelante').val() == "0") {
                    mensaje += "*Selecciona  Tipo Apelante\n";
                    error = false;
                }
            if ( $("#domicilio").val() == "" ) {
                mensaje += "*Capture el domicilio del Apelante\n";
                error = false;
            }
            if ($('#correoApelante').val() != "") {
                var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
                if (!regex.test($('#correoApelante').val().trim())) {
                    mensaje += "*EMail no valido \n";
                    error = false;
                }
            }
            } else if ($("#cmbTipoPersonaApelante").val() == "2" || $("#cmbTipoPersonaApelante").val() == "3") {
                if ($('#txtnombreMoralApelante').val() == "" || $('#txtnombreMoralApelante').val() == "0") {
                    mensaje += "*Escribe el Nombre Persona Moral\n";
                    error = false;
                }
                
                if ($('#cmbTipoApelante').val() == "" || $('#cmbTipoApelante').val() == "0") {
                    mensaje += "*Selecciona  Tipo Apelante\n";
                    error = false;
                }
                if ( $("#domicilio").val() == "" ) {
                    mensaje += "*Capture el domicilio del Apelante\n";
                    error = false;
                }
                if ($('#correoApelante').val() != "") {
                    var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
                    if (!regex.test($('#correoApelante').val().trim())) {
                        mensaje += "*EMail no valido \n";
                        error = false;
                    }
                }
            } else if ($("#cmbTipoPersonaApelante").val() == "0") {
                mensaje += "*Seleccione el Tipo de Persona\n";
                error = false;
            }
            
            if (!error) {
                alert(mensaje);
            }
            return error;
        };

        agregaApelante = function () {
            if ($("#hddIdCarpetaJudicial").val() != "") {
                var error = true;
                if (validateApelanteStep2()) {
                    
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/apelantescarpetas/ApelantescarpetasFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {accion: "guardarApelante",
                            idApelanteCarpeta: $("#hddIdApelanteCarpeta").val(),
                            idCarpetaJudicial: $("#hddIdCarpetaJudicial").val(),
                            nombre: $("#txtNombreApelante").val(),
                            paterno: $("#txtPaternoApelante").val(),
                            materno: $("#txtMaternoApelante").val(),
                            cveGenero: $("#cmbGeneroApelante").val(),
                            cveTipoPersona: $("#cmbTipoPersonaApelante").val(),
                            cveTipoApelante: $("#cmbTipoApelante").val(),
                            nombreMoral: $("#txtnombreMoralApelante").val(),
                            domicilio: $("#domicilio").val(),
                            email: $("#correoApelante").val(),
                            activo: 'S'
                        },
                        beforeSend: function (objeto) {
    //                        ////ToggleLoading(1);
                        },
                        success: function (datos) {
    //                        ////ToggleLoading(2);

                            if (datos.status == 'Ok') {
                                if(datos.msj != "" ) {
                                    var msg = datos.msj;
                                } else {
                                    var msg = "";
                                }
                                $("#divAlertSuccesApelante").html("");
                                $("#divAlertSuccesApelante").html("Registro guardado exitosamente " + msg);
                                $("#divAlertSuccesApelante").show("");
                                setTimeAlert("divAlertSuccesApelante");
                                consultarApelantes();
                                limpiarApelante();
                            } else {
                                $("#divAlertWarning").html("");
                                $("#divAlertWarning").html(datos.msj);
                                $("#divAlertWarning").show("");
                                setTimeAlert("divAlertWarning");
                            }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                        }
                    });
                } else {
                    error = false;
                }
                return error;
            } else {
                alert("Seleccione una carpeta");
            }
        };

        
    //////////////////////////CONSULTAS//////////////////////////////

        consultarApelantes = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/apelantescarpetas/ApelantescarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idCarpetaJudicial: $("#hddIdCarpetaJudicial").val(),
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    console.log(datos);
                    $('#divResultadosGeneral').html("");
                    if (datos.totalCount > 0) {
                        var table = "";
                        table += '<table border="1" align="center"  width="90%"  class="table table-bordered tblGridAgrega">';
                        table += '<tr class="trGridAgrega">';
                        table += '<th width="20%">Tipo de persona</th>';
                        table += '<th width="40%" >Nombre</th>';
                        table += '<th width="10%">Sexo</th>';
                        table += '<th width="20%">Tipo Apelante</th>';
                        table += '<th width="10%">Eliminar</td></tr>';
                        for (var i = 0; i < datos.totalCount; i++) {
                            table += '<tr class="trSeleccion" ><td id="' + datos.data[i].idApelanteCarpeta + '" style="cursor:pointer;" onclick="seleccionaApelante(' + datos.data[i].idApelanteCarpeta + ')" >' + datos.data[i].desTipoPersona + "</td>";
                            if (datos.data[i].cveTipoPersona == '1') {
                                table += '<td style="cursor:pointer;" onclick="seleccionaApelante(' + datos.data[i].idApelanteCarpeta + ')" >' + datos.data[i].nombre + " " + datos.data[i].paterno + " " + datos.data[i].materno + '</th>';
                            } else {
                                table += '<td style="cursor:pointer;" onclick="seleccionaApelante(' + datos.data[i].idApelanteCarpeta + ')" >' + datos.data[i].nombreMoral + '</td>';

                            }
                            table += '<td style="cursor:pointer;" onclick="seleccionaApelante(' + datos.data[i].idApelanteCarpeta + ')" >' + datos.data[i].desGenero + '</td>';
                            table += '<td style="cursor:pointer;" onclick="seleccionaApelante(' + datos.data[i].idApelanteCarpeta + ')" >' + datos.data[i].desTipoApelante + '</td>';
                            table += "<td><center><img src='img/eliminar.png' width='27px' style='cursor:pointer;' onclick='eliminaApelante(" + datos.data[i].idApelanteCarpeta + ")'></center></td></tr>";
                        }
                        table += '</table>';
                        $('#divResultadosGeneral').html(table);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };
        
        consultarCarpetasJudiciales = function(){
            var idCarpetaJudicial = $("#hddIdCarpetaJudicial").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    accion: "consultar",
                    idCarpetaJudicial: idCarpetaJudicial,
                    activo: "S"
                },
                beforeSend: function(objeto){
                    
                },
                success: function (datos) {
                    if (datos.totalCount > 0) {
                        $("#hddCveEtapaProcesal").val(datos.data[0].cveEtapaProcesal);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };
    /////////////////////Selecciones//////////////////////////////////
        seleccionaApelante = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/apelantescarpetas/ApelantescarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    idApelanteCarpeta: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
    //                //ToggleLoading(1);
                },
                success: function (datos) {
    //                //ToggleLoading(2);
                    if (datos.status == 'Ok') {
                        $('#myTab3 a:first').tab('show');
                        $("#btnGuardarApelante").text("Modificar Apelante");
    //                    $("#divGeneralApelante").addClass("tab-pane active");
                        $("#hddIdApelanteCarpeta").val(datos.data[0].idApelanteCarpeta);
                        $("#hddIdCarpetaJudicial").val(datos.data[0].idCarpetaJudicial);
                        $("#cmbTipoPersonaApelante").val(datos.data[0].cveTipoPersona);
                        validaPersona();
                        if (datos.data[0].cveTipoPersona == 1) {
                            $("#txtNombreApelante").val(datos.data[0].nombre);
                            $("#txtPaternoApelante").val(datos.data[0].paterno);
                            $("#txtMaternoApelante").val(datos.data[0].materno);
                            $("#cmbGeneroApelante").val(datos.data[0].cveGenero);
                            
                        } else if ( datos.data[0].cveTipoPersona == 2 ) {
                            $("#txtnombreMoralApelante").val(datos.data[0].nombreMoral);

                        } else if ( datos.data[0].cveTipoPersona == 3 ) {
                            $("#txtnombreMoralApelante").val(datos.data[0].nombreMoral);
                            
                        }
                        $("#cmbTipoApelante").val(datos.data[0].cveTipoApelante);
                        if ( datos.data[0].domicilio != "" ) {
                            $("#domicilio").val(datos.data[0].domicilio);
                        }
                        if ( datos.data[0].email != "" ) {
                            $("#correoApelante").val(datos.data[0].email);
                        }
                        if (datos.data[0].cveTipoPersona == 1) {
                            var nombre = datos.data[0].nombre + " " + datos.data[0].paterno + " " + datos.data[0].materno;
                        } else {
                            var nombre = datos.data[0].nombreMoral;
                        }
                        var referencia = "";
                        if (datos.data[0].cveTipoCarpeta != "") {
                            $("#hddCveTipoCarpeta").val(datos.data[0].cveTipoCarpeta);
                            referencia += "  <br>Carpeta: " + datos.data[0].desCarpeta + " No: " + datos.data[0].numero + "/" + datos.data[0].anio;
                        } else if (datos.data[0].nuc != "" && datos.data[0].carpetaInv != "") {
                            referencia += "  <br>Carpeta de inv: " + datos.data[0].carpetaInv + " NUC: " + datos.data[0].nuc;
                        } else if (datos.data[0].nuc != "" && datos.data[0].carpetaInv == "") {
                            referencia += " <br> NUC: " + datos.data[0].nuc;
                        } else if (datos.data[0].nuc == "" && datos.data[0].carpetaInv != "") {
                            referencia += "  <br>Carpeta de inv: " + datos.data[0].carpetaInv;
                        }
                        $('#NombreGeneral').html("<b>Capture los datos generales del apelante: " + nombre + "." + referencia + "<b><br>");
                        
    //                    cveTipoReincidencia: '1'
                    } else {
                        alert(datos.msj);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
                }
            });
        };

        
    ///////////////////////// FUNCIONES ELMINAR //////////////////////////////////////////////
        eliminaApelante = function (id) {
            if ($("#hddIdCarpetaJudicial").val() != "") {
                bootbox.dialog({
                    message: "\u00bf Desea eliminar al apelante? ",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {                
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/apelantescarpetas/ApelantescarpetasFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: {accion: "eliminar",
                                        idApelanteCarpeta: id
                                    },
                                    beforeSend: function (objeto) {
                                        //ToggleLoading(1);
                                    },
                                    success: function (datos) {
                                        //ToggleLoading(2);

                                        if (datos.status == 'Ok') {
                                            $("#divAlertSuccesApelante").html("");
                                            $("#divAlertSuccesApelante").html("El apelante se elimino de forma corrrecta");
                                            $("#divAlertSuccesApelante").show("");
                                            setTimeAlert("divAlertSuccesApelante");
                                            consultarApelantes();
                                            limpiar();
                                        } else {
                                            $("#divAlertWarning").html("");
                                            $("#divAlertWarning").html("'" + datos.msj + "'");
                                            $("#divAlertWarning").show("");
                                            setTimeAlert("divAlertWarning");
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        alert("Error en la peticion de Consulta de carpeta:\n\n" + otroobj);
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
                alert("Seleccione una carpeta");
            }
        };

        
    ///////////////////////////FUNCIONES LIMPIAR
        limpiar = function () {
            limpiarApelante();
            $("#btnGuardarApelante").text("Agregar Apelante");
            $('#NombreGeneral').html("");
        };

        limpiarApelante = function () {
            $("#hddIdApelanteCarpeta").val("");
            $("#txtNombreApelante").val("");
            $("#txtPaternoApelante").val("");
            $("#txtMaternoApelante").val("");
            $("#cmbGeneroApelante").val(0);
            $("#cmbTipoPersonaApelante").val(0);
            $("#cmbTipoApelante").val(0);
            $("#txtnombreMoralApelante").val("");
            $("#domicilio").val("");
            $("#correoApelante").val("");
            $('#divPersonaMoralApelante').hide();
            muestraOcultaCampos(2);
            $("#btnGuardarApelante").text("Agregar Apelante");
            $("#carpeta").hide();
            $("#cmbCarpeta").val(0);
        };

        
        $(function () {
            
            consultarCarpetasJudiciales();
            comboTipoPersonaApelante();
            comboGeneroApelante();
            comboTipoApelante();
            consultarApelantes();
            
        });

    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>