<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    $idCarpetaJudicial = isset($_POST['idCarpetajudicial']) ? $_POST['idCarpetajudicial'] : '';
    $idTipoActuacion = isset($_POST['idTipoActuacion']) ? $_POST['idTipoActuacion'] : '';
    date_default_timezone_set('America/Mexico_City');
    $fecha = date("d/m/Y");
    ?>
    <!doctype html>
    <style type="text/css">
        .mayuscula{  
            text-transform: uppercase;  
        } 
        .requerido {
            color: darkred;
        }
    </style>
    <div class="panel panel-default">
        <!--    <h5 class="panel-title" id="h5titulo">                                                            
                Registro de Oficios
            </h5>-->
        <div class="panel-body">
            <input type="hidden" readonly class="form-control" id="hddIdCarpetaJudicial" value="<?php echo $idCarpetaJudicial; ?>">
            <input type="hidden" id="idTipoActuacion" value="<?php echo $idTipoActuacion; ?>">
            <div id="divFormulario" class="form-horizontal">
                <p class="col-lg-12" style="color:darkred;">
                    Los campos marcados con (*) son obligatorios.
                </p>
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbJuzgados">Tribunal  <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <select id="cmbJuzgados" class="form-control" name="cmbJuzgados" disabled="disabled" onchange="comboTipoCarpeta()">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>  
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbTipoCarpeta">Tipo Carpeta</label>
                    <div class="col-xs-9">
                        <select id="cmbTipoCarpeta" class="form-control" name="cmbTipoCarpeta" disabled="disabled" onchange="camposRequeridos()">
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3" id="numero-anio">N&uacute;mero</label>
                    <div class="col-xs-9">
                        <input type="text" id="txtNumero" class="form-inline" id="txtNumero" placeholder="N&uacute;mero" disabled="disabled">/<input type="text" class="form-inline" id="txtAnio" id="txtAnio" placeholder="A&ntilde;o" disabled="disabled">
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" id="carpeta-investigacion">Carpeta de Investigaci&oacute;n</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control mayuscula" disabled id="txtCarpetaInvestigacion" placeholder="Carpeta de Investigaci&oacute;n" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" id="numero-causa">NUC (N&uacute;mero &uacute;nico de causa)</label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control mayuscula " disabled id="txtNumeroUnicoCausa" placeholder="NUC" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-xs-3">Magistrado Ponente <span class="requerido">(*)</span></label>
                <div class="col-xs-6" id="divJuez">
                    <select id="idJuzgadorPropietario" name="idJuzgadorPropietario" class="form-control">
                        <option value="" >Selecciona una opci&oacute;n</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                    <label class="control-label col-xs-3">N&uacute;mero de Imputados   <span class="requerido">(*)</span> </label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="txtNumeroImputados" placeholder="N&uacute;mero de Imputados" maxlength="3" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">N&uacute;mero de Ofendidos y/o v&iacute;ctimas   <span class="requerido">(*)</span></label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="txtNumeroOfendidos" placeholder="N&uacute;mero de Ofendidos" maxlength="3" disabled="disabled">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">N&uacute;mero de Delitos   <span class="requerido">(*)</span></label>
                    <div class="col-xs-6">
                        <input type="text" class="form-control" id="txtNumeroDelitos" placeholder="N&uacute;mero de Delitos" maxlength="3" disabled="disabled">
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbConsignacion">Consignaci&oacute;n   <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <select id="cmbConsignacion" class="form-control" name="cmbConsignacion">
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbConsignacionA">Acciones <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <select id="cmbConsignacionA" class="form-control" name="cmbConsignacionA">
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbEtapaProcesal">Etapa Procesal <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <select id="cmbEtapaProcesal" class="form-control" name="cmbEtapaProcesal" disabled="disabled">
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbEstatusCarpeta">Estatus Carpeta <span class="requerido">(*)</span></label>
                    <div class="col-xs-9">
                        <select id="cmbEstatusCarpeta" class="form-control" name="cmbEstatusCarpeta">
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Observaciones</label>
                    <div class="col-xs-9">
                        <textarea style="resize: none;" rows="5" id="txtObservaciones" class="form-control mayuscula" placeholder="Observaciones"></textarea>
                    </div>
                </div>

                <div class="form-group" >
                    <div id="divAlertWarningSolicitud" class="alert alert-warning alert-dismissable" style="display:none;">                    
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="divAlertSuccesSolicitud" class="alert alert-success alert-dismissable" style="display:none;">

                        <strong>Correcto!</strong> Mensaje
                    </div>
                    <div id="divAlertDagerSolicitud" class="alert alert-danger alert-dismissable" style="display:none;">

                        <strong>Error!</strong> Mensaje
                    </div>
                    <div id="divAlertInfoSolicitud" class="alert alert-info alert-dismissable" style="display:none;">

                        <strong>Informaci&oacute;n!</strong> Mensaje
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary guarda" value="Guardar" onclick="saveStepOne()">                                                                  
                        <input type="submit" class="btn btn-primary" id="limpia" value="Limpiar" onclick="cleanStepOne()">
                        <input type="submit" class="btn btn-primary" id="imprimirAcuse" value="Imprimir Acuse" onclick="imprimir()">
                        <!--<input type="submit" class="btn btn-primary" value="Habilitar Etapa Procesal" id="radicar" onClick="radicarCarpeta()">-->
                    </div>
                </div>
                <br>
                <div id="divResultados" class="col-xs-12"></div>
                <br><br>
            </div>

            <!--<div id="divConsulta"  class="form-horizontal" style="display: none">                                                              
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbJuzgadosConsulta">Tribunal</label>
                    <div class="col-xs-9">
                        <select id="cmbJuzgadosConsulta" class="form-control" name="cmbJuzgadosConsulta">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>  
                <div class="form-group col-lg-12">
                    <label class="control-label col-xs-3" for="cmbTipoCarpetaConsulta">Tipo Carpeta</label>
                    <div class="col-xs-9">
                        <select id="cmbTipoCarpetaConsulta" class="form-control" name="cmbTipoCarpetaConsulta">
                            <option>Seleccione una opci&oacute;n</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">N&uacute;mero</label>
                    <div class="col-xs-9">
                        <input type="text" id="txtNumeroConsulta" class="form-inline" id="txtNumeroConsulta" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="txtAnioConsulta" name="txtAnioConsulta" placeholder="A&ntilde;o">
                    </div>                                
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Carpeta de Investigaci&oacute;n</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="txtCarpetaInvestigacionConsulta" placeholder="Carpeta de Investigaci&oacute;n">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">NUC (N&uacute;mero unico de causa)</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" id="txtNumeroUnicoCausaConsulta" placeholder="NUC">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Fecha inicio</label>
                    <div class="col-xs-3">
                        <input type="text" id="txtFechaInicio" value="<?php //echo $fecha ?>" placeholder="Fecha Inicio">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3">Fecha fin</label>
                    <div class="col-xs-3">
                        <input type="text" id="txtFechaFin" value="<?php //echo $fecha ?>" placeholder="Fecha Fin">
                    </div>
                </div>
                <br>
                <br>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary" value="Consultar" onclick="selectStepOne(1)">                                    
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">  
                        <input type="submit" class="btn btn-primary" value="Limpiar" onclick="cleanStepOneConsult()">                                    
                    </div>
                </div>
                <div id="divConsultaGrid" style="display: none" class="col-xs-12">
                    <div class="col-xs-6"></div>
                    <div class="col-xs-6">
                        <div class="form-group col-xs-3">
                            <label class="control-label" id="totalReg"></label>
                        </div>

                        <div id="divPaginador" class="form-group col-xs-3" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="selectStepOne();">
                                <option value="1"></option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-xs-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="selectStepOne(1);">
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

                    <div id="divResultados" class="col-xs-12"></div>
                </div>
            </div>-->
                
        </div>
    </div>
    <script type="text/javascript">


        changeDivForm = function (opc) {
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
            } else if (opc === 2) {
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
            }
        };
        comboJuzgados = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "regionTribunal", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgados').empty();
                        $('#cmbJuzgados').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if ( object.cveTipojuzgado == '5' || object.cveTipojuzgado == '8' ) {
                                    $('#cmbJuzgados').append('<option value="' + object.cveJuzgado + '" data-tipoJuzgado="' + object.cveTipojuzgado + '">' + object.desJuzgado + '</option>');
                                }
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tribunales:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tribunal:\n\n" + otroobj);
                }
            });
        };
    
    consultarJuzgadores = function(){
        var cveJuzgado = $("#cmbJuzgados").val();
            $.ajax({
                 type: "POST",
                    url: "../fachadas/sigejupe/juzgadores/JuzgadoresFacade.Class.php",
                    data: {
                    cveJuzgado : cveJuzgado,
                    activo: 'S',
                    cveTipoJuzgador: '7',
                    accion : "consultarJuzgadoresMagistradosPorAdscripcion"},
                    async: true,
                    dataType: "html",
                beforeSend: function(objeto) {
                    //ToggleLoading(1);
                },
                success: function(datos){
                    try{
                        var result = eval("(" + datos + ")");
                        var html = "";
                        if(result.totalCount > 0){
                            $("#divJuez").empty();
                            
                            html += '<select id="idJuzgadorPropietario" name="idJuzgadorPropietario" style="width: 100%;">';
                            html += '<option value="">Selecciona una opci&oacute;n</option>';
                            
                            for(var n = 0; n < result.totalCount; n++){
                                html += '<option value="' + result.resultados[n].idJuzgador + '">' + result.resultados[n].nombre + ' ' + result.resultados[n].paterno + ' ' + result.resultados[n].materno + '</option>';
                            }
                            html += '</select>';
                            $("#divJuez").html(html);
                            //if ( $("#cmbTipoCarpeta").val() == 4 ) {
                                $("#idJuzgadorPropietario").select2();
                            //} 
                            var idCarpeta = $('#hddIdCarpetaJudicial').val();
                            var cveTipocarpeta = $("#cmbTipoCarpeta").val();
                            obtenerJuzgadorCarpeta(idCarpeta,cveTipocarpeta);
                            //ToggleLoading(2);
                        } else{
                            html += '<select id="idJuzgadorPropietario" name="idJuzgadorPropietario" class="form-control">';
                            html = '<option value="">No hay magistrados para esta adscripci&oacute;n</option>';
                            html += '</select>';
                            $("#divJuez").html(html);
                            //ToggleLoading(2);
                        }
                        
                    } catch(e){
                        //ToggleLoading(2);
                    }
                },
                error: function(objeto, quepaso, otroobj) {
                    //$("#info").hide();
                    //$(".limpia").show();
                    //$(".consulta").show();
                }
            });
        
    };
    
    obtenerJuzgadorCarpeta = function(idCarpetaJudicial, cveTipocarpeta){
        $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgadorescarpetas/JuzgadorescarpetasFacade.Class.php",
            async: false,
            dataType: "json",
            data: {
                idCarpetaJudicial: idCarpetaJudicial,
                activo: "S",
                accion: "consultar", 
                obligaPermiso: "false"
            },
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                try {
                    if (datos.totalCount > 0) {
                        //alert(cveTipocarpeta);
                        
                        //alert("No es tribunal");
                        //alert(datos.data[0].idJuzgador);
                        $('#idJuzgadorPropietario').val(datos.data[0].idJuzgador).trigger("change");
                        //alert($('#idJuzgadorPropietario').attr('name'));
                        
                    }
                } catch (e) {
                    alert("Error al cargar jueces propietarios:" + e);
                }
            },
            error: function (objeto, quepaso, otroobj) {
                alert("Error en la peticion de tipo carpeta:\n\n" + otroobj);
            }
        });
    };
    
        comboTipoCarpeta = function () {
            var cveTipoJuzgado = $("#cmbJuzgados :selected").attr("data-tipoJuzgado");
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
                        $('#cmbTipoCarpeta').empty();
                        $('#cmbTipoCarpeta').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if (object.cveTipoCarpeta == 6 && (cveTipoJuzgado == 5 || cveTipoJuzgado == 8)) {
                                    $('#cmbTipoCarpeta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
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
        comboJuzgadosConsulta = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar", obligaPermiso: "false"},
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbJuzgadosConsulta').empty();
                        $('#cmbJuzgadosConsulta').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbJuzgadosConsulta').append('<option value="' + object.cveJuzgado + '">' + object.desJuzgado + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar tribunales:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de tribunal:\n\n" + otroobj);
                }
            });
        };
        comboTipoCarpetaConsulta = function () {
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
                        $('#cmbTipoCarpetaConsulta').empty();
                        $('#cmbTipoCarpetaConsulta').append('<option value="">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbTipoCarpetaConsulta').append('<option value="' + object.cveTipoCarpeta + '">' + object.desTipoCarpeta + '</option>');
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
        comboConsignacion = function () {
            var numeroImputados = parseInt($("#txtNumeroImputados").val());
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/consignaciones/ConsignacionesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbConsignacion').empty();
                        $('#cmbConsignacion').append('<option value="0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                if ( numeroImputados == 1 ) {
                                    console.log(numeroImputados);
                                    if ( object.cveConsignacion != 3 ) {
                                        $('#cmbConsignacion').append('<option value="' + object.cveConsignacion + '">' + object.desConsignacion + '</option>');
                                    }
                                } else {
                                    $('#cmbConsignacion').append('<option value="' + object.cveConsignacion + '">' + object.desConsignacion + '</option>');
                                }
                                
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar consignacion:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de consignacion:\n\n" + otroobj);
                }
            });
        };
        
        comboConsignacionAccion = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/consignacionesacciones/ConsignacionesaccionesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbConsignacionA').empty();
                        $('#cmbConsignacionA').append('<option value="0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                             if(object.cveConsignacionA == 3 || object.cveConsignacionA == 4 || object.cveConsignacionA == 5 || object.cveConsignacionA == 6){   
                                $('#cmbConsignacionA').append('<option value="' + object.cveConsignacionA + '">' + object.desConsignacionA + '</option>');
                            }
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar consignacion:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de consignacion accion:\n\n" + otroobj);
                }
            });
        };
        
        comboEtapasProcesales = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/etapasprocesales/EtapasprocesalesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbEtapaProcesal').empty();
                        $('#cmbEtapaProcesal').append('<option value="0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbEtapaProcesal').append('<option value="' + object.cveEtapaProcesal + '">' + object.desEtapaProcesal + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar etapas procesales:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de etapas procesales:\n\n" + otroobj);
                }
            });
        };
        
        comboEstatusCarpeta = function () {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estatuscarpetas/EstatuscarpetasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultar",
                    obligaPermiso: "false"
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    try {
                        $('#cmbEstatusCarpeta').empty();
                        $('#cmbEstatusCarpeta').append('<option value="0">Seleccione una opci\u00f3n</option>');
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (count, object) {
                                $('#cmbEstatusCarpeta').append('<option value="' + object.cveEstatusCarpeta + '">' + object.desEstatusCarpeta + '</option>');
                            });
                        }
                    } catch (e) {
                        alert("Error al cargar etapas procesales:" + e);
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de etapas procesales:\n\n" + otroobj);
                }
            });
        };
        
        function camposRequeridos(){
            if ( $("#cmbTipoCarpeta").val() == 0 || $("#cmbTipoCarpeta").val() == "" ){
                $("#carpeta-investigacion").html("Carpeta de Investigaci&oacute;n <span class='requerido'>(*)</span>");
                $("#numero-causa").html("NUC (N&uacute;mero &uacute;nico de causa) <span class='requerido'>(*)</span>");
                $("#numero-anio").html("N&uacute;mero");
            } else {
                $("#numero-anio").html("N&uacute;mero <span class='requerido'>(*)</span>");
                $("#carpeta-investigacion").html("Carpeta de Investigaci&oacute;n");
                $("#numero-causa").html("NUC (N&uacute;mero &uacute;nico de causa)");
            }
        consultarJuzgadores();
        }
        
        validateConsultStep1 = function () {
            var mensaje = "";
            var error = false;

            if ($('#txtFechaInicio').val() != "" && $('#txtFechaFin').val() == "") {
                mensaje += "*Seleccione una fecha fin \n";
                error = true;
            }
            if ($('#txtFechaInicio').val() == "" && $('#txtFechaFin').val() != "") {
                mensaje += "*Seleccione una fecha inicio \n";
                error = true;
            }
            if (error) {
                alert(mensaje);
            }

            return error;
        };
        
        validateStep1 = function () {
            var mensaje = "";
            var error = false;
            if ($('#cmbJuzgados').val() == "" || $('#cmbJuzgados').val() == "0") {
                mensaje += "*Seleccione un tribunal \n";
                error = true;
            }
            if ($('#cmbTipoCarpeta').val() != 0 || $('#cmbTipoCarpeta').val() != "") {
                if ($('#txtNumero').val() == "" || $('#txtNumero').val() == "0") {
                    mensaje += "*Ingrese el n\u00famero de la carpeta \n";
                    error = true;
                } else {
                    if ($('#txtAnio').val() == "" || $('#txtAnio').val() == "0") {
                        mensaje += "*Ingrese el a\u00f1o de la carpeta \n";
                        error = true;
                    }
                    if ($('#txtAnio').val().length < 4) {
                        mensaje += "*El  a\u00f1o debe ser de 4 d\u00edgitos\n";
                        error = true;
                    }
                }
            } 
            else {
                if ( ($('#txtCarpetaInvestigacion').val() == "" || $('#txtCarpetaInvestigacion').val() == "0") 
                    && ($('#txtNumeroUnicoCausa').val() == "" || $('#txtNumeroUnicoCausa').val() == 0) ) {
                    mensaje += "*Ingrese la carpeta de investigaci\u00f3n y/o nuc \n";
                    error = true;
                } 
                /*else {
                    if (($('#txtNumeroUnicoCausa').val() == "" || $('#txtNumeroUnicoCausa').val() == 0)) {
                        mensaje += "*Ingrese el NUC \n";
                        error = true;
                    }
                }*/
            }
        if( $("#idJuzgadorPropietario").val() == "" || $("#idJuzgadorPropietario").val() == "0" ) {
            mensaje += "*Debe indicar un magistrado propietario para la carpeta\n";
            error = true;
        }
            if ($('#txtNumeroImputados').val() == "" || $('#txtNumeroImputados').val() == "0") {
                mensaje += "*Ingrese el n\u00famero de imputados \n";
                error = true;
            }

            if ($('#txtNumeroOfendidos').val() == "" || $('#txtNumeroOfendidos').val() == "0") {
                mensaje += "*Ingrese el n\u00famero de ofendidos \n";
                error = true;
            }

            if ($('#txtNumeroDelitos').val() == "" || $('#txtNumeroDelitos').val() == "0") {
                mensaje += "*Ingrese n\u00famero de delitos \n";
                error = true;
            }
            if ($('#cmbConsignacion').val() == "" || $('#cmbConsignacion').val() == "0") {
                mensaje += "*Seleccione consignaci\u00f3n \n";
                error = true;
            }
            if ($('#cmbConsignacionA').val() == "" || $('#cmbConsignacionA').val() == "0") {
                mensaje += "*Seleccione consignaci\u00f3n acciones\n";
                error = true;
            }
            if ($('#cmEtapaProcesal').val() == "" || $('#cmEtapaProcesal').val() == "0") {
                mensaje += "*Ingrese tipo de etapa procesal \n";
                error = true;
            }
            if ($('#cmEstatusCarpeta').val() == "" || $('#cmEstatusCarpeta').val() == "0") {
                mensaje += "*Seleccione el estatus de carpeta \n";
                error = true;
            }
            if (error) {
                alert(mensaje);
            }

            return error;
        };
        saveStepOne = function () {
            var error = false;
            if (!validateStep1()) {
                var str_data = "accion=guarda";
                str_data += "&idCarpetaJudicial=" + $('#hddIdCarpetaJudicial').val();
                str_data += "&cveJuzgado=" + $('#cmbJuzgados').val();
                str_data += "&idJuzgador=" + $("#idJuzgadorPropietario").val();
                str_data += "&cveTipoCarpeta=" + $('#cmbTipoCarpeta').val();
                str_data += "&numero=" + $('#txtNumero').val();
                str_data += "&anio=" + $('#txtAnio').val();
                str_data += "&activo=S";
                str_data += "&carpetaInv=" + $('#txtCarpetaInvestigacion').val().toUpperCase();
                str_data += "&nuc=" + $('#txtNumeroUnicoCausa').val().toUpperCase();
                str_data += "&numImputados=" + $('#txtNumeroImputados').val();
                str_data += "&numOfendidos=" + $('#txtNumeroOfendidos').val();
                str_data += "&numDelitos=" + $('#txtNumeroDelitos').val();
                str_data += "&cveConsignacion=" + $('#cmbConsignacion').val();
                str_data += "&cveConsignacionA=" + $('#cmbConsignacionA').val();
                str_data += "&cveEtapaProcesal=" + $("#cmbEtapaProcesal").val();
                str_data += "&observaciones=" + $('#txtObservaciones').val().toUpperCase();
                str_data += "&cveEstatusCarpeta=" + $("#cmbEstatusCarpeta").val();
                
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: str_data,
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos.status == 'Ok') {
                            $("#divAlertSuccesSolicitud").html("");
                            $("#divAlertSuccesSolicitud").html("La carpeta se guardo de forma correcta");
                            $("#divAlertSuccesSolicitud").show("");
                            setTimeAlert("divAlertSuccesSolicitud");
                            parent.$('#hddIdCarpetaJudicial').val(datos.resultado[0].idCarpetaJudicial);
                            $('#hddIdCarpetaJudicial').val(datos.resultado[0].idCarpetaJudicial);
                            $('#cmbJuzgados').val(datos.resultado[0].cveJuzgado);
                            $('#cmbTipoCarpeta').val(datos.resultado[0].cveTipoCarpeta);
                            $('#txtNumero').val(datos.resultado[0].numero);
                            $('#txtAnio').val(datos.resultado[0].anio);
                            $('#txtCarpetaInvestigacion').val(datos.resultado[0].carpetaInv);
                            $('#txtNumeroUnicoCausa').val(datos.resultado[0].nuc);
                            $('#txtNumeroImputados').val(datos.resultado[0].numImputados);
                            $('#txtNumeroOfendidos').val(datos.resultado[0].numOfendidos);
                            $('#txtNumeroDelitos').val(datos.resultado[0].numDelitos);
                            $('#cmbConsignacion').val(datos.resultado[0].cveConsignacion);
                            $('#cmbConsignacionA').val(datos.resultado[0].cveConsignacionA);
                            $("#cmbEstatusCarpeta").val(datos.resultado[0].cveEstatusCarpeta);
                            if ( datos.resultado[0].cveEstatusCarpeta == 2 ) {
                                $("#cmbEstatusCarpeta").prop('disabled', true);
                                $('#idJuzgadorPropietario').prop('disabled', true);
                            }
                            $("#cmbEtapaProcesal").val(datos.resultado[0].cveEtapaProcesal);
                            $('#txtObservaciones').val(datos.resultado[0].observaciones);
                            selectStepOne();
                        } else {
                            $("#divAlertWarningSolicitud").html("");
                            $("#divAlertWarningSolicitud").html(datos.msj);
                            $("#divAlertWarningSolicitud").show("");
                            setTimeAlert("divAlertWarningSolicitud");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Consulta de Carpetas judiciales:\n\n" + otroobj);
                    }
                });
            } else {
                error = false;
            }
            return error;
        };


        getPaginas = function (pag, cantReg) {
            parent.$('#hddIdSolicitudAudiencia').val("");
            $('#hddIdSolicitudAudiencia').val("");
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesaudiencias/SolicitudesaudienciasFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "getPaginas",
                    idCarpetaJudicial: $('#hddIdSolicitudAudiencia').val(),
                    cveJuzgado: $('#cmbJuzgadosConsulta').val(),
                    cveTipoCarpeta: $('#cmbTipoCarpetaConsulta').val(),
                    numero: $('#txtNumeroConsulta').val(),
                    anio: $('#txtAnioConsulta').val(),
                    carpetaInv: $('#txtCarpetaInvestigacionConsulta').val(),
                    nuc: $('#txtNumeroUnicoCausaConsulta').val(),
                    activo: 'S',
                    fechaInicio: $('#txtFechaInicio').val(),
                    fechaFin: $('#txtFechaFin').val(),
                    cantxPag: cantReg
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = datos;
                    if (json.totalCount > 0) {
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
                    alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                }
            });
        };

        selectStepOne = function () {
    //        var error = false;
    //        if (!validateConsultStep1()) {
    //            parent.$('#hddIdSolicitudAudiencia').val("");
    //            $('#hddIdSolicitudAudiencia').val("");
    //            var pag = 0;
    //            if (pagAux == 0) {
    //                pag = $("#cmbPaginacion").val();
    //            } else {
    //                pag = 1;
    //            }
    //            var cantReg = $("#cmbNumReg").val();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {accion: "consultarCarpetasJudicialesDetalle",
                        idCarpetaJudicial: $('#hddIdCarpetaJudicial').val()
    //                    cveJuzgado: $('#cmbJuzgadosConsulta').val(),
    //                    cveTipoCarpeta: $('#cmbTipoCarpetaConsulta').val(),
    //                    numero: $('#txtNumeroConsulta').val(),
    //                    anio: $('#txtAnioConsulta').val(),
    //                    carpetaInv: $('#txtCarpetaInvestigacionConsulta').val(),
    //                    nuc: $('#txtNumeroUnicoCausaConsulta').val(),
    //                    activo: 'S',
    //                    fechaInicio: $('#txtFechaInicio').val(),
    //                    fechaFin: $('#txtFechaFin').val(),
    //                    pag: pag,
    //                    cantxPag: cantReg
                    },
                    beforeSend: function (objeto) {
                    },
                    success: function (datos) {
                        if (datos.totalCount > 0) {
                            var table = "";
                            table += '<table id="tblResultados" class="table table-hover table-striped table-bordered">';
                            table += '<thead>';
                            table += '<tr>';
                            table += '<th>No</th>';
                            table += '<th>Estatus</th>';
                            table += '<th>Tribunal</th>';
                            table += '<th>N&uacute;mero</th>';
                            table += '<th>CarpetaInv</th>';
                            table += '<th>NUC</th>';
                            table += '<th>Tipo Carpeta</th>';
                            table += '<th>Etapa Procesal</th>';
                            table += '<th>Fecha Registro</th>';
                            table += '</tr>';
                            table += '</thead>';
                            table += "<tbody>";
                            for (var i = 0; i < datos.totalCount; i++) {
                                var fecha = datos.data[i].fechaRegistro.split(" ");
                                table += "<tr>";
                                table += "<td onclick=\"consutaId('" + datos.data[i].idCarpetaJudicial + "')\" >" + (i + 1) + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].desEstatusCarpeta + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].desJuzgado + "</td>";
                                if (datos.data[i].numero != "" && datos.data[i].numero != null) {
                                    table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].numero + "/" + datos.data[i].anio + "</td>";
                                } else {
                                    table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >N/A</td>";
                                }
                                if (datos.data[i].carpetaInv != "" && datos.data[i].carpetaInv != null) {
                                    table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].carpetaInv + "</td>";
                                } else {
                                    table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >N/A</td>";
                                }
                                if (datos.data[i].nuc != "" && datos.data[i].nuc != null) {
                                    table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].nuc + "</td>";
                                } else {
                                    table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >N/A</td>";
                                }
                                table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].desTipoCarpeta + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + datos.data[i].desEtapaProcesal + "</td>";
                                table += "<td onclick='consutaId(" + datos.data[i].idCarpetaJudicial + ")' >" + formatoFecha(fecha[0]) + "</td>";
                                table += "</tr>";
                            }
                            table += "</tbody>";
                            table += "</table>";
                            //$("#divHideForm").hide("");
                            //$("#divConsultaGrid").show("");
                            $('#divResultados').html(table);
                            //$("#tblResultados").DataTable({paging: false});
                            //getPaginas(datos.pagina, cantReg);
                            changeDivForm(2);
        //                        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Registro de Oficios</span> - <span style='text-decoration: underline; cursor:pointer;' onclick='changeDivForm(1); $(\"#cmbPaginacion\").val(1)'>Consulta de Oficios</span> - Resultados");
                        } else {
                            $("#divResultados").html("");
                            $("#divConsultaGrid").hide("");
                            $("#divAlertWarningSolicitud").html("");
                            $("#divAlertWarningSolicitud").html("No se encontraron resultados");
                            $("#divAlertWarningSolicitud").show("");
                            setTimeAlert("divAlertWarningSolicitud");
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Consulta de Audiencia:\n\n" + otroobj);
                    }
                });
    //        } else {
    //            error = false;
    //        }
    //        return error;
        };

        consutaId = function (id) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {accion: "consultarCarpetasJudicialesDetalle",
                    idCarpetaJudicial: id,
                    activo: 'S'
                },
                beforeSend: function (objeto) {
                    ToggleLoading(1);
                },
                success: function (datos) {
                    ToggleLoading(2);

                    if (datos.totalCount > 0) {
                        //changeDivForm(1);
                        parent.$('#hddIdCarpetaJudicial').val(datos.data[0].idCarpetaJudicial);
                        parent.$('#idCarpetaJudicial').val(datos.data[0].idCarpetaJudicial);
                        $('#hddIdCarpetaJudicial').val(datos.data[0].idCarpetaJudicial);
                        $('#cmbJuzgados').val(datos.data[0].cveJuzgado).trigger("change");
                        $('#cmbTipoCarpeta').val(datos.data[0].cveTipoCarpeta);
                        $('#txtNumero').val(datos.data[0].numero);
                        $('#txtAnio').val(datos.data[0].anio);
                        $('#txtCarpetaInvestigacion').val(datos.data[0].carpetaInv);
                        $('#txtNumeroUnicoCausa').val(datos.data[0].nuc);
                        $('#txtNumeroImputados').val(datos.data[0].numImputados);
                        $('#txtNumeroOfendidos').val(datos.data[0].numOfendidos);
                        $('#txtNumeroDelitos').val(datos.data[0].numDelitos);
                        $('#cmbAudiencia').val(datos.data[0].cveCatAudiencia);
                        $('#txtObservaciones').val(datos.data[0].observaciones);
                        $("#cmbEtapaProcesal").val(datos.data[0].cveEtapaProcesal);
                        $("#cmbEstatusCarpeta").val(datos.data[0].cveEstatusCarpeta);
                        $("#cmbConsignacionA").val(datos.data[0].cveConsignacionA);
                        if(datos.data[0].cveEstatusCarpeta == 2) {
                            $("#radicar").hide();
                            $("#cmbEstatusCarpeta").prop('disabled', true);
                        }
                        camposRequeridos();
                        comboConsignacion();
                        $('#cmbConsignacion').val(datos.data[0].cveConsignacion);
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    alert("Error en la peticion de Consulta de carpetas judiciales:\n\n" + otroobj);
                }
            });


        };
        
        function radicarCarpeta(){
            bootbox.dialog({
                message: "Al seleccionar esta opci&oacute;n se habilitar&aacute; la etapa procesal para poder generar una nueva carpeta judicial para de la etapa solicitada \u00bf Desea continuar?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            $("#cmbEtapaProcesal").removeAttr("disabled");
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
        
        validaCarpeta = function () {
            if ($('#cmbTipoCarpeta').val() == 0) {
                $('#txtNumero').val("");
                $('#txtAnio').val("");
                $('#txtNumero').attr('disabled', 'disabled');
                $('#txtAnio').attr('disabled', 'disabled');
                $('#txtCarpetaInvestigacion').removeAttr('disabled');
                $('#txtNumeroUnicoCausa').removeAttr('disabled');
            } else {
                $('#txtNumero').removeAttr('disabled');
                $('#txtAnio').removeAttr('disabled');
                $('#txtCarpetaInvestigacion').val("");
                $('#txtNumeroUnicoCausa').val("");
                $('#txtCarpetaInvestigacion').attr('disabled', 'disabled');
                $('#txtNumeroUnicoCausa').attr('disabled', 'disabled');
            }
        };
        validaCarpetaConsulta = function () {
            if ($('#cmbTipoCarpetaConsulta').val() == 0) {
                $('#txtNumeroConsulta').val("");
                $('#txtAnioConsulta').val("");
                $('#txtNumeroConsulta').attr('disabled', 'disabled');
                $('#txtAnioConsulta').attr('disabled', 'disabled');
                $('#txtCarpetaInvestigacionConsulta').removeAttr('disabled');
                $('#txtNumeroUnicoCausaConsulta').removeAttr('disabled');
            } else {
                $('#txtNumeroConsulta').removeAttr('disabled');
                $('#txtAnioConsulta').removeAttr('disabled');
                $('#txtCarpetaInvestigacion').val("");
                $('#txtNumeroUnicoCausa').val("");
                $('#txtCarpetaInvestigacionConsulta').attr('disabled', 'disabled');
                $('#txtNumeroUnicoCausaConsulta').attr('disabled', 'disabled');
            }
        };
        cleanStepOne = function () {
            parent.$('#hddIdCarpetaJudicial').val("");
            $('#hddIdCarpetaJudicial').val("");
            $('#cmbJuzgados').val("");
            $('#cmbTipoCarpeta').val("");
            $('#txtNumero').val("");
            $('#txtAnio').val("");
            $('#txtCarpetaInvestigacion').val("");
            $('#txtNumeroUnicoCausa').val("");
            $('#txtNumeroImputados').val("");
            $('#txtNumeroOfendidos').val("");
            $('#txtNumeroDelitos').val("");
            $('#cmbConsignacion').val(0);
            $('#cmbConsignacionA').val(0);
            $('#cmbEstatusCarpeta').val(0);
            $('#cmbEtapaProcesal').val(0);
            $('#txtObservaciones').val("");
            parent.changeDivForm(1);
    //        validaCarpeta();
        };
    //    cleanStepOneConsult = function () {
    //        parent.$('#hddIdSolicitudAudiencia').val("");
    //        $('#hddIdSolicitudAudiencia').val("");
    //        $('#cmbJuzgadosConsulta').val("");
    //        $('#cmbTipoCarpetaConsulta').val("");
    //        $('#txtNumeroConsulta').val("");
    //        $('#txtAnioConsulta').val("");
    //        $('#txtFechaInicio').val("");
    //        $('#txtFechaFin').val("");
    //        $('#txtCarpetaInvestigacionConsulta').val("");
    //        $('#txtNumeroUnicoCausaConsulta').val("");
    //        $('#divResultados').html("");
    //        $('#divResultados').html("");
    //        $("#divConsultaGrid").hide("");
    ////        validaCarpetaConsulta();
    //    };

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
        
        imprimir = function() {
            var idCarpetaJudicial = $("#hddIdCarpetaJudicial").val();
            if ( idCarpetaJudicial !== "") {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        accion: "consultaEliminaCausa",
                        cveJuzgado: $('#cmbJuzgados').val(),
                        cveTipoCarpeta: $('#cmbTipoCarpeta').val(),
                        numero: $('#txtNumero').val(),
                        anio: $('#txtAnio').val()
                    },
                    beforeSend: function (objeto) {
                        //ToggleLoading(1);
                    },
                    success: function (datos) {
                        //ToggleLoading(2);

                        if (datos.totalCount > 0) {
                            var table = "";
                            table += '<table border="1" cellpadding="1" cellspacing="0" width="100%" align="center" class="tblGridAgrega">';
                            table += '<tr><td colspan="2" align="center"><b>DATOS DE LA CAUSA</b></td></tr>';
                            table += '<tr>';
                            table += '<td width="50%">';
                            table += '<span>' + datos.data[0].desJuzgado + "</span><br>";
                            table += '<span>' + datos.data[0].desTipoCarpeta + "</span><br>";
                            table += '<span>NUMERO: ' + datos.data[0].numero + "/" + datos.data[0].anio + "</span><br>";
                            if (datos.data[0].nuc != "") {
                                table += 'NUC: ' + datos.data[0].nuc + "<br>";
                            }
                            if (datos.data[0].carpetaInv != "") {
                                table += 'CARPETA DE INVESTIGACI&Oacute;N: ' + datos.data[0].carpetaInv + "<br>";
                            }
                            table += 'ETAPA PROCESAL: ' + datos.data[0].desEtapaProcesal + "<br>";
                            table += '</td>';
                            table += '<td width="50%">';
                            table += 'OBSERVACIONES: ' + datos.data[0].observaciones + "<br>";
                            table += '</td>';
                            table += '</tr>';
                            table += '</table><br>';

                            table += '<table border="1" cellpadding="1" cellspacing="0" width="100%" align="center"  class="tblGridAgrega">';
                            table += '<tr><td colspan="2" align="center"><b>IMPUTADO(S)</b></td></tr>';
                            if (datos.data[0].imputados.length !== 0) {
                                for (var i = 0; i < datos.data[0].imputados.length; i++) {
                                    table += '<tr>';
                                    table += '<td width="50%">';
                                    if (datos.data[0].imputados[i].cveTipoPersona === '1') {
                                        table += "IMPUTADO: " + datos.data[0].imputados[i].nombre + " " + datos.data[0].imputados[i].paterno + " " + datos.data[0].imputados[i].materno + "<br>";
                                    } else {
                                        table += "IMPUTADO: " + datos.data[0].imputados[i].nombreMoral + "<br>";
                                    }
                                    table += "ETAPA PROCESAL IMPUTADO: " + datos.data[0].imputados[i].desEtapaProcesal + "<br>";
                                    var detenido = ( datos.data[0].imputados[i].detenido === 'S' ) ? "SI" : "NO";
                                    table += "SE ENCUENTRA DETENIDO? " + detenido + "<br>";
                                    if ( datos.data[0].imputados[i].detenido === 'S' ) {
                                        var fechaDetencion = ( datos.data[0].imputados[i].fechaControlDet !== "" && datos.data[0].imputados[i].fechaControlDet !== "0000-00-00 00:00:00" ) ? datos.data[0].imputados[i].fechaControlDet : "";
                                        table += "FECHA DETENCION: " + fechaDetencion + "<br>";
                                    }
                                    table += '</td>';
                                    table += '<td>';
                                    if (datos.data[0].imputados[i].domicilio.length !== 0) {
                                        for (var x = 0; x < datos.data[0].imputados[i].domicilio.length; x++) {
                                            table += "DOMICILIO:" + datos.data[0].imputados[i].domicilio[x].direccion + " " + datos.data[0].imputados[i].domicilio[x].colonia + " " + datos.data[0].imputados[i].domicilio[x].numExterior + " " + datos.data[0].imputados[i].domicilio[x].cp + "<br>";
                                        }
                                    } else {
                                        table += "SIN DOMICILIO <br>";
                                    }
                                    if (datos.data[0].imputados[i].defensores.length !== 0) {
                                        for (var d = 0; d < datos.data[0].imputados[i].defensores.length; d++) {
                                            table += "DEFENSOR:" + datos.data[0].imputados[i].defensores[d].nombre + "<br>";
                                        }
                                    } else {
                                        table += "SIN DEFENSOR <br>";
                                    }
                                    table += '</td>';
                                    table += "</tr>";
                                }

                            } else {
                                table += "<tr>";
                                table += '<td width="50%">';
                                table += 'No se encontraron imputados';
                                table += '</td>';
                                table += '<td width="50%">';
                                table += '</td>';
                                table += "</tr>";
                            }
                            table += '</table><br>';
                            table += '<table border="1" cellpadding="1" cellspacing="0" width="100%" align="center" class="tblGridAgrega">';
                            table += '<tr><td colspan="2"  align="center"><b>SUJETO(S) PASIVO(S) DEL DELITO</b></td></tr>';
                            if (datos.data[0].ofendidos.length != 0) {
                                for (var i = 0; i < datos.data[0].ofendidos.length; i++) {
                                    table += '<tr>';
                                    table += '<td width="50%">';
                                    if (datos.data[0].ofendidos[i].cveTipoPersona == '1' || datos.data[0].ofendidos[i].cveTipoPersona == '4' || datos.data[0].ofendidos[i].cveTipoPersona == '5') {
                                        table += "OFENDIDO: " + datos.data[0].ofendidos[i].nombre + " " + datos.data[0].ofendidos[i].paterno + " " + datos.data[0].ofendidos[i].materno + "<br>";
                                    } else {
                                        table += "OFENDIDO: " + datos.data[0].ofendidos[i].nombreMoral + "<br>";
                                    }
                                    table += '</td>';
                                    table += '<td>';
                                    if (datos.data[0].ofendidos[i].domicilio.length != 0) {
                                        for (var x = 0; x < datos.data[0].ofendidos[i].domicilio.length; x++) {
                                            table += "DOMICILIO: " + datos.data[0].ofendidos[i].domicilio[x].direccion + " " + datos.data[0].ofendidos[i].domicilio[x].colonia + " " + datos.data[0].ofendidos[i].domicilio[x].numExterior + " " + datos.data[0].ofendidos[i].domicilio[x].cp + "<br>";
                                        }
                                    } else {
                                        table += "SIN DOMICILIO <br>";
                                    }
                                    if (datos.data[0].ofendidos[i].defensores.length != 0) {
                                        for (var d = 0; d < datos.data[0].ofendidos[i].defensores.length; d++) {
                                            table += "DEFENSOR: " + datos.data[0].ofendidos[i].defensores[d].nombre + "<br>";
                                        }
                                    } else {
                                        table += "SIN DEFENSOR <br>";
                                    }
                                    table += '</td>';
                                    table += '</tr>';
                                }

                            } else {
                                table += '<tr>';
                                table += '<td width="50%">';
                                table += 'No se encontraron ofendidos';
                                table += '</td>';
                                table += '<td width="50%">';
                                table += '</td>';
                                table += '</tr>';
                            }
                            table += '</table><br>';
                            table += '<table border="1" cellpadding="1" cellspacing="0" width="100%" align="center" class="tblGridAgrega">';
                            table += '<tr><td align="center"><b>DELITOS</b></td></tr>';
                            table += "<tr>";
                            if (datos.data[0].delitos.length != 0) {
                                table += "<td>";
                                for (var j = 0; j < datos.data[0].delitos.length; j++) {
                                    table += (j + 1) + ".- " + datos.data[0].delitos[j].descDelito + "<br>";
                                }
                                table += "</td>";
                            } else {
                                table += "<td>No se encontraron delitos</td>";

                            }
                            table += "</tr>";
                            table += '</table><br>';
                            table += '<table border="1" cellpadding="1" cellspacing="0" width="100%" align="center" class="tblGridAgrega">';
                            table += '<tr><td colspan="3" align="center"><b>RELACIONES</b></td></tr>';
                            table += '<tr><td>IMPUTADO(S)</td><td>OFENDIDO(S)</td><td>DELITO(S)</td></tr>';
                            for ( var r = 0; r < datos.data[0].relaciones.length; r++ ) {
                                table += '<tr>';
                                table += '<td>' + datos.data[0].relaciones[r].nombreImputado + '</td>';
                                table += '<td>' + datos.data[0].relaciones[r].nombreOfendido + '</td>';
                                table += '<td>' + datos.data[0].relaciones[r].nombreDelito + '</td>';
                                table += '</tr>';
                            }
                            table += '</table><br>';
                            var printWindow = window.open('', '', 'height=900,width=800');
                            printWindow.document.write('<html><head><title>SIGEJUPE</title>');
                            printWindow.document.write('<style type="text/css">');
                            printWindow.document.write('.tblGridAgrega{font-family: Arial; font-size: 12px; border: 1px solid #000; border-collapse: collapse;}');
                            printWindow.document.write('</style>');
                            printWindow.document.write('</head><body><center><img  src="../vistas/img/logoPj.png"></center> <br>');
                            printWindow.document.write(table);
                            printWindow.document.write('</body></html>');
                            printWindow.document.close();
                            printWindow.print();
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        alert("Error en la peticion de Consulta de carpetas judiciales:\n\n" + otroobj);
                    }
                });
            } else {
                $("#divAlertWarningSolicitud").html("");
                $("#divAlertWarningSolicitud").html("Debe de seleccionar un registro");
                $("#divAlertWarningSolicitud").show("");
                setTimeAlert("divAlertWarningSolicitud");
            }
            
        };

        $(function () {
            var currentDate = new Date();
            var maxDate = currentDate.setDate(currentDate.getDate());
            $("#txtFechaInicio").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
                maxDate: maxDate
            });
            $("#txtFechaFin").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
                maxDate: maxDate
            });


    //        
    //        $("#txtFechaInicio").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy"
    //
    //        });
    //        $("#txtFechaFin").datepicker({
    //            changeMonth: true,
    //            changeYear: true,
    //            format: "dd/mm/yyyy"
    //        });
            comboJuzgados();
            //comboTipoCarpeta();
            comboConsignacion();
        //camposRequeridos();
            //comboAudiencia();
            comboConsignacionAccion();
            comboJuzgadosConsulta();
            comboEtapasProcesales();
            //comboTipoCarpetaConsulta();
            comboEstatusCarpeta();
            $('#txtNumeroImputados').validaCampo('0123456789');
            $('#txtNumeroOfendidos').validaCampo('0123456789');
            $('#txtNumeroDelitos').validaCampo('0123456789');
            $('#txtNumero').validaCampo('0123456789');
            $('#txtAnio').validaCampo('0123456789');
            $('#txtNumeroConsulta').validaCampo('0123456789');
            $('#txtAnioConsulta').validaCampo('0123456789');
            
            if ($('#hddIdCarpetaJudicial').val() != "") {
                selectStepOne();
                consutaId($('#hddIdCarpetaJudicial').val());
            } else {
                $("#radicar").hide();
                $("#cmbJuzgados").removeAttr("disabled");
                $("#cmbTipoCarpeta").removeAttr("disabled");
                //$("#txtNumero").removeAttr("disabled");
                $("#txtNumero").val("1");
                $("#txtNumeroImputados").removeAttr("disabled");
                $("#txtNumeroOfendidos").removeAttr("disabled");
                $("#txtNumeroDelitos").removeAttr("disabled");
                $("#txtCarpetaInvestigacion").removeAttr("disabled");
                //$("#txtAnio").removeAttr("disabled");
                var f = new Date();
                $("#txtAnio").val(f.getFullYear());
                $("#txtNumeroUnicoCausa").removeAttr("disabled");
                $("#txtNumeroUnicoCausa").removeAttr("disabled");
                $("#cmbEtapaProcesal").val(1);
                $("#cmbEstatusCarpeta").val(1);
                $("#cmbEstatusCarpeta").attr("disabled", true);
            }
            
            if( $("#idTipoActuacion").val() != "" ) {
                $("#radicar").hide();
                $("#limpia").hide();
            }
            
            $("#txtNumeroImputados").on('change', function(){
                comboConsignacion();
            });
            
            var permisos = obtenerPermisosFormulario("HERRAMIENTAS", "ACTUALIZAR TOCAS");
            //console.log(permisos);
            if(permisos.Read == 'N'){
                $('.consulta').prop('disabled',true);
            }
            if(permisos.Create == 'N'){
                $('.guarda').prop('disabled',true);
            }
            
        });

    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>