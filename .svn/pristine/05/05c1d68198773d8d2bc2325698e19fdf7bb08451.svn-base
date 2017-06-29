<?php
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
//version 14/01/2016

if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {


    $idActuacionArbol = "";
    $idCarpetaJudicialArbol = "";
    $procedencia = 0;

    if (isset($_POST['idActuacion'])) {
        $idActuacionArbol = @$_POST['idActuacion'];
    }
    if (isset($_POST['idCarpetaJudicial'])) {
        $idCarpetaJudicialArbol = @$_POST['idCarpetaJudicial'];
    }

    if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "")) {
        $procedencia = 1; // viene de arbol
    } else {
        $procedencia = 0; // formulario general
    }

//echo "<br> Actuacion: " . $idActuacionArbol . "<br>"; 
//echo "Carpeta: " . $idCarpetaJudicialArbol . "<br>";
//echo "Procedencia: " . $procedencia . "<br>";
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

    <input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>" >
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="" >
    <input type="hidden" id="hiddenIdActuacionAcuerdo" value="" >
    <input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Reporte de sentenciados en el Estado de M&eacute;xico.
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">
                <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar();" style="display: none">                                    

                <div class="form-group">                                                                
                    <label class="control-label col-xs-3 needed" id="lblRelationName">A&ntilde;o.</label>
                    <div id="divSinRelacion" class="col-xs-9">
                        <input type="text" class="form-inline" id="txtAnio" id="txtAnio" placeholder="A&ntilde;o" value="<?php echo date("Y") ?>">
                        <button type="button" class="btn btn-primary" onclick="sentenciadosEdoMexico();">
                            <span class="glyphicon glyphicon-search" aria-hidden="true"></span> Buscar
                        </button>
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar();">
                    </div>                                
                </div>

                <div id="divRangoFechas" style="display: none">
                    <div class="form-group"> 
                        <label class="control-label col-xs-3">Fecha Inicio:</label>
                        <div class="col-xs-2">
                            <input type="text" id="txtfechaInicial" placeholder="FECHA INICIO" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-xs-3">Fecha Fin:</label>
                        <div class="col-xs-2">
                            <input type="text" id="txtfechaFinal" placeholder="FECHA FIN" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy" />
                        </div>
                    </div>    
                </div>

                <br>
                <br>

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

                <br>

                <div class="form-group">

                    <div class="col-xs-offset-3 col-xs-9">
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputGuardar" value="Guardar" onclick="buscarTipoCarpeta();" style="display: none">                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputBuscar" value="Buscar" onclick="consultarOficios(1);" style="display: none">                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="consultar();" style="display: none">                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputEliminar" value="Eliminar" onclick="eliminarOficios()" style="display: none">                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar">
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" style="display: none" >                                    
                        </div>
                    </div>
                </div>
            </div>

            <div id="divConsulta" style="display: none" class="col-xs-12">
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm1(1);">                                                    
                </div>
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary" value="Imprimir" id="btnExport" onclick="imprimir('divTableResult');">                                                    
                </div>

                <!--            <div class="col-xs-12">
                                <div class="col-xs-3">
                                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1);
                                            $('#cmbPaginacion').val(1)">                                                    
                                </div>
                
                                <div class="form-group col-xs-2" style="padding: 10px">
                                    <label class="control-label" id="totalReg"></label>
                                </div>
                
                                <div id="divPaginador" class="form-group col-xs-2" >
                                    <label class="control-label">Pagina:</label>
                                    <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarOficios();">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <div id="divPaginador" class="form-group col-xs-4" >
                                    <label class="control-label">Registros por p&aacute;gina:</label>
                                    <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarOficios();">
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>-->

                <div id="divTableResult" class="col-xs-12">
                </div>
            </div>
            <div id="divConsultaRegion" style="display: none" class="col-xs-12"> 
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm2(1);">                                                    
                </div>
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary" value="Imprimir" id="btnImprimirRegion" onclick="imprimir('divTableResultRegion');">                                                    
                </div>
                <!--            <div class="col-xs-12">
                                <div class="col-xs-3">
                                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1);
                                            $('#cmbPaginacion').val(1)">                                                    
                                </div>
                
                                <div class="form-group col-xs-2" style="padding: 10px">
                                    <label class="control-label" id="totalReg"></label>
                                </div>
                
                                <div id="divPaginador" class="form-group col-xs-2" >
                                    <label class="control-label">Pagina:</label>
                                    <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarOficios();">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <div id="divPaginador" class="form-group col-xs-4" >
                                    <label class="control-label">Registros por p&aacute;gina:</label>
                                    <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarOficios();">
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>-->

                <div id="divTableResultRegion" class="col-xs-12">
                </div>
            </div>
            <div id="divConsultaDistrito" style="display: none" class="col-xs-12"> 
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm3(1);">                                                    
                </div>
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary" value="Imprimir" id="btnImprimirDistrito" onclick="imprimir('divTableResultDistrito');">                                                    
                </div>
                <!--            <div class="col-xs-12">
                                <div class="col-xs-3">
                                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1);
                                            $('#cmbPaginacion').val(1)">                                                    
                                </div>
                
                                <div class="form-group col-xs-2" style="padding: 10px">
                                    <label class="control-label" id="totalReg"></label>
                                </div>
                
                                <div id="divPaginador" class="form-group col-xs-2" >
                                    <label class="control-label">Pagina:</label>
                                    <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarOficios();">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <div id="divPaginador" class="form-group col-xs-4" >
                                    <label class="control-label">Registros por p&aacute;gina:</label>
                                    <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarOficios();">
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>-->

                <div id="divTableResultDistrito" class="col-xs-12">
                </div>
            </div>
            <div id="divConsultaJuzgado" style="display: none" class="col-xs-12">   
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm4(1);">                                                    
                </div>
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary" value="Imprimir" id="btnImprimirJuzgado" onclick="imprimir('divTableResultJuzgado');">                                                    
                </div>
                <!--            <div class="col-xs-12">
                                <div class="col-xs-3">
                                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1);
                                            $('#cmbPaginacion').val(1)">                                                    
                                </div>
                
                                <div class="form-group col-xs-2" style="padding: 10px">
                                    <label class="control-label" id="totalReg"></label>
                                </div>
                
                                <div id="divPaginador" class="form-group col-xs-2" >
                                    <label class="control-label">Pagina:</label>
                                    <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarOficios();">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <div id="divPaginador" class="form-group col-xs-4" >
                                    <label class="control-label">Registros por p&aacute;gina:</label>
                                    <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarOficios();">
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>-->

                <div id="divTableResultJuzgado" class="col-xs-12">
                </div>
            </div>
            <div id="divConsultaJuzDetalle" style="display: none" class="col-xs-12">  
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm5(1);">                                                    
                </div>
                <div class="col-xs-3">
                    <input type="submit" class="btn btn-primary" value="Imprimir" id="btnImprimirJuzDetalle" onclick="imprimir('divTableResultJuzDetalle');">                                                    
                </div>
                <!--            <div class="col-xs-12">
                                <div class="col-xs-3">
                                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1);
                                            $('#cmbPaginacion').val(1)">                                                    
                                </div>
                
                                <div class="form-group col-xs-2" style="padding: 10px">
                                    <label class="control-label" id="totalReg"></label>
                                </div>
                
                                <div id="divPaginador" class="form-group col-xs-2" >
                                    <label class="control-label">Pagina:</label>
                                    <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultarOficios();">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <div id="divPaginador" class="form-group col-xs-4" >
                                    <label class="control-label">Registros por p&aacute;gina:</label>
                                    <select  name="cmbNumReg" id="cmbNumReg" onchange="consultarOficios();">
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="40">40</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                            </div>-->

                <div id="divTableResultJuzDetalle" class="col-xs-12">
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript">

        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;

        var procedencia = <?php echo $procedencia; ?>;

        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';


        /*  para imprimir contenido de un div*/

        // Create a jquery plugin that prints the given element.
        jQuery.fn.print = function (options) {
            //Default values
            var defaults = {
                title: ""
            };

            //Extend the default parameters and mask with given values if any
            var params = $.extend({}, defaults, options);

            // NOTE: We are trimming the jQuery collection down to the
            // first element in the collection.
            if (this.size() > 1) {
                this.eq(0).print();
                return;
            } else if (!this.size()) {
                return;
            }

            // ASSERT: At this point, we know that the current jQuery
            // collection (as defined by THIS), contains only one
            // printable element.

            // Create a random name for the print frame.
            var strFrameName = ("printer-" + (new Date()).getTime());

            // Create an iFrame with the new name.
            var jFrame = $("<iframe name='" + strFrameName + "'>");

            // Hide the frame (sort of) and attach to the body.
            jFrame
                    .css("width", "1px")
                    .css("height", "1px")
                    .css("position", "absolute")
                    .css("left", "-9999px")
                    .appendTo($("body:first"))
                    ;

            // Get a FRAMES reference to the new frame.
            var objFrame = window.frames[ strFrameName ];

            // Get a reference to the DOM in the new frame.
            var objDoc = objFrame.document;

            // Grab all the style tags and copy to the new
            // document so that we capture look and feel of
            // the current document.

            // Create a temp document DIV to hold the style tags.
            // This is the only way I could find to get the style
            // tags into IE.
            var jStyleDiv = $("<div>").append(
                    $("style").clone()
                    );

            // Write the HTML for the document. In this, we will
            // write out the HTML of the current element.
            objDoc.open();
            objDoc.write("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">");
            objDoc.write("<html>");
            objDoc.write("<head>");
            objDoc.write("<title>");
            objDoc.write(document.title);
            objDoc.write("</title>");
            objDoc.write(jStyleDiv.html());
            objDoc.write("</head>");
            objDoc.write("<body>");
            if (params.title.length > 0) {
                objDoc.write("<div style=\"text-align: center; font-size: 25px; margin-bottom: 15px;\">" + params.title + "</div>");
            }
            objDoc.write(this.html());
            objDoc.write("</body>");
            objDoc.write("</html>");
            objDoc.close();

            // Print the document.
            objFrame.focus();
            objFrame.print();

            // Have the frame remove itself in about a minute so that
            // we don't build up too many of these frames.
            setTimeout(
                    function () {
                        jFrame.remove();
                    },
                    (60 * 1000)
                    );
        };

        /* fin funciones */

        imprimir = function (div) {
            var divContents = $("#" + div).html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>DIV Contents</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        };
        //    $("#btnExport").click(function (e) {
        ////         $('#divTableResult').print();
        ////         return false;
        ////        $("#divTableResult").
        //            var divContents = $("#divTableResult").html();
        //            var printWindow = window.open('', '', 'height=400,width=800');
        //            printWindow.document.write('<html><head><title>DIV Contents</title>');
        //            printWindow.document.write('</head><body >');
        //            printWindow.document.write(divContents);
        //            printWindow.document.write('</body></html>');
        //            printWindow.document.close();
        //            printWindow.print();
        //    });



        getPaginas = function (pag, cantReg) {
            var cveTipoCarpeta = $("#hiddenCveTipoCarpeta").val();

            var strDatos = "accion=getPaginas";
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
            strDatos += "&sintesis=" + $("#Destinatario").val();
            strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
            strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            strDatos += "&numActuacion=" + $("#txtNumOficio").val();
            strDatos += "&cveTipoActuacion=7"; // tipo de actuacion = oficios
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&activo=S";

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
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
                        //                    $('#cmbPaginacion').find('option').remove().end().append('<option value="0"></option>').val('0');
                        $('#cmbPaginacion').find('option').remove().end();

                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                        $("#cmbPaginacion").val(pag);
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


        };

        sentenciadosEdoMexico = function () {

            var pag = 1;//$("#cmbPaginacion").val();
            var cantReg = 10;//$("#cmbNumReg").val();
            var anio = $("#txtAnio").val();



            var strDatos = "accion=sentenciadosEdoMexico";
            strDatos += "&cveEstado=15"; // estado de mexico
            strDatos += "&cvePais=119"; // pais mexico
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&anio=" + anio;        // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";           //actuaciones activas


            if (anio != "") {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/imputadossentencias/ImputadossentenciasFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        //                ToggleLoading(1);
                    },
                    success: function (datos) {
                        //                                            alert(datos);
                        var json = "";
                        var table = "";
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.Estatus == "ok") {

                            table += "<center>";
                            table += "<a>Sentenciados en el Estado de Mexico en " + anio + "</a>";
                            table += "</center>"
                            table += "</br>"

                            table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>N&uacute;m.</th>";
                            table += "<th>Total</th>";
                            table += "<th>Estado</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            var i = 0;

                            $.each(json.resultados, function (k, datos) {
                                table += "<tr onclick='sentenciadosEdoMexicoDetalle2();' >";
                                table += "<td >" + (i + 1) + "</td>";
                                table += "<td >" + datos.totalSentenciados + "</td>";
                                table += "<td > M&Eacute;XICO </td>";
                                table += "</tr> ";
                            });

                            table += "</tbody>";
                            table += "</table>";

                            $("#divConsulta").show();
                            $("#divTableResult").html(table);
                            $("#tblResultadosGrid").DataTable({
                                paging: false,
                                searching: false,
                                dom: 'T<"clear">lfrtip',
                                tableTools: {
                                    aButtons: [
                                        "copy",
                                        "print",
                                        {
                                            sExtends: "collection",
                                            sButtonText: "Save",
                                            aButtons: ["csv", "xls", "pdf"]
                                        }
                                    ]
                                }

                            });

                            //                    getPaginas(json.pagina, cantReg);
                            //                    //alert(json.pagina);
                            //                    changeDivForm(2);
                            //
                            //                    $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Registro de Oficios</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta de Oficios</span> / Resultados");
                            //
                        } else {
                            $("#divAlertInfo").html('' + json.text);
                            $("#divAlertInfo").show("slide");
                            setTimeAlert("divAlertInfo");
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
                $("#divAlertDager").html("Introduce a&nacute;o");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }

        };

        changeDivForm1 = function (opc) {
            if (opc === 1) {
                $("#divConsulta").hide("fade");
            } else if (opc === 2) {
                $("#divConsultaRegion").show("slide");
                $("#divConsulta").hide("fade");
            }
        };



        sentenciadosEdoMexicoDetalle2 = function () {
            changeDivForm1(2);


            var pag = 1;//$("#cmbPaginacion").val();
            var cantReg = 10;//$("#cmbNumReg").val();
            var anio = $("#txtAnio").val();



            var strDatos = "accion=sentenciadosEdoMexicoDetalle2";
            strDatos += "&cveEstado=15"; // estado de mexico
            strDatos += "&cvePais=119"; // pais mexico
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&anio=" + anio;        // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";           //actuaciones activas


            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadossentencias/ImputadossentenciasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //                                            alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.Estatus == "ok") {

                        table += "<center>";
                        table += "<a>Sentenciados en el Estado de Mexico en " + anio + " por regi&oacute;n</a>";
                        table += "</center>"
                        table += "</br>"

                        table += "<table id='tblResultadosGridRegion' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Total</th>";
                        table += "<th>Estado</th>";
                        table += "<th>Region</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var i = 0;

                        $.each(json.resultados, function (k, datos) {
                            table += "<tr onclick='sentenciadosEdoMexicoDetalle3(" + datos.cveRegion + ");' >";
                            table += "<td >" + (i + 1) + "</td>";
                            table += "<td >" + datos.totalSentenciados + "</td>";
                            table += "<td > M&Eacute;XICO </td>";
                            table += "<td > " + datos.desRegion + " </td>";
                            table += "</tr> ";
                        });

                        $("#divConsultaRegion").show();
                        $("#divTableResultRegion").html(table);
                        $("#tblResultadosGridRegion").DataTable({
                            paging: false,
                            searching: false,
                            dom: 'T<"clear">lfrtip',
                            tableTools: {
                                aButtons: [
                                    "copy",
                                    "print",
                                    {
                                        sExtends: "collection",
                                        sButtonText: "Save",
                                        aButtons: ["csv", "xls", "pdf"]
                                    }
                                ]
                            }
                        });

                        //                    getPaginas(json.pagina, cantReg);
                        //                    //alert(json.pagina);
                        //                    changeDivForm(2);
                        //
                        //                    $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Registro de Oficios</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta de Oficios</span> / Resultados");
                        //
                    } else {
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };

        changeDivForm2 = function (opc) {
            if (opc === 1) {
                $("#divConsulta").show("fade");
                $("#divConsultaRegion").hide("fade");
            } else if (opc === 2) {
                $("#divConsultaDistrito").show("slide");
                $("#divConsultaRegion").hide("fade");
            }
        };

        sentenciadosEdoMexicoDetalle3 = function (cveRegion) {
            changeDivForm2(2);


            var pag = 1;//$("#cmbPaginacion").val();
            var cantReg = 10;//$("#cmbNumReg").val();
            var anio = $("#txtAnio").val();



            var strDatos = "accion=sentenciadosEdoMexicoDetalle3";
            strDatos += "&cveEstado=15"; // estado de mexico
            strDatos += "&cvePais=119"; // pais mexico
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&anio=" + anio;
            strDatos += "&cveRegion=" + cveRegion;
            strDatos += "&activo=S";           //actuaciones activas


            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadossentencias/ImputadossentenciasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //                                            alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.Estatus == "ok") {

                        table += "<center>";
                        table += "<a>Sentenciados en el Estado de Mexico en " + anio + " por Distrito</a>";
                        table += "</center>"
                        table += "</br>"

                        table += "<table id='tblResultadosGridDistrito' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Total</th>";
                        table += "<th>Estado</th>";
                        table += "<th>Region</th>";
                        table += "<th>Distrito</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var i = 0;

                        $.each(json.resultados, function (k, datos) {
                            table += "<tr onclick='sentenciadosEdoMexicoDetalle4(" + datos.cveRegion + "," + datos.cveDistrito + " );' >";
                            table += "<td >" + (i + 1) + "</td>";
                            table += "<td >" + datos.totalSentenciados + "</td>";
                            table += "<td > M&Eacute;XICO </td>";
                            table += "<td > " + datos.desRegion + " </td>";
                            table += "<td > " + datos.desDistrito + " </td>";
                            table += "</tr> ";
                        });

                        $("#divConsultaDistrito").show();
                        $("#divTableResultDistrito").html(table);
                        $("#tblResultadosGridDistrito").DataTable({
                            paging: false,
                            searching: false,
                            dom: 'T<"clear">lfrtip',
                            tableTools: {
                                aButtons: [
                                    "copy",
                                    "print",
                                    {
                                        sExtends: "collection",
                                        sButtonText: "Save",
                                        aButtons: ["csv", "xls", "pdf"]
                                    }
                                ]
                            }
                        });

                        //                    getPaginas(json.pagina, cantReg);
                        //                    //alert(json.pagina);
                        //                    changeDivForm(2);
                        //
                        //                    $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Registro de Oficios</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta de Oficios</span> / Resultados");
                        //
                    } else {
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };

        changeDivForm3 = function (opc) {
            if (opc === 1) {
                $("#divConsultaRegion").show("fade");
                $("#divConsultaDistrito").hide("fade");
            } else if (opc === 2) {
                $("#divConsultaMunicipio").show("slide");
                $("#divConsultaDistrito").hide("fade");
            }
        };

        sentenciadosEdoMexicoDetalle4 = function (cveRegion, cveDistrito) {
            changeDivForm3(2);


            var pag = 1;//$("#cmbPaginacion").val();
            var cantReg = 10;//$("#cmbNumReg").val();
            var anio = $("#txtAnio").val();



            var strDatos = "accion=sentenciadosEdoMexicoDetalle4";
            strDatos += "&cveEstado=15"; // estado de mexico
            strDatos += "&cvePais=119"; // pais mexico
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&cveRegion=" + cveRegion;
            strDatos += "&cveDistrito=" + cveDistrito;
            strDatos += "&anio=" + anio;
            strDatos += "&activo=S";           //actuaciones activas


            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadossentencias/ImputadossentenciasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //                                            alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.Estatus == "ok") {

                        table += "<center>";
                        table += "<a>Sentenciados en el Estado de Mexico en " + anio + " por Juzgado</a>";
                        table += "</center>"
                        table += "</br>"

                        table += "<table id='tblResultadosGridJuzgado' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Total</th>";
                        table += "<th>Region</th>";
                        table += "<th>Distrito</th>";
                        table += "<th>Juzgado</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var i = 0;

                        $.each(json.resultados, function (k, datos) {
                            table += "<tr onclick='sentenciadosEdoMexicoDetalle5(" + datos.cveRegion + "," + datos.cveDistrito + "," + datos.cveJuzgado + ");' >";
                            table += "<td >" + (i + 1) + "</td>";
                            table += "<td >" + datos.totalSentenciados + "</td>";
                            table += "<td > " + datos.desRegion + " </td>";
                            table += "<td > " + datos.desDistrito + " </td>";
                            table += "<td > " + datos.desJuzgado + " </td>";
                            table += "</tr> ";
                        });

                        $("#divConsultaJuzgado").show();
                        $("#divTableResultJuzgado").html(table);
                        $("#tblResultadosGridJuzgado").DataTable({
                            paging: false,
                            searching: false,
                            dom: 'T<"clear">lfrtip',
                            tableTools: {
                                aButtons: [
                                    "copy",
                                    "print",
                                    {
                                        sExtends: "collection",
                                        sButtonText: "Save",
                                        aButtons: ["csv", "xls", "pdf"]
                                    }
                                ]
                            }
                        });

                        //                    getPaginas(json.pagina, cantReg);
                        //                    //alert(json.pagina);
                        //                    changeDivForm(2);
                        //
                        //                    $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Registro de Oficios</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta de Oficios</span> / Resultados");
                        //
                    } else {
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };

        changeDivForm4 = function (opc) {
            if (opc === 1) {
                $("#divConsultaDistrito").show("fade");
                $("#divConsultaJuzgado").hide("fade");
            } else if (opc === 2) {
                $("#divConsultaNombres").show("slide");
                $("#divConsultaNombre").hide("fade");
            }
        };

        sentenciadosEdoMexicoDetalle5 = function (cveRegion, cveDistrito, cveJuzgado) {
            changeDivForm5(2);


            var pag = 1;//$("#cmbPaginacion").val();
            var cantReg = 10;//$("#cmbNumReg").val();
            var anio = $("#txtAnio").val();



            var strDatos = "accion=sentenciadosEdoMexicoDetalle5";
            strDatos += "&cveEstado=15"; // estado de mexico
            strDatos += "&cvePais=119"; // pais mexico
            strDatos += "&pag=" + pag;
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&cveRegion=" + cveRegion;
            strDatos += "&cveDistrito=" + cveDistrito;
            strDatos += "&cveJuzgado=" + cveJuzgado;
            strDatos += "&anio=" + anio;
            strDatos += "&activo=S";           //actuaciones activas


            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/imputadossentencias/ImputadossentenciasFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    //                ToggleLoading(1);
                },
                success: function (datos) {
                    //                                            alert(datos);
                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.Estatus == "ok") {

                        table += "<center>";
                        table += "<a>Sentenciados en el Estado de Mexico en " + anio + " por Juzgado - detalle</a>";
                        table += "</center>"
                        table += "</br>"

                        table += "<table id='tblResultadosGridJuzDetalle' class='table table-hover table-striped table-bordered'>";
                        table += "<thead>";
                        table += "<tr>";
                        table += "<th>N&uacute;m.</th>";
                        table += "<th>Total</th>";
                        table += "<th>Juzgado</th>";
                        table += "<th>Tipo</th>";
                        table += "<th>Imputado</th>";
                        table += "<th>Ofendido</th>";
                        table += "</tr>";
                        table += "</thead>";
                        table += "<tbody>";
                        var i = 0;

                        $.each(json.resultados, function (k, datos) {
                            table += "<tr  >"; // sin evento
                            table += "<td >" + (i + 1) + "</td>";
                            table += "<td >" + datos.totalSentenciados + "</td>";
                            table += "<td > " + datos.desJuzgado + " </td>";
                            table += "<td > " + datos.desTipoCarpeta + " - " + datos.numero + "/" + datos.anio + " </td>";
                            table += "<td > " + datos.imputado + " </td>";
                            table += "<td > " + datos.ofendido + " </td>";
                            table += "</tr> ";
                        });

                        $("#divConsultaJuzDetalle").show();
                        $("#divTableResultJuzDetalle").html(table);
                        $("#tblResultadosGridJuzDetalle").DataTable({
                            paging: false,
                            searching: false,
                            dom: 'T<"clear">lfrtip',
                            tableTools: {
                                aButtons: [
                                    "copy",
                                    "print",
                                    {
                                        sExtends: "collection",
                                        sButtonText: "Save",
                                        aButtons: ["csv", "xls", "pdf"]
                                    }
                                ]
                            }
                        });

                        //                    getPaginas(json.pagina, cantReg);
                        //                    //alert(json.pagina);
                        //                    changeDivForm(2);
                        //
                        //                    $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Registro de Oficios</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta de Oficios</span> / Resultados");
                        //
                    } else {
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }


                },
                error: function (objeto, quepaso, otroobj) {
                    //                alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        changeDivForm5 = function (opc) {
            if (opc === 1) {
                $("#divConsultaJuzgado").show("fade");
                $("#divConsultaJuzDetalle").hide("fade");
            } else if (opc === 2) {
                $("#divConsultaJuzDetalle").show("slide");
                $("#divConsultaJuzgado").hide("fade");
            }
        };

        limpiar = function () {
            $("#txtAnio").val("");

            $("#divConsulta").hide();
            $("#divConsultaRegion").hide();
            $("#divConsultaDistrito").hide();
            $("#divConsultaJuzgado").hide();
            $("#divConsultaJuzDetalle").hide();

            $("#tblResultadosGrid").html("");
            $("#tblResultadosGridRegion").html("");
            $("#tblResultadosGridDistrito").html("");
            $("#tblResultadosGridJuzgado").html("");
            $("#tblResultadosGridJuzDetalle").html("");


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
                                            if (nombreHijo.nomFormulario == 'OFICIOS') {
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


                    });
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
            //        $('#txtAnio').inputmask({
            //            mask: '9999'
            //        });

            $("#txtfechaInicial").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            $("#txtfechaFinal").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );


            obtenerPermisos();
            $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate', function (e) {
                $(this).datepicker('hide');
            });

            // editor de texto

        });
    </script> 
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>