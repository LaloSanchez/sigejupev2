<?php
if (!isset($_SESSION)) {
    session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {
    if (isset($_GET["exhorto"])) {
        $tipo_registro = $_GET["exhorto"];
    } else {
        echo "No puedo obtener condicion de exhorto";
    }
    ini_set("log_errors", 0);
    ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);

    if (!isset($_SESSION)) {
        @session_start();
    }
    $idReferencia = "";
    $idCarpetaJudicialArbol = "";
    $idActuacionlArbol = "";
    $procedencia = 0;
    $origen = $_GET["origen"];

    if (isset($_POST['idExhorto'])) {
        $idCarpetaJudicialArbol = @$_POST['idExhorto'];
    }
    if (isset($_POST['idCarpeta'])) {
        $idCarpetaJudicialArbol = @$_POST['idCarpeta'];
    }
    if (isset($_POST['idActuacion'])) {
        $idActuacionlArbol = @$_POST['idActuacion'];
    }

    if (($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "")) {
        $procedencia = 1; // viene de arbol
    } else if (($idCarpetaJudicialArbol != 0 && $idCarpetaJudicialArbol != "")) {
        $procedencia = 1; // viene de arbol
    } else {
        $procedencia = 0; // formulario general
    }

    include_once(dirname(__FILE__) . "/../../../tribunal/host/Host.Class.php");
    $digitalizacion = "";

    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULODIGITALIZACION");
    $digitalizacion = $host->getConnect();
    $subirArchivos = "";
    @$host = new Host(dirname(__FILE__) . "/../../../tribunal/host/config.xml", "MODULOSUBIRARCHIVOS");
    $subirArchivos = $host->getConnect();



    $cveJuzgado = $_SESSION['cveAdscripcion'];
//echo $cveJuzgado;

    if ($tipo_registro == 1) {
        $registro = "Registro de Exhortos Generados";
        $displayExhortoG = "block";
        $displayExhortoR = "none";
    } else {
        $registro = "Registro de Exhortos Recibidos";
        $displayExhortoG = "none";
        $displayExhortoR = "block";
    }
    $origenArbol = ( isset($_GET['origen']) && $_GET['origen'] != "" ) ? $_GET['origen'] : "";
    $juzgadoOrigenArbol = ( isset($_POST['juzgadoOrigenArbol']) && $_POST['juzgadoOrigenArbol'] != "" ) ? $_POST['juzgadoOrigenArbol'] : "";
    ?>

    <style type="text/css">

        .alert{
            display: none;
        }

        .mayuscula{  
            text-transform: uppercase;  
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
        .acor{
            width: 60%;
            margin-right: 20%;
            margin-left: 20%
        }
        .Error{
            opacity: 0.8;
            background: #FEE9A1;
            border: solid thin #FFB400;
            color: #DA4D07;

            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            padding: 5px;


        }
        .Respuesta{
            background: #BAECCF;
            color: #114326;
            padding: 8px;
            border: solid #1D663C;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            font-weight: bold;

        }
        .requerido {
            color: darkred;
        }

    </style>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="registro">                                                            
                <?php echo $registro; ?>
            </h5>
        </div>
        <div class="panel-body" data-step="1" data-intro="Este m�dulo le permite registrar un nuevo exhorto generado, el cual puede ser modificado y/o eliminado." data-position='left'>


            <!-- INICIO EXHORTOS RECIBIDOS-->
            <div id="divFormulario" class="form-horizontal" style="display:<?php echo $displayExhortoR; ?>">
                <div id="btn_regresarER" style="display:inline-block"></div> 
                <div id="divCampos" style="display:block">
                    <div class="form-group">                                                                
                        <div class="col-md-2">
                            <input type="hidden" id="idExhorto" value="<?php echo $idCarpetaJudicialArbol; ?>"/>
                            <input type="hidden" id="idExhortoGenerado" value="<?php echo $idCarpetaJudicialArbol; ?>"/>
                            <input type="hidden" id="cveJuzgado" value="<?php echo $cveJuzgado; ?>"/>
                            <input type="hidden" id="tipoRegistro" value="<?php echo $tipo_registro; ?>"/>
                            <input type="hidden" id="arbol" value="<?php echo $idCarpetaJudicialArbol == "" ? 0 : 1; ?>"/>
                            <input type="hidden" id="arbolG" value="<?php echo $idActuacionlArbol == "" ? 0 : 1; ?>"/>
                            <input type="hidden" id="hiddenI" name="hiddenidResolucionCombatida" value="" />
                        </div>                           
                    </div>
                    <div class="form-group">                                                                  
                        <label class="control-label col-md-3">No. Exhorto</label>
                        <div class="col-md-2">
                            <input type="text" id="numeroE" class="form-inline " placeholder="N&uacute;mero" size="5" disabled>
                            / <input type="text" id="anioE" class="form-inline "  placeholder="A&ntilde;o" size="5" disabled>
                        </div>                       
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 ">Estado <span class="requerido">(*)</span></label>
                        <div class="col-md-9">
                            <div id="divCmbEstado" class="logobox"></div>
                            <select class="form-control Relacionado bloqueoE" name="cmbEstado" id="cmbEstado" onchange="validaEstado()">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 "><?php
                            if ($origen == 1) {
                                echo "Tribunal:";
                            } else {
                                echo "Juzgado:";
                            }
                            ?></label>
                        <div class="col-md-6">
                            <form name="selectedJuzgado" >
                                <select class="form-control " name="cveTipoJuzgado" id="cveTipoJuzgado" onchange="changeValor(this.value);
                                        cargaTipoCarpeta(1);" >
                                    <option value="0">Seleccione una opcion</option>
                                </select>
                            </form>
                        </div>                                
                    </div>
                    <div id="juzgadosEstado"  style='display:block'>
                        <div class="form-group">                                                                
                            <label class="control-label col-md-3 ">Juzgado Procedencia <span class="requerido">(*)</span></label>
                            <div>
                                <select class="col-md-9 bloqueoE" name="cmbJuzgado" id="cmbJuzgado" onchange="cargaTipoCarpeta(5);">
                                    <option value="0">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>                                
                        </div>
                    </div>
                    <div id="juzgadosFuera" style='display:none'>    
                        <div class="form-group">                                                                
                            <label class="control-label col-md-3">Juzgado Procedencia <span class="requerido">(*)</span></label>

                            <div class="col-md-9">
                                <input type="text" id="txtJuzgadoP" placeholder="Juzgado Procedencia" class="form-control bloqueoE mayuscula" value=""/>
                            </div>
                        </div>
                    </div>    
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3">Carpeta Investigaci&oacute;n </label>

                        <div class="col-md-2">
                            <input type="text" id="txtCarpetaInv" placeholder="Carpeta Inv." class="form-control bloqueoE" value=""/>

                        </div>  
                        <!-- <label class="control-label col-xs-2">No. Exhorto</label>
                        <div class="col-xs-2">
                            <input type="text" id="numeroE" class="form-inline " placeholder="N&uacute;mero" size="5" disabled>
                            / <input type="text" id="anioE" class="form-inline "  placeholder="A&ntilde;o" size="5" disabled>
                        </div>  -->                      
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3">Nuc (N&uacute;mero &uacute;nico de causa) </label>

                        <div class="col-md-2">
                            <input type="text" id="txtNuc" placeholder="Nuc" class="form-control bloqueoE" value=""/>
                        </div>    

                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3">Tipo de Carpeta de Procedencia <span class="requerido">(*)</span></label>
                        <div class="col-md-9">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado bloqueoE" name="cmbTipoCarpeta" id="cmbTipoCarpeta" onchange="changeLabel(this, ''), buscaImpofedel()" >
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>   
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3" id="lblRelationName">No. Causa <span class="requerido">(*)</span></label>
                        <div id="divSinRelacion" class="col-md-9">
                            <input type="text" id="txtNumeroC" class="form-inline Relacionado bloqueoE" placeholder="N&uacute;mero" onblur="buscaImpofedel()">
                            / <input type="text" class="form-inline Relacionado bloqueoE" id="txtAnioC" maxlength="4" onchange="validaAnio(this.value, 'C')" placeholder="A&ntilde;o" onblur="buscaImpofedel()">
                        </div>                              
                    </div> 
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3">No. Oficio </label>

                        <div class="col-md-9">
                            <input type="text" id="txtOficio" placeholder="No. Oficio" class="form-inline Relacionado bloqueoE" />
                            /<input type="text" class="form-inline Relacionado bloqueoE" maxlength="4" onchange="validaAnio(this.value, 'O')" id="txtAnioO" placeholder="A&ntilde;o">
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3">S&iacute;ntesis <span class="requerido">(*)</span></label>

                        <div class="col-md-9">
                            <input type="text" id="txtSintesis" placeholder="S&iacute;ntesis" class="form-control bloqueoE mayuscula"  value=""/>
                        </div>
                    </div>

                    <div id="divNotas" class="form-group">
                        <label class="control-label col-md-3">Observaciones/Anexos:</label>
                        <div class="col-md-9">
                            <script id="txtObservaciones" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>
                            <!--<textarea rows="5" id="txtObservaciones" class="form-control bloqueoE" placeholder="Observaciones"></textarea>-->
                        </div>
                    </div>
                    <div class="form-group">                                                                

                        <label class="control-label col-md-3 " >Estatus <span class="requerido">(*)</span></label>
                        <div class="col-md-6">
                            <div id="divCmbEstatus" class="logobox"></div>
                            <select class="form-control Relacionado bloqueoE" name="cmbEstatus" id="cmbEstatus">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>   
                        <label class="control-label col-md-2 "></label>
                        <div class="col-md-2">
                            <div id="resConsignacion" class="logobox"></div>
                        </div>                             
                    </div>


                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="margin-left:auto;margin-right:auto">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a id="acordeonImputados" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        IMPUTADOS
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <!-- INICIO DE FORMULARIO DE IMPUTADOS -->
                                    <div class="form-group">
                                        <label class="control-label col-md-3 ">Tipo Persona <span class="requerido">(*)</span></label>
                                        <div class="col-md-9"> 
                                            <div id="divCmbTipoPersonaImputado" class="logobox"></div>
                                            <select class="form-control Relacionado bloqueoE" name="cmbTipoPersonaImputado" id="cmbTipoPersonaImputado" onchange="seleccionaTipoIm()">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="divImputados">
                                        <div id="ImputadosMoral" style="display:none">
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Nombre <span class="requerido">(*)</span></label>
                                                <div class="col-md-9">
                                                    <input type="text"  id="txtNombreMoralI" placeholder="Persona Moral" class="form-control txtImpM mayuscula" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'cmbConsignacionIMoral', 'txtImpM', 'lstImputados', 'imputados');"/>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3 ">Consignaci&oacute;n <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <div id="divCmbConsignacion" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbConsignacionIMoral" id="cmbConsignacionIMoral">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3 ">Estado <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <div id="divCmbEstadoIMoral" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbEstadoMoralI" id="cmbEstadoMoralI" onchange="cargaMunicipioMoralI()">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                                <label class="control-label col-md-2 ">Municipio <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <div id="divCmbMunicipioMoralI" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbMunicipioMoralI" id="cmbMunicipioMoralI">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>                                
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Domicilio <span class="requerido">(*)</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtDomicilioMoralI" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();" placeholder="Domicilio" class="form-control" value=""/>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="ImputadosFisica" style="display:none"> 

                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Imputado <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <input type="text"  id="txtNombreFisicaI" placeholder="Nombre" class="form-control txtImpF mayuscula" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'txtPaternoFisicaI', 'txtImpF', 'lstImputados');"/>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text"  id="txtPaternoFisicaI" placeholder="Paterno" class="form-control txtImpF mayuscula" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'txtMaternoFisicaI', 'txtImpF', 'lstImputados');"/>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="text"  id="txtMaternoFisicaI" placeholder="Materno" class="form-control txtImpF mayuscula" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'cmbConsignacionI', 'txtImpF', 'lstImputados', 'imputados');"/>
                                                </div>

                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3 ">Consignaci&oacute;n <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <div id="divCmbConsignacion" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbConsignacionI" id="cmbConsignacionI" onchange="validaConsignacion()">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>

                                                </div>  
                                                <label class="control-label col-md-2 ">Genero <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <div id="divCmbGeneroImputado" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbGeneroImputado" id="cmbGeneroImputado">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>                                 
                                            </div>

                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3 ">Estado <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <div id="divCmbEstadoI" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbEstadoI" id="cmbEstadoI" onchange="cargaMunicipioIm()">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                                <label class="control-label col-md-2 ">Municipio <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <div id="divCmbMunicipioI" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbMunicipioI" id="cmbMunicipioI">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>                                
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Domicilio <span class="requerido">(*)</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtDomicilioI" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();" placeholder="Domicilio" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Alias </label>
                                                <div class="col-md-2">
                                                    <input type="text" id="txtAlias" placeholder="Alias" class="form-control" value=""/>
                                                </div>
                                                <label class="control-label col-md-2">Telefono </label>
                                                <div class="col-md-2">
                                                    <input type="text" id="txtTelefonoI" placeholder="Telefono" class="form-control" value="" maxlength="10"/>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3 ">Cereso <span class="requerido">(*)</span></label>
                                                <div class="col-md-9">
                                                    <div id="divCmbCereso" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbCereso" id="cmbCereso">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>                                
                                            </div>

                                        </div>


                                        <div class="col-md-12" id="ImputadosAccion" style="display:none;">
                                            <label class="control-label col-md-3"></label>
                                            <div id="divBotonAgregaImputado" style="display:inline-block">
                                                <input type="submit" class="btn btn-primary" id="inputAgregarImputado" value="Agregar Imputado" onclick="return capturaBoton('lstImputados', 'imputados','cmbImputadosAgregados');">
                                            </div>
                                            <div id="divBotonActualizarImputado" style="display:inline-block"></div>
                                            <input type="submit" class="btn btn-primary" id="inputLimpiarImputado" value="Limpiar" onclick="return limpiarImputado('lstImputados', 'imputados');">
                                        </div>

                                    </div>

                                    <div class="form-group" style="display:none">
                                        <label class="control-label col-md-3">Lista Imputado(s):</label>
                                        <div class="col-md-9">
                                            <select
                                                name="lstImputados" id="lstImputados"
                                                class="form-control  bloqueoE"
                                                onDblClick="borraPersona(this.id, 'imputados');" 
                                                style="height: 200px" multiple >
                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <br>
                                    <div class="form-group" style="text-align:center">
                                        <div id="divAlertSuccesImputado" class="alert alert-success alert-dismissable"></div>
                                        <div id="divAlertDagerImputado" class="alert alert-danger alert-dismissable"></div>
                                    </div> 
                                    <div class="col-lg-12" style="display:none" id="divTablaImputados">
                                        <table id="tableImputados" class="table table-hover table-striped table-bordered" >
                                            <thead> 
                                                <tr> 
                                                    <th width="100">No.</th> 
                                                    <th>Nombre</th> 
                                                    <th width="100">Eliminar</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody id="tabla-imputados">
                                            </tbody>
                                        </table>

                                        <div id="divTestigosI">
                                        <hr>
                                        <h4>Testigos</h4>
                                        <div class="form-group"> 
                                            <label class="control-label col-md-2">Tipo Parte</label>
                                            <div class="col-md-3">
                                                <select class="form-control" name="cmbTiposPartesI" id="cmbTiposPartesI">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div> 
                                            <label class="control-label col-md-2">Imputado</label>
                                            <div class="col-md-4">
                                                <select class="form-control" name="cmbImputadosAgregados" id="cmbImputadosAgregados">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>    
                                        </div>    
                                        <div class="form-group">                                                                    
                                                <label class="control-label col-md-2">Nombre</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nombreTestigoI" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();" placeholder="Nombre" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class=" col-md-offset-3" id="divBotonAgregaTestigo">
                                                <button class="btn btn-primary" id="inputAgregarTestigo"  onclick="guardaTestigo();">Agregar Testigo</button>
                                                <button class="btn btn-primary" id="inputModificarTestigo" style="display: none" onclick="actualizaTestigo();">Modificar Testigo</button>
                                                <button class="btn btn-primary" id="limpiarTestigo"  onclick="limpiarTestigo();">Limpiar Testigo</button>
                                            </div>
                                            
                                            <table id="tableTestigos" class="table table-hover table-striped table-bordered" >
                                            <thead> 
                                                <tr> 
                                                    <th width="100">No.</th> 
                                                    <th width="100">Nombre</th> 
                                                    <th>Tipo Parte</th> 
                                                    <th>Imputado</th> 
                                                    <th width="100">Eliminar</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody id="testigosTbody">
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                    


                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a id="acordeonOfendidos" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        OFENDIDOS
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 ">Tipo Persona <span class="requerido">(*)</span></label>
                                        <div class="col-md-9"> 
                                            <div id="divCmbTipoPersonaOfendido" class="logobox"></div>
                                            <select class="form-control Relacionado bloqueoE" name="cmbTipoPersonaOfendido" id="cmbTipoPersonaOfendido" onchange="seleccionaTipoOf()">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="divOfendidos">
                                        <div id="OfendidosMoral" style="display:none">
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Nombre <span class="requerido">(*)</span></label>
                                                <div class="col-md-9">
                                                    <input type="text"  id="txtNombreMoralO" placeholder="Persona Moral" class="form-control txtOfeM mayuscula" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'cmbEstadoMoralO', 'txtOfeM', 'lstOfendidos');"/>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3 ">Estado <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <div id="divCmbEstadoMoralO" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbEstadoMoralO" id="cmbEstadoMoralO" onchange="cargaMunicipioMoralO()">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                                <label class="control-label col-md-2 ">Municipio <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <div id="divCmbMunicipioMoralO" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbMunicipioMoralO" id="cmbMunicipioMoralO">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>                                
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Domicilio <span class="requerido">(*)</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtDomicilioMoralO" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();" placeholder="Domicilio" class="form-control" value=""/>
                                                </div>
                                            </div>                                        
                                        </div>
                                        <div id="OfendidosFisica" style="display:none">    
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Ofendido <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <input type="text"  id="txtNombreFisicaO" placeholder="Nombre" class="form-control txtOfeF mayuscula" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'txtPaternoFisicaO', 'txtOfeF', 'lstOfendidos');"/>
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="text"  id="txtPaternoFisicaO" placeholder="Paterno" class="form-control txtOfeF mayuscula" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'txtMaternoFisicaO', 'txtOfeF', 'lstOfendidos');"/>
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="text"  id="txtMaternoFisicaO" placeholder="Materno" class="form-control txtOfeF mayuscula" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'cmbGeneroOfendido', 'txtOfeF', 'lstOfendidos');"/>
                                                </div>

                                            </div>                       
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3 ">Genero <span class="requerido">(*)</span></label>
                                                <div class="col-md-9">
                                                    <div id="divCmbGeneroOfendido" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbGeneroOfendido" id="cmbGeneroOfendido">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>                                
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3 ">Estado <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <div id="divCmbEstadoO" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbEstadoO" id="cmbEstadoO" onchange="cargaMunicipioOf()">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>
                                                <label class="control-label col-md-2 ">Municipio <span class="requerido">(*)</span></label>
                                                <div class="col-md-2">
                                                    <div id="divCmbMunicipioO" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbMunicipioO" id="cmbMunicipioO">
                                                        <option value="0">Seleccione una opci&oacute;n</option>
                                                    </select>
                                                </div>                                
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Domicilio <span class="requerido">(*)</span></label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtDomicilioO" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();" placeholder="Domicilio" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-md-3">Telefono </label>
                                                <div class="col-md-9">
                                                    <input type="text" id="txtTelefonoO" placeholder="Telefono" class="form-control" value="" maxlength="10"/>
                                                </div>
                                            </div>

                                        </div> 

                                        <div class="form-group" id="OfendidosAccion" style="display:none;">  
                                            <label class="control-label col-md-3"> </label>                                                        
                                            <div class="col-md-9">
                                                <div id="divBotonAgregaOfendido" style="display:inline-block">
                                                    <input type="submit" class="btn btn-primary" id="inputAgregarOfendido" value="Agregar Ofendido" onclick="return capturaBoton('lstOfendidos', 'ofendidos','cmbOfendidosAgregados');">
                                                </div>
                                                <div id="divBotonActualizarOfendido" style="display:inline-block"></div>

                                                <input type="submit" class="btn btn-primary" id="inputLimpiarOfendido" value="Limpiar" onclick="return limpiarOfendido('lstOfendidos', 'ofendidos');">
                                            </div>
                                        </div>                         

                                    </div>
                                    <br>
                                    <br>                                

                                    <div class="form-group" style="display:none">
                                        <label class="control-label col-md-3">Lista Ofendido(s):</label>
                                        <div class="col-md-9">
                                            <select
                                                name="lstOfendidos" id="lstOfendidos"
                                                class="form-control bloqueoE"
                                                onDblClick="borraPersona(this.id, 'ofendidos');" style="height: 200px" multiple >
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="text-align:center">
                                        <div id="divAlertSuccesOfendido" class="alert alert-success alert-dismissable"></div>
                                        <div id="divAlertDagerOfendido" class="alert alert-danger alert-dismissable"></div>
                                    </div> 
                                    <div class="col-lg-12" style="display:none" id="divTablaOfendidos">
                                        <table id="tableOfendidos" class="table table-hover table-striped table-bordered" >
                                            <thead> 
                                                <tr> 
                                                    <th width="100">No.</th> 
                                                    <th>Nombre</th> 
                                                    <th width="100">Eliminar</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody id="tabla-ofendidos">
                                            </tbody>
                                        </table>
                                        <div id="divTestigosO">
                                        <hr>
                                        <h4>Testigos</h4>
                                        <div class="form-group"> 
                                            <label class="control-label col-md-2">Tipo Parte</label>
                                            <div class="col-md-3">
                                                <select class="form-control" name="cmbTiposPartesO" id="cmbTiposPartesO">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div> 
                                            <label class="control-label col-md-2">Imputado</label>
                                            <div class="col-md-4">
                                                <select class="form-control" name="cmbOfendidosAgregados" id="cmbOfendidosAgregados">
                                                    <option value="0">Seleccione una opci&oacute;n</option>
                                                </select>
                                            </div>    
                                        </div>    
                                        <div class="form-group">                                                                    
                                                <label class="control-label col-md-2">Nombre</label>
                                                <div class="col-md-9">
                                                    <input type="text" id="nombreTestigoO" style="text-transform:uppercase;" onkeyup="javascript:this.value.toUpperCase();" placeholder="Nombre" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class=" col-md-offset-3" id="divBotonAgregaTestigo">
                                                <button class="btn btn-primary" id="inputAgregarTestigoO"  onclick="guardaTestigoO();">Agregar Testigo</button>
                                                <button class="btn btn-primary" id="inputModificarTestigoO" style="display: none"  onclick="actualizaTestigoO();">Modificar Testigo</button>
                                                <button class="btn btn-primary" id="limpiarTestigoO"  onclick="limpiarTestigoO();">Limpiar Testigo</button>
                                            </div>
                                            
                                            <table id="tableTestigosO" class="table table-hover table-striped table-bordered" >
                                            <thead> 
                                                <tr> 
                                                    <th width="100">No.</th> 
                                                    <th width="100">Nombre</th> 
                                                    <th>Tipo Parte</th> 
                                                    <th>Imputado</th> 
                                                    <th width="100">Eliminar</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody id="testigosTbodyO">
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a id="acordeonDelitos" class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        DELITOS
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 ">Delito <span class="requerido">(*)</span></label>
                                        <div class="col-md-9"> 
                                            <div id="divCmbDelito" class="logobox"></div>
                                            <select class="form-control Relacionado txtDel bloqueoE" name="cmbDelito" id="cmbDelito" 
                                                    onchange="return capturaDelito('agregaPersona', 'txtDel', 'lstDelitos', 'delitos')">
                                                <option value="0">Seleccione una opci&oacute;n</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="display:none">
                                        <label class="control-label col-md-3">Lista Delito(s):</label>
                                        <div class="col-md-9">
                                            <select
                                                name="lstDelitos" id="lstDelitos"
                                                class="form-control bloqueoE"
                                                onDblClick="borraPersona(this.id, 'delitos');" style="height: 200px" multiple >
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="text-align:center">
                                        <div id="divAlertSuccesDelito" class="alert alert-success alert-dismissable"></div>
                                        <div id="divAlertDagerDelito" class="alert alert-danger alert-dismissable"></div>
                                    </div> 
                                    <div class="col-lg-12" style="display:none" id="divTablaDelitos">
                                        <table id="tableDelitos" class="table table-hover table-striped table-bordered" >
                                            <thead> 
                                                <tr> 
                                                    <th width="100">No.</th> 
                                                    <th>Nombre</th> 
                                                    <th width="100">Eliminar</th> 
                                                </tr> 
                                            </thead> 
                                            <tbody id="tabla-delitos">
                                            </tbody>
                                        </table>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-2 "></label>
                        <div class="col-lg-10" style="text-align:left" id="div_actualizar">                                                                
                            <div>
                            </div>
                        </div>
                    </div>
                    <div id="divListaPromoventes" class="form-group">

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
                        <div class="form-group" style="text-align:center">
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
                        <div class="form-group" style="text-align:center">
                            <div id="div_respuesta"></div>
                        </div>
                        <div class="form-group" style="text-align:center">
                            <div id="div_imprimirER"></div>
                        </div>
                        <br>
                        <div class="form-group" style="text-align:center">
                            <div >
                                <div id="btn_accionE" style="display:inline-block">
                                    <div id="btn_guardarE" style="display:inline-block">
                                        <input type="submit" class="btn btn-primary" id="inputGuardar" value="Guardar" onclick="guardarExhorto();">
                                    </div> 
                                    <div id="btn_consultarE" style="display:inline-block">
                                        <input type="submit" class="btn btn-primary" id="inputConsultar" value="Consultar" onclick="consultar();">                           
                                        <input type="submit" class="btn btn-primary" id="inputLimpiarG" value="Limpiar" onclick="limpiar();">                                   
                                    </div>                                 
                                    <button class="btn btn-primary" id="inputDigitalizarR" style="display: none" onclick="javascript:digitalizarPromocion(0);">Digitalizar</button>                                                                                    
                                    <button class="btn btn-primary" id="inputVisorR" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos(0);" style="display: none">Visor</button>
                                    <button class="btn btn-primary" id="inputPDFR" style="display: none" onclick="javascript:enviarPDF(0);">Generar PDF</button>    
                                </div>  
                                <div id="btn_imprimirER" style="display:inline-block"></div>

                            </div>

                        </div>         
                    </div>

                </div>

                <!-- INICIO DE CONSULTA-->
                <div id="divCamposConsulta" style="display:none">
                    <div  style="text-align:left">
                        <div>
                            <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultar();">                                    
                        </div>
                    </div>
                    <div class="form-group">                                                                


                        <label class="control-label col-md-3">No. Exhorto</label>
                        <div class="col-md-2">
                            <input type="text" id="numeroEC" class="form-inline " placeholder="N&uacute;mero" size="5" >
                            / <input type="text" id="anioEC" class="form-inline "  placeholder="A&ntilde;o" size="5" >
                        </div>

                    </div>
                    <div class="form-group">                                                                


                        <label class="control-label col-md-3">Juzgado Exhortado</label>
                        <div class="col-md-6">
                            <select class="form-control " name="cveTipoJuzgado2" id="cveTipoJuzgado2" >
                                <option value="0">Seleccione una opcion</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 ">Estado</label>
                        <div class="col-md-9">
                            <select class="form-control Relacionado" name="cmbEstadoConsulta" id="cmbEstadoConsulta" onchange="validaEstadoConsulta()">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>

                    <div id="juzgadosEstadoConsulta"  style='display:block'>
                        <div class="form-group">                                                                
                            <label class="control-label col-md-3 ">Juzgado Procedencia</label>
                            <div>
                                <select class="col-md-9 " name="cmbJuzgadoConsulta" id="cmbJuzgadoConsulta">
                                    <option value="0">Seleccione una opci&oacute;n</option>
                                </select>
                            </div>                                
                        </div>
                    </div>
                    <div id="juzgadosFueraConsulta" style='display:none'>    
                        <div class="form-group">                                                                
                            <label class="control-label col-md-3">Juzgado Procedencia</label>

                            <div class="col-md-9">
                                <input type="text" id="txtJuzgadoPConsulta" placeholder="Juzgado Procedencia" class="form-control mayuscula" value=""/>
                            </div>
                        </div>
                    </div> 
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3">Carpeta Investigaci&oacute;n</label>
                        <div class="col-md-2">
                            <input type="text" id="txtCarpetaInvConsulta" placeholder="Carpeta Inv." class="form-control" value=""/>
                        </div> 

                        <label class="control-label col-md-2">No. Exhorto</label>
                        <div class="col-md-2">
                            <input type="text" id="numeroEC" class="form-inline " placeholder="N&uacute;mero" size="5" >
                            / <input type="text" id="anioEC" class="form-inline "  placeholder="A&ntilde;o" size="5" >
                        </div>

                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3">Nuc</label>
                        <div class="col-md-2">
                            <input type="text" id="txtNucConsulta" placeholder="Nuc" class="form-control" value=""/>
                        </div>                           
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 ">Tipo Carpeta</label>
                        <div class="col-md-9">
                            <select class="form-control Relacionado" name="cmbTipoCarpetaConsulta" id="cmbTipoCarpetaConsulta" onchange="changeLabel2(this, '')" >
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3" id="lblRelationName2">No. Causa</label>
                        <div id="divSinRelacion" class="col-md-9">
                            <input type="text" id="txtNumeroCConsulta" class="form-inline Relacionado" placeholder="N&uacute;mero">
                            /<input type="text" class="form-inline Relacionado" id="txtAnioCConsulta" placeholder="A&ntilde;o">
                        </div>                              
                    </div>     
                    <!-- <div class="form-group">                                                                
                        <label class="control-label col-xs-3">No. Oficio</label>

                        <div class="col-xs-9">
                            <input type="text" id="txtOficioConsulta" placeholder="No. Oficio" class="form-inline Relacionado" />
                            /<input type="text" class="form-inline Relacionado" id="txtAnioOConsulta" placeholder="A&ntilde;o">
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">Sintesis</label>

                        <div class="col-xs-2">
                            <input type="text" id="txtSintesisConsulta" placeholder="Sintesis" class="form-control" value=""/>
                        </div>
                    </div> -->

                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 ">Fecha Inicial</label>
                        <div class="col-md-2">
                            <input type="text" id="fechaInicial" placeholder="Fecha" class="form-control datetimepicker fecha" value=""/>
                        </div> 
                        <label class="control-label col-md-2 " >Fecha Final</label>
                        <div class="col-md-2">
                            <input type="text" id="fechaFinal" placeholder="Fecha" class="form-control datetimepicker fecha" value=""/>
                        </div>                                 
                    </div>


                    <br>
                    <div class="form-group" style="text-align:center">
                        <div>
                            <input type="submit" class="btn btn-primary" id="inputBuscar" value="Buscar" onclick="buscarExhorto(1, 0);">                                    
                           <!--  <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultar();">  -->                                   
                            <input type="submit" class="btn btn-primary" id="inputLimpiar2" value="Limpiar" onclick="limpiar2();">                                    
                        </div>

                    </div>

                    <div class="form-group" style="text-align:center">
                        <div id="divAlertWarningC" class="alert alert-warning alert-dismissable"></div>
                        <div id="divAlertSuccesC" class="alert alert-success alert-dismissable"></div>
                        <div id="divAlertDagerC" class="alert alert-danger alert-dismissable"></div>
                        <div id="divAlertInfoC" class="alert alert-info alert-dismissable"></div>
                    </div> 
                    <div class="form-group" style="text-align:right">
                        <br>
                        <div id="div_paginacionConsulta"></div>
                        <div id="div_respuestaConsulta" class="col-md-12"></div>
                    </div>

                </div>
                <!-- FIN CONSULTA   -->    
            </div>
            <!-- INICIO DE EXHORTOS GENERADOS-->
            <div id="divExhortosGenerados" class="form-horizontal" style="display:<?php echo $displayExhortoG; ?>">

                <div class="form-group">                                                                
                    <div class="col-md-9">
                        <input type="hidden" id="idActuacion" value=""/>
                    </div>
                </div>
                <div class="form-group">                                                                

                    <label class="control-label col-md-3">No. Exhorto Generado </label>
                    <div class="col-md-7">
                        <input type="text" id="numeroEG" class="form-inline " placeholder="N&uacute;mero" disabled size="5">
                        / <input type="text" id="anioEG" class="form-inline "  placeholder="A&ntilde;o" disabled size="5">
                        <!-- <a title="Llenado Automatico" style="text-decoration: none;border-radius: 10px; background:#4A7DFD;color:#FFFFFF;padding-left:4px;padding-right: 2px"> ? </a> -->
                        <div id="div_enviarEG" style="display:inline-block"></div>
                    </div> 

                </div> 
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 "><?php
                        if ($origen == 1) {
                            echo "Tribunal:";
                        } else {
                            echo "Juzgado:";
                        }
                        ?></label>
                    <div class="col-md-6">
                        <!--<form name="selectedJuzgado" >-->
                        <select class="form-control " name="cveTipoJuzgadoG" id="cveTipoJuzgadoG" onchange="cargaTipoCarpeta(2)">

                        </select>
                        <!--</form>-->
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Tipo de Carpeta <span class="requerido" data-step="2" data-intro=" La informaci&oacute;n requerida se indica con (*)." data-position='right'>(*)</span></label>
                    <div class="col-md-9">
                        <select class="form-control Relacionado bloqueoEG" name="cmbTipoCarpetaG" id="cmbTipoCarpetaG" onchange="changeLabelG(this, ''), validaCarpeta()" >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3" id="lblRelationNameG" >No. Causa <span class="requerido">(*)</span></label>
                    <div id="divSinRelacion" class="col-md-9">
                        <input type="text" id="txtNumeroCG" class="form-inline Relacionado bloqueoEG" placeholder="N&uacute;mero" onblur="validaCarpeta()">
                        / <input type="text" maxlength="4" class="form-inline Relacionado bloqueoEG" id="txtAnioCG" placeholder="A&ntilde;o" onblur="validaCarpeta()" onchange="validaAnio()">
                        <div style="display:inline-block" id="resRelacion"> </div>
                    </div> 
                </div>
                <div class="form-group" id="datosRelacionados" style="display: none">                                                                
                    <label class="control-label col-xs-3" id="" >Datos Relacionados</label>
                    <div id="datosRelacionadostxt" class="col-xs-9">
                        <div style="display:inline-block" id="resRelacion"> </div>
                    </div> 
                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-md-3">S&iacute;ntesis <span class="requerido">(*)</span></label>

                    <div class="col-md-9">
                        <input type="text" id="txtSintesisG" placeholder="S&iacute;ntesis" class="form-control bloqueoEG mayuscula"  value=""/>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Estado <span class="requerido">(*)</span></label>
                    <div class="col-md-9">
                        <div id="divCmbEstado" class="logobox"></div>
                        <select class="form-control Relacionado bloqueoEG" name="cmbEstadoG" id="cmbEstadoG" onchange="validaEstadoG()">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div id="juzgadosEstadoG"  style='display:block'>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 "><?php
                            if ($origen == 1) {
                                echo "Tribunal Destino:";
                            } else {
                                echo "Juzgado Dtino:";
                            }
                            ?><span class="requerido">(*)</span></label>
                        <div class="col-md-9">
                            <select style="width: 100%;" class=" bloqueoEG" name="cmbJuzgadoG" id="cmbJuzgadoG">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                </div>
                <div id="juzgadosFueraG" style='display:none'>    
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3"><?php
                            if ($origen == 1) {
                                echo "Tribunal Destino:";
                            } else {
                                echo "Juzgado Destino:";
                            }
                            ?> <span class="requerido">(*)</span></label>
                        <div class="col-md-9">
                            <input type="text" style="text-transform:uppercase;"  id="txtJuzgadoPG" placeholder="Juzgado Destino" class="form-control bloqueoEG mayuscula" value=""/>
                        </div>
                    </div>
                </div> 
                <div>    
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">Numero Oficio <span class="requerido">(*)</span></label>
                        <div class="col-xs-2">
                            <input type="text" id="numOficio" placeholder="Numero Oficio" class="form-control" value=""/>
                        </div>
                        <label class="control-label col-xs-2">A&ntilde;o Oficio <span class="requerido">(*)</span></label>
                        <div class="col-xs-2">
                            <input type="text" id="anioOficio" maxlength="4" placeholder="A&ntilde;o Oficio" class="form-control" onchange="validaAnio();" value=""/>
                        </div>
                    </div>
                </div>
                <div>    
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">Fecha Oficio <span class="requerido">(*)</span></label>
                        <div class="col-xs-2">
                            <input type="text" id="fechaInicioEG" placeholder="Fecha" class="form-control datetimepicker fecha" value=""/>
                        </div>
                        <label class="control-label col-xs-2">Fecha Termino </label>
                        <div class="col-xs-2">
                            <input type="text" id="fechaTerminoEG" placeholder="Fecha" class="form-control datetimepicker fecha" value=""/>
                        </div>
                    </div>
                </div>
                <div>    
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">Texto Exhorto <span class="requerido">(*)</span></label>
                        <div class="col-xs-6">
                            <script  id="textoExhortoG" type="text/plain" style="width: 98%; height: 300px; margin: 0px auto;"></script>                        
                        </div>
                    </div>
                </div>
                <div>    
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">Telefono <span class="requerido">(*)</span></label>
                        <div class="col-xs-2">
                            <input type="text" maxlength="10" id="telefonoEG" placeholder="Telefono" class="form-control" value=""/>
                        </div>
                        <label class="control-label col-xs-2">Correo <span class="requerido">(*)</span></label>
                        <div class="col-xs-2">
                            <input type="email" onchange="validacorreo()" id="correoEG" placeholder="Correo" class="form-control" value=""/>
                        </div>
                    </div>
                </div>
                <div>    
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">Facultado Acordar</label>
                        <div class="col-xs-6">
                            <input type="checkbox" name="facultadoAcordar" id="facultadoAcordar" value="N">
                        </div>
                    </div>
                </div>

                <!--            <div id="divNotas" class="form-group">
                                <label class="control-label col-md-3">Observaciones</label>
                                <div class="col-md-9">
                                    <textarea rows="5"  id="txtObservacionesG" placeholder="Observaciones" class="form-control"></textarea>
                                    <input type="text" id="textoExhorto" placeholder="Texto Exhorto" class="form-control" value=""/>
                                    <textarea rows="5" id="txtObservacionesG" class="form-control bloqueoEG" placeholder="Observaciones"></textarea>
                                </div>
                            </div>-->
                <div class="form-group">                                                                

                    <label class="control-label col-md-3 " >Estatus <span class="requerido">(*)</span></label>
                    <div class="col-md-6">
                        <div id="divCmbEstatus" class="logobox"></div>
                        <select class="form-control Relacionado bloqueoEG" name="cmbEstatusG" id="cmbEstatusG">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>
                <div id="divRequisitoria" class="form-group">
                    <label class="control-label col-md-3">Requisitoria</label>
                    <div class="col-md-9">
                        <input type="checkbox" id="requisitoria" class="form-control bloqueoEG"/>
                    </div>
                </div>
                <div id="divchekEnviarEG" class="form-group">
                    <label class="control-label col-md-3">Enviar Exhorto</label>
                    <div class="col-md-9">
                        <input type="checkbox" id="chekEnviarEG" class="form-control bloqueoEG"/>
                    </div>
                </div>

                <div class="form-group" style="text-align:center">

                    <div class="form-group">
                        <div id="divAlertWarningE" class="alert alert-warning alert-dismissable"></div>
                        <div id="divAlertSuccesE" class="alert alert-success alert-dismissable"></div>
                        <div id="divAlertDagerE" class="alert alert-danger alert-dismissable"></div>
                        <div id="divAlertInfoE" class="alert alert-info alert-dismissable"></div>
                    </div>
                    <div id="div_respuestaG"></div>
                </div>
                <br>
                <div class="form-group" style="text-align:center">
                    <div>
                        <div id="btn_guardar" style="display:inline-block" data-step="3" data-intro="Presi&oacute;nelo para guardar o actualizar el exhorto ." data-position='top'>
                            <input type="submit" class="btn btn-primary" id="inputGuardarEG" value="Guardar" onclick="guardarExhortoG();">
                            <input type="submit" style="display: none"  class="btn btn-primary" id="actEnve" value="Actualizar" onclick="guardarEnviarExhortoG();">
                        </div>            
                        <input type="submit" class="btn btn-primary" id="inputConsultarG" value="Consultar" onclick="consultarG();">                        
                        <input data-step="4" data-intro="Util&iacute;celo para limpiar la informaci&oacute;n seleccionada/introducida." data-position='top' type="submit" class="btn btn-primary" id="inputLimpiar3" value="Limpiar" onclick="limpiar3();">                           
                        <input type="submit" class="btn btn-primary" style="display: none" id="inputLimpiarArbol" value="Limpiar" onclick="limpiarArbol();">
                        <div id="btn_verER" style="display:inline-block"></div>
                        <div id="btn_imprimirEG" style="display:inline-block"></div>
                        <button class="btn btn-primary" id="inputDigitalizar" style="display: none" onclick="javascript:digitalizarPromocion(1);">Digitalizar</button>                                                                                    
                        <button class="btn btn-primary" id="inputVisor" data-toggle="modal" data-target="#ModalVisorPDF" onclick="javascript:visorDocuemntos(1);" style="display: none">Visor</button>
                        <button class="btn btn-primary" id="inputPDF" style="display: none" onclick="javascript:enviarPDF(1);">Generar PDF</button>
                    </div>
                </div>

            </div>
            <!-- INICIO DE CONSULTA DE EXHORTOS GENERADOS-->
            <div id="divExhortosGeneradosConsulta" class="form-horizontal" style="display:none">

                <div>
                    <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultarG();">                                    
                </div>
                <div class="form-group">                                                                

                    <label class="control-label col-md-3">No. Exhorto Generado</label>
                    <div class="col-md-9">
                        <input type="text" id="numeroEGC" class="form-inline " placeholder="N&uacute;mero" >
                        / <input type="text" id="anioEGC" class="form-inline "  placeholder="A&ntilde;o" >

                    </div> 

                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 "><?php
                        if ($origen == 1) {
                            echo "Tribunal:";
                        } else {
                            echo "Juzgado:";
                        }
                        ?></label>
                    <div class="col-md-6">
                        <form name="selectedJuzgado" >
                            <select class="form-control " name="cveTipoJuzgadoGConsultar" id="cveTipoJuzgadoGConsultar" onchange="cargaTipoCarpeta(3)">

                            </select>
                        </form>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Tipo de Carpeta</label>
                    <div class="col-md-9">
                        <select class="form-control Relacionado" name="cmbTipoCarpetaGConsulta" id="cmbTipoCarpetaGConsulta" onchange="changeLabelGConsulta(this, '')" >
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3" id="lblRelationNameGConsulta">No. Causa</label>
                    <div id="divSinRelacion" class="col-md-9">
                        <input type="text" id="txtNumeroCGConsulta" class="form-inline Relacionado" placeholder="N&uacute;mero">
                        / <input type="text" class="form-inline Relacionado" id="txtAnioCGConsulta" placeholder="A&ntilde;o">
                    </div>                              
                </div>

                <!-- <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Sintesis</label>

                    <div class="col-xs-6">
                        <input type="text" id="txtSintesisGConsulta" placeholder="Sintesis" class="form-control" value=""/>
                    </div>
                </div> -->
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Estado</label>
                    <div class="col-md-9">
                        <div id="divCmbEstado" class="logobox"></div>
                        <select class="form-control Relacionado" name="cmbEstadoGConsulta" id="cmbEstadoGConsulta" onchange="validaEstadoGConsulta()">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>                                
                </div>
                <div id="juzgadosEstadoGConsulta"  style='display:block'>
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3 "><?php
                            if ($origen == 1) {
                                echo "Tribunal Destino:";
                            } else {
                                echo "Juzgado Destino:";
                            }
                            ?></label>
                        <div class="col-md-9">
                            <select style="width: 100%;" class="col-md-12" name="cmbJuzgadoGConsulta" id="cmbJuzgadoGConsulta">
                                <option value="0">Seleccione una opci&oacute;n</option>
                            </select>
                        </div>                                
                    </div>
                </div>
                <div id="juzgadosFueraGConsulta" style='display:none'>    
                    <div class="form-group">                                                                
                        <label class="control-label col-md-3"><?php
                            if ($origen == 1) {
                                echo "Tribunal Destino:";
                            } else {
                                echo "Juzgado Destino:";
                            }
                            ?></label>

                        <div class="col-md-9">
                            <input type="text" id="txtJuzgadoPGConsulta" placeholder="Juzgado Destino" class="form-control mayuscula" value=""/>
                        </div>
                    </div>
                </div> 
                <div class="form-group">                                                                

                    <label class="control-label col-md-3 " >Estatus</label>
                    <div class="col-md-2">
                        <div id="divCmbEstatus" class="logobox"></div>
                        <select class="form-control Relacionado" name="cmbEstatusGConsulta" id="cmbEstatusGConsulta">
                            <option value="0">Seleccione una opci&oacute;n</option>
                        </select>
                    </div>  
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-md-3 ">Fecha Inicial</label>
                    <div class="col-md-2">
                        <input type="text" id="fechaInicialG" placeholder="Fecha" class="form-control datetimepicker fecha" value=""/>
                    </div> 
                    <label class="control-label col-md-2 " >Fecha Final</label>
                    <div class="col-md-2">
                        <input type="text" id="fechaFinalG" placeholder="Fecha" class="form-control datetimepicker fecha" value=""/>
                    </div>                                 
                </div>
                <br>
                <div class="form-group" style="text-align:center">
                    <div>
                        <input type="submit" class="btn btn-primary" id="inputBuscarEG" value="Buscar" onclick="buscarExhortoG(1);">                                    
                        <!-- <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultarG();"> -->                                    
                        <input type="submit" class="btn btn-primary" id="inputLimpiar4" value="Limpiar" onclick="limpiar4();">                                    
                    </div>
                    <br>
                    <div class="form-group">
                        <div id="divAlertWarningEC" class="alert alert-warning alert-dismissable"></div>
                        <div id="divAlertSuccesEC" class="alert alert-success alert-dismissable"></div>
                        <div id="divAlertDagerEC" class="alert alert-danger alert-dismissable"></div>
                        <div id="divAlertInfoEC" class="alert alert-info alert-dismissable"></div>
                    </div>


                </div>
                <div class="form-group" style="text-align:right">
                    <br>
                    <div id="div_paginacionConsultaGenerado"></div>
                    <div id="div_respuestaConsultaGenerado" class="col-md-12"></div>
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
    <input type="hidden" value="" id="idReferenciaRelacion">
    <script type="text/javascript">

        var juzgadoSesion = "<?php echo $_SESSION['cveAdscripcion']; ?>";
        var cveUsuarioSesion = "<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
        var procedencia = "<?php echo $procedencia; ?>";
        var origen = "<?php echo $origen; ?>";
        
        var cveJuzgadoArbol = '<?php echo $juzgadoOrigenArbol; ?>';
        var origenArbol = '<?php echo $origenArbol; ?>';
        var idActuacion = '<?php echo $idActuacionlArbol; ?>';
        var cveAdscripcion = '<?php echo $_SESSION['cveAdscripcion']; ?>';
        var listaTestigosI = [];
        var listaTestigosO = [];
        
        if (editorG != undefined) {
            editorG.destroy();
        } else {

        }
        if (editor != undefined) {
            editor.destroy();
        } else {

        }
        var editor = null;
        var editorG = null;
        bloqueoCombos = function () {
            $("#cmbTipoCarpetaG").attr("disabled", true);
            $("#cveTipoJuzgadoG").attr("disabled", true);
        }

        validaEstado = function () {

            if ($("#cmbEstado").val() == 15) {
                $("#juzgadosEstado").slideDown();
                $("#juzgadosFuera").slideUp();
                $("#txtJuzgadoP").val("");
            } else {
                $("#juzgadosEstado").slideUp();
                $("#juzgadosFuera").slideDown();
                $('#cmbJuzgado').select2('val', '');
            }
        }
        validaEstadoConsulta = function () {

            if ($("#cmbEstadoConsulta").val() == 15) {

                $("#juzgadosEstadoConsulta").slideDown();
                $("#juzgadosFueraConsulta").slideUp();
                $("#txtJuzgadoPConsulta").val("");
            } else {

                $("#juzgadosEstadoConsulta").slideUp();
                $("#juzgadosFueraConsulta").slideDown();
                $('#cmbJuzgadoConsulta').select2('val', '');
            }
        };
        enviarPDF = function (tipo) {
            var dato1 = "";
            var dato2 = "";
            if (tipo == 1) {
                dato1 = "&cveTipoDocumento=9";
                dato2 = "&idActuacion=" + $("#idExhortoGenerado").val();
            } else if (tipo == 0) {
                dato1 = "&cveTipoDocumento=8";
                dato2 = "&idActuacion=" + $("#idExhorto").val();
            }
            var strDatos = "accion=generarJson";
            strDatos += "&cveTipo=2"; //2 = actuacion - 1 = carpeta judicial
            strDatos += dato1; // clave del tipo documento de la tabla tbltipos documentos que corresponde a su actuacion
            strDatos += dato2; //id de su actuacion

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/actuaciones/ActuacionesFacade.Class.php",
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
                        generaPDF(datos);
                    } else {
                    }

                    showMessage("Se genero el PDF correctamente" + "<br>", 'divAlertSuccesE');
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        digitalizarPromocion = function (tipo) {
            var datos = "";
            if (tipo == 1) {
                datos = "0-" + $("#idExhortoGenerado").val() + "-EXHORTOS GENERADOS-<?php echo $_SESSION["desAdscripcion"]; ?>-" + $("#txtNumeroCG").val() + "-" + $("#txtAnioCG").val() + "-9-<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
            } else if (tipo == 0) {
                datos = $("#idExhorto").val() + "-0-EXHORTOS RECIBIDOS-<?php echo $_SESSION["desAdscripcion"]; ?>-" + $("#numeroE").val() + "-" + $("#anioE").val() + "-8-<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
            }
            var strl;
            strl = datos;
            strl += "-<?php echo $subirArchivos; ?>";
            strl += "-<?php echo $digitalizacion; ?>";
            launchDigitalizador(strl);
        },
                visorDocuemntos = function (tipo, idActuacionGen) {
                    var dato1 = "";
                    var idCarpetaJudicial = "0";
                    var idActuacion = "0";
                    var dato2 = "";
                    if (tipo == 1) {
                        idActuacion = $('#idExhortoGenerado').val();
                        dato2 = "9";
                    } else if (tipo == 2) {
                        idActuacion = idActuacionGen;
                        dato2 = "9";
                    } else if (tipo == 0) {
                        idCarpetaJudicial = $('#idExhorto').val();
                        dato2 = "8";
                    }
                    $.ajax({
                        type: 'POST',
                        url: 'visorpdf/index.php',
                        data: {idCarpetaJudicial: idCarpetaJudicial, idActuacion: idActuacion, cveTipoDocumento: dato2}, //malo
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
                            console.log('\nOBJ: ' + objeto + '\nQ: ' + quepaso + '\nO:' + otroobj);
                        }
                    });
                };
        cargaTipoCarpeta = function (grt) {

            var tipoJuzgado = "";
            try {
                var cveTipo2 = $("#cveTipoJuzgadoG").val();
                if (grt == 1) {
                    tipoJuzgado = $("#cveTipoJuzgado").val().split("/");
                } else if (grt == 2) {

                    var cveTipo = $("#cveTipoJuzgadoG").val();
                    tipoJuzgado = $("#cveTipoJuzgadoG").val().split("/");
                } else if (grt == 3) {
                    tipoJuzgado = $("#cveTipoJuzgadoGConsultar").val().split("/");
                } else if (grt == 4) {
                    tipoJuzgado = $("#cveTipoJuzgadoGConsultar").val().split("/");
                } else if (grt == 5) {
                    tipoJuzgado = $("#cmbJuzgado").val().split("/");
                }
                // alert(tipoJuzgado);

                var accion = "accion=consultar";
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/tiposcarpetas/TiposcarpetasFacade.Class.php",
                    data: accion,
                    async: false,
                    dataType: "html",
                    beforeSend: function (objeto) {
                        // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                    },
                    success: function (datos) {
                        var json = "";
                        json = eval("(" + datos + ")"); //Parsear JSON

                        if (json.totalCount > 0) {
                            if (grt == 1) {
                                $("#cmbTipoCarpeta").empty();
                                $("#cmbTipoCarpeta").append($('<option></option>').val("0").html("Seleccione una opcion"));
                                $("#cmbTipoCarpeta").append($('<option></option>').val("00").html("SIN RELACION"));
                            } else if (grt == 2) {
                                $("#cmbTipoCarpetaG").empty();
                                $("#cmbTipoCarpetaG").append($('<option></option>').val("0").html("Seleccione una opcion"));
                                if (origen == 1) {

                                } else {
                                    $("#cmbTipoCarpetaG").append($('<option></option>').val("0").html("SIN RELACION"));
                                }
                            } else if (grt == 3) {
                                $("#cmbTipoCarpetaGConsulta").empty();
                                $("#cmbTipoCarpetaGConsulta").append($('<option></option>').val("0").html("Seleccione una opcion"));
                            } else if (grt == 4) {
                                //7 if(grt == 1){
                                $("#cmbTipoCarpeta").empty();
                                $("#cmbTipoCarpeta").append($('<option></option>').val("0").html("Seleccione una opcion"));
                                $("#cmbTipoCarpeta").append($('<option></option>').val("00").html("SIN RELACION"));
                                //}
                            } else if (grt == 5) {
                                $("#cmbTipoCarpeta").empty();
                                $("#cmbTipoCarpeta").append($('<option></option>').val("0").html("Seleccione una opcion"));
                                $("#cmbTipoCarpeta").append($('<option></option>').val("00").html("SIN RELACION"));
                            }
                            $("#cmbTipoCarpetaConsulta").empty();
                            $("#cmbTipoCarpetaConsulta").append($('<option></option>').val("0").html("seleccione una opcion"));
                            for (var i = 0; i < json.totalCount; i++) {
    //                                if(json.data[i].cveTipoCarpeta != 6 & json.data[i].cveTipoCarpeta != 7  & json.data[i].cveTipoCarpeta != 8 & json.data[i].cveTipoCarpeta != 9 & json.data[i].cveTipoCarpeta != 10 ){
    ////                                    $("#").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
    ////                                    $("#").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
    ////                                    $("#").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
    //                                }

                                switch (tipoJuzgado[1]) {
                                    case "1": // tipo de juzgado de control
                                        if (json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1") { // exhorto, amparo
                                            if (grt == 1 || grt == 5) {
                                                $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else if (grt == 2) {
                                                $("#cmbTipoCarpetaG").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else if (grt == 3) {
                                                $("#cmbTipoCarpetaGConsulta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            }
                                        }
                                        break;
                                    case "2": // tipo de juzgado juicio
                                        if (json.data[i].cveTipoCarpeta == "3") { // exhorto, amparo 
                                            if (grt == 1 || grt == 5) {
                                                $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else if (grt == 2) {
                                                $("#cmbTipoCarpetaG").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else if (grt == 3) {
                                                $("#cmbTipoCarpetaGConsulta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            }
                                        }
                                        break;
                                    case "3": // tipo de juzgado ejecucion
                                        if (json.data[i].cveTipoCarpeta == "5") { // exhorto, amparo
                                            if (grt == 1 || grt == 5) {
                                                $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else if (grt == 2) {
                                                $("#cmbTipoCarpetaG").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else if (grt == 3) {
                                                $("#cmbTipoCarpetaGConsulta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            }
                                        }
                                        break;
                                    case "4": // tipo de juzgado tribunal
                                        if (json.data[i].cveTipoCarpeta == "4") { // exhorto, amparo 
                                            if (grt == 1 || grt == 5) {
                                                $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else if (grt == 2) {
                                                $("#cmbTipoCarpetaG").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else if (grt == 3) {
                                                $("#cmbTipoCarpetaGConsulta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            }
                                        }
                                        break;
    //                            case "5": // tipo de juzgado de control
    //                                if(json.data[i].cveTipoCarpeta == "2" || json.data[i].cveTipoCarpeta == "1"){ // exhorto, amparo
    //                                   if(grt == 5){
    //                                       $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
    //                                   } else if(grt == 2){
    //                                    $("#cmbTipoCarpetaG").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
    //                                    } else if(grt == 3){
    //                                    $("#cmbTipoCarpetaGConsulta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
    //                                    }
    //                                }
    //                            break;
                                    case "5":

                                        if (json.data[i].cveTipoCarpeta == "6") { // exhorto, amparo
                                            if (grt == 5) {
                                                $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else if (grt == 2) {
                                                $("#cmbTipoCarpetaG").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else if (grt == 3) {
                                                $("#cmbTipoCarpetaGConsulta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            }
    //                                        alert(json.data[i].cveTipoCarpeta == "6");



    //                                   else if(grt == 2){
    //                                    $("#cmbTipoCarpetaG").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
    //                                    } else if(grt == 3){
    //                                    $("#cmbTipoCarpetaGConsulta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
    //                                    }
                                        }
                                        break;
                                    case "8":

                                        if (json.data[i].cveTipoCarpeta == "6") { // exhorto, amparo
                                            if (grt == 5) {
                                                $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else if (grt == 2) {
                                                $("#cmbTipoCarpetaG").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            } else if (grt == 3) {
                                                $("#cmbTipoCarpetaGConsulta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                            }
    //                                        alert(json.data[i].cveTipoCarpeta == "6");



    //                                   else if(grt == 2){
    //                                    $("#cmbTipoCarpetaG").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
    //                                    } else if(grt == 3){
    //                                    $("#cmbTipoCarpetaGConsulta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
    //                                    }
                                        }
                                        break;
                                }

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
            } catch (e) {
                alert(e);
            }
        };
        function validacorreo() {
            var email = $("#correoEG").val();
            var expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if (!expr.test(email)) {
                alert("Error: El Email " + email + " es incorrecto.");
            }
        }
        cargaEstados = function () {
            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                data: {accion: "consultar",
                    cvePais: "119"},
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    //$('#cmbEstado').empty();
                    //$('#cmbEstado').append('<option value="0">Seleccione una opci\u00f3n</option>');
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            if (json.data[i].cveEstado != 97) {


                                $("#cmbEstado").append($('<option></option>').val(json.data[i].cveEstado).html(json.data[i].desEstado));
                                $("#cmbEstadoI").append($('<option></option>').val(json.data[i].cveEstado).html(json.data[i].desEstado));
                                $("#cmbEstadoO").append($('<option></option>').val(json.data[i].cveEstado).html(json.data[i].desEstado));
                                $("#cmbEstadoMoralI").append($('<option></option>').val(json.data[i].cveEstado).html(json.data[i].desEstado));
                                $("#cmbEstadoMoralO").append($('<option></option>').val(json.data[i].cveEstado).html(json.data[i].desEstado));
                                $("#cmbEstadoConsulta").append($('<option></option>').val(json.data[i].cveEstado).html(json.data[i].desEstado));
                                $("#cmbEstadoG").append($('<option></option>').val(json.data[i].cveEstado).html(json.data[i].desEstado));
                                $("#cmbEstadoGConsulta").append($('<option></option>').val(json.data[i].cveEstado).html(json.data[i].desEstado));
                            }

                        }
                    }
                    $('#cmbEstado').val(15);
                    $('#cmbEstadoConsulta').val(15);
                    //$('#cmbEstadoG').val(15);
                    //$('#cmbEstadoGConsulta').val(15);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        cargaMunicipioMoralI = function () {
            var cveEstado = $("#cmbEstadoMoralI").val();
            var strDatos = "accion=consultar";
            if (cveEstado == 0) {
                $("#cmbMunicipioMoralI").empty();
                $("#cmbMunicipioMoralI").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                return false;
            }
            ;
            $("#cmbMunicipioMoralI").empty();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                async: false,
                dataType: "html",
                data: {
                    accion: "consultar",
                    cveEstado: cveEstado
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    $("#cmbMunicipioMoralI").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbMunicipioMoralI").append($('<option></option>').val(json.data[i].cveMunicipio).html(json.data[i].desMunicipio));
                        }
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
        cargaMunicipioIm = function () {
            var cveEstado = $("#cmbEstadoI").val();
            var strDatos = "accion=consultar";
            if (cveEstado == 0) {
                $("#cmbMunicipioI").empty();
                $("#cmbMunicipioI").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                return false;
            }
            ;
            $("#cmbMunicipioI").empty();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                async: false,
                dataType: "html",
                data: {
                    accion: "consultar",
                    cveEstado: cveEstado
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    $("#cmbMunicipioI").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbMunicipioI").append($('<option></option>').val(json.data[i].cveMunicipio).html(json.data[i].desMunicipio));
                        }
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
        cargaMunicipioOf = function () {
            var cveEstado = $("#cmbEstadoO").val();
            var strDatos = "accion=consultar";
            if (cveEstado == 0) {
                $("#cmbMunicipioO").empty();
                $("#cmbMunicipioO").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                return false;
            }
            ;
            $("#cmbMunicipioO").empty();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                async: false,
                dataType: "html",
                data: {
                    accion: "consultar",
                    cveEstado: cveEstado
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    $("#cmbMunicipioO").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbMunicipioO").append($('<option></option>').val(json.data[i].cveMunicipio).html(json.data[i].desMunicipio));
                        }
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
        cargaMunicipioMoralO = function () {
            var cveEstado = $("#cmbEstadoMoralO").val();
            var strDatos = "accion=consultar";
            if (cveEstado == 0) {
                $("#cmbMunicipioMoralO").empty();
                $("#cmbMunicipioMoralO").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                return false;
            }
            ;
            $("#cmbMunicipioMoralO").empty();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                async: false,
                dataType: "html",
                data: {
                    accion: "consultar",
                    cveEstado: cveEstado
                },
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    $("#cmbMunicipioMoralO").append($('<option></option>').val(0).html("Seleccione una opci&oacute;n"));
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbMunicipioMoralO").append($('<option></option>').val(json.data[i].cveMunicipio).html(json.data[i].desMunicipio));
                        }
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
        cargaJuzgado = function () {
    //            var strDatos = "accion=consultar";
    //            var activo = "activo = S";
            var url = "";
            var accion = "";
            var cveJuzgado = $("#cveJuzgado").val();
            url = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
            accion = "consultar";
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    activo: 'S',
                    accion: accion,
                    obligaPermiso: false
                },
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            var option = "<option value=" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + ">" + json.data[i].desJuzgado + "</option>";
                            $("#cmbJuzgado").append(option);
                            $("#cmbJuzgadoConsulta").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                        }
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

        cargaTiposPartes = function () {
        
            var url = "";
            var accion = "";
            var cveJuzgado = $("#cveJuzgado").val();
            url = "../fachadas/sigejupe/tipospartes/TipospartesFacade.Class.php";
            accion = "consultar";
            $.ajax({
                type: "POST",
                url: url,
                data: {
                    activo: 'S',
                    accion: accion,
                    obligaPermiso: false
                },
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            if( json.data[i].cveTipoParte == 15 || json.data[i].cveTipoParte == 16){   
                            var option = "<option value=" + json.data[i].cveTipoParte+ ">" + json.data[i].descTipoParte + "</option>";
                            $("#cmbTiposPartesI").append(option);
                            $("#cmbTiposPartesO").append(option);
                            }
                        }
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

        cargaJuzgadoD = function () {
            var strDatos = "accion=consultar";
            var cveJuzgado = $("#cveJuzgado").val();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            if (cveJuzgado != json.data[i].cveJuzgado) {
                                //$("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                                //$("#cmbJuzgadoConsulta").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                                $("#cmbJuzgadoG").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                                $("#cmbJuzgadoGConsulta").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                            }
                        }
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
        cargaJuzgadoP = function () {
            if ($("#cmbJuzgado").val() == 0 || $("#cmbJuzgado").val() == "") {
                $("#txtJuzgadoP").val(" ");
            } else {
                $("#txtJuzgadoP").val($('#cmbJuzgado :selected').text());
                // $('#cmbJuzgado :selected').text();
            }
        };
        cargaConsigancion = function () {
            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/consignaciones/ConsignacionesFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            if (json.data[i].cveConsignacion < 3) {
                                $("#cmbConsignacion").append($('<option></option>').val(json.data[i].cveConsignacion).html(json.data[i].desConsignacion));
                                $("#cmbConsignacionI").append($('<option></option>').val(json.data[i].cveConsignacion).html(json.data[i].desConsignacion));
                                $("#cmbConsignacionIMoral").append($('<option></option>').val(json.data[i].cveConsignacion).html(json.data[i].desConsignacion));
                            }
                            ;
                        }
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
        cargaEstatus = function () {
            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estatusexhortos/EstatusexhortosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbEstatus").append($('<option></option>').val(json.data[i].cveEstatusExhorto).html(json.data[i].desEstatusExhorto));
                        }
                    }
                    $("#cmbEstatus").val(2);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        cargaTipoPersona = function () {
            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/tipospersonas/TipospersonasFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            if (json.data[i].cveTipoPersona != "4" & json.data[i].cveTipoPersona != "5") {
                                $("#cmbTipoPersonaImputado").append($('<option></option>').val(json.data[i].cveTipoPersona).html(json.data[i].desTipoPersona));
                                $("#cmbTipoPersonaOfendido").append($('<option></option>').val(json.data[i].cveTipoPersona).html(json.data[i].desTipoPersona));
                            }
                        }
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
        seleccionaTipoIm = function () {
            if ($("#cmbTipoPersonaImputado").val() == 1) {
                $("#ImputadosFisica").slideDown();
                $("#ImputadosMoral").slideUp();
            } else {
                $("#ImputadosMoral").slideDown();
                $("#ImputadosFisica").slideUp();
            }
            $("#ImputadosAccion").show();
            // $("#txtDomicilioMoralI").val();
            // $("#txtDomicilioI").val();
        };
        seleccionaTipoOf = function () {
            if ($("#cmbTipoPersonaOfendido").val() == 1) {
                $("#OfendidosFisica").slideDown();
                $("#OfendidosMoral").slideUp();
            } else {
                $("#OfendidosMoral").slideDown();
                $("#OfendidosFisica").slideUp();
            }
            $("#OfendidosAccion").show();
        };
        consultar = function () {
            if ($("#divCamposConsulta").is(":visible")) {
                $("#divCamposConsulta").hide('fade');
                $("#divCampos").show('slide');
                $("#div_paginacionConsulta").html('');
                $("#div_respuestaConsulta").html('');
                $("#registro").html("Registro de Exhortos Recibidos");
            } else {
                $("#divCamposConsulta").show('slide');
                $("#divCampos").hide('fade');
                $("#div_paginacionConsulta").html('');
                $("#div_respuestaConsulta").html('');
                $('#lstImputados').empty();
                $('#lstOfendidos').empty();
                $('#lstDelitos').empty();
                $("#cveJuzgado").val(<?= $cveJuzgado ?>);
                $("#registro").html("Consulta de Exhortos Recibidos");
                limpiar();
                limpiarImputado('lstImputados', 'imputados');
                limpiarOfendido('lstOfendidos', 'ofendidos');
                //$("#divTablaImputados").hide();
            }
        };
        cargaGenero = function () {

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
                            $("#cmbGeneroImputado").append(option);
                            $("#cmbGeneroOfendido").append(option);
                        });
                    } else {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
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
        cargaCereso = function () {

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/ceresos/CeresosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "json",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (index, element) {
                            var option = "<option value = " + element.cveCereso + ">" + element.desCereso + "</option>";
                            $("#cmbCereso").append(option);
                        });
                    } else {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
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
        cargaDelito = function () {

            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/delitos/DelitosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "json",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    if (datos.totalCount > 0) {
                        $.each(datos.data, function (index, element) {
                            var option = "<option value = " + element.cveDelito + ">" + element.desDelito + "</option>";
                            $("#cmbDelito").append(option);
                        });
                    } else {
                        $("#divAlertDager").html("Error en la peticion:\n\n" + "Sin resultados");
                        $("#divAlertDager").show("slide");
                        setTimeAlert("divAlertDager");
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
        ocultarCampos = function (cveTipoPersona) {
            var myClass = $("#txtNombreAct").parent().attr("class");
            if (cveTipoPersona == 1) {
                $(".divNombre").show("slow");
                if (myClass === "col-xs-6") {
                    $("#txtNombreAct").parent().toggleClass('col-xs-6');
                    $("#txtNombreAct").parent().toggleClass('col-xs-2');
                }
            } else if (cveTipoPersona == 2 || cveTipoPersona == 3) {
                $(".divNombre").hide();
                if (myClass === "col-xs-2") {
                    $("#txtNombreAct").parent().toggleClass('col-xs-2');
                    $("#txtNombreAct").parent().toggleClass('col-xs-6');
                }
            }
        };
        limpiarimpofedel = function () {
            $("#tabla-delitos").html("");
            $("#tabla-imputados").html("");
            $("#tabla-ofendidos").html("");
            $("#lstImputados").html("");
            $("#lstOfendidos").html("");
            $("#lstDelitos").html("");
            $("#divTablaImputados").hide();
            $("#divTablaOfendidos").hide();
            $("#divTablaDelitos").hide();
        }
        buscaImpofedel = function () {

            var cveJuzgado = $("#cmbJuzgado").val();
            var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
            var numero = $("#txtNumeroC").val();
            var anio = $("#txtAnioC").val();
            var idExhorto = $("#idExhorto").val();
            if (cveJuzgado == 0 || cveJuzgado == "" || cveJuzgado == null) {
                return false;
            }
            if (cveTipoCarpeta == 0 || cveTipoCarpeta == "") {

                return false;
            }
            if (numero == "" || anio == "" || idExhorto != "") {
                return false;
            }

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    cveTipoCarpeta: cveTipoCarpeta,
                    numero: numero,
                    anio: anio,
                    activo: 'S',
                    cveJuzgado: cveJuzgado,
                    accion: 'buscarImpofedel'
                },
                success: function (data) {

                    if (data.estatus == "ok") {
                        if (data.listaImputados.length != 0) {
                            $('#lstImputados').find('option:selected').remove();
                            $('#lstImputados').empty();
                            $.each(data.listaImputados, function (key, value) {
                                var nombre = "";
                                if (value.cveTipoPersona == 1) {
                                    nombre = value.nombre + " " + value.paterno + " " + value.materno;
                                } else {
                                    nombre = value.nombreMoral;
                                }
                                var consignacion;
                                if (value.detenido == "S") {
                                    consignacion = 1;
                                } else {
                                    consignacion = 2;
                                }

                                $('#lstImputados').append(
                                        '<option value="0;' + value.cveTipoPersona + ';'
                                        + value.nombreMoral + ';' + consignacion + ';'
                                        + value.cveGenero + ';' + value.cveEstado + ';'
                                        + value.cveMunicipio + ';' + value.domicilio + ';'
                                        + value.alias + ';' + value.telefono + ';'
                                        + value.cveCereso + ';' + value.nombre + ';'
                                        + value.paterno + ';' + value.materno + '" selected="selected">'
                                        + nombre + '</option>');

                                $("#cmbImputadosAgregados").append('<option value="0;' + value.cveTipoPersona + ';'
                                            + value.nombreMoral + ';' + consignacion + ';'
                                            + value.cveGenero + ';' + value.cveEstado + ';'
                                            + value.cveMunicipio + ';' + value.domicilio + ';'
                                            + value.alias + ';' + value.telefono + ';'
                                            + value.cveCereso + ';' + value.nombre + ';'
                                            + value.paterno + ';' + value.materno + '"selected="selected">'
                                            + nombre + '</option>');
                            });

                            $('#lstImputados option').prop("selected", true);
                            tablaImputados('lstImputados', 'imputados');
                        }
                        if (data.listaOfendidos.length != 0) {
                            $('#lstOfendidos').find('option:selected').remove();
                            $('#lstOfendidos').empty();
                            $.each(data.listaOfendidos, function (key, value) {
                                var nombre = "";
                                if (value.cveTipoPersona == 1) {
                                    nombre = value.nombre + " " + value.paterno + " " + value.materno;
                                } else {
                                    nombre = value.nombreMoral;
                                }

                                $('#lstOfendidos').append(
                                        '<option value="0;' + value.cveTipoPersona + ';'
                                        + value.nombreMoral + ';'
                                        + value.cveGenero + ';' + value.cveEstado + ';'
                                        + value.cveMunicipio + ';' + value.domicilio + ';'
                                        + value.telefono + ';'
                                        + value.nombre + ';'
                                        + value.paterno + ';' + value.materno + '" selected="selected">'
                                        + nombre + '</option>');
                                $("#cmbOfendidosAgregados").append('<option value="0;' + value.cveTipoPersona + ';'
                                            + value.nombreMoral + ';'
                                            + value.cveGenero + ';' + value.cveEstado + ';'
                                            + value.cveMunicipio + ';' + value.domicilio + ';'
                                            + value.telefono + ';'
                                            + value.nombre + ';'
                                            + value.paterno + ';' + value.materno + '" selected="selected">'
                                            + nombre + '</option>'
                                    );
                            });
                            $('#lstOfendidos option').prop("selected", true);
                            tablaOfendidos('lstOfendidos', 'ofendidos');
                        }
                        if (data.listaDelitos.length != 0) {
                            $('#lstDelitos').find('option:selected').remove();
                            $('#lstDelitos').empty();
                            $.each(data.listaDelitos, function (key, value) {


                                $('#lstDelitos').append(
                                        '<option value="0;' + value.cveDelito + ';'
                                        + value.desDelito + '" selected="selected">'
                                        + value.desDelito + '</option>');
                            });
                            $('#lstDelitos option').prop("selected", true);
                            tablaDelitos('lstDelitos', 'delitos');
                        }

                    } else {
                        limpiarimpofedel();
                    }
                }

            });
        };
        guardarExhorto = function () {
            $(".required").remove();
            if (validaExhorto()) {
                var listaImputados = new Array();
                var JsonImputados = "";
                var listaOfendidos = new Array();
                var JsonOfendidos = "";
                var listaDelitos = new Array();
                var JsonDelitos = "";
                var guardar = 1;
                var cveJuzgadoProcedencia = $("#cmbJuzgado").val();
                var JuzgadoProcedencia = $("#txtJuzgadoP").val();
                var tipoConsignacion = "";
                var conD = 0;
                var conN = 0;
                var conM = 0;
                var tipoAccion = "";
                var cveTJuzgado = "";
                cveTJuzgado = $("#cveTipoJuzgado").val();
                //alert(cveTJuzgado);
                cveTJuzgado = cveTJuzgado.split("/");
                cveTJuzgado = cveTJuzgado[0];
                $('select#lstImputados').find('option').each(function () {
                    var datos = this.value.split(";");
                    listaImputados.push(new Imputados(datos[0], datos[1], datos[2], datos[3],
                            datos[4], datos[5], datos[6], datos[7], datos[8],
                            datos[9], datos[10], datos[11], datos[12], datos[13]));
                });
                $.each(listaImputados, function (key2, value) {

                    if (value.consignacion == 1) {
                        conD++;
                    }
                    if (value.consignacion == 2) {
                        conN++;
                    }
                    if (value.consignacion == 3) {
                        conM++;
                    }

                });
                if (conD > 0 && conN == 0) {
                    tipoConsignacion = 1;
                }
                if (conN > 0 && conD == 0) {
                    tipoConsignacion = 2;
                }
                if (conD > 0 && conN > 0) {
                    tipoConsignacion = 3;
                }
                if (conM > 0) {
                    tipoConsignacion = 3;
                }
                //console.log(listaImputados);
                if (listaImputados.length > 0) {
                    JsonImputados = JSON.stringify(listaImputados);
                    JsonImputados = decodeURIComponent(JsonImputados);
                }
                // console.log(JsonImputados);
                $('select#lstOfendidos').find('option').each(function () {
                    var datos = this.value.split(";");
                    listaOfendidos.push(new Ofendidos(datos[0], datos[1], datos[2], datos[3],
                            datos[4], datos[5], datos[6], datos[7], datos[8],
                            datos[9], datos[10]));
                });
                if (listaOfendidos.length > 0) {
                    JsonOfendidos = JSON.stringify(listaOfendidos);
                    JsonOfendidos = decodeURIComponent(JsonOfendidos);
                }
                //console.log(JsonOfendidos); 
                $('select#lstDelitos').find('option').each(function () {
                    var datos = this.value.split(";");
                    listaDelitos.push(new Delitos(datos[0], datos[1]));
                });
                if (listaDelitos.length > 0) {
                    JsonDelitos = JSON.stringify(listaDelitos);
                    JsonDelitos = decodeURIComponent(JsonDelitos);
                }
                if (cveJuzgadoProcedencia == 0 || cveJuzgadoProcedencia == null || cveJuzgadoProcedencia == "") {
                    cveJuzgadoProcedencia = "NULL";
                }
                if (JuzgadoProcedencia == "" || JuzgadoProcedencia == "-") {
                    JuzgadoProcedencia = "-";
                }
                if ($("#idExhorto").val() == "") {
                    tipoAccion = "Registrado";
                } else {
                    tipoAccion = "Actualizado";
                }
                var observaciones = editor.getContent();
    //            var pe = /\<p><br[/]><[/]p>/gi;
    //            observaciones=observaciones.replace(pe, "");
    var cveTipoCarpeta = "";
    
    if($("#cmbTipoCarpeta").val() != "00" && $("#cmbTipoCarpeta").val() != "0") {
        cveTipoCarpeta = $("#cmbTipoCarpeta").val();
    }
    
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        idExhorto: $("#idExhorto").val(),
                        IdExhortoGenerado: $("#idExhortoGenerado").val(),
                        cveTipoCarpeta: cveTipoCarpeta,
                        carpetaInv: $("#txtCarpetaInv").val(),
                        nuc: $("#txtNuc").val(),
                        numero: $("#txtNumeroC").val(),
                        anio: $("#txtAnioC").val(),
                        numOficio: $("#txtOficio").val() + "/" + $("#txtAnioO").val(),
                        sintesis: $("#txtSintesis").val(),
                        cveEstadoProcedencia: $("#cmbEstado").val(),
                        cveJuzgado: cveTJuzgado,
                        cveJuzgadoProcedencia: cveJuzgadoProcedencia,
                        juzgadoProcedencia: JuzgadoProcedencia,
                        observaciones: observaciones,
                        cveConsignacion: tipoConsignacion,
                        cveEstatusExhorto: $("#cmbEstatus").val(),
                        activo: 'S',
                        listaTestigosI: listaTestigosI,
                        listaTestigosO: listaTestigosO,
                        listaImputados: JsonImputados,
                        listaOfendidos: JsonOfendidos,
                        listaDelitos: JsonDelitos,
                        accion: 'guardar'
                    },
                    success: function (data) {
                        console.log(data);
                        if (data.Estatus == 'Ok' || data.totalCount > 0) {
                            $("#inputDigitalizarR").show();
                            $("#inputVisorR").show();
                            $("#inputPDFR").show();
                            $("#idExhorto").val(data.idExhorto);
                            if ($("#idExhorto").val() != "") {
                                $
                                $("#div_actualizar").html("");
                                buscarExhorto(1, 0);
                            } else {
                                $(".bloqueoE").attr('disabled', 'disabled');
                                $(".bloqueoEliminar").hide();
                                $("#btn_guardarE").hide();
                            }
                                if(data.aniExhorto && data.numExhorto){
                                    $("#numeroE").val(data.numExhorto);
                                    $("#anioE").val(data.aniExhorto);
                                }else{
                                    $("#numeroE").val(data.data[0].numExhorto);
                            $("#anioE").val(data.data[0].aniExhorto);
                                }
                            
    //                            showMessage(data.text, 'divAlertSucces');
                            showMessage(data.text + "<br>Exhorto " + tipoAccion + " ", 'divAlertSucces');
    //                            alert(data[0].numExhorto);
    //                            $("#numeroE").val(data.numExhorto);
    //                            $("#anioE").val(data.aniExhorto);
                            $("#ImputadosFisica").slideUp();
                            $("#ImputadosMoral").slideUp();
                            $("#OfendidosFisica").slideUp();
                            $("#OfendidosMoral").slideUp();
                            var idExhorto = "";
                            if(data.idExhorto){
                                idExhorto = data.idExhorto
                            }else{
                                idExhorto = data.data[0].idExhorto
                            }
                            $("#btn_imprimirER").html('<input type="submit" class="btn btn-primary" id="inputImprimir" value="Imprimir" onclick="imprimirER(' + idExhorto + ')"> ');
                        } else {

                            showMessage(data.text, 'divAlertDager');
                        }
                    }

                });
            }///fin valida exhorto
        };
        buscarExhorto = function (pagina, nRegistros) {

            if (nRegistros == 0) {

                nRegistros = 10;
            } else {

                nRegistros = $("#cmbRegistrosE").val();
            }
            // var nRegistros = nRegistros || 0;
            // nRegistros = (nRegistros==0) ? 10 : $("#cmbPaginas").val();
            $(".required").remove();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var estado = $("#cmbEstadoConsulta").val();
            var cveJuzgado = $("#cveTipoJuzgado2").val();
            var cveTipoCarpeta = $("#cmbTipoCarpetaConsulta").val();
            //var numOficio = $("#txtOficioConsulta").val() + "/" + $("#txtAnioOConsulta").val();
            var buscar = true;
            if (estado == "0") {
                estado = "";
            }
            if (cveJuzgado == "0") {
                cveJuzgado = "";
            }
            if (cveTipoCarpeta == "0") {
                cveTipoCarpeta = "";
            }

            cveJuzgado = cveJuzgado.split("/");
            if ($("#numeroEC").val() == "" && $("#anioEC").val() == "") {

                if (fechaInicial == "") {
                    Error($("#fechaInicial"), "Ingresa Fecha Inicial");
                    buscar = false;
                }
                if (fechaFinal == "") {
                    Error($("#fechaFinal"), "Ingresa Fecha Final");
                    buscar = false;
                }
            }

            // if (nRegistros == 0) {

            // nRegistros = 10;
            // } else{

            // nRegistros = $("#cmbRegistrosE").val();
            // }

            if (buscar) {
                if ($("#numeroEC").val() == "" && $("#anioEC").val() == "") {

                    var separa = fechaInicial.split("/");
                    var dia = separa[0];
                    var mes = separa[1];
                    var anio = separa[2];
                    fechaInicial = anio + "-" + mes + "-" + dia + " 00:00:00";
                    var separaF = fechaFinal.split("/");
                    var diaF = separaF[0];
                    var mesF = separaF[1];
                    var anioF = separaF[2];
                    fechaFinal = anioF + "-" + mesF + "-" + diaF + " 23:59:00";
                } else {

                    fechaInicial = "";
                    fechaFinal = "";
                }

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        numExhorto: $("#numeroEC").val(),
                        aniExhorto: $("#anioEC").val(),
                        cveTipoCarpeta: cveTipoCarpeta,
                        carpetaInv: $("#txtCarpetaInvConsulta").val(),
                        nuc: $("#txtNucConsulta").val(),
                        numero: $("#txtNumeroCConsulta").val(),
                        anio: $("#txtAnioCConsulta").val(),
                        cveEstadoProcedencia: estado,
                        cveJuzgadoProcedencia: "",
                        juzgadoProcedencia: $("#txtJuzgadoPConsulta").val(),
                        cveJuzgado: cveJuzgado[0],
                        fechaInicial: fechaInicial,
                        fechaFinal: fechaFinal,
                        pagina: pagina,
                        totalRegistros: 0,
                        nRegistros: nRegistros,
                        activo: 'S',
                        accion: 'consultar_total'
                    },
                    success: function (data) {
                        try {

                            if (data.estatus == "ok") {
    //                        alert(data.totalCount);
                                var total = data.totalCount;
                                var table = "";
                                var cantidad = nRegistros;
                                var inicio;
                                var res;
                                var generado = "";
                                var total_paginas = parseInt(total / cantidad);
                                res = total % cantidad;
                                if (res > 0)
                                {
                                    total_paginas = parseInt(total_paginas) + 1;
                                }
                                inicio = (pagina - 1) * cantidad;
                                table += "<table width='700' border='0' align='center'><tr>";
                                table += "    <td><div id='div_paginacion'><strong>Total: " + total + "</strong></div></td>";
                                table += "    <td>Pagina: ";
                                table += "        <select name='cmbPaginas' id='cmbPaginas' onchange='paginacionExhorto(" + total + ",0)'>";
                                for (var i = 1; i <= total_paginas; i++) {
                                    table += "            <option value='" + i + "'>" + i + "</option>";
                                }

                                table += "        </select>";
                                table += "    </td>";
                                table += "    <td>Registros por pagina: ";
                                table += "        <select name='cmbRegistrosE' id='cmbRegistrosE' onchange='buscarExhorto( 1,1)'>";
                                table += "            <option value='10'>10</option>";
                                table += "            <option value='15'>15</option>";
                                table += "            <option value='20'>20</option>";
                                table += "            <option value='25'>25</option>";
                                table += "            <option value='40'>40</option>";
                                table += "            <option value='50'>50</option>";
                                table += "            <option value='100'>100</option>";
                                table += "        </select>";
                                table += "    </td>";
                                table += " </tr></table>";
                                $("#div_paginacionConsulta").html(table);
                                $("#cmbRegistrosE").val(nRegistros);
                                paginacionExhorto(data.totalCount, pagina);
                            } else {

                                $("#div_paginacionConsulta").html('');
                                $("#div_respuestaConsulta").html('');
                                showMessage(data.mensaje, 'divAlertWarningC');
                            }

                        } catch (e) {

                            alert('algo salio mal.');
                        }

                    }

                });
            }
            ;
        };
        changeValor = function (cveJuzgado) {
            $("#cveJuzgado").val(cveJuzgado);
        }
        paginacionExhorto = function (total, pagina) {
            if (pagina == 0) {

                pagina = $("#cmbPaginas").val();
    //        alert(pagina);
            }
            ;
            var permisos = 0;
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var estado = $("#cmbEstadoConsulta").val();
            var cveJuzgado = $("#cveTipoJuzgado2").val();
            var cveTipoCarpeta = $("#cmbTipoCarpetaConsulta").val();
            var buscar = true;
            if (estado == "0") {
                estado = "";
            }
            if (cveJuzgado == "0") {
                cveJuzgado = "";
            }
            if (cveTipoCarpeta == "0") {
                cveTipoCarpeta = "";
            }

            cveJuzgado = cveJuzgado.split("/");
            if ($("#numeroEC").val() == "" && $("#anioEC").val() == "") {

                if (fechaInicial == "") {
                    Error($("#fechaInicial"), "Ingresa Fecha Inicial");
                    buscar = false;
                }
                if (fechaFinal == "") {
                    Error($("#fechaFinal"), "Ingresa Fecha Final");
                    buscar = false;
                }
            }
            if (buscar) {
                if ($("#numeroEC").val() == "" && $("#anioEC").val() == "") {

                    var separa = fechaInicial.split("/");
                    var dia = separa[0];
                    var mes = separa[1];
                    var anio = separa[2];
                    fechaInicial = anio + "-" + mes + "-" + dia + " 00:00:00";
                    var separaF = fechaFinal.split("/");
                    var diaF = separaF[0];
                    var mesF = separaF[1];
                    var anioF = separaF[2];
                    fechaFinal = anioF + "-" + mesF + "-" + diaF + " 23:59:00";
                } else {

                    fechaInicial = "";
                    fechaFinal = "";
                }
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        numExhorto: $("#numeroEC").val(),
                        aniExhorto: $("#anioEC").val(),
                        cveTipoCarpeta: cveTipoCarpeta,
                        carpetaInv: $("#txtCarpetaInvConsulta").val(),
                        nuc: $("#txtNucConsulta").val(),
                        numero: $("#txtNumeroCConsulta").val(),
                        anio: $("#txtAnioCConsulta").val(),
                        cveEstadoProcedencia: estado,
                        cveJuzgadoProcedencia: "",
                        juzgadoProcedencia: $("#txtJuzgadoPConsulta").val(),
                        cveJuzgado: cveJuzgado[0],
                        fechaInicial: fechaInicial,
                        fechaFinal: fechaFinal,
                        pagina: pagina,
                        totalRegistros: 0,
                        nRegistros: $("#cmbRegistrosE").val(),
                        activo: 'S',
                        accion: 'consultar'
                    },
                    success: function (data) {
                        //console.log(data);
                        var table = "";
                        var con = 0;
                        var cadenaImputados = "";
                        var conI = 0;
                        var cadenaOfendidos = "";
                        var conO = 0;
                        var cadenaDelitos = "";
                        var conD = 0;
                        var juzgado = "";
                        var inicio;
                        var generado = "";
                        inicio = (pagina - 1) * $("#cmbRegistrosE").val();
                        if (data.estatus == "ok") {

                            table += "<br><table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                            table += "    <thead>";
                            table += "        <tr>";
                            table += "            <th>N&uacute;m.</th>";
                            table += "            <th>No. Exhorto</th>";
                            table += "            <th>Exhorto Generado</th>";
                            table += "            <th>Estado</th>";
                            table += "            <th>Juzgado Procedencia</th>";
                            table += "            <th>Imputados</th>";
                            table += "            <th>Ofendidos</th>";
                            table += "            <th>Delitos</th>";
                            table += "            <th>Eliminar</th>";
                            table += "        </tr>";
                            table += "    </thead>";
                            table += "    <tbody>";
                            //console.log(data.data);
                            $.each(data.data, function (key, value) {

                                if (value.cveJuzgadoProcedencia == null || value.cveJuzgadoProcedencia == 0) {
                                    juz = value.JuzgadoProcedencia;
                                } else {
                                    juz = value.desJuzgadoProcedencia;
                                }
                                if (value.listaImputados.length != 0) {
                                    $.each(value.listaImputados, function (key2, value2) {
                                        conI++;
                                        if (value2.cveTipoPersona == 2 || value2.cveTipoPersona == 3) {

                                            cadenaImputados += "<a title='Nombre: " + value2.nombreMoral + "\n" +
                                                    "Domicilio: " + value2.domicilio + "\n" +
                                                    "Municipio: " + value2.desMunicipio + "\n" +
                                                    "Estado: " + value2.desEstado + "\n" +
                                                    "Tipo: " + value2.desTipoPersona +
                                                    "' style='text-decoration:none;color:#284837'>" +
                                                    conI + ". " + value2.nombreMoral + "</a><br>";
                                        } else {
                                            cadenaImputados += "<a title='Nombre: " + value2.nombre + " " + value2.paterno + " " + value2.materno + "\n" +
                                                    "Telefono: " + value2.telefono + "\n" +
                                                    "Domicilio: " + value2.domicilio + "\n" +
                                                    "Municipio: " + value2.desMunicipio + "\n" +
                                                    "Estado: " + value2.desEstado + "\n" +
                                                    "Consignacion: " + value2.desConsignacion + "\n" +
                                                    "Cereso :" + value2.desCereso + "\n" +
                                                    "Tipo: " + value2.desTipoPersona +
                                                    "' style='text-decoration:none;color:#284837'>" +
                                                    conI + ". " + value2.nombre + " " + value2.paterno + " " + value2.materno + "</a><br>";
                                        }
                                    });
                                    conI = 0;
                                }
                                if (value.listaOfendidos.length != 0) {
                                    $.each(value.listaOfendidos, function (key3, value3) {
                                        conO++;
                                        if (value3.cveTipoPersona == 2 || value3.cveTipoPersona == 3) {

                                            cadenaOfendidos += "<a title='Nombre: " + value3.nombreMoral + "\n" +
                                                    "Domicilio: " + value3.domicilio + "\n" +
                                                    "Municipio: " + value3.desMunicipio + "\n" +
                                                    "Estado: " + value3.desEstadoO + "\n" +
                                                    "Tipo: " + value3.desTipoPersona +
                                                    "' style='text-decoration:none;color:#284837'>" +
                                                    conO + ". " + value3.nombreMoral + "</a><br>";
                                        } else {
                                            cadenaOfendidos += "<a title='Nombre: " + value3.nombre + " " + value3.paterno + " " + value3.materno + "\n" +
                                                    "Telefono: " + value3.telefono + "\n" +
                                                    "Domicilio: " + value3.domicilio + "\n" +
                                                    "Municipio :" + value3.desMunicipio + "\n" +
                                                    "Estado: " + value3.desEstadoO + "\n" +
                                                    "Tipo: " + value3.desTipoPersona +
                                                    "' style='text-decoration:none;color:#284837'>" +
                                                    conO + ". " + value3.nombre + " " + value3.paterno + " " + value3.materno + "</a><br>";
                                        }
                                    });
                                    conO = 0;
                                }
                                if (value.listaDelitos.length != 0) {
                                    $.each(value.listaDelitos, function (key4, value4) {
                                        conD++;
                                        cadenaDelitos += "<a title='" + value4.desDelito + "' style='text-decoration:none;color:#284837'>" + conD + ". " + value4.desDelito + "</a><br>";
                                        cadenaD = value4.desDelito;
                                    });
                                    conD = 0;
                                }
                                inicio++;
                                if (value.IdExhortoGenerado == "" || value.IdExhortoGenerado == null) {
                                    generado = "NO";
                                } else {
                                    generado = "SI";
                                }

                                table += "<tr>";
                                table += "   <td align='center' onclick=\"seleccionaE('" + value.idExhorto + "')\" > " + inicio + "</td>";
                                table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" > " + value.numExhorto + "/" + value.aniExhorto + "</td>";
                                table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" > " + generado + "</td>";
                                table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" > " + value.desEstadoProcedencia + "</td>";
                                table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" > " + juz + "</td>";
                                table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" > " + cadenaImputados + " </td>";
                                table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" >" + cadenaOfendidos + "</td>";
                                table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" >" + cadenaDelitos + "</td>";
                                if (value.IdExhortoGenerado == "" || value.IdExhortoGenerado == null) {
                                    if (permisos == 1) {
                                        table += "   <td align='center' ><img src='img/eliminar.png' width=30 height=30 onclick=\"eliminarE('" + total + "','" + pagina + "','" + value.idExhorto + "')\" style='cursor:pointer' ></td>";
                                    } else {
                                        table += "   <td></td>";
                                    }

                                } else {

                                    table += "   <td></td>";
                                }
                                table += "</tr> ";
                                cadenaImputados = "";
                                cadenaOfendidos = "";
                                cadenaDelitos = "";
                                generado = "";
                            });
                            table += "</tbody>";
                            table += "</table><br>";
                            $("#div_respuestaConsulta").html(table);
                            $("#tblResultadosGrid").DataTable({paging: false});
                        } else {

                            $("#div_respuestaConsulta").html('');
                            showMessage(data.mensaje, 'divAlertWarningC');
                        }
                    }

                });
            }
            ;
        };
        eliminarE = function (total, pagina, idExhorto) {

            bootbox.dialog({
                message: "\u00bfSeguro quieres eliminar Exhorto ?",
                closeButton: false,
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {

                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                                async: false,
                                dataType: "json",
                                data: {
                                    idExhorto: idExhorto,
                                    activo: 'N',
                                    accion: 'eliminar_exhorto'
                                },
                                success: function (data) {
                                    //console.log(data);
                                    if (data.estatus == "ok") {
                                        total = total - 1;
                                        $("#div_paginacion").html("<strong>Total: " + total + "</strong></div>");
                                        paginacionExhorto(total, pagina);
                                    } else {
                                        console.log(data.mensaje);
                                    }
                                }

                            });
                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {
                            // $("tr").filter('[data-ofendido="' + idofendido + '"]').removeClass('danger');
                        }
                    }
                }
            });
        };
        seleccionaE = function (idExhorto) {

            $("#idExhorto").val(idExhorto);
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    idExhorto: idExhorto,
                    pagina: 1,
                    totalRegistros: 1,
                    accion: 'consultar'
                },
                success: function (data) {
                    listaTestigosI = [];
                    listaTestigosO = [];
                    if (data.estatus == "ok") {
                        $("#inputDigitalizarR").show();
                        $("#inputVisorR").show();
                        $("#inputPDFR").show();
                        var arbol = $("#arbol").val();
                        if (arbol == 1) {
                            $("#inputConsultar").hide();
                        }




                        $(".bloqueoE").removeAttr("disabled");
                        $('#lstImputados').find('option:selected').remove();
                        $('#lstOfendidos').find('option:selected').remove();
                        $('#lstDelitos').find('option:selected').remove();
                        $('#lstImputados').empty();
                        $('#lstOfendidos').empty();
                        $('#lstDelitos').empty();
                        $("#divCamposConsulta").slideUp();
                        $("#divCampos").slideDown();
                        $("#formImputados").slideDown();
                        $("#formOfendidos").slideDown();
                        $("#formDelitos").slideDown();
                        var idExhorto;
                        $.each(data.data, function (key, value) {

                            var separa = "";
                            var numOficio = "";
                            var anioOficio = "";
                            // alert(value.IdActuacion);
                            if (value.IdActuacion > 0) {
                                $("#inputVisorR").attr("onclick", "visorDocuemntos(2," + value.IdActuacion + ")");
                            }
                            if (value.numOficio !== null) {
                                separa = value.numOficio.split("/");
                                numOficio = separa[0];
                                anioOficio = separa[1];
                            }
                            var content = value.observaciones;
                            //  alert(content);
                            llenareditor(content);
                            idExhorto = value.idExhorto;
                            if (value.cveJuzgadoProcedencia == "" || value.cveJuzgadoProcedencia == null || value.cveJuzgadoProcedencia == 0) {
                                $("#juzgadosFuera").slideDown();
                                $("#juzgadosEstado").slideUp();
                            } else {
                                $("#juzgadosFuera").slideUp();
                                $("#juzgadosEstado").slideDown();
                            }
                            $("#idExhortoGenerado").val(value.IdExhortoGenerado);
                            $("#numeroE").val(value.numExhorto);
                            $("#anioE").val(value.aniExhorto);
                            $("#cmbEstado").val(value.cveEstadoProcedencia);
                            $('#cmbJuzgado').val(value.cveJuzgadoProcedencia);
                            $("#txtJuzgadoP").val(value.JuzgadoProcedencia);
                            cargaDistrito();
                            $("#cveTipoJuzgado option").each(function () {

                                var cveJuzgado = $(this).val();
                                var spJuzgado = cveJuzgado.split("/");
                                if (spJuzgado[0] == value.cveJuzgado) {
                                    $(this).val(cveJuzgado);
                                    $("#cveTipoJuzgado").val(cveJuzgado);
                                }
                            });
                            if (value.carpetaInv == null) {
                                value.carpetaInv = "";
                            }
                            $("#txtCarpetaInv").val(value.carpetaInv);
                            $("#txtNuc").val(value.nuc);
                            cargaTipoCarpeta(5);
                            $("#cmbTipoCarpeta").val(value.cveTipoCarpeta == null ? "00" : value.cveTipoCarpeta);
                            $("#txtNumeroC").val(value.numero);
                            $("#txtAnioC").val(value.anio);
                            if (numOficio != null)
                                $("#txtOficio").val(numOficio);
                            if (value.anioOficio != null)
                                $("#txtAnioO").val(value.anioOficio);
                            $("#txtSintesis").val(value.sintesis);
                            //  $("#cmbConsignacion").val(value.cveConsignacion);
                            $("#cmbEstatus").val(value.cveEstatusExhorto);
                            $("#resConsignacion").html("Consignacion : " + value.desConsignacion);

                            //codigo para obtener lista de testigos
                            if (value.listaTestigosI.length != 0) {
                                $.each(value.listaTestigosI, function (key2, value2) {
                                    TestigoIObj = new Object();
                                    TestigoIObj.cveTipoParte = value2.cveTipoParte;
                                    TestigoIObj.descTipoParte = value2.nombreTipoParte;
                                    TestigoIObj.imputadoCadena = "";
                                    TestigoIObj.nombreImputado = value2.nombreImputado;
                                    TestigoIObj.nombreTestigo = value2.nombreTestigo;
                                    TestigoIObj.activo = "S";
                                    TestigoIObj.idTestigoCarpetaJudicial = value2.idTestigoCarpetaJudicial;
                                    listaTestigosI.push(TestigoIObj);
                                });
                            }
                            //codigo para obtener lista de testigos
                            if (value.listaTestigosO.length != 0) {
                                $.each(value.listaTestigosO, function (key2, value2) {
                                    TestigoOObj = new Object();
                                    TestigoOObj.cveTipoParte = value2.cveTipoParte;
                                    TestigoOObj.descTipoParte = value2.nombreTipoParte;
                                    TestigoOObj.imputadoCadena = "";
                                    TestigoOObj.nombreOfendido = value2.nombreOfendido;
                                    TestigoOObj.nombreTestigo = value2.nombreTestigo;
                                    TestigoOObj.activo = "S";
                                    TestigoOObj.idTestigoCarpetaJudicial = value2.idTestigoCarpetaJudicial;
                                    listaTestigosO.push(TestigoOObj);
                                });
                            }

                            if (value.listaImputados.length != 0) {
                                $.each(value.listaImputados, function (key2, value2) {

                                    if (value2.cveTipoPersona == 1) { //Fisica

                                        if (value2.alias == '-') {
                                            value2.alias = '';
                                        }
                                        if (value2.telefono == '0') {
                                            value2.telefono = '';
                                        }
                                        ;
                                        $('#lstImputados').append(
                                                '<option value="' + value2.idImputadoExhorto + ';' + value2.cveTipoPersona + ';'
                                                + ';'   // nombre Moral
                                                + value2.cveConsignacion + ';'
                                                + value2.cveGenero + ';'
                                                + value2.cveEstado + ';'
                                                + value2.cveMunicipio + ';'
                                                + value2.domicilio + ';'
                                                + value2.alias + ';'
                                                + value2.telefono + ';'
                                                + value2.cveCereso + ';'
                                                + value2.nombre + ';'
                                                + value2.paterno + ';'
                                                + value2.materno + ';'

                                                + '" selected="selected">'
                                                + value2.nombre + ' ' + value2.paterno + ' ' + value2.materno + '</option>');
                                        var nombreImputadoL = value2.nombre + ' ' + value2.paterno + ' ' + value2.materno;
                                        $.each(listaTestigosI, function (key2, testigoI) {

                                            if(testigoI.nombreImputado == nombreImputadoL){
                                                testigoI.imputadoCadena =  value2.idImputadoExhorto + ';' + value2.cveTipoPersona + ';'+ ';'+ value2.cveConsignacion + ';'
                                                + value2.cveGenero + ';'
                                                + value2.cveEstado + ';'
                                                + value2.cveMunicipio + ';'
                                                + value2.domicilio + ';'
                                                + value2.alias + ';'
                                                + value2.telefono + ';'
                                                + value2.cveCereso + ';'
                                                + value2.nombre + ';'
                                                + value2.paterno + ';'
                                                + value2.materno + ';'
                                            }
                                        });
                                        
                                        $("#cmbImputadosAgregados").append('<option value="' + value2.idImputadoExhorto + ';' + value2.cveTipoPersona + ';'
                                                + ';'   // nombre Moral
                                                + value2.cveConsignacion + ';'
                                                + value2.cveGenero + ';'
                                                + value2.cveEstado + ';'
                                                + value2.cveMunicipio + ';'
                                                + value2.domicilio + ';'
                                                + value2.alias + ';'
                                                + value2.telefono + ';'
                                                + value2.cveCereso + ';'
                                                + value2.nombre + ';'
                                                + value2.paterno + ';'
                                                + value2.materno + ';'

                                                + '" selected="selected">'
                                                + value2.nombre + ' ' + value2.paterno + ' ' + value2.materno + '</option>'
                                        );
                                    } else {
                                        $('#lstImputados').append(
                                                '<option value="' + value2.idImputadoExhorto + ';' + value2.cveTipoPersona + ';'
                                                + value2.nombreMoral + ';'
                                                + value2.cveConsignacion + ';'
                                                + ';' //genero
                                                + value2.cveEstado + ';'
                                                + value2.cveMunicipio + ';'
                                                + value2.domicilio
                                                + '" selected="selected">'
                                                + value2.nombreMoral + '</option>');
                                        var nombreImputadoL = value2.nombreMoral;
                                        $.each(listaTestigosI, function (key2, testigoI) {

                                            if(testigoI.nombreImputado == nombreImputadoL){
                                                testigoI.imputadoCadena =  value2.idImputadoExhorto + ';' + value2.cveTipoPersona + ';'
                                                    + value2.nombreMoral + ';'
                                                    + value2.cveConsignacion + ';'
                                                    + ';' //genero
                                                    + value2.cveEstado + ';'
                                                    + value2.cveMunicipio + ';'
                                                    + value2.domicilio
                                            }
                                        });
                                         $("#cmbImputadosAgregados").append(
                                                    '<option value="' + value2.idImputadoExhorto + ';' + value2.cveTipoPersona + ';'
                                                    + value2.nombreMoral + ';'
                                                    + value2.cveConsignacion + ';'
                                                    + ';' //genero
                                                    + value2.cveEstado + ';'
                                                    + value2.cveMunicipio + ';'
                                                    + value2.domicilio
                                                    + '" selected="selected">'
                                                    + value2.nombreMoral + '</option>'
                                        );
                                    }
                                   
                                });
                                tablaImputados('lstImputados', 'imputados');
                                $("#testigosTbody").html(formarTablaTestigoI());
                            }
                            
                            //console.log($("#lstImputados").val());
                            if (value.listaOfendidos.length != 0) {
                                $.each(value.listaOfendidos, function (key3, value3) {
                                    if (value3.cveTipoPersona == 1) { //Fisica
                                        $('#lstOfendidos').append(
                                                '<option value="' + value3.idOfenfendidoExhorto + ';' + value3.cveTipoPersona + ';'
                                                + ';'   // nombre Moral
                                                + value3.cveGenero + ';'
                                                + value3.cveEstado + ';'
                                                + value3.cveMunicipio + ';'
                                                + value3.domicilio + ';'
                                                + value3.telefono + ';'
                                                + value3.nombre + ';'
                                                + value3.paterno + ';'
                                                + value3.materno + ';'
                                                + '" selected="selected">'
                                                + value3.nombre + ' ' + value3.paterno + ' ' + value3.materno + '</option>');
                                         var nombreImputadoL = value2.nombre + ' ' + value2.paterno + ' ' + value2.materno;
                                        $.each(listaTestigosO, function (key2, testigoO) {

                                            if(testigoO.nombreOfendido == nombreImputadoL){
                                                testigoO.ofendidoCadena =  value3.idOfenfendidoExhorto + ';' + value3.cveTipoPersona + ';'
                                                + ';'   // nombre Moral
                                                + value3.cveGenero + ';'
                                                + value3.cveEstado + ';'
                                                + value3.cveMunicipio + ';'
                                                + value3.domicilio + ';'
                                                + value3.telefono + ';'
                                                + value3.nombre + ';'
                                                + value3.paterno + ';'
                                                + value3.materno + ';'
                                            }
                                        });
                                        $("#cmbOfendidosAgregados").append('<option value="' + value3.idOfenfendidoExhorto + ';' + value3.cveTipoPersona + ';'
                                                + ';'   // nombre Moral
                                                + value3.cveGenero + ';'
                                                + value3.cveEstado + ';'
                                                + value3.cveMunicipio + ';'
                                                + value3.domicilio + ';'
                                                + value3.telefono + ';'
                                                + value3.nombre + ';'
                                                + value3.paterno + ';'
                                                + value3.materno + ';'

                                                + '" selected="selected">'
                                                + value3.nombre + ' ' + value3.paterno + ' ' + value3.materno + '</option>'
                                );
                                    } else {
                                        $('#lstOfendidos').append(
                                                '<option value="' + value3.idOfenfendidoExhorto + ';' + value3.cveTipoPersona + ';'
                                                + value3.nombreMoral + ';'
                                                + ';' //genero
                                                + value3.cveEstado + ';'
                                                + value3.cveMunicipio + ';'
                                                + value3.domicilio
                                                + '" selected="selected">'
                                                + value3.nombreMoral + '</option>');
                                            var nombreImputadoL = value3.nombreMoral;
                                        $.each(listaTestigosO, function (key2, testigoO) {
                                            if(testigoO.nombreOfendido == nombreImputadoL){
                                                testigoO.ofendidoCadena =  value3.idOfenfendidoExhorto + ';' + value3.cveTipoPersona + ';'
                                                    + value3.nombreMoral + ';'
                                                    + ';' //genero
                                                    + value3.cveEstado + ';'
                                                    + value3.cveMunicipio + ';'
                                                    + value3.domicilio
                                            }
                                        });
                                         $("#cmbOfendidosAgregados").append(
                                                    '<option value="' + value3.idOfenfendidoExhorto + ';' + value3.cveTipoPersona + ';'
                                                    + value3.nombreMoral + ';'
                                                    + ';' //genero
                                                    + value3.cveEstado + ';'
                                                    + value3.cveMunicipio + ';'
                                                    + value3.domicilio
                                                    + '" selected="selected">'
                                                    + value3.nombreMoral + '</option>'
                                        );
                                    }
                                });
                                tablaOfendidos('lstOfendidos', 'ofendidos');
                            $("#testigosTbodyO").html(formarTablaTestigoO());
                            }
                            // console.log($("#lstOfendidos").val());
                            if (value.listaDelitos.length != 0) {
                                $.each(value.listaDelitos, function (key4, value4) {
                                    $('#lstDelitos').append(
                                            '<option value="' + value4.idDelitoExhorto + ';' + value4.cveDelito + ';'
                                            + value4.desDelito + ';'
                                            + '" selected="selected">'
                                            + value4.desDelito + '</option>');
                                });
                                tablaDelitos('lstDelitos', 'delitos');
                            }
                            if (value.IdExhortoGenerado == "" || value.IdExhortoGenerado == null) {

                                $(".bloqueoE").removeAttr('disabled');
                                $("#btn_guardarE").show();
                            } else {

                                $(".bloqueoE").attr('disabled', 'disabled');
                                $("#btn_guardarE").hide();
                            }

                        });
                        $("#btn_imprimirER").html('<input type="submit" class="btn btn-primary impiexh" id="inputImprimir" value="Imprimir" onclick="imprimirER(' + idExhorto + ')"> ');
    //                           $(".impiexh").hide();
                    }
                }

            });
            $("#registro").html("Registro de Exhortos Recibidos");
            if (origen == 1) {
                var permisos = obtenerPermisosFormulario("SECRETARIO DE TRIBUNAL DE ALZADA", "EXHORTOS GENERADOS");
                if (permisos.Update == "N") {
                    $("#actEnve").hide();
                }
                if (permisos.Read == "N") {
                    $("#inputConsultar").hide();
                }
            } else {
                var permisos = obtenerPermisosFormulario("CARPETAS JUDICIALES", "EXHORTOS GENERADOS");
                if (permisos.Update == "N") {
                    $("#actEnve").hide();
                }
                if (permisos.Read == "N") {
                    $("#inputConsultar").hide();
                }
            }
        };
        llenareditor = function (value) {
            try {

                editor.ready(function () {

                    setTimeout(function () {
                        editor.setContent(value, false);
                    }, 600);
                });
            } catch (e) {
                alert(e);
            }

        };
        Imputados = function (idImputadoExhorto, cveTipoPersona, nombreMoral, consignacion,
                genero, estado, municipio, domicilio, alias, telefono, cveCereso, nombre,
                paterno, materno) {

            this.idImputadoExhorto = idImputadoExhorto;
            this.cveTipoPersona = cveTipoPersona;
            this.nombreMoral = nombreMoral;
            this.consignacion = consignacion;
            this.cveGenero = genero;
            this.cveEstado = estado;
            this.cveMunicipio = municipio;
            this.domicilio = domicilio;
            this.alias = alias;
            this.telefono = telefono;
            this.cveCereso = cveCereso;
            this.nombre = nombre;
            this.paterno = paterno;
            this.materno = materno;
        };
        Ofendidos = function (idOfenfendidoExhorto, cveTipoPersona, nombreMoral,
                genero, estado, municipio, domicilio, telefono,
                nombre, paterno, materno) {

            this.idOfenfendidoExhorto = idOfenfendidoExhorto;
            this.cveTipoPersona = cveTipoPersona;
            this.nombreMoral = nombreMoral;
            this.cveGenero = genero;
            this.cveEstado = estado;
            this.cveMunicipio = municipio;
            this.domicilio = domicilio;
            this.telefono = telefono;
            this.nombre = nombre;
            this.paterno = paterno;
            this.materno = materno;
        };
        Delitos = function (idDelitoExhorto, cveDelito) {

            this.idDelitoExhorto = idDelitoExhorto;
            this.cveDelito = cveDelito;
        };
        limpiarArbolRecibido = function () {
            $("#idExhorto").val("");
            $("#idExhortoGenerado").val("");
            $("#txtCarpetaInv").val("");
            $("#txtNuc").val("");
            $("#txtNumeroC").val("");
            $("#txtAnioC").val("");
            $("#txtOficio").val("");
            $("#txtAnioO").val("");
            $("#txtSintesis").val("");
            $("#cmbEstado").val(0);
            $('#cmbJuzgado').select2('val', '');
            $("#txtJuzgadoP").val("");
            editor.setContent("", false);
            $("#cmbConsignacion").val(0);
            $("#cmbEstatus").val(2);
            $("#resConsignacion").html("");
            $('#lstImputados').find('option:selected').remove();
            $('#lstOfendidos').find('option:selected').remove();
            $('#lstDelitos').find('option:selected').remove();
            $('#lstImputados').empty();
            $('#lstOfendidos').empty();
            $('#lstDelitos').empty();
            $(".required").remove();
            $("#cveJuzgado").val(<?= $cveJuzgado ?>);
            $("#cmbTipoPersonaImputado").val(0);
            $("#cmbTipoPersonaOfendido").val(0);
            $("#btn_imprimirER").html("");
            $("#btn_guardarE").show();
            $("#tabla-imputados").html("");
            $("#divTablaImputados").hide();
            $("#tabla-ofendidos").html("");
            $("#divTablaOfendidos").hide();
            $("#tabla-delitos").html("");
            $("#divTablaDelitos").hide();
            $("#ImputadosFisica").slideUp();
            $("#ImputadosMoral").slideUp();
            $("#OfendidosFisica").slideUp();
            $("#OfendidosMoral").slideUp();
            $("#ImputadosAccion").hide();
            $("#OfendidosAccion").hide();
            $(".bloqueoE").removeAttr("disabled");
            limpiarImputado();
            $("#inputAgregarImputado").attr('disabled', false);
            limpiarOfendido();
            $("#inputAgregarOfendido").attr('disabled', false);
            $("#div_actualizar").html("");
            $("#cmbEstado").val(15);
            validaEstado();
        };
        limpiarArbol = function () {
            $("#numOficio").val("");
            $("#anioOficio").val("");
            $("#telefonoEG").val("");
            $("#correoEG").val("");
            $("#textoExhorto").val("");
            $("#fechaInicioEG").val("");
            $("#fechaTerminoEG").val("");
            $("#datosRelacionadostxt").empty();
            $("#inputGuardarEG").show();
            $("#actEnve").hide();
            $("#idActuacion").val("");
            $("#cveTipoJuzgadoG").attr("disabled", true);
            $("#cmbTipoCarpetaG").attr("disabled", true);
            $("#txtNumeroCG").attr("disabled", true);
            $("#txtAnioCG").attr("disabled", true);
            $("#txtSintesisG").val("");
            $("#cmbEstadoG").val(0);
            $("#txtJuzgadoPG").val("");
            editorG.setContent("", false);
            $("#cmbEstatusG").val(4);
            $('#cmbJuzgadoG').select2('val', '0');
            $("#requisitoria").removeAttr('checked');
            $(".required").remove();
            $("#btn_imprimirEG").html("");
            $("#btn_verER").html("");
            $("#btn_guardar").show();
            $("#resRelacion").html("");
            $("#numeroEG").val("");
            $("#anioEG").val("");
            $("#div_enviarEG").html("");
            $(".bloqueoEG").removeAttr("disabled");
            $("#cmbEstadoG").val(0);
        }
        limpiar = function () {

            $("#inputVisor").hide();
            $("#inputPDF").hide();
            $("#inputDigitalizar").hide();
            $("#inputDigitalizarR").hide();
            $("#inputVisorR").hide();
            $("#inputPDFR").hide();
            $("#idExhorto").val("");
            $("#idExhortoGenerado").val("");
            $("#cmbTipoCarpeta").val(0);
            $("#cmbJuzgado").val(0);
            $("#txtCarpetaInv").val("");
            $("#txtNuc").val("");
            $("#txtNumeroC").val("");
            $("#txtAnioC").val("");
            $("#txtOficio").val("");
            $("#txtAnioO").val("");
            $("#txtSintesis").val("");
            $("#cmbEstado").val(0);
            $('#cmbJuzgado').select2('val', '');
            $("#txtJuzgadoP").val("");
            editor.setContent("", false);
            $("#cmbConsignacion").val(0);
            $("#cmbEstatus").val(2);
            $("#resConsignacion").html("");
            $('#lstImputados').find('option:selected').remove();
            $('#lstOfendidos').find('option:selected').remove();
            $('#lstDelitos').find('option:selected').remove();
            $('#lstImputados').empty();
            $('#lstOfendidos').empty();
            $('#lstDelitos').empty();
            $(".required").remove();
            $("#cveJuzgado").val(<?= $cveJuzgado ?>);
            $("#cmbTipoPersonaImputado").val(0);
            $("#cmbTipoPersonaOfendido").val(0);
            $("#numeroE").val("");
            $("#anioE").val("");
            $("#btn_imprimirER").html("");
            $("#btn_guardarE").show();
            $("#tabla-imputados").html("");
            $("#divTablaImputados").hide();
            $("#tabla-ofendidos").html("");
            $("#divTablaOfendidos").hide();
            $("#tabla-delitos").html("");
            $("#divTablaDelitos").hide();
            $("#ImputadosFisica").slideUp();
            $("#ImputadosMoral").slideUp();
            $("#OfendidosFisica").slideUp();
            $("#OfendidosMoral").slideUp();
            $("#ImputadosAccion").hide();
            $("#OfendidosAccion").hide();
            $(".bloqueoE").removeAttr("disabled");
            limpiarImputado();
            $("#inputAgregarImputado").attr('disabled', false);
            limpiarOfendido();
            $("#inputAgregarOfendido").attr('disabled', false);
            $("#div_actualizar").html("");
            $("#cmbEstado").val(15);
            validaEstado();
            listaTestigosI = [];
            $("#testigosTbody").empty();
            listaTestigosO = [];
            $("#testigosTbody0").empty();
            $("#cmbOfendidosAgregados").empty();
            $("#cmbOfendidosAgregados").append("<option value='0'>Seleccione una opci&oacute;n</option>");
            $("#cmbImputadosAgregados").empty();
            $("#cmbImputadosAgregados").append("<option value='0'>Seleccione una opci&oacute;n</option>");
            limpiarTestigoO();
            limpiarTestigo();
        };

        limpiarTestigo = function (){
            $("#cmbTiposPartesI").val(0);
            $("#cmbImputadosAgregados").val(0);
            $("#nombreTestigoI").val("");
            $("#cmbImputadosAgregados").prop("disabled",false);
            $("#inputAgregarTestigo").show();
            $("#inputModificarTestigo").hide();
        }
        limpiarTestigoO = function (){
            $("#cmbTiposPartesO").val(0);
            $("#cmbTiposPartesO").val(0);
            $("#cmbOfendidosAgregados").val(0);
            $("#nombreTestigoO").val("");
            $("#cmbOfendidosAgregados").prop("disabled",false);
            $("#inputModificarTestigoO").hide();
            $("#inputAgregarTestigoO").show();
        }

        limpiar2 = function () {
            $("#cmbTipoCarpetaConsulta").val(0);
            $("#txtCarpetaInvConsulta").val("");
            $("#txtNucConsulta").val("");
            $("#txtNumeroCConsulta").val("");
            $("#txtAnioCConsulta").val("");
            $("#txtOficioConsulta").val("");
            $("#txtAnioOConsulta").val("");
            $("#txtSintesisConsulta").val("");
            $("#cmbEstadoConsulta").val(0);
            $('#cmbJuzgadoConsulta').select2('val', '');
            $('#fechaInicial, #fechaFinal').val(getDate('today'));
            $("#div_paginacionConsulta").html('');
            $("#div_respuestaConsulta").html('');
            $("#cmbEstadoConsulta").val(15);
            validaEstadoConsulta();
        };
        $.fn.agregaPersona = function (Clase, Destino, Valor, tipo,cmbTestigo) {

            $(".required").remove();
            var arrNombre = new Array();
            var agregar = true;
            var noElementos = $("." + Clase).length;
            $("." + Clase).each(function () {
                if ($.trim($(this).val()) != "" && $(this).is(":visible")) {
                    arrNombre.push($.trim($(this).val().toUpperCase()));
                } else if ($(this).is(":visible")) {
                    agregar = false;
                    $(this).parent().append("<br class='required'><label class='Error required'>Este campo no puede estar vacio</label>");
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
                    var cadena = '';
                    var cadena2 = '';
                    var valida = true;
                    if ((Valor == 2 || Valor == 3) && Clase == "txtImpM") {
                        var estado = $("#cmbEstadoMoralI").val();
                        var municipio = $("#cmbMunicipioMoralI").val();
                        var domicilio = $("#txtDomicilioMoralI").val().toUpperCase();
                        var consignacionIMoral = $("#cmbConsignacionIMoral").val();
                        if (consignacionIMoral == "" || consignacionIMoral == 0) {
                            Error($("#cmbConsignacionIMoral"), "Selecciona Consignacion");
                            valida = false;
                        }
                        if (estado == "" || estado == 0) {
                            Error($("#cmbEstadoMoralI"), "Selecciona Estado");
                            valida = false;
                        }
                        if (municipio == "" || municipio == 0) {
                            Error($("#cmbMunicipioMoralI"), "Selecciona Municipio");
                            valida = false;
                        }
                        if (domicilio == "") {
                            Error($("#txtDomicilioMoralI"), "Ingresa Domicilio");
                            valida = false;
                        }

                        cadena2 = ';' + consignacionIMoral + ';' + ';' + estado + ';' + municipio
                                + ';' + domicilio;
                    }
                    if (Valor == 1 && Clase == "txtImpF") {
                        var consignacionI = $("#cmbConsignacionI").val();
                        var genero = $("#cmbGeneroImputado").val();
                        var estado = $("#cmbEstadoI").val();
                        var municipio = $("#cmbMunicipioI").val();
                        var domicilio = $("#txtDomicilioI").val().toUpperCase();
                        var alias = $("#txtAlias").val().toUpperCase();
                        var telefono = $("#txtTelefonoI").val();
                        var cereso = $("#cmbCereso").val();
                        if (consignacionI == "" || consignacionI == 0) {
                            Error($("#cmbConsignacionI"), "Seleccione Consignacion");
                            valida = false;
                        }
                        if (genero == "" || genero == 0) {
                            Error($("#cmbGeneroImputado"), "Selecciona Genero");
                            valida = false;
                        }
                        if (estado == "" || estado == 0) {
                            Error($("#cmbEstadoI"), "Selecciona Estado");
                            valida = false;
                        }
                        if (municipio == "" || municipio == 0) {
                            Error($("#cmbMunicipioI"), "Selecciona Municipio");
                            valida = false;
                        }
                        if (domicilio == "") {
                            Error($("#txtDomicilioI"), "Ingresa Domicilio");
                            valida = false;
                        }
                        // if (alias == "") {
                        //     Error($("#txtAlias"), "Ingresa Alias");
                        //     valida = false;
                        // }
                        if (telefono != "") {

                            if (telefono.length != 10) {
                                Error($("#txtTelefonoI"), "Telefono incorrecto, se requieren 10 digitos");
                                valida = false;
                            }
                            if (isNaN(telefono)) {
                                Error($("#txtTelefonoI"), "No es Numero");
                                valida = false;
                            }

                        }

                        if (consignacionI == 1) {

                            if (cereso == "" || cereso == 0) {
                                Error($("#cmbCereso"), "Selecciona Cereso");
                                valida = false;
                            }
                        }

                        cadena = ';' + consignacionI + ';' + genero
                                + ';' + estado + ';' + municipio
                                + ';' + domicilio + ';' + alias
                                + ';' + telefono + ';' + cereso + ';';
                    }
                    if ((Valor == 2 || Valor == 3) && Clase == "txtOfeM") {
                        var estado = $("#cmbEstadoMoralO").val();
                        var municipio = $("#cmbMunicipioMoralO").val();
                        var domicilio = $("#txtDomicilioMoralO").val().toUpperCase();
                        if (estado == "" || estado == 0) {
                            Error($("#cmbEstadoMoralO"), "Selecciona Estado");
                            valida = false;
                        }
                        if (municipio == "" || municipio == 0) {
                            Error($("#cmbMunicipioMoralO"), "Selecciona Municipio");
                            valida = false;
                        }
                        if (domicilio == "") {
                            Error($("#txtDomicilioMoralO"), "Ingresa Domicilio");
                            valida = false;
                        }

                        cadena2 = ';' + ';' + estado + ';' + municipio
                                + ';' + domicilio;
                    }
                    if (Valor == 1 && Clase == "txtOfeF") {
                        var genero = $("#cmbGeneroOfendido").val();
                        var estado = $("#cmbEstadoO").val();
                        var municipio = $("#cmbMunicipioO").val();
                        var domicilio = $("#txtDomicilioO").val().toUpperCase();
                        var telefono = $("#txtTelefonoO").val();
                        if (genero == "" || genero == 0) {
                            Error($("#cmbGeneroOfendido"), "Selecciona Genero");
                            valida = false;
                        }
                        if (estado == "" || estado == 0) {
                            Error($("#cmbEstadoO"), "Selecciona Estado");
                            valida = false;
                        }
                        if (municipio == "" || municipio == 0) {
                            Error($("#cmbMunicipioO"), "Selecciona Municipio");
                            valida = false;
                        }
                        if (domicilio == "") {
                            Error($("#txtDomicilioO"), "Ingresa Domicilio")
                            valida = false;
                        }
                        if (telefono != "") {

                            if (telefono.length != 10) {
                                Error($("#txtTelefonoO"), "Telefono incorrecto, se requieren 10 digitos");
                                valida = false;
                            }
                            if (isNaN(telefono)) {
                                Error($("#txtTelefonoO"), "No es Numero");
                                valida = false;
                            }
                        }


                        cadena = ';' + genero + ';' + estado
                                + ';' + municipio + ';' + domicilio
                                + ';' + telefono + ';';
                    }
                    if (valida) {
                        $('#' + Destino).append(
                                '<option value="0;' + Valor + ';'
                                + cadena
                                + arrNombre.join(';') + cadena2 + '" selected="selected">'
                                + arrNombre.join(' ') + '</option>');
                        $('#' + cmbTestigo).append(
                                '<option value="0;' + Valor + ';'
                                + cadena
                                + arrNombre.join(';') + cadena2 + '" selected="selected">'
                                + arrNombre.join(' ') + '</option>');
                        $("." + Clase).each(function () {
                            $(this).val("");
                        });
                        $("." + Clase).first().focus();
                        tablas(Destino, tipo);
                        if (Clase == "txtImpM") {
                            $("#cmbEstadoMoralI").val(0);
                            $("#cmbMunicipioMoralI").val(0);
                            $("#txtDomicilioMoralI").val("");
                            $("#txtNombreMoralI").val("");
                            $("#cmbConsignacionIMoral").val(0);
                            if ($("#idExhorto").val() != "") {
                                $("#div_actualizar").html("<span class='Error'>* Guarde Cambios</span>");
                            }
                        }
                        if (Clase == "txtImpF") {
                            $("#cmbGeneroImputado").val(0);
                            $("#cmbEstadoI").val(0);
                            $("#cmbMunicipioI").val(0);
                            $("#txtDomicilioI").val("");
                            $("#txtAlias").val("");
                            $("#txtTelefonoI").val("");
                            $("#cmbCereso").val(0);
                            $("#cmbConsignacionI").val(0);
                            if ($("#idExhorto").val() != "") {
                                $("#div_actualizar").html("<span class='Error'>* Guarde Cambios</span>");
                            }
                        }
                        if (Clase == "txtOfeM") {
                            $("#cmbEstadoMoralO").val(0);
                            $("#cmbMunicipioMoralO").val(0);
                            $("#txtDomicilioMoralO").val("");
                            //$("#txtNombreMoralO").val("");
                        }
                        if (Clase == "txtOfeF") {

                            $("#cmbGeneroOfendido").val(0);
                            $("#cmbEstadoO").val(0);
                            $("#cmbMunicipioO").val(0);
                            $("#txtDomicilioO").val("");
                            $("#txtTelefonoO").val("");
                        }
                    }
                } else {
                    alert("El nombre " + arrNombre.join(' ') + " ya existe.");
                }
            } else {

            }
        };
        tablas = function (Destino, tipo) {
            if (tipo == "imputados") {
                tablaImputados(Destino, tipo);
            }
            if (tipo == 'ofendidos') {
                tablaOfendidos(Destino, tipo);
            }
            if (tipo == "delitos") {
                tablaDelitos(Destino, tipo);
            }
        };
        tablaImputados = function (Destino, tipo) {
            //$("#tabla-imputados").html("");
            var html = "";
            var con = 0;
            var idExhorto = $("#idExhorto").val();
            var idExhortoGenerado = $("#idExhortoGenerado").val();
            $('select#' + Destino).find('option').each(function () {
                var datos = this.value.split(";");
                var nombre = "";
                if (datos[1] == 1) {
                    nombre = datos[11] + ' ' + datos[12] + ' ' + datos[13];
                } else {
                    nombre = datos[2];
                }
                var valorSelect = this.value;
                con++;
                html += "<tr>";
                html += "<th scope='row'>" + con + "</th>";
                html += "<td style='cursor:pointer;' onclick=\"modificarImpofedel('" + Destino + "','" + tipo + "','" + valorSelect + "')\">" + nombre + "</td>";
                if (idExhorto != "" && idExhortoGenerado != "") {
                    html += "<td></td>";
                } else {
                    html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick=\"borraPersona('" + Destino + "','" + tipo + "','" + valorSelect + "','cmbImputadosAgregados')\"></center></td>";
                }
                html += "</tr>";
            });
            $("#tabla-imputados").html(html);
            $("#divTablaImputados").show('fast');
        };
        validaConsignacion = function () {

            if ($("#cmbConsignacionI").val() == 1) {

                $("#cmbCereso").removeAttr("disabled");
            } else {
                $("#cmbCereso").attr('disabled', 'disabled');
                $("#cmbCereso").val(1);
            }
        };
        tablaOfendidos = function (Destino, tipo) {

            var html = "";
            var con = 0;
            var idExhorto = $("#idExhorto").val();
            var idExhortoGenerado = $("#idExhortoGenerado").val();
            $('select#' + Destino).find('option').each(function () {
                var datos = this.value.split(";");
                var nombre = "";
                if (datos[1] == 1) {
                    nombre = datos[8] + ' ' + datos[9] + ' ' + datos[10];
                } else {
                    nombre = datos[2];
                }
                var valorSelect = this.value;
                con++;
                html += "<tr>";
                html += "<th scope='row'>" + con + "</th>";
                html += "<td style='cursor:pointer;' onclick=\"modificarImpofedel('" + Destino + "','" + tipo + "','" + valorSelect + "')\">" + nombre + "</td>";
                if (idExhorto != "" && idExhortoGenerado != "") {

                    html += "<td></td>";
                } else {
                    html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick=\"borraPersona('" + Destino + "','" + tipo + "','" + valorSelect + "','cmbOfendidosAgregados')\"></center></td>";
                }
                html += "</tr>";
            });
            $("#tabla-ofendidos").html(html);
            $("#divTablaOfendidos").show('fast');
        };
        tablaDelitos = function (Destino, tipo) {

            var html = "";
            var con = 0;
            var idExhorto = $("#idExhorto").val();
            var idExhortoGenerado = $("#idExhortoGenerado").val();
            $('select#' + Destino).find('option').each(function () {
                var datos = this.value.split(";");
                var nombre = datos[2];
                var valorSelect = this.value;
                con++;
                html += "<tr>";
                html += "<th scope='row'>" + con + "</th>";
                html += "<td>" + nombre + "</td>";
                if (idExhorto != "" && idExhortoGenerado != "") {
                    html += "<td></td>";
                } else {
                    html += "<td><center><img class='bloqueoEliminar' src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick=\"borraPersona('" + Destino + "','" + tipo + "','" + valorSelect + "','')\"></center></td>";
                }
                html += "</tr>";
            });
            $("#tabla-delitos").html(html);
            $("#divTablaDelitos").show('fast');
        };
        capturaNombrePersona = function (e, Sig, clase, destino, tipo) {

            tecla = (document.all) ? e.keyCode : e.which;
            if (clase == "txtImpM" || clase == "txtImpF") {
                var valor = $("#cmbTipoPersonaImputado").val();
                if (valor == "" || valor == 0) {
                    Error($("#cmbTipoPersonaImputado"), "Selecciona Tipo de Persona");
                    return false;
                }
            }
            if (clase == "txtOfeM" || clase == "txtOfeF") {
                var valor = $("#cmbTipoPersonaOfendido").val();
                if (valor == "" || valor == 0) {
                    Error($("#cmbTipoPersonaOfendido"), "Selecciona Tipo de Persona");
                    return false;
                }
            }

            if (tecla == 8)
                return true; // Tecla de retroceso (para poder borrar)
            if (tecla == 13) {
                if (Sig.length > 0) {
                    if (Sig in $.fn) {

                        $.fn[Sig](clase, destino, valor, tipo);
                    } else if ($('#' + Sig)) {
                        $('#' + Sig).focus();
                    }
                    return true;
                }
            }
            patron = /"|'|\\/; // No acepta ",',/,\ (se separan por | )
            te = String.fromCharCode(tecla);
            return !patron.test(te);
        };
        capturaBoton = function (destino, tipo,cmbTestigo) {

            var valida = true;
            if (tipo == "imputados") {
                var valor = $("#cmbTipoPersonaImputado").val();
                if (valor == "" || valor == 0) {
                    Error($("#cmbTipoPersonaImputado"), "Selecciona Tipo de Persona");
                    valida = false;
                } else {

                    if (valor == 1) {

                        clase = "txtImpF";
                    } else {
                        clase = "txtImpM";
                    }

                }

            }

            if (tipo == "ofendidos") {

                var valor = $("#cmbTipoPersonaOfendido").val();
                if (valor == "" || valor == 0) {
                    Error($("#cmbTipoPersonaOfendido"), "Selecciona Tipo de Persona");
                    valida = false;
                } else {

                    if (valor == 1) {

                        clase = "txtOfeF";
                    } else {
                        clase = "txtOfeM";
                    }
                }
            }
            if (valida) {

                $.fn.agregaPersona(clase, destino, valor, tipo,cmbTestigo);
            }
            ;
        };
        capturaDelito = function (Sig, Clase, Destino, tipo) {
            var arrNombre = new Array();
            var delito = $('#cmbDelito :selected').text();
            arrNombre.push($.trim(delito.toUpperCase()));
            if (arrNombre.join('').length > 0) {
                var found = false;
                $("#" + Destino + " option").each(function () {
                    if (arrNombre.join(' ') == $(this).text().toUpperCase()) {
                        found = true;
                    }
                });
                if (found != true) {
                    var cadena = $("#cmbDelito").val() + ';';
                    $('#' + Destino).append(
                            '<option value="0;'
                            + cadena
                            + arrNombre.join(';') + '" selected="selected">'
                            + arrNombre.join(' ') + '</option>');
                    $("." + Clase).each(function () {
                        $(this).val("");
                    });
                    $("." + Clase).first().focus();
                    tablas(Destino, tipo);
                } else {
                    alert("El Delito " + arrNombre.join(' ') + " ya existe.");
                }
            } else {

            }
        };
        modificarImpofedel = function (Destino, tipo, valordelselect) {

            var datos = valordelselect.split(";");
            if (tipo == 'imputados') {
                limpiarImputado();
                $("#ImputadosAccion").show();
                $("#divBotonActualizarImputado").html('<input type="submit" class="btn btn-primary" id="inputModificarImputado" value="Modificar Imputado" onclick=\'return modificarImpofedel_ok("' + Destino + '","' + tipo + '","' + valordelselect + '");\'>');
                $("#divBotonAgregaImputado").hide();
                if (datos[1] == 1) {

                    $("#cmbCereso").removeAttr("disabled");
                    $("#ImputadosFisica").slideDown();
                    $("#ImputadosMoral").slideUp();
                    $("#cmbTipoPersonaImputado").val(datos[1]);
                    $("#txtNombreFisicaI").val(datos[11]);
                    $("#txtPaternoFisicaI").val(datos[12]);
                    $("#txtMaternoFisicaI").val(datos[13]);
                    $("#cmbConsignacionI").val(datos[3]);
                    $("#cmbGeneroImputado").val(datos[4]);
                    $("#cmbEstadoI").val(datos[5]);
                    cargaMunicipioIm();
                    $("#cmbMunicipioI").val(datos[6]);
                    $("#txtDomicilioI").val(datos[7]);
                    $("#txtAlias").val(datos[8]);
                    $("#txtTelefonoI").val(datos[9]);
                    $("#cmbCereso").val(datos[10]);
                    if ($("#cmbConsignacionI").val() == 1) {

                        $("#cmbCereso").removeAttr("disabled");
                    } else {
                        $("#cmbCereso").attr('disabled', 'disabled');
                        $("#cmbCereso").val(1);
                    }

                    if ($("#idExhorto").val() != "" && $("#idExhortoGenerado").val() != "") {

                        $("#inputAgregarImputado").attr('disabled', 'disabled');
                        $("#inputModificarImputado").attr('disabled', 'disabled');
                    } else {

                        $("#inputAgregarImputado").attr('disabled', false);
                        $("#inputModificarImputado").attr('disabled', false);
                    }

                } else {

                    $("#ImputadosMoral").slideDown();
                    $("#ImputadosFisica").slideUp();
                    $("#cmbTipoPersonaImputado").val(datos[1]);
                    $("#txtNombreMoralI").val(datos[2]);
                    $("#cmbConsignacionIMoral").val(datos[3]);
                    $("#cmbEstadoMoralI").val(datos[5]);
                    cargaMunicipioMoralI(); //alert(datos[6]);
                    $("#cmbMunicipioMoralI").val(datos[6]);
                    $("#txtDomicilioMoralI").val(datos[7]);
                    if ($("#idExhorto").val() != "" && $("#idExhortoGenerado").val() != "") {

                        $("#inputAgregarImputado").attr('disabled', 'disabled');
                        $("#inputModificarImputado").attr('disabled', 'disabled');
                    } else {

                        $("#inputAgregarImputado").attr('disabled', false);
                        $("#inputModificarImputado").attr('disabled', false);
                    }
                }

            }
            if (tipo == "ofendidos") {
                limpiarOfendido();
                $("#OfendidosAccion").show();
                $("#divBotonActualizarOfendido").html('<input type="submit" class="btn btn-primary" id="inputModificarOfendido" value="Modificar Ofendido" onclick=\'return modificarImpofedel_ok("' + Destino + '","' + tipo + '","' + valordelselect + '");\'>');
                $("#divBotonAgregaOfendido").hide();
                if (datos[1] == 1) {

                    $("#OfendidosMoral").slideUp();
                    $("#OfendidosFisica").slideDown();
                    $("#cmbTipoPersonaOfendido").val(datos[1]);
                    $("#cmbGeneroOfendido").val(datos[3]);
                    $("#cmbEstadoO").val(datos[4]);
                    cargaMunicipioOf();
                    $("#cmbMunicipioO").val(datos[5]);
                    $("#txtDomicilioO").val(datos[6]);
                    $("#txtTelefonoO").val(datos[7]);
                    $("#txtNombreFisicaO").val(datos[8]);
                    $("#txtPaternoFisicaO").val(datos[9]);
                    $("#txtMaternoFisicaO").val(datos[10]);
                    if ($("#idExhorto").val() != "" && $("#idExhortoGenerado").val() != "") {

                        $("#inputAgregarOfendido").attr('disabled', 'disabled');
                        $("#inputModificarOfendido").attr('disabled', 'disabled');
                    } else {

                        $("#inputAgregarOfendido").attr('disabled', false);
                        $("#inputModificarOfendido").attr('disabled', false);
                    }

                } else {
                    $("#OfendidosMoral").slideDown();
                    $("#OfendidosFisica").slideUp();
                    $("#cmbTipoPersonaOfendido").val(datos[1]);
                    $("#txtNombreMoralO").val(datos[2]);
                    $("#cmbEstadoMoralO").val(datos[4]);
                    cargaMunicipioMoralO()
                    $("#cmbMunicipioMoralO").val(datos[5]);
                    $("#txtDomicilioMoralO").val(datos[6]);
                    if ($("#idExhorto").val() != "" && $("#idExhortoGenerado").val() != "") {

                        $("#inputAgregarOfendido").attr('disabled', 'disabled');
                        $("#inputModificarOfendido").attr('disabled', 'disabled');
                    } else {

                        $("#inputAgregarOfendido").attr('disabled', false);
                        $("#inputModificarOfendido").attr('disabled', false);
                    }
                }

            }
        };
        modificarImpofedel_ok = function (Destino, tipo, valordelselect) {

            var datos = valordelselect.split(";");
            if (datos[0] == 0) {

                if (tipo == "imputados") {

                    $(".required").remove();
                    if ($("#cmbTipoPersonaImputado").val() == 0 || $("#cmbTipoPersonaImputado").val() == "") {
                        Error($('#cmbTipoPersonaImputado'), "Selecciona Tipo Persona");
                        return false;
                    }
                    if ($("#cmbTipoPersonaImputado").val() == 1) {

                        if ($("#txtNombreFisicaI").val() == "" || $('#txtPaternoFisicaI').val() == "" || $('#txtMaternoFisicaI').val() == "") {
                            Error($('#txtNombreFisicaI'), "Ingresa Nombre Completo");
                            return false;
                        }
                        if ($("#cmbConsignacionI").val() == "" || $('#cmbConsignacionI').val() == 0) {
                            Error($('#cmbConsignacionI'), "Selecciona Consignacion");
                            return false;
                        }
                        if ($("#cmbGeneroImputado").val() == "" || $('#cmbGeneroImputado').val() == 0) {
                            Error($('#cmbGeneroImputado'), "Selecciona Genero");
                            return false;
                        }
                        if ($("#cmbEstadoI").val() == "" || $('#cmbEstadoI').val() == 0) {
                            Error($('#cmbEstadoI'), "Selecciona Estado");
                            return false;
                        }
                        if ($("#cmbMunicipioI").val() == "" || $('#cmbMunicipioI').val() == 0 || $('#cmbMunicipioI').val() == null) {
                            Error($('#cmbMunicipioI'), "Selecciona Municipio");
                            return false;
                        }
                        if ($("#txtDomicilioI").val() == "") {
                            Error($('#txtDomicilioI'), "Ingresa Domicilio");
                            return false;
                        }
                        if ($("#txtTelefonoI").val() != "") {

                            if (isNaN($('#txtTelefonoI').val()) || $('#txtTelefonoI').val() <= 0) {
                                Error($('#txtTelefonoI'), "Telefono incorrecto");
                                return false;
                            }
                            if ($('#txtTelefonoI').val().length != 10) {
                                Error($("#txtTelefonoI"), "Telefono incorrecto, se requieren 10 digitos");
                                return false;
                            }
                        }

                        if ($("#cmbConsignacionI").val() == 1) {
                            if ($("#cmbCereso").val() == "" || $('#cmbCereso').val() == 0) {
                                Error($('#cmbCereso'), "Selecciona Cereso");
                                return false;
                            }
                        }


                        cadena = "";
                        cadena = '0;' + $("#cmbTipoPersonaImputado").val() + ';'
                                + ';' + $("#cmbConsignacionI").val()
                                + ';' + $("#cmbGeneroImputado").val()
                                + ';' + $("#cmbEstadoI").val()
                                + ';' + $("#cmbMunicipioI").val()
                                + ';' + $("#txtDomicilioI").val().toUpperCase()
                                + ';' + $("#txtAlias").val().toUpperCase()
                                + ';' + $("#txtTelefonoI").val()
                                + ';' + $("#cmbCereso").val()
                                + ';' + $("#txtNombreFisicaI").val().toUpperCase()
                                + ';' + $("#txtPaternoFisicaI").val().toUpperCase()
                                + ';' + $("#txtMaternoFisicaI").val().toUpperCase();
                        var nombre = "";
                        nombre = $("#txtNombreFisicaI").val().toUpperCase()
                                + ' ' + $("#txtPaternoFisicaI").val().toUpperCase()
                                + ' ' + $("#txtMaternoFisicaI").val().toUpperCase();
                        $('#' + Destino + ' option').prop("selected", false);
                        $('#' + Destino + ' > option[value="' + valordelselect + '"]').prop("selected", true);
                        $('#' + Destino + ' > option[value="' + valordelselect + '"]').attr('value', cadena);
                        $('#' + Destino).find('option:selected').text(nombre);
                        $('#' + Destino + ' option').prop("selected", true);
                        tablaImputados(Destino, tipo);
                        limpiarImputado();
                    } else {

                        if ($("#txtNombreMoralI").val() == "") {
                            Error($('#txtNombreMoralI'), "Ingresa Nombre");
                            return false;
                        }
                        if ($("#cmbConsignacionIMoral").val() == "" || $("#cmbConsignacionIMoral").val() == 0) {
                            Error($('#cmbConsignacionIMoral'), "Selecciona Consignacion");
                            return false;
                        }
                        if ($("#cmbEstadoMoralI").val() == "" || $("#cmbEstadoMoralI").val() == 0) {
                            Error($('#cmbEstadoMoralI'), "Selecciona Estado");
                            return false;
                        }
                        if ($("#cmbMunicipioMoralI").val() == "" || $("#cmbMunicipioMoralI").val() == 0 || $("#cmbMunicipioMoralI").val() == null) {
                            Error($('#cmbMunicipioMoralI'), "Selecciona Municipio");
                            return false;
                        }
                        if ($("#txtDomicilioMoralI").val() == "") {
                            Error($('#txtDomicilioMoralI'), "Ingresa Domicilio");
                            return false;
                        }
                        var cadena = "";
                        cadena = '0;' + $("#cmbTipoPersonaImputado").val()
                                + ';' + $("#txtNombreMoralI").val().toUpperCase()
                                + ';' + $("#cmbConsignacionIMoral").val() + ';'
                                + ';' + $("#cmbEstadoMoralI").val()
                                + ';' + $("#cmbMunicipioMoralI").val()
                                + ';' + $("#txtDomicilioMoralI").val().toUpperCase();
                        $('#' + Destino + ' option').prop("selected", false);
                        $('#' + Destino + ' > option[value="' + valordelselect + '"]').prop("selected", true);
                        $('#' + Destino + ' > option[value="' + valordelselect + '"]').attr('value', cadena);
                        $('#' + Destino).find('option:selected').text($("#txtNombreMoralI").val().toUpperCase());
                        $('#' + Destino + ' option').prop("selected", true);
                        tablaImputados(Destino, tipo);
                        limpiarImputado();
                    }
                    if ($("#idExhorto").val() != "") {
                        $("#div_actualizar").html("<span class='Error'>* Guarde Cambios</span>");
                    }

                }
                if (tipo == "ofendidos") {
                    $(".required").remove();
                    if ($("#cmbTipoPersonaOfendido").val() == 0 || $("#cmbTipoPersonaOfendido").val() == "") {
                        Error($('#cmbTipoPersonaOfendido'), "Selecciona Tipo Persona");
                        return false;
                    }
                    if ($("#cmbTipoPersonaOfendido").val() == 1) {

                        if ($("#txtNombreFisicaO").val() == "" || $('#txtPaternoFisicaO').val() == "" || $('#txtMaternoFisicaO').val() == "") {
                            Error($('#txtNombreFisicaO'), "Ingresa Nombre Completo");
                            return false;
                        }
                        if ($("#cmbGeneroOfendido").val() == "" || $('#cmbGeneroOfendido').val() == 0) {
                            Error($('#cmbGeneroOfendido'), "Selecciona Genero");
                            return false;
                        }
                        if ($("#cmbEstadoO").val() == "" || $('#cmbEstadoO').val() == 0) {
                            Error($('#cmbEstadoO'), "Selecciona Estado");
                            return false;
                        }
                        if ($("#cmbMunicipioO").val() == "" || $('#cmbMunicipioO').val() == 0 || $('#cmbMunicipioO').val() == null) {
                            Error($('#cmbMunicipioO'), "Selecciona Municipio");
                            return false;
                        }
                        if ($("#txtDomicilioO").val() == "") {
                            Error($('#txtDomicilioO'), "Ingresa Domicilio");
                            return false;
                        }
                        if ($("#txtTelefonoO").val() != "") {

                            if (isNaN($('#txtTelefonoO').val()) || $('#txtTelefonoO').val() <= 0) {
                                Error($('#txtTelefonoO'), "Telefono incorrecto");
                                return false;
                            }
                            if ($('#txtTelefonoO').val().length != 10) {
                                Error($("#txtTelefonoO"), "Telefono incorrecto, se requieren 10 digitos");
                                return false;
                            }
                        }


                        cadena = "";
                        cadena = '0;' + $("#cmbTipoPersonaOfendido").val() + ';'
                                + ';' + $("#cmbGeneroOfendido").val()
                                + ';' + $("#cmbEstadoO").val()
                                + ';' + $("#cmbMunicipioO").val()
                                + ';' + $("#txtDomicilioO").val().toUpperCase()
                                + ';' + $("#txtTelefonoO").val()
                                + ';' + $("#txtNombreFisicaO").val().toUpperCase()
                                + ';' + $("#txtPaternoFisicaO").val().toUpperCase()
                                + ';' + $("#txtMaternoFisicaO").val().toUpperCase();
                        var nombre = "";
                        nombre = $("#txtNombreFisicaO").val().toUpperCase()
                                + ' ' + $("#txtPaternoFisicaO").val().toUpperCase()
                                + ' ' + $("#txtMaternoFisicaO").val().toUpperCase();
                        $('#' + Destino + ' option').prop("selected", false);
                        $('#' + Destino + ' > option[value="' + valordelselect + '"]').prop("selected", true);
                        $('#' + Destino + ' > option[value="' + valordelselect + '"]').attr('value', cadena);
                        $('#' + Destino).find('option:selected').text(nombre);
                        $('#' + Destino + ' option').prop("selected", true);
                        tablaOfendidos(Destino, tipo);
                        limpiarOfendido();
                    } else {

                        if ($("#txtNombreMoralO").val() == "") {
                            Error($('#txtNombreMoralO'), "Ingresa Nombre");
                            return false;
                        }
                        if ($("#cmbEstadoMoralO").val() == "" || $("#cmbEstadoMoralO").val() == 0) {
                            Error($('#cmbEstadoMoralO'), "Selecciona Estado");
                            return false;
                        }
                        if ($("#cmbMunicipioMoralO").val() == "" || $("#cmbMunicipioMoralO").val() == 0 || $("#cmbMunicipioMoralO").val() == null) {
                            Error($('#cmbMunicipioMoralO'), "Selecciona Domicilio");
                            return false;
                        }
                        if ($("#txtDomicilioMoralO").val() == "") {
                            Error($('#txtDomicilioMoralO'), "Ingresa Domicilio");
                            return false;
                        }

                        var cadena = "";
                        cadena = '0;' + $("#cmbTipoPersonaOfendido").val()
                                + ';' + $("#txtNombreMoralO").val().toUpperCase()
                                + ';;' + $("#cmbEstadoMoralO").val()
                                + ';' + $("#cmbMunicipioMoralO").val()
                                + ';' + $("#txtDomicilioMoralO").val().toUpperCase();
                        $('#' + Destino + ' option').prop("selected", false);
                        $('#' + Destino + ' > option[value="' + valordelselect + '"]').prop("selected", true);
                        $('#' + Destino + ' > option[value="' + valordelselect + '"]').attr('value', cadena);
                        $('#' + Destino).find('option:selected').text($("#txtNombreMoralO").val().toUpperCase());
                        $('#' + Destino + ' option').prop("selected", true);
                        tablaOfendidos(Destino, tipo);
                        limpiarOfendido();
                    }

                    if ($("#idExhorto").val() != "") {
                        $("#div_actualizar").html("<span class='Error'>* Guarde Cambios</span>");
                    }
                }

            } else {

                $(".required").remove();
                $('#' + Destino + ' option').prop("selected", false);
                $('#' + Destino + ' > option[value="' + valordelselect + '"]').prop("selected", true);
                var idExhorto = $("#idExhorto").val();
                var cadena = $('#' + Destino).val();
                var JsonLista = "";
                var listaImputados = new Array();
                var listaOfendidos = new Array();
                var listaDelitos = new Array();
                var datos = cadena.toString().split(";");
                var telefono;
                var alias;
                if (tipo == "imputados") {

                    if ($("#cmbTipoPersonaImputado").val() == 0 || $("#cmbTipoPersonaImputado").val() == "") {
                        Error($('#cmbTipoPersonaImputado'), "Selecciona Tipo Persona");
                        return false;
                    }
                    if ($("#cmbTipoPersonaImputado").val() == 1) {

                        if ($("#txtNombreFisicaI").val() == "" || $('#txtPaternoFisicaI').val() == "" || $('#txtMaternoFisicaI').val() == "") {
                            Error($('#txtNombreFisicaI'), "Ingresa Nombre");
                            return false;
                        }
                        if ($("#cmbConsignacionI").val() == "" || $('#cmbConsignacionI').val() == 0) {
                            Error($('#cmbConsignacionI'), "Selecciona Consignacion");
                            return false;
                        }
                        if ($("#cmbGeneroImputado").val() == "" || $('#cmbGeneroImputado').val() == 0) {
                            Error($('#cmbGeneroImputado'), "Selecciona Genero");
                            return false;
                        }
                        if ($("#cmbEstadoI").val() == "" || $('#cmbEstadoI').val() == 0) {
                            Error($('#cmbEstadoI'), "Selecciona Estado");
                            return false;
                        }
                        if ($("#cmbMunicipioI").val() == "" || $('#cmbMunicipioI').val() == 0 || $('#cmbMunicipioI').val() == null) {
                            Error($('#cmbMunicipioI'), "Selecciona Municipio");
                            return false;
                        }
                        if ($("#txtDomicilioI").val() == "") {
                            Error($('#txtDomicilioI'), "Ingresa Domicilio");
                            return false;
                        }
                        if ($("#txtTelefonoI").val() != "") {
                            if (isNaN($('#txtTelefonoI').val()) || $('#txtTelefonoI').val() <= 0) {
                                Error($('#txtTelefonoI'), "Telefono incorrecto");
                                return false;
                            }
                            if ($('#txtTelefonoI').val().length != 10) {
                                Error($("#txtTelefonoI"), "Telefono incorrecto, se requieren 10 digitos");
                                return false;
                            }
                            telefono = $("#txtTelefonoI").val();
                        } else {
                            telefono = '0';
                        }
                        alias = $("#txtAlias").val().toUpperCase();
                        if (alias == "") {
                            alias = '-';
                        }
                        if ($("#cmbConsignacionI").val() == 1) {
                            if ($("#cmbCereso").val() == "" || $('#cmbCereso').val() == 0) {
                                Error($('#cmbCereso'), "Selecciona Cereso");
                                return false;
                            }
                        }

                        listaImputados.push(new Imputados(datos[0], $("#cmbTipoPersonaImputado").val(), datos[2],
                                $("#cmbConsignacionI").val(),
                                $("#cmbGeneroImputado").val(), $("#cmbEstadoI").val(), $("#cmbMunicipioI").val(),
                                $("#txtDomicilioI").val().toUpperCase(), alias,
                                telefono, $("#cmbCereso").val(),
                                $("#txtNombreFisicaI").val().toUpperCase(),
                                $("#txtPaternoFisicaI").val().toUpperCase(),
                                $("#txtMaternoFisicaI").val().toUpperCase()));
                        if (listaImputados.length > 0) {
                            JsonLista = JSON.stringify(listaImputados);
                            JsonLista = decodeURIComponent(JsonLista);
                        }

                    } else {

                        if ($("#txtNombreMoralI").val() == "") {
                            Error($('#txtNombreMoralI'), "Ingresa Nombre");
                            return false;
                        }
                        if ($("#cmbConsignacionIMoral").val() == "" || $("#cmbConsignacionIMoral").val() == 0) {
                            Error($('#cmbConsignacionIMoral'), "Selecciona Consignacion");
                            return false;
                        }
                        if ($("#cmbEstadoMoralI").val() == "" || $("#cmbEstadoMoralI").val() == 0) {
                            Error($('#cmbEstadoMoralI'), "Selecciona Estado");
                            return false;
                        }
                        if ($("#cmbMunicipioMoralI").val() == "" || $("#cmbMunicipioMoralI").val() == 0 || $("#cmbMunicipioMoralI").val() == null) {
                            Error($('#cmbMunicipioMoralI'), "Selecciona Municipio");
                            return false;
                        }
                        if ($("#txtDomicilioMoralI").val() == "") {
                            Error($('#txtDomicilioMoralI'), "Ingresa Domicilio");
                            return false;
                        }

                        listaImputados.push(new Imputados(datos[0], $("#cmbTipoPersonaImputado").val(),
                                $("#txtNombreMoralI").val().toUpperCase(),
                                $("#cmbConsignacionIMoral").val(), datos[4], $("#cmbEstadoMoralI").val(),
                                $("#cmbMunicipioMoralI").val(),
                                $("#txtDomicilioMoralI").val().toUpperCase(), datos[8],
                                datos[9], datos[10], datos[11], datos[12], datos[13]));
                        if (listaImputados.length > 0) {
                            JsonLista = JSON.stringify(listaImputados);
                            JsonLista = decodeURIComponent(JsonLista);
                        }

                    }

                    if ($("#idExhorto").val() != "") {
                        $("#div_actualizar").html("<span class='Error'>* Guarde Cambios</span>");
                    }

                }
                if (tipo == "ofendidos") {

                    if ($("#cmbTipoPersonaOfendido").val() == 0 || $("#cmbTipoPersonaOfendido").val() == "") {
                        Error($('#cmbTipoPersonaOfendido'), "Selecciona Tipo Persona");
                        return false;
                    }
                    if ($("#cmbTipoPersonaOfendido").val() == 1) {

                        if ($("#txtNombreFisicaO").val() == "" || $('#txtPaternoFisicaO').val() == "" || $('#txtMaternoFisicaO').val() == "") {
                            Error($('#txtNombreFisicaO'), "Ingresa Nombre");
                            return false;
                        }
                        if ($("#cmbGeneroOfendido").val() == "" || $('#cmbGeneroOfendido').val() == 0) {
                            Error($('#cmbGeneroOfendido'), "Selecciona Genero");
                            return false;
                        }
                        if ($("#cmbEstadoO").val() == "" || $('#cmbEstadoO').val() == 0) {
                            Error($('#cmbEstadoO'), "Selecciona Estado");
                            return false;
                        }
                        if ($("#cmbMunicipioO").val() == "" || $('#cmbMunicipioO').val() == 0 || $('#cmbMunicipioO').val() == null) {
                            Error($('#cmbMunicipioO'), "Selecciona Municipio");
                            return false;
                        }
                        if ($("#txtDomicilioO").val() == "") {
                            Error($('#txtDomicilioO'), "Ingresa Domicilio");
                            return false;
                        }
                        if ($("#txtTelefonoO").val() != "") {
                            if (isNaN($('#txtTelefonoO').val()) || $('#txtTelefonoO').val() <= 0) {
                                Error($('#txtTelefonoO'), "Telefono incorrecto");
                                return false;
                            }
                            if ($('#txtTelefonoO').val().length != 10) {
                                Error($("#txtTelefonoO"), "Telefono incorrecto, se requieren 10 digitos");
                                return false;
                            }
                            telefono = $('#txtTelefonoO').val();
                        } else {
                            telefono = '0';
                        }

                        listaOfendidos.push(new Ofendidos(datos[0], $("#cmbTipoPersonaOfendido").val(), datos[2],
                                $("#cmbGeneroOfendido").val(), $("#cmbEstadoO").val(), $("#cmbMunicipioO").val(),
                                $("#txtDomicilioO").val().toUpperCase(), telefono,
                                $("#txtNombreFisicaO").val().toUpperCase(),
                                $("#txtPaternoFisicaO").val().toUpperCase(),
                                $("#txtMaternoFisicaO").val().toUpperCase()));
                        if (listaOfendidos.length > 0) {
                            JsonLista = JSON.stringify(listaOfendidos);
                            JsonLista = decodeURIComponent(JsonLista);
                        }

                    } else {

                        if ($("#txtNombreMoralO").val() == "") {
                            Error($('#txtNombreMoralO'), "Ingresa Nombre");
                            return false;
                        }
                        if ($("#cmbEstadoMoralO").val() == "" || $("#cmbEstadoMoralO").val() == 0) {
                            Error($('#cmbEstadoMoralO'), "Selecciona Estado");
                            return false;
                        }
                        if ($("#cmbMunicipioMoralO").val() == "" || $("#cmbMunicipioMoralO").val() == 0 || $("#cmbMunicipioMoralO").val() == null) {
                            Error($('#cmbMunicipioMoralO'), "Selecciona Domicilio");
                            return false;
                        }
                        if ($("#txtDomicilioMoralO").val() == "") {
                            Error($('#txtDomicilioMoralO'), "Ingresa Domicilio");
                            return false;
                        }

                        listaOfendidos.push(new Ofendidos(datos[0], $("#cmbTipoPersonaOfendido").val(), $("#txtNombreMoralO").val().toUpperCase(),
                                datos[3], $("#cmbEstadoMoralO").val(), $("#cmbMunicipioMoralO").val(),
                                $("#txtDomicilioMoralO").val().toUpperCase(), datos[7], datos[8],
                                datos[9], datos[10]));
                        if (listaOfendidos.length > 0) {
                            JsonLista = JSON.stringify(listaOfendidos);
                            JsonLista = decodeURIComponent(JsonLista);
                        }

                    }

                }
                if (tipo == "delitos") {

                    listaDelitos.push(new Delitos(datos[1]));
                    if (listaDelitos.length > 0) {
                        JsonLista = JSON.stringify(listaDelitos);
                        JsonLista = decodeURIComponent(JsonLista);
                    }
                }

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        idExhorto: $("#idExhorto").val(),
                        lista_impofedel: JsonLista,
                        tipo: tipo,
                        accion: 'actualizar_impofedel'
                    },
                    success: function (data) {

                        if (data.estatus == "ok") {

                            if (tipo == "imputados") {

                                if ($("#cmbTipoPersonaImputado").val() == 1) {

                                    cadena = "";
                                    cadena = datos[0] + ';' + $("#cmbTipoPersonaImputado").val() + ';'
                                            + ';' + $("#cmbConsignacionI").val()
                                            + ';' + $("#cmbGeneroImputado").val()
                                            + ';' + $("#cmbEstadoI").val()
                                            + ';' + $("#cmbMunicipioI").val()
                                            + ';' + $("#txtDomicilioI").val().toUpperCase()
                                            + ';' + $("#txtAlias").val().toUpperCase()
                                            + ';' + $("#txtTelefonoI").val()
                                            + ';' + $("#cmbCereso").val()
                                            + ';' + $("#txtNombreFisicaI").val().toUpperCase()
                                            + ';' + $("#txtPaternoFisicaI").val().toUpperCase()
                                            + ';' + $("#txtMaternoFisicaI").val().toUpperCase();
                                    var nombre = "";
                                    nombre = $("#txtNombreFisicaI").val().toUpperCase()
                                            + ' ' + $("#txtPaternoFisicaI").val().toUpperCase()
                                            + ' ' + $("#txtMaternoFisicaI").val().toUpperCase();
                                    $('#' + Destino + ' > option[value="' + valordelselect + '"]').attr('value', cadena);
                                    $('#' + Destino).find('option:selected').text(nombre);
                                } else {

                                    var cadena = "";
                                    cadena = datos[0] + ';' + $("#cmbTipoPersonaImputado").val()
                                            + ';' + $("#txtNombreMoralI").val().toUpperCase()
                                            + ';' + $("#cmbConsignacionIMoral").val() + ';'
                                            + ';' + $("#cmbEstadoMoralI").val()
                                            + ';' + $("#cmbMunicipioMoralI").val()
                                            + ';' + $("#txtDomicilioMoralI").val().toUpperCase();
                                    $('#' + Destino + ' > option[value="' + valordelselect + '"]').attr('value', cadena);
                                    $('#' + Destino).find('option:selected').text($("#txtNombreMoralI").val().toUpperCase());
                                }
                                limpiarImputado(Destino, tipo);
                                showMessage(data.mensaje, 'divAlertSuccesImputado');
                            }
                            if (tipo == "ofendidos") {

                                if ($("#cmbTipoPersonaOfendido").val() == 1) {

                                    cadena = "";
                                    cadena = datos[0] + ';' + $("#cmbTipoPersonaOfendido").val() + ';'
                                            + ';' + $("#cmbGeneroOfendido").val()
                                            + ';' + $("#cmbEstadoO").val()
                                            + ';' + $("#cmbMunicipioO").val()
                                            + ';' + $("#txtDomicilioO").val().toUpperCase()
                                            + ';' + $("#txtTelefonoO").val()
                                            + ';' + $("#txtNombreFisicaO").val().toUpperCase()
                                            + ';' + $("#txtPaternoFisicaO").val().toUpperCase()
                                            + ';' + $("#txtMaternoFisicaO").val().toUpperCase();
                                    var nombre = "";
                                    nombre = $("#txtNombreFisicaO").val().toUpperCase()
                                            + ' ' + $("#txtPaternoFisicaO").val().toUpperCase()
                                            + ' ' + $("#txtMaternoFisicaO").val().toUpperCase();
                                    $('#' + Destino + ' > option[value="' + valordelselect + '"]').attr('value', cadena);
                                    $('#' + Destino).find('option:selected').text(nombre);
                                } else {

                                    var cadena = "";
                                    cadena = datos[0] + ';' + $("#cmbTipoPersonaOfendido").val()
                                            + ';' + $("#txtNombreMoralO").val().toUpperCase()
                                            + ';;' + $("#cmbEstadoMoralO").val()
                                            + ';' + $("#cmbMunicipioMoralO").val()
                                            + ';' + $("#txtDomicilioMoralO").val().toUpperCase();
                                    $('#' + Destino + ' > option[value="' + valordelselect + '"]').attr('value', cadena);
                                    $('#' + Destino).find('option:selected').text($("#txtNombreMoralO").val().toUpperCase());
                                }
                                limpiarOfendido(Destino, tipo);
                                showMessage(data.mensaje, 'divAlertSuccesOfendido');
                            }
                            tablas(Destino, tipo);
                        } else {
                            showMessage(data.mensaje, 'divAlertDagerImputado');
                            showMessage(data.mensaje, 'divAlertDagerOfendido');
                        }
                    }

                });
            }
        };
        limpiarImputado = function (Destino, tipo) {

            $(".required").remove();
            $("#txtNombreMoralI").val('');
            $("#cmbConsignacionIMoral").val(0);
            $("#cmbEstadoMoralI").val(0);
            $("#cmbMunicipioMoralI").val(0);
            $("#txtDomicilioMoralI").val('');
            $("#txtNombreFisicaI").val('');
            $("#txtPaternoFisicaI").val('');
            $("#txtMaternoFisicaI").val('');
            $("#cmbConsignacionI").val(0);
            $("#cmbGeneroImputado").val(0);
            $("#cmbEstadoI").val(0);
            $("#cmbMunicipioI").val(0);
            $("#txtDomicilioI").val('');
            $("#txtAlias").val('');
            $("#txtTelefonoI").val('');
            $("#cmbCereso").val(0);
            $("#cmbCereso").removeAttr("disabled");
            $("#divBotonActualizarImputado").html('');
            $("#divBotonAgregaImputado").show();
            $('#' + Destino + ' option').prop("selected", true);
        };
        limpiarOfendido = function (Destino, tipo) {

            $("#cmbGeneroOfendido").val(0);
            $("#cmbEstadoO").val(0);
            $("#cmbMunicipioO").val(0);
            $("#txtDomicilioO").val('');
            $("#txtTelefonoO").val('');
            $("#txtNombreFisicaO").val('');
            $("#txtPaternoFisicaO").val('');
            $("#txtMaternoFisicaO").val('');
            $("#txtNombreMoralO").val('');
            $("#cmbEstadoMoralO").val(0);
            $("#cmbMunicipioMoralO").val(0);
            $("#txtDomicilioMoralO").val('');
            $("#divBotonActualizarOfendido").html('');
            $("#divBotonAgregaOfendido").show();
            $('#' + Destino + ' option').prop("selected", true);
        };
        borraPersona = function (Destino, tipo, valordelselect,cmbTestigo) {


            $('#' + Destino + ' option').prop("selected", false);
            if (valordelselect != '') {
                $('#' + Destino + ' > option[value="' + valordelselect + '"]').prop("selected", true);
                if(cmbTestigo != ""){
                    $('#' + cmbTestigo + ' > option[value="' + valordelselect + '"]').prop("selected", true);
                }
            }

            if ($("#idExhorto").val() == "") {

                if (confirm("Esta seguro de eliminar ? a:\n"
                        + $('#' + Destino).find('option:selected').text())) {
                    
                    $('#' + Destino).find('option:selected').remove().end();
                    if(cmbTestigo != ""){
                        $('#' + cmbTestigo).find('option:selected').remove().end();
                        if(cmbTestigo = "cmbImputadosAgregados"){
                            for (var i = 0; i < listaTestigosI.length; i++) {
                                if(listaTestigosI[i].imputadoCadena == valordelselect ){
                                    listaTestigosI[i].activo = "N";
                                }
                            }
                            $("#testigosTbody").html(formarTablaTestigoI());
                        }
                        if(cmbTestigo = "cmbOfendidosAgregados"){
                            for (var i = 0; i < listaTestigosO.length; i++) {
                                if(listaTestigosO[i].ofendidoCadena == valordelselect ){
                                    listaTestigosO[i].activo = "N";
                                }
                            }
                            $("#testigosTbodyO").html(formarTablaTestigoO());
                        }
                    }
                }
                $('#' + Destino + ' option').prop("selected", true);
                tablas(Destino, tipo);
            } else {

                if (confirm("Esta seguro de eliminar ? a:\n"
                        + $('#' + Destino).find('option:selected').text())) {

                    var idExhorto = $("#idExhorto").val();
                    var cadena = $('#' + Destino).val();
                    var JsonLista = "";
                    var listaImputados = new Array();
                    var listaOfendidos = new Array();
                    var listaDelitos = new Array();
                    if (tipo == "imputados") {
                        if(cmbTestigo = "cmbImputadosAgregados"){
                            for (var i = 0; i < listaTestigosI.length; i++) {
                                if(listaTestigosI[i].imputadoCadena == valordelselect ){
                                    listaTestigosI[i].activo = "N";
                                }
                            }
                            $("#testigosTbody").html(formarTablaTestigoI());
                        }
                        var datos = cadena.toString().split(";");
                        listaImputados.push(new Imputados(datos[0], datos[1], datos[2], datos[3],
                                datos[4], datos[5], datos[6], datos[7], datos[8],
                                datos[9], datos[10], datos[11], datos[12], datos[13]));
                        if (listaImputados.length > 0) {
                            JsonLista = JSON.stringify(listaImputados);
                            JsonLista = decodeURIComponent(JsonLista);
                        }
                    }
                    if (tipo == "ofendidos") {
                        if(cmbTestigo = "cmbOfendidosAgregados"){
                            for (var i = 0; i < listaTestigosO.length; i++) {
                                if(listaTestigosO[i].ofendidoCadena == valordelselect ){
                                    listaTestigosO[i].activo = "N";
                                }
                            }
                            $("#testigosTbodyO").html(formarTablaTestigoO());
                        }
                        var datos = cadena.toString().split(";");
                        listaOfendidos.push(new Ofendidos(datos[0], datos[1], datos[2], datos[3],
                                datos[4], datos[5], datos[6], datos[7], datos[8],
                                datos[9], datos[10]));
                        if (listaOfendidos.length > 0) {
                            JsonLista = JSON.stringify(listaOfendidos);
                            JsonLista = decodeURIComponent(JsonLista);
                        }
                    }
                    if (tipo == "delitos") {

                        var datos = cadena.toString().split(";");
                        listaDelitos.push(new Delitos(datos[0], datos[1]));
                        if (listaDelitos.length > 0) {
                            JsonLista = JSON.stringify(listaDelitos);
                            JsonLista = decodeURIComponent(JsonLista);
                        }
                    }

                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {
                            idExhorto: $("#idExhorto").val(),
                            lista_impofedel: JsonLista,
                            tipo: tipo,
                            accion: 'eliminar_impofedel'
                        },
                        success: function (data) {

                            if (data.estatus == "ok") {

                                $('#' + Destino).find('option:selected').remove().end();
                                $('#' + Destino + ' option').prop("selected", true);
                                if (tipo == "imputados") {

                                    showMessage(data.mensaje, 'divAlertSuccesImputado');
                                    if ($("#idExhorto").val() != "") {
                                        $("#div_actualizar").html("<span class='Error'>* Guarde Cambios</span>");
                                    }
                                }
                                if (tipo == "ofendidos") {

                                    showMessage(data.mensaje, 'divAlertSuccesOfendido');
                                }
                                if (tipo == "delitos") {

                                    showMessage(data.mensaje, 'divAlertSuccesDelito');
                                }

                                tablas(Destino, tipo);
                            } else {
                                console.log(data.mensaje);
                                showMessage(data.mensaje, 'divAlertDagerImputado');
                                showMessage(data.mensaje, 'divAlertSuccesOfendido');
                                showMessage(data.mensaje, 'divAlertSuccesDelito');
                            }
                        }

                    });
                }

            }
        };
        changeLabel = function (objOption, clave) {

            if ($("#cmbTipoCarpeta").val() == 0 || $("#cmbTipoCarpeta").val() == "") {

                $("#lblRelationName" + clave).html("No. Causa <span class='requerido'>(*)</span>");
            } else {
                $("#lblRelationName" + clave).html("No. " + $("#" + objOption.id + " option:selected").text() + " <span class='requerido'>(*)</span>");
            }
        };
        changeLabel2 = function (objOption, clave) {

            if ($("#cmbTipoCarpetaConsulta").val() == 0 || $("#cmbTipoCarpetaConsulta").val() == "") {

                $("#lblRelationName2" + clave).html("No. Causa");
            } else {

                $("#lblRelationName2" + clave).html("No. " + $("#" + objOption.id + " option:selected").text() + "");
            }
        };
        changeLabelG = function (objOption, clave) {

            if ($("#cmbTipoCarpetaG").val() == 0 || $("#cmbTipoCarpetaG").val() == "") {

                $("#lblRelationNameG" + clave).html("No. Causa <span class='requerido'>(*)</span>");
            } else {

                $("#lblRelationNameG" + clave).html("No. " + $("#" + objOption.id + " option:selected").text() + " <span class='requerido'>(*)</span>");
            }
        };
        changeLabelGConsulta = function (objOption, clave) {

            if ($("#cmbTipoCarpetaGConsulta").val() == 0 || $("#cmbTipoCarpetaGConsulta").val() == "") {

                $("#lblRelationNameGConsulta" + clave).html("No. Causa");
            } else {

                $("#lblRelationNameGConsulta" + clave).html("No. " + $("#" + objOption.id + " option:selected").text() + "");
            }
        };
        validaExhorto = function () {
            $(".required").remove();
            var mensaje = "";
            var error = true;
    //        if ($('#cmbTipoCarpeta').val() == "" || $('#cmbTipoCarpeta').val() == "0") {
    //            Error($('#cmbTipoCarpeta'), "Selecciona Tipo de Carpeta");
    //            error = false;
    //        }
    //        if ($('#txtNumeroC').val() == "" || $('#txtAnioC').val() == "") {
    //            Error($('#txtNumeroC'), "Ingresa Numero y A\u00f1o de Causa");
    //            error = false;
    //        }
    //        if (isNaN($('#txtNumeroC').val()) || $('#txtNumeroC').val() <= 0) {
    //            Error($('#txtNumeroC'), "Numero incorrecto");
    //            error = false;
    //        }
    //        if ($('#txtAnioC').val().length != 4 || $('#txtAnioC').val() < 2000) {
    //            Error($('#txtAnioC'), " A\u00f1o de causa incorrecto");
    //            error = false;
    ////        }
    //        if ($('#txtOficio').val() == "" || $('#txtAnioO').val() == "") {
    //            Error($('#txtOficio'), "Ingresa Numero y A\u00f1o de Oficio");
    //            error = false;
    //        }
    //        if (isNaN($('#txtOficio').val()) || $('#txtOficio').val() <= 0) {
    //            Error($('#txtOficio'), "Numero incorrecto");
    //            error = false;
    //        }
            if ($('#txtAnioO').val() != "") {
                if ($('#txtAnioO').val().length != 4 || $('#txtAnioO').val() < 2000) {
                    Error($('#txtAnioO'), " A\u00f1o de oficio incorrecto");
                    error = false;
                }
            }
            if ($('#txtSintesis').val() == "") {
                Error($('#txtSintesis'), "Ingresa Sintesis");
                error = false;
            }
            if ($('#cmbEstado').val() == "" || $('#cmbEstado').val() == "0") {
                Error($('#cmbEstado'), "Selecciona Estado");
                error = false;
            }

            if ($('#cmbEstado').val() != 15 && $('#txtJuzgadoP').val() == "") {
                Error($('#txtJuzgadoP'), "Ingresa Juzgado Procedencia");
                error = false;
            }
            if ($('#cmbEstado').val() == 15 && ($("#cmbJuzgado").val() == "" || $("#cmbJuzgado").val() == 0 || $("#cmbJuzgado").val() == null)) {
                Error($('#cmbJuzgado'), "Selecciona Juzgado");
                error = false;
            }
            if ($('#cmbEstatus').val() == "" || $('#cmbEstatus').val() == "0") {
                Error($('#cmbEstatus'), "Selecciona Estatus");
                error = false;
            }
            if ($('#lstOfendidos').val() == null && $('#lstImputados').val() == null) {
                Error($('#divTablaImputados'), "Ingresa al menos un Imputado");
                var elemento = document.querySelector('#acordeonImputados');
                var valorAcordeon = elemento.getAttribute('aria-expanded');
                if (valorAcordeon == 'false') {
                    $('#acordeonImputados').click();
                }
                Error($('#divTablaOfendidos'), "Ingresa al menos un Ofendido");
                var elemento = document.querySelector('#acordeonOfendidos');
                var valorAcordeon = elemento.getAttribute('aria-expanded');
                if (valorAcordeon == 'false') {
                    $('#acordeonOfendidos').click();
                }
                error = false;
                return false;
            } else {
                if ($('#lstImputados').val() != null) {
                    $('select#lstImputados').find('option').each(function () {
                        var datos = this.value.split(";");
                        var nombre;
                        if (datos[1] == 1) {

                            nombre = datos[11] + " " + datos[12] + " " + datos[13];
                            if (datos[11] == "") {
                                Error($('#divTablaImputados'), "Debe Ingresar Nombre" + " en " + nombre);
                                error = false;
                            }
                            if (datos[12] == "") {
                                Error($('#divTablaImputados'), "Debe Ingresar Paterno" + " en " + nombre);
                                error = false;
                            }
                            if (datos[13] == "") {
                                Error($('#divTablaImputados'), "Debe Ingresar Materno" + " en " + nombre);
                                error = false;
                            }
                            if (datos[3] == 0) {
                                Error($('#divTablaImputados'), "Debe Seleccionar Consignacion" + " en " + nombre);
                                error = false;
                            }
                            if (datos[4] == 0) {
                                Error($('#divTablaImputados'), "Debe Seleccionar Genero" + " en " + nombre);
                                error = false;
                            }
                            if (datos[5] == 0) {
                                Error($('#divTablaImputados'), "Debe Seleccionar Estado" + " en " + nombre);
                                error = false;
                            }
                            if (datos[6] == 0) {
                                Error($('#divTablaImputados'), "Debe Seleccionar municipio" + " en " + nombre);
                                error = false;
                            }

                        } else {
                            nombre = datos[2];
                            if (datos[2] == "") {
                                Error($('#divTablaImputados'), "Debe Ingresar Nombre");
                                error = false;
                            }
                            if (datos[3] == 0) {
                                Error($('#divTablaImputados'), "Debe Seleccionar Consignacion" + " en " + nombre);
                                error = false;
                            }
                            if (datos[5] == 0) {
                                Error($('#divTablaImputados'), "Debe Seleccionar Estado" + " en " + nombre);
                                error = false;
                            }
                            if (datos[6] == 0) {
                                Error($('#divTablaImputados'), "Debe Seleccionar municipio" + " en " + nombre);
                                error = false;
                            }

                        }

                    });
                }
                if ($('#lstOfendidos').val() != null) {

                    $('select#lstOfendidos').find('option').each(function () {
                        var datos = this.value.split(";");
                        var nombre;
                        if (datos[1] == 1) {
                            nombre = datos[11] + " " + datos[12] + " " + datos[13];
                            if (datos[3] == 0) {
                                Error($('#divTablaOfendidos'), "Debe Seleccionar Genero" + " en " + nombre);
                                error = false;
                            }
                            if (datos[4] == 0) {
                                Error($('#divTablaOfendidos'), "Debe Seleccionar Estado" + " en " + nombre);
                                error = false;
                            }
                            if (datos[5] == 0) {
                                Error($('#divTablaOfendidos'), "Debe Seleccionar municipio" + " en " + nombre);
                                error = false;
                            }
                            if (datos[8] == 0) {
                                Error($('#divTablaOfendidos'), "Debe Ingresar Nombre" + " en " + nombre);
                                error = false;
                            }
                            if (datos[9] == 0) {
                                Error($('#divTablaOfendidos'), "Debe Ingresar Paterno" + " en " + nombre);
                                error = false;
                            }
                            if (datos[10] == 0) {
                                Error($('#divTablaOfendidos'), "Debe Ingresar Materno" + " en " + nombre);
                                error = false;
                            }

                        } else {

                            nombre = datos[2];
                            if (datos[2] == 0) {
                                Error($('#divTablaOfendidos'), "Debe Ingresar Nombre");
                                error = false;
                            }

                            if (datos[4] == 0) {
                                Error($('#divTablaOfendidos'), "Debe Seleccionar Estado" + " en " + nombre);
                                error = false;
                            }
                            if (datos[5] == 0) {
                                Error($('#divTablaOfendidos'), "Debe Seleccionar municipio" + " en " + nombre);
                                error = false;
                            }

                        }

                    });
                }
            }
            if ($('#lstDelitos').val() == null) {
                Error($('#divTablaDelitos'), "Ingresa al menos un Delito");
                var elemento = document.querySelector('#acordeonDelitos');
                var valorAcordeon = elemento.getAttribute('aria-expanded');
                if (valorAcordeon == 'false') {
                    $('#acordeonDelitos').click();
                }
                error = false;
                return;
            }
            if (error == false) {

                showMessage('Ingresa Los Campos Mencionados', 'divAlertWarning');
            }
            if (!error) {
                // alert(mensaje);
            }
            return error;
        };
        Error = function (campo, mensaje) {

            campo.parent().append("<br class='required'><label class='Error required'>* " + mensaje + "</label>");
        };
        imprimirER = function (idExhorto) {

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    idExhorto: idExhorto,
                    pagina: 1,
                    totalRegistros: 1,
                    activo: 'S',
                    imprimir: 1,
                    accion: 'consultar'
                },
                success: function (data) {

                    var table = "";
                    $.each(data.data, function (key, value) {
                        var carp = value.carpetaInv == null ? "" : value.carpetaInv;
                        var separa = value.fechaRegistro.split(" ");
                        var fecha = separa[0];
                        var hrs = separa[1] + ' hrs.';
                        fecha = fecha.split("-");
                        var dia = fecha[2];
                        var mes = fecha[1];
                        var anio = fecha[0];
                        var juzgado = "";
                        if (value.cveJuzgadoProcedencia != "" && value.cveJuzgadoProcedencia != "0") {
                            juzgado = value.desJuzgadoProcedencia;
                        } else {
                            juzgado = value.JuzgadoProcedencia;
                        }
                        table += '<table width="800" border="0">';
                        table += '  <tr>';
                        table += '    <td width="100" rowspan="3" align="left"><img src="img/EscudoEstadoMexico.png" width="80" height="80" /></td>';
                        table += '    <td width="470"><strong>Gobierno del Estado de Mexico</strong></td>';
                        table += '    <td width="150" rowspan="3" align="right"><img src="img/EscudoPoderJudicial.png" width="70" height="80" /></td>';
                        table += '  </tr>';
                        table += '  <tr>';
                        table += '    <td>Poder Judicial</td>';
                        table += '  </tr>';
                        table += '  <tr>';
                        table += '    <td>Consejo de la Judicatura</td>';
                        table += '  </tr>';
                        table += '</table>';
                        table += '<div style="padding:4px;color:#FFF;background:#066;';
                        table += '        border-radius: 5px;';
                        table += '        -moz-border-radius: 5px;';
                        table += '        -webkit-border-radius: 5px; ';
                        table += '        width:792px">';
                        table += '         <strong>Comprobante de Exhorto</strong></div>';
                        table += '<p></p> ';
                        table += '<table width="800" border="0" style="border: solid #033;';
                        table += '                                    border-radius: 5px;';
                        table += '                                    -moz-border-radius: 5px;';
                        table += '                                    -webkit-border-radius: 5px; font-size:13px">';
                        table += '  <tr>';
                        table += '    <td width="160"><strong>N&uacute;mero Exhorto :</strong></td>';
                        table += '    <td width="200">' + value.numExhorto + '/' + value.aniExhorto + '</td>';
                        table += '    <td width="80" ></td>';
                        table += '    <td width="350" align="right"><strong>Fecha de Alta :</strong>' + dia + '/' + mes + '/' + anio + ' ' + hrs + '</td>';
                        table += '  </tr>';
                        table += '  <tr>';
                        table += '    <td><strong>N&uacute;mero de Causa :</strong></td>';
                        if (value.numero != null && value.anio != null) {
                            table += '    <td>' + value.numero + '/' + value.anio + '</td>';
                        } else {
                            table += '    <td>&nbsp;</td>';
                        }
                        table += '    <td>&nbsp;</td>';
                        table += '    <td>&nbsp;</td>';
                        table += '  </tr>';
                        table += '  <tr>';
                        table += '    <td><strong>N&uacute;mero de Oficio :</strong></td>';
                        var numOf = "";
                        var aniOf = "";
                        if(value.numOficio != null  ){
                            numOf = value.numOficio
                        }
                        if(value.anioOficio != null){
                            aniOf = value.anioOficio
                        }
                        table += '    <td>' + numOf + "/" + aniOf + '</td>';
                        table += '    <td align="right"><strong>Procedencia : </strong></td>';
                        table += '    <td>' + juzgado + '</td>';
                        table += '  </tr>';
                        table += '  <tr>';
                        table += '    <td><strong>Carpeta Investigaci&oacute;n :</strong></td>';
                        table += '    <td>' + carp + '</td>';
                        table += '    <td align="right"><strong>Destino : </strong></td>';
                        table += '    <td>' + value.desJuzgadoDestino + '</td>';
                        table += '  </tr>';
                        table += '</table>';
                        table += '<p></p> ';
                        table += '<table width="800" border="0" style="border: solid thin #033;';
                        table += '                                    border-radius: 5px;';
                        table += '                                    -moz-border-radius: 5px;';
                        table += '                                    -webkit-border-radius: 5px; ">';
                        table += '  <tr style="font-size:13px">';
                        table += '    <td width="160"><strong>S&iacute;ntesis :</strong></td>';
                        table += '    <td width="633">' + value.sintesis + '</td>';
                        table += '  </tr>';
                        table += '  <tr style="font-size:13px">';
                        table += '    <td width="160"><strong>Observaciones :</strong></td>';
                        var observaciones = "";
                        if(value.observaciones != null){
                            observaciones = value.observaciones
                        }
                        table += '    <td width="633">' + observaciones + '</td>';
                        table += '  </tr>';
                        table += '</table>';
                        table += '<p></p> ';
                        table += '<table width="800" border="0" style="border: solid thin #033;';
                        table += '                                    border-radius: 5px;';
                        table += '                                    -moz-border-radius: 5px;';
                        table += '                                    -webkit-border-radius: 5px; ">';
                        table += '  <tr>';
                        table += '    <td colspan="6" align="center"><strong>IMPUTADO (S)</strong></td>';
                        table += '  </tr>';
                        if (value.listaImputados.length != 0) {
                            $.each(value.listaImputados, function (key2, value2) {
                                if (value2.cveTipoPersona == 1) { //Fisica

                                    table += '  <tr style="font-size:13px">';
                                    table += '    <td width="89"><strong>Nombre :</strong></td>';
                                    table += '    <td width="187">' + value2.nombre + ' ' + value2.paterno + ' ' + value2.materno + '</td>';
                                    table += '    <td width="90"><strong>Cereso :</strong></td>';
                                    table += '    <td width="158">' + value2.desCereso + '</td>';
                                    table += '    <td width="75" align="right"><strong>Estatus :</strong></td>';
                                    table += '    <td width="167">' + value2.desConsignacion + '</td>';
                                    table += '  </tr>';
                                } else {

                                    table += '  <tr style="font-size:13px">';
                                    table += '    <td width="89"><strong>Nombre :</strong></td>';
                                    table += '    <td width="187">' + value2.nombreMoral + '</td>';
                                    table += '    <td width="90"><strong>Cereso :</strong></td>';
                                    table += '    <td width="158">' + value2.desCereso + '</td>';
                                    table += '    <td width="75" align="right"><strong>Estatus :</strong></td>';
                                    table += '    <td width="167">' + value2.desConsignacion + '</td>';
                                    table += '  </tr>';
                                }

                            });
                        }

                        table += '</table>';
                        table += '<p></p>';
                        table += '<table width="800" border="0" style="border: solid thin #033;';
                        table += '                                    border-radius: 5px;';
                        table += '                                    -moz-border-radius: 5px;';
                        table += '                                    -webkit-border-radius: 5px; ">';
                        table += '  <tr>';
                        table += '    <td colspan="4" align="center"><strong>OFENDIDO (S)</strong></td>';
                        table += '  </tr>';
                        if (value.listaOfendidos.length != 0) {
                            $.each(value.listaOfendidos, function (key3, value3) {
                                if (value3.cveTipoPersona == 1) { //Fisica

                                    table += '  <tr style="font-size:13px">';
                                    table += '    <td width="89"><strong>Nombre :</strong></td>';
                                    table += '    <td>' + value3.nombre + ' ' + value3.paterno + ' ' + value3.materno + '</td>';
                                    table += '    <td align="right"><strong>Genero :</strong></td>';
                                    table += '    <td width="167">' + value3.desGenero + '</td>';
                                    table += '  </tr>';
                                } else {

                                    table += '  <tr style="font-size:13px">';
                                    table += '    <td width="89"><strong>Nombre :</strong></td>';
                                    table += '    <td>' + value3.nombreMoral + '</td>';
                                    table += '    <td align="right"><strong>Genero :</strong></td>';
                                    table += '    <td width="167">' + value3.desGenero + '</td>';
                                    table += '  </tr>';
                                }
                            });
                        }


                        table += '</table>';
                        table += '<p></p>';
                        table += '<table width="800" border="0" style="border: solid thin #033;';
                        table += '                                    border-radius: 5px;';
                        table += '                                    -moz-border-radius: 5px;';
                        table += '                                    -webkit-border-radius: 5px; ">';
                        table += '  <tr>';
                        table += '    <td colspan="4" align="center"><strong>DELITO (S)</strong></td>';
                        table += '  </tr>';
                        if (value.listaDelitos.length != 0) {
                            $.each(value.listaDelitos, function (key4, value4) {

                                table += '  <tr style="font-size:13px">';
                                table += '    <td width="89"><strong>Delito :</strong></td>';
                                table += '    <td width="600">' + value4.desDelito + '</td>';
                                table += '  </tr>';
                            });
                        }

                        table += '</table>';
                        table += '<p></p>';
                        table += '<table width="800" border="0" style="border: solid thin #033;';
                        table += '                        border-radius: 5px;';
                        table += '                        -moz-border-radius: 5px;';
                        table += '                        -webkit-border-radius: 5px; ">';
                        table += '  <tr>';
                        table += '    <td width="259" align="center"><strong>TOTAL IMPUTADOS : ' + value.listaImputados.length + '</strong></td>';
                        table += '    <td width="261" align="center"><strong>TOTAL OFENDIDOS : ' + value.listaOfendidos.length + '</strong></td>';
                        table += '    <td width="262" align="center"><strong>TOTAL DELITOS : ' + value.listaDelitos.length + '</strong></td>';
                        table += '  </tr>';
                        table += '</table>';
                        table += '<p></p>';
                        table += '<div style="font-size:13px">';
                        table += '<p>Por : ' + value.nombreCaptura + '</p>';
                        var fecha = new Date();
                        var actual = fecha.getDate() + "/" + (fecha.getMonth() + 1) + "/" + fecha.getFullYear() + " " + fecha.getHours() + ":" + fecha.getMinutes() + " hrs.";
                        table += '<p>Fecha de impresi&oacute;n : ' + actual + '</p>';
                        table += '</div>';
                        //$('#div_imprimirER').html(table);

                        w = window.open("", 'Print_Page', 'scrollbars=yes');
                        w.document.write(table);
                        w.document.close();
                        w.print();
                        // w.close();
                    });
                }

            });
        };
        ////FUNCIONES PARA EXHORTOS GENERADOS
        cargaEstatusG = function () {
            var strDatos = "accion=consultar";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/estatus/EstatusFacade.Class.php",
                data: {
                    accion: "consultar",
                    cveTipoEstatus: 6

                },
                async: true,
                dataType: "html",
                beforeSend: function (objeto) {
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON

                    if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                            $("#cmbEstatusG").append($('<option></option>').val(json.data[i].cveEstatus).html(json.data[i].descEstatus));
                            $("#cmbEstatusGConsulta").append($('<option></option>').val(json.data[i].cveEstatus).html(json.data[i].descEstatus));
                        }
                    }
                    $("#cmbEstatusG").val(4);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        validaEstadoG = function () {

            if ($("#cmbEstadoG").val() == 15) {
                $("#juzgadosEstadoG").slideDown();
                $("#juzgadosFueraG").slideUp();
                $("#txtJuzgadoPG").val("");
            } else {
                $("#juzgadosEstadoG").slideUp();
                $("#juzgadosFueraG").slideDown();
                $('#cmbJuzgadoG').select2('val', '');
            }
        };
        validaEstadoGConsulta = function () {

            if ($("#cmbEstadoGConsulta").val() == 15) {
                $("#juzgadosEstadoGConsulta").slideDown();
                $("#juzgadosFueraGConsulta").slideUp();
                $("#txtJuzgadoPGConsulta").val("");
            } else {
                $("#juzgadosEstadoGConsulta").slideUp();
                $("#juzgadosFueraGConsulta").slideDown();
                $('#cmbJuzgadoGConsulta').select2('val', '');
            }
        };
        guardarEnviarExhortoG = function () {
            $(".required").remove();
            if (validaExhortoG()) {
                if ($("#cmbEstadoG").val() == "15") {
                    if ($('#chekEnviarEG').is(':checked')) {
                        var accion = 'guardarenviarGenerado';
                    } else {
                        accion = 'guardarGenerado';
                    }
                    var observaciones = editorG.getContent();
                    var Juzgado = $("#txtJuzgadoPG").val().toUpperCase();
                    var cveJuzgadoProcedencia = $("#cveTipoJuzgadoG").val();
                    cveJuzgadoProcedencia = cveJuzgadoProcedencia.split("/");
                    $.ajax({
                        type: "POST",
                        url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {
                            idActuacion: $("#idActuacion").val(),
                            numOficio: $('#numOficio').val(),
                            anioOficio: $('#anioOficio').val(),
                            fechaInicioEG: $('#fechaInicioEG').val(),
                            fechaTerminoEG: $('#fechaTerminoEG').val(),
                            textoExhorto: $('#textoExhorto').val(),
                            telefonoEG: $('#telefonoEG').val(),
                            correoEG: $('#correoEG').val(),
                            facultadoAcordar: $('#facultadoAcordar').val(),
                            cveTipoCarpeta: $("#cmbTipoCarpetaG").val(),
                            numero: $("#txtNumeroCG").val(),
                            anio: $("#txtAnioCG").val(),
                            sintesis: $("#txtSintesisG").val().toUpperCase(),
                            cveEstadoProcedencia: $("#cmbEstadoG").val(),
                            cveJuzgadoProcedencia: cveJuzgadoProcedencia[0],
                            cveJuzgado: $("#cmbJuzgadoG").val(),
                            juzgadoProcedencia: Juzgado,
                            observaciones: observaciones,
                            cveEstatusExhorto: $("#cmbEstatusG").val(),
                            requisitoria: $("#requisitoria").prop("checked") ? 'S' : 'N',
                            accion: accion
                        },
                        success: function (data) {
                            if (data.estatus == "Ok" || data.estatus == "ok") {
                                showMessage(data.mensaje, 'divAlertSuccesE');
                            } else {
                                showMessage(data.mensaje, 'divAlertDagerE');
                            }
                        }

                    });
                }
            } else {
            }
        }
        guardarExhortoG = function () {
            var observaciones = editorG.getContent();
            var juzgadoG = "";
            if ($("#cveTipoJuzgadoG").val() != 0) {
                juzgadoG = $("#cveTipoJuzgadoG").val().split("/");
                juzgadoG = juzgadoG[0];
            }
    //        alert(juzgadoG);
    //        return;
    //                var pe = /\<p><br[/]><[/]p>/gi;
    //            observaciones=observaciones.replace(pe, "");
            if ($('#facultadoAcordar').is(':checked')) {
                $('#facultadoAcordar').val("S");
            } else {
                $('#facultadoAcordar').val("N");
            }
            $(".required").remove();
            if (validaExhortoG()) {

                var Juzgado = $("#txtJuzgadoPG").val().toUpperCase();
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        idActuacion: $("#idActuacion").val(),
                        numOficio: $('#numOficio').val(),
                        anioOficio: $('#anioOficio').val(),
                        fechaInicioEG: $('#fechaInicioEG').val(),
                        fechaTerminoEG: $('#fechaTerminoEG').val(),
                        textoExhorto: observaciones,
                        telefonoEG: $('#telefonoEG').val(),
                        correoEG: $('#correoEG').val(),
                        facultadoAcordar: $('#facultadoAcordar').val(),
                        cveTipoCarpeta: $("#cmbTipoCarpetaG").val(),
                        numero: $("#txtNumeroCG").val(),
                        anio: $("#txtAnioCG").val(),
                        sintesis: $("#txtSintesisG").val().toUpperCase(),
                        cveEstadoProcedencia: $("#cmbEstadoG").val(),
                        cveJuzgadoProcedencia: $("#cmbJuzgadoG").val(),
                        juzgadoProcedencia: Juzgado,
                        observaciones: $('#textoExhorto').val(),
                        cveEstatusExhorto: $("#cmbEstatusG").val(),
                        requisitoria: $("#requisitoria").prop("checked") ? 'S' : 'N',
                        cveJuzgado: juzgadoG,
                        accion: 'guardarGenerado'
                    },
                    success: function (data) {

                        if (data.estatus == "ok") {


                            if ($("#idActuacion").val() != "") {
                                buscarExhortoG(1);
                                showMessage(data.mensaje, 'divAlertSuccesE');
                            } else {
                                var cveJuzgado = data.data.cveJuzgado;
                                var cadena = "'" + data.idExhortoGenerado + "','" + $("#cmbTipoCarpetaG").val() +
                                        "','" + $("#txtNumeroCG").val() + "','" + $("#txtAnioCG").val() +
                                        "','" + $("#cmbEstadoG").val() + "','" + $("#cmbJuzgadoG").val() +
                                        "','" + Juzgado + "','" + cveJuzgado + "','divExhortosGenerados'";
                                /*  $("#div_respuestaG").parent().append("<br class='required'><label class='Respuesta required'>"+data.mensaje+"<br>"+
                                 "<a onclick=\"enviarEG(" + cadena + ")\" style='cursor:pointer' title='Enviar a Exhortos Recibidos'>Enviar Exhorto</a></label>");*/
                                if ($("#cmbEstadoG").val() == 15) {
                                    showMessage(data.mensaje + "<br>" + "", 'divAlertSuccesE');
    //                                    $("#div_enviarEG").html(" <a onclick=\"enviarEG(" + cadena + ")\" style='cursor:pointer' title='Enviar a Exhortos Recibidos'><span style='color:green' class='glyphicon glyphicon-envelope' aria-hidden='true'></span> Enviar Exhorto</a>");

                                } else {
                                    showMessage(data.mensaje + "<br>", 'divAlertSuccesE');
                                }
                                $(".bloqueoEG").attr('disabled', 'disabled');
                                $("#btn_guardar").hide();
                            }
                            $("#numeroEG").val(data.data.numActuacion);
                            $("#anioEG").val(data.data.aniActuacion);
                            $("#btn_imprimirEG").html('<input type="submit" class="btn btn-primary" id="inputImprimir" value="Imprimir" onclick="imprimirEG(' + data.data.idActuacion + ')"> ');
    //                        seleccionaEG($("#idActuacion").val());
                            // $(".bloqueoEG").attr('disabled', 'disabled');
                            // $("#btn_guardar").hide();                    

                        } else {
                            showMessage(data.mensaje, 'divAlertDagerE');
                        }
                    }

                });
            }
        };
        validaExhortoG = function () {
            $(".required").remove();
            var mensaje = "";
            var error = true;
            if ($('#cmbTipoCarpetaG').val() == "" || $('#cmbTipoCarpetaG').val() == "0") {
                Error($('#cmbTipoCarpetaG'), "Selecciona Tipo de Carpeta");
                error = false;
            }
            if ($('#txtNumeroCG').val() == "" || $('#txtAnioCG').val() == "") {
                Error($('#txtAnioCG'), "Ingresa Numero y A\u00f1o");
                error = false;
            }
            if (isNaN($('#txtNumeroCG').val()) || $('#txtNumeroCG').val() <= 0) {
                Error($('#txtNumeroCG'), "Numero incorrecto");
                error = false;
            }
            if ($('#txtAnioCG').val().length != 4 || $('#txtAnioCG').val() < 2000) {
                Error($('#txtAnioCG'), " A\u00f1o incorrecto");
                error = false;
            }
            if ($('#txtSintesisG').val() == "") {
                Error($('#txtSintesisG'), "Ingresa Sintesis");
                error = false;
            }
            if ($('#cmbEstadoG').val() == "" || $('#cmbEstadoG').val() == 0 || $('#cmbEstadoG').val() == null) {
                Error($('#cmbEstadoG'), "Selecciona Estado");
                error = false;
            }
            if ($('#cmbEstatusG').val() == "" || $('#cmbEstatusG').val() == 0) {
                Error($('#cmbEstatusG'), "Selecciona Estatus");
                error = false;
            }
            if ($('#cmbEstadoG').val() != 15 && $('#txtJuzgadoPG').val() == "") {
                Error($('#txtJuzgadoPG'), "Ingresa Juzgado ");
                error = false;
            }
            if ($('#cmbEstadoG').val() == 15 && ($("#cmbJuzgadoG").val() == "" || $("#cmbJuzgadoG").val() == 0 || $("#cmbJuzgadoG").val() == null)) {
                Error($('#cmbJuzgadoG'), "Selecciona Juzgado");
                error = false;
            }

            if ($('#numOficio').val() == "") {
                Error($('#numOficio'), "Ingresa Numero de Oficio");
                error = false;
            }
            if ($('#anioOficio').val() == "") {
                Error($('#anioOficio'), "Ingresa A\u00f1o de Oficio");
                error = false;
            }
            if ($('#fechaInicioEG').val() == "") {
                Error($('#fechaInicioEG'), "Ingresa fecha de Inicio");
                error = false;
            }
    //        if ($('#fechaTerminoEG').val() == "") {
    //            Error($('#fechaTerminoEG'), "Ingresa fecha de Termino");
    //            error = false;
    //        }
            var observaciones = editorG.getContent();
            if (observaciones == "") {
                Error($('#textoExhortoG'), "Ingresa texto de Exhorto");
                // Error($('#txtObservacionesG'), "Ingresa texto de Exhorto");
                error = false;
            }
            if ($('#telefonoEG').val() == "") {
                Error($('#telefonoEG'), "Ingresa telefono");
                error = false;
            }
            if ($('#correoEG').val() == "") {
                Error($('#correoEG'), "Ingresa correo electronico");
                error = false;
            }

            if (error == false) {

                //Error($('#div_respuestaG'),"Ingresa Los Campos Mencionados");
                showMessage('Ingresa Los Campos Mencionados', 'divAlertWarningE');
            }

            return error;
        };
        cargaDistrito = function (grt) {
            var accion = "";
            var url = "";
            if (origen == 1) {
//                url = "../fachadas/sigejupe/atencionjuzgados/AtencionjuzgadosFacade.Class.php",
//                accion = "consultarCombo";
//                var strDatos = "accion=consultarCombo&activo=S";
                url = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
                accion = "distrito";
                var strDatos = "accion=distrito&activo=S";
            } else {
                url = "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php";
                accion = "distrito";
                
                var strDatos = "accion=distrito&activo=S";
                var hiddencveAdcripcion = cveAdscripcion;
                var hiddencveJuzgadoOrigenArbol = cveJuzgadoArbol;
                if ( $("#tipoRegistro").val() == 1 && idActuacion != "" ) {
                    if ( hiddencveAdcripcion == hiddencveJuzgadoOrigenArbol ) {
                        if ( origen == "" ) {
                            strDatos = "accion=getJuzgadoActuacion&idActuacion=" + idActuacion;
                        }
                    } else {
                        if ( hiddencveJuzgadoOrigenArbol != 0 ) {
                            strDatos = "accion=consultar&cveJuzgado=" + hiddencveJuzgadoOrigenArbol;
                        } else {
                            strDatos = "accion=getJuzgadoActuacion&idActuacion=" + idActuacion;
                        }
                    }
                }
                
            }
            $.ajax({
                type: "POST",
                url: url,
                data: strDatos,
//                data: {
//                    accion: accion,
//                    activo: 'S',
//                    obligaPermiso: false
//                },
                async: false,
                dataType: "html",
                beforeSend: function (objeto) {
                    // $('#divCmbRelaciones').html('<center> <br/><img src="../img/cargando.gif" width="20"/></center>');
                },
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")"); //Parsear JSON
                    console.log(json);
                    if (json.totalCount > 0) {
                        $("#cveTipoJuzgadoG").empty();
                        $("#cveTipoJuzgado").empty();
                        $("#cveTipoJuzgado2").empty();
                        $("#cveTipoJuzgadoGConsultar").empty();
                        if (typeof grt !== "undefined") {
                            if (origen == 1) {

                                $("#cveTipoJuzgadoG").append($('<option></option>').val("0").html("seleccione una opcion"));
                                $("#cveTipoJuzgadoGConsultar").append($('<option></option>').val("0").html("seleccione una opcion"));
                                for (var i = 0; i < json.totalCount; i++) {
                                    $("#cveTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cveTipoJuzgado2").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cveTipoJuzgadoG").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cveTipoJuzgadoGConsultar").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                                }
                            } else {
                                $("#cveTipoJuzgadoG").append($('<option></option>').val("0").html("seleccione una opcion"));
                                $("#cveTipoJuzgadoGConsultar").append($('<option></option>').val("0").html("seleccione una opcion"));
                                for (var i = 0; i < json.totalCount; i++) {
                                    $("#cveTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cveTipoJuzgado2").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cveTipoJuzgadoG").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cveTipoJuzgadoGConsultar").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
    //                            if (grt == json.data[i].cveJuzgado) {
    //                                $("#cveTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
    //                                $("#cveTipoJuzgado2 option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
    //                                $("#cveTipoJuzgadoG option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
    //                                $("#cveTipoJuzgadoGConsultar option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
    //                            }
                                    $("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                                }
                            }
                        } else {
                            $("#cveTipoJuzgadoG").append($('<option></option>').val("0").html("seleccione una opcion"));
                            $("#cveTipoJuzgadoGConsultar").append($('<option></option>').val("0").html("seleccione una opcion"));
                            for (var i = 0; i < json.totalCount; i++) {
                                if (origen == 1) {
                                    $("#cveTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cveTipoJuzgado2").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cveTipoJuzgadoG").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cveTipoJuzgadoGConsultar").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    if (juzgadoSesion == json.data[i].cveJuzgado) {
                                        $("#cveTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                        $("#cveTipoJuzgado2 option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                        $("#cveTipoJuzgadoG option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                        $("#cveTipoJuzgadoGConsultar option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                    }
                                    $("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                                } else {
                                    $("#cveTipoJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cveTipoJuzgado2").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cveTipoJuzgadoG").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    $("#cveTipoJuzgadoGConsultar").append($('<option></option>').val(json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado).html(json.data[i].desJuzgado));
                                    if (juzgadoSesion == json.data[i].cveJuzgado) {
                                        $("#cveTipoJuzgado option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                        $("#cveTipoJuzgado2 option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                        $("#cveTipoJuzgadoG option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                        $("#cveTipoJuzgadoGConsultar option[value='" + json.data[i].cveJuzgado + "/" + json.data[i].cveTipojuzgado + "']").attr("selected", "selected");
                                    }
                                    $("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                                }
                            }
                        }
                    }
                    $('#divCmbRelaciones').hide();
    //                $("#cveTipoJuzgado").val(juzgadoSesion);
                    cargaTipoCarpeta(1);
                    cargaTipoCarpeta(2);
                    cargaTipoCarpeta(3);
                },
                error: function (objeto, quepaso, otroobj) {
                    //alert("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").html("Error en la peticion:\n\n" + quepaso);
                    $("#divAlertDager").show("slide");
                    setTimeAlert("divAlertDager");
                }
            });
        };
        limpiar3 = function () {
            $("#numOficio").val("");
            $("#anioOficio").val("");
            $("#telefonoEG").val("");
            $("#correoEG").val("");
            $("#textoExhorto").val("");
            $("#datosRelacionadostxt").empty();
            $("#inputGuardarEG").show();
            $("#actEnve").hide();
            $("#idActuacion").val("");
            $("#cmbTipoCarpetaG").val(0);
            $("#txtNumeroCG").val("");
            $("#txtAnioCG").val("");
            $("#txtSintesisG").val("");
            $("#cmbEstadoG").val(0);
            $("#txtJuzgadoPG").val("");
            editorG.setContent("", false);
            $("#cmbEstatusG").val(4);
            var arbol = $("#arbol").val();
            if (arbol == 0) {
                $('#cmbJuzgadoG').select2('val', '0');
                $("#cmbTipoCarpetaG").val(0);
                $("#txtNumeroCG").val("");
                $("#txtAnioCG").val("");
                $("#datosRelacionadostxt").empty();
            } else {
                $("#inputConsultarG").hide();
                $("#inputDigitalizar").hide();
                $("#inputVisor").hide();
                $("#inputPDF").hide();
            }



            $("#select2-chosen-19").val("");
            $("#fechaInicioEG").val("");
            $("#fechaTerminoEG").val("");
            $("#requisitoria").removeAttr('checked');
            $(".required").remove();
            $("#btn_imprimirEG").html("");
            $("#btn_verER").html("");
            $("#btn_guardar").show();
            $("#resRelacion").html("");
            $("#numeroEG").val("");
            $("#anioEG").val("");
            $("#div_enviarEG").html("");
            $(".bloqueoEG").removeAttr("disabled");
            $("#cmbEstadoG").val(0);
            //validaEstadoG();
        };
        limpiar4 = function () {

            $("#cmbTipoCarpetaGConsulta").val(0);
            $("#txtNumeroCGConsulta").val("");
            $("#txtAnioCGConsulta").val("");
            $("#txtSintesisGConsulta").val("");
            $("#cmbEstadoGConsulta").val(0);
            $("#txtJuzgadoPGConsulta").val("");
            $("#cmbEstatusGConsulta").val(0);
            $('#cmbJuzgadoGConsulta').select2('val', '0');
            //$("#requisitoriaConsulta").removeAttr('checked');
            $('#numeroEGC').val('');
            $('#anioEGC').val('');
            $('#fechaInicialG,#fechaFinalG').val(getDate('today'));
            $("#div_paginacionConsultaGenerado").html('');
            $("#div_respuestaConsultaGenerado").html("");
            $(".required").remove();
            $("#cmbEstadoGConsulta").val(0);
            //validaEstadoGConsulta();
        };
        consultarG = function () {
            if ($("#divExhortosGenerados").is(":visible")) {
                $("#divExhortosGenerados").hide('fade');
                $("#divExhortosGeneradosConsulta").show('slide');
                $("#registro").html("Consulta de Exhortos Generados");
                limpiar3();
            } else {
                $("#divExhortosGenerados").show('slide');
                $("#divExhortosGeneradosConsulta").hide('fade');
                $("#registro").html("Registro de Exhortos Generados");
            }
        };
        buscarExhortoG = function (pagina) {
            var nRegistros = 0;
            $(".required").remove();
            var fechaInicial = $("#fechaInicialG").val();
            var fechaFinal = $("#fechaFinalG").val();
            var estado = $("#cmbEstadoGConsulta").val();
            var cveJuzgado = $("#cmbJuzgadoGConsulta").val();
            var cveTipoCarpeta = $("#cmbTipoCarpetaGConsulta").val();
            var estatus = $("#cmbEstatusGConsulta").val();
            var Juzgado = $("#txtJuzgadoPGConsulta").val();
            if ($("#cveTipoJuzgadoGConsultar").val() != "0") {
                var juzgadoConsultarG = $("#cveTipoJuzgadoGConsultar").val().split("/");
                juzgadoConsultarG = juzgadoConsultarG[0];
            } else {
                juzgadoConsultarG = "";
            }
            var buscar = true;
            if (estado == "0" || estado == null) {
                estado = "";
            }
            if (cveJuzgado == "0") {
                cveJuzgado = "";
            }
            if (cveTipoCarpeta == "0") {
                cveTipoCarpeta = "";
            }
            if (estatus == "0") {
                estatus = "";
            }
            if ($("#numeroEGC").val() == "" && $("#anioEGC").val() == "") {

                if (fechaInicial == "") {
                    Error($("#fechaInicialG"), "Ingresa Fecha Inicial");
                    buscar = false;
                }
                if (fechaFinal == "") {
                    Error($("#fechaFinalG"), "Ingresa Fecha Final");
                    buscar = false;
                }

            }
            if (nRegistros == 0) {

                nRegistros = 10;
            } else {

                nRegistros = $("#cmbRegistrosEG").val();
            }
            if (buscar) {

                if ($("#numeroEGC").val() == "" && $("#anioEGC").val() == "") {

                    var separa = fechaInicial.split("/");
                    var dia = separa[0];
                    var mes = separa[1];
                    var anio = separa[2];
                    fechaInicial = anio + "-" + mes + "-" + dia + " 00:00:00";
                    var separaF = fechaFinal.split("/");
                    var diaF = separaF[0];
                    var mesF = separaF[1];
                    var anioF = separaF[2];
                    fechaFinal = anioF + "-" + mesF + "-" + diaF + " 23:59:00";
                } else {

                    fechaInicial = "";
                    fechaFinal = "";
                }

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        numExhorto: $("#numeroEGC").val(),
                        aniExhorto: $("#anioEGC").val(),
                        cveTipoCarpeta: cveTipoCarpeta,
                        numero: $("#txtNumeroCGConsulta").val(),
                        anio: $("#txtAnioCGConsulta").val(),
                        cveEstadoProcedencia: estado,
                        cveJuzgadoProcedencia: cveJuzgado,
                        juzgadoProcedencia: Juzgado,
                        cveJuzgado: juzgadoConsultarG,
                        cveEstatusExhorto: estatus,
                        fechaInicial: fechaInicial,
                        fechaFinal: fechaFinal,
                        pagina: pagina,
                        totalRegistros: 1,
                        nRegistros: nRegistros,
                        activo: 'S',
                        accion: 'buscarTotalGenerado'
                    },
                    success: function (data) {
                        //console.log(data);
                        if (data.estatus == "ok") {

                            var total = data.totalCount;
                            var table = "";
                            var cantidad = nRegistros;
                            var inicio;
                            var res;
                            var generado = "";
                            var total_paginas = parseInt(total / cantidad);
                            res = total % cantidad;
                            if (res > 0)
                            {
                                total_paginas = parseInt(total_paginas) + 1;
                            }
                            inicio = (pagina - 1) * cantidad;
                            table += "<table width='700' border='0' align='center'><tr>";
                            table += "    <td><div id='div_paginacionG'><strong>Total: " + total + "</strong></div></td>";
                            table += "    <td>Pagina: ";
                            table += "        <select name='cmbPaginasG' id='cmbPaginasG' onchange='paginacionExhortoGenerado(" + total + ",0)'>";
                            for (var i = 1; i <= total_paginas; i++) {

                                table += "            <option value='" + i + "'>" + i + "</option>";
                            }

                            table += "        </select>";
                            table += "    </td>";
                            table += "    <td>Registros por pagina: ";
                            table += "        <select name='cmbRegistrosEG' id='cmbRegistrosEG' onchange='buscarExhortoG( 1,1)'>";
                            table += "            <option value='10'>10</option>";
                            table += "            <option value='15'>15</option>";
                            table += "            <option value='20'>20</option>";
                            table += "            <option value='25'>25</option>";
                            table += "            <option value='40'>40</option>";
                            table += "            <option value='50'>50</option>";
                            table += "            <option value='100'>100</option>";
                            table += "        </select>";
                            table += "    </td>";
                            table += " </tr></table><br>";
                            $("#div_paginacionConsultaGenerado").html(table);
                            $("#cmbRegistrosEG").val(nRegistros);
                            paginacionExhortoGenerado(data.totalCount, pagina);
                        } else {

                            $("#div_paginacionConsultaGenerado").html('');
                            $("#div_respuestaConsultaGenerado").html("");
                            showMessage(data.mensaje, 'divAlertWarningEC')
                        }
                    }

                });
            }
        };
        paginacionExhortoGenerado = function (total, pagina) {
            var permisos = 0;
            if (pagina == 0) {

                pagina = $("#cmbPaginasG").val();
            }
            ;
            $(".required").remove();
            var fechaInicial = $("#fechaInicialG").val();
            var fechaFinal = $("#fechaFinalG").val();
            var estado = $("#cmbEstadoGConsulta").val();
    //        var cveJuzgado = $("#cmbJuzgadoGConsulta").val();
            var cveJuzgado = $("#cveTipoJuzgadoGConsultar").val().split("/");
            var cveTipoCarpeta = $("#cmbTipoCarpetaGConsulta").val();
            var estatus = $("#cmbEstatusGConsulta").val();
            var Juzgado = $("#txtJuzgadoPGConsulta").val();
            var buscar = true;
            if (estado == "0" || estado == null) {
                estado = "";
            }
            if (cveJuzgado == "0") {
                cveJuzgado = "";
            }
            if (cveTipoCarpeta == "0") {
                cveTipoCarpeta = "";
            }
            if (estatus == "0") {
                estatus = "";
            }
            ;
            if ($("#numeroEGC").val() == "" && $("#anioEGC").val() == "") {

                if (fechaInicial == "") {
                    Error($("#fechaInicialG"), "Ingresa Fecha Inicial");
                    buscar = false;
                }
                if (fechaFinal == "") {
                    Error($("#fechaFinalG"), "Ingresa Fecha Final");
                    buscar = false;
                }

            }
            if (buscar) {
                if ($("#numeroEGC").val() == "" && $("#anioEGC").val() == "") {

                    var separa = fechaInicial.split("/");
                    var dia = separa[0];
                    var mes = separa[1];
                    var anio = separa[2];
                    fechaInicial = anio + "-" + mes + "-" + dia + " 00:00:00";
                    var separaF = fechaFinal.split("/");
                    var diaF = separaF[0];
                    var mesF = separaF[1];
                    var anioF = separaF[2];
                    fechaFinal = anioF + "-" + mesF + "-" + diaF + " 23:59:00";
                } else {

                    fechaInicial = "";
                    fechaFinal = "";
                }


                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        numExhorto: $("#numeroEGC").val(),
                        aniExhorto: $("#anioEGC").val(),
                        cveTipoCarpeta: cveTipoCarpeta,
                        numero: $("#txtNumeroCGConsulta").val(),
                        anio: $("#txtAnioCGConsulta").val(),
                        cveEstadoProcedencia: estado,
    //                    cveJuzgadoProcedencia: cveJuzgado[0],
                        juzgadoProcedencia: Juzgado,
                        cveJuzgado: cveJuzgado[0],
                        cveEstatusExhorto: estatus,
                        fechaInicial: fechaInicial,
                        fechaFinal: fechaFinal,
                        pagina: pagina,
                        totalRegistros: 0,
                        nRegistros: $("#cmbRegistrosEG").val(),
                        activo: 'S',
                        accion: 'buscarGenerado'
                    },
                    success: function (data) {
                        var table = "";
                        var con = 0;
                        var juzgado = "";
                        var inicio;
                        inicio = (pagina - 1) * $("#cmbRegistrosEG").val();
                        if (data.estatus == "ok") {
                            table += "<table id='tblResultadosGrid' class='table table-hover table-striped table-bordered'>";
                            table += "    <thead>";
                            table += "        <tr>";
                            table += "            <th>N&uacute;m.</th>";
                            table += "            <th>Exhorto Generado</th>";
                            table += "            <th>Tipo Carpeta</th>";
                            table += "            <th>Estado</th>";
                            table += "            <th>Juzgado Destino</th>";
                            table += "            <th>Estatus</th>";
    //                            table += "            <td align='center'>Enviar</td>";
                            table += "            <td align='center'>Eliminar</td>";
                            table += "        </tr>";
                            table += "    </thead>";
                            table += "    <tbody>";
                            $.each(data.data, function (key, value) {
                                var juz = (value.desJuzgadoDestino != "") ? value.desJuzgadoDestino : value.JuzgadoDestino;
                                var cadena2 = "'" + value.idExhortoGenerado + "','" + value.cveTipoCarpeta + "','" + value.numero +
                                        "','" + value.anio + "','" + value.cveEstado + "','" + value.cveJuzgadoDestino +
                                        "','" + value.JuzgadoDestino + "','" + value.cveJuzgado + "','divExhortosGeneradosConsulta'";
                                inicio++;
                                table += "<tr>";
                                table += "   <td align='center' onclick=\"seleccionaEG(" + value.idActuacion + ")\" > " + inicio + "</td>";
                                table += "   <td align='left' onclick=\"seleccionaEG(" + value.idActuacion + ")\" > " + value.numActuacion + "/" + value.aniActuacion + "</td>";
                                table += "   <td align='left' onclick=\"seleccionaEG(" + value.idActuacion + ")\" >" + value.desTipoCarpeta + "</td>";
                                table += "   <td align='left' onclick=\"seleccionaEG(" + value.idActuacion + ")\" >" + value.desEstado + "</td>";
                                table += "   <td align='left' onclick=\"seleccionaEG(" + value.idActuacion + ")\" >" + juz + "</td>";
                                table += "   <td align='left' onclick=\"seleccionaEG(" + value.idActuacion + ")\" >" + value.desEstatus + "</td>";
                                if (value.generado == 0 && value.cveEstado == 15) {
    //                                    table += "   <td align='center' ><a onclick=\"enviarEG(" + cadena2 + ")\" style='cursor:pointer' title='Enviar a Exhortos Recibidos'><span style='color:green' class='glyphicon glyphicon-envelope' aria-hidden='true'></span></a></td>";
                                    if (permisos == 1) {
                                        table += "   <td align='center' ><img src='img/eliminar.png' width=20 height=20 onclick=\"eliminarEG('" + total + "','" + pagina + "','" + value.idActuacion + "')\" style='cursor:pointer' title='Eliminar'></td>";
                                    } else {

                                        table += "     <td></td>";
                                    }
                                } else {
    //                                table += "     <td></td>";
                                    table += "     <td></td>";
                                }

                                table += "</tr> ";
                                cadena = "";
                            });
                            table += "</tbody>";
                            table += "</table><br>";
                            $("#div_respuestaConsultaGenerado").html(table);
                            $("#tblResultadosGrid").DataTable({paging: false});
                        } else {

                            $("#div_respuestaConsultaGenerado").html('');
                            showMessage(data.mensaje, 'divAlertWarningEC');
                        }
                    }

                });
            }
        };
        eliminarEG = function (total, pagina, idActuacion) {

            // $("tr").filter('[data-ofendido="' + idofendido + '"]').removeClass('success').addClass('danger');

            bootbox.dialog({
                message: "\u00bfSeguro quieres eliminar Exhorto Generado?",
                closeButton: false,
                buttons: {
                    danger: {
                        label: "Aceptar",
                        className: "btn-primary",
                        callback: function () {

                            $.ajax({
                                type: "POST",
                                url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                                async: false,
                                dataType: "json",
                                data: {
                                    idActuacion: idActuacion,
                                    activo: 'N',
                                    accion: 'eliminarGenerado'
                                },
                                success: function (data) {
                                    //console.log(data);
                                    if (data.estatus == "ok") {
                                        total = total - 1;
                                        $("#div_paginacionG").html("<strong>Total: " + total + "</strong></div>");
                                        paginacionExhortoGenerado(total, pagina);
                                    } else {
                                        console.log(data.mensaje);
                                    }
                                }

                            });
                        }
                    },
                    success: {
                        label: "Cancelar",
                        className: "btn-primary",
                        callback: function () {
                            // $("tr").filter('[data-ofendido="' + idofendido + '"]').removeClass('danger');
                        }
                    }
                }
            });
        };
        seleccionaEG = function (idActuacion) {
            console.log("seleccionaEG");
            $("#inputVisor").show();
            $("#inputPDF").show();
            $("#inputDigitalizar").show();
            $("#inputGuardarEG").hide();
            var arbol = $("#arbolG").val();
            if (arbol == 1) {
                $("#inputImprimir").hide();
                $("#inputConsultarG").hide();
            } else {
                $("#inputConsultarG").show();
            }
            $("#actEnve").show();
            $('#idExhortoGenerado').val(idActuacion);
            $(".required").remove();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    idActuacion: idActuacion,
                    pagina: 1,
                    totalRegistros: 1,
                    activo: 'S',
                    accion: 'buscarGenerado'
                },
                success: function (data) {
                    $.each(data.data, function (key, value) {

                        // if (juzgadoDestino=="" || juzgadoDestino== null) {
                        //     juzgadoDestino="";
                        // }

                        $("#divExhortosGenerados").slideDown();
                        $("#divExhortosGeneradosConsulta").slideUp();
                        $("#idActuacion").val(value.idActuacion);
                        $("#txtNumeroCG").val(value.numero);
                        $("#txtAnioCG").val(value.anio);
                        $("#txtSintesisG").val(value.sintesis);
                        $("#cmbEstadoG").val(value.cveEstado);
                        $("#txtJuzgadoPG").val(value.JuzgadoDestino);
                        var fechaOficio = value.fecOficio;
                        fechaOficio = fechaOficio.split("-");
    //                    alert("fechaoficio =>");
    //                    alert(fechaOficio);
                        var fechaTermino = value.fecTermino;
                        fechaTermino = fechaTermino.split("-");
    //                    alert("fechaoficio =>");
    //                    alert(fechaOficio);
    if(value.numOficio != null|| value.numOficio != 0){
        var numOf = value.numOficio;
    }
    if(value.aniOficio != null|| value.aniOficio != 0){
        var anioOf = value.aniOficio;
    }
                        $("#numOficio").val(numOf);
                        $("#anioOficio").val(anioOf);
                        $("#fechaInicioEG").val(fechaOficio[2] + "/" + fechaOficio[1] + "/" + fechaOficio[0]);
                        $("#fechaTerminoEG").val(fechaTermino[2] + "/" + fechaTermino[1] + "/" + fechaTermino[0]);
                        $("#textoExhorto").val(value.observaciones);
                        $("#telefonoEG").val(value.telefono);
                        $("#correoEG").val(value.correo);
                        if (value.FacultadoAcordar == "S") {
                            $("#facultadoAcordar").attr("checked", true);
                        }

                        var content = value.textoExhorto;
                        $("#cmbEstatusG").val(value.cveEstatus);
                        $('#cmbJuzgadoG').val(value.cveJuzgadoDestino);
    //                    $('#cveTipoJuzgadoG').val(value.cveJuzgado + "/" + value.cveTipoCarpeta);
                        var valJuz = "";
                        $('#cveTipoJuzgadoG option').each(function () {

                            valJuz = $(this).val().split("/");
    //                        alert(valJuz[0] +"<===>"+ value.cveJuzgado);
                            if (valJuz[0] == value.cveJuzgado) {
                                $('#cveTipoJuzgadoG').val($(this).val());
                            }
    //                        alert($(this).val());
                        });
                        cargaTipoCarpeta(2);
                        $("#cmbTipoCarpetaG").val(value.cveTipoCarpeta);
                        $('#cmbJuzgadoG').select2('val', value.cveJuzgadoDestino);
                        $("#numeroEG").val(value.numActuacion);
                        $("#anioEG").val(value.aniActuacion);
                        validaCarpeta2(value.cveTipoCarpeta, value.cveJuzgado);
                        if ($("#cmbEstadoG").val() == 15) {
                            $("#juzgadosEstadoG").slideDown();
                            $("#juzgadosFueraG").slideUp();
                        } else {
                            $("#juzgadosEstadoG").slideUp();
                            $("#juzgadosFueraG").slideDown();
                        }
                        if (value.Requisitoria == 'S') {
                            //  $("#requisitoria").attr('checked',true);
                            $("#requisitoria").prop("checked", true);
                        } else {
                            //$("#requisitoria").attr('checked',false);
                            $("#requisitoria").removeAttr('checked');
                        }
                        llenareditorG(content);
                        $("#btn_imprimirEG").html('<input type="submit" class="btn btn-primary" id="inputImprimir" value="Imprimir" onclick="imprimirEG(' + value.idActuacion + ')"> ');
                        if (value.idExhorto != "") {

                            $("#btn_verER").html('<input type="submit" class="btn btn-primary" id="inputVerER" value="Ver Exhorto" onclick="verER(' + value.idExhorto + ')"> ');
                            $("#btn_guardar").hide();
                            $("#div_enviarEG").html("");
                            $(".bloqueoEG").attr('disabled', 'disabled');
                        } else {
                            $("#btn_verER").html("");
                            $("#btn_guardar").show();
                            $(".bloqueoEG").removeAttr("disabled");
                            var numeroCausa = $("#txtNumeroCG").val();
                            var cadena = "'" + value.idExhortoGenerado + "','" + value.cveTipoCarpeta +
                                    "','" + numeroCausa + "','" + value.anio +
                                    "','" + value.cveEstado + "','" + value.cveJuzgadoDestino +
                                    "','" + value.JuzgadoDestino + "','" + value.cveJuzgado + "','divExhortosGenerados'";
                            if (value.cveEstado == 15) {
    //                                $("#div_enviarEG").html(" <a onclick=\"enviarEG(" + cadena + ")\" style='cursor:pointer' title='Enviar a Exhortos Recibidos'><span style='color:green' class='glyphicon glyphicon-envelope' aria-hidden='true'></span> Enviar Exhorto luz</a>");

                            }
                            ;
                        }
                        

                    });
                }
                
            });
            $("#registro").html("Registro de Exhortos Generados");
        };
        
        /*
         * Si se consulta un formulario de primera instancia desde una adscripcion de 
         * segunda instancia, se ocultan los botones del formulario, excepto 
         * el boton de visor de documentos
         */
        muestraOcultaBotones = function() {
            var instanciaSesion = obtenerInstanciaSesion(cveAdscripcion);
            var tipoExhorto = $("#tipoRegistro").val();
            //alert(origenArbol);
            if ( tipoExhorto == 1 && idActuacion != "" ) {
                if ( cveJuzgadoArbol != 0 ) {
                    if ( cveJuzgadoArbol != cveAdscripcion ) {
                        $("#actEnve").hide();
                        $("#inputGuardarEG").hide();
                        $("#inputLimpiarArbol").hide();
                        $("#inputConsultarG").hide();
                        $("#inputLimpiar3").hide();
                        $("#inputVerER").hide();
                        $("#inputImprimir").hide();
                        $("#inputDigitalizar").hide();
                        $("#inputPDF").hide();
                    }
                } else {
                    if ( instanciaSesion == 2 && cveJuzgadoArbol == 0 ) {
                        $("#actEnve").hide();
                        $("#inputGuardarEG").hide();
                        $("#inputLimpiarArbol").hide();
                        $("#inputConsultarG").hide();
                        $("#inputLimpiar3").hide();
                        $("#inputVerER").hide();
                        $("#inputImprimir").hide();
                        $("#inputDigitalizar").hide();
                        $("#inputPDF").hide();
                    }
                }
            }
            
        };
        /*
         * Funcion para consultar la instancia de la adscripcion donde el usuario
         * se encuentra logueado 
         * @param {type} cveAdscripcion
         * @returns {String}         */
        obtenerInstanciaSesion = function(cveAdscripcion){
            var strDatos = "accion=consultar&cveJuzgado=" + cveAdscripcion;
            var instancia = "";
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                data: strDatos,
                async: false,
                dataType: "html",
                success: function (datos) {
                    var json = "";
                    json = eval("(" + datos + ")");
                    //json = datos;
                    console.log(json);
                    console.log('totalCount');
                    console.log(json.totalCount);
                    if (json.totalCount > 0) {
                        instancia = json.data[0].cveInstancia;
                    } else {
                        alert("Error al obtener la instancia de la sesion");
                    }
                },
                error: function (objeto, quepaso, otroobj) {
                    showMessage("Error en la peticion:\n\n" + quepaso , 'error');
                }
            });
            return instancia;
        };
        
        llenareditorG = function (value) {
            try {

                editorG.ready(function () {

                    setTimeout(function () {
                        editorG.setContent(value, false);
                    }, 500);
                    ;
                });
            } catch (e) {
                alert(e);
            }

        };
        seleccionaEGA = function (idActuacion) {
            $("#inputVisor").show();
            $("#inputPDF").show();
            $("#inputDigitalizar").show();
            $("#inputGuardarEG").hide();
            $("#actEnve").show();
            $('#idExhortoGenerado').val(idActuacion);
            $(".required").remove();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    idActuacion: idActuacion,
                    pagina: 1,
                    totalRegistros: 1,
                    activo: 'S',
                    accion: 'buscarGenerado'
                },
                success: function (data) {
                    $.each(data.data, function (key, value) {
                        // if (juzgadoDestino=="" || juzgadoDestino== null) {
                        //     juzgadoDestino="";
                        // }
                        $("#divExhortosGenerados").slideDown();
                        $("#divExhortosGeneradosConsulta").slideUp();
                        $("#idActuacion").val(value.idActuacion);
                        $("#cmbTipoCarpetaG").val(value.cveTipoCarpeta);
                        $("#txtNumeroCG").val(value.numero);
                        $("#txtAnioCG").val(value.anio);
                        var content = value.textoExhorto;
                        $('#cmbJuzgadoG').val(value.cveJuzgadoDestino);
                        $('#cmbJuzgadoG').select2('val', value.cveJuzgadoDestino);
                        $("#numeroEG").val(value.numActuacion);
                        $("#anioEG").val(value.aniActuacion);
                        $("#btn_imprimirEG").html('<input type="submit" class="btn btn-primary" id="inputImprimir" value="Imprimir" onclick="imprimirEG(' + value.idActuacion + ')"> ');
                        if (value.idExhorto != "") {

                            $("#btn_verER").html('<input type="submit" class="btn btn-primary" id="inputVerER" value="Ver Exhorto" onclick="verER(' + value.idExhorto + ')"> ');
                            $("#btn_guardar").hide();
                            $("#div_enviarEG").html("");
                            $(".bloqueoEG").attr('disabled', 'disabled');
                        } else {
                            $("#btn_verER").html("");
                            $("#btn_guardar").show();
                            $(".bloqueoEG").removeAttr("disabled");
                            var numeroCausa = $("#txtNumeroCG").val();
                            var cadena = "'" + value.idExhortoGenerado + "','" + value.cveTipoCarpeta +
                                    "','" + numeroCausa + "','" + value.anio +
                                    "','" + value.cveEstado + "','" + value.cveJuzgadoDestino +
                                    "','" + value.JuzgadoDestino + "','" + value.cveJuzgado + "','divExhortosGenerados'";
                            if (value.cveEstado == 15) {
    //                                $("#div_enviarEG").html(" <a onclick=\"enviarEG(" + cadena + ")\" style='cursor:pointer' title='Enviar a Exhortos Recibidos'><span style='color:green' class='glyphicon glyphicon-envelope' aria-hidden='true'></span> Enviar Exhorto luz</a>");

                            }
                            ;
                        }


                    });
                    validaCarpeta();
                }

            });
            $("#registro").html("Registro de Exhortos Generados");
        };
        consultaEG = function (idReferencia, cveJuzgado, cveTipoCarpeta) {
            console.log("consultaEG");
    //    $("#inputVisor").show();
    //    $("#inputPDF").show();
    //    $("#inputDigitalizar").show();
    //    $("#inputGuardarEG").hide();
    //    $("#actEnve").show();

            $(".required").remove();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    idCarpetaJudicial: idReferencia,
                    cveJuzgado: cveJuzgado,
                    cveTipoCarpeta: cveTipoCarpeta,
    //                        cveTipoActuacion: "8",
                    activo: 'S',
                    accion: 'consultar'
                },
                success: function (data) {
                    var value = data.data[0];
                    cargaDistrito(value.cveJuzgado);
                    var valJuz = "";
                    $('#cveTipoJuzgadoG option').each(function () {

                        valJuz = $(this).val().split("/");
    //                        alert(valJuz[0] +"<===>"+ value.cveJuzgado);
                        if (valJuz[0] == value.cveJuzgado) {
                            $('#cveTipoJuzgadoG').val($(this).val());
                        }
    //                        alert($(this).val());
                    });
                    cargaTipoCarpeta(2)
                    setTimeout(function () {
                        $("#cmbTipoCarpetaG").val(value.cveTipoCarpeta);
                        validaCarpeta();
                    }, 500);
    //                        setTimeout(function () {
    //                             $('#cmbJuzgadoG').select2('val', value.cveJuzgado);
    //                            }, 500);                        
                    $("#txtNumeroCG").val(value.numero);
                    $("#txtAnioCG").val(value.anio);
    //                            seleccionaEGA(data.data[0].idActuacion);
    //                        $.each(data.data, function(key, value){
    ////                            alert(value.idActuacion);
    ////                            seleccionaEG(data.data[0].idActuacion);
    //                        });

                }

            });
            $("#registro").html("Registro de Exhortos Generados");
        };
        consultaE = function (idReferencia, cveJuzgado, cveTipoCarpeta) {
    //    $("#inputVisor").show();
    //    $("#inputPDF").show();
    //    $("#inputDigitalizar").show();
    //    $("#inputGuardarEG").hide();
    //    $("#actEnve").show();

            $(".required").remove();
            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/carpetasjudiciales/CarpetasjudicialesFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    idCarpetaJudicial: idReferencia,
    //                        cveJuzgado:cveJuzgado,
                    cveTipoCarpeta: cveTipoCarpeta,
    //                        cveTipoActuacion: "8",
                    activo: 'S',
                    accion: 'consultar'
                },
                success: function (data) {
                    var value = data.data[0];
                    cargaDistrito(value.cveJuzgado);
                    setTimeout(function () {
                        $("#cmbTipoCarpetaG").val(value.cveTipoCarpeta);
                    }, 500);
    //                        setTimeout(function () {
    //                             $('#cmbJuzgadoG').select2('val', value.cveJuzgado);
    //                            }, 500);                        
                    $("#txtNumeroCG").val(value.numero);
                    $("#txtAnioCG").val(value.anio);
    //                            seleccionaEGA(data.data[0].idActuacion);
    //                        $.each(data.data, function(key, value){
    ////                            alert(value.idActuacion);
    ////                            seleccionaEG(data.data[0].idActuacion);
    //                        });

                }

            });
            $("#registro").html("Registro de Exhortos Generados");
        };
        verER = function (idExhorto) {

            seleccionaE(idExhorto);
            $("#divExhortosGenerados").slideUp();
            $("#divExhortosGeneradosConsulta").slideUp();
            $("#divCamposConsulta").slideUp();
            $("#divCampos").slideDown();
            $("#divFormulario").slideDown();
            $("#registro").html("Registro de Exhortos Recibidos");
            $("#btn_accionE").hide();
            $(".bloqueoE").attr('disabled', 'disabled');
            $("#divTablaDelitos").attr('disabled', 'disabled');
            $("#btn_regresarER").html('<input type="submit" class="btn btn-primary" id="inputregresarER" value="Regresar" onclick=\'regresarER("divExhortosGenerados")\'"> ');
        };
        regresarER = function (div) {

            if (div == 'divExhortosGenerados') {

                $("#divExhortosGenerados").slideDown();
                $("#divExhortosGeneradosConsulta").slideUp();
                $("#idExhorto").val("");
                $("#idExhortoGenerado").val("");
                $("#registro").html("Registro de Exhortos Generados");
            }
            if (div == "divExhortosGeneradosConsulta") {

                $("#divExhortosGenerados").slideUp();
                $("#divExhortosGeneradosConsulta").slideDown();
                $("#cveJuzgado").val(<?= $cveJuzgado ?>);
                $("#idExhorto").val("");
                $("#idExhortoGenerado").val("");
                $("#registro").html("Consulta de Exhortos Generados");
            }

            $("#divCamposConsulta").slideUp();
            $("#divCampos").slideUp();
            $("#divFormulario").slideUp();
        };
        enviarEG = function (idExhortoGenerado, cveTipoCarpeta, numero, anio, cveEstado, cveJuzgadoDestino, juzgadoDestino, cveJuzgado, div) {

            limpiar();
            $("#divExhortosGenerados").slideUp();
            $("#divExhortosGeneradosConsulta").slideUp();
            $("#divCamposConsulta").slideUp();
            $("#divCampos").slideDown();
            $("#divFormulario").slideDown();
            $("#idExhortoGenerado").val(idExhortoGenerado);
            $("#cmbTipoCarpeta").val(cveTipoCarpeta);
            $("#txtNumeroC").val(numero);
            $("#txtAnioC").val(anio);
            $("#cmbEstado").val(cveEstado);
            $('#cmbJuzgado').select2('val', cveJuzgado);
            $('#cveJuzgado').val(cveJuzgadoDestino);
            $("#txtJuzgadoP").val(juzgadoDestino);
            $("#cmbEstatus").val(2);
            if ($("#cmbEstado").val() == 15) {
                $("#juzgadosEstado").slideDown();
                $("#juzgadosFuera").slideUp();
            } else {
                $("#juzgadosEstado").slideUp();
                $("#juzgadosFuera").slideDown();
            }

            $("#btn_accionE").show();
            $("#btn_consultarE").hide();
            $(".required").remove();
            $("#registro").html("Registro de Exhortos Recibidos");
            $("#btn_regresarER").html('<input type="submit" class="btn btn-primary" id="inputregresarER" value="Regresar" onclick=\'regresarER("' + div + '")\'> ');
            buscaImpofedel();
        };
        imprimirEG = function (idActuacion) {

            $.ajax({
                type: "POST",
                url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                async: false,
                dataType: "json",
                data: {
                    idActuacion: idActuacion,
                    pagina: 1,
                    totalRegistros: 1,
                    activo: 'S',
                    imprimir: 1,
                    accion: 'buscarGenerado'
                },
                success: function (data) {
                    //console.log(data);
                    var table = "";
                    $.each(data.data, function (key, value) {

                        var requi;
                        if (value.Requisitoria == "S") {
                            requi = "SI";
                        } else {
                            requi = "NO";
                        }

                        var separa = value.fechaRegistro.split(" ");
                        var fecha = separa[0];
                        var hrs = separa[1] + ' hrs.';
                        fecha = fecha.split("-");
                        var dia = fecha[2];
                        var mes = fecha[1];
                        var anio = fecha[0];
                        var juzgado;
                        if (value.desJuzgadoDestino != "") {

                            juzgado = value.desJuzgadoDestino;
                        } else {

                            juzgado = value.JuzgadoDestino;
                        }

                        table += '<table width="800" border="0">';
                        table += '  <tr>';
                        table += '    <td width="100" rowspan="3" align="left"><img src="img/EscudoEstadoMexico.png" width="80" height="80" /></td>';
                        table += '    <td width="470"><strong>Gobierno del Estado de Mexico</strong></td>';
                        table += '    <td width="150" rowspan="3" align="right"><img src="img/EscudoPoderJudicial.png" width="70" height="80" /></td>';
                        table += '  </tr>';
                        table += '  <tr>';
                        table += '    <td>Poder Judicial</td>';
                        table += '  </tr>';
                        table += '  <tr>';
                        table += '    <td>Consejo de la Judicatura</td>';
                        table += '  </tr>';
                        table += '</table>';
                        table += '<div style="padding:4px;color:#FFF;background:#066;';
                        table += '        border-radius: 5px;';
                        table += '        -moz-border-radius: 5px;';
                        table += '        -webkit-border-radius: 5px; ';
                        table += '        width:792px">';
                        table += '         <strong>Comprobante de Exhorto Generados</strong></div>';
                        table += '<p></p> ';
                        table += '<table width="800" border="0" style="border: solid #033;';
                        table += '                                    border-radius: 5px;';
                        table += '                                    -moz-border-radius: 5px;';
                        table += '                                    -webkit-border-radius: 5px; font-size:13px">';
                        table += '  <tr>';
                        table += '    <td width="180"><strong>N&uacute;mero Exhorto :</strong></td>';
                        console.log(value);
                        table += '    <td width="200" align="left">' + value.numeroExhorto + '</td>';
                        var instanciaSesion = obtenerInstanciaSesion(cveAdscripcion);
                        if(instanciaSesion == 2){
                                table += '    <td align="right"><strong>Tribunal Destino :</strong></td>';                    
                        }else{
                                table += '    <td align="right"><strong>Juzgado Destino :</strong></td>';
                        }
                        table += '    <td>' + juzgado + '</td>';
                        table += '  </tr>';
                        table += '  <tr>';
                        table += '    <td><strong>N&uacute;mero de Causa :</strong></td>';
                        table += '    <td align="left">' + value.numero + '/' + value.anio + '</td>';
                        table += '    <td width="100" align="right"><strong>Fecha de Alta :</strong></td>';
                        table += '    <td width="320">' + dia + '/' + mes + '/' + anio + ' ' + hrs + '</td>';
                        table += '  </tr>';
                        table += '  <tr>';
                        table += '    <td></td>';
                        table += '    <td></td>';
                        table += '    <td align="right"><strong>Procedencia :</strong></td>';
                        table += '    <td>' + value.desJuzgadoProcedencia + '</td>';
                        table += '  </tr>';
                        table += '</table>';
                        table += '<p></p> ';
                        table += '<table width="800" border="0" style="border: solid thin #033;';
                        table += '                                    border-radius: 5px;';
                        table += '                                    -moz-border-radius: 5px;';
                        table += '                                    -webkit-border-radius: 5px; font-size:13px">';
                        table += '  <tr>';
                        table += '    <td width="120"><strong>S&iacute;ntesis :</strong></td>';
                        table += '    <td colspan="3">' + value.sintesis + '</td>';
                        table += '  </tr>';
                        table += '  <tr>';
                        table += '    <td><strong>Requisitoria :</strong></td>';
                        table += '    <td width="270">' + requi + '</td>';
                        table += '    <td width="119" align="right"><strong>Estatus :</strong></td>';
                        table += '    <td width="231">' + value.desEstatus + '</td>';
                        table += '  </tr>';
                        table += '  <tr>';
                        table += '    <td><strong>Observaciones :</strong></td>';
                        table += '    <td colspan="2">' + value.observaciones + '</td>';
                        table += '    <td>&nbsp;</td>';
                        table += '  </tr>';
                        table += '</table>';
                        table += '<p></p> ';
                        table += '<table width="800" border="0" style="border: solid thin #033;';
                        table += '                                    border-radius: 5px;';
                        table += '                                    -moz-border-radius: 5px;';
                        table += '                                    -webkit-border-radius: 5px; ">';
                        table += '  <tr>';
                        table += '    <td colspan="2" align="center"><strong>IMPUTADO (S)</strong></td>';
                        table += '  </tr>';
                        if (value.listaImputados.length != 0) {
                            $.each(value.listaImputados, function (key2, value2) {
                                if (value2.cveTipoPersona == 1) { //Fisica

                                    table += '  <tr style="font-size:13px">';
                                    table += '    <td width="100" align="right"><strong>Nombre :</strong></td>';
                                    table += '    <td width="700" align="left">' + value2.nombre + ' ' + value2.paterno + ' ' + value2.materno + '</td>';
                                    table += '  </tr>';
                                } else {

                                    table += '  <tr style="font-size:13px">';
                                    table += '    <td width="100" align="right"><strong>Nombre :</strong></td>';
                                    table += '    <td width="700" align="left">' + value2.nombreMoral + '</td>';
                                    table += '  </tr>';
                                }

                            });
                        } else {

                            table += '  <tr>';
                            table += '    <td width="400" align="right"><strong></strong></td>';
                            table += '    <td width="400">Ninguno</td>';
                            table += '  </tr>';
                        }

                        table += '  <tr>';
                        table += '    <td width="400" align="right"></td>';
                        table += '    <td width="400" align="right"><strong>TOTAL IMPUTADOS: </strong>' + value.listaImputados.length + '</td>';
                        table += '  </tr>';
                        table += '</table>';
                        table += '<p></p>';
                        table += '<p></p>';
                        table += '<div style="font-size:13px">';
                        table += '<p>Por : ' + value.nombreCaptura + '</p>';
                        var fecha = new Date();
                        var actual = fecha.getDate() + "/" + (fecha.getMonth() + 1) + "/" + fecha.getFullYear() + " " + fecha.getHours() + ":" + fecha.getMinutes() + " hrs.";
                        table += '<p>Fecha de impresi&oacute;n : ' + actual + '</p>';
                        table += '</div>';
                        w = window.open("", 'Print_Page', 'scrollbars=yes');
                        w.document.write(table);
                        w.document.close();
                        w.print();
                        //w.close();
                    });
                }

            });
        };
        validaCarpeta = function () {
            var cveTipoCarpeta = $("#cmbTipoCarpetaG").val();
            var cveTipoJuzgado = $("#cveTipoJuzgadoG").val();
            cveTipoJuzgado = cveTipoJuzgado.split("/");
            var numero = $("#txtNumeroCG").val();
            var anio = $("#txtAnioCG").val();
            var valida = false;
            if ((cveTipoCarpeta != "" && cveTipoCarpeta != 0) && numero != "" && anio != "") {

                valida = true;
            }
            if (valida) {

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        cveTipoCarpeta: cveTipoCarpeta,
                        numero: numero,
                        anio: anio,
                        activo: 'S',
                        cveJuzgado: cveTipoJuzgado[0],
                        accion: 'buscarRelacion'
                    },
                    success: function (data) {
                        //console.log(data);
                        if (data.estatus == "ok") {
                            if (data.carpetaInv == null) {
                                data.carpetaInv = "No contiene Carp. Inv.";
                            }
                            var nuc = data.Nuc == null ? "" : data.Nuc;
                            $("#inputGuardarEG").attr('disabled', false);
                            $("#datosRelacionados").show();
                            $("#datosRelacionadostxt").empty();
                            $("#datosRelacionadostxt").append('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"> Carpeta Inv:</span> ' + data.carpetaInv + '<br>');
                            $("#datosRelacionadostxt").append('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"> Nuc:</span>' + nuc + '<br>');
                            $("#datosRelacionadostxt").append('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"> Imputado(s):</span> ' + data.NombreImputado + '<br>');
                            $("#datosRelacionadostxt").append('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"> Ofendido(s):</span> ' + data.NombreOfendido + '<br>');
                            $("#datosRelacionadostxt").append('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"> Delito:</span> ' + data.desDelito);
                            $("#resRelacion").html('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span> ' + data.mensaje);
                            $("#idReferenciaRelacion").val(data.idReferencia);
    //                guardarExhortoG();
                        } else {
                            $("#inputGuardarEG").attr('disabled', true);
                            $("#datosRelacionadostxt").empty();
                            $("#datosRelacionados").hide();
                            $("#resRelacion").html('<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span> ' + data.mensaje);
                        }
                    }

                });
            }
            ;
        };
        validaCarpeta2 = function (cveTipoCarpeta, cveTipoJuzgado) {
    //        var cveTipoCarpeta = $("#cmbTipoCarpetaG").val();
    //        var cveTipoJuzgado = $("#cveTipoJuzgadoG").val();
    //        cveTipoJuzgado = cveTipoJuzgado.split("/");
            var numero = $("#txtNumeroCG").val();
            var anio = $("#txtAnioCG").val();
            var valida = false;
            if ((cveTipoCarpeta != "" && cveTipoCarpeta != 0) && numero != "" && anio != "") {

                valida = true;
            }
            if (valida) {

                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        cveTipoCarpeta: cveTipoCarpeta,
                        numero: numero,
                        anio: anio,
                        activo: 'S',
                        cveJuzgado: cveTipoJuzgado,
                        accion: 'buscarRelacion'
                    },
                    success: function (data) {
                        //console.log(data);
                        if (data.estatus == "ok") {
                            if (data.carpetaInv == null) {
                                data.carpetaInv = "No contiene Carp. Inv.";
                            }
                            var nuc = data.Nuc == null ? "" : data.Nuc;
                            $("#inputGuardarEG").attr('disabled', false);
                            $("#datosRelacionados").show();
                            $("#datosRelacionadostxt").empty();
                            $("#datosRelacionadostxt").append('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"> Carpeta Inv:</span> ' + data.carpetaInv + '<br>');
                            $("#datosRelacionadostxt").append('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"> Nuc:</span>' + nuc + '<br>');
                            $("#datosRelacionadostxt").append('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"> Imputado(s):</span> ' + data.NombreImputado + '<br>');
                            $("#datosRelacionadostxt").append('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"> Ofendido(s):</span> ' + data.NombreOfendido + '<br>');
                            $("#datosRelacionadostxt").append('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"> Delito:</span> ' + data.desDelito);
                            $("#resRelacion").html('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span> ' + data.mensaje);
                            $("#idReferenciaRelacion").val(data.idReferencia);
    //                guardarExhortoG();
                        } else {
                            $("#inputGuardarEG").attr('disabled', true);
                            $("#datosRelacionadostxt").empty();
                            $("#datosRelacionados").hide();
                            $("#resRelacion").html('<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span> ' + data.mensaje);
                        }
                    }

                });
            }
            ;
        };
        showMessage = function (message, div) {

            var message = message || '';
            $('#' + div).html(message);
            $('#' + div).show("slide");
            setTimeout(function () {
                $("#" + div).hide("slide");
            }, 3000);
        };
        getDate = function (element) {
            var element = element || 'all';
            var finaldate = '';
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; //January is 0!
            var yyyy = today.getFullYear();
            var hour = today.getHours();
            var minu = today.getMinutes();
            var secs = today.getSeconds();
            if (dd < 10) {
                dd = '0' + dd
            }
            if (mm < 10) {
                mm = '0' + mm
            }
            if (minu < 10) {
                minu = '0' + minu
            }

            if (element == 'all') {
                finaldate = yyyy + '/' + mm + '/' + dd + ' ' + hour + ':' + minu + ':' + secs;
            }
            if (element == 'year') {
                finaldate = yyyy;
            }
            if (element == 'today') {
                finaldate = dd + '/' + mm + '/' + yyyy;
            }
            return finaldate
        };
        validaAnio = function (data, input) {
            var d = new Date();
            var anio = d.getFullYear();
            if (data.length < 4 & data.length > 0) {
                alert("El A\u00F1o es MENOR al A\u00F1o Limite 1980");
                if (input == "C") {
                    $("#txtAnioC").val("");
                }
                if (input == "O") {
                    $("#txtAnioO").val("");
                }
            }
            if (data > anio) {
                alert("El A\u00F1o es MAYOR al A\u00F1o Actual");
                if (input == "C") {
                    $("#txtAnioC").val("");
                }
                if (input == "O") {
                    $("#txtAnioO").val("");
                }
            } else if (data < "1980") {
                alert("El A\u00F1o es MENOR al A\u00F1o Limite 1980");
                if (input == "C") {
                    $("#txtAnioC").val("");
                }
                if (input == "O") {
                    $("#txtAnioO").val("");
                }
            }


        };

        // codigo para agregar los testigos de imputados
        function guardaTestigo(){
            if($("#cmbTiposPartesI").val() != 0 && $("#cmbImputadosAgregados").val() != 0 && $("#nombreTestigoI").val() != ""){
                tipoParte = $("#cmbTiposPartesI").val();
                nombreTipoParte = $("#cmbTiposPartesI").find('option:selected').text();
                imputadoCadena = $("#cmbImputadosAgregados").val();
                nombreImputado = $("#cmbImputadosAgregados").find('option:selected').text();
                nombreTestigo = $("#nombreTestigoI").val().toUpperCase();
                TestigoIObj = new Object();
                TestigoIObj.cveTipoParte = tipoParte;
                TestigoIObj.descTipoParte = nombreTipoParte;
                TestigoIObj.imputadoCadena = imputadoCadena;
                TestigoIObj.nombreImputado = nombreImputado;
                TestigoIObj.nombreTestigo = nombreTestigo;
                TestigoIObj.activo = "S";
                TestigoIObj.idTestigoCarpetaJudicial = '';
                listaTestigosI.push(TestigoIObj);
                console.log(listaTestigosI);
                $("#testigosTbody").html(formarTablaTestigoI());
            }else{
                $.alert({
                    title: '<center style="color:#881518;">Aviso!</center>',
                    content: '<center> Es necesario llenar todos los campos del Testigo <br> <br> </center>',
                    confirmButton: 'Aceptar'
                });
            }
        }
       /*
         * function para formar Tabla de testigos a partir de una lista de arrays
         * @type type     */
        function formarTablaTestigoI() {

            var tabla = " ";
            for (var i = 0; i < listaTestigosI.length; i++) {
                if (listaTestigosI[i].activo == "S") {

                    tabla += "<tr >";
                    tabla += "<td onclick='cargarTestigoEditar(" + i + ")'>" + (i+1) + "</td>";
                    tabla += "<td onclick='cargarTestigoEditar(" + i + ")'>" + listaTestigosI[i].nombreTestigo + "</td>";
                    tabla += "<td onclick='cargarTestigoEditar(" + i + ")'>" + listaTestigosI[i].descTipoParte + "</td>";
                    tabla += "<td onclick='cargarTestigoEditar(" + i + ")'>" + listaTestigosI[i].nombreImputado + "</td>";
                    tabla += "<td><img src='img/eliminar.png' width='27px' style='cursor:pointer;' class='btnElimApel' onclick='eliminarTestigo(" + i + "); '></td>";
                    tabla += "</tr>";
                }
            }

            return tabla;
        }

        function cargarTestigoEditar(i) {
            $("#hiddenI").val(i);
            $("#cmbTiposPartesI").val(listaTestigosI[i].cveTipoParte);
            $("#cmbImputadosAgregados").val(listaTestigosI[i].imputadoCadena);
            $("#cmbImputadosAgregados").prop("disabled",true);
            $("#nombreTestigoI").val(listaTestigosI[i].nombreTestigo);
            $("#inputModificarTestigo").show();
            $("#inputAgregarTestigo").hide();
        }
        function actualizaTestigo() {
            var i = $("#hiddenI").val();
            listaTestigosI[i].cveTipoParte = $("#cmbTiposPartesI").val();
            listaTestigosI[i].descTipoParte = $("#cmbTiposPartesI").find('option:selected').text();
            listaTestigosI[i].nombreTestigo = $("#nombreTestigoI").val().toUpperCase();
            $("#cmbImputadosAgregados").prop("disabled",false);
            limpiarTestigo();
            $("#testigosTbody").html(formarTablaTestigoI());
            $("#inputAgregarTestigo").show();
            $("#inputModificarTestigo").hide();
        }

        function eliminarTestigo(id) {
            if (listaTestigosI[id].idTestigoCarpetaJudicial != "") {
                listaTestigosI[id].activo = "N";
            } else {
                listaTestigosI.splice(id, 1);
            }
                $("#testigosTbody").html(formarTablaTestigoI());
            limpiarTestigo();
        }

        // codigo para agregar los testigos de ofendidos
        function guardaTestigoO(){
            if($("#cmbTiposPartesO").val() != 0 && $("#cmbOfendidosAgregados").val() != 0 && $("#nombreTestigoO").val() != ""){
                tipoParte = $("#cmbTiposPartesO").val();
                nombreTipoParte = $("#cmbTiposPartesO").find('option:selected').text();
                ofendidoCadena = $("#cmbOfendidosAgregados").val();
                nombreOfendido = $("#cmbOfendidosAgregados").find('option:selected').text();
                nombreTestigo = $("#nombreTestigoO").val().toUpperCase();
                TestigoOObj = new Object();
                TestigoOObj.cveTipoParte = tipoParte;
                TestigoOObj.descTipoParte = nombreTipoParte;
                TestigoOObj.ofendidoCadena = ofendidoCadena;
                TestigoOObj.nombreOfendido = nombreOfendido;
                TestigoOObj.nombreTestigo = nombreTestigo;
                TestigoOObj.activo = "S";
                TestigoOObj.idTestigoCarpetaJudicial = '';
                listaTestigosO.push(TestigoOObj);
                console.log(listaTestigosO);
                $("#testigosTbodyO").html(formarTablaTestigoO());
            }else{
                $.alert({
                    title: '<center style="color:#881518;">Aviso!</center>',
                    content: '<center> Es necesario llenar todos los campos del Testigo <br> <br> </center>',
                    confirmButton: 'Aceptar'
                });
            }
        }
       /*
         * function para formar Tabla de testigos a partir de una lista de arrays
         * @type type     */
        function formarTablaTestigoO() {

            var tabla = " ";
            for (var i = 0; i < listaTestigosO.length; i++) {
                if (listaTestigosO[i].activo == "S") {

                    tabla += "<tr >";
                    tabla += "<td onclick='cargarTestigoEditarO(" + i + ")'>" + (i+1) + "</td>";
                    tabla += "<td onclick='cargarTestigoEditarO(" + i + ")'>" + listaTestigosO[i].nombreTestigo + "</td>";
                    tabla += "<td onclick='cargarTestigoEditarO(" + i + ")'>" + listaTestigosO[i].descTipoParte + "</td>";
                    tabla += "<td onclick='cargarTestigoEditarO(" + i + ")'>" + listaTestigosO[i].nombreOfendido + "</td>";
                    tabla += "<td ><img src='img/eliminar.png' width='27px' style='cursor:pointer;' class='btnElimApel' onclick='eliminarTestigoO(" + i + ")'></td>";
                    tabla += "</tr>";
                }
            }

            return tabla;
        }

        function cargarTestigoEditarO(i) {
            $("#hiddenI").val(i);
            $("#cmbTiposPartesO").val(listaTestigosO[i].cveTipoParte);
            $("#cmbOfendidosAgregados").val(listaTestigosO[i].ofendidoCadena);
            $("#cmbOfendidosAgregados").prop("disabled",true);
            $("#nombreTestigoO").val(listaTestigosO[i].nombreTestigo);
            $("#inputModificarTestigoO").show();
            $("#inputAgregarTestigoO").hide();
        }
        function actualizaTestigoO() {
            var i = $("#hiddenI").val();
            listaTestigosO[i].cveTipoParte = $("#cmbTiposPartesO").val();
            listaTestigosO[i].descTipoParte = $("#cmbTiposPartesO").find('option:selected').text();
            listaTestigosO[i].nombreTestigo = $("#nombreTestigoO").val().toUpperCase();
            $("#cmbOfendidosAgregados").prop("disabled",false);
            limpiarTestigo();
            $("#testigosTbodyO").html(formarTablaTestigoO());
            $("#inputAgregarTestigoO").show();
            $("#inputModificarTestigoO").hide();
        }

        function eliminarTestigoO(id) {
            if (listaTestigosO[id].idTestigoCarpetaJudicial != "") {
                listaTestigosO[id].activo = "N";
            } else {
                listaTestigosO.splice(id, 1);
            }
                $("#testigosTbodyO").html(formarTablaTestigoO());
            limpiarTestigoO();
        }

        $(function () {

            // $("#numeroE").attr('disabled', 'disabled');
            // $("#anioE").attr('disabled', 'disabled');

            $('#txtNumeroC').validaCampo('0123456789');
            $('#txtAnioC').validaCampo('0123456789');
            $('#txtOficio').validaCampo('0123456789');
            $('#txtAnioO').validaCampo('0123456789');
            $('#txtTelefonoI').validaCampo('0123456789');
            $('#txtTelefonoO').validaCampo('0123456789');
            $('#txtNumeroCConsulta').validaCampo('0123456789');
            $('#txtAnioCConsulta').validaCampo('0123456789');
            $('#txtOficioConsulta').validaCampo('0123456789');
            $('#txtAnioOConsulta').validaCampo('0123456789');
            $('#txtNumeroCG').validaCampo('0123456789');
            $('#txtAnioCG').validaCampo('0123456789');
            $('#txtNumeroCGConsulta').validaCampo('0123456789');
            $('#txtAnioCGConsulta').validaCampo('0123456789');
            $('#numeroEGC').validaCampo('0123456789');
            $('#anioEGC').validaCampo('0123456789');
            $('#numeroEC').validaCampo('0123456789');
            $('#anioEC').validaCampo('0123456789');
            $('#numOficio').validaCampo('0123456789');
            $('#anioOficio').validaCampo('0123456789');
            $('#telefonoEG').validaCampo('0123456789');
            $("#fechaInicial,#fechaFinal,#fechaInicialG,#fechaFinalG,#fechaInicioEG,#fechaTerminoEG").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY"
            }
            );
            $('#fechaInicial, #fechaFinal,#fechaInicialG,#fechaFinalG,#fechaInicioEG,#fechaTerminoEG').val(getDate('today'));
            cargaDistrito();
            cargaEstados();
            cargaConsigancion();
            cargaEstatus();
            cargaTipoPersona();
    //        $("#cmbJuzgado").select2();
            $("#cmbJuzgadoConsulta").select2();
            $('#cmbJuzgadoG').select2();
            $("#cmbJuzgadoGConsulta").select2();
            cargaJuzgado();
            cargaJuzgadoD();
            cargaTiposPartes();
            cargaGenero();
            cargaCereso();
            cargaDelito();
