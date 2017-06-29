<?php
//actualizacion 
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    date_default_timezone_set("America/Mexico_City");
    ini_set("log_errors", 0);
    ini_set('display_errors', 0);
    $fechaHoraHoy = date("d/m/Y H:i");
    //echo getdate();
    $fechaHoy = date("d/m/Y");
    $anioActual = date("Y");
    $cveUsuarioSistema = $_SESSION['cveUsuarioSistema'];
    $OrigenSegundaInstancia = "";
    $cveJuzgadoOrigenArbol = "";
    if ($_POST['idActuacion'] != "")
        $idActuacion = $_POST['idActuacion'];
    else
        $idActuacion = "";
    if ($_POST['idReferencia'] != "")
        $idReferencia = $_POST['idReferencia'];
    else
        $idReferencia = "";
    if ($_POST['cveTipoCarpeta'] != "")
        $cveTipoCarpeta = $_POST['cveTipoCarpeta'];
    else
        $cveTipoCarpeta = "";
    if ($_POST['idPadre'] != "") {
        $idPadre = $_POST['idPadre'];
    } else {
        $idPadre = "";
    }
    if (isset($_GET['origen'])) {
        $OrigenSegundaInstancia = @$_GET['origen'];
    }
    if (isset($_POST['juzgadoOrigenArbol'])) {
        $cveJuzgadoOrigenArbol = @$_POST['juzgadoOrigenArbol'];
    }
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
        .optionprom{
            height: 10px;
        }

        .required{
            color: red;
        }
        .needed:after {
            color:darkred;
            content: " (*)";
        }



    </style>
    <input type="hidden" id="hiddencveJuzgadoOrigenArbol" value="<?php echo $cveJuzgadoOrigenArbol; ?>" >
    <input type="hidden" id="hiddencveAdcripcion" value="<?php echo $_SESSION['cveAdscripcion']; ?>" >
    <input type="hidden" id="hddIdPadre" value="<?php echo $idPadre; ?>">
    <input type="hidden" id="hiddenArbolTipoCarpeta" value="<?php echo $cveTipoCarpeta; ?>" >
    <input type="hidden" id="hiddenArbolIdReferencia" value="<?php echo $idReferencia; ?>" >
    <input type="hidden" id="hiddenIdCarpetaJudicial" value="<?php echo $idCarpetaJudicialArbol; ?>" >
    <input type="hidden" id="hiddenCveTipoCarpeta" value="">
    <input type="hidden" id="hiddenCveUsuarioSistema" value="<?php echo $cveUsuarioSistema ?>">
    <input type="hidden" id="hiddenCveAdscripcion" value="<?php echo $_SESSION["cveAdscripcion"]; ?>" >
    <input type="hidden" id="hiddenIdActuacion" value="<?php echo $idActuacion; ?>">
    <!--<input type="hidden" id="hiddenIdActuacion" value="30">-->
    <input type="hidden" id="hiddenIdComparecencia" value="">
    <div class = "panel panel-default" id="ComparecenciasPrincipal">
        <div class="panel-heading">
            <h5 class="panel-title">                                                            
                Registro de Comparecencias
            </h5>
        </div>
        <div class="panel-body">

            <div id="divFormulario" class="form-horizontal" data-step="1" data-intro="Este m&oacute;dulo le permite registrar una nueva comparecencia, el cual puede ser modificado y/o eliminado." data-position='top'>
                <div id="divCampos">
                    <div id="Juzgado" class="form-group " style="">
                        <label class="control-label col-md-3 needed" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'><?php echo $OrigenSegundaInstancia == 1 ? ( "Tribunal de alzada") : ( "Juzgado"); ?>:</label>
                        <div class="col-md-9">
                            <select class="form-control " name="cmbJuzgados" id="cmbJuzgados" onchange="filtrarTipoCarpeta()">
                                <option selected="">Seleccione una opcion</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 needed">Relacionado con:</label>
                        <div class="col-md-9">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado" name="cmbTipoCarpeta" id="cmbTipoCarpeta" onchange="changeLabel(this, '')">
                                <option value="0">Seleccione una opcion</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 needed" id="lblRelationName">No.<span id="tipoRelacion"></span></label>
                        <div id="divSinRelacion" class="col-md-9">
                            <input  type="text" id="txtNumero" class="form-inline Relacionado" id="txtNumero" placeholder="N&uacute;mero">/<input value="<?php echo $anioActual; ?>" type="text" class="form-inline Relacionado" id="txtAnio" id="txtAnio" placeholder="A&ntilde;o" maxlength="4"> 
                        </div>

                        <div class="col-md-2">
                            <div id="divSinRelacionMsg" class="col-md-3" style="margin-left: 9%;">
                            </div>
                        </div>

                    </div>

                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 needed">S&iacute;ntesis: </label>

                        <div class="col-md-9">
                            <input type="text" id="txtSintesis" placeholder="S&iacute;ntesis" class="form-control text-uppercase" value=""/>
                        </div>                          
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 needed">Persona que da f&eacute; p&uacute;blica, sin t&iacute;tulo de grado: </label>
                        <div class="col-md-7">
                            <input type="text" id="txtPersonaFePublica" placeholder="Nombre sin el t&iacute;tulo de la persona que da f&eacute; p&uacute;blica" class="form-control text-uppercase" value=""/>
                            <input type="hidden" id="hiddenPersonaFePublica" value="">
                        </div> 
                        <div class="col-md-2">
                            <button style="margin: 0px;" type="button" class="btn btn-default btn-lg form-control" onclick="buscarPersonaFePublica()">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </button>
                        </div>
                    </div>

                    <!--                tabla web service-->
                    <div class="form-group">
                        <label class="control-label col-md-3"></label>
                        <div id="divConsultaPersonasFePublica" class="col-md-9" >
                            <div id="divTableResultPersonaFePublica" class="col-md-8" style="width: 50%;">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 needed">Lugar comparecencia: </label>
                        <div class="col-md-9">
                            <input type="text" id="txtLugarComparecencia" placeholder="Lugar de comparecencia" class="form-control text-uppercase" value="<?php echo $_SESSION['desAdscripcion']; ?>"/>
                        </div> 
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 needed">Fecha/Hora de la comparecencia: </label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="fecha_comparecencia" id="fecha_comparecencia" value="<?php echo $fechaHoraHoy; ?>" placeholder="dd/mm/yyyy hh:mm"/>
                        </div> 
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3">Tipo de persona: </label>

                        <div class="col-md-7" id="divTiposPersonas">

                        </div>
                        <div class="col-md-2" id="divGeneros">
                            <select class="form-control " name="cmbGeneros" id="cmbGeneros">
                                <!--                        <option value="0">Seleccione una opcion</option>-->
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Tipo parte: </label>
                        <div class="col-md-9" id="divTiposPartes">
                            <select class="form-control " name="cmbTiposPartes" id="cmbTiposPartes" >
                                <option disabled selected="">Seleccione una opcion</option>
                            </select>
                        </div>
                    </div>

                    <div id="divComparecentes" class="form-group rnActor">
                        <label class="control-label col-md-3">Compareciente:</label>


        <!--                    <div class="col-md-2 divNombre" ><input
                                    type="text" name="txtPaternoAct" id="txtPaternoAct"
                                    value="" placeholder="Paterno" class="form-control txtActor"
                                    onKeyPress="return capturaNombrePersona(event, 'txtMaternoAct', 'txtActor', 'lstComparecentes', 'rd');" /></div>
                            <div class="col-md-2 divNombre" ><input
                                    type="text" name="txtMaternoAct" id="txtMaternoAct"
                                    value="" placeholder="Materno" class="form-control txtActor"
                                    onKeyPress="return capturaNombrePersona(event, 'txtNombreAct', 'txtActor', 'lstComparecentes', 'rd');" /></div>
                            <div class="col-md-2"><input
                                    type="text" name="txtNombreAct" id="txtNombreAct"
                                    value="" placeholder="Nombre(s)" class="form-control txtActor"
                                    onKeyPress="return capturaNombrePersona(event, 'agregaPersona', 'txtActor', 'lstComparecentes', 'rd');" /></div>-->
                        <div class="col-md-2 divNombre" ><input
                                type="text" name="txtPaternoAct" id="txtPaternoAct"
                                value="" placeholder="Paterno" class="form-control txtActor text-uppercase"
                                /></div>
                        <div class="col-md-2 divNombre" ><input
                                type="text" name="txtMaternoAct" id="txtMaternoAct"
                                value="" placeholder="Materno" class="form-control txtActor text-uppercase"
                                /></div>
                        <div class="col-md-2"><input
                                type="text" name="txtNombreAct" id="txtNombreAct"
                                value="" placeholder="Nombre(s)" class="form-control txtActor text-uppercase"
                                /></div>

                    </div>

                    <div id="divListaEmpleado" class="form-group">
                        <label class="control-label col-md-3 needed">Lista compareciente(s):</label>
                        <div class="col-md-9">
                            <input type="text" id="hddIdPersonaComparecencia">
                            <input type="submit" id="idModificar" class="btn btn-primary btn-sm" style="cursor: pointer;float: right;margin-left: 2px;" onclick=" capturaNombrePersona(event, 'agregaPersona', 'txtActor', 'lstComparecentes', 'rd');" value="Modificar"</span>
                            <input type="submit" id="idAgregar" class="btn btn-primary btn-sm" style="cursor: pointer;float: right;margin-right: 2px;" onclick=" capturaNombrePersona(event, 'agregaPersona', 'txtActor', 'lstComparecentes', 'rd');" value="Agregar"</span>
                            <select
                                multiple=""
                                name="lstComparecentes" id="lstComparecentes"
                                class="form-control"
                                onclick="consultaComparecente(this.value);"
                                onDblClick="borraPersona(this.id);" style="height: 200px" ></select>
                        </div>
                    </div>
                    <!--                <div id="Juzgado" class="form-group" style="">
                                        <label class="control-label col-md-3 needed">Juzgado:</label>
                                        <div class="col-md-9">
                                            <select class="form-control " name="cmbJuzgados" id="cmbJuzgados">
                                                <option disabled selected="">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>-->
                    <div id="divObservaciones" class="form-group">
                        <label class="control-label col-md-3">Contenido del documento:</label>
                        <div class="col-md-9">
                            <!--<textarea rows="5" id="txtObservaciones" class="form-control" placeholder="Observaciones"></textarea>-->
                            <!--                    </div>
                                            <div>-->
                            <script id="txtObservaciones" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                        </div>               
                    </div>

                    <br>
                    <br>
                    <br>
                    <div class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <div class="col-md-2 botonesAdaptar" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar una comparecencia." data-position='top'>
                                <input type="submit" class="btn btn-primary btn-adaptar" id="inputGuardar" value="Guardar" onclick="guardarComparecencia();" >                                                                
                            </div>
                            <div class="col-md-2 botonesAdaptar" data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top'>
                                <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar();" >                                    
                            </div>
                            <div class="col-md-2 botonesAdaptar">                            
                                <input type="submit" class="btn btn-primary btn-adaptar" id="inputConsultar" value="Consultar" onclick="consultar('divCamposConsulta');" style="display: none;">                                    
                            </div>
                            <div class="col-md-2 botonesAdaptar" >                            
                                <input type="submit" class="btn btn-primary btn-adaptar" id="inputEliminar" value="Eliminar" onclick="eliminarComparecencia()" > 
                            </div>
                            <div class="col-md-2 botonesAdaptar" >
                                <input type="submit" class="btn btn-primary btn-adaptar" id="inputImprimir" value="Imprimir" onclick="imprimeReciboUnico();" >                            
                            </div>
                            <div class="col-md-2 botonesAdaptar">                        
                                <button class="btn btn-primary btn-adaptar" id="inputDigitalizar" onclick="javascript:digitalizarAcuerdo();" style="display: none">Digitalizar</button>
                            </div>
                            <div class="col-md-2 botonesAdaptar">                        
                                <button class="btn btn-primary btn-adaptar" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos();" style="display: none">Visor</button>
                            </div>
                            <div class="col-md-2 botonesAdaptar">                        
                                <button class="btn btn-primary btn-adaptar" id="inputPDF" data-toggle="modal" onclick="enviar();" style="display: none">Generar PDF</button>
                            </div>
                            <div class="col-md-2 botonesAdaptar" >
                                <input type="submit" class="btn btn-primary btn-adaptar" id="inputRegresar" value="Regresar" onclick="regresar();" style="display: none;">                                                                
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div id="divCamposConsulta" class="form-horizontal" style="display: none">
                <div class="form-group">
                    <label class="control-label col-md-4 ">Consulta de Comparecencias</label>
                </div>
                <div id="JuzgadoConsulta" class="form-group" style="">
                    <label class="control-label col-md-3"><?php echo $OrigenSegundaInstancia == 1 ? ( "Tribunal de alzada") : ( "Juzgado"); ?>:</label>
                    <div class="col-md-9">
                        <select class="form-control " name="cmbJuzgadosConsultas" id="cmbJuzgadosConsultas" onchange="filtrarTipoCarpetaConsulta()">
                            <option selected="">Seleccione una opcion</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Relacionado con:</label>
                    <div class="col-md-9">
                        <div id="divCmbRelaciones" class="logobox"></div>
                        <select class="form-control Relacionado" name="cmbTipoCarpeta2" id="cmbTipoCarpeta2" onchange="changeLabel(this, 2)">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3" id="lblRelationName2">No.<span id="tipoRelacion2"></span></label>
                    <div id="divSinRelacion2" class="col-md-9">
                        <input type="text" id="txtNumero2" class="form-inline Relacionado" id="txtNumero2" placeholder="N&uacute;mero">/<input type="text" class="form-inline Relacionado" id="txtAnio2" id="txtAnio2" placeholder="A&ntilde;o">
                    </div>
                    <div class="col-md-2">
                        <div id="divSinRelacionMsg" class="col-md-3">

                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3">Tipo parte: </label>
                    <div class="col-md-9" id="divTiposPartes2">
                        <select class="form-control " name="cmbTiposPartes2" id="cmbTiposPartes2" >
                            <option disabled selected="">Seleccione una opcion</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-9">
                        <label class="control-label col-md-4" id="lblRelationName">Fecha Inicial</label>
                        <div class="col-md-3">
                            <input type="text" id="txtfechaInicial" placeholder="FECHA INICIAL" class="form-control datepicker" value="<?php echo $fechaHoy; ?>"/>
                        </div>
                        <label class="control-label col-md-1" id="lblRelationName">Fecha Final</label>
                        <div class="col-md-3">
                            <input type="text" id="txtfechaFinal" placeholder="FECHA FINAL" class="form-control datepicker" value="<?php echo $fechaHoy; ?>"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-offset-3 col-md-9">
                        <div class="col-md-2 botonesAdaptar" >
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputBuscar" value="Buscar" onclick="buscarComparecencias();" >                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar" >
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputRegresar" value="Regresar" onclick="changeDivForm(1);" >                                    
                        </div>
                        <div class="col-md-2 botonesAdaptar" >
                            <input type="submit" class="btn btn-primary btn-adaptar" id="inputLimpiar" value="Limpiar" onclick="limpiar();" >
                        </div>
                    </div>
                </div>

                <!--<div id="divTableResult"></div>-->

                <!--            <div id="divConsulta" style="display: none">                            
                                <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(1);
                                        $('#cmbPaginacion').val(0)">                                    
                                <div class="form-group">
                                    <label class="control-label col-md-3" id="totalReg"></label>
                                </div>
                                <div id="divPaginador" >
                                    <label class="control-label col-md-3">Pagina:</label>
                                    <select class="form-control" name="cmbPaginacion" id="cmbPaginacion" onchange="consultarAcuerdos();">
                                        <option value="0">seleccione pagina </option>
                                    </select>
                                </div>
                            </div>-->

            </div>
            <div id="divConsulta" style="display: none" class="col-md-12">
                <div class="col-md-12">
                    <div class="col-md-2">
                        <input type="submit" class="btn btn-primary" value="Regresar" onclick="changeDivForm(2);
                                $('#cmbPaginacion').val(1)">
                        <input type="submit" class="btn btn-primary" value="Imprimir" onclick="imprimeReciboTable();">
                    </div>
                    <!--                <div class="col-md-1">
                                                                                            
                                    </div>-->
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
                </div>

                <div id="divTableResult" class="col-md-12" style="overflow: auto;">
                </div>
            </div>
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
            <div id="imprimir" style="display: none;">
                <div id="printable" ></div>
                <div id="botones">
                    <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="changeDivForm();" style="display: block"> 
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
        @media print {
            #divTableResult{
                width:100%;
                font-size:14px;
                border-collapse:collapse;
                font-family: "Courier New", Courier, monospace;
            }
            #tblResultadosGrid th{
                width:30%;
                font-weight:bold;
            }
        }
        #hddTableImprimir{
            visibility: hidden;
        }
    </style>
    <body>
        <div id="hddTableImprimir">
            <table style='width:100%; font-size:14px; border-collapse:collapse; font-family: "Courier New", Courier, monospace;'>
                <tr id="encabezado">
                    <td style="width:30%; font-weight:bold; border-bottom:solid black 2px;" align="left">
                        <img src="../vistas/img/EscudoEstadoMexico.png" height="90" width="85">
                    </td>
                    <td style="font-size:16px; font-weight:bold; border-bottom:solid black 2px;">
                        Gobierno del Estado de M&eacute;xico<br> Poder Judicial del Estado de M&eacute;xico<br>Consejo de la Judicatura<br>Comprobante de Comparecencias
                    </td>
                    <td style="padding-left:5px; border-bottom:solid black 2px;" align="left">
                        <img src="../vistas/img/EscudoPoderJudicial.png" height="90" width="85">
                    </td>
                </tr>
                <tr>
                    <th style="text-align: right;width:30%; font-weight:bold;">Relacionado con:</th>
                    <td><span id="spanRelacionadoCon"></span></td>
                </tr>
                <tr>
                    <th style="text-align: right;width:30%; font-weight:bold;">N&uacute;mero/A&ntilde;o:</th>
                    <td><span id="spanNumeroAnioRelacionado"></span></td>
                </tr>
                <tr>
                    <th style="text-align: right;width:30%; font-weight:bold;">Persona que da fe p&uacute;blica:</th>
                    <td><span id="spanPersonaFePublica"></span></td>
                </tr>
                <tr>
                    <th style="text-align: right;width:30%; font-weight:bold;">Lugar de comparecencia:</th>
                    <td><span id="spanLugarComparecencia"></span></td>
                </tr>
                <tr>
                    <th style="text-align: right;width:30%; font-weight:bold;">Fecha y hora de comparecencia:</th>
                    <td><span id="spanFechaHoraComparecencia"></span></td>
                </tr>
                <tr>
                    <th style="text-align: right;width:30%; font-weight:bold;">Compareciente:</th>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table id="idTableComparecentes" style="text-align: center;margin-left: 15%;padding-left: 15%;">
                            <tr style="padding: 10px;">
                                <th>N&uacute;m</th>
                                <th>Nombre</th>
                                <th>Tipo Persona</th>
                                <th>Tipo Parte</th>
                                <th>Sexo</th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <th style="text-align: right;width:30%; font-weight:bold;">Observaciones:</th>
                    <td><span id="spanObservaciones"></span></td>
                </tr>
            </table>
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
    //        //alert("inicio0000");
            var instancia = null;
            var createRecord = 'N';
            var readRecord = 'N';
            var updateRecord = 'N';
            var deleteRecord = 'N';
            var carpetaJudicial = false;
            var juzgadoSesion = <?php echo $_SESSION['cveAdscripcion']; ?>;
            var cveUsuarioSesion = <?php echo $_SESSION["cveUsuarioSistema"]; ?>;
            var cvePerfilSesion = <?php echo $_SESSION["cvePerfil"]; ?>;
            if (editor != undefined) {
                editor.destroy();
    //            //alert("destroy0");
            } else {
    //            //alert("nada");

            }
            var editor = null;
            digitalizarAcuerdo = function () {
                //idcarpeta
                //idactuacion
                //desc carpeta/actuacion
                //desc juzgado 
                //numero de la carpeta/actuacion
                //a�o de la carpeta/actuacion
                //cve documento
                //usuario
                var strl;
                strl = "0-" + $("#hiddenIdActuacion").val() + "-COMPARECENCIA-<?php echo $_SESSION["desAdscripcion"]; ?>-" + $("#txtNumero").val() + "-" + $("#txtAnio").val() + "-1-<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
                strl += "-http://10.22.165.204/sigejupev2/fachadas/sigejupe/imagenes/ImagenesFacade.Class.php";
                strl += "-http://10.22.165.204/sigejupev2/vistas/digitalizacion";
                launchDigitalizador(strl);
            };
            visorDocuemntos = function () {
                $.ajax({
                    type: 'POST',
                    url: 'visorpdf/index.php',
                    data: {idCarpetaJudicial: "", idActuacion: $('#hiddenIdActuacion').val(), cveTipoDocumento: 21}, //malo
    //                data: {idCarpetaJudicial: 0, idActuacion: 14525, cveTipoDocumento: 13}, //bueno
                    async: false,
                    dataType: 'html',
                    beforeSend: function () {
                        $('#visor').html('<h3>Consultando informaci�n ... espere.</h3>');
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
                strDatos += "&cveTipoDocumento=21"; //tipo documento
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
            generaPDF = function (json) {
                var strDatos = "json=" + json;

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/firmapdf/FirmaPdfFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.type == "ok") {
                            alert("satisfactorio");
                        } else {
                            alert(json.mensaje);
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
            $("#cmbJuzgados").change(function () {
                $("#hiddenPersonaFePublica").val("");
                juzgadoSesion = $("#cmbJuzgados").val();
    //            cambiarCarpetasDisponibles(-1);
    //            cambiarCarpetasDisponibles(juzgadoSesion);
                $(".Relacionado").focusout();
                if ($("#txtPersonaFePublica").val() != "") {
                    buscarPersonaFePublica();
                }
            });
            $("#cmbTiposPartes").change(function () {
                $("#divTiposPartes").removeClass("has-error");
            });
            $("#txtPaternoAct, #txtMaternoAct, #txtNombreAct").focusout(function () {
                $(".divNombre").removeClass("has-error");
            });

            $('#txtPersonaFePublica').keypress(function (e) {
                if (e.which == 13) {
                    jQuery(this).blur();
                    buscarPersonaFePublica();
                }
            });
            $("#inputEliminar").hide();
            $("#inputImprimir").hide();
            $("#idModificar").hide();
            $("#cmbTipoCarpeta").change(function () {
                $(".required").remove();
            });
            $("#hddIdPersonaComparecencia").hide();

            //bloqueParaSoloNumeros("txtNumero");
            //bloqueParaSoloNumeros("txtAnio"); 
            $("#txtPaternoAct, #txtMaternoAct, #txtNombreAct").keypress(function (key) {
                ////alert(key.charCode);
                //        if((key.charCode == 39 || key.charCode == 34 || key.charCode == 37|| key.charCode == 37|| key.charCode == 36|| key.charCode == 59)) return false;
                if ((key.charCode < 225 || key.charCode > 252) && (key.charCode < 48 || key.charCode > 57) && (key.charCode < 97 || key.charCode > 122) && (key.charCode < 65 || key.charCode > 90) && (key.charCode != 45) && (key.charCode != 0) && (key.charCode != 32))
                    return false;
            });
            $("#txtNumero , #txtAnio").keypress(function (key) {
                ////alert(key.charCode);
                //        if((key.charCode == 39 || key.charCode == 34 || key.charCode == 37|| key.charCode == 37|| key.charCode == 36|| key.charCode == 59)) return false;
                if ((key.charCode < 48 || key.charCode > 57) && (key.charCode != 0) && (key.charCode != 32))
                    return false;
            });
    //        cambiarCarpetasDisponibles = function (j){
    ////          $("#cmbTipoCarpeta").children('option[value="2"]').show();
    //            $("#cmbTipoCarpeta").children('option[value="1"]').show();
    //             var str = "";
    //            $( "#cmbJuzgados option:selected" ).each(function() {
    //                str += $( this ).text() + " ";
    //                //alert(str);
    //            });
    //        };
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

            imprimeReciboUnico = function () {
                $("#idImp").remove();
                var valorRelacionado = $("#cmbTipoCarpeta option:selected").html();
                ////alert(valorRelacionado);
                $("#spanFechaHoraComparecencia").text($("#fecha_comparecencia").val());
                $("#spanNumeroAnioRelacionado").text($("#txtNumero").val() + "/" + $("#txtAnio").val());
                $("#spanPersonaFePublica").text($("#txtPersonaFePublica").val());
                $("#spanLugarComparecencia").text($("#txtLugarComparecencia").val());
    //            $("#spanObservaciones").text($("#txtObservaciones").val());
                $("#spanObservaciones").html(editor.getContent());
    //            $("#spanObservaciones").text(encodeURIComponent(UE.getEditor('txtObservaciones').getContent()));
                $("#spanRelacionadoCon").text(valorRelacionado);
                //        var personasImprimir = "";
                //        $.each(listaComparecentesImprimir, function (index, element) {
                //            if (element.cveTipoPersona == 2 || element.cveTipoPersona == 3) {
                //                personasImprimir += "<tr>";
                //                personasImprimir += "<td>" + index + "</td>";
                //                personasImprimir += "<td>" + element.nombrePersonaMoral + "</td>";
                //                personasImprimir += "<td>" + element.cveTipoPersona + "</td>";
                //                personasImprimir += "<td>" + element.cveTipoParte + "</td>";
                //                personasImprimir += "<td>" + element.cveGenero + "</td>";
                //                personasImprimir += "</tr>";
                //            } else {
                //                personasImprimir += "<tr>";
                //                personasImprimir += "<td>" + index + "</td>";
                //                personasImprimir += "<td>" + element.paterno + "  + element.materno + " + element.paterno + " </td>";
                //                personasImprimir += "<td>" + element.cveTipoPersona + "</td>";
                //                personasImprimir += "<td>" + element.cveTipoParte + "</td>";
                //                personasImprimir += "<td>" + element.cveGenero + "</td>";
                //                personasImprimir += "</tr>";
                //            }
                //        });  
                //        //alert(personasImprimir);
                w = window.open("", 'Print_Page', 'scrollbars=yes');
                $("#hddTableImprimir").append('<input id="idImp" class="align-content: center;" type="button" onClick="window.print()" value="Imprimir" />');
                w.document.write($("#hddTableImprimir").html());
                $("#idImp").remove();

            };

            imprimeReciboTable = function () {
                $("#idImpT").remove();
                var tableHTML = "<table>";
                tableHTML += '<tr>';
                tableHTML += '    <td style="width:40%; font-weight:bold; border-bottom:solid black 2px;" align="left">';
                tableHTML += '        <img src="../vistas/img/EscudoEstadoMexico.png" height="90" width="85">';
                tableHTML += '    </td>';
                tableHTML += '    <td style="font-size:16px; font-weight:bold; border-bottom:solid black 2px;">';
                tableHTML += '        Gobierno del Estado de M&eacute;xico<br> Poder Judicial del Estado de M&eacute;xico<br>Consejo de la Judicatura<br>Comprobante de Comparecencias';
                tableHTML += '    </td>';
                tableHTML += '    <td style="width:40%;padding-left:5px; border-bottom:solid black 2px;" align="right">';
                tableHTML += '        <img src="../vistas/img/EscudoPoderJudicial.png" height="90" width="85">';
                tableHTML += '    </td>';
                tableHTML += '</tr>';
                tableHTML += '</table>';
                ////alert("Imprime Table");
                ////alert($("#divTableResult").html());
                //$("#divTableResult").prepend(tableHTML);
                w = window.open("", 'Print_Page', 'scrollbars=yes');
                $("#divTableResult").append('<input id="idImpT" class="align-content: center;" type="button" onClick="window.print()" value="Imprimir" />');
                w.document.write(tableHTML + $("#divTableResult").html());
                $("#idImpT").remove();

            };
            changeDivForm = function (n) {
                if (n == 1) {
                    $("#divCamposConsulta").hide();
                    $("#divCampos").show();
                }
                if (n == 2) {
                    $("#divCamposConsulta").show();
                    $("#divConsulta").hide();
                }
            };
            consultaComparecente = function (e) {
    //            carpetaJudicial = true;
                if (e != "") {
                    $("#idAgregar").hide();
                    $("#idModificar").show();
                    var datos = e.split(";");
                    ////alert(datos[2]);
                    $("#hddIdPersonaComparecencia").val(e);
                    if (datos[2] == 1) {
                        $("[name = 'rd'][value='1']").prop('checked', true);
                        //            $("#rd1").attr("checked", true);
                        //            $("#rd2").attr("checked", false);
                        //            $("#rd3").attr("checked", false);
                        //$("[name = 'rd']").checkboxradio('refresh');
                        ocultarCampos(1);

                    }
                    if (datos[2] == 2) {
                        $("[name = 'rd'][value='2']").prop('checked', true);
                        //            $("#rd1").attr("checked", false);
                        //            $("#rd2").attr("checked", true);
                        //            $("#rd3").attr("checked", false);
                        //$("[name = 'rd']").checkboxradio('refresh');
                        ocultarCampos(2);

                    }
                    if (datos[2] == 3) {
                        $("[name = 'rd'][value='3']").prop('checked', true);
                        //            $("#rd1").attr("checked", false);
                        //            $("#rd2").attr("checked", false);
                        //            $("#rd3").attr("checked", true);
                        //$("[name = 'rd']").checkboxradio('refresh');
                        ocultarCampos(3);

                    }

                    ////alert($("#rd" + datos[1]).attr("checked", true));
                    ////alert($('input:radio[name=rd]:checked').val());
                    $("#cmbGeneros").val(datos[3]);
                    $("#cmbTiposPartes").val(datos[4]);
                    $("#txtPaternoAct").val(datos[5]);
                    $("#txtMaternoAct").val(datos[6]);
                    $("#txtNombreAct").val(datos[7]);
                }

            }
            getPaginas = function (pag, cantReg) {
                var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
                var accion = "getPaginasComparecencias";
                var tipoRelacion2 = $("#cmbTipoCarpeta2").val();
                var txtNumero2 = $("#txtNumero2").val();
                var txtAnio2 = $("#txtAnio2").val();
                var cmbTiposPartes2 = $("#cmbTiposPartes2").val();
                var txtfechaInicial = $("#txtfechaInicial").val();
                var txtfechaFinal = $("#txtfechaFinal").val();
                var cveAdscripcion = $("#hiddenCveAdscripcion").val();
                var strDatos = "accion=getPaginasComparecencias";
                var cantReg = $("#cmbNumReg").val();
                //var pag = $("#cmbPaginacion").val();

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                    data: {
                        accion: accion,
                        txtFecInicialBusqueda: txtfechaInicial,
                        txtFecFinalBusqueda: txtfechaFinal,
                        txtTiposPartes: cmbTiposPartes2,
                        anio: txtAnio2,
                        numero: txtNumero2,
                        cveTipoCarpeta: tipoRelacion2,
                        cveJuzgado: cveAdscripcion,
                        cveTipoActuacion: "16",
                        cantxPag: cantReg
                    },
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        //$('#barCarga').html('<center> <br/><img src="../img/cargando.gif" width="80"/></center>');  
                    },
                    success: function (datos) {
                        ////alert("get Paginas");
                        ////alert(datos.type);
                        var json = "";
                        //json = eval("(" + datos + ")"); //Parsear JSON
                        ////alert(datos);
                        if (datos.totalCount > 0) {
                            //                    $('#cmbPaginacion').find('option').remove().end().append('<option value="0"></option>').val('0');
                            $('#cmbPaginacion').find('option').remove().end();

                            for (var i = 0; i < (parseInt(datos.total)); i++) {
                                $("#cmbPaginacion").append($('<option></option>').val(datos.data[i].pagina).html(datos.data[i].pagina));
                            }
                            $("#totalReg").html("<b> Total: " + datos.totalCount + "</b>");
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
                        //////alert("Error en la peticion:\n\n" + quepaso);
                        //                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        //                    $("#divAlertDager").show("slide");
                        //                    setTimeAlert("divAlertDager");
                    }
                });
            };
            obtenerPersonasComparecenciasHTML = function (arrayPersonas) {
                personas = "";
                $.each(arrayPersonas, function (index, element) {
                    if (element.cveTipoPersona == 2 || element.cveTipoPersona == 3) {
                        personas += "<b> " + element.nombrePersonaMoral + " </b><br>";
                    } else {
                        personas += "<b> " + element.nombre + " " + element.paterno + " " + element.materno + " </b><br>";
                    }
                });
                return personas;
            };
            function seleccionarActuacionModificar(actuacion, personas, personasFePublica, origin) {
                $("#inputVisor").show();
                $("#inputPDF").show();
                console.log("seleccionarActuacionModificar");
                console.log(actuacion);
                console.log(personas);
                console.log(personasFePublica);
                console.log(origin);
    //            editor.setContent("", false);
                carpetaJudicial = true;
                ////alert(personasFePublica);
                $("#divConsultaPersonasFePublica").hide();
                $("#idModificar").hide();
                $("#idAgregar").show();

                $("#cmbTipoCarpeta").prop("disabled", true);
                $("#txtNumero").prop("disabled", true);
                $("#txtAnio").prop("disabled", true);
                $("#cmbJuzgados").prop("disabled", true);
                $("#cmbJuzgados").val(actuacion.cveJuzgado);

                $("#inputEliminar").show();
                $("#divCamposConsulta").hide();
                $("#inputImprimir").show();
                $("#divConsulta").hide();
                $("#cmbTiposPartes").val(1);
                //var actuacion = jQuery.parseJSON(actuacion);
                //var personas = jQuery.parseJSON(personas);
                //            var cveUsuarioSistema = $("#hiddenCveUsuarioSistema").val();
                //            ////alert("cveUsuarioSistema "+cveUsuarioSistema);
                $("#hiddenIdActuacion").val(actuacion.idActuacion);
                ////alert("hiddenIdActuacion "+actuacion.idActuacion);
                $("#cmbTipoCarpeta").val(actuacion.cveTipoCarpeta);
                ////alert("cveTipoCarpeta "+actuacion.cveTipoCarpeta);
                $("#txtNumero").val(actuacion.numero);
                ////alert("numero "+actuacion.numero);
                $("#txtAnio").val(actuacion.anio);
                ////alert("anio "+actuacion.anio);
                $("#hiddenIdCarpetaJudicial").val(actuacion.idReferencia);
                ////alert("idReferencia "+actuacion.idReferencia);
                $("#txtSintesis").val(actuacion.Sintesis);
                ////alert("sintesis "+actuacion.Sintesis);
                ////alert(actuacion.horaComparecencia);
                var tmp_fechahora1 = actuacion.horaComparecencia;
                ////alert(tmp_fechahora1);
                var tmp_fechahora = tmp_fechahora1.split(' ');
                ////alert(tmp_fechahora);
                var tmp_fecha = tmp_fechahora[0].split('-');
                ////alert(tmp_fecha);
                var fechaHoraComparecencia = tmp_fecha[2] + '/' + tmp_fecha[1] + '/' + tmp_fecha[0] + ' ' + tmp_fechahora[1];
                ////alert(fechaHoraComparecencia);
                $("#fecha_comparecencia").val(fechaHoraComparecencia);
                $("#txtLugarComparecencia").val(actuacion.lugarComparecencia);
                ////alert("lugarComparecencia "+actuacion.lugarComparecencia);
                //$("#fecha_comparecencia").val(actuacion.horaComparecencia);
                ////alert("fechaHoraComparecencia "+actuacion.horaComparecencia);
    //            $("#txtObservaciones").val(actuacion.observaciones);
    //            var content = actuacion.observaciones;
                if (origin != "ok")
                    var content = $("#doc" + actuacion.idActuacion).html();
                else
                    var content = actuacion.observaciones;
    //            //alert(content);
                llenareditor(content);
    //            editor.setContent(actuacion.observaciones, false);
                ////alert("observaciones "+actuacion.observaciones);
                $("#hiddenPersonaFePublica").val(actuacion.numEmpleadoFePublica);
                $("#hiddenIdComparecencia").val(actuacion.idComparecencia);
                ////alert("hiddenPersonaFePublica "+actuacion.numEmpleadoFePublica);
                //nombreFePub = obtenerNombreFePublicaById(personasFePublica, actuacion.numEmpleadoFePublica);
                nombreFePub = personasFePublica;
                ////alert(nombreFePub)
                $("#txtPersonaFePublica").val(nombreFePub);
                ////alert("PERSONAS SIZE: " + personas.length);
                personashtml = "";
                personahtmltable = "";
                $.each(personas, function (index, element) {
                    ////alert(element.nombre);
                    var tipoParteTable = "";
                    var tipoPersonaTable = "";
                    var generoTable = "";
                    if (element.cveTipoPersona == 2 || element.cveTipoPersona == 3) {
                        if (element.cveTipoPersona == 1)
                            tipoPersonaTable = "PERSONA FISICA";
                        if (element.cveTipoPersona == 2)
                            tipoPersonaTable = "PERSONA MORAL";
                        if (element.cveTipoPersona == 3)
                            tipoPersonaTable = "OTRA";
                        if (element.cveGenero == 1)
                            generoTable = "HOMBRE";
                        if (element.cveGenero == 2)
                            generoTable = "MUJER";
                        if (element.cveGenero == 3)
                            generoTable = "NO DEFINIDO";
                        if (element.cveTipoParte == 1)
                            tipoParteTable = "IMPUTADO";
                        if (element.cveTipoParte == 2)
                            tipoParteTable = "OFENDIDO";
                        if (element.cveTipoParte == 3)
                            tipoParteTable = "SENTENCIADO";
                        if (element.cveTipoParte == 4)
                            tipoParteTable = "VICTIMA";
                        if (element.cveTipoParte == 5)
                            tipoParteTable = "PROMOVENTE";
                        personashtml += "<option   value='S;" + element.idPersonacomparecencia + ";" + element.cveTipoPersona + ";" + element.cveGenero + ";" + element.cveTipoParte + ";" + ";" + ";" + element.nombrePersonaMoral + "'> " + element.nombrePersonaMoral + " </option>";
                        personahtmltable += "<tr class='rt'><td>" + parseInt((index) + 1) + "</td><td>" + element.nombrePersonaMoral + "</td><td>" + tipoPersonaTable + "</td><td>" + tipoParteTable + "</td><td>" + generoTable + "</td></tr>";
                    } else {
                        if (element.cveTipoPersona == 1)
                            tipoPersonaTable = "PERSONA FISICA";
                        if (element.cveTipoPersona == 2)
                            tipoPersonaTable = "PERSONA MORAL";
                        if (element.cveTipoPersona == 3)
                            tipoPersonaTable = "OTRA";
                        if (element.cveGenero == 1)
                            generoTable = "HOMBRE";
                        if (element.cveGenero == 2)
                            generoTable = "MUJER";
                        if (element.cveGenero == 3)
                            generoTable = "NO DEFINIDO";
                        if (element.cveTipoParte == 1)
                            tipoParteTable = "IMPUTADO";
                        if (element.cveTipoParte == 2)
                            tipoParteTable = "OFENDIDO";
                        if (element.cveTipoParte == 3)
                            tipoParteTable = "SENTENCIADO";
                        if (element.cveTipoParte == 4)
                            tipoParteTable = "VICTIMA";
                        if (element.cveTipoParte == 5)
                            tipoParteTable = "PROMOVENTE";
                        personashtml += "<option   value='S;" + element.idPersonacomparecencia + ";" + element.cveTipoPersona + ";" + element.cveGenero + ";" + element.cveTipoParte + ";" + element.paterno + ";" + element.materno + ";" + element.nombre + "'> " + element.paterno + " " + element.materno + " " + element.nombre + " </option>";
                        personahtmltable += "<tr class='rt'><td>" + parseInt((index) + 1) + "</td><td>" + element.nombre + " " + element.paterno + " " + element.materno + "</td><td>" + tipoPersonaTable + "</td><td>" + tipoParteTable + "</td><td>" + generoTable + "</td></tr>";
                    }
                });
                $("#lstComparecentes").append(personashtml);

                $(".rt").remove();
                $("#idTableComparecentes").append(personahtmltable);
                //$("#divHideForm").hide();
                $("#divCampos").show();
                $("#divCamposConsulta").hide();

            }
            ;
            obtenerNombreFePublicaById = function (pesonas, numFePublica) {
                persona = "";
                $.each(pesonas, function (index, element) {
                    if (element.NumEmpleado == numFePublica) {
                        persona = element.Paterno + " " + element.Materno + " " + element.Nombre;
                    }
                });
                ////alert(persona);
                return persona;
            };
            buscarComparecencias = function (pDefault) {
                var buscar = true;
                $(".required").remove();
                var juzgadoSeleccionado = $("#cmbJuzgadosConsultas").val();
                var accion = "buscarComparecencias";
                var tipoRelacion2 = $("#cmbTipoCarpeta2").val();
                var txtNumero2 = $("#txtNumero2").val();
                var txtAnio2 = $("#txtAnio2").val();
                var cmbTiposPartes2 = $("#cmbTiposPartes2").val();
                var txtfechaInicial = $("#txtfechaInicial").val();
                var txtfechaFinal = $("#txtfechaFinal").val();
                var cveAdscripcion = $("#hiddenCveAdscripcion").val();
                var pag = $("#cmbPaginacion").val();
                var cantReg = $("#cmbNumReg").val();
                if (pDefault != null) {
                    pag = 1
                }
                if (txtfechaInicial === "") {
                    buscar = false;
                    $('#txtfechaInicial').focus();
                    $('#txtfechaInicial').parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione una fecha inicial</label>");
                }
                if (txtfechaFinal === "") {
                    buscar = false;
                    $('#txtfechaFinal').focus();
                    $('#txtfechaFinal').parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione una fecha final</label>");
                }
                if (buscar) {
                    var datosEnviar = {};
                    if ($("#cmbTipoCarpeta2").val() != 0 && $("#txtNumero2").val() != "" && $("#txtAnio2").val() != "") {
                        datosEnviar = {
                            accion: accion,
                            txtTiposPartes: cmbTiposPartes2,
                            anio: txtAnio2,
                            numero: txtNumero2,
                            cveTipoCarpeta: tipoRelacion2,
                            cveJuzgado: cveAdscripcion,
                            cveTipoActuacion: "16",
                            cantxPag: cantReg,
                            cveJuzgado: juzgadoSeleccionado,
                                    pag: pag
                        };
                    } else {
                        datosEnviar = {
                            accion: accion,
                            txtFecInicialBusqueda: txtfechaInicial,
                            txtFecFinalBusqueda: txtfechaFinal,
                            txtTiposPartes: cmbTiposPartes2,
                            anio: txtAnio2,
                            numero: txtNumero2,
                            cveTipoCarpeta: tipoRelacion2,
                            cveJuzgado: cveAdscripcion,
                            cveTipoActuacion: "16",
                            cantxPag: cantReg,
                            cveJuzgado: juzgadoSeleccionado,
                                    pag: pag
                        };
                    }

                    var table = "";
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                        data: datosEnviar,
                        async: true,
                        dataType: "json",
                        beforeSend: function (objeto) {

                        },
                        success: function (datos) {

                            //console.log(datos)
                            ////alert(datos.estatus);
                            if (datos.estatus == "ok") {


                                table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                                table += "    <thead>";
                                table += "        <tr>";
                                table += "            <th>N&uacute;m.</th>";
                                table += "            <th>N&uacute;mero</th>";
                                table += "            <th>A&ntilde;o</th>";
                                table += "            <th>Relacionado con</th>";
                                table += "            <th>S&iacute;ntesis</th>";
                                table += "            <th style='display: none;'>Observaciones</th>";
                                table += "            <th>Fe P&uacute;blica</th>";
                                table += "            <th>Lugar de comparecencia</th>";
                                table += "            <th>Hora comparecencia</th>";
                                table += "            <th>Persona(s) comparecencia</th>";
                                table += "        </tr>";
                                table += "    </thead>";
                                table += "    <tbody>";
                                var totalcount = datos.totalCount;
                                ////alert(" Total:  "+ totalcount);

                                $.each(datos.datos, function (index, element) {
                                    ////alert("S: " + element.Nombre);
                                    var comparecentes = "";
                                    //                        $.each(element.personasComparecencia, function(index2, element2){
                                    ////                            var nombreCompleto = "";
                                    //                            if(element2.cveTipoPersona == 1){
                                    //                                comparecentes += element2.nombre + " " + element2.paterno + " " + element2.materno + " <br>";
                                    //                            }
                                    //                            if(element2.cveTipoPersona  == 2 || element2.cveTipoPersona  == 3){
                                    //                                comparecentes += element2.nombrePersonaMoral + " <br>";
                                    //                            }
                                    //                        });
                                    if (index <= totalcount) {
                                        //////alert("PERSONAS");
                                        //////alert(datos.datos.personas[index]);
                                        var personas = obtenerPersonasComparecenciasHTML(datos.datos.personas[index]);
                                        //////alert(personas);
                                        var jsonElement = "";
                                        var myarray = [];
                                        var observacionesTmp = element.observaciones;
                                        element.observaciones = "";
                                        var JSONActuaciones = JSON.stringify(element);
                                        var JSONPersonas = JSON.stringify(datos.datos.personas[index]);
                                        var JSONPersonasFePublica = JSON.stringify(datos.fepublica[0].data);
                                        var nombreFePublica = obtenerNombreFePublicaById(datos.fepublica[0].data, element.numEmpleadoFePublica);
                                        var nombreCarpeta = $("#cmbTipoCarpeta option[value='" + element.cveTipoCarpeta + "']").text();
                                        table += "<tr onclick='seleccionarActuacionModificar(" + JSONActuaciones + ", " + JSONPersonas + ", \"" + element.Nombre + "\")'>";
                                        table += "      <td>" + (parseInt((cantReg * (pag - 1))) + (parseInt(index) + 1)) + "</td>";
                                        table += "      <td>" + element.numero + "</td>";
                                        table += "      <td>" + element.anio + "</td>";
                                        table += "      <td>" + nombreCarpeta + "</td>";
                                        table += "      <td>" + element.Sintesis + "</td>";
                                        table += "      <td style='display: none;'> <div id='doc" + element.idActuacion + "'> " + observacionesTmp + "</div></td>";
                                        table += "      <td>" + element.Nombre + "</td>";
                                        table += "      <td>" + element.lugarComparecencia + "</td>";
                                        table += "      <td>" + element.horaComparecencia + "</td>";
                                        table += "      <td>" + personas + "</td>";
                                        table += "<tr>";
                                        //totalcount = index;
                                    }
                                });
                                table += "</tbody>";
                                table += "</table>";
                                $("#divCamposConsulta").hide();
                                $("#divHideForm").hide();
                                $("#divTableResult").html(table);
                                $("#divConsulta").show();
                                //                    $("#tblResultadosGrid").DataTable({
                                //                        paging: false
                                //                    });
                                ////alert(datos)
                                getPaginas(datos.pagina, cantReg);
                                //$("#divCamposConsulta").hide();
                            } else {
                                ////alert(datos.mensaje);
                                $("#divHideForm").hide();
                                $("#divTableResult").html(table);
                                $("#divConsulta").hide();
                                $("#divInformacion").show();
                                $("#strInformacion").html("Informaci&oacute;n: " + datos.mensaje);
                                setTimeAlert("divInformacion");
                            }
                        }
                    });
                }
            };
            buscarPersonaFePublica = function () {
                var nombreSinInicialesTitulo = "";
                $("#webServiceRequired").remove();
                $("#hiddenPersonaFePublica").val("");
                if ($("#txtPersonaFePublica").val() != "") {
                    var nombreSinTitulo = $("#txtPersonaFePublica").val();
                    var arrayNombre = nombreSinTitulo.split(".");
                    for (var i = 0; i < arrayNombre.length; i++) {
                        if (i == (arrayNombre.length - 1))
                            nombreSinInicialesTitulo = arrayNombre[i];
                    }
                    $("#webServiceRequired").remove();
                    var cveControl = ""
                    $.each($("#cmbJuzgados").find('option'), function (index, element) {
                        console.log(index);
                        console.log(element);
                        if(instancia == 1){
                            if ($(element).attr("tipojuzgado") == 1) {
                                cveControl = $(element).val();
                            }
                        }else{
                            cveControl = $(element).val();
                        }
                    });
                    var strDatos = "accion=buscarPersonaFePublica&personaFePublica=" + nombreSinInicialesTitulo + "&cveJuzgado=" + juzgadoSesion + "&cveControl=" + cveControl+"&instancia"+instancia;
                } else {
                    $('#txtPersonaFePublica').parent().append("<label id='webServiceRequired' class='Arial13Rojo required'>Debe escribir nombre sin t&iacute;tulo de la persona que da f&eacute; p&uacute;blica y buscar para seleccionarla</label>");
                    $("#divConsultaPersonasFePublica").hide();

                }

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/comparecencias/ComparecenciasFacade.Class.php",
                    data: strDatos,
                    async: true,
                    dataType: "json",
                    beforeSend: function (objeto) {

                    },
                    success: function (datos) {
                        //////alert(datos.toString());
                        var json = "";
                        var table = "";

                        //json = eval("(" + datos + ")");
                        //_.size(datos);
                        //////alert(Object.keys(datos).length);
                        if (datos != null) {
                            try {
                                //////alert(Object.keys(datos).length);
                                //////alert(datos.text == null);
                                if (Object.keys(datos).length > 0 && datos.text == null) {
                                    $("#divConsultaPersonasFePublica").show();
                                    table += "<table id='tblResultadosGridPersonaFePublica' width='200%' height='175' cellspacing='0' cellpadding='0' border='0' align='center' >";
                                    table += "<thead>";
                                    table += "<tr>";
                                    table += "<th>Num. Empleado F&eacute; P&uacute;blica</th>";
                                    table += "<th>Nombre Completo</th>";
                                    $.each(datos, function (count, object) {
                                        // object.CveEdificio

                                        nombreCompleto = object.titulo + " " + object.nombre + " " + object.paterno + " " + object.materno + " ";
                                        if (count % 2 == 0) {
                                            table += "<tr onmouseout='this.style.backgroundColor=\"#FFFFFF\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer;' onclick=\"asignarNumPersonaFepublica(" + object.numEmpleado + ", '" + nombreCompleto + "')\">";
                                        } else {
                                            table += "<tr  onmouseout='this.style.backgroundColor=\"#EDF9E8\"' onmouseover='this.style.backgroundColor=\"#9CC9A4\"' style='cursor: pointer; background-color: rgb(237, 249, 232);' onclick=\"asignarNumPersonaFepublica(" + object.numEmpleado + ", '" + nombreCompleto + "')\">";
                                        }
                                        table += "<td>" + object.numEmpleado + "</td>";
                                        table += "<td>" + nombreCompleto + "</td>";
                                        table += "<tr>";
                                    });

                                } else {
                                    table += "<br class='required'><label class='Arial13Rojo required'>No existen resultados</label>";
                                }
                                table += "</table>";
                                //////alert(table);
                                $("#divConsultaPersonasFePublica").show();
                                $("#divTableResultPersonaFePublica").show();
                                $("#divTableResultPersonaFePublica").html(table);

                            } catch (e) {
                                //alert("Error al cargar personas fe publica:" + e);
                            }
                        }
                        //                    if (datos.totalCount > 0) {
                        //                        $.each(datos.data, function (index, element) {
                        //                            var option = "<option value = " + element.cveTipoParte + ">" + element.descTipoParte + "</option>";
                        //                            $("#cmbTiposPartes").append(option);
                        //                        });
                        //                    } else {
                        //                        $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                        //                        $("#divAlertDager").show("slide");
                        //                        setTimeAlert("divAlertDager");
                        //                    }
                    }
                });
            }

            asignarNumPersonaFepublica = function (numEmpFePub, nombreCompleto) {
                ////alert(numEmpFePub);
                $("#hiddenPersonaFePublica").val(numEmpFePub);
                $("#divConsultaPersonasFePublica").hide();
                $("#divTableResultPersonaFePublica").hide();
                $("#txtPersonaFePublica").val(nombreCompleto);
                $("#tblResultadosGridPersonaFePublica").remove();
            };
            cargarJuzgados = function () {
                var strDatos = "accion=distrito";
                var urlOption = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
                var asyncOption = true;
                var hiddencveAdcripcion = $("#hiddencveAdcripcion").val();
                var hiddencveJuzgadoOrigenArbol = $("#hiddencveJuzgadoOrigenArbol").val();


                if ($("#hiddenIdActuacion").val() != "") {
                    if (hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol) {
                        if (instancia == 1) {
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
                    url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                    data: strDatos,
                    async: false,
                    dataType: "json",
                    beforeSend: function (objeto) {

                    },
                    success: function (datos) {

                        if (datos.totalCount > 0) {

                            $.each(datos.data, function (index, element) {
                                var option = "<option tipoJuzgado=" + element.cveTipojuzgado + " value = " + element.cveJuzgado + ">" + element.desJuzgado + "</option>";
                                $("#cmbJuzgados").append(option);
                                $("#cmbJuzgadosConsultas").append(option);
                                if (element.cveInstancia == instancia) {
                                    if (juzgadoSesion == element.cveJuzgado) {
                                        $("#cmbJuzgados").val(juzgadoSesion);
                                        $("#cmbJuzgadosConsultas").val("<?php echo $_SESSION['cveAdscripcion']; ?>");
                                    }
                                } else {
                                    $("#inputGuardar").parent().hide();
                                    $("#inputLimpiar").parent().hide();
                                    $("#inputConsultar").parent().hide();
                                    $("#inputEliminar").parent().hide();
                                    $("#inputImprimir").parent().hide();
                                    $("#inputDigitalizar").parent().hide();
                                    $("#inputRegresar").parent().hide();
                                    $("#inputPDF").parent().hide();
                                }

                                filtrarTipoCarpeta();
    //                            $("#cmbJuzgados").append(option);
                            });
                        } else {
                            $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                    }
                });
            };
            cargarTiposPartes = function () {
                var strDatos = "accion=consultar&activo='S'";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tipospartes/TipospartesFacade.Class.php",
                    data: strDatos,
                    async: false,
                    dataType: "json",
                    beforeSend: function (objeto) {

                    },
                    success: function (datos) {

                        if (datos.totalCount > 0) {

                            $.each(datos.data, function (index, element) {
                                var option = "<option value = " + element.cveTipoParte + ">" + element.descTipoParte + "</option>";
                                $("#cmbTiposPartes").append(option);
                                $("#cmbTiposPartes2").append(option);
                            });
                        } else {
                            $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }
                    }
                });
            };
            $.fn.agregaPersona = function (Clase, Destino, valorRadio) {
                $(".required").remove();
                var arrNombre = new Array();
                var agregar = true;
                var noElementos = $("." + Clase).length;
                $("." + Clase).each(function () {

                    if ($.trim($(this).val()) != "" && $(this).is(":visible")) {
                        arrNombre.push($.trim($(this).val().toUpperCase()));
                    } else if ($(this).is(":visible")) {
                        agregar = false;
                        $(this).parent().append("<br class='required'><label class='Arial13Rojo required'>Este campo no puede estar vacio</label>");
                        arrNombre = new Array();
                    } else {
                        arrNombre.push("");
                    }

                });
                if (arrNombre.join('').length > 0 && agregar) {
                    var found = false;
                    $("#" + Destino + " option").each(function () {
                        if (arrNombre.join(' ') == $(this).text().toUpperCase()) {
                            found = true;
                        }
                    });
                    if (found != true) {
                        var cveGenero = $("#cmbGeneros").val();
                        var valorTiposParte = $("#cmbTiposPartes").val();
                        var textTipoParte = $("#cmbTiposPartes [value='" + valorTiposParte + "']").text();
                        console.log(textTipoParte);
                        var id = 0;
                        if ($("#hddIdPersonaComparecencia").val() != "") {
                            var splt = $("#hddIdPersonaComparecencia").val().split(";");
                            id = splt[1];
                            ////alert(id);
                        }
                        $('#' + Destino).append(
                                '<option value="S;' + id + ';' + valorRadio + ';' + cveGenero + ';' + valorTiposParte + ';'
                                + arrNombre.join(';') + '" selected="selected">'
                                + arrNombre.join(' ') + " - " + textTipoParte + '</option>');
                        $("." + Clase).each(function () {
                            $(this).val("");
                        });
                        $("." + Clase).first().focus();
                        $("#hddIdPersonaComparecencia").val("");
                    } else {
                        //alert("El nombre " + arrNombre.join(' ') + " ya existe.");
                    }
                } else {

                }
            };
            capturaNombrePersona = function (e, Sig, clase, destino, radio) {

                ////alert(e);
                //        tecla = (document.all) ? e.keyCode : e.which;
                tecla = 13;
                var valorRadio = $("input:radio[name=" + radio + "]:checked").val();
                ////alert("valorRadio"+valorRadio);
                ////alert("Sig"+Sig);
                ////alert("clase"+clase);
                ////alert("destino"+destino);
                ////alert("radio"+radio);
                if (tecla == 8)
                    return true; // Tecla de retroceso (para poder borrar)
                if (tecla == 13) {
                    if (valorRadio != 1) {
                        ////alert("valorRadio != 1");


                        $("#lstComparecentes option[value='" + $("#hddIdPersonaComparecencia").val() + "']").remove();
                        if (Sig.length > 0) {
                            ////alert("Sig.length > 0");
                            var hdd = $("#hddIdPersonaComparecencia").val();
                            ////alert(hdd);
                            var hdds = hdd.substr(2);
                            ////alert(hdds);
                            hdd = "N;" + hdds;
                            var datos = hdd.split(";");
                            ////alert("datos = "+datos[1]);
                            if (Sig in $.fn) {
                                //$("#hddIdPersonaComparecencia").val("");
                                $("#idAgregar").show();
                                $("#idModificar").hide();
                                $.fn[Sig](clase, destino, valorRadio);
                            } else if ($('#' + Sig)) {
                                $('#' + Sig).focus();
                            }
                            return true;
                        }
                    }
                    if ($("#cmbTiposPartes").val() == null || $("#txtPaternoAct").val() == "" || $("#txtMaternoAct").val() == "" || $("#txtNombreAct").val() == "") {
                        ////alert("val() == null");
                        if ($("#cmbTiposPartes").val() == null) {
                            $("#cmbTiposPartes").focus();
                            $("#divTiposPartes").addClass("has-error");
                        } else
                            $("#divTiposPartes").removeClass("has-error");
                        if ($("#txtPaternoAct").val() == "") {
                            $("#txtPaternoAct").focus();
                            $("#txtPaternoAct").parent().addClass("has-error");
                        } else
                            $("#txtPaternoAct").parent().removeClass("has-error");
                        if ($("#txtMaternoAct").val() == "") {
                            $("#txtMaternoAct").focus();
                            $("#txtMaternoAct").parent().addClass("has-error");
                        } else
                            $("#txtMaternoAct").parent().removeClass("has-error");
                        if ($("#txtNombreAct").val() == "") {
                            $("#txtNombreAct").focus();
                            $("#txtNombreAct").parent().addClass("has-error");
                        } else
                            $("#txtNombreAct").parent().removeClass("has-error");

                    } else {
                        ////alert("else");
                        if ($("#hddIdPersonaComparecencia").val() != "") {
                            ////alert("hddIdPersonaComparecenciaval() == null");

                            ////alert($("#hddIdPersonaComparecencia").val());
                            $("#lstComparecentes option[value='" + $("#hddIdPersonaComparecencia").val() + "']").remove();
                            Sig = "agregaPersona";
                            if (Sig in $.fn) {
                                //$("#hddIdPersonaComparecencia").val("");
                                $("#idAgregar").show();
                                $("#idModificar").hide();
                                $.fn[Sig](clase, destino, valorRadio);
                            } else if ($('#' + Sig)) {
                                $.fn[Sig](clase, destino, valorRadio);
                            }
                            return true;
                        } else {

                            if (Sig.length > 0) {
                                if (Sig in $.fn) {
                                    //$("#hddIdPersonaComparecencia").val("");
                                    $("#idAgregar").show();
                                    $("#idModificar").hide();
                                    $.fn[Sig](clase, destino, valorRadio);
                                } else if ($('#' + Sig)) {
                                    $('#' + Sig).focus();
                                }
                                return true;
                            }
                        }
                    }
                }

                patron = /"|'|\\/; // No acepta ",',/,\ (se separan por | )
                te = String.fromCharCode(tecla);
                return !patron.test(te);
            };
            recargaPersona = function () {
                var valorRadio = $("input:radio[name=rd]:checked").val();
                if ($("#hddIdPersonaComparecencia").val() != "") {
                    $("#lstComparecentes option[value='" + $("#hddIdPersonaComparecencia").val() + "']").remove();
                    var Sig = "agregaPersona"
                    if (Sig in $.fn) {
                        $.fn[Sig]('txtActor', 'lstComparecentes', valorRadio);
                    } else if ($('#' + Sig)) {
                        $.fn[Sig]('txtActor', 'lstComparecentes', valorRadio);
                    }
                    return true;
                }
            };
            cargaTipoCarpeta = function () {

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
                            for (var i = 0; i < json.totalCount; i++) {
                                $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                            }
                            //                        $("#cmbTipoCarpeta").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                            //                        $("#cmbTipoCarpeta2").append($('<option></option>').val(9).html("SIN RELACI&Oacute;N"));
                        }
                        $('#divCmbRelaciones').hide();
                    },
                    error: function (objeto, quepaso, otroobj) {
                        ////alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            };
            cargarTiposPersonas = function () {

                var strDatos = "accion=consultar";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tipospersonas/TipospersonasFacade.Class.php",
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
                            var checked = "";
                            for (var i = 0; i < json.totalCount; i++) {
                                if (i == 0) {
                                    checked = "checked";
                                } else {
                                    checked = "";
                                }
                                if (json.data[i].cveTipoPersona == 1 || json.data[i].cveTipoPersona == 2 || json.data[i].cveTipoPersona == 3) {
                                    var radio = "<div class='col-md-4'><input type = 'radio' name = 'rd' id='rd" + json.data[i].cveTipoPersona + "' value ='" + json.data[i].cveTipoPersona + "' onClick='ocultarCampos(this.value,this);' " + checked + "/>";
                                    var label = "<label class='Arial11Verde' id ='Label" + json.data[i].desTipoPersona + json.data[i].cveTipoPersona + "' name ='Label" + json.data[i].desTipoPersona + json.data[i].cveTipoPersona + "'>" + json.data[i].desTipoPersona + "</label></div>";
                                    $("#divTiposPersonas").append(radio + " " + label);
                                }
                            }
                        }


                    },
                    error: function (objeto, quepaso, otroobj) {
                        ////alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            };
            cargarGeneros = function () {

                var strDatos = "accion=consultar";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/generos/GenerosFacade.Class.php",
                    data: strDatos,
                    async: false,
                    dataType: "json",
                    beforeSend: function (objeto) {
                        // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                    },
                    success: function (datos) {
                        if (datos.totalCount > 0) {
                            $.each(datos.data, function (index, element) {
                                var option = "<option value = " + element.cveGenero + ">" + element.desGenero + "</option>";
                                $("#cmbGeneros").append(option);
                            });
                        } else {
                            $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                            $("#divAlertDager").show("slide");
                            setTimeAlert("divAlertDager");
                        }


                    },
                    error: function (objeto, quepaso, otroobj) {
                        ////alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            };
            ocultarCampos = function (cveTipoPersona) {
                var myClass = $("#txtNombreAct").parent().attr("class");
                if (cveTipoPersona == 1) {
                    $("#cmbGeneros").val("1");
                    $("#cmbGeneros").removeAttr('disabled');
                    $(".divNombre").show("slow");
                    if (myClass === "col-md-6") {
                        $("#txtNombreAct").parent().toggleClass('col-md-6');
                        $("#txtNombreAct").parent().toggleClass('col-md-2');
                    }
                } else if (cveTipoPersona == 2 || cveTipoPersona == 3) {
                    $(".divNombre").hide();
                    $("#cmbGeneros").val("3");
                    $("#cmbGeneros").attr('disabled', true);

                    if (myClass === "col-md-2") {
                        $("#txtNombreAct").parent().toggleClass('col-md-2');
                        $("#txtNombreAct").parent().toggleClass('col-md-6');
                    }
                }
            };
            changeLabel = function (objOption, clave) {
                $("#lblRelationName" + clave).html("No. " + $("#" + objOption.id + " option:selected").text() + ":");
                $("#hiddenCveTipoCarpeta" + clave).val($("#cmbTipoCarpeta").val());
                if ($("#cmbTipoCarpeta" + clave).val() == 9) {
                    $("#txtNumero" + clave).val("");
                    //$("#txtAnio" + clave).val("");
                    $("#divSinRelacion").hide();
                } else {
                    $("#txtNumero" + clave).val("");
                    //$("#txtAnio" + clave).val("");
                    $("#divSinRelacion").show();
                }


            };

            limpiar = function () {
                $("#inputVisor").hide();
                $("#inputPDF").hide();
                var cveTipoCarpetaPost = "";
                var idReferenciaPost = "";
                cveTipoCarpetaPost = "<?php echo $_POST['cveTipoCarpeta']; ?>";
                idReferenciaPost = "<?php echo $_POST['idReferencia']; ?>";
                console.log(cveTipoCarpetaPost);
                console.log(idReferenciaPost);
                if ((cveTipoCarpetaPost == 0 && idReferenciaPost == "") || (cveTipoCarpetaPost == "" && idReferenciaPost == "")) {
                    console.log("entra if");
                    movermeA("divFormulario", "top");
                    $("#cmbJuzgados").val("<?php echo $_SESSION['cveAdscripcion']; ?>");
                    $("#fecha_comparecencia").val("<?php echo $fechaHoraHoy; ?>");
                    $("#txtLugarComparecencia").val("<?php echo $_SESSION['desAdscripcion']; ?>");
                    $("#inputImprimir").hide();
                    $("#inputEliminar").hide();
                    carpetaJudicial = false;
                    $(".required").remove();
                    $("#tblResultadosGridPersonaFePublica").remove();
                    $("#divConsultaPersonasFePublica").hide();
                    ////alert("limpiar");
                    $("#hddIdPersonaComparecencia").val("");
                    $("#cmbTipoCarpeta").prop("disabled", false);
                    $("#txtNumero").prop("disabled", false);
                    $("#txtAnio").prop("disabled", false);
                    $("#cmbJuzgados").prop("disabled", false);

                    $("#hiddenIdActuacion").val("");
                    $("#cmbTipoCarpeta").val(0);
                    $("#cmbTipoCarpeta2").val(0);
                    $("#txtNumero").val("");
                    $("#txtNumero2").val("");
                    //$("#txtAnio").val("");
                    $("#txtAnio2").val("");
                    $("#cmbTiposPartes").val(0);
                    $("#cmbTiposPartes2").val(0);
                    $("#txtSintesis").val("");
                    $("#txtPersonaFePublica").val("");
                    $("#hiddenPersonaFePublica").val("");
                    //$("#txtLugarComparecencia").val("");
                    //$("#fecha_comparecencia").val("");
                    $("#txtPaternoAct").val("");
                    $("#txtMaternoAct").val("");
                    $("#txtNombreAct").val("");
                    $("#lstComparecentes").empty();

                    //            $("#txtObservaciones").val("");
                    editor.setContent("", false);
                    $("#msgCarpetaJudicial").remove();
                    //            $(".view br").removeAttr("_moz_editor_bogus_node", "FALSE");
                    //            if (editor != undefined) {
                    //                editor.destroy();
                    //            } else {
                    //
                    //            }
                    //            editor = null;
                } else {
                    console.log("entra else");
                    carpetaJudicial = true;
                    $(".Relacionado").focusout();
                    movermeA("divFormulario", "top");
                    $("#fecha_comparecencia").val("<?php echo $fechaHoraHoy; ?>");
                    $("#txtLugarComparecencia").val("<?php echo $_SESSION['desAdscripcion']; ?>");
                    $("#inputImprimir").hide();
                    $("#inputEliminar").hide();
                    $(".required").remove();
                    $("#tblResultadosGridPersonaFePublica").remove();
                    $("#divConsultaPersonasFePublica").hide();
                    ////alert("limpiar");
                    $("#hddIdPersonaComparecencia").val("");
                    $("#cmbTipoCarpeta").prop("disabled", true);
                    $("#txtNumero").prop("disabled", true);
                    $("#txtAnio").prop("disabled", true);
                    $("#cmbJuzgados").prop("disabled", true);

                    $("#hiddenIdActuacion").val("");
                    $("#cmbTipoCarpeta2").val(0);
                    $("#txtNumero2").val("");
                    //$("#txtAnio").val("");
                    $("#txtAnio2").val("");
                    $("#cmbTiposPartes").val(0);
                    $("#cmbTiposPartes2").val(0);
                    $("#txtSintesis").val("");
                    $("#txtPersonaFePublica").val("");
                    $("#hiddenPersonaFePublica").val("");
                    //$("#txtLugarComparecencia").val("");
                    //$("#fecha_comparecencia").val("");
                    $("#txtPaternoAct").val("");
                    $("#txtMaternoAct").val("");
                    $("#txtNombreAct").val("");
                    $("#lstComparecentes").empty();
                    editor.setContent("", false);
                    console.log("focus");

                }


            };
            consultar = function (elementomostrar) {
                $("#cmbJuzgadosConsultas").change();
                movermeA("divFormulario", "top");
                limpiar();
                ////alert("consultar");
                if (elementomostrar === "divCamposConsulta") {
                    $("#divCamposConsulta").show();
                    $("#imprimir").hide();
                    $("#divCampos").hide();
                    $("#inputImprimir").hide();
                }
            };
            eliminarComparecencia = function () {
                ////alert("eliminar");
                var idActuacion = $("#hiddenIdActuacion").val();
                var idComparecencia = $("#hiddenIdComparecencia").val();
                var listaComparecentes = new Array();
                $('select#lstComparecentes').find('option').each(
                        function () {
                            var datos = this.value.split(";");
                            listaComparecentes.push(new comparecente(datos[0], datos[1], datos[2],
                                    datos[3], datos[4], datos[5], datos[6], datos[7]));
                        });
                var JsonComparecentes = JSON.stringify(listaComparecentes);
                JsonComparecentes = decodeURIComponent(JsonComparecentes);

                if (idActuacion > 0) {
                    bootbox.dialog({
                        message: "Advertencia!! <br><br> Esta seguro de eliminar la comparecencia ??",
                        buttons: {
                            danger: {
                                label: "Aceptar",
                                className: "btn-primary",
                                callback: function () {
                                    $.ajax({
                                        type: "POST",
                                        url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                                        data: {
                                            idActuacion: idActuacion,
                                            idComparecencia: idComparecencia,
                                            listaComparecentes: JsonComparecentes,
                                            accion: "eliminarActuacion_Comparecencia"
                                        },
                                        async: false,
                                        dataType: "json",
                                        beforeSend: function (xhr) {

                                        },
                                        success: function (data, textStatus, jqXHR) {

                                            if (data.Estatus == "Ok") {
                                                $("#inputImprimir").hide();
                                                $("#txtLugarComparecencia").val("<?php echo $_SESSION['desAdscripcion']; ?>");
                                                $("#divHideForm").hide();
                                                $("#divAlertSucces").html("Correcto!: " + data.Mensaje);
                                                $("#divAlertSucces").show("slide");
                                                setTimeAlert("divAlertSucces");
                                                try {
                                                    getTree();
                                                } catch (e) {
                                                    console.log(e);
                                                }
                                                limpiar();

                                            } else {
                                                $("#divAlertDager").html("Error en la peticion:\n\n" + data.Mensaje);
                                                $("#divAlertDager").show("slide");
                                                setTimeAlert("divAlertDager");

                                            }


                                        },
                                        error: function (jqXHR, textStatus, errorThrown) {

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
                }
            };
            consultaComparecenciaById = function () {
    //            //alert("consultaComparecenciaById");
    //            $("#inputDigitalizar").show();
                $("#inputVisor").show();
                $("#inputPDF").show();

                var idActuacionBusqueda = $("#hiddenIdActuacion").val();
                ////alert(idActuacionBusqueda)
                if (idActuacionBusqueda != "") {
                    ////alert("ENTRA");
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                        async: false,
                        dateType: "json",
                        data: {
                            idActuacion: idActuacionBusqueda,
                            accion: "consultarComparecenciaById"
                        },
                        success: function (data) {

                            var datos = (eval("(" + data + ")"));
    //                        //alert(data);
    //                        //alert(datos);

    //                        console.log(datos);
                            ////alert(datos.fepublica[0].data[0].CveAds);
                            ////alert(datos.datos["personas"][0][0].idPersonacomparecencia);
                            seleccionarActuacionModificar(datos.datos[0], datos.datos.personas[0], datos.datos[0].Nombre, "ok");
                            //                    var comparecentes = "";
                            //                    var personas = obtenerPersonasComparecenciasHTML(datos.datos.personas[index]);
                            //                    var jsonElement = "";
                            //                    var myarray = [];
                            //                    var JSONActuaciones = JSON.stringify(element);
                            //                    var JSONPersonas = JSON.stringify(datos.datos.personas[index]);
                            //                    var JSONPersonasFePublica = JSON.stringify(datos.fepublica[0].data);
                            //                    var nombreFePublica = obtenerNombreFePublicaById(datos.fepublica[0].data, element.numEmpleadoFePublica);
                        }
                    });
                }

            };
            guardarComparecencia = function () {
                //            //alert("guardarComparecencia");
                $(".required").remove();
                $("#inputImprimir").hide();
                var cveUsuarioSistema = $("#hiddenCveUsuarioSistema").val();
                //            //alert("cveUsuarioSistema"+cveUsuarioSistema);
                var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
                //            //alert("cveTipoCarpeta"+cveTipoCarpeta);
                var numero = $("#txtNumero").val();
                //            //alert("numero"+numero);
                var anio = $("#txtAnio").val();
                //            //alert("anio"+anio);
                var idReferencia = $("#hiddenIdCarpetaJudicial").val();
                //            //alert("idReferencia"+idReferencia);
                var sintesis = $("#txtSintesis").val();
                //            //alert("sintesis"+sintesis);
                var personaFePublica = $("#txtPersonaFePublica").val();
                //            //alert("personaFePublica"+personaFePublica);
                var lugarComparecencia = $("#txtLugarComparecencia").val();
                //            //alert("lugarComparecencia"+lugarComparecencia);
                //var fechaHoraComparecencia = $("#fecha_comparecencia").val();
                ////alert("fechaHoraComparecencia"+fechaHoraComparecencia);
    //            var observaciones = $("#txtObservaciones").val();
    //            var observaciones = encodeURIComponent(UE.getEditor('txtObservaciones').getContent());
                var observaciones = editor.getContent();
                observaciones = observaciones.replace(/[\u2018\u2019]/g, "'").replace(/[\u201C\u201D]/g, '"');
    //            //alert(observaciones);
                //            //alert("observaciones"+observaciones);
                var hiddenPersonaFePublica = $("#hiddenPersonaFePublica").val();
                //            //alert("hiddenPersonaFePublica"+hiddenPersonaFePublica);
                var hiddenIdCarpetaJudicial = $("#hiddenIdCarpetaJudicial").val();
                //            //alert(hiddenIdCarpetaJudicial);
                var listaComparecentes = new Array();
                var listaComparecentesImprimir = new Array();
                var JsonComparecentes = "";
                var tmp_fechahora1 = $('#fecha_comparecencia').val();
                var tmp_fechahora = tmp_fechahora1.split(' ');
                var tmp_fecha = tmp_fechahora[0].split('/');
                var fechaHoraComparecencia = tmp_fecha[2] + '-' + tmp_fecha[1] + '-' + tmp_fecha[0] + ' ' + tmp_fechahora[1];
                var guardar = 1;
                //        var acuerdoResolucion = encodeURIComponent(UE.getEditor('idText').getContent());
                //        //alert(acuerdoResolucion);
                if (cveTipoCarpeta == 0) {
                    guardar = 0;
                    $('#cmbTipoCarpeta').focus();
                    $('#cmbTipoCarpeta').parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione el tipo de carpeta</label>");
                }
                if (fechaHoraComparecencia == 0) {
                    guardar = 0;
                    $('#fecha_comparecencia').focus();
                    $('#fecha_comparecencia').parent().append("<br class='required'><label class='Arial13Rojo required'>Seleccione la fecha de la comparecencia</label>");

                }
                if (numero === "" && cveTipoCarpeta != 9) {
                    guardar = 0;
                    $('#txtNumero').focus();
                    //            $('#txtNumero').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el numero de la carpeta relacionado</label>");
                }
                if (anio === "" && cveTipoCarpeta != 9) {
                    guardar = 0;
                    $('#txtAnio').focus();
                    //            $('#txtAnio').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el a&ntilde;o de la carpeta relacionado</label>");
                }
                if (sintesis === "") {
                    guardar = 0;
                    $('#txtSintesis').focus();
                    $('#txtSintesis').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar una s&iacute;ntesis</label>");
                }
                if (hiddenPersonaFePublica === "") {
                    guardar = 0;
                    $('#txtPersonaFePublica').focus();
                    $('#txtPersonaFePublica').parent().append("<br class='required'><label id='webServiceRequired' class='Arial13Rojo required'>Debe seleccionar la persona que da f&eacute; p&uacute;blica</label>");
                }
                if (personaFePublica === "") {
                    guardar = 0;
                    $('#txtPersonaFePublica').focus();
                    $('#txtPersonaFePublica').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar la persona que da f&eacute; p&uacute;blica</label>");
                }
                if (lugarComparecencia === "") {
                    guardar = 0;
                    $('#txtLugarComparecencia').focus();
                    $('#txtLugarComparecencia').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar el lugar de la comparecencia</label>");
                }

                if (hiddenIdCarpetaJudicial === "") {
                    guardar = 0;
                }
                if (idReferencia === "") {
                    $('#txtNumero').focus();
                    $('#divSinRelacion').parent().append("<br class='required'><label class='Arial13Rojo required' style='margin-left: 9%;'>Debe ingresar el numero y a&ntilde;o de la carpeta relacionado valido</label>");
                    guardar = 0;
                }

                var contN = 0;
                $('select#lstComparecentes').find('option').each(
                        function () {
                            var datos = this.value.split(";");

                            //                    //alert("Longitud");
                            //                    //alert(datos.length);
                            //                    //alert("DATOSSSSSSS");
                            //                    /7//alert(this.value);
                            //                    a
                            //                    lert(datos[0]);
                            //                    //alert(datos[1]);
                            //                    //alert(datos[2]);
                            //                    //alert(datos[3]);
                            //                    //alert(datos[4]);
                            //                    //alert(datos[5]);
                            //                    //alert(datos[6]);
                            //                    //alert(datos[7]);
                            //if(datos[1])
                            if (datos[0] == "N")
                                contN++;

                            listaComparecentes.push(new comparecente(datos[0], datos[1], datos[2],
                                    datos[3], datos[4], datos[5], datos[6], datos[7]));
                        });
                //               //alert(contN); 
                //               //alert(listaComparecentes.length); 
                if (listaComparecentes.length > 0 && contN != listaComparecentes.length) {
                    JsonComparecentes = JSON.stringify(listaComparecentes);
                    //                //alert(JsonComparecentes);
                    JsonComparecentes = decodeURIComponent(JsonComparecentes);
                } else {
                    guardar = 0;
                    var label = $("<br class='required'><label class='Arial13Rojo required'>");
                    label.append("Debes registrar compareciente");
                    $('select#lstComparecentes').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe registrar comparecientes</label>");
                }
                var carpetaJ = $("#hiddenIdCarpetaJudicial").val();
    //            //alert(carpetaJudicial);
                if (carpetaJudicial == false) {
                    guardar = 0;
                    $("#divAlertWarning").html("El n&uacute;mero :" + $("#txtNumero").val() + " y a&ntilde;o " + $("#txtAnio").val() + " no existen en " + $("#cmbTipoCarpeta option:selected").text());
                    $("#divAlertWarning").show("slide");
                    setTimeAlert("divAlertWarning");
                }
                var juzgadoEnviar = $("#cmbJuzgados").val();
                //        idActuacion = $("#hiddenIdActuacion").val();
                //        if (observaciones === "" && idActuacion != "") {
                //            guardar = 0;
                //            $('#txtObservaciones').focus();
                //            $('#txtObservaciones').parent().append("<br class='required'><label class='Arial13Rojo required'>Debe ingresar observaciones</label>");
                //        }
                if (guardar == 1) {
                    ////alert("realiza la insercion");
                    var accion = "guardarActuacion_Comparecencia";
                    var idActuacion = "";
                    var idComparecencia = "";
                    if ($("#hiddenIdActuacion").val() == "") {
                        accion = "guardarActuacion_Comparecencia";

                    } else {
                        ////alert(JsonComparecentes);
                        accion = "modificarActuacion_Comparecencia";
                        idActuacion = $("#hiddenIdActuacion").val();
                        idComparecencia = $("#hiddenIdComparecencia").val();
                    }

                    ////alert(accion);
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
                        async: false,
                        dateType: "json",
                        data: {
                            cveTipoActuacion: 16,
                            idReferencia: idReferencia,
                            cveTipoCarpeta: cveTipoCarpeta,
                            cveJuzgado: juzgadoEnviar,
                            sintesis: sintesis,
                            observaciones: observaciones,
                            cveUsuario: cveUsuarioSistema,
                            activo: "S",
                            accion: accion,
                            listaComparecentes: JsonComparecentes,
                            numEmpleadoFePublica: hiddenPersonaFePublica,
                            lugarComparecencia: lugarComparecencia,
                            horaComparecencia: fechaHoraComparecencia,
                            numero: numero,
                            anio: anio,
                            idActuacion: idActuacion,
                            idComparecencia: idComparecencia,
                            nombrePersonaFePublica: personaFePublica,
                            idActuacionPadre: $("#hddIdPadre").val()
                        },
                        success: function (data) {
                            ////alert("hoola");
                            datos = (eval("(" + data + ")"));

                            //consultaComparecenciaById(datos.data[0].idActuacion);
                            //                    $.each(datos.datos.personas, function (index, element) {
                            //                        if (element.cveTipoPersona == 2 || element.cveTipoPersona == 3) {
                            //                            personashtml += "<option   value='" + element.idPersonacomparecencia + ";" + element.cveTipoPersona + ";" + element.cveGenero + ";" + element.cveTipoParte + ";" + ";" + ";" + element.nombrePersonaMoral + "'> " + element.nombrePersonaMoral + " </option>";
                            //                        } else {
                            //                            personashtml += "<option   value='" + element.idPersonacomparecencia + ";" + element.cveTipoPersona + ";" + element.cveGenero + ";" + element.cveTipoParte + ";" + element.paterno + ";" + element.materno + ";" + element.nombre + "'> " + element.paterno + " " + element.materno + " " + element.nombre + " </option>";
                            //                        }
                            //                    });
                            if (datos.totalCount > 0) {
                                limpiar();
                                $("#hiddenIdActuacion").val(datos.data[0].idActuacion);
                                $("[name = 'rd'][value='1']").prop('checked', true);
                                $("#cmbGeneros").val(1);
                                $("#cmbTiposPartes").val(0);
                                $("#txtNombreAct").val("");
                                $("#txtPaternoAct").val("");
                                $("#txtMaternoAct").val("");
                                $("#txtNombreAct").val("");
                                $("#idModificar").hide();
                                $("#idAgregar").show();
                                ocultarCampos(1);
                                consultaComparecenciaById();
                                var cveTipoCarpetaPost = "";
                                var idReferenciaPost = "";
                                cveTipoCarpetaPost = "<?php echo $_POST['cveTipoCarpeta']; ?>";
                                idReferenciaPost = "<?php echo $_POST['idReferencia']; ?>";
                                console.log(cveTipoCarpetaPost);
                                console.log(idReferenciaPost);
                                if ((cveTipoCarpetaPost == 0 && idReferenciaPost == "") || (cveTipoCarpetaPost == "" && idReferenciaPost == "")) {
                                    $("#cmbJuzgadoArbol").val($("#cmbJuzgados").val());
                                    $("#cmbTipoCarpetaTree").val($("#cmbTipoCarpeta").val());
                                    $("#cmbTipoCarpetaTree").change();
                                    $("#txtNumeroTree").val($("#txtNumero").val());
                                    $("#txtAnioTree").val($("#txtAnio").val());
                                    try {
                                        getTree();
                                    } catch (e) {
                                        console.log("error- no hay arbol 1");
                                    }
                                } else {
                                    try {
                                        getTree();
                                    } catch (e) {
                                        console.log("error- no hay arbol 2");
                                    }
                                }

                                $("#hiddenIdActuacion").val();
                                $("#divHideForm").hide();

                                $("#divAlertSucces").html("Correcto!: " + datos.text);
                                $("#divAlertSucces").show("slide");
                                setTimeAlert("divAlertSucces");
                            } else {
                                ////alert("error en la peticion");
                                $("#divAlertDager").html("Error en la peticion:\n\n" + datos.text);
                                $("#divAlertDager").show("slide");
                                setTimeAlert("divAlertDager");
                            }
                        }
                    });
                }
            };

            comparecente = function (activo, idPersonacomparecencia, cveTipoPersona, cveGenero, cveTipoParte, paterno, materno, nombre, nombrePersonaMoral) {
                this.activo = activo;
                this.idPersonacomparecencia = idPersonacomparecencia;
                this.cveTipoParte = cveTipoParte;
                this.cveTipoPersona = cveTipoPersona;
                this.nombre = nombre;
                this.paterno = paterno;
                this.materno = materno;
                this.nombrePersonaMoral = nombrePersonaMoral;
                this.cveGenero = cveGenero;

            }
            borraPersona = function (Combo) {
                if (confirm("Esta seguro de eliminar a:\n"
                        + $('#' + Combo).find('option:selected').text())) {
                    var hdd = $("#hddIdPersonaComparecencia").val();
                    ////alert(hdd);
                    var hdds = hdd.substr(2);
                    ////alert(hdds);
                    hdd = "N;" + hdds;
                    var datos = hdd.split(";");
                    ////alert("datos = "+datos[1]);
                    if (datos[1] == 0) {
                        $("#lstComparecentes option[value='" + $("#hddIdPersonaComparecencia").val() + "']").val(hdd);
                        $('#' + Combo).find('option:selected').remove().end();
                        $("#hddIdPersonaComparecencia").val("");
                        $("[name = 'rd'][value='1']").prop('checked', true);
                        $("#cmbGeneros").val(1);
                        $("#cmbTiposPartes").val(1);
                        $("#txtNombreAct").val("");
                        $("#txtPaternoAct").val("");
                        $("#txtMaternoAct").val("");
                        $("#txtNombreAct").val("");
                        $("#idModificar").hide();
                        $("#idAgregar").show();
                        ocultarCampos(1);
                    } else {
                        $("#lstComparecentes option[value='" + $("#hddIdPersonaComparecencia").val() + "']").val(hdd);
                        $('#' + Combo).find('option:selected').hide().end();
                        $("#hddIdPersonaComparecencia").val("");
                        $("[name = 'rd'][value='1']").prop('checked', true);
                        $("#cmbGeneros").val(1);
                        $("#cmbTiposPartes").val(1);
                        $("#txtNombreAct").val("");
                        $("#txtPaternoAct").val("");
                        $("#txtMaternoAct").val("");
                        $("#txtNombreAct").val("");
                        $("#idModificar").hide();
                        $("#idAgregar").show();
                        ocultarCampos(1);
                    }
                }
            };
            cargaEstatus = function () {
                var strDatos = "accion=consultar";
                strDatos += "&cveTipoEstatus=15"; // el 15 corresponde a los estatus de comparecencias

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/estatus/EstatusFacade.Class.php",
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
                                $("#cmbEstatus").append($('<option></option>').val(json.data[i].cveEstatus).html(json.data[i].descEstatus));
                            }
                        }


                    },
                    error: function (objeto, quepaso, otroobj) {
                        ////alert("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
                    }
                });
            };
            function obtenerPermisos() {
                var cveUsuarioSistema = cveUsuarioSesion;
                $.get("../archivos/" + cveUsuarioSistema + ".json",
                        function (response) {
                            for (var i = 0; i < response.perfiles[0].totPerfiles; i++) {
                                if (cvePerfilSesion == response.perfiles[0].perfil[i].cvePerfil) {
                                    ////alert(response.perfiles[0].perfil[i].cvePerfil+"-"+"perfil encontrado..");
                                    $.each(response.perfiles[0].perfil[i].permisos, function (k, vnombre) {
                                        ////alert(vnombre.nomFormulario);
                                        if (vnombre.nomFormulario == "CARPETAS JUDICIALES") {
                                            var hijos = vnombre.hijos;
                                            $.each(hijos, function (k2, nombreHijo) {
                                                if (nombreHijo.nomFormulario == 'COMPARECENCIAS') {
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
    //                    //alert("insert: "+createRecord+" consulta: "+readRecord+" act: "+updateRecord+" elim: "+deleteRecord);

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
            filtrarTipoCarpeta = function () {
    //            //alert("CAMBIO");
                $("#cmbTipoCarpeta option").each(function () {
                    $(this).hide();
                });
    //            //alert($("#cmbJuzgado option[value='" + cveJuzgado + "']").attr("tipojuzgado"));
                var cveJuzgado = $("#cmbJuzgados").val();
                var cveTipoJuzgado = $("#cmbJuzgados").find('option:selected').attr("tipojuzgado");
    //            //alert(cveTipoJuzgado);
                $("#cmbTipoCarpeta option[value=0]").show();
    //            var cveTipoJuzgado=$("#cmbTipoJuzgado option[value='" + cveJuzgado + "']").text();
    //            var cveTipoJuzgado= $("#cmbJuzgado option[value='" + cveJuzgado + "']").attr("tipojuzgado");
    //            console.log(cveTipoJuzgado);
                if (cveTipoJuzgado == 1) {//control
                    $("#cmbTipoCarpeta option[value=8]").show();
                    $("#cmbTipoCarpeta option[value=2]").show();
                    $("#cmbTipoCarpeta option[value=1]").show();
                    $("#cmbTipoCarpeta option[value=7]").show();
                } else {
                    if (cveTipoJuzgado == 3) {//ejecucion
                        $("#cmbTipoCarpeta option[value=8]").show();
                        $("#cmbTipoCarpeta option[value=5]").show();
                        $("#cmbTipoCarpeta option[value=7]").show();
                    } else {
                        if (cveTipoJuzgado == 2) {//juicio
                            $("#cmbTipoCarpeta option[value=8]").show();
                            $("#cmbTipoCarpeta option[value=3]").show();
                            $("#cmbTipoCarpeta option[value=7]").show();
                        } else {
                            if (cveTipoJuzgado == 4) {//tribunal
                                $("#cmbTipoCarpeta option[value=8]").show();
                                $("#cmbTipoCarpeta option[value=4]").show();
                                $("#cmbTipoCarpeta option[value=7]").show();
                            } else {
                                if (cveTipoJuzgado == 5) {//tribunal
                                    $("#cmbTipoCarpeta option[value=8]").show();
                                    $("#cmbTipoCarpeta option[value=6]").show();
                                    $("#cmbTipoCarpeta option[value=7]").show();
                                }
                            //opcion no valida
                                /*$("#cmbTipoCarpeta option[value=8]").show();
                                 $("#cmbTipoCarpeta option[value=6]").show();
                                 $("#cmbTipoCarpeta option[value=7]").show();*/
                            }
                        }
                    }
                }
                $("#cmbTipoCarpeta").val(0);
            };
            filtrarTipoCarpetaConsulta = function () {
    //            //alert("CAMBIO");
                $("#cmbTipoCarpeta2 option").each(function () {
                    $(this).hide();
                });
    //            //alert($("#cmbJuzgado option[value='" + cveJuzgado + "']").attr("tipojuzgado"));
                var cveJuzgado = $("#cmbJuzgadosConsultas").val();
                var cveTipoJuzgado = $("#cmbJuzgadosConsultas").find('option:selected').attr("tipojuzgado");
    //            //alert(cveTipoJuzgado);
                $("#cmbTipoCarpeta2 option[value=0]").show();
    //            var cveTipoJuzgado=$("#cmbTipoJuzgado option[value='" + cveJuzgado + "']").text();
    //            var cveTipoJuzgado= $("#cmbJuzgado option[value='" + cveJuzgado + "']").attr("tipojuzgado");
    //            console.log(cveTipoJuzgado);
                if (cveTipoJuzgado == 1) {//control
                    $("#cmbTipoCarpeta2 option[value=8]").show();
                    $("#cmbTipoCarpeta2 option[value=2]").show();
                    $("#cmbTipoCarpeta2 option[value=1]").show();
                    $("#cmbTipoCarpeta2 option[value=7]").show();
                } else {
                    if (cveTipoJuzgado == 3) {//ejecucion
                        $("#cmbTipoCarpeta2 option[value=8]").show();
                        $("#cmbTipoCarpeta2 option[value=5]").show();
                        $("#cmbTipoCarpeta2 option[value=7]").show();
                    } else {
                        if (cveTipoJuzgado == 2) {//juicio
                            $("#cmbTipoCarpeta2 option[value=8]").show();
                            $("#cmbTipoCarpeta2 option[value=3]").show();
                            $("#cmbTipoCarpeta2 option[value=7]").show();
                        } else {
                            if (cveTipoJuzgado == 4) {//tribunal
                                $("#cmbTipoCarpeta2 option[value=8]").show();
                                $("#cmbTipoCarpeta2 option[value=4]").show();
                                $("#cmbTipoCarpeta2 option[value=7]").show();
                            } else {
                                if (cveTipoJuzgado == 4) {//tribunal
                                    $("#cmbTipoCarpeta option[value=8]").show();
                                    $("#cmbTipoCarpeta option[value=6]").show();
                                    $("#cmbTipoCarpeta option[value=7]").show();
                                }
                            //opcion no valida
                                /*$("#cmbTipoCarpeta option[value=8]").show();
                                 $("#cmbTipoCarpeta option[value=6]").show();
                                 $("#cmbTipoCarpeta option[value=7]").show();*/
                            }
                        }
                    }
                }
                $("#cmbTipoCarpeta2").val(0);
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
            (function () {
                cargaInstancia();
//                obtenerPermisos();
                $(".Relacionado")
                        .focusout(function () {
                            $("#divSinRelacionMsg").empty();
                            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
                            var numero = $("#txtNumero").val();
                            var anio = $("#txtAnio").val();
                            var consulta = true;
                            var idReferencia = $("#hiddenArbolIdReferencia").val();
                            var idTipoCarpeta = $("#hiddenArbolTipoCarpeta").val();
                            if (numero == "") {
                                consulta = false;
                            }
                            if (anio == "") {
                                consulta = false;
                            }
                            if (cveTipoCarpeta == 0) {
                                consulta = false;
                            }
                            if (idReferencia != "" && idTipoCarpeta != "") {
                                consulta = true;
                            }

                            if (consulta) {
                                var urlDefault = "";
                                var urlCarpetas = "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php";
                                var urlExhortos = "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php";
                                var urlAmparos = "../fachadas/sigejupe/amparos/AmparosFacade.Class.php";
                                var datosArbol = {};
                                if ($("#hiddenArbolIdReferencia").val() != "" && $("#hiddenArbolTipoCarpeta").val() != "") {
                                    var tipoCarpetaArbol = $("#hiddenArbolTipoCarpeta").val();
                                    var referenciaArbol = $("#hiddenArbolIdReferencia").val();
    //                                alert("HOLA FERNA");
                                    if ($("#hiddenArbolTipoCarpeta").val() == 8 || $("#hiddenArbolTipoCarpeta").val() == 7) {
    //                                      ?idReferencia=5&cveTipoCarpeta=7
    //                                      alert("#######");
    //                                      alert($("#hiddenArbolTipoCarpeta").val());
                                        if ($("#hiddenArbolTipoCarpeta").val() == 8) {
                                            urlDefault = urlAmparos;
                                        }
                                        if ($("#hiddenArbolTipoCarpeta").val() == 7) {
                                            urlDefault = urlExhortos;
                                        }
                                    } else {
                                        urlDefault = urlCarpetas;
                                    }
                                    datosArbol = {
                                        accion: "consultarCarpetaExhortoAmparoById",
                                        cveTipoCarpeta: tipoCarpetaArbol,
                                        idEAC: referenciaArbol

                                    };
                                    $("#cmbTipoCarpeta").prop("disabled", true);
                                    $("#txtNumero").prop("disabled", true);
                                    $("#txtAnio").prop("disabled", true);
                                    $("#cmbJuzgados").prop("disabled", true);
                                } else {
                                    datosArbol = {
                                        accion: "consultarCarpetaExhortoAmparo",
                                        numero: numero,
                                        anio: anio,
                                        cveTipoCarpeta: cveTipoCarpeta,
                                        cveJuzgado: juzgadoSesion

                                    };
                                }
                                $.ajax({
                                    url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                                    dataType: 'json',
                                    async: false,
                                    type: "POST",
                                    global: false,
                                    data: datosArbol,
                                    beforeSend: function (xhr) {

                                    },
                                    success: function (datos) {
                                        if (datos.totalCount > 0) {
                                            $.each(datos.data, function (index, element) {
                                                carpetaJudicial = true;
                                                $("#msgCarpetaJudicial").remove();
    //                                            $("#divSinRelacion").append("<b id='msgCarpetaJudicial'>El numero "+numero+" y a&ntilde;o "+anio+" en la carpeta: "+$("#cmbTipoCarpeta option:selected").text()+" tienen relaci&oacute;n</b>");
                                                $("#divSinRelacion").append("<b id='msgCarpetaJudicial'>" + $("#cmbTipoCarpeta option:selected").text() + " " + numero + "/" + anio + " tiene relaci&oacute;n</b>");
                                                $("#cmbJuzgados").val(element.cveJuzgado);
                                                if ($("#cmbTipoCarpeta").val() == "7") {
    //                                                    $("#cmbTipoCarpeta").val(element.cveTipoCarpeta);                                                
                                                    $("#txtNumero").val(element.numExhorto);
                                                    $("#txtAnio").val(element.aniExhorto);
                                                } else if ($("#cmbTipoCarpeta").val() == "8") {
                                                    $("#txtNumero").val(element.numAmparo);
                                                    $("#txtAnio").val(element.aniAmparo);
                                                } else {
                                                    $("#cmbTipoCarpeta").val(element.cveTipoCarpeta);
                                                    $("#txtNumero").val(element.numero);
                                                    $("#txtAnio").val(element.anio);
                                                }


                                                if (element.idExhorto != undefined) {
                                                    $("#hiddenIdCarpetaJudicial").val(element.idExhorto);
                                                } else if (element.idAmparo != undefined) {
                                                    $("#hiddenIdCarpetaJudicial").val(element.idAmparo);
                                                } else if (element.idCarpetaJudicial != undefined) {
                                                    $("#hiddenIdCarpetaJudicial").val(element.idCarpetaJudicial);
                                                }
                                                return false;
                                                ;
                                            });
                                        } else {
                                            carpetaJudicial = false;
                                            $("#msgCarpetaJudicial").remove();
    //                                        $("#divSinRelacion").append("<b id='msgCarpetaJudicial'>El numero "+numero+" y a&ntilde;o "+anio+" en la carpeta: "+$("#cmbTipoCarpeta option:selected").text()+" no tienen relaci&oacute;n</b>");
                                            $("#divSinRelacion").append("<b id='msgCarpetaJudicial'>" + $("#cmbTipoCarpeta option:selected").text() + " " + numero + "/" + anio + " NO tiene relaci&oacute;n</b>");
                                            $("#hiddenIdCarpetaJudicial").val("");
                                        }
                                    },
                                    error: function (jqXHR, textStatus, errorThrown) {

                                    }

                                });
                            }

                        });

                $("#txtfechaInicial").datetimepicker({
                    sideBySide: false,
                    locale: 'es',
                    format: "DD/MM/YYYY",
                });
                $("#txtfechaFinal").datetimepicker({
                    sideBySide: false,
                    locale: 'es',
                    format: "DD/MM/YYYY",
                });
                $("#fecha_comparecencia").datetimepicker({
                    locale: "es",
                    sideBySide: false,
                    format: "DD/MM/YYYY HH:mm"
                });
    //            $('#txtfechaInicial, #txtfechaFinal').datepicker().on('changeDate', function (e) {
    //                $(this).datepicker('hide');
    //            });

                $("#txtfechaInicial").on("dp.change", function (e) {
                    $('#txtfechaFinal').data("DateTimePicker").minDate(e.date);
                });
                $("#txtfechaFinal").on("dp.change", function (e) {
                    $('#txtfechaInicial').data("DateTimePicker").maxDate(e.date);
                });

                cargaTipoCarpeta();
                cargarTiposPersonas();
                cargarGeneros();
                cargarTiposPartes();
                cargarJuzgados();
                // fecha
                fechaBaseDatos({
                    fecha_comparecencia: "fecha-hora",
                    txtfechaInicial: "fecha",
                    txtfechaFinal: "fecha"
                }
                );
    //            comboCarpeta();
    //            cambiarCarpetasDisponibles(-1);
    //            cambiarCarpetasDisponibles(juzgadoSesion);
                var tipoCarpeta = "<?php echo $cveTipoCarpeta; ?>";
                var referencia = "<?php echo $idReferencia; ?>";
                //alert(tipoCarpeta);
                //alert(referencia);
                if (editor != undefined) {
                    editor.destroy();
                    //            //alert("destroy0");
                } else {
                    //            //alert("nada");

                }
                editor = null;
                editor = UE.getEditor('txtObservaciones');
                editor.ready(function () {
    //                //alert("readyt function");
                    editor.setContent();
                });
                var idAct = $("#hiddenIdActuacion").val();
                if (idAct != "") {
                    $("#inputConsultar").hide();
    //                //alert("idAct");
                    consultaComparecenciaById();
                }
                var idReferenciaArbol = $("#hiddenArbolIdReferencia").val();
                var idTipoCarpetaArbol = $("#hiddenArbolTipoCarpeta").val();

                var delArbolSinNada = "<?php if (isset($_POST['cveTipoCarpeta'])) {
        echo "arbol";
    } else {
        echo "libre";
    } ?>";
                console.log(delArbolSinNada);
                if (delArbolSinNada == "arbol") {
                    $("#inputConsultar").hide();
                } else {
                    $("#inputConsultar").show();
                }
                if (idReferenciaArbol != "" && idTipoCarpetaArbol != "") {
    //                alert("Recibe de arbol");
                    $("#inputConsultar").hide();
                    $(".Relacionado").focusout();
                }
                var vieneArbol = "<?php if (isset($_POST)) {
        echo "si";
    } else {
        echo "no";
    } ?>";
                if (vieneArbol == "no") {
                    $("#inputConsultar").show();
                } else {
                    $("#inputConsultar").hide();
                }
            })();

        </script>
    <?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>