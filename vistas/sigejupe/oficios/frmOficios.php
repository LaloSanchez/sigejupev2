<?php
if (!isset($_SESSION)) {
    session_start();
}

if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    ini_set("log_errors", 0);
    ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);
//version 14/01/2016
    if (!isset($_SESSION)) {
        @session_start();
    }

    $idActuacionArbol = "";
    $idCarpetaJudicialArbol = "";
    $cveTipoCarpetaArbol = "";
    $procedencia = 0;
    $OrigenSegundaInstancia = "";
    if (isset($_POST['idActuacion'])) {
        $idActuacionArbol = @$_POST['idActuacion'];
    }
    if (isset($_POST['idReferencia'])) {
        $idCarpetaJudicialArbol = @$_POST['idReferencia'];
    }
    if (isset($_POST['cveTipoCarpeta'])) {
        $cveTipoCarpetaArbol = @$_POST['cveTipoCarpeta'];
    }
    if (isset($_POST['idActuacionPadre'])) {
        $idActuacionPadre = @$_POST['idActuacionPadre'];
    }
    if (isset($_GET['origen'])) {
        $OrigenSegundaInstancia = @$_GET['origen'];
    }
   if (isset($_POST['juzgadoOrigenArbol'])) {
      $cveJuzgadoOrigenArbol = @$_POST['juzgadoOrigenArbol'];
   }

//$idActuacionArbol = 91; 
//$idCarpetaJudicialArbol = 7;
//$cveTipoCarpetaArbol = 2;
//$idActuacionPadre = "";//15870;

    if ($idCarpetaJudicialArbol == "" && $idActuacionPadre == "" && $cveTipoCarpetaArbol == "" && $idActuacionArbol == "") {
        $procedencia = 0; // formulario general
    } else if (($idActuacionArbol != 0 && $idActuacionArbol != "") || ($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "") || ($cveTipoCarpetaArbol != 0 && $cveTipoCarpetaArbol != "") || ($idActuacionPadre != 0 && $idActuacionPadre != "")) {
        $procedencia = 1; // viene de arbol
    } else if ($idCarpetaJudicialArbol == "" && $idActuacionPadre == "" && $cveTipoCarpetaArbol == 0) {
        $procedencia = 1; // viene de arbol el formulario general
        $asignaValoresArbol = 1;
    }

