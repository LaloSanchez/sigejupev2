<?php
if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    //var_dump($_SESSION);
    date_default_timezone_set('America/Mexico_City');
    $anioActual = date("Y");
    $fechaActual = date("d/m/Y");
    ?>

    <style type="text/css">

        #divDataTableResults{
            overflow-y: auto;
        }
        .row.content {height: 1500px}

        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;} 
        }

        .indicator {
            margin-right:5px;
        }

        .divMenuMini{
            background-color: #e1c665;
            padding: 5px;
            margin: 3px;        
            text-align: center;
            float: left;
            width: 75px;
            border: solid 1px;
            border-radius: 5px;
            height: 65px;
            font-family: Arial;
            font-size: 10px;
        }
        .divMenuMini:hover{
            cursor: pointer;
            background-color: #c8a526;        
            font-weight: bold;
        }
        .closeMenu:after{
            content: " Abrir";
            cursor: pointer;
        }

        #divOpenCloseSerch{
            position: fixed;
            height: 85px;
            width: 25px;
            background-color: #c8a526;
            margin-left: 22%;
            display: none;
        }

        #menuLateral{
            width: 299px;
            background: #93lala;
            /*position: fixed;*/
            height: 100%;
        }
        #barraOcultar{
            width: 35px;
            background: #cecece;
            /*position: fixed;*/
            height: 100%;
        }
        #barraLateralSM{
            background: #FBFBFB;
            height: 100%;
            /*position: fixed;*/
            width: 47px;
        }
        .menu-float{
            width: 100%;
            margin-bottom: 10%;
            padding-top: 65%;
            padding-left: 2px;
            /*padding-bottom:10px;*/
            height: 100px;
            background: #427468;
            border-radius: 3px;
            /*border: 1px solid #000;*/
        }
        .menu-acciones{
            height: 70vh;
        }
        .ocultarPanelVisible{
            position: absolute;
            width: 40px;
            height: 40px;
            float: left;
            overflow: auto;
            left: 300px;
            top: 30vh;
            border: 1px solid #cecece;
            -webkit-border-radius: 6px;
            border-radius: 6px;
        }
        .ocultarPanelNone{
            position: absolute;
            width: 40px;
            height: 40px;
            float: left;
            overflow: auto;
            left: 0px;
            top: 30vh;
            border: 1px solid #cecece;
            -webkit-border-radius: 6px;
            border-radius: 6px;
        }
        .completa{
            left: 3%;
            width: 94%;
        }.compartida{
            left: 3%;
            width: 90%;
        }
        .btn-lg, .btn-group-lg > .btn {
            /*padding: 10px 16px;*/
            /*font-size: 18px;*/
            line-height: 1.33;
            border-radius: 6px;
            margin: 4%;
        }
        .posicionFixed{
            position: absolute;
            width: 356px;
            z-index: 999;
            margin-left: 9%;
        }
        div#contenedor-principal.container-fluid{
            margin-left: 200px;
        }
        div#contenedor-principal.container-fluid{
            margin-left: 0px;
        }
        div#contenedor-principal.container{
            padding: 0px;
            margin: 0px;
        }
        button#button-ocultar-fixed.btn.btn-default.hidden-xs.hidden-sm{
            position: absolute;
            left: 29.7%;
            height: 99%;
            width: 33px;
            top: 0px;
        }

        #menu-botones-float{
            z-index: 999;
        }

        .accionMenuAcciones{
            border: 0px;
            border-top: 1px solid #cecece !important;
            background: #EEEEEE !important;
            color:#786E72;
        }
        .accionMenuAcciones:hover{
            background: #881518 !important;
            color: #fff;
        }

        .texto-vertical{
            width:20px;
            word-wrap: break-word;
            text-align:center;
            line-height:20px;
        }
        .letra-texto-vertical{
            font-family: Helvetica, Arial, sans-serif;
            font-weight: bold;
            font-size: 25px;
            line-height: 1em;
            color: #881518;
            text-shadow: 1px 4px 6px #cecece, 0 0 0 #881518, 1px 4px 6px #eee;
        }

        /* Tooltip search arbol */
        .test + .tooltip > .tooltip-inner {
            background-color: rgba(136, 21, 24, 0.83); 
            color: #FFFFFF; 
            border: 1px solid #881518; 
            padding: 5px;
            font-size: 12px;
        }
        /* Tooltip search arbol on right */
        .test + .tooltip.right > .tooltip-arrow {
            border-right: 5px solid black;
        }
        .t-catalogo{
            width: 100% !important;
            z-index: 200;
        }
        .t-catalogo thead th {
            background-color: #FFF;
            font-size: 12px !important;
        }

        .t-catalogo tbody tr td a.icon{
            font-size: 20px;
            color: rgb(136, 21, 24);
            padding-right: 10px;
        }
        .t-catalogo tbody tr td a.icon:hover{
            font-size: 20px;
            color: rgb(208, 25, 32);
        }
        .t-catalogo td{
            vertical-align: middle !important;
            font-size: 12px;
            max-width: 400px;
            
        }
        .t-catalogo td p{
            max-width: 80%;
        }
        .col_full {
            clear: both;
            float: none;
            margin-right: 0;
            display: block;
            position: relative;
            width: 100%;
            margin-bottom: 50px !important;
        }
        .tabs {
            position: relative;
            margin: 0 0 30px 0;
        }
        .nobottommargin {
            margin-bottom: 0 !important;
        }
        ul.tab-nav:not(.tab-nav-lg) {
            margin: 0;
            border-bottom: 1px solid #DDD;
            list-style: none;
        }
        ul.tab-nav:not(.tab-nav-lg) li {
            float: left;
            border: 1px solid #DDD;
            border-bottom: 0;
            border-left: 0;
            height: 41px;
            text-align: center;
        }
        ul.tab-nav:not(.tab-nav-lg) li a {
            display: block;
            padding: 0 15px;
            color: #444;
            height: 40px;
            line-height: 40px;
            background-color: #F2F2F2;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none !important;
        }
        ul.tab-nav:not(.tab-nav-lg) li.ui-tabs-active a {
            position: relative;
            top: 1px;
            background-color: #FFF;
        }
        .tab-container {
            position: relative;
            padding: 20px 0 0;
        }
        .divider {
            position: relative;
            overflow: hidden;
            margin: 20px 0;
            color: #E5E5E5;
            width: 100%;
        }
        .divider i {
            position: relative;
            width: 18px;
            height: 18px;
            line-height: 1;
            font-size: 18px !important;
            text-align: center;
        }
        .divider:after, .divider.divider-center:before, .divider.divider-center.divider-short:before {
            content: '';
            position: absolute;
            width: 100%;
            top: 8px;
            left: 30px;
            height: 0;
            border-top: 1px solid #EEE;
        }
        .top-space-20{
            padding-top: 20px;
        }
        .top-space-45{
            padding-top: 45px;
        }
        .btn-buscar-div p{
            text-align: right;
            margin-right: 30px;
        }
        #catalogo-content{
            display: none;
            overflow: auto;
        }
        .alerts-messages{
            padding-top: 20px;
            padding-left: 50px;
            padding-right: 50px;
        }
        .alerts-messages .alert{
            color: darkred;
        }
        .th-acciones{
            min-width: 100px;
        }
        table.table {
            max-width: 100% !important;
        }
        .color-success{
            color: rgb(24, 169, 36);
        }
        .btn-add-new{
            margin-top: 25px;
        }
        #btnBuscarCatalogo{
            margin-top: 23px;
        }
        .celda{
            min-width: 100px;
        }
        .paginacion-content{
            text-align: right;
            margin-right: 100px;
        }
        .campo-requerido{
            border-style: solid;
            border-color: red;
        }
        #catalogoTable_filter{
            padding-bottom: 20px;
            text-align: right;
            padding-right: 100px;
        }









    </style>

    <link href="css/generalStyles.css" type="text/css" rel="stylesheet">

    <div id="container-principal" class="container col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin: 0px; padding: 0px; top: 20px;">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5 class="panel-title">
                    Catalogos en el sistema
                </h5>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-4">
                        <h4>Selector de tabla</h4>
                        <p style="text-align: justify;">
                            Selecciona la tabla que quieres editar en el combo "Nombre de la tabla" y pulsa el bot&oacute;n "Buscar cat&aacute;logo".</p>
                        <br/>
                        <h4>Tabla de resultado</h4>
                        <p style="text-align: justify;">
                            Al mostrarse la tabla de resultado podr&aacute;s editar y borrar registros con los botones de la columna "Acciones". 
                            Para agregar un nuevo registro pulsa el bot&oacute;n "Agregar nuevo registro", ubicado al final de la tabla, llena los campos requeridos y pulsa el icono para guardar.
                        </p>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5 top-space-20">
                        <label for="cmbTablaInicial">Nombre de la tabla</label>
                        <select id="cmbTablaInicial" name="cmbTablaInicial" class="form-control" onchange="loadStructure('cmbTablaInicial','cmbTablaInicialId')">
                            <option value="0">Seleccione</option>
                        </select>

                    </div>
                    <div class="col-md-2 top-space-20">
                        <p>
                            <button type="button" class="btn btn-primary" id="btnBuscarCatalogo" name="btnBuscarCatalogo" onclick="loadCatalogo()" title="Boton para consultar catalogos">Buscar catalogo</button>
                        </p>
                    </div>
                </div>
                <div class="divider"><i class="fa fa-info-circle"></i></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group alerts-messages">
                            <div id="divAlertWarningTree" class="alert alert-warning alert-dimdissable">
                                <strong>Advertencia!</strong>
                                <div class="divAlertWarningMsg"></div>
                            </div>
                            <div id="divAlertSuccesTree" class="alert alert-success alert-dimdissable">

                                <strong>Correcto!</strong> Mensaje
                            </div>
                            <div id="divAlertDagerTree" class="alert alert-danger alert-dimdissable">
                                <strong>Error!</strong>
                                <div class="divAlertTreeMsg"></div>
                            </div>
                            <div id="divAlertInfoTree" class="alert alert-info alert-dimdissable">

                                <strong>Informaci&oacute;n!</strong> Mensaje
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="catalogo-content">
                    <div class="col-md-12">
                            <div class="paginacion-content">
                                <p>Registros totales: <strong id="total_registros">0</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mostrando 50 registros por pagina
                                    <label for="no_pagina" style="margin-left: 40px;">Pagina</label>
                                    <select id="no_pagina" class="form-control" style="width:100px; display: inline-block;"></select>
                                <p>
                                <br/>
                            </div>
                            <table id="catalogoTable" class="table t-catalogo table-responsive">
                                <thead></thead>
                                <tbody></tbody>
                                <tfoot></tfoot>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $(document).ready(function () {
            // carga catalogos en select tabla base
            // envio AJAX
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/catalogos/catalogosController.php",
                data: {
                    accion: "getCatalogTables"
                },
                dataType: "json",
                beforeSend: function () {
                    //$("#catalogo-content").empty();
                    //$("#loadTree").show();
                },
                success: function (data) {
                    //dump(data);
                    switch (data.estatus) {
                        case "success" :
                            var option = '';
                            $.each(data.result, function (index, element) {
                                option += '<option value="' + element + '">' + element + '</option>';
                            });
                            $("#cmbTablaInicial").append(option);
                            break;
                        case "error" :
                            
                            break;
                    }
                }, complete: function () {
                    //$("#catalogo-content").slideDown();
                },
                error: function (objeto, quepaso, otroobj) {
                },
            });

            $("#catalogoTable").dataTable({
                "paging": false,
                "retrieve": true,
                "order": []
            });

            $('body').on('keyup','.toUppercase',function() {
                var valor = $(this).val();
                $(this).val(valor.toUpperCase());
            });

            // editar registros del catalogo
            $('#catalogo-content').on('click','.edit-reg-catalog',function(e){
                e.preventDefault();
                var editButton = $(this);
                $(editButton).closest('td').find('.save').addClass('do-save');
                var celdas = $(editButton).closest('tr').find('.celda');
                celdas.each(function (index,celda){
                    // verificar si es editable
                    if ($(celda).hasClass('normal')) {
                        // marcar que ya esta siendo editada
                        $(celda).removeClass('normal');
                        $(celda).addClass('editando');
                        // guardar contenido actual
                        var contenido = $(celda).html();
                        // crear input, bloqueado en su caso
                        if ($(celda).data('editable') == false) {
                            var status = ' disabled="disabled" ';
                        }else{
                            var status = '';
                        }
                        $(celda).html('');
                        if ($(celda).hasClass('MUL')) {
                            // cargar las opciones de la tabla relacionada
                            var relatedTable = $(celda).data('referencedtable');
                            var relatedID = $(celda).data('encabezado');
                            var selectedValue = contenido;
                            drawRelatedCombo(relatedTable,relatedID,$(celda),selectedValue);
                        }else if($(celda).data('encabezado') == 'activo'){
                            var input = '<select data-opcionactivo="'+contenido+'" class="form-control opcionActivo"><option value="0">SELECCIONE</option><option value="S">S</option><option value="N">N</option></select>';
                            $(celda).append(input);
                        }else{
                            var input = '<input '+status+' class="form-control toUppercase" value="'+contenido+'" type="text" ></input>';
                            // asignar input nuevo a celda
                            $(celda).append(input);
                        }
                    }
                }).promise().done(function() {
                    $(editButton).closest('tr').find(':input:enabled:first').focus();
                    // si el combo es de tipo "activo" asignar 
                    var combosDeActivo = $(editButton).closest('tr').find('.opcionActivo');
                    combosDeActivo.each(function(element){
                        if ($(this).data('opcionactivo') != undefined) {
                            $(this).find('option[value="'+$(this).data('opcionactivo')+'"]').attr('selected','selected');
                        }
                    });
                    $(editButton).closest('tr').find('.inputTypeDate input').datepicker({
                        format: "yyyy-mm-dd"
                    });
                });
            });

            // guardar/actualizar registros del catalogo
            $('#catalogo-content').on('click','.save-reg-catalog',function(e){
                e.preventDefault();
                var saveButton = $(this);
                if (!$(saveButton).hasClass('do-save')) {
                    return false;
                }
                var fila = $(saveButton).closest('tr');
                var celdas = $(saveButton).closest('tr').find('.celda');
                var tableName = $(saveButton).data('tablename');
                var clavePrimaria = '';
                var clavePrimariaValor = '';
                var row = {};
                celdas.each(function (index,celda){
                    if ($(celda).hasClass('PRI')) {
                        // es la clave primaria
                        clavePrimaria = $(celda).data('encabezado');
                        clavePrimariaValor = $(celda).find('input').val();
                    }else{
                        var columna = $(celda).data('encabezado');
                        var element = $(celda).find(':input:eq(0)');
                        element.removeClass('campo-requerido');
                        var tipo_input = element.prop('type').toLowerCase();
                        // obtener valor del input
                        switch (tipo_input){
                            case 'text':
                                valor = element.val()
                                break;
                            case 'select-one':
                                valor = $(":selected",element).val();
                                break;
                        }
                        row[columna] = valor;
                    }
                    //return false;
                });
                // validaciones
                var validaciones_ok = true;
                celdas.each(function (index,celda){
                    if ($(celda).data('editable') == true && $(celda).hasClass('required')) {
                        var element = $(celda).find(':input:eq(0)');
                        var tipo_input = element.prop('type').toLowerCase();
                        // obtener valor del input
                        switch (tipo_input){
                            case 'text':
                                valor = element.val()
                                break;
                            case 'select-one':
                                valor = $(":selected",element).val();
                                break;
                        }
                        if (valor == 0 || valor == '') {
                            bootbox.alert('El campo "'+$(celda).data('encabezado')+'" es requerido');
                            element.focus();
                            element.addClass('campo-requerido');
                            validaciones_ok = false;
                            return false;
                        }
                    }
                });
                if (!validaciones_ok) {
                    return false;
                }
                // envio AJAX
                $.ajax({
                    type: "POST",
                    url: "../controladores/sigejupe/catalogos/catalogosController.php",
                    data: {
                        accion: "saveRow", primaryKey : clavePrimaria, primaryKeyValue : clavePrimariaValor, tableName : tableName, rowData:row
                    },
                    dataType: "json",
                    beforeSend: function () {
                        //$("#catalogoTable").DataTable().destroy();
                    },
                    success: function (data) {
                        switch (data.estatus) {
                            case "success" :
                                celdas.each(function (index,celda){
                                    // verificar si se esta editando
                                    if ($(celda).hasClass('editando')) {
                                        // marcar que ya no se edita, se regresa a normal
                                        $(celda).removeClass('editando');
                                        $(celda).addClass('normal');
                                        // guardar contenido actual
                                        var element = $(celda).find(':input:eq(0)');
                                        var tipo_input = element.prop('type').toLowerCase();
                                        // obtener valor del input
                                        switch (tipo_input){
                                            case 'text':
                                                valor = element.val()
                                                break;
                                            case 'select-one':
                                                valor = $(":selected",element).val();
                                                break;
                                        }
                                        // regresar el contenido a celda normal
                                        $(celda).html(valor);
                                        // para las fechas de actualizacion
                                        if ($(celda).data('encabezado') == 'fechaActualizacion' && data.dateActual != '') {
                                            $(celda).html(data.dateActual);
                                        }
                                        // para los nuevos insertados
                                        if ( ($(celda).data('encabezado') == 'fechaRegistro' || $(celda).data('encabezado') == 'fechaActualizacion') && data.insertedDate != undefined) {
                                            $(celda).html(data.insertedDate);
                                        }
                                    }
                                });
                                // quitar clase de guardado al boton
                                $(saveButton).removeClass('do-save');
                                // verificar si fue guardado en base de datos
                                $(fila).find('.edit-reg-catalog').attr('style','');
                                // verificar que el boton activo este habilitado
                                if ( !$(fila).find('.remove-reg-catalog').hasClass('enBd') ) {
                                    $('#btnAddNew').attr('disabled',false);
                                }
                                // marcar como guardado en base de datos
                                $(fila).find('.remove-reg-catalog').addClass('enBd');
                                // si se inserto nuevo registro, la funcion regresa lastID y tambien insertedDate para ponerlos en los inputs del nuevo registro
                                if (data.lastID != undefined) {
                                    $(saveButton).closest('tr').find('.PRI:first').html(data.lastID);
                                    $(saveButton).closest('tr').find('.PRI:first').attr('data-id',data.lastID);
                                }
                                // animacion de que todo se guardo bien
                                $(fila).fadeTo('10',0.3,function(){
                                    $(fila).fadeTo('10',1);
                                });
                                // aumentar contador de registros totales
                                var registros_totales = parseInt($('#total_registros').html());
                                $('#total_registros').html(registros_totales+1);
                                // agregar nueva fila a datatable
                                var table = $("#catalogoTable").dataTable({
                                    "paging": false,
                                    "retrieve": true,
                                    "order": ["1","asc"],
                                    "columnDefs": [{ orderable: false, targets: 0 }],
                                    "fixedHeader": true,
                                    "language": {
                                      "emptyTable": "No se encontraron resultados"
                                    }
                                });
                                table.api().row.add(fila).draw();
                                break;
                            case "error" :
                                $("#divAlertDagerTree .divAlertTreeMsg").html(data.msg);
                                //$("#divAlertDagerTree").slideDown();
                                $("#divAlertDagerTree").slideDown('slow',function () {
                                    $("#divAlertDagerTree").delay(5000).slideUp('slow');
                                });
                                $("html,body").animate({
                                    scrollTop: $("#divAlertDagerTree").offset().top-60
                                }, 'slow');
                                break;
                        }
                    }, complete: function (data) {

                    },
                    error: function (objeto, quepaso, otroobj) {
                    },
                });
            });

            // remove registros del catalogo
            $('#catalogo-content').on('click','.remove-reg-catalog',function(e){
                e.preventDefault();
                var eraseButton = $(this);
                bootbox.confirm("<br/>¿Est&aacute;s seguro que quieres eliminar el registro?<br/><br/>&Eacute;sta acci&oacute;n no podr&aacute; deshacerse", function(result) {
                  if (result === true) {
                    var fila = $(eraseButton).closest('tr');
                    var registro_eliminado = false;
                    // verificar si esta solo en la vista o en la base de datos
                    if ($(eraseButton).hasClass('enBd')) {
                        // se tiene que borrar desde la base de datos
                        var tableName = $(eraseButton).data('tablename');
                        var clavePrimariaValor = $(eraseButton).closest('tr').find('.PRI:first').data('id');
                        var clavePrimaria = $(eraseButton).closest('tr').find('.PRI:first').data('encabezado');
                        // envio AJAX
                        $.ajax({
                            type: "POST",
                            url: "../controladores/sigejupe/catalogos/catalogosController.php",
                            data: {
                                'accion': "eraseRow", 'tableName' : tableName, 'primaryKey' : clavePrimaria, 'primaryKeyValue' : clavePrimariaValor
                            },
                            dataType: "json",
                            beforeSend: function () {
                                //$("#catalogo-content").empty();
                                //$("#loadTree").show();
                            },
                            success: function (data) {
                                switch (data.estatus) {
                                    case "success" :
                                        $(fila).fadeOut('slow',function () {
                                            $(this).remove();
                                        });
                                        var registro_eliminado = true;
                                        break;
                                    case "error" :
                                        $("#divAlertDagerTree .divAlertTreeMsg").html(data.msg);
                                        //$("#divAlertDagerTree").slideDown();
                                        $("#divAlertDagerTree").slideDown('slow',function () {
                                            $("#divAlertDagerTree").delay(5000).slideUp('slow');
                                        });
                                        $("html,body").animate({
                                            scrollTop: $("#divAlertDagerTree").offset().top-60
                                        }, 'slow');
                                        break;
                                }
                            }, complete: function (data) {
                                //$("#catalogo-content").slideDown();
                            },
                            error: function (objeto, quepaso, otroobj) {
                            },
                        });
                    }else{
                        // borrar solo en la vista
                        $(fila).fadeOut('slow');
                        $(fila).remove();
                        $('#btnAddNew').attr('disabled',false);
                        var registro_eliminado = true;
                    }
                    if (registro_eliminado = true) {
                        // disminuir contador de registros totales
                        var registros_totales = parseInt($('#total_registros').html());
                        $('#total_registros').html(registros_totales-1);
                        // agregar nueva fila a datatable
                        var table = $("#catalogoTable").dataTable({
                            "paging": false,
                            "retrieve": true,
                            "order": ["1","asc"],
                            "columnDefs": [{ orderable: false, targets: 0 }],
                            "fixedHeader": true,
                            "language": {
                              "emptyTable": "No se encontraron resultados"
                            }
                        });
                        table.api().row(fila).remove().draw();
                    }
                  }
                }); 
            });

            // nuevo registro
            $('#catalogo-content').on('click','#btnAddNew',function(e){
                e.preventDefault();
                var newButton = $(this);
                var filaClon = $(".trOriginal").clone();


                $(filaClon).appendTo($('#catalogoTable tbody')).promise().done(function() {
                    var nuevaFila = $('#catalogoTable tbody').find('.trOriginal');
                    var celdas = $(nuevaFila).find('.celda');
                    celdas.each(function (index,celda){
                        // verificar si es editable
                        if ($(celda).hasClass('normal')) {
                            // marcar que ya esta siendo editada
                            $(celda).removeClass('normal');
                            $(celda).addClass('editando');
                            // crear input, bloqueado en su caso
                            if ($(celda).data('editable') == false) {
                                var status = ' disabled="disabled" ';
                            }else{
                                var status = '';
                            }
                            $(celda).html('');
                            if ($(celda).hasClass('MUL')) {
                                // cargar las opciones de la tabla relacionada
                                var relatedTable = $(celda).data('referencedtable');
                                var relatedID = $(celda).data('encabezado');
                                drawRelatedCombo(relatedTable,relatedID,$(celda));
                            }else if($(celda).data('encabezado') == 'activo'){
                                var input = '<select class="form-control"><option value="0">SELECCIONE</option><option value="S">S</option><option value="N">N</option></select>';
                                $(celda).append(input);
                            }else{
                                var input = '<input '+status+' class="form-control toUppercase" value="" type="text" ></input>';
                                // asignar input nuevo a celda
                                $(celda).append(input);
                            }
                        }
                    }).promise().done(function() {
                        // remover id de original y mostrar
                        $(nuevaFila).removeAttr('id');
                        $(nuevaFila).fadeIn('slow');
                        // botones
                        $(nuevaFila).find('.edit-reg-catalog').attr('style','display:none');
                        $(nuevaFila).find('.remove-reg-catalog').removeClass('enBd');
                        $(nuevaFila).find('.save-reg-catalog').addClass('do-save');
                        
                        // focus al primer input habilitado
                        $(nuevaFila).find(':input:enabled:first').focus();
                        // quitar clase original
                        $(nuevaFila).removeClass('trOriginal');
                        $('#btnAddNew').attr('disabled','disabled');
                        // colocar datepicker a los inputs con class inputTypeDate
                        $(nuevaFila).find('.inputTypeDate input').datepicker({
                            format: "yyyy-mm-dd"
                        });
                    });

                });
                //$('#catalogoTable tbody').append(nuevaFila);
            });

            // combo de pagina
            $('#no_pagina').on('change',function(e) {
                var no_pagina = $("option:selected", $(this)).val();
                loadCatalogo(no_pagina);
            });
        });

        function loadStructure(cmbOrigen,cmbDestino) {
            // carga estructura de la tabla en el combo destino
            $("#"+cmbDestino).html(' ');
            $("#catalogo-content").hide();
            //$("#"+cmbDestino).append('<option value ="0">Seleccione</option>');
            // nombre de la tabla
            var tableName = $("option:selected", $('#'+cmbOrigen)).val();
            //alert(cmbDestino);
            if (tableName == 0) {
                $("#"+cmbDestino).append('<option value="0">Seleccione</option>');
                return false;
            }
            // envio AJAX
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/catalogos/catalogosController.php",
                data: {
                    accion: "getTableStructure", tableName : tableName
                },
                dataType: "json",
                beforeSend: function () {
                    //$("#catalogo-content").empty();
                    //$("#loadTree").show();
                },
                success: function (data) {
                    switch (data.estatus) {
                        case "success" :
                            var selected = '';
                            var option = '<option value="0">Seleccione</option>';
                            $.each(data.result, function (index, element) {
                                if (element.fieldKey == 'PRI') {
                                    selected = ' selected = "selected" ';
                                }else{
                                    selected = '';
                                }
                                option += '<option '+selected+' value="' + element.fieldName + '">' + element.fieldName + '</option>';
                            });
                            //alert(option);
                            $("#"+cmbDestino).append(option);
                            break;
                        case "error" :
                            $("#divAlertDagerTree .divAlertTreeMsg").html(data.msg);
                            //$("#divAlertDagerTree").slideDown();
                            $("#divAlertDagerTree").slideDown('slow',function () {
                                $("#divAlertDagerTree").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertDagerTree").offset().top-60
                            }, 'slow');
                            break;
                    }
                }, complete: function () {
                    //$("#catalogo-content").slideDown();
                },
                error: function (objeto, quepaso, otroobj) {
                },
            });
        }

        function loadCatalogo(no_pagina = 0) {
            var tblInicial = $("option:selected", $('#cmbTablaInicial')).val();
            if (tblInicial == 0) {
                $("#divAlertWarningTree .divAlertWarningMsg").html('Debes seleccionar la tabla base');
                //$("#divAlertDagerTree").slideDown();
                $("#divAlertWarningTree").slideDown('slow',function () {
                    $("#divAlertWarningTree").delay(3000).slideUp('slow');
                });
                return false;
            }
            // envio AJAX
            $.ajax({
                type: "POST",
                url: "../controladores/sigejupe/catalogos/catalogosController.php",
                data: {
                    "accion": "loadCatalogo", "tableName" : tblInicial, "noPagina" : no_pagina
                },
                dataType: "json",
                beforeSend: function () {
                    //$("#catalogo-content").empty();
                    //$("#loadTree").show();
                },
                success: function (data) {
                    switch (data.estatus) {
                        case "success" :
                            drawTable(data);
                            $("html,body").animate({
                                scrollTop: $("#catalogo-content").offset().top-20
                            }, 'slow');
                            break;
                        case "error" :
                            $("#divAlertDagerTree .divAlertTreeMsg").html(data.msg);
                            //$("#divAlertDagerTree").slideDown();
                            $("#divAlertDagerTree").slideDown('slow',function () {
                                $("#divAlertDagerTree").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertDagerTree").offset().top-60
                            }, 'slow');
                            break;
                    }
                }, complete: function (data) {
                    //$("#catalogo-content").slideDown();
                },
                error: function (objeto, quepaso, otroobj) {
                },
            });
        }

        function drawTable(data) {
            $("#catalogoTable").DataTable().destroy();
            // encabezado de la tabla
            $("#catalogoTable thead").empty();
            var headers = '<tr>';
            headers +=       '<th class="th-acciones">Acciones</th>';
            $.each(data.encabezados, function (index, element) {
                headers +=   '<th>'+element.field+'</th>';
            });
            headers +=    '</tr>';
            $("#catalogoTable thead").append(headers);

            // body tabla
            $("#catalogoTable tbody").empty();

            if (data.registros != undefined) {
                // con registros
                var body = '';
                $.each(data.registros, function (index, registro) {
                    body +=  '<tr>'
                                +'<td>'
                                    +'<a href="#" class="edit-reg-catalog icon pencil" title="Editar"><i class="fa fa-pencil"></i></a>'
                                    +'<a href="#" data-tablename="'+data.tableName+'" class="save-reg-catalog icon save" title="Guardar"><i class="fa fa-save"></i></a>'
                                    +'<a href="#" data-tablename="'+data.tableName+'" class="remove-reg-catalog enBd icon trash" title="Eliminar"><i class="fa fa-trash-o"></i></a>'
                                +'</td>';
                                $.each(data.encabezados, function (index2, encabezado) {
                                    // llave primaria
                                    if (encabezado.key == 'PRI' || encabezado.field == 'fechaRegistro' || encabezado.field == 'fechaActualizacion') {
                                        var editable = ' data-editable = "false" data-id = "'+registro[encabezado.field]+'" ';
                                        var style = ' white-space: nowrap; ';
                                    }else{
                                        var editable = ' data-editable = "true" ';
                                        var style= '';
                                    }
                                    // llave foranea
                                    if (encabezado.referencedTable != '') {
                                        var referencedTable = ' data-referencedTable = "'+encabezado.referencedTable+'" ';
                                    }else{
                                        var referencedTable = '';
                                    }
                                    // campos de tipo date
                                    if (encabezado.type == 'date') {
                                        var tipoDate = ' inputTypeDate ';
                                    }else{
                                        var tipoDate = '';
                                    }
                                    // clase para campos requeridos
                                    if (encabezado.null == 'NO') {
                                        // es requerido
                                        var requerido = ' required ';
                                    }else{
                                        // puede ir vacio
                                        var requerido = '';
                                    }
                                    body += '<td data-encabezado="'+encabezado.field+'" '+referencedTable+' class="celda normal '+encabezado.key+tipoDate+requerido+' " '+editable+' style="'+style+'">'+registro[encabezado.field]+'</td>';
                                });
                            +'</tr>';
                });
                $("#catalogoTable tbody").append(body);
            }else{
                // sin registros
                // data tables muestra "No data available in table"
            }

            $("#catalogo-content").show();

            // paginacion
            $('#total_registros').html(data.total_registros);
            $('#no_pagina').empty();
            for (var i = 1; i <= data.total_paginas; i++) {
                if (data.pagina_actual == i) {
                    var selected = ' selected="selected" ';
                }else{
                    var selected = '';
                }
                $('#no_pagina').append('<option '+selected+' >'+i+'</option>');
            }

            // footer de la tabla
            $("#catalogoTable tfoot").empty();
            var foot = '';
            // para luego clonar y usarlo para nuevos registros
                
            foot += '<tr>'
                        +'<td colspan="100%">'
                            +'<button type="button" class="btn btn-default btn-add-new" id="btnAddNew" name="btnAddNew" title="Boton para agregar nuevo">Agregar nuevo registro</button>'
                        +'</td>'
                    +'</tr>'
                    +'<tr class="trOriginal" style="display:none">'
                        +'<td>'
                            +'<a href="#" class="edit-reg-catalog icon pencil" title="Editar"><i class="fa fa-pencil"></i></a>'
                            +'<a href="#" data-tablename="'+data.tableName+'" class="save-reg-catalog icon save" title="Guardar"><i class="fa fa-save"></i></a>'
                            +'<a href="#" data-tablename="'+data.tableName+'" class="remove-reg-catalog enBd icon trash" title="Eliminar"><i class="fa fa-trash-o"></i></a>'
                        +'</td>';
                        $.each(data.encabezados, function (index2, encabezado) {
                            // llave primaria
                            if (encabezado.key == 'PRI' || encabezado.field == 'fechaRegistro' || encabezado.field == 'fechaActualizacion') {
                                var editable = ' data-editable = "false" data-id = "" ';
                                var style = ' white-space: nowrap; ';
                            }else{
                                var editable = ' data-editable = "true" ';
                                var style= '';
                            }
                            // llave foranea
                            if (encabezado.referencedTable != '') {
                                var referencedTable = ' data-referencedTable = "'+encabezado.referencedTable+'" ';
                            }else{
                                var referencedTable = '';
                            }
                            // campos de tipo date
                            if (encabezado.type == 'date') {
                                var tipoDate = ' inputTypeDate ';
                            }else{
                                var tipoDate = '';
                            }
                            // clase para campos requeridos
                            if (encabezado.null == 'NO') {
                                // es requerido
                                var requerido = ' required ';
                            }else{
                                // puede ir vacio
                                var requerido = '';
                            }
                            foot += '<td data-encabezado="'+encabezado.field+'" '+referencedTable+' class="celda normal '+encabezado.key+tipoDate+requerido+' " '+editable+' style="'+style+'"></td>';
                        });
            foot +='</tr>';
            $("#catalogoTable tfoot").append(foot);

            $("#catalogoTable").dataTable({
                "paging": false,
                "retrieve": true,
                "order": ["1","asc"],
                "columnDefs": [{ orderable: false, targets: 0 }],
                "fixedHeader": true,
                "language": {
                  "emptyTable": "No se encontraron resultados"
                }
            });

            
        }

        function drawRelatedCombo(relatedTable,relatedID,celda,selectedValue = 0){
            // busca la tabla relacionada y el campo y regresa un select con los valores disponibles
            // envio AJAX
            $.ajax({
                type: 'POST',
                url: '../controladores/sigejupe/catalogos/catalogosController.php',
                data: {
                    'accion': 'loadRelatedCombo',
                    'relatedTable': relatedTable,
                    'relatedID': relatedID
                },
                dataType: "json",
                //async:false,
                beforeSend: function () {
                    
                },
                success: function (datos) {
                    switch (datos.estatus) {
                        case "success" :
                            var combo = '<select class="form-control"><option value="0">(0) SELECCIONE</option>';
                            var result = datos.result;
                            $(result).each(function (index,element){
                                if (selectedValue == element.valor) {
                                    var selected = ' selected="selected" ';
                                }else{
                                    var selected = '';
                                }
                                if (element.descripcion == undefined) {
                                    var descripcion = '';
                                }else{
                                    var descripcion = element.descripcion;
                                }
                                combo += '<option '+selected+' value="'+element.valor+'">('+element.valor+') '+descripcion+'</option>';
                            });
                            combo += '</select>';
                            $(celda).append(combo);
                            break;
                        case "error" :
                            $("#divAlertDagerTree .divAlertTreeMsg").html(datos.msg);
                            $("#divAlertDagerTree").slideDown('slow',function () {
                                $("#divAlertDagerTree").delay(5000).slideUp('slow');
                            });
                            $("html,body").animate({
                                scrollTop: $("#divAlertDagerTree").offset().top-60
                            }, 'slow');
                            break;
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                },complete: function () {
                    // no se cargo el combo pues son muchos los registros
                    if( $(celda).html() == '' ){
                        // no se creo el combo, mandar input normal con el valor que tenia
                        if (selectedValue != 0) {
                            var valor_anterior = selectedValue;
                        }else{
                            var valor_anterior = '';
                        }
                        $(celda).append('<input class="form-control toUppercase" value="'+valor_anterior+'" type="text" ></input>');
                    }
                }
            });
        }

        

        function dump(obj) {
            var out = '';
            for (var i in obj) {
                out += i + ": " + obj[i] + "\n";
            }

            alert(out);

            // or, if you wanted to avoid alerts...

            var pre = document.createElement('pre');
            pre.innerHTML = out;
            document.body.appendChild(pre);
        }
    </script>
    <div class="webui-popover-backdrop" style="display: none;">
    </div>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>