<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
// version 14/01/2016..
//$_POST['idActuacionPadre'] = "X";
if (!isset($_SESSION)) {
    @session_start();
}




if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    $idActuacionArbol = "";
    $idCarpetaJudicialArbol = "";
    $cveTipoCarpetaArbol = "";
    $procedencia = 0;

    if (isset($_POST['idActuacion'])) {
        $idActuacionArbol = @$_POST['idActuacion'];
    }
    if (isset($_POST['idReferencia']) OR isset($_POST['idReferenciaAcuerdo'])) {
        $idCarpetaJudicialArbol = @$_POST['idReferencia'] . @$_POST['idReferenciaAcuerdo'];
    }
    if (isset($_POST['cveTipoCarpeta'])) {
        $cveTipoCarpetaArbol = @$_POST['cveTipoCarpeta'];
    }
    if (isset($_POST['idActuacionPadre']) OR isset($_POST['idActuacionAcuerdo'])) {
        $idActuacionPadre = @$_POST['idActuacionPadre'] . @$_POST['idActuacionAcuerdo'];
    }


    if ($idCarpetaJudicialArbol == "" && $idActuacionPadre == "" && $cveTipoCarpetaArbol == "" && $idActuacionArbol == "") {
        $procedencia = 0; // formulario general
    } else if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") || ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "") || ($idActuacionPadre != 0 && $idActuacionPadre != "")) {
        $procedencia = 1; // viene de arbol
    } else if ($idCarpetaJudicialArbol == "" && $idActuacionPadre == "" && $cveTipoCarpetaArbol == 0) {
        $procedencia = 1; // viene de arbol el formulario general
        $asignaValoresArbol = 1;
    }
    ?>
    <style type="text/css">
        @import url('../../css/bootstrap.css');
        @import url('../../css/bootstrap.responsive.css');
        .container {
            background-image: url("img/bg.png");
        }
        #divFoto {
            position:absolute;
            left:84%;
            top:17%;
        }

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
        .row-centered {
            text-align:center;
        }
        .col-centered {
            display:inline-block;
            float:none;
            /* reset the text-align */
            text-align:left;
            /* inline-block space fix */
            margin-right:-4px;
        }
    </style>
    <input type="hidden" id="hiddenIdActuacion" value="" >
    <input type="hidden" id="hiddenIdActuacionRef" value="<?php echo $_POST['idReferenciaAcuerdo']; ?>" >
    <input type="hidden" id="hiddenIdActuacionAcu" value="<?php echo $_POST['idActuacionAcuerdo']; ?>" >
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="<?php echo $_POST['cveTipoCarpeta']; ?>" >
    <input type="hidden" id="hiddenDatoCarpeta" value="" >
    <input type="hidden" id="hddIdSolicitud" value="" >
    <input type="hidden" id="hddIdPerito" value="" >
    <input type="hidden" id="hddCveAdscripcion" value="<?php echo $_SESSION['cveAdscripcion']; ?>" >
    <input type="hidden" id="hiddenNombre" value="<?php echo $_SESSION['nombre']; ?>" >
    <input type="hidden" id="hiddenAdscripcion" value="<?php echo $_SESSION['desAdscripcion']; ?>" >
    <input type="hidden" id="hiddenIdActuacionPromocion" value="" >
    <input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Solicitud de Perito
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar();<?php if ($_POST['idActuacionAcuerdo'] != "") { ?>consutaIdAcuerdo(<?php echo $_POST['idActuacionAcuerdo']; ?>, '', '', 'true');
                       <?php } ?>" style="display: none">                                    
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'>Juzgado</label>
                    <div class="col-md-9">
                        <div id="divCmbJuzgado" class="logobox"></div>
                        <select class="form-control" name="cmbJuzgado" id="cmbJuzgado" onchange="cargaTipoCarpeta();
                        changeLabel(this);" >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                
                </div>            
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed">Relacionado con</label>
                    <div class="col-md-9">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control" name="cmbTipoCarpeta" id="cmbTipoCarpeta" onchange="changeLabel(this)">

                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed" id="lblRelationName">No.</label>
                    <div id="divSinRelacion" class="col-md-9">
                        <input type="text" id="txtNumero" class="form-inline" id="txtNumero" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="txtAnio" id="txtAnio" maxlength="4" placeholder="A&ntilde;o" value="<?php echo date("Y") ?>">
                        &nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="btn btn-primary" id="buscaPromocion" value="Buscar acuerdos" onclick="buscarPromocion('buscarLimpio');">                                                        
                    </div>                                
                </div>
                <div id="divBuscaPromocion" class="form-group" style="display: none">
                    <label class="control-label col-md-3 ">Datos del acuerdo:</label>
                    <div class="col-md-9">                    
                        <label class="form-inline" id="promocionSel"></label>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <div id="divConsultaActuaciones" style="display: none;height: 175px; border-top: 1px solid rgb(208, 220, 203); width: 100%; overflow-x: hidden; overflow-y: scroll; " class="col-xs-8" >
                        <div id="divTableResultActuaciones" class="col-xs-8" style="width: 100%;">
                        </div>
                    </div>
                </div>
                <div class="form-group" id="PeritoAsignado">                                                                
                    <label class="control-label col-md-3 needed">Datos de la Solicitud</label>
                    <div class="col-md-9">                   
                        <label id="peritoAsignado"></label>
                    </div>        
                    <div id="divFoto" class="img-responsive"></div>                    
                </div> 
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed">Materia Pericial</label>
                    <div class="col-md-9">
                        <div id="divCmbMateriaPericial" class="logobox"></div>
                        <select class="form-control" name="cmbMateriaPericial" id="cmbMateriaPericial"  onchange='consultasDiasMateriaPericial(this.value);
                                cargaPeritosRelacionados(this.value);' >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div> 
                <div class="form-group" id="Historial">                                                                
                    <label class="control-label col-md-3 needed">Perito relacionado:</label>
                    <div class="col-md-9">
                        <div id="divCmbMateriaPericial" class="logobox"></div>
                        <select class="form-control" name="cmbPeritoRelacionado" id="cmbPeritoRelacionado">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div> 
                <div class="form-group" id="MDias">      
                    <label class="control-label col-md-3 needed">Dias de Protesta</label>                
                    <div class="col-sm-2"> 
                        <input class="form-control" placeholder="N&uacute;mero" id="numer" name="numer" onkeypress="return valida(event)" type="text">
                        <input class="form-control" placeholder="N&uacute;mero" id="numerOculto" name="numerOculto" onkeypress="return valida(event)" type="hidden">
                        <input type="checkbox" name="Editar" id="Editar" value="0" onclick="cambioDia(this.value)"><b>Modifica d&iacute;a</b>                                
                    </div>                
                </div> 
                <div class="form-group" id="MMotivo">      
                    <label class="control-label col-md-3 needed">Motivo</label>                
                    <div class="col-sm-2"> 
                        <textarea id="txtMotivo" name="txtMotivo" cols="50" rows="2" onkeyup="this.value.toUpperCase()"></textarea>
                    </div>                
                </div> 
                <div id="divRangoFechas" style="display: none">
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Fecha Inicio:</label>
                        <div class="col-xs-2">
                            <input type="text" id="txtfechaInicial" placeholder="FECHA INICIO" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Fecha Fin:</label>
                        <div class="col-xs-2">
                            <input type="text" id="txtfechaFinal" placeholder="FECHA FIN" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
                        </div>
                    </div>    
                </div>
                <div id="divNotas" class="form-group">
                    <label class="control-label col-md-3 needed">Contenido del documento</label>
                    <div class="col-md-9">                    
                        <script id="Sintesis" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                    </div>
                </div>
                <div class="form-group" id="Motivo">                                                                
                    <label class="control-label col-md-3 needed">Motivo Cancelaci&oacute;n:</label>
                    <div class="col-md-9">                   
                        <label id="motivo" style="text-transform: uppercase; resize: none"></label>
                    </div>                                
                </div> 
                <br>
                <br>
                <div class="form-group">
                    <div class="col-md-12">
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
                </div>  
                <div class="form-group">
                    <div class="col-md-12">
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
                <div class="form-group ">
                    <div class="col-md-offset-3  row-centered">
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputGuardar" value="Guardar" onclick="buscarTipoCarpeta();" style="display: none">                                                        
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="consultar();" style="display: none">                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputBuscar" value="Buscar" onclick="consultarSolicitudes();" style="display: none">                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputEliminar" value="Eliminar" onclick="eliminarSolicitudes()" style="display: none">                                 
                        </div>                                     
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar();">                                    
                        </div>                                            
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" onclick="print()">                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar">                        
                            <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="enviar();" style="">Generar PDF</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="divConsulta" style="display: none" class="col-xs-12">
                <div class="col-xs-12">
                    <div class="col-md-3">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1);
                                $('#cmbPaginacion').val(1)">                                                    
                    </div>

                    <div class="form-group col-xs-2" style="padding: 10px">
                        <label class="control-label" id="totalReg"></label>
                    </div>

                    <div id="divPaginador" class="form-group col-xs-2" >
                        <label class="control-label">Pagina:</label>
                        <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarSolicitudes();">
                            <option value="1">1</option>
                        </select>
                    </div>
                    <div id="divPaginador" class="form-group col-xs-4" >
                        <label class="control-label">Registros por p&aacute;gina:</label>
                        <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarSolicitudes();">
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
                <div id="divTableResult" class="col-xs-12">
                </div>
                <div id="divFormatoImpresion">
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        //var juzgadoSesion1 = <?php echo $_SESSION['nombre']; ?>;
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
        var procedencia = <?php echo $procedencia; ?>;
        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';
        if (editor != undefined) {
            editor.destroy();
        } else {

        }
        var editor = null;

        buscarAntecede = function (idActuacionHija) {
            var pag = 1;//$("#cmbPaginacion").val();
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var cantReg = 1;//$("#cmbNumReg").val();

            if (cveTipoCarpeta == 9) {
                cveTipoCarpeta = 0;
            }
            $("#hiddenIdActuacionSec").val("");
            $("#hiddenCveTipoCarpeta").val("");
            var strDatos = "accion=buscaActuacionPadre";
            strDatos += "&idActuacionHija=" + idActuacionHija;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        $("#hiddenIdActuacionSec").val(json.data[0].idActuacion);
                        $("#hiddenCveTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                    } else {
                        //alert(json.text);
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divInformacion").show();
                    $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show("slide");
                    setTimeAlert("divInformacion");
                }
            });
            if ($("#hiddenIdActuacionSec").val() != "") {
                strDatos = "accion=consultarOficios";
                strDatos += "&idActuacion=" + $("#hiddenIdActuacionSec").val();
                strDatos += "&pag=" + pag;
                strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        //                ToggleLoading(1);
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")");
                        if (json.totalCount > 0) {
                            $("#divBuscaPromocion").show();
                            $("#promocionSel").html("Acuerdo: " + json.data[0].fechaRegistro + " - " + json.data[0].descTipoResolucion);
                            //$("#buscaPromocion").attr("checked", true);
                            $("#buscaPromocion").attr("disabled", true);
                        } else {
                            //alert(json.text);
                        }

                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divInformacion").show();
                        $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                        $("#divInformacion").show("slide");
                        setTimeAlert("divInformacion");
                    }
                });
            }
            $("#cmbMateriaPericial").attr('disabled', 'disabled');
            $("#numer").attr('disabled', 'disabled');
            $("#Sintesis").attr('disabled', 'disabled');
            $("#inputGuardar").hide();
            $("#inputImprimir").show();
            $("#inputEliminar").show();
        }

        buscarPromocion = function (buscarLimpio, idActuacion) {
            //if ($('#buscaPromocion').prop('checked')) {
            var pag = 1;//$("#cmbPaginacion").val();
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var cantReg = 100;//$("#cmbNumReg").val();
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            var error = 0;
            var mensaje = "seleccione: ";

            if (cveTipoCarpeta == 9) {
                cveTipoCarpeta = 0;
            }
            if ($("#cmbTipoCarpeta").val() == "0") {
                error = 1;
                mensaje += " tipo de carpeta \n";
            }
            if ($("#txtNumero").val() == "") {
                error = 2;
                mensaje += " numero \n";
            }
            if ($("#txtAnio").val() == "") {
                error = 3;
                mensaje += " aÃ±o ";
            }

            if (error == 0) {
                var strDatos = "accion=consultarOficios";
                if (buscarLimpio != "buscarLimpio") {
    <?php if ($_POST['idActuacionPadre'] != "") { ?>
                        strDatos += "&idActuacion=" + <?php echo $_POST['idActuacionPadre']; ?>;
    <?php } ?>
    <?php if ($_POST['idActuacionAcuerdo'] != "") { ?>
                        strDatos += "&idActuacion=" + <?php echo $_POST['idActuacionAcuerdo']; ?>;
    <?php } ?>
                }
                strDatos += "&numero=" + $("#txtNumero").val();
                strDatos += "&anio=" + $("#txtAnio").val();
                strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
                strDatos += "&cveTipoActuacion=2";// busca solo promociones
                strDatos += "&activo=S";           //actuaciones activas
                strDatos += "&pag=" + pag;
                strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
                strDatos += "&cveJuzgado=" + cveJuzgado[0];
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
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

                            table += "<table id='tblResultadosGridAct' width='60%' height='175' cellspacing='0' cellpadding='0' border='0' align='center' >";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>N&uacute;m.</th>";
                            table += "<th>Tipo</th>";
                            table += "<th>Sintesis</th>";
                            table += "<th>Estatus</th>";
                            table += "<th>Fecha Registro</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            for (var i = 0; i < json.total; i++) {
                                if (json.data[i].cveTipoActuacion == "2") {
                                    if (json.data[i].cveEstatus == "2") {
                                        table += "<tr  bgcolor='#EDF9E8' onmouseout='this.style.backgroundColor=\"#EDF9E8\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer; background-color: rgb(237, 249, 232);' onclick=\"consutaIdActuacion('" + json.data[i].idReferencia + "','" + json.data[i].idActuacion + "','RESOLUCION: " + json.data[i].descTipoResolucion + " <FONT COLOR>ESTATUS: " + json.data[i].descEstatus + "</FONT>',' " + json.data[i].fechaRegistro + "')\">";
                                    } else if (json.data[i].cveEstatus == "3") {
                                        table += "<tr  bgcolor='#EDF9E8' onmouseout='this.style.backgroundColor=\"#EDF9E8\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer; background-color: rgb(165, 42, 42);'>";
                                    } else {
                                        table += "<tr  bgcolor='#EDF9E8' onmouseout='this.style.backgroundColor=\"#EDF9E8\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer; background-color: rgb(237, 249, 232);' onclick=\"consutaIdActuacion('" + json.data[i].idReferencia + "','RESOLUCION: " + json.data[i].descTipoResolucion + " <FONT COLOR>ESTATUS: " + json.data[i].descEstatus + "</FONT>',' " + json.data[i].fechaRegistro + "')\">";
                                    }
                                    table += "<td > " + (i + 1) + "</td>";
                                    if (json.data[i].cveTipoCarpeta != "") {
                                        table += "<td>" + json.data[i].descTipoCarpeta + " - " + json.data[i].numero + "/" + json.data[i].anio + "</td>";
                                    }
                                    table += "<td>" + json.data[i].descTipoResolucion + "</td>";
                                    table += "<td>" + json.data[i].descEstatus + "</td>";
                                    table += "<td>" + json.data[i].fechaRegistro + "</td>";
                                    table += "</tr> ";
                                }
                            }


                            $("#divConsultaActuaciones").show();
                            $("#divTableResultActuaciones").show();
                            $("#divTableResultActuaciones").html(table);

                            //                    $("#tblResultadosGridAct").DataTable({
                            //                        paging: false
                            //                    });

                            //getPaginas(json.pagina, cantReg);
                            //changeDivFormAcuerdo(2);

                        } else {
                            $("#divAlertInfo").html('' + json.text);
                            $("#divAlertInfo").show("slide");
                            setTimeAlert("divAlertInfo");

                            $("#divConsultaActuaciones").hide();
                            $("#divTableResultActuaciones").html("");
                            $("#buscaPromocion").attr("checked", false);
                            $("#promocionSel").html("No se encontraron Acuerdos: ");
                        }

                        if (buscarLimpio != "buscarLimpio") {
    <?php if ($_POST['idActuacionAcuerdo'] != "") { ?>
                                var datos = consutaIdAcuerdo(<?php echo $_POST['idActuacionAcuerdo']; ?>, "", "", "true");
    <?php } ?>
    <?php if ($_POST['idActuacionPadre'] != "") { ?>
                                var datos = consutaIdAcuerdo(<?php echo $_POST['idActuacionPadre']; ?>, "", "", "true");
    <?php } ?>
                            if (datos == "true" && json.totalCount > 0) {
                                if (json != "") {
                                    consutaIdActuacion(json.data[0].idReferencia, json.data[0].idActuacion, "'RESOLUCION: " + json.data[0].descTipoResolucion + " ESTATUS: " + json.data[0].descEstatus, json.data[0].fechaRegistro);
                                    $("#cmbTipoCarpeta").attr("disabled", "disabled");
                                    $("#cmbJuzgado").attr("disabled", "disabled");
                                    //$("#buscaPromocion").attr("disabled", "disabled");
                                    $("#cmbTipoCarpeta").attr("disabled", "disabled");
                                    $("#txtNumero").attr("disabled", "disabled");
                                    $("#txtAnio").attr("disabled", "disabled");
                                }
                            }
                        }
                    },
                    error: function (objeto, quepaso, otroobj) {
                        //                alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            } else {
                alert(mensaje);
                $("#buscaPromocion").attr("checked", false);
            }
            /* } else {
             $("#divConsultaActuaciones").hide();
             $("#divTableResultActuaciones").hide();
             $("#divTableResultActuaciones").html("");
             $("#hiddenIdActuacionPromocion").val("");
             $("#promocionSel").html("No selecciono promoci&oacute;n");
             }
             /*} else {
             $("#divConsultaActuaciones").hide();
             $("#divTableResultActuaciones").hide();
             $("#divTableResultActuaciones").html("");
             $("#hiddenIdActuacionPromocion").val("");
             $("#promocionSel").html("No selecciono acuerdo");
             }*/
        };
        buscarTipoCarpeta = function () {
            var hiddenIdActuacion = $("#hiddenIdActuacion").val();
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var numAct = $("#txtNumero").val();
            var aniAct = $("#txtAnio").val();
            var cveMateriaPericial = $("#cmbMateriaPericial").val();
            var numer = $("#numer").val();
            var perRelacionado = $("#cmbPeritoRelacionado").val();
            //var Notas = $("#Sintesis").val();
            var Seleccion = $("#promocionSel").html();
            var strDatos = "";
            var strDatosCarpeta = "";
            var error = 0;
            var mensaje = "";
            var cveAccion = 38; // insercion acuerdo BITACORA        
            var Notas = editor.getContent();           // este valor se va para el campo de observaciones
            // Notas = Notas.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');


            var cveJuzgadoAux = $("#cmbJuzgado").val().split("/");
            var cveJuzgado = cveJuzgadoAux[0];

            if (hiddenIdActuacion == "") {
                error = 2;
                mensaje += "   - Seleccione el acuerdo para guardar";
            }
            if (cveTipoCarpeta == 0) {
                error = 1;
                mensaje += "   - Relaci&oacute;n con";
            }
            if (Seleccion == "" || Seleccion == "Su acuerdo que selecciono tiene estatus de publicado") {
                error = 1;
                mensaje += "   - Seleccione el acuerdo para guardar";
            }
            if (numAct == "" && cveTipoCarpeta != 9) {
                error = 2;
                mensaje += "   - N&uacute;mero";
            }
            if (aniAct == "" && cveTipoCarpeta != 9) {
                error = 3;
                mensaje += "   - A&ntilde;o";
            }
            if (cveMateriaPericial == 0 && cveTipoCarpeta != 9) {
                error = 4;
                mensaje += "   - Materia Pericial";
            }
            if (isNaN(numer) || numer == "") {
                error = 5;
                mensaje += "   - Numero de dias";
            }
            if (cveMateriaPericial == "" && cveTipoCarpeta != 9) {
                error = 6;
                mensaje += "   - Resoluci&oacute;n";
            }
            if (perRelacionado == "") {
                error = 7;
                mensaje += "   - Perito relacionado con el expediente";
            }
            if ($('input[name="Editar"]').is(':checked')) {
                if ($("#txtMotivo").val().trim() === "") {
                    error = true;
                    mensaje += "Falta ingresar el motivo de la modificacion \n";
                }
            }
            if (Notas == "" && cveTipoCarpeta != 9) {
                error = 5;
                mensaje += "   - Contenido del documento";
            }


            if (error == 0) {
                strDatosCarpeta = "accion=consultarCarpetaExhortoAmparo";
                strDatosCarpeta += "&cveTipoCarpeta=" + cveTipoCarpeta;
                strDatosCarpeta += "&numero=" + numAct;
                strDatosCarpeta += "&anio=" + aniAct;
                strDatosCarpeta += "&cveJuzgado=" + cveJuzgado;
                if ($("#hiddenIdActuacion").val() != "" || $("#hiddenIdActuacion").val() != 0) {
                    cveAccion = 39; //modificacion acuerdo BITACORA
                }
                strDatosCarpeta = "accion=insert"; // accion que guarda actuaciones
                strDatosCarpeta += "&TipoAsignacion=A";
                strDatosCarpeta += "&numero=" + numAct;
                strDatosCarpeta += "&anio=" + aniAct;
                strDatosCarpeta += "&numerox=" + $("#txtNumero").val();
                strDatosCarpeta += "&aniox=" + $("#txtAnio").val();
                strDatosCarpeta += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
                strDatosCarpeta += "&cveAdscripcion=" + cveJuzgado[0];
                strDatosCarpeta += "&cveMateria=3";
                strDatosCarpeta += "&nvaInstancia=1";
                strDatosCarpeta += "&materiaPericial=" + $("#txtMotivo").val();
                strDatosCarpeta += "&PersonaSolicitante=" + $("#hiddenNombre").val();
                strDatosCarpeta += "&cveUsuarioSolicitante=" + cveUsuarioSesion;
                strDatosCarpeta += "&cveTipoNumero=" + cveTipoCarpeta;
                strDatosCarpeta += "&cveMateriaPericial=" + cveMateriaPericial;
                strDatosCarpeta += "&diasProtesta=" + $("#numer").val();
                strDatosCarpeta += "&observaciones=" + $.trim(Notas);
                strDatosCarpeta += "&idActuacion=" + $("#hiddenIdActuacionRef").val();
                strDatosCarpeta += "&idActuacionAcuerdo=" + $("#hiddenIdActuacionAcu").val();
                strDatosCarpeta += "&fechaSolicitud=" + $("#hiddenFechaActual").val();

                strDatosCarpeta += "&activo=S";
                if (cveTipoCarpeta != 9) {
                    $.ajax({
                        type: "POST",
                        url: "../controladores/sigejupe/solicitudesperitos/SolicitudesPeritosController.php",
                        async: true,
                        dataType: "json",
                        data: {
                            accion: "insert",
                            TipoAsignacion: "A",
                            observaciones: $.trim(Notas),
                            cveTipoCarpeta: cveTipoCarpeta,
                            numero: numAct,
                            anio: aniAct,
                            cveJuzgado: cveJuzgado,
                            numerox: $("#txtNumero").val(),
                            aniox: $("#txtAnio").val(),
                            cveAdscripcion: cveJuzgado,
                            cveMateria: "3",
                            nvaInstancia: "1",
                            materiaPericial: $("#txtMotivo").val(),
                            PersonaSolicitante: $("#hiddenNombre").val(),
                            cveUsuarioSolicitante: cveUsuarioSesion,
                            cveTipoNumero: cveTipoCarpeta,
                            cveMateriaPericial: cveMateriaPericial,
                            idPerito: $("#cmbPeritoRelacionado").val(),
                            diasProtesta: $("#numer").val(),
                            idActuacion: $("#hiddenIdActuacionRef").val(),
                            idActuacionAcuerdo: $("#hiddenIdActuacionAcu").val(),
                            fechaSolicitud: $("#hiddenFechaActual").val()
                        },
                        success: function (data) {
                            //var json = "";
                            //json = eval("(" + data + ")"); //Parsear JSON
                            if (data != "") {
                                $("#divHideForm").hide();
                                $("#divAlertSucces").show();
                                $("#divAlertSucces").html("Solicitud de perito guardada");
                                $("#divAlertSucces").show("slide");
                                setTimeAlert("divAlertSucces");
                                $('#PeritoAsignado').show();
                                $("#inputImprimir").show();
                                $("#inputEliminar").show();
                                $('#inputGuardar').hide();
                                $("#hddIdSolicitud").val(data.resultados[0].idSolicitudePerito);
                                $("#hddIdPerito").val(data.resultados[0].idPerito);
                                if (data.resultados[0].nomPerito == null) {
                                    $("#peritoAsignado").html("Fecha Solicitud: " + data.resultados[0].fechaSolicitudOri + " <br> Numero de solicitud: " + data.resultados[0].numeroSolicitud + "/" + data.resultados[0].anioSolicitud + " <br> Perito: FALTA POR ASIGNAR PERITO" + "<br>" + "<br>" + "Fecha de protesta para el perito: " + data.resultados[0].fechaDiasProtesta);
                                } else {
                                    $("#peritoAsignado").html("Fecha solicitud: " + data.resultados[0].fechaSolicitudOri + " <br> Numero de solicitud: " + data.resultados[0].numeroSolicitud + "/" + data.resultados[0].anioSolicitud + " <br>Perito asignado: " + data.resultados[0].nomPerito + "<br>" + "<br>" + "Fecha de protesta para el perito: " + data.resultados[0].fechaDiasProtesta);
                                }
                                if (data.resultados[0].activo == "S") {
                                    $('#Motivo').hide();
                                }
                                $("#cmbJuzgado").attr("disabled", 'disabled');
                                $("#cmbTipoCarpeta").attr('disabled', 'disabled');
                                $("#buscaPromocion").attr("disabled", "disabled");
                                $("#cmbMateriaPericial").attr('disabled', 'disabled');
                                $("#numer").attr('disabled', 'disabled');
                                $("#Sintesis").attr('disabled', 'disabled');
                                //$("#buscaPromocion").attr('disabled', 'disabled');

                                $("#txtNumero").attr('disabled', 'disabled');
                                $("#txtAnio").attr('disabled', 'disabled');

                                var html = "<table align='center' style='border-collapse:collapse'>";
                                html += "<tr height='50'>";
                                html += "<td align='center' colspan='2'><font size='3'><b>ACUSE DE SOLICITUD DE PERITO </b></font></td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Numero de solicitud: </b></td>";
                                html += "<td align='left'><b>" + data.resultados[0].numeroSolicitud + "/" + data.resultados[0].anioSolicitud + "</b></td>";

                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Perito asignado: </b></td>";
                                if (data.resultados[0].nomPerito == null) {
                                    html += "<td align='left'><b>FALTA POR ASIGNAR PERITO</b></td>";
                                } else {
                                    html += "<td align='left'><b>" + data.resultados[0].nomPerito + "</b></td>";
                                }
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Numero de " + $("#cmbTipoCarpeta option:selected").html().toLowerCase() + ":</b></td>";
                                html += "<td align='left'>" + data.resultados[0].numero + "/" + data.resultados[0].anio + "</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Juzgado: </b></td>";
                                html += "<td align='left'>" + $("#hiddenAdscripcion").val() + "</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Instancia: </b></td>";
                                html += "<td align='left'>PRIMERA INSTANCIA</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Materia: </b></td>";
                                html += "<td align='left'>PENAL</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Fecha asignaci\u00f3n: </b></td>";
                                html += "<td align='left'>" + $("#hiddenFechaActual").val() + "</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Materia Pericial:</b></td>";
                                html += "<td align='left'>" + $("#cmbMateriaPericial option:selected").html() + "</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Dias protesta cargo:</b></td>";
                                html += "<td align='left'>" + $("#numer").val() + "</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Fecha protesta:</b></td>";
                                html += "<td align='left'>" + data.resultados[0].fechaDiasProtesta + "</td>";
                                html += "</tr>";
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Observaciones: </td>";
                                html += "<td align='left'>" + $("#Sintesis").val() + "</td>";
                                html += "</tr>";
                                html += "</table>";
                                $("#Editar").attr("disabled", true);
                                $('#divFormatoImpresion').html(html);
                                $('#buscaPromocion').hide();
                                $('#inputPDF').show();
                            } else {
                                var tipoNumero = $('#cmbTipoCarpeta :selected').text();
                                //$("#divAlertDager").html("Error el numero de " + tipoNumero + " no existe");
                                //$("#divAlertDager").show("slide");
                                //setTimeAlert("divAlertDager");
                            }
                            $('#barCarga').html("");
                            if (data.resultados[0].imagen != "") {
                                $("#divFoto").show();
                                obtenerFoto(data.resultados[0].imagen);
                            } else {
                                $("#divFoto").hide();
                            }
    <?php if ($_POST['idActuacionAcuerdo'] != "" OR $_POST['idActuacionPadre'] != "") { ?>
                                //getTree(0);
    <?php } ?>
                        },
                        error: function (objeto, quepaso, otroobj) {
                            //alert("Error en la peticion:\n\n" + quepaso);
                            $("#divInformacion").show();
                            $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                            $("#divInformacion").show("slide");
                            setTimeAlert("divInformacion");
                        }
                    });
                } else {
                    // no busca carpeta y guarda ACUERDO sin relacion
                    strDatos += "&idActuacionAntecede=" + $("#hiddenIdActuacionPromocion").val();
                    guardarAcuerdo(strDatos);
                }


            } else {
                $("#divInformacion").show();
                $("#divInformacion").show();
                $("#divInformacion").html("Informaci&oacute;n! seleccione: " + mensaje);
                setTimeAlert("divInformacion");
            }

        };
        cambioDia = function (value) {
            if (value == true) {
                $('#MMotivo').hide();
                $('#txtMotivo').hide();
                $("#TRDia").hide();
                $("#txtMotivo").val("");
                $("#numer").val($("#numerOculto").val());
                $("#numer").attr('disabled', 'disabled');
                $("#txtMotivo").removeClass("cajaError");
                $("#Observaciones").removeClass("cajaError");
                document.getElementById("Editar").value = "0";
            } else {
                $('#MMotivo').show();
                $('#txtMotivo').show();
                $("#numer").removeAttr("disabled");
                $("#TRDia").show();
                $("#txtMotivo").val("");
                document.getElementById("Editar").value = "1";
            }
        };
        cargaTipoCarpeta = function (cveJuz) {
            $('#cmbTipoCarpeta').empty();
            var tipoJuzgado = $("#cmbJuzgado").val().split("/");

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
                        //$("#cmbTipoCarpeta").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                        for (var i = 0; i < json.totalCount; i++) {
                            if (tipoJuzgado[1] != undefined) {
                                switch (tipoJuzgado[1]) {
                                    case "1": // tipo de juzgado de control
                                        if (json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // exhorto, amparo
                                            $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "2": // tipo de juzgado juicio
                                        if (json.data[i].cveTipoCarpeta == "3" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // exhorto, amparo 
                                            $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "3": // tipo de juzgado ejecucion                                        
                                        if (json.data[i].cveTipoCarpeta == "5" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // exhorto, amparo                                            
                                            $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "4": // tipo de juzgado tribunal
                                        if (json.data[i].cveTipoCarpeta == "4" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // exhorto, amparo 
                                            $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        }
                                        break;
                                    case "5": // verificar queda pendiente*************************
                                        //                                if(json.data[i].cveTipoCarpeta == "4"){ // tipo carpeta causa de juicio
                                        //                                    $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                        //                                }
                                        break;
                                }
                            }

                        }
                        $("#cmbTipoCarpeta").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
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
        cargaResolucion = function () {
            var strDatos = "";
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/materiaspericiales/MateriasPericiales.php",
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
                            $("#cmbMateriaPericial").append($('<option></option>').val(json.resultados[i].cveMateriaPericial).html(json.resultados[i].descMateriaPericial));
                            $('#PeritoAsignado').hide();
                            $('#MMotivo').hide();
                        }
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show();
                    $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show("slide");
                    setTimeAlert("divInformacion");
                }
            });
        };
        cargaPeritosRelacionados = function (value) {
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            var strDatos = "numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&cveAdscripcion=" + cveJuzgado[0];
            strDatos += "&nvaInstancia=" + cveJuzgado[1];
            strDatos += "&cveMateriaPericial=" + value;
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/solicitudesperitos/ConsultarPeritosAsignados.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    if (datos !== "") {
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON                        
                        if (json.totalCount > 0) {
                            for (var i = 0; i < json.totalCount; i++) {
                                $("#cmbPeritoRelacionado").append($('<option></option>').val(json.resultados[i].idPerito).html(json.resultados[i].nomPerito));
                                $('#PeritoAsignado').hide();
                                $('#MMotivo').hide();
                                $('#Historial').show();
                            }
                        } else {
                            $('#Historial').hide();
                        }
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    // $("#divInformacion").show();
                    //$("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    //$("#divInformacion").show("slide");
                    //setTimeAlert("divInformacion");
                }
            });
        };
        cargaJuzgados = function () {
            var strDatos = "accion=distrito";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
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
                            $("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                            if (juzgadoSesion == json.data[i].cveJuzgado) {
                                $("#cmbJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                            }
                        }
                    }
                    cargaTipoCarpeta();

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
    <?php if ($_POST["idActuacionAcuerdo"] == "" || $_POST["idActuacionPadre"] == "") { ?>
                // $("#inputGuardar").hide();
    <?php } else { ?>
                $("#buscaPromocion").show();
    <?php } ?>
            $("#lblRelationName").html("No. " + $("#" + objOption.id + " option:selected").text() + ":");
            $("#hiddenCveTipoCarpeta").val($("#cmbTipoCarpeta").val());
            if ($("#cmbTipoCarpeta").val() == 9) { // sin relacion...
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#hddIdSolicitud").val("");
                $("#hddIdPerito").val("");
                $("#divSinRelacion").hide();
                $("#divBuscaPromocion").hide();
                $("#hddIdSolicitud").val("");
            } else {
                $("#hddIdSolicitud").val("");
                $("#hddIdPerito").val("");
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#hddIdSolicitud").val("");
                $("#divSinRelacion").show();
                //$("#buscaPromocion").removeAttr("disabled");
            }
        };

        //*********************************************************************************************************************    
        consutaIdActuacion = function (idRef, id, desTipoCarpeta, numPromocion) {
            $("#hiddenIdActuacionRef").val(idRef);
            $("#hiddenIdActuacionAcu").val(id);
            // se asigna el idActiuacion del acuerdo        
            $("#hiddenIdActuacion").val(id);
            $("#divConsultaActuaciones").hide();
            $("#divTableResultActuaciones").hide();
            var strPub = new Array();
            strPub = desTipoCarpeta.split(":");
            var strPub2 = new Array();
            strPub2 = strPub[2].split("</FONT>");
            if ($.trim(strPub2[0]) == "ACUERDO") {
                $("#divBuscaPromocion").show();
                $("#promocionSel").html("Acuerdo: " + numPromocion + " - " + desTipoCarpeta);
            } else {
                $("#promocionSel").html("Su acuerdo que selecciono tiene estatus de publicado");
                $("#divAlertDager").html("No se puede realizar la solicitud de perito porque el acuerdo esta publicado el acuerdo");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        };

        consutaIdCarpetaJudicial = function (idRef) {
            changeDivForm(1);
            var strDatos = "accion=consultarCarpetaExhortoAmparoById"; //seleccionar
            if (idRef != undefined) {
                strDatos += "&idEAC=" + idRef;
            }
            strDatos += "&cveTipoCarpeta=2";
            strDatos += "&activo=S";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
    //                              $('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
    //                ToggleLoading(1);
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        //alert(json.text);
                        //regresar();
                        $("#hiddenIdActuacion").val(json.data[0].idActuacion);
                        $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                        $("#txtNumero").val(json.data[0].numero);
                        $("#txtAnio").val(json.data[0].anio);
                        $("#numer").attr('disabled', 'disabled');
                        if (json.data[0].cveTipoCarpeta != "" && json.data[0].numero != "" && json.data[0].anio != "") {
                            buscarPromocion("", json.data[0].idActuacion);
                        }
                    } else {
                        /*
                         * verificar$("#divAlertInfo").html('no existe informacion del acuerdo');
                         $("#divAlertInfo").show("slide");
                         setTimeAlert("divAlertInfo");*/
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
            $('divTableResultActuaciones').click();
        };
        consultaCarpetaJud = function (idCarpetaJud, cveTipoCarpeta) {
            var strDatos = "";
            strDatos = "accion=consultarCarpetaExhortoAmparo";
            strDatos += "&idCarpetaJudicial=" + idCarpetaJud;
            strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
    //                alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
    //                    alert (json.data[0].cveTipoCarpeta+" - "+json.data[0].cveJuzgado)
                        valorJuzgado(json.data[0].cveJuzgado);
                        cargaTipoCarpeta();

                        if (cveTipoCarpeta == 7) {
    //                          idReferenciaAux = json.data[0].idExhorto; 
    //                        $("#cmbTipoCarpeta").val(cveTipoCarpeta);
                            setTimeout(function () {
                                $("#cmbTipoCarpeta").val(cveTipoCarpeta);
                            }, 1000);
                            $("#txtNumero").val(json.data[0].numExhorto);
                            $("#txtAnio").val(json.data[0].aniExhorto);
                        } else if (cveTipoCarpeta == 8) {
    //                          idReferenciaAux = json.data[0].idAmparo; 
    //                        $("#cmbTipoCarpeta").val(cveTipoCarpeta);
                            setTimeout(function () {
                                $("#cmbTipoCarpeta").val(cveTipoCarpeta);
                            }, 1000);
                            $("#txtNumero").val(json.data[0].numAmparo);
                            $("#txtAnio").val(json.data[0].aniAmparo);
                        } else {
    //                        idReferenciaAux = json.data[0].idCarpetaJudicial;
    //                        $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                            setTimeout(function () {
                                $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                            }, 1000);

                            $("#txtNumero").val(json.data[0].numero);
                            $("#txtAnio").val(json.data[0].anio);
                        }

                        $("#cmbTipoCarpeta").attr("disabled", true);
                        $("#txtNumero").attr("disabled", true);
                        $("#txtAnio").attr("disabled", true);
                        $("#cmbJuzgado").attr("disabled", true);
                        $("#divBuscaPromocion").show();
                        $("#inputConsultar").hide();

                        setTimeout(function () {
                            //$("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                            $("#buscaPromocion").attr("checked", true);
                            buscarPromocion();
                        }, 1000);


                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();

                        $("#divAlertDager").html("Error el numero de " + tipoNumero + " no existe");
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
        }
        consutaIdAcuerdo = function (id, descTipoCarpeta, tipoJuzgado, band) {
            changeDivForm(1);
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            var strDatos = "accion=seleccionar"; //seleccionar
            strDatos += "&idActuacion=" + id;
            strDatos += "&cveTipoActuacion=2";
            strDatos += "&cveJuzgado=" + cveJuzgado[0];
            strDatos += "&activo=S";
            var bandera = "true";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
    //                              $('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
    //                ToggleLoading(1);
                },
                success: function (datos) {
    //                  alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //alert(json.text);
                        //regresar();
                        $("#hiddenIdActuacion").val(json.data[0].idActuacion);
                        $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                        $("#txtNumero").val(json.data[0].numero);
                        $("#txtAnio").val(json.data[0].anio);
                        $("#numer").attr('disabled', 'disabled');
                        if (json.data[0].cveTipoCarpeta != "" && json.data[0].numero != "" && json.data[0].anio != "" && band == "false") {
                            buscarPromocion();
                        }
                        bandera = "true";
                    } else {
                        bandera = "false";
                        /*
                         * verificar
                         $("#divAlertInfo").html('no existe informacion del acuerdo');
                         $("#divAlertInfo").show("slide");
                         setTimeAlert("divAlertInfo");*/
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
            if (bandera == "true") {
                return "true";
            } else {
                return "false";
            }
        };
        consultasDiasMateriaPericial = function (cveMateriaPericial) {
            $("#TRID").hide();
            var strDatos = "cveMateriaPericial=" + cveMateriaPericial;
            strDatos += "&cveMateria=3";
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/solicitudesperitos/ConsultarMateriaPerController.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    $('#divLoading').show();
                    $('#divLoading').html("<img src='../img/barCarga.gif' border='0' title='cargando' align='absmiddle'>");
                },
                success: function (datos) {
                    $('#divLoading').hide();
                    if (datos.length > 3) {
                        $('#divLoading').html("");
                        $("#divResultados").html("");
                        if (datos !== "") {
                            var json = eval("(" + datos + ")");
                            if (json.estatus === "ok") {
                                $("#numer").val(json.resultados[0].dia);
                                $("#numerOculto").val(json.resultados[0].dia);
                                $("#numer").attr('disabled', 'disabled');
                            } else if (json.estatus === "sessionFail") {

                            } else {
                                $("#numer").val("");
                                $("#numerOculto").val("");
                            }
                        } else {
                            $("#divSnackBar").html("<span class='icon-checkmark' style='height:50%;'></span>" + "&nbsp;&nbsp;&nbsp;La region pericial no es valida o verifique si esta activada verifique");
                            $("#divSnackBar").show("fast");
                            $("#divBackCover").show();
                        }
                    } else {
                        $("#btnCancelacion").hide();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#divLoading').html("");
                }
            });
        };
        consultar = function () {
            $("#hiddenDatoCarpeta").val($("#cmbTipoCarpeta").val());
            $("#peritoAsignado").html("");
            $("#PeritoAsignado").hide();
            //$("#cmbTipoCarpeta").val(0);
            //$("#txtNumero").val("");
            //$("#txtAnio").val("");
            $("#divConsultaActuaciones").hide();
            $("#divTableResultActuaciones").hide();
            $("#divTableResultActuaciones").html("");
            $("#divBuscaPromocion").hide();
            $("#promocionSel").html("");
            $("#cmbMateriaPericial").removeAttr("disabled");
            $("#txtNumero").removeAttr("disabled");
            $("#txtAnio").removeAttr("disabled");
            $("#cmbTipoCarpeta").removeAttr("disabled");
            $("#buscaPromocion").removeAttr("disabled");
            $("#MMotivo").hide();
            $("#cmbMateriaPericial").val(0);
            $("#cmbTipoCarpeta").val(0);
            $("#divRangoFechas").show();
            $("#inputRegresar").show();
            $("#inputBuscar").show();
            $("#divNotas").hide();
            $("#inputGuardar").hide();
            $("#inputConsultar").hide();
            $("#inputEliminar").hide();
            $("#inputImprimir").hide();
            $("#divBuscaPromocion").hide();
            $("#divConsultaActuaciones").hide();
            $("#divFormatoImpresion").hide();
            $("#buscaPromocion").hide();
            $("#MDias").hide();
    <?php if ($_POST['idActuacionAcuerdo'] != "") { ?>
                $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Solicitud de Perito</span> / Consulta de Solicitudes");
    <?php } elseif ($_POST['idActuacionPadre'] != "" OR $_POST['idActuacionAcuerdo'] != "") { ?>
                $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Solicitud de Perito</span> / Consulta de Solicitudes");
    <?php } else { ?>
                $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Solicitud de Perito</span> / Consulta de Solicitudes");
    <?php } ?>
            $("#cmbTipoCarpeta").val($("#hiddenDatoCarpeta").val());
        };
        consultarSolicitudes = function () {
            //**************************** consulta de acuerdos *************************************        
            var pag = $("#cmbPaginacion").val()
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var cantReg = $("#cmbNumReg").val();
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            if (cveTipoCarpeta == 9) {
                cveTipoCarpeta = 0;
            }
            var strDatos = "accion=consultar";
            strDatos += "&cveJuzgado=" + cveJuzgado[0];
            if ($("#cmbTipoCarpeta").val() != null) {
                strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            } else {
                strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpetaTree").val();
            }
            strDatos += "&cveMateriaPericial=" + $("#cmbMateriaPericial").val();
            if ($("#txtNumero").val() != "") {
                strDatos += "&numero=" + $("#txtNumero").val();
            } else {
                strDatos += "&numero=" + $("#txtNumeroTree").val();
            }
            if ($("#txtAnio").val() != "") {
                strDatos += "&anio=" + $("#txtAnio").val();
            } else {
                strDatos += "&anio=" + $("#txtAnioTree").val();
            }
            strDatos += "&cveJuzgado=" + cveJuzgado[0];
            strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
            strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion        
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesperitos/SolicitudesperitosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
                    //ToggleLoading(1);
                },
                success: function (datos) {
                    var json = datos;
                    var table = "";

                    if (json.totalCount > 0) {
                        table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Numero Solicitud</th>";
                        table += "<th>Tipo Documento</th>";
                        table += "<th>Perito</th>";
                        table += "<th>Materia Pericial</th>";
                        table += "<th>Fecha Registro</th>";
                        table += "<th align='center'>Estatus</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        for (var i = 0; i < json.totalCount; i++) {
                            table += "<td onclick=\"consutaIdSolicitud('" + json.data[i].idReferencia + "','" + json.data[i].idActuacion + "','" + json.data[i].idReferenciaActuacionHija + "')\" > " + (i + 1) + "</td>";
                            table += "<td onclick=\"consutaIdSolicitud('" + json.data[i].idReferencia + "','" + json.data[i].idActuacion + "','" + json.data[i].idReferenciaActuacionHija + "')\" >" + json.data[i].numeroSolicitud + "/" + json.data[i].aniSolicitud + "</td>";
                            table += "<td onclick=\"consutaIdSolicitud('" + json.data[i].idReferencia + "','" + json.data[i].idActuacion + "','" + json.data[i].idReferenciaActuacionHija + "')\" >" + json.data[i].numero + "/" + json.data[i].anio + "</td>";
                            if (json.data[i].nombrePerito == null) {
                                table += "<td onclick=\"consutaIdSolicitud('" + json.data[i].idReferencia + "','" + json.data[i].idActuacion + "','" + json.data[i].idReferenciaActuacionHija + "')\" >FALTA POR ASIGNAR PERITO</td>";
                            } else {
                                table += "<td onclick=\"consutaIdSolicitud('" + json.data[i].idReferencia + "','" + json.data[i].idActuacion + "','" + json.data[i].idReferenciaActuacionHija + "')\" >" + json.data[i].nombrePerito + "</td>";
                            }
                            table += "<td onclick=\"consutaIdSolicitud('" + json.data[i].idReferencia + "','" + json.data[i].idActuacion + "','" + json.data[i].idReferenciaActuacionHija + "')\" >" + json.data[i].materiaPericial + "</td>";
                            table += "<td onclick=\"consutaIdSolicitud('" + json.data[i].idReferencia + "','" + json.data[i].idActuacion + "','" + json.data[i].idReferenciaActuacionHija + "')\" >" + json.data[i].fechaRegistro + "</td>";
                            if (json.data[i].activo == "N") {
                                table += "<td onclick=\"consutaIdSolicitud('" + json.data[i].idReferencia + "','" + json.data[i].idActuacion + "','" + json.data[i].idReferenciaActuacionHija + "')\" >CANCELADO</td>";
                            } else {
                                table += "<td onclick=\"consutaIdSolicitud('" + json.data[i].idReferencia + "','" + json.data[i].idActuacion + "','" + json.data[i].idReferenciaActuacionHija + "')\" >ACTIVO</td>";
                            }
                            table += "</tr> ";
                            //                                                    alert(json.data[i].observaciones);
                        }
                        table += "</tbody>";
                        table += "</table>";

                        $("#divHideForm").hide();
                        $("#divTableResult").html(table);
                        /*$("#tblResultadosGrid").DataTable(
                         {
                         paging: false
                         }
                         );*/
                        getPaginas(json.data[0].pagina, cantReg);
                        changeDivForm(2);
                        $("#Editar").attr("disabled", true);
                        $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Solicitud de Perito</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta de Solicitudes</span> / Resultados");

                    } else {
                        $("#divInformacion").show();
                        $("#divInformacion").html('' + json.text.toLowerCase());
                        setTimeAlert("divInformacion");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show();
                    $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show("slide");
                    setTimeAlert("divInformacion");
                }
            });

            //**************************** consulta de oficios *************************************
        };
        consutaIdSolicitud = function (idSolicitudePerito, idActuacion, idReferenciaActuacionHija) {
            changeDivForm(1);
            var strDatos;
            if (idSolicitudePerito != "undefined" && idSolicitudePerito > 0) {
                strDatos = "idSolicitudePerito=" + idSolicitudePerito;
            } else {
                if (idSolicitudePerito != "undefined" && idActuacion != "undefined") {
                    strDatos = "idReferencia=" + idActuacion;
                    strDatos += "&idSolicitudePerito=" + idSolicitudePerito;
                } else {
                    strDatos = "idActuacion=" + idActuacion;
                }
            }
            if (idSolicitudePerito > 0 || idActuacion > 0 || idReferenciaActuacionHija > 0) {
                $.ajax({
                    type: "POST",
                    url: "../controladores/sigejupe/solicitudesperitos/ConsultarIDPeritosController.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        //                              $('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                        //                ToggleLoading(1);
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount > 0) {
                            //alert(json.text);
                            //regresar();                                  
                            $("#hiddenIdActuacion").val(json.resultados[0].idReferencia);
                            $("#cmbTipoCarpeta").val(json.resultados[0].cveTipoNumero);
                            $("#txtNumero").val(json.resultados[0].numero);
                            $("#txtAnio").val(json.resultados[0].anio);
                            $("#cmbMateriaPericial").val(json.resultados[0].cveMateriaPericial);
                            $("#numer").val(json.resultados[0].diasProtesta);
                            llenareditor(json.resultados[0].observaciones);
                            //$("#Sintesis").val();                    
                            var strCadena = json.resultados[0].observaciones;
                            var strObs = strCadena.split('<br>');
                            llenareditor(strObs[0]);
                            //$("#Sintesis").val(strObs[0]);
                            $("#motivo").html(strObs[1]);
                            $("#hddIdSolicitud").val(json.resultados[0].idSolicitudePerito);
                            $("#hddIdPerito").val(json.resultados[0].idPerito);
                            $("#PeritoAsignado").show();
                            $("#peritoAsignado").show();
                            valorJuzgado(json.resultados[0].cveAdscripcion);
                            if (json.resultados[0].activo == "N") {
                                $('#motivo').show();
                                $('#Motivo').show();
                            } else {
                                $('#motivo').hide();
                                $('#Motivo').hide();
                            }
                            if (json.resultados[0].nomPerito == null) {
                                $("#peritoAsignado").html("Fecha Solicitud: " + json.resultados[0].fechaSolicitudOri + " <br> Numero de solicitud: " + json.resultados[0].numeroSolicitud + "/" + json.resultados[0].anioSolicitud + " <br> Perito: FALTA POR ASIGNAR PERITO" + "<br>" + "<br>" + "Fecha protesta par el perito: " + json.resultados[0].fechaDiasProtesta);
                            } else {
                                $("#peritoAsignado").html("Fecha solicitud: " + json.resultados[0].fechaSolicitudOri + " <br> Numero de solicitud: " + json.resultados[0].numeroSolicitud + "/" + json.resultados[0].anioSolicitud + " <br>Perito asignado: " + json.resultados[0].nomPerito + "<br>" + "<br>" + "Fecha protesta par el perito: " + json.resultados[0].fechaDiasProtesta);
                            }
                            var html = "<table align='center' style='border-collapse:collapse'>";
                            html += "<tr height='50'>";
                            if (json.resultados[0].activo == "S") {
                                html += "<td align='center' colspan='2'><font size='3'><b>ACUSE DE SOLICITUD DE PERITO </b></font></td>";
                            } else {
                                html += "<td align='center' colspan='2'><font size='3'><b>ACUSE DE CANCELACI\u00d3N DE  SOLICITUD DE PERITO </b></font></td>";
                            }
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Numero de solicitud: </b></td>";
                            html += "<td align='left'><b>" + json.resultados[0].numeroSolicitud + "/" + json.resultados[0].anioSolicitud + "</b></td>";

                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Perito asignado: </b></td>";
                            if (json.resultados[0].nomPerito == null) {
                                html += "<td align='left'><b>FALTA POR ASIGNAR PERITO</b></td>";
                            } else {
                                html += "<td align='left'><b>" + json.resultados[0].nomPerito + "</b></td>";
                            }
                            html += "</tr>";
                            html += "<tr height='35'>";
                            //html += "<td align='right'><b>Numero de " + $("#cmbTipoCarpeta option:selected").html().toLowerCase() + ":</b></td>";
                            ///html += "<td align='left'>" + json.resultados[0].numero + "/" + json.resultados[0].anio + "</td>";
                            //html += "</tr>";                    
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Juzgado: </b></td>";
                            html += "<td align='left'>" + $("#hiddenAdscripcion").val() + "</td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Instancia: </b></td>";
                            html += "<td align='left'>PRIMERA INSTANCIA</td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Materia: </b></td>";
                            html += "<td align='left'>PENAL</td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Fecha asignaci\u00f3n: </b></td>";
                            html += "<td align='left'>" + $("#hiddenFechaActual").val() + "</td>";
                            html += "</tr>";
                            //html += "<tr height='35'>";
                            //html += "<td align='right'><b>Materia Pericial:</b></td>";
                            //html += "<td align='left'>" + $("#cmbMateriaPericial option:selected").html() + "</td>";
                            //html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Dias protesta cargo:</b></td>";
                            html += "<td align='left'>" + $("#numer").val() + "</td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Fecha protesta:</b></td>";
                            html += "<td align='left'>" + json.resultados[0].fechaDiasProtesta + "</td>";
                            html += "</tr>";
                            html += "<tr height='35'>";
                            html += "<td align='right'><b>Observaciones: </td>";
                            html += "<td align='left'>" + strObs[0] + "</td>";
                            html += "</tr>";
                            if (strObs[1] != undefined) {
                                html += "<tr height='35'>";
                                html += "<td align='right'><b>Motivo de cancelaci\u00F3n:</b> </td>";
                                html += "<td align='left'>" + strObs[1] + "</td>";
                                html += "</tr>";
                            }
                            html += "</table>";
                            $('#inputPDF').show();
                            $('#divConsultaActuaciones').hide();

                            $('#divFormatoImpresion').html(html);
                            //regresar(1);
                            // busca idActuacionPadre de actuacion
                            buscarAntecede(idReferenciaActuacionHija);
                            if (json.resultados[0].imagen != "") {
                                $("#divFoto").show();
                                obtenerFoto(json.resultados[0].imagen);
                            } else {
                                $("#divFoto").hide();
                            }
                            //$("#cmbJuzgado").attr("disabled", false)                    
                            //$("#buscaPromocion").hide();
                            //$("#inputLimpiar").hide();
                        } else {
                            $("#divInformacion").show();
                            $("#divInformacion").html('no existe informacion del acuerdo');
                            $("#divInformacion").show("slide");
                            setTimeAlert("divInformacion");
                        }
                        $("#buscaPromocion").show();

                    },
                    error: function (objeto, quepaso, otroobj) {
                        $("#divInformacion").show();
                        $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                        $("#divInformacion").show("slide");
                        setTimeAlert("divInformacion");
                    }
                });
            }
        };
        eliminarSolicitudes = function () {
            if ($("#hddIdSolicitud").val() != "") {
                $("#divInformacion").hide();
                $("#divInformacion").html("");
                bootbox.dialog({
                    message: "Advertencia!! <br><br> Esta seguro de eliminar la solicitud de perito??",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                var box = bootbox.prompt("Ingrese el motivo de la cancelacion", function (result) {
                                    if (result == null) {
                                        box.modal('hide');
                                    }
                                    if (result != "") {

                                        var strDatos = "&action=cancelacion";
                                        strDatos += "&idSolicitudPerito=" + $("#hddIdSolicitud").val();
                                        strDatos += "&idReferencia=" + $("#hddIdSolicitud").val();
                                        strDatos += "&idPerito=" + $("#hddIdPerito").val();
                                        strDatos += "&motivo=" + result.trim();
                                        $.ajax({
                                            type: "POST",
                                            url: "../controladores/sigejupe/solicitudesperitos/CancelacionesPeritosController.php",
                                            data: strDatos,
                                            async: false,
                                            dataType: "html",
                                            beforeSend: function (objeto) {
                                                //                ToggleLoading(1);
                                            },
                                            success: function (datos) {
                                                var json = "";
                                                json = eval("(" + datos + ")"); //Parsear JSON
                                                $("#divHideForm").hide();
                                                $("#divMenssage").hide();
                                                if (datos == "" || json.totalCount > 0) {
                                                    $("#divAlertSucces").html("Cancelacion realizada correctamente");
                                                    $("#divAlertSucces").show("slide");
                                                    setTimeAlert("divAlertSucces");
                                                    var html = "<table align='center' style='border-collapse:collapse'>";
                                                    html += "<tr height='50'>";
                                                    html += "<td align='center' colspan='2'><font size='3'><b>ACUSE DE CANCELACI\u00d3N DE SOLICITUD DE PERITO </b></font></td>";
                                                    html += "</tr>";
                                                    html += "<tr height='35'>";
                                                    html += "<td align='right'><b>Numero de solicitud: </b></td>";
                                                    html += "<td align='left'><b>" + $("#txtNumLlamada").html() + "</b></td>";
                                                    html += "</tr>";
                                                    html += "<tr height='35'>";
                                                    html += "<td align='right'><b>Perito Asignado: </b></td>";
                                                    if ($("#lblPeritoAsignado").html() == null) {
                                                        html += "<td align='left'><b>FALTA POR ASIGNAR PERITO</b></td>";
                                                    } else {
                                                        html += "<td align='left'><b>" + $("#lblPeritoAsignado").html() + "</b></td>";
                                                    }
                                                    html += "</tr>";
                                                    html += "<tr height='35'>";
                                                    html += "<td align='right'><b>Numero de " + $("#cmbNumRelacion option:selected").html().toLowerCase() + ":</b></td>";
                                                    html += "<td align='left'>" + $("#txtNoCarpetaJudicial").val() + "/" + $("#txtAnioCarpetaJudicial").val() + "</td>";
                                                    html += "</tr>";
                                                    html += "<tr height='35'>";
                                                    html += "<td align='right'><b>Juzgado: </b></td>";
                                                    html += "<td align='left'>" + $("#cmbJuzFusion option:selected").html() + "</td>";
                                                    html += "</tr>";
                                                    html += "<tr height='35'>";
                                                    html += "<td align='right'><b>Instancia: </b></td>";
                                                    html += "<td align='left'>" + $("#InstanciasMateria option:selected").html() + "</td>";
                                                    html += "</tr>";
                                                    html += "<tr height='35'>";
                                                    html += "<td align='right'><b>Materia: </b></td>";
                                                    html += "<td align='left'>" + $("#Materias option:selected").html() + "</td>";
                                                    html += "</tr>";
                                                    html += "<tr height='35'>";
                                                    html += "<td align='right'><b>Fecha asignación: </b></td>";
                                                    html += "<td align='left'>" + $("#txtFechaSolicitud").html() + "</td>";
                                                    html += "</tr>";
                                                    html += "<tr height='35'>";
                                                    html += "<td align='right'><b>Materia Pericial:</b></td>";
                                                    html += "<td align='left'>" + $("#CmbMateriaPericial option:selected").html() + "</td>";
                                                    html += "</tr>";
                                                    html += "<tr height='35'>";
                                                    html += "<td align='right'><b>Observaciones: </td>";
                                                    html += "<td align='left'>" + $("#Observaciones").val() + "</td>";
                                                    html += "</tr>";
                                                    html += "</table>";
                                                    $("#divFormatoImpresion").html(html);

                                                    limpiar();
                                                    $("#inputGuardar").hide();
                                                    $("#inputEliminar").hide();
                                                }
                                                if (json.estatus == "registrado") {
                                                    $("#divHideForm").hide();
                                                    $("#divAlertSucces").html("Solicitud ya fue cancelada con anterioridad!!");
                                                    $("#divAlertSucces").show("slide");
                                                    setTimeAlert("divAlertSucces");
                                                }
                                            },
                                            error: function (objeto, quepaso, otroobj) {
                                                $("#divInformacion").show();
                                                $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                                                $("#divInformacion").show("slide");
                                                setTimeAlert("divInformacion");
                                            }
                                        });
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
                $("#divInformacion").show();
                $("#divInformacion").html("No ha seleccionado un registro");
                $("#divInformacion").show("slide");
                setTimeAlert("divInformacion");
            }
        };
        enviar = function () {
    //        alert("enviar datos..."+$("#hiddenIdActuacion").val());
            var Notas = editor.getContent();           // este valor se va para el campo de observaciones
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            var strDatos = "accion=generarJson";
            strDatos += "&cveTipo=1"; //2 = actuacion
            strDatos += "&cveTipoDocumento=29"; //tipo documento
            strDatos += "&idReferencia=" + $("#hiddenIdActuacion").val();
            strDatos += "&idSolicitudPertioActuacion=" + $("#hddIdSolicitud").val();
            strDatos += "&cveJuzgado=" + cveJuzgado[0];
            strDatos += "&Observaciones=" + Notas;

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesperitos/SolicitudesperitosFacade.Class.php",
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
                        generaPDF(datos);
                    } else {
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
        limpiar = function (band) {
    <?php if ($_POST["idActuacionPadre"] != "" || $_POST["idReferencia"] != "" || $_POST["idActuacionAcuerdo"] != "") { ?>
                loadFormTree('sigejupe/peritos/frmPeritos.php', 'SOLICITUD DE PERITOS')
    <?php } else if ($_POST["idActuacionPadre"] == "" || $_POST["idReferencia"] == "" || $_POST["idActuacionAcuerdo"] == "") { ?>
                loadOpcion('sigejupe/peritos/frmPeritos.php', 'areadetrabajo')
    <?php } else { ?>
                $("#numer").val("");
                $("#hddIdSolicitud").val("");
                $("#divAlertDager").html("");
                $("#divAlertDager").hide();
                if (band == "true") {
                    $("#peritoAsignado").html("");
                    $("#PeritoAsignado").hide();
                    $("#cmbTipoCarpeta").val(0);
                    $("#txtNumero").val("");
                    $("#txtAnio").val("");
                    $("#divConsultaActuaciones").hide();
                    $("#divTableResultActuaciones").hide();
                    $("#divTableResultActuaciones").html("");
                    $("#divBuscaPromocion").hide();
                    $("#promocionSel").html("");
                }
        <?php if ($_POST['cveTipoCarpeta'] == "" AND $_POST['idCarpetaJudicial'] != "" AND $_POST['idReferencia'] == "" AND $_POST['idActuacionPadre'] == "") { ?>
                    $("#peritoAsignado").html("");
                    $("#PeritoAsignado").hide();
                    $("#cmbTipoCarpeta").val(0);
                    $("#txtNumero").val("");
                    $("#txtAnio").val("");
                    $("#divConsultaActuaciones").hide();
                    $("#divTableResultActuaciones").hide();
                    $("#divTableResultActuaciones").html("");
                    $("#divBuscaPromocion").hide();
                    $("#promocionSel").html("");
        <?php } elseif ($_POST['cveTipoCarpeta'] != "" AND $_POST['idCarpetaJudicial'] == "" AND $_POST['idReferencia'] != "" AND $_POST['idActuacionPadre'] != "") { ?>
                    $("#peritoAsignado").html("");
                    $("#PeritoAsignado").hide();
                    $("#cmbTipoCarpeta").val(0);
                    $("#txtNumero").val("");
                    $("#txtAnio").val("");
                    $("#divConsultaActuaciones").hide();
                    $("#divTableResultActuaciones").hide();
                    $("#divTableResultActuaciones").html("");
                    $("#divBuscaPromocion").hide();
                    $("#promocionSel").html("");
        <?php } elseif ($_POST['idCarpetaJudicial'] != "" AND $_POST['idActuacionAcuerdo'] == "" AND $_POST['idReferenciaAcuerdo'] == "" AND $_POST['cveTipoCarpetaAcuerdo'] == "") { ?>
                    $("#peritoAsignado").html("");
                    $("#PeritoAsignado").hide();
                    $("#cmbTipoCarpeta").val(0);
                    $("#txtNumero").val("");
                    $("#txtAnio").val("");
                    $("#divConsultaActuaciones").hide();
                    $("#divTableResultActuaciones").hide();
                    $("#divTableResultActuaciones").html("");
                    $("#divBuscaPromocion").hide();
                    $("#promocionSel").html("");
        <?php } ?>
                $("#hddIdSolicitud").val("");
                $("#hddIdPerito").val("");
                $("#cmbMateriaPericial").val(0);
                $("#cmbNotificacion").val(0);
                $("#Sintesis").val("");
                $("#hiddenIdActuacion").val("");
                $("#hiddenCveTipoCarpeta").val("");
                $("#lblRelationName").html("No.");
                $("#divSinRelacion").show();
                $("#txtfechaInicial").val($("#hiddenFechaActual").val());
                $("#txtfechaFinal").val($("#hiddenFechaActual").val());
                $("#cmbEstatus").val(0);

                $("#numer").attr("disabled", false);
                $("#cmbJuzgado").attr("disabled", false);
                $("#cmbTipoCarpeta").attr("disabled", false);
                $("#buscaPromocion").attr("disabled", false);
                $("#txtNumero").attr("disabled", false);
                $("#txtAnio").attr("disabled", false);
                $("#cmbMateriaPericial").attr("disabled", false);
                $("#cmbNotificacion").attr("disabled", false);
                $("#Sintesis").attr("disabled", false);
                $("#cmbEstatus").attr("disabled", false);
                editor.setContent("", false);

                //$("#buscaPromocion").attr("checked", false);

                //$("#buscaPromocion").attr("disabled", false);        
                //$("#inputGuardar").show();

                $("#divFormatoImpresion").html("");
                $("#hiddenIdActuacionPromocion").val("");
                $("#divCorrecto").html("");
                $("#divCorrecto").hide();
                $("#divInformacion").html("");
                $("#divInformacion").hide();
                $("hiddenIdActuacionSec").val("");
                $("hiddenAnioActuacion").val("");
                $("#Motivo").hide();
                $("#motivo").hide();
                //$("#buscaPromocion").hide();
                $("#divAlertSucces").hide();
                $("#divAlertSucces").html("");
    <?php } ?>
        };
        llenareditor = function (value) {
            try {
                editor.ready(function () {
                    setTimeout(function () {
                        editor.setContent(value, false);
                    }, 500);
                    ;
                });
            } catch (e) {
                //alert(e);
            }
        };
        guardarAcuerdo = function (strDatos) {
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //                            alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        //alert(json.text);
                        if (json.data[0].observaciones != "publicado") {
                            $("#divHideForm").hide();
                            $("#divAlertSucces").html("Correcto!: " + json.text.toLowerCase());
                            $("#divAlertSucces").show("slide");
                            setTimeAlert("divAlertSucces");

                            $("#hiddenIdActuacion").val(json.data[0].idActuacion);
                            muestraEstatus(json.data[0].idActuacion);
                        } else {
                            $("#divHideForm").hide();
                            $("#divInformacion").show();
                            $("#divInformacion").html("Actuacion publicada, no puede ser modificada");
                            $("#divInformacion").show("slide");
                            setTimeAlert("divInformacion");
                        }
                        setTimeout(function () {
                            $("#cmbJuzgado").attr("disabled", true);
                            $("#cmbTipoCarpeta").attr("disabled", true);
                            $("#buscaPromocion").attr("disabled", true);
                            $("#txtNumero").attr("disabled", true);
                            $("#txtAnio").attr("disabled", true);
                            // alert("muestra datos actuacion..");
                        }, 1000);

                        //obtenerContador();
                    } else {
                        //alert(json.text);
                        $("#divHideForm").hide();
                        $("#divInformacion").show();
                        $("#divInformacion").html(json.text);
                        $("#divInformacion").show("slide");
                        setTimeAlert("divInformacion");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divInformacion").show();
                    $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show("slide");
                    setTimeAlert("divInformacion");
                }
            });
        };
        getPaginas = function (pag, cantReg) {
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            if (cveTipoCarpeta == 9) {
                cveTipoCarpeta = 0;
            }
            var strDatos = "accion=getPaginas";
            strDatos += "&cveJuzgado=" + cveJuzgado[0];
            strDatos += "&cveTipoCarpeta=" + $("#cmbTipoCarpeta").val();
            strDatos += "&cveMateriaPericial=" + $("#cmbMateriaPericial").val();
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
            strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            strDatos += "&pag=" + pag;
            strDatos += "&cveTipoActuacion=2";// el 2 es para las actuaciones acuerdo
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion


            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/solicitudesperitos/SolicitudesperitosFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
                    //                        alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON                                   
                    if (json.totalCount > 0) {
                        //$('#cmbPaginacion').find('option').remove().end().append('<option value="0">Seleccione pagina</option>').val('0');

                        $('#cmbPaginacion').find('option').remove().end();
                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#cmbPaginacion").val(pag);

                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                    } else {
                        var tipoNumero = $('#cmbTipoCarpeta :selected').text();

                        //$("#divAlertDager").html("Error el numero de " + tipoNumero + " no existe");
                        //$("#divAlertDager").show("slide");
                        //setTimeAlert("divAlertDager");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show();
                    $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show("slide");
                    setTimeAlert("divInformacion");
                }
            });


        };

        muestraEstatus = function (idActuacion) {
            var strDatos = "accion=muestraEstatusActuacion";
            strDatos += "&idActuacion=" + idActuacion;
            strDatos += "&activo=S";

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //                          alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        $("#cmbEstatus").val(json.data[0].cveEstatus);
                        if (json.data[0].cveEstatus == 3) {// publicado
                            $("#cmbJuzgado").attr("disabled", true);
                            $("#cmbTipoCarpeta").attr("disabled", true);
                            $("#buscaPromocion").attr("disabled", false);
                            $("#txtNumero").attr("disabled", true);
                            $("#txtAnio").attr("disabled", true);
                            $("#cmbMateriaPericial").attr("disabled", true);
                            $("#cmbNotificacion").attr("disabled", true);
                            $("#Sintesis").attr("disabled", true);
                            $("#cmbEstatus").attr("disabled", true);
                        } else {
                            $("#cmbJuzgado").attr("disabled", true);
                            $("#cmbTipoCarpeta").attr("disabled", false);
                            $("#buscaPromocion").attr("disabled", false);
                            $("#txtNumero").attr("disabled", false);
                            $("#txtAnio").attr("disabled", false);
                            $("#cmbMateriaPericial").attr("disabled", false);
                            $("#cmbNotificacion").attr("disabled", false);
                            $("#Sintesis").attr("disabled", false);
                            $("#cmbEstatus").attr("disabled", false);
                        }
                    } else {
                        // alert(json.text + " no tiene registrado el estuatus el acuerdo");
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divInformacion").show();
                    $("#divInformacion").html("Error en la peticion:\n\n" + quepaso);
                    $("#divInformacion").show("slide");
                    setTimeAlert("divInformacion");
                }
            });

        };
        obtenerFoto = function (numEmpleado) {
            var strDatos = "numEmpleado=" + numEmpleado
            $.ajax({
                type: "POST",
                url: "sigejupe/peritos/frmFoto.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {

                },
                success: function (datos) {
                    if (datos !== "") {
                        var json = eval("(" + datos + ")");
                        var html = "<div style='border-radius: 50%; margin: 3px; float: left;  border: 1.5px solid #FFFFFF; width: 150px; height: 150px; background: #115343 url(" + json.url + "); background-repeat: no-repeat; background-position: center; background-size: 135% '></div>";
                        $("#divFoto").html(html);
                    } else {
                        $("#divSnackBar").html("<span class='icon-checkmark' style='height:50%;'></span>" + "&nbsp;&nbsp;&nbsp;La region pericial no es valida o verifique si esta activada verifique");
                        $("#divSnackBar").show("fast");
                        $("#divBackCover").show();
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#divLoading').html("");
                }
            });
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
                                    if (vnombre.nomFormulario == "CARPETAS JUDICIALES") {
                                        var hijos = vnombre.hijos;
                                        $.each(hijos, function (k2, nombreHijo) {
                                            if (nombreHijo.nomFormulario == 'ACUERDOS') {
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
                        //if (deleteRecord == "S") {
                        //    $("#inputEliminar").show();
                        //}
                    });
        }
        //*********************************************************************************************************************    
        regresar = function (bndSelecciono) {
            $("#divRangoFechas").hide();
            $("#inputRegresar").hide();
            $("#inputBuscar").hide();
            $("#divNotas").show();
            $("#inputConsultar").show();
            $("#cmbPaginacion").val(1);
            $("#divBuscaPromocion").hide();
            $("#buscaPromocion").show();
            if (bndSelecciono == 1) {
                setTimeout(function () {
                    $("#cmbJuzgado").attr("disabled", true);
                    $("#cmbTipoCarpeta").attr("disabled", true);
                    $("#buscaPromocion").attr("disabled", false);
                    $("#txtNumero").attr("disabled", true);
                    $("#txtAnio").attr("disabled", true);
                    // alert("muestra datos actuacion..");
                }, 1000);
            }
            if (String(createRecord) === "S") {
                $("#inputGuardar").show();
            }
            //if (deleteRecord == "S") {
            //    $("#inputEliminar").show();
            //}
            //        $("#inputEliminar").show();
            //$("#inputGuardar").show();
            //$("#inputImprimir").show();
            $("#h5titulo").html("<span>Solicitud de Perito</span>");
            $("#MDias").show();
            $("#cmbTipoCarpeta").val($("#hiddenDatoCarpeta").val());
        };
        regresar2 = function () {
            changeDivForm(1);
            regresar();
        };

        regresarConsultar = function () {
            changeDivForm(1);
            $("#cmbPaginacion").val(1);
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Solicitud de Perito</span> / <span>Consulta de Solicitudes</span>");
        }
        valorJuzgado = function (cveJuzgado) {
            var strDatos = "";
            strDatos = "accion=consultar";
            strDatos += "&cveJuzgado=" + cveJuzgado;
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                },
                success: function (datos) {
    //                alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
    //                    alert (json.data[0].cveJuzgado+"/"+json.data[0].cveTipojuzgado);
                        $("#cmbJuzgado").val(json.data[0].cveJuzgado + "/" + json.data[0].cveTipojuzgado);
                        cargaTipoCarpeta();
                    } else {

                        $("#divAlertDager").html("Error al obtener tipo de juzgado");
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
        (function (a) {
            a.fn.validaCampo = function (b) {
                a(this).on({keypress: function (a) {
                        var c = a.which, d = a.keyCode, e = String.fromCharCode(c).toLowerCase(), f = b;
                        (-1 != f.indexOf(e) || 9 == d || 37 != c && 37 == d || 39 == d && 39 != c || 8 == d || 46 == d && 46 != c) && 161 != c || a.preventDefault()
                    }})
            }

        })(jQuery);
        $(function () {
            cargaJuzgados();
            $("#txtNumero").validaCampo('0123456789');
            $("#txtAnio").validaCampo('0123456789');

            $("#txtfechaInicial").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            $("#txtfechaFinal").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            $('#Motivo').hide();
            $("#Editar").removeAttr("disabled");
            //cargaTipoCarpeta($("#cmbJuzgadoArbol option:selected").attr("tipojuzgado"));
            $("#buscaPromocion").hide();
            $("#divBuscaPromocion").hide();
            //cargaNotificacion();
            //cargaEstatus();        
    <?php if ($_POST['idActuacionAcuerdo'] != "") { ?>
                $("#buscaPromocion").hide();
                consutaIdAcuerdo(<?php echo $_POST['idActuacionAcuerdo']; ?>, '', '', 'true');
    <?php } ?>
    <?php if ($_POST['idActuacionPadre'] != "") { ?>
                $("#buscaPromocion").hide();
                consutaIdAcuerdo(<?php echo $_POST['idActuacionPadre']; ?>, '', '', 'true');
    <?php } ?>
            if (procedencia == 1) { // si viene del arbol idActuacionArbol idCarpetaJudicialArbol                                    
                if ($("#hiddenIdActuacion").val() != 0) {
                    //consutaIdSolicitud($("#hiddenIdActuacion").val(), "");
                } else if ($("#hiddenIdCarpetaJudicial").val() != 0 && $("#hiddenIdCarpetaJudicial").val() != "") {
    <?php if ($_POST['idActuacion'] !== "" AND $_POST['idReferencia'] !== "" AND $_POST['cveTipoCarpeta'] !== "") { ?>
                        consutaIdSolicitud("", '<?php echo $_POST['idActuacion']; ?>');
    <?PHP } else { ?>
                        consultaCarpetaJud($("#hiddenIdCarpetaJudicial").val(), $("#hiddenCveTipoCarpeta").val());
    <?PHP } ?>
                }
            }
            $("#inputLimpiar").show();
    <?php if ($_POST["idActuacion"] != "") { ?>
                //   consutaIdSolicitud('',<?php echo $_POST["idActuacion"]; ?>, '');
    <?php } ?>
    <?php if ($_POST['idReferenciaAcuerdo'] != "") { ?>
                consutaIdCarpetaJudicial(<?php echo $_POST['idReferenciaAcuerdo']; ?>);
    <?php } ?>
    <?php if ($_POST['idReferencia'] != "" AND $_POST['idActuacion'] == "" AND $_POST['idReferenciaAcuerdo'] == "") { ?>
                consutaIdCarpetaJudicial(<?php echo $_POST['idReferencia'] . $_POST['idReferenciaAcuerdo']; ?>);
    <?php } ?>
            obtenerPermisos();
            cargaResolucion();
            $("#txtMotivo").hide();
            $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate', function (e) {
                $(this).datepicker('hide');
            });
            $("#inputEliminar").hide();
            $("#inputImprimir").hide();
            $("#inputPDF").hide();
            // editor de texto
            editor = UE.getEditor('Sintesis');
            editor.ready(function () {
                editor.setContent("");
            });
    <?php if ($_POST["idActuacionAcuerdo"] == "" || $_POST["idActuacionPadre"] == "") { ?>
                $("#buscaPromocion").show();
    <?php } ?>
            $('#Historial').hide();
        });

        print = function () {
            if ($("#hddIdSolicitud").val() != "") {
                var ventimp = window.open(' ', 'mywindow');
                var htmltoPrint = "<html>";
                htmltoPrint += "<head>";
                htmltoPrint += '<style type="text/css">.trI{background: #F0FAF5; border-bottom: solid 1px #000000;font-family: Arial;font-size: 11px;}.trP{background: #D4F2E4;font-family: Arial;font-size: 11px;}.trI:hover{background: #7bdc9c;cursor: pointer;}.trP:hover{background: #7bdc9c;cursor: pointer;}.trHead{font-size: 12px;background: #c6f0d4;font-family: Arial;font-weight: bold;border-bottom: double #000000;}</style>';
                htmltoPrint += "<table align='center' style='border-collapse:collapse'>";
                htmltoPrint += "<thead>";
                htmltoPrint += '<tr>';
                htmltoPrint += '<td align="center"><img src="img/encabezado.jpg" width="620" height="60"></td>';
                htmltoPrint += '</tr>';
                htmltoPrint += "</thead>";
                htmltoPrint += "</table>";
                htmltoPrint += "</head>";
                htmltoPrint += "<body>";
                htmltoPrint += $("#divFormatoImpresion").html();
                htmltoPrint += "</body>";
                htmltoPrint += "</html>";
                ventimp.document.write(htmltoPrint);
                //                ventimp.document.close();
                ventimp.print();
            } else {
                $("#divInformacion").show();
                $("#divInformacion").html("No ha seleccionado un registro para imprimir");
                $("#divInformacion").show("slide");
                setTimeAlert("divInformacion");
            }
        };
    </script> 



    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>