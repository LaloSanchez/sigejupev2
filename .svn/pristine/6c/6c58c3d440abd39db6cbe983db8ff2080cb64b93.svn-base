<?php
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
      .modal-dialog{
         overflow-y: initial !important;
        }
        .modal-body{
            height: 250px;
            overflow-y: auto;
        }
        .requerido {
        color: darkred;
    }
   </style>
<div class="panel panel-default">
    <div class="panel-heading">
        <h5 class="panel-title" id="h5titulo">                                                            
            Libro de Exhortos
        </h5>
    </div>
    <div class="panel-body">
        <div id="divFormulario" class="form-horizontal">
            <div class="form-group">
                <label class="control-label col-md-2" for="pwd">Juzgado<span class="requerido">(*)</span></label>
                <div class="col-md-7">
                    <select id="cmbJuzgado" name="cmbJuzgado" class="form-control text-uppercase cambiosDiv">
                    </select>
                </div>
            </div>
            <div class="form-group">                                                                
                <label class="control-label col-md-2" id="lblNum">Fecha Inicial<span class="requerido">(*)</span></label>
                <div class="col-md-2" style="float: left;">
                    <input type="text" id="txtFechaInicio" placeholder="DD/MM/AAAA" class="form-control datepicker" readonly>
                </div> 
                <label class="control-label col-md-3" id="lblNum">Fecha Final<span class="requerido">(*)</span></label>
                <div id="txtFechFin" class="input-group col-md-2" >
                    <input type="text" id="txtFechaFin" placeholder="DD/MM/AAAA" class="form-control datepicker" readonly>
                </div> 
            </div>
            
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
            <!-- div Alerts -->
            <div class="form-group">
                <div class="col-md-12">
                    <div id="divPrecaucion" class="alert alert-warning alert-dismissable">                    
                        <strong>Advertencia!</strong> Mensaje
                    </div>
                    <div id="divCorrecto" class="alert alert-success alert-dismissable">
                        <strong>Correcto!</strong> Mensaje
                    </div>   
                </div>
            </div>  
            <!-- Botones -->
            <div class="form-group ">
                <div class="col-md-offset-4  row-centered">
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="inputGuardar" value="Consultar" onclick="Consultar();">                                                        
                    </div>
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="btnImprimir" value="Imprimir" onclick="Imprimir()" style="display:none;">                                    
                    </div>
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="btnExcel" value="Excel" onclick="excel();" style="display:none;">                                    
                    </div>
                    <div class="col-md-1 botonesAdaptar">
                        <input type="submit" class="btn btn-primary btn-adaptar" id="btnClean" value="Limpiar" onclick="clean();">                                    
                    </div>
                </div>
            </div>
        </div>
        <div id="espimp" class="col-xs-12" style="display:none"></div>
        <div id="divConsulta" style="display: none" align="center" class="col-xs-11">
            <div id="divResultados" class="col-xs-12">
            </div>
            <div id="divImp" class="col-xs-12" style="display:none">
            </div>
        </div>
    </div>
</div>
   <script type="text/javascript">
    var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
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
                   $dialog.modal();
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
    $(function () {
        //setfechas();
        //$("#txtFechaInicio").val($("#hiddenFechaActual").val());
        //$("#txtFechaFin").val($("#hiddenFechaActual").val());
//        $("#txtFechaInicio").attr('readOnly', true);
//        $("#txtFechaFin").attr('readOnly', true);
//          $( "#txtFechaFin" ).prop( "disabled", true );

        $("#txtFechaInicio").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY",
            ignoreReadonly: true,
            maxDate : 'now'
            
        });
        $("#txtFechaFin").datetimepicker({
            sideBySide: false,
            locale: 'es',
            format: "DD/MM/YYYY",
            ignoreReadonly: true,
            maxDate : 'now'
            //maxDate: $.now()
        });
        
