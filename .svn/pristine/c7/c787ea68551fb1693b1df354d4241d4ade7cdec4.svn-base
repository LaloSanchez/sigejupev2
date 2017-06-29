<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    //var_dump($_SESSION);
    date_default_timezone_set('America/Mexico_City');
    $anioActual = date("Y");
    $fechaActual = date("d/m/Y");
    $url = dirname(__FILE__) . "/../../img/";
    //echo $url;
    ?>
    <style>
        .alert{
            display: none;
        }
        .required{
            color: red;
        }
        .needed:after {
            color:darkred;
            content: " (*)";
        }
    </style>
    <div class = "panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Creaci&oacute;n avisos
            </h5>
        </div>
        <div class="panel-body">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Editar aviso</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <input type="hidden" value="" id="hddIdAvisos">
                                <label class="control-label col-md-3 needed">Tipo aviso :</label>
                                <div class="col-md-9">
                                    <select class="form-control frm-avisos-campos" name="cmbAviso" id="cmbTipoAviso" onchange="">
                                        <option value="TI">Texto / Imagen</option>
                                        <option value="I">Imagen</option>
                                        <option value="T">Texto</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 needed">Grupo:</label>
                                <div class="col-md-9">
                                    <select class="form-control frm-avisos-campos" name="cmbGrupos" id="cmbGrupos" onchange="">
                                        <option selected="">Seleccione una opcion</option>
                                    </select>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="form-group texto-imagen texto-solo">
                                        <label class="control-label col-md-3 needed">Titulo:</label>
                                        <div class="col-md-9">
                                            <input id="inputTituloAviso" type="text" class="form-control frm-avisos-campos" placeholder="Titulo del aviso">
                                        </div>
                                    </div>
                                    <div class="form-group texto-imagen texto-solo">
                                        <label class="control-label col-md-3 needed">Subtitulo:</label>
                                        <div class="col-md-9">
                                            <input id="inputSubtituloAviso" type="text" class="form-control frm-avisos-campos" placeholder="Subtitulo del aviso">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="form-group" id="divInformacion">
                                        <label class="control-label col-md-3 needed">Informaci&oacute;n:</label>
                                        <div class="col-md-9">
                                            <textarea maxlength="379" id="textoInformacionAviso" class="form-control frm-avisos-campos" placeholder="Informaci&oacute;n del aviso ..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group texo-imagen" id="divInformacionEnlace">
                                        <label class="control-label col-md-3 needed">Enlace informaci&oacute;n:</label>
                                        <div class="col-md-9">
                                            <input class="frm-avisos-campos" name="rdInformacion" type="radio" value="1"> <label>URL</label>
                                            <input class="frm-avisos-campos" name="rdInformacion" type="radio" value="2"> <label>Archivo</label>
                                        </div>
                                    </div>
                                    <div style="display: none;" class="form-group texto-imagen" id="divURLInformacion">
                                        <label class="control-label col-md-3 needed">URL enlace:</label>
                                        <div class="col-md-9">
                                            <input id="urlEnlaceInformacion" class="form-control frm-avisos-campos" type="url" placeholder="http://...">
                                        </div>
                                    </div>
                                    <div style="display: none;" class="form-group texto-imagen" id="divArchivoInformacion">
                                        <label class="control-label col-md-3 needed">Archivo enlace:</label>
                                        <div class="col-md-9">
                                            <input class="frm-avisos-campos" id="enlaceInformacion" type="file" accept=".pdf, .png, .jpeg, .jpg, .bmp, .gif, .tif, .html">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="form-group texto-imagen" id="divImagen">
                                        <label class="control-label col-md-3 needed">Imagen :</label>
                                        <div class="col-md-9">
                                            <input class="frm-avisos-campos" type="file" id="ImagenAviso" onchange="readURL(this)" accept=".png, .jpeg, .jpg, .bmp, .gif, .tif">
                                        </div>
                                    </div>
                                    <div class="form-group texto-imagen" id="divImagenEnlace">
                                        <label class="control-label col-md-3 needed">Enlace imagen:</label>
                                        <div class="col-md-9">
                                            <input class="frm-avisos-campos" name="rdImagen" type="radio" value="1"> <label>URL</label>
                                            <input class="frm-avisos-campos" name="rdImagen" type="radio" value="2"> <label>Archivo</label>
                                        </div>
                                    </div>
                                    <div style="display: none;" class="form-group texto-imagen" id="divImagenEnlaceURL">
                                        <label class="control-label col-md-3 needed">URL:</label>
                                        <div class="col-md-9">
                                            <input id="urlEnlaceImagen" class="form-control frm-avisos-campos" type="url" placeholder="URL del enlace del aviso">
                                        </div>
                                    </div>
                                    <div style="display: none;" class="form-group texto-imagen" id="divImagenEnlaceArchivo">
                                        <label class="control-label col-md-3 needed">Enlace archivo imagen:</label>
                                        <div class="col-md-9">
                                            <input class="frm-avisos-campos" type="file" id="enlaceArchivoImagen" accept=".pdf, .png, .jpeg, .jpg, .bmp, .gif, .tif, .html">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group texto-imagen texto-solo imagen-solo" id="divOrden">
                                <label class="control-label col-md-3 needed">Orden :</label>
                                <div class="col-md-9">
                                    <div class="btn-group">
                                        <button id="btnPosIzq" type="button" class="btn btn-primary">Izquierda</button>
                                        <button id="btnPosCer" type="button" class="btn btn-primary">Centro</button>
                                        <button id="btnPosDer" type="button" class="btn btn-primary">Derecha</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group texto-imagen texto-solo imagen-solo" id="divFechaInicio">
                                <label class="control-label col-md-3 needed">Fecha inicio :</label>
                                <div class="col-md-9">
                                    <input id="txtFechaInicio" class="form-control" type="text" >
                                </div>
                            </div>
                            <div class="form-group texto-imagen texto-solo imagen-solo" id="divFechaFinal">
                                <label class="control-label col-md-3 needed">Fecha fin :</label>
                                <div class="col-md-9">
                                    <input id="txtFechaFinal" class="form-control" type="text" >
                                </div>
                            </div>
                            <div class="form-group texto-imagen texto-solo imagen-solo" id="divActivo" style="display: none;">
                                <label class="control-label col-md-3 needed">Activo :</label>
                                <div class="col-md-9">
                                    <select class="form-control " name="cmbActivos" id="cmbActivo" onchange="">
                                        <option>Seleccione una opcion</option>
                                        <option selected="" value="S">SI</option>
                                        <option value="N">NO</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Previsualizaci&oacute;n</h3>
                    </div>
                    <div class="panel-body">
                        <!--<div class="container">-->
                        <div class="col-sm-12 col-md-12" style="overflow: auto;">

                            <div class="" style="width: 593px; height: 330px;  align-content: center; border: 1px solid #cecece;">
                                <img class="col-lg-6" id="imagenAviso" data-holder-rendered="true" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTkyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDE5MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUzYzMyMzAyZTggdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTNjMzIzMDJlOCI+PHJlY3Qgd2lkdGg9IjE5MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2OS41IiB5PSIxMDQuOCI+MTkyeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" style="height: 130px; width: 100%; display: block;">
                                <div class="caption col-lg-12" id="divTextoInformativo">
                                    <h3><strong><span id="spanTituloAviso">Titulo</span></strong></h3>
                                    <h6><span id="spanSubtituloAviso">Subtitulo</span></h6>
                                    <p>
                                        <span id="spanTextoInformacion">
                                            Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <p style="text-align: center;">
                            <input type="submit" class="btn btn-primary" id="inputGuardar" value="Guardar">                                    
                            <input type="submit" class="btn btn-primary" id="inputBuscar" value="Buscar" onclick="buscarAvisos()">                                    
                            <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar()">
                            <input type="submit" class="btn btn-primary" id="inputEliminar" value="Eliminar" onclick="eliminarAviso()">
                        </p>
                    </div>
                </div>
                <div class="form-group" class=""> 
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
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="panelConsultas">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h5>Consultas</h5>    
                    </div>
                    <div class="panel-body">
                        <div id="divConsulta" style="" class="col-md-12">
    <!--                        <div class="col-md-12">
                                <div class="col-md-2">
                                    <input style="bottom: 2px" type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(2);
                                            $('#cmbPaginacion').val(1)">
                                </div>
                                <div class="form-group col-md-2" style="padding: 10px">
                                    <label class="control-label" id="totalReg"></label>
                                </div>

                                <div id="divPaginador" class="form-group col-md-2" >
                                    <label class="control-label">Pagina:</label>
                                    <select  name="cmbPaginacion" id="cmbPaginacion" onchange="buscarComparecencias();">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <div id="divPaginador" class="form-group col-md-4" >
                                    <label class="control-label">Registros por p&aacute;gina:</label>
                                    <select  name="cmbNumReg" id="cmbNumReg" onchange="buscarComparecencias(1);">
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

                            <div id="divTableResult" class="col-md-12" style="overflow: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var fileImageAviso;
            var orden = 2;
            var filesArchivoEnlaceImagen = null;
            var filesImagenAviso = null;
            var filesArchivoEnlaceInformacion = null;
            $(document).ready(function () {
                
                $("#panelConsultas").hide();
                $("#inputEliminar").hide();
                fechaBaseDatos({
                        txtFechaInicio: "fecha",
                        txtFechaFinal: "fecha"
                    }
                );
                
                $(".frm-avisos-campos").change(function (){
                    $(".required").remove();
                });
                $("#cmbTipoAviso").change(function () {
    //                alert("Change");
                    if ($("#cmbTipoAviso").val() == "TI") {
    //                    alert("TI");
                        $("#divOrden").show("slow");
                        $("#imagenAviso").show("slow");
                        $("#divTextoInformativo").show("slow");
                        $("#imagenAviso").height("130px");
                        $("#divImagen").show("slow");
                        $("#divInformacionEnlace").show("slow");
                        $("#divInformacion").show("slow");
                        $("input:radio[name=rdInformacion]").change();
                        $("input:radio[name=rdImagen]").change();
                        $("#divImagenEnlace").show("slow");
                    } else if ($("#cmbTipoAviso").val() == "T") {
                        orden = 4;
    //                    alert("T");
                        $("#divArchivoInformacion").hide("slow");
                        $("#divImagenEnlaceURL").hide("slow");
                        $("#divArchivoInformacion").show("slow");
                        $("#divImagenEnlaceArchivo").hide("slow");
                        $("#divImagen").hide("slow");
                        $("#divImagenEnlace").hide("slow");

                        $("#divInformacion").show("slow");
                        $("#divInformacionEnlace").show("slow");
                        $("#imagenAviso").hide("slow");
                        $("#divTextoInformativo").show("slow");

                        $("#divOrden").hide("slow");

                        $("#divTextoInformativo").removeClass("col-lg-8");
                        $("#divTextoInformativo").addClass("col-lg-12");
                        $("input:radio[name=rdInformacion]").change();
                    } else if ($("#cmbTipoAviso").val() == "I") {
                        orden = 5;
    //                    alert("I");
                        $("#divURLInformacion").hide("slow");
                        $("#divArchivoInformacion").hide("slow");
                        $("#divInformacion").hide("slow");
                        $("#divInformacionEnlace").hide("slow");

                        $("#divImagen").show("slow");
                        $("#divImagenEnlace").show("slow");

                        $("#divArchivo").hide("slow");
                        $("#imagenAviso").show("slow");
                        $("#divTextoInformativo").hide("slow");

                        $("#divOrden").hide("slow");

                        $("#imagenAviso").css("float", "none");
                        $("#imagenAviso").width("70%");
                        $("#imagenAviso").height("100%");
                        $("input:radio[name=rdImagen]").change();
                    }
                });
                $("input:radio[name=rdInformacion]").change(function () {
    //                alert("CAMBIO");
    //                alert($('input[name=rdInformacion]:checked').val());
                    if ($('input[name=rdInformacion]:checked').val() == 1) { // es URL
                        $("#divURLInformacion").show("slow");
                        $("#divArchivoInformacion").hide("slow");
                    } else if ($('input[name=rdInformacion]:checked').val() == 2) { // es archivo
                        $("#divURLInformacion").hide("slow");
                        $("#divArchivoInformacion").show("slow");
                    } else if ($('input[name=rdInformacion]:checked').val() == undefined) { // es archivo
                        $("#divURLInformacion").hide("slow");
                        $("#divArchivoInformacion").hide("slow");
                    }
                });
                $("input:radio[name=rdImagen]").change(function () {
    //                alert("CAMBIO");
    //                alert($('input[name=rdImagen]:checked').val());
                    if ($('input[name=rdImagen]:checked').val() == 1) { // es URL
                        $("#divImagenEnlaceURL").show("slow");
                        $("#divImagenEnlaceArchivo").hide("slow");
                    } else if ($('input[name=rdImagen]:checked').val() == 2) { // es archivo
                        $("#divImagenEnlaceURL").hide("slow");
                        $("#divImagenEnlaceArchivo").show("slow");
                    }
                });
                $("#inputTituloAviso").keyup(function () {
                    var value = $(this).val();
                    $("#spanTituloAviso").text(value);
                }).keyup();
                $("#inputSubtituloAviso").keyup(function () {
                    var value = $(this).val();
                    $("#spanSubtituloAviso").text(value);
                }).keyup();
                $("#textoInformacionAviso").keyup(function () {
                    var value = $(this).val();
                    $("#spanTextoInformacion").text(value);
                }).keyup();

    //            var input_file = $("#ImagenAviso");
    //            input_file.on("change", function () {
    //                var files = input_file.prop("files");
    //                console.log(files);
    //                var names = $.map(files, function (val) {
    //                    console.log(files);
    //                    return val.name;
    //                });
    //                $.each(names, function (i, name) {
    //                    console.log(i);
    //                    console.log(name);
    //                });
    //            });
                $("#btnPosIzq").click(function () {
                    orden = 1;
    //                alert("centro");
                    $("#imagenAviso").width("auto");
                    $("#imagenAviso").css("float", " left");
                    $("#divTextoInformativo").removeClass("col-lg-12");
                    $("#divTextoInformativo").addClass("col-lg-6");
                });
                $("#btnPosCer").click(function () {
                    orden = 2;
    //                alert("centro");
                    $("#imagenAviso").width("70%");
    //                $("#divTextoInformativo").toggleClass("col-lg-6 col-lg-12")
                    $("#divTextoInformativo").removeClass("col-lg-6");
                    $("#divTextoInformativo").addClass("col-lg-12");
                });
                $("#btnPosDer").click(function () {
                    orden = 3;
    //                alert("dercha");
                    $("#imagenAviso").width("auto");
                    $("#imagenAviso").css("float", " right");
                    $("#divTextoInformativo").removeClass("col-lg-12");
                    $("#divTextoInformativo").addClass("col-lg-6");
                });
                $("#txtFechaInicio, #txtFechaFinal").datetimepicker({
                    sideBySide: false,
                    locale: 'es',
                    format: "DD/MM/YYYY",
                });
                $("#txtFechaInicio").on("dp.change", function (e) {
                    $('#txtFechaFinal').data("DateTimePicker").minDate(e.date);
                });
                $("#txtFechaFinal").on("dp.change", function (e) {
                    $('#txtFechaInicio').data("DateTimePicker").maxDate(e.date);
                });
                $("#enlaceArchivoImagen").on('change', prepareUploadEnlaceArchivoImagen);
                $("#enlaceInformacion").on('change', prepareUploadArchivoEnlaceInformacion);
                $("#ImagenAviso").on('change', prepareUploadImagenAviso);
                $("#inputGuardar").on('click', uploadFiles);
            });
            mostrarTextoImagen = function () {

            };
            function prepareUploadArchivoEnlaceInformacion(event) {
                filesArchivoEnlaceInformacion = event.target.files;
            }
            function prepareUploadImagenAviso(event) {
                filesImagenAviso = event.target.files;
            }
            function prepareUploadEnlaceArchivoImagen(event) {
                filesArchivoEnlaceImagen = event.target.files;
            }
            guardarAvisoNuevo = function () {
                if ($("#hddIdAvisos").val() != "") {
    //                alert("Tiene ID");
    //                alert($("#hddIdAvisos").val());
                } else {
    //                alert("Tiene ID");
    //                alert("GUARDAR AVISO");
    //                alert($("#hddIdAvisos").val());
                    var fileInput = document.getElementById('ImagenAviso');
                    var file = fileInput.files[0];
                    var formData = new FormData();
                    formData.append('file', file);
                    console.log(file);

                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/avisos/AvisosFacade.Class.php",
                        data: {
                            accion: "accion",
                            file: file
                        },
                        async: true,
                        dataType: "json",
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                            alert("hola");
                        },
                        error: function (objeto, quepaso, otroobj) {
                            alert("error")
                        }
                    });
                }
            };
            function readURL(input) {
                avisoUrl = input;
                console.log(input.files[0]);
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $('#imagenAviso')
                                .attr('src', e.target.result)
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
            function isDefined(variable) {
                return eval('(typeof(' + variable + ') != "undefined");');
            }
            function verificarRequeridos(){
                
            }
            function uploadFiles(event) {
                $(".required").remove();
                var guardar = 1;
                if ($("#hddIdAvisos").val() != "") {
    //                alert("Tiene ID");
    //                alert($("#hddIdAvisos").val());
                    var idAvisoModificar = $("#hddIdAvisos").val();
                    var titulo;
                    var subtitulo;
                    var texto;
                    var fechaInicio;
                    var fechaFin;
                    var ordenNuevo;
                    var gruposAviso;
                    if (orden == 1 || orden == 2 || orden == 3 || orden == 4 || orden == 5) { // izquierda
                        titulo = $("#inputTituloAviso").val();
                        if(titulo == ""){
                            guardar = 0;
                            $("#inputTituloAviso").focus();
                            $("#inputTituloAviso").parent().append("<br class='required'><label class='Arial13Rojo required'>Titulo no puede quedar vacio</label>");
                        }
                        subtitulo = $("#inputSubtituloAviso").val();
                        if(subtitulo == ""){
                            guardar = 0;
                            $("#inputSubtituloAviso").focus();
                            $("#inputSubtituloAviso").parent().append("<br class='required'><label class='Arial13Rojo required'>Subtitulo no puede quedar vacio</label>");                       
                        }
                        if(orden != 5){
                            texto = $("#textoInformacionAviso").val();
                            if(texto == ""){
                                guardar = 0;
                                $("#textoInformacionAviso").focus();
                                $("#textoInformacionAviso").parent().append("<br class='required'><label class='Arial13Rojo required'>El contenido no puede quedar vacio</label>");                       
                            }
                        }
                        fechaInicio = $("#txtFechaInicio").val();
                        if(fechaInicio == ""){
                            guardar = 0;
                            $("#txtFechaInicio").focus();
                            $("#txtFechaInicio").parent().append("<br class='required'><label class='Arial13Rojo required'>Selecciona una fecha</label>");                       
                        }
                        fechaFin = $("#txtFechaFinal").val();
                        if(fechaFin == ""){
                            guardar = 0;
                            $("#txtFechaFinal").focus();
                            $("#txtFechaFinal").parent().append("<br class='required'><label class='Arial13Rojo required'>Selecciona una fecha</label>");                       
                        }
                        gruposAviso = $("#cmbGrupos").val();
                        if(gruposAviso == ""){
                            guardar = 0;
                            $("#cmbGrupos").focus();
                            $("#cmbGrupos").parent().append("<br class='required'><label class='Arial13Rojo required'>Selecciona un grupo</label>");
                        }
                        ordenNuevo = orden;
                    } else if (orden == 2) { // centro
    //                    titulo = $("#inputTituloAviso").val();
    //                    subtitulo = $("#inputSubtituloAviso").val();
    //                    texto = $("#textoInformacionAviso").val();
    //                    fechaInicio = $("#txtFechaInicio").val();
    //                    fechaFin = $("#txtFechaFinal").val();
    //                    ordenNuevo = orden;
                    } else if (orden == 3) { // derecha
    //                    titulo = $("#inputTituloAviso").val();
    //                    subtitulo = $("#inputSubtituloAviso").val();
    //                    texto = $("#textoInformacionAviso").val();
    //                    fechaInicio = $("#txtFechaInicio").val();
    //                    fechaFin = $("#txtFechaFinal").val();
    //                    ordenNuevo = orden;
                    } else if (orden == 4) { // texto
    //                    titulo = $("#inputTituloAviso").val();
    //                    subtitulo = $("#inputSubtituloAviso").val();
    //                    texto = $("#textoInformacionAviso").val();
    //                    fechaInicio = $("#txtFechaInicio").val();
    //                    fechaFin = $("#txtFechaFinal").val();
    //                    ordenNuevo = orden;
                    } else if (orden == 5) { // imagen
    //                    titulo = $("#inputTituloAviso").val();
    //                    subtitulo = $("#inputSubtituloAviso").val();
    //                    fechaInicio = $("#txtFechaInicio").val();
    //                    fechaFin = $("#txtFechaFinal").val();
    //                    ordenNuevo = orden;
                    }
                    if(guardar){
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/avisos/AvisosFacade.Class.php",
                        async: false,
                        dateType: "json",
                        data: {
                            accion: "modificarAviso",
                            tituloAviso: titulo,
                            subtituloAviso: subtitulo,
                            textAviso: texto,
                            fecInicio: fechaInicio,
                            fecTermino: fechaFin,
                            orden: ordenNuevo,
                                idAviso: idAvisoModificar, 
                                cveGrupo: gruposAviso
                        },
                        success: function (datos) {
                            $("#divAlertSucces").html("Actualizado!: correctamente");
                            $("#divAlertSucces").show("slide");
                            setTimeAlert("divAlertSucces");
                        },
                        error: function (objeto, quepaso, otroobj) {
                            
                        }
                    });
                    }
                } else {
    //                alert("Tiene ID");
    //                alert($("#cmbTipoAviso").val());
                    console.log("uploadFiles");
                    var guardarOK = true;
                    event.stopPropagation();
                    event.preventDefault();
    //                alert(filesImagenAviso[0].type);
                    if (filesImagenAviso != null) {
                        if (filesImagenAviso[0] != undefined) {
                            if (filesImagenAviso[0].type == "image/jpeg"
                            || filesImagenAviso[0].type == "image/jpg"
                                    || filesImagenAviso[0].type == "image/png"
                                    || filesImagenAviso[0].type == "image/bmp"
                                    || filesImagenAviso[0].type == "image/gif"
                                    || filesImagenAviso[0].type == "image/tif"
                                    ) {
    //                            alert("FOMATO VALIDO filesImagenAviso");
                            } else {
                                $("#ImagenAviso").focus();
                                $("#ImagenAviso").parent().append("<br class='required'><label class='Arial13Rojo required'>Formato de archivo invalido</label>");
                                guardarOK = false;
                            }
                        }
                    }
    //                alert((filesArchivoEnlaceImagen));
    //                alert((filesArchivoEnlaceInformacion));
    //                alert(filesArchivoEnlaceImagen[0].type);
                    if (filesArchivoEnlaceImagen != null) {
                        if (filesArchivoEnlaceImagen[0].type == "image/jpeg"
                        || filesArchivoEnlaceImagen[0].type == "image/jpg"
                                || filesArchivoEnlaceImagen[0].type == "image/png"
                                || filesArchivoEnlaceImagen[0].type == "image/bmp"
                                || filesArchivoEnlaceImagen[0].type == "image/gif"
                                || filesArchivoEnlaceImagen[0].type == "image/tif"
                                || filesArchivoEnlaceImagen[0].type == "application/pdf"
                                || filesArchivoEnlaceImagen[0].type == "text/html"
                                ) {
    //                        alert("FOMATO VALIDO filesArchivoEnlaceImagen");
                        } else {
                            $("#enlaceArchivoImagen").focus();
                            $("#enlaceArchivoImagen").parent().append("<br class='required'><label class='Arial13Rojo required'>Formato de archivo invalido</label>");
                            guardarOK = false;
                        }
                    }
    //                alert(filesArchivoEnlaceInformacion[0].type);
                    if (filesArchivoEnlaceInformacion != null) {
                        if (filesArchivoEnlaceInformacion[0].type == "image/jpeg"
                        || filesArchivoEnlaceInformacion[0].type == "image/jpg"
                                || filesArchivoEnlaceInformacion[0].type == "image/png"
                                || filesArchivoEnlaceInformacion[0].type == "image/bmp"
                                || filesArchivoEnlaceInformacion[0].type == "image/gif"
                                || filesArchivoEnlaceInformacion[0].type == "image/tif"
                                || filesArchivoEnlaceInformacion[0].type == "application/pdf"
                                || filesArchivoEnlaceInformacion[0].type == "text/html"
                                ) {
    //                        alert("FOMATO VALIDO filesArchivoEnlaceImagen");
                        } else {
                            $("#enlaceInformacion").focus();
                            $("#enlaceInformacion").parent().append("<br class='required'><label class='Arial13Rojo required'>Formato de archivo invalido</label>");
                            guardarOK = false;
                        }
                    }
    //                alert("guardarOK = false; " + guardarOK);
                    if (guardarOK) {
                        
    //                    alert("OK ");
    //                    alert("GUARDAR " + guardar);
                        var data = new FormData();
                        var hddIdAvisos = $("#hddIdAvisos").val();
                        var cveGrupo = $("#cmbGrupos").val();
                        var tituloAviso = $("#inputTituloAviso").val();
                        var inputSubtituloAviso = $("#inputSubtituloAviso").val();
                        var textoInformacionAviso = $("#textoInformacionAviso").val();
                        var urlInformacionrdInformacion;
                        var dirArchivordInformacion = false;
                        var urlInformacionrdImagen;
                        var dirArchivordImagen = false;
    //                    alert("AAAA");
    //                    alert($('input[name=rdInformacion]:checked').val());
                        
                        if ($('input[name=rdInformacion]:checked').val() == "1") {
                            urlInformacionrdInformacion = $("#urlEnlaceInformacion").val();
                        } else if ($('input[name=rdInformacion]:checked').val() == "2") {
                            dirArchivordInformacion = true;
                        }else if($('input[name=rdInformacion]:checked').val() == undefined){
                            if ($("#cmbTipoAviso").val() == "TI" || $("#cmbTipoAviso").val() == "T"){
                                guardar = 0;
                                $('input[name=rdInformacion]').focus();
                                $('input[name=rdInformacion]').parent().append("<br class='required'><label class='Arial13Rojo required'>Selecciona un tipo de enlace</label>");
                            }
                        }
                        if ($('input[name=rdImagen]:checked').val() == "1") {
                            urlInformacionrdImagen = $("#urlEnlaceInformacion").val();
                        } else if ($('input[name=rdImagen]:checked').val() == "2") {
                            dirArchivordImagen = true;
                        } else if($('input[name=rdImagen]:checked').val() == undefined){
                            if ($("#cmbTipoAviso").val() == "TI" || $("#cmbTipoAviso").val() == "I") {
                                guardar = 0; 
                                $('input[name=rdImagen]').focus();
                                $('input[name=rdImagen]').parent().append("<br class='required'><label class='Arial13Rojo required'>Selecciona un tipo de enlace</label>");
                            }                        
                        }
    //                    alert(dirArchivordImagen);
                        if ($("#cmbTipoAviso").val() == "TI") {
    //                        alert("****");
    //                        alert($("#textoInformacionAviso").val());
                            if($("#textoInformacionAviso").val() == ""){
                                guardar = 0;
    //                            alert("VACIO");
                                $("#textoInformacionAviso").focus();
                                $('#textoInformacionAviso').parent().append("<br class='required'><label class='Arial13Rojo required'>Escribe el contenido del aviso</label>");
                            }else{
    //                            alert("No VACIO");
                                data.append('textAviso', $("#textoInformacionAviso").val());
                            }
                            if($("#ImagenAviso").val() == ""){
                                guardar = 0;
    //                            alert("Vacio archivo imagen ???");
                                $("#ImagenAviso").focus();
                                $('#ImagenAviso').parent().append("<br class='required'><label class='Arial13Rojo required'>Selecciona una imagen para el aviso</label>");
                            }else{
    //                            alert("NO vacio archivo iamge !!!!!");
                                $.each(filesImagenAviso, function (key, value) {
                                    data.append('filesImagenAviso', value);
                                });
                            }
                            
                            if (dirArchivordInformacion == false) {
                                if($("#urlEnlaceInformacion").val() == ""){
                                    guardar = 0;
                                    $("#urlEnlaceInformacion").focus();
                                    $('#urlEnlaceInformacion').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce la url del enlace</label>");
                                }else{
                                    data.append('tituloLink', $("#urlEnlaceInformacion").val());
                                }
                            } else {
                                if($("#enlaceInformacion").val() == ""){
                                    guardar = 0;
                                    $("#enlaceInformacion").focus();
                                    $('#enlaceInformacion').parent().append("<br class='required'><label class='Arial13Rojo required'>Selecciona el archivo de enlace</label>");
                                }else{
                                    $.each(filesArchivoEnlaceInformacion, function (key, value) {
                                        data.append('filesArchivoEnlaceInformacion', value);
                                    });
                                }
                            }
                            if (dirArchivordImagen == false) {
                                if($("#urlEnlaceImagen").val() == ""){
                                    guardar = 0;
                                    $("#urlEnlaceImagen").focus();
                                    $('#urlEnlaceImagen').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce la url del enlace</label>");
                                }else{
                                    data.append('link', $("#urlEnlaceImagen").val());                                                                
                                }
                            } else {
                                if($("#enlaceArchivoImagen") == ""){
                                    guardar = 0;
                                    $("#enlaceArchivoImagen").focus();
                                    $('#enlaceArchivoImagen').parent().append("<br class='required'><label class='Arial13Rojo required'>Selecciona el archivo de enlace</label>");
                                }else{
                                    $.each(filesArchivoEnlaceImagen, function (key, value) {
                                        data.append('filesArchivoEnlaceImagen', value);
                                    });
                                }                            
                            }
                            if($("#inputTituloAviso").val() == ""){
                                guardar = 0;
                                $("#inputTituloAviso").focus();
                                $('#inputTituloAviso').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce el titulo del aviso</label>");
                            }else{
                                data.append('tituloAviso', $("#inputTituloAviso").val());                            
                            }
                            if($("#inputSubtituloAviso").val() == ""){
                                guardar = 0;
                                $("#inputSubtituloAviso").focus();
                                $('#inputSubtituloAviso').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce el subtitulo del aviso</label>");
                            }else{
                                data.append('subtituloAviso', $("#inputSubtituloAviso").val());                            
                            }
                        } else if ($("#cmbTipoAviso").val() == "I") {
    //                        alert("IIII");
                            if($("#inputTituloAviso").val() == ""){
                                guardar = 0;
                                $("#inputTituloAviso").focus();
                                $('#inputTituloAviso').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce el titulo del aviso</label>");
                            }else{
                                data.append('tituloAviso', $("#inputTituloAviso").val());                            
                            }
                            if($("#inputSubtituloAviso").val() == ""){
                                guardar = 0;
                                $("#inputSubtituloAviso").focus();
                                $('#inputSubtituloAviso').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce el subtitulo del aviso</label>");
                            }else{
                                data.append('subtituloAviso', $("#inputSubtituloAviso").val());                            
                            }
                            if($("#ImagenAviso").val() == ""){
                                guardar = 0;
                                $("#ImagenAviso").focus();
                                $('#ImagenAviso').parent().append("<br class='required'><label class='Arial13Rojo required'>Selecciona una imagen para el aviso</label>");
                            }else{
                                $.each(filesImagenAviso, function (key, value) {
                                    data.append('filesImagenAviso', value);
                                });
                            }
                            if (dirArchivordImagen == false) {
                                if($("#urlEnlaceImagen").val() == ""){
                                    guardar = 0;
                                    $("#urlEnlaceImagen").focus();
                                    $('#urlEnlaceImagen').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce la url del enlace</label>");
                                }else{
                                    if(validarURL($("#urlEnlaceImagen").val())){
                                        data.append('urlEnlaceImagen', $("#urlEnlaceImagen").val());
                                    }else{
                                        $("#urlEnlaceImagen").focus();
                                        $('#urlEnlaceImagen').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce un url valida</label>");
                                    }                                                                
                                }
                            } else {
                                if($("#enlaceArchivoImagen").val() == ""){
                                    guardar = 0;
                                    $("#enlaceArchivoImagen").focus();
                                    $('#enlaceArchivoImagen').parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione el archivo de enlace</label>");
                                }else{
                                    $.each(filesArchivoEnlaceImagen, function (key, value) {
                                        data.append('filesArchivoEnlaceImagen', value);
                                    });
                                }                            
                            }
                        } else if ($("#cmbTipoAviso").val() == "T") {
                            if($("#inputTituloAviso").val() == ""){
                                guardar = 0;
                                $("#inputTituloAviso").focus();
                                $('#inputTituloAviso').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce el titulo del aviso</label>");
                            }else{
                                data.append('tituloAviso', $("#inputTituloAviso").val());                            
                            }
                            if($("#inputSubtituloAviso").val() == ""){
                                guardar = 0;
                                $("#inputSubtituloAviso").focus();
                                $('#inputSubtituloAviso').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce el subtitulo del aviso</label>");
                            }else{
                                data.append('subtituloAviso', $("#inputSubtituloAviso").val());                            
                            }
                            if($("#textoInformacionAviso").val() == ""){
                                guardar = 0;
                                $("#textoInformacionAviso").focus();
                                $('#textoInformacionAviso').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce el contenido del aviso</label>");
                            }else{
                                data.append('textAviso', $("#textoInformacionAviso").val());                            
                            }

                            if (dirArchivordInformacion == false) {
                                if($("#urlEnlaceInformacion").val() == ""){
                                    guardar = 0;
                                    $("#urlEnlaceInformacion").focus();
                                    $('#urlEnlaceInformacion').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce el enlace</label>");
                                }else{
                                    if(validarURL($("#urlEnlaceInformacion").val())){
                                        data.append('tituloLink', $("#urlEnlaceInformacion").val());
                                    }else{
                                        $("#urlEnlaceInformacion").focus();
                                        $('#urlEnlaceInformacion').parent().append("<br class='required'><label class='Arial13Rojo required'>Introduce un url valida</label>");
                                    }                                                                
                                }
                            } else {
                                if($("#enlaceInformacion").val() == ""){
                                    guardar = 0;
                                    $("#enlaceInformacion").focus();
                                    $('#enlaceInformacion').parent().append("<br class='required'><label class='Arial13Rojo required'>ISeleccione el archivo de enlace</label>");
                                }else{
                                    $.each(filesArchivoEnlaceInformacion, function (key, value) {
                                        data.append('filesArchivoEnlaceInformacion', value);
                                    });
                                }
                                
                            }


                        }
                        data.append('orden', orden);
                        data.append('accion', 'guardarAviso');
                        data.append('activo', $("#cmbActivo").val());
                        data.append('idAviso', $("#hddIdAvisos").val());
                        if($("#txtFechaInicio").val() == ""){
                            guardar = 0;
                            $("#txtFechaInicio").focus();
                            $('#txtFechaInicio').parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione una fecha</label>");
                        }else{
                            data.append('fecInicio', $("#txtFechaInicio").val());
                        }
                        if($("#txtFechaFinal").val() == ""){
                            guardar = 0;
                            $("#txtFechaFinal").focus();
                            $('#txtFechaFinal').parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione una fecha</label>");
                        }else{
                            data.append('fecTermino', $("#txtFechaFinal").val());
                        }
                        if($("#cmbGrupos").val() == ""){
                            guardar = 0;
                            $("#cmbGrupos").focus();
                            $('#cmbGrupos').parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione un grupo</label>");
                        }else{
                            data.append('cveGrupo', $("#cmbGrupos").val());
                        }
    //                    alert("GUARDAR " + guardar);
    //                data.append('textoInformacionAviso', $("#inputSubtituloAviso").val());
                        if(guardar == 1){
    //                        alert("Realiza la insercion exitosamente");
                            $.ajax({
                                url: '../fachadas/sigejupe/avisos/AvisosFacade.Class.php',
                                type: 'POST',
                                data: data,
                                cache: false,
                                dataType: 'json',
                                processData: false, // Don't process the files
                                contentType: false, // Set content type to false as jQuery will tell the server its a query string request
                                success: function (data, textStatus, jqXHR) {
                                    if(data.totalCount > 0){
                                    $("#divAlertSucces").html("Correcto!: Aviso creado");
                                    $("#divAlertSucces").show("slide");
                                    setTimeAlert("divAlertSucces");
                                    $("#hddIdAvisos").val(data.data.idAviso);
                                    }
                                    if (typeof data.error === 'undefined') {
        //                        submitForm(event, data);
                                    }
                                    else {
                                        console.log('ERRORS: ' + data.error);
                                    }
                                },
                                error: function (jqXHR, textStatus, errorThrown)
                                {
                                    console.log('ERRORS: ' + textStatus);
                                }
                            });
                        }else{
                            console.log("NO realiza la insercion exitosamente");                        
                        }
                    } else {
                        console.log("error");
                    }
                }
            }
            buscarAvisos = function () {
                
    //            alert("Buscar");
                var table = "";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/avisos/AvisosFacade.Class.php",
                    data: {
                        accion: "consultar",
                        activo: "S"
                    },
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {

                    },
                    success: function (datos) {
    //                    alert(datos);
    //                    if(datos.totalCount > 0){
                        $("#panelConsultas").show("slow");
                        var centro = "  ";
                        var izquierda = "  ";
                        var derecha = "  ";
                        var soloTexto = " ";
                        var soloImagen = " ";
                        var text = " ";
    //                    centro = ' <div class="" style="width: 500px; height: 330px;  align-content: center; border: 1px solid #cecece;"> ';
    //                    centro = '     <img class="col-lg-6" id="imagenAviso" data-holder-rendered="true" src="" style="height: 130px; width: 100%; display: block;"> ';
    //                    centro = '     <div class="caption col-lg-12" id="divTextoInformativo"> ';
    //                    centro = '         <h3><strong><span id="spanTituloAviso">titulo del Aviso</span></strong></h3> ';
    //                    centro = '         <h6><span id="spanSubtituloAviso">Subtitulo del aviso</span></h6> ';
    //                    centro = '         <p> ';
    //                    centro = '             <span id="spanTextoInformacion">Informacion del aviso Informacion del aviso Informacion del aviso Informacion del aviso Informacion del aviso Informacion del aviso Informacion del aviso Informacion del aviso Informacion del aviso Informacion del aviso Informacion del aviso Informacion del aviso Informacion del aviso Informacion del aviso.</span> ';
    //                    centro = '         </p> ';
    //                    centro = '     </div> ';
    //                    centro = ' </div> ';
                        if (datos.totalCount > 0) {
                            table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                            table += "    <thead>";
                            table += "        <tr>";
                            table += "            <th>N&uacute;m.</th>";
                            table += "            <th>Grupo</th>";
                            table += "            <th>Aviso</th>";
                            table += "        </tr>";
                            table += "    </thead>";
                            table += "    <tbody>";
                            text = "";
                            izquierda = "";
                            derecha = "";
                            soloTexto = "";
                            soloImagen = "";
                            $.each(datos.data, function (index, element) {
                                if (element.orden == 1) { // formato izquierda
                                    izquierda += ' <div class="" style="width: 593px; height: 330px;  align-content: center; border: 1px solid #cecece;">  ';
                                    izquierda += '     <img class="col-lg-6" id="imagenAviso" data-holder-rendered="true" src="img/avisos/' + element.urlImg + '" style="height: 130px; width: auto; display: block; float: left;">  ';
    //                                izquierda += '     <div class="caption col-lg-6" id="divTextoInformativo" style="display: block;">  ';
                                    izquierda += '         <h3><strong><span id="spanTituloAviso">' + element.tituloAviso + '</span></strong></h3>  ';
                                    izquierda += '         <h6><span id="spanSubtituloAviso">' + element.subtituloAviso + '</span></h6>  ';
                                    izquierda += '         <p>  ';
                                    izquierda += '             <span id="spanTextoInformacion">' + element.textAviso + '</span>  ';
                                    izquierda += '         </p>  ';
    //                                izquierda += '     </div>  ';
                                    izquierda += ' </div>  ';
                                    text = izquierda;
                                    izquierda = "";
                                } else if (element.orden == 2) { // formato centro
                                    centro += ' <div class="" style="width: 593px; height: 330px;  align-content: center; border: 1px solid #cecece;"> ';
                                    centro += '     <img class="col-lg-6" id="imagenAviso" data-holder-rendered="true" src="img/avisos/' + element.urlImg + '" style="height: 130px; width: 100%; display: block;"> ';
                                    centro += '     <div class="caption col-lg-12" id="divTextoInformativo"> ';
                                    centro += '         <h3><strong><span id="spanTituloAviso">' + element.tituloAviso + '</span></strong></h3> ';
                                    centro += '         <h6><span id="spanSubtituloAviso">' + element.subtituloAviso + '</span></h6> ';
                                    centro += '         <p> ';
                                    centro += '             <span id="spanTextoInformacion">' + element.textAviso + '</span> ';
                                    centro += '         </p> ';
                                    centro += '     </div> ';
                                    centro += ' </div> ';
                                    text = centro;
                                    centro = "";
                                } else if (element.orden == 3) { // formato derecha
                                    derecha += ' <div class="" style="width: 593px; height: 330px;  align-content: center; border: 1px solid #cecece;"> ';
                                    derecha += '     <img class="col-lg-6" id="imagenAviso" data-holder-rendered="true" src="img/avisos/' + element.urlImg + '" style="height: 130px; width: auto; display: block; float: right;"> ';
                                    derecha += '     <div class="caption col-lg-6" id="divTextoInformativo"> ';
                                    derecha += '         <h3><strong><span id="spanTituloAviso">' + element.tituloAviso + '</span></strong></h3> ';
                                    derecha += '         <h6><span id="spanSubtituloAviso">' + element.subtituloAviso + '</span></h6> ';
                                    derecha += '         <p> ';
                                    derecha += '             <span id="spanTextoInformacion">' + element.textAviso + '</span> ';
                                    derecha += '         </p> ';
                                    derecha += '     </div> ';
                                    derecha += ' </div> ';
                                    text = derecha;
                                    derecha = "";
                                } else if (element.orden == 4) { // formato Texto
                                    soloTexto += ' <div class="" style="width: 593px; height: 330px;  align-content: center; border: 1px solid #cecece;">      	<div class="caption col-lg-12" id="divTextoInformativo"> ';
                                    soloTexto += '         <h3><strong><span id="spanTituloAviso">' + element.tituloAviso + '</span></strong></h3> ';
                                    soloTexto += '         <h6><span id="spanSubtituloAviso">' + element.subtituloAviso + '</span></h6> ';
                                    soloTexto += '         <p> ';
                                    soloTexto += '             <span id="spanTextoInformacion">' + element.textAviso + '</span> ';
                                    soloTexto += '         </p> ';
                                    soloTexto += '     </div> ';
                                    soloTexto += ' </div> ';
                                    text = soloTexto;
                                    soloTexto = "";
                                } else if (element.orden == 5) { // formato Imagen
                                    soloImagen += ' <div class="" style="width: 593px; height: 330px;  align-content: center; border: 1px solid #cecece;"> ';
                                    soloImagen += '     <img class="col-lg-6" id="imagenAviso" data-holder-rendered="true" src="img/avisos/' + element.urlImg + '" style="height: 100%; width: 100%; display: block; float: none;"> ';
                                    soloImagen += ' </div> ';
                                    text = soloImagen;
                                    soloImagen = "";
                                }
    //                            alert(centro);
                                var JSONAviso = JSON.stringify(element);
                                table += "<tr onclick='seleccionarAvisoModificar(" + JSONAviso + ")'>";
                                table += "      <td>" + (parseInt(index) + 1) + "</td>";
                                table += "      <td>" + element.tituloAviso + "</td>";
                                table += "      <td>" + text + "</td>";
                                table += "</tr>";

                            });
                            table += "</tbody>";
                            table += "</table>";
                            $("#divTableResult").html(table);
                            $("#tblResultadosGrid").DataTable({
                                paging: true,
                                oLanguage: {
                                    sLengthMenu: "_MENU_ registros por pagina"
                                }
                            });
                            $('html,body').animate({
                                scrollTop: $("#panelConsultas").offset().top
                            }, 2000);
                        } else {
                            $("#divAlertInfo").html("Sin resultados");
                            $("#divAlertInfo").show("slide");
                            setTimeAlert("divAlertInfo");
                        }
                    }
                });
            };
            seleccionarAvisoModificar = function (jsonAviso) {
                $("#panelConsultas").hide("slow");
                $("#inputEliminar").show();
                $("#hddIdAvisos").val(jsonAviso.idAviso);
                $("#cmbTipoAviso").prop("disabled", true);
    //            $("#inputTituloAviso").val("SAFJSHDFKJSDHFLKJDSHFKJDS");
    //            alert("Seleccionar Aviso Modificar");
    //            alert(jsonAviso);
    //            alert($("#cmbTipoAviso").val());
    //            alert(jsonAviso.orden);
                if (jsonAviso.orden == 1) { // izquierda
                    $("#cmbTipoAviso").val("TI");
                    $("#inputTituloAviso").val(jsonAviso.tituloAviso);
                    $("#inputSubtituloAviso").val(jsonAviso.subtituloAviso);
                    $("#textoInformacionAviso").val(jsonAviso.textAviso);
                    $("#textoInformacionAviso").val(jsonAviso.textAviso);
                    $("input:radio[name=rdInformacion]").prop("disabled", true);
                    $("input:radio[name=rdImagen]").prop("disabled", true);
                    $("#ImagenAviso").prop("disabled", true);
                    orden = jsonAviso.orden;
                    $("#txtFechaInicio").val(jsonAviso.fecInicio);
                    $("#txtFechaFinal").val(jsonAviso.fecTermino);
                    $('#imagenAviso').attr('src', 'img/avisos/' + jsonAviso.urlImg);
                    $("#btnPosIzq").click();
                } else if (jsonAviso.orden == 2) { // centro
                    $("#cmbTipoAviso").val("TI");
                    $("#inputTituloAviso").val(jsonAviso.tituloAviso);
                    $("#inputSubtituloAviso").val(jsonAviso.subtituloAviso);
                    $("#textoInformacionAviso").val(jsonAviso.textAviso);
                    $("#textoInformacionAviso").val(jsonAviso.textAviso);
                    $("input:radio[name=rdInformacion]").prop("disabled", true);
                    $("input:radio[name=rdImagen]").prop("disabled", true);
                    $("#ImagenAviso").prop("disabled", true);
                    orden = jsonAviso.orden;
                    $("#txtFechaInicio").val(jsonAviso.fecInicio);
                    $("#txtFechaFinal").val(jsonAviso.fecTermino);
                    $('#imagenAviso').attr('src', 'img/avisos/' + jsonAviso.urlImg);
                    $("#btnPosCer").click();
                } else if (jsonAviso.orden == 3) { // derecha
                    $("#cmbTipoAviso").val("TI");
                    $("#inputTituloAviso").val(jsonAviso.tituloAviso);
                    $("#inputSubtituloAviso").val(jsonAviso.subtituloAviso);
                    $("#textoInformacionAviso").val(jsonAviso.textAviso);
                    $("#textoInformacionAviso").val(jsonAviso.textAviso);
                    $("input:radio[name=rdInformacion]").prop("disabled", true);
                    $("input:radio[name=rdImagen]").prop("disabled", true);
                    $("#ImagenAviso").prop("disabled", true);
                    orden = jsonAviso.orden;
                    $("#txtFechaInicio").val(jsonAviso.fecInicio);
                    $("#txtFechaFinal").val(jsonAviso.fecTermino);
                    $('#imagenAviso').attr('src', 'img/avisos/' + jsonAviso.urlImg);
                    $("#btnPosDer").click();
                } else if (jsonAviso.orden == 4) { // texto
                    $("#cmbTipoAviso").val("T");
                    $("#inputTituloAviso").val(jsonAviso.tituloAviso);
                    $("#inputSubtituloAviso").val(jsonAviso.subtituloAviso);
                    $("#textoInformacionAviso").val(jsonAviso.textAviso);
                    $("input:radio[name=rdInformacion]").prop("disabled", true);
                    $("#txtFechaInicio").val(jsonAviso.fecInicio);
                    $("#txtFechaFinal").val(jsonAviso.fecTermino);
                    $("#inputTituloAviso").keyup();
                    $("#inputSubtituloAviso").keyup();
                    $("#textoInformacionAviso").keyup();

                } else if (jsonAviso.orden == 5) { // imagen
                    $("#cmbTipoAviso").val("I");
                    $("#inputTituloAviso").val(jsonAviso.tituloAviso);
                    $("#inputSubtituloAviso").val(jsonAviso.subtituloAviso);
                    $("#ImagenAviso").prop("disabled", true);
                    $("input:radio[name=rdImagen]").prop("disabled", true);
                    orden = jsonAviso.orden;
                    $("#txtFechaInicio").val(jsonAviso.fecInicio);
                    $("#txtFechaFinal").val(jsonAviso.fecTermino);
                    $('#imagenAviso').attr('src', 'img/avisos/' + jsonAviso.urlImg);
                }
                $("#cmbTipoAviso").change();
                $("#inputTituloAviso").keyup();
                $("#inputSubtituloAviso").keyup();
                $("#textoInformacionAviso").keyup();
            };
            eliminarAviso = function () {
    //            alert("eliminar aviso");
                var hddAviso = $("#hddIdAvisos").val();
                bootbox.dialog({
                    message: "Advertencia!! <br><br> ¿ Est&aacute; seguro de eliminar el distrito ?",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/avisos/AvisosFacade.Class.php",
                                    async: false,
                                    dateType: "json",
                                    data: {
                                        accion: "eliminarAviso",
                                        idAviso: hddAviso,
                                        activo: "N"
                                    },
                                    success: function (datos) {
                                        $("#divAlertSucces").html("Eliminado!: correctamente");
                                        $("#divAlertSucces").show("slide");
                                        setTimeAlert("divAlertSucces");
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

            };
            getGrupos = function (){
                
                $.ajax({
                   type: 'POST',
                   url: "../fachadas/sigejupe/avisos/AvisosFacade.Class.php",
                   data: {
                       accion: "getGrupos"
                   },
                   async: true,
                   dataType: 'json',
                   beforeSend: function (xhr) {
                            
                    },
                    success: function (datos) {
                        if(datos.totalCount > 0){
                            $.each(datos.data, function (index, element){
                                var option = "<option  value = " + element.cveGrupo + ">" + element.nomGrupo + "</option>";
                                $("#cmbGrupos").append(option);
                            });
                        }else{
                            console.log("ERROR grupos");
                        }
                    }
                });
            }
            limpiar = function (){
               $("#hddIdAvisos").val("");
                $("#cmbTipoAviso").val("TI");
                $("#inputTituloAviso").val("");
                $("#inputSubtituloAviso").val("");
                $("#textoInformacionAviso").val("");
                $("[name = 'rdInformacion'][value='1']").prop('checked', false);
                $("[name = 'rdInformacion'][value='2']").prop('checked', false);
                
                $("[name = 'rdImagen'][value='1']").prop('checked', false);
                $("[name = 'rdImagen'][value='2']").prop('checked', false);
                
                $("#enlaceInformacion").val("");
                $("#ImagenAviso").val("");
                $("#enlaceArchivoImagen").val("");
                orden = 2;
                $("#urlEnlaceInformacion").val("");
                $("#urlEnlaceImagen").val("");
                $("#divURLInformacion").hide("slow");
                $("#divArchivoInformacion").hide("slow");
                $("#divImagenEnlaceURL").hide("slow");
                $("#divImagenEnlaceArchivo").hide("slow");
                $(".required").remove();
                $("#imagenAviso").attr("src", "data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTkyIiBoZWlnaHQ9IjIwMCIgdmlld0JveD0iMCAwIDE5MiAyMDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjwhLS0KU291cmNlIFVSTDogaG9sZGVyLmpzLzEwMCV4MjAwCkNyZWF0ZWQgd2l0aCBIb2xkZXIuanMgMi42LjAuCkxlYXJuIG1vcmUgYXQgaHR0cDovL2hvbGRlcmpzLmNvbQooYykgMjAxMi0yMDE1IEl2YW4gTWFsb3BpbnNreSAtIGh0dHA6Ly9pbXNreS5jbwotLT48ZGVmcz48c3R5bGUgdHlwZT0idGV4dC9jc3MiPjwhW0NEQVRBWyNob2xkZXJfMTUzYzMyMzAyZTggdGV4dCB7IGZpbGw6I0FBQUFBQTtmb250LXdlaWdodDpib2xkO2ZvbnQtZmFtaWx5OkFyaWFsLCBIZWx2ZXRpY2EsIE9wZW4gU2Fucywgc2Fucy1zZXJpZiwgbW9ub3NwYWNlO2ZvbnQtc2l6ZToxMHB0IH0gXV0+PC9zdHlsZT48L2RlZnM+PGcgaWQ9ImhvbGRlcl8xNTNjMzIzMDJlOCI+PHJlY3Qgd2lkdGg9IjE5MiIgaGVpZ2h0PSIyMDAiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSI2OS41IiB5PSIxMDQuOCI+MTkyeDIwMDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==")
                fechaBaseDatos({
                        txtFechaInicio: "fecha",
                        txtFechaFinal: "fecha"
                    }
                );
                $("#inputEliminar").hide();
                $("#panelConsultas").hide("slow");
                $("#cmbTipoAviso").prop("disabled", false);
                $("#ImagenAviso").prop("disabled", false);
                $("input:radio[name=rdInformacion]").prop("disabled", false);
                $("input:radio[name=rdImagen]").prop("disabled", false);
                $("#inputTituloAviso").keyup();
                $("#inputSubtituloAviso").keyup();
                $("#textoInformacionAviso").keyup();
                $("#cmbTipoAviso").change();
            };
            (function (){
                getGrupos();
            })();
        </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>