//            if (origen == 1) {
//                var permisos = obtenerPermisosFormulario("SECRETARIO DE TRIBUNAL DE ALZADA", "EXHORTOS GENERADOS");
//                if (permisos.Update == "N") {
//                    $("#actEnve").hide();
//                }
//                if (permisos.Read == "N") {
//                    $("#inputConsultar").hide();
//                }
//            } else {
//                var permisos = obtenerPermisosFormulario("CARPETAS JUDICIALES", "EXHORTOS GENERADOS");
//                if (permisos.Update == "N") {
//                    $("#inputGuardarEG").hide();
//                }
//                if (permisos.Read == "N") {
//                    $("#inputConsultar").hide();
//                }
//            }

            //funciones para exhortos generados en el estado
            cargaEstatusG();
            editor = UE.getEditor('txtObservaciones');
            editor.ready(function () {
                editor.setContent("");
            });
            editorG = UE.getEditor('textoExhortoG');
            editorG.ready(function () {
                editorG.setContent("", false);
            });
            var tipoRegistro = $("#tipoRegistro").val();
            // alert("tipoRegistro "+tipoRegistro);
            var idExhorto = $("#idExhorto").val();
            var idActuacion = $("#idExhortoGenerado").val();
            var arbol = $("#arbol").val();
            // alert("idExhorto "+ idExhorto );
            if (arbol == 1) {
                if (tipoRegistro == 0) {
                    seleccionaE(idExhorto);
                } else if (tipoRegistro == 1) {
                    seleccionaEG(idActuacion);
                }
            }

        });
        validaAnio = function () {
            var d = new Date();
            var anio = d.getFullYear();
            var txtAnioCG = $('#txtAnioCG').val();
            if (txtAnioCG.length < 4 & txtAnioCG.length > 0) {
                alert("El a\u00F1o es MENOR al a\u00F1o Limite 1980");
                $("#txtAnioCG").val("");
            }
            var anioOficio = $('#anioOficio').val();
            if (anioOficio.length < 4 & anioOficio.length > 0) {
                alert("El a\u00F1o es MENOR al a\u00F1o Limite 1980");
                $("#anioOficio").val("");
            }
        }
    </script> 
    <?php
    if (isset($_POST['idActuacion'])) {
        $idActuacion = @$_POST['idActuacion'];
        ?>
        <script languaje="javascript">
            $(function () {
                seleccionaEG(<?php echo $idActuacion ?>);
                bloqueoCombos();
                $("#inputLimpiarG").hide();
                $("#inputLimpiar3").hide();
                $("#inputConsultar").hide();
                $("#inputLimpiarArbol").show();
                muestraOcultaBotones();
            });</script> 

        <?PHP
    } else if (isset($_POST['idReferencia'])) {
        $idReferencia = @$_POST['idReferencia'];
        $cveJuzgado = @$_POST['cveJuzgado'];
        $cveTipoCarpeta = @$_POST['cveTipoCarpeta'];
        ?>
        <script languaje="javascript">
            $(function () {
                consultaEG(<?php echo $idReferencia ?>,<?php echo $cveJuzgado ?>,<?php echo $cveTipoCarpeta ?>);
                bloqueoCombos();
                $("#inputLimpiarG").hide();
                $("#inputLimpiar3").hide();
                $("#inputConsultar").hide();
                $("#inputLimpiarArbol").show();
                muestraOcultaBotones();
            });
        </script> 
        <?php
    }
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>