//        $("#txtFechaInicio").datepicker({
//            dateFormat: 'dd/mm/yy'
//        });
//        $("#txtFechaFin").datepicker({
//            dateFormat: 'dd/mm/yy',
//            endDate: '0dd'
//        });
        $("#txtFechaInicio").on("dp.change", function (e) {
            $('#txtFechaFin').data("DateTimePicker").minDate(e.date);
        });
        $("#txtFechaFin").on("dp.change", function (e) {
            $('#txtFechaInicio').data("DateTimePicker").maxDate(e.date);
            if($("#txtFechaFin").val() <= $("#txtFechaInicio").val()){
                $("#txtFechaInicio").val($("#txtFechaFin").val());
            }
            //alert(e.date);
        });
        if($("#txtFechaFin").val() <= $("#txtFechaInicio").val()){
            $("#txtFechaInicio").val($("#txtFechaFin").val());
        }
        
        cargarJuzgados();
        fechaBaseDatos({
            txtFechaInicio: "fecha",
            txtFechaFin: "fecha"
        });
    });
    function cargarJuzgados() {
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        $.ajax({
            type: "POST",
            //url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            url: "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
            //data: strDatos,
            data: {accion: "consultarCombo", obligaPermiso: "false"},
            async: false,
            dataType: "json",
            beforeSend: function (objeto) {
            },
            success: function (datos) {
                if (datos.totalCount > 0) {
                    var option = '<option tipojuzgado="0" value ="0">--SELECCIONE OPCION--</option>';
                    $.each(datos.data, function (index, element) {
                        if (juzgadoSesion == element.cveJuzgado) {
                            var selected = ' selected="selected" ';
                        } else {
                            var selected = '';
                        }
                        option += '<option ' + selected + ' tipojuzgado="' + element.cveTipoJuzgado + '" value="' + element.cveJuzgado + '">' + element.desJuzgado + '</option>';
                    });
                    $("#cmbJuzgado").append(option);
                    $("#cmbJuzgado").change();
                    //getTiposCarpetas();
                } else {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            }
        });
    };
    function Imprimir(){
        $('#divConsulta').show('slow');
        $("#espimp").html("<center><img src='img/carga.gif' /></center>");
        $('#espimp').show('slow');
        w = window.open();
        w.document.write($("#divImp").html());
        w.document.close();
        w.print();
        $('#espimp').hide("");
    }
    excel = function(){
    var dt = new Date();
    var day = dt.getDate();
    var month = dt.getMonth() + 1;
    var year = dt.getFullYear();
    var hour = dt.getHours();
    var mins = dt.getMinutes();
    var postfix = day + "." + month + "." + year + "_" + hour + "." + mins;
    var a = document.createElement('a');
    var data_type = 'data:application/vnd.ms-excel; charset=UTF-8,%EF%BB%BF';
    var table_div = document.getElementById('divResultados');
    console.log(table_div);
    var table_html = table_div.outerHTML.replace(/ /g, '%20');
    console.log(table_html);
    a.href = data_type + ' ' + table_html;
    a.download = 'libroExhortos_' + postfix + '.xls';
    // a.click();
    var click_ev = document.createEvent("MouseEvents");
    // initialize the event
    click_ev.initEvent("click", true, true);
    //trigger the evevnt
    a.dispatchEvent(click_ev);
};
    clean = function () {
        $("#txtFechaInicio").val("<?php echo date('d/m/Y'); ?>");
        $("#txtFechaFin").val("<?php echo date('d/m/Y'); ?>");
        $("#divResultados").html("");
        $("#divResultados").hide("");
        $("#divConsulta").hide("");
        $("#btnImprimir").hide("");
        $("#btnExcel").hide("");
        $("#txtFechaInicio").prop("disabled",false);
        $("#txtFechaTermino").prop("disabled",false);
        $('#cmbJuzgado').val(0);
    };
    function Consultar(){
        $("#btnImprimir").hide("");
        $("#btnExcel").hide("");
        if( $("#txtFechaInicio").val() != "" && $("#txtFechaFin").val() != "" ){
            if($("#cmbJuzgado").val() != "" && $("#cmbJuzgado").val() != 0){
                var juzgadoDet = $("#cmbJuzgado option:selected").text();
                var table="";
                var table2="";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/libros/LibroExhortosFacade.Class.php",
                    data: {
                        accion: "consultar",
                        cveJuzgado: $("#cmbJuzgado").val(),
                        fechafin: $("#txtFechaFin").val(),
                        fechainicio: $("#txtFechaInicio").val()
                    },
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        $('#divResultados').html("<center><img src= 'img/carga.gif' /></center>");
                        $('#divConsulta').show();
                        $('#divResultados').show();
                    },
                    success: function (datos) {
                        if (datos.totalCount > 0) {
                                table += "<center><table style='border-collapse:collapse;' id='tblTitulo' class='list-unstyled' width='1100'><tr><td width='20%'>&nbsp;</td><td ALIGN='left' whidth=10%>";
                                table += "<img src='http://sigejupe2.pjedomex.gob.mx/sigejupe/vistas/img/EscudoEstadoMexico2.png' width=90px></td><td width=10%></td>";
                                table += "<td ALIGN='CENTER' COLSPAN=3><b>";
                                table += "<label style=' font-family: Arial; font-size: 20px; font-weight: 501 !important;'>GOBIERNO DEL ESTADO DE M&Eacute;XICO<br>";
                                table += "PODER JUDICIAL<br>";
                                table += "LIBRO DE REGISTRO DE EXHORTOS PENALES<br>" + juzgadoDet + "</label></b></td>";
                                table += "<td width=20%></td></tr>";
                                table += '<tr><td colspan=4>&nbsp;</td></tr></table>';
                                table += "<table width='1100' border:1px;' class='table table-hover table-striped table-bordered' border=1 id='tblReporte'>";
                                table += '<thead>';
                                table += '<tr>';
                                table += '<td width="5%" align="center"><b>NO.</b></th>';
                                table += '<td width="10%" align="center"><b>NO. DE EXHORTO</b></th>';
                                table += '<td width="20%" align="center"><b>JUICIO</th>';
                                table += '<td width="20%" align="center"><b>DEMANDADO</b></th>';
                                table += '<td width="20%" align="center"><b>PROCEDENCIA</b></th>';
                                table += '<td width="15%" align="center"><b>EXP. ORIGEN</b></th>';
                                table += '<td width="10%" align="center"><b>FECHA</b></th>';
                                table += '</tr>';
                                table += '</thead>';
                                
                                //imprimir
                                
                                table2 += "<center><table width='1100' style='border-collapse:collapse; border:1px;' class='table' border=1 id='tblReporte'>";
                                table2 += '<thead>';
                                table2 += '<tr>';
                                table2 +='<td style="border: hidden" colspan=2></td>';
                                table2 += '<td style="border: hidden" align=left>';
                                table2 +="<img src='img/EscudoEstadoMexico.png' width=100px></td>";
                                table2 +="<td ALIGN='CENTER' colspan=2 style='border: hidden'>";
                                table2 +="<h3><font face='Arial'>GOBIERNO DEL ESTADO DE M\u00C9XICO<br>";
                                table2 +="PODER JUDICIAL<br>";
                                table2 +="LIBRO DE REGISTRO DE EXHORTOS PENALES<br>"+juzgadoDet+"</font></h3></td><td colspan=2 style='border: hidden'></td>";
                                table2 += '</tr><tr><td colspan=7 style="border-bottom: 1px"></td></tr><tr>';
                                table2 += '<td width="5%" align="center"><b>NO.</b></th>';
                                table2 += '<td width="10%" align="center"><b>NO. DE EXHORTO</b></th>';
                                table2 += '<td width="20%" align="center"><b>JUICIO</th>';
                                table2 += '<td width="20%" align="center"><b>DEMANDADO</b></th>';
                                table2 += '<td width="20%" align="center"><b>PROCEDENCIA</b></th>';
                                table2 += '<td width="15%" align="center"><b>EXP. ORIGEN</b></th>';
                                table2 += '<td width="10%" align="center"><b>FECHA</b></th>';
                                table2 += '</tr>';
                                table2 += '</thead>';
                                
                                
                                var conta=1;
                                for (var i = 0; i < (parseInt(datos.totalCount)); i++) {
                                    var delito = "";
                                    var imputado = "";
                                    //var ofendido = "";
                                    var juzgadoP="";
                                    if(conta == 16){
                                        table += "</table></center><br><br>";
                                        table += "<center><table style='border-collapse:collapse;' id='tblTitulo' class='list-unstyled' width='1100'><tr><td width='20%'>&nbsp;</td><td ALIGN='left' whidth=10%>";
                                        table += "<img src='http://electronico.pjedomex.gob.mx/electronico/vistas/img/EscudoEstadoMexico2.png' width=90px></td><td width=10%></td>";
                                        table += "<td ALIGN='CENTER' COLSPAN=3><b>";
                                        table += "<label style=' font-family: Arial; font-size: 20px; font-weight: 501 !important;'>GOBIERNO DEL ESTADO DE M&Eacute;XICO<br>";
                                        table += "PODER JUDICIAL<br>" + juzgadoDet + "<br>";
                                        table += "LIBRO DE REGISTRO DE EXHORTOS PENALES</label></b></td>";
                                        table += "<td width=20%></td></tr>";
                                        table += '<tr><td colspan=4>&nbsp;</td></tr></table>';
                                        table += "<table width='1100' border:1px;' class='table table-hover table-striped table-bordered' border=1 id='tblReporte'>";
                                        table += '<thead>';
                                        table += '<tr>';
                                        table += '<td width="5%" align="center"><b>NO.</b></th>';
                                        table += '<td width="10%" align="center"><b>NO. DE EXHORTO</b></th>';
                                        table += '<td width="20%" align="center"><b>JUICIO</th>';
                                        table += '<td width="20%" align="center"><b>DEMANDADO</b></th>';
                                        table += '<td width="20%" align="center"><b>PROCEDENCIA</b></th>';
                                        table += '<td width="15%" align="center"><b>EXP. ORIGEN</b></th>';
                                        table += '<td width="10%" align="center"><b>FECHA</b></th>';
                                        table += '</tr>';
                                        table += '</thead>';
                                        conta = 1;
                                    }
                                    table += '<tr style="cursor: pointer;" onclick=Seleccionar(' + datos.data[i].idExhorto + ')>';
                                    table2 += '<tr>';
                                    table += '<td align="center"><FONT SIZE=2 FACE="ARIAL">' + (i+1)+ '</font></td>';
                                    table2 += '<td align="center"><FONT SIZE=2 FACE="ARIAL">' + (i+1)+ '</font></td>';
                                    table += '<td align="center"><FONT SIZE=2 FACE="ARIAL">' + datos.data[i].numExhorto + '/' + datos.data[i].aniExhorto + '</font></td>';
                                    table2 += '<td align="center"><FONT SIZE=2 FACE="ARIAL">' + datos.data[i].numExhorto + '/' + datos.data[i].aniExhorto + '</font></td>';
                                    $.each(datos.data[i].delitos, function (index, elemento1) {
                                        if(delito == ""){
                                            delito =  elemento1.descDelito;
                                        }else{
                                            delito += '<br>'+elemento1.descDelito;
                                        }
                                    });
                                    if(delito == ""){
                                        delito="SIN JUICIO";
                                    }
                                    table += '<td align="center"><FONT SIZE=2 FACE="ARIAL">' + delito.toUpperCase() + '</font></td>';
                                    table2 += '<td align="center"><FONT SIZE=2 FACE="ARIAL">' + delito.toUpperCase() + '</font></td>';
                                    $.each(datos.data[i].imputados, function (index2, elemento2) {
                                        if(imputado == ""){
                                            if((elemento2.nombre == "-" || elemento2.nombre == "")&&(elemento2.paterno == "-" || elemento2.paterno == "")&&(elemento2.materno == "-" || elemento2.materno == "")){
                                                imputado =  elemento2.nombremoral;
                                            }
                                            else{
                                                imputado =  elemento2.nombre+" "+elemento2.paterno+" "+elemento2.materno;
                                            }
                                        }else{
                                            if((elemento2.nombre == "-" || elemento2.nombre == "")&&(elemento2.paterno == "-" || elemento2.paterno == "")&&(elemento2.materno == "-" || elemento2.materno == "")){
                                                imputado +=  '<br>'+elemento2.nombremoral;
                                            }
                                            else{
                                                imputado +=  '<br>'+elemento2.nombre+" "+elemento2.paterno+" "+elemento2.materno;
                                            }
                                        }
                                    });
                                    if(imputado == ""){
                                        imputado="SIN IMPUTADOS";
                                    }
                                    table += '<td align="center"><FONT SIZE=2 FACE="ARIAL">'+imputado.toUpperCase()+'</font></td>';
                                    table2 += '<td align="center"><FONT SIZE=2 FACE="ARIAL">'+imputado.toUpperCase()+'</font></td>';
//                                    $.each(datos.data[i].ofendidos, function (index3, elemento3) {
//                                        if(ofendido == ""){
//                                            if((elemento3.nombre == "-" || elemento3.nombre == "")&&(elemento3.paterno == "-" || elemento3.paterno == "")&&(elemento3.materno == "-" || elemento3.materno == "")){
//                                                ofendido =  elemento3.nombremoral;
//                                            }
//                                            else{
//                                                ofendido =  elemento3.nombre+" "+elemento3.paterno+" "+elemento3.materno;
//                                            }
//                                        }else{
//                                            if((elemento3.nombre == "-" || elemento3.nombre == "")&&(elemento3.paterno == "-" || elemento3.paterno == "")&&(elemento3.materno == "-" || elemento3.materno == "")){
//                                                ofendido =  '<br>'+elemento3.nombremoral;
//                                            }
//                                            else{
//                                                ofendido =  '<br>'+elemento3.nombre+" "+elemento3.paterno+" "+elemento3.materno;
//                                            }
//                                        }
//                                    }); 
//                                    table += '<td align="center"><FONT SIZE=2 FACE="ARIAL">' + ofendido +'</font></td>';
                                    var fecha = datos.data[i].fechaRegistro;
                                    var res = fecha.slice(0, 10);
                                    var ano = res.slice(0, 4);
                                    var mes = res.slice(5, 7);
                                    var dia = res.slice(8, 10);
                                    if(datos.data[i].descJuzgadoProcedencia == ""){
                                        juzgadoP=datos.data[i].juzgadoProcedencia;
                                    }else{
                                        juzgadoP=datos.data[i].descJuzgadoProcedencia;
                                    }
                                    table += '<td align="center"><FONT SIZE=2 FACE="ARIAL">' + datos.data[i].desEstadoProcedencia +'-'+juzgadoP+'</font></td>';
                                    table += '<td align="center"><FONT SIZE=2 FACE="ARIAL">' + datos.data[i].desCarpeta+'<br>'+datos.data[i].numCausa + '/' + datos.data[i].aniCausa + '</font></td>';
                                    table += '<td align="center"><FONT SIZE=2 FACE="ARIAL">'+ dia +'/'+mes+'/'+ano+'</font></td>';
                                    table += '</tr>';
                                    table2 += '<td align="center"><FONT SIZE=2 FACE="ARIAL">' + datos.data[i].desEstadoProcedencia +'-'+juzgadoP+'</font></td>';
                                    table2 += '<td align="center"><FONT SIZE=2 FACE="ARIAL">' + datos.data[i].desCarpeta+'<br>'+datos.data[i].numCausa + '/' + datos.data[i].aniCausa + '</font></td>';
                                    table2 += '<td align="center"><FONT SIZE=2 FACE="ARIAL">'+ dia +'/'+mes+'/'+ano+'</font></td>';
                                    table2 += '</tr>';
                                    conta=conta+1;
                                }
                                $("#divResultados").html(table);
                                $("#divImp").html(table2);
                                $('#divConsulta').show('');
                                $("#divResultados").show();
                                $("#btnImprimir").show("");
                                $("#btnExcel").show("");
                                waitingDialog.hide();
                                $('#espimp').hide("");
                                }
                                else{
                                    $('#divConsulta').hide(''); 
                                    $('#divConsulta').hide('');
                                    $("#divPrecaucion").html(datos.mnj);
                                    $("#divPrecaucion").show("");
                                    setTimeAlert("divPrecaucion");
                                    $('#espimp').hide("");
                                    $("#btnImprimir").hide("");
                                    $("#btnExcel").hide("");
                                }
                        },
                        error: function (objeto, quepaso, otroobj) {
                            $('#divConsulta').hide(''); 
                            $('#divConsulta').hide('');
                            $("#divPrecaucion").html('Error al cargar Exhortos');
                            $("#divPrecaucion").show("");
                            setTimeAlert("divPrecaucion");
                            $('#espimp').hide("");
                            $("#btnImprimir").hide("");
                            $("#btnExcel").hide("");
                        }
                });
            }else{
                waitingDialog.hide();
                $("#divPrecaucion").html('Seleccione un Juzgado');
                $("#divPrecaucion").show("");
                setTimeAlert("divPrecaucion");
                $('#espimp').hide("");
            }
        }else{
            waitingDialog.hide();
            $("#divPrecaucion").html('Seleccione Ambas Fechas');
            $("#divPrecaucion").show("");
            setTimeAlert("divPrecaucion");
            $('#espimp').hide("");
        }$('#espimp').hide("");
    }
    function Seleccionar(id){
    var juzgadoDet = $("#cmbJuzgado option:selected").text();
    $.ajax({
        type: "POST",
        url: "../fachadas/sigejupe/libros/LibroExhortosFacade.Class.php",
            data: {
                accion: "consultar",
                cveJuzgado: $("#cmbJuzgado").val(),
                fechafin: $("#txtFechaFin").val(),
                fechainicio: $("#txtFechaInicio").val(),
                id:id
            },
        async: false,
        dataType: "json",
        beforeSend: function (objeto) {
            $("#espImp").show();
            $("#espImp").html("<img src='img/cargacaja.gif' border='0' title='cargando' align='absmiddle'>");
        },
        success: function (json) {
            if (json.totalCount > 0) {
                var table="";
                table +='<center>';
                table += "<center><table style='border-collapse:collapse;' id='tblTitulo' class='list-unstyled' width='1100'><tr><td width='20%'>&nbsp;</td><td ALIGN='left' whidth=10%>";
                table += "<img src='http://electronico.pjedomex.gob.mx/electronico/vistas/img/EscudoEstadoMexico2.png' width=90px></td><td width=10%></td>";
                table += "<td ALIGN='CENTER' COLSPAN=3><b>";
                table += "<label style=' font-family: Arial; font-size: 20px; font-weight: 501 !important;'>GOBIERNO DEL ESTADO DE M&Eacute;XICO<br>";
                table += "PODER JUDICIAL<br>";
                table += "LIBRO DE REGISTRO DE EXHORTOS PENALES<br>" + juzgadoDet + "</label></b></td>";
                table += "<td width=20%></td></tr>";
                table += '<tr><td colspan=4>&nbsp;</td></tr></table><br>';
                table +='<table width="1100">';
                table +='<tr height="45">';
                table +='<td width=12%><font face="Arial" size="4">EXHORTO No.:</td>';
                table +='<td style="border-bottom:1px solid #000000" align="center" ><font face="Arial" size="4">'+json.data[0].numExhorto+'/'+json.data[0].aniExhorto+'</td>';
                table +='</tr>';
                table +='</table>';
                table +='<table width="1100">';
                table +='<tr height="45">';
                table +='<td width=18%><font face="Arial" size="4">FECHA DE RECIBIDO:</td>';
                var fecha=json.data[0].fechaRegistro;
                var res = fecha.slice(0,10);
                var ano = res.slice(0,4);
                var mes = res.slice(5,7);
                var dia = res.slice(8,10);
                table +='<td style="border-bottom:1px solid #000000" align="center"><font face="Arial" size="4">' + dia + '/' + mes + '/' + ano + '</td>';
                table +='</tr>';
                table +='</table>';
                table +='<table width="1100">';
                table +='<tr height="45">';
                table +='<td width=15%><font face="Arial" size="4">PROCEDENTE DE:</td>';
                var juzgadoP="";
                if(json.data[0].descJuzgadoProcedencia == ""){
                    juzgadoP=json.data[0].juzgadoProcedencia;
                }else{
                    juzgadoP=json.data[0].descJuzgadoProcedencia;
                }
                table +='<td style="border-bottom:1px solid #000000" align="center"><font face="Arial" size="4">'+json.data[0].desEstadoProcedencia+'-'+juzgadoP+'</td>';
                table +='</tr>';
                table +='</table>';
                table +='<table width="1100">';
                table +='<tr height="45">';
                table +='<td width=21%><font face="Arial" size="4">DEDUCIDO DE LA CAUSA:</td>';
                table +='<td style="border-bottom:1px solid #000000" align="center"><font face="Arial" size="4">' + json.data[0].desCarpeta + ' - '+ json.data[0].numCausa + '/' + json.data[0].aniCausa + '</td>';
                table +='</tr>';
                table +='</table>';
                table +='<table width="1100">';
                table +='<tr height="45">';
                var delito="";
                $.each(json.data[0].delitos, function (index, elemento1) {
                    if(delito == ""){
                        delito =  elemento1.descDelito;
                    }else{
                        delito += ', '+elemento1.descDelito;
                    }
                });
                if(delito == ""){
                    delito ="SIN JUICIO";
                }
                table +='<td width=10%><font face="Arial" size="4">DELITOS(S):</td>';
		table +='<td style="border-bottom:1px solid #000000" align="center"><font face="Arial" size="4">'+delito.toUpperCase()+'</td>';
                table +='</tr>';
                table +='</table>';
                table +='<table width="1100">';
                table +='<tr height="45">';
                var imputado="";
                $.each(json.data[0].imputados, function (index2, elemento2) {
                    if(imputado == ""){
                        if((elemento2.nombre == "-" || elemento2.nombre == "")&&(elemento2.paterno == "-" || elemento2.paterno == "")&&(elemento2.materno == "-" || elemento2.materno == "")){
                            imputado =  elemento2.nombremoral;
                        }
                        else{
                            imputado =  elemento2.nombre+" "+elemento2.paterno+" "+elemento2.materno;
                        }
                    }else{
                        if((elemento2.nombre == "-" || elemento2.nombre == "")&&(elemento2.paterno == "-" || elemento2.paterno == "")&&(elemento2.materno == "-" || elemento2.materno == "")){
                            imputado +=  ', '+elemento2.nombremoral;
                        }
                        else{
                            imputado +=  ', '+elemento2.nombre+" "+elemento2.paterno+" "+elemento2.materno;
                        }
                    }
                });
                if(imputado == ""){
                    imputado ="SIN IMPUTADOS";
                }
                table +='<td width=10%><font face="Arial" size="4">IMPUTADO(S):</td>';
		table +='<td style="border-bottom:1px solid #000000" align="center"><font face="Arial" size="4">'+imputado.toUpperCase()+'</td>';
                table +='</tr>';
                table +='</table>';
                table +='<table width="1100">';
                table +='<tr height="45">';
                var ofendido="";
                $.each(json.data[0].ofendidos, function (index3, elemento3) {
                    if(ofendido == ""){
                        if((elemento3.nombre == "-" || elemento3.nombre == "")&&(elemento3.paterno == "-" || elemento3.paterno == "")&&(elemento3.materno == "-" || elemento3.materno == "")){
                            ofendido =  elemento3.nombremoral;
                        }
                        else{
                            ofendido =  elemento3.nombre+" "+elemento3.paterno+" "+elemento3.materno;
                        }
                    }else{
                        if((elemento3.nombre == "-" || elemento3.nombre == "")&&(elemento3.paterno == "-" || elemento3.paterno == "")&&(elemento3.materno == "-" || elemento3.materno == "")){
                            ofendido +=  ', '+elemento3.nombremoral;
                        }
                        else{
                            ofendido +=  ', '+elemento3.nombre+" "+elemento3.paterno+" "+elemento3.materno;
                        }
                    }
                });
                if(ofendido == ""){
                    ofendido ="SIN OFENDIDO";
                }
                table +='<td width=9%><font face="Arial" size="4">OFENDIDO:</td>';
                table +='<td style="border-bottom:1px solid #000000" align="center"><font face="Arial" size="4">'+ofendido.toUpperCase()+'</td>';
                table +='</tr>';
                table +='</table>';
                table +='<table width="1100">';
                table +='<tr height="45">';
                table +='<td width=20%><font face="Arial" size="4">DILIGENCIA SOLICITADA:</td>';
                table +='<td style="border-bottom:1px solid #000000" align="center"><font face="Arial" size="4"></td>';
                table +='</tr>';
                table +='</table>';
                table +='<table width="1100">';
                table +='<tr height="45">';
                table +='<td width=19%><font face="Arial" size="4">FECHA DE DILIGENCIA:</td>';
                table +='<td style="border-bottom:1px solid #000000" align="center"><font face="Arial" size="4"></td>';
                table +='</tr>';
                table +='</table>';
                table +='<table width="1100">';
                table +='<tr height="45">';
                table +='<td width=21%><font face="Arial" size="4">FECHA DE DEVOLICI&Oacute;N:</td>';
                if(json.data[0].fecOficio != ""){
                    table +='<td style="border-bottom:1px solid #000000" align="center"><font face="Arial" size="4">'+json.data[0].fecOficio+'</td>';
                }else{
                    table +='<td style="border-bottom:1px solid #000000" align="center"><font face="Arial" size="4">N/A</td>';
                }
                table +='</tr>';
                table +='</table>';
                table +='<table width="1100">';
                table +='<tr height="45">';
                table +='<td width=10%><font face="Arial" size="4">OBSERVACIONES:</td>';
                var valor = json.data[0].Observaciones;
                valor=valor.replace(/&nbsp;/gi,"");
                if(valor != ""){
                    valor=valor.replace(/&nbsp;/gi,"");
                }else{
                    valor= "N/A";
                }
                table +='<td style="border-bottom:1px solid #000000" align="center"><font face="Arial" size="4">'+ valor +'</font></td></tr>';
                table +='</table>';
                table +='</center>';
                w = window.open();
                w.document.write(table);
                w.document.close();
                w.print();
                $("#espImp").hide();
            }
            else{
                alert("Sin Resultados");
                $("#divResultados").hide();
                $("#btnImprimir").hide("");
                $("#btnExcel").hide("");
            }
        },
        error: function (objeto, quepaso, otroobj) {
            //alert("Error al mostrar la informacion:\n\n" + otroobj);
        }
    });
}
   </script>
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>