//echo "idActuacionArbol: <<" . $idActuacionArbol . ">><br>";
//echo "Carpeta: <<" . $idCarpetaJudicialArbol . ">><br>";
//echo "TipoCarpeta: <<" . $cveTipoCarpetaArbol . ">><br>";
//echo "Procedencia: " . $procedencia . "<br>";
//echo "idActuacionPadre: <<" . $idActuacionPadre . ">><br>";

    include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");
    $digitalizacion = "";

    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULODIGITALIZACION");
    $digitalizacion = $host->getConnect();
    $subirArchivos = "";
    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULOSUBIRARCHIVOS");
    $subirArchivos = $host->getConnect();
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
   <input type="hidden" id="hiddencveJuzgadoOrigenArbol" value="<?php echo $cveJuzgadoOrigenArbol; ?>" >
   <input type="hidden" id="hiddencveAdcripcion" value="<?php echo $_SESSION['cveAdscripcion']; ?>" >
    <input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacionArbol; ?>" >
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="<?php echo $cveTipoCarpetaArbol; ?>" >
    <input type="hidden" id="hiddenidActuacionPadre" value="<?php echo $idActuacionPadre; ?>" >
    <input type="hidden" id="hiddenasignaValoresArbol" value="<?php echo $asignaValoresArbol; ?>" >
    <input type="hidden" id="hiddenIdActuacionAcuerdo" value="" >
    <input type="hidden" id="hiddenFechaActual" value="<?php echo date("d/m/Y") ?>" >


    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="h5titulo">                                                            
                Registro de Oficios
            </h5>
        </div>
        <div class="panel-body">
            <div id="divActuacionNOvalida" style="display: none">

            </div>

            <div id="divFormulario" class="form-horizontal" data-step="1" data-intro="Este m&oacute;dulo le permite registrar un nuevo Oficio, el cual puede ser modificado y/o eliminado." data-position='left'>
                <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="regresar();" style="display: none">                                    

                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'><?php echo $OrigenSegundaInstancia == 1 ? ( "Tribunal de alzada") : ( "Juzgado"); ?>:</label>
                    <div class="col-md-9">
                        <div id="divCmbJuzgado" class="logobox"></div>
                        <select class="form-control" name="cmbJuzgado" id="cmbJuzgado" onchange="cargaTipoCarpeta();" >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                


                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed">Relacionado con</label>
                    <div class="col-md-9">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control" name="cmbTipoCarpeta" id="cmbTipoCarpeta" onchange="changeLabel(this)">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                


                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 needed" id="lblRelationName">No.</label>
                    <div id="divSinRelacion" class="col-md-9">
                        <input type="text" id="txtNumero" class="form-inline" id="txtNumero" placeholder="N&uacute;mero">/<input type="text" class="form-inline" id="txtAnio" id="txtAnio" maxlength="4" placeholder="A&ntilde;o" value="">
                    </div>                                
                </div>
                <div id="divBuscaAcuerdo" class="form-group" style="display: none">
                    <label class="control-label col-md-3">Buscar Acuerdo:</label>
                    <div class="col-md-9">
                        <input type="checkbox" id="buscaAcuerdo" class="form-inline" onclick="buscarAcuerdo()">
                        <label class="form-inline" id="acuerdoSel"></label>
                    </div>
                </div>
                <div class="form-group">
                    <div id="divConsultaActuaciones" style="display: none;height: 175px; border-top: 1px solid rgb(208, 220, 203); width: 100%; overflow-x: hidden; overflow-y: scroll; " class="col-xs-8" >
                        <div id="divTableResultActuaciones" class="col-xs-8" style="width: 100%;">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-3">Oficio No:</label>
                    <div class="col-md-9">
                        <input type="text" id="txtNumOficio" class="form-inline" id="txtNumOficio" placeholder="N&uacute;mero" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 needed">Destinatario:</label>
                    <div class="col-md-9">
                        <textarea rows="1" id="Destinatario" class="form-control" placeholder="Destinatario" style="text-transform:uppercase; resize: none;"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 needed">Asunto:</label>
                    <div class="col-md-9">
                        <textarea rows="1" id="Sintesis" class="form-control" placeholder="Asunto" style="text-transform:uppercase; resize: none;"></textarea>
                    </div>
                </div>
                <div id="divRangoFechas" style="display: none">
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Fecha Inicio:</label>
                        <div class="col-md-2">
                            <input type="text" id="txtfechaInicial" placeholder="FECHA INICIO" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy"/>
                        </div>
                    </div>
                    <div class="form-group"> 
                        <label class="control-label col-md-3">Fecha Fin:</label>
                        <div class="col-md-2">
                            <input type="text" id="txtfechaFinal" placeholder="FECHA FIN" class="form-control datepicker" value="<?php echo date("d/m/Y") ?>" data-date-format="dd/mm/yyyy" />
                        </div>
                    </div>    
                </div>
                <div id="divSintesis" class="form-group">
                    <label class="control-label col-md-3 needed">Contenido del documento:</label>
                    <div class="col-md-9">
                        <!--<textarea rows="5" id="Sintesis" class="form-control" placeholder="Sintesis" style="text-transform:uppercase; resize: none;"></textarea>-->
                        <script id="Observaciones" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                    </div>
                </div>



                <br>
                <br>

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

                <br>

                <div class="form-group">

                    <div class="col-md-offset-3 col-md-9">

                  <div style="display: <?php echo (($cveJuzgadoOrigenArbol == $_SESSION['cveAdscripcion']) || ($cveJuzgadoOrigenArbol == 0) ? '' : 'none') ?>" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar un oficio." data-position='top' class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" id="inputGuardar" value="Guardar" onclick="buscarTipoCarpeta();" style="display: none"></div>                                    

                  <div style="display: <?php echo (($cveJuzgadoOrigenArbol == $_SESSION['cveAdscripcion']) || ($cveJuzgadoOrigenArbol == 0) ? '' : 'none') ?>" class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" id="inputBuscar" value="Buscar" onclick="consultarOficios(1);" style="display: none"></div>                                    
                  <div style="display: <?php echo (($cveJuzgadoOrigenArbol == $_SESSION['cveAdscripcion']) || ($cveJuzgadoOrigenArbol == 0) ? '' : 'none') ?>" data-step="5" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top' class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar();"></div>                                    
                  <div style="display: <?php echo (($cveJuzgadoOrigenArbol == $_SESSION['cveAdscripcion']) || ($cveJuzgadoOrigenArbol == 0) ? '' : 'none') ?>" data-step="4" data-intro="De clic para buscar un oficio." data-position='top' class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="consultar();" style="display: none"></div>
                  <div style="display: <?php echo (($cveJuzgadoOrigenArbol == $_SESSION['cveAdscripcion']) || ($cveJuzgadoOrigenArbol == 0) ? '' : 'none') ?>" class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" id="inputEliminar" value="Eliminar" onclick="eliminarOficios()" style="display: none"></div>                                    
                  <div style="display: <?php echo (($cveJuzgadoOrigenArbol == $_SESSION['cveAdscripcion']) || ($cveJuzgadoOrigenArbol == 0) ? '' : 'none') ?>" class="col-md-2 botonesAdaptar" ><input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" style="display: none" ></div>                                    
                        <div class="col-md-2 botonesAdaptar">                        
                            <button class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" style="display: none">Visor</button>
                        </div>
                  <div style="display: <?php echo (($cveJuzgadoOrigenArbol == $_SESSION['cveAdscripcion']) || ($cveJuzgadoOrigenArbol == 0) ? '' : 'none') ?>" class="col-md-2 botonesAdaptar">                        
                            <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="enviar();" style="display: none">Generar PDF</button>
                        </div>
                  <div style="display: <?php echo (($cveJuzgadoOrigenArbol == $_SESSION['cveAdscripcion']) || ($cveJuzgadoOrigenArbol == 0) ? '' : 'none') ?>" class="col-md-2 botonesAdaptar">                        
                            <button class="btn btn-primary btn-adaptar" id="inputDigitalizar" data-toggle="modal" onclick="digitalizarAcuerdo();" style="display: none">Digitalizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="divConsulta" style="display: none" class="col-xs-12">
            <div class="col-xs-12">
                <div class="col-md-3">
                    <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivFormOficio(1);
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
            </div>

            <div id="divTableResult" class="col-xs-12">
            </div>
        </div>
    </div>
    </div>

    <!-- Modal visor -->
    <div class="modal fade" id="ModalVisorPDF" tabindex="-1" role="dialog" aria-labelledby="VisorPDF">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="VisorPDF">Visor de documentos</h4>
                </div>
                <div class="modal-body" id="visor" style="max-height: 500px; overflow: scroll;"></div>

            </div>
        </div>
    </div>

    <script type="text/javascript">
      var instancia = null;
        var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
        var OrigenSegundaInstancia = "<?php echo $OrigenSegundaInstancia; ?>";
        var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
        var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;

        var procedencia = <?php echo $procedencia; ?>;
        var apartado = 1; // captura

        var createRecord = 'N';
        var readRecord = 'N';
        var updateRecord = 'N';
        var deleteRecord = 'N';

        if (editor != undefined) {
            editor.destroy();
        } else {

        }
        var editor = null;

    //    digitalizarAcuerdo = function () {
    //        //idcarpeta
    //        //idactuacion
    //        //desc carpeta/actuacion
    //        //desc juzgado 
    //        //numero de la carpeta/actuacion
    //        //a�o de la carpeta/actuacion
    //        //cve documento
    //        //usuario
    //        var strl;
    //        strl = "0-"+$("#hiddenIdActuacion").val()+"-OFICIOS-<?php echo $_SESSION["desAdscripcion"]; ?>-"+$("#txtNumero").val()+"-"+$("#txtAnio").val()+"-1-<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
    //        strl += "-http://10.22.165.204/sigejupev2/fachadas/sigejupe/imagenes/ImagenesFacade.Class.php";
    //        strl += "-http://10.22.165.204/sigejupev2/vistas/digitalizacion";
    //        launchDigitalizador(strl);
    //    },

        visorDocuemntos = function () {
            $.ajax({
                type: 'POST',
                url: 'visorpdf/index.php',
                data: {idCarpetaJudicial: "", idActuacion: $('#hiddenIdActuacion').val(), cveTipoDocumento: 11}, //malo
    //                data: {idCarpetaJudicial: 0, idActuacion: 14525, cveTipoDocumento: 13}, //bueno
                async: false,
                dataType: 'html',
                beforeSend: function () {
                    $('#visor').html('<h3>Consultando informacion ... espere.</h3>');
                },
                success: function (data) {
    //                    console.log(data)
                    $('#visor').html(data);
                },
                error: function (objeto, quepaso, otroobj) {
                    $('#visor').html('<h3>Ocurri&oacute; un error, intente nuevamente. ' + otroobj + '</h3>');
                    console.log('\nOBJ: ' + objeto + '\nQ: ' + quepaso + '\nO:' + otroobj)
                }
            });
        };

        enviar = function () {
    //        alert("enviar datos..."+$("#hiddenIdActuacion").val());
            var strDatos = "accion=generarJson";
            strDatos += "&cveTipo=2"; //2 = actuacion
            strDatos += "&cveTipoDocumento=11"; //tipo documento
            strDatos += "&idActuacion=" + $("#hiddenIdActuacion").val();

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
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

    //     generaPDF = function (json){
    //        var strDatos = "json="+json;
    //            
    //        $.ajax({
    //            type: "POST",
    //            url: "../fachadas/sigejupe/firmapdf/FirmaPdfFacade.Class.php",
    //            data: strDatos,
    //            async: true,
    //            dataType: "html",
    //            beforeSend: function (objeto) {
    //                // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
    //            },
    //            success: function (datos) {
    //                var json = "";
    //                json = eval("(" + datos + ")"); //Parsear JSON
    //
    //                if (json.type == "ok") {
    //                    alert("satisfactorio");
    //                }else{
    //                    alert(json.mensaje);
    //                }    
    //
    //
    //            },
    //            error: function (objeto, quepaso, otroobj) {
    //                //alert("Error en la peticion:\n\n" + quepaso);
    //                $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
    //                $("#divAlertDager").show("slide");
    //                setTimeAlert("divAlertDager");
    //            }
    //        });
    //     };

        obtenerContador = function () {

            var strDatos = "accion=obtenerContadorOficio";
            strDatos += "&cveTipoActuacion=7";
            strDatos += "&cveJuzgado=" + juzgadoSesion;

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                    $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    // alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount == 0) {
                        $("#txtNumOficio").val(1);
                    } else {
    //                            alert((parseInt(json.data[0].numero)+1));
                        $("#txtNumOficio").val((parseInt(json.data[0].numero)));
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };

        cargaTipoCarpeta = function () {
            $('#cmbTipoCarpeta').empty();
            var tipoJuzgado = $("#cmbJuzgado").val().split("/");
    //        alert(tipoJuzgado[1]);

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        $("#cmbTipoCarpeta").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                        for (var i = 0; i < json.totalCount; i++) {
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
                           if (json.data[i].cveTipoCarpeta == "6" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // tipo carpeta causa de juicio
                                        $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                    }
                                    break;
                        case "8": // verificar queda pendiente*************************
                           if (json.data[i].cveTipoCarpeta == "6" || json.data[i].cveTipoCarpeta == "7" || json.data[i].cveTipoCarpeta == "8") { // tipo carpeta causa de juicio
                              $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                            }
                           break;
                     }

                        }
                  if (OrigenSegundaInstancia == 1) {
                    $("#cmbTipoCarpeta").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                  } else {
                       $("#cmbTipoCarpeta").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                    }
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

        cargaJuzgados = function () {

            var strDatos = "accion=distrito";
            var urlOption = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            var asyncOption = true;
         var hiddencveAdcripcion = $("#hiddencveAdcripcion").val();
         var hiddencveJuzgadoOrigenArbol = $("#hiddencveJuzgadoOrigenArbol").val();


         if ($("#hiddenIdActuacion").val() != "") {
            if (hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol) {
               if (OrigenSegundaInstancia == "") {
                  strDatos = "accion=getJuzgadoActuacion&idActuacion=" + $("#hiddenIdActuacion").val();
               } else {
            }
            } else {

               if (hiddencveJuzgadoOrigenArbol != 0) {
                  strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
               } else {
                  strDatos = "accion=getJuzgadoActuacion&idActuacion=" + $("#hiddenIdActuacion").val();
               }
            }
         }
            $.ajax({
                type: "POST",
                url: urlOption,
                data: strDatos,
                async: false,
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
                     if (json.data[i].cveInstancia == instancia) {
                            if (juzgadoSesion == json.data[i].cveJuzgado) {
                                    $("#cmbJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                            }
                     } else {
                        $("#inputGuardar").parent().hide();
                        $("#inputLimpiar").parent().hide();
                        $("#inputEliminar").parent().hide();
                        $("#inputPDF").parent().hide();
                        $("#divPeritos").parent().hide();
                        $("#inputDigitalizar").parent().hide();
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

            $("#lblRelationName").html("No. " + $("#" + objOption.id + " option:selected").text() + ":");
            $("#hiddenCveTipoCarpeta").val($("#cmbTipoCarpeta").val());

            if (apartado == 1) {
                $("#divBuscaAcuerdo").show();
            } else {
                $("#divBuscaAcuerdo").hide();
            }

            if ($("#cmbTipoCarpeta").val() == 9) {
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#divSinRelacion").hide();
    //            $("#divBuscaAcuerdo").hide();
            } else {
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#divSinRelacion").show();
            }


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
                        //alert (json.data[0].cveTipoCarpeta+" - "+json.data[0].cveJuzgado)
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
                        $("#divBuscaAcuerdo").show();

                        setTimeout(function () {
                            //$("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                            $("#buscaAcuerdo").attr("checked", true);
                            buscarAcuerdo();
                        }, 1000);

                        $("#inputConsultar").hide();

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

        buscarTipoCarpeta = function () {

            $("#inputGuardar").attr("disabled", true);
            $("#inputLimpiar").attr("disabled", true);
            $("#inputConsultar").attr("disabled", true);
            $("#inputEliminar").attr("disabled", true);
            $("#inputBuscar").attr("disabled", true);
            $("#inputVisor").attr("disabled", true);
            $("#inputPDF").attr("disabled", true);
            $("#inputDigitalizar").attr("disabled", true);
    //        var cveTipoCarpeta = $("#hiddenCveTipoCarpeta").val();
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var numAct = $("#txtNumero").val();
            var aniAct = $("#txtAnio").val();
            var txtNumOficio = $("#txtNumOficio").val();
            var Destinatario = $("#Destinatario").val();  // este valor va para el campo de destinatarios
            var Sintesis = $("#Sintesis").val();  // este valor va para el campo de destinatarios
            var Observaciones = editor.getAllHtml();           // este valor se va para el campo de observaciones
            Observaciones = Observaciones.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');

            var cveJuzgadoAux = $("#cmbJuzgado").val().split("/");
            var cveJuzgado = cveJuzgadoAux[0];

            var strDatos = "";
            var strDatosCarpeta = "";
            var error = 0;
            var mensaje = "";
            var cveAccion = 24; // insercion bitacora
            var cveEstatus = 13; // estatus registrado

            if (cveTipoCarpeta == 0) {
                error = 1;
                mensaje += "   - Relaci&oacute;n con";
            }
            if (numAct == "" && cveTipoCarpeta != 9) {
                error = 2;
                mensaje += "   - N&uacute;mero";
            }
            if (aniAct == "" && cveTipoCarpeta != 9) {
                error = 3;
                mensaje += "   - A&ntilde;o";
            }

            if (Destinatario == "" && cveTipoCarpeta != 9) {
                error = 4;
                mensaje += "   - Destinatario";
            }
            
            if (Sintesis == "" && cveTipoCarpeta != 9) {
                error = 4;
                mensaje += "   - Sintesis";
            }

            if (Observaciones == "" && cveTipoCarpeta != 9) {
                error = 4;
                mensaje += "   - Contenido del documento";
            }
            if (editor.getContent() == "") {
                error = 4;
                mensaje += "   - Contenido del documento";
            }

            if (error == 0) {
                strDatosCarpeta = "accion=consultarCarpetaExhortoAmparo";
                strDatosCarpeta += "&cveTipoCarpeta=" + cveTipoCarpeta;
                strDatosCarpeta += "&numero=" + numAct;
                strDatosCarpeta += "&anio=" + aniAct;
                strDatosCarpeta += "&cveJuzgado=" + cveJuzgado;
                strDatosCarpeta += "&activo=S";

                if ($("#hiddenIdActuacion").val() != "" || $("#hiddenIdActuacion").val() != 0) {
                    cveAccion = 25;
                }

                if (cveTipoCarpeta != 9) {
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                        data: strDatosCarpeta,
                        async: true,
                        dataType: "html",
                        beforeSend: function (objeto) {
                            //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                        },
                        success: function (datos) {
                            //alert(datos);
                            var json = "";
                            json = eval("(" + datos + ")"); //Parsear JSON

                            if (json.totalCount > 0) {
                                var idReferenciaAux = 0;
                                if (cveTipoCarpeta == 7) {
                                    idReferenciaAux = json.data[0].idExhorto;
                                } else if (cveTipoCarpeta == 8) {
                                    idReferenciaAux = json.data[0].idAmparo;
                                } else {
                                    idReferenciaAux = json.data[0].idCarpetaJudicial;
                                }

                                var jsonDatos = {
                                    accion: "guardarOficio",
                                    idActuacion: $("#hiddenIdActuacion").val(),
                                    numero: numAct,
                                    anio: aniAct,
                                    txtNumOficio: txtNumOficio,
                                    observaciones: Observaciones,
                                    destinatario: Destinatario,
                                    sintesis: Sintesis,
                                    cveTipoActuacion: 7,
                                    cveAccion: cveAccion,
                                    cveJuzgado: cveJuzgado,
                                    cveUsuario: cveUsuarioSesion,
                                    cveEstatus: cveEstatus,
                                    idReferencia: idReferenciaAux,
                                    cveTipoCarpeta: cveTipoCarpeta,
                                    idActuacionAntecede: $("#hiddenIdActuacionAcuerdo").val(),
                                    activo: "S"
                                };

                                guardarOficio(jsonDatos);
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
                } else {
                    // no busca carpeta y guarda oficio sin relacion
                    var jsonDatos = {
                        accion: "guardarOficio",
                        idActuacion: $("#hiddenIdActuacion").val(),
                        numero: numAct,
                        anio: aniAct,
                        txtNumOficio: txtNumOficio,
                        observaciones: Observaciones,
                        destinatario: Destinatario,
                        sintesis: Sintesis,
                        cveTipoActuacion: 7,
                        cveAccion: cveAccion,
                        cveJuzgado: cveJuzgado,
                        cveUsuario: cveUsuarioSesion,
                        cveEstatus: cveEstatus,
    //                                idReferencia:idReferenciaAux,
    //                                cveTipoCarpeta:cveTipoCarpeta,
                        idActuacionAntecede: $("#hiddenIdActuacionAcuerdo").val(),
                        activo: "S"
                    };
                    guardarOficio(jsonDatos);
                }


            } else {
                $("#divInformacion").show();
                $("#strInformacion").html("Informaci&oacute;n! seleccione: " + mensaje);
                $("#inputGuardar").attr("disabled", false);
                $("#inputLimpiar").attr("disabled", false);
                $("#inputConsultar").attr("disabled", false);
                $("#inputEliminar").attr("disabled", false);
                $("#inputBuscar").attr("disabled", false);
                $("#inputVisor").attr("disabled", false);
                $("#inputPDF").attr("disabled", false);
                $("#inputDigitalizar").attr("disabled", false);
                setTimeAlert("divInformacion");
            }

        };

        guardarOficio = function (strDatos) {

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
                dataType: "json",
                beforeSend: function (objeto) {
    //                ToggleLoading(1);
                },
                success: function (datos) {
    //                            alert(datos.totalCount);
                    var json = datos;
    //                json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
    //                    alert(json.data[0].Sintesis);
                        if (json.data[0].Observaciones != "publicado") {
                            $("#divHideForm").hide();
                            $("#divAlertSucces").html("Correcto!: " + json.text.toLowerCase());
                            $("#divAlertSucces").show("slide");
                            setTimeAlert("divAlertSucces");

                            $("#hiddenIdActuacion").val(json.data[0].idActuacion);
                            $("#txtNumOficio").val(json.data[0].numActuacion);
                        } else {
                            $("#divHideForm").hide();
                            $("#divAlertDager").html("Actuacion publicada, no puede ser modificada");
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                        $("#cmbTipoCarpeta").attr("disabled", true);
                        $("#txtNumero").attr("disabled", true);
                        $("#txtAnio").attr("disabled", true);
                        $("#buscaAcuerdo").attr("disabled", true);
                        $("#cmbJuzgado").attr("disabled", true);

                        if ($("#hiddenasignaValoresArbol").val() == "1") {
                            $("#txtNumeroTree").val(json.data[0].numero);
                            $("#txtAnioTree").val(json.data[0].anio);
                            $("#cmbTipoCarpetaTree").val(json.data[0].cveTipoCarpeta);
                            $("#cmbJuzgadoArbol").val(json.data[0].cveJuzgado);
    //                        alert("asigna valores...");
                        }

                        if (procedencia == 1) {
                            getTree();
                        }

                        if (deleteRecord == "S") {
                            $("#inputEliminar").show();
                        }

                        $("#inputPDF").show();
                        $("#inputVisor").show();
                        $("#inputDigitalizar").show();

                        $("#inputGuardar").attr("disabled", false);
                        $("#inputLimpiar").attr("disabled", false);
                        $("#inputConsultar").attr("disabled", false);
                        $("#inputEliminar").attr("disabled", false);
                        $("#inputBuscar").attr("disabled", false);
                        $("#inputVisor").attr("disabled", false);
                        $("#inputPDF").attr("disabled", false);
                        $("#inputDigitalizar").attr("disabled", false);
                        //obtenerContador();
                    } else {
                        //alert(json.text);
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });

        };

        consultar = function () {
            $("#divRangoFechas").show();
            $("#inputRegresar").show();
            $("#inputBuscar").show();
            $("#txtNumOficio").attr("disabled", false);
            $("#divSintesis").hide();
            $("#inputGuardar").hide();
            $("#inputConsultar").hide();
            $("#inputEliminar").hide();
            $("#inputImprimir").hide();
            $("#divBuscaAcuerdo").hide();
            $("#divConsultaActuaciones").hide();

            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Registro de Oficios</span> / Consulta de Oficios");

            apartado = 2; // consulta

        };

        regresar = function (bndSelecciono) {
            $("#divRangoFechas").hide();
            $("#inputRegresar").hide();
            $("#inputBuscar").hide();
            $("#txtNumOficio").attr("disabled", true);
            $("#divSintesis").show();

            if (procedencia == 1) {
                $("#inputConsultar").hide();
            } else {
                $("#inputConsultar").show();
            }

            $("#cmbPaginacion").val(1);
            $("#divBuscaAcuerdo").hide();

            if (bndSelecciono == 1) {
                $("#cmbTipoCarpeta").attr("disabled", true);
                $("#txtNumero").attr("disabled", true);
                $("#txtAnio").attr("disabled", true);
                $("#cmbJuzgado").attr("disabled", true);
            }

            if (String(createRecord) === "S") {
                $("#inputGuardar").show();
            }
            if (deleteRecord == "S") {
                $("#inputEliminar").show();
            }

            $("#h5titulo").html("<span>Registro de Oficios</span>");
            apartado = 1;
        };

        getPaginas = function (pag, cantReg) {
            var cveTipoCarpeta = $("#hiddenCveTipoCarpeta").val();
            var cveJuzgado = $("#cmbJuzgado").val().split("/");

            var strDatos = "accion=getPaginas";
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
            strDatos += "&sintesis=" + $("#Sintesis").val();
            strDatos += "&destinatario=" + $("#Destinatario").val();
            if ($("#txtNumero").val() == "" && $("#txtAnio").val() == "" && cveTipoCarpeta == 0 && $("#txtNumOficio").val() == "" && $("#Destinatario").val() == "" && $("#Sintesis").val() == "") {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            }
            strDatos += "&numActuacion=" + $("#txtNumOficio").val();
            strDatos += "&cveTipoActuacion=7"; // tipo de actuacion = oficios
            strDatos += "&cantxPag=" + cantReg;
            strDatos += "&activo=S";
            strDatos += "&cveJuzgado=" + cveJuzgado[0];// se agrega juzgado

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

        llenareditor = function (value) {
            try {
                editor.ready(function () {
                    setTimeout(function () {
                        editor.setContent(value, false);
                    }, 500);
                    ;
                });
            } catch (e) {
                alert(e);
            }
        };

        consultarOficios = function () {
            //**************************** consulta de oficios *************************************
            //var cveTipoCarpeta = $("#hiddenCveTipoCarpeta").val();

            var pag = $("#cmbPaginacion").val();
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var cantReg = $("#cmbNumReg").val();
            var cveJuzgado = $("#cmbJuzgado").val().split("/");
            var indice = $("#cmbPaginacion").val();
            indice = (indice - 1) * $("#cmbNumReg").val();

            var error = 0;
            if (cveTipoCarpeta == 9) {
                cveTipoCarpeta = 0;
            }

            if (cveJuzgado == 0) {
                error = 1;
            }

            var strDatos = "accion=consultarOficios";
            strDatos += "&numero=" + $("#txtNumero").val();
            strDatos += "&anio=" + $("#txtAnio").val();
            strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
            strDatos += "&sintesis=" + $("#Sintesis").val();
            strDatos += "&destinatario=" + $("#Destinatario").val();
            if ($("#txtNumero").val() == "" && $("#txtAnio").val() == "" && cveTipoCarpeta == 0 && $("#txtNumOficio").val() == "" && $("#Destinatario").val() == "" && $("#Sintesis").val() == "") {
                strDatos += "&txtFecInicialBusqueda=" + $("#txtfechaInicial").val();
                strDatos += "&txtFecFinalBusqueda=" + $("#txtfechaFinal").val();
            }
            strDatos += "&numActuacion=" + $("#txtNumOficio").val();
            strDatos += "&cveJuzgado=" + cveJuzgado[0];
            strDatos += "&pag=" + pag;
            strDatos += "&cveTipoActuacion=7"; // busca tipo de actuacion oficio
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";           //actuaciones activas

            if (error == 0) {
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

                            table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                            table += "<thead>";
                            table += "<tr>";
                            table += "<th>N&uacute;m.</th>";
                            table += "<th>N&uacute;m. Oficio</th>";
                            table += "<th>Tipo</th>";
                            table += "<th>Destinatario</th>";
                            //                    table += "<th>Sintesis</th>";
                            table += "<th>Fecha Registro</th>";
                            table += "</tr>";
                            table += "</thead>";
                            table += "<tbody>";
                            for (var i = 0; i < json.total; i++) {
                                table += "<tr onclick=\"consutaIdOficio('" + json.data[i].idActuacion + "','" + json.data[i].descTipoCarpeta + "','" + cveJuzgado[1] + "')\" >"; //ultimo parametro tipo juzgado
                                table += "<td >" + (i + 1 + indice) + "</td>";
                                table += "<td >Oficio " + json.data[i].numActuacion + "/" + json.data[i].aniActuacion + "</td>";
                                if (json.data[i].cveTipoCarpeta != "") {
                                    table += "<td >" + json.data[i].descTipoCarpeta + " - " + json.data[i].numero + "/" + json.data[i].anio + "</td>";
                                } else {
                                    table += "<td onclick=\"consutaIdOficio('" + json.data[i].idActuacion + "','\"SIN RELACION\"')\" > SIN RELACION </td>";
                                }
                                table += "<td >" + json.data[i].destinatario + "</td>"; // destinatario
                                //                        table += "<td >" + json.data[i].observaciones + "</td>"; // este campo es el contenido del oficio
                                table += "<td >" + json.data[i].fechaRegistro + "</td>";
                                table += "</tr> ";

                            }


                            $("#divHideForm").hide();
                            $("#divConsulta").show();
                            $("#divTableResult").html(table);
                            $("#tblResultadosGrid").DataTable({
                                paging: false
                            });

                            getPaginas(json.pagina, cantReg);
                            //alert(json.pagina);
                            changeDivFormOficio(2);

                            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar2();'>Registro de Oficios</span> / <span style='text-decoration: underline; cursor:pointer;' onclick='regresarConsultar();'>Consulta de Oficios</span> / Resultados");

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
                $("#divAlertDager").html("Seleccione el juzgado");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }

            //**************************** consulta de oficios *************************************
        };

        regresar2 = function () {
            changeDivFormOficio(1);
            regresar();
        };

        regresarConsultar = function () {
            changeDivFormOficio(1);
            $("#cmbPaginacion").val(1);
            $("#h5titulo").html("<span style='text-decoration: underline; cursor:pointer;' onclick='regresar();'>Registro de Oficios</span> / <span>Consulta de Oficios</span>");
        };

        changeDivFormOficio = function (opc) {
            if (opc === 1) {
                $("#divFormulario").show("slide");
                $("#divConsulta").hide("fade");
            } else if (opc === 2) {
                $("#divFormulario").hide("fade");
                $("#divConsulta").show("slide");
            }
        };

        consutaIdOficio = function (id, desTipoCarpeta, tipoJuzgado) {
            changeDivFormOficio(1);
            var strDatos = "accion=seleccionar";
            strDatos += "&idActuacion=" + id + "&activo=S";
            strDatos += "&activo=S";
            strDatos += "&cveTipoActuacion=7";

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                data: strDatos,
                async: true,
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
                        $("#hiddenIdActuacion").val(json.data[0].idActuacion);
                        $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                        $("#txtNumero").val(json.data[0].numero);
                        $("#txtAnio").val(json.data[0].anio);
                        $("#txtNumOficio").val(json.data[0].numActuacion);

                        $("#Destinatario").val(json.data[0].destinatario);
                        $("#Sintesis").val(json.data[0].Sintesis);
                        // seleccionar juzgado en combo
                        if (procedencia == 1) {
                            valorJuzgado(json.data[0].cveJuzgado);
                            setTimeout(function () {
                                //                         alert("muestra datos actuacion..");
                                $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                            }, 1000);
                            $("#lblRelationName").html("No. " + $("#cmbTipoCarpeta option:selected").text() + ":");
                        } else {
                            $("#cmbJuzgado").val(json.data[0].cveJuzgado + "/" + tipoJuzgado);
                        }

                        llenareditor(json.data[0].observaciones);

                        $("#hiddenCveTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                        if (json.data[0].cveTipoCarpeta === "null" || json.data[0].cveTipoCarpeta === null) { // sin relacion
                            $("#cmbTipoCarpeta").val(9);
                            $("#lblRelationName").html("No. SIN RELACION");
                            $("#divSinRelacion").hide();
                            $("#hiddenCveTipoCarpeta").val(9);
                        } else {
                            $("#divSinRelacion").show();
                            $("#lblRelationName").html("No." + desTipoCarpeta);
                        }

                        regresar(1);
                        buscarAntecede(json.data[0].idActuacion);
                        if (deleteRecord == "S") {
                            $("#inputEliminar").show();
                        }

                        $("#inputPDF").show();
                        $("#inputVisor").show();
                        $("#inputDigitalizar").show();

                    } else {
                        $("#divAlertInfo").html('no existe informacion del oficio');
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");
                    }
                    $('#barCarga').html("");

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };

        buscarAntecede = function (idActuacionHija) {

            var strDatos = "accion=buscaActuacionPadre";
            strDatos += "&idActuacionHija=" + idActuacionHija;

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
    //                                  alert(datos);
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        $("#divBuscaAcuerdo").show();
                        consultarAcuerdos(json.data[0].idActuacion);
    //                                $("#acuerdoSel").html("Resoluci&oacute;n Acuerdo: "+json.data[0].numActuacion+" / "+json.data[0].aniActuacion+" - "+json.data[0].Sintesis);
    //                                                      "Resolucion Acuerdo: "+desResolucion + " - " + fecha
                        $("#buscaAcuerdo").attr("checked", true);
                        $("#buscaAcuerdo").attr("disabled", true);
                    } else {
                        //alert(json.text);
                    }

                },
                error: function (objeto, quepaso, otroobj) {
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };

        consultarAcuerdos = function (idActuacion) {
            //**************************** consulta de acuerdos *************************************
            var pag = 1;
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var cantReg = 10;


            if (cveTipoCarpeta == 9) {
                cveTipoCarpeta = 0;
            }

            var strDatos = "accion=consultarOficios";
            strDatos += "&idActuacion=" + idActuacion;
            strDatos += "&pag=" + pag;
            strDatos += "&cveTipoActuacion=2";// el 2 es para las actuaciones acuerdo
            strDatos += "&cantxPag=" + cantReg;        // cantidad de registros a mostrar en paginacion
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
                    //                            alert(datos);

                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {

                        $("#acuerdoSel").html("Resoluci&oacute;n Acuerdo: " + json.data[0].descTipoResolucion + " - " + json.data[0].fechaRegistro);
    //                                                      "Resolucion Acuerdo: "+desResolucion + " - " + fecha

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

            //**************************** consulta de oficios *************************************
        };

        eliminarOficios = function () {

            if ($("#hiddenIdActuacion").val() != "") {
                bootbox.dialog({
                    message: "Advertencia!! <br><br> Esta seguro de eliminar el oficio??",
                    buttons: {
                        danger: {
                            label: "Aceptar",
                            className: "btn-primary",
                            callback: function () {
                                var strDatos = "accion=bajaOficios";
                                strDatos += "&idActuacion=" + $("#hiddenIdActuacion").val();
                                strDatos += "&cveAccion=26"; //eliminacion de oficio
                                strDatos += "&activo=N";

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
                                            //alert(json.text);
                                            $("#divHideForm").hide();
                                            $("#divAlertSucces").html("Eliminacion correcta");
                                            $("#divAlertSucces").show("slide");
                                            setTimeAlert("divAlertSucces");

                                            limpiar();
                                            if (procedencia == 1) {
                                                getTree();
                                            }
                                        } else {
                                            //alert(json.text);
                                        }

                                    },
                                    error: function (objeto, quepaso, otroobj) {
                                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                                        $("#divAlertDager").show("slide");
                                        setTimeAlert("divAlertDager");
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
                $("#divAlertDager").html("no ha seleccionado un registro");
                $("#divAlertDager").show("slide");
                setTimeAlert("divAlertDager");
            }
        }

        limpiar = function () {

            if (procedencia == 0) { // No proviene del arbol
    //            alert("proviene del arbol");
                $("#txtNumero").val("");
                $("#txtAnio").val("");
                $("#cmbTipoCarpeta").val(0);

                $("#txtNumero").attr("disabled", false);
                $("#txtAnio").attr("disabled", false);

                $("#cmbJuzgado").attr("disabled", false);
                $("#cmbTipoCarpeta").attr("disabled", false);

                //** valores ocultos **//
                $("#hiddenIdActuacion").val("");
                $("#hiddenCveTipoCarpeta").val("");
                $("#hiddenIdCarpetaJudicial").val("");

                $("#inputGuardar").show();
                $("#divBuscaAcuerdo").hide();
                if (apartado == 2) {
                    $("#inputGuardar").hide();
                }
            } else {
                $("#divBuscaAcuerdo").show();
                if (apartado == 2) {
                    $("#inputGuardar").hide();
                }
            }


            $("#txtNumOficio").val("");
            //obtenerContador();
            $("#Destinatario").val("");
            $("#Sintesis").val("");
            editor.setContent("", false);
    //        $("#hiddenIdActuacion").val("");
    //        $("#hiddenCveTipoCarpeta").val("");
            $("#lblRelationName").html("No.");
            $("#divSinRelacion").show();
            $("#txtfechaInicial").val($("#hiddenFechaActual").val());
            $("#txtfechaFinal").val($("#hiddenFechaActual").val());

            $("#divConsultaActuaciones").hide();
            $("#divTableResultActuaciones").hide();
            $("#divTableResultActuaciones").html("");
            $("#hiddenIdActuacionAcuerdo").val("");
            $("#buscaAcuerdo").attr("checked", false);

            $("#acuerdoSel").html("");
            $("#buscaAcuerdo").attr("disabled", false);


            $("#inputEliminar").hide();
            $("#inputPDF").hide();
            $("#inputVisor").hide();
            $("#inputDigitalizar").hide();

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
                                    if (vnombre.nomFormulario == "CARPETAS JUDICIALES" || vnombre.nomFormulario == "SECRETARIO DE TRIBUNAL DE ALZADA") {
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

        buscarAcuerdo = function () {

            if ($('#buscaAcuerdo').prop('checked')) {
                var pag = 1;//$("#cmbPaginacion").val();
                var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
                var cantReg = 100;//$("#cmbNumReg").val();
                var cveJuzgado = $("#cmbJuzgado").val().split("/");
                var error = 0;
                var mensaje = "seleccione: ";

                if (cveTipoCarpeta == 9) {
                    cveTipoCarpeta = 0;
                } else {
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
                        mensaje += " año ";
                    }
                }



                if (error == 0) {
                    var strDatos = "accion=consultarOficios";
                    strDatos += "&numero=" + $("#txtNumero").val();
                    strDatos += "&anio=" + $("#txtAnio").val();
                    strDatos += "&cveTipoCarpeta=" + cveTipoCarpeta;
                    strDatos += "&cveTipoActuacion=2,6";// busca solo acuerdos
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
                                table += "<th>Resolucion</th>";
                                table += "<th>Estatus</th>";
                                table += "<th>Actuacion</th>";
                                table += "<th>Fecha Registro</th>";
                                table += "</tr>";
                                table += "</thead>";
                                table += "<tbody>";
                                for (var i = 0; i < json.total; i++) {

                                    if (json.data[i].cveTipoActuacion == "2" || json.data[i].cveTipoActuacion == "6") {
                                        //                            alert(json.data[i].cveEstatus);
                                        if (json.data[i].cveTipoActuacion == "2") {
                                            table += "<tr  bgcolor='#EDF9E8' onmouseout='this.style.backgroundColor=\"#EDF9E8\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer; background-color: rgb(237, 249, 232);' onclick=\"consutaIdActuacion('" + json.data[i].idActuacion + "','" + json.data[i].descTipoResolucion + "',' " + json.data[i].fechaRegistro + "','Acuerdo')\">";
                                        } else {
                                            table += "<tr  bgcolor='#EDF9E8' onmouseout='this.style.backgroundColor=\"#EDF9E8\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer; background-color: rgb(237, 249, 232);' onclick=\"consutaIdActuacion('" + json.data[i].idActuacion + "','" + json.data[i].sintesis + "',' " + json.data[i].fechaRegistro + "' ,'Acta Minima')\">";
                                        }

                                        table += "<td > " + (i + 1) + "</td>";
                                        if (json.data[i].cveTipoCarpeta != "") {
                                            table += "<td>" + json.data[i].descTipoCarpeta + " - " + json.data[i].numero + "/" + json.data[i].anio + "</td>";
                                        } else {
                                            table += "<td onclick=\"consutaIdOficio('" + json.data[i].idActuacion + "','\"SIN RELACION\"')\" > SIN RELACION </td>";
                                        }
                                        if (json.data[i].cveTipoActuacion == "2") {
                                            table += "<td>" + json.data[i].descTipoResolucion + "</td>";
                                        } else {
                                            table += "<td>" + json.data[i].sintesis + "</td>";
                                        }
                                        table += "<td>" + json.data[i].descEstatus + "</td>";
                                        if (json.data[i].cveTipoActuacion == "2") {
                                            table += "<td>ACUERDO</td>";
                                        } else {
                                            table += "<td>ACTA MINIMA</td>";
                                        }
                                        table += "<td>" + json.data[i].fechaRegistro + "</td>";
                                        table += "</tr> ";
                                    }

                                    //                                                    alert(json.data[i].observaciones);
                                }

                                $("#divConsultaActuaciones").show();
                                $("#divTableResultActuaciones").show();
                                $("#divTableResultActuaciones").html(table);

                            } else {
                                $("#divAlertInfo").html('' + json.text.toLowerCase());
                                $("#divAlertInfo").show("slide");
                                setTimeAlert("divAlertInfo");

                                $("#divConsultaActuaciones").hide();
                                $("#divTableResultActuaciones").html("");
                                $("#buscaAcuerdo").attr("checked", false);
                                $("#acuerdoSel").html("No se encontraron Acuerdos ");
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
            } else {
                $("#divConsultaActuaciones").hide();
                $("#divTableResultActuaciones").hide();
                $("#divTableResultActuaciones").html("");
                $("#hiddenIdActuacionAcuerdo").val("");
                $("#acuerdoSel").html("No selecciono acuerdo");
            }

        };

        consutaIdActuacion = function (id, desResolucion, fecha, descripcion) {
            // se asigna el idActiuacion del acuerdo
            $("#hiddenIdActuacionAcuerdo").val(id);
            $("#divConsultaActuaciones").hide();
            $("#divTableResultActuaciones").hide();
            $("#acuerdoSel").html("Resoluci&oacute;n " + descripcion + ": " + desResolucion + " - " + fecha);

            if (procedencia == 1) {
    //            alert("entra..");
                $("#inputConsultar").hide();
                $("#buscaAcuerdo").attr("checked", true);
                $("#buscaAcuerdo").attr("disabled", true);

            }

        };

        verificarTipoActuacion = function (idActuacionPadre, idReferencia, cveTipoCarpeta) {

            var strDatos = "accion=consultarOficios";
            strDatos += "&idActuacion=" + idActuacionPadre;// busca solo acuerdos
            strDatos += "&pag=1";
            strDatos += "&cantxPag=2";        // cantidad de registros a mostrar en paginacion
            strDatos += "&activo=S";           //actuaciones activas

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

    //                    alert(datos);

                    var json = "";
                    var table = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        if (json.data[0].cveTipoActuacion == "2" || json.data[0].cveTipoActuacion == "6") {

                            consutaIdActuacion(json.data[0].idActuacion, json.data[0].descTipoResolucion, json.data[0].numActuacion + "/" + json.data[0].aniActuacion);

                            valorJuzgado(json.data[0].cveJuzgado);
                            $("#cmbJuzgado").val();
                            $("#txtNumero").val(json.data[0].numero);
                            $("#txtAnio").val(json.data[0].anio);
                            setTimeout(function () {
                                //                         alert("muestra datos actuacion..");
                                $("#cmbTipoCarpeta").val(json.data[0].cveTipoCarpeta);
                            }, 1000);

    //                            muestraEstatus(idActuacionPadre);

                        } else {
                            table += "<table id='tblResultadosGridAct' width='60%' height='175' cellspacing='0' cellpadding='0' border='0' align='center' >";
                            table += "<tr bgcolor='#EA6E6E'>";
                            table += "<td>La actuacion seleccionada para generar el oficio debe ser un acuerdo.. </td>";
                            table += "</tr>";
                            table += "</table>";

                            $("#divFormulario").hide();
                            $("#divActuacionNOvalida").show();
                            $("#divActuacionNOvalida").html(table);

                        }





                    } else {
                        $("#divAlertInfo").html('' + json.text);
                        $("#divAlertInfo").show("slide");
                        setTimeAlert("divAlertInfo");

                        $("#divConsultaActuaciones").hide();
                        $("#divTableResultActuaciones").html("");
                        $("#buscaAcuerdo").attr("checked", false);
                        $("#promocionSel").html("No se encontro el acuerdo intente mas tarde: ");
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
      cargaInstancia = function () {
         $.ajax({
            type: "POST",
            url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
            async: false,
            dataType: "json",
            data: {
               accion: "getInstanciaJuzgado"
            },
            beforeSend: function (datos) {
            },
            success: function (datos) {
               if (datos.totalCount > 0) {
                  instancia = datos.resultados[0].cveInstancia;
               }
            },
            error: function (objeto, quepaso, otroobj) {

            }
         });
      };
        $(function () {
         cargaInstancia();
            $("#txtNumero").validaCampo('0123456789');
            $("#txtAnio").validaCampo('0123456789');
            $("#txtNumOficio").validaCampo('0123456789');

            $("#txtfechaInicial").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );
            $("#txtfechaFinal").datepicker(
                    {dateFormat: 'dd/mm/yy'}
            );

    //        cargaTipoCarpeta();
            cargaJuzgados();
            obtenerPermisos();

            if (procedencia == 1) { // si viene del arbol idActuacionArbol idCarpetaJudicialArbol

                if ($("#hiddenidActuacionPadre").val() != 0) {
                    // verificar que sea un acuerdo
                    verificarTipoActuacion($("#hiddenidActuacionPadre").val(), $("#hiddenIdCarpetaJudicial").val(), $("#hiddenCveTipoCarpeta").val());
                }

                if ($("#hiddenIdActuacion").val() != 0) {
                    consutaIdOficio($("#hiddenIdActuacion").val(), "");
                } else if ($("#hiddenIdCarpetaJudicial").val() != 0) {
                    consultaCarpetaJud($("#hiddenIdCarpetaJudicial").val(), $("#hiddenCveTipoCarpeta").val());
                }
            }


            $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate', function (e) {
                $(this).datepicker('hide');
            });

            // editor de texto
            editor = UE.getEditor('Observaciones');
            editor.ready(function () {
                editor.setContent();
            });

            //********************** digitalizador ***********************************************
            var desAdscripcion = '<?php echo $_SESSION["desAdscripcion"]; ?>';

            digitalizarAcuerdo = function () {
                var strl;
            // strl = "0-" + $("#hiddenIdActuacion").val() + "-PROMOCIONES-<?php echo $_SESSION["desAdscripcion"]; ?>-" + $("#txtNumero").val() + "-" + $("#txtAnio").val() + "-27-<?php //echo $_SESSION["cveUsuarioSistema"];       ?>";
                strl = "0-" + $("#hiddenIdActuacion").val() + "-OFICIOS-" + desAdscripcion + "-" + $("#txtNumero").val() + "-" + $("#txtAnio").val() + "-11-" + cveUsuarioSesion;
                // strl += "-http://10.22.165.204/sigejupev2/fachadas/sigejupe/imagenes/ImagenesFacade.Class.php";
                // strl += "-http://10.22.165.204/sigejupev2/vistas/digitalizacion";
                strl += "-<?php echo $subirArchivos; ?>";
                strl += "-<?php echo $digitalizacion; ?>";
                launchDigitalizador(strl);
            }
            //********************** digitalizador ***********************************************

        });
    </script> 
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>