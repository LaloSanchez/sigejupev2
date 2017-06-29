<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
//    var_dump($_SESSION);
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

        .panel.with-nav-tabs .panel-heading{
            padding: 5px 5px 0 5px;
        }
        .panel.with-nav-tabs .nav-tabs{
            border-bottom: none;
        }
        .panel.with-nav-tabs .nav-justified{
            margin-bottom: -1px;
        }
        /********************************************************************/
        /*** PANEL DEFAULT ***/
        .with-nav-tabs.panel-default .nav-tabs > li > a,
        .with-nav-tabs.panel-default .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
            color: #777;
        }
        .with-nav-tabs.panel-default .nav-tabs > .open > a,
        .with-nav-tabs.panel-default .nav-tabs > .open > a:hover,
        .with-nav-tabs.panel-default .nav-tabs > .open > a:focus,
        .with-nav-tabs.panel-default .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-default .nav-tabs > li > a:focus {
            color: #777;
            background-color: #ddd;
            border-color: transparent;
        }
        .with-nav-tabs.panel-default .nav-tabs > li.active > a,
        .with-nav-tabs.panel-default .nav-tabs > li.active > a:hover,
        .with-nav-tabs.panel-default .nav-tabs > li.active > a:focus {
            color: #555;
            background-color: #fff;
            border-color: #ddd;
            border-bottom-color: transparent;
        }
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu {
            background-color: #f5f5f5;
            border-color: #ddd;
        }
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a {
            color: #777;   
        }
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
            background-color: #ddd;
        }
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a,
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
        .with-nav-tabs.panel-default .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
            color: #fff;
            background-color: #555;
        }
        /********************************************************************/
        /*** PANEL PRIMARY ***/
        .with-nav-tabs.panel-primary .nav-tabs > li > a,
        .with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
            color: #fff;
        }
        .with-nav-tabs.panel-primary .nav-tabs > .open > a,
        .with-nav-tabs.panel-primary .nav-tabs > .open > a:hover,
        .with-nav-tabs.panel-primary .nav-tabs > .open > a:focus,
        .with-nav-tabs.panel-primary .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-primary .nav-tabs > li > a:focus {
            color: #fff;
            background-color: #3071a9;
            border-color: transparent;
        }
        .with-nav-tabs.panel-primary .nav-tabs > li.active > a,
        .with-nav-tabs.panel-primary .nav-tabs > li.active > a:hover,
        .with-nav-tabs.panel-primary .nav-tabs > li.active > a:focus {
            color: #428bca;
            background-color: #fff;
            border-color: #428bca;
            border-bottom-color: transparent;
        }
        .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu {
            background-color: #428bca;
            border-color: #3071a9;
        }
        .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a {
            color: #fff;   
        }
        .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
        .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
            background-color: #3071a9;
        }
        .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a,
        .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
        .with-nav-tabs.panel-primary .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
            background-color: #4a9fe9;
        }
        /********************************************************************/
        /*** PANEL SUCCESS ***/
        .with-nav-tabs.panel-success .nav-tabs > li > a,
        .with-nav-tabs.panel-success .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-success .nav-tabs > li > a:focus {
            color: #3c763d;
        }
        .with-nav-tabs.panel-success .nav-tabs > .open > a,
        .with-nav-tabs.panel-success .nav-tabs > .open > a:hover,
        .with-nav-tabs.panel-success .nav-tabs > .open > a:focus,
        .with-nav-tabs.panel-success .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-success .nav-tabs > li > a:focus {
            color: #3c763d;
            background-color: #d6e9c6;
            border-color: transparent;
        }
        .with-nav-tabs.panel-success .nav-tabs > li.active > a,
        .with-nav-tabs.panel-success .nav-tabs > li.active > a:hover,
        .with-nav-tabs.panel-success .nav-tabs > li.active > a:focus {
            color: #3c763d;
            background-color: #fff;
            border-color: #d6e9c6;
            border-bottom-color: transparent;
        }
        .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu {
            background-color: #dff0d8;
            border-color: #d6e9c6;
        }
        .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a {
            color: #3c763d;   
        }
        .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
        .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
            background-color: #d6e9c6;
        }
        .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a,
        .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
        .with-nav-tabs.panel-success .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
            color: #fff;
            background-color: #3c763d;
        }
        /********************************************************************/
        /*** PANEL INFO ***/
        .with-nav-tabs.panel-info .nav-tabs > li > a,
        .with-nav-tabs.panel-info .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-info .nav-tabs > li > a:focus {
            color: #31708f;
        }
        .with-nav-tabs.panel-info .nav-tabs > .open > a,
        .with-nav-tabs.panel-info .nav-tabs > .open > a:hover,
        .with-nav-tabs.panel-info .nav-tabs > .open > a:focus,
        .with-nav-tabs.panel-info .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-info .nav-tabs > li > a:focus {
            color: #31708f;
            background-color: #bce8f1;
            border-color: transparent;
        }
        .with-nav-tabs.panel-info .nav-tabs > li.active > a,
        .with-nav-tabs.panel-info .nav-tabs > li.active > a:hover,
        .with-nav-tabs.panel-info .nav-tabs > li.active > a:focus {
            color: #31708f;
            background-color: #fff;
            border-color: #bce8f1;
            border-bottom-color: transparent;
        }
        .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu {
            background-color: #d9edf7;
            border-color: #bce8f1;
        }
        .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a {
            color: #31708f;   
        }
        .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
        .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
            background-color: #bce8f1;
        }
        .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a,
        .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
        .with-nav-tabs.panel-info .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
            color: #fff;
            background-color: #31708f;
        }
        /********************************************************************/
        /*** PANEL WARNING ***/
        .with-nav-tabs.panel-warning .nav-tabs > li > a,
        .with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
            color: #8a6d3b;
        }
        .with-nav-tabs.panel-warning .nav-tabs > .open > a,
        .with-nav-tabs.panel-warning .nav-tabs > .open > a:hover,
        .with-nav-tabs.panel-warning .nav-tabs > .open > a:focus,
        .with-nav-tabs.panel-warning .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-warning .nav-tabs > li > a:focus {
            color: #8a6d3b;
            background-color: #faebcc;
            border-color: transparent;
        }
        .with-nav-tabs.panel-warning .nav-tabs > li.active > a,
        .with-nav-tabs.panel-warning .nav-tabs > li.active > a:hover,
        .with-nav-tabs.panel-warning .nav-tabs > li.active > a:focus {
            color: #8a6d3b;
            background-color: #fff;
            border-color: #faebcc;
            border-bottom-color: transparent;
        }
        .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu {
            background-color: #fcf8e3;
            border-color: #faebcc;
        }
        .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a {
            color: #8a6d3b; 
        }
        .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
        .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
            background-color: #faebcc;
        }
        .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a,
        .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
        .with-nav-tabs.panel-warning .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
            color: #fff;
            background-color: #8a6d3b;
        }
        /********************************************************************/
        /*** PANEL DANGER ***/
        .with-nav-tabs.panel-danger .nav-tabs > li > a,
        .with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
            color: #a94442;
        }
        .with-nav-tabs.panel-danger .nav-tabs > .open > a,
        .with-nav-tabs.panel-danger .nav-tabs > .open > a:hover,
        .with-nav-tabs.panel-danger .nav-tabs > .open > a:focus,
        .with-nav-tabs.panel-danger .nav-tabs > li > a:hover,
        .with-nav-tabs.panel-danger .nav-tabs > li > a:focus {
            color: #a94442;
            background-color: #ebccd1;
            border-color: transparent;
        }
        .with-nav-tabs.panel-danger .nav-tabs > li.active > a,
        .with-nav-tabs.panel-danger .nav-tabs > li.active > a:hover,
        .with-nav-tabs.panel-danger .nav-tabs > li.active > a:focus {
            color: #a94442;
            background-color: #fff;
            border-color: #ebccd1;
            border-bottom-color: transparent;
        }
        .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu {
            background-color: #f2dede; /* bg color */
            border-color: #ebccd1; /* border color */
        }
        .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a {
            color: #a94442; /* normal text color */  
        }
        .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:hover,
        .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > li > a:focus {
            background-color: #ebccd1; /* hover bg color */
        }
        .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a,
        .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:hover,
        .with-nav-tabs.panel-danger .nav-tabs > li.dropdown .dropdown-menu > .active > a:focus {
            color: #fff; /* active text color */
            background-color: #a94442; /* active bg color */
        }
        .tags a{border:1px solid #DDD;display:inline-block;color:#717171;background:#FFF;-webkit-box-shadow:0 1px 1px 0 rgba(180,180,180,0.1);box-shadow:0 1px 1px 0 rgba(180,180,180,0.1);-webkit-transition:all .1s ease-in-out;-moz-transition:all .1s ease-in-out;-o-transition:all .1s ease-in-out;-ms-transition:all .1s ease-in-out;transition:all .1s ease-in-out;border-radius:2px;margin:0 3px 6px 0;padding:5px 10px}
        .tags a:hover{border-color:#08C;}
        .tags a.primary{color:#FFF;background-color:#428BCA;border-color:#357EBD}
        .tags a.success{color:#FFF;background-color:#5CB85C;border-color:#4CAE4C}
        .tags a.info{color:#FFF;background-color:#5BC0DE;border-color:#46B8DA}
        .tags a.warning{color:#FFF;background-color:#F0AD4E;border-color:#EEA236}
        .tags a.danger{color:#FFF;background-color:#D9534F;border-color:#D43F3A}
        .well {
            min-height: 0px !important;
        }
        .checkbox label:after, 
        .radio label:after {
            content: '';
            display: table;
            clear: both;
        }

        .checkbox .cr,
        .radio .cr {
            position: relative;
            display: inline-block;
            border: 1px solid #a9a9a9;
            border-radius: .25em;
            width: 1.3em;
            height: 1.3em;
            float: left;
            margin-right: .5em;
        }

        .radio .cr {
            border-radius: 50%;
        }

        .checkbox .cr .cr-icon,
        .radio .cr .cr-icon {
            position: absolute;
            font-size: .8em;
            line-height: 0;
            top: 50%;
            left: 20%;
        }

        .radio .cr .cr-icon {
            margin-left: 0.04em;
        }

        .checkbox label input[type="checkbox"],
        .radio label input[type="radio"] {
            display: none;
        }

        .checkbox label input[type="checkbox"] + .cr > .cr-icon,
        .radio label input[type="radio"] + .cr > .cr-icon {
            transform: scale(3) rotateZ(-20deg);
            opacity: 0;
            transition: all .3s ease-in;
        }

        .checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
        .radio label input[type="radio"]:checked + .cr > .cr-icon {
            transform: scale(1) rotateZ(0deg);
            opacity: 1;
        }

        .checkbox label input[type="checkbox"]:disabled + .cr,
        .radio label input[type="radio"]:disabled + .cr {
            opacity: .5;
        }
    </style>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Tocas asignadas
            </h5>
        </div>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="panel with-nav-tabs panel-success">
                    <div class="panel-body">
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
                        <div class="tab-content"  style="padding-top: 1%;padding-bottom: 4.5%;">
                            <div class="tab-pane fade in active" id="tab1success">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-md-1">
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-12">Fecha Inicio</label>                                                               
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">                                                                
                                                <div class="col-md-12">
                                                    <input type="text" id="txtfechaInicialAPELACIONES" placeholder="FECHA INICIO" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" />
                                                </div>                                
                                            </div>
                                        </div>
                                        <div class="col-md-1">
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-12">Fecha Fin</label>                                                               
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">                                                                
                                                <div class="col-md-12">
                                                    <input type="text" id="txtfechaFinalAPELACIONES" placeholder="FECHA FINAL" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" />
                                                </div>                                
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <button class="btn btn-primary" id="consultarBandejas">Consultar</button>
                                        </div>

                                    </div>
                                </div>
                                <div id="divTableResultAPELACIONES" class="col-md-12" style="margin-top: 31px; overflow: auto;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script type="text/javascript">
            var waitingDialog = waitingDialog || (function ($) {
                'use strict';

                // Creating modal dialog's DOM
                var $dialog = $(
                        '<div class="modal fade" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true" style="padding-top:15%; overflow-y:visible;">' +
                        '<div class="modal-dialog modal-m">' +
                        '<div class="modal-content">' +
                        '<div class="modal-header"><h3 style="margin:0;"></h3></div>' +
                        '<div class="modal-body">' +
                        '<div class="progress progress-striped active" style="margin-bottom:0;"><div class="progress-bar" style="width: 100%"></div></div>' +
                        '</div>' +
                        '</div></div></div>');

                return {
                    /**
                     * Opens our dialog
                     * @param message Custom message
                     * @param options Custom options:
                     * 				  options.dialogSize - bootstrap postfix for dialog size, e.g. "sm", "m";
                     * 				  options.progressType - bootstrap postfix for progress bar type, e.g. "success", "warning".
                     */
                    show: function (message, options) {
                        // Assigning defaults
                        if (typeof options === 'undefined') {
                            options = {};
                        }
                        if (typeof message === 'undefined') {
                            message = 'Cargando ...';
                        }
                        var settings = $.extend({
                            dialogSize: 'm',
                            progressType: '',
                            onHide: null // This callback runs after the dialog was hidden
                        }, options);

                        // Configuring dialog
                        $dialog.find('.modal-dialog').attr('class', 'modal-dialog').addClass('modal-' + settings.dialogSize);
                        $dialog.find('.progress-bar').attr('class', 'progress-bar');
                        if (settings.progressType) {
                            $dialog.find('.progress-bar').addClass('progress-bar-' + settings.progressType);
                        }
                        $dialog.find('h3').text(message);
                        // Adding callbacks
                        if (typeof settings.onHide === 'function') {
                            $dialog.off('hidden.bs.modal').on('hidden.bs.modal', function (e) {
                                settings.onHide.call($dialog);
                            });
                        }
                        // Opening dialog
                        $dialog.modal();
                    },
                    /**
                     * Closes dialog
                     */
                    hide: function () {
                        $dialog.modal('hide');
                    }
                };

            })(jQuery);
            (function () {
                var nombreBandeja = "APELACIONES";
                $("#txtfechaInicialAPELACIONES").datetimepicker(
                        {
                            sideBySide: false,
                            locale: 'es',
                            format: "DD/MM/YYYY",
                        }
                );
                $("#txtfechaFinalAPELACIONES").datetimepicker(
                        {
                            sideBySide: false,
                            locale: 'es',
                            format: "DD/MM/YYYY",
                        }
                );
                $("#txtfechaInicialAPELACIONES").on("dp.change", function (e) {
                    $('#txtfechaFinalAPELACIONES').data("DateTimePicker").minDate(e.date);
                });
                $("#txtfechaFinalAPELACIONES").on("dp.change", function (e) {
                    $('#txtfechaInicialAPELACIONES').data("DateTimePicker").maxDate(e.date);
                });

                $("#APELACIONES").on("click", function () {
                    nombreBandeja = $(this).text();
                });

                $("#consultarBandejas").on("click", function () {
                    waitingDialog.show();
                    $("#divTableResultAPELACIONES").empty();
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/bandejas2instancia/Bandejas2InstanciaFacade.Class.php",
                        async: true,
                        dataType: "json",
                        data: {
                            fechaInicial: $("#txtfechaInicial" + nombreBandeja).val(),
                            fechaFinal: $("#txtfechaFinal" + nombreBandeja).val(),
                            accion: "consultarBandeja" + nombreBandeja + "MAGISTRADOS",
                            cveJuzgado: <?php echo $_SESSION["cveAdscripcion"] ?>
                        },
                        beforeSend: function (datos) {

                        },
                        success: function (datos) {
                            waitingDialog.hide();
                            if (datos.totalCount > 0) {
                                var table = "";
                                table += "<label id='totalRegistrosEncontrados'>Total de registros: ";
                                table += "<span id='numero-registros'>" + datos.totalCount + "</span>";
                                table += "</label>";
                                if (nombreBandeja == "APELACIONES") {
                                    table += "<table id='tblResultadosGridAPELACIONES' class='table table-hover table-striped table-bordered'>";
                                }

                                table += "<thead>";
                                table += "<tr>";
                                table += "<th>N&uacute;m.</th>";
                                if (nombreBandeja == "APELACIONES") {
                                    table += "<th>N&uacute;m de toca</th>";
                                }
                                table += "<th>Sintesis</th>";
                                if (nombreBandeja == "APELACIONES") {
                                    table += "<th>Partes</th>";
                                }

                                table += "<th>Fecha registro</th>";
                                if (nombreBandeja == "APELACIONES") {
                                    table += "<th>N&uacute;m causa</th>";
                                }

                                table += "<th>Origen</th>";
                                if (nombreBandeja == "APELACIONES") {
                                    table += "<th>Provienen</th>";
                                }
                                table += "<th>Estatus</th>";
                                if (nombreBandeja == "APELACIONES") {
                                    table += "<th>Motivo</th>";
                                }
                                table += "<th>Recibido</th>";
                                table += "</tr>";
                                table += "</thead>";
                                table += "<tbody>";
                                var contador = 1;
                                if (typeof (datos.resultados) != "undefined") {
                                    $.each(datos.resultados, function (index, element) {
                                        //                           table += "<tr>";
                                        if (element.estatusRecibido == 0) {
                                            table += "<tr>";
                                        } else {
                                            if (element.estatusRecibido[0].recibido == 0) {
                                                table += "<tr class=''>";
                                            } else {
                                                table += "<tr class='success'>";
                                            }
                                        }
                                        table += "<td>";
                                        table += contador++;
                                        table += "</td>";
                                        table += "<td>";
                                        if (nombreBandeja == "APELACIONES") {
                                            table += element.numero + "/" + element.anio;
                                        }

                                        table += "</td>";
                                        table += "<td>";
                                        if (nombreBandeja == "APELACIONES") {
                                            table += "<div style='width: 300px;margin: 0px; '>" + element.sintesis + "</div>";
                                        }
                                        table += "</td>";
                                        // APELANTES Y QUEJOSOS

                                        var apelante = "";
                                        if (nombreBandeja == "APELACIONES") {
                                            apelante += "<table id='tblResultadosGridAPELACIONES' class='table table-hover table-striped table-bordered'>";
                                        }

                                        apelante += "<thead>";
                                        apelante += "<tr>";
                                        apelante += "<th>Nombre</th>";
                                        apelante += "<th>Tipo</th>";
                                        apelante += "</tr>";
                                        apelante += "</thead>";
                                        apelante += "<tbody>";
                                        if (nombreBandeja == "APELACIONES") {
                                            $.each(element.apelantes, function (index2, element2) {
                                                apelante += "<tr>"
                                                if (element2.cveTipoPersona != 1) {
                                                    apelante += "<td>" + element2.nombreMoral + "</td>" + "<td>" + element2.desTipoApelante + "</td> ";
                                                } else {
                                                    apelante += "<td>" + element2.nombre + " " + element2.paterno + " " + element2.materno + "</td>" + "<td>" + element2.desTipoApelante + "</td> ";
                                                }
                                                apelante += "</tr>"
                                            });
                                            $.each(element.ofendidos, function (index2, element2) {
                                                apelante += "<tr>"
                                                if (element2.cveTipoPersona != 1) {
                                                    apelante += "<td>" + element2.nombreMoral + "</td>" + "<td>" + element2.descTipoParte + "</td> ";
                                                } else {
                                                    apelante += "<td>" + element2.nombre + " " + element2.paterno + " " + element2.materno + "</td>" + "<td>" + element2.descTipoParte + "</td> ";
                                                }
                                                apelante += "</tr>"
                                            });
                                            $.each(element.imputados, function (index2, element2) {
                                                apelante += "<tr>"
                                                if (element2.cveTipoPersona != 1) {
                                                    apelante += "<td>" + element2.nombreMoral + "</td>" + "<td>IMPUTADO</td> ";
                                                } else {
                                                    apelante += "<td>" + element2.nombre + " " + element2.paterno + " " + element2.materno + "</td>" + "<td>IMPUTADO</td> ";
                                                }
                                                apelante += "</tr>"
                                            });
                                        }

                                        apelante += "</tbody>";
                                        apelante += "</table>";
                                        table += "<td>";
                                        table += apelante;
                                        table += "</td>";

                                        // APELANTES Y QUEJOSOS
                                        var fechaRegistro = (element.fechaRegistro.split(" ")[0].split("-"));
                                        table += "<td>";
                                        table += fechaRegistro[2] + "/" + fechaRegistro[1] + "/" + fechaRegistro[0];
                                        table += "</td>";



                                        table += "<td>";
                                        if (nombreBandeja == "APELACIONES") {
                                            if (element.carpetaPadre != 0) {
                                                table += "<div style='width: 200px; '>" + element.carpetaPadre[0].numero + "/" + element.carpetaPadre[0].anio + "</div>";
                                            } else {
                                                if (element.antecedeFalso != 0) {
                                                    table += "<div style='width: 200px; '>" + element.antecedeFalso[0].numero + "/" + element.antecedeFalso[0].anio + "</div>";
                                                } else {
                                                    table += "<div style='width: 200px; '>NO TIENE NINGUNO</div>";
                                                }
                                            }
                                        }

                                        table += "</td>";




                                        table += "<td>";
                                        if (nombreBandeja == "APELACIONES") {
                                            if (element.carpetaPadre != 0) {
                                                table += "<div style='width: 200px; '>" + element.carpetaPadre[0].desJuzgado + "</div>";
                                            } else {
                                                if (element.antecedeFalso != 0) {
                                                    table += "<div style='width: 200px; '>" + element.antecedeFalso[0].desJuzgado + "</div>";
                                                } else {
                                                    table += "<div style='width: 200px; '>NO TIENE NINGUNO</div>";
                                                }
                                            }
                                        }

                                        table += "</td>";

                                        if (nombreBandeja == "APELACIONES") {

                                            table += "<td>";
                                            if (nombreBandeja == "APELACIONES") {

                                                if (element.cveTipoActuacion == '') {
                                                    table += "<div style='width: 200px; '>TRADICIONAL</div>";
                                                } else {
                                                    if (element.cveTipoActuacion == 32) {
                                                        table += "<div style='width: 200px; '>REMISION APELACION</div>";
                                                    } else if (element.cveTipoActuacion == 35) {
                                                        table += "<div style='width: 200px; '>REVISION EXTRAORDINARIA</div>";
                                                    }
                                                }


                                            }
                                            table += "</td>";
                                        }

                                        table += "<td>";
                                        if (nombreBandeja == "APELACIONES") {
                                            table += element.desEstatusCarpeta;
                                        } else {
                                            table += element.desEstatus;
                                        }
                                        table += "</td>";

                                        if (nombreBandeja == "APELACIONES") {
                                            table += "<td>";
                                            if (element.sentencia == 0) {
                                            } else {
                                                table += element.sentencia[0].desTipoSentencia;
                                            }
                                            table += "</td>";
                                        } else {
                                        }

                                        table += "<td style='text-align: center;     vertical-align:middle; '>";
                                        table += "<buttom onclick='enviarArbol(" + element.numero + ", " + element.anio + ")' class='btn btn-primary'><i class='fa fa-share-square fa-4x' aria-hidden='true'></i>Expediente Penal</buttom>";
                                        table += "</td>";
                                    });
                                }
                                if (nombreBandeja == "APELACIONES") {

                                }


                                table += "</tbody>";
                                table += "</table>";
                                if (nombreBandeja == "APELACIONES") {
                                    $("#divTableResultAPELACIONES").html(table);
                                    $("#tblResultadosGridAPELACIONES").DataTable(
                                            {
                                                "language": {
                                                    "sProcessing": "Procesando...",
                                                    "sLengthMenu": "Mostrar _MENU_ registros",
                                                    "sZeroRecords": "No se encontraron resultados",
                                                    "sEmptyTable": "Ning�n dato disponible en esta tabla",
                                                    "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                                                    "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                                                    "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                                                    "sInfoPostFix": "",
                                                    "sSearch": "Buscar:",
                                                    "sUrl": "",
                                                    "sInfoThousands": ",",
                                                    "sLoadingRecords": "Cargando...",
                                                    "oPaginate": {
                                                        "sFirst": "Primero",
                                                        "sLast": "�ltimo",
                                                        "sNext": "Siguiente",
                                                        "sPrevious": "Anterior"
                                                    },
                                                    "oAria": {
                                                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                                                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                                                    },
                                                    "bProcessing": true,
                                                    "sDom": '<"top"flp>rt<"bottom"ip><"clear">',
                                                    "pageLength": 50
                                                },
                                                "paging": false,
                                                "order": [[1, "asc"]]
                                            }
                                    );
                                }

                            } else {
                                $("#divAlertInfo").html("Info!: " + datos.mnj.toLowerCase());
                                $("#divAlertInfo").show("slide");
                                setTimeAlert("divAlertInfo");

                            }
                            $(".validarExisteFisicamente").off("click");
                            $(".validarExisteFisicamente").on("click", function () {
                                var _self = this;
                                //                        alert($(this).data("idcarpetajudicial"));
                                var idcarpetajudicial = ($(this).data("idcarpetajudicial"));
                                var idestatustocabandeja = ($(this).data("idestatustocabandeja"));
                                var origen = ($(this).data("origen"));
                                var cvetipocarpeta = ($(this).data("cvetipocarpeta"));
                                if (cvetipocarpeta = "toca") {
                                    cvetipocarpeta = 6;
                                }
                                var objEnvia = null;
                                if (idestatustocabandeja == 0) {
                                    objEnvia = {
                                        accion: "guardar",
                                        idCarpetaJudicial: idcarpetajudicial,
                                        cveUsuario: <?php echo $_SESSION["cveUsuarioSistema"] ?>,
                                        origen: origen,
                                        recibido: 1,
                                        cveTipoCarpeta: cvetipocarpeta,
                                        activo: "S"
                                    };
                                    $(this).parent().parent().parent().parent().parent().addClass("success");
                                } else {
                                    if ($(this).is(":checked")) {
                                        //                     alert("SI");
                                        objEnvia = {
                                            accion: "guardar",
                                            idCarpetaJudicial: idcarpetajudicial,
                                            cveUsuario: <?php echo $_SESSION["cveUsuarioSistema"] ?>,
                                            origen: origen,
                                            cveTipoCarpeta: cvetipocarpeta,
                                            activo: "S",
                                            recibido: 1,
                                            idEstatusTocaBandeja: idestatustocabandeja
                                        };
                                        $(this).parent().parent().parent().parent().parent().addClass("success");
                                    } else {
                                        //                     alert("NO");
                                        objEnvia = {
                                            accion: "guardar",
                                            idCarpetaJudicial: idcarpetajudicial,
                                            cveUsuario: <?php echo $_SESSION["cveUsuarioSistema"] ?>,
                                            origen: origen,
                                            cveTipoCarpeta: cvetipocarpeta,
                                            activo: "S",
                                            recibido: 0,
                                            idEstatusTocaBandeja: idestatustocabandeja
                                        };
                                        $(this).parent().parent().parent().parent().parent().removeClass("success");
                                    }
                                }

                                $.ajax({
                                    type: "POST",
                                    url: "../fachadas/sigejupe/estatustocasbandejas/EstatustocasbandejasFacade.Class.php",
                                    async: false,
                                    dataType: "json",
                                    data: objEnvia,
                                    beforeSend: function (datos) {
                                    },
                                    success: function (datos) {
                                        if (datos.totalCount > 0) {
                                            $(_self).data("recibido", datos.data[0].recibido);
                                            $(_self).data("idestatustocabandeja", datos.data[0].idEstatusTocaBandeja);
                                        }
                                    },
                                    error: function (objeto, quepaso, otroobj) {

                                    }
                                });
                            });
                        },
                        error: function (objeto, quepaso, otroobj) {

                        }
                    });
                });
            })();
            enviarArbol = function(numero, anio){
                loadOpcion('sigejupe/arbol/frmArbol.php?numero='+numero+'&anio='+anio+'','areadetrabajo');
            }
        </script> 
        <?php
    } else {
        $salir = '<script>alert("La sesion caduco."); ';
        $salir .= 'window.location.href = "salir.php" </script>';
        echo $salir;
    }
    ?>