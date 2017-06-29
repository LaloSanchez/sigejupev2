<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ?>      
    <style>
        .valida-error{
            border-color: #C91414 !important;
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
        .mayuscula{  
            text-transform: uppercase;  
        } 
        .requerido {
            color: darkred;
        }
    </style>
    <link href="../vistas/css/generalStyles.css" rel="stylesheet" />
    <!--<div class="page-content" id="areadetrabajo">-->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Grupos &Oacute;rdenes Aprehensi&oacute;n                         
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal">

                <form id="formProgramaciones" method="post">
                    <p class="col-lg-12" style="color:darkred;">
                        Los campos marcados con (*) son obligatorios.
                    </p>
                    <div class="form-group">
                        <label class="control-label col-xs-3">Descripci&oacute;n <span class="requerido">(*)</span></label>
                        <div class="col-xs-9" id="listaMeses">
                            <input type="text" class="form-control" id="desGrupoOrden" name="desGrupoOrden" placeholder="Descripcion" maxlength="100">
                            <input type="hidden" id="cveGrupoOrden" name="cveGrupoOrden" />
                        </div>
                    </div>
                    <div class="form-group" id="salasJuzgado">                                                                
                        <label class="control-label col-xs-3">Juzgados <span class="requerido">(*)</span></label>
                        <div class="col-xs-9" id="listaJuzgados">
                            <input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgados">
                        </div>                                
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="alert alert-warning alert-dismissable" id="advertencia" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Advertencia!</strong> Mensaje
                        </div>
                        <div class="alert alert-success alert-dismissable" id="correcto" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Correcto!</strong> Mensaje
                        </div>
                        <div class="alert alert-danger alert-dismissable" id="error" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Error!</strong> Mensaje
                        </div>
                        <div class="alert alert-info alert-dismissable" id="info" style="display: none;">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Informaci&oacute;n!</strong> Mensaje
                        </div>
                    </div>  
                    <br>
                </form>
                <div class="form-group">
                    <div class="col-xs-offset-3 col-xs-9">
                        <input type="submit" class="btn btn-primary guarda" value="Guardar" onclick="guardarGrupo()">                                    
                        <input type="submit" class="btn btn-primary limpia" value="Limpiar" onclick="clean()">                                    
                        <input type="submit" class="btn btn-primary consulta" value="Consultar" onclick="consultaGrupo(1)">                                    
                        <input type="submit" class="btn btn-primary elimina" value="Eliminar" onclick="borrar()" style="display: none;">                                    
                    </div>
                </div>
            </div>
            
            <div id="divConsulta" style="display: none;">                            
                <!--<input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1)">-->
                <form method="post" id="formRegistros">
                    <div class="col-xs-12">
                        <div class="form-group col-md-4" style="padding: 10px">
                            <label class="control-label" id="totalReg"></label>
                        </div>

                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Pagina:</label>
                            <select  name="cmbPaginacion" id="cmbPaginacion" onchange="consultaGrupo(0);">
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div id="divPaginador" class="form-group col-md-4" >
                            <label class="control-label">Registros por p&aacute;gina:</label>
                            <select  name="cmbNumReg" id="cmbNumReg" onchange="consultaGrupoPagina();">
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
                    <br>
                    <div id="consulta-grupos">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">

        consultaGrupoPagina = function () {
            $("#cmbPaginacion").val(1);
            consultaGrupo(0);
        };
        
        consultaGrupo = function(Aux){
            if(Aux==1){
                $("#cmbPaginacion").val(1);
                $("#cmbNumReg").val(10);       
            }
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();
            var cveGrupoOrden = $("#cveGrupoOrden").val();
            var descripcion = $("#desGrupoOrden").val();
            var html = "";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/gruposordenes/GruposordenesFacade.Class.php",
                data: {
                cveGrupoOrden : cveGrupoOrden,
                desGrupoOrden : descripcion,
                paginacion: "S",
                pagina: pag,
                cantidadRegistros: cantReg,
                activo: "S",
                accion : "consultar"},
                async: true,
                dataType: "html",
                beforeSend: function(objeto) {
                },
                success: function(datos) {
                    try{
                        var result = eval("(" + datos + ")");
                        //console.log(result);
                        html = '<table id="tblResultados" class="table table-hover table-striped table-bordered">';
                        html += '<thead><tr><th>N&uacute;m.</th><th>Descripci&oacute;n</th><th>Fecha Registro</th><th>Fecha Actualizaci&oacute;n</th><th><a href="javascript:;" onClick="borrarSeleccionados()" id="borrarSeleccionados"><img src="./img/eliminar.png" width="30" height="30" data-toogle="Eliminar Registros seleccionados" title="Eliminar Registros seleccionados"></a></th></tr></thead>';
                        html += '<tbody>';
                        if (result.totalCount > 0) {
                            $("#divConsulta").show();
                            var c = 0;
                            for (var n = 0; n < result.totalCount; n++){
                                c++;
                                html += '<tr>';
                                html += '<td onclick="consultaId(' + result.data[n].cveGrupoOrden + ')">' + c + '</td>';
                                html += '<td onclick="consultaId(' + result.data[n].cveGrupoOrden + ')">' + result.data[n].desGrupoOrden + '</td>';
                                html += '<td onclick="consultaId(' + result.data[n].cveGrupoOrden + ')">' + formatoFecha(result.data[n].fechaRegistro) + '</td>';
                                html += '<td onclick="consultaId(' + result.data[n].cveGrupoOrden + ')">' + formatoFecha(result.data[n].fechaActualizacion) + '</td>';
                                html += '<td><input type="checkbox" name="eliminar[]" value="' + result.data[n].cveGrupoOrden + '"></td>';
                                html += '</tr>';
                            }
                            html += '</tbody>';
                            html += '</table>';
                            $("#consulta-grupos").html(html);
                            $("#tblResultados").DataTable({
                                paging: false
                            });
                            getPaginas(pag, cantReg);
                            //tabla();
                            //ToggleLoading(2);
                        }else{
                            //alert(result.text);
                            html = '';
                            $("#info").html('<span>' + result.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            $("#consulta-grupos").html(html);
                            //ToggleLoading(2);
                        }
                    }catch(e){
                        //alert("Ocurrio un error al consultar los datos: " + e);
                        html = '';
                        $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        $("#consulta-grupos").html(html);
                        //ToggleLoading(2);
                    }
                },
                error: function(objeto, quepaso, otroobj) {
                    //alert("Ocurrio un error al consultar los datos, favor de intentarlo mas tarde!");
                    html = '';
                    $("#error").html('<span>Ocurrio un error al consultar los datos, favor de intentarlo mas tarde!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                    $("#consulta-grupos").html(html);
                    //ToggleLoading(2);
                }
            });
        };
        
        getPaginas = function (pag, cantReg) {
            var strDatos = "accion=getPaginas";
            var pag = $("#cmbPaginacion").val();
            var cantReg = $("#cmbNumReg").val();     
            
            strDatos += "&activo=S";
            strDatos += "&desGrupoOrden=" + $("#desGrupoOrden").val();
            strDatos += "&registrosPorPagina=" + cantReg;
            
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/gruposordenes/GruposordenesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {  
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");

                    if (json.totalCount > 0) {
                        $('#cmbPaginacion').find('option').remove().end();

                        for (var i = 0; i < (parseInt(json.total)); i++) {
                            $("#cmbPaginacion").append($('<option></option>').val(json.data[i].pagina).html(json.data[i].pagina));
                        }
                        
                        $("#totalReg").html("<b> Total: " + json.totalCount + "</b>");
                        $("#cmbPaginacion").val(pag);
                    } else {
                        $("#advertencia").html(json.msg);
                        $("#advertencia").show("slide");
                        setTimeAlert("advertencia");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    $("#error").html("Error en la peticion:\n\n" + quepaso);
                    $("#error").show("slide");
                    setTimeAlert("error");
                }
            });
        };

        function tabla(){

            $("#tblResultados").dataTable({
                "language": {
                    "lengthMenu": "Mostrar _MENU_ registros por p&aacute;gina",
                    "zeroRecords": "No hay registros",
                    "info": "P&aacute;gina _PAGE_ de _PAGES_",
                    "infoEmpty": "No hay resultados",
                    "infoFiltered": "(filtrando de _MAX_ registros totales)",
                    "search":         "Buscar:",
                    "paginate": {
                        "first":      "Primero",
                        "last":       "Ultimo",
                        "next":       "Siguiente",
                        "previous":   "Anterior"
                    }
                },
                "pageLength": 10,
                "aLengthMenu": [
                    [5, 10, 20, 50, 100, -1],
                    [5, 10, 20, 50, 100,"Todos"]
                ]
            });
        }
        
        mostrarJuzgados = function(cve){
            
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: {
                activo: 'S',
                accion : "consultar"},
                async: false,
                dataType: "json",
                beforeSend: function(objeto) {
                    //ToggleLoading(1);
                },
                success: function(datos) {
                    //alert(datos.totalCount);
                    try {
                        var html = "";
                        $("#salasJuzgado").show();
                        if (datos.totalCount > 0) {

                            html += '<select name="cveJuzgado" id="cveJuzgado" class="js-example-basic-multiple" style="width: 100%;" multiple="multiple" title="Salas" data-toggle="tooltip" tabIndex="tabIndex">';
                            for(var n = 0; n < datos.totalCount; n++){
                                html += "<option value='" + datos.data[n].cveJuzgado + "'>" + datos.data[n].desJuzgado + "</option>";
                            }
                            $('#listaJuzgados').html(html);
                            $(".js-example-basic-multiple").select2();
                            //consultaProgramaciones();
                            $(".select2-hidden-accessible").hide();
                            //ToggleLoading(2);
                        }else{
                            //alert(datos.text);
                            //alert(datos.totalCount);
                            $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            $('#listaJuzgados').html('<input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgados">');
                            //ToggleLoading(2);
                        }
                    } catch (e) {
                        //alert(datos.text);
                        $("#advertencia").html('<span>Ocurrio un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        $('#listaJuzgados').html('<input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgados">');
                        //ToggleLoading(2);
                    }
                },
                error: function(objeto, quepaso, otroobj) {
                    //alert("Error al consultar los datos, favor de intentarlo más tarde");
                    $("#advertencia").html('<span>No se encontraron registros</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                    $('#listaSalas').html('<input type="hidden" id="cveJuzgado" class="form-control selecto2" name="cveJuzgado" placeholder="Juzgados">');
                    //ToggleLoading(2);
                }
            });
            if (cve > 0){
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/gruposordenesjuzgados/GruposordenesjuzgadosFacade.Class.php",
                    data: {
                    cveGrupoOrden : cve,
                    activo: "S",
                    accion : "consultar"},
                    async: false,
                    dataType: "json",
                    beforeSend: function(objeto) {
                        //ToggleLoading(1);
                    },
                    success: function(datos) {
                        try {
                            //var idSalas = "";
                            //var longitud = 0;
                            var arreglo = new Array();
                            if (datos.totalCount > 0) {
                                for (var n = 0;  n < datos.totalCount; n++){
                                    //idSalas += parseInt(datos.data[n].cveSala) + ",";
                                    arreglo.push(parseInt(datos.data[n].cveJuzgado));
                                }
                                $("#cveJuzgado").val(arreglo).trigger("change");

                                console.log(arreglo);
                                //alert(idSalas);

                                //ToggleLoading(2);
                            }else{
                                //alert(datos.text);
                                //$("#listaHorarios").html("");
                                $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                //ToggleLoading(2);
                            }
                        } catch (e) {
                            //alert(e);
                            //$("#listaHorarios").html("");
                            $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            //ToggleLoading(2);
                        }
                    },
                    error: function(objeto, quepaso, otroobj) {
                        //alert("Error al consultar los datos, favor de intentarlo más tarde");
                        //$("#listaHorarios").html("");
                        $("#error").html('<span>Ocurri&oacute; un error al consultar los datos/span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        //ToggleLoading(2);
                    }
                });
            }
            
        };
        
        changeDivForm = function (opc) {
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
            } else if (opc === 2) {
                consultaHorarios();
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
            }
        };

        consultaId = function (id) {
            //changeDivForm(1);
            /*aqui toda peticion ajax POST usar ToggleLoading para peticion de carga*/
            seleccionaGrupo(id);
        };

        clean = function () {
            //$.clearInput = function () {                                    
                $('#divFormulario').find('input[type=text], input[type=password], input[type=number], input[type=email], textarea').val('');
                $("#divFormulario").find('input[name="cveGrupoOrden"]').val("");
                $(".elimina").hide();
                var html = '';
                $("#consulta-grupos").html(html);
                $("#cveJuzgado").val('').trigger('change');
                $("#divConsulta").hide();
            //};
        };

        seleccionaGrupo = function(cveGrupoOrden){
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/gruposordenes/GruposordenesFacade.Class.php",
                data: {
                cveGrupoOrden : cveGrupoOrden,
                accion : "seleccionar"},
                async: true,
                dataType: "json",
                beforeSend: function(objeto) {
                    //ToggleLoading(1);
                },
                success: function(datos) {
                    try {
                        if (datos.totalCount > 0) {
                            $("#cveGrupoOrden").val(datos.data[0].cveGrupoOrden);
                            $("#desGrupoOrden").val(datos.data[0].desGrupoOrden);
                            $("#listaHorarios").html("");
                            //ToggleLoading(2);
                            $(".elimina").show();
                            mostrarJuzgados(datos.data[0].cveGrupoOrden);
                        }else{
                            //alert(datos.text);
                            $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            $("#listaGrupos").html("");
                            //ToggleLoading(2);
                        }
                    } catch (e) {
                        //alert(datos.text);
                        $("#advertencia").html('<span>Ocurrio un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        $("#listaGrupos").html("");
                        //ToggleLoading(2);
                    }
                },
                error: function(objeto, quepaso, otroobj) {
                    //alert("Error al consultar los datos, favor de intentarlo más tarde");
                    $("#error").html('<span>Ocurrio un error al consultar los datos, favor de intenralo mas tarde</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                    $("#listaGrupos").html("");
                    //ToggleLoading(2);
                }
            });
        };

        guardarGrupo = function(){
            var cveGrupoOrden = $("#cveGrupoOrden").val();
            var desGrupoOrden = $("#desGrupoOrden").val();
            var cveJuzgado = $("#cveJuzgado").val();
            if( validarCampos() ) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/gruposordenes/GruposordenesFacade.Class.php",
                    data: {
                        cveGrupoOrden : cveGrupoOrden,
                        desGrupoOrden : desGrupoOrden,
                        cveJuzgado: cveJuzgado,
                        activo: "S",
                        accion : "guarda"},
                    async: true,
                    dataType: "json",
                    beforeSend: function(objeto) {
                        ToggleLoading(1);
                        $(".guarda").hide();
                        $(".consulta").hide();
                        $(".limpia").hide();
                        $(".elimina").hide();
                        $("#info").html('<span>Guardando la informacion, espere un momento</span>').show();
                    },
                    success: function(datos) {
                        $("#info").hide();
                        try {
                            if (datos.totalCount > 0) {
                                //alert(datos.text);
                                $("#cveGrupoOrden").val(datos.data[0].cveGrupoOrden);
                                $("#desGrupoOrden").val(datos.data[0].desGrupoOrden);
                                $("#correcto").html('<span>Datos guardados correctamente</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                $(".consulta").trigger("click");
                                ToggleLoading(2);
                                $(".guarda").show();
                                $(".consulta").show();
                                $(".limpia").show();
                                $("#info").hide();
                                //clean();
                            }else{
                                //alert(datos.text);
                                $("#listaGrupos").html("");
                                $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                ToggleLoading(2);
                                $(".guarda").show();
                                $(".consulta").show();
                                $(".limpia").show();
                            }
                        } catch (e) {
                            //alert(datos.text);
                            $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                            $("#listaGrupos").html("");
                            ToggleLoading(2);
                            $(".guarda").show();
                            $(".consulta").show();
                            $(".limpia").show();
                            $("#info").hide();
                        }
                    },
                    error: function(objeto, quepaso, otroobj) {
                        //alert("Ocurrio un error al guardar los datos, intentalo de nuevo mas tarde!");
                        $('#listaGrupos').html("");
                        $("#error").append('<span>Ocurri&oacute; un error al guardar los datos, favor de consultar con el administrador</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                        ToggleLoading(2);
                        $(".guarda").show();
                        $(".consulta").show();
                        $(".limpia").show();
                        $("#info").hide();
                    }
                });
            }
        };

        borrar = function(){
            bootbox.dialog({
                message: "\u00bf Desea eliminar el registro?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            
                            var cveGrupoOrden = $("#cveGrupoOrden").val();
                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/gruposordenes/GruposordenesFacade.Class.php",
                                data: {
                                cveGrupoOrden : cveGrupoOrden,
                                activo: 'N',
                                accion : "elimina"},
                                async: true,
                                dataType: "json",
                                beforeSend: function(objeto) {
                                    ToggleLoading(1);
                                    $(".guarda").hide();
                                    $(".consulta").hide();
                                    $(".limpia").hide();
                                    $(".elimina").hide();
                                    $("#info").html('<span>Eliminando la informaci&oacute;n, espere un momento</span>').show();
                                },
                                success: function(datos) {
                                    try {
                                        if(datos.totalCount > 0){
                                            $("#correcto").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                            clean();
                                            ToggleLoading(2);
                                            $(".guarda").show();
                                            $(".consulta").show();
                                            $(".limpia").show();
                                            $("#info").hide();
                                        } else {
                                            $("#info").hide();
                                            $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                            clean();
                                            ToggleLoading(2);
                                            $(".guarda").show();
                                            $(".consulta").show();
                                            $(".limpia").show();
                                        }

                                    } catch (e) {
                                        //alert(datos.text);
                                        $("#advertencia").html('<span>Ocurri&oacute; un error: ' + e + '</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                        ToggleLoading(2);
                                        $(".guarda").show();
                                        $(".consulta").show();
                                        $(".limpia").show();
                                        $(".elimina").show();
                                        $("#info").hide();
                                    }
                                },
                                error: function(objeto, quepaso, otroobj) {
                                    //alert("Ocurrio un error al eliminar el registro, favor de intentarlo mas tarde");
                                    $("#error").html('<span>Ocurri&oacute; un error al eliminar el registro, favor de intentarlo mas tarde</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                                    ToggleLoading(2);
                                    $(".guarda").show();
                                    $(".consulta").show();
                                    $(".limpia").show();
                                    $(".elimina").show();
                                    $("#info").hide();
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

        function borrarSeleccionados(){
            bootbox.dialog({
                message: "\u00bf Desea eliminar los registros seleccionados?",
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {
                            var registros = $('input[type=checkbox]:checked').length;
                            if(registros == 0){
                                $(document).scrollTop(200);
                                $("#advertencia").html('<span>Debe seleccionar al menos un registro a eliminar!</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                            } else{
                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/gruposordenes/GruposordenesFacade.Class.php",
                                    data: $("#formRegistros").serialize() + "&accion=bajaRegistros",
                                    async: true,
                                    dataType: "json",
                                    beforeSend: function(objeto) {
                                        $(document).scrollTop(200);
                                        $("#info").html('<span>Eliminando los registros seleccionados, espere un momento por favor</span>').show();
                                        ToggleLoading(1);
                                        $(".guardaTodo").hide();
                                        $(".limpia").hide();
                                        $(".consulta").hide();
                                        $("#borrarSeleccionados").hide();
                                    },
                                    success: function(datos) {
                                        try {
                                            if(datos.totalCount > 0){
                                                $(document).scrollTop(200);
                                                $("#correcto").html('<span>Datos eliminados correctamente</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                                clean();
                                                ToggleLoading(2);
                                                $("#info").hide();
                                                $(".guardaTodo").show();
                                                $(".limpia").show();
                                                $(".consulta").show();
                                                $("#borrarSeleccionados").show();
                                            } else{
                                                $("#info").hide();
                                                $(document).scrollTop(200);
                                                $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                                clean();
                                                ToggleLoading(2);
                                                $(".guardaTodo").show();
                                                $(".limpia").show();
                                                $(".consulta").show();
                                                $("#borrarSeleccionados").show();
                                            }

                                        } catch (e) {
                                            $(document).scrollTop(200);
                                            $("#advertencia").html('<span>' + datos.text + '</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                            ToggleLoading(2);
                                            $("#info").hide();
                                            $(".guardaTodo").show();
                                            $(".limpia").show();
                                            $(".consulta").show();
                                            $("#borrarSeleccionados").show();
                                        }
                                    },
                                    error: function(objeto, quepaso, otroobj) {
                                        $(document).scrollTop(200);
                                        $("#error").html('<span>Ocurri&oacute; un error al borrar los registros!</span>').fadeIn("slow").delay(4000).fadeOut('slow');
                                        ToggleLoading(2);
                                        $("#info").hide();
                                        $(".guardaTodo").show();
                                        $(".limpia").show();
                                        $(".consulta").show();
                                        $("#borrarSeleccionados").show();
                                    }
                                });
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

        function validarCampos(){
            $("*").removeClass("valida-error");

            if ($("#desGrupoOrden").val() == "" ){
                $("#desGrupoOrden").addClass("valida-error");
                $("#advertencia").html('<span>El campo es requerido!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else if ($("#cveJuzgado").val() == null || $("#cveJuzgado").val() == "") {
                $("#cveJuzgado").addClass("valida-error");
                $("#advertencia").html('<span>Debe seleccionar al menos un juzgado del listado correspondiente!</span>').fadeIn('slow').delay(4000).fadeOut('slow');
                return false;
            } else {
                return true;
            }
        }

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

        $(function () {
            mostrarJuzgados(0);
        });

    </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>