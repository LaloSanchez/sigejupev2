<?php
$tipo_registro = 0; // $_GET["exhorto"];
ini_set("log_errors", 0);
ini_set('display_errors', 0);
//ini_set('error_reporting', E_ALL ^ E_NOTICE);

if (!isset($_SESSION)) {
   session_start();
}
if (isset($_SESSION["cveUsuarioSistema"]) && $_SESSION["cveUsuarioSistema"] !== "") {

    $cveJuzgado = $_SESSION['cveAdscripcion'];

    if ($tipo_registro == 1) {
        $registro = "ACTUALIZAR Exhortos";
        $displayExhortoG = "block";
        $displayExhortoR = "none";
    } else {
        //$registro = "ACTUALIZAR Registro de Exhortos Recibidos";
        $registro = "Actualizar Exhortos";
        $displayExhortoG = "none";
        $displayExhortoR = "block";
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
        input, textarea {
            text-transform: uppercase;
        }
        .a_accordion{
            text-decoration: underline;
        }
        .btn{
            text-transform: capitalize;
        }
    </style>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h5 class="panel-title" id="registro">                                                            
                <?php echo $registro; ?>
            </h5>
        </div>
        <div class="panel-body">


            <!-- INICIO EXHORTOS RECIBIDOS-->
            <div id="divFormulario" class="form-horizontal" style="display:<?php echo $displayExhortoR; ?>">
                <input type="hidden" id="cveJuzgado" value="<?=$cveJuzgado?>"/>
                <div id="btn_regresarER" style="display:inline-block"></div> 
                <div id="divCampos" style="display:none">
                    <div class="form-group">
                        <div class="col-xs-2">
                            <input type="hidden" id="idExhorto" value=""/>
                            <input type="hidden" id="idExhortoGenerado" value=""/>
                        </div>                           
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">No. Exhorto</label>
                        <div class="col-xs-9">
                            <input type="text" id="numeroE" class="form-inline" maxlength="4" placeholder="N&uacute;mero"/>
                            /
                            <input type="text" id="anioE" class="form-inline" maxlength="4" placeholder="A&ntilde;o"/>
                            &nbsp;
                            <span id="msjValidacion" class="form-inline"></span>
                        </div>                       
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3 ">Estado <span class="requerido">(*)</span></label>
                        <div class="col-xs-6">
                            <div id="divCmbEstado" class="logobox"></div>
                            <select class="form-control Relacionado bloqueoE" name="cmbEstado" id="cmbEstado" onchange="validaEstado(true)">
                                <option value="0">Seleccione una opcion</option>
                            </select>
                        </div>                                
                    </div>
                    <div id="juzgadosEstado"  style='display:block'>
                        <div class="form-group">                                                                
                            <label class="control-label col-xs-3 ">Juzgado de Procedencia <span class="requerido">(*)</span></label>
                            <div>
                                <select class="col-xs-6 bloqueoE" name="cmbJuzgado" id="cmbJuzgado">
                                    <option value="0">Seleccione una opcion</option>
                                </select>
                            </div>                                
                        </div>
                    </div>
                    <div id="juzgadosFuera" style='display:none'>    
                        <div class="form-group">                                                                
                            <label class="control-label col-xs-3">Juzgado de Procedencia <span class="requerido">(*)</span></label>
                            <div class="col-xs-6">
                                <input type="text" id="txtJuzgadoP" placeholder="Juzgado Procedencia" class="form-control bloqueoE" value=""/>
                            </div>
                        </div>
                    </div>    
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">Carpeta de Investigaci&oacute;n <span class="requerido">(*)</span></label>

                        <div class="col-xs-2">
                            <input type="text" id="txtCarpetaInv" placeholder="Carpeta Inv." class="form-control bloqueoE" value=""/>

                        </div>  
                        <!-- <label class="control-label col-xs-2">No. Exhorto</label>
                        <div class="col-xs-2">
                            <input type="text" id="numeroE" class="form-inline " placeholder="N&uacute;mero" size="5" disabled>
                            / <input type="text" id="anioE" class="form-inline "  placeholder="A&ntilde;o" size="5" disabled>
                        </div>  -->                      
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">NUC (N&uacute;mero &Uacute;nico de Causa) <span class="requerido">(*)</span></label>

                        <div class="col-xs-2">
                            <input type="text" id="txtNuc" placeholder="Nuc" class="form-control bloqueoE" value=""/>
                        </div>    

                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3 ">Tipo de Carpeta de Procedencia <span class="requerido">(*)</span></label>
                        <div class="col-xs-6">
                            <div id="divCmbRelaciones" class="logobox"></div>
                            <select class="form-control Relacionado bloqueoE" name="cmbTipoCarpeta" id="cmbTipoCarpeta" onchange="changeLabel(this, ''), buscaImpofedel()" >
                                <option value="0">Seleccione una opcion</option>
                            </select>
                        </div>                                
                    </div>   
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3" id="lblRelationName">No. de Causa <span class="requerido">(*)</span></label>
                        <div id="divSinRelacion" class="col-xs-9">
                            <input type="text" id="txtNumeroC" class="form-inline Relacionado bloqueoE" placeholder="N&uacute;mero" onblur="buscaImpofedel()">
                            / <input type="text" class="form-inline Relacionado bloqueoE" id="txtAnioC" placeholder="A&ntilde;o" onblur="buscaImpofedel()">
                        </div>                              
                    </div> 
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">No. de Oficio <span class="requerido">(*)</span></label>

                        <div class="col-xs-9">
                            <input type="text" id="txtOficio" placeholder="No. Oficio" class="form-inline Relacionado bloqueoE" />
                            /<input type="text" class="form-inline Relacionado bloqueoE" id="txtAnioO" placeholder="A&ntilde;o">
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">Sintesis <span class="requerido">(*)</span></label>

                        <div class="col-xs-6">
                            <input type="text" id="txtSintesis" placeholder="Sintesis" class="form-control bloqueoE" value=""/>
                        </div>
                    </div>

                    <div id="divNotas" class="form-group">
                        <label class="control-label col-xs-3">Observaciones</label>
                        <div class="col-xs-6">
                            <textarea rows="5" id="txtObservaciones" class="form-control bloqueoE" placeholder="Observaciones"></textarea>
                        </div>
                    </div>
                    <div class="form-group">                                                                

                        <label class="control-label col-xs-3 " >Estado <span class="requerido">(*)</span></label>
                        <div class="col-xs-3">
                            <div id="divCmbEstatus" class="logobox"></div>
                            <select class="form-control Relacionado bloqueoE" name="cmbEstatus" id="cmbEstatus">
                                <option value="0">Seleccione una opcion</option>
                            </select>
                        </div>   
                        <label class="control-label col-xs-1 "></label>
                        <div class="col-xs-2">
                            <div id="resConsignacion" class="logobox"></div>
                        </div>                             
                    </div>
                    <div class="form-group" style="text-align:center">
                        <div id="divAlertWarning_seccion1" class="alert alert-warning alert-dismissable"></div>
                        <div id="divAlertSuccess_seccion1" class="alert alert-success alert-dismissable"></div>
                        <div id="divAlertDanger_seccion1" class="alert alert-danger alert-dismissable"></div>
                        <div id="divAlertInfo_seccion1" class="alert alert-info alert-dismissable"></div>
                    </div> 



                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="width:100%;margin-left:auto;margin-right:auto">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" class="a_accordion">
                                        IMPUTADOS
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <!-- INICIO DE FORMULARIO DE IMPUTADOS -->
                                    <div class="form-group">
                                        <label class="control-label col-xs-3 ">Tipo Persona <span class="requerido">(*)</span></label>
                                        <div class="col-xs-6"> 
                                            <div id="divCmbTipoPersonaImputado" class="logobox"></div>
                                            <select class="form-control Relacionado bloqueoE" name="cmbTipoPersonaImputado" id="cmbTipoPersonaImputado" onchange="seleccionaTipoIm()">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="divImputados">
                                        <div id="ImputadosMoral" style="display:none">
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3">Nombre <span class="requerido">(*)</span></label>
                                                <div class="col-xs-6">
                                                    <input type="text" id="txtNombreMoralI" placeholder="Persona Moral" class="form-control txtImpM" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'cmbConsignacionIMoral', 'txtImpM', 'lstImputados', 'imputados');"/>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3 ">Consignaci&oacute;n <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <div id="divCmbConsignacion" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbConsignacionIMoral" id="cmbConsignacionIMoral">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3 ">Estado <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <div id="divCmbEstadoIMoral" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbEstadoMoralI" id="cmbEstadoMoralI" onchange="cargaMunicipioMoralI()">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>
                                                </div>
                                                <label class="control-label col-xs-2 ">Municipio <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <div id="divCmbMunicipioMoralI" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbMunicipioMoralI" id="cmbMunicipioMoralI">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>
                                                </div>                                
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3">Domicilio <span class="requerido">(*)</span></label>
                                                <div class="col-xs-6">
                                                    <input type="text" id="txtDomicilioMoralI" placeholder="Domicilio" class="form-control" value=""/>
                                                </div>
                                            </div>

                                            <div class="form-group">  
                                                <label class="control-label col-xs-3"></label>                                                              
                                                <div class="col-xs-6">
                                                    <div id="divBotonAgregaImputadoM" style="display:inline-block">
                                                        <input type="submit" class="btn btn-primary" id="inputAgregarImputadoM" value="Agregar Imputado" onclick="return capturaBoton('txtImpM', 'lstImputados', 'imputados');">
                                                    </div>
                                                    <div id="divBotonActualizarImputadoM" style="display:inline-block"></div>
                                                    <input type="submit" class="btn btn-primary" id="inputLimpiarImputado" value="Limpiar" onclick="return limpiarImputado('lstImputados', 'imputados');">

                                                </div>
                                            </div>
                                        </div>
                                        <div id="ImputadosFisica" style="display:none"> 

                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3">Imputado <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <input type="text" id="txtNombreFisicaI" placeholder="Nombre" class="form-control txtImpF" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'txtPaternoFisicaI', 'txtImpF', 'lstImputados');"/>
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="text" id="txtPaternoFisicaI" placeholder="Paterno" class="form-control txtImpF" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'txtMaternoFisicaI', 'txtImpF', 'lstImputados');"/>
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="text" id="txtMaternoFisicaI" placeholder="Materno" class="form-control txtImpF" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'cmbConsignacionI', 'txtImpF', 'lstImputados', 'imputados');"/>
                                                </div>

                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3 ">Consignaci&oacute;n <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <div id="divCmbConsignacion" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbConsignacionI" id="cmbConsignacionI" onchange="validaConsignacion()">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>

                                                </div>  
                                                <label class="control-label col-xs-2 ">Genero <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <div id="divCmbGeneroImputado" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbGeneroImputado" id="cmbGeneroImputado">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>
                                                </div>                                 
                                            </div>

                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3 ">Estado <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <div id="divCmbEstadoI" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbEstadoI" id="cmbEstadoI" onchange="cargaMunicipioIm()">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>
                                                </div>
                                                <label class="control-label col-xs-2 ">Municipio <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <div id="divCmbMunicipioI" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbMunicipioI" id="cmbMunicipioI">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>
                                                </div>                                
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3">Domicilio <span class="requerido">(*)</span></label>
                                                <div class="col-xs-6">
                                                    <input type="text" id="txtDomicilioI" placeholder="Domicilio" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3">Alias</label>
                                                <div class="col-xs-2">
                                                    <input type="text" id="txtAlias" placeholder="Alias" class="form-control" value=""/>
                                                </div>
                                                <label class="control-label col-xs-2">Tel&eacute;fono</label>
                                                <div class="col-xs-2">
                                                    <input type="text" id="txtTelefonoI" placeholder="Telefono" class="form-control" value="" maxlength="10"/>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3 ">Cereso <span class="requerido">(*)</span></label>
                                                <div class="col-xs-6">
                                                    <div id="divCmbCereso" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbCereso" id="cmbCereso">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>
                                                </div>                                
                                            </div>

                                            <div class="form-group">  
                                                <label class="control-label col-xs-3"></label>                                                              
                                                <div class="col-xs-6">
                                                    <div id="divBotonAgregaImputadoF" style="display:inline-block">
                                                        <input type="submit" class="btn btn-primary" id="inputAgregarImputadoF" value="Agregar Imputado" onclick="return capturaBoton('txtImpF', 'lstImputados', 'imputados');">
                                                    </div>
                                                    <div id="divBotonActualizarImputadoF" style="display:inline-block"></div>
                                                    <input type="submit" class="btn btn-primary" id="inputLimpiarImputado" value="Limpiar" onclick="return limpiarImputado('lstImputados', 'imputados');">
                                                </div>

                                            </div>
                                        </div>    
                                    </div>

                                    <div class="form-group" style="display:none">
                                        <label class="control-label col-xs-3">Lista Imputado(s):</label>
                                        <div class="col-xs-6">
                                            <select
                                                name="lstImputados" id="lstImputados"
                                                class="form-control  bloqueoE"
                                                onDblClick="borraPersona(this.id, 'imputados');" 
                                                style="height: 200px" multiple >
                                            </select>
                                        </div>
                                    </div>
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

                                    </div>


                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed a_accordion" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        OFENDIDOS
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">

                                    <div class="form-group">
                                        <label class="control-label col-xs-3 ">Tipo Persona <span class="requerido">(*)</span></label>
                                        <div class="col-xs-6"> 
                                            <div id="divCmbTipoPersonaOfendido" class="logobox"></div>
                                            <select class="form-control Relacionado bloqueoE" name="cmbTipoPersonaOfendido" id="cmbTipoPersonaOfendido" onchange="seleccionaTipoOf()">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div id="divOfendidos">
                                        <div id="OfendidosMoral" style="display:none">
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3">Nombre <span class="requerido">(*)</span></label>
                                                <div class="col-xs-6">
                                                    <input type="text" id="txtNombreMoralO" placeholder="Persona Moral" class="form-control txtOfeM" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'cmbEstadoMoralO', 'txtOfeM', 'lstOfendidos');"/>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3 ">Estado <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <div id="divCmbEstadoMoralO" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbEstadoMoralO" id="cmbEstadoMoralO" onchange="cargaMunicipioMoralO()">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>
                                                </div>
                                                <label class="control-label col-xs-2 ">Municipio <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <div id="divCmbMunicipioMoralO" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbMunicipioMoralO" id="cmbMunicipioMoralO">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>
                                                </div>                                
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3">Domicilio <span class="requerido">(*)</span></label>
                                                <div class="col-xs-6">
                                                    <input type="text" id="txtDomicilioMoralO" placeholder="Domicilio" class="form-control" value=""/>
                                                </div>
                                            </div>

                                            <div class="form-group">  
                                                <label class="control-label col-xs-3"></label>                                                        
                                                <div class="col-xs-6">
                                                    <div id="divBotonAgregaOfendidoM" style="display:inline-block">
                                                        <input type="submit" class="btn btn-primary" id="inputAgregarOfendidosM" value="Agregar Ofendido" onclick="return capturaBoton('txtOfeM', 'lstOfendidos', 'ofendidos');">
                                                    </div>
                                                    <div id="divBotonActualizarOfendidoM" style="display:inline-block"></div>

                                                    <input type="submit" class="btn btn-primary" id="inputLimpiarOfendido" value="Limpiar" onclick="return limpiarOfendido('lstOfendidos', 'ofendidos');">
                                                </div>
                                            </div>
                                        </div>
                                        <div id="OfendidosFisica" style="display:none">    
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3">Ofendido <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <input type="text" id="txtNombreFisicaO" placeholder="Nombre" class="form-control txtOfeF" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'txtPaternoFisicaO', 'txtOfeF', 'lstOfendidos');"/>
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="text" id="txtPaternoFisicaO" placeholder="Paterno" class="form-control txtOfeF" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'txtMaternoFisicaO', 'txtOfeF', 'lstOfendidos');"/>
                                                </div>
                                                <div class="col-xs-2">
                                                    <input type="text" id="txtMaternoFisicaO" placeholder="Materno" class="form-control txtOfeF" value=""
                                                           onKeyPress="return capturaNombrePersona(event, 'cmbGeneroOfendido', 'txtOfeF', 'lstOfendidos');"/>
                                                </div>

                                            </div>                       
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3 ">Genero <span class="requerido">(*)</span></label>
                                                <div class="col-xs-6">
                                                    <div id="divCmbGeneroOfendido" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbGeneroOfendido" id="cmbGeneroOfendido">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>
                                                </div>                                
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3 ">Estado <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <div id="divCmbEstadoO" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbEstadoO" id="cmbEstadoO" onchange="cargaMunicipioOf()">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>
                                                </div>
                                                <label class="control-label col-xs-2 ">Municipio <span class="requerido">(*)</span></label>
                                                <div class="col-xs-2">
                                                    <div id="divCmbMunicipioO" class="logobox"></div>
                                                    <select class="form-control Relacionado" name="cmbMunicipioO" id="cmbMunicipioO">
                                                        <option value="0">Seleccione una opcion</option>
                                                    </select>
                                                </div>                                
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3">Domicilio <span class="requerido">(*)</span></label>
                                                <div class="col-xs-6">
                                                    <input type="text" id="txtDomicilioO" placeholder="Domicilio" class="form-control" value=""/>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                                
                                                <label class="control-label col-xs-3">Telefono <span class="requerido">(*)</span></label>
                                                <div class="col-xs-6">
                                                    <input type="text" id="txtTelefonoO" placeholder="Telefono" class="form-control" value="" maxlength="10"/>
                                                </div>
                                            </div>
                                            <div class="form-group">  
                                                <label class="control-label col-xs-3"></label>                                                              
                                                <div class="col-xs-6">
                                                    <div id="divBotonAgregaOfendidoF" style="display:inline-block">
                                                        <input type="submit" class="btn btn-primary" id="inputAgregarOfendidosF" value="Agregar Ofendido" onclick="return capturaBoton('txtOfeF', 'lstOfendidos', 'ofendidos');">
                                                    </div>
                                                    <div id="divBotonActualizarOfendidoF" style="display:inline-block"></div>
                                                    <input type="submit" class="btn btn-primary" id="inputLimpiarOfendido" value="Limpiar" onclick="return limpiarOfendido('lstOfendidos', 'ofendidos');">

                                                </div>
                                            </div>

                                        </div>  
                                        <div class="form-group" style="display:none">
                                            <label class="control-label col-xs-3">Lista Ofendido(s):</label>
                                            <div class="col-xs-6">
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

                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed a_accordion" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        DELITOS
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">

                                    <div class="form-group">
                                        <label class="control-label col-xs-3 ">Delito <span class="requerido">(*)</span></label>
                                        <div class="col-xs-6"> 
                                            <div id="divCmbDelito" class="logobox"></div>
                                            <select class="form-control Relacionado txtDel bloqueoE" name="cmbDelito" id="cmbDelito" 
                                                    onchange="return capturaDelito('agregaPersona', 'txtDel', 'lstDelitos', 'delitos')">
                                                <option value="0">Seleccione una opcion</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="display:none">
                                        <label class="control-label col-xs-3">Lista Delito(s):</label>
                                        <div class="col-xs-6">
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

                    <div id="divListaPromoventes" class="form-group">
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
                                        <input type="submit" class="btn btn-primary" id="inputGuardar" value="Actualizar" onclick="guardarExhorto();">
                                    </div> 
                                    <input type="submit" class="btn btn-primary" id="inputConsultar" value="Consultar" onclick="consultar();"> <!-- ConsultarXX -->
    <!--                                <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar();"> -->
                                </div>  
                                <div id="btn_imprimirER" style="display:inline-block"></div>

                            </div>

                        </div>         
                    </div>

                </div>

                <!-- INICIO DE CONSULTA-->
                <div id="divCamposConsulta" style="display:block">
    <!--                <div  style="text-align:left">
                        <div>
                            <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultar();">
                        </div>
                    </div> -->
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3 ">Estado</label>
                        <div class="col-xs-6">
                            <select class="form-control Relacionado" name="cmbEstadoConsulta" id="cmbEstadoConsulta" onchange="validaEstadoConsulta()">
                                <option value="0">Seleccione una opcion</option>
                            </select>
                        </div>                                
                    </div>

                    <div id="juzgadosEstadoConsulta"  style='display:block'>
                        <div class="form-group">                                                                
                            <label class="control-label col-xs-3 ">Juzgado de Procedencia</label>
                            <div>
                                <select class="col-xs-6 " name="cmbJuzgadoConsulta" id="cmbJuzgadoConsulta">
                                    <option value="0">Seleccione una opcion</option>
                                </select>
                            </div>                                
                        </div>
                    </div>
                    <div id="juzgadosFueraConsulta" style='display:none'>    
                        <div class="form-group">                                                                
                            <label class="control-label col-xs-3">Juzgado de Procedencia</label>
                            <div class="col-xs-6">
                                <input type="text" id="txtJuzgadoPConsulta" placeholder="Juzgado Procedencia" class="form-control " value=""/>
                            </div>
                        </div>
                    </div> 
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">Carpeta Investigaci&oacute;n</label>
                        <div class="col-xs-2">
                            <input type="text" id="txtCarpetaInvConsulta" placeholder="Carpeta Inv." class="form-control" value="" maxlength="30" />
                        </div> 
                        <label class="control-label col-xs-2">NUC</label>
                        <div class="col-xs-2">
                            <input type="text" id="txtNucConsulta" placeholder="NUC" class="form-control" value="" maxlength="30" />
                        </div>                           
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3">No. Exhorto</label>
                        <div class="col-xs-9">
                            <input type="text" id="numeroEC" class="form-inline" placeholder="N&uacute;mero" maxlength="4" />
                            /
                            <input type="text" id="anioEC" class="form-inline" placeholder="A&ntilde;o" maxlength="4" />
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3 ">Tipo de Carpeta</label>
                        <div class="col-xs-6">
                            <select class="form-control Relacionado" name="cmbTipoCarpetaConsulta" id="cmbTipoCarpetaConsulta" onchange="changeLabel2(this, '')" >
                                <option value="0">Seleccione una opcion</option>
                            </select>
                        </div>                                
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3" id="lblRelationName2">No. de</label>
                        <div id="divSinRelacion" class="col-xs-9">
                            <input type="text" id="txtNumeroCConsulta" class="form-inline Relacionado" placeholder="N&uacute;mero" maxlength="4">
                            /
                            <input type="text" class="form-inline Relacionado" id="txtAnioCConsulta" placeholder="A&ntilde;o" maxlength="4">
                        </div>                              
                    </div>     
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">No. de Oficio</label>
                        <div class="col-xs-9">
                            <input type="text" id="txtOficioConsulta" placeholder="N&uacute;mero" class="form-inline Relacionado" maxlength="4" />
                            /
                            <input type="text" class="form-inline Relacionado" id="txtAnioOConsulta" placeholder="A&ntilde;o" maxlength="4" />
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">S&iacute;ntesis</label>
                        <div class="col-xs-6">
                            <input type="text" id="txtSintesisConsulta" placeholder="Sintesis" class="form-control" value=""/>
                        </div>
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3 ">Fecha inicio</label>
                        <div class="col-xs-2">
                            <input type="text" id="fechaInicial" placeholder="Fecha" class="form-control datetimepicker fecha" value=""/>
                        </div> 
                    </div>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3 " >Fecha fin</label>
                        <div class="col-xs-2">
                            <input type="text" id="fechaFinal" placeholder="Fecha" class="form-control datetimepicker fecha" value=""/>
                        </div>                                 
                    </div>
                    <div class="form-group" style="text-align:center">
                        <div>
                            <input type="submit" class="btn btn-primary" id="inputGuardar" value="Buscar" onclick="buscarExhorto(1);"> <!-- buscaraa -->
                            <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar2();">
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
                        <div id="div_respuestaConsulta" class="col-xs-12"></div>
                    </div>
                </div>
                <!-- FIN CONSULTA   -->    
            </div>
            <!-- INICIO DE EXHORTOS GENERADOS-->
            <div id="divExhortosGenerados" class="form-horizontal" style="display:<?php echo $displayExhortoG; ?>">

                <div class="form-group">                                                                
                    <div class="col-xs-6">
                        <input type="hidden" id="idActuacion" value=""/>
                    </div>
                </div>
                <div class="form-group">                                                                

                    <label class="control-label col-xs-3">No. Exhorto Generado </label>
                    <div class="col-xs-7">
                        <input type="text" id="numeroEG" class="form-inline " placeholder="N&uacute;mero" disabled size="5">
                        / <input type="text" id="anioEG" class="form-inline "  placeholder="A&ntilde;o" disabled size="5">
                        <!-- <a title="Llenado Automatico" style="text-decoration: none;border-radius: 10px; background:#4A7DFD;color:#FFFFFF;padding-left:4px;padding-right: 2px"> ? </a> -->
                        <div id="div_enviarEG" style="display:inline-block"></div>
                    </div> 

                </div> 
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3 ">Tipo de Carpeta <span class="requerido">(*)</span></label>
                    <div class="col-xs-6">
                        <select class="form-control Relacionado bloqueoEG" name="cmbTipoCarpetaG" id="cmbTipoCarpetaG" onchange="changeLabelG(this, ''), validaCarpeta()" >
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3" id="lblRelationNameG" >No. Causa <span class="requerido">(*)</span></label>
                    <div id="divSinRelacion" class="col-xs-9">
                        <input type="text" id="txtNumeroCG" class="form-inline Relacionado bloqueoEG" placeholder="N&uacute;mero" onblur="validaCarpeta()">
                        / <input type="text" class="form-inline Relacionado bloqueoEG" id="txtAnioCG" placeholder="A&ntilde;o" onblur="validaCarpeta()">
                        <div style="display:inline-block" id="resRelacion"> </div>
                    </div> 
                </div>

                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Sintesis <span class="requerido">(*)</span></label>

                    <div class="col-xs-6">
                        <input type="text" id="txtSintesisG" placeholder="Sintesis" class="form-control bloqueoEG" value=""/>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3 ">Estado <span class="requerido">(*)</span></label>
                    <div class="col-xs-6">
                        <div id="divCmbEstado" class="logobox"></div>
                        <select class="form-control Relacionado bloqueoEG" name="cmbEstadoG" id="cmbEstadoG" onchange="validaEstadoG()">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div id="juzgadosEstadoG"  style='display:block'>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3 ">Juzgado Destino <span class="requerido">(*)</span></label>
                        <div>
                            <select class="col-xs-6 bloqueoEG" name="cmbJuzgadoG" id="cmbJuzgadoG">
                                <option value="0">Seleccione una opcion</option>
                            </select>
                        </div>                                
                    </div>
                </div>
                <div id="juzgadosFueraG" style='display:none'>    
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">Juzgado Destino <span class="requerido">(*)</span></label>

                        <div class="col-xs-6">
                            <input type="text" id="txtJuzgadoPG" placeholder="Juzgado Destino" class="form-control bloqueoEG" value=""/>
                        </div>
                    </div>
                </div> 
                <div id="divNotas" class="form-group">
                    <label class="control-label col-xs-3">Observaciones</label>
                    <div class="col-xs-6">
                        <textarea rows="5" id="txtObservacionesG" class="form-control bloqueoEG" placeholder="Observaciones"></textarea>
                    </div>
                </div>
                <div class="form-group">                                                                

                    <label class="control-label col-xs-3 " >Estatus <span class="requerido">(*)</span></label>
                    <div class="col-xs-2">
                        <div id="divCmbEstatus" class="logobox"></div>
                        <select class="form-control Relacionado bloqueoEG" name="cmbEstatusG" id="cmbEstatusG">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>  
                </div>
                <div id="divRequisitoria" class="form-group">
                    <label class="control-label col-xs-3">Requisitoria</label>
                    <div class="col-xs-6">
                        <input type="checkbox" id="requisitoria" class="form-control bloqueoEG"/>
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
                        <div id="btn_guardar" style="display:inline-block">
                            <input type="submit" class="btn btn-primary" id="inputGuardar" value="Guardar" onclick="guardarExhortoG();">
                        </div>            
                        <input type="submit" class="btn btn-primary" id="inputConsultar" value="Consultar" onclick="consultarG();">                        
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar3();">                           
                        <div id="btn_verER" style="display:inline-block"></div>
                        <div id="btn_imprimirEG" style="display:inline-block"></div>

                    </div>

                </div>

            </div>
            <!-- INICIO DE CONSULTA DE EXHORTOS GENERADOS-->
            <div id="divExhortosGeneradosConsulta" class="form-horizontal" style="display:none">

                <div>
                    <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultarG();">                                    
                </div>
                <div class="form-group">                                                                

                    <label class="control-label col-xs-3">No. Exhorto Generado</label>
                    <div class="col-xs-6">
                        <input type="text" id="numeroEGC" class="form-inline " placeholder="N&uacute;mero" >
                        / <input type="text" id="anioEGC" class="form-inline "  placeholder="A&ntilde;o" >

                    </div> 

                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3 ">Tipo de Carpeta</label>
                    <div class="col-xs-6">
                        <select class="form-control Relacionado" name="cmbTipoCarpetaGConsulta" id="cmbTipoCarpetaGConsulta" onchange="changeLabelGConsulta(this, '')" >
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3" id="lblRelationNameGConsulta">No. Causa</label>
                    <div id="divSinRelacion" class="col-xs-9">
                        <input type="text" id="txtNumeroCGConsulta" class="form-inline Relacionado" placeholder="N&uacute;mero">
                        / <input type="text" class="form-inline Relacionado" id="txtAnioCGConsulta" placeholder="A&ntilde;o">
                    </div>                              
                </div>
                  
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3">Sintesis</label>

                    <div class="col-xs-6">
                        <input type="text" id="txtSintesisGConsulta" placeholder="Sintesis" class="form-control" value=""/>
                    </div>
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3 ">Estado</label>
                    <div class="col-xs-6">
                        <div id="divCmbEstado" class="logobox"></div>
                        <select class="form-control Relacionado" name="cmbEstadoGConsulta" id="cmbEstadoGConsulta" onchange="validaEstadoGConsulta()">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>                                
                </div>
                <div id="juzgadosEstadoGConsulta"  style='display:block'>
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3 ">Juzgado Destino</label>
                        <div>
                            <select class="col-xs-6" name="cmbJuzgadoGConsulta" id="cmbJuzgadoGConsulta">
                                <option value="0">Seleccione una opcion</option>
                            </select>
                        </div>                                
                    </div>
                </div>
                <div id="juzgadosFueraGConsulta" style='display:none'>    
                    <div class="form-group">                                                                
                        <label class="control-label col-xs-3">Juzgado Destino</label>

                        <div class="col-xs-6">
                            <input type="text" id="txtJuzgadoPGConsulta" placeholder="Juzgado Destino" class="form-control" value=""/>
                        </div>
                    </div>
                </div> 
                <div class="form-group">                                                                

                    <label class="control-label col-xs-3 " >Estatus</label>
                    <div class="col-xs-2">
                        <div id="divCmbEstatus" class="logobox"></div>
                        <select class="form-control Relacionado" name="cmbEstatusGConsulta" id="cmbEstatusGConsulta">
                            <option value="0">Seleccione una opcion</option>
                        </select>
                    </div>  
                </div>
                <div class="form-group">                                                                
                    <label class="control-label col-xs-3 ">Fecha Inicial</label>
                    <div class="col-xs-2">
                        <input type="text" id="fechaInicialG" placeholder="Fecha" class="form-control datetimepicker fecha" value=""/>
                    </div> 
                    <label class="control-label col-xs-2 " >Fecha Final</label>
                    <div class="col-xs-2">
                        <input type="text" id="fechaFinalG" placeholder="Fecha" class="form-control datetimepicker fecha" value=""/>
                    </div>                                 
                </div>
                <br>
                <div class="form-group" style="text-align:center">
                    <div>
                        <input type="submit" class="btn btn-primary" id="inputGuardar" value="BuscarBB" onclick="buscarExhortoG(1);">                                    
                        <!-- <input type="submit" class="btn btn-primary" id="inputRegresar" value="Regresar" onclick="consultarG();"> -->                                    
                        <input type="submit" class="btn btn-primary" id="inputLimpiar" value="Limpiar" onclick="limpiar4();">                                    
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
                    <div id="div_respuestaConsultaGenerado" class="col-xs-12"></div>
                </div>

            </div>
    <script type="text/javascript">

        /*var juzgadoSesion = "<?php echo 762; //$_SESSION['cveAdscripcion'];                              ?>";
         var cveUsuarioSesion = "<?php echo $_SESSION["cveUsuarioSistema"]; ?>";
         var procedencia = "<?php echo $procedencia; ?>";*/
         //ihs
        cambiaFormulario = function () {
            if ($("#divFormulario").is(":visible")) {
            $("#divFormulario").slideUp();
                    $("#divExhortosGenerados").slideDown();
            } else {
            $("#divFormulario").slideDown();
                    $("#divCampos").slideDown();
                    $("#divCamposConsulta").slideUp();
                    $("#divExhortosGenerados").slideUp();
                    $("#divExhortosGeneradosConsulta").slideUp();
            }
        };
        validaEstado = function (data) {
            var data = data || false;
            $("#txtJuzgadoP").val("");
            if ($("#cmbEstado").val() == 15) {
                $("#juzgadosEstado").slideDown();
                $("#juzgadosFuera").slideUp();
            } else{
                $("#juzgadosEstado").slideUp();
                $("#juzgadosFuera").slideDown();
                if(!data)
                    $('#cmbJuzgado').select2('val', '');
            }
        };
        validaEstadoConsulta = function () {

            if ($("#cmbEstadoConsulta").val() == 15) {
            $("#juzgadosEstadoConsulta").slideDown();
                    $("#juzgadosFueraConsulta").slideUp();
                    $("#txtJuzgadoPConsulta").val("");
            } else{
            $("#juzgadosEstadoConsulta").slideUp();
                    $("#juzgadosFueraConsulta").slideDown();
                    $('#cmbJuzgadoConsulta').select2('val', '0');
            }
        };
        cargaTipoCarpeta = function () {

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
                        for (var i = 0; i < json.totalCount; i++) {
                        $("#cmbTipoCarpeta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                $("#cmbTipoCarpeta2").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                $("#cmbTipoCarpetaConsulta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                $("#cmbTipoCarpetaG").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
                                $("#cmbTipoCarpetaGConsulta").append($('<option></option>').val(json.data[i].cveTipoCarpeta).html(json.data[i].desTipoCarpeta));
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
        cargaEstados = function () {
            var strDatos = "accion=consultar";
                $.ajax({
                type: "POST",
                        url: "../fachadas/sigejupe/estados/EstadosFacade.Class.php",
                        data: strDatos,
                        async: true,
                        dataType: "html",
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                        var json = "";
                                json = eval("(" + datos + ")"); //Parsear JSON
                                $('#cmbEstado').empty();
                                $('#cmbEstado').append('<option value="0">Seleccione una opci\u00f3n</option>');
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
                                $('#cmbEstadoG').val(15);
                                $('#cmbEstadoGConsulta').val(15);
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
                        $("#cmbMunicipioMoralI").append($('<option></option>').val(0).html("Seleccione una opcion"));
                        return false;
                };
                $("#cmbMunicipioMoralI").empty();
                $.ajax({
                type: "POST",
                        url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                        async: false,
                        dataType: "html",
                        data:{
                        accion:"consultar",
                                cveEstado:cveEstado
                        },
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                        var json = "";
                                json = eval("(" + datos + ")"); //Parsear JSON
                                $("#cmbMunicipioMoralI").append($('<option></option>').val(0).html("Seleccione una opcion"));
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
                    $("#cmbMunicipioI").append($('<option></option>').val(0).html("Seleccione una opcion"));
                    return false;
            };
                $("#cmbMunicipioI").empty();
                $.ajax({
                type: "POST",
                        url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                        async: false,
                        dataType: "html",
                        data:{
                        accion:"consultar",
                                cveEstado:cveEstado
                        },
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                        var json = "";
                                json = eval("(" + datos + ")"); //Parsear JSON
                                $("#cmbMunicipioI").append($('<option></option>').val(0).html("Seleccione una opcion"));
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
                        $("#cmbMunicipioO").append($('<option></option>').val(0).html("Seleccione una opcion"));
                        return false;
                };
                $("#cmbMunicipioO").empty();
                $.ajax({
                type: "POST",
                        url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                        async: false,
                        dataType: "html",
                        data:{
                        accion:"consultar",
                                cveEstado:cveEstado
                        },
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                        var json = "";
                                json = eval("(" + datos + ")"); //Parsear JSON
                                $("#cmbMunicipioO").append($('<option></option>').val(0).html("Seleccione una opcion"));
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
                        $("#cmbMunicipioMoralO").append($('<option></option>').val(0).html("Seleccione una opcion"));
                        return false;
                };
                $("#cmbMunicipioMoralO").empty();
                $.ajax({
                type: "POST",
                        url: "../fachadas/sigejupe/municipios/MunicipiosFacade.Class.php",
                        async: false,
                        dataType: "html",
                        data:{
                        accion:"consultar",
                                cveEstado:cveEstado
                        },
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                        var json = "";
                                json = eval("(" + datos + ")"); //Parsear JSON
                                $("#cmbMunicipioMoralO").append($('<option></option>').val(0).html("Seleccione una opcion"));
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
                var strDatos = "accion=consultar";
                $.ajax({
                type: "POST",
                        url: "../fachadas/sigejupe/juzgados/JuzgadosFacade.Class.php",
                        data: strDatos,
                        async: true,
                        dataType: "html",
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                        var json = "";
                                json = eval("(" + datos + ")"); //Parsear JSON

                                if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                        $("#cmbJuzgado").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                                $("#cmbJuzgadoConsulta").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                                $("#cmbJuzgadoG").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                                $("#cmbJuzgadoGConsulta").append($('<option></option>').val(json.data[i].cveJuzgado).html(json.data[i].desJuzgado));
                                //$("#cmbJuzgado").select2("val",json.data[i].desJuzgado);
                                //$("#cmbJuzgado").select2("val",json.data[i].desJuzgado).trigger("change");
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
            if ($("#cmbJuzgado").val() == 0 || $("#cmbJuzgado").val() == ""){
            $("#txtJuzgadoP").val(" ");
            } else{
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
                        async: true,
                        dataType: "html",
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                        var json = "";
                                json = eval("(" + datos + ")"); //Parsear JSON

                                if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                        if (json.data[i].cveConsignacion != 3) {
                        $("#cmbConsignacion").append($('<option></option>').val(json.data[i].cveConsignacion).html(json.data[i].desConsignacion));
                                $("#cmbConsignacionI").append($('<option></option>').val(json.data[i].cveConsignacion).html(json.data[i].desConsignacion));
                                $("#cmbConsignacionIMoral").append($('<option></option>').val(json.data[i].cveConsignacion).html(json.data[i].desConsignacion));
                        };
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
                        async: true,
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
                        async: true,
                        dataType: "html",
                        beforeSend: function (objeto) {
                        },
                        success: function (datos) {
                        var json = "";
                                json = eval("(" + datos + ")"); //Parsear JSON

                                if (json.totalCount > 0) {
                        for (var i = 0; i < json.totalCount; i++) {
                        $("#cmbTipoPersonaImputado").append($('<option></option>').val(json.data[i].cveTipoPersona).html(json.data[i].desTipoPersona));
                                $("#cmbTipoPersonaOfendido").append($('<option></option>').val(json.data[i].cveTipoPersona).html(json.data[i].desTipoPersona));
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

        /**
        * Cambia el div de captura de imputados dependiendo del tipos de persona a capturar
        */
        seleccionaTipoIm = function () {
            if ($("#cmbTipoPersonaImputado").val() == 1) {
                $("#ImputadosFisica").slideDown();
                $("#ImputadosMoral").slideUp();
            } else{
                $("#ImputadosMoral").slideDown();
                $("#ImputadosFisica").slideUp();
            }
        };

            seleccionaTipoOf = function () {
            if ($("#cmbTipoPersonaOfendido").val() == 1) {
            $("#OfendidosFisica").slideDown();
                    $("#OfendidosMoral").slideUp();
            } else{
            $("#OfendidosMoral").slideDown();
                    $("#OfendidosFisica").slideUp();
            }
        };
        consultar = function () {
            if ($("#divCamposConsulta").is(":visible")) {
            $("#divCamposConsulta").hide('fade');
                    $("#divCampos").show('slide');
                    //$("#registro").html("Registro de Exhortos Recibidos");
            } else {
            $("#divCamposConsulta").show('slide');
                    $("#divCampos").hide('fade');
                    $('#lstImputados').empty();
                    $('#lstOfendidos').empty();
                    $('#lstDelitos').empty();
                    $("#cveJuzgado").val(cveJuzgado);  //.val(<?= $cveJuzgado ?>);
                    //$("#registro").html("Consulta de Exhortos Recibidos");
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
                            async: true,
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
                            async: true,
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
                            async: true,
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
            }
            else if (cveTipoPersona == 2 || cveTipoPersona == 3) {
            $(".divNombre").hide();
                    if (myClass === "col-xs-2") {
            $("#txtNombreAct").parent().toggleClass('col-xs-2');
                    $("#txtNombreAct").parent().toggleClass('col-xs-6');
            }
            }
        };
        buscaImpofedel = function () {
            var cveJuzgado = $("#cmbJuzgado").val();
                    var cveTipoCarpeta = $("#cmbTipoCarpeta").val();
                    var numero = $("#txtNumeroC").val();
                    var anio = $("#txtAnioC").val();
                    var idExhorto = $("#idExhorto").val();
                    if ((cveJuzgado != 0 || cveJuzgado != "") && (cveTipoCarpeta != 0 || cveTipoCarpeta != "") && numero != "" && anio != "" && idExhorto == "") {

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
                            $.each(data.listaImputados, function(key, value){
                            var nombre = "";
                                    if (value.cveTipoPersona == 1) {
                            nombre = value.nombre + " " + value.paterno + " " + value.materno;
                            } else{
                            nombre = value.nombreMoral;
                            }
                            var consignacion;
                                    if (value.detenido == "S") {
                            consignacion = 1;
                            } else{
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
                            });
                            $('#lstImputados option').prop("selected", true);
                            tablaImputados('lstImputados', 'imputados');
                    }
                    if (data.listaOfendidos.length != 0) {
                    $('#lstOfendidos').find('option:selected').remove();
                            $('#lstOfendidos').empty();
                            $.each(data.listaOfendidos, function(key, value){
                            var nombre = "";
                                    if (value.cveTipoPersona == 1) {
                            nombre = value.nombre + " " + value.paterno + " " + value.materno;
                            } else{
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
                            });
                            $('#lstOfendidos option').prop("selected", true);
                            tablaOfendidos('lstOfendidos', 'ofendidos');
                    }
                    if (data.listaDelitos.length != 0) {
                    $('#lstDelitos').find('option:selected').remove();
                            $('#lstDelitos').empty();
                            $.each(data.listaDelitos, function(key, value){


                            $('#lstDelitos').append(
                                    '<option value="0;' + value.cveDelito + ';'
                                    + value.desDelito + '" selected="selected">'
                                    + value.desDelito + '</option>');
                            });
                            $('#lstDelitos option').prop("selected", true);
                            tablaDelitos('lstDelitos', 'delitos');
                    }

                    } else{

                    }
                    }

            });
            }
        };
        guardarExhorto = function () {
            $(".required").remove();
            if (validaExhorto()){
                var listaImputados = new Array();
                var JsonImputados = "";
                var listaOfendidos = new Array();
                var JsonOfendidos = "";
                var listaDelitos = new Array();
                var JsonDelitos = "";
                var guardar = 1;
                var cveJuzgadoProcedencia = $("#cmbJuzgado").val();
                var tipoConsignacion = "";
                var conD = 0;
                var conN = 0;
                var conM = 0;
                var numExhorto = $("#numeroE").val();
                var aniExhorto = $("#anioE").val();
                var tipoAccion = "";
                $('select#lstImputados').find('option').each(function () {
                var datos = this.value.split(";");
                    listaImputados.push(new Imputados(datos[0], datos[1], datos[2], datos[3],
                            datos[4], datos[5], datos[6], datos[7], datos[8],
                            datos[9], datos[10], datos[11], datos[12], datos[13]));
                });
                $.each(listaImputados, function(key2, value){

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
                if (cveJuzgadoProcedencia == "0" || cveJuzgadoProcedencia == null) {
                cveJuzgadoProcedencia = "";
                }
                if ($("#idExhorto").val() == "") {
                tipoAccion = "Registrado";
                } else{
                tipoAccion = "Actualizado";
                }
                $.ajax({
                type: "POST",
                        url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                        async: false,
                        dataType: "json",
                        data: {
                        idExhorto: $("#idExhorto").val(),
                        numExhorto: numExhorto, //$("#numeroE").val(),
                        aniExhorto: aniExhorto, // $("#anioE").val(),
                                IdExhortoGenerado : $("#idExhortoGenerado").val(),
                                cveTipoCarpeta: $("#cmbTipoCarpeta").val(),
                                carpetaInv: $("#txtCarpetaInv").val(),
                                nuc: $("#txtNuc").val(),
                                numero: $("#txtNumeroC").val(),
                                anio: $("#txtAnioC").val(),
                                numOficio: $("#txtOficio").val() + "/" + $("#txtAnioO").val(),
                                sintesis: $("#txtSintesis").val(),
                                cveEstadoProcedencia: $("#cmbEstado").val(),
                                cveJuzgado: $("#cveJuzgado").val(),
                                cveJuzgadoProcedencia:cveJuzgadoProcedencia,
                                juzgadoProcedencia: $("#txtJuzgadoP").val(),
                                observaciones: $("#txtObservaciones").val(),
                                cveConsignacion: tipoConsignacion,
                                cveEstatusExhorto: $("#cmbEstatus").val(),
                                activo: 'S',
                                listaImputados: JsonImputados,
                                listaOfendidos: JsonOfendidos,
                                listaDelitos: JsonDelitos,
                                accion: 'guardar'
                        },
                        success: function (data) {
                        if (data.totalCount > 0) {
                        $.each(data.data, function(key, value){

                        if ($("#idExhorto").val() != "") {
                        buscarExhorto(1);
                        } else{

                        $(".bloqueoE").attr('disabled', 'disabled');
                                $("#btn_guardarE").hide();
                                //$("#divTablaDelitos").attr('disabled','disabled');

                        }

                        showMessage(data.text + "<br>Numero de Exhorto " + tipoAccion + ": " + value.numExhorto + "/" + value.aniExhorto, 'divAlertSucces');
                                $("#numeroE").val(value.numExhorto);
                                $("#anioE").val(value.aniExhorto);
                                $("#ImputadosFisica").slideUp();
                                $("#ImputadosMoral").slideUp();
                                $("#OfendidosFisica").slideUp();
                                $("#OfendidosMoral").slideUp();
                        });
                        } else{
                        //$("#div_respuesta").parent().append("<br class='required'><label class='Error required'>"+data.text+"</label>");
                        showMessage(data.text, 'divAlertDager');
                        }
                        temporal.anio = aniExhorto;
                        temporal.numero = numExhorto;
                        }

                });
            }///fin valida exhorto
        };
        buscarExhorto = function(pagina, nRegistros){
            var nRegistros = nRegistros || 0;
            $(".required").remove();
            //limpia paginacion y resultados
            $("#div_respuestaConsulta").empty().html('<input type="hidden" id="cmbRegistrosE" value="10"/>');
            $("#div_paginacionConsulta").empty();
            //asigna valores de los campos        
            var estado = $("#cmbEstadoConsulta option:selected").val();
            estado = (estado!=0) ? estado : '';
            var cveJuzgado = $("#cmbJuzgadoConsulta").val();
            cveJuzgado = (cveJuzgado!=0) ? cveJuzgado : '';
            var carpetaInv = $("#txtCarpetaInvConsulta").val();
            var nuc = $("#txtNucConsulta").val();
            var numExhorto = $("#numeroEC").val();
            var aniExhorto = $("#anioEC").val();
            var cveTipoCarpeta = $("#cmbTipoCarpetaConsulta").val();
            cveTipoCarpeta = (cveTipoCarpeta!=0) ? cveTipoCarpeta : '';
            var numero = $("#txtNumeroCConsulta").val();
            var anioFrm = $("#txtAnioCConsulta").val();
            var numOficio = $("#txtOficioConsulta").val() + "/" + $("#txtAnioOConsulta").val();
            var sintesis = $("#txtSintesisConsulta").val();
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var buscar = true;
            var fecha = '';
            nRegistros = (nRegistros==0) ? 10 : $("#cmbRegistrosE").val();

            if ($("#txtOficioConsulta").val() == "" || $("#txtAnioOConsulta").val() == "") {
                numOficio = "";
            }
            if (numExhorto == "" && aniExhorto == "") {
                if (fechaInicial == "") {
                    Error($("#fechaInicial"), "Ingresa Fecha Inicio");
                    buscar = false;
                }else if (fechaFinal == "") {
                    Error($("#fechaFinal"), "Ingresa Fecha Fin");
                    buscar = false;
                }else{
                    fecha = fechaInicial.split("/");
                    fechaInicial = fecha[2] + "-" + fecha[1] + "-" + fecha[0] + " 00:00:00";
                    fecha = fechaFinal.split("/");
                    fechaFinal = fecha[2] + "-" + fecha[1] + "-" + fecha[0] + " 23:59:59";                
                }
            }else{
                fechaInicial = "";
                fechaFinal = "";
            }
            if (buscar) {
                $.ajax({
                    type: "POST",
                    url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                        cveEstadoProcedencia: estado,
                        cveJuzgadoProcedencia: cveJuzgado,
                        carpetaInv: carpetaInv,
                        nuc: nuc,
                        numExhorto: numExhorto,
                        aniExhorto: aniExhorto,
                        cveTipoCarpeta: cveTipoCarpeta,
                        numero: numero,
                        anio: anioFrm,
                        numOficio: numOficio,
                        sintesis: sintesis,
                        fechaInicial: fechaInicial,
                        fechaFinal: fechaFinal,
                        //juzgadoProcedencia: $("#txtJuzgadoPConsulta").val(),
                        cveJuzgado : cveJuzgado, // $("#cveJuzgado").val(),
                        pagina: pagina,
                        totalRegistros: 1,
                        nRegistros: nRegistros,
                        generico:'sinIdExhortoGenerado',
                        activo: 'S',
                        accion: 'consultar_total'
                    },
                    success: function (data) {
                        try{
                            if (data.estatus == "ok") {
                                paginacionExhorto(data.totalCount, pagina);                            
                                var total = data.totalCount;
                                var table = "";
                                var cantidad = nRegistros;
                                var inicio;
                                var res;
                                var total_paginas = parseInt(total / cantidad);
                                res = total % cantidad;
                                if (res > 0){
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
                            }else{
                                $("#div_respuestaConsulta").html('');
                                showMessage(data.mensaje, 'divAlertWarningC');
                            }
                        } catch (e){
                            alert('algo salio mal.');
                        }
                    }
                });
            };
        };
        paginacionExhorto = function (total, pagina){
            var pagina = pagina || 1;
            var permisos = 1;
            if (pagina == 0) {

            pagina = $("#cmbPaginas").val();
            };
            var fechaInicial = $("#fechaInicial").val();
            var fechaFinal = $("#fechaFinal").val();
            var estado = $("#cmbEstadoConsulta").val();
            var cveJuzgado = $("#cmbJuzgadoConsulta").val();
            var cveTipoCarpeta = $("#cmbTipoCarpetaConsulta").val();
            var numOficio = $("#txtOficioConsulta").val() + "/" + $("#txtAnioOConsulta").val();
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
            if ($("#txtOficioConsulta").val() == "" || $("#txtAnioOConsulta").val() == "") {
            numOficio = "";
            }
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
            } else{

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
                            numOficio: numOficio,
                            sintesis: $("#txtSintesisConsulta").val(),
                            cveEstadoProcedencia: estado,
                            cveJuzgadoProcedencia: cveJuzgado,
                            juzgadoProcedencia: $("#txtJuzgadoPConsulta").val(),
                            cveJuzgado : cveJuzgado, // $("#cveJuzgado").val(),
                            fechaInicial: fechaInicial,
                            fechaFinal: fechaFinal,
                            pagina: pagina,
                            totalRegistros: 0,
                            nRegistros: $("#cmbRegistrosE").val(),
                            generico:'sinIdExhortoGenerado',
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
                            table += "            <th>Fecha de registro</th>";
                            table += "            <th>Eliminar</th>";
                            table += "        </tr>";
                            table += "    </thead>";
                            table += "    <tbody>";
                            //console.log(data.data);
                            $.each(data.data, function(key, value){

                            if (value.cveJuzgadoProcedencia == null) {
                            juz = value.JuzgadoProcedencia;
                            } else{
                            juz = value.desJuzgadoProcedencia;
                            }
                            if (value.listaImputados.length != 0) {
                            $.each(value.listaImputados, function(key2, value2){
                            conI++;
                                    if (value2.cveTipoPersona == 2 || value2.cveTipoPersona == 3) {

                            cadenaImputados += "<a title='Nombre: " + value2.nombreMoral + "\n" +
                                    "Domicilio: " + value2.domicilio + "\n" +
                                    "Municipio: " + value2.desMunicipio + "\n" +
                                    "Estado: " + value2.desEstado + "\n" +
                                    "Tipo: " + value2.desTipoPersona +
                                    "' style='text-decoration:none;color:#284837'>" +
                                    conI + ". " + value2.nombreMoral + "</a><br>";
                            } else{
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
                            $.each(value.listaOfendidos, function(key3, value3){
                            conO++;
                                    if (value3.cveTipoPersona == 2 || value3.cveTipoPersona == 3) {

                            cadenaOfendidos += "<a title='Nombre: " + value3.nombreMoral + "\n" +
                                    "Domicilio: " + value3.domicilio + "\n" +
                                    "Municipio: " + value3.desMunicipio + "\n" +
                                    "Estado: " + value3.desEstadoO + "\n" +
                                    "Tipo: " + value3.desTipoPersona +
                                    "' style='text-decoration:none;color:#284837'>" +
                                    conO + ". " + value3.nombreMoral + "</a><br>";
                            } else{
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
                                var fecha = '', fechaTemp = '';
                            $.each(value.listaDelitos, function(key4, value4){
                                fechaTemp = value.fechaRegistro.split(" ");
                                fecha = fechaTemp[0].split('-');
                                fecha = fecha[2]+'/'+fecha[1]+'/'+fecha[0]+' '+fechaTemp[1];
                            conD++;
                                    cadenaDelitos += "<a title='" + value4.desDelito + "' style='text-decoration:none;color:#284837'>" + conD + ". " + value4.desDelito + "</a><br>";
                                    cadenaD = value4.desDelito;
                            });
                                    conD = 0;
                            }
                            inicio++;
                                    if (value.IdExhortoGenerado == "" || value.IdExhortoGenerado == null) {
                            generado = "NO";
                            } else{
                            generado = "SI";
                            }

                            table += "<tr>";
                            table += "   <td onclick=\"seleccionaE('" + value.idExhorto + "')\" > " + inicio + "</td>";
                            table += "   <td onclick=\"seleccionaE('" + value.idExhorto + "')\" > " + value.numExhorto + "/" + value.aniExhorto + "</td>";
                            table += "   <td onclick=\"seleccionaE('" + value.idExhorto + "')\" > " + generado + "</td>";
                            table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" > " + value.desEstadoProcedencia + "</td>";
                            table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" > " + juz + "</td>";
                            table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" > " + cadenaImputados + " </td>";
                            table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" >" + cadenaOfendidos + "</td>";
                            table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" >" + cadenaDelitos + "</td>";
                            table += "   <td align='left' onclick=\"seleccionaE('" + value.idExhorto + "')\" >" + fecha + "</td>";
                            if (value.IdExhortoGenerado == "" || value.IdExhortoGenerado == null) {
                                if (permisos==1) {
                            table += "   <td align='center' ><img src='img/eliminar.png' width=30 height=30 onclick=\"eliminarE('" + total + "','" + pagina + "','" + value.idExhorto + "')\" style='cursor:pointer' ></td>";

                                }else{
                                    table += "   <td></td>";
                                }

                            } else{

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
                    } else{

                    $("#div_respuestaConsulta").html('');
                            showMessage(data.mensaje, 'divAlertWarningC');
                    }
                    }

            });
            };
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
                                            } else{
                                                //console.log(data.mensaje);
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
                             //console.log(data);

                            if (data.estatus == "ok") {

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
                                    $.each(data.data, function(key, value){

                                    var separa = value.numOficio.split("/");
                                            var numOficio = separa[0];
                                            var anioOficio = separa[1];
                                            idExhorto = value.idExhorto;
                                            if (value.cveJuzgadoProcedencia == "" || value.cveJuzgadoProcedencia == null) {
                                    $("#juzgadosFuera").slideDown();
                                            $("#juzgadosEstado").slideUp();
                                    } else{
                                    $("#juzgadosFuera").slideUp();
                                            $("#juzgadosEstado").slideDown();
                                    }
                                    $("#idExhortoGenerado").val(value.IdExhortoGenerado);
                                    $("#numeroE").val(value.numExhorto);
                                    temporal.numero = value.numExhorto;
                                    $("#anioE").val(value.aniExhorto);
                                    temporal.anio = value.aniExhorto;
                                    $("#cmbEstado").val(value.cveEstadoProcedencia);
                                    validaEstado();
                                    $('#cmbJuzgado').select2('val', value.cveJuzgadoProcedencia);
                                    $("#txtJuzgadoP").val(value.JuzgadoProcedencia);
                                    $("#txtCarpetaInv").val(value.carpetaInv);
                                    $("#txtNuc").val(value.nuc);
                                    $("#cmbTipoCarpeta").val(value.cveTipoCarpeta);
                                    $("#txtNumeroC").val(value.numero);
                                    $("#txtAnioC").val(value.anio);
                                    $("#txtOficio").val(numOficio);
                                    $("#txtAnioO").val(anioOficio);
                                    $("#txtSintesis").val(value.sintesis);
                                    $("#txtObservaciones").val(value.observaciones);
                                    //  $("#cmbConsignacion").val(value.cveConsignacion);
                                    $("#cmbEstatus").val(value.cveEstatusExhorto);
                                    $("#resConsignacion").html("Consignacion : " + value.desConsignacion);
                                    if (value.listaImputados.length != 0) {
                                    $.each(value.listaImputados, function(key2, value2){
                                    if (value2.cveTipoPersona == 1) { //Fisica
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
                                    } else{
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
                                    }

                                    });
                                            tablaImputados('lstImputados', 'imputados');
                                    }
                                    //console.log($("#lstImputados").val());
                                    if (value.listaOfendidos.length != 0) {
                                    $.each(value.listaOfendidos, function(key3, value3){
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
                                    } else{
                                    $('#lstOfendidos').append(
                                            '<option value="' + value3.idOfenfendidoExhorto + ';' + value3.cveTipoPersona + ';'
                                            + value3.nombreMoral + ';'
                                            + ';' //genero
                                            + value3.cveEstado + ';'
                                            + value3.cveMunicipio + ';'
                                            + value3.domicilio
                                            + '" selected="selected">'
                                            + value3.nombreMoral + '</option>');
                                    }
                                    });
                                            tablaOfendidos('lstOfendidos', 'ofendidos');
                                    }
                                    // console.log($("#lstOfendidos").val());
                                    if (value.listaDelitos.length != 0) {
                                    $.each(value.listaDelitos, function(key4, value4){
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
                                    } else{

                                    $(".bloqueoE").attr('disabled', 'disabled');
                                            $("#btn_guardarE").hide();
                                    }


                                   });
                                    $("#btn_imprimirER").html('<input type="submit" class="btn btn-primary" id="inputImprimir" value="Imprimir" onclick="imprimirER(' + idExhorto + ')"> ');
                            }
                            }

                    });
                    //$("#registro").html("Registro de Exhortos Recibidos");
                                    //limpia tabla de resultados de la búsqueda de exhortos
                                    limpiar2();
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
        limpiar = function () {
            $("#idExhorto").val("");
                $("#idExhortoGenerado").val("");
                $("#cmbTipoCarpeta").val(0);
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
                $("#txtObservaciones").val("");
                $("#cmbConsignacion").val(0);
                $("#cmbEstatus").val(0);
                $("#resConsignacion").html("");
                $('#lstImputados').find('option:selected').remove();
                $('#lstOfendidos').find('option:selected').remove();
                $('#lstDelitos').find('option:selected').remove();
                $('#lstImputados').empty();
                $('#lstOfendidos').empty();
                $('#lstDelitos').empty();
                $(".required").remove();
                $("#cveJuzgado").val(cveJuzgado);  //.val(<?= $cveJuzgado ?>);
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
                $(".bloqueoE").removeAttr("disabled");

                $("#divBotonActualizarImputadoF").html('');
                $("#divBotonAgregaImputadoF").show();
                $("#divBotonActualizarImputadoM").html('');
                $("#divBotonAgregaImputadoM").show();

                $("#divBotonActualizarOfendidoF").html('');
                $("#divBotonAgregaOfendidoF").show();
                $("#divBotonActualizarOfendidoM").html('');
                $("#divBotonAgregaOfendidoM").show();

                $("#inputAgregarImputadoF").attr('disabled', false);
                $("#inputModificarImputadoF").attr('disabled', false);
                $("#inputAgregarImputadoM").attr('disabled', false);
                $("#inputModificarImputadoM").attr('disabled', false);
                $("#inputAgregarOfendidosF").attr('disabled', false);
                $("#inputModificarOfendidoF").attr('disabled', false);
                $("#inputAgregarOfendidosM").attr('disabled', false);
                $("#inputModificarOfendidoM").attr('disabled', false);
        };
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
            $('#cmbJuzgadoConsulta').select2('val', '0');
            $('#fechaInicial, #fechaFinal').val(getDate('today'));
            $("#div_respuestaConsulta").empty().html('<input type="hidden" id="cmbRegistrosE" value="10"/>');
            $("#div_paginacionConsulta").empty();
            $("#txtJuzgadoPConsulta").val("");
            $("#numeroEC").val("");
            $("#anioEC").val("");
            $("#lblRelationName2").empty().html("No. de");
        };
        $.fn.agregaPersona = function (Clase, Destino, Valor, tipo) {
            $(".required").remove();
            var arrNombre = new Array();
            var agregar = true;
            var noElementos = $("." + Clase).length;
            $("." + Clase).each(function () {
                if ($.trim($(this).val()) != "" && $(this).is(":visible")) {
                    arrNombre.push($.trim($(this).val().toUpperCase()));
                }
                else if ($(this).is(":visible")) {
                    agregar = false;
                    $(this).parent().append("<br class='required'><label class='Error required'>Este campo no puede estar vacio</label>");
                    arrNombre = new Array();
                }else {
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
                        cadena2 = ';' + consignacionIMoral + ';' + ';' + estado + ';' + municipio+ ';' + domicilio;
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
                        if (telefono.length != 10) {
                            Error($("#txtTelefonoI"), "Telefono incorrecto, se requieren 10 digitos");
                            valida = false;
                        }
                        if (isNaN(telefono)) {
                            Error($("#txtTelefonoI"), "No es Numero");
                            valida = false;
                        }
                        if (consignacionI == 1 ){
                            if (cereso == "" || cereso == 0) {
                                Error($("#cmbCereso"), "Selecciona Cereso");
                                valida = false;
                            }
                        }
                        cadena = ';' + consignacionI + ';' + genero+ ';' + estado + ';' + municipio+ ';' + domicilio + ';' + alias+ ';' + telefono + ';' + cereso + ';';
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
                        cadena2 = ';' + ';' + estado + ';' + municipio+ ';' + domicilio;
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
                        if (telefono == "") {
                            Error($("#txtTelefonoO"), "Ingresa Telefono");
                            valida = false;
                        }
                        if (telefono.length != 10) {
                            Error($("#txtTelefonoO"), "Telefono incorrecto, se requieren 10 digitos");
                            valida = false;
                        }
                        if (isNaN(telefono)) {
                            Error($("#txtTelefonoO"), "No es Numero");
                            valida = false;
                        }
                        cadena = ';' + genero + ';' + estado+ ';' + municipio + ';' + domicilio+ ';' + telefono + ';';
                    }
                    if (valida){
                        $('#' + Destino).append('<option value="0;' + Valor + ';'+ cadena+ arrNombre.join(';') + cadena2 + '" selected="selected">'+ arrNombre.join(' ') + '</option>');
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
                        //oculta los divs de captura
                        $("#ImputadosFisica").slideUp();
                        $("#ImputadosMoral").slideUp();
                    }
                } else {
                    alert("El nombre " + arrNombre.join(' ') + " ya existe.");
                }
            }else { }
        }

        tablas = function (Destino, tipo){
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
        tablaImputados = function (Destino, tipo){
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
            } else{
            nombre = datos[2];
            }
            var valorSelect = this.value;
                    con++;
                    html += "<tr>";
                    html += "<th scope='row'>" + con + "</th>";
                    html += "<td style='cursor:pointer;' onclick=\"modificarImpofedel('" + Destino + "','" + tipo + "','" + valorSelect + "')\">" + nombre + "</td>";
                    if (idExhorto!= "" && idExhortoGenerado!="") {
                        html+="<td></td>";
                    }else{
                    html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick=\"borraPersona('" + Destino + "','" + tipo + "','" + valorSelect + "')\"></center></td>";


                    }
                    html += "</tr>";
            });
                    
            $("#tabla-imputados").html(html);
            $("#divTablaImputados").show('fast');
        };

        validaConsignacion = function (){
            if ($("#cmbConsignacionI").val() == 1) {
                $("#cmbCereso").removeAttr("disabled").val(0);
            } else{
                $("#cmbCereso").attr('disabled', 'disabled').val(1);
            }
        };

        tablaOfendidos = function (Destino, tipo){

            var html = "";
                    var con = 0;
                    var idExhorto = $("#idExhorto").val();
                    $('select#' + Destino).find('option').each(function () {
            var datos = this.value.split(";");
                    var nombre = "";
                    if (datos[1] == 1) {
            nombre = datos[8] + ' ' + datos[9] + ' ' + datos[10];
            } else{
            nombre = datos[2];
            }
            var valorSelect = this.value;
                    con++;
                    html += "<tr>";
                    html += "<th scope='row'>" + con + "</th>";
                    html += "<td style='cursor:pointer;' onclick=\"modificarImpofedel('" + Destino + "','" + tipo + "','" + valorSelect + "')\">" + nombre + "</td>";
                    // if (idExhorto!="" && con>1) {
                    html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick=\"borraPersona('" + Destino + "','" + tipo + "','" + valorSelect + "')\"></center></td>";
                    //}
                    html += "</tr>";
            });
                    $("#tabla-ofendidos").html(html);
                    $("#divTablaOfendidos").show('fast');
        };
        tablaDelitos = function (Destino, tipo){

            var html = "";
                    var con = 0;
                    var idExhorto = $("#idExhorto").val();
                    $('select#' + Destino).find('option').each(function () {
            var datos = this.value.split(";");
                    var nombre = datos[2];
                    var valorSelect = this.value;
                    con++;
                    html += "<tr>";
                    html += "<th scope='row'>" + con + "</th>";
                    html += "<td>" + nombre + "</td>";
                    //  if (idExhorto!="" && con>1) {
                    html += "<td><center><img src='img/eliminar.png' width='35px' style='cursor:pointer;' onclick=\"borraPersona('" + Destino + "','" + tipo + "','" + valorSelect + "')\"></center></td>";
                    //}
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
        capturaBoton = function (clase, destino, tipo){
            var valida = true, valor="";
            if (clase == "txtImpM" || clase == "txtImpF") {
                valor = $("#cmbTipoPersonaImputado").val();
                if (valor == "" || valor == 0) {
                    Error($("#cmbTipoPersonaImputado"), "Selecciona Tipo de Persona");
                    valida = false;
                }
            }
            if (clase == "txtOfeM" || clase == "txtOfeF") {
                valor = $("#cmbTipoPersonaOfendido").val();
                if (valor == "" || valor == 0) {
                    Error($("#cmbTipoPersonaOfendido"), "Selecciona Tipo de Persona");
                    valida = false;
                }
            }
            if (valida) {
                $.fn.agregaPersona(clase, destino, valor, tipo);
            }
        }

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
                    $('#' + Destino).append('<option value="0;'+ cadena+ arrNombre.join(';') + '" selected="selected">'+ arrNombre.join(' ') + '</option>');
                    $("." + Clase).each(function () {
                        $(this).val("");
                    });
                    $("." + Clase).first().focus();
                    tablas(Destino, tipo);
                } else {
                    alert("El delito '" + arrNombre.join(' ') + "' ya se encuentra agregado.");
                }
            }else{ }
        };
        modificarImpofedel = function (Destino, tipo, valordelselect){
            var valordelselect = valordelselect || '';
            var datos = valordelselect.split(";");
            if (tipo == 'imputados'){
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
                    //validacion de consignacion/cereso
                    if ($("#cmbConsignacionI").val() == 1) {
                        $("#cmbCereso").removeAttr("disabled");
                    } else{
                        $("#cmbCereso").attr('disabled', 'disabled');
                    }
                    $("#divBotonActualizarImputadoF").html('<input type="submit" class="btn btn-primary" id="inputModificarImputadoF" value="Modificar Imputado" onclick=\'return modificarImpofedel_ok("' + Destino + '","' + tipo + '","' + valordelselect + '");\'>');
                    $("#divBotonAgregaImputadoF").hide();
                    if ($("#idExhorto").val()!= "" && $("#idExhortoGenerado").val()!="") {
                        $("#inputAgregarImputadoF").attr('disabled', 'disabled');
                        $("#inputModificarImputadoF").attr('disabled','disabled');
                    }else{
                        $("#inputAgregarImputadoF").attr('disabled', false);
                        $("#inputModificarImputadoF").attr('disabled', false);
                    }
                } else{
                    $("#ImputadosMoral").slideDown();
                    $("#ImputadosFisica").slideUp();
                    $("#cmbTipoPersonaImputado").val(datos[1]);
                    $("#txtNombreMoralI").val(datos[2]);
                    $("#cmbConsignacionIMoral").val(datos[3]);
                    $("#cmbEstadoMoralI").val(datos[5]);
                    cargaMunicipioMoralI(); //alert(datos[6]);
                    $("#cmbMunicipioMoralI").val(datos[6]);
                    $("#txtDomicilioMoralI").val(datos[7]);
                    $("#divBotonActualizarImputadoM").html('<input type="submit" class="btn btn-primary" id="inputModificarImputadoM" value="Modificar Imputado" onclick=\'return modificarImpofedel_ok("' + Destino + '","' + tipo + '","' + valordelselect + '");\'>');
                    $("#divBotonAgregaImputadoM").hide();
                    if ($("#idExhorto").val()!= "" && $("#idExhortoGenerado").val()!="") {
                        $("#inputAgregarImputadoM").attr('disabled', 'disabled');
                        $("#inputModificarImputadoM").attr('disabled','disabled');
                    }else{
                        $("#inputAgregarImputadoM").attr('disabled', false);
                        $("#inputModificarImputadoM").attr('disabled', false);
                    }
                }
            }
            if (tipo == "ofendidos") {

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
                $("#divBotonAgregaOfendidoF").hide();
                $("#divBotonActualizarOfendidoF").html('<input type="submit" class="btn btn-primary" id="inputModificarOfendidoF" value="Modificar Ofendido" onclick=\'return modificarImpofedel_ok("' + Destino + '","' + tipo + '","' + valordelselect + '");\'>');
                
                if ($("#idExhorto").val()!= "" && $("#idExhortoGenerado").val()!="") {

                    $("#inputAgregarOfendidosF").attr('disabled', 'disabled');
                    $("#inputModificarOfendidoF").attr('disabled','disabled');

                }else{

                    $("#inputAgregarOfendidosF").attr('disabled', false);
                    $("#inputModificarOfendidoF").attr('disabled', false);
                    
                }  

            } else{
                $("#OfendidosMoral").slideDown();
                $("#OfendidosFisica").slideUp();
                $("#cmbTipoPersonaOfendido").val(datos[1]);
                $("#txtNombreMoralO").val(datos[2]);
                $("#cmbEstadoMoralO").val(datos[4]);
                cargaMunicipioMoralO()
                $("#cmbMunicipioMoralO").val(datos[5]);
                $("#txtDomicilioMoralO").val(datos[6]);
                $("#divBotonAgregaOfendidoM").hide();
                $("#divBotonActualizarOfendidoM").html('<input type="submit" class="btn btn-primary" id="inputModificarOfendidoM" value="Modificar Ofendido" onclick=\'return modificarImpofedel_ok("' + Destino + '","' + tipo + '","' + valordelselect + '");\'>');
                
                if ($("#idExhorto").val()!= "" && $("#idExhortoGenerado").val()!="") {

                    $("#inputAgregarOfendidosM").attr('disabled', 'disabled');
                    $("#inputModificarOfendidoM").attr('disabled','disabled');

                }else{

                    $("#inputAgregarOfendidosM").attr('disabled', false);
                    $("#inputModificarOfendidoM").attr('disabled', false);
                    
                }
            }

            }
        };
        modificarImpofedel_ok = function (Destino, tipo, valordelselect){
            var valordelselect = valordelselect || '';
            var datos = valordelselect.split(";");
            console.log(datos);
            var cadena = "", nombre = "";
            if (datos[0] == 0) {
                if (tipo == "imputados") {
                    $(".required").remove();
                    if (datos[1] == 1) {
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
                        if ($("#cmbMunicipioI").val() == "" || $('#cmbMunicipioI').val() == 0) {
                            Error($('#cmbMunicipioI'), "Selecciona Municipio");
                            return false;
                        }
                        if ($("#txtDomicilioI").val() == "") {
                            Error($('#txtDomicilioI'), "Ingresa Domicilio");
                            return false;
                        }
                        if ($("#txtTelefonoI").val() == "") {
                            Error($('#txtTelefonoI'), "Ingresa Telefono");
                            return false;
                        }
                        if (isNaN($('#txtTelefonoI').val()) || $('#txtTelefonoI').val() <= 0) {
                            Error($('#txtTelefonoI'), "Telefono incorrecto");
                            return false;
                        }
                        if ($('#txtTelefonoI').val().length != 10) {
                            Error($("#txtTelefonoI"), "Telefono incorrecto, se requieren 10 digitos");
                            valida = false;
                        }
                        if ($("#cmbConsignacionI").val() == 1 ){
                            if ($("#cmbCereso").val() == "" || $('#cmbCereso').val() == 0) {
                                Error($('#cmbCereso'), "Selecciona Cereso");
                                return false;
                            }
                        }
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
                    } else{

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
                    if ($("#cmbMunicipioMoralI").val() == "" || $("#cmbMunicipioMoralI").val() == 0) {
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
                }
                if (tipo == "ofendidos") {
                $(".required").remove();
                        if (datos[1] == 1) {

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
                if ($("#cmbMunicipioO").val() == "" || $('#cmbMunicipioO').val() == 0) {
                Error($('#cmbMunicipioO'), "Selecciona Municipio");
                        return false;
                }
                if ($("#txtDomicilioO").val() == "") {
                Error($('#txtDomicilioO'), "Ingresa Domicilio");
                        return false;
                }
                if ($("#txtTelefonoO").val() == "") {
                Error($('#txtTelefonoO'), "Ingresa Telefono");
                        return false;
                }
                if (isNaN($('#txtTelefonoO').val()) || $('#txtTelefonoO').val() <= 0) {
                Error($('#txtTelefonoO'), "Telefono incorrecto");
                        return false;
                }
                if ($('#txtTelefonoO').val().length != 10) {
                Error($("#txtTelefonoO"), "Telefono incorrecto, se requieren 10 digitos");
                        valida = false;
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
                } else{

                if ($("#txtNombreMoralO").val() == "") {
                Error($('#txtNombreMoralO'), "Ingresa Nombre");
                        return false;
                }
                if ($("#cmbEstadoMoralO").val() == "" || $("#cmbEstadoMoralO").val() == 0) {
                Error($('#cmbEstadoMoralO'), "Selecciona Estado");
                        return false;
                }
                if ($("#cmbMunicipioMoralO").val() == "" || $("#cmbMunicipioMoralO").val() == 0) {
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

                }

                } else{

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
                    if (tipo == "imputados") {

            if (datos[1] == 1) {

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
            if ($("#cmbMunicipioI").val() == "" || $('#cmbMunicipioI').val() == 0) {
            Error($('#cmbMunicipioI'), "Selecciona Municipio");
                    return false;
            }
            if ($("#txtDomicilioI").val() == "") {
            Error($('#txtDomicilioI'), "Ingresa Domicilio");
                    return false;
            }
            if ($("#txtTelefonoI").val() == "") {
            Error($('#txtTelefonoI'), "Ingresa Telefono");
                    return false;
            }
            if (isNaN($('#txtTelefonoI').val()) || $('#txtTelefonoI').val() <= 0) {
            Error($('#txtTelefonoI'), "Telefono incorrecto");
                    return false;
            }
            if ($('#txtTelefonoI').val().length != 10) {
            Error($("#txtTelefonoI"), "Telefono incorrecto, se requieren 10 digitos");
                    valida = false;
            }
            if ($("#cmbConsignacionI").val() == 1 ){
                if ($("#cmbCereso").val() == "" || $('#cmbCereso').val() == 0) {
                Error($('#cmbCereso'), "Selecciona Cereso");
                        return false;
                }
            }

            listaImputados.push(new Imputados(datos[0], datos[1], datos[2], $("#cmbConsignacionI").val(),
                    $("#cmbGeneroImputado").val(), $("#cmbEstadoI").val(), $("#cmbMunicipioI").val(),
                    $("#txtDomicilioI").val().toUpperCase(), $("#txtAlias").val().toUpperCase(),
                    $("#txtTelefonoI").val(), $("#cmbCereso").val(),
                    $("#txtNombreFisicaI").val().toUpperCase(),
                    $("#txtPaternoFisicaI").val().toUpperCase(),
                    $("#txtMaternoFisicaI").val().toUpperCase()));
                    if (listaImputados.length > 0) {
            JsonLista = JSON.stringify(listaImputados);
                    JsonLista = decodeURIComponent(JsonLista);
            }

            } else{

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
            if ($("#cmbMunicipioMoralI").val() == "" || $("#cmbMunicipioMoralI").val() == 0) {
            Error($('#cmbMunicipioMoralI'), "Selecciona Municipio");
                    return false;
            }
            if ($("#txtDomicilioMoralI").val() == "") {
            Error($('#txtDomicilioMoralI'), "Ingresa Domicilio");
                    return false;
            }

            listaImputados.push(new Imputados(datos[0], datos[1], $("#txtNombreMoralI").val().toUpperCase(),
                    $("#cmbConsignacionIMoral").val(), datos[4], $("#cmbEstadoMoralI").val(),
                    $("#cmbMunicipioMoralI").val(),
                    $("#txtDomicilioMoralI").val().toUpperCase(), datos[8],
                    datos[9], datos[10], datos[11], datos[12], datos[13]));
                    if (listaImputados.length > 0) {
            JsonLista = JSON.stringify(listaImputados);
                    JsonLista = decodeURIComponent(JsonLista);
            }

            }

            }
            if (tipo == "ofendidos") {

            if (datos[1] == 1) {

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
            if ($("#cmbMunicipioO").val() == "" || $('#cmbMunicipioO').val() == 0) {
            Error($('#cmbMunicipioO'), "Selecciona Municipio");
                    return false;
            }
            if ($("#txtDomicilioO").val() == "") {
            Error($('#txtDomicilioO'), "Ingresa Domicilio");
                    return false;
            }
            if ($("#txtTelefonoO").val() == "") {
            Error($('#txtTelefonoO'), "Ingresa Telefono");
                    return false;
            }
            if (isNaN($('#txtTelefonoO').val()) || $('#txtTelefonoO').val() <= 0) {
            Error($('#txtTelefonoO'), "Telefono incorrecto");
                    return false;
            }
            if ($('#txtTelefonoO').val().length != 10) {
            Error($("#txtTelefonoO"), "Telefono incorrecto, se requieren 10 digitos");
                    valida = false;
            }


            listaOfendidos.push(new Ofendidos(datos[0], datos[1], datos[2],
                    $("#cmbGeneroOfendido").val(), $("#cmbEstadoO").val(), $("#cmbMunicipioO").val(),
                    $("#txtDomicilioO").val().toUpperCase(), $("#txtTelefonoO").val(),
                    $("#txtNombreFisicaO").val().toUpperCase(),
                    $("#txtPaternoFisicaO").val().toUpperCase(),
                    $("#txtMaternoFisicaO").val().toUpperCase()));
                    if (listaOfendidos.length > 0) {
            JsonLista = JSON.stringify(listaOfendidos);
                    JsonLista = decodeURIComponent(JsonLista);
            }

            } else{

            if ($("#txtNombreMoralO").val() == "") {
            Error($('#txtNombreMoralO'), "Ingresa Nombre");
                    return false;
            }
            if ($("#cmbEstadoMoralO").val() == "" || $("#cmbEstadoMoralO").val() == 0) {
            Error($('#cmbEstadoMoralO'), "Selecciona Estado");
                    return false;
            }
            if ($("#cmbMunicipioMoralO").val() == "" || $("#cmbMunicipioMoralO").val() == 0) {
            Error($('#cmbMunicipioMoralO'), "Selecciona Domicilio");
                    return false;
            }
            if ($("#txtDomicilioMoralO").val() == "") {
            Error($('#txtDomicilioMoralO'), "Ingresa Domicilio");
                    return false;
            }

            listaOfendidos.push(new Ofendidos(datos[0], datos[1], $("#txtNombreMoralO").val().toUpperCase(),
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

                    if (datos[1] == 1) {

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
                    } else{

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
                            limpiaFormularioSeccion(1);
                    }
                    if (tipo == "ofendidos") {

                    if (datos[1] == 1) {

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
                    } else{

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
                            limpiaFormularioSeccion(2);
                    }
                    tablas(Destino, tipo);
                    } else{
                    showMessage(data.mensaje, 'divAlertDagerImputado');
                            showMessage(data.mensaje, 'divAlertDagerOfendido');
                    }
                    }

            });
            }
        };

        /**
        * Imputados - Oculta los divs de captura y reinicia el combo de tipo persona
        * @param {int} seccion - Es el Id de la seccion a limpiar. 1-Imputados, 2-Ofendidos
        */
        limpiaFormularioSeccion = function(seccion){
            var seccion = seccion || 1;
            if(seccion == 1){
                $('#cmbTipoPersonaImputado').val(0);
                $("#ImputadosFisica").slideUp();
                $("#ImputadosMoral").slideUp();
            }else if(seccion == 2){
                $('#cmbTipoPersonaOfendido').val(0);
                $("#OfendidosFisica").slideUp();
                $("#OfendidosMoral").slideUp();
            }
        }

        limpiarImputado = function (Destino, tipo){
            $(".required").remove();
            $("#txtNombreMoralI").val('');
            $("#cmbConsignacionIMoral").val(0);
            $("#cmbEstadoMoralI").val(0);
            $("#cmbMunicipioMoralI").empty().append('<option value="0">Seleccione un Estado</option>').val(0);
            $("#txtDomicilioMoralI").val('');
            $("#txtNombreFisicaI").val('');
            $("#txtPaternoFisicaI").val('');
            $("#txtMaternoFisicaI").val('');
            $("#cmbConsignacionI").val(0);
            $("#cmbGeneroImputado").val(0);
            $("#cmbEstadoI").val(0);
            $("#cmbMunicipioI").empty().append('<option value="0">Seleccione un Estado</option>').val(0);
            $("#txtDomicilioI").val('');
            $("#txtAlias").val('');
            $("#txtTelefonoI").val('');
            $("#cmbCereso").val(0);
            $("#divBotonActualizarImputadoM").html('');
            $("#divBotonActualizarImputadoF").html('');
            $("#divBotonAgregaImputadoM").show();
            $("#divBotonAgregaImputadoF").show();
            $('#' + Destino + ' option').prop("selected", true);
        };

        limpiarOfendido = function (Destino, tipo) {
            $("#cmbGeneroOfendido").val(0);
            $("#cmbEstadoO").val(0);
            $("#cmbMunicipioO").empty().append('<option value="0">Seleccione un Estado</option>').val(0);
            $("#txtDomicilioO").val('');
            $("#txtTelefonoO").val('');
            $("#txtNombreFisicaO").val('');
            $("#txtPaternoFisicaO").val('');
            $("#txtMaternoFisicaO").val('');
            $("#txtNombreMoralO").val('');
            $("#cmbEstadoMoralO").val(0);
            $("#cmbMunicipioMoralO").empty().append('<option value="0">Seleccione un Estado</option>').val(0);
            $("#txtDomicilioMoralO").val('');
            $("#divBotonActualizarOfendidoM").html('');
            $("#divBotonActualizarOfendidoF").html('');
            $("#divBotonAgregaOfendidoM").show();
            $("#divBotonAgregaOfendidoF").show();
            $('#' + Destino + ' option').prop("selected", true);
        };

        borraPersona = function (Destino, tipo, valordelselect) {
            var valordelselect = valordelselect || '';

            $('#' + Destino + ' option').prop("selected", false);
                    if (valordelselect != ''){
            $('#' + Destino + ' > option[value="' + valordelselect + '"]').prop("selected", true);
            }

            if ($("#idExhorto").val() == "") {
                if (confirm("Esta seguro de eliminar ? a:\n"+ $('#' + Destino).find('option:selected').text())) {
                    $('#' + Destino).find('option:selected').remove().end();
                }
                $('#' + Destino + ' option').prop("selected", true);
                tablas(Destino, tipo);
            } else{

            if (confirm("Se eliminará el delito: '"+ $('#' + Destino).find('option:selected').text()+ "'. ¿Continuar?" )) {

            var idExhorto = $("#idExhorto").val();
                    var cadena = $('#' + Destino).val();
                    var JsonLista = "";
                    var listaImputados = new Array();
                    var listaOfendidos = new Array();
                    var listaDelitos = new Array();
                    if (tipo == "imputados") {

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
                    }
                    if (tipo == "ofendidos") {

                    showMessage(data.mensaje, 'divAlertSuccesOfendido');
                    }
                    if (tipo == "delitos") {

                    showMessage(data.mensaje, 'divAlertSuccesDelito');
                    }

                    tablas(Destino, tipo);
                    } else{
                    //console.log(data.mensaje);
                            showMessage(data.mensaje, 'divAlertDagerImputado');
                            showMessage(data.mensaje, 'divAlertSuccesOfendido');
                            showMessage(data.mensaje, 'divAlertSuccesDelito');
                    }
                    }

            });
            }

            }
        };
        verFormI = function (){

            var result = ($('#formImputados').css('display') == 'block')? true : false;
                    if (result) {
            $('#formImputados').slideUp();
            } else{
            $('#formImputados').slideDown();
            }
        };
        verFormO = function (){

            var result = ($('#formOfendidos').css('display') == 'block')? true : false;
                    if (result) {
            $('#formOfendidos').slideUp();
            } else{
            $('#formOfendidos').slideDown();
            }
        };
        verFormD = function (){

            var result = ($('#formDelitos').css('display') == 'block')? true : false;
                    if (result) {
            $('#formDelitos').slideUp();
            } else{
            $('#formDelitos').slideDown();
            }
        };
        changeLabel = function (objOption, clave) {

            if ($("#cmbTipoCarpeta").val() == 0 || $("#cmbTipoCarpeta").val() == "") {

            $("#lblRelationName" + clave).html("No. Causa <span class='requerido'>(*)</span>");
            } else{
            $("#lblRelationName" + clave).html("No. " + $("#" + objOption.id + " option:selected").text() + " <span class='requerido'>(*)</span>");
            }
        };
        changeLabel2 = function (objOption, clave) {

            if ($("#cmbTipoCarpetaConsulta").val() == 0 || $("#cmbTipoCarpetaConsulta").val() == "") {

            $("#lblRelationName2" + clave).html("No. de");
            } else{

            $("#lblRelationName2" + clave).html("No. de " + $("#" + objOption.id + " option:selected").text() + "");
            }
        };
        changeLabelG = function (objOption, clave) {

            if ($("#cmbTipoCarpetaG").val() == 0 || $("#cmbTipoCarpetaG").val() == "") {

            $("#lblRelationNameG" + clave).html("No. Causa <span class='requerido'>(*)</span>");
            } else{

            $("#lblRelationNameG" + clave).html("No. " + $("#" + objOption.id + " option:selected").text() + " <span class='requerido'>(*)</span>");
            }
        };
        changeLabelGConsulta = function (objOption, clave) {

            if ($("#cmbTipoCarpetaGConsulta").val() == 0 || $("#cmbTipoCarpetaGConsulta").val() == "") {

            $("#lblRelationNameGConsulta" + clave).html("No. Causa");
            } else{

            $("#lblRelationNameGConsulta" + clave).html("No. " + $("#" + objOption.id + " option:selected").text() + "");
            }
        };
        validaExhorto = function (){
            $(".required").remove();
            var mensaje = "";
            var error = true;
            if ($('#cmbTipoCarpeta').val() == "" || $('#cmbTipoCarpeta').val() == "0") {
                Error($('#cmbTipoCarpeta'), "Selecciona Tipo de Carpeta");
                error = false;
            }
            if ($('#txtCarpetaInv').val() == "") {
                Error($('#txtCarpetaInv'), "Ingresa Carpeta de Investigacion");
                error = false;
            }
            if ($('#txtNuc').val() == "") {
                Error($('#txtNuc'), "Ingresa Nuc");
                error = false;
            }
            if ($('#txtNumeroC').val() == "" || $('#txtAnioC').val() == "") {
                Error($('#txtNumeroC'), "Ingresa Numero y A\u00f1o de Causa");
                error = false;
            }
            if (isNaN($('#txtNumeroC').val()) || $('#txtNumeroC').val() <= 0) {
                Error($('#txtNumeroC'), "Numero incorrecto");
                error = false;
            }
            if ($('#txtAnioC').val().length != 4 || $('#txtAnioC').val() < 2000) {
                Error($('#txtAnioC'), " A\u00f1o de causa incorrecto");
                error = false;
            }
            if ($('#txtOficio').val() == "" || $('#txtAnioO').val() == "") {
                Error($('#txtOficio'), "Ingresa Numero y A\u00f1o de Oficio");
                error = false;
            }
            if (isNaN($('#txtOficio').val()) || $('#txtOficio').val() <= 0) {
                Error($('#txtOficio'), "Numero incorrecto");
                error = false;
            }
            if ($('#txtAnioO').val().length != 4 || $('#txtAnioO').val() < 2000) {
                Error($('#txtAnioO'), " A\u00f1o de oficio incorrecto");
                error = false;
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
            if ($('#lstImputados').val() == null) {
                Error($('#divTablaImputados'), "Ingresa al menos un Imputado");
                error = false;
            }
            else{
                $('select#lstImputados').find('option').each(function () {
                    var datos = this.value.split(";");
                    if (datos[6] == 0){
                        Error($('#divTablaImputados'), "Debe Seleccionar municipio");
                        error = false;
                    } else{
                        // listaImputados.push(new Imputados(datos[0], datos[1], datos[2], datos[3],
                        //         datos[4], datos[5], datos[6], datos[7], datos[8],
                        //         datos[9], datos[10], datos[11], datos[12], datos[13]));
                    }
                });
            }
            if ($('#lstOfendidos').val() == null) {
                Error($('#divTablaOfendidos'), "Ingresa al menos un Ofendido");
                error = false;
            }else{
                $('select#lstOfendidos').find('option').each(function () {
                    var datos = this.value.split(";");
                    if (datos[5] == 0){
                        Error($('#divTablaOfendidos'), "Debe Seleccionar municipio");
                        error = false;
                    } else{
                        // listaOfendidos.push(new Ofendidos(datos[0], datos[1], datos[2], datos[3],
                        //         datos[4], datos[5], datos[6], datos[7], datos[8],
                        //         datos[9], datos[10]));
                    }
                });
            }
            if ($('#lstDelitos').val() == null) {
                Error($('#divTablaDelitos'), "Ingresa al menos un Delito");
                error = false;
            }
            if (error == false){
                showMessage('Ingresa Los Campos Mencionados', 'divAlertWarning');
            }
            if ( temporal.numExhorto==false ) {
                Error($('#msjValidacion'), "Ingresa datos validos en N&uacute;mero y A&ntilde;o del Exhorto.");
                error = false;
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
                            accion: 'consultar'
                    },
                    success: function (data) {

                    var table = "";
                            $.each(data.data, function(key, value){

                            var separa = value.fechaRegistro.split(" ");
                                    var fecha = separa[0];
                                    var hrs = separa[1] + ' hrs.';
                                    fecha = fecha.split("-");
                                    var dia = fecha[2];
                                    var mes = fecha[1];
                                    var anio = fecha[0];
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
                                    table += '                                    -webkit-border-radius: 5px; ">';
                                    table += '  <tr>';
                                    table += '    <td width="160"><strong>Numero Exhorto :</strong></td>';
                                    table += '    <td width="215">' + value.numExhorto + '/' + value.aniExhorto + '</td>';
                                    table += '    <td width="240" align="right"><strong>Fecha de Alta :</strong></td>';
                                    table += '    <td width="167">' + dia + '/' + mes + '/' + anio + ' ' + hrs + '</td>';
                                    table += '  </tr>';
                                    table += '  <tr>';
                                    table += '    <td><strong>Numero de Causa :</strong></td>';
                                    table += '    <td>' + value.numero + '/' + value.anio + '</td>';
                                    table += '    <td>&nbsp;</td>';
                                    table += '    <td>&nbsp;</td>';
                                    table += '  </tr>';
                                    table += '  <tr>';
                                    table += '    <td><strong>Numero de Oficio :</strong></td>';
                                    table += '    <td>' + value.numOficio + '</td>';
                                    table += '    <td>&nbsp;</td>';
                                    table += '    <td>&nbsp;</td>';
                                    table += '  </tr>';
                                    table += '  <tr>';
                                    table += '    <td><strong>Carpeta Inv :</strong></td>';
                                    table += '    <td>' + value.carpetaInv + '</td>';
                                    table += '    <td>&nbsp;</td>';
                                    table += '    <td>&nbsp;</td>';
                                    table += '  </tr>';
                                    table += '</table>';
                                    table += '<p></p> ';
                                    table += '<table width="800" border="0" style="border: solid thin #033;';
                                    table += '                                    border-radius: 5px;';
                                    table += '                                    -moz-border-radius: 5px;';
                                    table += '                                    -webkit-border-radius: 5px; ">';
                                    table += '  <tr style="font-size:13px">';
                                    table += '    <td width="160"><strong>Sintesis :</strong></td>';
                                    table += '    <td width="633">' + value.sintesis + '</td>';
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
                            $.each(value.listaImputados, function(key2, value2){
                            if (value2.cveTipoPersona == 1) { //Fisica

                            table += '  <tr style="font-size:13px">';
                                    table += '    <td width="89"><strong>Nombre :</strong></td>';
                                    table += '    <td width="187">' + value2.nombre + ' ' + value2.paterno + ' ' + value2.materno + '</td>';
                                    table += '    <td width="90"><strong>Cereso :</strong></td>';
                                    table += '    <td width="158">' + value2.desCereso + '</td>';
                                    table += '    <td width="75" align="right"><strong>Estatus :</strong></td>';
                                    table += '    <td width="167">' + value2.desConsignacion + '</td>';
                                    table += '  </tr>';
                            } else{

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
                            $.each(value.listaOfendidos, function(key3, value3){
                            if (value3.cveTipoPersona == 1) { //Fisica

                            table += '  <tr style="font-size:13px">';
                                    table += '    <td width="89"><strong>Nombre :</strong></td>';
                                    table += '    <td>' + value3.nombre + ' ' + value3.paterno + ' ' + value3.materno + '</td>';
                                    table += '    <td align="right"><strong>Genero :</strong></td>';
                                    table += '    <td width="167">' + value3.desGenero + '</td>';
                                    table += '  </tr>';
                            } else{

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
                            $.each(value.listaDelitos, function(key4, value4){

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
                                    table += '</div>';
                                    //$('#div_imprimirER').html(table);

                                    w = window.open("", 'Print_Page', 'scrollbars=yes');
                                    w.document.write(table);
                                    w.document.close();
                                    w.print();
                                    w.close();
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
                                    cveTipoEstatus : 6

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
            } else{
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
            } else{
            $("#juzgadosEstadoGConsulta").slideUp();
                    $("#juzgadosFueraGConsulta").slideDown();
                    $('#cmbJuzgadoGConsulta').select2('val', '');
            }
        };
        guardarExhortoG = function () {
            $(".required").remove();
                    if (validaExhortoG()) {

                    var Juzgado = $("#txtJuzgadoPG").val();
                    $.ajax({
                    type: "POST",
                            url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                            async: false,
                            dataType: "json",
                            data: {
                            idActuacion: $("#idActuacion").val(),
                                    cveTipoCarpeta: $("#cmbTipoCarpetaG").val(),
                                    numero: $("#txtNumeroCG").val(),
                                    anio: $("#txtAnioCG").val(),
                                    sintesis: $("#txtSintesisG").val(),
                                    cveEstadoProcedencia: $("#cmbEstadoG").val(),
                                    cveJuzgadoProcedencia: $("#cmbJuzgadoG").val(),
                                    juzgadoProcedencia: Juzgado,
                                    observaciones: $("#txtObservacionesG").val(),
                                    cveEstatusExhorto: $("#cmbEstatusG").val(),
                                    requisitoria: $("#requisitoria").prop("checked") ? 'S' : 'N',
                                    accion: 'guardarGenerado'
                            },
                            success: function (data) {

                            if (data.estatus == "ok") {


                            if ($("#idActuacion").val() != "") {
                            buscarExhortoG(1);
                                    showMessage(data.mensaje, 'divAlertSuccesE');
                            } else{

                            var cveJuzgado = data.data.cveJuzgado;
                                    var cadena = "'" + data.idExhortoGenerado + "','" + $("#cmbTipoCarpetaG").val() +
                                    "','" + $("#txtNumeroCG").val() + "','" + $("#txtAnioCG").val() +                                
                                    "','" + $("#cmbEstadoG").val() + "','" + $("#cmbJuzgadoG").val() +
                                    "','" + Juzgado + "','" + cveJuzgado + "'";
                                    /*  $("#div_respuestaG").parent().append("<br class='required'><label class='Respuesta required'>"+data.mensaje+"<br>"+
                                     "<a onclick=\"enviarEG(" + cadena + ")\" style='cursor:pointer' title='Enviar a Exhortos Recibidos'>Enviar Exhorto</a></label>");*/
                                    showMessage(data.mensaje + "<br>" + "<a onclick=\"enviarEG(" + cadena + ")\" style='cursor:pointer' title='Enviar a Exhortos Recibidos'><span style='color:green' class='glyphicon glyphicon-envelope' aria-hidden='true'></span> Enviar Exhorto</a>", 'divAlertSuccesE');
                                    $("#div_enviarEG").html(" <a onclick=\"enviarEG(" + cadena + ")\" style='cursor:pointer' title='Enviar a Exhortos Recibidos'><span style='color:green' class='glyphicon glyphicon-envelope' aria-hidden='true'></span> Enviar Exhorto</a>");
                                    $(".bloqueoEG").attr('disabled', 'disabled');
                                    $("#btn_guardar").hide();
                            }
                            $("#numeroEG").val(data.data.numActuacion);
                                    $("#anioEG").val(data.data.aniActuacion);
                                    // $(".bloqueoEG").attr('disabled', 'disabled');
                                    // $("#btn_guardar").hide();                    

                            } else{
                            showMessage(data.mensaje, 'divAlertDagerE');
                            }
                            }

                    });
            }
        };
        validaExhortoG = function (){
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

            if (error == false){

            //Error($('#div_respuestaG'),"Ingresa Los Campos Mencionados");
            showMessage('Ingresa Los Campos Mencionados', 'divAlertWarningE');
            }

            return error;
        };
        limpiar3 = function () {

            $("#idActuacion").val("");
                    $("#cmbTipoCarpetaG").val(0);
                    $("#txtNumeroCG").val("");
                    $("#txtAnioCG").val("");
                    $("#txtSintesisG").val("");
                    $("#cmbEstadoG").val(0);
                    $("#txtJuzgadoPG").val("");
                    $("#txtObservacionesG").val("");
                    $("#cmbEstatusG").val(0);
                    $('#cmbJuzgadoG').select2('val', '');
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
        };
        limpiar4 = function () {

            $("#cmbTipoCarpetaGConsulta").val(0);
                    $("#txtNumeroCGConsulta").val("");
                    $("#txtAnioCGConsulta").val("");
                    $("#txtSintesisGConsulta").val("");
                    $("#cmbEstadoGConsulta").val(0);
                    $("#txtJuzgadoPGConsulta").val("");
                    $("#cmbEstatusGConsulta").val(0);
                    $('#cmbJuzgadoGConsulta').select2('val', '');
                    //$("#requisitoriaConsulta").removeAttr('checked');
                    $('#numeroEGC').val('');
                    $('#anioEGC').val('');
                    $('#fechaInicialG,#fechaFinalG').val(getDate('today'));
                    $("#div_respuestaConsultaGenerado").html("");
                    $(".required").remove();
        };
        consultarG = function () {
            if ($("#divExhortosGenerados").is(":visible")) {
            $("#divExhortosGenerados").hide('fade');
                    $("#divExhortosGeneradosConsulta").show('slide');
                    //$("#registro").html("Consulta de Exhortos Generados");
                    limpiar3();
            } else {
            $("#divExhortosGenerados").show('slide');
                    $("#divExhortosGeneradosConsulta").hide('fade');
                    //$("#registro").html("Registro de Exhortos Generados");
            }
        };
        buscarExhortoG = function (pagina, nRegistros) {
            var nRegistros = nRegistros || 0;
            $(".required").remove();
                    var fechaInicial = $("#fechaInicialG").val();
                    var fechaFinal = $("#fechaFinalG").val();
                    var estado = $("#cmbEstadoGConsulta").val();
                    var cveJuzgado = $("#cmbJuzgadoGConsulta").val();
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
            } else{

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
            } else{

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
                            sintesis: $("#txtSintesisGConsulta").val(),
                            cveEstadoProcedencia: estado,
                            cveJuzgadoProcedencia: cveJuzgado,
                            juzgadoProcedencia: Juzgado,
                            cveJuzgado: cveJuzgado, // $("#cveJuzgado").val(),
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
                    } else{
                    $("#div_respuestaConsultaGenerado").html("");
                            showMessage(data.mensaje, 'divAlertWarningEC')
                    }
                    }

            });
            }
        };
        paginacionExhortoGenerado = function (total, pagina) {
            var pagina = pagina || 1;
            var permisos = 1;
            if (pagina == 0) {

            pagina = $("#cmbPaginasG").val();
            };
            $(".required").remove();
            var fechaInicial = $("#fechaInicialG").val();
            var fechaFinal = $("#fechaFinalG").val();
            var estado = $("#cmbEstadoGConsulta").val();
            var cveJuzgado = $("#cmbJuzgadoGConsulta").val();
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
            };
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
            } else{

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
                            sintesis: $("#txtSintesisGConsulta").val(),
                            cveEstadoProcedencia: estado,
                            cveJuzgadoProcedencia: cveJuzgado,
                            juzgadoProcedencia: Juzgado,
                            cveJuzgado: cveJuzgado, // $("#cveJuzgado").val(),
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
                            table += "            <th>Año</th>";
                            table += "            <th>Tipo Carpeta</th>";
                            table += "            <th>Estado</th>";
                            table += "            <th>Juzgado Destino</th>";
                            table += "            <th>Estatus</th>";
                            table += "            <td align='center'>Enviar</td>";
                            table += "            <td align='center'>Eliminar</td>";
                            table += "        </tr>";
                            table += "    </thead>";
                            table += "    <tbody>";
                            $.each(data.data, function(key, value){
                            var juz = (value.desJuzgadoDestino != "") ? value.desJuzgadoDestino : value.JuzgadoDestino;
                                    var cadena2 = "'" + value.idExhortoGenerado + "','" + value.cveTipoCarpeta + "','" + value.numero +
                                    "','" + value.anio + "','" + value.cveEstado + "','" + value.cveJuzgadoDestino +
                                    "','" + value.JuzgadoDestino + "','" + value.cveJuzgado + "'";
                                    inicio++;
                                    table += "<tr>";
                                    table += "   <td onclick=\"seleccionaEG(" + value.idActuacion + ")\" > " + inicio + "</td>";
                                    table += "   <td onclick=\"seleccionaEG(" + value.idActuacion + ")\" > " + value.numActuacion + "</td>";
                                    table += "   <td align='left' onclick=\"seleccionaEG(" + value.idActuacion + ")\" >" + value.aniActuacion + "</td>";
                                    table += "   <td align='left' onclick=\"seleccionaEG(" + value.idActuacion + ")\" >" + value.desTipoCarpeta + "</td>";
                                    table += "   <td align='left' onclick=\"seleccionaEG(" + value.idActuacion + ")\" >" + value.desEstado + "</td>";
                                    table += "   <td align='left' onclick=\"seleccionaEG(" + value.idActuacion + ")\" >" + juz + "</td>";
                                    table += "   <td align='left' onclick=\"seleccionaEG(" + value.idActuacion + ")\" >" + value.desEstatus + "</td>";
                                    if (value.generado == 0) {
                                        table += "   <td align='center' ><a onclick=\"enviarEG(" + cadena2 + ")\" style='cursor:pointer' title='Enviar a Exhortos Recibidos'><span style='color:green' class='glyphicon glyphicon-envelope' aria-hidden='true'></span></a></td>";
                                        if (permisos==1) {
                                            table += "   <td align='center' ><img src='img/eliminar.png' width=20 height=20 onclick=\"eliminarEG('" + total + "','" + pagina + "','" + value.idActuacion + "')\" style='cursor:pointer' title='Eliminar'></td>";

                                        }else{

                                            table += "     <td></td>";
                                        }
                                    } else{
                                    table += "     <td></td>";
                                            table += "     <td></td>";
                                    }

                                    table += "</tr> ";
                                    cadena = "";
                                });
                                table += "</tbody>";
                                table += "</table><br>";
                                $("#div_respuestaConsultaGenerado").html(table);
                                $("#tblResultadosGrid").DataTable({paging: false});
                        } else{

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
                                    } else{
                                    //console.log(data.mensaje);
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

            $(".required").remove();
                    $.ajax({
                    type: "POST",
                            url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                            async: false,
                            dataType: "json",
                            data: {
                            idActuacion : idActuacion,
                                    pagina: 1,
                                    totalRegistros: 1,
                                    activo: 'S',
                                    accion: 'buscarGenerado'
                            },
                            success: function (data) {
                            $.each(data.data, function(key, value){

                            // if (juzgadoDestino=="" || juzgadoDestino== null) {
                            //     juzgadoDestino="";
                            // }
                            $("#divExhortosGenerados").slideDown();
                                    $("#divExhortosGeneradosConsulta").slideUp();
                                    $("#idActuacion").val(value.idActuacion);
                                    $("#cmbTipoCarpetaG").val(value.cveTipoCarpeta);
                                    $("#txtNumeroCG").val(value.numero);
                                    $("#txtAnioCG").val(value.anio);
                                    $("#txtSintesisG").val(value.sintesis);
                                    $("#cmbEstadoG").val(value.cveEstado);
                                    $("#txtJuzgadoPG").val(value.JuzgadoDestino);
                                    $("#txtObservacionesG").val(value.observaciones);
                                    $("#cmbEstatusG").val(value.cveEstatus);
                                    $('#cmbJuzgadoG').val(value.cveJuzgadoDestino);
                                    $('#cmbJuzgadoG').select2('val', value.cveJuzgadoDestino);
                                    $("#numeroEG").val(value.numActuacion);
                                    $("#anioEG").val(value.aniActuacion);
                                    if ($("#cmbEstadoG").val() == 15) {
                            $("#juzgadosEstadoG").slideDown();
                                    $("#juzgadosFueraG").slideUp();
                            } else{
                            $("#juzgadosEstadoG").slideUp();
                                    $("#juzgadosFueraG").slideDown();
                            }
                            if (value.Requisitoria == 'S') {
                            //  $("#requisitoria").attr('checked',true);
                            $("#requisitoria").prop("checked", true);
                            } else{
                            //$("#requisitoria").attr('checked',false);
                            $("#requisitoria").removeAttr('checked');
                            }

                            $("#btn_imprimirEG").html('<input type="submit" class="btn btn-primary" id="inputImprimir" value="Imprimir" onclick="imprimirEG(' + value.idActuacion + ')"> ');
                                    if (value.idExhorto != "") {

                            $("#btn_verER").html('<input type="submit" class="btn btn-primary" id="inputVerER" value="Ver Exhorto" onclick="verER(' + value.idExhorto + ')"> ');
                                    $("#btn_guardar").hide();
                                    $("#div_enviarEG").html("");
                                    $(".bloqueoEG").attr('disabled', 'disabled');
                            } else{
                                    $("#btn_verER").html("");
                                    $("#btn_guardar").show();
                                    $(".bloqueoEG").removeAttr("disabled");
                                    var cadena = "'" + value.idExhortoGenerado + "','" + value.cveTipoCarpeta +
                                    "','" + value.numero + "','" + value.anio +
                                    "','" + value.cveEstado + "','" + value.cveJuzgadoDestino +
                                    "','" + value.JuzgadoDestino + "','" + value.cveJuzgado + "'";
                                    $("#div_enviarEG").html(" <a onclick=\"enviarEG(" + cadena + ")\" style='cursor:pointer' title='Enviar a Exhortos Recibidos'><span style='color:green' class='glyphicon glyphicon-envelope' aria-hidden='true'></span> Enviar Exhorto</a>");
                            }


                            });
                            }

                    });
                    //$("#registro").html("Registro de Exhortos Generados");
        };
        verER = function (idExhorto) {

                    seleccionaE(idExhorto);
                    $("#divExhortosGenerados").slideUp();
                    $("#divExhortosGeneradosConsulta").slideUp();
                    $("#divCamposConsulta").slideUp();
                    $("#divCampos").slideDown();
                    $("#divFormulario").slideDown();
                    //$("#registro").html("Registro de Exhortos Recibidos");
                    $("#btn_accionE").hide();
                    $(".bloqueoE").attr('disabled', 'disabled');
                    $("#divTablaDelitos").attr('disabled', 'disabled');
                    $("#btn_regresarER").html('<input type="submit" class="btn btn-primary" id="inputregresarER" value="Regresar" onclick="regresarER(1)"> ');
        };
        regresarER = function (tipo) {

            if (tipo == 1) {

                $("#divExhortosGenerados").slideDown();
                $("#divExhortosGeneradosConsulta").slideUp();
                $("#idExhorto").val("");
                $("#idExhortoGenerado").val("");
                //$("#registro").html("Registro de Exhortos Generados");
            }
            if (tipo == 2) {

                $("#divExhortosGenerados").slideUp();
                $("#divExhortosGeneradosConsulta").slideDown();
                $("#cveJuzgado").val(cveJuzgado);  //.val(<?= $cveJuzgado ?>);
                $("#idExhorto").val("");
                $("#idExhortoGenerado").val("");
                //$("#registro").html("Consulta de Exhortos Generados");
            }

                $("#divCamposConsulta").slideUp();
                $("#divCampos").slideUp();
                $("#divFormulario").slideUp();
        };
        enviarEG = function (idExhortoGenerado, cveTipoCarpeta, numero, anio, cveEstado, cveJuzgadoDestino, juzgadoDestino, cveJuzgadoRecibido) {


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
                $('#cmbJuzgado').select2('val', cveJuzgadoRecibido);
                $('#cveJuzgado').val(cveJuzgadoDestino);
                $("#txtJuzgadoP").val(juzgadoDestino);
                if ($("#cmbEstado").val() == 15) {
                $("#juzgadosEstado").slideDown();
                        $("#juzgadosFuera").slideUp();
                } else{
                $("#juzgadosEstado").slideUp();
                        $("#juzgadosFuera").slideDown();
                }

                $("#btn_accionE").show();
                    $(".required").remove();
                    //$("#registro").html("Registro de Exhortos Recibidos");
                    $("#btn_regresarER").html('<input type="submit" class="btn btn-primary" id="inputregresarER" value="Regresar" onclick="regresarER(2)"> ');
                    buscaImpofedel();
        };
        imprimirEG = function (idActuacion) {

            $.ajax({
            type: "POST",
                    url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                    async: false,
                    dataType: "json",
                    data: {
                    idActuacion : idActuacion,
                            pagina: 1,
                            totalRegistros: 1,
                            activo: 'S',
                            accion: 'buscarGenerado'
                    },
                    success: function (data) {
                    //console.log(data);
                    var table = "";
                            $.each(data.data, function(key, value){

                            var requi;
                                    if (value.Requisitoria == "S") {
                            requi = "SI";
                            } else{
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
                            } else{

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
                                    table += '    <td width="120"><strong>Numero Exhorto :</strong></td>';
                                    table += '    <td width="212">' + value.numActuacion + '/' + value.aniActuacion + '</td>';
                                    table += '    <td width="123" align="right"><strong>Fecha de Alta :</strong></td>';
                                    table += '    <td width="320">' + dia + '/' + mes + '/' + anio + ' ' + hrs + '</td>';
                                    table += '  </tr>';
                                    table += '  <tr>';
                                    table += '    <td><strong>Numero de Causa :</strong></td>';
                                    table += '    <td>' + value.numero + '/' + value.anio + '</td>';
                                    table += '    <td align="right"><strong>Destino :</strong></td>';
                                    table += '    <td>' + juzgado + '</td>';
                                    table += '  </tr>';
                                    table += '</table>';
                                    table += '<p></p> ';
                                    table += '<table width="800" border="0" style="border: solid thin #033;';
                                    table += '                                    border-radius: 5px;';
                                    table += '                                    -moz-border-radius: 5px;';
                                    table += '                                    -webkit-border-radius: 5px; font-size:13px">';
                                    table += '  <tr>';
                                    table += '    <td width="120"><strong>Sintesis :</strong></td>';
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
                            $.each(value.listaImputados, function(key2, value2){
                            if (value2.cveTipoPersona == 1) { //Fisica

                            table += '  <tr style="font-size:13px">';
                                    table += '    <td width="100" align="right"><strong>Nombre :</strong></td>';
                                    table += '    <td width="700" align="left">' + value2.nombre + ' ' + value2.paterno + ' ' + value2.materno + '</td>';
                                    table += '  </tr>';
                            } else{

                            table += '  <tr style="font-size:13px">';
                                    table += '    <td width="100" align="right"><strong>Nombre :</strong></td>';
                                    table += '    <td width="700" align="left">' + value2.nombreMoral + '</td>';
                                    table += '  </tr>';
                            }

                            });
                            } else{

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
                                    table += '</div>';
                                    w = window.open("", 'Print_Page', 'scrollbars=yes');
                                    w.document.write(table);
                                    w.document.close();
                                    w.print();
                                    w.close();
                            });
                    }

            });
        };
        validaCarpeta = function () {
            var cveTipoCarpeta = $("#cmbTipoCarpetaG").val();
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
                            cveJuzgado: cveJuzgado, // $("#cveJuzgado").val(),
                            accion: 'buscarRelacion'
                    },
                    success: function (data) {
                    //console.log(data);
                    if (data.estatus == "ok") {

                    $("#resRelacion").html('<span style="color:green" class="glyphicon glyphicon-ok" aria-hidden="true"></span> ' + data.mensaje);
                    } else{
                    $("#resRelacion").html('<span style="color:red" class="glyphicon glyphicon-remove" aria-hidden="true"></span> ' + data.mensaje);
                    }
                    }

            });
            };
        };
        showMessage = function (message, div){
            var message = message || '';
            $('#' + div).html(message);
            $('#' + div).show("slide");
            setTimeout(function () { $("#" + div).hide("slide"); }, 3000);
        };
        getDate = function (element){
            var element = element || 'all';
                    var finaldate = '';
                    var today = new Date();
                    var dd = today.getDate();
                    var mm = today.getMonth() + 1; //January is 0!
                    var yyyy = today.getFullYear();
                    var hour = today.getHours();
                    var minu = today.getMinutes();
                    var secs = today.getSeconds();
                    if (dd < 10)  { dd = '0' + dd }
            if (mm < 10)  { mm = '0' + mm }
            if (minu < 10){ minu = '0' + minu }

            if (element == 'all'){
            finaldate = yyyy + '/' + mm + '/' + dd + ' ' + hour + ':' + minu + ':' + secs;
            }
            if (element == 'year'){
            finaldate = yyyy;
            }
            if (element == 'today'){
            finaldate = dd + '/' + mm + '/' + yyyy;
            }
            return finaldate
        };

        /**
        * FunciOn para validar que el valor entrate no sea '0' o vacio
        */
        validaVacio = function(valor){
            return (valor == 0 || valor == '') ? true : false ;
        }

        /**
        * ValidaciOn del cambio de nUmero y/o año en la actualizaciOn del Exhorto
        */
        $("#numeroE, #anioE").on('focusout', function(){
            if( $("#idExhorto").val() != '' ){
                $(".required").remove();
                var numero = $('#numeroE');
                var anio = $('#anioE');
                var anioOriginal = temporal.anio;
                var numeroOriginal = temporal.numero;
                var cveJuzgado 
                if( validaVacio(numero.val()) ){
                    showMessage('Ingrese un N&uacute;mero de Exhorto V&aacute;lido.','divAlertWarning_seccion1');
                }else if( validaVacio(anio.val()) ){
                    showMessage('Ingrese un A&ntilde;o de Exhorto V&aacute;lido.','divAlertWarning_seccion1');
                }else{
                    //verifica que no haya cambio de datos
                    if( numeroOriginal!=numero.val() || anioOriginal != anio.val() ){
                        //verifica cambio de anio
                        if(anioOriginal != anio.val()){
                            var statusAnio = confirm('¿Realmente desea actualizar el A&ntilde;o?');
                            if(!statusAnio){
                                anio.val(anioOriginal);                    
                            }
                        }
                        //busqueda de datos con la informacion ingresada
                        $.ajax({
                            url: "../fachadas/sigejupe/exhortos/ExhortosFacade.Class.php",
                            type: "POST",
                            async: false,
                            dataType: "json",
                            data: {
                                activo:'N',
                                numExhorto:numero.val(),
                                aniExhorto:anio.val(),
                                cveJuzgado: cveJuzgado,
                                accion:'consultarExhortosEliminados'
                            },
                            success: function (response) {
                                var objeto = eval(response);
                                var mensaje = '';
                                if(objeto.totalCount > 0 ){ //encontrO un valor vAlido
                                    temporal.numExhorto = true;
                                    showMessage('N&uacute;mero y A&ntilde;o de Exhorto validos.','divAlertSuccess_seccion1');
                                }else{
                                    temporal.numExhorto = false;
                                    showMessage('Datos incorrectos, verifiquelos e intente de nuevo.','divAlertWarning_seccion1');
                                }
                            } // fin success ajax
                        }); // fin ajax
                    }else{ // fin if de diferencia de los datos originales y nuevos
                        // si no hay cambios la bandera de actualizacion se reasigna a 'true'
                        temporal.numExhorto = true;
                    }
                } // fin else del proceso de los datos correctos
            } // fin if de validacion de id existente de exhorto
        });

        /**
        * Variables de control
        */
        var cveJuzgado = $('#cveJuzgado').val();
        var temporal = {
            anio:0,
            numero:0,
            numExhorto:true
        }

        $(function () {
            //consultar();
            $('#txtNumeroC, #txtAnioC, #txtOficio, #txtAnioO, #txtTelefonoI, #txtTelefonoO, #txtNumeroCConsulta, #txtAnioCConsulta, #txtOficioConsulta, #txtAnioOConsulta, #txtNumeroCG, #txtAnioCG, #txtNumeroCGConsulta, #txtAnioCGConsulta, #numeroEGC, #anioEGC, #numeroE, #anioE, #numeroEC, #anioEC').validaCampo('0123456789');
            $("#cmbJuzgado, #cmbJuzgadoConsulta, #cmbJuzgadoG, #cmbJuzgadoGConsulta").select2();
            $("#fechaInicial, #fechaFinal, #fechaInicialG, #fechaFinalG").datetimepicker({
                sideBySide: false,
                locale: 'es',
                format: "DD/MM/YYYY",
            }).val(getDate('today'));;
            cargaTipoCarpeta();
            cargaEstados();
            cargaConsigancion();
            cargaEstatus();
            cargaTipoPersona();
            cargaJuzgado();
            cargaGenero();
            cargaCereso();
            cargaDelito();
            $("#item1").click(verFormI);
            $("#item2").click(verFormO);
            $("#item3").click(verFormD); ////// acordeon
            //funciones para exhortos generados en el estado
            cargaEstatusG();
        });
    </script> 
<?php
} else {
    $salir = '<script>alert("La sesion caduco."); ';
    $salir .= 'window.location.href = "salir.php" </script>';
    echo $salir;
}
?>